

/**
 *  hides Login form and makes SignUp form visible
 */
function signUpForward() {
    document.getElementById('id01').style.display = "none";
    document.getElementById('id02').style.display = "block";

}

/**
 *  is used to validate Signup and Userpanel  password confirmation
 */
function initializePasswordFields() {
    
    var pwdFields = document.getElementsByClassName("pwd");
    
    for(let field of pwdFields)  {

        field.addEventListener("input", validatePassword);

    }

}

/**
 *  is used to validate Signup and Userpanel password confirmation
 */
function validatePassword() {

    var pwdFields = document.getElementsByClassName("pwd");
    
    
    if(pwdFields[0].value != pwdFields[1].value) {

        document.getElementById("validatePwd").style.display = 'block';
        document.getElementById("formBtn").disabled = true;
    }else{
    
        document.getElementById("validatePwd").style.display = 'none';
        document.getElementById("formBtn").disabled = false;
    }
   
}

/**
 * If you click the "Sign Up" Button in the Login Form the function "signUpForward" get calls
 */
document.getElementById("signUpBtn").addEventListener("click", signUpForward);
initializePasswordFields();