function validateForm(){

    let email = document.getElementById("email").value;

    if(email == ""){
        alert("Email Required");
        return false;
    }

    return true;
}