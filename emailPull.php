<?php
# URL that generated this code:
# http://txt2re.com/index-php.php3?s=%3Ca%20href=%22mailto:tfr5029@psu.edu%22%3Etfr5029@psu.edu%3C/a%3E%3Cbr%3E&4

$txt='<a href="mailto:tfr5029@psu.edu">tfr5029@psu.edu</a><br>';

$re1='.*?';	# Non-greedy match on filler
$re2='[\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7}';	# Uninteresting: email
$re3='.*?';	# Non-greedy match on filler
$re4='([\\w-+]+(?:\\.[\\w-+]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})';	# Email Address 1

if ($c=preg_match_all ("/".$re1.$re2.$re3.$re4."/is", $txt, $matches))
{
    $email1=$matches[1][0];
    print "($email1) \n";
}
?>