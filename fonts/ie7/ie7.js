/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'ihma-Icon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'fa-home': '&#xe600;',
		'fa-pencil': '&#xe601;',
		'fa-quill': '&#xe602;',
		'fa-envelope': '&#xe603;',
		'fa-lock': '&#xe604;',
		'fa-unlocked': '&#xe605;',
		'fa-facebook': '&#xe606;',
		'fa-twitter': '&#xe607;',
		'fa-feed': '&#xe608;',
		'fa-youtube': '&#xe60b;',
		'fa-html5': '&#xe609;',
		'fa-css3': '&#xe60a;',
		'fa-IE': '&#xe60c;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/fa-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
