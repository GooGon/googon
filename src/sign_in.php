<?php
#Library
require '../config/define.php';
require '../config/mainboard.php';

#Pagination Name
$page_no = "002";
$page_name = "sign_in";
?>

<html>
    <head>
        <!-- Web Title-->
        <title>Sign In | GooGon Testing Website</title>

        <!-- Style - General (css) -->
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/sign_in.css">
    </head>

    <body>  
        <div class="login_box">
            <p class="login_txt">Login Page</p>
        
            <form>
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username / Email" required="true">
        
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password">
                       
                <input type="submit" class="login_btn" value="Sign In">
                <a href='<?php echo URL; ?>index.php'><input type="button" class="back_btn" value="Back"></a>
            </form>
        </div>
    </body>
</html>