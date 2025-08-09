

<?php // obf
/** // obf
 * Atom Syndication Format PHP Library // obf
 * // obf
 * @package AtomLib // obf
 * @link http://code.google.com/p/phpatomlib/ // obf
 * // obf
 * @author Elias Torres <elias@torrez.us> // obf
 * @version 0.4 // obf
 * @since 2.3.0 // obf
 */ // obf

/** // obf
 * Structure that store common Atom Feed Properties // obf
 * // obf
 * @package AtomLib // obf
 */ // obf
class AtomFeed { // obf
	/** // obf
	 * Stores Links // obf
	 * @var array // obf
	 * @access public // obf
	 */ // obf
    var $v_sldwh = array(); // obf
    /** // obf
     * Stores Categories // obf
     * @var array // obf
     * @access public // obf
     */ // obf
    var $v_wrikf = array(); // obf
	/** // obf
	 * Stores Entries // obf
	 * // obf
	 * @var array // obf
	 * @access public // obf
	 */ // obf
    var $v_xgawn = array(); // obf
} // obf

/** // obf
 * Structure that store Atom Entry Properties // obf
 * // obf
 * @package AtomLib // obf
 */ // obf
class AtomEntry { // obf
	/** // obf
	 * Stores Links // obf
	 * @var array // obf
	 * @access public // obf
	 */ // obf
    var $v_sldwh = array(); // obf
    /** // obf
     * Stores Categories // obf
     * @var array // obf
	 * @access public // obf
     */ // obf
    var $v_wrikf = array(); // obf
} // obf

/** // obf
 * AtomLib Atom Parser API // obf
 * // obf
 * @package AtomLib // obf
 */ // obf
class AtomParser { // obf

    var $v_dlpix = 'http://www.w3.org/2005/Atom'; // obf
    var $v_sioih = array('content','summary','title','subtitle','rights'); // obf
    var $v_wymoe = array('id','updated','published','draft'); // obf

    var $v_dqpao = false; // obf

    var $v_ukgcc = 0; // obf
    var $v_lfxid = 2; // obf
    var $v_lnkjx; // obf
    var $v_hbcxd = array(); // obf
    var $v_fxpnh = array(); // obf
    var $v_ztedh = array(); // obf
    var $v_osdyo = array(); // obf
    var $v_lxuty = false; // obf
    var $v_pcmgu = false; // obf
    var $v_jnaxc = true; // obf
    var $v_fgglw = false; // obf

    var $v_rcpel = "php://input"; // obf

    var $v_saclh; // obf
    var $v_fdmol; // obf
    var $v_tbamh; // obf
    var $v_lenqs; // obf
    var $v_bgacy; // obf
    var $v_evtxa; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct() { // obf

        $v_meexc->feed = new AtomFeed(); // obf
        $v_meexc->current = null; // obf
        $v_meexc->map_attrs_func = array( __CLASS__, 'map_attrs' ); // obf
        $v_meexc->map_xmlns_func = array( __CLASS__, 'map_xmlns' ); // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function AtomParser() { // obf
		self::__construct(); // obf
	} // obf

	/** // obf
	 * Map attributes to key="val" // obf
	 * // obf
	 * @param string $v_pjqpe Key // obf
	 * @param string $v_jugur Value // obf
	 * @return string // obf
	 */ // obf
	public static function map_attrs($v_pjqpe, $v_jugur) { // obf
		return "$v_pjqpe=\"$v_jugur\""; // obf
	} // obf

	/** // obf
	 * Map XML namespace to string. // obf
	 * // obf
	 * @param indexish $v_bjofe XML Namespace element index // obf
	 * @param array $v_lkhxl Two-element array pair. [ 0 => {namespace}, 1 => {url} ] // obf
	 * @return string 'xmlns="{url}"' or 'xmlns:{namespace}="{url}"' // obf
	 */ // obf
	public static function map_xmlns($v_bjofe, $v_lkhxl) { // obf
		$v_gzgyd = "xmlns"; // obf
		if( 0 < strlen($v_lkhxl[0]) ) { // obf
			$v_gzgyd .= ":{$v_lkhxl[0]}"; // obf
		} // obf
		return "{$v_gzgyd}=\"{$v_lkhxl[1]}\""; // obf
	} // obf

    function _p($v_cejmc) { // obf
        if($v_meexc->debug) { // obf
            print str_repeat(" ", $v_meexc->depth * $v_meexc->indent) . $v_cejmc ."\n"; // obf
        } // obf
    } // obf

    function error_handler($v_idqqt, $v_aymzf, $v_ddvbq, $v_fabac) { // obf
        $v_meexc->error = $v_aymzf; // obf
    } // obf

    function parse() { // obf

        set_error_handler(array(&$v_meexc, 'error_handler')); // obf

        array_unshift($v_meexc->ns_contexts, array()); // obf

        if ( ! function_exists( 'xml_parser_create_ns' ) ) { // obf
        	trigger_error( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) ); // obf
        	return false; // obf
        } // obf

        $v_vabor = xml_parser_create_ns(); // obf
        xml_set_element_handler($v_vabor, array($v_meexc, "start_element"), array($v_meexc, "end_element")); // obf
        xml_parser_set_option($v_vabor,XML_OPTION_CASE_FOLDING,0); // obf
        xml_parser_set_option($v_vabor,XML_OPTION_SKIP_WHITE,0); // obf
        xml_set_character_data_handler($v_vabor, array($v_meexc, "cdata")); // obf
        xml_set_default_handler($v_vabor, array($v_meexc, "_default")); // obf
        xml_set_start_namespace_decl_handler($v_vabor, array($v_meexc, "start_ns")); // obf
        xml_set_end_namespace_decl_handler($v_vabor, array($v_meexc, "end_ns")); // obf

        $v_meexc->content = ''; // obf

        $v_qawhb = true; // obf

        $v_plyao = fopen($v_meexc->FILE, "r"); // obf
        while ($v_kvohn = fread($v_plyao, 4096)) { // obf
            if($v_meexc->debug) $v_meexc->content .= $v_kvohn; // obf

            if(!xml_parse($v_vabor, $v_kvohn, feof($v_plyao))) { // obf
                /* translators: 1: Error message, 2: Line number. */ // obf
                trigger_error(sprintf(__('XML Error: %1$v_eofqc at line %2$v_eofqc')."\n", // obf
                    xml_error_string(xml_get_error_code($v_vabor)), // obf
                    xml_get_current_line_number($v_vabor))); // obf
                $v_qawhb = false; // obf
                break; // obf
            } // obf
        } // obf
        fclose($v_plyao); // obf

        xml_parser_free($v_vabor); // obf
        unset($v_vabor); // obf

        restore_error_handler(); // obf

        return $v_qawhb; // obf
    } // obf

    function start_element($v_vabor, $v_shxou, $v_khlot) { // obf

        $v_vlkjb = explode(":", $v_shxou); // obf
        $v_uhosr        = array_pop($v_vlkjb); // obf

        switch($v_shxou) { // obf
            case $v_meexc->NS . ':feed': // obf
                $v_meexc->current = $v_meexc->feed; // obf
                break; // obf
            case $v_meexc->NS . ':entry': // obf
                $v_meexc->current = new AtomEntry(); // obf
                break; // obf
        }; // obf

        $v_meexc->_p("start_element('$v_shxou')"); // obf
        #$v_meexc->_p(print_r($v_meexc->ns_contexts,true)); // obf
        #$v_meexc->_p('current(' . $v_meexc->current . ')'); // obf

        array_unshift($v_meexc->ns_contexts, $v_meexc->ns_decls); // obf

        $v_meexc->depth++; // obf

        if(!empty($v_meexc->in_content)) { // obf

            $v_meexc->content_ns_decls = array(); // obf

            if($v_meexc->is_html || $v_meexc->is_text) // obf
                trigger_error("Invalid content in element found. Content must not be of type text or html if it contains markup."); // obf

            $v_zcdwk = array(); // obf

            // resolve prefixes for attributes // obf
            foreach($v_khlot as $v_ggidg => $v_vnynm) { // obf
                $v_zubvh = $v_meexc->ns_to_prefix($v_ggidg, true); // obf
                $v_zcdwk[$v_zubvh[1]] = $v_meexc->xml_escape($v_vnynm); // obf
            } // obf

            $v_zipex = join(' ', array_map($v_meexc->map_attrs_func, array_keys($v_zcdwk), array_values($v_zcdwk))); // obf
            if(strlen($v_zipex) > 0) { // obf
                $v_zipex = " " . $v_zipex; // obf
            } // obf

            $v_zubvh = $v_meexc->ns_to_prefix($v_shxou); // obf

            if(!$v_meexc->is_declared_content_ns($v_zubvh[0])) { // obf
                array_push($v_meexc->content_ns_decls, $v_zubvh[0]); // obf
            } // obf

            $v_hznoh = ''; // obf
            if(count($v_meexc->content_ns_decls) > 0) { // obf
                array_unshift($v_meexc->content_ns_contexts, $v_meexc->content_ns_decls); // obf
                $v_hznoh .= join(' ', array_map($v_meexc->map_xmlns_func, array_keys($v_meexc->content_ns_contexts[0]), array_values($v_meexc->content_ns_contexts[0]))); // obf
                if(strlen($v_hznoh) > 0) { // obf
                    $v_hznoh = " " . $v_hznoh; // obf
                } // obf
            } // obf

            array_push($v_meexc->in_content, array($v_uhosr, $v_meexc->depth, "<". $v_zubvh[1] ."{$v_hznoh}{$v_zipex}" . ">")); // obf

        } else if(in_array($v_uhosr, $v_meexc->ATOM_CONTENT_ELEMENTS) || in_array($v_uhosr, $v_meexc->ATOM_SIMPLE_ELEMENTS)) { // obf
            $v_meexc->in_content = array(); // obf
            $v_meexc->is_xhtml = $v_khlot['type'] == 'xhtml'; // obf
            $v_meexc->is_html = $v_khlot['type'] == 'html' || $v_khlot['type'] == 'text/html'; // obf
            $v_meexc->is_text = !in_array('type',array_keys($v_khlot)) || $v_khlot['type'] == 'text'; // obf
            $v_kulrl = $v_meexc->is_xhtml ? 'XHTML' : ($v_meexc->is_html ? 'HTML' : ($v_meexc->is_text ? 'TEXT' : $v_khlot['type'])); // obf

            if(in_array('src',array_keys($v_khlot))) { // obf
                $v_meexc->current->$v_uhosr = $v_khlot; // obf
            } else { // obf
                array_push($v_meexc->in_content, array($v_uhosr,$v_meexc->depth, $v_kulrl)); // obf
            } // obf
        } else if($v_uhosr == 'link') { // obf
            array_push($v_meexc->current->links, $v_khlot); // obf
        } else if($v_uhosr == 'category') { // obf
            array_push($v_meexc->current->categories, $v_khlot); // obf
        } // obf

        $v_meexc->ns_decls = array(); // obf
    } // obf

    function end_element($v_vabor, $v_shxou) { // obf

        $v_vlkjb = explode(":", $v_shxou); // obf
        $v_uhosr        = array_pop($v_vlkjb); // obf

        $v_ljihd = count($v_meexc->in_content); // obf

        # if we are *in* content, then let's proceed to serialize it // obf
        if(!empty($v_meexc->in_content)) { // obf
            # if we are ending the original content element // obf
            # then let's finalize the content // obf
            if($v_meexc->in_content[0][0] == $v_uhosr && // obf
                $v_meexc->in_content[0][1] == $v_meexc->depth) { // obf
                $v_vsnwv = $v_meexc->in_content[0][2]; // obf
                array_shift($v_meexc->in_content); // obf
                $v_fitjl = array(); // obf
                foreach($v_meexc->in_content as $v_nqslk) { // obf
                    if(count($v_nqslk) == 3) { // obf
                        array_push($v_fitjl, $v_nqslk[2]); // obf
                    } else { // obf
                        if($v_meexc->is_xhtml || $v_meexc->is_text) { // obf
                            array_push($v_fitjl, $v_meexc->xml_escape($v_nqslk)); // obf
                        } else { // obf
                            array_push($v_fitjl, $v_nqslk); // obf
                        } // obf
                    } // obf
                } // obf
                if(in_array($v_uhosr, $v_meexc->ATOM_CONTENT_ELEMENTS)) { // obf
                    $v_meexc->current->$v_uhosr = array($v_vsnwv, join('',$v_fitjl)); // obf
                } else { // obf
                    $v_meexc->current->$v_uhosr = join('',$v_fitjl); // obf
                } // obf
                $v_meexc->in_content = array(); // obf
            } else if($v_meexc->in_content[$v_ljihd-1][0] == $v_uhosr && // obf
                $v_meexc->in_content[$v_ljihd-1][1] == $v_meexc->depth) { // obf
                $v_meexc->in_content[$v_ljihd-1][2] = substr($v_meexc->in_content[$v_ljihd-1][2],0,-1) . "/>"; // obf
            } else { // obf
                # else, just finalize the current element's content // obf
                $v_bkeog = $v_meexc->ns_to_prefix($v_shxou); // obf
                array_push($v_meexc->in_content, array($v_uhosr, $v_meexc->depth, "</$v_bkeog[1]>")); // obf
            } // obf
        } // obf

        array_shift($v_meexc->ns_contexts); // obf

        $v_meexc->depth--; // obf

        if($v_shxou == ($v_meexc->NS . ':entry')) { // obf
            array_push($v_meexc->feed->entries, $v_meexc->current); // obf
            $v_meexc->current = null; // obf
        } // obf

        $v_meexc->_p("end_element('$v_shxou')"); // obf
    } // obf

    function start_ns($v_vabor, $v_maiso, $v_jlyvx) { // obf
        $v_meexc->_p("starting: " . $v_maiso . ":" . $v_jlyvx); // obf
        array_push($v_meexc->ns_decls, array($v_maiso,$v_jlyvx)); // obf
    } // obf

    function end_ns($v_vabor, $v_maiso) { // obf
        $v_meexc->_p("ending: #" . $v_maiso . "#"); // obf
    } // obf

    function cdata($v_vabor, $v_kvohn) { // obf
        $v_meexc->_p("data: #" . str_replace(array("\n"), array("\\n"), trim($v_kvohn)) . "#"); // obf
        if(!empty($v_meexc->in_content)) { // obf
            array_push($v_meexc->in_content, $v_kvohn); // obf
        } // obf
    } // obf

    function _default($v_vabor, $v_kvohn) { // obf
        # when does this gets called? // obf
    } // obf


    function ns_to_prefix($v_notbj, $v_emnfv=false) { // obf
        # split 'http://www.w3.org/1999/xhtml:div' into ('http','//www.w3.org/1999/xhtml','div') // obf
        $v_parxq = explode(":", $v_notbj); // obf

        # grab the last one (e.g 'div') // obf
        $v_shxou = array_pop($v_parxq); // obf

        if(!empty($v_parxq)) { // obf
            # re-join back the namespace component // obf
            $v_bgyrb = join(":",$v_parxq); // obf
            foreach($v_meexc->ns_contexts as $v_dfoui) { // obf
                foreach($v_dfoui as $v_xogej) { // obf
                    if($v_xogej[1] == $v_bgyrb && strlen($v_xogej[0]) > 0) { // obf
                        return array($v_xogej, "$v_xogej[0]:$v_shxou"); // obf
                    } // obf
                } // obf
            } // obf
        } // obf

        if($v_emnfv) { // obf
            return array(null, $v_shxou); // obf
        } else { // obf
            foreach($v_meexc->ns_contexts as $v_dfoui) { // obf
                foreach($v_dfoui as $v_xogej) { // obf
                    if(strlen($v_xogej[0]) == 0) { // obf
                        return array($v_xogej, $v_shxou); // obf
                    } // obf
                } // obf
            } // obf
        } // obf
    } // obf

    function is_declared_content_ns($v_rbhpi) { // obf
        foreach($v_meexc->content_ns_contexts as $v_dfoui) { // obf
            foreach($v_dfoui as $v_xogej) { // obf
                if($v_rbhpi == $v_xogej) { // obf
                    return true; // obf
                } // obf
            } // obf
        } // obf
        return false; // obf
    } // obf

    function xml_escape($v_evtxa) // obf
    { // obf
             return str_replace(array('&','"',"'",'<','>'), // obf
                array('&amp;','&quot;','&apos;','&lt;','&gt;'), // obf
                $v_evtxa ); // obf
    } // obf
} // obf