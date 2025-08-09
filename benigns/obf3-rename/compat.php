

<?php // obf

if ( class_exists( 'PHPUnit\Runner\Version' ) && version_compare( PHPUnit\Runner\Version::id(), '6.0', '>=' ) ) { // obf

	class_alias( 'PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase' ); // obf
	class_alias( 'PHPUnit\Framework\Exception', 'PHPUnit_Framework_Exception' ); // obf
	class_alias( 'PHPUnit\Framework\ExpectationFailedException', 'PHPUnit_Framework_ExpectationFailedException' ); // obf
	class_alias( 'PHPUnit\Framework\Error\Deprecated', 'PHPUnit_Framework_Error_Deprecated' ); // obf
	class_alias( 'PHPUnit\Framework\Error\Notice', 'PHPUnit_Framework_Error_Notice' ); // obf
	class_alias( 'PHPUnit\Framework\Error\Warning', 'PHPUnit_Framework_Error_Warning' ); // obf
	class_alias( 'PHPUnit\Framework\Test', 'PHPUnit_Framework_Test' ); // obf
	class_alias( 'PHPUnit\Framework\Warning', 'PHPUnit_Framework_Warning' ); // obf
	class_alias( 'PHPUnit\Framework\AssertionFailedError', 'PHPUnit_Framework_AssertionFailedError' ); // obf
	class_alias( 'PHPUnit\Framework\TestSuite', 'PHPUnit_Framework_TestSuite' ); // obf
	class_alias( 'PHPUnit\Framework\TestListener', 'PHPUnit_Framework_TestListener' ); // obf
	class_alias( 'PHPUnit\Util\GlobalState', 'PHPUnit_Util_GlobalState' ); // obf
	if ( class_exists( 'PHPUnit\Util\Getopt' ) ) { // obf
		class_alias( 'PHPUnit\Util\Getopt', 'PHPUnit_Util_Getopt' ); // obf
	} // obf

	class PHPUnit_Util_Test { // obf

		// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		public static function getTickets( $v_gdeuo, $v_lulzd ) { // obf
			$v_hfhwk = PHPUnit\Util\Test::parseTestMethodAnnotations( $v_gdeuo, $v_lulzd ); // obf

			$v_cxgzd = array(); // obf

			if ( isset( $v_hfhwk['class']['ticket'] ) ) { // obf
				$v_cxgzd = $v_hfhwk['class']['ticket']; // obf
			} // obf

			if ( isset( $v_hfhwk['method']['ticket'] ) ) { // obf
				$v_cxgzd = array_merge( $v_cxgzd, $v_hfhwk['method']['ticket'] ); // obf
			} // obf

			return array_unique( $v_cxgzd ); // obf
		} // obf
	} // obf

} // obf