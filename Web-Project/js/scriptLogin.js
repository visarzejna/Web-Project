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