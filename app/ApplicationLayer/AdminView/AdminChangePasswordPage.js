//Validation code for change password form
function changePasswordFormValidate()
{
    //Declaring variable based on id
    var ic = document.getElementById("userIC").value;
    var password = document.getElementById("userPassword").value;
    var confirm_password = document.getElementById("newPassword").value;
    var error_message = document.getElementById("error_message");

    //Error Message style
    error_message.style.padding = "6px";
    error_message.style.color = "red";

    var text;

    //Validation Condition
    if(ic.length != 12)
    {
        text = "*Sila masukkan kad pengenalan yang SAH.";
        error_message.innerHTML = text;
        return false;
      }

    if(password.length >= 21)
    {
        text = "*Sila masukkan kata laluan yang SAH.";
        error_message.innerHTML = text;
        return false;
    }

    if(password != confirm_password){
    text = "*Kata laluan anda tidak sepadan.";
    error_message.innerHTML = text;
    return false;
    }

    return true;
}
