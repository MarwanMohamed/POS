var queryParam = function(name) {
		var results = new RegExp(
			"[?&]" + 
			name.replace(/[\[\]]/g, "\\$&") + 
			"(=([^&#]*)|&|#|$)"
		).exec(window.location.href);
		if (!results) { return null };
		if (!results[2]) { return '' };
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	};

	var setLocale = function(locale) {
		for (var id in locale) {
			if (id === 'rtl' && locale.rtl === true) {
				document.body.dir = "rtl";
			}
			else {
				document.getElementById(id).textContent = 
					locale[id].replace(/\{SITE_NAME\}/g, domain);
			}
		}

		document.getElementById('batteryWarning').style.display = 
			(/mobile|Android|webOS|iPhone|iPad|iPod|IEMobile|Opera Mini/i.test(navigator.userAgent))
			? 'block' : 'none';
	};

	var shorten = function(s, n){
		return (s.length > n) ? s.substr(0, n-1) + '…' : s;
	};

	var siteKey = queryParam('key');
	if (!siteKey || siteKey.length !== 32) {
		document.body.innerHTML = 'Invalid Site Key';
		throw('Invalid Site Key');
	}

	// Set local body text 
	var names = document.querySelectorAll('.site-name');
	var domain = shorten(queryParam('domain') || 'Anonymous', 32);
	
	var locale = null;
	if (queryParam('lang') !== 'auto') {
		if (TRANSLATIONS[queryParam('lang')]) {
			locale = TRANSLATIONS[queryParam('lang')];
		}
	}
	if (!locale) {
		var lc = window.navigator.language;
		if (lc) {
			locale = TRANSLATIONS[lc] || TRANSLATIONS[lc.replace(/\-.*$/, '')];
		}
	}
	if (!locale) {
		locale = TRANSLATIONS.en;
	}

	setLocale(locale);

	if (locale !== TRANSLATIONS.en) {
		var a = document.getElementById('set-english-locale');
		a.style.display = 'block';
		a.addEventListener('click', function(ev) {
			setLocale(TRANSLATIONS.en);
			a.style.display = 'none';
			ev.preventDefault();
			return;
		})
	}

	// Set theme
	if (queryParam('theme') === 'dark') {
		document.body.className = 'dark';
	}	
	document.getElementById('content').style.display = 'block';


	// Adjust IFrame height
	var p = window.parent;
	p.postMessage({type: 'coinhive-auth-height', params: {
		height: document.body.clientHeight + 32
	}}, "*");

	// Handle buttons
	document.getElementById('cancel').addEventListener('click', function(){
		p.postMessage({type: 'coinhive-auth-canceled'}, "*");
	});

	document.getElementById('accept').addEventListener('click', function(){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState === xhr.DONE){
				p.postMessage({type: 'coinhive-auth-success', params: {
					token: JSON.parse(xhr.responseText).token 
				}}, "*");
			}
		};
		xhr.open('POST', '/auth/');
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send('auth&key='+encodeURIComponent(siteKey));
	});
</script>