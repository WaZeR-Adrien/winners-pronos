<?php
function redirect($url){
	// Redirection vers une page souhaité
	echo ('<script>'.
	'document.location.href="'.$url.'";'.
	'</script>');
}

function remplaceCaracteresSpeciaux($str) {
    $str = mb_strtolower($str);
    $str = utf8_decode($str);
    $str = strtr($str, utf8_decode('àâäãáåçéèêëíìîïñóòôöõøùúûüýÿ'), 'aaaaaaceeeeiiiinoooooouuuuyy');
    $str = preg_replace('`[^a-z0-9]+`', '-', $str);
    $str = trim($str, '-');
    return $str;
}

function us2fr($date){
}