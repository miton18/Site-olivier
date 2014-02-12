function afficher(){
	lD = new Date();
	lC = lD.getHours().toLocaleString();
	lB = lD.getMinutes().toLocaleString();
	lD = (lC +':'+lB);
	document.getElementById('time').innerHTML = lD;
}
function confirmation(){
	alert("la demande est enregistrée");
}

function develloppe(){
	$(document).ready(function () {

		$('#toggle-view li').click(function () {
			var text = $(this).children('div.panel');
			if (text.is(':hidden')) {
				text.slideDown('300');
				$(this).children('span').html('-');        
			} else {
				text.slideUp('200');
				$(this).children('span').html('+');        
			}

		});
	});
}
function googleana(){
	(
		function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		}
	)(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-41699331-1', 'rcdinfo.fr');
		ga('send', 'pageview');
}
function start(){
	apprise('Le site est actuellement en construction');
	afficher();
	setInterval(afficher,1000);
}
function photos(){
	jQuery(function($) {
		$(".swipebox").swipebox({
			useCSS : true, // false will force the use of jQuery for animations
			hideBarsDelay : 3000 // 0 to always show caption and action bar
		});
	});
}