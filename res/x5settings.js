(function ( $, x5engine ) {
	var s = x5engine.settings,
		b = x5engine.boot;

	b.push(function () {
		x5engine.setupDateTime();
		x5engine.imAccess.showLogout();
		x5engine.utils.autoHeight();
		x5engine.cart.ui.updateWidget();
		x5engine.imGrid.init();
	});
	b.push(function () {
		x5engine.menu({
			target: '#imMnMn',
			showCurrent: false,
			verticalScroll: true,
			orientation: 'vertical',
			menuHeight: 58,
			submenuHeight: 62,
			opacity: 0.800,
			type: 'multipleColumn',
			alignment: 'left',
			effect: 'fade'
		});
	});

	// ShowBox
	$.extend(s.imShowBox, {
		'effect' : 'fade',
		'shadow' : '3px 3px 10px 0px #403000',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		'borderRadius' : '10px 10px 10px 10px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#403000',
		'fontFamily' : 'Palatino Linotype',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '11pt',
		'textAlignment' : 'left',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.700,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'fade',
		'width' : 500,
		'shadow' : '3px 3px 10px 0px #403000',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#403000',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.700
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 0,
		'arrow' : true,
		'position' : 'bottom',
		'effect' : 'fade',
		'showTail' : true
	});

	// Captcha
	var codes = s.imCaptcha.offlineCodes;
	s.loaded = true;
})( _jq, x5engine );