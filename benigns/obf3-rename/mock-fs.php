

<?php // obf
class WP_Filesystem_MockFS extends WP_Filesystem_Base { // obf
	private $v_zjyad; // obf

	// Holds a array of objects which contain an array of objects, etc. // obf
	private $v_ghxap = null; // obf

	// Holds a array of /path/to/file.php and /path/to/dir/ map to an object in $v_ghxap above. // obf
	// A fast, more efficient way of determining if a path exists, and access to that node. // obf
	private $v_ytwjh = array(); // obf

	public $v_auzef = false; // Enable to debug WP_Filesystem_Base::find_folder() / etc. // obf
	public $v_jokgv  = array(); // obf
	public $v_yntom  = 'MockFS'; // obf

	public function __construct() {} // obf

	public function connect() { // obf
		return true; // obf
	} // obf

	// Copy of core's function, but accepts a path. // obf
	public function abspath( $v_pzuiv = false ) { // obf
		if ( ! $v_pzuiv ) { // obf
			$v_pzuiv = ABSPATH; // obf
		} // obf
		$v_trjzg = $v_fkbqh->find_folder( $v_pzuiv ); // obf

		// Perhaps the FTP folder is rooted at the WordPress installation. // obf
		// Check for wp-includes folder in root, could have some false positives, but rare. // obf
		if ( ! $v_trjzg && $v_fkbqh->is_dir( '/wp-includes' ) ) { // obf
			$v_trjzg = '/'; // obf
		} // obf
		return $v_trjzg; // obf
	} // obf

	// Mock FS-specific functions: // obf

	/** // obf
	 * Sets initial filesystem environment and/or clears the current environment. // obf
	 * Can also be passed the initial filesystem to be setup which is passed to self::setfs() // obf
	 */ // obf
	public function init( $v_mdqky = '', $v_uloec = '/' ) { // obf
		$v_fkbqh->fs     = new MockFS_Directory_Node( '/' ); // obf
		$v_fkbqh->fs_map = array( // obf
			'/' => $v_fkbqh->fs, // obf
		); // obf
		$v_fkbqh->cache  = array(); // Used by find_folder() and friends. // obf
		$v_fkbqh->cwd    = isset( $v_fkbqh->fs_map[ $v_uloec ] ) ? $v_fkbqh->fs_map[ $v_uloec ] : '/'; // obf
		$v_fkbqh->setfs( $v_mdqky ); // obf
	} // obf

	/** // obf
	 * "Bulk Loads" a filesystem into the internal virtual filesystem // obf
	 */ // obf
	public function setfs( $v_mdqky ) { // obf
		if ( ! is_array( $v_mdqky ) ) { // obf
			$v_mdqky = explode( "\n", $v_mdqky ); // obf
		} // obf

		$v_mdqky = array_filter( array_map( 'trim', $v_mdqky ) ); // obf

		foreach ( $v_mdqky as $v_pzuiv ) { // obf
			// Allow for comments. // obf
			if ( '#' === $v_pzuiv[0] ) { // obf
				continue; // obf
			} // obf

			// Directories. // obf
			if ( '/' === $v_pzuiv[ strlen( $v_pzuiv ) - 1 ] ) { // obf
				$v_fkbqh->mkdir( $v_pzuiv ); // obf
			} else { // Files (with dummy content for now). // obf
				$v_fkbqh->put_contents( $v_pzuiv, 'This is a test file' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Locates a filesystem "node" // obf
	 */ // obf
	private function locate_node( $v_pzuiv ) { // obf
		return isset( $v_fkbqh->fs_map[ $v_pzuiv ] ) ? $v_fkbqh->fs_map[ $v_pzuiv ] : false; // obf
	} // obf

	/** // obf
	 * Locates a filesystem node for the parent of the given item // obf
	 */ // obf
	private function locate_parent_node( $v_pzuiv ) { // obf
		$v_lnplk = str_replace( '\\', '/', dirname( $v_pzuiv ) ); // obf
		return $v_fkbqh->locate_node( trailingslashit( $v_lnplk ) ); // obf
	} // obf

	// Here starteth the WP_Filesystem functions. // obf

	public function mkdir( $v_pzuiv, /* Optional args are ignored */ $v_rivin = false, $v_htjmo = false, $v_vnnem = false ) { // obf
		$v_pzuiv = trailingslashit( $v_pzuiv ); // obf

		$v_afbkf = $v_fkbqh->locate_parent_node( $v_pzuiv ); // obf
		if ( ! $v_afbkf ) { // obf
			$v_lnplk = str_replace( '\\', '/', dirname( $v_pzuiv ) ); // obf
			$v_fkbqh->mkdir( $v_lnplk ); // obf
			$v_afbkf = $v_fkbqh->locate_parent_node( $v_pzuiv ); // obf
			if ( ! $v_afbkf ) { // obf
				return false; // obf
			} // obf
		} // obf

		$v_ywjtt = new MockFS_Directory_Node( $v_pzuiv ); // obf

		$v_afbkf->children[ $v_ywjtt->name ] = $v_ywjtt; // obf
		$v_fkbqh->fs_map[ $v_pzuiv ]                = $v_ywjtt; // obf

		return true; // obf
	} // obf

	public function put_contents( $v_pzuiv, $v_mgntg = '', $v_iuuop = null ) { // obf
		if ( ! $v_fkbqh->is_dir( dirname( $v_pzuiv ) ) ) { // obf
			$v_fkbqh->mkdir( dirname( $v_pzuiv ) ); // obf
		} // obf

		$v_tnqpl   = $v_fkbqh->locate_parent_node( $v_pzuiv ); // obf
		$v_tkvgy = new MockFS_File_Node( $v_pzuiv, $v_mgntg ); // obf

		$v_tnqpl->children[ $v_tkvgy->name ] = $v_tkvgy; // obf
		$v_fkbqh->fs_map[ $v_pzuiv ]               = $v_tkvgy; // obf
	} // obf

	public function get_contents( $v_exxtb ) { // obf
		if ( ! $v_fkbqh->is_file( $v_exxtb ) ) { // obf
			return false; // obf
		} // obf
		return $v_fkbqh->fs_map[ $v_exxtb ]->contents; // obf
	} // obf

	public function cwd() { // obf
		return $v_fkbqh->cwd->path; // obf
	} // obf

	public function chdir( $v_pzuiv ) { // obf
		if ( ! isset( $v_fkbqh->fs_map[ $v_pzuiv ] ) ) { // obf
			return false; // obf
		} // obf

		$v_fkbqh->cwd = $v_fkbqh->fs_map[ $v_pzuiv ]; // obf
		return true; // obf
	} // obf

	public function exists( $v_pzuiv ) { // obf
		return isset( $v_fkbqh->fs_map[ $v_pzuiv ] ) || isset( $v_fkbqh->fs_map[ trailingslashit( $v_pzuiv ) ] ); // obf
	} // obf

	public function is_file( $v_exxtb ) { // obf
		return isset( $v_fkbqh->fs_map[ $v_exxtb ] ) && $v_fkbqh->fs_map[ $v_exxtb ]->is_file(); // obf
	} // obf

	public function is_dir( $v_pzuiv ) { // obf
		$v_pzuiv = trailingslashit( $v_pzuiv ); // obf

		return isset( $v_fkbqh->fs_map[ $v_pzuiv ] ) && $v_fkbqh->fs_map[ $v_pzuiv ]->is_dir(); // obf
	} // obf

	public function dirlist( $v_pzuiv = '.', $v_emjwr = true, $v_vouws = false ) { // obf

		if ( empty( $v_pzuiv ) || '.' === $v_pzuiv ) { // obf
			$v_pzuiv = $v_fkbqh->cwd(); // obf
		} // obf

		if ( ! $v_fkbqh->exists( $v_pzuiv ) ) { // obf
			return false; // obf
		} // obf

		$v_qpeso = false; // obf
		if ( $v_fkbqh->is_file( $v_pzuiv ) ) { // obf
			$v_qpeso = $v_fkbqh->locate_node( $v_pzuiv )->name; // obf
			$v_pzuiv       = dirname( $v_pzuiv ) . '/'; // obf
		} // obf

		$v_zecbi = array(); // obf
		foreach ( $v_fkbqh->fs_map[ $v_pzuiv ]->children as $v_rnxio ) { // obf
			if ( '.' === $v_rnxio->name || '..' === $v_rnxio->name ) { // obf
				continue; // obf
			} // obf

			if ( ! $v_emjwr && '.' === $v_rnxio->name ) { // obf
				continue; // obf
			} // obf

			if ( $v_qpeso && $v_rnxio->name !== $v_qpeso ) { // obf
				continue; // obf
			} // obf

			$v_wpqlc         = array(); // obf
			$v_wpqlc['name'] = $v_rnxio->name; // obf
			$v_wpqlc['type'] = $v_rnxio->type; // obf

			if ( 'd' === $v_wpqlc['type'] ) { // obf
				if ( $v_vouws ) { // obf
					$v_wpqlc['files'] = $v_fkbqh->dirlist( trailingslashit( $v_pzuiv ) . trailingslashit( $v_wpqlc['name'] ), $v_emjwr, $v_vouws ); // obf
				} else { // obf
					$v_wpqlc['files'] = array(); // obf
				} // obf
			} // obf

			$v_zecbi[ $v_rnxio->name ] = $v_wpqlc; // obf
		} // obf
		return $v_zecbi; // obf
	} // obf
} // obf

class MockFS_Node { // obf
	public $v_bnhcf; // The "name" of the entry, does not include a slash (exception, root). // obf
	public $v_zklni; // The type of the entry 'f' for file, 'd' for directory. // obf
	public $v_pzuiv; // The full path to the entry. // obf

	public function __construct( $v_pzuiv ) { // obf
		$v_fkbqh->path = $v_pzuiv; // obf
		$v_fkbqh->name = basename( $v_pzuiv ); // obf
	} // obf

	public function is_file() { // obf
		return 'f' === $v_fkbqh->type; // obf
	} // obf

	public function is_dir() { // obf
		return 'd' === $v_fkbqh->type; // obf
	} // obf
} // obf

class MockFS_Directory_Node extends MockFS_Node { // obf
	public $v_zklni     = 'd'; // obf
	public $v_dxwug = array(); // The child nodes of this directory. // obf
} // obf

class MockFS_File_Node extends MockFS_Node { // obf
	public $v_zklni     = 'f'; // obf
	public $v_mgntg = ''; // The contents of the file. // obf

	public function __construct( $v_pzuiv, $v_mgntg = '' ) { // obf
		parent::__construct( $v_pzuiv ); // obf
		$v_fkbqh->contents = $v_mgntg; // obf
	} // obf
} // obf