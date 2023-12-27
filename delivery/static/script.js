var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) {
    slideIndex = 1
  }    
  if (n < 1) {
    slideIndex = slides.length
  }
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  slides[slideIndex - 1].style.display = "block";  
}

function donutPrice(input) {
	var pricePerUnit = 600;
	var quantity = input.value;
	var totalPrice = pricePerUnit * quantity;

	input.parentNode.parentNode.querySelector('.price').innerText = totalPrice + 'р';
 }

function cupcakePrice(input) {
	var pricePerUnit = 700;
	var quantity = input.value;
	var totalPrice = pricePerUnit * quantity;

	input.parentNode.parentNode.querySelector('.price').innerText = totalPrice + 'р';
 }

function cakePrice(input) {
	var pricePerUnit = 1500;
	var quantity = input.value;
	var totalPrice = pricePerUnit * quantity;

	input.parentNode.parentNode.querySelector('.price').innerText = totalPrice + 'р';
 }