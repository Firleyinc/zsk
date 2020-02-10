document.addEventListener("click",function(e) {
  if(!document.getElementById("sidebar").contains(e.target))
  hideSidebar();
  else
  showSidebar();
});

function showSidebar() {
  document.getElementById("sidebar").style.transform = "translateX(100%)";
}

function hideSidebar() {
  document.getElementById("sidebar").style.transform = "translateX(0%)";
}
