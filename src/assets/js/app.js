import $ from 'jquery';
import whatInput from 'what-input';
import libs from './lib/dependencies';

window.libs = libs;
window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation().ready(

	//add action events on load
	function() {
		$('.black-overlay, .subheader').addClass('ready');

		//init AOS plugin
		libs.AOS.init({
		  delay: 500,
		  easing: 'ease-out',
		  duration: 800,
		});

		//active state ham

		$('.hamburger').on('click', function(){
			$('.hamburger').toggleClass('is-active');
			});

		//hide mobile menu on click
		$('#mobile-menu li>a').on('click', function(){
			$('#tab-bar').foundation('toggleMenu');
			$('.hamburger').toggleClass('is-active');
		});

	}
);
