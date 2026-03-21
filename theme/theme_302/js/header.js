// 슬라이드
$(document).ready(function () {
	$('.dropdown').hover(function () {
		//$('ul.dropdown-menu', this).stop(true, true).slideDown('fast');
		$('ul.dropdown-menu', this).show();
		$(this).addClass('open');
	}, function () {
		//$('ul.dropdown-menu', this).stop(true, true).slideUp('fast');
		$('ul.dropdown-menu', this).hide();
		$(this).removeClass('open');
	});
});

// 슬라이드
$('.carousel').carousel({
	interval: 3000
});
