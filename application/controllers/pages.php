<?php

class Pages extends CI_Controller {
	public $filename='';
        public $filename1='';
        public function __construct() 
        {
            parent::__construct();

            // Load form helper library
            $this->load->helper('form');

            // Load form validation library
            $this->load->library('form_validation');

            // Load session library
            $this->load->library('session');

            // Load database
            $this->load->model('login_database');
	    $this->load->library('parser');
	    $this->load->helper('file');
	    $this->load->helper('cookie');
        }





	public function index()
        {

		   error_reporting(E_ERROR | E_PARSE);
		   //$url = 'http://localhost'.$_SERVER['REQUEST_URI'];

			//$dsa=parse_url($url);

			//echo parse_url($url, PHP_URL_PATH);
			//print $dsa['query'];
			//$filename=explode("=", $dsa['query'])[1];

                                $filename=get_cookie('filename1');
                                #print cookie('filename1');
                                print $this->input->cookie("filename1",true);
                                #print $filename;
                                print "vandan";
                                //$filename='views/data/vandan/august/fullnews_id_3516349_date_25_8_2005.dat';
				$filename=str_replace("application","",$filename);
				$file = fopen(APPPATH.''.$filename, "r");
				$filename=str_replace("-","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
                                $dsaa=$filename;
				$StudentDetails= array();
				
				
				while (!feof($file)) {
						$StudentDetails[] = fgets($file);
				}
                                fclose($file);
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				//$file = fopen(APPPATH.''.$filename, "r");
				$filename=str_replace("-","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
				
				#$this->parse_ssf_file($StudentDetails,$filename);
				
                                #$data=$this->index_part($filename);
				#$this->parser->parse('expvandan', $data);
	}
	
	public function index_part($filename)
	{
				$this->load->helper('cookie');
				$filename=get_cookie('filename');
                                //$filename='views/data/vandan/august/fullnews_id_3516349_date_25_8_2005.dat';
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);

				$this->load->database();	
				$colormapping=array();
				$colorcode=array("AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","DarkOrange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Green","GreenYellow","HoneyDew","HotPink","IndianRed ","Indigo ","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","Yellow","YellowGreen");
				$chaindetail=array();
				$achaindetail=array();
				$modchaindetail=array();
				$sendchaindetail=array();
				$marray=array();
				array_push($marray,trim("0"));
				$sql = "SELECT * FROM ".$filename." WHERE lex != ?"; 
				$query =$this->db->query($sql, array('NULL'));
				$string="";
				$string1="";
				$start=0;
				$test='';
				$vandan='';
				foreach ($query->result() as $row)
				{
				   if ($row->acrefMod != NULL)
				   {
						$acrefmod=trim($row->acrefMod);
						$acrefmodHead=trim($row->acrefModHead);
						$lex=trim($row->lex);
						$acrefmod=str_replace("\"","",$acrefmod);
						$acrefmod=str_replace("'","",$acrefmod);
						$p_crefmod = explode(",", $acrefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
							{
								$p1_crefmod = explode(":", $s);
								$p1_crefmod[0]=str_replace("%1","",$p1_crefmod[0]);
								$p1_crefmod[0]=str_replace("%0","",$p1_crefmod[0]);
								$p1_crefmod[1]=str_replace(" ","",$p1_crefmod[1]);
								$p1_crefmod[1]=trim($p1_crefmod[1]);
								$p1_crefmod[0]=trim($p1_crefmod[0]);
								array_push($marray,trim(str_replace("m","",$p1_crefmod[0])));
								if (!array_key_exists(trim($p1_crefmod[1]), $achaindetail)) 
								{
									if($acrefmodHead!=NULL)
									{
										$achaindetail[$p1_crefmod[1]]=array();
										$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]="<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
									}
									else
									{
										//$vandan=$vandan."</br>".$lex."/".$row->line_no."---->".$p1_crefmod[0]."--->".$p1_crefmod[1];
										$achaindetail[$p1_crefmod[1]]=array();
										$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$lex."/".$row->line_no;
									}
								}
								else
								{
									
									if($acrefmodHead!=NULL)
									{
										
										if(!$this->multiKeyExists($achaindetail,trim($p1_crefmod[0])))
										{
											
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]."<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
										else
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]." "."<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
									}
									else
									{
										if(!$this->multiKeyExists($achaindetail,trim($p1_crefmod[0])))
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]].$lex."/".$row->line_no;
										}
										else
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]." ".$lex."/".$row->line_no;
										}
									}
								}
							}
						}
						
				   }
				   if ($row->crefMod != NULL)
				   {
						$crefmod=trim($row->crefMod);
						$crefmod=str_replace("\"","",$crefmod);
						$crefmod=str_replace("'","",$crefmod);
						$p_crefmod = explode(",", $crefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
							{
								$p1_cref = explode(":", $s);
								$p1_cref[0]=str_replace("%1","",$p1_cref[0]);
								$p1_cref[0]=str_replace("%0","",$p1_cref[0]);
								$p1_cref[1]=str_replace(" ","",$p1_cref[1]);
								$p1_cref[1]=trim($p1_cref[1]);
								$p1_cref[0]=trim($p1_cref[0]);
								$modchaindetail[$p1_cref[1]]=$p1_cref[0];
							}
						}
				   }
				   
				   
				   if ($row->cref != NULL)
				   { 
						$cref=trim($row->cref);
						
						$crefHead=trim($row->crefHead);
						$cref=str_replace("\"","",$cref);
						$cref=str_replace("'","",$cref);
						$p_cref = explode(",", $cref);
						$cc_count=1;
						$lex=$row->lex;
						foreach ($p_cref as $s)
						{
							if(strlen(trim($s))>0)
							{
								$p1_cref = explode(":", $s);
								$p1_cref[0]=str_replace("%1","",$p1_cref[0]);
								$p1_cref[0]=str_replace("%0","",$p1_cref[0]);
								$p1_cref[1]=str_replace(" ","",$p1_cref[1]);
								$p1_cref[1]=trim($p1_cref[1]);
								$p1_cref[0]=trim($p1_cref[0]);
								if (!array_key_exists(trim($p1_cref[1]), $colormapping)) 
								{
									$colormapping[trim($p1_cref[1])]=array_pop($colorcode);
								}
								if (!array_key_exists(trim($p1_cref[1]), $chaindetail)) 
								{
									if($crefHead!=NULL and strpos($crefHead,$p1_cref[0]))
									{
										$chaindetail[$p1_cref[1]]=array();
										$chaindetail[$p1_cref[1]][$p1_cref[0]]="<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
									}
									else
									{
										$chaindetail[$p1_cref[1]]=array();
										$chaindetail[$p1_cref[1]][$p1_cref[0]]=$lex."/".$row->line_no;
									}
								}
								else
								{
									if($crefHead!=NULL and strpos($crefHead,$p1_cref[0]))
									{
										if(!$this->multiKeyExists($chaindetail,trim($p1_cref[0])))
										{
											$chaindetail[$p1_cref[1]][$p1_cref[0]]="<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
										else
										{
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$chaindetail[$p1_cref[1]][$p1_cref[0]]." "."<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
									}
									else
									{
										if(!$this->multiKeyExists($chaindetail,trim($p1_cref[0])))
										{
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$lex."/".$row->line_no;
										}
										else
										{
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$chaindetail[$p1_cref[1]][$p1_cref[0]]." ".$lex."/".$row->line_no;
										}
									}
								}
								
								if($crefHead!= NULL)
								{
										$string1=$string1."<span id='lex".$start."'><button class='btn'><font color='".$colormapping[trim($p1_cref[1])]."'>".$row->lex." </font></button></span>";
								}
								else
								{
									if ($cc_count!=1)
									{
										$string1=$string1."<span id='lex".$start."'><font color='".$colormapping[trim($p1_cref[1])]."'>/".$row->lex."  </font></span>";
									}
									else
									{
										$string1=$string1."<span id='lex".$start."'><font color='".$colormapping[trim($p1_cref[1])]."'>".$row->lex."  </font></span>";
									}
								}
								$cc_count=$cc_count+1;
							}
						}			
				   }
				   elseif($row->acrefMod != NULL)
				   {
						$acrefMod=$row->acrefMod;
						$string1=$string1."<span id='lex".$start."'><b><font size='5'>".$row->lex."  </font></b></span>";
				   }
				   else
				   {
						$string1=$string1."<span id='lex".$start."'>".$row->lex."  </span>";
				   }
				   $string=$string."<span id='lex".$start."'>".$row->lex."</span>";
				   $string=$string."<span id='line_count".$start."'><font size='1' color='green'>/".$row->line_no."&nbsp </font></span>";
				   $string=$string."<span id='pos".$start."'><font size='1' color='red'>/".$row->pos."  </font></span>";
				   $string=$string."<span id='drel".$start."'><font size='1' color='green'>/".$row->drel."  </font></span>";
				   $string=$string."<span id='chunkType".$start."'><font size='1' color='blue'>/".$row->chunkType."  </font></span>";
				   $string=$string."<span id='id".$start."'><font size='1' color='golden'>/".$row->id."  </font></span>";
				   $string=$string."<span id='af".$start."'><font size='1' color='sky'>/".$row->af."  </font></span>";
				   $start=$start+1;
				}
				$data['end']=$start;
				$data['products']=$string;
				$data['products1']=$string1;
				$data['test']=$test;
				$a="";
				$ans='';
				$finalans="";
				$count=0;
				$tarray=array();
				$iarray=array();
				array_push($tarray,trim("0"));
				array_push($iarray,trim("0"));
				$ascript="";
				$ansscript="";
				$finalansscript="";
			
				foreach ($chaindetail as $name => $locations) 
				{
					
					foreach ($locations as $name1 =>$location) 
					{
						
						if (array_key_exists($name1,$achaindetail))
						{
							
							$a=$a."<span id='".$name1."'><p class='".$modchaindetail[$name1]."' id='txt".$name1."'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></p><button class='headb' id='h".$name1."'>H</button> <button class='modb' id='m".$name1."'>M</button> <button class='delb' id='d".$name1."'>D</button> <a class='dell' id='a".$name1."'>delete</a></br></br></span>";
						}
						array_push($tarray,trim(str_replace("t","",$name)));
						array_push($iarray,trim(str_replace("i","",$name1)));
						$a=$a."<span id='".$name1."'><p id='txt".$name1."'>".$location." </p><button class='headb' id='h".$name1."'>H</button> <button class='modb' id='m".$name1."'>M</button> <button class='delb' id='d".$name1."'>D</button> <a class='dell' id='a".$name1."'>delete</a></br></br></span>";
						
					}
					$a="<div id='intxt".$name."' >".$a."</div>";
					$ans=$ans."<div class='span3' id='".$name."'><h5>".$name."</h5>".$a."</br><button class='btn' id='chainadd".$name."'>AddIn ".$name." chain</button></div>";
					$count=$count+1;
					
					if ($count%3==0)
					{
						$ans="<div class='row-fluid'>"."</div>".$ans;
						$finalans=$finalans.$ans;
						$ans="";
					}				
					
					$a="";
				}
				if (strlen($ans)>0)
				{
					$finalans=$finalans.$ans;
					$ans='';
				}
				$data['imax']=max( $iarray);
				$data['tmax']=max( $tarray);
				$data['mmax']=max( $marray);
				$data['ans']="".$finalans."";
				$filename=get_cookie('filename1');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
				$data['filename']="".$filename."";
				return $data;
	}
	public function clearall()
	{

	 	   $this->load->library('parser');
		   $this->load->helper('file');
		   $this->load->helper('cookie');
		   $this->load->helper('file');
		   $filename=get_cookie('filename');
		   $filename=str_replace("application","",$filename);
		   $filename=str_replace("/","",$filename);
		   $filename=str_replace(".","",$filename);
		   
		   
				$this->load->database();
				$sql = " UPDATE ".$filename." SET acrefmodHead = NULL, crefChainHead = NULL, crefType = NULL, acrefMod = NULL, acrefModHead = NULL, crefMod = NULL, cref = NULL, crefHead = NULL";
				$query =$this->db->query($sql);
				
				$data=$this->index_part($filename);
				return $data;
			

	}
	
	public function show_chain()
	{
		   error_reporting(E_ERROR | E_PARSE);	
		   $this->load->library('parser');
		   $this->load->helper('file');
		   $this->load->helper('cookie');
		   $filename=get_cookie('filename');
		   $filename=str_replace("application","",$filename);
		   $filename=str_replace("/","",$filename);
		   $filename=str_replace(".","",$filename);
		   
		   $colormapping=array();
		   $colorcode=array("AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","DarkOrange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Green","GreenYellow","HoneyDew","HotPink","IndianRed ","Indigo ","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","Yellow","YellowGreen");
           $chaindetail=array();
		   $achaindetail=array();
		   $chaintypedetail=array();
		   $chainheaddetail=array();
		   $modchaindetail=array();
		   $sendchaindetail=array();		
				$this->load->database();
				$sql = "SELECT * FROM  ".$filename."  WHERE lex != ?"; 
				$query =$this->db->query($sql, array('NULL'));
				$string="";
				$string1="";
				$start=0;
				$test='';
				foreach ($query->result() as $row)
				{
				   if ($row->crefType != NULL)
				   {
						$acrefmod=str_replace("\"","",$row->crefType);
						$acrefmod=str_replace("'","",$acrefmod);
						$p_crefmod = explode(",", $acrefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
								$chaintypedetail[$row->lex."/".$row->line_no."%".trim(explode(":", $s)[1])]=trim($s);
						}
				   }
				   
				   if ($row->crefChainHead != NULL)
				   {
						$acrefmod=str_replace("\"","",$row->crefChainHead);
						$acrefmod=str_replace("'","",$acrefmod);
						$p_crefmod = explode(",", $acrefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
							$chainheaddetail[$row->lex."/".$row->line_no."%".trim(explode(":", $s)[0])]=trim($s);
						}
				   }
				
				   if ($row->acrefMod != NULL)
				   {
						$acrefmod=$row->acrefMod;
						$acrefmodHead=$row->acrefModHead;
						$lex=$row->lex;
						$acrefmod=str_replace("\"","",$acrefmod);
						$acrefmod=str_replace("'","",$acrefmod);
						$p_crefmod = explode(",", $acrefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
							{
								$p1_crefmod = explode(":", $s);
								$p1_crefmod[0]=str_replace("%1","",$p1_crefmod[0]);
								$p1_crefmod[0]=str_replace("%0","",$p1_crefmod[0]);
								$p1_crefmod[1]=str_replace(" ","",$p1_crefmod[1]);
								$p1_crefmod[1]=trim($p1_crefmod[1]);
								$p1_crefmod[0]=trim($p1_crefmod[0]);
								if (!array_key_exists(trim($p1_crefmod[1]), $achaindetail)) 
								{
									if($acrefmodHead!=NULL)
									{
										$achaindetail[$p1_crefmod[1]]=array();
										$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]="<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
									}
									else
									{
										$achaindetail[$p1_crefmod[1]]=array();
										$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$lex."/".$row->line_no;
									}
								}
								else
								{
									if($acrefmodHead!=NULL)
									{
										if(!$this->multiKeyExists($achaindetail,trim($p1_crefmod[0])))
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]."<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
										else
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]." "."<font id='hc".$p1_crefmod[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
									}
									else
									{
										if(!$this->multiKeyExists($achaindetail,trim($p1_crefmod[0])))
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]].$lex."/".$row->line_no;
										}
										else
										{
											$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]=$achaindetail[$p1_crefmod[1]][$p1_crefmod[0]]." ".$lex."/".$row->line_no;
										}
									}
								}
							}
						}
				   }
				   if ($row->crefMod != NULL)
				   {
						$crefmod=$row->crefMod;
						$crefmod=str_replace("\"","",$crefmod);
						$crefmod=str_replace("'","",$crefmod);
						$p_crefmod = explode(",", $crefmod);
						foreach ($p_crefmod as $s)
						{
							if(strlen(trim($s))>0)
							{
							$p1_cref = explode(":", $s);
							$p1_cref[0]=str_replace("%1","",$p1_cref[0]);
							$p1_cref[0]=str_replace("%0","",$p1_cref[0]);
							$p1_cref[1]=str_replace(" ","",$p1_cref[1]);
							$p1_cref[1]=trim($p1_cref[1]);
							$p1_cref[0]=trim($p1_cref[0]);
							$modchaindetail[$p1_cref[1]]=$p1_cref[0];
							}
						}
				   }
				   if ($row->cref != NULL)
				   { 
						$cref=$row->cref;
						
						$crefHead=$row->crefHead;
						$cref=str_replace("\"","",$cref);
						$cref=str_replace("'","",$cref);
						$p_cref = explode(",", $cref);
						$cc_count=1;
						$lex=$row->lex;
						//print $cref."  HAHAHHA</br>";
						foreach ($p_cref as $s)
						{
							if(strlen(trim($s))>0)
							{
								//print "Main  ".$s."</br>";
								$p1_cref = explode(":", $s);
								$p1_cref[0]=str_replace("%1","",$p1_cref[0]);
								$p1_cref[0]=str_replace("%0","",$p1_cref[0]);
								$p1_cref[1]=str_replace(" ","",$p1_cref[1]);
								$p1_cref[1]=trim($p1_cref[1]);
								$p1_cref[0]=trim($p1_cref[0]);
								if (!array_key_exists(trim($p1_cref[1]), $colormapping)) 
								{
									$colormapping[trim($p1_cref[1])]=array_pop($colorcode);
								}
								//print $lex."--vandan->".$p1_cref[0]."</br>";
								if (!array_key_exists(trim($p1_cref[1]), $chaindetail)) 
								{
									//print $lex."--12->".$p1_cref[0]."</br>";
									if($crefHead!=NULL and strpos($crefHead,$p1_cref[0]))
									{
										//print $lex."--1->".$p1_cref[0]."</br>";
										$chaindetail[$p1_cref[1]]=array();
										$chaindetail[$p1_cref[1]][$p1_cref[0]]="<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
									}
									else
									{
										//print $lex."--2->".$p1_cref[0]."</br>";
										$chaindetail[$p1_cref[1]]=array();
										$chaindetail[$p1_cref[1]][$p1_cref[0]]=$lex."/".$row->line_no;
									}
								}
								else
								{
									//print $lex."--3456->".$p1_cref[0]."</br>";
									if($crefHead!=NULL and strpos($crefHead,$p1_cref[0]))
									{
										//print $lex."--34->".$p1_cref[0]."</br>";
										if(!$this->multiKeyExists($chaindetail,trim($p1_cref[0])))
										{
											//print $lex."--3->".$p1_cref[0]."</br>";
											$chaindetail[$p1_cref[1]][$p1_cref[0]]="<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
										else
										{
											//print $lex."-4-->".$p1_cref[0]."</br>";
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$chaindetail[$p1_cref[1]][$p1_cref[0]]." "."<font id='hc".$p1_cref[0]."' color='red' >".$lex."/".$row->line_no."</font>";
										}
									}
									else
									{
									//print $lex."--56->".$p1_cref[0]."</br>";
										if(!$this->multiKeyExists($chaindetail,trim($p1_cref[0])))
										{
											//print $lex."--5->".$p1_cref[0]."</br>";
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$lex."/".$row->line_no;
										}
										else
										{
											//print $lex."-6-->".$p1_cref[0]."</br>";
											$chaindetail[$p1_cref[1]][$p1_cref[0]]=$chaindetail[$p1_cref[1]][$p1_cref[0]]." ".$lex."/".$row->line_no;
										}
									}
								}
								
								$cc_count=$cc_count+1;
							}
						}			
				   }
				   
				   $start=$start+1;
				}
				$a="";
				$ans='';
				$finalans="";
				$count=0;
				$tarray=array();
				$iarray=array();
				$ascript="";
				$ansscript="";
				$finalansscript="";
				$previous='';
				foreach ($chaindetail as $name => $locations) 
				{
					$coout=0;
					
					foreach ($locations as $name1 =>$location) 
					{
						$FF=explode("color='red' >", $location)[1];
						$FF=str_replace("</font>","",$FF);
						$FF=trim($FF);
						array_push($tarray,trim(str_replace("t","",$name)));
						array_push($iarray,trim(str_replace("i","",$name1)));
						if (array_key_exists($name1,$achaindetail))
						{
							if ($coout!=0)
								{
									
									if (array_key_exists($FF."%".$previous,$chaintypedetail))
									{
										if (!array_key_exists($FF."%".$name1,$chainheaddetail))
											{
												$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>".explode(":", $chaintypedetail[$FF."%".$previous])[0]."</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
											}
											else
											{
												$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>".explode(":", $chaintypedetail[$FF."%".$previous])[0]."</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
											}
									}
									else
									{
										if (!array_key_exists($FF."%".$name1,$chainheaddetail))
											{
												$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>Select Type</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
											}
										else
											{
												$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>Select Type</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
											}
									}
								}
							else
								{
									if (!array_key_exists($FF."%".$name1,$chainheaddetail))
										{
												$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value= 'vandannayan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p></span>";
										}
									else
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value= 'vandannayan' onClick='keepcount()'>".$achaindetail[$name1][$modchaindetail[$name1]]."<font size='1' ><b> ".$location." </b></font></input></p></span>";
										}
								}
						}
						else
						{
							if ($coout!=0)
								{
									//print $FF."%".$previous."<-------vv------>".$chaintypedetail."\n\n</br></br>";
									if (array_key_exists($FF."%".$previous,$chaintypedetail))
									{
										//print $FF."%".$name1."-===========-".$FF."%".$previous."<-------vv------>".$chaintypedetail."\n\n</br></br>";
										if (!array_key_exists($FF."%".$name1,$chainheaddetail))
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()' >".$location."</input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>".explode(":", $chaintypedetail[$FF."%".$previous])[0]."</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
										}
										else
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()' >".$location."</input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>".explode(":", $chaintypedetail[$FF."%".$previous])[0]."</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
										}
									}
									else
									{
										if (!array_key_exists($FF."%".$name1,$chainheaddetail))
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()' >".$location."</input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>Select Type</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
										}
										else
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()' >".$location."</input></p><ul class='nav nav-tabs' role='tablist'><li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' id='chain_selectM".$name1."'><span id='M".$name1."'>Select Type</span> <span class='caret'></span></a><ul class='dropdown-menu' role='menu'><li><a class='chain_select' id='chain_select".$name1."'>Coreference-InferedRelation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Apposition</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Identity</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Noun-Noun</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-PartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RPartOf-WMain</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Function-Value</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-Abbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-RAbbreviation</a></li><li><a class='chain_select' id='chain_select".$name1."'>Coreference-NounComplement</a></li><li class='divider'>Anaphora</li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-C</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-E</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-T</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-?</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RC</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RE</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-RT</a></li><li> <a class='chain_select' id='chain_select".$name1."'>Anaphora-R?</a></li></ul></li></ul></span>";
										}
									}
								} 
								else
								{
									if (!array_key_exists($FF."%".$name1,$chainheaddetail))
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$location."</input></p></span>";
										}
										else
										{
											$a=$a."<span id='".$name1."'><p id='txt".$name1."'><input checked type='checkbox' id='rad".$name1."' name='".$name."' value='vandan' onClick='keepcount()'>".$location."</input></p></span>";
										}
								}
						}
						$coout++;
						$previous=$name1;
					}
					$a="<div id='intxt".$name."' >".$a."</div>";
					$ans=$ans."<div class='span3' id='".$name."'><h5>".$name."</h5>".$a."</br><button class='btn' id='makechainhead".$name."'><span id='makechainhead".$name."A'> Sel./Rep. Head of ".$name." chain</span></button></div>";
					$count=$count+1;
					
					if ($count%3==0)
					{
						$ans="<div class='row-fluid'>"."</div>".$ans;
						$finalans=$finalans.$ans;
						$ans="";
					}					
					
					$a="";
				}
				if (strlen($ans)>0)
				{
					$finalans=$finalans.$ans;
					$ans='';
				}
				//print_r($chaintypedetail);
				//print "</br></br>";
				//print_r($chainheaddetail);
				print "".$finalans."";
	}
	
	

	public function savefilefinal()
	{
		   $this->load->library('parser');
		   $this->load->helper('file');
		   $this->load->helper('cookie');
		   $this->load->helper('file');
		   $filename=get_cookie('filename');
		   $filename=str_replace("application","",$filename);
		   $filename=str_replace("/","",$filename);
		   $filename=str_replace(".","",$filename);
		   
		   
				$this->load->database();
				$sql = "SELECT * FROM  ".$filename.""; 
				$query =$this->db->query($sql);
				$ans="";

				foreach ($query->result() as $row)
				{
					if($row->lex!=null)
					{
						$line=trim($row->line_text);
						$line=str_replace(">","",$line);
						$line=trim($line);
						//$ans=$ans.$line."\n";
							$pattern = "/(.*)(cref='[i0-9%:t0-9,]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement=$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$pattern = "/(.*)(crefHead='[".trim($row->lex).",:i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$pattern = "/(.*)(crefChainHead='[i0-9:,t0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$pattern = "/(.*) (crefType='[A-Za-z\-?:0-9,]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							//print $line."\n";
							$replacement =$a.$b;
							//print $replacement."\n";
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							//print $line."\n\n\n";
							$pattern = "/(.*)(acrefMod='[:m,%i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$pattern = "/(.*)(acrefModHead='[".trim($row->lex).",:m0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$pattern = "/(.*)(crefMod='[:m,%i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							
							
						if($row->cref!=null)
						{
							$pattern = "/(.*)(cref='[i0-9%:t0-9,]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement=$a.$b;
							//$replacement = 'trim(${1})trim(${3})';
							//print $line."\n";
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." cref=".trim($row->cref)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
							//print $line."\n";
						}
						if($row->crefHead!=null)
						{
							$pattern = "/(.*)(crefHead='[".trim($row->lex).",:i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." crefHead=".trim($row->crefHead)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						if($row->crefChainHead!=null)
						{
							$pattern = "/(.*)(crefChainHead='[i0-9:,t0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." crefChainHead=".trim($row->crefChainHead)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						
						if($row->crefType!=null)
						{
							$pattern = "/(.*) (crefType='[A-Za-z\-?,:0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." crefType=".trim($row->crefType)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						if($row->acrefMod!=null)
						{
							$pattern = "/(.*)(acrefMod='[:m,%i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." acrefMod=".trim($row->acrefMod)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						if($row->acrefModHead!=null)
						{
							$pattern = "/(.*)(acrefModHead='[".trim($row->lex).",:m0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." acrefModHead=".trim($row->acrefModHead)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						if($row->crefMod!=null)
						{
							$pattern = "/(.*)(crefMod='[:m,%i0-9]+')(.*)/i";
							$a='${1}';
							$a=trim($a);
							$b='${3}';
							$b=trim($b);
							$replacement =$a.$b;
							$line=trim(preg_replace($pattern, $replacement, $line));
							$line=trim($line);
							$line=$line." crefMod=".trim($row->crefMod)."";
							$line=trim($line);
							//$ans=$ans.$row->line_text."\n";
							//$ans=$ans.$crefstr."\n";
						}
						$line=trim(str_replace("    "," ",$line));
						$line=trim(str_replace("   "," ",$line));
						$line=trim(str_replace("  "," ",$line));
						$ans=$ans.$line.">\n";
					}
					else
					{
							$line=$row->line_text;
							$ans=$ans.trim($line)."\n";
					}
					//$ans=$ans.$row->line_text."";
				
				}
				//print $ans;
				
				//$data = 'Some file data';
				//$content = "some text here";
				//$fp = fopen("/views/data/" . "/myText.txt","wb");
				//fwrite($fp,$content);
				//fclose($fp);
				$filename=get_cookie('filename1');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
				
				$ft=trim(str_replace("views","views/",$filename));
				$ft=trim(str_replace("data","data/",$ft));
				#print APPPATH."/".$ft.".cout"."\n\n";
				if ( ! write_file(APPPATH."/".$ft.".cout", $ans,'w'))
				{
					 echo 'Unable to write the file';
				}
				else
				{
					 echo 'File written!';
				}
			
	}
	
	
	
	
	
	
	
	
	

	public function view_annotation()
	{
				$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
				
				$colormapping=array();
				$colorcode=array("AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","DarkOrange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Green","GreenYellow","HoneyDew","HotPink","IndianRed ","Indigo ","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","Yellow","YellowGreen");
				$this->load->database();				
				$sql = "SELECT * FROM  ".$filename."  WHERE lex != ?"; 
				$query =$this->db->query($sql, array('NULL'));
			
				$string1="";
				$start=0;
				
				foreach ($query->result() as $row)
				{
				if ($row->cref != NULL)
				   { 
						$cref=trim($row->cref);
						$crefHead=trim($row->crefHead);
						
						$cref=str_replace("\"","",$cref);
						$cref=str_replace("'","",$cref);
						$p_cref = explode(",", $cref);
						$cc_count=1;
						$lex=$row->lex;
						foreach ($p_cref as $s)
						{
							if(strlen($s)>0)
							{
								$p1_cref = explode(":", $s);
								$p1_cref[0]=str_replace("%1","",$p1_cref[0]);
								$p1_cref[0]=str_replace("%0","",$p1_cref[0]);
								$p1_cref[1]=str_replace(" ","",$p1_cref[1]);
								$p1_cref[1]=trim($p1_cref[1]);
								$p1_cref[0]=trim($p1_cref[0]);
								if (!array_key_exists(trim($p1_cref[1]), $colormapping)) 
								{
									$colormapping[trim($p1_cref[1])]=array_pop($colorcode);
								}
								
								if($crefHead!= NULL and str_replace("'","",trim(explode(":", $crefHead)[1]))==$p1_cref[0])
								{
										#print str_replace("'","",trim(explode(":", $crefHead)[1]))."---".$cref."<------->".$crefHead."</br>";
										$string1=$string1."<span id='lex".$start."'><button class='btn'><font color='".$colormapping[trim($p1_cref[1])]."'>".$row->lex." </font></button></span>";
								}
								else
								{
									if ($cc_count!=1)
									{
										$string1=$string1."<span id='lex".$start."'><font color='".$colormapping[trim($p1_cref[1])]."'>/".$row->lex."  </font></span>";
									}
									else
									{
										$string1=$string1."<span id='lex".$start."'><font color='".$colormapping[trim($p1_cref[1])]."'>".$row->lex."  </font></span>";
									}
								}
							$cc_count=$cc_count+1;
							}
						}	
						
				   }
				   elseif($row->acrefMod != NULL)
				   {
						$acrefMod=$row->acrefMod;
						$string1=$string1."<span id='lex".$start."'><b><font size='5'>".$row->lex."  </font></b></span>";
				   }
				   else
				   {
					$string1=$string1."<span id='llex".$start."'>".$row->lex."  </span>";
				   }
				   $start=$start+1;
				}
			print $string1;
				
	}
	public function multiKeyExists( Array $array, $key ) {
			if (array_key_exists($key, $array)) {
				return true;
			}
			foreach ($array as $k=>$v) {
				if (!is_array($v)) {
					continue;
				}
				if (array_key_exists($key, $v)) {
					return true;
				}
			}
			return false;
	}
	public function post_action()
	{
	
				$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
	if($_POST['textbox'] == "")
    {
        $message = "You can't send empty text";
    }
    else
    {
        $message = $_POST['textbox'];
    }
	$this->load->database();
	$message=trim(str_replace("&nbsp;"," ",$message));
	$pieces = explode("$", $message);
	$chainid=trim(str_replace("intxt","",$pieces[0]));
	$corid=''.trim($pieces[1]);
	$txtlines=explode(" ",trim($pieces[2]));
	$laststr=$txtlines[(sizeof($txtlines)-1)];
	$head=trim(explode("/", $pieces[3])[1]);
	$crefout="";
	foreach ($txtlines as $s)
		{
			$s=trim($s);
			if(strlen(trim($s))>0)
			{
					
					$s1 = explode("/", $s);	
					$s1[1]=trim($s1[1]);
					if($head == $s1[1])
					{
						if($laststr == $s)
						{
							$crefout=$corid.'%'.'1:'.$chainid;
						}
						else
						{
							$crefout=$corid.'%'.'0:'.$chainid;
						}
						
						$sql = "SELECT * FROM  ".$filename."  WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=trim($row->cref);
							$incref=str_replace("'","",$incref);
							if(strlen($incref)>0)
								$fcrefout="'".$incref.','.$crefout;
							else	
								$fcrefout="'".$crefout;
								
								
							$increfhead=trim($row->crefHead);
							$increfhead=str_replace("'","",$increfhead);
							if(strlen($increfhead)>0)
								$fcrefHeadout="'".$increfhead.','.$row->lex.":".$corid;
							else	
								$fcrefHeadout="'".$row->lex.":".$corid;
							
							$fcrefout=$fcrefout."'";
							$fcrefHeadout=$fcrefHeadout."'";
							
							$data = array(
							   'cref' => $fcrefout,
							   'crefHead' => $fcrefHeadout
							);

							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
						}
					}
					else
					{
						if($laststr == $s)
						{
							$crefout=$corid.'%'.'1:'.$chainid;
						}
						else
						{
							$crefout=$corid.'%'.'0:'.$chainid;
						}
						
						$sql = "SELECT * FROM  ".$filename."  WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=trim($row->cref);
							$incref=str_replace("'","",$incref);
							if(strlen($incref)>0)
								$fcrefout="'".$incref.','.$crefout;
							else	
								$fcrefout="'".$crefout;
								
							$fcrefout=$fcrefout."'";
							$data = array(
							   'cref' => $fcrefout
							);

							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
							
						}
					}
					

				
			}
		}
	}
	
	public function post_action_delete_link()
	{
		$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
		$message = $_POST['textbox'];
		$message1=$message;
		
		$this->load->database();
		$message=trim(str_replace("&nbsp;"," ",explode("$%$", $message)[0]));
		$pieces = explode("$", $message);
		$chainid=trim(str_replace("intxt","",$pieces[0]));
		$corid=trim($pieces[1]);
		$txtlines=explode(" ",trim($pieces[2]));
		$laststr=$txtlines[(sizeof($txtlines)-1)];
		$head=trim(explode("/", explode("head", $message1)[1])[1]);
		$crefout="";
		print_r($txtlines);
		foreach ($txtlines as $s)
		{
			$s=trim($s);
			if(strlen(trim($s))>0)
			{
					
					$s1 = explode("/", $s);	
					$s1[1]=trim($s1[1]);
					if($head == $s1[1])
					{
						if($laststr == $s)
						{
							$crefout=$corid.'%'.'1:'.$chainid;
						}
						else
						{
							$crefout=$corid.'%'.'0:'.$chainid;
						}
						print $crefout."\n";
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=$row->cref;
							$incref=str_replace("'","",$incref);
							$p1 = explode(",", $incref);
							$fcrefout=NULL;
							$cd=0;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if(trim($sp1) != trim($crefout))
									{
										
										if(strlen($incref)>0 and $cd!=0)
											$fcrefout=$fcrefout.",".trim($sp1);
										else
											$fcrefout=$fcrefout."".trim($sp1);
										$cd=$cd+1;
									}
								}
							}
							$increfhead=$row->crefHead;
							$increfhead=str_replace("'","",$increfhead);
							$p1 = explode(",", $increfhead);
							$fcrefheadout=NULL;
							$cd1=0;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if(trim($sp1) != trim($row->lex.":".$corid))
									{
										if(strlen($incref)>0 and $cd1!=0)
											$fcrefheadout=$fcrefheadout.",".trim($sp1);
										else
											$fcrefheadout=$fcrefheadout."".trim($sp1);
										$cd1=$cd1+1;
									}
								}
							}	
							if(strlen($fcrefout)>0)
								$fcrefout="'".$fcrefout."'";
							else
								$fcrefout=null;
								
							if(strlen($fcrefheadout)>0)
								$fcrefheadout="'".$fcrefheadout."'";
							else
								$fcrefheadout=null;
								
								
								$data = array(
									'cref' => $fcrefout,
									'crefHead' => $fcrefheadout
								);

								$this->db->where('line_no', $s1[1]);
								$this->db->update($filename, $data); 
							
							
						}
					}
					else
					{
						if($laststr == $s)
						{
							$crefout=$corid.'%'.'1:'.$chainid;
						}
						else
						{
							$crefout=$corid.'%'.'0:'.$chainid;
						}
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=$row->cref;
							
							$incref=str_replace("'","",$incref);
							$p1 = explode(",", $incref);
							
							$fcrefout=NULL;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if(trim($sp1) != trim($crefout))
									{
										if(strlen($incref)>0)
											$fcrefout=$fcrefout.",".trim($sp1);
										else
											$fcrefout=$fcrefout."".trim($sp1);
									}
								}
							}
							
							if(strlen($fcrefout)>0)
								$fcrefout="'".$fcrefout."'";
							else
								$fcrefout=null;
							$data = array(
							   'cref' => $fcrefout
							);
							
							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
							
						}
					}
					

				
			}
		}
	}
	
	public function post_action_save_crefmod()
	{
	
				$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
	
	if($_POST['textbox'] == "")
    {
        $message = "You can't send empty text";
    }
    else
    {
        $message = $_POST['textbox'];
    }
	$this->load->database();
	$message=trim(str_replace("&nbsp;"," ",$message));
	$message=trim(str_replace("</font>"," ",$message));
	$message=trim(str_replace("</b>"," ",$message));
	
	$pieces = explode("$", $message);
	$pieces1 = explode('<font size="1"><b>', $pieces[2]);
	$string = $pieces1[1];
	$pattern = '/(.*)(<font id="hci[0-9]+" color="red">)(.*)/i';
	$replacement = '${1}${3}';
	
	
	$crefstr=trim(preg_replace($pattern, $replacement, $string));
	
	$acrefstr=trim($pieces1[0]);
	$crefmodid=trim($pieces[0]);
	$crefid=trim($pieces[1]);
	$crefhead=trim($pieces[4]);
	$crefmodhead=trim($pieces[3]);
		
	$txtlines=explode(" ",$acrefstr);
	$laststr=$txtlines[(sizeof($txtlines)-1)];
	$head=$crefmodhead;
	$crefout="";
	foreach ($txtlines as $s)
		{
			$s=trim($s);
			if(strlen(trim($s))>0)
			{
					
					$s1 = explode("/", $s);	
					$s1[1]=trim($s1[1]);
					if(explode("/", $head)[1] == $s1[1])
					{
						if($laststr == $s)
						{
							$crefout=$crefmodid.'%'.'1:'.$crefid;
						}
						else
						{
							$crefout=$crefmodid.'%'.'0:'.$crefid;
						}
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=trim($row->acrefMod);
							$incref=str_replace("'","",$incref);
							if(strlen($incref)>0)
								$fcrefout="'".$incref.','.$crefout."'";
							else	
								$fcrefout="'".$crefout."'";
								
								
							$increfhead=trim($row->acrefModHead);
							$increfhead=str_replace("'","",$increfhead);
							if(strlen($increfhead)>0)
								$fcrefHeadout="'".$increfhead.','.$row->lex.":".$crefmodid."'";
							else	
								$fcrefHeadout="'".$row->lex.":".$crefmodid."'";
							
							$data = array(
							   'acrefMod' => $fcrefout,
							   'acrefModHead' => $fcrefHeadout
							);
							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
						}
					}
					else
					{
						if($laststr == $s)
						{
							$crefout=$crefmodid.'%'.'1:'.$crefid;
						}
						else
						{
							$crefout=$crefmodid.'%'.'0:'.$crefid;
						}
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=trim($row->acrefMod);
							$incref=str_replace("'","",$incref);
							if(strlen($incref)>0)
								$fcrefout="'".$incref.','.$crefout."'";
							else	
								$fcrefout="'".$crefout."'";
							$data = array(
							   'acrefMod' => $fcrefout
							);
							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
							
						}
					}
			}
		}
		
		
		
			$s=trim($crefhead);
			if(strlen(trim($s))>0)
			{
					
						$s1 = explode("/", $s);	
						$s1[1]=trim($s1[1]);
					
						$crefout=$crefmodid.':'.$crefid;
							
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=trim($row->crefMod);
							$incref=str_replace("'","",$incref);
							if(strlen($incref)>0)
								$fcrefout="'".$incref.','.$crefout."'";
							else	
								$fcrefout="'".$crefout."'";
						}
							$data = array(
							   'crefMod' => $fcrefout
							);
							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
			}
		
	}
	
	
	
	
	
	public function post_action_save_chain()
	{
		$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
		$message1 = $_POST['chainsend1'];
		$message2 = $_POST['chainsend2'];
		$message3 = $_POST['chainsend3'];	
		$chainheadon = $_POST['chainheadon'];
		$chainheadchainid = $_POST['chainheadchainid'];	
		$chainheadcid=$_POST['chainheadcid'];	
		
		$piecesmessage1 = explode("%$%", $message1);
		$piecesmessage2 = explode("%$%", $message2);
		$piecesmessage3 = explode("%$%", $message3);
		/*
		print_r($piecesmessage1);
		print "\n";
		print_r($piecesmessage2);
		print "\n";
		print_r($piecesmessage3);
		print "\n";*/
		$this->load->database();
		for ($x=0; $x<sizeof($piecesmessage1); $x++) {
			if($piecesmessage1[$x])
			{
						$fcrefchainout=NULL;
						if(strlen($fcrefchainout)>0)
							$fcrefchainout=$fcrefchainout.",".$piecesmessage3[$x].":".$piecesmessage1[$x];
						else
							$fcrefchainout=$fcrefchainout."".$piecesmessage3[$x].":".$piecesmessage1[$x];
							
							
						$ValueCheck=true;
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',explode("/",$piecesmessage2[$x])[1]));
						foreach ($query->result() as $row)
						{
							$increfchain=trim($row->crefType);
							$increfchain=str_replace("'","",$increfchain);
							//print "vandan    ".$increfchain."\n";
							$p1 = explode(",", $increfchain);
							
							$ccouut=0;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if ($sp1!=null)
									{
										//print "vandannnnn ".trim(explode(":",$sp1)[1])."---->".trim($piecesmessage1[$x])."\n";
										if(trim(explode(":",$sp1)[1]) != trim($piecesmessage1[$x]))
										{
											if(strlen($fcrefchainout)>0)
												$fcrefchainout=$fcrefchainout.",".trim($sp1);
											else
												$fcrefchainout=$fcrefchainout."".trim($sp1);
											$ValueCheck=False;
										}
										else
										{
										/*
											if($ccouut>0)
												$fcrefchainout=$fcrefchainout.",".$piecesmessage3[$x].":".$piecesmessage1[$x];
											else
												$fcrefchainout=$fcrefchainout."".$piecesmessage3[$x].":".$piecesmessage1[$x];
											$ValueCheck=True;*/
										}
									}
									else
									{
										
											
									}
									$ccouut++;
								}
							}
						}
						
						if (!$ValueCheck)
						{
						/*
						if(strlen($fcrefchainout)>0)
							$fcrefchainout=$fcrefchainout.",".$piecesmessage3[$x].":".$piecesmessage1[$x];
						else
							$fcrefchainout=$fcrefchainout."".$piecesmessage3[$x].":".$piecesmessage1[$x];*/
						}
						if(strlen($fcrefchainout)>0)
							$fcrefchainout="'".$fcrefchainout."'";
							
						$data = array(
							'crefType' =>$fcrefchainout
							);
						//print "\n\n\n\n str \n\n\n\n".$data['crefType']."cvav   \n";
						$this->db->where('line_no', explode("/",$piecesmessage2[$x])[1]);
						$this->db->update($filename, $data);						 
			}
		} 
						$fcrefchainheadout=NULL;
						if(strlen($fcrefchainheadout)>0)
							$fcrefchainheadout=$fcrefchainheadout.",".$chainheadcid.":t".$chainheadchainid;
						else
							$fcrefchainheadout=$fcrefchainheadout."".$chainheadcid.":t".$chainheadchainid;
		
		
						$ValueCheck=true;
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',explode("/",$chainheadon)[1]));
						foreach ($query->result() as $row)
						{
							$increfchainhead=trim($row->crefChainHead);
							$increfchainhead=str_replace("'","",$increfchainhead);
							$p1 = explode(",", $increfchainhead);
							
							$ccouut=0;
							
							
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if ($sp1!=null)
									{
										print explode(":",$sp1)[1]."---->".trim("t".$chainheadchainid);
										if(explode(":",$sp1)[1] != trim("t".$chainheadchainid))
										{
											if(strlen($fcrefchainheadout)>0)
												$fcrefchainheadout=$fcrefchainheadout.",".trim($sp1);
											else
												$fcrefchainheadout=$fcrefchainheadout."".trim($sp1);
											$ValueCheck=False;
										}
										else
										{
										/*
											if($ccouut>0)
												$fcrefchainheadout=$fcrefchainheadout.",".$chainheadcid.":t".$chainheadchainid;
											else
												$fcrefchainheadout=$fcrefchainheadout."".$chainheadcid.":t".$chainheadchainid;
											$ValueCheck=True;*/
										}
									}
									else
									{
											/*
											if($ccouut>0)
												$fcrefchainheadout=$fcrefchainheadout.",".$chainheadcid.":t".$chainheadchainid;
											else
												$fcrefchainheadout=$fcrefchainheadout."".$chainheadcid.":t".$chainheadchainid;
											$ValueCheck=True;*/
									}
									$ccouut++;
								}
							}
						}
						
						if (!$ValueCheck)
						{
						/*
						if(strlen($fcrefchainheadout)>0)
							$fcrefchainheadout=$fcrefchainheadout.",".$chainheadcid.":t".$chainheadchainid;
						else
							$fcrefchainheadout=$fcrefchainheadout."".$chainheadcid.":t".$chainheadchainid;*/
						}
						
						if(strlen($fcrefchainheadout)>0)
							$fcrefchainheadout="'".$fcrefchainheadout."'";
						
						//print "\n\nlast".$fcrefchainheadout;
						$data = array(
							'crefChainHead' => $fcrefchainheadout
							);
						$this->db->where('line_no', explode("/",$chainheadon)[1]);
						$this->db->update($filename, $data);
				

	}
	
	
	public function post_action_delete_link_crefmod()
	{
		$this->load->helper('cookie');
				$filename=get_cookie('filename');
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
		$message = $_POST['textbox'];
		$message1=$message;
		$this->load->database();
		$message=str_replace("&nbsp;"," ",$message);
		$message=str_replace("</font>","",$message);
		$message=str_replace("</b>","",$message);
		$pieces = explode("$", $message);		
		$pieces1 = explode('<font size="1"><b>', $pieces[2]);
		$string=$pieces1[0];
		$pattern = '/(.*)(<font id="hcm[0-9]+" color="red">)(.*)/i';
		$replacement = '${1}${3}';
		$crefstr=trim(preg_replace($pattern, $replacement, $string));
		$txtcrefmod=trim($crefstr);
		
		$string=$pieces1[1];
		$pattern = '/(.*)(<font id="hci[0-9]+" color="red">)(.*)/i';
		$replacement = '${1}${3}';
		$crefstr=trim(preg_replace($pattern, $replacement, $string));
		$creftxt=trim($crefstr);
		$crefhead=trim($pieces[4]);
		$crefmodhead=trim($pieces[3]);
		preg_match( '/.*hcm([0-9]+).*/', $pieces1[0], $match );
		$crefmodm="m".trim($match[1]);
		preg_match( '/.*hci([0-9]+).*/', $pieces1[1], $match );
		$crefid="i".trim($match[1]);
		$txtlines=explode(" ",trim($txtcrefmod));
		$laststr=$txtlines[(sizeof($txtlines)-1)];
		$crefout="";
		foreach ($txtlines as $s)
		{
			$s=trim($s);
			if(strlen(trim($s))>0)
			{
					
					$s1 = explode("/", $s);	
					$s1[1]=trim($s1[1]);
					if(explode("/",$crefmodhead)[1] == $s1[1])
					{
						if($laststr == $s)
						{
							$crefout=$crefmodm.'%'.'1:'.$crefid;
						}
						else
						{
							$crefout=$crefmodm.'%'.'0:'.$crefid;
						}
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=$row->acrefMod;
							$incref=str_replace("'","",$incref);
							$p1 = explode(",", $incref);
							$fcrefout=NULL;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if(trim($sp1) != trim($crefout))
									{
										if(strlen($fcrefout)>0)
											$fcrefout=$fcrefout.",".trim($sp1);
										else
											$fcrefout=$fcrefout."".trim($sp1);
									}
								}
							}
							$increfhead=$row->acrefModHead;
							$increfhead=str_replace("'","",$increfhead);
							$p1 = explode(",", $increfhead);
							$fcrefheadout=NULL;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									//print trim($sp1)."----->".trim($row->lex.":".$crefmodm)."\n";
									if(trim($sp1) != trim($row->lex.":".$crefmodm))
									{
										if(strlen($fcrefheadout)>0)
											$fcrefheadout=$fcrefheadout.",".trim($sp1);
										else
											$fcrefheadout=$fcrefheadout."".trim($sp1);
									}
								}
							}	
							if(strlen($fcrefheadout)>0)
								$fcrefheadout="'".$fcrefheadout."'";
							if(strlen($fcrefout)>0)
								$fcrefout="'".$fcrefout."'";
							
								$data = array(
									'acrefMod' => $fcrefout,
									'acrefModHead' => $fcrefheadout
								);

								$this->db->where('line_no', $s1[1]);
								$this->db->update($filename, $data); 
							
							
						}
					}
					else
					{
						if($laststr == $s)
						{
							$crefout=$crefmodm.'%'.'1:'.$crefid;
						}
						else
						{
							$crefout=$crefmodm.'%'.'0:'.$crefid;
						}
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',$s1[1]));
						foreach ($query->result() as $row)
						{
							$incref=$row->acrefMod;
							$incref=str_replace("'","",$incref);
							$p1 = explode(",", $incref);
							$fcrefout=NULL;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									//print $sp1."-------->".$crefout."\n";
									if(trim($sp1) != trim($crefout))
									{
										if(strlen($fcrefout)>0)
											$fcrefout=$fcrefout.",".trim($sp1);
										else
											$fcrefout=$fcrefout."".trim($sp1);
									}
								}
							}
							
							if(strlen($fcrefout)>0)
								$fcrefout="'".$fcrefout."'";
							$data = array(
							   'acrefMod' => $fcrefout
							);

							$this->db->where('line_no', $s1[1]);
							$this->db->update($filename, $data); 
							
						}
					}
					

				
			}
		}
		
		
						
						$crefout=$crefmodm.':'.$crefid;
								
						
						$sql = "SELECT * FROM ".$filename." WHERE lex != ? and line_no = ?"; 
						$query =$this->db->query($sql, array('NULL',explode("/", $crefhead)[1]));
						foreach ($query->result() as $row)
						{
							$incref=$row->crefMod;
							$incref=str_replace("'","",$incref);
							$p1 = explode(",", $incref);
							$fcrefout=NULL;
							foreach ($p1 as $sp1)
							{
								if(strlen(trim($sp1))>0)
								{
									if(trim($sp1) != trim($crefout))
									{
										if(strlen($fcrefout)>0)
											$fcrefout=$fcrefout.",".trim($sp1);
										else
											$fcrefout=$fcrefout."".trim($sp1);
									}
								}
							}
						}
							if(strlen($fcrefout)>0)
								$fcrefout="'".$fcrefout."'";
								
							$data = array(
							   'crefMod' => $fcrefout
							);
		
						$this->db->where('line_no', explode("/", $crefhead)[1]);
						$this->db->update($filename, $data); 
		
	}
	
	
	
	
	
	
	
	
	
	public function parse_ssf_file($string,$filename)
        {


		error_reporting(E_ERROR | E_PARSE);
		$flag=false;
		$preflag=true;
		$postflag=false;
		$stack = array("file_name","pressf", "postssf","line_no","line_text","crefChainHead","crefType","acrefMod","acrefModHead","crefMod","cref","crefHead");
		$pretext="";
		$posttext="";
		$text="";
		$this->load->helper('cookie');
				$filename=get_cookie('filename');
                                //$filename='views/data/vandan/august/fullnews_id_3516349_date_25_8_2005.dat';
				$filename=str_replace("application","",$filename);
				$filename=str_replace("/","",$filename);
				$filename=str_replace(".","",$filename);
		$line_count=1;
		foreach ($string as &$value) {				
				if (preg_match("/<Sentence id=/", trim($value), $match)) :
							$flag=true;
							$preflag=false;
							$postflag=false;
							#print htmlspecialchars($s)."</br>";
						endif;
						if (preg_match("/<\/text>/", trim($value), $match)) :
							$flag=false;
							$preflag=false;
							$postflag=true;
							#print htmlspecialchars($s)."</br>";
						endif;
						
				if($preflag)
				{
					$pretext=$pretext.$value;
				}
				if($postflag)
				{
					$posttext=$posttext.$value;
				}
				if($flag)
				{
				#print htmlspecialchars($value)."</br>";
				#print htmlspecialchars($value)."</br>";
				$pieces0 = explode("\t", $value);
				$tabcount=1;
				foreach ($pieces0 as $s)
					{
						#print htmlspecialchars($s)."</br>";
						
						if ($flag)
						{
						
						$pieces1 = explode(" ", $s);
						foreach ($pieces1 as $s1)
						{
							$s1=str_replace(">","",$s1);
							$s1=str_replace("<","",$s1);
							#print htmlspecialchars($s1)."</br>";
							if (strpos($s1,'=') !== false)
							{
						
							$pieces2 = explode("=", $s1);
							#foreach ($pieces2 as $s2)
							#{
								array_push($stack, trim($pieces2[0]));
								#print htmlspecialchars($pieces2[0])."</br>";
								#print htmlspecialchars($pieces2[0])."==".htmlspecialchars($pieces2[1])."</br>";
							#}
							}
							else
							{
								if (strpos($s1,'Sentence') !== false)
								{
									continue;
								}
								if ($tabcount==1 && preg_match("/[0-9]+/", $s1, $match))
								{
									array_push($stack, "lexnumber");
									#print $tabcount."  lexnumber    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==2)
								{
									array_push($stack, "lex");
									#print $tabcount."  lex    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==3)
								{
									array_push($stack, "pos");
									#print $tabcount."  pos    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==4)
								{
									array_push($stack, "fs");
									#print $tabcount."  fs    ".htmlspecialchars($s1)."</br>";
								}
								
								$tabcount=$tabcount+1;
							}
						}
						}
						
					}
				}
				$line_count=$line_count+1;
		}
		

		#print_r( $stack);
		#print_r(array_unique($stack));
		$fields = array();
		$data= array();
		foreach (array_unique($stack) as $key)
		{
			#print $key."</br>";
			$data[$key]=null;
			if (strpos($key,'file_name') !== false)
			{
			
			$fields[$key]=array();
			$fields[$key]['type']='TEXT';
			$fields[$key]['null']=true;
			}
			else
			{
			$fields[$key]=array();
			$fields[$key]['type']='TEXT';
			$fields[$key]['null']=true;
			}
		}
		#print_r($fields);
		$this->dbf($fields,$filename);
		
		
		
		
		$this->load->database();
		$line_count=1;
		$d1=array();
		$stmid=null;
		foreach ($string as &$value) {
				
				$data['file_name']=$filename;
				$data['pressf']=$pretext;
				$data['postssf']=$posttext;
				$data['line_no']=$line_count;
				$data['line_text']=$value;
				$data['crefChainHead']=null;
				$data['crefType']=null;
				$data['acrefMod']=null;
				$data['acrefModHead']=null;
				$data['crefMod']=null;
				$data['cref']=null;
				$data['crefHead']=null;
				
				#print $line_count."   ".htmlspecialchars($value)."</br>";
				#print htmlspecialchars($value)."</br>";
				#if (trim($value)=='')
				#{
				#	continue;
				#}
				if (preg_match("/<\/Sentence>/", trim($value), $match)) :
							$stmid=null;
						endif;
				if (preg_match("/<Sentence id=/", trim($value), $match)) :
							$flag=true;
							$preflag=false;
							$postflag=false;
						endif;
						if (preg_match("/<\/text>/", trim($value), $match)) :
							$flag=false;
							$preflag=false;
							$postflag=true;
						endif;
						
				if($preflag)
				{

				}
				if($postflag)
				{

				}
				if($flag)
				{
				#print htmlspecialchars($value)."</br>";
				#print htmlspecialchars($value)."</br>";
				$pieces0 = explode("\t", $value);
				$tabcount=1;
				foreach ($pieces0 as $s)
					{
						#print htmlspecialchars($s)."</br>";
						
						if ($flag)
						{
						$pieces1 = explode(" ", $s);
						foreach ($pieces1 as $s1)
						{
							$s1=str_replace(">","",$s1);
							$s1=str_replace("<","",$s1);
							#$s1=str_replace("\"","",$s1);
							#print htmlspecialchars($s1)."</br>";
							if (strpos($s1,'=') !== false)
							{
						
							$pieces2 = explode("=", $s1);
							#foreach ($pieces2 as $s2)
							#{
								if (strpos($pieces2[0],'id') !== false)
								{
									$stmid=($pieces2[1]);
									$data[trim($pieces2[0])]=($pieces2[1]);
								}
								else
								{
								$data[trim($pieces2[0])]=($pieces2[1]);
								}
								#array_push($stack, trim($pieces2[0]));
								#print htmlspecialchars($pieces2[0])."</br>";
								#print htmlspecialchars($pieces2[0])."==".htmlspecialchars($pieces2[1])."</br>";
							#}
							}
							else
							{
								if (strpos($s1,'Sentence') !== false)
								{
									continue;
								}
								if ($tabcount==1 && preg_match("/[0-9]+/", $s1, $match))
								{
									$data["lexnumber"]=$s1;
									#array_push($stack, "lexnumber");
									#print $tabcount."  lexnumber    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==2)
								{
									$data["lex"]=$s1;
									#array_push($stack, "lex");
									#print $tabcount."  lex    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==3)
								{
									$data["pos"]=$s1;
									#array_push($stack, "pos");
									#print $tabcount."  pos    ".htmlspecialchars($s1)."</br>";
								}
								if ($tabcount==4)
								{
									$data["fs"]=$s1;
									#array_push($stack, "fs");
									#print $tabcount."  fs    ".htmlspecialchars($s1)."</br>";
								}
								
								$tabcount=$tabcount+1;
							}
						}
						}
						
					}
				}
				$data['id']=$stmid;
				//$data['crefChainHead']=null;
				array_push($d1,$data);
				#$this->db->insert($filename, $data); 
				$this->erase_val($data);
				
				$line_count=$line_count+1;
				
		}
		
		
		
		$this->db->insert_batch($filename, $d1); 
		$this->db->close();
		
	}
	
	
	
	public function erase_val(&$myarr) 
	{
    $myarr = array_map(create_function('$n', 'return null;'), $myarr);
	}
	public function dbf($fields,$filename)
	{
		
			$this->load->database();
			$this->load->dbforge();
			
			
			
			$this->dbforge->add_field($fields);
			$this->dbforge->create_table($filename,True);
			$this->db->empty_table($filename);
			#$query = $this->db->query('CREATE TABLE SSF_F name, title, email FROM my_table');
			#$tables = $this->db->list_tables();
		

			$this->db->close();

	}
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}
