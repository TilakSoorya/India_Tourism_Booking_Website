function validate(){
    var name=document.getElementById("name").value;
    var password=document.getElementById("password").value;
    var error=document.getElementById("error");

    error.style.padding="10px";
    
    if(name.length<3){
        text ="Please Enter a Valid UserName.";
        error.innerHTML =text;
        return false;
    }
    if(password <1){
        text ="Please Enter Password";
        error.innerHTML =text;
        return false;
    }

    
}