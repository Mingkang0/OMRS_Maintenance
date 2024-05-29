//Validation code for register form
function registerFormValidate(){

    // variable based on id
    var ic = document.getElementById("userIC").value;
    var name = document.getElementById("appName").value;
    var userType = document.getElementById("userType").value;
    var gender = document.getElementById("appGender").value;
    var phoneNo = document.getElementById("appPhoneNo").value;
    var email = document.getElementById("appEmail").value;
    var password = document.getElementById("userPassword").value;
    var error_message = document.getElementById("error_message");
    
    //Error Message style
    error_message.style.padding = "6px";
    error_message.style.color = "red";
    
    var text;
  
    //Validation Condition
    if (ic.length !== 12 && ic.length !== 14) {
      text = "*Sila masukkan Kad pengenalan yang sah";
      error_message.innerHTML = text;
      return false;
    }    
  
    if(name == ""){
      text = "*Sila masukkan nama";
      error_message.innerHTML = text;
      return false;
    }

    if(userType == ""){
      text = "*Sila masukkan kategori akses";
      error_message.innerHTML = text;
      return false;

    }
  
    if(gender == ""){
      text = "*Sila masukkan jantina";
      error_message.innerHTML = text;
      return false;
    }

    if(phoneNo.length <=9){
      text = "*Sila masukkan nombor telefon yang SAH";
      error_message.innerHTML = text;
      return false;
    }

    if(email == ""){
      text = "*Sila masukkan e-mel yg SAH";
      error_message.innerHTML = text;
      return false;
    }
    
    if(password.length >= 21){
      text = "*Sila masukkan kata laluan yang SAH";
      error_message.innerHTML = text;
      return false;
    }
  
    if(password != confirm_password){
      text = "Kata laluan tidak sepadan";
      error_message.innerHTML = text;
      return false;
    }
  
    return true;
  }

  var ic = document.getElementById("userIC").value;
  var age = getAgeFromICNumber(ic);

  function getAgeFromICNumber(ic) {
    // Calculate the age
    var age = currentYear - (1900 + parseInt(year));
    if (currentMonth < parseInt(month) || (currentMonth == parseInt(month) && currentDate.getDate() < parseInt(day))) {
      age--; // Birthday hasn't occurred yet this year
    }
  
    return age;
  }
  