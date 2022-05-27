
$(document).ready(function(){
  
    $(".multiple-items").slick({
        dots:true,
        infinite:true,
        autoplay:true,
        autoplaySpeed:2900,
        slidesToShow:3,
        slidesToScroll:1,
        centerMode:true,
        prevArrow:"<div class=\"slide-arrow slick-prev\"><i class=\"fa fa-angle-left  \"></i></div>",
        nextArrow:"<div type=\"button\"class=\"slide-arrow slick-next\"><i class=\"fa fa-angle-right  \"></i></div>",
      responsive:[
        {
        breakpoint:780,
        settings:{
            slidesToShow:2,
            slidesToScroll:1,
            infinite:true,
        }  
      },
      {
        breakpoint:480,
        settings:{
            slidesToShow:1,
            slidesToScroll:1,
            infinite:true,
            centerMode:false,
        }  
      }
    
    
    
    ]
    
        
    
    }
    
 );



 $(".img-layout").slick({
    infinite:true,
    //autoplay:true,
    //autoplaySpeed:2900,
    slidesToShow:2,
    slidesToScroll:2,
    prevArrow:"<div class=\"slide-arrow slick-prev\"><i class=\"fa fa-angle-left  \"></i></div>",
    nextArrow:"<div type=\"button\"class=\"slide-arrow slick-next\"><i class=\"fa fa-angle-right  \"></i></div>"
    
    

}
);
 
});
//menu gestion
var menu=document.querySelector(".nav__icon");
var menuLinks=document.querySelectorAll(".header__nav a");
var headerNav=document.querySelector(".header__nav");

var topbar=document.querySelector("body");
menu.addEventListener("mouseover",function(){
  for(var i=0;i<menuLinks.length;i++){
    menuLinks[i].style.display="inline-block"
    menu.style.display="none"
    headerNav.style.width="100%"
  }
})
menu.addEventListener("click",function(){
  for(var i=0;i<menuLinks.length;i++){
    menuLinks[i].style.display="inline-block"
   
  }
  menu.style.display="none"
})
topbar.addEventListener("click",function(){
  if(headerNav.style.width=="100%"){
    for(var i=0;i<menuLinks.length;i++){
      menuLinks[i].style.display="none"
      
    }
    menu.style.display="block"
    headerNav.style.width="auto"
  }
 
})

// form animation
var step1=document.querySelector("#step1");
var step2=document.querySelector("#step2");
var step3=document.querySelector("#step3");
if(step1!=null){
  step1.addEventListener("click",function(e){
    e.preventDefault()
    step1.parentNode.parentNode.classList.remove("form__active")
    step2.parentNode.parentNode.classList.add("form__active")
    
  })
}

if(step2!=null){
  step2.addEventListener("click",function(e){
    e.preventDefault()
    step2.parentNode.parentNode.classList.remove("form__active")
    step3.parentNode.parentNode.classList.add("form__active")
    
  })
}

//// form_devis.php animation

  function formAnimate(firstElementId, secondElementId){
    var stepOne=document.querySelector("#"+firstElementId);
    var stepTwo=document.querySelector("#"+secondElementId);
    stepOne.addEventListener("click",function(e){
      e.preventDefault();
      stepOne.parentNode.parentNode.classList.remove("form__active");
      stepTwo.parentNode.parentNode.classList.add("form__active");
      
    })
    
  }
  formAnimate("stp1","stp2");
  formAnimate("stp2","stp3");
  formAnimate("stp3","stp4");
  formAnimate("stp4","stp5");










