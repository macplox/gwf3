<?php # PHmaster + drummachina

$lang = array(

	'pt_login' => 'Zaloguj do '.GWF_SITENAME,
	'title_login' => 'Zaloguj',
	
	'th_username' => 'Użytkownik',
	'th_password' => 'Hasło',
	'th_login' => 'Logowanie',
	'btn_login' => 'Logowanie',
	'btn_register' => 'Register',
	'btn_recovery' => 'Recovery',

	'err_login' => 'Taki użytkownik nie istnieje.',
	'err_login2' => 'Złe hasło. Pozostało Ci jeszcze %1$s prób zanim zostaniesz zablokowany na czas %2$s sekund.',
	'err_blocked' => 'Proszę poczekać %1$s sekund przed kolejną próbą.',

	'welcome' => 
		'Witamy na stronie '.GWF_SITENAME.', %1$s.<br/><br/>'.
		'Mamy nadzieję, że polubisz naszą stronę i miło spędzisz tu Swój czas.<br/>'.
		'W razeie pytań skontaktuj się z nami!',

	'welcome_back' => 
		'Witamy ponownie na stronie '.GWF_SITENAME.', %1$s.<br/><br/>'.
		'Ostatnio byłeś tutaj %2$s , a odwiedziłęś nas z IP: %3$s.',

	'logout_info' => 'Zostałeś wylogowany.',
//andmi conf - imo no sense to translate it - PHmaster
	# Admin Config
	'cfg_captcha' => 'Używaj Captcha?',	
	'cfg_max_tries' => 'Ilość prób logowania',	
	'cfg_try_exceed' => 'w tym przedziale czasowym',

	'info_no_cookie' => 'Twoja przeglądarka nie obsługuje cookies lub ma je wyłączone dla strony '.GWF_SITENAME.'. Cookies są wymagane dla poprawnego działania strony.',
	
	'th_bind_ip' => 'Ogranicz sesję do tego adresu IP',
	'tt_bind_ip' => 'Poprawka bezpieczeństwa zapobiegająca kradzieży cookies.',

	'err_failures' => 'Było %1$s nieudanych prób logowania co może oznaczać nieudany atak.',

	# v1.01 (login failures)
	'cfg_lf_cleanup_i' => 'Cleanup user failures after login?',
	'cfg_lf_cleanup_t' => 'Cleanup old failures after time',

	# v2.00 (login history)
	'msg_last_login' => 'Your last login was %1$s from %2$s (%3$s).<br/>You can also <a href="%4$s">review your login history here</a>.',
	'th_loghis_time' => 'Date',
	'th_loghis_ip' => 'IP',
	'th_hostname' => 'Hostname',

	# v2.01 (clear hist)
	'ft_clear' => 'Clear login history',
	'btn_clear' => 'Clear',
	'msg_cleared' => 'Your login history has been cleared.',
	'info_cleared' => 'Your login history was last cleared at %1$s from this IP: %2$s / %3$s',

	# v2.02 (email alerts)
	'alert_subj' => GWF_SITENAME.': Login failures',
	'alert_body' =>
		'Dear %s,'.PHP_EOL.
		PHP_EOL.
		'There was a failed login attempt from this IP: %s.'.PHP_EOL.
		PHP_EOL.
		'We just let you know.'.PHP_EOL.
		PHP_EOL.
		'Sincerly'.
		'The '.GWF_SITENAME.' script',
);

?>