var bars = document.getElementById("nav-action");
	var nav = document.getElementById("nav");


	//setting up the listener
	bars.addEventListener("click", barClicked, false);


	//setting up the clicked Effect
	function barClicked() {
		bars.classList.toggle('active');
		nav.classList.toggle('visible');
	}
	//Back to top button function

	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.querySelector(".back-to-top").style.transform = "translateY(0px)";
			document.querySelector(".back-to-top").style.opacity = "1";
		} else {
			document.querySelector(".back-to-top").style.transform = "translateY(1000px)";
			document.querySelector(".back-to-top").style.opacity = "0";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
