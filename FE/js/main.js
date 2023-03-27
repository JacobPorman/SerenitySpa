var header = document.getElementById("header");

window.onscroll = function () {
  if (window.pageYOffset > 0) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
};
