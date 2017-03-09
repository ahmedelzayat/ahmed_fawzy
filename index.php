<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>gmail</title>
    </head>
    <body><center>
        <form method="post"action="">
        <label>userame</label>
        <input type='username'name='username'><br>
         <label>password</label>
        <input type='pass'name='password'><br>
         <label>repeat password</label>
        <input type='pass'name='repeat password'><br>
        
         <label>email</label>
         <input type='text'name='email'><br>
         <label>sex</label>
         <select>
              <option>male</option>
               <option>female</option>
         </select><br>
         <input type='submit'name='ok'value='send'>
         </center>
        </form>
         <?php
         mysql_connect("127..0.0.1","root","");
         mysql_select_db("ahmed");
         if (isset($_POST[ok])){
         $username=$_POST['username'];
         $password=$_POST['password'];
         $rapeatpassword=$_POST['rapeatpassword'];
         $sex=$_POST['sex'];
         $email=$_POST['email'];
         mysql_quary("insert into ahmed value('','$username','$password',' $rapeatpassword','$sex','$email')");
         
                 
         }
             
     
         
                 
         
         
        // put your code here
        ?>
    </body>
</html>
