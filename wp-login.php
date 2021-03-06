<!DOCTYPE html>
<html lang="es-AR">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Iniciar sesión &lsaquo; WorpressCV &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="/https://lissen01.github.io/WordpressCV/wp-includes/css/dashicons.min.css?ver=5.9.3" media="all">
<link rel="stylesheet" id="buttons-css" href="/https://lissen01.github.io/WordpressCV/wp-includes/css/buttons.min.css?ver=5.9.3" media="all">
<link rel="stylesheet" id="forms-css" href="/https://lissen01.github.io/WordpressCV/wp-admin/css/forms.min.css?ver=5.9.3" media="all">
<link rel="stylesheet" id="l10n-css" href="/https://lissen01.github.io/WordpressCV/wp-admin/css/l10n.min.css?ver=5.9.3" media="all">
<link rel="stylesheet" id="login-css" href="/https://lissen01.github.io/WordpressCV/wp-admin/css/login.min.css?ver=5.9.3" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-es-ar">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://es.wordpress.org/">Funciona gracias a WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="/wp-login.php" method="post">
			<p>
				<label for="user_login">Nombre de usuario o correo electrónico</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Contraseña</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostrar contraseña">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Recordarme</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Iniciar sesión">
									<input type="hidden" name="redirect_to" value="/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
								<a href="/https://lissen01.github.io/WordpressCV/wp-login.php?action=lostpassword">¿Olvidaste tu contraseña?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="/https://lissen01.github.io/WordpressCV/">&larr; Ir a WorpressCV</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Idioma</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="es_AR" lang="es" selected data-installed="1">Español de Argentina</option></select>
					
					
					
						<input type="submit" class="button" value="Cambiar">

					</form>
				</div>
				<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">
var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c" id="wp-hooks-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">
var pwsL10n = {"unknown":"Fortaleza de contraseña desconocida","short":"Muy débil","bad":"Débil","good":"Medio","strong":"Fuerte","mismatch":"No coinciden"};
</script>
<script id="password-strength-meter-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-01-11 14:06:07+0000","generator":"GlotPress\/3.0.0-rc.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es_AR"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s  está en desuso desde la versión %2$s Usá %3$s en su lugar. Por favor considerá escribir un código más inclusivo."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script src="/https://lissen01.github.io/WordpressCV/wp-admin/js/password-strength-meter.min.js?ver=5.9.3" id="password-strength-meter-js"></script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script id="wp-util-js-extra">
var _wpUtilSettings = {"ajax":{"url":"\/WordpressCV\/wp-admin\/admin-ajax.php"}};
</script>
<script src="/https://lissen01.github.io/WordpressCV/wp-includes/js/wp-util.min.js?ver=5.9.3" id="wp-util-js"></script>
<script id="user-profile-js-extra">
var userProfileL10n = {"user_id":"0","nonce":"ba0fb96c71"};
</script>
<script id="user-profile-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-01-11 14:06:07+0000","generator":"GlotPress\/3.0.0-rc.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es_AR"},"Your new password has not been saved.":["Tu nueva contraseña no ha sido guardada"],"Show":["Mostrar"],"Hide":["Ocultar"],"Confirm use of weak password":["Confirma el uso de una contraseña débil."],"Hide password":["Ocultar contraseña"],"Show password":["Mostrar contraseña"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script src="/https://lissen01.github.io/WordpressCV/wp-admin/js/user-profile.min.js?ver=5.9.3" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>