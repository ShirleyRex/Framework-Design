function myFunction() {
  let x = document.getElementById("toggle-menu");
  let y = document.getElementById("header");
  let z = document.getElementById("icon");

  if (z.classList.contains("fa-bars")) {
    z.classList.remove("fa-bars");
    z.classList.add("fa-times");
  } else {
    z.classList.remove("fa-times");
    z.classList.add("fa-bars");
  }

  y.classList.toggle("bg-green-100");
  y.classList.toggle("active");
  x.classList.toggle("active");
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
