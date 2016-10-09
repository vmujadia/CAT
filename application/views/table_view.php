<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <title>Coreference Annotation Tool for Indian Languages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://10.3.1.91/coreference/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <style>
      .thumb {
        height: 75px;
        border: 1px solid #000;
        margin: 10px 5px 0 0;
      }
    </style>
	
  
    <script src="http://10.3.1.91/coreference/assets/js/jquery.min.js"></script>
	<script src="http://10.3.1.91/coreference/assets/js/dropdown.js"></script>
    <link href="http://10.3.1.91/coreference/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Coreference Annotation</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">vandan Mujadia</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="http://researchweb.iiit.ac.in/~vandan.mujadia/">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span3">
          <div id="mmov" class="well sidebar-nav">
            <ul class="nav nav-list">
             
              <li><button class="btn" id="btnclearall">Clear All</button>&nbsp;&nbsp;&nbsp;&nbsp;</li>
	      <br>
             <li><button class="btn" id="btnpos">Toggle POS</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" id="btndrel">Toggle Drel</button></li>
             <br>
			 <li><button class="btn" id="btnchunk">Toggle Chunk</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" id="btnstm">Toggle stm</button>&nbsp;&nbsp;&nbsp;&nbsp;</li></br>
			 
			 <li><button class="btn" id="btnmorph">Toggle Morph</button>&nbsp;&nbsp;&nbsp;&nbsp;</li><br><li><button class="btn" id="btnann">View Annotation</button></li>
             <br>
             <li><button class="btn" id="btnaddnew">Add new</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" id="btnhide">Toggle Annotation</button></li>
			 <br>
			 <li><button class="btn" id="btnshow_chain">Show Chain</button>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			 <br>
             <li><button class="btn" id="b5">Save All</button></li>
			 <br>
			 <span id="bgroup"><span>
            </ul>
			
          </div><!--/.well -->
		  
		 <div id='headMarkerText'>
		 </div>
        </div><!--/span-->
		<script>
		
			var fixedElement = false;
			var changingMoment = 250; // numbers of pixels from top where we want to fix or unfix
			$(window).scroll(function() {
				// floatingContentMark lets us know where the element shall change 
				// from fixed to relative and vice versa
				var distanceFromTop = $("#mmov").offset().top - $(this).scrollTop();    
				if ((distanceFromTop <= changingMoment && !fixedElement) || 
					(distanceFromTop >= changingMoment && fixedElement)) 
				{    // either we came from top or bottom, same event triggered
					 fixedElement = !fixedElement;
					 $('#mmov').trigger('fixElement');
				}
			});

			// maybe dispatch in two different handlers, fix and unfix.
			$('#mmov').bind('fixElement', function() {
				if ($(this).css('position') != 'fixed') {
					$(this).css('position', 'fixed') ;
					$(this).css('top', changingMoment ) ;
				}
				else {
					$(this).css('position', 'relative') ;
					$(this).css('top', 'auto') ;
				}
			}) ;
		
		
			function GetSelectedText () {
				if (window.getSelection) {  // all browsers, except IE before version 9
					var range = window.getSelection ();
					return (range.toString ());
				} 
				else {
					if (document.selection.createRange) { // Internet Explorer
						var range = document.selection.createRange ();
						return (range.text);
					}
				}
			}
			function chain_select()
			{
				alert("you are in chain select");
			}
			
		</script>
		
		
        <div class="span9">
			<font color='green'><b>{filename}</b></font>
          <div class="hero-unit" id="ssfcontent">
		  <div>
			{products}
			</div>
          </div>
        
		  <div class="hero-unit" id="ssfcontent1">
			<div id ="vanc">  </div>
          </div>
		
		  <div id ="vanb">  </div>
		  
		<div id="allannotation">
		<ul class="nav nav-list">
			<div id="textall">
			{ans}
			</div><!--/row-->
			<div id="sall">
			
			
			
			
			
			
			
			
			
			
			
			
			
				<script type="text/javascript">
		var start=0;
		var end={end};
		var imax={imax};
		var tmax={tmax};
		var mmax={mmax};
		imax=imax+1;
		tmax=tmax+1;
		$(document).ready(function(){
					for (var i = start; i < parseInt(end)+1; i++) { 
							$("#pos"+i).hide();
							$("#drel"+i).hide();
							$("#af"+i).hide();
							$("#id"+i).hide();
							$("#chunkType"+i).hide();
							$("#ssfcontent1").hide();
					}
		
					$("#btnaddnew").click(function(){
						selectedtext=GetSelectedText();
						if((selectedtext)!="")
							{
								selectedtext=selectedtext.replace(/\s+/g, ' ');
								
								if(selectedtext.split("/").length-1 == 1)
								{
									a="<span id='i"+imax+"'><p id='txti"+imax+"'>"+selectedtext+" </p><button class='headb' id='hi"+imax+"'>H</button> <button class='modb' id='mi"+imax+"'>M</button> <button class='delb' id='di"+imax+"'>D</button> <a class='dell' id='ai"+imax+"'>delete</a></br></br></span>";
									a="<div id='intxtt"+tmax+"' >"+a+"</div>";
									ans="<div class='span3' id='t"+tmax+"'><h5>t"+tmax+"</h5>"+a+"</br><button class='btn' id='chainaddt"+tmax+"'>AddIn t"+tmax+" chain</button></div>";
									
									
									if (tmax%3==0)
									{
										ans="<div class='row-fluid'>"+"</div>"+ans;
										$("#textall").append(ans);
									}
									else
									{
										$("#textall").append(ans);
									}
									var id = 'i'+imax;
									//id=id.replace("h", "");
									var master_id='intxtt'+tmax;
									text=$("#txt"+id).html();
											if(text.indexOf('color="red"') > -1)
											{
												alert("Have you gone mad!! multiple head ?");
											}
											else
											{
												c="<font id='hc"+id+"' color='red' >"+selectedtext+"</font>";
												f=text.replace(selectedtext, c);
												$.ajax({
													 type: "POST",
													 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action", 
													 data: {textbox: master_id+'$'+id+'$'+text+'$'+selectedtext},
													 dataType: "text",  
													 cache:false,
													 success: 
														  function(data){
															//alert(data);  //as a debugging message.
														  }
													  });// you have missed this bracket
													$("#txt"+id).replaceWith("<p id='txt"+id+"'>"+f+"</p>");
												 //return false;
											} 
									imax=imax+1;
									tmax=tmax+1;
								}
								else
								{
									a="<span id='i"+imax+"'><p id='txti"+imax+"'>"+selectedtext+" </p><button class='headb' id='hi"+imax+"'>H</button> <button class='modb' id='mi"+imax+"'>M</button> <button class='delb' id='di"+imax+"'>D</button> <a class='dell' id='ai"+imax+"'>delete</a></br></br></span>";
									a="<div id='intxtt"+tmax+"' >"+a+"</div>";
									ans="<div class='span3' id='t"+tmax+"'><h5>t"+tmax+"</h5>"+a+"</br><button class='btn' id='chainaddt"+tmax+"'>AddIn t"+tmax+" chain</button></div>";
									
									imax=imax+1;
									tmax=tmax+1;
									if (tmax%3==0)
									{
										ans="<div class='row-fluid'>"+"</div>"+ans;
										$("#textall").append(ans);
									}
									else
									{
										$("#textall").append(ans);
									}
								}
								
							}
						else
							{
								alert("please select text first");
							}
					});
					
					
					$("#btnhide").click(function(){
						$("#allannotation").toggle();
						
					});
					var btnann=0;
					$("#btnann").click(function(){
					
										if(btnann%2==0)
										{
											$.ajax({
											 type: "POST",
											 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/view_annotation", 
											 data: {textbox: 'test'},
											 dataType: "text",  
											 cache:false,
											 success: 
												  function(data){
												    $("#ssfcontent1").replaceWith('<div class="hero-unit" id="ssfcontent1">'+data+'</div>');
												  }
											});
										}
										else
										{
											$("#ssfcontent1").replaceWith('<div class="hero-unit" id="ssfcontent1"></div>');
										}
										btnann=btnann+1;
						$("#ssfcontent").toggle();
						$("#ssfcontent1").toggle();
					});
					var btnshowchain=0;
					
					$("#btnshow_chain").click(function(){
					
										if(btnshowchain%2==0)
										{
											$.ajax({
											 type: "POST",
											 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/show_chain", 
											 data: {textbox: 'test'},
											 dataType: "text",  
											 cache:false,
											 success: 
												  function(data){
												        $("#vanb").replaceWith('<div id="vanb">'+data+'</div>');
														//alert(data);  //as a debugging message.
												  }
											});
										}
										else
										{
											$("#vanb").replaceWith('<div id="vanb"></div>');
										}
										btnshowchain=btnshowchain+1;
										
					});
					
$("#btnclearall").click(function(){
					
										
											$.ajax({
											 type: "POST",
											 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/clearall", 
											 data: {textbox: 'test'},
											 dataType: "text",  
											 cache:false,
											 success: 
												  function(data){
													$("#textall").replaceWith('<div id="textall"></div>');
												}
											});


										
										
					});


				
					
					
					
					
					
					
					$("#btnpos").click(function(){										
						for (var i = start; i < end+1; i++) { 
							$("#pos"+i).toggle();
						}
					});
					$("#btndrel").click(function(){										
						for (var i = start; i < end+1; i++) { 
							$("#drel"+i).toggle();
						}
					});
					$("#btnmorph").click(function(){										
						for (var i = start; i < end+1; i++) { 
							$("#af"+i).toggle();
						}
					});
					$("#btnstm").click(function(){										
						for (var i = start; i < end+1; i++) { 
							$("#id"+i).toggle();
						}
					});
					$("#btnchunk").click(function(){										
						for (var i = start; i < end+1; i++) { 
							$("#chunkType"+i).toggle();
						}
					});
					
		});
		
		
		
		
		
		//head selection and save to data base 
		$(document).on('click',".headb",(function() {
							var id = this.id;
							id=id.replace("h", "");
							text=$("#txt"+id).html();
							selectedtext=GetSelectedText();
							var master_id = $(this).parent().parent().attr('id'); 
							if((selectedtext)!="")
							{
								if(text.indexOf(selectedtext) > -1)
								{
																	
									
										if(text.indexOf('<font size="1">') > -1)
										{
											if(text.indexOf('color="green"') > -1)
											{
												alert("Have you gone mad!! multiple head ?");
											}	
											else
											{
												mmax=mmax+1;
												c="<font id='hcm"+mmax+"' color='green' >"+selectedtext+"</font>";
												f=text.replace(selectedtext, c);
												//alert("in acrefmod select");
												var test = text.match(/.*hci([0-9]+).*/);
												var headofacrefmod=$("#hci"+test[1]).html();
												//alert (test[1]+"\n"+headofacrefmod);
												$.ajax({
													 type: "POST",
													 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action_save_crefmod", 
													 data: {textbox: 'm'+mmax+'$i'+test[1]+'$'+text+'$'+selectedtext+'$'+headofacrefmod},
													 dataType: "text",  
													 cache:false,
													 success: 
														  function(data){
															//alert(data);  //as a debugging message.
														  }
													  });// you have missed this bracket
													  //alert(id+"\n"+f+"\n"+"<p class='"+mmax+"' id='txt"+id+"'>"+f+"</p>");
													  $("#txt"+id).replaceWith("<p class='m"+mmax+"' id='txt"+id+"'>"+f+"</p>");
												return false;
											}
										}
										else
										{
											if(text.indexOf('color="red"') > -1)
											{
												alert("Have you gone mad!! multiple head ?");
											}
											else
											{
												c="<font id='hc"+id+"' color='red' >"+selectedtext+"</font>";
												f=text.replace(selectedtext, c);
												$.ajax({
													 type: "POST",
													 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action", 
													 data: {textbox: master_id+'$'+id+'$'+text+'$'+selectedtext},
													 dataType: "text",  
													 cache:false,
													 success: 
														  function(data){
															//alert(data);  //as a debugging message.
														  }
													  });// you have missed this bracket
													$("#txt"+id).replaceWith("<p id='txt"+id+"'>"+f+"</p>");
												 return false;
											} 
										}
									
								}
								else
								{
									alert("please select proper head");
								}
							}
							else
							{
								alert("please select text first");
							}
		
		}));
		
		//client side code for remove link
		$(document).on('click',".dell",(function() {
							var id = this.id;
							id=id.replace("a", "");
							text=$("#txt"+id).html();
							var master_id = $(this).parent().parent().attr('id');

							if(text.indexOf("color=") > -1)
							{
								var mtext=text.replace('<font id="hc'+id+'" color="red">','head').replace('</font>','');
								var mtext0=text.replace('<font id="hc'+id+'" color="red">','').replace('</font>','');
								var r=confirm("sure are you want to delete this entity?   "+text.replace('<font id="hc'+id+'" color="red">','').replace('</font>',''));
								if (r==true) {
									
									if(text.indexOf("hcm") > -1)
										{
											var test = text.match(/.*hci([0-9]+).*/);
											var crefheadofacrefmod=$("#hci"+test[1]).html();
											var mclass=$("#txt"+id).attr('class');
											var modefierhead=$("#hc"+mclass).html();
											
											//alert(text+"   vandna   "+master_id+ "\n\n test"+modefierhead+" ====  "+mclass+" ---> "+crefheadofacrefmod);
											$.ajax({
												 type: "POST",
												 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action_delete_link_crefmod", 
												 data: {textbox: master_id+'$'+id+'$'+text+'$'+modefierhead+'$'+crefheadofacrefmod},
												 dataType: "text",  
												 cache:false,
												 success: 
													  function(data){
														//alert(data);  //as a debugging message.
													  }
												});// you have missed this bracket
												$( "#"+id ).remove();
										
										
											
											//$( "#"+id ).remove();
										}
									else
										{
											//alert(master_id+'$'+id+'$'+mtext0+'$%$'+mtext);
											$.ajax({
												 type: "POST",
												 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action_delete_link", 
												 data: {textbox: master_id+'$'+id+'$'+mtext0+'$%$'+mtext},
												 dataType: "text",  
												 cache:false,
												 success: 
													  function(data){
														//alert(data);  //as a debugging message.
													  }
												});// you have missed this bracket
												$( "#"+id ).remove();
										
										}		
								}
							}
							else
							{
								$( "#"+id ).remove();
							}
							
		}));		
		
		
		
		
		$(document).on('click',".btn",(function() {
						var id = this.id;
						selectedtext=GetSelectedText();
						//function for new chain add
						if(id.indexOf("chainadd") > -1)
							{
								if((selectedtext)!="")
								{
									id=id.replace("chainadd", "");
									a="<span id='i"+imax+"'><p id='txti"+imax+"'>"+selectedtext+"</p><button class='headb' id='hi"+imax+"'>H</button> <button class='modb' id='mi"+imax+"'>M</button> <button class='delb' id='di"+imax+"'>D</button> <a class='dell' id='ai"+imax+"'>delete</a></br></br></span>";
									$("#intxt"+id).append(a);
									
									selectedtext=selectedtext.replace(/\s+/g, ' ');
									if(selectedtext.split("/").length-1 == 1)
									{
										
										
											var idi = 'i'+imax;
											//id=id.replace("h", "");
											var master_id='intxt'+id;
											text=$("#txt"+idi).html();
											if(text.indexOf('color="red"') > -1)
											{
												alert("Have you gone mad!! multiple head ?");
											}
											else
											{
												c="<font id='hc"+idi+"' color='red' >"+selectedtext+"</font>";
												f=text.replace(selectedtext, c);
												$.ajax({
													 type: "POST",
													 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action", 
													 data: {textbox: master_id+'$'+idi+'$'+text+'$'+selectedtext},
													 dataType: "text",  
													 cache:false,
													 success: 
														  function(data){
															//alert(data+"test");  //as a debugging message.
														  }
													  });// you have missed this bracket
													$("#txt"+idi).replaceWith("<p id='txt"+idi+"'>"+f+"</p>");
												 //return false;
											}
									
										imax=imax+1;
									}
									else
									{
									imax=imax+1;
									}
								}
								else
								{
									alert("please select text first");
								}
							}
							
						//for chain head selection 
						else if(id.indexOf("makechainheadt") > -1)
							{
									var pid=id;
									id=id.replace("makechainheadt", "");
									var val = [];
									var val_text = [];
									var childcount=0;
									var previous="";
									var chainsend1="";
									var chainsend2="";
									var chainsend3="";
									var sid="";
									var checcked=false;
									$('input[name=t'+id+']:checkbox:checked').each(function(i){
										val[i] = $(this).val();
										sid=$(this).attr('id');
										sid=sid.replace("rad", "");
										text=$("#txt"+sid).html();
										val_text[i]=text;
										//alert(text);
									});
									if(val_text.length==1)
									{
										$("#intxtt"+id).children().each(function(i)
										{
											//alert(text+"dda");
											if(childcount!=0)
											{
												//alert(text+"dasdasdasdas");
												var sid1=$(this).attr('id');
												text2=$("#M"+sid1).html();
												var row_txt=$("#txt"+sid1).html();
												row_txt=row_txt.split(">").join("> ");
												row_txt=row_txt.split("<").join(" <");
												var res = row_txt.split(" ");
												var arrayLength = res.length;
												var f_text="";
												for (var i1 = 0; i1 < arrayLength; i1++) {
													if(res[i1].indexOf("/") > -1)
														f_text=f_text +" " +res[i1];
												}
												f_text=f_text.split("</font>").join("");
												if (text2=="Select Type")
												{
													alert(" please select type of "+f_text);
													checcked=false;
												}
												else if(text2!='undefined')
												{
													chainsend1=chainsend1+previous+"%$%";
													chainsend2=chainsend2+$("#hc"+sid1).html()+"%$%";
													chainsend3=chainsend3+text2+"%$%";
													checcked=true;
												}
												previous=sid1;
											}
											else
											{
												var sid2=$(this).attr('id');
												previous=sid2;
												checcked=true;
											}
											childcount++;
										});
										
										
										//alert(chainsend1+"\n"+chainsend2+"\n"+chainsend3);
										//alert(id+"\n"+sid+" test \n"+$("#hc"+sid).html());								
										
										if(checcked)
										{
											pid_text=$("#"+pid+"A").html();
											if(pid_text.indexOf("<font color=") > -1)
											{
												//do nothing 
											}
											else
											{
											pid_text="<span id='"+pid+"A'><font color='green'>"+pid_text+"</font>";
											$("#"+pid+"A").replaceWith(pid_text);
											}
											//alert($("#hc"+sid).html());
											
											$.ajax({
												 type: "POST",
												 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/post_action_save_chain", 
												 data: {chainsend1 : chainsend1,chainsend2 : chainsend2,chainsend3 : chainsend3,chainheadchainid:id,chainheadcid:sid,chainheadon:$("#hc"+sid).html()},
												 dataType: "text",  
												 cache:false,
												 success: 
													  function(data){
														//alert(data);  //as a debugging message.
													  }
												});// you have missed this bracket
										}
										
										
										
										
										
									}
									else
									{
										alert("please select only one entity as head of chain");
									}
									
									
									//var d=$('input[name=t'+id+']:checkbox:checked');
									//var sid=d.attr('id');
									//sid=sid.replace("rad", "");
									//text=$("#txt"+sid).html();
									//alert(text);
									//alert($("#"+d.attr('id').upper()).html());
									//var text    = $('label[for=t'+id+']').text();
									//alert(text);
									//var val= $('input[type="redut"'+id+']:checked').val();
									//alert(val);
									//jQuery("input:radio[name=myradiobutton]:checked").val();
							}	
							
							
					
		//});
		}));
		
		
		
		//click to add modifier 	  
		$(document).on('click',".modb",(function() {
						    var id = this.id;
							var master_id = $(this).parent().parent().attr('id'); 	
							id=id.replace("m", "");
							text=$("#txt"+id).html();
							if(text.indexOf("hci") > -1)
							{
								var test1 = text.match(/hci([0-9]+)/);
								text=text.replace("hci"+test1[1],"mhci"+test1[1]);
								selectedtext=GetSelectedText();
								if((selectedtext)!="")
								{
									var r=confirm("sure are you this as modifier ?   "+selectedtext);
									if (r==true) 
									{
										//alert(id+"\n"+text+"  \n "+text.replace('<font id="mhc'+id+'" color="red">','').replace('</font>',''));
										a="<span id='i"+imax+"'><p id='txti"+imax+"'>"+selectedtext+"<font size='1' ><b> "+text.replace('mhci','hci')+" </b></font></p><button class='headb' id='hi"+imax+"'>H</button> <button class='modb' id='mi"+imax+"'>M</button> <button class='delb' id='di"+imax+"'>D</button> <a class='dell' id='ai"+imax+"'>delete</a></br></br></span>";
										//a="<span id='i"+imax+"'><p id='txti"+imax+"'>"+selectedtext+"<font size='1' ><b> "+text.replace('<font id="mhc'+id+'" color="red">','').replace('</font>','')+" </b></font></p><button class='headb' id='hi"+imax+"'>H</button> <button class='modb' id='mi"+imax+"'>M</button> <button class='delb' id='di"+imax+"'>D</button> <a class='dell' id='ai"+imax+"'>delete</a></br></br></span>";
										$("#"+master_id).append(a);
										imax=imax+1;
									}
								}
								else
								{
									alert("please select text first");
								}
							}
							else
							{
								alert("first seclect head of coreference entity");
							}
		}));
					   
		//client side code for delete particulur text in selected entity.
		$(document).on('click',".delb",(function() {
							var id = this.id;
							id=id.replace("d", "");
							text=$("#txt"+id).html();
							selectedtext=GetSelectedText();
							if((selectedtext)!="")
							{
								if(text.indexOf("color=") > -1)
								{
									alert("please use delete link for this action");
								}
								else
								{
									var r=confirm("sure are you want to delete this entity?   "+selectedtext);
									if (r==true) 
									{
										text1=text.replace(selectedtext, "");
										$("#txt"+id).replaceWith("<p id='txt"+id+"'>"+text1+"</p>");
									}
								}
							}
							else
							{
								alert("please select text first");
							}
		}));
		//function for chain select change
		$(document).on('click',".chain_select",(function() {
							var id = this.id;
							//alert(id);
							id=id.replace("chain_select", "");
							//alert(id);
							text=$(this).html();
							text1=$("#M"+id).html();
							$("#M"+id).replaceWith("<span id='M"+id+"'>"+text+"</span>");
							//alert(text);
							//alert(text1);
		}));	
		//for saving the file
		$(document).on('click',"#b5",(function() {
		//alert('for save file');
		var fcheck=false;
		for (var ii = 1; ii < tmax; ii++) { 
			$("#intxtt"+ii).children().each(function(i)
			{
				var sid1=$(this).attr('id');
				text2=$("#txt"+sid1).html();
				text2=text2.split("&nbsp;").join(" ");
				if ( typeof(text2) !== "undefined" && text2 !== null )
					{
						if(text2.indexOf('<font size="1"><b>') > -1)
						{
						
							if(text2.indexOf('hcm') > -1)
							{
							}
							else
							{
								if(text2.indexOf('color="red"') > -1)
								{
								}
								else
								{
									var row_txt=text2.split(">").join("> ");
									row_txt=row_txt.split("<").join(" <");
									var res = row_txt.split(" ");
									var arrayLength = res.length;
									var f_text="";
									for (var i1 = 0; i1 < arrayLength; i1++) {
										if(res[i1].indexOf("/") > -1)
										f_text=f_text +" " +res[i1];
										}
									f_text=f_text.split("</font>").join("").split("</b>").join("");
									alert("please select head of "+f_text);
									fcheck=true;
								}
							}
						}
						else
						{
								if(text2.indexOf('color="red"') > -1)
								{
								}
								else
								{
									var row_txt=text2.split(">").join("> ");
									row_txt=row_txt.split("<").join(" <");
									var res = row_txt.split(" ");
									var arrayLength = res.length;
									var f_text="";
									for (var i1 = 0; i1 < arrayLength; i1++) {
										if(res[i1].indexOf("/") > -1)
										f_text=f_text +" " +res[i1];
										}
									f_text=f_text.split("</font>").join("").split("</b>").join("");
									alert("please select head of "+f_text);
									fcheck=true;
								}
							
						}
					}
			});
						var textchain=$("#makechainheadt"+ii+"A").html();
						if ( typeof(textchain) !== "undefined" && textchain !== null )
						{
							if(textchain.indexOf('color="green"') > -1)
							{
							}
							else
							{
								alert("please select Sel./Rep. head of t"+ii+" chain");
								fcheck=true;
							}
						}
			
		}
		if(!fcheck)
		{
		
											$.ajax({
											 type: "POST",
											 url: "http://10.3.1.91/coreference/preeti/index.php/" + "pages/savefilefinal", 
											 data: {textbox: ""},
											 dataType: "text",  
											 cache:false,
											 success: 
												  function(data){
													alert(data);  //as a debugging message.
													//eraseCookie(filename);
													//eraseCookie(filename1);
												  }
											  });// you have missed this bracket
			alert("all clear");
		}
		
		
		}));	
		function keepcount() {
			
		}
		function eraseCookie(name) {
			createCookie(name,"",-1);
		}
		</script>
		
			
			
			</div><!--/row-->
		</ul>
		</div>
	

		
		
        </div><!--/span-->
      </div><!--/row-->
	<div id="content"></div>
      <hr>



      <footer>
	  {test}
        <p>&copy; FiboCity 2014</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

  </body>
</html>

