$(document).ready(function(){
	$('.sidebar-menu__link').click(function(event){
		$(this).toggleClass('active').next().slideToggle(300);
	});
	$('.sidebar-menu__sublink').click(function(event){
		$(this).toggleClass('active-sublink');
	});
});

window.onscroll = function showHeader(){
	var header = document.querySelector('.header-top');
	if(window.pageYOffset > 100){
		header.classList.add('header_fixed');
	} else{
		header.classList.remove('header_fixed');
	}
}

