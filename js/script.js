var slideIndex = 1;
			showDivs(slideIndex);
				carousel();

				function carousel() {
					"use strict"; var i; 
					var x = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("hcpa");
					for (i = 0; i < x.length; i++) {
					  x[i].style.display = "none"; 
					}
					slideIndex++;
					if (slideIndex > x.length) {slideIndex = 1;}
					for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" w3-blue", "");
					}
					x[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " w3-blue";
					setTimeout(carousel, 10000); // Change image every 2 seconds
				}



			function plusDivs(n) {
			  "use strict"; showDivs(slideIndex += n);
			}

			function currentDiv(n) {
			  showDivs(slideIndex = n);
			}

			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("hcpa");
			  if (n > x.length) {slideIndex = 1}   
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
				 x[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				 dots[i].className = dots[i].className.replace(" w3-blue", "");
			  }
			  x[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " w3-blue";
			}

