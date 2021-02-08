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

    //Slider-i
    var activeElements = document.querySelectorAll('.otherWatches a.active');
    var notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
    console.log(activeElements)
    console.log(notActiveElements)
    var activeIndex=0;
    var notActiveIndex=0;

    document.getElementById('prevBtn').addEventListener('click', function(){
        for(var i=0; i<activeElements.length; i++){
            activeElements[i].classList.remove('active');
            activeElements[i].classList.add('not-active');

            notActiveElements[i].classList.add('active');
            notActiveElements[i].classList.remove('not-active');

            activeElements = document.querySelectorAll('.otherWatches a.active');
        notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
        }
    })

    document.getElementById('nextBtn').addEventListener('click', function(){
        for(var i=0; i<activeElements.length; i++){
            activeElements[i].classList.remove('active');
            activeElements[i].classList.add('not-active');

            notActiveElements[i].classList.add('active');
            notActiveElements[i].classList.remove('not-active');

            activeElements = document.querySelectorAll('.otherWatches a.active');
        notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
        }
    })
    /*document.getElementById('prevBtn').addEventListener('click', function(){
        activeElements[(activeElements.length-1)-activeIndex].classList.remove('active');
        activeElements[(activeElements.length-1)-activeIndex].classList.add('not-active');
        activeIndex++;
        if(activeIndex==activeElements.length) activeIndex=0;
        notActiveElements[(notActiveElements.length-1)-notActiveIndex].classList.add('active');
        notActiveElements[(notActiveElements.length-1)-notActiveIndex].classList.remove('not-active');
        notActiveIndex++;
        if(notActiveIndex == notActiveElements.length) notActiveIndex = 0;
        activeElements = document.querySelectorAll('.otherWatches a.active');
        notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
    })
    /*document.getElementById('prevBtn').addEventListener('click',function(){
       divElements[sliderIndex].classList.remove('active');
       divElements[sliderIndex].classList.add('not-active');
       sliderIndex++;
        if(sliderIndex == divElements.length) sliderIndex = 0;
        divElements[sliderIndex].classList.add('active');
       divElements[sliderIndex].classList.remove('not-active');
    })*/
