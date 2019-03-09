<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: pengyong <i@pengyong.info>
// +----------------------------------------------------------------------
class SplitWord
{
	var $TagDic = Array();
	var $RankDic = Array();
	var $OneNameDic = Array();
	var $TwoNameDic = Array();
	var $SourceString = '';
	var $ResultString = '';
	var $SplitChar = ' '; //�ָ���
	var $SplitLen = 4; //�����ʳ���
	var $EspecialChar = "��|��|��";
	var $NewWordLimit = "��|��|��|��|��|��|��|��|��|��|��|��|��|��|��|��";
	
	//������԰���Ҫ���볣�õ����ʣ�
	//�����������һ�����Ƿ�Ϊ��Щ�ʺ���һ�����Ƿ�Ϊ���ʣ�Ȼ����Ϊ����
	var $CommonUnit = "��|��|��|ʱ|��|��|��|Ԫ|��|ǧ|��|��|λ|��";
	
	var $CnNumber = "��|��|��|��|��|��|��|��|��|��|��|��|��|��";
	var $CnSgNum = "һ|��|��|��|��|��|��|��|��|ʮ|��|ǧ|��|��|��";
	var $MaxLen = 13; //�ʵ���� 7 �����֣��������ֵΪ�ֽ�������������
	var $MinLen = 3;  //��С 2 �����֣��������ֵΪ�ֽ�������������
	var $CnTwoName = "��ľ �Ϲ� ���� ��ԯ ��� ���� ���� ���� ���� ���� ˾ͽ ˾�� �Ϲ� ŷ�� ���� ���� ���� ���� ���� ���� Ľ�� ˾�� �ĺ� ��� ���� ���� �ʸ� ξ�� ����";
	var $CnOneName = "��Ǯ��������֣��������������������������ʩ�ſײ��ϻ���κ�ս���л������ˮ��������˸��ɷ�����³Τ������ﻨ������Ԭ��ۺ��ʷ�Ʒ����Ѧ�׺����������ޱϺ�����������ʱ��Ƥ���뿵����Ԫ������ƽ��������Ҧ�ۿ�����ë����ױ���갼Ʒ��ɴ�̸��é���ܼ�������ף������������ϯ����ǿ��·¦Σ��ͯ�չ�÷ʢ�ֵ�����������Ĳ��﷮���������֧�¾̹�¬Ī�������Ѹɽ�Ӧ�������ڵ��������������ʯ�޼�ť�������ϻ���½��������춻���κ�ӷ����ഢ���������ɾ��θ����ڽ��͹�����ȳ������ȫۭ�����������������ﱩ�����������������ղ����Ҷ��˾��۬�輻��ӡ�ް׻���̨�Ӷ����̼���׿�����ɳ����������ܲ�˫��ݷ����̷�����̼������Ƚ��۪Ӻ�S�ɣ���ţ��ͨ�����༽ۣ����ũ�±�ׯ�̲���ֳ�Ľ����ϰ�°���������������θ����߾Ӻⲽ�����������Ŀܹ�»�ڶ�Ź�����εԽ��¡ʦ�������˹��������������Ǽ��Ŀ���ɳ��ᳲ������������";
	
	var $charset = 'gbk';
	
	//------------------------------
	//php4���캯��
	//------------------------------
	// function SplitWord()
	// {
		// $this->__construct();
	// }
	//------------------------------
	//php5���캯��
	//------------------------------
	function __construct()
	{  	  	
		//�������ϴʵ�
		for($i=0;$i<strlen($this->CnOneName);$i++)
		{
			$this->OneNameDic[$this->CnOneName[$i].$this->CnOneName[$i+1]] = 1;
			$i++;
		}
		$twoname = explode(" ",$this->CnTwoName);
		foreach($twoname as $n){ $this->TwoNameDic[$n] = 1; }
		unset($twoname);
		unset($this->CnOneName);
		unset($this->CnTwoName);
		
		//�߼��ִʣ�Ԥ������ʵ�����ִʸ��ٶ�
		$dicfile = dirname(__FILE__)."/dict.csv"; 
		$fp = fopen($dicfile,'r');
		while($line = fgets($fp,256))
		{
			  $ws = explode(' ',$line);
			  $this->TagDic[$ws[0]] = $ws[1];
			  $this->RankDic[strlen($ws[0])][$ws[0]] = $ws[2];
		}
		fclose($fp);
	}
  
	//--------------------------
	//������Դ
	//--------------------------
	function Clear()
	{
		@fclose($this->QuickDic);
	}
  
	//----------------------------
	//����Դ�ַ���
	//----------------------------
	function SetSource($str)
	{
		$str = $this->safe_string($str);
		$this->SourceString = trim($this->ReviseString($str));
		$this->ResultString = "";
	}
  
	//-----------------------------
	//����ַ����Ƿ񲻴�������
	//-----------------------------
	function NotGBK($str)
	{
		if($str=="") return "";
		//��Ϊ�ֵַ�ʱ���Ѿ�����,��˲���Ҫ��������ַ�
		if( ord($str[0])>0x80 ) return false;
		else return true;
	}
	//-----------------------------
	//RMM�ִ��㷨
	//-----------------------------
	function SplitRMM($str="")
	{
		if($str != "") $this->SetSource(trim($str));
		if($this->SourceString=="") 
		{
			return "";
		}
		//���ı����дַ�
		$this->SourceString = $this->ReviseString($this->SourceString);
		//���ض��ı����з���
		$spwords = explode(" ",$this->SourceString);
		$spLen = count($spwords);
		$spc = $this->SplitChar;
		for($i=($spLen-1);$i>=0;$i--)
		{
			if(trim($spwords[$i])=="")
			{
				continue;
			}
			if($this->NotGBK($spwords[$i]))
			{
				if(ereg("[^0-9\.\+\-]",$spwords[$i]))
				{ 
					$this->ResultString = $spwords[$i].$spc.$this->ResultString; 
				}
				else
				{
					$nextword = "";
					@$nextword = substr($this->ResultString,0,strpos($this->ResultString," "));
					if(ereg("^".$this->CommonUnit,$nextword))
					{
						$this->ResultString = $spwords[$i].$this->ResultString;
					}
					else
					{
						$this->ResultString = $spwords[$i].$spc.$this->ResultString;
					}
				}
			}
			else
			{
				$c = $spwords[$i][0].$spwords[$i][1];
				$n = hexdec(bin2hex($c));
				if($c=="��") //����
				{ 
					$this->ResultString = $spwords[$i].$spc.$this->ResultString;
				}
				else if($n>0xA13F && $n < 0xAA40) //������
				{ 
					$this->ResultString = $spwords[$i].$spc.$this->ResultString; 
				}
				else //�����̾�
				{
					if(strlen($spwords[$i]) <= $this->SplitLen)
					{
						//���������Ϊ����ָ�ʣ����봦��
						if(ereg($this->EspecialChar."$",$spwords[$i],$regs))
						{
							$spwords[$i] = ereg_replace($regs[0]."$","",$spwords[$i]).$spc.$regs[0];
						}
						//�Ƿ�Ϊ���õ�λ
						if(!ereg("^".$this->CommonUnit,$spwords[$i]) || $i==0)
						{
							$this->ResultString = $spwords[$i].$spc.$this->ResultString;
						}
						else
						{
							$this->ResultString = $spwords[$i-1].$spwords[$i].$spc.$this->ResultString; 
							$i--;
						}
					}
					else
					{ 
						$this->ResultString = $this->RunRMM($spwords[$i]).$spc.$this->ResultString;
					}
				}
			}
		}
		return $this->ResultString;
	}
	
	//��ȫ�����ַ�����������ƥ�䷽ʽ�ֽ�
	function RunRMM($str)
	{
		$spc = $this->SplitChar;
		$spLen = strlen($str);
		$rsStr = "";
		$okWord = "";
		$tmpWord = "";
		$WordArray = Array();
		//�����ֵ�ƥ��
		for($i=($spLen-1);$i>=0;)
		{
			//��i�ﵽ��С���ܴʵ�ʱ��
			if($i<=$this->MinLen)
			{
				if($i==1)
				{
					$WordArray[] = substr($str,0,2);
					//echo "Min 1�� ".substr($str,0,2)."<br>";
				}
				else
				{
					$w = substr($str,0,$this->MinLen+1);
					if($this->IsWord($w))
					{
						$WordArray[] = $w;                                                                                  
					}
					else
					{
						$WordArray[] = substr($str,2,2);
						$WordArray[] = substr($str,0,2);
						//echo "Min 2-2�� ".substr($str,0,2).substr($str,2,2)."<br>";
					}
				}
				$i = -1; break;
			}
			//��������С������ʱ�����
			if($i>=$this->MaxLen) 
			{
				$maxPos = $this->MaxLen;
			}
			else 
			{
				$maxPos = $i;
			}
			$isMatch = false;
			for($j=$maxPos;$j>=0;$j=$j-2)
			{
				$w = substr($str,$i-$j,$j+1);
				if($this->IsWord($w))
				{
					$WordArray[] = $w;
					//echo "EG�� ".$w." $str $i $j<br>";
					$i = $i-$j-1;
					$isMatch = true;
					break;
				}
			}
			if(!$isMatch)
			{
				if($i>1) 
				{
					$WordArray[] = $str[$i-1].$str[$i];
					//echo "NOT EG�� ".$w."<br>";
					$i = $i-2;
				}
			}
		}//End For
		$rsStr = $this->ParOther($WordArray);
		return ($this->charset == 'gbk') ? $rsStr : @iconv('gbk', $this->charset, $rsStr);
	}
	
	//
	//��������ʶ�����������ʶ��
	//
	function ParOther($WordArray)
	{
		$wlen = count($WordArray)-1;
		$rsStr = "";
		$spc = $this->SplitChar;
		for($i=$wlen;$i>=0;$i--)
		{
			//������
			if(ereg($this->CnSgNum,$WordArray[$i]))
			{
				$rsStr .= $spc.$WordArray[$i];
				if($i>0 && ereg("^".$this->CommonUnit,$WordArray[$i-1]))
				{ 
					$rsStr .= $WordArray[$i-1]; $i--; 
				}
				else
				{
					while($i>0 && ereg($this->CnSgNum,$WordArray[$i-1]))
					{ 
						$rsStr .= $WordArray[$i-1]; $i--; 
					}
				}
				continue;
			}
			//˫����
			if(strlen($WordArray[$i])==4 && isset($this->TwoNameDic[$WordArray[$i]]))
			{
				$rsStr .= $spc.$WordArray[$i];
				if($i>0&&strlen($WordArray[$i-1])==2)
				{
					$rsStr .= $WordArray[$i-1];$i--;
					if($i>0&&strlen($WordArray[$i-1])==2)
					{ 
						$rsStr .= $WordArray[$i-1];$i--;
					}
				}
			}
			//������
			else if(strlen($WordArray[$i])==2 && isset($this->OneNameDic[$WordArray[$i]]))
			{
				$rsStr .= $spc.$WordArray[$i];
				if($i>0&&strlen($WordArray[$i-1])==2)
				{
					 $rsStr .= $WordArray[$i-1];$i--;
					 if($i>0 && strlen($WordArray[$i-1])==2)
					 {
					 	$rsStr .= $WordArray[$i-1];$i--;
					 }
				}
			}
			//��ͨ�ʻ�
			else
			{
				$rsStr .= $spc.$WordArray[$i];
			}
		}
		//���ر��ηִʽ��
		$rsStr = preg_replace("/^".$spc."/","",$rsStr);
		return $rsStr;
	}
	//---------------------------------
	//�жϴʵ����Ƿ����ĳ����
	//---------------------------------
	function IsWord($okWord)
	{
		$slen = strlen($okWord);
		if($slen > $this->MaxLen) return false;
		else return isset($this->RankDic[$slen][$okWord]);
	}
	
	//------------------------------
	//�����ַ������Ա����ţ���Ӣ�Ļ��ŵȳ�������
	//------------------------------
	function ReviseString($str)
	{
		$spc = $this->SplitChar;
		$slen = strlen($str);
		if($slen==0) return '';
		$okstr = '';
		$prechar = 0; // 0-�հ� 1-Ӣ�� 2-���� 3-����
		for($i=0;$i<$slen;$i++)
		{
			if(ord($str[$i]) < 0x81)
			{
				//Ӣ�ĵĿհ׷���
				if(ord($str[$i]) < 33)
				{
					if($prechar!=0&&$str[$i]!="\r"&&$str[$i]!="\n") $okstr .= $spc;
					$prechar=0;
					continue; 
				}
				else if(ereg("[^0-9a-zA-Z@\.%#:/\\&_-]",$str[$i]))
				{
					if($prechar==0)
					{
						$okstr .= $str[$i]; 
						$prechar=3;
					}
					else
					{ 
						$okstr .= $spc.$str[$i]; 
						$prechar=3;
					}
				}
				else
				{
					if($prechar==2||$prechar==3)
					{ 
						$okstr .= $spc.$str[$i]; 
						$prechar=1;
					}
					else
					{ 
						if(ereg("@#%:",$str[$i]))
						{ 
							$okstr .= $str[$i]; 
							$prechar=3; 
						}
						else 
						{ 
							$okstr .= $str[$i]; 
							$prechar=1; 
						}
					}
				}
			}
			else
			{
				//�����һ���ַ�Ϊ�����ĺͷǿո����һ���ո�
				if($prechar!=0 && $prechar!=2) 
				{
					$okstr .= $spc;
				}
				//��������ַ�
				if(isset($str[$i+1]))
				{
					$c = $str[$i].$str[$i+1];
					
					if(ereg($this->CnNumber,$c))
					{ 
						$okstr .= $this->GetAlabNum($c); 
						$prechar = 2; 
						$i++; 
						continue; 
					}
					
					$n = hexdec(bin2hex($c));
					if($n>0xA13F && $n < 0xAA40)
					{
						if($c=="��")
						{
							if($prechar!=0) $okstr .= $spc." ��";
							else $okstr .= " ��";
							$prechar = 2;
						}
						else if($c=="��")
						{
							$okstr .= "�� ";
							$prechar = 3;
						}
						else
						{
							if($prechar!=0) $okstr .= $spc.$c;
							else $okstr .= $c;
							$prechar = 3; 
						}
					}
					else
					{
						$okstr .= $c;
						$prechar = 2;
					}
					$i++;
				}
			}//�����ַ�
		}//����ѭ��
		return $okstr;
	}
	
	//-----------------------------------------
	//����ʶ���´ʣ��ַ�������Ϊ�Ѿ��ִʴ���Ĵ�
	//----------------------------------------
	function FindNewWord($spwords,$maxlen=6)
	{
		$okstr = '';
		$ws = explode(' ',$spwords);
		$newword = '';
		$nws = '';
		foreach($ws as $w)
		{
			$w = trim($w);
			if(strlen($w)==2 && !preg_match("/[0-9a-zA-Z]/",$w) && !preg_match("/".$this->NewWordLimit."/",$w) )
			{ 
				$newword .= " ".$w;
			}
			else
			{
				if($newword!="")
				{
					$nw = str_replace(' ','',$newword);
					if(strlen($nw)>2)
					{
						if(strlen($nw) <= $maxlen)
						{ 
							$okstr .= ' '.$nw; $nws[$nw] = 0; 
						}
						else 
						{
							$okstr .= ' '.$newword;
						}
					}
					else
					{ 
						$okstr .= ' '.$newword; 
					}
					$newword = '';
				}
				$okstr .= ' '.$w;
			}
		}
		
		if($newword!="") $okstr .= $newword;
		$okstr = preg_replace("/ {1,}/"," ",$okstr);
		if(is_array($nws))
		{
			$this->m_nws = $nws;
			foreach($nws as $k=>$w)
			{
				$w = "";
				for($i=0;$i<strlen($k);$i++)
				{
					if( ord($k[$i]) > 0x80 )
					{
						$w .= " ".$k[$i];
						if(isset($k[$i+1]))
						{ 
							$w .= $k[$i+1]; $i++;
						}
					}
					else
					{
						$w .= " ".$k[$i];
					}
					$w .= " ";
				}
				$w = preg_replace("/ {1,}/"," ",$w);
				$okstr = str_replace($w," ".$k." ",$okstr);
				$okstr = str_replace($k." "," ".$k." ",$okstr);
				$okstr = str_replace(" ".$k," ".$k." ",$okstr);
			}
		}
		return $okstr;
	}
	
	//----------------------------------------------
	//��ȥ�ִ��е��ظ��ʣ����������ַ������ַ�������Ϊ�Ѿ��ִʴ���Ĵ�
	//--------------------------------------------------
	function GetIndexText($okstr, $ilen=-1)
	{
		if($okstr=="") return "";
		$ws = explode(" ",$okstr);
		$okstr = "";
		$wks = "";
		foreach($ws as $w)
		{
			$w = trim($w);
			//�ų�С��2���ַ�
			if(strlen($w)<2) continue;
			//�ų����ֻ�����
			if(!ereg("[^0-9:-]",$w)) continue;
			if(strlen($w)==2&&ord($w[0])>0x80) continue;
			if(isset($wks[$w])) $wks[$w]++;
			else $wks[$w] = 1;
		}
		if(is_array($wks))
		{
			arsort($wks);
			if($ilen==-1)
			{ foreach($wks as $w=>$v) $okstr .= $w." "; }
			else
			{
				foreach($wks as $w=>$v)
				{
					if((strlen($okstr)+strlen($w)+1)<$ilen) 
					{
						$okstr .= $w." ";
					}
					else 
					{
						break;
					}
				}
			}
		}
		return trim($okstr);
	}
	
	//
	//��ȫ������תΪ�������
	//
	function GetAlabNum($fnum)
	{
		$nums = array("��","��","��","��","��","��","��","��","��","��","��","��","��","��");
		$fnums = "0123456789+-%.";
		for($i=0;$i<count($nums);$i++)
		{
			if($nums[$i]==$fnum) return $fnums[$i];
		}
		return $fnum;
	}
	
	function safe_string($string)
	{
		$s1 = iconv('utf-8', 'gbk', $string);
		$s2 = iconv('gbk', 'utf-8', $s1);
		if($s2 == $string)
		{
			$this->charset = 'utf-8';
			return $s1;
		}
		$this->charset = 'gbk';
		return $string;
	}
}
