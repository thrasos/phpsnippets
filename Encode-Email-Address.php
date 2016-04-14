//With this snippet, you can encode any email address into HTML entities so that spam bots do not find it. 

function encode_email($email='info@domain.com', $linkText='Contact Us', $attrs ='class="emailencoder"' )
{
	// remplazar aroba y puntos
	$email = str_replace('@', '&#64;', $email);
	$email = str_replace('.', '&#46;', $email);
	$email = str_split($email, 5);

	$linkText = str_replace('@', '&#64;', $linkText);
	$linkText = str_replace('.', '&#46;', $linkText);
	$linkText = str_split($linkText, 5);
	
	$part1 = '<a href="ma';
	$part2 = 'ilto&#58;';
	$part3 = '" '. $attrs .' >';
	$part4 = '</a>';

	$encoded = '<script type="text/javascript">';
	$encoded .= "document.write('$part1');";
	$encoded .= "document.write('$part2');";
	foreach($email as $e)
	{
			$encoded .= "document.write('$e');";
	}
	$encoded .= "document.write('$part3');";
	foreach($linkText as $l)
	{
			$encoded .= "document.write('$l');";
	}
	$encoded .= "document.write('$part4');";
	$encoded .= '</script>';

	return $encoded;
}
