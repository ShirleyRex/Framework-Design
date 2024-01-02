function toggleMenu() {
    // Fetch elements by their IDs
    const menu = document.getElementById("toggle-menu");
    const header = document.getElementById("header");
    const icon = document.getElementById("icon");
  
    // Toggle icon classes between bars and times
    const iconClassToAdd = icon.classList.contains("fa-bars") ? "fa-times" : "fa-bars";
    const iconClassToRemove = icon.classList.contains("fa-bars") ? "fa-bars" : "fa-times";
    icon.classList.remove(iconClassToRemove);
    icon.classList.add(iconClassToAdd);
  
    // Toggle background and active state for header and menu
    header.classList.toggle("bg-green-100");
    header.classList.toggle("active");
    menu.classList.toggle("active");
  }

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("accordion-active");

    var parent = this.parentElement;
    var panel = parent.nextElementSibling;

    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
