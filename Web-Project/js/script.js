
    //Slider-i
    var activeElements = document.querySelectorAll('.otherWatches a.active');
    var notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
    console.log(activeElements);
    console.log(notActiveElements);
    var activeIndex=0;
    var notActiveIndex=0;

    document.getElementById('prevBtn').addEventListener('click', function(){
        for(var i=0;i<activeElements.length; i++){
            activeElements[activeIndex].classList.remove('active');
            activeElements[activeIndex].classList.add('not-active');
            activeIndex++;
        
            notActiveElements[notActiveIndex].classList.remove('not-active');
            notActiveElements[notActiveIndex].classList.add('active');
            notActiveIndex++;
        }
        activeIndex=0;
        notActiveIndex=0;

        activeElements = document.querySelectorAll('.otherWatches a.active');
        notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
    })

    document.getElementById('nextBtn').addEventListener('click', function(){
        for(var i=0;i<activeElements.length; i++){
            activeElements[activeIndex].classList.remove('active');
        activeElements[activeIndex].classList.add('not-active');
        activeIndex++;
        
        notActiveElements[notActiveIndex].classList.remove('not-active');
        notActiveElements[notActiveIndex].classList.add('active');
        notActiveIndex++;
        }
        activeIndex=0;
        notActiveIndex=0;

        activeElements = document.querySelectorAll('.otherWatches a.active');
        notActiveElements = document.querySelectorAll('.otherWatches a.not-active');
    })



    