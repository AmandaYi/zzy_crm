<?php 
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// |         lanfengye <zibin_5257@163.com>
// +----------------------------------------------------------------------

class Page {
    
    // 分页栏每页显示的页数
    public $rollPage = 5;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页URL地址
    public $url     =   '';
    // 默认列表每页显示行数
    public $listRows = 20;
    // 起始行数
    public $firstRow    ;
    // 分页总页面数
    protected $totalPages  ;
    // 总行数
    protected $totalRows  ;
    // 当前页数
    public $nowPage    ;
    // 分页的栏的总页数
    protected $coolPages   ;
    // 分页显示定制	
	protected $config  =	array('header'=>'条记录','prev'=>'&laquo; 上一页','next'=>'下一页 &raquo;','first'=>'首页','last'=>'末页','theme'=>' <div class="pagination"><div class="span2">共%totalRow% %header% %nowPage%/%totalPage% 页</div><div class="span4"><div><ul><li>%first%</li><li>%upPage%</li><li>%linkPage%</li><li>%downPage%</li><li>%end%</li></ul></div></div><div class="span2">跳转至第%go%页</div></div> ');
    // 默认分页变量名
    public $varPage;

    /**
     * 架构函数
     * @access public
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     */
    public function __construct($totalRows,$listRows='',$parameter='',$url='') {
        $this->totalRows    =   $totalRows;
        $this->parameter    =   $parameter;
        $this->varPage      =   C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
        if(!empty($listRows)) {
            $this->listRows =   intval($listRows);
        }
        $this->totalPages   =   ceil($this->totalRows/$this->listRows);     //总页数
        $this->coolPages    =   ceil($this->totalPages/$this->rollPage);
        $this->nowPage      =   !empty($_GET[$this->varPage])?intval($_GET[$this->varPage]):1;
        if($this->nowPage<1){
            $this->nowPage  =   1;
        }elseif(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage  =   $this->totalPages;
        }
        $this->firstRow     =   $this->listRows*($this->nowPage-1);
    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    /**
     * 分页显示输出
     * @access public
     */
    public function show() {
        if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $nowCoolPage    =   ceil($this->nowPage/$this->rollPage);

        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
        }else{
            if($this->parameter && is_string($this->parameter)) {
                parse_str($this->parameter,$parameter);
            }elseif(is_array($this->parameter)){
                $parameter      =   $this->parameter;
            }elseif(empty($this->parameter)){
                unset($_GET[C('VAR_URL_PARAMS')]);
                $var =  !empty($_POST)?$_POST:$_GET;
                if(empty($var)) {
                    $parameter  =   array();
                }else{
                    $parameter  =   $var;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U('',$parameter);
        }
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;
        $downRow        =   $this->nowPage+1;
        /* 更改 */
		if ($upRow>0){
            $upPage     =   "<a href='".str_replace('__PAGE__',$upRow,$url)."'>".$this->config['prev']."</a>";
            $theFirst   =   "<a href='".str_replace('__PAGE__',1,$url)."' >".$this->config['first']."</a>";
        }elseif (1 < $this->totalPages){
            $upPage     =   '<span>'.$this->config['prev'].'</span>';
            $theFirst   =   '<span>'.$this->config['first'].'</span>';
		}else{
            $upPage     =   '<span>'.$this->config['prev'].'</span>';
            $theFirst   =   '<span>'.$this->config['first'].'</span>';
        }

        if ($downRow <= $this->totalPages){
            $theEndRow  =   $this->totalPages;
            $downPage   =   "<a href='".str_replace('__PAGE__',$downRow,$url)."'>".$this->config['next']."</a>";
            $theEnd     =   "<a href='".str_replace('__PAGE__',$theEndRow,$url)."' >".$this->config['last']."</a>";
        }elseif (1 < $this->totalPages){
            $downPage   =   '<span>'.$this->config['next'].'</span>';
            $theEnd     =   '<span>'.$this->config['last'].'</span>';
		}else{
            $downPage   =   '<span>'.$this->config['next'].'</span>';
            $theEnd     =   '<span>'.$this->config['last'].'</span>';
        }
		
        /* << < > >>
        if($nowCoolPage != 1){
            $theFirst   =   '<span>'.$this->config['first'].'</span>';
        }else{
            $preRow     =   $this->nowPage-$this->rollPage;
            $prePage    =   "<a href='".str_replace('__PAGE__',$preRow,$url)."' >上".$this->rollPage."页</a>";
            $theFirst   =   "<a href='".str_replace('__PAGE__',1,$url)."' >".$this->config['first']."</a>";
        }
        if($nowCoolPage == $this->coolPages){
            $theEnd     =   '<span>'.$this->config['last'].'</span>';
        }else{
            $nextRow    =   $this->nowPage+$this->rollPage;
            $theEndRow  =   $this->totalPages;
            $nextPage   =   "<a href='".str_replace('__PAGE__',$nextRow,$url)."' >下".$this->rollPage."页</a>";
            $theEnd     =   "<a href='".str_replace('__PAGE__',$theEndRow,$url)."' >".$this->config['last']."</a>";
        }
        */
        // 1 2 3 4 5
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++){
            $page = ($this->nowPage - intval($this->rollPage/2)) <= 0 ? $i : $this->nowPage - intval($this->rollPage/2) + $i-1;
            $page = (($this->totalPages - $this->nowPage) >= intval($this->rollPage/2) || ($this->totalPages < $this->rollPage)) ? $page : $this->totalPages - $this->rollPage  + $i;
            if($page!=$this->nowPage){
                if($page<=$this->totalPages){
                    $linkPage .= "<a href='".str_replace('__PAGE__',$page,$url)."'>".$page."</a>";
                }else{
                    break;
                }
            }else{
                if($this->totalPages != 1){
                    $linkPage .= "<span class='current'>".$page."</span>";
                }
            }
        }
        $thego = '<select style="width:auto;display:inline-block;" name="'.$this->varPage.'" onchange="go_page'.$this->varPage.'(this.value)">';
        for($i=1;$i<=$this->totalPages;$i++){
            $thego .= '<option value ="'.str_replace("__PAGE__",$i,$url).'" ';
            $thego .= $i == $this->nowPage ? 'selected="selected"' :'';
            $thego .= '>'.$i.'</option>';
        }
        $thego .= '</select><script type="text/javascript">
		   function changeURLArg(url,arg,arg_val){ 
				var pattern=arg+"=([^&]*)"; 
				var replaceText=arg+"="+arg_val; 
				if(url.match(pattern)){ 
				var tmp="/("+ arg+"=)([^&]*)/gi"; 
				        tmp=url.replace(eval(tmp),replaceText); 
				return tmp; 
				    }else{ 
				if(url.match("[\?]")){ 
				return url+"&"+replaceText; 
				        }else{ 
				return url+"?"+replaceText; 
				        } 
				    } 
				return url+"\n"+arg+"\n"+arg_val; 
			} 
		   function go_page'.$this->varPage.'(page){
				var listrows = $("#listrows option:selected").val();
				if(page.indexOf("listrows") <= 0){
					if(listrows > 0){
						window.location = page+"&listrows="+listrows;
					}else{
						window.location = page;
					}
				}else{
					window.location = changeURLArg(page,"listrows",listrows);
				}
			}
        </script>';
        $pageStr     =   str_replace(
            array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%','%end%','%go%'),
            array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$prePage,$linkPage,$nextPage,$theEnd,$thego),$this->config['theme']);
        return $pageStr;
    }
}