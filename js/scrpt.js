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