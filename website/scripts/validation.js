/**
 * Check whether a textbox is empty
 * @param controlName
 * @returns {boolean}
 * @constructor
 */
function IsEmpty(controlName) {
    if (controlName.value == null || controlName.value == "") {
        return true;
    }
    else {
        return false;
    }
}

/**
 * Check whether a string is a number
 * @param str
 * @returns {boolean}
 * @constructor
 */
function IsNumber(str) {
    var regEx = /^[0-9]*$/;
    return regEx.test(str);
}

/**
 * Check whether a string follows email format
 * @param str
 * @returns {boolean}
 * @constructor
 */
function IsEmail(str) {
    var regEx = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    return regEx.test(str);
}

/**
 * Check whether username is empty. If empty, pop an alert.
 * @param ctrlUsername
 * @param type
 * @returns {boolean}
 * @constructor
 */
function ValidateUsername(ctrlUsername, type) {
    if (ctrlUsername.value == null || ctrlUsername.value == "") {
        //if (flag == "user") {
        //    document.getElementById("ContentPlaceHolder_lblUsernameAlert").innerHTML = "&lowast; Username cannot be empty.";
        //}
        //if (flag == "supplier") {
        //    document.getElementById("ContentPlaceHolder_lblSupplierNameAlert").innerHTML = "&lowast; Supplier name cannot be empty.";
        //}
        if (type == "user") {
            document.getElementById("lblUsernameAlert").innerHTML = "&lowast; " + type + " name cannot be empty.";
        }
        if (type == "supplier") {
            document.getElementById("lblSupplierNameAlert").innerHTML = "&lowast; " + type + " name cannot be empty.";
        }
        ctrlUsername.style = "background-color: #ffff99";
        ctrlUsername.focus();
        return false;
    }
    else {
        ctrlUsername.style = "background-color: none";
        if (type == "user") {
            document.getElementById("lblUsernameAlert").innerHTML = "&lowast;";
        }
        else {
            document.getElementById("lblSupplierNameAlert").innerHTML = "&lowast;";
        }
        return true;
    }
}

/**
 * Check whether password is empty. If empty, pop an alert.
 * @param ctrlPassword
 * @returns {boolean}
 * @constructor
 */
function ValidatePassword(ctrlPassword) {
    if (ctrlPassword.value == null || ctrlPassword.value == "") {
        document.getElementById("lblPwdAlert").innerHTML = "&lowast; Password cannot be empty.";
        ctrlPassword.style = "background-color: #ffff99";
        ctrlPassword.focus();
        return false;
    }
    else {
        ctrlPassword.style = "background-color: none";
        document.getElementById("lblPwdAlert").innerHTML = "&lowast;";
        return true;
    }
}

/**
 * Check whether confirm password matches password. If no, pop an alert.
 * @param ctrlPswConfirm
 * @param ctrlPassword
 * @returns {boolean}
 * @constructor
 */
function ValidateConfirmPassword(ctrlPswConfirm, ctrlPassword) {
    if (ctrlPswConfirm.value != ctrlPassword.value) {
        document.getElementById("lblPwdConfirmAlert").innerHTML = "&lowast; Password doen't match. Please enter the same password.";
        ctrlPswConfirm.style = "background-color: #ffff99";
        ctrlPswConfirm.focus();
        return false;
    }
    else {
        ctrlPswConfirm.style = "background-color: none";
        document.getElementById("lblPwdConfirmAlert").innerHTML = "&lowast;";
        return true;
    }
}

/**
 * Check whether all contact numbers are empty. If all are empty, pop an alert
 * @param ctrlPhoneHome
 * @param ctrlPhoneWork
 * @param ctrlMobile
 * @returns {boolean}
 * @constructor
 */
function ValidateContact(ctrlPhoneHome, ctrlPhoneWork, ctrlMobile) {

    if ((ctrlPhoneHome.value == null || ctrlPhoneHome.value == "") &&
        (ctrlPhoneWork.value == null || ctrlPhoneWork.value == "") &&
        (ctrlMobile.value == null || ctrlMobile.value == "")) {

        document.getElementById("lblPhoneHomeAlert").innerHTML = "&lowast; Please provide at least one contact number.";
        ctrlPhoneHome.style = "background-color: #ffff99";
        ctrlPhoneWork.style = "background-color: #ffff99";
        ctrlMobile.style = "background-color: #ffff99";
        ctrlPhoneHome.focus();
        return false;
    }
    if (!IsNumber(ctrlPhoneHome.value)) {
        document.getElementById("lblPhoneHomeAlert").innerHTML = "&lowast; Phone number must be a number.";
        ctrlPhoneHome.style = "background-color: #ffff99";
        ctrlPhoneHome.focus();
        return false;
    }
    else {
        ctrlPhoneHome.style = "background-color: none";
        document.getElementById("lblPhoneHomeAlert").innerHTML = "";
    }
    if (!IsNumber(ctrlPhoneWork.value)) {
        document.getElementById("lblPhoneWorkAlert").innerHTML = "&lowast; Phone number must be a number.";
        ctrlPhoneWork.style = "background-color: #ffff99";
        ctrlPhoneWork.focus();
        return false;
    }
    else {
        ctrlPhoneWork.style = "background-color: none";
        document.getElementById("lblPhoneWorkAlert").innerHTML = "";
    }
    if (!IsNumber(ctrlMobile.value)) {
        document.getElementById("lblMobileAlert").innerHTML = "&lowast; Mobile number must be a number.";
        ctrlMobile.style = "background-color: #ffff99";
        ctrlMobile.focus();
        return false;
    }
    else {
        ctrlPhoneHome.style = "background-color: none";
        ctrlPhoneWork.style = "background-color: none";
        ctrlMobile.style = "background-color: none";
        document.getElementById("lblPhoneHomeAlert").innerHTML = "";
        document.getElementById("lblPhoneWorkAlert").innerHTML = "";
        document.getElementById("lblMobileAlert").innerHTML = "";
        return true;
    }
}

/**
 * Validate email. If the email is empty or doesn't follow email format, pop an alert
 * @param ctrlEmail
 * @returns {boolean}
 * @constructor
 */
function ValidateEmail(ctrlEmail) {
    if (ctrlEmail.value == null || ctrlEmail.value == "") {
        document.getElementById("lblEmailAlert").innerHTML = "&lowast; Email cannot be empty.";
        ctrlEmail.style = "background-color: #ffff99";
        ctrlEmail.focus();
        return false;
    }
    if (!IsEmail(ctrlEmail.value)) {
        document.getElementById("lblEmailAlert").innerHTML = "&lowast; Email format is invalid.";
        ctrlEmail.style = "background-color: #ffff99";
        ctrlEmail.focus();
        return false;
    }
    else {
        ctrlEmail.style = "background-color: none";
        document.getElementById("lblEmailAlert").innerHTML = "&lowast;";
        return true;
    }
}

/**
 * Validate registration form before submission.
 * @returns {boolean}
 */
function btnRegister_OnClick() {
    
    var txtUsername = document.getElementById("txtUsername");
    if (!ValidateUsername(txtUsername, "user")) {
        return false;
    }

    var txtPassword = document.getElementById("txtPassword");
    if (!ValidatePassword(txtPassword)) {
        return false;
    }

    var txtPswConfirm = document.getElementById("txtPswConfirm");
    if (!ValidateConfirmPassword(txtPswConfirm, txtPassword)) {
        return false;
    }

    var txtPhoneHome = document.getElementById("txtPhoneHome");
    var txtPhoneWork = document.getElementById("txtPhoneWork");
    var txtMobile = document.getElementById("txtMobile");

    if (!ValidateContact(txtPhoneHome, txtPhoneWork, txtMobile)) {
        return false;
    }

    var txtEmail = document.getElementById("txtEmail");
    if (!ValidateEmail(txtEmail)) {
        return false;
    }

    var txtAddress = document.getElementById("txtAddress");

    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/registerProcess.php",
        type: "POST",
        data: {
            'username': txtUsername.value,
            'password': txtPassword.value,
            'homePhone': txtPhoneHome.value,
            'workPhone': txtPhoneWork.value,
            'mobile': txtMobile.value,
            'email': txtEmail.value,
            'address': txtAddress.value
        },
        success: function (result) {
            switch (result)
            {
                case 'user exists':
                    $("#lblUsernameAlert").text("&lowast; This username has existed. Please select another username.");
                    break;
                case 'register failed':
                    alert('Sorry, registration failed.');
                    break;
                default:
                    document.getElementById("frmMain").submit();
                    break;
            }
        }
    });
}

/**
 * Check user login and display a message if login failed.
 * @returns {boolean}
 */
function btnLogin_OnClick() {
    var txtUsername = document.getElementById("txtUsername");
    if (!ValidateUsername(txtUsername, "user")) {
        return false;
    }

    var txtPassword = document.getElementById("txtPassword");
    if (!ValidatePassword(txtPassword)) {
        return false;
    }

    $.ajax({
        url: "/yuans06/php_assignment/website/scripts/loginProcess.php",
        type: "POST",
        data: {
            'username': txtUsername.value,
            'password': txtPassword.value,
        },
        success: function (result) {
            switch (result)
            {
                case 'wrong password':
                    LoginAlert('Wrong username and/or password. Please try again.');
                    break;
                case 'not exist':
                    LoginAlert("Username doesn't exist.");
                    break;
                case 'disabled':
                    LoginAlert("Sorry, your account has been disabled. Please contact website administrator.");
                    break;
                default:
                    if (txtUsername.value == 'admin')
                    {
                        window.location.href = "../admin/Admin.php";
                    }
                    else
                    {
                        document.getElementById("frmMain").submit();
                    }
                    break;
            }
        }
    });

}

/**
 * Display an alert message in the page.
 * @param message
 * @constructor
 */
function LoginAlert(message) {
    var alertMessage = '<div class="alert alert-danger">';
    alertMessage += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    alertMessage += message;
    alertMessage += '</div>';
    $("#loginFailAlert").html(alertMessage);
}

/**
 * Pop an alert when user logout
 * @constructor
 */
function LogoutAlert() {
    alert("You have logged out from Quality Caps.");
}

/**
 * Input validation when add new caps.
 * @returns {boolean}
 * @constructor
 */
function ValidateAddCap() {
    var capName = document.getElementById("txtCapName");
    //var capImage = document.getElementById("ContentPlaceHolder_filCapImage");
    var capCategory = document.getElementById("ddlCategory");
    //var capColor = document.getElementById("ddlColor");
    var capSupplier = document.getElementById("ddlSupplier");
    var capPrice = document.getElementById("txtPrice");
    var capDescription = document.getElementById("txtDescription");

    if (IsEmpty(capName) || IsEmpty(capCategory) || IsEmpty(capSupplier) || IsEmpty(capPrice) || IsEmpty(capDescription)) {
        document.getElementById("validationResult").innerHTML = "Please fill in all the Fields.";
        return false;
    }
    else {
        document.getElementById("validationResult").innerHTML = "";
        return true;
    }
}

/**
 * Submit add cap form after validation
 * @returns {boolean}
 */
function btnSaveCap_OnClick() {
    if (!ValidateAddCap()) {
        return false;
    }
    else {
        document.getElementById("frmMain").submit();
    }
}

/**
 * Validate add supplier form and submit after validation
 * @returns {boolean}
 */
function btnSaveSupplier_OnClick() {

    var txtSupplierName = document.getElementById("txtSupplierName");
    if (!ValidateUsername(txtSupplierName, "supplier")) {
        return false;
    }

    var txtPhoneHome = document.getElementById("txtPhoneHome");
    var txtPhoneWork = document.getElementById("txtPhoneWork");
    var txtMobile = document.getElementById("txtMobile");

    if (!ValidateContact(txtPhoneHome, txtPhoneWork, txtMobile)) {
        return false;
    }

    var txtEmail = document.getElementById("txtEmail");
    if (!ValidateEmail(txtEmail)) {
        return false;
    }

    document.getElementById("frmMain").submit();
}