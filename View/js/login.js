
function validate(){
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;

if (username == "" && password == ""){
alert ("Login successful")
window.open('checkout.php')
}
else{
    alert ("Error! Incorrect Email or Password")
}
}