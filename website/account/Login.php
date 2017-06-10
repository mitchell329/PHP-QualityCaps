<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 18:47
 */
session_start();

//If the login page is not post back or redirect from other page, clear session variable 'user' to logout.
if (basename($_SERVER['HTTP_REFERER']) != basename($_SERVER['REQUEST_URI']) && !isset($_GET['from']))
{
    if (isset($_SESSION['user']))
    {
        unset($_SESSION['user']);
        echo '<script>alert("You have logged out from Quality Caps.");</script>';
        //header("Refresh:0");
    }
    if (isset($_SESSION['role']))
    {
        unset($_SESSION['role']);
    }
}
else //if the login page is post back or redirect from other page, redirect to the right page after login.
{
    if (isset($_SESSION['user']))
    {
        if (isset($_GET['from']))
        {
            $backLink = "http://$_SERVER[HTTP_HOST]".urldecode($_GET['from']);
            header("Location: $backLink");
        }
        else
        {
            header("Location: Account.php?page=Profile");
        }
    }
}
?>
<form id="frmMain" class="form-horizontal" method="post" action="">
    <div class="login-panel">
        <div class="form-group">
            <label class="control-label col-md-offset-3 col-md-2" for="txtUsername">User Name:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="txtUsername" placeholder="Enter your username" />
            </div>
            <div class="col-md-4 validation-alert" id="lblUsernameAlert"></div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-offset-3 col-md-2" for="txtPassword">Password:</label>
            <div class="col-md-3">
                <input type="password" class="form-control" id="txtPassword" placeholder="Enter your password" />
            </div>
            <div class="col-md-4 validation-alert" id="lblPwdAlert"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-6 sign-up-button"  id="loginFailAlert"></div>
        </div>
        <div class="form-group">
            <div class="sign-up-button">
                <input type="button" id="btnLogin" class="btn btn-primary btn-lg" value="Login" onclick="btnLogin_OnClick()" />
                <br /><br />
                <a href="Account.php?page=Register" class="register-link">Don't have an account</a>
            </div>
        </div>
    </div>
</form>
