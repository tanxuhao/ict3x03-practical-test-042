<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ICT3X03 Practical Test</title>
    </head>
    <body>
        
        <?php
        // put your code here
        $password = "";
        ?>
        <div>
            <form action ="next_page.php" method="post">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" 
                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
