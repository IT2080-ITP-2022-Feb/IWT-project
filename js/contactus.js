function validation(){
    var name = document.getElementById("name").Value;
    var email = document.getElementById("email").Value;
    var mobile = document.getElementById("mobile").Value;
    var message = document.getElementById("message").Value;
    var name = document.getElementById("error_message").Value;

error_message.style.padding = "10px";

var text;
if (name.length <5){
    text="Please Enter Validation Name";
    error_message.innerHTML = "text";
    return false;
}

if (email.indexOf("@") == -1 || email.length < 6){
    text="Please Enter Correct Email";
    error_message.innerHTML = "text";
    return false;
}

if (isNaN(mobile)||mobile.length !=10){
    text="Please Enter Valid Phone Number";
    error_message.innerHTML = "text";
    return false;
}    

if (message.length <10){
    text="Please Enter More Than 10 Characters";
    error_message.innerHTML = "text";
    return false;
}
alert("form submitted successfully!");
return true;
}
