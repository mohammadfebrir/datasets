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
 * IXR_ClientMulticall
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_ClientMulticall extends IXR_Client
{
    var $calls = array();

	/**
	 * PHP5 constructor.
	 */
    function __construct( $server, $path = false, $port = 80 )
    {
        parent::IXR_Client($server, $path, $port);
        $this->useragent = 'The Incutio XML-RPC PHP Library (multicall client)';
    }

	/**
	 * PHP4 constructor.
	 */
	public function IXR_ClientMulticall( $server, $path = false, $port = 80 ) {
		self::__construct( $server, $path, $port );
	}

	/**
	 * @since 1.5.0
	 * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
	 *              to the function signature.
	 */
    function addCall( ...$args )
    {
        $methodName = array_shift($args);
        $struct = array(
            'methodName' => $methodName,
            'params' => $args
        );
        $this->calls[] = $struct;
    }

	/**
	 * @since 1.5.0
	 * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
	 *              to the function signature.
	 *
	 * @return bool
	 */
    function query( ...$args )
    {
        // Prepare multicall, then call the parent::query() method
        return parent::query('system.multicall', $this->calls);
    }
}
