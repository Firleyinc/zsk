document.getElementById("header").style.transform = "translateY(100%)";
//ładowanie nagłówka

var cl = document.getElementsByClassName("floatingWindow");
for(var i = 0; i < cl.length;i++)
  cl[i].style.transform = "scale(1)";
//ładowanie okienek pływających na stronie

var el = document.getElementById("backgroundImage");
var blurAnimation = setInterval(animateBlur,50);
//animacja rozmycia tła

var opacityAnimation = setInterval(animateOpacity,100);
//animacja przezroczystości pływających okienek

var blur = 0;
var opacity = 0;
document.getElementsByName("login")[0].addEventListener("click",showLoginForm);

document.getElementById("backgroundImage").addEventListener("click",function(e) {
  if(!document.getElementById("loginWindow").contains(e.target))
  hideLoginForm();
});

function animateOpacity() {
  opacity+=0.1;
  if(opacity < 1) {
    var cl = document.getElementsByClassName("floatingWindow");
    for(var i = 0; i < cl.length;i++)
      cl[i].style.opacity = opacity;

  }
  else clearInterval(opacityAnimation);
}

function animateBlur() {
  blur+=0.1;
  if(blur < 5)
    el.style.filter = "blur("+blur+"px)";
  else clearInterval(blurAnimation);
}

function showLoginForm() {
  document.getElementById("loginWindow").style.transform = "translateX(-100%)";
}

function hideLoginForm() {
  document.getElementById("loginWindow").style.transform = "translateX(100%)";
}
