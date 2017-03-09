<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form actuon=""enctype="" method="post">
            <fieldset>
                <legend>login information</legend>
            <input type="text"name="username"placeholder="enter username"maxlength="15"/>
            <input type="password"name="password"placeholder="enter password"minlength="10"maxlength="20"/><br>
            </fieldset>
            <textarea name="information"placeholder="enter information"></textarea><br>
            <select name="select">
             <option value="2006"/>2006
             <option value="2005"/>2005
             <option value="2004"/>2004
             <option value="2003"/>2003
            </select>
            <br>
            <input type="radio" name="rd1" value="1"/> radio button
            <input type="radio" name="rd1" value="81"/> radio button
            <br>
            <input type="checkbox" name="ch" value="1"/> checkbox1
            <input type="checkbox" name="ch" value="0"/> checkbox1
            <br>
            <input type="file"name="fille"/>
            <br>
            <input type="submit"name="submit"value="submit"/>
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
