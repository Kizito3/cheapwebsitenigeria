let menu = document.querySelector('#menu-icon');
let nav = document.querySelector('#menu2');

menu.onclick = () => {
    // changes the class by manipulating the dom
    menu.classList.toggle('fa-xmark');
    nav.classList.toggle('open');
}

window.onscroll = function() {
	let e = document.getElementById("scrolltop");
    if (!e) {
    	e = document.createElement("a");
        e.id = "scrolltop";
        e.href = "#";
        document.body.appendChild(e);
	}
	e.style.display = document.documentElement.scrollTop > 300 ? "block" : "none";
    e.onclick = (ev) => {
    	ev.preventDefault();
        document.documentElement.scrollTop = 0;
    };
};


const slideContainer = document.querySelector(".carousel-slide");
    const images = document.querySelectorAll(".carousel-image");

    let counter = 0;
    const interval = 2000; // Change slide every 2 seconds
    const slideWidth = images[0].clientWidth;

    function nextSlide() {
      // Move to the next image
      counter++;
      slideContainer.style.transition = "transform 0.5s ease-in-out";
      slideContainer.style.transform = `translateX(${-counter * slideWidth}px)`;

      // Reset counter and transition when reaching the last cloned image
      if (counter === images.length - 2) {
        setTimeout(() => {
          counter = 0;
          slideContainer.style.transition = "none";
          slideContainer.style.transform = `translateX(0)`;
        }, 500);
      }
    }

    function prevSlide() {
      // Move to the previous image
      if (counter === 0) {
        counter = images.length - 2;
        slideContainer.style.transition = "none";
        slideContainer.style.transform = `translateX(${-counter * slideWidth}px)`;
      }
      setTimeout(() => {
        counter--;
        slideContainer.style.transition = "transform 0.5s ease-in-out";
        slideContainer.style.transform = `translateX(${-counter * slideWidth}px)`;
      }, 0);
    }

    setInterval(nextSlide, interval);
