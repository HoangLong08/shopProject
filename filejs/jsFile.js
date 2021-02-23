function validateEmail(email) {
	const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
 }

$('document').ready(function(){
	$('#icon-bar').click(function(){
		$('.main-menu').toggleClass('show');
	})
})
// $(document).ready(function(){
// 	$('.main-menu .main-menu-li a').click(function(){
// 	  $('.main-menu .main-menu-li a').removeClass("active-menu");
// 	  $(this).addClass("active-menu");
// 	});
// });

function addOutline(target){
	target.classList.add('active-menu');
}