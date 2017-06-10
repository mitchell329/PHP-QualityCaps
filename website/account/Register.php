<?php
/**
 * Created by PhpStorm.
 * User: Marshal
 * Date: 2016/11/10
 * Time: 11:06
 */
?>
<form id="frmMain" class="form-horizontal" method="post" action="Account.php?page=Profile">
    <div class="registration-head">Registration</div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtUsername">User Name:</label>
        <div class="col-md-3">
            <input type="text" class="form-control" id="txtUsername" placeholder="Enter your username" />
        </div>
        <div class="col-md-4 validation-alert" id="lblUsernameAlert">&lowast;</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtPassword">Password:</label>
        <div class="col-md-3">
            <input type="password" class="form-control" id="txtPassword" placeholder="Enter your password" />
        </div>
        <div class="col-md-4 validation-alert" id="lblPwdAlert">&lowast;</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtPswConfirm">Confirm Password:</label>
        <div class="col-md-3">
            <input type="password" class="form-control" id="txtPswConfirm" placeholder="Enter your password again" />
        </div>
        <div class="col-md-4 validation-alert" id="lblPwdConfirmAlert">&lowast;</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtPhoneHome">Home Phone:</label>
        <div class="col-md-3">
            <input type="text" class="form-control" id="txtPhoneHome" placeholder="Enter phone number of your home" />
        </div>
        <div class="col-md-4 validation-alert" id="lblPhoneHomeAlert"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtPhoneWork">Work Phone:</label>
        <div class="col-md-3">
            <input type="text" class="form-control" id="txtPhoneWork" placeholder="Enter phone number of your work place" />
        </div>
        <div class="col-md-4 validation-alert" id="lblPhoneWorkAlert"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtMobile">Mobile:</label>
        <div class="col-md-3">
            <input type="text" class="form-control" id="txtMobile" placeholder="Enter your mobile number" />
        </div>
        <div class="col-md-4 validation-alert" id="lblMobileAlert"></div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtEmail">Email:</label>
        <div class="col-md-3">
            <input type="email" class="form-control" id="txtEmail" placeholder="Enter your email address" />
        </div>
        <div class="col-md-4 validation-alert" id="lblEmailAlert">&lowast;</div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-offset-3 col-md-2" for="txtAddress">Address:</label>
        <div class="col-md-3">
            <textarea class="form-control" id="txtAddress" rows="3" placeholder="Enter your address"></textarea>
        </div>
    </div>
    <div class="form-group" id="lblFailureAlert">
    </div>
    <div class="form-group">
        <div class="col-md-offset-3 col-md-6 sign-up-button">
            <input type="button" id="btnRegister" class="btn btn-primary btn-lg" value="Sign Up" onclick="btnRegister_OnClick()" />
        </div>
    </div>
</form>
