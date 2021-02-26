//contact form switch
    
document.querySelector(".socialMedia").addEventListener("click", function(){
    document.querySelector(".contactForm").style.display = "none";
    document.querySelector(".content").style.display = "flex";
})
    document.querySelector(".message").addEventListener("click", function(){
    document.querySelector(".contactForm").style.display = "flex";
    document.querySelector(".content").style.display = "none";
})