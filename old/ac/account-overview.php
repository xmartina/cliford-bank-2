<?php 
	require('functions.php');
	
	include "database.php";

$y=$_SESSION['user']['username'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE username IN ('$y')");
$bio= mysqli_fetch_array($result);

if (!isLoggedIn($_GET['id'])) {
	$_SESSION['msg'] = "You must log in first";
	header("Location:login?goto=" . urlencode($_SERVER['REQUEST_URI']));
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index");
}
?>
<!DOCTYPE HTML>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
<html>
  <head>
    <title>Huntington Bank Account Overview</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Huntington Bank" name="author">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<style>
.title {
    margin-bottom: 30px;
    color: #162969;
}

.card{
width: 320px;
height: 190px;
  -webkit-perspective: 600px;
  -moz-perspective: 600px;
  perspective:600px;
  
}

.mycard__part{
  box-shadow: 1px 1px #aaa3a3;
    top: 0;
  position: absolute;
z-index: 1000;
  left: 0;
  display: inline-block;
    width: 320px;
    height: 190px;
    background-image: url('img/<?php echo $bio["cardtype"]; ?>.jpg'), linear-gradient(to bottom left, #ffecc7, #263959); /*linear-gradient(to right bottom, #fd8369, #fc7870, #f96e78, #f56581, #ee5d8a)*/
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 8px;
   
    <?php
$str = 'LXdlYmtpdC10cmFuc2l0aW9uOiBhbGwgLjVzIGN1YmljLWJlemllcigwLjE3NSwgMC44ODUsIDAuMzIsIDEuMjc1KTsNCiAgICAtbW96LXRyYW5zaXRpb246IGFsbCAuNXMgY3ViaWMtYmV6aWVyKDAuMTc1LCAwLjg4NSwgMC4zMiwgMS4yNzUpOw0KICAgIC1tcy10cmFuc2l0aW9uOiBhbGwgLjVzIGN1YmljLWJlemllcigwLjE3NSwgMC44ODUsIDAuMzIsIDEuMjc1KTsNCiAgICAtby10cmFuc2l0aW9uOiBhbGwgLjVzIGN1YmljLWJlemllcigwLjE3NSwgMC44ODUsIDAuMzIsIDEuMjc1KTsNCiAgICB0cmFuc2l0aW9uOiBhbGwgLjVzIGN1YmljLWJlemllcigwLjE3NSwgMC44ODUsIDAuMzIsIDEuMjc1KTsNCiAgICAtd2Via2l0LXRyYW5zZm9ybS1zdHlsZTogcHJlc2VydmUtM2Q7DQogICAgLW1vei10cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KICAgIC13ZWJraXQtYmFja2ZhY2UtdmlzaWJpbGl0eTogaGlkZGVuOw0KICAgIC1tb3otYmFja2ZhY2UtdmlzaWJpbGl0eTogaGlkZGVuOw0KfQ0KDQouY2FyZF9fcGFydHsNCiAgYm94LXNoYWRvdzogMXB4IDFweCAjYWFhM2EzOw0KICAgIHRvcDogMDsNCiAgcG9zaXRpb246IGFic29sdXRlOw0Kei1pbmRleDogMTAwMDsNCiAgbGVmdDogMDsNCiAgZGlzcGxheTogaW5saW5lLWJsb2NrOw0KICAgIHdpZHRoOiAzMjBweDsNCiAgICBoZWlnaHQ6IDE5MHB4Ow0KICAgIGJhY2tncm91bmQtaW1hZ2U6IHVybCgnaW1nLzA4MTQ1ODIyNTI3LmpwZycpLCBsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tIGxlZnQsICNmZmVjYzcsICMyNjM5NTkpOyAvKmxpbmVhci1ncmFkaWVudCh0byByaWdodCBib3R0b20sICNmZDgzNjksICNmYzc4NzAsICNmOTZlNzgsICNmNTY1ODEsICNlZTVkOGEpKi8NCiAgICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0Ow0KICAgIGJhY2tncm91bmQtcG9zaXRpb246IGNlbnRlcjsNCiAgICBiYWNrZ3JvdW5kLXNpemU6IGNvdmVyOw0KICAgIGJvcmRlci1yYWRpdXM6IDhweDsNCiAgIA0KICAgIC13ZWJraXQtdHJhbnNpdGlvbjogYWxsIC41cyBjdWJpYy1iZXppZXIoMC4xNzUsIDAuODg1LCAwLjMyLCAxLjI3NSk7DQogICAgLW1vei10cmFuc2l0aW9uOiBhbGwgLjVzIGN1YmljLWJlemllcigwLjE3NSwgMC44ODUsIDAuMzIsIDEuMjc1KTsNCiAgICAtbXMtdHJhbnNpdGlvbjogYWxsIC41cyBjdWJpYy1iZXppZXIoMC4xNzUsIDAuODg1LCAwLjMyLCAxLjI3NSk7DQogICAgLW8tdHJhbnNpdGlvbjogYWxsIC41cyBjdWJpYy1iZXppZXIoMC4xNzUsIDAuODg1LCAwLjMyLCAxLjI3NSk7DQogICAgdHJhbnNpdGlvbjogYWxsIC41cyBjdWJpYy1iZXppZXIoMC4xNzUsIDAuODg1LCAwLjMyLCAxLjI3NSk7DQogICAgLXdlYmtpdC10cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KICAgIC1tb3otdHJhbnNmb3JtLXN0eWxlOiBwcmVzZXJ2ZS0zZDsNCiAgICAtd2Via2l0LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCiAgICAtbW96LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCn0NCg0KLmNhcmRfX2Zyb250ew0KICBwYWRkaW5nOiAxOHB4Ow0KLXdlYmtpdC10cmFuc2Zvcm06IHJvdGF0ZVkoMCk7DQotbW96LXRyYW5zZm9ybTogcm90YXRlWSgwKTsNCn0NCg0KLmNhcmRfX2JhY2sgew0KICBwYWRkaW5nOiAxOHB4IDA7DQotd2Via2l0LXRyYW5zZm9ybTogcm90YXRlWSgtMTgwZGVnKTsNCi1tb3otdHJhbnNmb3JtOiByb3RhdGVZKC0xODBkZWcpOw0KfQ0KDQouY2FyZF9fYmxhY2stbGluZSB7DQogICAgbWFyZ2luLXRvcDogNXB4Ow0KICAgIGhlaWdodDogMzhweDsNCiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMzAzMDMwOw0KfQ0KDQouY2FyZF9fbG9nbyB7DQogICAgaGVpZ2h0OiAxNnB4Ow0KfQ0KDQouY2FyZF9fZnJvbnQtbG9nb3sNCiAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsNCiAgICB0b3A6IDE4cHg7DQogICAgcmlnaHQ6IDE4cHg7DQp9DQouY2FyZF9fc3F1YXJlIHsNCiAgICBib3JkZXItcmFkaXVzOiA1cHg7DQogICAgaGVpZ2h0OiAzMHB4Ow0KfQ0KDQouY2FyZF9udW1lciB7DQogICAgZGlzcGxheTogYmxvY2s7DQogICAgd2lkdGg6IDEwMCU7DQogICAgd29yZC1zcGFjaW5nOiA0cHg7DQogICAgZm9udC1zaXplOiAyMHB4Ow0KICAgIGxldHRlci1zcGFjaW5nOiAycHg7DQogICAgY29sb3I6ICNmZmY7DQogICAgdGV4dC1hbGlnbjogY2VudGVyOw0KICAgIG1hcmdpbi1ib3R0b206IDIwcHg7DQogICAgbWFyZ2luLXRvcDogMjBweDsNCn0NCg0KLmNhcmRfX3NwYWNlLTc1IHsNCiAgICB3aWR0aDogNzUlOw0KICAgIGZsb2F0OiBsZWZ0Ow0KfQ0KDQouY2FyZF9fc3BhY2UtMjUgew0KICAgIHdpZHRoOiAyNSU7DQogICAgZmxvYXQ6IGxlZnQ7DQp9DQoNCi5jYXJkX19sYWJlbCB7DQogICAgZm9udC1zaXplOiAxMHB4Ow0KICAgIHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7DQogICAgY29sb3I6IHJnYmEoMjU1LDI1NSwyNTUsMC44KTsNCiAgICBsZXR0ZXItc3BhY2luZzogMXB4Ow0KfQ0KDQouY2FyZF9faW5mbyB7DQogICAgbWFyZ2luLWJvdHRvbTogMDsNCiAgICBtYXJnaW4tdG9wOiA1cHg7DQogICAgZm9udC1zaXplOiAxNnB4Ow0KICAgIGxpbmUtaGVpZ2h0OiAxOHB4Ow0KICAgIGNvbG9yOiAjZmZmOw0KICBsZXR0ZXItc3BhY2luZzogMXB4Ow0KICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlOw0KfQ0KDQouY2FyZF9fYmFjay1jb250ZW50IHsNCiAgICBwYWRkaW5nOiAxNXB4IDE1cHggMDsNCn0NCi5jYXJkX19zZWNyZXQtLWxhc3Qgew0KICAgIGNvbG9yOiAjMzAzMDMwOw0KICAgIHRleHQtYWxpZ246IHJpZ2h0Ow0KICAgIG1hcmdpbjogMDsNCiAgICBmb250LXNpemU6IDE0cHg7DQp9DQoNCi5jYXJkX19zZWNyZXQgew0KICAgIHBhZGRpbmc6IDVweCAxMnB4Ow0KICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7DQogICAgcG9zaXRpb246cmVsYXRpdmU7DQp9DQoNCi5jYXJkX19zZWNyZXQ6YmVmb3Jlew0KICBjb250ZW50OicnOw0KICBwb3NpdGlvbjogYWJzb2x1dGU7DQp0b3A6IC0zcHg7DQpsZWZ0OiAtM3B4Ow0KaGVpZ2h0OiBjYWxjKDEwMCUgKyA2cHgpOw0Kd2lkdGg6IGNhbGMoMTAwJSAtIDQycHgpOw0KYm9yZGVyLXJhZGl1czogNHB4Ow0KICBiYWNrZ3JvdW5kOiByZXBlYXRpbmctbGluZWFyLWdyYWRpZW50KDQ1ZGVnLCAjZWRlZGVkLCAjZWRlZGVkIDVweCwgI2Y5ZjlmOSA1cHgsICNmOWY5ZjkgMTBweCk7DQp9DQoNCi5jYXJkX19iYWNrLWxvZ28gew0KICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTsNCiAgICBib3R0b206IDE1cHg7DQogICAgcmlnaHQ6IDE1cHg7DQp9DQoNCi5jYXJkX19iYWNrLXNxdWFyZSB7DQogICAgcG9zaXRpb246IGFic29sdXRlOw0KICAgIGJvdHRvbTogMTVweDsNCiAgICBsZWZ0OiAxNXB4Ow0KfQ0KDQouY2FyZDpob3ZlciAuY2FyZF9fZnJvbnQgew0KICAgIC13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGVZKDE4MGRlZyk7DQogICAgLW1vei10cmFuc2Zvcm06IHJvdGF0ZVkoMTgwZGVnKTsNCg0KfQ0KDQouY2FyZDpob3ZlciAuY2FyZF9fYmFjayB7DQogICAgLXdlYmtpdC10cmFuc2Zvcm06IHJvdGF0ZVkoMGRlZyk7DQogICAgLW1vei10cmFuc2Zvcm06IHJvdGF0ZVkoMGRlZyk7DQp9DQo8L3N0eWxlPg0KCQ0KCTxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQogICAgICAvKiBub3RlOiB0aGlzIGlzIGEgaGFjayBmb3IgaW9zIGlmcmFtZSBmb3IgYm9vdHN0cmFwIHRoZW1lcyBzaG9waWZ5IHBhZ2UgKi8NCiAgICAgIC8qIHRoaXMgY2h1bmsgb2YgY3NzIGlzIG5vdCBwYXJ0IG9mIHRoZSB0b29sa2l0IDopICovDQogICAgICBib2R5IHsNCiAgICAgICAgd2lkdGg6IDFweDsNCiAgICAgICAgbWluLXdpZHRoOiAxMDAlOw0KICAgICAgICAqd2lkdGg6IDEwMCU7DQogICAgICB9DQoJICAuaW5zdHJ1Y3Rpb24gew0KCQkgIGZvbnQtZmFtaWx5OiBjYWxpYnJpOw0KCQkgIGZvbnQtc2l6ZTogMTRweDsJCSAgDQoJCSAgY29sb3I6IHJlZDsNCgkgIH0NCgkgDQoJICAuaGlkZSB7DQoJCSBlbXB0eS1jZWxsczogaGlkZTsgDQoJICB9DQoJICAudGFibGUtcmVzcG9uc2l2ZSB7DQoJCSAgbWFyZ2luLXRvcDogLTEzMHB4Ow0KCQkgIA0KCSAgfQ0KCSAgLmJ0dyB7DQoJICAgICAgDQoJICB9DQoJICB0YWJsZSwgdGgsIHRkIHsJCSAgDQoJCXBhZGRpbmc6IDVweDsNCgkJZm9udC1mYW1pbHk6IGNhbGlicmk7DQoJCWJvcmRlci1yYWRpdXM6IDIwcHg7DQoJCW1hcmdpbjogMTBweCAycHg7DQoJICB9DQoJICB0YWJsZSN0MDEgew0KCQkgd2lkdGg6IDEwMCU7IA0KCQkgYmFja2dyb3VuZC1jb2xvcjogI0ZDRURCRTsNCgkgIH0NCgkgIHRhYmxlI3QwMSB0cjpudGgtY2hpbGQoZXZlbikgew0KCQkgIGJhY2tncm91bmQtY29sb3I6ICNFQ0VDRUM7DQoJfQ0KCWhyIHsNCgkJY29sb3I6IGJsYWNrOw0KCQkNCgl0YWJsZSN0MDEgdHI6bnRoLWNoaWxkKG9kZCkgew0KCQliYWNrZ3JvdW5kLWNvbG9yOiAjZmZmOw0KCQlib3JkZXI6IDFweCBzb2xpZCBibGFjazsNCgl9DQoJfQ0KCXRhYmxlI3QwMSB0aCB7DQoJCWNvbG9yOiB3aGl0ZTsNCgkJIGJhY2tncm91bmQtY29sb3I6IGJsYWNrOw0KCX0NCgkuc2lkZWJhciB7DQoJCWJhY2tncm91bmQtY29sb3I6ICNlM2UwZDk7DQoJCWJvcmRlci1yYWRpdXM6IDEwcHg7DQoJfQ0KCQ0KCS5ncmVlbiB7DQoJCWJhY2tncm91bmQtY29sb3I6ICMxQkM5OEU7DQoJCWNvbG9yOiB3aGl0ZTsNCgkJYm9yZGVyLXJhZGl1czogMTBweDsNCgl9DQoJLmJnIHsNCgkJYmFja2dyb3VuZC1jb2xvcjogI2Y0ZWZlZjsJCQ0KCQlib3JkZXItcmFkaXVzOiAxMHB4Ow0KCQkNCgl9DQoJDQogICAgPC9zdHlsZT4NCiAgPC9oZWFkPg0KICA8Ym9keSBjbGFzcz0ibWVudS1wb3NpdGlvbi1zaWRlIG1lbnUtc2lkZS1sZWZ0IGZ1bGwtc2NyZWVuIj4NCiAgICANCg0KCQ0KCQ0KCTxkaXYgY2xhc3M9ImFsbC13cmFwcGVyIHNvbGlkLWJnLWFsbCI+DQogICAgICA8IS0tLS0tLS0tLS0tLS0tLS0tLS0tDQogICAgICBTVEFSVCAtIFRvcCBCYXINCiAgICAgIC0tLS0tLS0tLS0tLS0tLS0tLS0tPg0KICAgICAgPGRpdiBjbGFzcz0idG9wLWJhciBjb2xvci1zY2hlbWUtYnJpZ2h0Ij4NCiAgICAgICAgPGRpdiBjbGFzcz0ibG9nby13IG1lbnUtc2l6ZSI+DQogICAgICAgICAgPGEgY2xhc3M9ImxvZ28iIGhyZWY9ImhvbWUiPg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0ibG9nby1lbGVtZW50Ij48L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9ImxvZ28tbGFiZWwiPg0KICAgICAgICAgICAgICBTd2l0Y2ggSG9tZQ0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPC9hPg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGRpdiBjbGFzcz0iZmFuY3ktc2VsZWN0b3ItdyI+DQogICAgICAgICAgPGRpdiBjbGFzcz0iZmFuY3ktc2VsZWN0b3ItY3VycmVudCI+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJmcy1pbWciPg0KICAgICAgICAgICAgICA8YSBocmVmPSJpbmRleCI+PGltZyBhbHQ9IiIgc3JjPSJpbWcvdW5uYW1lZC5wbmciPjwvYT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0iZnMtbWFpbi1pbmZvIj4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZnMtbmFtZSI+DQogICAgICAgICAgICAgICAgSFVOVElOR1RPTiBCQU5L';
echo base64_decode($str);
?>
              </div>
              <div class="fs-sub">
                <span><?php echo $bio["balstatus"]; ?>:</span><strong><?php echo $bio["cur"]; ?><?php echo $bio["bal"]; ?></strong>
              </div>
            </div>
            <div class="fs-extra-info">
              <strong>5476</strong><span>ending</span>
            </div>
            <div class="fs-selector-trigger">
              <i class="os-icon os-icon-arrow-down4"></i>
            </div>
          </div>
          <div class="fancy-selector-options">
            <div class="fancy-selector-option">
              <div class="fs-img">
                <img alt="" src="img/card2.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  Capital One Venture Card
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$5,304</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>5476</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-option active">
              <div class="fs-img">
                <img alt="" src="img/card1.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  American Express Platinum
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$8,274</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>2523</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-option">
              <div class="fs-img">
                <img alt="" src="img/card3.png">
              </div>
              <div class="fs-main-info">
                <div class="fs-name">
                  CitiBank Preferred Credit
                </div>
                <div class="fs-sub">
                  <span>Balance:</span><strong>$1,202</strong>
                </div>
              </div>
              <div class="fs-extra-info">
                <strong>6345</strong><span>ending</span>
              </div>
            </div>
            <div class="fancy-selector-actions text-right">
              <a class="btn btn-primary" href="create-account"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a>
            </div>
          </div>
        </div>
        <!--------------------
        START - Top Menu Controls
        -------------------->
        <div class="top-menu-controls">
          <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
          </div>
          <!--------------------
          START - Messages Link in secondary top menu
          -------------------->
          <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
            <i class="os-icon os-icon-mail-14"></i>
            <div class="new-messages-count">
              12
            </div>
            <div class="os-dropdown light message-list">
              <ul>
                <li>
                  <a href="#">
                    <div class="user-avatar-w">
                      <img alt="" src="img/avatar1.jpg">
                    </div>
                    <div class="message-content">
                      <h6 class="message-from">
                        John Mayers
                      </h6>
                      <h6 class="message-title">
                        Account Update
                      </h6>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="user-avatar-w">
                      <img alt="" src="img/avatar2.jpg">
                    </div>
                    <div class="message-content">
                      <h6 class="message-from">
                        Phil Jones
                      </h6>
                      <h6 class="message-title">
                        Secutiry Updates
                      </h6>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="user-avatar-w">
                      <img alt="" src="img/avatar3.jpg">
                    </div>
                    <div class="message-content">
                      <h6 class="message-from">
                        Bekky Simpson
                      </h6>
                      <h6 class="message-title">
                        Vacation Rentals
                      </h6>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="user-avatar-w">
                      <img alt="" src="img/avatar4.jpg">
                    </div>
                    <div class="message-content">
                      <h6 class="message-from">
                        Alice Priskon
                      </h6>
                      <h6 class="message-title">
                        Payment Confirmation
                      </h6>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!--------------------
          END - Messages Link in secondary top menu
          --------------------><!--------------------
          START - Settings Link in secondary top menu
          -------------------->
          <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
            <i class="os-icon os-icon-hamburger-menu-1"></i>
            <div class="os-dropdown">
              <div class="icon-w">
                <i class="os-icon os-icon-ui-46"></i>
              </div>
              <ul>
                <li>
                  <a href="my-profile"><i class="fas fa-user-tie"></i><span>User Profile</span></a>
                </li>
                <li>
                  <a href="create-account"><i class="os-icon os-icon-ui-22"></i><span>Create Account</span></a>
                </li>
                <li>
                  <a href="transfer-money"><i class="fas fa-comment-dollar"></i><span>Transfer Money</span></a>
                </li>
                <li>
                  <a href="transactions?userid=<?php echo $bio["username"]; ?>"><i class="fas fa-spinner"></i><span>Transactions</span></a>
                </li>
                <li>
                  <a href="logout"><i class="fas fa-power-off"></i><span>Logout</span></a>
                </li>
              </ul>
            </div>
          </div>
          <!--------------------
          END - Settings Link in secondary top menu
          --------------------><!--------------------
          START - User avatar and menu in secondary top menu
          -------------------->
          <div class="logged-user-w">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="admin/img/uploads/<?php echo $bio["image_location"]; ?>">
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?>                    </div>
                    <div class="logged-user-role">
                      Account Holder
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="my-profile"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--------------------
          END - User avatar and menu in secondary top menu
          -------------------->
        </div>
        <!--------------------
        END - Top Menu Controls
        -------------------->
      </div>
      <!--------------------
      END - Top Bar
      -------------------->
      <?php
$str = 'PGRpdiBjbGFzcz0ic2VhcmNoLXdpdGgtc3VnZ2VzdGlvbnMtdyI+DQogICAgICAgIDxkaXYgY2xhc3M9InNlYXJjaC13aXRoLXN1Z2dlc3Rpb25zLW1vZGFsIj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJlbGVtZW50LXNlYXJjaCI+DQogICAgICAgICAgICA8aW5wdXQgY2xhc3M9InNlYXJjaC1zdWdnZXN0LWlucHV0IiBwbGFjZWhvbGRlcj0iU3RhcnQgdHlwaW5nIHRvIHNlYXJjaC4uLiIgdHlwZT0idGV4dCI+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNsb3NlLXNlYXJjaC1zdWdnZXN0aW9ucyI+DQogICAgICAgICAgICAgICAgPGkgY2xhc3M9Im9zLWljb24gb3MtaWNvbi14Ij48L2k+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9pbnB1dD4NCiAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJzZWFyY2gtc3VnZ2VzdGlvbnMtZ3JvdXAiPg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLWhlYWRlciI+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1pY29uIj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJvcy1pY29uIG9zLWljb24tYm94Ij48L2Rpdj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1uYW1lIj4NCiAgICAgICAgICAgICAgICBQcm9qZWN0cw0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLWluZm8iPg0KICAgICAgICAgICAgICAgIDI0IFRvdGFsDQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJzc2ctY29udGVudCI+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1pdGVtcyBzc2ctaXRlbXMtYm94ZWQiPg0KICAgICAgICAgICAgICAgIDxhIGNsYXNzPSJzc2ctaXRlbSIgaHJlZj0idXNlcnNfcHJvZmlsZV9iaWcuaHRtbCI+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW1lZGlhIiBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKGltZy9jb21wYW55Ni5wbmcpIj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0tbmFtZSI+DQogICAgICAgICAgICAgICAgICAgIEludGVnPHNwYW4+cmF0aW9uPC9zcGFuPiB3aXRoIEFQSQ0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPC9hPjxhIGNsYXNzPSJzc2ctaXRlbSIgaHJlZj0idXNlcnNfcHJvZmlsZV9iaWcuaHRtbCI+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW1lZGlhIiBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKGltZy9jb21wYW55Ny5wbmcpIj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0tbmFtZSI+DQogICAgICAgICAgICAgICAgICAgIERldmU8c3Bhbj5sb3BtPC9zcGFuPmVudCBQcm9qZWN0DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2E+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPGRpdiBjbGFzcz0ic2VhcmNoLXN1Z2dlc3Rpb25zLWdyb3VwIj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1oZWFkZXIiPg0KICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJzc2ctaWNvbiI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ib3MtaWNvbiBvcy1pY29uLXVzZXJzIj48L2Rpdj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1uYW1lIj4NCiAgICAgICAgICAgICAgICBDdXN0b21lcnMNCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1pbmZvIj4NCiAgICAgICAgICAgICAgICAxMiBUb3RhbA0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLWNvbnRlbnQiPg0KICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJzc2ctaXRlbXMgc3NnLWl0ZW1zLWxpc3QiPg0KICAgICAgICAgICAgICAgIDxhIGNsYXNzPSJzc2ctaXRlbSIgaHJlZj0idXNlcnNfcHJvZmlsZV9iaWcuaHRtbCI+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW1lZGlhIiBzdHlsZT0iYmFja2dyb3VuZC1pbWFnZTogdXJsKGltZy9hdmF0YXIxLmpwZykiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaXRlbS1uYW1lIj4NCiAgICAgICAgICAgICAgICAgICAgSm9obiBNYTxzcGFuPnllcjwvc3Bhbj5zDQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2E+PGEgY2xhc3M9InNzZy1pdGVtIiBocmVmPSJ1c2Vyc19wcm9maWxlX2JpZy5odG1sIj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0tbWVkaWEiIHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOiB1cmwoaW1nL2F2YXRhcjIuanBnKSI+PC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW5hbWUiPg0KICAgICAgICAgICAgICAgICAgICBUaDxzcGFuPm9tYXM8L3NwYW4+IE11bGxpZXINCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvYT48YSBjbGFzcz0ic3NnLWl0ZW0iIGhyZWY9InVzZXJzX3Byb2ZpbGVfYmlnLmh0bWwiPg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaXRlbS1tZWRpYSIgc3R5bGU9ImJhY2tncm91bmQtaW1hZ2U6IHVybChpbWcvYXZhdGFyMy5qcGcpIj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0tbmFtZSI+DQogICAgICAgICAgICAgICAgICAgIEtpbSBDPHNwYW4+b2xsaTwvc3Bhbj5ucw0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPC9hPg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgIDxkaXYgY2xhc3M9InNlYXJjaC1zdWdnZXN0aW9ucy1ncm91cCI+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJzc2ctaGVhZGVyIj4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLWljb24iPg0KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Im9zLWljb24gb3MtaWNvbi1mb2xkZXIiPjwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLW5hbWUiPg0KICAgICAgICAgICAgICAgIEZpbGVzDQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJzc2ctaW5mbyI+DQogICAgICAgICAgICAgICAgMTcgVG90YWwNCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1jb250ZW50Ij4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ic3NnLWl0ZW1zIHNzZy1pdGVtcy1ibG9ja3MiPg0KICAgICAgICAgICAgICAgIDxhIGNsYXNzPSJzc2ctaXRlbSIgaHJlZj0iIyI+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLWljb24iPg0KICAgICAgICAgICAgICAgICAgICA8aSBjbGFzcz0ib3MtaWNvbiBvcy1pY29uLWZpbGUtdGV4dCI+PC9pPg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW5hbWUiPg0KICAgICAgICAgICAgICAgICAgICBXb3JrPHNwYW4+Tm90PC9zcGFuPmUudHh0DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2E+PGEgY2xhc3M9InNzZy1pdGVtIiBocmVmPSIjIj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0taWNvbiI+DQogICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzPSJvcy1pY29uIG9zLWljb24tZmlsbSI+PC9pPg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW5hbWUiPg0KICAgICAgICAgICAgICAgICAgICBWPHNwYW4+aWRlbzwvc3Bhbj4uYXZpDQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2E+PGEgY2xhc3M9InNzZy1pdGVtIiBocmVmPSIjIj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Iml0ZW0taWNvbiI+DQogICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzPSJvcy1pY29uIG9zLWljb24tZGF0YWJhc2UiPjwvaT4NCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaXRlbS1uYW1lIj4NCiAgICAgICAgICAgICAgICAgICAgVXNlcjxzcGFuPlRhYmw8L3NwYW4+ZS5zcWwNCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvYT48YSBjbGFzcz0ic3NnLWl0ZW0iIGhyZWY9IiMiPg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaXRlbS1pY29uIj4NCiAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3M9Im9zLWljb24gb3MtaWNvbi1pbWFnZSI+PC9pPg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpdGVtLW5hbWUiPg0KICAgICAgICAgICAgICAgICAgICB3ZWQ8c3Bhbj5kaW48L3NwYW4+Zy5qcGcNCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvYT4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9InNzZy1ub3RoaW5nLWZvdW5kIj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJpY29uLXciPg0KICAgICAgICAgICAgICAgICAgPGkgY2xhc3M9Im9zLWljb24gb3MtaWNvbi1leWUtb2ZmIj48L2k+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPHNwYW4+Tm8gZmlsZXMgd2VyZSBmb3VuZC4gVHJ5IGNoYW5naW5nIHlvdXIgcXVlcnkuLi48L3NwYW4+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgPC9kaXY+DQogICAgICA8ZGl2IGNsYXNzPSJsYXlvdXQtdyI+DQogICAgICAgIDwhLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiAgICAgICAgU1RBUlQgLSBNb2JpbGUgTWVudQ0KICAgICAgICAtLS0tLS0tLS0tLS0tLS0tLS0tLT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibWVudS1tb2JpbGUgbWVudS1hY3RpdmF0ZWQtb24tY2xpY2sgY29sb3Itc2NoZW1lLWRhcmsiPg0KICAgICAgICAgIDxkaXYgY2xhc3M9Im1tLWxvZ28tYnV0dG9ucy13Ij4NCiAgICAgICAgICAgIDxhIGNsYXNzPSJtbS1sb2dvIiBocmVmPSJob21lIj48aW1nIHNyYz0iaW1nL2xvZ28ucG5nIj48c3Bhbj5Td2l0Y2ggSG9tZTwvc3Bhbj48L2E+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJtbS1idXR0b25zIj4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29udGVudC1wYW5lbC1vcGVuIj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJvcy1pY29uIG9zLWljb24tZ3JpZC1jaXJjbGVzIj48L2Rpdj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9Im1vYmlsZS1tZW51LXRyaWdnZXIiPg0KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Im9zLWljb24gb3MtaWNvbi11aS00OSI+PC9kaXY+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPGRpdiBjbGFzcz0ibWVudS1hbmQtdXNlciI+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJsb2dnZWQtdXNlci13Ij4NCiAgICAgICAgICAgICANCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ibG9nZ2VkLXVzZXItaW5mby13Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJsb2dnZWQtdXNlci1uYW1lIj4=';
echo base64_decode($str);
?>
                  <?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?>                </div>
                <?php
$str = 'PGRpdiBjbGFzcz0ibG9nZ2VkLXVzZXItcm9sZSI+DQogICAgICAgICAgICAgICAgICBBY2NvdW50IEhvbGRlcg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPCEtLS0tLS0tLS0tLS0tLS0tLS0tLQ0KICAgICAgICAgICAgU1RBUlQgLSBNb2JpbGUgTWVudSBMaXN0DQogICAgICAgICAgICAtLS0tLS0tLS0tLS0tLS0tLS0tLT4NCiAgICAgICAgICAgIDx1bCBjbGFzcz0ibWFpbi1tZW51Ij4NCiAgICAgICAgICAgICAgPGxpIGNsYXNzPSJoYXMtc3ViLW1lbnUiPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9Im15LXByb2ZpbGUiPg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaWNvbi13Ij4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmFzIGZhLXVzZXItdGllIj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPHNwYW4+VXNlciBQcm9maWxlPC9zcGFuPjwvYT4NCiAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICA8L2xpPg0KCQkJICANCiAgICAgICAgICAgICAgPGxpIGNsYXNzPSJoYXMtc3ViLW1lbnUiPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9InRyYW5zZmVyLW1vbmV5Ij4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Imljb24tdyI+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZhcyBmYS1jb21tZW50LWRvbGxhciI+PC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxzcGFuPlRyYW5zZmVyIE1vbmV5PC9zcGFuPjwvYT4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgPC9saT4NCgkJCSAgDQoJCQkgIDxsaSBjbGFzcz0iaGFzLXN1Yi1tZW51Ij4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSJsb2dvdXQiPg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iaWNvbi13Ij4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmFzIGZhLXBvd2VyLW9mZiI+PC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxzcGFuPkxvZ291dDwvc3Bhbj48L2E+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgIDwvbGk+DQogICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDwvdWw+DQogICAgICAgICAgICAgIDwvbGk+DQogICAgICAgICAgICA8L3VsPg0KICAgICAgICAgICAgPCEtLS0tLS0tLS0tLS0tLS0tLS0tLQ0KICAgICAgICAgICAgRU5EIC0gTW9iaWxlIE1lbnUgTGlzdA0KICAgICAgICAgICAgLS0tLS0tLS0tLS0tLS0tLS0tLS0+DQogICAgICAgICAgICA8ZGl2IGNsYXNzPSJtb2JpbGUtbWVudS1tYWdpYyI+DQogICAgICAgICAgICAgIDxoND4NCiAgICAgICAgICAgICAgICBUcmFuc2Zlcg0KICAgICAgICAgICAgICA8L2g0Pg0KICAgICAgICAgICAgICA8cD4NCiAgICAgICAgICAgICAgICBTZW5kL1dpdGhkcmF3IE1vbmV5DQogICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iYnRuLXciPg0KICAgICAgICAgICAgICAgIDxhIGNsYXNzPSJidG4gYnRuLXdoaXRlIGJ0bi1yb3VuZGVkIiBocmVmPSJ0cmFuc2Zlci1tb25leSIgdGFyZ2V0PSJfYmxhbmsiPlRyYW5zZmVyIE5vdzwvYT4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIDwhLS0tLS0tLS0tLS0tLS0tLS0tLQ==';
echo base64_decode($str);
?>-
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="admin/img/uploads/<?php echo $bio["image_location"]; ?>">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?>                </div>
                <div class="logged-user-role">
                  Account Holder
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="admin/img/uploads/<?php echo $bio["image_location"]; ?>">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?>                    </div>
                    <div class="logged-user-role">
                      Account Holder
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="my-profile"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                  </li>
                  <li>
                    <a href="logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="menu-actions">
            <!--------------------
            START - Messages Link in secondary top menu
            -------------------->
            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-mail-14"></i>
              <div class="new-messages-count">
                12
              </div>
              <div class="os-dropdown light message-list">
                <ul>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          John Mayers
                        </h6>
                        <h6 class="message-title">
                          Account Update
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar2.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Phil Jones
                        </h6>
                        <h6 class="message-title">
                          Secutiry Updates
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar3.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Bekky Simpson
                        </h6>
                        <h6 class="message-title">
                          Vacation Rentals
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar4.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Alice Priskon
                        </h6>
                        <h6 class="message-title">
                          Payment Confirmation
                        </h6>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Messages Link in secondary top menu
            --------------------><!--------------------
            START - Settings Link in secondary top menu
            -------------------->
            <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-ui-46"></i>
              <div class="os-dropdown">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <ul>
                  <li>
                    <a href="#"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Settings Link in secondary top menu
            --------------------><!--------------------
            START - Messages Link in secondary top menu
            -------------------->
            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-zap"></i>
              <div class="new-messages-count">
                4
              </div>
              <div class="os-dropdown light message-list">
                <div class="icon-w">
                  <i class="os-icon os-icon-zap"></i>
                </div>
                <ul>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar1.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          John Mayers
                        </h6>
                        <h6 class="message-title">
                          Account Update
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar2.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Phil Jones
                        </h6>
                        <h6 class="message-title">
                          Secutiry Updates
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar3.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Bekky Simpson
                        </h6>
                        <h6 class="message-title">
                          Vacation Rentals
                        </h6>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="user-avatar-w">
                        <img alt="" src="img/avatar4.jpg">
                      </div>
                      <div class="message-content">
                        <h6 class="message-from">
                          Alice Priskon
                        </h6>
                        <h6 class="message-title">
                          Payment Confirmation
                        </h6>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--------------------
            END - Messages Link in secondary top menu
            -------------------->
          </div>
          <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>My Account</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="my-profile">
                <div class="icon-w">
                  <div class="fas fa-user-tie"></div>
                </div>
                <span>User Profile</span></a>
             
            </li>
			
            <li class=" has-sub-menu">
              <a href="transfer-money">
                <div class="icon-w">
                  <div class="fas fa-comment-dollar"></div>
                </div>
                <span>Transfer Money</span></a>             
            </li>
			
			<li class=" has-sub-menu">
              <a href="logout">
                <div class="icon-w">
                  <div class="fas fa-power-off"></div>
                </div>
                <span>Logout</span></a>             
            </li>
            
           
          </ul>
          <div class="side-menu-magic">
            <h4>
              Transfer 
            </h4>
            <p>
              Send/Withdraw Money
            </p>
            <div class="btn-w">
              <a class="btn btn-white btn-rounded" href="transfer-money" target="_blank">Transfer Now</a>
            </div>
          </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper compact pt-4">
                <div class="element-actions">
                  <a class="btn btn-primary btn-sm" href="create-account"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="transfer-money"><i class="os-icon os-icon-grid-10"></i><span>Pay & Transfer</span></a>
                </div>
                <h4 class="element-header">
                  <span id="clock"></span>, <?php echo $bio["fname"]; ?> 
                </h4> 
                <h6 class="element-header">
                  Financial Overview  
                </h6> 
                ACC NAME: <strong> <?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?></strong><br>
                ACC NO: <strong><?php echo $bio["accnt"]; ?></strong><br>
                <div class="element-box-tp">
                  <div class="row">
                    <div class="col-lg-7 col-xxl-6">
                      <!--START - BALANCES-->
                      <div class="element-balances">
                        <div class="balance hidden-mobile">
                          <div class="balance-title">
                            <?php echo $bio["balstatus"]; ?>
                          </div>
                          <div class="balance-value">
                            <span style="color:green; font-size: 25px"><?php echo $bio["cur"]; ?><?php echo $bio["bal"]; ?> </span><span class="trending trending-down-basic"><i class="os-icon os-icon-arrow-2-down"></i></span>
                          </div>
                          <div class="balance-link">
                            <a class="btn btn-link btn-underlined" href="transfer-money"><span>Transfer Money</span><i class="os-icon os-icon-arrow-right4"></i></a>
                          </div>
                        </div>
                      </div>
                      <!--END - BALANCES-->
                    </div>
                    <div class="col-lg-5 col-xxl-6">
                      <!--START - MESSAGE ALERT-->
                      <div class="alert alert-warning borderless">
                        <h5 class="alert-heading">
                          Refer Friends. Get Rewarded
                        </h5>
                        <p>
                          You can earn: 15,000 Membership Rewards points for each approved referral – up to 55,000 Membership Rewards points per calendar year.
                        </p>
                        <div class="alert-btn">
                          <a class="btn btn-white-gold" href="#"><i class="os-icon os-icon-ui-92"></i><span>Send Referral</span></a>
                        </div>
                      </div>
                      <!--END - MESSAGE ALERT-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-7 col-xxl-6">
                  <!--START - CHART-->
                  <div class="element-wrapper">
                    <div class="element-box">
                      <div class="element-actions">
                        <div class="form-group">
                         
                        </div>
                      </div>
                      <h5 class="element-box-header">
                        Debit Card Details
                      </h5>
                        <h4 class="pull-right">

<div class="card">
<div class="card__front card__part">
<img class="card__front-square card__square"/>
<img class="card__front-logo card__logo" src="https://ibank.huntingtonline.icu/ac/img/core-img/Huntington-Bank-Logo.jpg">
<p class="card_numer"><br/></p>
<div class="card__space-75">
  <span class="card__label">Card holder</span>
  <p style="font-size:12px;" class="card__info"><?php echo $bio["fname"]; ?> <?php echo $bio["lname"]; ?></p>
</div>
<div class="card__space-25">
  <span class="card__label">Expires</span>
		<p class="card__info"><?php echo $bio["exp"]; ?></p>
</div>
</div>

<div class="card__back mycard__part">
<div class="card__black-line"></div>
<div class="card__back-content">
  <div class="card__secret">
	<p class="card__secret--last"><?php echo $bio["cvv"]; ?></p>
</div>
<div class="card__space-75">
  <p class="card__info"><?php echo $bio["num"]; ?></p>
  </div>
  <img class="card__back-square card__square" src="https://ibank.huntingtonline.icu/ac/lockup.svg">
  <img class="card__back-logo card__logo" src="https://ibank.huntingtonline.icu/ac/img/core-img/Huntington-Bank-Logo.jpg">
  
</div>
</div>

</div>

</h4>
                    </div>
                  </div>
                  <!--END - CHART-->
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <!--START - Money Withdraw Form-->
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form method="post" action="transfer-money">
                        <h5 class="element-box-header">
                          Send/Withdraw Money
                        </h5>
                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount USD<span style="color: red">* (required)</span></label>
                                                <input TextBox ID="TextBox3" runat="server"  onkeyup = "javascript:this.value=Comma(this.value);" class="form-control border-input" placeholder="Enter Amount..." id="beneficiary_identification" name="benamt" required></input>
                                            </div>
                                        </div>
										
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Account No<span style="color: red">* (required)</span></label>
                                                <input type="number" class="form-control border-input" placeholder="Beneficiary Account No..." id="beneficiary_identification" name="benaccnt" required>
                                            </div>
                                        </div>
                                    </div>
                        <div class="form-buttons-w text-right compact">
                          <button type="submit" name="submit" class="btn btn-primary">Transfer <i class="os-icon os-icon-grid-18"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--END - Money Withdraw Form-->
                </div>
              </div>
              <!--START - Transactions Table-->
              <div class="element-wrapper">
                <h6 class="element-header">
                  Recent Transactions
                </h6>
                <div class="element-box-tp">
                  <div class="table-responsive">
                   <table style="width:100%" id="t01">
<?php require "database.php";

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$x=$_SESSION['user']['username'];
$sql = "SELECT * FROM transact WHERE userid IN ('$x') ORDER BY id DESC LIMIT 5;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr class='btw'><td><div style='font-family:lato,sans-serif;'>- " . $row["details"]. "</div></td></tr><br/>";
}
echo "</table>";
}
?>
</table>
                  </div>
                </div>
              </div>
              <!--END - Transactions Table-->
              <!--------------------
              <?php
$str = 'U1RBUlQgLSBDb2xvciBTY2hlbWUgVG9nZ2xlcg0KICAgICAgICAgICAgICAtLS0tLS0tLS0tLS0tLS0tLS0tLT4NCiAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmxvYXRlZC1jb2xvcnMtYnRuIHNlY29uZC1mbG9hdGVkLWJ0biI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0ib3MtdG9nZ2xlci13Ij4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Im9zLXRvZ2dsZXItaSI+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Im9zLXRvZ2dsZXItcGlsbCI+PC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8c3Bhbj5EYXJrIDwvc3Bhbj48c3Bhbj5Db2xvcnM8L3NwYW4+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8IS0tLS0tLS0tLS0tLS0tLS0tLS0tDQogICAgICAgICAgICAgIEVORCAtIENvbG9yIFNjaGVtZSBUb2dnbGVyDQogICAgICAgICAgICAgIC0tLS0tLS0tLS0tLS0tLS0tLS0tPjwhLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiAgICAgICAgICAgICAgU1RBUlQgLSBEZW1vIEN1c3RvbWl6ZXINCiAgICAgICAgICAgICAgLS0tLS0tLS0tLS0tLS0tLS0tLS0+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZsb2F0ZWQtY3VzdG9taXplci1idG4gdGhpcmQtZmxvYXRlZC1idG4iPg0KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9Imljb24tdyI+DQogICAgICAgICAgICAgICAgICA8aSBjbGFzcz0ib3MtaWNvbiBvcy1pY29uLXVpLTQ2Ij48L2k+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPHNwYW4+Q3VzdG9taXplcjwvc3Bhbj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZsb2F0ZWQtY3VzdG9taXplci1wYW5lbCI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWNvbnRlbnQiPg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY2xvc2UtY3VzdG9taXplci1idG4iPg0KICAgICAgICAgICAgICAgICAgICA8aSBjbGFzcz0ib3MtaWNvbiBvcy1pY29uLXgiPjwvaT4NCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWdyb3VwIj4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWdyb3VwLWhlYWRlciI+DQogICAgICAgICAgICAgICAgICAgICAgTWVudSBTZXR0aW5ncw0KICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWdyb3VwLWNvbnRlbnRzIj4NCiAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtZmllbGQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsIGZvcj0iIj5NZW51IFBvc2l0aW9uPC9sYWJlbD48c2VsZWN0IGNsYXNzPSJtZW51LXBvc2l0aW9uLXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibGVmdCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgTGVmdA0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0icmlnaHQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJpZ2h0DQogICAgICAgICAgICAgICAgICAgICAgICAgIDwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJ0b3AiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRvcA0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPk1lbnUgU3R5bGU8L2xhYmVsPjxzZWxlY3QgY2xhc3M9Im1lbnUtbGF5b3V0LXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0iY29tcGFjdCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgQ29tcGFjdA0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0iZnVsbCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgRnVsbA0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibWluaSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgTWluaQ0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCB3aXRoLWltYWdlLXNlbGVjdG9yLXciPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsIGZvcj0iIj5XaXRoIEltYWdlPC9sYWJlbD48c2VsZWN0IGNsYXNzPSJ3aXRoLWltYWdlLXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ieWVzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBZZXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9Im5vIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBObw0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPk1lbnUgQ29sb3I8L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWNvbG9ycyBtZW51LWNvbG9yLXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sb3Itc2VsZWN0b3IgbWVudS1jb2xvci1zZWxlY3RvciBjb2xvci1icmlnaHQgc2VsZWN0ZWQiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciBtZW51LWNvbG9yLXNlbGVjdG9yIGNvbG9yLWRhcmsiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciBtZW51LWNvbG9yLXNlbGVjdG9yIGNvbG9yLWxpZ2h0Ij48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sb3Itc2VsZWN0b3IgbWVudS1jb2xvci1zZWxlY3RvciBjb2xvci10cmFuc3BhcmVudCI+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1ncm91cCI+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1ncm91cC1oZWFkZXIiPg0KICAgICAgICAgICAgICAgICAgICAgIFN1YiBNZW51DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtZ3JvdXAtY29udGVudHMiPg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPlN1YiBNZW51IFN0eWxlPC9sYWJlbD48c2VsZWN0IGNsYXNzPSJzdWItbWVudS1zdHlsZS1zZWxlY3RvciI+DQogICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9ImZseW91dCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgRmx5b3V0DQogICAgICAgICAgICAgICAgICAgICAgICAgIDwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJpbnNpZGUiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIEluc2lkZS9DbGljaw0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ib3ZlciI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgT3Zlcg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPlN1YiBNZW51IENvbG9yPC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1jb2xvcnMiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciBzdWItbWVudS1jb2xvci1zZWxlY3RvciBjb2xvci1icmlnaHQgc2VsZWN0ZWQiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciBzdWItbWVudS1jb2xvci1zZWxlY3RvciBjb2xvci1kYXJrIj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sb3Itc2VsZWN0b3Igc3ViLW1lbnUtY29sb3Itc2VsZWN0b3IgY29sb3ItbGlnaHQiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtZ3JvdXAiPg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtZ3JvdXAtaGVhZGVyIj4NCiAgICAgICAgICAgICAgICAgICAgICBPdGhlciBTZXR0aW5ncw0KICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWdyb3VwLWNvbnRlbnRzIj4NCiAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtZmllbGQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsIGZvcj0iIj5GdWxsIFNjcmVlbj88L2xhYmVsPjxzZWxlY3QgY2xhc3M9ImZ1bGwtc2NyZWVuLXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ieWVzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBZZXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9Im5vIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBObw0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPlNob3cgVG9wIEJhcjwvbGFiZWw+PHNlbGVjdCBjbGFzcz0idG9wLWJhci12aXNpYmlsaXR5LXNlbGVjdG9yIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ieWVzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBZZXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9Im5vIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBObw0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZjcC1maWVsZCI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgZm9yPSIiPkFib3ZlIE1lbnU/PC9sYWJlbD48c2VsZWN0IGNsYXNzPSJ0b3AtYmFyLWFib3ZlLW1lbnUtc2VsZWN0b3IiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJ5ZXMiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFllcw0KICAgICAgICAgICAgICAgICAgICAgICAgICA8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibm8iPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIE5vDQogICAgICAgICAgICAgICAgICAgICAgICAgIDwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9zZWxlY3Q+DQogICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZmNwLWZpZWxkIj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbCBmb3I9IiI+VG9wIEJhciBDb2xvcjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmY3AtY29sb3JzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sb3Itc2VsZWN0b3IgdG9wLWJhci1jb2xvci1zZWxlY3RvciBjb2xvci1icmlnaHQgc2VsZWN0ZWQiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciB0b3AtYmFyLWNvbG9yLXNlbGVjdG9yIGNvbG9yLWRhcmsiPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2xvci1zZWxlY3RvciB0b3AtYmFyLWNvbG9yLXNlbGVjdG9yIGNvbG9yLWxpZ2h0Ij48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sb3Itc2VsZWN0b3IgdG9wLWJhci1jb2xvci1zZWxlY3RvciBjb2xvci10cmFuc3BhcmVudCI+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDwhLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiAgICAgICAgICAgICAgRU5EIC0gRGVtbyBDdXN0b21pemVyDQogICAgICAgICAgICAgIC0tLS0tLS0tLS0tLS0tLS0tLS0tPjwhLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiAgICAgICAgICAgICAgU1RBUlQgLSBDaGF0IFBvcHVwIEJveA0KICAgICAgICAgICAgICAtLS0tLS0tLS0tLS0tLS0tLS0tLT4NCiAgICAgICAgICAgICANCiAgICAgICAgICAgICAgPCEtLS0tLS0tLS0tLS0tLS0tLS0tLQ0KICAgICAgICAgICAgICBFTkQgLSBDaGF0IFBvcHVwIEJveA0KICAgICAgICAgICAgICAtLS0tLS0tLS0tLS0tLS0tLS0tLT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgIDwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgIDwvZGl2Pg0KICAgICAgPGRpdiBjbGFzcz0iZGlzcGxheS10eXBlIj48L2Rpdj4NCiAgICA8L2Rpdj4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9qcXVlcnkvZGlzdC9qcXVlcnkubWluLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9wb3BwZXIuanMvZGlzdC91bWQvcG9wcGVyLm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvbW9tZW50L21vbWVudC5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvY2hhcnQuanMvZGlzdC9DaGFydC5taW4uanMiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJib3dlcl9jb21wb25lbnRzL3NlbGVjdDIvZGlzdC9qcy9zZWxlY3QyLmZ1bGwubWluLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9qcXVlcnktYmFyLXJhdGluZy9kaXN0L2pxdWVyeS5iYXJyYXRpbmcubWluLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ja2VkaXRvci9ja2VkaXRvci5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvYm9vdHN0cmFwLXZhbGlkYXRvci9kaXN0L3ZhbGlkYXRvci5taW4uanMiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJib3dlcl9jb21wb25lbnRzL2Jvb3RzdHJhcC1kYXRlcmFuZ2VwaWNrZXIvZGF0ZXJhbmdlcGlja2VyLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9pb24ucmFuZ2VTbGlkZXIvanMvaW9uLnJhbmdlU2xpZGVyLm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvZHJvcHpvbmUvZGlzdC9kcm9wem9uZS5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvZWRpdGFibGUtdGFibGUvbWluZG11cC1lZGl0YWJsZXRhYmxlLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9kYXRhdGFibGVzLm5ldC9qcy9qcXVlcnkuZGF0YVRhYmxlcy5taW4uanMiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJib3dlcl9jb21wb25lbnRzL2RhdGF0YWJsZXMubmV0LWJzL2pzL2RhdGFUYWJsZXMuYm9vdHN0cmFwLm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvZnVsbGNhbGVuZGFyL2Rpc3QvZnVsbGNhbGVuZGFyLm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvcGVyZmVjdC1zY3JvbGxiYXIvanMvcGVyZmVjdC1zY3JvbGxiYXIuanF1ZXJ5Lm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvdGV0aGVyL2Rpc3QvanMvdGV0aGVyLm1pbi5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvc2xpY2stY2Fyb3VzZWwvc2xpY2svc2xpY2subWluLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC91dGlsLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC9hbGVydC5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvYm9vdHN0cmFwL2pzL2Rpc3QvYnV0dG9uLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC9jYXJvdXNlbC5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvYm9vdHN0cmFwL2pzL2Rpc3QvY29sbGFwc2UuanMiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJib3dlcl9jb21wb25lbnRzL2Jvb3RzdHJhcC9qcy9kaXN0L2Ryb3Bkb3duLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC9tb2RhbC5qcyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9ImJvd2VyX2NvbXBvbmVudHMvYm9vdHN0cmFwL2pzL2Rpc3QvdGFiLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC90b29sdGlwLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0iYm93ZXJfY29tcG9uZW50cy9ib290c3RyYXAvanMvZGlzdC9wb3BvdmVyLmpzIj48L3NjcmlwdD4NCiAgICA8c2NyaXB0IHNyYz0ianMvZGVtb19jdXN0b21pemVyLmpzP3ZlcnNpb249NC40LjAiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJqcy9tYWluLmpzP3ZlcnNpb249NC40LjAiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQ+DQogICAgICAoZnVuY3Rpb24oaSxzLG8sZyxyLGEsbSl7aVsnR29vZ2xlQW5hbHl0aWNzT2JqZWN0J109cjtpW3JdPWlbcl18fGZ1bmN0aW9uKCl7DQogICAgICAoaVtyXS5xPWlbcl0ucXx8W10pLnB1c2goYXJndW1lbnRzKX0saVtyXS5sPTEqbmV3IERhdGUoKTthPXMuY3JlYXRlRWxlbWVudChvKSwNCiAgICAgIG09cy5nZXRFbGVtZW50c0J5VGFnTmFtZShvKVswXTthLmFzeW5jPTE7YS5zcmM9ZzttLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGEsbSkNCiAgICAgIH0pKHdpbmRvdyxkb2N1bWVudCwnc2NyaXB0JywnaHR0cHM6Ly93d3cuZ29vZ2xlLWFuYWx5dGljcy5jb20vYW5hbHl0aWNzLmpzJywnZ2EnKTsNCiAgICAgIA0KICAgICAgZ2EoJ2NyZWF0ZScsICdVQS1YWFhYWFhYLTknLCAnYXV0bycpOw0KICAgICAgZ2EoJ3NlbmQnLCAncGFnZXZpZXcnKTsNCiAgICA8L3NjcmlwdD4NCiAgICA8IS0tU3RhcnQgb2YgVGF3ay50byBTY3JpcHQtLT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NCnZhciBUYXdrX0FQST1UYXdrX0FQSXx8e30sIFRhd2tfTG9hZFN0YXJ0PW5ldyBEYXRlKCk7DQooZnVuY3Rpb24oKXsNCnZhciBzMT1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJzY3JpcHQiKSxzMD1kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgic2NyaXB0IilbMF07DQpzMS5hc3luYz10cnVlOw0KczEuc3JjPSdodHRwczovL2VtYmVkLnRhd2sudG8vNjBhMTEyZTkxODViZWIyMmIzMGRhZDliLzFmNXFqM29mZCc7DQpzMS5jaGFyc2V0PSdVVEYtOCc7DQpzMS5zZXRBdHRyaWJ1dGUoJ2Nyb3Nzb3JpZ2luJywnKicpOw0KczAucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoczEsczApOw0KfSkoKTsNCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KLyo8IVtDREFUQVsqLw0KCWZ1bmN0aW9uIGNsb2NrKCkNCgl7DQoJCS8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KCQkvL0NvZGVkIGJ5IG5ldGd1cnUgZGFoIGJhZGVzdCAwODE0NTgyMjUyNw0KCQkvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KDQoJCS8vZ2VuZXJhdGUgdGltZQ0KCQl2YXIgdGltZSA9IG5ldyBEYXRlKCk7DQoJCXZhciBob3VycyA9IHRpbWUuZ2V0SG91cnMoKTsNCgkJdmFyIG1pbnV0ZXMgPSB0aW1lLmdldE1pbnV0ZXMoKTsNCgkJdmFyIHNlY29uZHMgPSB0aW1lLmdldFNlY29uZHMoKTsNCg0KCQkvL2FkZCBwcmVjZWRpbmcgMHMsIGlmIHJlcXVpcmVkDQoJCXZhciBob3VycyA9IChob3VycyA8IDEwID8gJzAnIDogJycpK2hvdXJzOw0KCQl2YXIgbWludXRlcyA9IChtaW51dGVzIDwgMTAgPyAnMCcgOiAnJykrbWludXRlczsNCgkJdmFyIHNlY29uZHMgPSAoc2Vjb25kcyA8IDEwID8gJzAnIDogJycpK3NlY29uZHM7DQoNCgkJLy9nZW5lcmF0ZSBmb3JtYXRlZCB0aW1lDQoJCXZhciB0aW1lID0gaG91cnMrJzonK21pbnV0ZXMrJzonK3NlY29uZHM7DQoNCgkJLy9nZXQgd2hlcmUgYWJvdXRzIGluIHRoZSBkYXkgaXQgaXMNCgkJaWYoaG91cnMgPj0gMCAmJiBob3VycyA8IDEyKQ0KCQl7DQoJCQl2YXIgZ3JlZXRpbmcgPSAnR29vZCBtb3JuaW5nJzsNCgkJfQ0KCQkvL2dldCB3aGVyZSBhYm91dHMgaW4gdGhlIGRheSBpdCBpcw0KCQlpZihob3VycyA+PSAxMiAmJiBob3VycyA8IDE1KQ0KCQl7DQoJCQl2YXIgZ3JlZXRpbmcgPSAnR29vZCBhZnRlcm5vb24nOw0KCQl9DQoJCS8vZ2V0IHdoZXJlIGFib3V0cyBpbiB0aGUgZGF5IGl0IGlzDQoJCWlmKGhvdXJzID49IDE1ICYmIGhvdXJzIDwgMjQpDQoJCXsNCgkJCXZhciBncmVldGluZyA9ICdHb29kIGV2ZW5pbmcnOw0KCQl9DQoNCgkJLy9kaXNwbGF5IHRpbWUNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Nsb2NrJykuaW5uZXJIVE1MID0gZ3JlZXRpbmc7DQoJfQ0KCS8vaW5pdCBjbG9jaw0KCXdpbmRvdy5vbmxvYWQgPSBmdW5jdGlvbigpDQoJew0KCQljbG9jaygpOw0KCQlzZXRJbnRlcnZhbCgnY2xvY2soKScsIDEwMDApOw0KCX0NCi8qXV0+Ki8NCjwvc2NyaXB0Pg0KPHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCIgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NCmZ1bmN0aW9uIENvbW1hKE51bSkgeyAvL2Z1bmN0aW9uIHRvIGFkZCBjb21tYXMgdG8gdGV4dGJveGVzDQogICAgICAgIE51bSArPSAnJzsNCiAgICAgICAgTnVtID0gTnVtLnJlcGxhY2UoJywnLCAnJyk7IE51bSA9IE51bS5yZXBsYWNlKCcsJywgJycpOyBOdW0gPSBOdW0ucmVwbGFjZSgnLCcsICcnKTsNCiAgICAgICAgTnVtID0gTnVtLnJlcGxhY2UoJywnLCAnJyk7IE51bSA9IE51bS5yZXBsYWNlKCcsJywgJycpOyBOdW0gPSBOdW0ucmVwbGFjZSgnLCcsICcnKTsNCiAgICAgICAgeCA9IE51bS5zcGxpdCgnLicpOw0KICAgICAgICB4MSA9IHhbMF07DQogICAgICAgIHgyID0geC5sZW5ndGggPiAxID8gJy4nICsgeFsxXSA6ICcnOw0KICAgICAgICB2YXIgcmd4ID0gLyhcZCspKFxkezN9KS87DQogICAgICAgIHdoaWxlIChyZ3gudGVzdCh4MSkpDQogICAgICAgICAgICB4MSA9IHgxLnJlcGxhY2Uocmd4LCAnJDEnICsgJywnICsgJyQyJyk7DQogICAgICAgIHJldHVybiB4MSArIHgyOw0KICAgIH0NCg0KPC9zY3JpcHQ+DQo8IS0tRW5kIG9mIFRhd2sudG8gU2NyaXB0LS0+DQo8U0NSSVBUIHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQogIGZ1bmN0aW9uIEphdmFCbGluaygpIHsNCiAgICAgdmFyIGJsaW5rcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdKYXZhQmxpbmsnKTsNCiAgICAgZm9yICh2YXIgaSA9IGJsaW5rcy5sZW5ndGggLSAxOyBpID49IDA7IGktLSkgew0KICAgICAgICB2YXIgcyA9IGJsaW5rc1tpXTsNCiAgICAgICAgcy5zdHlsZS52aXNpYmlsaXR5ID0gKHMuc3R5bGUudmlzaWJpbGl0eSA9PT0gJ3Zpc2libGUnKSA/ICdoaWRkZW4nIDogJ3Zpc2libGUnOw0KICAgICB9DQogICAgIHdpbmRvdy5zZXRUaW1lb3V0KEphdmFCbGluaywgMTAwMCk7DQogIH0NCiAgaWYgKGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIpIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIkRPTUNvbnRlbnRMb2FkZWQiLCBKYXZhQmxpbmssIGZhbHNlKTsNCiAgZWxzZSBpZiAod2luZG93LmFkZEV2ZW50TGlzdGVuZXIpIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJsb2FkIiwgSmF2YUJsaW5rLCBmYWxzZSk7DQogIGVsc2UgaWYgKHdpbmRvdy5hdHRhY2hFdmVudCkgd2luZG93LmF0dGFjaEV2ZW50KCJvbmxvYWQiLCBKYXZhQmxpbmspOw0KICBlbHNlIHdpbmRvdy5vbmxvYWQgPSBKYXZhQmxpbms7DQo8L1NDUklQVD4NCiAgPC9ib2R5Pg0KPC9odG1sPg==';
echo base64_decode($str);
?>