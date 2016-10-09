<?php

if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: login");
}
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<?php error_reporting(E_ERROR | E_PARSE); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
        <h1>Welcome <font color="red"><?php echo $username ?></font><a href="http://10.3.1.91/coreference/newvandan/index.php/user_authentication/logout" class="navbar-link"><font color="red">     Logout</font></a>
</h1>
	
	<div id="body">
	<h6><pre>click on the below files to view/annotate coreference </pre></h6>
        <link href="http://10.3.1.91/coreference/assets/css/bootstrap.css" rel="stylesheet">

        <?php echo "August";?>
		<?php

			if (isset($module_files_august) && !empty($module_files_august))
			{
				$out = '<ul class="nav nav-list">';
				foreach ($module_files_august as $module_file)
				{
					if (!is_array($module_file))
                                        {
                                                $module_file_N = explode("//", $module_file);
						$out .= '<li><button class="btn" id="'.$module_file.'">' . $module_file_N[1] . '</a></button></br>';
					}
					else
					{
					}
				}
				$out .= '</ul>';
				echo '<div id="mmov" class="well sidebar-nav">'.$out.'</div>';
			}

		?>

        <?php echo "September"; ?>
		<?php

			if (isset($module_files_september) && !empty($module_files_september))
			{
				$out = '<ul class="nav nav-list">';
				foreach ($module_files_september as $module_file)
				{
					if (!is_array($module_file))
					{
                                                $module_file_N = explode("//", $module_file);
						$out .= '<li><button class="btn" id="'.$module_file.'">' . $module_file_N[1] . '</a></button></br>';
					}
					else
					{
					}
				}
				$out .= '</ul>';
				echo '<div id="mmov" class="well sidebar-nav">'.$out.'</div>';
			}

		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	
	<script src="http://10.3.1.91/coreference/assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + "; " + expires;
		}
		function GetNum(str) {
			var s = str.split('');
			var i;
			var send="";
			for (i = 0; i < s.length; i++) {
				if (!isNaN(s[i])) {
					send=send+s[i];
				}
			}
			return send;
		}
		$(document).ready(function(){
						$(document).on('click',".btn",(function() {
                                                    var id = this.id;
                                                    setCookie("filename", GetNum(id)+ "<?php echo $username; ?>", 365);
							setCookie("filename1", id.replace("//","/"), 365);
							setCookie("filename1_file", id, 365);
							window.location.href = "http://10.3.1.91/coreference/newvandan/index.php/user_authentication/inp";
						}));
					});
		</script>
</div>

</body>
</html>
