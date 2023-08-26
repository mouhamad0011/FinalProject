function isValidUsername() {
    var username=document.getElementById("username");
    var pattern = /^[a-zA-Z0-9]{5,}$/;
    if(! pattern.test(username.value)){
    username.setAttribute("placeholder",  "Username must be at least 5 characters long and contain only letters and numbers.");
    username.style.border="2px solid red";
    return false;
}
username.style.border="1px solid gray";
return true;
}
function isValidEmail() {
    var email=document.getElementById("email");
    var pattern = /^[^\s@]+@[^\s@]+.[^\s@]+$/;
    if(! pattern.test(email.value)){
        email.setAttribute("placeholder", "Please enter a valid email address.");
        email.style.border="2px solid red";
        return false;
    }
    email.style.border="1px solid gray";
    return true;
}
function isValidPhoneNumber() {
    let number=document.getElementById("number");
    var pattern = /^[0-9]{8}$/; 
    if(! pattern.test(number.value)){
        nu.setAttribute("placeholder", "Please enter a valid phone number.");
        number.style.border="2px solid red";
        return false;
    }
    number.style.border="1px solid gray";
    return true;
}

function isValidSubject(){
    let sub=document.getElementById("subject");
    if(sub.value.trim()===""){
        sub.style.border="2px solid red";
        return false;
    }sub.style.border="1px solid gray";
    return true;
}
function isValidMessage(){
    let message=document.getElementById("message");
    if(message.value.trim()===""){
        message.style.border="2px solid red";
        return false;
    }message.style.border="1px solid gray";
    return true;
}
function valid(){
    return isValidUsername()&&isValidEmail()&&isValidPhoneNumber()&&isValidPassword();
}
function validLogin(){
    return isValidUsername()&&isValidPassword();
}
function validContactus(){
    return isValidUsername()&&isValidEmail()&&isValidSubject()&&isValidMessage();
}