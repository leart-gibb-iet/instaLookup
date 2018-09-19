

/**
 *  hides Login form and makes SignUp form visible
 */
function signUpForward() {
    document.getElementById('id01').style.display = "none";
    document.getElementById('id02').style.display = "block";

}

/**
 * If you click the "Sign Up" Button in the Login Form the function "signUpForward" get calls
 */
document.getElementById("signUpBtn").addEventListener("click", signUpForward);
