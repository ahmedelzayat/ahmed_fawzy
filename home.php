<?php
include("config.php");
mysql_query("SET NAMES utf8;"); // اللغة العربية
if($_SERVER['REQUEST_METHOD']=='post'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  $submit = $_POST['submit'];
  // array of errors
  $formErrors = array();
  if(strlen($name <= 5)){
	$formErrors[]='name must bo larger then 5 character';
	
	  }
	
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 275px;
	top: 54px;
	width: 131px;
	height: 211px;
	z-index: 1;
	background-color: #FFF;
	background-image: url(images/483263415-56a289905f9b58b7d0cbe601.jpg);
}
</style>
</head>

<body>

<div>
  <div id="main">
    <div id="hader">Content for  id "hader" Goes Here</div>
    <div id="menu"><a href="home.php">home</a> </div>
    <div id="bady">
    <div id="body_r">
    <div class="errors">
    <?php
	if (isset($formErrors)){
    foreach($formErrors as $errors ){
		echo $errors.'<br>';
		}
		}
	?>
    </div>
  
     
    <br /><form action="<?php echo $_SERVER['PHP_SELF'] ?>
" method="post">
        <input type="text" name="name" value="" placeholder="name" />
        <input type="text" name="email" value="" placeholder="email" /><br />
  <textarea name="comment"placeholder="comment" cols="" rows="5"></textarea>
   <!-- بداية كود كابشتا حسوب -->
 <script type="text/javascript"><!--
    hcaptcha_options = {language: 'ar', key: '761992f3525f6248cbda0da87175a4bc', background: '#ffffff', border: '#c5dbec',};
//--></script>
<script type="text/javascript" src="https://captcha.hsoub.com/hcaptcha.js"></script>
 <!-- نهاية كود كابتشا حسوب --> 
<input type="submit"name="submit"value="submit"/>
        </form>
    </div>
      <div id="bady_l">
     
        <?php
			   $q=" select * from settings ";
			   $r=mysql_query($q);
			   while ($cat=mysql_fetch_array($r))
			   { 
			   ?>
          <li>
			   
                <?php echo "$cat[text]"?>
              
                <td width="47"></a> 
        </li>
                 <?php
			   }
				?>
        
        
      </div>
    </div>
    <div id="footer">Content for  id "footer" Goes Here</div>
  </div>
</div>
</body>
</html>