function validation(){
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var error=document.getElementById("error");

    error.style.padding="10px";

    if(name.length<3){
        text ="Please Enter a Valid Name.";
        error.innerHTML =text;
        return false;
    }
    if(email.indexOf("@")==-1 || email.length<6){
        text ="Please Enter a Valid Email.";
        error.innerHTML =text;
        return false;
    }
    if(isNaN(phone)||phone.length!=10){
        text ="Please Enter a Valid Phone Number.";
        error.innerHTML =text;
        return false;
    }
    if(message==" "){
        text ="Please Fill the Message Field.";
        error.innerHTML =text;
        return false;
    }
    
   
    return true;
}