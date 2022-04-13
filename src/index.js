	var bars = document.getElementById("nav-action");
	var nav = document.getElementById("nav");


	//setting up the listener
	bars.addEventListener("click", barClicked, false);


	//setting up the clicked Effect
	function barClicked() {
		bars.classList.toggle('active');
		nav.classList.toggle('visible');
	}

  	//setting up departments card shuffle and unshuffle effect
 	 let cards = [].slice.call(document.querySelectorAll('.card'));
 	 let cardW = document.querySelector('#cardW');
 	 let cardL = document.querySelector('#cardL');

	//setting up the card shuffling effect
  	cardW.addEventListener('click', function () {
  		cards.forEach(function (card) {
  			card.classList.add('transformed')
  		});
  		cardW.classList.add('hidden');
 	 });

	// Setting up the card unshuffling effect
	cardL.addEventListener('click', function () {
		cards.forEach(function (card) {
			card.classList.remove('transformed')
		});
		cardW.classList.remove('hidden');
	});


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

