var redirectDelay = setInterval(redirect,5000);
  document.getElementById("progressBar").style.transform = "translateX(100%)";
var counter = 0;

function redirect() {
  clearInterval(redirectDelay);
  window.location.replace("index.php");
}
