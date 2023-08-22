//auto scroll up btn
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//adding text btn for read more..//
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("moreBtn");

    //for btn mission//
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    }else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
function btnMore(){
    var btnTexttwo = document.getElementById("more_Btn");
    var moreeText = document.getElementById("moree");
    var dot = document.getElementById("dot");
        //for btn vision//
    
        if (dot.style.display === "none") {
            dot.style.display = "inline";
            btnTexttwo.innerHTML = "Read more";
            moreeText.style.display = "none";
        }else {
            dot.style.display = "none";
            btnTexttwo.innerHTML = "Read less";
            moreeText.style.display = "inline";
        }
}

//scroll//
const the_animation = document.querySelectorAll('.animation');
const the_animationn = document.querySelectorAll('.animation_two');

const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) =>{
        if(entry.isIntersecting){
            entry.target.classList.add('scroll-animation')
        }else{
            entry.target.classList.remove('scroll-animation');
        }
    })
},
{
    threshold: 0.5
});
for (let i = 0; i < the_animation.length; i++) {
    const elements = the_animation[i];

    observer.observe(elements);
    
}
for (let i = 0; i < the_animationn.length; i++) {
    const elements = the_animationn[i];

    observer.observe(elements);
    
}
//for showinf pass
function showPass(){
    var pass = document.getElementById('pass');
    var eye = document.getElementById('eye')
    if(pass.type === "password"){
        pass.type = "text";
        eye.classList = "fa-regular fa-eye-slash";
    }else{
        pass.type = "password";
        eye.classList = "fa-regular fa-eye";
    }
}
