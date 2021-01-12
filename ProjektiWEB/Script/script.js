document.getElementById("loginButton").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
})
document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
})

document.getElementById("SignUp").addEventListener("click", function(){
    document.querySelector(".hideLogin").style.display = "none";
    document.querySelector("#RegisterInput").style.display = "flex";
})
document.getElementById("RegisterButton").addEventListener("click", function(){
    document.querySelector(".hideLogin").style.display = "block";
    document.querySelector("#RegisterInput").style.display = "none";
})

function myFunction(){
    var userName = document.getElementById('username').value;
    var userPass = document.getElementById('userpass').value;
    if(userName.length <=0 || userPass.length <=0){
        alert("You should fill both fields!");
    }
    else{
        alert("Login succesful!");
    }
}
    function rFunction() {
        var userName = document.getElementById('rUName').value;
        var userEmail = document.getElementById('rEmail').value;
        var userPass = document.getElementById('rPass').value;
        if(userName.length <=0 || userPass.length <=0){
        alert("You should fill all fields!");
        }
    
        else{
        alert("Register succesful!");
        }
    }
