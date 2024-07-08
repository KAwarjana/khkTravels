
let slideIndex10 = 0;
showSlides10();

function showSlides10() {
  let i;
  let slides = document.getElementsByClassName("mySlides10");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex10++;
  if (slideIndex10 > slides.length) {slideIndex10 = 1}
  slides[slideIndex10-1].style.display = "block";
  setTimeout(showSlides10, 2000); // Change image every 2 seconds
}