

/* события бургер-меню */
document.getElementById('burger').onclick = function () {
	this.classList.toggle("_active");
	document.getElementById('burgerMenu').classList.toggle("_active");
};

let burgerLinks = document.getElementsByClassName('burger-menu__link');
//console.log(Array.from(burgerLinks));

Array.from(burgerLinks).forEach(function (link) {
	link.onclick = function () {
		document.getElementById('burger').classList.remove("_active");	
		document.getElementById('burgerMenu').classList.remove("_active");
	};
});

/* / события бургер-меню */


/* Аккордеон */
let accorHeads = Array.from(document.getElementsByClassName('accor__head'));
//console.log(accorHeads);
let	accors = Array.from(document.getElementsByClassName('accor'));
accorHeads.forEach(function (item) {
	item.onclick = function() {
		const parent = this.parentElement;
		//this.parentElement.style.background = "red";
		if (parent.classList.contains('_active')) {
			parent.classList.remove('_active');
		} else{
			accors.forEach(function(accor) {accor.classList.remove('_active')});
			parent.classList.add('_active');
		}
	};
});

/* / Аккордеон */