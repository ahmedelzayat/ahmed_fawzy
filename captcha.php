<?php
include("config.php");
mysql_query("SET NAMES utf8;"); // «··€… «·⁄—»Ì…
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellpadding="0" bgcolor="#ffffff" class="main_border">
  <tr>
    <td><img src="images/483263415-56a289905f9b58b7d0cbe601.jpg" width="1026" height="293" /></td>
  </tr>
  <tr>
    <td><table width="1026" border="0" align="right">
      <tr>
        <td width="765" align="right"> <?php
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
				?></td>
        <td width="200" align="right" valign="top">
        <p align="center" class="title">navigation</p>
        <div id="coolmenu" align="right">
        <a href="index.php"> «·—∆Ì”… </a>
        </div>
         <div id="coolmenu" align="right">
        <a href="articles.php"> œ—Ê” ÕÊ· «·«‰ —‰  </a>
        </div>
        </div>
         <div id="coolmenu" align="right">
        <a href="lessons.php"> œ—Ê” ÕÊ· ·€«  «·»—„Ã… </a>
        
        </div>
        <form>
        <input type="text" name="name" value="" placeholder="name" />
        <input type="text" name="email" value="" placeholder="email" /><br />
  <textarea name="information"placeholder="comment"></textarea>
   <!»œ«Ì… ﬂÊœ ﬂ«»‘ «  -->
 <script type="text/javascript"><!--
    hcaptcha_options = {language: 'ar', key: '761992f3525f6248cbda0da87175a4bc', background: '#ffffff', border: '#c5dbec'};
//--></script>
<script type="text/javascript" src="https://captcha.hsoub.com/hcaptcha.js"></script>
 <!-- ‰Â«Ì… ﬂÊœ ﬂ«» ‘« --> 
<input type="submit"name="submit"value="submit"/>
        </form>

        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">copy right @2017_ahmedfawzy</td>
  </tr>
</table>
</body>
</html>